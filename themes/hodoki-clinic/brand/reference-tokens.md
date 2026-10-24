# Reference tokens (measured 2026-10-24, headless Chrome 1440×900, getComputedStyle; values only, no assets or copy)

Main reference **R1 = Lux Clinic, https://lux-clinic.jp/** (S5-Style: parallax, circle/curve motif). Secondary **R2 = T.S.NAKAMURA Bone & Joint Clinic, https://ts-nakamura.com/** (S5-Style: bone-setting / physiotherapy). Screens: `ref/lux-clinic-*.png`, `ref/nakamura-*.png`, scroll states `ref/scroll-*.png`.

## (a) Colour
| Role | R1 Lux | R2 Nakamura | Area (1440×900 first screen / page) |
|---|---|---|---|
| Ground | `#F2EBDC` warm cream (body), `#FFFFFF` Reason band, `#F8F8F8` doctor band, `#FAF7EE` footer | `#FFFFFF`; footer `#FAF8ED` | R1 cream ≈ 65% of page; white band ≈ 6%; R2 white ≈ 90% |
| Text | `#473C2B` brown ink | `#333333` | body copy |
| Accent (main) | `#B99533` gold (section sub-labels, big wordmark gradient `#B79451→#F2E3A7→#C8A63C`) | `#0068B7` blue (logo disc, tags; 10% tint `rgba(0,104,183,.1)` as image placeholder) | R1 ≤ 8% (labels + wordmark), R2 ≈ 1% of first screen |
| Accent (support) | `#AC8655` LINE pill, `#BCA866` Web pill / outline button | sky blue and yellow "check availability" tag (hex by eye, not measured) | pills 2 × 180×46 |
| On-photo | white `#FFFFFF` text over photo, no scrim box | white over 40–50% dark scrim on the dark rounded band | — |
First-screen saturated pixels (S>35%, V>24%, scripts/check-first-screen.py): **R1 61.6%** (warm interior photograph), **R2 6.5%**. Ours must stay ≤ 15% → the hero photograph has to be pale, low-chroma (high-key whites/greys), not R1's amber.

## (b) Type
| Item | R1 Lux | R2 Nakamura |
|---|---|---|
| Body family | YakuHanMP / Noto Serif JP | ryo-gothic-plusn (Typekit) |
| Display family | Frank Ruhl Libre 300 (Latin wordmark), Lora | Krona One (section titles) |
| Body size / lh / ls | 16px / 24px (1.5) / normal; paragraph in intro ≈ 16/2.0 | 16.87px / 28.67px (1.7) / 0.05em |
| Display wordmark | 80px, 300, lh 1.0, ls 0.05em (hero "OUR MISSION"); giant band wordmark ≈ 170px cap by eye (two lines, 2nd line wider, gold gradient) | 44px / 74.8px, 400 (News, Menu), Krona One |
| Section sub-label | 18–20px, 400–500, ls 0.1em, gold, 60–70px 1px hairline before it | 16.9px + small JP kicker offset at top-right of the Latin title |
| h2 (statement) | 36px / 54px, 500, ls 0.15em (5.4px) | 21px / 35.8px, 700, white on dark band; 32px vertical (writing-mode) in hero |
| h3 (card) | 24px / 36px, 400, ls 0.08em, white on photo card | 19px / 32px, 500, with 8×14px ▶ marker |
| Buttons | 15px, 500, ls 0.1em | 19px, 500 |
| Case | Latin labels UPPERCASE (OUR MISSION, REASON, CASE) | Latin title Title-case |

## (c) Spacing
Section padding-top/bottom: R1 100 / 100 (Reason, Case), 113 top (intro), 120 / 80 (doctor), 160 top (message), nav band 60 / 67; R2 0 / 210 (News bottom), content width 1103. Container R1 1200 (cards at x 120–1320), outer margin 120; intro text column 710 + gap 75 + photo 450. Card gap 30. R2 container 1103 centred, left 337px reserved by fixed left nav column.

