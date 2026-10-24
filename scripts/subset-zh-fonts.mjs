#!/usr/bin/env node
// Builds the Traditional Chinese font subset a multilingual theme bundles for its zh-TW pages.
//
//   node scripts/subset-zh-fonts.mjs <slug> "<family>" <weight[,weight...]>
//   e.g. node scripts/subset-zh-fonts.mjs hoshizora-camp "Noto Serif TC" 400,700
//
// Why: the zh stack must never fall back to a Japanese font (its kanji have Japanese shapes) or to whatever
// Traditional Chinese font the visitor's OS has. The theme bundles a real Traditional Chinese font cut down to the
// characters of its zh-TW sample text, as assets/fonts/<family>-zh-tw-<weight>.woff2.
//
// How: the subset is made LOCALLY with fontTools (varLib.instancer for variable fonts, then subset to WOFF2) from a
// full font file in the font cache ($SHIPPRESS_FONT_DIR, default ~/.cache/shippress-fonts). Google Fonts' css2 `text=`
// API is NOT used: for long texts it ignores `text=` and serves unicode-range slices, and taking the first slice
// silently produced fonts without CJK glyphs. A missing font file is fetched once from github.com/google/fonts.
// Every output is verified to contain a glyph for every CJK character of the zh-TW text; otherwise the script fails.
import { existsSync, mkdirSync, readFileSync, writeFileSync } from "node:fs";
import { execFileSync } from "node:child_process";
import { homedir } from "node:os";
import { dirname, join } from "node:path";
import { fileURLToPath } from "node:url";
import { zhTwText, zhCjkChars, woff2Codepoints } from "./zh-fonts.mjs";

const root = join(dirname(fileURLToPath(import.meta.url)), "..");
const cache = process.env.SHIPPRESS_FONT_DIR || join(homedir(), ".cache/shippress-fonts");

// family -> [file name in cache, path in github.com/google/fonts]. Variable fonts are instanced per weight.
const SOURCES = {
  "Noto Sans TC": ["NotoSansTC[wght].ttf", "ofl/notosanstc/NotoSansTC[wght].ttf"],
  "Noto Serif TC": ["NotoSerifTC[wght].ttf", "ofl/notoseriftc/NotoSerifTC[wght].ttf"],
  "Noto Sans JP": ["NotoSansJP[wght].ttf", "ofl/notosansjp/NotoSansJP[wght].ttf"],
  "Noto Serif JP": ["NotoSerifJP[wght].ttf", "ofl/notoserifjp/NotoSerifJP[wght].ttf"],
  "LXGW WenKai TC": { 300: ["LXGWWenKaiTC-Light.ttf", "ofl/lxgwwenkaitc/LXGWWenKaiTC-Light.ttf"], 400: ["LXGWWenKaiTC-Regular.ttf", "ofl/lxgwwenkaitc/LXGWWenKaiTC-Regular.ttf"], 700: ["LXGWWenKaiTC-Bold.ttf", "ofl/lxgwwenkaitc/LXGWWenKaiTC-Bold.ttf"] },
  "Huninn": { 400: ["Huninn-Regular.ttf", "ofl/huninn/Huninn-Regular.ttf"] },
};

const [slug, family, weightsArg] = process.argv.slice(2).filter((a) => !a.startsWith("--"));
if (!slug || !family || !weightsArg) {
  console.error('usage: node scripts/subset-zh-fonts.mjs <slug> "<family>" <weight[,weight...]>');
  process.exit(2);
}
const fail = (msg) => { console.error(`subset-zh-fonts: ${msg}`); process.exit(1); };
if (!SOURCES[family]) fail(`unknown family "${family}". Add it to SOURCES (local file + google/fonts path). Known: ${Object.keys(SOURCES).join(", ")}`);

