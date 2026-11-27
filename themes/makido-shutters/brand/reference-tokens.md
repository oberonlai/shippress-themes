# Reference tokens — https://www.sanwa-hldgs.co.jp/ (measured 2026-11-28, 1440x900, getComputedStyle + style.css)
Only values and descriptions; no assets, text or logos are copied. All text in this file is English.

## (a) Colour
| Role | Hex | Share (home, full page) | Notes |
|---|---|---|---|
| Main (brand blue) | #005CAA | ~12% | lens band end colour, chevrons, tag pills, links (363 uses in CSS) |
| Deep | #011657 | ~6% | lens band radial centre-to-edge dark, dark tag pill |
| Ground | #FFFFFF | ~70% | page ground; plus #F0F5F7 pale panels (38 uses) |
| Border / rule | #C2CDD1 | hairlines | 1 px boxes (notice cards), top border of body |
| Text | #333333 | body | secondary grey #67757A |
| Accent | #DB0011 (pdf icons only), #A7A85D | <1% | negligible |
First-screen saturated share (HSV s>0.5, v>0.3): hero video frame ~21.6%; the lens band screen ~55% (the band, not the first screen). Our theme keeps the first screen under 6%.

## (b) Type
Family Noto Sans JP (+ Roboto for Latin numerals/English). html font-size 62.5%, weight 500, line-height 1.4, letter-spacing .005em, colour #333.
- Section H2: 40px / 600 / lh 56px (white on the lens band; #333 on white), padding-bottom 20px, margin-bottom 40px, then a short bar (64 x 4, white or blue) centred.
- H3 card title: 20px / 600 / lh 28px.
- Vision catch (English): ~56px / 500 white; sub line 24px / 600 flanked by short dashes.
- Stat numerals: ~72px / 500 white with a 30px unit suffix.
- Nav: 15px / 500, two tiers (utility row: recruit, language, contact, search; main row 6 items).

## (c) Spacing
- Container 1200px (notices, news), photo row 1334px wide, hero full-bleed.
- Vision section: padding 98px 16px 104px, margin-bottom 104px; the band height ~2069px incl. stats.
- Notice boxes: padding 32px, margin-bottom 32px, 1px #C2CDD1 border.
- News two columns: 568px each, 64px gap.
- Header: 100px high, transparent over the video.

## (d) Radius, border, shadow
- Pills: border-radius 50px/100px (white pill, blue round chevron disc 40px at right).
- Cards in the pickup slider: 14px radius photo, 6px small.
- Notice boxes: radius 0, 1px solid #C2CDD1. No drop shadows on boxes; the pill has a very soft shadow.
- Lens band: `border-radius:50%` on a pseudo-element 150% wide (180/220/400% on narrower screens), 100% of the section high, background radial-gradient(105% 50% at 50% 50%, #011657 0%, #005CAA 100%).

## (e) Imagery — IMAGERY: photo (mixed)
First screen is a CG video (not photographic), but every content image is a photograph: product install photos (shutter, garage door, dock leveller, glass partition) and people/documentary stock (children with a globe, hands placing blocks). Our theme is IMAGERY photo, documentary. 
- Pickup slider cards: 372x215 (1.73:1), radius 14, caption below at 20px, neighbours peeking at both viewport edges, 4 gap pagination dots + pause.
- Product row: four abutting photos, each 333x209 (1.6:1), zero gap, 0 radius, one 1334px row on the blue band.
- About band: full-bleed photo under a centred heading with a 64x4 blue bar.

## (f) Decoration
- Short bar under centred headings: 64 x 4, white on blue, #005CAA on white.
- Tag pills on dated rows: 20px high, radius 100, blue #005CAA (category) and #011657 (company), white 12px text.
- Notice chevron: small blue chevron inline after text.
- Pause button: 46px outline circle with two bars, bottom-right of the hero; "70th" pill link 360x60 docked bottom-right of the hero at bottom 48px, right 125px (centred, 200px wide on mobile).
- Back-to-top: 52px white circle with blue chevron, fixed bottom-right.

## (g) Motion
- Fade-up (jQuery scroll listener `.u-fade01`): opacity 0->1 and translateY(15px)->0, transition 1s (default ease), fires when scrollTop > elementTop - winH + winH/15.
- Hero pin: `js-topParallax1` hero wrapper becomes `position:sticky` with top = -(vision.top - winH) once the vision wrapper's top reaches the window bottom, so the lens band slides over the pinned hero (cover reveal).
- Slider: Swiper, loop with peeking slides, autoplay with a pause button.
- Hover: links change underline/colour in 0.3s ease; buttons 0.3s transform.
