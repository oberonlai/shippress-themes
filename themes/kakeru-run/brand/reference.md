# Reference (draft; Kakeru Run, running shoe shop)
Reference: https://4kake.com/ (S5-Style, objects shop). Secondary: https://amprem.jp/ (colour relation only).
Product-site category on S5-Style. IMAGERY = photo.

## What we borrow from the main reference
1. Split header in three equal cells (tagline + icons | wordmark | nav + cart) over a ruled grid with outer rails.
2. Hexagon-style outline around the hero stage, drawn by long diagonal hairlines that start in the rail cells.
3. Products shown as 1:1 specimens on coloured seamless paper, filling their cells edge to edge, with empty breathing rows between.
4. Object info cell: small caps index label, bold name, one outline pill, a thin diagonal slash in the rail cell.
5. Hairlines that draw themselves in on scroll (scaleX / scaleY, 0.9 s), cell content rising 24 px.
## Colour relation
Ground white, ink #111, photo stage cool grey; one deep brown ground band from the secondary (Amprem relation) mapped to #6B5C4C family. Accent pills small and quiet.
## Our mapping (成品對應; binding detail in design-spec.md)
| Reference element | Ours | Where |
|---|---|---|
| Ruled grid with outer rails, 3 equal cells (rails max(20px, 8.9vw)) | same grid, 1 px #1A1714 hairlines on every cell | every page, every row (T1) |
| Three-cell split header (tagline + icons / glyph / nav + cart) | tagline "Shoes fitted to how you land" + map/calendar icons / "Kakeru Run" wordmark under own KR monogram / Shoes · Lasts · Gait session · Visit; account + cart in right rail | header, all pages |
| Hexagon outline around the hero stage (rail diagonals) | P01 fitter watching a customer on the shop treadmill, bench pair waiting; 1184x666; CSS crossfade P01 > P02 > P03 | home first screen; short hexagon heads on Shoes (P03), Gait session (P08), About (P11) |
| Giant outline brand glyph crossing header into stage | own "KR" stride monogram SVG ~400 px (no letters copied) | home first screen |
| Brand word stacked as rotated letters in the left rail | "K A K E R U" rotated single letters, desktop only | left rail, all pages >= 782 px |
| Dot pager in an empty ruled row | 3 dots 7 px + "01 / 03" | home row under the stage |
| 1:1 specimen tiles on coloured seamless paper, edge to edge | six house pairs on sage / slate / clay / olive-grey / powder / kraft paper (P04-P06, P13-P15) | home specimens row; Shoes grid; Lasts rows; single product gallery |
| Empty 129 px breathing rows | same, 64 px on mobile, lines draw in (sp-reveal--wipe) | home between photo rows; Shoes grid |
| 2+1 info row: label, bold name, big outline pill, coloured rail slash cell, photo running into the right rail | "LASTS / Four lasts, one fit" + clay pill + clay slash cell + P07; mirrored "SESSION" row with P09 | home; Lasts (4 rows); Gait session; single product; Ordering; Visit |
| Hairlines draw in .9 s cubic-bezier(.77,0,.18,1); content rises 24 px | sp-reveal--wipe on rows; sp-stagger + sp-reveal--up (24 px, .9 s, cubic-bezier(.22,1,.36,1)) | home and inner rows |
| Yellow / red pills and red slash cell | clay #A8745A (quiet palette) | pill and slash cell only |
| Amprem deep brown ground with off-white type | one #6B5C4C band "Order the pair you ran in." + footer, #F4F1EC type | home block 9, footer |
| (none on 4kake) parallax | sp-parallax --sp-par 10% (6% mobile) on P08 gait-lab band | home block 7 |
Screens: ref/fk-first.png, ref/scroll-fk-2600.png, ref/scroll-fk-6500.png, ref/scroll-fk-9000.png, ref/scroll-fk-lines-before.png / -after.png, ref/am-first.png, ref/scroll-am-1800.png.
Tokens: reference-tokens.md.
