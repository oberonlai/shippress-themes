# Reference tokens — maisontakuya.jp (measured with getComputedStyle at 1440×900, 2026-10-29; values and descriptions only)

IMAGERY: photo — low-key/greyscale studio photography (soft grey seamless backdrop, black leather goods, one model crop, matte plinth block). No illustration anywhere.

## (a) Colour
| role | hex | share (first screen / page) |
|---|---|---|
| ground (page) | `#DEDEDE` | ≈ 18 % first screen (caption strip), ≈ 80 % of the rest of the page |
| photo field | greys `#C9C9C9`–`#D0D0D0`, subject `#1C1C1C` | ≈ 82 % first screen (all neutral) |
| text | `#2E2E2E` | body, nav, captions |
| accent | `#DA4803` (vermilion) | < 1 % — hero caption text, logo mark, nothing else |
| tile ground | `#D0D0D0` | product tiles on the `#DEDEDE` page |
Saturated share first screen ≈ 0.5 % (only the accent text and logo). The only chroma on the page is the small accent type.

## (b) Type
- Sans: Switzer (+ Noto Sans JP), 10 px root; nav/captions 1.0–1.2 rem (10–12 px), weight 360–400, letter-spacing 0.04em (0.4 px), line-height 150 %.
- Serif: Sentient (+ Noto Serif JP) for titles only: 1.4 rem (14 px), weight 370, lh 1.6, no caps. Section label "New arrivals" 1.6 rem serif.
- Tiny and quiet: nothing above 1.6 rem on the first three screens; hierarchy by position, not size.

## (c) Spacing
- Full-width layout, side margin 35 px (3.4 rem); no max-width container; header 60 px high fixed.
- Section padding: pickup 100 / 114, product list 128 / 125, journal 128 / 125, about 125 / 139 px.
- Hero: photo 754 px of 915 px (82 %), caption strip 161 px (padding 43 / 34).
- Journal strip: wrapper starts at x = 235 (16 % empty gutter at left), items 972 × 658 (1.48 : 1), caption 25 / 25 padding below.
- Pair block: two 575-wide photos at x 234 and 829, gap 20 px, 100 px empty ground above.
- Product tiles: 288 × 384 (3 : 4), gap 6 px, 4 visible + long arrow at the right.

## (d) Radius / borders / shadow
Radius 0 everywhere. No borders (1 px outline only on the header search icon). No shadows. Tiles are flat `#D0D0D0`.

## (e) Image presentation
- Hero: full-bleed photo (0 radius), subject right of centre, ratio 1440 : 754 ≈ 1.91 : 1, then flat caption strip on the page ground.
- Pair: two portrait crops 575 × ~730 (≈ 0.79 : 1), different subjects (model crop / object on plinth), left one at x 234.
- Strip: wide 972 × 658 object on a plinth, centred small subject in a large empty grey field; next item peeks in from the right edge.
- Tiles: product cut-out centred in a flat tile; subject takes ~40 % of tile width.
- Position / share: strip ≈ 67 % of the width, pair ≈ 40 % each, hero 100 %.

## (f) Decoration
Header: nav left (Brand / Products / Journal / Store, 60 px gaps), wordmark centred in wide-tracked caps in the accent colour, search + Login + Cart (0) at the right. Header is hidden (translateY −20 px, opacity 0) on the first screen and fades/slides in after ~1 screen of scroll. Logo mark: 33 × 49 outlined rectangle with "M/T" in the accent colour at top right of the hero. Long thin arrow (48 px) as the only "next" affordance. No numbers, no lines, no shapes.

## (g) Motion
- Libraries: GSAP + ScrollTrigger, Lenis (smooth scroll), Embla (hero slider + strip), PhotoSwipe.
- Header reveal: opacity 0 → 1 and translateY −20 → 0 after scrolling past the hero (≈ 1000 px), ~0.4–0.6 s.
- Journal strip slides in from the right: `translate3d(calc(6rem + 50.8vw),0,0)` → 0, transition `transform 1s cubic-bezier(0.65,0.05,0.36,1)`; also draggable.
- Hover: opacity `0.6s ease`. Common ease `cubic-bezier(.4,0,.22,1)` (Lenis / GSAP).
- No parallax, no counters, no marquee on the home page.
