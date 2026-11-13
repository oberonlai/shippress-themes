# Reference tokens — Coffee Shimeno (https://coffee-shimeno.com/), measured 1440×900 with getComputedStyle
Only values and descriptions; no assets, copy or logo reused. Screens: ref/cs-first.png, cs-s900/1800/2700/3600.png, scroll-cs-*.png.

## (a) Colour (first screen is near-monochrome: saturated share ≈ 0%)
| role | hex | share |
|---|---|---|
| paper ground (all content sections) | #DFDFDF | ~55% of page |
| ink / hero dark | #000000 → #121212 | ~20% (hero, footer #121212) |
| reservation band | #191919 | ~12% |
| text | rgba(0,0,0,.75) body, #000 headings, #E5E5E5 on dark | – |
| accent | none; colour only comes from the photographs (amber, forest green, rust) | ≈0–5% |
Our mapping: paper = a faint plum-grey (#DDD9DC), ink = aubergine-black (#1A1417), accent = plum #6B5460 (links, rules, numerals) ≤ 5%.

## (b) Type
- Display / headings: grotesque (PP Neue Montreal) 40px / 44px lh, weight 400, ls −0.01em (−0.4px); section number 20px/36px; page H2 44/52.8.
- Wordmark: thin high-contrast display serif, ~30px, white, centred in the hero.
- Body: 15px weight 300, lh 25.35px (1.69), ls −0.15px; nav 16px; card caption 16.5px ls +0.03em; micro labels 11–13px.
- Case: sentence case; no uppercase tracking. Ours: Cormorant Garamond (display) + Libre Baskerville (body), same scale, serif instead of grotesque.

## (c) Spacing
- Container: full width, 20px outer gutter (40px on dark band); 4-col grid, col 335px, gap 20px (20+335×4+20×3 ≈ 1420).
- Section padding: 155px top / 120px bottom (title sections); 300px bottom before next; hero fixed 900px.
- Two-column text: left col x=20 w≈590; right col x=730 w=690 (heading left, body at 50%).
- Header: fixed, 95px, 4 equal columns (wordmark / About / Record / Store+Cart), no background.

## (d) Radius / border / shadow
Radius 0 everywhere (cards, buttons, images). No borders, no shadows. Button: solid #121212, 47px high, white 15px text.

## (e) Imagery — IMAGERY = photo
Dark, low-key documentary photographs: shallow depth, one rim light, strong grain; macro of coffee beans on plates (colour: rust, ochre, navy), portrait of the roaster, forest, dewy grass bokeh, a round window onto snow. Tile ratios vary (0.67, 0.71, 0.75, 0.83, 0.88, 1.33, 1.5 — roughly 3:4 to 3:2), radius 0, no masks, tiles top-aligned in a 4-col grid so bottoms are ragged, caption (title + price) above the photo. One full-bleed band (1440×~380, ≈3.8:1) with parallax. Centre-left photo 1:1 beside sticky text (Four Seasons). Hero: fixed blurred monochrome swirl still behind a small wordmark.

## (f) Decoration
Section head "NN/ Label": 20px number, slash, label, in the left column; Japanese subtitle in lenticular brackets in the right column. Arrow text link "About Coffee Shimeno →". SVG bracket glyph 4×24 before sub-titles. Fixed full-screen film-grain canvas (10 random black/white frames, low opacity). No lines.

## (g) Motion
- Lenis smooth scroll (v1.0.19).
- Intro: fixed 900px black section with blurred still + wordmark; transitions `opacity .5s, visibility .5s` (fades out when the page starts).
- Parallax (GSAP 3.12 ScrollTrigger): `.js-parallax3` images `y: +70px` (mobile 30), start "top 80%" end "bottom 20%" (mobile "top 95%"/"bottom 5%"), scrub 1; footer band image same with scrub 1.
- Reveal (CSS): `.animate--slide-in` translateY(2rem) + opacity .01 → 1, ease-in-out.
- Noise canvas ≈ 10 frames random 0/255.
