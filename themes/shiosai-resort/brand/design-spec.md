# Shiosai Resort — design spec (stage 1, design director)

Type: **hospitality** (category travel-stays; WooCommerce-compatible but not required, the site works fully without it). Industry: a family seaside resort hotel with beachfront rooms and summer packages, selling direct instead of through OTAs.
Primary reference: **https://www.carpediemsantorini.com/** (Carpe Diem, boutique resort; full-bleed sea photograph, thin lowercase display type, docked booking bar, fixed chapter pager, paper chapters). Secondary: **https://mangrovehotel.com.au/** (Mangrove Hotel, bayside resort; wide room photographs with prev / next room names and a View | Book pair).
Tokens: `brand/reference-tokens.md`, cited as **T(a)…T(g)**. Screens: `ref/cdm-first.png`, `ref/scroll-cdm-900/1800/2700/3600.png`, `ref/mgv-first.png`, `ref/scroll-mgv-900/1800/2700/3600.png`.
**Imagery: photo** (stage-a IMAGERY = photo). One real-photography STYLE string, **high-key film grain** (§10), as in the reference (colour-graded travel photography with figures at the water's edge). 0 cut-outs.
Font direction: **sans**. Latin display **Figtree**, Latin body **Nunito Sans**; zh-TW / ja headings **Noto Sans TC / Noto Sans JP** (gothic), body on system sans stacks. No serif anywhere (the reference's Ogg serif body and serif roman numerals become Figtree; see §6).
Similarity target: about **80%** to the reference in palette relationships, image treatment, motion, decoration and layout rhythm. Photographs, copy and logo are all ours.
Header: exactly one top menu (`core/navigation`). Row page structure: **booking-led**: every chapter ends on the single way to check dates; the header's ink cell, the hero bar's ink cell and the closing band all go to `/check-dates/`.
Class prefix: `ss-`. Pattern slugs `shiosai-resort/<name>`.

---

## 1. Signature techniques (3, obvious at a glance, none may be softened)

Stage-a candidates A, B, C are the three signatures. D (scale-settle of wide photos) is motion support (§7).

### S1 (A): Beach-flag info bar docked across the hero foot
- **Source**: carpediemsantorini.com first screen (`ref/cdm-first.png`, T(c), T(f)). A **white bar 1100px wide, ~100px tall, centred**, sits on the photo's lower edge. It has **four cells split by 1px verticals**: guests / check-in / check-out (small uppercase serif label over a 22px value with a calendar glyph) and a **solid black "BOOK NOW" cell** at the right. No shadow, no radius. It is the strongest graphic shape on the first screen: a crisp white rectangle against a saturated photo.
- **Ours** (home §2; inner page heads on 6 pages): `ss-flagbar`, a Group (flex row) placed **directly after the hero Cover** with `margin-top: -50px` and `position: relative; z-index: 2`, so it **overlaps the hero foot by 50px** and the other 50px rests on the paper. Width **1100px** (`max-width: calc(100% - 48px)`), height **100px**, ground `#FFFFFF`, **radius 0, no shadow**, cells divided by **1px `#D5E2E7`** verticals. Cells (left → right, widths 26 / 26 / 26 / 22%):
  1. eyebrow "BEACH FLAG" + value "● green · lifeguards 09:00–18:00" (the dot is a 10px inline SVG circle `#6E9F7C`, 8px before the words)
  2. eyebrow "TIDE AND SEA" + value "low tide 06:42 · sea 21 °C"
  3. eyebrow "KIDS' CLUB" + value "09:00–16:00 · ages 4–12"
  4. **ink cell** `#23414D`, full height, value "check dates →" in `#F4F8F9`, the whole cell is a link to `/check-dates/`.
  Eyebrow: Nunito Sans 600 .6875rem (11px), uppercase, ls .12em, `#5B6E76`, 6px above the value. Value: Figtree 400 1.25rem (20px), lowercase, `#1F2F36`. Cell padding 0 28px, content vertically centred. **Not a form** (no inputs, no date pickers): these are links and text only, editable in the editor.
- **Must not soften**: the bar is **white, square-cornered, 1100px, centred** and **physically overlaps the photo by 50px** (not sitting below it, not floating inside it); **four cells** with **1px verticals**; the last cell is a **solid ink block** (not an outlined button, not sea-blue); no shadow, no blur, no translucency.

### S2 (B): Tide-gauge chapter pager, fixed at the left edge
- **Source**: carpediemsantorini.com fixed pager (`ref/cdm-first.png`, `ref/scroll-cdm-900.png`, `ref/scroll-cdm-2700.png`, T(c), T(f)). At **x 37**, from **y 280 to 620**: a small uppercase label **rotated 90°** ("WELCOME", "LUXURY SUITES") above **6 dots (5px) every 41px**, with a **1px vertical line** joining the passed dots to the current one. It stays put while every chapter scrolls past, on photos and paper alike.
- **Ours** (home; inner pages Rooms, Summer Packages, The Beach, Families, About): `ss-pager`, a Group with `position: fixed; left: 24px; top: 50%; transform: translateY(-50%); z-index: 5`, **shown only ≥1280px** (`display: none` below). It is **not a navigation block** (not a second menu): a Group with `aria-label="Chapters"` holding:
  - the **label stack**: 6 paragraphs absolutely stacked in one 16×140px box above the gauge, each `writing-mode: vertical-rl; transform: rotate(180deg)`, Nunito Sans 600 .6875rem uppercase ls .14em `#1F2F36` ("WELCOME", "ROOMS", "THE WEEK", "PACKAGES", "THE BEACH", "CHECK DATES" on home). Only one is visible at a time (see active state).
  - the **gauge**: 6 links (`<a href="#welcome">` … `#check-dates`), each a **6px dot** (`border-radius: 50%`, `#9FB4BC`) with the chapter name as **visually-hidden link text in the markup** (no CSS `content`). Pitch **41px** (T(c)). Behind them a **1px hairline `#9FB4BC`** runs the full gauge height, with a **4px horizontal tick** to the right of each dot (the "tide marks" that make it ours). The active dot is **filled `#84B9CB` at 8px** with a 1px `#23414D` ring.
  - **Active state, no scroll listener**: progressive enhancement in pure CSS: each home chapter Group has `view-timeline-name: --ss-ch1 … --ss-ch6` and `<body>` gets `timeline-scope: --ss-ch1, …, --ss-ch6`; each dot and each label runs a 2-keyframe opacity/colour animation on its chapter's timeline, `animation-range: entry 40% exit 40%`, wrapped in `@supports (animation-timeline: view())`. Fallback (no support, `?sp-static`, reduced motion, editor): the **first dot is filled and the first label shows**; links still jump to the anchors. This is CSS only, not sp-scroll, and contains no transform or movement, so it does not touch the motion gates.
  - Pager colours read on our high-key photos and on paper; no backdrop panel.
- **Must not soften**: **fixed** (not sticky inside one section), at the **left edge x 24**, **rotated uppercase label + 6 dots on a 1px hairline**, visible on the home first screen at 1440×900 over the photo; never moved to the right or bottom, never turned into numbers or a progress bar.

### S3 (C): Roman-numeral 2×2 "week at the water" grid with sea-tint marker phrases
- **Source**: carpediemsantorini.com chapter I facts (`ref/scroll-cdm-2700.png`, T(c), T(f)). Left: a large photo (a 436px circle with a 168px blush disc overlapping its top-right). Right: a **2×2 grid**, ~40px column gap, ~64px row gap. Each cell starts with a **serif roman numeral (I–IV, 24px) hanging in its own narrow column** to the left, then an **uppercase small eyebrow** ("DISCOVER STUNNING"), a **lowercase-ish 24px sans title** ("270° panoramic views") and a short paragraph in which **2–4 words carry a grey highlighter band**. A **1px hairline** runs under each top-row cell. An outlined 2px button sits under the grid ("DISCOVER OUR SUITES").
- **Ours** (home §5 "a week at the water"; inner pages Summer Packages, The Beach, Families, Dining, About): `ss-week`, Columns 5/12 + 7/12 (gap 64px).
  - Left: `figure > img` **P08** at **4:5**, radius 0, with the **apricot disc** `ss-disc`: a 136px circle `#F2C9B4` overlapping the photo's top-right corner by half (top −48px, right −48px), holding a centred paragraph "kids' club<br>included" (Figtree 500 .8125rem lowercase `#1F2F36`). The disc is a Group with `border-radius: 50%`, not an image (T(d) blush disc, ours smaller).
  - Right: a 2×2 grid (`ss-week__grid`, CSS grid 2 cols, column gap **40px**, row gap **64px**). Each cell: a 2-column inner grid `56px | 1fr`: numeral "I"–"IV" in **Figtree 300 1.75rem** `#23414D` (ours is sans, row direction) aligned to the eyebrow's cap height; then eyebrow (Nunito Sans 600 .75rem uppercase ls .12em `#5B6E76`), title (**Figtree 400 1.5rem / 1.3, lowercase**, `#1F2F36`), 18px gap, ¶ (Nunito Sans 400 1rem / 1.7, ≈28 words) with **one `<mark class="ss-mark">` of 2–4 words**. Top-row cells have `border-bottom: 1px solid #D5E2E7; padding-bottom: 48px`. Under the grid, in the right column: the **outlined button** "see the summer week" (2px `#23414D` border, radius 2px, padding 10px 28px, Nunito Sans 600 .8125rem uppercase ls .1em; T(d)).
  - `ss-mark`: `background: linear-gradient(transparent 55%, rgba(132,185,203,.38) 55%)`, `padding: 0 2px`, colour inherits (the reference's grey band becomes sea tint; same low-under position).
  - Home cells: I "MORNING" / "a lifeguard on the sand by nine" · II "MIDDAY" / "the kids' club under the awning" · III "AFTERNOON" / "swimming lessons in the shallows" · IV "EVENING" / "dinner on the terrace at six".
- **Must not soften**: **roman numerals I–IV in their own hanging column**; **exactly 2×2** at ≥1024 (never 4 in a row, never cards or boxes); **hairlines under the top row**; **one marker phrase per cell** in sea tint; the disc overlaps the photo corner; lowercase titles.

### Supporting decoration (always on)
- **Film grain** on photographs is in the images themselves (STYLE §10); no CSS noise layer.
- **Chapter heads** (T(b)): centred eyebrow "chapter. ii" (Nunito Sans 400 .875rem, ls .08em, lowercase), a **thin lowercase h2** (Figtree 300 **4.25rem** / 1.12, ls −.01em), and an **uppercase two-line sub** (Nunito Sans 400 .9375rem, ls .1em, max 460px, centred). Every home chapter and every inner chapter uses this head.
- **Wide 2.5:1 photos that start at x 74 and bleed off the right edge** (`ref/scroll-cdm-1800.png`): `ss-wide`, `margin-left: 74px; margin-right: 0`, 2.5:1. Used on home §4 and §8 and as the band on inner pages.
- Hairlines `1px #D5E2E7`; no shadows anywhere; radius 0 on photos and bars, 2px on outlined buttons only.

### Continuation on inner pages (signatures on ≥4 inner pages; here S1 on 6, S2 on 5, S3 on 5)
Every inner page uses the **inner page head** `shiosai-resort/page-head`: header in flow (white), then a Cover **62svh** (min 420, max 640) with the page's head photo (§4) and **no text on it** (the photos are high-key; the title goes on the paper below). Directly after the Cover comes a **page flag bar** (S1 shape: white, 1100px, −50px overlap, 4 cells, last cell ink "check dates →") with that page's own facts. Then the centred chapter head with the h1 (thin lowercase 4.25rem) and the lead.
| Page | S1 page flag bar (cells 1–3 + ink cell) | S2 pager (labels) | S3 roman 2×2 | Wide band (`ss-wide`, parallax) |
|---|---|---|---|---|
| Rooms (`rooms`) | 48 rooms · 4 types · every room faces the sea · check dates → | ROOMS / DUNE / SEA-FACING / FAMILY / TERRACE / ASK | — (rooms use the sticky-media list) | P13 |
| Summer Packages (`packages`) | season 1 Jun – 15 Sep · 3 or 7 nights · half board included · check dates → | PACKAGES / SUMMER WEEK / LONG WEEKEND / WHAT'S IN / PRICES / ASK | **I–IV "what the summer week includes"** (rooms · half board · kids' club · lessons) | P10 |
| The Beach (`beach`) | lifeguards 09:00–18:00 · 400 m of sand · flags explained · check dates → | THE BEACH / FLAGS / TIDES / LESSONS / RULES / ASK | **I–IV flags and tides** (green · yellow · red · tide pools) | P17 |
| Families (`families`) | kids' club 4–12 · cots free · babysitting €18/h · check dates → | FAMILIES / CLUB / BABIES / LESSONS / EVENINGS / ASK | **I–IV by age** (0–3 · 4–7 · 8–12 · teens) | P12 |
| Dining (`dining`) | breakfast 07:00–10:30 · dinner 18:00–21:30 · children's menu · check dates → | — | **I–IV meals** (breakfast · beach lunch · children's tea · terrace dinner) | P11 |
| About (`about`) | since 1964 · second generation · Port Merrow · check dates → | ABOUT / 1964 / 1991 / 2012 / THE DAY / PEOPLE | **I–IV milestones** (1964 · 1991 · 2012 · today) | P02 |
| People, Visit, Check dates, The Tide Letter | no flag bar (plain page head: chapter head on paper + `ss-wide` band) | — | — | P16 / P17 / P14 / P09 |

---

## Key visual concept

**(1) Reference first screen, story and signature motion.** Carpe Diem opens on a **full-bleed, 100svh photograph of the sea meeting an infinity pool** (`ref/cdm-first.png`). Two people are **at the water's edge, both turned away or in profile**: a man in white at the left holding a **white towel** that catches the wind, a woman resting her arms on the pool edge at the right, both looking out to the horizon. Across the middle runs a **very thin lowercase headline**, "escape the ordinary" (~78px, extra-light geometric sans), with a small uppercase serif line under it. A **white booking bar** cuts across the foot. A **fixed pager** with a rotated "WELCOME" label sits at the left edge. The header is a white strip of cells: menu at the left, wordmark centred, a pale language cell and a **black "BOOK NOW" cell** at the right. **Story:** *you have already arrived; the water is right here and nothing needs to happen.* **Signature motion:** the hero slides cross-fade slowly (6s); chapter photos **settle from scale 1.08 to 1 over 1.7s**; wide images **move at a different speed from the page** (translateY 16% → 0); the pager's active dot follows the chapters.

**(2) Our translation: a family seaside resort.** The same full-bleed, 100svh film-grain photograph shows **the beach right below the hotel at 07:30**. On the wet sand of the **morning tide line**, a **lifeguard in a pale red-and-white top walks away along the water's edge** carrying a folded flag on a pole (the white towel's counterpart: one light-catching cloth in the hand). Nearer the camera, at the right, a **child (about six, back turned) carries a small bucket** toward the shallows. Above and behind them, filling the top third, are the hotel's **white terrace railings and sea-facing balconies** with linen chairs. The sea is pale aqua, the sky almost white. Same image type: one colour-graded documentary photograph, figures from behind at the water's edge, the horizon running across the frame. Same position: full bleed, figures on the left and right thirds with the headline between them. Same story, made ours: *the family is already here; the first swim is a few steps from the room, and someone is already watching the water.* Same motion concept: the hero photo **settles from 1.08 to 1** on load (CSS, 1.7s, the reference curve) and **drifts slower than the page** (`sp-parallax`); the white flag bar replaces the booking bar; the tide-gauge pager follows the chapters. The thin lowercase headline reads **"by the water, all week"**.

