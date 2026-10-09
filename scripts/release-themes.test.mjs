// node --test scripts/release-themes.test.mjs — offline: gh is a fake, zips are made-up bytes.
import { test } from "node:test";
import assert from "node:assert/strict";
import { mkdirSync, mkdtempSync, readdirSync, readFileSync, rmSync, writeFileSync } from "node:fs";
import { tmpdir } from "node:os";
import { join } from "node:path";
import { fileURLToPath } from "node:url";
import { assetUrl, conflicts, planRelease, publishedSha256, release, releasesJson, releaseTag, sha256, themeVersion } from "./release-themes.mjs";

const THEMES = fileURLToPath(new URL("../themes/", import.meta.url));
const css = (v) => `/*\nTheme Name: Demo Theme\nVersion: ${v}\nText Domain: demo\n*/\nbody{}`;

test("version and tag come from style.css: <slug>-v<Version>, x.y.z only", () => {
  assert.equal(themeVersion(css("1.2.3")), "1.2.3");
  for (const bad of ["1.0", "v1.0.0", "1.0.0-beta", "1.0.0/../x", ""]) assert.throws(() => themeVersion(css(bad), "demo"), /demo: style.css Version must look like 1\.2\.3/, bad);
  assert.throws(() => themeVersion("body{}", "demo"), /found none/);
  assert.equal(releaseTag("kenchiku-grid", "1.0.0"), "kenchiku-grid-v1.0.0");
  assert.equal(assetUrl("kenchiku-grid", "1.0.0"), "https://github.com/oberonlai/shippress-themes/releases/download/kenchiku-grid-v1.0.0/kenchiku-grid.zip");
});

test("every theme in the repo has a releasable version", () => {
  for (const s of readdirSync(THEMES)) assert.match(themeVersion(readFileSync(join(THEMES, s, "style.css"), "utf8"), s), /^\d+\.\d+\.\d+$/);
});

test("plan: new version → create, half-done release → upload, same bytes → keep, other bytes → conflict", () => {
  const themes = [
    { slug: "a", version: "1.0.0", sha256: "aa" }, { slug: "b", version: "1.0.0", sha256: "bb" },
    { slug: "c", version: "2.0.0", sha256: "cc" }, { slug: "d", version: "1.1.0", sha256: "dd" },
  ];
  const plan = planRelease(themes, { "b-v1.0.0": { sha256: null }, "c-v2.0.0": { sha256: "cc" }, "d-v1.1.0": { sha256: "old" } });
  assert.deepEqual(plan.map((s) => [s.tag, s.action]), [["a-v1.0.0", "create"], ["b-v1.0.0", "upload"], ["c-v2.0.0", "keep"], ["d-v1.1.0", "conflict"]]);
  const msgs = conflicts(plan);
  assert.equal(msgs.length, 1);
  assert.match(msgs[0], /^d: version 1\.1\.0 is already released \(d-v1\.1\.0\) with different files \(published old, built dd\)\. Bump Version in themes\/d\/style\.css/);
});

test("releases.json: sorted, one immutable URL + sha256 per theme", () => {
  const j = releasesJson([{ slug: "z", name: "Z", version: "1.0.0", sha256: "1".repeat(64), size: 3 }, { slug: "a", name: "A", version: "2.1.0", sha256: "2".repeat(64), size: 4 }], "abc123");
  assert.deepEqual(j, {
    schema: 1, repo: "oberonlai/shippress-themes", commit: "abc123",
    themes: [
      { slug: "a", name: "A", version: "2.1.0", tag: "a-v2.1.0", url: "https://github.com/oberonlai/shippress-themes/releases/download/a-v2.1.0/a.zip", sha256: "2".repeat(64), size: 4 },
      { slug: "z", name: "Z", version: "1.0.0", tag: "z-v1.0.0", url: "https://github.com/oberonlai/shippress-themes/releases/download/z-v1.0.0/z.zip", sha256: "1".repeat(64), size: 3 },
    ],
  });
  assert.equal("commit" in releasesJson([]), false);
});

/** A fake gh: releases = tag → {slug.zip: bytes}; records every call. */
function fakeGh(releases) {
  const calls = [];
  const gh = (args) => {
    calls.push(args);
    const [, verb, tag] = args;
    if (verb === "view") return releases[tag] ? { code: 0, stdout: JSON.stringify({ assets: Object.keys(releases[tag]).map((name) => ({ name })) }), stderr: "" } : { code: 1, stdout: "", stderr: "release not found\n" };
    if (verb === "download") { const name = args[args.indexOf("--pattern") + 1]; writeFileSync(join(args[args.indexOf("--dir") + 1], name), releases[tag][name]); return { code: 0, stdout: "", stderr: "" }; }
    if (verb === "create") { releases[tag] = { [args[3].split("/").pop()]: readFileSync(args[3]) }; return { code: 0, stdout: "", stderr: "" }; }
    if (verb === "upload") { if (releases[tag][args[3].split("/").pop()]) return { code: 1, stdout: "", stderr: "asset exists" }; releases[tag][args[3].split("/").pop()] = readFileSync(args[3]); return { code: 0, stdout: "", stderr: "" }; }
    throw new Error(`unexpected gh ${args.join(" ")}`);
  };
  return { gh, calls };
}

