# Reference tokens (measured with getComputedStyle, Chrome headless 1440x900, 2026-10-23)
Main reference **R1 = CAMITA by MORITA, https://camitabox.com** (structure, split hero, line drawings, fixed round badge). Second reference **R2 = Luci KIWA series, https://luci.co.jp/led/en/pickup/kiwa** (dark low-key ground, light serif, product trio, scroll reveals). Nothing here is copied text, photo or logo. Raw dumps: `$LANE_TMP/tok-cam.json`, `tok-luci.json` (not committed).

## (a) Colour and area share
R1 (first screen 1440x900, 4.3% saturated px, almost all inside the photo):
| role | value | share |
|---|---|---|
| ground | #FFFFFF (body bg) | ~56% of first screen (right column + below photo) |
| text / lines | #000000 | <3% (ink on white, 3px line icons, highlight chips black bg + white text) |
| photo (cool grey-teal desk scene, one orange object) | ~#90B0B0 mid, #F0F0F0 high | ~42% (one photo, 1088x700 = 75.5% width) |
| accent | none (photo supplies the only colour) | ~0 |
R2 (full page sampled screens):
| role | value | share |
|---|---|---|
| ground | #16160E (warm near-black) | 50-76% of screens |
| mid grey panels | #2F2F27 (card bg), #3E3A39 (cookie bar/btn text), #5D5D58 (hairlines, 1px) | 10-17% |
| text | #E8E8E7 (body on ink), #FFFEFA (nav), #8B8B87 (footer meta), #D1D1CA (captions) | <5% |
| light section | #FFFFFF with text #16160E, desc #464641 | the product-trio band only |
| saturated px | 0-0.5% | |
**Ours (planned):** ground #FFFFFF / #F4F3F0 stone; ink #16160E; mid #5D5D58; accent #6F5A43 (row hex) on <=3% area (thin rules, tag dots, link hover, price underline). First-screen saturated <=5%.

## (b) Type
R1: helvetica-lt-pro (Adobe) / Arimo fallback. Root 7.5px (scales with vw, 0.52vw), so 1rem = 7.5px. Body & h2 & nav: 5rem = 37.5px, weight 400, line-height 63.75px (1.7), letter-spacing 0.375px (0.01em), none transform. Nav links ls 1.125px (0.03em). Captions 11.25px/19.1px (1.5rem). Footer small 31.25px, ls 0.05em. Vertical caption (writing rotated 90deg) 11.25px, ls 0.03em. Numeric callouts 37.5px/49.5px, ls 0.03em, number highlighted as black chip with white text.
R2: urw-form-semi-condensed (body, 300) + ivymode serif-like display (300). Root 10px (0.694vw). Sizes (px @1440): h-story 42/normal ls 2.1 (0.05em); concept heading 36/54 (1.5) ls 1.8; feature line 32/48 ls 1.6; item title 24 ls 1.2; section label 20 ls 1; product name 18 ls 0.9; body 18/28.8 (1.6) ls 0.2, small body 16/27.2 (1.7) and 16/25.6; button label 15-16 ls 0.05em; footer meta 13-14. Weight 300 throughout (600 only for cookie buttons). No uppercase.
**Ours (planned):** Newsreader 300/400 display (heading 2.6-3.2rem, lh 1.3, ls 0.01em), Public Sans 300/400 body 1rem/1.75 (R2 lh 1.6-1.7), labels 0.8125rem ls 0.08em (R2 ls 0.05em).

## (c) Spacing and container
R1: header 79px tall, nav five items spaced across full width (justify between, x 22 to 1418, side gutters ~22px); hero photo from y109 (30px under header) to y809 (700 high); text sections container 1005px (69.8%) at x218 (centre-left); FAQ section 2308px tall; footer left pad 195, 1050 wide; fixed round badge 323px diameter, bottom-right, 3px black border, 100% radius.
R2: header 30px from top, contact pill 130x42; sections full width with 60px side gutters (products x60 to 1380); product cards 427px wide with 20px gap (x60/507/953 => column gap ~20px), card h 576; concept two columns 504px text + 588 image (gap ~130); story section 672 wide centred (x384); vertical rhythm ~120-200px between blocks (scroll heights: hero 1810, product trio 4566-5142).

## (d) Radius, border, shadow
R1: radius 0 on photos; 3px solid #000 on round badge (100%); no shadow. R2: images radius 0; pills radius 21-24px (height 42px) with 1px #FFFEFA outline, transparent fill; cookie buttons radius 100px; hairline cards 1px #5D5D58 on #2F2F27; no shadows.

## (e) Image presentation
R1: hero photo 1600x1030 source, shown 1088x700 (aspect 1.554), object-fit cover, radius 0, at x0 (bleeds left), 75.5% of width, right 24.5% holds a wordmark and a small mark overlapping the photo edge; slideshow of stacked items crossfading every 5s; mid images ~1005 wide x 450 (landscape, inside text container); no crop shapes.
R2: concept image 588x625 (0.94, near square) portrait column right of 504 text; wide band image 1440x960 (1.5) full-bleed with 480px high overflow-hidden frame (shows a 480 slice, img margin-top -200px parallax); product cards 427x576 (0.74, 3:4) photographic canvas cards with logo-image footer; story image 672x580 (1.16) centred; story thumbnails square, clip-path circle(75%) final state (circle(0%) start). Full-bleed strips of 4 photos at 1440 wide.

## (f) Decoration
R1: line-drawn box icons (SVG polylines, ~1.5px black strokes, 4 across, each ~130px) drawn on scroll; black highlight chip behind key numerals (padding ~0.1em 0.2em); vertical rotated caption on photo right edge; fixed circular "inquire" badge with text on a circle path (V - V and rotated words), 323px; underline on current nav item.
R2: small hollow circle (about 10px, 1px stroke) before section labels (Concept, Feature, Product Story); crosshair plus marks and corner brackets at 4 corners of the feature grid (1px #5D5D58 lines, about 40px arms); thin 1px hairline cards; round "+" 40px outline button on product cards bottom right; pill outline buttons 165x42 "Read more".

## (g) Motion
R1: Lenis smooth scroll (autoRaf, default lerp). Page fade-in 1s linear. KV: image layer opacity 0 -> 1 at 800ms (1s linear), logo glyphs translateY(7px) -> 0 at 1200ms (.5s, delay .5s, cubic-bezier(.175,.885,.32,2)). KV slider every 5s, crossfade opacity 1s linear, image blur(10px) -> blur(0) 1s ease. Line-draw icons: IntersectionObserver threshold 0.5, stroke-dashoffset animation, duration 1s x (path length/400), delay 0.2s per path minus 0.06s, cubic-bezier(.45,0,.55,1), once. Header hides/shows by scroll direction (scroll listener, class -fixed). Image hover scale 1.03-1.1, .5s ease-out.
R2: jQuery inview adds `.active`; `.js-scroll-fadein-item` opacity 0 + translateY(40px) -> 0, .5s cubic-bezier(.22,1,.36,1); feature items stagger delay .3s, +.1s each up to .8s (.7s duration); preview bars scaleX(0 -> 1) origin left 1.2s same easing, title delay .2s, desc .4s (opacity .7s); story circle image clip-path circle(0%) -> circle(75%) 2s cubic-bezier(.22,1,.36,1); fixed KV background opacity 0 -> 1 + blur(20px) -> 0 over 2s cubic-bezier(.2,.8,.2,1); band image parallax (img margin-top -200px inside 480px overflow-hidden frame, will-change transform, moves with scroll); hover transitions .3s cubic-bezier(.22,1,.36,1).
