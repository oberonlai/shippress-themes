// node --test scripts/mimamori-hero-spacing.test.mjs
// Mimamori College 1.0.1 (#569). Owner feedback on 1.0.0: (1) the desktop hero headline and "About the college" link sat right
// against the arm/shoulder of the man in the photo and nobody checked the spacing; (2) the filled orange-red dots before links
// were 12-16 px and looked heavy. Pins (a) a text safe zone: the hero copy column starts far enough right of the photo subjects at
// every desktop width and is stacked above the photo on phones; (b) every filled accent dot is at most 8 px, at least 6 px,
// with no large pixel offset; (c) 1.0.1 metadata.
import { test } from "node:test";
import assert from "node:assert/strict";
import { readFileSync, readdirSync } from "node:fs";

const dir = new URL("../themes/mimamori-college/", import.meta.url);
const read = (p) => readFileSync(new URL(p, dir), "utf8");
const css = read("style.css");

// ---- tiny CSS helpers (no media-query nesting beyond one level; good enough for this stylesheet) ----
const rules = [];
{
	const re = /([^{}@][^{}]*)\{([^{}]*)\}/g;
	let m;
	while ((m = re.exec(css))) rules.push({ sel: m[1].trim(), body: m[2], at: css.lastIndexOf("@media", m.index) > css.lastIndexOf("}", m.index - 1) ? "media" : "" });
}
const root = css.match(/:root\s*\{([^}]*)\}/)[1];
const resolve = (v) => {
	const m = /var\((--[\w-]+)\)/.exec(v);
	if (!m) return v;
	const d = new RegExp(m[1] + "\\s*:\\s*([^;]+);").exec(root);
	return d ? d[1].trim() : v;
};
const decl = (body, prop) => {
	const m = new RegExp("(?:^|[;\\s])" + prop + "\\s*:\\s*([^;]+)", "i").exec(body);
	return m ? resolve(m[1].trim()) : null;
};
const px = (v) => (v && /^-?[\d.]+px$/.test(v) ? parseFloat(v) : null);

test("every filled accent dot is 6-8 px and vertically centred without a large offset", () => {
	const dots = rules.filter((r) => /border-radius:\s*50%/.test(r.body) && /background:\s*var\(--wp--preset--color--accent\)|background:\s*var\(--rule\)/.test(r.body));
	assert.ok(dots.length >= 1, "found the accent dot rule(s)");
	for (const r of dots) {
		const w = px(decl(r.body, "width")), h = px(decl(r.body, "height"));
		assert.ok(w !== null && h !== null, `${r.sel}: width/height are pixel values (got ${decl(r.body, "width")} / ${decl(r.body, "height")})`);
		assert.ok(w <= 8 && h <= 8, `${r.sel}: dot is ${w}x${h}px, must be <= 8px`);
		assert.ok(w >= 6 && h >= 6, `${r.sel}: dot is ${w}x${h}px, must be >= 6px`);
		const va = decl(r.body, "vertical-align");
		if (va && px(va) !== null) assert.ok(Math.abs(px(va)) <= 2, `${r.sel}: vertical-align ${va} is a big pixel offset`);
	}
	// the selectors that carry a dot on the site: header/hero/who/placement links, strip tiles, course-cell titles, inner-page tiles
	const all = dots.map((r) => r.sel).join(" ");
	for (const s of [".mc-dotlink a::before", ".mc-tile__t a::before", ".mc-cell__t::before", ".mc-ptile__t a::before"]) assert.ok(all.includes(s), `${s} is one of the sized dots`);
	// modifier rules later in the file may only recolour a dot, never resize it
	for (const r of rules.filter((r) => /(?:mc-dotlink a|mc-tile__t a|mc-cell__t|mc-ptile__t a)::before/.test(r.sel) && !dots.includes(r)))
		assert.ok(!/(^|[;\s])(width|height)\s*:/.test(r.body) || ["6", "7", "8"].includes((decl(r.body, "width") || "").replace("px", "")), `${r.sel}: must not enlarge the dot`);
});

