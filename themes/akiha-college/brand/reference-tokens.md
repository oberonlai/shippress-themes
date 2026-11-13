# Reference tokens (measured with getComputedStyle, 1440x900, 2026-11-13)

Primary reference: https://www.landic.com/recruit/ (a recruiting site for a property and hospitality company; quiet mist-grey ground, documentary photography, serif statements).
Secondary reference: https://www.pro-seeds.com/ (e-learning provider; used only for the figures strip, dated rows and left label column).
Only numbers and descriptions below. No assets, copy or logos are reused.

## (a) Colour
| Role | Hex | Share of first screen | Note |
|---|---|---|---|
| Ground (body) | #E6EAEB | about 33 % (flat) | cool mist grey, measured `rgb(230,234,235)`; quantised dominant bins #E0E0E0 22.8 %, #D8E0E0 10.2 % |
| Text / ink | #222222 | 3 % | body and serif headings |
| Dark accent | #202028 | 8.4 % | silhouette and shadow areas of the hero photo; the entry button is solid near-black |
| Photo (blue-hour sky, warm dusk) | multiple | about 55 % | the photo itself carries the colour; the page chrome has none |
| Notice card | #F4F5F6 on ground | <1 % | near-white, 1 px lift only |
Saturated share (scripts/check-first-screen.py, S>35 %, V>24 %): **8.4 %** at the resting first screen (`ref/landic-first.png`); 33.6 % on the second screen when a sunset photo fills half the viewport (`ref/scroll-landic-900.png`), 7.3 % on a list screen. Our first screen must be <= 15 %.
Secondary (Pro-Seeds): navy #172864 and yellow #F8D02E shapes, 22.6 % saturated (`ref/seeds-first.png`) - this is the loud reference; we take only structure, not its colours.

## (b) Type
- Display / headings: a Japanese mincho serif (Shippori Mincho loaded as `shippori-mincho, serif`), weight 400 (500 for card titles), section H2 28 px / lh 50.4 px (1.8) / letter-spacing 1.68 px (0.06 em). Card H3 18 px / lh 29.7 px / ls 1.44 px (0.08 em). The first-screen statement is about 36 px serif in a 678 px column (`calc(678/1440*100vw)`, max 678 px).
- Latin labels: Inter variable 12-16 px, weight 400, lh 2 (32 px at 16 px), sentence case ("Project Story", "Positions", "Culture", "Topics").
- Body: Yu Gothic Pr6N Medium 16 px / 24 px; small copy 12-13 px / 26 px; nav 12 px weight 600 (Demi), ls 0.04 em.
- Our substitution: Newsreader (display, 400/500, tracking +0.02 em on H2) + Source Serif 4 (body), CJK Noto Serif TC / JP.

## (c) Spacing and layout
- Page gutter ("space-side") 30 px at 1440; full-width containers, no max-width centre column.
- Header: sticky, height 59 px, background = ground colour, logo 178 x 16 at x 30, nav at x 665-1267, entry button solid near-black at the right end. On the first screen the header sits at y 841-900 (the bottom of the viewport) and sticks to the top once scrolled.
- First screen: statement top-left at y ~189 (column 678 px wide), photo window x 30, y 277, 1365 x 564 (full width minus gutters), header directly under the photo.
- Sections after the hero: sticky left label rail 208 px wide at x 30 (Latin label + "View all" link), content column starts at x 377 and runs to x 1395 (1018 px). Row lists inside the column.
- Section vertical rhythm about 160-200 px (large empty ground between statements). Hero text lines are separated by about 2 line-heights.

## (d) Radius, borders, shadow
- Radius 0 everywhere (photos, cards, buttons). Hairline 1 px rules (#222 at low opacity) between list rows. The notice card has no visible shadow, 1 px lift by a lighter ground. Entry button solid #222 with a small white square arrow box at its right end.

## (e) Imagery
- IMAGERY = **photo** (documentary, natural light, backlit silhouettes and motion blur in the hero set; plain candid portrait photos and interior or workplace shots in the lists).
- Hero photo: ratio about 2.42:1 (1365 x 564), `object-fit: cover`, radius 0, parallax inside the window (absolute img, scrubbed).
- Story panels: tall half-viewport photos, 831 x 981 and 770 x 908 (about 0.85:1), flush to the left or right half, sticky while lines scroll opposite.
- Project photos: wide 1.85:1 in a horizontal strip with the next photo cut by the right viewport edge; "(01) / (02)" index above each caption.
- Positions: two 1.4:1 photos side by side with a Latin or local title and an arrow box under each, link list beneath.
- Interview: full-bleed photo fixed behind the section (`position: fixed; inset: 0`), three text cards in pale ground colour passing over it.
- Cut-outs: none.

## (f) Decoration
- 1 px short dash above every Latin label (about 10 px wide), "(01)" index marks in 12 px Inter, 16 px square arrow boxes (dark square with a white arrow) as the only icon, "View all" with the same box, scroll-spy dimming of the inactive case names in the rail (active #222, inactive about 40 % opacity).
- Fixed notice card: bottom 24 px, right 30 px, 210 x 89 px, near-white, underlined 11 px headline + date in 10 px.

## (g) Motion (see stage-a.md table)
- Smooth scroll library: Lenis. Tweens: GSAP + ScrollTrigger. In the bundle: `scrub: true` (3), `ease: none` (5, the parallax), `power1.out` (5), `power2.out` (4), `cubic-bezier(0.33, 1, 0.68, 1)`, reveal `start: "top 80%"` (2) / `"top 85%"`, `stagger: .14`, one `duration: 1.8`.
- Parallax ranges `start: "top bottom"` to `end: "bottom top"`, linear (ease none). Photo swap is driven by sticky positioning and scroll progress.
