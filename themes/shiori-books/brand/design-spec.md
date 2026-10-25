# Shiori Books: design spec (stage 1 spec, binding for implementation)

Slug `shiori-books`, independent neighbourhood bookshop, **type store** (WooCommerce declared and styled; site works without it). Row b9-3 (editorial-magazine, nav split, alternating-longform, real photography, film grain, accent Kuruchiku `#6B5346`).
References (S5-Style, never used by earlier themes): **R1 BOOK AND SONS** https://bookandsons.com/ (main, token source) and **R2 8BOOKs SENDAI** https://8books.jp/ (secondary: dark field + white card + ghost ring text). Measurements: `brand/reference-tokens.md` (tokens a–g), screenshots `brand/ref/*.png`. We borrow structure, composition, colour relationships, type rhythm and motion. We do **not** copy their photos, copy, logos or a whole page.

**Imagery: photo** (stage-a IMAGERY = photo; R1 and R2 are photographic). See §10.

Deliberate deviation from the row: the row's `first_screen` says *top-bottom halves*. R1's entrance is split **left / right**, and Hayate (shipped) and Hozen (shipped) both just used top/bottom-half heroes. So desktop (≥ 782 px) is **left/right halves exactly like R1**; under 782 px the same two halves stack **top/bottom**, which is how the row's idea survives on phones.

---

## 0. Fixed brand facts (every page, every language; never vary)

- **Shiori Books**, independent bookshop, founded **2011**, **27 Calder Lane, Edinburgh EH9 1PQ, Scotland** (fictional street). Two rooms: the front room (new books, front table) and the back room (second-hand & rare, and the Saturday reading). About **9,000 books** on the shelves. Phone **+44 131 555 0127**, email **hello@shioribooks.example**, letters list **letters@shioribooks.example**.
- Currency **GBP (£)** in every language. No converted prices.
- **Opening hours**: Tue–Fri **10:00–19:00** · Sat **10:00–21:00** (reading night) · Sun **12:00–17:00** · Mon **closed**.
- **Saturday reading**: every Saturday, doors **19:00**, reading **19:30–20:30**, back room, **30 seats**, **£5** a seat, the £5 comes back off any book bought that evening. Children's story hour on the second Saturday of the month at **11:00** (free).

### Price list (8 items; identical on Home "At the counter", Services page, product pages, Subscription page, all five languages)
| # | Service | What is included | Price |
|---|---|---|---|
| 1 | Special order | any book in print, usually 2–4 working days, we text you when it arrives | Free |
| 2 | Gift wrapping | plain paper and cotton string, per book | £2 |
| 3 | Shelf subscription, monthly | one book a month chosen for you by a bookseller, collect or UK post included | £24 / month |
| 4 | Shelf subscription, three-month gift | three books, one a month, with a card in your words | £70 |
| 5 | Gift voucher | printed card, spend it on anything in the shop, no expiry | £25 |
| 6 | Saturday reading seat | one of 30 seats; the £5 comes off any book bought that evening | £5 |
| 7 | Book repair: spine re-backing | per book, about 10 working days, done in the back room | £18 |
| 8 | Second-hand valuation | Thursdays by appointment; we buy, or we tell you where it should go | Free |

### WooCommerce products (5; same prices as above)
| # | Product | Category | Price | Image |
|---|---|---|---|---|
| 1 | Shelf Subscription — Monthly | Subscriptions | £24 | `subscription-parcel` |
| 2 | Shelf Subscription — Three-month Gift | Subscriptions | £70 | `gift-wrap-detail` |
| 3 | Gift Voucher | Gifts | £25 | `spines-detail` |
| 4 | Saturday Reading Seat | Readings | £5 | `reading-chairs` |
| 5 | Spine Re-backing (Book Repair) | Repairs | £18 | `bookbinding-repair` |
Featured (home has no product grid; the Shop page shows all 5). Tags: gift, subscription, repair, reading.

