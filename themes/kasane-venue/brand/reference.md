# Reference (draft, stage 1) — Kasane Venue (kasane-venue)
Source: S5-Style https://www.s5-style.com/ . Picked sites (not in any earlier reference.md; checked with grep):
1. **https://theday.osaka/** — The Day Osaka, garden resort hotel (hospitality / lodging + events, nearest category to a wedding venue). Main reference. Measurements: `reference-tokens.md`.
2. https://musu-sauna.com/ — private outdoor sauna (mood and GSAP reveal only).

## Signature techniques borrowed (Our counterpart / ours: see design-spec.md)
| # | Technique (reference) | Where | Our counterpart (ours) |
|---|---|---|---|
| T1 | Photo shown through an **organic blob clip-path** on a white page (≈ 680×750 at 1440, morphing between shapes), opening to full-bleed on first input | first screen | **T1** home hero: 682×750 blob window (border-radius morph, 10 s/shape easeInOutQuad) on white showing K1, the empty undyed-linen table; H1 "The table / is set." bottom-left; every inner page head = static blob window. Opening → block 2 full-bleed K2 with `sp-parallax` 10 % |
| T2 | Alternating blob-clipped photographs 55 % wide that bleed off one edge, a 270 px text column opposite | home blocks 4–7 + inner rows | **T2** four rooms (North Room K3, Long Hall K4, Garden Court K5, Dressing Room K6), `min(58.3vw,992px)` blobs alternating left/right bleed, 300 px text column, `sp-reveal--mask`; continued on Rooms, The Day, Food, Fees, Weddings, People, Building, Viewings, Visit |
| T3 | **Section ground colour swaps** (sage → peach → mauve → mist) as the page scrolls, 0.4 s ease-out | home body | **T3** same four washes and order (#CAE2D3 → #EFAE90 → #B5998E → #98C2D2) under blocks 4–7, static seams, white from block 8; inner pages put each T2 row on its own wash |
| T4 | Fixed vertical "reservation" tab (170×170, dark) on the right edge; small news toasts bottom-right | global | Decoration: fixed 45×170 `#6E6578` "Request a viewing" tab (≥782 px; header pill below), one 330×90 "Open day" toast with K13 in the hero (≥1200 px) |
## Colour source
Ground #FFFFFF, ink #333333, washes #CAE2D3 / #EFAE90 / #B5998E / #98C2D2 (pastel). Ours keeps all six hex values 1:1; only the dark tab becomes the row hex kyubai-nezu #6E6578 (same role, ≈ 2 %). See design-spec.md §2.
## Screenshots
`ref/theday-first-blob.png`, `ref/theday-first-fullbleed.png`, `ref/scroll-bg-sage.png`, `ref/scroll-bg-mauve.png`, `ref/scroll-before-fade.png`, `ref/scroll-after-story.png`, `ref/musu-first.png`, `ref/musu-y1000.png`.

## Our counterpart summary
Palette kept 1:1 (white #FFFFFF, ink #333333, four washes); only the dark tab changes to the row hex #6E6578. Type: Fraunces 400 / Figtree, CJK Noto Serif TC / JP. Motion: sp-reveal--up 25 px 1.2 s ease-out (animeFade), sp-reveal--mask on blob photos, sp-parallax on the full-bleed hall. Full mapping and similarity table: design-spec.md §1, Key visual concept, §9.
