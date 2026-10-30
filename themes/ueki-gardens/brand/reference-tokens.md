# Reference tokens — plantica.net (measured 1440×900, headless Chrome + getComputedStyle; values only, no assets copied)

IMAGERY: photo. The main image type is photography: flower still-lifes and petal macros (studio light, black or pale lilac grounds, hard focus on one bloom, motion-blurred streaks in one frame). Colour is saturated inside the pictures and the page around them is plain white and near-black, so the page itself carries almost no colour. Our version: high-key garden-centre documentary photographs, soft daylight, white-green ground, no saturated studio black.

## (a) Colour
| Role | Hex | Share of first screen |
|---|---|---|
| Ground | #FEFFFE (white) | ≈ 70 % |
| Ink / text | #000300 | ≈ 6 % (headline, nav) |
| Body grey | #3E3E3E | < 1 % |
| Accent (menu pill, active lang) | #976AE1 | < 1 % (appears after scroll) |
| Photographs | multi-hue | ≈ 22 % (bottom row cut by the fold) |
Saturated pixels (HSV s>0.43, v>0.24) measured on the first screen: 5.8 %.

## (b) Type
- Family: PP Mori (grotesque), fallback Noto Sans JP. Weights 500 for headings, 400 body and nav, 300 footer legal.
- H1 `.c-main-title`: 124.99 px (≈ 8.7 vw), weight 500, line-height 1 (125 px), letter-spacing normal, sentence case, 2 lines spanning the 1360 px measure.
- Section title (H2 `.h3`): 70 px, 500, uppercase. Statement H2: 100 px uppercase (centred, not used by us).
- Index link titles: 70 px, 500, uppercase, line-height 1.
- Lead `p`: 15 px / 25.5 px, 500, #3E3E3E, in a 377 px column at x 532.
- Sup-title: 13 px 500; card title 12 px 500 / 14.4 px; nav 13 px 400 uppercase; buttons 20 px 400.

## (c) Spacing
- Side margin 40 px; container 1360 px at 1440.
- Header 75 px high; H1 starts y 202; founder line y 480; photo row y 601.
- Section blocks ≈ 876 px high with 100–200 px gaps; index rows 104 px high at 70 px type.

## (d) Radius / border / shadow
- Photos radius 5 px. Pills radius 65–100 px (`ui-btn`), 1 px solid rgba(0,3,0,.2). Filled pill `ui-btn-fill`: white on dark, radius 65 px. No shadows.

## (e) Imagery presentation
- Hero row: 5 photos, no common top: 340×453 at x −227 (cut by left edge), 227×302 at (142,658), ≈ 340×… at (397,715), 453×… at (765,601), … cut by right edge. Tops step irregularly (601 / 658 / 715), bottoms run past the fold. Radius 5 px.
- Ratios ≈ 3:4 portrait (340×453), 3:4 small (227×302), landscape variants; big band photos run edge to edge (1440 wide, ≈ 16:10) with no radius.
- Hover on cards: inner image scale 1.05 over 0.8 s, opacity 1 s.
- Photos drift sideways in the hero (class `js-iv`, per-photo speed).

## (f) Decoration
- Outline micro-pills (26 px high, 1 px 20 % ink) for nav links and tags; ↘ arrow glyph at the right end of 70 px index rows; 1 px grey rules between rows; no dots, no shapes.

## (g) Motion
- Lenis smooth scroll inside `.c-local`.
- `c-clip`: each word/char sits in an `overflow:hidden` mask (`.o`) and the inner `.t` slides up from `translateY(≈1em)` to 0; stagger per char/word; easing power4-out (`--ease-power4-out`, ≈ cubic-bezier(.25,1,.5,1)).
- Hero photos slide in from the sides (js-iv, intersection-triggered), `transition: opacity 1s, transform .8s`.
