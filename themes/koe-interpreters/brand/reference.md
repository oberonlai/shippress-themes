# Reference notes: Koe Interpreters (draft; "our counterpart" column to be filled in during implementation)
Primary: https://irep.inc/jp/ (a bilingual Japan/US marketing agency; S5-Style gallery entry).
Secondary: https://www.rgf-professional.jp/ (a bilingual-talent staffing site; S5-Style gallery entry).
Why: both sell bridging two languages and markets. Irep gives the diagonal slanted-photo split, the pinned hero with a sheet that slides over it, and the horizontal marquee strip. RGF gives the quiet white intro statement that fills line by line and the field of small photographs that converges into a few large ones.
Screenshots: ref/irep-first.png, ref/irep-scroll-1000.png, ref/irep-scroll-2200.png, ref/rgf-first.png, ref/rgf-scroll-1000.png, ref/rgf-scroll-2200.png, ref/rgf-scroll-3600.png.

## Structure of the primary (top to bottom)
1. Pinned full-bleed photo slideshow with a three-line huge headline, a sub-line with a wave glyph, transparent header with a language switch pill and a green CTA pill.
2. About: a gradient ground (teal to amber) holding a short bilingual text column at the left, a "more" pill, a 5 + 4 wall of white credential cards, and a slanted column of photo cards entering from the right.
3. A horizontal marquee strip (headline text and inline photo capsules) at the seam where a white rounded-top sheet starts.
4. White sheet: a centred three-line gradient-word statement, a pill link, then service cards.
5. Works strip, news rows, a map band, a CTA band with a second marquee, footer.

## Signature candidates (picked: T1, T2, T3 below)
- T1. Diagonal photo columns: three tall columns of cards rotated about -11deg, bleeding off the right edge, each column offset and drifting at a different speed (irep About).
- T2. Pinned hero with a rounded-top sheet sliding over it, with a one-line horizontal marquee of phrases and capsule photos at the seam (irep first scroll).
- T3. Tilted white "pair cards" (credential cards on a gradient ground), 160x255 with tiny alternate rotation (irep partner cards).
- Not picked: RGF line-fill intro statement (used as a motion in block 2); RGF converging photo field (collage, forbidden by the quality rules).

## Scroll effects
See stage-a.md table. Reference uses Swiper, IntersectionObserver and CSS keyframes (irep); Lenis smooth scroll and a JS line-fill (RGF). No GSAP.
