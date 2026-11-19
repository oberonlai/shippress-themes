# Reference
Reference: https://www.jcomm.co.jp/  (S5-Style, photography / corporate; framed window + docked tab cells + hairline ribbon)
Secondary: https://fudo.tree-public-squares.com/  (S5-Style, photography; route scale and chapter transit labels)
Screenshots: ref/jcomm-first.png, ref/scroll-jcomm-tabs.png, ref/scroll-jcomm-works.png, ref/scroll-fudo-transit.png, ref/scroll-fudo-chapter.png. Measured values: reference-tokens.md. Full build values: design-spec.md. Rejected candidates are not listed.

## Signature techniques adopted
| # | Reference technique | Source | Our counterpart |
|---|---|---|---|
| T1 | Framed rounded photo window under the header, three notched tab cells docked on its bottom edge that rise into three white cards on scroll | jcomm first screen + scroll-jcomm-tabs.png | Home: film-grain window x 40-1400 / y 102-842 r16 (tour manager helping a guest up the train step, conductor with a flag); three cells "A day on tour" (raised 75 px, bark top rule + 32 px arrow tile) / "What we carry" / "Request a brochure" (25 px) that are the tops of three white r12 cards 449 x 492, gap 10. Inner pages: 1360 x 420 window + three docked cells used as the in-page index. |
| T2 | Corner-bracket (four 1 px L ticks) frame around each card title on white r12 cards | jcomm service cards | Every white-card title: four 1 px ink L ticks with 14 px arms, Libre Baskerville 400 30/39; home three cards, "What we carry" 2 x 3 cards, brochure card; inner Tours, What we carry, Departures & prices, Pace & access, About, Request a brochure. |
| T3 | Wide white pill button with a pale square arrow tile at the right end, set on a dark textured band with white cards | jcomm works + scroll-jcomm-works.png | Home "Four lines": #444863 grained band, four white r12 cards with 8 px inset 1:1 route photos and chips, white 460 x 78 r8 pill with a 60 x 60 #EFE6E0 tile; closing bands on Tours, Lakes & Viaduct Line, A day on tour, Departures & prices; brochure pill strip on home. |
| Support | Mono caps transit label + vertical route scale with a moving dot | fudo | Day schedule: "DAY 3 · KM 112 -> 168" caps label, 6.5rem serif "56 km" numeral (sp-count), vertical tick scale (40 / 160 px) with a dot beside the eight time rows; one label per day on the Lakes & Viaduct Line page. |

## Key visual
Reference: washed aerial station-roof photo in a rounded window, giant thin white word, drifting blue hairline ribbon, docked "pick up" card, three tab cells. Ours: same composition with one film-grain platform photograph (tour manager, guest at the step, conductor with a flag), "Every step, with you." in the sky area, 36 drifting rail hairlines (white to bark), a "Next departure" card (Lakes & Viaduct Line, 14 April 2027, 7 of 16 seats left) and the three cells.

## Colour
Reference codes kept: ground #F6F7F9, card #FFFFFF, ink #2A2F4E, dark band #444863. Only the accent changes: blue gradient #4D61D4 -> #1630C6 becomes the row's bark gradient #96705C -> #7D5745 (#8C6450) in the same roles and share; pale tiles #CFE0FF / #9BF0F5 become #EFE6E0.

## Scroll effects
Reference: reveal-once via IntersectionObserver with data-delay stagger; pinned horizontal strip with scrub progress bar; scroll-scrubbed blur-to-sharp; yPercent parallax; hairline ribbon canvas in the hero.
Ours: sp-parallax (home window 8 %, viaduct band 10 %, inner windows 6 %), sp-reveal--up + sp-stagger (cards, rows), sp-count (day numerals); the ribbon becomes a CSS-only 40 s drift of SVG rail lines (static under reduced motion).
