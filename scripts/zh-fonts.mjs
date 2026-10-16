// Traditional Chinese (zh-TW) font rules for multilingual themes. Node 18+, no dependencies.
//
// A zh-TW page must be set in a real Traditional Chinese font that has a glyph for every character of the theme's
// zh-TW sample text. Never in a Japanese font (its kanji are Japanese shapes) and never in "whatever the visitor's OS
// has" (weights and coverage differ per OS, so one heading mixes styles). So a theme bundles a subset of a Traditional
// Chinese font (assets/fonts/*-zh-tw-*.woff2, built by scripts/subset-zh-fonts.mjs) and lists it first in its
// :root:lang(zh) stacks; checkZhFonts() fails the theme otherwise.
import { existsSync, readdirSync, readFileSync, statSync } from "node:fs";
import { join, relative } from "node:path";
import { brotliDecompressSync } from "node:zlib";

const walk = (d) => readdirSync(d).flatMap((f) => { const p = join(d, f); return statSync(p).isDirectory() ? walk(p) : [p]; });
const ZH_FILE = /(?:^|[/.])zh-TW(?:[/.])/;
// Characters that must come from the zh font: CJK punctuation, CJK ideographs, fullwidth forms (not the ideographic space).
const CJK_CHAR = /[\u3001-\u303f\u3400-\u9fff\uf900-\ufaff\uff01-\uffef]/u;

/** All text the theme shows in zh-TW: every text file whose path has a zh-TW segment (demo-content.zh-TW.json, inc/i18n/zh-TW.php, inc/info/zh-TW/...). */
export function zhTwText(dir) {
  return walk(dir)
    .filter((f) => /\.(php|html|json|css|md|txt)$/.test(f) && ZH_FILE.test(relative(dir, f)))
    .map((f) => readFileSync(f, "utf8"))
    .join("\n");
}

/** The distinct characters of `text` that need a CJK glyph. */
export const zhCjkChars = (text) => [...new Set([...text].filter((c) => CJK_CHAR.test(c)))].sort();

const WOFF2_TAGS = ["cmap", "head", "hhea", "hmtx", "maxp", "name", "OS/2", "post", "cvt ", "fpgm", "glyf", "loca", "prep", "CFF ", "VORG", "EBDT", "EBLC", "gasp", "hdmx", "kern", "LTSH", "PCLT", "VDMX", "vhea", "vmtx", "BASE", "GDEF", "GPOS", "GSUB", "EBSC", "JSTF", "MATH", "CBDT", "CBLC", "COLR", "CPAL", "SVG ", "sbix", "acnt", "avar", "bdat", "bloc", "bsln", "cvar", "fdsc", "feat", "fmtx", "fvar", "gvar", "hsty", "just", "lcar", "mort", "morx", "opbd", "prop", "trak", "Zapf", "Silf", "Glat", "Gloc", "Feat", "Sill"];

/** The cmap table (raw bytes) of a WOFF2 file. cmap is never transformed, so it can be read straight from the decompressed stream. */
function woff2Cmap(buf) {
  if (buf.toString("latin1", 0, 4) !== "wOF2") throw new Error("not a WOFF2 file");
  const numTables = buf.readUInt16BE(12);
  let pos = 48;
  const base128 = () => { let v = 0; for (let i = 0; i < 5; i++) { const b = buf[pos++]; v = v * 128 + (b & 0x7f); if (!(b & 0x80)) return v; } throw new Error("bad UIntBase128"); };
  const tables = [];
  for (let i = 0; i < numTables; i++) {
    const flags = buf[pos++];
    const idx = flags & 0x3f;
    let tag;
    if (idx === 63) { tag = buf.toString("latin1", pos, pos + 4); pos += 4; } else tag = WOFF2_TAGS[idx];
    const version = flags >> 6;
    const origLength = base128();
    // glyf/loca are transformed unless version 3; every other table only when version is not 0.
    const transformed = tag === "glyf" || tag === "loca" ? version !== 3 : version !== 0;
    tables.push({ tag, length: transformed ? base128() : origLength });
  }
  const data = brotliDecompressSync(buf.subarray(pos, pos + buf.readUInt32BE(20)));
  let off = 0;
  for (const t of tables) { if (t.tag === "cmap") return data.subarray(off, off + t.length); off += t.length; }
  throw new Error("WOFF2 has no cmap table");
}

