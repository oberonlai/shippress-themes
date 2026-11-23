# Design spec — Otonoha Acoustics (otonoha-acoustics)

Row b38-5 · type **landing** (category business-services; App tag type `landing`) · archetype sticky-media · nav centered · page_structure landing-longform · font_direction **sans** · **Imagery: photo** (reference is photographic → real-photo STYLE, low-key documentary rooms; no illustration).
Reference: https://www.nagata.co.jp/ (only reference; tokens `brand/reference-tokens.md` = "RT", screenshots `brand/ref/nagata-first.png`, `nagata-projects.png`, `scroll-nagata-news.png`, `scroll-nagata-cta.png`, `scroll-nagata-foot.png`).
Similarity target: **80 %** to the reference in colour relationships, photo treatment, motion, decoration and layout. Photos, copy, names and logo are our own; no image, text or logo from the reference is reused.
Hero composition is fixed by the plan (diagonal-split / split-over-seam / timeline) and overrides the reference's band-over-strip hero; the reference's scene, story and motion are kept (see §2).

---

## 0. Fixed brand facts (identical on every page, in brand.md and in all five languages)

- **Otonoha Acoustics** — an independent architectural acoustic consultancy of **7 people** that measures offices, classrooms, lecture rooms and small halls **before finishes are specified**. Founded **2011** by **Mira Halvorsen**. Studio: **Studio 4, 18 Ferrow Lane, Calder Wharf** (fictional, international-neutral). "Otonoha" = "leaves of sound" (brand.md explains in English): each room is read leaf by leaf — reverberation, noise, insulation, speech.
- Phone **+00 31 555 0186** · email **survey@otonoha-acoustics.example** (the same address in every mailto, form fallback and footer).
- Studio hours: **Mon–Fri 08:30–17:30** (phone and email). Survey visits: **Mon–Sat**, starting **08:30**; evening sessions **18:00–22:00** for rooms that are in use during the day. Closed Sundays and public holidays.
- Travel: visits within **80 km** of Calder Wharf included; beyond that **€0.60 per km** (return).
- **Report delivered in 10 working days** after the visit (same figure everywhere).
- **Fees — 6 items, EUR, VAT excluded, per visit (same figures on Home #fees, Fees, Rooms, Book, Questions, Terms, the posts):**
  | # | Item | Price |
  |---|---|---|
  | 1 | Small-room survey — one room up to 300 m³ (classroom, meeting room) | €680 |
  | 2 | Room survey — one room 300–2,000 m³ (lecture room, open-office floor, rehearsal room) | €1,180 |
  | 3 | Hall survey — one room 2,000–8,000 m³ (auditorium or small hall up to 600 seats) | €2,400 |
  | 4 | Additional room, same building, same visit | €420 per room |
  | 5 | Sound insulation test between two rooms (one wall or floor) | €360 per partition |
  | 6 | Finish-schedule review meeting, 2 hours (on site or video) | €290 |
  Every survey includes: the visit, the written report (10 working days), one 30-minute call about the report.
- **Survey day (the hero timeline; same 5 ticks everywhere):** **08:30** Walk the room · **09:30** Reverberation & background noise · **12:00** Speech & insulation tests · **15:00** First findings with you, on site · **+10 working days** Report.
- **Booking flow (5 steps, Book page and Home #book):** 1 Send drawings and room hours → 2 Fixed fee and date confirmed within **2 working days** → 3 Survey visit (one day, the room empty) → 4 Report in 10 working days → 5 Optional finish-schedule review.
- **People (7):** Mira Halvorsen — founder, principal consultant (room acoustics, halls) · Tomas Achterberg — senior consultant (sound insulation, floors) · Leila Farouk — consultant (classrooms, speech intelligibility) · Priya Venkataraman — consultant (open-plan offices, speech privacy) · Daniel Osei — field engineer (measurement set-up, calibration) · Sofia Rinaldi — report editor (drawings, finish schedules) · Jun-ho Park — studio coordinator (bookings, travel).
- **Case notes (3 = the 3 posts; category "Case notes"; tags reverberation / speech / insulation / open-plan):**
  1. **"A 180-seat lecture room that echoed"** — tiered lecture room, 1,450 m³, measured RT 1.9 s (mid-frequency), target range 0.7–0.9 s for speech; report proposed rear-wall and ceiling absorption before the finish schedule was fixed. (Leila Farouk.) Photo P11.
  2. **"Ninety desks, one quiet corner"** — open-office floor, 1,100 m², 90 desks; background noise and speech privacy between team zones; report proposed ceiling rafts and two screens. (Priya Venkataraman.) Photo P12.
  3. **"A small hall for chamber music"** — 240-seat recital hall, 2,900 m³, measured RT 1.4 s, target 1.6–1.8 s for chamber music; report proposed removing absorptive panels on the side walls. (Mira Halvorsen.) Photo P13.
  No guaranteed outcomes, no awards, no real clients: the posts speak of "what the report proposed", never "we fixed".
- **Single CTA label (everywhere):** **"Book a room survey"** → `/book/`.

---

## 1. Signature techniques (borrowed from nagata.co.jp; obvious at a glance; do not dilute)

### T1. Band-straddling room cards (RT (e) hero strip, `ref/nagata-first.png` y 325–660)
- **Reference:** a pale band `#EBEFF1` ends exactly at mid-height of a row of **four square 335×335 r8 photo cards** (gap 20, edge-to-edge x 20–1420), so the band seam cuts every card in half. Each photo carries its category label top-left (white, 16px) and a venue caption bottom-left (white, 11px). The row drifts sideways, one card at a time.
- **Ours (Home #rooms, directly under the hero):** four square cards **335×335, radius 8px, gap 20px, x 20–1420 at 1440** (row width = viewport − 40). Pale band `#EBEDEF` behind the **top 50 %** of the cards: band from the section top to **card top + 168px**; below it white `#FFFFFF`. Cards: P02 **Auditorium**, P03 **Classroom**, P04 **Small hall**, P05 **Open office**. Label top-left inset 12px/14px: Hanken Grotesk 500 1rem white, text-shadow `0 1px 8px rgba(0,0,0,.45)`. Caption bottom-left inset 12px: Onest 400 .6875rem white, e.g. "Tiered, 420 seats · RT target 1.0–1.2 s" (room facts, not venue names). Dark gradient `linear-gradient(180deg, rgba(20,26,30,.35) 0, transparent 30%, transparent 70%, rgba(20,26,30,.45) 100%)` on each card (CSS on the figure, not on the moving element). Cards link to `/rooms/#auditorium` etc.
- **Motion:** the row drifts left continuously (sp-marquee, §7). The seam must cut the cards in the middle at every width ≥782.
- **Must not be diluted:** the band seam through mid-card, square 1:1, r8, four in view at 1440, labels inside the photo.
- **Mobile (≤781):** cards 72vw square, gap 12, band behind top half kept; row = scroll-snap horizontal (no reveal on children).

### T2. Pale label column + white sheet bleeding off the right edge (RT (c)(e) News, `ref/scroll-nagata-news.png`)
- **Reference:** the section ground is the pale band; a label column at left (Latin title 36px weight 300, a bold sub-label, one two-line description) sits on the pale; a **white sheet starts at x 521 (36 %)**, sits 80px below the band top and **runs off the right edge of the viewport**; inside, feed items with a centred photo (~215px tall), a small meta line, the title and a **Ø44 slate disc with a white arrow**, separated by **1px vertical dividers `#DDE2E5`**; the last item peeks past the edge.
- **Ours (Home #report, "What the report includes"):** section ground `#EBEDEF`, padding-top 80, padding-bottom 0. Label column **x 240–480**: "Report" Hanken 300 2.25rem `#3B4A5C`; sub-label "Four parts, ten working days" Onest 600 1.125rem; one 2-line description .9375rem/1.8. White sheet **x 520 → right viewport edge**, top 80px below section top, bottom flush with the section bottom (sheet meets the next white section, exactly as RT). Inside the sheet: horizontal scroll-snap row, items **470px wide** (padding 0 45px), 1px `#DDE2E5` vertical divider between items, 4 items so the 3rd item peeks at 1440. Item: photo **centred, height 215px** (P07 3:4 portrait 161×215, P08 4:3 landscape 287×215, P09 3:4, P10 4:3 — alternating like RT), then meta "Part 01" Onest .875rem `#5F6B75`, then title row: title Hanken 500 1.375rem/1.4 `#3F5A66` + **Ø44 disc `#3F5A66` with white 16px arrow** (our own SVG) right of the title. Items link to `/report/#part-1`…`#part-4`.
- **Must not be diluted:** the sheet starts at ~36 % and bleeds off the right edge; the pale stays visible left of and above it; Ø44 filled discs; vertical hairlines; the peeking item.
- **Mobile:** label column stacks above; sheet starts at x 20 and bleeds right; items 80vw.

### T3. Ghost caps in the page-head band + graphite CTA band with outline pill (RT (f), `ref/nagata-projects.png`, `ref/scroll-nagata-cta.png`)
- **Reference:** inner pages open with a pale band (x 0–1280, height ~170) holding the serif title; a **very pale caps word ("PROJECT", white) sits on the band's bottom-right and is clipped by the top edge of the white content sheet** that starts at x 200 below the band. Before the footer, a **solid slate band (~92px)** with one sentence left and a **white 1px outline pill (r999, 60px tall, 215 wide) with arrow** right.
- **Ours:** every inner page head = pale band `#EBEDEF` **x 0 → 1280 at 1440 (band stops 160px short of the right edge; right of it white)**, height 172 (y 80–252), h1 Hanken 500 2.5rem `#3B4A5C` at x 200, baseline y 210. Ghost word in **block markup** (`core/paragraph.oto-ghost`, aria-hidden="true", editable), Hanken Grotesk 300 **7.5rem**, caps, ls .02em, colour `#FFFFFF` at 85 % opacity, right-aligned to x 1280, its baseline 24px **below** the band bottom so the white sheet (z-index above it, starts x 200, y 252) clips the lower part. Words: ABOUT, ROOMS, REPORT, FEES, BOOK, NOTES, CALENDAR, QUESTIONS (en text in every language — decoration). ≤781: ghost word 3.5rem, not clipped, hidden below 480px.
  - Closing CTA band on **every page including home**: solid `#3F5A66`, height 112 (padding 26), sentence "Measure the room while the drawings can still change." Onest 600 1.125rem ls .08em white at x 236; pill right (x 988–1204): **1px #FFFFFF outline, r999, 60px tall, 216px wide**, label "Book a room survey" Onest 600 .9375rem white + 14px arrow; hover = white fill, `#3F5A66` text, 200ms ease.
- **Must not be diluted:** band stops short of the right edge; ghost word clipped by the sheet; the CTA band is solid primary (not pale, not gradient), pill is outline, same label every time.

### Supporting (required, not counted as T1–T3)
- **Corner tile header (RT (c)):** logo tile **200×80 `#3F5A66`** flush top-left with our wordmark "OTONOHA / ACOUSTICS" (two lines, Hanken 500 1.125rem caps, ls .28em, white, centred); nav centred in the space between (plan: nav centered); right a **220×80 tab `#3B4A5C`** "Book a room survey" (Onest 600 .875rem ls .06em white). Sticky (`position: sticky; top:0`, CSS only), white ground, 1px `#DDE2E5` bottom rule.
- **Vertical three-line heading beside a 1px rule (RT (f) overview):** Home #approach. zh-TW / ja: `writing-mode: vertical-rl`, three columns, Noto Sans 500 1.75rem ls .2em `#3B4A5C`. en / fr / de: the same three short lines horizontal, stacked, Hanken 500 1.75rem/1.35, in a 240px column (Latin is never set sideways). 1px `#DDE2E5` vertical rule 48px right of the heading column, full height of the text block.
- **Update rows (RT (c) "Latest Update"):** 1px `#DDE2E5` rows, date/label column 158px + text, row height 62 — used for Home #book steps, About people, Questions.

### Continuation to inner pages (≥ 4 required; actual 9)
| Page | T1 cards on seam | T2 label + bleeding sheet | T3 ghost head + CTA band |
|---|---|---|---|
| About | – | people (7 update rows) on the sheet | ✓ ABOUT |
| Rooms we survey | ✓ 4 cards straddle the head-band seam (static, no drift) | per-room sections on the sheet | ✓ ROOMS |
| The report | – | ✓ 4 parts feed (P06, P08, P09, P10) | ✓ REPORT |
| Fees | – | label column + table on the sheet | ✓ FEES |
| Book a room survey | ✓ 4 small cards (200×200) on seam as "Which room?" links | form slot on the sheet | ✓ BOOK |
| Field notes (post list) | – | ✓ posts as feed items with Ø44 discs | ✓ NOTES |
| Survey calendar (newsletter) | – | ✓ form on the sheet | ✓ CALENDAR |
| Questions | – | update rows on the sheet | ✓ QUESTIONS |
| Thanks / Privacy / Terms | – | text on the sheet | ✓ (no ghost on legal) + CTA band |

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
nagata.co.jp opens on a quiet pale grey-blue band carrying a two-line staggered statement ("quiet, good sound, good resonance" as the theme; second line indented ~170px). Under it, **four square photographs of real rooms** — an arena, a school hall, a renovated civic hall, an atrium — are dark, wide-angle, empty, warm timber and rows of seats; they straddle the band seam. A slate logo tile sits top-left and two corner tabs top-right. **Story:** a consultancy proven by the rooms it has listened to — the room is the hero, people are absent, and quietness is the brand. **Signature motion:** the strip of rooms drifts sideways one card every 2 s (800 ms slide, infinite), a slow procession of halls.

### (2) Our translation (room-survey acoustic consultancy; same scene type, same motion idea, same image type = low-key documentary room photograph)
Same story, one step earlier in a room's life: **listen to the room before it is finished.** The reference's empty hall becomes **an empty auditorium during a survey**: a consultant at the stage edge raises a sound level meter at arm's length while a colleague two rows back logs the reverberation time on a tablet (P01) — the room is still the hero, people are small in the frame. The plan's diagonal split replaces the band: the pale upper-left half holds the staggered headline (the reference's staggered catch), the dark photo occupies the lower-right half, and the H1 breaks across the seam. The reference's procession of halls is kept immediately below as **the four rooms we survey** drifting sideways (T1), whose top edge is already visible in the first screen. The hero foot is the plan's **timeline** — the survey day — echoing the reference's thin hairline rows.

### (3) KV checklist (all built in the home first screen at 1440 × 900, all visible)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Pale grey-blue band with a two-line staggered statement | Pale `#EBEDEF` upper-left half of the diagonal split; eyebrow + H1 line 1 "Hear the room" (graphite) on the pale; lead paragraph upper right | H1 line 1 x 200, y 196–275; lead x 880–1240, y 150–262 | none (hero has no reveal) | — |
| 2 | Second line indented ~170px | H1 line 2 "before it is finished." indented **170px** (x 370), **white on the photo**, below the seam | x 370–1170, y 428–507 | none | P01 (behind) |
| 3 | Dark wide-angle photographs of empty halls, warm timber, rows of seats | Low-key photo: consultant raising a sound meter at the stage edge of an empty auditorium, colleague logging RT on a tablet two rows back | lower-right half, clipped by the diagonal seam from (0, 452) to (1440, 308), bleeding to both viewport edges and the hero bottom (y 700) | `sp-parallax`, `--sp-par: 8%` | **P01** |
| 4 | Four square r8 room photos drifting sideways, straddling the band seam | Four 335×335 r8 room cards (Auditorium / Classroom / Small hall / Open office), pale band behind their top half; tops + labels visible in the first screen | x 20–1420, card tops y 740 (160px visible above the fold) | `sp-marquee`, ~42px/s left, infinite | **P02, P03, P04, P05** |
| 5 | Slate logo tile 200×80 + corner tabs | Graphite-slate logo tile 200×80 top-left; centred anchor nav; 220×80 deep tab "Book a room survey" top-right | header y 0–80 | sticky, CSS only | — |
| 6 | Thin hairline rows (Latest Update) | Hero-foot **timeline**: 1px white 55 % rule with 5 ticks — 08:30 Walk the room · 09:30 Reverberation & noise · 12:00 Speech & insulation · 15:00 Findings on site · +10 days Report | on the photo, x 200–1240, y 620–688 | none (static; no reveal in hero) | P01 (behind) |
No "adapted, not copied" shortcut: every row is built and visible in the first screen. The hero contains **no form, table or search**.

---

## 3. Home page

### First screen composition
**hero_composition: diagonal-split · hero_text: split-over-seam · hero_footer: timeline · hero_fingerprint: diagonal-split/split-over-seam/timeline**
- **diagonal-split:** hero = `core/group.oto-hero`, full width, y 80–700 at 1440×900 (height `min(620px, 72vh)`, min 560), ground `#EBEDEF`. Child 1 `core/group.oto-hero__plate` (aria-hidden, `position:absolute; inset:0`, **`clip-path: polygon(0 60%, 100% 37%, 100% 100%, 0 100%)`** → seam from (0, y 452) to (1440, y 308), rising ≈ 5.7°). The clip-path sits on this wrapper only; inside it `core/group.sp-parallax` (`--sp-par: 8%`, height 100 %) holding `core/image` P01 (`object-fit: cover; object-position: 50% 60%`). A CSS gradient on the plate (not on the moving image): `linear-gradient(180deg, transparent 55%, rgba(18,23,27,.55) 100%)` for the timeline. The photo area is ≈ 52 % of the hero. No other diagonal anywhere else on the page (the seam is a hero-only gesture).
- **split-over-seam:** child 2 `core/group.oto-hero__text` (z-index 1, normal flow, contentSize 1040 at x 200). Eyebrow (y 150) "Architectural acoustics · Calder Wharf" Onest 600 .8125rem ls .16em caps `#5F6B75`. **One H1** (`core/heading` level 1) with two `<span>` lines: line 1 `.oto-l1` "Hear the room" `#3B4A5C` on the pale; line 2 `.oto-l2` "before it is finished." **white `#FFFFFF`**, `display:block; margin-inline-start:170px; margin-block-start:153px` so its top (y 428) is below the seam at its left end (seam y 415 at x 370) and stays below it across its width (seam rises to the right). Hanken Grotesk 500 **4.5rem/1.1**, ls −.01em, ≥1100: `white-space: nowrap` on each span; line 2 copy ≤ 24 Latin characters in every language (CJK ≤ 10 characters). Lead paragraph (34 words) in the pale upper-right (x 880–1240, y 150–262, Onest 1rem/1.8 `#3B4A5C`) — it stays above the seam (seam at x 1240 = y 314). CTA pill on the photo below line 2: x 370, y 532–592, **white 1px outline, r999, 60px tall**, "Book a room survey" white Onest 600 .9375rem + arrow (same pill as T3).
- **timeline (hero_footer):** `core/group.oto-timeline` at the hero foot, on the photo (x 200–1240, y 620–688): a 1px `rgba(255,255,255,.55)` horizontal rule with **5 ticks** (1px × 8px, at 0 %, 22 %, 47 %, 72 %, 100 %); above each tick the time (Onest 600 .8125rem ls .1em white: 08:30 / 09:30 / 12:00 / 15:00 / +10 days) and below it the label (Onest 400 .875rem `rgba(255,255,255,.86)`). A `core/list` with 5 items laid out with CSS grid (columns 22/25/25/28 %… use `grid-template-columns: repeat(5, 1fr)` with first/last aligned to the edges). Static.
- **Mobile 390 (hard):** no text over the photo, no absolute labels. Order in normal flow: eyebrow → H1 (2.5rem/1.15; line 2 also graphite `#3B4A5C`, indented 24px — the split-over-seam colour change is desktop/tablet ≥782 only) → lead (.9375rem) → CTA pill (graphite outline `#3F5A66`, full width 100 % max 320) → photo plate as a **static block** 390×300, `clip-path: polygon(0 14%, 100% 0, 100% 100%, 0 100%)` on the wrapper, parallax `--sp-par: 5%` → timeline as a **5-row list** on `#EBEDEF` under the photo (time 64px column + label, 1px `#DDE2E5` rows). Header 64 (logo tile 152×64, menu tab 64×64 `#3B4A5C` with the core navigation overlay button). Nothing positioned absolutely except the plate's own image inside the parallax wrapper.
- 782–1099: seam polygon(0 64%, 100% 40%…), H1 3.5rem, lead under line 1 instead of upper-right, line 2 still white below the seam (wraps allowed, then verify against the seam at 800 and 1024; if any word of line 2 lands on the pale, drop to graphite at that width).

### Block order (anchor ids in brackets; header nav = Rooms · Approach · Survey · Report · Cases · Fees + the tab)
| # | Block | Purpose / layout | Photos | Copy |
|---|---|---|---|---|
| 1 | Hero `#top` | diagonal split + timeline (above) | **P01** | H1 6 words, lead 34 words, 5 timeline ticks |
| 2 | Rooms we survey `#rooms` | **T1** four square cards on the band seam; above the cards on the band: none (cards follow the hero directly, 40px gap); under the cards on white: one line "Four kinds of room, measured the same way: empty, in daylight or after hours, with the drawings open." (x 200–1240) + text link "How each room is surveyed →" | **P02 P03 P04 P05** | 4 labels + 4 captions + 26 words |
| 3 | Approach `#approach` | Supporting vertical/stacked heading "Measure / before / you specify" + 1px rule + **two-column text** (cols x 520–860 and 900–1240, gap 40) — 2 narrative paragraphs (≈60 + 55 words): why finishes decide how a room sounds; why we measure the bare room first. White ground, padding 112 | – | 115 words |
| 4 | What a survey measures `#survey` | **sticky-media** (archetype): left column x 200–680 **sticky** (`top: 112px`) photo P06 4:5 (480×600, r0); right column x 760–1240 four items stacked with 120px between them, each: index "01" Hanken 300 2.25rem `#9A9C9F`, title Hanken 500 1.5rem, paragraph 40 words, line "Typical target: 0.6–0.8 s in a classroom" Onest 600 .875rem `#3F5A66` above a 1px `#DDE2E5` rule. Items: 01 Reverberation time · 02 Background noise from plant and street · 03 Sound insulation between rooms · 04 Speech clarity at the back row. Right column `sp-stagger`, items `sp-reveal sp-reveal--up` | **P06** | 4 × 48 = 190 words |
| 5 | What the report includes `#report` | **T2** pale label column + white sheet bleeding right, 4 feed items with Ø44 discs | **P07 P08 P09 P10** | label 30 words + 4 titles |
| 6 | A quiet room `#quiet` | **Parallax band** full-bleed, height 560 (mobile 380): `core/cover` P14, dim `rgba(18,23,27,.35)`, `sp-parallax --sp-par: 10%`; foreground in the cover's inner container (not moving): one sentence white Hanken 300 2.25rem/1.35 max 760px at x 200, vertically centred: "An empty room tells you what it will do to every voice that fills it." + caption Onest .8125rem ls .12em caps `rgba(255,255,255,.8)` "Small hall, after hours" | **P14** | 22 words |
| 7 | Recent surveys `#cases` | RT project list (`nagata-projects.png`): count "3 case notes" Hanken 500 2.25rem with small "notes" .875rem; **3-up photos 16:9 (≈ 320×180 in 1040 width, gap 40), radius 0**; under each the title Hanken 500 1.25rem `#3F5A66` (2 lines max) and a label/value spec list (Onest .8125rem): Room type · Volume · Measured · Target · Year 2026. Each links to its post. Container `sp-reveal sp-reveal--up` | **P11 P12 P13** | 3 × 35 words |
| 8 | Fees `#fees` | Label column left on white (x 200–440: "Fees" Hanken 300 2.25rem + sub-label "Fixed before we travel"), then the **fee table full content width (x 200–1240)** below it: 6 rows, item left, price right nowrap; note under it (travel, VAT, report in 10 working days) + text link "Book a room survey →". No reveal | – | 6 rows + 45 words |
| 9 | Booking `#book` | Update rows (RT "Latest Update"): title "How booking works" Hanken 300 2.25rem; 5 rows, 1px `#DDE2E5`, left column "Step 1"… Onest 600 .875rem `#5F6B75` 158px, right text Onest 1rem. Rows are text only (not a grid, no connector line) | – | 5 × 14 words |
| 10 | CTA band | **T3** graphite band + outline pill | – | 1 sentence |
| 11 | Footer | White, RT foot: wordmark left (x 230), address column right (x 765) with Ø44 `#3F5A66` pin disc, hours, phone, email; third row: "Survey calendar" subscribe (newsletter slot, §9) on `#EBEDEF` panel x 200–1240; links row (About, Rooms, Report, Fees, Field notes, Questions, Privacy, Terms); caps copyright .8125rem `#9A9C9F` | – | – |

Home photo positions: P01, P02, P03, P04, P05, P06, P07, P08, P09, P10, P11, P12, P13, P14 = **14 unique** (≥8). The marquee's aria-hidden duplicate group reuses P02–P05 with `alt=""` and is `display:none` whenever the marquee is not animating (§7); it is a technical copy, not a content repeat. Home word count target ≈ 600 English words; narrative paragraphs ≥ 3 of ≥ 20 words (#approach ×2, #survey ×4, #cases ×3).

### Comparison with the most recent themes (home order must not match)
| Theme | Home order | Ours differs because |
|---|---|---|
| Michikusa Lodge | inset double-exposure window → centred wordmark → photo + log lines + circle → room ledger → price table → dawn parallax → road strip → night ledger → stories → FAQ → book | no framed window, no centred wordmark, no ledger; our hero is a diagonal split; fees come late and in one table; no FAQ on home |
| Soroe Clinic | cell hero + chips → logo row → worries → slate staircase → visits → numbers → notes → fees → people → first visit → letters | no cells/frame, no chips, no numbers band, no people on home; our sticky-media section replaces the staircase |
| Mebuki College | text + photo hero + scribble + 3 cards → 2×2 tab cards → a day → garden → who for → costs → admission → tutors → graduates → notices → visit | our "day" lives only in the hero foot as a horizontal timeline; no tabs, no 2×2; cards are a drifting 1:1 strip on a seam |
| Enogu Supply | three-photo crossfade + stats → four-range abutting band → products → vertical tagline story → orders → notices → visit | no crossfade, no stats; the 4 room cards are separated (gap 20, r8) and straddle a band, not an abutting band; the report feed sits on a bleeding white sheet |
Signature devices (diagonal seam, band-straddling strip, bleeding sheet, ghost caps, sticky photo) appear in none of the four.

---

## 4. Inner pages (11 pages + Field notes list + 3 posts; slugs identical in every language)
All inner pages: T3 head band with ghost word, content on the white sheet (x 200 → right edge at 1440; ≤781 full width), T3 CTA band, footer. Page codes for theme-meta/demo-content `screens`: about→/about/, news→/field-notes/, article→first post, category→/category/case-notes/, tag→/tag/reverberation/, newsletter→/survey-calendar/, contact→/book/.

| Page (slug) | Key content | Photos |
|---|---|---|
| About (`/about/`) | Why the studio was founded 2011; how a survey day runs (the 5 ticks, in prose); **people: 7 update rows** (name · role · what they measure, 1px rules) on the T2 sheet; studio facts spec list (founded, people 7, address, hours) | P15 (head-right, 3:2), P16 (4:5 beside the people rows) |
| Rooms we survey (`/rooms/`) | T1 four static cards on the head-band seam (P02–P05); then four sections `#auditorium #classroom #small-hall #open-office`: typical problems, what we measure, target ranges (classroom RT 0.6–0.8 s; lecture room 0.7–0.9 s; small hall for music 1.4–1.8 s; open office: speech privacy between zones), which fee row applies | P02 P03 P04 P05 (cards), P14 (wide band between sections) |
| The report (`/report/`) | T2 feed of 4 parts `#part-1…#part-4`: 1 Reverberation curves by octave band · 2 Background noise and plant · 3 Insulation between rooms · 4 Finish-schedule proposals (materials, areas, where); sample table of contents; what we do not do (no design guarantee, no product sales) | P06 (part 1), P08 (part 2), P09 (part 3), P10 (part 4) |
| Fees (`/fees/`) | Fee table (6 rows, §0), what every survey includes, travel, VAT, cancellation (free up to 5 working days before the visit; after that 30 %), payment 30 days after the report | P07 |
| Book a room survey (`/book/`, contact) | "Which room?" 4 small cards (200×200, on seam) linking to Rooms; 5-step booking flow as update rows; what to send (drawings PDF, room hours, seat count); **contact form slot** (§9); studio address, hours, phone, email | P17, cards reuse P02–P05 at 200px (different page from Rooms → allowed) |
| Field notes (`/field-notes/`, posts) | posts list as T2 feed (thumbnail, date, title + Ø44 disc), empty page content | featured images P11 P12 P13 |
| Posts (3) | Case notes 1–3 (§0), 350–450 words each, spec list at the top (room type, volume, measured, target, consultant), category Case notes + tags | P11 / P12 / P13 as featured image; inline P05 / P03 / P04 respectively |
| Survey calendar (`/survey-calendar/`, newsletter — landing waitlist) | "Survey dates open six weeks ahead, region by region. Leave your email and we write when the next weeks open near you." Newsletter slot on the T2 sheet (§9), 3 rows: what you receive (one email when dates open; no marketing), how often (at most twice a month), how to leave | P18 |
| Questions (`/questions/`) | 8 questions as update rows with `core/details`: Does the room need to be empty? (yes, 3–4 h of quiet) · Evening sessions? (18:00–22:00) · Can you measure a room under construction? · How long is the report? (10 working days) · Do you sell panels? (no) · Travel beyond 80 km? (€0.60/km) · Cancellation? · Who owns the report? | P09 |
| Privacy (`/privacy/`), Terms (`/terms/`) | legal text on the sheet, no images, no reveal; terms repeat fees, cancellation, 10-day delivery | – |
| Thanks (`/thanks/`) | after booking/subscribe: what happens next (fee and date within 2 working days) + links | P16 |

---

## 5. Colour and type

### Colour (RT (a) relationships kept: white page, pale grey-blue bands, dark room photographs, one muted slate primary in small tiles/discs/band)
| Role | RT hex | Ours | Share (first screen) | Use |
|---|---|---|---|---|
| Base | #FFFFFF | **#FFFFFF** | ~38 % | page, sheets, header |
| Pale band | #EBEFF1 | **#EBEDEF** (−0.5 % L, shifted 3° toward the row's silver-grey (gin-nezumi)) | ~24 % | hero pale half, band behind cards, page heads, T2 ground, footer subscribe panel |
| Photographs | dark rooms | low-key rooms, desaturated | ~33 % | P01 + card tops |
| Primary | #436472 | **#3F5A66** (L −4 %, chroma −8 %) | ~3 % | logo tile, Ø44 discs, CTA band, links, numbers in specs |
| Deep | #3B4A5C | **#3B4A5C** (same) | text + ~2 % | headings, body, header tab, mobile menu tab |
| Muted text | – | **#5F6B75** | text | eyebrows, meta, step labels (contrast 5.4:1 on white) |
| Silver (row gin-nezumi) | – | **#9A9C9F** | <1 % | index numerals, copyright, tick rules on light |
| Hairline | #DDE2E5 | **#DDE2E5** | – | all rules and dividers |
| Accent | none | **none** | 0 | (no second hue, as RT) |
Why the primary moves 4 %: Soroe Clinic (recent) uses `#4F6B74`; `#3F5A66` keeps the reference hue but is darker and greyer, toward the plan's gin-nezumi silver row. **First-screen saturated share (HSV s>0.35, v>0.25) ≤ 10 %** (RT 7.9 %, row note cap 30 %, check-first-screen.py cap 15 %). No saturated panels anywhere; the CTA band is the only large primary area and is never in the first screen.

### Type (font_direction **sans**; latin heading + body both sans; CJK Noto Sans TC / JP (gothic), never Mincho)
- Families (theme.json `fontFamilies` + `fontFace`, woff2 in `assets/fonts/`, editor = front end, licence OFL listed in theme-meta `fonts[]` and readme.txt):
  - **heading:** `"Hanken Grotesk", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif` (weights 300, 500).
  - **body:** `"Onest", system-ui, -apple-system, "Segoe UI", sans-serif` (weights 400, 600).
  - `:root:lang(zh-TW)` heading: `"Hanken Grotesk", "Noto Sans TC", sans-serif` (bundled zh-TW subset of the site's strings, Hokuto/Hada method); body: `"Onest", "PingFang TC", "Heiti TC", "Microsoft JhengHei", sans-serif` (**no bundled zh family, no Japanese family** — repo gate).
  - `:root:lang(ja)` heading: `"Hanken Grotesk", "Noto Sans JP", sans-serif` (bundled ja subset); body: `"Onest", "Hiragino Sans", "Hiragino Kaku Gothic ProN", "Yu Gothic", "Meiryo", sans-serif`.
  - `:lang()` rules → copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and require it.
- Scale (theme.json `fontSizes`; RT sizes in brackets): small .8125rem · base 1rem (RT 15.75px) · medium 1.25rem · large 2.25rem (RT Latin section titles 36px) · x-large 3rem · **xx-large 4.5rem** (H1; RT catch 44–50px — enlarged to meet the ≥4.25rem gate). Fluid H1 `clamp(2.5rem, 4.2vw + 1rem, 4.5rem)`.
- Weights / line heights: H1 Hanken 500 lh 1.1 ls −.01em · section titles Hanken **300** 2.25rem lh 1.2 (RT Montserrat 300) · h3 Hanken 500 1.375–1.5rem lh 1.4 (RT 22.5/31.5) · body Onest 400 1rem lh 1.8 (RT 25.2/15.75 = 1.6; +.2 for five languages) · nav Onest 600 .9375rem ls .06em (RT 700 ~16px tracked) · eyebrow/meta Onest 600 .8125rem ls .16em caps · captions .6875rem.
- zh-TW / ja: headings ×0.75 of Latin sizes (H1 3.375rem), body line-height 1.85, ls .04em; fr/de `hyphens: auto` on body and h2/h3.

### Shape and spacing (RT (c)(d))
- contentSize **1040px** (RT x 200–1240), wideSize 1400px. Section padding **112px** desktop / 72px mobile (RT 80–120). Header 80 / 64.
- Radius: room cards **8px**, pills **999px**, discs 50 %, everything else **0** (case photos, P06, P14, sheets, table). No shadows anywhere. Hairlines 1px `#DDE2E5`.
- Buttons: outline pill 60px tall (CTA band, hero), filled pill `#3F5A66` 52px for secondary on white; text links `#3F5A66` with 1px underline offset 4px.

---

## 6. Photos (18; Imagery = photo; Grok one at a time; Read every one; webp ≤ 300 KB, ≤ 2000 px; 0 cut-outs)
**STYLE (one string for the whole theme):** `"low-key documentary architectural photograph, natural dim practical lighting, desaturated silver-grey tones with warm timber, wide-angle, quiet, no text, no logos, international modern setting, diverse people"`
Instruments: sound level meters and tablets must show **no readable screen text** (screens dark or out of focus); no brand marks on chairs, pianos or devices. Regenerate on any text, logo, broken face or hand.

| # | Subject / composition | Ratio, px | Used on (page · block) | Home |
|---|---|---|---|---|
| P01 | Empty raked auditorium seen from the stage edge; a consultant (woman, 40s) raises a handheld sound level meter at arm's length in the lower-right third; a colleague (man, 30s) two rows back logs on a tablet; one warm practical light, rows of dark seats rising to the upper left | 16:9, 2000×1125 | Home · hero (diagonal plate) | ✓ |
| P02 | Empty auditorium from the rear balcony, timber side walls, dark seats | 1:1, 1200 | Home #rooms card; Rooms cards; Book cards | ✓ |
| P03 | Empty classroom after school, desks, a measurement microphone on a tripod in the middle, window dusk light | 1:1, 1200 | Home #rooms card; Rooms; Book; post 2 inline | ✓ |
| P04 | Small recital hall ~200 seats, timber wall panels, a closed grand piano without logo on the low stage | 1:1, 1200 | Home #rooms card; Rooms; Book; post 3 inline | ✓ |
| P05 | Open-plan office after hours, ceiling baffles, rows of desks, one desk lamp | 1:1, 1200 | Home #rooms card; Rooms; Book; post 1 inline | ✓ |
| P06 | Close-up: a hand holding a sound level meter (screen dark), an omnidirectional dodecahedron loudspeaker on a stand blurred behind, lecture room | 4:5, 1200×1500 | Home #survey sticky; Report part 1 | ✓ |
| P07 | Consultant's hands on a laptop on a folding table in a dim hall, screen glow out of focus | 3:4, 900×1200 | Home #report item 1; Fees | ✓ |
| P08 | Consultant holding a meter up toward a ceiling ventilation grille in an office corridor | 4:3, 1200×900 | Home #report item 2; Report part 2 | ✓ |
| P09 | Loudspeaker on the floor aimed at a partition wall in an empty meeting room, cable along the floor | 3:4, 900×1200 | Home #report item 3; Report part 3; Questions | ✓ |
| P10 | Material samples on a timber table — slatted timber, grey felt panel, perforated board — beside rolled drawings (no visible text), under a desk lamp | 4:3, 1200×900 | Home #report item 4; Report part 4 | ✓ |
| P11 | 180-seat tiered lecture room, a consultant at the lectern with a meter, wide | 16:9, 1600×900 | Home #cases 1; post 1 featured; Field notes | ✓ |
| P12 | Open-office floor with ~90 desks and suspended ceiling rafts, early morning, one person walking with a tripod | 16:9, 1600×900 | Home #cases 2; post 2 featured; Field notes | ✓ |
| P13 | 240-seat recital hall from the side balcony, stage softly lit, empty | 16:9, 1600×900 | Home #cases 3; post 3 featured; Field notes | ✓ |
| P14 | Wide dim small-hall ceiling with suspended timber reflectors and the upper seating rows, after hours | 21:9, 2000×860 | Home #quiet parallax band; Rooms band | ✓ |
| P15 | Two consultants reviewing large printed floor plans (no readable text) on a long timber table in a calm studio, window light | 3:2, 1500×1000 | About head | |
| P16 | Field engineer setting up a dodecahedron loudspeaker on a stand at the edge of a stage | 4:5, 1200×1500 | About people; Thanks | |
| P17 | The studio meeting room: timber slat wall, four chairs, an open instrument case on the table | 3:2, 1500×1000 | Book | |
| P18 | Quiet corridor outside a hall, a double door ajar, a strip of warm light | 3:2, 1500×1000 | Survey calendar | |
No page shows the same photo twice (the marquee duplicate is aria-hidden and hidden when static). 18 unique images site-wide, 14 on home.

---

## 7. Motion and scroll effects (sp-scroll v1 copied unchanged; hero has no reveal; max 3 effect types per page)
| Effect | Where | Source (RT (g)) | Our values |
|---|---|---|---|
| `sp-marquee` | Home #rooms card strip (`.oto-strip.sp-marquee` > `.oto-strip__set` + aria-hidden `.oto-strip__set--dup`) | nagata.co.jp slick: autoplay 2000 ms, speed 800 ms, ease, infinite, one card per step | continuous linear drift; theme CSS sets `animation-duration: 34s` on `.oto-strip > *` (≈42px/s at 1440 — one card every ~8.5 s; slower and steadier than RT's stepped motion, same procession). Pause on `:hover`/`:focus-within` (`animation-play-state: paused`). Theme CSS: `.oto-strip__set--dup{display:none}` by default and `display:flex` only inside `@media (prefers-reduced-motion: no-preference){ html:not(.sp-no-motion) … }`. ≤781: no marquee (`.oto-strip` becomes overflow-x scroll-snap), dup hidden. Children never carry sp-reveal |
| `sp-parallax` | Home hero plate (P01) and Home #quiet band (P14) | RT has no parallax; it is the plan's required effect, standing in for the reference's drifting hall photos | §7.1 |
| `sp-reveal--up` + `sp-stagger` | Home #survey right column (4 items, stagger), #report label column + sheet container (one reveal each, not the feed items: horizontal scroll row), #cases container; inner pages: section containers only | RT has none; sp default | `--sp-dist: 24px`, `--sp-dur: .7s`, `--sp-ease: cubic-bezier(.2,.7,.2,1)`, stagger .12s (sp default). Never on hero, forms, fee table, legal text, CTA band |
Header: CSS `position: sticky` only (RT used a scroll listener; we must not).

### 7.1 Parallax (required)
- **Hero (primary):** block `.oto-hero__plate` > `core/group.sp-parallax` (`style="--sp-par:8%"`) > `core/image` P01 (figure>img moves). Foreground (H1, lead, pill, timeline) is in `.oto-hero__text`, outside the moving layer. Mobile: same structure, static plate block, `--sp-par: 5%`.
- **#quiet band:** `core/cover.sp-parallax` (`--sp-par: 10%`, mobile 6%), background image P14 (`.wp-block-cover__image-background` moves); foreground sentence in the cover inner container.
- Reference counterpart: the reference's sideways-drifting room photographs; ours turns the same "rooms in quiet motion" into a vertical drift of the room behind the headline.
- `check-parallax.mjs` must show ≥6px layer/container difference desktop and mobile, 0 with reduced motion. `?sp-static`, editor, reduced motion: no movement, scale 1.

---

## 8. Responsive rules (hard)
- **390px first screen:** no vertical text, no absolutely positioned labels or text over other text; hero stacks as in §3; the vertical heading (#approach) is horizontal on mobile in every language.
- **No horizontal overflow** at 390 and 1280 (`html, body { overflow-x: clip }`; the bleeding sheet uses `margin-right: calc(50% - 50vw)` inside clip, never `100vw` widths that add a scrollbar).
- **Fee table (Home #fees, Fees, Terms) at ≥782 (800 and 1280): full content width (100 % of 1040, or of the sheet column), `table-layout: auto`, price column `white-space: nowrap; text-align: right; width: 1%`, item column wraps.** Never clipped, never overflowing.
- **Every table ≤781 stacks:** each row becomes a block — item (Onest 600) on one line, price right-aligned below, 1px rule between rows; `<thead>` visually hidden.
- Room strip ≤781: scroll-snap row of 72vw squares; report feed: 80vw items; cases: 1 column; sticky-media: photo static on top (no sticky ≤781), items below.
- Tap targets ≥ 44px; the menu tab opens the core navigation overlay (`#3B4A5C` ground, white links 1.5rem, anchors close the overlay).

---

## 9. Forms (form contract v1 — `steps/form-contract-v1` exists)
- Copy `pipeline/assets/forms/shippress-forms.php` → `inc/shippress-forms.php`, its CSS + editor JS → `assets/` unchanged; `require_once` in functions.php. Patterns stay literal block markup with small PHP islands; run `pattern_source.py` before build/inner done.
- **Book a room survey** (`/book/`, contact screen; the only booking page), section `#request` on the white sheet below the 5 steps, its own block: `shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) )`. Fallback (`ob_start()` literal markup, unchanged class/href): filled pill `<a class="wp-element-button oto-mail" href="mailto:survey@otonoha-acoustics.example?subject=…">` label `book_email_button` "Email the studio" + line `book_call_line` "Or call the studio on +00 31 555 0186, Mon–Fri 08:30–17:30." Never links to /book/ or /contact/.
  - Recommended CF7/WPForms fields (readme + brand.md): name*, organisation, email*, phone, room type* (select: Auditorium / Classroom / Small hall / Open office / Other), building city*, seats or room volume, number of rooms (1–10), project stage* (radio: room in use / before finishes / under construction), drawings available (checkbox), preferred weeks, message (textarea), consent* (checkbox), submit "Send survey request".
- **Survey calendar** (`/survey-calendar/`, newsletter screen; standalone page; slot on a white panel, 1px `#DDE2E5`, on the T2 pale/white sheet) and the **footer "Survey calendar" panel** (`#EBEDEF`, every page incl. home — far below the first screen): `shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'survey@otonoha-acoustics.example', 'label' => forms_email, 'submit' => forms_subscribe, 'notice' => forms_mail_notice, 'subject' => forms_mail_subject ) )`. Order: MailPoet (explicit ID via `shippress_form_id`) → MC4WP → opt-in CF7/WPForms dedicated newsletter ID only. No plugin → required email field + submit, native mailto POST with the entered address and the visible notice; never claims success.
- Tokens (style.css, mapped from theme.json presets; scoped to plugin classes / `.sp-newsletter-fallback`; no global input/form selectors):
  - Light (white / `#EBEDEF`): `--sp-form-accent:#3F5A66`, `--sp-form-on-accent:#FFFFFF`, `--sp-form-radius:8px` (submit renders as pill via plugin-scoped rule `border-radius:999px`), `--sp-form-focus:#3B4A5C` (2px outline, offset 2px), `--sp-form-surface:#FFFFFF`, `--sp-form-text:#3B4A5C`; border `#B9C0C6`, hover `#3F5A66`; placeholder `#6B7680`.
  - Dark (CTA band / mobile overlay if a form ever lands there): accent `#FFFFFF`, on-accent `#3F5A66`, surface `rgba(255,255,255,.08)`, text `#FFFFFF`, border `rgba(255,255,255,.5)`, focus `#EBEDEF`.
  - Error `#8E3B32` (dark `#F2B8AE`) with 1px border + message under the field; success `#3E6650` (dark `#BBD8C4`). Inputs 48px, label Onest 600 .8125rem ls .08em, input Onest 1rem, textarea min 160px, checkbox/radio 18px, submit 52px Onest 600 .9375rem. Same look for CF7, WPForms, MailPoet, MC4WP (Jetpack blocks too). Checked at 390 and desktop on light and dark grounds.
- i18n: semantic keys in `inc/i18n/en.php` first — `forms_email` ("Email address"), `forms_subscribe` ("Tell me when dates open"), `forms_mail_notice` ("Opens your email app with your address filled in. Send it to join the survey-calendar list — you are not on the list yet."), `forms_mail_subject` ("Survey calendar: please add me"), `book_email_button`, `book_mail_subject` ("Room survey request"), `book_call_line`; localised (not literal) in zh-TW, ja, fr, de; extract with `L10N_SEMANTIC=1`; dynamic block attributes render translated in every locale.
- No `sp-reveal` on any form or its section; no form in the home first screen.

---

## 10. Similarity to the reference (target 80 %; values from RT)
| Dimension | Reference (RT) | Ours |
|---|---|---|
| Base / pale / primary / deep | #FFFFFF / #EBEFF1 / #436472 / #3B4A5C | #FFFFFF / #EBEDEF / #3F5A66 / #3B4A5C |
| Accent | none | none |
| First-screen saturated share | 7.9 % | ≤ 10 % |
| Area split (white / pale / photo / primary) | 45 / 25 / 22 / 5 % | 38 / 24 / 33 / 3 % (+2 % deep tab) |
| Header | 80px, logo tile 200×80 slate, two 80×80 tabs right | 80px, logo tile 200×80 #3F5A66, one 220×80 #3B4A5C tab right, nav centred |
| Hero statement | 2 lines staggered, 2nd indented ~170px, serif 44–50px 700 | 2 lines staggered, 2nd indented 170px, sans 72px 500 (gate ≥4.25rem; font_direction sans) |
| Room strip | 4 × 335×335, r8, gap 20, x 20–1420, band seam at mid-card | identical geometry, band seam at card top + 168px |
| Strip labels | category top-left white 16px; venue bottom-left 11px | room type top-left white 16px; room facts bottom-left 11px |
| Strip motion | slick 2000 ms / 800 ms / ease, 1 card per step | sp-marquee linear 34s loop (~42px/s), paused on hover |
| Section titles | Montserrat 36px w300 | Hanken Grotesk 2.25rem w300 |
| Body | 15.75px / 25.2px | 16px / 1.8 |
| Feed title / disc | 22.5px/31.5px; Ø44 #436472 disc, white arrow | 1.375rem/1.4; Ø44 #3F5A66 disc, white arrow |
| News sheet | white sheet from x 521, bleeds right; 1px #DDE2E5 vertical dividers; photo ~215px tall centred | white sheet from x 520, bleeds right; 1px #DDE2E5 dividers; photo 215px tall centred |
| Content width | 1040 (x 200–1240) | 1040 (x 200–1240) |
| Section padding | 80–120px | 112px |
| Radius | cards 8, pill 999, rest 0 | cards 8, pills 999, rest 0 |
| Shadows | none | none |
| Hairlines | 1px #DDE2E5 | 1px #DDE2E5 |
| Page head | pale band x 0–1280, ~170 tall, ghost caps clipped by white sheet from x 200 | pale band x 0–1280, 172 tall, ghost caps 7.5rem clipped by white sheet from x 200 |
| CTA band | slate ~92px, sentence left, 1px white outline pill r999 60px right | #3F5A66 112px, sentence left, 1px white outline pill r999 60px right |
| Overview | vertical-rl 3-line heading + 1px rule + text | vertical-rl (zh/ja) / stacked (en/fr/de) 3-line heading + 1px rule + two-column text |
| Project list | 3-up ≈273×154, r0, label/value spec list | 3-up 16:9 ≈320×180, r0, label/value spec list |
| Footer | white; wordmark left, addresses right with Ø44 pin disc; caps copyright grey | white; wordmark left, address right with Ø44 pin disc; subscribe panel; caps copyright #9A9C9F |
| Imagery | dark documentary hall photos, warm timber, empty seats | low-key documentary room photos, warm timber, empty seats, consultants small in frame |
| Scroll reveals | none | 3 containers on home (sp-reveal--up) — the only additions beyond RT |

---

## 11. Home acceptance checklist
- [ ] Header: 200×80 `#3F5A66` logo tile, centred anchor nav (6 anchors), 220×80 `#3B4A5C` "Book a room survey" tab; exactly one top menu; sticky by CSS.
- [ ] Hero = diagonal-split / split-over-seam / timeline: seam (0,452)→(1440,308) at 1440×900; H1 line 1 graphite on pale, line 2 white on P01 below the seam and indented 170px; lead in the pale upper-right; white outline pill on the photo; 5-tick timeline on the photo foot. Not full-bleed-with-overlay.
- [ ] All 6 KV checklist items visible in the 1440×900 first screen (room-card tops + labels at y 740–900).
- [ ] T1 strip: 4 × 335 r8 squares, gap 20, pale band seam at mid-card, drifting (sp-marquee), duplicate hidden under `?sp-static` and reduced motion.
- [ ] T2 report sheet starts at ~36 % and bleeds off the right edge; Ø44 discs; 1px vertical dividers; 3rd item peeks.
- [ ] T3 CTA band `#3F5A66` with outline pill before the footer; same CTA label everywhere.
- [ ] #survey: sticky P06 at ≥782 while 4 items scroll; static on mobile.
- [ ] #quiet parallax band P14; hero parallax P01; `check-parallax.mjs` passes desktop + mobile; reduced motion 0px.
- [ ] 14 photo positions on home, no visible duplicates; ≥250 English words (target ~600), ≥3 narrative paragraphs ≥20 words.
- [ ] Fee table full width at 800 and 1280, price column nowrap right, not clipped; stacked at 390.
- [ ] 390px: no vertical text, no absolute labels over text, no horizontal overflow; hero text all on pale.
- [ ] First-screen saturated share ≤10 %; no gradients except the photo-legibility overlays; no shadows.
- [ ] Fonts: Hanken Grotesk + Onest via theme.json fontFace; zh-TW Noto Sans TC / ja Noto Sans JP heading subsets; editor = front end (`check-editor-fonts.mjs`); largest size 4.5rem.
- [ ] Footer subscribe slot renders email + submit without plugins with the mailto notice; no reveal on it.
- [ ] `auto-gates.mjs … en … 1 1` pass; `?sp-static` screenshots; reveal only on the 3 home containers.
