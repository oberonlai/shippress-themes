# Reference tokens: kajima.co.jp (measured 2026-11-26, 1440 x 900, Chromium; values only, no assets copied)

Source: https://www.kajima.co.jp/ (home). Screens: `ref/kajima-first.png`, `ref/scroll-kj-before.png`, `ref/scroll-kj-after.png`, `ref/kj-s1200.png` ... `ref/kj-s6000.png`.

## (a) Colour
| Role | Hex | Where | Approx. area |
|---|---|---|---|
| Ink / text | `#363434` | body text, dark "find information" band | text + one 940 px band |
| Ink soft | `#595757` | secondary text, SVG marks | small |
| Ground (page) | `#F5F6F7` | hero-scatter field, feature grids | ~45 % of page |
| Ground 2 (strips) | `#E7E9EC` | notice strip under the hero | ~2 % |
| Grey rule / disabled | `#9EA3A6` | 1 px heading rules, disabled select box | tiny |
| Accent | `#E6002D` | logo mark, small "INFO" Latin label only | <1 % |
| First screen | photographic sky blue + foliage green | two full-height photos | saturated share measured 36 % (44 % while the hero is full) |

Our version: accent red becomes Edo purple `#5E5166` (small labels, rules, button), ink `#2E2B31`, ground `#F5F6F7`, strip `#E7E9EC`, rule `#9EA3A6`; photographs overcast and desaturated so the first-screen saturated share stays under 15 %.

## (b) Type
- Family: Noto Sans JP (body and headings) + a light serif only for the one line "<Company> builds." (mid page). Latin sub-labels in a condensed grotesque (Roboto Condensed look) in caps.
- Body 16 px / weight 400 / letter-spacing 0.8 px (0.05em) / line-height normal (about 1.8 in running copy), colour `#363434`.
- Section H2: 42 px, 700, line-height 58.8 px (1.4), letter-spacing 4.2 px (0.1em); Latin sub-label beside it right-aligned, ~16 px caps 700.
- Dark-band question: 24 px 700, ls 1.2 px, white; select boxes 18 px.
- Card H3 22 px 700 ls 1.1 px. Nav items ~15 px 500 white over the photo, ~14 px.
- Hero tagline: ~36 px light serif-feel, wide tracking 0.2em, white with soft shadow, one line across the seam.
- Case: JP, so no uppercase transform except Latin labels.

## (c) Spacing
- Container 1305 px at 1425 px viewport (60 px gutters). Content narrower 1100 px in the dark band cards (3 x 356 px, gap 16).
- Section padding: 100 px top and bottom (dark band, feature grids). Hero block is a 1400 px tall scroll stage.
- Notice strip height 226 px with 100 px left inset; label column 260 px, link column starts at 360 px.

## (d) Radius, border, shadow
- Radius: 0 on hero panes and scatter photos; carousel photos r4 (≈4 px); select boxes r2; cookie buttons pill (not part of the design).
- Borders: 1 px `#9EA3A6` rule under section heads; no card borders. Shadow: soft text-shadow on hero tagline only.

## (e) Imagery
- IMAGERY = photo (large architectural photographs and renders mixed, journalistic clarity; roughly 90 % of image area is photographic).
- Hero: two full-height panes, left 926 px (64 %) wide, right 499 px; seam is a hard vertical edge at x = 926; no radius.
- Scatter field after scroll: six photos at different sizes and ratios, all radius 0: 278 x 270 (1.03), 518 x 330 (1.57), 379 x 450 (0.84), 432 x 280 (1.54, bottom), 346 x 450 right strip, 182 x 513 (0.35) flush to the right edge. Several touch the viewport edge.
- Dark band cards: 3 up, 356 wide, ratio about 1.3, radius 4.
- Projects carousel: centre card 452 px wide (taller 1.4:1 portrait-ish), neighbours 286 px wide, dimmed, round 56 px outline arrow buttons at both sides of the strip.

## (f) Decoration
- 1 px grey heading rule full width; small red Latin label "INFO"; sentence-builder: "[subject] of [select ▾] of [select ▾] I want to know" with white and grey select boxes (248 x 62) and a down triangle; round outline arrows (56 px); a floating media badge bottom-right of the window (white card 255 x 70).

## (g) Motion
- Hero (desktop): GSAP timeline, ScrollTrigger start `top top`, end `+=250px`, `toggleActions: play none none reverse`, duration 0.75 s, default ease (power1.out ≈ cubic-bezier(.5,1,.89,1)): thumb 1 scale 0.3, thumb 2 scale 0.75 and move x 22vw y -18vh, thumbs 3-6 move to x 0 y 0; heading line 1 opacity 0 while heading 2 opacity 1 and blur 0. Scroll is locked until the timeline completes.
- After the hero: scrubbed timeline (scrub 0.1) from `bottom bottom` to `bottom end` of the hero moves the thumbs by different amounts: 16vh, 0, 12vh, 4vh, 2vh, 8vh and the heading 15vh = drift at different speeds.
- Header variant changes on scroll: transparent at top, blend under one screen, normal after (scroll listener).
- Projects carousel: Swiper, loop, autoplay delay 4000 ms, centred slide scaled up, pause button.
