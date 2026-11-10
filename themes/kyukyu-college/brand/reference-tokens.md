# Reference tokens (measured with getComputedStyle at 1440x900, main reference only)
Source: the home page of the Kokushikan University site (listed in S5-Style). Values only; no assets copied. Text translated to English.

## (a) Colour
| Role | Hex | Area (first screen) |
|---|---|---|
| Ground (cool pale grey) | #EBEEEE | ~55% |
| Ink / display type / buttons | #000000 | ~12% (giant word, black pill buttons) |
| Body text | #444444 | text |
| Primary accent (signal red) | #E60020 (hover #C8142F, tint #FDECED) | ~3% (fixed right rail 80x484, small labels, numerals) |
| Overlay tints on the photo (translucent shapes) | #98AADE blue, #DE8289 rose, #78D7DD aqua, #EDC880 straw | inside the photo only, ~25% alpha |
| Hairlines | rgba(0,0,0,.1) | 1px |
First-screen saturated share (s>0.5, v>0.25): 3.0%.

## (b) Type
- Display Latin: Barlow Condensed, 600/900, uppercase, line-height 1, letter-spacing -.02em. Hero word stacked in three lines (≈ 190px each, ~13rem for the large section words, 4.19rem for the small ones).
- Japanese: Noto Sans JP 900 for headings (H3 42px / lh 67px, section H2 28px), body 16px / lh 28.8px (1.8), letter-spacing .03em.
- Hero lead line: 900, ~2.7rem (min(5.3vw, ...)), letter-spacing .1em, sits above the giant word.

## (c) Spacing
- Page frame: 80px side margin; content column 1280px between two 1px vertical hairlines; two-column rows split at 616 / 48 / 616 with a hairline gutter.
- Header 90px, white after first scroll. Section vertical padding about 120–160px; list rows 150px high.

## (d) Radius, border, shadow
- Buttons: pill, radius 50px, black, 300x60, white label and a long arrow. Photos radius 0. Cards: no radius, 1px hairlines. No shadows.

## (e) Imagery
IMAGERY: photo. Mostly campus and student photography, natural light, medium-high key, people walking; a flat vector vignette (town skyline with an ambulance, trees) sits on top of a tinted tile panel.
- Hero photo: ~928x710 box flush to the right frame edge (x 442–1360), 1.3:1, radius 0, object-position 42% 40%, covered by translucent crossed triangles / diamonds in blue, rose and aqua (large polygons, hard edges, ~25–35% alpha). Fades in (opacity 0→1, 1.2s, delay 1.2s).
- Wide photo band: full width, 2.2:1, same overlay shapes on top.
- Square tile panel (616x616): four-colour overlapping circle and diagonal shapes, flat, pastel; skyline strip above its top edge.
- Magazine cards: 4:3 images, text below on white, ↗ icon.

## (f) Decoration
- Fixed right rail 80px wide, red (#E60020), five icon+label cells divided by 1px white hairlines (apply / request / menu / search / access), then small vertical text links below (English / Giving / Contact) and a Ø50 black "up" disc.
- Giant condensed Latin word as a section title, with a small red Japanese subtitle under it; red big numerals "01 / 02 / 03" next to a red bold lead.
- Hairline vertical grid lines through the whole page (frame + centre split).
- Play button Ø50 black, bottom-right of the hero photo, with a caption.

## (g) Motion
- Hero cover photos fade in: opacity 1.2s, delay 1.2s. Hero slider crossfades 8 photos.
- `.js-in-view` IntersectionObserver, threshold .3: headings and blocks fade/slide in; transform 1.2s cubic-bezier(.6,0,.4,1).
- Count-up numbers: IntersectionObserver threshold .5, 1000ms linear-ish rAF counter, data-num + data-rounding.
- "Why us" list: image column `position:sticky; top:0; height:100svh`, image swaps with opacity .2s linear per list item while the text column scrolls.
- Carousel with progress dots and pause button; hover transforms .3s ease-out.
- Libraries: jQuery 3.7 + own main.js; no GSAP / Lenis.
