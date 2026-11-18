# Reference tokens: koti-okinawa.com (measured at 1440x900 with getComputedStyle, 2026-11-19)
Screens: ref/koti-first.png, ref/scroll-koti-{0,900,1800,2700,3600,4500,5400,6300}.png. Page height 13631 px. All text and assets are the site's own; only numbers and descriptions are recorded here.

## (a) Colour
| Role | Hex | Share of page |
|---|---|---|
| Ground (pale warm white) | #F7F7F3 | ~55% |
| Ink | #212529 | text, ~6% |
| Hairline / mist stone | #E5E4DF, #C0BDB0, #D9D9D9 | ~3% |
| White | #FFFFFF | header strip, text over dark photo, ~8% |
| Photo content (dark timber interior, green garden, terracotta roof) | n/a | ~28% |
| Accent (form error only) | #DF4D4D | <0.5% |
First screen (full-bleed photo of a tiled roof and timber windows): saturated pixels (S>0.45, V>0.25) 5.9%, near-white 7.4%, near-black 3.6%. Scroll shots: 3.3% / 0.1% saturated. So the quiet ground carries the page and photographs carry the colour.

## (b) Type
- Family: Japanese Mincho (serif) for everything; weight 500 body, 700 headings. Our equivalent: Spectral (display and body) with Karla for small labels; CJK fallback Noto Serif TC / JP.
- Body 16 px / line-height 30 px (1.875), colour #212529. Nav 17 px, white over the hero, ink on pale ground.
- H2 38 px / 45.6 px, letter-spacing 3.04 px (0.08em), weight 700. Vertical-rl section titles ~32 px, tracked 0.12em, set in the right margin at x~1340.
- Hero headline: vertical-rl ~56 px, white, right edge at x~1300; lede in two vertical columns ~16 px / 2.0 to its left.
- Letter-spacing values in CSS: 0.08em (x6), 0.12em (x3). Line-heights 1, 1.2, 1.875, 2.

## (c) Spacing
- Announcement strip 66 px high, pale #F7F7F3, 20/80 padding.
- Hero 900 px tall full bleed under the strip. Sections 700-3800 px tall; one long page with no card grid.
- Text column starts at x=448 (31%), 420-796 px wide; side column x=944 (65.5%), 416-492 px wide. Logo at x=66. Content right margin ~80 px.
- Photo strip: 280x186 frames, column gap 1.67vw (24 px).

## (d) Radius, border, shadow
Radius 0 everywhere (images and buttons). Borders hairline 1 px #E5E4DF. No shadows. Nav overlay is a #212529cc sheet.

## (e) Imagery - IMAGERY = photo
- Real photography, soft natural daylight, timber, glass, garden greens, trays of sweets and tea in glass tumblers; shallow depth of field; warm, desaturated grade, slightly dim in interiors.
- Ratios and placement (1440 wide): side stack 492x328 (3:2) over 416x519 (4:5) at x=944; wide 753x502 (3:2) bleeding off the left edge (x=-8); full-bleed 1440x1475 parallax photograph with white text on it; text-column photo 796x531 (3:2) at x=448; strip of 280x186 (3:2) frames running right; 378x252 pairs. All radius 0, no masks, no clip-path, no overlap between photo and photo.
- Photos hang on different heights on either side of a text column, never aligned to a grid line except the 448 and 944 columns.

## (f) Decoration
- Fixed left navigation list (x=80, 47 px pitch), small dot before the current item, instagram glyph below. (We do not use a side nav; ours is an overlay.)
- Vertical-rl titles in the right margin; a tiny ruby-like annotation above one word.
- Logo mark (roof ridge tile) at top-left, 195x365 ratio box, white over the hero then ink.
- No lines, no numbers, no badges.

## (g) Motion
- Headline characters: each character in a masked span, starts opacity 0, translateY(.5em) rotate(7deg), origin 0 50%; transition .62 s transform cubic-bezier(.15,.7,.78,1) + .62 s opacity cubic-bezier(0,0,.58,1); delay i*0.027 s; fires once at "top 80%".
- Content blocks (.slide-content): opacity 0 -> 1 in .95 s; fade variant translateY(30px) -> 0; zoom variant image scale 1.2 -> 1 in .75 s; fires once at "top 70%".
- Full-bleed photograph background layer 150% tall moves yPercent 0 -> -30, ease none, scrub, from "top bottom" to "bottom top".
- Photo strip: duplicated list, CSS linear infinite drift, duration = width/2/28 s (28 px/s).
- Navigation colour toggles white/ink when the dark photograph section is under it; smooth anchor scroll duration 1 s power4.out. Library: GSAP + ScrollTrigger.
