// node --test scripts/komugi-bake-board.test.mjs
// The Komugi Pan bake board marks trays by the bakery's clock (site timezone + server time), never the visitor's.
process.env.TZ = "America/Los_Angeles"; // the visitor is far from the bakery
import { test } from "node:test";
import assert from "node:assert/strict";
import { readFileSync } from "node:fs";
import vm from "node:vm";

const SRC = readFileSync(new URL("../themes/komugi-pan/assets/js/bake-board.js", import.meta.url), "utf8");
const TIMES = ["7:00", "7:30", "8:30", "10:00", "11:30", "13:00", "15:00"];

function board(config, visitorNow) {
  const rows = TIMES.map((t) => {
    const set = new Set();
    return { cells: [{ textContent: t }], classList: { add: (...c) => c.forEach((x) => set.add(x)), remove: (...c) => c.forEach((x) => set.delete(x)) }, set };
  });
  const body = { rows };
  const document = { readyState: "complete", querySelectorAll: (sel) => (sel.endsWith("tr") ? rows : [body]) };
  class FakeDate extends Date { constructor(...a) { super(...(a.length ? a : [visitorNow])); } static now() { return visitorNow; } }
  vm.runInNewContext(SRC, { window: { komugiPanBakeBoard: config }, document, Date: FakeDate, Intl, setInterval: () => 0 });
  return rows.map((r, i) => TIMES[i] + (r.set.has("is-out") ? " out" : r.set.has("is-next") ? " next" : ""));
}

// 2026-10-10 10:15 in Tokyo = 01:15 UTC = 2026-10-09 18:15 in Los Angeles.
const NOW = Date.UTC(2026, 9, 10, 1, 15);
const TOKYO_AT_1015 = ["7:00 out", "7:30 out", "8:30 out", "10:00 out", "11:30 next", "13:00", "15:00"];

test("uses the site timezone, not the visitor's", () => {
  assert.deepEqual(board({ timezone: "Asia/Tokyo", offset: 32400, now: NOW }, NOW), TOKYO_AT_1015);
});

test("a manual UTC offset (not an IANA name) still works", () => {
  assert.deepEqual(board({ timezone: "not/a-zone", offset: 32400, now: NOW }, NOW), TOKYO_AT_1015);
});

test("the server time wins over a visitor clock that runs an hour slow", () => {
  assert.deepEqual(board({ timezone: "Asia/Tokyo", offset: 32400, now: NOW }, NOW - 56 * 60000), TOKYO_AT_1015);
});

test("a page from a page cache (old server time) falls back to the visitor's clock, still in the site timezone", () => {
  assert.deepEqual(board({ timezone: "Asia/Tokyo", offset: 32400, now: NOW - 3 * 3600000 }, NOW), TOKYO_AT_1015);
});
