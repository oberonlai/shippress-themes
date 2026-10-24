# Reference (stage 1 draft)
Sole reference (S5-Style #11535, B2B corporate, field-survey / engineering office; photo-led, ground grey + ink band + one yellow accent): https://inoue-surveying.co.jp/
Screenshots: `ref/inoue-first.png`, `ref/inoue-s1.png` … `inoue-s4.png`, `ref/scroll-inoue-case-before.png`, `ref/scroll-inoue-case-after.png`. Measurements: `reference-tokens.md`.
Not used before (checked against themes-repo reference.md list); ANRI (anri.vc) was looked at and dropped: 3D graphics, off-target.

## Signature technique candidates (we use 3)
1. Full-bleed photo hero of a professional at the instrument, headline bottom-left over the photo, one word boxed with crop marks, outline watermark word at the fold, left ruler strip.
2. Circle "scope" mask photo with cross-hair lines + 3 hairline link rows with boxed arrows.
3. Overlapping photo pair, each inside a hairline frame with crop-mark ticks (frames show first, photos fade in).
4. Dark band with 3 photo cards, scrim, title + white boxed arrow.
5. Left fixed ruler strip + faint grid ground.

## Colour (ours, ratios)
see `cc-runs/th-akira-audit/stage-a.md`. Product column (What we ship, what we ship; full mapping in `design-spec.md` §12):
| token | reference | ours |
|---|---|---|
| ground | #EDEDED | #ECEBEC (~45 %, + 24 px grid at 6 %) |
| ink band | #33312A | #2B2830 (~12 %, Services band, footer, dark buttons) |
| accent | #FFEA00 | #6E6272 (≤3 %: header CTA 180×80, eyebrow ticks, scope-ring top tick); button dot #C9BFCD |
| eyebrow | #7F7000 | #6E6272 |

## What we ship (techniques → Akira Audit)
| reference | ours (design-spec.md) |
|---|---|
| 1 Hero: surveyor + instrument, boxed "to measure" with crop marks, outline watermark, ruler strip | T1 home hero: auditor at stock count (h01, sp-parallax 8 %), boxed "count" with 12 px crop marks, outline AKIRA AUDIT 10.5rem cut by info bar, 24 px tally-tick strip; boxed word in every inner H1 |
| 2 Scope circle 476 px + 3 link rows | T2 home "What we look at" (h02) + Company audit (p14), Charity audit (h08), Contact (p16) |
| 3 Overlapping framed photo pair | T3 home Case (h10+h11), About (p13+h12), Cases page, single frames in How we audit |
| 4 Dark band 3 photo cards | S4 home Services band #2B2830 (h07–h09) |
| 5 Ruler strip + grid | global on all pages (≥782 px 24 px, mobile 10 px) |
| Motion: frame-first photo fade 2 s, rows rise 10 px, scale-in marker | sp-reveal (2 s ease-in-out), sp-reveal--up + sp-stagger (10 px, 1 s), sp-reveal--zoom (scope circle) |
