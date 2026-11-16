# Reference tokens: Kajima-no-mori hotel site (https://kajimanomori.co.jp/)
Measured from the published CSS (common.css, homepage.css) and a 1440px headless screenshot. getComputedStyle sampling was not completed (CDP script stalled), so values below are from the stylesheet and the screenshot.

(a) Colour: ground greige (#E6E3E0 / #D8D3ce family) ~55% of first screen; photo dark forest green ~40% (photo content, low saturation); ink #343434 text; deep green #222F25; accent brown-terracotta button (~#8B5A44) ~2%; white "Menu" box. First-screen saturated share well under 15%.
(b) Type: Zen Old Mincho (JP serif) + Baskervville (Latin serif); light weights, wide tracking on labels, body lh ~2.0; vertical writing-mode for the hero tagline.
(c) Spacing: section margins 12.8rem / 6.25rem; facilities padding-bottom 12.5rem; stay padding 16.9rem top / 12.5rem bottom; hero margin-top 4.4rem; hero photo max-width 86.46% flush left.
(d) Radius 0 on photos; buttons square; hairline borders; no shadows. Transitions `all .5s ease`, `.8s ease` for colour.
(e) IMAGERY: photo. Dark, natural-light documentary photographs of forest, architecture, interiors. Hero 1230x710 (about 1.73:1) flush left; mosaic of overlapping rectangles in mixed sizes (about 1:1, 3:4, 4:3) over a full-bleed blurred green photo; strip of three small portrait photos 3:4 stepping down on the right.
(f) Decoration: season toggle chip top right (two cells, active white); vertical two-line tagline; small "Scroll" vertical label with dot pager; bracket-flanked reservation line "[ ... ]" with a Latin word; notice chip with info icon on the photo top-left.
(g) Motion: js-scroll-fade-text and js-scroll-fade-textrandom (per-character random fade as lines enter), splide carousels, season toggle swapping hero photos, all around 0.5–0.8s ease; no GSAP evidence seen.
