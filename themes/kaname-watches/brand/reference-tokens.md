# Reference tokens — BREDA (https://breda.jp/), measured 2026-10-26 with Playwright getComputedStyle at 1440×900
S5-Style entry: https://www.s5-style.com/6865/ (category Fashion). Values only; no assets, copy or logo copied. "est." = read off the screenshot, not computed.

## (a) Colour (first screen 1440×900, `ref/breda-first.png`)
| Role | Hex | Where | Area |
|---|---|---|---|
| Base / ground | `#FFFFFF` | header bar (65 px), page ground, body | ≈ 9% of first screen (rest is photos) |
| Text / ink | `#000000` | nav, section titles, body | thin type only |
| Hero tone (photo, mid-crossfade) | warm greys `#A0A0A0`, `#C0A0A0`, `#E0E0E0`, `#404040` | two 50% photos | ≈ 75% |
| Caption bar | `rgba(160,146,129,.6)` ≈ `#A09281` @ 60% | h3 caption over bottom of hero | 1440×89 strip ≈ 10% |
| Footer ground | `#F9F5EE` | footer, margin-top 50, padding 30 30 0 | footer only |
| Pick-up card ground | `#F4F4F4` est. | product cards | section |
| Accent | none (the only colour is inside the photos: gold/steel/blue dial) | — | — |
- Saturated share of the first screen (HSV s>0.5, v>0.25): **0.1%**. Palette = white / black / warm grey; colour only from product photos. Main 0 / sub 0 / base white + photo greys / accent = product photo colour.

## (b) Type
- Families: `ballinger-mono` (Adobe Fonts, monospace grotesk) for everything Latin; `source-han-sans-japanese` fallback (黒体); a body `p` falls back to Avenir/Helvetica/Meiryo.
- Body 16px / 24px (1.5), weight 400, letter-spacing 2.08px (0.13em), no transform.
- Nav links 14px / 45px, 400, ls 1.6px, UPPERCASE look (ABOUT / TOPICS / COLLECTION ▾ / LOOK BOOK / STREET SNAP / SHOP LIST), padding 0 24px, black.
- Logo wordmark: image 148×25 at x 15 / y 21 (spaced capitals).
- Hero caption h3: 30px / 42px, 400, ls 1.6px, white, padding 10px, bg `rgba(160,146,129,.6)`, centred; sub line 18px / 27px, weight 300, white.
- Tile labels h2 20px / 28px, 400, ls 2px, white, bottom-left of each tile (x 36, y 844).
- Section titles ("PICK UP", "NEWS / INFO", "SERIES"): ≈ 28–30px, 400, ls ≈ 0.12em, centred, black (est.). Meta lines (NEW RELEASE / date / link) 16px, grey `#666666`, ls 2.08px.
- Vertical "NEW ARRIVAL" tag: ≈10px, `writing-mode: vertical`, ls 2px, on a white 28×92 tab, top-left of each pick-up card.

## (c) Spacing
- Header height 65 px (box 0–65), hero starts at y 80 (image 1600×724 centred, margin-left −80 → visible 1440×724), hero ends y 804; tiles row y 805–1164 (4 × 359 px square, 1 px gaps).
- Container: full-bleed (0 gutter) for hero/tiles/pick-up/news/series; footer inner padding 30px.
- Section rhythm ≈ 75–110 px between a title and its content block; title-to-content 30 px (est.).
- Pick-up: 5 cards × 288 px wide × 286 px tall, 2 px gap; 22 square pager dots 12×12 px, gap 11 px, active black / others `#EEE` (est.), centred 35 px below the row.
- News: 3 columns 479 px (gap 0–1 px), image 479×319 (3:2), meta lines below at 8 px steps.
- Series: 2 columns 718 px, label 54 px from the left.

## (d) Radius / border / shadow
- Radius 0 everywhere; no borders (1 px white gaps only); no box-shadow on blocks. Product photos carry their own soft cast shadow inside the picture. "TOP" button: 70×48, 1px black border, white bg, bottom-right fixed 20px.

## (e) Imagery
- **IMAGERY: photo.** All main image slots are photographs: studio macro of one watch on a cream surface, a model resting her chin on her wrist with three watches on both arms (warm low saturation, soft window light, slightly faded film tone), flat-lay of watches in a white display tray, a beach walk detail, product packshots on `#F4F4F4`.
- Hero: two photos each **50% width × 724 px**, no radius, `object-fit: cover` (images 1600×724, shifted −80 px), crossfade between 3–6 pairs; on mid-fade the two layers overlap (double exposure look). Caption bar overlaps the bottom 89 px of the hero.
- Tiles under hero: 4 square photos 359×359 with a 20px white label bottom-left (x +36), no overlay except a thin dark scrim for legibility.
- Pick-up: product cut-out centred on a grey card, 1:1 (288×286), watch ≈ 55% of the card height, soft right-hand shadow.
- News: 3:2 photos, left/right photos full 479 width, centre one is a magazine cover (letterboxed on white).
- Series: 2 × 718 wide, ≈ 16:9 photos with a text label at top-left.

## (f) Decoration
- No lines, dots or shapes besides: pager squares (12×12), vertical NEW ARRIVAL tabs (28×92 white), caption bar (translucent taupe), slider arrows (thin chevrons, 24 px, left/right middle of pick-up), circle-arrow icon before news links (16 px).

## (g) Motion
- Hero: `sliderPro` fade, **fadeDuration 1000 ms**, **autoplayDelay 6400 ms**, loop, arrows; caption layer enters with `transition: opacity .4s, transform .4s` (show-transition "up": rises with scale 1 → translate3d, ≈ 30 px est.).
- Section images `.fade`: jQuery `inview` → opacity 0 → 1 over **1000 ms** (jQuery swing ≈ ease-in-out), leaves view → back to 0 over 1000 ms. No translate.
- Header: hides on scroll down (translateY −65px, `.3s cubic-bezier(.4,0,.2,1)`), returns on scroll up.
- Back-to-top button fades in after 100 px scroll; hover on images opacity → 0.7 (.3 s).
- Pick-up row `lightSlider` slide mode, speed 500 ms, auto-advance pause 4000 ms, 5 items.
