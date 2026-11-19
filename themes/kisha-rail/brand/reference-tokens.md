# Reference tokens (measured with getComputedStyle, 1440x900, 2026-11-20)
Main reference: https://www.jcomm.co.jp/ (home). Secondary: https://fudo.tree-public-squares.com/ (route-scale and chapter labels only). Only values and descriptions are recorded; no assets, copy or logos are reused.

## (a) Colour (main)
| Role | Hex | Share of page |
|---|---|---|
| Ground (pale cool grey) | #F6F7F9 | ~55 % |
| Card white | #FFFFFF | ~20 % |
| Ink / text (deep navy) | #2A2F4E | text |
| Footer / dark band | #444863 | ~8 % |
| Accent (saturated blue gradient 90deg) | #4D61D4 -> #1630C6 | ~7 % (about band, one button, tab header) |
| Aqua tile / pale tiles | #9BF0F5 / #CFE0FF | ~2 % |
First-screen saturated share (S>0.5, 15<L<85 %): **4.5 %** (photo is washed blue-grey). Our mapping: bark #8C6450 replaces the blue accent, deep umber #3A2D28 replaces navy ink, pale greige replaces #F6F7F9 (see stage-a.md).
Secondary (fudo): ground #111013, cream #F2EFE9, one hot red-orange spot only on route markers; used for the relationship (almost monochrome + one warm accent), not the dark ground.

## (b) Type
- Main: Noto Sans JP body 14 px / 24.5 px lh, ls 0.84 px (0.06em); nav 14 px / 600; section label (h2) 16 px / 600 / 16 px lh with a dotted marker ("titleDot", small Montserrat sub-label above); service titles 30 px / 600 / 39 px lh; hero display word (outline script "ideas!") ~230 px, thin stroke, white, partly cropped by the window's left edge; Latin = Montserrat (labels, caps).
- Secondary: Shippori Mincho 700 104 px / 98.8 lh / ls -0.02em chapter word; Space Mono 9.6 px / 14.4 lh / ls 0.14em / 40 % white caps labels ("nature - ..."); body Shippori Mincho 16/24.
- Ours: Libre Baskerville (display) + Mulish (body); Mulish caps for labels.

## (c) Spacing
Header 102 px tall, padding 0 40 px, logo left, nav centre-right, three coloured tab buttons flush at far right (79 px tall). Hero window x 40-1400 (1360 wide), 740 high, starts under the header. Section padding 200-300 px top and bottom (news 100/250, about 300/300, service 240/200, works 200/200, recruit 260/50). Content width 1000-1360 (inner 250 px side padding on news). Card grid 3 columns, 10 px gap, cards 449 x 492. Fudo: chapters 200-340 vh pinned.

## (d) Radius, border, shadow
Hero window radius ~16 px (top corners; bottom edge hidden by tab cells). Cards radius ~12 px, white, no border, no shadow. Tabs (header) radius 8 px, 2 px bottom border darker shade. Corner-bracket frame around card titles: 1 px #2A2F4E, 14 px arms, 4 corners, 365 x 68. White pill button 460 x 78 radius 8 with a 60 x 60 pale square tile (radius 6) with chevron at the right end. Footer flat.

## (e) Imagery - IMAGERY: photo
Photographs, wide documentary, cool daylight: station roof and platforms seen from above (hero), interior of a train with a seated woman, work posters. Ratios: hero 1360 x 740 (1.84:1), work cards 350 x 350 inner crop on white cards (1:1 inside 449 wide card, 8 px inset), banner 580 x 3:2. Hero photo has a pale blue-white veil (~30 %) and a thin blue wire-mesh line field (three.js ribbon of ~120 hairlines, drifting, 1 px, blue->transparent) sweeping from centre-left to bottom-right across the lower half. A white card ("PICK UP WORK", 220 x 320, blue tab header) docks at right edge of the window, vertically around 60 % height, overlapping the window edge by 20 px.
Fudo: dense 5 x 3 photo mosaic edge to edge (240 x 300 cells, 1 px dark gap), darkened 35 %, with one giant serif glyph crossing the left columns.

## (f) Decoration
- Three tab cells docked on the window's bottom edge: x 63-481, 503-922, 944-1362; heights 75 / 25 / 25 visible (first one raised and active with a 3 px blue top rule + square blue arrow button 32 x 32; the others are low). On scroll they grow into three full white cards 449 x 492 (see scroll-jcomm-tabs.png).
- Corner brackets (four 14 px L-shapes) around each card title.
- Dotted marker + small caps sub-label above each section title (c-titleDot).
- Category chips: white, 1 px none, radius 3, 11 px text, in rows under work captions.
- Fudo: vertical route scale at the right edge (ticks every 40 px, long ticks every 160, labelled "n44 deg", a white dot marks current position), mono transit label "transit 01 -> 02 / n 43.08 -> n 39.50" centred above a 160 px serif numeral with a small "km" unit.

## (g) Motion
- Reveal: IntersectionObserver adds an "act" class once, rootMargin on bottom; transitions 0.3 s on opacity/scale; per-item `data-delay` -> transition-delay (ms) stagger.
- GSAP ScrollTrigger: horizontal strip pinned and x-translated with scrub 1, start -=130 px (60 px mobile), end +=track width, progress bar width driven by progress; `.js-gsapBlur` filter blur -> 0 with scrub from top 80 % to bottom+100 80 %; `.js-gsapParallax` yPercent +y -> -y (data-y, default 50) scrub true, ease none.
- Hero: three.js hairline ribbon, time += 0.015 per frame, paused when off screen (IntersectionObserver threshold 0).
- Header: transparent -> white with rounded bottom after the first screen (class toggle, 0.3 s).
