# reference-tokens — https://yokanka.com/ (S5-Style listed; measured 2026-10-27, Chromium 1440×900, getComputedStyle)
Only values and descriptions; no assets, text or logo copied.

## (a) Colour (first screen 1440×900)
| Role | Hex | Area |
|---|---|---|
| Ground (all light sections) | `#ECECEA` | ~80% of first screen, ~75% of page |
| Ink (text, hairlines, pills) | `#000000` | <3% |
| Dark band (event gallery) | `#000000` | one band, 1170px tall (~9% of page) |
| Accent | none designed; colour comes only from the product photos (deep red-brown, amber, dark chocolate) | saturated pixels ≈9.6% of first screen |
| Hairline / border | `rgba(0,0,0,.15)` 1px | pills, share buttons |
Relationship: one pale warm-grey ground, black type, colour only inside photographs; the dark band is the single inverted moment.

## (b) Type
- Families: Marcellus (Latin display, 400), Zen Old Mincho (JP body/titles, 400), Inter 400/500 (numbers 14px ls .56px).
- Hero line 27.36px / lh 45.1 / ls 1.64px; NEWS 43.2px lh 56 ls 4.3px; "WHAT IS YO KAN KA ?" 72px lh 86.4 ls 2.88px; Features / Collection / Shops H2 92px lh ~92–97 ls .92px; feature titles 27px lh 39 ls 1.35px; body 16px lh 28.8; nav 13px ls 2px; buttons 14px ls 2px (11px ls 2.2px small); weight 400 everywhere; no uppercase transform (caps typed).
## (c) Spacing
Container 1280 (news list 1190); section padding: news 160/60, about 300/0 (scenes 230/100, body 400/240), features 0/320, collection 120/120, shops 120/120. Sticky photo column = 50% of viewport (713/1425), full 900 height.
## (d) Shape
Radius 0 on all photos; pills (nav buttons) radius 50px, 1px `rgba(0,0,0,.15)`, padding 8×16–22; share buttons 50% circles; no shadows; no filters.
## (e) Imagery
IMAGERY = **photo**. Hero: five product slabs photographed top-light on seamless pale-grey ground, each 460×219 (2.10:1), soft contact shadow baked in; about-section portraits 713×900 (0.79:1), moody saturated blue / brown / purple / green grounds with a person eating; event gallery 3:4 portrait frames in black band; thumbs 145×76 (1.91:1). No radius, no masks except the scroll arch (radial mask) on about portraits.
## (f) Decoration
Vertical side badge (20px wide) at left of first screen with scrolling Japanese caption + dates (18s linear marquee); small numerals "(01)" Inter 14px ahead of feature titles; hairline rules between feature rows; giant "YO KAN KA" wordmark marquee with product-photo pills (rounded-rect, grey) between words, bottom of page.
## (g) Motion
Page-wide GSAP ScrollTrigger. Generic reveal: opacity 0→1 and translate3d y 28px→0, 2.3s `power1.out`, start `top 88%`, once. Heading char-mask: each char in an overflow-hidden span, translateY 110%→0 + opacity, transition .6s `cubic-bezier(.22,1,.36,1)`, driven by scroll progress. About portraits: radial arch mask `--arch-h` 175%→1200%, `--arch-v` 230%→1500% plus scale 1.06→1 over 1000px scroll (scrub). Gallery scale 1.3→1 with scroll; footer wordmark opacity 0→1 and y 120px→0 in last 90% vh. Intro: chars fade stagger .1s, dur .5s `power2.out`, blur 7→0.
