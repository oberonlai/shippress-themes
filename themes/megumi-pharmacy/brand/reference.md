# Reference — Megumi Pharmacy (draft, stage 1 research; "Ours" columns filled in design stage)

Only reference (80% similarity target): **R1 = Itoh Kampo Pharmaceutical, https://www.itohkampo.co.jp/** — S5-Style category 学校･教育･医療･福祉 / 美容･健康. Not used by earlier themes (checked against themes/*/brand/reference.md). Measurements: `reference-tokens.md`. Screens: `ref/itoh-first.png`, `ref/itoh-sheet.png`, `ref/scroll-itoh-*.png`. Candidates rejected: fukushi.gifu.jp and recruit.haruokakai.or.jp (site firewall blocked our headless browser; not bypassed), southern-hills.ed.jp (same visual family as Kaiten Skills).

| # | Signature technique (R1) | Shape / composition / position | Ours (fill later) |
|---|---|---|---|
| T1 | Fixed full-bleed photograph as the page's backdrop; hero copy (3 lines, white, left, vertically centred, wide tracking) rises in line by line; scrolling content (intro text, then white sections) slides over the pinned photo | photo `position:fixed` 100dvh; intro text 548px column centred over it, white, 1px white outline button | |
| T2 | Portrait link cards with the label sitting inside the image bottom-left, hover zoom | 3 cards 452×589 (≈0.77), radius 7.5, gap ~40 | |
| T3 | Numbered 01–05 index rows with hairlines and tiny round arrow pills beside one tall portrait photo whose neighbours peek at the edges | rows 78px, photo 338×450 radius 7.5 at right 61% | |
| T4 | One rounded band (radius 37.5) inset 15px from viewport edges holding a magazine block; white notched panel inside | band 1410×811 | (not used: saturated yellow) |

Palette (R1): ground `#FFFFFF`, text `#383736`, panel `#F4F4F4`, accent `#79B121` (≈1–2%), band `#F6BB37` (not borrowed). First-screen saturated pixels ≈1%. Ours: low-chroma ground, `#8A7070` accent only on small areas.

Scroll: IntersectionObserver fade (1s, cubic-bezier(.33,1,.68,1), 14px up), per-line hero rise with skew (1.2s spring), fixed backdrop. See `ref/scroll-itoh-*.png`.
