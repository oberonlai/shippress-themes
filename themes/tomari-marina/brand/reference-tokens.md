# Reference tokens (measured with getComputedStyle at 1440x900, 2026-11-03)
Main reference: https://sakazuki.io/ (screens: ref/sakazuki-first.png, ref/sakazuki-hero2.png, ref/scroll-sakazuki-philosophy-*.png)
Secondary: https://www.yamatane-museum.jp/ (ref/yamatane-first.png, ref/scroll-yamatane-grid-*.png)

## (a) Colour
| Role | Hex | Share | Source |
|---|---|---|---|
| Base (philosophy ground) | #E1D6CE | ~45% of page | main body background (we do NOT reuse this beige; ours is a cool mist) |
| Ink / text | #000000 and logo ink ~#1E2A33 | ~25% | main |
| Dark photo ground | #000 under low-key photos | hero + collective | main |
| Accent | #C30D23 (red marks, founder band) | ~5% | main (founder band is the one big saturated field; we skip it) |
| Mist | #FFFFFF text on photo | text only | main |
| Secondary blue rails | #003C88 | ~18% of first screen (right rail) | secondary |
| Secondary "open today" tab | ~#FFE58A pale yellow | ~2% | secondary |
First-screen saturated share (scripts/check-first-screen.py): main hero frame 1 = 67.8% (amber blur), hero frame 2 (low-key cellar photo) = 7.7%; secondary = 16.8%. The gate takes the lower of 30% and the reference, so ours targets <= 8% on a low-key blue-ink harbour photo.

## (b) Type
- Main: display "hagrid" (wide grotesque, weight 400), text "hagrid-text". h2 127px / lh 1 / ls .01em; h3 63.5px / lh 1; p 30px / lh 1; body 16.9px / lh 23.7; nav 16.9px uppercase-free caps via source text; no italics.
- Secondary: Zen Kaku Gothic Antique; h1 32px 700; h2 22px 500; h3 42px lh 1.1; body 13px, ls .48px.
- Ours translates to serif (Newsreader display light, Literata text); numerals thin, very large (>= 4.25rem).

## (c) Spacing
- Main: sections are 900px viewport slides; philosophy block 3302px tall pinned; collective padding 135px 34px 212px; side padding 34px; container full width.
- Secondary: left rail 135px, right rail 135px, content grid of 4 equal columns (~292px) with 1px ruled cells, row height ~650px (first) / ~100px (news).

## (d) Radius, borders, shadow
- Main: pill outline buttons radius ~20px 1px ink border; boxed CTA 1px ink border radius 0 (196x58); no shadow.
- Secondary: radius 0, 1px #D9DEE8 hairlines, short 28px blue top-rules above row labels, no shadow.

## (e) Imagery
IMAGERY = photo. Low-key documentary photography with warm falloff: people at work (sniffing a glass, pouring), barrels in raking light; dark vignettes, shallow depth, no cutouts.
- Hero: full-bleed 1440x900 photo slides (3 stacked, crossfade), nav overlay.
- Philosophy: 330x630 portrait (ratio 0.52), radius 0, centred at x 555-885, flanked by bracket word left and giant numeral right; three swaps (people / grow / ...).
- Secondary: poster 526x728 (0.72) at right of a ruled cell; wide 1169x585 (2:1) ticket banner with dark scrim.

## (f) Decoration
- Brand mark: dark chevron/triangle logo top centre 104x44.
- Red pictograph marks (60x48) above each philosophy word; bracketed lowercase words "( people )" 64px.
- Giant numerals 01/02/03 at ~170px, top right.
- Fixed bottom line: bracketed socials left, live local time centre ("JAPAN, hh:mm:ss"), boxed MINT CTA with chevron marquee right.
- Secondary: yellow "open today" tab pinned bottom-right of the rail (135x120), outline circle arrow links, 1px ruled cells.

## (g) Motion
- Line reveal rising from a mask: lineRevealUp 1s cubic-bezier(.23,1,.32,1); hero mark 1.2s same easing.
- Header hide/show: transform .6s cubic-bezier(.23,1,.32,1); hover text reveal .6s same easing.
- Pinned philosophy viewport (position: sticky top 0) over 3302px, content swaps per step.
- Chevron marquee in the CTA: 2.4s linear loop; hearts row 25s linear; benefit items sticky top 21px stack, transform .4s ease-out.
- No GSAP / ScrollTrigger / Lenis / AOS detected (custom Next.js code).
- Secondary: no scroll animation (static ruled grid).
