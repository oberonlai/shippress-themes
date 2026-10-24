// node --test scripts/check-themes.test.mjs
import { test } from "node:test";
import assert from "node:assert/strict";
import { cpSync, existsSync, mkdtempSync, readdirSync, readFileSync, rmSync, writeFileSync } from "node:fs";
import { tmpdir } from "node:os";
import { join } from "node:path";
import { fileURLToPath } from "node:url";
import { checkZhFonts, woff2Codepoints, zhCjkChars, zhTwText } from "./zh-fonts.mjs";
import { spawnSync } from "node:child_process";
import { buildIndex, checkTheme, cssWords, expandPatterns, gateMetrics, hasAlpha, homeMetrics, i18nStrings, LEGACY_IMPORTERS, maxFontRem, patternBody, REAL_NAMES, styleHeader, TYPES } from "./check-themes.mjs";

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

// Minimum quality gate (#226): only themes with "quality_gate": 2 in theme-meta.json are checked.
// Asa Linen (one of the reference themes) plus a brand.md is the passing fixture.
const BRAND = "# Brand brief\n\n- Name: Asa Linen\n- Location: an upstairs atelier in Hatori-machi\n- Founded: 2009\n- People: Mio Asano (weaver), Ken Ota (cutter)\n- Audience: people who sleep in linen all year\n- Tone: quiet, plain, warm\n- A day: looms at eight, washing at noon, folding by the window at four\n";
function withGated(edit, { slug = "asa-linen", gate = 2, brand = BRAND } = {}) {
  const dir = mkdtempSync(join(tmpdir(), "theme-gate-check-"));
  try {
    const t = join(dir, slug);
    cpSync(join(THEMES, slug), t, { recursive: true });
    const meta = JSON.parse(readFileSync(join(t, "theme-meta.json"), "utf8"));
    if (gate !== null) meta.quality_gate = gate;
    // Keep non-ASCII escaped, as the theme files do (theme copy outside ja/zh-TW files must stay ASCII-English).
    writeFileSync(join(t, "theme-meta.json"), JSON.stringify(meta, null, 2).replace(/[\u0080-\uffff]/g, (c) => `\\u${c.charCodeAt(0).toString(16).padStart(4, "0")}`));
    if (brand) writeFileSync(join(t, "brand.md"), brand);
    edit?.(t);
    return checkTheme(t, slug);
  } finally { rmSync(dir, { recursive: true, force: true }); }
}
const PNG_RGBA = Buffer.concat([Buffer.from([0x89, 0x50, 0x4e, 0x47, 0x0d, 0x0a, 0x1a, 0x0a, 0, 0, 0, 13]), Buffer.from("IHDR"), Buffer.from([0, 0, 0, 1, 0, 0, 0, 1, 8, 6, 0, 0, 0]), Buffer.alloc(4)]);
const PNG_RGB = Buffer.from(PNG_RGBA); PNG_RGB[25] = 2;

test("quality gate: a gated theme that meets every item passes", () => {
  assert.deepEqual(withGated(), []);
  const m = gateMetrics(join(THEMES, "asa-linen"));
  assert.deepEqual([m.pages, m.posts, m.photos, m.cutouts, m.fontRem], [8, 6, 17, 0, 5.4]);
  assert.ok(m.home.words >= 250 && m.home.narrative >= 3 && m.home.photos >= 8, JSON.stringify(m.home));
});

test("quality gate: an ungated theme is not checked, a wrong gate value is refused", () => {
  const thin = slugs.find((s) => s === "jika-tabi") ?? slugs[0];
  assert.doesNotMatch(withGated(null, { slug: thin, gate: null, brand: null }).join("\n"), /quality gate/);
  assert.match(withGated(null, { slug: thin, brand: null }).join("\n"), /quality gate/);
  assert.match(withGated(null, { gate: 1 }).join("\n"), /quality_gate must be 2/);
});