const dir = join(root, "themes", slug);
if (!existsSync(dir)) fail(`no theme dir ${dir}`);
const chars = zhCjkChars(zhTwText(dir));
if (!chars.length) fail(`theme ${slug} has no zh-TW CJK text`);
// Punctuation that sits in a CJK sentence but is often drawn by the Latin font; keep one consistent set in the zh font too.
const extra = "\u00b7\u2014\u2018\u2019\u201c\u201d\u2026\u2022";
const text = [...new Set([...chars, ...extra])].join("");
const slugFamily = family.toLowerCase().replace(/[^a-z0-9]+/g, "-").replace(/^-|-$/g, "");

// A Python with fontTools + brotli (needed to write WOFF2): $SHIPPRESS_FONT_PY, then the cache venv (created on first use), then python3.
function python() {
  const ok = (py) => { try { execFileSync(py, ["-c", "import fontTools, brotli"], { stdio: "ignore" }); return true; } catch { return false; } };
  for (const py of [process.env.SHIPPRESS_FONT_PY, join(cache, "venv/bin/python"), "python3"].filter(Boolean)) if (ok(py)) return py;
  mkdirSync(cache, { recursive: true });
  execFileSync("python3", ["-m", "venv", join(cache, "venv")], { stdio: "inherit" });
  execFileSync(join(cache, "venv/bin/pip"), ["install", "-q", "fonttools", "brotli"], { stdio: "inherit" });
  return join(cache, "venv/bin/python");
}

async function source(weight) {
  const s = SOURCES[family];
  const entry = Array.isArray(s) ? s : s[weight];
  if (!entry) fail(`${family} has no weight ${weight} (static weights: ${Object.keys(s).join(", ")})`);
  const [file, ghPath] = entry;
  const p = join(cache, file);
  if (!existsSync(p)) {
    mkdirSync(cache, { recursive: true });
    const url = `https://raw.githubusercontent.com/google/fonts/main/${ghPath.split("/").map(encodeURIComponent).join("/")}`;
    console.log(`fetching ${url} -> ${p} (once)`);
    const res = await fetch(url);
    if (!res.ok) fail(`download ${url}: HTTP ${res.status}`);
    writeFileSync(p, Buffer.from(await res.arrayBuffer()));
  }
  return p;
}

const PY = String.raw`
import sys
from fontTools.ttLib import TTFont
from fontTools import subset
src, weight, out, text = sys.argv[1], float(sys.argv[2]), sys.argv[3], sys.argv[4]
font = TTFont(src)
if "fvar" in font:
    from fontTools.varLib import instancer
    axes = {a.axisTag: (a.minValue, a.maxValue) for a in font["fvar"].axes}
    lo, hi = axes.get("wght", (weight, weight))
    if not lo <= weight <= hi: sys.exit(f"weight {weight} outside {src} wght range {lo}-{hi}")
    font = instancer.instantiateVariableFont(font, {t: (weight if t == "wght" else None) for t in axes})
opts = subset.Options()
opts.flavor = "woff2"
opts.layout_features = ["*"]
opts.name_IDs = ["*"]
opts.notdef_outline = True
sub = subset.Subsetter(opts)
sub.populate(text=text)
sub.subset(font)
font.flavor = "woff2"
font.save(out)
`;

const py = python();
mkdirSync(join(dir, "assets/fonts"), { recursive: true });
let bad = 0;
for (const weight of weightsArg.split(",").map((w) => w.trim())) {
  const src = await source(weight);
  const out = join(dir, `assets/fonts/${slugFamily}-zh-tw-${weight}.woff2`);
  execFileSync(py, ["-c", PY, src, weight, out, text], { stdio: ["ignore", "inherit", "inherit"] });
  // Coverage check: every CJK character of the zh-TW text must have a glyph in the subset.
  const have = woff2Codepoints(readFileSync(out));
  const missing = chars.filter((c) => !have.has(c.codePointAt(0)));
  const size = readFileSync(out).length;
  if (missing.length) { bad++; console.error(`${out}: MISSING ${missing.length}/${chars.length} CJK glyphs: ${missing.slice(0, 40).join("")}`); }
  else console.log(`${out}  ${size} bytes  (${chars.length}/${chars.length} CJK characters covered)`);
}
if (bad) fail(`${bad} subset(s) do not cover the zh-TW text (the source font lacks those characters)`);
