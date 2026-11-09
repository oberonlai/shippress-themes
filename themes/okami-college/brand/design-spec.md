# Okami College: design spec (stage 1, binding for implementation)

Slug `okami-college`, two-year hotel management college with its own teaching hotel. Type `education` (business-style, WooCommerce compatible but not required; no shop, no LMS). Main reference: **Japan Hotel School, https://www.jhs.ac.jp/** (English view; see `reference.md`, `reference-tokens.md`, screenshots in `ref/`). No secondary reference. Borrow structure, techniques, key-visual concept, colour relationships and measured tokens; never the reference's photos, copy, logo or its vertical right-edge tabs (used by another theme).

Token citations: `tok(a)`–`tok(g)` = sections (a)–(g) of `reference-tokens.md`; `shot:first` = `ref/jhs-first.png`, `shot:1000|2000|3000|5000` = `ref/scroll-jhs-<n>.png`.

Row facts kept: archetype editorial-magazine, nav split, real documentary photography, palette ink navy `#2A3850`, fonts Fraunces + Source Serif 4, font_direction **serif** (CJK Noto Serif TC / Noto Serif JP, Ming/Mincho style), five languages en, zh-TW, ja, fr, de, page_structure **results-first-case-wall** (graduate outcomes come before course detail on the home page).

---

## 0. Fixed brand facts (every page, every language; no other numbers anywhere)

- **Okami College**, founded **2009**, Lisbon, Portugal. Campus and teaching hotel at **Rua do Farol 22, 1200-180 Lisboa** (fictional address). Phone +351 21 000 0420 (fictional). Email admissions@okamicollege.example.
- Teaching hotel **Okami House**: **42 rooms**, a **60-cover** restaurant and one banquet room; open to real guests, staffed by students under instructors.
- **Two-year Diploma in Hotel Operations**, one intake per year in **September**, **48 places**, taught in **4 desk groups of 12**. Weekly rhythm: **3 days on the floor** of Okami House, **2 days in class**. **38 partner hotels** for the **16-week placement**.
- Hours: Admissions office Mon–Fri 09:00–17:30. **Open mornings**: first and third Saturday of each month, 10:00–13:00. Student-run restaurant lunch Tue–Fri 12:00–14:30. (Local formats per language in brand.md, values identical.)
- Currency **EUR** in all five languages.

### Course pacing (4 terms; identical on Home, Programme, Desks & Kitchens, Admissions)
| Term | Months | Desk focus | Weeks |
|---|---|---|---|
| Term 1 | Sep–Jan, year one | Front desk and reservations | 18 |
| Term 2 | Feb–Jun, year one | Banquet and restaurant floor | 18 |
| Term 3 | Sep–Jan, year two | Teaching kitchen and rooms division | 18 |
| Term 4 | Feb–Jun, year two | 16-week placement at a partner hotel + 2-week leadership seminar | 18 |

### Fees (7 items; identical on Home, Fees & Funding, Admissions, all languages)
| # | Item | Note | Price |
|---|---|---|---|
| 1 | Application and Saturday shift trial | one-time | €60 |
| 2 | Tuition, per year (two years) | payable per term | €8,400 |
| 3 | Place deposit | deducted from year-one tuition | €900 |
| 4 | Uniform and knife kit | one-time, yours to keep | €480 |
| 5 | Residence room at Okami House | per month, optional | €520 |
| 6 | Evening Certificate in Banquet Service | 10 weeks, two evenings a week | €1,250 |
| 7 | Front Desk Weekend Course | 2 days | €390 |

### How a place is offered (5 steps, ruled rows, never a step grid)
1. Apply online (€60, includes the trial).
2. Saturday shift trial: 3 hours on one desk of Okami House beside a student.
3. A 30-minute conversation with two instructors.
4. Offer letter within **10 working days**.
5. Pay the **€900** deposit within **21 days** to hold the place.

### People (7, fictional, same names everywhere)
| Name | Role | Line |
|---|---|---|
| Helena Varga | Principal | 19 years running hotel floors before teaching |
| Tomás Ribeiro | Front Office instructor | Term 1 lead; former night manager |
| Amara Okonkwo | Banquet and Restaurant instructor | Term 2 lead |
| Pieter de Wit | Executive Chef instructor | runs the teaching kitchen |
| Lin Hsiao-wen | Rooms Division instructor | Term 3 lead, housekeeping standards |
| Rahul Mehta | Placement coordinator | looks after the 38 partner hotels |
| Sofia Andersen | Admissions officer | runs open mornings and trials |
Home shows the first six; Faculty page shows all seven.

### Graduate cases (4; the "case wall"; no hotel brand names)
| ID | Graduate | Class | Now | Photo |
|---|---|---|---|---|
| G1 | Inês Carvalho | 2024 | Reception supervisor, a 180-room city hotel, Porto | C1 |
| G2 | Daniel Mensah | 2023 | Banquet captain, a conference hotel, Rotterdam | C2 |
| G3 | Yuna Park | 2025 | Chef de partie, a seaside resort kitchen, Algarve | C3 |
| G4 | Mateo Fischer | 2024 | Housekeeping supervisor, a 90-room boutique hotel, Vienna | C4 |
No placement-rate percentages, no "guaranteed job", no awards. The four figures used: **2** years · **16** weeks of placement · **38** partner hotels · **12** students per desk group.

---

## 1. Signature techniques (three; obvious at a glance, never diluted)

