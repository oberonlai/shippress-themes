# Reference — PASCO (the "Ours" column is filled from design-spec.md)
Primary: https://www.pasco.co.jp/ (Japanese surveying and geospatial company home page, collected as a corporate/business example). Secondary: none (a second site would only repeat the same strip idea).
Measured values: `reference-tokens.md`. Screenshots: `ref/pasco-first.png`, `ref/pasco-part2.png`, `ref/pasco-part3.png`, `ref/scroll-pasco-accordion-before.png` / `-after.png`, `ref/scroll-pasco-band-before.png` / `-after.png`.

## Structure of the reference home (1440 wide, ~2790px tall)
1. Transparent 100px header: logo left; language switch, search pill and five-item nav right.
2. One-line tagline (serif 50px) with a smaller sub-line on the same baseline.
3. Accordion strip: six 505px-tall panels, 8px gaps, one open at a time.
4. News list: Latin eyebrow + rule, serif H2, outline "all" button, five ruled dated rows.
5. Exhibition / seminar: two wide photo cards.
6. Owned-media band: pale blue, 60px top corners, illustration left, text and pill CTA right.
7. Deep-blue footer with centred wordmark and a link row.

## Signature candidates
| # | Technique | Shape / composition / position | Ours |
|---|---|---|---|
| T1 | Accordion strip | Six tall panels edge to edge in a 1360px row, 8px gaps, radius 4px, one open panel 3.1x wider than the others, widening in 0.8s, auto-advancing every 3.5s | Home block 1 `front-strip`: six photo panels (02, 03, **01 key scene**, 04, 05, 06), 1360 × 505, gap 8, r4, flex 163/505, 0.8s cubic-bezier(.4,0,.2,1), every 3500ms, panel 3 open when static; mini 4-panel strips on About, The visit and Thanks; under 768px a scroll-snap row with captions in flow |
| T2 | Vertical-to-horizontal caption swap | Closed panels carry an upright vertical label at the bottom-left; the open panel shows a horizontal caption with a circle arrow at the bottom-right over a dark bottom gradient | Inside the strip: white upright vertical labels 20px/600 bottom-left (Boundary pins, Stakes, The tripod, Fence line, From above); open panel caption 1.375rem + 34px white circle with umber chevron, 0.15s out / 0.6s in after 0.1s; desktop and tablet only |
| T3 | Pale rounded-top band with one pill CTA | Full-width pale band with 60px top corners, image left, Latin eyebrow + rule, heading, three lines, one pill button | Home block 10 `front-request` and the last block of every inner page: `#ECF6FF`, 60px top corners only, photo 15 at 520 × 520 left, text from x 750, umber eyebrow + 60px rule, one `#64B5EB` pill 260 × 50 r25 "Request a visit" with ink text; umber footer flush below |
| T4 | Tagline + sub-line on one baseline | One heavy line and a smaller sub-line sharing a baseline above the strip | Home tagline "Measured on the ground, marked where you can see it." (Outfit 600 50px) + "One visit, one plan" (Outfit 400 32px, umber) on one baseline; the same head line opens every inner page |

## Palette relation
Near-white ground with a barely visible wash, desaturated photo greys doing most of the work, one deep blue used only on small labels, outline buttons and the footer, one sky-blue pill. Contrast comes from the strip photos and the footer band, not from colour fills.

## Palette mapping (finished)
Base `#FFFFFF` + pink-to-cyan wash (same); main deep blue `#004295` → umber `#594E45` in the same roles (avoids Tomari Marina's navy; plan row hex); sky pill `#64B5EB` and band `#ECF6FF` kept exactly; red chip → survey-tape orange `#D9622B`; rules `#DCDCDC`, body `#333333` kept. Full table in `design-spec.md` §3 and §10.
