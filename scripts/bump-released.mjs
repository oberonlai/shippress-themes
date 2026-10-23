#!/usr/bin/env node
// Released themes must not change under the same version (release-themes.mjs refuses to publish, and one stuck theme
// blocks the whole release run — Yamabiko 1.0.1, 2026-10-22). Pure git, no network beyond what is fetched already:
//   node scripts/bump-released.mjs --check [slug…]   # exit 1 when a released version (tag <slug>-v<Version>) has other files
//   node scripts/bump-released.mjs --write [slug…]   # bump those themes to the next patch version instead
// "Released" = the git tag <slug>-v<Version> exists (gh release create makes it). "Changed" = the theme folder at HEAD
// (or the working tree with --worktree) differs from the tag, ignoring screenshots/ and the README screenshots section,
// exactly what the release zip leaves out. A bump updates style.css Version, readme.txt Stable tag + a changelog entry,
// theme-meta.json version; run `node scripts/check-themes.mjs --write` afterwards for index.json (--write does it).
import { spawnSync } from "node:child_process";
import { existsSync, readdirSync, readFileSync, statSync, writeFileSync } from "node:fs";
import { dirname, join } from "node:path";
import { fileURLToPath } from "node:url";

const git = (root, args) => spawnSync("git", ["-C", root, ...args], { encoding: "utf8", maxBuffer: 256 * 1024 * 1024 });
export const cssVersion = (css) => (css.match(/\/\*[\s\S]*?\*\//)?.[0].match(/^\s*Version:\s*(\S+)\s*$/m) || [])[1] || "";
export const stripShots = (md) => md.replace(/\n?<!-- screenshots:start -->[\s\S]*?<!-- screenshots:end -->\n?/, "");
export function nextPatch(v) { const m = /^(\d+)\.(\d+)\.(\d+)$/.exec(v); if (!m) throw new Error(`bad version ${v}`); return `${m[1]}.${m[2]}.${+m[3] + 1}`; }

/** Bumped copies of the three files (pure; easy to test). */
export function bumpTexts({ css, readme, meta }, from, to, note) {
  const out = {};
  out.css = css.replace(/^(\s*Version:\s*)\S+(\s*)$/m, `$1${to}$2`);
  if (readme != null) {
    let r = readme.replace(/^(Stable tag:\s*)\S+/m, `$1${to}`);
    const entry = `= ${to} =\n* ${note}\n`;
    r = /^== Changelog ==\s*$/m.test(r) ? r.replace(/^== Changelog ==\s*\n/m, (h) => `${h}${entry}\n`) : `${r.replace(/\n*$/, "\n")}\n== Changelog ==\n${entry}`;
    out.readme = r;
  }
  // Only the version value changes: re-serialising would rewrite \uXXXX escapes as raw CJK, which check-themes rejects.
  if (meta != null) { JSON.parse(meta); out.meta = /"version"\s*:\s*"[^"]*"/.test(meta) ? meta.replace(/("version"\s*:\s*")[^"]*(")/, `$1${to}$2`) : meta.replace(/^(\s*\{\s*?\n)(\s*)/, (m, a, ind) => `${a}${ind || "  "}"version": "${to}",\n${ind}`); if (JSON.parse(out.meta).version !== to) throw new Error(`could not set theme-meta version ${to}`); }
  if (cssVersion(out.css) !== to) throw new Error(`could not set Version ${to} (was ${from})`);
  return out;
}

