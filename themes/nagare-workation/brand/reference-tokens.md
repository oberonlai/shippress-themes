# Reference tokens: SANU 2nd Home Weekday (measured at 1440x900, getComputedStyle + CSS bundle)

Source: https://www.sa-nu.com/weekday (Astro static site; Splide for the hero, own IntersectionObserver classes, Lenis + a ScrollTrigger chunk). Screenshots in `ref/` (sanu-*). Only values and descriptions are recorded; no assets, text or logos are reused.

## (a) Colour (CSS custom properties)
| Role | Hex | Share of page |
|---|---|---|
| Text / dark | #322E21 (warm near-black) | text, dark icon tiles |
| Ground (base) | #F2EEE4 (beige-lights) | ~35% of scroll height |
| Band | #E9E3D1 (beige) | experience band ~27% |
| Chip / label cell | #D1C8A6 (beige-deep), #E8E3D1 | price label cells |
| White | #FFFFFF | area, value cells |
| Accent (one only) | #EC572E (orange) | logo, big numerals "41 / 251", dots |
| Grey | #ECECEC (voice band), #B7B6B6 (disabled pill) | small |
First screen (1440x900): 8.4% saturated pixels (check-first-screen), almost all from the green forest in the right pane; the left photo is grey-brown and low-key. The "think" band (sky + mountain photo) reaches ~19%, the aerial sea CTA band ~33% (a mid-page photo band, not the first screen).

## (b) Type
- Latin display: "Stahl" style high-contrast humanist sans (a custom webfont), 30-40 px, weight 400, line-height 1.0-1.5, used for English labels ("What's ...?", "Original Series") and giant numerals (5.5 at ~96 px, 41 / 251 at ~72 px in the accent colour).
- JP body/heading: DNP Shuei Gothic Gin (a rounded gothic). H2 34 px / 700 / lh 1.4 / ls .01em; H3 24 px 700 lh 1.5; H3 band caps 21 px 700; body 18 px / 400 / lh 1.5; small 12-14 px.
- Our mapping: Red Hat Display 300/400 for display words and numerals, Nunito Sans for body; CJK Noto Sans TC / JP.

## (c) Spacing
- Section padding: 140-150 px top and bottom on pale bands; hero 100vh; image bands 680 px high.
- Containers: headings at x 100 (1240 wide); price board 1066 wide at x 187; icon grid 3 columns at x 200 (1040 wide); gutters 20 px between price cells.
- Header: transparent overlay, logo at x 40, y 40; menu tile 72x72 at x 1344, y 20.

## (d) Radius / borders / shadow
- Price value cells white r10-12; label cells beige-deep r10; tiles r8; menu tile r8 cream; outline pill buttons 280x55 r500, 1 px #322E21, text 16 px / 600 / ls .01em; disabled pill filled grey.
- Faq/support cards: white, r20 top corners. No shadows anywhere (flat).

## (e) Imagery - IMAGERY: photo
Documentary, natural-light photographs of real rooms and people: a guest at a long wooden desk in front of a floor-to-ceiling window (seen from behind/side), forests, a lake, aerial sea, timber interiors, hands and kitchens. Muted low-contrast grade, warm timber against cool greens/blues, film-like softness, no flash, no staged smiles. Ratios: hero left pane 990x900 (1.1:1), right pane 450x900 (1:2); "think" portrait 352x557 (0.63:1); experience strip: three abutting 284x258 (1.1:1) tiles flush to the right edge; workspace band full-bleed 1440x~620 (2.3:1) with a pale panel carrying the title offset left (leaves 180 px of ground at the right). Masks: none (rectangles); corner radius 0 on photos, 8-12 on UI tiles. Overlap: the portrait straddles the seam between the mountain band and the pale ground.

## (f) Decoration
- Vertical writing: 34 px white tagline, 2 columns, in the right pane (x 1222-1330, y 160-320), with an 11 px two-line English caption under it.
- "Make / nature / your / second home": four words 20 px white 60%, spread across the width of the mountain band (x 80 / 290 / 1018 / 1220, y 487) on both sides of the portrait.
- Label pair: large heading left, then "Experience" (Latin 17 px) + 12 px JP sub-label on one baseline (y 287).
- Icon tiles: 70x70 #322E21 squares with 24 px white line icons, 3 x 2 grid, title 16 px 700 + 2 lines 14 px.
- Price board: label cell (150 wide) + white value cell, a "+" between rows, big light numeral with unit text on its baseline, outline pill "+" toggle underneath.
- Header logo: two stacked logos, the coloured one revealed with `clip-path: inset(0 0 0 0)` after the hero (.3 s delay).

## (g) Motion
| Effect | Type | Duration | Delay / stagger | Easing | Distance |
|---|---|---|---|---|---|
| Hero slides | Splide fade with clip-path inset reveal; autoplay | 2.4 s | interval 5 s | cubic-bezier(.23,1,.32,1) | clip 100% -> 0 |
| fadeInUp | opacity 0->1 + translate | 1 s | `--animate-block-delay` | ease | 10 px |
| up2show / left2show | clip-path wipe from bottom / right | .6 s | var delay | ease | inset 100% -> 0 |
| ImageScaleIn | opacity + scale 1.05 -> 1 | 1 s | var delay | ease | scale |
| inView image | scale 1.15 -> 1 inside overflow hidden frame | 1 s | .2 s per sibling | ease | scale |
| Floating CTA | opacity + translate | - | - | - | 20 px |
| Think band words | ScrollTrigger scrub, words drift apart | scroll-linked | - | linear | ~300 px |
| Smooth scroll | Lenis | - | - | - | - |
Trigger: IntersectionObserver, threshold .1, activation class `js-inView-activate`, rootMargin 50 px.
