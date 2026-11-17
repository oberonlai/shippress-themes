# Reference tokens (measured with getComputedStyle, 1440x900, 2026-11-17)
Primary reference: https://theenglishbus.com/ (small-group tour operator, photographic, navy + one red). Secondary: https://harborlinetour.com/ (three-column stage). Values only; no assets, copy or logos reused.

## (a) Colour (share of first screen by pixel count, English Bus hero)
| role | hex | where | share |
|---|---|---|---|
| ink navy (main) | #1C2D4F | nav rail, vertical-line loader, footer | ~11% |
| deep navy | #13203B | nav toggle, footer base | 3% |
| mid navy | #2C3E6F | "Book your tour" header bar | band only |
| accent red | #E22632 | one filled CTA button, date marker | 3% (saturated > 0.6 total 9.7%) |
| light grey | #F5F5F5 | booking panel ground | page |
| hairline grey | #E3E3E3 | field underline, calendar arrows | - |
| tint blue | #8BA5D7 / #6D82AB / #CACDD4 | secondary text on navy, disabled | trace |
| text | #172F60 body on white, #FFFFFF on photo | | |
Photo is ~75% of the first screen (grey-green stone, desaturated sky). Saturated share ≈ 9.7%. Harbor Line first screen saturated share 0.3% (dusk grey/blue photographs, navy #2B3F5C panel, white frame).

## (b) Type
- Display: Graphik 700, h2 hero 140px / lh 121.8px (0.87) / letter-spacing -7px (-0.05em), white, 2 lines, ~582px wide; card h3 40.25px / lh 1 (40.25px) / 700, padding 0 43.75px; book header 43.75px / 65.6px / -1.3px.
- Body: Proxima Nova 400 21px / 30.45px (1.45) white on photo, 350px measure; nav link 20.1px 700 / 30.2px; small label 14px 400 / 21px.
- Case: sentence case, no uppercase labels. Medium heading variant 40px / -0.04em / lh 1.02 / max 260px.
## (c) Spacing
- Content column 1000px inside a 1283px stage (a 158px left nav rail; we do NOT copy the rail). Section blocks 2834px tall in one flow with 94px vertical gaps between cards (staggered 2-col wall, second column dropped ~120px). Card width 418px, card top block 26.25rem tall (420px) then footer row 115px. Book band header 106px, panel padding 20.1px 0 + 100px field rows.
## (d) Radius, border, shadow
- Radius 0 everywhere except 44px round calendar arrows (50%, 1px #E3E3E3). Cards 1px solid #FFFFFF outline on photo, inner cell borders 1px white. No shadows. Fields: grey ground #FFF with 2px #CACDD4 bottom border.
## (e) Imagery
IMAGERY: photo. Tour photographs (landscape monuments, groups) cropped square-ish 418x~510 inside cards, ratio ≈ 0.82:1 for card, hero full-bleed 1282x900 (1.42:1). Dark scrim ~35% (navy tint) over the photo so white type reads; no radius; no clip-path; the card footer is a 3-cell hairline row (next date / price / small white map silhouette with 2-3 dots). Cards sit in two columns, right column lowered ~120px. Harbor Line: centre 450px white-framed panel (r≈14, 2px white frame) between two full-height photograph columns (each ≈495px) that crossfade per section.
## (f) Decoration
- Vertical hairlines: 6 equal columns (214px) 1px #000 at opacity .11 fixed across the page (3 columns on phones). Top-right slider bars 3 × 52px × 3px, active red #E22632. Corner meta labels 11px on card top ("16 people max"). Heading ls -0.05em.
## (g) Motion
- Load: six navy (#1C2D4F) columns scaleY(1→0), origin top, .6s cubic-bezier(.4,0,0,1), then hero heading `translateY(100vh→0)` .6s same easing. Cards: `translateY(7.5rem→0)` when the wrapper gets `.is-show` (Intersection-based "js-animate" + smooth scrollbar), transition-delay .15 / .27 / .36 / .45s per card in a row; hover: transform .3s, colour .3s same bezier. Hero background slides with 3 progress bars. Library: custom smooth-scrollbar + jQuery + Barba page transitions; no GSAP.
