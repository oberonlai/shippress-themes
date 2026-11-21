# Reference tokens — Picchio (https://picchio.co.jp/), measured 2026-11-21 at 1440x900 with getComputedStyle
Source for every number: live page, screenshots in `ref/`. Only values and descriptions are recorded; no assets, copy or logos are reused.

## (a) Colour (area share = share of the full 7,824 px page, first screen measured separately)
| Role | Hex | Where | Share |
|---|---|---|---|
| Photo ground (first screen) | aerial forest green + sky blue | full-bleed hero film | 100% of first screen (saturated pixels ~41%) |
| Base | #FFFFFF | page ground, footer | ~55% of page |
| Wash | #E6F0F8 | "About" band, 2,390 px tall | ~30% of page |
| Primary | #094A81 (deep navy; 43 CSS uses) | news bar, menu tile, accent numerals, line art | ~3% |
| Text | #000000 / #101010 | headings, body | — |
| Accent | #FFE300 / #FFE000 (yellow) | logo disc only | <1% |
| Secondary | #006FBA, #F5F5F5, #AFAFAF | links, light grey blocks | <1% |

Our translation: primary #006E54 (evergreen, in the plan), wash a pale cool green-grey #E4EEEA, base #FFFFFF, ink #1B2622, one muted warm accent #C9962B used only for the timeline "now" tick and small numerals. First-screen saturated share target <= 15% (photo is high-key and pale; Picchio's 41% is deliberately NOT copied).

## (b) Type
- Display and headings: Noto Serif Japanese (mincho), weight 300. Body and UI: Yu Gothic / Noto Sans family. (Ours: sans only, Hanken Grotesk headings, Public Sans body, per the plan.)
- h1 (hero, vertical, SVG outline glyphs): 41.6 px tall glyphs, stacked vertically, white, centred at x 620–820, y 208–675.
- h2 section title: 32 px / lh 41.6 px (1.3) / ls 1.6 px (0.05em), caps Latin + small JP subtitle 16 px under it, centred.
- h3 row title: 25.6 px / lh 43.5 px (1.7) / ls 1.28 px (0.05em), max 2 lines in a 300 px column.
- Body: 14.94 px / lh 26.9 px (1.8), regular; 300 px measure (about 15 CJK chars per line).
- Nav: 17.6 px / ls 0.88 px, white on the photo; sub-nav 14.4 px.
- Tags: 13.6 px, 1 px vertical bars between items (not pills).
- Button "MORE": 14.94 px, a thin 18 px arrow then a caps word; no box.
- News bar label: 22.4 px caps serif; ticker line 14 px.

## (c) Spacing
- Header 110 px tall, padding 10 / 40; logo disc 60 px at left.
- Container: rows run x 110 to x 1330 (1,220 px) inside a 1,440 viewport (110 px side gutters).
- Section top padding 80 px; heading block 133 px tall; row to row gap 80 px; row = 440 px photo height.
- Row columns: text 300 px at x 110, 40 px gap, photo 880 px at x 450 (mirrored rows: photo x 110, text x 1030).
- About band: full width, 2,390 px, inner column 1,220 px; two-column list: photo 540 px left (x 160), list x 740–1280 with 120 px square thumbs, row pitch 155 px.
- Footer 390 px, white, padding 40 / 0.

## (d) Radius, borders, shadow
- Radius 0 on photos; circles only on the three facility photos (312 px). No shadows anywhere. Borders: 1 px black vertical bars between tags; 1 px white underline on header utility links.

## (e) Imagery
- IMAGERY: photo. Documentary, natural-light, real people in plain outdoor clothing (binoculars, tripod), animals in the wild; slightly saturated greens. Illustration is only a thin blue line-art accent (see (f)), well under half of the image area, so the site is photo-led.
- Hero: aerial forest and volcano, full-bleed 1440x820 plus a bottom bar.
- Tour rows: 880x440 (2:1) photos, radius 0, flush with the text column's baseline, text column on the opposite side; row 3 photo is 880x587 (3:2). Photos sit at 61% of the container width; the text column is 25%.
- Facility trio: three 312 px circles (circle mask), 386 px pitch, centred captions below.
- About: a 1,220x467 wide photo (2.6:1) with right-aligned 3-line white headline over it; a 540x~620 portrait with a white caption tab (260 px wide) docked at its lower-left corner; 120 px square thumbs in the list.

## (f) Decoration
- Round emblem (30 px) centred above every section title.
- Hand-drawn blue line-art (bird 130x190, flying squirrel 180x150, telescope 170x270), stroke ~1.5 px #094A81, placed on the SEAM between the text column and the photo: it overlaps the photo by about 60 px and the title by about 20 px, z above both.
- Corner menu tile: 110x110 px navy square fixed at top-right after the first screen, two short white dashes inside.
- Hero foot: white 240x80 tab bottom-left (play icon + "PLAY MOVIE"), navy 720x80 bar bottom-right ("NEWS" 22 px + one ticker line + arrow).
- reCAPTCHA badge ignored.

## (g) Motion
- Hero: h1 group scale 1.4 to 1, 3 s, Power1.easeOut (TweenMax), each glyph path fades from opacity 0, y 10 px, random skew (-90 to 0), 2 s, random delay 0 to 1 s, easeOut; loader fades 2 s after a 1 s delay.
- Header utility link fades out/in 0.5 s on scroll; corner menu tile cross-fades 0.5 s; mobile header-inner 0.5 s y 10 px.
- ScrollMagic reveal blocks (row text x 20 px, row photo y -20 px, 1 s, Power2.easeOut, triggerHook onEnter) exist in the source but are commented out: no scroll reveals are active.
- Tab swap: 0.5 s opacity cross-fade.
