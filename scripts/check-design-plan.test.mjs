// node --test scripts/check-design-plan.test.mjs — runs the checker on the real plan and on edited copies in a temp dir.
import { test } from "node:test";
import assert from "node:assert/strict";
import { spawnSync } from "node:child_process";
import { mkdtempSync, readFileSync, rmSync, writeFileSync } from "node:fs";
import { tmpdir } from "node:os";
import { join } from "node:path";

const script = new URL("./check-design-plan.mjs", import.meta.url).pathname;
const plan = JSON.parse(readFileSync(new URL("../design-plan.json", import.meta.url), "utf8"));

/** Runs the checker on a copy of the plan changed by edit(rows by id). */
function check(edit = () => {}) {
  const tmp = mkdtempSync(join(tmpdir(), "design-plan-"));
  try {
    const d = structuredClone(plan);
    edit(Object.fromEntries(d.plan.map((r) => [r.id, r])), d);
    const file = join(tmp, "plan.json");
    writeFileSync(file, JSON.stringify(d));
    const r = spawnSync(process.execPath, [script, file], { encoding: "utf8" });
    return { code: r.status, out: r.stdout + r.stderr };
  } finally {
    rmSync(tmp, { recursive: true, force: true });
  }
}

test("the committed plan passes", () => {
  const r = check();
  assert.equal(r.code, 0, r.out);
});

test("every open row needs a wireframe, a non-legacy structure and 5-8 blocks", () => {
  const r = check((rows) => {
    rows["b5-8"].status = "todo";
    delete rows["b5-8"].wireframe;
    rows["b5-9"].page_structure = plan.rules.legacy_page_structure;
    rows["b5-10"].page_structure_blocks = ["a", "b", "c", "d"];
    rows["b5-11"].page_structure = "not-a-structure";
  });
  assert.equal(r.code, 1);
  assert.match(r.out, /hirameki-lab: wireframe missing/);
  assert.match(r.out, /hakobi-logistics: page_structure must not be the legacy/);
  assert.match(r.out, /hidamari-care: page_structure_blocks must be 5-8/);
  assert.match(r.out, /kizuki-construction: page_structure=not-a-structure not in page_structure enum/);
});

test("page_structure and first_screen never repeat on adjacent rows or inside the batch", () => {
  const r = check((rows) => {
    rows["b5-9"].page_structure = rows["b5-8"].page_structure;
    rows["b5-16"].page_structure = rows["b5-12"].page_structure;
    rows["b5-14"].first_screen = rows["b5-13"].first_screen;
  });
  assert.equal(r.code, 1);
  assert.match(r.out, /hakobi-logistics: page_structure results-first-case-wall same as adjacent/);
  assert.match(r.out, /asahi-gakuen: page_structure audience-gateway repeats waza-college within 6/);
  assert.match(r.out, /asahi-gakuen: page_structure audience-gateway already used by waza-college in this batch/);
  assert.match(r.out, /kakehashi-association: first_screen map-diagram same as adjacent/);
});

test("a done row with a new structure records its shipped front-page blocks", () => {
  const done = (rows) => { rows["b5-8"].status = "done (abc1234, 2026-10-19)"; delete rows["b5-8"].front_page_blocks; };
  assert.match(check(done).out, /hirameki-lab: done row needs front_page_blocks/);
  const r = check((rows) => { done(rows); rows["b5-8"].front_page_blocks = ["hl-hero-strip", "hl-wall", "hl-featured", "hl-courses", "hl-figures", "hl-trial"]; });
  assert.equal(r.code, 0, r.out);
});
