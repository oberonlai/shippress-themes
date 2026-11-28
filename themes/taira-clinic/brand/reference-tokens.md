# Reference tokens (measured with getComputedStyle + pixel sampling, 1440x900, 2026-11-28)
Main: https://hospital.luke.ac.jp/ (St. Luke's International Hospital). Secondary: https://www.jikei.ac.jp/hospital/ (structure only).
Text, logos and images are not reused; only values and descriptions are recorded. Source text is Japanese and is not quoted.

## (a) Colour (main reference, first screen)
| Role | Hex | Share of first screen |
|---|---|---|
| Frame / nav bar / title bar (deep green) | #1C5D47 / #00734C | ~9% |
| CTA boxes (strong blue) | #294EA4 | ~10% |
| Wallpaper beside the page (tan check) | #D9C7A3 | ~22% (outside the 1000px page) |
| Page ground | #FFFFFF | ~40% |
| Hero photo (sky, brick, trees) | muted | ~19% |
| Text | #000000, headings #764912 | - |
Saturated share (HSV s>.45, v>.25) of the main reference: **~14%**. Secondary (Jikei) measures ~43% (navy rail + blue nav + sky): do NOT follow it for colour.
Relationship to take: one dark frame colour used thin (frame, nav strip, title bar) + one strong CTA colour in two big blocks + large white ground. Our mapping: frame/nav = #5A6568 slate; CTA = muted steel blue #2C5A86; ground white / #F4F6F6.

## (b) Type
- Luke: Arial/Helvetica, body 12px/18px (lead paragraphs 16px/24px), h3 18px/27px 700 brown; no scale, no tracking. Weak; do not copy.
- Jikei: Yu Gothic stack, body 16px/28.8px #222, h2 32px/48px 700 ls 2.56px (0.08em) navy #15116F, h3 18px/27px 500 ls 2.16px (0.12em), footer 15px ls 1.2px.
- Take: wide-tracked bold section titles over generous line height (1.8). Ours Figtree headings / Manrope body.

## (c) Spacing
- Luke: fixed 1000px page, 25px inner gutter (950px content), nav strip 34px tall, banner photo 1000x230, section bottom padding 60px.
- Jikei: 220px left rail, content column up to 1220px, section padding 90px 0, h2 at 60px from column edge.
- Ours: container 1200, section padding 96/128px, 12-col gap 32px.

## (d) Corners, borders, shadow
- Luke: radius 0, 1px outline #b18555 + 1px #fbeedd inner border on the docked search box, 2px green rules, no shadow.
- Jikei: radius 0 for photo, search pill r999, no shadow.
- Ours: radius 0-4px, 1px hairlines #C9D1D2, no shadow.

## (e) IMAGERY: photo
Primary imagery is photographs (building exterior banner, staff/patient scenes in small card photos; small flat icon tiles in the news list, minor). Banner 1000x230 (4.35:1), no radius, no mask; card photos 200x92 (2.2:1) with a 1px frame; list thumbnails 74px square with 1px frame; icons illustration only in list (not main).
Position: banner full width of page under nav; docked box overlapping the banner left at x+25, y+60, 185x108; 5 cards peeking carousel under the CTA boxes.
Ours: photo, high-key, bright treatment room, pale grey tones, natural skin tones.

## (f) Decoration
- Docked "search by disease / by department" two-button box: 185x108, 8px padding, tan pattern ground, double outline 1px; ours = quiet white box with two hairline rows.
- Green title bar 950x56, white 24px bold centred; ours slate bar.
- Two equal CTA blocks 465x106 with a small white arrow square at right (24px); ours steel-blue blocks.
- Section label bars with 1px tan border + pattern; dated rows with coloured category chips 80x18, white 11px.
- Promo strip: 5 cards 200 wide, heading plate on top, photo, text; left/right circle arrows, strip peeks at both ends.

## (g) Motion (see scroll table in stage-a.md)
Luke: jQuery Tools scrollable, circular, speed 2200ms, autoscroll interval 7500ms, autopause; PICK UP scroll speed 1500ms easeInQuint; list rows biggerlink hover. No scroll reveals.
Jikei: Swiper hero slider with 3 dots (timing not captured); no scroll-linked effects detected (no gsap/AOS).
