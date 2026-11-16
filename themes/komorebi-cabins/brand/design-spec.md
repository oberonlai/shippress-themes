# Komorebi Cabins — design spec (stage 1, design director)

Type: **hospitality** (WooCommerce-compatible but not required; the site works fully without it). Industry: a self-catering forest cabin village that rents **twelve whole cabins** under cedar and beech; guests take the whole cabin, cook for themselves, and hold a weekend through one request form.
Primary reference: **https://kajimanomori.co.jp/** (S5-Style hotel category; forest hotel; dark film-like documentary photography on a greige ground). Secondary: none. Tokens: `brand/reference-tokens.md`, cited as **T(a)…T(g)**. Screens: `ref/kaj-first.png` (1440×900 first screen), `ref/scroll-kaj-full.png` (full page).
**Imagery: photo** (stage-a IMAGERY = photo). One real-photography STYLE string: **dark, soft natural light, film grain, documentary** (row `photo_direction: film-grain`; T(e)). 0 cut-outs.
Font direction: **serif** (row `font_direction`). Latin display **Lora**, Latin body / UI **Work Sans** (row fonts). zh-TW / ja headings **Noto Serif TC / Noto Serif JP** (Mincho). Details §6.
Similarity target: about **80%** to the reference in palette, image treatment, motion, decoration and layout rhythm. Photographs, copy and the logo mark are ours; no asset, text or logo of the reference is reused.
Header: exactly one top menu (`core/navigation`), **split** header (row `nav: split`). Row page structure: **plan-comparison** — the four cabin sizes are compared side by side (home §4 and the Cabins page). Row hero `photo-left-text-right` = the reference's flush-left photo with the text in the right gutter.
Class prefix: `kc-`. Pattern slugs `komorebi-cabins/<name>`.

---

## 1. Signature techniques (3, obvious at a glance; none may be softened)

Stage-a candidates T1–T3 are all used: **S1 = T1 (Gutter tagline)**, **S2 = T2 (Mosaic over canopy)**, **S3 = T3 (Split header)**. One supporting device (the "Facilities" row with an edge-peek photo and a stepping portrait strip, `ref/scroll-kaj-full.png` y≈2700–3950) carries the Inside block.

