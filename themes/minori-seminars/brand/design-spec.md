# Minori Seminars: design spec (stage 1, binding for implementation)

Slug `minori-seminars`, design-plan row **b19-5**. This is a corporate management-seminar desk that opens three one-day management seminars to the public. Type **landing** (`rules.landing_track`). The home page is one long conversion page with a centred anchor menu and **one repeated CTA, "Reserve a seat"**. It also has Newsletter (waitlist / early access), Privacy, Terms and Thanks pages, plus the inner pages in §7, which are linked from the footer and from in-page links, not from the header. WooCommerce is declared compatible but not required. Five languages: en, zh-TW, ja, fr, de.

Plan row: archetype single-column-longform, hero diagonal-split (used as the 124° gradient band under the stage, see §2), nav centred, real photography, high-key, palette plum-grey (murasaki-nezumi) `#655A62`, fonts Libre Baskerville / Karla, **font_direction serif**, CJK Noto Serif TC / Noto Serif JP (Mincho serif), first_screen horizontal-scroll-strip (kept inside the notch card and as the peeking session strip, see §2), page_structure landing-longform.

**Reference: https://www.sanno.ac.jp/** (SANNO Institute of Management, Japanese management school; S5-Style education). Measurements are in `reference-tokens.md`; shots are in `brand/ref/`. We borrow structure, techniques, colour relationships, motion and the key-visual concept. We never reuse its photos, illustrations, copy, logo or full page layout. **IMAGERY: photo.** The reference's hero, cards and banners are real photographs. Its three tiny spot illustrations inside the "manabi" (learning) cards are not reproduced; our cards use photos instead.

Values tagged `[tok a–g]` come from `reference-tokens.md` sections (a)–(g). Values tagged `[shot]` were measured on `ref/sanno-*.png` at 1440 px wide.

---

## 0. Fixed facts (every page, all five languages, never change)

- **Minori Seminars**. Founded **2011** as the in-house management-training desk of a group of mid-sized firms. It has opened three of its seminars to the public since **2016**. Seminar room and office: **4th floor, Lindehuis, Kade 41, 3024 AB Rotterdam, Netherlands** (fictional address). Email `seats@minori-seminars.example`. No phone number is published.
- **Hours.** Office Mon–Fri **09:00–17:30 (CET)**. Seminar days run **09:30–17:00**, doors open at **09:00**. Seminars are held only on **Thursdays**.
- **The format (same for all three seminars).** One day in the seminar room. **16 seats per seminar, at 4 tables of 4.** One facilitator plus one co-facilitator. Lunch and the printed **seminar notes** are included. Language of the day: English (in-house versions run in en / fr / de / zh-TW / ja).
- **The three open seminars:**
  1. **First-Time Manager Day**: for people in their first two years of leading a team (3–12 people).
  2. **Leading Through Change**: for heads of department taking a team through a reorganisation, merger or new system.
  3. **The Owner's Day**: for owners and managing directors of firms with 10–80 staff who want to delegate more.
- **Spring term 2027 dates (6, two per seminar).** Use these exact dates everywhere. The first three appear in the hero notch card and in the home session strip.

| # | Date | Seminar | Facilitator |
|---|---|---|---|
| 1 | Thu 21 January 2027 | First-Time Manager Day | Marit Coenen |
| 2 | Thu 4 February 2027 | Leading Through Change | Samuel Adeyemi |
| 3 | Thu 18 February 2027 | The Owner's Day | Claire Dubois |
| 4 | Thu 11 March 2027 | First-Time Manager Day | Marit Coenen |
| 5 | Thu 25 March 2027 | Leading Through Change | Samuel Adeyemi |
| 6 | Thu 8 April 2027 | The Owner's Day | Claire Dubois |

- **The day (one schedule for every seminar; write it as 5 ruled rows, never a step grid or a vertical timeline):**
  - 09:30 Opening at the tables: introductions in fours
  - 10:00 Morning session at the flipchart: the one idea of the day
  - 12:30 Lunch at the same tables
  - 13:30 Case clinic: your own situation, worked in pairs
  - 15:45 Your next conversation: written down, read to your table
  - Close at **17:00**.
- **Enrolment (5 steps, written as one paragraph or a 5-line ruled list):** (1) reserve a seat by email → (2) confirmation and invoice within **2 working days** → (3) a **5-question** pre-seminar note, sent **7 days** before → (4) the day → (5) seminar notes to keep, plus an optional follow-up call within **30 days**. Cancellation is free until **14 days** before. After that the seat can pass to a colleague or move to a later date.
- **Fees (EUR in every language, ex VAT, never converted). 6 items:**

| # | Item | Detail | Price |
|---|---|---|---|
| 1 | Open seminar day | one seat, lunch and seminar notes included | €640 |
| 2 | Table of four | 4 seats from one organisation at one table, same date | €2,240 |
| 3 | Follow-up call | 45 min with your facilitator, within 30 days | €150 |
| 4 | Seminar notes | printed workbook, yours to keep | Included |
| 5 | In-house seminar | any of the three, up to 16 people, at your premises within 100 km of Rotterdam | €6,800 |
| 6 | Waitlist and early access | first notice of the next term's dates | Free |

  Note line: "Prices exclude 21 % Dutch VAT. Lunch, coffee and notes are included in every seat."
- **People (7).** Show them as a ruled name list, never a face grid. Only Marit appears in a photo (P13).
  1. **Marit Coenen**: founder, lead facilitator, First-Time Manager Day
  2. **Samuel Adeyemi**: facilitator, Leading Through Change
  3. **Claire Dubois**: facilitator, The Owner's Day
  4. **Tobias Brandt**: co-facilitator, case clinics; runs in-house days in German
  5. **Wen-Yu Lin**: co-facilitator; runs in-house days in Mandarin and English
  6. **Inès Laurent**: enrolment and participant care (answers `seats@`)
  7. **Joost van Dam**: seminar room and operations
- **Stories (3).** These are fictional organisations. Describe outcomes qualitatively only (no percentages, no "improved by"):
  1. **Brakel Print & Pack** (42 staff): sent two new team leads to First-Time Manager Day.
  2. **Oostwal Housing Association**: four heads of department took a table of four at Leading Through Change after a merger.
  3. **Ferro Bakery** (28 staff, 3 shops): the owner came to The Owner's Day.
- Never claim guaranteed results, accreditation, awards, rankings, real media or real clients.

---

## 1. Signature techniques (three; each must be obvious at a glance)

