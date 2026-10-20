#!/usr/bin/env node
// Validates every theme in themes/ and the root index.json. Node 18+, no dependencies.
//   node scripts/check-themes.mjs           # check (exit 1 on any problem)
//   node scripts/check-themes.mjs --write   # regenerate index.json from the theme-meta.json files, then check
import { existsSync, readdirSync, readFileSync, statSync, writeFileSync } from "node:fs";
import { dirname, join, relative } from "node:path";
import { fileURLToPath } from "node:url";
import { checkZhFonts } from "./zh-fonts.mjs";

export const REPO = "oberonlai/shippress-themes";
export const downloadUrl = (slug) => `https://github.com/${REPO}/releases/download/themes/${slug}.zip`;
export const PAGES = ["home", "about", "news", "article", "category", "tag", "newsletter", "contact"];
// Required templates; "a|b" = either one.
export const TEMPLATES = ["index", "front-page|home", "single", "page", "archive|category", "tag", "404"];
// Which templates can render each catalogue page (WordPress template hierarchy).
const PAGE_TEMPLATES = {
  home: ["front-page", "home"], about: ["page-about", "page"], news: ["home", "index"], article: ["single"],
  category: ["category", "archive"], tag: ["tag", "archive"], newsletter: ["page-newsletter", "page"], contact: ["page-contact", "page"],
};
// "store": a WooCommerce shop theme (WooCommerce templates + sample products, still works without WooCommerce).
export const TYPES = ["portfolio", "business", "blog", "shop", "store", "hospitality", "education", "health", "food-drink", "events", "nonprofit", "media"];
const CJK = /[\u3040-\u30ff\u3400-\u9fff\uff00-\uffef\u3000-\u303f]/;
const TEXT = /\.(php|html|json|css|md|txt|js|svg)$/;
const SECRETS = [
  [/\/home\/[a-z]|\/workspace\/|\/Users\/[A-Za-z]|C:\\Users\\/, "local path"],
  [/\b(sk-[A-Za-z0-9_-]{16,}|gh[pousr]_[A-Za-z0-9]{20,}|AKIA[0-9A-Z]{16}|xox[baprs]-[A-Za-z0-9-]{10,}|AIza[0-9A-Za-z_-]{30,})/, "API key or token"],
  [/-----BEGIN [A-Z ]*PRIVATE KEY-----/, "private key"],
  [/\b(api[_-]?key|secret|password|token)\s*[:=]\s*["'][^"']{6,}["']/i, "hard-coded credential"],
  [/fonts\.(googleapis|gstatic)\.com|use\.typekit\.net|fonts\.bunny\.net/, "remote font host (bundle fonts instead)"],
];
// Demo copy names only fictional people, companies, publications and awards. Real ones that have slipped in before
// (or are the obvious next temptation for a Japanese-inspired theme) are refused; real city names are fine.
export const REAL_NAMES = [
  "Casa Brutus", "JIA", "Japan Institute of Architects", "Good Design Award", "Venice Biennale", "AR House Award",
  "Pritzker", "Architectural Association", "Tokyo University of the Arts", "Kyoto Institute of Technology",
  "Shinkenchiku", "GA Houses", "Dezeen", "ArchDaily", "Wallpaper*", "Monocle", "Kinfolk", "Brutus", "Popeye", "Pen magazine",
  "Awwwards", "FWA", "Red Dot", "iF Design Award", "Bashō", "Basho", "In Praise of Shadows", "Tanizaki",
  "Tadao Ando", "Kengo Kuma", "Kazuyo Sejima", "SANAA", "Toyo Ito", "Shigeru Ban", "Sou Fujimoto", "Kenya Hara",
  "Naoto Fukasawa", "Muji", "Blue Bottle", "Starbucks", "Kissa Tanpopo", "Shonan Kogyo", "Oka Structural Design",
  "Kyotographie", "Photo Basel", "Paris Photo", "Leica", "Pentax", "Hasselblad", "Mamiya", "Tri-X", "Kodak", "Fujifilm", "Ilford",
  "Kamakura Museum of Photography", "Tokyo Photographic Art Museum", "New Documents Award", "First Book Award", "MACK",
  "Snow Country", "Kawabata", "Daido Moriyama", "Nobuyoshi Araki", "Rinko Kawauchi", "Hiroshi Sugimoto", "Masahisa Fukase",
];
// Words on the page (badges like "Most chosen", table labels, status chips) live in post content or a synced pattern,
// where the site owner can edit them, never in CSS `content:`. Only these small interface glyphs may stay in CSS.
export const CSS_GLYPHS = ["Menu", "REC", "No. "];
/** CSS `content:` strings in one line that put words on the page (empty = fine). */
export function cssWords(line) {
  const out = [];
  for (const [, value] of line.matchAll(/(?<![-\w])content\s*:\s*([^;}]*)/g))
    for (const [, , text] of value.matchAll(/(["'])((?:\\.|(?!\1).)*)\1/g))
      if (/[A-Za-z]{2,}/.test(text.replace(/\\[0-9A-Fa-f]{1,6}\s?/g, "")) && !CSS_GLYPHS.includes(text)) out.push(text);
  return out;
}
const REAL_NAME = new RegExp(`(?<![A-Za-z])(${REAL_NAMES.map((n) => n.replace(/[.*+?^${}()|[\]\\]/g, "\\$&")).join("|")})(?![A-Za-z])`, "g");
const EMAIL = /[A-Za-z0-9._%+-]+@([A-Za-z0-9-]+\.)+[A-Za-z]{2,}/g;
const SAFE_EMAIL = /@([A-Za-z0-9-]+\.)*(example(\.com|\.org|\.net)?|[A-Za-z0-9-]+\.example)$/i;

const walk = (d) => readdirSync(d).flatMap((f) => { const p = join(d, f); return statSync(p).isDirectory() ? walk(p) : [p]; });

/** style.css header fields ("Theme Name: X" lines inside the first comment). */
export function styleHeader(css) {
  const m = css.match(/\/\*([\s\S]*?)\*\//);
  return Object.fromEntries((m ? m[1] : "").split("\n").map((l) => l.match(/^\s*([A-Za-z ]+):\s*(.+?)\s*$/)).filter(Boolean).map((x) => [x[1].trim(), x[2]]));
}

/** Problems with one theme folder (empty = valid). */
export const SHARED_IMPORTER = fileURLToPath(new URL("../shared/inc/demo-import.php", import.meta.url));
// Earlier versions of the shared importer (shared/inc/legacy/*.php). A released theme may keep the copy it shipped with
// until its next version; a new or changed theme copies the current shared one.
const LEGACY_DIR = fileURLToPath(new URL("../shared/inc/legacy/", import.meta.url));
export const LEGACY_IMPORTERS = existsSync(LEGACY_DIR) ? readdirSync(LEGACY_DIR).filter((f) => f.endsWith(".php")).sort().map((f) => readFileSync(join(LEGACY_DIR, f))) : [];
// Sample-content languages besides English (the ShipPress app's LANGS): demo-content.<lang>.json holds the same pages,
// posts and menu in that language. Files for a CJK language may contain CJK text; every other theme file stays English.
export const DEMO_LANGS = ["zh-TW", "ja", "fr", "de"];
const CJK_FILE = /(?:^|[/.])(?:ja|zh-TW)(?:[/.])/;

/** Problems with a theme's demo content + shared importer (the "ready-to-use website" rule). */
export function checkDemo(dir, read, has, demo, meta, importer = readFileSync(SHARED_IMPORTER), legacy = LEGACY_IMPORTERS) {
  const errs = [];
  if (!has("inc/demo-import.php")) errs.push("inc/demo-import.php is missing (copy shared/inc/demo-import.php)");
  // Byte for byte (not as decoded text), so a BOM, line endings or a stray encoding change count as a difference too.
  else if (![importer, ...legacy].some((b) => readFileSync(join(dir, "inc/demo-import.php")).equals(Buffer.from(b)))) errs.push("inc/demo-import.php differs from shared/inc/demo-import.php (copy it again, change the shared one only)");
  else if (DEMO_LANGS.some((l) => has(`demo-content.${l}.json`)) && !readFileSync(join(dir, "inc/demo-import.php")).equals(Buffer.from(importer))) errs.push("a theme with demo-content.<lang>.json needs the current shared importer (copy shared/inc/demo-import.php)");
  else if (!/add_action\(\s*'after_switch_theme'/.test(String(importer))) errs.push("the importer has no after_switch_theme hook");
  if (has("functions.php") && !/require_once\s+get_template_directory\(\)\s*\.\s*'\/inc\/demo-import\.php'/.test(read("functions.php"))) errs.push("functions.php must require_once get_template_directory() . '/inc/demo-import.php'");
  if (!demo) return errs;
  if (!demo.site?.title) errs.push("demo-content.json needs site.title");
  const pages = Array.isArray(demo.pages) ? demo.pages : (errs.push("demo-content.json needs a pages list"), []);
  const slugs = new Set(pages.map((p) => p.slug));
  const patterns = new Set((has("patterns") ? readdirSync(join(dir, "patterns")) : []).map((f) => (read(`patterns/${f}`).match(/^\s*\*\s*Slug:\s*(\S+)/m) || [])[1]).filter(Boolean));
  for (const role of ["front", "posts"]) if (pages.filter((p) => p.role === role).length !== 1) errs.push(`demo-content.json needs exactly one page with role "${role}"`);
  for (const p of pages) {
    if (!p.slug || !p.title) errs.push("every demo page needs slug and title");
    if (p.parent && !slugs.has(p.parent)) errs.push(`page ${p.slug}: parent ${p.parent} is not a demo page`);
    if (p.template && !has(`templates/${p.template}.html`)) errs.push(`page ${p.slug}: templates/${p.template}.html is missing`);
    if (p.role !== "posts" && !String(p.content ?? "").trim()) errs.push(`page ${p.slug} has no content (its copy must live in the page so users can edit it)`);
    for (const [, ref] of String(p.content ?? "").matchAll(/<!--\s+wp:pattern\s+\{"slug":"([^"]+)"\}/g)) if (!patterns.has(ref)) errs.push(`page ${p.slug}: unknown pattern ${ref}`);
    const tpl = p.role === "front" ? "front-page" : p.template;
    if (tpl && has(`templates/${tpl}.html`) && !/<!-- wp:post-content/.test(read(`templates/${tpl}.html`))) errs.push(`templates/${tpl}.html must render the page's own content (wp:post-content)`);
  }
  const cats = new Set((demo.categories ?? []).map((c) => c.slug)), tags = new Set((demo.tags ?? []).map((t) => t.slug));
  if (!(demo.posts ?? []).length) errs.push("demo-content.json needs sample posts");
  for (const p of demo.posts ?? []) {
    if (!p.slug || !p.title || !p.excerpt || !/^\d{4}-\d{2}-\d{2}$/.test(p.date ?? "")) errs.push(`post ${p.slug}: needs slug, title, excerpt and date (YYYY-MM-DD)`);
    for (const c of p.categories ?? []) if (!cats.has(c)) errs.push(`post ${p.slug}: unknown category ${c}`);
    for (const t of p.tags ?? []) if (!tags.has(t)) errs.push(`post ${p.slug}: unknown tag ${t}`);
    if (p.image) {
      const name = p.image.replace(/^.*\//, "").replace(/\.\w+$/, "");
      if (!["jpg", "jpeg", "png", "webp"].some((x) => has(`assets/images/demo/${name}.${x}`))) errs.push(`post ${p.slug}: no raster copy assets/images/demo/${name}.jpg|png|webp for the Media Library (scripts/rasterize-images.py)`);
    }
  }
  for (const i of demo.navigation?.items ?? []) {
    if (i.page && !slugs.has(i.page)) errs.push(`navigation: unknown page ${i.page}`);
    if (i.category && !cats.has(i.category)) errs.push(`navigation: unknown category ${i.category}`);
  }
  if (!(demo.navigation?.items ?? []).length) errs.push("demo-content.json needs navigation.items");
  if (has("parts/header.html")) for (const [, attrs, inner] of read("parts/header.html").matchAll(/<!-- wp:navigation (\{.*?\}) (\/)?-->/g)) {
    if (!inner || /"ref":/.test(attrs)) errs.push("parts/header.html: the navigation block must be empty (<!-- wp:navigation {...} /-->) so it shows the imported menu");
  }
  // Sample products (store themes; imported only while WooCommerce is active): images, categories and tags must exist.
  const pcats = new Set((demo.productCategories ?? []).map((c) => c.slug)), ptags = new Set((demo.productTags ?? []).map((t) => t.slug));
  for (const c of demo.productCategories ?? []) if (c.parent && !pcats.has(c.parent)) errs.push(`product category ${c.slug}: unknown parent ${c.parent}`);
  for (const p of demo.products ?? []) {
    if (!p.slug || !p.name || !/^\d+(\.\d{1,2})?$/.test(String(p.price ?? ""))) errs.push(`product ${p.slug}: needs slug, name and a price like 18 or 18.50`);
    for (const c of p.categories ?? []) if (!pcats.has(c)) errs.push(`product ${p.slug}: unknown product category ${c}`);
    for (const t of p.tags ?? []) if (!ptags.has(t)) errs.push(`product ${p.slug}: unknown product tag ${t}`);
    for (const img of p.images ?? []) {
      const name = img.replace(/^.*\//, "").replace(/\.\w+$/, "");
      if (!["jpg", "jpeg", "png", "webp"].some((x) => has(`assets/images/demo/${name}.${x}`))) errs.push(`product ${p.slug}: no raster copy assets/images/demo/${name}.jpg|png|webp`);
    }
  }
  if (meta?.type === "store" && !(demo.products ?? []).length) errs.push("a store theme needs sample products in demo-content.json");
  if (meta?.type === "store" && !["archive-product", "single-product"].every((t) => has(`templates/${t}.html`))) errs.push("a store theme needs templates/archive-product.html and templates/single-product.html");
  if (has("assets/images")) for (const f of readdirSync(join(dir, "assets/images")).filter((f) => f.endsWith(".svg"))) {
    const name = f.slice(0, -4);
    if (!["jpg", "jpeg", "png", "webp"].some((x) => has(`assets/images/demo/${name}.${x}`))) errs.push(`assets/images/${f} has no raster copy in assets/images/demo/ (scripts/rasterize-images.py)`);
  }
  return errs;
}

// Minimum quality gate (design-plan.json rules.quality_gate, ROADMAP §4 rule 0, #226). Enforced only for themes whose
// theme-meta.json has "quality_gate": 2, so older themes are unaffected. The first-screen colour share needs a screenshot
// and is measured separately by scripts/check-first-screen.py.
export const GATE = { pages: 8, posts: 6, photos: 12, cutouts: 1, fontRem: 4.25, homeWords: 250, narrative: 3, narrativeWords: 20, homePhotos: 8 };
export const BRAND_FIELDS = {
  name: /\bname\b/i, location: /\b(location|located|address|based in|where)\b/i, founded: /\b(found(ed|ing)?|established|since|year)\b/i,
  people: /\b(people|person|team|staff|founder|owner|named)\b/i, audience: /\b(audience|customers?|clients?|who (it|we) serves?|for whom)\b/i,
  tone: /\b(tone|voice)\b/i, day: /\b(day|daily|routine)\b/i,
};
const PHOTO_EXT = /\.(jpe?g|png|webp|avif)$/i;

/** True when a PNG / WebP file has an alpha channel (a cut-out). */
export function hasAlpha(buf) {
  if (buf.length > 26 && buf.toString("latin1", 1, 4) === "PNG") {
    if (buf[25] === 4 || buf[25] === 6) return true;
    for (let o = 8; o + 8 <= buf.length;) { // tRNS chunk = transparency on palette / grey / RGB images
      const len = buf.readUInt32BE(o), type = buf.toString("latin1", o + 4, o + 8);
      if (type === "tRNS") return true;
      if (type === "IDAT" || type === "IEND") break;
      o += 12 + len;
    }
    return false;
  }
  if (buf.length > 30 && buf.toString("latin1", 0, 4) === "RIFF" && buf.toString("latin1", 8, 12) === "WEBP") {
    const chunk = buf.toString("latin1", 12, 16);
    if (chunk === "VP8X") return (buf[20] & 0x10) !== 0;
    if (chunk === "VP8L") return ((buf.readUInt32LE(21) >>> 28) & 1) === 1;
  }
  return false;
}

/** Largest font size in rem among theme.json settings.typography.fontSizes (px / 16; clamp() and fluid.max count). */
export function maxFontRem(themeJson) {
  const rem = (v) => Math.max(0, ...[...String(v ?? "").matchAll(/(\d*\.?\d+)\s*(rem|em|px)\b/g)].map(([, n, u]) => (u === "px" ? Number(n) / 16 : Number(n))));
  return Math.max(0, ...(themeJson?.settings?.typography?.fontSizes ?? []).map((f) => Math.max(rem(f.size), rem(f.fluid?.max))));
}

/** Pattern body without its header comment; a synced-pattern call `<Theme>_Info::markup( 'key' )` becomes inc/info/<key>.html. */
export function patternBody(src, read, has) {
  const m = String(src).match(/^\s*<\?php\s*\/\*[\s\S]*?\*\/\s*(\?>)?/);
  const body = m ? (m[1] ? "" : "<?php ") + src.slice(m[0].length) : String(src);
  const out = body.replace(/(?:echo\s+)?[\w\\]+::markup\(\s*['"]([\w-]+)['"]\s*\)\s*;?/g, (all, key) => (has(`inc/info/${key}.html`) ? `?>${read(`inc/info/${key}.html`)}<?php ` : ""));
  return out.lastIndexOf("<?php") > out.lastIndexOf("?>") ? `${out} ?>` : out; // never leave PHP open for the next pattern
}

/** Pattern slug -> markup, from patterns/*.php "Slug:" headers. */
function patternMap(dir, read, has) {
  return new Map((has("patterns") ? readdirSync(join(dir, "patterns")).filter((f) => f.endsWith(".php")) : [])
    .map((f) => [(read(`patterns/${f}`).match(/^\s*\*\s*Slug:\s*(\S+)/m) || [])[1], patternBody(read(`patterns/${f}`), read, has)]).filter(([s]) => s));
}

/** Page content with every <!-- wp:pattern {"slug":...} /--> replaced by the pattern's markup, recursively. */
export function expandPatterns(content, patterns, depth = 0) {
  return String(content ?? "").replace(/<!--\s+wp:pattern\s+(\{.*?\})\s*\/-->/g, (all, attrs) => {
    let slug; try { slug = JSON.parse(attrs).slug; } catch { return ""; }
    return depth < 8 && patterns.has(slug) ? expandPatterns(patterns.get(slug), patterns, depth + 1) : "";
  });
}

const ENTITIES = { amp: "&", lt: "<", gt: ">", quot: '"', apos: "'", nbsp: " ", rsquo: "’", lsquo: "‘", rdquo: "”", ldquo: "“", mdash: "—", ndash: "–", hellip: "…", middot: "·", times: "×" };
const decode = (s) => s.replace(/&(#x[0-9a-f]+|#\d+|[a-z]+);/gi, (m, e) => e[0] === "#" ? String.fromCodePoint(e[1].toLowerCase() === "x" ? parseInt(e.slice(2), 16) : Number(e.slice(1))) : (ENTITIES[e.toLowerCase()] ?? " "));
/** Visible text of block markup: PHP, comments and tags removed, entities decoded. */
export const plainText = (html) => decode(String(html).replace(/<\?php[\s\S]*?(\?>|$)/g, " ").replace(/<!--[\s\S]*?-->/g, " ").replace(/<(script|style)[\s\S]*?<\/\1>/gi, " ").replace(/<[^>]+>/g, " ")).replace(/\s+/g, " ").trim();
/** English words (tokens with at least one Latin letter). */
export const countWords = (text) => (String(text).match(/[A-Za-z0-9][A-Za-z0-9'’-]*/g) ?? []).filter((w) => /[A-Za-z]/.test(w)).length;

/** Metrics of the expanded home-page markup: words, narrative paragraphs, photo positions. */
export function homeMetrics(html, isCutout = () => false) {
  const noPhp = String(html).replace(/<\?php[\s\S]*?(\?>|$)/g, " ");
  const words = countWords(plainText(noPhp));
  const narrative = [...noPhp.matchAll(/<p\b[^>]*>([\s\S]*?)<\/p>/gi)].filter(([, inner]) => countWords(plainText(inner)) >= GATE.narrativeWords).length;
  const base = (u) => u.replace(/[?#].*$/, "").replace(/^.*\//, "");
  let photos = [...noPhp.matchAll(/<img\b[^>]*\bsrc=["']([^"']+)["']/gi)].filter(([, src]) => !isCutout(base(src))).length;
  photos += [...noPhp.matchAll(/background(?:-image)?\s*:[^;"]*url\(\s*['"]?([^'")]+)/gi)].filter(([, src]) => !isCutout(base(src))).length;
  // Covers stored with only the url attribute (no <img> in the saved markup).
  for (const [, attrs, inner] of noPhp.matchAll(/<!--\s+wp:cover\s+(\{.*?\})\s*-->([\s\S]*?)<!--\s+\/wp:cover\s+-->/g))
    if (/"url":"[^"]+"/.test(attrs) && !/<img\b|background(?:-image)?\s*:[^;"]*url\(/i.test(inner.split(/<!--\s+wp:/)[0])) photos++;
  // Query loops with a featured image show one photo per post.
  for (const [, attrs, inner] of noPhp.matchAll(/<!--\s+wp:query\s+(\{.*?\})\s*-->([\s\S]*?)<!--\s+\/wp:query\s+-->/g))
    if (/wp:post-featured-image/.test(inner)) { let n = 3; try { n = JSON.parse(attrs).query?.perPage ?? 3; } catch {} photos += Number(n) || 0; }
  return { words, narrative, photos };
}

/** Quality-gate metrics for one theme folder. */
export function gateMetrics(dir) {
  const has = (p) => existsSync(join(dir, p));
  const read = (p) => readFileSync(join(dir, p), "utf8");
  let demo = null, theme = null;
  try { demo = JSON.parse(read("demo-content.json")); } catch {}
  try { theme = JSON.parse(read("theme.json")); } catch {}
  const images = has("assets/images") ? walk(join(dir, "assets/images")).map((f) => relative(join(dir, "assets/images"), f)).filter((f) => !f.startsWith("demo/") && PHOTO_EXT.test(f)) : [];
  const cutoutFiles = images.filter((f) => /cut-?out/i.test(f) || (/\.(png|webp)$/i.test(f) && hasAlpha(readFileSync(join(dir, "assets/images", f)))));
  const stem = (f) => f.replace(/^.*\//, "").replace(/\.\w+$/, "");
  const cutStems = new Set(cutoutFiles.map(stem));
  const photoStems = new Set(images.map(stem).filter((s) => !cutStems.has(s)));
  const front = (demo?.pages ?? []).find((p) => p.role === "front");
  const home = homeMetrics(expandPatterns(front?.content ?? "", patternMap(dir, read, has)), (b) => cutStems.has(stem(b)) || /cut-?out/i.test(b));
  const brand = has("brand.md") ? read("brand.md") : null;
  return {
    pages: (demo?.pages ?? []).length, posts: (demo?.posts ?? []).length, photos: photoStems.size, cutouts: cutStems.size,
    fontRem: maxFontRem(theme), home, brandMissing: brand === null ? null : Object.keys(BRAND_FIELDS).filter((k) => !BRAND_FIELDS[k].test(brand)),
  };
}

/** Problems against the minimum quality gate (only for theme-meta.json "quality_gate": 2). */
export function checkQualityGate(dir) {
  const errs = [], m = gateMetrics(dir), g = GATE;
  const has = (p) => existsSync(join(dir, p));
  const read = (p) => readFileSync(join(dir, p), "utf8");
  if (m.pages < g.pages) errs.push(`quality gate: ${m.pages} pages in demo-content.json (needs >= ${g.pages})`);
  if (m.posts < g.posts) errs.push(`quality gate: ${m.posts} posts in demo-content.json (needs >= ${g.posts})`);
  if (m.photos < g.photos) errs.push(`quality gate: ${m.photos} photo files in assets/images (needs >= ${g.photos}, cut-outs and demo/ copies not counted)`);
  if (m.cutouts > g.cutouts) errs.push(`quality gate: ${m.cutouts} cut-outs (transparent-background images) in assets/images (at most ${g.cutouts})`);
  if (m.fontRem < g.fontRem) errs.push(`quality gate: largest theme.json font size is ${m.fontRem}rem (needs >= ${g.fontRem}rem)`);
  if (m.brandMissing === null) errs.push("quality gate: brand.md is missing (name, location, founded, people, audience, tone, day)");
  else if (m.brandMissing.length) errs.push(`quality gate: brand.md does not cover ${m.brandMissing.join(", ")}`);
  if (m.home.words < g.homeWords) errs.push(`quality gate: home page has ${m.home.words} words (needs >= ${g.homeWords})`);
  if (m.home.narrative < g.narrative) errs.push(`quality gate: home page has ${m.home.narrative} paragraphs of >= ${g.narrativeWords} words (needs >= ${g.narrative})`);
  if (m.home.photos < g.homePhotos) errs.push(`quality gate: home page has ${m.home.photos} photo positions (needs >= ${g.homePhotos})`);
  // One top menu: no side rail anywhere, at most one navigation block in the header.
  for (const sub of ["parts", "templates", "patterns"]) if (has(sub)) for (const f of readdirSync(join(dir, sub)))
    if (/side-?rail/i.test(f) || /class(Name)?["']?\s*[:=]\s*["'][^"']*side-?rail/i.test(read(`${sub}/${f}`))) errs.push(`quality gate: ${sub}/${f} has a side rail (one top menu only)`);
  if (has("parts/header.html")) {
    const header = expandPatterns(read("parts/header.html"), patternMap(dir, read, has));
    const navs = (header.match(/<!--\s+wp:navigation\s/g) ?? []).length;
    if (navs > 1) errs.push(`quality gate: parts/header.html has ${navs} navigation blocks (one top menu only)`);
  }
  return errs;
}

export function checkTheme(dir, slug) {
  const errs = [];
  const has = (p) => existsSync(join(dir, p));
  const read = (p) => readFileSync(join(dir, p), "utf8");
  const json = (p) => { try { return JSON.parse(read(p)); } catch (e) { errs.push(`${p}: ${e.message}`); return null; } };

  if (!has("style.css")) errs.push("style.css is missing");
  else {
    const h = styleHeader(read("style.css"));
    for (const k of ["Theme Name", "Description", "Version", "Requires at least", "License", "License URI", "Text Domain"]) if (!h[k]) errs.push(`style.css header has no "${k}"`);
    if (h.License && !/^(GPL-2\.0-or-later|GNU General Public License v2 or later)$/.test(h.License)) errs.push(`style.css License must be GPL-2.0-or-later, not "${h.License}"`);
    if (h["License URI"] && !/gnu\.org\/licenses\/gpl-2\.0/.test(h["License URI"])) errs.push("style.css License URI must point to the GPL-2.0 text");
    if (h.Version && !/^\d+\.\d+\.\d+$/.test(h.Version)) errs.push(`style.css Version must look like 1.2.3 (it names the release ${slug}-v<Version>), not "${h.Version}"`);
    if (h["Text Domain"] && h["Text Domain"] !== slug) errs.push(`style.css Text Domain "${h["Text Domain"]}" must equal the folder name "${slug}"`);
  }
  if (!has("theme.json")) errs.push("theme.json is missing"); else json("theme.json");
  if (!has("screenshot.png")) errs.push("screenshot.png is missing");
  if (!has("readme.txt")) errs.push("readme.txt (copyright + resource licenses) is missing");

  errs.push(...checkZhFonts(dir));

  const tpl = (t) => has(`templates/${t}.html`) && read(`templates/${t}.html`).trim().length > 0;
  for (const req of TEMPLATES) if (!req.split("|").some(tpl)) errs.push(`templates/${req.replace("|", ".html or ")}.html is missing`);
  // Archive-type templates must not be a copy of the front page (it never lists the posts).
  if (tpl("front-page")) {
    const front = read("templates/front-page.html");
    for (const t of ["index", "archive", "category", "tag", "search", "404", "home"]) if (tpl(t) && read(`templates/${t}.html`) === front) errs.push(`templates/${t}.html is a copy of front-page.html`);
  }

  const meta = has("theme-meta.json") ? json("theme-meta.json") : (errs.push("theme-meta.json is missing"), null);
  if (meta) {
    if (meta.slug !== slug) errs.push(`theme-meta.json slug "${meta.slug}" must equal the folder name`);
    for (const k of ["name", "description", "industry", "type", "colors", "style", "fonts", "pages", "license"]) if (meta[k] === undefined) errs.push(`theme-meta.json has no "${k}"`);
    if (meta.type && !TYPES.includes(meta.type)) errs.push(`theme-meta.json type must be one of ${TYPES.join(", ")}`);
    if (meta.license !== "GPL-2.0-or-later") errs.push("theme-meta.json license must be GPL-2.0-or-later");
    if (!meta.colors?.tags?.length || !Object.values(meta.colors?.palette ?? {}).every((c) => /^#[0-9A-Fa-f]{6}$/.test(String(c)))) errs.push("theme-meta.json colors needs tags and a #RRGGBB palette");
    if (!meta.style?.length) errs.push("theme-meta.json style needs at least one tag");
    for (const p of PAGES) {
      if (!meta.pages?.includes(p)) errs.push(`theme-meta.json pages is missing "${p}"`);
      else if (!PAGE_TEMPLATES[p].some(tpl)) errs.push(`page "${p}" needs one of templates/${PAGE_TEMPLATES[p].join(".html, ")}.html`);
    }
    const readme = has("readme.txt") ? read("readme.txt") : "";
    if (readme && !/== Copyright ==/.test(readme)) errs.push("readme.txt has no == Copyright == section");
    for (const f of meta.fonts ?? []) {
      if (!/^(OFL-1\.1|Apache-2\.0|GPL-2\.0-or-later|GPL-3\.0-or-later|MIT|CC0-1\.0)$/.test(f.license ?? "")) errs.push(`font ${f.family}: license "${f.license}" is not a known GPL-compatible font license`);
      for (const file of f.files ?? []) if (!has(file)) errs.push(`font ${f.family}: ${file} is missing`);
      if (f.files?.length && !(f.licenseFile && has(f.licenseFile))) errs.push(`font ${f.family}: bundled without its license file`);
      if (readme && !readme.includes(f.family)) errs.push(`readme.txt does not list the font ${f.family}`);
    }
    const listed = new Set((meta.fonts ?? []).flatMap((f) => f.files ?? []));
    if (has("assets/fonts")) for (const f of readdirSync(join(dir, "assets/fonts")).filter((f) => /\.(woff2?|ttf|otf)$/.test(f))) if (!listed.has(`assets/fonts/${f}`)) errs.push(`assets/fonts/${f} is not listed in theme-meta.json fonts`);
    if (has("assets/images") && readme) for (const f of walk(join(dir, "assets/images")).map((f) => relative(join(dir, "assets/images"), f))) if (!readme.includes(`assets/images/${f}`)) errs.push(`readme.txt does not list assets/images/${f} with its license`);
    if (has("demo-content.json")) {
      const demo = json("demo-content.json");
      for (const p of meta.pages ?? []) if (demo && !demo.screens?.[p]) errs.push(`demo-content.json has no screens.${p} URL`);
      errs.push(...checkDemo(dir, read, has, demo, meta));
      for (const l of DEMO_LANGS) {
        const f = `demo-content.${l}.json`;
        if (!has(f)) continue;
        const loc = json(f);
        if (!loc) { errs.push(`${f} is not valid JSON`); continue; }
        // Same structure as the English file, so links, screens and the importer's keys stay the same in every language.
        errs.push(...checkDemo(dir, read, has, loc, meta).filter((e) => !/importer|inc\/demo-import|functions\.php/.test(e)).map((e) => `${f}: ${e}`));
        const keys = (d, k) => JSON.stringify((d?.[k] ?? []).map((x) => x.slug ?? x.page ?? x.sku ?? x.name));
        for (const k of ["pages", "posts", "categories", "tags"]) if (keys(loc, k) !== keys(demo, k)) errs.push(`${f}: ${k} must have the same slugs, in the same order, as demo-content.json`);
        // Same screens; only the search screen's word may differ (it has to match that language's sample posts).
        if (JSON.stringify(Object.keys(loc.screens ?? {})) !== JSON.stringify(Object.keys(demo?.screens ?? {})) || Object.entries(demo?.screens ?? {}).some(([k, v]) => k !== "search" && loc.screens?.[k] !== v)) errs.push(`${f}: screens must equal demo-content.json's (the search word may differ)`);
      }
    } else errs.push("demo-content.json is missing");
  }
  if (meta?.quality_gate === 2) errs.push(...checkQualityGate(dir));
  else if (meta && meta.quality_gate !== undefined) errs.push('theme-meta.json quality_gate must be 2 (or left out for themes built before the gate)');

  for (const f of walk(dir).filter((f) => TEXT.test(f))) {
    const rel = relative(dir, f);
    if (/OFL.*\.txt$/.test(rel)) continue; // upstream license texts
    readFileSync(f, "utf8").split("\n").forEach((line, i) => {
      for (const [re, what] of SECRETS) if (re.test(line)) errs.push(`${rel}:${i + 1}: ${what}`);
      for (const e of line.match(EMAIL) ?? []) if (!SAFE_EMAIL.test(e)) errs.push(`${rel}:${i + 1}: real-looking email ${e} (use an example.com / .example address)`);
      if (CJK.test(line) && !CJK_FILE.test(rel)) errs.push(`${rel}:${i + 1}: theme copy must be English (only demo-content.ja.json / demo-content.zh-TW.json and ja/ or zh-TW/ folders may hold CJK text)`);
      if (rel.endsWith(".css")) for (const w of cssWords(line)) errs.push(`${rel}:${i + 1}: CSS content "${w}" puts words on the page that nobody can edit (move them into the page content or a synced pattern)`);
      if (!rel.startsWith("inc/")) for (const [, real] of line.replace(/#[0-9A-Fa-f]{3,8}\b/g, "").matchAll(REAL_NAME)) errs.push(`${rel}:${i + 1}: names a real ${real} (demo copy uses fictional people, companies, publications and awards)`);
    });
  }
  return errs;
}

/** Root index.json: theme-meta.json + where to get each theme, plus the template wall's filter lists. */
export function buildIndex(metas) {
  const uniq = (xs) => [...new Set(xs)].sort();
  const themes = [...metas].sort((a, b) => a.slug.localeCompare(b.slug)).map((m) => ({ ...m, repo: REPO, path: `themes/${m.slug}`, downloadUrl: downloadUrl(m.slug) }));
  return {
    filters: { industry: uniq(themes.map((t) => t.industry)), type: uniq(themes.map((t) => t.type)), colors: uniq(themes.flatMap((t) => t.colors.tags)), style: uniq(themes.flatMap((t) => t.style)) },
    themes,
  };
}

function main() {
  const root = join(dirname(fileURLToPath(import.meta.url)), "..");
  const themesDir = join(root, "themes");
  const slugs = readdirSync(themesDir).filter((d) => statSync(join(themesDir, d)).isDirectory()).sort();
  let failed = 0;
  for (const s of slugs) {
    const errs = checkTheme(join(themesDir, s), s);
    if (errs.length) { failed++; console.error(`✗ ${s}\n${errs.map((e) => `  - ${e}`).join("\n")}`); } else console.log(`✓ ${s}`);
  }
  const metas = slugs.filter((s) => existsSync(join(themesDir, s, "theme-meta.json"))).map((s) => JSON.parse(readFileSync(join(themesDir, s, "theme-meta.json"), "utf8")));
  const expected = JSON.stringify(buildIndex(metas), null, 2) + "\n";
  if (process.argv.includes("--write")) writeFileSync(join(root, "index.json"), expected);
  if (!existsSync(join(root, "index.json")) || readFileSync(join(root, "index.json"), "utf8") !== expected) { failed++; console.error("✗ index.json is out of date: run node scripts/check-themes.mjs --write"); } else console.log("✓ index.json");
  if (failed) process.exit(1);
}

if (process.argv[1] && fileURLToPath(import.meta.url) === process.argv[1]) main();
