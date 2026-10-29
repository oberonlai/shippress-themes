# Reference (stage 1) — Eiyo Clinic
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
| paper | #F4F3EF | #F1F3F0 (−1% lightness, neutral-cool, not cream; spec §5) | 8–10% |
| ink | #303030 | #303030 (unchanged) | text |
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
## 成品對應 (reference element → Eiyo Clinic, binding detail in `design-spec.md`)
| Reference (Kobe Yakult) | 成品對應 | Where | Spec |
|---|---|---|---|
| Inset rounded hero photo 1376×725, r10, 32 px gutters | Inset r10 photo, ratio 1.9 (height-capped), dietitian + client at oak table, simple plate, handwritten plan (P01) | Home KV; every inner page head (T1) | §1 T1, §2 |
| 3-photo Splide crossfade | CSS 3-slide crossfade P01 → P02 → P03 (clinic table → home lunch → shared dinner) + `sp-parallax` 6 % | Home KV | §2, §10 |
| 32 px/600 H1 under photo, news strip #F4F3EF right | H1 2.25rem under photo left; paper strip #F1F3F0 480×66 r5 "Tue & Thu · first consults" | Home KV; inner heads (page fact) | §1 T1 |
| Red contact button | Pine "Book a consult" button 15/500 r4 | Header | §3 |
| 4-line statement fill .3→1 | 4 lines 37/600 lh 2.0, per-line .3→1 (sp-stagger + sp-reveal--up) + side photo P04 + dot-arrow chip | Home #2; About, Approach, Dietitians | §1 T2, §10 |
| Line-art vignettes | Not used (photo-led); replaced by photo P04 | Home #2 | §1 T2 |
| Coverflow + overlapping paper caption card + tab rules | Static coverflow P05/P06/P07, card −90/−120 overlap, 3 "stall" tab labels | Home #3; Approach; Services | §4 |
| Red block, ≈90 px corners, two hairline arches, centre object, faint big phrase | Pine #2C4038 block r 0 90 0 90, two 1 px white arches 484×576 r240, centre photo P08 (no cut-out), 4.25rem "Plainer meals, planned together." | Home #4; Approach, Services (2×2), Fees, Contact | §1 T3 |
| Arch rise y46→0 Power4.easeOut | sp-reveal--up 30 px, .9 s, cubic-bezier(.165,.84,.44,1), stagger | arches, story cards | §10 |
| Company cards 3×380 4:3 r7 | 3 story cards P09–P11 | Home #5; Journal | §4 |
| Recruitment paper section 140/140 | Paper "Who is in the room": wide photo P12 + 7-name list | Home #6 | §4 |
| Dot + arrow chip link | Same chip, persimmon dot | site-wide | §5 |
| Lenis smooth scroll | Not used | — | §10 |
