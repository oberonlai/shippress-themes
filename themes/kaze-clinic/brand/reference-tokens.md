# Reference tokens (main reference: https://evidencecare.jp/ , home-visit nursing provider, measured from served CSS/JS + 1440x900 screenshot `ref/iec-first.png`)
Only values and descriptions. No assets, copy or logos reused.

## (a) Colour
| Role | Hex | Share |
|---|---|---|
| Ground (page, header slab surround) | #F5F8F1 | ~78% of first screen (photo is washed to this by brightness(1.6)) |
| Soft green band / panel | #E1E9D9, #E9F1E3, #D9E9E2 | ~10% (below fold) |
| Text | #242424; secondary #787878 / #919191 | text |
| Hairlines | #CFD1CD, #E1E3DE | thin |
| Accent (labels, active nav, arrow discs) | #00A561 (with #79C52D rare) | <3% |
| White | #FFFFFF (header slab, recruit card) | ~5% |
First-screen saturated share about 2% (accent only; photo is high-key).

## (b) Type
Body gothic (Japanese system gothic stack), headings serif JP (Abhaya Libre for Latin). Root font-size fluid `calc(0.7px + 0.0227vw)` and all sizes in "rem" units of that scale (1rem ~1px at 1440). h2 lead 35px/1.95 serif, letter-spacing .09em, vertical writing mode; section labels 16px .14em accent colour; h3 18px bold + 16px english em; body 14px, line-height 2.45 in the english sub-text, letter-spacing .04em, justified. Nav 15px, letter-spacing .08em.

## (c) Spacing
Container widths: 930 (lead), 1070 (care list), 1120 (recruit card), max 1600. Section gaps 120-140px. Lead block padding 140px top, photo area ~59vw under it. Care list: 3 columns, 40px column gap, figure 25px above title.

## (d) Radius / borders / shadow
Header slab radius ~8px white, no border; recruit card flat white, radius 0; photos radius 0; hairlines 1px #CFD1CD; no shadows.

## (e) Imagery
IMAGERY = photo. High-key documentary photographs of two nurses talking across a table, faded (brightness 1.6 -> 1.0 on load). Hero is a full-bleed 100dvh cross-fading slideshow (4 slides). Care cards: landscape figures ~4:3, no mask. Recruit card: figure 600px wide on the right (row-reverse), white card on tinted ground. Lead block: one wide photo anchored at its bottom, becoming visible behind the text.

## (f) Decoration
Floating white header slab inset 72px from edges (radius ~8, logo left, 6 text links, 2 icon links with tiny captions, one green round dropdown marker). Two faint vertical hairlines at x ~505 and ~1325 run down behind the hero. Green accent labels with English sub-label. Link arrow = circle disc + arrow with hover slide (.3-.4s).

## (g) Motion
- Hero copy fades in .8s delay .3s easeOutQuad; then photo brightness 1.6 -> 1 and opacity 0 -> 1 over 1.6s easeOutQuad; header fades in 1s; slick cross-fade 1s, autoplay 4s.
- Hero photo padding grows 0 -> 40rem as scroll goes 0 -> 400px (JS scroll listener writing a CSS variable): photo shrinks into an inset frame.
- `.scroll-fadein`: opacity 0 + translateY 50px (20px mobile) -> 0, 1000ms easeOutQuart, delay 0-200ms, when element enters view.
- Lead statement: grey text turns white (.1s) while the figure behind fades in (.8s easeOutSine) as the block scrolls in.
- Smooth scroll: Lenis lerp .2 duration .6. Anchor scroll 700ms easeInOutQuart. Accordion slide 300ms.
