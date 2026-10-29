# Ueki Gardens

A calm, spec-catalogue block theme for a **garden centre**: plants a household can keep, what is in season on the benches, how a plant is chosen, services with prices, and the nursery on a Saturday. Type: store (WooCommerce supported, not required). Built to the quality gate in ROADMAP §4 (rule 0) and row b19-2 of design-plan.json.

The demo nursery is fictional: founded in 1998 by Elena Marsh on Alder Lane in Fernhill, with six glasshouse bays and forty-two benches. The brand (history, people, services, prices, hours, tone) is in [`brand.md`](brand.md).

## Concept: a bench of specimens

- **Palette.** White ground `#FEFFFE`, ink `#0B110C`, body `#3E3E3E`, one moss accent `#748578` (menu pill, active states), sage band `#D5DDD7` behind the hero row and the visit block, pale `#F2F5F3` for hovers. The photographs carry the colour; the first screen stays under 15 % saturated pixels.
- **Type.** Figtree (headings) over Manrope (text), both OFL-1.1, Latin WOFF2 subsets; Noto Sans TC / JP subsets for CJK (sans only, no Mincho).
- **Signature.** (1) A 125 px two-line headline over a row of photographs with stepped tops (0 / 56 / 112 px), the first bleeding off the left edge and all cut by the fold; (2) index rows with 70 px uppercase titles, 1 px rules and a ↘ arrow; (3) 26 px hairline outline pills, one filled pill per block, and a floating moss MENU pill after the first screen; (4) a sage band split behind the hero row and the visit block.
- **Motion.** `sp-scroll`: per-photo parallax in the hero and on the yard band, masked reveals on titles and index rows, staggered rise on the mosaic, count-up on the facts. All of it respects `prefers-reduced-motion`.
- **Photographs.** Fifteen high-key documentary photographs from one shared style string (soft overcast light, muted greens, plain pots, no text anywhere). No cut-outs.

## Front page

1. Ragged-top hero row. 2. Bench index rows. 3. Nursery split with this week's picks. 4. Card mosaic: how a plant is chosen. 5. Saturday yard band with parallax. 6. Services ledger. 7. After the weekend. 8. Visit.

## Pages and templates

Home, In season, Plants, Choosing a plant, Services & prices, Aftercare, About the nursery, Visit, Cart, Journal (posts page) and three journal posts; page, index and archive templates. The header shows one split navigation; below 960 px it becomes a MENU overlay.

## Status

English sample content only so far. zh-TW, ja, fr and de sample content and the translated pattern strings follow.
