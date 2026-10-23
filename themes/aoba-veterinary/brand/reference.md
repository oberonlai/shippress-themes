# Reference — Aoba Veterinary (draft, stage 1 research)
- R1: https://www.cross-ah.vet/ — Cross Animal Hospital (veterinary clinic; not an S5-Style entry — S5-Style search found no vet category entries; closest industry match with the row's full-bleed photo + info structure). Checked against used list (`grep` of all themes' reference.md): not used before.
- Screens: brand/ref/cross-first.png, cross-full.png, scroll-cross-before.png, scroll-cross-after.png. Measurements: reference-tokens.md.

## Signature candidates (borrow shape/composition/contrast, not copy or photos)
1. **Framed statement box on the hero photo**: 2px navy-outlined, translucent white box (≈462×170) sitting right of centre in the lower half of the full-bleed photo (R1 hero). Ours: ink/Seiheki grey-green-outlined box over the consult-room photo.
2. **Numbered translucent panels on photo cards**: 3 photo cards (≈0.96:1) each with a 260×200 `rgba(255,255,255,.85)` panel holding "01 / title" (R1 feature). Ours: symptoms → method → recovery cards.
3. **Slanted hairline separators in the top nav** (thin "/" strokes between items, flanking the row) + sticky white bar after 110px.
4. **Outlined rectangular buttons with long thin arrow poking out of the right edge**; solid navy timetable block with white dots.
## Colour (ratio)
Main `#183863` ≈3% · Secondary `#aebed7` <1% · Ground `#f5f5f5/#f8f8f8/#fff` ≈70% · Text `#333` · Accent yellow `#e8d030`/coral `#ff7f6e` <2%. First-screen saturated 8.9%.
Row hex `#5F726E` (Seiheki grey-green) = our single muted accent on small areas (replaces navy role); ground off-white.
## Scroll
Feature cards fadeIn 1s ease, trigger at 75% viewport, no displacement (jQuery scroll listener + animate.css); hero bxSlider; sticky nav at >110px. → sp-reveal base, sp-stagger; parallax added per rule 2026-10-22 (R1 has none).
## Our mapping (our mapping; binding detail in design-spec.md)
| Ref feature | Ours (our mapping) |
|---|---|
| Hero: full-bleed 1440×550 photo + 462×170 framed translucent statement box lower-right (2px navy) | T1: home hero 1440×560 P01, 470px box 2px #5F726E, rgba(255,255,255,.62), +6px white outline; same box on every inner-page photo head (360px) and home story band; mobile box in flow under photo |
| Feature cards 336×352 with 260×200 85% white inset panel, 01–03 numerals, over blurred photo band | T2: home block 3 (Symptoms/Method/Recovery, P09/P10/P11 on blurred P03); Services, Cat care, Surgery & dental, First visit, Team |
| Slanted hairline nav separators, 76+41px header, sticky white bar | T3 nav sitewide (1px #bdbdbd, 26px, 20°), CSS sticky header |
| Outlined 280×56 buttons with long arrow sticking out right | All secondary links sitewide; booking button = only filled variant |
| Solid navy timetable block 480×148 with white dots | #5F726E block: home visit, Access, Book, First visit, footer |
| Section label serif ls .3em + 100×2 rule | All home/inner section labels, 100×2 #5F726E rule |
| Greeting + cut-out director portrait | Home block 8: framed 4:5 photo P07 (no cut-out) + #C5D0CC 84px name badge |
| Colour navy #183863 ≈3%, grounds #f5f5f5/#f8f8f8/#fff, text #333, yellow/coral badges | #5F726E ≈3% (row hex), same grounds and text, #C5D0CC secondary, yellow/coral dropped |
| animate.css fadeIn 1s ease on cards; no parallax | sp-stagger + sp-reveal (1s ease) on T2 cards; sp-reveal--up on story/greeting; sp-parallax hero 8% (5% mobile) + story band 10% (6%) + inner heads 6% |