test("quality gate: pages, posts, photos, cut-outs, font size and brand.md", () => {
  const demoEdit = (fn) => (t) => { const f = join(t, "demo-content.json"); const d = JSON.parse(readFileSync(f, "utf8")); fn(d); writeFileSync(f, JSON.stringify(d)); };
  assert.match(withGated(demoEdit((d) => { d.pages = d.pages.filter((p) => !["care", "fabric-guide"].includes(p.slug)); })).join("\n"), /6 pages in demo-content.json/);
  assert.match(withGated(demoEdit((d) => { d.posts = []; })).join("\n"), /0 posts in demo-content.json/);
  const photos = withGated((t) => { for (const f of readdirSync(join(t, "assets/images")).filter((f) => f.startsWith("product-"))) rmSync(join(t, "assets/images", f)); }).join("\n");
  assert.match(photos, /7 photo files in assets\/images \(needs >= 12/);
  const cut = withGated((t) => { writeFileSync(join(t, "assets/images/lamp.png"), PNG_RGBA); writeFileSync(join(t, "assets/images/car-cutout.webp"), "x"); writeFileSync(join(t, "assets/images/opaque.png"), PNG_RGB); }).join("\n");
  assert.match(cut, /2 cut-outs/);
  const font = withGated((t) => { const f = join(t, "theme.json"); const j = JSON.parse(readFileSync(f, "utf8")); for (const s of j.settings.typography.fontSizes) s.size = "clamp(1rem, 2vw, 56px)"; writeFileSync(f, JSON.stringify(j)); }).join("\n");
  assert.match(font, /largest theme.json font size is 3.5rem \(needs >= 4.25rem\)/);
  assert.match(withGated(null, { brand: null }).join("\n"), /brand.md is missing/);
  assert.match(withGated(null, { brand: "# Asa Linen\nName: Asa Linen\nLocation: Hatori-machi\n" }).join("\n"), /brand.md does not cover founded, people, audience, tone, day/);
});

test("quality gate: home page words, narrative paragraphs and photo positions (patterns expanded)", () => {
  const home = (content) => (t) => { const f = join(t, "demo-content.json"); const d = JSON.parse(readFileSync(f, "utf8")); d.pages.find((p) => p.role === "front").content = content; writeFileSync(f, JSON.stringify(d)); };
  const errs = withGated(home('<!-- wp:pattern {"slug":"asa-linen/home-opening"} /-->')).join("\n");
  for (const want of [/home page has \d+ words \(needs >= 250\)/, /home page has 1 paragraphs of >= 20 words \(needs >= 3\)/, /home page has 1 photo positions \(needs >= 8\)/]) assert.match(errs, want);
  // Nested patterns, PHP, comments and entities; covers, background images and query loops count as photo positions.
  const pats = new Map([["a/outer", '<?php echo 1; ?><!-- wp:pattern {"slug":"a/inner"} /--><p>One &amp; two</p>'], ["a/inner", "<!-- note --><p>three four</p><img src=\"x.jpg\"/>"]]);
  const html = expandPatterns('<!-- wp:pattern {"slug":"a/outer"} /-->', pats);
  assert.deepEqual(homeMetrics(html), { words: 4, narrative: 0, photos: 1 });
  const rich = '<!-- wp:cover {"url":"a.jpg"} --><div class="wp-block-cover"></div><!-- /wp:cover --><div style="background-image:url(b.jpg)"></div><img src="c-cutout.png"/>'
    + '<!-- wp:query {"query":{"perPage":4}} --><!-- wp:post-template --><!-- wp:post-featured-image /--><!-- /wp:post-template --><!-- /wp:query -->';
  assert.equal(homeMetrics(rich, (b) => /cutout/.test(b)).photos, 6);
});

test("quality gate: a multilingual theme is measured on the English words its patterns print (inc/i18n/en.php)", () => {
  const en = "<?php\nreturn array(\n\t'lead' => 'It\\'s calm & <em>quiet</em>',\n\t'alt' => 'A road',\n);\n";
  assert.deepEqual([...i18nStrings(en)], [["lead", "It's calm & <em>quiet</em>"], ["alt", "A road"]]);
  const files = { "inc/i18n/en.php": en };
  const read = (p) => files[p], has = (p) => p in files;
  const src = "<?php\n/**\n * Title: X\n */\n?>\n<p><?php echo wp_kses_post( x_t( 'lead' ) ); ?></p><img alt=\"<?php echo esc_attr( x_t( 'alt' ) ); ?>\"/><p><?php echo esc_html( x_t( 'gone' ) ); ?></p>";
  assert.equal(patternBody(src, read, has).trim(), "<p>It's calm & <em>quiet</em></p><img alt=\"A road\"/><p><?php echo esc_html( x_t( 'gone' ) ); ?></p>");
  const m = gateMetrics(join(THEMES, "hokuto-driving-school"));
  assert.ok(m.home.words >= 250 && m.home.narrative >= 3 && m.home.photos >= 8, JSON.stringify(m.home));
});

test("quality gate: one top menu (no side rail, one navigation in the header)", () => {
  const rail = withGated((t) => writeFileSync(join(t, "parts/side-rail.html"), '<!-- wp:group {"className":"x"} --><div></div><!-- /wp:group -->')).join("\n");
  assert.match(rail, /parts\/side-rail.html has a side rail/);
  const cls = withGated((t) => { const f = join(t, "parts/header.html"); writeFileSync(f, readFileSync(f, "utf8") + '\n<!-- wp:group {"className":"al-side-rail"} --><div class="al-side-rail"></div><!-- /wp:group -->'); }).join("\n");
  assert.match(cls, /parts\/header.html has a side rail/);
  const two = withGated((t) => { const f = join(t, "parts/header.html"); writeFileSync(f, readFileSync(f, "utf8") + '\n<!-- wp:navigation {"overlayMenu":"never"} /-->'); }).join("\n");
  assert.match(two, /parts\/header.html has 2 navigation blocks/);
});

test("quality gate helpers: alpha detection and largest font size", () => {
  assert.equal(hasAlpha(PNG_RGBA), true);
  assert.equal(hasAlpha(PNG_RGB), false);
  const webp = (chunk, flags) => { const b = Buffer.alloc(32); b.write("RIFF", 0); b.write("WEBP", 8); b.write(chunk, 12); if (chunk === "VP8X") b[20] = flags; else b.writeUInt32LE(flags, 21); return b; };
  assert.equal(hasAlpha(webp("VP8X", 0x10)), true);
  assert.equal(hasAlpha(webp("VP8X", 0)), false);
  assert.equal(hasAlpha(webp("VP8L", 1 << 28)), true);
  assert.equal(hasAlpha(webp("VP8 ", 0)), false);
  assert.equal(maxFontRem({ settings: { typography: { fontSizes: [{ size: "1rem" }, { size: "clamp(2.6rem, 1.6rem + 4.2vw, 5.4rem)" }, { size: "80px" }] } } }), 5.4);
  assert.equal(maxFontRem({ settings: { typography: { fontSizes: [{ size: "3rem", fluid: { min: "3rem", max: "4.5rem" } }, { size: "72px" }] } } }), 4.5);
});

test("check-first-screen.py measures the saturated share of the first screen", (t) => {
  if (spawnSync("python3", ["-c", "import PIL"]).status !== 0) return t.skip("python3 with Pillow is not available");
  const script = fileURLToPath(new URL("./check-first-screen.py", import.meta.url));
  const run = (slug, ...args) => spawnSync("python3", [script, join(THEMES, slug, "screenshots/home-desktop.webp"), ...args], { encoding: "utf8" });
  const calm = run("asa-linen");
  assert.equal(calm.status, 0, calm.stdout + calm.stderr);
  assert.match(calm.stdout, /^\d+\.\d% saturated pixels in the first 1440x900 \(max 30%\): ok/);
  if (existsSync(join(THEMES, "jika-tabi"))) {
    const loud = run("jika-tabi");
    assert.equal(loud.status, 1);
    assert.match(loud.stdout, /FAIL/);
    assert.equal(run("jika-tabi", "--max", "100", "--crop", "800x600").status, 0);
  }
});

test("store themes must declare a store block in theme-meta.json (2026-10-24, hayate-cycles)", async () => {
  const { STORE_BLOCK_LEGACY } = await import("./check-themes.mjs");
  const store = slugs.find((s) => { const m = JSON.parse(readFileSync(join(THEMES, s, "theme-meta.json"), "utf8")); return m.type === "store" && m.store && !STORE_BLOCK_LEGACY.includes(s); });
  assert.ok(store, "a store theme with a store block");
  const dir = mkdtempSync(join(tmpdir(), "theme-storeblock-"));
  try {
    const t = join(dir, store);
    cpSync(join(THEMES, store), t, { recursive: true });
    const p = join(t, "theme-meta.json"); const m = JSON.parse(readFileSync(p, "utf8"));
    assert.doesNotMatch(checkTheme(t, store).join("\n"), /"store" block/);
    delete m.store; writeFileSync(p, JSON.stringify(m));
    assert.match(checkTheme(t, store).join("\n"), /a store theme needs a "store" block/);
  } finally { rmSync(dir, { recursive: true, force: true }); }
});
