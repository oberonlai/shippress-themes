// node --test scripts/hozue-foodfest-fragments.test.mjs
// Hozue Foodfest 1.0.1: the Contact, Newsletter and Stallholders strips had a fourth tile linking to #faq, #programme and
// #tickets, ids that do not exist on those pages (store Astro gate: dead-fragment). Every same-page #fragment in a page
// pattern must resolve to an id on that same pattern.
import { test } from "node:test";
import assert from "node:assert/strict";
import { readFileSync, readdirSync } from "node:fs";

const dir = new URL("../themes/hozue-foodfest/patterns/", import.meta.url);
const read = (f) => readFileSync(new URL(f, dir), "utf8");

test("every same-page #fragment in a page-*.php pattern has an id on that page", () => {
	for (const f of readdirSync(dir).filter((n) => /^page-.*\.php$/.test(n))) {
		const src = read(f);
		const ids = new Set([...src.matchAll(/\bid=["']([^"']+)["']/g)].map((m) => m[1]));
		for (const m of src.matchAll(/href="#([\w-]+)"/g)) {
			assert.ok(ids.has(m[1]), `${f}: href="#${m[1]}" has no matching id`);
		}
	}
});

test("strip tile 4 links to a real page on Contact, Newsletter and Stallholders", () => {
	for (const [page, slug] of [["contact", "faq"], ["newsletter", "programme"], ["stallholders", "tickets"]]) {
		const src = read(`page-${page}.php`);
		assert.ok(src.includes(`home_url( '/${slug}/' )`), `page-${page}.php should link to /${slug}/`);
		assert.ok(!src.includes(`href="#${slug}"`), `page-${page}.php still has href="#${slug}"`);
	}
});
