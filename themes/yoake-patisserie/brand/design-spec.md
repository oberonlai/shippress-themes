# Yoake Patisserie — design spec (stage 1, design director)

Type: **food-drink** (WooCommerce-compatible but not required; the site works fully without it). Industry: a patisserie that bakes one morning batch and keeps a small tea salon in the afternoon (counter pastries, whole-cake orders two days ahead, afternoon tea bookings).
Primary reference: **https://alleeomotesando.jp/** (sweets / cake / café; long single-flow page, diagonal coloured fields, edge-flush documentary photographs, 2 s fades). Secondary (structure only, colours not used): **https://100th.nittoh-tea.com/** (ruled 3-up article cells, tile + inset photo, giant numeral). Tokens: `brand/reference-tokens.md`, cited as **T(a)…T(g)**. Screens: `ref/allee-first.png`, `ref/scroll-allee-900.png`, `ref/scroll-allee-1800.png`, `ref/scroll-allee-2700.png`, `ref/scroll-allee-4800.png`, `ref/nittoh-first.png`, `ref/scroll-nittoh-1000.png`, `ref/scroll-nittoh-2200.png`.
**Imagery: photo** (stage-a IMAGERY = photo). One real-photography STYLE string, **high-key bright documentary** (§10). The reference is low-key; we invert the light (row `photo_direction: high-key`) but keep its grammar: motion-blurred hands, shallow depth, copper cutlery, one quiet moment per frame, photographs flush to a viewport edge. 0 cut-outs.
Font direction: **serif** (row `font_direction`). Latin display **Instrument Serif**, Latin body / UI **Karla** (row fonts; Karla's light weights stand in for the reference's Inter 200). zh-TW / ja headings **Noto Serif TC / Noto Serif JP** (Mincho). Details §6.
Similarity target: about **80%** to the reference in palette relationship, image treatment, motion, decoration and layout rhythm. Photographs, copy and the logo mark are all ours; no asset, text or logo of either reference is reused.
Header: exactly one top menu (`core/navigation`), **centred** (row `nav: centered`). Row page structure: **day-schedule** — the home page and The Day page are organised by the hours of one day (05:30 → 17:30). Row first screen: **top-bottom halves** (field above, photo below).
Class prefix: `yk-`. Pattern slugs `yoake-patisserie/<name>`.

---

## 1. Signature techniques (3, obvious at a glance, none may be softened)

Stage-a candidates C1–C6. The three signatures are **S1 = C1 (Split dawn)**, **S2 = C2+C3 (Wash and drift)** and **S3 = C5 (Hour ledger)**. C4 (film-still band) is supporting and carries the second parallax. C6 (marquee) is **not used** (it would be a fourth motion type; see §7).

### S1 (C1): Split dawn — coloured field on top, edge-flush photo below
- **Source**: alleeomotesando.jp first screen (`ref/allee-first.png`, T(a), T(e)). A brick→umber→cocoa diagonal field (`linear-gradient(110deg, #6D311D 22%, #664A29 55%, #41342B 90%)`) fills the top 360px of a 1440×900 screen. A two-line vertical lead sits at x≈210–280, y≈240–470, white, ~20px, and its lower end **crosses the top edge of the photo**. The photo starts at y360, runs from **x0 to x1296 (90% of the width), bleeding off the left edge and stopping 144px short of the right**, so the field continues as a vertical strip down the right side. Ratio ≈1.4, radius 0, no mask, no shadow. Outline logo mark 40×67 at x56 y24; transparent light nav.
- **Ours (home §1, the first screen)**: identical geometry. The field is the blush dawn wash `linear-gradient(110deg, #F6BFBC 22%, #F9D5D2 55%, #FDEEEC 90%)` (§5 explains the colour change). Height **360px** at 1440×900 (40% of the viewport; `min-height: 40svh`, max 400px). Photo **P01** from y360, **x0 → 90% width** (`width: 90%; margin-left: 0`), ratio **1.4** (1296×926), so the first screen shows its top 540px. The wash continues as the **10% strip at the right** of the photo, full height of the photo. The two-line lead (Instrument Serif 1.75rem, cocoa `#41342B`, `writing-mode: vertical-rl`) sits at **x200–280, top 200px**, and its last ~96px overlap the photo's upper-left corner (P01 is composed with a pale blank wall there). The mark is at x56 y24.
- **Never soften**: the photo must touch the left viewport edge and stop at 90%; the right strip of wash must stay visible beside the photo; radius 0; no container around the hero; no overlay or tint on the photo; the lead must be vertical at ≥1024px and cross the photo edge; nothing centred in the first screen except the nav.
- **Contrast**: the reference contrasts a dark, saturated field against a darker photo. Ours contrasts a **coloured blush field** against a **bright white-marble photo** with cocoa type; the wash is visibly pink (not cream, not stone, lesson from Tsumugi). Do not lighten the first stop `#F6BFBC`.

### S2 (C2 + C3): Wash and drift — diagonal wash band, tracked kicker + em dash, photo flush to the opposite edge and dropped
- **Source**: allee "The story of allée's" (`ref/scroll-allee-900.png`) and the alternating sections (`ref/scroll-allee-2700.png`, `ref/scroll-allee-4800.png`), T(b), T(c), T(e). A full-width section on the diagonal field; at the left (text column x120–144, ~300–420px wide) a **small tracked kicker** ("The story of …", 16px, weight 200, ls .1em), an **em dash `—` on its own line under it**, then **two short tracked lines** (poem-like stack, lh ≈2.5). A photo **648×440 (1.47) flush to the RIGHT viewport edge** (x792), its top **110px lower** than the kicker. Later sections mirror it: portrait **720×926 (0.78) flush LEFT**, **576×432 (1.33)** at x720 then x144, a **trio of 370×370 squares** at x60 / 535 / 1010, **720×540 flush right**. 140–200px of empty ground above each text block; no container, no cards, no borders.
- **Ours (home §2, §5, §7 and §8)**: §2 "The morning batch": wash 110deg (as hero), kicker at **x144**, text column **420px**, photo **P02 648×440 flush right**, top +110px. §5 "Whole cakes": wash mirrored (**290deg**, palest stop on the left), photo **P07 720×926 flush left**, text at **x792**, w420, top +110px from the photo top reversed (text starts 110px *below* the photo top). §6 trio of squares **P08 P09 P10 370×370 at x60 / 535 / 1010**. §7 "Afternoon tea": photo **P11 720×540 flush right**, text x144. §8 "At the bench": portrait **P12 432×648 (0.67)** at x144 with the names list at x720.
- **Never soften**: photos are flush to a viewport edge (left or right, alternating) — never inside a centred container; the vertical offset between photo top and text top is **110px** (desktop); the em dash under the kicker is always present; text blocks are narrow (≤420px) with wide empty ground; the wash is a visible pink diagonal (both ends must differ visibly: `#F6BFBC` → `#FDEEEC`).

