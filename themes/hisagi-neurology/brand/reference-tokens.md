# Reference tokens (measured, Tuning Element Japan brand site, 1440x900, headless Chromium)

Source: https://solve-net.com/tuningelement/5minutereliefpatch/ (medical-device brand page, S5-Style listed). Values only; no assets copied.

## (a) Colour
| Role | Hex | Share of first screen |
|---|---|---|
| Ground (warm cream wash) | #FEF9F1 | ~34% |
| Window fill (white-to-cream gradient, glow shadow) | #FFFFFF to #FEF3E4 | ~24% |
| Text | #616161 (body), #797979 (small) | <2% |
| Warm tint disc/blobs | #F4D1C5, #ECBA99 | ~10% |
| Accent capsules (aqua / mint / lemon gradients) | #97EFF6, #B3FCCB, #D2FDDA, #FFF45C | ~8% (saturated, s>0.35 and v>0.5) |
Saturated share of first screen measured: 7.7%.

## (b) Type
- Latin: futura-pt (geometric sans). JP: dnp-shuei-gothic-gin-std (gothic). Root font-size 10px (rem = 10px).
- H1 catch: 20px base scaled up in hero to ~3rem equivalent, weight 400, wide tracking (~0.3em on JP), grey #616161 on white strip.
- H2 label: futura-pt 14px, uppercase, letter-spacing 5.6px (0.4em), line-height 22.4px, white bg, radius 4px, padding 0 16px.
- H3: futura-pt 16px, ls 1.28px (0.08em). Small text 8px ls 0.32px (rem-scaled responsive).
- Ghost background word: giant light-weight Latin, ~14vw, 8% opacity, horizontal drift.

## (c) Spacing
- Hero window inset 64px left/right, top 83px, 1312x785 at 1440.
- Section padding: about 252px top / 128px left; guide 216px right; use 216px left; company 200px 256px.
- Text column about 355px wide; 12px-ish spacing between strips; long pinned sections (3-6 viewport heights).

## (d) Radius, borders, shadow
- Window radius 10000px (stadium). Label strips 8px radius, H2 tag 4px. Capsules full radius.
- Shadow: rgba(0,0,0,.04) 0 0 32px 8px on window (soft glow). No hard borders; hairline lead lines (1px grey) for callouts.

## (e) Imagery
- IMAGERY: photo (hand and body-part product photography, soft high-key). Product pack shot centred inside the window; flat product cut-out in disc sections.
- Window photo: tall 283x863 centre image overlapped by capsule row; window holds a wash gradient rather than a full-bleed photo.
- Disc: ~440px circle, tinted (peach) with product floating and callout lines to labels.

## (f) Decoration
- Row of ~16 vertical gradient capsules, width 64, heights 160-240, vertical offsets staggered +-60px, crossing the window's lower third and bleeding to both viewport edges.
- Dot + uppercase label "FEATURE 01"; thin lead lines with small labels; ghost Latin word behind text; floating "Buy Now" card bottom right (260x80, white, thumbnail left).

## (g) Motion
- GSAP ScrollTrigger scrub (+ pin) for feature sections: disc scales 0.85 to 2.9, pinned for ~3-6 viewport heights; header changes; "-inview" class toggles reveal at top bottom.
- Reveal tweens 0.3-0.4s, y 1 to 0 (percent), ease none/scrub. Lenis smooth scroll present.
