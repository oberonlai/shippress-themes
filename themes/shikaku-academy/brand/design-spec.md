# Shikaku Academy: design spec (stage B, binding for implementation)

Slug `shikaku-academy`, online certification academy for project-management and IT credentials (row b7-7, type education, `online_course`: Tutor LMS free + WooCommerce checkout). Main reference **HTA education programme** (https://hta-program.jp/, S5-Style education-healthcare); secondary **Digital Hollywood "Honka Re:Frame"** (https://school.dhw.co.jp/p/honka_reframe, motion timing only, its purple not used). Measurements: `reference-tokens.md` (cited below as `tok(a)…tok(g)`). Borrow structure, technique, colour relationships and numbers only. No copy, photos, logos, 3D characters.

Fixed brand facts (every page, all five languages): **Shikaku Academy**, founded **2017**, recording studio and support office at **Kade 14, 3072 Rotterdam, Netherlands** (fictional address). Fully online; prices in **USD** in every language. No pass-rate claims, no awards, no real certification bodies or trademarks named: courses "prepare for widely recognised project-management and IT credentials".

---

## 1. Signature techniques (three; all obvious at a glance, none diluted)

### T1. Paper-strip headline standing left of a photo that stands on the fold (HTA hero, `tok(e)` hero, `tok(f)` vertical headline)
- Reference: three pale paper strips `#F5F6F7` (no radius), each hugging one phrase of the headline in saturated blue heavy type, set in the left third at x=48/146/244, y=128; 3D figures fill the right two-thirds and are cut by the viewport bottom (they "stand on the fold"); a plain text nav with a `[ Navigation ]` bracket label sits at the far right; a dashed 108px "Scroll Next" ring bottom-left; a tone-on-tone 200px ghost word runs behind at the bottom.
- Ours (Latin adaptation): the strips become **three horizontal strips stacked and stepped**, because vertical-rl Latin is unreadable and forbidden on mobile. Each strip is an inline block: background `#F6F7F8`, padding `0.12em 0.28em`, radius 0, glyph colour accent `#4E7A93`, Libre Baskerville 700, `font-size: clamp(2.6rem, 5.2vw, 5.25rem)` (preset `display`, 84px at 1440 ≈ HTA 86px glyph), line-height 1.18, strips 10px apart vertically, each strip indented **+0 / +48 / +96px** (the HTA columns step 98px apart; we step half that horizontally). en text: `Earn the credential` / `your next role` / `asks for.` (3 strips, never 2, never 4).
- Layout at 1440: three zones in a 1440 full-bleed hero, height `min(100svh, 900px)`, ground `#E9EDF0`. Zone A x=48–560: strips start y=128, then lead paragraph (Work Sans 1.125rem / 1.8, max 30ch, ink) and two buttons (pill radius 1000px: solid accent "Browse courses", outline ink "Compare plans"). Zone B x=520–1180: photo **P01** `object-fit: cover`, top y=96, bottom flush with the hero bottom (no bottom margin, no radius, no shadow) — the learner's desk and arms are cut by the fold. Strips overlap the photo's left edge by ≤40px (z-index above). Zone C x=1220–1392: `[ Courses ]` bracket label (Work Sans 0.6875rem, ls .05em, muted) and the six course names as a plain right-column text list (1rem, row gap 15px ≈ HTA 31px rows), no boxes. Ghost word `certify` Work Sans 800, 12.5rem, ls 4px, colour `#F6F7F8`, behind everything, baseline 80px above the hero bottom, bleeding off both edges. Dashed ring 108×108, 1px dashed `#12222D` at 35% opacity, x=32 from left, 32 from bottom, text "Scroll / Next" 0.625rem centred.
- Mobile 390: strips stay horizontal, `font-size: 2.6rem`, indents 0/16/32px, **in normal flow** (no absolute positioning, no writing-mode); photo P01 below the buttons, aspect 4:5, full width; Zone C list hidden (it lives in the menu); ring hidden; ghost word hidden.
- Not to dilute: strips must be visibly paler than the ground (`#F6F7F8` on `#E9EDF0`) and hug the text; glyphs accent, not ink; photo must touch the hero bottom edge; ≥5rem at 1440.
- Inner pages: every inner page header uses 1–2 strips (same style, `clamp(2.4rem, 4.4vw, 4.25rem)`) left, with a 3:2 photo on the right 5/12 standing on the header's bottom edge (same "on the fold" crop) and the `[ Page name ]` bracket label above. Section titles inside pages use one strip at `clamp(1.9rem, 3.2vw, 2.75rem)`.

### T2. Numbered-tab course cards in a descending ladder (HTA lesson cards, `tok(d)`, `tok(e)` lesson cards, `tok(f)` number tab)
- Reference: three cards 400×657 in a 1280 container (gap 40), radius 10, 1px `#FFFFFF` border, title band `#F5F6F7` on top (radius 10 10 0 0, padding-top 30), square image 380×380 below; a "01" tab 110×80 in ground colour sits across the top-right corner so it bites out of the card; cards drop 40px each left→right (y 4064/4104/4144).
- Ours (home §4, Courses page, Instructors page, Stories page): card width 1/3 of 1280 minus gap 40 (≈400), **margin-top 0 / 40 / 80px** on desktop (wrap row restarts the ladder). Card: radius 10px, `border: 1px solid #FFFFFF`, background transparent; top band `#F6F7F8` padding 30px 24px 22px holding: tag pill (0.75rem, ls .05em, accent text on `#DCE7EE`, height 29px, padding 8/15/9, radius 1000px), title Libre Baskerville 1.625rem / 1.4 / ls .02em, one-line meta (lessons · hours) muted 0.875rem; below: square photo 1:1, inset 10px from the card border, radius 0 0 6px 6px; under the photo price line Work Sans 600 1.125rem `nowrap` + "View course →". Tab: 110×80, background `#E9EDF0` (ground), positioned `top:-1px; right:28px`, Libre Baskerville 2rem accent "01", it covers the card border so the outline is visibly notched.
- Mobile: single column, ladder offsets 0, tab 88×64; no horizontal scroller.
- Not to dilute: ladder offset 40px steps must be visible at ≥1024px; tab must be ground colour and cut the border (not a coloured badge); white 1px border stays.

### T3. Fan of three rotated photo cards (HTA educational cards, `tok(e)` educational cards)
- Reference: three cards 367×530 / 383×540 / 450×574 rotated **+5° / −7° / +16°**, overlapping, offsets y −190 / 0 / +120 on the right of the section, text on the left.
- Ours (home §5 "Inside the lesson player", How it works page, About page, Lesson player sample page aside): right 6/12 of a 1280 container, a positioned box 620×640 at 1440 (section `overflow-x: clip`). Geometry in percentages of the box so it never exceeds the column: card 1 (P06) width 48%, left 0, top 4%, rotate +5°; card 2 (P07) width 50%, left 27%, top 15%, rotate −7°; card 3 (P08) width 58%, left 42%, top 26%, rotate +16° (≈ 300/312/360px wide at 1440; HTA 367/383/450 scaled 0.8). Each card: photo 3:4, radius 10, 1px `#FFFFFF` border, 10px `#F6F7F8` padding (paper frame), no shadow except `0 4px 4px rgba(18,34,45,.10)` (HTA menu pill shadow, `tok(d)`). Hover (desktop only): card straightens to 0° in 550ms `cubic-bezier(.215,.61,.355,1)` (`tok(g)` long hover).
- Mobile 390: box width 100%, height 118vw, same three rotations (keep +5/−7/+16), percentages as above; section `overflow-x: clip` so nothing scrolls sideways.
- Not to dilute: all three rotations exact (no "±2° to be safe"), cards must overlap by ≥20% width.

### Supporting system (from HTA, used everywhere, not counted as signatures)
- Bracket labels `{ About the academy }` above every section title (Work Sans 0.6875rem, ls .05em, muted `#6E7F8A`) — `tok(b)` micro label, `tok(f)`.
- Ghost words 12.5rem / 800 / `#F6F7F8` behind: hero `certify`, about `learn`, support band `support` (max 3 on home).
- Outlined panel: 1px `#FFFFFF` border radius 10 on ground, no fill (HTA "What's HTA" card), used for About intro and FAQ.
- Pill buttons radius 1000px, MENU pill accent fill with shadow `0 4px 4px rgba(18,34,45,.10)`.

---

## 2. Home page (en first; order binding)

| # | Block | Purpose / layout | Photo | Copy |
|---|---|---|---|---|
| 1 | Hero (T1) | three zones, see T1 | P01 | headline 3 strips + 34–40 word lead |
| 2 | Course-name marquee | full-bleed band 64px tall, ground `#E9EDF0`, top/bottom 1px `#FFFFFF`; course names Libre Baskerville italic 1.75rem ink 70% separated by a 6px accent dot; `sp-marquee` | — | 6 course names |
| 3 | About the academy | outlined panel (1px white r10) 1280 wide, inside: left 4/12 title strip "A quieter way to get certified" + bracket label; middle 5/12 three paragraphs (Work Sans 1.25rem/1.8 ≈ HTA 20/36); right 3/12 photo **P02** 4:5 radius 10 breaking the panel top by 30px (HTA hexagon photo pokes out; we keep the poke-out, plain rounded rect). Ghost word `learn` behind | P02 | 3 paragraphs, ~150 words |
| 4 | Course ladder (T2) | full-width giant section title "Courses" in accent, Libre Baskerville 700 `clamp(3rem, 9vw, 7.5rem)` left-aligned spanning the container (HTA 117px artwork title) with `{ Six courses, two pathways }` above; then 3 ladder cards (01 Project Delivery Foundations, 02 Agile Practitioner Track, 04 Cloud Fundamentals) + text link "All six courses →" | P03, P04, P05 | card copy 25 words each |
| 5 | Inside the lesson player (T3) | left 5/12: strip title, 2 paragraphs, then the 4-step process as a plain numbered list (01–04 in accent serif, one line each; not cards); right 6/12: fan | P06, P07, P08 | ~110 words |
| 6 | Plans: single vs bundle (page_structure plan-comparison) | full container comparison table (see §5), columns: feature / Single course / Pathway bundle / All-access; header row: plan name + price `nowrap`; recommended column (bundle) with a 2px accent top rule and tint `#DCE7EE` header cell only. Under it: one line "Prices in USD, VAT shown at checkout." + CTA pill "Choose a plan" | — | 8 feature rows |
| 7 | Faculty | split: left 7/12 photo **P09** 16:9 radius 10; right 5/12 bracket label + strip title "Taught by practitioners" + list of 6 instructor rows (name in serif 1.25rem, subject muted, 1px `#FFFFFF` row rules, ≈ HTA info rows 167px tall reduced to 72px). Not a portrait grid | P09 | 6 rows + 40-word intro |
| 8 | Student stories | 3 horizontal rows, each: quote (Libre Baskerville italic 1.5rem/1.5) left 8/12, name + former role → new role right 4/12; first row carries photo **P10** 4:5 at 3/12 left of quote. `sp-stagger` rows | P10 | 3 × 45 words |
| 9 | Support band | ground band with ghost word `support`, left: support hours and live Q&A time; right: two pills "Ask a question" / "Log in to My courses"; full width, no photo | — | ~50 words |
| 10 | Footer | `#F6F7F8` (HTA footer surface), 160/80 padding (`tok(c)`), 4 columns: brand + address, Courses, Academy, Support; legal line | — | |

Photo positions on home: P01, P02, P03, P04, P05, P06, P07, P08, P09, P10 = **10** (≥8). Home English word count ≥ 450, ≥3 narrative paragraphs (§3 has three).

### Comparison with recent homes (must differ)
| Theme | Order | Shikaku differs because |
|---|---|---|
| Kanade | hero+gateway · intro split · programmes mosaic · calendar · day strip · fees · people · stories · visit | no gateway, no mosaic; courses are a stepped ladder; plan comparison table, not a fee list; no visit block (online) |
| Yamabiko | hero · catalogue masonry · veil band · spec sheet · tests spread · price list · stories staggered · visit | no masonry or veil; marquee band instead; rotated fan is new |
| Sora | hero+info bar · FAQ arch · director letter · three paths · interlude · 90 days · fees · people split · stories rows · visit | no arch, no letter, no info bar; people are text rows beside one photo |
| Kazu | oversized serif + framed window · letter · learn chapter · stat cards · how it works · student work · preview · price card · FAQ · close | (closest industry) no framed window, no stat cards, no single price card: three-plan comparison table; hero is paper strips + photo standing on fold; giant left-aligned accent section title |

---

## 3. First screen (1440×900 and 390×844)
- Desktop: as T1. Visible above the fold: header (48px square logo mark accent with "SA" white serif at x=32,y=32; wordmark Libre Baskerville 1.125rem; right: "Log in" text link + MENU pill accent), three strips, lead, two buttons, photo P01 touching the bottom, right course list, ring. No table, form or search.
- Header is a single top bar (no second nav). Menu pill opens an overlay with the page list; on desktop ≥1024 also show 5 inline links left of the pill (Courses, Plans, How it works, Instructors, Support).
- Saturated pixels ≤ **15%** (target ≤10%; HTA measured 13.1%). Accent only on strip glyphs, logo square, one button and the MENU pill. P01 must be high-key, neutral clothes.
- Mobile 390: header 64px, strips (2.6rem) in flow, lead, buttons stacked full width, photo begins within the first screen. No vertical text, no absolutely positioned labels over text.

## 4. Inner pages (≥8; each keeps T1 page head; T2/T3 noted)
1. **Courses** (`/courses`, Tutor archive styled) — T1 head (photo P07), bracket label, six courses as T2 ladder (two rows of three); filter pills (PM / IT) as plain pills, no search box in the first screen. Card photos: 01 P03, 02 P04, 03 P13, 04 P05, 05 P11, 06 P16.
2. **Course page** (Tutor single, sample "Project Delivery Foundations") — T1 strip title; right sticky price box (price `nowrap`, "Buy course" → WooCommerce add-to-cart/checkout), curriculum accordion (500ms `cubic-bezier(.86,0,.07,1)`, `tok(g)`), instructor row, what you get list. Photo P03 wide header.
3. **Lesson player** (Tutor lesson) — clean: video 16:9 left 8/12, lesson list right 4/12 with number tabs (T2 tab miniature 44×32 ground colour); progress bar accent 4px. No decorative photos inside the player.
4. **Plans & pricing** — T1 head (P13), full comparison table (§5) + the six-course price list table (§10) + 4 billing FAQ items in outlined panels. No fan, no reveal on tables.
5. **How it works** — T1 head (P08), the 4 steps as alternating text blocks with numbers 01–04 in tabs (T2 tab), T3 fan (P06, P07, P16), live Q&A schedule.
6. **Instructors** — T1 head (P09), seven people as T2 ladder cards without photos (band: name + subject; body: 50-word bio and courses taught; tab numbers 01–07). P09 is the only photo.
7. **Student stories** — T1 head (P14), three stories as T2 ladder cards: 01 Lucía with P10, 02 Jonas text-only (P14 already in head), 03 Noor text-only; each card: before → after role, 120-word story, course taken, quote.
8. **About** — T1 head (P15), founder paragraphs (Helena Marsh) inside an outlined panel, T3 fan with P02 / P16 / P12, facts list (founded 2017, Kade 14 Rotterdam, team of 7). No timeline.
9. **Support & contact** — T1 head (P12), support hours, live Q&A, contact form (no reveal), address Kade 14.
10. **FAQ** — outlined panels, 12 questions in 4 groups (Buying, Learning, Access, Certificates).
11. **My courses** (Tutor dashboard), **Cart / Checkout** (WooCommerce) — styled: ground background, white 1px bordered panels r10, accent buttons, tables stack on mobile.

Rule: no photo appears twice on the same page. Signature carry-over: T1 on all inner pages; T2 on Courses, Instructors, Stories, How it works (tabs), Lesson player (mini tabs); T3 on How it works and About (and home). ≥4 inner pages carry T2 or T3.

## 5. Tables and responsive rules (hard)
- Plan comparison and course price list: `width: 100%` of the 1280 container at ≥782px (alignwide, never a shrink-wrapped table); `table-layout: fixed`; first column 34%; price cells `white-space: nowrap; text-align: right; font-variant-numeric: tabular-nums`; padding 18px 20px; row rules 1px `#FFFFFF`; header row background `#F6F7F8`. Verified at 800 and 1280 widths: no cut price, no horizontal overflow.
- <782px: every table becomes stacked cards (`display:block` rows, `td::before { content: attr(data-label) }`), price on its own line right-aligned nowrap. Applies to price list, comparison, WooCommerce cart, Tutor tables.
- 390px first screen: no `writing-mode`, no absolutely positioned label over text; marquee does not cause sideways scroll; fan section `overflow-x: clip`.
- No reveal classes on tables, forms, price lists, legal text.

## 6. Colour (`tok(a)`; reference hex kept within ±5% lightness; only main hue changed)
| Role | HTA | Ours | Share | Note |
|---|---|---|---|---|
| Ground | #E8ECEF | **#E9EDF0** | ~60% | body, bands |
| Surface | #F5F6F7 | **#F6F7F8** | ~12% | strips, card bands, footer, ghost words |
| Ink | #001F2D | **#12222D** | ~8% | text, lines (+4% lightness, softer for long reading) |
| Muted | #7F8E96 | **#6E7F8A** | <2% | meta, bracket labels (darker for AA contrast on ground: 4.6:1) |
| Main / accent | #0399E0 | **#4E7A93** hanada | ~4% | strip glyphs, giant section titles, pills, tabs numerals |
| Tint | #E6F5FC | **#DCE7EE** | <2% | tag fills, recommended plan header |
| Line | #FFFFFF / #CCD2D5 | **#FFFFFF / #C9D1D6** | — | card borders, row rules |
| Photo | 25% | ~16% first screen | | |
Reason for the main change: row b7-7 mandates the muted hanada #4E7A93 (quiet palette, accent never full-bleed); HTA's #0399E0 is too saturated for a certification academy against "quiet palette" rule. Relationship (cool grey ground, paler paper surface, deep blue-black ink, single blue accent) is kept exactly. Hover accent `#3F6A82`. No beige.

## 7. Type (`tok(b)`; root 16px)
- Display: **Libre Baskerville** 400/700 (OFL). Body/labels: **Work Sans** 400/500/600 (OFL). zh-TW/ja headings Noto Serif TC/JP at 0.75× size, body lh 1.85.
- theme.json font sizes: `small` 0.875rem · `medium` 1rem · `large` 1.25rem · `x-large` 1.625rem · `xx-large` clamp(1.9rem, 3.2vw, 2.75rem) · `huge` clamp(2.4rem, 4.4vw, 4.25rem) · `display` clamp(2.6rem, 5.2vw, 5.25rem) · `giant` clamp(3rem, 9vw, 7.5rem). Max ≥4.25rem ✔.
- Body 1rem / 1.8 / ls .02em; about paragraphs 1.25rem / 1.8 / ls .02em (HTA 20/36); nav 1rem / ls .05em (HTA 16/0.8); card title 1.625rem / 1.4 (HTA 26/36.4; serif ls .02em instead of .06em because Baskerville is wide); H3 1.25rem / 1.4; info text 1rem / 1.4 muted; tags 0.75rem / ls .05em; micro label 0.6875rem / ls .05em (HTA 11/0.55).

## 8. Spacing, radius, shadow (`tok(c)`, `tok(d)`)
- Container 1280 (`wideSize`), content 760; side padding 80px at 1440, 20px at 390.
- Section spacing: 240px top on desktop between major blocks (HTA lesson 240), 120px at 390. Hero → marquee 0. Support band padding 140 top (HTA CTA 140). Footer 160/80.
- Radius: cards/panels/photos 10px; pills 1000px; strips 0; tables 0.
- Borders 1px `#FFFFFF` on ground. One shadow only: `0 4px 4px rgba(18,34,45,.10)` (MENU pill, fan cards).

## 9. Photos (16, one STYLE string, documentary, no cut-outs)
STYLE: `High-key bright documentary photograph, natural window daylight, soft shadows, cool neutral palette of white, pale grey and muted slate blue, modern international setting, diverse adults, candid unposed moment, 35mm lens, shallow depth of field, clean uncluttered background, no text, no logos, no brand marks, screens show only soft blurred shapes, no Japanese elements.`

| ID | Subject / composition | Ratio | Used (page → block) | Home |
|---|---|---|---|---|
| P01 | Adult learner (30s) at a pale desk by a tall window, laptop and paper notebook, three-quarter from side, desk edge runs to the bottom of frame | 3:4 | Home hero | ★ |
| P02 | Founder Helena Marsh (50s) standing at a high table reviewing printed course outlines (blank), soft smile | 4:5 | Home about; About fan | ★ |
| P03 | Hands arranging blank sticky notes on a whiteboard in a planning session | 1:1 | Home card 01; Courses card 01; Course page header | ★ |
| P04 | Two colleagues at a task board, stand-up conversation | 1:1 | Home card 02; Courses card 02 | ★ |
| P05 | Laptop on a desk with an abstract blurred cloud-diagram-like screen, coffee cup, notebook | 1:1 | Home card 03; Courses card 04 | ★ |
| P06 | Laptop on a kitchen table playing a blurred lesson video, evening study | 3:4 | Home fan 1; How it works fan | ★ |
| P07 | Headphones on an open notebook with abstract handwriting marks, pen | 3:4 | Home fan 2; How it works fan; Courses header | ★ |
| P08 | Learner on a tablet on a commuter train seat, daylight | 3:4 | Home fan 3; How it works header | ★ |
| P09 | Instructor recording in a small bright studio, microphone, softbox | 16:9 | Home faculty; Instructors header | ★ |
| P10 | Former learner (Lucía) leading a short meeting at a project site office | 4:5 | Home stories row 1; Stories card 1 | ★ |
| P11 | Hands patching network cables into a panel, clean rack | 1:1 | Courses card 05 | |
| P12 | Support team member with headset at a bright desk | 3:2 | Support header; About fan | |
| P13 | Live Q&A on a laptop video call (blurred faces on screen), learner taking notes | 1:1 / 3:2 | Courses card 03; Plans header | |
| P14 | Learner (Jonas) leaning back relieved at desk after a mock exam, laptop closed | 4:5 | Stories header + card 2 | |
| P15 | Modern brick-and-glass waterside office exterior, morning, no signage | 3:2 | About header; Contact | |
| P16 | Flat lay of index cards (blank), pen, glasses, tablet | 1:1 | Courses card 06; How it works fan; About fan; FAQ | |
Rules: no photo twice on one page (Courses uses P07 header + P03/P04/P13/P05/P11/P16 cards; How it works uses P08 header + P06/P07/P16 fan; About uses P15 header + P02/P16/P12 fan; Stories P14 header, card 01 P10, cards 02–03 text-only). Max 300 KB, ≤2000px, regenerate any with text/logos/broken hands.

## 10. Fixed facts (identical on home, inner pages, five languages)
**Courses (price list, 6)**
| # | Course | Track | Lessons | Hours | Price |
|---|---|---|---|---|---|
| 01 | Project Delivery Foundations | PM | 24 | 18 h | $149 |
| 02 | Agile Practitioner Track | PM | 20 | 15 h | $169 |
| 03 | Advanced Project Leadership | PM | 32 | 26 h | $229 |
| 04 | Cloud Fundamentals | IT | 22 | 16 h | $159 |
| 05 | IT Service Management Essentials | IT | 26 | 20 h | $179 |
| 06 | Network & Security Basics | IT | 28 | 22 h | $189 |
**Plans (comparison)**: Single course — from **$149**, one course, 12 months access · Pathway bundle — **$429**, three courses of one track (PM or IT), 18 months access · All-access — **$690**, all six courses, 24 months access. Rows: courses included, access period, mock exams (1 per course / all in track / all), live Q&A (monthly / weekly / weekly), study planner (✓ all), certificate of completion (✓ all), instructor feedback on 2 assignments (— / ✓ / ✓), refund 14 days if <20% watched (✓ all).
**People (7)**: Helena Marsh (founder, director of studies) · Tomasz Wierzbicki (PM lead instructor; courses 01, 03) · Amara Osei (agile; course 02) · Rafael Quintero (cloud; course 04) · Ingrid Solberg (service management; course 05) · Daniel Mwangi (network & security; course 06) · Priya Raman (learner support lead).
**Stories (3)**: Lucía Ferrer, operations coordinator → project coordinator (bundle PM) · Jonas Becker, help-desk analyst → service desk lead (course 05) · Noor Haddad, returning to work → cloud support associate (course 04). No pass rates or salary claims.
**Process (4)**: 01 Choose a course or plan → 02 Pay at checkout (card) → 03 Learn in the lesson player, at your pace → 04 Take the mock exam and download your certificate of completion.
**Place / hours**: Kade 14, 3072 Rotterdam, Netherlands. Learner support Mon–Fri 08:00–18:00, Sat 09:00–13:00 (CET). Live Q&A Wednesdays 19:00 CET. Founded 2017. Email support@shikaku-academy.example.

## 11. Scroll (sp-scroll; hero gets no reveal)
| Effect | sp class | Where | Source | Trigger / time / easing (CSS vars) |
|---|---|---|---|---|
| Fade-up stagger | `sp-stagger` parent + `sp-reveal sp-reveal--up` children | Home §4 ladder cards, §7 instructor rows, §8 story rows; Courses / Instructors / Stories ladders | HTA js-trigger (`tok(g)`) | IntersectionObserver enter; `--sp-dur:1.1s; --sp-dist:15px; --sp-ease:cubic-bezier(.23,1,.32,1)`; stagger delays 0/.14/.28/.42s via `--sp-delay` |
| Wipe on section title strips | `sp-reveal sp-reveal--wipe` on the wrapper of the strip/giant title (clip on child) | Home §3, §4 giant "Courses", §5, §7 titles; inner page section titles (not page-head strips) | HTA js-masks-v-h top→bottom | enter; `--sp-dur:1.2s; --sp-ease:cubic-bezier(.86,0,.07,1)` |
| Marquee | `sp-marquee` | Home §2 course-name band only | HTA looping slider (speed .5) | continuous linear; keep default 30s → set 40s for calm pace |
Not used: Lenis (forbidden), DHW letter tiles (no hero reveal; would compete with T1). Tables, forms, fan cards (rotated transforms) get no reveal; fan section uses only `sp-reveal--up` on its left text column.

## 12. Similarity table (target ~80%)
| Dimension | HTA | Shikaku |
|---|---|---|
| Ground / surface / ink | #E8ECEF / #F5F6F7 / #001F2D | #E9EDF0 / #F6F7F8 / #12222D |
| Accent & share | #0399E0 ~7% | #4E7A93 ~4% (row-mandated hue) |
| Saturated first screen | 13.1% | ≤15% (target ≤10%) |
| Hero composition | 3 paper strips left third, art right 2/3 on the fold, bracket nav right, dashed ring, ghost word | same, strips horizontal stepped, documentary photo |
| Headline size | 86px glyph | 84px (5.25rem) |
| Section titles | full-width 117px accent artwork | giant 7.5rem accent serif left |
| Cards | 400×657 r10, 1px white, #F5F6F7 band, square image, 110×80 ground tab, −40px ladder | identical numbers |
| Fan | +5° / −7° / +16°, overlapping | identical rotations, % geometry |
| Radius / pills / shadow | 10 / 1000 / 0 4 4 .10 | 10 / 1000 / 0 4 4 .10 |
| Labels | `[ Navigation ]` 11px .05em | `{ … }` / `[ … ]` 11px .05em |
| Ghost word | 200px 800 tone-on-tone | 12.5rem 800 #F6F7F8 on #E9EDF0 |
| Spacing | container 1280, section 240, CTA 140, footer 160/80 | same |
| Motion | fade-up 1.1s .23,1,.32,1 15px 140ms; mask 1.2s .86,0,.07,1; slider | same via sp-* vars |
| Hover | 290ms / 550ms .215,.61,.355,1 | same |
| Type | gothic + Hanken | Libre Baskerville + Work Sans (row fonts) |

## 13. Home acceptance checklist
- [ ] Hero: three stepped paper strips (paler than ground) with accent glyphs ≥5rem at 1440; P01 touches the hero bottom; bracket course list right; dashed ring; ghost word.
- [ ] 390px: strips horizontal in flow, no vertical text, no overlapping labels, no sideways scroll (auto-gates pass).
- [ ] Ladder: 3 cards with visible 40px steps, ground-colour tabs notching the white border.
- [ ] Fan: rotations +5/−7/+16 overlapping, clipped, no overflow.
- [ ] Plan comparison table: full container width at 800 and 1280, prices nowrap right-aligned; stacked on mobile; prices equal §10.
- [ ] ≥8 images (10), none repeated on the page, all from the STYLE; no text/logos in photos.
- [ ] ≥450 English words, 3 narrative paragraphs in About; no guarantees/pass rates.
- [ ] First-screen saturated pixels ≤15%; max font size preset ≥4.25rem.
- [ ] sp-stagger/up on ladder, instructor rows, stories; wipe on section titles; marquee band; nothing on hero, tables, forms; `?sp-static` all visible, `?sp-motion` no leftovers.
- [ ] One top bar only, no sidebar; Woo/Tutor buy path reachable from course card "View course →".