### T1. Inset hero window with a white tagline box on its top-left and a gradient caption strip crossing its lower right (jhs.ac.jp first screen, `shot:first`, `tok(c)`, `tok(f)`)
- Reference: below a 145 px white header, one photo starts **100 px from the left** and bleeds off the right edge (x 100–1440, y 145–770). A **white box** (924 × 104 at 1440) sits flush on the photo's left edge, 63 px below its top, with one serif tagline line (36 px, ink). At the lower right a **teal→slate gradient strip** (830 × 40, `#4FC3C8 → #5C7988`) runs under a **44 px bold white caption** whose lower 60% sits on the strip, the upper 40% over the photo. Four 50 × 4 px slider dashes at the photo's bottom right. "PICK UP" label crosses the photo's bottom-left edge.
- Okami (home block 1): identical geometry. Photo window x 100–1440 (left inset `7vw`, min 24 px), height `clamp(420px, 43.4vw, 625px)`; white box left = photo left, top = photo top + 63 px, width 64% of the photo (924/1340 → 69%; use `min(924px, 69%)`), height auto with padding 30 px 50 px; tagline Fraunces 400 `clamp(1.25rem, 2.65vw, 2.25rem)`, ink `#282828`: **"A college that runs a real hotel floor."** Gradient strip: right 50 px, bottom 75 px, width `min(830px, 62%)`, height 40 px, `linear-gradient(90deg, #4FC3C8, #5C7988)`; caption Fraunces 600 `clamp(1.75rem, 3.05vw, 2.75rem)` white, letter-spacing 0.01em, line-height 1, placed so its baseline is 8 px above the strip bottom: **"Learn the floor by working it"**. Dashes: 3 (we have 3 slides), 50 × 4, gap 10, at right 64 px, bottom 22 px, white; active `#2A3850`.
- Continuation (inner pages, all 10): "window head" = same inset photo window, height `clamp(260px, 25vw, 360px)`, white box with the page title (Fraunces 400 2.25rem) and the small caps label above it inside the box; gradient strip with a short white caption (Fraunces 600 1.75rem) at the lower right. No slides on inner pages.
- Must not be diluted: the photo keeps the **left inset and right bleed** (never centred, never full bleed, no radius); the white box **overlaps the photo** (not above it); the strip is the **two-colour gradient** with white bold type larger than the strip height.

### T2. Partial-width pale panel with white rows whose thumbnails poke out of the row's top-left corner, plus a ruled list at right (jhs EVENT, `shot:2000`, `shot:3000`, `tok(c)`, `tok(e)`, `tok(f)`)
- Reference: a pale panel covering **85.3%** of the viewport width, flush left, stopping short of the right edge; centred small label + H2; left 2/3: white rows (≈760 × 167) each with a **200 × 140 thumbnail that overhangs the row's top-left by 15 px up and 15 px left** and a small yellow "reserve" tag on the thumb's lower right; right 1/3: a ruled list (1 px rules, tracked serif 20 px items, yellow tags). Under it two **2 px ink outline pill buttons**.
- Okami (home block 7 "Open mornings and trials"): panel `#EEF2F6`, width 85.3% (`width: 85.3vw; margin-left: 0`), padding 70 px 0 42 px. Inside the 1160 container: left column 760 px = 2 white rows (E1, E2 thumbs, 200 × 140, `object-fit: cover`, `transform: translate(-15px,-15px)` achieved with negative margins in a grid, not absolute positioning); row content: date (Source Serif 4 1rem, ls 0.1em), title Fraunces 400 1.25rem ls 0.08em (tok(b) 20 px / 1.6 px), chevron right. Tag "Book" `#F2D21B` ground, ink 0.75rem italic bold, skewed parallelogram `transform: skewX(-12deg)`, on the thumb's lower-right corner. Right column 360 px: ruled list (1 px `#DDE3EA` top + bottom, padding 26 px 20 px) of 4 items: "First visit to a hotel school? Start here", "Tour of the residence rooms", "One-to-one online conversation" (tag Book), "Evening certificate taster" (tag Book). Two outline pills: "All open mornings ›", "Book a shift trial ›".
- Second panel (home block 9, people): `#F4EFF7`, width 77.9%, flush left, holding a 3-column ruled link grid (see §3) = the reference's audience grid (`shot:5000`).
- Continuation: Admissions (open-morning rows), Placements (one row per graduate case, C-photo thumbs poke out), News index (post rows with poke-out thumbs, lilac panel), Residence (rows for room type / meals / rules). 4 inner pages.
- Must not be diluted: panel visibly **stops short of the right edge** (≥ 14% white to its right at 1440), thumbs **visibly overhang** the white row by 15 px on two sides, the yellow tag is tiny (≤ 80 × 24).

### T3. Wide white cards with a 2.55:1 photo and a widely tracked serif title, plus an 11.6:1 banner strip (jhs Department, `shot:1000`, `shot:2000`, `tok(b)`, `tok(d)`, `tok(e)`)
- Reference: centred "COURSE" label + H2 "Department" + "List ›" right; 2 × 2 cards 560 wide, **photo 560 × 220 (2.55:1)** on top, white body with a small tracked caps label (12 px, 0.2em), title **24 px, letter-spacing 0.3em**, one-line subtitle 16 px, chevron at right; radius 0; soft tinted glow (`0 4px 20px` 6% pink/blue). Under the grid a **1160 × 100 (11.6:1) photo banner** with centred white tracked serif line (22 px, 0.3em) and chevron.
- Okami (home block 5 "Desks and kitchens"): 4 cards D1–D4, gap 40 px, labels FRONT OFFICE / BANQUET / KITCHEN / ROOMS; titles "Front Desk", "Banquet Floor", "Teaching Kitchen", "Rooms Division" Fraunces 400 1.5rem ls 0.3em; subtitles ("Every arrival, every key", "Sixty covers, set by hand", "A brigade of twelve", "Forty-two rooms by noon"); glow alternates `0 4px 20px rgba(214,140,170,.10)` (cards 1, 4) and `rgba(74,149,202,.10)` (2, 3) per tok(d). Banner B1 1160 × 100 with an ink 35% overlay and the line "Evening certificate in banquet service ›" Fraunces 1.375rem white ls 0.3em.
- Continuation: Desks & Kitchens page (4 full cards + banner), Programme (4 term cards with term label + desk title, 2.55:1 photos), About (2 cards: The college / Okami House), Fees & Funding (banner strip linking to the Evening certificate), Faculty (banner to Placements). 5 inner pages.
- Must not be diluted: photo ratio exactly **2.55:1**, title tracking **0.3em** (not 0.1), centred card text, radius 0, banner ratio ≈ **11.6:1** at desktop.

