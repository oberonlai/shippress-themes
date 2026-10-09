#!/usr/bin/env node
// Immutable, versioned theme releases. Node 18+, no dependencies; talks to GitHub only through the gh CLI.
//   node scripts/release-themes.mjs --dist dist             # check only (pull requests): no writes to GitHub
//   node scripts/release-themes.mjs --dist dist --publish   # push to main: publish every new theme version
// For each dist/<slug>.zip (built by .github/workflows/themes.yml), the release tagged <slug>-v<Version> (Version from
// the theme's style.css) must hold exactly those bytes:
//   no such release           → create it with <slug>.zip (publish only)
//   release without the zip   → upload it (publish only; a run that stopped half way)
//   same bytes                → nothing to do
//   different bytes           → fail: a published version never changes; bump Version in style.css
// Every conflict is reported before anything is published. dist/releases.json then lists each theme's current
// version, immutable download URL and sha256; the workflow attaches it to the moving "themes" release, where the
// ShipPress app reads it (`npm run themes:pin`).
import { createHash } from "node:crypto";
import { spawnSync } from "node:child_process";
import { existsSync, mkdtempSync, readdirSync, readFileSync, rmSync, statSync, writeFileSync } from "node:fs";
import { tmpdir } from "node:os";
import { dirname, join } from "node:path";
import { fileURLToPath } from "node:url";
import { REPO, styleHeader } from "./check-themes.mjs";

const VERSION = /^\d+\.\d+\.\d+$/;

/** A theme's Version from its style.css; throws unless it is plain x.y.z (it becomes part of a tag and a URL). */
export function themeVersion(css, slug = "theme") {
  const v = styleHeader(css).Version;
  if (!v || !VERSION.test(v)) throw new Error(`${slug}: style.css Version must look like 1.2.3 (found ${v ? JSON.stringify(v) : "none"})`);
  return v;
}

/** The immutable release tag for one theme version, e.g. kenchiku-grid-v1.0.0. */
export const releaseTag = (slug, version) => `${slug}-v${version}`;

/** Where a theme version downloads from. Never changes once published. */
export const assetUrl = (slug, version) => `https://github.com/${REPO}/releases/download/${releaseTag(slug, version)}/${slug}.zip`;

export const sha256 = (buf) => createHash("sha256").update(buf).digest("hex");

/** What to do per theme. themes: [{slug, version, sha256}]; existing: tag → {sha256} (null = release without the zip),
 *  tags with no release absent. Returns [{slug, version, tag, sha256, action: create|upload|keep|conflict, published?}]. */
export function planRelease(themes, existing) {
  return themes.map((t) => {
    const tag = releaseTag(t.slug, t.version);
    const step = { ...t, tag };
    if (!Object.hasOwn(existing, tag)) return { ...step, action: "create" };
    const published = existing[tag]?.sha256 ?? null;
    if (published === null) return { ...step, action: "upload" };
    return published === t.sha256 ? { ...step, action: "keep" } : { ...step, action: "conflict", published };
  });
}

/** The conflicts as plain sentences (empty = safe to publish). */
export const conflicts = (plan) => plan.filter((s) => s.action === "conflict").map((s) =>
  `${s.slug}: version ${s.version} is already released (${s.tag}) with different files (published ${s.published}, built ${s.sha256}). ` +
  `Bump Version in themes/${s.slug}/style.css; a released version never changes.`);

/** releases.json: one entry per theme with its current version, immutable URL and sha256 (sorted by slug). */
export function releasesJson(themes, commit = "") {
  return {
    schema: 1,
    repo: REPO,
    ...(commit ? { commit } : {}),
    themes: [...themes].sort((a, b) => a.slug.localeCompare(b.slug)).map((t) => ({
      slug: t.slug, name: t.name, version: t.version, tag: releaseTag(t.slug, t.version), url: assetUrl(t.slug, t.version), sha256: t.sha256, size: t.size,
    })),
  };
}

/** gh runner: {code, stdout, stderr}. */
const ghCli = (args) => {
  const r = spawnSync("gh", args, { encoding: "utf8", maxBuffer: 64 * 1024 * 1024 });
  if (r.error) throw r.error;
  return { code: r.status, stdout: r.stdout, stderr: r.stderr };
};

/** The published sha256 of <slug>.zip in release `tag`: undefined = no release, null = release without that zip.
 *  Any other gh failure throws (never mistake an API error for "not released yet"). */