### T1. Inset photo stage with a white notch card (sanno first screen, `ref/sanno-first.png`)
- **Reference:** under an 80 px white header, one photograph is inset **35 px from the left and right viewport edges** (x35–1405), **1370×690 (≈2:1)**, radius 0, from y80 to y770, so there is white page on both sides and a white strip below it in the first screen [tok e, shot]. A **white notch card 450×98** is cut into the photo's **bottom-left corner** (x35–485, y673–771). It holds a small accent label ("Recommend contents", sans 700 14 px blue), a serif line with a 1 px ink underline 290 px long, and two **30×30 black squares with white arrows** at x380 and x425 [tok f, shot]. A wide-tracked serif statement sits at x130 / y≈405 over the photo and fades in letter by letter [tok b, g].
- **Ours, home `ms-stage` (block 1):** the same geometry. The stage is inset `35px` left and right, the image is **P01** at `aspect-ratio:1370/690`, `object-fit:cover`, radius 0, and its top is flush with the header bottom.
  - Notch card: **450×98** white, absolutely placed `left:0; bottom:0` inside the stage (desktop only), padding `22px 30px 0 35px`. Contents: label **"Next open seminar"** (Karla 700 `0.875rem`, `#655A62`). Under it, a horizontal snap strip of **3 lines**, one per date #1–#3 of §0: serif line **"Thu 21 January 2027 · First-Time Manager Day ⟶"** (Libre Baskerville 400 `0.9375rem`, line-height 1.4). The line is 290 px wide with a `1px solid #2A2628` bottom rule and links to `/enrol/`. On the right are two **30×30 `#2A2628` squares** with white 1.5 px arrows, at card-x 345 and 390 (= ref x380 / x425), vertically centred on the line.
  - Statement H1 at stage-x 95 (= page x130), vertical centre at 46 % of the stage, max-width 760 px. See §2 for the text and colour.
- **Inner-page carry-over:** every inner page except Privacy, Terms and Thanks opens with a **short stage**: same 35 px inset, `1370×420` (`aspect-ratio:1370/420`), its own photo (§9), and a notch card 450×98 bottom-left. The card holds the T3 two-tone rule + EN caps label (e.g. "THE SEMINARS") and the page's next date line, e.g. "Next: Thu 21 January 2027 ⟶". The H1 does not go in the card; it is the T2 giant word right under the stage.
- **Do not dilute:** the photo must keep visible white margins on both sides (35 px; never full-bleed, never rounded). The notch card must be pure white, flush with the photo's left and bottom edges, so it reads as a bite out of the photo, not as a floating card with a shadow. The arrows stay solid near-black squares (no circles, no outlines).