### Supporting details (required, not counted as signatures)
- Section head (tok(b)): centred Latin caps label 0.75rem ls 0.2em (`COURSE`-style; ours: RESULTS, PACING, DESKS, VISIT, FEES, FACULTY, NEWS), H2 centred Fraunces 400 2.25rem / 1.5, "List ›" text link right-aligned on the H2 line (desktop only).
- Pick-up tiles (`shot:first`): staggered alternating text / photo tiles, each text tile topped by a 220 × 6 rule `linear-gradient(90deg, #4A95CA, #6C6FA8)`.
- News rows: 1 px `#DDDDDD` rules, date ls 0.1em, grey `#F0F0F0` 0.75rem tag boxes, serif title (`shot:5000`).
- Buttons: 2 px ink outline pill, radius 9999px, padding 14 px 40 px, hover = ink ground white text 0.3s ease.

### Signature continuation map
| Page | T1 window head | T2 partial panel + poke-out rows | T3 2.55:1 cards / 11.6:1 banner |
|---|---|---|---|
| About | yes | — | 2 cards |
| Programme | yes | — | 4 term cards |
| Desks & Kitchens | yes | — | 4 cards + banner |
| Placements & Graduates | yes | 4 case rows | — |
| Faculty | yes | lilac ruled grid (people) | banner |
| Fees & Funding | yes | — | banner |
| Admissions | yes | open-morning rows | — |
| Residence | yes | room rows | — |
| News (index, archive, category, tag) | yes | post rows | — |
| Contact | yes | — | — |
| Single post | small window head (featured image as window) | — | — |

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
jhs.ac.jp's first screen shows **a smiling uniformed hotelier greeting a guest in a warm hotel lobby**, photographed documentary-style and placed as an inset window on a white page; the story is "**the only vocational school established by a hotel**": training is real service in a real hotel, not a classroom. The tagline sits in a white box on the photo; a gradient strip carries the bold caption "Nurturing international hoteliers". Signature motion: a **Swiper crossfade** cycling 4 hotel scenes (≈0.5 s fade, ≈5 s hold) with dashes marking the slide; below, staggered "PICK UP" tiles. Image type: photography.

### (2) Our scene (hotel management college; same composition, same motion idea, same image type)
The college runs its own 42-room teaching hotel, Okami House, so the first screen shows **students doing real service under an instructor's eye**: slide 1 (H1) is a high-key documentary photograph at the Okami House training desk, an instructor standing slightly behind a student who takes a reservation on the desk phone, while in the background another student lays a white banquet cloth over a round table. Slides 2 and 3 continue the "real floor" story: H2 a student greeting an arriving guest with a suitcase in the bright lobby (direct counterpart of the reference's greeting), H3 the banquet room where an instructor checks cutlery spacing as two students set a long table. Same composition (inset window, white tagline box top-left, gradient caption lower right, dashes), same motion idea (3-slide crossfade ≈0.5 s, 5 s hold), same image type (photo). The tagline turns "established by a hotel" into "a college that runs a real hotel floor"; the caption "Learn the floor by working it" plays the role of "Nurturing international hoteliers".

### (3) KV checklist (all six visible on the first screen at 1440×900; mobile per §9)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Hero photo inset 100 px from left, bleeding off the right, lobby greeting scene | Okami House training-desk photo: instructor watching a student take a reservation, student laying a banquet cloth behind | x 100–1440, y 145–770 (1440 wide) | 3-slide crossfade (0.5 s ease, 5 s hold, 15 s loop); photo layer `sp-parallax` `--sp-par: 6%` | H1 (slide 1), H2, H3 |
| 2 | White serif tagline box flush on the photo's top-left | White box "A college that runs a real hotel floor." Fraunces 400 | left = photo left, top = photo top + 63 px, width min(924 px, 69%) | static (hero gets no reveal) | — |
| 3 | Teal→slate gradient strip with white bold caption, lower right | Strip `#4FC3C8 → #5C7988` 830 × 40 under "Learn the floor by working it" Fraunces 600 2.75rem white | right 50 px, bottom 75 px of the photo | static; does not move with the parallax layer | — |
| 4 | Slider dashes bottom-right | 3 dashes 50 × 4, active `#2A3850`, others white | right 64 px, bottom 22 px | synced to crossfade (same keyframes) | — |
| 5 | "PICK UP" label crossing the photo's bottom-left edge + staggered tiles below | "PICK UP" Fraunces 600 1.5rem ink crossing the photo bottom at x 55; tiles start at y 790 (tops visible on first screen) | below the hero, first row visible | tiles: `sp-stagger` + `sp-reveal--up` (below the hero, not in it) | P1, P2 |
| 6 | Two-row header: logo left, two-line text nav right | Wordmark "Okami College" + sub-line left; one navigation block wrapping onto 2 lines at right; language switcher above it | header 0–145 px | none (static header, white) | — |

Images H1, H2, H3, P1, P2 are in the image list (§10) and are reserved for these positions on the home page.

---

## 3. Home page

