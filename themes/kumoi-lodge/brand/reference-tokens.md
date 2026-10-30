# Reference tokens — glanta | glamping village (https://glanta-glamping.com/)
Measured with getComputedStyle in headless Chrome at 1440×900 (2026-10-30). Values only; no assets, copy or logo reused.
IMAGERY: **photo** (all imagery is documentary colour photography; the hand-drawn wordmark is the only illustration and is not reused).

## (a) Colour
| Role | Hex | Share (page) | Where |
|---|---|---|---|
| Text / ink | #000000 (secondary meta #505050) | ~6% | all type, 1 px outline pill |
| Ground 1 pale lichen | #E0E5C5 | ~14% | rooms section, button hover text |
| Ground 2 pale mint | #D3E8DD | ~8% | one intermediate band |
| Ground 3 pale butter | #F2EFCF | ~8% | food section |
| Ground 4 warm cream | #F4ECE0 | ~14% | facilities, access |
| Ground 5 blush | #EADFD9 | ~3% | accent band |
| White | #FFFFFF | on photos | wordmark, MENU, ring button (2 px) |
Photos fill ≈ 45–50% of the scroll length. First screen (full-bleed photo): pixels with S>0.5 and V>0.25 = 3.5%; S>0.3 = 26% (foliage green only). No saturated UI colour anywhere.
Relationship: black type on very pale tinted grounds that change per band, white type only on photos. Main = photography, accent = none.

## (b) Type
- Roboto + Zen Kaku Gothic New (JP), body 16 px / lh 28 px.
- Section title (h2 `common-title`): 40.32 px, 500, lh 60.5 px (1.5), tracking 4.03 px (0.1em), Latin caps.
- Card title (h3): 24.05 px, 500, lh 42 px, tracking 1.92 px (0.08em).
- Lead/description: 17.28 px, lh 30 px (1.74), tracking 0.864 px (0.05em), colour #000.
- Meta (capacity, area, amenities): 13.54 px, lh 22.6 px, tracking 0.27 px, #505050.
- Button: clamp(14px,1.2vw,23px), tracking 0.05em. "scroll down": 16.6 px, tracking 1 px, white.
- Sizes are modest; the only large element is the drawn wordmark (~290 px wide).

## (c) Spacing
- Frame: inner padding 50 px at 1430 wide; rooms/food/facilities column 1030 px (72%), centred.
- Room list gap 5.99vw (≈86 px); heading → list 5.7vw (≈82 px); facilities top image margin 4.17vw.
- Concept section: 2700 px tall, text blocks vertically centred in 100 lvh stops, text column starts at 20.1% of width, columns gap 9.5vw.
- Mobile: columns stack, gap 89 px in concept, list gap 69 px, card photo 362 px high.

## (d) Radius, borders, shadow
- Photo radius **30 px** (rooms, food squares, facilities, bordered facility box). No shadows anywhere.
- Pill button: 1 px solid #000 (1.5 px mobile), radius 50 px, 225×48, padding 8/30; hover inverts to black fill with ground-coloured text.
- Round ring button "BOOK NOW": 109×109, 2 px white, radius 50%, 22.5 px tracking 2.7 px, fixed bottom-right.
- Vertical 1 px black hairline between room title column and description column.

## (e) Imagery
| Image | Ratio | Radius / mask | Position and width |
|---|---|---|---|
| Hero | 1.59:1 (full viewport, 1430×900) | none | full bleed, behind transparent header |
| Concept stages (4 stacked fixed layers) | 1.59:1 | none | full bleed, crossfaded as text passes |
| Room photo (swiper, 3 rooms × 2 slides) | 1.85:1 (1030×557) | 30 px | centred column 72% |
| Food photos | 1:1 (500×500) | 30 px | two-up, ~48% each |
| Facility hero | 1.85:1 (padding-top 54.1%) | 30 px | column width |
| Facility cards | 1:1 | 30 px | 2- and 3-up grid |
| Access map/photo | 1.17:1 (498×424) | 30 px | right half |
Style: soft natural daylight, saturated-but-natural greens, people shown from the side or back at ease, wooden decks and white domes; night close at the end with warm lamp light.

## (f) Decoration
- Hand-drawn wavy wordmark centred in the upper third of the hero, "glamping village" sub-line in white bold 17 px beneath.
- Fixed header: wordmark top-left, "MENU" 22 px tracked top-right, white on photo, turns black over pale bands (class toggle).
- Outline circle arrow buttons (≈51 px, hidden when disabled) inside the bottom corners of each room photo.
- Three outline round icons (toilet / shower / laundry, ~44 px, 1 px) with 10 px captions inside a rounded 1 px bordered box that is half text / half photo.
- Footer on the night photo: small address bottom-left, tracked caps index row "TOP CONCEPT ROOMS FOOD FACILITIES ACCESS".

## (g) Motion
- `.anim-fadeIn`: opacity 0 → 1 and translate3d(0,35px,0) → 0, `transition: opacity 1.5s, transform 1.5s` (CSS default `ease` = cubic-bezier(.25,.1,.25,1)); triggered by GSAP ScrollTrigger `start: "top 90%"` adds class `anim`, once.
- `.anim-imgZoomIn`: scale 1.1 → 1, 1.5 s, same trigger.
- Room slides: Swiper fade, crossFade, speed 1000 ms, autoplay delay 3000 ms, started/stopped by ScrollTrigger when the list is in the viewport.
- Concept: four fixed full-bleed layers toggle class `on` (opacity crossfade) at ScrollTrigger `top 70%` / `top 50%` of the matching text stop.
- Desktop only: ScrollSmoother `smooth: 1, effects: true` (inertial scroll, data-speed parallax). Hero wordmark fades with a load class.
- Hover: pill inversion (instant/short).
