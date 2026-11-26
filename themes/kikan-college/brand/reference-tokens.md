# Reference tokens (measured with getComputedStyle at 1440 x 900, 2026-11-26)
Main reference: https://www.neec.ac.jp/ (vocational college home page). Measurements only; no assets, text or logos are reused.

## (a) Colour
| Role | Reference hex | Share of first screen / page | Our mapping |
|---|---|---|---|
| Ink / text | #060E31 (deep navy) | all text | #1B2733 (ink) |
| Page ground | #FCF9F0 (warm paper) | ~45 % of home page | #F4F6F8 (cool pale grey, NOT cream) |
| Section tint | #E5ECF5 / #E2E8F0 (pale blue-grey) | open-campus band | #E4E9EE |
| Primary (brand) | #D22502 red, #0071C1 blue | link / hover / slash | #3C4F62 (katsu-iro, main) |
| Accent | #FFE401 yellow (toc tab, ticks) | <2 % | #B8683A copper (single accent, <3 %) |
| Saturated hero ends | orange #F0A000 / #F09000 end panels, red slash #E8001A | measured 27 % of first screen (HSV S>0.5, V>0.4) | target <=12 %: steel #3C4F62 panels instead of orange |
| Gradient CTAs | orange-to-pink, mint-to-cyan, blue-to-lilac | small chips | not used; flat tints only |
Page-wide: three families of tile colours (red, green, aqua, yellow-green) on entrance tiles, each with a white inner plate. We keep the "tile + inner plate" form in 3 quiet tints of slate/steel.

## (b) Type
- Family: LINE Seed JP (custom), fallback Hiragino/Meiryo. Ours: Instrument Sans (display) / Source Sans 3 (body); CJK Noto Sans TC / JP.
- Body 16 px / 400 / line-height 1.8 (28.8 px), ls normal.
- H2 36 px / 700 / lh 1.4, centred, small "01" numeral (16-20 px, 400) above. H3 28 px / 700 / lh 1.4; sub-block H3 20 px / 700 / lh 1.5.
- Header label links 14-15 px / 700; announcement strip 14 px / 700 in #D22502 on pink #FFD5D5.
- Hero vertical words ~28-32 px / 700, tracked, writing-mode vertical. Hero headline ~56 px italic bold over photo.

## (c) Spacing and layout
- Page gutter 24 px; hero window inset 24 px each side, 1392 wide x 547 high (ratio 2.54:1), radius 40 px.
- Container for sections 960 px (cards) to 1200 px (map); section padding 100-128 px top / bottom; heading to content 48-64 px.
- Entrance tile row: 3 x 2 tiles 304 x 171 each, gap 24 px, centred 960 px block.
- Header: 2-row, logo left (251 x 48), utility links above main nav at right, two CTA blocks (64 x 64 rounded 8) and a dark square menu button.

## (d) Radius, border, shadow
- Hero window radius 40 px; tiles radius 12-16 px with inner white plate radius 8; buttons pill 999 px with 2 px navy outline (white fill), solid navy pill for primary; date tile radius 4. Shadow almost none; 1 px #CDCED5 hairlines either side of "next dates" title.

## (e) Imagery
IMAGERY: photo (hero and campus blocks are documentary photographs of students at work in the field: a ground-crew signaller at dusk, students with equipment). Secondary: an isometric illustrated campus map (flat vector, saturated flat fills, white label tags) and small scattered vector figures. Photo overrides: primary image type = photo (the hero and the lead position are photographs).
- Hero: one photo 2.54:1, radius 40, with a red diagonal band (about 8 px) cutting from the lower-left to the upper-right of the photo, bright orange end panels flank the photo and carry vertical Japanese text (intake + course name). Photo is low-key night/dusk with a lit subject; a second photo on the lower half shows a plane nose, so the window really holds two stacked views split by the slash.
- Entrance tiles: tinted tile with centred white plate (text only) or a photo tile with italic caption.
- Illustrated map: 960-1200 px wide, organic blob zones (red, green, orange, blue) with white label tags and tiny isometric props.

## (f) Decoration
- "01 / 02 / 03" numeral above each centred section title, followed (after reveal) by a 2.22 em x 0.17 em pill rule under the title.
- Left-bottom fixed contents tab (yellow header, "01 Departments / 02 Open campus ..." scroll spy) 240 px wide. Right edge: two fixed vertical CTA tabs (orange-pink gradient, mint-cyan gradient), 64 px wide.
- Open-campus band: pale blue-grey #E5ECF5 with white diagonal hatching, faint circles, scattered vector figures bleeding off both sides, one 208 x 152 solid blue date tile (r 4) with tags.
- Check marks: yellow square with red tick.

## (g) Motion
- Section headers: `[data-animated=true]` state set by IntersectionObserver (rootMargin -30% 0 -30% 0, threshold 0, once). Title characters split into spans rise from translateY(100%) to 0; numeral rises too; underline width 0 to 2.22 em, `transition: width .4s .8s`; container opacity 0 to 1 with `transition: margin 1s, opacity 1s`.
- Open-campus photos start with negative margins (-25 to -60 %) and opacity 0 and travel in (margin transition 1 s).
- Hero is a muted video loop inside the rounded window; hero side banner is sticky bottom-right with hover image swap.
- Library: custom module script, plus an embla-style carousel (IntersectionObserver for slides). No GSAP, no ScrollTrigger.
