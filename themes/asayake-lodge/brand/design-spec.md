# Design spec — Asayake Lodge (asayake-lodge)

Row b39-3 · type **business** (category travel-stays; App tag type `hospitality`) · archetype sticky-media · nav overlay (one top menu) · page_structure day-schedule · font_direction **serif** · **Imagery: photo** (stage-a IMAGERY = photo → real-photo STYLE, film grain, soft dawn daylight; no illustration).
Reference: https://www.toyoko-inn.com/eng/ (only reference; tokens `brand/reference-tokens.md` = "RT"; screenshots `brand/ref/toyoko-first.png`, `scroll-toyoko-900.png`, `scroll-toyoko-1800.png`, `scroll-toyoko-2700.png`).
Similarity target: **80 %** to the reference in colour relationships, photo treatment, motion, decoration and layout. Photos, copy, names, emblem and logo are our own; no image, text or logo from the reference is reused.
Hero composition is fixed by the plan (framed-window / below-photo / card-row) and overrides the reference's field-with-text-in-artwork hero; the reference's scene (a dependable building/room under a light trail), story ("stay by stay, life moves ahead") and motion (one diagonal light trail, header fade-in) are kept (see §2).

---

## 0. Fixed brand facts (identical on every page, in brand.md and in all five languages)

- **Asayake Lodge** — a small, non-clinical guest house of **9 rooms / 22 beds** for families and carers of patients at **Calder Teaching Hospital** (fictional), a **6-minute walk** (450 m) from the hospital's **North Ward Gate**. Founded **2014** by **Ines Moreau-Achebe**, whose father spent eleven weeks on a cardiac ward. "Asayake" = the glow of the sky at sunrise (brand.md explains in English): the house is busiest at dawn, before ward rounds.
- Address: **11 Linden Row, Calder, Harrowfield** (fictional, international-neutral). Phone **+00 44 555 0142** · email **stay@asayake-lodge.example** (same address in every mailto, form fallback and footer).
- **Hours (same everywhere):** shared kitchen **04:50–23:00** · front desk **07:00–21:00** daily, incl. holidays · check-in from **14:00**, check-out by **11:00** · late arrival (after 21:00) by phone, key box code sent by SMS · quiet hours **22:00–06:00**.
- **Rates — 6 items, EUR per night unless stated, incl. VAT, bedding, towels, kitchen use and Wi-Fi (same figures on Home #rates, Rooms, Rates, Book, Questions, House rules, posts):**
  | # | Item | Price |
  |---|---|---|
  | 1 | Single room (1 bed, shared bathroom) | €46 |
  | 2 | Twin room (2 beds, own shower) | €62 |
  | 3 | Family room (up to 4: double + bunk, own bathroom) | €78 |
  | 4 | Accessible room (step-free, roll-in shower, 2 beds) | €62 |
  | 5 | Long stay — 7 nights or more, any room | 20 % off every night |
  | 6 | Laundry token (wash + dry) | €3 |
  Children under 4 stay free. Hospital social-work referral letters waive the €10 booking deposit. No other fees. No "guaranteed availability" wording.
- **A day in the house (the hero day-line; same 5 ticks everywhere):** **04:50** Kitchen opens, thermos station on · **06:30** Walk to the ward gate (lit path, 6 min) · **11:00** Rooms made, quiet hour for sleeping carers · **14:00** Beds from check-in · **21:00** Desk closes, house goes quiet.
- **Booking flow (4 steps, Book page and Home #book):** 1 Send dates, ward and who is staying → 2 Room offered by phone or email within **4 hours** (07:00–21:00) → 3 €10 deposit or referral letter → 4 Arrive from 14:00 (or key box after 21:00).
- **People (7):** Ines Moreau-Achebe — founder, house lead · Tobias Lindqvist — morning host (04:50 shift, kitchen) · Amara Nwosu — afternoon host, check-ins · Rafael Duarte — night contact (phone 21:00–07:00) · Mei-Lin Ostrowski — housekeeping lead · Hannah Bergström — volunteer coordinator · Samir Haddad — maintenance and accessible-room fittings.
- **House letters (3 posts; category "House letters"; tags kitchen / long-stay / arriving-late / children):**
  1. **"Eleven weeks, one thermos"** — a long-stay family room (Ines, P11).
  2. **"Arriving after the desk closes"** — how the key box and night phone work (Rafael, P12).
  3. **"Bunks, crayons and a quiet hour"** — siblings staying while a child is on the ward (Hannah, P13).
  No medical claims, no outcomes, no real hospital, no awards.
- **Single CTA label (everywhere):** **"Ask for a bed"** → `/book/`.

---

## 1. Signature techniques (borrowed from toyoko-inn.com; obvious at a glance; do not dilute)

### T1. Coloured field framing the hero + docked top bar + diagonal light trail (RT (a)(c)(f), `ref/toyoko-first.png` y 64–664)
- **Reference:** a saturated #004898 field 600 px tall directly under a 64 px white header; a white r8 booking bar (1120 wide, 64 tall, x 160–1280, y 97–162) docked at the top of the field with 4 labelled cells separated by 1 px rules; a translucent white light trail (~340 px wedge, ~22° from horizontal) rakes from a jet top-right toward the building.
- **Ours (home hero):** dusk-rose `#8A746E` field from y 64 to y 640 at 1440 × 900, full width. Inside it, the **framed photo window** P01: x 40–1400, y 96–600 (1360 × 504, ratio 2.7:1), radius **12 px**, object-fit cover, focal point 60 % 45 %. Docked across the window's top edge (y 96–152) a white r8-top bar, width 1120 centred (x 160–1280), 56 px tall, **4 text cells** with 1 px `#D9C9C4` dividers: label (Karla 700 .75rem ls .06em, `#8A746E`) + value (Fraunces 500 1.0625rem, `#3E3230`): "Beds free tonight · 4" / "Kitchen opens · 04:50" / "To the ward gate · 6 min walk" / "Check-in · from 14:00". Text only, no inputs, no button inside. The **light shaft** is a CSS gradient wedge `.al-shaft` inside the window (linear-gradient 118deg, rgba(255,246,236,.0) → .38 → 0, width 46 %, from the kitchen window at top-right to the bench lower-left, `mix-blend-mode:screen`).
- **Must not dilute:** the field must be a visibly coloured band around the photo (40 px rose margin left/right, 32 px top, 40 px bottom), not page-white; the bar must sit ON the window's top edge (half on rose is wrong—fully overlapping the photo top); the shaft must be clearly visible (peak alpha ≥ .32).

### T2. Rounded tinted CTA band with a tilted product photo (RT (c)(d) CTA bands r16 `#6D8FC4`, member card mock with soft shadow, `scroll-toyoko-1800.png`)
- **Reference:** a rounded 16 px tinted band ~1120 wide, 240 tall; left a short bold heading + one line + outline button r6; right a member card / phone mock tilted ~-8° with soft drop shadow.
- **Ours ("Key-card band", home #book):** band `#D9C9C4`, radius **16 px**, width 1120, height 280, padding 48. Left 55 %: h2 "A bed is usually ready by two." (Fraunces 2.25rem 500), one line, deep-ink outline button r**6 px**, 1 px `#3E3230`, 48 px tall, "Ask for a bed". Right 45 %: photo P10 (a brass room key on a rose felt tag on a pillow) in a r12 frame 360 × 240, `transform: rotate(-6deg)`, shadow `0 18px 40px rgba(62,50,48,.22)`. Not a cut-out — a rectangular photo.
- **Must not dilute:** the tilt (-6°) and the shadow are the signature; band radius 16 not 0; tint not white.

### T3. Bordered notice card with icon rows + chevrons (RT (f) notice card, `ref/toyoko-first.png` y 787–900)
- **Reference:** 1120-wide white r12 card, 1 px border, rows 58 px with a round warning-circle icon left, one line text, right chevron, 1 px row dividers.
- **Ours ("Notes for the stay", home section 2):** white card 1120 × auto, radius 12, border 1 px `#D9C9C4`, padding 0 28; **4 rows** 60 px: 28 px round amber-outline (`#D69A5C`, 1.5 px) line icon · Karla 1rem `#3E3230` · chevron `#8A746E` 14 px right. Rows: "Bring the patient's ward name and your photo ID" / "Quiet hours 22:00–06:00 — the night phone still answers" / "Arriving after 21:00? The key box code comes by SMS" / "Children under 4 stay free". Each row links to the matching inner page anchor.

### Continuation to inner pages (≥ 4 required; actual 8)
| Page | T1 (rose field + framed window + docked bar) | T2 (key-card band) | T3 (notice card) |
|---|---|---|---|
| Rooms `/rooms/` | page head: rose field 320 tall, framed P05 window 1360×240 r12, docked 3-cell bar (room types) | yes, before footer | "What every room has" card |
| A day in the house `/a-day/` | page head window P04 + docked bar = the 5 hours | yes | "Kitchen notes" card |
| Rates `/rates/` | page head rose field, window P07 | yes | "Deposit and referral letters" card |
| Getting here `/getting-here/` | page head window P15 (lit path) + bar: walk / bus / parking / taxi | yes | "Night arrival" card |
| Book `/book/` | page head rose field, no photo window (bar only: 4 steps) | — (it is the destination) | "Before you write" card |
| Questions `/questions/` | page head window P14 (crop right) + bar: 10 questions / desk hours | yes | FAQ as T3 rows (chevron rotates to ▾ on open, `<details>`) |
| The house (about) `/about/` | page head window P14 + bar: opened 2014 / 9 rooms / 22 beds / 6 min | yes | — |
| House rules `/house-rules/` | rose field head (no photo) | — | rules as T3 rows |
Every inner page head = rose field + (photo window or bar). The light shaft appears only on the home hero.

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
toyoko-inn.com's first screen draws a flat saturated blue field; at the right a tall tan-and-white hotel tower; a jet top-right leaves a pale diagonal light trail that rakes across the field toward the tower; at the left wide-tracked caps lines with a short tan underline under one word, a tagline "stay by stay, life moves ahead", and a line-drawn anniversary emblem lower left; a white booking bar docks at the top of the field; a navy info strip and a bordered notice card follow. **Story:** a simple, dependable stay that is always there while life moves on. **Signature motion:** the banner's light trail (carousel loop) and a 0.4 s header fade-in; no scroll reveals.

### (2) Our translation (patient-family lodge; same composition and motion idea; same image type = photograph)
The same promise — a simple, dependable bed — for families visiting a teaching hospital. Instead of a tower under a jet trail, the photo window shows the **shared kitchen at dawn**: the host (Tobias, mid-40s, rolled sleeves, back three-quarter) fills a steel thermos at the counter; an overnight bag waits on a wooden bench in the foreground left; through the kitchen window at the right the **ward block** of the hospital sits soft and pale (the "tall building at the right"); a **shaft of dawn light** crosses the room diagonally from that window to the bench (the "light trail"). Dusk-rose field = the blue field; white docked bar with 4 cells = the booking bar; Fraunces headline with an amber underline = tracked caps with tan underline (moved BELOW the photo per hero_text); our own sunrise-over-roofline line mark = the emblem; the day-line + card row = the navy strip / notice row. Motion: the light shaft slides in once (the trail), the photo drifts in parallax (the banner movement), header fades in 0.4 s (RT (g)).

### (3) KV checklist (all built in the home first screen at 1440 × 900, all visible)
| # | Reference element | Our counterpart | Position (1440×900) | Motion | Image |
|---|---|---|---|---|---|
| 1 | Saturated blue field framing the banner (#004898, 600 px) | Dusk-rose `#8A746E` field y 64–640 around the r12 framed window | window x 40–1400, y 96–600 | photo `sp-parallax` `--sp-par:6%` (window stays, photo moves) | P01 |
| 2 | White booking bar docked at the top of the field | White 4-cell "Tonight at the house" text bar on the window's top edge (beds free · kitchen 04:50 · 6 min walk · check-in 14:00) | x 160–1280, y 96–152 | none | — |
| 3 | Tall tower at the right | The hospital ward block seen soft through the kitchen window, right 30 % of P01 | right third of the window | moves with the photo parallax | P01 |
| 4 | Diagonal light trail from the jet | `.al-shaft` dawn light wedge from that window across the room to the bench | inside window, from (1250,110) to (380,560) | one-time slide-in 1.6 s `cubic-bezier(.3,0,.3,1)` (translateX -24px→0, opacity 0→1, CSS keyframes, reduced-motion = final), then still | P01 (overlay is CSS) |
| 5 | Wide-tracked caps headline + short tan underline | H1 below the photo: "A bed six minutes from the ward." Fraunces 4.5rem/1.05 500; amber `#D69A5C` 64 × 3 underline under "six minutes"; 1-line lede Karla 1.125rem | x 160–860, y 664–800 | none (no reveal) | — |
| 6 | Line-drawn emblem lower left | Own 112 px SVG line mark (half sun over a pitched roofline, 2 px `#8A746E` stroke) right of the H1 | x 1168–1280, y 672–784 | none | — (inline SVG) |
| 7 | Navy info strip / notice row under the hero | Day-line (1 px `#3E3230` at 40 %, 5 ticks with times) + **card row** of 3 white r12 cards tied to ticks 1/2/4, tops visible | day-line y 812; card tops y 836–900 (cards continue below fold) | amber sun marker (12 px) eases from tick 1 to tick 2 once, 1.2 s ease-out, CSS only | — |

All items are part of the hero pattern; P01 is in the image list.

---

## 3. Home page

### First screen composition
**hero_composition: framed-window · hero_text: below-photo · hero_footer: card-row · hero_fingerprint: framed-window/below-photo/card-row**
- **framed-window:** P01 is never full-bleed. It is an inset window (40 px from the viewport left/right, 32 px below the header, r12) on the dusk-rose field; the field ends 40 px below the window (y 640). Mobile 390: window inset 16 px, ratio 4:3 (358 × 268), r12, rose field 16 px around.
- **below-photo:** no text on the photo except the docked white bar (which is an opaque white card, not overlay text). H1, underline, lede and the line mark sit on page paper `#F5F0EE` below the field (y 664–800). Mobile: H1 uses `clamp(2.75rem, 1.4rem + 4vw, 4.5rem)` (desktop 4.5rem = theme.json max ≥ 4.25rem), below the window; line mark hidden < 600 px.
- **card-row:** below the H1, the day-line (full container width 1120, 5 ticks labelled 04:50 / 06:30 / 11:00 / 14:00 / 21:00 in Karla .8125rem) and a row of **3 white r12 cards** (each 357 × 168, gap 24, 1 px `rgba(138,116,110,.28)` border, padding 28 24, RT (d) info cards) hanging from ticks 1, 2, 4 by a 16 px vertical hairline: "04:50 · The kitchen is already warm" / "06:30 · Six minutes to the ward gate" / "14:00 · Your bed is made". Each card: time in Karla 700 amber, title Fraunces 1.25rem, one line Karla .9375rem. Tops visible at y 836 at 900 tall. Mobile: day-line becomes a horizontal 5-tick row (scrollable is NOT allowed; ticks shrink, labels .6875rem in flow, no absolute labels), cards stack 1-column.
- Header: 64 px white, hairline `#E6DCD8` bottom, logo text "Asayake Lodge" Fraunces 1.375rem + 24 px line mark, nav Karla 700 .9375rem `#8A746E` (Rooms · A day · Rates · Getting here · Questions), right a filled r6 button `#8A746E` "Ask for a bed". "nav: overlay" = on < 1024 the menu opens as a full overlay panel (`#F5F0EE`, links Fraunces 2rem); exactly one top menu. Header fade-in 0.4 s ease (RT (g)).
- Saturated share in first screen: rose `#8A746E` (S≈0.20) is not counted as saturated; amber underline + marker + photo highlights ≤ 6 %. Hard cap 15 % (check-first-screen.py), plan note 30 %.

### Block order (anchors; ≥ 8 photo positions — actual 12)
| # | Block (anchor) | Purpose | Layout | Photo | Copy |
|---|---|---|---|---|---|
| 1 | Hero `#top` | KV, promise | §3 first screen | **P01** | H1 + 1 lede + 4 bar cells + 3 cards |
| 2 | Notes for the stay `#notes` | T3 notice card | 1120 card, 4 rows | — | 4 lines |
| 3 | Why the house exists `#house` | narrative | 5/7 grid: left P02 portrait 4:5 r12 (Ines at the kitchen table with a ledger), right eyebrow + h2 "Built by a family who slept in a car park." + **3 paragraphs** (each 40–60 words) + figures row (sp-count): **22** beds · **6** min walk · **04:50** kitchen · **2014** opened | **P02** | ~170 words |
| 4 | A day in the house `#day` (sticky-media) | page_structure day-schedule | ≥ 782: left 5/12 column `position:sticky; top:96px` with a stack of P03 (thermos at the counter, 4:5 r12) and below it a 3:2 inset P04 (lit walking path at dawn) offset 48 px right, overlapping bottom 20 %; right 7/12 the **5 hour rows** (time Fraunces 2.5rem amber-ink `#3E3230` + 1 px rule + h3 + 2 lines), rows 200 px apart so the photo stays pinned. Mobile: photos above, rows stacked, no sticky. | **P03, P04** | 5 × 35 words |
| 5 | Rooms `#rooms` | what a room includes | h2 + 3 offer cards (RT offer cards 1.5:1 r12, title below on white): Single / Family / Accessible, each card: photo, name, "from €46" etc., 3 bullet facts; under them one "Every room has" line list (towels, blackout blind, reading lamp, phone charger, kettle) | **P06, P07, P08** | 3 × 30 words |
| 6 | Quiet band `#quiet` (parallax) | breathing room | full-width 1440 × 520 `sp-parallax` `--sp-par:10%`, P09 (night corridor, one lamp on, rose wall) as `.sp-parallax__layer`; foreground white r12 card 480 wide bottom-left (x 160, 64 px from bottom), NOT in the moving layer: one sentence "Quiet hours are 22:00–06:00. The night phone still answers." | **P09** | 1 sentence |
| 7 | Who the stay is for `#for` | audience | pale band `#EDE4E1` (RT pale tint band, padding 48 0), h2 + 3 white r12 info cards (RT (d): 1 px border, padding 32 24) each with a 56 px `#F5F0EE` r8 icon tile + line icon: "Parents of children on the ward" / "Partners and carers on long stays" / "Families arriving from far away" — 2 lines each + a small 1:1 r8 photo in card 2 | **P05** (card 2 thumb) | 3 × 35 words |
| 8 | Rates `#rates` | price list (6 items) | full-width 1120 table-list: name left, note middle, price right `white-space:nowrap; text-align:right`, rows 64 px, 1 px `#D9C9C4` rules; under it "Children under 4 stay free. Referral letters waive the deposit." No reveal. | — | 6 rows + 1 line |
| 9 | Key-card band `#book` | T2 CTA | §1 T2 | **P10** | h2 + 1 line + button |
| 10 | House letters `#letters` | 3 posts | 3 r12 cards 1.5:1, category + date + title below | **P11, P12, P13** | titles |
| 11 | Footer | address, hours, subscribe | 4 columns on `#3E3230` (RT navy strip role): wordmark + line mark / address + hours / pages / "House letter" subscribe panel (newsletter slot, §9) | — | |
Home photos: P01 P02 P03 P04 P05 P06 P07 P08 P09 P10 P11 P12 = **12 positions + P13 = 13**, no duplicates. Word count target ~600 English (≥ 250; ≥ 3 paragraphs ≥ 20 words in #house).

### Comparison with the most recent themes (home order must not match)
| Theme | Home order | Why ours differs |
|---|---|---|
| Zaseki Panel | three-column hero → floor narrative → 3 numbered mechanism → parallax band → product tiles → install photo+text → price band → news → FAQ → stripe band | ours opens with an inset framed window + text below + card row (not three-column), then a notice card; no numbered mechanism, no FAQ on home |
| Yubi College | ribbon hero + 8-cell grid → 2×2 who-for → big table story → week strip → ribbons → parallax room → graduate rows → fee sheet | no link grid, no 2×2; the schedule is a sticky photo + hour rows, not a horizontal week strip |
| Otonoha Acoustics | diagonal hero + timeline → four room cards on seam → vertical heading → sticky survey → report sheet → parallax → cases → fees → booking rows → CTA | ours has no diagonal seam; day-line is under the headline off-photo with cards hanging from ticks (Otonoha's was white on the photo, static); sticky block is the 3rd content block with a 2-photo stack; CTA is a tinted r16 band with tilted photo, not a flat band |
| Soroe Clinic | wide rounded hero + logo row → notice rows → worries → staircase → parallax review → numbers+portrait → masonry | Soroe's notice rows were full-width list rows on page; ours is one bordered r12 card with icon circles + chevrons; no logo row, no staircase, no masonry |

---

## 4. Inner pages (11 pages + news list + 3 posts; slugs identical in every language)
| Page (slug) | theme-meta key | Points | Photos |
|---|---|---|---|
| The house `/about/` | about | founding story (2014, Ines), what the house is not (not a clinic, no medical staff), 7 people as 2-column name/role rows with 3 small 1:1 r8 portraits (P16 group + text, no 4-person grid), values | P14 head (house front at dawn), P16 |
| Rooms `/rooms/` | — | 4 room types with facts (beds, bathroom, size), "every room has" T3 card, accessible room fittings | P05 head, P06, P07, P08 |
| A day in the house `/a-day/` | — | the 5 hours in full (sticky-media again, different photos), kitchen notes T3 card, quiet hour | P04 head, P03, P15 |
| Rates `/rates/` | — | the 6-item rate table (full width, nowrap), long-stay example (7 nights family room = €436.80), deposit/referral T3 | P07 head |
| Who the stay is for `/for-families/` | — | 3 audiences in depth, siblings, carers travelling alone, what social workers can send | P13, P11 |
| Getting here `/getting-here/` | — | the 6-minute walk (450 m, lit, step-free), bus 14 stop, 8 parking bays (€0 for guests), night arrival T3 | P15 head |
| Questions `/questions/` | — | 10 FAQ as `<details>` T3 rows (pets, visitors, cooking, length of stay, cancellation: free until 12:00 the day of arrival) | P14 head |
| Book `/book/` | contact | 4-step flow, form slot (§9), phone line, hours | P10 |
| House rules `/house-rules/` | — | quiet hours, kitchen labels, guests, smoking none, privacy | — |
| House letter `/house-letter/` | newsletter | standalone subscribe page (§9): what the letter is (one email a month: free beds, kitchen notices) | P12 |
| House letters (posts list) `/letters/` | news | role `posts`, empty content | — |
| Posts (3) | article | §0; category "House letters" (category screen), tag "kitchen" (tag screen) | P11, P12, P13 |
No separate `/contact/` page: screens.contact → `/book/` (Book carries address, phone, hours and the form). Pages count: about, rooms, a-day, rates, for-families, getting-here, questions, book, house-rules, house-letter, letters = 11 (≥ 8). screens: home, about, news→/letters/, article→post 1, category→House letters, tag→kitchen, newsletter→/house-letter/, contact→/book/.

---

## 5. Colour and type

### Colour (RT (a) relationship kept: one strong field framing the hero + deep strip + near-white ground + one small warm accent)
Reference hex `#004898` is replaced: the plan row fixes palette haizakura (grey cherry) `#8A746E` (rose family) and the note caps first-screen saturation (reference 60 % saturated; ours must be ≤ 15 %). A hospital-family lodge also needs a calm, non-corporate field. The **relationship and areas** follow RT: field 60 %→ our rose field ~42 % of the first screen (incl. photo frame margins + window behind photo), deep strip → `#3E3230` footer and text, ground `#F8F8F8` → `#F5F0EE`, tan accent `#C8B8A0` → amber `#D69A5C`, pale tint `#F0F4F8` → `#EDE4E1`.
| Token (theme.json slug) | Hex | Role | Share (whole page) | Source |
|---|---|---|---|---|
| `paper` | #F5F0EE | page ground | ~56 % | RT ground #F8F8F8 (−3 % L, rose tint) |
| `white` | #FFFFFF | bar, cards, notice card | ~12 % | RT #FFFFFF |
| `rose` | #8A746E | hero field, buttons, nav links, rules accent | ~14 % | plan row haizakura (grey cherry); RT primary role |
| `blush` | #D9C9C4 | key-card band, borders | ~5 % | RT CTA band role (#6D8FC4) |
| `pale` | #EDE4E1 | who-for band | ~5 % | RT pale tint #F0F4F8 role |
| `ink` | #3E3230 | text, footer | ~7 % | RT text #0D1A33 / strip #18305F role |
| `amber` | #D69A5C | underline, sun marker, icon outlines | ~1 % | RT accent tan #C8B8A0 role |
| `muted` | #75645F | secondary text (AA on paper 5.0:1) | — | derived |
Contrast: white on rose 4.6:1 (buttons Karla 700 ≥ .9375rem OK); ink on paper 11.7:1. First-screen saturated ≤ 15 % hard, target ≤ 8 %.

### Type (font_direction **serif**: latin heading Fraunces + body Karla; CJK Noto Serif TC / JP Mincho-style)
- Families (theme.json `fontFamilies` + `fontFace`, woff2 in assets/fonts, same in editor and front):
  - `display`: `"Fraunces", "Noto Serif TC", "Noto Serif JP", Georgia, serif` (Fraunces variable 400–600, opsz).
  - `body`: `"Karla", -apple-system, "Segoe UI", sans-serif` (Karla 400/700).
  - `:root:lang(zh-TW)` display: `"Fraunces", "Noto Serif TC", serif` (bundled Noto Serif TC subset); body: `"Karla", "PingFang TC", "Microsoft JhengHei", sans-serif` (system, no bundled zh/ja font).
  - `:root:lang(ja)` display: `"Fraunces", "Noto Serif JP", serif` (bundled subset); body: `"Karla", "Hiragino Sans", "Yu Gothic", sans-serif`.
  - zh/ja subsets via the Hokuto/Hada method (not the broken subset script); copy `shared/inc/editor-lang.php` → `inc/editor-lang.php` and require it (style.css uses `:lang(`).
- Sizes (theme.json fontSizes): `display` **4.5rem** (72 px; ≥ 4.25rem, H1 hero) lh 1.05 w500 ls −.01em · `xx-large` 3rem · `x-large` 2.25rem (h2, RT h2 21 px scaled to our serif heading; w500 lh 1.2) · `large` 1.5rem · `medium` 1.25rem (h3) · `base` 1rem body lh 1.7 (RT 15 px / 1.6 → 16 / 1.7) · `small` .875rem · `label` .75rem Karla 700 ls .06em uppercase (bar labels; RT tracked caps role). zh/ja headings ×0.75, body lh 1.85; fr/de `hyphens:auto`.

### Shape and spacing (RT (c)(d))
Container 1120 (RT). Header 64 fixed white, hairline. Section rhythm 104 px top/bottom (RT ~100). Card gap 24 (RT). Radius: photos/cards 12, CTA band 16, buttons 6, icon tiles 8 (all RT). Borders 1 px `#D9C9C4` or `rgba(138,116,110,.28)` (RT rgba(188,205,221,.6) role). Shadow only on the tilted key photo (RT mock shadow). No other shadows.

---

## 6. Photos (16; Imagery = photo; Grok one at a time; Read every one; webp ≤ 300 KB, ≤ 2000 px; 0 cut-outs)
**STYLE (one string, all photos):** `real documentary photograph, 35mm film grain, soft dawn daylight from a side window, slightly lifted blacks, muted low saturation, dusty rose-grey walls and warm pale oak wood, calm quiet guest house interior, shallow depth of field, natural unposed people of diverse backgrounds seen from behind or three-quarter, international neutral modern setting, no text, no logos, no signage, no brands, no Japanese elements`
| # | Subject / composition | Ratio | Used on (one per page) | Home |
|---|---|---|---|---|
| P01 | Shared kitchen at dawn: host (man, mid-40s, rolled sleeves, back three-quarter) fills a steel thermos at a counter centre-left; overnight bag on a wooden bench foreground left; large window at right showing a soft pale multi-storey hospital ward block in morning haze; diagonal shaft of light from that window to the bench | 2.7:1 (2000×740) | Home hero | ✔ |
| P02 | Woman in her 50s at a kitchen table writing in a ledger, mug, reading lamp | 4:5 | Home #house only | ✔ |
| P03 | Close: hands closing a thermos lid beside two paper cups, counter, early light | 4:5 | Home #day; A day | ✔ |
| P04 | Lit tree-lined footpath at blue dawn toward a distant pale hospital entrance, one person walking away | 3:2 | Home #day; A day head | ✔ |
| P05 | Accessible twin room: two beds, rail, wide doorway, rose wall | 3:2 | Home #for thumb (1:1 crop); Rooms head | ✔ |
| P06 | Single room: narrow bed with folded towels, reading lamp, blackout blind | 3:2 | Home #rooms; Rooms | ✔ |
| P07 | Family room: double bed + wooden bunk, a child's backpack | 3:2 | Home #rooms; Rooms; Rates head | ✔ |
| P08 | Roll-in shower bathroom, grab rail, pale tiles, towel | 3:2 | Home #rooms; Rooms | ✔ |
| P09 | Night corridor, one wall lamp on, rose-grey wall, doors closed | 16:7 (2000×875) | Home #quiet parallax | ✔ |
| P10 | Brass room key on a rose felt tag resting on a folded pillow | 3:2 | Home #book (tilted); Book | ✔ |
| P11 | Two adults sharing breakfast at a long table, morning | 3:2 | Post 1; Home #letters; For families | ✔ |
| P12 | Wall-mounted key box beside a front door at night, porch light | 3:2 | Post 2; Home #letters; House letter | ✔ |
| P13 | Two siblings drawing with crayons at a low table, adult nearby | 3:2 | Post 3; Home #letters; For families | ✔ |
| P14 | House front at dawn: three-storey brick terrace, lit ground-floor window | 3:2 | About; Questions head | |
| P15 | Night arrival: rolling suitcase by a lit doorstep, rain-wet path | 3:2 | Getting here head; A day | |
| P16 | Host team of four around the kitchen island mid-conversation, backs/three-quarter | 3:2 | About | |
Unique images 16 (12–18). Home 13 positions. No photo appears twice on the same page.

---

## 7. Motion and scroll effects (sp-scroll v1 copied unchanged; hero has no reveal)
Reference has no scroll reveal (RT (g)); additions kept subtle, 3 effect types:
| Effect | Class | Where | Source / trigger / time / easing |
|---|---|---|---|
| Parallax | `sp-parallax` | Home hero window (P01, `--sp-par:6%`), Home #quiet (P09, `--sp-par:10%`), inner page-head windows (`--sp-par:6%`) | toyoko-inn banner movement (carousel loop) → scroll-scrubbed, linear, CSS scroll-driven + IO fallback |
| Rise + stagger | `sp-reveal sp-reveal--up` on each hour row inside `sp-stagger` (#day), on the 3 room cards (#rooms) and 3 info cards (#for); letters cards | enter viewport, .8 s `cubic-bezier(.23,1,.32,1)`, 24 px, 0.12 s steps | ours (stage-a), RT has none |
| Count | `sp-reveal sp-count` | #house figures (22 / 6 / 2014; "04:50" left static) | enter, 1.2 s easeOutCubic |
Not on: hero, notice card, rates table, forms, footer, house rules. Load motions (CSS only, not sp-*): header fade 0.4 s ease (RT), light shaft slide-in 1.6 s `cubic-bezier(.3,0,.3,1)`, sun marker 1.2 s ease-out; all final state under reduced motion, `?sp-static` and the editor. Link hover opacity .7, .3 s ease-in-out (RT).

### 7.1 Parallax (required)
- **Primary: home hero.** Outer group `.al-window.sp-parallax` (r12, `overflow:clip`), P01 as direct `img`/`figure>img`, `--sp-par:6%` (mobile 4 %). Foreground (docked bar, shaft overlay) sits outside the moving image layer — the bar is a sibling positioned at the window top edge; the shaft is a pseudo/overlay on the static frame, not on the img. Reference counterpart: the banner's moving light trail / sliding banner.
- **Second: #quiet band** P09 `.sp-parallax__layer`, `--sp-par:10%` (mobile 6 %), white card foreground not in the layer.
- `check-parallax.mjs` must show ≥ 6 px differential on desktop and mobile, 0 under reduced motion.

---

## 8. Responsive rules (hard)
- 390 px first screen: window → 4:3 inset 16; docked bar becomes a 2 × 2 grid of cells **below the window top edge inside normal flow** (overlap the photo top by 0 — it sits as the first row of the window frame, static flow, no absolute positioning); no vertical text; no absolutely positioned labels over text; day-line ticks in flow; cards stack.
- Rates table at ≥ 782 px: full container width (1120 / 100 %), price column `white-space:nowrap; text-align:right; min-width:9ch`, never clipped or overflowing at 800 and 1280. < 782: each row stacks (name, note, price on its own line, price still right-aligned in a flex row).
- Any table (rates, room facts, hours) stacks on mobile; no horizontal scroll at 390 or 1280.
- Sticky #day only ≥ 782; key photo tilt reduced to −3° on mobile, band padding 24, photo below text.
- Header overlay menu < 1024; one menu.

---

## 9. Forms (form contract v1 — `steps/form-contract-v1` exists)
- Copy `pipeline/assets/forms/shippress-forms.php` → `inc/shippress-forms.php`, its CSS + editor JS → `assets/` unchanged; `require_once` in functions.php. Patterns stay literal block markup with small PHP islands; run `pattern_source.py` before build/inner done.
- **Book** (`/book/`, contact screen; the only booking page): section `#request` below the 4 steps, white r12 panel 1 px `#D9C9C4` on paper, its own block: `shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) )`. Fallback (`ob_start()` literal markup, unchanged class/href): filled r6 button `<a class="wp-element-button al-mail" href="mailto:stay@asayake-lodge.example?subject=…">` label `book_email_button` "Email the house" + line `book_call_line` "Or call +00 44 555 0142, 07:00–21:00 every day. After 21:00 the night phone answers." Never links to /book/ or /contact/.
  - Recommended CF7/WPForms fields (readme + brand.md): name*, email*, phone*, arrival date*, nights*, guests (adults / children under 4 / children 4+), room type (select: Single / Twin / Family / Accessible / Any), ward or department (optional), arriving after 21:00 (checkbox), referral letter (checkbox), message (textarea), consent* (checkbox), submit "Ask for a bed".
- **House letter** (`/house-letter/`, newsletter screen; standalone page, slot on a white r12 panel on the pale band) and the **footer "House letter" panel** (dark `#3E3230`, every page incl. home — far below the first screen): `shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'stay@asayake-lodge.example', 'label' => forms_email, 'submit' => forms_subscribe, 'notice' => forms_mail_notice, 'subject' => forms_mail_subject ) )`. Order: MailPoet (explicit ID via `shippress_form_id`) → MC4WP → opt-in dedicated CF7/WPForms newsletter ID only. No plugin → required email field + submit, native mailto POST with the entered address and the visible notice; never claims success.
- Tokens (style.css, mapped from theme.json presets; scoped to plugin classes / `.sp-newsletter-fallback`; no global input/form selectors):
  - Light (paper / white / pale): `--sp-form-accent:#8A746E`, `--sp-form-on-accent:#FFFFFF`, `--sp-form-radius:6px`, `--sp-form-focus:#3E3230` (2 px outline, offset 2 px), `--sp-form-surface:#FFFFFF`, `--sp-form-text:#3E3230`; border `#D9C9C4`, hover `#8A746E`; placeholder `#75645F`.
  - Dark (footer `#3E3230`): accent `#D9C9C4`, on-accent `#3E3230`, surface `rgba(255,255,255,.08)`, text `#F5F0EE`, border `rgba(245,240,238,.45)`, focus `#D69A5C`.
  - Error `#9A3B2E` (dark `#F1B9AE`) 1 px border + message below field; success `#4D6B4F` (dark `#BFD8C0`). Inputs 48 px, label Karla 700 .8125rem ls .04em, input Karla 1rem, textarea min 160 px, checkbox/radio 18 px accent rose, submit 52 px Karla 700 .9375rem. Same look for CF7, WPForms, MailPoet, MC4WP (Jetpack blocks too). Check at 390 and desktop, light and dark.
- i18n: semantic keys in `inc/i18n/en.php` first — `forms_email` ("Email address"), `forms_subscribe` ("Send me the house letter"), `forms_mail_notice` ("Opens your email app with your address filled in. Send it to join the monthly house letter — you are not on the list yet."), `forms_mail_subject` ("House letter: please add me"), `book_email_button`, `book_mail_subject` ("Bed request"), `book_call_line`; localised (not literal) in zh-TW, ja, fr, de; extract with `L10N_SEMANTIC=1`; dynamic block attributes render translated in every locale.
- No `sp-reveal` on any form or its section; no form in the home first screen.

---

## 10. Similarity to the reference (target 80 %; values from RT)
| Dimension | Reference (RT) | Ours |
|---|---|---|
| Field / deep / ground / tint / accent | #004898 / #18305F / #F8F8F8 / #F0F4F8 / #C8B8A0 | #8A746E / #3E3230 / #F5F0EE / #EDE4E1 / #D69A5C (row palette + saturation cap; relationship kept) |
| First-screen saturated share | 60.3 % | ≤ 8 % target (cap 15 %) |
| Header | 64 px white fixed, hairline, no shadow, links 15/700 primary, filled r6 button right | 64 px white fixed, hairline `#E6DCD8`, links Karla .9375rem/700 rose, filled r6 rose button right |
| Hero field | 600 tall under header, banner 1184×493 | rose field y 64–640 (576), framed window 1360×504 r12 |
| Docked bar | white r8, 1120×64, 4 cells + search button, top of field | white r8-top, 1120×56, 4 text cells, top edge of window, no button |
| Light trail | translucent white wedge ~340 px, diagonal | translucent warm-white wedge ~46 % of window, 118°, slide-in 1.6 s |
| Headline | tracked caps ~40 px in artwork, tan 4 px underline under one word | Fraunces 4.5rem below photo, amber 3 px × 64 underline under two words |
| Emblem | white 2 px line emblem ~220 px lower left | rose 2 px line mark 112 px right of H1 |
| Strip under hero | navy 74 px info strip | day-line + 3 white r12 cards (hero_footer card-row) |
| Notice card | white r12, 1 px border, icon circle, rows + chevrons | white r12, 1 px #D9C9C4, 28 px amber circle icons, 4 rows 60 px + chevrons |
| Offer cards | 1.5:1 r12 photo, title below on white, gap 24 | 1.5:1 r12 photo, title below on white, gap 24 |
| CTA band | r16 tint, heading + outline r6 button, tilted card mock with shadow | r16 #D9C9C4, heading + outline r6 button, tilted (−6°) key photo r12 with shadow |
| Info cards on pale band | 3 white r12, 1 px border, pad 32 24, band pad 48 0 | identical values on #EDE4E1 |
| Icon tiles | 56 px pale r8 | 56 px #F5F0EE r8 |
| Container / gaps / rhythm | 1120 / 24 / ~100 | 1120 / 24 / 104 |
| Type | Noto Sans 15/1.6; h2 21/700 | Fraunces headings (h2 2.25rem/500), Karla 16/1.7 (serif direction from the row) |
| Imagery | daylit saturated real photos, portrait & 1.5:1 cards | film-grain muted real photos, 1.5:1 cards, 4:5 portrait in #house/#day |
| Motion | header fade 0.4 s; carousels; hover opacity .3 s; no scroll reveal | header fade 0.4 s; parallax (hero, #quiet); reveal-up + stagger (3 groups); count; hover .3 s |
| Footer | white, links | `#3E3230` (navy strip role moved to footer) with subscribe panel |

---

## 11. Home acceptance checklist
- [ ] Header 64 px white, hairline, one top menu, rose r6 "Ask for a bed" button; overlay menu < 1024.
- [ ] Hero = framed-window / below-photo / card-row: P01 inset window r12 on rose field (40 px L/R margins visible); NO text over the photo except the opaque white docked bar; H1 below on paper; day-line + 3 cards whose tops are visible at 1440 × 900. Not full-bleed overlay.
- [ ] All 7 KV items visible in the first screen (field, bar, ward block in window, light shaft, H1 + amber underline, line mark, day-line + card tops).
- [ ] Light shaft slides in once; reduced motion / `?sp-static` show the final state.
- [ ] T3 notice card directly after the hero; T2 key-card band with −6° tilted P10 and shadow before letters.
- [ ] #day sticky photo stack ≥ 782 while 5 hour rows scroll; static on mobile.
- [ ] Parallax on hero P01 and #quiet P09; `check-parallax.mjs` passes desktop + mobile; reduced motion 0 px.
- [ ] Rates: 6 items identical to §0; full width at 800/1280, prices nowrap right; stacked at 390.
- [ ] 13 photo positions, no duplicates; ≥ 250 English words (target ~600), ≥ 3 narrative paragraphs ≥ 20 words.
- [ ] First-screen saturated ≤ 15 % (check-first-screen.py); max font size 4.5rem in theme.json; fonts via theme.json fontFace identical in editor.
- [ ] Footer House-letter slot (dark tokens) renders email + submit without plugins; no form in first screen; no reveal on forms/rates/hero.
- [ ] auto-gates `1 1` pass at 390 and 1280; no horizontal overflow; no overlapping text in 390 first screen.
