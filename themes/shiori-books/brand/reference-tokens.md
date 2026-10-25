# reference-tokens — measured with getComputedStyle (Chrome headless 1440×900, 2026-10-25)
Main: https://bookandsons.com/ (S5-Style entry, art-book store). Secondary: https://8books.jp/ (S5-Style, municipal library). Values only; no assets copied.

## (a) Colour (bookandsons)
| role | hex | area |
|---|---|---|
| ground (home / lists) | #F9F9F9 | ~70 % |
| text | #2B2B2B (list inactive: same at 40 % opacity) | <3 % |
| panel (newsletter, paper-grain texture) | #E3E3E3 | ~6 % |
| entrance left half (light, blurred window-shadow band) | #908F8B – #9A9792 | 50 % of entrance |
| entrance right half (dark warm grey) | #44413C | 50 % of entrance |
| photos | monochrome / muted film | 15 % |
| accent | none (zero saturated pixels; first-screen saturation 0 %) | 0 |
8books: ground #3C3C3C, card white #FFF, text white, ghost ring text rgba(255,255,255,.12).
## (b) Type
- Family: Suisse Int'l (grotesk, 4 cuts regular 400 / book 450 / medium 500 / semibold 600) + Hiragino Kaku Gothic for JP.
- Nav 16px / lh 16px / ls 0.16px (0.01em) / semibold, no transform. Sub-nav and list 14px / lh 21px / ls 0.14px / regular. Lead 10–11px lh 1.6–1.8 ls .03em. Newsletter title 15px/18px medium. Entrance wordmark ≈13px caps ls ≈0.2em; entrance blurb ≈11px lh 1.6 centred; bracket label ≈12px "( TOKYO )".
- Largest type on the site: wordmark logo svg 215×14. No big headings. (8books h2 20px/700; ghost ring text ≈ 200px outline.)
## (c) Spacing
- Header: left 38px, top 28px; nav items 606 / 767 / 909 / 1084 / 1191 / 1313 (gap ≈ 60–70px). Lists row pitch 21px. Home min-height 102rem (≈1020px), first image 603px wide (41.9 % of 1440) flush left, 421px high, 1px of white space above (y 599). Entrance text column gap 335px, block centred, vertical gaps 108px between title / blurb / label.
## (d) Radius, border, shadow
- Radius 0 everywhere (photos, panel). No border except a 1px underline on the email input. No shadow. (8books: card radius ≈12px, pill buttons 70px high capsule with open right edge line.)
## (e) Imagery — IMAGERY = photo
- Photographic, B&W or desaturated film look, soft window light, a few objects (lamps, shelf, counter); no illustration.
- Entrance background: full-viewport photo, soft diagonal shadow band, ratio 16:10, cover, left light / right dark split at 50 %.
- Home image: 603×421 (1.43:1), no radius, no mask, flush left x 0, 42 % of width, sits under 1 big empty ground area.
- Exhibition list thumb: 400×267 (3:2), left column x 76, appears when hovering a row; 0 radius.
## (f) Decoration
- Brackets around place labels "( TOKYO )"; 1px email underline; close "×" 24px line icon top-right of panel; fixed newsletter panel 434×260 at bottom-right with paper-grain tile.
## (g) Motion
- Entrance → site: fade, opacity 1s ease; header/footer fade-in 0.6s ease; hover opacity .3s; nav underline hover. Smooth scroll via Lenis (+ GSAP ScrollTrigger 3.12.5 bundled). Menu transforms 1s .15s cubic-bezier(.77,.1,.24,1) / 1.2s same. 8books: body background-colour swap 0.5s ease-in-out per section, image opacity .5s ease-in-out, slide-in keyframes 1s ease-in-out forwards; jQuery easeInOutExpo scroll 1000ms.
