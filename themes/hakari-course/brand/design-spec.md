# Hakari Course: design spec (stage 1, binding for implementation)

Slug `hakari-course`, row b12-5, type **landing** (online-course landing page, category education-classes). One long conversion page with an anchor menu and **one repeated CTA** ("Enrol in the next cohort"), plus inner pages. Online course = **Tutor LMS (free) + WooCommerce checkout**: the course must be buyable, enrolment must open the course, lessons must be viewable on the site (stage 2 buys once locally and records it in gate.md).

Reference (only): **e-chubu.jp** — https://www.e-chubu.jp/ (Chubu Nippon Driver School, S5-Style school/course listing). Measurements: `reference-tokens.md` (sections a–g, cited below as tok(a)…tok(g)). Screenshots: `ref/chubu-first.png` (first screen), `ref/chubu-s1.png` (white rounded panel), `ref/chubu-s2.png` (tilted photo row "01"), `ref/chubu-s3.png` (closing photo band with hashtag + CTA blocks). We borrow structure, shapes, colour relationships, motion values and the key-visual concept. We never copy its photos, illustrations, copy, logo or whole-page layout.

**IMAGERY: photo** (stage-a.md). Reference photos fill every main image slot; its flat-vector stickers are < 15 % and are not reproduced. We generate high-key real-photo images (row photo_direction high-key) with one STYLE string (section 8).

Type direction: **sans** — Latin Onest (display) + Public Sans (body); CJK Noto Sans TC / Noto Sans JP (gothic) for headings and body. No serif and no mincho anywhere.

## 0. Fixed brand facts (brand.md, home, every inner page and all five languages use exactly these)
- **Hakari Course** — online food-safety supervisor course by the Hakari food-safety school, founded **2016**. Studio teaching kitchen: **Havenkade 14, 3024 Rotterdam, Netherlands** (fictional address; localise address format per language only). Currency **EUR** in every language, prices include VAT; never converted.
- What it is: a **6-week** online course for people who supervise food handling (shift leads, sous-chefs, canteen and bakery leads, food-truck owners). **24 lessons** (4 per week, 10–20 min each, ≈ **18 hours** total with practice), **6 live Q&A sessions** (Tuesdays **18:30–19:30 CET**, recorded), a **practical temperature log** (5 recorded probe checks in your own kitchen), and an online proctored **exam: 40 questions, 60 minutes, pass mark 75 %**, **one free resit within 30 days**. Certificate (PDF) issued within **2 working days**, valid **3 years**. Built on the seven HACCP principles of the Codex Alimentarius General Principles of Food Hygiene (a factual basis; we do not claim any official accreditation, approval or pass rate).
- Practical kit (included in the full fee): digital probe thermometer, calibration cup, 50 probe wipes, temperature log pad. Ships within **5 working days** of enrolment.
- Support: **Mon–Fri 9:00–17:00 CET**, reply within **1 working day**, hello@hakari-course.example.
- People (7, fictional, diverse; no portrait grid anywhere):
  1. **Ines Vermeulen** — co-founder and lead instructor; 14 years auditing hotel, school and production kitchens.
  2. **Samuel Adeyemi** — chef-trainer; temperature, cooking, cooling and reheating.
  3. **Lina Haddad** — tutor; cleaning, allergens and pest control.
  4. **Tomás Brandt** — co-founder, cohort coordinator and learner support.
  5. **Priya Raman** — learner story: bakery shift lead, cohort 9.
  6. **Jonas Weber** — learner story: school-canteen cook, cohort 11.
  7. **Camille Laurent** — learner story: food-truck owner, cohort 12.
- Stories: exactly **3** (Priya, Jonas, Camille), same names, roles and cohorts everywhere.
- Fees (5 items, identical everywhere):
  | Item | Price |
  |---|---|
  | Full course — 24 lessons, 6 live Q&As, exam, one free resit, practical kit | **€390** |
  | Course without kit — bring your own probe thermometer | **€340** |
  | Team seats — 5 or more learners from one business, per seat (kit included) | **€330** |
  | Extra exam resit — after the free resit | **€60** |
  | Certificate re-issue or second-language copy | **€20** |
- Refunds: full refund up to **14 days** before the cohort starts; after the start, full refund within 14 days if you have opened fewer than **25 %** of the lessons.
- Cohorts (4, each **40 seats**, Monday start, Sunday end):
  | Cohort | Dates | Status |
  |---|---|---|
  | 14 | 11 Jan – 21 Feb 2027 | Open |
  | 15 | 1 Mar – 11 Apr 2027 | Open |
  | 16 | 3 May – 13 Jun 2027 | Waitlist opens 1 Feb 2027 |
  | 17 | 6 Sep – 17 Oct 2027 | Waitlist |
- Process (always told as 6 short paragraphs or a sentence list, never a step grid or vertical timeline): 1 Enrol and pay → 2 Kit ships (5 working days) → 3 Six weeks of lessons + weekly live Q&A → 4 Practical log (5 probe checks) → 5 Online exam → 6 Certificate in 2 working days.
- Syllabus (6 weeks × 4 lessons):
  1. **Week 1 — Hazards and how they travel** (biological, chemical, physical, allergenic; cross-contamination routes).
  2. **Week 2 — Temperature control** (danger zone 5–63 °C, cooking to 75 °C core, hot holding ≥ 63 °C, probe calibration).
  3. **Week 3 — Cooling, chilling and reheating** (two-stage cooling, chill ≤ 5 °C, reheating once to 75 °C).
  4. **Week 4 — Cleaning, allergens and pests** (clean-as-you-go, two-stage cleaning, the 14 major allergens, pest signs).
  5. **Week 5 — HACCP for supervisors** (the seven principles, critical limits, records, corrective action).
  6. **Week 6 — Leading a food-safe shift** (training staff, handovers, inspections, exam preparation).
- Copy must never promise passing, jobs, legal compliance or inspection results; no awards, media, real people or real brands. Allowed: "prepares you for", "built on", "designed with working supervisors".
- Repeated CTA label (one action, same everywhere): **"Enrol in the next cohort"** → the Tutor LMS course page `/course/food-safety-supervisor/` (WooCommerce add-to-cart). Short label for tabs and the header pill: **"Enrol"**. Secondary link (not a second CTA, never a filled button): "Syllabus PDF" → `/syllabus/`.

---

## 1. Signature techniques (three, all obvious at a glance)

### T1. Rounded-bottom full-bleed photo with copy crossing the lower middle and a hashtag foot band (e-chubu.jp hero, `ref/chubu-first.png`, tok(d)(f)(g))
- Reference: a full-bleed photo starting at y 0 behind two white header chips, bottom corners rounded **88.6px**, photo height ≈ 790px at 1440×900; white brush-script catch line (≈ 80px) starting x ≈ 320 at y ≈ 380–500, smaller tagline offset to the right beneath it (x ≈ 700–1130, y ≈ 500–540); a pastel strip at the photo foot with a huge hashtag pair "#LICENSE #DRIVE" (≈ 100px, the "#" white with dark outline, word 1 yellow fill with dark outline, word 2 solid cyan) whose letters straddle the photo's bottom edge; two flat stickers overhang the photo's bottom corners by ≈ 67px.
- Ours: home hero (section 3, block 1) exactly in that geometry — see Key visual concept for every value. The photo is H1 (gloved hands + probe thermometer, trainees around a stainless bench).
- Must not be diluted: bottom corners **88px** (desktop) / **32px** (< 782px), never square and never all four corners; the photo is edge-to-edge (no container, no side gutter); the hashtag letters **cross the photo's bottom edge** (top half of the letters on the photo, bottom half on the wash) — not placed below it; word 1 outlined with mint fill, word 2 solid teal, "#" glyphs white with ink outline; the H1 is white and starts left of centre, the tagline sits offset to the right (never centred as one block).

