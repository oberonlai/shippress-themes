# Reference (Seiwa Furniture; product column filled from design-spec.md)

| # | Site | Category | Role |
|---|---|---|---|
| R1 | https://stagelab.inkdom.jp/ (STAGE Lab — interior renovation brand, S5-Style gallery /11827/) | interior / fit-out, closest to office furniture for architects and contractors | main: structure, techniques, palette relationships, key visual concept, tokens (see reference-tokens.md) |
Rejected: figaro-vis.jp (full-bleed saturated gradient video, fails ≤15 % saturated); urbanhome-tt.com (high-chroma campaign colours, busy). Not previously used in themes-repo reference.md.

## Signature technique candidates (R1)
| # | Technique | Shape / composition / position | 成品對應 (Seiwa Furniture) |
|---|---|---|---|
| A | **Staggered photo trio over flat pale panels** | first screen: headline top-left, then a 782×448 landscape photo offset right of centre, y 481 straddling the fold, plus a tall 400×692 portrait bleeding off the right edge with its top-left corner cut as a quarter-ellipse; flat #DEE8E3 slanted/pill panels sit behind both, partly off-canvas || T1 — home first screen `front-kv`: serif headline top-left at x 80 / y 274; `kv-chair-line.webp` (assembler fitting a fabric panel to a chair) 54vw × 1.75:1 at 14.4vw / y 481 cut by the fold; `kv-swatch-hand.webp` 27.8vw × 0.58:1 bleeding right from y 136 with `border-top-left-radius: 65% 38%`; flat `#DCE5EA` trapezoid + pill, translucent `#5E727C` pill, our line SVGs on the corners. Smaller version on every inner page head. |
| B | **Outlined white card, photo flush right half** | 1px #222 top+left border (bottom open), white fill on #F4F8F6 band, 40px padding, text left 50 % with 4×20px sage bar kicker and 40px bold title, photo fills right 50 % to card edge; cards stack, hover border → sage || T2 — home Products (3 cards: seating, desking, acoustic), featured project card, contact card; inner Products, Specification, Projects, Price list, Contact. 86.94vw card to the right viewport edge, 1px `#222` top+left, white on `#F3F6F8`, 50/50 with flush photo, 4×20 `#5E727C` kicker bar, 2.5rem Source Serif 4 title, our own line drawing on the top edge; hover border `#8FA9B6` .6s. |
| C | **Scattered portrait photos with line-art overlays + faint floor-plan drawing** | three portrait photos (240×380, 264×316, 284×398) at different heights around a centred copy block, a 1px line floor-plan bleeding off the left, tiny black-line figures with sage spot fill on photo corners || T3 — home About: P3/P4/P5 at 264×316 (quarter-ellipse), 284×398 (hexagon clip on img), 240×380 at three heights round a centred 560px text; our 1px `#C4CED4` office floor-plan SVG 830×376 bleeding off the left. Also About, Factory, Showroom, Team. |
| D | **Parallax photos with expo smooth scroll** | every large photo moves inside its frame (scrub 1, Δ≈60px), mixed sizes in a horizontal photo row || `sp-parallax`: KV wide 8 % / portrait 12 % (mobile 5/7 %), home showroom photo 10 %, every inner head; plus `sp-reveal--up` + `sp-stagger` (.8s `cubic-bezier(.32,.95,.6,1)`, 24px) on cards and scatter, `sp-count` on the metrics ledger. No Lenis. |

Colour roles (R1 → ours): ground white ≈55 %, mist band #F4F8F6 ≈35 %, pale sage panel #DEE8E3 ≈7 %, sage #677771 ≈2 %, ink #222 text; ours: ground off-white, mist = cool blue-grey tint, panel = pale slate, accent #5E727C (palette hex) small, ink #1F272B.
Scroll effects: see stage-a.md「捲動手法候選」; tokens: reference-tokens.md. Screenshots: ref/stage-first.png, ref/scroll-stagelab-*.png.

## Colour mapping (成品對應)
| role | R1 hex | share | Seiwa hex | note |
|---|---|---|---|---|
| ground | #FFFFFF | ≈55 % | #FFFFFF | same |
| mist band | #F4F8F6 | ≈35 % | #F3F6F8 | hue → blue-grey, same lightness |
| pale panel | #DEE8E3 | ≈4–7 % | #DCE5EA | same |
| accent | #677771 | <2 % | #5E727C | row hex 藍鼠; R1 sage too close to Hodoki Clinic's #6E847C |
| hover / spot | #90B4A6 | hover | #8FA9B6 | same |
| ink | #222222 | text | #222222 | same |
First-screen saturated pixels: R1 4.7 %; Seiwa cap 15 % (row), target ≤ 5 %; measured value goes here and in gate.md after the build.

## Key visual (成品對應)
R1 worker painting a wall + showroom sample wall → Seiwa assembler fitting a fabric panel to an office chair on the line + specifier's hand laying a swatch on a chair arm in the showroom; same staggered composition, flat panels, line drawings on corners, load fade and two-speed photo parallax. See design-spec.md §2.
