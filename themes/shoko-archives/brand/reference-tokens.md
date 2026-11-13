# Reference tokens — measured on the main reference (corporate top page and a service detail page, 1440x900, getComputedStyle)

## (a) Colour
| Role | Hex | Approx area (first screen / page) |
|---|---|---|
| Ground | #FFFFFF | 55% |
| Pale band (breadcrumb, section wash) | #EEF0F4 / #E9EFFA | 20% |
| Brand ink-blue (headings, outlines, links) | #1432AA | 6% (text and 3px outlines only) |
| Body text | #333333 | text |
| CTA vermilion (header enquiry button, sidebar enquiry block) | #E13000 | 1.5% |
| Hero photo/animation (pastel, hand-drawn) | n/a | 40% of the first screen; saturated share (S>0.6) measured 1.7% |
First-screen saturated share: 1.7% (hero scene is pastel; only the blue outlined boxes and the red button are saturated).

## (b) Type
- Latin/CJK sans only (YakuHanJP + Noto Sans JP / Hiragino). Body 16px / 400, line-height about 2 in running text (32px), colour #333.
- H1 service page 40px / 700 / lh 52px, blue. Top-page hero headline about 52px 700 in a box. H2 top 32px / 700 / lh 41.6px blue; H2 service 20px / 700 / lh 32px with a 1px blue rule under it; H3 28px / 700 / lh 50px (#333) in the docked panel.
- Nav 14px / 400; buttons 14px; no uppercase, no letter-spacing.

## (c) Spacing
- Container 1200px (content x 120 to 1320); service pages: 850px main column + 300px right rail with 50px gap.
- Header: top bar 24px from edge, 40px controls; second nav row at y 110; breadcrumb band 42px tall.
- Section vertical padding about 90–120px; card gap 30px; 3-up card width 380px.

## (d) Corners, borders, shadow
- Radius 0 everywhere. Buttons square. Borders: 1px #8C8C8C inputs, 3px blue (#1432AA) outline on hero headline box, 1px blue rule under H2. No shadows.

## (e) Imagery — IMAGERY: photo
- Content imagery is documentary photography: cards 380x215 (16:9), square-cornered, with a flush top-left category tab (tinted pale blue, blue text, 14px) over the photo. One full-bleed building photograph (1440 x about 540) with a white panel (975px wide, inset 160px left) docked over its lower edge. Hero window is a 540px-tall looping hand-drawn animation (soft watercolour pastel, black line); the service pages use black line spot-icons 140px square. We take the photo reading only (hero scenes become high-key photographs).
- Mask/clip: none. Overlap: panel overlaps photo bottom by about 130px.

## (f) Decoration
- Hero headline in outlined boxes: white fill, 3px blue border, text blue 700; second and third lines in smaller boxes (1px border) of different widths, left aligned at x 120.
- Pause button 40x40 blue square at the hero's right-bottom (x 1360, y 600).
- Square ■ bullets (10px, #333) in the problem list, rows alternately #F2F3F5 and white, 54px each.
- Page-top button 40x40 blue square fixed bottom-right, chat circle outline 50px above it.
- Tab tags: pale blue block 47x36 up to 200x36 flush at photo top-left.

## (g) Motion
- Hero: looping video, autoplay with pause control. Cards: slick carousel for the four recommended banners.
- Hover: opacity .2–.3s, colour .2s, background .3s. Chat drawer transform .6s. No scroll-triggered reveals found (no fade/inview classes; only jQuery, slick, magnific-popup).
