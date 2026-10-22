# Reference sites (S5-Style, education / healthcare category) (成品對應 filled from design-spec.md)
Index page: https://www.s5-style.com/category/education-healthcare/ (not used by earlier themes; duplicate check on themes-repo reference.md files done).

| Site | Role | Screens |
|---|---|---|
| https://hta-program.jp/ (HTA education programme) | main: structure, palette relationship, hero, cards, scroll | ref/hta-first.png, ref/hta-full.png, ref/scroll-hta-*.png |
| https://school.dhw.co.jp/p/honka_reframe (Digital Hollywood class page) | secondary: giant title tiles + staggered reveal only (palette dark purple, 67% saturated, not borrowed) | ref/dhw-first.png, ref/dhw-full.png |

## Signature candidates (shape / composition / position) and our counterpart
| # | Reference technique | Ours (成品) |
|---|---|---|
| H1 | Vertical headline in 3 pill-less chips (pale #F5F6F7 paper strips, one per phrase, glyphs in saturated blue), standing in the left third over a quiet ground, character art on the right standing on the fold || T1 (home hero + every inner page head): three horizontal stepped strips #F6F7F8, Libre Baskerville 700 accent #4E7A93, 5.25rem; documentary photo P01 standing on the fold right; `[ Courses ]` bracket list; mobile in flow, no vertical text |
| H2 | Course card 400×657 r10, white 1px line, grey title band on top, square art below, number tab 110×80 in ground colour biting the top-right edge; three cards descend 40px each || T2 (home course ladder; Courses, Instructors, Stories, How it works, lesson-player mini tabs): 400-wide cards r10, 1px white, #F6F7F8 band, square photo, 110×80 ground-colour tab, 0/40/80px ladder |
| H3 | Three 367×530 cards fanned with rotations +5° / −7° / +16°, overlapping, front/back images || T3 (home 'Inside the lesson player'; How it works; About): three photo cards +5° / −7° / +16° overlapping, paper frame 10px, % geometry, overflow clipped |
| H4 | Tone-on-tone 200px ghost word behind the section, bleeding off the edges; dashed "Scroll Next" ring bottom-left; plain 7-link text nav with bracket label on the hero || Supporting system: ghost words certify/learn/support 12.5rem #F6F7F8; dashed Scroll Next ring 108px in hero; `{ … }` bracket labels 11px on every section; giant 7.5rem accent 'Courses' title |
| D1 | Giant display title built from letter tiles that slide in one by one (100ms steps) || Not used (no hero reveal; would compete with T1). Only its stagger idea informs sp-stagger timing |
| D2 | Pale chip + bright text vertical stripes; dot + small heading + paragraph captions in the corners || Not used |

## Palette (see reference-tokens.md for shares)
Ground #E8ECEF · surface #F5F6F7 · ink #001F2D · muted #7F8E96 · main #0399E0 (small areas) · tint #E6F5FC. Ours (成品): ground #E9EDF0 · surface #F6F7F8 · ink #12222D · muted #6E7F8A · accent 縹 #4E7A93 (row-mandated, ~4%) · tint #DCE7EE.

## Scroll effects found
Fade-up 1.1s .23,1,.32,1, 15px, 140ms stagger; clip-path mask reveal 1.2s .86,0,.07,1, 220ms stagger; Lenis smooth scroll; looping text slider; flip/rotate cards (see reference-tokens.md (g)). DHW: letter tiles 2s .14,1,.34,1 100ms stagger; section fade-in 3s.

成品對應 (scroll): sp-stagger + sp-reveal--up (1.1s, 15px, .23,1,.32,1) on ladders, instructor and story rows; sp-reveal--wipe (1.2s, .86,0,.07,1) on section titles; sp-marquee on the home course-name band. Lenis not used.
