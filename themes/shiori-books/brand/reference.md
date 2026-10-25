# Reference (Our counterpart filled at stage-1 spec, 2026-10-25; binding detail in design-spec.md)
| # | site | url | S5-Style | role |
|---|---|---|---|---|
| R1 | BOOK AND SONS | https://bookandsons.com/ | yes (not used by earlier themes) | main (token source) |
| R2 | 8BOOKs SENDAI | https://8books.jp/ | yes (not used before) | secondary (structure, scroll) |
Screenshots: ref/bas-entrance-split.png, bas-home-after-enter.png, bas-home-scrolled.png, bas-exhibition-list.png, 8books-first.png, 8books-s2.png; scroll pairs ref/scroll-*.png.
Tokens: reference-tokens.md.
## Signature candidates
1. R1 split entrance: two full-height halves, light blurred window-shadow vs dark warm grey, centred caps wordmark + short blurb + bracket label.
   **Our counterpart (T1, used)**: home hero `sb-entrance`: left half photo `hero-front-table` (bookseller wrapping a hardcover, diagonal window shadow) graded to #908F8B, right half `hero-evening-shelves` graded to #44413C; "SHIORI BOOKS" / "THE SATURDAY READING" caps + blurb + "( EDINBURGH )" / "( SATURDAYS, 19:30 )"; sp-parallax 8 %; text fade 1 s ease, header 0.6 s. Inner pages: 360 px split head on all 11 inner templates.
2. R1 hairline index list: title / name / date columns, row pitch 21px, inactive rows 40 % opacity, thumbnail at left shows on active row.
   **Our counterpart (T2, used)**: home `sb-readings`: 12-row Saturday reading programme (title | with | date), 14/21, past rows opacity .5, sticky 3:2 left thumb swapping on hover. Inner: New Books, Readings, Second-hand, Services price rhythm, Booksellers, About history, Visit hours, Journal list.
3. R1 flush-left unframed photo at 42 % width with large empty ground and a fixed bottom-right paper-grain panel.
   **Our counterpart (T3, used)**: home `sb-shop` (statement + 3 small lists at the 42.1vw line, `shop-counter-shelves` flush left 41.9vw 1.43:1, #E3E3E3 grain panel "The Saturday letter" flush right, static not fixed) and mirrored `sb-visit`; passages 01 edge photo. Inner: Readings, Second-hand, Subscription, Services, About, Visit, single product / post.
4. R2 section background swap (dark ↔ white card) with ghost ring text and rounded white card holding text + photo.
   **Our counterpart (supporting, used)**: home `sb-people` on #44413C, ghost ring text rgba(255,255,255,.12) in sp-parallax layer 12 %, white 12 px card text-left / `people-recommend` right, sp-reveal--wipe; R2 capsule links. Inner: Subscription, Booksellers.
## Palette: ground #F9F9F9 / text #2B2B2B / panel #E3E3E3 / dark half #44413C / light half #908F8B; accent none (ours: Kuruchiku #6B5346 small areas).
   **Our counterpart**: same hexes unchanged; R2 dark #3C3C3C replaced by R1 #44413C; accent #6B5346 < 3 % (labels, underlines, ■); first-screen saturation target ≤ 3 % (cap 15 %).
## Scroll motion: see stage-a.md table.
   **Our counterpart**: sp-parallax (hero halves 8 % / mobile 5 %; ghost ring 12 %), sp-reveal--up + sp-stagger (1 s ease-in-out; index rows, passages, journal), sp-reveal--wipe (white card). Hero: no reveal, CSS fades only.
