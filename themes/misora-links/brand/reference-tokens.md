# Reference tokens (main reference: https://misotone.m-hand.co.jp/lp/, measured at 1440x900 with getComputedStyle; values only, no assets copied)

## (a) Colour (reference -> our mapping is in reference.md)
- Ground first screen: brown #5E453D (primary-600) ~58% area; sand text #E8E2D4; photo ~36% area (green-lit water, the only saturated area, about 12%).
- Palette steps: sand #F8F5EE / #E8E2D4, tan #CDBE9F, ochre #B8956A, walnut #68493F / #5E453D / #4D3C37, ink #201F1D.
- Loud accents (neon yellow, magenta, green, red) are used in labels and stickers: NOT adopted.
## (b) Type
- Headings: mincho serif (yakuhan MP), body sans 14px / 25.2px line-height (1.8), letter-spacing 0.02em. Section labels in a wide extended Latin caps (Syncopate 18px, ls 0.02em) with a slash and a local sub-label ("NARRATIVE / ...").
- Hero headline: ~170px tall display line, cropped by the viewport top-left edge, outlined/textured sand colour. Menu links 43.5px caps. Sheet H2 ~32px/1.6 serif.
## (c) Spacing
- Frame inset 23px around the first screen; container 1380 at 1440; sheet inner padding 38px; row height ~155px between 1px rules; section gap ~40px.
## (d) Radius, borders, shadow
- Radius tokens 2 / 4-5 / 10 / 16px (md 10 on sheets and cards); photo frame has concave notched corners (mask-image SVG); 1px sand hairlines; dotted rules in cards; no shadows.
## (e) Imagery (IMAGERY = photo)
- Photo, calm garden light, shallow depth, dark foliage and water reflections; tall 0.65:1 frame at the right (510x789) bleeding 23px to the top, right and bottom edges; small 0.62:1 portrait photo inside the sheet; circular photo crop near "works".
- Line-art crests/stamps and a tiny mascot are drawn illustration, secondary only.
## (f) Decoration
- Concave-corner notch frame with 1px inner line (frame 510x789 at x 893, y 23); vertical 5-line text column at x 730; 1px full-width rule above a bottom bar; pale numerals 01-03 at 48px in 20% sand; two-tone progress bar 4px under a horizontal rail.
## (g) Motion
- Libraries: GSAP ScrollTrigger + Lenis smooth scroll. Page load: header slides in, photo frame reveals with clip-path inset(0 100% 0 0) -> inset(0) ; 0.8s cubic-bezier(0.76,0,0.25,1). Reveals: opacity 0.5s ease-out with 0.5s/0.7s/1s delay steps. Pinned section: vertical scroll drives a horizontal card rail; progress bar width follows (0.6s ease). Mask-position wipes 1.5s cubic-bezier(0.3,0,0,1).