### S1 (T1): Gutter tagline — photo flush left at 86%, vertical serif tagline, season chip and scroll label in the right gutter
- **Source**: kajimanomori.co.jp first screen (`ref/kaj-first.png`, T(c), T(e), T(f)). On a greige `#E6E3E0` ground, a dark forest photograph runs from **x0 to x1232 (86.46% of 1440)**, from **y148 to y860** (712px tall, ratio ≈1.73), radius 0, no overlay. The 208px right gutter holds, top to bottom: a two-cell season chip (x1288–1368, y148–193, greige-dark cell box, active cell white), a **two-column vertical serif tagline** (x1298–1365, y295–510, ~22px, ink), a vertical "Scroll" label (~12px, x1328, y630) and a single dot (y746). A dark translucent notice chip with an info icon sits on the photo at x38 y195.
- **Ours (home §1, the first screen)**: identical geometry. Photo **P01** (host stacking firewood on a cabin porch, family unloading a car on gravel) `width: 86.46%; margin-left: 0; aspect-ratio: 1230/710`, top at 148px (header 116px + 32px gap, T(c) hero margin-top 4.4rem ≈ 70px at the reference's root scaling; we use 32px after a 116px header so the photo ends ≈y860 as in the screenshot). Right gutter (13.54%): chip "Summer | Autumn" (two cells 40×40, Work Sans 400 .8125rem; active "Summer" white `#FFFFFF`, box `#D8D3CE`, inactive cell is a link to `/the-forest/#autumn`), vertical H1 **"Twelve cabins, / one forest."** (Lora 400 1.5rem, ls .18em, `writing-mode: vertical-rl`, two columns 28px apart, ink `#343434`) starting y295, then vertical "Scroll" (Work Sans 300 .75rem ls .2em) at y630 and one 6px dot `#8E8A85` at y746. Notice chip on P01 at left 38px / top 47px of the photo: info icon (16px circle-i, 1px white) + **"Weekend dates open for spring · Fri–Sun"**, Work Sans 400 .875rem ls .06em, white, background `rgba(34,47,37,.55)`, padding 8px 14px, radius 0.
- **Never soften**: the photo must touch the left viewport edge and stop at ≈86% (not 80, not 100); greige must be visible above it and as the full right gutter; no container, no overlay or tint on the photo; the tagline is vertical at ≥1024px and lives only in the gutter (never over the photo); the chip and scroll label must be present. Nothing centred in the first screen.
- **Contrast**: dark green documentary photo against a pale greige ground with dark ink type — exactly the reference contrast (do not lighten the photo to high-key; lesson Tsumugi).
- **Differs from Yoake S1** (photo flush left 90% under a coloured diagonal field with the vertical lead crossing the photo): here there is **no coloured field**, the photo is full-height from just under the header, and every text element stays in the gutter on greige.

### S2 (T2): Mosaic over canopy — overlapping mixed-size photos over one full-bleed blurred green photograph with a small vertical text column
- **Source**: reference block after the intro (`ref/scroll-kaj-full.png` y≈1370–2700 at 1440 width; T(e)). One full-bleed photo of leaves, blurred (~`blur(6px)`), fills a 1440×≈1330 band. Over it, **overlapping rectangles in mixed sizes**: a 1:1 macro (≈760×600) touching the **left edge**, a 3:4 interior (≈560×600) flush to the **right edge** whose top is ≈90px above the first's, and a small 4:3 (≈340×270) overlapping the lower right corner of the first and offset down. A **small vertical text column** (two lines, ~16px, white) sits in the blurred area below-left of centre.
- **Ours (home §3 "Four sizes of cabin")**: full-bleed band 1440×1320 (`min-height: 92vw` capped 1320px), background **P02** (beech canopy, blurred at generation is not enough: apply `filter: blur(6px); transform: scale(1.06)` to the img inside the parallax layer). Four photos, absolutely placed inside a 1440 reference frame (use percentages):
  - **P03 Fern** (1:1.2, 52.8% wide = 760px), left 0, top 120px.
  - **P04 Beech** (3:4, 38.9% = 560px), flush right (right 0), top 30px.
  - **P05 Cedar** (4:3, 23.6% = 340px), left 41.7% (600px), top 760px — overlaps P03's lower-right corner by ≈160×120px.
  - **P06 Hollow** (4:3, 27.8% = 400px), right 6.9% (100px), top 700px.
  Each photo carries a caption **under it on the blur** (white, Work Sans 400 .8125rem ls .1em): "Fern · sleeps 2", "Beech · sleeps 4", "Cedar · sleeps 6", "Hollow · sleeps 8". Vertical text column at left 13.9% (200px), top 960px: **"Four sizes, / one way of staying."** Lora 400 1.25rem, white, `writing-mode: vertical-rl`, 2 columns 24px apart. Below it (top 1180px, left 200px) a text link "Compare the cabins →" (Work Sans 400 .9375rem, white, 1px underline offset 6px).
- **Never soften**: the photos must **overlap** (P05 over P03 by ≥120px each way); two photos touch the viewport edges (P03 left, P04 right); sizes are visibly mixed (largest ≥2× the smallest); the background is a **visibly blurred green** photo, not a flat colour; radius 0, no shadow, no white frames.
- **Differs from** Kanade's tinted mosaic (grid + chips) and Utsushi's masonry case wall (grid, no overlap): this is free overlap on a blurred photograph.

### S3 (T3): Split header — terracotta reserve button + white boxed Menu with three dots, thin vertical divider
- **Source**: `ref/kaj-first.png` header (T(c), T(d)). 116px tall on greige. Logo at x44 y58. Nav (≈15px serif, ls .1em, ink) x322–877, active item with a 20px underline below. **1px vertical divider** at x912 (y38–78). Then a terracotta `#8B5A44` button 166×50 at x1061 ("reserve" + small chevron, white), and a **white box 143×50** at x1237 with "Menu" left and **three dots** right. Square corners.
- **Ours (header part, every page)**: 116px desktop (64px mobile), greige `#E6E3E0`, not sticky. Left x44: our mark (§1 decoration) + wordmark "Komorebi Cabins" (Lora 400 1.125rem ls .06em). `core/navigation` (the only menu) centred-left from x322: **Cabins · Inside · The Forest · Getting here · About** (Lora 400 .9375rem ls .1em, ink; current item 20px×1px underline 8px below, `#343434`). 1px divider `#BDB7B1` 40px tall after the nav. **Reserve button** 166×50, `#8B5A44`, white Work Sans 500 .9375rem ls .1em "Hold a weekend" + 10px chevron, radius 0 → `/reserve/`. **White box** 143×50 `#FFFFFF`, "Menu" (Lora .875rem) left + three 3px dots right, radius 0: a plain link to `#site-index` (the footer page index) — it is not a second menu.
- **Never soften**: the two boxes sit side by side 10px apart at the right; terracotta and white must both be solid fills; the divider is present ≥1024px; square corners.
- **Mobile (<1024)**: wordmark left; Reserve button 120×44 ("Reserve"); navigation collapses into the core overlay button styled as the white Menu box (44×44, three dots). The separate "Menu" link is hidden <1024 so there is still one menu control.

### Supporting: Inside row (reference "Facilities" block)
- **Source**: `ref/scroll-kaj-full.png` y≈2700–3950: a large interior photo ≈1060×640 at x195 with a second photo **peeking from the right viewport edge** (≈300px visible, same top, taller), a tiny vertical pager "01 02 03" at the left edge of the large photo; below on greige, Latin title "Facilities" (≈36px serif) + bracket label "[ local word ]" and a paragraph at x540; a right "details ▾" link with a 1px underline; then a **strip of three small 3:4 portraits** (≈165×290) at x750 / x955 / x1160 stepping down (0 / 0 / 0 tops but the strip starts 140px below the text).
- **Ours (home §5 "Inside")**: P07 (cabin living room with wood stove) 1060×640 at left 13.5%; **P08** peeks flush right (x1300–1440, 760 tall, top equal to P07's top); pager "01 / 02 / 03" vertical Work Sans .6875rem at x150 (decorative, not interactive). Title **"Inside"** Lora 400 2.75rem + bracket label "[ the same in every cabin ]" Work Sans 300 .8125rem ls .12em; paragraph at x540 w520; right link "What every cabin has ▾" → `/inside/`. Three portraits **P09 P10 P11** 165×290 (3:4 ≈ .57) at x750 / x955 / x1160, starting 140px below the paragraph.
- **Never soften**: the edge peek (P08 cut by the viewport, ≈140–300px visible), the bracket label, the three small portraits in a row at the right (not centred, not large).

### Continuation on inner pages (≥4 required; here 9)
Every inner page head = **S1 page head**: greige; head photo flush left **86.46%**, ratio 2.4 (max-height 600px), `sp-parallax` 6%; right gutter with a **vertical H1 kicker** (Lora 1.25rem, vertical-rl, ≥1024) and the season chip only on The Forest. The horizontal H1 (Lora 4.25rem) sits below the photo at x44.
| Page | S1 page head (photo flush left 86%, gutter) | S2 mosaic over blur | S3 split header | Inside row (edge peek + strip) |
|---|---|---|---|---|
| Cabins (plan comparison) | ✔ P18 | ✔ 4 cabins (P03–P06 over P02) | ✔ | — |
| Inside | ✔ P16 | — | ✔ | ✔ P07 + P08 peek + P09 P10 P11 strip |
| The Forest | ✔ P17 + Summer/Autumn chip | ✔ 3 photos (P13 P11 P18) over P02 | ✔ | — |
| Reserve | ✔ P12 | — | ✔ | — |
| About | ✔ P13 | ✔ 3 photos (P14 P10 P16) over P02 | ✔ | ✔ P15 + P17 peek |
| People | ✔ P14 | — | ✔ | strip of 3 portraits (P09 P15 P10) |
| Getting here | ✔ P11 | — | ✔ | — |
| Contact / Newsletter | gutter tagline only (no photo; greige 360px head with vertical kicker) | — | ✔ | — |
| Journal & posts | ✔ featured image flush left 86% | — | ✔ | — |

---

## Key visual concept

### (1) Reference first screen: concept, story, signature motion
- **What it draws**: a two-storey modernist hotel half hidden behind huge trunks and summer foliage, photographed in soft, dark daylight; the building is the smaller subject, the forest the larger. The photo sits flush left on greige; the right gutter holds a vertical two-line tagline ("a forest residence melting into nature"), a Summer/Autumn chip, a "Scroll" label and a dot. A small dark notice chip sits on the photo's upper left; the split header with a terracotta reserve button is above.
- **Story**: the building dissolves into the woods; you come to live inside the forest for a while.
- **Signature motion**: tagline lines fade in per character / line as they enter (`js-scroll-fade-text`, ≈0.8s ease); the season chip swaps the hero photo; transitions `all .5s ease` (T(g)).

### (2) Our scene (same composition, same motion idea, same image type: dark film-grain documentary photograph)
**Friday, three o'clock, under the beeches.** A timber cabin with a deep porch stands half hidden between two large cedar trunks and low beech branches (the cabin is the smaller subject, as in the reference). On the porch the host, sleeves rolled, stacks split firewood against the wall; on the gravel in front a family (two adults, a child) unloads bags and a cool box from the open hatch of an estate car. Soft, dark afternoon light, film grain, green and timber tones. The story is the business in one frame: **the cabin is ready, the wood is stacked, the weekend begins** — you take the whole cabin and the forest around it. The vertical tagline "Twelve cabins, / one forest." says the reference's "melting into nature" in our terms. Motion: the tagline lines fade in (CSS load fade, not a reveal), the chip swaps season by linking to the autumn view, and the photo drifts with parallax.

### (3) KV checklist (all six built in the home first screen and visible at 1440×900)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Dark forest hotel photo flush left, 86% wide, y148–860 | **P01** cabin porch among cedar and beech, host stacking firewood, family unloading a car on gravel | x0–1232, y148–860, ratio 1230/710 | `sp-parallax` `--sp-par: 8%` (mobile 5%); no reveal | P01 |
| 2 | Vertical two-line serif tagline in the right gutter | H1 "Twelve cabins, / one forest." Lora 1.5rem, vertical-rl, 2 columns 28px apart, ink | x1298–1365, from y295 | CSS load fade per line, 0.8s ease, line 2 delayed .25s (`kc-hero__line`) | — |
| 3 | Summer / Autumn two-cell season chip | "Summer | Autumn" chip, active white cell; "Autumn" links to `/the-forest/#autumn` | x1288–1368, y148–193 | colour transition .5s ease on hover | (Autumn view uses P17 on The Forest) |
| 4 | Dark translucent notice chip with info icon on the photo | "Weekend dates open for spring · Fri–Sun" chip, `rgba(34,47,37,.55)` | on P01, left 38 / top 47 | none | P01 |
| 5 | Split header: nav, divider, terracotta reserve button, white Menu box with dots | S3 header: nav, 1px divider, `#8B5A44` "Hold a weekend", white "Menu ···" | y0–116; buttons x1061 / x1237 | `.5s ease` background on hover | — |
| 6 | Vertical "Scroll" label + dot | vertical "Scroll" Work Sans .75rem + 6px dot | gutter x1328, y630 / y746 | dot opacity pulse 2s ease infinite (CSS, off under reduced motion) | — |

---

## 3. Home page: block order

Container: none for S1 / S2 / Inside / band (edge-flush); text blocks use content width 1080px (`contentSize`), wide 1296px. Section padding desktop **200px top / 200px bottom** (T(c) 12.5rem), mobile 80 / 96. Copy target ≈ **620 English words**, ≥3 narrative paragraphs ≥20 words (§2, §5, §6, §8).

| # | Block (pattern) | Purpose | Layout | Photo(s) | Copy |
|---|---|---|---|---|---|
| 0 | `header` (S3) | one top menu | §1 S3 | — | labels |
| 1 | `hero-gutter` (S1, KV) | key visual | §Key visual; nothing else | P01 | H1 2 lines + chip + scroll |
| 2 | `intro` | what the village is | greige; padding 200/160; at x262 a Lora 400 1.75rem heading **"Whole cabins, quiet woods, your own kitchen."** (2 lines, ls .06em); below, two columns: left w520 at x262 two paragraphs Work Sans 300 lh 2.0; right w300 at x1020 one small italic Lora .9375rem paragraph (the reference's Latin side text) + a 3:4 photo **P12** 300×400 under it | P12 | 2 ¶ ≈ 140 words + 40 |
| 3 | `cabin-mosaic` (S2) | the four sizes | §1 S2; P02 blurred bg with parallax | P02 P03 P04 P05 P06 | 4 captions + 2 vertical lines + link |
| 4 | `compare` (plan comparison) | how the sizes compare + price | greige; head: Lora 2.75rem **"Compare"** + bracket label "[ four sizes, twelve cabins ]"; 1 short ¶; **comparison table** full content width 1080: columns Fern / Beech / Cedar / Hollow; rows: Sleeps · Size · Bedrooms · Bathroom · Stove · Cabins in the village · Per night (Fri–Sun, 2-night minimum). Under it a **ruled extras list** (3 rows: firewood basket, dog, late check-out, price right) and the note "Prices include linen, towels, first basket of firewood and cleaning." | — | table + 3 rows + 1 ¶ ≈ 50 words |
| 5 | `inside` (Inside row) | what each cabin has | §1 Supporting | P07 P08 P09 P10 P11 | ¶ ≈ 90 words + link |
| 6 | `weekend` | the single way to hold a weekend (flow) | `#D8D3CE` ground; at x262 w460: Lora 1.75rem **"One way to hold a weekend."** + 1 ¶ + **4-step ruled sentence list** (numerals 01–04 Lora 1.25rem `#3B7960`, 1px `#BDB7B1` rules); button "Hold a weekend" (terracotta, radius 0) → `/reserve/`. Right: **P13** 560×700 (0.8) flush right, top +90px | P13 | ¶ ≈ 70 words + 4 steps |
| 7 | `woodland-band` | pause + reserve line | full-bleed Cover **P14** 1440×800 (1.8), overlay `rgba(34,47,37,.25)`; centred bracket line in white **"[ Fri 15:00 — Sun 11:00 ]"** Work Sans 300 1rem ls .2em + one Lora 1.75rem line "The wood is stacked before you arrive." | P14 | 2 lines |
| 8 | `hosts` | people | greige; **P15** portrait 432×576 (3:4) at x144; at x720 w576: Lora 1.75rem "Who looks after the cabins" + 1 ¶ (≈60 words) + ruled list of **7 names** (name Lora 1.125rem left, role Work Sans 300 .875rem right; 1px `#BDB7B1` rules) | P15 | ¶ + 7 rows |
| 9 | `getting-here` | where and when | two columns content width: left address + by car + by train/bus; right hours definition list (office, check-in, check-out, quiet hours); above them a 2.8:1 photo **P16** (gravel lane into the trees) full content width 1080 | P16 | ≈60 words + lists |
| 10 | `journal-rows` | latest stories | greige; Lora 2.75rem "Journal" + bracket label; Query Loop 3 posts as ruled rows: date Work Sans .8125rem · title Lora 1.375rem · 120×90 thumbnail at right | (post thumbnails) | titles |
| 11 | `woodshed-letter` | newsletter | `#222F25` dark panel content width, padding 64px, text `#E6E3E0`: Lora 1.75rem "The Woodshed Letter" + 1 line + newsletter slot (§11) | — | 2 lines |
| 12 | `footer` | close | `#222F25` ground, text `#E6E3E0`; mark (light), address, hours, email; `#site-index` list of all pages; © line | — | — |

**Home photo positions: 16** (P01–P16; P17 and P18 are inner-page only), all unique on the page (≥8 ✔).

### First-screen composition (1440×900)
- y0–116: header on greige (logo x44, nav x322–877, divider x912, Reserve x1061–1227, Menu x1237–1380).
- y148–860: P01 x0–1232. Notice chip on it at x38 y195.
- Gutter x1232–1440: chip y148–193, vertical H1 y295–≈510, "Scroll" y630, dot y746.
- y860–900: greige.
- Nothing else: no form, no table, no second heading, no centred text.
- Saturated share (HSV s>0.55): terracotta button ≈1% + photo ≈2–5% → **target ≤10%**, gate cap 15%, row cap 30%.

### Comparison with recent themes' home orders (must not match)
| Theme | Home order | Why Komorebi differs |
|---|---|---|
| Futari Journeys | hero frame / pair / three question blocks / band-map / how / planners / book / letter | no framed hero, no question blocks, no map band; KV is an edge-flush photo with a gutter; core block is an overlapping mosaic over a blurred photo |
| Shiosai Resort (hospitality) | hero+flagbar / welcome / sticky rooms / week / packages-wide / prices / beach / families / check-dates / letter / journal | no flag bar, no sticky room list, no week grid, no packages; cabins appear as a free-overlap mosaic then a 4-column comparison table; no check-dates band |
| Yoake Patisserie | hero-split / wash / hour-ledger / film-still / wash-cakes / counter-prices / wash-tea / people / visit-band / journal / newsletter | no coloured wash field, no ruled 3-up ledger with numerals, no alternating wash bands; one blurred-canopy mosaic and one Inside row with edge peek + portrait strip |
| Utsushi Films | header / kv / intro / case-wall / beside / shaped / band / rates / crew / letters / footer | no masonry wall, no overlapping text panel, no centred 3 columns; comparison is a plan table, not a rates index |

---

## 4. Inner pages (11 pages + Journal + 3 posts)

All inner pages: S3 header; S1 page head (§1 continuation); content; footer as home. Head photo `sp-parallax` `--sp-par: 6%` (mobile 4%).

| Page (slug) | Head photo | Content points |
|---|---|---|
| **Cabins** (`cabins`) | **P18** | Plan-comparison page: intro ¶ (≈80 words); S2 mosaic (P03–P06 over P02); **full comparison table** (all rows of home §4 + Kitchen, Outdoor, Accessible, Dogs); one section per cabin size (4 × ruled text block: name Lora 2rem, sleeps, size, "how it is laid out" ¶ ≈50 words, price/night); extras list; booking rules (2-night minimum, Fri–Sun or midweek Mon–Thu, check-in 15:00, check-out 11:00) |
| **Inside** (`inside`) | **P16** | Inside row (P07 + P08 peek + P09 P10 P11); "In every cabin" ruled list (12 items: wood stove, induction hob + oven, fridge, kettle and press, crockery for the sleeps count, linen and towels, rain shower, porch with two chairs, firewood basket, torch, first-aid box, no TV); "What to bring" list (food, boots, a torch spare); house rules |
| **The Forest** (`the-forest`) | **P17** (autumn beeches) + Summer/Autumn chip | 3 walks (Short loop 2.4 km 45 min · Beech ridge 5.8 km 2 h · River path 8.1 km 3 h) as ruled rows; anchor `#autumn` section with S2 mosaic (P13 P11 P18 over P02); seasons ¶ ×2 |
| **Reserve** (`reserve`) | **P12** | the single way to hold a weekend: 4-step flow (ruled sentences); rules (deposit 30%, 48 h hold, free cancellation until 14 days before, then deposit kept); **booking form slot** (§11, kind contact, anchor `#hold`) |
| **About** (`about`) | **P13** | founding 2014 (3 ¶); S2 mosaic (P14 P10 P16 over P02); Inside-type row with P15 + P17 peek; 3 milestones as ruled rows (2014 first four cabins · 2017 eight more cabins · 2022 the woodshed office) |
| **People** (`people`) | **P14** | intro ¶; strip of 3 portraits (P09 P15 P10); 7 people as ruled rows with a 2-line note each (not a portrait grid) |
| **Getting here** (`getting-here`) | **P11** | address; by car (gravel lane, 400 m, parking by each cabin); by train to Hollin Vale station then bus 32 "Larch Gate" (10 min walk) or arranged pickup; arrival hours; what to do after 19:00 (key box code by email) |
| **Contact** (`contact`) | none (greige head 360px + vertical kicker) | email, phone hours, reply within one working day; **contact form slot** (§11) |
| **The Woodshed Letter** (`newsletter`) | none (greige head) | monthly, first Thursday; 3 example items (open dates, the season in the woods, one recipe for the stove); **newsletter slot** (§11) on dark |
| **Journal** (`journal`, role posts, empty content) | — | archive template: S1 head without photo; ruled rows with 3:2 thumbnails |
| **Privacy** (`privacy`) | none | plain text, no motion |

Posts (3, category "From the woods", tags "cabins", "seasons", "hosts"): "Stacking wood for October" (featured P09), "Why Friday check-in starts at three" (P13), "The beech that fell in March" (P17).

---

## 5. Colour

**Reference relationship (T(a))**: greige ground ~55%, dark muted forest photographs ~40%, ink text, deep green as the dark ground, one terracotta button ~2%, white Menu box. We keep the reference hexes exactly; the row hue (local word) `#3B7960` enters only as small accents.

| Token (theme.json slug) | Hex | Role | Share (home) | Source |
|---|---|---|---|---|
| `greige` | `#E6E3E0` | page ground, header | ~50% | **T(a) exact** |
| `greige-deep` | `#D8D3CE` | chip box, weekend section, rules band | ~6% | **T(a) exact** |
| `rule` | `#BDB7B1` | hairlines, divider | <1% | greige-deep −10% L |
| `ink` | `#343434` | all text | type | **T(a) exact** |
| `forest` | `#222F25` | footer, newsletter panel, notice chip base | ~8% | **T(a) exact** |
| `terracotta` | `#8B5A44` | Reserve button, primary buttons | ~2% | **T(a) exact** |
| `tokusa` | `#3B7960` | step numerals, link hover, focus ring | <2% | row hex (local word) |
| `white` | `#FFFFFF` | Menu box, active chip cell, inputs | <2% | T(a) |
| `muted` | `#6E6A66` | captions, meta, dot | <1% | ink +25% L |
| `error` | `#9E3B2A` | form errors | — | terracotta −5% L, redder |
| `success` | `#2F5E4A` | form success (bg `#DDE7E1`) | — | tokusa −5% L |
Contrast: ink on greige 10.6:1; white on terracotta 5.6:1; greige on forest 11.1:1; tokusa on greige 4.6:1 (large / UI only). **First-screen saturated share target ≤10%, gate cap 15%, row cap 30%.** No beige / cream substitution: the ground is the reference's cool greige. Recent main colours (Yoake blush, Shiosai sea blue, Futari, Utsushi charcoal) avoided.

---

## 6. Typography (serif direction)

Loaded only through **theme.json `fontFamilies` + `fontFace`** (woff2 in `assets/fonts/`, OFL licence files, all listed in theme-meta.json `fonts[].files`, family names in readme.txt) so the editor iframe and the front end use the same faces.
| Family (slug) | Files | Stack |
|---|---|---|
| `display` Lora (variable 400–700, + italic 400) | `lora-variable.woff2`, `lora-italic-variable.woff2` | `Lora, "Iowan Old Style", Georgia, serif` |
| `body` Work Sans (variable 300–600) | `work-sans-variable.woff2` | `"Work Sans", "Helvetica Neue", Arial, sans-serif` |
| `display-zh` Noto Serif TC (subset, 500) | `noto-serif-tc-500-subset.woff2` | zh-TW headings: `Lora, "Noto Serif TC", "Songti TC", "PMingLiU", serif` |
| `display-ja` Noto Serif JP (subset, 500) | `noto-serif-jp-500-subset.woff2` | ja headings: `Lora, "Noto Serif JP", "Hiragino Mincho ProN", "Yu Mincho", serif` |
CJK body (system only; must not contain the bundled zh/ja families): zh-TW `"Work Sans", "PingFang TC", "Microsoft JhengHei", sans-serif`; ja `"Work Sans", "Hiragino Sans", "Yu Gothic", sans-serif`. Subsets via the Hokuto / Hada replacement method (the shared zh subset script is broken), covering every heading glyph in demo-content.zh-TW.json / ja.json and the i18n dictionaries. Copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and require it (style.css uses `:lang()`). `check-editor-fonts.mjs` must pass in en and zh-TW.

Sizes (theme.json `fontSizes`; T(b): light weights, wide tracking, body lh ≈2.0):
| Slug | Size | Use |
|---|---|---|
| `x-small` | .75rem | scroll label, legal |
| `small` | .8125rem | captions, bracket labels, meta |
| `medium` | 1rem | body |
| `large` | 1.25rem | names, step numerals, mosaic vertical text |
| `x-large` | 1.75rem | section statements, intro heading |
| `xx-large` | 2.75rem | Latin section titles ("Compare", "Inside", "Journal"); mobile H1 |
| `display` | **4.25rem** | inner-page H1 |
- **Hero H1 (vertical)**: Lora 400 1.5rem, ls .18em, lh 1.9 (T(b) vertical tagline ≈22px).
- **Section title** (T(f) "Facilities"): Lora 400 2.75rem, lh 1.1, ls .01em + bracket label Work Sans 300 .8125rem ls .12em `#6E6A66`, "[ … ]" with 8px inside spacing.
- **Body**: Work Sans 300, 1rem, **lh 2.0**, ls .03em, ink (T(b) lh ≈2.0, light weight). Paragraph gap 1.5em.
- **Nav**: Lora 400 .9375rem ls .1em (T(b) wide tracking).
- **Buttons**: Work Sans 500 .9375rem ls .1em.
- **Inner H1**: Lora 400 4.25rem, lh 1.05, ls −.01em.
- **zh-TW / ja**: headings ×0.75, body lh **1.85**, nav ls .12em; the hero tagline uses `text-orientation: upright` in zh-TW / ja and `mixed` in en / fr / de; each line ≤20 characters in every locale (rewrite, don't translate literally). de / fr: `hyphens: auto`.

---

## 7. Motion and scroll (sp-scroll)

Copy `pipeline/assets/sp-scroll/` unchanged to `assets/`; enqueue css + js in head (js not deferred); `add_editor_style`. `:root { --sp-dur: .8s; --sp-ease: ease; --sp-dist: 24px; }` (T(g): `.8s ease`, `.5s ease`).

### 7.1 Chosen effects (3 + parallax)
| Effect | sp-* | Where | Reference trigger / time / easing | Ours |
|---|---|---|---|---|
| Line fade | `sp-stagger` on the text group + `sp-reveal sp-reveal--up` on each heading / paragraph | home §2 intro (heading, ¶1, ¶2, side ¶), §6 weekend text column, §8 hosts text; inner: section intros, The Forest walks | kajimanomori `js-scroll-fade-text`: viewport entry, per-line fade ≈0.8s ease (T(g)) | .8s ease, 24px, .12s steps |
| Mosaic arrival | `sp-reveal sp-reveal--zoom` on each of P03–P06 (and inner mosaics) | home §3, Cabins, The Forest, About | reference mosaic photos appear over the blurred bg on scroll ≈0.8s ease | zoom 1.06→1, default 1.6s |
| Parallax (required) | `sp-parallax` | §7.2 | hero / blur drift | §7.2 |
Not used: `sp-count`, `sp-marquee`, wipe / mask, left/right. **No reveal in the hero** (§1). **No reveal** on forms, the comparison table, extras list, hours or legal text. Reveals ≤60% of home blocks.
**Hero load fade (KV #2)**: CSS only, inside `@media (prefers-reduced-motion: no-preference)`: `html.sp-js:not(.sp-no-motion) .kc-hero__line { animation: kc-fade .8s ease both; } .kc-hero__line:nth-child(2) { animation-delay: .25s; } @keyframes kc-fade { from { opacity: 0 } to { opacity: 1 } }`. Not on P01 (LCP). Visible with no JS, `?sp-static`, reduced motion, in the editor. The scroll dot pulse (KV #6) uses the same media query.

### 7.2 Parallax (required)
| Where | Block | Moving layer | Foreground (static) | `--sp-par` desktop / mobile | Reference motion |
|---|---|---|---|---|---|
| **Hero** (primary) | Group `kc-hero__photo sp-parallax` (86.46% width, flush left) wrapping `figure > img` | **P01** | the notice chip is a sibling positioned over the frame, **outside** the moving layer; tagline is in the gutter | **8% / 5%** | the reference hero photo crossfades with the season toggle; here it drifts slower than the page |
| **Mosaic background** (home §3) | Group `kc-mosaic sp-parallax` with `.sp-parallax__layer` holding blurred **P02** | P02 (blur 6px) | the four photos, captions and vertical text (not in the layer) | **12% / 6%** | reference blurred green full-bleed under the overlapping photos (stage-a: "hero/blur photo drift") |
| **Woodland band** (home §7) | Cover `kc-band sp-parallax` | **P14** cover background | the bracket line and statement | **10% / 6%** | reference full-bleed floor photo near the page end |
| **Inner page heads** | Group `kc-head__photo sp-parallax` | each page's head photo | none | **6% / 4%** | as hero |
Mobile keeps parallax at the smaller speeds. Reduced motion, `?sp-static`, no JS and the editor: no movement. Acceptance: `check-parallax.mjs` desktop + mobile, displacement difference ≥6px, ≤1px under reduced motion; ≥3 reveals hidden before entering and final after; nothing transparent after scrolling to the bottom.

---

## 8. Responsive rules (hard)

- **390px first screen**: header in flow 64px (wordmark, Reserve 44px, white Menu box = nav overlay toggle). Then the notice chip **in flow** (not absolute) above the photo, left 16px; P01 at `width: calc(100% - 24px)` flush left (24px greige gutter kept on the right), ratio 4:3. Below: H1 **horizontal** "Twelve cabins, one forest." Lora 1.75rem, 2 lines, padding 24px; the season chip in flow below it. "Scroll" label and dot hidden. **No vertical writing, no absolutely positioned label, no overlap.** `scrollWidth == innerWidth`.
- 1024–1279: as desktop; tagline vertical.
- 782–1023: H1 horizontal below the photo; photo stays 86% flush left; chip in flow beside the H1.
- **S2 mosaic <1024**: band height auto; photos stacked in flow with overlap kept by negative margins: P03 80% flush left; P04 60% flush right, `margin-top: -48px`; P05 56% at left 20%, `margin-top: -32px`; P06 64% flush right; captions in flow; vertical text becomes horizontal Lora 1.125rem. No absolute positioning <782.
- **Inside row <1024**: P07 92% flush left; P08 peek hidden <782 (shown 782–1023 at 18% width); the 3 portraits become a 3-column row at 28vw each.
- **Comparison table ≥782px**: spans the **full content width** (`width: 100%`, `table-layout: fixed` for the 4 data columns; label column 22%); every cell `text-align: left` except the **price row: `white-space: nowrap; text-align: right`**; the extras list price column `white-space: nowrap; text-align: right; width: 1%`; not clipped at 800 and 1280; no `overflow: hidden` on the wrapper.
- **Any table <782px**: stacked — one block per cabin (Fern, Beech, Cedar, Hollow): name Lora 1.25rem with the price/night on the right of the first line (flex, nowrap), then each attribute as a `label: value` row, 1px `#BDB7B1` rule between cabins. No horizontal scrolling.
- Header buttons and all touch targets ≥44px. `html, body { overflow-x: clip }`; parallax layers clipped by their wrapper. CJK <1024: horizontal only.

---

## 9. Fixed facts (identical on every page and in all five locales; brand.md is the source)

- **Name**: Komorebi Cabins ("komorebi" = sunlight through leaves). **Founded** 2014 by Ilse Marten and Ruben Okafor on 38 hectares of mixed cedar and beech woodland. **Address**: Larch Gate, Gravel Lane, Hollin Vale (fictional). **Phone** +44 1632 960 418 (calls daily 08:30–19:00). **Email** stay@komorebi-cabins.example (every mailto).
- **Twelve cabins in four sizes (plan comparison)**:
  | Cabin | Sleeps | Size | Bedrooms | Bathroom | Stove | Number | Per night |
  |---|---|---|---|---|---|---|---|
  | Fern | 2 | 28 m² | 1 (double) | shower | wood stove | 4 | **€140** |
  | Beech | 4 | 46 m² | 2 | shower | wood stove | 4 | **€190** |
  | Cedar | 6 | 64 m² | 3 | bath + shower | wood stove | 3 | **€260** |
  | Hollow | 8 | 92 m² | 4 | 2 shower rooms | wood stove + fire pit | 1 | **€360** |
- **Price list (7 items)**: Fern €140 · Beech €190 · Cedar €260 · Hollow €360 per night · extra firewood basket €12 · dog in cabin €20 per stay (Fern and Beech only, max 1) · late check-out to 14:00 €30 (Sundays only). Included: linen, towels, first firewood basket, final cleaning. 2-night minimum.
- **Hours**: woodshed office daily 08:30–19:00 · check-in 15:00–19:00 (after 19:00 key box, code by email) · check-out 11:00 · quiet hours 22:00–07:00.
- **A day in the village (daily routine)**: 08:30 office opens · 10:00 firewood round to every porch · 11:00 check-out · 11:00–15:00 cabins turned and aired · 15:00 check-in · 19:00 office closes · 22:00 quiet hours.
- **Hold a weekend (the single way, 4 steps)**: 1 choose a cabin and dates (Fri–Sun, or two midweek nights) · 2 send the hold request (form on Reserve, or email) · 3 we hold the cabin **48 hours** and email a confirmation with a 30% deposit link · 4 arrive from 15:00; keys at the woodshed office. Free cancellation until 14 days before arrival; after that the deposit is kept.
- **People (7)**: Ilse Marten, co-founder, host · Ruben Okafor, co-founder, woodsman and repairs · Sofia Navarro, housekeeping lead · Amira Haddad, bookings and the office · Tobias Klein, carpentry · Nora Adeyemi, weekend host · Jonah Pereira, forest walks and trails.
- **Walks (3)**: Short loop 2.4 km / 45 min · Beech ridge 5.8 km / 2 h · River path 8.1 km / 3 h.
- **Milestones**: 2014 first four cabins · 2017 eight more cabins (twelve in total) · 2022 the woodshed office.
- **Stories (3 posts)**: "Stacking wood for October" · "Why Friday check-in starts at three" · "The beech that fell in March".
- **Getting here**: Hollin Vale station, bus 32 to "Larch Gate", then 10 minutes' walk; by car the last 400 m are gravel; parking beside each cabin.
- **The Woodshed Letter**: first Thursday of each month; open dates, the season in the woods, one stove recipe.
- **Audience**: couples, families and small groups wanting a whole cabin for a weekend; owners of rental cabin sites are the theme buyers. **Tone**: calm, plain, practical, warm; no awards, no "best", no guarantees.

---

## 10. Images (18 photographs, one STYLE; 16 on home)

**STYLE** (identical for every image):
`IMAGE_STYLE="dark documentary film photograph, soft natural forest light, visible fine film grain, muted greens and warm timber browns, low contrast with deep soft shadows, 35mm lens, natural colours slightly desaturated, quiet and unposed, modern international timber cabins in a mixed cedar and beech forest, diverse adults and families, natural skin tones, no text, no letters, no numbers, no logos, no brand names, no signage, no licence plates, no Japanese elements"`
Generate one at a time with `scripts/grok-image.sh out.webp "<subject>"`; Read every image; regenerate any with text, plates, logos, broken faces/hands or a bright high-key look. ≤300 KB, ≤2000px, webp. No cut-outs.
| # | File | Subject (prompt core) | Ratio / size | Used on (page · block) | Home |
|---|---|---|---|---|---|
| P01 | `hero-porch.webp` | **KV**: a dark timber cabin with a deep porch half hidden between two big cedar trunks and low beech branches; on the porch the host (man, 40s) stacks split firewood against the wall; on the gravel in front a family (two adults, a child) unloads bags and a cool box from an open estate car hatch; the cabin is the smaller subject, forest dominant | 1.73, 2000×1156 | Home §1 | ✔ |
| P02 | `canopy-blur.webp` | looking up into a dense beech canopy, layered green leaves, light through gaps, soft focus | 1.1, 2000×1820 | Home §3 bg · Cabins / Forest / About mosaic bg | ✔ |
| P03 | `cabin-fern.webp` | small one-room cabin interior: a double bed under a sloped timber ceiling, window to ferns | 1:1.2, 1400×1680 | Home §3 · Cabins mosaic | ✔ |
| P04 | `cabin-beech.webp` | a four-person cabin: timber living space with a table for four and a stair, tall window to beeches | 3:4, 1350×1800 | Home §3 · Cabins mosaic | ✔ |
| P05 | `cabin-cedar.webp` | exterior of a larger cabin among cedars, porch with chairs, late afternoon | 4:3, 1600×1200 | Home §3 · Cabins mosaic | ✔ |
| P06 | `cabin-hollow.webp` | the largest cabin from the clearing, fire pit with stone ring in front, dusk | 4:3, 1600×1200 | Home §3 · Cabins mosaic | ✔ |
| P07 | `inside-stove.webp` | cabin living room: black wood stove lit, timber walls, a sofa and a reading lamp, window to forest | 1.66, 2000×1206 | Home §5 · Inside row | ✔ |
| P08 | `inside-kitchen.webp` | tall view of a cabin kitchen corner: induction hob, open shelves of plain crockery, window | 0.55, 1100×2000 | Home §5 peek · Inside peek | ✔ |
| P09 | `wood-stack.webp` | portrait: hands stacking split logs on a porch, bark texture | 3:4, 1200×1600 | Home §5 strip · Inside strip · People strip · post 1 | ✔ |
| P10 | `bath-window.webp` | portrait: a deep bath by a window onto trees, towels folded on a stool | 3:4, 1200×1600 | Home §5 strip · Inside strip · People strip · About mosaic | ✔ |
| P11 | `porch-coffee.webp` | portrait: a guest on a porch chair with a mug in the morning mist | 3:4, 1200×1600 | Home §5 strip · Inside strip · Forest mosaic · Getting here head | ✔ |
| P12 | `keys-office.webp` | the woodshed office: a host (woman, 30s, West African) handing a key on a wooden tag to a guest (man, 50s, South Asian) across a timber counter | 3:4, 1200×1600 (head crops 2.4) | Home §2 · Reserve head | ✔ |
| P13 | `arrival-path.webp` | a family walking with bags along a gravel path between beeches towards a lit cabin | 0.8, 1400×1750 | Home §6 · About head · Forest mosaic · post 2 | ✔ |
| P14 | `forest-floor.webp` | wide: forest floor of beech leaves and moss with low sun through trunks, a timber boardwalk | 1.8, 2000×1111 | Home §7 band · People head · About mosaic | ✔ |
| P15 | `host-portrait.webp` | portrait: the host (woman, 50s, Dutch) in a wool jacket on a porch step, axe resting against the wall | 3:4, 1200×1600 | Home §8 · People strip · About row | ✔ |
| P16 | `gravel-lane.webp` | a gravel lane entering the forest, a small timber gate, no sign | 2.8, 2000×714 | Home §9 · Inside head · About mosaic | ✔ |
| P17 | `autumn-beech.webp` | autumn: beech wood in copper leaves, a cabin roof visible between trunks | 2.4, 2000×834 | The Forest head (#autumn) · About row peek · post 3 | |
| P18 | `cabins-clearing.webp` | wide: three cabins spaced among cedars in a clearing, smoke from one chimney | 2.4, 2000×834 | Cabins head · Forest mosaic | |
**Final head photos**: Cabins P18 · Inside P16 · The Forest P17 · Reserve P12 · About P13 · People P14 · Getting here P11.
Per-page check (no repeats on one page): **Home** P01–P16 · **Cabins** P18 P02 P03 P04 P05 P06 · **Inside** P16 P07 P08 P09 P10 P11 · **The Forest** P17 P02 P13 P11 P18 · **Reserve** P12 · **About** P13 P02 P14 P10 P16 P15 P17 · **People** P14 P09 P15 P10 · **Getting here** P11 · posts: 1 P09, 2 P13, 3 P17.

---

## 11. Forms (form contract v1: `steps/form-contract-v1` exists)

Copy `pipeline/assets/forms/shippress-forms.php` unchanged to `inc/`, the CSS and editor JS unchanged to `assets/`; `require` it in functions.php. Patterns stay literal block markup with a small PHP island for `shippress_form_slot`. **No form in the home first screen; no `sp-reveal` on any form or its wrapper.**
- **Reserve (`reserve`, booking; anchor `#hold`)**: section "Send a hold request" on `#D8D3CE`: text left (x262, w420: 48 h hold, 30% deposit, 14-day cancellation), form right (w560): `shippress_form_slot( kind: contact )`. Fallback = buffered literal mailto button **"Email us to hold a weekend"** (`wp-element-button`, terracotta, href `mailto:stay@komorebi-cabins.example?subject=<forms_hold_subject>`) + "Opens your email app. Tell us the cabin, your dates, how many of you and a phone number." Recommended CF7 fields (readme, not created by the theme): name*, email*, phone*, cabin* (select Fern / Beech / Cedar / Hollow), arrival date*, nights* (select 2–7), guests* (number 1–8), dog (checkbox, Fern/Beech), message (textarea), consent*, submit "Send hold request".
- **Contact (`contact`)**: slot kind contact; fallback mailto **"Email us"** (subject `forms_contact_subject`). Fields: name*, email*, subject (select: Holding a weekend / Groups / Getting here / Other), message*, consent*. The fallback never links to `/contact/`.
- **The Woodshed Letter (`newsletter`)**: standalone page; panel on **forest** `#222F25` (dark test case), padding 64px, radius 0, text `#E6E3E0`: `shippress_form_slot( kind: newsletter, email: stay@komorebi-cabins.example, label: forms_email, submit: forms_subscribe, notice: forms_mail_notice, subject: forms_mail_subject )`.
- **Home §11**: the same newsletter slot on the forest panel (dark). **Footer**: link to the page only (no second slot). The light-ground case is the Reserve / Contact forms on greige.
- Plugin order (shared helper): newsletter MailPoet (explicit id) → MC4WP; CF7 / WPForms only via an explicit dedicated id. Contact kinds CF7 → WPForms. Without plugins the newsletter shows a required `type=email` field + submit, native mailto POST, notice visible.
- **Tokens** (style.css, mapped to theme.json presets):
  - light: `--sp-form-accent: var(--wp--preset--color--terracotta)` #8B5A44; `--sp-form-on-accent: var(--wp--preset--color--white)`; `--sp-form-radius: 0` (T(d)); `--sp-form-focus: var(--wp--preset--color--tokusa)` #3B7960 (2px outline, offset 2px); `--sp-form-surface: #FFFFFF`; `--sp-form-text: #343434`; inputs 48px, 1px border `#BDB7B1`, Work Sans 300 1rem, padding 12px 14px; labels Work Sans 400 .875rem ls .06em ink; submit 50px, Work Sans 500 .9375rem ls .1em, hover `#7A4E3B` (.5s ease, T(d)); error text + border `#9E3B2A`; success panel `#DDE7E1` text `#2F5E4A`; checkbox/radio `accent-color: #3B7960`.
  - dark (`.kc-dark`, forest ground): `--sp-form-surface: #2C3B30`; `--sp-form-text: #E6E3E0`; `--sp-form-accent: #E6E3E0`; `--sp-form-on-accent: #222F25`; `--sp-form-focus: #9CC5B2`; border `rgba(230,227,224,.35)`; error `#E7A08F`; success `#A9D1BE`; labels inherit.
  - States styled: input, textarea, select, checkbox/radio, label, submit, hover, focus-visible, disabled, error, success; scoped to CF7, WPForms, MailPoet, MC4WP (+ Jetpack, `.wp-block-form`) classes and `.sp-newsletter-fallback`; no global input selectors.
- **i18n semantic keys** (`inc/i18n/en.php`, extract with `L10N_SEMANTIC=1`, rewritten locally in en, zh-TW, ja, fr, de): `forms_email` "Email address", `forms_subscribe` "Send me the Woodshed Letter", `forms_mail_notice` "This opens your email app. Send the message to subscribe; you are not subscribed yet.", `forms_mail_subject` "Subscribe to The Woodshed Letter", `forms_contact_subject` "Hello from the website", `forms_hold_subject` "Hold request for a weekend", `contact_email` "Email us", `forms_hold_button` "Email us to hold a weekend", `forms_hold_hint`, `forms_contact_hint`.
- Validation: `form-check.py`, five-locale `form-runtime-check.php`, `repo-gates.sh forms`; a real CF7 check at 390px and desktop on light (Reserve) and dark (Woodshed Letter); never submit.

---

## 12. Similarity table (target ≈ 80%; values from reference-tokens.md)

| Dimension | Reference value (token) | Komorebi value |
|---|---|---|
| Ground | greige `#E6E3E0` ~55% (T(a)) | `#E6E3E0` exact ~50% |
| Second ground | `#D8D3CE` (T(a)) | `#D8D3CE` exact (chip box, weekend section) |
| Ink / deep green | `#343434` / `#222F25` (T(a)) | exact (text / footer, newsletter, notice chip) |
| Accent button | terracotta ~`#8B5A44` ~2% (T(a)) | `#8B5A44` exact ~2% |
| Extra hue | — | (local word) `#3B7960` <2% (row), numerals / focus only |
| Saturated share | well under 15% (T(a)) | target ≤10% (cap 15%) |
| Hero photo | max-width 86.46% flush left, 1230×710 (1.73), y148–860 (T(c), T(e)) | identical, P01 |
| Gutter | season chip, vertical 2-line serif tagline, "Scroll" + dot (T(f)) | identical set; chip Summer / Autumn; tagline Lora 1.5rem |
| Notice chip | info icon + date line on photo top-left (T(f)) | identical position, own copy |
| Header | split: nav, divider, terracotta button 166×50, white Menu box 143×50 with dots (T(c), T(d)) | identical sizes and order |
| Type | JP serif + Baskervville, light weights, wide tracking, lh ~2.0 (T(b)) | Lora (serif) + Work Sans 300, ls .1em nav, body lh 2.0 |
| Section spacing | 12.8rem / 6.25rem; 12.5rem bottom; 16.9rem top (T(c)) | 200px top / 200px bottom (12.5rem); intro 200 / 160 |
| Radius / borders / shadows | 0 / hairlines / none (T(d)) | 0 / 1px `#BDB7B1` / none |
| Transitions | `all .5s ease`; `.8s ease` colour (T(d), T(g)) | hover `.5s ease`; reveals `.8s ease` |
| Mosaic | overlapping 1:1 / 3:4 / 4:3 rects over full-bleed blurred green photo + small vertical text (T(e)) | P03–P06 overlapping over blurred P02 + vertical 2-line text; + parallax 12% |
| Facilities row | 1060×640 photo + edge peek + "Facilities" serif title + bracket label + 3 small 3:4 portraits (T(e), T(f)) | P07 + P08 peek + "Inside" + "[ … ]" + P09–P11 165×290 |
| Bracket line | "[ … ]" with Latin word (T(f)) | "[ Fri 15:00 — Sun 11:00 ]" on the band; bracket labels on titles |
| Full-bleed late photo | large full-bleed photo near the end (T(e)) | P14 woodland band 1440×800 + parallax 10% |
| Text reveal | `js-scroll-fade-text` per line ≈0.8s ease (T(g)) | `sp-stagger` + `sp-reveal--up` .8s ease, .12s steps |
| Photo reveal | mosaic photos appear ≈0.8s ease (T(g)) | `sp-reveal--zoom` on mosaic photos |
| Imagery | dark natural-light documentary, forest, architecture, interiors (T(e)) | same, + film grain (row) |

---

## 13. Home acceptance checklist (stage 1)

1. 1440×900 first screen: greige; P01 flush left x0–1232, y148–860 (cabin porch, host stacking wood, family at the car on gravel); notice chip on the photo top-left; gutter with Summer/Autumn chip, vertical H1 "Twelve cabins, / one forest.", vertical "Scroll" and dot; split header with nav, divider, terracotta "Hold a weekend" and white "Menu ···". Nothing else.
2. 390×844: header in flow; chip in flow; P01 at 100% − 24px flush left; H1 horizontal below; no vertical text, no absolute labels, no overlap; no horizontal overflow.
3. §2 intro: Lora heading, two ¶ left, italic side ¶ + P12 3:4 right.
4. §3 mosaic: blurred P02 full-bleed (visible parallax); P03 flush left, P04 flush right, P05 overlapping P03's corner, P06 lower right; captions; vertical 2-line text; "Compare the cabins →".
5. §4 comparison table: 4 columns full content width at ≥782, price row nowrap right, not clipped at 800 / 1280; stacked per cabin <782. Prices match §9 (€140 / €190 / €260 / €360; extras €12 / €20 / €30).
6. §5 Inside row: P07 1060×640, P08 peeking from the right edge, "Inside" + bracket label, ¶, link, three small portraits P09 P10 P11.
7. §6 weekend: 4 ruled steps with tokusa numerals, terracotta button → /reserve/; P13 flush right.
8. §7 P14 band with bracket line, visible parallax; §8 P15 + 7 ruled names; §9 P16 + address + hours (08:30–19:00, check-in 15:00, check-out 11:00); §10 3 journal rows; §11 newsletter slot on forest (email + submit + notice without plugins; not in the first screen; no reveal); forest footer with `#site-index`.
9. 16 unique images on home (≥8); 0 cut-outs; every image Read-checked (no text, plates, logos).
10. ≥250 English words (target ≈620), ≥3 narrative ¶ of ≥20 words; the daily routine appears (§6 / brand.md "day").
11. Effects: sp-stagger + sp-reveal--up, sp-reveal--zoom, sp-parallax only; hero has no reveal (CSS load fade on the tagline only); no reveal on forms, table, hours; `check-parallax.mjs` passes desktop + mobile; reduced motion shows final state.
12. First-screen saturated share ≤10% (cap 15%); largest theme.json size 4.25rem; fonts via theme.json fontFace (Lora, Work Sans, Noto Serif TC/JP subsets); editor matches front end.
13. Radius 0 everywhere; no shadows; exactly one top menu; bracket label on every Latin section title.
14. auto-gates `1 1` pass for en; `pattern_source.py` passes.
