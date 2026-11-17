# Reference tokens (primary reference, measured with getComputedStyle at 1440x900)

Source: https://ginza.o-ki.co.jp/ (a Yonezawa-beef sukiyaki / shabu-shabu restaurant). Screens: `ref/ok-first.png`, `ref/scroll-ok-*.png`.
All values below are measurements only; no assets, copy or logos are reused.

## (a) Colour (first screen 1440x900)
| Role | Hex | Share of first screen |
|---|---|---|
| Base (paper, right half, faint grain) | #FAFAFA (#F4F4F4 under grain) | ~48% |
| Low-key photo ground (left half, near black) | #000 / #3B2D2A | ~38% |
| Meat red inside the photo (not UI) | ~#B8463F | ~9% |
| Accent (logo seal + reservation button) | #D61423 | ~2% |
| Text | #000 | <1% |
| Wash (access band, gradient top) | #E8D8D8 to #FFF | below the fold |
| Line / frame (link boxes) | #DBDABE | below the fold |
| Footer | #E7E7E7 | below the fold |
Saturated share of the first screen (S>0.5, V>0.35): 11.5%.

## (b) Type
- Latin/CJK serif (Mincho) body and headings, weight 400, bold 500; sans (Gothic) only for the small notice line (#727272, 12.9px).
- Root font-size scales with the viewport (0.732vw at >=769px, 10.54px at 1440), body 16.9px / 25.3px (1.5).
- Vertical section heading: 25.3px, weight 700, letter-spacing 0.66em, writing-mode vertical-rl; Latin label 15.8px, letter-spacing 0.4em, rotated.
- Lead 19px / 38px (2.0), tracking 0.2em; body text 15.8px / 31.6px, tracking 0.2em. Reservation heading 21px tracking 0.2em; button 21px tracking 0.15em.

## (c) Spacing
- Two halves: sticky photo stage 50vw (720px) x 100vh, right column 720px.
- Right column content width 590px (centred in 720); first block (logo screen) 100vh.
- Section top margin 422px (40rem); heading block padding 185px top / 70px bottom; heading min-height 373px.
- Data table 498px wide, rows 27px padding, 1px rules.

## (d) Radius, border, shadow
- Radius 0 everywhere; no shadows. Link box: white, 2px #DBDABE border, 527px x 126px, long thin arrow bottom-right 28px.
- Reservation block: 4 red hairlines (3px, #E50020) that draw in around the box; heading underlined by 1px black rule.
- Corner-bracket dashed button: 313x63px, 1px black bracket corners with broken top and bottom edge (gap in the middle), no fill.

## (e) Imagery
IMAGERY = photo. Low-key studio/food photography: dark ground, single warm light, glossy marbled raw beef on a pale crackle-glaze plate, steam over an iron pot, a hand pouring broth, chopsticks lifting one slice over a steel pot. Room photos are warm, dim and amber. Ratios: stage photos fill 720x900 (0.8:1, cover); section images 590x394 (1.5:1), radius 0, no mask, no overlap; footer-side building photo 590x~200 (2.9:1). Photos sit left (sticky stage) and inline in the right column at full column width.

## (f) Decoration
- 5 dots (6px, white, 40% opacity, active 100%) stacked vertically at the stage's lower-left (x 32, bottom 32).
- Vertical white phrases on the photo's right edge (two lines, tall caps rotated, 28px).
- Vertical section header: heading (vertical), Latin label (vertical, tiny) and a 1px full-height rule between them.
- Page background: soft grain texture on #FAFAFA; body gradient #E8D8D8 to #FAFAFA to #C4C3B5 top to bottom.

## (g) Motion
- Stage: 5 photos cross-fade, about 3.5 s per slide, about 1 s fade (opacity only), loops.
- Section headings: GSAP ScrollTrigger once at "top 75%": characters fade/rise (stagger 0.05 s), 1px line grows scaleY 0 to 1, 0.75 s power4.inOut.
- Body blocks `data-fadeup`: translateY 3rem (about 32px) to 0 + opacity, 1.5 s power2.out, stagger 0.15 s.
- Data-table top rule scaleX 0 to 1, 0.8 s cubic-bezier(.25,1,.5,1); reservation frame lines draw in; button hover = coloured clip-path wipe 0.4 s power2.out.
- Header is transparent on the photo half and hides on scroll down.
