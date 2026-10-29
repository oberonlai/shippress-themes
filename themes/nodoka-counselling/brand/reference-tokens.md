# Reference tokens — Primary: https://yosugaclinic.com/okusawa/ (measured with getComputedStyle, 1440×900, 2026-10-30)
Secondary: https://mcares.co.jp/ (structure/motion only)
## (a) Colour
| Role | Hex | Area |
|---|---|---|
| Ground | #EDE8DE (rgb 237,232,222) | ~70% of first screen |
| Text / headings | #58633E (olive, rgb 88,99,62); dark ink #3B3720 | text |
| Tab / button accent | #DBC2B6 (dusty peach) | ~2% (3 vertical tabs, NEWS chip) |
| Photo | low-key warm brown #5F402B, lamp glow #F5B186 | photo column ~ 33% of width |
Saturated share on first screen (S>0.5, V>0.35): 10.2% (lamp + photo glow). Secondary site: 0.2%.
## (b) Type
Zen Kaku Gothic New (JP) + a light grotesque for Latin ("Medical Menu" ~48px light). Body 14px / lh 28px / letter-spacing 1.12px (0.08em), weight 400. H3 24px lh 40px. Section heads: small Latin label + JP sub. Secondary: 700 weight rounded grotesque, H2 64px lh 1.8.
## (c) Spacing
Page gutter 60px; container ~1320; section blocks 950–1130px tall; section padding-top 160–266px; photo column x469–1295 (826 wide, full height of first screen minus 76px bar).
## (d) Shape
Radius 0 on photos; tabs radius ~20px pill (40×180); buttons radius 10px; borders 1px olive hairline; no shadows.
## (e) Imagery — IMAGERY: photo
Quiet interior and light photographs (pendant lamps, plaster wall with shadow of leaves), low-key, grainy, warm. Ratios: first screen 826×823 (≈1:1), about photo 531×567 (0.94:1), tall squares 525×561. No radius, no masks, object-fit cover. Photos sit offset from text columns with large empty ground.
## (f) Decoration
1px full-width hairline above the news bar; three vertical text tabs fixed bottom-right (40×180, 36px gaps, x1187/1263/1339); three-line menu icon (1px × 38px lines); small logo + 2-line caption top-left; news chip (peach box, 84×26).
## (g) Motion
GSAP + ScrollTrigger (bundle.js): fade/translate entries, duration .5–.6s, ease power1.out; hero intro duration 2s. Swiper for carousels. Section label in the top bar swaps with scroll (underlined current section).
