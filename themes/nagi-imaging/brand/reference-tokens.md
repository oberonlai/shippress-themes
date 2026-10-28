# Reference tokens — mstage-group.jp (measured with getComputedStyle, 1440x900, 2026-10-28)
Only values and descriptions; no assets or text copied.

## (a) Colour
| role | hex | area |
|---|---|---|
| text / main ink | #49565E (rgb 73,86,94) | ~6% (nav, body, headings) |
| secondary / band | #C5D1D5 (rgb 197,209,213) | full-width band sections (business, contact), ~30% of page |
| base | #FFFFFF | first screen 65% white; page base |
| light grey section | #F2F2F2 | think / recruit / news sections |
| accent | logo blue ≈ #0A86BE | logo mark only; first screen saturated share 2.6% |
White text on #C5D1D5 for large statements (hairline under line 1).

## (b) Type
- Latin display: HelveticaNeueLTPro-Th/Lt; sizes 107.5px (huge section words, lh 130px, ls normal), 44.3px (lh 53.8, ls 2.2px), 22px label (ls 2.2px, colour #C5D1D5), nav 14px ls .7px, caps, weight 400.
- JP: FP-Koburina Go W1/W3 (thin gothic); H1 33.7px lh 1.0 ls .34px weight 400; body 16px; statement lines ~40px thin, ls wide (~.1em).
- All weights 400 / thin. No text-transform (caps typed).

## (c) Spacing
- Sections: business pt 92 / pb 42; company 74 / 177; think 70 / 168; news 181 / 168; kv 100vh (900); message section 5660px tall (pinned sticky statements); recruit / contact full-bleed bands.
- Container: nav padding ~36px sides; text column starts x≈500 (right of centre) in statements.

## (d) Radius / border / shadow
- Photos radius 10.5px, no border, no shadow. Button pill radius 23px, text link style. Hairline 1px white under statement line. Top-left corner: 30px quarter-circle grey decor at (0,0).

## (e) Imagery
IMAGERY: photo (documentary stock-like photography of medical staff, hands, corridors, blurred hospital interior; cool teal-blue cast, soft daylight, no illustration anywhere).
- 8+ scattered rectangles in the kv, aspect ratios ~1.5:1 (279x187, 338x260, 154x113, 255x162, 324x240, 248x165, 414x240, 142x87); biggest centre one 548x309 at x393,y173 (38% width); several cut by the viewport edge (x −232, x 1410, y −200). Radius 10.5px, no mask, no clip-path, no overlap except headline strips.
- Layout: scattered on white across the full viewport, no grid; mix of tiny and large.

## (f) Decoration
- Headline set on white highlight strips (one strip per line, padding ~8px 8px, white bg, thin grey text) overlapping photo edges.
- Logo mark octagon in blue/grey; quarter-circle top-left; bottom news ticker row (date + tag + underlined headline + 2 round arrow buttons, 13–14px) at y≈873.
- Section label "PURPOSE" 22px pale #C5D1D5.

## (g) Motion
- Lenis smooth scroll (library detected: lenis). Kv photos have non-uniform parallax: at scrollY 0→1200 image y shifts only −100px (786→686), −70px (274→204), −90px (660→570): ~0.06–0.08 of scroll (slow drift upward) — different speeds per photo.
- Message section is 5660px tall with sticky-text / title-wrapper / inner (position:sticky): statements pinned, text revealed by line, background turning from white to #C5D1D5 while scrolled.
- Nav link colour transition 0.5s cubic-bezier(.165,.84,.44,1).
