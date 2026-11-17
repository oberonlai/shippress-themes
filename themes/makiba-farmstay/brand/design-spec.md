# Makiba Farmstay: design spec (stage 1 spec, binding for implementation)

Row b33-6 · type **hospitality** · archetype `horizontal-strip` · hero `full-bleed-photo` · nav `centered` · font_direction **serif** · IMAGERY **photo**.
Main reference: **https://kazenoyama.jp/** (RT = `reference-tokens.md`). Secondary: **https://satoyama-terrace.com/** (ST). Screenshots in `brand/ref/`.
Rule of thumb for the implementer: if a value is written here, use it exactly; if it is not, take it from RT. Copy no image, text, logo or illustration of either site.

---

## 0. Fixed brand facts (identical on every page, in every language)

- **Makiba Farmstay**, a working dairy farm with **4 family rooms above the old hay barn**. Dairy farm since **1962**, rooms opened **2014**. **48 milking cows** (Holstein and Brown Swiss crosses), **12 calves** at any time, hens, two goats.
- Address: **Larkfield Hollow Farm, 14 Weald Lane, Larkfield Valley** (fictional, international-neutral; local order per language in brand.md). Phone **+00 41 2290 7716** (fictional). Email `stay@makibafarm.example` (same address in every mailto and form fallback).
- Season: rooms open **1 February – 20 December** (farm closed to guests 21 Dec – 31 Jan). Check-in **15:00–18:00**, check-out **11:00**. Booking desk (phone/email answered) **daily 08:00–19:00**. Minimum stay **2 nights**.
- **The farm day (5 fixed times — ridge strip, home day row, Farm day page, all identical):**
  | Time | Name | What happens |
  |---|---|---|
  | **05:30** | Milking | Walk to the parlour with Tomas; children from age 5 help bring the cows in and hold the gate. Optional. |
  | **07:00** | Breakfast | Farm breakfast in the barn kitchen: today's milk, butter, eggs, bread from the oven. |
  | **10:00** | Chores | Calves bottle-fed, hens' eggs collected, hay forked down — with Mateo and Rosa. |
  | **13:00** | Butter & picnic | Shake butter in jars in the dairy room with Lukas, then a picnic basket for the meadow. |
  | **18:30** | Barbecue | Evening barbecue in the yard under the walnut tree (Tue, Thu, Sat). |
- **Rates (6 items, EUR in every language, per night unless noted, breakfast included, no "from"):**
  | Item | Sleeps | Price |
  |---|---|---|
  | Orchard Room | 2 adults + 1 child | €165 |
  | Swallow Room | 2 adults + 2 children | €185 |
  | Hayloft Room | 2 adults + 3 children (bunk alcove) | €210 |
  | Rafters Suite | 2 families, 6 guests | €245 |
  | Evening barbecue | adult / child (4–12) | €22 / €11 |
  | Milking morning, farm chores, butter session | every guest | Included |
  Note line wherever rates appear: "Minimum stay 2 nights. 30% deposit to confirm; free cancellation up to 14 days before arrival."
