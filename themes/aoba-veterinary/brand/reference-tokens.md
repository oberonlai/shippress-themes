# reference-tokens — R1 Cross Animal Hospital (https://www.cross-ah.vet/), measured 2026-10-23 at 1440×900 with getComputedStyle
Numbers and descriptions only; no copy, photos or logo reused. Screens: `ref/cross-first.png`, `ref/cross-full.png`, `ref/scroll-cross-before.png`, `ref/scroll-cross-after.png`.
Note: S5-Style had no veterinary entry (searched); R1 is the closest real vet-clinic site with a full-bleed-photo + framed-statement first screen. `ref/hta-first.png` (S5-listed medical site, 3D characters) was looked at only for contrast and is NOT used.

## (a) Colour
| Role | Hex | Area share (first screen / page) |
|---|---|---|
| Main (navy) | `#183863` | ≈2–4%: hairlines, h2, footer bar, timetable block, buttons |
| Secondary (pale blue) | `#aebed7` | <1%: banner arrow band |
| Ground | `#f5f5f5` / `#f8f8f8` / `#ffffff` | ≈70% of page (alternating light bands) |
| Text | `#333333` (body), `#000000` (large headings) | — |
| Rule | `#e2e2e2` 1px, `#d0d0d0` 3px | — |
| Accent | yellow ≈`#e8d030`, coral ≈`#ff7f6e` (round "CHECK!" badges ≈84px), link blue `#2e93d4` (stray) | <2% |
First screen saturated pixels (S>0.5, V>0.3): **8.9%** (teal floating booking tab + navy). Rest is photo (grey/white/oak) and ground.

## (b) Type
- Families: Japanese serif (Mincho-style, bold) for headings, nav, numerals; sans for body.
- h-statement in hero box: serif 30px / 48px, w700, ls normal. Section label ("当院の特徴"): serif ≈28px w700, ls ≈0.3em, centred, 100px × 2px navy underline rule. Feature numeral: serif 24/36 w400. Feature title h3: sans 19/28.5 w700. Nav: serif 14/20 w700, item padding 10px 14px. Body 16/24 (JP lh 2 in prose paragraphs, centred greeting). Phone number: serif ≈36px ls ≈0.1em. Small notes 12/24.
## (c) Spacing
- Container ≈1080–1100px (content x 180→1260); wide card row 202→1265 (≈1063). Section padding: 56–76px top, 64–70px bottom; hero band 550px tall (61% of 900 viewport); header 76px + nav row 41px. Feature cards 336×352, gap 27px.
## (d) Radius, border, shadow
- Radius 0 everywhere (boxes, cards, buttons); borders 1–2px navy `#183863`, 4px navy on one outlined box; no shadows. Round only for badges (50%).
## (e) Images
- Hero: full-bleed 1440×550 (≈2.6:1) slideshow (bxSlider, 0.5s slide), centre statement box 462×170 at x≈795→1265, y 400→570 (lower-right of centre), 2px navy border, translucent grey-white fill (≈rgba(255,255,255,.6)), padding 30/20/40.
- Feature cards: 336×352 (≈0.96:1) photos, radius 0, each carries a 260×200 panel `rgba(255,255,255,.85)` inset 38px/76px (centred, upper part) holding numeral 01–03 + title.
- Section behind the cards: a blurred/faded wide photo as section background (full width, 602px band), cards overlap its lower edge.
- Portrait cut-out of the vet 502×657 (0.76) overlapping the band edge (we don't do cut-outs; use framed photo instead).
## (f) Decoration
- Nav: slanted hairline separators (thin "/" strokes, ≈26px tall, grey) between items and at both ends.
- Outlined buttons 280×56, 1px navy, label centred, long thin arrow line with open arrowhead sticking out at the right end.
- Vertical navy rule (2px, ≈107px tall) between badge label and text; round pastel badges 84px with serif word overlapping bottom-right.
- Timetable: solid navy block 480×148 with white ● marks.
## (g) Motion
- Feature cards only: `.animated` + jQuery scroll listener adds `fadeIn` (animate.css) when element top < 75% of viewport height; opacity 0→1, **1s, ease, delay 0, no stagger, no displacement**, once. Hero: bxSlider slide 0.5s auto. Sticky nav (`.fix-nav`, white, 62px) slides in after scrollY>110. Anchor scroll 500ms swing. No parallax, no marquee, no counters.
