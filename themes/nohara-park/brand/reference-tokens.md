# Reference tokens — Hoshino Resorts (primary reference, measured with getComputedStyle at 1440x900, 2026-11-13)
Source: https://www.hoshinoresorts.com/en/ (screenshots in `ref/`). Values and descriptions only; no assets copied.

## (a) Colour (area share on the first screen + page)
- Ground: white `#FFFFFF` (~55% of page), pale cool grey band `#E9EAEC` (body background, ~15%), card panel grey `#F4F4F4`.
- Ink: pure black `#000000` body/headings, soft ink `#1F1F1F` for rules, outlines and buttons.
- Accent: none on the page; the only colour is photography (green foliage, water) and tiny brand badges (olive `#8C9F68`-ish, 48x48).
- First-screen saturated share (S>0.5, V>0.25) measured: **5.7%** (photo foliage only); news band 2.0%. Never above 30%.
- Ours: ink `#1F1F1F`, olive `#5F6848` (rules, badge, pill, links), band `#E7E9E4`, panel `#F2F3EF`, white; olive is a small accent (<8% of the first screen).

## (b) Type
- Sans display/UI: futura-pt (geometric) 500; nav 16px/500, normal tracking. Section H2: 56px/56px 500 (brands H2 51.84px). Hero sub-line "SINCE 1914" 28.38px 500, white, uppercase.
- Serif accents: Noto Serif 400: ledger year 27.52px, ledger title 24.08px/28.17px; body copy in cards serif ~22px/1.45.
- Body base 16px/16px black. Ours: Newsreader (display + year/titles) + Nunito Sans (UI/body); H1 ≥ 4.25rem.

## (c) Spacing
- Header fixed 76px white. Sections 720-1115px tall; section padding ≈ 100–130px top/bottom; ledger 3 columns 432px wide each, 216px tall, side margin 73px (container ≈ 1294px); news cards 418x456 with 49px gaps, container 45–1395px.
- First screen: photo 1440x824 under the 76px header; slides 1440 wide each (slide pitch 1440).

## (d) Radius, borders, shadow
- Radius 0 on photos and cards; pill buttons radius 30px (60px high, 248 wide, 1px `#1F1F1F` outline, transparent); header booking pill 301x50, near-black fill, radius 25px with white round disc (≈40px) "BEST RATE" at its right end; round 48px menu button black.
- Hairlines 1px `#1F1F1F` (ledger column dividers, vertical rule in cards, 100% heading rule). No shadows.

## (e) Imagery — **IMAGERY: photo**
- Real documentary photography, natural daylight, wide 1.6:1 (2400x1500) full-bleed; people appear small inside a place (guests on the grounds). News cards 418x255 (1.64:1) photo on top of a `#F4F4F4` caption panel (418x201). No masks, no clip-path; photo sits flush, 0 radius. The "Our Brands" band: full-bleed photo (1440x405) with a white 720x285 card inset right (x 628–1348), text on white.
- Ours: film-grain real photography, 3:2 and 4:3, 0 radius.

## (f) Decoration
- Centred wordmark + "SINCE 1914" over the hero photo; 1px white vertical line (≈160px) from hero bottom centre as a scroll cue; counter "01/03" with prev/next arrows (hover cursor "Click!").
- Ledger: 32x2 `#1F1F1F` dash under the year, centred; 1px vertical divider at each column's left; third column faded (peeking carousel).
- News caption: 48px square brand badge at left edge, then a 1px vertical rule (≈123px) beside date (13px) + title (20px/1.3).

## (g) Motion
- Ons observer (`.ons` → `.onscreen`, jQuery scroll listener): `ons_u` = opacity 0→1 + translateY(-70px→0), 1000ms `cubic-bezier(.19,1,.22,1)`; `ons_o` fade 1000ms same easing; `ons_hol` scaleX 0→1 1000ms; delays via `dly` 100–5000ms in 100ms steps; awards items staggered 250ms (750→3000ms) 2000ms duration; cards `scale(1.1)+opacity 0` photo settles to 1. Header items `topload` slide down from -200px. Hero = slick slider (3 slides, autoplay, counter). Libraries: jQuery 3.6, slick, jquery.transit.
