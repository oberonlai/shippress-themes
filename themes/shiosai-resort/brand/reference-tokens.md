# Reference tokens (measured, English only)

Primary reference: https://www.carpediemsantorini.com/ (measured 1440x900 with a headless browser, computed styles; values only, nothing copied).
Secondary reference: https://mangrovehotel.com.au/ (measured the same way).

## (a) Colour (Carpe Diem)
| Role | Hex (approx.) | Share of first screen / page |
|---|---|---|
| Photo: deep sea blue + sky | #6080C0 / #80A0C0 / #2060A0 | ~44% of the first screen is saturated (s>0.5) photo blue. Ours must stay <=15% (muted film-grain sea). |
| Page ground | #F7F2EE (warm paper) | ~85% of the page after the hero |
| Text | #000000 headings, #212121 body | |
| Header chip | #FFFFFF bar, #C5BBB6 language cell, #000000 "Book now" cell | top 100px |
| Accent | blush disc #F6D3C8 (small, 168px) | <1% |
Mangrove: coral panel #DB8963 (19% of its first screen), white page, charcoal text #404040, aqua #A0C0E0 only in photos.
Shiosai translation: ground #F4F8F9 / white, text #1F2F36, primary sea #84B9CB used only as thin lines, pager dots, markers and one band; deep ink #23414D for the CTA cell.

## (b) Type (Carpe Diem)
- Display: geometric extra-light sans (ITC Avant Garde ExtraLight), lowercase, h2 78.4px / lh 87.8px / weight 400 (thin), ls normal.
- Eyebrow / h1: Avant Garde Medium 14px uppercase lh 24px.
- h3: serif (Ogg) 16px uppercase ls 0.96px lh 25px.
- Body p: Ogg 18px lh 24px ls 0.9px, colour #212121. Links 14px ls 0.9px.
- Roman numerals I-IV set in serif 24px next to uppercase eyebrow.
- Mangrove: DIN-style sans 15.6px body, 31.3px room titles (weight 500), uppercase 13.5px micro labels with 0.12em tracking.

## (c) Spacing
- Hero 100svh (900). Header fixed, 100px tall, three zones: menu (left) / centred wordmark / lang + book cells (right 200px).
- Chapter sections: padding-bottom 135px, content columns max ~1366px, text measure 640-670px centred.
- Fixed left pager at x=37: label rotated 90deg + 6 dots every 41px, one 1px line behind the active dot.
- Four-up facts grid: 2 columns x 2 rows, column gap ~40px, each cell with a bottom 1px hairline, row gap ~64px.

## (d) Radius, borders, shadow
- Buttons: 2px radius, 2px solid #212121 outline, padding 8px 28px. No shadows anywhere. Hairline rules 1px #D9D2CC.
- Circle photo mask (our non-use): 436px circle with 168px blush disc overlapping top-right.

## (e) Imagery
IMAGERY = photo. Colour-graded travel photography, people present in the scene (a man in white carrying a towel at a pool edge, a woman resting on the edge, backs turned), strongly saturated sea, no illustration.
- Hero: full-bleed 16:10 crop, 100svh, a 3-slide cross-fade.
- Chapter photos: circle (436px), plus wide 1366 x 546 (2.5:1) bands that start at scale 1.08 and settle to 1.0.
- Mangrove: wide 2:1 room photos in a horizontal slider with prev/next names; white page between photos.

## (f) Decoration
- Fixed pager: 6 dots (5px) + rotated 11px label, x=37, y 280-620.
- Highlighter: pale grey (#C8C8C8 at ~60%) marker band behind 2-4 word phrases in body copy.
- Roman numerals I-IV; 1px hairline under each fact cell.
- Docked booking bar at hero foot: white, 1100px wide, 100px tall, four cells (guests / check-in / check-out / black CTA cell).

## (g) Motion
- Section images: `anim__scale` scale 1.08 -> 1 in 1.7s cubic-bezier(.16,.01,.77,1), triggered at chapter centre-top (skrollr).
- Section grounds: class toggles at centre-top, 0.64s same easing.
- Parallax: translateY from 16% -> 0 and -300px -> 0 across the viewport (skrollr data-top-bottom / data-bottom).
- Hero: slow cross-fade, autoplay 6s.
