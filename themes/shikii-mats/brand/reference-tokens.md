# Reference tokens — measured with getComputedStyle (1440 x 900, desktop), 2026-11-24

Main reference: https://biz.duskin.jp/ (business home) and https://biz.duskin.jp/item/mat/ (mat rental page).
Secondary: https://www.duskin.jp/item/mat/ (consumer mat rental list).
Only values and descriptions are recorded; no assets, copy or logos are copied.

## (a) Colour (first screen, 1440 x 900 pixel sample)
| Role | Hex | Share of first screen |
|---|---|---|
| Ground (white / pale grey bands) | #FFFFFF, #F2F2F2 | ~53 % |
| Body text | #333333 | thin text |
| Main (flat teal photo band behind hero people) | #1B6F93 | ~9 % |
| Secondary (nav bar blue, same blue on the sub-nav bar) | #3177C7 | ~4 % |
| Neutral mid (top tab grey, borders) | #A6A6A6, #D8D8D8 | ~4 % |
| Accent (rule under the page title on the mat page) | #FFC000 | < 1 % |
| Band tint (information / connection bands) | #E2F1FC, #B0C4DE | label bars only |

Saturated share (S > 0.35, V > 0.25): 22.9 % on the business home first screen, 10.5 % on the mat page first screen. Our theme stays below 15 % (see stage-a.md).

## (b) Type
- Family: system Japanese gothic stack (Yu Gothic / Hiragino / Meiryo); no web font. Ours: Manrope + Public Sans.
- H1 28 px / 700 / lh 1.4 (mat page); home H1 is a 13 px bold label over the photo band.
- H2 26 px / 700 / lh 1.4, 8 px bottom padding then a 1 px yellow rule (mat page).
- H3 16 px / 700 / lh 1.4. Body 16 px / lh 1.4 (22.4 px); small 13 px / lh 1.4. Letter-spacing normal. No uppercase except the Latin section label "PICK UP CONTENTS" (20 px, 700).

## (c) Spacing
- Container 1200 px (x 120 – 1320). Section padding 30 – 95 px vertical (grey bands 75 – 95 px, utility sections 30 px).
- Four-column card rail: 270 px cards, 40 px gap. Nav bar 45 px high, header 70 px, top tab strip 56 px.

## (d) Corners, borders, shadow
- Radius 0 everywhere (photos, cards, buttons, bands). Borders 1 px #D8D8D8; 1 px dashed rules between link rows; 2 px #B0C4DE label bars with a 6 px blue left stub. No shadows.

## (e) Imagery — IMAGERY: photo
- Documentary staff photography: people at work at an entrance (a woman in a uniform kneeling at a doorway adjusting a mat), tradespeople at work in blue uniforms; product shots on flat pale backgrounds.
- Hero band: three photos of different widths sit abutting on one flat teal band (172 – 191 px high, full width); photos fade into the teal at their edges. Pick-up row: 4 square-ish cards 270 x 270 (1:1), radius 0, title and 2-line text below, circle-less dark square arrows (40 x 40) at the left and right edges.
- Consumer mat list: 3 cards 270 x 270 (1:1), radius 0, a small pink tag top-left above the photo, text below.

## (f) Decoration
- Yellow 1 px rule under a page title; blue 6 px left stub on a pale-blue label bar; 1 px dashed rules between link rows with a small chevron after the link; round "swap every four weeks" badge (a circle of arrows) on one mat card; 5 dot pager under the carousel (10 px dots, grey, active blue) with a pause square.

## (g) Motion
- Pick-up carousel: bxSlider auto-advance, 4-up desktop / 2-up under 750 px, 1 card per move; arrows 40 px dark squares. Accordions: jQuery slideToggle (default 400 ms, swing). Back-to-top: shows after 100 px scroll with fadeIn (400 ms), scrolls with animate 500 ms swing. No scroll-triggered reveal, no parallax, no sticky.
