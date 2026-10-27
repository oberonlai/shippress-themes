# reference-tokens.md — main reference ampuleshot.jp (measured 2026-10-27, Chrome 1440×900, getComputedStyle; numbers only, no assets copied)
Product (skin-care ampoule series) landing page, Next.js + Splide slider, no GSAP/ScrollTrigger/Lenis globals found.

## (a) Colour (root vars + first screen)
| role | hex | where | area (first screen) |
|---|---|---|---|
| base / header | `#FFFFFF` | header band y0–237 (26% of 900) | 26% |
| page ground | `#F1F1F1` + 45px grid lines `#FFFFFF`-ish | rail/section grounds | – |
| text / rules | `#000000` | all text, 1px rules, capsule borders | – |
| photo ground (series 03) | lavender `#C490F8` family, CG render | hero image | 74% (of which saturated S>.35 ≈ 23.7% of the whole screen) |
| series accents | yellow `#FFE500`, pink `#FF758D`, purple `#C490F8`, gray `#BABABA` | capsule cards, series headings | one per series |
Ratio idea: white+grey ground ~55%, photo ~40%, black line/type ~5%, one saturated capsule/badge ~4%.
## (b) Type
- Latin: tt-commons-pro 600/700, line-height 1.0, ls normal; Japanese Noto Sans JP 400–700.
- Header wordmark "AMPULE SHOT" ≈ 130px / lh .9 uppercase black, "SERIES" 52px; series heading 86.6px (6.0vw) 600 lh 1; capsule title 45px 600 lh 45; vertical section label 18px (max(10px,1.25vw)) 700; JA lead 36px/54 400 on white marker blocks; JA note 22.5/33.75 500; card JA name 20.25/30.4 700; card body 16.9/28.1 500; check list 16.9/25.3 700. Uppercase for Latin headings.
## (c) Spacing
- Left rail 80px wide with 1px black right rule, vertical (writing-mode) section label at x41; sections full-bleed, no container (content x 146–1316 of 1440). Header 237 tall, padding 11/11/29px. Concept 892 tall, lineup 1230, product KV 6889 (series stacked ≈ 2900 each). Capsule card 1316×228 at x61, padding 17/90/19/118.
## (d) Radius / border / shadow
- Capsule cards and badge radius 9999px (full pill), 1px solid #000; menu pill 83×152 radius full, white, vertical text; no shadows; rules 1px #000 between sections.
## (e) Imagery
- **IMAGERY: photo** (CG/studio product renders — photoreal bottle/tube, glass beads, liquid swirl; not illustration). Style: high-gloss studio macro, single-colour saturated liquid ground, translucent droplets/beads with soft refraction, soft key light, shallow DOF, product label legible but tiny. Hero 1440×811 full-bleed edge-to-edge (no radius, no clip), sits directly under the white header band; capsule cards carry small cut-out product pair (≈ 170px wide) inside the pill; series KV 1440×~890 full-bleed with heading overlaid top-left (white), products centre-right, droplets right.
## (f) Decoration
- Black "+" crosshair marks (≈20px, 1.5px) at corners of the headline block (4 per block, at 656×213 spacing) and between check list and CTA in cards; check-circle icons (30px circle + tick, black); round black CTA 78px with white chevron; white text marker blocks (white fill behind each line of JA lead); vertical rail labels CONCEPT / LINEUP / PRODUCTS.
## (g) Motion
- Highlight/heading wipe: `clip-path` polygon/inset left→right, ≈620ms, eased in-out (samples 0→21→49→75→92→99.8→100% at 100ms steps), starts when the block enters the viewport, JS sets a CSS variable (`--marker-progress` / `--clip-path`), no displacement.
- Hero slider (Splide): each slide image `transition: 10s ease-out`, active slide `scale(1.1)` settling toward 1 (slow Ken Burns zoom-out), crossfade between slides.
- Section labels: vertical clip reveal (polygon height 0→100%) on enter. Menu pill: fixed right edge, `background-color .25s` hover only. No parallax, no counters, no marquee observed.
