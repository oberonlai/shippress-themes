# reference-tokens — besthome-ep.com (S5-Style 住宅・建築 / 注文住宅), measured 1440×900 with getComputedStyle, 2026-10-26
Only numbers and descriptions. No asset, text or logo is copied. Reference screenshots: `brand/ref/besthome-*.png`, `scroll-*.png`.

## (a) Colour (first screen 1440×900 measured from screenshot, plus CSS)
| Role | Hex | Where | Area |
|---|---|---|---|
| Ground | `#FFFFFF` with faint paper-grain noise | all content sections | ≈55% of page |
| Text / ink | `#2B2B2B` (rgb 43,43,43) | body, H2, H3, buttons | text only |
| Dark band | `#2D2D2D` | footer | ≈6% of page |
| Quiet band | `rgba(0,0,0,.05)` on white ≈ `#F2F2F2` | works section | ≈10% |
| Hero right half | grey-brown vertical gradient (`#8A8581` → `#4A4A50`) over a blurred photo | first screen right 50% | 50% of first screen |
| Accent | `#2E4282` navy | link hover, underline, marquee dot (24px circle), houselab button hover | <1% |
| Logo red | `#D21524` / `#7C2020` | logo mark only | <0.5% |
| Lines | `#DEDEDE`, `#EBEBEB` | dividers, card edges | hairlines |
- First screen saturated share (HSV s>0.45, v>0.25): **2.0%** (a green forest thumbnail and a tiny logo). The page is monochrome grey + photographs; colour only from photos.
- First-screen colour buckets: charcoal greys ≈ 60%, mid grey ≈ 12%, light grey ≈ 4%, blue-grey ≈ 7%, rest photo.

## (b) Type
| Role | Family | Size | Weight | Line-height | Letter-spacing | Case |
|---|---|---|---|---|---|---|
| Body | Zen Kaku Gothic New, sans-serif | 16px (1rem) | 400 | 28px (1.75) | normal | – |
| Lead text (concept) | Zen Kaku Gothic New | 20px | 400 | 2.4 (48px) | 0.08em | – |
| H2 display (English) | Marcellus (serif) | **96px (6rem)** | 400 | 1.0–1.25 | normal | mixed |
| H2 small span ("&") | Marcellus | 64px | 400 | 1 | normal | – |
| Section number "( 01 )" | Outfit | 15px | 300 | 1 | 1.2px | – |
| H3 | Shippori Mincho | 32px | 500 | 1.5 (48px) | 0.08em (2.56px) | – |
| Nav link | Zen Kaku Gothic New | 13px | 500 | 1 (line-height 2 in list) | 0.08em (1.04px) | – |
| Hero vertical title | Shippori Mincho / Outfit (vertical-rl) | 24px | 400 | 1 | 0.1em | – |
| Hero caption "work 09" | Outfit | 24px, number 13px in 30px circle | 400 | 1 | 0.1em | lower |
| Footer marquee text | Shippori Mincho | 48px (28px mobile) | 400 | 1 | −0.08em | – |
| Hero wordmark | SVG outlined geometric wide sans | ≈ 93px tall, 1360px wide (full width −40px) | – | – | – | upper |

## (c) Spacing
- Container: `max-width 1120px; width calc(100% − 320px)` at 1440 (x 160 → 1280); 96% under 1440; 92% tablet; 89.6% mobile.
- Section padding: 160px top/bottom (design, hint, works, news); concept section margin-top 240px, bottom 80px; concept text padding-bottom 136px.
- Image block gaps: expand-container margin-top 160px; left sub image margin 0 0 40px 40px; right sub image margin −80px 40px 0 auto (overlaps main by 80px).
- Button block margin-top 80–120px; H2 margin-bottom 56px; H3 margin-bottom 24px; paragraphs gap 1em.
- Column gaps: slider 32px (desktop), 24px (tablet). Design text column: 50% width, pushed right (`margin-left:auto`), margin-top 120px under the H2.

## (d) Radius, borders, shadow
- Radius **0** everywhere on photos and cards. Exceptions: fixed vertical side tab `4px 0 0 4px`; round items (30px number circle, 24px marquee dot, 80px round Instagram avatars, 9999px).
- Borders: 1px `#DEDEDE`/`#EBEBEB`; text-link button = bottom 1px line only (`#2B2B2B` at ~.2), 300×45px, a thin vertical divider then a small chevron at right.
- Shadow: none.

