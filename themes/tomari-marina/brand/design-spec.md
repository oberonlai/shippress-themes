# Tomari Marina: design spec (stage 1, binding for implementation)

Slug `tomari-marina`, marina and berth operator (type `hospitality`, page structure booking-led), five languages (en, zh-TW, ja, fr, de). Main reference **sakazuki** (https://sakazuki.io/), secondary **Yamatane Museum of Art** (https://www.yamatane-museum.jp/). Measurements: `reference-tokens.md`; screens in `ref/`. We borrow structure, techniques, colour relationships and the key-visual concept. We do not copy their photos, copy, logos or a whole page layout.

Fixed brand facts (every page, all five languages): **Tomari Marina**, a small-boat marina on the **North Quay of Wrenhaven** (a fictional, internationally neutral coastal town), founded **1987** by **Rolf Brandt**, now run by **Lucie Brandt**. **100 berths**. Currency **EUR** in every language (no converted prices).

---

## 1. Signature techniques (three, each must be obvious at a glance)

### T1. Pinned tall portrait with a bracketed word and a giant thin numeral (sakazuki "Philosophy", https://sakazuki.io/, `ref/scroll-sakazuki-philosophy-before.png` / `-after.png`)
- **Reference:** a 900 px viewport pinned (`position: sticky; top: 0`) over 3302 px. Mist/beige ground. Top-left: a small red pictograph (60×48), the label "Philosophy" (~22px) and a bracketed lowercase word "( grow )" at ~64px. Centre: one tall portrait photo 330×630 (ratio 0.52, radius 0) at x 555–885. Top-right: a giant thin numeral "02" ~170px. Bottom-left: a three-line statement at ~63px, lh 1. Bottom-right: a 4-line paragraph ~17px. Scrolling swaps all of it 01 → 02 → 03 while the frame stays still.
- **Ours, home block 3 `front-berths`:** three steps tell the row's story: **01 ( pontoon )** which berths we offer, **02 ( round )** how the morning round is walked, **03 ( season )** how a season is booked.
- **Geometry, desktop 1440×900:** wrapper `alignfull` on mist `#E4E8E6`, height `300vh`, holding three panels. Each panel is `position: sticky; top: 0; height: 100vh` with an opaque mist ground, so panel 2 slides up over panel 1 and reads as a swap inside one frame. No card edges, no shadow, no radius, no gap between panels. Side padding 2.125rem (34px). Inside each panel, a 12-column grid:
  - Top-left (column 1–4, top 135px): red pennant mark 48×38 (inline SVG, `#C30D23`), then the label "Berths" (Literata 1.375rem), then the bracketed word in Newsreader 300 at `4.25rem`, lh 1 ("( pontoon )").
  - Centre: portrait `figure` 330×630 (ratio 0.52, `object-fit: cover`, radius 0), centred horizontally, top 135px. Photos P03 / P04 / P05.
  - Top-right (right-aligned, top 160px): numeral "01" / "02" / "03" in Newsreader **200**, `clamp(6rem, 11.8vw, 10.625rem)` (170px at 1440), lh 1, ink `#1E2A33`.
  - Bottom-left (columns 1–4, bottom 135px): statement Newsreader 300 `clamp(2.75rem, 4.4vw, 4.25rem)`, lh 1.0, 3 lines.
  - Bottom-right (columns 10–12, bottom 135px): Literata 1.0625rem, lh 1.5, 4–5 lines, then a text link with ` ›`.
- **Must not be diluted:** the portrait stays tall (0.52) and centred, never widened to 4:5. The numeral stays ≥ 10rem at 1440, weight 200, ink, not grey. The bracket word stays in literal parentheses with spaces, "( round )". The frame must visibly stay still while the content changes (sticky). The red mark is there but tiny.
- **Mobile (<782px):** no sticky. The three panels stack as normal blocks, padding 64px 20px. Row 1: bracket word (2.25rem) left and numeral (4.5rem) right on one flex row (`justify-content: space-between`, both in flow). Then the portrait at 62vw width, ratio 0.52, centred. Then the statement (2rem), then the paragraph. No absolute positioning.

### T2. Hairline cell grid with a label cell, short top-rule and a pale "open today" tab pinned bottom-right (Yamatane rail and news grid, https://www.yamatane-museum.jp/, `ref/yamatane-first.png`, `ref/scroll-yamatane-grid-*.png`)
- **Reference:** content in four equal columns (~292px) with 1px hairline cells (`#D9DEE8`). The first column of each row is a label cell: a 28px blue rule sits on the cell's top edge and the row title (22px) is under it. A tall poster image (526×728, 0.72) sits inside the right cells. A pale yellow tab (135×120, `#FFE58A`) at the bottom-right corner says "open today / 10:00–17:00 / calendar". Outline circle-arrow links.
- **Ours, home block 5 `front-board` ("Harbour board"):** the marina's notice board. Mist ground. Content width = full width minus 2 × 2.125rem. Four equal columns, 1px hairlines `#B9C2BF` (the reference hairline darkened for the mist ground; `#D9DEE8` would vanish on `#E4E8E6`). Rows:
  1. **Season 2027** (label cell): cell 2 = navy chip "Requests open" (`#003C88` ground, white Literata .75rem, padding 2px 8px), heading Newsreader 400 2.125rem "Season 2027 / requests open / 10 January", 50 words, circle-arrow link "Season & fees". Cells 3–4 hold P07 as a 0.72 poster, right-aligned, height 620px. Row min-height 650px (ref first row).
  2. **Pontoons** (label cell): cells 2–4 = Pontoon A / Pontoon B / Pontoon C. Each has the name (Newsreader 1.875rem), "36 berths · up to 7.5 m" (Literata .875rem, muted) and two lines of text. Under the three cells, one line spanning cells 2–4: "Plus 22 swing moorings in the outer basin, up to 9 m."
  3. **Season fees** (label cell + intro in cells 2–4, 40 words), then a **full-width row** (cells 1–4 merged) holding the fee table (section 7). Table rules: 1px `#B9C2BF` row lines; columns Berth / Length / Period / Price; price column `white-space: nowrap; text-align: right`; `width: 100%`. No sp-reveal on the table.
  4. **Office** (label cell): cell 2 = hours; cell 3 = arrival by road and by sea (VHF 12, approach note); cell 4 = "Morning round 06:30, every day of the season". Circle-arrow link "Contact & access".
  - Label cells: a 28px × 2px navy `#003C88` rule on the cell's top edge, title Newsreader 400 1.375rem, padding 24px 16px.
  - **The tab:** the last child of the board, `position: sticky; bottom: 0; margin-left: auto`, 135×120 desktop, ground `#FFE58A`, ink text: "Office open today" (Newsreader 1.125rem) / "07:00–19:00" (Newsreader 1.5rem) / "Season calendar ›" (Literata .75rem link to Season & fees). It rides at the bottom-right of the viewport while the board is on screen, the same feel as Yamatane's rail tab, and it never covers the hero because it lives only inside the board. It is **not** a side rail; no rail columns.
- **Must not be diluted:** hairlines must be visible (`#B9C2BF` on mist, 1px), the navy short rule must be there on every label cell, the cells stay equal-width with no gaps, and the tab stays pale yellow (not beige, not white) and in the bottom-right corner.
- **Mobile:** single column; each row becomes label cell (full width, rule on top) followed by its cells stacked with 1px top hairlines. The poster becomes full width 0.72. The table stacks (section 6). The tab is a normal in-flow block at the end of the board, full width, height auto, not sticky.

### T3. Bottom line: bracket labels left, harbour line centre, boxed outline CTA with a chevron marquee right (sakazuki fixed bottom bar, `ref/sakazuki-first.png`)
- **Reference:** along the bottom of the viewport (bottom 10px): "(X) (IG) (OS)" ~44px at the left; "JAPAN, 11:40:00" ~17px at the centre; at the right a box 196×58, 1px border, radius 0, "MINT" ~30px followed by chevrons ›››››› that run in a loop (2.4s linear).
- **Ours:** a reusable synced pattern `tomari-marina/bottom-line`, a flex row (`justify-content: space-between; align-items: end`), in flow (not `position: fixed`), padding 0 2.125rem 10px:
  - Left: anchor links "( berths ) ( round ) ( season )" in Newsreader 300 2.75rem, lh 1, gap 1.25rem. On home they jump to the three T1 panels (`#pontoon`, `#round`, `#season`); on inner pages they link to Berths, The Morning Round and Season & Fees.
  - Centre: Literata .8125rem uppercase, letter-spacing .04em: "WRENHAVEN · ROUND 06:30 · VHF 12". Static text, the same in every language (place name and numbers), and editable in the block.
  - Right: box 196×58 (min-width 196px, height 58px), 1px solid border in currentColor, radius 0. Inside: "Book a berth" Newsreader 1.5rem, then a 72px wide `sp-marquee` strip of chevrons "››››››" (typed in the markup, duplicated as an `aria-hidden` group). Link to Season & Fees.
  - Used on: home hero (white on photo), home close (white on deep ink), the footer (white on deep ink), and the bottom of every inner page head (ink on mist).
- **Must not be diluted:** the brackets stay big (≥ 2.75rem desktop), the CTA stays a square-cornered outline box, not a filled or pill button, and the chevrons move.
- **Mobile:** stacks in flow: brackets row (1.5rem, wraps if needed), harbour line (.75rem), CTA box full width 58px tall. No overlap, no absolute positioning.

### Continuation to inner pages (each of T1/T2/T3 on ≥ 4 inner pages)
Every inner page opens with a **T1 page head**: one sticky-free single frame on mist with min-height 100vh desktop (`calc(100vh - header)`), bracket word top-left, portrait 330×630 centre, giant numeral top-right (page number), statement bottom-left, short paragraph bottom-right, and the **T3 bottom line** along its bottom edge. Body sections follow.

| Page | T1 head (bracket / numeral / portrait) | T2 board | T3 bottom line |
|---|---|---|---|
| Berths | ( pontoon ) / 01 / P03 | pontoons A/B/C + moorings as board rows, berth-size table | yes (head) |
| The Morning Round | ( round ) / 02 / P04 | — (the round as prose, times in-line) | yes (head) |
| Season & Fees (booking) | ( season ) / 03 / P05 | full fee table row + booking calendar row + sticky "open today" tab | yes (head) + close |
| Facilities | ( yard ) / 04 / P09 | board rows: lift, fuel & pump-out, showers & laundry, winter ashore | yes (head) |
| Visitors | ( visit ) / 05 / P15 | board rows: arrival, visitor night fee, office | yes (head) |
| Crew | ( crew ) / 06 / P08 | — | yes (head) |
| Logbook (stories) | ( logbook ) / 07 / P10 | — | yes (head) |
| About / Harbour story | ( harbour ) / 08 / P01 (portrait crop) | board row "1987 / 2004 / 2019" as label + three cells of prose (not a timeline graphic) | yes (head) |
| Contact & Access | ( office ) / 09 / P07 | board rows: office hours, by road, by sea, sticky "open today" tab | yes (head) |
| Journal (news index, archive, single) | ( notes ) / 10 / featured image of the newest post | archive cards in the 4-column hairline grid | yes (index head) |

So T1 is on 10 inner pages, T2 on 7, T3 on all of them.

---

## 2. Key visual concept

### (1) The reference first screen
sakazuki opens on full-bleed **low-key photographs** that crossfade (a blurred amber glass, then a man pouring sake over barrels in a dark cellar, `ref/sakazuki-hero2.png`). A transparent overlay nav runs across the top: text links left, a dark chevron mark centred, two outline pills right. The type sits on the photo: a huge wordmark between two small taglines, or a statement "THE HEART OF SAKAZUKI" with a small line above and below. Along the bottom: bracket labels left, a live local clock "JAPAN, hh:mm:ss" centre, and a boxed MINT CTA whose chevrons run. **Story:** private, slow access to the people who shape a craft: "Access opens the door. What matters is the connection that follows." **Signature motion:** lines rise out of masks (1s, `cubic-bezier(.23,1,.32,1)`), slides crossfade, chevrons run in the CTA.

### (2) Our scene
The same construction moved to a small-boat marina at first light. One full-bleed low-key **photograph** (same image type): the harbour master stands on a wet finger pontoon with a clipboard while a boat owner crouches at a cleat coiling a mooring line. Masts are soft in the mist behind them, and raking dawn light picks out the rope and the planks. **Story:** a berth is not a parking space but a relationship with the people who walk the pontoons every morning. The access (the berth) opens the door; the round that follows is what matters. **Motion:** the headline lines rise out of a mask on load, the photo drifts more slowly than the page (parallax, replacing the crossfade with one slow-moving image), and the chevrons run in "Book a berth".

### (3) KV checklist (all six on the home first screen, all visible at 1440×900 and 390×844)
| # | Reference element | Our version | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Full-bleed low-key photo slide | P01: harbour master with clipboard on the pontoon, owner coiling a line at a cleat, mist and masts behind | whole first screen (core/cover, `min-height: 100svh`, dim 35% `#1E2A33`) | `sp-parallax`, `--sp-par: 8%` (mobile 5%) | P01 |
| 2 | Overlay nav, links left, mark centred, outline pills right | transparent header over the photo: links left (Berths, The round, Season & fees, Facilities, Logbook, Contact), wordmark "Tomari Marina" centred with the red pennant mark, pills "Visitors ›" "Book ›" right (radius 20px, 1px white border) | top, height 84px | none (static, not sticky) | — |
| 3 | Statement with small lines above and below | small tagline above (left), two-line H1 left-low, small tagline right-low | bottom half, left 2.125rem; see 5.1 | lines rise from a mask on load, 1s, `cubic-bezier(.23,1,.32,1)`, 0.12s per line | — |
| 4 | Live local clock, bottom centre | "WRENHAVEN · ROUND 06:30 · VHF 12" | bottom centre (T3) | static | — |
| 5 | Boxed CTA with chevron marquee | outline box 196×58 "Book a berth ››››››" | bottom right (T3) | `sp-marquee`, 2.4s linear | — |
| 6 | Bracket labels bottom-left | "( berths ) ( round ) ( season )" anchors to the three T1 steps | bottom left (T3) | none | — |

Not implemented from the reference: the header hiding on scroll (it needs a scroll listener, which our rules forbid; the header is simply not sticky on home) and the live ticking clock (replaced by a fixed harbour line, so screenshots and languages stay stable).

---

## 3. Colour (reference token values, see `reference-tokens.md` (a))

| Role | Hex | Source token | Use | Share |
|---|---|---|---|---|
| Base mist | `#E4E8E6` | replaces sakazuki base `#E1D6CE` | page ground, T1 panels, board | ~48% |
| Deep harbour ink | `#1E2A33` | sakazuki logo ink `#1E2A33` (exact) | text ink; hero dim; close and footer ground | ~25% (text + dark sections) |
| Main ink teal | `#3E4A48` | design-plan hex ("blue-ink-tea" palette) | crew section ground, secondary text, borders on dark | ~15% |
| White | `#FFFFFF` | sakazuki text on photo | type on photos and dark grounds | text only |
| Navy | `#003C88` | Yamatane rail blue `#003C88` (exact) | 28px label-cell rules, "Requests open" chip, links in the board | ≤ 3% |
| Signal red | `#C30D23` | sakazuki accent `#C30D23` (exact) | pennant mark only (48×38 and 22×18 in the header) | ≤ 1% |
| Tab yellow | `#FFE58A` | Yamatane "open today" tab (exact) | the sticky tab only | ≤ 2%, never on the first screen |
| Hairline | `#B9C2BF` | Yamatane `#D9DEE8`, darkened for the mist ground | grid cells, table rules | lines |
| Muted text | `#5C6866` | derived from `#3E4A48` | captions, meta | — |

- **Why the base changes:** sakazuki's `#E1D6CE` is a warm beige. The common rules forbid a default beige/cream ground and the row's palette is "blue-ink-tea". A cool mist with the same lightness (L ≈ 91%) keeps the relationship: light ground, near-black ink, low-key photos, a single red mark. Every other colour uses the reference hex as-is.
- **Not used:** sakazuki's red founder band (a big saturated field) and Yamatane's 135px blue rails (a side rail is forbidden; the 18% saturated share would also break the gate).
- **First screen saturation:** references are 7.7% (sakazuki low-key frame) and 16.8% (Yamatane). Cap = min(30%, 7.7%) is unreachable for a hero with any colour at all, so **target ≤ 8%, hard limit 15%** (`scripts/check-first-screen.py`). Achieve it by grading P01 blue-grey with a 35% `#1E2A33` dim; no coloured UI on the first screen except the tiny red pennant.
- Contrast: `#1E2A33` on `#E4E8E6` ≈ 12.5:1; white on `#3E4A48` ≈ 9.5:1; white on `#003C88` ≈ 11:1; ink on `#FFE58A` ≈ 13:1.

## 4. Type (font_direction: **serif**)

Fonts load through `theme.json` `fontFamilies` + `fontFace` (woff2 in `assets/fonts/`) so the editor iframe and the front end use the same faces, including the zh-TW and ja subsets. Copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it because style.css uses `:lang()` rules.

- **Display (Latin):** Newsreader, weights 200, 300, 400, italic 400. Stack: `"Newsreader", "Iowan Old Style", Georgia, serif`.
- **Text (Latin):** Literata, weights 400, 500, italic 400. Stack: `"Literata", Georgia, serif`.
- **zh-TW** (`:root:lang(zh)`): display `"Noto Serif TC", "Newsreader", serif` (bundled zh-TW subset of Noto Serif TC, Ming style, listed first as `scripts/zh-fonts.mjs` requires). Body `"Literata", "Songti TC", "PMingLiU", serif`: system Chinese Ming only, and no bundled zh or Japanese family in the body stack (repo contract).
- **ja** (`:root:lang(ja)`): display `"Noto Serif JP", "Newsreader", serif` (bundled ja subset, Mincho style). Body `"Literata", "Hiragino Mincho ProN", "Yu Mincho", serif`.
- The subset script is broken, so subset the CJK fonts the Hokuto / Hada way. CJK headings are about 0.75× the Latin size; CJK body line-height 1.85; fr/de `hyphens: auto`.
- **Sizes** (theme.json presets; reference sizes from tokens (b)):
  | Preset | Value | Use | Source |
  |---|---|---|---|
  | small | .8125rem | meta, harbour line | — |
  | base | 1.0625rem (17px) | body, lh 1.5 | sakazuki body 16.9px / lh 23.7 (1.4; Literata needs +0.1) |
  | medium | 1.375rem | labels, card titles | Yamatane h2 22px |
  | large | 1.875rem | taglines, pontoon names, lh 1.0 | sakazuki p 30px / lh 1 |
  | x-large | 2.75rem | bracket labels in T3, lh 1 | sakazuki "(X)" ~44px |
  | xx-large | 4.25rem | T1 bracket word and statement, section headings, lh 1.0 | sakazuki h3 63.5px |
  | huge | `clamp(4.25rem, 8.8vw, 7.9375rem)` | hero H1, close heading; lh 1.0, letter-spacing .01em | sakazuki h2 127px / lh 1 / ls .01em |
  | numeral | `clamp(6rem, 11.8vw, 10.625rem)`, weight 200 | T1 numerals | sakazuki numerals ~170px |
  The largest preset (huge) is ≥ 4.25rem. No italics in headings (ref: none); italic only for the crew quote.
- Headings Newsreader 300 (the references' display weight is 400 in a wide grotesque; a serif needs a lighter cut for the same colour). No uppercase headings; nav in sentence case at 1.0625rem.

## 5. Home page

### 5.1 First screen (1440×900), "top-bottom-halves" over one full-bleed photo
- `core/cover` alignfull, `sp-parallax` with `--sp-par: 8%`, background P01 (`object-position: 60% 50%`), dim 35% `#1E2A33`, `min-height: 100svh` (min 720px). Its inner container is a flex column with `justify-content: space-between` (no absolute positioning).
- **Top half:** the overlay header (84px; see KV #2), and nothing else. The upper half belongs to the photo: mist, masts and the two figures, who are placed right of centre at 55–80% width in P01.
- **Bottom half** (from 52% height):
  - Tagline A (left, 2.125rem from the edge): Literata 1.125rem, lh 1.3, white, 2 lines: "A small-boat marina on the North Quay of Wrenhaven, since 1987."
  - H1 (left, under tagline A, 24px gap): Newsreader 300 `huge` (127px at 1440), lh 1.0, white, two lines: "Berths, walked / every morning." Each line is a `span.tm-rise` (see 9).
  - Tagline B (right, bottom-aligned with the H1, right-aligned, columns 10–12): Newsreader 300 1.875rem, lh 1.0, white, 3 lines: "100 berths / one round / at 06:30".
  - T3 bottom line (white) 40px below, flush with the bottom.
- The H1 is left-aligned and spans at most 62% of the width; there is **no giant centred word**. No table, form, search box or filled button on the first screen.
- **390×844:** header 64px (wordmark left, menu button right; the pills move into the menu). Tagline A .9375rem; H1 2.75rem lh 1.02 (3–4 lines); tagline B 1.25rem left-aligned under the H1 (not beside it); T3 stacked. All in flow: no vertical text, no absolutely positioned labels, nothing overlapping.

### 5.2 Block order
| # | Pattern | Purpose | Layout and photos | Copy (en) |
|---|---|---|---|---|
| 1 | `front-hero` | key visual | 5.1, P01 | 30 words |
| 2 | `front-statement` | what a berth here means | mist; 12 cols. Left cols 1–7: heading `xx-large` 4 lines "A berth is a / relationship, / walked each / morning." (line rise). Right cols 9–12: P02 4:5 (width 100%, radius 0) and under it two paragraphs. | 2 paragraphs, 110 words |
| 3 | `front-berths` | **T1** pinned three steps: which berths, the morning round, how a season is booked | 300vh, P03 / P04 / P05 portraits, numerals 01–03 | per step: statement 8–10 words + paragraph 45 words |
| 4 | `front-dawn` | breathing photo between story and facts | `core/cover` alignfull, ratio 21:9 (min-height 60vh), P06, `sp-parallax --sp-par: 10%`, dim 20%. One caption bottom-left in white Literata .8125rem: "06:30, Pontoon B. The round starts at the fuel berth and ends at the outer moorings." | 20 words |
| 5 | `front-board` | **T2** harbour board: season notice, pontoons, fee table, office + sticky tab | P07 poster in row 1 | 180 words + table |
| 6 | `front-crew` | the people (not a four-person grid) | ground `#3E4A48`, white text. Two portraits P08 (Ines) and P09 (Henrik), 4:5, at cols 1–3 and 5–7, the second offset 96px lower. Right cols 9–12: heading "Who walks / the pontoons." `xx-large`, an italic quote from Ines (Literata italic 1.25rem), then a plain text roster: the five other names with roles, one line each, separated by 1px `rgba(255,255,255,.25)` rules. | 120 words |
| 7 | `front-logbook` | owner stories (3) | mist. Heading "From the / logbook." left, then three columns (4/4/4) each with a 3:2 photo P10/P11/P12 (radius 0), a bracketed tag "( ketch, 9.4 m )" in Newsreader 1.375rem, a title Newsreader 1.875rem, 45 words, and a link to the story. Columns separated by 1px hairlines (T2 cell language), no cards. | 3 × 55 words |
| 8 | `front-book` | **booking-led close** | deep ink `#1E2A33`, white. Heading `huge` "Book a season / berth." (line rise). Under it a 3-cell hairline row (`rgba(255,255,255,.2)`), each cell with label rule, 40 words: (1) "Request" from 10 January, online or at the office; (2) "Walk the berth" with the dockmaster before signing; (3) "Sign the season" with a 25% deposit, balance by 1 March. Then the T3 bottom line (white). | 150 words |

English home ≥ 250 words; narrative paragraphs in #2 (2), #3 (3) and #7 (3). CJK home ≥ 500 characters.

**Home image positions: 12:** P01, P02, P03, P04, P05, P06, P07, P08, P09, P10, P11, P12. No image twice.

### 5.3 Comparison with recent themes
| # | Aya Paper | Nodo Clinic | Mikura Storage | Noboru Lifts | **Tomari Marina** |
|---|---|---|---|---|---|
| 1 | hero | hero | hero strip | hero | **full-bleed low-key photo, H1 left-low, T3 bottom line** |
| 2 | shop | opening | features | intro | **statement + 4:5 photo** |
| 3 | papers | complaints (ruled rows) | sizes | visit (sticky cards) | **pinned portrait frame, bracket word + numeral 01–03** |
| 4 | counter | walk | visit | buildings | **21:9 parallax dawn band** |
| 5 | weights | pace | prices | quiet | **4-col hairline board + sticky yellow tab + fee table** |
| 6 | wrap | corridor | corridor | sheet | **crew on teal ink, two offset portraits + roster** |
| 7 | pair | roster | stories | fees | **logbook stories in hairline columns** |
| 8 | visit | stories | faq | crew | **booking close on deep ink with the bottom line** |
| 9 | journal | notes | reserve | stories | — |
| 10 | close | close | — | book | — |

Why not alike: no hero photo strip (Mikura), no ruled-row complaint list (Nodo), and no sticky visit cards (Noboru). Our sticky frame has no cards: it is a full-viewport frame whose content swaps under a fixed composition (portrait centre, numeral right, bracket word left), a construction none of the four uses. Fees appear inside the board instead of in a standalone price section, and the page ends on a booking close with the bottom-line CTA rather than a journal. The signature shapes (bracketed words, giant thin numerals, hairline label cells with a navy rule, a yellow corner tab, a boxed chevron CTA) are not in any of them.

## 6. Responsive requirements (checked by auto-gates)
- 390px: no horizontal overflow; the hero first screen has no vertical text, no absolutely positioned labels and no overlapping text (5.1).
- The fee table at ≥ 782px (800 and 1280) is full content width (`width: 100%`, inside the full-width board row); the price column is `white-space: nowrap; text-align: right` and is never clipped. Do not set a fixed table width.
- Every table on < 782px stacks: `tr` becomes a block with a 1px top hairline; each cell becomes a line with its header as a small label (`data-label` written in the markup, not CSS `content:` text, e.g. a visible `<span class="tm-cell-label">`); the price stays nowrap.
- T1 is not sticky below 782px; the T2 tab is in flow below 782px; T3 stacks below 782px.
- `html, body { overflow-x: clip }` (from sp-scroll); sticky containers use `overflow: clip`, never `hidden`.

## 7. Fixed numbers (identical on home, inner pages, footer and all five languages)
- Founded **1987** by Rolf Brandt; run by Lucie Brandt since **2019**; pontoons rebuilt **2004**.
- **100 berths**: Pontoon A **36** finger berths up to 7.5 m; Pontoon B **28**, 7.5–10 m; Pontoon C **14**, 10–12 m; **22** swing moorings up to 9 m.
- **Season:** 1 April – 31 October. Requests open **10 January**. Deposit **25%**, balance by **1 March**.
- **Fees (7 items, EUR, VAT included):**
  | Berth | Length | Period | Price |
  |---|---|---|---|
  | Pontoon A finger berth | up to 7.5 m | season | €1,680 |
  | Pontoon B finger berth | 7.5–10 m | season | €2,340 |
  | Pontoon C finger berth | 10–12 m | season | €3,120 |
  | Swing mooring, outer basin | up to 9 m | season | €960 |
  | Winter ashore, hard standing | up to 10 m | Nov–Mar | €1,150 |
  | Visitor night, any pontoon | per metre | night | €3.20 |
  | Lift-out, wash and block-off | up to 12 m | once | €240 |
- **Morning round:** 06:30 every day of the season (about 50 minutes: fuel berth → A → B → C → outer moorings). Evening check 21:00.
- **Office hours:** Apr–Oct daily 07:00–19:00; Nov–Mar Mon–Sat 08:00–16:00. VHF channel 12. Address: Harbour Office, 2 North Quay, Wrenhaven (fictional; local formats per language in brand.md). Email office@tomarimarina.example.
- **People (7):** Lucie Brandt (owner), Ines Marlow (harbour master), Tomas Reyes (dockmaster, berths and allocations), Ada Okonkwo (office and bookings), Henrik Vale (yard and travel lift), Samir Haddad (fuel berth and pump-out), Mei Lin Choi (evening watch). Founder Rolf Brandt is mentioned in About only, as history.
- **Stories (3):** "The ketch that came back" (Marta and Joe Ellery, *ketch, 9.4 m*, P10); "A tiller, one coat a day" (Nadia Haddou, *dayboat, 6.2 m*, P11); "Home before the weather" (the Osei family, *sloop, 8.8 m*, P12).
- **Booking:** request → walk the berth with Tomas → sign the season and pay the deposit → arrive and get the pontoon key on the first round. Written as prose or in the three close cells, never as a step grid.

## 8. Inner pages (10 + standard pages)
Each page = T1 head (with T3 bottom line) → body → small close with the T3 bottom line. No sidebar. Standard pages in theme-meta: home, about, news, article, category, tag, newsletter, contact.

1. **Berths** (`page-berths`): T1 head ( pontoon ) 01 P03. A board with one row per pontoon (A, B, C, moorings): counts, lengths, depth at low water (A 2.0 m, B 2.4 m, C 3.0 m, moorings 3.5 m), what's at the berth (water, 16A power on A–C). The berth-size table (Pontoon / berths / length / depth). P06 21:9 parallax band between the rows (`sp-parallax --sp-par 8%`).
2. **The Morning Round** (`page-round`): T1 head ( round ) 02 P04. A long-form prose walk of the 06:30 round in five short paragraphs, each headed by a time in Newsreader 1.875rem ("06:30 Fuel berth", "06:40 Pontoon A", …): this is prose, not a timeline graphic. P02 at 4:5 beside paragraphs 2–3; quote from Ines.
3. **Season & Fees** (`page-season`, the booking page): T1 head ( season ) 03 P05. Board: "Season 2027" row, the full-width fee table (section 7), a "Booking" row (four sentences of the booking process in cells), a "Calendar" row (season dates, request opening, deposit and balance dates), and the sticky yellow tab. Then a request block: the contact form (core form or a plain link to Contact if no form plugin) placed below the first screen. P16 (winter ashore) in the winter row.
4. **Facilities** (`page-facilities`): T1 head ( yard ) 04 P09. Board rows: travel lift (25 t), fuel & pump-out (Samir, 07:00–19:00), showers & laundry, winter ashore. Photos P13, P14.
5. **Visitors** (`page-visitors`): T1 head ( visit ) 05 P15. Arrival by sea (call VHF 12, wait at the fuel berth), the visitor night fee €3.20/m, office hours, the yellow tab. Parallax band P06.
6. **Crew** (`page-crew`): T1 head ( crew ) 06 P08. Seven people as alternating text blocks (name Newsreader 1.875rem, role, 50 words each), with P08 and P09 as the only portraits; not a portrait grid.
7. **Logbook** (`page-logbook`): T1 head ( logbook ) 07 P10. The three stories in full (about 180 words each), P10, P11, P12 at 3:2, alternating left/right in a 12-column grid.
8. **About / Harbour story** (`page-about`): T1 head ( harbour ) 08 P01 (portrait crop on the harbour master). A board row "1987 / 2004 / 2019" with three prose cells; P06 band; three paragraphs on why the marina stays small.
9. **Contact & Access** (`page-contact`): T1 head ( office ) 09 P07. Board rows: office hours, by road, by sea, email/phone, the yellow tab. Form below the first screen.
10. **Journal** (`home.html` index = posts page, `archive.html`, `category.html`, `tag.html`, `single.html`): T1 head ( notes ) 10 with the newest post's featured image. Archive = 4-column hairline grid, each cell an image 3:2 + date + title. Single: bracketed category above the title, title `xx-large`, featured image 3:2, text column 680px. Posts (4): "Pontoon C gets new fingers" (P13), "Fuel berth hours for the autumn" (P14), "Visitors' notes for the spring tides" (P15), "Booking winter ashore" (P16), with categories Harbour notes / Season and tags pontoons, fuel, visitors, winter.
11. **Newsletter** → posts page; 404 / search: T1 head (no portrait) + T3 bottom line.

## 9. Scroll and motion (sp-scroll; at most 3 effect types per page)
| Effect | Class | Where | Source and timing |
|---|---|---|---|
| Line rise | `sp-stagger` on the heading wrapper + `sp-reveal sp-reveal--up` on each line `span` (`display: block`) | headings of #2 statement, #6 crew, #7 logbook, #8 book; inner page section headings | sakazuki lineRevealUp: 1s, `cubic-bezier(.23,1,.32,1)`. Set `--sp-dur: 1s; --sp-dist: 24px` on those headings; stagger 0.12s (sp default). Optional: `sp-reveal--up` 24px on board rows (Yamatane has no motion; this is ours). |
| Parallax | `sp-parallax` | hero cover P01 `--sp-par: 8%` (≤ 781px: `5%`); #4 dawn band P06 `--sp-par: 10%` (mobile 6%); inner P06 bands 8% | replaces sakazuki's slide crossfade with a slow drift; CSS scroll-driven, JS fallback in sp-scroll.js |
| Chevron marquee | `sp-marquee` | the chevrons inside every T3 CTA box | sakazuki MINT chevrons: 2.4s linear infinite. sp-scroll runs 30s, so the theme style.css sets `.tm-cta .sp-marquee > * { animation-duration: 2.4s; }` (do not edit sp-scroll.css) |

- **Hero: no sp-reveal.** The hero H1 line rise is a page-load CSS animation, not a scroll reveal: `html.sp-js:not(.sp-no-motion) .tm-rise > span { animation: tm-rise 1s cubic-bezier(.23,1,.32,1) both; }` inside `@media (prefers-reduced-motion: no-preference)`. Keyframes go from `transform: translate3d(0,24px,0); clip-path: inset(0 0 100% 0)` to `none`; line 2 delay .12s. The clip-path is on the span (not an IO target), and the shift is ≤ 30px. `?sp-static`, reduced motion, no JS and the editor show the final state.
- No sp-reveal on the fee table, the forms or the legal text, and none inside horizontally scrolling rows. The T1 panels are sticky CSS, not an sp class; their portraits do not get reveal (sticky + transform conflict risk).
- Hover: links and the CTA box: text colour/underline .6s `cubic-bezier(.23,1,.32,1)` (sakazuki hover); the CTA box fills white with ink text on dark grounds.
- Verify with `check-parallax.mjs` (≥ 6px drift desktop and mobile, 0 in reduced motion, ≥ 3 reveals hidden before entry).

## 10. Photos (16, Grok, one at a time, read each one)
IMAGERY: **photo** (the main reference is photographic). The row's photo direction is low-key, so this theme uses a low-key documentary STYLE instead of the common high-key default.

STYLE (exact string on every prompt):
`photorealistic documentary photograph, low-key exposure, deep blue-grey shadows with soft dark falloff, raking first light from the side, shallow depth of field, 35mm lens, fine film grain, muted palette of slate blue, ink green, weathered grey, mist white and rope off-white, small-boat marina in an international neutral coastal town, diverse adults at work in plain workwear, calm candid moment, no text, no logos, no brand names, no boat names or numbers, no signage lettering, no flags with symbols, no Japanese elements`

Each image ≤ 300 KB and ≤ 2000px, webp, no cutouts, one readme.txt line each (AI-generated, CC0). **★ = used on home.**

| ID | Subject / composition | Ratio | Used on (once per page) |
|---|---|---|---|
| P01 ★ | harbour master (woman, 40s, dark oilskin) standing with a clipboard on a wet finger pontoon, a boat owner (man, 60s) crouched at a cleat coiling a mooring line in the foreground; both right of centre at 55–80% width; masts soft in mist; lower-left third dark planks and water for the headline | 16:9 | Home hero; About head (portrait crop) |
| P02 ★ | close-up of weathered hands coiling a rope around a steel cleat, raking light | 4:5 | Home statement; Round |
| P03 ★ | a long finger pontoon receding into mist with small sailboats on both sides, one distant figure walking | 0.52 tall | Home T1 01; Berths head |
| P04 ★ | harbour master checking a mooring line at dawn, head-lamp off, breath visible, side light | 0.52 tall | Home T1 02; Round head |
| P05 ★ | inside a small harbour office at first light: an owner and an office worker reading a season agreement at a wooden counter, window light | 0.52 tall | Home T1 03; Season head |
| P06 ★ | wide dawn panorama of three pontoons and moored small boats in mist, two crew pushing a dock trolley | 21:9 | Home dawn band; Berths band; Visitors band; About band |
| P07 ★ | the harbour office seen from the quay at dusk, a lit window, a person at the counter through the glass (no lettering anywhere) | 0.72 | Home board; Contact head |
| P08 ★ | portrait of the harbour master (Ines) on the pontoon, three-quarter, looking past the camera | 4:5 | Home crew; Crew head |
| P09 ★ | portrait of the yard lead (Henrik, Black man, 50s) beside the travel lift slings | 4:5 | Home crew; Facilities head; Crew |
| P10 ★ | an older couple stepping aboard a small wooden ketch at the pontoon | 3:2 | Home logbook; Logbook head + story 1 |
| P11 ★ | a young woman varnishing a tiller in the boatyard shed, raking window light | 3:2 | Home logbook; Logbook story 2 |
| P12 ★ | a family bringing a small sloop in at dusk, a crew member taking a line at the cleat | 3:2 | Home logbook; Logbook story 3 |
| P13 | travel lift lifting a small yacht out of the water, early light | 3:2 | Facilities; Journal post 1 |
| P14 | fuel and pump-out pontoon, attendant handing a hose to an owner | 3:2 | Facilities; Journal post 2 |
| P15 | visiting boat arriving, crew on the pontoon catching a thrown line | 4:5 | Visitors head; Journal post 3 |
| P16 | boats ashore on hard standing under plain covers, frost, morning light | 3:2 | Season & Fees winter row; Journal post 4 |

Per page (no repeats): Home P01–P12 (12 positions). Berths P03, P06. Round P04, P02. Season P05, P16. Facilities P09, P13, P14. Visitors P15, P06. Crew P08, P09. Logbook P10, P11, P12. About P01, P06. Contact P07. Journal P13–P16.

## 11. Header and footer
- One top menu only. Home: header absolutely over the hero inside the cover's flow (part of the hero template part, transparent, white). Inner pages: same layout on mist, ink text, 1px `#B9C2BF` bottom rule. Not sticky.
- Desktop: links left (sentence case 1.0625rem, gap 1.25rem), centre wordmark "Tomari Marina" Newsreader 400 1.5rem with the 22×18 red pennant before it, right: pills "Visitors ›" "Book ›" (radius 20px, 1px border, padding 4px 14px) and the language switcher. < 960px: wordmark left, "Menu" button right opening an overlay.
- Footer: deep ink `#1E2A33`, white; a 4-column hairline grid (`rgba(255,255,255,.2)`): office hours, address and VHF, pages, newsletter link; then the T3 bottom line.

## 12. Similarity table (target 80%; values from `reference-tokens.md`)
| Dimension | Reference value | Tomari Marina value |
|---|---|---|
| Colour: ground | `#E1D6CE` ~45% (main) | `#E4E8E6` ~48% (beige replaced, same lightness) |
| Colour: ink | `#000` / logo `#1E2A33` | `#1E2A33` |
| Colour: accent | `#C30D23` marks | `#C30D23` pennant only |
| Colour: secondary | `#003C88` rails, `#FFE58A` tab | `#003C88` rules/chip, `#FFE58A` tab |
| First-screen saturation | 7.7% / 16.8% | ≤ 8% (gate 15%) |
| Display size | h2 127px lh 1 ls .01em | H1 127px (`huge`) lh 1 ls .01em |
| Secondary display | h3 63.5px lh 1 | `xx-large` 4.25rem (68px) lh 1 |
| Tagline | p 30px lh 1 | 1.875rem lh 1 |
| Body | 16.9px lh 1.4 | 17px lh 1.5 |
| Numerals | ~170px thin | `clamp(6rem, 11.8vw, 10.625rem)` weight 200 |
| Side padding | 34px | 2.125rem |
| Section padding | 135px top / 212px bottom | 8.4375rem / 13.25rem on statement, crew, logbook, book |
| Pinned frame | sticky 900px viewport over 3302px | sticky 100vh panels over 300vh |
| Portrait | 330×630, ratio 0.52, radius 0, centred | 330×630, 0.52, radius 0, centred |
| Poster in grid | 526×728 (0.72) | P07 0.72, height 620px |
| Grid | 4 equal cols, 1px `#D9DEE8`, 28px blue rule | 4 equal cols, 1px `#B9C2BF`, 28px `#003C88` rule |
| Radius | 0 photos/boxes; pills ~20px | 0 photos/boxes; pills 20px |
| CTA box | 196×58, 1px border, radius 0 | 196×58, 1px border, radius 0 |
| Tab | 135×120, `#FFE58A`, bottom-right | 135×120, `#FFE58A`, sticky bottom-right of the board |
| Bracket labels | "(X) (IG) (OS)" ~44px | "( berths ) ( round ) ( season )" 2.75rem |
| Decoration | red pictograph 60×48 | red pennant 48×38 |
| Line rise | 1s `cubic-bezier(.23,1,.32,1)` | 1s same easing, 24px, stagger .12s |
| Marquee | 2.4s linear | 2.4s linear |
| Hover | .6s same easing | .6s same easing |
| Hero image | full-bleed low-key slides, crossfade | full-bleed low-key photo, parallax 8% |
Photos and copy are our own; no reference assets, text or logos.

## 13. Home acceptance checklist
1. The first screen shows all six KV items: P01 full-bleed low-key with the harbour master + clipboard and the owner at the cleat; overlay nav with centred wordmark and pills; tagline / two-line H1 left-low / tagline right-low; harbour line centre; boxed "Book a berth" with moving chevrons; bracket labels left. No centred giant word, table, form or search. Saturation ≤ 15% (target ≤ 8%).
2. Hero parallax drifts ≥ 6px on desktop and mobile; 0 in reduced motion; the hero has no `.sp-reveal`.
3. T1: a 300vh section where the portrait frame stays still and 01 → 02 → 03 swap; numerals ≥ 10rem weight 200; portraits 0.52; bracket words in parentheses; red mark visible.
4. T2: a 4-column board with visible hairlines, a navy 28px rule on every label cell, P07 poster, the fee table at full width with nowrap right-aligned prices at 800 and 1280, and the yellow tab sticky at the bottom-right while the board is on screen.
5. T3 bottom line on the hero and the close.
6. Block order is exactly 5.2 (8 blocks); 12 image positions P01–P12, no repeats; no four-person grid, step grid, vertical timeline, side rail, collage or cutouts.
7. Colours as in section 3; no beige ground; no large saturated field.
8. Type: Newsreader/Literata via theme.json fontFace, same in editor and front end; `huge` 127px at 1440.
9. 390px: no horizontal overflow, no overlap, no vertical/absolute labels; tables stacked.
10. English home ≥ 250 words, ≥ 3 narrative paragraphs; all numbers match section 7.
11. Effects used: line rise (up + stagger), parallax, marquee; at most three types.
12. T1/T2/T3 continue on the inner pages per the table in section 1.
