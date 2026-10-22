# Kazu Data Course: design spec (stage 1, binding for implementation)

Slug `kazu-data-course`, solo-instructor online course (education). Row b7-3: single-column longform, framed-window hero, top-bar nav, real high-key photography, accent Edo purple `#6E5A7E`, Lora + Inter.
Commerce: Tutor LMS (free) sells through WooCommerce checkout; buyer logs in and watches lessons on the site (fallback LearnPress/Sensei only if free Tutor cannot sell via WooCommerce; record in notes).
References (see `reference.md`): **R1** Musashino Art University interview site https://mauinterview.musabi.ac.jp/ (main: type, framed window, watermark, colour ratio) and **R2** Nippon Keizai University applicant site https://mycampus.jue.ac.jp/ (structure only: offset-edge card, pill-label stat card). Borrow structure, technique and colour relationships only. No copy, photos or logos. Nothing from R2's sidebar, pastel fields or illustrations.

---

## 0. Fixed brand facts (every page, all five languages; never change)

- **Kazu Data Course**, founded **2019**, one course studio in **Rotterdam, Netherlands** (fictional address: Kadekamer 14, 3011 AB Rotterdam). Lessons are online; the studio is where they are recorded.
- Instructor: **Kazu Moreno** (she/her). 11 years as a working analyst in logistics and public-health reporting before teaching (fictional). No awards, no media, no employer brand names.
- Currency **EUR** in every language. Write `€290` in en / zh-TW / ja, `290 €` in fr / de. Same numbers everywhere.
- Tone: plain, warm, exact. "You" voice. No promises of jobs, salaries or results.

### People (8, fixed names and roles)
| Name | Role | Where they appear |
|---|---|---|
| Kazu Moreno | Instructor, writes and records every lesson | Home hero, letter, close; About; Course page |
| Priya Raman | Teaching assistant, reviews student projects | Home "how it works"; About; FAQ |
| Tomás Ibarra | Course producer (video, sound, captions) | About |
| Amara Osei | Student; operations coordinator, warehouse returns | Home story 1; Student work |
| Lena Hoffmann | Student; fundraising at a small nonprofit | Home story 2; Student work |
| Daniel Kowalski | Student; owns a neighbourhood bakery | Home story 3; Student work |
| Sofia Marchetti | Student; HR generalist (quote only) | Student work; Pricing (team licence quote) |
| Jae-won Park | Student; public-library programme lead (quote only) | Student work; FAQ |

### Stories (3, same on home and Student work)
1. **Amara Osei — "Why are returns up?"** Joined three return logs in SQL, found that one size chart caused most repeat returns; wrote a one-page memo for her team. Project from Module 3.
2. **Lena Hoffmann — "Who stops giving, and when?"** Cleaned five years of donation exports in a spreadsheet, then pandas; a simple retention chart her board now reads each quarter. Module 4 + 5.
3. **Daniel Kowalski — "How many loaves on a rainy Tuesday?"** Daily sales vs. weather and weekday; a plain weekly baking plan that cut leftover bread he could see on the shelf. Final project, Module 6.
(Outcomes described qualitatively; no percentages.)

### The course (fixed numbers)
- Course: **Practical Data Analysis** — **6 modules, 48 lessons, 14 hours of video, 5 reviewed projects**, access **24 months**, captions in all five languages.
- Modules: 1 Asking a good question (spreadsheets) · 2 Cleaning messy data · 3 SQL for analysts · 4 Python with pandas · 5 Charts people actually read · 6 Final project: a report for a real decision.
- Free preview: **Lesson 1.3 "Where good questions come from", 11 min** (watchable without buying).
- Refund: within **14 days** if you have watched less than a quarter of the course.

### Price list (6 items; home table, Pricing, Course page, WooCommerce products, five languages identical)
| # | Item | Includes | Access | Price |
|---|---|---|---|---|
| 1 | Practical Data Analysis — complete course | 6 modules, 48 lessons, 5 project reviews | 24 months | €290 |
| 2 | Module 3 only: SQL for analysts | 9 lessons, 1 project review | 12 months | €95 |
| 3 | Module 4 only: Python with pandas | 10 lessons, 1 project review | 12 months | €110 |
| 4 | Module 5 only: Charts people actually read | 7 lessons, 1 project review | 12 months | €80 |
| 5 | Extra 1:1 project review | 45-min video call with Kazu or Priya | one session | €70 |
| 6 | Team licence, 5 seats | complete course ×5, one invoice | 24 months | €1,160 |
Home and header show the one headline price: **€290 — Buy the course**.

