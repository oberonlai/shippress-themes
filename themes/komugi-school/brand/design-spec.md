# Komugi School: design spec (stage 1, binding for implementation)

Slug `komugi-school`, professional bakery school (education-classes, type **business**; WooCommerce compatible but not required). Design-plan row b14-2: archetype editorial-magazine, hero full-bleed-photo, nav centred, first screen `full-bleed-photo-info-bar`, page structure `day-schedule`, palette mock tea `#716454`, fonts Fraunces / Outfit, font_direction **serif**.

Main reference (only one): **Japan Typography Association, https://typography.or.jp/** (S5-Style). Measurements: `reference-tokens.md`; screens `ref/jta-first.png`, `ref/jta-full.png`, `ref/scroll-jta-*.png`. Borrow structure, techniques, colour relationships, motion and the **key visual concept**. Never copy their photographs, copy, logo/leaf mark shape, or whole page layout.

Fixed brand facts (every page, all five languages): **Komugi School**, founded **2014**, one teaching bakery at **Hallstraat 14, 3011 KD Rotterdam, Netherlands** (fictional address). Currency **EUR** in every language. Founder and head of bread **Elise Vandamme**. Token sources below are written as `[T-a]…[T-g]` = sections (a)–(g) of `reference-tokens.md`.

---

## 1. Signature techniques (three, each obvious at a glance)

