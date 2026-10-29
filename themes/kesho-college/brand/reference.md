# Reference (stage 1 spec filled the "Ours" column; see design-spec.md)
Main: **YOIKU** https://yoiku-salon.com/ (S5-Style #8997, hair salon, Utsunomiya). Not used by earlier themes (grep of all reference.md). Measurements: `reference-tokens.md`. Screenshots: `ref/yoiku-s1.png` (first screen), `yoiku-s1-load.png` (load state), `yoiku-s2/s3/s4.png`, `ref/scroll-*.png`.
Borrow structure, technique, colour relationships, motion values and the key-visual concept; no images, copy or logo.
## Signature techniques (candidates)
| # | Technique | Description | Ours |
|---|---|---|---|
| T1 | Three tall 2:3 photo panels edge to edge, slowly drifting left | 600×900 each, no gap, no radius, first panel cut by left edge, 200s linear ticker | Home hero: 4 high-key 2:3 photos k-01..k-04 (shears lesson, bob, makeup, blow-dry), flush, 0 radius, first cut by left edge, `sp-marquee` ≈42px/s (58s/group); inner heroes: static 3-panel strip |
| T2 | Giant display word anchored to bottom edge of first screen | 207px/0.9 two-line caps, clipped by viewport bottom, overlapping panels, accent yellow | "LEARN / BY HAND" Cormorant Garamond 700 13rem lh .9 caps, accent `#D9B6CF`, bottom 32% clipped; inner page titles same treatment at 9rem; Instructors surnames clipped by portraits |
| T3 | Centred concept block on ground + wide photo with oversized caption overlapping photo's bottom edge | 1100px photo, 90px caps caption −120px overlap, small accent "VIEW MORE →" link | Home: "Who the intake is for" + k-05 1100px 16:10 (sp-parallax 10%) with "A Training Day" 5.625rem caption −120px + "SEE THE DAY →"; also About, Training Day, Courses, Student Salon, Visit |
| T4 | Square 480px tiles with title inside, 2–3 across | news/blog | Home courses (k-09..k-11), Courses page (6), Journal index; hover scale 1.1 .3s (supporting) |
## Colour (first-screen saturated share 10.6%, all in headline)
Ground `#070707` / text `#FFFFFF` / accent `#FAB128` / photo tones pastel blue `#8FA8C8`, sage `#A8BFA0`. Ratio ground 90, white 8, accent 2.
## First-screen layout
Logo top-left, hamburger+IG top-right, 3 photo panels, giant headline bottom-left, nothing else.
## Scroll effects
WOW.js fadeInUp 1s ease, offset 200, ~20–30px; CSS ticker marquee; hero headline offset; no parallax, no sticky.

## Ours (colour)
Ground `#120E12` (token `#070707` +4% L, mauve tint) / text `#FFFFFF` / accent `#D9B6CF` replaces `#FAB128` (row grape-mauve, quiet; YOIKU's own logo tint is mauve) / deep mauve `#6B5A68` for hover. Ratio 88/8/2.
