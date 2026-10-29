# Reference — Tsuya Jewellers (finished counterpart filled in from design-spec.md, stage 1 spec)
- Reference (primary): https://maisontakuya.jp/ — S5-Style, category fashion (Shopify store, leather goods). Neutral grey photo-led store; found via https://www.s5-style.com/. No secondary (the only other unused fashion hit, a high-chroma novelty store, was rejected: saturated coral/mint, against the quiet palette).
- IMAGERY: photo. Low-key studio photography on soft grey, black objects, one plinth, one model crop.
- Screenshots: `ref/maison-first.png` (first screen), `ref/scroll-maison-pair.png` (offset photo pair), `ref/scroll-maison-newarrivals-header.png` (header visible + tile row), `ref/scroll-maison-strip.png` (horizontal strip).

## Signature techniques taken (see stage-a.md)
| # | reference | our counterpart (finished counterpart) |
|---|---|---|
| T1 | Full-bleed grey photo with a flat caption strip underneath (headline left, 500 px paragraph right, single accent colour) | Home 1: H1 (gold band on a linen tray under one bench lamp) in a framed window (34 px sides, 60 px top, bottom at 82 svh), flat strip on `#DFDDE2`: brass `#785A28` slogan "Made to be worn / on an ordinary Tuesday." left, 500 px brass paragraph right; outlined brass monogram top-right. Inner page heads: short frame (56 svh) + strip with title left. |
| T2 | Split header: nav left, centred wordmark, utilities right; hidden on the first screen, slides in after it | Split header on every page: Pieces · Commissions · The Bench · Visit left, tracked TSUYA in brass centred, search / Account / Cart (0) right, 60 px on `#DFDDE2`; on home ≥ 782 px hidden on arrival and slid in (−20 px, fade) over 55–75 vh via CSS scroll-driven animation. |
| T3 | Offset horizontal photo strip: 16 % empty left gutter, wide 1.48:1 photos, next one peeking at the right edge, serif caption below each | Home 4 "Commissions": S1–S3 stories at 67.5 vw × 1.48 : 1, 16.3 vw empty gutter, 18 px gap, next one peeking, wrapper `sp-reveal--left` 1 s `cubic-bezier(.65,.05,.36,1)`; same strip on Commissions, The Bench, Journal, About. Offset pair (P1/P2, 40 vw each at 16.3 %) on home 2, mirrored (R1/R2) on home 7. |
| T4 | Flat 3:4 tiles with a centred object, 6 px gaps, a long thin arrow as the only "next" control | Home 3 "Pieces for every day": 4 WooCommerce products J1–J4, 3 : 4 flat low-key tiles, 6 px gaps, 48 px 1 px arrow to /pieces; Pieces grid, Prices and Repairs tiles. |

## Colour relationships kept
Neutral ground ~99 % of the area, one small warm accent only on type (< 1 %), flat tiles one step darker than the ground.

## Scroll effects (reverse-engineered, recorded only)
Header fade/slide-in after the hero; strip slides in from the right (1 s, cubic-bezier(0.65,0.05,0.36,1)); opacity hover 0.6 s. GSAP + ScrollTrigger + Lenis + Embla. See reference-tokens.md (g).

## Colour mapping (finished counterpart)
Ground `#DEDEDE` → `#DFDDE2` (same lightness, violet cast) · text `#2E2E2E` → `#2A2433` · accent `#DA4803` → brass `#785A28` (on light) / `#C9A56B` (on ink), type and marks only, < 1 % · tiles `#D0D0D0` → low-key photo tiles · footer ink `#2A2433`. Full table in design-spec.md §5 and §11.

## Motion mapping (finished counterpart)
Header slide-in → CSS scroll-driven header (home, ≥ 782 px) · strip slide-in → `sp-reveal--left` on strip wrappers · pair/tiles → `sp-stagger` + `sp-reveal--up` · added (required) `sp-parallax` on the hero frame (8 %) and the B1 bench band (10 %) · hover opacity .6s ease.
