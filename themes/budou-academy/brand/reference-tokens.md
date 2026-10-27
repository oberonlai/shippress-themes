# Reference tokens — daiichisemi.net(Daiichi Seminar, S5-Style listed, cram school)
Measured 2026-10-27, Playwright headless Chromium 1440×900 (getComputedStyle + pixel sampling). Values only — no assets, text or logo copied.

## (a) Colour
| Role | Hex | Share (first screen / page) | Where |
|---|---|---|---|
| Ink / text | `#333333` (rgb 51,51,51) | text, dark pill buttons | body, primary button |
| Base | `#FFFFFF`, warm panel `#F3EEE6` / `#F3EFE6` | ~60% | header pill, grade section (radius 45), secondary buttons |
| Main (saturated) | gradient `#F86F0E → #FFD649` (to right, text) / `#F09E2C → #FFD649` (to top, bands); band solid `#FFA20F`, `#F9BA39` | headline text ≈ 6%; bands ≈ 25% of page | hero headline, About title, "strength" bands |
| Sub (course tabs / CTA tiles) | `#F6A700`, `#EF7C00`, `#E85D27`, green `#13884D` | header CTA ≈ 3% | 3 header CTA tiles, 3 course tab underlines |
| Accent | `#13884D` | <1% | high-school tab line |
Saturated share of first screen (S>0.5 sampled): **9.9%** (photos carry the rest). Reference relationship = warm saturated gradient used for type and a few bands, everything else white/warm-grey + photos.

## (b) Type
Family `"Zen Kaku Gothic New", sans-serif` (JA rounded-gothic). Body 14.4px (0.9rem) / 500 / lh 27px (1.875) / ls normal. H2 display (About) 81px (5.06rem) / 500 / lh 151.9px (1.875) / gradient fill. Hero headline ≈ 190px glyph height (≈ 12rem, estimated from screenshot), 700–800, gradient orange, italic-slanted, crosses the photo seam. Strength-band H2 (white) ≈ 33px 700; sub-heading 27px/700 (lh 1.875). Nav 14.4px/500. No uppercase.

## (c) Spacing
Container 1260px (strength rows x 90–1350), narrower text column 1044 (x 198–1242). Section padding 90px (grade), 108px (flow), about padding-bottom 157.5px. Two-col text split at x≈720 (50/50). Row gap ≈ 125–130px between strength sections.

## (d) Radius, border, shadow
Hero photo tiles radius **54px**; strength photos 36px; grade section 45px; white floating header pill radius ≈ 24px (visual estimate, not measured; bottom corners only); buttons 5.4px (secondary) / 9px (primary dark, 63px high, padding 0 27px). Borders none; header tabs have a 3px coloured underline. Shadow: header pill soft (0 4px 20px rgba(0,0,0,.08) est.).

## (e) Imagery
**IMAGERY: photo.** Real documentary-bright photographs of students and teachers, soft natural window light, shallow depth of field, close crops (faces, hands, notebooks), warm skin tones, high-key. Aspect ratios: hero tiles ≈ 1:1 (702×702) and tall 3:4; strength photos 4:3 (720×540); small supporting photos 4:5 / 3:2 (194–420 wide) floating between text. Radius 36–54px, no clip-path, no mask. Placement: hero = three tiles in an interlocking grid (left column two tiles, right one tall tile, ≈ 49% / 49% of width) with an extra sliver tile at far right edge; About = scattered small photos around the heading (≈ 15–30% width each) at varied heights; strength = one 720px photo (50% of container) alternating right/left, overlapping the colour band edge by ~40px (photo top 40px below band top, bleeds right).

## (f) Decoration
Large translucent circle arcs in the band (Ø ≈ 700, tone-on-tone lighter orange, estimated from screenshot) at left; dot bullet (Ø 8px, orange) before English labels "About"; section numbers in label text ("features 01"); band shape has one large rounded corner (top-right ≈ 90px radius). Dark pill with ► arrow for primary CTA; round back-to-top Ø 44px white at bottom right.

## (g) Motion
- Content `.u-fadeup` (+ `.js-anime`): opacity 0→1 and translateY 45px→0, transition 0.4s `cubic-bezier(0.25, 1, 0.5, 1)`, delay 0, triggered when the element enters the viewport (JS adds a class; no GSAP).
- Photos `.js-img`/`PICTURE`: continuous parallax translateY across scroll, ≈ −300…−500px over a 900px scroll window on hero/About tiles, ≈ 0…144px in the strength sections (custom home/index.js scroll handler).
- Hero: vertical Splide sliders (class `js-sliderVertical`, loop) — each photo column drifts vertically in opposite directions; search bar slides in from the left (−346px → 0) and fades.
- Header: white floating pill, three coloured CTA tiles; tab underline colours per course.
- Intro: ~8s opening — a single plain line ("(ref tagline)") shows centred, then the collage replaces it and the headline morphs to the brand word.
Libraries: Splide + custom JS (no GSAP / ScrollTrigger / Lenis / AOS / jQuery).
