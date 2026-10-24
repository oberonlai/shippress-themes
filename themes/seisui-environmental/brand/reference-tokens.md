# Reference tokens — R1 Dorokogyo (https://www.dorokogyo.co.jp/), measured 2026-10-24, 1440×900, getComputedStyle
Measured values and descriptions only; no assets, text or logo copied. Illustrations on the reference are watercolour; ours are film-grain photographs.

## (a) Colour (first-screen pixel share)
| Role | Hex | Share / use |
|---|---|---|
| Ground (main) | #FFFFFF | ~95% of first screen; sections alternate with pale band |
| Pale band | #EDF2EF | 100px-padded band (1079px tall), tech-card section ground; ~1% of first screen |
| Text | #333333 (secondary #5F5F5F, rule #CCCCCC) | all copy |
| Accent green | #33A969 (logo/CTA pixel #00A63C) | footer ground (full-bleed, 1230px), ghost word at 15% opacity, arrows, icons ≈ 0.5% first screen |
| Illustration spot colours | violet, yellow, orange | only inside illustrations; saturated share of first screen ≈ 6% |
Ours: ground off-white, #EDF2EF-like pale band, ink text, #6A7A58 as small accent only.

## (b) Type
- Body Noto Sans JP 16px / 500 / lh 27.2px (1.7), ls normal, colour #333.
- Section ghost word: Roboto 700, 183.46px, lh 155.9px, colour accent at opacity 0.15, sits behind the heading, centred, overlapping heading top ~85px.
- Section h2 (JP): Noto Sans JP 500, 48px, lh 72px (1.5), ls 4.8px (0.1em), centred.
- Hero catch: ~48px, ls ~0.12em, right-aligned at bottom-right of first screen, two lines.
- h3 (sub-section): 20px / 700 / lh 34px, centred.
- Nav: 16px / 500, white-on-green in overlay, #333 in bar.
- Lead paragraph centred, ~15px, lh 1.8, 3 short lines.

## (c) Spacing
- Container 1200px (side 120px at 1440). Section padding: 100px/100px (pale band), 200px top / 100px bottom (business), 80px top (century, recruit), 0 for the full-bleed photo band.
- Card grid gap 10px (3 columns 393×180, 2 rows). Two-column tech cards 595×120, gap 10px.
- Header: floating MENU tab 73×146 at top-left, logo centred at y=50, right text nav at y≈33.

## (d) Radius / border / shadow
- Cards radius 10px, no border, no shadow, white on photo or pale band. MENU tab radius 0 10 10 0, ground #EDF2EF. Footer square.

## (e) Images
- Hero: one large illustration 1040×457 (2.28:1) overlapping the first screen right of centre, cropped by viewport edge; secondary 601×377 (1.59:1) and 427×377 (1.13:1).
- Full-width landscape photo band (mountains) behind MISSION cards, ≈ 1440×~830, bottom edge torn/irregular into noise paper; figures overlap band edge by ~140px.
- Paper noise texture on white sections (bg_noise), irregular torn-paper clip on pale-green band top.
- Our mapping: 16:10 and 3:2 photographs, radius 0–10px, one full-bleed parallax photo band behind cards.

## (f) Decoration
- Ghost English word (183px, 15% accent) behind each section heading. Icon cards: 70px single-colour line icon (accent) above 16px label. Arrow cards: 24px accent arrow at right. Irregular torn-paper edge between bands. Noise grain overlay.

## (g) Motion
- Hero: time-based GSAP intro, vehicles translate x −2500px over 8–10s linear ("none" ease), objects fade in 0.4s power2.out with per-item delay. Header collapses to MENU tab (translateX −280px).
- Card/link hover transition 0.2s ease all; header 0.4s ease.
- Images lazy-loaded via IntersectionObserver with 400px rootMargin (no visible reveal). No scroll reveal on content sections.
- Libraries: GSAP 3.12.5 + CustomEase + MotionPath + ScrollTrigger + ScrollSmoother 3.13, jQuery, slick, swiper.
