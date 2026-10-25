# Reference tokens — M.Stage Group (https://mstage-group.jp/), measured 1440×900 with getComputedStyle (2026-10-25)
Only values and descriptions; no assets, copy or logo reused. Screens: `ref/`.

## (a) Colour (first screen ≈ 68% white; saturated share measured on ms-first.png = 3.4%)
| Role | Hex | Area |
|---|---|---|
| Base | #FFFFFF (hero, message, company); #F2F2F2 (think/recruit/news bands, card 1) | ~60% of page |
| Main (mid blue-gray band) | #C5D1D5 (business section bg, contact bg) | ~15% |
| Text / dark | #49565E (body text, nav, dark card, recruit bg) | ~15% (text + dark blocks) |
| Accent | #0086BF (logo hexagon, card 2 "human-resource" bg only) | ~4% |
| Ghost text | rgba(197,209,213) "PURPOSE" label; white 55% hairline on dark |  |
## (b) Type
- Latin: HelveticaNeue LT Pro Light/Thin (headings, nav, labels); JP: Koburina Go W1/W3 (thin gothic). Body 16px / 400, line-height 1.85–2 (JP), colour #49565E.
- H1 (hero statement) 33.7px (2.1rem) / 400 / lh ~1.7 / ls .337px (=0.01em), sits in white highlight strips (padding ~8px 8px) over photos.
- Section eyebrow H2 (PURPOSE/BUSINESS) 22px / 400 / lh 44px / ls 2.2px (0.1em), uppercase Latin; JP sub-label 14–16px under a 1px hairline running to the right edge.
- Card H3 (WELL-BEING) 44.3px / 400 / lh 54px / ls 2.21px (0.05em), uppercase; watermark H3 107.5px / lh 130px, near-invisible.
- Nav 14px, ls .7px (0.05em), uppercase Latin, #49565E. Buttons 14px ls .7px.
## (c) Spacing
- Section padding: business 92px top / 42px bottom, side 84px; company 74/177; think 70/168; news 181/168. Page gutter ≈ 84px (5.85vw). Header fixed, 111px tall, side 36px.
- Business cards: width 945px, inner padding 74px top / 63px left; sticky stack, left column 316px sticky at top 450px. Gap between hero tiles irregular (no grid).
## (d) Radius / border / shadow
- Photo tiles radius 10.5px (≈0.73vw); card radius 32px top-left only; clip-wipe image ends at radius 0 52.7px 52.7px 0 (right side pill). Buttons: pill 23px, 1px border rgba(73,86,94,.6) (white .55 on dark), padding 4px 5px, 46px tall × 170px. No shadows anywhere.
## (e) Images — IMAGERY = photo
- All main imagery is photography (high-key, soft focus, cool blue-teal grade, shallow depth): staff in scrubs on a balcony, hands of adult and infant, corridor with a walking nurse, consultation with a doctor, blurred ward interior.
- Hero tiles: 16 tiles, widths 142–506px, ratios from 1.5:1 to 1.7:1 and a few portrait (167×273); radius 10.5px; object-fit cover; scattered irregularly, 4 bleed off edges (top, left, right, bottom); largest tile (≈548×310) centred slightly above middle; text strips overlap the large tile and the left tile.
- Business cards: 337×189 landscape (16:9) photo inside card; sub-thumbnails 190×95 (2:1) rows; recruit figure ≈1000×600 with clip-path inset wipe and 52px right pill radius, second figure overlapping bottom-right with 40px top-left radius.
## (f) Decoration
- 1px hairline under eyebrow, full width to the right edge; concentric thin white line circles (≈250px and ≈150px, 1px, 40% white) left of cards; giant 107px light-weight watermark word at ~6% contrast behind recruit headline; grey quarter-circle tab at the top-left corner of the viewport (30px).
## (g) Motion
- Hero tiles: slow per-tile fade/drift on load; message section: sticky statement, tile layer ghosts to ~10% opacity while the statement lines reveal in sequence (scroll-linked).
- Business: three cards `position: sticky` (tops −657/−456/−52px) stack over each other as you scroll; left title column sticky.
- Line reveal: spans translateY(100%)→0, 2s, cubic-bezier(.19,1,.22,1), delay 0 / 150ms stagger.
- Image wipe: clip-path inset(20% round 0 10.5px 10.5px 0) → inset(0 round 0 52.7px 52.7px 0) + opacity 0→1, 2s, same easing.
- Card/list items: translateY(20px)→0 1.5s (.19,1,.22,1) + opacity 0→1 1.2s (.37,0,.63,1), stagger 150ms (delay 300ms start).
- Hover: colour/transform 0.5s cubic-bezier(.165,.84,.44,1); circle-button rotate 1s (.77,0,.175,1).
- Libraries: Splide (sliders), Lenis-style smooth scroll in main.js, CSS transitions toggled by rAF/IntersectionObserver-style class (no GSAP).
