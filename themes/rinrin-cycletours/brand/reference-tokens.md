# Reference tokens (measured with getComputedStyle at 1440x900, 2026-11-20)

Primary reference: https://matsukawaura-guide.com/ (local guide collective of a coastal lagoon town). Secondary: https://mikurasima-portal.jp/ (island portal). Screens in `ref/`. Only values and descriptions are recorded; no assets, text or logos are copied.

## (a) Colour (area share on the first screen and the page)
| Role | Hex | Share |
|---|---|---|
| Photo ground (teal-green harbour, grey cloud) | photographic, mean low saturation | ~88% of first screen |
| Page ground (pale mist) | #E6EEEF | ~45% of page (about, member, scaler, access, footer) |
| Second ground (sky blue) | #C4DDE7 | ~28% of page (experience rows block) |
| White | #FFFFFF | ~15% (first sections, buttons on photo) |
| Ink | #000000 / #2D2D2D (body), #425658 (muted slate) | text |
| Accent | none: one muted slate #425658 and photo colour only | <2% |
First-screen saturated share (S > 0.5, V > 0.25, sampled from `ref/matsu-first.png`): **12.3%** (teal hull stripes and orange fenders). Secondary first screen (`ref/mikura-strips.png`) measures 38.6%, so only its structure is borrowed, never its sky-blue saturation.

## (b) Type
- Body: Zen Kaku Gothic New 16px / 400, line-height 2 (32px), letter-spacing normal. Headings: Zen Old Mincho (serif) 40px / 400, line-height 1.7 (68px) in section heads; 50px in the "About" lockup; 16px catch line with 1.6px tracking, line-height 1.8.
- Latin labels: "(About)", "(MOVIE)", "(Stay Plan)" in parentheses, 13-14px, tracking ~0.1em; Lato / Sora as the Latin face.
- Vertical writing (writing-mode: vertical-rl) used for the hero headline (~6rem), the experience-row titles (~3rem) and body columns (~0.9rem).
- All case: sentence case; no uppercase blocks.

## (c) Spacing
- Container: full width with 96% (about 1382px) for the scaler band; text columns start at x 580 (40%) on 1440; photos flush left (x 0) or right (x 1100).
- Section padding: 15rem (240px) top/bottom in the scaler band; access 130px / 90px; sections 800-1770px tall.
- Row gap in the experience block: 725px pitch for 625px photos (100px gap).
- Header: logo top-left at 58,30; menu groups at x 320 / 690 / 1060; scrolled state is a pill 200x34 at top-right (x 1220, y 20).

## (d) Corners, borders, shadow
- Photos: square corners (0 radius) everywhere. Buttons: 1px black outline, 999px radius pill (300x60 "see all"), arrow 14px at the right end; circle arrow button 80px outline.
- No shadows, no cards. Scaler frame inset 29px from the viewport.

## (e) Imagery - IMAGERY: photo
- Documentary real photography: high-angle harbour with a dense row of moored boats; people close-up holding a crab; a portrait of a man in a headband; bridge over a river mouth; shellfish in a basket by a sink; guests on a quay. Natural light, slightly cool, no retouching, no cut-outs.
- Ratios: hero 16:10 full-bleed; about pair 0.8:1 (440x545, flush left) and 0.97:1 (340x300, flush right low); bridge 1.15:1 square-ish centred 680x590; scaler 1.73:1 inset 1382x800; experience rows 1.47:1 (920x625) left with vertical text at the right; stay plan full-bleed 1.83:1 (1728x944, scaled and cropped).
- Photos overlap nothing; they sit on blurred or flat ground. Parallax images are scaled 1.2 and moved on X or Y.

## (f) Decoration
- Parenthesised English labels "(About)" above serif headings; headings broken in 3 lines with each line indented (0 / 70 / 0 px) and a thin underline under each line.
- Ghost giant character (about 40rem tall, white at ~35%) cropped at the left edge of the stay plan band.
- Circle outline arrow 80px; pill "Menu" outline with hamburger icon.
- Vertical Latin sub-label rotated next to the vertical title.

## (g) Motion
- Smooth scroll: Lenis (autoRaf, defaults). GSAP ScrollTrigger scrub 2 for image/text parallax (xPercent or yPercent from data-start to data-end, start "top 80%", end "bottom top", ease none), images scaled 1.2.
- `fadein` rows: opacity/translate on enter (class `item__img fadein`).
- Scaler band: the framed image scales as the section pins (see `ref/scroll-matsu-scaler-*.png`).
- Link/image hover: filter and transform 0.5s ease; one easing cubic-bezier(0.23, 1, 0.32, 1).
