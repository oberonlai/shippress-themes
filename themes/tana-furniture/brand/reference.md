# Reference (draft, stage 1 research)

Industry: independent furniture shop (store, crafts-homeware). Palette plan: bark #5A4E46 (plan row), quiet, first-screen saturated share well under 15%.

- Main reference: https://shiodakagu.com/ (S5-Style gallery entry; a regional interior and furniture shop).
- Secondary: https://betchu-kagu.co.jp/ (made-to-order furniture workshop).

## What we borrow (relationships, not assets)
| Reference trait | Seen at | Our adaptation (filled in at design stage) |
|---|---|---|
| Three photo panes, two stacked left and one tall right, no gaps, with a white stepped headline crossing the seam, opening from black | `ref/shioda-first.png`, `ref/scroll-shioda-hero-before.png` | T1 home stage: ink `#111010`, P01 tape at the sofa arm (TL), P02 swatch at the window (BL), P03 finished living room (R tall), 0 gap; stepped H1 "Furniture, / fitted to / the room / you live in." crossing the seam; 6 s set swap to P04-P06. Page stage (64svh) on every inner page. |
| Grey band with white cards (photo above, bracketed label and two-line title below) and a 5x2 line-icon tile index | `ref/scroll-shioda-cards-after.png` | T2 home block 3 "[ What we make ]": band `#DBDBDB`, white cards P07/P08 and P09/P10 (1.67:1, radius 0), 10 own teal outline icon tiles (5x2, 60 px rows, 1 px gaps); repeated on Collection, Made to order, Measure, Delivery, Journal. Offset photo + 47 px overlapping white card (`ref/shioda-offset-card.png`) drives home block 6 and inner rows. |
| Pentagon house-outline stamp as the single CTA, scale on hover | `ref/shioda-first.png` | T3 pentagon house stamp 104x84, 1 px, "How we / measure" on the hero seam, "Book a / visit" on home rows and visit; one per page stage; hover scale 1.1 / .3 s, teal stroke. |
| Colour relationship: black / white / one grey band / one deep accent under 3% | `reference-tokens.md` (a) | White `#FFFFFF` / band `#DBDBDB` / ink `#111010` / accent `#006D80` (<3%) kept; plan bark `#5A4E46` only on the footer and T4 rules. First-screen saturated target <=12% (gate 15%). |
| Secondary: hairline cell strip with arrows and a five-segment counter | `ref/betchu-first.png`, `ref/scroll-betchu-1500.png` | T4 (supporting): bark-ruled cells for the Rooms strip (R1-R3, P15-P17, "View the room ->", 01-03 counters) and the text-only materials `sp-marquee`. Counter bar not used. |

## Screens
`ref/shioda-first.png` (first screen), `ref/scroll-shioda-hero-before.png` / `ref/scroll-shioda-hero-after.png` (headline first, photos 1.7 s later), `ref/scroll-shioda-cards-before.png` / `ref/scroll-shioda-cards-after.png` (card band), `ref/shioda-offset-card.png` (offset photo with overlapping white card), `ref/betchu-first.png`, `ref/scroll-betchu-1500.png`, computed-style dumps `ref/shioda-computed.json`, `ref/betchu-computed.json`.

Adaptation column filled at design stage (2026-11-11); full values in `design-spec.md`.
