# Reference notes (mapping filled in at the spec stage; binding details in design-spec.md)
Primary: https://noraisinsandwich.com/ (S5-Style, Food & Beverage; sandwich-biscuit patisserie, quiet photographic site).
Tokens: see reference-tokens.md. Screenshots: ref/.

## What the first screen shows
A single full-bleed daylight still-life photo (pale concrete wall, white table with plates, cups, a gift box, small ceramic animals). A small woven emblem and stacked wordmark sit centred in the upper third. Half-ring "NO" and "YES" tabs sit on the left and right viewport edges at mid-height; two capsule tabs fixed bottom-left and bottom-right; dot menu top-left; bag icon top-right. Story: a playful "raisin or not raisin" choice, the site as a table you sit down at.

## Signature candidates
1. Half-ring edge tabs with stacked letters at mid-height on both viewport edges (ref/nora-first.png).
2. Outline capsule tabs with vertical labels fixed at the bottom corners, as the only navigation shortcuts (ref/nora-first.png, ref/nora-products.png).
3. Product rows closing on one slightly slanted 1px rule, price + tiny "tax in" suffix + marker-highlighted status chip + thin long arrow (ref/nora-products.png, ref/nora-grid.png).
4. Parallax ornament that lags behind its wrapper (ref/scroll-nora-before.png, ref/scroll-nora-after.png).

| Reference | Our implementation |
|---|---|
| Full-bleed high-key daylight still life, pale wall upper half, table lower half (first screen) | Full-bleed film-grain interior H1: pale plaster wall upper 45%, baker sliding a peel into the deck oven, floured bench; sp-parallax 10% (design-spec 2, KV #1) |
| Emblem + three-line stacked wordmark, middle line outlined gold | Wheat-ear lattice emblem + "MUGI / BAKE / HOUSE", "BAKE" outlined in russet #6B4540, 4.25rem max (KV #2) |
| NO / YES half-ring edge tabs, fixed, mid-height | OVEN / BENCH half-rings: on the home hero they crossfade H1/H2; on inner pages they link to The Oven Day / Loaves (T1); hidden < 782 px, replaced by a horizontal Oven / Bench pill |
| Outline capsule tabs with vertical labels, bottom corners; ring dot menu; bag icon | BREAD / NOTES capsules fixed bottom-left / bottom-right on every page, ring dot top-left, basket top-right; all CTAs are outline capsules (T2); horizontal pills < 782 px |
| Product rows: price + "tax in" suffix + marker chip + thin long arrow + slanted 1 px rule | Loaves, oven-day hour rows, plans, neighbours, people, journal rows, opening hours all end in this row; rule rise 12 px (2-up / full width) or 6 px (4-up) (T3) |
| 2-up then 4-up product columns (582 / 254 px, gap 72) | Home blocks 3 and 4, Loaves page; same column widths and gaps |
| Ground #F9F6F2, ink #1A1A1A, footer band #E7E5DD, pink / mint chips | Same hex values; russet #6B4540 replaces gold as the single accent (palette rule) |
| Fade-up on enter (js_anime showUp) | sp-reveal--up 0.7 s ease, sp-stagger on grids |
| Parallax inner layer (90 px at 700 px scroll) | sp-parallax on the hero (10%) and the full-bleed counter photo S4 (8%) |
| Grotesque Latin + Japanese gothic | Serif direction required by the design row: Fraunces + Source Serif 4, Noto Serif TC / JP headings; sizes, weights and tracking kept from the tokens |
