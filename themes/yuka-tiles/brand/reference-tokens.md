# Reference tokens (main reference: artedomus.com, measured 2026-11-24 at 1440x900, desktop Chromium)

Only values and descriptions; no assets, copy or logo are reused.

## (a) Colour
| Role | Hex | Share of first screen | Note |
|---|---|---|---|
| Page / header ground | #FFFFFF | ~25% (header band 224 px) | Pure white, flat |
| Text, nav, logo, icons | #88888A (`--artedomus-grey`) | <3% | One grey for everything: text, nav, borders |
| Surface (off-white) | ~#F5F5F5 | footer / quiet bands | `--clr-surface` |
| Photo field (muted sage-green glazed tile, daylight and shadow) | #484830 / #909078 / #787860 / #A8A890 (dominant bins) | ~75% | Low chroma, olive-grey |
| On-image text and outlines | #FFFFFF | small | Over a bottom scrim |
| Scrim | `linear-gradient(180deg, rgba(0,0,0,0) 0, rgba(0,0,0,.33) 100%)`; strong variant .66 | foot of each panel | Caption sits on it |
Saturated share of the first screen (HSV s>0.35, v>0.2, sampled 6 px grid): **0.5%**. Palette is white + one mid grey + muted photo colour. Brand accent exists only in the logo and is grey.

## (b) Type
- Family: Helvetica Neue, Helvetica, Arial, sans-serif (Latin only).
- Body/nav/buttons: 16 px, weight 300, line-height 24 px (1.5), nav letter-spacing 0.64 px (0.04em), no text-transform, colour #88888A.
- Lead paragraph on landing: 25 px / 36 px, weight 400, letter-spacing -0.64 px.
- Panel caption (h2 on image): about 32 px, weight 400, white.
- Wordmark: weight contrast inside one word (thin first half, black second half), height = 0.1594 x 51rem measure = about 130 px at 1440, centred; shrinks to about 40 px after scroll.
- No uppercase, no italics; hierarchy comes from size and grey/white only.

## (c) Spacing and layout
- `--base-unit` 1rem (1.5rem at >= 960 px); `--type-measure` 51rem; line-height 1.5.
- Header: sticky, white, padding 23.4 px 24 px at >= 960 px (7.8 px mobile); three-column grid (menu icon left, wordmark centre, search + phone icons right); nav row below, evenly spread across the width (gap about 55 px).
- Header height 224 px at top, 132 px after the logo has shrunk.
- Panels: full-bleed, aspect ratio 1618:1000 (890 px tall at 1440), stacked with no gap; two-up panel rows split at 50% with a 1-2 px white seam.
- Panel caption block: bottom-aligned, padding 23.4 px 24 px, caption then a row of link boxes.
- Footer: six equal columns (Contact, Inventory, Products, Library, Values, Connections), headings 25 px, links 16 px, padding top about 72 px.

## (d) Corners, borders, shadows
- Radius 0 everywhere. No shadows.
- Link boxes: 2 px solid #FFFFFF border, translucent grey fill (about rgba(0,0,0,.2) over the scrim), 44 px tall, 14 px side padding, text 16 px white, two per row with 24 px gap, each half width.
- Seams between two-up panels: 1-2 px white.

## (e) Imagery
- **IMAGERY = photo** (all panels are photographs; no illustration).
- Style: documentary architectural close-ups of tile and stone in natural daylight, a hard sun beam and a soft shadow wedge crossing glazed surfaces; muted, quiet colour; grout lines and bevelled corners visible; no people in the hero.
- Ratio 1618:1000 (1.618) for panels; two-up panels about 720 x 890 (0.81); radius 0; no clip-path or masks; no overlap or offset: text sits on a bottom scrim inside the photo; the photo bleeds to the viewport edges.
- Loaded lazily with a fade as it enters the viewport (lazysizes pattern).

## (f) Decoration
- Hamburger icon (3 x 28 px lines, 2 px, #88888A) top-left; line search and phone icons top-right, 28 px.
- No dots, numerals, shapes or ornaments. The only graphic device is the weight-split wordmark.
- 1-2 px white seam lines between abutting panels.

## (g) Motion
- Logo scale-down: CSS scroll-driven (`animation-timeline: scroll()`, `animation: scale linear forwards`, duration 1 ms, range = logo height, i.e. about 0 to 130 px of scroll), no JS. Mobile < 960 px: static small logo.
- Image lazy-in: lazysizes, opacity fade about 300-400 ms, no translate.
- No parallax, no marquee, no count-up on the home page.
