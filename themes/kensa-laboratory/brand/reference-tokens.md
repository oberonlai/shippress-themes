# Reference tokens — GBRC (https://www.gbrc.or.jp/), measured with getComputedStyle at 1440×900
Values and descriptions only; no assets, text or logos copied.

## (a) Colour
| Role | Hex | Area |
|---|---|---|
| Main (saturated band, buttons, footer strip) | #0097E0 | ~38% of the full page, ~6% of the first screen (outline tiles + buttons only) |
| Accent (news-notice heading, "product certification" chip) | #E06807 | <1% |
| Secondary chip | #5C4B8A purple, #A0A0A0 grey chips | <1% |
| Ground | #FFFFFF page, #EBEBEB footer menu | ~55% |
| Text | #333333 body, #0097E0 links | — |
First screen is mostly white ground + one photograph (blue-green); saturated share ≈ 12%.
## (b) Type
Hiragino Kaku Gothic ProN / Meiryo sans; Latin section words Montserrat caps tracked wide (h2 16px, ls 2px, lh 24px, 400); h3 20px/40px 700 ls 4px; body 14px/21px 400; date numerals ls ~2px; slide headline ≈ 40px 700, ls ≈ 6px, white, over photo.
## (c) Spacing
Container 1000px centred (inner padding 15px); header 120px tall + 50px nav row; slide window 1000×380 (2.63:1); section padding ≈ 60px top / bottom; tile gap 28px horizontal, 33px vertical; news panel padding 30px, panel gap 28px.
## (d) Radius / borders / shadow
Tiles: 2px #0097E0 border, radius 3px, height 84px; white panels radius 8px; chips radius 3px, 80×24px; no shadows.
## (e) Imagery — IMAGERY: photo
Documentary-style colour photographs (city towers through foliage, construction crane, test facilities), natural daylight, cool blue-green grade. Slide 1000×380 (2.63:1), radius 0, no mask; neighbours of the carousel sit left and right at the same height, cut off by the viewport edges (centre slide = 69% of 1440 wide). Photos only in the slide strip; rest is line icons (FontAwesome-like, 28px, dark grey) inside outline tiles.
## (f) Decoration
Section lockup: Montserrat caps word + 1px vertical rule + local label. Outline tiles 4×2 with 28px icon at left, centred label. Category chips 80×24 solid colour, white 12px text. 5 slide dots (Ø10, black active / grey) under the slide. Round Ø40 dark "page top" button bottom-right, fades in after 300px scroll.
## (g) Motion
jQuery bxSlider carousel (auto slide, 5 slides); dropdown nav fadeIn 200ms; tile image hover 0.25s ease-in-out; buttons 0.3s; page-top fadeIn after scrollTop>300 (jQuery fade ~400ms); smooth anchor scroll 400ms; Q&A slideToggle 300ms. No scroll-linked reveal/parallax.