### First screen (1440×900)
- Header 145 px, white: wordmark "Okami College" Fraunces 600 1.625rem ink at x 50, y 36; under it a 1 px `#DDDDDD` rule (width of the wordmark) and "Hotel management · Lisbon · since 2009" Source Serif 4 0.75rem ls 0.08em. Right side: top row (y 44) language switcher + "Contact" text link 0.8125rem; main navigation (one menu) right-aligned, max-width 1010 px, Source Serif 4 0.9375rem ls 0.03em, column gap 25 px, row gap 4 px, wrapping to two lines like `shot:first`: About · Programme · Desks & Kitchens · Placements · Faculty · Fees / Admissions · Residence · News · Contact.
- Hero per T1 and the KV checklist. The photo window's left 100 px of white stays empty except the "PICK UP" label crossing the bottom edge.
- Saturated share target ≤ 12%, gate ≤ 15% (`scripts/check-first-screen.py`; reference 9.8%, row cap 30%). Only the gradient strip (≈2.6%) and the photo carry colour; H1–H3 are graded high-key and muted (navy uniforms, white linen, pale wood).
- Forbidden on the first screen: table, form, search box, giant centred word, vertical or rotated labels.

### Block order (11 blocks)
| # | Pattern | Purpose | Layout and photos | Copy (en) |
|---|---|---|---|---|
| 1 | `front-hero` | KV, story | **T1** inset window, slides H1/H2/H3, tagline box, gradient caption, dashes, parallax | 15 words |
| 2 | `front-pickup` | what's happening now | "PICK UP" label + 4 staggered tiles on a 1160 container, columns 220 px with 140 px gaps, odd tiles 0 offset, even tiles +40 px down (ref stagger): (a) text tile: rule + "September 2027 applications are open" (b) photo P1 220 × 120 + "Saturday open morning: watch the training desk" (c) text tile: rule + "Evening certificate: next cohort starts 12 January" (d) photo P2 + "Residence rooms at Okami House" | 4 × 10 words |
| 3 | `front-results` | **results first**: where graduates work | Section head RESULTS / "Where our graduates work now". Row of 4 figures (Fraunces 400 4.5rem ink, `sp-count`; label under, 0.875rem): 2 years · 16 weeks on placement · 38 partner hotels · 12 per desk group. Then the **case wall**: 4 columns (gap 32 px) of 3:4 photos C1–C4 (radius 0), under each: name Fraunces 1.25rem, "Class of 2024" 0.8125rem ls 0.1em, role + hotel type + city, one quoted sentence (≈25 words). One narrative paragraph above the wall (≈60 words) | 60 + 4 × 35 words |
| 4 | `front-pacing` | how the two years are paced | white; 12-col grid: photo K1 3:2 at cols 1–6; right cols 8–12: section head left-aligned version (label PACING, H2 "Two years, four desks"), one paragraph (≈70 words: 3 days on the floor, 2 in class), then **4 ruled rows** (1 px `#DDDDDD`): "Term 1 · Front desk and reservations · Sep–Jan" etc. (not a timeline, no circles, no connecting line) | 70 + 4 × 8 words |
| 5 | `front-desks` | desks and kitchens students work | **T3** 2 × 2 cards D1–D4 + banner B1; section head DESKS / "Desks and kitchens" + "List ›" | 4 × 12 words |
| 6 | `front-house` | the teaching hotel | full-bleed photo band T2-image "Okami House" **`sp-parallax` `--sp-par: 10%`**, height 520 px (mobile 360), ink 30% overlay on the left 50% only (gradient to transparent); text in the left half, white: label HOUSE, H2 Fraunces 2.25rem "Forty-two rooms, sixty covers, real guests", one paragraph ≈55 words, outline pill (white 2 px) "About Okami House ›" | 55 words |
| 7 | `front-visit` | open mornings and trials | **T2** pale panel `#EEF2F6` 85.3% flush left, rows with poke-out thumbs E1, E2, ruled list right, two outline pills | 2 × 18 + 4 × 6 words |
| 8 | `front-fees` | what it costs | white, container 1160; section head FEES / "What two years cost"; the 7-row price table from §0 full container width; under it one line "Deposit is deducted from year-one tuition. Instalments per term." + link "Fees & Funding ›" | 30 words |
| 9 | `front-faculty` | who teaches on the floor | **T2 second panel** `#F4EFF7` 77.9% flush left; section head FACULTY / "Who teaches on the floor"; 3 × 2 ruled link grid (1 px `#D9D3DE` rules, each cell: name Fraunces 1.25rem ls 0.08em + role 0.875rem + chevron) for the first six people; no portraits (not a team grid) | 6 × 8 words |
| 10 | `front-news` | news | section head NEWS / "From the floor" + "List ›"; 3 ruled rows: date, grey tags (category), serif title 1.25rem; Query Loop, 3 latest | query |
| 11 | `front-offer` | how a place is offered + close | deep band `#2A3850` full bleed, padding 96 px 0; left 6/12: label OFFER, H2 white "How a place is offered", paragraph ≈50 words; right 5/12: the 5 steps as ruled rows (1 px `rgba(255,255,255,.25)`), number in Fraunces 1.5rem `#4FC3C8`-tinted `#8FD3D6`, text white 1rem; under: white outline pill "Apply for September 2027 ›" and text link "Book an open morning" | 50 + 5 × 14 words |

English home ≥ 250 words with narrative paragraphs in #3, #4, #6 and #11 (≥ 3). CJK home ≥ 500 characters.

### Home photo positions (18 positions, no repeats)
H1, H2, H3 (hero slides) · P1, P2 (pick-up) · C1, C2, C3, C4 (case wall) · K1 (pacing) · D1, D2, D3, D4 (cards) · B1 (banner) · T2-image (house band) · E1, E2 (visit rows) = **18 photos on home**, each once. (News rows have no thumbnails, like `shot:5000`.) If the auto gate counts only `<img>`, the hero slides must be `<img>` elements, not CSS backgrounds.

