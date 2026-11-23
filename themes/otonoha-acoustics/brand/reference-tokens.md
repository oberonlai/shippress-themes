# Reference tokens — main reference https://www.nagata.co.jp/ (measured 2026-11-23, 1440x900, getComputedStyle; values only, nothing copied)
IMAGERY: photo. Real documentary architectural photography of auditoria, halls and lecture rooms (low-key to mid-key, warm timber, dark seating rows, wide-angle empty rooms). No illustration.

## (a) Colour (first screen 1440x900; saturated share measured 7.9%, HSV s>0.35)
| Role | Hex | Area |
|---|---|---|
| Base / page | #FFFFFF | ~45% |
| Pale band (hero ground, news ground, page-head band) | #EBEFF1 | ~25% |
| Photographs (dark, warm timber) | n/a | ~22% |
| Primary slate-teal (logo tile, CTA band, arrow discs, links) | #436472 | ~5% |
| Deep slate (utility tab, body text, headlines) | #3B4A5C | text + ~2% |
| Accent | none (no second hue) | 0 |
## (b) Type
Zen Old Mincho (serif, JP) body and headings, Montserrat for Latin section titles ("News", "Latest Update") at ~36px weight 300/400; root 11.25px (scaled rem). Nav 700, ~16px, tracked. H1 catch ~44-50px serif 700 in #3B4A5C, two lines staggered (second line indented ~170px). News card title 22.5px/31.5px; tag 15.75px; update row 15.75px/25.2px; logo wordmark caps, wide letter-spacing. Footer caps copyright 14px grey.
## (c) Spacing
Header 80px (logo tile 200x80 flush left; right: search tab 80x80 and MENU tab 80x80 flush right). Hero band: headline starts y~160, card strip y 325-660 (cards straddle band seam at y 480). Section padding ~80-120px; content width 1040 (x 200-1240) for text/update rows; news panel white sheet starts x 521 and bleeds off the right edge.
## (d) Radius / borders / shadow
Slide cards r8, no border, no shadow. Arrow discs 44px circle filled #436472 with white arrow. CTA pill: 1px white outline, r999, 60px tall. Hairlines 1px #DDE2E5 between rows and as a vertical divider between news items. No shadows anywhere.
## (e) Imagery
- Hero strip: 4 square cards 335x335 (1:1), r8, gap 20, edge-to-edge (x 20-1420), room-type label top-left inside the photo (white, 16px serif, over dark), project name bottom-left (white 11px). Strip straddles the pale band / white seam (band ends mid-card).
- News feed: one portrait or landscape thumbnail per item, ~215px tall, centred in its column, title row with Ø44 arrow disc.
- Project list: 3-up 4:3-ish (≈ 273x154) photos, no radius, caption blocks under them with a label/value spec list (type, region, designer, year).
## (f) Decoration
Logo tile solid slate with caps wordmark; vertical 3-line heading (vertical-rl) left of a 1px vertical rule and two-column text (overview block); ghost caps word ("PROJECT", very pale, clipped by the white sheet's right edge) in page-head bands; dark CTA band with sentence left + outline pill right.
## (g) Motion
Slick carousel (jQuery, jsdelivr slick 1.8.1): 4 visible, scroll 1, autoplay 2000 ms, speed 800 ms, infinite, slide on the x axis (slick default ease); on <768 variableWidth centre mode. Header gets class `fixed` on scroll (scroll listener, sticks after 80px). Overlay menu (full-screen slate). Everything else static: no scroll reveals.
