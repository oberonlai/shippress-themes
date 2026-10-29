# Reference tokens — UNION TEC (https://www.union-tec.jp/), measured 2026-10-29, Chrome 1440×900, getComputedStyle + pixel sampling
Only numbers and descriptions; no assets, copy or logos are reused.

## (a) Colour (first screen 1440×900, 360×225 sample)
| Role | Hex | Area (fold) |
|---|---|---|
| Base / ground | #FFFFFF | 68.5% |
| Ink / text / buttons | #000000 | 5.8% (giant wordmark + nav pills) |
| Light grey panel | #F9F9F9 | ≈0% on fold (cards) |
| Photo (desaturated grey-green cast, #8F9E97 typical) | — | ≈24% (pill window) |
| Accent (CSS vars only, unused on fold) | blue #296EDF, green #29DF7E, red #DF2929 | 0% |
Saturated share of the fold (S>0.45, V>0.3): **1.5%** (only a green pen tip #73C167). Sticky photo section: 1.1%. Hairline grid lines ≈ #E6E6E6 at 1px.
## (b) Type
- Latin: helvetica-lt-pro (Adobe Fonts), fallback sans; JP: MFW PGothic (bold/regular). body 16px/24px, ls normal.
- Hero wordmark "UNION TEC": ≈180px cap height (SVG logo glyphs, h-182px pc / 104px sp), weight black, uppercase, cropped by viewport edges, ink #000 (later fades to #F7F7F7 behind text).
- Hero tagline (JP, one line spread across full width, letter-spaced by hand): 25px / lh 37.5px, bold.
- Hero sub line: 13px/20.8px, ls 0.26px (0.02em).
- Section heading "Capability": ≈40px bold Latin, JP sub 18px bold; story paragraphs 28px / lh 56px (2.0) / ls 0.56px (0.02em), second block 18px/36px/0.36px.
- Big list statements (sticky section): ≈56px/1.55 bold white, Latin sentence case.
- Labels 11px/13.2px weight 700 (card tags). Buttons 16px/400.
## (c) Spacing
- Container: full-bleed, side margin 24px (--grid-margin 16/24 × spacing unit); 12 cols pc / 6 cols sp; gutter 16–20px; grid cell visual 176px (hairline grid).
- Section padding-top: 174px (capability), 160px, 155/157px; mobile 104px. Sticky stages 100svh, stacked with negative margin (-mt-svh).
## (d) Radius / border / shadow
- Nav pills: height 24px, radius 16px, padding 0 12px, 1px border (black on white, white on black). CTA "Discover more": 216×48, fully round (9999px), padding 9/32, 1px border.
- Shadow: none anywhere. Photo windows have no border.
## (e) Imagery
- **IMAGERY = photo** (≈95% real photography: documentary, natural light, desaturated cool grey, people and hands at work; no illustration).
- Hero: one photo in a **stadium/pill mask** (SVG clipPath `home-fv-clip`), ≈950×405 at x240–1186,y247–653 (66% of width, 45% of height), ratio ≈2.35:1, centred; sits above giant black wordmark that runs under it and is cropped by both viewport edges. Photos swap in the same mask.
- Story photo: tall oval/egg mask ≈375×540 (0.7:1) at right, x874–1248 (26% of width), vertically centred; wordmark ghosted behind it.
- Sticky service section: full-bleed photo blurred + darkened (≈50% black), corners cut by a big rounded/diamond mask, with a small blob-masked sharp inset 320×220 top-right (x963–1283,y142–364).
- Cards: white #F9F9F9 tilted 3D cards, no photo, outlined ring glyph.
## (f) Decoration
- 1px hairline grid, cells 176px, small "+" ticks at intersections, fixed behind/over everything (front layer clipped by the photo mask so lines show over photo at low alpha).
- Pill outlined buttons with a 5px dot at left. Two stacked nav pills top-right. "Ja / En" switcher top-left (inactive #BDBDBD).
- No numbering; labels as 11px bold tags.
## (g) Motion
- Hero intro: letters of the tagline translateY(100%)→0, .7s cubic-bezier(.25,1,.5,1), delay 40ms × index (--i).
- Hero scroll: tagline rolls (front translateY 0→-100%, back 100%→0 over 1000ms scroll-driven, ease cubic-bezier(.25,1,.5,1) first 70%); photo pill morphs to the tall oval and moves right as the hero (sticky, 100svh) is scrolled.
- Text-fill: story paragraphs go from #CCC (≈0.2 alpha) to black line by line/character as they cross the viewport (scrub, ≈300px per paragraph).
- Sticky stage: next section pinned (position sticky top 0, 100svh), background photo cross-fades; list lines slide up ≈ 40px / 0.8s.
- Eases used: .26,.06,0,1 · .18,.06,.23,1 · .43,.05,.17,1 · .47,.16,.24,1 · .25,1,.5,1; durations .4–2s; hover colour .7s.
- Library: Lenis smooth scroll + vanilla rAF/IntersectionObserver (bundle, Vite); no GSAP/AOS.
