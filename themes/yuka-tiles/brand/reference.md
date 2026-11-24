# Reference: Yuka Tiles

Reference: https://www.artedomus.com/ (tile and stone merchant; quiet grey/white chrome, full-bleed daylight photography)
The planned reference (the LIXIL site) was already used by another theme, so it was replaced.
No secondary reference (a second candidate failed to render in headless Chromium).
Imagery: photo. Screens: `ref/artedomus-first.png`, `ref/scroll-artedomus-1000.png`, `ref/scroll-artedomus-1900.png`, `ref/scroll-artedomus-2700.png`.
Tokens: `reference-tokens.md`. Full mapping: `design-spec.md` §1, §2, §10.

## Signature techniques (shapes to keep visible)
| # | Reference device | Our counterpart |
|---|---|---|
| T1 | Sun-edge close-up: one full-bleed glazed-tile photo cut by a hard diagonal sun beam / shadow wedge | Home hero: three equal flush portrait photos (porcelain, client kneeling at the low bench with two large tiles and a grout-stick tray, sage glazed corner), 2 px white seams, one continuous hard 112° shadow wedge overlay (rgba(38,34,30,.22)) across all three; repeated as the 60% triptych head on 8 inner pages |
| T2 | Bottom scrim caption plate with a pair of 2 px white outline link boxes side by side (44 px, gap 24) | Every home range panel and the showroom band: scrim 0 → .33 (.66), 2rem white caption, "Borrow a sample" + "Read the spec sheet" boxes; copper 2 px variant beside the hero and in inner heads; plates on Ranges, Borrow, Spec sheets, Projects, The showroom, Journal |
| T3 | Alternating 1-up (1618:1000) / 2-up (720:890) flush full-bleed photo rows, 1-2 px white seams | Home range ledger: 1-up Porcelain slabs, 2-up Natural stone / Glazed wall tile, 2-up Terrazzo / Grout & trims, 2 px seams; also Ranges, Spec sheets, Projects, The showroom, Journal |
| T4 (supporting) | Two-weight header wordmark shrinking on scroll (CSS scroll-driven) | "yuka" Albert Sans 200 + "tiles" 800, #88888A, 4rem → 2rem over 0-120 px of scroll (desktop), centred nav row under it |

## Key visual
Reference first screen: one full-bleed close-up of glazed tile in a hard sun beam, shadow wedge across a corner where two wall planes meet, under a huge quiet wordmark. Story: a surface is judged in real light. Our translation: the showroom window bench at 10:00 as three equal high-key columns (porcelain, the kneeling client comparing two large tiles with grout sticks, glazed tile), one sun edge across all three, text and two outline boxes beside on white, stats row (5 ranges / 640 samples / 7 days / 48 h) below. Motion: wordmark shrink, three-speed parallax on the columns, count-up on the stats.

## Colour
White #FFFFFF and surface #F5F5F5 (exact), one grey #88888A (exact) for wordmark and large captions, darker steps #6F6F72 / #4A4A4D for readable text, copper-grey #7A6758 accent at most 3% of the first screen, muted sage-olive glaze in the photos. First-screen saturated share: reference 0.5%, ours target 2%, hard max 15%.
