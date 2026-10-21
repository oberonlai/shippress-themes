# Reference (stage 1; "Applied in theme" filled from design-spec.md)

## Sources (S5-Style, education category; neither used by any earlier theme)
- R1 https://mauinterview.musabi.ac.jp/ (Musashino Art University interview site; first screen `ref/mau-first.png`, part `ref/mau-part1.png`)
- R2 https://mycampus.jue.ac.jp/ (Nippon Keizai University applicant site; first screen `ref/jue-first.png`, scroll state `ref/scroll-jue-after.png`)

## Signature technique candidates
| # | Ref | Technique (shape, composition, position) | Applied in theme |
|---|-----|------------------------------------------|------------------|
| A1 | R1 | Oversized light serif headline cropped by the viewport's left/top edge (type larger than the column, starts flush at x=0), with a smaller light sub-line under it | T1: home hero "Data, plainly." + close + every inner page head (flush-left Lora, 8.5rem max) |
| A2 | R1 | One portrait photo as a framed window (about 31% of viewport width, 3:4, radius ~8 px) with the person's name set vertically in serif, overlapping the photo's right edge; a 3-line statement sits to its left, vertically centred on the photo | T2: home hero P01 framed 3:4 r8 with vertical "Kazu Moreno"; About, Course page ("Course 01"), Student work, Contact; horizontal on mobile |
| A3 | R1 | Giant pale watermark word (e.g. "Musashino Art U…") on a circular path, rotating behind the photo grid; pale stone (#E8E8E0) on white | Supporting motif: stone ring SVG behind home Student work + Student work page head, sp-parallax |
| A4 | R1 | Edge-to-edge photo mosaic with 4 px gutters, mixed widths per row, rounded 8 px corners | Not used (mosaic reads as collage) |
| B1 | R2 | Dashed hairline outline tabs in the top bar, each a flat pastel tile with small icon + label | Not used (pastel tabs) |
| B2 | R2 | White rounded card (radius ~16 px) with a solid hard-offset edge on the right/bottom (yellow strip, no blur) | T3: white r16 card, 1px ink border, hard 8px #A99BB5 offset; price card, Pricing, Course page, Curriculum, My courses, Courses, checkout |
| B3 | R2 | Big numeral stat cards: pill label overlapping the card's top edge, illustration, giant number with small unit, 2-line note | T3 stat variant: home 3 cards (48 lessons / 14 h / 5 projects) with photo top, plum pill on top edge, sp-count + sp-reveal--zoom |
Take for Kazu (quiet palette only): A1 + A2 + A3 (R1), B2 + B3 structure (R2, recoloured plum on stone, photos not illustrations).

## First-screen measurements (1440x900)
| Ref | Saturated pixels | Dominant colours |
|-----|------------------|------------------|
| R1 | 5.7% (LINE green button + pink name only) | #F8F8F8 71%, pale stone #E8E8E0 4%, ink #000 2% |
| R2 | 25.4% (blue side rail, pastel tabs) | #F8F8F8 32%, sky #78B0E0 17%, cream #F8F0D8 7% — not usable as a ratio, structure only |

## Palette (relationship from R1, accent from design-plan 江戸紫 #6E5A7E)
| Role | Hex | Share | Source |
|------|-----|-------|--------|
| Ground | #F8F8F8 | ~70% | R1 white ground |
| Band / watermark | #E8E8E0 (stone) | ~12% | R1 watermark and mosaic gutters |
| Ink | #1E1A22 | ~10% (text) | R1 near-black type, warmed slightly |
| Accent (main) | #6E5A7E | ~3% small areas | design-plan hex; R1 uses one small hot-pink name line the same way |
| Accent (support) | #A99BB5 (tint of accent) | ~2% | rules, offset edge of B2 cards |
| Spot | none (price button in accent only) | | |
First-screen saturated target <= 8% (cap 15%).

## Scroll effect teardown
See stage-a.md "scroll candidates" table. Before/after: `ref/scroll-mau-before.png`, `ref/scroll-mau-after.png`, `ref/scroll-jue-before.png`, `ref/scroll-jue-after.png`.
Note: no code copied; only timing, trigger and shape recorded.
