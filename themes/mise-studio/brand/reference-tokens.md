# Reference tokens: lixil.co.jp (measured with getComputedStyle at 1440x900, 2026-11-13)
Primary reference: https://www.lixil.co.jp/ (home), /lineup/kitchen/ (kitchen category), /showroom/ (showroom visit). Screenshots in `ref/`.

## (a) Colour (area share on the first screen, 1440x900)
| Role | Hex | Share | Note |
|---|---|---|---|
| Page ground | #F9F7F1 | ~35% | warm off-white behind the white sheets (our ground: cool plum-grey #F5F3F5, not cream) |
| Sheet / header | #FFFFFF | ~25% | header band 120 px, content sheets with 1 px #E6E6E6 border |
| Photograph | n/a | ~35% | full-width hero 1440x511 (home), 948x550 (kitchen) |
| Text | #4B4949 | small | body and headings |
| Flat grey bar / panel | #949292 | ~2% | accordion bars (white text), hero side panel is #F0F0F0 |
| Accent | #EF7A00 (orange) | ~3% | links, ring bullets, round chevrons, price-free CTAs; we map to plum #6A5A66 |
Saturated share of the first screen measured on the screenshots: 3.3% (home t0), 5.8% (home t1), 0.4% (kitchen). Well under 15%.

## (b) Type
- Family: Hiragino Kaku Gothic ProN / Meiryo / sans-serif (a plain gothic). Ours: Libre Franklin (headings) + Public Sans (body), CJK Noto Sans TC / JP.
- Body 15.2px / 400 / line-height 24.3px (1.6), colour #4B4949, letter-spacing normal.
- H1 (kitchen) 25px / 400; section titles ~28px / 400 with a ring bullet; H2 on cards 16px / 700; card category label 13px / 700 centred; price line 13px / 400.
- Home hero headline (side panel): ~56px / 500 / line-height 1.3, three short lines, dark grey #4B4949.
- Nav: 16px / 500, items separated by thin "/" glyphs, current item has a 2px orange underline; utility row 13px above it.
- Date rows: 14px tabular numerals, link text orange underlined.

## (c) Spacing
- Container 948px (left 246 to right 1194 at 1440), header band 120px (logo 124x67 left, two-row nav right).
- Section padding 53px; gap between sheets 30px; photo grid gutter 0 (cells butt with 1px borders) for the product trio, 24px between thumbnails inside the accordion sheet.
- Sheet inner padding 53px (left text at 300 when sheet starts at 246).

## (d) Radius, border, shadow
- Radius 0 everywhere (sheets, cards, photos). Exceptions: round 32px chevron discs, pill CTA (999px).
- Borders 1px solid #E6E6E6 on white sheets; no box shadows.

## (e) Imagery: IMAGERY = photo
Photographic, bright, high-key, documentary and lived-in: real rooms with real people mid-action (a family in a living room, a cook at a counter). No illustration.
- Hero (home): 1440x511 (2.82:1) full-bleed, photo takes the left 72%, flat light-grey panel (#F0F0F0) the right 28% with the headline; thin white hairline polygon (L-stepped rectangle, 1.5px) drawn over the photo marking a "room"; slider arrows are thin 2px chevrons at both edges.
- Kitchen category hero: 948x550 (1.72:1) inside the container, overlay caption bottom-left (two serif-style lines, white) and a pill CTA bottom-right.
- Product trio: 316x231 (1.37:1) cells, flush, then label block below.
- Space thumbnails in the accordion sheet: 264x175 (1.51:1), 3 per row, 24px gaps, small round badge bottom-right on some.
- Photos sit unmasked, straight rectangles, no cut-outs, no overlap except the outline polygon and caption strips.

## (f) Decoration
- Ring bullet before section titles: 32px circle, 7px stroke in accent, hollow, 12px gap to the title (kitchen "recommended products", "search by space image").
- Title row with underline: title left in 22px/400, 1px #CCCCCC rule across the sheet, small "list" link with a filled 14px accent dot right-aligned (notices, news).
- Accordion bar: 48px high flat #949292 bar, white 15px text, white circle chevron Ø24 at right; opens a white sheet.
- Hero outline polygon: 1.5px white line, rectangle with one stepped notch top-right, covering ~41% x 71% of the photo at left 15% / top 13%.
- Page-top button: 60x60 flat #CCCCCC square, white triangle, fixed bottom-right.
- Dots under strips: 8px circles, current one accent.

## (g) Motion
- Hero slider: jQuery slick, fade, slide speed 2000ms, autoplay every 5000ms, infinite, one slide at a time.
- Strips of banners: slick, 3 slides visible, speed 500ms, arrows + dots.
- Accordion: jQuery slideToggle, ~300ms, linear.
- Link hover: opacity only (transition: all, instant).
- No scroll-reveal, no parallax, no sticky effects (only the fixed page-top button).
