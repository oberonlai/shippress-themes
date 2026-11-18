# Reference tokens (measured with headless Chromium getComputedStyle, 1440x900; values only, no assets copied)
Primary: https://ultimagstaad.com/en (renders an alpine ski-resort hotel site, S5-Style hotel/ryokan gallery). Secondary: https://zabocon-yoichi-villa.jp/ (scroll behaviour only).

## (a) Colour
| role | hex | share |
|---|---|---|
| ink / headings | #1B1B1A | text and the solid button |
| body text | #545454 (small copy #696969) | text |
| page base | #FFFFFF | ~55% of page |
| quiet panel | #F0EEEC (contact band) | ~6% |
| photo ground | warm chalet timber + dusk snow, near-black scrim | first screen ~85% photo |
| accent | none (single dark #1B1B1A button; white outline buttons) | 0% |
First-screen saturated share (S>0.5, V>0.35) measured on the screenshot: 3.6%. Ours maps ink to a deep lilac-grey and uses #8D93C8 as the only tint.

## (b) Type
Display: wide geometric caps (Wedding Gothic) 40px / 48px, weight 400, uppercase, centred; small italic serif lead-in word ("The") above it (~32px, #555). Body: Jost 16px / 24px (14px / 20px copy), 400, ls normal. Buttons 16px. Nav 16px white on photo. Sub-labels 12–14px #696969.
## (c) Spacing
Container ~1312px (x64–1376); centred text blocks 860px; section padding ~96px top / 64px bottom; card gap 16px; 3 equal cells in the info bar (866px wide, 76px high).
## (d) Radius, borders, shadow
Cards and photos r4–8; buttons r4 with 1px #111 outline (secondary) or solid #1B1B1A (primary); tabs 1px outline pill r4; info bar r8 white with soft shadow (0 6px 24px rgba(0,0,0,.18)); dots 8px.
## (e) Imagery
IMAGERY = photo. Warm, low-key interior and exterior photography. Hero 1440x~770 full-bleed; room cards 869x680 (1.28:1) peeking neighbour, r8; offer tile 422x~320; spa gallery mosaic 1 large 644x~560 + 2x2 of 310x245; contact band 50/50 photo half-bleed to the right edge.
## (f) Decoration
Shallow concave white arc (≈85px sag) cutting the photo foot; white 3-cell info bar docked across the arc, cells split by 1px #D9D9D9 vertical rules, black block button at the right; 5 white stars under the H1; round 40px white chevron buttons on card strip; dot pager (8px dots, active black); icon circles 32px outline with contact rows.
## (g) Motion
Booking bar: position absolute at hero foot (y 748) and docks to the viewport top (y 0) once scrolled past ~750px (sticky). Card strips: Swiper horizontal, drag/arrows, ~0.3s ease. No scroll reveals, no GSAP/Lenis (Nuxt app). Secondary (zabocon): GSAP + ScrollTrigger; hero photo dims to ~85% black while the headline fades in; second photo tile rises from below with blur resolving; page easing cubic-bezier(0.625, 0.01, 0.355, 1).
