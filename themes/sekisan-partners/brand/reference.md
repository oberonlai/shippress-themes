# Reference (draft) — Sekisan Partners
Source: Pacific Consultants https://www.pacific.co.jp/ (S5-Style entry, construction consultancy; not previously used in themes-repo). Screenshots: ref/pc-first.png, pc-s0…s4.png, scroll-section-before/after.png. Numbers: reference-tokens.md.
IMAGERY: photo (hero = backlit sea still/video, mid-page 16:9 aerials).
## Signature techniques (candidates)
1. Full-bleed, desaturated steel-blue photograph as the whole first screen with a small white square mark + serif wordmark top-left.
2. Numbered section index rows ("01 ABOUT … / 02 COMPANY …") in huge Poppins caps with a coloured numeral, divided by 1px hairlines on #F5F5F5.
3. Square-cornered 3px-ink-bordered wide button with arrow at right; 2px white outline variant on photos.
4. Section-snap story: each section is one viewport; 6-dot pagination right edge; a photo stays fixed behind panels sliding over.
## Palette
Ink #131416 · accent blue #004896 · teal #36939C · ground #FFFFFF/#F5F5F5 · coral spot #F07A73. First-screen saturation ≈0%.
## 成品對應 (our mapping; binding details in design-spec.md)
| Reference element (pacific.co.jp) | Sekisan Partners (成品對應) | Where |
|---|---|---|
| Full-bleed backlit sea photo, silhouette, video still | Full-bleed high-key photo H01: marked-up cost plan, hand with pencil, scale ruler, hard hat; sp-parallax 8% | home hero (KV 1) |
| White square mark + two-line serif wordmark top-left | 64 px #2F3A34 square + two-line "Sekisan / Partners" Albert Sans 600 (sans direction) | header, all pages |
| 84 px black left rail (circle, languages, vertical wordmark) | 84 px #2F3A34 fixed rail (T1); 56 px top bar < 1024 px | all pages |
| 2 px white outline "View full movie" bottom-right | 2 px ink outline "Request a proposal" 259×41 bottom-right | hero; T3 elsewhere |
| "Scroll" + 1 px line bottom-centre | same, ink, line-draw loop | hero |
| 6-dot vertical pagination right edge | 6 dots = Gap/Estimate/Handover/Fees/Cases/Request, CSS view-timeline | home, ≥ 1024 px |
| "01 ABOUT / 02 COMPANY" caps rows, coloured numerals, hairlines on #F5F5F5 | T2 index rows on #F3F5F3, numerals #004896/#36939C | home block 3; About, Method, Cases, Request, Fees |
| "News"/"Magazine" 90 px heading, first letter in accent | .sk-head 5.625rem, first letter #36939C/#004896/#F07A73 | every home block head and page head |
| Square 3 px ink "MORE →" button, 71 px | T3 square button, same geometry, one label "Request a proposal" | home blocks 5/6/9, footer, all pages |
| News panel scrolling over a fixed night photo | gap panel (hairline rows) over parallax H02 portrait | home block 2 |
| 16:9 full-width photo (hand placing tokens over aerial) | 16:9 H03 hands measuring a plan, sp-reveal--wipe | home block 4; Method |
| 3 × 376 px project cards with one coral tile, teal chip | 3 handover cards (H04, H05, coral risk-register tile), teal chips | home block 5 |
| Fixed aerial photo / CG over faded aerial | 21:9 parallax H09 band with overlapping 3-case panel | home block 7; About |
| Dark #131416 magazine block, coral "M" | dark #2F3A34 request block, coral "R" | home block 9 |
| Palette #131416 / #FFFFFF / #F5F5F5 / #004896 / #36939C / #F07A73 | #2F3A34 (row main) / #FFFFFF / #F3F5F3 / #004896 / #36939C / #F07A73 | all |
| Section snap (scrollify) + child transitions 0.8s cubic-bezier(0,.4,.2,1) | sp-reveal--up + sp-stagger 0.8s same easing; no snap (rule) | home blocks 2–9 |
