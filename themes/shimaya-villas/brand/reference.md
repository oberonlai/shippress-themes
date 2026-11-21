# Reference (counterparts filled from design-spec.md)

Primary: https://soneva.com/soneva-fushi/ — island resort stay page: cream header with centred logo and a centred link row, one full-bleed film-grain photograph, a booking bar docked on the photo's foot, then a large centred statement, three villa cards, a grey-out list that swaps photos, a closing booking banner.
Secondary: https://www.aman.com/resorts/amanpulo — resort page: warm ground, centred logo with Reserve button at right, a second hairline row of links, a photograph inset 25px inside the page, generous white space, tracked eyebrow labels, two-up photo cards.
Imagery: photo (film-grain documentary stills).

## Signature candidates and our counterpart
| # | Reference element (source) | Our counterpart (design-spec.md) | Used in theme |
|---|---|---|---|
| 1 | Booking bar docked on the foot of the first photograph: dark translucent gradient glass 684x62, Dates / Guests split by 1px lines, 55px square cream search tile (Soneva `ref/soneva-first.png`) | **T1 Hold-dates bar**: same glass and size, three link cells Dates / Guests / House, 55px sage #A6C8B2 tile with our arrow; links to `#hold` (not a form) | Home H1; inner windows of Houses, Season & rates, Arrival & the island, Hold dates, About |
| 2 | Grey-out list swapping photographs: five 40px words, current at full ink, others ~45%, portrait 240x336 left, photo 498x600 right, .4s/.2s fades (Soneva `ref/scroll-soneva-list.png`) | **T2 season list**: April / May & June / July & August / September / October, inactive 50%, small P11-P15 left (+72px), large P06-P10 right, CSS-only `:has()` swap; captions carry free-house counts | Home H5 `#season`; Houses, Season & rates, Arrival & the island, About |
| 3 | Centred two-row header under a 26px rust promo ribbon, rectangular Book button right, collapses after the first screen (Soneva `ref/soneva-first.png`, `ref/scroll-soneva-intro.png`) | **T3 header**: 26px sea-green #2E5646 ribbon "Direct only: ...", centred wordmark + "Lune Cay", one centred anchor row, "Hold dates" 128x48 r2 right; sticky `top:-26px` collapses to 133px (CSS only) | Every page |
| 4 | Photograph inset 25px in a pale page under hairline rows (Aman `ref/aman-first.png`) | **S1 framed window**: P01 inset 25px, radius 0, with the h1 on a solid #EEF1EC panel top-left (framed-window / on-solid-panel / booking-bar) | Home H1; all inner page openers |
| 5 | Tracked eyebrow + title + underlined text link under two-up photo cards (Aman `ref/scroll-aman-cards.png`) | **S2** eyebrow 0.6875rem ls .2em + Manrope 1.25rem title + underlined link; two-up cards 38px gap | Home H7 arrival cards; inner sections; journal rows |

Colours: Soneva ink #19100D, dark band #19100D and nav ink #012531 kept; ground #F4F1E9 -> #EEF1EC (same lightness, sage hue, avoids cream); rust accent #6D2E1D -> #2E5646 (same role, <3%); cream tile -> #A6C8B2.
Key visual: Soneva's "the island sells its own stay" film still -> our film-grain P01 of the head housekeeper sliding open the villa doors onto the plunge pool and sea while a couple sets down their bags; looping film -> sp-parallax on the window photo.

## Scroll effects seen
See reference-tokens.md (g). Card rise 1.25s stagger 240ms -> sp-reveal--up + sp-stagger (1.25s, 24px, 240ms); statement unfade -> sp-reveal (8px); list swap .4s -> CSS-only T2; Lenis smooth scroll + looping film -> sp-parallax (hero 8%, band 10%); header collapse -> CSS sticky.

## Screenshots
ref/soneva-first.png, scroll-soneva-intro.png, scroll-soneva-villas.png, scroll-soneva-list.png, scroll-soneva-3600.png, aman-first.png, scroll-aman-intro.png, scroll-aman-cards.png, scroll-aman-offers.png, scroll-aman-map.png.
