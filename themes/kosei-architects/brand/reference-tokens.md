# Reference tokens — R1 Showa Sekkei (https://www.showa-sekkei.co.jp/), measured 2026-10-23 at 1440×900 with getComputedStyle (values only, no assets copied)
(R2 = STAGE Lab https://stagelab.inkdom.jp/, secondary: crop shapes, drifting photo row, sage tint; measured by screenshot/pixel sampling only.)

## (a) Colour (CSS variables read from style.css)
| Role | Hex | Share of first screen |
|---|---|---|
| Ground | #FFFFFF | ~62% |
| Pale panel / hero shapes / footer-light | #F2F0EF (primary-100) | ~25% (hero shape field + Philosophy card) |
| Footer band | #EBE6E2 (primary-200) | footer only |
| Text | #222222 ; muted #6B6B6B ; disabled/inactive #A6A6A6 ; hairline #DDDDDD / #A6A6A6 | — |
| Accent (marker squares, arrows, logo mark, scroll-to-top tab, hero diagonal shapes) | #A92B5F | **5.5% saturated** (all in the hero shape + tiny markers) |
Relationship: white + warm-grey pale ground, near-black text, ONE saturated accent used for ~5% and only on small marks plus one hero graphic. R2: ground #F0F0F0/#FFFFFF, sage tint #D0E0E0 (about 12%), ink #222 pill CTA; saturated 4.7%.

## (b) Type
- Body: Noto Sans JP 16px / 400 / lh 28.8px (1.8) / ls 0.48px (0.03em), #222.
- Latin display (nav, section titles, numerals): Heebo. Nav 18px/400, lh 19.8, ls 0.54px, `capitalize`. Section h2 "Pick Up" 23.76px/500 lh 26.1 ls 0.71; large section title ("Projects", "Service") 43.92px/400 lh 48.3 ls 1.32px.
- Hero headline (JP, light weight, 2 lines, left column): ≈52–56px, lh ≈1.2 (eyeballed from screenshot, not measured), colour #222.
- Row titles (service list): Noto Sans JP ≈28px/500 (screenshot); descriptions 16px/#222 then 16px/#6B6B6B second paragraph; meta labels 14px / lh 25.2 / ls 0.42.
- Small index numerals "00 01 02": Heebo 13px, lh 14.3, ls 0.39, #6B6B6B.

## (c) Spacing
- Container: content from x=41 to x=1399 (1359 wide at 1440, ~41px gutters); nav height 72px.
- Section padding: 110.8px top and bottom (Service band, 888px tall).
- Hero: two columns, left text column x32–569 (537 wide), right graphic x629–1440 (full bleed to the right edge, 540 tall, y92–632).
- Service rows: 201px / 187px tall, hairline between, 3 columns: label+thumb (x41–200), title (x233), description (x863–1399); top table header "Title | Explanation" 12px muted.
- Pick Up cards: 330px slot, image 310×206 (3:2), 20px gap, vertical hairline dividers.

## (d) Radius / border / shadow
- Radius 0 everywhere. Borders 1px #DDDDDD/#A6A6A6 hairlines (hero grid lines, service rows, nav divider). Shadow none.

## (e) Images
- Pick Up: 3:2, 310×206, radius 0, small meta line (red square + "News Release" + date) below, title 16px, arrow bottom-right.
- Services: thumbnails ≈101×67 (3:2) under the English label, radius 0; on hover the image widens to 40% of the row.
- Full-bleed interlude photo: 1440×~890, darkened ~45% black overlay, no text (a quiet band between Service and News).
- Hero right: a grid of 4 big panels framed by 1px lines (2 cols × 2 rows), diagonal parallelogram stripes in #F2F0EF and #A92B5F cut by the panel edges.
- R2: photos crop with stepped/notched corners (an L-shaped cut-out), arch-shaped tall photo at the right edge, photos in a horizontally drifting row with different heights (staggered y offset ±60px).

## (f) Decoration
- Marker: 8×8 square #A92B5F before labels (e.g. "■ 00 Philosophy", "■ News Release"), gap 8px.
- Arrow: ↗ glyph ≈16px in #A92B5F at the bottom-right of each row/card; link buttons = underlined text + 36×36 #A92B5F square with white ↗.
- Hero panel: Philosophy / Architecture / Infrastructure / Sustainability list with 01–03 index, active row on #F2F0EF panel, others #A6A6A6; a 1px black progress line (265px of 537px) above the list.
- Scroll-to-top tab: 50×184 vertical #A92B5F tab, white rotated "Scroll To Top", fixed right edge.
- R2: sage #D0E0E0 blob/arch shapes behind photos; line-illustration figures (not used by us).

## (g) Motion (see stage-a.md table)
- Global transition var: `--mh--duration: .3s`, `--mh--easing: ease` (hover, colour).
- Reveal: IntersectionObserver (rootMargin bottom −100px, threshold 0, once) adds `is-animated` to `.js-c-anime-elem`; `data-anime=fadein-up|left|right`: opacity 0→1 + translate 30px→0 over .3s ease (long page cards use the same), `data-anime-delay` .1/.2/.3/.4s steps.
- Image slide-wipe (`c-slide-anime01`): pale panel `::after` animates width 0→100%→0 with left 0→0→100% (a block sweeping across the image), 1.1s `cubic-bezier(.165,.84,.44,1)`, image revealed at .55s (visibility switch).
- Rules: `::before/::after` hairlines of list items scaleX 0→1 on entry; ScrollTrigger (GSAP, bundled) for the horizontally sliding Projects strip; Splide slider autoplay for Pick Up.
- R2: Lenis smooth scroll (duration 1.2s, ease `min(1,1.001−2^(−10t))` = expo-out), GSAP ScrollTrigger, split-text lines, barba page transitions, three.js noise bg.
