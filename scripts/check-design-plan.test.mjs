// node --test scripts/check-design-plan.test.mjs  (hero-diversity rules of design-plan.json, scripts/check-design-plan.py)
import { test } from "node:test";
import assert from "node:assert/strict";
import { spawnSync } from "node:child_process";
import { mkdtempSync, rmSync, writeFileSync, readFileSync } from "node:fs";
import { tmpdir } from "node:os";
import { join, dirname } from "node:path";
import { fileURLToPath } from "node:url";

const HERE = dirname(fileURLToPath(import.meta.url));
const SCRIPT = join(HERE, "check-design-plan.py");
const REAL = join(HERE, "..", "design-plan.json");
const HEROES = ["text-left-photo-right", "photo-left-text-right", "framed-window", "diagonal-split", "product-grid-hero"];
const COMP = { "text-left-photo-right": "split-photo-right", "photo-left-text-right": "split-photo-left", "framed-window": "framed-window", "diagonal-split": "diagonal-split", "product-grid-hero": "product-grid", "full-bleed-photo": "full-bleed" };
const RULES = { hero_diversity: { fields_required_from_batch: 38, window: 30, max_share_in_window: 0.25, hot_share: 0.2,
  composition_by_hero: Object.fromEntries(Object.entries(COMP).map(([k, v]) => [k, [v]])) } };
const ENUMS = { hero_composition: Object.values(COMP), hero_text: ["overlay-left", "beside-photo", "below-photo"], hero_footer: ["none", "timeline", "info-bar", "stats-row"] };

// old rows: no composition fields, status done, heroes cycle over five classes (20% each, none hot)
function oldRows(n, heroes = HEROES) {
  return Array.from({ length: n }, (_, i) => ({ n: i + 1, id: `b${1 + Math.floor(i / 6)}-${(i % 6) + 1}`, slug: `old-${i}`, hero: heroes[i % heroes.length], status: "done (abc, 2026-10-16)" }));
}
function newRow(slug, hero, text = "beside-photo", footer = "none", extra = {}) {
  const c = COMP[hero];
  return { id: "b38-1", slug, hero, status: "todo", hero_composition: c, hero_text: text, hero_footer: footer, hero_fingerprint: `${c}/${text}/${footer}`, ...extra };
}
function run(plan, args = []) {
  const dir = mkdtempSync(join(tmpdir(), "cdp-"));
  try {
    const f = join(dir, "plan.json");
    writeFileSync(f, JSON.stringify({ rules: RULES, enums: ENUMS, ...plan }));
    const r = spawnSync("python3", [SCRIPT, f, ...args], { encoding: "utf8" });
    return { code: r.status, out: r.stdout, err: r.stderr };
  } finally { rmSync(dir, { recursive: true, force: true }); }
}

test("old rows without the fields are tolerated (unknown, never flagged)", () => {
  const r = run({ plan: oldRows(40) });
  assert.equal(r.code, 0, r.err);
  assert.match(r.out, /0 row\(s\)/);
});

test("a valid new row passes", () => {
  const r = run({ plan: [...oldRows(40), newRow("fresh", "framed-window")] });
  assert.equal(r.code, 0, r.err);
});

test("same fingerprint as one of the last 30 rows fails; as the 31st-last does not", () => {
  const a = newRow("a", "framed-window", "beside-photo", "none");
  const b = newRow("b", "framed-window", "beside-photo", "none");
  let r = run({ plan: [...oldRows(10), a, ...oldRows(5, ["diagonal-split", "photo-left-text-right"]).map((x, i) => ({ ...x, slug: `m${i}` })), b] });
  assert.equal(r.code, 1);
  assert.match(r.err, /repeats a/);
  r = run({ plan: [a, ...oldRows(30).map((x, i) => ({ ...x, slug: `m${i}` })), b] });
  assert.equal(r.code, 0, r.err);
});

test("fingerprint must equal composition/text/footer, and fields come from the enums", () => {
  let r = run({ plan: [...oldRows(40), newRow("x", "framed-window", "beside-photo", "none", { hero_fingerprint: "framed-window/other/none" })] });
  assert.equal(r.code, 1); assert.match(r.err, /is not/);
  r = run({ plan: [...oldRows(40), newRow("x", "framed-window", "made-up", "none")] });
  assert.equal(r.code, 1); assert.match(r.err, /not in enums\.hero_text/);
});

test("composition must fit the hero class", () => {
  const bad = newRow("x", "framed-window", "beside-photo", "none", { hero_composition: "full-bleed", hero_fingerprint: "full-bleed/beside-photo/none" });
  const r = run({ plan: [...oldRows(40), bad] });
  assert.equal(r.code, 1); assert.match(r.err, /cannot use composition/);
});

test("a hero class above 25% of the last 30 fails", () => {
  // the 29 rows before the new one hold framed-window 7 times -> an 8th is 8/30 > 25%
  const tail = oldRows(29, ["photo-left-text-right", "diagonal-split", "text-left-photo-right"]).map((x, i) => (i < 7 ? { ...x, hero: "framed-window" } : x));
  const r = run({ plan: [...tail, newRow("x", "framed-window")] });
  assert.equal(r.code, 1); assert.match(r.err, /8\/30/);
  const ok = run({ plan: [...tail.map((x, i) => (i < 2 ? { ...x, hero: "diagonal-split" } : x)), newRow("x", "framed-window")] });
  assert.equal(ok.code, 0, ok.err);
});

test("a hero class above 20% of the finished rows is not allowed for a new row", () => {
  const olds = oldRows(40).map((x, i) => ({ ...x, hero: i % 5 < 2 ? "full-bleed-photo" : HEROES[i % 5] })); // 40% full-bleed
  const r = run({ plan: [...olds, newRow("x", "full-bleed-photo")] });
  assert.equal(r.code, 1); assert.match(r.err, /of the finished themes/);
  assert.equal(run({ plan: [...olds, newRow("x", "framed-window")] }).code, 0);
});

test("rows of batch >= 38 must carry the fields; rejected rows are ignored", () => {
  let r = run({ plan: [...oldRows(5), { id: "b38-2", slug: "bare", hero: "framed-window", status: "todo" }] });
  assert.equal(r.code, 1); assert.match(r.err, /missing hero_composition/);
  const rej = newRow("rej", "framed-window", "beside-photo", "none", { status: "rejected (x)" });
  r = run({ plan: [rej, newRow("dup", "framed-window", "beside-photo", "none")] });
  assert.equal(r.code, 0, r.err);
});

test("--guidance names the fingerprints in use, the full classes and the hot classes", () => {
  const olds = oldRows(40).map((x, i) => ({ ...x, hero: i % 5 < 2 ? "full-bleed-photo" : HEROES[i % 5] }));
  const r = run({ plan: [...olds, newRow("zed", "framed-window")] }, ["--guidance"]);
  assert.equal(r.code, 0, r.err);
  assert.match(r.out, /zed: framed-window\/beside-photo\/none/);
  assert.match(r.out, /not allowed for new rows: \["full-bleed-photo"\]/);
});

test("the real design-plan.json passes, has the enums and the rule, and its new rows keep slug/status", () => {
  const real = JSON.parse(readFileSync(REAL, "utf8"));
  assert.ok(real.rules.hero_diversity, "rules.hero_diversity");
  for (const k of ["hero_composition", "hero_text", "hero_footer"]) assert.ok(real.enums[k]?.length, `enums.${k}`);
  const r = spawnSync("python3", [SCRIPT, REAL], { encoding: "utf8" });
  assert.equal(r.status, 0, r.stderr);
});
