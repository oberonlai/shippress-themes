# Reference tokens (measured with getComputedStyle at 1440x900, 2026-11-11)

Main reference: https://shiodakagu.com/ (independent interior and furniture shop, a regional town). Secondary: https://betchu-kagu.co.jp/ (made-to-order furniture workshop). Only values and descriptions are recorded; no assets, text or logos are copied.

## (a) Colour (main reference)
| Role | Hex | Share of page / first screen |
|---|---|---|
| Ground | #FFFFFF | about 35% of the page (header-free sections, cards, tiles) |
| Band | #DBDBDB | about 45% of the page (three full-width grey bands holding all the cards) |
| Text | #000000 (body weight 300) | text only |
| Accent | #006D80 (deep teal) | under 3%: online-shop vertical tab, news button, primary button, outline icons |
| First screen photos | warm dark brown oak floors, charcoal chair, green garden light | photographic; saturated pixels (S>0.5, V>0.25) = 11.6% of the first screen |
First screen with the headline still on black (t=0.3 s): 100% near-black, so the photos arrive after the type.
Secondary (betchu): navy #001E37 for the contact tab and strip rules, paper white #FDFEFA, photo-dominant warm amber (31.5% saturated on a photo first screen; we do not take that ratio).

## (b) Type
- Body: system sans stack (Hiragino / Yu Gothic), 16px, weight 300, line-height 32px (2.0), letter-spacing 1.6px (0.1em).
- Headings: a Japanese serif (A1 Mincho web font), weight 700. H2 lead 50px / line-height 90px / ls 1.6px. Section label 17.6px, wrapped in square brackets "[ label ]", centred. Card H3 20.8px / lh 37.4px, centred; small title 16px / lh 24px.
- Hero headline: single-glyph-stacked serif words about 100px, white, stepped up and down across the seam.
- Secondary: serif 36px, weight 300, letter-spacing 8.64px (0.24em), navy; tagline in a Latin serif italic-feeling roman at about 20px centred at the foot of the photo.
- Our translation: Albert Sans / Onest (sans per the plan row), headings weight 300 to 400, tracking 0.04em to 0.1em, line-height 1.85 body.

## (c) Spacing
Section padding 100px top and bottom; container 1240px (side margin 100px at 1440); card pair two columns of 595px with a 50px gutter; tile grid 5 columns of 247px, row height 60px, gap 1px; header 110px tall; hero 100svh with a 68px white info bar docked at the bottom between x 100 and 1340.

## (d) Radius, borders, shadow
Radius 0 on photos and cards; 3px on buttons; 20px on the vertical online-shop tab. Hairline 1px #CCC under nav titles. No shadows.

## (e) Imagery
IMAGERY = photo. Documentary interior photographs: people at home with furniture (a couple at a dining table, a couple on a sofa), chair detail close-ups, wood-sample mosaic, a plan with a scale ruler. Ratios: hero left panes 4:3 (756x567), hero right pane 1:1 (945x945) in the 1440x900 stage (two stacked 4:3 crops left half, one tall crop right half); card photos 595x357 (1.67:1); offset photo 792x575 bleeding off the right viewport edge with a white card overlapping its left edge by 47px. No masks, no clip-path, no cut-outs. Tonal direction: low saturation, daylight from a window, wood and fabric.

## (f) Decoration
- Pentagon (house outline) stamp, 100x80 px, 1px white stroke, two-line label, centred on the seam below the headline; hover scale 1.1 over 0.3s and the stroke turns teal.
- Teal vertical tab, 40x220 at the right viewport edge, y 340, with a cart glyph and vertical label.
- Bracketed centred section labels "[ ... ]".
- Line-icon tiles: 10 white tiles with 30px teal line icons and a 16px serif label.
- Left rail: three social glyphs at x 50, y 400/450/500.
- Secondary: 1px navy-ruled cell strip (136px cells, thumbnail on top, "View More" with an arrow), a five-segment 01 to 05 indicator with a white fill bar under the active segment, vertical shop name at the left edge.

## (g) Motion
See the scroll breakdown in stage-a.md. Summary: GSAP TweenMax 2.x hero (fade 1s, headline scale 1.3 to 1 over 2.5s power2.out, stamp and lead rise 20px at 1.5s), a 6s class-toggle cross-fade of the three-pane stage, Swiper continuous marquee (delay 0, speed 6000, 30px gap), ScrollMagic only toggles a body class after 100px of scroll. Secondary: Lenis smooth scroll, Splide fade slider.
