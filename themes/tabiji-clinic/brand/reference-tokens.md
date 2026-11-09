# Reference tokens (measured with getComputedStyle at 1440x900, 2026-11-09)
Primary: https://morioka-ganka.com/ (an eye clinic; Nuxt site built with a visual site builder). Values only, no assets copied. Japanese text omitted.

## (a) Colour
| Role | Hex | Area on first screen |
|---|---|---|
| Page ground | #FBFCF7 | ~12% (header strip + 20px frame margin) |
| Pale band | #F3F4EC | below fold, full-bleed bands |
| Text | #423E3E | body, headings |
| Dark pill / button | #423E3E (white text) | 1 pill |
| Accent (tiny marks, labels, logo only) | #0000F9 | < 1.5% |
| Card | #FFFFFF on the pale band | - |
First-screen saturated share (HSV s>0.45): 1.3%. Photo is high-key: white wall, pale wood, soft blur.
Secondary (https://aoba-ligare.com/): text #485253, teal #108B96 (pills, band), white header; saturated share 24.5% (fluid teal band + dark scrubs) - used for structure only, colour NOT adopted.

## (b) Type
- Body family: a rounded gothic (JP); labels in Roboto. Nav 17px / 400 / ls 1.7px / lh 23.8px. Book pill 16px / ls 1.6px.
- H2 26-28px / 700 / lh 1.6 / ls 0.05em, colour #423E3E, margin 32px 0 30-60px. H3 24px / 700 / lh 1.6 / ls 0.05em. Column H3 20px.
- Latin label 15px Roboto, ls 1.5px, accent colour, uppercase, with a small flag mark above it.
- Body 15-16px, lh ~2, ls 0.1em (very airy, centred in the message block).

## (c) Spacing
- Hero frame inset 20px left/right/top under a 128px header band; frame height ~765px.
- Section padding 112px top / 133px bottom on the long section; cards band 1430px tall.
- Message block text column ~480px centred; flanking photo clusters at x 110-415 and x 1025-1330.
- Cards: 2x2, each 540px wide, gap 40px, centred in 1440; inner padding 65px.

## (d) Radius, borders, shadow
- Hero frame radius 8px, overflow clipped. Photos radius ~6-8px. Cards radius 0, white, no shadow. Pills radius 9999px; outline pill = 1px #423E3E.
- No shadows anywhere.

## (e) Imagery - IMAGERY = photo
Bright, high-key documentary photographs: soft natural light, pale wood, white walls, shallow depth of field, people looking at each other not at camera.
- Hero: wide ~1400x765 (1.83:1), radius 8, inset frame, text ghosted on it.
- Message clusters: 4 photos, portrait/landscape mixes (1:1.36, 1:1.3, 1:1.0, 1:1.35), ~165x225 and ~123x167 sizes, offset vertically (left pair stepped down-right, right pair stepped up-left), radius 6.
- Feature rows: 668x445 (1.5:1) photo left at x 75, text column right from x 868; photo edges feathered (soft white fade at the left and right edge).
- Cards carry no photo; ghost line-art (swirl ellipse, wavy hatch) sits in the bottom-right corner, 240x185, colour #F0F1E4 on white.

## (f) Decoration
- Logo-shaped blue flag mark above each label (14x6); underlined text link with Ø36 outline circle arrow; fixed Ø80 round badge with rotating ring text at bottom-right (fades out at 88% scroll).
- Index label "01 | Word" in accent colour above feature headings.
- Hours card white, notched into the hero frame's bottom-right corner (inverse corner), 586x205.

## (g) Motion (CSS scroll-driven; no JS library)
- Photos and text: `animation-timeline: view()`, `animation-range: cover`, linear. Keyframes 0%: blur(20px), opacity 0, scale 1.1 -> 18-22%: blur none, opacity 1, scale 1 -> hold to 33% -> fade/scale 0.95 on exit. Hover transitions 0.3s cubic-bezier(0.4,0.4,0,1).
- Hero ghost headline: `animation-timeline: scroll()`, opacity 0 at 1% so it is gone by the first scroll step; load-time loop on a ghost word (open/close) inside the frame.
- Fixed badge: `scroll()` timeline, opacity 1 from 5% to 88%.