- **Booking (the single way to book, 3 parts, written as prose rows, never a step grid):** **Ask** (form on /book/ or email; say dates, room, ages of children) → **Confirm** (Ilse replies within 24 hours with a 30% deposit link) → **Arrive** (15:00–18:00; farm walk with Tomas at 17:00). Every "Book a stay" button in the theme goes to **/book/**. No second booking path.
- **Named people (7, fictional):**
  1. **Tomas Ferreira** — farmer, third generation; leads the 05:30 milking. *In P01.*
  2. **Ilse Ferreira** — rooms, bookings, breakfast table. *P06.*
  3. **Mateo Ferreira** — their son, 19; calves and the tractor. *P07.*
  4. **Rosa Ferreira** — Tomas' mother; hens and the kitchen garden.
  5. **Noor Haddad** — herd manager; cow health and the parlour. *P14.*
  6. **Lukas Brandt** — dairy room; butter and fresh cheese. *P08.*
  7. **Ama Owusu** — evening cook; barbecue nights. *P09.*
- **Guest stories (3, first names only, no ratings, no claims):**
  1. **The Okafor family (two children, 6 and 9)** — arrived for 3 nights in April, stayed up for a calf born at 04:10; the children named her Biscuit. (Home feature in block 7.)
  2. **Grete and her grandsons** — a week in the Hayloft Room in August; the boys ran the hen round every morning.
  3. **The Laurent twins, 7** — their first time up before the sun; now ask for "a milking holiday" every year.
- **Figures used by `sp-count`** (home intro + About): **48** cows · **4** rooms · **1962** dairy since · **5** farm-day times.
- No claims of awards, ratings, guaranteed sightings or births, real media, real brands or real people.

---

## 1. Signature techniques (three; obvious at a glance; not to be diluted)

### T1. Fixed hill-ridge strip carrying the farm-day line, with a swallow marker (Kazenoyama)
- **Source:** kazenoyama.jp — a fixed hill silhouette at the viewport bottom (RT(f): 150 px tall, green with paper grain, wavy top edge), 4 white labels at the right (x1015 / 1110 / 1220 / 1318, 17 px), a small white bird above the active label; also a white ridge silhouette that cuts the hero photo foot (RT(e): 109 px, 13.2:1). See `ref/scroll-kaze-ridge-3400.png`, `ref/scroll-kaze-ridge-4600.png`.
- **Ours (home: first screen foot, then fixed on every screen ≥1024 px):** two-layer SVG ridge, **150 px tall**, full width, `position:fixed; bottom:0; z-index:40`. Back hill `#A1A46D` (willow), front hill `#6B6F3A` (moss), 4 % paper-grain PNG overlay (our own noise texture). Wavy top: 2 broad humps (left hump crest at 28 % width, 70 px below top; right hump crest at 78 %, 0 px), exactly like the reference rhythm (low left, high right).
- **Labels:** 5 items in the front hill, right-aligned group from x≈880 to x1365 (75 px gutter), 92 px pitch, each two lines: time in Fraunces 15 px/1 weight 500 tabular figures, name in Mulish 13 px caps tracking .08em, white. Items: `05:30 Milking · 07:00 Breakfast · 10:00 Chores · 13:00 Butter · 18:30 Barbecue`. Each label is a link to the home day-row card anchor (`/#day-0530` … on home; `/farm-day/#t-0530` on inner pages). This is **not** a navigation menu: markup is a Group with paragraphs/links, `aria-label="The farm day"`, no `wp:navigation` — the only menu is the header.
- **Swallow marker:** a 22×14 white swallow SVG sits 10 px above the label row. Moves from the first label to the last with page progress: CSS `animation-timeline: scroll(root)` inside `@supports (animation-timeline: scroll())` and `@media (prefers-reduced-motion: no-preference)`, `translateX(0 → 368px)`, linear. Without support / reduced motion / `?sp-static` / editor: rests above `05:30`. No JS, no scroll listener.
- **Hero ridge-cut:** the hero photo's foot is cut by the same ridge shape (the fixed strip overlaps the last 150 px of the 111 vh hero, so the first screen shows photo → ridge exactly as RT).
- **Body** gets `padding-bottom:150px` (≥1024 px) so the footer is never hidden.
- **Must not be diluted:** the full-width, 150 px, two-hump silhouette in solid willow/moss (not a thin line, not a 40 px bar, not transparent); white labels on it; the bird above the active point.
- **<1024 px:** strip is **not fixed**; it is a static 96 px ridge at the hero foot (and again above the footer), labels show **times only** (`05:30 07:00 10:00 13:00 18:30`) in one flex row with `gap:clamp(10px,3vw,24px)`, centred, no absolute positioning, no vertical text. Swallow static above 05:30.

### T2. Fixed right-edge disc stack (Kazenoyama)
- **Source:** RT(f): white 60 px menu disc at y20, three green 60 px discs at y105 / 190 / 275 (85 px pitch), short curved-text label on top of each disc, white line icon, shadow `0 4px 4px rgba(0,0,0,.05)`. `ref/kaze-first.png`.
- **Ours (every page ≥1024 px):** `position:fixed; right:20px;` white 60 px disc at top 20 px = **back-to-top "Farm" disc** (small swallow icon, link `#top`; no menu inside). Then three moss `#6B6F3A` discs at top 105 / 190 / 275 px: **Book** (calendar icon → /book/), **Call** (phone icon → `tel:`), **Find us** (pin icon → /visit/). Curved label: 9.5 px Mulish 700 caps, tracking .1em, white, set on an SVG `textPath` arc of radius 22 px across the top third of the disc (text lives in block markup/SVG, editable, not CSS `content`). Icons 22 px white 1.5 px stroke. Hover: `translateY(-3px)`, 0.3 s `cubic-bezier(.19,1,.22,1)` (RT(g)). Focus ring 2 px `#C49B38` offset 3 px.
- Only **Book** is a booking route; Call and Find us are information (one way to book).
- **Must not be diluted:** round, 60 px, solid colour, stacked vertically at the right edge, curved labels.
- **<1024 px:** hidden; the header's right-side "Book a stay" link takes over. Nothing fixed overlaps the first screen at 390 px.

### T3. Hanging leaf canopy over a centred, widely spaced statement (Kazenoyama)
- **Source:** RT(f), `ref/kaze-canopy.png`: flat illustrated leaves in two greens with red fruit hang from the top edge left and right (each side ~38 % width, ~390 px deep at 1200 px), leaving a centred gap; a 2-line statement 42 px/63 px weight 500 tracking .1em centred below the gap; two white birds at upper right of the statement; paper-grain `#F5F5F5` ground.
- **Ours (home block 4; inner pages see §4):** our own flat SVG of **walnut and hop leaves on a barn rafter** (the walnut tree in the yard): leaf greens `#A1A46D` and `#6B6F3A`, a third leaf tone `#8C9058`, small walnuts in `#C49B38` (replacing red fruit), rafter beam `#7A6A55` 14 px. Left cluster x0–38 %, right cluster x62–100 %, depth 380 px at 1440 (scale with width, max 420 px). Statement centred at y≈470 of a 760 px tall section: Fraunces 2.625rem (42 px)/1.5, weight 400, tracking .1em, ink, 2 lines: "Mornings start in the parlour. / Evenings end under the walnut tree." Two white swallows (34 and 52 px wide) at the statement's upper right (+60 px right, −30 px up). Section ground `#F5F5F5` + grain.
- **Must not be diluted:** dense, saturated-enough flat leaves really hanging into the section (not a faint line drawing, not under 300 px deep), the open centre gap, the two white birds. Leaves are SVG (`aria-hidden`), under 10 % of total page area.
- **390 px:** canopy scales to 46 % each side, depth 180 px; statement 1.5rem/1.6 tracking .06em, below the canopy (no overlap); birds 24/36 px.

### Supporting details (required, not counted)
- **S1. Giant Latin section word + small sub-title** (RT(b)): gold `#C49B38` Fraunces **6.25rem** (100 px) weight 400, caps, tracking .02em, with a 1.625rem (26 px) Fraunces sub-title beside it (baseline-aligned, 24 px gap) + a 20 px willow line icon after the sub-title (cup, cow, leaf, key — our SVGs). Used on: A FARM DAY, ROOMS, HELP, STAY, JOURNAL.
- **S2. White r20 cards in a horizontal row overflowing right** (RT(c)(d)): 364 px cards, 20 px gap, starting at x75, row overflows the right edge (scroll-snap, visible scrollbar hidden, prev/next 44 px circle buttons below right).
- **S3. Dotted-rule news line with circle arrow** (ST, `ref/scroll-sato-open-1800.png`): 1 px dotted `#474143` rule, date in Fraunces 14 px tabular, title Mulish 16 px, 32 px circle arrow (1 px ink border) at right.
- **S4. Thin right-edge dotted pager** (ST) — used only as the hero's 3-dot pager at the **left** edge like RT (x37), see KV #6.
- **S5. r20 photo + 1 px ruled list (75 px row pitch)** (RT(d) seasons).

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion (kazenoyama.jp)
**Draws:** one full-bleed, softly dimmed documentary photograph (a plated dish beside a sparkling glass, seen from above the table) that cross-fades with other slides; a transparent header — logo left, centred four-item nav, round white menu disc right; a centred wide-tracked English catch ("make today a special day" type) with a two-line sub-line; a fixed column of three green round discs (call / book / access) at the right edge; a tiny vertical dot pager at the left; at the foot a hand-drawn hill ridge that cuts the photo into the pale paper ground and carries the section labels.
**Story:** come up the mountain to eat, unwind and stay; one day apart from daily life.
**Signature motion:** slides cross-fade (0.4 s) while each photo settles from scale 1.06 to 1 (~6 s); the catch slides in from the left; discs and ridge stay fixed on every screen; the white bird on the ridge follows the current section.

### (2) Our translation (same composition, same motion idea, same image type: high-key photos)
Dawn at the milking parlour of a working dairy farm: **Tomas leads a cow through the parlour door while a child holds the wooden gate**, soft high-key light pouring through the barn door. The slider continues the same morning: the family walking out to the herd in morning mist, then the yard at golden evening. Story: **"Wake up to the milking." — one farm day, from the parlour at 05:30 to the barbecue at 18:30.** The ridge at the foot is the pasture hill line *and* the timeline of that day (5 clock times); a barn swallow (swallows nest above the hay barn) travels along it as you scroll. The disc stack keeps Book / Call / Find us at hand. Same layout, same motions, same image type as the reference; only the scene and story are ours.

### (3) KV checklist (all six built in the home first screen at 1440×900 and visible; design guide)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Full-bleed photo slider hero, dimmed | 3 stacked slides, 0 radius, black overlay 18 % (RT dimming), ridge-cut foot | full width, height 111 vh (1000 px at 900) | CSS keyframe cross-fade, 18 s cycle (6 s each, 0.4 s fade = RT), each image scale 1.06→1 over its 6 s, `cubic-bezier(.25,1,.5,1)`; the slide stack sits in a `.sp-parallax__layer` (`--sp-par:8%`) | **P01** (first), P02, P03 |
| 2 | Transparent header, logo left, centred nav, white menu disc | wordmark "Makiba" Fraunces 26 px white left (x75); centred 5-item menu (The farm · Rooms · A farm day · Table · Visit), Mulish 15 px tracking .12em white; right: "Book a stay" text link + the white T2 top disc | y20–80, menu centred at x720 | none (header is absolute over the hero, not sticky; on inner pages it sits over the page hero) | — |
| 3 | Centred wide-tracked catch + 2-line sub-line | H1 "Wake up to the milking." Fraunces **4.5rem**/1.1 weight 400 tracking .04em white, centred; sub-line Mulish 1.125rem/1.9 tracking .1em white, 2 lines: "A working dairy farm with four family rooms above the hay barn. / Help with the morning milking, stay for the evening barbecue." | centre column 960 px, y≈300–470 | rises 24 px + fades in once on load (CSS animation 1 s `cubic-bezier(.165,.84,.44,1)`, delay .2 s); **not** `sp-reveal` | — |
| 4 | Fixed right disc stack | T2: white top disc + Book / Call / Find us moss discs with curved labels | fixed right 20 px, y20 / 105 / 190 / 275 | hover lift 3 px 0.3 s | — |
| 5 | Ridge silhouette at the foot carrying labels + bird | T1 two-hump willow/moss ridge, 150 px, with the 5 farm-day times + swallow | bottom 150 px of the viewport, fixed | swallow travels with page progress (CSS scroll-driven) | — |
| 6 | Left vertical dot pager + white birds | 3 dots (8 px, white 50 % / active white 100 %, 14 px pitch) labelled "Dawn / Morning / Evening" for screen readers, synced to the slide keyframes; two white swallows (34/52 px) above the ridge at x≈300 | dots x37, y≈620–660; birds y≈700 | dots change with the 18 s cycle; birds drift 40 px left↔right, 40 s ease-in-out alternate (transform only); all static under reduced motion | — |