### T2. Tilted rounded photo + big number + two-line coloured headline + pill button (e-chubu.jp "school intro 01", `ref/chubu-s2.png`, tok(c)(d)(e)(g))
- Reference: photo 581×685 (0.85:1), radius 88px, rotated **−5°**, image column x 152–733 at 1440 (≈ 40 %), text column from x 803 (gap 70px); on the right a red display number "01" (Emblema One 88.6px), two small lead lines (19.9px bold), a two-line red headline (28px bold), and a white pill button with an arrow (1px border); two figure stickers next to the number. Rows repeat with a 687px photo pitch. Motion: photo enters rotate −3°→−5°, scale 1.1→1, 0.5s `cubic-bezier(.34,1.56,.64,1)`; copy fades in from the right 33px, 0.8s.
- Ours: home block 3 "Why this course" — 3 rows (01 instructors who audit kitchens / 02 online with a real kit / 03 an exam you sit from home). Geometry at 1440: content width 1136px (x 152–1288). Photo wrapper `.hk-tilt` width 581px, aspect 581/685, `border-radius: 88px`, `overflow: hidden`, `transform: rotate(-5deg)` (row 02 mirrored: photo right, `rotate(5deg)`), soft glow `box-shadow: 0 0 55px rgba(223,212,159,.3)` (tok(d)). Text column starts 70px after the photo column, `align-self: center`, max-width 460px:
  - number `01` Onest 800, **5.5rem** (88px, tok(b) "01" 88.6px), colour point `#5F8884`, line-height 1, letter-spacing −0.05em;
  - lead 2 lines, Public Sans 700 1.25rem (20px, tok(b) 19.9px), ink, line-height 1.6;
  - headline 2 lines, Onest 700 **1.75rem** (28px, tok(b)), point `#5F8884`, line-height 1.6, letter-spacing 0.05em in CJK / 0 in Latin;
  - paragraph 45–60 words, body size;
  - pill button: white ground, `1px solid #0E1716`, radius 999px, padding 18px 48px, Public Sans 700 1rem, arrow "→" in `#E8121F` before the label (as the ref red arrow), hover scale 1.04 .3s `cubic-bezier(.34,1.56,.64,1)`.
  - instead of figure stickers: a small mint chip (`#49EBD2` fill, ink 1px outline, radius 999px, Onest 700 .875rem, padding 6px 16px) next to the number with one keyword ("Week 1–6", "Kit included", "40 questions") — text chip, not an image.
  Row vertical gap 140px. Photos R1, R2, R3.
- Mobile (< 782px): photo full width minus 48px, aspect kept, radius 32px, rotation **−3°/3°** (keep the tilt, smaller so it never overflows: wrapper has 24px inline margin and `html,body{overflow-x:clip}`); text below; number 3.5rem.
- Must not be diluted: the rotation is visible (≥ 5° desktop, ≥ 3° mobile), radius stays 88px (not 24, not 0), the number is ≥ 5rem desktop in the point colour, the headline is two lines in the point colour, the button is an outlined white pill — not a filled block.

### T3. Big white rounded panel on a pastel wash, holding 3 rounded photo cards + 3 outlined link cards (e-chubu.jp license panel, `ref/chubu-s1.png`, tok(c)(d))
- Reference: page ground is a soft pink→mint→cream gradient wash; a white panel inset 55px on each side (1330px wide at 1440), radius **88.6px**, bottom padding 99.7px; inside, 3 photo cards 355×320 (radius 33px, label bottom-left in white bold 28px with a white arrow at bottom-right, gap 22px) and under them 3 small outlined link cards (radius 22px, `1px solid #E5E5E5`, icon left, 2-line bold label, red arrow right), centred.
- Ours: home block 2 "Course" (what the course covers): wash ground full-bleed, white panel `margin-inline: 55px` (desktop ≥ 1200; 24px at 782–1199; 12px mobile), `border-radius: 88px` (32px mobile), padding 120px 0 100px. Inside:
  - section title pair (T4 style, see 1.4): "Course" + local subtitle.
  - one intro paragraph (60–70 words, centred column 720px, left-aligned text).
  - 3 photo cards, each **355×320** (aspect 1.11:1), radius **33px**, gap **22px** (row width 1109px centred): C1 "Hazards & HACCP", C2 "Temperature control", C3 "Cleaning & allergens". Label Onest 700 1.75rem white, bottom-left 28px inset, white "→" bottom-right; a bottom gradient `linear-gradient(to top, rgba(14,23,22,.45), transparent 55%)` for legibility. Each links to `/syllabus/#week-N`.
  - 3 outlined link cards under them (gap 22px, each 246–268px wide, height 144px, radius **22px**, `1px solid #E5E5E5`, white): inline SVG line icon 44px (ink stroke 2px, mint `#49EBD2` fill accent: clipboard, thermometer, clock) + 2-line Public Sans 700 1.125rem label + `#E8121F` arrow right. Labels: "Syllabus PDF", "Who it is for", "Exam format". Links to `/syllabus/`, `/how-it-works/#who`, `/how-it-works/#exam`.
- Must not be diluted: the panel is visibly **inset from the page edges** so the pastel wash shows on both sides and above/below; radius stays 88px on all four corners; photo cards stay rounded 33px with the label **on** the photo; link cards are outlined (not filled, no shadow).

### 1.4 Supporting device (not counted): display-word section titles
Every home section opens with an English display word (Onest 800, **3.5rem** = 56px, tok(b) 55.4px, letter-spacing −0.05em, point `#5F8884`, centred) and a local subtitle under it (Onest 700 2.125rem = 34px, tok(b) 33.2px, ink, letter-spacing 0.05em, line-height 1.6, centred, 8px gap). The English word stays English in every language (like the reference), the subtitle is translated. Words: Course, Why, Syllabus, Instructor, Stories, Dates, Fee, FAQ. Centred headings are 3.5rem — not "giant centred type". Reveal: `sp-reveal sp-reveal--wipe` on the title Group (stand-in for the reference char bounce; no per-char JS).

### Supporting (required): fixed right-edge vertical CTA tabs (tok(f))
- ≥ 782px: two tabs fixed to the right edge, `right: 0`, width **78px**, heights **218px** and **238px**, top **217px** and **447px** (tok(f)), radius `22px 0 0 22px`. Tab 1 "Enrol" `#E8121F` ground, white text; tab 2 "Syllabus PDF" `#49EBD2` ground, ink text. Vertical text `writing-mode: vertical-rl` Onest 700 1.125rem, letter-spacing .12em, a 28px line icon on top (thermometer / document). Hover: translateX(−6px) .3s `cubic-bezier(.34,1.56,.64,1)`. They are links (`<a>`), not buttons. In zh-TW / ja the vertical text is upright CJK; in en/fr/de it is rotated Latin (`text-orientation: mixed`). The fr/de labels must fit 218px at 1.125rem (fr "S'inscrire", de "Anmelden"; tab 2 "Programme PDF" / "Lehrplan PDF").
- < 782px: **no vertical text and no edge tabs**. Instead a fixed bottom bar, height 56px, two equal halves: "Enrol" (`#E8121F`, white) and "Syllabus PDF" (`#49EBD2`, ink), Onest 700 1rem horizontal text; `body { padding-bottom: 56px }` and the mobile hero height is computed so no first-screen text sits under the bar (section 3, mobile first screen).

