# Reference tokens — https://207-inc.com/ (S5-Style, category IT / Computers / Technology; logistics tech). Measured 2026-10-27, 1440×900, getComputedStyle + pixel sampling. Values only; no assets copied.

## (a) Colour (first screen, pixel share)
| role | hex | share |
|---|---|---|
| base (page ground) | #F8F8F8 | 42% (+ #FFFFFF 5.7%) |
| text / ink | #222222 (nav/headings), #1A1A1A | ~2.7% |
| button navy | #24274A (pill buttons, bg) | small |
| flat blue band (company section) | #307ADD | full-bleed band, ~1600px tall, text white |
| accent (illustration only) | lavender #D9B3FF/#B68BFF, cyan #31BAFF/#69D9FF/#B3E5FF, blue #3173FF | ≈8% total |
| photo veil | black ~55% over photo, text #FFFFFF | vision sections |
Saturated share of first screen (S>0.45, V>0.3): ≈14%. Logo mark purple #7B5EA7-ish.
Relationship to keep: near-white ground + near-black ink + ONE navy for buttons + ONE big flat blue band later; saturated colour confined to a small area of the first screen.

## (b) Type
- Families: "Noto Sans JP" (JP headings/body, 300/400/700), "Hanken Grotesk" (Latin small caption 300).
- H1 72px (4.5rem) 700, lh 100.8px (1.4), letter-spacing 8.64px (0.12em); colour #222.
- Vision H2 label 21px 700 lh 1.4 ls 2.52px (0.12em), white. Vision H3 56px 700 lh 78.4px ls 4.48px (0.08em), white.
- Section H2 40px 700 lh 56px ls 6.4px (0.16em). Product H3 14px 700 ls 1.68px. Timeline H3 28px.
- Body 16px/400 lh 32px (2.0) ls 1.92px (0.12em); lead 18px/300 lh 45px (2.5) ls 2.16px. Caption 13px/300 lh 1.5 ls 0.52px (0.04em).
- Nav 16px/300 lh 1.4 ls 1.92px, #222; no uppercase transform anywhere (text-transform none). English tags "COMPANY" 16px/900 ls 1.28px.

## (c) Spacing
- Container: content ~1200–1260px centred; hero text at x=80. Header logo at x≈48,y≈28, ~135×140px; nav right, gaps ~40px.
- Section padding: business 136 top / 184 bottom; company 136/64; news 120; awards 160 top.
- Vision stage: 100vh pinned; text block padding 88px 48px; text column from x≈404 to ≈1250; rail label at x=188.
- Overview table: label col ~120px at x≈1100/2 split; row line-height 25.6px, 1px hairline row separators (white 40%).

## (d) Radius / border / shadow
- Pill buttons: radius 20px, height 40px, navy #24274A, white text, with a trailing dot ●.
- Device cards radius 24px, shadow 5px 5px 15px rgba(0,0,0,.25).
- Rail: 1px dotted white vertical line at x=366 from y=110 to bottom with a 10px hollow circle at the label height. Rows: 1px hairlines. No heavy borders.

## (e) Imagery
- IMAGERY = photo (decision: photo positions outnumber illustration — 3 full-bleed vision photos, history-media photo, business ellipse photo vs. one illustrated hero). Hero KV itself is illustration.
- Hero illustration style (described only): isometric flat-vector city blocks, thick near-black #222 outlines and solid shadow faces, flat fills in lavender/cyan/blue, white window grids, stair and road ribbons, tiny drones/robots/ships; no gradients, no texture; high contrast; pale neutral ground.
- Photos: documentary-feeling warehouse/dock/street scenes, people in black polos holding a tablet, 16:10 full-bleed, dimmed with a ~55% black overlay, slight 1.15→1 scale-in. Ellipse/rounded-blob crop (about 70% × 4:3, one edge bleeding off page) beside text in the business section; device screenshots in 24px rounded cards (198×302, overlapping with −79px step, 5° fan).
- Placement: vision photos 100% width/100vh; ellipse photo ~45% width, left, bleeding left edge; text column right at 40%.

## (f) Decoration
- Dotted vertical rail 1px, hollow circle node 10px; "Scroll Down" mouse pill (28px tall, 1px white outline, 13px text) top-right; "Page Top" vertical 1px line + 8px dot + 13px text at right edge, bottom 100px; hairline white progress bar bottom-left (≈105px growing). Chevron/arrow watermark pattern on blue band (very low contrast). Section tag small bold English label above JP H2 (e.g. BUSINESS 10px purple).

## (g) Motion
- Libraries: GSAP 3.15 + ScrollTrigger + SplitType (CDN), Studio (STUDIO) base.
- Hero: drones float translateY ±10px, 3.6s ease-in-out infinite; robots walk translate ±8.7px/±5px 6s linear infinite (CSS keyframes).
- Vision: ScrollTrigger pin (sticky 100vh, wrapper height = 100vh + total scroll), scrub 0.5, three hold points; bg crossfade opacity 0.6s power2.inOut; bg scale 1.15→1 2.4s power3.out; text reveal per character via SplitType, stagger 0.02 (p) / 0.05 (h3); indicator fade 0.5s power2.out/in.
- Page Top fades in after one viewport (0.4s power2.out), hides at footer (0.3s).
