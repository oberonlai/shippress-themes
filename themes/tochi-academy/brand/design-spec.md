# Tochi Academy — design spec (stage 1, opus)

Row b28-2 · editorial-magazine · hero text-left-photo-right · nav centred · first screen "timeline-line" · page structure "audience-gateway" · type business (WooCommerce-compatible, not required) · font_direction **serif** · IMAGERY **photo** (documentary).
Reference: https://buncomo.jp/ (main) · Secondary: https://college8.jp/ (grid rails only). Tokens: `brand/reference-tokens.md` (all "token" citations below point there, section letters a–g).
Industry: an evening college that prepares working adults for the real-estate licence exam.
Similarity target: **80 %** to buncomo in colour relations, image treatment, motion, decoration and layout; photos, copy, logo, and line art are all ours.

---

## 1. Signature techniques (borrowed, obvious at a glance)

### T1 — Giant hairline circle-edge panel carrying the featured slider
- Source: buncomo.jp first screen (`ref/bun-first.png`). The site uses a ~1100 px white disc whose left arc is a 1 px black line. It bleeds off the top and right edges over the paper ground, and a soft blurred glow sits at the foot of the arc. Inside it, a "WEB MAGAZINE — PICK UP" slider shows a 16:9 r16 photo, huge date numerals, 48 px outline circle arrows, dots, and a pause button.
- Ours: **home KV, right side**. Disc diameter `min(1100px, 80vw)`, centre at x = 1440 − 440, y = 700 (so ~76 % of the disc is visible, with the arc starting at x ≈ 533 and y = 183 under the ticker). Fill `#FFFFFF`, left arc `1px solid var(--ink)` (only the arc; there is no other border). The disc clips at the viewport top/right with `overflow:clip` on the KV group, so it never causes horizontal scroll.
- Glow: radial blur 300 × 300 px at x 440–740, y 640–900, gradient `#3E5646 → #E0D3BF`, `filter: blur(60px)`, opacity .12 (it replaces the reference's orange→green, token a).
- Do **not** weaken: the arc must be a single crisp 1 px ink line, the disc must be visibly huge (≥ 55 % of the first-screen width), the slider must sit *inside* it, and the big date numerals stay 48 px+.
- Inner pages (continuation): every inner page header (About, Courses, Term calendar, Instructors, Fees, Stories, Open evening, Contact, Newsletter) uses a **smaller disc**: diameter 720 px, arc 1 px ink, bleeding off the right, holding that page's hero photo (16:9 r16, 520 px wide) on the right of the page title. On Journal and single posts, the disc holds the featured image.

### T2 — Hairline ticker band + stacked date stamp
- Source: buncomo header (`ref/bun-first.png`, `ref/scroll-bun-1800.png`): a 63 px strip between two 1 px ink hairlines carries a light Latin caps marquee in tan (23 px / 300, ls .1em). A second ticker in 23 px italic carries #keywords. A stacked date stamp sits at the header right (month 29 / day 48 / year 16 / weekday 21, all bold).
- Ours:
  - **Ticker 1 (global, under the header on every page):** Newsreader 300, 23 px, uppercase, ls .1em, colour `#C9BBA2` (reference tan `#E0D3BF` darkened 10 % for legibility on the paler ground), border-top/bottom `1px solid var(--ink)`, height 63 px. Text: "EVENING CLASSES FOR THE LICENCE EXAM / AUTUMN COHORT · WEEKS 1–24 / NEXT SITTING 14 MAR 2027 / OPEN EVENING EVERY SECOND THURSDAY / " (repeated). `sp-marquee`, 40 s linear.
  - **Ticker 2 (home block 4 + Courses + Journal):** Newsreader 300 italic 23 px, ink `#141A16` at 70 %, "#Leases #FloorPlans #Valuation #Disclosure #AgencyLaw #Tenancy #Finance #MockPapers #EveningStudy" (localised).
  - **Date stamp = next exam sitting** in the header right: label "NEXT SITTING" 11.6 px/500 ls .1em, then "03" (month, 29 px/600), "14" (day, 48 px/600), "2027" (16 px/600 ls .1em) over "SUN" (21 px/600 ls .1em), all Newsreader lining numerals, in ink. It is a flex child of the header row, not absolutely positioned.
- Do not weaken: both hairlines must be pure ink 1 px; the ticker type must stay light caps at 23 px; the stamp's day numeral must be ≥ 48 px.
- Inner pages: ticker 1 runs on all pages (template part). The date stamp appears large (day 120 px) on **Term & exam calendar** (one stamp per sitting) and **Fees** (enrolment deadline). Ticker 2 appears on **Courses** and **Journal**.

### T3 — Bordered card overlapping the photo, vertical date, dashed-rule labels, left rail
- Source: buncomo article cards (`ref/scroll-bun-1800.png`). A 1.7:1 r16 photo has a cream card (1 px ink border, r10) overlapping its lower 40 %, inset 28 px on the left and extended past the photo's bottom. A vertical rotated date in 11 px muted sits at the left of the photo, followed by "● category", the title, the author, and #tags. Section labels are a dot plus caps, followed by a 1 px dashed rule. An 87 px left rail with a 1 px right border holds a vertical label ("WEB MAGAZINE") with a small icon.
- Ours: cohort cards (home block 3), journal cards (home block 9, Journal archive), story cards (Stories), and course cards (Courses). Each card has:
  - a photo at 1.7:1, r16, full card width;
  - a card panel `#EEF0EB` with a `1px solid var(--ink)` border and r10. It starts at 60 % of the photo height (so it overlaps the lower 40 %), is inset 28 px left and 40 px right, and has 36/40 px padding;
  - a vertical date/label in the left gutter (`writing-mode: vertical-rl`), 11 px, ls .1em, `#787672`. On cohorts it reads "STARTS 28.09.2026"; on journal cards it shows the post date.
  - Inside the card: a 6 px accent dot `#B0763A` plus a category in 11.6 px/500 caps, the title in Source Serif 4 600 19 px / lh 1.85, a byline in 12 px, and #tags in 11.6 px italic `#787672`.
- Rail: on desktop ≥ 1024 px, home blocks 3 → 9 sit to the right of an 87 px rail (`border-right:1px solid var(--ink)`). The rail holds the current section's vertical label (Newsreader 600 15 px ls .2em, vertical-rl) and an 18 px line icon on top. Each section's label sits in its own rail cell, sticky at `top:140px`.
- Section labels: "● WHO IT IS FOR" etc. use a 6 px dot, 13 px/600 caps ls .1em, and a 1 px dashed ink rule below them (width 100 % of the content column, gap 16 px).
- Do not weaken: the card must visibly overlap the photo (not sit under it); the border must be ink, not grey; the date must be vertical.
- Inner pages: Courses, Instructors (list rows with dashed rules), Student stories, Journal archive + single (meta block), Open evening.

### Supporting (not counted) — college8 dashed column lines
- `ref/scroll-c8-1800.png`: 1 px dashed vertical lines every ~245 px. Ours: only behind **home block 5 (term timeline)** and the **Term & exam calendar** page. Use `repeating-linear-gradient` columns every 240 px in `rgba(20,26,22,.12)` dashed (4 px on / 6 px off) as a background on that group only. Never use it page-wide.
- Rotating "PAGETOP" badge: a 100 px circle of rotating text "BACK TO TOP · BACK TO TOP ·" in an **SVG textPath** (not CSS `content`) with an arrow at its centre. It is fixed at bottom-right 24 px, rotates 1 turn per 12 s linear, and is static under reduced motion. It is hidden on screens < 782 px.

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
- **Draws:** a warm paper header with a wordmark at the left, a line-art scene in the middle, and a stacked date stamp at the right; a tan ticker between hairlines; a huge white disc with a hairline left arc bleeding off top and right, with a blurred glow at its foot. At the left there is a short intro ("ONLINE × OFFLINE", a paragraph, and a speech-bubble link); at the right, inside the disc, a "WEB MAGAZINE — PICK UP" slider of a documentary talk photo with large date numerals and round arrows.
- **Story:** a faculty commons that lives both in a room and online. "Come in and see what is on today."
- **Signature motion:** the tickers loop continuously, headings wipe up through masks, the slider fades with a pause control, and the PAGETOP badge rotates.

### (2) Our translation (same composition, same motion idea, same image type: documentary photos)
An evening real-estate licence college: **"the classroom after the working day."** The left column says what the college is (it gives evening classes toward one licence, for people with a day job) and carries a speech-bubble link, "Who is each cohort for?". A **term timeline line** (the row's first screen) runs under the paragraph from Week 1 to the exam, with today's week marked. Inside the giant disc, the "THIS TERM — PICK UP" slider shows three documentary photos: an instructor marking a floor plan, two students comparing the same lease line, and a quiet exam-day desk. Each slide has a big date for that evening or the sitting. The header stamp shows the next exam sitting, and ticker 1 runs the term's facts.

### (3) KV checklist (home first screen at 1440 × 900, `?sp-static`; every item must be visible in the first screen)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Paper header: wordmark left, stacked date stamp right | 120 px header on `#F5F6F2`: wordmark "Tochi Academy" (Newsreader 600 26 px + 11 px caps sub-line "EVENING LICENCE COLLEGE") at left; **centred** single top menu (6 items); date stamp "NEXT SITTING 03 / 14 / 2027 SUN" at right | y 0–120 | none | — |
| 2 | Tan light-caps ticker between 1 px ink hairlines | Ticker 1 (T2), 63 px, 23 px Newsreader 300 caps `#C9BBA2` | y 120–183, full width | `sp-marquee` 40 s linear, pauses on hover | — |
| 3 | Giant white disc with 1 px hairline left arc, bleeding off top/right | ~1100 px `#FFFFFF` disc, 1 px `#141A16` arc, starts x ≈ 533 | x 533–1440, y 183–900 | none (static; hero gets no reveal) | — |
| 4 | Blurred glow at the arc foot | 300 px radial blur `#3E5646 → #E0D3BF`, opacity .12 | x 440–740, y 640–900 | none | — |
| 5 | Left intro: label + dashed rule, 2-line caps heading, paragraph, speech-bubble link | "● ABOUT THE COLLEGE" + dashed rule; H1 "Evening classes. / One licence." (Newsreader 300, `clamp(2.75rem,5vw,4.5rem)`, lh 1.08); a 3-line paragraph; a pill link with speech tail "Who is each cohort for? ↓" (r100, 1 px ink, 287 × 48); **timeline line**: a 1 px ink line 390 px long, "WK 1 · 28 SEP" at the left, "EXAM · 14 MAR" at the right, a filled 8 px evergreen dot at 7/24, and 11 px caps labels | x 87–480, y 250–860 | CSS-only load fade-up 16 px, 0.8 s `cubic-bezier(.455,.03,.515,.955)`, 0.1 s stagger (not sp-reveal) | — |
| 6 | "WEB MAGAZINE — PICK UP" slider: 16:9 r16 photo, big date numerals, 48 px circle arrows, dots + pause | "THIS TERM — PICK UP" (13 px/600 caps + 40 px rule): 484 px wide 16:9 r16 photo; under it "12.11" in Newsreader 600 56 px + "2026 / THU" stacked, a "● Evening class" category and a 2-line caption; 48 px outline circle arrows at x 687 and x 1316 (vertical centre of the photo); 3 dots + pause button | x 687–1364, y 340–890 | crossfade 6 s per slide, 0.8 s fade, `cubic-bezier(.455,.03,.515,.955)`; pause button and arrows (click JS only, no scroll listener); reduced motion = slide 1 static | **P01** (slide 1, shown in `?sp-static`), **P02**, **P03** |

Slider captions: P01 "12.11 2026 THU · Evening class · Reading a floor plan the way an examiner will"; P02 "19.11 2026 THU · Study pairs · Two readings of one lease clause"; P03 "14.03 2027 SUN · Exam sitting · What the desk looks like on the morning".
The line-art mark (our own SVG: an open book plus a pencil, 1.5 px ink stroke, 120 px) peeks over the disc's lower-left arc at x 160–300, y 790–900 on desktop only (it is decorative, `aria-hidden`, and hidden below 1024 px). We never copy the reference's characters.

---

## 3. Home page — block order

Global: header (120) + ticker 1 (63) as template parts. Content width 1180 px; left rail 87 px on blocks 2–9 (≥ 1024 px). Section padding 97 px top / 97 px bottom (token c). Body copy is Source Serif 4 16 px / lh 1.85. Total English copy ≥ 380 words, with narrative paragraphs in blocks 2, 3, 6 and 7.

| # | Block | Purpose | Layout | Photo(s) | Copy |
|---|---|---|---|---|---|
| 1 | **KV** (§2) | Who we are and what is on this term | Text left 391 px / disc + slider right | P01, P02, P03 | H1 + 45-word para + link + timeline |
| 2 | **The college** (rail label "THE COLLEGE") | Narrative introduction | 7/5 split: 3 paragraphs left (≈150 words: founded 2009 by a conveyancer, evening format, small cohorts of 18); photo right, 4:5 r16, 420 px wide, top offset +60 px; below the paragraphs, an outline pill "About the college" | P04 | 3 × 45–55 words |
| 3 | **Who it is for** (rail "COHORTS") | Audience gateway: three cohorts | Section label + an H2 (Newsreader 300 3rem). Three **T3 cards** in 3 columns (gap 70 px, card 332 px): Career changers / Agents' juniors / Returners. Each card holds a 2-sentence description, the timetable line ("Mon & Wed 18:45–21:30") and a "Read the cohort →" link | P05, P06, P07 | Intro 40 words + 3 × 35 words |
| 4 | **Hashtag ticker** | Topics of the course | Ticker 2 between two ink hairlines, full width (it breaks out of the rail) | — | tags |
| 5 | **A term, week by week** (rail "THE TERM") | Pace of the 24-week term | college8 dashed columns behind. A **horizontal** hairline timeline across 1180 px with 5 stops (Wk 1 Foundations · Wk 6 Contracts & leases · Wk 12 Valuation & plans · Wk 18 Law & disclosure · Wk 22–24 Mock papers → Exam). Each stop has a 10 px ink ring, a week number in Newsreader 600 40 px (`sp-count`), a title, and 20 words. Under the line, a 2-photo row (3:2 r16, 560 px each, 60 px gap), the second photo offset 48 px down | P08, P09 | 5 × 20 words |
| 6 | **Evening band (parallax)** | Atmosphere: the room at 19:00 | Full-bleed cover, 72 vh (min 520 px), `sp-parallax` `--sp-par:10%`. Foreground: a T3-style card (`#FFFFFF`, 1 px ink, r10, 440 px) at bottom-left (left 87 + 48 px, bottom 64 px) with "Doors open 18:30. Class from 18:45." + 40 words + a vertical "EVERY MON–THU" label | P10 | 40 words |
| 7 | **The next sitting** (deep green band `#26362C`, text `#F5F6F2`) | Exam target + figures | Left: a big date stamp (T2 at 2.5×: day "14" 120 px, month "03" 72 px, "2027 SUN" 40 px) with the label "NEXT SITTING"; then 3 figures with `sp-count`: "24 weeks", "18 seats per cohort", "4 mock papers". Right: photo 4:5 r16, 440 px wide, inside a 1 px `#F5F6F2` arc segment (a quarter-disc outline, echoing T1). Narrative: 50 words about the aim (we prepare; we never promise a result) | P11 | 50 words |
| 8 | **Instructors** (rail "FACULTY") | 7 named people | Left: group photo 3:2 r16 (560 px). Right: 7 **list rows** (no portrait grid), each row = name (Source Serif 600 18 px) · subject · evenings, divided by 1 px dashed ink rules, with a round 32 px outline arrow at the right. A link to Instructors | P12 | 7 rows |
| 9 | **Journal** (rail "JOURNAL") | Latest 3 posts | Query loop, 3 **T3 cards** with vertical dates; label "● JOURNAL" + dashed rule; an outline pill "All journal entries" | P13, P14, P15 (post featured images) | titles + excerpts |
| 10 | **Fees & visit** | Prices + open evening + subscribe | (a) Fees table, full content width (§9), 7 rows. (b) Two columns: Visit (address, hours, an outline pill "Book an open evening") / **Newsletter** subscribe slot (email + submit, §10) on a `#EEF0EB` r10 bordered card | — | 60 words |
| Footer | Deep green `#26362C` | Wordmark, address, hours, menu repeat (as a footer link list, not a second nav menu), footer newsletter slot, ©. PAGETOP badge | — | — |

Home photo positions: P01, P02, P03, P04, P05, P06, P07, P08, P09, P10, P11, P12, P13, P14, P15 = **15** (≥ 8; no repeats on the page).

### Not a repeat of recent themes
| Theme | Their home order | Ours differs because |
|---|---|---|
| Kakeru Run | 3-cell header + hexagon stage in ruled grid → intro 2+1 → breathing row → specimen tiles → price list → flow → coloured band | We have no grid stage and no hexagon; our KV is a hairline disc slider; we use a timeline line, not a flow grid; our price list is a late block merged with visit |
| Asagiri Hotel | pale band header → inset dark photo KV → centred tagline → rooms with giant serif opener → check-in card → shuttle → clock parallax | Our KV is text-left/disc-right with no centred tagline and no giant opener; our parallax is an evening classroom band with a bordered card, not a clock |
| Teisha Parking | slit-window 3-column KV → ticker + ledger → about window → masonry → dusk parallax → ruled rows | Our ticker pairs with a date stamp in the header, not a ledger; there are no slit windows and no masonry. Cards are T3 overlapping cards |
| Kashidashi Hire | slanted tab + wedge KV → yard board bar → peeking strip → finder tabs → hire-week steps → rates | There are no slants, wedges, or tabs; our gateway uses three cohort cards and a horizontal 24-week line, not hire-week steps |

---

## 4. Inner pages (11 pages + posts; T1/T2/T3 continue on ≥ 4)

All pages: header + ticker 1, then a **T1 page header** (H1 left in Newsreader 300 `clamp(2.5rem,4.4vw,3.75rem)`, 40-word lede, a disc of 720 px at right holding the page photo). The table below lists each page's photo.

| Page (slug) | Core content | Techniques | Photo |
|---|---|---|---|
| About (`about`) | History since 2009, founder Ines Marlow, the evening format, what we never promise, the building on Linden Quay, "a day at the college" routine (12:00 office opens → 18:30 doors → 21:30 close) | T1 header, T3 rail + dashed labels | P16 |
| Courses (`courses`) | 4 programmes as T3 cards (Evening Licence Course, Weekend Intensive, Returners' Refresher, Single Subject Modules) + mock paper series; who each is for; entry requirements | T1, **T2 ticker 2**, **T3 cards** | P05, P06, P07, P08 |
| Term & exam calendar (`calendar`) | Autumn cohort (28 Sep 2026 → 14 Mar 2027) and Spring cohort (26 Apr 2027 → 17 Oct 2027); the 24-week horizontal timeline; 2 large date stamps | T1, **T2 big stamps**, college8 dashed columns | P09 |
| Instructors (`instructors`) | 7 people with subject, background, evenings (list rows with dashed rules + one group photo) | T1, **T3 dashed rows + vertical labels** | P12 |
| Fees (`fees`) | Full price table (§9), what is included, instalments in 3 parts, enrolment deadline stamp (day 120 px: "07 / 09 / 2026" for Autumn; "05 / 04 / 2027" for Spring) | T1, **T2 stamp** | P18 |
| Student stories (`stories`) | 4 stories (§7) as T3 cards + one long quote | T1, **T3 cards** | P05, P06, P07, P11 (reused across pages only, never twice on one page) |
| Open evening (`open-evening`, booking) | Next 3 dates, what happens (tour, 20-min sample class, Q&A), `shippress_form_slot` kind contact | T1, T3 bordered card for dates | P17 |
| Journal (`journal`, posts page, empty) | Posts archive: T3 card grid of 3 columns, ticker 2 above it | **T3 cards**, T2 ticker 2 | featured images |
| Contact (`contact`) | Address, office hours, phone, email; `shippress_form_slot` kind contact | T1, T3 card | P04 |
| Newsletter (`newsletter`) | A standalone subscribe page: what we send (term dates, open evenings, exam reminders: 1 email per month), the email form slot | T1, T3 card around the form | P03 |
| Privacy (`privacy`) | Legal text (no effects) | — | — |
| Posts (3): "Reading a floor plan like an examiner" (P13), "The fifteen-minute tea break" (P14), "Why we close the library at 21:45" (P15) | category "Study notes" / "College life"; tags | single: T1 disc holds the featured image, T3 meta card with a vertical date | P13–P15 |

Standard screens: home, about, news → journal, article → post 1, category → study-notes, tag → evening-study, newsletter → newsletter, contact → contact.

---

## 5. Colour (token a; reference relations kept, with hue moved toward the row's Chitose green)
| Role | Reference | Ours | Share (home first screen) | Note |
|---|---|---|---|---|
| Base | `#F8F6F3` | `#F5F6F2` | ~55 % | Same lightness (−1 %); the hue is neutralised so the green does not read as cream |
| Panel / disc | `#FFFFFF` | `#FFFFFF` | ~25 % | identical |
| Card tint | `#F1ECE6` | `#EEF0EB` | (cards) | same lightness, green-grey |
| Ink (text, hairlines, borders) | `#000000` | `#141A16` | ~8 % | +4 % lightness, green bias |
| Ticker tint | `#E0D3BF` | `#C9BBA2` (text) / `#E0D3BF` (glow end) | ~1 % | darkened for contrast |
| Muted text | `#787672` / `#999691` | `#787672` / `#999691` | text | identical |
| Glow | orange→green blur ~8 % | `#3E5646 → #E0D3BF` blur, opacity .12 | ~5 % | replaces orange |
| Main Chitose green | — | `#3E5646` | ~3 % (timeline dot, pause button fill on hover, link underline) | row palette |
| Deep green | — | `#26362C` | 0 % in first screen | exam band, footer |
| Accent | — | `#B0763A` | < 1 % | category dots only |

**First-screen saturated share cap: 10 %** (measured target < 5 %; row cap 30 %; check-first-screen ≤ 15 %). No section other than the exam band and the footer has a dark or coloured ground.

## 6. Type (serif direction; token b)
- Latin display: **Newsreader** (variable 300–700, opsz) for headings, numerals, tickers and date stamps. Latin body: **Source Serif 4** (400, 400 italic, 600).
- zh-TW stacks: display `"Newsreader", "Noto Serif TC", serif`; body `"Source Serif 4", "PingFang TC", "Microsoft JhengHei", serif` (body must **not** include Noto Serif TC or JP, per the repo gate).
- ja stacks: display `"Newsreader", "Noto Serif JP", serif`; body `"Source Serif 4", "Hiragino Mincho ProN", "Yu Mincho", serif`.
- Fonts load via **theme.json fontFamilies + fontFace** (woff2 in assets/fonts, including Noto Serif TC / JP subsets made with the Hokuto/Hada workaround). The editor and the front end use identical stacks; copy `shared/inc/editor-lang.php` because style.css uses `:lang()`.
- Scale: H1 hero `clamp(2.75rem,5vw,4.5rem)` 300 lh 1.08 (largest; ≥ 4.25rem satisfied); stamp day 48 px (header) / 120 px (big); H2 `clamp(2rem,3.2vw,3rem)` 300 lh 1.2; H3 card 19 px 600 lh 1.85 (token: card title 18–19 px); section label 13 px 600 ls .1em; ticker 23 px 300 ls .1em; body 16 px lh 1.85 ls .02em; small/tags 11.6 px ls .1em; buttons 14.5 px 600 ls .2em (reference .38em reduced for Latin).
- CJK: sizes ×0.75 on display, body lh 1.85; fr/de `hyphens:auto`.

## 7. Fixed facts (identical on every page and in all 5 languages)
- **Name:** Tochi Academy, evening licence college. **Founded:** 2009 by Ines Marlow. **Address:** 14 Linden Quay, Harbourside District, Westmere (fictional). Email office@tochi-academy.example · phone +00 20 7000 0414.
- **Hours:** classes Mon–Thu 18:45–21:30, Sat 09:30–13:00; office Mon–Fri 12:00–21:30, Sat 09:00–13:30; library until 21:45; closed Sun (except sitting days).
- **Cohorts:** 18 seats each; Autumn: Week 1 Mon 28 Sep 2026 → exam Sun 14 Mar 2027; Spring: Mon 26 Apr 2027 → Sun 17 Oct 2027. Open evening: every second Thursday at 19:00 (next 19 Nov 2026, 3 Dec 2026, 14 Jan 2027).
- **Term flow:** Wk 1 Foundations · Wk 6 Contracts & leases · Wk 12 Valuation & floor plans · Wk 18 Law & disclosure · Wk 22–24 Mock papers → Exam.
- **Fees (7 rows):** Evening Licence Course (24 weeks, 3 evenings) $2,480 · Weekend Intensive (16 Saturdays) $1,940 · Returners' Refresher (8 weeks) $780 · Single Subject Module (6 evenings) $420 · Mock Paper Series (4 timed papers + marking) $240 · Enrolment fee $120 · Open evening: free. Instalments: 3 equal payments.
- **People (7):** Ines Marlow (principal, founder, former conveyancer) · Tomas Reyes (contracts & leases) · Priya Natarajan (property law & disclosure) · Daniel Okafor (valuation & floor plans) · Hana Liu (tax & finance) · Marguerite Achterberg (exam coach, mock papers) · Samuel Brandt (admissions & student office).
- **Stories (4, no pass-rate claims):** Leah Moreau, career changer from hotel management (Autumn 2024) · Omar Haddad, junior at a letting agency · Ruth Abernathy, returner after 12 years · Mateo Silva, weekend-intensive student who works shifts.
- No claims of guaranteed passes, pass rates, awards, media, or real brands.

## 8. Responsive
- **390 px first screen:** header 64 px (wordmark left, menu button right; the date stamp moves *into the flow* as a one-line chip "Next sitting · 14 Mar 2027 Sun" under the ticker; no absolute positioning). Ticker 16 px / 44 px tall. Intro text full width, H1 2.75rem. The disc becomes a **top arc cap**: the slider panel is full width with `border-top-left-radius: 100% 120px` and a 1 px ink top-left arc, so the photo sits below it. Arrows are 40 px under the photo (left/right in a row with the dots). There are **no vertical text, rail, line-art, or absolute labels** in the mobile first screen.
- Rail < 1024 px: hidden; section labels become horizontal dot labels. Card vertical dates < 782 px become horizontal 11 px lines above the card. The T3 card overlap shrinks to 24 % with 16 px insets.
- The college8 dashed columns become every 120 px on mobile.
- **Tables:** at ≥ 782 px the fees table is **full content width** (1180 px). The price column is `white-space:nowrap; text-align:right; width:1%` (auto) and is never cut; the name column wraps. Below 782 px **every** table stacks: each row becomes a block (name 600, then the price on its own right-aligned line, with a dashed rule between rows); no horizontal scroll.
- No horizontal overflow at 390 or 1280 px; the disc and glow are clipped by the KV wrapper.

## 9. Fees table spec
A `wp:table` with class `is-style-tochi-fees`, 3 columns (Programme · What is included · Price), Newsreader 600 20 px lining numerals for prices, 1 px dashed ink row rules and a 1 px solid ink top/bottom. No reveal effects.

## 10. Forms (form contract v1 — `steps/form-contract-v1` exists)
- Copy `pipeline/assets/forms/shippress-forms.php` → `inc/`; CSS/JS → `assets/` unchanged; require it from functions.php.
- **Contact** (`contact`): below the address card, `shippress_form_slot( kind contact )`. The fallback is the literal mailto button (`ob_start`) "Email the student office", href `mailto:office@tochi-academy.example`. The CF7/WPForms form, if present, should use these fields: name*, email*, phone, cohort (select: Autumn / Spring / Weekend / Not sure), message*, consent checkbox*.
- **Open evening** (`open-evening`, booking): the same contact slot with fallback "Email to book a seat" (mailto with subject from `forms_mail_subject`-style key `open_evening_subject`).
- **Newsletter** page + home block 10 + footer: `shippress_form_slot( kind newsletter, email office@tochi-academy.example, label forms_email, submit forms_subscribe, notice forms_mail_notice, subject forms_mail_subject )`. Order: MailPoet (explicit ID) → MC4WP → optional dedicated CF7/WPForms ID. Without plugins, the native mailto POST fallback shows a required email + submit and the notice "Opens your email app. Send the request to subscribe; you are not subscribed yet."
- Tokens: light grounds `--sp-form-accent: var(--wp--preset--color--evergreen)` (#3E5646), `--sp-form-on-accent:#FFFFFF`, `--sp-form-radius:10px` (inputs; submit pill r100 via the theme button style), `--sp-form-focus:#B0763A` (2 px outline, 2 px offset), `--sp-form-surface:#FFFFFF`, `--sp-form-text:#141A16`, border 1 px ink. Dark (footer `#26362C`): surface `rgba(255,255,255,.08)`, text `#F5F6F2`, accent `#E0D3BF`, on-accent `#141A16`, focus `#E0D3BF`. Error `#9B3B2E` (dark: `#F0B8A8`); success `#3E5646` (dark: `#BFD3C4`).
- Five-language copy (en, zh-TW, ja, fr, de, localised not literal): keys `forms_email`, `forms_subscribe`, `forms_mail_notice`, `forms_mail_subject`, `contact_email`, `open_evening_email`, `open_evening_subject`, field labels, consent text, error and success messages. Extract with `L10N_SEMANTIC=1`.
- Forms **never** use sp-reveal and never appear in the home first screen.

## 11. Images (16) and STYLE
STYLE (one string for all): `Documentary photograph, bright high-key natural light with warm evening lamp accents, cool white walls, soft evergreen and pale sand tones, 35mm lens at eye level, f/2.8 shallow depth of field, candid unposed working adults of diverse ages and ethnicities, modern international city interiors, matte finish, fine grain, no text, no logos, no readable writing on papers, screens or signs, no Japanese elements.`

| ID | Subject / composition | Ratio | Used on | Home |
|---|---|---|---|---|
| P01 | Instructor in their 40s at a large wall screen, marking a floor plan (unreadable blue lines) with a stylus, students blurred in front; evening lamps | 16:9 | Home KV slide 1 | ✓ |
| P02 | Two adult students side by side, fingers on the same line of a printed lease (text blurred), laptop closed, mugs | 16:9 | Home KV slide 2 | ✓ |
| P03 | Quiet exam-morning desk: two pencils, eraser, wristwatch, a face-down card, soft daylight, an empty chair | 16:9 | Home KV slide 3; Newsletter header | ✓ |
| P04 | College entrance at dusk, lit ground-floor windows, three adults arriving with work bags | 4:5 | Home block 2; Contact header | ✓ |
| P05 | Woman in her 30s in a blazer taking notes after work, jacket on the chair back | 1.7:1 | Home cohort 1; Courses; Stories | ✓ |
| P06 | Young agent with a tablet measuring an empty bright apartment | 1.7:1 | Home cohort 2; Courses; Stories | ✓ |
| P07 | Man in his 50s with reading glasses, statute book and highlighter, library corner | 1.7:1 | Home cohort 3; Courses; Stories | ✓ |
| P08 | Hands moving a paper tab along a wall term planner (no text), close-up | 3:2 | Home block 5; Courses | ✓ |
| P09 | Small group around a table with scale rulers over floor plans | 3:2 | Home block 5; Calendar header | ✓ |
| P10 | Wide evening classroom from the back: ~18 adults, warm lamps, a blue-hour city window | 21:9, 2000 px | Home parallax band | ✓ |
| P11 | Candidates waiting on a bench in a bright corridor, coats on laps, calm | 4:5 | Home exam band; Stories | ✓ |
| P12 | Five instructors at a long table reviewing marked mock papers, mid-conversation | 3:2 | Home faculty; Instructors header | ✓ |
| P13 | Measuring tape on the floor of an empty flat, a notebook beside it | 1.7:1 | Post 1 + home journal | ✓ |
| P14 | Tea break in a common room, students talking by the window | 1.7:1 | Post 2 + home journal | ✓ |
| P15 | Student library at night, a single lamp, a stack of books | 1.7:1 | Post 3 + home journal | ✓ |
| P16 | Principal (woman in her 60s) by a tall window holding a folder, natural light | 4:5 | About header | — |
| P17 | Visitors being shown an empty classroom by a staff member (open evening) | 16:9 | Open evening header | — |
| P18 | Hands with a paper calendar and a pen at a desk, instalment planning | 16:9 | Fees header | — |
No cut-outs; ≤ 300 KB; ≤ 2000 px; webp.

## 12. Scroll effects (sp-scroll, from buncomo; hero none)
| Effect | Class | Where | Source | Trigger / timing / easing |
|---|---|---|---|---|
| Ticker loop | `sp-marquee` | Ticker 1 (all pages), ticker 2 (home 4, Courses, Journal) | buncomo `loop` keyframes | in-view play, 40 s / 32 s linear infinite, pause on hover |
| Heading mask wipe-up | `sp-reveal sp-reveal--mask` | H2 and section labels of home blocks 2, 3, 5, 7, 8, 9 and inner-page H2s | buncomo `u-mqw-up` | IO on enter, `--sp-dur:.7s`, `cubic-bezier(.455,.03,.515,.955)` |
| Card rise with stagger | `sp-stagger` + `sp-reveal--up` | T3 card rows (home 3, 9; Courses; Stories; Journal) | buncomo card entrance | IO ~15 %, 0.7 s, 80 ms stagger, `--sp-dist:24px`, `cubic-bezier(.22,1,.36,1)` |
| Count-up | `sp-count` | Week numbers (home 5), figures (home 7) | ours | 1.4 s ease-out |
Never on: the hero, forms, the fees table, legal text, or ticker children.

## 13. Parallax (required)
- **Home block 6, the evening band:** an outer Cover with `sp-parallax` and `style="--sp-par:10%"` (mobile ≤ 781 px: `--sp-par:6%`). The background is the **P10** cover image (`.wp-block-cover__image-background`). The foreground is a white bordered card (it does not move). Reference counterpart: buncomo's continuously drifting tickers and slider fade give a sense of motion behind still text. We express this as the photo drifting behind a still card.
- Second instance: **Calendar** page header disc photo P09, `--sp-par:6%`.
- Reduced motion, `?sp-static`, and the editor are all static. `check-parallax.mjs` requires a shift of ≥ 6 px on desktop and mobile.

## 14. Similarity table (target 80 %)
| Dimension | Reference (buncomo) | Ours |
|---|---|---|
| Base / panel / ink | #F8F6F3 / #FFF / #000 | #F5F6F2 / #FFF / #141A16 |
| First-screen saturated share | ~8 % glow | < 5 % glow (#3E5646 → #E0D3BF, .12) |
| Hero composition | text left x 87 w 391–425, disc arc x 533, slider 484 px | same values |
| Disc | ~1100 px, 1 px black arc, bleeds top/right | ~1100 px, 1 px ink arc, bleeds top/right |
| Ticker | 63 px, 23 px/300 caps tan, ink hairlines | 63 px, 23 px/300 caps #C9BBA2, ink hairlines |
| Date stamp | 29 / 48 / 16 / 21 px bold | 29 / 48 / 16 / 21 px Newsreader 600 |
| Cards | 1.7:1 r16 photo, r10 1 px ink card over lower 40 %, vertical 11 px date, gap 70, card 332 | identical values |
| Pills / arrows | r100 1 px, 287 × 48; 48 px circle arrows | identical |
| Rail | 87 px, 1 px right border, vertical label | identical |
| Section label | dot + caps + dashed 1 px rule | identical |
| Section padding | ~97 px | 97 px |
| Motion | ticker loop, mask wipe cubic-bezier(.455,.03,.515,.955) .6–.8 s, slider fade, rotating PAGETOP | same (sp-marquee, sp-reveal--mask .7 s, CSS crossfade .8 s, PAGETOP 12 s) |
| Type | Be Vietnam Pro + Noto Sans JP | Newsreader + Source Serif 4 (row font direction: serif — the deliberate difference) |
| Imagery | documentary event photos + line-art character | documentary class photos + our own small line-art mark |

## 15. Home acceptance checklist
- [ ] The first screen at 1440 × 900 shows all 6 KV items (§2.3), with P01 in the slider under `?sp-static`.
- [ ] The disc arc is a crisp 1 px ink line, ≥ 55 % of the width, bleeding top/right; there is no horizontal scroll.
- [ ] Ticker 1 sits between two ink hairlines and loops (`?sp-motion`); the date stamp shows 03 / 14 / 2027 SUN.
- [ ] H1 ≥ 4.25rem (4.5rem at 1440); exactly one top menu (centred).
- [ ] The timeline line is visible in the hero (Wk 1 → Exam, dot at week 7).
- [ ] 15 image positions, no repeats; ≥ 380 English words; ≥ 3 narrative paragraphs ≥ 20 words.
- [ ] T3 cards overlap their photos with vertical dates; the rail and dashed labels are visible on desktop.
- [ ] The parallax band P10 moves ≥ 6 px desktop + mobile; reduced motion = 0.
- [ ] The fees table is full width at 800/1280, price nowrap right-aligned, and stacked at 390.
- [ ] At 390 px: no vertical/absolute labels in the first screen, no text overlap, no overflow.
- [ ] The newsletter slot in home block 10 and the footer shows email + submit without plugins; no reveal on forms.
- [ ] Fees, hours, dates, and people match §7 everywhere.
- [ ] First-screen saturated share ≤ 10 %.
- [ ] auto-gates.mjs en pass; check-editor-fonts pass.
