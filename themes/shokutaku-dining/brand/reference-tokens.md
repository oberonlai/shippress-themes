# Reference tokens — primary reference Le Pont de Ciel (https://pont-de-ciel.co.jp/), measured with getComputedStyle at 1440×900 on 2026-10-24
Only numbers and descriptions; no assets, copy or logo taken. Secondary (structure only): https://pienezza.jp/. Shots: `ref/`.

## (a) Colour and area share (first screen = greige wall + arch photo; full page = greige ground with white ghost type and warm-toned food photos)
| role | hex | share of full page area |
|---|---|---|
| ground (body) | #DFDAD6 (rgb 223,218,214), warm greige | ~60% |
| text / ink | #303030 | ~8% (type only) |
| ghost headline fill | #FFFFFF (huge thin caps on the ground) | ~6% |
| photo areas (muted warm food / plaster interiors) | n/a | ~25% |
| accent | none in UI; only photo colour (carrot yellow, sauce brown) | <1% |
Header on photo: white; header on ground: ink (class toggles `negative`). Secondary ref rail: #3B3123 (rgb 59,49,35) 56px full-height bar at the right edge, body #1D1A15.
First-screen saturated pixels (S>0.5, V>0.2): Le Pont de Ciel 0.0%, Pienezza 4.0%.

## (b) Type
| role | family | size | weight | line-height | letter-spacing | case |
|---|---|---|---|---|---|---|
| ghost section title (CONCEPT) | Poiret One (thin Deco caps) | 320px (20rem), white on ground | 400 | 320px (1.0) | normal | upper |
| section title (CHEF, MENU, NEWS, ACCESS) | Poiret One | 96px (6rem) | 400 | 96px (1.0) | normal | upper |
| lead title | Shippori Mincho B1 | 48px (3rem) | 400 | 64px (1.33) | 4.8px (0.1em) | — |
| sub heading / course label | Cinzel | 36px (2.25rem) | 400 | 40px | normal | upper |
| name | Cinzel | 24px | 400 | 40px | normal | |
| body | Shippori Mincho B1 | 16–18px (1–1.125rem) | 400 | 32–40px (2.0–2.5) | 1.6px (0.1em) in lists | |
| price | Cinzel | 24px | 400 | 24px | 2.4px (0.1em) | |
| small label / date | Cinzel | 14–15px | 400 | 16–24px | 0.75–1.6px | upper |
| footer copy line | Cinzel | 36px | 400 | 64px | 3.6px | |
| reservation CTA | Cinzel | 20px | 700 | 20px | 1px | upper |
Our mapping (Latin): Fraunces light (display, replaces Poiret One ghost caps: weight 200–300, upper) + Source Sans 3 (body 1rem/1.85, ls 0.02em).

## (c) Spacing
- Section padding: concept pt 100px; menu 240/240px; information 360/320px; news pb 184px; access 320/320px. Very generous vertical air (≈ 0.27–0.4 × viewport).
- Side margin of floating photos: 34px from the left edge, right group ends at x 1290 (150px from the right edge). Main photo 1086 px wide, left 177px (centred, ≈75% width). No fixed container max-width; positions are absolute-feeling, composed per section.
- Header: logo left at 30px, circular menu button 62px right 40px from edge, fixed. Right edge column: reservation tab, two social icons (16px), language switch, all fixed at x≈1340–1440.

## (d) Corners, borders, shadow
- Arch photos: `border-radius: 160px 160px 0 0` on 320px-wide frames (half the width → true semicircle top); 240px wide → 120px; 252×382 pill `160px`; half-pill `160px 0 0 160px` / `360px 0 0 360px` for the wide dish slides.
- Elliptical blob fields: `border-radius: 2350px / 1240px` on 2400×1396 background shapes (large soft curves behind sections, tone-on-tone with the ground).
- Round button: height 82px, radius 42px, no fill, 1px ink hairline.
- Reservation tab: fixed right, x 1336–1440, y 250–650 (104×400), 1px hairline (white on photo, ink on ground), radius ≈60px on the two left corners (SP value 32px 0 0 32px), vertical Cinzel letter-spaced RESERVATION.
- Shadows: none. Borders: 1px only.

## (e) Image presentation
| image | aspect | shape | position / width share |
|---|---|---|---|
| hero arch | 520×800 (0.65) | arch (top radius = half width) | right, x 770–1290, y 50–850; ~36% of width; wordmark left at x 150 |
| after scroll | full-bleed 1440×900 | arch mask expanded to rectangle | pinned, then released |
| concept big photo | 1086×1526 (0.71) | rectangle, radius 0 | centred, left 177, 75% of width, taller than viewport |
| floating arch A | 320×580 (0.55) | arch r160 | left edge x34, top-left of section |
| floating arch B | 240×336 (0.71) | arch r120 | right, x1050, mid |
| floating C | 320×246 (1.30) | arch r160 top | right x1086 |
| chef | 240×360 (0.67) | rectangle | left 384 under ghost title CHEF, partially overlapping title |
| wide strip | 1080×640 and 2400×1376 | rectangle / full-bleed | bleeds off left (-240) |
| dish slides | 840×640 (1.31) r360 half-pill; 252×408 (0.62) pill r160; 240×240 half-pill | horizontal pinned strip | each ~17–58% of viewport width |
| access | 1080×800 (1.35) rect; 1080×720 (1.50) top radius 218 | | two overlapping, offset |
Overlap: arch photos sit over the bottom of the ghost-type letters; offset ≥ 100px vertically between consecutive arches.

## (f) Decorations
- Ghost caps 320px/96px white on greige (contrast ~1.3:1, decorative, aria-hidden), partially covered by photos.
- Vertical RESERVATION tab (above), round hamburger 62px 1px hairline.
- JP/EN language switch text 16px at the bottom right; Instagram/Facebook line icons 16px.
- No dots, numerals or tags; thin hairlines only.

## (g) Motion (GSAP 3 + ScrollTrigger + ScrollSmoother; smooth 2.5, off on touch)
| effect | trigger | detail |
|---|---|---|
| hero arch → full-bleed | pinned timeline, `scrub: 3`, start top top, end +=100% | mask width/height grow, border-radius to 187.5vw; hero logo fades |
| parallax `.js-pax` | start top bottom, end bottom top, `scrub: 2` outer / `scrub: 1` inner | outer and inner layers move opposite on y, travel = image overflow (≈ 100–300px) |
| horizontal drift | start top bottom, end top top, `scrub: 1.5` | target x +200 → 0, inner x −200 → 0 |
| dish strip | pin, `scrub: 1`, end += (strip width − viewport) | strip translateX to end, section height = strip width |
| footer curtain | pin, `ease: none`, scrub true | bg opacity 0→1, y 0.4×h → 0 |
| header colour | ScrollTrigger toggle at `.kv`, `.top_menu` | `negative` class (white ↔ ink) |
| image reveal `.clip_figure img` | class toggle on enter | clip-path inset(100% 0 0 0)→0 1.2s `cubic-bezier(.32,.95,.6,1)`; opacity + translateY(50px→0) 2.6s `cubic-bezier(.16,1,.3,1)` |
| circle reveal `.clip_circle img` | same | clip-path circle(0% at 50% 10%)→full .8s `cubic-bezier(.32,.95,.6,1)`, translateY 50→0 2.6s |
| link hover | hover | .6s `cubic-bezier(.32,.95,.6,1)` |
