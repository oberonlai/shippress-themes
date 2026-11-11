# Reference tokens: aktio.co.jp (home, measured 2026-11-11 at 1440x900 with getComputedStyle; values only, no assets copied)

## (a) Colour (first screen 1440x900, sampled every 4 px)
| Role | Hex | Share of first screen |
|---|---|---|
| Base / page | #FFFFFF | ~38% (header bar, area below the photo) |
| Photo (sky blue + grey facade) | photo | ~38% |
| Main (brand red, header tab, left wedge, dock cells) | #CC0000 (dock cell #B00000) | ~13% |
| Pale grey (news bar, panels) | #F5F5F5 / #EAEAEA, tab idle #CCCCCC | ~8% |
| Ink (headline strips, tags, footer) | #000000 | ~3% |
| Text | #333333 | — |
| Accent (catalogue tile) | teal #00B5A0 | ~2% |
Saturated share (S>0.5, V>0.4) of the first screen: **21%** (red 13% + sky blue photo). Our theme: pine is low saturation, so the first-screen saturated share must stay <= 15%.

## (b) Type
Noto Sans JP only. Body 14px / lh 1.7 (23.8px) / weight 400 / no tracking; nav 13px #333; H1 28px weight 400, lh 2.6 (72.8px, set on separate lines), each line white on a black strip with padding 10px 20px; H2 section titles ~34px weight 300 (light) in #333; tabs 16px; tags 11px bold white on black; buttons 15px bold. Latin logo is a custom slanted wordmark (not reproduced).

## (c) Spacing
Header 110px tall (80px after scrollTop > 350). Hero 565px tall (y 110-675), inset 105px from the left (the red wedge column), bleeding to the right edge. Container 1170 (x 135-1305); inner panel 1070 (x 185-1255, padding 50). News bar 1170x80, padding 0 30. Section gaps ~100px. Footer black, padding-top 80px. Contact band 260px tall.

## (d) Radius, borders, shadow
Radius 0 everywhere except the white search pill (r 999). Borders 1px #CCC; outline buttons 1px #333 360x50. No shadows. Logo tab: `clip-path: polygon(0 0, 94% 0, 87% 100%, 0 100%)` on a 430x110 block. Active tab: white with a 7px #CC0000 top bar; idle tabs #CCC, height 64, three equal, 3px gap.

## (e) Imagery
**IMAGERY: photo.** Hero = real photo of a depot facade at dusk with the company lettering (sky, vertical louvres, dramatic perspective), 1335x565 (2.36:1), r0, full-bleed to the right edge, no mask, 4-photo crossfade. Banner strip: 297x186 (1.6:1) cards, r0, 12px gap, neighbours peeking both sides. Video strip: 380x~250 photo cards, centre one full, neighbours cut by the window. Product catalogue: cut-out machine photos 80px (not used by us, max 1 cut-out). Secondary imagery: isometric site-scene illustrations (small tiles in the "by site illustration" tab). News thumbnails 225x150, r0.

## (f) Decoration
- Slanted logo tab: red 430x110, right edge slanted (94% top / 87% bottom), white italic wordmark.
- Left wedge: red column 105px wide at the top, slanting out to ~220px at y 675-900 (a long diagonal edge running down the left margin), under the hero.
- Pale grey slanted wedges (#E8E8E8) on the left (y~3000-3600) and the right (y~4300-5100) page margins.
- Vertical "SCROLL" label with a 1px line and diagonal tick at the hero's bottom-left (x 70-90).
- Dock: pale translucent frame (white 55%, 10px padding) holding two cells 420x78 and 675x78, each with a small slanted notch top-left.
- Cards: 1px grey outline tiles with a red slanted corner notch at the top-left (catalogue links 254x100).
- Black micro-tags (11px) above ruled news rows (1px #CCC).
- Contact band: red to dark-maroon diagonal gradient with a slanted join, white card 950x165, red button 300x70.

## (g) Motion
Hero: 4 slides, CSS `@keyframes` opacity 0 -> 1 (4.76% of 28s = 1.3s) hold to 33.33% (9.3s), 0 at 42.85%; delays -2s / 5s / 12s / 19s; linear. Header: jQuery scroll listener adds `.scroll` at scrollTop > 350 (header 110 -> 80, transitions .4s). Tabs: jQuery `fadeIn()` default 400ms swing on click. Carousels: Splide (autoplay, pause button). Back-to-top: jQuery `animate` 500ms. No scroll reveals, no parallax.