**(3) KV checklist** (all six are built in the home first screen at 1440×900 and visible without scrolling):
| # | Reference element | Our counterpart | Position (1440×900) | Motion | Image |
|---|---|---|---|---|---|
| 1 | Full-bleed sea photo, two figures at the water's edge seen from behind, white towel | Cover `ss-hero sp-parallax`, 100svh: lifeguard with folded flag walking the morning tide line (left third), child with a bucket (right third), white terrace and balconies above; film grain; overlay `#1F2F36` at **12%** (only to carry white type) | x 0–1440, y 0–900; lifeguard x ≈ 260–420, child x ≈ 980–1080, terrace y 0–300 | load: `ss-settle` scale 1.08 → 1, 1.7s `cubic-bezier(.16,.01,.77,1)` (CSS keyframe on the Cover image, disabled under reduced motion / `?sp-static` / editor); scroll: `sp-parallax --sp-par: 8%` | **P01** |
| 2 | Thin lowercase headline "escape the ordinary" + small uppercase line | h1 "by the water, all week" **Figtree 300 4.875rem (78px)** / 1.05, ls −.015em, `#FFFFFF`, text-shadow none; under it (18px) "A FAMILY RESORT ON THE MERROW COAST, SINCE 1964" Nunito Sans 400 .9375rem uppercase ls .14em `rgba(255,255,255,.9)` | **centred** on the horizon line, baseline y ≈ 430 (as the reference, between the two figures) | none (hero gets no reveal) | — |
| 3 | White booking bar docked on the hero foot, black BOOK NOW cell | **S1 beach-flag bar**: white 1100×100, 4 cells (flag · tide and sea · kids' club · ink "check dates →") | x 170–1270, y 850–950 (50px over the photo, 50px on paper; the top half is inside the 900 first screen) | none (static) | — |
| 4 | Header of cells: MENU left / centred wordmark / pale language cell / black BOOK NOW cell | Header `ss-header--over` 88px, transparent over the photo: wordmark "shiosai" (Figtree 300 1.75rem lowercase, white) **centred**; one `core/navigation` at the left ("rooms · packages · the beach · families · dining", Nunito Sans 600 .8125rem uppercase ls .1em, white); at the right two **full-height cells**: pale `#DCE6E9` cell (140px) with "open 1 apr – 31 oct" (`#1F2F36`, Figtree 400 .875rem) and **ink `#23414D` cell** (140px) "check dates" (`#F4F8F9`), linking to `/check-dates/` | y 0–88; nav x 32–620, wordmark centred x 720, cells x 1160–1440 | none (header is absolute on home and scrolls away; no scroll listener) | — |
| 5 | Fixed left pager, rotated "WELCOME", 6 dots | **S2 tide-gauge pager** (label "WELCOME", 6 dots with tide ticks, first dot filled sea) | fixed x 24, y 280–620 | active dot via CSS view timelines (§1 S2); static fallback | — |
| 6 | Pale language cell carrying the season note, and the top "seasonal" strip | the pale cell "open 1 apr – 31 oct" in the header (KV #4) plus the bar's flag cell: the resort's season and today's beach are the first facts the guest reads | header right, bar cell 1 | none | — |
"Adapted, not copied" here means we do not copy the reference's photograph, wording or logo. The scene (figures at the water's edge seen from behind, one light cloth in a hand, a thin lowercase line on the horizon, a white bar on the foot, a fixed pager) is kept.

---

## 3. Home page: block order

Grid: content max **1200px** centred (desktop gutters ≥120px at 1440 so the pager at x 24 never touches content); centred text measure **640px** (T(c) 640–670). Paper sections: padding **135px top / 135px bottom** (T(c) padding-bottom 135; mobile 80 / 80). Body copy ≈ 620 English words; narrative paragraphs ¶ (≥3 of ≥20 words) are in §3 (3), §4 (1 per room), §7 (1) and §9 (1).
Chapter anchors (pager): `#welcome` (§3), `#rooms` (§4), `#the-week` (§5), `#packages` (§6–7), `#the-beach` (§8), `#check-dates` (§10).

| # | Block (pattern slug) | Purpose | Layout | Photo(s) | Copy | Motion |
|---|---|---|---|---|---|---|
| 1 | Header (part `header-over` on home; `header` elsewhere) | brand + the one menu + the ink cell | KV #4. Inner pages: same layout in flow on white `#FFFFFF`, text `#1F2F36`, 1px `#D5E2E7` bottom rule, `position: sticky; top: 0` (white is constant, no listener needed) | — | wordmark, 5 links, 2 cells | none |
| 2 | `hero` + `flagbar` | **KV** (§2) | Cover 100svh + S1 bar overlapping its foot; pager (part `pager-home`) placed in the front-page template | P01 | h1 + 1 line + 4 cells | settle + parallax 8% |
| 3 | `welcome` | **narrative**: who we are | paper `#F4F8F9`; padding 150 top (room for the bar) / 135; **centred** like `ref/scroll-cdm-900.png`: eyebrow "PORT MERROW · SINCE 1964" (Nunito Sans 600 .8125rem uppercase ls .12em, `#1F2F36`), then one lead line (Figtree 300 1.5rem) "A family resort on 400 metres of sand, with one way to check dates." with "400 metres of sand" in `ss-mark`; then **3 centred ¶** at 640px (≈55 / 50 / 45 words: the family-run house since 1964; every one of 48 rooms faces the sea; the lifeguards, the kids' club and the terrace kitchen run all season), 40px between ¶ | — (text only, as the reference) | ≈170 words | ¶ group `sp-reveal sp-reveal--up` |
| 4 | `rooms` (**sticky-media**, archetype; Mangrove room showcase) | **rooms facing the sea** | chapter head "chapter. i" / h2 "rooms facing the sea" / sub "FOUR KINDS OF ROOM, FORTY-EIGHT IN ALL, EVERY ONE ON THE WATER". Then `ss-wide` **P02** (2.5:1, x 74 → right edge, balcony view at dawn). Then the **sticky-media list**, Columns 6/12 + 6/12 (gap 64): **left**: `figure` **P03** 4:5 (`position: sticky; top: 120px`, the pinned photo: a child asleep on a sea-facing bed with the balcony door open) with a caption below (Nunito Sans .8125rem `#5B6E76`) "every room has a door to the sea air"; **right**: 4 room entries stacked, 96px apart, each Mangrove-style: a top row `PREV / dune room` … `sea-facing double / NEXT` (Nunito Sans 600 .6875rem uppercase ls .12em; current-neighbour names in `#9FB4BC`; links to the entry anchors), a 3:2 photo (**P04** Dune Room · **P05** Sea-Facing Double · **P06** Family Sea Room · **P07** Terrace Suite), title (Figtree 400 2rem lowercase), facts line "26 m² · sleeps 3 · from €185" (Nunito Sans 600 .875rem, tabular-nums, `#23414D`), ¶ ≈35 words, then the **VIEW &#124; BOOK pair** (two uppercase links .75rem ls .14em with a 1px × 14px `#9FB4BC` divider between; VIEW → `/rooms/#<room>`, BOOK → `/check-dates/`). Parent `overflow: clip` (not hidden) | P02, P03, P04, P05, P06, P07 | ≈180 words | `ss-wide` image `sp-reveal sp-reveal--zoom` (settle) + parallax (§7.2); each room entry `sp-reveal--up` (the sticky photo: none) |
| 5 | `week` (**S3**) | the week at the water (what a stay feels like) | `#the-week`; white ground `#FFFFFF`; chapter head "chapter. ii" / h2 "a week at the water" / sub "WHAT A SUMMER DAY HOLDS, FROM NINE TO SIX"; then S3 Columns: P08 4:5 + disc left, roman 2×2 right, outlined button "see the summer week" → `/packages/` | P08 | ≈130 words | grid `sp-stagger` + cells `sp-reveal--up`; photo none |
| 6 | `packages-wide` | pause + packages opener (**parallax** §7.2) | `#packages`; chapter head "chapter. iii" / h2 "summer packages" / sub "THREE OR SEVEN NIGHTS, HALF BOARD, THE CLUB INCLUDED"; then `ss-wide` band **P09** (2.5:1, x 74 → right edge; families under pale umbrellas at noon seen from the terrace), **no text on the photo** | P09 | — | `sp-parallax --sp-par: 10%` on the band Group; image settle `sp-reveal--zoom` on a **wrapper** inside (never on the parallax layer itself) |
| 7 | `prices` | the packages and the prices | paper `#F4F8F9`; Columns 5/12 + 7/12: left h3 "two packages, four rooms, one price list" (Figtree 400 2rem lowercase) + ¶ ≈50 words (what half board covers; children under 4 stay free; the price is per room per night unless marked) + link "how the packages work →"; right: **the price table, 7 items** (§9), **full width of its column at ≥782 and full container width at ≥1024 when stacked under** — see §8 for the hard rule; under it the note ¶ "Cots, high chairs and the kids' club are included in every room. Prices include taxes." | — | ≈80 words + table | text `sp-reveal--up`; **table: none** |
| 8 | `beach` (Mangrove wide + centred text) | **the beach and the lifeguards** | `#the-beach`; white ground; chapter head "chapter. iv" / h2 "the beach, watched all day" / sub "LIFEGUARDS 09:00–18:00 FROM 1 JUNE TO 15 SEPTEMBER"; then a **2:1 photo P10** (lifeguard tower with the flag at 09:00, a family arriving with towels) **centred at 1100px** (Mangrove T(e) 2:1, inset, not bleeding); under it, Mangrove room-title layout: centred h3 "green, yellow, red" (Figtree 400 2rem), ¶ ≈60 words (the flag is raised at 09:00 and changed through the day; the tide pools at low tide; swimming lessons in the shallows at 10:00 and 15:00), and a **ruled 3-row flag legend** (dot · flag · meaning: green "safe to swim, lifeguards on duty" · yellow "swim close to the flags only" · red "no swimming today"), then the pair "THE BEACH &#124; LESSONS" | P10 | ≈90 words | photo `sp-reveal--zoom` (settle); text `sp-reveal--up` |
| 9 | `families` (2-photo row) | kids' club and dining in one look | paper; Columns 7/12 + 5/12 aligned top: left **P11** 3:2 (kids' club under the striped awning, building a sand wall, a club leader kneeling); right **P12** 4:5 placed **96px lower** (breakfast on the terrace, a parent pouring juice); under each a caption row (uppercase eyebrow "THE CLUB, 09:00–16:00" / "THE TERRACE, FROM 07:00") + h3 lowercase + ¶ ≈40 words + link "families →" / "dining →" | P11, P12 | ≈90 words | both columns `sp-reveal--up` (`sp-stagger` on the row) |
| 10 | `check-dates-band` (part `checkband`) | **the single way to check dates** | `#check-dates`; ground **ink `#23414D`**, padding 135px 24px, centred: eyebrow "chapter. v" `#B7D3DD`, h2 "one way to check dates" (Figtree 300 4.25rem lowercase `#F4F8F9`), ¶ ≈45 words "Send the dates, the room and who is coming. Rafael or Ana answers within a day with a held offer for 48 hours; nothing is charged until you confirm. Prefer the phone? 08:00–20:00, every day of the season." (`rgba(244,248,249,.82)`), then an **outlined white button** "check dates" (2px `#F4F8F9`, radius 2px) → `/check-dates/` and a small line "+00 0000 0000 · stay@shiosai-resort.example" | — | ≈55 words | none |
| 11 | `letter` | newsletter (§11) | white ground; Columns 5/12 + 7/12: left h3 "the tide letter" (Figtree 300 2.5rem lowercase) + ¶ ≈30 words (one letter in March with the summer dates and one in late August with the autumn weeks; nothing else); right: newsletter `shippress_form_slot` (max 520px) | — | ≈35 words | **none** (form) |
| 12 | `journal` | latest 3 posts | paper; centred eyebrow "FROM THE BEACH" + 3 rows full width, each: date (Nunito Sans .8125rem tabular-nums) · category (uppercase .6875rem ls .12em) · title (Figtree 400 1.5rem lowercase) · "→"; 1px `#D5E2E7` rules; no thumbnails | — | titles | rows `sp-reveal--up` |
| 13 | Footer (part `footer`) | address, hours, links | ground `#1F2F36`, padding 96px 32px 40px, text `#DCE6E9`; 4 columns: wordmark "shiosai" (Figtree 300 2rem) + address · season and hours list · contact (phone, email, "check dates →") · paragraph links (About · People · Visit · The Tide Letter · Journal · Privacy; **not** a second navigation); © line .75rem `rgba(220,230,233,.6)` | — | | none |

**Home photo positions: 12 images, all different** (P01, P02, P03, P04, P05, P06, P07, P08, P09, P10, P11, P12); 8 or more are required.

### First-screen composition
- **Desktop 1440×900**: Cover `ss-hero sp-parallax` x 0–1440, y 0–900 (`min-height: 100svh`, min 640, max 1000), background P01 `object-position: 50% 60%`, overlay `#1F2F36` 12%. The terrace and balconies fill y 0–300 (pale, behind the white header text, which is why the overlay is 12%; raise to 18% if the nav fails 4.5:1 on the image, never more). Horizon at y ≈ 470.
  - Header (absolute, z 3) y 0–88 (KV #4).
  - h1 centred (Cover inner container flex column, `justify-content: center`), lines y ≈ 370–450, the uppercase line at y ≈ 480. Nothing else in the centre: no button, no play chip.
  - Lifeguard x ≈ 260–420 (left third), child x ≈ 980–1080 (right third), both below the headline (y ≈ 520–820).
  - Flag bar: x 170–1270, y 850–950 (top half visible in the first screen).
  - Pager: x 24, y 280–620, "WELCOME" + 6 dots.
- **1280–1439**: same; bar 1100px (still centred); nav gap shrinks to 20px.
- **1024–1279**: pager hidden; header nav shows 5 links at .75rem; the pale cell hides (season note moves into the footer and the Visit page only), the ink cell stays.
- **600–1023**: header: wordmark left (not centred), the ink cell right, `core/navigation` with `overlayMenu: "mobile"` hidden behind its toggle below 600 only; bar becomes **2×2** (ink cell bottom-right), width `calc(100% - 48px)`, still overlapping 50px.
- **Mobile 390×844**: header 64px in flow on white (wordmark "shiosai" left `#1F2F36`, menu toggle 44×44, ink cell "check dates" 112px wide at the right edge). Hero Cover **min-height 70svh** (≈ 590px) with the h1 at **2.75rem** (2 lines: "by the water," / "all week") and the uppercase line at .75rem, **centred by flex, not absolutely positioned**. P01 `object-position: 38% 60%` so the lifeguard stays in frame. The **flag bar follows the Cover in normal flow** with `margin-top: 0` (no overlap on mobile), full width, 2×2 cells 64px tall, ink cell bottom-right. **No pager, no rotated text, no absolutely positioned label, nothing overlapping text.** The first screen at 390×844 shows the header, the photo with the headline and the top row of the bar.

### Comparison with recent themes' home orders (must not match)
| Theme | Home order | Shiosai Resort difference |
|---|---|---|
| Koori Cold Stores | two-row header / crossfade dock hero with ring pager / room-log strip / "held" narrative / fading band + 3 fused cards / parallax dock band / booking / … / enquiry band | single still hero (no crossfade, no ring); our pager is a **fixed left tide gauge**, not inside the hero; no log strip; no cards fused with photos; centred paper chapters with thin lowercase heads |
| Katachi Ergonomics | hero with docked notice card (flush-left) / three abutting panels / intro statement / offset photo rows / parallax band / book | our docked element is a **centred 1100px four-cell bar** overlapping by 50px, not a flush-left card; no abutting panels; rooms are a sticky-media list, not offset rows |
| Noka Cheese | blur-to-focus hero / sticky statement / 2×3 style cards / choose steps / reserve + price list / journal / newsletter band | no blur, no cards, no steps row; the price list sits beside a text column after a 2.5:1 parallax band; the 2×2 roman grid is ours |
| Akane House | transparent header, full-bleed hero with info bar / narrative / four sittings / daily steps / letterbox band / menu / people / visit / reservation band / letter / journal | Akane: dark photo, small centred wordmark, slash heads at a 50% split, ragged tiles, text-free 3.8:1 letterbox. Ours: **high-key** photo, **78px thin lowercase** headline, **white bar overlapping** the foot, centred chapter heads "chapter. i", a **2.5:1 band bleeding off the right only** (starts at x 74), a fixed pager, a sticky-media room list and a roman 2×2 grid |
| **Shiosai Resort** | cell header + film-grain tide-line hero + overlapping beach-flag bar + fixed tide-gauge pager / centred welcome with marker / ch. i rooms: wide band + sticky photo + 4 prev/next room entries / ch. ii roman 2×2 with disc / ch. iii wide parallax band + price table / ch. iv 2:1 beach + flag legend / club + terrace offset pair / ink check-dates band / letter / journal rows / ink footer | |

---

## 4. Inner pages (11 pages + Journal + 3 posts)

Slugs are identical in all five locales. Every page uses the page head (§1 continuation) and the centred chapter heads.
| Page (slug) | Role | Key content |
|---|---|---|
| Rooms (`rooms`) | core: rooms facing the sea | head photo **P02**, flag bar. ch. i "four kinds of room": the **sticky-media list** (pinned P03; entries P04 Dune · P05 Sea-Facing Double · P06 Family Sea Room · P07 Terrace Suite, each with prev/next row, facts line, ¶ ≈60 words, **amenities ruled list** (bed set-up, bath, balcony, cot), VIEW &#124; BOOK). ch. ii "what every room has" (ruled 2-col list: sea-facing balcony or terrace · blackout curtains · fridge · cot and high chair on request · beach towels and a bucket set). ch. iii "the room prices" = price table rows 1–4. `ss-wide` band **P13** (parallax). Pager 6 labels. |
| Summer Packages (`packages`) | core: packages | head photo **P09**, flag bar. ch. i "the summer week" (7 nights, Saturday to Saturday, Family Sea Room, half board, kids' club, two swimming lessons per child; €2,390) · ch. ii "the long weekend" (3 nights Friday–Monday, Sea-Facing Double, half board for two, children add €18 per night for dinner; €840) · ch. iii **S3 roman 2×2** "what the summer week includes" with **P15** + disc "lessons included" · ch. iv full **price table, 7 items** · ch. v "how a held offer works" (ruled 4-row list = §9 booking flow). `ss-wide` band **P10**. Pager. |
| The Beach (`beach`) | core: beach, lifeguards, tides | head photo **P10**, flag bar. ch. i "the flags" **S3 roman 2×2** (I green · II yellow · III red · IV tide pools) with **P15** (swimming lesson) 4:5 + disc "lessons 10:00 & 15:00" · ch. ii "the lifeguards" (Aiyana Brooks's team of 4, the tower at the centre of the 400 m, 09:00–18:00 from 1 Jun to 15 Sep) · ch. iii "tides" (low tide moves about 50 minutes later each day; the tide table is printed at reception every morning) · ch. iv "beach rules" (ruled list, 5 rows). `ss-wide` band **P17** (the dune boardwalk at evening). Pager. |
| Families (`families`) | core: kids' club, babies, evenings | head photo **P11**, flag bar. ch. i **S3 roman 2×2 by age** (0–3 cots, bottle warmer, babysitting · 4–7 club mornings · 8–12 club + lessons + rock-pool walks · teens: kayaks with a guard, 14+) with **P14** 4:5 + disc "cots free" · ch. ii "the club day" (ruled timetable 09:00–16:00, 6 rows, nowrap times) · ch. iii "evenings" (children's tea 17:30, babysitting €18 per hour, book by 14:00) · `ss-wide` band **P12**. Pager. |
| Dining (`dining`) | services: terrace kitchen | head photo **P12**, flag bar. ch. i **S3 roman 2×2 meals** (I breakfast 07:00–10:30 · II beach lunch boxes €9 from 11:30 · III children's tea 17:30 · IV terrace dinner 18:00–21:30) with **P16** (terrace dinner at dusk) + disc "half board €38" · ch. ii "the kitchen" (Lena Vogt; local fish, the garden, allergies written on every dish card) · ch. iii half-board prices (price table row 7). `ss-wide` band **P11**. |
| About (`about`) | about | head photo **P13** (the hotel from the beach at dusk), flag bar. ch. i **S3 roman 2×2 milestones** (I 1964 the bathing pavilion · II 1991 the Lund family · III 2012 rebuilt with every room facing the sea · IV today, second generation) with **P17** + disc "since 1964" · ch. ii "a day at the resort" (the **daily routine** ¶ and ruled times: 06:30 beach raked · 07:00 breakfast · 09:00 flag up · 10:00 lessons · 15:00 check-in · 17:30 children's tea · 18:00 lifeguards off · 21:30 kitchen closes) · ch. iii link to People. `ss-wide` band **P02**. Pager. |
| People (`people`) | people | plain head + `ss-wide` band **P16**. **7 people** (§9) as ruled rows (name Figtree 400 1.5rem, names keep their capitals; role Nunito Sans 600 .75rem uppercase; 2 sentences each); no portraits, no team grid. |
| Visit (`visit`) | location | plain head + band **P17**. Address, by train to Port Merrow (12 min by the hotel shuttle, 4 runs a day), by car (62 parking spaces, €12 per day, 4 EV chargers), the season, reception 24 hours in season; **hours table** (stacks on mobile). |
| Check dates (`check-dates`) | contact / booking | plain head + band **P14** (arrival at reception: a family with a beach bag and a suitcase). ch. i "how it works" (ruled 4-row list = §9 booking flow) · ch. ii "send your dates" (**contact form slot + mailto fallback**, §11) · ch. iii "by phone" (08:00–20:00 in season; Rafael Ortiz and Ana Duarte). **No check-dates band on this page.** |
| The Tide Letter (`letter`) | newsletter | plain head + band **P09**. ch. i "what's in it" (2 letters a year: March with the summer dates and August with the autumn weeks; ruled list) · ch. ii "subscribe": newsletter slot on the **ink panel** (§11). |
| Privacy (`privacy`) | legal | plain text, no motion. |
| Journal (`journal`) | posts page (role `posts`, empty) | archive template: 3-col list with 3:2 featured images, centred chapter head "journal". |
| Posts (3 stories) | article | "The tide pools at 07:00" (Kwame Mensah's rock-pool walk; featured **P08**; category Stories `stories`; tags `families`, `tides`) · "Why the flag goes up at nine" (the lifeguards' morning; featured **P10**; category The Beach `the-beach`; tags `lifeguards`, `flags`) · "A Saturday-to-Saturday week" (one family's summer week, day by day; featured **P05**; category Stories `stories`; tags `packages`, `families`) |

theme-meta `pages` / demo `screens`: home → `/`, about → `/about/`, news → `/journal/`, article → first post, category → `/category/stories/`, tag → `/tag/families/`, newsletter → `/letter/`, contact → `/check-dates/`.
Top menu (the one `core/navigation`): **rooms · packages · the beach · families · dining** (5 items; the header's ink cell "check dates" is a separate link, not a second menu). Footer links: About · People · Visit · The Tide Letter · Journal · Privacy.
Templates: `front-page` (header-over + pager-home), `page`, `page-check-dates`, `page-letter` (or page), `single`, `archive`, `category`, `tag` (archive copy, label "Tag"), `home` (posts page), `404`, `search`. Inner pager parts: `pager-rooms`, `pager-packages`, `pager-beach`, `pager-families`, `pager-about` (inner chapter Groups carry the same `view-timeline-name` order).

---

## 5. Colour (T(a): pale paper ~85% after the hero, black/ink text and CTA cell, colour from photos, one tiny pastel disc)

Reference relationship: photo carries the colour; the page is a quiet paper; ink is near-black; the CTA cell is solid black; one blush disc is the only pastel. We keep every role. **Change of ground hue (reason)**: Carpe Diem's paper is warm #F7F2EE. Common rules forbid defaulting to beige/cream and the row palette is "pale sea blue" (sea family), so the paper is **cooled at the same lightness (±1% L)**. Black ink and the black CTA cell become deep sea-ink #23414D / #1F2F36 (−6% L vs #212121 would be darker; ours is within the family relationship "near-black on paper", contrast 11.6:1). The blush disc keeps its hue (apricot).
| Token (theme.json slug) | Hex | Share | Source / reason |
|---|---|---|---|
| `paper` | **#F4F8F9** | ~55% | T(a) #F7F2EE paper, cooled, same L |
| `white` | **#FFFFFF** | ~22% (bars, header inner, chapters ii/iv, letter) | T(a) header bar #FFFFFF; Mangrove white page |
| `ink` | **#23414D** | ~8% (CTA cells, check-dates band, buttons) | T(a) #000 BOOK NOW cell → sea-ink |
| `text` | **#1F2F36** headings and body (footer ground too, ~6%) | — | T(a) #000 / #212121 |
| `muted` | **#5B6E76** | eyebrows, captions (5.4:1 on paper) | T(a) small labels |
| `sea` | **#84B9CB** | **≤3%**: active pager dot, marker tint (`rgba(132,185,203,.38)`), focus ring on dark | row hex |
| `sea-pale` | **#DCE6E9** | header pale cell, footer text | T(a) #C5BBB6 language cell, cooled |
| `line` | **#D5E2E7** | hairlines, bar dividers | T(a)/T(d) #D9D2CC hairline, cooled |
| `dot` | **#9FB4BC** | pager dots, inactive prev/next names | T(f) grey dots |
| `apricot` | **#F2C9B4** | **≤1%** (the disc) | T(a) blush #F6D3C8 (−3% L) |
| `flag-green` | **#6E9F7C** | 10px dots only | flag legend (with `flag-yellow` #D9B65A, `flag-red` #C26A5A, dots only) |
| `error` | **#A23B3B** | form errors (6.0:1 on white) | — |
| `success` | **#2F6B53** | form success | — |
Ratio: paper 55 · white 22 · ink+text grounds 14 · photos (non-ground) · sea ≤3 · apricot ≤1.
**First-screen saturated share (check-first-screen.py)**: target **≤10%**, hard cap **15%** (row cap 30%; reference 44% is deliberately not matched). P01 must be graded pale: sky near white, sea pale aqua, the lifeguard top a faded red. If the check exceeds 10%, regenerate P01 paler (do not add a heavy overlay: overlay stays ≤18%).

---

## 6. Typography (sans, row font_direction = sans)

Fonts load **only via theme.json `fontFamilies` + `fontFace`** (woff2 in `assets/fonts/`, OFL, listed in theme-meta `fonts[].files` with `licenseFile`; family names in readme.txt), so the editor iframe and the front end render the same faces. style.css has `:lang(` rules, so copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it in functions.php.
- `figtree`: Figtree 300, 400, 500 (Latin, Latin-ext). Display, headings, numerals, wordmark, values in the bar. (T(b) ITC Avant Garde ExtraLight → the nearest open geometric sans with a real light weight.)
- `nunito-sans`: Nunito Sans 400, 400 italic, 600 (Latin, Latin-ext). Body, eyebrows, nav, tables, forms. (T(b) Ogg serif body → sans per row.)
- `noto-sans-tc`: Noto Sans TC 400 + 500 (headings; zh-TW subset of every zh-TW demo string + punctuation, by the Hokuto/Hada substitute subsetting method because the repo subset script is broken).
- `noto-sans-jp`: Noto Sans JP 400 + 500 (headings; ja subset, same method).
Stacks:
- Latin display: `Figtree, "Helvetica Neue", Arial, sans-serif`
- Latin body: `"Nunito Sans", "Helvetica Neue", Arial, sans-serif`
- `:root:lang(zh-TW)` display: `Figtree, "Noto Sans TC", "PingFang TC", "Microsoft JhengHei", sans-serif`; body: `"Nunito Sans", "PingFang TC", "Microsoft JhengHei", sans-serif` (no bundled TC and no JP font in body: repo contract).
- `:root:lang(ja)` display: `Figtree, "Noto Sans JP", "Hiragino Sans", "Hiragino Kaku Gothic ProN", "Yu Gothic", sans-serif`; body: `"Nunito Sans", "Hiragino Sans", "Hiragino Kaku Gothic ProN", "Yu Gothic", "Meiryo", sans-serif`.
- CJK: weight 300 does not exist in the bundled CJK faces, so CJK headings render at **400** (Noto Sans 400 looks light enough); sizes × 0.75 (hero 3.625rem, chapter h2 3.1875rem); body 1rem / **1.85**, ls .04em; no uppercase transforms on CJK (the uppercase eyebrows are written in normal case in zh-TW / ja). fr/de: `hyphens: auto` on body, h2, h3; the hero h1 is `hyphens: manual`. The wordmark "shiosai" stays Latin in every locale.
| Role | Font / weight | Size (desktop → mobile) | Line-height | Tracking | Source |
|---|---|---|---|---|---|
| hero h1 | Figtree 300, lowercase | **4.875rem (78px)** → 2.75rem | 1.05 | −.015em | T(b) h2 78.4 / 87.8, extra-light |
| chapter h2 / inner h1 | Figtree 300, lowercase | **4.25rem (68px)** → 2.5rem | 1.12 | −.01em | T(b) 78px chapter titles (one step smaller so the hero stays largest) |
| chapter eyebrow "chapter. i" | Nunito Sans 400 | .875rem | 1.7 | .08em | T(b) "CHAPTER. I" 14px |
| chapter sub (uppercase) | Nunito Sans 400 | .9375rem → .8125rem | 1.65 | .1em | T(b) uppercase 2-line sub |
| h3 | Figtree 400, lowercase | 2rem → 1.625rem | 1.25 | −.005em | Mangrove room titles 31.3px w500 |
| S3 cell title | Figtree 400, lowercase | 1.5rem | 1.3 | 0 | T(b) fact titles 24px |
| roman numeral | Figtree 300 | 1.75rem | 1 | .02em | T(b) serif 24px numerals → sans |
| eyebrow / micro label | Nunito Sans 600, uppercase | .6875–.75rem | 1.5 | .12em | Mangrove 13.5px ls .12em; T(b) 14px uppercase |
| body | Nunito Sans 400 | **1.0625rem (17px)** → 1rem | **1.7** | .01em | T(b) 18px / 24px (lh 1.33 is too tight for sans; raised) |
| bar value | Figtree 400, lowercase | 1.25rem → 1rem | 1.3 | 0 | T(f) bar value 22px |
| nav | Nunito Sans 600, uppercase | .8125rem | 1 | .1em | T(b) links 14px ls .9px |
| button | Nunito Sans 600, uppercase | .8125rem | 1 | .1em | T(d) 2px outline, 8×28 padding |
| price | Nunito Sans 600 tabular-nums | 1rem | 1.5 | 0 | |
theme.json fontSizes: `small` .8125rem, `medium` 1.0625rem, `large` 1.5rem, `x-large` 2rem, `xx-large` clamp(2.5rem, 1.2rem + 3.6vw, **4.25rem**), `huge` clamp(2.75rem, 1.1rem + 4.4vw, **4.875rem**) (largest ≥ 4.25rem ✔).

---

## 7. Motion and scroll (sp-scroll)

Copy `pipeline/assets/sp-scroll/` unchanged to `assets/`; enqueue the JS in the head (not deferred) and add the CSS as an editor style. Only `sp-*` classes; no scroll listeners, GSAP, skrollr, Lenis or AOS (the reference uses skrollr + GSAP; we do not). **Three effects**, from stage-a "Scroll effect candidates" (source carpediemsantorini.com):

### 7.1 Chosen effects
| Effect | sp-* | Where | Reference trigger / time / easing | Ours |
|---|---|---|---|---|
| Scale-settle of wide photos (D) | `sp-reveal sp-reveal--zoom` | home §4 `ss-wide` P02, §6 band wrapper (P09), §8 P10 2:1 photo; inner `ss-wide` bands | `anim__scale` scale 1.08 → 1, **1.7s**, `cubic-bezier(.16,.01,.77,1)`, skrollr at chapter centre-top (T(g)) | sp-scroll's built-in zoom starts at **scale(1.06)** (hard-coded; do not edit sp-scroll.css — 1.06 vs the reference 1.08 is accepted); set the timing only, with a selector that beats sp-scroll's own `--sp-dur: 1.6s`: `html.sp-js:not(.sp-no-motion) .ss-wide .sp-reveal--zoom { --sp-dur: 1.7s; --sp-ease: cubic-bezier(.16,.01,.77,1); }`; applied to the **figure wrapper**, image inside (`overflow: clip` on the wrapper; the observed element has no clip-path) |
| Rise (with stagger) | `sp-reveal sp-reveal--up` + `sp-stagger` | home §3 ¶ group, §4 room entries, §5 roman cells (stagger), §8 text, §9 pair (stagger), §12 rows; inner: chapter bodies, roman cells, people rows | chapter content class toggles at centre-top, **0.64s**, same curve (T(g) section toggle) | `--sp-dist: 24px; --sp-dur: .64s; --sp-ease: cubic-bezier(.16,.01,.77,1)`; stagger step .12s. **Not** on the hero, the flag bar, forms, price tables, hours lists, the flag legend or legal text |
| Parallax | `sp-parallax` | hero Cover (P01), home §6 band, every inner `ss-wide` band | skrollr translateY 16% → 0 and −300px → 0 across the viewport, scroll-linked, linear (T(g)) | §7.2 |
The hero's load settle (`ss-settle`, KV #1) is a theme CSS keyframe on the Cover image only (`animation: ss-settle 1.7s cubic-bezier(.16,.01,.77,1) both`, `from { scale: 1.08 }`), on a **separate wrapper property** from the parallax transform (use `scale`, while sp-parallax uses `transform`/`translate`), disabled under `prefers-reduced-motion`, `html:not(.sp-js)` / `?sp-static` and in the editor. It is not a reveal (content is never hidden). Count-up, marquee, mask/wipe: **none**. Reveals on home: ≤ 60% of blocks, 0 in the hero.

### 7.2 Parallax (required)
| Where | Block / structure | Background layer | Foreground (static) | `--sp-par` desktop / mobile | Reference motion |
|---|---|---|---|---|---|
| **Hero** (primary) | Cover `ss-hero sp-parallax`, 100svh | `.wp-block-cover__image-background` **P01** (sp-scroll scale 1.18) | h1 + uppercase line in the Cover's inner container (does not move); header and flag bar are outside the Cover | **8% / 6%** | Carpe Diem hero photo stays while the page moves; chapter images translateY 16% → 0 |
| **Packages band** (home §6) | Group `ss-wide ss-band sp-parallax` (2.5:1, x 74 → right edge; mobile full width 390×156 → use 2:1 = 390×195) holding `figure > img` **P09** | P09 | none (no text) | **10% / 6%** | skrollr −300px → 0 over the viewport |
| **Inner `ss-wide` bands** | same structure | each page's band photo (§4) | none | **8% / 6%** | same |
Mobile keeps parallax at the smaller speeds. Reduced motion, `?sp-static`, no JS and the editor: no movement and no scale (sp-scroll built-in). Acceptance: `check-parallax.mjs` desktop + mobile, displacement difference ≥6px, 0 under reduced motion; ≥3 reveals hidden before entering and final after; nothing transparent after scrolling to the bottom.

---

## 8. Responsive rules (hard)

- **390px first screen**: no vertical writing, no absolutely positioned label, nothing overlapping text (auto-gates). Header in flow (64px, white). Headline centred by flex inside the Cover. **Flag bar after the Cover in normal flow, no negative margin**, 2×2. **Pager `display: none` below 1280px** (its rotated labels never render on mobile).
- **Header**: ≥1280 full KV #4; 1024–1279 pale cell hidden; < 1024 wordmark left, nav behind the core toggle below 600, ink cell kept.
- **Sticky-media (§4 rooms) < 1024px**: one column: the pinned photo becomes a normal 4:5 photo (not sticky) above the 4 entries; each entry keeps its own 3:2 photo; the prev/next row stays one line (names truncate with ellipsis, `nowrap`).
- **S3 roman grid**: ≥1024 photo 5/12 + 2×2; 782–1023 photo full width above, 2×2 below; < 782 photo, then **1 column** of 4 cells (numeral column 40px), hairline under every cell except the last; disc 104px, overlap −32px, inside the viewport (never causes horizontal scroll: the photo figure has `margin-right: 32px` on mobile).
- **`ss-wide` bands**: ≥782 start at x 74 and bleed right; < 782 full width, 2:1.
- **Price table ≥782px**: the table spans the **full width of its container** (`width: 100%`, `table-layout: auto`; in home §7 at 782–1023 the Columns stack, so the table spans the full content width); the price column is `white-space: nowrap; text-align: right; width: 1%; padding-right: 0` and is **never clipped** at 800 and 1280; no `overflow: hidden` on the wrapper. Columns: item (name + one-line note under it) · detail (sleeps / nights) · price.
- **Any table < 782px** (prices, hours, club timetable, flag legend): stacked. Each row becomes a block: item on its own line (Figtree 400 1.125rem), the note below, the price/time at the right of the first line (flex, `nowrap`), 1px `#D5E2E7` between rows. No horizontal scrolling.
- `html, body { overflow-x: clip }`; parallax layers clipped by their wrapper; the disc and the −50px bar never exceed the viewport; at 390 `scrollWidth == innerWidth`.
- Touch targets ≥44px; CJK always horizontal.

---

## 9. Fixed facts (identical on every page and in all five locales; brand.md is the source)

- **Name**: Shiosai Resort (wordmark "shiosai"). **Place**: 1 Tideline Road, Port Merrow, on the Merrow coast (fictional, international-neutral). 400 metres of sand directly below the terrace. **Founded** 1964 as a bathing pavilion; run by the Lund family since **1991**; rebuilt **2012** so that every one of the **48 rooms** faces the sea. **Phone** +00 0000 0000 (bookings 08:00–20:00 in season). **Email** stay@shiosai-resort.example (all mailto links use this).
- **Season**: open **1 April – 31 October**. Lifeguards **09:00–18:00, 1 June – 15 September**. Summer packages **1 June – 15 September**.
- **Daily hours**: check-in 15:00 · check-out 11:00 · reception 24 hours in season · breakfast 07:00–10:30 · beach lunch boxes from 11:30 · children's tea 17:30 · terrace dinner 18:00–21:30 · kids' club **09:00–16:00, Monday–Saturday, ages 4–12** · swimming lessons 10:00 and 15:00 · babysitting until 23:00, book by 14:00.
- **Rooms (48)**: Dune Room ×14 (26 m², sleeps 3) · Sea-Facing Double ×18 (30 m², sleeps 2 + cot) · Family Sea Room ×12 (44 m², two connecting rooms, sleeps 5) · Terrace Suite ×4 (52 m², ground floor, steps to the sand, sleeps 4).
- **Prices (7 items, €, per room per night with breakfast unless marked; taxes included)**:
  1. Dune Room **€185**
  2. Sea-Facing Double **€220**
  3. Family Sea Room **€295**
  4. Terrace Suite **€360**
  5. Summer Week — 7 nights Saturday to Saturday, Family Sea Room, half board, kids' club, two lessons per child (2 adults + 2 children) **€2,390**
  6. Long Weekend — 3 nights Friday to Monday, Sea-Facing Double, half board for two **€840**
  7. Half board, per night — adult / child 4–12 **€38 / €18**
  Children under 4 stay and eat free; cots, high chairs and the kids' club are included. Babysitting **€18 per hour**. Parking **€12 per day**. Home shows all 7.
- **Booking flow (the single way, 4 steps, shown as a ruled list, never a step-card row)**: 1 send the dates, the room and who is coming (form or email) · 2 Rafael or Ana replies **within 24 hours** with an offer **held for 48 hours** · 3 confirm with a **20% deposit**; the rest is paid on departure · 4 arrive from 15:00. Free cancellation until **14 days** before arrival.
- **People (7)**: Marisol Lund, owner and general manager (second generation) · Tobias Lund, rooms and the house · Aiyana Brooks, head lifeguard (team of 4) · Kwame Mensah, kids' club lead · Lena Vogt, head chef of the terrace kitchen · Rafael Ortiz, reservations · Ana Duarte, reservations and guest care.
- **The day (routine)**: 06:30 the beach is raked · 07:00 breakfast · 09:00 the flag goes up and the club opens · 10:00 first lesson · 15:00 check-in, second lesson · 16:00 club closes · 17:30 children's tea · 18:00 lifeguards off, dinner begins · 21:30 kitchen closes.
- **Stories (3, the posts)**: "The tide pools at 07:00" · "Why the flag goes up at nine" · "A Saturday-to-Saturday week".
- **Getting here**: Port Merrow station, hotel shuttle 12 minutes, 4 runs a day (09:30, 12:30, 15:30, 18:30); 62 parking spaces, 4 EV chargers.
- **The Tide Letter**: two letters a year — **March** (summer dates and package openings) and **late August** (autumn weeks).
- **Milestones**: 1964 bathing pavilion · 1991 the Lund family · 2012 rebuilt, 48 sea-facing rooms · today, second generation.
- **Bar sample day** (S1 cells, demo text, identical everywhere): flag green · low tide 06:42 · sea 21 °C.
- **Tone**: plain, warm, practical; never boastful; no awards, no "best", no guarantees about weather or the sea.

---

## 10. Images (18 photographs, all real photography, one STYLE; 12 on home)

**STYLE** (identical for every image):
`IMAGE_STYLE="high-key real photograph with soft film grain, bright overcast seaside morning light, soft halation, lifted blacks, muted pale palette of pale aqua sea, near-white sky, warm sand and white linen, low saturation, colour-graded travel documentary, 35mm lens, people seen from behind or at a distance, natural unposed moments, diverse families, modern international seaside resort with white rendered walls, pale timber and linen, uncluttered composition with generous empty sky or sand, no text, no letters, no numbers, no logos, no brand names, no signage, no flags with symbols"`
Generate one at a time with `scripts/grok-image.sh out.webp "<subject>"`; Read every image; regenerate any with text, logos, emblem flags, broken faces or hands, saturated deep-blue sea or sky, or a style drift. ≤300 KB, ≤2000px, webp. No cut-outs. P01 must pass the first-screen saturation check (§5).
| # | File | Subject (prompt core) | Ratio / size | Used on (page · block) | Home |
|---|---|---|---|---|---|
| P01 | `hero-tideline.webp` | **KV**: the beach at 07:30 below a white hotel terrace; on the wet sand of the tide line a lifeguard in a faded red-and-white top walks away along the water's edge carrying a folded plain flag on a pole (left third); a child about six, back turned, carries a small bucket toward the shallows (right third); white terrace railings and sea-facing balconies with linen chairs fill the top third; pale aqua sea, near-white sky, horizon across the middle | 16:10, 2000×1250 | Home §2 hero | ✔ |
| P02 | `balcony-dawn.webp` | from inside a sea-facing room at dawn: open glass door, white linen curtain moving, a balcony with two chairs, the pale sea beyond | 2.5:1, 2000×800 | Home §4 `ss-wide` · Rooms head · About band | ✔ |
| P03 | `room-sleep.webp` | a child asleep on a white bed in a bright room, balcony door open to the sea, a bucket and sandals on the floor | 4:5, 1280×1600 | Home §4 pinned · Rooms pinned | ✔ |
| P04 | `room-dune.webp` | Dune Room: a double bed and a single daybed under a sloping pale-timber ceiling, a window onto the dune grass and the sea | 3:2, 1800×1200 | Home §4 entry 1 · Rooms entry 1 | ✔ |
| P05 | `room-seafacing.webp` | Sea-Facing Double: white bed, a linen armchair, a balcony with a small table and two cups, the sea filling the window | 3:2, 1800×1200 | Home §4 entry 2 · Rooms entry 2 · post 3 | ✔ |
| P06 | `room-family.webp` | Family Sea Room: two connecting rooms seen through the open door, bunk beds with striped linen on one side, a parent unpacking a beach bag | 3:2, 1800×1200 | Home §4 entry 3 · Rooms entry 3 | ✔ |
| P07 | `room-terrace.webp` | Terrace Suite: a ground-floor terrace with steps down to the sand, a towel over the rail, a toddler's sun hat on a chair | 3:2, 1800×1200 | Home §4 entry 4 · Rooms entry 4 | ✔ |
| P08 | `tidepool-child.webp` | a child crouching at a rock pool at low tide with a bucket, a club leader kneeling beside, both seen from the side, soft morning light | 4:5, 1280×1600 | Home §5 S3 · post 1 | ✔ |
| P09 | `umbrellas-noon.webp` | from the terrace looking down: families under pale striped umbrellas on the sand at noon, small figures, lots of sand and pale sea | 2.5:1, 2000×800 | Home §6 band · Packages head · Letter band | ✔ |
| P10 | `lifeguard-tower.webp` | a white timber lifeguard tower with a plain green flag at 09:00, a family arriving with towels in the foreground, seen from behind | 2:1, 2000×1000 | Home §8 · Beach head · Packages band · post 2 | ✔ |
| P11 | `kids-club.webp` | kids' club under a striped awning on the sand: four children building a sand wall, a club leader (man, 30s) kneeling with a spade | 3:2, 1800×1200 | Home §9 left · Families head · Dining band | ✔ |
| P12 | `terrace-breakfast.webp` | breakfast on the white terrace: a parent pouring juice for two children, bread and fruit, linen tablecloth, the sea behind | 4:5, 1280×1600 | Home §9 right · Dining head · Families band | ✔ |
| P13 | `hotel-dusk.webp` | the resort seen from the beach at dusk: a low white building with lit balconies above the sand, a few figures walking at the waterline | 2.5:1, 2000×800 | About head · Rooms band | |
| P14 | `arrival.webp` | arrival at a bright reception: a family with a suitcase and a beach bag, a receptionist handing a key card across a pale timber desk, the sea visible through glass | 4:5, 1280×1600 | Families S3 · Check dates band | |
| P15 | `swim-lesson.webp` | a swimming lesson in the shallows: an instructor waist-deep with three children holding floats, seen from the beach | 4:5, 1280×1600 | Packages S3 · Beach S3 | |
| P16 | `terrace-dinner.webp` | terrace dinner at dusk: a long table with a family of three generations, lanterns, pale sky, seen from a distance | 2.5:1, 2000×800 | Dining S3 (4:5 crop via object-position) · People band | |
| P17 | `boardwalk.webp` | the dune boardwalk at evening: a parent and child walking toward the sea, beach grass, low light | 2.5:1, 2000×800 | About S3 (4:5 crop) · Beach band · Visit band | |
| P18 | `linen-line.webp` | housekeeping: white towels and beach towels drying on a line on a service terrace, a staff member (woman, 50s) pegging one, the sea behind | 3:2, 1800×1200 | Journal / 404 / archive head (fallback) | |
Per-page check (no repeats on one page): Home P01–P12 · Rooms P02 P03 P04 P05 P06 P07 P13 · Packages P09 P15 P10 · Beach P10 P15 P17 · Families P11 P14 P12 · Dining P12 P16 P11 · About P13 P17 P02 · People P16 · Visit P17 · Check dates P14 · Letter P09 · Journal P18 · posts P08 / P10 / P05.

---

## 11. Forms (form contract v1: `steps/form-contract-v1` exists)

Copy `pipeline/assets/forms/shippress-forms.php` unchanged to `inc/`, and its CSS and editor JS unchanged to `assets/`; `require` it in functions.php. Patterns stay literal block markup with a small PHP island for `shippress_form_slot`. **No form in the home first screen** (the flag bar is links only); **no `sp-reveal` on any form or its wrapper**.
- **Check dates (`check-dates`, contact; the only booking page)**: ch. ii "send your dates", centred column max 640px, on **white**: `shippress_form_slot( kind: contact, fallback: … )`. Fallback = the buffered literal mailto button **"Email us your dates"** (`wp-element-button`, href `mailto:stay@shiosai-resort.example?subject=<forms_contact_subject>`), with the sentence "Opens your email app. Tell us the dates, the room and who is coming, with the children's ages." It never links to `/check-dates/`. Recommended CF7 fields (documented in readme; the theme does not create them): name*, email*, phone, arrival date*, nights (select 2–14)*, room (select: Dune Room / Sea-Facing Double / Family Sea Room / Terrace Suite / Summer Week / Long Weekend / not sure)*, adults (1–4)*, children and ages (text), notes (textarea: cot, high chair, allergies, accessibility), consent checkbox* ("Shiosai Resort may contact me about this request"), submit "Send my dates". Rooms, Packages and the check-dates band only **link** to `/check-dates/` (no second contact slot).
- **The Tide Letter (`letter`, newsletter)**: standalone page; ch. ii form panel on the **ink** ground `#23414D`, radius 0, padding 64px, text `#F4F8F9`: `shippress_form_slot( kind: newsletter, email: stay@shiosai-resort.example, label: forms_email, submit: forms_subscribe, notice: forms_mail_notice, subject: forms_mail_subject )`.
- **Home §11 `letter`**: the same newsletter slot on **white** (light ground). The footer has a link only (no second slot).
- Plugin order (shared helper): newsletter MailPoet (explicit id) → MC4WP; CF7/WPForms only with an explicit dedicated newsletter id. Contact: CF7 → WPForms. Without plugins the newsletter still shows a required `type=email` field + submit (native mailto POST) and the notice.
- **Tokens** (style.css, mapped to theme.json presets):
  - light (white / paper): `--sp-form-accent: var(--wp--preset--color--ink)` #23414D; `--sp-form-on-accent: var(--wp--preset--color--paper)` #F4F8F9; `--sp-form-radius: 2px` (T(d) 2px buttons); `--sp-form-focus: var(--wp--preset--color--ink)` (2px outline, offset 2px); `--sp-form-surface: #FFFFFF` on paper / `#F4F8F9` on white; `--sp-form-text: #1F2F36`; inputs 1px `#B9CCD3` border, 48px high, Nunito Sans 1rem; labels Nunito Sans 600 .75rem uppercase ls .1em `#5B6E76` (not uppercase in zh-TW / ja); submit filled ink, Nunito Sans 600 .8125rem uppercase ls .1em, hover `#1F2F36`; error text + border `error` #A23B3B; success panel `#E3EFEA` with text `success` #2F6B53.
  - dark (`.ss-dark` Group style: ink band / letter panel / footer): `--sp-form-surface: #2C4E5B`; `--sp-form-text: #F4F8F9`; `--sp-form-accent: #F4F8F9`; `--sp-form-on-accent: #23414D`; `--sp-form-focus: #84B9CB` (sea); borders `rgba(244,248,249,.45)`; error `#F2B8B0`; success `#B8DCCB`; labels `#DCE6E9`.
  - Styled states: input, textarea, select, checkbox/radio (`accent-color`), label, submit, focus-visible, disabled, error, success. Scoped to CF7, WPForms, MailPoet, MC4WP (+ Jetpack, `.wp-block-form`) classes and `.sp-newsletter-fallback` only; no global input selectors.
- **i18n semantic keys** in `inc/i18n/en.php` (extract with `L10N_SEMANTIC=1`; all five locales rewritten locally, not literally translated): `forms_email` "Email address", `forms_subscribe` "Send me the Tide Letter", `forms_mail_notice` "This opens your email app. Send the message to subscribe; you are not subscribed yet.", `forms_mail_subject` "Subscribe to The Tide Letter", `forms_contact_subject` "Dates request", `contact_email` "Email us your dates", `forms_contact_note` (the fallback sentence above). Check the rendered label, button, notice and subject in en, zh-TW, ja, fr and de.
- Validation: `form-check.py`, five-locale `form-runtime-check.php`, `repo-gates.sh forms`; a real CF7 check at 390px and desktop on the light (Check dates, home §11) and dark (Letter) grounds; never submit a form.

---

## 12. Similarity table (target ≈80%; values from reference-tokens.md)

| Dimension | Reference value (token) | Shiosai Resort value |
|---|---|---|
| Page ground | #F7F2EE warm paper, ~85% after hero (T(a)) | #F4F8F9 cool paper (same L) ~55% + white #FFFFFF ~22% |
| Text | #000 headings, #212121 body (T(a)) | #1F2F36 headings and body |
| CTA cell | #000 solid "BOOK NOW" cell (T(a)) | #23414D solid "check dates" cell (header + bar) |
| Pale header cell | #C5BBB6 language cell (T(a)) | #DCE6E9 season cell |
| Accent | blush disc #F6D3C8, <1% (T(a)) | apricot disc #F2C9B4, ≤1% |
| Highlighter | grey #C8C8C8 ~60% band under phrases (T(f)) | sea tint rgba(132,185,203,.38), lower 45% of the line |
| First-screen saturated share | 44% (T(a)) | ≤10% target, 15% cap (row quiet-palette rule) |
| Hero | 100svh full-bleed sea photo, figures at the edge, cross-fade 6s (T(e), T(g)) | 100svh full-bleed tide-line photo P01, figures at the edge, one still + settle 1.7s |
| Display type | Avant Garde ExtraLight, lowercase, 78.4 / 87.8px (T(b)) | Figtree 300, lowercase, 78px / 1.05 (hero), 68px / 1.12 (chapters) |
| Eyebrow / sub | 14px uppercase; serif uppercase 2-line sub (T(b)) | Nunito Sans .875rem eyebrow; .9375rem uppercase ls .1em sub |
| Body | Ogg serif 18px / 24px, ls .9px (T(b)) | Nunito Sans 17px / 1.7, ls .01em (sans per row) |
| Header | fixed 100px; menu / centred wordmark / 2 cells 100px wide (T(c)) | 88px; nav / centred wordmark / 2 cells 140px wide (absolute on home) |
| Booking bar | white 1100×100, 4 cells, black CTA cell, at the hero foot (T(f)) | white 1100×100, 4 cells, ink CTA cell, overlapping the foot by 50px |
| Pager | fixed x 37, y 280–620, rotated 11px label, 6 dots every 41px, 1px line (T(f)) | fixed x 24, y 280–620, rotated 11px label, 6 dots every 41px, 1px line + tide ticks |
| Chapter layout | centred text 640–670px, padding-bottom 135px (T(c)) | centred 640px, 135px / 135px |
| Facts grid | 2×2, col gap ~40, row gap ~64, hairline under cells, numerals 24px (T(c), T(f)) | 2×2, 40 / 64, 1px #D5E2E7 under the top row, numerals 28px Figtree 300 |
| Photo beside the grid | 436px circle + 168px blush disc (T(d)) | 4:5 rectangle (radius 0) + 136px apricot disc overlapping its corner |
| Wide photos | 1366×546 (2.5:1), start x 74, bleed right (T(e)) | 2.5:1, start x 74, bleed right |
| Room showcase (secondary) | 2:1 room photos, prev / next names, View &#124; Book (Mangrove T(e)) | 3:2 room photos in a sticky-media list with prev / next names and VIEW &#124; BOOK |
| Buttons | 2px radius, 2px solid outline, 8×28 padding (T(d)) | 2px radius, 2px #23414D outline, 10×28 padding |
| Shadows | none (T(d)) | none |
| Image motion | scale 1.08 → 1, 1.7s, cubic-bezier(.16,.01,.77,1) (T(g)) | `sp-reveal--zoom` 1.06 → 1, 1.7s same curve; hero settle 1.08 → 1 same |
| Section motion | toggle .64s same curve (T(g)) | `sp-reveal--up` .64s same curve, 24px |
| Parallax | translateY 16% → 0 / −300px → 0 (T(g)) | `sp-parallax` 8% hero, 10% band (mobile 6%) |
| Imagery | colour-graded travel photography, figures from behind (T(e)) | same type, high-key film grain, families from behind |

---

## 13. Home acceptance checklist (stage 1)

1. 1440×900 first screen shows: full-bleed high-key P01 (lifeguard with folded flag on the tide line at the left, child with bucket at the right, white terrace above), the centred thin lowercase h1 "by the water, all week" at 78px + the uppercase line, the cell header (nav left, centred "shiosai", pale season cell + ink "check dates" cell at the right), the **white four-cell flag bar overlapping the photo foot by 50px** (top half visible) and the **fixed tide-gauge pager** at x 24 with "WELCOME". No button or form in the hero.
2. 390×844: header in flow (white, ink cell), headline centred by flex in a 70svh Cover, flag bar after the Cover in flow (2×2); no pager, no vertical text, no absolute labels, no overlap; `scrollWidth == innerWidth`.
3. §3 centred welcome with one sea-tint marker phrase, 3 ¶.
4. §4 chapter head (eyebrow / 68px thin lowercase / uppercase sub), the 2.5:1 P02 starting at x 74 and bleeding right, then the sticky P03 with 4 room entries (P04–P07), each with the prev / next row, facts line and VIEW &#124; BOOK.
5. §5 roman 2×2 (I–IV hanging numerals, hairlines under the top row, one marker per cell) beside P08 4:5 with the apricot disc overlapping its corner; outlined 2px button.
6. §6 P09 band 2.5:1 from x 74, visible parallax, no text; §7 price table of 7 items full width at ≥782, prices `nowrap` right, not clipped at 800 / 1280, stacked < 782; prices match §9 (€185 / €220 / €295 / €360 / €2,390 / €840 / €38 / €18).
7. §8 P10 2:1 centred 1100 + flag legend; §9 P11 + P12 offset pair; §10 ink check-dates band with 4.25rem thin heading and one outlined white button; §11 newsletter slot (email + submit + notice without plugins); §12 journal rows; ink footer.
8. 12 unique images on home (≥8); 0 cut-outs; every image Read-checked.
9. ≥250 English words (target ≈620) and ≥3 narrative ¶ of ≥20 words; facts identical to §9.
10. Effects: zoom-settle, rise (+stagger) and parallax only; no reveal in the hero, flag bar, forms, prices or legend; `check-parallax.mjs` passes on desktop and mobile; reduced motion shows the final state; the hero settle is off under reduced motion / `?sp-static`.
11. First-screen saturated share ≤10% (cap 15%); largest theme.json size 4.875rem (≥4.25rem); fonts via theme.json fontFace (Figtree, Nunito Sans, Noto Sans TC / JP); the editor matches the front end.
12. Exactly one top menu; the pager is a Group of anchor links, not a navigation block; radius 0 on photos and bars, 2px on buttons, no shadows.
13. auto-gates `1 1` pass for en; `pattern_source.py` passes; `form-check.py` passes.
