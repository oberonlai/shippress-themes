# Reference tokens — union-tec.jp (primary), rondomark.jp (secondary: palette/type calm only)
Measured 2026-10-25, headless Chromium 1440×900, getComputedStyle + pixel sampling. `~` = read off the screenshot (not a computed value). No assets, text or logos copied.

## (a) Colour (union-tec.jp)
| role | hex | share of first screen |
|---|---|---|
| ground | #FFFFFF | ~76% |
| ink (wordmark, buttons, text) | #000000 | ~6.6% |
| grid hairline | ~#E3E3E3, 1px | <1% |
| card ground | ~#F7F7F7 | 0 in first screen, large on Capability |
| accent | none in UI; saturated orange/red/blue appear only inside the photographed artwork in the oval | **saturated share 4.3%** (S>0.35) |
Secondary rondomark.jp: ground #F0F0F0, ink #2C2C2E, taupe tag #938978 (rgb 147,137,120), white card #FFFFFF.
Ratio target for ours: base 76 / ink 7 / taupe-rose accent ≤4 / photo carries the rest.

## (b) Type
- union: Latin helvetica-lt-pro bold (700), JP MFW-PGothic. Hero wordmark ≈ 190px cap height, ~900 weight, tight; section title (Capability/Service) ~44px bold lh 1.2 + 13px JP sub-label bold; H3 32px/38.4px 700 and 24px/28.8px 700; body 13px/20.8px (lh 1.6) ls .26px; nav 13px/15.6px ls .26px; en eyebrow 11px/13.2px 700. No uppercase transform, sentence case headings.
- rondo: JP gothic 400; H2 44px/70.4px (lh 1.6) ls 3.52px (.08em); H3 22px ls 1.76px; body 16px/35.2px ls 1.28px.

## (c) Spacing
- union: 8-col grid, 24px side gutter, container full width (1377px content at 1440); section padding-top 104px mobile / 174px desktop, bottom 157px; Capability block 1230px tall; hairline rule under header of sections; grid cell ≈176px.
- rondo: side padding 69px, container ~1310px.

## (d) Radius / border / shadow
- union: pill buttons 216×48, radius full (9999), black fill white text, or 1px black outline; cards square (0 radius), no shadow, no border; oval image masks via SVG clipPath (`#home-fv-clip`, `#home-recruit-clip`); grid hairlines 1px.
- rondo: tag 6px radius, white card 4px, no shadow.

## (e) Imagery
**IMAGERY: photo.** Main images are real photographs (office meeting, aerial crowd on a crossing, recruiting portrait). A small line-drawn figure (red outline, pink fill) appears only as artwork inside one photo — not the primary image.
- Hero oval: ~510×350 at centre (aspect ≈1.45:1), organic superellipse clip-path, sits ON TOP of the wordmark, covering its middle letters.
- On scroll the oval morphs to a tall portrait oval ~375×540 (≈0.69:1) at right (x≈875–1250, ≈26% of width), then in the next stage becomes a full-bleed photo with a small oval inset top right (~320×220).
- Recruit image 411×594 portrait, oval clip, right column.
- Photos are neutral daylight, slightly desaturated, documentary; one full-bleed photo is blurred and darkened for white overlay text.

## (f) Decoration
- Full-page 8-column hairline grid with intersection ticks, slightly warped (wavy) in the hero; stays fixed behind content.
- Huge wordmark (≈190px, black) fading to ghost grey (~#F5F5F5) on scroll.
- Pill buttons with a small dot (6px) left; fixed top-right Contact (black) / Menu (outline) pills 88×24, one above other.
- Capability: light-grey cards with 1px outlined oval line icons (~70×100).

## (g) Motion
- Intro: hero media in `pile` with clip-path; Lenis smooth scroll; THREE.js loaded (WebGL warp of the grid).
- `.is-in` reveal: opacity+transform, **0.8–0.9s**, delay 0.1–0.5s, easing cubic-bezier(.18,.06,.23,1) and cubic-bezier(.43,.05,.17,1); translate-x ≈ −43px for pills (data-scroll-delay stagger).
- Body background colour transition 0.7s cubic-bezier(.43,.05,.17,1) between sections.
- Lead text fills from grey to black per character as scroll passes (scrub).
- Hero wordmark: letters fade to ghost; oval morphs shape/position over ~350px scroll.
- Library: Lenis + GSAP (ScrollTrigger-style data-scroll attrs, IntersectionObserver `is-in`) + THREE.