### S3 (C5): Hour ledger — ruled 3-up cells, tinted tile with inset photo, pill, giant numeral bottom-right
- **Source**: Nittoh 100th article grid (`ref/scroll-nittoh-1000.png`, `ref/scroll-nittoh-2200.png`, T(d), T(f)). Edge-to-edge 3 columns (each 1/3 of the viewport), separated by **full-height 1px rules** (also above and below the row). Each cell: a coloured tile (different colour per cell) holding an **inset photo** with ~16px margin; under it on the light ground a **hairline pill tag** (radius 999) at the left and a date at the right, a 2–3 line title, and at the foot a small avatar + name line with a **giant serif numeral (~96px) at the bottom-right**.
- **Ours (home §3 "What leaves the oven, and when")**: 3 cells edge to edge (no container, `width: 100vw`), rules **1px `#6D311D`** (brick, replacing Nittoh red) on all verticals plus top and bottom. Tile = the dawn progression: **07 → `#FDEEEC`**, **11 → `#F9D5D2`**, **15 → `#F6BFBC`** (the day getting warmer). Inset photo **4:3** with **16px margin** on all sides of the tile (P03, P04, P05). Below on white, padding 28px 32px: pill (1px brick border, radius 999px, Karla 500 .75rem, ls .08em, 4px 12px) "Oven" / "Cakes" / "Salon" left, time "07:00" / "11:00" / "15:00" right (Karla 300 .875rem); title Instrument Serif 1.75rem/1.2, 2 lines; one Karla line (≤22 words); foot row: small name line ("Inès Moreau, viennoiserie") left and the **numeral "07" / "11" / "15" Instrument Serif 6rem (96px), brick `#6D311D`, line-height .8, bottom-right**, baseline aligned to the cell's bottom padding.
- **Never soften**: full-height 1px rules (not gaps, not cards, no shadow, radius 0 except pills); numerals 6rem and bottom-right; three different tile tints; the photo is inset (16px of tile visible on every side), not full-bleed.
- **Differs from**: Katachi's three abutting columns (no tile, no numeral, 4px gaps) and Akane's four sittings (no ruled cells, no inset tiles).

### Supporting decoration (always on)
- **Outline mark** (T(f)): our own one-stroke whisk-and-bloom line drawing (a balloon whisk whose wires open into a petal), **40×64**, 1px stroke `#41342B` (white `#FFFFFF` on the cocoa footer), at x56 y24 in the header. SVG in `assets/mark.svg`; no fill.
- **Em dash under every kicker** (T(f)): `—` on its own line, Karla 300, colour `#664A29`, 16px, margin 8px 0 28px.
- **Film-still band** (C4, T(e)): full-bleed 1440×765 (1.88) photo with **one tracked line centred** (home §4). Carries parallax (§7.2).
- Radius **0** everywhere except the hour-ledger pills (999px). No shadows. Only 1px brick rules in the ledger, price rows and people list.

### Continuation on inner pages (≥4 required; here 8)
| Page | S1 Split dawn (page head) | S2 Wash and drift | S3 Hour ledger |
|---|---|---|---|
| The Day | ✔ wash head + P16 flush-left 90% | ✔ 2 bands (05:30 bench, 17:30 close) | ✔ **6 cells, 2 rows**: 05:30 / 07:00 / 08:00 / 11:00 / 15:00 / 17:30 |
| The Counter | ✔ wash head + P08 | ✔ 1 band (the morning batch) | ✔ 3 cells: pastries by the hour they come out (07 / 08 / 10) |
| Whole Cakes | ✔ wash head + P15 | ✔ 1 band (two days ahead), P07 flush left | ✔ 2 size cells, numerals **15** and **18** (cm) |
| Afternoon Tea | ✔ wash head + P14 | ✔ 1 band (the salon), P11 flush right | ✔ 3 cells, numerals **15 / 16 / 17**: seated and first pot · the stand · last pot and the walk out |
| About | ✔ wash head + P13 | ✔ 2 bands (2017 founding, the bench) | ✔ 3 milestone cells with year numerals **17 / 19 / 23** |
| People | ✔ wash head + P12 | — | ✔ 7 cells (3+3+1), each numeral = the hour that person starts (05, 06, 07, 08, 10, 13, 14) |
| Visit | ✔ wash head + P13 (P01 is home-only) | ✔ 1 band (the walk from the station), P06 flush left | — |
| Contact / Morning Sheet | ✔ wash head (no photo; the wash at full 360px) | — | — |
Every inner page head = §4 "page head" pattern: wash 320px with kicker + em dash + H1, then a photo flush left at 90% width (ratio 2.4, max-height 600px) with `sp-parallax` 6%.

---

## Key visual concept

### (1) Reference first screen: concept, story, signature motion
- **What it draws**: a brick-to-cocoa diagonal field across the top; a two-line vertical lead at the left; a motion-blurred photograph of a hand turning the page of a book beside a pale cup and a slice of baked cheesecake with copper cutlery, flush to the left edge and stopping short of the right; a thin outline mark top-left; a transparent light-weight nav.
- **Story**: grown-up indulgence in one quiet moment — the sweet is the reason to pause.
- **Signature motion**: everything arrives slowly — text and photo fade in over **2000 ms** with `cubic-bezier(.4,.4,0,1)`, in sequence from page load; the ground colour eases from section to section (`.5s`).

### (2) Our scene (same composition, same motion idea, same image type: documentary photograph)
**First light in the patisserie.** In a white-marble kitchen that opens onto a small counter, the head pâtissière glazes a row of fruit tarts with a pastry brush — her hand is caught in slight motion blur, the copper glaze pan beside her. Beyond the bench, soft and out of focus, the first customer of the day waits at the counter with a pale cup of tea and one tart already on a plate. The story is the whole business in one frame: **one batch at dawn, tea at three** — the oven's hours are the shop's hours. The field above is the dawn sky colour (blush), the lead is the shop's promise, and the photo is the moment the day starts. Motion: the lead and the mark fade in once on load (2 s, same easing, CSS only, no reveal class); P01 moves with a slow parallax as the page scrolls; each wash band below shifts its diagonal direction (static) so the "ground colour changes" between sections.

### (3) KV checklist (all six built in the home first screen and visible at 1440×900)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Brick → umber → cocoa diagonal field, top 360px, continues as a strip right of the photo | Blush dawn wash `linear-gradient(110deg, #F6BFBC 22%, #F9D5D2 55%, #FDEEEC 90%)`, top 360px + the right 10% strip | y0–360 full width; x1296–1440 below | static (sections below alternate 110° / 290°) | — |
| 2 | Vertical two-line lead, white, ~20px, crossing the photo's top edge | H1 "One batch at dawn, / tea at three." Instrument Serif 1.75rem, cocoa `#41342B`, `writing-mode: vertical-rl`, 2 columns 48px apart, last ~96px over P01's pale upper-left | x200–280, top 200px (desktop ≥1024) | CSS load fade 2s `cubic-bezier(.4,.4,0,1)` delay .3s (not sp-reveal) | — |
| 3 | Motion-blurred hand with book, cup and cheesecake, flush left, 90% wide, from y360 | **P01**: pâtissière's hand glazing a row of tarts on white marble (slight motion blur on the brush), first customer soft at the counter behind; flush left, 90% wide, ratio 1.4 | x0–1296, from y360 | `sp-parallax` `--sp-par: 8%` (mobile 5%) on the img | P01 |
| 4 | Thin outline logo mark top-left | One-stroke whisk-and-bloom outline mark (own SVG), 40×64, 1px cocoa | x56, y24 | load fade with #2 (2s) | `assets/mark.svg` (not a photo) |
| 5 | Transparent light tracked nav | Centred `core/navigation`, Karla 300 .9375rem ls .1em, cocoa, transparent over the wash; "Book tea" text link at the right | header 100px, nav centred | none | — |
| 6 | Small cup and cake slice in the photo foreground | Pale porcelain cup of tea and one glazed tart on a white plate at the customer's place, copper fork | inside P01, right third | none | P01 |

