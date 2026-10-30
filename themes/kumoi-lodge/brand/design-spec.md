# Kumoi Lodge: design spec (stage 1, binding for implementation)

Slug `kumoi-lodge`, mountain lodge, type **hospitality** (WooCommerce compatible but not needed; booking = request form / mailto, works with no plugins). Row b19-3: archetype editorial-magazine, hero **framed-window**, nav **top-bar**, first screen **full-bleed-photo-info-bar**, page structure **booking-led**, font direction **serif**.
Reference (only one): **glänta | glamping village — https://glanta-glamping.com/** (`reference.md`, `reference-tokens.md`, screens in `ref/`). IMAGERY: **photo**. We borrow structure, shapes, colour relationships, measured values and the key-visual concept. We do not copy its photos, copy, hand-drawn wordmark or logo.

Story in one line: *Come in out of the weather; the stove is already lit.* A lodge on a ridge that keeps five rooms (three open this month) above the cloud line: the keeper setting a kettle on the dining-room stove with coats on the pegs, then which rooms are open, how a night is held and what the table serves.

Token references below are written `tok(a)` … `tok(g)` = sections of `reference-tokens.md`.

---

## 0. Fixed brand facts (every page, all five languages, identical numbers)

- **Kumoi Lodge**, Harrow Ridge, **1,640 m**, above the Vell valley (fictional; no country named). Postal line: *Kumoi Lodge, Harrow Ridge Track 4, 8742 Vell*. Email `stay@kumoilodge.example`, phone `+00 41 555 0164` (fictional format; keep identical in every language).
- Built **1931** as a herders' hut, opened as a lodge **1964**; present keepers since **2009**.
- **Five rooms**; **open this month (November): 3 of 5** (Ridge, Larch, Bunk Loft). Cairn Room and Window Room reopen **26 Dec**. Next free night line: **Fri 14 Nov**.
- Seasons: **1 May – 30 Nov** and **26 Dec – 15 Mar**. Closed 1–25 Dec and 16 Mar – 30 Apr.
- Hours: rooms ready **15:00**, arrive by **17:00** (track closes to cars at dusk), check-out by **10:00**; phone/desk **08:00–20:00**.
- Currency **EUR (€)** in every language, no conversions.

### Rooms (5)
| Room | Sleeps | Size | Bed | Open in Nov | Photo |
|---|---|---|---|---|---|
| Ridge Room | 2 | 18 m² | double under the eaves, window to the east | yes | R1 |
| Larch Room | 2 | 16 m² | twin, larch-panelled, small desk | yes | R2 |
| Bunk Loft | 6 (per bunk) | 30 m² | six bunks, shared, for walkers | yes | R3 |
| Cairn Room | 4 | 26 m² | double + two singles, family | from 26 Dec | R4 |
| Window Room | 1 | 11 m² | single, desk at a deep window | from 26 Dec | R5 |

### Rates (7 lines; per night, half board = supper + breakfast; home rates block, Rates & Booking page and room cards use exactly these)
| Item | Price |
|---|---|
| Ridge Room, 2 guests, half board | €210 |
| Larch Room, 2 guests, half board | €190 |
| Cairn Room, up to 4 guests, half board | €320 |
| Window Room, 1 guest, half board | €110 |
| Bunk Loft, per bunk, half board | €62 |
| Packed lunch for the trail | €12 |
| Wood-fired tub, 45 min, per room | €18 |
Booking terms: **30% deposit**, keeper confirms **within 24 hours**, free cancellation up to **14 days** before arrival. "Half board from €62" is the only short form allowed.

### How a night is held (the schedule; used on home, The Stay, Rates & Booking)
15:00 rooms ready, tea on the stove · 16:30 tub fire lit · 18:30 supper at the long table · 21:30 stove banked, lamps low · 07:00 breakfast · 10:00 check-out (bags can stay till 14:00).

### Booking flow (4 steps, written as ruled paragraphs, never a step grid)
1. Choose dates and a room. 2. Send a request (form or email). 3. The keeper confirms within 24 hours and asks for the 30% deposit. 4. Arrive by 17:00; leave the car at the gate car park if the track is iced (keeper fetches you, 10 min).

### People (7, fictional, international, no portraits except K1)
| Name | Role |
|---|---|
| Ines Halvorsen | keeper since 2009 (K1 photo) |
| Tomas Reyes-Bauer | co-keeper and supper cook |
| Amara Okoye | bread and breakfast |
| Lio Brandt | track, weather and walks |
| Yusuf Demir | wood, stove and repairs |
| Clémence Aubry | bookings and the desk |
| Sofia Marchetti | rooms and linen |

