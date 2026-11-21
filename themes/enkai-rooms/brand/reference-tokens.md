# Reference tokens (measured on https://kyoto-kitcho.com/ at 1440 x 900; secondary https://kikunoi.jp/en/)

## (a) Colour
| Role | Hex | Share of first screen / page |
|---|---|---|
| Base dark (nav, hero ground, footer) | #000000 / footer #140E0E | ~38% of top first screen; footer band |
| Base light (inner pages) | #F7F7F7 pale patterned ground, #FFFFFF tag | ~60% of inner pages |
| Text | #000000 on light, #F2F2F2 on dark, #CCCCCC footer text | |
| Accent 1 (announcement strip) | #FF2219 | 4.2% of first screen (we replace with russet #6C3524 at the same area) |
| Accent 2 (dish glaze, photo only) | #93876B sage-tan | photo |
| Secondary gold (labels, CTA tab) | #BB944E | <3% |
| Alt dark row | #242424 | rows |
Saturated share (HSV s>0.45, v>0.24): top first screen 29.4% (photo + red strip); room page first screen 31.6% (wooden room photo); lower sections 5.5%. Our target <= 15% (low-key, muted photos, russet strip only).

## (b) Type
Serif (mincho) throughout: base 15 px / letter-spacing 1 px; nav 16 px, 400, lh 20.8, ls 1.6 px; page title 36 px, weight 700, ls 4 px, centred, with a ~14 px Latin sub-line ls 1 px; footer 15 px. Secondary: Zen Old Mincho-class serif; labels 10 px caps tracked; month name 20 px, room names 36 px, section words 16 px. Ours: Cormorant Garamond display + Source Sans 3 body; CJK Noto Serif TC/JP.

## (c) Spacing
Header: strip 38 px + bar 70 px (total 108). Logo tag 80 x 174 at x 30. Inner page title band 168 px tall. Text/photo rows: container ~1100 px, text column ~450 px, photo column ~50% flush to viewport edge, row gap ~80 px; footer padding 75 px top. Tile grid 4 px gap, container ~1060 px.

## (d) Radius, border, shadow
Radius 0 everywhere. Buttons: 1 px white outline on black (reservation), grey #E6E6E6 filled button (store). Dated list rows: 1 px #E7E7E6 hairlines. Tag: soft shadow below, no border. Secondary: rows with no borders, CTA tab square, gold filled.

## (e) Imagery (IMAGERY = photo)
Hero: full-bleed dish close-up, 1440 x 592, dark vignette, ~49:20; sections full-bleed black ground with a single dim photo. Room page: 1440 x 625 (2.3:1) wide room photo under the title band; rows: photo 50% (1.5:1) flush to the viewport edge, text opposite; tiles 2x2 of 1.76:1 photos with 45% black scrim. Secondary: 3 equal square-ish photos (3:2), 1060 wide, 8 px gap, no radius.

## (f) Decoration
Seigaiha-like pale pattern tile as the page ground (we use a plain russet-tinted hairline arc pattern in SVG, our own). Short horizontal arrow under tile labels (24 px, 1 px white). Gold hairline vertical rule beside a centred caption (secondary). 1 px dotted separators.

## (g) Motion
Top: fullpage.js, scrolling speed 1000 ms (desktop), 800 ms phone, easing easeInOutCubic; slide titles and button fade in 1400 ms after 700 ms delay; second element 1300 ms after 1500 ms delay; background layers offset translateY(-400px) and settle over 1.5 s ease (1 s with 0.5 s delay when going up); scroll hint fades in 4000 ms after 2000 ms; header anchor scroll uses easeInOutCubic. Hover: 0.4 s ease-out. Inner pages: none observed (static).
