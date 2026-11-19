# Reference tokens (primary reference: https://niwahouzing.com/ — measured with getComputedStyle at 1440x900)

(a) Colour
- Page ground #FFFFFF (about 70% of the page); ink #282828 (text, about 8%); mid grey #888888 (tiny labels); footer ground #383838.
- Photographs carry all the colour: warm oak floors, black furniture, white plaster. Measured first screen: saturated share 11.5% (the oak floor), dominant buckets pale grey #E0E0E0, near-black #202020, dusty rose-brown #A08080 / #C0A0A0 (plaster and wood in warm light).
- Accent: none on the interface except the solid near-black CONTACT button. Ours adds one quiet accent #D69090 (muted pink, below 8% of any screen).

(b) Type
- Latin UI: Inter Tight 700, 12-14px, uppercase, letter-spacing .08em (nav 14px/1.12px, CONTACT 12px/1.08px).
- Display: Cardo (serif) 21px / 29.4px / .315px for project names and section words (EVENTS, MODEL HOUSE, WORKS) with a tiny grey sub-label under each; body sans, 16px; micro captions 10px #888.
- Ours: Urbanist (display, 500-600, large sizes up to 4.5rem+) and Public Sans (body 16px, lh 1.75).

(c) Spacing
- Section padding 160px top and bottom; side margin 28px at 1440 (header and rows run almost edge to edge); content blocks 1384 wide; events cards 3 across with 24px gaps.

(d) Shape
- Radius 0 everywhere; 1px hairline #282828 rule closing each section; CONTACT button square, 12px caps, solid #282828.

(e) Imagery: IMAGERY = photo (real interiors, high-key daylight and warm evening, wide angle).
- Hero: one full-bleed slide, 1490x852 inside a 1440x917 KV (parallax-oversized), no overlay.
- Case row: three photos bottom-aligned, widths about 17% / 22% / 52% of 1384, heights 220 / 320 / 360 (tall narrow, tall medium, wide), 8px gaps, radius 0, caption block under the wide one with numerals "3 2 1".
- Events: three 3:2 aerial photos, 692/3 wide each. About: single 1:1.05 exterior photo at 19% from the right edge of a two-column text row.
- Works: two-column grid of 4:3 photos (about 215px at 50% scale), title + month under each.

(f) Decoration
- Small square arrow icon (outlined box with a line arrow) as the only link marker; "VIEW ALL WORKS" right-aligned above rows; 1px full-width rule; loop-ring icon (ring that fills over the 4s slide timer) at the right end of the caption bar; left sticky mini-index with a solid triangle marker on the current filter.

(g) Motion
- KV: Swiper slides, speed 1100ms, autoplay delay 4000ms, parallax layer inside slide (image 1490 wide in a 1440 frame).
- Inview reveal: IntersectionObserver rootMargin 0 0 -18% 0; opacity 0->1 over 1.2s and transform over 1s, cubic-bezier(.43,.05,.17,1), delay steps .1s per sibling (delay1..delay7).
- Mask text: clip-path polygon(0 0,100% 0,100% 5%,0 100%) opening over 1.4s cubic-bezier(.16,1,.3,1), text slides in 1.3s same ease.
- Ticker rows: Swiper loop, slidesPerView 2.2 (2.6 at >=768), speed 10000ms, autoplay delay 1 (continuous drift).
- Header turns solid white once the KV leaves the viewport (IntersectionObserver on the KV).
