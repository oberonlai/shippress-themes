// node --test scripts/check-themes.test.mjs
import { test } from "node:test";
import assert from "node:assert/strict";
import { cpSync, existsSync, mkdtempSync, readdirSync, readFileSync, rmSync, writeFileSync } from "node:fs";
import { tmpdir } from "node:os";
import { join } from "node:path";
import { fileURLToPath } from "node:url";
import { checkZhFonts, woff2Codepoints, zhCjkChars, zhTwText } from "./zh-fonts.mjs";
import { buildIndex, checkTheme, cssWords, LEGACY_IMPORTERS, REAL_NAMES, styleHeader, TYPES } from "./check-themes.mjs";

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

test("theme types: nonprofit and media are accepted, an unknown type is refused", () => {
  assert.ok(TYPES.includes("nonprofit"));
  assert.ok(TYPES.includes("media")); // podcasts, radio shows (oto-radio)
  const dir = mkdtempSync(join(tmpdir(), "theme-type-check-"));
  try {
    const t = join(dir, slugs[0]);
    cpSync(join(THEMES, slugs[0]), t, { recursive: true });
    const meta = JSON.parse(readFileSync(join(t, "theme-meta.json"), "utf8"));
    writeFileSync(join(t, "theme-meta.json"), JSON.stringify({ ...meta, type: "nonprofit" }));
    assert.doesNotMatch(checkTheme(t, slugs[0]).join("\n"), /type must be one of/);
    writeFileSync(join(t, "theme-meta.json"), JSON.stringify({ ...meta, type: "media" }));
    assert.doesNotMatch(checkTheme(t, slugs[0]).join("\n"), /type must be one of/);
    writeFileSync(join(t, "theme-meta.json"), JSON.stringify({ ...meta, type: "charity-shop" }));
    assert.match(checkTheme(t, slugs[0]).join("\n"), /type must be one of/);
  } finally { rmSync(dir, { recursive: true, force: true }); }
});

