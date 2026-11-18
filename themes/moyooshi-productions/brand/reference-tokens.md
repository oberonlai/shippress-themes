# Reference tokens (main reference: https://columbiaworks.jp/, measured with getComputedStyle at 1440x900, 2026-11-19)
Only numbers and descriptions. No assets, copy or logo are reused.

## (a) Colour
| Role | Value | Area |
|---|---|---|
| Base | #FFFFFF | ~78% of the first screen |
| Ink (text, 1px outlines, buttons, the black photo band) | #000000 | ~16% (button tabs, header CTA, outlines) |
| Pale line-art wash inside the large tile | ~#F2F2F2 with grey hairlines | ~6% |
| Accent | none (strictly monochrome; colour only comes from photographs lower on the page: blue sky, wood) | 0% |
First-screen saturated share of the reference: 0%. Ours stays well under 30% (the photo carries it).

## (b) Type
- Body: Noto Sans JP, 14px / 33.6px (lh 2.4), colour #000.
- Display Latin (section words): Baufra (geometric grotesque) 700, 160px / 160px, letter-spacing -12.8px (-0.08em), caps; second form is a 12px 600 caps micro-label at -0.48px.
- Statement H2: 60px / 84px weight 700, normal tracking, 2 lines, left aligned.
- Row titles: ~36px 700; English sub-line ~15px regular.
- Nav: 15px caps Latin, 7 items, 41px pitch; CTA 168x40 black rectangle, white 14px text, no radius.

## (c) Spacing
- Page margin 20px at 1440 (content 1400px, no max-width cap below 1440).
- Section padding: 60 / 80 top, 120 / 200 / 240 / 320 bottom (very airy); one hairline `border-top` 1px black before the BUSINESS section.
- Grid gaps 20px (tile grid and photo triptych).
- Two-column offset: left label column 0-50%, right column starts at x=730 (~50.7%); ledger rows start at x=493 (34%) and are 927px wide.

## (d) Radius, borders, shadow
- Radius 0 everywhere. Borders 1px solid #000 on tiles and 1px top rule on ledger rows. No shadows.
- Square arrow tab: 60x60 black block with a white 14px diagonal arrow bottom-left; text "VIEW MORE" 15px to its left, vertically bottom-aligned.

## (e) Imagery
IMAGERY = photo. The works rail is documentary architecture photography (blue-sky, full daylight, no people). The first-screen tile holds a looping line-art wireframe city video (not copied; we use a photograph instead).
- Large tile: 690x425 (1.62:1), x20; three small tiles 335x203 (1.65:1) at x730 and x1085, 20px gaps, one cell left empty at top-right.
- Works triptych: 572x~700, 335x~700, 453x~700 (portrait, mixed widths, tops aligned, gap 20px, r0), x20 / x612 / x967.
- Full-bleed band: 1440x450 black ground with white wireframe globe, passes under the transparent header (header text inverts over it).

## (f) Decoration
- Bracket labels "( PHILOSOPHY )", "( 01 )": 12px, parentheses with spaces, at the left edge of a section / at x=493 in ledger rows.
- Tile label stack: JP micro-label 12px above a 60-80px Latin caps word, diagonal arrow 24px bottom-right of the tile.
- Ledger row: 1px rule, bracket number, 36px title, 15px English line, arrow 24px at the far right top.

## (g) Motion
- CSS `instaReveal` keyframes: opacity 0 -> 1, 1s linear, applied with delays .37s / .5s / .62s / .75s / .87s (about 0.125s stagger) on tile and list items.
- GSAP + ScrollTrigger bundled in app.js (hero band and section reveals); Swiper for the news slider; `js-hover-item` hover states with `transition: all .2s ease-in-out` (colour inversion on tiles).
- Header: fixed, transparent, text inverts to white while it crosses the black band.
