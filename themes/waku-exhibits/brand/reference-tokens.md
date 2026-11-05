# Reference tokens — Hakuten home (https://www.hakuten.co.jp/), measured 2026-11-05 at 1440x900 (viewport 1425 after scrollbar)
IMAGERY: photo (the site is documentary photography of built spaces and booths; a full-bleed showreel video behind the first screen). No illustration.
Style: neutral daylight, mid-contrast, real halls and shopfronts, people mid-gesture; photos never cut out, never framed, always rectangular r0.

## (a) Colour (by area)
- Ground white `#FFFFFF` ~55% of the page; ink `#3B3B3D` (text, footer block, loading curtain) ~30%; photo ~15% (the only saturated area).
- Accent: purple halftone dot spheres (4 floating, ~80px, approx `#6F63C8`) <1%; small red on the WORKS word (logo accent) <1%. Hairlines `#3B3B3D` 1px; tag text `#959595`; category line `#3C3C3C`.
- Saturated share of first screen (S>0.45, L 0.2–0.8): 10.8% (red shopfront in the video); works row 2.1%; contact photo 8.7%.
## (b) Type
- Families: Be Vietnam Pro (caps nav, English heads, 200/500/700) + Noto Sans JP (100/300/400/500/700).
- Body 18px / lh 32px (vision paragraph), colour `#3B3B3D`; work outline 14px / lh 25px / ls 0.7px (0.05em).
- Work h3 26px / 700 / lh 35.6px / ls 1.716px (0.066em); category 12px bold; tags 14px `#959595`.
- Nav 13px Be Vietnam Pro caps white over photo, ls normal. Catch (hero) three lines ~72px bold white (SVG outlines), English sub-line ~48px 600. Vision statement ~72px 900 weight, photo-filled glyphs, two lines.
- Section words ("WORKS") ~16rem/900 caps `#3B3B3D`, cut by the section top; CONTACT/RECRUIT card H2 48px caps 700.
## (c) Spacing
- Header 65px, logo left x=80, nav right, circle button right. Mainvisual padding 0 120px. Vision section 642px tall; works section 3042px for four articles (rows 507–643px, 80–120px apart); lab section padding 60px; contact band 768px; footer 331px `#3B3B3D`.
- Works row: photo 818x505 (1.62:1) flush to the viewport edge (right rows x 607–1425, left rows x 0–818), text column ≈404px at x 137–541 (left photo) or x 884–1288 (right photo). Contact cards 498x199, gap 36, centred.
## (d) Radius, borders, shadow
- Radius 0 everywhere except the 64px circle menu button (1px white/ink border). No shadow. Hairlines 1px.
## (e) Images
- Hero: full-bleed 1440x900 showreel still (shopfront with a red plaster arch), white bold headline lower-left over it; contact band: full-bleed trade-show stand photo with two white flat cards.
- Work photos 3:2-ish (1.62:1), r0, flush to the edge, no mask, no overlap with text; reveal = white mask sliding up + zoom 1.33→1.
- Vision text filled with photo texture (background-clip text, colours from a hall photo) – letters read dark/warm, ragged photo detail inside.
## (f) Decoration
- Fixed right rail: 1px vertical ink line at 57px from the right edge, spans the viewport from y≈120 down, a 14px solid dot rides it (white over photo, black on white), moves with scroll.
- 64px outline circle menu button with two 1px bars (top 24, right 24); inverts to ink on white.
- 4 halftone purple dots (720px source, shown ~80px) floating around the first work row, swing 15px, 3.0/3.5/4.0/4.5s ease-in-out infinite, rellax parallax speed 1.
- Tags row: `#BtoB  #Exhibition` under a 1px hairline.
## (g) Motion
- Intro: full-viewport `#3B3B3D` curtain with logo fading in (4s opacity), then curtain height → 0 in 800ms easeOutExpo, showreel starts.
- `.prx-fadein-up`: opacity 0, translateY(60px) → 0, 1s, `cubic-bezier(0.16,1,0.3,1)`, delay 0.1s; trigger = scroll listener, add class when scrollTop > top − winH + 100, remove when scrolled back above.
- `.prx-maskin`: white overlay slides up (bottom 0 → 100%) 1.5s easeOutExpo, delay 0.5s. `.prx-zoomout img`: scale 1.33 → 1, 2s easeOutExpo. `.prx-linebtmin`: 1px line sweeps left 0 → 100% 5s ease, delay 1.5s.
- rellax.js on the dots (desktop ≥769 only); jQuery + custom scroll listener; slick for media sliders (4.2s autoplay, 600ms).
