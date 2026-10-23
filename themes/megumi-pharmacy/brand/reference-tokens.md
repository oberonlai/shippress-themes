# reference-tokens — Itoh Kampo Pharmaceutical (https://www.itohkampo.co.jp/)
Measured with headless Chrome getComputedStyle at 1440×900, 2026-10-24. Values only; no copy, photos or logo reused. html font-size is fluid (93.75px at 1440, so `1rem` there = 93.75px; "rem" below are converted to px). Screens: `ref/itoh-first.png`, `ref/itoh-sheet.png`.

## (a) Colour (page-level; sections are mostly white, one yellow band)
| Role | Hex | Area (page / first screen) |
|---|---|---|
| Ground | `#FFFFFF` | ~62% of page height; first screen 0% (photo) |
| Photo (fixed full-bleed behind content) | warm wood/stone photo, muted | first screen ~96%; saturated px (S>.6,V>.25) 0.3–1.1% |
| Text | `#383736` (rgb 56,55,54) | body, headings |
| Pale grey panel | `#F4F4F4` | ~10% (quality/process band) |
| Accent band (not for us) | `#F6BB37` | ~12% of page, rounded 37.5px band |
| Brand accent small | `#79B121` | 1–2% (round menu button 60px, small labels, pill arrows) |
| Hairline | `#DDDDDD` 1px | row dividers |
First-screen: white text on photo; only the green round menu button is saturated (~0.5%).

## (b) Type
- Body: Ryo Gothic PlusN (gothic) 15.94px, weight 400, lh 31.9px (2.0), ls normal; nav/intro 500, ls .16em (intro 16.9px / lh 33.8 / ls 2.7px).
- Display/heading face: Momochidori (soft rounded mincho-ish) 43.1px hero copy, weight 400, lh 69px (1.6), ls .25em (10.8px), white; section copy 26.25px lh 45.9 ls .1em.
- Section h3/step title 18.75px / 500–700, lh 1 (single line); kicker label 15.94px 700 ls .14em in accent `#79B121`.
- English display labels (NEWS RELEASE, CAMPAIGN): Futura-PT 600, uppercase, large (≈ 31px for labels), tracking .1em.
- No uppercase for JP; latin labels uppercase.

## (c) Spacing
- Section margin-top ≈ 150px (1.6rem); inner side gutters 75px (hero/footer), 150px (news, activity).
- Intro block: max-width 645px, padding 109px 37px 120px, centred over the fixed photo.
- Cards band: 3 cards (452 × ~589) with gap ~40px, inside 75px gutters; yellow band margin 15px from viewport edges, height 811.
- Header height 87px; menu button 60px circle at 52px from right.

## (d) Radius, border, shadow
- Cards/images radius 7.5px; yellow band 37.5px; buttons 7.5px with 1px white outline (padding 18.75×37.5); pills fully round.
- Hairline dividers 1px `#DDD`, no shadows.

## (e) Images
- Hero: one fixed full-viewport photo (position:fixed; inset 0; z -2), height 100dvh, content scrolls over it. Intro text then fades in over the same photo; white section slides up over it.
- Link cards: 452×589 (≈ 0.77, portrait 3:4-ish) radius 7.5, label overlay bottom-left (text 31.9px 500 white, padding 51×37); hover scale 1.07.
- Step list photo: 338×450 (3:4) radius 7.5 in a slider, neighbours peek left/right (cropped by viewport); main block 874 wide at x 776 (right 61%).
- Journal thumbs 64×64 squares radius ~8.

## (f) Decoration
- Numbered rows `01 … 05` (index 15px, 500) + title 18.75px + round green arrow pill (30×18) at the right; rows 78px high with 1px hairline; active row opens text (grid-template-rows 0fr→1fr .25s ease-in-out).
- Notched white panel inside the yellow band (top-left corner step-cut), "NEW" black 28px round chip.
- Round green menu button 60px with 2-line hamburger.

## (g) Motion
- Hero copy lines: opacity 0→1, translateY 15px + skewY 13deg → 0, 1.2s spring `linear()` easing (overshoot ~13%), delays .6s / 1.3s / 1.8s (per line).
- `.inview.-fadeIn`: opacity 0→1 + translate 0 14px → 0, 1s `cubic-bezier(.33,1,.68,1)`; IntersectionObserver, threshold .6 (text) / 1 (link), link delay .5s; once.
- Fixed photo behind scrolling content (no JS, CSS `position:fixed`).
- Card hover image scale 1.07. Accordion rows .25s ease-in-out. Sliders via Splide (we do not copy).
