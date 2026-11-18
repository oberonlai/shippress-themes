# Reference tokens — measured on the S5-Style reference (1440x900, getComputedStyle)
Reference: https://tsuzuku-ni-tsuzuke.jp/ (home, /about, /shops). Screens: ref/tsuzuku-first.png, ref/scroll-tz-*.png. Only values and descriptions; no assets, text or logo copied.

## (a) Colour
| Role | Hex | Share of first screen |
|---|---|---|
| Base / paper (middle column) | #F6F1E7 | ~43% |
| Photo column (muted daylight, blue-grey + green) | photo | ~28% |
| Index column (flat deep ochre-brown) | #8E6D2E | ~28% |
| Text and line (same as the brown) | #8E6D2E on #F6F1E7; #F6F1E8 on the brown | — |
| Accent | none: one brown, one cream, hand-drawn lines only | — |
check-first-screen.py on the reference first screen: 34.9% (the brown block). Ours stays ≤ 12% by using a pale clay column instead of a saturated one (see stage-a.md).

## (b) Type
- Display and body: Zen Old Mincho (serif), body 16px / 24px, weight 500, letter-spacing normal, colour brown. Page H1 30px / 30px, weight 900, letter-spacing -0.25px. Group labels in Zen Antique 17.9px, tracking 2.5px (0.14em), cream on brown tab.
- Vertical (tategaki) contents list in the right column, 14–16px, with dotted leaders and a small number at the foot of each line.
- Ours swaps to sans (Outfit headings, Rubik body); sizes scale to the same relationships.

## (c) Spacing
- Frame: three columns on a fixed 1440 stage: 411px photo | 619px scrolling paper (inner text measure ≈ 450px, x 494–945) | 411px index column. Roughly 28.5 / 43 / 28.5.
- Rows: each list item ≈ 112px high between dashed 1px rules; 46px gap above section lines.

## (d) Shape, line, shadow
- Radius 0 everywhere except the pill group tab and the scalloped badge. No shadows. Borders are 1px dashed or dotted brown. The only heavy border is a 2px brown rule under a tab label.

## (e) Imagery — IMAGERY: photo
- Main imagery is documentary photography (people drinking and reading, hands on a bamboo table, booklet flat-lays), soft daylight, muted blue-grey and green. Full-bleed in a 411 x 900 column (0.46:1), no radius, text overlay at the foot in cream.
- Secondary: one hand-drawn line illustration (single brown ink, two people reading under a tree, ornamental scroll frame with bottle and pen glyphs) in the paper column. Photographs are more than half of the picture area, so photo wins. We take the concept only (a framed paper column beside a photo and a contents column), no illustration is reproduced.
- Photo swaps per page (a different photo on each inner page).

## (f) Decoration
- Ornamental scroll border around the paper column, vertical contents list with dotted leaders and a ▾ marker on the current item, scalloped round badge (97px, cream/brown) rotated -12° that rattles every 5s, a bottom news bar with a boxed "latest" label and a ticker, giant faint serif wordmark behind text in the about page, centred sentences each on its own dashed-ruled row.

## (g) Motion
- Smooth scroll (Lenis) + GSAP ScrollTrigger. Intro: logo-blur-in (blur 20px → 0, scale .8 → 1, opacity 0 → 1), text-fade-in (translateY 20px → 0), menu-border-draw (1px border colour from transparent to brown). News ticker: translateX 0 → -50% linear 18s infinite. Badge rattle: 5s linear infinite, rotation snaps -12° → -4° → -12° at 84–90% of the cycle. Hover: colour inversion (cream on brown) on filter tabs. Page change swaps the left photo.
