# Reference tokens — measured on the main reference (REGAL online shop top page, https://www.regal.co.jp/), 1440 x 900, desktop

Measured with getComputedStyle in a headless browser. Only values and descriptions are recorded; no assets, copy or logos are copied.

## (a) Colour (first-screen share, 1440 x 820 crop)
| Role | Hex | Share | Where |
|---|---|---|---|
| Ground (page) | #FFFFFF | ~25% pale | header, page body, cards |
| Band / tile ground | #F6F6F6 (also #F2F2F2 tag chips) | 0% first screen, ~30% of the full page | alternating full-width bands (Pick up, Features), nav strip |
| Ink / hero black | #000000 | ~29% | slide ground behind the mosaic and caption |
| Text | #333333 body links, #000 headings | — | |
| Hairline / dots | #CCCCCC | — | pager dots, rules |
| Accent (notice) | ~#4A66A8 slate blue | ~4% | one-line notice bar only |
| Leather accent | ~#CB5245 / orange tan | ~5% | leather close-ups inside the mosaic tiles |
Saturated pixels (S>0.5, V>0.25) on the first screen: ~10.5%. Rule for us: stay under 15%.

## (b) Type
- Family: Inter (Latin), Noto Sans JP fallback; all sans. Body 14px / 400 / line-height 21px (1.5), colour #333.
- Section H2: 32px / 500 / line-height 32px, Latin caps word (e.g. "RANKING"), padding 70px 0 30px, centred, with a ~11px Japanese sub-label in a block span directly beneath.
- H3: 20px / 400 / 30px. Link / button label: 12–14px / 500. Tag chips 13px / 400.
- Letter-spacing normal; the caps heads are not tracked. Mixed Latin italic serif is used only inside the hero artwork caption ("2016 / Loafers 2017 / Tassel Loafers").

## (c) Spacing and width
- Container 1200px, centred. Header: 59px logo strip + 50px nav row; notice bar 40px.
- Hero slider: slides 889 x 500 (16:9), 10px margin each side, centre padding 50px so the neighbours peek (256px of the left slide and 255px of the right one visible at 1440).
- Section rhythm: H2 block 70 top / 30 bottom, then content, 60–80px before the next band. Bands #F6F6F6 height 330–1050px.
- Grids: 5-up product/staff rows (gap ~20px, each ~224px), 3-up feature cards (each ~390px, gap 20px), 4-up pick-up (each ~290px).

## (d) Radius, borders, shadow
- Outline button: 1px solid #000, radius 0, 278 x 48 (or 135 x 18 text link with padding 0 50px 0 25px and an arrow icon), transition 0.2s ease-in-out.
- Tag chips: bg #F2F2F2, radius 4px, padding 10px 15px 9px, no border.
- Pager dots: 8 x 8 circles #CCCCCC (active darker), 15px from the bottom edge of the slide, ~28px pitch.
- Rank badges: 24px solid circles (gold / silver / bronze / dark) overlapping the top-right of each product image.
- Shadows: none. Hairlines 1px #CCCCCC between list rows.

## (e) Imagery (IMAGERY = photo)
- Main imagery type: **photo** (real-photography; product cut-outs on grey, candid shop and street photographs, one model editorial).
- Hero slide: a 8 x 3 abutting mosaic of 24 tiles (each ~110 x 110, gap ~1px, radius 0) inside a 16:9 black slide: shop-interior wide shots, a seated person trying shoes among stocked shelves, leather grain close-ups (russet and black), tassel and loafer details, then a centred logo plate and italic caption below the mosaic. Low-key, warm leather against grey carpet.
- Product images: ~1:1, shoe on pale grey #E8E8E8, radius 0, 5 in a row. Staff photos: 1.4:1 landscape, radius 0, then a 28px round avatar + shop name + staff name caption. Feature cards: 1.5:1 with caption, date and category below.
- No masks, no clip-path, no overlap except the rank badge and the slide dots.

## (f) Decoration
- Caps Latin H2 with Japanese sub-label (system for every block). Dated information rows: date in grey 12px, a 70px grey category label box, title, 1px grey rule between rows.
- Pager dots under the hero; tab switch "MENS / LADIES" with the inactive tab in light grey #CCC; numbered circles on the ranking; "#tag" chips row.

## (g) Motion
- Hero: slick slider, centerMode, variableWidth, autoplay 3000ms, speed 500ms, ease, infinite, lazyLoad on demand, dots + arrows, drag/swipe; slide opacity transition 0.3s linear.
- Hover: buttons and links 0.2s ease-in-out; tag chips colour 0.4s.
- Scroll: no reveal, no parallax, no scroll listener found on the page (lazysizes only loads images). Result: "none".
