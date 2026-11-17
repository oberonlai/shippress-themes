// node --test scripts/kodama-sound-fragments.test.mjs
// Kodama Sound 1.0.1: the footer "+ Index" link shows on every page, so its #fragment must resolve to an id
// that foot.php itself renders (store Astro gate: dead-fragment for #projects on non-home pages).
import { test } from "node:test";
import assert from "node:assert/strict";
import { readFileSync } from "node:fs";

const foot = readFileSync(new URL("../themes/kodama-sound/patterns/foot.php", import.meta.url), "utf8");
const ids = new Set([...foot.matchAll(/\bid=["']([^"']+)["']/g)].map((m) => m[1]));

test("foot.php fragment links resolve to ids rendered by foot.php", () => {
	const frags = [...foot.matchAll(/href=["']#([^"']+)["']/g)].map((m) => m[1]);
	assert.ok(frags.includes("site-index"), "+ Index links to #site-index");
	for (const f of frags) assert.ok(ids.has(f), `#${f} has no matching id in foot.php`);
});
