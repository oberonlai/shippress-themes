# Reference ("our counterpart" filled from design-spec.md)

Primary reference: https://a-bite-coffee.com/ (a coffee-flavoured baked sweets brand; photo-led, quiet palette, grain texture).
Screens: ref/a-bite-coffee-first.png, ref/scroll-abc-900.png, ref/scroll-abc-2700.png, ref/scroll-abc-4800.png, ref/scroll-abc-full-12500.png, ref/scroll-abc-full-19500.png.
Secondary: none (one reference carries the three signatures).
IMAGERY: photo (macro and hand-held product photography on a seamless paper ground; soft daylight; shallow depth of field).

## Signature techniques (candidates)
| # | Technique | Shape / composition / position | Our counterpart |
|---|---|---|---|
| T1 | Photo-to-paper first screen | Full-bleed photo fills the upper ~65% and dissolves down into the flat paper ground through a vertical gradient; full-width wordmark across the top of the photo; hamburger top-right; photo scales 1.1 while pinned, wordmark and copy travel up || Home hero: H01 film-grain photo (maker levelling a tin at the cold slab, customer in a coat at the glass) melting to #ECE8E8 at 52–84%; pale Fraunces wordmark "Himuro Gelato" 1370 px; split header; "01 — 03" counter; sp-parallax 8%. Inner heads on About, Flavours, Batches, People, Visit at 62vh |
| T2 | Pinned product viewer | Left index with dot on active category; two stacked portrait thumbs (232 x 314); tall 0.65:1 main photo (495 wide); right column: name 34 px, price, bordered spec box with two cells (Coffee Level dot meter / Texture word), full-width filled button; counter "2 — 7" with progress bar bottom-right; items cross-fade with blur and a top-down gradient mask wipe || Home "Churned today": 6-flavour index with dot, thumbs V1/V2 232×314, main V3 495×767, spec box (Sweetness 5-dot meter / Texture), 44 px plum button "Set a tub aside", counter "1 — 6"; Flavours page ×6, Tubs page ×3 |
| T3 | Lit-row statement band | Dark grain ground; three ruled statements (label + 34 px title + short line); the active one white, others 40% opacity; a small photo parks beside the active row and changes with it || Home "How a batch is paced": #2B1F24 grain, B1 left, 3 ruled pace rows with row 02 lit and B2 parked; Batches (5 rows), About (3 rules), People (3 customer stories) |
| supporting | Grain wave footer | Paper blurs into a dark grain-textured wave (about 200 px soft edge) before the footer links | Paper #ECE8E8 melts through a ~200 px blurred wave into #2B1F24 grain footer on every page; Visit band above it uses sp-parallax 10% |
| supporting | Rosette label | Small glyph + light Latin label at the top-left of each section, hairline under it | Own 6-petal frost rosette SVG 20 px + Fraunces 300 1.58rem label + 1 px #B8AAAE hairline on every section of every page |

## Scroll effects (see stage-a.md table)
GSAP ScrollTrigger + Lenis (lerp 0.08); we only record, and rebuild with sp-* classes.
