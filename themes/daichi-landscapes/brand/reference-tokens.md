# reference-tokens — R1 石井造園 (Ishii Zouen) https://www.ishii-zouen.co.jp/ (S5-Style #10051), measured 2026-10-23 at 1440×900 with getComputedStyle + pixel sampling. Values and descriptions only.
Note: R1's imagery is flat grainy illustration (not copied; ours is documentary photography). We keep structure, colour relationship and techniques.
## (a) Colour
- Ground (warm cream) `#f7edde` ≈64% of first screen; white `#ffffff` section/cards/vertical label tiles; pale lime wave band `#f5f1d8`; text `#000000`.
- Main green `#118856` (CTA button 506×101), deep tree green ≈`#0a7a58`, mint `#46d8ac`, lime `#40a010`; accent orange sun `#fe6806` (≈2%, 86px circle). Footer circle `#907465`→`#9cda91` on inview.
- First-screen saturated pixels ≈21% (illustration). Ours must be ≤15%: low-chroma ground + `#5E6B52` on small areas.
## (b) Type
- Family: Noto-Sans-JP-like gothic (YakuHanJP, Yu Gothic stack), single family. body 18px/28.8 (1.6) w400; h1 (logo) 36/57.6; h2 sizes 27/43.2 w400, 51.75/82.8 w700, 39.4/39.4 w700, headline clamp 25.9→43.75px; lead p 33.75px/67.5 (lh 2.0) w700 and 22.5px/45 w400. Letter-spacing normal, no uppercase. Nav ≈15px w700.
## (c) Spacing
- Container ≈1193px (content left x=124); section headings centered or left at 124px; heading→content gap clamp(33,10.3vw,97)px; big vertical rhythm ≈120–200px between sections; wave edge between sections.
## (d) Radius / border / shadow
- Photos radius ≈10px; white info card radius ≈8px, shadow soft (`0 2px 12px rgba(0,0,0,.12)` est.); CTA button radius 0, flat. No borders except ring graphs (stroke ≈26px).
## (e) Images
- Hero: illustration scene full-bleed 1440×~900 (tree centred x≈700), stacked vertical white tiles top-right (3 tiles 78×204/263/321 px, heights differ by text length, gap 15px, x 966–1230, y 172+).
- Works carousel (Splide): rounded photos ~425×300, varied heights offset up/down (waterline), gap ≈35px, overflowing both sides.
- Impact section: 3 ring graphs ≈260px with illustration plants overlapping the ring edge.
## (f) Decoration
- Vertical headline tiles (white, writing-mode vertical, 78px wide, 40px type); sun circle; wave-shaped band edge (curve amplitude ≈70px) lime→white; ring graphs with percentage counts; floating info card bottom-right (377×108, white, radius 8, green icon tile 90×90).
## (g) Motion
- GSAP + ScrollTrigger + Lenis (smooth scroll). `.js-inview` elements: ScrollTrigger start "top 80%", once, toggles class `inview`. Ring graphs: CSS animation 1.5s cubic-bezier(.65,0,.35,1) forwards. Footer circle: background-color transition 1.2s delay .3s cubic-bezier(.65,0,.35,1). Hero: GSAP timeline scenes, tweens duration .5–.8s, eases power/expo/back, 1s start delay, scene loop.
