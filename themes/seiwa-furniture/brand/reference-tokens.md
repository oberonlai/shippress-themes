# Reference tokens — STAGE Lab (https://stagelab.inkdom.jp/), measured 1440×900 with getComputedStyle (values only, no assets copied)

## (a) Colour
| role | hex | area (first screen / page) | where |
|---|---|---|---|
| ground / text-plate | #FFFFFF | ≈53 % of first screen; sections 1,3,5 | page ground, service-card fill |
| mist band | #F4F8F6 | alternate full-width sections (service, showroom) ≈35 % of page | `bg_gray` |
| pale sage panel | #DEE8E3 (sampled 222,232,227) | ≈4 % first screen | flat polygon / arch panels behind photos |
| sage (accent) | #677771 | <2 % | labels, illustration spot fill, vertical bar before service title |
| sage hover | #90B4A6 | hover only | card border on hover |
| ink / text | #222222 | text, 1px card borders, pill CTA fill | all text |
First-screen saturated pixels (HSV S>0.35): **4.7 %** (photos only). Palette is white + mist + pale sage + ink; no saturated field.

## (b) Type
- Family: zen-kaku-gothic-new (Zen Kaku Gothic New), fallback Yu Gothic / Meiryo; Latin section words in the same family.
- Body 16px (1rem) / 400 / lh 32px (2.0) / ls normal / no transform. Nav 16px / 400 (dropdown labels 700).
- Hero headline 32px (2rem) / 700 / lh 32px (1.0); hero sub-line 14px / 700 / lh 28px.
- Service card title 40px (2.5rem) / 700 / lh 64px (1.6) with ls ≈0.1em; card kicker 16px/400 with 4px×20px sage bar on the left.
- Section title: Latin word ≈28–32px light + 12px JP caption below (stacked, left-aligned at x=80).
- CTA text 14px / 500 / lh 24px, dashed 1px underline link with ● arrow icon.

## (c) Spacing
- Container 1280px (x 80 → 1360); header 40px side padding, logo left, nav right, one black pill "contact" (h 40, radius 20).
- Section padding (PC) `.sec_inner` 17.22vw ≈ 248px top/bottom measured on the wrapper; visible gaps between blocks ≈ 120–160px. Section heights: about 1520, service 1716, case 1050, showroom 1124, news 607.
- Service card width 86.94vw (≈1252px), padding 2.78vw (40px), min-height 28vw (≈404px); two cards stacked, gap ≈ 40px; text column left 50 %, photo flush right 50 %.
- Hero: headline at y 274, photo block starts y 481 (straddles the fold at 900).

## (d) Radius, border, shadow
- Radius 0 everywhere on photos and cards; only the contact pill is round. Border 1px #222 (top+left, bottom transparent) on service cards; hover → border #90B4A6 over .6s cubic-bezier(.23,1,.32,1). No shadow except one 0 0 5px rgba(128,128,128) on a small control.

## (e) Imagery — **IMAGERY = photo**
Primary images are real, soft-daylight photographs (high-key interiors, hands at work, wooden blocks on a desk, a smiling worker rolling paint on a white wall): white / pale-grey rooms, desaturated blue-grey and warm wood, shallow depth of field, people mid-task. Illustration is only a small secondary accent: monochrome black line figures (≈1.5px outline, flat sage #8FB0A3 spot fill, no shading, loose cartoon proportions) ≈140–230px tall overlapping photo corners — fewer than 1/6 of the image area, so the theme is photo-led.
| image | ratio | radius | mask | placement / width |
|---|---|---|---|---|
| kv_main | 782×448 (1.75:1) | 0 | none | x 207, y 481, 54 % of 1440, straddles fold, over a pale panel |
| kv_sub | 400×692 (0.58:1) | 0 | **arched top-left corner (quarter-ellipse mask)**, bleeds off the right edge | x 1040 → 1440, y 136, 28 % width |
| about_deco ×3 | 240×380, 264×316, 284×398 (portrait) | 0 | none | scattered left, centre-left and right of the intro copy, different y, sizes 17–20 % width |
| service photo | ≈ 604×404 | 0 | none | right half of card, flush to card edge |
| showroom | 632×420 (3:2) | 0 | none | centred, 44 % width, small square photo tiles overlapping its corners (60–120px) |
| about slider | 186–292 wide mixed 3:4 / 4:3 | 0 | none | horizontal row of 5 mixed-size photos, irregular y offsets (marquee-like swiper) |

## (f) Decoration
- Flat pale-sage polygons: slanted-top trapezoid 150×460 off the left edge at y 440; vertical rounded-top pill 80×560 behind kv_sub; both #DEE8E3 and semi-transparent sage over photo.
- Floor-plan line drawing (SVG, 830×376, 1px #C5D0CB) bleeding off the left behind the intro text.
- Small line illustrations (book 75×41, light-bulb person ≈110×170, puzzle pieces) set on photo corners; `opacity .5` to 1 on load.
- 4×20px sage bar before card kicker; English index word + JP caption under; no numbering.

## (g) Motion (GSAP 3 ScrollTrigger + Lenis, Swiper)
- Smooth scroll: Lenis duration 1.2s, easing 1.001 − 2^(−10t) (expo-out), smoothTouch off.
- KV on load: kv_main and kv_sub images, illustrations and headline fade in from opacity 0 (1–3s, power2.out; screenshot at 0.7s shows only header + headline).
- Photo parallax (`data-parallax=image-wrapper/image-content`): inner img taller than its wrapper (e.g. wrapper 320 → img 380), moves from −(Δ)px to 0, trigger top-bottom → bottom-top, **scrub 1** (measured translateY −50px → −10px as wrapper crosses the viewport). Optional `image-scale` 1.2 → 1 scrub 1.
- Reveal (`data-show-anim`, ScrollTrigger onEnter at top+20 % vh, plays once): `fade` opacity 0 → 1 + translateY 40px scale .95 → 0 / 1, .8s cubic-bezier(.32,.95,.6,1); `blur` filter 30px → 0, .8s; `belt` (grey belt wipes across text then reveals): clip-path inset(0 100% 0 0) → 0, .6s cubic-bezier(.65,0,.35,1), cover slides translateX(100%) with .4s delay.
- Hover: card border colour .6s cubic-bezier(.23,1,.32,1); CTA pill clip-path wipe 1s cubic-bezier(.5,0,0,1).
- Horizontal photo row (Swiper, autoplay loop) in the intro block.
