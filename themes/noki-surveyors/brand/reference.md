# Reference notes: Noki Surveyors (stage 1; "Our version" filled from design-spec.md)

Main reference: https://www.kajima.co.jp/ (large building contractor, corporate home). Imagery type: **photo** (documentary architecture photography; overcast, plain, journalistic).

## What the reference's first screen is
A full-height pair of architectural photographs split by a hard vertical seam (64 / 36). A single tracked tagline sits across the seam. On the first 250 px of scroll the panes shrink and scatter into a loose field of differently sized photographs on a pale grey ground; a one-line statement sits in the middle of the field. Story: "what is built connects to how people live".

## Signature technique candidates
| # | Technique | Reference place | Our version (filled later) |
|---|---|---|---|
| A | Two-pane full-height photo hero with a hard seam; tagline set against the seam | first screen, `ref/kajima-first.png`, `ref/scroll-kj-before.png` | **T1** home hero: right 60 % photo area with two panes (ladder + cracked lintel / damp meter in hallway) split by a 9° diagonal 2 px pale seam, left edge cut at 9°, panes ≈ 64 / 36; H1 beside the photo; card row overlapping the photo foot; panes parallax 6 % / 10 %. Inner T1 head (one diagonal pane + seam line) on 9 inner pages. |
| B | Dark ink band with a fill-in-the-blank sentence ("I want to know [A ▾] of [B ▾]") using a white and a grey select box, then three photo cards | `ref/kajima-2700.png` | **T2** home `#ask`: ink `#2E2B31` band, "I am buying [a house ▾] and I want to know about [cracks ▾]", white + `#9EA3A6` boxes 248 × 62 r2 as `<details>` link lists (no form, no JS), three 356 px photo cards (cracks / damp / roof). Compact version on Report, Findings, Visits & prices, Request. |
| C | Case strip with one enlarged centre card, dimmed neighbours, round outline arrows | `ref/kj-s3400.png` | **T3** home `#finds`: five finding photos, centre (cracked lintel) 452 × 560 undimmed, neighbours 286 × 430 with a .45 pale veil, outer cards cut by the viewport, 56 px round outline arrows; scroll-snap row on mobile. Also on Findings, Report, Small commercial. |
| D | Hero panes scatter into a drifting photo field (supporting) | `ref/scroll-kj-after.png` | Home block 3 `#fabric`: three photos of different sizes (379 × 450, 518 × 330, 182 × 513) touching the viewport edges on `#F5F6F7` with one centred statement; `sp-reveal--zoom` + `sp-stagger` (0.75 s, cubic-bezier(.5,1,.89,1)) and different `sp-parallax` speeds (6 / 12 / 9 %). No scroll lock. |

## Scroll effects seen (details in stage-a.md and reference-tokens.md)
GSAP ScrollTrigger hero timeline (shrink and scatter, 0.75 s, +=250 px, reversible); scrubbed y drift at different speeds; header colour variant switch; Swiper autoplay strip (4 s).

## Palette relationship borrowed
Ink `#363434` and pale grey ground `#F5F6F7` carry the page; one small red accent on labels. Ours: ink `#2E2B31`, ground `#F5F6F7`, strip `#E7E9EC`, accent Edo purple `#5E5166`.

## Not copied
No photographs, renders, copy, logo or layout of the page. Concept, composition ideas and numeric relationships only.