/** Set of code points that have a real (non-.notdef) glyph in a WOFF2 file (cmap formats 4 and 12). */
export function woff2Codepoints(buf) {
  const cmap = woff2Cmap(buf);
  const out = new Set();
  for (let i = 0, n = cmap.readUInt16BE(2); i < n; i++) {
    const o = cmap.readUInt32BE(4 + i * 8 + 4);
    const format = cmap.readUInt16BE(o);
    if (format === 12) {
      for (let g = 0, ng = cmap.readUInt32BE(o + 12); g < ng; g++) {
        const [s, e, gid] = [0, 4, 8].map((k) => cmap.readUInt32BE(o + 16 + g * 12 + k));
        for (let c = s; c <= e; c++) if (gid + (c - s) !== 0) out.add(c);
      }
    } else if (format === 4) {
      const segX2 = cmap.readUInt16BE(o + 6);
      const end = o + 14, start = end + segX2 + 2, delta = start + segX2, range = delta + segX2;
      for (let s = 0; s < segX2 / 2; s++) {
        const [e, st, d, r] = [cmap.readUInt16BE(end + s * 2), cmap.readUInt16BE(start + s * 2), cmap.readUInt16BE(delta + s * 2), cmap.readUInt16BE(range + s * 2)];
        for (let c = st; c <= e && c < 0xffff; c++) {
          const gid = r === 0 ? (c + d) & 0xffff : (() => { const g = cmap.readUInt16BE(range + s * 2 + r + (c - st) * 2); return g === 0 ? 0 : (g + d) & 0xffff; })();
          if (gid) out.add(c);
        }
      }
    }
  }
  return out;
}

/** Families that must never appear in a zh stack: a font that draws Japanese kanji (a "JA" / "JP" / "CJK" subset or file). */
const JAPANESE_FILE = /(?:^|[-_/])(?:ja|jp|cjk)(?:[-_.]|$)/i;
const JAPANESE_FAMILY = /\b(?:JA|JP|CJK)\b/i;

