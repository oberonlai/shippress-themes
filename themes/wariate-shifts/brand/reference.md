# Reference notes ("our counterpart" column filled in at the design stage; binding detail in `design-spec.md`)
Reference: https://airregi.jp/shift/ (shop-shift product page; screenshots in `ref/`).
IMAGERY: photo.

## What the page does
Centred tagline and product name over one CTA pair, a device mock-up group to the right, then a wide strip of four staff photographs under a shallow arch, a logo marquee, a short intro with a video poster, a tint band of numbered reason cards, folder-tab panels for features, price, flow, FAQ, and the same CTA again.

## Signature candidates
| # | Reference move | Where | Our counterpart |
|---|---|---|---|
| C1 | Four equal photo panels edge to edge under one shallow arch, directly under the centred text | first screen, `ref/airshift-first.png` |T1: four documentary photos P02–P05 (bakery, florist, bookshop, cafe before opening), 4 × 360×160 edge to edge, 30 px downward sag via `arch-mask.svg`, home first screen y 585–745; arched photo band on 7 inner page heads, full strip on Stories |
| C2 | Folder-tab panel: solid tabs sitting on a 2px outlined r16 panel, the active tab breaks the border, three numbered circle steps inside | feature block, `ref/airshift-tabs.png` |T2: five solid `#5E4D6B` tabs on a 2 px r16 panel, active white tab breaks the border, three 24 px circle steps with P11–P13; home "What the demo shows", around the price table, Features ×5, Prices, Book a demo, Early access |
| C3 | Slash-flanked caption above a pill CTA, same CTA everywhere | hero and CTA bands, `ref/airshift-first.png` |T3: `\ … /` caption (slashes in `#5E4D6B`) over the single amber `#C4701A` pill "Book a demo" → `/book-a-demo/`; header, hero, every close band, floating bar; also as section kickers |
| C4 | White r16 cards with a pale 96px numeral in the gutter, alternate image side | reasons, `ref/airshift-reasons.png` |S-a: four white r16 reason cards on the `#ECE7EF` band, 96 px `#DDD3E4` numerals in the gutter, photos P07–P10 alternating; also Stories and About |
| C5 | Fixed dark bottom CTA bar after the first CTA has passed | all page, `ref/scroll-airshift-bar-after.png` |S-b: 70 px `rgba(0,0,0,.70)` bar with the amber pill, CSS scroll-driven (range 520–600 px), absent at scroll 0, in `?sp-static`, reduced motion and unsupported browsers |

## Colour relationship
See `reference-tokens.md` (a). Cool main + one warm accent used only for the CTA + pale tint bands.

## Our counterpart: colour and key visual
- Colour: reference ground, text, grey and floating-bar values kept exactly; main `#20AEE5` → `#5E4D6B` (row palette, quiet), tint `#E1F0F8` → `#ECE7EF`, CTA `#F2971B` → `#C4701A` (same hue, darker for white-label contrast). Proportions unchanged.
- Key visual: the device group becomes P01 (manager marking a paper shift sheet at the back counter while a colleague hangs a coat), cut on a diagonal at the right; the staff strip becomes four shops before opening; the logo marquee becomes a marquee of shop kinds (text, 20 s linear).
