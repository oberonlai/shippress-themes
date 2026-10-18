#!/usr/bin/env node
// Verifies design-plan.json: enums, window no-repeat rules (against shipped history), adjacent rows differ on
// every dimension, even use of each value (illustration styles over illustrated rows, photo directions over
// real-photography rows), a required global header, and the front-page plan: todo/claimed rows carry a wireframe,
// a first_screen and a page_structure (never the legacy values) with 5-8 page_structure_blocks; neither repeats on an
// adjacent row or within its window, page_structure is unique inside a batch, and done rows with a new structure
// record their shipped front_page_blocks. Exit 1 on any violation.
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
    if (k === "photo_direction" || k === "page_structure" || k === "first_screen") continue;
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
const rl = d.rules;
const legacy = { page_structure: rl.legacy_page_structure, first_screen: rl.legacy_first_screen };
const open = r => /^(todo|claimed)/.test(r.status || "");
for (const [i, r] of d.plan.entries()) {
  const tag = `#${r.n} ${r.slug}`;
  for (const k of ["page_structure", "first_screen"]) {
    if (r[k] === undefined) { if (open(r)) errs.push(`${tag}: ${k} missing`); continue; }
    if (!(d.enums[k] || []).includes(r[k])) { errs.push(`${tag}: ${k}=${r[k]} not in ${k} enum`); continue; }
    if (r[k] === legacy[k]) { if (open(r)) errs.push(`${tag}: ${k} must not be the legacy ${r[k]}`); continue; }
    const w = rl[`${k}_window`] || 1;
    for (let j = Math.max(0, i - w); j < i; j++) {
      const p = d.plan[j];
      if (p[k] === r[k]) errs.push(`${tag}: ${k} ${r[k]} ${j === i - 1 ? "same as adjacent" : `repeats ${p.slug} within ${w}`}`);
    }
  }
  if (open(r)) {
    if (typeof r.wireframe !== "string" || !r.wireframe.trim()) errs.push(`${tag}: wireframe missing`);
    const b = r.page_structure_blocks;
    if (!Array.isArray(b) || b.length < 5 || b.length > 8 || b.some(x => typeof x !== "string" || !x.trim())) errs.push(`${tag}: page_structure_blocks must be 5-8 non-empty strings`);
  } else if (r.page_structure && r.page_structure !== legacy.page_structure) {
    const b = r.front_page_blocks;
    if (!Array.isArray(b) || b.length < 5 || b.length > 8) errs.push(`${tag}: done row needs front_page_blocks (5-8 shipped patterns)`);
  }
}
if (rl.page_structure_unique_per_batch) {
  const seen = {};
  for (const r of d.plan) {
    if (!r.page_structure || r.page_structure === legacy.page_structure) continue;
    const key = `${String(r.id || "").split("-")[0]}:${r.page_structure}`;
    if (seen[key]) errs.push(`#${r.n} ${r.slug}: page_structure ${r.page_structure} already used by ${seen[key]} in this batch`);
    else seen[key] = r.slug;
  }
}
const pal = d.plan.map(r => r.palette);
if (new Set(pal).size !== pal.length) errs.push("palette colour reused inside plan");
const spread = {};
const skipSpread = d.rules.even_use_skip || [];
const isPhoto = r => r.image === "real-photography";
for (const [k, en, rows, f] of [["archetype"], ["hero"], ["nav"], ["image"], ["category"],
  ["illustration", d.enums.illustration, d.plan.filter(r => !isPhoto(r))],
  ["photo_direction", d.enums.photo_direction, d.plan.filter(isPhoto), "illustration"]].map(([k, en, rows, f]) => [k, en || d.enums[k], rows || d.plan, f || k])) {
  if (skipSpread.includes(k)) { spread[k] = "skipped"; continue; }
  const c = Object.fromEntries(en.map(v => [v, 0]));
  for (const r of rows) c[r[f]]++;
  const n = Object.values(c);
  spread[k] = `${Math.min(...n)}-${Math.max(...n)}`;
  if (Math.max(...n) - Math.min(...n) > d.rules.even_use_max_spread) errs.push(`${k} uneven: ${JSON.stringify(c)}`);
}
if (errs.length) { console.error(`design-plan: ${errs.length} violation(s)\n` + errs.join("\n")); process.exit(1); }
console.log(`design-plan OK: ${d.plan.length} rows, history ${d.history.length}; per-value use (min-max) ${JSON.stringify(spread)}`);
