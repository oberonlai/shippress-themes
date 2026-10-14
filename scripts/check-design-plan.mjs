#!/usr/bin/env node
// Verifies design-plan.json: enums, window no-repeat rules (against shipped history), adjacent rows differ on
// every dimension, even use of each value (illustration styles over illustrated rows, photo directions over
// real-photography rows), and a required global header. Exit 1 on any violation.
import { readFileSync } from "node:fs";
const file = process.argv[2] || new URL("../design-plan.json", import.meta.url);
const d = JSON.parse(readFileSync(file, "utf8"));
const errs = [];
const seq = [...d.history, ...d.plan];
const start = d.history.length;
const dims = ["archetype", "hero", "nav", "image", "illustration", "palette_family", "category"];
for (const [i, r] of d.plan.entries()) {
  const at = start + i, tag = `#${r.n} ${r.slug}`;
  const photo = r.image === "real-photography";
  for (const k of Object.keys(d.enums)) {
    if (k === "photo_direction") continue;
    const en = k === "illustration" && photo ? d.enums.photo_direction : d.enums[k];
    if (!en.includes(r[k])) errs.push(`${tag}: ${k}=${r[k]} not in ${k === "illustration" && photo ? "photo_direction" : k} enum`);
  }
  if (r.header_required !== true) errs.push(`${tag}: header_required must be true`);
  for (const [k, w] of Object.entries(d.rules.windows)) {
    for (let j = Math.max(0, at - w); j < at; j++) {
      const p = seq[j];
      const clash = k === "fonts" ? (p.fonts || []).some(f => r.fonts.includes(f)) : p[k] !== undefined && p[k] === r[k];
      if (clash) errs.push(`${tag}: ${k} repeats ${p.slug} within ${w}`);
    }
  }
  const prev = seq[at - 1];
  for (const k of dims) if (prev && prev[k] !== undefined && prev[k] === r[k]) errs.push(`${tag}: same ${k} as adjacent ${prev.slug}`);
  if (prev && prev.palette === r.palette) errs.push(`${tag}: same palette as adjacent`);
}
const pal = d.plan.map(r => r.palette);
if (new Set(pal).size !== pal.length) errs.push("palette colour reused inside plan");
const spread = {};
const isPhoto = r => r.image === "real-photography";
for (const [k, en, rows, f] of [["archetype"], ["hero"], ["nav"], ["image"], ["category"],
  ["illustration", d.enums.illustration, d.plan.filter(r => !isPhoto(r))],
  ["photo_direction", d.enums.photo_direction, d.plan.filter(isPhoto), "illustration"]].map(([k, en, rows, f]) => [k, en || d.enums[k], rows || d.plan, f || k])) {
  const c = Object.fromEntries(en.map(v => [v, 0]));
  for (const r of rows) c[r[f]]++;
  const n = Object.values(c);
  spread[k] = `${Math.min(...n)}-${Math.max(...n)}`;
  if (Math.max(...n) - Math.min(...n) > d.rules.even_use_max_spread) errs.push(`${k} uneven: ${JSON.stringify(c)}`);
}
if (errs.length) { console.error(`design-plan: ${errs.length} violation(s)\n` + errs.join("\n")); process.exit(1); }
console.log(`design-plan OK: ${d.plan.length} rows, history ${d.history.length}; per-value use (min-max) ${JSON.stringify(spread)}`);
