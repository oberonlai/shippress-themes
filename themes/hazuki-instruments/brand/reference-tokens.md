# Reference tokens — Shimamura Music (https://www.shimamura.co.jp/), measured 2026-10-30, 1440×900
Only numbers and descriptions; no assets, text or logo reused.
## (a) Colour
| Role | Hex | Share of first screen | Where |
|---|---|---|---|
| Ground | #FFFFFF | ~45% | header, news rows, alternate bands |
| Pale band | #F6F6F6 (footer #FAFAFA) | ~0% on first screen, ~40% of page | CATEGORY, SERVICE, ORIGINAL BRAND bands |
| Text | #000000 (dates grey ~#999) | text only | all copy |
| Accent | brand orange ≈ #EE7800 | ~4% | logo, one 26px label bar under the hero |
| Photo mass | warm/blue-teal film-ish portraits | ~50% | hero strip |
Saturated share of first screen: ≈4% (orange bar) — photo mass is not counted as flat colour.
## (b) Type
Noto Sans JP throughout. body 15px/400/lh 22.5px (1.5); h2 section label 16px/400, letter-spacing .96px (.06em), Latin caps, centred, margin-bottom 58px; one h2 at 52px (store heading); nav 16px/300, ls .96px; news date 15px grey; card caption 17–18px/400 ls ~.05em below the image; card sub-copy 12px.
## (c) Spacing
Section padding 88px top / 40–110px bottom (category 88/40, fair 88/80, service 88/110, shop 128/226, blog 108/0, originalbrand 60/66 with 92px top margin). Container ≈1274px wide (page padding 76px). Header 59px tall, nav links pad 19/15. Card gap ≈16px (3-up cards 408px wide; 4-up cards ~301px).
## (d) Radius / borders / shadow
Radius 0 everywhere (photos, cards, buttons); 1px #CCC hairline wide outline button (408×80, white fill, centred label 15px ls .05em); no shadows except the floating chat-bot banner.
## (e) Imagery — IMAGERY: photo
Hero: four abutting full-height portrait photos (1425×590, edge to edge, ≈25% each, seams visible) of players with instruments (sax, electric guitar, student at desk), warm stage light vs cool window light, natural-skin documentary look. Cards: 4:3 photos (1248×936) with 0 radius, caption under image; row 1 three wide cards (408w), row 2 four narrower (301w, 4:3). Banner cards mix photo, illustrations and product UI (we use photos only). Photos sit in plain grid, no masks, no overlap.
## (f) Decoration
Centred Latin caps label with no rule; wide outline button; chevron ">" right-aligned on dated news rows (date col 140px grey, title col, chevron 20px); orange 26px "Brand Promise" label bar across the bottom of the hero strip; vertical (tategaki) headline centred on the seam between panels 2 and 3, white, ~38px per glyph.
## (g) Motion
Hero = Swiper slider (3 slides, autoplay) + slick; header gets class `fixed` on scroll (jQuery scroll listener); smooth scroll-to-top 500ms; hover transitions `all .3s` (cards/links) and `.5s` (menu). No scroll-reveal, parallax or counter effects found.
