# Reference tokens (measured with getComputedStyle at 1440 x 900, 2026-11-26)

Main reference: https://recit-tokyo.studio.site/ (a chocolaterie and patisserie one-pager, Studio.site build).
Secondary (structure only): https://parade.kyoto/ (patisserie, WordPress). Only values and descriptions below; no assets, copy or logos are reused.
Screens: `ref/recit-first.png`, `ref/scroll-recit-900.png`, `ref/scroll-recit-1800.png`, `ref/scroll-recit-2700.png`, `ref/scroll-recit-3400.png`, `ref/parade-first.png`, `ref/scroll-parade-900.png`, `ref/scroll-parade-1800.png`, `ref/scroll-parade-2700.png`.

## (a) Colour (main reference)
| Role | Hex | Share of page area | Where |
|---|---|---|---|
| Ground (base) | #FFFFFF | ~62% | right column, body |
| Photo plate (pale grey-white table + cake) | #E0E0E0 family | ~30% (half the viewport is photo) | fixed left plate |
| Ink / text | #333333 (secondary text rgba(51,51,51,.75), muted #777777) | ~4% | all type, dotted rules |
| Panel | #F5F5F4 | ~3% | closed-days panel, radius 4 |
| Accent (the photographed glaze) | crimson ~#C0202A | only inside photos (first screen 10.5% saturated pixels) | cakes; the logo mark carries one thin rust loop (~#B5472A) |
First-screen saturated share (S > .45, V > .25): **10.5%** (Recit), 36.6% (Parade; too loud, so Parade is used for structure only, never colour). Parade tokens for reference: ground #F8F5E9, red #C22B1F used for every line, tag and word.

## (b) Type (main)
- Latin display and body: EB Garamond 400 (serif). Japanese: a Mincho (Ryumin) 400 for headings and text, a small Gothic W3 only for 12-13 px allergen and note lines.
- Page word ("News", "Menu", "Shop Info"): 72 px / 72 px, letter-spacing -1.44 px (-0.02em), weight 400, #333.
- Menu item title (H3): 36 px / 36 px, ls -0.72 px. Shop name 28 px / 39.2 px ls -0.28 px. Phone 20 px ls 1 px.
- Nav: 16 px / 22.4 px, no tracking. Sub-brand line 15 px ls 0.3 px (white on the photo).
- Body paragraph 15 px / 22.5 px, ls 0.75 px (0.05em); sub-line 14 px / 19.6 px ls 0.7 px; notes 13 px / 18.2 px ls 0.65 px #777; fine print 12 px.
- Vertical-set tagline (tategaki): 20 px, line-height 60 px (column width), letter-spacing 6 px.
- Parade (structure only): condensed display serif 40 px for card titles, 170 px vertical-rl words with ls -5 px, 10 px tag text with 0.2 px tracking, 12 px price labels.

## (c) Spacing
- Layout: two halves of 720 px. Left half is a fixed full-height photo plate (position fixed, 720 x 900). Right half has a text column x 780-1380, 600 px wide, left margin 60 px.
- Block rhythm in the text column: page word top at y 1344 after a 3 x 52 px dotted-rule block; word to first row ~110 px; rows 150 px apart (accordion rows 150 px tall incl. 1 px dotted rule); section gap ~220 px.
- Header: fixed, 720 wide on the right half, nav links padding 5 px 8 px, cart button 36 x 36 at x 1384, y 16.
- Plate inner padding 40 px; logo block at lower-left (x 32-212, y ~ 390 of 900), social icon row 18 px glyphs, gap 22 px.
- Parade: container 1192 px at x 117, three staggered columns 384 px wide with 20 px gutters; cards offset vertically by 170 px, 350 px.

## (d) Radius, borders, shadow
- Rules: 1 px dotted #333 (rows, news list, vertical columns), solid 1 px #333 under the panel heading and as the box around phone / mail cell.
- Closed-days panel: #F5F5F4, radius 4 px, padding 24 20 32.
- Cart button: 36 px circle, white, 1 px rgba(0,0,0,.14), no shadow. Map button: black, radius 4 px. Outline pill (online shop): 1 px #333, radius 999.
- Accordion chevron: 24 px solid black disc, white chevron.
- Parade: card border 1 px red, radius 5 px; tag chip 1 px red radius 3; solid red chips for "online"; no shadows anywhere.
- No box shadows in either reference.

## (e) Imagery
**IMAGERY: photo.** Both references carry photographs on the first screen and in the body (Recit: overhead still-life of glazed cakes and a plated tart on a pale marble-white table, daylight, hard flat top view, shallow edge crop; Parade: warm dessert still-life, linen and ceramics, soft window light).
- Recit plate: 720 x 900 (4:5), no radius, no mask, flush to the left, top, bottom viewport edges; objects cropped by the frame edge on three sides (cakes repeat and are cut at the top and bottom). Light blue-grey cast on white, saturated colour only in the product.
- News thumbnails 100 x 100 with 1 px hairline frame; menu has no thumbnails.
- Parade: cards 350 wide, photo 4:5 and 1:1 mix inset 16 px inside the card border, radius 5 on the photo; three columns.
- The photo is the stage: text never sits on it except the small logo block (white, 15 px).

## (f) Decoration
- Hand-drawn orbit mark: ~250 x 130 px, thin loose black ellipses with one rust loop, above a script wordmark (logo, not reproduced).
- Three vertical dotted columns: each 60 px wide, 1 px dotted #000 on the left and right edges, heights 260 / 240 / 185 px, hanging from the header line, staggered tops; 20 px vertical type.
- Dotted rules between every row (1 px).
- Black 24 px round chevrons on rows, black rounded 4 px map button, circular cart.
- Parade: vertical giant words at the page edges (SWEETS & CAKES left, "Line up" right), 1 px outline cards with a tag line above (tag chip left, category in italic caps right), a 3-cell ruled head (title / price row) and photo under it.

## (g) Motion
- Fixed plate: photo swaps by section (observed three states across a 4300 px page: red glazed cakes, strawberry tart on slate plate, back to cakes). Crossfade-class transition 0.3 s cubic-bezier(0.4, 0.4, 0, 1) (Studio defaults).
- Header/links: transform 0.6 s cubic-bezier(0.58, 0.21, 0.41, 0.96) on icon links; hover 0.3 s.
- Studio "appear" class on 869 elements: fade-up on entry (small offset), 0.3 s ease.
- Parade: cards show partial opacity on entry (observed ~0.35 at the first scroll), card wrapper opacity 0.3 s on hover; no GSAP / ScrollTrigger / Lenis; jQuery only.
