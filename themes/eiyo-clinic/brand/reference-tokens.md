# Reference tokens — Kobe Yakult (https://kobe-yakult.co.jp/), measured 2026-10-29, 1440×900, getComputedStyle
Only numbers and descriptions; no assets, copy or logo taken. Screenshots: `ref/ky-*.png`, `ref/scroll-*.png`.

## (a) Colour (area shares measured on fold / whole page)
| role | hex | where | share |
|---|---|---|---|
| base | #FFFFFF | page ground | ≈65% of first screen, ≈55% of page |
| paper | #F4F3EF | news strip, recruitment section, button chips | ≈8% of page |
| ink / text | #303030 (rgb 48,48,48) | all body and headings; 50% alpha for policy links | text only |
| main (saturated) | #E50111 | contact button, big rounded section (781px tall), drawer | **1.8% of first screen**, ≈12% of page |
| accent | none beyond main; illustration line-art uses flat blue #3C7DA6 / red / mustard at tiny size | decor | <1% |
Relationship: white ground + one single saturated colour used in one huge rounded block and one CTA; everything else grey ink.

## (b) Type
- Family: Roboto (Latin) + Zen Kaku Gothic New (JP) + YakuHanJP; all sans.
- Hero H1: 32px / 600 / lh 51.2px (1.6) / ls normal. About catch H2: 37px / 600 / lh 74px (2.0) / ls 2.22px (0.06em). Section H2 (red block): 37px/600/lh 1.6/ls 0.06em white. Item H3: 27px/600/ls 1.62px (0.06em). Company H2: 26px/600/lh 1.6. Card title: 20px/600/lh 1.5/ls 1px. Service title label "Service": 17px/500 (Latin eyebrow). Body 16px/400/lh 1.6, card text 15px/1.5/ls 0.06em. Nav: 16px/600/ls 0.8px (0.05em). Contact button 15px/500. Drawer link 40px/lh 1.6/ls 0.03em. No uppercase transforms; Latin eyebrows in sentence case.
## (c) Spacing
- Header 75px tall. Hero photo inset: x 32 / width 1376 (page gutter 32px), y 75, height 725 (ratio 1.90).
- Section padding: about 270 top / 170 bottom; service 0 / 160; item (red) 0 / 0 with inner 140px; company 80 top; recruitment 140/140; blog 170; news 120/100. Content container x 75–1365 = 1290 wide (gutter 75px). Card grid 3 × 380 wide, ≈ 75px gap (company cards, 4:3).
## (d) Radius, border, shadow
- Hero slide radius 10px; news strip radius 5px, bg #F4F3EF, padding 20px; company card image wrapper radius 7px; arch items border-radius 240px with 1px solid #FFF border on red; red section has large (≈90px) rounded bottom-left/top-right corners; no shadows (only reCAPTCHA badge).
- Buttons: "primary link" = text + 18px arrow chip, padding 12/12/12/20, radius ≈5 chip #F4F3EF (white on red); contact button red fill #E50111, white 15/500, padding 10/20, radius 4.
## (e) Imagery
- **IMAGERY = photo.** Hero is a high-key lifestyle photograph (family at a wooden table by a sheer-curtained window, white wall, bowls/plates, soft daylight, shallow depth); service and company cards are documentary people photos (4:3, 16:10, 1.61); the product shot is a cut-out only on the red block (we do not use cut-outs). Secondary: small flat line-art illustration (thin 1px dark outlines, flat pastel fills, tiny people, trees, a small shop box) floats beside the about statement — under half of the image area, so photo wins.
- Aspect ratios: hero 1.90 (1376×725), service main 1.61 (689×427) with side cards 452×280 dimmed/blurred (coverflow), company cards 1.33 (380×285). No clip-path, no masks except radius. Overlap: service caption card (#F4F3EF, 413×244) overlaps the lower-right of the centre photo by ≈ −90px/−120px.
## (f) Decoration
- Hairline arch/pill outlines (484×576, radius 240, 1px white) on the red block, text centred inside, two of them offset vertically (y 2763 and ≈3070); drawn dot "●" + arrow chip links; thin 1px grey section rule; tab labels separated by 1px vertical rules; no numbering.
## (g) Motion (see reference.md "Scroll effects" for the trigger analysis)
- Hero: Splide fade between kv01–03 (type fade), news box static.
- About statement: 56 per-character spans, opacity 0.3 → 1, progressive with scroll (all lit within ≈300px scroll once the block reaches viewport y≈370 → 70).
- Arch items: opacity 0 → 1, translateY 46px → 0 once their top reaches ≈ viewport centre; ease Power4.easeOut (found in bundle), ≈0.6–1.0s (inferred), second arch lags ≈ one scroll step.
- Smooth scroll: Lenis. Libraries: GSAP + ScrollTrigger, Splide.
