# Reference tokens (measured with getComputedStyle at 1440x900, Chrome headless)
Reference: https://airregi.jp/shift/ (a shop-shift management product page, landing track). Numbers only; no assets, copy or logos reused.

## (a) Colour (share of the first screen / of the whole page)
| Role | Hex | Where | Share |
|---|---|---|---|
| Main (sky blue) | #20AEE5 | top 40px strip, headline, nav arrows, "free trial" bands, tab fills | ~8% of first screen; two full-width bands on the page |
| Accent (orange) | #F2971B | header CTA, hero CTA, floating-bar CTA (one repeated CTA colour) | ~2% |
| Tint | #E1F0F8 | "five reasons" band, flow band | large mid-page bands |
| Ground | #FFFFFF / #FAFAFA | body, FAQ/industry bands | most of the page |
| Grey band | #E5E5E5 | service banner footer | footer only |
| Text | #555555 body, #222222 headings | | |
| Floating bar | rgba(0,0,0,.70) | fixed bottom bar | n/a |
First-screen saturated share (sat > 0.45, sampled): about 10.5%, photos included.
Relationship to borrow: one cool main on the header strip + headline and bands, one warm accent used only on the single repeated CTA, pale tint bands between white bands. Our version swaps both hues for quiet ones (mauve main, muted copper accent) and keeps the proportions.

## (b) Type
- Family: Avenir Next / Open Sans, then Hiragino / Meiryo (Japanese sans). Latin is a geometric-humanist sans.
- body 16px / weight 400 / letter-spacing .8px (0.05em) / line-height about 1.9 in running text.
- H1 block: tagline about 34px weight 600, tracking 1.36px (.04em), blue; product wordmark is an image.
- Section H2: about 34px / 600 / lh 1.5, centred, blue or near-black (#222).
- Card H3: about 24px / 600 / blue; numerals 96px weight 300 in pale blue (#E1F0F8-ish) beside the title.
- Buttons: 14px (header) / 20px (hero and CTA band) weight 400, tracking .8px.
- Caps: none; Latin is title case.

## (c) Spacing
- Container 1200px (cards run 120 to 1320 at 1440). Narrow reading column about 800px, product card 744px.
- Section padding 64px top and bottom for white bands; the tint band uses about 64px above the head and 24px between cards.
- Header: 40px utility strip + 90px main bar; shrinks to a fixed 90px bar after 40px of scroll.
- Card gap 24px; card inner padding about 48px; image column about 420px.

## (d) Radius, border, shadow
- Cards r16, big video poster r36, tabs r8 top, buttons pill (r36), small chips r4, circles 50%.
- Borders: 1px #E5E5E5 on the product card; folder-tab panel 2px #20AEE5 with r16 and a gap in the border under the active tab.
- Shadows: buttons 0 4px 8px rgba(0,0,0,.16); header 0 5px 14px rgba(0,0,0,.15); cards flat (no shadow) on the tint band.

## (e) Imagery
**IMAGERY: photo.** The main images are real photographs of smiling shop staff (four across under the hero) and product UI screenshots in device frames; the only illustrations are small blue line icons (about 96px) beside three benefit labels, well under half of the image slots.
- Hero staff strip: four equal photos, each 360px wide x 160px visible height (about 2.25:1), edge to edge 1440px, no gaps, the top edge is one shallow upward arch (white curve above, about 30px rise at the centre). No radius otherwise. Position: directly under the hero text block (y 585 to 745).
- Product screens: laptop plus tablet plus phone in one group, right of the hero text, about 620px wide, no crop.
- Reason cards: white r16 cards, text left (about 55%) and a UI crop right (about 35%) or mirrored on alternate cards; numeral pale, 96px, hanging in the left gutter.
- Video poster: r36 blue panel 628x354 with centred round white play disc (80px).
- Style of the photos: bright, high-key, daylight, shop interiors, subjects looking at camera and smiling, warm skin, shallow depth; colour-neutral grading.

## (f) Decoration
- Slash-flanked caption: small 14px semibold text with a backslash before and a slash after, directly above each CTA, grey #555.
- Folder tabs: five tabs (150px wide, 40px high) sit on the top edge of a 2px outlined r16 panel; the active tab is white with outline and breaks the panel border, others are solid blue with white text.
- Numbered circle steps: 24px filled blue circles with white numerals before a bold blue step label, three columns.
- Logo marquee: one row, items 120px high, grey, endless left scroll.
- Header strip: 40px solid blue with 12px white utility links right, pill "Login" outline.

## (g) Motion
- No scroll reveal on content blocks (no AOS, GSAP or observers in the page script).
- Logo marquee: CSS keyframes `infinity-scroll`, 20s linear infinite, 0.2s delay, translateX to -50%.
- Header: at scrollTop > 40px class `is-active` fixes the 90px bar (scroll listener, no transition beyond .3s).
- Floating bottom CTA bar: fixed, 70px, rgba(0,0,0,.7), shown when the first hero CTA has scrolled out of view (about hero CTA offset minus 220px), opacity .3s.
- Anchor links: jQuery animate scrollTop, 1200ms swing.
- Tabs: click swaps panels instantly, hover opacity .3s.
- Case carousel: Swiper with arrows.
