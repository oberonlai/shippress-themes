# Reference tokens — measured with getComputedStyle at 1440 x 900 (2026-11-27)
Source: https://kei-kusatsu.com/ (small hot-spring inn, home page, ~23,000 px tall). Only values and descriptions; no assets, text or logo copied.

## (a) Colour
| role | value | where | share (first screen / page) |
|---|---|---|---|
| ground, light | hsl(52, 5-6%, 98% to 90%) ~ #FAFAFA -> #E3E3DF | page base, first chapters | ~35% of page |
| ground, mid | #B8B6AA -> #D4D3CC (sampled at room / facilities chapters) | ground darkens as the page scrolls | ~25% |
| ground, dark | hsl(52, 10%, 10-18%) ~ #343329 | "around" and "information" chapters (is-invert) | ~30% |
| ink | #000 title, #1A1A1A text, sub text ~40% lightness grey | | |
| accent | none (a 6 px black dot in the nav, a grey 1 px rule) | | |
| first screen | photo only: blue-grey dusk sky #78939B top, dark timber, green trees; saturated (>0.5 S) share = 1.2% | | |
Whole page measured saturated share (S>0.5, V>0.2) by viewport: 1.2%, 1.7%, 11.4% (water + timber photo), 4.3%, 2.3%, 11.1%. Quiet, never above 12%.

## (b) Type
- Families: YakuHanMP / Zen Old Mincho (Japanese serif) for everything; "Crimson Text" for Latin sub-labels and the English translation lines.
- body 14 px, ~1.8 line height for translation lines (12 px, lh ~24 px, grey).
- H1 (logo word) 17 px; H2 chapter word 18 px / 400 / ls 0.02em (a single CJK glyph above a tiny Latin word); H3 24 px / 500 / ls 0.12em (0.12 x size); H4 19 px / 400 / lh 1.5 / ls 0.02em.
- Verse text: 16 px, ls ~0.15em, lh 30 px, short lines (one sentence per line group), 13 px between stanzas.
- Nav: 14 px Crimson Text lower case, 28 px gaps; "reservation" with a small calendar icon, "menu" with a 3-line icon.

## (c) Spacing
- Outer padding 72 px (left of nav, left of images); header height 84 px; hero 100svh.
- Chapter openers: label centred, ~140 px above the first photo, ~120 px below the last.
- Two-column rows: photo column 0-570 px (flush left viewport edge), text column starts x 798 (55%), text width ~400.
- Listing rows: 2 columns (72-684, 756-1368), 228 x 152 thumb, 42 px column gap, 1 px bottom rule, ~195 px row pitch.

## (d) Radius, borders, shadows
- Images: radius 0, no border, no shadow. Hairline 1 px between abutting photos.
- Pills: 1 px outline, radius 999, ~112 x 30, 12 px Crimson text + external icon. Chip "map": grey translucent fill, radius 999, 11 px.
- Notice pill (hero foot right): 372 x 54, frosted translucent dark, radius 8, a chip + one line.

## (e) Imagery — IMAGERY = photo
Documentary-quality natural-light photographs, slightly desaturated, low-key and warm timber against cool dusk; grain-like softness. Ratios: 3:2 large (840 x 560) at x 72; tall 2:3 small (270 x 405) bleeding off the right edge, 100-150 px lower than the large one; abutting 3:2 pair (570 x 380) stacked at the left viewport edge; full-bleed band 1440 x 900 (water + bamboo); listing thumbs 3:2 228 x 152. No masks, no clip-path, no rounded corners. Photos in a chapter drift at different vertical offsets.

## (f) Decoration
- 6 px black dot before the current nav item (scroll-spy), 1 px hairline dashes either side of the hero wordmark, centred glyph + Latin word as every chapter label, "map" chips, no numbering, no icons beyond the nav's calendar/menu pair.
- Film-like paper grain on the ground (subtle noise).

## (g) Motion
- Load: overlay with logo fades out in 1.6 s cubic-bezier(.445,.05,.55,.95).
- Reveal classes: opacity 0->1 in 1.2 s cubic-bezier(.25,.1,.25,1) (`js-sa__op`); translateY 6 px + opacity 1.2 s (`js-sa__up`); scale .9->1 + opacity .4 s (`js-sa__scale`); list items stagger 60 ms (0, 60, 120, 180 ms). Triggered by IntersectionObserver rootMargin "50% 0px", threshold 0.
- Hero is a 2,923 px sticky stage (progress class `is-progress`): the first-screen logo/notice fade out after 100 px; the pale chapter slides over.
- Ground tone and ink variables are interpolated while scrolling (light -> dark), sections flagged `is-invert` switch to light-on-dark and the header text inverts over dark areas.
- Smooth scroll library bundled (Lenis-style); no GSAP/ScrollTrigger/AOS/jQuery.
