# Reference tokens — Nippon Kucho Service recruiting site (S5-Style listing), https://www.careers.nikku.co.jp/
Measured 2026-10-24 with headless Chrome (1440×900) via getComputedStyle + wheel-scrolling (the site scrolls inside a fixed 900px document; Nuxt, jQuery present, no GSAP/AOS/Lenis globals; effects come from a custom `.sd` / `.sd.appear` class system). Values only; no copy, photos or logo reused. Rejected second candidate: figaro-vis.jp (full-bleed saturated video, breaks the quiet-palette rule).

## (a) Colour (first-screen saturated pixels 12.3% by check-first-screen.py)
| Role | Hex | Share | Where |
|---|---|---|---|
| Ground | #F5F7F9 | ~85% of page surface | body / section grounds |
| Ink | #2E303C | text 71 nodes; dark pill | headings, body, 募集 pill |
| White | #FFFFFF | ~12% | floating header card, hero text on photo |
| Pale band | #EDEFF3 | footer only | footer panel |
| Accent blue | #0067B6 | <1% | one "Entry" pill, +/- icons |
| Muted text | rgba(46,48,60,.5–.65) | — | captions, meta |
| Ghost | rgba(88,95,139,.05) | — | 100px numerals #01–#04 |
Photography supplies the only real saturation (pale sky blue, navy workwear).

## (b) Type
| Role | Family | px / rem | wt | lh | ls |
|---|---|---|---|---|---|
| Section title (EN) | Proza Libre | 44 / 2.75 | 500 | 44 (1.0) | normal |
| Large EN (Recruit) | Proza Libre | 48 / 3 | 500 | 48 | normal |
| JP card heading | Noto Sans JP | 26 / 1.625 | 500 | 41.6 (1.6) | 2.08 (0.08em) |
| Caption heading | Noto Sans JP | 24 / 1.5 | 500 | 36 (1.5) | 1.92 |
| Link title | Noto Sans JP | 22 / 1.375 | 500 | 33 | 1.76 |
| Body | Noto Sans JP | 17 / 1.0625 | 400 | 37.4 (2.2) | 1.36 (0.08em) |
| Label beside title | Noto Sans JP | 16 / 1 | 500 | 24 | 1.28 |
| Description | Noto Sans JP | 15 / 0.9375 | 400 | 27 (1.8) | 1.2 |
| Meta | Noto Sans JP | 15 | 400 | 22.5 | 1.2, ink .5 |
| Pill text | Noto Sans JP / Arimo | 14 | 400 | 14 | 1.12 / 0.7 |
No uppercase transforms. Hero tagline is a hand-lettered image (504×135).

## (c) Spacing
Side margin 64px (content x 64–1376 = 1312); two photo columns 636 wide, gap 40; section padding 160/160 (first block 148 top / 220 bottom); full-bleed photo bands 1440×800 between blocks; footer pt 120 / pb 154. Header floats at 16px inset: card 1408×64 at (16,18).

## (d) Radius / border / shadow
Pills 120×32 radius 24; header card white, radius ≈4px (visual estimate), no shadow; photos radius 0, no border, no shadow; 1px ink vertical hairline (~50px tall) between a title and its description; link rows: 1px bottom hairline + 24px dark round arrow chip.

## (e) Images
- Hero: full-screen photo 1440×900 under a handwritten tagline; tagline fades, first band follows.
- Photo pair "Our Field": 636×~700 left (x64) and right (x740) offset down 100px; caption under each (small EN label, 22px title, round arrow link).
- Story rows: 801×645 / 500×500 photos alternating left/right (x64 or x614), text beside.
- Interview 2×2: portraits ≈596×743 (aspect 0.8), second column offset; #01–#04 ghost numerals behind captions.
- Bands: 1440×800 (1.8) full bleed, radius 0; one 1567×446 band bleeds past both edges.
- Ghost photos: 245×176, 302×268, 259×227, 274×205, blurred 5–10px at the margins around the intro text, sharpening as they scroll in.
- Recruit cluster: 3–4 small photos (180–280px) scattered, outer ones blurred.

## (f) Decoration
Thin curved hairline arcs (1px, ink 10–15%) across the background; 100px ghost numerals (opacity .05, ls −4px) and giant ghost words behind sections; "Scroll Down" vertical micro-label at right edge x≈1376, 12px; dark pill with white capsule-arrow icon.

## (g) Motion
| Effect | Trigger | Duration | Delay | Easing | Distance |
|---|---|---|---|---|---|
| Photo focus-in (blur 10px→0, opacity) | `.appear` class at viewport entry | 1s | 0.3s | cubic-bezier(.4,.4,0,1) | 0 |
| Text / link fade | same | 1–2s | 0.3s | same | 0 |
| Ghost photos partial blur 5–8px | scroll position | continuous | — | — | blur only |
| Hero tagline/overlay fade-out | load → scroll | 2–3s | 3–4s | same | 0 |
| Pills hover | hover | 0.3s | 0 | same | — |
