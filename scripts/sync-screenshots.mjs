#!/usr/bin/env node
// Copies the catalogue screenshots the ShipPress app renders (app/themes/<slug>/screenshots/<page>-{desktop,mobile}.webp,
// written by the app's scripts/theme-screenshots.mjs) into this repo and shows them in the READMEs. Node 18+, no dependencies.
//   node scripts/sync-screenshots.mjs <app screenshots root, e.g. ../app/themes> [slug ...]   # default: every theme
//   node scripts/sync-screenshots.mjs --strip                                                   # release build only, see below
// Per theme: themes/<slug>/screenshots/ is replaced by the app's *.webp files (a theme the app has no screenshots for is
// skipped with a warning), and themes/<slug>/README.md gets a "## Screenshots" section between the screenshots markers
// (home desktop + mobile side by side, then a link per other page). The root README.md gets a "## Gallery" of every theme
// with a home screenshot, between the gallery markers. Running it twice changes nothing.
// The screenshots are not part of a theme: the release zips leave out screenshots/ and, via --strip (run on the CI
// checkout before zipping), the README section, so syncing screenshots never changes a released theme's bytes.
import { copyFileSync, existsSync, mkdirSync, readdirSync, readFileSync, rmSync, statSync, writeFileSync } from "node:fs";
import { dirname, join, resolve } from "node:path";
import { fileURLToPath } from "node:url";
import { DEMO_LANGS, styleHeader } from "./check-themes.mjs";

const SHOTS = ["<!-- screenshots:start -->", "<!-- screenshots:end -->"];
const GALLERY = ["<!-- gallery:start -->", "<!-- gallery:end -->"];
const PER_ROW = 3;
const SHOT = /^(.+)-(desktop|mobile)\.webp$/;

