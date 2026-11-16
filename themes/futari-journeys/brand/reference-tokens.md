# Reference tokens (primary reference, measured with getComputedStyle at 1440x900; values only, no assets copied)
Primary: https://www.la-viephoto.com/resort/tabi_photo/ (a travel-themed couples' photo-wedding landing page). Secondary: http://www.arluis.com/ (overseas resort weddings). Screens: `ref/tabi-first.png`, `ref/scroll-tabi-{900,1800,2700,3600,4800}.png`, `ref/arluis-first.png`, `ref/scroll-arluis-{900..4800}.png`.

## (a) Colour (primary; share of area after the first screen)
| Role | Hex | Share |
|---|---|---|
| Ground (paper) | #FFFFFF | ~62% |
| Pale band | #F4F5F8 (cool grey-lilac) | ~24% |
| Text / dark footer | #222222 | ~8% (footer band #222222) |
| Hairline | #E2E2E2 / #D0D0D0 | line only |
| Accent gold (booking cell, links) | #B89A65 (hover #9E8457) | ~3% |
| Slate cell (campaign tab) | #7E8E9C | ~2% |
Secondary (arluis): page white #FFFFFF with a 5 px pale frame, greige panel #ECEAE9, espresso button #48322A, gold numeral #C9A04A. First-screen saturated share: primary 1.4%, secondary 7.8% (sky of the photo). Ours: stay <= 12%.

## (b) Type
- Primary body: YakuHanJP Narrow / Hiragino Kaku Gothic, 16px, weight 400, line-height 28.8px (1.8), letter-spacing 0.8px (0.05em).
- Headings: Zen Old Mincho (serif) h1 30px/48px ls 4.2px (0.14em); h2 30px/52.5px ls 2.4px; card h3 sans 20px weight 600 lh 26px ls 0.8px. Eyebrow: Latin caps 11-12px ls 0.15em + 1px x 76px rule at its right.
- Ours: Manrope (headings, weight 500-600) + Public Sans (body); keep the airy tracking (0.04em body, 0.1em eyebrow), largest display >= 4.25rem.

## (c) Spacing
Fixed 220px side rail on the primary (NOT copied: forbidden sidebar); content column 1100px (x 285-1375) inside 1220px main; section padding-bottom 150px; main bottom padding 190px; hero photo inset 16px from the viewport edges, 704px tall (78% of the first screen); card gap 54px; two-column text split 55/45.

## (d) Radius, borders, shadow
Radius 0 everywhere (photos, cards, buttons). Hairline 1px #E2E2E2. Caption card: white, shadow ~0 10px 40px rgba(0,0,0,.08), no border. Secondary: 5px pale page frame, 1px vertical dividers between three foot links (colour #47382A at 60%).

## (e) Imagery
IMAGERY = photo. Documentary colour photographs of real couples travelling (strolling a lane, walking with a suitcase in a garden, tea on a veranda), natural light, slightly muted greens, shallow depth of field, foreground leaf blur. Ratios: hero 1173x704 (1.67:1) inset; concept pair = square-ish portrait 326x413 (0.79) + wide 734x413 (1.78) side by side, tops aligned, 29px gap; plan cards 518x303 (1.71:1), two-up, each with a white caption panel (466 wide) overlapping the photo's lower 60px and shifted 52px in from one side, plus a dark place chip (ink bg, white 12px bold) sitting on the photo's bottom-right corner. No masks, no clip-paths, no cut-outs.

## (f) Decoration
Eyebrow "LET'S GO ON A TRIP" 11px caps + 76px x 1px rule; 1px x 45px vertical line dropping from the hero lockup into the next section; pale band (#F4F5F8) starting 120px below the top of the photo pair (so the pair straddles white and band); dash-flanked section label "— label —" (secondary, 24px dashes); circle arrow disc 22px white on photo (secondary); three foot links separated by 1px x 78px vertical hairlines over a white gradient (secondary, 0 -> 100% over 160px).

## (g) Motion
Primary: jQuery inview. `.fade-up`: opacity 0 -> 1 and translateY 30px -> 0 on entering the viewport, once, animation 1s ease (class `.up`); `.fade-in` opacity only; `.mask` shutter: element slides left:-100% -> 0 in 500ms easeInOutCubic, then a #111 cover slides 0 -> 100% in 300ms (wipe reveal of images). Hover: `transition: all .4s cubic-bezier(.215,.61,.355,1)` (247 uses). Sticky side rail; no parallax found. Secondary: GSAP 3.9 + slick; header buttons appear after hero.
