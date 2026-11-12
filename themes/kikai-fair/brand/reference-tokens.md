# Reference tokens — https://www.bigsight.jp/english/ (measured 1440 px wide, headless Chromium, computed style)
Screens: `ref/ref-first.png` (first screen), `ref/scroll-big-1.png`, `ref/scroll-big-2.png` (page body). Only values and descriptions are recorded; no assets, copy or logo are reused.

## (a) Colour
| Role | Hex | Share of page | Where |
|---|---|---|---|
| Main ink / dark | #333333 | text + one half of the twin bars | body text, "For Organizers" bar, footer buttons |
| Black | #000000 | ~18% (one full-bleed band) | dark faceted band with the event strip, footer |
| Accent (ochre) | #957123 | ~12% | value numerals, h2, "For Visitors" bar, the 02 value band, outline-button arrows |
| Ground | #FFFFFF | ~45% | header, value 01 / 03 rows |
| Sand tints | #FAF6F0, #E1DED5, #F0EEEA, #ECEDEE | ~5% | triangle-lattice corner motif, pale rows |
| Notice | #BD2D2D on #FAE3E3 | <2% | "Important announcement" strip only |
First screen saturated share (HSL s>0.4, L 0.2-0.8): 17.7%, all of it from the decorative illustration; our theme keeps the first screen photographic and quiet (<=15%).

## (b) Type
- Body: Yu Gothic / Meiryo / Arial sans, 16 px / 28 px (1.75), weight 500, colour #333, tracking normal.
- Display: Yu Mincho serif, weight 700. Value heading 32 px / 51 px (1.6). Section h2 "OUR VALUE" ~44 px gold, uppercase serif. Band title (white, serif) ~36 px.
- Numerals: gold serif, ~64 px (value 01-03) with a 14 px rotated "value" label to their left; stat figures 44-48 px serif gold with 12 px bold sans captions.
- Buttons: 16 px sans 500; caption 12 px bold; tracking only on the logo (0.2em caps).
## (c) Spacing
- Container 1280 px; hero audience bars inset 80 px from the viewport edges, 635 px each, 110 px high, 10 px gap.
- Band padding: dark band 92 px top / 77 px bottom; value rows ~120 px; value photo 620 x 400 (3:2 crop), right column.
- Four event cards 350 px wide, 10 px gap; caption below (date 16 px, name 16 px / 28 px).
## (d) Radius, borders, shadow
Radius 0 everywhere. Buttons: white 260 x 48, 1 px hairline border (#333 on white; white on dark), long thin arrow (ochre) at right. No shadows. Cards: white, no border.
## (e) Imagery
IMAGERY = photo. The hero is the only illustration (a decorative woodblock-style wave drawing); the body is documentary photography: crowded exhibition hall (3:2, 620x400), mosaic of three photos (2+1 stepped; 308x200 / 308x140 / 308x200) flush on the ochre band, building photos 308x193 with captions below, full-bleed dimmed photo band (access / floor map) with two white boxes. No masks, no clip-path, 0 radius; photos sit beside text 50/50.
## (f) Decoration
- Triangle lattice: pale sand (#EDE9E1) downward triangles, 176x150 px, glued to the top-left viewport corner of white/ochre sections (mirrored to the right on the ochre band at 50% white).
- "value" word rotated 90 degrees at the left of a 64 px numeral.
- Dark faceted band: black ground with a diagonal pale wedge of 3D facets bleeding in from the left (background image), event strip on top.
- Stat quad: 2x2, label (12 px, 2-line) left of numeral, "/" divider between pairs.
- Red announcement strip: 192 x 60 red tab at left, pale pink bar, chevron links.
## (g) Motion
No scroll-triggered effects found in `common.css` / `run.js` (no IntersectionObserver, GSAP, AOS). Only: `transition: background-color .2s` (buttons, 19 rules), `left .2s`, `top .2s` (menu), hero + event strip autoplay carousels with a pause button and two long-arrow controls. Header is static.
