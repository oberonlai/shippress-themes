# Reference tokens (measured, https://www.okamura.co.jp/ top page, 1440x900, getComputedStyle)

Only values and descriptions. No assets, copy or logos reproduced.

## (a) Colour
| Role | Hex | Area |
|---|---|---|
| Base | #FFFFFF | ~45% of page |
| Panel (3 columns under the hero, tile grounds) | #F5F5F3 | ~25% |
| Text ink | #333333 | text |
| Secondary button ground | #666666 | <1% |
| Link tile | #FFFFFF on the panel | 6 tiles |
| Hero ground (photo): pale cool blue-white | ~#CDE0EE to #F2F7FB | whole first screen, low saturation |
| Brand accent (logo + one mission band only) | saturated red | <3% of the first screen |
First-screen saturated share: under 5% (pale blue photograph, white card, dark headline).

## (b) Type
Family: a UD humanist grotesque (UD Shin Go) with sans-serif fallback. Body 16px / 28.8px (1.8), weight 400, tracking normal, no uppercase.
Hero headline: wide-tracked heavy sans, about 61px tall boxes (roughly 4rem), tracking about 0.2em, set on one line across the left two thirds. Section title 30px / 28.8px. Column titles 20px. Tile labels 12px / 12px. Card title ~20px, card body 13px/1.8.
## (c) Spacing
Page width: full bleed 1425 (scrollbar 15). Hero card: x30, 478x186, padding 24. Three columns: 472 wide with 4px gaps, photo 472x256 (1.84:1) then a 756px tall grey panel. Link tiles 191x65, padding 15, 10px gaps in a 2-column grid. Section top padding ~120px; mission title to statement ~60px.
## (d) Radius, border, shadow
Radius 0 everywhere except the hero card (about 10px top corners only). No borders, no shadows on tiles. Thin 1px long-arrow line instead of buttons in the offset photo rows.
## (e) Imagery
IMAGERY: photo. Documentary corporate photography: real offices, people in conversation, backs of people in a pale space. Hero: people seen from behind in white clothes on a pale blue ground with translucent cube-framed photographs floating. Columns: 1.84:1 landscape photos flush edge to edge, no radius. Offset rows: a wide photo (about 1131x730) flush to one viewport edge, a white card (about 350x255) overlapping its lower inner corner; mirrored row with the photo flush right (starts x294) and a white notch panel (252x190) cut into its left edge holding title + long arrow.
## (f) Decoration
White hero card docked bottom-left (x30), title + two-line text + 250x40 grey arrow button. Vertical "PAGE TOP" micro label with a 1px 40px line fixed at the bottom-right. Long thin arrow (60px line with a small head) as the link marker. Header: logo left, two rows of small links right, transparent over the hero.
## (g) Motion
Hero: fade slider (slick, fade, speed 2000ms, autoplay 5000ms), each slide runs a slow zoom class on entry. Title: letter-by-letter fadeInUp (textillate, initial delay 700ms, 80ms per letter). Blocks: class added when in view (jquery.inview) then fadeUpAction 1.2s ease, translateY(30px) to 0 with opacity; stagger .3s / .6s by order class; images inside get zoomOutAction 1.2s ease (scale 1.05 + 1px blur + 10px to rest) delayed .3 / .6 / .9s. Smooth anchor scroll 700ms easeOutQuart. Column hover: grow/shrink siblings.
