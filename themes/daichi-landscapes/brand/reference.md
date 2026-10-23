# reference.md (draft, stage 1)
Source: S5-Style (https://www.s5-style.com/), category: construction / landscaping.
- R1 (main): 石井造園 https://www.ishii-zouen.co.jp/ — S5-Style https://www.s5-style.com/10051/ (not used by earlier themes). Tokens: `reference-tokens.md`. Screens: `ref/ishii-first.png`, `ref/scroll-ishii-{0,1,2}-{before,after}.png`.
## Signature candidates (we use 2–3, visibly)
1. Staggered vertical white label tiles (different heights) holding the H1 phrase over the hero image, top-right of the photo.
2. Wavy curved section edge: a pale band whose bottom edge is a soft wave (amplitude ≈70px) into the next white section.
3. Ring-graph meters (circular stroke, % count-up) for engagement facts, with plant imagery overlapping the ring.
4. Rounded (10px) photo carousel with alternating vertical offsets, overflowing both edges.
## Colour (R1 → ours)
| role | R1 | ours (daichi-landscapes) | ratio |
|---|---|---|---|
| ground | `#f7edde` | `#FFFFFF` white + `#F2F1EC` stone (cream forbidden) | ~70% |
| support | `#f5f1d8` wave band / `#fff` | `#F5F1D8` timeline band + wave | ~20% |
| main | `#118856` | `#5E6B52` moss (small areas) | ~8% |
| accent | `#fe6806` | `#E2662A` 10px sun dot before labels | <0.5% |
## 成品對應 (product mapping, see design-spec.md)
| R1 technique | Daichi |
|---|---|
| 1 vertical white label tiles | T1: 3 horizontal white tiles (15px gap, staggered) top-right over hero P1; page-head strips on all inner pages; flow below photo on mobile |
| 2 wave edge | T2: one asymmetric 70px swell under the `#F5F1D8` process-timeline band (home #4, Process, Services, Aftercare, Project single, About) |
| 3 ring meters | T3: three 260px rings stroke 26 with sp-count (home #6, Aftercare, About, Project single) |
| 4 offset carousel | not used (Ito HR marquee too close) |
| floating info card | hero bottom-right card 377×108 r8 |
| inview motion | sp-reveal--up/zoom/wipe .8s cubic-bezier(.65,0,.35,1); hero sp-parallax 10%/6% |
