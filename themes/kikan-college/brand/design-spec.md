# Kikan College: design spec (stage 1 spec, binding for implementation)

Slug `kikan-college`. A **plumbing and heating apprenticeship college** for adults: a two-year course, one year at the bench in the college halls, one year placed with a working firm. Row b40-2: archetype **horizontal-strip**, hero **text-left-photo-right**, nav **split**, first screen hint **timeline-line**, page structure **day-schedule**, type **business** (category education-classes; WooCommerce declared compatible, not required, the site works fully without it), font direction **sans** (Instrument Sans / Source Sans 3, CJK Noto Sans TC / JP, gothic), palette katsu-iro `#3C4F62` (family navy), photo direction low-key. Five languages: en, zh-TW, ja, fr, de.

Primary reference (ref-check passed; not in `used-refs.txt`): **Nihon Kogakuin (NEEC)** https://www.neec.ac.jp/ — a vocational college whose home page opens with a rounded framed photo window of a trainee at work. No secondary reference. Measurements in `brand/reference-tokens.md`, quoted below as **RT(a)…RT(g)**. Screens in `brand/ref/`: `neec-first.png` (first screen 1440 × 900), `neec-s2.png` (entrance tiles + illustrated map), `neec-s3.png` (open-campus band), `neec-s4.png` (campus cards), `scroll-neec-before.png` / `scroll-neec-after.png`.

