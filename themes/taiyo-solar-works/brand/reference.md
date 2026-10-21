# Reference (draft, stage A)

## Sources (S5-Style gallery, https://www.s5-style.com/)
- R1 BEST HOME EP (besthome-ep.com, gallery /11768/): house builder, split first screen.
- R2 URBAN HOME (urbanhome-tt.com, gallery /11763/): custom homes, bold wordmark and fact circles.
Screenshots: ref/besthome-first.png, ref/besthome-contact-sheet.png, ref/urbanhome-first.png, ref/urbanhome-contact-sheet.png (1440x900).

## Signature candidates
R1:
- A1 Split first screen: left 50% full-height photo (interior, dark), right 50% pale-to-grey gradient panel; seam is dead centre.
- A2 Wide-tracked wordmark "BEST HOME EP" ~90 px, spans the full width along the bottom edge and crosses the photo/panel seam (white, wide geometric caps).
- A3 Small portrait inset photo (300x400) in the right panel with a vertical (tate) 2-line statement beside it; left edge has a vertical rotated "work 09" label with a ring number.
- A4 Numbered section labels "[01]" above a thin serif English heading with Japanese sub-label; generous whitespace (about 160 px between sections).
- A5 Spec cards: white cards on pale grey, one big navy numeral (0.1, 2, 0.34) + unit + small caption in a 3-up row; works-strip with plain 3:4 photos and small year/type captions.
- A6 Scrolling ticker band of statements separated by dots, between sections.
R2:
- B1 Two overlapping hairline circles (about 250 px) holding fact figures ("No.1", "30-year warranty") overlapping each other and the hero imagery.
- B2 Huge wordmark "MORE LIFE STYLE" in cream, cut off by the first-screen bottom edge, full bleed.
- B3 Thin-ruled news line (date | text | dot) beside the tagline at the bottom of the hero.
- B4 Section break with a house-silhouette roofline torn edge between a cream band and a dark band; house-shaped (arch-top) photo frame.
- B5 Horizontal slider of tall (3:4) cards with coloured poster tops for lineups; works cards numbered 33/32/36.
- B6 Vertical text "MORE LIFE STYLE" down the right edge of the footer.

Recommended for Taiyo (pick 2-3 clearly visible): A1 split first screen + A2 wordmark across the seam (roof photo left, quiet panel right); B1 two overlapping circles with system size / estimated saving figures; A5 spec cards = case study strip numerals; B4 roofline-pitch edge (solar roof silhouette) as section divider.

## Colours (measured at 1440x900)
R1 first screen: saturated (S>.35, V>.25) 5.0%. Ground greys #686868 9%, #585858 6%, #484858 4%; page ground #F0F0F0 / #FFFFFF; dark footer #3A3A3A; navy numerals about #2B3A7A (small).
R2 first screen: saturated 83.7% (green #086848 61%, #087858 12%, cream #F8E8E8/#F0EEE6 7%); mid-page cream ground #F0EEE6, forest band #31482B, terracotta poster accent #C8714F.
Taiyo gate: min(15%, 5.0%) -> use 8% hard cap, target <=5% (R1 value is the lower; R2 is excluded as the colour source).

Proposed palette (from the R1 grey ground/R2 cream-and-earth relation, avoid Kagi/Hatsumei/Nami/Hibi/Hada/Michi):
| Role | Hex | Share |
|---|---|---|
| Ground | #F1F1EF | about 55% |
| Support (graphite panel / dark band) | #43474B | about 30% |
| Secondary (mid grey caption/line) | #8C8F90 | about 10% |
| Accent (muted sun ochre, small marks, circle rim, numerals) | #B9822E | <=3% |
| Optional terracotta spot (from R2 poster) | #B8694A | <=2% |

## Final mapping (fill after design-spec)
| Candidate | Taiyo implementation | Inner-page extension |
|---|---|---|
| R1 A1 + A3 split first screen + inset portrait (T1) | Home 1 `front-split`: P1 roof photo left 50% full height, graphite gradient panel right (#A7A9A8 to #43474B), 3:4 inset P2 300x400, left-aligned H1 <=3.25rem, vertical "install" + ring "07" label; mirrored in Home 9 `front-close` (no inset) | T1 page heads on Installations, Case Study, Residential, Batteries & EV, Commercial, How It Works, Our Installers, Contact |
| R2 B1 two overlapping hairline circles (T2) | Home 3 `front-featured-case`: two 260 px 1 px circles overlapping each other and P4's right edge, "8.8 kW" / "11,000 kWh (est.)" | Case Study, Residential, Batteries, Commercial, Pricing, Contact |
| R1 A5 + A4 big-numeral spec cards + [01] labels (T3) | Home 4 `front-installations`: 4 white cards on #E6E6E3 band, 4.5rem kW numerals, est. output/saving; "[0n]" label on every section | Installations wall (7 cards), Case Study numbers, price cards, How It Works steps |
| R2 B4 roofline edge (supporting) | Home 6 `front-assessment` graphite band with a shallow 64 px gable top edge | footer top edge on every page |
| R2 B3 thin news line (supporting) | first-screen bottom line; Home 8 `front-notes` journal list | Journal index |
| R1 A2 wordmark across seam | not used (too close to Hada's Latin across photo edge) | - |
| R1 A6 ticker, R2 B2/B5/B6 | not used | - |
| Colour | R1 ground #F0F0F0 -> #F1F1EF, panel/footer greys -> graphite #43474B, captions #6E7275, navy small numerals role -> sun ochre #B9822E (<=2%); R2 terracotta #B8694A spot <=0.5%. First screen gate 8%, target <=5% | same palette site-wide |
