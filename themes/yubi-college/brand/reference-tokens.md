# Reference tokens — https://www.o-hara.ac.jp/ (measured 2026-11-23, 1440x900, getComputedStyle + CSS files)
Source text on the site is Japanese; only measurements are recorded here.

## (a) Colour
| Role | Hex | Share of page |
|---|---|---|
| Ground (cards section) | #F6F6F6 | ~35% |
| White | #FFFFFF | ~25% |
| Ink (text, header lines) | #090909 / #000000 | text |
| Primary blue (project blue) | #0E3684 (deep), #4766B3 (turkish), #4B71B9 (hero foot gradient) | ~13% of first screen (S>0.35 pixels) |
| Light aqua wash | #E7F5FC / #D0EAF7 | ~12% (section ground) |
| Accent red (notices only) | #FF4949 | <1% |
First screen saturated share (S>0.35, V>0.3): 12.9%. Rest is white/translucent photo.

## (b) Type
- Display: Noto Serif, 45px (10.26vw on mobile base), weight 400, line-height 1.3, letter-spacing .05em; lead 20px serif.
- Section heads: Inter + Noto Sans JP, 30px, 500, lh 1.27, with a small English sub-label (14px 600) under it.
- Card title 20px 400 lh 1.4; body 16px; card meta 12px 600; link grid 12px 600 lh 1.29.
## (c) Spacing
- Content max 80rem, primary column 56.25rem (900px); card grid 900 wide, 2 columns gap ~56px; hero-foot link grid 4x2 at 900px, gap 10px, cell min-height 46px; section padding ~120px.
## (d) Radius / border / shadow
- Photos radius ~16px; caption panels radius 10, no shadow; link cells 1px #090909 border, square, 7px deep-blue stub at left; pill CTA radius 999.
## (e) Imagery — IMAGERY = photo
- Documentary-bright stock photography of students in classrooms and daylight windows; 4:3 cards (422x260 photo) with a white caption panel (342x127) overlapping the photo's lower-left by ~70px and hanging below it; corner triangle (gradient blue-to-lavender, 40px) at the panel's bottom-right with a thin arrow.
- Hero photo full-bleed, a woman holding books, daylight window blur, washed to white by a gradient at the top and a blue gradient (#4B71B9) at the foot.
## (f) Decoration
- Three grain-stippled diagonal ribbons (blue to transparent, 45deg, mix-blend multiply) crossing hero corners and the "About" band; header is a white 90px translucent blur bar; round navy TOP button 66px bottom-right.
## (g) Motion
- Hero background cross-fade, 1s ease, interval 3.5s; image scale 1.08 to 1 over 5.5s ease (delay 1s); ribbons slide in from (-100%,100%) to 0, 1.5s cubic-bezier(.83,0,.17,1), delays 0 / .3 / .15s, then settle by 8px; scroll classes `-show` added at 70% of the viewport (95% on mobile); link cells hover 0.3s ease (fill to blue).
