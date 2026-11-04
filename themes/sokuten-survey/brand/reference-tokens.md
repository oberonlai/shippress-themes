# Reference tokens — PASCO (https://www.pasco.co.jp/), measured 2026-11-03 at 1440x900 with getComputedStyle
All values measured; no assets, text or logos copied. Screenshots in `ref/`.

## (a) Colour
| Role | Hex | Where | Share of first screen |
|---|---|---|---|
| Base | `#FFFFFF` over a faint pink-to-cyan wash (opacity ~0.2 gradient, fades to white at the bottom) | page ground | ~62% |
| Photo greys | `#E0E0E0` … `#202020` (CG city model, satellite, aerial river) | strip panels | ~30% |
| Main blue | `#004295` | footer band, Latin eyebrow labels, outline button border and text | <1% |
| Sky | `#64B5EB` (pill CTA, r25), `#ECF6FF` (owned-media band) | lower band | 0% on first screen |
| Text | `#000000` headings, `#333333` news rows | | |
| Rules | `#DCDCDC` 1px | news rows | |
| Notice red | red outline chip "PDF" | news rows | <0.5% |
Saturated share (S>0.5, V>0.35) of the first screen: **2.7%**. Limit for our theme: min(30, 2.7 + margin) → target <= 6%, hard limit 15%.

## (b) Type
- Body: Yu Gothic / Hiragino / Noto Sans JP, 13.6px root, rows 16px / weight 500 / line-height 1.3 (20.8px).
- H1 tagline: Noto Serif JP 700, main 49.97px (clamp 32px–3.47vw–50px) + sub 31.97px on the same baseline, letter-spacing 0.1em (2.72px), line-height 1.3, 30px column gap, left padding clamp(40px, 11.32vw, 163px).
- H2: Noto Serif JP 700 36px, letter-spacing 3.6px, line-height 1.3.
- Latin eyebrow: Poppins 500 16px, letter-spacing 1.6px, colour `#004295`, followed by a 60px 1px rule in the same colour.
- Strip vertical caption: 20px / 700 / white / letter-spacing 1px, `writing-mode: vertical-rl`, 16px at 768–1199px.
- Button: 14px, 38px high, 1px `#004295` border, radius 4px, white ground, chevron at the right.

## (c) Spacing
- Container: 40px side margins on the strip (1360px wide at 1440), 120px side padding for news/exhibition sections (content 1200px).
- Header 100px, transparent, logo left, utility row (language, search pill) above main nav, right aligned.
- Tagline starts 40px under the header; strip starts 40px under the tagline; strip height 505px; block gaps 100px.
- Strip gap 8px between panels.

## (d) Radius, borders, shadows
- Strip panels radius 4px, no border, no shadow. Buttons radius 4px (outline) and 25px (pill, height 50px, 260px wide).
- Owned-media band: top-left/top-right radius 60px, ground `#ECF6FF`, full width, 619px high.
- Rules 1px `#DCDCDC`. No shadows anywhere.

## (e) Imagery — **IMAGERY: photo**
Main imagery is photographic / realistic CG and aerial photography in the strip (satellite in orbit, white 3D city model, blurred skyline, a river from above); the only illustration (isometric globe with people, drone, windmills in flat pastel colours) sits in one lower band, well under half of the image positions, so photo is the primary type.
- Strip panels: six, all 505px tall; closed 163px wide (≈0.32:1), open 505px (1:1); object-fit cover; radius 4px; a 56px black-to-transparent edge gradient on the closed panel's left side; a 90px bottom gradient (black 50%) appears only on the open panel.
- Exhibition cards: two 596x~250 photos, radius 4px, white centred caption over a dark veil.
- Illustration (owned media): flat vector, isometric, pastel, no outlines, 520px square at left of the band, text at right (starts x 750).

## (f) Decoration
- Eyebrow rule 60x1px in main blue; arrows are 34px white circles with a small chevron at the bottom-right of the open panel (opacity 0 → 1, 0.6s after a 0.1s delay).
- Red outline "PDF" chips on news rows. No dots, no numbering.

## (g) Motion
- Strip accordion: `flex-grow` 163 → 505 on the open panel, **0.8s cubic-bezier(0.4, 0, 0.2, 1)**; open panel advances every **3500ms** (setInterval, wraps around); pauses on mouse hover, on keyboard focus-visible and when the tab is hidden; mouse pointerenter on a panel opens it (>= 768px); tap opens first, second tap follows the link; prefers-reduced-motion stops autoplay.
- Caption swap: vertical label fades out in 0.15s; open caption and arrow fade in 0.6s after 0.1s delay; closed panels switch with 0s transition (no ghosting).
- Nothing else: no scroll-triggered reveal, parallax or counters on the page (checked in the DOM and screenshots).