**Imagery: photo** (stage-a IMAGERY = photo; NEEC's hero and lead positions are documentary photographs, RT(e)). We generate every photograph ourselves with one STYLE string (§6). We never copy NEEC's photographs, illustrated map, vector figures, copy, logo or full-page layout. Window, panels, slash, tiles, plates, hatching, date tile, ticks and icons are our own CSS / SVG.

---

## 0. Fixed brand facts (identical on home, inner pages, posts and all five languages; brand.md copies these)

- **Kikan College**, plumbing and heating apprenticeship college, founded **2009** by **Rosa Lindqvist** (master plumber) and **Emeka Obi** (heating engineer) in a former foundry workshop. Address **22 Foundry Lane, Wrenfield** (fictional, international-neutral town), two bench halls on the ground floor, step-free. Phone **+00 44 555 0193** (fictional format). Email `hello@kikan-college.example`.
- **Tagline (meta description, footer):** "Warm homes start at the bench."
- **The course (one course, two years, intake every September):**
  - **Year 1 — the bench year** (38 teaching weeks, September–July): **4 bench days** (Mon–Thu) in Bench Hall A (pipework, soldering, bending, drainage) and Bench Hall B (boiler rig, controls, heat pumps) + **1 theory day** (Fri: water regulations, heat loss, reading drawings, safe working).
  - **Year 2 — the placement year:** **4 days a week placed with a partner firm** + **1 day at college** (Fri), with one site visit per term from the placement coordinator.
  - **24 places per intake** (two groups of 12); **18 placement partners** within 40 km of Wrenfield; minimum age **18**, no upper age; no previous trade experience needed.
- **Stats row numbers (hero, `sp-count`):** **2** years · **4 + 1** bench and theory days a week · **24** places each September · **18** placement partners.
- **A training day (Mon–Thu, the day strip; minutes are the flex weights):**
  | Time | Minutes | Block |
  |---|---|---|
  | 07:45–08:00 | 15 | Tool check and toolbox talk |
  | 08:00–10:15 | 135 | Bench block one (cut, bend, joint) |
  | 10:15–10:35 | 20 | Break |
  | 10:35–12:30 | 115 | Bench block two (the week's piece) |
  | 12:30–13:15 | 45 | Lunch |
  | 13:15–15:00 | 105 | Rig block (pressure test, fault-finding on the boiler rig) |
  | 15:00–15:30 | 30 | Logbook, sign-off, bay swept |
  Total 07:45–15:30 = 465 min. **Friday theory day:** 08:30–12:30 theory room (240) · 12:30–13:15 lunch (45) · 13:15–15:30 open bench and resits (135).
- **Hours:** College office Mon–Fri **08:00–16:30**. Bench halls Mon–Thu **07:45–15:30**, Fri **08:30–15:30**. **Taster Saturday**: first Saturday of every month **09:00–15:00** (not in August). Evening refresher: Tuesdays **18:00–21:00**.
- **Applying (4 prose lines 01–04, never a step grid or vertical timeline):** 01 Come to a taster Saturday or a Tuesday visit (16:00). → 02 Apply online or by email; applications for September close **30 April**. → 03 A bench morning and a talk (**90 minutes**): you cut and join one piece of pipe; nobody expects it to be good. → 04 An offer letter within **10 working days**; a **EUR 300** deposit holds the place and counts towards Year 1.
- **Fees (7 items, EUR in every language; home table = Fees page = Apply page summary):**
  | # | Item | What it covers | When | Price |
  |---|---|---|---|---|
  | 1 | Year 1 — bench year | 38 weeks, 4 bench days + 1 theory day | Sep–Jul | EUR 4,800 |
  | 2 | Year 2 — placement year | 4 days placed + 1 college day, 3 site visits | Sep–Jul | EUR 2,400 |
  | 3 | Starter tool kit | cutter, bender, grips, torch, case; yours to keep | Year 1, week 1 | EUR 640 |
  | 4 | Workwear and safety pack | two overalls, boots, gloves, glasses | Year 1, week 1 | EUR 180 |
  | 5 | Assessment and logbook | bench assessments and the signed logbook | per year | EUR 220 |
  | 6 | Evening refresher | six Tuesday evenings for people already in the trade | rolling | EUR 390 |
  | 7 | Taster Saturday | one Saturday at the bench, lunch included | monthly | Free |
  Note line everywhere the table appears: "Year fees can be paid in ten monthly instalments at no extra cost. A EUR 300 deposit holds a place and counts towards Year 1. Placement firms pay apprentices a training wage in Year 2; the amount is agreed with each firm."
- **Named people (8, fictional):** staff **Rosa Lindqvist** (principal, co-founder, master plumber, leads Bench Hall A), **Emeka Obi** (co-founder, head of heating, Bench Hall B and the boiler rig), **Hana Petrović** (instructor, soldering and pipework), **Luis Carvalho** (instructor, heat pumps and controls, teaches the Friday theory day), **Grace Mwangi** (placement coordinator, visits every Year 2 apprentice on site). Apprentices in the stories: **Aiyana Brooks**, **Farid Haddad**, **Ingrid Solberg**.
- **Stories (3, qualitative only; no rates, no job promises):**
  1. **Aiyana Brooks, 34, was a café manager** — changed trade after fixing the café's water heater with a plumber on the phone; Year 2 with a four-person heating firm in Wrenfield; now works there, mostly on boiler services. "I like that a day ends with something that works."
  2. **Farid Haddad, 27, worked in a warehouse** — slow at soldering for the first term (Hana kept him back on Fridays); placed with a housing maintenance team; the team kept him on after the placement year.
  3. **Ingrid Solberg, 46, returned to work after raising three children** — the oldest in her group; placed with a heat-pump installer; now plans the pipe runs on site.
- **Placement partner types (home ledger, sum 18):** small heating firms **7** · housing maintenance teams **5** · commercial plumbing contractors **4** · heat-pump installers **2**. Wording rule: "A placement is a training year, not a job offer. Many firms do keep their apprentice on; we never promise it."
- **What we are not:** not a quick certificate, not online, no gas work on live homes in Year 1; Year 2 gas or electrical work only under the placement firm's qualified engineer.
- No awards, no real accreditation bodies or qualifications named (say "the bench assessments and the signed logbook"), no employment rates, no real brands, places, media or people.

---

## 1. Signature techniques (three, from NEEC https://www.neec.ac.jp/; obvious at a glance; not to be diluted)

### T1. Framed end-panel window with a diagonal slash (`ref/neec-first.png`, RT(c)(d)(e))
- **Reference:** under the header, one **rounded window r40, inset 24 px** from both page edges (1392 × 547 at 1440, ratio 2.54:1); its two ends are **solid colour panels** (orange, ~205 px each) carrying **vertical tracked text** (intake date, course name) with faint thin diagonal lines; a low-key dusk photo fills the middle; a **bright diagonal slash (~8 px)** runs lower-left → upper-right across the window, splitting the view; the headline sits large on the photo with a blue underline bar.
- **Ours (home hero, block 1):** same window: inset 24 px, 1392 × 547 at 1440 × 900, **r40**, `overflow: clip`. Composition forced to split-photo-right: the **left end panel is widened to 46 %** and carries a 64 px vertical-label rail + the headline (beside the photo); the photo fills the right; a **narrow right end strip 72 px** in the same panel colour carries the second vertical label (the reference's second end panel). The **join between panel and photo is the slash**: panel's right edge leans 12° (116 px over 547 px, "/" direction like the reference), with an **8 px copper `#B8683A` band** exactly along it. Faint 1 px white (12 % opacity) diagonal lines on the panel (two, parallel to the slash).
- **Not to be diluted:** r40 window (not r8, not square), 24 px inset (not full-bleed, not container-narrow), solid panel colour (not a pale tint, not a gradient), vertical labels on ≥ 1100 px, the slash must be a diagonal band of the accent colour (not a straight vertical divider, not a hairline).
- **Inner pages (T1 head on About, The course, A training day, Placements, Instructors, Stories, Fees, Apply, Open days, Contact, College letter = 11):** same window scaled: inset 24, height 380 (mobile: stacked, §8), r40, panel 44 % with vertical page label (e.g. "THE COURSE · 01") + H1 4xl + one-line lede, photo right, copper slash band 8 px at the same 12°, right end strip 72 px with the page's Latin keyword vertical. Photo `figure.sp-parallax` `--sp-par: 6%`.

### T2. Numeral-over-title section head with a pill rule (`ref/neec-s2.png` "01", `neec-s3.png` "02", `neec-s4.png` "03", RT(b)(f)(g))
- **Reference:** small numeral "01" (16–20 px, 400) centred above a **centred bold H2** (36 px / 700 / 1.4), then a **pill rule 2.22 em × 0.17 em** that grows under the title after it rises; a centred bold sub-line (24 px) may follow; heading → content 48–64 px.
- **Ours:** `.kc-head` (centred, max-width 880): numeral Instrument Sans 400 **1.125rem** (18 px) `#1B2733`, 4 px gap, **H2 Instrument Sans 700 2.25rem / 1.4** `#1B2733`, 14 px gap, pill rule **80 × 6 px** (2.22 em × 0.17 em of 36 px), radius 999, `#B8683A`; optional sub-line Source Sans 3 700 1.375rem / 1.5. Heading → content 56 px. Numerals are real text in markup ("01"…"07"), never CSS `content`.
- **Motion:** the head group carries `sp-reveal sp-reveal--wipe` (children numeral, H2, rule are clipped top → bottom 1.1 s `cubic-bezier(.77,0,.175,1)` = the reference's characters rising out of a mask); see §7.
- **Not to be diluted:** centred (not left), numeral above (not beside), the pill rule in copper under every H2 (not a full-width hairline).
- **Inner pages:** every H2 section on every inner page uses `.kc-head`, numbered from 01 per page.

### T3. Tinted tile with an inset white plate, 3 × 2 (`ref/neec-s2.png` top, RT(c)(d)(f))
- **Reference:** a centred 960 px block of **3 × 2 tiles, 304 × 171, gap 24**, each tile a flat colour (red, green, aqua, yellow-green) with faint faceted sheen, radius 12–16, holding a **centred white plate r8** (inset ~18 px) with a small coloured chip label + one bold line; some tiles are photos with a caption.
- **Ours (home block 2 "Where to start"):** same block: 960 wide, 3 × 2 tiles **304 × 171, gap 24**, r16; tile tints rotate **steel `#C5D0DB` · grey-sage `#C9D4D0` · copper-tint `#E3D3C7`** (row 1: steel, sage, copper-tint; row 2: copper-tint, steel, sage) with sheen `linear-gradient(135deg, rgba(255,255,255,.28) 0 38%, rgba(255,255,255,0) 38% 100%)`; white plate inset **18 px** (268 × 135), r8, centred content: chip (katsu `#3C4F62`, white Source Sans 3 600 13 px, padding 3 10, r2) + label Instrument Sans 700 1.375rem `#1B2733` + one line 14 px `#56606B`. Tile 3 and 6 are **photo tiles** (photo cover + plate in the lower-left 60 % width, like the reference's photo tiles). Whole tile is one link; hover: plate lifts 3 px, 0.3 s ease.
- **Not to be diluted:** solid tints (not white cards with borders), the inner white plate (not text directly on the tint), exactly 3 × 2 at ≥ 1024 px.
- **Inner pages:** "Next steps" row (3 tiles of the same size, one row) at the foot of About, The course, A training day, Placements, Stories, Fees; Course page "Inside the two years" 3 × 2 tile block (terms); Placements page partner-type tiles (4 tiles, 2 × 2).

### Supporting (required, not counted as signatures)
- **Announcement strip** (RT(a) pink strip, red bold 14 px text): 40 px strip `#E4E9EE` at the very top, Source Sans 3 700 14 px `#1B2733`, 20 px copper info disc (white "i" SVG) left, arrow → right. Text: "Applications for the September 2027 intake close on 30 April 2027 →" → `/apply/`.
- **Two CTA blocks in the header** (RT(c) 64 × 64 r8): "Taster Saturday" `#3C4F62` and "Apply" `#B8683A`, white Source Sans 3 700 12 px, two-line centred, `/open-days/` and `/apply/`.
- **Right-edge vertical CTA tabs** (RT(f) two fixed 64 px tabs): **≥ 1280 px only**, fixed right 0, top 176: tab 1 `#3C4F62` "TASTER SATURDAY" 64 × 260, tab 2 `#B8683A` "APPLY" 64 × 150, gap 8, radius `12px 0 0 12px`, white Instrument Sans 600 14 px vertical (`writing-mode: vertical-rl`), 20 px line icon on top. Hidden < 1280 px (never on mobile).
- **Pill buttons** (RT(d)): outline = white fill, 2 px `#1B2733` border, r999, height 60, Source Sans 3 700 15 px, arrow right; solid = `#1B2733` fill, white text.
- **Open-day band** (RT(f) open-campus band): §3 block 11.
- **Excluded:** the fixed bottom-left scroll-spy contents tab (needs a scroll listener; not allowed) and the illustrated isometric map T4 (illustration is secondary in the reference; our imagery is photo).

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
NEEC's first screen is a **rounded framed window** holding a low-key dusk photograph of an airport ground-crew trainee in hi-vis and a white helmet, raising signal wands in front of an aircraft nose; a second view of a crew member waving is split off by a **red diagonal slash**; two bright orange **end panels** frame the photo with **vertical text** (the opening date of the course, the course name); the headline "there is a job that protects from the ground" sits large across the lower photo with a blue bar. **Story:** "there is a skilled job on the ground that keeps everything moving, and you can learn it here." **Motion:** the window plays a muted looping video; below, section titles rise out of a mask and a pill rule grows; open-campus photos travel in (RT(g)).

### (2) Our translation (same story, same window composition, same image type: one low-key documentary photograph of a trainee at work; composition forced to split-photo-right / beside-photo / stats-row)
The skilled job that keeps everything working is **heating and water in homes**. In the window: a low-key photograph of an **apprentice in navy overalls checking a freshly soldered copper joint on a practice rig under a task lamp**, the only bright thing in a dark bench hall — the reference's lit worker against dusk. The orange end panels become **katsu-iro panels**; the left one is widened so the headline sits **beside** the photo ("Warm homes start at the bench."); vertical labels give the intake and the course name like the reference; the red slash becomes the **copper slash** (the trade's metal) along the panel/photo join. The reference's looping video becomes **slow parallax** of the photo inside the window (`sp-parallax` 6 %); instead of the entrance tiles directly touching the window, the hero foot is the planned **stats row** with count-up numbers. Story line: "A trade that keeps buildings warm, learned at the bench."

### (3) KV checklist (all implemented on the home first screen at 1440 × 900 and visible)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Rounded framed window r40, inset 24 px, 1392 × 547 | Same window r40, inset 24, 1392 × 547 (`height: clamp(440px, calc(100vh - 353px), 600px)`), `overflow: clip` | x 24–1416, y 160–707 | static frame | — (CSS) |
| 2 | Two solid end panels with vertical tracked text (intake date / course name) | Left panel `#34404C` 46 % with 64 px rail, vertical "SEPTEMBER 2027 INTAKE" (Instrument Sans 600 22 px, ls .16em, white 80 %); right end strip 72 px `#34404C` with vertical "PLUMBING AND HEATING" | left rail x 24–88; right strip x 1344–1416 | static | — (CSS) |
| 3 | Red diagonal slash across the window | Copper `#B8683A` 8 px band along the 12° slanted join panel → photo ("/" direction) | panel right edge, from (x 664, y 707) to (x 780, y 160) | static (hero has no reveal) | — (CSS) |
| 4 | Low-key dusk photo of a trainee at work (video loop) | Low-key photo: apprentice in navy overalls checking a soldered copper joint on a practice rig under a task lamp | right of the slash to the end strip (x 664–1344, visible ~ 680 × 547) | **`sp-parallax`, `--sp-par: 6%`** (mobile 4 %) | **#1 `hero-joint.webp`** |
| 5 | Large headline with a coloured underline bar | **H1** "Warm homes / start at / the bench." Instrument Sans 700 4.25rem white + copper bar 96 × 6 r999 + lede + solid button, **beside** the photo in the panel | panel, x 112–620, vertically centred | static | — |
| 6 | Entrance tile row directly under the window (first thing after the KV) | **Stats row** (hero_footer): 4 cells "2 years · 4 + 1 days a week · 24 places · 18 partners", 1 px `#CDCED5` dividers | under window, x 24–1416, y 731–835 | **`sp-count`** (1.2 s easeOutCubic, numbers only, no `sp-reveal`) | — |

All six rows are visible above y 900 at 1440 × 900. Row 4 photo is listed in §6. The announcement strip and the two header CTA blocks (supporting) are also in the first screen.

---

## 3. Home page

### First screen composition
**hero_composition: split-photo-right · hero_text: beside-photo · hero_footer: stats-row · hero_fingerprint: split-photo-right/beside-photo/stats-row**

- **split-photo-right:** Group `.kc-hero` alignfull, ground `#F4F6F8`, padding 24 24 0. Inside, `.kc-window` (1392 × 547 at 1440; `border-radius: 40px; overflow: clip; display: grid; grid-template-columns: 46% 1fr 72px`). Column 3 = right end strip. Column 2 = `figure.kc-hero__photo.sp-parallax` (`--sp-par: 6%`) with `<img>` photo #1, `object-fit: cover; object-position: 62% 45%` (joint and lamp in the right-centre, never under the panel), **no text on the photo, no gradient overlay**. The photo cell starts 116 px under the panel (panel `margin-right: -116px`, `z-index: 2`) so the slant reveals it. **Not full-bleed:** the window keeps the 24 px page-ground margin on both sides and its r40 corners; nothing is overlaid on the photo.
- **The slash (KV #3):** `.kc-hero__panel-wrap` background `#B8683A`, `clip-path: polygon(0 0, 100% 0, calc(100% - 116px) 100%, 0 100%)`; inside it `.kc-hero__panel` background `#34404C`, `clip-path: polygon(0 0, calc(100% - 8px) 0, calc(100% - 124px) 100%, 0 100%)` → an 8 px copper band along the slant. No extra element, no absolute label. (The hero is not observed by sp-scroll, so clip-path here is allowed.)
- **beside-photo:** panel content grid `64px 1fr`: rail (1 px `rgba(255,255,255,.2)` right border, vertical label KV #2 centred) | text block padding 0 140 0 48 (room for the slant), `align-self: center`:
  1. Eyebrow Source Sans 3 700 13 px ls .14em uppercase `#E3C2A8`: "TWO-YEAR PLUMBING AND HEATING COURSE".
  2. **H1** "Warm homes<br>start at<br>the bench." Instrument Sans 700 `clamp(3rem, 4.8vw, 4.25rem)` (68 px at 1440), lh 1.05, ls −0.015em, `#FFFFFF`, max 3 lines in en (fr / de may take 4: size floor 3rem, `max-width: 10ch`, `hyphens: auto`).
  3. Copper bar 96 × 6 r999 `#B8683A`, margin 20 0.
  4. Lede Source Sans 3 400 17 px / 1.7, white 86 %, max 3 lines: "One year at the bench in our Wrenfield halls, one year placed with a working firm. For adults of any age; no trade experience needed."
  5. Buttons row (gap 12): solid pill **white fill, `#1B2733` text** "Book a taster Saturday" → `/open-days/` (height 52); text link white underline "How a day is split ↓" → `#day`.
  The two faint diagonal lines: `background-image: linear-gradient(78deg, transparent 49.9%, rgba(255,255,255,.12) 50%, transparent 50.2%)` at two offsets (30 %, 62 %).
- **Right end strip:** `#34404C`, vertical "PLUMBING AND HEATING" Instrument Sans 600 18 px ls .2em white 70 %, centred.
- **stats-row:** `.kc-stats` 1392 wide (same x as the window), margin-top 24, height 104, white ground r16, 4 equal cells divided by 1 px `#CDCED5` (RT(d) hairline), each cell centred: number Instrument Sans 600 **3rem** `#3C4F62` (`sp-count`, e.g. `<span class="sp-count">24</span>`) + label Source Sans 3 600 14 px `#56606B` on one line beside or under it ("years", "bench + theory days a week", "places each September", "placement partners"). For "4 + 1" only the 4 counts (first number) — acceptable. No `sp-reveal`.
- **Header (nav split; exactly one top menu):** announcement strip 40 px (0–40) → header 96 px (40–136), ground `#F4F6F8`, sticky (strip scrolls away). Left x 24: mark (our SVG, 44 px: copper ring 3 px with a katsu pipe-elbow glyph) + wordmark "Kikan College" Instrument Sans 700 26 px `#1B2733` + under it "PLUMBING & HEATING" Source Sans 3 600 10 px ls .32em `#56606B` (RT(c) logo with spaced Latin). Right, split into two rows like the reference: **row 1 (utility, not a navigation block, no `<nav>`):** paragraph links 13 px 500 with 16 px line icons: "Office Mon–Fri 08:00–16:30" · "+00 44 555 0193" (`tel:`) · "Getting here" → `/contact/` · language switcher. **Row 2 (the one `core/navigation`):** Source Sans 3 700 15 px gap 24 `#1B2733`: The course · A training day · Placements · Instructors · Fees · Open days · News. Then the two 64 × 64 CTA blocks (supporting). < 1100 px: menu collapses to a 48 × 48 r8 `#1B2733` square toggle with three white bars (RT(c) dark square button); the CTA blocks hide; utility row hides except the language switcher.
- **Vertical budget at 1440 × 900:** strip 0–40 → header 40–136 → 24 gap → window 160–707 → 24 → stats 731–835 → 65 px ground → block 2 tiles start ~ 900.
- **Saturated share** (`check-first-screen.py`, HSV S > 0.35 and V > 0.24): **target ≤ 10 %, hard max 15 %** (row cap 30 %). The panel `#34404C` (S 0.32) does **not** count — that is why the panel is `#34404C` and not the row hex `#3C4F62` (S 0.39, would add ~ 26 %). Counted: copper slash ~ 0.4 %, copper CTA block + tab ~ 1.5 %, katsu CTA block + tab + stats numerals ~ 2 %, photo highlights ≤ 5 % (the photo must stay low-key: dark surround V < 0.24, the lamp light near-neutral warm white, copper only on the joint). Run the script on the shot before handing over.
- **Mobile 390:** strip wraps to 2 lines (13 px) → header 64 px (mark + wordmark + language switcher + 48 px square toggle) → window margin 12, **stacked, r24**: photo first (358 × 240, 3:2, `sp-parallax` `--sp-par: 4%`), then panel `#34404C` full width with `border-top: 6px solid #B8683A` (the slash becomes a straight copper edge; no clip-path on mobile), padding 28 24: the vertical label is rendered as a **horizontal** eyebrow line in normal flow ("SEPTEMBER 2027 INTAKE · TWO YEARS", `writing-mode: horizontal-tb`), H1 2.75rem (3–4 lines), bar, lede, full-width button; right end strip hidden → stats row 2 × 2 grid (cells 171 wide, dividers become `border-top` / `border-left`). **No vertical text, no absolutely positioned label, nothing overlapping**; normal flow only. Right-edge tabs hidden.

### Block order (day-schedule structure; anchor ids in brackets)
| # | Block | Purpose | Layout / photos | Copy |
|---|---|---|---|---|
| 0 | Announcement strip + header | intake deadline, one top menu | §3 header | 1 line |
| 1 | **Hero window + stats row** `#top` | KV | T1 + stats row, photo #1 | H1 + 30-word lede + 4 stats |
| 2 | **Where to start** `#start` | reference entrance tiles | T3 3 × 2, 960 centred, 64 px under the stats row, no heading (like the reference). Tiles: (1) steel "From September 2027" chip / "24 places, two groups of 12" → `/apply/` · (2) sage "Every month" / "Taster Saturday" → `/open-days/` · (3) **photo tile #15** chip "Open bench" / "Visit on a Tuesday, 16:00" → `/open-days/` · (4) copper-tint "Fees" / "Ten monthly instalments" → `/fees/` · (5) steel "Year 2" / "Placements with 18 firms" → `/placements/` · (6) **photo tile #18** chip "Employers" / "Take an apprentice" → `/placements/#employers`. Parent `sp-stagger`, tiles `sp-reveal sp-reveal--zoom`. | 6 × 8 words |
| 3 | **01 Who the course is for** `#who` | narrative: who comes, why adults | T2 head "Who the course is for" + sub-line "Adults who want a trade they can see working." Grid 5/7 in 1200: left photo #2 at 4:5, r16; right **3 narrative paragraphs ≥ 60 words** (career changers; people returning to work; school leavers over 18 who want a bench, not a lecture hall), then a 3-row list with 1 px `#CDCED5` rules: "No experience needed" / "No upper age" / "Minimum age 18". Prose wrapper `sp-reveal sp-reveal--up`. | ≥ 200 words |
| 4 | **02 How a training day is split** `#day` | the page structure: the day strip | T2 head + sub-line "Four bench days and one theory day, every week of Year 1." **Day strip** (horizontal-strip archetype): 1200 wide, flex row, height 72, r16 overflow clip, 2 px `#F4F6F8` gaps; each segment `flex-grow` = minutes (§0): bench blocks `#3C4F62` white label, rig block `#34404C` white, logbook `#E3D3C7` ink, tool check / break / lunch `#E4E9EE` ink. Inside wide segments: Source Sans 3 700 15 px label + 13 px time; narrow ones (15, 20, 30, 45) show time only. Above the strip a **time line** (first_screen hint timeline-line): 1 px `#1B2733` line with 8 tick labels 13 px (07:45 08:00 10:15 10:35 12:30 13:15 15:00 15:30) at proportional positions. Under it a second, thinner strip (40 px) "Friday: theory day" (240 / 45 / 135). Below, 3 columns gap 24: photo 4:3 r16 + H3 + 50 words each: **Morning at the bench** (#3), **Afternoon on the rig** (#4), **End of the day** (#5). Columns: parent `sp-stagger` + `sp-reveal--up`. Strip has no reveal. | 3 × 50 + strip labels |
| 5 | **03 The two years** `#years` | Year 1 vs Year 2 | T2 head. Two white cards side by side (each 588, gap 24, r16, padding 24): photo 3:2 r12 (#6 bench year, #7 placement year), H3 "Year 1 — the bench year" / "Year 2 — the placement year", 70 words, then a **month line**: horizontal 2 px `#CDCED5` line with 3 copper 10 px dots and labels (Y1: Sep start · Feb mid-year review · Jul bench assessment; Y2: Sep placement starts · each term a site visit · Jun final assessment). Cards `sp-reveal--up` in `sp-stagger`. | 2 × 90 words |
| 6 | **The hall at dusk** (parallax band) | breathing space; echoes the hero window | **Framed band**: inset 24 px, r40 (same window language), height 520 (mobile 380), `sp-parallax` `--sp-par: 10%` (mobile 6 %), photo #8 as `.sp-parallax__layer`; foreground (sibling, in flow, grid align-end, margin 48) a white plate r8 460 wide, padding 32 36: quote "Nobody is good at soldering in week one. By June you will not remember why it was hard." Instrument Sans 600 1.75rem + "Hana Petrović, instructor" 14 px `#56606B`. | ~30 words |
| 7 | **04 Where graduates are placed** `#placements` | proof without promises | T2 head + sub-line. Grid 5/7: left photo #9 at 4:5 r16; right a **ledger** of the 4 partner types (§0): number Instrument Sans 600 2.5rem `#3C4F62` with `sp-count` + label 18 px 700 + one line; rows with 1 px `#CDCED5` rules; total line "18 partner firms within 40 km of Wrenfield"; paragraph (60 words) on how Grace matches apprentices to firms; the no-promise line (§0) in 14 px; two outline pills side by side: "Placements for apprentices →" `/placements/` · "Take an apprentice →" `/placements/#employers`. | ~120 words |
| 8 | **05 Instructors** `#instructors` | who teaches | T2 head (no reveal). Two large rows (Rosa, Emeka): portrait 4:5 r16 300 wide (#10, #11) + text (name Instrument Sans 700 1.75rem, role 14 px 700 `#3C4F62` uppercase ls .08em, 70 words, "Teaches: …" line). Then a single line of three text-only names with roles and hall (Hana, Luis, Grace) separated by 1 px rules. **Not a 4-person grid.** Link "Meet the instructors →". | ~180 words |
| 9 | **06 Three apprentices** `#stories` | stories | T2 head. 3 **photo tiles** (T3 photo variant) 384 × 288, r16, gap 24: photos #12, #13, #14 cover; white plate r8 inset 18 at the bottom (full width minus 36): name 18 px 700, "was a café manager · placed with a heating firm" 14 px, 40-word account. Parent `sp-stagger`, tiles `sp-reveal--zoom`. Link "Read the stories →". | 3 × 50 words |
| 10 | **07 Fees** `#fees` | the 7 items | T2 head (no reveal), full-width table (§8), note line, then one outline pill "Fees and instalments →" `/fees/`. No reveal on the table. | table + note |
| 11 | **08 Come to a taster Saturday** `#taster` | reference open-campus band | full-width band `#E4E9EE`, padding 120 0, `overflow: clip`; background: two patches of white diagonal hatching (`repeating-linear-gradient(135deg, #FFFFFF 0 2px, transparent 2px 14px)`, 360 × 520, at left 0 / right 0, 45 % opacity) + three 1 px white circles (radius 70 / 110 / 50) via radial-gradients. Centre: T2 head (numeral "08") + two ticks (copper 20 px square r3 with white SVG tick) "No booking needed for the morning" · "Boots and glasses provided"; hairline title row "Next dates" (1 px `#CDCED5` both sides, RT(f)); **date tile** 208 × 152 r4 `#3C4F62`: "1st Saturday" Instrument Sans 700 1.75rem white, "every month" 15 px, tags "#BenchHallA #BoilerRig" 12 px; solid pill `#1B2733` 404 × 60 "See taster Saturdays →" `/open-days/`. Left and right edges: photos #16 (1:1, 240 wide) and #17 (3:2, 320 wide), r16, partly beyond the 1200 container (not beyond the viewport), each `sp-reveal sp-reveal--zoom` (the reference's photos travelling in). | ~50 words |
| 12 | **Footer** | address, hours, letter | deep `#1B2733`, white; 4 columns: wordmark + tagline + address + phone + email; hours (§0); links (About, Apprentice stories, College letter, Privacy, Contact); **College letter** subscribe: newsletter slot (§9, dark tokens). Bottom line 13 px "© Kikan College". | — |

Home photo positions (no repeats): hero #1 · tiles 3 / 6 = #15 / #18 · #who #2 · #day #3, #4, #5 · #years #6, #7 · band #8 · #placements #9 · #instructors #10, #11 · #stories #12, #13, #14 · taster band left / right = #16 / #17 = **18 unique photos** (≥ 8 ✓). English words on home ≥ 900 (≥ 250 hard); #who has 3 paragraphs ≥ 60 words.

### Comparison with the most recent themes (home block order)
| Theme | Home order |
|---|---|
| Teate Clinic | split hero (card + 2 outline boxes) + 5-cell sheet → notices \| hours → three complaints → why (two text columns + 3:1 photo) → minute ledger → parallax room band → two clinicians → dotted story rows → prices → 8 tiles |
| Noki Surveyors | diagonal two-photo hero + 3 cards → notice strip → scattered photo field → why → sentence builder → report ledger → findings strip → parallax band → prices → cases → people → FAQ → request band |
| Shikii Mats | hero + anchor bar → site cards → why (7/5) → four-week round → doorway band → trial month rows → price table → stories → FAQ → book |
| Yuka Tiles | wordmark hero triptych → flush range ledger → window narrative → loan rows → showroom parallax band → spec table → prices → project mosaic → visit → letter |
| **Kikan College** | announcement strip → r40 framed window (panel + photo + copper slash) + stats row → 3 × 2 plate tiles → who it is for → **proportional day strip** + 3 day photos → two years (two cards with month lines) → framed parallax hall band → placements ledger with counts → instructors (2 rows + 1 line) → 3 photo-plate story tiles → fees → hatched taster band with date tile → deep footer with letter |

Why it does not repeat them: none uses a **rounded inset window with solid end panels and vertical labels** (Teate's split is a card column, Yuka's a triptych, Noki's a diagonal two-photo hero); the hero foot is a **stats row** (Teate: link sheet; Noki: cards; Shikii: anchor bar); the entrance block is **tinted tiles with inset white plates directly under the hero** (Teate's tiles are flat celadon at the end); the core is a **horizontal proportional day strip** (Teate's is a vertical minutes ledger, Shikii's a four-week round); all section heads are **centred numeral + H2 + copper pill** (the four use left heads); the page ends with a **hatched open-day band with a date tile**, not FAQ, request band, letter or tile grid. No FAQ, no anchor bar, no mosaic, no sticky media, no 4-person grid.

---

## 4. Inner pages (12 pages + 2 posts; every page has the strip, header, deep footer and its own photos)

| Page (slug) | Head (T1, photo) | Key content |
|---|---|---|
| About (`/about/`) | label "ABOUT · 2009", photo #17 | founding story (Rosa and Emeka rented the old foundry workshop in 2009 with six benches), why adults, "What we are not" (§0) as ruled list, the two halls (photo #8 3:1 r16), **a college day** routine ledger (§0 hours), Next steps T3 row. |
| The course (`/course/`) | "THE COURSE · TWO YEARS", photo #6 | Year 1 and Year 2 in detail (photos #3, #7), **T3 3 × 2 "Inside the two years"** (Pipework · Soldering and bending · Drainage · Boiler rig · Heat pumps and controls · Theory day), assessment and logbook (no real qualification names), month lines, Next steps row. |
| A training day (`/training-day/`) | "A TRAINING DAY · 07:45", photo #1 | the **day strip** full size + Friday strip; each block explained (07:45 … 15:30) as horizontal rows: time 18 px 700 + mini bar (width ∝ minutes) + 60 words; photos #4, #5; what to bring; Next steps row. |
| Placements (`/placements/`) | "YEAR 2 · PLACEMENTS", photo #18 | how matching works (Grace), the 4 partner types as **T3 2 × 2 tiles** with counts (`sp-count`), the site visits, training wage note, `#employers` section (what a firm commits to: 4 days a week, one named engineer, three visits), photo #9, #12; Next steps row. |
| Instructors (`/instructors/`) | "INSTRUCTORS · FIVE", photo #8 | Rosa, Emeka long profiles (portraits #10, #11), Hana, Luis, Grace profiles (text + hall / day), who teaches which day as a ruled ledger. |
| Apprentice stories (`/stories/`) | "STORIES · THREE", photo #4 | the 3 stories long (photos #12, #13, #14, 200 words each), plate tiles; note "These are three people's experiences, not promises."; Next steps row. |
| Fees (`/fees/`) | "FEES · EUR", photo #16 | full fee table (§0), instalments, deposit, what the tool kit holds, training wage note, refunds (deposit returned if we cancel; course fee pro rata if you leave before November); Next steps row. |
| How to apply (`/apply/`) | "APPLY · BY 30 APRIL", photo #2 | the 4-line flow 01–04, who can apply, fee summary rows 1–4, **application form slot** (§9), office hours. |
| Open days (`/open-days/`) | "TASTER SATURDAY · MONTHLY", photo #15 | taster Saturday timetable (09:00 welcome · 09:30 bench · 12:00 lunch · 13:00 boiler rig · 14:30 questions · 15:00 close) as a short day strip, Tuesday 16:00 visits, the hatched band + date tile, **booking form slot** (§9). |
| Contact (`/contact/`) | "CONTACT · WRENFIELD", photo #17 | ruled ledger: address, office hours, phone, email; getting here (bus 14 from Wrenfield station, 8 minutes; bike racks; parking in the yard); access (step-free, both halls ground floor); **contact form slot** (§9). |
| News (`/news/`, posts page) | T2 head only | role `posts`, content empty; archive with 3:2 r16 thumbnails, centred numeral heads. |
| College letter (`/newsletter/`) | "COLLEGE LETTER · MONTHLY", photo #5 | what the monthly letter holds (taster dates, one bench tip, one placement note), **newsletter slot** (§9). |
| Privacy (`/privacy/`) | T2 head only | plain-language privacy text (no reveal). |
| Posts (2) | single template, featured 3:2 r16 | "What a pressure test teaches you in the first month" (Emeka; category Bench notes; tags pressure-testing, year-one; featured #13) · "Changing trade at 34: notes from a placement year" (Grace; category Placements; tags career-change, year-two; featured #12). |

Signature continuation: **T1** on 11 inner pages; **T2** on every inner page; **T3** on About, The course, A training day, Placements, Stories, Fees (6). theme-meta `pages`: home, about, news (→ `/news/`), article (→ post 1), category (→ Bench notes), tag (→ year-one), newsletter (→ `/newsletter/`), contact (→ `/contact/`). Templates: page, single, archive, category, `tag.html` (from archive, label TAG), page-newsletter / page-contact may use page.

---

## 5. Colour, type, components

### Colour (NEEC RT(a) roles)
| Token | Hex | Role | Share | Source |
|---|---|---|---|---|
| `ground` | `#F4F6F8` | page ground, header | ~50 % | RT(a) ground `#FCF9F0` → **change:** cool pale grey; reason: no cream / beige rule, navy palette |
| `base` | `#FFFFFF` | cards, plates, stats row | ~15 % | RT white plates (exact) |
| `tint` | `#E4E9EE` | announcement strip, taster band, day-strip breaks | ~8 % | RT(a) `#E5ECF5` (−1 % L, hue toward grey) |
| `primary` | `#3C4F62` | header CTA, stats numerals, chips, day bench segments, date tile, links | ≤ 2 % first screen, ~4 % page | **change:** RT(a) brand red `#D22502` / blue `#0071C1` → row palette katsu-iro; role (brand colour on CTAs, date tile, links) kept 1:1 |
| `panel` | `#34404C` | hero / inner-head panels and end strips, rig segment | ~25 % first screen (not counted, S 0.32) | RT(a) orange end panels `#F0A000` → katsu-iro −4 % L, slightly greyed so HSV S < 0.35 (first-screen cap) |
| `accent` | `#B8683A` | slash band, pill rules, Apply CTA, ticks, bar under H1 | < 3 % | RT(a) red slash `#E8001A` + yellow accent `#FFE401` → one copper accent (the trade's metal) |
| `ink` | `#1B2733` | text, solid pills, footer | — | RT(a) ink `#060E31` (+5 % L, same navy hue family) |
| `muted` | `#56606B` | secondary text | — | 6.0:1 on `#F4F6F8` |
| `line` | `#CDCED5` | hairlines, ledger rules, stats dividers | small | RT(d) hairline `#CDCED5` (exact) |
| `tile-steel` / `tile-sage` / `tile-copper` | `#C5D0DB` / `#C9D4D0` / `#E3D3C7` | T3 tiles, logbook segment | ~4 % page | RT(a) red / green / aqua tile families → three quiet tints (row: quiet palette) |
| `eyebrow-on-panel` | `#E3C2A8` | eyebrow text on the panel | tiny | accent +35 % L (contrast 7.4:1 on `#34404C`) |
Ratio ≈ 50 ground / 15 white / 25 panel (first screen) / 8 tint / ≤ 4 katsu / < 3 copper / rest photographs. First-screen saturated share target ≤ 10 %, hard max 15 %.

### Type (font_direction **sans**)
- Latin display / headings: **Instrument Sans** (OFL; woff2 500, 600, 700). Latin body / UI: **Source Sans 3** (OFL; woff2 400, 600, 700). Both bold, plain grotesques like the reference's LINE Seed JP (RT(b)). Files in `assets/fonts`, every file listed in theme-meta `fonts[].files` with licence file; family names in readme.txt.
- Stacks: heading `"Instrument Sans", "Source Sans 3", system-ui, sans-serif`; body `"Source Sans 3", system-ui, sans-serif`.
- zh-TW heading `:root:lang(zh*)`: `"Instrument Sans", "Noto Sans TC", sans-serif` (bundled Noto Sans TC subset, 500 / 700, gothic); ja heading `"Instrument Sans", "Noto Sans JP", sans-serif` (bundled subset 500 / 700). CJK body (repo gate: no bundled CJK family and no Japanese font in the zh body): zh `"Source Sans 3", "PingFang TC", "Microsoft JhengHei", "Noto Sans CJK TC", sans-serif`; ja `"Source Sans 3", "Hiragino Sans", "Yu Gothic", "Noto Sans CJK JP", sans-serif`. **No Mincho / serif anywhere.**
- All faces via theme.json `fontFamilies` + `fontFace` (including zh-TW / ja subsets) so editor iframe and front end match; because style.css uses `:lang()`, copy `shared/inc/editor-lang.php` → `inc/editor-lang.php` and `require_once` it. Subset with the Hokuto / Hada workaround.
- Scale (theme.json fontSizes; source): `xs` 0.8125rem (13: ticks, times, utility) · `s` 0.875rem (14: labels, RT(b) header 14–15) · `m` 1rem (16 body, lh 1.8, RT(b) 16 / 1.8) · `l` 1.125rem (18: numerals, RT(b) 16–20) · `xl` 1.375rem (22: sub-lines, plate labels, RT(b) H3 sub-block 20) · `2xl` 1.75rem (28: H3, quote, RT(b) H3 28 / 700 / 1.4) · `3xl` 2.25rem (36: H2, RT(b) H2 36 / 700 / 1.4) · `4xl` 3rem (48: inner H1, stats numbers) · `display` **4.25rem** (68: home H1; ≥ 4.25rem ✓; RT(b) hero headline ~56 bold, enlarged for the gate).
- Weights: display 700, H2 700, H3 700, labels 600–700, body 400. Letter-spacing: display −0.015em, uppercase labels .08–.16em, vertical labels .16–.2em, CJK headings .04em, body 0. Line heights: display 1.05, H2 / H3 1.4, body 1.8 (CJK 1.85).
- CJK: display × 0.75 (H1 3.1875rem), never uppercase-transform CJK; vertical labels stay Latin in every language (they are course codes) and are hidden < 1100 px. fr / de `hyphens: auto`.

### Components (exact values)
- **Pill buttons:** §1 supporting (60 px, r999, 2 px ink outline or ink fill); hover: outline fills `#1B2733` with white text, solid lightens to `#3C4F62`, 0.3 s ease; focus 2 px `#B8683A` outline offset 3.
- **Head:** T2. **Tiles / plates:** T3. **Window:** T1.
- **Photos:** r16 in content (RT(d) tiles 12–16), r40 only for windows / framed band, r12 inside cards; no masks, no duotone, no cut-outs.
- Containers: `wideSize` 1200 px (RT(c) map 1200), `contentSize` 960 px (RT(c) cards 960), prose 680 px. Section padding **112 px** top / bottom (RT(c) 100–128), 64 on mobile; head → content 56 (RT(c) 48–64). Gutter 24 (RT(c)).

---

## 6. Photos (18, Grok, one at a time; Read every one; webp ≤ 300 KB, ≤ 2000 px)

**Imagery row: photo** (stage-a IMAGERY = photo → real-photo STYLE, default). Low-key per the row's photo_direction (overrides the common "high-key" default). **STYLE** (identical for every image):
`Real documentary photograph, low-key available light: a single warm-white task lamp or late dusk window as the only light, dark steel-grey surroundings falling into shadow, one clearly lit subject, cool steel-blue and graphite colour grade with a small warm copper highlight, muted desaturated palette of navy, graphite, steel grey and copper, adult apprentices and instructors of diverse ethnicities and ages in plain navy overalls or grey work jackets, safety glasses where cutting or soldering, realistic hands and tools, calm focused unposed moments, people not looking at the camera, modern international neutral workshop or homes, 35mm lens look with gentle depth of field, fine natural grain; no text, no letters, no numbers, no logos, no brand names, no signage, no readable papers or screens, no bright saturated colours, no Japanese elements`

Rules: hands and tools must be anatomically and mechanically plausible (regenerate on extra fingers, melted pipes, impossible fittings); no flames larger than a small blue torch tip; overalls plain, no badges; #1 must stay dark-surround and low-saturation (first-screen check). 0 cut-outs.

| # | File | Subject | Composition / ratio | Used on (page → block) | Home |
|---|---|---|---|---|---|
| 1 | `hero-joint.webp` | apprentice (woman, 30s, hair tied back, navy overalls, safety glasses pushed up) leaning in to check a freshly soldered copper elbow joint on a wall-mounted practice rig of copper pipes, task lamp above-left, dark hall behind | 3:2 landscape, subject and joint at 55–70 % x, 45 % y; left 25 % dark and empty (under the panel) | Home hero window; A training day head | ✓ |
| 2 | `who-learner.webp` | man (40s, career changer, grey work jacket) measuring a length of copper pipe with a tape at a bench, lamp light | 4:5 portrait | Home #who; Apply head | ✓ |
| 3 | `day-morning.webp` | row of three benches, apprentices cutting and deburring pipe, early light from high windows, mostly dark | 4:3 | Home #day morning; Course body | ✓ |
| 4 | `day-rig.webp` | two apprentices pressure-testing the boiler rig, one reading an analogue gauge (dial unreadable), instructor behind | 4:3 | Home #day afternoon; Stories head; Training day body | ✓ |
| 5 | `day-logbook.webp` | apprentice at a bench end writing in a logbook (pages unreadable), tools put away, lamp | 4:3 | Home #day end; College letter head; Training day body | ✓ |
| 6 | `year-bench.webp` | close-up: two hands bending 15 mm copper pipe in a hand bender on a bench | 3:2 | Home #years Y1; Course head | ✓ |
| 7 | `year-placement.webp` | apprentice with a placement engineer kneeling at an open airing cupboard in an occupied home, evening lamp light | 3:2 | Home #years Y2; Course body | ✓ |
| 8 | `band-hall.webp` | empty bench hall at blue dusk: rows of practice rigs, task lamps still lit, tall factory windows | 21:9 (generate 16:9 2000 px, crop); calm left 45 % for the plate | Home parallax band; Instructors head; About body | ✓ |
| 9 | `placed-heatpump.webp` | graduate (man, 30s) checking pipe insulation at an outdoor heat pump unit beside a house wall at dusk, headlamp | 4:5 | Home #placements; Placements body | ✓ |
| 10 | `staff-rosa.webp` | Rosa (woman, 50s, grey cropped hair, work jacket) standing at the end of Bench Hall A, arms folded, looking along the benches | 4:5 portrait | Home #instructors; Instructors profile | ✓ |
| 11 | `staff-emeka.webp` | Emeka (man, 40s, beard) at the boiler rig, one hand on a valve, explaining to someone off-camera | 4:5 portrait | Home #instructors; Instructors profile | ✓ |
| 12 | `story-aiyana.webp` | Aiyana (woman, 30s) servicing a wall boiler in a small plant room, cover off, torch light | 4:3 | Home #stories 1; Stories; Placements body; post 2 featured | ✓ |
| 13 | `story-farid.webp` | Farid (man, late 20s) fitting a radiator valve in a stairwell of an apartment block, low light | 4:3 | Home #stories 2; Stories; post 1 featured | ✓ |
| 14 | `story-ingrid.webp` | Ingrid (woman, 40s) soldering a joint at a bench, glasses on, small blue torch tip | 4:3 | Home #stories 3; Stories | ✓ |
| 15 | `open-taster.webp` | taster Saturday: five visitors of mixed ages around a bench watching an instructor demonstrate a pipe cut | 3:2 | Home tile 3; Open days head | ✓ |
| 16 | `open-tools.webp` | still life: starter tool kit laid out on a dark bench under a lamp (pipe cutter, bender, grips, torch, case), no markings | 1:1 | Home taster band left; Fees head | ✓ |
| 17 | `contact-yard.webp` | brick workshop building at dusk, roller door half open, warm light inside, bicycles at a rack, no signage | 3:2 | Home taster band right; About head; Contact head | ✓ |
| 18 | `placement-partner.webp` | Grace (woman, 40s) and a placement engineer (man, 50s) reviewing a paper drawing (unreadable) on the tailgate of a plain van at dusk | 3:2 | Home tile 6; Placements head | ✓ |

**18 on the home page, 18 in total** (12–18 ✓; ≥ 8 home ✓). Home allocation as fixed in §3 (tile 3 = #15, tile 6 = #18, band left = #16, band right = #17). Per page no repeats (Placements: #18 head + #9 + #12; Training day: #1 + #4 + #5; Course: #6 + #3 + #7; About: #17 + #8; Instructors: #8 + #10 + #11; Stories: #4 + #12 + #13 + #14; Contact and About share #17 across pages only).

---

## 7. Motion and scroll effects (sp-scroll copied unchanged; effects from stage-a candidates)

| Effect (class) | Where | Source / trigger / time / easing |
|---|---|---|
| **`sp-parallax` (required)** | (a) **Home hero** `figure.kc-hero__photo.sp-parallax` with direct `<img>` #1, `--sp-par: 6%` desktop, `4%` mobile; foreground panel / H1 is a sibling column, never inside the moving layer. (b) Home block 6 framed hall band, layer photo #8, `--sp-par: 10%` (mobile 6 %), plate is a sibling. (c) Inner T1 heads `--sp-par: 6%` (mobile 4 %). | NEEC hero video loop inside the rounded window (RT(g)) → slow drift of the window photo; CSS scroll-driven `animation-timeline: view()`, IO + translate3d fallback; linear, continuous. |
| **`sp-reveal sp-reveal--wipe`** on `.kc-head` | every T2 head on home blocks 3, 4, 5, 7, 9, 11 and inner pages (not on Fees, Instructors heads on home, not on Privacy) | NEEC title characters rise from `translateY(100%)` inside a mask + pill grows (`width .4s .8s`) (RT(g)) → children (numeral, H2, rule) wipe top → bottom, 1.1 s `cubic-bezier(.77,0,.175,1)`. |
| **`sp-reveal sp-reveal--zoom`** in `sp-stagger` | home tiles block 2, story tiles block 9, taster band photos block 11; inner T3 rows | NEEC open-campus photos travel in from offsets (margin + opacity 1 s, staggered) → scale 1.06 → 1 fade, 1.6 s, stagger 0.12 s (sp-scroll default; do not edit). |
| `sp-reveal sp-reveal--up` | #who prose, #day columns, #years cards; inner prose blocks | NEEC section container `opacity 1s` fade-in; theme sets `--sp-dur: 1s; --sp-dist: 24px` on these sections (RT(g) 1 s). |
| `sp-count` (no `sp-reveal`) | hero stats numbers; #placements partner counts; Placements page tiles | stage-a stats count-up; IO trigger, 1.2 s easeOutCubic (built-in). |

- **Hero:** no `sp-reveal` (stats use `sp-count` only, which has no hidden state); only parallax and count.
- Sections carrying any `sp-reveal` on home: blocks 2, 3, 4, 5, 7, 9, 11 = **7 of 13 (54 %)**, ≤ 60 %. No reveal on strip, header, hero, band plate, instructors, fees table, footer, forms, legal text. No own scroll listeners; no GSAP / AOS / Lenis / jQuery.
- Verify with `check-parallax.mjs`: hero photo and band layer move ≥ 6 px on desktop and mobile, 0 under reduced motion; ≥ 3 reveals hidden before entry and final after; nothing transparent at the bottom with `?sp-motion`.

---

## 8. Responsive rules (hard)
- **390 px first screen:** as §3 Mobile; **no vertical text, no absolutely positioned labels over text**, the window stacks (photo, then panel), stats row 2 × 2 in normal flow; right-edge tabs and end strip hidden.
- No horizontal overflow at 390 / 800 / 1280; window, band and parallax wrappers `overflow: clip`; taster-band edge photos stay inside the band (`overflow: clip` on the band).
- **Fee table:** at ≥ 782 px it is **full container width** (1200 on home, Fees, Apply), `width: 100%`, `table-layout: auto`; columns: # 48 px · item 22 % · what it covers auto · when 150 px `white-space: nowrap` · **price `white-space: nowrap; text-align: right`, min-width 120 px**, never clipped (check at 800 and 1280); header row Source Sans 3 700 14 px `#3C4F62` with 2 px `#1B2733` rule; rows 1 px `#CDCED5`; table on white r16 with padding 8 24.
- **Every table < 782 px stacks:** each row becomes a block (item bold, what it covers, then when and price on one line, price right-aligned); `thead` visually hidden; no horizontal scroll. Ledgers: value drops under the label < 600 px.
- **Day strip < 782 px:** becomes a list of rows (time 15 px 700 + label + a mini horizontal bar whose width ∝ minutes, max 100 %), no horizontal scroll; the tick line hides.
- T3 3 × 2 → 2 columns < 1024, 1 column < 600 (tiles keep height 171, plate inset 18). #who 5/7, #placements 5/7, #years cards: 1 column < 900. Instructors rows: portrait above text < 700. Inner T1 heads: stacked like the home window < 900 px. Header CTA blocks and utility row hide < 1100; right tabs < 1280.
- Five languages: fr / de H1 may wrap to 4 lines (`max-width: 10ch`, floor 3rem); buttons use `min-height`, never fixed height; plates grow in height on long labels (tile `min-height: 171px`, not fixed).

---

## 9. Forms (form contract v1 — `steps/form-contract-v1` exists)
- Copy `pipeline/assets/forms/shippress-forms.php` → `inc/`, its CSS + editor JS → `assets/`, `require` from functions.php; dynamic `shippress_form_slot` blocks only; no fake form, no theme mail / subscribe backend, no hard plugin dependency, no plugin decision at import. **No form in the home first screen**; the only home form is the footer letter slot. Forms never get `sp-reveal`.
- **How to apply** (`/apply/`, enquiry page): slot `kind => contact` after the fee summary; `$fallback` = `ob_start()` buffered literal mailto button "Email your application" → `mailto:hello@kikan-college.example?subject=<apply_mail_subject>` + note "Tell us your name, what you do now and which September you want to start. We reply within five working days with a date for a bench morning."
- **Open days** (`/open-days/`, booking page): slot `kind => contact` below the timetable; fallback mailto "Email to book a taster Saturday", subject `taster_mail_subject`, note "Tell us which Saturday and whether you bring a guest. Boots and glasses are provided."
- **Contact** (`/contact/`): slot `kind => contact`; fallback mailto "Email the college", subject `contact_mail_subject`. Never a link back to `/contact/`.
- **College letter** (`/newsletter/`, standalone page, not an alias of News) **and the footer subscribe area**: `shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'hello@kikan-college.example', 'label' => forms_email, 'submit' => forms_subscribe, 'notice' => forms_mail_notice, 'subject' => forms_mail_subject ) )`. Without plugins: required email field + submit as a native mailto POST with the entered address; the notice says it opens the email app and the subscription is not complete until we reply. Plugin order: MailPoet (explicit id) → Mailchimp for WP → CF7 / WPForms only with an explicit dedicated newsletter form id (never the contact form).
- **Fields (documented in readme / brand.md; the theme does not create plugin forms):**
  - Application (CF7 / WPForms recommended): name*, email*, phone*, "I am 18 or over"* (checkbox), what you do now* (text), why the trade (textarea), intake* (September 2027 / September 2028), been to a taster Saturday? (yes / not yet), consent* ("Kikan College may contact me about this application."); submit "Send application".
  - Taster Saturday booking: name*, email*, phone, date* (next first Saturday / the one after / later), guest (none / one), access needs (textarea), consent*; submit "Book my Saturday".
  - Contact: name*, email*, I am (prospective apprentice / employer / family member / other), message*, consent*; submit "Send message".
  - College letter: email* (+ consent line in MailPoet / MC4WP forms); submit "Get the college letter".
- **States:** focus = 2 px outline `--sp-form-focus` offset 2 px on input, textarea, select, checkbox / radio and submit; error = message text under the field + 1 px border `#A3372A` (never colour alone; text "Please fill in this field."); success = block with 1 px `#3C4F62` border, `#E4E9EE` ground, "Thank you. The office replies within five working days." (plugins only; the mailto fallback never claims success).
- **Tokens, light** (Apply, Open days, Contact, Letter page put the form on `#FFFFFF` inside a `#E4E9EE` panel r16 padding 32): `--sp-form-accent: var(--wp--preset--color--primary)` `#3C4F62`; `--sp-form-on-accent: #FFFFFF`; `--sp-form-radius: 8px`; `--sp-form-focus: #B8683A`; `--sp-form-surface: #FFFFFF`; `--sp-form-text: #1B2733`; field border 1 px `#8C96A1`; labels Source Sans 3 600 14 px ink; submit = pill r999 height 52. **Dark** (footer on `#1B2733`): labels `#FFFFFF`, surface `#FFFFFF`, field text `#1B2733`, accent `#E3C2A8`, on-accent `#1B2733`, focus `#E3C2A8`, error `#F2B8AE`, success `#D3DCE5`, notice text white 80 %. Scoped to CF7, WPForms, MailPoet, MC4WP (and Jetpack) classes and `.sp-newsletter-fallback` only; no global input / form selectors.
- **i18n (five languages):** semantic keys first in `inc/i18n/en.php`: `forms_email` "Email address", `forms_subscribe` "Get the college letter", `forms_mail_notice` "This opens your email app with your address filled in. Send it to ask for the college letter; you are not on the list until we reply.", `forms_mail_subject` "College letter: Kikan College", `apply_email_button` "Email your application", `apply_mail_subject` "Application: September intake", `apply_fallback_note`, `taster_email_button` "Email to book a taster Saturday", `taster_mail_subject` "Taster Saturday booking", `taster_fallback_note`, `contact_email_button` "Email the college", `contact_mail_subject` "Message for Kikan College"; extract with `L10N_SEMANTIC=1`; localise in en, zh-TW, ja, fr, de including dynamic block attributes; run `form-runtime-check.php` per locale and `repo-gates.sh forms`.

---

## 10. Similarity to the reference (target 80 %)
All values from `reference-tokens.md`; photographs and copy are ours; no NEEC assets, text or logo.

| Dimension | NEEC value (token) | Kikan value |
|---|---|---|
| Hero window | 1392 × 547, inset 24, r40, ratio 2.54 (RT(c)(d)) | 1392 × 547, inset 24, r40 |
| End panels | two solid orange ~205 px panels, vertical bold tracked text 28–32 px (RT(a)(b)(e)) | left panel 46 % + right strip 72 px, solid `#34404C`, vertical Instrument Sans 600 22 / 18 px tracked |
| Slash | ~8 px red diagonal band lower-left → upper-right (RT(e)) | 8 px copper band, 12°, lower-left → upper-right |
| Hero photo | low-key dusk documentary, lit worker (RT(e)) | low-key task-lamp documentary, lit apprentice |
| Headline | ~56 px bold + blue underline bar (RT(b)) | 68 px Instrument Sans 700 + copper bar 96 × 6 (beside photo, per plan) |
| Announcement strip | 40 px pink strip, 14 px / 700 red (RT(b)) | 40 px `#E4E9EE`, 14 px / 700 ink + copper disc |
| Header | 2-row: utility links above main nav, two 64 × 64 r8 CTAs, dark square menu (RT(c)) | 2-row: utility line above nav, two 64 × 64 r8 CTAs, dark 48 px square toggle (mobile) |
| Entrance tiles | 3 × 2, 304 × 171, gap 24, 960 block, r12–16, white plate r8 (RT(c)(d)) | 3 × 2, 304 × 171, gap 24, 960 block, r16, white plate r8 inset 18 |
| Section head | "01" 16–20 / 400 over centred H2 36 / 700 / 1.4, pill 2.22 × 0.17 em (RT(b)(f)) | "01" 18 / 400 over centred H2 36 / 700 / 1.4, pill 80 × 6 (2.22 × 0.17 em) copper |
| Open-day band | `#E5ECF5`, white diagonal hatching, faint circles, 208 × 152 r4 blue date tile, ticks, solid navy pill (RT(f)) | `#E4E9EE`, white hatching 135°, 3 circles, 208 × 152 r4 `#3C4F62` date tile, copper ticks, `#1B2733` pill 404 × 60 |
| Buttons | pill 999, 2 px navy outline white fill / solid navy (RT(d)) | pill 999, 2 px `#1B2733` outline / solid `#1B2733`, 60 px |
| Colour roles | ink `#060E31` / ground `#FCF9F0` / tint `#E5ECF5` / brand red + blue / yellow accent / hairline `#CDCED5` (RT(a)(d)) | ink `#1B2733` / ground `#F4F6F8` / tint `#E4E9EE` / katsu `#3C4F62` + panel `#34404C` / copper `#B8683A` / `#CDCED5` |
| Type | bold sans only; body 16 / 1.8; H2 36 / 700; H3 28 / 700 / 1.4; labels 14–15 / 700 (RT(b)) | Instrument Sans + Source Sans 3; body 16 / 1.8; H2 36 / 700 / 1.4; H3 28 / 700 / 1.4; labels 14–15 / 700 |
| Spacing | containers 960 / 1200, section 100–128, head → content 48–64, gutter 24 (RT(c)) | contentSize 960, wideSize 1200, section 112, head → content 56, gutter 24 |
| Radius / shadow | 40 window, 12–16 tiles, 8 plates, 4 date tile, pill 999; almost no shadow (RT(d)) | 40 / 16 / 8 / 4 / 999; no shadows |
| Fixed tabs | two 64 px vertical CTA tabs right edge (RT(f)) | two 64 px vertical CTA tabs right edge (≥ 1280 px) |
| Motion | video loop in window; title mask rise + pill `width .4s .8s`; container fade 1 s; photos travel in 1 s staggered; IO only, no GSAP (RT(g)) | window photo parallax 6 %; head wipe 1.1 s; `--sp-dur: 1s` up reveals; zoom reveals staggered 0.12 s; sp-scroll only |
| Imagery | documentary photos + secondary isometric illustration (RT(e)) | documentary photos only (illustration not copied) |

---

## 11. Home acceptance checklist
1. First screen at 1440 × 900: announcement strip; split header (utility line + exactly one top menu + two 64 × 64 CTA blocks); **r40 window inset 24 px**, 1392 × 547: `#34404C` panel 46 % left with vertical "SEPTEMBER 2027 INTAKE", H1 "Warm homes start at the bench." 68 px Instrument Sans 700 white, copper bar, lede, button; **8 px copper slash** at 12° on the join; photo #1 right (no text on it); 72 px right end strip with vertical "PLUMBING AND HEATING"; stats row (2 / 4 + 1 / 24 / 18) under it. Fingerprint split-photo-right/beside-photo/stats-row; not full-bleed.
2. All 6 KV checklist rows visible above y 900.
3. Blocks in §3 order: 3 × 2 plate tiles → who (3 paragraphs + photo) → day strip (proportional, 7 segments, tick line, Friday strip) + 3 photos → two years cards with month lines → framed parallax hall band → placements ledger (7 / 5 / 4 / 2 = 18) → instructors (2 rows + 1 line) → 3 story photo-plate tiles → fees table → hatched taster band with date tile and two edge photos → deep footer with letter slot.
4. 18 unique photos on home and in the theme, 0 cut-outs, no readable text in any photo, hands and tools plausible, all low-key with one STYLE.
5. Fee table: 7 rows, full width at ≥ 782 px, price nowrap right-aligned, not clipped at 800 and 1280; stacked at 390; numbers identical to §0 on Fees, Apply and all five languages. Day times, stats and partner counts identical everywhere.
6. ≥ 900 English words on home (≥ 250 hard); #who has 3 paragraphs ≥ 60 words.
7. Parallax measurable on the hero photo and the hall band (≥ 6 px desktop and mobile, 0 under reduced motion); ≥ 3 reveals hidden before entry and final after; nothing transparent at the bottom with `?sp-motion`; hero has no `sp-reveal`.
8. First-screen saturated share ≤ 15 % (target ≤ 10 %); largest type 4.25rem; Instrument Sans / Source Sans 3 / Noto Sans TC / JP loaded via theme.json fontFace in editor and front end.
9. 390 px: no horizontal overflow, no overlapping text, no vertical labels, no absolute labels; stacked window; auto-gates pass.
10. No form in the first screen; footer letter slot shows email + submit without plugins; Apply, Open days, Contact (contact slots + mailto fallback) and College letter (newsletter slot) work without plugins (stage 2).
11. T1 head on ≥ 4 inner pages (planned 11), T2 on all, T3 on ≥ 4 (planned 6) (stage 2).
