# Reference — Aoba Veterinary (draft, stage 1 research)
- R1: https://www.cross-ah.vet/ — Cross Animal Hospital (veterinary clinic; not an S5-Style entry — S5-Style search found no vet category entries; closest industry match with the row's full-bleed photo + info structure). Checked against used list (`grep` of all themes' reference.md): not used before.
- Screens: brand/ref/cross-first.png, cross-full.png, scroll-cross-before.png, scroll-cross-after.png. Measurements: reference-tokens.md.

## Signature candidates (borrow shape/composition/contrast, not copy or photos)
1. **Framed statement box on the hero photo**: 2px navy-outlined, translucent white box (≈462×170) sitting right of centre in the lower half of the full-bleed photo (R1 hero). Ours: ink/青鈍-outlined box over the consult-room photo.
2. **Numbered translucent panels on photo cards**: 3 photo cards (≈0.96:1) each with a 260×200 `rgba(255,255,255,.85)` panel holding "01 / title" (R1 feature). Ours: symptoms → method → recovery cards.
3. **Slanted hairline separators in the top nav** (thin "/" strokes between items, flanking the row) + sticky white bar after 110px.
4. **Outlined rectangular buttons with long thin arrow poking out of the right edge**; solid navy timetable block with white dots.
## Colour (ratio)
Main `#183863` ≈3% · Secondary `#aebed7` <1% · Ground `#f5f5f5/#f8f8f8/#fff` ≈70% · Text `#333` · Accent yellow `#e8d030`/coral `#ff7f6e` <2%. First-screen saturated 8.9%.
Row hex `#5F726E` (青鈍) = our single muted accent on small areas (replaces navy role); ground off-white.
## Scroll
Feature cards fadeIn 1s ease, trigger at 75% viewport, no displacement (jQuery scroll listener + animate.css); hero bxSlider; sticky nav at >110px. → sp-reveal base, sp-stagger; parallax added per rule 2026-10-22 (R1 has none).
## Our mapping (to fill in stage 2)
| Ref feature | Ours (成品對應) |
|---|---|
| | |
