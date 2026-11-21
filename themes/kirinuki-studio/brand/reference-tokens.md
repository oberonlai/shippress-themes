# Reference tokens: amana.jp (measured with getComputedStyle, 1440x900, headless Chrome; values only, no assets copied)
Screens: `ref/amana-first-0.png` (hero), `-900` (works band), `-1800`, `-2700` (solutions sheet); scroll shots `ref/scroll-amana-*.png`.

## (a) Colour (first screen ~1% saturated; the whole page is quiet, the only colour is a mist gradient and tiny category tags)
| Role | Hex | Share |
|---|---|---|
| Hero ground: mint-grey mist (left) | #B2D3CC (range #B0D0C0 to #C6CECB) | ~35% of first screen |
| Hero ground: blush-grey mist (right) | #CBBEBA (range #D0B0B0 to #C8BAAD) | ~40% |
| Page ground (below hero) | #EEEEEE | 20% of the page |
| Sheet / card white | #F9F9F9 / #FFFFFF | ~10% |
| Dark band (works) | #131313 | ~15% of page |
| Text | #000000 | |
| Hero headline | dark plum-grey (about #4A3340 to #3A3A40) | |
| Accents (only category chip outlines + dots) | purple, orange, magenta, green at roughly 600 level | <2% |
Saturated share (S>0.5, V>0.2) of the first screen: 0.9%.

## (b) Type
- Family: "Custom Helvetica" (grotesque) + Noto Sans JP fallback. Body 16px / lh 28px / weight 400, letter-spacing normal.
- Section titles (h2): 24px, weight 600, lh 42px, followed by a 12px English or Japanese sub-label in grey, same baseline, tiny 3-dot glyph (dot cluster) before the title.
- Hero headline: about 88px, weight 600-700, tight tracking, mixed with a 40px light "with" tucked against the photo cluster.
- Nav links 12px weight 500; header text 16px. Buttons 16px.

## (c) Spacing
- Hero: pinned scroll sequence 1800px tall (900px intro + 900px collapse).
- Works band: padding 160px 0 96px; grid max 1248px (x 96 to 1344), gap 16px.
- Solutions sheet: grey ground 16px side padding, white sheet 1248px wide, padding about 64px, section gaps 128px.
- Container to viewport edge 96px (works), 16px (sheets).

## (d) Radius, border, shadow
- Header bar: white, radius about 16px, inset 8px from the edges, height 64px; separate white icon cell group (search / mail / language, 1px dividers) and a square 64px menu cell.
- Sheet radius 16px; chips: 1px coloured outline, radius 4px, padding 4px 12px, text 12-13px, trailing "..." dots.
- Pill button: white, radius 1000px, padding 16px 32px 16px 40px, soft shadow, trailing dot-cluster icon.
- Tiles: clip-path chamfer (see f), no border, no shadow.

## (e) Imagery
- IMAGERY = photo. Commercial photography across the work tiles (food, skin-care packshots, car tyres, interiors, portraits) with a strong, clean commercial grade; hero is a street portrait triptych (person with camera). Tiles are mixed ratios: one 868x575 (1.5:1) wide tile, 448x540 (0.83:1) tall tiles, 405x253 landscape tiles; gap 16px.
- Hero photo cluster: three photos each 581x353 stacked as columns inside one polygon-clipped box about 283px x 172px (at rest), placed right of the headline, vertically centred on the headline x-height.
- Mask: every work tile has clip-path polygon(25% 0, 100% 0, 100% 73.3%, 99.8% 74.7%, 99% 75.9%, 75% 100%, 0 100%, 0 26.7%, 0.2% 25.3%, 1% 24.1%): top-left and bottom-right corners cut at 45-ish degrees (chamfer 25% of each side) with tiny rounded ends.
- Some tiles carry white overlay captions bottom-left (22px bold, with a gradient scrim linear-gradient(transparent, rgba(47,47,47,.95))).

## (f) Decoration
- Film-grain noise over the mist gradient. Ghost text wall (12 lines of repeated 24px light-grey text at 4% contrast) behind the about sheet.
- Grid-ruled white sheet (1px #EAEAEA lines every ~130px) behind the Solutions chips.
- Three-dot / dot-cluster marker before each section title and inside each chip and button.

## (g) Motion
- Hero: CSS scroll-driven animation (animation-timeline, animation-range) on a 1800px pinned sequence: headline mask inset wipe (clip-path inset 0 0 0 100% to 0), photo cluster scales and slides, gradient layer (mix-blend-mode difference) fades, about sheet rises. Easing cubic-bezier(.65, 0, .35, 1), 0.9s for the enter reveal.
- Work tiles: class toggled when in view; transition clip-path 1.5s, opacity 1.5s, transform 1.5s, easing cubic-bezier(.4, 0, .2, 1); start rotate(5deg) translateY(40px), end rotate(0) translateY(0).
- No GSAP / ScrollTrigger / Lenis / three.js detected; custom CSS + small React scripts.
