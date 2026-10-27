# Reference — Budou Academy (sommelier school) (as built filled from design-spec.md, stage 1 spec)
Main reference (S5-Style listing): **https://www.daiichisemi.net/** (Daiichi Seminar, cram school; S5 #12132, school/education). Not used by earlier themes. Measurements: `reference-tokens.md`. Screenshots: `ref/daiichi-first.png`, `ref/daiichi-s2.png`, `ref/daiichi-s3.png`, scroll pairs `ref/scroll-fadeup-before|mid|after.png`, `ref/scroll-parallax-a|b.png`.
Second candidate fukujo.ac.jp was in maintenance mode on 2026-10-27, so only one reference is used.
**IMAGERY: photo** (reference is real documentary photography of students/teachers).

## Signature techniques (candidates)
| # | Technique (shape / composition / position) | as built |
|---|---|---|
| 1 | Hero = interlocking collage of 3 large photo tiles with 54px radius (left column two stacked, right one tall), huge slanted gradient headline crossing the seam between tiles | **T1 / KV**: home `front-hero` — K2 + K3 left, K1 tall right (bleeds), K4 sliver, r 54, gutter 36; H1 "Taste it. Name it." Cormorant Italic 600 9rem gradient `#4A6358→#82997A` crossing the gutter; columns `sp-parallax` +10% / −8%; term bar wipe-in; inner pages use the T1 mini head (H1 across a 2-tile pair) |
| 2 | White floating pill header (inset 54px from edges, bottom radius) with three coloured tab underlines + three solid CTA tiles on the right | **T2**: `parts/header.html` all pages — white pill inset 54px, bottom r 24, 90px bar + 48px tab row (Certificate `#7E968A`, Diploma `#4A6358`, Advanced `#6E2A3A`, 3px lines), CTA tiles 90×90 `#5B7568` / `#4A6358` / `#6E2A3A` |
| 3 | Feature bands: one saturated tone-on-tone band with one big rounded corner and translucent circle arcs; a 720×540 photo (radius 36) bleeds past the band edge, alternating left/right | **T3**: home `front-features` ×3 (F1/F2/F3) + mirrored `front-visit` (N1); band `#4A6358→#5E7A6C`, 64% wide, one 90px corner, white 10% arcs Ø 700/460, 4:3 photo r 36 at 40px below band top overlapping the edge by 260px; one band on 8 inner pages |
| 4 | Scattered small rounded photos around a huge 81px section title, drifting at different parallax speeds | Supporting: home `front-about` — A1 (4:5, 288px) and A2 (3:2, 420px), r 36, at the About top around the 81px gradient H2 "Why we teach on Mondays", `sp-parallax --sp-par:12%` |

## Colour relationship (ref → ours, as built hex)
Ref: ink `#333` / white + warm `#F3EEE6` / saturated gradient `#F86F0E→#FFD649` (type + bands) / tabs `#F6A700 #EF7C00 #E85D27 #13884D`. First-screen saturated ≈ 9.9%.
as built: ink `#333333`, base `#FFFFFF`, panel `#F3EEE6` (ref neutrals kept exactly); type gradient `#4A6358→#82997A`, band gradient `#4A6358→#5E7A6C`, About wash `#E9EFE9→#F7F9F5`, CTA tiles `#5B7568 #4A6358 #6E2A3A`, tab lines `#7E968A #4A6358 #6E2A3A`, accent wine `#6E2A3A` (<2%). Hue moved orange→vine green (quiet adult school, row palette (ref term)); roles, ladder and ratio kept. See design-spec.md §3.

## Scroll effects
See `reference-tokens.md` (g) and stage-a.md table. as built: `sp-reveal--up` (30px, 0.4s, cubic-bezier(.25,1,.5,1)) + `sp-stagger`, `sp-parallax` (hero opposite drift +10%/−8%, About 12%, bands 6%), term-bar load wipe (design-spec.md §10–11).
