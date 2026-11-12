# Reference ("our implementation" column filled in stage 1 spec; details in design-spec.md)
Reference: https://www.mhi.com/ — the aviation "Aircraft Aftermarket Service" page (technicians at an airframe in a wide hangar, headline above) and the home "magazine" hero (tilted photo field on a slate band). Chosen because the plan names it for this theme.
## What we borrow
| # | Reference trait | Evidence | Our implementation |
|---|---|---|---|
| 1 | Documentary hangar photo, sharp centre with blurred side bands, headline directly above/over | `ref/mhi-mro-0.png` | T1 focus-pull: home hero img-01 (instructor steadying a cowling, student checking engine mounts), sharp window 64% + blurred stretched 18% flanks, H1 over left-middle, sp-parallax 8%; every inner pagehead uses H1 + bracket label + rule + 2.34:1 focus-pull photo |
| 2 | Isometric field of tiles with rotated pill tags on a slate band | `ref/mhi-home-0.png`, `ref/scroll-mhi-before.png` | T2 module field: home block 4, 8 photo tiles (img-03…10) on one plane rotateX(52deg) rotateZ(-34deg), white pills, one dark pill ("Human factors"), wash #E6ECEE over slate #3C5D69; also Programme, Facilities, Admissions, Graduates; two rotated pills on the hero photo |
| 3 | Slate band + white news card with red underlined arrow | `ref/mhi-home-0.png` | T3 cohort strip: slate band from viewport x=0 to 62% straddling the hero foot, `NEXT INTAKE ›` + white card (img-02 thumb, red chevron underline); intake strip on home fees block; on About, Programme, Admissions, Fees, Contact, Journal |
| 4 | Short 40×2 black rule under uppercase H1; red chevron bullet links in two columns | `ref/mhi-mro-0.png` | Fraunces uppercase H1/H2 + `[ LABEL ]` + 40×2 rule site-wide (white over the hero photo); `• Powerplant ›` two-column module links in home intro and each inner page "related" row, chevron #E31F26 |
| 5 | Grey 5-column sitemap footer, 48px black back-to-top square | `ref/mhi-mro-900.png` | #E5E5E5 footer, padding 100px 0 36px, 5 columns at 268px (College, Programme, Admissions, Journal, Visit), 48×48 #14181D back-to-top square |
## Colour roles
Ground #FFFFFF, text #000000 (ours #14181D), slate #3C5D69 / #476672, pale wash #E6ECEE, quiet grey #E5E5E5, accent red #E31F26 (< 0.5%). See reference-tokens.md.
## Scroll behaviour of the reference
Libraries: waypoints (in-view), simpleParallax (photo parallax), slick (slider). Plain product pages are static.