### T2. Giant serif word on the edge of a diagonal tint band + corner-tick cards (sanno "SANNO no manabi", `ref/sanno-1800.png`, `ref/sanno-2700.png`)
- **Reference:** a **80 px serif heading** at x75. The **pale diagonal-gradient band** (`linear-gradient(124deg, …)`, ≈#E3EAF3 → #BDD3F0) begins at the heading's vertical middle, so the top half of the word is on white and the bottom half is on the band [tok a, f, shot]. Under it: a 28 px serif sub line, two lines of body, then a row of **three white cards, 410 wide, gap 30**. Each card has a **20 px L-tick in the accent at its top-right corner (outside the card, 2 px)**, a **red L-tick at its bottom-left**, a **title box with open corner brackets** (top-left and bottom-right, 1 px ink, 28 px arms), and a **40×46 black arrow square flush at its bottom-right**. The band ends 80 px under the cards [tok c, f].
- **Ours, home `#who` (block 3):** the same construction.
  - H2 **"Who the day is for"**: Libre Baskerville 400 **5rem (80 px)**, line-height 1.1, ls 0, ink, at container x0.
  - Band `.ms-band` full-bleed, `background:linear-gradient(124deg,#EFEAEE 0%,#D8CDD6 100%)`. It starts exactly at the H2's **50 % height**: implement as the section's `background` starting `calc(var(--ms-giant-lh) / 2)` from the top, or as an absolutely positioned band `top:2.75rem` behind the content. Band padding-bottom 80 px [tok c].
  - Sub line Libre Baskerville `1.75rem` (= ref 28 px). Body Karla 1rem / 2, max 2 lines on desktop.
  - Three cards, `410px` wide, `gap:30px` (container 1290 [tok c]), white, no shadow, padding `0 0 46px`.
    - Photo top: **P05 / P06 / P07**, 3:2, full card width.
    - Bracket title box: 1 px `#2A2628` arms 28 px, top-left and bottom-right, padding `14px 28px`, Libre Baskerville `1.375rem`, centred.
    - Then 2–3 lines of Karla `0.9375rem`, then one meta line `0.8125rem` `#6E6569`.
    - Ticks: `#655A62` L-tick top-right (`::before`, 20×20, 2 px border-top + border-right, offset −2 px outside). `#B5524F` L-tick bottom-left (`::after`, 20×20, border-bottom + border-left).
    - Arrow square `40×46` `#2A2628`, white arrow, absolutely at the card's bottom-right, linking to the seminar page.
  - Card texts:
    - "New to leading a team / First-Time Manager Day / In your first two years with 3–12 people."
    - "Leading a department through change / Leading Through Change / Reorganisation, merger or new system."
    - "Running the firm / The Owner's Day / Owners of firms with 10–80 staff."
- **Inner-page carry-over:** every inner page H1 is a **T2 giant word**: `4.25rem` on inner pages, 5rem on home. It sits right under the T1 short stage, with the band starting at the H1's middle and the page's first content block on the band. Corner-tick cards are reused on Seminars (3 seminars), Fees & dates (6 date cards), Stories (3 story cards) and Enrol (3 "what happens next" cards).
- **Do not dilute:** the band must visibly cut through the giant word at its middle (never start below it). The word stays ≥ 4.25rem on desktop. The band is the diagonal gradient (two stops, 124°), not a flat grey. Both ticks (plum top-right, brick bottom-left) and both bracket corners must be visible on every card. The arrow square is flush with the card corner.

### T3. Two-tone rule label + outline serif button + vertical Latin heading beside a dated list (sanno PICK UP / NEWS, `ref/sanno-900.png`, `ref/sanno-3600.png`)
- **Reference:**
  - Section label: a **100×2 px rule, left half blue, right half red**, then 20 px gap and a 36 px uppercase serif word ("PICK UP"). On larger heads the rule is 320×3 above a small sub line and a 60–72 px serif heading [tok b, f].
  - Buttons: **1 px #212121 outline, white fill, radius 0**, serif 16 px, padding `12px 48px 12px 20px`, with a **long thin arrow** at the right. Hover is 0.3 s and the arrow slides 6 px [tok d, g].
  - NEWS: a **vertical Latin word "NEWS" (rotated, 70×145)** at the left of a pale diagonal-gradient block. A white 1 px-bordered panel overlaps the block to its right and holds dated rows (date 14 px grey, title 16 px, 1 px rule under each). Outline buttons are right-aligned under the rows [shot].
- **Ours:**
  - Every home section from block 4 on opens with the two-tone label: `.ms-label` with a `::before` 100×2 rule, `linear-gradient(90deg,#655A62 0 50%,#B5524F 50% 100%)`, gap 20 px, then the word in Libre Baskerville 400 `2.25rem` uppercase, ls 0.02em.
  - Every button is the outline serif button (`.ms-btn`): 1 px `#2A2628`, white fill, radius 0, Libre Baskerville `1rem`, padding `12px 48px 12px 20px`, arrow 24 px line + head as `::after` at right 18 px. Hover: fill `#F8F6F7`, arrow `translateX(6px)` 0.4 s ease-out.
  - Home `#dates` (block 6) is the NEWS construction:
    - The vertical word **"DATES"**, Libre Baskerville `3rem`, `writing-mode:vertical-rl`, at the left of a gradient block (`#EFEAEE → #D8CDD6`, 124°, x75–1272 = ref).
    - The white panel (1 px `#D8CDD6` border) starts at x230 and runs to x1365, holding the **6 dated rows** of §0: date Karla `0.875rem` `#6E6569`, then title Karla `1rem` "First-Time Manager Day: Marit Coenen".
    - Under the rows, right-aligned, two outline buttons: **"Reserve a seat"** (→ `/enrol/`) and **"Join the waitlist"** (→ `/newsletter/`).
- **Inner-page carry-over:** two-tone labels on every inner section and outline buttons everywhere. The vertical-word + dated-panel construction appears on Fees & dates ("DATES"), Facilitators ("PEOPLE": the 7 names as rows), Stories index ("STORIES") and The day ("HOURS": the 5 schedule rows).
- **Do not dilute:** the rule is two colours split exactly in half (plum | brick), never one colour or a gradient. Buttons stay square-cornered outlines with a long thin arrow (never filled pills). The vertical word is Latin caps at ≥ 3rem, rotated, outside the panel.

### Continuation to inner pages (each technique on ≥ 4 inner pages)
| Page | T1 stage + notch | T2 giant word on band + tick cards | T3 label / buttons / vertical-word panel |
|---|---|---|---|
| Seminars `/seminars/` | P15 | yes + 3 tick cards (P05, P06, P07) | labels, buttons |
| First-Time Manager Day | P02 | yes | labels; "HOURS" vertical panel (5 rows) |
| Leading Through Change | P03 | yes | labels; "HOURS" vertical panel |
| The Owner's Day | P04 | yes | labels; "HOURS" vertical panel |
| The day `/the-day/` | P08 | yes | "HOURS" vertical panel |
| Fees & dates `/fees/` | P11 | yes + 6 date tick cards (no photos) | "TERMS" vertical panel; buttons |
| Facilitators `/facilitators/` | P13 | yes | "PEOPLE" vertical panel |
| Enrol `/enrol/` | P14 | yes + 3 tick cards "what happens next" | buttons |
| Stories (index/single) | P10 | yes + 3 story tick cards | "STORIES" vertical panel |
| In-house `/in-house/` | P17 | yes | labels |
| About & venue `/about/` | P18 | yes | labels |
| Newsletter / Thanks | P16 (Newsletter only) | giant word on band (no stage on Thanks) | buttons |
| Privacy / Terms | — | giant word on band only | labels |

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
SANNO's first screen is **one soft-focus, close documentary photograph of a student mid-conversation**, with another person blurred in the foreground at the left. It is **inset in the white page** (35 px margins) under a calm white header that has a single blue "MENU" square at the top right. A **white notch card bitten out of the photo's bottom-left corner** carries a "Recommend contents" line and **two black square arrows** that cycle the recommendation. Over the photo, a **wide-tracked serif statement fades in character by character** (a Japanese sentence, about 3 s). Under the stage, the **banner strip peeks in** from the bottom of the viewport.
- **Story:** a school that learns through conversation: real people talking, one calm account, and a way in.
- **Signature motion:** the statement's letter-by-letter fade. Then, on scroll, the header bar collapses from 80 to 44 px [tok g]. The hero itself is a slow video/slider with arrows.

### (2) Our translation: an open management seminar, same composition, same motion, same image type
A corporate seminar desk opening a day of management learning to the public.
- **P01** is a **high-key documentary photograph taken from just behind a seated manager**: their shoulder and dark-grey sleeve are soft and out of focus at the far left (the reference's blurred foreground person). In focus, mid-right: the **facilitator standing beside a flipchart** (sheets with only hand-drawn boxes and arrows, no letters), turned towards **four managers at one table with open notebooks**, one of them mid-sentence. The left 40 % of the frame is bright, soft window light and a pale wall, which is where the statement sits.
- The same wide-tracked serif statement **fades in word by word**: "**One day away from the desk,** / **to think about the people you lead.**"
- The notch card's arrows cycle the **next three open seminar dates** instead of "recommended contents". Under the stage, the **session strip** (three upcoming seminars, each a photo banner card) peeks in at the bottom of the viewport, the way SANNO's banner strip does.
- The header collapses on scroll (80 → 44 px). The single plum square at the top right is our one CTA, "Reserve a seat", in place of the blue MENU block.
- Image type stays real photography, high-key.

Colour of the statement: the reference sets white text on a mid-tone photo. Our photo is high-key, so the contrast is inverted. The statement is ink `#2A2628` on the bright left part of P01, helped by `linear-gradient(90deg, rgba(255,255,255,.55) 0, rgba(255,255,255,0) 55%)` over the photo. The type size, tracking and position stay the reference's.

### (3) KV checklist (all six are built in the first screen and visible at 1440×900)
| # | Reference element | Our counterpart | Position (1440×900) | Motion | Image |
|---|---|---|---|---|---|
| 1 | Inset 1370×690 soft-focus conversation photo, 35 px white margins | Facilitator at a blank flipchart + four managers with notebooks, blurred shoulder in the left foreground, high-key | `.ms-stage` x35–1405, y80–770 | `sp-parallax` on the stage, `--sp-par:8%` (mobile 6%) | **P01** `hero-seminar-room.webp` |
| 2 | White notch card 450×98 bottom-left with "Recommend contents" + underlined serif line + two 30×30 black arrows | "Next open seminar" + snap strip of 3 date lines (§0 #1–3), underlined, two `#2A2628` arrow squares | x35–485, y672–770 | arrows scroll the strip one line (`scrollBy`, 0.5 s smooth); no auto-advance | — |
| 3 | Wide-tracked serif statement fading in letter by letter | H1 "One day away from the desk, / to think about the people you lead." Libre Baskerville 400 `1.75rem`, ls `0.2em`, line-height 1.9, ink | x130, vertical centre y≈400 (46 % of stage) | word spans fade 0→1 + `translateY(6px)`→0, each 1.2 s ease-out, stagger 160 ms (≈ 2.6 s total) | (on P01) |
| 4 | Calm white 80 px header, single accent square top-right, collapses to 44 px on scroll | Wordmark left, centred anchor nav, plum `#655A62` square 120×80 "Reserve / a seat" at right | y0–80, full width | height 80→44 via CSS scroll-driven animation (`animation-timeline:scroll()`, range 0–120 px), 0.5 s feel; fallback: stays 80 | — |
| 5 | Two-tone (blue/red) accents and corner ticks | Plum L-tick at the notch card's top-right (where it meets the photo) + brick L-tick at the card's bottom-left | notch card corners | none | — |
| 6 | Banner strip peeking under the stage (slick, 630×200 slides, gap 30, black arrows at the ends) | Session strip: 3 seminar banner cards 630×200 (photo 280×200 left + text right) on `#F8F6F7`, third card cut by the right viewport edge | band from y800; card tops at y830 (70 px visible) | horizontal scroll-snap; 30×30 arrows at x60 / x1350; **no reveal** (horizontal strip, first screen) | **P02**, **P03**, **P04** |

All images named here are in §9. Hero has **no** `sp-reveal`. The word fade is CSS only. Its hidden state lives under `html.sp-js:not(.sp-no-motion)` inside `@media (prefers-reduced-motion:no-preference)`, so `?sp-static`, reduced motion, no-JS and the editor all show the final state.

---

## 3. Colour

The reference relationship: white grounds, near-black ink, one small saturated accent, a red secondary used only in ticks, and one pale diagonal tint band [tok a]. **Swap:** the accent blue `#005BCB` becomes plan-row plum-grey `#655A62`. Reasons:
1. The plan row assigns plum-grey (murasaki-nezumi) for palette spread across the batch.
2. A saturated corporate blue sits too close to Kensa Laboratory's steel `#465D73` and to the run of blue finance themes.
3. A management seminar for adults reads quieter in plum-grey.

The **role and share** stay the reference's: tiny in the first screen, about 6 % of the page.

| Role | Hex | Reference source | Use | Share |
|---|---|---|---|---|
| Ground | `#FFFFFF` | `#FFFFFF` [tok a] | page, cards, notch card, panels | ≈ 62 % |
| Alt ground | `#F8F6F7` | `#F8F8F8` (same L, plum tint) [tok a] | session strip band, "In the room" band, fees band | ≈ 10 % |
| Tint band | `linear-gradient(124deg,#EFEAEE,#D8CDD6)` | `#E3EAF3 → #BDD3F0` at 124° [tok a] | T2 bands, T3 vertical-word blocks | ≈ 9 % |
| Ink | `#2A2628` | `#212121` (+3 % L, plum cast) [tok a] | headings, body, outline buttons, rules, arrow squares | ≈ 8 % |
| Accent | `#655A62` | blue `#005BCB` (role swap, reasons above) | header CTA square, labels "Next open seminar", left half of the T3 rule, top-right ticks, links, dated-row hover | first screen ≈ 0.8 %, page ≈ 5 % |
| Secondary tick | `#B5524F` | red `#C9403B` (−2 % L, less chroma) [tok a] | right half of the T3 rule, bottom-left ticks, banner ribbon | < 1 % |
| Hairline | `#D8CDD6` | blue-grey panel border [shot] | panel borders, row rules on tint, table rules | — |
| Muted text | `#6E6569` | `#888` dates [shot] | dates, meta, captions | — |
| Tag outline | `#655A62` 1 px, text `#655A62`; neutral tag `#8C8388` | outlined pills r12 [tok d] | "In the room" card tags | — |

- Not beige-led: white leads, and the tints are cool plum-grey.
- Contrast: ink on white 15.2:1, white on `#655A62` 6.6:1, `#6E6569` on white 5.6:1.
- **First-screen saturated share** (HSV S > 35 %, V > 24 %): the reference is < 2 % [tok a]; the gate limit is 15 %. **Our ceiling is 6 %, target ≤ 3 %.** `#655A62` has S = 11 % and does not count. Only the brick ticks and anything coloured in P01 count, so P01 is graded soft: heather, charcoal, white and pale wood, with no saturated clothing. Check with `scripts/check-first-screen.py … --max 15`.

---

## 4. Typography (font_direction **serif**)

- **Latin display / labels / buttons / statement:** **Libre Baskerville** (wght variable 400–700). **Latin body / UI / nav sub-labels:** **Karla** (variable 400–700). The reference also pairs serif headings and buttons with a sans body [tok b].
- **CJK:** **Noto Serif TC** (zh-TW) and **Noto Serif JP** (ja), Mincho serif, for headings **and** body. Never Noto Sans, never gothic sans.
- Stacks (theme.json `fontFamilies`, loaded with `fontFace` so the editor and the front end match, including the zh-TW / ja subsets):
  - `heading`: `"Libre Baskerville", "Noto Serif TC", "Noto Serif JP", Georgia, serif`
  - `body`: `"Karla", "Noto Serif TC", "Noto Serif JP", system-ui, sans-serif`
  - `:lang(zh-TW)` heading and body → `"Libre Baskerville", "Noto Serif TC", serif`; `:lang(ja)` → `"Libre Baskerville", "Noto Serif JP", serif` (body text in CJK is Mincho serif).
  - Because style.css has `:lang(` rules: copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it in functions.php.
- Files (copy with their OFL texts, never download into the repo):
  - `LibreBaskerville-wght-latin.ttf` from `themes/aoba-veterinary/assets/fonts/`
  - `karla-variable-latin.woff2` from `themes/hibi-wear/assets/fonts/`
  - `noto-serif-tc-zh-tw-400.woff2` and `noto-serif-tc-zh-tw-700.woff2` from `themes/michishirube-consulting/assets/fonts/`
  - `noto-serif-jp-400-ja.woff2` and `noto-serif-jp-600-ja.woff2` from `themes/kakei-advisors/assets/fonts/`
  - These are already zh-TW / ja subsets, made the Hokuto/Hada way (the subset script is broken).
- Size presets (theme.json):

| Slug | Size | Use | Reference [tok b] |
|---|---|---|---|
| small | 0.8125rem | meta, tags, dates | 13–14 px |
| base | 1rem | body | 16 px |
| medium | 1.375rem | card titles | 22 px |
| large | 1.75rem | statement, T2 sub line | 28 px |
| x-large | 2.25rem | T3 labels | 36 px |
| xx-large | 3.75rem | banner heading, section H2 | 60 px |
| huge | **5rem** | T2 giant word | 80 px |

  **Max = 5rem (≥ 4.25rem ✓).** Inner H1 `clamp(2.75rem, 5vw, 4.25rem)`.
- Weights: Libre Baskerville **400** everywhere (the reference mincho is 500 and reads light), 700 only for the notch label. Karla 400 body, 700 for labels and table item names.
- Line-height: headings 1.1–1.25, statement 1.9, body **1.9** Latin (ref 1.8–2) and **1.85** CJK. Letter-spacing: headings 0; statement `0.2em` (ref ≈0.4em on CJK; 0.2em is the Latin equivalent); nav 0.04em.
- CJK headings ≈ 0.75× the English size (giant word 3.75rem in zh-TW / ja). fr / de `hyphens:auto`.
- Case: T3 labels and the vertical word are Latin caps in every language. The local heading under them is translated.

---

## 5. Spacing, radius, decoration, motion tokens

| Token | Value | Source |
|---|---|---|
| Container | `1290px` (x75–1365 at 1440); text column 760 | [tok c] |
| Stage inset | `35px` left/right, stage 1370×690 home / 1370×420 inner | [tok c, e] |
| Section padding | 120 px top/bottom for photo bands, 80 px for the strip and pick-up, 85/80 px for T2 | [tok c] |
| Card gaps | 3-up 410 / gap 30; 4-up 308 / gap 20 | [tok c] |
| Radius | **0** everywhere; tag pills r12 only | [tok d] |
| Shadow | none | [tok d] |
| Borders | buttons 1 px `#2A2628`; panels 1 px `#D8CDD6` | [tok d] |
| Ticks | 20×20, 2 px; plum top-right, brick bottom-left | [tok f] |
| Bracket title box | 1 px ink, 28 px arms, TL + BR | [tok f] |
| Arrow squares | 30×30 (notch, strip), 40×46 (card corner), `#2A2628` | [tok f] |
| Banner ribbon | 45° brick ribbon across the top-left corner, 140 px leg, white Karla 700 0.8125rem | [tok f] |
| Two-tone rule | 100×2 (labels); 320×3 above inner H1 sub lines | [tok f] |
| Hover | 0.3 s ease (buttons, cards); arrow translateX 6 px 0.4 s ease-out; card image `scale(1.04)` 0.4 s | [tok g] |
| Header | 80 px → 44 px, 0.5 s | [tok g] |
| Hero fade | 1.2 s ease-out per word, 160 ms stagger, ≈ 2.6 s | [tok g] (ref ≈ 60 ms per character, ≈ 3 s) |

---

## 6. Home page (en ≥ 320 words, ≥ 4 narrative paragraphs)

### Header (all pages)
- 80 px, white, `position:sticky; top:0`. Collapses to 44 px with the scroll-driven animation in KV #4, guarded by `@supports (animation-timeline: scroll())` and `prefers-reduced-motion: no-preference` and `html.sp-js:not(.sp-no-motion)`. No scroll listener.
- **Left (x35):** a mark (Ø40 1 px ink circle with a small serif "M") + wordmark **"Minori Seminars"** in Libre Baskerville 400 1.375rem.
- **Centre (nav centred, plan row):** anchors **Who · The day · Dates · Facilitators · Fees** in Karla 500 0.9375rem, ink, gap 36 px, with 1 px `#D8CDD6` dividers 16 px tall. Inner pages link to `/#who` etc.
- **Right:** language switcher "EN ▾" (Karla 0.8125rem), then the **plum square 120×80** (`#655A62`, white Karla 700 0.8125rem two lines "Reserve / a seat", a 20 px white thin arrow under it) → `/enrol/`. It shrinks to 120×44 with the header.
- Below 1024 px: the nav moves into an overlay opened by a two-line icon button (ink, left of the plum square). The plum square stays as the CTA (64×56 on mobile, "Reserve").

### First screen (1440×900)
- **Header** 0–80.
- **Stage P01** x35–1405, y80–770, with the statement at x130.
- **Notch card** x35–485, y672–770, with ticks.
- White gap, then the `#F8F6F7` session band from y800 with card tops at y830. The strip's first two cards and the edge of the third show at the bottom of the viewport.
- **Forbidden:** table, form, search box, any centred giant text, filled colour fields.
- Saturated share ≤ 6 %.

### Block order
| # | Pattern / anchor | Purpose | Layout and images | Copy |
|---|---|---|---|---|
| 1 | `ms-stage` `#top` | key visual + promise | **T1** as §1 / §2. P01. `sp-parallax` on the stage wrapper. | H1 statement 15 words; notch 3 date lines |
| 2 | `ms-sessions` | the next three seminars, bookable | `#F8F6F7` band, padding 30/80. Horizontal snap strip, `padding-left:75px`, track bleeds to the right edge. Three cards 630×200, gap 30: photo 280×200 left (**P02**, **P03**, **P04**), white text side right: date Karla 0.8125rem plum, title Libre Baskerville 1.375rem, one 14-word line, "Reserve a seat ⟶" text link. 30×30 ink arrows at x60 and x1350, vertical centre. | 3 × 20 words |
| 3 | `ms-who` `#who` | who the day is for | **T2** giant word "Who the day is for" on the band. Sub line "Three seminars, one for each place you lead from." 2-line paragraph, then 3 tick cards **P05 / P06 / P07**. Band ends 80 px under the cards. | 60-word paragraph + 3 × 25 words |
| 4 | `ms-day` `#day` | how the hours are structured | White. T3 label "THE DAY" + H2 "Seven hours, / four conversations." (3.75rem). Two columns: left 5/12 **P08** at 4:5 under a 2-paragraph intro. Right 7/12: a numerals row `1 day · 16 seats · 4 tables` (Libre Baskerville 3.75rem numerals with Karla 0.8125rem words under them, `sp-count`), then the **5 ruled schedule rows** of §0 (time Karla 700 0.875rem plum at left 90 px, title Libre Baskerville 1.25rem, one 20-word line). Rows have a 1 px `#D8CDD6` rule under each. A closing line "Close at 17:00." | 2 × 55-word paragraphs + 5 × 20 words |
| 5 | `ms-room` | what it looks like in the room (ref PICK UP) | `#F8F6F7` band, padding 80. T3 label "IN THE ROOM". 4-up cards 308 wide, gap 20: photo 3:2 (**P09**, **P10**, **P11**, **P12**), white card body, 2 outlined pill tags (e.g. "First-Time Manager Day" plum, "Morning" neutral), 2-line Karla 1rem caption. Centred outline button "Read the stories" → `/stories/` (= ref "PICK UP list"). | 4 × 18 words |
| 6 | `ms-dates` `#dates` | the full spring term | **T3 NEWS construction**: vertical "DATES" + gradient block + white bordered panel with the 6 dated rows; buttons "Reserve a seat" and "Join the waitlist" right-aligned under the rows. A 40-word lead above the panel. | 40 words + 6 rows |
| 7 | `ms-people` `#facilitators` | who runs the day | White. T3 label "FACILITATORS". Two columns: left 5/12 **P13** at 4:5 (Marit Coenen at the flipchart) with caption. Right 7/12: one 70-word paragraph on how facilitators work (practitioners, not lecturers; one co-facilitator per day), then a **ruled 2-column name list** of the 7 people (name Libre Baskerville 1.125rem, role Karla 0.875rem `#6E6569`). Outline button "Meet the facilitators" → `/facilitators/`. | 70 words + 7 rows |
| 8 | `ms-fees` `#fees` | flat prices | `#F8F6F7` band. T3 label "FEES". Fee table (§0, 6 rows) at **full container width 1290** at ≥ 782 px: columns item (Karla 700) / detail / price (Libre Baskerville 1.25rem, `white-space:nowrap; text-align:right`). Rules 1 px `#D8CDD6`. Note line under it. No reveal. | 6 rows + 25 words |
| 9 | `ms-enrol` `#enrol` | the single action (ref applicants site banner) | Inset banner **1074×460** centred (x183–1257 = ref) with `sp-parallax` (`--sp-par:6%`). **P14** fills it (participant smiling at the right 45 %, bright soft window bokeh). White→transparent gradient from the left (`rgba(255,255,255,.92)` 0 → 0 at 60 %). Brick 45° ribbon top-left **"Spring term 2027"**. Plum label bar 375×42 (white Karla 700 1rem) "Six Thursdays, 16 seats each". Libre Baskerville **3.75rem** "Reserve a seat". Outline button **"Reserve a seat"** → `/enrol/`. Under the banner, centred, a 50-word paragraph on how enrolment works (the 5 steps of §0 as prose). | 50 words |
| 10 | `ms-venue` | where and when | White. T3 label "THE ROOM". Two columns: **P15** 3:2 at 7/12 (the room set for four tables of four). Right: address, doors 09:00 / day 09:30–17:00, office hours, "10 minutes on foot from Rotterdam Centraal" (fictional framing), one 40-word paragraph. Outline button "About Minori and the room" → `/about/`. | 60 words |
| 11 | `ms-faq` | 5 questions | T3 label "QUESTIONS". 5 `details/summary` ruled rows (Libre Baskerville 1.125rem question, Karla answer): Can my company pay? / Can I send someone in my place? / Is there homework? / Is it in English? / Can we have it in-house? | 5 × 30 words |
| 12 | footer | links | White, 1 px `#D8CDD6` top rule. Left: mark + wordmark + address + hours. Centre: links to all inner pages (two columns). Right: "Join the waitlist" → `/newsletter/`, Privacy, Terms, language list. Bottom row: 100×2 two-tone rule + "© 2026 Minori Seminars". | — |

- **Home image positions: 15** (P01–P15). No image repeats on the page.
- **CTA:** "Reserve a seat" appears in the header square, the notch line, the session strip links, `#dates`, `#enrol` and the footer, always pointing to `/enrol/`. The only other buttons are outline links to inner pages.
- **Narrative paragraphs** (en): #3 (60), #4 (2 × 55), #7 (70), #9 (50), #10 (40). Total en ≥ 320 words. CJK home ≥ 550 characters.

### Comparison with recent home pages (must not repeat)
| # | Kikin Advisors | Kensa Laboratory | Kumoi Lodge | Ueki Gardens | **Minori Seminars** |
|---|---|---|---|---|---|
| 1 | line-art bar hero | peeking photo strip | framed window hero | white page + ragged photo row | **inset 35 px photo stage, notch card bitten out bottom-left, fading statement** |
| 2 | notched open-slots panel | 4×2 test tiles | blurred opener columns | 70 px index rows | **peeking banner-card strip on pale band** |
| 3 | who: butter band + circle badge | prose intro | room cards | nursery split | **giant word cut by a diagonal tint band + 3 tick cards** |
| 4 | hour (badge) | ruled test rows | parallax stage | spec mosaic | **day: tall photo + numerals + 5 ruled rows** |
| 5 | takeaway mirrored band | parallax band | facility box | parallax Saturday | **4-up pick-up photo cards with pill tags** |
| 6 | fees | how to send | table squares | services ledger | **vertical "DATES" word beside a dated panel** |
| 7 | stories panel | steel news panels | rates | mirrored aftercare | **facilitators: portrait + ruled name list** |
| 8 | grid-paper request | fee table | access | visit band | **fee table on pale band** |
| 9 | footer | lab & people / cases / FAQ | photo close | — | **inset banner with ribbon + label bar (parallax)**, room, FAQ |

**Why not alike.** Kikin is the closest subject (one-hour briefing landing). Minori shares none of its shapes: no illustration, no ink label bars, no circle badges, no vertical CJK headlines, no notched hairline panels, no grid paper. Our block 2 is a sideways photo-card strip, not a framed panel of round thumbnails. Kensa also had a peeking strip, but as its **hero**, centred, with dots. Ours is a secondary band under an inset stage, with black square arrows, and the hero is a single still photo. Ueki and Kumoi share no hero construction, no T2-style band cut through a word, and no tick cards. The fee table is the only shared kind of block, and it is required by the landing track.

---

## 7. Inner pages (15 + 404; landing track, linked from the footer and from in-page links)
Each inner page = **T1 short stage** (photo, notch card with two-tone label + next date) → **T2 giant H1** with the band starting at its middle → body (first block on the band) → closing strip: a white row with one outline "Reserve a seat" button and the next date line. No sidebar. Page heads get no reveal.

1. **Seminars** `/seminars/`: stage P15. H1 "Three open seminars". On the band: 3 tick cards (P05, P06, P07 as on home), each linking to its seminar page. Below: "What all three share" (the format of §0: 16 seats, 4 tables, lunch, notes, co-facilitator) as 3 paragraphs. Link to The day.
2. **First-Time Manager Day** `/seminars/first-time-manager-day/`: stage P02. H1 is the seminar name. Sections: who it is for (3–12 people, first two years); what the morning idea is ("the first conversation is the job"); the case clinic; what you take home. "HOURS" vertical panel with the 5 schedule rows. Dates #1 and #4. Facilitator Marit Coenen. Price €640 / table of four €2,240. Photo P09 in-text.
3. **Leading Through Change** `/seminars/leading-through-change/`: stage P03, same structure. Dates #2 and #5, Samuel Adeyemi. In-text photo P10. Story link: Oostwal Housing Association.
4. **The Owner's Day** `/seminars/the-owners-day/`: stage P04, same structure. Dates #3 and #6, Claire Dubois. In-text photo P07. Story link: Ferro Bakery.
5. **The day** `/the-day/`: stage P08. H1 "How the day runs". The 5 schedule rows at length (5 × 80 words) in the "HOURS" vertical panel. "What to bring" (one current situation you lead through, a notebook, nothing else). Lunch and dietary needs. In-text photos P12 (lunch) and P11 (case papers).
6. **Fees & dates** `/fees/`: stage P11. H1 "Fees and dates". On the band: the 6 dates as **tick cards in a 3×2 grid** without photos (date in Libre Baskerville 1.75rem, seminar, facilitator, arrow square → enrol). Then the fee table (full width at ≥ 782 px). Then a T3 vertical-word panel "TERMS" for **cancellation and invoicing** (ruled rows): free until 14 days before; transfer or move after that; invoice on confirmation; 30-day payment terms; VAT 21 %.
7. **Facilitators** `/facilitators/`: stage P13. H1 "The facilitators". A paragraph on how we facilitate. The "PEOPLE" vertical panel with the 7 people as rows (name, role, one 25-word line each). No faces except Marit in the stage.
8. **Enrol** `/enrol/` (the single action page): stage P14. H1 "Reserve a seat". On the band: 3 tick cards "What happens next" (confirmation in 2 working days / pre-seminar note 7 days before / the day and your notes). A white bordered panel "What to send us": your name, organisation, which date, how many seats (1 or a table of four), and invoice details. One outline button = `mailto:seats@minori-seminars.example?subject=Seat reservation`, plus the plum square repeated as a 260×64 block "Email to reserve". No form plugin. Cancellation line.
9. **Stories** (`home.html` index, `archive.html`, `single.html`), 3 posts: index stage P10. H1 "Stories from the room". 3 story tick cards: featured images P02 (Brakel), P06 (Oostwal), P04 (Ferro), plus a "STORIES" vertical panel listing them with dates. Single: T2 giant title (3rem) on the band, featured image 3:2 at 760 px, text column 680 px, the seminar name as a two-tone label.
10. **In-house seminars** `/in-house/`: stage P17. H1 "In your own building". Any of the three, up to 16 people, €6,800, within 100 km. Five languages (Tobias Brandt in German, Wen-Yu Lin in Mandarin). How we prepare (one call, one visit). Button → `/enrol/`.
11. **About & the room** `/about/`: stage P18. H1 "About Minori". History 2011 → 2016 → today in 3 paragraphs (no timeline graphic). Why only three seminars and only Thursdays. The room: P15 in-text, address, hours, directions in text.
12. **Newsletter (waitlist / early access)** `/newsletter/`: stage P16. H1 "Join the waitlist". A core HTML email field + submit with `action="mailto:seats@minori-seminars.example?subject=Waitlist"`, inside a white bordered panel on the band. "First notice of the autumn 2027 dates, at most one email a month." Privacy note.
13. **Thanks** `/thanks/`: no stage. H1 "Thank you." on the band. Next steps (confirmation within 2 working days). Button home.
14. **Privacy** `/privacy/` and 15. **Terms** `/terms/` (seat terms: cancellation, transfers, invoicing): no stage. H1 on the band, text column 720 px, H2 1.25rem with two-tone labels. No images, no motion.
16. **404 / search**: H1 on the band + outline button home + the next date line.

---

## 8. Responsive
- **390 px (no horizontal overflow, `html,body{overflow-x:clip}`):**
  - **Header:** 60 px (collapse to 44 kept).
  - **Stage:** inset 16 px each side, `aspect-ratio:4/5`, crop P01 on the facilitator and two managers (`object-position:62% 50%`).
  - **Statement:** **in flow under the photo**, not over it. Ink, `1.25rem`, ls 0.08em, padding 24 px 16px.
  - **Notch card:** in flow; a white block overlapping the photo bottom by `margin-top:-48px` (not absolute), width `calc(100% - 32px)`, arrows kept.
  - **No vertical text and no absolutely positioned labels in the first screen.**
- **Session strip (mobile):** cards 300 wide, photo on top (300×150), snap; the arrows hide (swipe instead).
- **T2 (mobile):** giant word 2.75rem, band starting at its middle; cards stack full width, ticks kept.
- **T3 (mobile):** the vertical word becomes horizontal (2rem) above the panel; the gradient block sits behind the panel with 16 px offset.
- **Banner (mobile):** 4:5, text below the photo on white, ribbon kept.
- **782–1279 px:** fee table at full container width. Price column `white-space:nowrap; text-align:right`, never cut.
- **Every table < 782 px stacks.** Each row becomes a block: item name + price on one line (price right, nowrap), detail below. `<thead>` visually hidden.
- Header nav collapses at < 1024 px. The 3-up and 4-up rows become 2-up at 782–1023.

---

## 9. Photos (18; Grok, one at a time, Read each one; ≤ 300 KB, ≤ 2000 px, 0 cut-outs)

**Imagery: photo** (reference = real photographs). Run `IMAGE_STYLE="<STYLE>" scripts/grok-image.sh out.webp "<subject>"`. Regenerate any image with text, letters on the flipchart, logos, broken hands or faces, or a different look. Flipcharts and whiteboards carry only drawn boxes, arrows and lines.

STYLE (exact, on every prompt):
`photorealistic high-key documentary photograph, bright soft daylight from large windows, white and pale warm-grey walls, light oak tables, 35mm lens, shallow depth of field, gentle desaturated colour grade, clothing in charcoal, heather grey, white, soft plum-grey and navy, modern international corporate seminar room, diverse adults aged 28 to 60 in smart-casual business clothes, calm candid moment, natural expressions, no text, no letters, no numbers, no logos, no brand marks, no signage, no Japanese elements`

| ID | File | Subject / composition | Ratio | Used on (once per page) | Home |
|---|---|---|---|---|---|
| P01 | `hero-seminar-room.webp` | From just behind a seated manager (soft out-of-focus shoulder at far left). Facilitator in focus at right-centre beside a flipchart with drawn boxes and arrows, turned towards four managers at one table with open notebooks, one speaking. Left 40 % bright window light and pale wall. | 2:1 (2000×1000) | Home stage | ✔ |
| P02 | `session-first-time.webp` | Young team lead (30s) writing in a notebook at a seminar table, coffee cup, colleague blurred beside | 7:5 | Home strip; First-Time Manager stage; Story 1 (Brakel) | ✔ |
| P03 | `session-change.webp` | Two heads of department talking by a tall window, one holding printed pages | 7:5 | Home strip; Leading Through Change stage | ✔ |
| P04 | `session-owner.webp` | Owner of a small firm (50s) with coffee, looking at flipchart notes, arms folded, thoughtful | 7:5 | Home strip; Owner's Day stage; Story 3 (Ferro) | ✔ |
| P05 | `who-new-manager.webp` | New manager (late 20s) listening at a table, pen in hand | 3:2 | Home who card 1; Seminars card 1 | ✔ |
| P06 | `who-department.webp` | Head of department (40s) mid-sentence, open hand gesture, table of four | 3:2 | Home who card 2; Seminars card 2; Story 2 (Oostwal) | ✔ |
| P07 | `who-owner.webp` | Managing director (late 50s) reading printed case pages at the table | 3:2 | Home who card 3; Seminars card 3; Owner's Day in-text | ✔ |
| P08 | `day-arrival.webp` | 09:00 arrival: two participants with coffee at a side table, seminar room behind, morning light | 4:5 | Home day; The day stage | ✔ |
| P09 | `room-flipchart.webp` | Close: facilitator's hand drawing an arrow between two boxes on a flipchart | 3:2 | Home room 1; First-Time Manager in-text | ✔ |
| P10 | `room-pairs.webp` | Two managers facing each other in pair work, notebooks on knees | 3:2 | Home room 2; Stories stage; Change in-text | ✔ |
| P11 | `room-case-papers.webp` | Overhead: printed case pages (blank lines, no readable text), notebooks, pens, cups on oak | 3:2 | Home room 3; Fees & dates stage; The day in-text | ✔ |
| P12 | `room-lunch.webp` | Lunch at the shared table, six people talking, simple salads and bread | 3:2 | Home room 4; The day in-text | ✔ |
| P13 | `facilitator-marit.webp` | Lead facilitator (woman, early 50s, short grey hair, charcoal jacket) beside a flipchart, smiling, half-body | 4:5 | Home facilitators; Facilitators stage | ✔ |
| P14 | `enrol-participant.webp` | A participant (40s) smiling, right side of the frame, bright window bokeh, left 55 % pale and open | 2.33:1 | Home banner; Enrol stage | ✔ |
| P15 | `venue-room.webp` | Empty seminar room set for four tables of four, flipchart, tall windows, morning light | 3:2 | Home room/venue; Seminars stage; About in-text | ✔ |
| P16 | `waitlist-notebook.webp` | Still life: open notebook, pen, coffee cup, a folded blank programme sheet on a white table | 4:3 | Newsletter stage; Thanks | — |
| P17 | `inhouse-client.webp` | Facilitator in a client's meeting room with a team of eight, glass wall, plants | 3:2 | In-house stage | — |
| P18 | `about-desk.webp` | The Minori desk team (three people) planning dates on a wall planner of blank squares | 3:2 | About stage | — |

Per-page check (no image twice on one page):
- **Home:** P01–P15.
- **Seminars:** P15, P05, P06, P07.
- **First-Time:** P02, P09. **Change:** P03, P10. **Owner's:** P04, P07.
- **The day:** P08, P12, P11.
- **Fees & dates:** P11. **Facilitators:** P13. **Enrol:** P14.
- **Stories:** P10 + P02, P06, P04.
- **In-house:** P17. **About:** P18, P15. **Newsletter:** P16. **Thanks:** P16.
- `readme.txt` gets one line per image: AI-generated, CC0.

---

## 10. Scroll effects (sp-scroll, copied unchanged) and motion

| Effect | Where | Reference source / trigger / time / easing |
|---|---|---|
| **sp-parallax** (required) | (a) Home `ms-stage` outer group `.ms-stage.sp-parallax`. The moving layer is `figure > img` (P01). The statement H1 and the notch card are **outside** the moving layer (siblings of the figure). `--sp-par:8%` desktop, **6% at < 782 px** (kept on mobile). (b) Home `ms-enrol` banner `.ms-banner.sp-parallax`, P14, `--sp-par:6%`. (c) Each inner short stage, `--sp-par:6%`. | sanno hero is a slow video slider: the photo drifts while the type stays. Translated to scroll-linked CSS (`animation-timeline:view()`, linear), with the sp-scroll.js IO fallback. |
| **sp-reveal--up + sp-stagger** | T2 tick-card rows (home #3; Seminars, Fees & dates, Enrol, Stories); the 4-up "In the room" cards (#5); the 5 schedule rows (#4). Parent gets `sp-stagger`, each card or row gets `sp-reveal sp-reveal--up`, `--sp-dist:24px`, `--sp-dur:.6s`. **Not** on: the hero, the session strip (horizontal), the fee table, forms, legal text, the T2 giant word. | Our addition (the reference has no reveal library [tok g]). IntersectionObserver, 0.6 s, 120 ms steps (sp-stagger default), `cubic-bezier(.2,.7,.2,1)`. |
| **sp-count** | The numerals row in #4 (`1 day · 16 seats · 4 tables`) and the same row on The day page. | Our addition, 1.2 s easeOutCubic. |
| Hero word fade (CSS only, not sp) | H1 word spans | sanno character fade, ≈ 3 s, ease-out [tok g]. Ours: 1.2 s per word, 160 ms stagger. Gated by `html.sp-js:not(.sp-no-motion)` + reduced-motion. |
| Header collapse (CSS only) | header 80→44 | sanno 0.5 s [tok g]; scroll-driven CSS, no listener. |
| Hover | buttons, arrow squares, cards | 0.3 s ease; arrow 6 px 0.4 s ease-out; image scale 1.04 0.4 s [tok g]. |

No GSAP, AOS, Lenis or jQuery. No `addEventListener('scroll'`. The strip arrows use a click handler calling `scrollBy({left: ±cardWidth+30, behavior:'smooth'})` in `assets/minori-strip.js` (≤ 1 KB). Without JS, the strips still swipe and scroll.

---

## 11. Similarity to the reference (target ≈ 80 %)
| Dimension | Reference (sanno.ac.jp) | Minori Seminars |
|---|---|---|
| Grounds | `#FFF` / `#F8F8F8` [tok a] | `#FFF` / `#F8F6F7` |
| Ink | `#212121` [tok a] | `#2A2628` |
| Accent | `#005BCB`, ≈0.5 % first screen, ≈6 % page [tok a] | `#655A62` (swap, §3), ≈0.8 % / ≈5 % |
| Red tick | `#C9403B` < 1 % [tok a] | `#B5524F` < 1 % |
| Tint band | 124°, `#E3EAF3 → #BDD3F0`, ≈9 % [tok a] | 124°, `#EFEAEE → #D8CDD6`, ≈9 % |
| First-screen saturation | < 2 % [tok a] | ≤ 3 % target, 6 % ceiling |
| Heading type | Zen Old Mincho 500, 80 / 60 / 36 / 28 px [tok b] | Libre Baskerville 400, 80 / 60 / 36 / 28 px (5 / 3.75 / 2.25 / 1.75rem) |
| Body type | Noto Sans JP 16 px, 1.8–2 [tok b] | Karla 16 px, 1.9; CJK Noto Serif 1.85 |
| Statement | wide-tracked ≈0.4em, white on photo, x130 / y405 | 0.2em Latin, ink on high-key photo, x130 / y≈400 |
| Header | 80 → 44 px, accent square right [tok g, shot] | 80 → 44 px, plum square 120×80 right |
| Container / gaps | 1290; bands 80–120 px; 3-up 410 / 30; 4-up 308 / 20 [tok c] | identical |
| Hero stage | 1370×690, 35 px inset, radius 0 [tok e] | identical |
| Notch card | 450×98, two 30×30 black arrows [shot] | identical |
| Radius / shadow | 0 / none; pills r12 [tok d] | identical |
| Buttons | 1 px outline, serif 16 px, pad 12/48/12/20, long arrow [tok d] | identical |
| Cards | tick corners (accent TR, red BL), bracket title box, 40×46 arrow square [tok f] | identical shapes, plum / brick |
| Label rule | 100×2 two-tone [tok f] | 100×2 plum / brick |
| Vertical heading | "NEWS" 70×145 beside dated panel [shot] | "DATES" / "PEOPLE" / "HOURS" / "STORIES" beside panels |
| Banner | 1074×460 photo composite, 45° red ribbon, blue label bar, outline button [shot] | 1074×460, brick ribbon, plum label bar, outline button |
| Imagery | real photos; hero 2:1 soft-focus, cards 3:2 [tok e] | real high-key photos; hero 2:1, cards 3:2 |
| Motion | char fade ≈3 s; header 0.5 s; hover 0.3–0.5 s; slick strip [tok g] | word fade ≈2.6 s; header 0.5 s; hover same; snap strip; + parallax, reveal, count |

---

## 12. Home acceptance checklist
1. At 1440×900: a white 80 px header with a centred nav and the plum square at the right. The P01 stage is inset 35 px with white on both sides. The ink statement sits at x≈130. The white 450×98 notch card is flush bottom-left with two black arrow squares and plum / brick ticks. The session strip's card tops show at the bottom of the viewport. There is no table, form or search box.
2. `?sp-motion`: the statement fades in word by word (≈2.6 s), the header shrinks to 44 px after scrolling, and the notch arrows move the date line. `?sp-static` and reduced motion show everything in its final state immediately.
3. `check-parallax.mjs`: stage layer offset ≥ 6 px on desktop and mobile, 0 under reduced motion. ≥ 3 reveals are hidden before entry and none are left transparent at the bottom. The hero has 0 `.sp-reveal`.
4. T2 on home: the gradient band visibly cuts through "Who the day is for" at its middle (5rem). The 3 cards are 410 wide with plum TR tick, brick BL tick, bracket title box and a 40×46 arrow square.
5. T3: the two-tone 100×2 rule is before every label from block 4 on. All buttons are outline, square, serif, with a long arrow. The vertical "DATES" word sits beside the bordered panel with 6 dated rows.
6. theme.json max size is 5rem. Fonts are Libre Baskerville / Karla with Noto Serif TC / JP and match in the editor (`check-editor-fonts.mjs`).
7. The fee table spans 1290 px at 1280 and fills the container at 800. Prices are right-aligned, nowrap and uncut. At 390 px it stacks.
8. 15 image positions on home, none repeated. Every image is a high-key photo in one STYLE with no text and no cut-outs.
9. "Reserve a seat" is the only CTA wording and always links to `/enrol/`. The waitlist link goes to `/newsletter/`.
10. At 390 px: no horizontal overflow, the statement and notch card are in flow, and there is no vertical or absolutely positioned text in the first screen.
11. First-screen saturated share ≤ 6 % (gate 15 %).
12. Numbers match §0 everywhere and in all five languages: 6 dates, €640 / €2,240 / €150 / €6,800, 16 seats, 4 tables, 09:30–17:00, 2 working days, 7 days, 14 days, 30 days, 100 km, 2011 / 2016.
