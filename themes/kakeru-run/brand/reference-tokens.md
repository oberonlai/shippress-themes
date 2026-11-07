# Reference tokens (measured with getComputedStyle, Playwright 1440x900, 2026-11-07). Values only, nothing copied.
Main reference: https://4kake.com/ (objects shop, Shopify, hand-built home). Secondary (colour only): https://amprem.jp/

## (a) Colour (first screen 1440x900, 4kake)
- Ground white #FFFFFF ~34% of first screen + near-white photo ground; stage photo grey #B4B4BA ~45%; ink #111111 (lines, text, nav) ~8%.
- Product tiles below the fold sit on seamless paper in plum #8A3F5C, olive #4A4A32, ink navy #343C55, kraft #C49A72, powder blue #C9D2E0.
- Accent pills (not in first screen): yellow #FFFF00, red #FF2E00, green #00E244 (each ≤4% of any screen). Saturated share: first screen 0.5%, scrolled 8-13%.
- Text: rgba(18,18,18,.75) body, #111 nav and labels. Secondary (Amprem): deep brown ground #4B3A2C to #6F4A28, text off-white, one tan #9A8068.
## (b) Type
- Family Helvetica Neue / Arial + Hiragino / Noto Sans JP; headings Inter 700-800. Body 16 / 28.8 px (1.8), letter-spacing .6px.
- Object name 26.3 px / 700 / ls 1.05px; label "OBJECT 03" 12.4 px / 700 / ls 2.2px caps; nav 16.8 px / 700 / ls .6px; pill 13.5 px / 700 / ls 2.7px caps. H1 40 / 800.
## (c) Spacing
- Rail margin --m = max(20px, 8.9vw) = 128 px each side at 1440; content 1184 px = 3 equal cells of 395 px (6-col grid, cells span 2). Header row 125-129 px. Empty "breathing" cell rows 129 px between photo rows. Cell padding max(10px,1.1vw).
## (d) Radius / borders / shadow
- Radius 0 on everything except the pill (999px). Hairlines .5px (1px on phones) #111. Outline 1.5px #111 on info cells. No shadows.
## (e) Imagery: IMAGERY = photo
- Style: high-key still-life product photography, top-down or 3/4, one object per frame on seamless coloured or grey paper, soft even daylight, no people in most tiles, no text in the photo.
- Hero stage 1184x666 (1.78:1), r0, fills its 6-col cell exactly, slider with 4 dots below. Square tiles 1:1 395 px (3-up). Wide 3:2 tiles 592 px (2-up) or 789 px (2/3 width) beside a text cell. 700:440 close-up row. Photos are never masked; the cell hairline is the frame. Hover swaps in an alt photo (opacity).
## (f) Decoration
- Hero side rails turn into long diagonal hairlines that close a hexagon-like outline around the stage; giant outline brand glyph (about 400 px) crosses header cell 2 into the stage top; left rail holds the brand word stacked as rotated single letters; a red cell with one diagonal slash in the rail beside an info row; dot pager 4 dots, 7 px.
## (g) Motion
- Hairlines draw in: transform scaleX/scaleY 0 to 1, .9 s cubic-bezier(.77,0,.18,1), delays .1 s / .15 s / per-cell --d; IO threshold .05, rootMargin 0 0 -10% 0.
- Cell contents: opacity + translateY 24 px to 0, .9 s cubic-bezier(.22,1,.36,1), stagger --dc.
- Intro: full-screen white curtain with logo, curtain fade .45 s after .75 s, logo scale 1 s e1. Crosshair cursor (1 px lines, 7 px dot, mix-blend difference), desktop only. Nav text roll .55 s e1 on hover. No parallax, no libraries.
