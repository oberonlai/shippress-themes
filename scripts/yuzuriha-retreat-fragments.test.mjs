// node --test scripts/yuzuriha-retreat-fragments.test.mjs
// Yuzuriha Retreat 1.0.1: the home calendar cards link to /calendar/#first-light, #forest and #quiet, so the calendar page
// must render those ids (store Astro gate: dead-fragment on calendar/#first-light etc.).
import { test } from "node:test";
import assert from "node:assert/strict";
import { readFileSync } from "node:fs";

const read = (f) => readFileSync(new URL(`../themes/yuzuriha-retreat/patterns/${f}`, import.meta.url), "utf8");
const front = read("front-calendar.php");
const page = read("page-calendar.php");
const pageIds = new Set([...page.matchAll(/\bid=["']([^"']+)["']/g)].map((m) => m[1]));

test("every /calendar/#fragment linked from the home pattern has an id on the calendar page", () => {
	const frags = new Set([...front.matchAll(/\/calendar\/#([\w-]+)/g)].map((m) => m[1]));
	assert.deepEqual([...frags].sort(), ["first-light", "forest", "quiet"]);
	for (const f of frags) {
		assert.ok(pageIds.has(f), `#${f} has no id in page-calendar.php`);
		assert.ok(page.includes(`"anchor":"${f}"`), `#${f} missing block anchor attribute`);
	}
});
