# Reference (draft) — Awa Taproom
Reference: https://afuribrewing.com/ (S5-Style, craft beer; not previously used by any theme). Screenshots in `brand/ref/`. Numbers in `reference-tokens.md`. Column "Awa Taproom result" filled at spec stage (2026-10-29); see design-spec.md.

## Signature technique candidates
| # | Technique (shape / composition / position) | Awa Taproom result |
|---|---|---|
| T1 | **Framed window over a landscape**: a 983×640 (≈68% × 71% of the fold) sharp-cornered photo frame centred in the viewport; the ground around it is a different full-bleed photo/colour; on scroll the frame wipes away (mask gradient) and the ground photo takes the whole screen | Used (spec T1): home hero = sharp frame H1 (server pulling a pint) at 68.3%×71.1% over full-bleed taproom H2 with sp-parallax 8%; 'the room takes over' = block 2 R3 with sp-reveal--wipe (.77,0,.175,1); small framed window on every inner page head and home close (X13) |
| T2 | **Bottom-left caps wordmark overlapping the frame's lower edge** (≈78px, white, crosses frame bottom into the dark band) with a small underlined-phrase lead at the left, mid-height | Used with T1 (spec T1): 'AWA TAPROOM' Fraunces 4.875rem caps white at left 50px crossing the frame bottom edge; underlined two-line lead 'Four taps, after work. / A seat kept for you.' at left mid-height (T3 underline) |
| T3 | **4-up product rows with a 4px black top rule that is cut near the right end, a Ø24 circle ▸ button, caps names (26px/700)** — editorial list on white | Used (spec T2): 4px #1D1D1D cut rule + Ø24 outline ▸ on the 4 'Pouring tonight' tap cards and the 646+302 'Hold a seat' cards; continued on On Tap, Book a Seat, Brewery, People, Visit, Events, Brew Notes, About, Contact |
| T4 | **Vertical rotated grey label at the left gutter + "SCROLL DOWN ◉" with a short bar bottom-right** as quiet chrome | Used (spec T3 + KV5): rotated #BDBDBD caps gutter labels (≥1024px only) on home blocks 4/6/7/8 and inner pages; 'TONIGHT'S TAPS ◉' + 148×2 bar bottom-right of the hero (hidden <782px) |

## Colour relation (first screen)
Sky #00A0E0 ≈42% saturated · forest #0B2A2A ≈20% · white #FFFFFF text · ink #1D1D1D on white sections. Awa Taproom keeps the structure (one dark ground, one framed photo, white sections, ink text) in umber #3B2E28, saturated share ≤15%.

## Scroll effects (ref/scroll-*.png)
Frame mask wipe on first scroll (own rAF tween, easeInOutQuart, done by ~100px); no other reveals observed; hover color 0.4s. Mapped to sp-reveal--wipe / sp-parallax in stage-a.md.
