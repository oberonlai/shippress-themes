# Reference (draft, stage 1) — Kanade International School
Source: S5-Style education category. Only one usable site: fukujo.ac.jp/university/juken and gashimaga.jp were in maintenance mode on 2026-10-22 (no content); meisei.ac.jp, mycampus.jue.ac.jp, mauinterview.musabi.ac.jp already used by earlier themes.
- https://www.kobe-wu.ac.jp/ (Kobe Women's University, captured 2026-10-22, 1440px)

## Structure observed
Full-bleed campus photo hero (~82% of first screen) with a blue curved sheet at left holding a promo card; text sits right over the photo. A carousel strip of light-blue cards sits under the hero. Then News / Information in two columns with ruled rows, an Event carousel of cards with a large rounded bottom-left corner and a circular date badge, a text-left / photo-carousel-right magazine block, and a "Featured" mosaic of tinted photo tiles with white label chips. Section background is a long vertical gradient (blue to white). Headings: light Latin display (Montserrat/Outfit style) 3.5–4.5rem next to small bold JP labels with a sparkle mark.

## Signature candidates
1. Cards with one large rounded corner (bottom-left, ~64px radius) and a circular date badge overlapping the card's left edge.
2. Mosaic of photo tiles, each tinted with its own colour, with a white label chip centred on it (one large tile left, 2×2 on the right).
3. Large curved sheet cutting into the hero photo from lower left, carrying a small promo card.
4. Photo-carousel strip that bleeds off the right edge beside a left text column.

## Palette (measured / from CSS)
| Role | Hex | Share |
|---|---|---|
| Main (blue) | #1486AD / #5395B8 | ~20% saturated on first screen (above our 15% cap; ours must be quieter) |
| Support (sky) | #73AEC8 / #A4BFD4 | |
| Ground | #EEF7FB / white | |
| Accent (green button) | #72A59B | small |
Our mapping: ground off-white or stone, ink text, celadon #7FA393 only as a small accent. Saturated pixels ≤15%.

## Scroll effects (kobe-wu.ac.jp)
| Effect | Trigger | Timing | Easing | Distance | Library |
|---|---|---|---|---|---|
| Generic fade-up (.-fadeIn__up) | ScrollMagic scene toggles class `-inview`, triggerHook 0.9, no reverse | opacity .6s, transform 1.2s | cubic-bezier(.23,1,.32,1) | translateY 50px | ScrollMagic 2.0.8 |
| Stagger children (.js-fade) | GSAP ScrollTrigger, start "top 55%", play once | .7s, stagger .15s | power3.out | y 24px | GSAP 3.13 |
| Title lines (.js-title) / about title | ScrollTrigger "top 60%" / "top 55%" | .8s, overlap -0.5s | power3.out / back.out(1.4) | y 60px, scale .92→1 | GSAP |
| Image parallax (.js-parallax) | ScrollTrigger scrub 1.5, top bottom → bottom top | scrubbed | none | yPercent 0→-15 | GSAP |
| Hero image settle | class -inview + -imageloaded | opacity .6s, transform 1.2s | cubic-bezier(.23,1,.32,1) | scale 1.05→1 | CSS |
| Marquee / carousels | Splide auto-scroll speed 1.5; Swiper | continuous | linear | - | Splide, Swiper |
Before/after image: ref/scroll-kobewu-before-after.png (top = first view, bottom = a later section in its final state; a true hidden-state frame was not captured with one-shot CLI screenshots, so the "before" is from the JS/CSS values above).

## Product mapping
Product mapping (design-spec.md is the source of truth):
| Ref technique | Kanade |
|---|---|
| #3 curved sheet biting the hero photo + promo card | T1: ground-coloured quarter-circle bite at the lower right of the photo-left hero (K01) with the "Open morning" card; repeated lower-left on every inner page head and on the home Visit block (K13) |
| #1 big rounded bottom-left corner card + circular date badge | T2: home Calendar row (4 stone cards, 64 px corner, ink badge); Admissions open mornings, Calendar, Parents, Careers, News cards |
| #2 tinted photo mosaic with white label chips | T3: home Programmes mosaic (K03 large + K04–K07 2×2, five low-chroma tints, white chips); Curriculum index, Campus life, Parents hub strip |
| #4 right-bleeding carousel | not used (no carousels) |
| Palette | ground #EEF7FB → #F6F7F4; support #A4BFD4 → stone #E9ECE7 / slate #8C9DA8; green button #72A59B → celadon #7FA393 small accent only; blue field dropped (first screen ≤ 15%) |
| Scroll | fade-up → sp-reveal--up; js-fade stagger → sp-stagger (mosaic, calendar); js-parallax → sp-parallax (K02, K13); hero settle not used |
