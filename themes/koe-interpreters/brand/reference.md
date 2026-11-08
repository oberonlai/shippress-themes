# Reference notes: Koe Interpreters (our counterpart filled in at the spec step; binding details in design-spec.md)
Primary: https://irep.inc/jp/ (a bilingual Japan/US marketing agency; S5-Style gallery entry).
Secondary: https://www.rgf-professional.jp/ (a bilingual-talent staffing site; S5-Style gallery entry).
Why: both sell bridging two languages and markets. Irep gives the diagonal slanted-photo split, the pinned hero with a sheet that slides over it, and the horizontal marquee strip. RGF gives the quiet white intro statement that fills line by line and the field of small photographs that converges into a few large ones.
Screenshots: ref/irep-first.png, ref/irep-scroll-1000.png, ref/irep-scroll-2200.png, ref/rgf-first.png, ref/rgf-scroll-1000.png, ref/rgf-scroll-2200.png, ref/rgf-scroll-3600.png.

## Structure of the primary (top to bottom) and our counterpart
| # | Reference (irep) | Our counterpart (Koe) | Spec section |
|---|---|---|---|
| 1 | Pinned full-bleed photo slideshow, three-line huge headline, sub-line with a wave glyph, transparent header with a language pill and a green CTA pill | Hero: full-bleed film-grain photo P01 (interpreter in the booth, speaker on the floor through the glass, colleague cueing) under a -11deg navy scrim; three-line Fraunces H1 "Two rooms, / one calm voice, / in your meeting."; own three-wave glyph + sub-line; transparent header with a five-segment language pill and a green "Request a team" pill; parallax 12% instead of a CSS pin | 2, 3 |
| 2 | About on a teal-to-amber gradient: text column, "more" pill, 5 + 4 white credential cards, slanted column of photo cards at the right | Block 3 "Briefs": the same gradient, text column + outline pill, nine white pair cards 5 + 4 ("EN to JA" etc.), two slanted -11deg photo columns P08, P09; the slanted columns also enter the hero (P02-P05) | 1 (T1, T3), 4 |
| 3 | Marquee of huge words with inline photo capsules at the seam where a white rounded-top sheet starts | Seam strip at the foot of the hero: 4rem white phrases with capsules P06, P07, 24 s; then the white sheet with 40px top corners | 1 (T2), 4 |
| 4 | White sheet: three-line gradient-word statement, pill link, service cards | Block 2: left-aligned three-line statement (last line in the irep gradient), revealed line by line (RGF), two paragraphs, text link; mint arcs | 4 |
| 5 | Works strip, news rows, map band, CTA band with a second marquee, footer | Booth parallax band (P10), meeting-day hour ruler (P11), rates table, ink three-step band, two notes (P12, P13), cover close P14 with a second 16 s marquee, ink footer with mint arc | 4 |

## Signature techniques and our counterpart
| ID | Reference | Our counterpart | Where |
|---|---|---|---|
| T1 | Three columns of photo cards rotated -11deg, offset 90px, bleeding off the right, different drift speeds (irep About) | Same geometry with our booth photos; columns are parallax layers at 4 / 8 / 12% | Home hero + Briefs block; heads of About, Briefs, Meeting day, Rates, Request, Notes, Early access, Thanks |
| T2 | Rounded-top (40px) white sheet over the hero with a capsule marquee at the seam | Same radius and overlap; seam phrases are language pairs and booth words | Home hero seam; every inner page head (static strip) |
| T3 | Nine white 160x255 credential cards, 5 + 4, +-1.5deg, on the gradient | Nine pair cards (language pair + what the booth covers), same size, rotation and gradient | Home Briefs; Briefs, Rates, Early access, Thanks |
| - | RGF line-fill intro statement | sp-stagger + sp-reveal--up per line in block 2 | Home block 2 |
| - | RGF converging photo field | Not used (collage rule) | - |

## Colour counterpart
irep hex kept: ink #0C2336, teal #25535D / #55717D, gradient #25535D > #B6B38F > #F0A040, CTA #58B193 (ink text instead of white for contrast), ground #FFFFFF, mint #E3F1EE. The dove mapping drafted in stage A is dropped (too close to the Kaigi Centre theme); reasons in design-spec.md section 6.

## Scroll effects
See stage-a.md table. Reference uses Swiper, IntersectionObserver and CSS keyframes (irep); Lenis smooth scroll and a JS line-fill (RGF). No GSAP.
