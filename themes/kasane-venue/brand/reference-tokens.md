# Reference tokens (measured with getComputedStyle / CSS source, 1440×900, 2026-10-27)
Main reference: https://theday.osaka/ (The Day Osaka — garden resort hotel with BBQ/grill; S5-Style #12073 area, hospitality). Secondary (motion mood only): https://musu-sauna.com/ (private outdoor sauna). Nothing copied: only numbers and descriptions.

## (a) Colour
| Role | Hex | Area / use |
|---|---|---|
| Ground (first screen, header, card areas) | #FFFFFF (page bg transparent over white) | ≈ 62 % of the first screen |
| Ink / text | #333333 (rgb 51,51,51) | all copy, nav, logo |
| Section wash 1 "stay" | #CAE2D3 (sage) | full-bleed ground of the hotel block, swaps in at scrollY > block top |
| Section wash 2 "bbq" | #EFAE90 (peach) | ground of the BBQ block |
| Section wash 3 "restaurant" | #B5998E (dusty mauve-brown) | ground of the grill block (measured rgb 182,153,142) |
| Section wash 4 "activity" | #98C2D2 (mist blue) | ground of the activity block |
| Accent (reservation tab, menu button) | #333333 dark tab, white text | fixed right tab 170×170 vertical text; round 62 px menu button |
| Photo content | greens/greys of garden photographs | blob photo ≈ 28 % of the first screen; saturated-pixel share (S>0.5, V>0.25) measured 1.3–3.1 % on all captures |
Proportion on a scrolled section screen: wash ground ≈ 80 %, photo blob ≈ 14 %, text ≈ 3 %, dark tab ≈ 2 %. All washes are pastel (S ≤ 0.28) — first-screen saturated share ≈ 1.5 %.

## (b) Type
- Latin display / headings / nav: HelveticaNeueLTPro-Roman (neo-grotesque), weight 400. H2 24 px/36 px, letter-spacing 1.2 px (0.05em). FV title EN: max(50px, 3.47vw) = 50 px, capitalize, line-height 1.1. FV JP title: max(40px, 2.78vw) = 40 px.
- Body JA: FP-HiraKakuProN-W4 (Hiragino-like sans) 16 px / 24 px (1.5), colour #333. Body EN paragraph 13 px / 19.5 px (1.5). Nav 16 px, weight 400, no letter-spacing, sentence case ("Concept, Garden, Hotel, BBQ, GRILL, Experience").
- Weights: 400 everywhere (no bold). No uppercase except brand words. Small meta ≈ 11–12 px.

## (c) Spacing
- Section padding-top: 70 px (member) / 180 px (search) / 190 px (news, +168 bottom) / 300 px (story) / 232 + 182 px (access). Photo blocks (hotel, bbq, restaurant, activity) are 750–906 px tall, no padding: photo absolutely placed, text column 270 px wide, ≈ 260 px from the viewport edge.
- Content width: `.l-inner` ≈ 1080–1100 px centred (side margin 180 px at 1440); photo blobs break out to the page edge (hotel image width min(58.3vw, 992 px), right: calc(50% − min(20.07vw, 341 px))).
- Gutter between blob and text ≈ 70–140 px; vertical rhythm between blocks ≈ 150 px.

## (d) Radius / border / shadow
- Photos: no border-radius; shape = SVG clipPath organic blob (see (e)). Cards/news panel: radius 0, soft shadow `0 4px 20px rgba(0,0,0,.12)`; reservation tab radius 0, no border. Menu button: circle 38 px dark. Borders: none; dividers 1 px #333 at ≈ 20 % alpha.

## (e) Imagery
**IMAGERY: photo** (real photography of rooms, food, garden; no illustration at all).
- Photographs are bright, daylight, soft-focus background with foreground furniture (chair with warm terracotta upholstery against green trees), natural colour, shallow depth of field, slight highlight bloom; colour grade slightly warm-green.
- FV: video/photo slideshow clipped by an SVG organic blob (≈ 680 × 750 px at 1440, centred at x ≈ 720, y ≈ 460; aspect ≈ 0.9:1), white page around it; blob morphs between 7 path shapes continuously (10 s each, easeInOutQuad). On first wheel input a white-out (0.8 s) then the clip is removed → full-bleed 1440×900 video (16:10).
- Section photos (hotel/bbq/grill/activity): each is a different organic blob clip (≈ 790 × 380–560 px, ≈ 55 % of viewport width, aspect ≈ 2:1 to 1.4:1), alternating left bleed (x −20 px … 960) and right bleed; text column on the opposite side (≈ 270 px wide, 18 % width). No overlap between photos and text, no rotation; offset: images sit ≈ 120 px above the text baseline.
- Thumbnails 270×270 square (hover scale). News thumb 90×90.

## (f) Decoration
- Fixed right-edge tab "ご予約 / reservation": 170 × 170 box, #333, white vertical text 14 px, x = 1395–1440, y 365–535. Bottom-right news toasts: 330 × 90 white cards with 90×90 thumb, 11 px date + tag, 13 px title. "View More →" text link with a 24 px thin arrow, 16 px. Custom stalker cursor: blob shape 0 → scale 1.3 on hover, follows with translate 1.2 s cubic-bezier(.25,1,.5,1). No numbering, no lines, no dots.

## (g) Motion
- Smooth scroll: Lenis default (lerp ≈ 0.1).
- FV: SVG blob path morph 10000 ms, easeInOutQuad (Snap.svg), looping through 7 paths.
- First wheel/touch: body is `position: fixed` until the opening finishes (white-out in 800 ms, clip removed at 800 ms, unlock at 1500 ms).
- Scroll reveal: jQuery scroll listener adds `.is-animeActive` when scrollTop + windowHeight > element top; keyframe `animeFade` 1.2 s ease-out, fill forwards, opacity 0 → 1 and translateY 25 px → 0 (no stagger, no delay).
- Section ground colour swap: `data-home-bg` attribute set by scroll position, `background-color` transition .4 s ease-out (#CAE2D3 → #EFAE90 → #B5998E → #98C2D2 → white at the end block).
- Header goes white (text) over the full-bleed video, shrinks on scroll down and hides, returns on scroll up.
Secondary (musu-sauna.com): GSAP ScrollTrigger; text blocks fromTo y +offset, alpha 0 → 1, trigger "top 80%", once; one `scrub` parallax from "top 80%" to "top 20%"; stamp image yPercent 20 → 0 with `steps(3)` 1.5 s; page-load logo screen on #F3F3F1 ground before reveal.
