# Reference tokens: Japan Hotel School (jhs.ac.jp, English view), measured 1440x900

## (a) Colour
| role | hex | share (first screen / page) |
|---|---|---|
| text / ink | #282828 | body copy, headings |
| base | #FFFFFF | ~70% of first screen outside the photo |
| accent blue (pick-up rules, labels) | #4A95CA | thin, <1% |
| caption strip gradient | teal #4FC3C8 to slate #5C7988, left to right | ~2% (strip across the photo) |
| pale band 1 | #FFF8E5 (warm, we do NOT copy: replaced by cool #EEF2F6) | 85.3% wide panel |
| pale band 2 | #F4EFF7 (pale lilac) | 77.9% wide panel |
| deep blue band | #005588 | bottom band |
| tag yellow | #F2D21B | tiny "reserve" tags |
First-screen saturated share (S>0.5, V>0.3): 9.8%.

## (b) Type
Headings Noto Serif JP (Latin falls back to a serif): section H2 36px/54px weight 400, normal tracking; card titles 24px/36px weight 400, letter-spacing 7.2px (0.3em); banner line 22px, 6.6px tracking white; event titles 20px/30px, 1.6px tracking. Hero tagline clamp(16px, 2.65vw, 36px) serif on white. Body Noto Sans JP 16px/24px weight 400, ink #282828. Section label: Latin caps 12px, tracked, above the H2 ("COURSE", "EVENT", "NEWS"). Pick-up heading 24px/700 sans.

## (c) Spacing
Header 145px tall (logo left 50px, two-line text nav right, 13-16px). Hero photo inset: left 100px (7.35vw), right 0, height 745. Section padding about 60px top / 42px bottom; content container 1160px (x 140-1300); card gap 40px; section head centred with "List >" link right.

## (d) Radius, border, shadow
Cards radius 0; white cards with soft tinted glow (pink / blue, about 0 4px 20px 6%). Buttons: 2px ink outline, radius 9999. News rows: 1px #DDD rules. Tags: grey #F0F0F0 boxes, 12px.

## (e) Imagery: IMAGERY = photo
Documentary hotel photography, natural daylight, warm interiors, staff in uniforms, smiling candid pairs, shallow depth of field. Hero 1200:667 (1340x745) cover, no radius, inset 100px from left. Department cards: 560x220 (2.55:1) photo on top of a white card. Pick-up thumbnails 220x120 (1.83:1), staggered. Night banner 1160x100 (11.6:1). Event thumbnails 200x140 (1.43:1) overlapping the white row's top-left corner by 15px up and 15px left. No masks or clip-paths.

## (f) Decoration
White tagline box flush with the photo's top-left (x 100, y 208, 924x104) overlapping the photo top. Teal-to-slate gradient strip (830x40) crossing the photo's lower-right under white 44px bold caption. 4 slider dashes bottom-right (50x4). Pick-up: 220x6 blue-to-violet rule above each text tile, staggered 3 columns, "PICK UP" label crossing the hero's bottom-left edge. Pale panels cover only 78-85% of width, flush left, stop short of the right edge. Vertical fixed tabs at the right edge (dark 50x280 and two outlined, radius 8): NOT adopted (used by another theme).

## (g) Motion
Hero: Swiper fade, crossfade, about 0.5s, 4 slides. Hover/link transitions 0.3s ease (44 elements). Images lazy-load (fade). No scroll-triggered reveal, no parallax, no marquee. jQuery + Swiper only.
