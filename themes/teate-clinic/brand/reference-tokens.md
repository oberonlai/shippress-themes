# Reference tokens — Ito Hospital (https://www.ito-hospital.jp/), measured at 1440 px (CSS read from its stylesheet, geometry from screenshots `ref/ito-first.png`, `ref/ito-tall.png`, `ref/ito-visit.png`)

## (a) Colour
- Saturated green gradient (#3d9200 → #18a977 family) on the logo/info card, news tab, 12 tiles and footer; white cards; text #231815 (warm near-black), secondary text #595757; accent orange #f5a729 (returning-patient box), link blue #008dd6, pale sage #8ab36f (sidebar). Area on first screen: sky-blue photo ground ~35%, white ~45%, saturated green ~12%.
- Our translation: celadon #6E8B74 replaces the saturated green; deep #3F5A47 for text-on-pale and footer; pale wash #EEF3EF; ink #22302A; one small ochre accent #C69A5B (orange box role). Saturated share stays ≤ 12%.

## (b) Type
- Latin Ubuntu 300 / Rounded Mplus; CJK system Yu Gothic / Noto Sans JP. Body 16 px, lh ~1.75; section labels 20–26 px bold in green with a 1 px green rule under; card labels 14 px; hero info-card tagline ~20 px. Sans only, no serif.

## (c) Spacing
- Container ~1296 px (x 72–1368); hero row: 306 px left column + 12 px gap + 990 px photo, row height 480; quick-link strip 106 px high under it, 48 px gap; section top padding ~80 px; two-column block (news 628 | hours 636) with 28 px gutter.

## (d) Radius / border / shadow
- Radius 0.5rem (8 px) on photo, cards, strip, tiles; 2–3 px outline boxes in blue/orange; strip shadow `0 3px 8px rgba(0,0,0,.24)`; dotted 2–3 px vertical dividers between the five strip items; dotted horizontal row dividers in the news panel; 1 px green rule under hours headings.

## (e) Imagery (IMAGERY = photo)
- One landscape documentary photograph, ratio ≈ 2.06:1 (990×480), radius 8, no mask, no overlap, right 69% of the row. Flat line-icons (thyroid, building, calendar, question, pin) in green on white. No illustration.

## (f) Decoration
- Round 30 px "+" discs (blue / orange) inside the two outline CTA boxes; round 80 px green hamburger at top-right with white ring; dotted dividers; square "back to top" tab bottom-right (40 px, green).

## (g) Motion
- No scroll animation. Hover transitions only (0.3–0.7 s ease, colour/height); Vue transition-group on the news tab swap. Hamburger opens a dropdown panel.