Reduced motion / `?sp-static`: only P01 visible at scale 1, H1 visible, dots show the first as active. All six items remain visible in the static screenshot.

---

## 3. Home page

### First screen composition (1440×900)
Hero 1000 px (111 vh) full-bleed: P01 fills it, 18 % black overlay, centred H1 + sub-line + one gold pill "Book a stay →" (RT(d) pill 246×50) 40 px below the sub-line; header over the top; T2 discs at right; dot pager at left; T1 ridge across the bottom 150 px with the 5 times. No table, form, search, counter or card in the first screen. Saturated share: photo is high-key + dimmed; flat colour only the willow/moss ridge (willow HSV s=.34, moss s=.47 → not counted as saturated) and the gold pill (~0.9 %). **Target ≤ 6 %, hard cap 15 %.**
**390×844:** hero 100 svh; header = wordmark left + "Book" link right + menu button; H1 2.5rem/1.15 centred, 3 lines max; sub-line 1rem 3–4 lines; pill; static 96 px ridge with times only at the hero foot; no discs, no dot pager, no birds, nothing absolutely positioned over text.

### Block order (story: dawn → the day → the place → the rooms → the land → helping → booking → journal)
| # | Block | Purpose | Layout & images | Copy |
|---|---|---|---|---|
| 0 | Header (centred) | the one top menu | transparent over hero | — |
| 1 | **Hero (KV)** | KV, one way to book | §2 checklist; `sp-parallax` | H1 + 2-line sub + pill |
| 2 | **The farm (intro)** | who and where, 3 narrative paragraphs | `#F5F5F5` + grain, padding 140/100 (RT(c)); text column 1105 px at x168 (RT about); 3 paragraphs Mulish 1.0625rem/1.9 in 2 columns (para 1 left, 2–3 right); below: r20 photo **P04** 1290×520 (2.48:1) full gutter width; under the photo a row of 4 figures with `sp-count` (48 cows · 4 rooms · 1962 · 5 times), Fraunces 3rem willow-moss + Mulish 13 px caps label | ~170 words (3 paragraphs ≥ 40 words each) |
| 3 | **A FARM DAY (day row)** — `id="day"` | the core: one horizontal row of the day | S1 giant word + sub-title "05:30 to 18:30"; S2 row of **5 white r20 cards** (364 px, padding 20, photo 324×236 r12 inside, then time Fraunces 1.75rem moss, title Fraunces 1.25rem, 30-word text); anchors `#day-0530`…; cards P05, P06, P07, P08, P09; row container `sp-reveal--up` | 5 × 30 words + 1-line intro |
| 4 | **Canopy statement** (T3) | the pause; emotional statement | SVG canopy, centred 2-line statement, two swallows; 760 px tall | 2 lines |
| 5 | **ROOMS above the hay barn** | the 4 rooms + rates | RT restaurant layout: photo **P10** 905×522 (1.73:1) flush to the left page edge, right corners r20, foot cut by a white ridge SVG (60 px); text column right at x995 (S1 small version: "ROOMS" 6.25rem gold above); below, full width 1290 px: **rates table** (S5 1 px ruled rows, 75 px pitch): Room · Sleeps · Price (nowrap, right) — the 4 rooms + barbecue + included row + note line; gold pill "See the rooms →" /rooms/ | 60-word intro + table |
| 6 | **Pasture band** (parallax) | breathing space, the land | full-bleed 640 px, **P11** wide pasture with the herd on the hill; `sp-parallax --sp-par:10%`; top edge cut by the `#F5F5F5` ridge SVG (90 px), foreground: one line bottom-left (ST headline position, x75, bottom 80 px) white Fraunces 2.5rem "48 cows, 70 hectares of hill pasture." in a static (non-moving) Group | 1 line |
| 7 | **HELP — what families help with** | participation + a guest story | ground mist `#DADDD7` + grain, padding 136/124 (RT FAQ band); RT seasons layout: tall r20 photo **P12** 468×620 left at x75; right: S5 ruled list of 5 tasks (bring the cows in · bottle-feed the calves · collect eggs · fork hay · shake butter), each row 75 px, title Fraunces 1.25rem + age note Mulish 14 px + svg arrow fading in (0.8 s, −4 px, RT(g)); under the list a quote card (white r20, padding 32): Okafor story 60 words | 5 rows + 60-word story + 40-word intro |
| 8 | **STAY — the one way to book** | conversion | white band, padding 200/100 (RT stay band); S1 "STAY" left; right column: the 3 booking parts as prose rows (Ask / Confirm / Arrive, 1 px rules, no numbers in circles); gold pill "Book a stay →" /book/; contact line (phone, email, desk hours) | ~80 words |
| 9 | **JOURNAL** | latest posts | `#F5F5F5`; S1 "JOURNAL"; S3 dotted news line: 3 latest posts (date · title · circle arrow), no thumbnails; link "All notes →" | query loop |
| 10 | **Farm letter (subscribe)** | newsletter | mist `#DADDD7` band, 2 columns: left Fraunces 2rem "A letter from the farm, once a season." + 30 words; right `shippress_form_slot` newsletter (§9). No reveal | 40 words |
| 11 | Footer | address, hours, links | moss `#6B6F3A` ground, top edge = willow/moss ridge SVG 120 px; white text: wordmark, address, phone, email, desk hours, season dates; small links (About, Rooms, Rates & booking, Visit, Contact, Newsletter, Journal); "© Makiba Farmstay" | — |

