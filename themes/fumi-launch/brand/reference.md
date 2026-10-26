# Fumi Press Launch: reference (draft, stage 1)
- Main reference: https://yoichi-shumputei.com/ (S5-Style listed; a performer's official site: giant brush-type name over a seated portrait, deep field colour, ivory + orange accent, framed 1px hairline columns, left rail). Fits "single person launching their work with dates and booking".
- Rejected: https://gashimaga.jp/ (maintenance page when checked, nothing to measure).
- Screenshots: brand/ref/yoichi-first.png (first screen), yoichi-s2/s3.png, scroll-{info,intro,image,archive}-{before,after}.png.
## Signature candidates (shape, composition, position)
1. **Giant title behind/over a seated figure**: the display word spans ~90% of width at y≈290–460, the portrait (33% wide, centre) sits in front of its middle letters.
2. **Left rail 93px with 1px hairline, vertical logo on top, hamburger mid-rail**; content in 1px hairline frames (170/1369).
3. **Round rotating-text stamp** (215px) bottom-right of the first screen with an arrow, the single CTA.
4. **Black full-bleed stage band** (cinematic photo) between field-colour sections; statement section in light serif 70px with wide tracking.
## Colour relation
Field #003F8B 73% / ivory #FFFFED type 8% / orange #F26B3A 1.6% accent / photo 15% / black band. Ours maps to: field #6F7765 → deep #3E453A (rikyu-nezumi family, low saturation), ivory #F4F1E6, accent persimmon #C8512F. (成品對應: see section below.)
## Scroll
Webflow IX2 scale .9 + opacity fade on scroll into view; luxy.js smooth scroll; no parallax found.
## 成品對應
| Reference (yoichi-shumputei.com) | Fumi Press Launch (design-spec.md) |
|---|---|
| Deep field #003F8B 73% | Rikyu-green field #3E453A ≈65% (row palette, saturation gate ≤15%) |
| Seated portrait centred, 33% width | Framed-window film-grain photo I1 (open book on a Taipei café table), 480×640, x 520–1000, sp-parallax 6% |
| Giant ivory brush name crossing the figure | "Small Hours" Gloock 11.5rem ivory #FAF8EA, one line, crossing the photo (T1) |
| Orange roman name + occupation word | "Clara Hsu" Public Sans 700 #F26B3A across the title; "Essays" Gloock #F26B3A above-left |
| Rotating "booking" stamp bottom-right | Rotating "Pre-order" stamp 184px, single repeated CTA (hero, Editions, Waitlist, inner heads) (T3) |
| 93px left rail, vertical logo, 1px hairline frames x170/x1369 | 92px rail, vertical "Fumi Press", 1px frames 1200/1000 with corner ticks (T2) |
| Black stage photo band | #0E0D0B full-bleed band, photo I3, sp-parallax 10% |
| 70px light statement, ls .06em | Statement Gloock 4.375rem lh 1.21 ls .06em, sp-reveal--zoom |
| Dated info list, archive strips 64px | Readings rows and reader strips, 64px hairline rows, sp-stagger + sp-reveal--up |
| IX2 scale .9→1 on load / in view | CSS load keyframe scale .9→1 .8s; sp-reveal--zoom in sections |
