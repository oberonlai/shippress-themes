// node --test scripts/mimamori-title-nav.test.mjs
// Mimamori College 1.0.2. Two layout bugs found while re-shooting 1.0.1:
//  (1) the home hero title "Learn to care,<br>one steady hand at a time." wraps to a last line with the single word "time."
//      (phones 360-430 px, and 782-1099 px where the copy column is narrow). text-wrap: balance does nothing because the <br>
//      forces a break first, so below 1100 px the <br> is hidden (with a space put in front of it by PHP) and the title balances as one block.
//  (2) from 600 to 959 px WordPress shows the full navigation (its own breakpoint is 600 px), but the theme absolutely
//      positions the nav in the 64 px header, so the 7 links wrap into a vertical list that hangs outside the header.
//      Up to 959 px the nav must stay the hamburger overlay. (3) in the opened overlay the <ul> also carries .mc-nav (absolute, right: 20px),
//      so the links started 4 px LEFT of the screen at 390 px (Courses cut off); the list is put back in the flow.
// These are static checks of style.css; the measured widths (title lines, nav links inside the header) are in the PR.
import { test } from "node:test";
import assert from "node:assert/strict";
import { readFileSync } from "node:fs";
import { spawnSync } from "node:child_process";
import { fileURLToPath } from "node:url";

const dir = new URL("../themes/mimamori-college/", import.meta.url);
const read = (p) => readFileSync(new URL(p, dir), "utf8");
const css = read("style.css");

