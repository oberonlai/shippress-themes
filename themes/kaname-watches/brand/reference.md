# Reference (stage 1; As built filled from design-spec.md)

Source: S5-Style (https://www.s5-style.com/)
- Main: **BREDA** — https://breda.jp/ (S5-Style /6865/, Fashion; Japanese watch brand site). Measurements: `reference-tokens.md`. Screenshots in `ref/`: `breda-first.png` (first screen), `breda-s1.png` (tiles + pick-up), `breda-s2.png`, `breda-s3.png`, scroll-*.png.
- Sub (structure/colour only, lightly): **VERMILLION** — https://vermillion-jewelry.com/ (S5-Style /8489/, jewelry). `ref/vermillion-first.png`, `vermillion-s1..s3.png`: full-bleed portrait photo over a teal→amber→brick gradient sky, centred logo in a transparent header with red serif nav, a thin 6-segment slide indicator bottom-right. Used only for the idea of a low-key warm gradient behind a close-up of jewellery worn on a hand.
- Neither site appears in any earlier reference.md.

**IMAGERY: photo** (reference main image slots are photographs; no illustration).

## Signature techniques (candidates)
| # | Technique | Shape / composition / position | As built |
|---|---|---|---|
| 1 | Two-pane hero: two full-height photos side by side, each 50% width × 724 px, square corners, crossfading (double-exposure moment) | left = macro of one watch, right = a wearer's wrist | **T1** home `front-window`: framed window (32 px inset, y 80, 2 × 50% × 724, corners 0) K1 \| K2 → K3 \| K4, CSS crossfade 1000/6400 ms; small static window heads every inner page (Shop crossfades) |
| 2 | Translucent taupe caption bar across the bottom 89 px of the hero: model name 30px mono + one 18px light line, centred | `rgba(160,146,129,.6)`, white type | **T2** same taupe bar, h1 THE SHORT LIST 1.875rem caps + 1.125rem line in a 640 px centred column, rises 400 ms; reused on tray parallax band, both home chapter photos, every inner window, single product gallery, single post |
| 3 | Row of 4 square photo tiles (359 px) directly under the hero, label bottom-left, 1 px gaps | About / Topics / Look book / Collection | **T3** home `front-tiles`: 4 squares ≈343 px, 1 px gaps, labels bottom-left +36 (HOW WE CHOOSE / TWO IN FULL / VISIT THE COUNTER / THE SHORT LIST, K5–K8), sp-stagger fade 1000 ms; tile row above the footer on every inner page |
| 4 | Product pick-up strip: 5 cut-out watches on `#F4F4F4` cards 288×286 with white vertical "NEW ARRIVAL" tabs and 12×12 square pager dots | | Supporting S-a: home `front-counter` IN THE COUNTER, 5 × 1:1 low-key packshots (no cut-outs) + info on `#F4F4F4`, 2 px gaps, white 28×92 vertical category tab, 12×12 square pager; same cards in Shop grid |
| 5 | Monospace uppercase letter-spaced type (ballinger-mono), black on white, zero radius, zero shadow | | Supporting S-b: Hanken Grotesk caps ls 0.13em for nav/labels/titles, Onest body, `#000` on `#FFF`, radius 0, no shadow site-wide |

## Palette (ratios, first screen)
White `#FFFFFF` ≈ 9% · photo greys/warm taupe ≈ 75% · caption taupe `#A09281` @ 60% ≈ 10% · black `#000` text <1% · footer `#F9F5EE` · accent only in product photos. Saturated share **0.1%**.

## Scroll effects found
See tokens (g) and stage-a.md table: hero crossfade 1000ms/6400ms, `inview` fade 1000ms, header hide-on-scroll .3s, hover .7, pick-up slider 500ms.

## As built summary (design-spec.md)
- Palette: BREDA hex kept exactly (`#FFFFFF` / `#000000` / taupe bar / `#F9F5EE` footer / `#F4F4F4` cards / `#666666` meta); row kuro-cha `#4A4036` only on buttons and the cart title strip; photos low-key (row) instead of BREDA's high-key — the one deliberate deviation.
- Motion: hero crossfade + caption rise (theme CSS), `sp-reveal` fade 1000 ms swing, `sp-stagger` tiles/questions, `sp-parallax` on the K9 tray band (`--sp-par` 10% / mobile 7%) and on Visit.
- Vermillion: warm low light on hands (K2, K4, K10) only.