/** Files (theme-relative) that differ between the release tag and HEAD / the working tree; [] = same as released. */
export function changedSinceTag(root, slug, tag, worktree = false) {
  const base = `themes/${slug}`;
  const r = git(root, ["diff", "--name-only", ...(worktree ? [tag] : [tag, "HEAD"]), "--", base, `:(exclude)${base}/screenshots`]);
  if (r.status !== 0) throw new Error(`git diff ${tag}: ${r.stderr.trim()}`);
  let files = r.stdout.split("\n").filter(Boolean).map((f) => f.slice(base.length + 1));
  if (files.includes("README.md")) {
    const old = git(root, ["show", `${tag}:${base}/README.md`]).stdout;
    const now = worktree ? (existsSync(join(root, base, "README.md")) ? readFileSync(join(root, base, "README.md"), "utf8") : "") : git(root, ["show", `HEAD:${base}/README.md`]).stdout;
    if (stripShots(old) === stripShots(now)) files = files.filter((f) => f !== "README.md");
  }
  if (worktree) { // new untracked files count too (git add -A would include them)
    const u = git(root, ["ls-files", "--others", "--exclude-standard", "--", base, `:(exclude)${base}/screenshots`]).stdout.split("\n").filter(Boolean).map((f) => f.slice(base.length + 1));
    files = [...new Set([...files, ...u])];
  }
  return files.sort();
}

const hasTag = (root, tag) => git(root, ["rev-parse", "-q", "--verify", `refs/tags/${tag}`]).status === 0;

/** [{slug, version, tag, files}] for themes whose current version is released but whose files changed. */
export function drift(root, slugs, worktree = false) {
  const out = [];
  for (const slug of slugs) {
    const p = join(root, "themes", slug, "style.css");
    if (!existsSync(p)) continue;
    const version = cssVersion(readFileSync(p, "utf8")); const tag = `${slug}-v${version}`;
    if (!version || !hasTag(root, tag)) continue;
    const files = changedSinceTag(root, slug, tag, worktree);
    if (files.length) out.push({ slug, version, tag, files });
  }
  return out;
}

export function bump(root, d) {
  const dir = join(root, "themes", d.slug); const to = nextPatch(d.version);
  const rd = (f) => (existsSync(join(dir, f)) ? readFileSync(join(dir, f), "utf8") : null);
  const shown = d.files.slice(0, 4).join(", ") + (d.files.length > 4 ? ` and ${d.files.length - 4} more` : "");
  const t = bumpTexts({ css: rd("style.css"), readme: rd("readme.txt"), meta: rd("theme-meta.json") }, d.version, to, `Updated theme files (${shown}).`);
  writeFileSync(join(dir, "style.css"), t.css);
  if (t.readme != null) writeFileSync(join(dir, "readme.txt"), t.readme);
  if (t.meta != null) writeFileSync(join(dir, "theme-meta.json"), t.meta);
  return to;
}

function main() {
  const argv = process.argv.slice(2);
  const root = join(dirname(fileURLToPath(import.meta.url)), "..");
  const all = readdirSync(join(root, "themes")).filter((d) => statSync(join(root, "themes", d)).isDirectory()).sort();
  const pick = argv.filter((a) => !a.startsWith("--")); const slugs = pick.length ? pick : all;
  if (git(root, ["tag", "-l", "*-v*"]).stdout.trim() === "") { console.log("bump-released: no release tags in this checkout (git fetch --tags) — skipped"); return; }
  const found = drift(root, slugs, argv.includes("--worktree"));
  if (!found.length) { console.log(`✓ released versions unchanged (${slugs.length} themes)`); return; }
  if (argv.includes("--write")) {
    for (const d of found) console.log(`↑ ${d.slug} ${d.version} → ${bump(root, d)} (changed: ${d.files.join(", ")})`);
    const r = spawnSync("node", [join(root, "scripts/check-themes.mjs"), "--write"], { encoding: "utf8" });
    if (!existsSync(join(root, "index.json")) || r.error) { console.error("check-themes --write failed"); process.exit(1); }
    return;
  }
  for (const d of found) console.error(`✗ ${d.slug}: ${d.tag} is released but these files changed: ${d.files.join(", ")}. Bump Version (node scripts/bump-released.mjs --write ${d.slug}).`);
  process.exit(1);
}

if (process.argv[1] && fileURLToPath(import.meta.url) === process.argv[1]) main();
