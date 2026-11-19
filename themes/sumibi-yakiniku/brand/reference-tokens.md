# Reference tokens: Kintan (https://kintan.restaurant/) measured at 1440x900 with getComputedStyle and screenshots
Primary reference. Only values and descriptions are recorded; no assets, copy or logos are reused.

## (a) Colour (first screen = 1181x900 photo window + blush margin)
| Role | Hex | Share of first screen |
|---|---|---|
| Ground / base | #F3EDE6 blush | ~13% (left 180px margin, header, every band between photos) |
| Surface | #FFFFFF | ~6% (logo plate, white content bands) |
| Tab band / secondary ground | #E7DED3 | 0% first screen; 60px tab strip |
| Text | #000000 (nav, headings), 85% black on white | ~1% |
| Accent (labels, shop names, tags) | #A78A6D warm tan (rgb 167,138,109) | <1% |
| Photograph (table, meat, wood) | warm orange/brown/pink | ~75% of the screen |
Saturated share of the first screen (HSV s>0.5, v>0.25): **19.7%**, all of it food and wood inside the photograph. Our theme runs the same structure with a low-key photograph and a chestnut accent, so its share must stay under 15% (check-first-screen.py).

## (b) Type
- Latin: Karla 700 13px, letter-spacing 1.12px (0.086em), uppercase nav; section labels Karla 400 12px, ls 1.12px, colour #A78A6D, set rotated (vertical-rl) in the gutter.
- Logo: high-contrast display serif wordmark, ~110x20 in the header.
- Japanese body: Yu Gothic stack 14px / 22.4px line-height, ls 1.12px, black. Statement on the dark band: 28px / 56px (lh 2.0), weight 400, white, ls 1.12px; English line under it 14px, ls 0.1em, 70% white.
- Shop card: area name 12px black; shop name 15px bold #A78A6D.
- No heading above 28px on the home page: the reference is quiet; our largest type is >=4.25rem and lives in the price numerals.

## (c) Spacing and layout
- Container: content column 1080px wide (x 178-1260), 3 cards with 45px gutters; photo bands bleed to the right viewport edge from x=180.
- First screen: 180px blush margin (left) + photo window 1181x900 at x 180-1361 + 79px blush strip at right carrying a rotated label. Window ratio 1.31:1.
- Section rhythm: blank blush band 160-440px high between photo bands; section label rotates in the gutter alternately left (x 85), right (x 1400), left (x 40).
- Header: logo at x 90, y 50; 7 nav items right-aligned to x 1350, gap 27px; blush bar 106px high once scrolled past ~970px.

## (d) Radius, border, shadow
- Radius 0 on all photographs, plates and bands; tag pills 999px with 1px #A78A6D border, 11px text; no shadows; no card borders.

## (e) Imagery
- IMAGERY: photo (candid documentary photographs, natural light, warm wood and steel; no illustration).
- Hero window 1181x900 (1.31:1), square-cornered, 4-photo cross-fade with 4 white dots bottom-right.
- Dark band photo: 1260x500 (2.52:1), left edge at x=180, bleeds off the right edge, darkened to ~35% brightness; one-line statement in white on it.
- Offset portrait 451x520 (0.87:1) at x 629, straddling the border between a blush band and a white band.
- Shop cards 331x223 (1.48:1); white square plate 90x90 docked 15px from the left and 14px from the bottom of the photo, holding a logo.
- Logo plate on the hero: white 182x182 plate flush at the window's lower-left corner (x 200-382, y 700-882), with a soft swoosh cut across its top.

## (f) Decoration
- Rotated 12px tan micro-labels (MESSAGE / ABOUT KINTAN / MENU / SHOP) in the gutters; they fade in over 0.8 viewport heights as the section enters.
- Tab strip: 60px #E7DED3 band, 6 equal tabs 157px wide, active tab white with black text, inactive text tan.
- Outline pill tag 26px high, 1px tan border, 11px tan text.
- No ornaments, no lines, no numbering.

## (g) Motion
- Intro: wordmark alone on white ~2s, then the page fades in.
- Hero: 4-slide cross-fade, 5000ms hold, 850ms change (slick + CSS), dots as pager.
- Section labels: ScrollMagic scene, duration 0.8 x viewport height, triggerHook onEnter, toggles class `active` (fade/rise of the rotated label).
- Header: class toggle `is-scroll` after ~967px (blush bar appears), `is-blacken` when the dark message band reaches the top.
- Dark band: background slideshow (fade, 8000ms delay, 800ms kenburns).
- Shop cards: `fadeInShop` class added on window load/scroll, per-card delay 100ms x index. Tab filter: jQuery fadeIn() on cards.
- Libraries: jQuery 1.12, ScrollMagic, slick, createjs (decorative canvas). Scroll listener throttled at 300ms.
