// node --test scripts/tsukuri-design-hero.test.mjs
// Tsukuri Design Office 1.0.1: the home hero is a stacked collage with two buttons and a figures row.
// Every key the pattern asks for must exist in all five language files, and the buttons must point at real pages.
import { test } from "node:test";
import assert from "node:assert/strict";
import { readFileSync } from "node:fs";

const root = new URL("../themes/tsukuri-design/", import.meta.url);
const hero = readFileSync(new URL("patterns/front-hero.php", root), "utf8");
const keys = [...new Set([...hero.matchAll(/tsukuri_design_[ta]\(\s*'([^']+)'/g)].map((m) => m[1]))];

test("hero has a collage of three photographs and two buttons", () => {
	assert.equal((hero.match(/<img /g) || []).length, 3);
	assert.equal((hero.match(/wp-block-button__link/g) || []).length, 2);
	assert.ok(hero.includes("home_url( '/start/' )") && hero.includes("home_url( '/work/' )"));
	assert.ok(!hero.includes('href="#'), "no fragment links in the hero");
});

for (const lang of ["en", "zh-TW", "ja", "fr", "de"]) {
	test(`hero strings exist in ${lang}`, () => {
		const dict = readFileSync(new URL(`inc/i18n/${lang}.php`, root), "utf8");
		for (const k of keys) assert.ok(new RegExp(`^\\t'${k}' => `, "m").test(dict), `${lang}: missing ${k}`);
	});
}