### Continuation to inner pages (required; we do 9)
Inner page head = **T1-mini**: full-bleed photo 1440×440 (aspect ≈ 3.3:1, crop of the page's head image), bottom corners **88px** (32px mobile), white display word Onest 800 4.5rem + local title Onest 700 2.125rem white crossing the lower middle (left-aligned at x 152), a small hashtag pair below the photo crossing its bottom edge (Onest 800 3rem, same fill rules as the hero). Pages without a photo head (Privacy, Terms, Thanks) use a 320px wash band with the same bottom 88px radius in white over the wash.

| Page | T1 rounded-bottom head + hashtag | T2 tilted rows | T3 white rounded panel |
|---|---|---|---|
| Syllabus | P1 · #SYLLABUS #6WEEKS | 1 row: S1 kit, "Your practical log" | week-by-week accordion inside the panel |
| Instructors | P2 · #INSTRUCTORS #KITCHENS | 3 rows: I1 Ines, P3 Samuel, P4 Lina (alternating ±5°) | Tomás support note + 3 link cards |
| Dates & fees | R2 · #COHORTS #FEES | — | cohort list + full-width fee table + refund text |
| How it works | R3 · #ENROL #CERTIFY | 2 rows: C1 "Who it is for", C2 "The exam" | 6-paragraph process in the panel |
| Stories | B1 · #STORIES #KITCHENS | 3 rows: L1 Priya, L2 Jonas, L3 Camille | closing quote panel with CTA |
| FAQ | C3 · #FAQ #ASK | — | 12 accordion questions |
| Contact & support | R1 · #SUPPORT #HELLO | — | address, hours, email + 3 link cards |
| Waitlist | H1 (crop) · #WAITLIST #EARLY | — | signup form inside the panel |
| Course (Tutor LMS single course) | H1 (crop) · #FOODSAFETY #SUPERVISOR | — | curriculum + enrol box in panel |
| Thanks / Privacy / Terms / Notes / Cart / Checkout / Dashboard | wash band head | — | text or Woo/Tutor UI inside the panel |

---

## 2. Key visual concept

### (1) Reference first screen (e-chubu.jp, `ref/chubu-first.png`)
- **What is drawn:** a full-bleed outdoor photograph of three smiling young learners leaning in and out of a small mint-coloured car (one sits in the open sliding door, one leans out of the window, one stands at the rear laughing), green trees behind. Two white rounded header chips (logo left, nav right) sit on the photo's top edge; a red/mint mini button pair at the top-right corner; two vertical tabs (red, mint) hug the right edge. A white brush-script catch line crosses the lower middle with a smaller tagline offset right. Below, a pastel strip carries a huge "#LICENSE #DRIVE" hashtag pair straddling the photo's rounded bottom edge, with a flat character sticker overhanging bottom-left and a small bus sticker bottom-right.
- **Story:** "your possibilities start with a licence" — the school is a friendly first step and a starting line, not a drill ground.
- **Signature motion:** on load the photo wrapper scales .9→1 and the image 1.4→1 (0.8s `cubic-bezier(.83,0,.17,1)`), the catch copy and English words bounce in (elastic, stagger .025s, delay .9s), the side tabs rise 1.5rem with opacity (delay .65–.75s), the stickers pop (scale .6→1, rotate −5°→0, 0.45s `cubic-bezier(.34,1.56,.64,1)`, delay .95s). tok(g).

### (2) Our translated scene (same composition, same motion idea, same image type: photo)
A high-key photograph in a bright teaching kitchen: **three trainees in white aprons lean in around a brushed-stainless bench** — one bends in from the left, one leans over from behind the bench, one stands at the right laughing as she reads the result — and at the centre **a gloved hand pushes a probe thermometer into a tray of cooked chicken and rice**. Same story turned to this industry: **"a safe kitchen starts with you — your supervisor certificate is the first step"**. Same composition (full-bleed photo with rounded bottom corners under white header chips, white copy across the lower middle, hashtag pair on the photo foot "#FOODSAFETY #SUPERVISOR", two overhanging "stickers" as round badges, two vertical tabs on the right edge), same motion (wrapper + image zoom on load, copy rising with overshoot, tabs rising, badges popping), and photo imagery. The trainees are what the mint car's three friends were: the learners themselves, happy and at the start.

### (3) KV checklist (all six visible in the first screen at 1440×900, and checked in the home acceptance list)
| # | Reference element | Our mapping | Position (1440×900) | Motion | Image used |
|---|---|---|---|---|---|
| 1 | Full-bleed photo of three learners at a mint car, bottom corners rounded 88px | Full-bleed high-key photo: three trainees around a stainless bench, gloved hand with probe thermometer in a tray at the centre; bottom corners 88px | x 0–1440, y 0–790 (behind the header chips) | load: frame scale .9→1 and image scale 1.4→1, 0.8s `cubic-bezier(.83,0,.17,1)` (theme CSS); scroll: `sp-parallax` `--sp-par: 10%` | **H1** |
| 2 | White brush-script catch line + smaller tagline crossing the lower middle | H1 "A safe kitchen / starts with you." Onest 800 5.5rem white, left-aligned from x 300; tagline "The food-safety supervisor course — online, six weeks." Onest 700 1.5rem white, right-aligned ending x 1140 | H1 y ≈ 400–580; tagline y ≈ 600–640 | lines rise translateY(.4em) scaleY(.6)→none + opacity, 0.8s `cubic-bezier(.34,1.56,.64,1)`, delay .5s, line stagger .08s | on H1 (scrim) |
| 3 | Pastel strip with huge hashtag pair "#LICENSE #DRIVE" straddling the photo's bottom edge | "#FOODSAFETY #SUPERVISOR" Onest 800 5rem; "#" white + 2px ink stroke, "FOODSAFETY" `#49EBD2` fill + 2px ink stroke, "SUPERVISOR" solid `#5F8884`; on the wash | letters y 745–835 (centre line = photo bottom 790), x ≈ 150–1290 | rise 24px + opacity, 0.8s `cubic-bezier(.34,1.56,.64,1)`, delay .8s | — (type) |
| 4 | Flat character sticker bottom-left and small bus sticker bottom-right, overhanging the photo | Two round CSS badges (no image, no cut-out): left "74 °C / 165 °F · core" (white disc 150px, 2px ink outline, Onest 800, mint inner ring), right "Exam · 40 Q · 60 min" ticket (radius 22px, 170×120, `#FCEEF0` ground, 2px ink outline, rotated 4°) | left x 24–174, y 690–840; right x 1230–1400, y 700–820 (overhang the photo by 50–60px) | pop scale .6→1, rotate −5°→0, 0.45s `cubic-bezier(.34,1.56,.64,1)`, delay .95s | — (CSS) |
| 5 | Two vertical fixed tabs, red and mint, on the right edge (+ mini pair top-right) | "Enrol" tab `#E8121F` / "Syllabus PDF" tab `#49EBD2`, 78px wide, radius 22px left; mini pair top-right in the header corner | tabs x 1362–1440, y 217–435 and 447–685; mini pair x 1318–1440, y 0–100 | translateY(24px)→0 + opacity, 0.6s ease, delay .65s / .75s | — |
| 6 | White rounded header chips on the photo (logo chip left, nav chip right) | Left chip: wordmark "Hakari Course" + "Food-safety supervisor · online"; right chip: top line "Next cohort starts 11 Jan 2027 · language switch", bottom line anchor menu with "+" glyphs | left chip x 0–450, y 0–100, radius 0 0 55px 0; right chip x 634–1318, y 0–100, radius 0 0 0 55px | none | — |

The KV is implemented on the home first screen; inner heads (T1-mini) reuse 1, 2, 3 and 6.

---

## 3. Home page (one long conversion page)

### Header (on every page)
- Desktop ≥ 1080px: no full-width bar. **Left chip** (white, x 0–450, height 100px, `border-radius: 0 0 55px 0`): wordmark "Hakari Course" Onest 800 1.75rem ink, under it Public Sans 500 .75rem muted "Food-safety supervisor · online". **Right chip** (white, from x 634 to 122px before the right edge, height 100px, `border-radius: 0 0 0 55px`): line 1 (Public Sans 500 .875rem): "Next cohort starts 11 Jan 2027" · "Notes" · language switcher; line 2 the anchor menu (Onest 700 1rem, each item preceded by a 12px "+" glyph in `#A9C7C3`): Course · Syllabus · Instructor · Dates · Fee · FAQ (links `/#course`, `/#syllabus`… on inner pages they point to the home anchors). **Corner block** (x 1318–1440, 0–100): two stacked 50px mini links "Enrol" (`#E8121F`, white) and "Syllabus PDF" (`#49EBD2`, ink), Onest 700 .8125rem.
- The header is `position: absolute` on home over the photo (not sticky; no scroll listener). Inner pages: same chips over the T1-mini photo.
- 782–1079px: chips collapse to one white bar 72px with bottom radius 0 0 32px 32px: wordmark left, "Enrol" pill (`#E8121F`) + menu button right; menu overlay lists the anchors. < 782px: bar 64px, wordmark + menu button only (Enrol lives in the fixed bottom bar).
- Exactly one menu (the anchor menu); the overlay is the same menu.

### First screen 1440×900 (KV checklist rows 1–6)
- `.hk-hero` = Group `sp-parallax` `--sp-par: 10%`, full-bleed, height `clamp(560px, calc(100svh - 110px), 820px)` (790 at 900), `border-radius: 0 0 88px 88px`, `overflow: clip`. Inside: Group `.sp-parallax__layer` (absolute, inset 0) > Image H1 (`object-fit: cover`, `object-position: 50% 40%`) with the load zoom on the `img` (layer moves, img zooms: no transform conflict); scrim on a `::after` of `.hk-hero`: `linear-gradient(to top, rgba(14,23,22,.42) 0%, rgba(14,23,22,.12) 45%, transparent 70%)`. The scrim is static (not in the moving layer); text is static (never in the layer).
- H1 (white, `text-shadow: 0 2px 24px rgba(14,23,22,.35)`), tagline, hashtag band, badges and tabs as in the KV table. White H1 contrast over the scrimmed lower half ≥ 3:1 (large text) — check at 1440 and 390.
- Load animations are theme CSS keyframes, gated by `@media (prefers-reduced-motion: no-preference)` **and** `html.sp-js:not(.sp-no-motion)`; with `?sp-static`, no JS, reduced motion or in the editor everything is at its final state (no opacity 0). No sp-reveal inside the hero.
- Forbidden on the first screen: table, form, search box, price, a second filled CTA in the content area (the Enrol tab and the header mini link are the only red).
- First-screen saturated share (HSV S > 35 %, V > 24 %): reference **11.1 %** → our hard cap **11 %** (`python3 scripts/check-first-screen.py screenshots/home-desktop.webp --max 11`), target 7–9 % (tabs ≈ 2.7 %, corner pair ≈ 0.9 %, hashtag mint fill ≈ 1.5 %, photo ≤ 3 %: keep the H1 photo neutral — white, stainless, pale teal, skin, light grey-blue gloves).
- **Mobile 390×844:** bar 64px; photo full-bleed 390×500, radius `0 0 32px 32px`, scrim stronger at bottom (.5); H1 Onest 800 2.5rem white, left-aligned 20px inset, at the photo's lower third, **inside the photo, normal flow inside a flex column** (no absolute text overlap); tagline 1.0625rem under it; hashtag band below the photo in normal flow, two lines (#FOODSAFETY / #SUPERVISOR) 2.25rem, left-aligned, crossing the photo bottom by −0.5em margin only (no overlap with H1/tagline); badges `display:none` < 600px; no vertical text; fixed bottom bar 56px, total first-screen content ends ≥ 8px above it. auto-gates must report no first-screen overlap.

### Block order
| # | Pattern (anchor) | Purpose | Layout and photos | Copy |
|---|---|---|---|---|
| 1 | `front-hero` (#top) | KV, promise, first CTA | **T1** as above. Photo **H1** | 20 words |
| 2 | `front-course` (#course) | what you learn, 3 tracks | **T3** white rounded panel on the wash: title "Course / What the six weeks cover", intro paragraph, 3 photo cards **C1 C2 C3** (`sp-stagger`, cards `sp-reveal sp-reveal--up`), 3 outlined link cards | 70-word intro + 3 labels + 3 link labels |
| 3 | `front-why` (#why) | three reasons (instructors, kit, exam) | **T2** ×3 on white: 01 photo **R1** left −5°, 02 photo **R2** right +5°, 03 photo **R3** left −5°; photo wrapper static tilt, inner figure `sp-reveal sp-reveal--zoom`; text column `sp-reveal sp-reveal--right`; row 03 pill = "Enrol in the next cohort" (the repeated CTA, outlined pill) | 3 × 55 words |
| 4 | `front-syllabus` (#syllabus) | 6 weeks, 24 lessons | Wash ground, **T3** panel. Inside: 2 columns 5/12 + 7/12. Left: photo **S1** (kit flat lay, 4:5, radius 33px, `position: sticky; top: 120px`). Right: 6 `details` rows (`1px solid #E5E5E5` top rules, row padding 24px 0): summary = "Week 1" (Onest 800 1rem point) + title (Onest 700 1.375rem ink) + "4 lessons · 3 h" muted right + a 36px outline circle "+" (rotates 45° open, .4s `cubic-bezier(.34,1.56,.64,1)`); body = the 4 lesson titles as a plain list. Week 1 open by default. Under the rows a text link "Download the syllabus (PDF) →" | 6 × (title + 4 lesson lines) + 40-word lead |
| 5 | `front-instructor` (#instructor) | the lead instructor and the team | **T2** single row mirrored: text left, photo **I1** right rotated +5°, 581×685. Number position replaced by the name "Ines Vermeulen" Onest 800 2.6rem point; role line; 2 paragraphs (narrative); a pull quote Onest 700 1.375rem; under it a plain text list (no portraits) "Samuel Adeyemi — temperature and cooling · Lina Haddad — cleaning and allergens · Tomás Brandt — cohort support" + pill "Meet the instructors" → /instructors/ | 120 words |
| 6 | `front-practice` (no anchor) | the feeling of the course (parallax) | Full-bleed (inset 28px each side) photo band **B1**, aspect 1384×600, radius **88px** all corners (ref `chubu-s3.png` closing band), `sp-parallax` `--sp-par: 8%` (layer = Image B1); white line across the top: hashtag pair "#PROBE #RECORD" Onest 800 4rem crossing the band's top edge (same fill rules); one white sentence Onest 700 1.5rem on the lower-left: "Five probe checks in your own kitchen, logged and reviewed by a tutor." | 15 words |
| 7 | `front-stories` (#stories) | 3 learner stories | White ground. 3 cards in a row (gap 32px, each 340px): photo **L1 L2 L3** 4:5 radius 33px rotated −5° / +5° / −5° (ref reason slides), under it name Onest 700 1.25rem, role + cohort muted .875rem, a 35-word quote. `sp-stagger` on the row, cards `sp-reveal sp-reveal--up`. Link "Read their stories →" /stories/ | 3 × 45 words |
| 8 | `front-dates` (#dates) | next cohorts | Wash ground, **T3** panel narrower (max 1108px). 4 rows (`1px solid #E5E5E5` rules): "Cohort 14" Onest 800 point · dates Onest 700 1.375rem ink · "6 weeks · 40 seats · live Q&A Tue 18:30 CET" muted · status pill right (Open = `#49EBD2` fill ink text; Waitlist = white with ink outline). Grid `160px 1fr auto`; < 782px each row stacks. Under: one line "Cohorts start on Mondays and end on Sundays; lessons stay open for 12 months." No photo. | 60 words |
| 9 | `front-fee` (#fee) | the fee and what is included | White ground. Left 5/12: big fee "€390" Onest 800 5.5rem point + "full course, VAT included" + 6 included items as a short list with mint check marks + the CTA filled pill **"Enrol in the next cohort"** (`#E8121F`, white, 1.125rem 700, padding 20px 56px). Right 7/12: the **fee table** (5 rows from section 0: item left, price right). At ≥ 782px the table spans its full column width (width 100 %), price cell `white-space: nowrap; text-align: right; width: 1%` and never clipped; < 782px rows stack (item, then price on its own line, left). Refund sentence under the table. Not inside a panel (keeps the table width honest). | 80 words |
| 10 | `front-faq` (#faq) | 6 questions | Wash ground, **T3** panel: 6 `details` (same row style as block 4 but no week label): Do I need experience? · Which countries is it for? · What is in the kit? · How is the exam proctored? · What if I fail? · Can my team enrol together? Link "All questions →" /faq/ | 6 × 40 words |
| 11 | `front-close` (no anchor) | repeat the CTA | **T1 echo** (ref closing band `chubu-s3.png`): band of colour-free white, hashtag pair "#START #MONDAY" Onest 800 4rem over a rounded (88px) photo **B2** (inset 28px, aspect 1384×520, not parallax), whose lower edge is overlapped by two CTA blocks (ref red/mint/yellow blocks, here two): left 2/3 `#E8121F` "Enrol in the next cohort — Cohort 14 starts 11 Jan 2027", right 1/3 `#49EBD2` "Syllabus PDF"; blocks radius 22px top corners, height 150px, overlap the photo by 75px | 25 words |
| — | Footer | facts | White; wordmark, address, support hours, email; links Syllabus · Instructors · Dates & fees · How it works · Stories · FAQ · Contact · Waitlist · Notes · Privacy · Terms; "© 2026 Hakari Course" | — |

Home photo positions = **14**: H1, C1, C2, C3, R1, R2, R3, S1, I1, B1, L1, L2, L3, B2 — 14 different images, none repeats on home.
English home ≥ 350 words with narrative paragraphs in blocks 2, 3 (×3), 5 (×2) and 7 (≥ 5 paragraphs of ≥ 20 words). CJK home ≥ 700 characters.
The repeated CTA appears as: header mini link, right tab, block 3 row 03 pill, block 9 filled pill, block 11 red block, mobile bottom bar — always the same label and URL.

### Comparison with the most recent themes (home block order)
| # | Shirabe Research | Sumika Residences | Fumi Press Launch | Kazoe Books App (landing) | **Hakari Course** |
|---|---|---|---|---|---|
| 1 | split headline row | torn-edge hero + info bar | left rail + framed photo, title crossing | boxed-label H1 on split gradient | **full-bleed photo, 88px rounded bottom, hashtag foot band, badges, vertical tabs** |
| 2 | framed window | offset photo pair intro | dates | numbered feature rows | **white rounded panel: 3 photo cards + 3 link cards** |
| 3 | THE BRIEF ink band | 3 houses sticky-media rows | excerpt | pricing table | **tilted (±5°) 88px photos with big numbers** |
| 4 | METHOD staggered columns | glide strip | editions | FAQ (numbered details) | **syllabus accordion with sticky kit photo in a panel** |
| 5 | numbers + marquee | day-in-residence pair | author | fixed CTA pair bottom-right | **instructor tilted row** |
| 6 | STUDIES ledger | parallax band | pre-order | — | **rounded parallax photo band with hashtag** |
| 7 | PEOPLE ledger | rates table | — | — | **3 tilted story cards** |
| 8 | FEES table | — | — | — | **cohort dates panel** |
| 9 | contact | — | — | — | **fee + table** |
| 10 | — | — | — | — | **FAQ panel** |
| 11 | — | — | — | — | **closing photo band with 2 overlapping CTA blocks** |
Why not alike: no ledger, rail, boxed label, torn edge, framed window or split hero. Kazoe is the only other landing; it shares the subjects "numbered rows / pricing / FAQ / fixed CTA" but none of the forms: Kazoe's rows are square-cornered full-bleed `details` with an 80px number column and ink "+" boxes, its CTA pair is horizontal bottom-right, its type is boxed; Hakari's numbers sit beside **tilted, 88px-rounded photos**, its CTAs are **vertical edge tabs**, its sections live in **inset white 88px panels on a pastel wash**, and its first screen is a full-bleed photo. Sumika has a parallax band too, but square, full-bleed and without the hashtag crossing; ours is inset with 88px corners.

---

## 4. Inner pages (≥ 8 content pages + legal + LMS/Woo templates)
Every page: T1-mini head → page body inside one or more T3 panels on the wash → close line with the outlined pill "Enrol in the next cohort". No sidebar. Same header and fixed tabs.

1. **Syllabus** (`/syllabus/`): head P1 "Syllabus / Six weeks, twenty-four lessons" #SYLLABUS #6WEEKS. Panel 1: lead (60 words) + 6 week rows (`details`, all open on this page, anchors `#week-1…6`), each with its 4 lesson titles, minutes, and one practice task. T2 row: S1 kit photo −5°, "Your practical log": 5 probe checks explained (80 words). Panel 2: "What you will be able to do" 6 outcome sentences (list, not a grid). Downloadable PDF link (a simple generated PDF in assets, or the page itself with print CSS; link text "Syllabus PDF").
2. **Instructors** (`/instructors/`): head P2 "Instructor / Taught by people who audit kitchens". T2 rows ×3: I1 Ines (−5°), P3 Samuel (+5°), P4 Lina (−5°), each: name in the number position (Onest 800 2.6rem point), role, 100-word bio, one quote. Panel: Tomás Brandt and support (text, no portrait) + 3 outlined link cards (Contact, FAQ, Dates & fees).
3. **Dates & fees** (`/dates-fees/`): head R2 "Dates / Cohorts and fees". Panel 1: 4 cohort rows (same as home). Panel 2: **fee table** full panel width at ≥ 782px (item | what is included | price), price column nowrap, right-aligned, never clipped; stacks on mobile. Refund rules (section 0), team seats explanation, invoice note (VAT included, company invoices on request). CTA pill.
4. **How it works** (`/how-it-works/`): head R3 "How it works / From enrolment to certificate". Panel: the 6-part process as 6 short paragraphs each opened by an Onest 800 2.6rem point number (01–06) inline before the heading — a reading column 720px, not a grid or timeline. T2 rows ×2: C1 "Who it is for" (#who), C2 "The exam" (#exam: 40 questions, 60 min, 75 %, webcam proctoring, one free resit in 30 days, certificate in 2 working days, valid 3 years).
5. **Stories** (`/stories/`): head B1 "Stories / Three kitchens, three supervisors". T2 rows ×3: L1 Priya, L2 Jonas, L3 Camille: 150-word story each (their kitchen, what changed in their routine — no promised outcomes), name + role + cohort. Closing panel: one-line quote + CTA.
6. **FAQ** (`/faq/`): head C3 "FAQ / Questions before you enrol". Panel with 12 `details` in 3 groups (Course · Exam and certificate · Payment and refunds). Answers repeat the fixed numbers exactly.
7. **Contact & support** (`/contact/`): head R1 "Support / Ask us anything". Panel: address (Havenkade 14, 3024 Rotterdam), hours Mon–Fri 9:00–17:00 CET, email, reply within 1 working day; 3 outlined link cards (FAQ, Dates & fees, Waitlist). No map embed; a simple contact form is optional and only below the head.
8. **Waitlist** (`/waitlist/`, the newsletter page = early-access signup): head H1 crop (`object-position: 50% 70%`, bench and hands) "Waitlist / Hear first when a cohort opens". Panel: 50-word explanation (cohorts 16 and 17), the signup form (name, email, cohort interest select, consent checkbox; theme's own form block or a plain HTML form posting to a thanks page) — never in the first screen at 390 or 1440 (head first).
9. **Course** (Tutor LMS single course `/course/food-safety-supervisor/` + lesson view + Tutor dashboard): head H1 crop "Course / Food-safety supervisor". Panel: course intro, Tutor curriculum (6 topics = weeks, 24 lessons; first lesson of week 1 free preview), enrol box (price €390, "Enrol in the next cohort" → WooCommerce add-to-cart). Lesson view and dashboard styled with the panel radius 33px, ink text, point links, red only for the enrol / complete buttons.
10. **Thanks** (`/thanks/`): wash head "Thanks / You're on the list" (or "You're enrolled" after purchase via Woo thank-you): next steps (kit ships in 5 working days, first lesson opens on the cohort Monday).
11. **Privacy** (`/privacy/`) and 12. **Terms** (`/terms/`, course terms incl. refunds, exam rules, certificate validity): wash head, text in a 720px panel column.
13. **Notes** (blog index + single; ≥ 2 posts): "Cooling cooked rice: the two-stage rule" (featured C2), "Calibrating a probe thermometer in two minutes" (featured S1). Cards radius 33px.
14. **WooCommerce cart / checkout / order received**: inside a T3 panel; totals box radius 22px with `1px solid #E5E5E5`; primary buttons `#E8121F`. Works with the theme even if WooCommerce or Tutor is inactive (static fallbacks, no fatal).

---

## 5. Colour (reference relations, tok(a))
| Role | Hex | Source | Use | Share |
|---|---|---|---|---|
| Ground | `#FFFFFF` | tok(a) ground #FFFFFF | page, panels, header chips | ≈ 45 % |
| Wash | `linear-gradient(115deg, #FCEEF0 0%, #EEF8F5 48%, #FBF9E3 100%)` | tok(a) pink→mint→cream wash (#FBF9E3 kept as the last stop; the middle stop is the mint tint) | page ground under panels, legal heads | ≈ 20 % |
| Ink | `#0E1716` | tok(a) text #000000 (+5 % L, teal-tinted) | text, outlines, icon strokes | ≈ 5 % |
| Point | `#5F8884` | **replaces** tok(a) red #FF1626 on display words, numbers, two-line headlines, solid hashtag word, links | ≤ 4 % |
| CTA red | `#E8121F` | tok(a) #FF1626, −5 % L so white text reaches 4.5:1 | Enrol tab, Enrol buttons, CTA arrows, red close block | ≤ 2 % first screen, ≤ 4 % page |
| Mint | `#49EBD2` | tok(a) sub mint #49EBD2 (unchanged) | Syllabus tab, hashtag word-1 fill, Open pills, chips, check marks, icon fills | ≤ 2 % |
| Pale teal | `#A9C7C3` | derived from point | "+" glyphs in nav, muted rules | < 1 % |
| Line | `#E5E5E5` | tok(d) link-card border | card outlines, row rules | — |
| Muted text | `#5A6866` | derived from ink | meta, captions | — |
| Pink tint | `#FCEEF0` | tok(a) pale pink wash | exam ticket badge, wash first stop | < 1 % |
Why the point colour changes (the only swap): the reference's red point is used on every title and number; on a food-safety page red display type reads as warning/fail signage (critical-limit and "unsafe" markings in HACCP records), and the row fixes the brand hue rusty pale teal `#5F8884`. We keep the reference's relation (one strong point colour only on display words, numbers and headlines; everything else white/neutral) and **keep the reference red itself on the CTA tab and CTA buttons**, plus the reference mint unchanged, so the red + mint tab pair reads exactly like the reference. Not cream-led: white ground; the cream only appears as the last gradient stop.
Contrast: ink on white 18:1; white on `#E8121F` ≥ 4.5:1 (verify; if < 4.5 use 700 weight ≥ 18px); ink on `#49EBD2` ≥ 10:1; point `#5F8884` on white 3.9:1 → only for text ≥ 1.5rem or bold ≥ 1.125rem (display words, numbers, headlines); body links use ink with a point underline.
First-screen saturated cap **11 %** (section 3).

## 6. Typography
- Latin: **Onest** (display/headings, 700/800; OFL) + **Public Sans** (body/UI, 400/500/700; OFL). CJK: **Noto Sans TC** (zh-TW) / **Noto Sans JP** (ja), 500/700, as theme.json `fontFace` with the zh-TW / ja subset files (Hokuto / Hada method; the subset script is known broken). No serif fonts.
- theme.json fontFamilies:
  - `display`: `"Onest", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`
  - `body`: `"Public Sans", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`
  - with `:lang(ja)` rules putting Noto Sans JP before TC (and `:lang(zh-TW)` TC first); copy `shared/inc/editor-lang.php` → `inc/editor-lang.php` and `require_once` it so the editor matches (check-editor-fonts.mjs).
- Sizes (theme.json presets; tok(b) source in brackets): small .8125rem · base 1.0625rem (17px, body 16.6px) · medium 1.25rem (lead 19.9px) · large 1.75rem (row headline 28px) · x-large 2.125rem (JP section title 33.2px) · xx-large 3.5rem (section English 55.4px) · display 5rem (hashtag ≈ 100px scaled) · **huge 5.5rem** (hero H1 and "01" numbers 88.6px) — max 5.5rem ≥ 4.25rem.
- Body: Public Sans 400 (500 for UI), line-height **2.0** in en/fr/de (tok(b) 33.2/16.6), colour ink; zh-TW/ja body line-height **1.85**, CJK headings ≈ 0.75× the Latin size (hero H1 4.125rem, section subtitle 1.75rem), weight 700; fr/de `hyphens: auto`, `overflow-wrap: anywhere` on headings.
- Headings: Onest 800 display words letter-spacing −0.05em (tok(b) −2.77px), line-height 1.05; Onest 700 subtitles letter-spacing 0.05em (CJK) / 0 (Latin), line-height 1.6.
- Hero H1 `clamp(2.5rem, 6vw, 5.5rem)`, line-height 1.1, letter-spacing −0.03em.

## 7. Spacing, radius, shadow (tok(c)(d))
- Content width 1136px (rows) / 1108px (cards, dates) / panel 1330px at 1440 (inset 55px). Section gap 140px desktop, 88px mobile. Panel padding 120px top / 100px bottom (tok(c) 99.7px) desktop, 64px / 56px mobile.
- Radius scale: **88px** (hero bottom, panels, tilted photos, photo bands; 32px < 782px) · **33px** (photo cards, story photos, kit photo; 20px mobile) · **22px** (link cards, tabs, CTA blocks, ticket badge) · **999px** (pills). theme.json custom tokens `--hk-r-xl: 88px; --hk-r-l: 33px; --hk-r-m: 22px`.
- Borders 1px (`#E5E5E5` cards, `#0E1716` pills and badges 2px). One shadow only: `0 0 55px rgba(223,212,159,.3)` on tilted photos and panels (tok(d)).

## 8. Photos (18, Grok, one at a time, read each one)
STYLE (exact string on every prompt):
`photorealistic high-key documentary photograph, bright soft daylight from large windows, white and pale grey professional teaching kitchen, brushed stainless steel benches, pale mint and soft teal accents, light blue-grey nitrile gloves, crisp white aprons, diverse adults, calm focused candid moment, 35mm lens, shallow depth of field, airy whites, gentle cool tones, no text, no logos, no brand marks, no readable labels or screens, no Japanese elements`

Rules: 0 cut-outs; ≤ 300 KB, ≤ 2000px, webp; no text, logos, broken hands or faces; thermometer displays blank or out of focus; regenerate any that drift from STYLE. readme.txt line per image (AI-generated, CC0).

| ID | Subject / composition | Ratio | Pages (each once per page) | Home |
|---|---|---|---|---|
| **H1** | KV: three trainees in white aprons lean in around a stainless bench (left one bending in, middle one leaning over from behind, right one standing and laughing), centre: gloved hand pushing a probe thermometer into a tray of cooked chicken and rice; faces in the upper half, calm bench surface in the lower-middle for type | 2.1:1 (2000×950) | Home hero; Waitlist head; Course head | ✔ |
| **C1** | trainee checking a delivery crate of vegetables at a kitchen back door with a probe and a blank clipboard | 1.11:1 | Home card 1; How it works row "Who it is for" | ✔ |
| **C2** | close-up: probe thermometer in a steaming stainless pot of soup, gloved hand | 1.11:1 | Home card 2; How it works row "The exam"; Notes post 1 | ✔ |
| **C3** | gloved hands wiping a stainless bench with a cloth, separate lidded containers in the background | 1.11:1 | Home card 3; FAQ head | ✔ |
| **R1** | instructor (woman, ~45) demonstrating probe calibration to two trainees at the bench | 0.85:1 | Home row 01; Contact head | ✔ |
| **R2** | learner at a bright home-kitchen counter with an open laptop (screen not readable) and the unboxed probe kit | 0.85:1 | Home row 02; Dates & fees head | ✔ |
| **R3** | learner at a desk in a bright room with laptop and headset, notebook, calm concentration (exam) | 0.85:1 | Home row 03; How it works head | ✔ |
| **S1** | overhead flat lay of the kit on a white bench: probe thermometer, calibration cup of ice water, wipes, blank log pad, pencil | 4:5 | Home syllabus; Syllabus T2 row; Notes post 2 | ✔ |
| **I1** | portrait of Ines (woman ~45, short grey-streaked hair, pale teal shirt, white apron) in the teaching kitchen, relaxed | 0.85:1 | Home instructor; Instructors row 1 | ✔ |
| **B1** | wide: the whole teaching kitchen from behind the trainees, four people at two benches, soft window light | 2.3:1 | Home parallax band; Stories head | ✔ |
| **B2** | wide: two trainees and a tutor laughing at the bench as one writes in a log pad, view from the side | 2.66:1 | Home closing band | ✔ |
| **L1** | Priya: bakery shift lead in a bright bakery, checking a tray of loaves with a probe | 4:5 | Home story 1; Stories row 1 | ✔ |
| **L2** | Jonas: school-canteen cook at a serving line probing a hot-holding tray | 4:5 | Home story 2; Stories row 2 | ✔ |
| **L3** | Camille: food-truck owner at the hatch of a white truck interior, gloved, probing a pan | 4:5 | Home story 3; Stories row 3 | ✔ |
| **P1** | gloved hands labelling a lidded container with blank date tape, rows of containers | 3.3:1 | Syllabus head | |
| **P2** | three tutors talking around a bench (no Ines-centred portrait) | 3.3:1 | Instructors head | |
| **P3** | portrait of Samuel (man ~40, chef jacket) sliding a tray into a blast chiller | 0.85:1 | Instructors row 2 | |
| **P4** | portrait of Lina (woman ~35, white apron, sleeves up) at a sink with cleaning cloths | 0.85:1 | Instructors row 3 | |
Count: 18 files (H1, C1–C3, R1–R3, S1, I1, B1, B2, L1–L3, P1–P4) — within 12–18. Home uses 14 different images in 14 positions.
Per-page check: Syllabus P1, S1 · Instructors P2, I1, P3, P4 · Dates & fees R2 · How it works R3, C1, C2 · Stories B1, L1, L2, L3 · FAQ C3 · Contact R1 · Waitlist H1 · Course H1 · Notes index C2, S1 (post 1 / post 2). No image twice on one page.

## 9. Scroll effects (sp-scroll; 3 kinds on home: parallax, reveal, stagger)
| sp-* | Where | Source (e-chubu.jp, tok(g)) | Our values |
|---|---|---|---|
| `sp-parallax` | **Hero** `.hk-hero` (layer = Group `.sp-parallax__layer` holding H1; foreground H1, tagline, scrim, hashtag outside the layer) and **block 6** photo band (layer = Image B1). Inner heads T1-mini also `sp-parallax` `--sp-par: 6%` | hero image zoom 1.4→1 on load + photo-led sections; the reference has no scroll parallax, we translate its "photo moves under the frame" load motion into scroll | hero `--sp-par: 10%`, band `--sp-par: 8%`; mobile keeps both at `--sp-par: 6%` (set in a `@media (max-width:781px)` rule); check-parallax ≥ 6px desktop and mobile, 0 under reduced motion |
| `sp-reveal sp-reveal--zoom` + `--right` | Block 3 and block 5 tilted rows: inner figure of `.hk-tilt` gets `--zoom` (tilt stays on the static wrapper, never on the observed element); the text column gets `--right` | about-row photo rotate −3→−5°, scale 1.1→1, 0.5s `cubic-bezier(.34,1.56,.64,1)`; `.fadein-right` 33px 0.8s ease, once at top 70 % | zoom: `--sp-dur: .5s; --sp-ease: cubic-bezier(.34,1.56,.64,1)` (scale 1.06→1, sp default); right: `--sp-dist: 30px` (cap), `--sp-dur: .8s`, `--sp-ease: ease`; the overrides need selectors at least as specific as `html.sp-js:not(.sp-no-motion) .sp-reveal--zoom` |
| `sp-stagger` (+ children `sp-reveal sp-reveal--up`) | Block 2 photo cards (3) and link cards (3, own stagger group), block 7 story cards (3) | reason/gallery slides rise 10 % stagger .1s, 1.6s elastic | sp stagger .12s steps, `--sp-dist: 24px`, `--sp-dur: .8s`, `--sp-ease: cubic-bezier(.34,1.56,.64,1)` |
| `sp-reveal sp-reveal--wipe` | section title pairs (1.4) | English title char bounce `elastic.out(1.2,.6)` stagger .025s | sp default wipe 1.1s; counts as the same reveal family |
Not animated: hero (load CSS only), fee table, cohort rows, FAQ, forms, legal pages. No marquee, no sp-count. No own scroll listeners; header does not change on scroll.

## 10. Responsive rules (hard)
- 390px first screen: no vertical text, no absolutely positioned label over text; badges hidden; hashtag in normal flow; fixed bottom bar does not cover first-screen text.
- Fee tables at ≥ 782px (800 and 1280): table `width: 100%` of its column/panel, `table-layout: auto`, price column `white-space: nowrap; text-align: right`, no `overflow: hidden` on the wrapper, nothing clipped. Any table (fees, cohorts) < 782px becomes stacked rows (`display: block` cells, label above value).
- Tilted photos never cause horizontal scroll (390 and 1280 `scrollWidth == innerWidth`).
- Vertical tabs only ≥ 782px; bottom bar only < 782px.
- fr/de: tab labels, hashtag band (stays English) and header menu must fit at 1280 and 1440 without wrapping into the corner block; if the menu wraps at 1080–1279, shorten to the overlay.

## 11. Home acceptance checklist
1. First screen 1440×900 shows all 6 KV checklist items: full-bleed H1 photo with 88px rounded bottom corners under two white header chips (55px inner radius) + corner mini pair; white two-line H1 left of centre with the tagline offset right; "#FOODSAFETY #SUPERVISOR" crossing the photo's bottom edge with the mint-outlined / teal-solid fills; two badges overhanging the bottom corners; red + mint vertical tabs at y 217 / 447.
2. Load motion (with `?sp-motion`): frame .9→1, image 1.4→1, copy rises with overshoot, tabs rise, badges pop at ~.95s; all final with `?sp-static` and reduced motion.
3. `check-first-screen.py --max 11` passes (target 7–9 %).
4. Block order equals section 3 (11 blocks); T3 panels on the wash in blocks 2, 4, 8, 10 visibly inset with 88px corners; T2 tilted rows in blocks 3 and 5 (±5°, 88px, big point-colour numbers / name); closing band with two overlapping CTA blocks.
5. ≥ 8 image positions (14), all different, all matching STYLE; no cut-outs; no text in photos.
6. Repeated CTA identical label and URL in all 6 places; only one menu.
7. Fixed numbers match section 0 on home, inner pages and in all five languages (€390 / €340 / €330 / €60 / €20; 6 weeks, 24 lessons, 40 questions, 60 min, 75 %, cohorts 14–17 with the listed dates, 40 seats).
8. Fee table at 800 and 1280: full column width, prices nowrap and right-aligned, not clipped; stacked at 390.
9. check-parallax.mjs: hero and band parallax ≥ 6px on desktop and mobile; ≥ 3 reveals hidden before entering and final after; nothing transparent at the bottom; reduced motion static.
10. Fonts: Onest + Public Sans in en/fr/de, Noto Sans TC / JP in zh-TW / ja, editor = front end; theme.json max 5.5rem.
11. 390px: no horizontal overflow, no overlapping text, no vertical labels, bottom bar present.
12. Home ≥ 350 English words, ≥ 5 narrative paragraphs.

## 12. Similarity table (target ≈ 80 %)
| Dimension | Reference value (token) | This theme value |
|---|---|---|
| Ground / wash | #FFFFFF + pink→mint→cream gradient (a) | #FFFFFF + #FCEEF0→#EEF8F5→#FBF9E3 |
| Point colour | #FF1626 on titles / numbers (a) | #5F8884 on titles / numbers (industry swap, reason §5) |
| CTA tab colours | red #FF1626 + mint #49EBD2 (a)(f) | #E8121F (−5 % L) + #49EBD2 |
| Text | #000000 (a) | #0E1716 |
| First-screen saturated share | 11.1 % (a) | cap 11 %, target 7–9 % |
| Body type | 16.6px / 2.0 / 500 (b) | 17px / 2.0 / 400–500 |
| Section English title | 55.4px, −0.05em, point colour (b) | 3.5rem (56px), −0.05em, point |
| Section local title | 33.2px / 1.6 / 700 / +0.05em (b) | 2.125rem (34px) / 1.6 / 700 / +0.05em |
| Big number | 88.6px display (b) | 5.5rem (88px) Onest 800 |
| Row headline | 28px bold, two lines, point (b) | 1.75rem (28px) 700, two lines, point |
| Hero radius | bottom corners 88.6px; 2rem mobile (d) | 88px; 32px mobile |
| Panel | inset 55px, radius 88.6px, bottom pad 99.7px (c)(d) | inset 55px, 88px, 100px |
| Photo cards | 355×320, radius 33px, gap 22px (c)(d)(e) | 355×320, 33px, 22px |
| Link cards | radius 22px, 1px #E5E5E5 (d) | 22px, 1px #E5E5E5 |
| Tilted photo | 581×685, radius 88px, −5°, x 152–733, gap 70px (c)(e) | 581×685, 88px, ±5°, x 152–733, gap 70px |
| Side tabs | 78×218 / 78×238, y 217 / 447, radius 22px left (f) | identical |
| Header chips | white, 55px inner radius, height ≈ 100px (d) | identical geometry |
| Hashtag band | ≈ 100px, outline + fill + solid, straddling photo bottom (f) | 5rem (80px), same fill logic, straddling |
| Shadow | 0 0 55px rgba(223,212,159,.3) (d) | identical |
| Hero load | wrapper .9→1, img 1.4→1, 0.8s cubic-bezier(.83,0,.17,1) (g) | identical (theme CSS) |
| Sticker pop | scale .6→1, rotate −5°→0, .45s cubic-bezier(.34,1.56,.64,1), delay .95s (g) | identical on CSS badges |
| Tab entrance | translateY 1.5rem, delay .65–.75s (g) | 24px, delay .65 / .75s |
| Row photo entrance | rotate −3→−5°, scale 1.1→1, .5s overshoot (g) | static −5°, scale 1.06→1, .5s same easing (sp-reveal--zoom) |
| Text entrance | from right 33px, .8s ease, once (g) | sp-reveal--right 30px, .8s ease, once |
| Card entrance | rise 10 %, stagger .1s, elastic (g) | 24px, stagger .12s, overshoot easing |
| Imagery | photos, high-key-ish daylight, ~40 % of first screen (e) | photos, high-key, ~55 % of first screen |
Own: all photos, copy, brand, wordmark; badges replace the reference illustrations (we do not reproduce them).