### Comparison with the four most recent themes
| # | Kogarashi Inn | Koe Interpreters | Hibari Flight | Ibuki Cardiology | **Okami College** |
|---|---|---|---|---|---|
| 1 | cover split halves + clock | hero | hero window + field board | hero + info bar | **inset window, tagline box, gradient caption, crossfade** |
| 2 | dark intro band parallax | statement white sheet | approach | problem statement | **staggered pick-up tiles** |
| 3 | news on mist | briefs gradient card wall | circuit statement | clinics T2 | **results: count figures + 4-photo graduate case wall** |
| 4 | day-schedule | booth parallax cover | licences | ticker | **pacing: photo left, 4 ruled term rows** |
| 5 | rooms edge-flush | meeting day | navy slide strip | first visit | **2.55:1 tracked-title cards + 11.6:1 banner** |
| 6 | table | rates | field parallax | proof slate band | **teaching-hotel parallax band** |
| 7 | walks parallax band | process ink band | crew | fees list | **85% pale panel, poke-out thumb rows** |
| 8 | people | notes | fees table | follow-up strip parallax | **price table** |
| 9 | rates + booking | request CTA cover | stories | people | **78% lilac panel, ruled faculty grid** |
| 10 | — | — | trial close | news | **news ruled rows** |
| 11 | — | — | — | close ink | **navy offer band with 5 ruled steps** |
Why not alike: no other recent theme leads with outcomes (results/case wall at #3), none uses an inset photo window with a white box over its top edge and a gradient caption, none uses partial-width panels that stop short of the right edge, and none uses tracked 0.3em card titles over 2.55:1 photos. Ibuki and Hibari put the price list late and the people as portraits; ours lists faculty as a text-only ruled grid. Kogarashi's half-height split cover and clock, Koe's gradient wall, Hibari's field board and Ibuki's info bar and ticker do not appear.

---

## 4. Inner pages (10 + post templates; no sidebar)

Every page: T1 window head (photo listed) → body → small close line with an outline pill to Admissions. Section heads as in §1 supporting details.

1. **About** (`page-about`): window head H3; 3 narrative sections in a 760 px column (founded 2009 by hotel people in Lisbon; why the college runs a hotel; how instructors are chosen); T3 two cards "The college" (K1) / "Okami House" (T2-image); Helena Varga's note signed.
2. **Programme** (`page-programme`): window head K1; intro; T3 four term cards (Term 1–4, photos D1, D2, D3, C4; label TERM 1…, title the desk focus, subtitle months); weekly rhythm paragraph (3 + 2 days); the 4-term ruled table from §0 (stacks on mobile); diploma and assessment paragraph.
3. **Desks & Kitchens** (`page-desks`): window head D1; T3 4 cards (D1–D4) each followed on the page by a 120-word section (anchor links from the cards); banner B1 to the Evening certificate.
4. **Placements & Graduates** (`page-placements`): window head C1; 4 figures with `sp-count`; T2 panel with 4 case rows (thumbs C1–C4 poke out, quote + role + city); paragraph on the 38 partner hotels (types and cities only, no brands); Rahul Mehta's note.
5. **Faculty** (`page-faculty`): window head H2; lilac T2 panel with the 7-person ruled grid; under it 7 short bios (≈50 words each) as ruled text rows (no portrait grid); T3 banner (B1 crop) to Placements.
6. **Fees & Funding** (`page-fees`): window head E2; the 7-item price table (full width); payment plan paragraphs (per term instalments, deposit); T3 banner to the Evening certificate.
7. **Admissions** (`page-admissions`): window head H1; the 5 steps as ruled rows; T2 panel with open-morning rows (E1, E2) and ruled list; dates of the next 4 open mornings; two outline pills.
8. **Residence** (`page-residence`): window head P2; T2 panel with 3 rows (single room €520/month with thumb P2, meals, house rules with thumb T2-image); campus-life paragraphs (the daily routine at Okami House).
9. **News** (`home.html` index, `archive.html`, `category.html`, `tag.html`): window head P1; lilac T2 panel with post rows, featured images 200 × 140 poking out top-left; pagination as numbers in outline pills.
10. **Contact** (`page-contact`): window head T2-image; two columns: address, phone, email, hours (§0) on the left; right: "Visiting" paragraph and a ruled list (Admissions office, Open mornings, Restaurant lunch). No form required (if a form is added: not on the first screen).
- **Single post** (`single.html`): window head with the featured image; category label + date; 720 px text column; next/previous ruled rows.
- 404 / search: small window head (H2) + text link home.

Demo posts (6): 1 "What a Saturday shift trial is like" (E1, Admissions), 2 "Term 2 opens the banquet room" (D2, School life), 3 "Placement letters from Porto and Vienna" (C1, Placements), 4 "Setting sixty covers before noon" (H3, School life), 5 "A morning in the teaching kitchen" (D3, School life), 6 "Residence rooms for the 2027 intake" (P2, Admissions). Categories: School life, Admissions, Placements. Tags: front-office, banquet, kitchen, rooms, open-morning. Standard pages: news and newsletter → posts page; article → post 1; category → School life; tag → open-morning; contact → Contact.

---

## 5. Colour (from `tok(a)`; navy deep band from the row)

| Role | Hex | Source | Use | Share |
|---|---|---|---|---|
| Base | `#FFFFFF` | ref base (tok a) | page ground | ≈ 70% |
| Ink | `#282828` | ref text (tok a) | headings, body, rules of buttons | ≈ 8% |
| Deep band | `#2A3850` | row hex (deep navy), replaces ref `#005588` | footer, home #11 offer band, active dash | ≈ 8% of page, 0% first screen except dash |
| Pale panel 1 | `#EEF2F6` | replaces ref cream `#FFF8E5` (tok a note: no cream/beige default; cool tone suits the navy row) | T2 visit panel, Admissions/Residence panels | ≈ 8% |
| Pale panel 2 | `#F4EFF7` | ref lilac (tok a), unchanged | faculty grid panel, News panel | ≈ 5% |
| Gradient | `#4FC3C8 → #5C7988` | ref caption strip (tok a, f), unchanged | T1 strips only | ≈ 2.6% first screen |
| Accent rule | `#4A95CA` → `#6C6FA8` | ref pick-up rule (tok a, f) | pick-up rules, links on hover | < 1% |
| Tag | `#F2D21B` | ref tag yellow (tok a) | tiny "Book" tags only | < 0.5% |
| Muted text | `#5F6670` | derived | dates, captions | — |
| Rules | `#DDDDDD` | ref news rules (tok d) | rows, tables | — |
- First-screen saturated share ≤ 15% hard (gate), target ≤ 12% (ref 9.8%).
- Contrast: ink on `#EEF2F6` 13.9:1; white on `#2A3850` 11.7:1; white caption on the gradient is large bold display (≥ 1.75rem) only.

## 6. Type (font_direction: serif)

- Latin display **Fraunces** (400, 600; opsz axis default or static "Fraunces 72pt" cut; `font-variation-settings: "SOFT" 0, "WONK" 0`). Latin body **Source Serif 4** (400, 600, 400 italic). Both bundled woff2 in `assets/fonts`, loaded via `theme.json` `fontFamilies` + `fontFace` (editor and front end identical), licences OFL, listed in `theme-meta.json fonts[].files` and readme.txt.
- Stacks:
  - display (en/fr/de): `"Fraunces", "Source Serif 4", Georgia, serif`
  - body (en/fr/de): `"Source Serif 4", Georgia, "Times New Roman", serif`
  - zh-TW display: `"Fraunces", "Noto Serif TC", "Songti TC", "PMingLiU", serif` (Noto Serif TC = bundled subset)
  - zh-TW body: `"Source Serif 4", "Songti TC", "PMingLiU", "MingLiU", serif` (no bundled zh, no Japanese font)
  - ja display: `"Fraunces", "Noto Serif JP", "Hiragino Mincho ProN", "Yu Mincho", serif` (Noto Serif JP = bundled subset)
  - ja body: `"Source Serif 4", "Hiragino Mincho ProN", "Yu Mincho", serif`
  - zh-TW/ja subsets made with the Hokuto/Hada replacement method (the zh subset script is known broken); `inc/editor-lang.php` copied from `shared/inc/` and required, since style.css uses `:lang()`.
- Size presets (theme.json): small 0.8125rem · base 1rem · medium 1.25rem (event titles, tok b 20 px) · large 1.5rem (card titles, tok b 24 px) · x-large 2.25rem (section H2, tok b 36 px) · xx-large 2.75rem (hero caption, tok f 44 px) · **xxx-large 4.5rem** (results figures; max ≥ 4.25rem).
- Weights / line-heights / tracking: H2 400 / 1.5 / 0; card titles 400 / 1.5 / 0.3em (tok b 7.2 px); banner line 400 / 1.4 / 0.3em; event titles 400 / 1.5 / 0.08em (tok b 1.6 px); section label caps 0.75rem / 0.2em; body 1rem / 1.75 (tok b 16/24 = 1.5; +0.25 for a serif body); dates 0.1em; hero caption 600 / 1 / 0.01em.
- CJK: sizes ≈ 0.75 × en for headings, body line-height 1.85, card-title tracking 0.15em in CJK (0.3em reads broken in Ming type); fr/de `hyphens: auto`.

## 7. Spacing, shapes, images (with source tokens)

- Container 1160 px (tok c, x 140–1300); wide 1340 for the hero window. Section padding 96 px top / 72 px bottom at desktop (tok c 60/42 scaled ×1.6 for our longer copy), 64/48 on mobile. Card gap 40 px (tok c). Header 145 px desktop (tok c), 72 px mobile.
- Radius 0 on photos and cards (tok d); pills 9999px (tok d); tags 0 (skewed). Shadows: card glow `0 4px 20px` 10% tint (tok d); no other shadows.
- Ratios: hero window ≈ 2.14:1 (1340 × 625, `shot:first`); cards 2.55:1 (tok e); banner 11.6:1 (tok e); pick-up thumbs 1.83:1 (tok e); event thumbs 1.43:1 (tok e); case wall 3:4; pacing 3:2; house band full bleed 520 px. No masks, no clip-paths, no cutouts (tok e).
- Transitions: hover 0.3s ease on links, cards (image `scale(1.03)` inside overflow clip), pills (tok g).

## 8. Scroll effects (sp-scroll; 3 kinds; hero gets parallax only)

The reference has no scroll-driven effects (tok g: Swiper fade + 0.3 s hovers only), so we take its motion character (calm, short, ease) and use:
| Effect | Class | Where | Source / timing |
|---|---|---|---|
| Rise-in with stagger | `sp-reveal sp-reveal--up` on each item, parent `sp-stagger` | home #2 pick-up tiles, #3 case wall (4 columns as one stagger group), #5 desk cards, #7 visit rows; inner: Programme term cards, Desks cards, Placements case rows, News rows | stage-a "ours" row: IntersectionObserver, 0.7 s, step 0.12 s, `--sp-dist: 24px`, `cubic-bezier(.2,.7,.2,1)` (set `--sp-dur: .7s; --sp-ease: cubic-bezier(.2,.7,.2,1)`); calm like the ref's 0.3–0.5 s ease |
| Number run | `sp-reveal sp-count` | home #3 four figures; Placements figures | 1.2 s easeOutCubic (sp default) |
| Parallax | `sp-parallax` | home #1 hero window (primary), home #6 Okami House band; inner: Placements window head (`--sp-par: 6%`) | see below |
Not used: on price tables, the faculty grid, the offer steps, forms, legal text. No reveal in the hero. Hero crossfade = CSS keyframes (not sp-scroll, not a scroll listener): 3 `<img>` layers, `animation: ok-fade 15s infinite`, delays 0 / 5 / 10 s, fade 0.5 s ease (ref Swiper fade); under `prefers-reduced-motion`, `html.sp-no-motion` (`?sp-static`) and in the editor only slide 1 shows, no animation.

### Parallax (required)
- **Primary**: home #1 hero. Outer Group `sp-parallax` = the inset window (overflow clip); moving layer `.sp-parallax__layer` holds the 3 slide images (H1, H2, H3); `--sp-par: 6%` desktop, `4%` under 782 px. Foreground (tagline box, gradient caption, dashes, PICK UP) are siblings outside the layer and do not move. Reference counterpart: the Swiper photo stage that changes while the frame and tagline stay put; we add a slow vertical drift so the "window" reads as looking into the hotel.
- **Second**: home #6 Okami House band, full bleed, background = T2-image (`figure > img` or Cover background), `--sp-par: 10%` desktop, `6%` mobile; text in the left half stays still (not in the layer).
- Both keep moving on mobile (smaller speed); reduced-motion / `?sp-static` / editor = no movement. Verified by `check-parallax.mjs` (≥ 6 px difference, 0 under reduced motion).

## 9. Responsive rules

- **390 px first screen**: header 72 px (wordmark + "Menu" toggle, overlay navigation). Order in normal flow, no absolute positioning, no vertical text: white tagline box (full width minus 24 px, Fraunces 1.375rem, flush on the photo's top edge with no overlap) → photo window (left inset 24 px, right bleed, 4:3, parallax 4%) → caption as a static block directly under the photo: gradient strip full width minus 24 px, caption Fraunces 600 1.5rem white on the strip (strip height = auto, padding 8 px 16 px) → dashes → "PICK UP" label as a normal heading. No text overlaps another text box.
- 782–1100 px: hero box width 80%, caption strip 70%; nav wraps to 3 lines or collapses at < 1100 px into the overlay menu.
- **Price table**: at ≥ 782 px the table spans the full 1160 container (`width: 100%`), columns item (auto) / note (38%) / price (`white-space: nowrap; text-align: right; min-width: 9rem`), no cell clipped or overflowing at 800 and 1280. **Under 782 px every table stacks**: each row becomes a block (item on line 1, note line 2, price right-aligned on its own line), no horizontal scroll. The same applies to the term table.
- Cards 2 × 2 → 1 column under 782 px (photo stays 2.55:1); case wall 4 → 2 columns (600–1100) → 1 column (< 600); pick-up tiles lose the stagger under 782 px (2 columns, then 1); T2 panels go to 100% width under 782 px, thumbs overhang 10 px, ruled list moves below the rows; faculty grid 3 → 1 column; pacing photo above text.
- `html, body { overflow-x: clip }`; no horizontal overflow at 390 or 1280.

## 10. Images (18; one STYLE string; Grok, one at a time, read each)

IMAGERY = **photo** (stage-a). STYLE (exact string on every prompt):
`high-key documentary photograph, natural daylight, 35mm lens, bright modern international hotel interior with pale wood, white linen and soft grey stone, staff and students in navy uniforms with white shirts, diverse adults, candid working moment, shallow depth of field, calm muted colours, no text, no logos, no signage lettering, no brand marks, no Japanese elements`

| ID | Subject / composition | Ratio (generate → crop) | Used on (never twice on one page) |
|---|---|---|---|
| H1 | **KV**: training desk; instructor standing slightly behind a student who takes a reservation on a desk phone; behind them another student lays a white cloth on a round banquet table; subjects in the right 60% (left top kept calm for the tagline box) | 16:9 → 2.14:1 | **Home hero slide 1**; Admissions window head |
| H2 | bright lobby; student in uniform greets an arriving guest with a suitcase, both smiling, subjects right of centre | 16:9 → 2.14:1 | **Home hero slide 2**; Faculty window head; 404 |
| H3 | banquet room; instructor checks cutlery spacing with a small ruler while two students set a long white table | 16:9 → 2.14:1 | **Home hero slide 3**; About window head; post 4 |
| P1 | open morning: small group of visitors watching a student demonstrate check-in at the training desk | 16:9 → 1.83:1 | **Home pick-up**; News window head |
| P2 | residence room at Okami House: simple single room, desk by a window, made bed, daylight | 16:9 → 1.83:1 | **Home pick-up**; Residence window head and room row; post 6 |
| C1 | graduate (woman, 20s) as reception supervisor behind a city hotel desk, looking at a colleague | 3:4 | **Home case wall**; Placements window head and row; post 3 |
| C2 | graduate (man, 20s) as banquet captain in an empty ballroom before an event, adjusting a chair | 3:4 | **Home case wall**; Placements row |
| C3 | graduate (woman, 20s) as chef de partie plating at a pass in a resort kitchen | 3:4 | **Home case wall**; Placements row |
| C4 | graduate (man, 20s) as housekeeping supervisor checking a made bed in a boutique room | 3:4 | **Home case wall**; Placements row; Programme term 4 card |
| K1 | student pushing a housekeeping trolley down a bright hotel corridor, instructor walking beside | 3:2 | **Home pacing**; Programme window head; About card |
| D1 | front office: hands passing a key card across a pale desk, guest's suitcase handle in frame | 16:9 → 2.55:1 | **Home card**; Desks window head and card; Programme term 1 card |
| D2 | banquet floor: student polishing a row of wine glasses on a white-clothed table | 16:9 → 2.55:1 | **Home card**; Desks card; Programme term 2 card; post 2 |
| D3 | teaching kitchen: brigade of students in whites at the stove line, instructor tasting | 16:9 → 2.55:1 | **Home card**; Desks card; Programme term 3 card; post 5 |
| D4 | rooms division: student folding a crisp hospital corner on a white bed | 16:9 → 2.55:1 | **Home card**; Desks card |
| B1 | dusk dining room with warm table lamps and set tables, wide and calm | 21:9 → 11.6:1 (centre crop) | **Home banner**; Desks banner; Fees banner; Faculty banner |
| T2-image | Okami House exterior: pale stone four-storey building with tall windows and a few guests at the entrance, morning light | 16:9 (tall enough for scale 1.18) | **Home house band**; About card; Contact window head; Residence row |
| E1 | shift trial: a visitor in an apron beside a student at a banquet table, folding napkins | 16:9 → 1.43:1 | **Home visit row**; Admissions row; post 1 |
| E2 | information evening: small seated group in a bright lounge listening to an instructor (no screens, no boards with writing) | 16:9 → 1.43:1 | **Home visit row**; Admissions row; Fees window head |

All 18 are used on Home (marked bold). 0 cutouts. Each ≤ 300 KB, ≤ 2000 px, webp; readme.txt line each (AI-generated, CC0). Read every image; regenerate on text, logos, broken hands/faces or style drift. H1 must show all three people (instructor, student at phone, student with cloth).

## 11. Similarity table (target ≈ 80% to jhs.ac.jp)

| Dimension | Reference value | Okami value |
|---|---|---|
| Page ground | `#FFFFFF` ≈70% | `#FFFFFF` ≈70% |
| Text ink | `#282828` | `#282828` |
| Pale panel 1 | `#FFF8E5`, 85.3% wide flush left | `#EEF2F6` (cool, no cream), 85.3% flush left |
| Pale panel 2 | `#F4EFF7`, 77.9% wide | `#F4EFF7`, 77.9% |
| Caption gradient | `#4FC3C8 → #5C7988`, 830 × 40 | same, `min(830px, 62%)` × 40 |
| Deep band | `#005588` | `#2A3850` (row navy) |
| Tag | `#F2D21B` tiny | `#F2D21B` tiny |
| First-screen saturation | 9.8% | ≤ 12% target, 15% gate |
| Heading face | Noto Serif JP 400 | Fraunces 400 (CJK Noto Serif TC/JP) |
| Section H2 | 36 / 54 px, 400 | 2.25rem / 1.5, 400 |
| Card title | 24 px, 0.3em | 1.5rem, 0.3em |
| Banner line | 22 px, 0.3em white | 1.375rem, 0.3em white |
| Event title | 20 px, 1.6 px tracking | 1.25rem, 0.08em |
| Body | 16 / 24 px sans | 1rem / 1.75 serif (row font) |
| Section label | 12 px Latin caps tracked | 0.75rem caps 0.2em |
| Header | 145 px, logo left, 2-line nav right | 145 px, wordmark left, 2-line nav right |
| Hero window | x 100–1440, 1340 × 625, no radius | same (7vw inset), no radius |
| Tagline box | white 924 × 104, flush left on photo top | white min(924 px, 69%), same spot |
| Hero caption | 44 px bold white on strip | 2.75rem 600 white on strip |
| Slider | Swiper fade ≈0.5 s, 4 slides, 4 dashes 50 × 4 | CSS fade 0.5 s, 3 slides, 3 dashes 50 × 4 |
| Pick-up | staggered tiles, 220 × 6 blue-violet rule, 220 × 120 thumbs | same |
| Cards | 2 × 2, 560 × 220 photo (2.55:1), radius 0, tinted glow | same |
| Banner | 1160 × 100 (11.6:1) | same |
| Event rows | white rows, 200 × 140 thumbs overhang 15 px, ruled list right | same |
| Buttons | 2 px ink outline pill | same |
| News | 1 px `#DDD` rows, grey tags | same |
| Container / gap | 1160 / 40 px | 1160 / 40 px |
| Section padding | 60 / 42 px | 96 / 72 px (longer copy) |
| Hover | 0.3 s ease | 0.3 s ease |
| Scroll motion | none | stagger rise 0.7 s, count 1.2 s, parallax 6–10% (pipeline requirement) |
| Imagery | documentary hotel photos, warm daylight | documentary teaching-hotel photos, high-key daylight |
Deliberate differences: cool pale panel instead of cream, navy deep band (row palette), serif body (row fonts), three slides instead of four, no fixed vertical right-edge tabs, scroll effects added (pipeline rule).

## 12. Home acceptance checklist

1. First screen at 1440: inset photo window from x≈100 bleeding right, white tagline box overlapping its top-left, teal→slate strip with white bold caption at lower right, 3 dashes, "PICK UP" crossing the bottom-left edge, two-line nav header; H1 shows instructor + student at phone + student laying cloth. No table/form/search, no centred giant word.
2. `check-first-screen.py` saturated share ≤ 15% (aim ≤ 12%).
3. Crossfade runs (0.5 s, 5 s hold) and shows only slide 1 under `?sp-static` and reduced motion.
4. Block order equals §3 (11 blocks); results/case wall is block 3.
5. T1 on home + every inner page window head; T2 panels stop short of the right edge (85.3% and 77.9%) with overhanging thumbs; T3 cards 2.55:1 with 0.3em tracked titles + 11.6:1 banner.
6. 18 photos on home, none repeated; same STYLE; no text/logos.
7. Price table: 7 items, full width at 800 and 1280, price column nowrap right, not clipped; stacked at 390.
8. Fixed numbers (2009, Lisbon, 42 rooms, 60 covers, 48 places, 12 per group, 38 partner hotels, 16 weeks, fees, hours, 10 working days, €900, 21 days) identical on home, inner pages and all languages.
9. Parallax on hero (6%) and house band (10%) passes `check-parallax.mjs` desktop and mobile; reveal stagger on ≥ 3 off-screen groups; nothing left transparent after scrolling.
10. 390 px: no overlapping text, no absolute or vertical labels on the first screen; no horizontal overflow at 390/1280.
11. Fonts: Fraunces + Source Serif 4 via theme.json fontFace, Noto Serif TC/JP subsets for zh-TW/ja headings, identical in editor and front end; max preset 4.5rem.
12. Home English ≥ 250 words, ≥ 3 narrative paragraphs; no guarantees, rates, awards or real brands.
