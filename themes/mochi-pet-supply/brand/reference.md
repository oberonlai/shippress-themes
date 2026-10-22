# Reference (stage 1; site mapping filled by design-spec.md)

## Sources (S5-Style, food/subscription, closest to a pet-food subscribe-and-save store; none already used in other reference.md files)
| Site | S5-Style | Role |
|---|---|---|
| https://www.tsuklio.com/ (Tsuklio, prepared-meal subscription) | https://www.s5-style.com/11708/ | Main reference, measured in reference-tokens.md |
| https://ginger.sakatashop.jp/ (Sakata Nobuo Shoten, ginger EC) | https://www.s5-style.com/11995/ | Secondary: mustard buy tab, photo-led fold, dark scrim interlude |
Screenshots: ref/tsuklio-fold.png, tsuklio-menu-band.png, tsuklio-pickup.png, ginger-fold.png, ginger-s2.png; scroll before/after: ref/scroll-tsuklio-fade-before|after.png, scroll-tsuklio-parallax-a|b.png, scroll-ginger-before|after.png.

## Signature moves (candidates; Tsuklio T, Sakata S)
| # | Move | Shape / composition / position | site mapping |
|---|---|---|---|
| T1 | Floating pill nav | 780×54 white bar centred, fixed, 10px radius, 1px #e1e0e0, square accent menu button at right | **Used (spec T1)**: global `header.mo-pill` 780×54 fixed top 15, r10, 1px #e1e0e0, mustard #B8973F 36px r8 square = cart; plus the Tsuklio 350×84 hero chip as "Next dispatch · order by 14:00" bottom-right over hero column 3 (≥1024) and in-flow on the home visit block |
| T2 | Staggered two-column photo mosaic beside a statement | left ~46%: two columns of mixed-ratio photos (0.73/1.47/1.03/0.68), 20px gaps, 10px radius; text right with eyebrow + 2-line headline | **Used (spec T2)**: home `concept` 614px mosaic, 2×297 cols, same ratios (S4/S5 · S6/S7), col 1 offset 64, r10, each photo `sp-parallax` 10%; green eyebrow + 52px 2-line statement; continued on About, Food finder, Nutrition desk, Feeding guides, Delivery, Visit |
| T3 | "Next delivery" card + product carousel on a rounded accent band | band with rounded top corners; centred 1040px off-white card (collage + date tag + arrow button); below, square 317px product cards with category tag top-left and round "+" bottom-right | **Used (spec T3)**: home `box` full-bleed band in ink #222222 (row forbids full-bleed accent), 16px top corners, 1040 #f7f5f2 card with P1+P4/P6 collage, mustard tag + arrow; scroll-snap strip of five 317px square cards with tag top-left and white "+" bottom-right; continued on Shop, Single product, Food finder, Subscribe & save, Stories, Nutrition desk |
| T4 | Flat vector icon cluster | 5–7 flat shapes in accent/green/peach at the text column corner and as a footer row | Not used (row requires photographic imagery only) |
| S1 | Small pinned mustard buy tab | top-right edge tab, mustard fill, vertical text | Not used as a tab (vertical text forbidden on mobile); its mustard-on-ink relationship lives in the T1 mustard cart square |
| S2 | Scrim crossfade interlude | full-bleed photo that dims to dark with centred copy lines on scroll | Supporting: home `interlude` Cover S8, #222 overlay 38%, two Alegreya italic 2rem lines, `sp-parallax` 12%; also on About |

## Palette (ratios; ours must stay low-chroma, first-screen saturation ≤15%)
Main #f58220 (23% of ref page; ours: only small areas, use mustard #B8973F), sub #509146 (<2%), ground #fff / #f7f5f2 (~70%), text #222, tints #fff3e5 / #e8eee5. Mustard tab reference #b2911a–#ebc742.

## Scroll effects (Tsuklio, GSAP; Sakata: none scroll-driven apart from a dim scrim)
See stage-a.md table and reference-tokens.md (g).

## site mapping — palette
Ground #ffffff/#f7f5f2, text and band #222222, sub #509146, tint #e8eee5 kept exact; main #f58220 → row accent #B8973F on small areas (≤4%); tint #fff3e5 → #F6F0E1. Full mapping and similarity table: design-spec.md §4 and §12.
