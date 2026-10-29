# Reference (draft, stage 1) — Eiyo Clinic
Main (only) reference: **Kobe Yakult** https://kobe-yakult.co.jp/ (S5-Style listing; health / nutrition-adjacent, text-photo longform). Rejected: aimservices.co.jp/50th (cut-out running collage; breaks the no-cutout/no-collage rule). Not used in any earlier reference.md (checked with grep). Measurements: `reference-tokens.md`; screenshots `ref/`.
IMAGERY: photo.

## Signature techniques (candidates, 3 to use)
1. **Inset rounded photo hero + headline underneath** (`ref/ky-fold.png`): 1376×725 photo (ratio 1.9) inset 32px from the sides, 10px radius, high-key window light; 32px/600 headline sits under the photo at left, a #F4F3EF news strip (480×66, radius 5) at right on the same baseline.
2. **Statement that "fills in" while scrolling** (`ref/scroll-textfill-*.png`, `ref/ky-s1.png`): 37px/600, line-height 2.0, tracking 0.06em; four lines, per-character opacity 0.3→1 as the block crosses the viewport; small flat line-art vignettes float on the right.
3. **Pine-colour rounded block with hairline arches** (`ref/ky-s3.png`, `ref/scroll-arches-in.png`): one huge saturated section with ≈90px rounded corners; inside, tall pill/arch outlines (484×576, radius 240, 1px white) holding centred title, 3 lines text and a dot+arrow link; arches rise in.
Also: coverflow photo carousel with a paper caption card overlapping the photo (`ref/ky-s2.png`); 3-col 4:3 cards radius 7.

## Colour (reference → ours; ratios from reference)
| role | reference | ours | share |
|---|---|---|---|
| base | #FFFFFF | #FFFFFF | 55–65% |
| paper | #F4F3EF | #EEF2EF (cool mist, not cream) | 8–10% |
| ink | #303030 | #26302B | text |
| main | #E50111 (big rounded block + CTA) | pine #2C4038 | ≈12% page, ≤3% first screen |
| secondary | — | sage #6E8A7B | small labels, hairlines |
| accent | line-art colours | persimmon #D26A45 | <1% (dot, tiny tag) |
First-screen saturated share: reference 1.8% (measured); ours target ≤3%, hard ceiling 15%.

## Scroll effects (reverse-engineered: observe → fetch main.js → trigger → verify)
| effect | trigger | position | timing | easing | distance | library |
|---|---|---|---|---|---|---|
| Hero crossfade of 3 photos | Splide `type: fade` autoplay | on load | ≈1s fade, ≈5s hold (inferred) | ease | 0 | Splide |
| About statement fill | ScrollTrigger scrubbed per-character spans `.str__animation` | starts when block top at viewport ≈ 41% (scrollY 800), done at ≈ 8% (scrollY 1100) | scroll-linked ≈300px | none (linear scrub) | opacity .3→1 | GSAP ScrollTrigger |
| Arches rise | ScrollTrigger `start: "top center"` | item top ≈ viewport centre (scrollY ≈2200 / ≈2500 for 2nd) | ≈0.6–1.0s (inferred) | Power4.easeOut | translateY 46px→0, opacity 0→1 | GSAP |
| Smooth scrolling | Lenis wrapper | global | — | — | — | Lenis |
| Nav | no scroll effect | — | — | — | — | — |
Before/after shots: `ref/scroll-textfill-mid.png` → `ref/scroll-textfill-done.png`; `ref/scroll-arches-in.png` (arches visible after reveal; before state recorded as numbers: opacity 0, translateY 46.08px).

## Key visual concept (draft)
Reference first screen: a family laughing around a laid table in a bright room (sheer curtain, white wall) inside a rounded inset photo; a calm large headline below, a small news strip at the right. Story: health is made of ordinary shared meals, delivered into everyday life. Signature motion: slow photo crossfade; the statement below lights up character by character while scrolling.
Our translation: a dietitian and a client across a plain wooden table with a simple plate and a handwritten plan, window light — same inset rounded photo, same headline-under-photo, "next consult slot" strip in place of news. (See stage-a.md for the checklist.)
Product-of-ours column ("成品對應") left empty until stage 2.
