# Reference tokens — Cantina (seaside Italian restaurant, https://www.cantina-zushi.com/) measured 2026-11-10, 1440x900
Secondary (structure only): https://restaurant.nelu.osaka/ (full-bleed night photo, thin giant wordmark top-left, three outlined link tabs bottom-right).
Measured with headless Chrome getComputedStyle + CSS files. Only numbers and descriptions; no assets copied.

## (a) Colour
| Role | Hex | Share (whole page) | Where |
|---|---|---|---|
| Main (sea blue) | #1A4F71 | ~14% | menu band, header on scroll, pill buttons, 96px section word |
| Assort (lighter blue) | #1E5D87 | <2% | hover/secondary |
| Deep navy | #100A63 | <1% | logo on light photo |
| Base | #FFFFFF | ~30% | party/info ground |
| Ink | #151515 | text, near-black scene ground ~12% | scene band |
| Light grey | #F5F5F5 / #C5C5C5 | ~3% | rules, tints |
| Red accent | #DC3232 | <0.5% | errors / tiny marks only |
| Photography | warm orange food, dim overlay | ~35% | hero + scenes |
First screen after intro (check-first-screen): 39% saturated (orange food photo). Cap for ours = 15% (grey-slate graded film photo + 1 small pill).

## (b) Type
- Latin: Jost (geometric sans), light/regular 400. JP: Noto Sans JP, YakuHanJP.
- Hero wordmark: ~150px, letter-spacing ≈ 0.5em, white, one line across 80px margins, bottom of first screen.
- H2 concept: 32px/48px lh 1.5; big section word 96px/115px lh 1.2 colour #1A4F71; menu overlay links 88px/132px.
- Body 16px lh 24px ls 1.6px (JP lh ~2.5); small labels 14px/21px ls .7px; header caption 14px.
- Ours: Fraunces (display, light 300) + Source Serif 4 (body); wordmark ≥ 6rem tracked .4em; largest ≥ 4.25rem.

## (c) Spacing
- Side margin 80px (header 20px). Section padding 240–300px top, menu band 140/145px. Full-bleed photo scenes 900px tall; scene item 1800px with pinned inner (`top top`).
- Content split: heading left col ~469px, copy right col starting x≈719 (≈50%).

## (d) Radius / borders / shadow
- Pills 999px, 48px high, bg #1A4F71, text white 16px; no shadows; no borders; photos radius 0.

## (e) Imagery — IMAGERY = photo
- Real food/interior photography, moody then bright; film/video stills with dark overlay (opacity .3 on hero). 16:9 hero full-bleed; scene duo: one photo flush left (≈28% width, 1.4:1) over near-black, one flush right wide (≈72%, 1.6:1) offset downward; party photo 555px wide 1.4:1 at x=80; radius 0; no masks except the intro window (rectangle 634×396 centred, rippled by pixi displacement, then scales to full-bleed).

## (f) Decoration
- Logo: caps wordmark with three wavy hairlines under it (white, 1px, ~140px wide); the same three-wave icon = menu trigger (60×20) with "Menu" label below.
- Hero foot: "Scroll" at left (80px), "Seaside italian / Natural table" at right, 14px white.
- Header: 3-column (menu icon left / logo centre / "Take out" text + filled pill right), transparent over photos, solid #1A4F71 bar after the hero (height ≈60px).

## (g) Motion
- Intro (once per session): blue loading field, small photo window distorted by displacement filter (pixi), window scales 1→full bleed 0.8s power3.in, then wordmark letters rise y→0 alpha→1 stagger .2s custom ease cubic-bezier(.625,.05,0,1), header drops in 1.6s power1.out, hero overlay fades to .3.
- Scenes: ScrollTrigger pin (`start: top top`, pinSpacing true) on `.l-scene_item_inner`; photos slide over a fixed near-black ground.
- Footer logo letters stagger .2 in via IntersectionObserver. Menu open: link letters stagger .01 y 10→0.
- Library: GSAP + ScrollTrigger + CustomEase + pixi.js (we use none; sp-scroll equivalents).
