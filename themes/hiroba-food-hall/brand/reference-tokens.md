# Reference tokens (measured with getComputedStyle, 1440x900, headless Chrome)

Main reference: https://redine.jp/shiodome/ (shared food hall, 16 kitchens under one roof, Tokyo). Secondary: https://www.tokyo-dome.co.jp/foodstadium/ (food hall, inset window hero). Only values and descriptions are recorded; no assets, text or logos are copied.

## (a) Colour (main reference)
| Role | Hex | Where | Area (first screen / page) |
|---|---|---|---|
| Ink / text / headings | #3B3225 (rgb 59,50,37) | H2, H3, body, white-button label | text only |
| Accent (muted gold) | #B8860A (rgb 184,134,10) | primary button, short rule under section titles, flanking rules, inline emphasis words | <1% first screen, ~4% page |
| Ground white | #FFFFFF | feature, news, how-to-order | ~45% page |
| Light grey band | #F4F4F4 | news band | ~10% |
| Warm paper band | #F7F2E6 | shop list band (6056px tall, the longest block) | ~45% of page height |
| Stone band | #E5E2D8 | access / closing band | ~6% |
| Hero | dimmed dark photo (overlay ~45% black) | full-bleed | first-screen saturated share measured 0.4% |
Secondary (Tokyo Dome): pale blue-grey ground #F1F5F5, white arc-cut panel, white header, graphite menu tab #333; first-screen saturated share 14% (from the photograph itself, not UI).
Our use: ink #3F342C, accent gold #B8860A-family (muted), paper #F6F1E7-family, no saturated UI colour; saturated share target <= 8%.

## (b) Type
- Latin display/H2: Jost 500, 36px, letter-spacing 0.2em (7.2px), uppercase, line-height 40px, colour ink. Sub-label under it: 14px, tracking 0.3em, 50% ink, then a 40px x 1-2px gold rule.
- JP/body: Noto Sans JP 400, 16px/24px (cards 14px/20px, tracking ~0.3em in captions). Card names H3 20px/28px 700. Statement lines 30px 700, lh 1.6, gold highlighted words.
- Nav: Jost 12px 500, tracking 0.1em ("widest"), white 90% over hero.
- Tokyo Dome: BIZ UDPGothic 16/28, H2 28px 700, big hours figure ~32px 700.
- Ours: Fraunces (display) + Literata (body), CJK Noto Serif TC/JP.

## (c) Spacing
- Block padding: 96px (py-24) white blocks, 112px (py-28) coloured bands, 80px closing band. Container ~1056-1232px; shop cards 2-up 496px wide, gap 32px; feature 3-up 341px, gap 40px; news 4-up 330px, gap 24px.
- Header 92px fixed, transparent over hero, gradient scrim after scroll; right side three 36px buttons (white, gold, white), gap 12px.

## (d) Radius / border / shadow
- Buttons radius 6px (header) and 10px (full-width in cards); photo tiles 8px (4:3); news/shop cards 14px, white, hairline shadow (shadow-sm), no border; circle logo medallions 80px with 4px white ring. Tokyo Dome: window photo ~12px radius, 1000px wide centred, 1px lilac header rule.

## (e) IMAGERY: photo
Real photographs. Food close-ups (hands, trays, bowls, beer glasses) at 4:3 with 8px radius, interior wide shots, a phone-ordering shot. Hero: full-bleed dimmed interior (counter, stools, neon sign), 16:10. Shop cards: 16:9-ish cover photo across the card top, 80px round logo medallion overlapping its bottom edge, three 1:1.1 menu thumbnails (144px) with 12px captions under them. Tokyo Dome hero: 1000x563 (16:9) window inset on pale ground, rounded corners; shop tiles 400x300 with 4px radius, then cuisine tag, name, hours, location.

## (f) Decoration
- Section title lockup: Latin caps + small sub-label + 40px gold rule centred.
- "Recommended menu" label flanked by two 32px gold hairlines.
- Dark chip "Hours" (ink bg, white 11px text, r4) beside hours lines.
- Scroll cue: SCROLL caps label + 2px x 80px white vertical line at hero bottom.
- Tokyo Dome: convex arc edge cutting a pale band into a white block; hours strip "Today 11:00-23:00" with a vertical hairline divider.

## (g) Motion
- Hero: CSS keyframe hero-section-shrink, height 100svh -> 97svh, 1s, delay 2s, forwards (default ease).
- Nav/links: 0.15s cubic-bezier(0.4,0,0.2,1) colour/background; mobile menu 0.2s cubic-bezier(0,0,0.2,1).
- No scroll-reveals found (no opacity-0 / translate classes) other than the header scrim. Tokyo Dome: jQuery carousel on the hero, sticky sub-header, floating banner.
