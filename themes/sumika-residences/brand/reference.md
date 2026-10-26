# Reference — Sumika Residences (built counterpart filled from design-spec.md)
Main reference: https://musu-sauna.com/ (S5-Style category hotels and inns + travel and sightseeing; not used by any other theme; checked against themes-repo reference.md list).
Rejected: https://theday.osaka/ (first view blank behind a preloader, Lenis smooth scroll — nothing measurable).

## Signature techniques (candidates)
| # | Technique | Description | Built counterpart |
|---|---|---|---|
| T1 | Torn-edge hero photo with pill nav in a notch | full-bleed photo inset 32px, top edge cut in a jagged zig-zag (≈ 6 teeth, 40–60px tall), a dark rounded pill nav (574×54, radius 15px) sits in a wide notch at top-centre and stays fixed after scroll || Home hero: photo 01 inset 32px, clip-path torn top (2 spikes + notch), ink pill 600×54 r15 sticky top 16px, bottom-left torn tab with H1; all inner heroes + home §6 band (spec §1 T1) |
| T2 | Offset photo + short text block, staggered, with brush-ink splashes | small 4:3 photo up-left, big 3:4 portrait right, text block lower-left; black ink splashes crossing edges || Home §2 intro (02 4:3 + 03 3:4, +120px offset) and §5 mirrored (11 + 12), charcoal pencil SVG marks over corners; Houses/A day/Companies/Neighbourhoods (spec §1 T2) |
| T3 | Per-glyph tilted vertical headings | headings set vertically/rotated, each character tilts −6°…+4° as it enters || Fraunces 5rem per-glyph tilted keywords (±2–5°, sp-stagger + sp-reveal--up) on every home H2 and inner H1; vertical "Settle" in intro ≥1100px (spec §1 T3) |
| T4 | Speech-bubble Q&A | 1px ink bubble with tail, green Q, answers below, stepped left/right || 1px ink bubbles r4 with tail, pine Q: home Voices (3 stories) + FAQ page 12 Q&A (spec §1 T4) |
Colour roles: ground #F3F3F2 / ink #211815 / accent #22A57F (<1%) / white pills. See reference-tokens.md.
Screenshots: ref/musu-s0..s3.png (sections), ref/musu-first.png, scroll-*.png (motion before/after).
