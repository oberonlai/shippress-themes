#!/usr/bin/env node
// Validates every theme in themes/ and the root index.json. Node 18+, no dependencies.
//   node scripts/check-themes.mjs           # check (exit 1 on any problem)
//   node scripts/check-themes.mjs --write   # regenerate index.json from the theme-meta.json files, then check
import { existsSync, readdirSync, readFileSync, statSync, writeFileSync } from "node:fs";
import { dirname, join, relative } from "node:path";
import { fileURLToPath } from "node:url";

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
const TYPES = ["portfolio", "business", "blog", "shop", "hospitality"];
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

/** Problems with a theme's demo content + shared importer (the "ready-to-use website" rule). */
export function checkDemo(dir, read, has, demo, meta, importer = readFileSync(SHARED_IMPORTER)) {
  const errs = [];
  if (!has("inc/demo-import.php")) errs.push("inc/demo-import.php is missing (copy shared/inc/demo-import.php)");
  // Byte for byte (not as decoded text), so a BOM, line endings or a stray encoding change count as a difference too.
  else if (!readFileSync(join(dir, "inc/demo-import.php")).equals(Buffer.from(importer))) errs.push("inc/demo-import.php differs from shared/inc/demo-import.php (copy it again, change the shared one only)");
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
  if (has("assets/images")) for (const f of readdirSync(join(dir, "assets/images")).filter((f) => f.endsWith(".svg"))) {
    const name = f.slice(0, -4);
    if (!["jpg", "jpeg", "png", "webp"].some((x) => has(`assets/images/demo/${name}.${x}`))) errs.push(`assets/images/${f} has no raster copy in assets/images/demo/ (scripts/rasterize-images.py)`);
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
    } else errs.push("demo-content.json is missing");
  }

  for (const f of walk(dir).filter((f) => TEXT.test(f))) {
    const rel = relative(dir, f);
    if (/OFL.*\.txt$/.test(rel)) continue; // upstream license texts
    readFileSync(f, "utf8").split("\n").forEach((line, i) => {
      for (const [re, what] of SECRETS) if (re.test(line)) errs.push(`${rel}:${i + 1}: ${what}`);
      for (const e of line.match(EMAIL) ?? []) if (!SAFE_EMAIL.test(e)) errs.push(`${rel}:${i + 1}: real-looking email ${e} (use an example.com / .example address)`);
      if (CJK.test(line)) errs.push(`${rel}:${i + 1}: theme copy must be English`);
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