### Notes / stories (3 journal posts, fixed)
1. "The night the track closed" (snow, twelve guests, one pot) — featured R5.
2. "Bread for twelve" (Amara's morning dough) — featured K2.
3. "First snow on the ridge" (the walk to the cairn) — featured W2.

### Walks (3)
Cairn Loop 2 h 30 min, easy, 6.4 km · Ridge to the Saddle 4 h, moderate, 11 km · The Old Track down to Vell 1 h 45 min, easy, 5 km (descent). No difficulty claims beyond these words.

No awards, guarantees, real media, real brands or real people.

---

## 1. Signature techniques (three, obvious at a glance) + a closing device

All three come from glanta and keep its shapes, proportions and contrast: rounded-30 photos on very pale tinted grounds, 1 px ink hairlines and outline pills, white type only on photos.

### T1. Room card with a hairline split row (glanta ROOMS, `ref/scroll-glanta-4000.png`, `ref/scroll-glanta-5200.png`)
- **Reference:** on a pale lichen ground, a centred column 1030 px (72% of 1430): a rounded-30 photo at 1.85:1 (1030×557) with outline circle arrows inside its bottom corners; 52 px below it one row: left column = room title 24 px/500/tracking 0.08em, two meta lines 13.5 px #505050, a 1 px outline pill 225×48 r50; then a **1 px black vertical rule** running the full height of the row; right column = 17.3 px description (lh 30 px) and a meta amenities list. Next card 86 px (5.99vw) below. `tok(c)(d)(e)(f)`
- **Ours (home block 3 "Open this month", 3 cards: Ridge R1, Larch R2, Bunk Loft R3):**
  - Column `max-width: 1030px` centred (`alignwide` with `wideSize: 1030px`). Photo wrapper `aspect-ratio: 1.85/1; border-radius: 30px; overflow: hidden;` with `sp-reveal sp-reveal--zoom` **on the wrapper** (img inside, object-fit cover).
  - Circle arrows: 51×51 px, `1px solid #fff`, radius 50%, white arrow glyph 18 px, positioned 24 px from the bottom and 24 px from left / right inside the photo (`position:absolute` inside the photo wrapper; decorative left `←` aria-hidden, right `→` is a link to `/rooms/#ridge` etc. with aria-label). They are the only absolutely positioned items and sit on the photo, never on text. Mobile: 40 px.
  - Split row: `display:grid; grid-template-columns: 1fr 1px 1fr; column-gap: 42px; margin-top: 52px;` middle cell = `background:#3C342C` (1 px wide, stretches the row height). Left: h3 Fraunces 400 **1.5rem** (24 px), lh 42 px, `letter-spacing: .08em`; meta (Nunito Sans **0.846rem**/13.54 px, lh 22.6 px, tracking 0.02em, colour `#5E564E`): "Sleeps 2 · 18 m²" / "Half board €210 a night"; pill "Hold this room" 225×48, `1px solid #3C342C`, radius 50 px, padding 8px 30px, margin-top 42 px, Nunito Sans 0.9375rem tracking .05em; hover = fill `#3C342C`, text = ground colour `#E0E5C5` (glanta inversion, `tok(d)`). Right: description Nunito Sans **1.08rem** (17.28 px), lh 30 px, tracking .05em, 2–3 sentences; amenities meta list (same meta style) 3 lines.
  - Card gap **86 px**; section heading → first card **82 px**.
  - Below the third card one meta line centred-left on the column: "Cairn Room and Window Room reopen 26 Dec · See all five rooms →".
- **Must not be diluted:** the photo stays 1.85:1 and r30 (not 16:9, not r8, not square); the vertical rule is solid ink 1 px and runs the full row height (not grey, not dotted, not a short tick); the pill stays an outline pill on the pale ground (not a filled button); the column stays ≈72% centred with lots of side ground.
- **Mobile <782:** photo full width minus 24 px gutters, `aspect-ratio: 1.85/1` kept, row stacks: left column → a **horizontal** 1 px rule 100% wide (the vertical rule turns 90°) → right column. Pill 100% width max 320 px. Card gap 69 px.

### T2. Out-of-focus opener with two small text columns (glanta CONCEPT opener, `ref/scroll-glanta-1800.png` and the blurred foliage stage before it)
- **Reference:** after the hero, a full-viewport, deliberately blurred photograph; two small text columns start at 20.1% of the width with a 9.5vw gap: headline lines left, a paragraph right; the rest is large empty, soft ground. Text stops are vertically centred in 100 lvh stops. `tok(c)(e)(g)`
- **Ours (home block 2, photo B1 = pale out-of-focus lamp-lit window with kettle steam):**
  - Full-bleed Cover, `min-height: 100svh` (min 720 px), `sp-parallax` with `--sp-par: 10%` (mobile 6%). Image B1 is generated already soft; add CSS `filter: blur(6px)` on the image layer for safety (inner pages: `filter: blur(16px)` on a sharp photo, see §4). Overlay `rgba(244,236,224,.18)` (pale, keeps ink legible).
  - Inner grid: `padding-left: 20.1vw; padding-right: 8vw; display:grid; grid-template-columns: minmax(0,1fr) minmax(0,1fr); column-gap: 9.5vw; align-items: center`. Left: four short headline lines, Fraunces 300 **2.52rem** (40.32 px), lh **1.5**, ink `#3C342C`, tracking 0.02em (not caps here; caps are only the section labels): "Above the weather / there are five rooms, / one stove / and a long table." Right: paragraph Nunito Sans 1.08rem lh 30 px tracking .05em, ≈70 words, ink.
  - Both columns `sp-reveal sp-reveal--up` (`--sp-dist:30px; --sp-dur:1.5s; --sp-ease:cubic-bezier(.25,.1,.25,1)`), right column `--sp-delay:.15s`.
- **Must not be diluted:** the photo must read as **out of focus** (no sharp edges anywhere), cover the whole viewport, and the two columns must stay small (≤ 2.52rem) with ≥ 20% empty ground on the left and generous ground below. No card or panel behind the text.
- **Mobile <782:** `padding: 96px 24px`; columns stack with **89 px** gap (`tok(c)` mobile); left lines 1.75rem lh 1.5; still full-height blurred photo; no absolute positioning.

### T3. Rounded facility box: half text with three outline round icons, half photo; 2-up r30 squares beside (glanta FACILITIES / FOOD, `ref/scroll-glanta-7600.png`, `ref/scroll-glanta-8800.png`)
- **Reference:** a 1 px black bordered box with radius 30: one half text with three outline round icons (≈44 px, 1 px) and tiny captions, the other half a photo filling to the box edge; next to/under it 2-up 1:1 r30 photo cards with a title and short text. Food = two 1:1 r30 squares (500×500) with h3, 2–4 lines and a small "menu example" list. `tok(d)(e)(f)`
- **Ours (home block 5 "How a night is held", photo N1 in the box, F1 + K1 as the 2-up squares under it):**
  - Box: width 1030 px, `border:1px solid #3C342C; border-radius:30px; overflow:hidden; display:grid; grid-template-columns: 1fr 1fr;` min-height 520 px. Left half padding 56px 56px 48px: lead paragraph (1.08rem lh 30 px, ≈55 words); then a row of **three outline icon circles 44 px** (`1px solid #3C342C`, radius 50%, inline SVG line icons 22 px stroke 1.25 ink: **stove**, **boots**, **lamp**), each with a caption under it Nunito Sans 0.75rem tracking .06em: "Stove lit at 15:00", "Boots dried overnight", "Lamps low at 21:30"; gap 40 px. Then the schedule as six hairline rows (1 px `rgba(60,52,44,.35)` top rule each, padding 10px 0, `grid-template-columns: 72px 1fr`, time `white-space:nowrap` Nunito Sans 600 0.875rem, text 0.9375rem). Right half: N1 photo `object-fit:cover; height:100%` (the box's r30 clips the outer right corners; no extra radius inside).
  - Under the box (margin-top 30 px): 2-up 1:1 r30 squares, each `(1030-30)/2 = 500 px`, gap 30 px: F1 "The tub, lit at 16:30" and K1 "Ines keeps the stove"; under each h3 Fraunces 1.5rem + 2 lines 1.08rem.
  - The same box + squares vocabulary is used for **the table** (home block 6: two 1:1 r30 squares T1 supper / T2 breakfast with h3, 3–4 lines and a "Tonight's pot" meta list of 5 items — glanta food layout).
- **Must not be diluted:** the box border is 1 px ink and fully visible on all four sides with r30 corners; the photo touches the box edge (no inner padding around it); the icons are outline circles (no fill, no colour); squares stay exactly 1:1 r30.
- **Mobile <782:** box stacks: photo first (aspect 1.4:1) then text (padding 28px 24px); icons stay in one row (3 × 44 px fit at 342 px); squares become 1-up full width, gap 40 px.

### Closing device (T4, glanta footer, `ref/scroll-glanta-12800.png`) — on every page
Full-bleed dusk photo D1 (`min-height: 760px`, mobile 560 px), `sp-parallax --sp-par:8%` (mobile 5%), gradient `linear-gradient(to top, rgba(30,26,22,.55), rgba(30,26,22,0) 55%)`. Bottom-left (padding 50 px, `tok(c)` frame), white: "Kumoi Lodge" Nunito Sans 0.8125rem, postal line 0.8125rem; then the **wide-tracked index row** Nunito Sans 400 **1.375rem** (22 px), `letter-spacing: .1em`, uppercase, gap 24px, wraps to two lines: ROOMS · THE STAY · THE TABLE · RATES · WALKS · GETTING HERE · KEEPERS · NOTES · CONTACT. Right-bottom: language switcher (EN 中文 日本語 FR DE) 0.8125rem white and the ember ring "Hold a room" (see §3). Copyright line 0.75rem. Not a fixed badge; not sticky.

### Continuation to inner pages (each technique on ≥ 4 inner pages)
| Page | T1 split row | T2 blurred opener (page head) | T3 box / r30 squares | T4 close |
|---|---|---|---|---|
| Rooms | **all 5 cards** (R1–R5) | yes (B1) | — | yes |
| The Stay (how a night is held) | — | yes (N1 blurred) | **full box** (F1) + squares | yes |
| The Table | **supper & breakfast as split rows** under a wide K2 photo | yes (K1 blurred) | **squares** T1 + box with H1 (the stove) | yes |
| Rates & Booking | **each room as a compact split row** (no photo) above the rate table | yes (P1 blurred) | **booking box** (text + icons calendar/letter/key + photo R1) | yes |
| Walks & Weather | **3 walk cards** (W1, P1, M1) | yes (W2 blurred) | — | yes |
| Getting here | — | yes (B1) | **access box** (icons car/boots/phone + photo M1) | yes |
| Keepers (about) | **7 people as text-only split rows** (name/role left, rule, 2 lines right) | yes (K2 blurred) | squares K1 + F1 | yes |
| Notes (journal index, archive, single) | **post cards as split rows** (R5, K2, W2) | index: yes (P1 blurred); single: featured image r30 1.85:1 | — | yes |
| Contact | — | yes (R2 blurred) | **contact box** (icons letter/phone/clock + photo H1) | yes |
Count: T1 = 6 inner pages, T2 = 9, T3 = 6, T4 = all.

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
- **Picture:** a full-bleed daylight photograph of the glamping village (white dome tents among trees, a gravel path curving through the foreground). A hand-drawn wavy wordmark is centred in the upper third with a small bold "glamping village" line under it; a thin white wordmark top-left and "MENU" top-right; "scroll down" small at bottom centre; a 109 px white outline ring "BOOK NOW" fixed bottom-right (`ref/glanta-first.png`).
- **Story:** *a little open space in the woods* — you arrive in a quiet clearing, nothing is hurried, booking is always one ring away.
- **Signature motion:** the wordmark fades in on load; photos settle from scale 1.1 → 1 over 1.5 s; after the hero a **blurred** foliage frame resolves into pinned full-bleed photo stages that crossfade while short text passes (ScrollTrigger); content fades up 35 px in 1.5 s; inertial smooth scroll with data-speed parallax (`tok(g)`).

### (2) Our transformation (same composition, same motion idea, same image type: documentary photograph)
Kumoi Lodge's arrival is not a clearing in the woods but **a warm room out of the weather**. The first screen is one film-grain photograph: the keeper (side/back view) setting a kettle on the cast-iron stove of the dining room, coats and a scarf on wooden pegs, steam rising, high-key daylight from a window. Instead of glanta's edge-to-edge photo the row asks for a **framed window**: the same photograph, r30, inset 34 px in the pale lichen ground, so the page itself is the "outside" and the photo is the room you step into. The wordmark sits centred in the upper third exactly where glanta's sits; the "BOOK NOW" ring becomes the ember outline ring "Hold a room" at the right end of the **info bar** under the photo (row first_screen), next to "Open this month: 3 of 5 rooms · next free night Fri 14 Nov". Motion follows glanta: the photo settles 1.1 → 1 on load (CSS keyframe, not a reveal), the wordmark fades up, the image drifts with `sp-parallax` inside the window, a small "Scroll" line grows, and the next block is a **blurred** lamp-lit window (our counterpart of the blurred foliage stage) followed later by a full-bleed cloud-sea stage with short text passing over it.

### (3) KV checklist (all six on the first screen at 1440×900 except #6, which is the very next viewport)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Full-bleed daylight photo of the village (domes, trees, path) | Film-grain daylight photo: keeper at the dining-room stove setting a kettle, coats on pegs, steam | Framed window: inset 34 px (left/right/top) in `#E0E5C5` ground, r30, height `calc(100svh - 34px - 120px)` | Load settle `scale 1.1→1`, 1.5 s, `cubic-bezier(.25,.1,.25,1)` on the inner img; `sp-parallax --sp-par:6%` on the frame (mobile 5%) | **H1** |
| 2 | Hand-drawn wavy wordmark centred upper third + "glamping village" sub-line | "Kumoi Lodge" Fraunces 300 **4.5rem** white, centred, top at 22% of the window; sub-line "rooms above the weather" Nunito Sans 700 1.0625rem, tracking .12em, white | Upper third, centred, over the darker beam/wall area of H1 | CSS fade-up on load (opacity 0→1, 12 px→0, 1.2 s, delay .3 s); **no sp-reveal** | H1 (text on photo) |
| 3 | Transparent top bar: wordmark left, MENU right, white on photo | Top bar inside the window: "Kumoi Lodge" Fraunces 1.375rem left; links Rooms · The Stay · The Table · Walks · Rates + outline pill "Hold a room" (1 px white r50) right, all white | Top of the window, padding 26px 50px (`tok(c)` 50 px frame) | Hover underline 1 px ember; header is **not** fixed (no scroll listener); inner pages: same bar in ink on the pale ground | H1 |
| 4 | Fixed 109 px outline ring "BOOK NOW" bottom-right | Ember outline ring "Hold a room" **in the info bar**, not fixed: 96 px, `1.5px solid #B4572F`, text ink 0.8125rem tracking .1em, two lines | Right end of the 120 px info bar under the window | Hover: fill `#B4572F`, text `#F4ECE0`, 0.3 s ease | — |
| 5 | "scroll down" tracked label bottom-centre | "Scroll" Nunito Sans 0.8125rem tracking .1em white + 1 px white line under it growing 0→48 px | Bottom centre inside the window, 28 px above its lower edge (desktop only, hidden <782) | CSS keyframe `scaleY 0→1`, 2.4 s ease, infinite, paused under reduced motion | H1 |
| 6 | Blurred foliage stage with two small text columns | Blurred pale lamp-lit window with kettle steam, two small columns (four statement lines left, paragraph right) from 20.1% | Block 2, full viewport, directly after the info bar | `sp-parallax --sp-par:10%` on the image; `sp-reveal--up` on the two columns (30 px, 1.5 s) | **B1** |
Plus the info bar itself (row first_screen): left "Open this month · 3 of 5 rooms", middle "Next free night Fri 14 Nov · Half board from €62", each cell separated by **1 px vertical ink rules** (the T1 hairline introduced on screen one).

---

## 3. Home page

### First screen (1440×900) — exact build
- Page ground `#E0E5C5`. Outer wrapper `padding: 34px 34px 0`.
- **Window** (Group/Cover `km-window`, `sp-parallax`, `--sp-par:6%`): `border-radius:30px; overflow:hidden; height: calc(100svh - 154px); min-height: 560px;` image H1 as Cover background (`object-position: 50% 40%`). Inner img gets class `km-settle` → `@keyframes km-settle { from { transform: scale(1.1) } to { transform: none } }` 1.5 s `cubic-bezier(.25,.1,.25,1)` once; wrap so the settle (transform) and the parallax (translate/scale properties) do not fight: parallax on `.wp-block-cover__image-background`, settle on the Cover's inner `::before`-free wrapper — implementer: put settle on a `.sp-parallax__layer` div that contains the img, parallax moves the layer, settle scales the img. Under reduced motion / `?sp-static` no settle.
- Overlay: `linear-gradient(to bottom, rgba(30,26,22,.30) 0, rgba(30,26,22,0) 46%, rgba(30,26,22,0) 78%, rgba(30,26,22,.22) 100%)`.
- Header row (top of the window), wordmark centre group (top 22%), Scroll cue (bottom centre) as in KV #2/#3/#5. No other text on the photo.
- **Info bar** below the window, height 120 px, inside the same 34 px side padding, on `#E0E5C5`: `display:grid; grid-template-columns: 1fr 1px 1fr 1px auto; column-gap: 40px; align-items:center;` cell 1: label "OPEN THIS MONTH" Nunito Sans 0.75rem tracking .14em `#5E564E` + "3 of 5 rooms — Ridge, Larch, Bunk Loft" Fraunces 1.25rem; rule; cell 2: label "NEXT FREE NIGHT" + "Fri 14 Nov · half board from €62"; rule; cell 3: ember ring 96 px.
- Forbidden on the first screen: table, form, search box, filled colour buttons, vertical text, any second big heading.
- Saturation: ember ring ≈0.3% of pixels; photo graded muted (lichen, warm wood, charcoal, small ember glow inside the stove door). Target S>0.5 share **3–6%**; gate (`check-first-screen.py`) **≤ 15%**; row cap 30% never approached.

### Mobile first screen (390×844)
Header **in flow above** the window on `#E0E5C5` (ink wordmark left, "Menu" text button right, opens the WP navigation overlay). Window 12 px side inset, `aspect-ratio: 4/5`, r20; wordmark Fraunces 300 2.75rem + sub-line inside the Cover as normal flow content (Cover content position top-center, padding-top 18%); no Scroll cue; info bar stacks below the window: two lines (label + value) separated by a horizontal 1 px rule, then ring 84 px left-aligned. **No absolutely positioned or vertical labels over text.**

### Block order
| # | Pattern slug | Purpose | Ground | Layout and photos | Copy |
|---|---|---|---|---|---|
| 1 | `front-window` | arrival / KV | `#E0E5C5` | Framed window H1 + info bar (above) | ~35 words |
| 2 | `front-opener` | the statement (T2) | B1 photo | Full-viewport blurred B1, two small columns from 20.1% | 4 lines + 70 words |
| 3 | `front-rooms` | rooms open this month (T1) — booking-led core | `#E0E5C5` | Label "OPEN THIS MONTH" + 3 cards R1 Ridge, R2 Larch, R3 Bunk Loft, then reopen line | 3 × 45 words |
| 4 | `front-stage` | glanta stage: the weather below | P1 photo | Full-bleed P1 `min-height:100svh`, `sp-parallax --sp-par:10%`; bottom-left at 50 px padding white text: Fraunces 300 2.52rem 2 lines "Most mornings the valley / fills with cloud." + one 40-word paragraph 1.08rem; `sp-reveal--up` on the text group | 50 words |
| 5 | `front-night` | how a night is held (T3) | `#F4ECE0` | Label "HOW A NIGHT IS HELD"; box (text + icons + schedule | N1), then 2-up squares F1 tub / K1 keeper | 55 + 6 rows + 2 × 25 words |
| 6 | `front-table` | what the table serves (food squares) | `#F2EFCF` | Label "WHAT THE TABLE SERVES"; 2-up 1:1 r30 T1 supper / T2 breakfast, h3 + 3–4 lines + "Tonight's pot" / "On the board" meta list 5 items each; `sp-stagger` parent, each column `sp-reveal--up`, photo wrappers `sp-reveal--zoom` | 2 × 50 words |
| 7 | `front-rates` | rates, half board (booking) | `#D3E8DD` | Label "RATES, HALF BOARD"; full-column (1030 px) table of the 7 rates; under it terms line + outline pill "Request dates" → Rates & Booking. **No reveal on the table.** | 40 words |
| 8 | `front-access` | getting up here + hours | `#EADFD9` | Two columns in 1030: left text (label "GETTING HERE", 2 paragraphs about the track and the gate car park, then hours as 4 hairline rows: Rooms ready 15:00 / Arrive by 17:00 / Check-out 10:00 / Desk 08:00–20:00, times nowrap right); right M1 photo **1.17:1 r30** (glanta access, `tok(e)`) `sp-reveal--zoom` on the wrapper; text `sp-reveal--up` | 90 words |
| 9 | footer `km-close` | night close (T4) | D1 photo | see §1 T4 | 20 words |

Section label style (glanta `common-title`, `tok(b)`): Fraunces 400 **2.52rem** (40.32 px), lh 1.5, `letter-spacing: .1em`, uppercase (Latin), left-aligned to the 1030 column, margin-bottom 82 px. zh-TW/ja: same label in local language, Noto Serif 1.9rem, tracking .08em, no uppercase.
English home ≥ 300 words, narrative paragraphs in blocks 2, 4, 5 and 8 (≥ 3). CJK home ≥ 550 characters.

### Home photo positions (13 ≥ 8, no repeats)
H1 · B1 · R1 R2 R3 · P1 · N1 · F1 K1 · T1 T2 · M1 · D1.

### Comparison with the most recent home pages
| # | Nodoka | Yuragi | Saji | Tsuya | **Kumoi** |
|---|---|---|---|---|---|
| 1 | split window hero + vertical tabs | full-bleed photo + word triplet + info bar | framed hero + timeline | framed photo + caption strip | **r30 framed window inset 34 px, centred wordmark, 3-cell hairline info bar with ember ring** |
| 2 | poem-line photo | intro | giant word + seal + halftone portrait | offset pair | **full-viewport blurred photo + two small columns from 20%** |
| 3 | ruled opener + index list | looped name row | day rail | product tiles | **1.85:1 r30 room cards with vertical-hairline split row (×3)** |
| 4 | 3 hairline columns | sticky-media treatment list | 4-up ruled term cards | offset strip | **full-bleed cloud-sea stage, text bottom-left** |
| 5 | parallax band | 3.75:1 letterbox | parallax photo | drawing + prose | **1 px bordered r30 box: text + 3 outline icons + schedule | photo; 2-up squares** |
| 6 | rounded pair people | booking steps | brigade | parallax band | **2-up 1:1 r30 food squares with menu lists** |
| 7 | stories rows | people | graduates grid | mirrored pair people | **rate table on mint** |
| 8 | fee table | season | tuition ledger | prices | **access text + 1.17:1 photo + hours rows** |
| 9 | FAQ + CTA | guest notes → visit | sticky notices → ink visit band | visit | **full-bleed dusk close with tracked index row** |
Why not alike: no people block, no steps, no stories on home; rooms lead in block 3 (booking-led). Yuragi also has a photo + info bar, but Yuragi's photo is edge-to-edge with a word triplet; ours is an inset r30 window with a centred serif wordmark and a hairline-ruled bar carrying live availability and a ring. Shapes (r30, 1 px ink box, vertical split rule, outline icon circles, blurred full-viewport opener) appear in none of the four. Not awa/mame (AFURI framed window: no wordmark crossing the frame edge here, nothing breaks the frame).

---

## 4. Inner pages (9 + single note + 404)

Every inner page: header bar (ink on `#E0E5C5`, not overlaid) → **T2 page head** (blurred photo, `min-height: 62svh` (mobile 440 px), `sp-parallax --sp-par:8%` (mobile 5%), the page label left column (Fraunces 300 clamp(2.4rem, 4.4vw, **4.25rem**) h1 in ink, max 2 lines) and a 50–70-word intro right column, both from 20.1%) → body bands rotating the five grounds → T4 close. No sidebar. Inner page h1 = `xx-large-alt` 4.25rem at 1440.

1. **Rooms** (`page-rooms`, ground lichen). Head B1. All five T1 cards R1–R5 with ids `#ridge #larch #bunk #cairn #window`; Cairn and Window carry a meta tag "Reopens 26 Dec" (outline pill 1 px, small, no colour). Under the list: "What every room has" — one paragraph + 6 amenities as two hairline-ruled columns. Then pill "See rates →".
2. **The Stay** (`page-stay`, cream). Head N1 blurred. Full T3 box (text + stove/boots/lamp icons + the six-row schedule | F1). Then three narrative sections in a 680 px text column: "Arriving" / "The evening" / "Morning and leaving" (≈90 words each). 2-up squares: **R3** (bunk loft at night) and **W2** (first snow at the cairn). House notes as hairline rows (quiet after 22:00, no cars after dusk, dogs in the boot room only, drying room open all night).
3. **The Table** (`page-table`, butter). Head K1 blurred. Wide K2 photo 1.85:1 r30 at 1030; supper and breakfast as T1 split rows (no photo; left: title + served-at time + pill "Ask about diets", rule, right: description + 5-item meta list); then squares T1 / T2 (sharp); then a T3 box "Packed lunch for the trail €12" with icons bread/flask/apple + photo H1. Dietary line: vegetarian always, other needs with 3 days' notice.
4. **Rates & Booking** (`page-rates`, mint). Head P1 blurred. Five compact T1 split rows (one per room: name/sleeps/size left, rule, 2 lines right, no photo). **Rate table** (all 7 lines; see §6 table rules). Terms as hairline rows (deposit 30%, confirm within 24 h, cancel free up to 14 days, seasons). The four booking steps as ruled paragraphs. **Booking box** (T3): text + icons calendar/letter/key + photo R1; inside the text half a simple request form (name, email, dates, room select, guests, message) — Contact Form block if available, else a `mailto:` pill. Form never on the first screen.
5. **Walks & Weather** (`page-walks`, lichen). Head W2 blurred. Three T1 cards: W1 Cairn Loop, P1 Ridge to the Saddle, M1 Old Track to Vell (meta: duration · distance · easy/moderate; pill "Ask Lio about the weather"). Then "Reading the weather" 3 paragraphs and a hairline list of what to pack (6 items).
6. **Getting here** (`page-getting-here`, blush). Head B1. Access T3 box: icons car/boots/phone, text (by car to the gate car park at Vell Pass, 1,420 m; then 2.2 km track, 35 min on foot or keeper pick-up; nearest train Vell station, bus 4 to the Pass, 3 a day) | photo M1. Then two text columns and the hours as hairline rows (same four lines as home block 8).
7. **Keepers** (`page-keepers`, cream). Head K2 blurred. History in 3 paragraphs (1931 hut, 1964 lodge, keepers since 2009). Squares K1 (Ines) / F1. The seven people as **text-only T1 split rows** (name Fraunces 1.5rem + role meta left, rule, two sentences right) — not a grid. Closing quote line in Fraunces italic 1.75rem.
8. **Notes** (`home.html` index, `archive.html`, `single.html`, lichen). Index head P1 blurred; three posts as T1 split rows with r30 1.85:1 featured images (R5, K2, W2). Single: date + title (Fraunces 3rem), featured 1.85:1 r30 at 1030, text column 680 px, previous/next as outline pills.
9. **Contact** (`page-contact`, blush). Head R2 blurred. Contact box (T3): icons letter/phone/clock; email, phone, desk hours 08:00–20:00, postal line | photo H1. Under it the season dates and a pill to Rates & Booking.
10. **404 / search**: T2 head with B1 + one line and pill home.

---

## 5. Colour (reference values; `tok(a)`)

| Role | Hex | Source token | Use | Share |
|---|---|---|---|---|
| Ink (main) | `#3C342C` | row hex 黒橡; replaces ref `#000000` (warm near-black, same black-on-pale relationship; a lodge reads warmer than pure black) | all type, 1 px rules, box borders, pills, icons | ~8% |
| Meta | `#5E564E` | ref `#505050` warmed toward ink | meta lines, labels | — |
| Ground 1 lichen (page base) | `#E0E5C5` | ref lichen, exact | site background, header, rooms, walks, notes | ~22% |
| Ground 2 mint | `#D3E8DD` | ref mint, exact | rates band, Rates page | ~8% |
| Ground 3 butter | `#F2EFCF` | ref butter, exact | the table | ~8% |
| Ground 4 cream | `#F4ECE0` | ref cream, exact | the night / stay / keepers bands (never the base) | ~10% |
| Ground 5 blush | `#EADFD9` | ref blush, exact | access, contact, getting here | ~4% |
| White | `#FFFFFF` | ref white on photos | type and outlines on photos only | — |
| Accent ember | `#B4572F` | not in ref (ref has no accent); from the stove glow in H1 | info-bar / footer ring, nav hover underline, link underline in notes | ≤ 1.5% |
| Photography | — | ref ≈45–50% | — | ≈45% |
Contrast: ink on every ground ≥ 9:1; meta on lichen ≥ 5.5:1; ember ring text is ink (not ember) so contrast is ink's. First-screen saturated share target 3–6% (ref 3.5%), gate ≤ 15%. Avoids Nodoka slate, Saji brick, Tsuya brass, Yuragi grey; base is lichen, not beige.

## 6. Type, sizes, layout tokens

- **Font direction: serif.** Latin headings **Fraunces** (variable, opsz; weights 300, 400, italic 400), Latin body **Nunito Sans** (400, 600, 700). CJK: **Noto Serif TC** (zh-TW) and **Noto Serif JP** (ja), 明體, for both headings and body (do not mix in Noto Sans).
- Stacks (theme.json `fontFamilies` + `fontFace`, woff2 in `assets/fonts/`, zh-TW and ja subsets as in Hokuto/Hada; same files load in the editor iframe — copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and require it because style.css uses `:lang()`):
  - heading: `"Fraunces", "Noto Serif TC", "Noto Serif JP", Georgia, serif`
  - body: `"Nunito Sans", "Noto Serif TC", "Noto Serif JP", system-ui, sans-serif`
  - `:lang(zh-TW)` heading/body: `"Fraunces", "Noto Serif TC", serif` / `"Nunito Sans", "Noto Serif TC", serif`; `:lang(ja)` the same with Noto Serif JP. CJK sizes ≈ 0.75× of the English headings, body line-height 1.85, letter-spacing .04em. fr/de `hyphens: auto`.
- Font sizes (theme.json): small 0.8125rem · meta 0.846rem (ref 13.54 px) · base 1rem (body 16 px / lh 28 px = 1.75, ref) · lead 1.08rem (ref 17.28 px, lh 30 px) · medium 1.5rem (ref h3 24 px, lh 1.75) · large 2.52rem (ref h2 40.32 px, lh 1.5, tracking .1em) · x-large 3rem · xx-large-alt 4.25rem (inner h1) · **xx-large 4.5rem** (hero wordmark; max ≥ 4.25rem satisfied).
- Weights: Fraunces 300 for wordmark/statements, 400 for labels/h3 (ref 500 in Roboto ≈ Fraunces 400 optically). Body 400, meta 400, buttons 400 with tracking .05em (ref).
- Layout: `contentSize 680px`, `wideSize 1030px` (ref 72%), frame padding 50 px desktop / 24 px mobile (ref), section padding 140 px top/bottom desktop, 88 px mobile.
- Radius: photos, boxes, windows **30 px** (mobile 20 px on hero window only); pills 50 px; circles 50%. No shadows anywhere (ref).
- Lines: 1 px ink for rules, borders, pills (ref); 1.5 px pills on mobile (ref).

## 7. Responsive requirements (auto-gates will check)
- 390 px first screen: header in flow, no vertical text, no absolutely positioned labels over text, no horizontal overflow (check info bar grid collapses to one column).
- **Rate table ≥ 782 px:** table width 100% of the 1030 column (`alignwide`), `table-layout: auto`; columns Item (left) | Price (right, `white-space: nowrap; text-align: right; width: 1%; padding-left: 32px`); rows separated by 1 px ink rules, row padding 18px 0, item Nunito Sans 1.08rem, price Fraunces 1.25rem tabular figures. Must not be cut at 800 and 1280. Any other table (amenities, hours) follows the same rules.
- **Every table < 782 px stacks:** each row becomes a block: item on line 1, price on line 2 right-aligned (or `display:flex; justify-content:space-between` if it fits), no horizontal scroll container.
- T1 rows, T2 columns, T3 box and squares stack as described in §1. Images keep their ratios.

## 8. Images (18, Grok, one at a time, read each one)

**Imagery: photo** (reference is documentary colour photography; ours = film-grain real-photo style, no illustration).
STYLE (exact string for every prompt):
`35mm film photograph, fine visible film grain, soft natural daylight through windows mixed with warm lamp light, high-key airy exposure, muted palette of pale lichen green, mist grey, warm larch wood, charcoal wool and a small ember glow, modern mountain lodge in an international alpine setting, people at ease seen from the side or back, diverse adults, candid documentary moment, no text, no logos, no signage, no brand marks, no Japanese elements`

| ID | Subject / composition | Ratio | Used on (once per page) | Home |
|---|---|---|---|---|
| H1 | Keeper (side/back) setting a black kettle on a cast-iron stove in a timber dining room, coats and a scarf on wooden wall pegs left, window light right, steam; calm darker beams in the upper third for white type | 16:10 | Home window (KV1–3,5); Table box; Contact box | ✔ |
| B1 | Deliberately out-of-focus pale lamp-lit window with kettle steam, soft bokeh, almost abstract, very light | 16:9 | Home opener (KV6); Rooms head; Getting here head; 404 | ✔ |
| R1 | Ridge Room: double bed under sloping eaves, wool blanket, east window with cloud below | 1.85:1 | Home rooms; Rooms; Rates booking box | ✔ |
| R2 | Larch Room: twin beds, larch panelling, small desk, guest reading by window (back) | 1.85:1 | Home rooms; Rooms; Contact head (blurred) | ✔ |
| R3 | Bunk Loft: six timber bunks, packs and boots, warm lamp, a walker unpacking (back) | 1.85:1 | Home rooms; Rooms; Stay square | ✔ |
| R4 | Cairn Room: double plus two singles, family luggage, morning light | 1.85:1 | Rooms | |
| R5 | Window Room: single bed, deep window seat, notebook, clouds outside | 1.85:1 | Rooms; Notes post 1 | |
| P1 | Lodge on a ridge above a sea of cloud at early morning, a walker from behind on the path | 16:9 | Home stage (parallax); Rates head (blurred); Walks card 2; Notes index head (blurred) | ✔ |
| N1 | Boot room: boots on a drying rack, wool socks, a lamp, coats | 4:5 | Home night box; Stay head (blurred) | ✔ |
| F1 | Wood-fired outdoor tub on a deck in mist, steam, one person seen from behind | 1:1 | Home square; Stay box; Keepers square | ✔ |
| K1 | Keeper (Ines) seen from the side splitting kindling by the woodstore, wool sweater | 1:1 | Home square; Keepers square; Table head (blurred) | ✔ |
| T1 | Supper: long timber table, stew pot, bread, candles, hands passing bowls | 1:1 | Home table; Table squares | ✔ |
| T2 | Breakfast by the window: porridge, eggs, coffee pot, cloud outside | 1:1 | Home table; Table squares | ✔ |
| K2 | Cook (Amara) kneading dough in the lodge kitchen, flour, window light, from the side | 1.85:1 | Table wide; Keepers head (blurred); Notes post 2 | |
| M1 | Gravel track winding up through larches toward the lodge, a walker with a pack | 1.17:1 | Home access; Walks card 3; Getting here box | ✔ |
| W1 | Two walkers from behind on a ridge path in light mist | 1.85:1 | Walks card 1 | |
| W2 | Stone cairn on the ridge in first snow and mist | 16:9 | Walks head (blurred); Stay square; Notes post 3 | |
| D1 | Dusk: lodge windows lit, two guests on a bench with a lantern, deep blue sky | 16:9 | Footer close on every page (only there) | ✔ |

Per page (binding, no image twice on one page):
- Home (13): H1 · B1 · R1 R2 R3 · P1 · N1 · F1 K1 · T1 T2 · M1 · D1
- Rooms: B1 (head) · R1 R2 R3 R4 R5 · D1
- The Stay: N1 (head) · F1 (box) · R3 W2 (squares) · D1
- The Table: K1 (head) · K2 (wide) · T1 T2 (squares) · H1 (box) · D1
- Rates & Booking: P1 (head) · R1 (booking box) · D1
- Walks & Weather: W2 (head) · W1 P1 M1 (cards) · D1
- Getting here: B1 (head) · M1 (box) · D1
- Keepers: K2 (head) · K1 F1 (squares) · D1
- Notes index: P1 (head) · R5 K2 W2 (posts) · D1; single: its featured image · D1
- Contact: R2 (head) · H1 (box) · D1
- 404: B1 · D1
All 18 images used; home uses 13 (marked ✔).
Each image ≤ 300 KB, ≤ 2000 px, webp; 0 cutouts; readme line per image (AI-generated, CC0). Blurred heads are the same file with CSS `filter: blur(16px)` (scale 1.18 already hides edges via parallax; add `transform: scale(1.06)` if not parallaxed).

## 9. Scroll effects (sp-scroll, copied unchanged; only CSS variables tuned)
Theme-wide variables to match glanta `.anim-fadeIn`: `--sp-dist: 30px` (ref 35 px, capped), `--sp-dur: 1.5s`, `--sp-ease: cubic-bezier(.25,.1,.25,1)` (CSS `ease`, ref). For zoom, set `.sp-reveal--zoom { --sp-dur: 1.5s }` from the theme stylesheet with higher specificity (scale stays the sp default 1.06; ref 1.1).
| Effect | sp class | Blocks | Source (glanta) | Trigger / time / easing |
|---|---|---|---|---|
| Fade up | `sp-reveal sp-reveal--up` (+ `sp-stagger` on 2-col groups) | Home 2 (two columns), 4 (text group), 6 (two columns, stagger), 8 (text column); inner page body sections (T1 split rows, narrative blocks) | `.anim-fadeIn` opacity 0→1 + 35 px→0 | ScrollTrigger "top 90%" once → sp IntersectionObserver once; 1.5 s; `ease` |
| Photo settle | `sp-reveal sp-reveal--zoom` on photo wrappers | Home 3 (three room photos), 6 (two squares), 8 (M1); Rooms, Walks, Notes card photos | `.anim-imgZoomIn` scale 1.1→1 | same trigger; 1.5 s; `ease` |
| Parallax | `sp-parallax` | Hero window H1 (6% / mobile 5%), opener B1 (10% / 6%), stage P1 (10% / 6%), footer D1 (8% / 5%), inner heads (8% / 5%) | ScrollSmoother data-speed + fixed crossfading stages | CSS scroll-driven `view()`; fallback sp-scroll.js IO + translate3d |
Not used: marquee, count, wipe, mask. **Hero (block 1) has no sp-reveal**; its load settle/fade is plain CSS keyframes disabled under reduced motion and `?sp-static` (`html.sp-no-motion .km-settle { animation:none }`). No reveal on the rate table, forms or legal text. No custom scroll listeners. Room slider (Swiper crossfade) is not reproduced: first photo static + zoom settle, arrows static.

### Parallax (required)
- **Primary:** hero window `km-window` — container = the r30 window Group/Cover with `sp-parallax`, moving layer = `.sp-parallax__layer` holding H1 (or Cover `.wp-block-cover__image-background`), foreground = header, wordmark, scroll cue (never in the layer). `--sp-par: 6%` desktop, `5%` under 782 px. Ref counterpart: ScrollSmoother `effects:true` data-speed on the hero photo.
- **Also:** block 2 opener B1 `--sp-par:10%` (6% mobile) — ref blurred concept stage; block 4 stage P1 `--sp-par:10%` (6% mobile) — ref fixed full-bleed crossfading stages; footer D1 `--sp-par:8%` (5% mobile) — ref night photo. All keep running on mobile; all stop under reduced motion, `?sp-static`, editor. `check-parallax.mjs` must show ≥ 6 px difference desktop and mobile.

## 10. Home acceptance checklist
1. First screen = r30 framed window (34 px lichen inset) with H1, white "Kumoi Lodge" Fraunces 300 4.5rem centred upper third + sub-line, white top bar inside the window, Scroll cue, and the 120 px info bar with two 1 px vertical rules and the ember 96 px ring. No table/form/search, no vertical text; saturated share ≤ 15%.
2. All six KV checklist items visible (5 on screen one, #6 B1 opener right after).
3. Block order exactly §3 (9 blocks); 13 photo positions, no repeat.
4. T1: three 1.85:1 r30 room photos with circle arrows; full-height 1 px ink vertical rule in each split row; outline pills.
5. T2: full-viewport blurred B1 with two small columns starting ≈20% width.
6. T3: 1 px ink r30 box with text + 3 outline icon circles + schedule rows | N1 photo to the edge; 2-up 1:1 r30 squares (F1/K1) and food squares (T1/T2).
7. Rate table full 1030 width at 800 and 1280, prices nowrap right; stacks at 390.
8. Grounds rotate lichen → (photo) → lichen → (photo) → cream → butter → mint → blush → dusk photo; ink type; ember only on the rings/underline; white type only on photos.
9. Fonts: Fraunces + Nunito Sans; zh-TW/ja Noto Serif TC/JP in front end and editor; max size 4.5rem.
10. Motion: no reveal in hero; reveal up/zoom 1.5 s; parallax on hero, opener, stage, footer passes `check-parallax.mjs` (desktop + mobile, reduced-motion 0).
11. Numbers identical to §0 (3 of 5 rooms, Fri 14 Nov, €62–€320, 15:00/17:00/10:00, 08:00–20:00) on home and inner pages in all languages.
12. English home ≥ 300 words, ≥ 3 narrative paragraphs.

## 11. Similarity table (target ≈ 80%)
| Dimension | Reference (glanta) | Kumoi Lodge | Token |
|---|---|---|---|
| Grounds | #E0E5C5 / #D3E8DD / #F2EFCF / #F4ECE0 / #EADFD9 per band | same five hex values per band | tok(a) |
| Ink | #000, meta #505050 | #3C342C (row hex), meta #5E564E | tok(a) |
| Accent | none (white ring) | ember #B4572F ≤ 1.5% on rings only | tok(a) |
| First-screen saturation | 3.5% (S>0.5) | 3–6%, gate ≤ 15% | tok(a) |
| Photo share | 45–50% | ≈45% | tok(a) |
| Section title | 40.32 px / 500 / lh 1.5 / .1em caps | 2.52rem / Fraunces 400 / lh 1.5 / .1em caps | tok(b) |
| Card title | 24.05 px / lh 42 / .08em | 1.5rem / lh 42 px / .08em | tok(b) |
| Lead | 17.28 px / lh 30 / .05em | 1.08rem / lh 30 px / .05em | tok(b) |
| Meta | 13.54 px / lh 22.6 / #505050 | 0.846rem / lh 22.6 px / #5E564E | tok(b) |
| Body | 16 / 28 | 1rem / 1.75 | tok(b) |
| Largest type | drawn wordmark ≈290 px wide | wordmark 4.5rem (≈400 px wide) | tok(b)(f) |
| Column | 1030 px (72%) centred | 1030 px centred | tok(c) |
| Frame padding | 50 px | 50 px (header, footer); hero inset 34 px (row framed-window) | tok(c) |
| Card gap / head gap | 86 / 82 px; mobile 69 | 86 / 82 px; mobile 69 | tok(c) |
| Concept columns | start 20.1%, gap 9.5vw; mobile gap 89 px | same | tok(c) |
| Photo radius | 30 px everywhere, no shadow | 30 px everywhere (hero window 20 px mobile), no shadow | tok(d) |
| Pill | 1 px #000, r50, 225×48, hover invert | 1 px ink, r50, 225×48, hover invert to ink fill + lichen text | tok(d) |
| Ring | 109 px, 2 px white, fixed bottom-right | 96 px, 1.5 px ember, in the info bar / footer (not fixed) | tok(d) |
| Vertical hairline | 1 px black between room columns | 1 px ink, same place | tok(d) |
| Hero image | full bleed 1.59:1 | r30 window ≈1.84:1 at 1440×900 (1372×746, inset 34 px + 120 px info bar) | tok(e) |
| Room photo | 1.85:1 r30 | 1.85:1 r30 | tok(e) |
| Food / facility squares | 1:1 r30 2-up 500 px | 1:1 r30 2-up 500 px | tok(e) |
| Access photo | 1.17:1 r30 right half | 1.17:1 r30 right half | tok(e) |
| Arrows | 51 px outline circles in photo corners | 51 px outline circles in photo corners | tok(f) |
| Icons | 3 outline round icons ≈44 px, 1 px, in bordered box | 3 outline round icons 44 px, 1 px, in bordered r30 box | tok(f) |
| Footer | night photo, address bottom-left, tracked caps index 22 px | dusk photo, address bottom-left, tracked caps index 1.375rem | tok(f) |
| Fade-up | 35 px, 1.5 s, ease, top 90% once | 30 px, 1.5 s, cubic-bezier(.25,.1,.25,1), IO once | tok(g) |
| Image zoom | 1.1→1, 1.5 s | 1.06→1 (sp default), 1.5 s; hero load settle 1.1→1, 1.5 s | tok(g) |
| Parallax | ScrollSmoother data-speed, stages crossfade | sp-parallax 6–10% on hero, opener, stage, footer | tok(g) |
| Typeface | Roboto + Zen Kaku Gothic (sans) | Fraunces + Nunito Sans, Noto Serif TC/JP (row: serif) — deliberate difference | tok(b) |
