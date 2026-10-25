# Reference tokens — recruit.smarthr.co.jp (measured with getComputedStyle, 1440×900, 2026-10-25)
Values only; no assets copied.
## (a) Colour
| role | hex | share (first screen) |
|---|---|---|
| ink / text | #23221F | text + 1px borders, CTA fill |
| base | #FFFFFF | ~45% (label boxes, header, below-fold sections) |
| primary (cyan-teal) | ≈#00C4CC | ~14% (top half band, left→right gradient) |
| deep blue (end of gradient, dithered) | ≈#1A1A9A | ~4% |
| sky (bottom half gradient) | ≈#8CD2EE | ~28% (pastel, low saturation) |
| accent peach (top of bottom gradient) | ≈#F8B4AC | ~8% |
Saturated pixels (s>0.5, v>0.4) = 25.5% of first screen. Ours must be ≤15%: swap cyan for #7FA3B5 steel-blue.
## (b) Type
Family MFW-PGothic (JP gothic), sans fallback. Body 16px / 400 / lh 30.4px (1.9) / ls 0.32px (0.02em). Hero line 110px / 700 / lh 110px (1.0). Hero sub-lines 16px/700 in white label boxes. H2 36px / 400 / lh 54px (1.5). Issue item head ~48px/700 lh 73px in numbered rows. Nav 14px/400 lh 21px. Statement 24px / lh 40.8px. Latin display (Company Deck, "SmartHR が…") wide geometric sans. No uppercase transform.
## (c) Spacing
Header 80px high; full-width layout, 30px page gutter, no max-width container (content spans 1440). Section vertical padding ≈ 120–160px. Two-column heads: title left (≈520px) + 24px lead paragraph from x≈587. Cards 2-up 720px each with 1px divider.
## (d) Radius / border / shadow
Radius 0 everywhere; 1px solid #23221F borders (label boxes, CTA, menu button 80×80, row rules); no shadows.
## (e) Imagery
IMAGERY = photo (below-fold people/event photos 413×202 and 413×217 cards, deck embed 840×565) + generated halftone/dither gradients as graphic backdrop. No illustration at all. Photos: 2:1 and ~1.9:1 landscape, radius 0, no mask, in 3-col card rows. Gradient fields: cyan→deep-blue left→right with 3px dot dither on the right; bottom half pink→sky vertical gradient.
## (f) Decoration
White label boxes hugging each text line (hero line boxes 1px border, text 110px, stepped width); numbered rows (1,2,3) with 80px number column, "+" button 80×50 ink-filled at row end; fixed bottom-right CTA pair 301×80 (white outline + ink fill with white arrow square); 80×80 hamburger box top-right; dither dot size 3px.
## (g) Motion
FV: fade-in 0.8s cubic-bezier(.33,1,.68,1). Section "halftone reveal": IntersectionObserver (threshold .2), mask sweeps left→right 0.8s cubic-bezier(.65,0,.35,1) via Web Animations API maskPosition; no transform displacement. Hover: 0.35s cubic-bezier(.5,1,.89,1) on color, background-size, translate (≈4–8px arrow). Accordion rows: grid-template-rows 0.8s cubic-bezier(.65,0,.35,1). Page transitions: Swup. Reduced-motion: no effect.
