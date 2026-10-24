# Reference (draft) — Madoka Childcare
Source site list: S5-Style https://www.s5-style.com/ (category: preschool / kindergarten).
- R1 (main, ~80% similarity target): https://southern-hills.ed.jp/ — Southern Hills Kodomo-en, certified nursery-kindergarten, Inagi (S5 entry 12142).
- R2 (secondary): https://yanokuchi.ed.jp/ — Yanokuchi kindergarten / nursery (S5 entry 12141). Same template as R1 in green; used to confirm which parts are structural vs. colour.
Neither appears in any earlier brand/reference.md. Values: see reference-tokens.md. Screenshots: brand/ref/.

## Palette relation (ref → ours)
| role | ref | ours (final, design-spec §2) | share |
|---|---|---|---|
| ground | #FBFAF3 | #FBFAF3 (unchanged) | ~52% |
| band | #FFD89D | #F3DDBD (L +3.9%, chroma reduced: row note asks for a quiet ground; ref peach has HSV S 0.38 > the 35% gate threshold) | ~25% |
| light card | #FFFBE2 | #FDF8E6 | ~12% |
| accent | #EC7600 | #7A6858 walnut (row hex, the one muted accent; headings, logo blob, time digits) | <3% |
| spot | #E4E959 | #E2E1A2 (muted; badge and time blobs) | <1% |
| ink | #372828 | #372828 (unchanged) | text |
Ref first screen saturated 3.3%; ours target ≤ 6% (cap 15%).

## Signature techniques to use (2–3 visible, carried into ≥4 inner pages)
| # | technique | ref | ours (成品對應, design-spec §1) |
|---|---|---|---|
| T1 | Hand-torn wobbly edge on the hero photo frame and between tinted bands | R1 hero frame 1386×787 inset 27/86/27, 28px corner, 3–6px wobble; band edges 8px amplitude; cream cards with torn edges | Home hero P01 in own `frame-torn.svg` at the same size/inset; torn `edge.svg` (8px) on day band, garden parallax band, whole-day card, price card, visit band, footer; inner page-head banners (3.2:1) in the torn frame on all 11 pages |
| T2 | Organic blob-masked photos overlapping a band edge with a white label tab | R1 policy: egg-shaped photo across the peach/off-white edge, white 286×63 tab with the next title; flat orange/yellow blobs behind the lead photos | Home: P05 egg 440×404 across the day-band edge + tab "A day at Madoka"; P17 pebble across the visit band + tab; white tabs on room cards; flat sand/walnut blobs behind the welcome photos. Inner: About, Care day, Rooms, Educators, Food, Fees, Enrolment, Stories, Visit |
| T3 | Rotated numerals 01–03 and stripe-per-line headings (wipe in) | R1 h2 lines each on an off-white stripe, accent text; numerals 85×85 weight 200 in a yellow blob on the photo corner | Every heading `.mc-stripe` (walnut on #FBFAF3/#FFF stripes, lh 1.8) with left→right wipe; day-schedule times 07:30/09:30/17:00 in 128×104 spot blobs on the zig-zag photos (home), all 9 times on The care day, numerals 01–05 on Enrolment, 01–03 on Rooms |
| (T4) | Round floating badge, fixed bottom-right | R1 132px yellow-green circle, hard 4px shadow, dotted label, hidden near footer | Supporting detail: 132px spot badge "Book a visit", fixed 68/68 on ≥782 (hidden behind the footer by z-index), inline 104px on mobile; all pages |
Scroll effects used (design-spec §10): E1 wipe on stripe headings, E2 zoom+stagger "pop" on blob/lead photos and time blobs, E3 sp-parallax on hero, garden band and inner banners.
Scroll effects: see stage-a.md table; screenshots brand/ref/scroll-*.png.