test("publishedSha256: no release, release without the zip, the zip's hash; other gh errors are not 'not released'", () => {
  const tmp = mkdtempSync(join(tmpdir(), "rel-sha-"));
  try {
    const { gh } = fakeGh({ "x-v1.0.0": { "x.zip": Buffer.from("PK zip") }, "y-v1.0.0": {} });
    assert.equal(publishedSha256(gh, "w-v1.0.0", "w", tmp), undefined);
    assert.equal(publishedSha256(gh, "y-v1.0.0", "y", tmp), null);
    assert.equal(publishedSha256(gh, "x-v1.0.0", "x", tmp), sha256(Buffer.from("PK zip")));
    const down = () => ({ code: 1, stdout: "", stderr: "HTTP 502: Bad Gateway" });
    assert.throws(() => publishedSha256(down, "x-v1.0.0", "x", tmp), /gh release view x-v1\.0\.0 failed: HTTP 502/);
    assert.deepEqual(readdirSync(tmp), [], "downloads cleaned up");
  } finally { rmSync(tmp, { recursive: true, force: true }); }
});

/** A repo root with themes/<slug>/style.css and dist/<slug>.zip. */
function fixture(themes) {
  const root = mkdtempSync(join(tmpdir(), "rel-root-"));
  const dist = join(root, "dist");
  mkdirSync(dist);
  for (const [slug, version, bytes] of themes) {
    mkdirSync(join(root, "themes", slug), { recursive: true });
    writeFileSync(join(root, "themes", slug, "style.css"), css(version));
    writeFileSync(join(dist, `${slug}.zip`), bytes);
  }
  return { root, dist };
}

test("release: check mode never writes to GitHub; publish creates new versions, never re-uploads, writes releases.json", () => {
  const { root, dist } = fixture([["a", "1.0.0", "PK a1"], ["b", "1.0.0", "PK b1"]]);
  try {
    const { gh, calls } = fakeGh({ "b-v1.0.0": { "b.zip": Buffer.from("PK b1") } });
    const plan = release({ root, dist, gh, log: () => {} });
    assert.deepEqual(plan.map((s) => s.action), ["create", "keep"]);
    assert.ok(calls.every((c) => ["view", "download"].includes(c[1])), "check mode only reads");
    release({ root, dist, gh, publish: true, commit: "c0ffee", log: () => {} });
    const create = calls.find((c) => c[1] === "create");
    assert.deepEqual(create.slice(0, 4), ["release", "create", "a-v1.0.0", join(dist, "a.zip")]);
    assert.ok(create.includes("--latest=false") && create.includes("c0ffee"));
    assert.equal(calls.filter((c) => c[1] === "upload" || c.includes("--clobber")).length, 0);
    const j = JSON.parse(readFileSync(join(dist, "releases.json"), "utf8"));
    assert.deepEqual(j.themes.map((t) => [t.tag, t.sha256]), [["a-v1.0.0", sha256(Buffer.from("PK a1"))], ["b-v1.0.0", sha256(Buffer.from("PK b1"))]]);
    // A second run (same commit pushed again) has nothing to do.
    calls.length = 0;
    assert.deepEqual(release({ root, dist, gh, publish: true, log: () => {} }).map((s) => s.action), ["keep", "keep"]);
    assert.ok(calls.every((c) => ["view", "download"].includes(c[1])));
  } finally { rmSync(root, { recursive: true, force: true }); }
});

test("release: a changed theme with the same version fails before anything is published", () => {
  const { root, dist } = fixture([["a", "1.0.0", "PK a-new"], ["b", "2.0.0", "PK b2"]]);
  try {
    const { gh, calls } = fakeGh({ "a-v1.0.0": { "a.zip": Buffer.from("PK a-old") } });
    assert.throws(() => release({ root, dist, gh, publish: true, log: () => {} }), /a: version 1\.0\.0 is already released .* Bump Version in themes\/a\/style\.css/);
    assert.equal(calls.filter((c) => c[1] === "create" || c[1] === "upload").length, 0, "b-v2.0.0 was not published either");
    assert.deepEqual(readdirSync(dist).sort(), ["a.zip", "b.zip"], "no releases.json for a failed run");
  } finally { rmSync(root, { recursive: true, force: true }); }
});

test("release: completes a release that has no zip yet (upload without --clobber)", () => {
  const { root, dist } = fixture([["a", "1.0.0", "PK a1"]]);
  try {
    const { gh, calls } = fakeGh({ "a-v1.0.0": {} });
    release({ root, dist, gh, publish: true, log: () => {} });
    assert.deepEqual(calls.find((c) => c[1] === "upload"), ["release", "upload", "a-v1.0.0", join(dist, "a.zip")]);
  } finally { rmSync(root, { recursive: true, force: true }); }
});
