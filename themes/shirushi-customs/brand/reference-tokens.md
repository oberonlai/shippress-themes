# Reference tokens — takenaka-foodware.jp (measured with getComputedStyle, 1440×900, 2026-10-30)
Only values and descriptions; no assets, text or logo copied.

## (a) Colour
| Role | Value | Area | Note |
|---|---|---|---|
| Ground (paper) | #F4F2ED, faint paper grain | ~55% of page | we shift to a cool grey (#F1F3F2), no cream |
| Band 2 | #EDEBE5 (recommend band) | ~10% | |
| Tint band | rgba(42,49,64,.05) (OEM) | ~5% | slate wash |
| Notice panel | ≈#F6F3E8 | ~3% | |
| Dark stage | near-black photo, avg RGB 23/22/17 | hero 100% of first screen, story band | |
| Text | rgba(0,0,0,.8); headings rgba(0,0,0,.9) | | |
| Accent | black pill (rgba(0,0,0,.03) fill on header) + black round arrow disc | tiny | no saturated colour at all |
First-screen saturated share (S>0.45): **0.4%**.

## (b) Type
- Family: DNP Shuei Gothic Gin (JP gothic) with sans fallback; Latin headings grotesque (Neue-Haas-like), medium weight.
- Body 14px / line-height 25.2px (180%) / letter-spacing .56px (.04em); intro copy 16px / 200% / .12em, white on photo.
- Block title Latin: 24px, 500, .96px tracking, no uppercase transform needed (set in caps text). Section label (vertical) 12px, 400, 2.4px tracking, writing-mode vertical-lr, wrapped in ( ).
- Buttons: "VIEW MORE" 14px + 32px black round arrow disc.

## (c) Spacing
- Section padding 160/160 (mobile 96); recommend band 212/157; grid 16px gutters, 20px side padding, 1425px fluid width.
- Hero block 250vh (200vh mobile) with sticky copy; intro text starts 100vh below.
- Brand block: heading column cols 2–6, tall photo cols 8–13 flush to right edge (588×718).

## (d) Radius, border, shadow
- Cards/photos radius 0; story inset photo radius ~4px; header store pill radius 14px, 1px rgba(0,0,0,.03) border; contact panel radius ~4px. No shadows. Hairlines rgba(0,0,0,.1) on news rows.

## (e) Imagery — **IMAGERY: photo**
- Documentary product/still-life photography, low-key and moody in hero (stacked dark-teal bowls on timber shelves, gloved hand), high-key in lists. Hero is a full-bleed looping video/photo, dark, desaturated teal-grey.
- Tall brand photo 1188×1452 (≈0.82) flush right, no radius. Product cards: photo 344×443 square-ish (0.78) fused to a text panel of same height (≈340 wide) in one pale card; neighbours peek at both sides. Story: blurred copy of a landscape photo as full-bleed ground + sharp inset 3:2 (≈453×317, radius 4) at left.

## (f) Decoration
- Vertical bracket labels "( … )" in the left gutter, 12px, tracked.
- Outline map of a region with a ringed pin dot (Ø14, white 1.5px ring + dot) and a 3-line coordinates caption (caps 13px + two 10px lines) bottom-right of the story band.
- Progress line (≈340px, 1px grey, dark fill) with two Ø30 outline arrow buttons under the card strip.
- "( TAKENAKA )" bracket tag bottom-right inside each card, 12px.
- Black pill "VIEW MORE" with Ø32 black disc holding a white arrow.

## (g) Motion
- Loader progress bar then hero. Hero section 250vh; `.copy` sticky at the bottom (top: 100dvh-40px) and rides up y:170 (ScrollTrigger scrub, ease none).
- Reveals: GSAP, y 20→0 + opacity, .8s power2.out; larger blocks 1.2s power4.out; start "top center+=20%"; stagger on card lists ~.1s.
- Hover: .32s cubic-bezier(.215,.61,.355,1) colour/border/transform; image scale on hover.
- Page transitions: barba (we skip).
