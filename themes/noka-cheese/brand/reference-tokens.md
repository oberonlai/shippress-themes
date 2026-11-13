# Reference tokens (measured with getComputedStyle, 1440x900, desktop)
Source: https://cheesetart.com/ (cheese-confectionery brand site, S5-Style gallery). Measurements are values only; no assets, text or logos are copied.

## (a) Colour
| Role | Value | Area (first screen / page) |
|---|---|---|
| Ground (html background, transitions 1.2s between sections) | rgb(197,219,255) #C5DBFF | ~92% / ~70% |
| Text and rules | #FFFFFF (white on the tinted ground) | thin type |
| Paper band and pebble rim | warm off-white ~#FBF3E3 (sampled from screenshot) | ~0% / ~12% |
| White pill buttons, label colour lilac-blue (CSS var --color-lilac) | #FFFFFF with blue text | ~3% |
| Accent | cheese yellow in the photographs only | photo |
Saturation of the ground: HSV S = 23%. The first screen is almost one flat pale tint (saturated share well above our 30% limit if copied literally), so the transposed palette keeps the *relationship* (one pale tinted ground, white type, warm paper band, white pills) with a low-chroma willow instead of periwinkle.

## (b) Type
Zen Kaku Gothic New 400/500 (Japanese gothic) plus Typekit Latin sans for labels. Body 16.55px / lh 24.8, fw 500. H1 29.3px (visually hidden wordmark). H2 31px–41.4px, lh 1.12–1.5, fw 500, normal tracking. Lead paragraphs 18.6px / lh 37.2 (2.0). Small paragraphs 13.97px / lh 20.9. Link labels 20–22px. Sentence case, no uppercase body.

## (c) Spacing
Fixed outer margin 149px at 1440 (10.3vw); three dotted vertical guides at x=149, 720, 1290; text column x=794 width 447; content block 1142 wide; section padding top ~250px, huge empty ground between blocks (200–300px). Grid unit ~49.6px (var --grid), root font-size scales with the viewport (16.55px at 1440).

## (d) Radius, border, shadow
Pills radius = half of 49.6 (24.8px) with 2px white border; vertical "Buy & Order" pill 49.6 x 175.9. Product thumbnails square corners. Pebble photos: organic clip, no shadow. Dotted 1px white guide lines. No shadows.

## (e) Imagery — IMAGERY: photo
Real, studio-lit product photography, high-key, soft shadow, cream sculptural props (rounded plaster forms) under the product. Pebble photo: ~535x540 (about 37% of width), asymmetric rounded mask with a second cream-coloured pebble offset behind it, rim visible as a 10–14px crescent on the lower right. Product grid: 4 square thumbs 1:1, 2 per row, ~85px apart, caption under (small type, price). Arch window: 3:2-ish photo clipped to a tall arch at the bottom of the page. Photos sit in the left or right 4/12 of the guides, text in the opposite 4/12.

## (f) Decoration
Dotted guides (1px dotted, white, 3 columns, full page height). Fixed double-line hamburger glyph (50x14, two 1px white lines, top-left, x=149). Outline line-drawing logo glyph (white 2px stroke) on a pale arch. Small "Commitment / Identity / Cheese" English eyebrow labels 12–13px above big Japanese headings. Round-arrow pills ("more") full-width white pill with centred arrow.

## (g) Motion
GSAP + ScrollTrigger + Lenis smooth scroll (found in core.min.js). Text blocks `.e-step`: opacity 0 + translate, revealed line by line as they enter, stagger about 0.1s per line (will-change opacity, transform). Hero: blur-to-focus intro on a webGL canvas, then the logo glyph resolves. `html` background-color transition 1.2s per section. Links use a magnetic "attract" hover (3D tilt layer, perspective 87rem). Pebble photo masks morph between shapes as the next product comes in (observed between ct-s4500 and ct-s6300 screenshots).
