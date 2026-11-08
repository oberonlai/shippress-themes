# Reference tokens (main reference: https://major-scale.jp/life-edit-renovation/, measured 2026-11-07 at 1440x900)
Imagery: IMAGERY = photo (full-bleed warm interior photographs, documentary, low-key, slightly dimmed; no illustration).

## (a) Colour
| Role | Hex | Area |
|---|---|---|
| Page ground | #F1EDE7 | ~45% |
| Text / headings | #523423 (warm deep brown) | text only |
| Panel A (cool grey-green) | #C1C1B9 | ~15% |
| Panel B (sand) | #C5BCAA | ~10% |
| Footer / dark band | #67422C | ~8% |
| First screen: dimmed brown photo | dominant #7A5238-ish, saturation low | saturated share well under 15% |
Relationship: one quiet ground, two flat mid-tone panels beside it, one dark footer; text is one dark tone of the same family.

## (b) Type
- Body: Zen Kaku Gothic New (sans), 10px root (62.5% rem), body lh ~1.8–2.3 with 0.02–0.05em tracking.
- Section labels: English display serif-like face ~15px with Japanese sub-label under it; panel titles ~28–32px light.
- Giant first-screen title: ~110–120px light display serif, bottom-left, white, tracking normal (we do NOT copy this; see stage-a).
- Row numerals "01/02": ~48px light serif, brown.
- H3 card titles 15–20px / 500 / lh 1.5–1.75 / ls 0.02em.

## (c) Spacing
- Section padding: ~243px top, 243–381px bottom at 1425 wide (very airy).
- Container: content from x=61 to x=1364 (~1300px), 12-ish col grid; row grid = number 61, text 171, chevron 695, panel 822–1364.
- Rows separated by 1px rules, rows ~355px tall.

## (d) Radius / border / shadow
- Panels radius 0, no shadow; hairlines 1px (#C9C2B8-ish); segmented toggle pill radius 999px, background #EAE6DE, divider 1px.

## (e) Imagery
- Type: photo. Hero kv.webp full-bleed 1425x998, object-fit cover, dimmed ~35% black, no radius. Concept photo 469x598 portrait (≈0.78) beside text. Case photos large single-column, alternating text; no masks, no clip-path.

## (f) Decoration
- Double-chevron ">>" 36px thin stroke after each row; numerals 01/02; flat colour swatch panels holding centred English title + one-line Japanese sub; segmented pill toggle (two labels, divider) above content swap; small logo lockup centred top.

## (g) Motion
- Opening: full-screen cover lifts, then KV title fades/slides in (GSAP). Smooth scroll via Lenis. ScrollTrigger reveals for sections; Splide auto-scroll marquee strips. Distances ~20–40px, ease power2/expo.