## (d) Radius, border, shadow
R1: pill buttons radius 100px, 1px border `#BCA866`, height 44 (outline) / 46 (filled), width 200 / 180; arch photo `border-radius 225px 225px 0 0` (450×580); photo cards radius 0; no shadow. R2: cards radius 10, shadow `0 0 24px rgba(0,0,0,.1)`, photos radius 10, dark info band `border-radius 0 0 50px 50px` (white section) and 50px on the dark photo band; no borders.

## (e) Images
| Image | Ratio | Radius / mask | Place and width |
|---|---|---|---|
| R1 hero | 1.6:1 full-bleed (1440×900), cover, crossfaded 3 slides, scale 1.06 drift | none | 100% × 100vh |
| R1 intro arch | 450×580 (0.78) | top corners 225px (full semicircle arch) | right of text, x 904–1354 (31% of width) |
| R1 intro tiny | 281×177 (1.59) | none | straddles the "OUR MISSION" wordmark top-left, bleeds past left edge by 20px, parallax inside (scale 1.2) |
| R1 corner pair (message band) | 517×280 and 394×243 | none | sizes by eye from screenshot; left photo bleeds off top-left, right photo bleeds off right edge, ~120px lower than left; both overlap the giant wordmark |
| R1 pinned box (video) | 211×267 → 1076×687 → full width | radius 332px top → 0 | centred, pinned while scrolling 800px then expands |
| R1 reason cards | 380×560 (0.68) | none, bottom-up brown scrim `#AC8655`-ish overlay with number "#06 ——" | 3 visible + peeking, slider |
| R2 hero | 611×443 (1.38), 257×187, 240×330 (0.73) | radius 10 | three photos scattered around a 300px logo mark; main bleeds off right edge (x 829–1440) |
| R2 menu thumbs | 221×232 (0.95) | radius 10 | right half of white card, vertical title on the left |
| R2 slider | 420×420, 305×420 (0.73), 590×420 (1.4) | radius 10 | full-bleed row, tops staggered 0–127px, loops |

## (f) Decoration
R1: hairline 60–70px × 1px gold before every section sub-label; 6 icon tiles 138×112, gap 20px, 1px gold frame, icon + 15px label (quick nav); slider dots 8px hollow circles with filled active; round "PAGE TOP" 78px circle, 1px gold; fixed corner banner bottom-right (≈308×82 by eye, white, gold right bar); pill CTAs with → arrow inside. R2: ▶ 8×14 marker before link titles; tag chips (pill, 1px outline, 12px); circular logo mark 300px as hero centrepiece; hand-drawn illustration characters (not for us).

## (g) Motion
| Effect | Value |
|---|---|
| Fade-in (all text and photos) | IntersectionObserver, rootMargin `0 0 -100px 0`, threshold 0, opacity 0→1, 1.2s `ease`, no translate, once |
| In-image parallax | scroll listener, image scale 1.2 + translateY = (centre offset from viewport centre) × 0.06 (0.03 mobile), no easing (direct) |
| Pinned expanding box | GSAP ScrollTrigger pin, `scrub: 1`, start "top top", end "bottom bottom"; section height 2.5×viewport; 800px of scroll for 211×267 → 1076×687, then to viewport width + 200; radius 332 → 0; Lenis smooth scroll |
| Hero | 3-slide crossfade, 6s each (opacity 0→1 at 10%, hold to 42%, out by 60%), scale 1.06 + drift ±1.5% translate, `ease-in-out`; second layer slow scale 5s linear |
| Wordmark gradient | rAF loop 5s, gradient stops shift ±15%, `easeInOut` ping-pong |
| Marquee | translateX 0 → −50%, 85s linear infinite |
| R2 image load wipe | `clip-path inset(0 100% 0 0)` → `inset(-1% 0 -1% -1%)` + `translate -50px 0` → 0, 1.3s `cubic-bezier(.19,1,.22,1)`, delay .5s, placeholder bg tint behind |
| R2 hover/colour | 0.3–0.5s `cubic-bezier(.19,1,.22,1)` (colour, opacity) |
| R2 hero photo | slow transform 8s linear |
