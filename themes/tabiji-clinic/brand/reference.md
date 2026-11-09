# Reference (draft, stage 1) - Tabiji Clinic
Primary: https://morioka-ganka.com/ (collected on S5-Style, eye clinic). Secondary: https://aoba-ligare.com/ (collected on S5-Style, home-visit clinic).
Neither domain is in the used list. Screens: `ref/morioka-first.png`, `ref/morioka-message.png`, `ref/morioka-cards.png`, `ref/morioka-feature.png`, `ref/aoba-first.png`, `ref/aoba-treatment.png`, `ref/aoba-medical.png`; scroll: `ref/scroll-morioka-cluster-before.png` / `-after.png`.

## Signature candidates (we use T1-T3 visibly)
- T1 (morioka first screen): inset rounded photo frame under a white header band, ghost headline on the photo, white info card cut into the frame's bottom-right corner (inverse-corner notch), dark pill CTA in the header.
- T2 (morioka message): centred short statement with a tiny flag-mark label; two small staggered photo pairs flanking it, left pair stepping down, right pair stepping up.
- T3 (morioka cards): white 2x2 cards on a pale band, each with a ghost line-art corner (swirl ellipse / wavy hatch) and an underlined link with a circle arrow.
- Supporting (aoba): white top bar with two solid pills; soft gradient band with white link cards that carry a round pale icon disc; row of four photos bleeding off the right edge.

## Palette relationships (ours: slate #5E6B73 family)
Ground near-white, a slightly darker pale band, charcoal text, one tiny saturated accent, one dark pill. Saturated share target <= 3% (reference 1.3%).

## Finished mapping (built as; see `design-spec.md`)
| Reference element | Source | Built as in Tabiji Clinic |
|---|---|---|
| Inset rounded hero frame (20 px, r8) under a 128 px header band | Morioka first screen | T1: home hero Cover with P01 (nurse drawing a vaccine + physician with the itinerary), `sp-parallax` 8%; every inner page head is a 420 px T1 frame |
| Ghost headline + spaced Latin line on the photo | Morioka first screen | H1 "Where are you / going next?" 4.5rem Figtree 400 in the right 38%; cycling destination line (CSS crossfade, static in `sp-static`) |
| Hours card notched into the bottom-right corner (concave corners) | Morioka first screen | Ground-coloured notch card 560×210 with two dotted hours rows and a circle-arrow link (no table); inner heads carry title + lead in a 440×150 notch |
| Header: news line, nav, outline pill, dark pill | Morioka header (+ Aoba two solid pills) | 128 px header: notice row, nav, "Call" outline pill, "Book a visit" dark pill |
| Fixed Ø80 badge with rotating ring text | Morioka | "Which vaccines for your trip?" ring badge, ≥782 px only, links to Journeys |
| Flag mark + uppercase Latin label | Morioka message | 14×6 `#0000F9` flag above every section label |
| Centred message flanked by stepped photo pairs | Morioka message | T2: home block 2 (P02 P03 / P04 P05); About, Records, Groups, Contact |
| White 2×2 cards with ghost line-art corner and circle-arrow link on a pale band | Morioka consult cards | T3: home block 3 "Which journeys need which doses" (4 trip types, own line drawings); Journeys, Fees, Records, Groups, FAQ |
| Feathered photo rows with "01 \| Word" index labels | Morioka feature | Home block 4 "01 \| Review / 02 \| Doses / 03 \| Record" (P06 P07 P08); Your appointment page |
| Gradient band with white icon-disc link cards + 4 photos bleeding right | Aoba treatment | Home block 5 slate-mist band, counted facts, 2 icon-disc cards, P09–P12 row |
| Inset blurred photo band with centred title + outline pill | Aoba for Medical | Home block 6 "For teams and schools", P13, `sp-parallax` 10% |
| Blur + scale scroll-in of photos and text (CSS `view()`) | Morioka motion | `sp-reveal--zoom` on photos, `sp-reveal--up` + `sp-stagger` on text and cards, `sp-count` on facts |
| Colours `#FBFCF7` / `#F3F4EC` / `#423E3E` / `#0000F9` / `#F0F1E4` | Morioka tokens | Kept as is; row slate `#5E6B73` as secondary text/outline/gradient |
