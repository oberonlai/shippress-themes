# Reference notes — Yanagi Hygiene (commercial pest control, treatment-plan landing page)

Reference: https://www.asante.co.jp/ (a Japanese termite and pest-control company). Secondary: none (one reference is enough; the signature set below is already four moves).
Screenshots: brand/ref/asante-first.png, brand/ref/scroll-asante-900.png, brand/ref/scroll-asante-1800.png, brand/ref/scroll-asante-3600.png. Tokens: brand/reference-tokens.md.

## What the first screen draws
A documentary photograph taken from inside the floor void: a technician in a bright suit with a headlamp lifts his head beside a gnawed timber post. Two light lines of headline copy sit top-left, wide-tracked. The bottom edge of the photo is a white city skyline silhouette, then a shallow arc into pale green. Story: "we look where nobody looks so the home you remember stays safe".

## Signature candidates
1. Skyline-cut photo foot (white silhouette of buildings and towers + shallow arc into a tinted wash).
2. Tall post splitting the key photograph with the worker beside it (subject placed right of centre, structure left).
3. Pill hotspots on a cutaway of the building (green + pills) — becomes our annotated floor-plan.
4. Fixed floating action bar after 500px: arrow-notched charcoal tab + two contact tiles, fades in.
5. Section title lockup: large light Latin title, small sub-title, 96px rule, on a tinted arc-edged wash.
6. Grey testimonial panel with inset hairline frame and green chevrons.

## Chosen colour relations
Ground white; pale wash for alternating bands; one saturated colour on pills and headings only; the photograph is the dark mass.

## Our mapping (finished-product column filled by the design step; binding detail in design-spec.md)
| Reference | Ours | Built as (finished product) |
|---|---|---|
| Floor-void KV photo, headlamp worker, post splitting the frame | Ceiling-void documentary photo I01: technician through a lifted tile, headlamp beam, steel hanger at x 50-56%, manager with floor plan below | Home hero Cover 1440x680 (2.1:1), `sp-parallax` --sp-par 8% (6% mobile); white two-line H1 top-left, Manrope 300 3.5rem |
| 1. White skyline foot + shallow arc into pale green | T1: white commercial-street silhouette (office, cafe, sawtooth warehouse, hotel tower, mast) + 80 px bowl arc + 12-month tick rail with 4 orange visit markers | `assets/images/skyline.svg` on the Cover `::after` (130 px desktop / 64 px mobile); rail in the white strip; same foot (90 px) on every inner page head |
| 3. Green ⊕ pill hotspots on a house cutaway | T2: six #449A52 ⊕ pills on a drawn commercial building section (ceiling voids, kitchen lines, docks, bin stores, plant rooms, kitchenettes) | Home #sites, `section.svg` 1000x760 + `<details>` pills; continued on Sites, Inspection (kit photo I11), Plan (rail seasons), Records (findings plan) |
| 4. Floating bar with charcoal pentagon tab + tiles | T3: pine #4A5852 pentagon tab with 3 px white inner outline, one orange-framed info tile | sticky-bottom bar (last child of the wrapper from #sites), header mini tab, large tab in #request; one wording "Request an inspection hour" |
| 5. Light Latin title + sub-title + 96 px rule on arc-edged wash | T4 lockup: Manrope 300 4.25rem .08em #449A52, 1.125rem sub-title, 96x1 px #9DB8A4 rule, 80 px bowl arcs | every Home section and inner page head |
| 6. Grey testimonial panel with inset hairline frame | Logbook cases panel #EBEBEB + #CCC frame inset 20 px, four cases photo-left/text-right | Home #cases (I07, I08, I09, I16) |
| Endless linear tile strip (Swiper, speed 3500) | Site-type text tiles 300x120, gap 40 | Home #2 `sp-marquee` 40 s linear |
| KV push-in scale 1 to 1.08 | Scroll-driven parallax | `sp-parallax` on hero and the dawn band (I05, 10%) |