test("catches broken themes", () => {
  const dir = mkdtempSync(join(tmpdir(), "theme-check-"));
  try {
    const t = join(dir, slugs[0]);
    cpSync(join(THEMES, slugs[0]), t, { recursive: true });
    const write = (p, s) => writeFileSync(join(t, p), s);
    const css = readFileSync(join(t, "style.css"), "utf8");
    write("style.css", css.replace(/License: .*/, "License: Proprietary").replace(/Version: .*/, "Version: 1.0 beta"));
    rmSync(join(t, "templates/tag.html"));
    write("templates/category.html", readFileSync(join(t, "templates/front-page.html"), "utf8"));
    write("functions.php", readFileSync(join(t, "functions.php"), "utf8") + "\n// https://fonts.googleapis.com/css2 /workspace/x jane@gmail.com\n");
    const errs = checkTheme(t, slugs[0]).join("\n");
    for (const want of ["License must be GPL-2.0-or-later", "templates/tag.html is missing", "category.html is a copy of front-page.html", "remote font host", "local path", "real-looking email", "Version must look like 1.2.3"])
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

test("every theme's importer is the shared one (or an earlier shared version), byte for byte", () => {
  const shared = readFileSync(new URL("../shared/inc/demo-import.php", import.meta.url));
  for (const s of slugs) assert.ok([shared, ...LEGACY_IMPORTERS].some((b) => readFileSync(join(THEMES, s, "inc/demo-import.php")).equals(b)), s);
});

test("an importer copy that only differs in bytes (BOM, CRLF) is refused", () => {
  const dir = mkdtempSync(join(tmpdir(), "theme-bytes-check-"));
  try {
    const t = join(dir, slugs[0]);
    cpSync(join(THEMES, slugs[0]), t, { recursive: true });
    const php = readFileSync(join(t, "inc/demo-import.php"), "utf8");
    for (const variant of ["\uFEFF" + php, php.replace(/\n/g, "\r\n")]) {
      writeFileSync(join(t, "inc/demo-import.php"), variant);
      assert.match(checkTheme(t, slugs[0]).join("\n"), /differs from shared/);
    }
  } finally { rmSync(dir, { recursive: true, force: true }); }
});

test("demo copy may not name real magazines, awards or people", () => {
  assert.ok(REAL_NAMES.includes("Casa Brutus") && REAL_NAMES.includes("JIA"));
  const dir = mkdtempSync(join(tmpdir(), "theme-names-check-"));
  try {
    const slug = slugs[0];
    const t = join(dir, slug);
    cpSync(join(THEMES, slug), t, { recursive: true });
    const demo = JSON.parse(readFileSync(join(t, "demo-content.json"), "utf8"));
    demo.posts[0].title = "Featured in Casa Brutus";
    demo.posts[0].excerpt = "Winner of the JIA Newcomer Award.";
    writeFileSync(join(t, "demo-content.json"), JSON.stringify(demo, null, 2));
    writeFileSync(join(t, "README.md"), readFileSync(join(t, "README.md"), "utf8") + "\nAwwwards-level polish, after Tadao Ando. Shot on a Leica with Tri-X for Kyotographie.\n");
    const errs = checkTheme(t, slug).join("\n");
    for (const name of ["Casa Brutus", "JIA", "Awwwards", "Tadao Ando", "Leica", "Tri-X", "Kyotographie"]) assert.ok(errs.includes(`names a real ${name}`), `${name} in:\n${errs}`);
    // Real cities, fictional names and hex colours are fine.
    cpSync(join(THEMES, slug, "demo-content.json"), join(t, "demo-content.json"));
    writeFileSync(join(t, "README.md"), "Kyoto, Tokyo, Hokusetsu Newcomer Award, Engawa Review, #FAFAFA, Jiangsu\n");
    assert.ok(!checkTheme(t, slug).join("\n").includes("names a real"));
  } finally { rmSync(dir, { recursive: true, force: true }); }
});

test("store themes: sample products must point at real images and terms", () => {
  const store = slugs.find((s) => JSON.parse(readFileSync(join(THEMES, s, "theme-meta.json"), "utf8")).type === "store");
  assert.ok(store, "at least one store theme");
  const dir = mkdtempSync(join(tmpdir(), "theme-store-"));
  try {
    const t = join(dir, store);
    cpSync(join(THEMES, store), t, { recursive: true });
    const demo = JSON.parse(readFileSync(join(t, "demo-content.json"), "utf8"));
    demo.products[0].images = ["assets/images/no-such-cover.svg"];
    demo.products[0].categories = ["no-such-shelf"];
    demo.products[1].price = "about ten";
    writeFileSync(join(t, "demo-content.json"), JSON.stringify(demo));
    const errs = checkTheme(t, store).join("\n");
    for (const want of ["no raster copy assets/images/demo/no-such-cover", "unknown product category no-such-shelf", "needs slug, name and a price"]) assert.match(errs, new RegExp(want), want);
    demo.products = [];
    writeFileSync(join(t, "demo-content.json"), JSON.stringify(demo));
    assert.match(checkTheme(t, store).join("\n"), /a store theme needs sample products/);
  } finally {
    rmSync(dir, { recursive: true, force: true });
  }
});

test("CSS content may not put editable words (badges, labels) on the page", () => {
  assert.deepEqual(cssWords('.x::before { content: "Most chosen"; }'), ["Most chosen"]);
  assert.deepEqual(cssWords(".x::before { content: 'Glass '; color: red }"), ["Glass "]);
  assert.deepEqual(cssWords('.x::after { content: attr(data-label) ": "; }'), []);
  assert.deepEqual(cssWords('.x::before { content: ""; } .y::before { content: "\\3042" / ""; }'), []);
  assert.deepEqual(cssWords('.x::before { content: "No. " counter(n); } .m::after { content: "Menu"; }'), []);
  assert.deepEqual(cssWords(".x { align-content: center; }"), []);
  for (const s of slugs) for (const f of ["style.css", "assets/css/woocommerce.css"]) {
    const p = join(THEMES, s, f);
    if (existsSync(p)) assert.doesNotMatch(readFileSync(p, "utf8"), /content\s*:\s*["']Most chosen/i, `${s}/${f}`);
  }
});

test("the shared importer trashes WordPress's sample post only while it is untouched", () => {
  const php = readFileSync(new URL("../shared/inc/demo-import.php", import.meta.url), "utf8");
  const fn = php.slice(php.indexOf("public static function trash_hello_world()"), php.indexOf("An item this theme imported before"));
  assert.ok(fn.length > 200, "trash_hello_world() exists");
  assert.match(php, /\$result\['trashed'\] = self::trash_hello_world\(\);/, "called from import()");
  for (const rule of ["'publish' !== $post->post_status", "'Hello world!' !== $post->post_title", "'hello-world'", "post_modified_gmt === $post->post_date_gmt", "wapuu@wordpress.example", "count( $comments ) > 1", "null !== self::tag( $post->ID )", "get_post_meta( $post->ID, self::HELLO, true )"])
    assert.ok(fn.includes(rule), rule);
  assert.match(fn, /wp_trash_post\( \$post->ID \)/);
  assert.doesNotMatch(fn, /wp_delete_post|force_delete|wp_update_post/);
});

test("demo-content.<lang>.json must keep the English file's slugs and screens; CJK only in CJK-language files", () => {
  const dir = mkdtempSync(join(tmpdir(), "theme-lang-check-"));
  try {
    const t = join(dir, "hoshizora-camp");
    cpSync(join(THEMES, "hoshizora-camp"), t, { recursive: true });
    assert.deepEqual(checkTheme(t, "hoshizora-camp"), []);
    const fr = JSON.parse(readFileSync(join(t, "demo-content.fr.json"), "utf8"));
    fr.pages[1].slug = "tentes";
    fr.screens.home = "/accueil/";
    writeFileSync(join(t, "demo-content.fr.json"), JSON.stringify(fr));
    writeFileSync(join(t, "inc/i18n/fr.php"), readFileSync(join(t, "inc/i18n/fr.php"), "utf8") + "// 星\n");
    const errs = checkTheme(t, "hoshizora-camp").join("\n");
    assert.match(errs, /demo-content\.fr\.json: pages must have the same slugs/);
    assert.match(errs, /demo-content\.fr\.json: screens must equal/);
    assert.match(errs, /inc\/i18n\/fr\.php:\d+: theme copy must be English/);
    assert.doesNotMatch(errs, /i18n\/ja\.php/);
  } finally { rmSync(dir, { recursive: true, force: true }); }
});

// ---- zh-TW fonts: a Traditional Chinese font with a glyph for every zh-TW sample character, never a Japanese font ----
const zhThemes = slugs.filter((s) => existsSync(join(THEMES, s, "demo-content.zh-TW.json")));

test("every theme with zh-TW sample content passes the zh-TW font check", () => {
  assert.ok(zhThemes.length >= 3);
  for (const s of zhThemes) assert.deepEqual(checkZhFonts(join(THEMES, s)), [], s);
});

test("zh-TW font check reads real glyph coverage from the bundled WOFF2", () => {
  const cps = woff2Codepoints(readFileSync(join(THEMES, "hoshizora-camp/assets/fonts/lxgw-wenkai-tc-zh-tw-700.woff2")));
  for (const c of "八頂帳篷一片草原和整星空露") assert.ok(cps.has(c.codePointAt(0)), c);
  assert.ok(!cps.has("\u{1f600}".codePointAt(0)));
  // the Japanese-only subset is not a zh-TW font: it lacks most zh-TW characters
  const ja = woff2Codepoints(readFileSync(join(THEMES, "hoshizora-camp/assets/fonts/klee-one-ja-semibold.woff2")));
  const chars = zhCjkChars(zhTwText(join(THEMES, "hoshizora-camp")));
  assert.ok(chars.filter((c) => !ja.has(c.codePointAt(0))).length > 100);
});

function withZhTheme(edit) {
  const tmp = mkdtempSync(join(tmpdir(), "zhfont-"));
  const dir = join(tmp, "hoshizora-camp");
  cpSync(join(THEMES, "hoshizora-camp"), dir, { recursive: true });
  try { edit(dir); return checkZhFonts(dir); } finally { rmSync(tmp, { recursive: true, force: true }); }
}

test("zh-TW font check fails when the zh-TW font file is missing", () => {
  const errs = withZhTheme((d) => rmSync(join(d, "assets/fonts/lxgw-wenkai-tc-zh-tw-700.woff2")));
  assert.match(errs.join("\n"), /bundled Traditional Chinese font subset/);
});

test("zh-TW font check fails when a sample character has no glyph", () => {
  const errs = withZhTheme((d) => {
    const f = join(d, "demo-content.zh-TW.json");
    writeFileSync(f, readFileSync(f, "utf8").replace("\"title\":", "\"title\": \"\u9f98\u9f99\",\"_x\":"));
  });
  assert.match(errs.join("\n"), /no glyph for \d+ zh-TW character/);
});

test("zh-TW font check fails when the zh stack lists a Japanese font or lacks the zh-TW font", () => {
  const ja = withZhTheme((d) => {
    const f = join(d, "style.css");
    writeFileSync(f, readFileSync(f, "utf8").replace('"LXGW WenKai TC", "Klee One", "Kaiti TC"', '"LXGW WenKai TC", "Klee One", "Klee One JA", "Kaiti TC"'));
  });
  assert.match(ja.join("\n"), /Japanese font Klee One JA/);
  const none = withZhTheme((d) => {
    const f = join(d, "style.css");
    writeFileSync(f, readFileSync(f, "utf8").replace('"LXGW WenKai TC", "Klee One", "Kaiti TC"', '"Klee One", "Kaiti TC"'));
  });
  assert.match(none.join("\n"), /must list the bundled zh-TW font/);
});

test("zh-TW font check fails when a Japanese subset is declared inside a Latin family entry (WordPress merges them)", () => {
  const errs = withZhTheme((d) => {
    const f = join(d, "theme.json");
    const j = JSON.parse(readFileSync(f, "utf8"));
    const fams = j.settings.typography.fontFamilies;
    const display = fams.find((e) => e.slug === "display");
    const ja = fams.find((e) => e.slug === "display-ja");
    display.fontFace.push(...ja.fontFace);
    j.settings.typography.fontFamilies = fams.filter((e) => e !== ja);
    writeFileSync(f, JSON.stringify(j, null, "\t"));
  });
  assert.match(errs.join("\n"), /WordPress renames it/);
});