// top-level @media blocks as { query, body } (brace matching; the stylesheet has no nested at-rules inside @media)
function mediaBlocks(src) {
	const out = [];
	const re = /@media\s*([^{]+)\{/g;
	let m;
	while ((m = re.exec(src))) {
		let depth = 1, i = re.lastIndex;
		while (depth && i < src.length) { if (src[i] === "{") depth++; else if (src[i] === "}") depth--; i++; }
		out.push({ query: m[1].replace(/\s+/g, " ").trim(), body: src.slice(re.lastIndex, i - 1).replace(/\/\*[\s\S]*?\*\//g, "") });
		re.lastIndex = i;
	}
	return out;
}
const ruleIn = (body, selRe) => {
	const re = /([^{}]+)\{([^{}]*)\}/g;
	let m;
	while ((m = re.exec(body))) if (selRe.test(m[1].trim())) return { sel: m[1].trim(), body: m[2] };
	return null;
};
const blocks = mediaBlocks(css);
const block = (q) => blocks.find((b) => b.query === q);

test("title: below 1100 px the <br> is dropped and the title balances as one block", () => {
	const b = block("(max-width: 1099px)");
	assert.ok(b, "an @media (max-width: 1099px) block exists");
	const br = ruleIn(b.body, /\.mc-hero__title br$/);
	assert.ok(br && /display:\s*none/.test(br.body), ".mc-hero__title br is display:none inside it (Chrome ignores content/inline tricks on <br>)");
	const t = ruleIn(b.body, /^\.mc-hero__title$/);
	assert.ok(t && /text-wrap:\s*balance/.test(t.body), "the title is balanced below 1100 px");
});

test("title: the desktop line break at 1100 px and up is untouched", () => {
	const top = css.replace(/@media[^{]+\{(?:[^{}]|\{[^{}]*\})*\}/g, "");
	assert.ok(!/\.mc-hero__title br/.test(top), "no unconditional rule on the hero <br>");
	assert.match(read("inc/i18n/en.php"), /'k37fe2981' => 'Learn to care,<br>one steady hand at a time\.'/);
});

// A hidden <br> would glue "care,one" together, and pages created from 1.0.0/1.0.1 already store "care,<br>one" in the page
// content, so the theme puts a space in front of every <br> of the hero title when it renders (Latin text only).
const php = spawnSync("php", ["-v"], { encoding: "utf8" });
test("title: the hero heading gets a space before its <br> at render time (Latin only)", { skip: php.status !== 0 && "php not installed" }, () => {
	assert.match(read("functions.php"), /inc\/hero-title\.php/, "functions.php loads inc/hero-title.php");
	const dirPath = fileURLToPath(dir);
	const code = `<?php define('ABSPATH','/'); function add_filter($t,$f,$p=10,$a=1){ $GLOBALS['f']=[$t,$f]; }
		require '${dirPath}inc/hero-title.php';
		echo json_encode(['hook'=>$GLOBALS['f'][0], 'out'=>array_map(function($h){ return call_user_func($GLOBALS['f'][1], $h); }, json_decode(file_get_contents('php://stdin'))) ]);`;
	const cases = [
		'<h1 class="wp-block-heading mc-hero__title">Learn to care,<br>one steady hand at a time.</h1>',
		'<h1 class="wp-block-heading mc-hero__title">Apprendre à soigner,<br>d’une main sûre à la fois.</h1>',
		'<h1 class="wp-block-heading mc-hero__title">Pflegen lernen,<br />Handgriff für Handgriff.</h1>',
		'<h1 class="wp-block-heading mc-hero__title">學習照護之道，<br>從一雙安穩的手開始。</h1>',
		'<h1 class="wp-block-heading mc-hero__title">ケアを学ぶ。<br>確かな手で、ひとつずつ。</h1>',
		'<h1 class="wp-block-heading mc-hero__title">Already spaced, <br>text</h1>',
		'<h2 class="wp-block-heading">Other,<br>heading</h2>',
	];
	const r = spawnSync("php", ["-r", code.replace(/^<\?php/, "")], { input: JSON.stringify(cases), encoding: "utf8" });
	assert.equal(r.status, 0, r.stderr);
	const res = JSON.parse(r.stdout);
	assert.equal(res.hook, "render_block_core/heading");
	const [en, fr, de, zh, ja, spaced, other] = res.out;
	assert.match(en, /care, <br>one/);
	assert.match(fr, /soigner, <br>d’une/);
	assert.match(de, /lernen, <br \/>Handgriff/);
	assert.match(zh, /，<br>從/, "no space is added in Chinese");
	assert.match(ja, /。<br>確/, "no space is added in Japanese");
	assert.match(spaced, /spaced, <br>text/, "an existing space is not doubled");
	assert.equal(other, cases[6], "other headings are untouched");
});

test("nav: 600-959 px keeps the hamburger overlay instead of a wrapped link list", () => {
	const b = block("(min-width: 600px) and (max-width: 959px)");
	assert.ok(b, "an @media (min-width: 600px) and (max-width: 959px) block exists");
	const open = ruleIn(b.body, /\.mc-nav \.wp-block-navigation__responsive-container-open:not\(\.always-shown\)/);
	assert.ok(open && /display:\s*flex/.test(open.body), "the open button is shown");
	const cont = ruleIn(b.body, /\.mc-nav \.wp-block-navigation__responsive-container:not\(\.hidden-by-default\):not\(\.is-menu-open\)/);
	assert.ok(cont && /display:\s*none/.test(cont.body), "the inline link container is hidden until the menu is opened");
});

test("nav: up to 959 px the header stays two-part (nav pinned inside the 64 px bar)", () => {
	const b = block("(max-width: 959px)");
	assert.ok(b, "max-width 959px block");
	const nav = ruleIn(b.body, /^\.mc-nav$/);
	assert.ok(nav && /position:\s*absolute/.test(nav.body) && /top:\s*12px/.test(nav.body), "nav is pinned to the top bar");
	assert.ok(ruleIn(b.body, /^\.mc-header$/) && /position:\s*relative/.test(ruleIn(b.body, /^\.mc-header$/).body), "header is the positioning parent");
});

test("nav: in the opened menu the link list is back in the flow (the <ul> also carries .mc-nav, which is position:absolute; right:20px)", () => {
	const b = block("(max-width: 959px)");
	const ul = ruleIn(b.body, /^\.wp-block-navigation__responsive-container\.is-menu-open \.wp-block-navigation__container$/);
	assert.ok(ul && /position:\s*static/.test(ul.body), "the list inside the overlay is position:static, so the links start at the overlay padding instead of 20 px left of the screen edge");
});

test("release metadata: 1.0.2 with a changelog entry, 1.0.1 entry kept", () => {
	assert.match(css, /^\s*Version:\s*1\.0\.2\s*$/m);
	const rd = read("readme.txt");
	assert.match(rd, /= 1\.0\.2 =\n\* [^\n]*(title|headline)[^\n]*\n\* [^\n]*(menu|nav)[^\n]*/i);
	assert.match(rd, /= 1\.0\.1 =/);
	assert.equal(JSON.parse(read("theme-meta.json")).version, "1.0.2");
});
