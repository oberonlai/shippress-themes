# Reference tokens (measured with getComputedStyle + pixel sampling, 1440x900, 2026-11-21)

Primary reference: https://fes.common-s.org/ (festival site; photographic night-lantern imagery). Secondary: https://chillin-vibes.com/ (picnic music festival; used for structure only, its illustration is NOT copied).
Only values and descriptions are recorded; no assets, copy or logos are reused.

## (a) Colour
Primary site (page ground, share of first screen / measured):
| Role | Hex | Share |
| ground (body) | #EDEFF0 (cool pale grey) with a white-to-grey vertical gradient under the header | ~36% |
| white sheets / header | #FFFFFF / #F8F8F8 | ~20% |
| ink text | #000000 body, #828487 grey headings | <3% |
| accent 1 (logo red) | #E60012 | slide placeholder + corner badge, 27% while images load |
| accent 2 (blue) | #0068B7 / #5898C8 | slide neighbours + logo digits, ~17% |
| photo content | warm amber night lanterns on near-black | thumbnails only |
Measured saturated share of first screen: 51% at load time (flat colour slide placeholders). **We do not copy this**: our slides are low-key photographs, so our saturated share stays below 15%.
Secondary (chillin-vibes): light green #DDE9A9 ground 62%, deep green #285848 slanted panel 21%, white 4.5%; saturated share 22.6%.
Our translation: ground #ECE9EE (cool lilac-grey), ink #1B1220, plum #460E44 only on the corner badge, one tab and rules (<6%), brass #B58B4A hairline accent.

## (b) Type
- Primary: Inter + a heavy gothic (Japanese display), body 16px/1.0 default (studio.design export), nav `p` 14px, weight 600, letter-spacing 0.56px (0.04em), colour #FFF on hover state.
- Section headings (h2): 32px / 38.4px line height, weight 600, colour #828487, sit beside a thin "|" and a small 12px Japanese label.
- Giant word NEIGHBORs inside the sheet: ~96px grey #828487 weight 700.
- Ours: Bodoni Moda display (thin high-contrast, largest >= 4.25rem), Karla 17px/1.85 body, caps labels 12px tracking 0.18em.

## (c) Spacing
- Header 96px tall, logo at x32, nav right (x 486-1311), gap about 32px.
- Slides row: y96-544 (448px high), centre slide 672-796px wide (x322-1118), neighbours cut at the viewport edge, 64px gaps.
- Thumbnail strip: 6+ tiles 212x140, gap 30px, y593-733 (fixed, behind sheets).
- Sheet: x76-1364 at 1440 (white, ~1288 wide), content column ~900, section padding 80-120px.

## (d) Radius / border / shadow
- Slides radius 48px; thumbnails 20px; sheets 56-64px; nav pill buttons 999px with 1px hairline #1A1A1A; no shadows (flat); sheets separated by background colour only.

## (e) Imagery
IMAGERY: photo. Documentary night-festival photography, warm lantern light, shallow depth of field, near-black surroundings, people seen from behind or in profile, packaging/goods flat-lays on pale grey.
- Slides: ~1.78:1 to 1.5:1 landscape, r48, no mask, three across, centre raised in size, neighbours cropped by the viewport.
- Thumbnails: 1.5:1, r20, one row, fixed behind scrolling sheets, drifting left.
- Membership photo block inside a white sheet: 2x2 mosaic of 1:1 wood-card close-ups, r16.

## (f) Decoration
- Fixed quarter-circle date badge, 213x~400 px bottom-right, #E60012, big date numerals 40px white, thin dotted divider, white pill "venue" chip.
- Thin vertical "|" divider between a heading and its small label.
- White rounded sheet with a hairline-boxed wordmark panel.

## (g) Motion
- Thumbnail strip drifts left continuously (~20 px/s linear, measured -40px per 2s), fixed position.
- Sheets (position sticky, top 0 at scroll) rise over the fixed strip and slide on top of it; the strip stays visible at their left/right edges.
- Slides cross-fade/slide (carousel). Hover transitions on every box: 0.3s cubic-bezier(0.4, 0.4, 0, 1); body background 0.5s same curve.
- No library found besides the studio.design runtime (CSS transitions, sticky/fixed layers).
