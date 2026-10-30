// node --test scripts/kensa-typography.test.mjs
// Kensa Laboratory typography (#545): the hero read as an early-2000s page (Schibsted Grotesk 700, 0.08em tracking, four crammed
// lines, CJK headings faux-bolded from a 400-only subset). The reference (gbrc.or.jp) sets its Latin display words in Montserrat
// and its headline in a medium-weight gothic over the photo. Pins the Montserrat face, the calm hero headline and the real CJK weight.
import { test } from "node:test";
import assert from "node:assert/strict";
import { existsSync, readFileSync, readdirSync } from "node:fs";

const dir = new URL("../themes/kensa-laboratory/", import.meta.url);
const read = (p) => readFileSync(new URL(p, dir), "utf8");
const exists = (p) => existsSync(new URL(p, dir));
const css = read("style.css");
const themeJson = JSON.parse(read("theme.json"));
const families = themeJson.settings.typography.fontFamilies;
const fam = (slug) => families.find((f) => f.slug === slug);
const rule = (sel) => {
	const m = css.match(new RegExp(`(?:^|\\n)${sel.replace(/[.*+?^${}()|[\]\\]/g, "\\$&")}\\s*\\{([^}]*)\\}`));
	assert.ok(m, `style.css has a ${sel} rule`);
	return m[1];
};

test("display family is Montserrat, bundled as a variable latin woff2 with its OFL text", () => {
	const d = fam("display");
	assert.ok(d.fontFamily.startsWith('"Montserrat"'), "display stack starts with Montserrat");
	assert.equal(d.fontFace[0].fontFamily, "Montserrat");
	assert.match(d.fontFace[0].fontWeight, /^\d+ \d+$/, "variable weight range");
	assert.ok(exists("assets/fonts/montserrat-variable-latin.woff2"));
	assert.ok(exists("assets/fonts/OFL-Montserrat.txt"));
	assert.ok(fam("body").fontFamily.startsWith('"Albert Sans"'), "body stays Albert Sans");
});

test("Schibsted Grotesk is gone from the theme (files, theme.json, style.css, docs)", () => {
	assert.ok(!exists("assets/fonts/schibsted-grotesk-variable-latin.woff2"));
	assert.ok(!exists("assets/fonts/OFL-SchibstedGrotesk.txt"));
	for (const f of ["theme.json", "style.css", "readme.txt", "README.md", "theme-meta.json"])
		if (exists(f)) assert.ok(!/schibsted/i.test(read(f)), `${f} no longer names Schibsted Grotesk`);
});

test("language stacks lead with Montserrat", () => {
	for (const sel of [":root:lang(ja), body:lang(ja)", ":root:lang(zh)"]) {
		const block = css.slice(css.indexOf(sel));
		assert.match(block.slice(0, 400), /--wp--preset--font-family--display: "Montserrat"/, sel);
	}
});

test("zh-TW and ja ship a real 600 cut, so CJK headings are not faux bold", () => {
	for (const slug of ["cjk-zh", "cjk-ja"]) {
		const weights = fam(slug).fontFace.map((f) => String(f.fontWeight));
		assert.ok(weights.includes("400") && weights.includes("600"), `${slug} declares 400 and 600 (${weights})`);
		for (const f of fam(slug).fontFace) assert.ok(exists(f.src[0].replace("file:./", "")), `${f.src[0]} exists`);
	}
	assert.ok(exists("assets/fonts/noto-sans-tc-zh-tw-600.woff2"));
	assert.ok(exists("assets/fonts/noto-sans-jp-600-ja.woff2"));
});

test("hero headline: Montserrat 600, calm tracking, two lines, no 6.4em box", () => {
	const r = rule(".kl-strip__h1");
	assert.match(r, /font-family: var\(--wp--preset--font-family--display\)/);
	assert.match(r, /font-weight: 600;/);
	const ls = Number(r.match(/letter-spacing: ([\d.]+)em/)?.[1]);
	assert.ok(ls > 0 && ls <= 0.08, `letter-spacing ${ls}em is moderate`);
	assert.ok(!/max-width: 6\.4em/.test(r), "no 6.4em box");
	assert.match(r, /white-space: nowrap/, "the two h1 lines stay two lines");
	const lh = Number(r.match(/line-height: ([\d.]+)/)?.[1]);
	assert.ok(lh >= 1.35, `line-height ${lh} is airy`);
	assert.ok(!/font-weight: 700/.test(r));
	assert.match(css, /\.kl-strip__h1 br \{ display: inline; \}/, "br is a real line break on desktop");
});

test("hero headline scales with the slide, around 36px on the 1000px slide", () => {
	assert.match(rule(".kl-strip__h1"), /font-size: calc\(var\(--kl-w\) \* 0\.036\)/);
});

test("section labels use the display face, bold, wide tracking, like the reference's SERVICE | label", () => {
	const r = rule(".kl-label");
	assert.match(r, /font-family: var\(--wp--preset--font-family--display\)/);
	assert.match(r, /font-weight: 700/);
	assert.match(r, /text-transform: uppercase/);
	assert.ok(Number(r.match(/letter-spacing: ([\d.]+)em/)?.[1]) >= 0.15);
});

test("fonts stay bundled: no remote font host in the theme", () => {
	const walk = (u) => readdirSync(u, { withFileTypes: true }).flatMap((e) => (e.isDirectory() ? walk(new URL(`${e.name}/`, u)) : [new URL(e.name, u)]));
	for (const u of walk(dir).filter((x) => /\.(css|json|php|html)$/.test(x.pathname)))
		assert.ok(!/fonts\.(googleapis|gstatic)\.com/.test(readFileSync(u, "utf8")), u.pathname);
});
