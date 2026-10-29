# Reference tokens — YOIKU (https://yoiku-salon.com/, S5-Style #8997), measured with getComputedStyle at 1440×900
Values only; no assets, copy or logo taken.
## (a) Colour
- Base/ground `#070707` (≈62% of first screen is photo, rest ground on lower pages ~100%); text `#FFFFFF`; accent `#FAB128` (yellow; giant headline, "VIEW MORE" link, ~10.6% saturated share of first screen, all from the headline); logo hover/tint blue `#0A4FE0`-ish and mauve flash on last letter (small, <1%).
- Ratio on lower pages: ground 90 / white text 8 / accent 2. Photos carry the colour (pastel blue, sage, warm skin).
## (b) Type
- Display: Spartan (geometric sans) 900, 207px (20.7rem) lh .9 (186px), no tracking, uppercase, accent yellow, 2 lines, clipped by bottom of viewport. Figcaption "What is YOIKU?" Spartan 800 90px lh 1 ls 6px white, overlaps photo bottom (margin-top −120px).
- H2 section: M PLUS 1p 800 60px lh 84px (1.4), centred; eyebrow Spartan 800 14px ls 1px above it. Section titles NEWS/BLOG Spartan 800 60px lh 90px ls 2px.
- Body M PLUS 1p 400 16px lh 32px (2.0), centred. Link Spartan 800 18px accent, arrow icon.
## (c) Spacing
- Concept block padding 150px 0; container 1100px (x 170–1270 at 1440); title→text 30px; text→image 80px; section gaps ≈160px; card list gutter 30px sides.
## (d) Radius / border / shadow
- All 0 radius, no borders, no shadows. Hamburger bars 40×2px, radius 9999, white, transition .5s.
## (e) Imagery
- IMAGERY = photo. Editorial fashion/portrait photography: soft daylight, muted pastel-neutral palette, slight motion blur and natural grain, faces cropped at edges, plain wall backdrops.
- Hero panels: 600×900 (2:3 portrait), no radius, 3 visible across 1440 (≈41.7% width each; first one cut by left edge), flush edge-to-edge, no gaps. Concept photo 1100×704 (≈16:10), no radius, centred at 76% width. News/blog tiles 480×480 square, bg cover, title inside.
- No masks/clip-path; overlap = headline over photo bottom edge (figcaption −120px).
## (f) Decoration
- Hamburger 3 bars + instagram glyph stacked top-right (x 1350–1390, y 39 and 97). Logo wordmark top-left (x 50, y 30), white with one tinted letter. Arrow icon after link ~26px. No lines/dots/numbers.
## (g) Motion
- Hero: two flex tracks of 7 panels each, CSS `ticker` translateX linear infinite 200s (≈42px/s measured: −446.6→−531.3px in 2s) leftward; headline wrapper translateY(100%) with margin-top −30rem so giant type sits on the bottom edge.
- Loader: lottie "bodymovin" overlay at load.
- Reveal: WOW.js + animate.css `fadeInUp`, duration 1s, delay 0, easing `ease`, offset 200px (fires when element top is 200px inside viewport bottom), distance ≈20–30px up (12.6px at opacity .37 mid-run), fade 0→1. Applied to titles, text, figure, buttons, news/blog items, reserve block — not staggered (each triggers on own entry).
- Hover: link colour/opacity transition .3s, tile scale(1.1) on image.
- Vars: `--cubic: cubic-bezier(.13,1.05,.96,1)`, `--cubicHigh: cubic-bezier(.18,1.07,.55,1.07)` used on hover colour/opacity transitions.
