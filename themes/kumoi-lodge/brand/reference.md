# Kumoi Lodge — reference ("Ours" column = design-spec.md)
Reference: https://glanta-glamping.com/ (glänta | glamping village). Screens in `ref/`. IMAGERY: photo. Tokens: `reference-tokens.md`.

## What it is
A glamping village: full-bleed daylight photograph with a drawn centred wordmark → a blurred-foliage opening with two small text columns → pinned full-bleed photo stages that crossfade while short text passes → rooms as rounded 1.85:1 photo cards (fade slider, circle arrows) with a title/spec column, a 1 px vertical hairline and a description column → food squares → facilities → access → night-photo footer. Fixed outline "BOOK NOW" ring and MENU.

## Signature candidates (to be chosen at design stage)
| # | Candidate | Shape / composition / position | Ours |
|---|---|---|---|
| T1 | Room cards with hairline split row | rounded-30 1.85:1 photo, ≈72% of width, circle-arrow buttons inside bottom corners; under it a row: title 24 px + spec lines + outline pill (r50, 1 px) left, 1 px vertical rule, description right || **Used (T1).** Home block 3 "Open this month": Ridge R1, Larch R2, Bunk Loft R3 as 1.85:1 r30 photos (51 px outline arrows) + split row (title/meta/outline pill · 1 px ink vertical rule · description). Inner: Rooms (5), Table, Rates, Walks, Keepers (text-only), Notes. |
| T2 | Out-of-focus opener | full-viewport blurred photo, two small text columns (headline lines left, paragraph right, offset to 20% start), huge empty ground || **Used (T2, KV #6).** Home block 2: full-viewport blurred B1 (lamp-lit window, steam), two small columns from 20.1%, gap 9.5vw, sp-parallax 10%. Every inner page head (blurred page photo, 62svh). |
| T3 | Rounded facility box | 1 px bordered r30 box, half text + three outline icon circles, half photo; 2-up 1:1 r30 cards beside || **Used (T3).** Home block 5 "How a night is held": 1 px ink r30 box, text + stove/boots/lamp outline icons + schedule rows, N1 photo half; 2-up 1:1 squares F1/K1; food squares T1/T2 in block 6. Inner: Stay, Table, Rates (booking box), Getting here, Keepers, Contact. |
| T4 | Night close | full-bleed dusk photo, address bottom-left, wide-tracked index row bottom || **Used (closing device).** Footer on every page: dusk D1 (lodge windows lit), address bottom-left, tracked caps index 1.375rem, sp-parallax 8%. |

## Colour
Pale tinted grounds (lichen #E0E5C5, mint #D3E8DD, butter #F2EFCF, cream #F4ECE0, blush #EADFD9) with black type, white type only on photos; first-screen saturated share 3.5%.

## Scroll effects (reverse-engineered)
See stage-a.md table. Library: GSAP ScrollTrigger + ScrollSmoother + Swiper.

## Key visual (ours)
Glanta's full-bleed daylight village + centred drawn wordmark + BOOK NOW ring → our r30 framed window (34 px lichen inset) with H1 (keeper setting the kettle on the dining-room stove, coats on pegs, film grain), "Kumoi Lodge" Fraunces 300 4.5rem centred upper third, white top bar inside the window, "Scroll" cue, and a 120 px hairline info bar ("Open this month · 3 of 5 rooms", "Next free night Fri 14 Nov") ending in an ember 96 px ring "Hold a room". Load settle 1.1→1 1.5 s, sp-parallax 6%. Colours: the five reference grounds exact, ink #3C342C (row) for #000, ember #B4572F ≤1.5%. Full mapping and similarity table: `design-spec.md` §2 and §11.
