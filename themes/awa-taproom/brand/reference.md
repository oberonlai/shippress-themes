# Reference (draft) — Awa Taproom
Reference: https://afuribrewing.com/ (S5-Style, craft beer; not previously used by any theme). Screenshots in `brand/ref/`. Numbers in `reference-tokens.md`. Column "Awa Taproom result" is filled in stage 2.

## Signature technique candidates
| # | Technique (shape / composition / position) | Awa Taproom result |
|---|---|---|
| T1 | **Framed window over a landscape**: a 983×640 (≈68% × 71% of the fold) sharp-cornered photo frame centred in the viewport; the ground around it is a different full-bleed photo/colour; on scroll the frame wipes away (mask gradient) and the ground photo takes the whole screen | |
| T2 | **Bottom-left caps wordmark overlapping the frame's lower edge** (≈78px, white, crosses frame bottom into the dark band) with a small underlined-phrase lead at the left, mid-height | |
| T3 | **4-up product rows with a 4px black top rule that is cut near the right end, a Ø24 circle ▸ button, caps names (26px/700)** — editorial list on white | |
| T4 | **Vertical rotated grey label at the left gutter + "SCROLL DOWN ◉" with a short bar bottom-right** as quiet chrome | |

## Colour relation (first screen)
Sky #00A0E0 ≈42% saturated · forest #0B2A2A ≈20% · white #FFFFFF text · ink #1D1D1D on white sections. Awa Taproom keeps the structure (one dark ground, one framed photo, white sections, ink text) in umber #3B2E28, saturated share ≤15%.

## Scroll effects (ref/scroll-*.png)
Frame mask wipe on first scroll (own rAF tween, easeInOutQuart, done by ~100px); no other reveals observed; hover color 0.4s. Mapped to sp-reveal--wipe / sp-parallax in stage-a.md.
