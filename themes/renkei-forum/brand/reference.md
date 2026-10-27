# Reference (draft, stage 1) — Renkei Forum
Source: https://www.s5-style.com/ → https://corekara.co.jp/scratch/20260826_conference/ (conference landing page, "event / seminar" category). Not used by any earlier theme (checked against themes-repo reference.md files). Measured values: `reference-tokens.md`. Screenshots: `ref/`.

IMAGERY: photo

## Signature candidates (reference → ours; "Ours" column left empty until design-spec)
| # | Reference signature | Shape / composition / position | Ours |
|---|---|---|---|
| T1 | Hero = title band on top (201px, accent colour) over a dark field; one monumental emblem object centred (612px wide) flanked by ghosted giant letters and a thin ellipse outline; marquee strips top/bottom | centred, symmetric || **Used (T1)**: 104px #0C62ED band with centred H1, photo 01 centred 42 % overlapping band 24px, BUYERS/MAKERS ghosts, 1px ellipse, ink sector marquees (home B0–B1; band + marquee on inner pages) |
| T2 | Text-line highlight bars: each heading line sits on a solid accent rectangle, black text | inline blocks, left aligned, 45px gutter || **Used (T2)**: every H2 on accent bars, Schibsted 800 54px/.9/−0.05em, sp-reveal--wipe + sp-stagger (home + all inner pages) |
| T3 | Dome / ellipse section containers: speaker heading inside a 1350×315 black ellipse; timetable opens under a huge dome curve | full-width rounded-50 % shapes || **Used (T3)**: speakers heading in 1350×315 ellipse with 1px accent outline; programme/tickets/stories open under a 220px dome |
| T4 | Vertical-writing paragraph columns (6 columns) pinned beside a giant vertical title at the right edge | right half, scrub-pinned || Not used (vertical text conflicts with 390px rule and Latin-first copy) |
| T5 | Programme = sticky left rail (CVR / customer acquisition / LTV track label + times) + stacked session cards (Sec.NN | title + abstract | portrait / name / org) | rail 225px, cards x 271–1395, 325px high || **Used as supporting structure**: 225px sticky rail + stacking cards 72 / 1fr / 234, sticky top 45px ≥1024px (home B6, Programme page with B/W portraits) |

## Colour relation
Ground `#000000` (≈70 %), accent `#0C62ED` (≈15 % page, 27 % hero), panel `#262626`, text white / white-60 %, hairline `#4C4C4C`. Our palette family is ink (#3A3C3E), so keep the relation (dark ground + one electric accent + one grey panel) but scale accent so the first screen stays ≤15 % saturated.

## Scroll effects (see stage-a table)
GSAP ScrollTrigger scrub 0.55–0.8 + Lenis; pinned text, ellipse-grow, sticky session cards, marquee ≈128 px/s.

## Our counterpart (from design-spec.md)
| Reference element | Our counterpart |
|---|---|
| Blue title band 201px, event name centred, pill nav | 104px #0C62ED header band, "Renkei Forum" 4.25rem centred, anchor pills + "Request a ticket" |
| Bone-white monumental 3D glyph centred, overlapping band | Documentary photo 01: host fastening a blank badge at a linen desk, empty auditorium behind; 42 %, 0.87:1, overlaps band 24px, sp-parallax 8 % |
| Ghost giant glyphs left/right | "BUYERS" / "MAKERS" 15rem #1C1E20, bleeding off edges (desktop) |
| 1px blue ellipse in hero | 1px #0C62ED ellipse 100 % × 88 % of hero |
| 99px blue marquee words | 99px ink #3A3C3E sector marquees, sp-marquee ≈128px/s (blue dropped for the ≤15 % first-screen cap) |
| Highlight-bar headings | T2 bars on every H2, sp-reveal--wipe + sp-stagger |
| Ellipse speakers container / dome timetable | Speakers ellipse 1350×315 + 8 B/W portraits row; dome-top programme |
| Sticky rail + stacking session cards | Programme rail 225px + cards 72 / 1fr / 234, sticky top 45px |
| Colours #000 / #262626 / #0C62ED | #0B0C0D / #26282A / #0C62ED (+ row ink #3A3C3E) |
