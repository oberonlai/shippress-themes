// node --test scripts/komugi-bake-board.test.mjs
// The Komugi Pan bake board marks trays by the bakery's clock (site timezone + server time), never the visitor's.
process.env.TZ = "America/Los_Angeles"; // the visitor is far from the bakery
import { test } from "node:test";
import assert from "node:assert/strict";
import { readFileSync } from "node:fs";
import vm from "node:vm";

const SRC = readFileSync(new URL("../themes/komugi-pan/assets/js/bake-board.js", import.meta.url), "utf8");
const TIMES = ["7:00", "7:30", "8:30", "10:00", "11:30", "13:00", "15:00"];

function cell(textContent) {
  const attrs = {};
  return { textContent, attrs, setAttribute: (k, v) => { attrs[k] = v; }, removeAttribute: (k) => { delete attrs[k]; } };
}

function board(config, visitorNow, legend = null) {
  const rows = TIMES.map((t) => {
    const set = new Set();
    return { cells: [cell(t), cell("Bread")], classList: { add: (...c) => c.forEach((x) => set.add(x)), remove: (...c) => c.forEach((x) => set.delete(x)) }, set };
  });
  // The synced bake board: .kp-board > table + legend (.kp-board__key--out / --next paragraphs).
  const wrap = { querySelector: (sel) => { const k = /--(out|next)$/.exec(sel); return legend && k && legend[k[1]] != null ? { textContent: legend[k[1]] } : null; } };
  const body = { rows, closest: (sel) => (sel === ".kp-board" ? wrap : null) };
  board.rows = rows;
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

test("the chip words come from the board's own legend (editable), never from the script", () => {
  board({ timezone: "Asia/Tokyo", offset: 32400, now: NOW }, NOW, { out: "  Ready ", next: "Coming up" });
  const status = board.rows.map((r) => r.cells[1].attrs["data-status"] ?? "");
  assert.deepEqual(status, ["Ready", "Ready", "Ready", "Ready", "Coming up", "", ""]);
});

test("a board without a legend (an edited 1.0.x pattern) still marks rows but shows no words", () => {
  board({ timezone: "Asia/Tokyo", offset: 32400, now: NOW }, NOW);
  assert.deepEqual(board.rows.map((r) => r.cells[1].attrs["data-status"]), Array(TIMES.length).fill(undefined));
  assert.ok(board.rows[0].set.has("is-out") && board.rows[4].set.has("is-next"));
  assert.doesNotMatch(SRC.replace(/\/\*[\s\S]*?\*\//g, ""), /["'](Out|Next)["']/);
});

test("the shipped bake board pattern has the legend the script reads", () => {
  const html = readFileSync(new URL("../themes/komugi-pan/inc/info/bake-board.html", import.meta.url), "utf8");
  assert.match(html, /<p class="kp-board__key kp-board__key--out">Out<\/p>/);
  assert.match(html, /<p class="kp-board__key kp-board__key--next">Next<\/p>/);
});