const themeName = (dir, slug) => {
  const css = join(dir, "style.css");
  return (existsSync(css) && styleHeader(readFileSync(css, "utf8"))["Theme Name"]) || slug;
};
const label = (page) => page.replace(/-/g, " ").replace(/^./, (c) => c.toUpperCase());
const escape = (s) => s.replace(/&/g, "&amp;").replace(/"/g, "&quot;").replace(/</g, "&lt;");

/** md with the block between the markers replaced by body; appended (after a blank line) when the markers are absent,
 *  or inserted by `insert(md, block)` when given. */
export function upsertSection(md, [start, end], body, insert) {
  const block = `${start}\n${body}\n${end}`;
  const at = md.indexOf(start), stop = md.indexOf(end, at);
  if (at >= 0 && stop >= 0) return md.slice(0, at) + block + md.slice(stop + end.length);
  return (insert ?? append)(md, block);
}

const append = (md, block) => `${md}${md && !md.endsWith("\n") ? "\n" : ""}${md ? "\n" : ""}${block}\n`;

/** md without the screenshots section, exactly as it was before upsertSection appended it. */
export const stripScreenshots = (md) => md.replace(/\n?<!-- screenshots:start -->[\s\S]*?<!-- screenshots:end -->\n?/, "");

/** Pages with screenshots in `files`, in theme-meta.json order first, then by name. */
export function shotPages(files, order = []) {
  const pages = [...new Set(files.map((f) => f.match(SHOT)?.[1]).filter(Boolean))];
  const rank = (p) => (order.includes(p) ? order.indexOf(p) : order.length);
  return pages.sort((a, b) => rank(a) - rank(b) || a.localeCompare(b));
}

/** The "## Screenshots" section of a theme README. */
export function screenshotsSection(name, files, order, langs = []) {
  const has = (f) => files.includes(f);
  const lines = ["## Screenshots", ""];
  if (has("home-desktop.webp") || has("home-mobile.webp")) {
    lines.push("<table>", "<tr>");
    if (has("home-desktop.webp")) lines.push(`<td valign="top"><img src="screenshots/home-desktop.webp" width="640" alt="${escape(name)} home page on desktop"></td>`);
    if (has("home-mobile.webp")) lines.push(`<td valign="top"><img src="screenshots/home-mobile.webp" width="200" alt="${escape(name)} home page on mobile"></td>`);
    lines.push("</tr>", "</table>", "");
  }
  for (const page of shotPages(files, order).filter((p) => p !== "home")) {
    const links = ["desktop", "mobile"].filter((v) => has(`${page}-${v}.webp`)).map((v) => `[${v}](screenshots/${page}-${v}.webp)`);
    lines.push(`- ${label(page)}: ${links.join(" · ")}`);
  }
  // Sample content in other languages: screenshots/<lang>/ holds the same pages captured in that language.
  if (langs.length) lines.push(`- Other languages (home page): ${langs.map((l) => `[${l}](screenshots/${l}/home-desktop.webp)`).join(" · ")}`);
  while (lines.at(-1) === "") lines.pop();
  return lines.join("\n");
}

/** The "## Gallery" section of the root README: themes = [{slug, name}] with a home desktop screenshot. */
export function gallerySection(themes) {
  const lines = ["## Gallery", "", "<table>"];
  for (let i = 0; i < themes.length; i += PER_ROW) {
    lines.push("<tr>");
    for (const { slug, name } of themes.slice(i, i + PER_ROW)) {
      lines.push(`<td align="center" valign="top" width="33%"><a href="themes/${slug}"><img src="themes/${slug}/screenshots/home-desktop.webp" width="260" alt="${escape(name)}"></a><br><a href="themes/${slug}">${escape(name)}</a></td>`);
    }
    lines.push("</tr>");
  }
  lines.push("</table>");
  return lines.join("\n");
}

/** Puts a new gallery block right after the "## Themes" table (before the next "## " heading), else at the end. */
export function insertAfterThemes(md, block) {
  const themes = md.search(/^## Themes\s*$/m);
  const next = themes >= 0 ? md.slice(themes + 1).search(/^## /m) : -1;
  if (next < 0) return append(md, block);
  const at = themes + 1 + next;
  return `${md.slice(0, at)}${block}\n\n${md.slice(at)}`;
}

const writeIfChanged = (file, text) => { if (!existsSync(file) || readFileSync(file, "utf8") !== text) writeFileSync(file, text); };

/** Syncs screenshots from `from` (<from>/<slug>/screenshots/*.webp) into the repo at `root`. Returns the synced slugs. */
export function sync({ root, from, slugs, log = console.log, warn = console.warn }) {
  const themesDir = join(root, "themes");
  const all = readdirSync(themesDir).filter((d) => statSync(join(themesDir, d)).isDirectory()).sort();
  const synced = [];
  for (const slug of slugs?.length ? slugs : all) {
    const dir = join(themesDir, slug), src = join(from, slug, "screenshots");
    if (!existsSync(dir)) { warn(`! ${slug}: no themes/${slug} in this repo, skipped`); continue; }
    if (!existsSync(src)) { warn(`! ${slug}: no screenshots at ${src}, skipped`); continue; }
    const files = readdirSync(src).filter((f) => f.endsWith(".webp")).sort();
    const out = join(dir, "screenshots");
    rmSync(out, { recursive: true, force: true }); mkdirSync(out, { recursive: true });
    for (const f of files) copyFileSync(join(src, f), join(out, f));
    // Per-language captures (<src>/<lang>/*.webp) for themes whose sample content comes in other languages.
    const langs = DEMO_LANGS.filter((l) => existsSync(join(src, l)) && statSync(join(src, l)).isDirectory());
    for (const l of langs) {
      mkdirSync(join(out, l), { recursive: true });
      for (const f of readdirSync(join(src, l)).filter((f) => f.endsWith(".webp"))) copyFileSync(join(src, l, f), join(out, l, f));
    }
    const name = themeName(dir, slug);
    const metaFile = join(dir, "theme-meta.json");
    const order = existsSync(metaFile) ? JSON.parse(readFileSync(metaFile, "utf8")).pages ?? [] : [];
    const readme = join(dir, "README.md");
    const md = existsSync(readme) ? readFileSync(readme, "utf8") : `# ${name}\n`;
    writeIfChanged(readme, upsertSection(md, SHOTS, screenshotsSection(name, files, order, langs)));
    log(`✓ ${slug}: ${files.length} screenshots${langs.length ? ` + ${langs.join(", ")}` : ""}`);
    synced.push(slug);
  }
  const shown = all.filter((s) => existsSync(join(themesDir, s, "screenshots", "home-desktop.webp"))).map((slug) => ({ slug, name: themeName(join(themesDir, slug), slug) }));
  const rootReadme = join(root, "README.md");
  if (shown.length) {
    const md = existsSync(rootReadme) ? readFileSync(rootReadme, "utf8") : "";
    writeIfChanged(rootReadme, upsertSection(md, GALLERY, gallerySection(shown), insertAfterThemes));
    log(`✓ README.md gallery (${shown.length} themes)`);
  }
  return synced;
}

/** Release build: drops the screenshots section from every themes/<slug>/README.md (the zips leave it out). */
export function stripAll(root) {
  const themesDir = join(root, "themes");
  for (const slug of readdirSync(themesDir)) {
    const readme = join(themesDir, slug, "README.md");
    if (existsSync(readme)) writeIfChanged(readme, stripScreenshots(readFileSync(readme, "utf8")));
  }
}

function main() {
  const root = join(dirname(fileURLToPath(import.meta.url)), "..");
  const [from, ...slugs] = process.argv.slice(2);
  if (from === "--strip") return stripAll(root);
  if (!from || !existsSync(from)) { console.error("usage: node scripts/sync-screenshots.mjs <app screenshots root, e.g. ../app/themes> [slug ...]"); process.exit(2); }
  sync({ root, from: resolve(from), slugs });
}

if (process.argv[1] && fileURLToPath(import.meta.url) === resolve(process.argv[1])) main();
