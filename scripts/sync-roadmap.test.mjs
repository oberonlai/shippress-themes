// node --test scripts/sync-roadmap.test.mjs
import { test } from "node:test";
import assert from "node:assert/strict";
import { spawnSync } from "node:child_process";
import { mkdtempSync, rmSync, writeFileSync, readFileSync, mkdirSync } from "node:fs";
import { tmpdir } from "node:os";
import { join, dirname } from "node:path";
import { fileURLToPath } from "node:url";
import { START, END, statusOf, renderQueue, syncText } from "./sync-roadmap.mjs";

const HERE = dirname(fileURLToPath(import.meta.url));
const SCRIPT = join(HERE, "sync-roadmap.mjs");
const PLAN = { plan: [
  { n: 1, id: "b3-1", name: "Alpha", slug: "alpha", industry: "bakery", type: "store", status: "done (abc1234, 2026-10-16)" },
  { n: 2, id: "b3-2", name: "Beta", slug: "beta", industry: "law | tax", type: "business", status: "rejected (x; unpublished)" },
  { n: 3, id: "b4-1", name: "Gamma", slug: "gamma", industry: "clinic", type: "health", status: "claimed (2026-10-20)" },
  { n: 4, id: "b4-2", name: "Delta", slug: "delta", industry: "launch (product landing page)", type: "landing", status: "todo" },
  { n: 5, id: "b10-1", name: "Eps", slug: "eps", industry: "gym", type: "health", status: "todo" },
] };
const DOC = (body) => `# Roadmap\n\nintro stays\n\n${START}\n${body}\n${END}\n\n## 4. Rules\n0. keep me\n`;

test("statusOf keeps only the status word", () => {
  assert.equal(statusOf("done (abc, 2026-10-16)"), "done");
  assert.equal(statusOf("rejected (x)"), "rejected");
  assert.equal(statusOf("todo"), "todo");
  assert.equal(statusOf(""), "unknown");
  assert.equal(statusOf(undefined), "unknown");
});

test("renderQueue: totals, next todos in plan order, batches in numeric order, one row per plan row, pipes escaped", () => {
  const md = renderQueue(PLAN);
  assert.match(md, /\*\*5 rows:\*\* 1 done · 2 todo · 1 claimed · 1 rejected/);
  assert.match(md, /\*\*Next todo \(queue order\):\*\* b4-2 `delta`, b10-1 `eps`/);
  const batches = [...md.matchAll(/^\| (b\d+) \| \d+ \|/gm)].map((m) => m[1]);
  assert.deepEqual(batches, ["b3", "b4", "b10"]);
  assert.match(md, /^\| b3 \| 2 \| 1 \| 0 \| 1 \| 0 \|$/m);
  assert.match(md, /^\| 2 \| b3-2 \| Beta \/ `beta` \| law \\\| tax \| business \| rejected \|$/m);
  assert.match(md, /^\| 4 \| b4-2 \| Delta \/ `delta` \| launch \(product landing page\) \| landing \| \*\*todo\*\* \|$/m);
  assert.equal([...md.matchAll(/^\| \d+ \| b\d+-\d+ \|/gm)].length, 5);
  assert.equal(renderQueue(PLAN), md, "deterministic (no timestamps)");
});

test("syncText replaces only the marked block and is idempotent", () => {
  const out = syncText(DOC("stale"), PLAN);
  assert.ok(out.startsWith("# Roadmap\n\nintro stays\n\n" + START + "\n"));
  assert.ok(out.endsWith(END + "\n\n## 4. Rules\n0. keep me\n"));
  assert.ok(!out.includes("stale"));
  assert.equal(syncText(out, PLAN), out);
});

test("syncText refuses a file without exactly one marker pair", () => {
  assert.throws(() => syncText("# no markers\n", PLAN), /markers/);
  assert.throws(() => syncText(DOC("a") + DOC("b"), PLAN), /markers/);
});

test("CLI --check fails on drift, --write fixes it, then --check passes", () => {
  const root = mkdtempSync(join(tmpdir(), "roadmap-"));
  try {
    writeFileSync(join(root, "design-plan.json"), JSON.stringify(PLAN));
    writeFileSync(join(root, "ROADMAP.md"), DOC("stale"));
    const run = (m) => spawnSync(process.execPath, [SCRIPT, m, "--root", root], { encoding: "utf8" });
    let r = run("--check"); assert.equal(r.status, 1); assert.match(r.stderr, /out of date/);
    r = run("--write"); assert.equal(r.status, 0, r.stderr);
    assert.match(readFileSync(join(root, "ROADMAP.md"), "utf8"), /b10-1 \| Eps/);
    r = run("--check"); assert.equal(r.status, 0, r.stderr);
  } finally { rmSync(root, { recursive: true, force: true }); }
});

test("repo ROADMAP.md is in sync with design-plan.json", () => {
  const r = spawnSync(process.execPath, [SCRIPT, "--check"], { encoding: "utf8" });
  assert.equal(r.status, 0, r.stderr + "\nrun: node scripts/sync-roadmap.mjs --write");
});
