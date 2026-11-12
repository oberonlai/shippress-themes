# Reference tokens — measured with getComputedStyle at 1440x900 (Chrome headless)
Primary: https://4cs-ad.co.jp/ (calm agency site; Japanese copy omitted here). Secondary: https://ogud.co.jp/urbanex/shift/.
Only values and descriptions are recorded; no assets, copy or logos are reused.

## (a) Colour (primary, first screen after intro)
| Role | Hex | Share |
|---|---|---|
| Ground (vertical wash, white → grey-green → grey) | #FFFFFF → #889995 @35% → #B8B9BA @35% over white | ~70% |
| Window photo (dusk sea, low-key slate blue) | ~#4A5870 / #2E3A4C | ~17% |
| Ink text | #1A1A1A | ~3% |
| Menu pill (deep aubergine-navy) | ~#231B3B | <1% |
| Accent | none (single hairline #1A1A1A, 1px) | — |
Saturated share (HSV s>0.45, v>0.25) of first screen: 0.0% (measured on `ref/cs4-first.png`). Secondary site: ground #EAEAEA, ink #100964 (navy), stripe grey #9B9B96; saturated share 4.6%.

## (b) Type
Primary: serif for headings/body (Shippori Mincho), tracked-caps Latin labels (Cinzel 11px, ls 3.85px, uppercase), small italic caption (12px/21.6px, ls .48px). Catch lines 14.4px / lh 34.56px / ls 1.728px, weight 400. Section h2 31.7–36px weight 700, lh 1.5, ls .04em; h3 35px/63px.
Secondary: Acumin-like grotesque 18.75px/500 for nav, huge stencil-stripe display word, serif year numerals ≥ 9rem. Our theme uses sans (Figtree / Source Sans 3) instead.

## (c) Spacing
Hero section 1440x900, window inset 160px top and bottom (window y160–800), left offset 145px; header 56px logo at y45, 60px side padding. Catch block right-aligned at x≈1032–1380, y≈398–500, lines 35px apart, each indented 29px further than the one above (stepped rag). Section blocks ~140–200px vertical rhythm (s2 title at y2152).

## (d) Radius / border / shadow
Window: 0 radius, no border, no shadow. Pill buttons radius 100px, 1px solid #1A1A1A outline, 160x44. Menu pill solid, 140x40. Hairline "SCROLL" rule 1px ~#1A1A1A at 30%, running from x80 to the right edge at y770.

## (e) Imagery — IMAGERY: photo
Photo/video, desaturated low-key. Window = single tall portrait 340x640 (ratio 0.53), 0 radius, sits left at x145, ~24% of width; during the intro the window is three side-by-side columns (left dark water, middle pale fog, right pixel-dissolve) revealed by a centre slit. Caption block overlaps the window's lower-left edge (x80–380 vs window x145–485). No masks/clip-path on the final state.

## (f) Decoration
Handwritten display word 710x170 bottom-right (not reused), outline pill "Contact" bottom-right at x1220 y796, tracked-caps "Scroll" label with 1px rule bottom-left, hamburger = two 40px lines. Intro: dark grid of 100px cells with letter tiles and a percent counter. Secondary: two 1px navy hairlines bounding a marquee of repeated uppercase word (9–10px tracked) at y758–795; giant serif year numerals beside small line-art objects.

## (g) Motion
Intro loader → slit: a 70px-wide slit rises from bottom (600ms, ease-out cubic, starts 800ms), then expands left/right to full width (700ms, ease-in-out quint). Catch lines blur(24→0)+translateY(40→0) 0.5s ease, transform 0.6s cubic-bezier(.22,1,.36,1), staggered per line. Section images: opacity+blur 0.6s ease, transform 1.0s cubic-bezier(.22,1,.36,1). Section panels slide with cubic-bezier(.76,0,.24,1) 0.7–1.4s (wheel-driven stacking). Count-up: ease-in-out quad, rAF. Libraries: none (vanilla rAF + CSS transitions; no GSAP/Lenis).
