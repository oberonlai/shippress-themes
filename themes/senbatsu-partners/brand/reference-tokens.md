# Reference tokens — https://www.bizreach.jp/ (measured 1440x900, 2026-11-11)
Text of the reference is Japanese; only values and descriptions are recorded here.

## (a) Colour
| Role | Hex | Share of first screen |
|---|---|---|
| Hero ground (deep red gradient) | #900000 / #800000 / #700000 | ~53% saturated (measured: pixels S>0.5) |
| CTA fill | #D7000E (text #FFFFFF) | ~2% |
| CTA holder frame | #F0F0F0 | ~5% |
| Page ground below hero | #FFFFFF, band #FAF9F8, grey band #F3F3F3 | ~38% |
| Text | #111111, secondary grey ~#666 | — |
| Accent | red short underline under h2, same #D7000E | <1% |
Our mapping: red hero → dusk navy #3E4C62 (low saturation), red CTA → one small brick accent; saturated share target <= 12%.

## (b) Type
- Body: Noto Sans JP, 16/24 px, weight 400; headings in a mincho serif at 32/40 px weight 600 (h3), h2 20/25 700 sans label.
- Hero headline ~64 px serif with soft text shadow, white; wordmark lockup ~28 px caps tracked.
- Section labels: 12–14 px, tracked slightly. No uppercase transforms (Japanese).
Our mapping: Manrope headings + Instrument Sans body, CJK Noto Sans TC/JP (sans, no serif).

## (c) Spacing
- Container 992 px (x 224–1216) centred; hero content aligned to the 1008 px header at x 216.
- Section padding 40 px / 16 px; text bands ~120 px; 4-column grid gap 8 px (tiles), 32 px (cards).
- First screen height 616 px hero then white proof strip (logos) to ~870 px.

## (d) Shape
- Radius 3 px on buttons; cards 0 radius with 1 px #DDD border; no shadow except hero text.
- CTA holder: #F0F0F0 box, 16 px padding, holds primary red button (380x56) over a white secondary button (380x38).
- Short accent rule 80x2 px under section titles.

## (e) Imagery — IMAGERY: photo
- Hero: studio-lit photographic portrait of one person cut out on the red gradient, right ~42% of width, bottom-bleed, pointing finger toward the viewer; shoulders cropped by the bottom edge.
- Category tiles: 4 x 2 grid, each 240x101 px (2.4:1), label ABOVE the image in 13 px, 8 px gap, mixed stock photos (skyline, handshake, office).
- Content cards: 320x200 (1.6:1) thumbnails with 1 px border, body 2–3 lines, small outlined tag + ">" text link.

## (f) Decoration
- Two hairlines (top and bottom) framing a one-line eyebrow in serif red (centre, 514 px wide).
- Three centred icon columns (line icons in dark red) with serif headings and 2–3 line text.
- 12 logo marks in a 6 x 2 grid on white (we will use none: no brands).
- Small outlined tag (1 px, 12 px text) + ">" link on cards.

## (g) Motion
- Hero content block fades in once: 0.6 s, ease-in-out, 0 s delay. Buttons: 0.2 s ease-in-out hover. Tab trigger 0.15 s cubic-bezier(0.5,0,0.5,1). No scroll-triggered effects found (no GSAP/ScrollTrigger/AOS; Next.js app).
