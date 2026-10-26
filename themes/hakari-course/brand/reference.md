# Reference — Hakari Course (stage 1; Final mapping filled from design-spec.md)
Main (and only) S5-Style reference: **https://www.e-chubu.jp/** (Chubu Nippon Driver School — a course school; S5-Style school/education listing). Not used by any earlier theme (checked against themes/*/brand/reference.md). Two other candidates (fukujo.ac.jp/university/juken, gashimaga.jp) were serving maintenance pages on 2026-10-26 and were dropped. Measurements: `reference-tokens.md`. Screenshots: `ref/`.
IMAGERY: **photo** (illustrations are only small stickers, < 15 % of image slots).

## Signature technique candidates (we take 2–3, clearly visible)
| # | Technique (shape / composition / position) | Final mapping |
|---|---|---|
| T1 | Hero photo full-bleed under a white header chip row, **bottom corners rounded 88px**; brush-script catch copy over the lower-middle of the photo; a pastel foot band with a giant hashtag pair; side fixed vertical tabs | **Taken (spec T1 + KV).** Home hero: H1 photo (trainees + probe thermometer on a stainless bench), 88px bottom corners, white Onest 800 H1 left of centre + tagline offset right, "#FOODSAFETY #SUPERVISOR" crossing the photo edge, two CSS badges, header chips. Inner heads = T1-mini (9 pages). Closing band (block 11) echoes `chubu-s3`. |
| T2 | **Tilted rounded photo** (−5°, radius 88px, 581×685) at left 40 % of a row, big display number "01" + 2-line coloured headline + pill button on the right; the row repeats ×3 | **Taken (spec T2).** Home "Why" rows 01–03 (R1–R3, ±5°, 88px, 581×685, Onest 800 5.5rem #5F8884 numbers, outlined pill) + instructor row (I1); inner: Syllabus, Instructors, How it works, Stories. |
| T3 | Big white **rounded panel** (radius 88px, inset 55px) holding 3 rounded photo cards + 3 small outlined link cards, on a soft gradient wash | **Taken (spec T3).** Home "Course" panel (C1–C3 cards 355×320 r33 + 3 outlined r22 link cards) on the #FCEEF0→#EEF8F5→#FBF9E3 wash; panels also hold syllabus, dates, FAQ and every inner page body. |
| T4 | Display word (Emblema One) bouncing in char-by-char (elastic), with a tiny JP subtitle under it | Supporting: English display word Onest 800 3.5rem #5F8884 + local subtitle 2.125rem on every section; char bounce replaced by `sp-reveal--wipe` (no per-char JS). |
| T5 | Fixed right-edge **vertical CTA tabs** (two stacked, vertical text, radius on left) | Supporting (KV #5): "Enrol" #E8121F + "Syllabus PDF" #49EBD2, 78×218 / 78×238 at y 217 / 447, ≥782px only; <782px a horizontal fixed bottom bar. |

## Colour relation
Ground white + pastel gradient wash (≈ 45 %), photo (≈ 40 %), one hot point colour (red #FF1626, ≈ 3 %) for titles / numbers / tab, secondary mint #49EBD2 / cyan #40D9FF / yellow #FBFF27 (≈ 4 %), black text. First-screen saturated share 11.1 %. Relation to keep: **white ground + one strong colour used only on display words, numbers and the tab**, everything else neutral.

## Scroll effects seen
fade-in-from-right 33px 0.8s once at top 70 %; char elastic bounce on English titles; hero img scale 1.4→1; tilted photo rotate/scale settle with overshoot; slides rise 10 % with 0.1s stagger; auto-scroll gallery. Details in `reference-tokens.md` (g).

## Key visual
Hero = a joyful learner trio leaning on a mint car with a hand-brush "start from the licence!" line and a "#LICENSE #DRIVE" band; story "a licence is the start of freedom"; motion = photo zooms 1.4→1, copy bounces in, sticker pops in. See stage-a.md "Key visual concept".