### Hours and process
- Live Q&A: **every Thursday 18:00–19:00 CET** (recorded for My courses).
- Email support: **Mon–Fri 09:00–17:00 CET**, reply within **2 working days**. Project reviews returned within **5 working days**.
- Process (5 steps, same wording everywhere): **1 Watch the free preview → 2 Buy at checkout → 3 Log in and open My courses → 4 Work through lessons and submit projects → 5 Get written feedback from Priya or Kazu.**

---

## 1. Signature techniques (three; obvious at a glance; never "softened")

### T1. Oversized light serif headline flush to the viewport's left edge (R1 first screen)
- Reference: on R1 the headline is the largest thing on the page, a thin serif in black starting at x=0 (no page margin), nearly touching the top; a lighter, smaller second line sits right under it, also flush left. It ignores the content column; everything else is centred and narrow. Contrast: huge thin black type vs. small quiet everything else.
- Kazu: home hero, home close, and **every inner page head**. Markup: `h1.kz-display` (home) / `h1.kz-pagehead` (inner), followed by `p.kz-subline`.
  - Home hero `h1`: Lora 400, `font-size: clamp(3.25rem, 9.5vw, 8.5rem)` (preset `display`, theme maximum 8.5rem), line-height 0.98, letter-spacing -0.02em, colour ink `#1E1A22`. Text en: **"Data, plainly."** (each language ≤ 16 characters per word; the zh-TW and ja headlines at 0.75× size).
  - Subline: Lora 400 italic, `clamp(1.375rem, 2.6vw, 2.5rem)`, colour `#1E1A22` at 72% (use `#5E5863`), directly under the headline (gap 4–12px). en: "A practical analysis course, taught by one person."
  - Inner page heads: Lora 400, `clamp(2.75rem, 6vw, 5.5rem)` (preset `xx-large`), same flush-left rule, subline under.
- Geometry: the heading block has **padding-left 0 at ≥1024px** (text starts at x=0 to x≤8px, the glyph side-bearing only), sits 24–40px below the header. Below 1024px use the normal page gutter (20px) so nothing touches the screen edge on phones. Never negative margins, never `overflow` hacks; must not cause horizontal scroll.
- Must not be diluted: the hero headline must stay ≥ 7.5rem at 1440px, must be left-flush (not centred, not inside the 1200 container), must be thin serif ink (not purple, not bold).

### T2. Framed-window portrait with the name set vertically on its right edge, 3-line statement to its left (R1 first screen; row hero = "framed-window")
- Reference: a single 3:4 photo, ~31% of viewport width, 8px corners, right of centre. The person's name in large serif runs top-to-bottom, overlapping the photo's right edge by about a third of the glyph width. A 3-line statement in mid-size serif sits to the left, vertically centred on the photo, with a small coloured romanised name and a grey caption under it.
- Kazu home hero (desktop ≥1024): a centred inner column `max-width: 1040px`. Two columns `grid-template-columns: 1fr 448px`, gap 56px, align-items center.
  - Photo **P01** (Kazu at her desk, preview lesson open on laptop): width `min(31vw, 448px)`, aspect 3:4, `border-radius: 8px`, no shadow, no border.
  - Vertical name **"Kazu Moreno"**: Lora 400, 3.5rem, `writing-mode: vertical-rl`, ink, positioned with `position:absolute; top: 48px; right: -0.55em` relative to the photo wrapper, so ~⅓ of the letters overlap the photo. Latin glyphs rotated (default vertical-rl rendering) — that is intended. In zh-TW / ja the name is upright CJK-style (`text-orientation: mixed` is fine).
  - Statement (left column; left-aligned text, block justified to the right end of its column so it sits near the photo, as on R1): Lora 400, `clamp(1.75rem, 2.6vw, 2.5rem)`, line-height 1.4, exactly 3 lines in en: "I teach the analysis / I wish someone had / taught me at work." Then `p.kz-namesmall` Inter 500 0.875rem in accent `#6E5A7E`: "KAZU MORENO — instructor"; then Inter 0.8125rem grey `#6B6670`: "Rotterdam · teaching since 2019". Then two actions: accent button **"Buy the course — €290"** and a text link with play glyph **"Watch lesson 1.3 free (11 min)"**.
