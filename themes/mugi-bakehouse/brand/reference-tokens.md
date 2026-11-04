# Reference tokens (measured with getComputedStyle at 1440x900, 2026-11-04)
Primary reference: https://noraisinsandwich.com/ (S5-Style, Food & Beverage). Screenshots: ref/nora-*.png, ref/scroll-nora-*.png.

## (a) Colour
| Role | Hex | Area |
|---|---|---|
| Page ground (warm off-white) | #F9F6F2 | ~55% of the page |
| Text ink | #1A1A1A | text |
| Footer band | #E7E5DD | ~5% |
| First-screen photo: beige concrete wall + white table | ~#D8CFB4 / #FAFAF8 | ~100% of first screen, desaturated |
| Accents: pink marker highlight, mint "on sale" chip | ~#F9D4D8 / #BFEBD9 | tiny chips only |
First-screen saturated share measured on the screenshot: ~3%.

## (b) Type
- Body: Japanese gothic (a-otf-gothic), 18px, weight 400, line-height ~1.8 in paragraphs, letter-spacing 0.08em (1.44px).
- Headings/prices: roc-grotesk, h2 48px / 500 / ls 0.02em, h3 25px / lh 31px / 500 / ls 1px, uppercase Latin.
- Small captions 11-12px sub-labels under product names, tracked.
- Price: ~28px 500 with a tiny "tax in" 11px suffix.

## (c) Spacing
- Product grid: 2-up (582px columns, 72px gap) then 4-up (254px columns, 73px gap); container ~1236px with 102px side margins.
- ~100px between product groups; section head: 28px title + 11px sub-label.

## (d) Radius, borders, shadow
- Radius 0 on photos and cards; no shadow.
- Each product ends in a single slightly slanted 1px ink rule (not perfectly horizontal) under the price row.
- Capsule tabs: 1px ink outline, fully rounded (pill), 28x68px, vertical stacked glyphs.

## (e) Imagery
IMAGERY = photo. Soft daylight still-life photography, high-key, desaturated beige/white, slight film softness, props (plates, cups, small ceramic animals) on a white table in front of a pale concrete wall. Product shots: top-down on pale grey ground, square-ish 1:1 to 4:5 crops, radius 0. First screen is one full-bleed 1.6:1 photo (2880x2200) covering 100% width.

## (f) Decoration
- Stacked wordmark centred at upper third: small woven-pattern emblem (60px) above a three-line title, middle line outlined in gold.
- Half-ring edge tabs at left and right viewport edge, vertically centred (80px tall, 1px ink outline, letters stacked vertically: "NO" / "YES").
- Two outline capsule tabs fixed at bottom-left and bottom-right (vertical Japanese labels).
- Small dot menu button top-left (6px ring), outline bag icon top-right.
- Marker highlight (pink/mint underlay) on date and status chips.

## (g) Motion
- Reveal: `.js_anime--showUp` fade-up on enter (class `is_onTop` / `is_imgLoaded` toggled by script, no GSAP/Lenis/AOS detected; window globals empty).
- Parallax: `.js_parallax` wrapper with `.js_parallax_inner` translating on Y (measured translateY 90px at scrollY 700, none at 0).
- Home scroll container `.js_homeScroll` with dots indicator.
