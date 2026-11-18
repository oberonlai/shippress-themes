# Reference tokens: Prince & Pet (measured 2026-11-18, desktop 1440x900)
Source: https://www.princehotels.co.jp/pet/ (screens: ref/prince-first.png, ref/prince-full.png)
IMAGERY: photo (documentary, high-key daylight, people with dogs outdoors; no illustration beyond small pale paw-print motifs)
## (a) Colour
- Page ground white #FFFFFF (~60% of first screen outside the photo); photo window carries green grass (photo, not flat colour).
- Accent / nav text sage green #769E6F (nav labels, dots, ~3% of area). Pale sage wash #E4ECE2 (paw prints, bands). Warm greys #959595 / #C8C8C8 (inactive pager dots, rules). Text near-black.
- First-screen flat saturated share: ~5% (nav text + pager); the photo is the only large colour mass.
## (b) Type
- Wordmark in a light geometric sans (Pauline via Typekit), ~110px at 1440, white on photo; JP sub-line semibold ~25px with wide tracking.
- Nav 18px semibold, sage green. Body 16-18px, lh ~1.9. Section titles 25-50px.
## (c) Spacing
- Header 100px white/translucent bar; hero photo inset 32px each side below it, height ~800; text intro block starts ~70px under the photo, left-aligned at x~90, narrow measure (~320px at 1440).
## (d) Radius, border, shadow
- Hero window radius ~18px, cards 9px; no borders, no shadows.
## (e) Imagery
- Hero: 4-slide cross-fade (fade, autoplay 3s) of full-bleed 1.7:1 photos in one rounded frame; people hugging/stroking dogs on grass and balconies. Right-lower area: 4 pale sage paw prints stepping diagonally below the frame.
## (f) Decoration
- Paw-print stepping trail (pale #E4ECE2, rotated -20..+20 deg, 4 prints ~70px), pager dots 10px (inactive grey, active sage), logo mark with dog-ear on the P.
## (g) Motion
- Hero: slick fade, autoplay 3000ms. Blocks: .fadeBlock fade-in when top enters viewport minus 240px, jQuery fadeIn. Hover transitions 0.5-0.6s ease; one 1s cubic-bezier(0.215,0.61,0.355,1) transform. Header gets a scrolled state after 80px.
