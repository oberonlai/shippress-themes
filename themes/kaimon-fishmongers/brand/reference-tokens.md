# Reference tokens — measured on the primary reference (https://abemamoru-shouten.com/, a Shiogama fish-products shop, 1440x900 desktop, headless Chromium, computed styles)

Screens: `ref/abemamoru-first.png` (first screen), `ref/scroll-abemamoru-{0,900,1800,2700,3600,5400,7200}.png`, `ref/abemamoru-mobile.png`.

## (a) Colour
| Role | Hex | Approx. area |
|---|---|---|
| Ground (speckled paper, SVG dot grain on body) | #F2F2F2 | ~70% of first screen |
| Ink (text, brush fish, hairlines) | #000000 | ~8% |
| Photo band (dark walnut table + plum plate, full bleed) | ~#2B1D17 | ~20% of 2nd screen |
| Accent (seal logo, circle arrows, link underline) | #AA0813 | ~1% |
| Mid grey (secondary text, nav utility) | #818283 / #696A6B | ~1% |
| Footer wash | pale aqua SVG ground | footer only |
First-screen saturated share: about 1% (the red seal only). Everything else is neutral.

## (b) Type
- Families: Shippori Mincho (headings, nav; weight 600) and Shippori Antique (body; 400), Yu Mincho fallback. Serif, Japanese. Our theme uses sans (Onest / Albert Sans); we keep the *scale and rhythm*, not the face.
- Root 10.29px at 1440 (fluid). H2 33.9px / lh 1.05 / ls 0.04em; recipe H3 20.6px / 600 / lh 1.5 / ls 0.04em; body 16.5px / lh 2.0; nav 14.4px / 600 / ls 0.04em; small caption 13.4px / lh 1.75; mini latin address 9–10px caps, tracked.
- Long copy is set in vertical columns (writing-mode vertical-rl) in Japanese; section titles at the right edge are vertical-rl, 34px, ls 0.04em.

## (c) Spacing
- Left gutter 60px (fixed seal logo, 92x156) ; content starts at x=292 (20% of width); right gutter ~200px (vertical titles).
- Section padding: concept 89px top; news 123px top / 230px sides; lineup section 1566px tall, recipe 697px, secret 635px, wave 165px.
- Product rows: thumb 116px square, row pitch ~810px with big 630x979 portrait on the right (x=657..1287).

## (d) Corners, borders, shadows
- Radius 0 everywhere (photos square). Hairline 1px #BDBDBD rules with a small + tick at the left end under links. No shadows.
- Circle arrow: 28px outline circle, 1px #AA0813, ">" inside.

## (e) Imagery
- IMAGERY: photo (product, dish and ingredient photographs, dark moody food-table light, grain-free but soft). The first screen carries large black brush-ink fish drawings as a decorative motif only; every content block is a photograph. Counting image positions the page is photo-led, so IMAGERY is `photo` and the ink-fish motif is translated into photographs (see stage-a.md Key visual concept).
- Hero photo: 1440x1120 inside a 900px window, parallax (translateY -112px at scroll 0 to +56px at ~1200px), full bleed, dark.
- Product feature photos 630x979 (0.64:1, portrait), small thumbs 116x116 and 202x141 (1.43:1) stacked flush to the right viewport edge with 0 gap (141px pitch); wide pair 562x376 (1.5:1), one flush left, one flush right, cross-fading.
- Full-bleed footer photo 1440x756 with parallax (translateY -113px).

## (f) Decoration
- Brush-ink fish (five, ~230x480, tall, hanging nose-down from the top edge, three of them cut by the viewport edge) at different heights; a boxed vertical title plate (173x346, 1px ink frame) top-right.
- Three thin sine-wave hairlines (grey 1px, ~1150px wide, 165px tall band) as a section divider.
- White tab with vertical heading hanging off the dark photo's lower edge, torn-paper top edge of the pale band.
- Fixed corner furniture: red seal logo top-left; text stack "Cart (0) / My page / Contact" bottom-left, grey 14px.

## (g) Motion
- Nuxt/Vue, no GSAP/AOS/Lenis. Scroll handler writes translateY: hero photo ~0.14x scroll (clamped), fish layers faster (mackerel to -336px by 700px of scroll, then clamped), footer photo ~0.15x.
- Fish drop-in on load; section titles scaleY 0.92 reveal; recipe thumbs `transform .4s ease-in-out` on hover; secret images cross-fade (opacity, slideshow).
