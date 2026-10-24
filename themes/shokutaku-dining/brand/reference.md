# Reference (draft, stage 1) — Shokutaku Dining
S5-Style (https://www.s5-style.com/) category "commercial facilities / restaurants / cafes"; neither site was used by earlier themes (checked against themes/*/brand/reference.md).

| role | site | why |
|---|---|---|
| primary | https://pont-de-ciel.co.jp/ (French restaurant, Osaka) | quiet low-chroma ground, arch-framed photographs, ghost display caps, fixed vertical reservation tab, scroll-driven parallax and pinned strips |
| secondary (structure only) | https://pienezza.jp/ (Italian restaurant, Tokyo) | full-height reservation rail on the right edge, centred square dish photo over a full-bleed room photo, fixed left text nav |
Only structure, shape and colour relationships are borrowed; no copy, photos, logos, vertical Japanese text, or Japanese elements. Measured values: `reference-tokens.md`. Screenshots: `ref/`.

## Signature techniques (final: T1–T3 used, T4 folded into T1; see design-spec.md)
| # | technique | reference form | ours (final mapping) |
|---|---|---|---|
| T1 | Arch-topped photo frames (semicircle top, flat bottom) scattered at different widths and offsets | 320×580 r160, 240×336 r120, 520×800 hero arch; offset ≥100px vertically | **Used (T1).** `shk-arch--hero/tall/small/low` with % radii = true semicircle; hero P01 right at x 53.5%; TABLE block: P02 tall 34px from left, P03 small at right 150px, D3 low; arches on Sittings, Visit, Notes cards and every inner page head |
| T2 | Ghost display caps (huge thin type, white on stone) partly covered by photos | CONCEPT 320px, section titles 96px, Poiret One | **Used (T2).** Fraunces 200 caps #FFFFFF, TABLE 20rem + section ghosts 6rem (SITTINGS, MENU, PLATES, PEOPLE, VISIT, NOTES; inner MENUS, RESERVE, PRIVATE, ROOM, GROWERS, WINE), aria-hidden, lower third covered by a photo |
| T3 | Fixed vertical RESERVATION tab on the right edge | 104×400, hairline, left corners r≈60, vertical letter-spaced caps; Pienezza: 56px full-height #3B3123 bar | **Used (T3).** `a.shk-tab` in the header part (every template), fixed right 104×400 (72×320 at 960–1279, hidden <960 → header Book pill), 1px #303030, r60 left, upright RESERVE, ground fill 92%, hover #6E4E4A, links /reservations/#book |
| T4 | Horizontal strip of pill / half-pill dish photos | 840×640 r360 half-pill, 252×408 r160 pill, 240×240 half-pill; pinned horizontal scroll | Folded into T1: PLATES strip (D1 half-pill, D2 pill, D4 square half-pill) bleeding off the right edge, no pinning; scroll-snap row on mobile |

## Palette (reference → ours)
| role | ref | ours ((CJK)) |
|---|---|---|
| ground | #DFDAD6 greige | #DFDAD6 (kept); fields #E9E6E3 / #D5CFCA (±4% L) |
| ink | #303030 | #303030 (kept); muted #5C5753 |
| accent / rail | #3B3123 rail (Pienezza) | #3B3123 footer; accent #6E4E4A ≤1% (tab hover, focus, Book dot) |
| ghost type | #FFFFFF on ground | #FFFFFF, Fraunces 200 |
Row hex #6E4E4A used as the one muted accent on small areas only.

## Scroll effects (reference → sp-*)
See `stage-a.md` table; before/after shots `ref/scroll-*.png`.
final mapping: KV arch→full-bleed + `.js-pax` → `sp-parallax` (hero arch 6%, ROOM band P05 10% / mobile 7%); `.clip_figure` → `sp-reveal--wipe` 1.2s cubic-bezier(.32,.95,.6,1); fade-rise → `sp-reveal--up` + `sp-stagger` (30px, 1.6s, cubic-bezier(.16,1,.3,1)); horizontal drift → `sp-reveal--left` on the plates strip. Final spec: `design-spec.md`.

## Home block order of the reference (for contrast only)
Opening logo → pinned hero arch expanding to full-bleed corridor photo → CONCEPT (ghost title + three floating arches) → CHEF → MENU (course list with prices) → pinned horizontal DISH strip → NEWS → gift → ACCESS (two overlapping photos) → footer curtain with reservation button.