Home photos: **P01, P02, P03 (hero), P04, P05, P06, P07, P08, P09, P10, P11, P12 = 12 photo positions** (≥ 8), no repeats. Home English words ≥ 250 (target ~600), narrative paragraphs ≥ 3 (block 2).

### Comparison with the most recent themes (home block order must not match)
| # | Makiba Farmstay | Ugoki Animation | Hobi Journeys | Kosame Hot Pot | Butai Playhouse |
|---|---|---|---|---|---|
| 1 | full-bleed slider hero + fixed ridge/discs | dark inset window + key-drawing strip | hero with ticket card | split sticky photo stage | twin photo panes |
| 2 | intro text + wide r20 photo + counts | studio note | figures | seal | statement |
| 3 | horizontal day-card row (5) | case wall ledger rows | case wall 2 cols | book frame | season board marquee |
| 4 | illustrated canopy statement | desk contact sheet | narrative | story | season rail |
| 5 | left-flush photo + ruled rates | process | sticky planning | broths | ticket tiles |
| 6 | parallax pasture band | parallax band | parallax band | courses | rehearsal band |
| 7 | mist band: tall photo + ruled task list + story | people | destinations panel | rooms | prices |
| 8 | STAY booking prose band | rates | brief band | the day (time list) | company |
| 9 | dotted news line | journal | journal | people / notices | journal rows |
| 10 | farm letter | quote window / newsletter | newsletter | visit / letter | call sheet / visit |
**Why not similar:** no other theme opens with a full-bleed slider under a fixed bottom ridge and side discs; our day is a **horizontal card row** (Kosame's day is a vertical time list, Ugoki/Butai use ledger/journal rows); the canopy illustration band, left-flush ridge-cut room photo and mist task list are unique to this theme; the parallax band sits at position 6 but between rooms and help, and has no text card (Ugoki/Hobi bands are typographic interludes). No sticky split, ticket card, ledger, marquee or twin panes.

---

## 4. Inner pages (10 pages + journal posts; T1 ridge strip and T2 discs on every page; T3/S1/S2/S5 as listed)

Every inner page: page hero = full-bleed photo 62 vh (min 460 px) with 18 % overlay, H1 Fraunces 3.75rem white bottom-left at x75 (ST headline position), T1 ridge cutting its foot (≥1024 fixed strip; <1024 static), breadcrumb Mulish 13 px caps above the H1.

| Page (slug) | Hero photo | Key content | Signature continuation |
|---|---|---|---|
| **The farm / About** (`/about/`) | P13 | history 1962 → rooms 2014 (3 paragraphs), the 7 people as a **ruled list** (name · role · one line; no 4-person grid), counts (`sp-count`) | T1, T2, **T3 canopy** above the people list (smaller, 480 px tall), S1 "FAMILY" |
| **Rooms** (`/rooms/`) | P15 | 4 rooms, each a left/right alternating r20 photo + text pair (photo 1.73:1 left-flush on odd, right-flush on even, ridge-cut foot): beds, sleeps, view, price; shared: kitchenette, laundry, cots | T1, T2, RT left-flush ridge-cut photo, S1 "ROOMS" |
| **A farm day** (`/farm-day/`) | P05 | the 5 times in detail (anchors `#t-0530`…), each a full-width S5 ruled row with a small r20 photo for 3 of them (P07, P08, P09), age notes, what to wear, rainy-day plan | **T1 ridge labels link here**; S2 card row of "what to bring" (5 cards, text only, white r20) |
| **Help on the farm** (`/help/`) | P12 | 5 tasks with ages and safety rules (closed shoes, an adult with under-8s, no entry to the bull pen), what children never do | T1, T2, mist band + S5 ruled list, **T3 canopy** small at page end |
| **The herd** (`/herd/`) | P14 | 48 cows, Noor on cow care, grazing April–October, calving notes ("we can't promise a birth"), milk to the dairy | T1, T2, `sp-parallax` band with P16, S1 "HERD" |
| **Farm table** (`/table/`) | P16 (also used as the Herd band — different page) | breakfast (07:00, included), butter session, barbecue nights (Tue/Thu/Sat, €22/€11), allergies note, picnic baskets | T1, T2, S2 white r20 card row (menu items, text), S1 "TABLE" |
| **Rates & booking** (`/book/`) | P17 | full rates table (6 items, §0), note line, booking prose (Ask/Confirm/Arrive), **booking form slot** (§9), cancellation terms | T1, T2 (Book disc highlighted: ring 2 px gold), S1 "STAY" |
| **Visit** (`/visit/`) | P18 (lane to the farm) | address, how to arrive (car 15 min from Larkfield station; pick-up on request), season and hours table (stacked on mobile), FAQ (8 Q&A, S5 ruled rows) | T1, T2 ("Find us" disc ring), S3 dotted rules for FAQ |
| **Contact** (`/contact/`) | none — mist `#DADDD7` hero 360 px with the T3 canopy (small) | contact form slot (§9), phone, email, desk hours, mailto fallback | T1, T2, **T3 canopy as hero** |
| **Newsletter** (`/newsletter/`) | none; `#F5F5F5` ground with T3 canopy 300 px | what the seasonal letter contains (4 per year: calving spring, hay summer, harvest autumn, winter rest), newsletter slot (§9) | T1, T2, T3 |
| **Journal** (posts page, `/journal/`, empty content) | — | S3 dotted news rows with r20 thumbnail 160×110 | T1, T2 |
| Post (single) | featured image | 1 demo post "Biscuit, the calf born at 04:10" (category *Farm days*, tags *calves*, *spring*) + 2 more posts (*Rooms*, *Table*) | T1 |

T1 + T2 appear on all pages; T3 continues on About, Help, Contact, Newsletter (4 inner pages); S1 giant words on About, Rooms, Herd, Table, Book.
No image repeats within a page. Cross-page reuse only as listed: P05, P12 (home + inner hero), P07/P08/P09 (home + Farm day rows), P16 (Table hero + Herd band).

---

## 5. Colour and type

### Colour (reference RT(a) codes kept; one swap with reason)
| Token | Hex | Share | Source / reason |
|---|---|---|---|
| `base` ground | **#F5F5F5** + paper grain 4 % | ~55 % | RT base, unchanged |
| `white` | **#FFFFFF** | ~20 % | RT cards / bands |
| `ink` | **#474143** | text | RT text |
| `willow` (main) | **#A1A46D** | ~5 % | **swap** for RT green #0AA64E: the row's palette Yanagicha (willow tea) and the "quiet palette" note; a vivid #0AA64E fights the grass in every pasture photo. Relationship kept: one green for fixed controls & ridge. |
| `moss` (main, text-safe) | **#6B6F3A** | ~5 % | RT ridge ~#3A8A00 → olive equivalent; white on moss 5.3:1 (labels, discs, footer) |
| `leaf` (canopy mid tone) | #8C9058 | <1 % | SVG only |
| `gold` accent | **#C49B38** | ~4 % | RT gold, unchanged: giant Latin words, pills, walnuts, focus ring |
| `gold-ink` (pill text) | #2B2829 | — | RT pills use white text (2.5:1, fails AA); we keep the gold fill and use dark text 5.6:1 |
| `mist` band | **#DADDD7** | ~6 % | RT mist band, unchanged |
| `rule` | #474143 at 100 % (1 px) / dotted | — | RT hairlines |
First-screen saturated share ≤ 15 % hard cap (target ≤ 6 %, RT 3.0 %). No cream/beige ground. No large saturated area anywhere.

### Type (font_direction **serif**)
- Latin display/headings: **Fraunces** (variable, opsz 9–144, wght 300–700; we use 400/500), `font-variation-settings:"SOFT" 50, "WONK" 0`.
- Latin body/UI: **Mulish** (variable 300–800; 400/500/700).
- **zh-TW** headings: `"Fraunces", "Noto Serif TC", serif` (Noto Serif TC subset bundled, 500/700); body: `"Mulish", "Songti TC", "PMingLiU", "Noto Serif CJK TC", serif` (system Ming, **no bundled zh font, no Japanese font** in the body stack — repo rule).
- **ja** headings: `"Fraunces", "Noto Serif JP", serif` (subset bundled, 500/700); body: `"Mulish", "Hiragino Mincho ProN", "Yu Mincho", "Noto Serif CJK JP", serif`.
- fr/de: Latin stacks + `hyphens:auto`.
- Loaded **only via theme.json `fontFamilies` + `fontFace`** (woff2 in assets/fonts, each listed in theme-meta `fonts[].files` with license OFL); editor and front identical. `:lang()` rules → copy `shared/inc/editor-lang.php` to `inc/` and require it. CJK subset: use the Hokuto/Hada substitute method (the subset script is broken).
- Scale (desktop / 390 px; source token in brackets):
  | Role | Size / line-height / weight / tracking |
  |---|---|
  | Giant section word | **6.25rem** (100 px) / 1 / 400 / .02em, caps, gold [RT(b) ~100 px, 500] — mobile 3.25rem — **largest type** |
  | Hero H1 | **4.5rem** / 1.1 / 400 / .04em [RT(b) 32 px catch, scaled up for the ≥4.25rem gate] — mobile 2.5rem |
  | Inner H1 | 3.75rem / 1.1 / 400 — mobile 2.25rem |
  | Canopy statement | 2.625rem (42 px) / 1.5 / 400 / .1em [RT(b) about statement 42/63, .1em] — mobile 1.5rem / .06em |
  | Section sub-title | 1.625rem (26 px) / 1.4 / 500 [RT(b) 26 px] |
  | Card title | 1.25rem (20 px) / 1.5 / 500 / .1em [RT(b) 20/30, 2 px] |
  | Body | 1.0625rem (17 px) / 1.6 / 400 [RT(b) 17/27.2] ; long-form paragraphs 1.9 |
  | Small label | 0.8125rem (13 px) caps / 500 / .03em [RT(b) 13 px] |
  | CJK | headings ×0.75 of Latin, body line-height 1.85, tracking .09em [RT(b) JP .09em / 2.1] |

---

## 6. Photos (18; Grok, one at a time; Read every one; ≤300 KB, ≤2000 px, webp)

**STYLE (one string, all photos):**
`High-key documentary photograph, bright soft morning daylight, airy and clean, gentle pastel greens and warm whites, natural film-like colour, shallow depth of field, real people candid and unposed, international and diverse, modern working dairy farm in rolling green hill country, no Japanese elements, no text, no logos, no brands, no watermarks, 35mm lens, eye-level, uncluttered composition with negative space`

| ID | Subject / composition | Ratio | Used on (page · block) | Home |
|---|---|---|---|---|
| P01 | Dawn: a farmer in overalls leads a black-and-white cow through the open parlour door; a child (~7) holds the wooden gate; light floods from the door; subject centre-low, top 40 % calm wall for the H1 | 16:10 | Home · hero slide 1 (KV) | ✔ |
| P02 | Morning mist on the pasture, a family of four walking toward the grazing herd, small figures lower third, wide sky | 16:10 | Home · hero slide 2 | ✔ |
| P03 | Golden evening farmyard, string lights in a walnut tree, long table being laid, barn behind, soft wide view | 16:10 | Home · hero slide 3 | ✔ |
| P04 | Wide panorama of the farm: white-and-timber barn with rooms in the loft windows, hill pasture, cows dotted | 5:2 | Home · intro wide photo | ✔ |
| P05 | Inside the bright milking parlour: a child's hands guided by an adult putting a cup on, cow flank, clean steel | 1.37:1 | Home · day card 05:30; Farm day · page hero | ✔ |
| P06 | Breakfast table in a barn kitchen: milk jug, butter, eggs, bread, children's hands reaching | 1.37:1 | Home · day card 07:00 | ✔ |
| P07 | A teenager and a child bottle-feeding two calves in straw | 1.37:1 | Home · day card 10:00; Farm day · 10:00 row | ✔ |
| P08 | Dairy room: children shaking glass jars of cream into butter, a man in a white apron laughing | 1.37:1 | Home · day card 13:00; Farm day · 13:00 row | ✔ |
| P09 | Evening barbecue: grill smoke, a cook turning vegetables and sausages, families at a long table behind | 1.37:1 | Home · day card 18:30; Farm day · 18:30 row | ✔ |
| P10 | Family room under exposed roof beams: white linen, bunk alcove, small window onto the pasture | 1.73:1 | Home · rooms photo | ✔ |
| P11 | Very wide hill pasture with the herd grazing, big pale sky, low horizon at 60 % | 21:9 | Home · parallax band | ✔ |
| P12 | A child carrying an egg basket across the yard, hens around, adult behind (tall) | 3:4 | Home · help photo; Help · page hero | ✔ |
| P13 | Three generations of the farm family by the barn door, relaxed, mid-distance (not a portrait grid) | 16:10 | About · hero | |
| P14 | Herd manager checking a cow in the parlour, calm, side light | 16:10 | Herd · hero | |
| P15 | The largest room (Rafters Suite) with two double beds and a reading nook, morning light | 16:10 | Rooms · hero | |
| P16 | Breakfast spread close-up from above on a wooden table (yoghurt, butter, berries, bread) | 16:10 | Table · hero; Herd · wide band (`sp-parallax`) | |
| P17 | A family arriving with bags at the barn's outside stair, a farmer waving | 16:10 | Rates & booking · hero | |
| P18 | Tree-lined country lane to the farm gate, morning light, hills behind | 16:10 | Visit · hero | |

That is **18 images** (P01–P18), within 12–18; **12 on the home page**. Zero cut-outs. The canopy, swallows, ridge and icons are our own SVG (not counted as photos). No image repeats within a page. Reject and regenerate any photo with text, logos, broken faces/hands, dark/moody exposure or a different style.

---

## 7. Motion and scroll effects (sp-scroll v1; copy assets unchanged)

| Effect | Where | Source & reference timing | Our values |
|---|---|---|---|
| `sp-parallax` (**required**) | **Home hero** (`.sp-parallax__layer` wrapping the P01–P03 slide stack, foreground H1/sub/pill in a separate static Group) **and** home **Pasture band** (P11 as Cover background) ; Herd page band (P16) | kazenoyama.jp interval photo parallax: GSAP scrub translateY +43 → −17 px (RT(g)); hero image settles | hero `--sp-par:8%`; pasture band `--sp-par:10%`; Herd band 8 %. Mobile kept: `@media (max-width:781px){--sp-par:6%}` (≥6 px measured shift) |
| `sp-reveal sp-reveal--up` + `sp-stagger` | home blocks 2 (text columns, figures row), 3 (**row container only**, never the scrolling cards), 5 (text column only; never the rates table), 7 (list wrapper + story card), 8, 9; inner page sections the same way | kazenoyama.jp block rise-in: IO rootMargin 0 0 −20 %, opacity 0→1, translateY 80→0, 1 s, `cubic-bezier(.165,.84,.44,1)`, stagger ~100 ms | `--sp-dist:24px` (≤30 rule), `--sp-dur:1s`, easing `cubic-bezier(.165,.84,.44,1)`; stagger built-in 0.12 s |
| `sp-count` | home intro figures (48 · 4 · 1962 · 5), About figures | our addition (RT has none); runs once | default 1.2 s easeOutCubic |
Not used: `sp-marquee`, `--wipe`, `--mask`. **Hero: no reveal.** Forms, rates tables and legal text: no reveal. ≥3 `sp-reveal` below the fold on home (blocks 2, 3, 5, 7, 8, 9 give ~10). Ridge swallow and slide cross-fade are CSS keyframes/scroll-driven decorations (§1 T1, §2), all off under reduced motion, `?sp-static`, editor. No scroll listeners, no GSAP/Splide/Swiper.

---

## 8. Responsive rules (hard)
- **390 px first screen:** no vertical text, no absolutely positioned labels over text; ridge strip static with times only; discs, dot pager and birds hidden; H1 ≤ 3 lines.
- No horizontal overflow at 390 and 1280 (day-card row scrolls inside its own `overflow-x:auto` container with `overscroll-behavior-x:contain`; the page itself never scrolls sideways).
- **Rates table ≥782 px:** full content width (1290 px at 1440; 100 % of container at 800), columns Room / Sleeps / Price, price column `white-space:nowrap; text-align:right; width:1%` (never clipped); row 75 px pitch, 1 px ink rules.
- **Every table on mobile (<782 px) stacks:** each row becomes a block — name (Fraunces 1.125rem), then "Sleeps" line, then price right-aligned on its own line; labels via visible text in markup (not CSS `content`).
- Inner page heroes 390: 52 svh, H1 2.25rem, bottom-left 20 px gutter.
- Two-column blocks stack at <960 px (photo first). Left-flush room photo becomes full width r0 with r20 bottom corners.
- Fixed elements (T1 strip, T2 discs) only ≥1024 px.

---

## 9. Forms (form contract v1 — this theme has `steps/form-contract-v1`)
- Copy `pipeline/assets/forms/shippress-forms.php` → `inc/`, CSS/editor JS → `assets/`, require in functions.php. Dynamic `shippress_form_slot` only; no fake forms, no mail/subscribe backend, no plugin detection stored at import.
- **Contact page** (`/contact/`, block after the intro, left column 640 px, right column phone/email/hours): `shippress_form_slot( ['kind'=>'contact','fallback'=>$fallback] )` where `$fallback` is the buffered literal mailto button "Email the farm" → `mailto:stay@makibafarm.example?subject=…` (gold pill markup, unchanged class/href; never a link to /contact/).
- **Rates & booking** (`/book/`, under the booking prose, before cancellation terms): same contact slot, fallback = mailto pill "Ask for dates" with subject "Stay request". With CF7/WPForms present the first published form renders here. Suggested CF7 fields documented in brand.md for site owners: name*, email*, arrival date*, nights* (min 2), room (select: 4 rooms), adults*, children + ages, message. The theme does not create these forms.
- **Newsletter page** (`/newsletter/`, standalone page, centred 560 px column under the 4-season description) and **home block 10** (right column): `shippress_form_slot( ['kind'=>'newsletter','email'=>'stay@makibafarm.example','label'=>_t('forms_email'),'submit'=>_t('forms_subscribe'),'notice'=>_t('forms_mail_notice'),'subject'=>_t('forms_mail_subject')] )`. Without plugins: required email input + submit (native mailto POST) + visible notice. MailPoet (explicit id) → MC4WP → opt-in CF7/WPForms ids only. Footer: link to /newsletter/ only (no second slot).
- **Fields & states:** input height 52 px, padding 0 18 px, 1 px ink border, r12 (cards r20 → inputs r12), Mulish 1rem; label above, Mulish 13 px caps .03em; submit = gold pill (r40, 50 px tall, `#C49B38` fill, `#2B2829` text 700); **focus** 2 px `#C49B38` outline offset 2 px + border moss; **error** text and 1 px border `#9A3B2E` (5.9:1 on #F5F5F5), message under the field; **success** text moss `#6B6F3A` with a check icon; notice text 14 px ink 80 %.
- **Tokens (style.css):** `--sp-form-accent: var(--wp--preset--color--gold)`, `--sp-form-on-accent: var(--wp--preset--color--gold-ink)`, `--sp-form-radius: 12px`, `--sp-form-focus: var(--wp--preset--color--gold)`, `--sp-form-surface: #FFFFFF`, `--sp-form-text: var(--wp--preset--color--ink)`. **Dark ground** (footer/moss sections if a form ever sits there): surface `rgba(255,255,255,.08)`, text `#FFFFFF`, border `rgba(255,255,255,.6)`, focus gold, error `#F2B8AE`, success `#E3E6C8`. Scoped CF7 / WPForms / MailPoet / MC4WP / Jetpack / `.wp-block-form` selectors only; no global input selectors.
- **i18n (5 languages en, zh-TW, ja, fr, de):** semantic keys in `inc/i18n/en.php` first: `forms_email` ("Your email"), `forms_subscribe` ("Send the request"), `forms_mail_notice` ("Opens your email app. Send the message to ask for the farm letter; you are not subscribed yet."), `forms_mail_subject` ("Farm letter request"), plus `contact_email` ("Email the farm"), `book_email` ("Ask for dates"), `book_subject` ("Stay request"). Extract with `L10N_SEMANTIC=1`; translate all four other dictionaries (local rewrite); check dynamic block attributes in every locale.
- Forms: **no `sp-reveal`**, never in the home first screen. Gates: `form-runtime-check.php` (5 locales, no plugins) and `repo-gates.sh forms` must pass; real CF7 visual check at 390 px and desktop, light and dark grounds, without submitting.

---

## 10. Similarity to the reference (target 80 %)
| Dimension | Reference (token) | Makiba Farmstay |
|---|---|---|
| Ground / cards / band | #F5F5F5 grain 55 %, #FFFFFF 20 %, mist #DADDD7 5 % (RT(a)) | same codes and shares (55 / 20 / 6 %) |
| Text | #474143 (RT(a)) | same |
| Fixed-control green / ridge | #0AA64E discs, ~#3A8A00 ridge (RT(a)) | willow #A1A46D + moss #6B6F3A (swap, §5 reason) — same roles |
| Accent | gold #C49B38 pills + giant words (RT(a)) | same code, same uses; pill text dark (contrast) |
| First-screen saturated share | 3.0 % (RT(a)) | target ≤ 6 %, cap 15 % |
| Type roles | Jost sans + gothic JP; giant Latin ~100 px gold; statement 42/63 .1em; body 17/27.2 (RT(b)) | Fraunces serif + Mulish (row font_direction serif); giant 100 px gold; statement 42/63 .1em; body 17/1.6 |
| Gutter / column | 75 px gutter; about column 1105 px at x168 (RT(c)) | same |
| Section padding | 140 top topics; stay 200/100; FAQ 136/124 (RT(c)) | intro 140/100; STAY 200/100; HELP 136/124 |
| Hero | 1440×1005 (111 vh), 0 radius, ridge-cut foot 109 px, cross-fade, scale 1.06→1 (RT(c)(e)(g)) | 111 vh, 0 radius, ridge foot 150 px (fixed strip), cross-fade 0.4 s, 1.06→1 |
| Cards | 364 px r20 white, 20 px gap, padding 20, photo 1.37:1, row overflows right (RT(c)(d)(e)) | same |
| Pills | r40, 246×50, gold, arrow right (RT(d)) | same size/shape |
| Text/photo pair | 905×522 left-flush photo, right corners r20, ridge-cut foot; text at x995 (RT(e)) | same (rooms block) |
| Ruled list | 1 px #474143, 75 px pitch, svg arrow fade 0.8 s −4 px (RT(d)(g)) | same (rates, help list) |
| Discs | 60 px, y105/190/275, shadow 0 4 4 rgba(0,0,0,.05), curved labels (RT(f)) | same geometry; moss fill |
| Ridge strip | fixed, 150 px, grain, labels white 17 px, bird marker (RT(f)) | fixed, 150 px, grain, labels 15/13 px white, swallow marker |
| Canopy | two-green leaves + red fruit, both sides, 2 white birds (RT(f)) | walnut/hop leaves in willow/moss + gold walnuts, both sides, 2 white swallows |
| Reveal | IO, 80 px rise, 1 s, cubic-bezier(.165,.84,.44,1), stagger (RT(g)) | sp-reveal--up 24 px (≤30 rule), 1 s, same easing, stagger .12 s |
| Parallax | +43 → −17 px scrub on interval photo (RT(g)) | sp-parallax 8–10 % on hero + pasture band |
| Hover | .3/.4 s cubic-bezier(.19,1,.22,1) (RT(g)) | same |
Our own: all photos (Grok), all copy, all SVG (ridge, canopy, swallows, icons), wordmark. Nothing copied from either site.

---

## 11. Home acceptance checklist
1. First screen 1440×900 shows all six KV items (P01 slide, centred header + one menu, H1 ≥ 4.25rem, disc stack, 150 px ridge with 5 times + swallow, dot pager + 2 swallows); `?sp-static` shows P01.
2. No table, form, search, card or counter in the first screen; saturated share ≤ 15 % (`check-first-screen.py`).
3. Block order exactly as §3 (0–11); 12 photo positions P01–P12, none repeated; zero cut-outs.
4. Home ≥ 250 English words (target ~600), ≥ 3 narrative paragraphs ≥ 20 words (intro block).
5. All numbers match §0 (5 times, 4 rooms, 48 cows, 1962/2014, rates €165/185/210/245, €22/€11, 2 nights, 30 %, 14 days, desk 08:00–19:00).
6. Every "Book a stay" → /book/; only one header menu; ridge labels are anchors, not a `wp:navigation`.
7. T1, T2, T3 unmistakable (full-size ridge, solid discs, dense canopy); giant gold words on 4 home blocks.
8. `sp-parallax` on hero layer and pasture band, ≥ 6 px shift desktop and mobile; 0 under reduced motion (`check-parallax.mjs`); hero has no `sp-reveal`; ≥ 3 reveals below the fold; nothing transparent after scrolling to the end.
9. 390 px: no overflow, no overlapping/absolute labels, no vertical text, ridge static with times only, no discs. Rates table full width ≥782 px with nowrap right-aligned prices; stacked on mobile.
10. Fonts from theme.json fontFace: Fraunces/Mulish; zh-TW/ja headings Noto Serif TC/JP; editor = front (`check-editor-fonts.mjs`).
11. Newsletter slot in home block 10 with email + submit + notice (no plugins); no reveal on it.
12. `auto-gates.mjs … en … 1 1` pass; `pattern_source.py` pass.
