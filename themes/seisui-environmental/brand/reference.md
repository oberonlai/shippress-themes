# Reference — Seisui Environmental (draft; "Ours" columns filled in stage 2)
Source: S5-Style category listing (https://www.s5-style.com/). Only R1 is analysed in depth; R2 was checked and rejected.
- R1: https://www.dorokogyo.co.jp/ — civil and land works, Hokkaido; closest S5-Style entry to environmental/land-services. Not used by earlier themes.
- R2 (rejected): https://okuaizu-sedomori.com/ — nature-experience site; black-on-navy silhouette splash, no usable structure.
Measurements: brand/reference-tokens.md. Screens: brand/ref/doro-first.png, doro-s1/s2/s3 (via doro-tech-cards.png), scroll-*.png.

## Signature candidates (shape, composition, position)
| # | R1 technique | Ours (fill in stage 2) |
|---|---|---|
| T1 | Ghost English word, 183px bold, accent at 15% opacity, centred behind each section's 48px letter-spaced heading, overlapping its top | |
| T2 | Full-width landscape band behind a 3×2 grid of white radius-10 icon cards (393×180, gap 10), foreground subject overlapping the band's lower edge | |
| T3 | Floating 73×146 MENU tab (pale #EDF2EF, right corners rounded) pinned top-left; logo centred; slim right-aligned text nav | |
| T4 | Hero headline right-aligned bottom-right, two lines, wide tracking, over a large image offset right and cropped by the viewport | |

## Colour relation
Ground #FFFFFF ≈95%, pale band #EDF2EF, text #333333, accent #33A969 (footer full-bleed, ghost word 15%, icons). First-screen saturated ≈ 6%. Ours: ground off-white, pale band, ink, accent #6A7A58 small areas only.

## Scroll effects
| Site | Effect | Trigger | Timing / easing | Ours |
|---|---|---|---|---|
| R1 | Hero intro objects fade+drop | GSAP timeline on load | 0.4s power2.out, per-item delay | |
| R1 | Hero vehicles slide left | GSAP timeline on load | x −2500px, 8–10s, linear | |
| R1 | Header collapses to MENU tab | state change (translateX −280px) | 0.4s ease | |
| R1 | Image lazy-load | IntersectionObserver, rootMargin 400px | none visible | |
| R1 | Content sections | no reveal | — | |
