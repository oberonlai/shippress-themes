# Reference tokens — https://p-lic.jp/ (S5-Style, nursery; measured 2026-10-27, 1440×900, getComputedStyle + CSS/JS read)
Only numbers and descriptions; no assets, text or logo copied. Screens: ref/plic-first.png, plic-full.png, plic-life.png, scroll-plic-before/after.png.

## (a) Colour (first screen = 1440×900; share by pixel census)
| role | hex | share / use |
|---|---|---|
| base | #FFFFFF page ground (header solid white; light grey/white wash sections ≈ #F4F4F4) | ≈ 46% of first screen is white/near-white |
| text | #000000 (642 elements), body 15px | all copy |
| accent A (CTA, scribbles) | yellow #EFC926 | pill buttons, crayon underline, tab, ≈ 1–2% |
| accent B | blue #1E7AC6 (side tab), #0062AB (hover/links) | fixed right tab ≈ 1.5% |
| accent C | green #62AF5E (side tab, dots), teal #02B990 | ≈ 1% |
| accent D | orange #F56300 (play-arrow crayon shape), pink #E8478B (round badge) | < 1% each |
| photos | warm wood #C9A57B, floor blue/yellow mats | ≈ 45% (documentary photos) |
Saturated-pixel share (S>0.55, V>0.45) of first screen: **12.1%**. Rule of the reference: colour lives in small scribble shapes and tabs; the large areas are white and photographs.

## (b) Type
- Family: "Zen Kaku Gothic Antique", sans-serif (everything). Hero headline is a hand-written/brush-like SVG (mv-txt.svg), not live text.
- Body 15px / 24px (1.6), weight 400, letter-spacing 0.9px (0.06em), no case change. Lead paragraph 17px / 34px (2.0).
- H2 (section heading) 28px / 50.4px, weight 700, ls 0.9px; vertical headings (tategaki) 28–36px in a 135px-wide yellow scalloped frame.
- Nav labels ≈ 14px 700, 0.06em, small coloured icon above each (apple, sprout, blocks, pea, arch, stars).
## (c) Spacing
- Header 120px tall, white, logo left x 62, 6 nav items with icon, "recruitment" yellow tab top-right 110×122.
- Hero 100vh. Section margins: about 177 top/95 bottom, pagelink 42/83 + 125, search 76/236, life 0/80+80, news 0/144, list 123 top. Container ≈ 1200 (x 120–1320); about row: text column 480 (x 120) + paragraph 709 (x 611), gap ≈ 31.
## (d) Radius / border / shadow
- Photos in the "life" carousel: radius ≈ 40px, 484×303 (≈ 1.6:1), 2 slides visible, gap 4%, right padding 7.5vw.
- Buttons: pill, height 70, radius 50px, yellow #EFC926 fill, black 700 label, white circle with arrow right, shadow 3px 3px 0 rgba(162,162,162,.16).
- No borders; no blur shadows.
## (e) Imagery
- **IMAGERY = photo** (documentary, candid, children and carers at floor level, bright natural window light, wood walls, colourful play mats; faces large; no staged smiles to camera). Decorative crayon marks (yellow scribble loops, blue dot grid, orange triangle, green/pink kite, scalloped yellow brackets) are small flat drawn marks over/near photos — decoration only, not the main imagery.
- Hero: two photos. Main: 0–935px wide × ≈ 580px tall (≈ 1.6:1) at left edge bleed, top y 170; its edges are an irregular polygon (torn paper: top edge rises to the right, right edge slants, bottom edge is a shallow zigzag) — baked into the shape, no radius. Second photo 440 × 300 at right (x 1000–1440, y 445–745), same irregular edge, overlapping the first at its lower-left corner by ≈ 60px, sitting 270px lower. Share of first screen: photos ≈ 55% of the width.
- About block: 2–3 overlapping photos (≈ 280 × 200, 360 × 270, 200 × 150) clustered left at ≈ 20% width, offset ±40px, with a crayon grid and green dots, each with irregular-edge crop.
- "Life" carousel: rounded-40 rectangles (see d).
## (f) Decoration
- Yellow scalloped bracket above and below vertical headings (135 × 28), crayon scribble loop 300 × 60 at the photo top, blue 4×5 dot grid 90 × 80, orange play-triangle 55 × 90, kite (green top/pink bottom) 100 × 140 hanging over the carousel, round pink badge Ø 160 with dashed ring bottom-left of hero, "2027.4 OPEN" tilted (−8°) label on a card with 2px light-yellow outline, radius 26. Section dividers: pale grey scalloped circles (arches) behind "pagelink" row.
- Fixed right-edge tabs: 82×176 blue (#1E7AC6) and green (#02B990) with vertical white label, radius 6 on the left side.
## (g) Motion (no scroll-driven effects found)
- Hero: slick fade slider, speed 2000ms, autoplay 4000ms, 4 slides, dots bottom-centre.
- Life carousel: Splide loop, speed 1500ms, interval 3000ms, perPage 2 (1 under 767).
- Badge "fuwafuwa": translateY 0 → −10px → 0, 2s linear infinite.
- Hover: pagelink icons rotate 5°, 0.4s cubic-bezier(.19,1,.22,1); hero banner translateY −8px 0.4s.
- Smooth anchor scroll 500ms swing (jQuery). Libraries: jQuery, slick, Splide, lazysizes. No GSAP/ScrollTrigger/IntersectionObserver.
