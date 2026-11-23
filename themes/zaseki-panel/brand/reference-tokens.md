# Reference tokens (measured) - main reference https://www.kokuyo.com/ (S5-Style listed)

Measured with a headless Chromium at 1440 x 900 on 2026-11-23. Values only; no assets, copy or logos reused. Root font-size on the site is 1px (all sizes are px-scaled), so sizes below are px at 1440.

## (a) Colour
| Role | Reference | Area | Our mapping |
|---|---|---|---|
| Ground | white #F8F8F8 (oklch 1 0 0) | ~65% below the hero | cool white #F7F7F5 |
| Secondary ground | light grey band #EDEDED / #CCCCCC tile | ~12% | #ECEBE8 |
| Text | near-black oklch(0.27 0.001 0) ~ #2B2B2B | text | #2A2624 |
| Notice bar | lime #C8F088 (50px strip over the hero) | 3% | none (we use a thin russet-tint strip #E9DAD3) |
| Main accent (slide 2 grid, footer) | cyan #00A0DC lines / #20C8F8 footer field | 9% of slide 2; 78% of footer | russet #8C5648 lines and one CTA |
| Tile hues | cyan #20C8F8, green #00C878, pink #FFA8E8, coral #F87878, sand #DDDACB | flat tiles | muted: clay #E9DAD3, sage #D3DDD5, stone #DDDAD2, rust #8C5648 |
First screen saturated share (S>0.35): slide 1 illustration 40.5%; slide 2 (white with grid) 13.4%. We take the slide-2 voice (white panel, one saturated line family) so our first screen stays <= 15%.

## (b) Type
- Family: hnr (Helvetica Now Text) for Latin, Tazugane Gothic for Japanese; both sans. Ours: Outfit (headings) + Nunito Sans (body), CJK Noto Sans TC/JP.
- Hero title ~44px / weight 400-500 / line-height ~56px / tracking 0; sub-lines 15px / 24px; tile titles ~32px / 500; tile one-liners 14px / 24px right-aligned; list rows 14px; section label 18px 500; footer link columns 15px.
- Uppercase only on the wordmark.

## (c) Spacing
- Hero text container starts x=160 (content width 1120); content tile area x=72..1368 (1296 wide); gutter between tiles 16px; tile heights 144 (small) / 288 (wide) / 112 (strip).
- Section padding about 64-96px; news two-column with 1px top rule; notice list rows 24px.

## (d) Corners, borders, shadow
- Radius 0 everywhere. Tile cut corner via clip-path polygon: bottom-right bevel 32px wide x 44px tall (not used by us).
- Hairline rules 1px #D8D8D8; 1px circle-arrow outline buttons 24px; no shadows.

## (e) Imagery
IMAGERY: photo (home mix: wide documentary photo tile of a person at a desk, magazine photos; hero slides are flat vector illustration, which we convert to a photograph).
- Photo tile: 832 x 288 (2.9:1) with soft grey-blue grade, subject right of centre, label top-left, bevel bottom-right.
- Square-ish photo cards 359 x 283 (1.27:1), 0 radius.
- Hero slide 1: pop-up diorama of an office stacked in layers (desk, shelves, chairs), people working at different levels, green/orange/blue flat shapes, thin outline sketches (globe, dinosaur, camera) in the pale ground. Slide 2: white sheet with a thick tilted cyan grid (about 12px lines, rotated about -15 deg) and a diagonal band.

## (f) Decoration
- Segment pager: white 52 x 3 px tick top-right and bottom-right of the hero, counter "1 / 2" at x=1232.
- Triple slash glyph "///" (3 parallelograms, 22 x 24) as the menu button.
- Tile foot: circle-arrow 24px + 1px divider + plus glyph; below the tile edge a 2 + 2 pair of tiny 16 x 3 colour swatches.
- Section label marker: small grey parallelogram (22 x 14) before the label.
- Footer: right half field of wide diagonal two-tone stripes (about 190px stripe, ~58 deg), wordmark bottom-right; each link column topped by a 1px rule with a 16px two-colour tick.

## (g) Motion
- Hero: full-viewport sections that snap while scrolling (sections 852px tall, `_snap` class toggled from a scroll listener), pagination "n / 2"; illustration animates while its section is current and pauses when hidden or reduced motion.
- Content blocks: `data-action=autostepin` stepin via IntersectionObserver; children fade in with opacity .3-.7s and 0.04s stagger steps; no transform distance of note.
- "Slash" reveal: keyframes showslash/showslashline 1.2s (second variant 1.5s) cubic-bezier(0.3, 0, 0.3, 1), forwards.
- Notice panel: mImportantnoticeShow .4s cubic-bezier(0, 0.5, 0, 1); frame edge `edgeFrameIn` .5s.
- Library: jQuery plus their own ES modules (MotionManager, IntersectionObserver); no GSAP / ScrollTrigger / Swiper / Lenis.