---

## 3. Home page: block order

Container: none for S1/S2/S3/band (edge-flush); text-only blocks use content width 1152px (`contentSize`), wide 1296px. Section padding desktop **160px top / 200px bottom** (T(c): 140–200), mobile 72 / 96.
Copy target ≈ **650 English words**, ≥3 narrative paragraphs of ≥20 words (§2, §5, §7, §8 have them).

| # | Block (pattern) | Purpose | Layout | Photo(s) | Copy |
|---|---|---|---|---|---|
| 0 | `header` | one top menu | 100px, transparent over the wash; mark + wordmark "Yoake" (Karla 300 .9375rem ls .2em) left at x56; nav centred: The Day · The Counter · Whole Cakes · Afternoon Tea · Visit; right: "Book tea" text link (1px underline, offset 6px) | — | labels |
| 1 | `hero-split` (S1, KV) | key visual | §Key visual; below the photo's lower edge on the wash strip side, an in-flow info line right-aligned at x1296 − 0: Karla 300 .8125rem ls .12em "Counter from 08:00 · Tea at 15:00 · Wed–Sun" placed **under** the photo, right aligned, 24px below it | P01 | H1 2 lines + info line |
| 2 | `wash-morning` (S2) | story: one batch | wash 110°; kicker "The morning batch" + — + 2 tracked Instrument Serif lines ("Everything on the counter / was baked here before eight."); then 2 paragraphs (Karla 300) at x144 w420; P02 648×440 flush right, top +110px | P02 | 2 ¶ ≈ 120 words |
| 3 | `hour-ledger` (S3) | the day by hour | white ground; head row in content width: kicker "What leaves the oven, and when" + — + one line; then 3 ruled cells edge to edge (07 / 11 / 15) | P03 P04 P05 | 3 titles + 3 lines + names ≈ 90 words |
| 4 | `film-still` (C4) | pause | full-bleed P06 1440×765 (1.88), one centred line Karla 300 1rem ls .2em cocoa "Glazed at first light." | P06 | 4 words |
| 5 | `wash-cakes` (S2 mirrored) | whole-cake orders | wash 290°; P07 720×926 flush **left**; text at x792 w420 starting 110px below the photo top: kicker "Whole cakes" + — + 2 lines ("Order two days ahead. / Collect it at eleven."), 1 ¶, then the 4-step order flow as a **ruled sentence list** (1px brick rules, numerals 1–4 Instrument Serif 1.25rem; not a card grid), link "How to order a cake →" | P07 | ¶ ≈ 70 words + 4 lines |
| 6 | `counter-prices` | prices | white; trio of squares **P08 P09 P10** 370×370 at x60 / 535 / 1010 (each with a one-line caption Karla 300 .8125rem ls .1em below); then kicker "The counter and the salon" + — and the **price table (7 rows)** in content width 1152 | P08 P09 P10 | captions + table |
| 7 | `wash-tea` (S2) | the single way to book tea | wash 110° (shorter, 120px top pad); text at x144 w420: kicker "Afternoon tea" + — + 2 lines ("Fourteen seats, / one sitting at three."), 1 ¶ (seatings, how to book), button "Book afternoon tea" (filled cocoa, radius 0) → `/afternoon-tea/#book`; P11 720×540 flush **right**, top +110px | P11 | ¶ ≈ 80 words |
| 8 | `bench-people` | the people | white; P12 432×648 at x144; at x720 w576: kicker "At the bench" + — + 1 ¶ (≈60 words) + ruled list of **7 names** (name Instrument Serif 1.25rem, role Karla 300 .875rem right-aligned, 1px brick rules) | P12 | ¶ + 7 rows |
| 9 | `visit-band` | where and when | P13 full-bleed 1440×515 (2.8), no text over it; below on `#FDEEEC`, two columns in content width: address + walk (left), hours list (right; a definition list, not a table) | P13 | address + hours |
| 10 | `journal-rows` | latest stories | white; kicker "From the bench" + —; Query Loop 3 posts as ruled text rows (date Karla 300 .8125rem · title Instrument Serif 1.5rem · arrow), no thumbnails | — | titles |
| 11 | `morning-sheet` | newsletter | `#FDEEEC` panel in content width, padding 64px: kicker "The Morning Sheet" + — + 1 line + newsletter slot (§11) | — | 2 lines |
| 12 | `footer` | close | cocoa `#41342B` ground, text `#FDEEEC`; white outline mark, address, hours, email, small link list, © line | — | — |

**Home photo positions: 13** (P01–P13), all unique on the page (≥8 ✔).