/** Problems with a theme's zh-TW fonts (empty = fine). Only themes with demo-content.zh-TW.json are checked. */
export function checkZhFonts(dir) {
  if (!existsSync(join(dir, "demo-content.zh-TW.json"))) return [];
  const errs = [];
  const fontsDir = join(dir, "assets/fonts");
  const files = existsSync(fontsDir) ? readdirSync(fontsDir).filter((f) => /zh-tw.*\.woff2$/i.test(f)) : [];
  if (!files.length) return ["demo-content.zh-TW.json needs a bundled Traditional Chinese font subset (assets/fonts/<family>-zh-tw-<weight>.woff2; build it with node scripts/subset-zh-fonts.mjs)"];

  // 1. Every zh-TW character has a glyph in the bundled font (each weight on its own: a missing glyph in one weight would fall back at that weight only).
  const chars = zhCjkChars(zhTwText(dir));
  for (const f of files) {
    let cps;
    try { cps = woff2Codepoints(readFileSync(join(fontsDir, f))); } catch (e) { errs.push(`assets/fonts/${f}: cannot read the font (${e.message})`); continue; }
    const missing = chars.filter((c) => !cps.has(c.codePointAt(0)));
    if (missing.length) errs.push(`assets/fonts/${f}: no glyph for ${missing.length} zh-TW character(s): ${missing.slice(0, 30).join("")}${missing.length > 30 ? "…" : ""} (run node scripts/subset-zh-fonts.mjs again)`);
  }

  // 2. The :root:lang(zh) stacks start with that font and never name a Japanese font.
  let themeJson = null;
  try { themeJson = JSON.parse(readFileSync(join(dir, "theme.json"), "utf8")); } catch { return errs; }
  const entries = themeJson.settings?.typography?.fontFamilies ?? [];
  const srcs = (face) => (Array.isArray(face.src) ? face.src : [face.src]).filter(Boolean);
  const firstName = (stack) => String(stack ?? "").split(",")[0].trim().replace(/^["']|["']$/g, "");
  // WordPress names every @font-face after the family ENTRY that holds it (the first name of its fontFamily) and ignores
  // the face's own fontFamily. A "Klee One JA" face inside the "Klee One" entry is therefore just more of "Klee One", so a
  // stack that lists "Klee One" also gets the Japanese kanji. Each CJK subset needs an entry of its own.
  const isJa = (face) => srcs(face).some((s) => JAPANESE_FILE.test(s.replace(/^file:\.\/assets\/fonts\//, ""))) || JAPANESE_FAMILY.test(face.fontFamily ?? "");
  const zhFamilies = new Set(), jaFamilies = new Set();
  for (const entry of entries) {
    const name = firstName(entry.fontFamily);
    const faces = entry.fontFace ?? [];
    for (const fc of faces) if (fc.fontFamily !== name) errs.push(`theme.json: the @font-face for ${srcs(fc)[0]} says fontFamily "${fc.fontFamily}" but sits in the "${name}" entry; WordPress renames it to "${name}", so it joins that family. Give it its own fontFamilies entry`);
    const zh = faces.some((fc) => srcs(fc).some((x) => /zh-tw/i.test(x))), ja = faces.some(isJa);
    if (zh) zhFamilies.add(name);
    if (ja) jaFamilies.add(name);
    if (zh && ja) errs.push(`theme.json: the "${name}" family holds both a zh-TW font and a Japanese font file; zh pages would mix them (one fontFamilies entry per CJK subset)`);
  }
  const bundled = new Set(entries.flatMap((e) => (e.fontFace ?? []).flatMap(srcs)));
  for (const f of files) if (![...bundled].some((x) => x.endsWith(f))) errs.push(`theme.json declares no @font-face for assets/fonts/${f} (add it to settings.typography.fontFamilies[].fontFace)`);
  const listed = zhFamilies;
  if (!zhFamilies.size) return errs;
  const css = existsSync(join(dir, "style.css")) ? readFileSync(join(dir, "style.css"), "utf8") : "";
  const blocks = [...css.matchAll(/:root:lang\(zh[^)]*\)\s*\{([^}]*)\}/g)].map((m) => m[1]);
  if (!blocks.length) return [...errs, "style.css needs a :root:lang(zh) rule that sets the display and body font stacks to the bundled zh-TW font"];
  for (const slot of ["display", "body"]) {
    const stacks = blocks.flatMap((b) => [...b.matchAll(new RegExp(`--wp--preset--font-family--${slot}\\s*:\\s*([^;]+);`, "g"))].map((m) => m[1]));
    if (!stacks.length) { errs.push(`:root:lang(zh) must set --wp--preset--font-family--${slot}`); continue; }
    for (const stack of stacks) {
      const names = stack.split(",").map((n) => n.trim().replace(/^["']|["']$/g, ""));
      // Headings (display) use the bundled font; body text may use the system zh-TW fonts (one family per OS, full coverage), but never a Japanese font.
      if (slot === "display" && !names.some((n) => listed.has(n))) errs.push(`:root:lang(zh) ${slot} stack must list the bundled zh-TW font (${[...listed].join(", ")}): ${stack.trim()}`);
      if (slot === "body" && names.some((n) => listed.has(n))) errs.push(`:root:lang(zh) body stack lists the bundled display font (${names.filter((n) => listed.has(n)).join(", ")}): body text would be set in the heading face`);
      const ja = names.filter((n) => jaFamilies.has(n));
      if (ja.length) errs.push(`:root:lang(zh) ${slot} stack lists the Japanese font ${ja.join(", ")} (its kanji are Japanese shapes; zh uses the zh-TW font only)`);
    }
  }
  return errs;
}