### T1. The bench photograph under a chip info bar, framed by a left rail (typography.or.jp first screen)
- **Reference**: plain white header; below it at y≈228 a single row of category chips (outline 1px black / filled grey #5A5A5A, 95×19px, 11px text) followed by one news headline and date; under that, from y=265, one huge greyscale top-down photograph (1358×763, 16:9, radius 0) that starts at x=82 and bleeds off the right edge and below the fold. The left 82px is an empty rail with rotated "© Japan Typography Association" at x≈30 and three social icons stacked at the bottom. [T-c][T-e][T-f]
- **Komugi**: home `front-bench` (first screen). Same geometry at 1440: rail 82px, chip bar at y≈228 (after the header), photo **P01** from y=265, x=82 to the right viewport edge, `aspect-ratio:16/9`, radius 0, no overlay, no text on the photo except the HTML card described in KV #2. Rail: rotated `© Komugi School — professional bakery school, Rotterdam` (Outfit 11px, ls .06em, `writing-mode: vertical-rl; transform: rotate(180deg)`), Instagram / YouTube / mail icons 18px stacked at the bottom of the rail.
- **Do not dilute**: the photo must bleed off the right edge (no right margin, no rounded corners, no shadow); the chip bar must sit directly above the photo with ≤ 20px gap; the rail must stay empty white except the rotated credit and icons.

### T2. Hairline list rows with chips + 4:3 thumbnails (reference "news" news list) → our **day-schedule**
- **Reference**: full-width rows separated by 1px #DADADA hairlines, 204px pitch; each row = title 20px/28px, a line of chips (outline + filled) and a date; on the "member news" grid the thumbnails are 289×217 (4:3), radius 0. [T-c][T-e]
- **Komugi**: home `front-week` = "How a training week is built". Five rows Mon–Fri, each row a 12-col grid: col 1–2 day chip (filled mock tea `#716454`, white Outfit 11px uppercase, 95×19px) + time `06:00–14:00` Outfit 13px; col 3–8 title (Fraunces 1.375rem/1.4, weight 400) + 30–40 word paragraph (Fraunces 1.0625rem/1.75) + outline chips (1px ink) naming the skills; col 9–12 a 4:3 photo 289×217 (`P02`–`P06`), radius 0, flush right. Row pitch 204px desktop, hairline 1px `#DADADA` top and bottom. Horizontal rows only (this is a list, **not** a vertical timeline: no connecting line, no dots).
- **Do not dilute**: keep the hairlines (not cards, no background panels), keep 4:3 radius-0 thumbnails, keep both chip styles (filled + outline) visible in every row.

### T3. Two opposite-direction name tickers (reference "members" member ticker)
- **Reference**: names at 22px set in two rows that scroll continuously in opposite directions, small round avatar before some names, a pill "member list" button (radius 9999px, 1px black, 14px) centred under it. [T-f][T-g][T-d]
- **Komugi**: home `front-people` = "Who is on the bench". Row 1 (moves left): the 7 instructors with their bench (e.g. `Elise Vandamme · Bread`), Fraunces 1.75rem (28px, scaled up from 22px so the row reads as a headline band). Row 2 (moves right): the 8 partner kitchens where students do their placement, Fraunces 1.75rem italic. Between names a 6px `#716454` dot. No avatars (avoid a people grid; portraits live on the Instructors page). Pill button "Meet the instructors" centred below, radius 9999px, 1px ink, Outfit 14px, padding 5px 22px.
- **Do not dilute**: two rows, opposite directions, continuous linear motion, names large; not a static logo strip.

### Continuation to inner pages (each technique on ≥ 4 inner pages)
| Page | T1 chip bar + rail + bleeding photo | T2 hairline rows + chips + 4:3 thumbs | T3 ticker |
|---|---|---|---|
| Programme (6-week course) | page head: chip bar (`6 weeks` `12 seats` `Mon–Fri`) + P12 bleeding right at 21:9 from x=82 | week 1–6 as six hairline rows with chips and a 4:3 thumb each | — |
| A Training Day | chip bar + P11 bleeding right | the day as hairline rows by hour (06:00, 07:30, 10:00, 12:00, 13:30) | — |
| Short Courses | chip bar + P13 bleeding right | each course as a hairline row with filled duration chip, outline skill chips, 4:3 thumb | — |
| Instructors | chip bar + P10 bleeding right | 7 instructors as hairline rows (4:3 portrait-in-context thumb, name, bench chip, 50 words) | partner-kitchen ticker under the list |
| Admissions & Fees | chip bar + P15 bleeding right | fee list as hairline rows (price right, nowrap) + the 4-stage process as rows | — |
| Careers & Placements | chip bar + P14 bleeding right | 3 alumni stories as hairline rows with 4:3 thumbs | partner-kitchen ticker + alumni roles ticker (both directions) |
| Facilities | chip bar + P17 bleeding right | equipment list rows with outline chips | — |
| Visit & Contact | chip bar + P16 bleeding right | hours/address/open-bench mornings as hairline rows | — |
| Journal (index/archive/single) | chip bar of categories above the first post's bleeding image | posts as hairline rows (title, chips, date, 4:3 thumb) — exactly the reference news list | — |
| FAQ | chip bar | questions as hairline rows (details/summary) | — |

Inner page head template (all pages): chip bar row (left at x=82) → H1 Fraunces `clamp(2.75rem, 5vw, 4.5rem)` lh 1.08 left-aligned at x=82 → 1–2 line lede Fraunces 1.25rem → bleeding photo (21:9 on inner pages, 16:9 on home) with the left rail visible beside it.

---

## Key visual concept

### (1) Reference first screen: concept, story, signature motion
typography.or.jp opens on **one top-down greyscale photograph of a wooden table covered with paper cards** — entry slips, judging-committee name lists, call-for-entries notes, a QR card — laid at slight angles around a smartphone showing the annual's cover. The story: *"everything about this year's call for entries is laid out on one table"*; the page's information literally lives in the photograph. Above it sits a thin chip bar with today's news, beside it an empty left rail with a rotated credit. Motion: on load the elements rise 30px and fade in (0.5s ease), headings clip-reveal from left (0.24s cubic-bezier(.165,.84,.44,1)), and further down the member names glide in two opposite-direction tickers. [T-e][T-g]

### (2) Our translation (bakery school, same composition, same motion idea, same image type)
A **top-down, film-grain, near-monochrome photograph of a floured wooden bench where one training week is laid out**: in the centre an instructor's hands and two students' hands shaping a batch of dough; around them, at slight angles, blank paper schedule slips and recipe cards (no readable text), a digital scale, a steel bench scraper, a round proofing basket, a pencil, a lame, a tray with three finished loaves. Story: *"one training week, laid out on one bench"* — the same "everything on the table" idea, translated from a call-for-entries to a course week. The chip bar is our info bar (next cohort, seats, hours). Motion: the photo moves in slow parallax, the HTML schedule card rises 30px over the photo's lower-left corner, the chip bar clip-reveals from left (allowed: these are first-screen micro-motions on the info bar/card, **not** reveal on the hero photo itself — see §9), tickers further down move in opposite directions.

### (3) KV checklist (all must be implemented and visible in the first screen at 1440×900, except #6 which is the first section below)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Full-bleed greyscale top-down table photo 1358×763, radius 0, bleeds right/bottom | Film-grain top-down floured bench: instructor + two students' hands shaping dough, tools around | x=82→right edge, from y=265, bleeds below fold | `sp-parallax`, `--sp-par: 8%` (mobile 5%) | **P01** |
| 2 | Paper cards scattered at slight angles carrying the information | (a) blank schedule/recipe slips in the photo; (b) one real HTML card overlapping the photo lower-left: "Next cohort · 12 January 2027 / Professional Bread & Pastry · 6 weeks / Mon–Fri 06:00–14:00 · 12 seats" + link "See a training week →"; white `#FFFFFF`, 1px `#DADADA`, padding 22px 26px, width 340px, rotated −2deg, Fraunces 1.125rem | card left edge x=82+48, bottom at 900−56 (inside first screen) | `sp-reveal sp-reveal--up` on the card wrapper (card sits in the hero group but is a separate info element; distance 24px) | P01 (photo) |
| 3 | Left 82px rail, rotated credit, social icons at bottom | Same rail: rotated "© Komugi School — professional bakery school, Rotterdam", 3 icons | x=0–82, full first-screen height | none | — |
| 4 | Chip bar above photo (outline + filled chips + news line + date) | Info bar: filled chip `Next cohort`, outline chips `6 weeks` `12 seats` `Mon–Fri 06:00–14:00`, then text "Open bench mornings every Saturday · 09:00" / date `2027.01.12` | x=82, y≈228, gap to photo ≤20px | `sp-reveal sp-reveal--wipe` (clip from left, inner span) | — |
| 5 | 54px solid black mark top-right | 54px solid wheat-grain mark (own drawing: one ellipse grain with a short stem, SVG) in ink `#14110E` | top-right, 24px from top and right | none | — |
| 6 | Two opposite-direction name tickers | Instructors row ← / partner kitchens row → | home block 5 (`front-people`) | `sp-marquee` (40s linear; row 2 `animation-direction: reverse`) | — |

Images for the KV are in the photo list (§7): P01.

---

## 2. Colour (from reference-tokens [T-a]; mock tea replaces the grey chip)

| Role | Reference | Komugi | Change | Use | Share (page / first screen) |
|---|---|---|---|---|---|
| Ground | `#FAFAFA` | `#FAFAFA` | none | page ground, rail, header | ~80% / ~40% (photo takes most of the fold) |
| Ink | `#000000` | `#14110E` | +~7% L, warmed toward mock tea so black type sits with brown chips; reason: brown family required by the row | headings, body, outline chips, mark, pill borders | ~10% / ~3% |
| Chip / main | `#5A5A5A` | `#716454` (mock tea) | hue swap at near-equal luminance (L 35%→39%), reason: row palette mock tea | filled chips, ticker dots, link hover, footer ground strip | ≤ 5% / ≤ 1% |
| Hairline | `#DADADA` | `#DADADA` | none | row separators, card border | lines only |
| Muted text | (none, #000 used) | `#5C554D` | derived | dates, captions, meta | — |
| Accent | none | `#A8845A` wheat | added, ≤ 0.5%; small only | the 6px "seats left" dot in the info bar and active nav underline 2px | < 1% |
| Footer | `#FAFAFA` | `#F1EFEC` | −3% L | footer band only | — |

- Photo grade: warm monochrome (saturation ≤ 12%), so the first-screen saturated share stays ≈ 0–3%. **Gate for `check-first-screen.py`: 10%; target ≤ 5%** (row cap 30%, common cap 15%).
- No beige/cream ground; no section filled in mock tea; white HTML card is the only lighter surface.
- Contrast: white on `#716454` = 5.6:1 (chips OK at 11px uppercase, weight 500); `#14110E` on `#FAFAFA` ≈ 18:1.

## 3. Type (serif direction)

- Latin display and body: **Fraunces** (variable, opsz 9–144; weights 400 and 500, italic 400). UI (nav, chips, labels, buttons, rail): **Outfit** 400/500 — the reference's sans label voice [T-b].
- zh-TW: `"Fraunces", "Noto Serif TC", serif` for headings and body; ja: `"Fraunces", "Noto Serif JP", serif`. UI in CJK: `"Outfit", "Noto Serif TC"/"Noto Serif JP", serif` (Ming typeface only, no Gothic typeface). Size ≈ 0.75× English for headings, body line-height 1.85. fr/de `hyphens:auto`.
- Load **all** via `theme.json` `fontFamilies` + `fontFace` (woff2 in `assets/fonts/`, including the zh-TW and ja subset files, made with the Hokuto/Hada workaround). Editor and front end identical; `style.css` uses `:lang(` → copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it.
- Weights: reference uses 400 everywhere [T-b] → Komugi 400 for all headings and body; 500 only for chips and buttons.
- Scale (theme.json presets): `x-small` 0.6875rem (11px chips/rail, ls .06em [T-b] .66px) · `small` 0.875rem (nav 14–16px ls .03em [T-b]) · `medium` 1.25rem (body lead; reference body 20px [T-b]) · body 1.0625rem lh 1.75 · `large` 1.375rem (row titles; ref H2 22px [T-b]) · `x-large` 2.25rem (section headings) · `xx-large` **4.5rem** (statement headline and inner-page H1 max; ≥ 4.25rem rule). Section headings lh 1.15, ls −0.01em. No uppercase except chip labels.

## 4. Header, footer, rail

- Header (reference multi-column menu, our row asks nav centred): left — tiny three-line wordmark block ("Professional bakery school" Outfit 11px / "Komugi School" Fraunces 1.5rem / "Rotterdam · est. 2014" Outfit 13px), mirroring the reference's three-line org name; **centre** — menu in 3 columns × 3 rows, Outfit 16px ls .03em weight 400, row gap 10px (Programme, A Training Day, Short Courses / Instructors, Admissions & Fees, Careers / Facilities, Journal, Visit & Contact); right — language switcher (text) and the 54px wheat mark. Height ~170px desktop (reference ≈150px). Below 960px: wordmark left, mark right (36px), a two-line menu button opening a full-screen overlay. One menu only.
- Rail: present on home and every inner page at ≥ 960px (82px, `position: sticky` content, not overlapping text). **Hidden < 960px** (icons move into the footer); no rotated text on mobile.
- Footer (reference footer): 4 columns of small links Outfit 13px, address block with hours, round pill buttons ("Book an open bench morning", "Contact") radius 9999px 1px ink, a 54px mark repeated at the bottom left, © line. Ground `#F1EFEC`.

---

## 5. Home page

### First screen (1440×900)
Header (0–170) → chip info bar at y≈228 → P01 photo x=82→1440 from y=265 (visible height ≈635px, bleeds below) → HTML schedule card overlapping the lower-left of the photo → rail on the left with rotated credit and icons → wheat mark top-right. The only headline-level text in the first screen is the card and the chip bar (the reference has no hero headline either). The H1 "One training week, laid out on one bench." is placed visually-subtle **inside the card** as its first line (Fraunces 1.5rem) so the page still has one H1. No giant centred word, no table/form/search.

Mobile 390×844: header 72px; chip bar wraps to two lines at x=20 (chips stay inline, no absolute positioning); P01 full width (390, 4:3 crop centred on the hands) with parallax 5%; the HTML card follows **below** the photo in normal flow (margin-top −32px allowed only if it doesn't overlap any text; default 16px gap), rotation 0deg on mobile. No rail, no vertical text.

### Block order
| # | Pattern | Purpose | Layout and photos | Copy |
|---|---|---|---|---|
| 1 | `front-bench` | KV (T1) | as above; P01 | card 28 words, chips |
| 2 | `front-intro` | what the school is | 12-col: col 2–8 statement Fraunces `xx-large` 4.5rem lh 1.08 "A school for bakers on their way into real kitchens." with `sp-reveal--wipe` on the heading; col 9–12 two paragraphs Fraunces 1.0625rem; under it chips `Founded 2014` `Rotterdam` `12 seats per cohort` | 2 paragraphs, 110 words |
| 3 | `front-week` | how a training week is built (T2, day-schedule) | section label "A training week" + H2 x-large; five hairline rows Mon–Fri, thumbs P02, P03, P04, P05, P06; parent `sp-stagger`, each row `sp-reveal sp-reveal--up`; link "The full 6-week programme →" | 5 × 35 words |
| 4 | `front-floor` | full-bleed production photo, second mood | P07 full-bleed 21:9 (no rail inside, alignfull) with a white caption card bottom-left (Fraunces 1.125rem, 40 words: "By 06:00 the deck ovens are at 250°C…"); **second `sp-parallax`** `--sp-par: 6%` | 40 words |
| 5 | `front-people` | who is on the bench (T3) | H2 left; two opposite tickers; pill button → Instructors | 25-word intro |
| 6 | `front-leave` | what leaves with the student | 12-col: text col 1–5 (H2 "What you carry out of the door", 3 short paragraphs: a bench book of 40 formulas, a production portfolio, two weeks in a partner kitchen); photos col 7–12 stacked: P08 4:3 and P09 4:3, radius 0, aligned (no stagger), `sp-reveal--up` on the photo group | 3 × 40 words |
| 7 | `front-fees` | courses and fees | H2 + hairline price list (6 rows: course, duration chip, fee right nowrap) full content width; no reveal (price table); link → Admissions & Fees | 6 rows + 30 words |
| 8 | `front-journal` | notes from the bench | reference news list: 3 latest posts as hairline rows (title, chips, date) with 4:3 thumbs = posts' featured images P12, P13, P17 | Query Loop |
| 9 | `front-visit` | visit / open bench | 12-col: col 1–6 P16 3:2 radius 0; col 8–12 address, hours, "Open bench mornings: Saturdays 09:00–12:00, €45, 8 places", pill buttons | 60 words |

English home ≥ 300 words (narrative paragraphs in #2, #3, #4, #6 → ≥ 3). CJK ≥ 500 characters.

Home photo positions (≥ 8): P01, P02, P03, P04, P05, P06, P07, P08, P09, P12, P13, P17, P16 = **13**, no repeats.

### Comparison with recent themes
| # | Hibiki Speech | Renkei Forum | Budou Academy | Shizuku Filter | **Komugi School** |
|---|---|---|---|---|---|
| 1 | split photo/text halves | accent band + centred object + marquee | rounded photo-tile collage + slanted headline | white wordmark band + full-bleed photo + info bar | **chip bar + top-down bench photo bleeding right, left rail, tilted HTML card** |
| 2 | problem | bar headings | about statement | rail-labelled grid | **large statement + 2 paragraphs** |
| 3 | method | speakers ellipse | tasting classes | rail-labelled grid | **Mon–Fri hairline rows with 4:3 thumbs** |
| 4 | proof stories | programme dome | … | … | **full-bleed production photo (parallax)** |
| 5 | prices | … | … | rewards capsules | **two opposite name tickers** |
| 6 | — | — | — | — | what you leave with (text + stacked photos) |
| 7 | — | — | — | — | hairline fee list |
| 8–9 | — | — | — | — | journal rows · visit |
Why not alike: no split halves, no centred object/dome/ellipse, no rounded tiles or collage, no capsules, no bands with wordmarks. Shizuku also has a full-bleed photo + info bar, but Komugi's photo is top-down and offset by an 82px rail, bleeds off the right edge, carries a tilted paper card and uses chip styles; the rest of the page is a hairline-list editorial system none of the four use. Radius 0 everywhere (Budou is rounded).

---

## 6. Inner pages (10 + journal templates)

All pages: inner head template (§1) → body → closing hairline row "Next cohort 12 January 2027 · 12 seats · Admissions & Fees →". No sidebar.

1. **Programme** (`page-programme`): Professional Bread & Pastry, 6 weeks; P12 head; six week rows (W1 Flour, water, salt / W2 Fermentation & sourdough / W3 Shaping & scoring / W4 Laminated doughs / W5 Production & ovens / W6 Placement prep & final bake) with thumbs W1 P02, W2 P13, W3 P04, W4 P03, W5 P05, W6 P08 (P12 is the head, not reused); assessment paragraph; what's included (apron, knife roll, bench book).
2. **A Training Day** (`page-training-day`): P11 head; hour rows 06:00 briefing & scaling / 07:30 mixing & bulk / 10:00 shaping / 12:00 bake & critique / 13:30 clean-down & notes; thumbs 06:00 P15, 07:30 P02, 10:00 P04, 12:00 P05, 13:30 P06; paragraph on night-shift weeks.
3. **Short Courses** (`page-courses`): P13 head; rows: Bread Foundations 2 weeks, Viennoiserie Week, Sourdough Week, Weekend Bench (2 days); thumbs Bread Foundations P02, Viennoiserie P03, Sourdough P12, Weekend Bench P09.
4. **Instructors** (`page-instructors`): P10 head; 7 rows with name, bench chip, 50-word bio; 4:3 working-shot thumbs (hands, not faces): Vandamme P04, Ferreira P03, Osei P15, Brenner P05, Choi P13, Ortega P14, Jansen P06; then partner-kitchen ticker (T3).
5. **Admissions & Fees** (`page-admissions`): P15 head; fee list (§8) full width; process as 4 hairline rows (Apply online → Open bench morning → Offer within 10 days → 50% deposit and start); cohort dates row; bursary note ("two part-fee places per cohort").
6. **Careers & Placements** (`page-careers`): P14 head; 3 alumni stories rows (thumbs Jonas P07, Priya P08, Sofia P11); two tickers (kitchens →, alumni roles ←).
7. **Facilities** (`page-facilities`): P17 head; equipment rows: 3 deck ovens (4-deck), 1 rack oven, spiral mixers ×4, sheeter, retarder-prover room, 12 marble/wood benches; thumbs P11, P05, P09.
8. **Visit & Contact** (`page-contact`): P16 head; rows: address, hours, open bench mornings, how to reach (tram 23 stop "Hallstraat", bike racks), email `hello@komugischool.example`, phone `+31 10 555 0140`; no form required.
9. **Journal** (`home.html`, `archive.html`, `single.html`): reference news list. Single: chip bar of categories, title Fraunces 3rem, date, featured image 16:9 bleeding right from x=82, text column 680px.
10. **FAQ** (`page-faq`): chip bar head (P-less head, only on this page) + 10 Q&A hairline rows.
11. 404 / search: chip bar + H1 + pill button home.

## 7. Photos (17, Grok, one at a time; read each one)

IMAGERY = **photo** (reference is a greyscale photograph → we use real-photo style, not illustration).

STYLE (exact string on every prompt):
`documentary photograph on 35mm film, visible fine film grain, warm near-monochrome grade with very low saturation, high-key soft north-window daylight, floured wooden benches and steel tools in a modern professional teaching bakery, diverse adult bakers in plain off-white aprons, calm working moment, sharp focus, no text, no readable writing, no logos, no brand marks, no signage lettering, no Japanese elements`

| ID | Subject / composition | Ratio | Used on (once per page) | Home |
|---|---|---|---|---|
| P01 | top-down: floured wooden bench, instructor's hands + two students' hands shaping dough at centre; blank paper slips/recipe cards at slight angles, digital scale, bench scraper, round proofing basket, pencil, tray of three loaves | 16:9 | Home KV | ✔ |
| P02 | top-down: flour being weighed on a digital scale, bowls of water and salt | 4:3 | Home Mon; Programme W1; Training Day 07:30; Short Courses | ✔ |
| P03 | rolling laminated dough with a long rolling pin, butter layer visible at edge | 4:3 | Home Tue; Programme W4; Short Courses; Instructors | ✔ |
| P04 | hands shaping baguettes on a linen couche, three in a row | 4:3 | Home Wed; Programme W3; Training Day; Instructors | ✔ |
| P05 | loading a deck oven with a wooden peel, oven glow | 4:3 | Home Thu; Programme W5; Training Day; Instructors; Facilities | ✔ |
| P06 | student presenting a cut loaf to an instructor at the bench, crumb visible | 4:3 | Home Fri; Training Day; Instructors | ✔ |
| P07 | wide production floor at dawn: racks of proofing baskets, two bakers working, deck ovens | 21:9 | Home floor (full bleed); Careers story 1 | ✔ |
| P08 | bakery rack with finished loaves and croissants on trays | 4:3 | Home leave; Programme W6; Careers story 2 | ✔ |
| P09 | flat lay: knife roll open, lame, bench scraper, dough thermometer, notebook (blank) | 4:3 | Home leave; Short Courses; Facilities | ✔ |
| P10 | instructor guiding a student's hands while folding dough, close, faces partly out of frame | 21:9 crop of 3:2 | Instructors head | |
| P11 | teaching kitchen wide: 12 benches, students at work, window light | 21:9 | Training Day head; Careers story 3; Facilities | |
| P12 | shelf of sourdough starter jars, different rises | 4:3 / 21:9 | Programme head; Home journal (post 1); Short Courses | ✔ |
| P13 | croissant cross-section on a board, honeycomb crumb | 4:3 / 21:9 | Short Courses head; Programme W2; Instructors; Home journal (post 2) | ✔ |
| P14 | graduate at work in a small city bakery before opening, side view | 21:9 / 4:3 | Careers head; Instructors | |
| P15 | student writing notes in a blank bench book beside a dough tub | 4:3 / 21:9 | Admissions head; Training Day 06:00; Instructors | |
| P16 | school entrance at morning: large window with benches visible inside, bike at the kerb, no signage | 3:2 / 21:9 | Home visit; Contact head | ✔ |
| P17 | storeroom: stacked unprinted flour sacks and grain bins | 4:3 / 21:9 | Facilities head; Home journal (post 3) | ✔ |

Rules: each image ≤ 300 KB, ≤ 2000 px, webp; 0 cutouts; regenerate on text, logos, broken hands, colour drift (anything saturated). Implementer: when a page row above lists an image already used as that page's head, pick the next unused one from the same row — **no image twice on one page** (verify with a per-page list in the notes file). Journal demo posts (6): P12, P13, P17, P07, P15, P09 as featured images.

## 8. Fixed facts and numbers (identical everywhere, all five languages)

- Founded **2014**, Rotterdam. Address Hallstraat 14, 3011 KD Rotterdam (fictional). Email hello@komugischool.example, phone +31 10 555 0140.
- Hours: teaching **Mon–Fri 06:00–14:00**; office Mon–Fri 09:00–17:00; **Open bench mornings Sat 09:00–12:00, €45, 8 places**.
- Professional Bread & Pastry: **6 weeks**, **12 seats** per cohort, 5 cohorts a year starting **12 January, 9 March, 4 May, 7 September, 2 November** (2027: next cohort 12 January 2027), including **2 weeks** placement in a partner kitchen (weeks 7–8, after the course; not paid).
- Fees (6 items, EUR, incl. VAT):
  | Course | Duration | Fee |
  |---|---|---|
  | Professional Bread & Pastry | 6 weeks + 2-week placement | €4,800 |
  | Bread Foundations | 2 weeks | €1,750 |
  | Viennoiserie Week | 5 days | €980 |
  | Sourdough Week | 5 days | €920 |
  | Weekend Bench | 2 days (Sat–Sun) | €320 |
  | Open Bench Morning | 3 hours | €45 |
  Deposit 50% on acceptance; two part-fee bursary places per cohort.
- Instructors (7): **Elise Vandamme** (founder, bread), **Tomás Ferreira** (viennoiserie), **Amara Osei** (sourdough & fermentation), **Lukas Brenner** (ovens & production), **Mei-Lin Choi** (pastry), **Rafael Ortega** (placements & careers), **Hanne Jansen** (admissions & bench book).
- Partner kitchens (8, fictional): Maasbrood, Atelier Korenbloem, North Pier Bakehouse, Rye & Ember, Le Fournil du Quai, Haven Street Bakery, Kade Patisserie, Bakkerij Oostwal.
- Alumni stories (3): Jonas Meyer — night baker → head of morning shift at North Pier Bakehouse; Priya Nair — career changer from accounting → viennoiserie at Kade Patisserie; Sofia Lindgren — home baker → opened a 20-seat bakery café (no revenue claims).
- Process (4): apply online → open bench morning → written offer within 10 days → 50% deposit, start.
- No guarantees of jobs, no accreditation claims, no awards, no real media or brands.

## 9. Scroll effects (sp-scroll) and parallax

| Effect (sp-*) | Source on typography.or.jp | Trigger / time / easing at source | Applied to | Our values |
|---|---|---|---|---|
| `sp-reveal sp-reveal--up` + `sp-stagger` | `.g-rise-fade` −30px → 0 + opacity | body class / scroll listener; 0.5s; ease | KV schedule card (#2, info element over the photo — the photo itself never reveals); Mon–Fri rows (`sp-stagger` parent); front-leave photo group; inner-page hairline rows | `--sp-dist: 24px`, `--sp-dur: .5s`, easing `ease` [T-g] |
| `sp-reveal sp-reveal--wipe` | `.g-clip-reveal` inset(0 100% 0 0) → inset(0) | class toggle; 0.24s; cubic-bezier(.165,.84,.44,1) | KV chip bar (inner span), home `front-intro` statement heading, inner-page H1s | override `--sp-dur: .6s` (0.24s is too quick at headline size; same easing `cubic-bezier(.165,.84,.44,1)`), clip from left |
| `sp-marquee` | member ticker, two directions | continuous; linear | `front-people` both rows; Careers & Instructors tickers | 40s linear infinite; row 2 reversed; pause on hover; children never get sp-reveal |
| `sp-parallax` (required) | reference has no parallax; it is our motion for the rule, standing in for the reference's slow page-transition rise of the photo | CSS scroll-driven / IO fallback | **(a)** `front-bench`: outer group `.sp-parallax` wraps `figure > img` P01; foreground (chip bar, card, rail) outside the moving layer; `--sp-par: 8%` desktop, `5%` ≤ 781px. **(b)** `front-floor`: Cover with P07 background, caption card outside the layer; `--sp-par: 6%` (mobile 4%) | layer scale 1.18, overflow clip |

Hero photo: no reveal (only parallax). No reveal on fee list, FAQ, forms, legal text. Max 3 different reveal-type effects per page (up, wipe, marquee) + parallax. Validate with `check-parallax.mjs` (≥ 6px shift desktop and mobile; 0 under reduced motion).

## 10. Responsive rules

- 390px first screen: no vertical text, no absolutely positioned labels or overlapping chips; rail hidden; card in flow below the photo; chips wrap.
- Price/fee list at ≥ 782px: full content width (82 → 1358 at 1440), three columns course / duration chip / fee; fee column `white-space: nowrap; text-align: right; min-width: 8ch`; never clipped or overflowing (check at 800 and 1280).
- Every table or hairline list stacks on mobile (< 782px): course name, then chip, then fee on its own line right-aligned.
- Thumbnail rows: ≥ 960px 12-col as specified; 600–959px thumb drops under the text at 100% width 4:3; < 600px same, chips wrap.
- No horizontal scroll at 390 and 1280 (tickers use overflow clip).

## 11. Similarity targets (≈ 80%) — similarity table

| Dimension | Reference value | This theme | Token |
|---|---|---|---|
| Ground | #FAFAFA ~85% | #FAFAFA ~80% | T-a |
| Ink | #000 | #14110E (+7% L, warm) | T-a |
| Chip filled | #5A5A5A, white text | #716454, white text | T-a |
| Hairline | #DADADA 1px | #DADADA 1px | T-a/T-c |
| First-screen saturated share | ≈0% | ≤5% (gate 10%) | T-a |
| Body size / weight | 20px / 400 | 20px lead, 17px body / 400 | T-b |
| Section H2 | 22px 400 | row titles 22px; section H2 36px, statement 72px 400 | T-b (scaled up for ≥4.25rem rule) |
| Nav | 16px ls .48px 400 | 16px ls .03em 400 | T-b |
| Tiny label | 11px ls .66px | 11px ls .06em | T-b |
| Left rail | 82px | 82px | T-c |
| Content width | 82→1358 (1276) | 82→1358 (1276) | T-c |
| Hero photo | 1358×763, 16:9, y=265, bleeds right/bottom | 16:9 from y≈265, x=82→edge, bleeds | T-c/T-e |
| Section spacing | ~100px | 100px (`--wp--preset--spacing--70`) | T-c |
| List row pitch | 204px, 1px hairline | 204px, 1px hairline | T-c |
| Radius | 0 images/chips; pill 9999px | 0 images/chips/card; pill 9999px | T-d |
| Shadows | none | none | T-d |
| Chips | 95×19px outline 1px / filled grey | 95×19 min, outline 1px ink / filled mock tea | T-f |
| Thumbs | 289×217 4:3 radius 0 | 289×217 4:3 radius 0 | T-e |
| Photo type | greyscale top-down documentary | warm near-monochrome film-grain top-down documentary | T-e |
| Mark | 54px solid black top-right | 54px solid ink wheat grain top-right | T-f |
| Rotated credit | left rail x≈30 | left rail x≈30 | T-f |
| Ticker | 22px, two rows, opposite directions | 28px, two rows, opposite directions, 40s linear | T-f/T-g |
| Rise-fade | −30px, 0.5s ease | 24px (sp max ≤30), 0.5s ease | T-g |
| Clip reveal | inset 100%→0, 0.24s cubic-bezier(.165,.84,.44,1) | same clip, 0.6s same easing | T-g |
| Pill button | 1px black, 14px, padding 5px | 1px ink, 14px, padding 5px 22px | T-d |

Own content only: photos generated, copy written for Komugi, mark drawn new (grain, not leaf).

## 12. Home acceptance checklist

1. First screen at 1440: chip bar directly above a top-down bench photo (P01) that starts at x=82 and bleeds off the right edge and the fold; 82px rail with rotated credit and icons; tilted white schedule card over the photo's lower-left; 54px wheat mark top-right; no headline over the photo, no table/form/search; saturated share ≤ 10% (target ≤ 5%).
2. KV checklist #1–#5 visible in the first screen; #6 tickers move in opposite directions.
3. Block order equals §5 (9 blocks); Mon–Fri hairline rows with filled + outline chips and 4:3 radius-0 thumbs.
4. ≥ 8 photo positions on home (13 planned), no repeats; all photos in the STYLE, warm near-monochrome, film grain, no text/logos/bad hands.
5. Colours per §2; radius 0 everywhere except pill buttons; no shadows; no cream ground.
6. Fraunces/Outfit + Noto Serif TC/JP via theme.json fontFace; max preset 4.5rem used on the intro statement; editor = front end.
7. Fee list: six items with the exact §8 numbers; at ≥ 782px full width, fees nowrap right; mobile stacked.
8. Motion: parallax on P01 and P07 (desktop and mobile, `check-parallax.mjs` pass); rows rise with stagger; headings wipe; hero photo has no reveal; `?sp-static` shows everything.
9. 390px: no rail, no vertical text, no overlap; no horizontal scroll at 390/1280.
10. English home ≥ 300 words with ≥ 3 narrative paragraphs; all numbers match §8 and the inner pages.
