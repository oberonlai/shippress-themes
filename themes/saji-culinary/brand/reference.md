# Saji Culinary School — reference (draft)
Reference: https://menma.jp/ (food-company site collected on S5-Style). No secondary.
Imagery: photo (documentary, warm candid). Screens: ref/menma-first.png, ref/scroll-menma-before-unknown.png, ref/scroll-menma-after-cards.png, ref/menma-news.png.
Candidates: T1 full-bleed photo inside a fixed thin frame with four round corner stamps; T2 left stacked nav + vertical-set headline on the photo; T3 oversized tracked section word with a circled seal overlapping its last letter beside a round portrait; supporting: 3-up hairline-ruled cards with oval outline arrows.
Tokens: reference-tokens.md. Final mapping: see table below and design-spec.md.

## Reference → final theme (final theme mapping)
| menma.jp element | Saji Culinary School (design-spec.md) |
|---|---|
| 8 px red fixed page frame | T1: 8 px `#1E2C30` fixed frame on every template (4 px on mobile) |
| Four ø32 corner stamps with one hanzi each | T1: four ø32 ink stamps, brick ring, roman numerals I–IV = the four terms; current term stamp turns brick on Programmes |
| Full-bleed candid photo of a person tasting in an eatery | KV: H1 full-bleed photo of students plating at a steel pass, instructor lifting a tasting spoon; `sp-parallax` 8% |
| Vertical handwritten two-line tagline, right quarter | T2: vertical Newsreader headline "Cooks are made / at the pass." (≥782 px); horizontal on mobile |
| Stacked logo lockup + six stacked links + outline shop pill, left | T2: spoon lockup "Saji / CULINARY SCHOOL · EST. 2011", seven stacked links, outline "Apply" pill |
| Red filled nav pills after scroll (47 px, radius 9999) | T2: ink filled pills 47 px after the hero and on inner pages (IntersectionObserver class switch) |
| Bottom-right "MODE CHANGE" pill | Its slot carries the row's timeline line: 1 px rule with five ticks 06:30 · 08:00 · 10:45 · 11:30 · 14:00 → 15:00 |
| Giant tracked green word + red tracked subtitle + ø260 halftone portrait | T3: Newsreader 600 caps word (max 6.5rem) in ink + brick italic subtitle + ø260 CSS halftone disc with brick lower band (home blocks 2, 6; 8 inner pages) |
| ø120 circled seal ""new" hanzi" over the last letter of NEWS | T3 seal: ø120 1 px brick circle with spoon mark (or "new" on Notices) overlapping the last letter |
| NEWS list: date, outline pill tag, title, oval arrow, hairline rows | Home block 9 + Notices templates, same structure |
| 3-up product grid with 1 px red rules, 1:1 product shots, oval arrows | Ruled 4-up term grid (D1–D4 dishes 1:1 on white) and 3-up graduate grid, 1 px brick rules, 50×24 oval arrows |
| Colours #DA0000 / #EFE8DB / #F9F7F5 / #262629 | #1E2C30 (row ink, frame role) + #A8432F (accent role) / #D9E0E0 (no cream) / #F6F5F2 / #262629 |
| GSAP fade-up stagger .25, per-char rise, pinned hero | sp-stagger + sp-reveal--up (.5 s, .25 s step), word sp-reveal--up (.6 s), sp-parallax on hero and S1 band |
