# Reference notes (our implementation column filled from design-spec.md)

Primary: https://matsukawaura-guide.com/  Secondary: https://mikurasima-portal.jp/
Screens: `ref/matsu-*.png`, `ref/mikura-strips.png`, scroll pairs `ref/scroll-matsu-*.png`. Tokens: `reference-tokens.md`.
IMAGERY: photo (documentary, cool natural light, no illustration).

## Structure observed (primary)
Full-bleed harbour hero with vertical headline lower right and a small catch at the left; overlay link groups instead of a bar, collapsing to an outline "Menu" pill; "About" on a blurred photo ground with a staggered underlined heading and two photos flush to opposite viewport edges; members block; framed inset band with a centred video card; stacked experience rows (photo left, vertical title and body at right, circle arrow); full-bleed stay-plan band with a cropped ghost glyph; access; footer on mist.
Secondary: stacked full-width photo strips, one narrow vertical caption in the centre column, a small right-edge link stack, an inset page frame.

## Signature candidates
| # | Candidate | Source | Our implementation |
|---|---|---|---|
| C1 | Full-bleed aerial quay photo, tall vertical headline at lower right, small catch at left, overlay link groups with arrows | primary hero | H1: home hero `hero-quay` (8 bikes in a diagonal row on the harbour wall, support van, guide adjusting a saddle), vertical Sora 5.25rem headline lower right, 4-line catch left, three overlay link groups, Menu pill; `sp-parallax` 8%. Inner heroes 60svh on 9 pages |
| C2 | Blurred photo ground, 3-line heading with stepped indents and a hairline under each line, text lines at wide leading | primary About | H2: home (About) on blurred `about-guests` ground, 0/70/0 px heading with 1px hairlines, `about-hands` flush left 440x545, `about-guests` flush right 340x350; also About, Grades, Departures, Book, Newsletter |
| C3 | Stacked full-bleed photo strips with a single vertical caption in the centre column and a right-edge link stack | secondary | H3: home block 5, `strip-bikes` + `strip-van` in a 29px inset, vertical caption, 4-link stack; `sp-parallax` 10%. Also Tours, The Harbour Line, Bike Hire, Luggage |
| C4 | Framed inset band whose photo scales while a centred card sits on it | primary scaler | Home block 4 "A riding day": `band-road` 1382x800 in 29px inset, `sp-reveal--zoom`, centred white card with five timed lines, ghost word "coast" |
| C5 | Photo-left row with vertical title and body columns and an 80px circle arrow, on sky ground | primary rows | Tours page: 5 rows, photo 920x625 left, vertical title + spec list right, 80px circle arrow, sky ground |

## Colour relations
Mist #E6EEEF ground, sky #C4DDE7 second ground, black ink, white; photographs carry all the colour. First-screen saturated share 12.3%.

## Scroll effects (see stage-a.md table)
GSAP ScrollTrigger scrub 2 parallax (X/Y), images scaled 1.2; Lenis smooth scroll; fade-in rows; scaler band.
