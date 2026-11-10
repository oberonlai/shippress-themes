// node --test scripts/genba-diary-fragments.test.mjs
// Genba Diary 1.0.1 (#666): home front-day.php "view more" links must match the diary-day
// page section ids in all five locales (store Astro gate: dead-fragment).
import { test } from "node:test";
import assert from "node:assert/strict";
import { readFileSync } from "node:fs";

const dir = new URL("../themes/genba-diary/", import.meta.url);
const read = (p) => readFileSync(new URL(p, dir), "utf8");
const LOCALES = {
	en: "demo-content.json",
	"zh-TW": "demo-content.zh-TW.json",
	ja: "demo-content.ja.json",
	fr: "demo-content.fr.json",
	de: "demo-content.de.json",
};
const SECTIONS = ["board", "crew", "deliveries", "photos", "weather", "signoff"];
const ALIASES = { photo: "photos", sign: "signoff", truck: "deliveries" };

const idsIn = (html) => new Set([...String(html).matchAll(/\bid=["']([^"']+)["']/g)].map((m) => m[1]));
const diaryHrefs = (html) => [...String(html).matchAll(/href=["']\/diary-day\/#([^"']+)["']/g)].map((m) => m[1]);

test("front-day.php diary-day fragment links resolve against diary-day ids in all five locales", () => {
	const hrefs = diaryHrefs(read("patterns/front-day.php"));
	assert.deepEqual(hrefs, SECTIONS, `home links must be the six diary-day section ids, got ${hrefs.join(", ")}`);
	for (const [bad, good] of Object.entries(ALIASES)) {
		assert.ok(!hrefs.includes(bad), `href #${bad} must be #${good}`);
	}
	for (const [locale, file] of Object.entries(LOCALES)) {
		const demo = JSON.parse(read(file));
		const page = (demo.pages || []).find((p) => p.slug === "diary-day");
		assert.ok(page, `${locale}: diary-day page exists`);
		const ids = idsIn(page.content);
		for (const need of SECTIONS) assert.ok(ids.has(need), `${locale}: diary-day keeps id=${need}`);
		for (const frag of hrefs) {
			assert.ok(ids.has(frag), `${locale}: /diary-day/#${frag} has no matching id (have ${[...ids].join(", ")})`);
		}
	}
});

test("release metadata: 1.0.1 with a changelog entry", () => {
	assert.match(read("style.css"), /^\s*Version:\s*1\.0\.1\s*$/m);
	assert.match(read("readme.txt"), /= 1\.0\.1 =\n\* [^\n]*(fragment|diary-day|anchor|photos|signoff|deliveries)[^\n]*/i);
	assert.equal(JSON.parse(read("theme-meta.json")).version, "1.0.1");
});
