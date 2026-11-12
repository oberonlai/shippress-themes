# Reference (draft) — Asagiri Hotel

Reference: https://www.mampei.co.jp/ (S5-Style gallery entry, classic hotel, photography on a dark ink / pale ground).
Secondary: none. The gallery's front pages had no other unused hotel or stay entry.
IMAGERY: photo (low-key documentary interior and detail photography).

## What we take
1. Dark, nearly black framed hero photo set inside a pale page ground, with a calm centred serif tagline and a one-line "since" statement under it.
2. Section opener: a very large light serif two-line Latin title, a tiny label at its top-right, a short text and a pill arrow link to the right, then a three-photo strip pushed to the right with an empty left gutter.
3. Pale panel whose photo rises above the top edge and overhangs the left edge.
4. Wide inset photo with a translucent card, 6 px top rule, overlapping its lower left.
5. Thin geometric line motif floating at an opener's top-right; fixed bottom pair of small booking tiles.
6. Motion: photo clip-path reveal on enter, text reveal, photo parallax, slide strip with an indicator.

## What we change
- The oxblood full-bleed notice band is not taken (81% saturated). Accent stays below 3%.
- Ground shifts cooler: #E7E4E1 instead of the pink-grey #ECE2DC.
- The intro year counter becomes a night-clock counter in the hours band (not a loader).
- Mid-page ground does not flip per section (already used by another theme).

## Colour sources
See reference-tokens.md (a). Ours (final, design-spec.md section 2): ground #E7E4E1, ink #2A2A28, deep #1B1B1A, panel #F1EEEC, accent #730D0D (reference value kept exact, <=3%).

## Screenshots (ref/)
- mampei-first.png: first screen after the intro
- scroll-mampei-900.png: notice band and introduction (not adopted)
- scroll-mampei-2700.png: Rooms & Suites opener
- scroll-mampei-3800.png: Restaurants panel with photo overhang
- scroll-mampei-5000.png, scroll-mampei-6500.png: inset photo bands (Shop, Weddings) with translucent card

## Our counterpart (filled by the design spec; build must match)
| Reference element | Our version | Where |
|---|---|---|
| Pale 176 px header band, links in two columns, oxblood button, Menu pill | 160 px band on #E7E4E1, 8 links in a 2x4 grid (centred), #730D0D "Book a night" button, Menu pill below 1024 px only | header, all pages |
| Near-black moss macro inset 30 px under the band, past the fold | P01 night porter passes a key card across the desk, traveller sets down a cabin bag; inset 30 px, sp-parallax 8% | home hero (T1); inner page heads use the same dark inset frame |
| Centred serif tagline + "In ... since 1894" | "Awake between the last arrival / and the first departure." + "Open all night beside Aldmere Airport since 2009." | home hero, centred narrow column |
| Intro counting year | sp-count on "2009" in the hero subline; night-clock numerals 23:40 / 00:30 / 02:00 / 05:10 count in a parallax band | home hero; home block 6 |
| Fixed bottom booking tiles | "Reservations / Book a night" and "Late check-in / Held to 04:00", fixed at >= 782 px, in flow on mobile | all pages |
| "Introduction" label with hairline, text at x 308, photo flush right | same label, text at 21%, P02 night manager portrait flush right, seven night-desk names as ruled lines | home block 2 |
| "Rooms & Suites" opener: 96 px two-line title, label top-right, text at 43%, pill arrow, diamond motif, 3-photo strip flush right | "Rooms / we keep" 6rem, label "23:40 · Last arrival", own nested-diamond motif, strip P03 P04 P05 x 380-1410, then the rates table | home block 3 (T2); Rooms, About |
| Restaurants panel with photo rising 68 px above it at x 95 | #F1EEEC panel, P09 1:1 rising 68 px, "First / departure" with "05:10" label | home block 7 (T3a); Rooms, Late check-in, Night pantry, Contact |
| Wide inset photo with 85% white card and 6 px oxblood top rule | P06 16:9 inset 100 px, card 430 px at 30% height, rgba(241,238,236,.85), 6 px #730D0D rule | home block 4 (T3b); Late check-in, Shuttle, Rates |
| Clip-path photo reveal / text reveal / parallax | sp-reveal--wipe on photos, sp-reveal--up + sp-stagger on text, sp-parallax on hero, clock band and inner heads | home and inner pages (never reveal in the hero) |
| Oxblood notice band, per-section ground flips | not used | — |
