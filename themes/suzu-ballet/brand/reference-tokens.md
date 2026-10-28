# Reference tokens — Anjali Rokko (https://anjalirokko.jp/), measured 1440×900 with getComputedStyle + screenshot sampling (2026-10-28)
Numbers and descriptions only; no assets, text or logo copied.

## (a) Colour (first screen = tinted greige, saturated share 0.4%)
| Role | Hex | Share |
|---|---|---|
| Base / page (hero tint → about) | #EDE6E0 → #F8F7F5 | ~62% of first screen; about band #F8F7F5 |
| Soft band | #F0EFEB | ~8% |
| Secondary panel (sage, lesson half) | #BBC6B9 | 50% of that section |
| Primary (deep green: button, nav pill) | #5A695F (button), #465B4E (body text, headings) | ~3% |
| Text deep / headline | #303930 (hero H2), #212821 (H2 JP) | <5% |
| Accent | none; single dark-green pill CTA | — |
Photos are warm white/high-key with green plants; no saturated block of colour.

## (b) Type
- Display: Melodrama (thin high-contrast display serif, caps via text-transform: uppercase), weight 300, lh = 1.0 × size. H2 hero 129.9px (9.1rem); section H2 90px (5.6rem), lh 90–108px, ls normal. Colour #303930 hero, #465B4E sections.
- Body/UI: Jost 300–400 + IBM Plex Sans JP fallback; body 16px/25.6px (1.6), JP lead H2 26px/57px (lh 2.2) ls 1.6px weight 300 with a 1px underline under each line; H3 16px/400; sub-H3 20px/32px/300; names 20px ls .48px.
- Nav button 14px; label caps "LESSON & PRICE" ~14px ls ~0.04em.

## (c) Spacing
- Section padding: about 120px top; lesson full-bleed 835px tall split 50/50; info 70/110; instructor 160/130; blog bottom 170. Container 1290 (inner x 75–1365), 3-column strength row 430 each with 1px vertical hairline dividers; list gutters 70px. Header height ~100px overlay, logo centred.

## (d) Radius / border / shadow
- Pill CTA radius 30px (button 162×43), outline pills radius 50px 1px border #465B4E; hero image = arch (radius top 50% of width, 0 bottom, bleeds off the bottom of the first screen); other photos radius 0; round 50% icon thumbs; no shadows. Dividers 1px #BBC6B9-ish.

## (e) Imagery
- IMAGERY: photo. Style: soft daylight documentary, high-key, warm white, mirrors and green plants, bodies in neutral white/black clothes; one abstract close-up (hand mudra) desaturated to greige and tinted as full-bleed band.
- Hero: arch-window photo, 851×(≥700) at x 295–1146 (59% width), top 205px, ratio ~1:1.1 visible, bleeds below fold; headline overlaps its upper-left shoulder and right shoulder.
- Lesson: portrait photo 388×503 (ratio 0.77, radius 0) right half, inset ~165px from the 50% line.
- Strength/instructor thumbs 178×235 (3:4), radius 0; blog thumbs 150 round (clip mask via data-scroll-trigger="mask").
- Full-bleed tinted band ~1440×690 with huge headline repeated at its bottom edge (parallax).

## (f) Decoration
- Asanoha (hemp-leaf) geometric line pattern in hero corners and on sage panel, ~120px cells, line colour white at ~35% opacity.
- Thin line icons (lotus, sunburst, rings) 65px above each strength column; hairline vertical dividers; underline under the JP statement lines; double-line hamburger (2 hairlines 80×2, offset) top-right.
- Circular instagram icon, calendar glyph in CTA.

## (g) Motion
- Reveal: [data-scroll-trigger] observed with IntersectionObserver rootMargin "0px 0px -20% 0px", threshold 0; initial opacity 0 + translateY 20–72px (proportional to block height); transition opacity+transform 1s cubic-bezier(0.165,0.84,0.44,1) (easeOutQuart-ish "ease-out-quart"). Strength items stagger by row (same class, equal start). Mask trigger on circular thumbs.
- Parallax/scrub: GSAP ScrollTrigger (ease none, scrub) on the tinted full-bleed band and hero arch photo (moves slower than text); Lenis smooth scroll (lerp ~0.1).
- Page-load: GSAP expo.out / Power4.easeOut 0.6–1.2s for headline character reveal.
