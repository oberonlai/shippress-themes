// node --test scripts/bump-released.test.mjs
import { test } from "node:test";
import assert from "node:assert/strict";
import { spawnSync } from "node:child_process";
import { mkdirSync, mkdtempSync, rmSync, writeFileSync, readFileSync } from "node:fs";
import { tmpdir } from "node:os";
import { join } from "node:path";
import { bump, bumpTexts, cssVersion, drift, nextPatch } from "./bump-released.mjs";

const CSS = "/*\nTheme Name: T\nVersion: 1.0.1\n*/\nbody{}\n";
const README = "=== T ===\nStable tag: 1.0.1\n\n== Changelog ==\n= 1.0.1 =\n* x\n";

test("nextPatch / cssVersion", () => {
  assert.equal(nextPatch("1.0.9"), "1.0.10");
  assert.throws(() => nextPatch("1.0"));
  assert.equal(cssVersion(CSS), "1.0.1");
});

test("bumpTexts sets style.css Version, readme Stable tag + changelog entry, theme-meta version", () => {
  const t = bumpTexts({ css: CSS, readme: README, meta: '{"slug":"t","version":"1.0.1"}' }, "1.0.1", "1.0.2", "Updated theme files (a.php).");
  assert.equal(cssVersion(t.css), "1.0.2");
  assert.match(t.readme, /Stable tag: 1\.0\.2/);
  assert.match(t.readme, /== Changelog ==\n= 1\.0\.2 =\n\* Updated theme files \(a\.php\)\.\n\n= 1\.0\.1 =/);
  assert.equal(JSON.parse(t.meta).version, "1.0.2");
  assert.match(bumpTexts({ css: CSS, readme: "=== T ===\n", meta: null }, "1.0.1", "1.0.2", "n").readme, /== Changelog ==\n= 1\.0\.2 =/);
});

test("drift: a released version with changed files is found and bumped; screenshots and the README shots section are ignored", () => {
  const root = mkdtempSync(join(tmpdir(), "bump-")); const g = (...a) => spawnSync("git", ["-C", root, ...a], { encoding: "utf8" });
  try {
    const d = join(root, "themes/t"); mkdirSync(join(d, "screenshots"), { recursive: true });
    writeFileSync(join(d, "style.css"), CSS); writeFileSync(join(d, "readme.txt"), README); writeFileSync(join(d, "theme-meta.json"), '{"slug":"t","version":"1.0.1"}\n');
    writeFileSync(join(d, "README.md"), "# T\n<!-- screenshots:start -->\nold\n<!-- screenshots:end -->\n"); writeFileSync(join(d, "screenshots/a.webp"), "a");
    g("init", "-q"); g("add", "-A"); g("-c", "user.email=a@b", "-c", "user.name=a", "commit", "-qm", "1"); g("tag", "t-v1.0.1");
    writeFileSync(join(d, "screenshots/a.webp"), "b"); writeFileSync(join(d, "README.md"), "# T\n<!-- screenshots:start -->\nx\n<!-- screenshots:end -->\n");
    assert.deepEqual(drift(root, ["t"], true), []);
    writeFileSync(join(d, "functions.php"), "<?php\n");
    const [x] = drift(root, ["t"], true);
    assert.deepEqual(x.files, ["functions.php"]);
    assert.equal(bump(root, x), "1.0.2");
    assert.equal(cssVersion(readFileSync(join(d, "style.css"), "utf8")), "1.0.2");
    assert.deepEqual(drift(root, ["t"], true), []); // 1.0.2 is not released yet
  } finally { rmSync(root, { recursive: true, force: true }); }
});
