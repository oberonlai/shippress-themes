# Reference (draft — stage 1; 成品對應 column left blank for stage 2)

Source: S5-Style (https://www.s5-style.com/)
- Main: **BREDA** — https://breda.jp/ (S5-Style /6865/, Fashion; Japanese watch brand site). Measurements: `reference-tokens.md`. Screenshots in `ref/`: `breda-first.png` (first screen), `breda-s1.png` (tiles + pick-up), `breda-s2.png`, `breda-s3.png`, scroll-*.png.
- Sub (structure/colour only, lightly): **VERMILLION** — https://vermillion-jewelry.com/ (S5-Style /8489/, jewelry). `ref/vermillion-first.png`, `vermillion-s1..s3.png`: full-bleed portrait photo over a teal→amber→brick gradient sky, centred logo in a transparent header with red serif nav, a thin 6-segment slide indicator bottom-right. Used only for the idea of a low-key warm gradient behind a close-up of jewellery worn on a hand.
- Neither site appears in any earlier reference.md.

**IMAGERY: photo** (reference main image slots are photographs; no illustration).

## Signature techniques (candidates)
| # | Technique | Shape / composition / position | 成品對應 |
|---|---|---|---|
| 1 | Two-pane hero: two full-height photos side by side, each 50% width × 724 px, square corners, crossfading (double-exposure moment) | left = macro of one watch, right = a wearer's wrist | |
| 2 | Translucent taupe caption bar across the bottom 89 px of the hero: model name 30px mono + one 18px light line, centred | `rgba(160,146,129,.6)`, white type | |
| 3 | Row of 4 square photo tiles (359 px) directly under the hero, label bottom-left, 1 px gaps | About / Topics / Look book / Collection | |
| 4 | Product pick-up strip: 5 cut-out watches on `#F4F4F4` cards 288×286 with white vertical "NEW ARRIVAL" tabs and 12×12 square pager dots | | |
| 5 | Monospace uppercase letter-spaced type (ballinger-mono), black on white, zero radius, zero shadow | | |

## Palette (ratios, first screen)
White `#FFFFFF` ≈ 9% · photo greys/warm taupe ≈ 75% · caption taupe `#A09281` @ 60% ≈ 10% · black `#000` text <1% · footer `#F9F5EE` · accent only in product photos. Saturated share **0.1%**.

## Scroll effects found
See tokens (g) and stage-a.md table: hero crossfade 1000ms/6400ms, `inview` fade 1000ms, header hide-on-scroll .3s, hover .7, pick-up slider 500ms.