- **Mobile ≤781px (hard rule, auto-gate):** no vertical text, no absolute positioning in the first screen. Order: headline → subline → photo (full content width, 4:5, radius 8) → name as a normal horizontal line `h2`-sized Lora 2rem → statement (as one paragraph) → buttons stacked full width. 782–1023px: same as mobile but photo max 520px centred.
- Inner pages using T2: About (P13 large framed window with "Kazu Moreno" vertical), Course page (P16 framed window with vertical **"Course 01"**), Student work (each story a smaller framed window with the student's first name vertical), Contact (P18 with vertical "Rotterdam").
- Must not be diluted: radius 8px exactly (not 24, not 0); name must overlap the photo edge; photo must be one single framed picture, not a carousel.

### T3. Hard-offset card with a pill label riding its top edge (R2 stat cards + offset cards, recoloured)
- Reference: R2 uses white cards with 16px radius and a solid, unblurred strip offset to the right/bottom (like a printed card lying on a coloured card), and stat cards whose pill label overlaps the card's top edge, then a big number with a small unit and a 2-line note.
- Kazu card `.kz-card`: background `#FFFFFF`, `border: 1px solid #1E1A22`, `border-radius: 16px`, `box-shadow: 8px 8px 0 0 #A99BB5` (solid, 0 blur; this is the offset edge — must stay visible, ≥8px, tint not grey), padding 40px 32px 32px. Pill `.kz-pill`: Inter 600 0.75rem uppercase, letter-spacing 0.12em, background `#6E5A7E`, text `#FFFFFF`, padding 6px 14px, radius 999px, `position:relative; top: -56px` (pulled up so its centre sits on the card's top border; implement with negative margin-top, not absolute, so it can never overlap other text on mobile).
- Stat card variant (home block 4): photo crop 3:2 at the top inside the card (radius 10px), then big numeral Lora 400 `clamp(3rem, 5vw, 4.25rem)` with small unit Inter 1rem, then 2-line note Inter 0.9375rem.
- Uses: home "the course in numbers" (3 cards), home price card, Pricing (price card + team card), Course page (price + buy card), Curriculum (one card per module, numeral = lesson count), My courses (each enrolled course a card, pill = "In progress" / "Completed"), Tutor course list (course cards).
- Must not be diluted: the offset must be a hard edge in `#A99BB5` (no blur shadow), pill must cross the top border, card border ink 1px.

### Supporting motif (not a signature): watermark ring (R1 A3)
A pale stone `#E8E8E0` text ring "Kazu Data Course · Practical Data Analysis ·" (Lora 400, set on a circle path in an SVG file `assets/watermark-ring.svg`, diameter 1100px, used as an `<img>` with empty alt) behind home block 6 (Student work) and the Student work page head, with `sp-parallax`. Ring sits centred horizontally, cropped by the section's `overflow: clip`; it must never create horizontal scroll.

---

## 2. First screen (1440×900)

- Header 72px: white `#F8F8F8`, hairline bottom `#E8E8E0`. Left: wordmark "Kazu Data Course" Lora 500 1.25rem. Centre-right nav (Inter 500 0.9375rem): Curriculum · Student work · Pricing · About · Journal · FAQ. Far right: text link "My courses" (shows "Log in" when logged out) + small accent button "Buy — €290". One menu only. Mobile: wordmark + core navigation overlay button; buy button hidden in header on mobile (it is in the hero).
- y≈100–330: T1 headline "Data, plainly." flush left, ~136px tall, subline under.
- y≈360 onward: centred T2 assembly; photo top at ~360, statement centred on the photo (~y 560–700) and buttons visible above the fold. Photo continues below the fold (as on R1).
- Ground `#F8F8F8`, no colour band. Saturated pixels: accent button + small accent name line + muted photo only → target ≤ 6%, cap 15% (`scripts/check-first-screen.py`). Photo P01 must be high-key (white walls, pale oak desk).
- Forbidden here: tables, forms, search, stat numbers, vertical text on mobile.

---

## 3. Home blocks (order fixed)

Width system: narrow column `680px` (text), centred column `1040px` (T2 assemblies, alternating chapters), wide `1200px` (price table, stat cards). Section vertical padding `clamp(80px, 10vw, 144px)`. Each section opens with `p.kz-eyebrow` (Inter 600 0.75rem uppercase, letter-spacing 0.14em, accent `#6E5A7E`, prefixed by a 24px accent hairline) above a Lora `x-large` heading `clamp(2.25rem, 4.2vw, 3.5rem)`.

| # | Block | Purpose | Layout | Photo | Copy |
|---|---|---|---|---|---|
| 1 | **Hero** (T1+T2) | who teaches what, price, preview | see §2 | **P01** | headline, subline, 3-line statement, 2 actions |
| 2 | **Letter from Kazu** | why the course exists | narrow 680 column, text only, centred column but left-aligned text; drop cap none; signed "— Kazu" in Lora italic | — | 3 paragraphs, ~190 words |
| 3 | **Chapter: What you'll learn** | 6 modules | centred 1040: photo left 5/12 (framed, 4:5, radius 8) / text right 7/12; modules as a ruled numbered list (01–06, hairline `#E8E8E0` between rows, module name Lora 1.375rem + one-line Inter note + lesson count right-aligned) | **P02** | intro 60 words + 6 rows |
| 4 | **The course in numbers** (T3 stat cards) | scale at a glance | wide 1200, 3 cards in a row (gap 40px), each: photo top, pill, numeral, note. Cards: pill "Lessons" **48** / pill "Video" **14 h** / pill "Projects" **5 reviewed**. Under the row one centred Inter line: "6 modules · 24 months access · captions in 5 languages" | **P03, P04, P05** | 3 × 2-line notes |
| 5 | **Chapter: How it works** | the 5-step process + people | centred 1040 mirrored: text left 7/12 / photo right 5/12 (framed 4:5). Steps as a ruled list 1–5 (numeral Lora accent 1.5rem, step text Inter). Below list a small line with Priya Raman named as reviewer, Live Q&A Thursday 18:00–19:00 CET | **P06** | 50 words + 5 rows |
| 6 | **Student work** (watermark ring + alternating framed windows) | proof through stories | on `#F8F8F8` with the stone ring behind; three rows alternating photo-left / photo-right inside 1040; photo framed 3:4 width 360px with the student's first name vertical on its outer edge (T2 echo, desktop only); text: project title Lora 1.75rem, 2–3 sentence story, Inter caption "Amara Osei · operations coordinator · Module 3". Link "Read all student work →" | **P07, P08, P09** | 3 × ~55 words |
| 7 | **Free preview lesson** | try before buying | narrow heading centred, then wide 1040 framed window 16:9 (radius 8) with a 72px accent circle play button centred and caption under: "Lesson 1.3 · Where good questions come from · 11 min". Links to the preview lesson page | **P10** | 40 words |
| 8 | **Price** (T3 price card + full price table) | the one clear price, then all options | card centred, max 560px: pill "One course, one price", Lora "Practical Data Analysis", numeral **€290** (Lora 4.25rem), includes list (6 modules · 48 lessons · 5 project reviews · 24 months · 14-day refund), accent button "Buy the course" (WooCommerce add-to-cart → checkout). Then the 6-row price table at **wide 1200 full width** (see §6) titled "All options" | — | card + table |
| 9 | **Questions** | remove doubts | narrow 680, 5 `details` rows (hairline separators): Do I need to code? / How long do I have access? / What if it isn't for me? (14-day refund) / Who reviews my projects? (Priya, 5 working days) / Can my team join? (team licence). Link to FAQ | **P11** small framed 3:2 at the top of the column, 680 wide | 5 Q&A, ~25 words each |
| 10 | **Close** (T1 echo) | final call | T1 flush-left oversized Lora `clamp(3rem, 7vw, 6.5rem)` "Start with lesson one." then centred 1040 split: framed photo right (4:5, 380px) / left: 2 sentences + buttons "Watch the free lesson" + "Buy — €290", hours line "Live Q&A Thursdays 18:00–19:00 CET" | **P12** | 40 words |
| — | Footer | | 3 columns on `#F8F8F8` with top hairline: wordmark + address Rotterdam; links (Courses, Curriculum, Pricing, FAQ, Journal, Contact, My courses); support hours. Small print: refund policy, privacy, terms | — | |

Home photo positions: P01, P02, P03, P04, P05, P06, P07, P08, P09, P10, P11, P12 = **12** (≥8). No photo repeats on the home page. Home copy ≥ 250 English words with ≥ 3 narrative paragraphs (letter alone covers this).

### Not like the recent themes
| Theme | Home order (short) | Kazu difference |
|---|---|---|
| Taiyo Solar Works | split photo/panel → text → case with 2 circles → **4 numeral cards** → ruled services → graphite band → crew → notes → mirrored split | Kazu hero is type-led (flush-left giant serif) above a framed window, not a split; numbers are **3 photo-topped offset cards with pills**, not 4 plain numerals; no dark band anywhere; no circles |
| Yui Credit Union | inset photo + floating bar → statement → rates table → calculator → pickup row → stories → steps → wide photo → branches → journal → inset close | no table/calculator in the upper half; price appears once, late (block 8); stories are alternating framed windows over a watermark, not cards |
| Hada Dermatology | inset hero on L-band → doctor letter → index → 3 wide chapter bands → doctor rows → band → fees → journal → arch close | no colour bands or L-band at all (white ground throughout); chapters are photo/text alternations in a 1040 column, not full-width bands; no arch |
| Michi Motors | dimmed full-bleed cover → text → ledger → promise → full-bleed band → locations → steel band → journal → dimmed close | no full-bleed or dimmed photo anywhere; every photo is a framed window with 8px corners |
Structure is single-column longform with alternating photo sides (3 → 5 → 6), which none of the four uses.

---

## 4. Inner pages (≥ 9 reachable, each continues ≥1 signature)

| Page | Slug | Content (key points) | Signatures |
|---|---|---|---|
| About Kazu | `/about/` | T1 head "About Kazu"; T2 large framed **P13** with vertical "Kazu Moreno"; her story (11 years analysing logistics and public-health reports, started teaching colleagues, founded 2019); how lessons are made (Tomás Ibarra, captions); Priya Raman (framed **P14**, horizontal name); principles list (4 rows: real datasets, short lessons, written feedback, no hype) | T1, T2 |
| Curriculum | `/curriculum/` | T1 head; intro; 6 module T3 cards in a single column (wide, one per row, card = pill "Module 3", title, lesson count numeral, 4 lesson titles, project brief); free preview link; **P15** framed under intro | T1, T3 |
| Courses (Tutor archive) | `/courses/` | T1 head "Courses"; Tutor course loop styled as T3 cards (photo top, pill "Complete course"/"Single module", title, lessons, price nowrap); 4 courses: complete + modules 3/4/5 | T1, T3 |
| Course page (Tutor single) | `/courses/practical-data-analysis/` | T1 title; T2 framed **P16** with vertical "Course 01"; T3 price+buy card directly under hero (€290, "Buy the course" → WooCommerce checkout; when enrolled: "Continue learning"); curriculum accordion (Tutor topics → 6 modules, 48 lessons); instructor box (Kazu; no extra photo — initials avatar disc "KM" in stone `#E8E8E0`); reviews off | T1, T2, T3 |
| Lesson / player | Tutor lesson | Player in a framed window (radius 8, 16:9, full 1040), lesson title Lora 2.25rem flush left, lesson nav (prev/next), topic list collapsible below on mobile and as a right-hand list inside content ≥1024 (not a site sidebar — Tutor's lesson outline, keep within content); "Mark complete" accent button; notes/downloads list | T2 (frame) |
| Student work | `/student-work/` | T1 head + watermark ring (sp-parallax); 3 stories long form (each: framed **P07/P08/P09** with vertical first name, problem → data → what changed, ~150 words); 2 quote rows (Sofia Marchetti, Jae-won Park) as T3 cards | T1, T2, T3 |
| Pricing | `/pricing/` | T1 head; T3 price card (complete course) + T3 team card (€1,160, quote from Sofia); full 6-row price table (§6); refund policy; what happens after purchase (5-step process); payment note (WooCommerce checkout, card) | T1, T3 |
| FAQ | `/faq/` | T1 head; 4 groups (Before buying / Access and accounts / Projects and feedback / Teams and invoices), 14 `details` rows; **P17** framed at top; support hours | T1 |
| Journal | `/journal/` + 3 posts | T1 head; post list as ruled rows (date, title Lora, 1-line excerpt); posts: "Five questions before you open a spreadsheet", "A tidy column is a kind gesture", "Why the bakery chart is a bar chart" | T1 |
| Contact | `/contact/` | T1 head; T2 framed **P18** with vertical "Rotterdam"; email, support hours Mon–Fri 09:00–17:00 CET, Live Q&A time, address; simple contact form (core-friendly; no form in any first screen except here below the fold) | T1, T2 |
| My courses (Tutor dashboard) | `/dashboard/` | Styles for Tutor dashboard: enrolled courses as T3 cards with pill "In progress"/"Completed" and progress bar (accent on `#E8E8E0`); left dashboard menu becomes a top tab row (no sidebar look) | T3 |
| Cart / Checkout (WooCommerce) | `/cart/`, `/checkout/` | Clean single column, order summary as T3 card, accent "Place order" | T3 |

Signature continuity: T1 on 10 pages, T2 on 5, T3 on 7 (≥4 inner pages each for T1 and T3; T2 on 5).

---

## 5. Colour and type

### Palette (relationship from R1, accent per plan)
| Role | Hex | Share | Source / use |
|---|---|---|---|
| Ground | `#F8F8F8` | ~70% | R1 white ground; whole site, no tinted page bands |
| Stone | `#E8E8E0` | ~10% | R1 watermark and gutters; hairlines, watermark ring, progress track, avatar disc |
| Ink | `#1E1A22` | ~12% | R1 black type, warmed toward plum; all headings, card borders |
| Grey text | `#5E5863` / `#6B6670` | ~4% | sublines, captions (both pass AA on ground) |
| Accent Edo purple | `#6E5A7E` | ~3% | buttons, pills, eyebrow hairline, small name line, play circle, step numerals. Never a section background |
| Accent tint | `#A99BB5` | ~1% | T3 hard offset edges only, focus ring |
| White | `#FFFFFF` | cards | card faces |
Button: bg `#6E5A7E`, text `#FFFFFF`, radius 999px, padding 14px 26px, hover `#5A4868`. Links: ink with accent underline 1px offset 3px.
First screen saturated ≤ 15% (target ≤ 6%). Not beige/cream; not the recent primaries (graphite, pine, crimson/steel, warm grey).

### Type (OFL; verify licence at build; self-host woff2)
- Display/headings: **Lora** 400, 400 italic, 500. Body/UI: **Inter** 400, 500, 600.
- theme.json font sizes: `small` 0.875rem · `medium` 1.0625rem (body, line-height 1.7) · `large` 1.375rem · `x-large` clamp(2.25rem, 4.2vw, 3.5rem) · `xx-large` clamp(2.75rem, 6vw, 5.5rem) · `display` clamp(3.25rem, 9.5vw, **8.5rem**) — maximum 8.5rem (≥4.25rem rule).
- zh-TW / ja headings Noto Serif TC / JP at ~0.75× and body line-height 1.85; fr/de `hyphens: auto` (Hokuto/Hada mechanism).

---

## 6. Responsive hard rules

- **390px first screen:** no `writing-mode: vertical-*`, no absolutely positioned labels/names over photo or text; all T2 names become horizontal static lines; no horizontal overflow (headline wraps; longest word ≤ 16 chars).
- **Price table at ≥782px:** sits in the wide container and spans its **full width** (`width:100%`, container `max-width:1200px`, never in the 680 column). Columns Item | Includes | Access | Price. Price column: `white-space: nowrap; text-align: right; width: 1%; padding-right: 24px`; no `overflow:hidden` / fixed widths on the wrapper; `table-layout: auto`. Check at 800 and 1280 that "€1,160" and "1 160 €" are fully visible.
- **Any table <782px:** stacked — each row becomes a block (item Lora 1.125rem, includes and access as Inter lines, price on its own line, left-aligned, bold), hairline between rows, `thead` visually hidden. Applies to price table, Tutor/Woo tables (cart, order history) too.
- Alternating chapters and story rows: single column under 1024px, photo first.
- T3 cards: 3-up ≥1024, 1-up below (no horizontal scroll rows); keep 8px offset on mobile (reduce to 6px under 480px), add right margin 8px so the offset never overflows.
- Header nav collapses to the core overlay under 1024px.

---

## 7. Photographs (18, one STYLE string, Grok, one at a time)

**STYLE:** `High-key documentary photograph, bright soft daylight from large windows, white and pale grey walls, light oak and white surfaces, small muted plum and stone accents in clothing or objects, natural skin tones, diverse adults, calm unposed moment, modern international city interior, 35mm full-frame look at f/2.8 with gentle depth of field, clean uncluttered composition, laptop and monitor screens show only soft blurred abstract charts, no readable text, no logos, no brand marks, no Japanese elements, realistic hands`

Kazu Moreno is the same woman across P01/P12/P13/P16/P18: mid-40s, shoulder-length dark wavy hair with some grey, round tortoiseshell glasses, plum knit or white shirt. (Mixed heritage, deliberately neutral.) Regenerate any image with text, logos, broken faces or hands. ≤300 KB, ≤2000px, no cut-outs.

| ID | Subject / composition | Ratio | Used (page → block) | Home |
|---|---|---|---|---|
| P01 | Kazu seated at a light oak desk by a window, looking at a laptop with a blurred chart, mug and notebook, she is centre-right, white wall | 3:4 | Home → hero | ★ |
| P02 | Over-shoulder view of hands writing a question in a paper notebook next to a laptop with blurred spreadsheet grid | 4:5 | Home → What you'll learn | ★ |
| P03 | Close-up of a laptop screen with blurred line chart and a hand on the trackpad, shallow focus | 3:2 | Home → stat card "Lessons" | ★ |
| P04 | Headphones and a small microphone on a desk, recording setup, soft window light | 3:2 | Home → stat card "Video" | ★ |
| P05 | Printed bar charts and sticky notes (blank) on a white pinboard, a hand pinning one | 3:2 | Home → stat card "Projects" | ★ |
| P06 | Priya Raman (30s, South Asian, black hair tied back) at a monitor writing feedback, side view, white office | 4:5 | Home → How it works | ★ |
| P07 | Amara Osei (30s, Black woman) in a bright warehouse office with boxes softly out of focus, laptop on a standing desk | 3:4 | Home → story 1; Student work → story 1 | ★ |
| P08 | Lena Hoffmann (50s, blonde-grey bob) at a small nonprofit office table with folders and a laptop | 3:4 | Home → story 2; Student work → story 2 | ★ |
| P09 | Daniel Kowalski (40s, flour on apron) in a bright bakery back room with a tablet beside bread racks | 3:4 | Home → story 3; Student work → story 3 | ★ |
| P10 | Wide still of a studio teaching desk: laptop, a large monitor with blurred chart, a whiteboard with only drawn axes and dots (no words) | 16:9 | Home → free preview | ★ |
| P11 | A cup of coffee, open laptop and printed checklist (blank lines) on a white kitchen table, morning light | 3:2 | Home → Questions | ★ |
| P12 | Kazu standing by a tall window holding a coffee, smiling slightly, half-body | 4:5 | Home → close | ★ |
| P13 | Kazu at a whiteboard with drawn axes in a small workshop room, two learners seen from behind | 3:4 | About → hero window | |
| P14 | Priya Raman on a video-call setup, laptop camera, natural light, portrait | 4:5 | About → team | |
| P15 | Flat lay from above: notebook, pencil, laptop with blurred table, glasses, on light oak | 3:2 | Curriculum → under intro | |
| P16 | Kazu recording at a desk: camera on a tripod, soft light panel, she is talking to the lens | 3:4 | Course page → hero window; Courses → card image | |
| P17 | Small group of four adults at a library table with laptops, discussing, diverse ages | 3:2 | FAQ → top | |
| P18 | Quiet home study corner: desk under a window overlooking a modern brick canal-side street (no signage), laptop open | 3:4 | Contact → window | |
Per-page uniqueness: no photo repeats within any single page. Courses archive: complete course P16, modules 3/4/5 use P03/P10/P05 crops.

---

## 8. Scroll effects (sp-scroll; copy `pipeline/assets/sp-scroll/` unchanged)

| # | sp-* | Applied to | Source (reference teardown) | Trigger / time / easing |
|---|---|---|---|---|
| E1 | `sp-reveal sp-reveal--up` + parent `sp-stagger` | Home block 3 module rows, block 5 step rows, block 6 story rows (each row), Curriculum module cards, Journal rows | R1 mau photo/portrait rows fading in on IntersectionObserver (~0.3s, cubic-bezier(0,0.55,0.45,1)) | IO threshold 0.01; `--sp-dur: 0.7s`, `--sp-dist: 20px`, easing `cubic-bezier(0,0.55,0.45,1)` (set via CSS var, matches R1); stagger 0.12s steps |
| E2 | `sp-reveal sp-reveal--zoom` on each T3 stat card + `sp-count` on its numeral | Home block 4 (48 / 14 h / 5), Course page lesson-count numeral | R2 jue cards "appear → appear-active" pop-in, 400ms, cubic-bezier(0.4,0.4,0,1) | IO; zoom duration set to 0.6s for cards via `--sp-dur`, count 1.2s easeOutCubic (built-in) |
| E3 | `sp-parallax` (wrapper around the watermark ring `<img>`) | Home block 6, Student work page head | R1 watermark word on a circle path moving with scroll (rAF, linear) | CSS scroll-driven `animation-timeline: view()`, ±7%, linear; no JS listener |
Not animated: hero (no reveal), price card and price table, FAQ details, forms, footer, legal text, Tutor player. No other libraries. Screenshots and gates with `?sp-static`.

---

## 9. Home acceptance checklist

- [ ] Hero headline "Data, plainly." Lora 400 ≥7.5rem at 1440, starts at x≤8px, ink, not centred; subline italic directly under.
- [ ] T2 assembly: single 3:4 photo P01 radius 8px ~31vw; vertical "Kazu Moreno" overlapping its right edge (desktop); 3-line statement left, centred on photo; accent name line; buy button "€290" + preview link visible above the fold at 1440×900.
- [ ] 390px first screen: no vertical text, no absolute labels, no overlap, no horizontal scroll.
- [ ] First-screen saturated pixels ≤ 15% (target ≤ 6%); no colour band anywhere on home.
- [ ] Block order exactly as §3 (10 blocks + footer); alternating photo sides in blocks 3, 5, 6.
- [ ] 3 T3 stat cards with photo, pill crossing top border, hard 8px `#A99BB5` offset (no blur), numerals 48 / 14 h / 5.
- [ ] Price card €290 with buy button that adds the WooCommerce product and reaches checkout; 6-row price table full wide width at 800 and 1280, price column nowrap right-aligned, nothing cut; stacked on mobile.
- [ ] 12 distinct photos on home (≥8), no repeats, no text/logos in images, all high-key.
- [ ] ≥250 English words, letter in 3 paragraphs; names, numbers, hours match §0.
- [ ] Watermark ring visible behind Student work, stone colour, no horizontal scroll.
- [ ] sp effects only E1–E3 as listed; hero not revealed; `?sp-static` final state; no-JS all visible.
- [ ] One top menu; no sidebar, no dark/full-bleed photo, no circles/arches, no 4-up team grid, no tables/forms in first screen.
- [ ] `auto-gates.mjs … en … 1 1` pass=true.
