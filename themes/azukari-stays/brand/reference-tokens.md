# Reference tokens (measured with getComputedStyle at 1440 x 900, desktop)

Primary reference: https://tokitoki-patina.jp/ (S5-Style entry, hotel / inn category; a single renovated 190-year-old house let as a whole).
Secondary reference: https://loof-inn.com/ (S5-Style entry, hotel / inn category; farmhouse inns, grey booking info bar under the hero photo).
Screens: `ref/tt-first.png`, `ref/scroll-tt-*.png`, `ref/lf-first.png`, `ref/scroll-lf-*.png`. Values only; no assets, copy or logos are reused.

## (a) Colour (primary, area share of page grounds; first screen saturation measured with scripts/check-first-screen.py)
| Role | Hex | Share | Where |
|---|---|---|---|
| Ground (page) | #F4F1E8 | about 70% of page height | every section after the hero (we do NOT use a cream; our ground is a cooler paper, see reference.md) |
| Dark ink-blue | #1C262E | about 10% (hero rooms, footer) | hero stage, closing band |
| Text | #000000 on ground, #FFFFFF on dark | body copy | |
| Accent | #EB5A3E | under 1% | active dot and label of the day stepper, small map pin only |
| Hairline / inactive | #CCCCCC | | inactive stepper dots and the 1 px track |
| White | #FFFFFF | about 5% | vertical label tab, outline button text on dark |
First-screen saturated share (HSV S > 35%, V > 24%): tokitoki 8.7%, loof 14.7%. Target for our first screen: at most 8.7%.
Secondary (loof): info bar #E1E1E1 (108 px high, directly under the photo), page ground #F3EEEE, dark button #2C1B1E, deep teal photo grade (night, firelight).

## (b) Type
- tokitoki headings: Noto Serif JP 500, h1 20 px / 36 px, tracking 0.24em (vertical), h2 28 px / 44.8 px tracking 0.18em, h3 24 px / 40 px, tracking 0.1em. Body: Noto Serif JP 14 to 18 px, tracking 0.1em; reading paragraphs 14 px Noto Sans JP, line height about 30 px (2.1). Latin italic label: Cormorant Garamond italic.
- loof: Cormorant Garamond weight 100 h1 72 px / 93.7 px tracking -0.03em (lying over the photo, left, two lines); section words 90 px weight 400 tracking -0.01em; nav 11.7 px weight 600 tracking 0.04em; body 14.4 px / 36.8 px tracking 0.06em.
- Ours (sans direction, Outfit + Inter Tight): thin Outfit display for the hero statement, Inter Tight body 16 px / 1.8. Not serif.

## (c) Spacing
- tokitoki: sections have no padding; photos and text blocks are placed on a loose 12-column field with 100 to 400 px of empty ground between them; text columns 350 to 420 px wide; photos 400 to 870 px wide; page margins 0 to 180 px (photos flush to the viewport edge).
- loof: content column 960 to 1000 px, left rail 180 px with a 1 px vertical rule, 3-up cards 290 px wide, 90 px gaps, 130 px between rows.
- Header: tokitoki 100 px zone, outline button 190 x 55 px at x 1124, icons 29 px.

## (d) Radius, borders, shadow
- Radius 0 everywhere (photos, buttons, tabs). Outline button: 1 px white on dark (1 px black on pale). No shadows. Stepper track 1 px #CCCCCC, active segment 1 px #EB5A3E, dots 10 px.
- Vertical white label tab (floormap): 85 x 368 px, white, no border, sits over the top-left of the photo strip.

## (e) Imagery
IMAGERY: photo. Documentary, available-light interiors and exteriors of a renovated old house: warm tungsten rooms with deep shadow and green garden light through windows, close details (charcoal, ceramics, a key on a cloth), a street frontage, people met at hand-over (a couple at a shop counter). No staging, no people posing.
- Photos are plain rectangles, radius 0, no masks; sizes differ and they abut or overlap at corners: 603 x 479 flush to the left viewport edge, 513 x 269 flush to the right edge, 867 x 380 flush left, 550 x 366, 400 x 247, a trio 414 x 226 + 232 x 154 + 154 x 154 overlapping at corners.
- Hero: one dark room photo with a round opening (about 860 px circle) showing a sunlit garden, dark (#1C262E-toned) surround; left logo mark 177 px, a vertical tagline at x 1180 to 1230, header with outline button.
- Floormap strip: three photos 576 wide x 384 high (3:2) in a row, neighbours cut at both viewport edges, thin long chevron arrows 30 px wide in white at x 362 and x 1040.
- loof: 4:5 portrait cards 290 x 437 with a vertical caption set beside each photo; 1:1 news cards 294 px; hero is a full-bleed night photograph.

## (f) Decoration
- Day stepper (header, centre): five labels (11 px serif) over five 10 px dots joined by a 1 px #CCC line; the checked dots and the line segment before the active one turn #EB5A3E; spacing 105 px between dots, centred at x 700, y 38 to 62.
- Hairline outline map of the region with one small ink pin hanging from a 1 px vertical line (about-map).
- Line floor plan of the house drawn in 1 px black, tab text row with a 1 px underline on the active tab, one 14 px #EB5A3E dot on the plan that marks the room.
- Slim tracked Latin italic label next to a vertical heading.
- loof: 180 px left rail with a 1 px vertical rule; giant thin section word with a small label and a 140 px hairline.

## (g) Motion
- tokitoki hero: opacity 2 s ease cubic-bezier(.65,0,.35,1) with the image transform 2.4 s, delay 1.4 s; a "scroll" cue line runs 2.4 s on the same easing, infinite.
- Day flow: pinned horizontal scroll (GSAP ScrollTrigger, ease none, scrub true, desktop only, track moves xPercent -100 over its own width); stepper line scrubs with each chapter; header switches from white-on-dark to black-on-pale by section.
- Floormap slider: Slick, speed 1800 ms, easing cubic-bezier(.65,0,.35,1), centre-peeking neighbours.
- Marquee photo rows: CSS loop 900 s linear (three rows in alternating directions).
- Hover/transition values: .6 to 1.6 s, mostly cubic-bezier(.65,0,.35,1).
- loof: transitions .5 to .6 s ease and cubic-bezier(.165,.84,.44,1); Swiper for the hero and cards; lazy fade-in 1 s.
