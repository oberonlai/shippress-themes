# Futari Journeys — design spec (stage 1, design director)

Type: **business** (category travel-stays; WooCommerce-compatible but not required, the site works fully without it). Industry: a bespoke honeymoon and anniversary travel planner that builds one tailor-made trip at a time for couples.
Primary reference: **https://www.la-viephoto.com/resort/tabi_photo/** ("tabi"; travel-first couples' photo page: inset documentary photo over a white lower half, square + wide photo pair straddling a pale band, two-up plan cards with offset caption sheets and dark place chips, eyebrow + 76px rule, fade-up 30px, shutter wipe). Secondary: **http://www.arluis.com/** (resort weddings: three foot links divided by vertical hairlines on a white fade over the hero photo, dash-flanked labels, espresso filled + white header buttons, destination cards with a circle arrow).
Tokens: `brand/reference-tokens.md`, cited as **T(a)…T(g)**. Screens: `ref/tabi-first.png`, `ref/scroll-tabi-{900,1800,2700,3600,4800}.png`, `ref/arluis-first.png`, `ref/scroll-arluis-{900..4800}.png`.
**Imagery: photo** (stage-a IMAGERY = photo). One real-photography STYLE string (§10): high-key documentary colour photographs of couples travelling, natural light, muted greens, shallow depth of field, foreground leaf blur, as in the reference. 0 cut-outs.
Font direction: **sans** (row `font_direction: sans`). Latin headings **Manrope**, Latin body **Public Sans**; zh-TW / ja headings **Noto Sans TC / Noto Sans JP** (gothic / sans), body on system sans stacks. No serif anywhere (tabi's Zen Old Mincho headings become Manrope with the same airy tracking).
Similarity target: about **80%** to the reference in palette relationships, image treatment, motion, decoration and layout rhythm. Photographs, copy and logo are all ours.
Header: exactly one top menu (`core/navigation`), overlaid on the hero photo (row `nav: overlay`). Row page structure **faq-led**: the home body is three question groups (Budget, Timing, Documents) entered from the hero foot, then how a trip is built, and **one** way to book: the planning call (`/planning-call/`).
Class prefix: `fj-`. Pattern slugs `futari-journeys/<name>`.

---

## 1. Signature techniques (3, obvious at a glance, none may be softened)

Stage-a candidates T1, T2, T3 are the three signatures; T4 (eyebrow + 76px rule, dash-flanked labels, the dropping 1px line) is supporting decoration on every page.

### S1 (T1, arluis): the three-question foot on a white fade over the photo
- **Source**: arluis.com first screen (`ref/arluis-first.png`, T(f)). The hero photo dissolves into white over its lowest ~160px; on that fade sit **three link columns** (one per wedding type) of equal width, separated by **1px × 78px vertical hairlines** (`#47382A` at 60%), each with a **centred 18px label** and a **22px dark circle disc with a white arrow** under it. It is the first thing the eye lands on after the photo, and it is both a summary and the site's three doors.
- **Ours** (home hero; inner page heads on 6 pages): `fj-qfoot`, a Group (flex row, `justify-content: center`) **inside the hero Cover's inner container, pinned to the Cover's bottom by flex** (`margin-top: auto`; never `position: absolute`). The Cover's overlay is one gradient (§2 KV #1) whose lowest **170px** runs from transparent to `#FFFFFF`. Three columns, **each 340px wide** (total 1020 + 2 dividers), padding 0 24px, centred text:
  1. eyebrow "Q · 01" (Manrope 600 .6875rem uppercase ls .18em `#5E6B57`) · question "What will it cost?" (Manrope 600 1.125rem / 1.4 ls .04em `#222222`) · disc
  2. "Q · 02" · "When should we go?" · disc
  3. "Q · 03" · "Which documents do we need?" · disc
  Disc: a **22px circle `#3F5236`** with a 10px white arrow (inline SVG in the link, not CSS content), 12px under the question. Divider: `border-left: 1px solid rgba(34,34,34,.38)` on columns 2 and 3, **height 78px** (the column's own height; align-items: stretch). Each whole column is one link: home → `#budget`, `#timing`, `#documents`. Hover (CSS only): the disc moves 4px right, `.4s cubic-bezier(.215,.61,.355,1)` (T(g)).
- **Must not soften**: the photo **visibly dissolves into pure white** under the three columns (not a white bar, not a card, not a shadow box); **exactly three** columns; **1px vertical hairlines 78px tall** between them; centred label + **22px filled circle arrow** under each; it sits **over the photo**, not below it (except < 782px, §8).

### S2 (T2, tabi): square + wide photo pair straddling the pale band
- **Source**: tabi concept block (`ref/scroll-tabi-900.png`, T(e), T(f)). A centred two-line statement on white, then a **portrait-ish photo 326×413 (0.79:1) and a wide photo 734×413 (1.78:1)**, **tops aligned, 29px gap**; the **pale band `#F4F5F8` starts 120px below the photos' tops**, so the pair straddles white and band; on the band below: a large statement left (55%) and a short paragraph column right (45%).
- **Ours** (home §2 "two people, one route"; inner About, How it works, Destinations, Planners): `fj-pair`.
  - Statement on white: centred, Manrope 400 **2.25rem / 1.6, ls .08em** `#222222`, 2 lines, max 760px (T(b) h2 30/52.5, ls 2.4px; ours slightly larger).
  - The pair: Group `fj-pair__photos` (flex, gap **29px**, `align-items: flex-start`, max 1100px centred, margin-top 96px). Left `figure` **0.79:1** (flex 0 0 30.5%), right `figure` **1.78:1** (flex 1). Radius 0, no shadow.
  - The band: the section's **background is a hard-stop gradient**, `linear-gradient(180deg, #FFFFFF 0, #FFFFFF var(--fj-band-start), #F2F4EF var(--fj-band-start))` where `--fj-band-start` = statement block height + 96px + **120px** (set per pattern as a fixed px value: home 330px desktop; recomputed per breakpoint). Implementer may instead use a pseudo-element `::before { content: ""; position:absolute; top: 120px; … }` positioned from the photo row top — preferred, because it does not depend on the statement height: `.fj-pair__photos { position: relative } .fj-pair__band { position:absolute; left:-50vw; right:-50vw; top:120px; height: calc(100% - 120px + 600px); background:#F2F4EF; z-index:-1 }` inside a section with `overflow: clip`. Either way the **band edge crosses both photos at 120px from their tops**.
  - Below the photos, still on the band (padding-top 72px): Columns **55 / 45** (gap 64px): left a statement in Manrope 400 **1.75rem / 1.85 ls .08em** (3 short lines), right 2–3 narrative ¶ (Public Sans 1rem / 1.8).
  - A **1px × 45px `#769164` vertical line** sits centred above the statement (continuing the hero's dropping line, KV #4).
- **Must not soften**: **tops aligned** (no stagger, no offset); the **0.79 and 1.78 ratios** and the **29px gap**; the **band edge crossing the photos 120px below their tops** (not at the photo foot, not behind the whole pair); 55/45 text split below on the band.

### S3 (T3, tabi): itinerary cards with an offset caption sheet and a dark place chip
- **Source**: tabi plan list (`ref/scroll-tabi-2700.png`, `ref/scroll-tabi-4800.png`, T(d), T(e)). Two-up photos **518×303 (1.71:1)**, gap 54px; a **white caption panel 466px wide** overlaps the photo's **lower 60px**, **shifted 52px in from the left**, with soft shadow `0 10px 40px rgba(0,0,0,.08)`; a **dark chip (ink ground, white 12px bold)** sits on the **photo's bottom-right corner**, flush to the corner, just above the panel.
- **Ours** (home §4 "sample trips" inside the Timing group; inner Sample trips, Destinations, Questions, Prices): `fj-trip`. Grid 2 columns, gap **54px** (row gap 96px), max 1100px.
  - `figure` 1.71:1, radius 0. Chip `fj-chip`: a paragraph positioned absolutely **inside the figure** (≥600px only; a static line above the sheet title under 600px, §8; position below), ground `#222222`, text `#FFFFFF` Public Sans 700 .75rem ls .04em, padding 6px 12px. Chip text = place + season, e.g. "Azores · May".
  - Caption sheet `fj-trip__sheet`: a Group, white, `margin: -60px 0 0 52px` (overlaps the photo's lower 60px, inset 52px from the left; it reaches the card's right edge, width = card − 52px ≈ 466 at 1100), `position: relative; z-index: 1`, padding 28px 28px 30px, **shadow `0 10px 40px rgba(0,0,0,.08)`**, radius 0. Inside: h3 (Manrope 600 1.25rem / 1.3 ls .04em), a facts line (Public Sans 600 .8125rem `#5E6B57`, tabular-nums: "12 nights · honeymoon · from €9,800 for two"), ¶ 2 lines (Public Sans .9375rem / 1.8, clamp to 3 lines with `-webkit-line-clamp`), link "Read the trip →".
  - Hover: sheet shadow deepens to `0 14px 48px rgba(0,0,0,.12)` and the photo dims nothing; `.4s cubic-bezier(.215,.61,.355,1)`.
  - **Chip position (final)**: `position: absolute; right: 0; bottom: 60px` inside the figure, i.e. on the photo's right edge, its bottom exactly where the sheet's top begins (the sheet covers the photo's lower 60px, so a chip at `bottom: 0` would be hidden). This matches the reference, where the chip ends where the panel begins.
- **Must not soften**: **1.71:1** photos two-up, **54px gap**; the sheet is **white, overlaps 60px, inset 52px from the left only**, with the soft shadow (the only shadow on the site); the **ink chip** on the photo's right edge directly above the sheet (never a coloured chip, never a badge at top-left).

### Supporting decoration (T4, always on)
- **Eyebrow + 76px rule** (T(b), T(f)): eyebrow Manrope 600 .6875rem uppercase ls .15em `#222222`, followed in the same flex row (gap 16px) by a **1px × 76px rule `#C9CFC3`** (a `core/separator` with class `fj-rule`, width 76px, inline-flex aligned to the cap height). Every home section head and every inner chapter head.
- **Dash-flanked label** (arluis, T(f)): centred h2 Manrope 400 1.75rem ls .1em between two **24px × 1px `#222222` dashes** (gap 16px), as separators in markup (`fj-dash` Group: separator · heading · separator). Used for the "sample trips", "how a trip is built" and "book a planning call" heads and on inner pages for second-level chapters.
- **Dropping line**: 1px × 45px `#769164` vertical line (`fj-drop`, a Group 1px wide with background, not CSS content), at the hero seam and above S2 statements.
- **Pale band** `#F2F4EF` blocks alternate with white; hairlines 1px `#E2E2E2`; radius **0** on everything (photos, cards, buttons, chips, inputs) (T(d)); the only shadow is the S3 sheet.

### Continuation on inner pages (signatures on ≥4 inner pages; S1 on 6, S2 on 4, S3 on 4)
Every inner page head is `futari-journeys/page-head`: header in flow on white (sticky), then an **inset photo** (16px frame, Cover `fj-pagehead` **52svh**, min 380, max 520) with the same top-scrim/bottom-white gradient, and (on the S1 pages) its own three-question foot. Below the seam on white: eyebrow + 76px rule, h1 (Manrope 500 **3.5rem**), lead ¶ in a 55/45 split like the hero.
| Page | S1 three-question foot (page head) | S2 pair | S3 trip cards | Parallax band |
|---|---|---|---|---|
| Questions (`questions`) | Budget? / Timing? / Documents? → `#budget` `#timing` `#documents` | — | **2 cards** inside Timing ("when couples went": T1 Azores, T3 Zanzibar) | P09 |
| Sample trips (`sample-trips`) | Honeymoons / Anniversaries / Surprise trips → anchors (head P14) | — | **all 4 trips** | P12 |
| Prices (`prices`) | What the fee covers / What travel costs / When you pay → anchors | — | **2 cards** ("two budgets, side by side": T2, T4) | — |
| How it works (`how-it-works`) | The call / The route / The trip → anchors | **pair P13 + P14** "a route drawn for two" | — | P09 |
| Destinations (`destinations`) | Islands and coasts / Mountains and rail / Slow countryside → anchors | **pair P02 + P03** | **4 destination cards** (one per region, chip = best months) | P12 |
| About (`about`) | Since 2014 / The studio / The day → anchors | **pair P16 + P14** "one trip at a time" | — | — |
| Planners (`planners`) | — (plain head) | **pair P13 + P02** | — | — |
| Planning call (`planning-call`), Letter, Privacy | plain head (photo + h1, no foot) | — | — | — |

---

## 2. Key visual concept

**(1) Reference first screen, story and signature motion.** tabi opens on a **full-width inset documentary photograph** (16px even margin, 1173×704, 78% of the first screen; `ref/tabi-first.png`): **a couple strolling past an old timber inn façade**, the man looking up at the eaves, the woman smiling beside him, both in mid-step; **soft out-of-focus leaves** cross the foreground at the top-right and left; a **hand-lettered title lockup** sits on the photo's lower edge and a **1px vertical line drops** from it into the white space below. arluis's first screen adds the second half of our KV: a bride in a glass chapel above the sea, the photo **dissolving into white at its foot**, where **three links with circle arrows, divided by vertical hairlines**, offer the three ways in; a short headline with an **English sub-line** at the upper right; **espresso filled + white header buttons** at the top right. **Story**: a wedding is retold as *a trip the two choose together* ("the journey is the vow; what matters is who you go with"). **Signature motion**: blocks **fade up 30px over 1s** as they enter; photos open with a **shutter wipe** (500ms + 300ms, easeInOutCubic); every hover eases with `cubic-bezier(.215,.61,.355,1)` over .4s; arluis's header buttons arrive after the hero.

**(2) Our translation: a tailor-made trip planner for couples.** The same inset documentary photograph shows **the moment the trip is chosen**: in a bright café by a tall window, **the planner (woman, 40s, linen shirt, seen in three-quarter view) spreads a large hand-drawn route map with no lettering across a small marble table**, and **a couple (30s, diverse, seen from the side) lean in, one of them pointing at an island on the map** while the other laughs. Cups and a closed notebook on the table; **out-of-focus leaves of a window plant cross the foreground at the top-left and right** exactly as in the reference. Same image type: one high-key documentary colour photograph, people mid-gesture, unposed, natural light, muted greens. Same position: a wide inset frame on the top ~65% of the screen, people in the centre-right two thirds. Same story, made ours: *the trip is something the two choose together, and it starts at a table with someone who asks the right questions.* The photo **dissolves into white** (arluis) and the **three questions every couple asks** sit on that fade as the three doors of the site (faq-led). Below the seam, on white, the title lockup and the **dropping 1px line**; at the top right, the **filled + white button pair**. Same motion concept: the photo **settles 1.04 → 1 on load** and then **moves slower than the page** (`sp-parallax`); the hero itself never reveals; everything below **fades up 30px over 1s**; photos below the fold open with the **wipe**.

**(3) KV checklist** (all six are built in the home first screen at 1440×900 and visible without scrolling):
| # | Reference element | Our counterpart | Position (1440×900) | Motion | Image |
|---|---|---|---|---|---|
| 1 | Inset full-width documentary photo, 16px even margin, foreground leaf blur, two people mid-step (tabi) | Cover `fj-hero sp-parallax` inside a Group with **16px padding on all sides**: planner spreading a no-lettering route map on a café table, couple pointing at an island, window-plant leaves blurred in the foreground. Overlay = **one gradient**: `linear-gradient(180deg, rgba(34,34,34,.34) 0, rgba(34,34,34,0) 150px, rgba(255,255,255,0) calc(100% - 170px), #FFFFFF 100%)` (top scrim for the white header, bottom dissolve for S1) | x 16–1424, y 16–600 (Cover height **65svh**, min 520, max 680); people x ≈ 560–1180, y ≈ 110–430; map on the table y ≈ 330–440 | load: `fj-settle` CSS keyframe `scale: 1.04 → 1`, 1.6s `cubic-bezier(.215,.61,.355,1)` on the Cover image (off under reduced motion, `?sp-static`, no-JS class absent, editor); scroll: `sp-parallax --sp-par: 8%` (mobile 6%) | **P01** |
| 2 | White fade at the photo foot with three links, 1px × 78px vertical hairlines, circle arrows (arluis) | **S1 three-question foot**: "Q · 01 What will it cost?" / "Q · 02 When should we go?" / "Q · 03 Which documents do we need?", 22px deep-moss discs | inside the Cover, bottom-aligned: columns x 210–1230, y 480–580 (fade y 430–600) | static (hero gets no reveal); hover: disc +4px, .4s | P01 (same photo) |
| 3 | Title lockup on the seam + headline with an English sub-line (tabi lockup, arluis headline) | below the seam on white, Columns **7/12 + 5/12** (gap 64px, max 1240px): left eyebrow "FUTARI JOURNEYS · SINCE 2014" + 76px rule, then **h1 "Trips for two, planned one at a time."** Manrope 500 **4.5rem / 1.04 ls −.01em** `#222222` (2 lines); right: sub-line "Honeymoons and anniversaries, built around your questions." (Manrope 500 1.0625rem ls .04em `#5E6B57`) + lead ¶ ≈35 words + one button | h1 x 100–800, y 640–790; right column x 860–1340, y 650–860 | static | — |
| 4 | 1px vertical line dropping from the lockup (tabi) | `fj-drop` 1px × 45px `#769164`, starting **exactly at the seam** (y 600) at the left edge of the right column, dropping into the sub-line | x 860, y 600–645 | static in the hero (it does not "grow": no hero animation besides the photo settle) | — |
| 5 | Dark place chip on the photo's bottom-right corner (tabi cards) | chip `fj-chip` "Map table · Valmere studio" (ink ground, white Public Sans 700 .75rem) on the photo's **right edge, just above the white dissolve** (static flow: a right-aligned paragraph at the top of the bottom-aligned stack, `align-self: flex-end`) | x ≈ 1240–1408, y 400–428 | none | P01 |
| 6 | Header buttons: espresso filled + white filled, right; wordmark left (arluis) | header `fj-header--over` (absolute inside the 16px frame, z 3, 84px): wordmark "futari journeys" Manrope 500 1.25rem ls .06em lowercase white, left; `core/navigation` white Public Sans 500 .875rem ls .06em ("Sample trips · Destinations · How it works · Prices · Planners"); right two **square cells 44px tall**: **white filled** "The questions" (ink text) → `/questions/` and **deep-moss filled `#3F5236`** "Book a planning call" (white) → `/planning-call/` | y 16–100; wordmark x 48; nav x 470–1020; cells x 1060–1392 | none (no listener; the header scrolls away on home) | — |
Saturated colour in the first screen: the photo's muted greens, the 44×200 deep-moss cell and three 22px discs only; target ≤12% (§5).
"Adapted, not copied" means we do not copy tabi's or arluis's photographs, words, lettering or logo. The scene (two people choosing a trip mid-gesture in an inset documentary frame with foreground leaves, a white dissolve with three doors, a lockup on the seam with a dropping line, a filled + white button pair) is kept.

---

## 3. Home page: block order

Grid: content max **1100px** centred (T(c) content column 1100); hero row 1240px. Section padding **150px bottom** / 120px top (T(c) padding-bottom 150; mobile 80 / 72). Body ≈ 640 English words; narrative ¶ (≥3 of ≥20 words) in §2 (3 ¶), §3, §6 and §7.
Anchors: `#budget` (§3), `#timing` (§4), `#documents` (§5–6), `#how` (§7), `#book` (§9).

| # | Block (pattern slug) | Purpose | Layout | Photo(s) | Copy | Motion |
|---|---|---|---|---|---|---|
| 1 | Header (part `header-over` on home; `header` elsewhere) | brand, the one menu, the button pair | KV #6. Inner pages: same in flow, white `#FFFFFF`, text `#222222`, 1px `#E2E2E2` bottom rule, `position: sticky; top: 0`; the white cell becomes outlined 1px `#222222` | — | wordmark, 5 links, 2 cells | none |
| 2 | `hero` | **KV** (§2) | 16px frame + Cover 65svh with S1 foot and chip; white half with lockup / h1 / sub-line / lead / button "Book a planning call" (filled `#3F5236`, radius 0, Public Sans 600 .875rem ls .06em, padding 14px 28px) | P01 | h1 + sub + ≈35 words | settle + parallax 8%; no reveal |
| 3 | `pair` (**S2**) | **narrative: who plans, and why one trip at a time** | white → band. Drop line; statement "A trip is not about where you go. / It is about who you go with." Then pair **P02** (0.79, a couple at a ferry rail, leaves blurred) + **P03** (1.78, a couple walking a stone harbour path at dawn with one shared bag, seen from behind). Band starts 120px below their tops. Below on band 55/45: left "Since 2014, / one couple at a time, / about forty trips a year." ; right 3 ¶ (≈55 / 50 / 45 words: Aiko Brandt started the studio after planning her sister's honeymoon; every trip starts with a 45-minute call and the questions you already have; we plan about forty trips a year so a planner stays with you from the first call to the flight home) | P02, P03 | ≈170 words | statement + text `sp-reveal--up`; each figure `sp-reveal--wipe` (figure wrapper, img inside) |
| 4 | `q-budget` (`#budget`) | **Question 01: budget** (faq-led core) | white. Head: eyebrow "QUESTION 01 — BUDGET" + 76px rule, h2 "What will it cost?" (Manrope 400 2.25rem ls .08em). Columns **5/12 + 7/12** (gap 64): left **P04** 4:5 (hands over a notebook and two cups at the planning table, the map's edge in frame) with caption "The planning fee is separate from what you spend on the trip."; right **3 `core/details`** Q&As (summary Manrope 600 1.0625rem; 1px `#E2E2E2` rules; + / − marker as inline SVG in the summary, rotate on `[open]`): "How is the planning fee worked out?" · "What does a honeymoon usually cost for two?" (most trips we plan: €6,000–€14,000 for two, flights included; we say so on the call) · "Do you take commission from hotels?" (no; we pass on any rate we are given). Then **full container width** under both columns: **price table, 6 rows** (§9), heading "Planning fees" with the dash label | P04 | ≈160 words + table | head + details group `sp-reveal--up`; **table: none** |
| 5 | `q-timing` (`#timing`) | **Question 02: timing**, with the 4 sample trips (**S3**) | band `#F2F4EF`. Head: eyebrow "QUESTION 02 — TIMING" + rule, h2 "When should we go?". Two-column ruled Q&A row (2 `core/details` side by side, 50/50): "How far ahead should we start?" (4–9 months for a honeymoon; 6 weeks is possible for a weekend) · "What if we only know the month?" Then dash label "— sample trips —" and **S3 grid, 4 cards**: **P05** "Twelve nights, three islands" chip "Azores · May" · **P06** "By train, lake to sea" chip "Slovenia · September" · **P07** "Ten nights on the coral coast" chip "Zanzibar · February" · **P08** "Twenty-five years, five slow days" chip "Puglia · October"; each card's facts line from §9 | P05, P06, P07, P08 | ≈130 words + 4 cards | head + Q&A `sp-reveal--up`; card grid `sp-stagger`, each card's figure `sp-reveal--wipe`, sheet static with the card (the figure carries the reveal; the sheet is a sibling with no reveal so the overlap never shows a half-hidden state) |
| 6 | `band-map` (**parallax**, §7.2) | pause between questions; opens Documents | full-bleed inside the same **16px frame** as the hero: Group `fj-band sp-parallax` 2.4:1 (max 600px tall), **P09** (a coastal road through green hills, a small pale car stopped at a viewpoint, a couple standing at the low wall looking out, leaves in the foreground). Static foreground: a white tab bottom-left (`fj-tab`, 0 radius, padding 18px 28px) with eyebrow "QUESTION 03" + h2 "Which documents do we need?" (Manrope 400 1.75rem). Anchor `#documents` | P09 | 1 line | `sp-parallax --sp-par: 10%` (mobile 6%); the tab: none |
| 7 | `q-documents` | **Question 03: documents** | white. Ruled Q&A list, **two columns per row: question 4/12 (Manrope 600 1.125rem) · answer 8/12 (¶ ≈40 words)**, 1px `#E2E2E2` rule above each row, 4 rows: passports (6 months' validity, blank pages) · visas and entry permits (we list them per route, you apply; Priya checks them twice) · name change after the wedding (travel on the name in your passport) · travel insurance (we recommend, we do not sell). Under it a ¶ (≈45 words) narrative on the travel kit 14 days before departure. Link "All questions →" `/questions/` | — | ≈210 words | rows `sp-stagger` + `sp-reveal--up` |
| 8 | `how` (`#how`) | **how a trip is built** (5 steps as a ruled list, never step cards) | band. Dash label "— how a trip is built —". Columns **7/12 + 5/12**: left an **ordered ruled list of 5 rows** (number Manrope 300 2rem `#769164` in a 56px hanging column · step title Manrope 600 1.0625rem · one line Public Sans .9375rem · timing at the right, Public Sans 600 .8125rem `#5E6B57` nowrap); right **P10** 4:5 (a planner on a video call at a bright desk, notebook, plant, a framed blank map on the wall), `position: sticky; top: 120px` ≥1024 only; link "How it works →" | P10 | ≈120 words | list rows `sp-stagger` + `sp-reveal--up`; P10 `sp-reveal--wipe` |
| 9 | `planners` | **who plans your trip** | white. Eyebrow "THE PLANNERS" + rule, h2 "Three planners, one of them yours." Columns **6/12 + 6/12**: left **P11** 3:2 (the studio: three planners around a long table with maps and photographs, window light); right **3 ruled name rows** (name Manrope 600 1.25rem · role Public Sans 600 .75rem uppercase ls .12em `#5E6B57` · 1 sentence): Aiko Brandt, Mateus Okafor, Lina Haddad; link "All seven people →" `/planners/` | P11 | ≈80 words | rows `sp-reveal--up`; P11 `sp-reveal--wipe` |
| 10 | `book` (`#book`) | **the single way to book: the planning call** | ground **`#222222`** (the reference's footer ink, so the call reads as the last chapter), padding 120px 24px, centred: dash label in white "— book a planning call —" (dashes `#FFFFFF`), ¶ ≈50 words "Forty-five minutes by video, free, Monday to Saturday 09:00–19:00 CET. Bring your dates if you have them and your questions if you don't. Within seven days you will have a first route and a fee for the whole plan." (`rgba(255,255,255,.82)`), button **filled `#3F5236` with a 1px `#769164` border** "Book a planning call" (text `#FFFFFF`, 8.9:1; white on `#769164` would be only ~3.6:1, so moss is the border, not the ground) → `/planning-call/`, small line "+00 0000 0000 · hello@futari-journeys.example" | — | ≈60 words | none |
| 11 | `letter` | newsletter (§11) | white; Columns 5/12 + 7/12: left eyebrow "THE ROUTE LETTER" + rule, h3 "One letter a season." (Manrope 400 1.75rem) + ¶ ≈30 words (four letters a year: where couples went that season and which months open next; nothing else); right newsletter `shippress_form_slot` (max 520px) | — | ≈35 words | **none** (form) |
| 12 | Footer (part `footer`) | address, hours, links | ground `#222222` (T(a) footer band), padding 96px 32px 40px, text `#E9ECE6`; 4 columns: wordmark + address · hours · contact (phone, email, "Book a planning call →") · paragraph links (About · Questions · The Route Letter · Journal · Privacy; **not** a second navigation); © line .75rem `rgba(233,236,230,.6)` | — | | none |

**Home photo positions: 11 images, all different** (P01, P02, P03, P04, P05, P06, P07, P08, P09, P10, P11); ≥8 required ✔.

### First-screen composition
- **Desktop 1440×900**: outer Group `fj-hero-wrap` padding **16px** (T(c) inset 16), white. Cover `fj-hero sp-parallax` x 16–1424, y 16–600 (`min-height: 65svh`, min 520, max 680), P01 `object-position: 55% 45%`. Header absolute inside the frame y 16–100 (KV #6). Inside the Cover (flex column, `justify-content: flex-end`, padding 0 0 20px): chip (right-aligned) then the S1 foot (centred). White half y 600–900: drop line x 860 y 600–645; Columns 7/12 + 5/12 (max 1240, padding-top 40px): h1 2 lines ("Trips for two, / planned one at a time.") y 640–790; right column sub-line, lead, button (button bottom ≈ y 860). Nothing else.
- **1280–1439**: identical, h1 4.25rem.
- **1024–1279**: nav 5 links at .8125rem, the white "The questions" cell hidden (the S1 foot already carries the questions); h1 3.75rem; foot columns 300px.
- **782–1023**: header: wordmark left, deep-moss cell right, nav behind the `core/navigation` overlay toggle (`overlayMenu: "mobile"` shows the toggle < 600 only; between 600 and 1023 the 5 links run at .8125rem in one line; if they do not fit, hide "Planners" from the header via the navigation block's responsive setting — never a second menu). Cover 60svh; S1 foot stays over the fade (3 × 220px). White half stacks: h1 3.25rem full width, then sub-line, lead, button.
- **Mobile 390×844**: header **in flow on white** 64px (wordmark `#222222` left, menu toggle 44×44, deep-moss cell "Book a call" 104px wide at the right). Frame padding **8px**. Cover **min-height 52svh** (≈440px), P01 `object-position: 62% 45%` (the pointing hand and the map stay in frame); the bottom dissolve shortens to 110px; **the S1 foot is NOT on the photo**: it follows the Cover in normal flow as **three stacked rows** (each a full-width link 56px tall: "Q · 01" left, question, disc right, 1px `#E2E2E2` rule between rows). The chip is hidden below 600px (`display: none`) so nothing sits on the photo. White half: eyebrow, **h1 2.625rem / 1.08** (3 lines), sub-line, lead, button. Order: header → photo → h1 block → S1 rows (the h1 must be in the first screen: S1 rows come after the button). **No vertical text, no absolutely positioned label, nothing overlapping text.**

### Comparison with recent themes' home orders (must not match)
| Theme | Home order | Futari Journeys difference |
|---|---|---|
| Utsushi Films | KV window with film index rows → intro → masonry case wall → wipe panel over photo → three centred columns → parallax band → rates rows → crew rows → letters + box CTA | our hero is an **inset photo dissolving into white with three question doors**, then a **square + wide pair on a band edge**; no index rows, no masonry, no three centred feature columns; the body is **three question groups** |
| Shiosai Resort | full-bleed hero + flag info bar (pager left) → centred welcome → sticky-media rooms → 2×2 week grid → parallax packages opener → prices → beach → families pair → ink check-dates band | no full-bleed hero (16px frame), no bar, no pager, no roman grid; our parallax band carries a white question tab; prices sit inside the Budget question |
| Yoake Patisserie | split hero (colour top, photo below) → wash band + drifting photo → hour ledger 3-up → film still → mirrored wash band → price squares → tea wash → bench people → visit band | our top half is the photo and the bottom half is white type (reverse); no colour block, no ledger, no price squares |
| Koori Cold Stores | crossfade full-bleed hero → room-log strip → giant-word "held" → fading band + fused cards → parallax dock band → booking steps → horizontal day strip → rates table → case cards | no crossfade, no giant word, no horizontal strip; case cards are **offset-sheet itinerary cards** inside the Timing question; steps are a ruled list beside a sticky photo |
| **Futari Journeys** | over-photo header + inset P01 dissolving to white with **three question doors** + lockup / drop line → **S2 pair on band** → Q01 budget (photo + details + fee table) → Q02 timing (band, Q&A + **4 offset-sheet trip cards**) → parallax road band with Q03 tab → Q03 documents ruled rows → how a trip is built (ruled list + sticky photo) → planners rows → ink planning-call band → letter → ink footer | |

---

## 4. Inner pages (11 pages + Journal + 3 posts)

Slugs identical in all five locales. Every page uses the page head (§1 continuation); chapter heads use eyebrow + 76px rule; second-level heads the dash label.
| Page (slug) | Role | Key content |
|---|---|---|
| Questions (`questions`) | **core (faq-led)**: every question | head **P13** + S1 foot. 5 groups, each `#anchor`, eyebrow "QUESTION 0n — …", **`core/details`** Q&As (4–6 each, 24 total): Budget (6; includes the fee table rows 1–6 as a link to Prices) · Timing (5; **S3 2 cards** P05 + P07) · Documents (5, ruled two-column rows as home §7) · On the trip (4: the travel-day line, changes on the road, weather, what if a flight is cancelled) · After you book (4: deposits, cancellation, surprise trips, gifts from guests). Parallax band **P09** between Timing and Documents. An "ask your own question" closing line → `/planning-call/`. |
| Sample trips (`sample-trips`) | **core**: the 4 cases | head **P14** + S1 foot. **S3 grid of 4 trips** (P05–P08), then each trip as a chapter: facts row (nights · occasion · season · budget for two · planner), 2 ¶ ≈80 words on how it was built (what the couple asked first, what changed after the first route), a ruled **day-by-day outline** (5–7 rows, nowrap day numbers). Parallax band **P12**. |
| Destinations (`destinations`) | **core**: where couples go | head **P15** + S1 foot. **S2 pair P02 + P03** ("we plan where we have been"). 3 regions as chapters: Islands and coasts · Mountains and rail · Slow countryside; **S3 4 destination cards** (P05 Azores, P06 Slovenia, P07 Zanzibar, P08 Puglia; chip = best months), each with "good for" line and typical nights. Parallax band **P12**. |
| How it works (`how-it-works`) | **core**: process | head **P10** + S1 foot. **S2 pair P13 + P14**. ch. "the five steps" (ruled list as home §8, each step with ¶ ≈50 words) · ch. "what you receive" (route map, day sheets, bookings folder, travel-day line; ruled list) · ch. "surprise trips" (one partner plans; we keep the secret until the airport). Parallax band **P09**. |
| Prices (`prices`) | **core**: fees | head **P04** + S1 foot. **Full price table, 6 rows** (§9, full width ≥782) · ch. "what the fee covers" (ruled list) · ch. "what travel costs" (**S3 2 cards** P06 + P08 with their budgets for two) · ch. "when you pay" (50% of the fee after the first route, 50% when bookings are confirmed; travel paid to suppliers directly). |
| About (`about`) | about | head **P12** + S1 foot. **S2 pair P16 + P14** "one trip at a time". ch. "since 2014" (milestones as ruled rows: 2014 · 2017 · 2020 · 2024 · today) · ch. "**a day at the studio**" (the daily routine ¶ + ruled times, §9) · ch. "how we work with hotels" (no commission). |
| Planners (`planners`) | people | plain head **P11** (no S1 foot). **S2 pair P13 + P02**. **7 people** (§9) as ruled rows: name (Manrope 600 1.25rem), role (uppercase .75rem), 2 sentences, "regions" line; **no portrait grid**. |
| Planning call (`planning-call`) | **contact / booking (the single way)** | plain head **P16** (the studio door, a planner holding it open). ch. "how the call works" (45 min by video, free; ruled 4-row list) · ch. "book your call" (**contact `shippress_form_slot` + mailto fallback**, §11) · ch. "visit the studio" (address, hours table, by appointment). No book band on this page. |
| The Route Letter (`letter`) | newsletter (standalone) | plain head **P17**. ch. "what's in it" (four letters a year, ruled list: March / June / September / December) · ch. "subscribe": newsletter slot on the **ink panel** (§11). |
| Privacy (`privacy`) | legal | plain text, no motion, no photo head (white head only). |
| Journal (`journal`) | posts page (role `posts`, empty) | archive template: 2-col list using the **S3 card** (1.71:1 featured image + offset sheet + chip = category), eyebrow head "JOURNAL". |
| Posts (3) | article | "What we ask on the first call" (featured **P04**; category Planning `planning`; tags `honeymoon`, `first-call`) · "Twelve nights, three islands: how a route changed twice" (featured **P05**; category Trips `trips`; tags `honeymoon`, `islands`) · "Planning an anniversary as a surprise" (featured **P08**; category Planning; tags `anniversary`, `surprise`) |

theme-meta `pages` / demo `screens`: home → `/`, about → `/about/`, news → `/journal/`, article → first post, category → `/category/planning/`, tag → `/tag/honeymoon/`, newsletter → `/letter/`, contact → `/planning-call/`.
Top menu (the one `core/navigation`): **Sample trips · Destinations · How it works · Prices · Planners** (5). The two header cells ("The questions", "Book a planning call") are separate links, not a second menu. Footer paragraph links: About · Questions · The Route Letter · Journal · Privacy.
Templates: `front-page` (header-over), `page`, `page-planning-call`, `page-letter` (or page), `single`, `archive`, `category`, `tag` (archive copy, label "Tag"), `home` (posts page), `404`, `search`.

---

## 5. Colour (T(a): white ~62%, pale cool band ~24%, ink ~8%, gold ~3%, slate ~2%; colour comes from the photographs)

Reference relationship kept role for role. **Hue changes (reasons)**: the pale band #F4F5F8 is cool grey-lilac; the row palette is "Oitake-iro" (old bamboo moss), so the band is re-tinted toward moss at the same lightness (L 96.0 → 95.7, within ±5%). The gold accent #B89A65 becomes the row hex **#769164** (the row requires the moss accent and gold would read as cream/beige, which the rules discourage); the slate cell #7E8E9C becomes **deep moss #3F5236** for the one CTA (filled, like the reference's gold booking cell and arluis's espresso button #48322A — darker so white text passes). Ink #222222 and hairline #E2E2E2 are unchanged.
| Token (theme.json slug) | Hex | Share | Source |
|---|---|---|---|
| `paper` | **#FFFFFF** | ~60% | T(a) ground #FFFFFF |
| `band` | **#F2F4EF** | ~24% | T(a) pale band #F4F5F8, moss-tinted, same L |
| `ink` | **#222222** | ~8% (text, book band, footer, chips) | T(a) text / footer #222222 |
| `muted` | **#5E6B57** | eyebrow numbers, facts lines, captions (5.6:1 on white, 5.2:1 on band) | ink → moss grey |
| `moss` | **#769164** | **~5%**: drop lines, list numerals, link underline, book-band button border | row hex (old bamboo moss) |
| `moss-deep` | **#3F5236** | **~3%**: CTA buttons, header cell, S1 discs, focus on light (8.9:1 on white) | T(a) gold booking cell #B89A65 / arluis #48322A → deep moss |
| `line` | **#E2E2E2** | hairlines, Q&A rules | T(d) |
| `rule` | **#C9CFC3** | the 76px eyebrow rules | T(f) rule, moss-tinted |
| `mist` | **#E9ECE6** | footer text | — |
| `error` | **#A23B3B** | form errors (6.0:1 on white) | — |
| `success` | **#2F6B45** | form success | — |
Ratio: paper 60 · band 24 · ink 8 · moss 5 · moss-deep 3 (+ photos).
**First-screen saturated share (check-first-screen.py)**: target **≤12%**, hard cap **15%** (row cap 30%; reference 1.4% / 7.8%). P01 must be high-key: white café wall and window light, muted plant greens, no strong blue. If over 12%, regenerate P01 paler; never add a grey overlay beyond the specified gradient.

---

## 6. Typography (sans, row font_direction = sans)

Fonts load **only via theme.json `fontFamilies` + `fontFace`** (woff2 in `assets/fonts/`, OFL, listed in theme-meta `fonts[].files` with `licenseFile`; family names in readme.txt), so the editor iframe and the front end render the same faces, including zh-TW / ja subsets. style.css has `:lang(` rules → copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it in functions.php.
- `manrope`: Manrope 300, 400, 500, 600 (variable or static; Latin + Latin-ext). Headings, h1, numerals, wordmark, questions, card titles.
- `public-sans`: Public Sans 400, 400 italic, 600, 700 (Latin + Latin-ext). Body, eyebrow-adjacent small text, nav, tables, forms, chips.
- `noto-sans-tc`: Noto Sans TC 400 + 500 (headings; zh-TW subset of every zh-TW demo string + punctuation, by the Hokuto/Hada substitute method — the repo subset script is broken).
- `noto-sans-jp`: Noto Sans JP 400 + 500 (headings; ja subset, same method).
Stacks:
- Latin heading: `Manrope, "Helvetica Neue", Arial, sans-serif`
- Latin body: `"Public Sans", "Helvetica Neue", Arial, sans-serif`
- `:root:lang(zh-TW)` heading: `Manrope, "Noto Sans TC", "PingFang TC", "Microsoft JhengHei", sans-serif`; body: `"Public Sans", "PingFang TC", "Microsoft JhengHei", sans-serif` (no bundled TC / JP font in body: repo contract).
- `:root:lang(ja)` heading: `Manrope, "Noto Sans JP", "Hiragino Sans", "Hiragino Kaku Gothic ProN", "Yu Gothic", sans-serif`; body: `"Public Sans", "Hiragino Sans", "Hiragino Kaku Gothic ProN", "Yu Gothic", "Meiryo", sans-serif`.
- CJK: headings at 500 (h1) / 400; sizes × 0.75 (h1 3.375rem, h2 1.6875rem); body 1rem / **1.85**, ls .04em; uppercase eyebrows written in normal case. fr / de: `hyphens: auto` on body, h2, h3, Q&A summaries; h1 `hyphens: manual`. The wordmark "futari journeys" stays Latin in every locale.
| Role | Font / weight | Size (desktop → mobile) | Line-height | Tracking | Source |
|---|---|---|---|---|---|
| home h1 | Manrope 500 | **4.5rem (72px)** → 2.625rem | 1.04 | −.01em | T(b) h1 30px serif; raised for the ≥4.25rem rule |
| inner h1 | Manrope 500 | 3.5rem → 2.25rem | 1.1 | −.005em | — |
| h2 (section) | Manrope 400 | 2.25rem → 1.625rem | 1.45 | .08em | T(b) h2 30 / 52.5, ls 2.4px |
| S2 statement | Manrope 400 | 2.25rem (top) / 1.75rem (band) → 1.375rem | 1.6 / 1.85 | .08em | T(b) concept statements |
| dash label | Manrope 400 | 1.75rem → 1.375rem | 1.4 | .1em | arluis section label |
| h3 / card title | Manrope 600 | 1.25rem | 1.3 | .04em | T(b) card h3 20 / 26, w600, ls .8px |
| question (details summary) | Manrope 600 | 1.0625rem | 1.5 | .03em | — |
| eyebrow | Manrope 600, uppercase | .6875rem | 1.4 | .15em | T(b) eyebrow 11–12px ls .15em |
| body | Public Sans 400 | **1rem (16px)** | **1.8** | .04em | T(b) 16px / 28.8, ls .05em |
| nav | Public Sans 500 | .875rem | 1 | .06em | — |
| button | Public Sans 600 | .875rem | 1 | .06em | — |
| chip | Public Sans 700 | .75rem | 1.3 | .04em | T(e) chip 12px bold |
| facts / price | Public Sans 600 tabular-nums | .8125rem / 1rem | 1.5 | 0 | — |
theme.json fontSizes: `small` .8125rem, `medium` 1rem, `large` 1.25rem, `x-large` 1.75rem, `xx-large` clamp(1.625rem, 1rem + 1.6vw, 2.25rem), `huge` clamp(2.625rem, 1.2rem + 4vw, **4.5rem**) (largest ≥ 4.25rem ✔).

---

## 7. Motion and scroll (sp-scroll)

Copy `pipeline/assets/sp-scroll/` unchanged to `assets/`; enqueue the JS in the head (not deferred), CSS also as an editor style. Only `sp-*` classes; no scroll listener, jQuery inview, GSAP or slick (the references use them; we do not). The tabi FAQ anchor highlighter is **not** reproduced (no listener); anchors are plain links. **Three effects**, from stage-a "Scroll effect candidates":

### 7.1 Chosen effects
| Effect | sp-* | Where | Reference trigger / time / easing | Ours |
|---|---|---|---|---|
| Fade-up | `sp-reveal sp-reveal--up` (+ `sp-stagger` on groups) | home §3 statement + band text, §4 head + details group, §5 head + Q&A, §7 rows (stagger), §8 list rows (stagger), §9 rows; inner chapter bodies, Q&A groups, people rows | tabi `.fade-up`: viewport enter, once, opacity 0→1 + translateY **30px**→0, **1s ease** (T(g)) | `--sp-dist: 30px; --sp-dur: 1s; --sp-ease: ease` (30px is the gate maximum); stagger .12s (built in) |
| Shutter wipe | `sp-reveal sp-reveal--wipe` on the **figure wrapper** (img child is clipped; the observed element has no clip-path) | home §3 P02 + P03, §5 card figures (4, inside `sp-stagger`), §8 P10, §9 P11; inner S2 pairs and S3 card figures | tabi `.mask`: slide 500ms + cover 300ms, **easeInOutCubic**, inview (T(g)) | `--sp-dur: .8s; --sp-ease: cubic-bezier(.645,.045,.355,1)` (easeInOutCubic; 500 + 300 = .8s total) |
| Parallax | `sp-parallax` | hero Cover P01; home §6 band P09; inner parallax bands (P09, P12) | none on the reference (stage-a: none found); required by the pipeline; tabi's motion character (slow, linear with the scroll) | §7.2 |
Hover (CSS only, not sp-scroll): `transition: all .4s cubic-bezier(.215,.61,.355,1)` on links, buttons, S1 discs, S3 sheets (T(g), 247 uses on the reference).
The hero's load settle `fj-settle` (KV #1) is a theme CSS keyframe on the Cover image only, using the `scale` property (sp-parallax moves `translate`/`transform`), `1.6s cubic-bezier(.215,.61,.355,1) both`, `from { scale: 1.04 }`; disabled under `prefers-reduced-motion`, without `html.sp-js`, with `?sp-static` (html.sp-static / sp-no-motion) and in the editor. It is not a reveal (no content is hidden). **Not** on: the hero (no reveal at all), the S1 foot, forms, the price table, the hours table, legal text, the book band. Count-up, marquee, mask: none. Reveals on home ≤ 60% of blocks, 0 in the hero.

### 7.2 Parallax (required)
| Where | Block / structure | Background layer | Foreground (static) | `--sp-par` desktop / mobile | Reference motion |
|---|---|---|---|---|---|
| **Hero** (primary) | Cover `fj-hero sp-parallax` (65svh, inside the 16px frame; Cover clips) | `.wp-block-cover__image-background` **P01** (sp-scroll scale 1.18) | header (outside the Cover), chip + S1 foot in the Cover inner container (do not move); the gradient overlay is the Cover's `span.wp-block-cover__background` (does not move) | **8% / 6%** | tabi's inset photo stays calm while the white page moves up over it; the settle echoes arluis's load entrance |
| **Road band** (home §6) | Group `fj-band sp-parallax` (`overflow: clip`, 2.4:1, max-height 600px, inside the 16px frame) holding `figure > img` **P09** | P09 | white tab `fj-tab` (eyebrow + h2) is a sibling positioned bottom-left in flow via grid overlay (`display:grid; > * { grid-area: 1/1 }`, tab `align-self:end; justify-self:start; margin: 0 0 32px 32px`), **not inside the moving figure** | **10% / 6%** | same |
| **Inner bands** | same structure, no tab (Questions P09, Sample trips P12, Destinations P12, How it works P09) | as listed | none | **8% / 6%** | same |
Mobile keeps parallax at the smaller speeds. Reduced motion, `?sp-static`, no-JS and editor: no movement and no scale. Acceptance: `check-parallax.mjs` desktop + mobile (displacement difference ≥6px, ≤1px under reduced motion); ≥3 reveals hidden before entering and final after; nothing transparent after scrolling to the bottom.

---

## 8. Responsive rules (hard)

- **390px first screen**: header in flow; no vertical writing anywhere on the site; no absolutely positioned label; the chip is hidden < 600px; the S1 foot leaves the photo and becomes **three stacked rows in normal flow after the hero text**; the h1 is left-aligned in normal flow; nothing overlaps text (auto-gates).
- **S1 foot**: ≥1024 3 × 340px over the fade; 782–1023 3 × 220px over the fade (question 1rem); < 782 stacked rows in flow (as above), dividers become horizontal 1px `#E2E2E2` rules.
- **S2 pair**: ≥782 side by side (0.79 + 1.78, gap 29, band edge 120px below the tops); < 782 the wide photo first at full width (1.78), the portrait photo below at 70% width, right-aligned, overlapping nothing; band edge 80px below the top of the first photo; 55/45 text stacks.
- **S3 cards**: ≥782 two-up; < 782 one column; sheet overlap −40px, inset 24px; chip stays on the photo's right edge **at `bottom: 40px`** ≥600, and is a static line above the sheet title < 600 (no absolute positioning at 390).
- **Ruled Q&A rows (§7)**: < 782 question above answer.
- **How list (§8)**: < 1024 photo above the list (not sticky).
- **Price table ≥782px**: spans the **full width of its container** (`width: 100%`, `table-layout: auto`; on home it sits under both columns of §4, full 1100px); the price column `white-space: nowrap; text-align: right; width: 1%; padding-right: 0`; **never clipped at 800 and 1280**; no `overflow: hidden` on any ancestor of the table. Columns: plan (name + one-line note under it) · what's included (nights / stops) · fee.
- **Any table < 782px** (prices, hours, day outlines): stacked: each row a block, name on its own line (Manrope 600 1.0625rem), note below, fee/time at the right of the first line (flex, `nowrap`), 1px `#E2E2E2` between rows; no horizontal scrolling.
- `html, body { overflow-x: clip }`; parallax layers clipped by their wrapper; the 16px frame never causes overflow (`box-sizing: border-box`); at 390 `scrollWidth == innerWidth`.
- Touch targets ≥44px; CJK always horizontal; details summaries ≥48px tall.

---

## 9. Fixed facts (identical on every page and in all five locales; brand.md is the source)

- **Name**: Futari Journeys (wordmark "futari journeys"; *futari* = "the two of us"). **Studio**: 2nd floor, 8 Linden Row, Valmere (fictional, international-neutral harbour town). **Founded** 2014 by Aiko Brandt. **Phone** +00 0000 0000. **Email** hello@futari-journeys.example (all mailto links).
- **Hours**: studio **Tuesday–Saturday 10:00–18:00** (visits by appointment); planning calls by video **Monday–Saturday 09:00–19:00 CET**; the **travel-day line** answers **24 hours a day** while a couple is travelling.
- **Scale**: about **40 trips a year**; one planner stays with each couple from the first call to the flight home.
- **Prices (6 items; planning fees per couple, €; travel paid separately to hotels, airlines and guides)**:
  1. Planning call — 45 minutes by video — **free**
  2. Anniversary weekend — 2–4 nights, one place — **€290**
  3. Short escape — 5–7 nights, up to 2 stops — **€450**
  4. Honeymoon — 8–16 nights, up to 3 stops — **€780**
  5. Long journey — 17–30 nights, two or more countries — **€1,150**
  6. Surprise planning — add-on to any plan; one partner plans, we keep the secret — **+€120**
  Most honeymoons we plan cost **€6,000–€14,000 for two**, flights included (stated as a range we see, not a promise). Fees are paid 50% after the first route, 50% when bookings are confirmed. No commission taken from hotels.
- **How a trip is built (5 steps, ruled list, never step cards)**: 1 the planning call (45 min, free) · 2 a first route and a fee **within 7 days** · 3 **two rounds** of changes · 4 bookings confirmed, deposits paid to suppliers · 5 the travel kit **14 days before** departure (route map, day sheets, bookings folder) and the travel-day line during the trip. Start **4–9 months** ahead for a honeymoon; **6 weeks** is enough for an anniversary weekend. Cancellation of the planning fee: free until the first route is sent.
- **People (7)**: Aiko Brandt, founder and lead planner · Mateus Okafor, planner, islands and coasts · Lina Haddad, planner, mountains and rail · Priya Nair, documents and entry requirements · Jonas Weber, bookings and suppliers · Camille Laurent, the travel-day line · Ren Ishida, routes and maps.
- **Sample trips (4 cases, the S3 cards)**:
  1. "Twelve nights, three islands" — Noor & Daniel, honeymoon, **Azores, May**, 12 nights, 3 islands, **from €9,800 for two**, planner Mateus
  2. "By train, lake to sea" — Mei & Tomasz, 10th anniversary, **Slovenia, September**, 8 nights by rail, **€5,200 for two**, planner Lina
  3. "Ten nights on the coral coast" — Grace & Kofi, honeymoon, **Zanzibar, February**, 10 nights, **€11,400 for two**, planner Mateus
  4. "Twenty-five years, five slow days" — Elena & Marco, 25th anniversary, surprise planned by Marco, **Puglia, October**, 5 nights, **€3,600 for two**, planner Aiko
- **Milestones**: 2014 the first honeymoon (Aiko's sister) · 2017 the studio on Linden Row · 2020 the travel-day line · 2024 the 300th trip · today, seven people.
- **A day at the studio (daily routine)**: 08:30 the travel-day line hands over from night to day · 09:00 first planning calls · 11:00 route reviews at the long table · 13:00 lunch · 14:00 supplier calls and bookings · 16:00 documents check (Priya) · 18:00 studio closes · 19:00 last planning call.
- **The Route Letter**: four letters a year (March, June, September, December).
- **Posts (3)**: "What we ask on the first call" · "Twelve nights, three islands: how a route changed twice" · "Planning an anniversary as a surprise".
- **Hero chip**: "Map table · Valmere studio".
- **Tone**: calm, specific, kind; answers before selling; no "best", no awards, no guarantees about weather, prices or visas; no real brands, hotels or people.

---

## 10. Images (17 photographs, all real photography, one STYLE; 11 on home)

**STYLE** (identical for every image):
`IMAGE_STYLE="high-key documentary colour photograph, natural window or open-shade daylight, bright and airy, soft muted greens and warm whites, low saturation, shallow depth of field with out-of-focus leaves in the foreground, 35mm lens, candid unposed moments mid-gesture, adult couples of diverse backgrounds in simple linen and cotton clothes, modern international settings, clean uncluttered composition with generous white or pale space, gentle film grain, no text, no letters, no numbers, no logos, no brand names, no signage, no readable maps or labels"`
Generate one at a time: `IMAGE_STYLE="<STYLE>" scripts/grok-image.sh out.webp "<subject>"`. Read every image; regenerate any with text, lettering on the map, logos, broken faces or hands, saturated blue sky or sea, Japanese elements, or a style drift. webp, ≤300 KB, ≤2000px. No cut-outs. P01 must pass the first-screen saturation check (§5).
| # | File | Subject (prompt core) | Ratio / size | Used on (page · block) | Home |
|---|---|---|---|---|---|
| P01 | `hero-map-table.webp` | **KV**: a bright café by a tall window; a travel planner (woman, 40s, linen shirt, three-quarter view) spreads a large hand-drawn route map with island shapes and dotted lines, **no lettering**, across a small marble table; a couple in their 30s lean in from the right, one pointing at an island, the other laughing; two cups and a closed notebook; out-of-focus leaves of a window plant across the top-left and right foreground; white walls | 2.4:1, 2000×834 | Home §2 hero | ✔ |
| P02 | `ferry-rail.webp` | a couple at the rail of a small white ferry, leaning together and looking at the sea, pale sky, leaves of a harbour tree blurred in the foreground | 0.79:1, 1264×1600 | Home §3 pair (left) · Destinations S2 (left) · Planners S2 (right, 1.78 crop) | ✔ |
| P03 | `harbour-path.webp` | a couple walking away along a stone harbour path at early morning, one carrying a shared canvas bag, low green shrubs at the path edge, foreground leaf blur | 1.78:1, 2000×1124 | Home §3 pair (right) · Destinations S2 (right) | ✔ |
| P04 | `planning-hands.webp` | close view of hands over a planning table: a closed notebook, a pencil, two cups, the edge of a blank route map, a couple's hands resting together, window light | 4:5, 1280×1600 | Home §4 · Prices head · post 1 | ✔ |
| P05 | `azores-crater.webp` | a couple at a green volcanic crater rim above a pale lake, small figures, misty hydrangea hedges, soft overcast light | 1.71:1, 1800×1052 | Home §5 card 1 · Questions S3 · Sample trips S3 · Destinations S3 · post 2 | ✔ |
| P06 | `train-window.webp` | a couple seated by a train window, mountains and a lake passing outside, one resting her head on his shoulder, bright soft light | 1.71:1, 1800×1052 | Home §5 card 2 · Sample trips S3 · Destinations S3 · Prices S3 | ✔ |
| P07 | `coral-coast.webp` | a couple walking on pale sand at low tide by a wooden sailing boat, turquoise kept very pale, palms at the edge, seen from behind | 1.71:1, 1800×1052 | Home §5 card 3 · Questions S3 · Sample trips S3 · Destinations S3 | ✔ |
| P08 | `olive-table.webp` | an older couple (60s) at a long table under olive trees at an old farm, sharing bread and laughing, dappled light | 1.71:1, 1800×1052 | Home §5 card 4 · Sample trips S3 · Destinations S3 · Prices S3 · post 3 | ✔ |
| P09 | `coast-road.webp` | a coastal road through green hills, a small pale car stopped at a viewpoint, a couple at the low stone wall looking out to a calm pale sea, foreground leaves | 2.4:1, 2000×834 | Home §6 band · Questions band · How it works band | ✔ |
| P10 | `video-call.webp` | a planner (man, 30s) on a video call at a bright desk, laptop seen from behind (no screen visible), notebook, plant, a framed blank map on the white wall | 4:5, 1280×1600 | Home §8 · How it works head | ✔ |
| P11 | `studio-table.webp` | the planning studio: three planners (diverse, 30s–50s) around a long pale-timber table with blank maps and printed photographs, tall windows, plants | 3:2, 1800×1200 | Home §9 · Planners head | ✔ |
| P12 | `vineyard-lane.webp` | an anniversary couple (50s) walking hand in hand down a vineyard lane in early autumn, seen from behind, leaves blurred in the foreground | 2.4:1, 2000×834 | About head · Sample trips band · Destinations band | |
| P13 | `veranda-tea.webp` | a couple on a guesthouse veranda with tea, reading a printed itinerary with no visible text, garden greenery, leaf blur | 3:2, 1800×1200 | Questions head · How it works S2 (left, 0.79 crop) · Planners S2 (left, 0.79 crop) | |
| P14 | `island-airstrip.webp` | a couple with two soft bags walking across a tiny island airstrip toward a small propeller plane, grass and pale sky, seen from behind | 1.78:1, 2000×1124 | Sample trips head · How it works S2 (right) · About S2 (right) | |
| P15 | `canal-bikes.webp` | a couple cycling side by side along a quiet tree-lined canal in the morning, foreground leaves | 0.79:1, 1264×1600 | Destinations head | |
| P16 | `studio-door.webp` | the studio entrance on a quiet street: a pale green door, a planner (woman, 40s) holding it open, a potted olive tree, morning light | 4:5, 1280×1600 | Planning call head · About S2 (left, 0.79 crop) | |
| P17 | `travel-folder.webp` | on white linen: a plain fabric travel folder, two brass keys, a pressed leaf and a pencil, soft window light, top-down | 3:2, 1800×1200 | Letter head · Journal / archive / 404 fallback | |
Per-page check: no image repeats on any page; the map below is authoritative.

**Per-page image map (authoritative):**
| Page | Images (in order) |
|---|---|
| Home | P01, P02, P03, P04, P05, P06, P07, P08, P09, P10, P11 |
| Questions | P13 (head), P05, P07 (S3), P09 (band) |
| Sample trips | P14 (head), P05, P06, P07, P08 (S3), P12 (band) |
| Destinations | P15 (head), P02 + P03 (S2), P05, P06, P07, P08 (S3), P12 (band) |
| How it works | P10 (head), P13 + P14 (S2), P09 (band) |
| Prices | P04 (head), P06, P08 (S3) |
| About | P12 (head), P16 + P14 (S2) |
| Planners | P11 (head), P13 + P02 (S2) |
| Planning call | P16 (head) |
| The Route Letter | P17 (head) |
| Journal / archive / 404 | P17 fallback; posts P04, P05, P08 |
(S2 left images are cropped to 0.79 and right images to 1.78 with `object-fit: cover` and per-image `object-position`; the generated ratios above are the default crops.)

---

## 11. Forms (form contract v1: `steps/form-contract-v1` exists)

Copy `pipeline/assets/forms/shippress-forms.php` unchanged to `inc/`, its CSS and editor JS unchanged to `assets/`; `require` it in functions.php. Patterns stay literal block markup with a small PHP island for `shippress_form_slot`. **No form in the home first screen** (the S1 foot and header cells are links only); **no `sp-reveal` on any form or its wrapper**.
- **Planning call (`planning-call`; the contact page and the only booking page)**: ch. "book your call", left-aligned column max 640px on **white**: `shippress_form_slot( kind: contact, fallback: … )`. Fallback = buffered literal mailto button **"Email us to book a call"** (`wp-element-button`, href `mailto:hello@futari-journeys.example?subject=<forms_contact_subject>`), with the sentence (`forms_contact_note`) "Opens your email app. Tell us your names, the occasion, rough dates and two times that suit you for a call." Never links to `/planning-call/` itself. Recommended CF7 fields (documented in readme; the theme does not create them): your names*, email*, phone, occasion (select: honeymoon / anniversary / surprise / other)*, rough dates or month*, nights (select: 2–4 / 5–7 / 8–16 / 17–30 / not sure)*, budget for two (select: under €4,000 / €4,000–8,000 / €8,000–14,000 / over €14,000 / not sure), preferred call times* (text), your questions (textarea), consent checkbox* ("Futari Journeys may contact me about this request"), submit "Request a planning call". Home, Prices, How it works and the book band only **link** to `/planning-call/` (no second contact slot).
- **The Route Letter (`letter`, newsletter, standalone)**: ch. "subscribe" on an **ink panel** `#222222`, radius 0, padding 64px, text `#FFFFFF`: `shippress_form_slot( kind: newsletter, email: hello@futari-journeys.example, label: forms_email, submit: forms_subscribe, notice: forms_mail_notice, subject: forms_mail_subject )`.
- **Home §11 `letter`**: the same newsletter slot on **white** (light ground). Footer: a link to `/letter/` only (no second slot).
- Plugin order (shared helper): newsletter MailPoet (explicit id) → MC4WP; CF7 / WPForms only with an explicit dedicated newsletter id. Contact: CF7 → WPForms. Without plugins: the newsletter shows a required `type=email` field + submit (native mailto POST with the entered address) and the notice; the contact page shows the mailto button.
- **Fields and states to style** (scoped to CF7, WPForms, MailPoet, MC4WP, Jetpack, `.wp-block-form` classes and `.sp-newsletter-fallback`; no global input selectors): input (text, email, tel, date), textarea, select, checkbox / radio (`accent-color`), label, required marker, submit, focus-visible, disabled, error message + error border, success panel.
- **Tokens** (style.css, mapped to theme.json presets):
  - light (white / band): `--sp-form-accent: var(--wp--preset--color--moss-deep)` #3F5236; `--sp-form-on-accent: var(--wp--preset--color--paper)` #FFFFFF; `--sp-form-radius: 0` (T(d)); `--sp-form-focus: var(--wp--preset--color--moss-deep)` (2px outline, offset 2px); `--sp-form-surface: #FFFFFF` on band / `#F2F4EF` on white; `--sp-form-text: #222222`; inputs 1px `#C9CFC3` border, 48px tall, Public Sans 1rem; labels Manrope 600 .75rem uppercase ls .12em `#5E6B57` (normal case in zh-TW / ja); submit filled moss-deep, Public Sans 600 .875rem ls .06em, hover `#222222`; error text + border `#A23B3B`; success panel `#E6EEE2` with text `#2F6B45`.
  - dark (`.fj-dark`: ink panel, book band, footer): `--sp-form-surface: #2E2E2E`; `--sp-form-text: #FFFFFF`; `--sp-form-accent: #FFFFFF`; `--sp-form-on-accent: #222222`; `--sp-form-focus: #A9C29A` (moss lightened, 9:1 on ink); borders `rgba(255,255,255,.45)`; labels `#E9ECE6`; error `#F2B8B0`; success `#BFDDB0`.
- **i18n semantic keys** in `inc/i18n/en.php` (extract with `L10N_SEMANTIC=1`; all five locales rewritten locally, not literally translated): `forms_email` "Email address", `forms_subscribe` "Send me the Route Letter", `forms_mail_notice` "This opens your email app. Send the message to subscribe; you are not subscribed yet.", `forms_mail_subject` "Subscribe to The Route Letter", `forms_contact_subject` "Planning call request", `contact_email` "Email us to book a call", `forms_contact_note` (sentence above). Five-language copy needed for every label, button, notice, subject and the fallback sentence (en, zh-TW, ja, fr, de); check rendered output in each locale.
- Validation: `form-check.py`, five-locale `form-runtime-check.php`, `repo-gates.sh forms`; real CF7 at 390px and desktop on light (Planning call, home §11) and dark (Letter panel) grounds; never submit.

---

## 12. Similarity table (target ≈80%; values from reference-tokens.md)

| Dimension | Reference value (token) | Futari Journeys value |
|---|---|---|
| Ground | #FFFFFF ~62% (T(a)) | #FFFFFF ~60% |
| Pale band | #F4F5F8 ~24% (T(a)) | #F2F4EF ~24% (moss-tinted, same L) |
| Ink / footer | #222222 ~8%, footer band #222222 (T(a)) | #222222 ~8%, footer + book band #222222 |
| Accent | gold #B89A65 ~3%, slate #7E8E9C ~2% (T(a)); arluis espresso #48322A button | moss #769164 ~5%, deep moss #3F5236 ~3% (CTA) |
| Hairline | #E2E2E2 1px (T(d)) | #E2E2E2 1px; rules #C9CFC3 |
| First-screen saturated share | 1.4% / 7.8% (T(a)) | ≤12% target, 15% cap |
| Body type | 16px / 1.8, ls .05em, gothic (T(b)) | Public Sans 16px / 1.8, ls .04em |
| Headings | serif h1/h2 30px, lh 1.6–1.75, ls .08–.14em; card h3 sans 20 / 26 w600 (T(b)) | Manrope h2 36px / 1.45 ls .08em; S2 statements 36 / 1.6; h3 20 / 26 w600 ls .04em; h1 72px (rule ≥4.25rem) |
| Eyebrow | 11–12px caps ls .15em + 1px × 76px rule (T(b), T(f)) | Manrope 11px caps ls .15em + 1px × 76px rule |
| Content column | 1100px; section padding-bottom 150px (T(c)) | 1100px; 150px bottom / 120px top |
| Hero | inset 16px, 1173×704, 78% of the first screen (T(c), T(e)) | inset 16px, 1408×584, 65% (the lower 35% holds the h1 and lead) |
| Hero foot | arluis: three links, 1px × 78px dividers, white fade 0→100% over 160px, 22px circle arrows (T(f)) | three questions, 1px × 78px dividers, white fade over 170px, 22px deep-moss discs |
| Dropping line | 1px × 45px from the lockup (T(f)) | 1px × 45px #769164 from the seam and above S2 statements |
| Concept pair | 326×413 (0.79) + 734×413 (1.78), tops aligned, gap 29, band starts 120px below tops, text 55/45 (T(c), T(e), T(f)) | 0.79 + 1.78, tops aligned, gap 29, band at +120px, text 55/45 |
| Plan cards | 518×303 (1.71), gap 54, white sheet 466 wide overlapping 60px, inset 52px, shadow 0 10 40 rgba(0,0,0,.08), ink chip 12px bold bottom-right (T(d), T(e)) | 1.71, gap 54, sheet overlap 60 / inset 52, same shadow, ink chip 12px bold on the right edge above the sheet |
| Section label | arluis "— label —" 24px dashes (T(f)) | dash label, 24px × 1px dashes |
| Radius / shadow | 0 everywhere; one soft card shadow (T(d)) | 0 everywhere; shadow only on S3 sheets |
| Buttons | gold / espresso filled, square (T(a), T(d)) | deep moss filled, square |
| Reveal | fade-up 30px, 1s ease, once (T(g)) | `sp-reveal--up` 30px, 1s ease |
| Image reveal | mask shutter 500 + 300ms easeInOutCubic (T(g)) | `sp-reveal--wipe` .8s cubic-bezier(.645,.045,.355,1) |
| Hover | all .4s cubic-bezier(.215,.61,.355,1) (T(g)) | same |
| Parallax | none on the reference (T(g)) | `sp-parallax` 8% hero, 10% road band (mobile 6%) — pipeline requirement |
| Imagery | documentary colour photos of couples travelling, natural light, muted greens, leaf blur (T(e)) | same type and treatment, our own photographs |

---

## 13. Home acceptance checklist (stage 1)

1. 1440×900 first screen shows: the **16px white frame** around the inset P01 (planner spreading a no-lettering route map, couple pointing at an island, foreground leaves); the photo **dissolving into white** at its foot with the **three question columns** (1px × 78px hairlines, 22px deep-moss discs); the ink chip "Map table · Valmere studio" on the right edge; the over-photo header (white wordmark left, one 5-link nav, white "The questions" + deep-moss "Book a planning call" cells); below the seam the eyebrow + 76px rule, the **h1 at 4.5rem** on the left, and on the right the **1px × 45px moss line dropping from the seam**, sub-line, lead and one button. No form, table or search in the hero.
2. 390×844: header in flow; 8px frame; photo 52svh with no text on it; h1 2.625rem, sub-line, lead, button; then the S1 questions as stacked rows; no chip, no vertical text, no absolute labels, no overlap; `scrollWidth == innerWidth`.
3. §3 S2: centred two-line statement, drop line, P02 (0.79) + P03 (1.78) tops aligned with 29px gap, pale band edge crossing both 120px below their tops, 55/45 text on the band with 3 narrative ¶.
4. §4 `#budget`: head with eyebrow rule, P04 + 3 details, then the **6-row price table full width at ≥782**, fees `nowrap` right, not clipped at 800 / 1280, stacked < 782; fees match §9 (free / €290 / €450 / €780 / €1,150 / +€120).
5. §5 `#timing` on the band: 2 Q&As, dash label, **4 S3 cards** (1.71 photos, white sheet overlapping 60px inset 52px with the soft shadow, ink chip on the right edge) with the §9 facts.
6. §6 P09 road band in the 16px frame with visible parallax and the white "Question 03" tab (static); §7 4 ruled document rows; §8 5-row ruled process list + P10; §9 P11 + 3 planner rows; §10 ink book band with one button; §11 newsletter slot (email + submit + notice without plugins); ink footer.
7. 11 unique images on home (≥8); 0 cut-outs; every image Read-checked (no lettering on maps).
8. ≥250 English words (target ≈640) and ≥3 narrative ¶ of ≥20 words; all numbers identical to §9.
9. Effects: fade-up (+stagger), wipe and parallax only; no reveal in the hero, S1 foot, forms, price table or book band; `check-parallax.mjs` passes desktop + mobile; reduced motion / `?sp-static` show the final state; the hero settle is off under reduced motion / `?sp-static`.
10. First-screen saturated share ≤12% (cap 15%); largest theme.json size 4.5rem; fonts via theme.json fontFace (Manrope, Public Sans, Noto Sans TC / JP); editor matches front end.
11. Exactly one top menu; radius 0 everywhere; the only shadow is on S3 sheets; eyebrow + 76px rule on every section head.
12. auto-gates `1 1` pass for en; `pattern_source.py` passes; `form-check.py` passes.
