// node --test scripts/noboru-header.test.mjs
// Noboru Lifts 1.0.1: the header was a boxed grid. On the home page the menu was a stack of four small bordered cells with two sideways
// tabs beside it, and it only turned into a row after scrolling. It is now one conventional header on every template:
// brand (logo mark + site name + tagline) on the left, one horizontal navigation row, a CTA button on the right,
// and the core navigation overlay (hamburger) below 960 px. These are static checks of the pattern, the template parts and style.css.
import { test } from "node:test";
import assert from "node:assert/strict";
import { readFileSync, readdirSync } from "node:fs";

const dir = new URL("../themes/noboru-lifts/", import.meta.url);
const read = (p) => readFileSync(new URL(p, dir), "utf8");
const css = read("style.css");
const header = read("patterns/header-main.php");
const part = read("parts/header.html");

const stripComments = (s) => s.replace(/\/\*[\s\S]*?\*\//g, "");
const code = stripComments(css);

test("header pattern: brand, one navigation, one CTA; no sideways tabs", () => {
	assert.doesNotMatch(header, /nl-vtab/, "no sideways tab in the header");
	assert.match(header, /wp:site-title/, "site name");
	assert.match(header, /nl-brand__sub/, "tagline stays");
	assert.equal((header.match(/wp:navigation /g) || []).length, 1, "exactly one navigation block");
	assert.match(header, /"overlayMenu":"mobile"/, "core overlay menu for small screens");
	assert.match(header, /nl-cta/, "CTA");
	assert.match(header, /href="<\?php echo esc_url\( home_url\( '\/#book' \) \); \?>"/, "CTA links to the booking card by an absolute home url");
	assert.ok(header.indexOf("wp:site-title") < header.indexOf("wp:navigation ") && header.indexOf("wp:navigation ") < header.indexOf("nl-cta"), "order: brand, menu, CTA");
});

test("header part: one template part used by every template", () => {
	assert.match(part, /noboru-lifts\/header-main/);
	for (const f of readdirSync(new URL("templates/", dir)).filter((f) => f.endsWith(".html") && f !== "404.html")) {
		assert.match(read(`templates/${f}`), /"slug":"header"/, `${f} uses the header part`);
	}
});

test("css: the header is a sticky in-flow bar, not an absolute overlay on a zero-height box", () => {
	const hdr = code.match(/\.nl-header\s*\{([^}]*)\}/);
	assert.ok(hdr, ".nl-header rule exists");
	assert.match(hdr[1], /position:\s*sticky/);
	assert.doesNotMatch(hdr[1], /height:\s*0/, "the header has its own height");
	const bar = code.match(/\.nl-bar\s*\{([^}]*)\}/);
	assert.ok(bar && !/position:\s*absolute/.test(bar[1]), ".nl-bar is in the flow");
	assert.ok(/display:\s*flex/.test(bar[1]), ".nl-bar is a flex row");
});

test("css: no stacked menu cells, no scroll-driven header morphing", () => {
	assert.doesNotMatch(code, /body\.home \.nl-(nav|menu)/, "the home page uses the same menu rules as every page");
	assert.doesNotMatch(code, /@keyframes nl-(head|name|sub|vtab|navw|navdir|item|ctaw|ctaa)\b/, "no header keyframes");
	assert.doesNotMatch(code, /body\.home \.nl-bar/, "no home-only header height");
	assert.doesNotMatch(code, /nl-vtab--(co|nav)/, "no leftovers of the header tabs");
});

test("css: menu links are a plain horizontal row with no cell borders", () => {
	const item = code.match(/\.nl-menu \.wp-block-navigation-item\s*\{([^}]*)\}/);
	assert.ok(!item || !/border/.test(item[1]), "menu items have no borders");
	const cont = code.match(/\.nl-menu \.wp-block-navigation__container\s*\{([^}]*)\}/);
	assert.ok(cont && /gap:/.test(cont[1]) && !/flex-direction:\s*column/.test(cont[1]), "menu container is a row with a gap");
});

test("css: hamburger overlay below 960 px, desktop menu from 960 px", () => {
	assert.match(code, /@media\s*\(min-width:\s*600px\)\s*and\s*\(max-width:\s*959px\)/, "WordPress switches at 600, the theme keeps the overlay up to 959");
	assert.match(code, /\.nl-menu \.wp-block-navigation__responsive-container-open/, "hamburger button is styled");
	assert.match(code, /\.nl-menu \.wp-block-navigation__responsive-container\.is-menu-open/, "open overlay is styled");
});

test("css: page offsets follow the in-flow header", () => {
	assert.match(code, /\.nl-main\s*\{\s*padding-top:\s*0;?\s*\}/, "inner pages start right under the header");
	const hero = code.match(/\.nl-hero\s*\{([^}]*)\}/);
	assert.ok(hero && !/padding:\s*132px/.test(hero[1]), "the hero no longer reserves 132 px for an overlay header");
	assert.match(code, /scroll-margin-top:\s*(8\d|9\d|1\d\d)px/, "anchors clear the sticky header");
});

test("version: style.css and theme-meta.json agree", () => {
	const v = css.match(/^Version:\s*(\S+)/m)[1];
	const meta = JSON.parse(read("theme-meta.json"));
	if (meta.version) assert.equal(meta.version, v);
	assert.match(v, /^1\.0\.[1-9]/, "1.0.1 or later");
});
