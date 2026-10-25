# Reference tokens — union-tec.jp (measured 2026-10-25, 1440×900, getComputedStyle + CSS/JS bundle read; values only, no assets copied)

## (a) Colour
| role | hex | share of first screen / page |
|---|---|---|
| ground | #FFFFFF | 68% of first screen (white), page body white throughout |
| ink / display type | #000000 | 6.7% first screen (giant wordmark halves + tagline); all body/nav text |
| photo mid-greys (pill photo) | ≈#C9D0D2 … #8C8F8D | ≈20% (cool, desaturated daylight photo) |
| card tint | #F7F6F6 → #EFEDED gradient | tilted cards |
| hairline grid | rgba(0,0,0,.10) | 1px |
| dark overlay on full-bleed photo | ≈rgba(40,32,26,.65) | section 3 |
| accent | tiny green pencil in photo only (≈#4FD24A); no UI accent | <0.5% |
Saturated share of first screen: **2.3%** (HSV s>0.4, v>0.2).

## (b) Type
- Latin: helvetica-lt-pro (Black/Bold for display, Regular body); JP: Morisawa Shin Go family (Medium/DeBold). Body 16px / 24px lh (1.5), ls normal.
- Hero wordmark: ≈250px (cap height ≈180px), Black weight, extended, uppercase, cropped by viewport edges both sides, sits behind the photo.
- Hero tagline JP: 25px, DeBold, glyphs spread by justified spacing across full container width at bottom (y≈808/900). Sub line 13px / 20.8px lh, ls 0.26px.
- Section title EN: ≈40px bold (Capability) + 13px JP label under it (700). h3 EN: 24px / 32px (pc) bold, lh 1.2. h3 JP: 18px, 400 (Medium face), lh 1.6, ls 0.36px.
- Nav links: 13px, two columns of three, black, no underline. Buttons 16px.
- Case: Latin headings mixed case (not uppercase) except wordmark.

## (c) Spacing
- Container: full width 1425 (24px gutters), 8-column visible grid, column ≈176px.
- Section padding-top: 174px (pc) / 104px (sp); padding-bottom 0–157px; section heights 1000–1900px; big gaps (mt 212px pc / 110px sp).
- Header height 78px, fixed, transparent.

## (d) Radius / border / shadow
- Pill buttons: radius 16px on 24px height (full pill); Contact solid #000 / white text, Menu 1px solid #000 / transparent.
- Hero image mask: stadium (≈948×407, aspect 2.33:1), radius ≈ half height.
- Cards: square, no radius, tilted in 3D, soft gradient shading, no box-shadow. Borders 1px #000 at 10% (grid) only. No shadows.

## (e) Imagery
**IMAGERY = photo** (hero, full-bleed band, case imagery are photographs; line drawings in cards are thin diagrammatic outlines, minority).
- Hero photo: tight crop of a hand marking a drawing on a floor with a pencil, soft daylight, cool grey-white palette, shallow focus; aspect 1.58 source, masked to stadium 2.33:1; centred, ≈66% viewport width ×45% height, overlapping the wordmark.
- Full-bleed band: photo of a space interior, blurred/darkened (overlay ≈65%), clip with large rounded corners (≈ 1/6 height) — expands from pill to full width on scroll; text bottom-left white 56px bold three lines.
- Card line art: 1.5px dark outline pill/ellipse shapes centred in a 340×345 card.
- Photos: 1710×1080, object-fit cover, 0 radius except the masks above.

## (f) Decoration
- Fixed 1px hairline grid (8 cols × rows ≈176px) with 5px tick marks at intersections, rgba(0,0,0,.1), behind content; turns white-on-photo when over the dark band.
- Small round dot "•" before labels/buttons (6px, black or white).
- "Scroll" label 13px bottom-right of first screen; language switch Ja/En top-left under the logo.

## (g) Motion
- Smooth scrolling: Lenis. Scroll-scrubbed GSAP ScrollTrigger: hero stadium mask → full-bleed band (SVG/clip-path morph), 3D-tilt cards rotate in; ease power3/power4 inOut, scrub "none"-ease linked to scroll.
- Entrance (IntersectionObserver, threshold 0, per-element rootMargin + enter-delay data attrs): opacity transitions 0.5s / 0.8s with cubic-bezier(.26,.06,0,1), (.18,.06,.23,1), (.43,.05,.17,1), (.47,.16,.24,1); transform .5–.8s; stagger 0.05s; GSAP tween durations 0.3–1s.
- Marquee in the bundle (recruit/links strip).
