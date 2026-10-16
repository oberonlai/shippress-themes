#!/usr/bin/env node
// Builds the Traditional Chinese font subset a multilingual theme bundles for its zh-TW pages.
//
//   node scripts/subset-zh-fonts.mjs <slug> "<Google Fonts family>" <weight[,weight...]> [--single]
//   e.g. node scripts/subset-zh-fonts.mjs hoshizora-camp "LXGW WenKai TC" 400,700
//
// Why: the zh stack must never fall back to a Japanese font (its kanji have Japanese shapes) or to whatever
// Traditional Chinese font the visitor's OS has (different weights and coverage, so one heading mixes styles).
// The theme bundles a real Traditional Chinese font cut down to the characters of its zh-TW sample text, as
// assets/fonts/<family>-zh-tw-<weight>.woff2, and lists it first in the :root:lang(zh) stacks. Only the characters
// the zh-TW sample text uses are kept, so the files stay small. Latin, digits and the like stay with the theme's Latin font.
// Run it again after the zh-TW text changes (check-themes.mjs fails when a character has no glyph).
// Network is used here, at build time only; the theme itself never loads a remote font.
import { mkdirSync, writeFileSync } from "node:fs";
import { dirname, join } from "node:path";
import { fileURLToPath } from "node:url";
import { zhTwText, zhCjkChars } from "./zh-fonts.mjs";

const root = join(dirname(fileURLToPath(import.meta.url)), "..");
const UA = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36";

const [slug, family, weightsArg] = process.argv.slice(2).filter((a) => !a.startsWith("--"));
if (!slug || !family || !weightsArg) {
  console.error('usage: node scripts/subset-zh-fonts.mjs <slug> "<Google Fonts family>" <weight[,weight...]>');
  process.exit(2);
}
const dir = join(root, "themes", slug);
const chars = zhCjkChars(zhTwText(dir));
// Punctuation that sits in a CJK sentence but is often drawn by the Latin font; keep one consistent set in the zh font too.
const extra = "\u00b7\u2014\u2018\u2019\u201c\u201d\u2026\u2022";
const text = [...new Set([...chars, ...extra])].join("");
const slugFamily = family.toLowerCase().replace(/[^a-z0-9]+/g, "-").replace(/^-|-$/g, "");
mkdirSync(join(dir, "assets/fonts"), { recursive: true });
for (const weight of weightsArg.split(",")) {
  const css = await (await fetch(`https://fonts.googleapis.com/css2?family=${encodeURIComponent(family).replace(/%20/g, "+")}:wght@${weight}&text=${encodeURIComponent(text)}`, { headers: { "User-Agent": UA } })).text();
  const url = css.match(/src:\s*url\(([^)]+)\)\s*format\('woff2'\)/)?.[1];
  if (!url) throw new Error(`no woff2 for ${family} ${weight}:\n${css.slice(0, 300)}`);
  const buf = Buffer.from(await (await fetch(url)).arrayBuffer());
  const out = join(dir, `assets/fonts/${slugFamily}-zh-tw-${weight}.woff2`);
  writeFileSync(out, buf);
  console.log(`${out}  ${buf.length} bytes  (${chars.length} CJK characters)`);
}