### First-screen composition (1440×900)
- y0–100: header (transparent) on the wash. Mark x56 y24; nav centred (x≈520–920); "Book tea" ends x1384.
- y0–360: the wash, full width. H1 vertical at x200–280 starting y200, running to ≈y456 (crosses the photo top by ≈96px).
- y360–900: P01 from x0 to x1296 (visible 540 of its 926px height). x1296–1440: the wash strip continues.
- Nothing else in the first screen: no button, no form, no table, no second heading, no pill, no scroll cue.
- Saturated share (HSV s>0.55): **≈0%** (the wash's S ≈0.24; P01 high-key). Cap 15% (gate), row cap 30%.

### Comparison with recent themes' home orders (must not match)
| Theme | Home order | Why Yoake differs |
|---|---|---|
| Katachi Ergonomics | transparent header > full-bleed pale photo + docked notice card > centred intro > three abutting columns > offset-photo rows > check list > book band | Yoake's hero is **top/bottom halves** (field over a 90% edge-flush photo), not full-bleed + card; no centred intro; the 3 columns are ruled tinted tiles with inset photos and numerals, not plain abutting columns |
| Koori Cold Stores | opaque two-row header > crossfading hero with ring pager > catch statement > room-log strip > spec rows > steps card > capacity band | no slider, no pager, no statement, no steps card; one static KV and alternating edge-flush wash bands |
| Noka Cheese | split header > blur-to-focus hero > sticky statement > 2×3 mosaic > parallax counter band > 3 steps > monger note > reserve + prices > journal > letter > arch band | no sticky statement, no mosaic, no counter numbers, no arch; prices sit under a 370px trio; journal as text rows |
| Akane House | transparent header > full-bleed wordmark hero with info bar > narrative > four sittings > daily steps > letterbox band > menu table > people > visit > reservation > letter | Akane's day = 4 ragged tiles + sticky 3-column; Yoake's day = **ruled 3-up hour ledger with giant numerals**; no wordmark hero, no info bar, no near-black reservation band; Yoake's band is a 1.88 film still with one line, and every story section is a **diagonal pink wash with an edge-flush photo dropped 110px** |

---

## 4. Inner pages (10 pages + Journal + 3 posts)

All inner pages: header as home; **page head** (S1): wash 320px (110°) holding kicker (Karla 300 1rem ls .1em) + — + **H1 Instrument Serif 4.25rem/1.05** (2.75rem at 390) left at x144; then the page's head photo flush left 90% wide, ratio 2.4 (max-height 600px), `sp-parallax` `--sp-par: 6%` (mobile 4%). Then content. Footer as home.

| Page (slug) | Head photo | Content points |
|---|---|---|
| **The Day** (`the-day`) | P16 | Day-schedule page: intro ¶ (≈80 words); S3 ledger 6 cells in 2 rows (05:30 bench lit / 07:00 first trays / 08:00 counter opens / 11:00 cake collection / 15:00 tea is seated / 17:30 doors close) with photos P03 P08 P04 P15 P05 P14 (6 unique); S2 band "Sold out is the plan" (P02 flush right); hours list |
| **The Counter** (`counter`) | P08 | what is baked each morning; S3 3 cells (07 croissants, 08 tarts, 10 choux) with P03 P09 P10; S2 band P02 flush right ("why one batch"); price table (counter items 1–3 + 7) |
| **Whole Cakes** (`whole-cakes`) | P15 | S2 band P07 flush left ("two days ahead"); S3 2 cells **15 cm** / **18 cm** (serves 6 / 8–10, prices) with P04 P09; flavours list (5 flavours, ruled); 4-step order flow (ruled sentence list); rules (deadline 11:00 two days before, collection 11:00–17:00, free cancel ≥24h); **order enquiry form slot** (§11, kind contact) |
| **Afternoon Tea** (`afternoon-tea`) | P14 | S2 band P11 flush right (the salon, 14 seats); S3 3 cells numerals **15 / 16 / 17** (seated & first pot / the stand / last pot and the walk out) with P05 P10 P06; what is on the stand (savoury, scone, three pastries); price; rules; anchor `#book` → **booking form slot** (§11, kind contact) — the single way to book |
| **About** (`about`) | P13 | founding story 2017 (3 ¶); S2 bands ×2 (P12 portrait flush left; P02 flush right); S3 3 milestone cells 17 / 19 / 23 (P16 P15 P14) |
| **People** (`people`) | P12 | intro ¶; S3 cells for 7 people (3+3+1); three tiles carry inset photos P03 P07 P11, the other four are plain tints with the numeral only (numeral = start hour); **not** a portrait grid |
| **Visit** (`visit`) | P13 | address, walk from Halden Cross station (6 min), bus 14 stop "Quarry Lane"; hours dl; step-free entrance, 14 seats, no dogs in the salon (dogs welcome at the counter); S2 band P06 flush left |
| **Contact** (`contact`) | none (wash 360px, no photo) | email, phone hours, reply time; **contact form slot** (§11) |
| **The Morning Sheet** (`newsletter`) | none (wash 360px) | what it is (monthly, first Wednesday), 3 example items, **newsletter slot** (§11) |
| **Journal** (`journal`, role posts, empty content) | — | archive template: wash head + ruled text rows with 3:2 thumbnails 240px at the right |
| **Legal** (`privacy`) | none | plain text, no motion |
Posts (3, category "From the bench", tags): "The tart that sold out by nine" (P03), "Two days ahead: why we ask" (P15), "The first customer" (P16). Single template: wash head 320px with title (Instrument Serif 2.75rem), featured image flush left 90%, text column 680px centred-left at x144.

---

## 5. Colour

**Reference relationship (T(a))**: coloured diagonal field (brick → umber → cocoa) ~35% of the first screen; cocoa page ground `#41342B`; white light type; colour otherwise only inside the photographs.
**Why the field colour changes**: the reference field is 32% saturated (T(a)); the row requires a quiet first screen (gate 15%, row note ≤30%), palette "Nijiiro" `#F6BFBC` and **high-key** photography. A dark brick field over high-key photos would invert the light of the whole site. We keep the **relationship** (a coloured 110° three-stop diagonal field on top + a strip, colour outside photos only in fields, cocoa as the ink / dark ground) and **keep the reference's exact cocoa, umber and brick** as ink, kicker and accent.

| Token (theme.json slug) | Hex | Role | Share (home) | Source |
|---|---|---|---|---|
| `dawn` | `#F6BFBC` | wash first stop, 15:00 tile | ~12% | row hex (Nijiiro) |
| `dawn-mid` | `#F9D5D2` | wash middle stop, 11:00 tile | ~10% | blend `#F6BFBC`→white |
| `dawn-pale` | `#FDEEEC` | wash last stop, 07:00 tile, visit & newsletter panels | ~12% | blend |
| `paper` | `#FFFFFF` | page ground | ~45% | reference photo highlights inverted |
| `cocoa` | `#41342B` | all text, buttons, footer ground | type + footer ~8% | **T(a) reference body ground, exact** |
| `umber` | `#664A29` | kickers, em dashes, captions, meta | <1% | **T(a) reference umber, exact** |
| `brick` | `#6D311D` | ledger rules, numerals, pills, focus, link hover | <3% | **T(a) reference brick, exact** |
| `on-dark` | `#FDEEEC` | text on cocoa | footer | = dawn-pale |
| `error` | `#A3301F` | form errors | — | brick +8% L |
| `success` | `#2F5A3A` | form success text (bg `#E3EEE5`) | — | neutral |
Gradients (theme.json `gradients`): `dawn-110` = `linear-gradient(110deg, #F6BFBC 22%, #F9D5D2 55%, #FDEEEC 90%)`; `dawn-290` = `linear-gradient(290deg, #F6BFBC 22%, #F9D5D2 55%, #FDEEEC 90%)` (stops = T(a) positions 22 / 55 / 90).
Contrast: cocoa on white 11.6:1, on `#F6BFBC` 7.5:1; umber on `#F6BFBC` 5.0:1; brick on white 10.4:1; `#FDEEEC` on cocoa 10.5:1. **First-screen saturated share ≤5% target, hard cap 15%** (`scripts/check-first-screen.py`). Do not swap the blush for cream / beige / stone. Recent themes' main colours (Katachi pale, Koori ice blue, Noka cheese yellow, Akane plum-grey) are avoided.

---

## 6. Typography (serif direction)

Loaded only through **theme.json `fontFamilies` + `fontFace`** (woff2 in `assets/fonts/`, OFL licence files, all listed in theme-meta.json `fonts[].files` and named in readme.txt) so the editor iframe and the front end use the same faces.
| Family (slug) | Files | Stack |
|---|---|---|
| `display` Instrument Serif | 400 normal, 400 italic | `"Instrument Serif", "Iowan Old Style", Georgia, serif` |
| `body` Karla (variable 200–800) | normal (+ italic optional) | `Karla, "Helvetica Neue", Arial, sans-serif` |
| `display-zh` Noto Serif TC (subset, 500) | `noto-serif-tc-500-subset.woff2` | zh-TW headings: `"Instrument Serif", "Noto Serif TC", "Songti TC", "PMingLiU", serif` |
| `display-ja` Noto Serif JP (subset, 500) | `noto-serif-jp-500-subset.woff2` | ja headings: `"Instrument Serif", "Noto Serif JP", "Hiragino Mincho ProN", "Yu Mincho", serif` |
CJK body (system only, must not contain the bundled zh/ja families): zh-TW `Karla, "Songti TC", "Source Han Serif TC", "PMingLiU", serif`; ja `Karla, "Hiragino Mincho ProN", "Yu Mincho", "YuMincho", serif`. Subsets: build with the Hokuto / Hada replacement method (the shared zh subset script is known broken), covering every heading glyph in demo-content.zh-TW.json / ja.json plus the i18n dictionaries. Copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and require it (style.css uses `:lang()` rules). `check-editor-fonts.mjs` must pass in en and zh-TW.

Sizes (theme.json `fontSizes`; T(b) adapted — the reference's 16px weight-200 labels stay as our kickers, and the row's ≥4.25rem rule lands on numerals and page H1s):
| Slug | Size | Use |
|---|---|---|
| `x-small` | .75rem | pills, legal |
| `small` | .8125rem | captions, info line, meta (T(b) caption 14px) |
| `medium` | 1rem | body, kickers (T(b) 16px) |
| `large` | 1.25rem | people names, step numerals |
| `x-large` | 1.75rem | hero H1 (vertical), ledger titles, S2 line stacks |
| `xx-large` | 2.75rem | post titles, mobile H1 |
| `display` | **4.25rem** | inner-page H1 |
| `numeral` | **6rem** | hour-ledger numerals (T(f) Nittoh ~96px) |
- **Kicker** (T(b) h2 label): Karla 300, 1rem, lh 1.4, **ls .1em**, umber, no uppercase.
- **S2 line stack** (T(b) poem lines): Instrument Serif 400, 1.75rem, lh 1.6, ls .02em, cocoa, max 2 lines.
- **Body**: Karla **300**, 1rem, **lh 2.0**, ls .03em, cocoa (T(b): weight 200, lh 2.5, ls .15em for Japanese; for Latin, 300 / 2.0 / .03em keeps the airy look and stays legible). Paragraph spacing 1.5em.
- **Nav**: Karla 300, .9375rem, ls .1em (T(b) 16px w300 .1em).
- **Numerals**: Instrument Serif 400, 6rem, lh .8, brick, `font-variant-numeric: lining-nums`.
- **H1 inner**: Instrument Serif 400, 4.25rem, lh 1.05, ls −.01em.
- **zh-TW / ja**: sizes ×0.75 for headings (the 6rem numerals stay Latin digits at full size), body lh **1.85**, kickers ls .12em, line stacks lh 2.2 ls .12em (closer to T(b)). de / fr: `hyphens: auto` on body and headings.
- Hero H1 vertical: only at ≥1024px. In zh-TW / ja use `text-orientation: upright` (true vertical, as the reference); in en / fr / de `text-orientation: mixed` (Latin rotated). Each line ≤22 characters in every locale (translators rewrite, not translate literally).

---

## 7. Motion and scroll (sp-scroll)

Copy `pipeline/assets/sp-scroll/` unchanged to `assets/`; enqueue css + js in head (js not deferred); `add_editor_style`. Set on `:root`: `--sp-dur: 1.6s; --sp-ease: cubic-bezier(.4,.4,0,1); --sp-dist: 0px;` (T(g): opacity-only fades, 2000 ms; 1.6 s keeps the slow arrival while finishing inside the gate's 2.5 s settle).

### 7.1 Chosen effects (3)
| Effect | sp-* | Where | Reference trigger / time / easing | Ours |
|---|---|---|---|---|
| Slow fade | `sp-reveal` (base, opacity only) | home §2 text column, §3 head row, §4 line, §5 text, §7 text, §8 list, §10 rows; inner: S2 texts, flavour list | allee `.appear`: IntersectionObserver class toggle, opacity 0→1, **2000 ms**, `cubic-bezier(.4,.4,0,1)` (T(g)) | `--sp-dur 1.6s`, same easing, distance 0 |
| Edge drift | `sp-reveal sp-reveal--left` / `--right` with `style="--sp-dist:24px"` | S2 photos: P02 & P11 (flush right → `--right`), P07 & P12 (left → `--left`), trio P08–P10 (plain `sp-reveal` on the trio group, not the children) | allee edge-flush photos arriving ≈1.2 s, same easing (T(g)) | 24px ≤ 30px rule, 1.6s |
| Ledger stagger | `sp-stagger` on the cells row + `sp-reveal` on each cell | home §3; The Day, Counter, Whole Cakes, Afternoon Tea, About, People ledgers | Nittoh tile reveals, IntersectionObserver, ~100 ms steps (T(g)) | default .12s steps |
| Parallax (required) | `sp-parallax` | §7.2 | — | §7.2 |
Not used: `sp-count` (hours are not counters), `sp-marquee` (C6; would be a fourth type), wipe / mask / zoom. **No reveal in the hero** (§1). **No reveal** on forms, the price table, hours lists or legal text. The ground-colour ease (T(g) `.5s`) is not scripted: each band's static gradient direction changes instead (no scroll listeners). Reveals ≤60% of home blocks.
**Hero load fade (KV #2, #4)**: CSS only, in style.css, inside `@media (prefers-reduced-motion: no-preference)`: `html.sp-js:not(.sp-no-motion) .yk-hero__lead, html.sp-js:not(.sp-no-motion) .yk-mark { animation: yk-dawn 2s cubic-bezier(.4,.4,0,1) .3s both; } @keyframes yk-dawn { from { opacity: 0 } to { opacity: 1 } }`. Not on P01 (LCP). Visible with no JS, `?sp-static`, reduced motion and in the editor.

### 7.2 Parallax (required)
| Where | Block | Moving layer | Foreground (static) | `--sp-par` desktop / mobile | Reference motion |
|---|---|---|---|---|---|
| **Hero** (primary) | Group `yk-hero__photo sp-parallax` (90% width, ratio 1.4, flush left) wrapping `figure > img` | **P01** (sp-scroll scale 1.18) | none inside the moving frame; the H1 is a sibling outside the parallax group (it only overlaps visually) | **8% / 5%** | allee photo arrives slowly with a 2 s fade while the field stays; here the photo drifts slower than the page |
| **Film still** (home §4) | Cover `yk-film sp-parallax`, full-bleed 1440×765 (mobile 390×300) | **P06** cover background | the one-line caption in the Cover inner container (does not move) | **10% / 6%** | allee film-still band (T(e)); no parallax on the reference, the slow-fade feeling is carried by depth instead |
| **Inner page heads** | Group `yk-head__photo sp-parallax` | each page's head photo | none | **6% / 4%** | same as hero |
Mobile keeps parallax at the smaller speeds. Reduced motion, `?sp-static`, no JS and the editor: no movement (sp-scroll built-in). Acceptance: `check-parallax.mjs` desktop + mobile, displacement difference ≥6px, ≤1px under reduced motion; ≥3 reveals hidden before entering and final after; nothing transparent after scrolling to the bottom.

---

## 8. Responsive rules (hard)

- **390px first screen**: header in flow (64px, `#FDEEEC` ground, mark 28×45, nav collapsed to the core overlay button). Wash block in flow, padding 40px 24px 32px: H1 **horizontal** (Instrument Serif 2rem, 2 lines), **no vertical writing, no absolutely positioned label, no overlap**. Then P01 at `width: calc(100% - 24px)` flush left (24px wash strip kept at the right), ratio 1.2. Info line below in flow, left-aligned, 24px padding. `scrollWidth == innerWidth`.
- 1024–1279: same as desktop with H1 vertical; lead `left: 120px`.
- 782–1023: H1 horizontal in flow (as mobile, size 2.75rem); photo still 90% flush left.
- **S2 bands < 1024**: one column: kicker, —, line stack, ¶, then the photo flush to its edge at 92% width (left or right as on desktop); the 110px offset becomes 0; wash direction kept.
- **S3 ledger**: ≥1024 3 columns; 600–1023 2 columns (rules kept, the third cell spans); <600 1 column, rules become top/bottom only; numeral 4.25rem at <600; inset photo 16px margin kept.
- **Trio**: ≥782 3 squares at fixed x positions (60 / 535 / 1010 at 1440, i.e. `grid-template-columns: repeat(3, 25.7vw)` with 7.3vw gaps from 4.2vw); <782 horizontal scroll-snap row of 3 squares at 78vw (the row container may have reveal; the children may not).
- **Price table ≥782px**: spans the **full width of its container** (`width: 100%`, `table-layout: auto`); item column left; note column; **price column `white-space: nowrap; text-align: right; width: 1%; padding-right: 0`**; never clipped at 800 and 1280; no `overflow: hidden` on the wrapper.
- **Any table < 782px** (prices, cake sizes, hours if tabled): stacked — each row a block: item (Instrument Serif 1.25rem) with the price on the right of the first line (flex, nowrap), the note below (Karla 300 .875rem), 1px brick rule between rows. No horizontal scrolling.
- Film still: full-bleed, 390×300, caption 0.875rem.
- `html, body { overflow-x: clip }`; all parallax layers clipped by their wrapper.
- Touch targets ≥44px. CJK at <1024: horizontal only.

---

## 9. Fixed facts (identical on every page and in all five locales; brand.md is the source)

- **Name**: Yoake Patisserie ("yoake" = daybreak). **Founded** 2017 by Mara Lindqvist (head pâtissière) and Daniel Osei (tea and the salon) in a former print shop with a white-marble bench. **Address**: 14 Quarry Lane, Halden Cross (fictional). Halden Cross station 6 minutes' walk; bus 14, stop "Quarry Lane". **Phone** +44 20 7946 0532 (calls Wed–Sun 10:00–16:00). **Email** hello@yoake-patisserie.example (every mailto uses it).
- **Hours**: Wed–Sun · counter 08:00–17:00 (or until sold out) · afternoon tea one sitting 15:00–17:00 · doors close 17:30 · Mon–Tue closed (the oven is cleaned Monday; Tuesday is ordering and recipe day).
- **The day (routine; the hour ledger)**: 05:30 the bench is lit and the oven heats · 07:00 first trays out (croissants, then tarts) · 08:00 counter opens · 11:00 whole-cake collection opens (until 17:00) · 15:00 afternoon tea is seated · 17:30 doors close. Home shows 07 / 11 / 15.
- **Prices (7 items)**:
  1. Butter croissant **€3.60**
  2. Fruit tart of the day, slice **€6.50**
  3. Vanilla choux **€4.80**
  4. Whole cake 15 cm, serves 6 **€38**
  5. Whole cake 18 cm, serves 8–10 **€52**
  6. Afternoon tea in the salon, per person (with a pot of tea) **€42**
  7. Pot of tea **€6**
  Home shows all 7. Message on a cake (up to 20 characters) free.
- **Whole cake order (4 steps)**: 1 choose a size and one of five flavours (strawberry and vanilla, dark chocolate and hazelnut, lemon and almond, apricot and pistachio, coffee and walnut) · 2 send the order **by 11:00 two days before** (form on Whole Cakes or email) · 3 we confirm by email the same day · 4 collect **from 11:00 to 17:00** on the day; pay at collection. Free cancellation until 24 hours before.
- **Afternoon tea (the single way to book)**: the booking form on the Afternoon Tea page (or the email). **14 seats**, tables of 1–6, Wed–Sun 15:00, bookable up to 14 days ahead; tables held 15 minutes; not walk-in.
- **People (7)**: Mara Lindqvist, co-founder, head pâtissière (starts 06:00) · Daniel Osei, co-founder, tea and the salon (13:00) · Inès Moreau, viennoiserie, the first oven (05:30 → numeral 05) · Tomasz Nowak, whole cakes and orders (07:00) · Amara Nwosu, the counter (08:00) · Lucía Herrera, salon host (14:00) · Felix Brandt, apprentice baker (10:00).
- **Stories (3 posts)**: "The tart that sold out by nine" · "Two days ahead: why we ask" · "The first customer".
- **Milestones**: 2017 opened (numeral 17) · 2019 the back room became the salon (19) · 2023 whole-cake orders moved to two days ahead (23).
- **The Morning Sheet**: first Wednesday of each month; the month's tarts, the cake flavours, salon dates and closures; about 2 minutes' read.
- **Audience**: neighbours on the way to work, people ordering a birthday cake, friends booking tea. **Tone**: calm, precise, warm, never boastful; no awards, no "best", no health claims.

---

## 10. Images (16 photographs, all real photography, one STYLE; 13 on home)

**STYLE** (identical for every image):
`IMAGE_STYLE="high-key bright documentary food photograph, soft diffused morning window light, white marble and pale plaster surfaces, white porcelain, blush pink and cream tones with copper accents, shallow depth of field, slight natural motion blur on moving hands, airy and calm, gentle low contrast, 35mm lens, natural skin tones, diverse adults, modern international patisserie and small tea salon, uncluttered composition with generous pale negative space, no text, no letters, no numbers, no logos, no brand names, no signage, no labels, no packaging print, no Japanese elements"`
Generate one at a time with `scripts/grok-image.sh out.webp "<subject>"`; Read every image; regenerate any with text, logos, printed boxes, broken faces or hands, or a dark / moody look. ≤300 KB, ≤2000px, webp. No cut-outs.
| # | File | Subject (prompt core) | Ratio / size | Used on (page · block) | Home |
|---|---|---|---|---|---|
| P01 | `hero-glaze.webp` | **KV**: a pâtissière (woman, 40s, white jacket, sleeves rolled) brushing apricot glaze over a row of fruit tarts on a white marble bench, brush hand with slight motion blur, a small copper glaze pan beside; beyond the bench, out of focus, the first customer (man, 30s) waiting at a pale counter with a white cup of tea and one glazed tart on a plate, copper fork; **upper-left quarter is a pale blank plaster wall in soft light** (room for the vertical lead) | 1.4, 1960×1400 | Home §1 hero | ✔ |
| P02 | `morning-counter.webp` | a pale counter at 08:00 with trays of croissants and tarts just set out, a hand placing the last tray, window light | 1.47, 1764×1200 | Home §2 · The Day S2 · Counter S2 · About S2 | ✔ |
| P03 | `first-trays.webp` | 07:00: a baker's hands pulling a tray of golden croissants from a deck oven, steam, pale tiled kitchen | 4:3, 1600×1200 | Home §3 cell 07 · The Day cell · Counter cell · People tile · post 1 | ✔ |
| P04 | `cake-finish.webp` | 11:00: a whole strawberry cake on a turntable being finished with a palette knife, white cream, marble | 4:3, 1600×1200 | Home §3 cell 11 · The Day cell · Whole Cakes cell 15 | ✔ |
| P05 | `tea-stand.webp` | 15:00: a three-tier porcelain stand with small pastries and scones on a pale linen table, a teapot being poured, two guests' hands | 4:3, 1600×1200 | Home §3 cell 15 · The Day cell · Afternoon Tea cell | ✔ |
| P06 | `glaze-still.webp` | macro film still: a glazed tart surface catching light, the brush leaving it, extremely shallow depth, **centre soft pale blur** | 1.88, 2000×1064 | Home §4 film still · Afternoon Tea cell · Visit S2 | ✔ |
| P07 | `order-box.webp` | portrait: hands tying a pale ribbon around a plain white cake box on the marble counter, an order slip without writing beside it | 0.78, 1250×1600 | Home §5 · Whole Cakes S2 · People tile | ✔ |
| P08 | `tart-square.webp` | top-down: a single fruit tart (berries, apricot) on a white plate, marble | 1:1, 1400×1400 | Home §6 trio 1 · Counter head · The Day cell | ✔ |
| P09 | `choux-square.webp` | three vanilla choux on a white porcelain plate, powdered sugar, a copper fork | 1:1, 1400×1400 | Home §6 trio 2 · Counter cell · Whole Cakes cell 18 | ✔ |
| P10 | `tea-square.webp` | a pale cup of tea poured from a white pot, steam, a slice of lemon cake beside | 1:1, 1400×1400 | Home §6 trio 3 · Counter cell · Afternoon Tea cell | ✔ |
| P11 | `salon.webp` | the small salon at 15:00: four pale tables, linen, tall windows, two pairs of guests (diverse) talking softly, tea stands | 4:3, 1600×1200 | Home §7 · Afternoon Tea S2 · People tile | ✔ |
| P12 | `bench-portrait.webp` | portrait: the head pâtissière (woman, 40s, Scandinavian) at the marble bench, piping cream, looking down, white jacket | 0.67, 1200×1800 | Home §8 · People head · About S2 | ✔ |
| P13 | `shopfront.webp` | the shopfront at early morning: a pale plaster facade on a quiet street, a large clear window with warm light inside, a wooden bench outside, a bicycle, no sign | 2.8, 2000×714 | Home §9 band · About head · Visit head | ✔ |
| P14 | `salon-wide.webp` | the salon empty before 15:00: tables set, cups upside down on saucers, a vase of pale roses, window light | 2.4, 2000×834 | Afternoon Tea head · The Day cell · About cell 23 | |
| P15 | `order-talk.webp` | at the counter a baker (man, 30s, Polish) showing a customer (woman, 50s, West African) two cake sizes on a marble board, both smiling | 2.4, 2000×834 | Whole Cakes head · The Day cell · About cell 19 · post 2 | |
| P16 | `dawn-bench.webp` | 05:30: the kitchen in the first pale light, one baker (woman, 30s, French) laminating dough on the bench, the oven door glowing softly | 2.4, 2000×834 | The Day head · About cell 17 · post 3 | |
Per-page check (no repeats on one page): **Home** P01 P02 P03 P04 P05 P06 P07 P08 P09 P10 P11 P12 P13 · **The Day** P16 P03 P08 P04 P15 P05 P14 P02 · **Counter** P08 P03 P09 P10 P02 · **Whole Cakes** P15 P07 P04 P09 · **Afternoon Tea** P14 P11 P05 P10 P06 · **About** P13 P12 P02 P16 P15 P14 · **People** P12 P03 P07 P11 · **Visit** P13 P06 · posts: 1 P03, 2 P15, 3 P16.

---

## 11. Forms (form contract v1: `steps/form-contract-v1` exists)

Copy `pipeline/assets/forms/shippress-forms.php` unchanged to `inc/`, the CSS and editor JS unchanged to `assets/`; `require` it in functions.php. Patterns stay literal block markup with a small PHP island for `shippress_form_slot`. **No form in the home first screen; no `sp-reveal` on any form or its wrapper.**
- **Afternoon Tea (`afternoon-tea`, booking; anchor `#book`)**: section "Book a table for tea" on `#FDEEEC`, text left (x144, w420: seats, 14-day window, held 15 min), form right (w560): `shippress_form_slot( kind: contact )`. Fallback = buffered literal mailto button **"Email us to book tea"** (`wp-element-button`, href `mailto:hello@yoake-patisserie.example?subject=<forms_tea_subject>`) + sentence "Opens your email app. Tell us the day, how many of you (1–6) and a phone number." Recommended CF7 fields (documented in readme, not created by the theme): name*, email*, phone*, date* (Wed–Sun), guests (select 1–6)*, notes (textarea: allergies, occasion), consent checkbox* ("I agree that Yoake Patisserie may contact me about this booking"), submit "Request a table".
- **Whole Cakes (`whole-cakes`, order enquiry)**: same layout on white: slot kind contact. Fallback mailto **"Email your cake order"** (subject `forms_cake_subject`) + "Opens your email app. Tell us the size, flavour, collection day and any message for the cake (up to 20 characters)." Recommended fields: name*, email*, phone*, collection date* (≥2 days ahead), size (select 15 cm / 18 cm)*, flavour (select, 5)*, message on cake (text, max 20), allergies (textarea), consent*, submit "Send cake order".
- **Contact (`contact`)**: slot kind contact; fallback mailto **"Email us"** (subject `forms_contact_subject`). Fields: name*, email*, subject (select: General / Cake order / Afternoon tea / Press), message*, consent*. The fallback never links to `/contact/` itself.
- **The Morning Sheet (`newsletter`)**: standalone page; form panel on **cocoa** `#41342B` (dark-ground test case), padding 64px, radius 0, text `#FDEEEC`: `shippress_form_slot( kind: newsletter, email: hello@yoake-patisserie.example, label: forms_email, submit: forms_subscribe, notice: forms_mail_notice, subject: forms_mail_subject )`.
- **Home §11**: same newsletter slot on `#FDEEEC` (light). Footer: link to the page only (no second slot).
- Plugin order (shared helper): newsletter MailPoet (explicit id) → MC4WP; CF7 / WPForms only via an explicit dedicated id. Contact kinds CF7 → WPForms. Without plugins the newsletter shows a required `type=email` field + submit, native mailto POST, with the notice visible.
- **Tokens** (style.css, mapped to theme.json presets):
  - light: `--sp-form-accent: var(--wp--preset--color--cocoa)` #41342B; `--sp-form-on-accent: var(--wp--preset--color--paper)` #FFFFFF; `--sp-form-radius: 0` (T(d)); `--sp-form-focus: var(--wp--preset--color--brick)` #6D311D (2px outline, offset 2px); `--sp-form-surface: #FFFFFF`; `--sp-form-text: #41342B`; inputs 48px high, 1px border `rgba(65,52,43,.3)`, Karla 300 1rem, padding 12px 14px; labels Karla 400 .875rem ls .06em umber; submit 48px, Karla 500 .9375rem ls .1em, hover `#5A483C`; error text + border `#A3301F`; success panel `#E3EEE5` text `#2F5A3A`; checkbox/radio `accent-color: #6D311D`.
  - dark (`.yk-dark`, cocoa ground): `--sp-form-surface: #4C3E34`; `--sp-form-text: #FDEEEC`; `--sp-form-accent: #F6BFBC`; `--sp-form-on-accent: #41342B`; `--sp-form-focus: #F9D5D2`; border `rgba(253,238,236,.35)`; error `#F2A79C`; success `#BFD8C2`; labels inherit `#FDEEEC`.
  - States styled: input, textarea, select, checkbox/radio, label, submit, hover, focus-visible, disabled, error, success; scoped to CF7, WPForms, MailPoet, MC4WP (+ Jetpack, `.wp-block-form`) classes and `.sp-newsletter-fallback`; no global input selectors.
- **i18n semantic keys** (`inc/i18n/en.php`, extract with `L10N_SEMANTIC=1`, rewritten locally in en, zh-TW, ja, fr, de): `forms_email` "Email address", `forms_subscribe` "Send me the Morning Sheet", `forms_mail_notice` "This opens your email app. Send the message to subscribe; you are not subscribed yet.", `forms_mail_subject` "Subscribe to The Morning Sheet", `forms_contact_subject` "Hello from the website", `forms_tea_subject` "Afternoon tea booking", `forms_cake_subject` "Whole cake order", `contact_email` "Email us", `forms_tea_button` "Email us to book tea", `forms_cake_button` "Email your cake order", `forms_tea_note`, `forms_cake_note`, `forms_contact_note` (fallback sentences above). Check the rendered label, button, notice and subject in all five locales.
- Validation: `form-check.py`, five-locale `form-runtime-check.php`, `repo-gates.sh forms`; a real CF7 check at 390px and desktop on the light (Afternoon Tea) and dark (Morning Sheet) grounds; never submit.

---

## 12. Similarity table (target ≈ 80%; values from reference-tokens.md)

| Dimension | Reference value (token) | Yoake value |
|---|---|---|
| First-screen field | 110° brick→umber→cocoa, stops 22/55/90%, top 360px, ~35% (T(a)) | 110° `#F6BFBC`→`#F9D5D2`→`#FDEEEC`, stops 22/55/90%, top 360px + right strip (colour changed: row palette + 15% cap + high-key, §5) |
| Ink / dark ground | cocoa `#41342B` (T(a)) | `#41342B` exact (text, footer, buttons) |
| Secondary tones | umber `#664A29`, brick `#6D311D` in the field (T(a)) | umber exact (kickers), brick exact (rules, numerals, focus) |
| Saturated share | 32% (T(a)) | ≈0–5% (cap 15%) |
| Hero photo | x0→x1296 (90%), from y360, ratio ≈1.4, flush left (T(e)) | identical geometry, P01 |
| Vertical lead | 2 columns 50px apart, ~20px, x≈210–280, crosses photo edge (T(b)) | 2 columns 48px apart, Instrument Serif 1.75rem, x200–280, crosses by ≈96px (≥1024 only) |
| Logo mark | 40×67 outline, x56 y24 (T(f)) | own whisk-and-bloom outline 40×64, x56 y24 |
| Header | 100px, transparent, nav right-aligned to x1335 (T(c)) | 100px, transparent, nav **centred** (row requirement), "Book tea" ends x1384 |
| Heading label | 16px, w200, lh 22.4px, ls .1em (T(b)) | kicker Karla 300 1rem, lh 1.4, ls .1em |
| Em dash | `—` under the label (T(f)) | identical, umber |
| Poem lines | 14–16px w200, ls .15em, lh 2.5 (T(b)) | Instrument Serif 1.75rem lh 1.6 (Latin); CJK lh 2.2 ls .12em; body Karla 300 lh 2.0 |
| Text column | x144 or x262, 300–420px wide (T(c)) | x144 / x792, 420px |
| Section gap | 140–200px before text (T(c)) | 160 top / 200 bottom |
| Container | none, elements hug x0 / x1440 (T(c)) | none for S1/S2/S3/band; 1152px only for tables and rows |
| Story photo | 648×440 (1.47) flush right, 110px lower (T(e)) | P02 648×440 flush right, +110px |
| Portrait / trio / landscape | 720×926 (0.78) left; 370² ×3 at x60/535/1010; 720×540 right; 432×648 (0.67) (T(e)) | P07 720×926 left; P08–P10 370² at x60/535/1010; P11 720×540 right; P12 432×648 |
| Film still | 1440×765 (1.88), one 16px tracked line centred (T(e)) | P06 1440×765, one Karla 300 1rem ls .2em line, + parallax 10% |
| Wide band | 1440×515 (2.8) (T(e)) | P13 1440×515 |
| Radius / borders / shadows | 0 / none / none (T(d)) | 0 / only 1px brick rules / none |
| Ruled cells (secondary) | 3-up, 1px rules, tinted tile + inset photo, pill r999, numeral ~96px bottom-right (T(d), T(f)) | 3-up, 1px brick rules, 3 dawn tints + 16px inset, pill r999, numeral 6rem bottom-right |
| Reveal | `.appear` opacity 0→1, 2000 ms, `cubic-bezier(.4,.4,0,1)` (T(g)) | `sp-reveal` opacity, 1.6s, same easing; photos ±24px edge drift |
| Ground ease | body bg .5s same easing (T(g)) | static gradient direction change per band (no listeners) |
| Stagger | Nittoh IO reveals (T(g)) | `sp-stagger` .12s |
| Parallax | none found (T(g)) | required: hero 8%, film 10%, heads 6% |
| Imagery | low-key documentary, motion-blurred hands, copper cutlery, shallow depth (T(e)) | **high-key** documentary (row), same motion blur, copper, shallow depth, one quiet moment |

---

## 13. Home acceptance checklist (stage 1)

1. 1440×900 first screen: blush 110° wash across y0–360 and as the right strip; P01 flush left x0–1296 from y360 (pâtissière glazing tarts, customer with tea behind); vertical H1 "One batch at dawn, / tea at three." at x200–280 crossing the photo edge; outline mark x56 y24; centred nav + "Book tea"; nothing else (no button, form, table, pill, second heading).
2. 390×844: header in flow; H1 horizontal in the wash; P01 at 100% − 24px flush left with the wash strip; info line in flow; no vertical text, no absolute labels, no overlap; no horizontal overflow.
3. §2 wash with kicker + — + 2 lines + 2 ¶ at x144 w420; P02 648×440 flush right, 110px lower.
4. §3 hour ledger: 3 cells edge to edge, 1px brick rules full height + top/bottom, tints `#FDEEEC` / `#F9D5D2` / `#F6BFBC`, inset photos P03 P04 P05 with 16px margin, pills, numerals 07 / 11 / 15 at 6rem bottom-right.
5. §4 film still P06 full-bleed 1.88 with one centred line; visible parallax.
6. §5 wash 290° with P07 720×926 flush left and the 4-step ruled sentence list; §7 wash with P11 720×540 flush right and the "Book afternoon tea" button.
7. §6 trio P08 P09 P10 370² at x60 / 535 / 1010, then the 7-row price table: full container width at ≥782, prices `nowrap` right, not clipped at 800 / 1280; stacked below 782. Prices match §9 (€3.60 / €6.50 / €4.80 / €38 / €52 / €42 / €6).
8. §8 P12 portrait + 7 ruled names; §9 P13 band + address + hours (Wed–Sun 08:00–17:00, tea 15:00, closed Mon–Tue); §10 3 journal rows; §11 newsletter slot (email + submit + notice without plugins, not in the first screen, no reveal); cocoa footer with white mark.
9. 13 unique images on home (≥8); 0 cut-outs; every image Read-checked for text and logos.
10. ≥250 English words (target ≈650), ≥3 narrative paragraphs of ≥20 words; the daily routine (05:30 → 17:30) appears in §3 / §2.
11. Effects: sp-reveal (fade + edge drift), sp-stagger, sp-parallax only; hero has no reveal (CSS load fade only on H1 + mark); no reveal on forms, prices, hours; `check-parallax.mjs` passes desktop + mobile; reduced motion shows final state.
12. First-screen saturated share ≤5% (cap 15%); largest theme.json size 6rem (≥4.25rem); fonts via theme.json fontFace (Instrument Serif, Karla, Noto Serif TC/JP subsets); editor matches front end.
13. Radius 0 everywhere except pills; no shadows; exactly one top menu; em dash under every kicker.
14. auto-gates `1 1` pass for en; `pattern_source.py` passes.
