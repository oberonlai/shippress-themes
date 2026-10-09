// node --test scripts/check-themes.test.mjs
import { test } from "node:test";
import assert from "node:assert/strict";
import { cpSync, mkdtempSync, readdirSync, readFileSync, rmSync, writeFileSync } from "node:fs";
import { tmpdir } from "node:os";
import { join } from "node:path";
import { fileURLToPath } from "node:url";
import { buildIndex, checkTheme, styleHeader } from "./check-themes.mjs";

const THEMES = fileURLToPath(new URL("../themes/", import.meta.url));
const slugs = readdirSync(THEMES).sort();

test("every theme in the repo passes", () => {
  for (const s of slugs) assert.deepEqual(checkTheme(join(THEMES, s), s), [], s);
});

test("index.json is generated from the theme-meta.json files", () => {
  const metas = slugs.map((s) => JSON.parse(readFileSync(join(THEMES, s, "theme-meta.json"), "utf8")));
  const index = JSON.parse(readFileSync(new URL("../index.json", import.meta.url), "utf8"));
  assert.deepEqual(index, buildIndex(metas));
  for (const t of index.themes) assert.equal(t.downloadUrl, `https://github.com/oberonlai/shippress-themes/releases/download/themes/${t.slug}.zip`);
});

test("styleHeader reads the style.css comment", () => {
  assert.deepEqual(styleHeader("/*\nTheme Name: X\nText Domain: x\n*/\nbody{}"), { "Theme Name": "X", "Text Domain": "x" });
});

test("catches broken themes", () => {
  const dir = mkdtempSync(join(tmpdir(), "theme-check-"));
  try {
    const t = join(dir, slugs[0]);
    cpSync(join(THEMES, slugs[0]), t, { recursive: true });
    const write = (p, s) => writeFileSync(join(t, p), s);
    const css = readFileSync(join(t, "style.css"), "utf8");
    write("style.css", css.replace(/License: .*/, "License: Proprietary"));
    rmSync(join(t, "templates/tag.html"));
    write("templates/category.html", readFileSync(join(t, "templates/front-page.html"), "utf8"));
    write("functions.php", readFileSync(join(t, "functions.php"), "utf8") + "\n// https://fonts.googleapis.com/css2 /workspace/x jane@gmail.com\n");
    const errs = checkTheme(t, slugs[0]).join("\n");
    for (const want of ["License must be GPL-2.0-or-later", "templates/tag.html is missing", "category.html is a copy of front-page.html", "remote font host", "local path", "real-looking email"])
      assert.match(errs, new RegExp(want.replace(/[.*+?^${}()|[\]\\]/g, "\\$&")));
  } finally { rmSync(dir, { recursive: true, force: true }); }
});

test("enforces the ready-to-use website rule (shared importer + demo content)", () => {
  const dir = mkdtempSync(join(tmpdir(), "theme-demo-check-"));
  try {
    const slug = slugs[0];
    const t = join(dir, slug);
    cpSync(join(THEMES, slug), t, { recursive: true });
    const read = (p) => readFileSync(join(t, p), "utf8");
    const write = (p, s) => writeFileSync(join(t, p), s);
    write("inc/demo-import.php", read("inc/demo-import.php") + "\n// local change\n");
    write("functions.php", read("functions.php").replace(/require_once get_template_directory\(\) \. '\/inc\/demo-import\.php';\n/, ""));
    write("templates/front-page.html", read("templates/front-page.html").replace(/<!-- wp:post-content[^>]*\/-->/, '<!-- wp:pattern {"slug":"x/y"} /-->'));
    write("parts/header.html", read("parts/header.html").replace(/<!-- wp:navigation (\{.*?\}) \/-->/, '<!-- wp:navigation $1 --><!-- wp:navigation-link {"label":"A","url":"/a/"} /--><!-- /wp:navigation -->'));
    const demo = JSON.parse(read("demo-content.json"));
    demo.pages.find((p) => p.role !== "posts").content = "";
    demo.posts[0].categories = ["no-such-category"];
    demo.navigation.items.push({ label: "X", page: "no-such-page" });
    write("demo-content.json", JSON.stringify(demo));
    const errs = checkTheme(t, slug).join("\n");
    for (const want of ["inc/demo-import.php differs from shared", "functions.php must require_once", "front-page.html must render the page's own content", "navigation block must be empty", "has no content", "unknown category no-such-category", "navigation: unknown page no-such-page"])
      assert.ok(errs.includes(want), `expected "${want}" in:\n${errs}`);
  } finally { rmSync(dir, { recursive: true, force: true }); }
});

test("every theme's importer is the shared one", () => {
  const shared = readFileSync(new URL("../shared/inc/demo-import.php", import.meta.url), "utf8");
  for (const s of slugs) assert.equal(readFileSync(join(THEMES, s, "inc/demo-import.php"), "utf8"), shared, s);
});
