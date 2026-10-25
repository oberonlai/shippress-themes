# Reference (draft) — Shizuka Hearing
Primary reference (S5-Style listing, category near medical/health): https://mstage-group.jp/ — M.Stage Group, medical-sector company. Not previously used (grep verified). fukushi.gifu.jp was inspected and rejected (full-saturation geometric shapes, cannot meet saturated ≤15%).
Imagery: photo (high-key, cool blue-teal soft-focus).
## Signature techniques (candidates)
1. Scattered rounded photo tiles: ~10 tiles of varied sizes (140–510px wide, radius ~10px) floating on white around one centred statement set in white highlight strips; 4 tiles bleed off the viewport edges.
2. Stacked sticky cards over a blue-gray band (#C5D1D5): left title column sticky, right 945px cards (radius 32px top-left only) pile up as you scroll, each a different tone (light grey / blue / slate).
3. Eyebrow + hairline header: uppercase Latin thin eyebrow with a 1px rule running to the right edge and a small sub-label under it.
4. Clip-path image wipe with right-side pill radius and an overlapping second figure.
5. Pill outline "view more" buttons with rotating circle arrow.
## Colour
Base #FFFFFF / #F2F2F2; band #C5D1D5; text/dark #49565E; accent #0086BF (≤4%). First-screen saturated share 3.4%.
## Scroll motion (see reference-tokens.md g)
Line reveal 2s (.19,1,.22,1) stagger 150ms; card rise 20px 1.5s; sticky stacked cards; clip wipe 2s.
## Screens (brand/ref/)
ms-first.png, ms-hero-settled.png, scroll-ms-1-message-{before,after}.png, scroll-ms-2-business-{before,after}.png, scroll-ms-recruit-{before,after}.png
## Mapping to final product (filled in stage 2)
| Reference element | Our implementation |
|---|---|
| Scattered rounded photo tiles (10.5 px, 4 bleeds) + white highlight-strip statement | T1 home hero: 9 tiles (h01 large audiologist fitting), strips over h05/h01; mini scatters on About, Hearing Check, Fitting, Tinnitus, Aftercare, Stories, Contact heads |
| Tile layer ghosting behind the purpose statement | Statement band overlaps hero bottom in 90 % white, lines sp-reveal--up + sp-stagger; tile layer sp-parallax 10 % |
| Stacked sticky cards on #C5D1D5 band, 945 px, 32 px top-left radius, left sticky column + concentric circles | T2 home "Problem → Method → Review" (#F2F2F2 / #51676B / #3A464D); also About, Hearing Check, Fitting, Tinnitus, Aftercare, Stories |
| Eyebrow + hairline to right edge + sub-label | T3 on every section and every inner page head |
| Clip-path wipe figure (right pill 52.7 px) + overlapping 40 px TL figure | Home "The clinic" (h07 + h09); Audiologists (h14) |
| Pill outline buttons 46×170, rotating circle arrow | All CTAs |
| Colour #FFF/#F2F2F2/#C5D1D5/#49565E/#0086BF | Same hexes; accent only logo dot/focus; card 2 uses row 青鈍 #51676B |
| Press-release ticker line under hero | Notice line: hours today + Thursday listening evening |
