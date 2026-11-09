// node --test scripts/hibari-logo.test.mjs
// Hibari Flight 1.0.1: the header logo was a small round badge sitting on an irregular navy "cloud" blob that bled off the top-left
// corner above the hero photo. It is now a clean lockup: a drawn crested skylark climbing (assets/mark.svg, navy on white) beside a
// two-line wordmark (HIBARI / FLIGHT SCHOOL) on the left of an ordinary white bar, with no blob behind it. The navy footer uses the
// same mark in white (assets/mark-white.svg). These are static checks of the patterns, the SVGs, style.css and the version files.
import { test } from "node:test";
import assert from "node:assert/strict";
import { readFileSync, existsSync } from "node:fs";

const dir = new URL("../themes/hibari-flight/", import.meta.url);
const read = (p) => readFileSync(new URL(p, dir), "utf8");
const code = read("style.css").replace(/\/\*[\s\S]*?\*\//g, "");
const bar = read("patterns/head-bar.php");
const foot = read("patterns/foot.php");

test("header: no navy blob behind the logo", () => {
	assert.doesNotMatch(bar, /hf-blob/, "head-bar pattern has no blob");
	assert.doesNotMatch(code, /hf-blob--head/, "no header blob rule left in style.css");
	assert.doesNotMatch(code, /hf-blobfade/, "no blob fade keyframes");
});

test("header: one lockup on the left (mark + two-line wordmark), actions on the right", () => {
	const brand = bar.indexOf("hf-bar__brand"), mark = bar.indexOf("hf-mark"), word = bar.indexOf("hf-bar__word"), right = bar.indexOf("hf-bar__right");
	assert.ok(brand > -1 && mark > brand && word > mark && right > word, "order: brand group holds the mark then the wordmark, then the right group");
	assert.match(bar, /assets\/mark\.svg/);
	assert.match(bar, /hf-bar__name">HIBARI</, "wordmark line 1");
	assert.match(bar, /hf-bar__sub">FLIGHT SCHOOL</, "wordmark line 2");
	assert.equal((bar.match(/href="\/"/g) || []).length, 1, "the whole lockup is one home link");
	const grid = code.match(/\.hf-bar\s*\{([^}]*)\}/);
	assert.ok(grid && /grid-template-columns:\s*auto 1fr/.test(grid[1]), "bar is brand | actions, not a centred three-column wordmark");
	assert.doesNotMatch(code, /\.hf-bar\s*\{[^}]*grid-template-columns:\s*1fr auto 1fr/, "no centred-wordmark grid at any width");
	const brandRule = code.match(/\.hf-bar__brand\s*\{([^}]*)\}/);
	assert.ok(brandRule && /display:\s*flex/.test(brandRule[1]) && /gap:/.test(brandRule[1]), "lockup is a flex row with a gap");
});

test("mark.svg: a drawn skylark, not the round badge", () => {
	const svg = read("assets/mark.svg");
	assert.match(svg, /viewBox="0 0 48 48"/);
	assert.match(svg, /role="img"/);
	assert.match(svg, /<title>Hibari Flight<\/title>/);
	assert.doesNotMatch(svg, /<circle[^>]*r="(2[0-9]|3[0-9])"/, "no big badge circle");
	assert.match(svg, /fill="#001650"/, "navy bird for the white header");
	assert.ok((svg.match(/<path /g) || []).length >= 3, "body, crest and wing");
});

test("footer: the white version of the same mark and wordmark on the navy band", () => {
	assert.match(foot, /hf-foot__name">HIBARI<\/span><span class="hf-foot__sub">FLIGHT SCHOOL</, "same two-line wordmark");
	assert.ok(existsSync(new URL("assets/mark-white.svg", dir)), "mark-white.svg exists");
	const w = read("assets/mark-white.svg");
	assert.match(w, /fill="#FFFFFF"/);
	assert.doesNotMatch(w, /<circle[^>]*r="(2[0-9]|3[0-9])"/);
	assert.match(foot, /assets\/mark-white\.svg/);
	assert.doesNotMatch(foot, /assets\/mark\.svg/);
});

test("version 1.0.1 with a changelog entry", () => {
	assert.match(read("style.css"), /^Version: 1\.0\.1$/m);
	assert.match(read("readme.txt"), /= 1\.0\.1 =\n\* .*logo/i);
	assert.equal(JSON.parse(read("theme-meta.json")).version, "1.0.1");
	const idx = JSON.parse(readFileSync(new URL("../index.json", import.meta.url), "utf8"));
	const t = (idx.themes || idx).find((x) => x.slug === "hibari-flight");
	assert.equal(t.version, "1.0.1");
});