test("no pattern or template draws its own large round dot inline", () => {
	for (const sub of ["patterns", "parts", "templates"]) {
		for (const f of readdirSync(new URL(sub + "/", dir))) {
			const t = read(`${sub}/${f}`);
			for (const m of t.matchAll(/style="[^"]*border-radius:\s*50%[^"]*"/g)) assert.fail(`${sub}/${f} has an inline round shape: ${m[0]}`);
		}
	}
});

// Measured on the shipped photos (fraction of image width where the nearest person's body/arm/knee ends on the right):
//   k1 (wide room scene): man's back/shoulder at 0.47, k2 (close-up hands): arm at 0.57, k3 (kneeling): knee at 0.57.
// The headline column must start at least 0.14 clear of k1's subject and past the close-ups' edge, i.e. at >= 61% of the width.
const SUBJECT_RIGHT = { k1: 0.47, k2: 0.57, k3: 0.57 };
const MIN_GAP = { k1: 0.14, k2: 0.04, k3: 0.04 };

test("desktop: the hero copy column starts clear of the photo subjects (text safe zone)", () => {
	const base = rules.find((r) => r.sel === ".mc-hero__copy" && !r.at);
	assert.ok(base, "base .mc-hero__copy rule");
	const width = parseFloat(decl(base.body, "width")), mr = parseFloat(decl(base.body, "margin-right"));
	assert.ok(/%$/.test(decl(base.body, "width")) && /%$/.test(decl(base.body, "margin-right")), "copy width and margin-right are percentages of the hero");
	assert.equal(decl(base.body, "justify-self"), "end", "copy is anchored to the right edge");
	const left = 100 - mr - width; // % of the hero width where the copy column starts
	assert.ok(left >= 61, `copy column starts at ${left.toFixed(1)}% of the hero, needs >= 61%`);
	// the photo frame has a 20px margin, so convert: subject edge in hero % is approximately its image fraction (frame is ~97% of the hero)
	for (const [k, right] of Object.entries(SUBJECT_RIGHT)) {
		const gap = left / 100 - right * 0.972;
		assert.ok(gap >= MIN_GAP[k], `${k}: gap between subject and headline is ${(gap * 100).toFixed(1)}% of the width, needs >= ${MIN_GAP[k] * 100}%`);
	}
	// the headline must still fit its column on one line per <br>: font-size scales with the viewport at <= 2.6vw (max 2.4rem)
	const t = rules.find((r) => r.sel === ".mc-hero__title" && !r.at);
	const fs = decl(t.body, "font-size");
	const vw = /([\d.]+)vw/.exec(fs);
	assert.ok(vw && parseFloat(vw[1]) <= 2.6, `hero title font-size ${fs} must scale at <= 2.6vw so two lines fit the narrower column`);
	const link = rules.find((r) => r.sel === ".mc-hero__copy a");
	assert.ok(link, "hero copy link rule kept");
});

test("phones: the copy is stacked above the photo, never over it", () => {
	const m = css.match(/@media \(max-width: 781px\) \{([\s\S]*?)\n\}/);
	assert.ok(m, "max-width 781px block");
	const copy = /\.mc-hero__copy\s*\{([^}]*)\}/.exec(m[1])[1];
	const frame = /\.mc-hero__frame\s*\{([^}]*)\}/.exec(m[1])[1];
	assert.match(copy, /grid-area:\s*1 \/ 1/);
	assert.match(frame, /grid-area:\s*2 \/ 1/);
	assert.match(copy, /align-self:\s*start/);
});

// 1.0.2 moved the version on (scripts/mimamori-title-nav.test.mjs checks it); this only requires 1.0.1 or later with its changelog entry kept.
const atLeast = (v, min) => v.split(".").map(Number).reduce((r, n, i) => r || Math.sign(n - min.split(".")[i]), 0) >= 0;
test("release metadata: 1.0.1 or later with the 1.0.1 changelog entry", () => {
	const v = /^\s*Version:\s*(\S+)\s*$/m.exec(css)[1];
	assert.ok(atLeast(v, "1.0.1"), `Version ${v} is at least 1.0.1`);
	assert.match(read("readme.txt"), /= 1\.0\.1 =\n\* [^\n]*(dot|spacing|headline)[^\n]*/i);
	assert.equal(JSON.parse(read("theme-meta.json")).version, v);
});
