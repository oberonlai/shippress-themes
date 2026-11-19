# Reference (our-implementation column filled from brand/design-spec.md)

Primary: https://niwahouzing.com/ (S5-Style, architecture and real estate collection). A design-led house builder: full-bleed finished-interior photographs, serif section words with tiny sub-labels, case rows of mixed-size photos with numbered captions, a filterable works grid, one dark CONTACT button.
Secondary (frame only): https://tjda.com/ (S5-Style, interior furniture collection). An architecture and design studio: a quiet centred statement on white, then a wheel-driven horizontal strip of tall photographs with tiny numbered captions above each column.

Screens: ref/niwa-first.png, ref/niwa-scroll-sheet.png, ref/scroll-niwa-900.png .. 6300.png, ref/tjda-first.png, ref/scroll-tjda-before-wheel.png, ref/scroll-tjda-after-wheel.png.

## Signature candidates (borrow visibly)
| # | Source | Description | Ours |
|---|--------|-------------|------|
| C1 | niwahouzing.com first screen | Full-bleed finished-room photo with the header floating over it, then a white caption strip under the photo: tiny uppercase descriptor left, serif project name + loop-ring right | **T1** home hero: P01 (designer with swatch at fresh plaster, carpenter fitting the last oak shelf) 1440x812 + 88px white strip (H1 descriptor left, "Flat 4, Marlow Street — 62 m²" + #D69090 ring right), 3 CSS slides P01-P03, sp-parallax 8%; short version (1440x560 + strip, H1 right) opens all 10 inner pages |
| C2 | niwahouzing.com Model House | Project title line with arrow, tag and date, then three bottom-aligned photos of different widths and heights and a right-aligned descending numeral caption "3 2 1" | **T2** home CASES case wall (rows A Marlow Street, D Weir Lane): 17.5/23.5/55.5% photos (1:1, 8:11, 3:2), top-aligned, "3 2 1" + numbered caption + size/weeks/budget line; also Cases (4 rows), Process, Studio, posts 1-2 |
| C3 | niwahouzing.com Works | Sticky mini-index at the left with a triangle marker, two-column photo grid with title and month under each | **T3** home WORKS: sticky Flats/Shops index (249px) + 2x431px 3:2 grid with title + month; also Works, Journal and category/tag archives, Materials |
| C4 | niwahouzing.com mask text | Slanted clip-path wipe opening section words | S1 section words (Urbanist 500 caps up to 4.5rem, left, 10px sub-label) opened with sp-reveal--wipe (1.1s top-down, sp-scroll logic) on every home section and inner section words |
| C5 | tjda.com intro + strip | Two-line centred statement that fades in line by line on white; then tall photographs butted edge to edge with tiny numbered captions above | S2 home H5: centred 2-line statement (sp-stagger + reveal--up per line) then three equal 3:4 photos P15-P17 full bleed, gap 0, captions 011-013 above; static (no wheel scroll); also Materials page |

## Palette relation
White ground, near-black ink, grey micro-labels, one dark button; colour comes only from photographs. Ours: ground #FFFFFF / paper #F5F2F0, ink #282828, footer #383838, accent #D69090 (small), see reference-tokens.md.