## (e) Imagery
- **IMAGERY: photo.** All main images are real photographs (interiors, timber, craft details, forest aerial); muted, slightly desaturated, dim and warm-grey, soft contrast; hero left photo is very dark charcoal/blue-grey, others warm daylight.
| Image | Aspect | Radius | Mask / clip | Position and width |
|---|---|---|---|---|
| Hero left photo (slider, crossfade) | 720×900 (4:5) full height | 0 | – | left half 0→720 (50% of 1440), photo scale 1.1 → 1 over 5s |
| Hero right background (blurred photo + grey gradient) | 864×900 | 0 | blur + dark gradient | right half from x 576 (overlaps the left photo by 144px) |
| Hero small framed photo | 300×400 (3:4) | 0 | – | right half, centre-left at x 930, y 247; vertical text columns on its left and right edge |
| Concept image | 639×400 (≈1.6) | 0 | – | absolute bottom-right of the concept block, 44.4% width, flush to viewport right edge |
| Expand-container main | 1440×810 (16:9), full-bleed | 0 | – | full width (square on mobile) |
| Sub left / sub right | 360×222 and 576×355 (≈1.62) | 0 | – | left sub x 40, 25% width; right sub x 824, 40% width, pulled up −80px to overlap main |
| Works slider card | 307×409 (3:4) | 0 | – | 3.4 cards visible desktop, 1.8 tablet, 1.13 mobile |
- Overlaps: sub images (z-index 1) sit on top of the full-bleed main image at its lower-left and upper-right; hero right half overlaps hero left by 144px via a gradient.

## (f) Decoration
- Hero wordmark: full-width outlined wide-sans word across the very bottom of the first screen (93px tall, white on the photo/gradient), crossing the split line.
- Vertical text: hero title in 2 vertical-rl columns (24px) either side of the small framed photo; vertical "work / 09 / type" caption on the left edge of the left photo (number in 30px outlined circle).
- Fixed side tab: 49×183px dark `#2B2B2B` tab at right edge, vertical text, dashed 1px divider (`rgba(255,255,255,.5)`) then a chevron.
- Section label "( 01 )" in Outfit 15px above a 96px Marcellus title.
- Hamburger: two 56px × 1px lines; on hover bars slide out and in.
- Rotating text ring (5s linear) on the footer link arrow; 24px navy dot + chevron on marquee items.

## (g) Motion
| Effect | Type | Duration | Delay / stagger | Easing | Distance |
|---|---|---|---|---|---|
| `.anime-fade-in` (nearly every text and image) | jQuery inview adds `js-inview-in`; CSS transition on opacity + mask-position of a 300%-tall bottom→top linear-gradient mask | 1.2s | none (paragraphs reveal as each enters) | ease-out | wipe rises bottom → top across the element height |
| Header logo / nav drop-in | inview + CSS animation `fade-top` | 0.8s | – | cubic-bezier(.23,1,.32,1) | translateY −60px → 0 |
| Fixed side tab slide-in | `fade-side` | 0.8s | – | cubic-bezier(.23,1,.32,1) | translateX 40px → 0 |
| Hero wordmark | per-glyph `clip-path: inset(100% 0 0 0)` → `inset(0)` on inview | 0.8s | glyph n × 0.04s (0.08, 0.12, 0.2, 0.24, 0.28, 0.32, 0.4, 0.44 s) | `cubic-bezier(.25,.8,.25,1)` | rises from the baseline |
| Hero photo slider | Swiper fade, loop | 1.2s fade, 5s autoplay | – | default | none; image scale 1.1 → 1, `transition 5s 1s ease-out` |
| Count-up numbers | inview + requestAnimationFrame | 600ms | – | linear | 0 → target |
| Text marquee (hint) | CSS `translate: -100%` keyframes | 40s infinite | – | linear | – |
| Footer marquee | CSS keyframes | 20s infinite | – | linear | – |
| Link hover | transition | 0.5s | – | default; underline width 0 → 100% | – |
| Photo slider drag | Swiper, scrollbar draggable | – | – | – | 3.4 / 1.8 / 1.13 cards |
- Library: jQuery 3.7 + `jquery.inview`, Swiper 11. No GSAP, no Lenis, no parallax.
