# Reference (draft, stage 1) — Shokutaku Dining
S5-Style (https://www.s5-style.com/) category "商業施設･飲食店･カフェ･レストラン"; neither site was used by earlier themes (checked against themes/*/brand/reference.md).

| role | site | why |
|---|---|---|
| primary | https://pont-de-ciel.co.jp/ (French restaurant, Osaka) | quiet low-chroma ground, arch-framed photographs, ghost display caps, fixed vertical reservation tab, scroll-driven parallax and pinned strips |
| secondary (structure only) | https://pienezza.jp/ (Italian restaurant, Tokyo) | full-height reservation rail on the right edge, centred square dish photo over a full-bleed room photo, fixed left text nav |
Only structure, shape and colour relationships are borrowed; no copy, photos, logos, vertical Japanese text, or Japanese elements. Measured values: `reference-tokens.md`. Screenshots: `ref/`.

## Signature techniques (candidates; the final three are decided in design-spec)
| # | technique | reference form | ours (成品對應) |
|---|---|---|---|
| T1 | Arch-topped photo frames (semicircle top, flat bottom) scattered at different widths and offsets | 320×580 r160, 240×336 r120, 520×800 hero arch; offset ≥100px vertically | |
| T2 | Ghost display caps (huge thin type, white on stone) partly covered by photos | CONCEPT 320px, section titles 96px, Poiret One | |
| T3 | Fixed vertical RESERVATION tab on the right edge | 104×400, hairline, left corners r≈60, vertical letter-spaced caps; Pienezza: 56px full-height #3B3123 bar | |
| T4 | Horizontal strip of pill / half-pill dish photos | 840×640 r360 half-pill, 252×408 r160 pill, 240×240 half-pill; pinned horizontal scroll | |

## Palette (reference → ours)
| role | ref | ours (成品) |
|---|---|---|
| ground | #DFDAD6 greige | |
| ink | #303030 | |
| accent / rail | #3B3123 rail (Pienezza) | |
| ghost type | #FFFFFF on ground | |
Row hex #6E4E4A used as the one muted accent on small areas only.

## Scroll effects (reference → sp-*)
See `stage-a.md` table; before/after shots `ref/scroll-*.png`.

## Home block order of the reference (for contrast only)
Opening logo → pinned hero arch expanding to full-bleed corridor photo → CONCEPT (ghost title + three floating arches) → CHEF → MENU (course list with prices) → pinned horizontal DISH strip → NEWS → gift → ACCESS (two overlapping photos) → footer curtain with reservation button.
