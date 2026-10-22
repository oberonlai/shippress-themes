# Reference sites (S5-Style, education / healthcare category) — DRAFT (成品對應欄 to be filled at implementation)
Index page: https://www.s5-style.com/category/education-healthcare/ (not used by earlier themes; duplicate check on themes-repo reference.md files done).

| Site | Role | Screens |
|---|---|---|
| https://hta-program.jp/ (HTA education programme) | main: structure, palette relationship, hero, cards, scroll | ref/hta-first.png, ref/hta-full.png, ref/scroll-hta-*.png |
| https://school.dhw.co.jp/p/honka_reframe (Digital Hollywood class page) | secondary: giant title tiles + staggered reveal only (palette dark purple, 67% saturated, not borrowed) | ref/dhw-first.png, ref/dhw-full.png |

## Signature candidates (shape / composition / position) and our counterpart
| # | Reference technique | Ours (成品) |
|---|---|---|
| H1 | Vertical headline in 3 pill-less chips (pale #F5F6F7 paper strips, one per phrase, glyphs in saturated blue), standing in the left third over a quiet ground, character art on the right standing on the fold | |
| H2 | Course card 400×657 r10, white 1px line, grey title band on top, square art below, number tab 110×80 in ground colour biting the top-right edge; three cards descend 40px each | |
| H3 | Three 367×530 cards fanned with rotations +5° / −7° / +16°, overlapping, front/back images | |
| H4 | Tone-on-tone 200px ghost word behind the section, bleeding off the edges; dashed "Scroll Next" ring bottom-left; plain 7-link text nav with bracket label on the hero | |
| D1 | Giant display title built from letter tiles that slide in one by one (100ms steps) | |
| D2 | Pale chip + bright text vertical stripes; dot + small heading + paragraph captions in the corners | |

## Palette (see reference-tokens.md for shares)
Ground #E8ECEF · surface #F5F6F7 · ink #001F2D · muted #7F8E96 · main #0399E0 (small areas) · tint #E6F5FC. Ours: ground #E9EDF0, ink #12222D, accent 縹 #4E7A93.

## Scroll effects found
Fade-up 1.1s .23,1,.32,1, 15px, 140ms stagger; clip-path mask reveal 1.2s .86,0,.07,1, 220ms stagger; Lenis smooth scroll; looping text slider; flip/rotate cards (see reference-tokens.md (g)). DHW: letter tiles 2s .14,1,.34,1 100ms stagger; section fade-in 3s.
