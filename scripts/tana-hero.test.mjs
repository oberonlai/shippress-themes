import { test } from "node:test";
import assert from "node:assert/strict";
import { readFileSync, readdirSync } from "node:fs";
import { execFileSync } from "node:child_process";
import { fileURLToPath } from "node:url";
const root = new URL("../themes/tana-furniture/", import.meta.url);
const css = readFileSync(new URL("style.css", root), "utf8");
test("Tana hero is a left-aligned editorial block, never a stepped zig-zag", () => {
  assert.doesNotMatch(css, /\.tf-step:nth-child/);
  assert.match(css, /\.tf-stage__copy\s*\{[^}]*grid-template-columns:[^}]*minmax\(0, 1fr\)/);
  assert.match(css, /\.tf-h1\s*\{[^}]*font-weight: 600/);
  assert.match(css, /\.tf-h1\s*\{[^}]*text-align: left/);
  assert.match(css, /\.tf-phrase\s*\{[^}]*display: inline/);
  assert.doesNotMatch(css, /backdrop-filter|filter: blur/);
});
test("Tana hero supports phrase wrapping, reduced motion and static previews", () => {
  assert.match(css, /word-break: keep-all/);
  assert.match(css, /line-break: strict/);
  assert.match(css, /transform-origin: left bottom/);
  assert.match(css, /prefers-reduced-motion: no-preference/);
  assert.match(css, /html:not\(\.sp-no-motion\) \.tf-stage \.tf-h1/);
  for (const f of readdirSync(new URL("patterns/", root))) {
    const pattern = readFileSync(new URL(`patterns/${f}`, root), "utf8");
    assert.doesNotMatch(pattern, /<\/span><span class="tf-step">/, `${f}: missing semantic space / CJK break opportunity`);
  }
});
test("Tana hero patch version and changelog stay aligned", () => {
  assert.match(css, /^Version: 1\.0\.1$/m);
  assert.equal(JSON.parse(readFileSync(new URL("theme-meta.json", root))).version, "1.0.1");
  assert.match(readFileSync(new URL("readme.txt", root), "utf8"), /= 1\.0\.1 =/);
});

test("hero strings are escaped and joined with semantic Latin spaces or CJK wrap points", () => {
  const prelude = `define('ABSPATH', '/'); function add_filter(...$args) {} function esc_html($s) { return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); } class ShipPress_Demo_Import { static function lang() { return $GLOBALS['lang']; } } require $argv[1]; `;
  const run = (lang) => execFileSync(process.env.PHP_BINARY || "php", ["-r", prelude + `$GLOBALS['lang'] = '${lang}'; echo tana_furniture_hero(array('st_h1_1', 'st_h1_2', 'st_h1_3', 'st_h1_4'));`, fileURLToPath(new URL("inc/i18n.php", root))], { encoding: "utf8" });
  for (const lang of ["en", "fr", "de"]) {
    const html = run(lang);
    assert.match(html, /\S \S/, `${lang}: semantic spaces`);
    assert.doesNotMatch(html, /<[^>]+>/, `${lang}: no unnecessary wrappers`);
  }
  for (const lang of ["zh-TW", "ja"]) assert.equal((run(lang).match(/<wbr>/g) || []).length, 3, `${lang}: safe phrase boundaries`);
});

test("long dynamic CJK titles can wrap, and the journal has its own real heading", () => {
  assert.match(css, /:is\(\.tf-h1--post, \.tf-h1--query\)\s*\{[^}]*word-break: auto-phrase;[^}]*overflow-wrap: break-word/);
  assert.match(readFileSync(new URL("templates/home.html", root), "utf8"), /tana-furniture\/stage-journal/);
});