### Shelf subscription — how it works (prose on Subscription page; Home mentions "by the 10th")
1. Fill in a short reading note at the counter or by email (three books you loved, one you didn't).
2. Hanna Moreau or Ravi Menon choose your book by the **5th** of each month.
3. It is wrapped and ready by the **10th**, to collect or posted (UK).
4. Already own it? Swap it within **30 days**.
Written as four short paragraphs, **never** a step grid or timeline.

### Named people (7; Home "people" card, Booksellers, About, Readings, journal)
| Name | Role | Since |
|---|---|---|
| **Hanna Moreau** | founder, buys the new books | 2011 |
| **Callum Reid** | co-owner, second-hand & rare | 2011 |
| **Amara Osei** | hosts the Saturday reading | 2015 |
| **Tomasz Wilk** | bindery and repairs | 2016 |
| **Lucía Ferrer** | children's shelves, story hour | 2018 |
| **Ravi Menon** | orders and the shelf subscription | 2019 |
| **Elin Sørensen** | Saturdays, poetry shelves | 2021 |

### Saturday reading programme (12 rows; Home index shows all 12, Readings page all 12; titles and guests fictional)
| # | Title | With | Date | State | Thumb |
|---|---|---|---|---|---|
| 1 | Poems for a long autumn | Elin Sørensen and guests | 31.10 | upcoming | `reading-poetry` |
| 2 | The translator's desk | Mireille Dufort, with Amara Osei | 07.11 | upcoming | `reading-conversation` |
| 3 | Story hour: winter animals (11:00) | Lucía Ferrer | 14.11 | upcoming | `reading-children` |
| 4 | First novels, read aloud | three debut writers | 21.11 | upcoming | `reading-chairs` |
| 5 | Letters from the coast | Jonah Price | 17.10 | past | — |
| 6 | Walking books | Sanne de Vries | 10.10 | past | — |
| 7 | A cookbook supper | Paolo Ricci | 03.10 | past | — |
| 8 | The second-hand hour | Callum Reid | 26.09 | past | — |
| 9 | Short stories in the dark | Adaeze Nwosu | 19.09 | past | — |
| 10 | Maps and atlases | Tomasz Wilk | 12.09 | past | — |
| 11 | Poetry swap | open evening | 05.09 | past | — |
| 12 | Summer reading, returned | Hanna Moreau | 29.08 | past | — |
Dates stay `DD.MM` in every language (R1 uses a numeric date column).

### New books this month (12; New Books page shows title | author | price; Home block 2 shows titles only)
The Salt Orchard — Maren Holt — £16.99 · A Year of Small Rooms — Idris Kane — £14.99 · Night Ferry Notes — Sofia Brandt — £12.99 · What the River Kept — Tomás Ruiz — £18.99 · The Lamp Maker's Daughter — Ada Keller — £9.99 · Field Guide to Quiet Streets — Noor Haddad — £22.00 · Letters Across the Firth — Ewan MacRae — £16.99 · The Borrowed Garden — Priya Lal — £10.99 · Cold Light, Warm Bread — Henrik Lund — £25.00 · Small Atlas of Islands — Clara Weiss — £20.00 · The Tidewatcher — Owen Achebe — £8.99 · Seven Winters — Lena Vos — £14.99.
(All fictional. Book titles stay in English in all five languages; descriptions are localised.)

### Second-hand finds (8; Second-hand page only)
A Pocket Flora of the Lowlands (1962) £14 · Collected Sea Poems (1978, first edition) £38 · The Northern Kitchen (1985) £9 · An Atlas of Old Harbours (1971) £45 · Short Walks in the Borders (1990) £6 · Letters to a Young Printer (1958) £60 · The Glass Orchard, a novel (1983) £8 · Lighthouses of the North Sea (1969) £28. (Fictional.)

### Stories / journal (4 posts; newest first)
| # | Date | Title | Category | Image |
|---|---|---|---|---|
| 1 | 2026-10-18 | How we mend a broken spine | Bindery | `bookbinding-repair` |
| 2 | 2026-10-04 | Paper, string and a card in your words | Counter | `gift-wrap-detail` |
| 3 | 2026-09-20 | A year of the shelf subscription | Subscription | `subscription-parcel` |
| 4 | 2026-09-06 | Notes from the poetry swap | Readings | `reading-poetry` |
Home shows posts 1–3 (post 4's image is a home index thumb, so it must not appear in the home journal; Query Loop latest 3 guarantees this).

No awards, no guarantees, no real media, no real brands, no real people.

---

## 1. Signature techniques (three, all from R1, all obvious at a glance; never softened)

Grid tokens used everywhere (token c): page side margin **38 px** (R1 header left); the **right-hand start line at 42.1vw** (R1 first nav item x 606 / 1440 and the R1 home photo width 603 / 1440). Every right-hand text column on the site starts on that line.

### T1. Split entrance: two full-height halves, light vs dark warm grey, small centred caps title + 4-line blurb + bracket label (R1 entrance; `ref/bas-entrance-split.png`, token a, b, c, g)
- **R1**: the whole first screen is two halves. Left: light grey `#908F8B`–`#9A9792` with a soft blurred diagonal window-shadow band. Right: flat dark warm grey `#44413C`. Each half holds only: a spaced caps name (≈13 px, ls ≈ 0.2em), a 4-line centred blurb (≈11 px, lh 1.6), and a bracket label "( TOKYO )" (≈12 px). Nothing else: no headline, no button. Text blocks sit at y ≈ 39–57 % and are pulled toward the centre line (text centres at x 450 and 991 of 1440 = 31.25 % / 68.8 %, gap between blocks 335 px).
- **Ours (home hero `sb-entrance`)**: left half = photo `hero-front-table` (bookseller wrapping a hardcover at the front table, a diagonal window-shadow band across the table), graded to R1's light half; right half = photo `hero-evening-shelves`, graded to `#44413C`. Each half is one big link (left → Visit, right → Readings). Exact geometry in "Key visual concept" (3) and §5.
- **Must not be diluted**: two halves of **equal width** meeting at 50 %; the light / dark contrast (left overlay ends around `#908F8B` luminance, right around `#44413C`); type stays **small** (no heading over 1rem in the hero), caps title + blurb + bracket label in **that order**, centred, pulled toward the centre line; **no buttons, no big headline, no extra badges** in the hero.

### T2. Hairline index list with a dimmed state and a hover thumbnail in the left column (R1 Exhibition list; `ref/bas-exhibition-list.png`, token b, c, e)
- **R1**: a dense typographic list starting at the 42 % line: three columns **title | name | date** (date right-aligned at x 1374), 14 px / 21 px row pitch, no rules; inactive rows at 40 % opacity, the active row full ink; a 3:2 photo 400 × 267 sits at the left (x 76, y 108) and changes to the hovered row's image.
- **Ours (home `sb-readings`, the Saturday reading programme, 12 rows)**: list x 42.1vw → (100vw − 66 px); columns `minmax(0,1fr) minmax(0,1.1fr) 5.5em`: title (ellipsis) | with | date right. Work Sans 400 **0.875rem / 1.3125rem (14/21)**, ls 0.01em, ink `#2B2B2B`. Upcoming rows (1–4) at full ink; past rows (5–12) at **opacity 0.5** (R1 40 %, raised to 0.5 for ≥ 3:1 contrast); hovered / focused row → opacity 1 in **.3s ease** (token g). Left column: thumbnail **3:2, width 27.8vw (400 px at 1440), x 5.3vw (76 px)**, `position: sticky; top: 108px` (R1 y 108), radius 0. Each upcoming row carries its own `<figure>` absolutely stacked in the left column; the first is visible, the others `opacity:0`; on `.sb-index:has(.sb-row:hover)` the hovered row's figure goes to 1 and the default one to 0 (pure CSS, `transition: opacity .3s ease`). Past rows have no thumb (the current one stays).
- **Must not be diluted**: no numbers, no rules between rows, no cards, no bold; 21 px pitch (not loosened to 40+); three columns with the date flush right; the dim/active contrast must be visible; the thumbnail must be in the **left** column, at 3:2, unframed.

### T3. Unframed photo flush to the viewport edge at 41.9 % width, a large empty ground beside it, and a paper-grain panel flush to the opposite edge (R1 home after entering; `ref/bas-home-after-enter.png`, token c, d, e, f)
- **R1**: photo 603 × 421 (**1.43:1**, 41.9 % of 1440) touching the **left viewport edge**, radius 0, no caption; the rest of the row is empty `#F9F9F9`; a `#E3E3E3` paper-grain panel **434 × 260** touches the **right viewport edge**, its bottom aligned with the photo bottom; panel contents: title 15/18 medium, 3-line text, an email line with a **1 px underline**, "■ SIGN UP" at the bottom right, a 24 px line icon top right. Above, at the 42 % line, small 14/21 lists (shelves, artists) whose last rows fade.
- **Ours (home `sb-shop` and, mirrored, `sb-visit`; passages use the flush photo alone)**: exact geometry in §5 block 2. Panel = "The Saturday letter" (home) / "Hours" (visit). The 24 px icon top-right is a **line ↗** linking to the Subscription page (R1 has ×; a static panel has nothing to close).
- **Must not be diluted**: the photo **touches the viewport edge** (no margin), width **41.9vw**, ratio **1.43:1**, radius 0; the panel **touches the opposite edge**, `#E3E3E3` with visible grain, **434 px** wide at 1440 (30.1vw, min 360 px), bottom aligned with the photo; the ground between them stays mostly empty (one paragraph at most).

### Supporting technique (R2, counted for similarity, not as a signature): dark field + ghost ring text + white rounded card (`ref/8books-first.png`, `ref/8books-s2.png`, `ref/scroll-8books-bgswap-*.png`)
- R2: section ground `#3C3C3C`; giant letters set on a circle, `rgba(255,255,255,.12)`, partly off-screen behind the content; a white card radius ≈ 12 px, text half left (title 20 px/700 centred), photo half right flush to the card edge; capsule links 70 px high with an open right edge (the bottom line runs past the curve).
- Ours: home `sb-people` and the Booksellers and Subscription pages. Ground **`#44413C`** (R1's dark half instead of R2's `#3C3C3C`, +2 % lightness, so it rhymes with the hero's right half). Details §5 block 5.

### Continuation to inner pages (each signature on ≥ 4 inner pages)
| Page | T1 split | T2 index | T3 flush photo + grain panel | R2 dark card |
|---|---|---|---|---|
| Shop (archive-product, taxonomy, search) | split head (§6) | category list as 14/21 index under the head | — | — |
| New Books | split head | **12 titles: title \| author \| price** (static thumb `shop-counter-shelves`) | — | — |
| Readings | split head | **full programme, 12 rows**, hover thumbs | flush-left `reading-room-window` + grain panel "How a reading night runs" | — |
| Second-hand & Rare | split head | **8 finds: title \| year \| price** | flush-right `staff-sorting` + grain panel "Thursdays: valuations" | — |
| Shelf Subscription | split head | — | flush-left `subscription-parcel` + grain panel with the £24 / £70 lines | white card on `#44413C` with `gift-wrap-detail` |
| At the counter (Services) | split head | **price list** in index rhythm (§7) | flush-right `bookbinding-repair` + grain panel "Repairs" | — |
| Booksellers | split head | **7 people: name \| role \| since** (static thumb `people-recommend`) | — | white card with `people-recommend` |
| About | split head | the history as 6 dated rows "2011 … 2026" (year right) | flush-left `shop-counter-shelves` + grain panel "27 Calder Lane" | — |
| Visit | split head | opening hours as 4 index rows (day \| hours) | flush-right `shopfront-dusk` + grain panel with address | — |
| Journal (index / archive) | split head | **post list: title \| category \| date** with hover thumb of featured images | single post: featured image flush-left 41.9vw | — |
| Cart / Checkout / Account | small split head (240 px) | — | totals column on `#E3E3E3` grain panel | — |
T1: 11 pages. T2: 9. T3: 7. All ≥ 4.

---

## Key visual concept

### (1) Reference first screen (R1 bookandsons.com entrance): concept, story, signature motion
- **What is drawn**: one full-viewport photographic field split down the middle. The left half is light grey with a big, out-of-focus diagonal band of window shadow falling across it (late daylight through a window frame); the right half is flat, dark warm grey, like the same wall after the lights are off. Fine grain over both. In each half, very small type: the shop's name in spaced capitals, four lines about the place, and its city in brackets.
- **Story**: *two places, two moods — choose a door and step in.* The left is the daytime bookshop (Tokyo), the right its sister shop (Kobe). The visitor picks a half, as if choosing which door to walk through.
- **Signature motion**: click a half → the entrance **cross-fades** to the site (opacity, **1 s ease**), then header and footer **fade in (0.6 s ease)**; smooth scrolling (Lenis) afterwards. Nothing slides; everything fades, quietly.

### (2) Our transformation scene (independent neighbourhood bookshop)
- **Same composition**: the first screen is still two equal halves, light left / dark right, small centred caps text in each, pulled toward the centre line.
- **Our two doors are the two times of one bookshop**: the **left half is the day** — a film-grain photograph of a bookseller wrapping a hardcover in plain paper at the front table, with a soft diagonal window shadow falling across the table and the wall (R1's shadow band, now with a reason to be there). The **right half is the evening** — the back room's shelf wall under one low lamp, a few chairs set out for the Saturday reading, graded down to `#44413C`. Left links to the shop (Visit), right to the Saturday reading.
- **Same motion idea**: no click-gate (we cannot hide the site behind an entrance), but the same quiet fades: the two text blocks **fade in 1 s ease** on load (left first, right 0.2 s later), the header **fades in 0.6 s ease** after them; while scrolling away, the two photos drift slower than the page (`sp-parallax`), which is our CSS-only stand-in for R1's smooth-scroll feel.
- **Same image type**: photography, desaturated, film grain, soft window light — exactly R1's material.

### (3) KV checklist (all six implemented and visible in the 1440 × 900 first screen; at 390 × 844 all six visible too, stacked)
| # | Reference element (R1) | Our counterpart | Position | Motion | Which image |
|---|---|---|---|---|---|
| 1 | Light left half with a blurred diagonal window-shadow band (`#908F8B`–`#9A9792`) | Photo: bookseller wrapping a hardcover in plain paper at the front table, diagonal window shadow across table and wall; static overlay `rgba(144,143,139,.38)` (multiply-free, normal blend) so the half reads as R1's light grey | x 0 → 50vw, y 0 → 100svh (min 680, max 1000); mobile: top half | `sp-parallax`, `--sp-par: 8%` (mobile 5%) on the Cover background only | **`hero-front-table`** |
| 2 | Dark warm-grey right half `#44413C` | Photo: back-room shelf wall at evening, one low lamp, a row of empty chairs; static overlay `rgba(68,65,60,.66)` so the half reads as `#44413C` | x 50vw → 100vw, full height; mobile: bottom half | `sp-parallax`, `--sp-par: 8%` (mobile 5%) | **`hero-evening-shelves`** |
| 3 | Centred spaced-caps name per half (≈13 px, ls .2em, white) | Left `<h1>` "SHIORI BOOKS"; right `<p class="sb-door__title">` "THE SATURDAY READING". Work Sans 500 **0.875rem**, ls **0.24em**, uppercase, `#FFFFFF` | left block centre x 31.25vw; right block centre x 68.75vw; title top at **39 %** of hero height | CSS keyframe fade 0 → 1, **1 s ease**, delay .2 s (left) / .4 s (right); gated (`@media (prefers-reduced-motion: no-preference)` + `html.sp-js:not(.sp-no-motion)`), not sp-reveal | on 1 / 2 |
| 4 | 4-line centred blurb (≈11 px, lh 1.6) | ≈ 32-word blurb per half (copy in §5), Work Sans 400 **0.8125rem / 1.65**, `rgba(255,255,255,.92)`, max-width **17.5rem** (4–5 lines) | **54 px** under the title | same fade as #3 | on 1 / 2 |
| 5 | Bracket label "( TOKYO )" (≈12 px) | "( EDINBURGH )" left, "( SATURDAYS, 19:30 )" right; Work Sans 400 **0.75rem**, ls 0.08em, white; brackets with one space inside | **58 px** under the blurb | same fade as #3 | on 1 / 2 |
| 6 | Fine film/paper grain over the whole entrance + R1 home header (wordmark left at 38/28, six nav words from the 42 % line) | Grain: static `::after` SVG-noise tile, opacity **.08**, `mix-blend-mode: overlay`, both halves. Header over the hero: wordmark "SHIORI BOOKS" + nav (Shop, New Books, Readings, Second-hand, Visit, Cart) in **white** | grain full hero; header y 28 → 60, wordmark x 38, nav from 42.1vw (mobile: header in flow above the halves, ink on `#F9F9F9`) | header fade-in **0.6 s ease**, delay .6 s (R1 header/footer .6 s), same gating | none (CSS) |

Stage-a listed the grain panel and the flush-left photo as KV items 5–6; both are **below** the fold in R1 too (after entering), so they move to block 2 (T3) and are replaced here by the first-screen-visible bracket labels and the grain + header. Both photos above are in the image list (§10) and marked "home".

---

## 2. Colour (R1 token a, unchanged; row accent added on small areas)

| Role | Hex | Source (token a) | Use | Share of a page |
|---|---|---|---|---|
| Ground | `#F9F9F9` | R1 home / lists ground | page ground, header on inner pages | ≈ 70 % |
| Ink | `#2B2B2B` | R1 text | all text on light, rules, icons | ≈ 3 % |
| Panel | `#E3E3E3` | R1 newsletter panel (paper grain) | T3 panels, cart totals, table rules (1 px), input underline | ≈ 6 % |
| Dark | `#44413C` | R1 entrance right half | hero right-half grade, `sb-people` field, split-head right half, footer bottom bar | ≈ 10 % |
| Light half | `#908F8B` | R1 entrance left half | hero left-half grade, split-head left grade, muted text on dark | in photos |
| Muted text | `#6E6C68` | between ink and `#908F8B` (contrast 5.2:1 on ground) | meta, captions, fading list rows base | — |
| Card | `#FFFFFF` | R2 card | the white card in `sb-people` and on 2 inner pages | ≈ 4 % |
| Ghost | `rgba(255,255,255,.12)` | R2 ghost ring text | ring letters on `#44413C` | decoration |
| **Accent Kuruchiku** | `#6B5346` | row hex (R1 has no accent; token a "accent none") | bracket labels on light ground, link hover/underline, the ■ square before "Write to us", active nav underline (1 px), price-row hover price colour | **< 3 %**, never a background |

- No beige: ground is R1's neutral `#F9F9F9` (not cream). No colour field: the only large dark is warm grey `#44413C`.
- Contrast: ink on ground 14:1; `#6B5346` on ground 7.0:1 (OK for 0.75rem labels); white on `#44413C` 10.6:1; white on the graded left half — overlay must keep the text area ≥ 4.5:1 (check with a screenshot sampler; raise overlay to .45 if not). Accent is **never** used on the dark (2.0:1): on dark, bracket labels are white.
- **First-screen saturation**: R1 measures **0 %**. Hard cap = row note **15 %** (`scripts/check-first-screen.py screenshots/home-desktop.webp --max 15`), **target ≤ 3 %**: the photos are desaturated by STYLE and graded by overlay; no coloured UI in the hero.

## 3. Type (font_direction **serif**; row fonts Libre Baskerville + Work Sans; roles from token b)

- **Latin display (headings)**: **Libre Baskerville** 400 / 400 italic / 700 (OFL). **Latin body, UI, nav, labels, lists, numerals**: **Work Sans** 400 / 500 / 600 (OFL, variable or static). Work Sans is a close OFL stand-in for R1's grotesk (Suisse Int'l) at small sizes; R1's whole system of small grotesk text stays, and the serif carries only the few large lines R1 does not have (quality rule ≥ 4.25rem).
- **CJK (serif direction, Mincho everywhere; no Noto Sans mixed in)**: zh-TW **Noto Serif TC**, ja **Noto Serif JP**, for headings *and* body.
- Stacks (theme.json `settings.typography.fontFamilies` with `fontFace`, woff2 in `assets/fonts/`; the same files load in the editor iframe and the front end; zh-TW / ja subset files built the Hokuto / Hada way, not with the broken subset script):
  - `display`: `"Libre Baskerville", "Noto Serif TC", "Noto Serif JP", Georgia, "Times New Roman", serif`
  - `body`: `"Work Sans", "Noto Serif TC", "Noto Serif JP", system-ui, -apple-system, "Segoe UI", sans-serif`
  - `:lang(zh-TW)` → display & body `"Libre Baskerville"/"Work Sans", "Noto Serif TC", serif`; `:lang(ja)` → `…, "Noto Serif JP", serif`. Because style.css has `:lang(` rules: copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it in functions.php. `check-editor-fonts.mjs` must pass in en and zh-TW.
- Scale (theme.json `fontSizes`; **max = `xx-large` 4.25rem**):
| Slug / use | Font | Size | Weight | lh | ls | Source |
|---|---|---|---|---|---|---|
| `xx-large` home statement (block 2), inner page H1 | Libre Baskerville | **4.25rem** at ≥ 1280; `clamp(2.5rem, 5.2vw, 4.25rem)` | 400 | 1.12 | −0.01em | quality rule (R1 has no big type) |
| `x-large` passage H2 ("The new shelves") | Libre Baskerville | 2.25rem (mobile 1.75rem) | 400 | 1.2 | 0 | — |
| `large` card / journal title | Libre Baskerville | 1.375rem | 400 | 1.35 | 0 | R2 card title 20 px ≈ 1.25rem, +10 % |
| `medium` lead paragraph | Work Sans | 1.0625rem | 400 | 1.75 | 0.01em | — |
| body | Work Sans | 1rem | 400 | 1.75 | 0.01em | R1 lead lh 1.6–1.8 |
| nav | Work Sans | **1rem** | **600** | 1 | **0.01em** | R1 nav 16/16 semibold .16 px |
| `small` index rows, lists, panel text | Work Sans | **0.875rem** | 400 | **1.5 (21 px)** | 0.01em | R1 list 14/21 .14 px |
| panel title | Work Sans | **0.9375rem** | **500** | **1.2 (18 px)** | 0 | R1 newsletter 15/18 medium |
| hero caps title, wordmark-style labels | Work Sans | **0.875rem** | 500 | 1.4 | **0.24em**, uppercase | R1 wordmark ≈13 px .2em (+1 px for legibility) |
| hero blurb | Work Sans | **0.8125rem** | 400 | **1.65** | 0.02em | R1 blurb ≈11 px lh 1.6 (+2 px for legibility) |
| `x-small` bracket labels, meta | Work Sans | **0.75rem** | 400 | 1.5 | 0.08em | R1 "( TOKYO )" ≈12 px |
| site wordmark "SHIORI BOOKS" | Work Sans | 1.125rem | 500 | 1 | **0.32em**, uppercase | R1 logo 215 × 14 wide-spaced caps |
| ghost ring letters | Work Sans | 11rem (176 px) | 600 | — | 0.04em | R2 ≈200 px |
- CJK sizes ≈ 0.75× for display (`xx-large` → `clamp(2rem, 4vw, 3.2rem)`), body 1rem lh **1.85** ls 0.04em; caps-tracking labels in CJK use ls 0.12em (no uppercase). fr / de: `hyphens: auto` on body and headings; headings `overflow-wrap: anywhere` as a backstop.

## 4. Header, footer, layout tokens

- **Header (nav split, R1 home layout)**: height 88 px desktop; wordmark at **x 38, top 28** (token c). Nav (one menu only, six items) starts at the **42.1vw line** and runs to the right margin with `justify-content: space-between` (R1 items 606 / 767 / 909 / 1084 / 1191 / 1313, gaps 60–70 px): **Shop · New Books · Readings · Second-hand · Visit · Cart (0)**. Work Sans 600 1rem ls .01em; hover: 1 px `#6B5346` underline 4 px below, .3s ease; current page: same underline. On the front page the header is `position:absolute` over the hero with **white** type; on all other pages ink on `#F9F9F9`. Not sticky (R1 header is static; no scroll listener). < 1100 px: wordmark + a text button "Menu" (Work Sans 600) → full-screen `#F9F9F9` overlay with the six items at 1.5rem and the footer lists; < 782 px on the front page the header is **in flow** (ink on `#F9F9F9`, 64 px), not over the photo.
- **Footer**: ground `#F9F9F9`, 1 px `#E3E3E3` top rule, padding 96 / 38. Four 14/21 lists starting at the 42.1vw line (R1 mega-menu rhythm): *Shop* (Shop, New Books, Second-hand, Subscription, Gift voucher) · *Readings* (Programme, Story hour, Journal) · *Shop info* (About, Booksellers, At the counter, Visit) · *Hours* (4 lines). Left at x 38: wordmark + address 3 lines. Bottom bar `#44413C` 56 px, white 0.75rem: "© 2026 Shiori Books · 27 Calder Lane, Edinburgh" left, "( EDINBURGH )" right.
- **Layout**: content max 1364 px (1440 − 2 × 38); the right-hand column always starts at 42.1vw. Section vertical rhythm 160 px desktop / 96 px mobile (R1 home is airy: min-height 102rem for one screen of content). **Radius 0 everywhere** (token d) except the R2 white card (12 px) and R2 capsule links (35 px). **No shadows.** Only borders: 1 px `#E3E3E3` table rules, 1 px ink input/email underline.

---

## 5. Home page (en)

### First screen (1440 × 900) — composition
- Two halves, 720 × 900 each (height `100svh`, min 680, max 1000), meeting at x 720 with no gap or line; grain over both; header over the top in white.
- Left half (link to /visit/, `aria-label` "Visit the shop"): `hero-front-table`, focal point `background-position: 40% 50%` so the bookseller's hands and the shadow band stay inside the half. Text block: content box padding-left **12.5vw** (text centre at 31.25vw), title at 39 % height:
  - `<h1>` SHIORI BOOKS
  - blurb: "An independent bookshop on Calder Lane, Edinburgh, since 2011. New fiction, poetry and essays on the front table, second-hand and rare in the back room, and every book chosen by a bookseller." (34 words)
  - ( EDINBURGH )
- Right half (link to /readings/, "The Saturday reading"): `hero-evening-shelves`, padding-right 12.5vw (centre 68.75vw):
  - THE SATURDAY READING
  - "Every Saturday at half past seven the lamps go low in the back room and someone reads aloud: a poet, a translator, one of us. Thirty seats, five pounds, back against any book you take home." (37 words)
  - ( SATURDAYS, 19:30 )
- Hover / focus on a half: its overlay alpha −0.08 (slightly brighter) in .3s ease; focus-visible ring 1 px white inset 12 px.
- Forbidden on the first screen: any heading > 1rem, buttons, table, form, search, badges, a scroll arrow, vertical text, absolutely positioned labels.
- **390 × 844**: header in flow (64 px, ink), then left half on top, right half below, each `min-height: calc((100svh - 64px) / 2)` (≥ 340 px), no horizontal padding offset (text centred, max-width 18rem), all text in normal flow inside the Cover (no absolute positioning). Both blocks fully visible in the first screen.

### Block order
| # | Pattern | Purpose | Layout and photos | Copy |
|---|---|---|---|---|
| 1 | `sb-entrance` | KV: two doors, day and evening | **T1** as above; `hero-front-table`, `hero-evening-shelves`; `sp-parallax` on both | 2 × ~35 words |
| 2 | `sb-shop` | the shop in one look (R1 home composition) | **T3**. Padding-top 160. Row A (two areas): left x 38 → 38vw: label "( THE SHOP, SINCE 2011 )" accent 0.75rem, 16 px below it H2 `xx-large` "Books chosen slowly, for the street we live on." (max-width 9.5em). Right from 42.1vw: three 14/21 lists, columns at 42.1vw / 53.3vw / 75.3vw (R1 x 606 / 767 / 1084): **Shelves** (Fiction, Poetry, Essays, Art & Photography, Architecture, Cookery, Travel & Maps, Children's, Second-hand, Rare), **On the front table** (the 12 new-book titles; rows 9–12 fade to opacity .8 / .6 / .4 / .25 like R1's list end), **Shop info** (the 4 hours lines + "Visit →"). Each list has a 14/21 Work Sans 600 header line. Row B, 120 px lower: photo **`shop-counter-shelves`** flush to the **left viewport edge**, 41.9vw × (41.9vw / 1.43), radius 0; at 42.1vw + 0, top-aligned with the photo: one paragraph max-width 30em; the **grain panel** 30.1vw (min 360) × auto (min 260) flush to the **right viewport edge**, bottom aligned with the photo bottom: title "The Saturday letter" (15/18 medium), text 0.8125rem lh 1.4 "One short letter a week: what came in, who is reading on Saturday, and one book we cannot stop handing to people.", 1 px ink underline row with `letters@shioribooks.example` (mailto) 0.8125rem, bottom-right "■ Write to us" (■ 10 px `#6B5346`), top-right 24 px line ↗ → /subscription/. Panel padding 38 px; grain = same SVG noise tile, opacity .12. | statement 9 words + paragraph ~70 words + panel 25 words |
| 3 | `sb-passage-new` | passage 01: the new shelves | Photo **`new-shelves-hands`** flush to the **right viewport edge**, 41.9vw, 1.43:1, radius 0, `sp-reveal sp-reveal--up` on the figure. Text column x 8.3vw → 50vw (max 34em), vertically starting at the photo top: label "( 01 )" accent, H2 `x-large` "The new shelves", two paragraphs (~120 words: how Hanna buys, why the front table changes every Tuesday, special orders free in 2–4 days), text link "This month's new books →". Under the text, 64 px gap, small photo **`spines-detail`** 3:4 at 15.3vw (220 px) wide, left edge on the text column, radius 0. | ~120 words |
| 4 | `sb-readings` | passage 02: the Saturday reading + programme | Text at the 42.1vw line (max 34em): label "( 02 )", H2 "The Saturday reading", one paragraph (~80 words: back room, Amara hosts, 30 seats, £5 back against a book, story hour 11:00 second Saturday). 80 px below: **T2** index, 12 rows from §0, thumbs **`reading-poetry`** (default, row 1), **`reading-conversation`**, **`reading-children`**, **`reading-chairs`** in the sticky left column. `sp-stagger` on the list, `sp-reveal sp-reveal--up` on each row. Under the list at 42.1vw: "Doors 19:00 · reading 19:30 · 30 seats · £5" (0.75rem muted) and "Full programme →". | ~80 words + 12 rows |
| 5 | `sb-people` | passage 03: the people who stay | **R2 dark field**: full-bleed `#44413C`, padding 160 / 160, `overflow: clip`. Ghost ring: inline SVG `aria-hidden` circle r = 560 px, `<textPath>` "SHIORI BOOKS · THE PEOPLE WHO STAY · SATURDAYS · " Work Sans 600 176 px, fill `rgba(255,255,255,.12)`, no stroke, centred at (72vw, 70 %) of the section so ~45 % of the ring is clipped; the SVG sits in a `.sp-parallax__layer` (`--sp-par: 12%`, mobile 6 %), section has `sp-parallax`. Card: white `#FFFFFF`, radius **12 px**, x 60 px → 100vw − 60 px (R2 x 60–1380), min-height 540, two halves; left half text centred vertically, padding 96 px: label "( 03 )" muted, H2 `x-large` ink "The people who stay", paragraph (~90 words: Callum's back room, Tomasz's bench, Lucía's story hour, the regulars who stay after closing to finish a chapter), one 0.875rem line with the seven names; right half photo **`people-recommend`** flush to the card's right/top/bottom edges, radius 0 12 px 12 px 0, `object-fit: cover`. `sp-reveal sp-reveal--wipe` on the card wrapper (clip on the child). Below the card, 48 px: two R2 capsules (240 × 70, 1 px white border, radius 35 px on the left side only, the bottom line extends 80 px past the right end; Work Sans 600 1rem white): left "Meet the booksellers" → /booksellers/, right-aligned "About the shop" → /about/. | ~90 words |
| 6 | `sb-counter` | prices (functional, mid-page) | back to `#F9F9F9`. Text at 42.1vw: label "( 04 )", H2 "At the counter", one sentence. Then the **price list, all 8 rows, full container width** (x 38 → 100vw − 38) — §7. No sp-reveal on the table. Under it "Prices in pounds sterling, the same in every language. · Services →". | 8 rows + 30 words |
| 7 | `sb-journal` | notes from the counter (proof) | Label "( 05 )", H2 "Notes from the counter" at 42.1vw; Query Loop latest 3 posts in 3 columns across the container, gap 38 px: featured image 3:2 radius 0 (posts 1–3: **`bookbinding-repair`**, **`gift-wrap-detail`**, **`subscription-parcel`**), then date 0.75rem muted (DD.MM.YYYY), title `large` Libre Baskerville. `sp-stagger` + cards `sp-reveal--up`. "All notes →". | 3 titles |
| 8 | `sb-visit` | visit / convert (T3 mirrored) | Photo **`shopfront-dusk`** flush to the **right viewport edge**, 41.9vw, 1.43:1. Left: grain panel `#E3E3E3` flush to the **left viewport edge**, 30.1vw (min 360), bottom aligned with the photo, padding 38: title "27 Calder Lane" (15/18 medium), address 3 lines, hours as 4 index rows 14/21 (day left, hours right, nowrap), phone, email, "Find us →" → /visit/. Above the panel at x 38: H2 `x-large` "Come in, stay a while." and one paragraph (~40 words). | ~60 words |

- English home ≥ 250 words; narrative paragraphs ≥ 3 (blocks 2, 3, 4, 5 each have one of ≥ 20 words). CJK home ≥ 500 characters.
- **Home image positions (14 `<img>`, 11 visible at once)**: 1 `hero-front-table`, 2 `hero-evening-shelves`, 3 `shop-counter-shelves`, 4 `new-shelves-hands`, 5 `spines-detail`, 6–9 index thumbs `reading-poetry` (visible) + `reading-conversation`, `reading-children`, `reading-chairs` (hover), 10 `people-recommend`, 11–13 journal `bookbinding-repair`, `gift-wrap-detail`, `subscription-parcel`, 14 `shopfront-dusk`. No image twice on the home page. The two hero photos are Cover backgrounds; make them `<img class="wp-block-cover__image-background">` (Cover with an image, not CSS background) so they count as image positions.

### Comparison with recent themes (home block order)
| # | Akira Audit (shipped) | Kosei (shipped) | Seiwa (shipped) | Hayate (shipped) | Hozen (shipped) | **Shiori** |
|---|---|---|---|---|---|---|
| 1 | full-bleed photo hero + white info bar | 2×2 framed panel hero + ■ index | headline + staggered photo pair on pale panels | slogan left + 3 bleeding photos | top half text + bottom-half parallax band | **left/right halves, day vs evening, tiny centred caps, no headline** |
| 2 | scope circle in inset white card | case wall (masonry) | about: scattered masked photos | hairline service index 01–06 | brand statement + ghost photos | **R1 home: statement + 3 small lists + edge photo + grain panel** |
| 3 | 4 alternating framed chapters | intro | products: cards bleeding right | shop story + road line | sites: staggered pair | **passage 01: edge photo right + text** |
| 4 | ink band, 3 scrim cards | ruled services table | ledger (sticky media) | full-bleed parallax ride band | network | **passage 02: dense 3-column programme list + hover thumb** |
| 5 | case: text + photo pair | parallax interlude | showroom | process rows | roof band | **passage 03: dark field, ghost ring, white 12 px card** |
| 6 | fees table | process index | projects card | price table | call-outs | price list |
| 7 | people: framed photo + 7 hairline rows | notch + arch studio | price table | stories | services | journal (3) |
| 8 | contact band | fees | notes | products | prices | **visit: grain panel left + edge photo right** |
| 9 | — | journal, contact | contact card | contact band | notes, contact | — |
Why not alike: no framed grid or framed photo frames (Akira, Kosei), no inset scope card, no scrim cards on an ink band, no masonry, no staggered pairs, no bleeding photo trio, no full-bleed parallax interlude band, no numbered 01–06 service rows (our index has **no numbers, no rules, three text columns, 14 px, dimmed past rows**, and lists events, not services), no masked/arched/capsule photos, no ■ section labels (our only ■ is R1's "■ SIGN UP" mark inside the grain panel). Our hero is the only one of the six with two equal photographic halves side by side and no headline. Our recurring units — bracket labels, the 42.1vw start line, edge-touching 1.43:1 photos, the grain panel — appear in none of them. Akira's 7 hairline people rows sit beside a framed photo on the home page; ours put the people in an R2 white card on a dark field on the home page, and the 7-row name list only on the Booksellers inner page, as T2 with the R1 left-column thumb.

---

## 6. Inner pages (10 + WooCommerce templates; no sidebar)

**Split head (T1 on inner pages)**: full-bleed, height **360 px** desktop / 220 px mobile (mobile: stays two halves side by side, 50/50, text only in the left half). Left half: the page's own photo (listed below) graded `rgba(144,143,139,.38)` + grain, centred caps page name (0.875rem, ls .24em, white) + bracket label; right half: solid `#44413C` + grain with one fact line in white 0.8125rem (e.g. "( TUE–SAT · SUN 12–17 )"), centred, pulled to the centre line as on home. No parallax on inner split heads. Under it on the ground, 96 px: `<h1>` Libre Baskerville `xx-large` at x 38 (max-width 14em) and a lead paragraph at the 42.1vw line.

1. **Shop** (`archive-product.html`, `taxonomy-product_cat.html`, `product-search-results.html`): split head (left `shop-counter-shelves`), H1 "Things to take home". Category index 14/21 (Subscriptions, Gifts, Readings, Repairs). Grid 3 columns (2 tablet, 1 mobile), gap 38: image 4:5 radius 0 on `#E3E3E3`, category 0.75rem caps muted, name Libre Baskerville 1.375rem, price Work Sans 500 1rem. Add-to-cart = text link "Add to bag →" (underlined on hover), no filled button. 5 products (§0).
2. **Single product** (`single-product.html`): gallery left 41.9vw **flush to the left viewport edge** (T3), summary at the 42.1vw line: bracket category, title `x-large`, price, short description, quantity + "Add to bag" (filled ink `#2B2B2B`, white, radius 0, 48 px), line "Free special orders · gift wrapping £2". Below: description tab, then grain panel with the price list row that matches the product.
3. **New Books** (`page-new-books`): split head (left `new-shelves-hands`), H1 "The new shelves". Two paragraphs (how the front table works, Tuesday changes, special orders). **T2** 12 titles: title | author | price right; the left thumb column shows one static `shop-counter-shelves` (no hover swap). Close line: "Ask at the counter or email Ravi to reserve."
4. **Readings** (`page-readings`): split head (left `reading-chairs`), H1 "The Saturday reading". Paragraph on format; **T2** full programme 12 rows with hover thumbs `reading-poetry`, `reading-conversation`, `reading-children` (row 4 thumb omitted here because `reading-chairs` is in the head); **T3** flush-left `reading-room-window` + grain panel "How a reading night runs" (doors 19:00, 19:30–20:30, 30 seats, £5 back, story hour 11:00 second Saturday, free). Link to the product "Saturday Reading Seat".
5. **Second-hand & Rare** (`page-second-hand`): split head (left `spines-detail`), H1 "The back room". Three paragraphs (how Callum buys, condition notes, Thursdays valuations free); **T2** 8 finds title | year | price; **T3** flush-right `staff-sorting` + grain panel "Thursdays: valuations — by appointment, free".
6. **Shelf Subscription** (`page-subscription`): split head (left `subscription-parcel`), H1 "A book a month, chosen for you". The 4-paragraph "how it works" (§0, 5th / 10th / 30 days); **T3** flush-left `reading-room-window` + grain panel with "£24 / month" and "£70 three-month gift"; **R2 card** on `#44413C` (no ghost ring on inner pages) with `gift-wrap-detail`: "Giving it to someone?" + 50 words + capsule "Gift subscription →" (product 2).
7. **At the counter** (`page-services`): split head (left `gift-wrap-detail`), H1 "At the counter". Full **price list** (§7). Then three short sections (Special orders · Gift wrapping · Repairs) each 60 words; **T3** flush-right `bookbinding-repair` + grain panel "Repairs: spine re-backing £18, about 10 working days, Tomasz Wilk".
8. **Booksellers** (`page-booksellers`): split head (left `staff-sorting`), H1 "The people who stay". One paragraph; **T2** 7 rows name | role | since (year right), the left thumb column shows one static `people-recommend` (no hover swap). Then **R2 card** on `#44413C` + ghost ring (`--sp-par 12%`) with `reading-room-window`: Amara's note on the Saturday reading (70 words). No people grid, no portraits row.
9. **About** (`page-about`): split head (left `hero-evening-shelves`), H1 "Since 2011, on Calder Lane". Narrative in 3 sections (~350 words: Hanna and Callum open in 2011 with one room; the back room in 2015 and the first Saturday reading; the bench and repairs since 2016; the subscription since 2019); **T2** history rows: 2011 Shop opens · 2015 Back room and the Saturday reading · 2016 Bindery bench · 2018 Children's shelves and story hour · 2019 Shelf subscription · 2026 About 9,000 books (year right). **T3** flush-left `shop-counter-shelves` + grain panel "27 Calder Lane".
10. **Visit** (`page-visit`, contact): split head (left `hero-front-table`), H1 "Come in, stay a while." **T3** flush-right `shopfront-dusk` + grain panel with address, phone, email; **T2** hours 4 rows; paragraph "Getting here" (bus and a ten-minute walk from the centre, step-free front room, back room has one step and a ramp) — no real transport line names. No form required; mailto link.
11. **Journal** (`home.html`, `archive.html`, `single.html`): split head (left `reading-poetry`), H1 "Notes from the counter". **T2** post list title | category | date with hover thumbs = the posts' featured images (4 rows; post 4's image `reading-poetry` already in head → that row has no thumb). Single: bracket category, title `xx-large` (clamp), date, featured image **flush-left 41.9vw** (T3) with the text column at the 42.1vw line (max 36em).
12. **Cart / Checkout / My account / Order confirmation**: small split head (240 px, left `spines-detail`), H1 `x-large`; totals / summary column on the `#E3E3E3` grain panel, radius 0; buttons filled ink; notices with a 2 px `#6B5346` left rule. Works without WooCommerce (templates must not fatal; Shop page shows a static list of the five items with a note).
13. **404 / search**: split head + one line + "Back to the front table →".

---

## 7. Responsive (hard)

- **390 px**: no horizontal overflow (`html, body { overflow-x: clip }`). First screen: header in flow, two stacked halves, text centred **in normal flow**; **no vertical text, no absolutely positioned labels or captions** anywhere in the first screen; ghost ring hidden < 782 px (`display:none` on the SVG, the layer stays).
- T3 on mobile: edge photo becomes full width (still edge to edge, 1.43:1), text below with 24 px side padding, grain panel full width in flow after the text.
- T2 on mobile: thumbnail column removed except the first upcoming thumb shown once above the list (full width 3:2); each row stacks: title (0.9375rem, ink) then "with · date" (0.8125rem muted); 12 px between rows; past rows opacity .6.
- R2 card on mobile: photo on top (4:3, radius 12 12 0 0), text below (padding 32), capsules full width stacked.
- **Price list ≥ 782 px (checked at 800 and 1280)**: `table.sb-prices` at **full container width** (x 38 → 100vw − 38; never inside the 42.1vw column), `table-layout: auto`, columns `Service` (min 14rem) | `What is included` (fills) | `Price` (`white-space: nowrap; text-align: right; padding-left: 2rem`), Work Sans 0.9375rem lh 1.5, rows 1 px `#E3E3E3` bottom rule, padding 16 px 0; hover row: price turns `#6B5346`. Never clipped, never horizontally scrolling.
- **Every table under 782 px stacks** (price list, index rows, hours, history): `display:block` rows; price list row = service (600) / included (muted) / price (500, own line, left).
- Split heads < 782 px: 220 px tall, still 50/50, labels centred in flow.
- Breakpoints: 782 (WP), 1100 (header menu), 1280.

## 8. Scroll effects (from stage-a "Scroll technique candidates"; `pipeline/scroll-effects-spec.md`; three kinds per page max)

| Effect (sp-*) | Where | Source on reference | Trigger / time / easing (ours) |
|---|---|---|---|
| **`sp-parallax`** | (a) Home hero: two Covers, each with `sp-parallax`, moving layer = `.wp-block-cover__image-background`; overlay and text static. (b) Home `sb-people`: ghost ring SVG in `.sp-parallax__layer`. | (a) R1 entrance → site has smooth-scroll (Lenis) inertia; we express that drift as the photos moving slower than the page. (b) R2 ghost ring text drifting with scroll. | scroll-driven (`animation-timeline: view()`, IO + translate3d fallback by sp-scroll.js). (a) `--sp-par: 8%` desktop, `5%` < 782 px. (b) `12%` desktop, hidden < 782 px. reduced-motion / `?sp-static` / editor: no movement. |
| **`sp-reveal sp-reveal--up`** + **`sp-stagger`** | Home `sb-readings` index rows (list `sp-stagger`, rows `sp-reveal--up`); passage photos and text columns in blocks 3 and 8; journal cards (`sp-stagger`). Inner: index lists. | R2 slide-in keyframes (scroll class, **1 s ease-in-out forwards**); R1 list rows. | IntersectionObserver, once. Set `--sp-dur: 1s`, `--sp-ease: ease-in-out` (R2 token g), `--sp-dist: 24px`; stagger .12 s (spec default). |
| **`sp-reveal sp-reveal--wipe`** | Home `sb-people` white card (clip on the child wrapper); Subscription and Booksellers R2 cards. | R2 section background swap dark ↔ white (0.5 s ease-in-out) — the white card "arriving" on the dark ground. | IO, once, 1.1 s `cubic-bezier(.77,0,.175,1)` (spec default; R1 menu easing `cubic-bezier(.77,.1,.24,1)` is the same family). |
- Hero: **no sp-reveal**; only the gated CSS fades from the KV checklist (1 s ease text, 0.6 s ease header).
- Not on: price list, forms, legal text, the hero, header.
- Hover (CSS only, not counted): index row opacity .3s ease; thumbnail swap .3s ease; nav underline .3s ease (R1 token g).
- `check-parallax.mjs` must pass (hero layer offset ≥ 6 px desktop and mobile; reduced-motion 0; ≥ 3 reveals hidden before entry; nothing transparent at the bottom).

## 9. Similarity table (target ≈ 80 % of R1, R2 for the supporting card)

| Dimension | Reference value (token) | Shiori value |
|---|---|---|
| Ground | `#F9F9F9` ≈ 70 % (a) | `#F9F9F9` ≈ 70 % |
| Text | `#2B2B2B` (a) | `#2B2B2B` |
| Panel | `#E3E3E3` paper grain ≈ 6 % (a, f) | `#E3E3E3` + grain ≈ 6 % |
| Entrance halves | light `#908F8B`–`#9A9792` / dark `#44413C`, 50/50 (a) | photo graded to `#908F8B` / `#44413C`, 50/50 |
| Accent | none (a) | `#6B5346` < 3 % (row requirement) |
| First-screen saturation | 0 % (a) | ≤ 3 % target, 15 % cap |
| Dark section | R2 `#3C3C3C` (a) | `#44413C` (R1 dark, +2 % L) |
| UI face | Suisse Int'l grotesk 400–600 (b) | Work Sans 400–600 |
| Nav | 16 / 16, 600, ls .16 px (b) | 1rem / 1, 600, ls .01em |
| List | 14 / 21, 400, ls .14 px (b) | 0.875rem / 1.3125rem, 400, ls .01em |
| Panel title | 15 / 18 medium (b) | 0.9375rem / 1.2, 500 |
| Hero caps / blurb / bracket | ≈13 px .2em / ≈11 px lh 1.6 / ≈12 px (b) | 14 px .24em / 13 px lh 1.65 / 12 px .08em |
| Largest type | logo 14 px tall; no headings (b) | 4.25rem serif, used once per page (quality rule; deliberate +) |
| Header | logo x 38 y 28; nav 606→1313 (c) | wordmark x 38 y 28; nav 42.1vw → right margin |
| Hero text placement | centres 31.25 % / 68.8 %, title y 39 % (c) | same |
| Hero vertical gaps | ≈ 54 / 58 px (c, screenshot) | 54 / 58 px |
| Edge photo | 603 × 421, 1.43:1, 41.9 %, flush left, radius 0 (c, e) | 41.9vw, 1.43:1, flush left or right, radius 0 |
| Panel | 434 × 260, flush right, bottom = photo bottom (c, f) | 30.1vw (434 @1440) × ≥ 260, flush to the opposite edge, same alignment |
| List thumb | 400 × 267 3:2, x 76, y 108, hover swap (e) | 27.8vw 3:2, x 5.3vw, sticky top 108, hover swap .3s |
| Radius | 0 (d); R2 card ≈ 12, capsule 70 h (d) | 0; card 12; capsule 70 h |
| Borders / shadow | 1 px underline only; no shadow (d) | 1 px underline + 1 px table rules; no shadow |
| Decoration | brackets, ×, ■ SIGN UP, grain (f); R2 ghost ring .12 (a) | brackets, ↗, ■ Write to us, grain; ghost ring .12 |
| Motion | entrance fade 1 s ease; header .6 s; hover .3 s; R2 slide-in 1 s ease-in-out; bg swap .5 s (g) | text fade 1 s ease; header .6 s; hover .3 s; reveal-up 1 s ease-in-out; wipe 1.1 s; parallax 8 % |
| Photo treatment | desaturated / B&W film, soft window light (e) | film grain, near-monochrome warm grey, soft window light (STYLE) |

## 10. Images (16, Grok, one at a time, read each one)

**Imagery: photo** (stage-a IMAGERY = photo). STYLE (exact string on every prompt):
`documentary photograph shot on 35mm film, visible fine film grain, desaturated near-monochrome palette of warm greys, stone and soft brown, soft natural window light with a gentle diagonal shadow, shallow depth of field, calm quiet mood, airy mid-tones, modern independent bookshop with plain pale walls and simple pale wooden shelves, diverse adults, candid unposed moment, book covers and spines plain and unlettered, no readable text, no letters, no logos, no signage, no Japanese elements`

No cut-outs. Each ≤ 300 KB, ≤ 2000 px, WebP, `assets/images/<name>.webp`, readme line per image (AI-generated, CC0). Re-generate any image with letters on spines, logos, broken hands, warped faces, or a colour cast outside the STYLE.

| # | File | Subject / composition | Ratio | Used on (once per page) | Home |
|---|---|---|---|---|---|
| 1 | `hero-front-table` | bookseller (woman, 40s) wrapping a hardcover in plain paper with cotton string at a front table by a window; a broad soft diagonal window shadow across the table and wall; subject in the left-centre | 4:5 portrait (fills a half) | Home hero left; Visit split head | **yes** |
| 2 | `hero-evening-shelves` | back room at evening: tall shelf wall, one low warm lamp, a row of empty wooden chairs set out for a reading, very dark mid-tones | 4:5 | Home hero right; About split head | **yes** |
| 3 | `shop-counter-shelves` | quiet front room: pale shelves, two pendant lamps, a wooden counter, nobody in frame | 1.43:1 | Home block 2; About T3; New Books thumb; Shop split head | **yes** |
| 4 | `new-shelves-hands` | hands placing new hardcovers face-out on a shelf, plain covers | 1.43:1 | Home passage 01; New Books split head | **yes** |
| 5 | `spines-detail` | close-up of cloth-bound spines, plain, soft light | 3:4 | Home passage 01 small; Second-hand split head; cart heads; product Gift Voucher | **yes** |
| 6 | `reading-poetry` | person reading aloud from a slim book by a window at dusk, small audience softly out of focus | 3:2 | Home index thumb (default); Readings thumb; Journal split head; post 4 | **yes** |
| 7 | `reading-conversation` | two people in conversation across a small table with a book between them, lamp light | 3:2 | Home index thumb; Readings thumb | **yes** |
| 8 | `reading-children` | children's story hour on a rug, a reader on a low stool, children seen from behind | 3:2 | Home index thumb; Readings thumb | **yes** |
| 9 | `reading-chairs` | back room set for a reading, 20–30 chairs, a few people seated, reader at a lamp | 3:2 | Home index thumb; Readings split head; product Saturday Reading Seat | **yes** |
| 10 | `people-recommend` | bookseller (man, 30s) handing a paperback to a regular customer (older woman) between shelves | 4:3 (card half) | Home people card; Booksellers thumb | **yes** |
| 11 | `bookbinding-repair` | hands at a workbench re-backing a book spine, glue brush, bone folder | 3:2 | Home journal (post 1); Services T3; product Spine Re-backing | **yes** |
| 12 | `gift-wrap-detail` | a hardcover wrapped in plain paper and cotton string with a blank card, on a table in window light | 3:2 | Home journal (post 2); Services split head; Subscription R2 card; product Three-month Gift | **yes** |
| 13 | `subscription-parcel` | three books tied with cotton tape and a blank card on a doorstep bench | 3:2 | Home journal (post 3); Subscription split head; product Monthly | **yes** |
| 14 | `shopfront-dusk` | small bookshop window glowing at dusk on a quiet stone street, no lettering on the window or above it | 1.43:1 | Home visit; Visit T3 | **yes** |
| 15 | `reading-room-window` | person reading in an armchair by a tall window, rain-soft light | 4:5 | Readings T3; Subscription T3; Booksellers R2 card | no |
| 16 | `staff-sorting` | two booksellers sorting second-hand books on a back-room table | 1.43:1 | Second-hand T3; Booksellers split head | no |

Per-page check (no repeats on a page):
- Home: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14 (14 positions, all different).
- Shop: 3 (head) + product images 13, 12, 5, 9, 11.
- New Books: 4 (head) + 3 (thumb). Readings: 9 (head) + 6, 7, 8 (thumbs) + 15 (T3). Second-hand: 5 (head) + 16 (T3). Subscription: 13 (head) + 15 (T3) + 12 (card). Services: 12 (head) + 11 (T3). Booksellers: 16 (head) + 10 (thumb) + 15 (card). About: 2 (head) + 3 (T3). Visit: 1 (head) + 14 (T3). Journal index: 6 (head) + thumbs 11, 12, 13. Single post: its featured image only. Cart etc.: 5.
This list is binding.

---

## 11. Home acceptance checklist (stage-1 review and stage-2 verdict compare against this)

1. First screen 1440 × 900: two **equal** photo halves side by side, light left / dark `#44413C`-toned right, grain visible; in each half small centred caps title → blurb → bracket label, pulled toward the centre line (centres ≈ 31 % / 69 %); header wordmark + six nav words in white from the 42 % line; **no** heading over 1rem, button, table, form, search, badge or scroll arrow. `check-first-screen.py --max 15` passes (target ≤ 3 %).
2. 390 × 844: header in flow; two stacked halves with all text in flow; no vertical text, no absolutely positioned labels, no overlap (auto-gates mobile overlap check passes).
3. Block 2 shows T3 exactly: statement at 4.25rem left, three 14/21 lists from the 42.1vw line with the fading list end, a 1.43:1 photo **touching the left viewport edge** at 41.9vw, a `#E3E3E3` grain panel **touching the right edge**, bottom-aligned with the photo.
4. Block 4 shows T2: 12 rows, three columns, date flush right, 21 px pitch, past rows dimmed, sticky 3:2 thumb in the left column that swaps on hover.
5. Block 5: full-bleed `#44413C`, ghost ring letters at 12 % white partly clipped, white 12 px card text-left / photo-right, two capsule links.
6. Price list (8 rows, §0 numbers) full container width at 800 and 1280, price column nowrap right, not clipped; stacks under 782.
7. Motion: hero photos parallax (`check-parallax.mjs` ≥ 6 px desktop and mobile, 0 under reduced-motion); index rows and journal cards reveal up 1 s ease-in-out; card wipes; hero has no sp-reveal; nothing transparent after scrolling to the bottom; `?sp-static` shows everything.
8. ≥ 8 image positions (14), no repeats, all 16 images share the STYLE; no letters on spines.
9. Colours: ground `#F9F9F9` dominant, panel `#E3E3E3`, dark `#44413C` only in hero right, people field and bars; accent `#6B5346` only on labels, underlines and ■; no beige, no colour field.
10. Type: Libre Baskerville headings, Work Sans UI at R1's small sizes; theme.json max 4.25rem; fonts via theme.json fontFace, editor = front end (en and zh-TW).
11. Copy: ≥ 250 English words, ≥ 3 narrative paragraphs; every number equals §0 (founded 2011, hours, 30 seats, £5, the 8 prices).
12. Block order equals §5 and differs from Kosei / Seiwa / Hayate / Hozen as tabled; no people grid, step grid, timeline, masonry, staggered pair, side rail, collage or cut-out.
