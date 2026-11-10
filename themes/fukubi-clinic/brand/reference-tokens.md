# Reference tokens — main reference https://shinagawa-asada.jp/ (measured 1440x900, from the shipped CSS and screenshots; values only, no assets copied)

## (a) Colour
| Role | Hex | Where / share on the first screen |
|---|---|---|
| Wash (ground) | #E8EDE6 | hero band behind the photo row, ~55% of the first screen |
| Pale page | #F7F7F7 / #F3F5F0 | sections after the hero, news rows ground |
| Ink | #404040 | body and headline text |
| Main accent (green) | #86B812, gradient #A9CE52 to #EAEA67 | circle halo, icon bowls, small buttons; under 2% saturated area |
| Point (orange) | #FF9D00 / #F2B230 | one booking pill only, ~1% |
| Line | #CCCCCA | 1 px dividers |
First-screen saturated share (HSV s>0.5): **1.2%** (measured on the screenshot). Everything else is pale wash, white and photography.

## (b) Type
- Latin: Montserrat (labels, dates, numerals); body and headings: Zen Kaku Gothic New (gothic sans). Headline about 44-48 px light weight, green, with oversized quote marks; body 14-16 px, line height 1.8, letter spacing .08-.12em on Japanese, caps Latin labels tracked .1em.
- Buttons 16 px / 500, min height 70 px, label left, small square chevron box right.

## (c) Spacing
- Hero: 136 px top padding (floating header), photo row 320-560 px circles, hours card 505 x 190 docked bottom right.
- Section padding about 96 px top / 100 px bottom; content width about 1100-1200 px; card gap 15 px; news rows 80 px high with 10 px gaps.

## (d) Radius, border, shadow
- Cards radius 10 px (5 px on phones), white on pale ground, almost no shadow; buttons 2 px white border; pill tags radius 999 px; header is a floating white bar with large bottom corners.

## (e) Imagery — **IMAGERY: photo** (real, bright, documentary photography: physician at a desk, bright reception hall, bright office corridor; very high-key, cool white balance, no illustration in the primary slots)
- Hero: three photos masked to **circles** (ratio 1:1), centre one about 560 px, flanks about 316 px, the outer neighbours cropped by the viewport edges (about 17vw peeking). Centre sits 40 px lower than flanks.
- Column photos below: 4:3 and 3:2 rectangles with radius 10, tilted tinted placeholder tiles faintly visible behind a soft green disc.
- Icons: simple line icons inside a coloured bowl (arc) top of white cards.

## (f) Decoration
- Fixed blurred disc (about 38.8vw, gradient 245deg #A9CE52 to #EAEA67, 20% fill + 60% layer with 30 px blur) behind the hero photo; after the hero it drops behind the content (z-index -1).
- Opening-hours card: dot matrix, 8 columns (Mon to Sun and holidays), 2 rows of time bands; filled dots = open, short slash = closed; clock icon left of the label.
- Vertical "hours" tab fixed at the right edge (not used by us), small square-chevron boxes, "View All" underlined text link with a chevron box.

## (g) Motion
- Hero: Swiper centred loop, 1.5 slides per view on desktop, autoplay delay 2000 ms, slide speed 1500 ms, no touch; the active slide grows from 56.6% to 84.6% width while the neighbours slide out and in (transform 0.4 s ease).
- Reveal: jQuery inview adds `.on` after `data-delay` ms; transitions opacity + transform 1 s ease.
- Hover: transform 0.3-0.4 s ease on cards, opacity 0.3 s on links.