export function publishedSha256(gh, tag, slug, tmp) {
  const view = gh(["release", "view", tag, "--json", "assets"]);
  if (view.code !== 0) {
    if (/release not found/i.test(view.stderr)) return undefined;
    throw new Error(`gh release view ${tag} failed: ${view.stderr.trim()}`);
  }
  const assets = JSON.parse(view.stdout).assets || [];
  if (!assets.some((a) => a.name === `${slug}.zip`)) return null;
  const dir = mkdtempSync(join(tmp, `${tag}-`));
  try {
    const dl = gh(["release", "download", tag, "--pattern", `${slug}.zip`, "--dir", dir]);
    if (dl.code !== 0) throw new Error(`gh release download ${tag} failed: ${dl.stderr.trim()}`);
    return sha256(readFileSync(join(dir, `${slug}.zip`)));
  } finally { rmSync(dir, { recursive: true, force: true }); }
}

/** Reads dist/<slug>.zip + themes/<slug>/style.css for every built theme. */
export function builtThemes(root, dist) {
  return readdirSync(dist).filter((f) => f.endsWith(".zip")).sort().map((f) => {
    const slug = f.slice(0, -4);
    const css = readFileSync(join(root, "themes", slug, "style.css"), "utf8");
    const buf = readFileSync(join(dist, f));
    return { slug, name: styleHeader(css)["Theme Name"] || slug, version: themeVersion(css, slug), sha256: sha256(buf), size: buf.length };
  });
}

/** Check (and with publish: carry out) the plan. Returns the plan; throws on conflicts before publishing anything. */
export function release({ root, dist, publish = false, gh = ghCli, commit = "", log = console.log }) {
  const themes = builtThemes(root, dist);
  if (!themes.length) throw new Error(`no theme zips in ${dist}`);
  const tmp = mkdtempSync(join(tmpdir(), "theme-release-"));
  const existing = {};
  try {
    for (const t of themes) {
      const tag = releaseTag(t.slug, t.version);
      const sum = publishedSha256(gh, tag, t.slug, tmp);
      if (sum !== undefined) existing[tag] = { sha256: sum };
    }
  } finally { rmSync(tmp, { recursive: true, force: true }); }
  const plan = planRelease(themes, existing);
  const bad = conflicts(plan);
  if (bad.length) throw new Error(bad.join("\n"));
  for (const s of plan) {
    const zip = join(dist, `${s.slug}.zip`);
    if (s.action === "keep") { log(`= ${s.tag} already released with these bytes`); continue; }
    if (!publish) { log(`+ ${s.tag} would be ${s.action === "create" ? "released" : "completed"} (${s.sha256})`); continue; }
    const args = s.action === "create"
      ? ["release", "create", s.tag, zip, "--title", `${s.name} ${s.version}`, "--latest=false",
         "--notes", `${s.name} ${s.version}. This download never changes.\nsha256: ${s.sha256}\nInstall: WordPress admin → Appearance → Themes → Add New Theme → Upload Theme.`,
         ...(commit ? ["--target", commit] : [])]
      : ["release", "upload", s.tag, zip]; // no --clobber: a published zip is never replaced
    const r = gh(args);
    if (r.code !== 0) throw new Error(`gh ${args.slice(0, 3).join(" ")} failed: ${r.stderr.trim()}`);
    log(`+ ${s.tag} released (${s.sha256})`);
  }
  writeFileSync(join(dist, "releases.json"), JSON.stringify(releasesJson(themes, commit), null, 2) + "\n");
  log(`✓ ${join(dist, "releases.json")} (${themes.length} themes)`);
  return plan;
}

function main() {
  const argv = process.argv.slice(2);
  const i = argv.indexOf("--dist");
  const root = join(dirname(fileURLToPath(import.meta.url)), "..");
  const dist = i >= 0 ? argv[i + 1] : join(root, "dist");
  if (!dist || !existsSync(dist) || !statSync(dist).isDirectory()) { console.error("usage: node scripts/release-themes.mjs --dist <dir with <slug>.zip files> [--publish]"); process.exit(2); }
  try {
    release({ root, dist, publish: argv.includes("--publish"), commit: process.env.GITHUB_SHA || "" });
  } catch (e) {
    for (const l of String(e.message).split("\n")) console.error(`::error::${l}`);
    process.exit(1);
  }
}

if (process.argv[1] && fileURLToPath(import.meta.url) === process.argv[1]) main();
