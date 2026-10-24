# Reference tokens — hayate-cycles (measured 2026-10-24 with headless Chrome getComputedStyle, 1440×900)
Primary reference R1: https://naganoanzen.jp/ (vehicle service workshop; S5-Style category vehicles, motorbikes and bicycles). Secondary R2: https://setouchi-cycle-stays-hiroshima.jp/ (cyclist hotel; same category). Values only — no assets, text or logos copied.

## (a) Colour — R1
| Role | Hex | Share of page | Where |
|---|---|---|---|
| Base / ground | #FFFFFF | ~88% (first screen 54% pure white) | everything |
| Text | #333333 (headings & body), #000000 hairlines | ~6% | type, 1 px rules |
| Primary accent | #0B318F (cobalt) | ~5% | pill buttons, Contact band (full-bleed, 400 px tall), cover-wipe overlay on photos |
| Accent for photos | yellow work trucks in photos (#F0C000) | 8% of first screen | photo content only, not UI |
First-screen saturated-pixel ratio (S>0.43, V>0.27): **18.8%** (yellow truck photo). Ours must be ≤15% → low-key photo + muted sage.
R2: ground #F2E2D0 (warm sand), text/heading navy #13294B, sky-blue CTA #9CD9E9, tan CTA #C39C6D, white dashed road line, dusk photo hero.

## (b) Type — R1
- Family: body Noto Sans JP; Latin display "presicav" (Adobe Fonts, wide extended grotesk) for section titles, numerals and buttons.
- html font-size 10 px (1 rem = 10 px).
- Body 16 px / 32 px (2.0), weight 500, letter-spacing 0.5 px, colour #333.
- Lead on hero 16/32, weight 700.
- Section title (Service / News / Contact): Latin ext grotesk 40/48, 700, ls 0.5; JP sub-label 10–11 px 700 under it.
- Service row name: 60 px (6.0rem), 700, line-height 1 (45 px ≤1100 px wide); number "01" 20 px, same face, superscript-like top-aligned.
- Pill button "more": 14/14, 700, ls 0.5, white on #0B318F, padding 10/26, radius 20 px, ~103×36.
- Nav: 16 px bold, 4 links + pill "Contact (Japanese)" 136×40 radius 44.
- Hero catch (2 lines) is an SVG/image ≈ 280×180 at 1440 (glyph height ~100 px, black, ultra-bold gothic).
- R2: Montserrat-like geometric sans, headline 96 px light/regular, nav 12 px caps ls .08em.

## (c) Spacing — R1
- Page side margin 6.12% (88 px at 1440); content width 1264 px.
- Service row: padding 38 px / 6.12%, row height 313; columns num 50 | name 526 | text 352 | photo 384 (ratios of 1376), photo margin-left 64.
- Hero: heading column starts x=294, y=195 (top 135 px header); photo column x=882 → bleeds to right edge (558×1072); second photo x=0–705, y=670 bleeds to left edge; third photo 496×331 at x=617 sits between, second row.
- Section top gap ≈ 100–140 px; News block 382 tall; Contact band 400 tall; footer 1102.

## (d) Radius / border / shadow — R1
Photos radius 0, no shadow. Hairline `1px solid #000` between service rows (top & bottom). Buttons pill 20 px. Contact circle arrow button: 62 px circle, 1px white border. R2: stadium (capsule) photo masks radius 9999 px, 475×250 and tall 300×490 capsule.

## (e) Imagery
**IMAGERY = photo.** R1 and R2 are photographic. Reportage-style colour photographs of mechanics at work (hands, tools, engine bays), real vehicles and workshop; natural, slightly contrasty, shallow depth of field, cool-blue workwear against yellow/teal accents; no illustration anywhere.
| Image | Ratio | Radius / mask | Position & width |
|---|---|---|---|
| Hero photo A (tall) | 558×1072 ≈ 1:1.92 (cropped by viewport edge) | 0 | right column, x 882→1440 (39% of width), top y=195, bleeds right |
| Hero photo B | 705×~360 visible (≈ 2:1, cropped by left edge) | 0 | left bottom, x 0→705 (49%), y=670, bleeds left |
| Hero photo C | 496×331 (3:2) | 0 | centre x 617→1113, overlapping row beneath A/B, offset down |
| Service row photos | 353×235 (3:2) | 0 | right column of each row, 25% width |
| Recruit collage | full-bleed 1440×~900 + three small satellites (240×280, 167×… ) overlapping | 0 | white card 480×540 overlaps photo's left (x176→656), small photos sit across card/band edges |
| R2 capsule masks | 475×250 and 297×492 | full capsule | in-text column / overlay centre-left on full-bleed photo |
Overlap/offset: photos are intentionally misaligned on a loose 3-image diagonal; satellite photos poke out of band edges by 70–100 px.

## (f) Decoration
- Index numbers "01–04" 20 px; hairlines 1 px black; English title + JP sub-label pairs.
- Solid cobalt "cover" wipe (full image-size block) scaling across each photo on reveal.
- Header turns into a slim fixed bar after 300 px (class toggles at 150 / 300 px; hides on scroll down, shows on scroll up).
- R2: dashed vertical white "road centre line" (12 px × 120 px segments, 120 px gap) down the page centre; scroll % counter bottom-left; ellipse hairline around hero logo.

## (g) Motion
| Effect | Trigger | Duration | Delay / stagger | Easing | Distance |
|---|---|---|---|---|---|
| Service rows & blocks fade-up (`js-scroll-fade`) | jQuery window scroll listener, adds class when element top < viewport bottom − 10% | 1.5 s | none | cubic-bezier(.19,1,.22,1) | translateY 20 px → 0, opacity 0→1 |
| Photo "cover" wipe (`_slidein`) | same listener adds `isActive` | .65 s | .3 s (second photo .45 s extra) | cubic-bezier(.73,0,.83,1) | scaleY 0→1→0 of #0B318F overlay then image fades in |
| Hero copy intro | page load +700 ms | .5–.8 s | .3 s / .4 s per line | cubic-bezier(.36,.14,0,1) | translateY 105% → 0 (masked lines) |
| Hero photo slider | Swiper creative, autoplay 4 s | .8 s | — | cubic-bezier(.16,1,.3,1) | next slide enters from translate 100% |
| Parallax on photos | simpleParallax.js | scroll-linked | — | linear | scale 1.1 |
| Slide marquee (about) | Swiper linear autoplay delay 0 | 8–30 s per loop | — | linear | horizontal |
| R2 section clip wipe | GSAP ScrollTrigger scrub 1, start "top bottom" end "top 40%" | scrubbed | — | none | `clip-path inset(0 0 100% 0)` → `inset(0)` |
Libraries: R1 jQuery + TweenMax + anime.js + simpleParallax + Swiper + barba; R2 GSAP 3.12 + ScrollTrigger + Lenis + Splide.
