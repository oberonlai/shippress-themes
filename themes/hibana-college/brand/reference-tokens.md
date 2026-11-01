# Reference tokens — OKINA PROJECT (https://okina-pj.com/), measured 2026-11-01 at 1440×900 (getComputedStyle + pixel sampling)
Only values and descriptions; no assets, copy or logos taken.
## (a) Colour
- Ground `#080D1B` (rgb 8,13,27) ≈ 85% of the first screen; text `#FFFFFF`; round arrow buttons white fill with dark arrow.
- Photo mass (low-key stage photography, warm tungsten + deep navy) ≈ 12% on scroll screens; one saturated blue booklet band (`#1F3F9E`-ish) ≈ 8% of one scroll screen only.
- First-screen saturated share (S>0.5, V>0.35): **0.0%**; worst scroll screen 2.7%. Accent: none on the first screen.
## (b) Type
- Section titles: Trajan Pro 3 (serif caps), 70px (ABOUT) / 50px (PERFORMANCE, EXHIBITION…), weight 400, lh 1.0, ls normal, uppercase.
- Body: Noto Sans CJK JP 14px, weight 300, white. Nav 14px caps-latin. Hero H1 14px light, 364px wide, left x=117.
- Caption cards: JP name 28–30px serif + 12px details line.
## (c) Spacing
- Header 110px tall, padding 45/60px, transparent over content. Section blocks 500–2000px tall with ≈140px gaps. Twin photo panels 695×768, left x=20 and x=725 (10px gap, full-bleed minus 20px).
## (d) Radius / borders / shadows
- Radius 0 on photos; round 52px arrow button; caption card flat dark (`#080D1B`) with a small notched label tab (“ARCHIVED”) on its top edge; no shadows. 1px white hairline under ABOUT (≈140px).
## (e) Imagery — **IMAGERY: photo**
- Low-key documentary photography (Noh performers on stage, mask close-up, exhibition scrolls). Ratios: twin panels 0.90:1 (695×768); mask cut-out tall 0.57:1 (421×738) overlapping the heading band at right; booklet photos 1.1:1. No radius, no clip-path; caption card overlaps the photo bottom by ≈60px, left-aligned. Panels bleed to the viewport edges.
## (f) Decoration
- Thin white concentric circles of several sizes (canvas, hero) drifting; round white arrow buttons (Ø52) with “VIEW DETAIL” 12px caps to their left; vertical rotated micro-label “what is OKINA?” at the right edge with a hairline; SNS icons below it; 1px rules.
## (g) Motion
- Hero: canvas of circles drifting continuously; H1/logo masks (two stacked images) shift at load. Photo sliders: Swiper `effect: fade`, speed 2000 ms, autoplay delay 1500 ms, loop. Link hover `all .3s ease`; slider arrow `opacity .4s ease-in-out`. Strip containers translate horizontally with scroll (≈ −1390 → −2085 px over 700 px scroll, i.e. horizontal parallax ≈1:1) while opacity eases 1 → 0.63 over 2s.
