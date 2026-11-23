# Reference notes ("our counterpart" column filled at spec; binding detail in design-spec.md)
Primary reference: https://www.o-hara.ac.jp/ (adult-learning college group; course pages lead with adults in a classroom and a plain account of who a course is for).
Screens: ref/ohara-first.png, ref/scroll-ohara-cards.png, ref/scroll-ohara-about-ribbons.png, ref/scroll-ohara-news.png. Tokens: reference-tokens.md.
IMAGERY: photo (documentary, high-key daylight).
## Signature candidates
| # | Reference technique | Our counterpart (filled at build) |
|---|---|---|
| T1 | Grain-stippled diagonal ribbons fading to transparent, sliding across the hero and the About band | Two 150px 45° grained ribbons (#0E3684/#4766B3 to transparent, multiply) over P01's top-left and down the hero's right edge, slide-in 1.5s cubic-bezier(.83,0,.17,1) delays 0/.3s; two 190px ribbons from the top edge of the H5 "Where interpreters work" band; one in H10; ribbon A on the About, Placements, Stories, Taster evenings and Contact heroes |
| T2 | White caption panel overlapping a photo's lower-left, hanging below, with a gradient corner-triangle arrow | H2 "Who the course is for" 2x2 grid at 900px: photo 422x260 r16, panel 342 wide inset 40, overlap 72, 40px lilac-to-blue triangle; large T2 quote card in H3; triangles on the H4 week strip and H5 setting cards; H6 parallax caption; on Courses, Teaching week, Placements, Tutors, Stories, Fees and About |
| T3 | Hero-foot link grid: white cells, 1px ink border, 7px navy stub, arrow, fill on hover | Hero info bar: 4x2 route cells (five courses, teaching week, taster evenings, fees and entry), 1px #090909, 7px #0E3684 stub, hover fill 0.3s; cells end the H7 graduate rows and H10; a jump grid as the footer of every inner-page hero |
| T4 | Gradient pill CTA with trailing arrow | S1 pill 64px high, #0E3684 to #4766B3 to #A9A8D0, white label and arrow: "Come to a taster evening" in H1, H5, H10 and the inner-page main CTA |

## Key visual (our counterpart)
Reference: a daylit adult student by a big window, grained ribbons, serif statement, eight-link grid on a blue floor. Ours: P01, Noor (Deaf tutor) with Tomasz and Adaeze signing at the long table, closed notebook in afternoon light, photo left 55% with ribbon A, serif statement beside it, eight-route info bar on a pale aqua floor; photo settle 1.06 to 1 over 5.5s and sp-parallax 6%.
