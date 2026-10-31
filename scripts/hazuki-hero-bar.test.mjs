// node --test scripts/hazuki-hero-bar.test.mjs
// Hazuki Instruments 1.0.1 (#555): the flat steel "Fit · Trial · Care" label bar across the foot of the home hero portrait
// strip was removed (owner: ugly). Pins that the home hero has no bar in markup, strings or CSS reservations, in all five
// languages, while the inner-page mini strips keep their own bars.
import { test } from "node:test";
import assert from "node:assert/strict";
import { existsSync, readFileSync } from "node:fs";

const dir = new URL("../themes/hazuki-instruments/", import.meta.url);
const read = (p) => readFileSync(new URL(p, dir), "utf8");
const css = read("style.css");
const LOCALES = ["en", "zh-TW", "ja", "fr", "de"];
const LABELS = ["Fit · Trial · Care", "契合 · 試奏 · 保養", "合う ・ 試す ・ 整える", "Choisir · Essayer · Entretenir", "Passen · Probieren · Pflegen"];

test("home hero pattern has no label bar and still has panels and the headline", () => {
	const p = read("patterns/front-seam.php");
	assert.ok(!/hz-seam__bar/.test(p), "front-seam.php has no hz-seam__bar element");
	assert.ok(!/label bar/i.test(p), "pattern description no longer mentions a label bar");
	assert.equal((p.match(/class="[^"]*hz-panel/g) || []).length, 4, "four portrait panels");
	assert.ok(/<h1[^>]*hz-seam__title/.test(p), "vertical headline kept");
});

test("the label string is gone from every locale file, the pattern and the demo content", () => {
	for (const l of LOCALES) {
		assert.ok(existsSync(new URL(`inc/i18n/${l}.php`, dir)), `${l}.php exists`);
		assert.ok(!read(`inc/i18n/${l}.php`).includes("kd3c6ab31"), `${l}.php has no kd3c6ab31 key`);
	}
	for (const f of ["patterns/front-seam.php", "demo-content.json", ...LOCALES.filter((l) => l !== "en").map((l) => `demo-content.${l}.json`)])
		for (const s of LABELS) assert.ok(!read(f).includes(s), `${f} does not contain "${s}"`);
	for (const l of LOCALES) for (const s of LABELS) assert.ok(!read(`inc/i18n/${l}.php`).includes(s), `${l}.php does not contain "${s}"`);
});

test("home headline no longer reserves room for a bar; the bar rule is only used by inner mini strips", () => {
	const t = css.match(/(?:^|\n)\.hz-seam__title\s*\{([^}]*)\}/);
	assert.ok(t, "base .hz-seam__title rule exists");
	assert.ok(!/50px/.test(t[1]) && !/26px/.test(t[1]), "max-block-size does not subtract the 50px offset and 26px bar");
	const inner = ["inner-about", "inner-care", "inner-floors", "inner-visit", "inner-rentals", "inner-trial-booth"];
	for (const n of inner) assert.ok(/hz-seam__bar/.test(read(`patterns/${n}.php`)), `${n} keeps its mini-strip bar`);
});

test("release metadata: 1.0.1 with a changelog entry", () => {
	assert.match(css, /^\s*Version:\s*1\.0\.1\s*$/m);
	assert.match(read("readme.txt"), /= 1\.0\.1 =\n\* [^\n]*(label bar|bar)[^\n]*/i);
	assert.equal(JSON.parse(read("theme-meta.json")).version, "1.0.1");
});
