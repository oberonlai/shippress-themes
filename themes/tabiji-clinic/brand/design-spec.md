# Tabiji Clinic: design spec (stage 1, binding for implementation)

Slug `tabiji-clinic`, travel vaccination clinic, type `health` (WooCommerce compatible, not required). Row b25-1: archetype split-screen, hero photo-left-text-right, first screen full-bleed-photo-info-bar, page structure narrative-problem-method-proof, font direction **sans**, IMAGERY **photo**.
References (see `reference.md`, `reference-tokens.md`, `ref/*.png`): **Morioka Eye Clinic** https://morioka-ganka.com/ (primary: first screen, message block, consult cards, feature rows, motion, colour) and **Aoba Ligare Clinic** https://aoba-ligare.com/ (secondary: gradient band with icon-disc link cards, four-photo row bleeding right, blurred-photo "for Medical" band). We borrow structure, techniques, colour codes, proportions and motion. No photo, text or logo from either site; all photos are our own Grok photographs, all copy is our own.

Token references below are written `tok(a)`…`tok(g)` = sections (a)–(g) of `reference-tokens.md`.

Fixed brand facts (every page and all five languages use these, see section 9): Tabiji Clinic, travel-health and vaccination clinic, founded **2014**, **2F, 418 Water Street, Vancouver, BC V6B 1B6** (fictional unit). Prices in **CAD** in every language.

---

## 1. Signature techniques (three, all obvious at a glance)

### T1. Inset rounded hero frame with an inverse-corner notch card (Morioka first screen, `ref/morioka-first.png`, `tok(c)` `tok(d)` `tok(f)`)
- Reference: a white/near-white header band 128 px tall; under it one bright photograph set as an inset frame, 20 px from the left, right and the header, radius 8 px, overflow clipped, about 1400×765 (1.83:1). A ghost headline sits on the photo. In the frame's bottom-right corner a ground-coloured card (586×205) is "cut into" the photo: the card's top-left corner is rounded 8 px and the photo shows two small inverse (concave) corners where it meets the card, at the card's top-right and bottom-left, so the card looks like a bite out of the frame rather than a box laid on top.
- Tabiji home: block 1. Cover block, `alignfull` with `margin: 0 20px`, `border-radius: 8px`, `overflow: clip`, height `min(765px, calc(100svh - 136px))`, `min-height: 560px`. Notch card 560×210 at bottom 0 / right 0, background ground `#FBFCF7`, `border-top-left-radius: 8px`; inverse corners = two 8×8 pseudo-elements (`content: ""` only) with `radial-gradient(circle at 0 0, transparent 8px, #FBFCF7 8.5px)` placed at (card top, right 0) and (bottom 0, card left), rotated so the concave side faces the photo. Card content (no table): label row + two dotted-rule rows + one note + circle-arrow link (see 3).
- Inner pages: every page head is a smaller T1 frame: same 20 px inset and r8, height 420 px (mobile 260 px), page photo as background, notch card bottom-right 440×150 holding the flag label, the page title (H1) and one lead line. So T1 is on About, Journeys, Your appointment, Fees, Records, Groups, People, FAQ, Contact (9 pages), and on the Notes index/archive (photo P12 crop).
- Must not be diluted: the frame must stay inset (20 px ground visible left, right and top; not full bleed), radius stays 8 px (not 0, not 24+), the card colour must equal the page ground (it reads as a cut-out, not a floating white card), both concave corners must be visible, no shadow.

### T2. Centred statement with a flag-mark label, flanked by two staggered photo pairs (Morioka message, `ref/morioka-message.png`, `tok(b)` `tok(c)` `tok(e)`)
- Reference: on the plain ground, a tiny blue flag mark (14×6) above a spaced uppercase Latin label ("MESSAGE"), a two-line centred heading 26–28 px, then short centred paragraphs (column ~480 px, line-height ~2, airy letter-spacing) and an underlined text link with a Ø36 outline circle arrow. Left of the text column: a pair of portrait photos, the larger one (≈165×225) higher and the smaller (≈123×167) stepped down and to the right; right of the column: the smaller one (≈123×167) lower and the larger (≈165×225) stepped up and to the right. Positions at 1440: left pair x 110–415, right pair x 1025–1330; radius 6 px.
- Tabiji home: block 2 (the problem statement). Text column 480 px centred; left pair: P02 at (x 110, y +140 from section top, 167×227) and P03 at (x 292, y +274, 123×167); right pair: P04 at (x 1025, y +134, 123×167) and P05 at (x 1163, y 0, 167×227). All `border-radius: 6px`, aspect kept (portrait 3:4 crops). Implement as a 3-column grid `1fr 480px 1fr` with each side a small relative box; the photos are positioned inside the side boxes (absolute inside their own column is fine on desktop; on < 1024 px they become an in-flow row of 4 small photos under the text, 2 per row on 390, no absolute positioning).
- Inner pages: About (P02/P03 | P04/P05 reused, different page), Records & certificates (P09/P10 | P05/P03), Groups & schools (P12/P16 | P06/P13), Contact & visit (P02/P05 | P15/P10).
- Must not be diluted: both pairs must be stepped in opposite directions (left steps down, right steps up), photos stay small (≤ 170 px wide at 1440) so the text column dominates; the flag mark is the accent blue and sits directly above the label; the text stays centred.

### T3. White 2×2 cards on a pale band with a ghost line-art corner and a circle-arrow link (Morioka consult cards, `ref/morioka-cards.png`, `tok(c)` `tok(d)` `tok(e)`)
- Reference: full-bleed pale band `#F3F4EC`; centred heading + 3 centred lines; 2×2 white cards, each 540 px wide, gap 40 px, inner padding 65 px, radius 0, no shadow; card title 24 px, two lines of text, then an underlined blue text link with a Ø36 outline circle arrow at the card bottom-left; in the card's bottom-right corner a ghost line drawing 240×185 in `#F0F1E4` (swirling ellipse on one card, wavy horizontal hatch on another), clipped by the card edge.
- Tabiji home: block 3 "Which journeys need which doses". Four cards = four trip types; each card has its own ghost corner drawn as inline SVG (stroke `#F0F1E4`, 1.5 px, no fill, clipped by `overflow: clip`): (1) route arcs = two overlapping ellipses (the reference swirl idea, our own drawing), (2) wavy hatch = 9 horizontal wave lines (contour lines), (3) dotted flight arc = one dashed arc with a small circle at each end, (4) latitude grid = quarter globe of 4 meridians + 4 parallels. Link text and underline + circle in accent `#0000F9`.
- Inner pages: Journeys (the full four cards, longer text), Fees (2 cards: "What a consultation includes" / "Paying and receipts"), FAQ (2×2 question cards linking to anchors), Groups & schools (2 cards: Employers / Schools and universities), Records & certificates (2 cards: "Lost your booklet?" / "Certificates for visas and work permits").
- Must not be diluted: cards stay pure white on the pale band with radius 0 and no shadow; the ghost corner must be visible (not removed for "cleanliness") and must touch/clip at the card's bottom-right edge; the link keeps the underline and the outline circle.

### Supporting (Aoba, not counted as a signature)
- Header: white-ish header with two solid pills (Aoba) merged with Morioka's dark pill + outline pill.
- Block 5: soft slate-mist gradient band with a wavy top edge, white link cards with a round pale icon disc (Ø92), and a four-photo row bleeding off the right edge (`ref/aoba-treatment.png`).
- Block 6: inset blurred-photo band with a centred title and an outline pill (`ref/aoba-medical.png`), our parallax band.

### Continuation to inner pages (each technique on ≥ 4 inner pages)
| Page | T1 inset frame + notch | T2 statement + staggered pairs | T3 white cards + ghost corner | Other |
|---|---|---|---|---|
| About | yes (P15) | yes (P02 P03 / P04 P05) | — | flag labels |
| Journeys | yes (P12) | — | yes, 4 cards (full) | family row P16 |
| Your appointment | yes (P01 crop) | — | — | 3 feather rows P06 P07 P08 |
| Vaccines & fees | yes (P03) | — | yes, 2 cards | fee list, P10 |
| Records & certificates | yes (P08) | yes (P09 P10 / P05 P03) | yes, 2 cards | Aoba icon-disc cards |
| Groups & schools | yes (P11) | yes (P12 P16 / P06 P13) | yes, 2 cards | — |
| People | yes (P04) | — | — | dotted list of 7 names, P15 |
| FAQ | yes (P05) | — | yes, 2×2 question cards | details/summary list |
| Contact & visit | yes (P14) | yes (P02 P05 / P15 P10) | — | hours rows as in the hero card |
| Notes (index/archive/single) | yes (P12 crop on index/archive); single: featured image in an r8 inset frame with the notch holding the date | — | — | — |
T1: 10 pages, T2: 4 pages, T3: 5 pages.

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
Morioka's first screen is one bright, soft-focus photograph inside an inset rounded frame: a small child peeking out from behind a pale-wood pillar in a calm white clinic, a staff member out of focus on the right. Over it, a ghosted white headline (the logo mark plus three characters meaning "opening the eyes", with a spaced Latin romanisation under it) and, cut into the bottom-right corner, the clinic's opening-hours card. Story: a neighbourhood clinic that gently "opens up" what you can see, for every generation. Signature motion: the ghost word loops in and out on load and disappears with the first scroll step (CSS `scroll()` timeline); photos and text further down arrive from blur 20 px + scale 1.1 + opacity 0 to sharp (CSS `view()` timeline, linear); a round badge with rotating ring text floats at the bottom-right.

### (2) Our translation (travel vaccination clinic; same composition, same motion idea, same image type = high-key photograph)
A travel vaccination clinic that prepares people for the country they are actually visiting. One high-key documentary photograph in the same inset rounded frame: at a pale-wood desk by a bright window, a nurse draws a vaccine from a small vial (left third), while beside her the physician reads a printed itinerary with a pencil, the traveller's small backpack on the chair (left-centre). The right 40% of the frame is soft white wall and window light, where the headline sits (the row's photo-left-text-right). The ghost headline asks "Where are you / going next?" and a spaced Latin line under it cycles destinations ("KENYA · PERU · VIETNAM", one at a time), the way Morioka's ghost word opens and closes. The notch card in the bottom-right corner keeps the reference's role (when can I come?) as hours rows, not a table. The rotating ring badge asks "Which vaccines for your trip?" and links to Journeys.

### (3) KV checklist (all six visible on the first screen at 1440×900 in the `?sp-static` screenshot; at 390×844 items 1–4 and 6 are visible, item 5 hidden below 782 px)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Inset rounded hero photo frame (20 px inset, r8, ≈1.83:1) | Cover with P01 (nurse drawing a vaccine + physician with the itinerary), 20 px inset, r8 | under the 128 px header, x 20–1420, y 128–893 | `sp-parallax`, `--sp-par: 8%` (mobile 5%) on the cover background | P01 |
| 2 | Ghost headline on the photo + spaced Latin line | H1 "Where are you / going next?" Figtree 400, 4.5rem, ink at 90% opacity, letter-spacing 0.04em; under it the cycling destination line Public Sans 0.9375rem uppercase, letter-spacing 0.3em, slate `#5E6B73` | frame right 38%: left edge at x 890, vertical centre at 44% of the frame | load: H1 fades in 0.8s `cubic-bezier(0.4,0.4,0,1)`; destination words crossfade, 9s loop (3 words × 3s), pure CSS; static/reduced motion = first word only; no reveal | on P01 (right wall area) |
| 3 | Hours card notched into the frame's bottom-right corner (inverse corners) | Notch card 560×210, ground colour, r8 top-left + two concave corners: label "OPENING HOURS", dotted rows "Mon–Fri 9:00–18:00" / "Saturday 9:00–13:00", note "Book 6 weeks before you fly; later is still worth a visit.", link "Book a visit" + Ø36 circle arrow | frame bottom-right, flush | none (link hover 0.3s) | — |
| 4 | Header band with nav, outline pill and dark pill | 128 px header: flag mark + wordmark left; top row notice (grey pill "Notice" + date + latest post title); nav row: Journeys, Your appointment, Fees, Records, About, Contact; outline pill "Call 604-555-0142" and dark pill "Book a visit" | top, ground `#FBFCF7` | none (pill hover 0.3s) | — |
| 5 | Fixed round badge with rotating ring text | Ø80 badge: white disc, 1 px ink ring, centre icon = small line drawing of a passport-booklet with a check; ring text "Which vaccines for your trip? ·" (inline SVG `textPath`, Public Sans 9px, ls 0.12em) | fixed right 24 px, bottom 24 px (≥782 px only) | ring rotates 24s linear infinite; reduced motion / `sp-static`: still | — |
| 6 | Blue flag mark + Latin label | 14×6 accent flag mark above "TRAVEL HEALTH" label (Public Sans 0.9375rem, ls 0.1em, uppercase, `#0000F9`) | on the notch card above "OPENING HOURS", and again at the start of block 2 | none | — |
Everything in the table is built (not optional) and must be visible on the first screen as stated.

---

## 3. Home first screen (1440×900) composition
- Header 128 px (`tok(c)`): left x 20 the logo = flag mark (accent, 58×36, our own three-stroke "pennant" shape: two stacked horizontal tapered strokes, not the reference's mark) + wordmark "Tabiji Clinic" Figtree 600 1.375rem ink, ls 0.08em, with "TRAVEL HEALTH · VANCOUVER" under it Public Sans 0.625rem ls 0.2em accent. Right block (x 540–1420): row 1 (y 26–46): grey pill `#EEEFE8` "Notice" 0.875rem r4 100×20, date 0.875rem `#8A8F91`, latest post title 0.875rem ink; a 1 px `#E3E5DC` rule under it; row 2 (y 64–102): nav links Public Sans 1rem/400, ls 0.1em (`tok(b)` nav 17px ls 1.7px), gap 34 px; then outline pill (1 px ink, r9999, 36 px tall, padding 0 20px) "Call 604-555-0142" and dark pill (ink bg, white text, r9999, 36 px) "Book a visit". Language links (pipeline mechanism) sit at the right end of row 1.
- Frame (T1) x 20–1420, y 128–893, P01 `object-position: 35% 50%`. Subject (nurse + physician + desk) occupies x 60–840; the right wall is near-white.
- H1 block: left x 890, width 470, centred vertically at y ≈ 470. H1 two lines, 4.5rem / line-height 1.15 / Figtree 400 / ink `#423E3E` at 90%. Destination line 24 px below. No paragraph, no button in the frame (the CTA lives in the header pill and the notch card).
- Notch card x 860–1420, y 683–893.
- Badge Ø80 at right 24 / bottom 24 (overlaps the card corner area at 1440×900 only if the viewport is < 860 tall; at 900 it sits over the card's lower-right, so set `bottom: 24px; right: 24px` and give the notch card `padding-right: 112px` so the link and rows never sit under it).
- Forbidden: table, form, search box, giant centred word, saturated fill, vertical text, any overlay darker than `rgba(251,252,247,.15)`.
- Saturated share target ≤ 3% (accent flag + label + link only), hard cap 15% (`scripts/check-first-screen.py`).

### Mobile 390×844
- Header 72 px: logo left (mark 40×25 + wordmark 1.125rem), dark pill "Book" (32 px) and a two-line menu button right. Notice row hidden.
- Frame inset 12 px, r8, height 640 px, P01 `object-position: 28% 50%`. Content in normal flow inside the cover (flex column, no absolute positioning): H1 at top (2.5rem/1.2, padding 28px 20px 0), destination line under it; the notch card is the last flex item (`margin-top: auto`), width = frame width − 32 px aligned right, padding 20px, rows stack (day left, time right, nowrap), concave corners kept.
- No vertical text, no absolutely positioned labels, no text over text (auto-gates checks this). Badge hidden < 782 px.

---

## 4. Home blocks (narrative → problem → method → proof → fees → notes → visit)

| # | Pattern | Purpose | Layout, photo position | Copy |
|---|---|---|---|---|
| 1 | `front-hero` | KV, T1 | section 3 | H1 5 words + card ~25 words |
| 2 | `front-message` | **problem / narrative** (T2) | flag + label "TRAVEL HEALTH"; H2 centred 2 lines "Prepared for the country / you are actually visiting." (1.75rem/1.6/500, ls 0.05em); 3 short centred paragraphs in the 480 px column; link "About the clinic" + Ø36 circle arrow. Pairs P02 P03 left / P04 P05 right as in T2. Padding 112 / 133 (`tok(c)`). | 3 paragraphs, ≈110 words: generic travel advice lists every vaccine; most travellers need two or three; we start with the itinerary, the dates, the places you will sleep. |
| 3 | `front-journeys` | **method 1: which journeys need which doses** (T3) | full-bleed pale band `#F3F4EC`; centred flag + label "JOURNEYS", H2 "Which journeys need / which doses", 3 centred lines; 2×2 white cards (540 wide, gap 40, padding 65): (1) Safari and rural East Africa (2) Backpacking Southeast Asia (3) The Andes and the Amazon (4) Long stays: study, work, volunteering. Each: title 1.5rem/500, 2–3 lines naming the doses we usually discuss (yellow fever and certificate; typhoid, hepatitis A, Japanese encephalitis discussion; yellow fever, altitude, rabies discussion; records, boosters, rabies pre-exposure), link "Read the [region] notes" + circle. No photos (reference cards have none). | 4 × 35 words |
| 4 | `front-hour` | **method 2: how the appointment hour is spent** (Morioka feature rows) | white/ground; centred flag + label "YOUR APPOINTMENT", H2 "One unhurried hour"; three rows. Each row: photo 668×445 (3:2) at x 75 (row 2 at x 20, `tok(e)`), radius 6, feathered left and right edges (`mask-image: linear-gradient(90deg, transparent 0, #000 7%, #000 93%, transparent 100%)`); text column from x 868, width 400: index label "01 \| Review" (accent, Public Sans 0.9375rem ls 0.1em), H3 1.5rem/1.6/500 two lines, paragraph 1rem/1.9. Rows: 01 \| Review — 20 min, P06; 02 \| Doses — 25 min incl. 15 min rest, P07; 03 \| Record — 15 min, P08. Row gap 120 px. Not a step grid, not a timeline (no connecting line, no numbers in circles). | 3 × 50 words |
| 5 | `front-record` | **proof** (Aoba gradient band) | full-bleed band `linear-gradient(160deg, #E6EBEE 0%, #D3DCE1 55%, #E9EDE6 100%)` with a soft single-wave top edge (inline SVG path, 120 px tall, fill = band start colour, sitting on the ground). Left column (x 190–620): flag + label "THE RECORD", H2 "A record you can carry / across borders.", one paragraph, then three facts with `sp-count`: "60 min" first appointment, "6 weeks" ideal lead time, "1 booklet" every dose signed and stamped (Figtree 2.75rem/500 number + Public Sans 0.875rem caption). Right column (x 792–1237): two white link cards 445×140, r4, no shadow, each with a Ø92 icon disc `#E1E7EA` holding a slate line icon (booklet; stethoscope-free calendar), title 1.25rem, arrow "→" right: "Records and certificates", "Your first visit, step by step". Below, 64 px under the columns: four photos 295×220 (4:3), gap 9 px, starting x 220 and running past the right viewport edge (last one cut by ~40 px; band `overflow: clip`, no horizontal scroll): P09, P10, P11, P12. Photos radius 0 (`tok` Aoba). | ≈70 words |
| 6 | `front-groups` | proof 2 / second audience (Aoba "for Medical" band) with **parallax** | inset box x 190–1236 (max-width 1046, centred), height 410, radius 0, background P13 (blurred bright corridor) with `sp-parallax`, `--sp-par: 10%` (mobile 6%); foreground (not moving): centred H2 "For teams and schools" Figtree 3rem/400 ink, sub-label "GROUP CLINICS" accent 0.9375rem, 2 centred lines, outline pill 2 px `#5E6B73`, r9999, 60 px tall, "Plan a group clinic →". White overlay `rgba(251,252,247,.35)` on the image for text contrast. | ≈40 words |
| 7 | `front-fees` | fees (list, not on the first screen) | ground; flag + label "FEES"; H2 left "Vaccines and fees"; full content width (1200) table `tc-fees`: 2 columns (item + one-line note \| price), 6 rows, rows separated by 1 px dotted `#423E3E` (the reference hours-table rule), top and bottom solid 1 px ink; price column right-aligned, `white-space: nowrap`, Figtree 1.25rem/500 tabular-nums; note line under the table 0.875rem; link "All vaccines and fees" + circle. No reveal. | table + 30 words |
| 8 | `front-notes` | notes and stories | ground; flag + label "NOTES"; text list (no images, so no photo repeats on home): 4 latest posts, each row = date (0.875rem `#8A8F91`, width 120) + category pill (`#EEEFE8`, r4, 0.75rem) + title (1rem ink), separated by 1 px dotted rules; link "All notes" + circle. Query Loop. | auto |
| 9 | `front-visit` | visit / close | 2 columns at content width: left P14 (clinic entrance, 3:2, r6, 6/12); right 5/12: flag + label "VISIT", H2 "Bring your itinerary.", address lines, the same two dotted hours rows as the hero card, nearest transit line, then outline pill "Call 604-555-0142" + dark pill "Book a visit". | ≈60 words |

English home ≥ 300 words; narrative paragraphs in blocks 2, 4 and 5 (≥ 3). Photo positions on home: P01, P02, P03, P04, P05, P06, P07, P08, P09, P10, P11, P12, P13, P14 = **14**, no repeats. Saturated colour only in labels, flags, card links.

### Comparison with recent home orders (must not repeat)
| # | Koe | Hibari | Ibuki | Waku | **Tabiji** |
|---|---|---|---|---|---|
| 1 | hero | window hero | white band + full photo | full-bleed hero | **inset r8 frame + concave notch card** |
| 2 | white statement sheet | approach | problem | photo-fill statement | **centred statement flanked by stepped photo pairs** |
| 3 | briefs gradient band | circuit statement | clinics T2 tile | edge-flush hall rows | **2×2 white cards with ghost line-art on pale band** |
| 4 | full-bleed booth parallax | licences | 3-lane ticker | planning band | **three feather-edged photo rows "01 \| Review"** |
| 5 | meeting day | navy lesson strip | first-visit T2 | full-bleed band | **gradient band: facts + icon-disc cards + 4 photos bleeding right** |
| 6 | rates | field parallax | slate proof | prices | **inset blurred-photo band (parallax), centred** |
| 7 | process ink band | crew | fees | notes | fees (dotted rules) |
| 8 | notes | fees | follow-up strip | request cover | notes (text list) |
| 9 | cover close | stories | people / news / ink close | — | visit (photo + hours) |
Why not alike: no full-bleed hero (ours is inset with a ground-coloured notch), no dark/ink band anywhere on the page, no ticker or marquee, no people grid; the parallax band is an inset blurred photo, not a full-bleed scene; Ibuki's white band over a full photo and Koe's paper sheet are both avoided. Signature shapes (concave notch, stepped photo pairs, ghost line-art corners, feathered photo edges) are not used by any of the four.

---

## 5. Inner pages (≥ 8 content pages + repo-contract pages)
Every content page = T1 head (inset frame 420 px + notch card with flag label, H1 2.5rem, one lead line) → body → small close row (flag + "Bring your itinerary." + dark pill "Book a visit"). No sidebar.

1. **About** (`page-about`): head P15. T2 statement "A small clinic for long journeys" with pairs P02 P03 / P04 P05. Then 3 narrative sections in a 720 px column: founded 2014 by Dr. Lena Okoye after ten years in expedition medicine; why the first visit is a full hour; how we keep the cold chain (Samuel Achterberg). Close row.
2. **Journeys** (`page-journeys`): head P12. Intro 2 paragraphs. T3 band with the four journey cards (longer text: usual doses, what we ask, timing). Then "Travelling with children" row: P16 (3:2, r6, feather edges) + text. Note: "Every plan is decided at the visit; these notes are where the conversation starts."
3. **Your appointment** (`page-appointment`): head P01 crop (right part). The three feather rows (01 Review / 02 Doses / 03 Record with P06 P07 P08), each with a longer paragraph; then "What to bring" as a plain list (itinerary, previous records, medication list, passport number for certificates). Not a step grid.
4. **Vaccines & fees** (`page-fees`): head P03. Full fee table (section 9, same 6 rows, same CAD prices) at full content width, then T3 two cards ("What a consultation includes", "Paying and receipts"), then P10 (fridge, 3:2, r6) with a paragraph on how vaccines are stored. No reveal on the table.
5. **Records & certificates** (`page-records`): head P08. T2 statement "Your record travels with you" with pairs P09 P10 / P05 P03. Aoba icon-disc cards (3: "Yellow fever certificate", "Record summary for school or work", "Lost booklet re-issue"). T3 two cards. 
6. **Groups & schools** (`page-groups`): head P11. T2 statement "A clinic that comes to your team" with pairs P12 P16 / P06 P13. T3 two cards (Employers / Schools and universities). Paragraph: minimum 8 people, on-site or at the clinic, run by Tomás Varga.
7. **People** (`page-people`): head P04. Group photo P15 (21:9 crop, r6). Then a dotted-rule list of the 7 people (name Figtree 1.25rem, role, one line each), not a card grid.
8. **FAQ** (`page-faq`): head P05. T3 2×2 question cards ("How early should I book?", "Can I come the week before I fly?", "Do children need a different plan?", "What if I lose my booklet?") linking to anchors; then 10 details/summary items with dotted rules.
9. **Notes** (posts page, role `posts`, empty content; `home.html` / `archive.html` / `category.html` / `tag.html`): head P12 crop; posts as rows: image 4:3 r6 (posts' featured images) left 4/12 + date/category/title/excerpt right; single (`single.html`): category flag label, title 2.5rem, date, featured image in an r8 inset frame with a notch holding the date, 720 px text column.
10. **Contact & visit** (`page-contact`): head P14. T2 statement "Getting here" with pairs P02 P05 / P15 P10. Address, hours (dotted rows, identical to the hero card), phone, email `hello@tabiji-clinic.example`, transit line. No form required.
Repo contract: `pages` in theme-meta = home, about, news, article, category, tag, newsletter, contact (+ journeys, appointment, fees, records, groups, people, faq). screens: news and newsletter → Notes page, article → post 1, category → "Stories", tag → "yellow-fever", contact → Contact & visit.

---

## 6. Colour (reference hex kept, `tok(a)`)
Decision: we keep Morioka's codes for ground, band, text and dark pill (±0) and its blue accent, instead of the slate mapping drafted in stage A. Reasons: (1) the similarity target asks for the reference colours unless the industry does not fit; a calm clinic palette is the same industry family; (2) `#FBFCF7` and `#F3F4EC` are green-leaning (G ≥ R), so they read as pale sage-grey, not cream; (3) the row's ai-nezumi slate `#5E6B73` survives as the secondary text / outline / icon colour and in the block 5 gradient, so the row's palette is still visible.

| Role | Hex | Source token | Use | Share |
|---|---|---|---|---|
| Ground | `#FBFCF7` | Morioka page ground | page, header, notch cards | ≈ 55% |
| Pale band | `#F3F4EC` | Morioka band | T3 band, FAQ band | ≈ 12% |
| Card | `#FFFFFF` | Morioka card | T3 cards, link cards, badge | ≈ 8% |
| Ink | `#423E3E` | Morioka text / dark pill | text, headings, dark pill, outline pill, table rules | ≈ 8% |
| Slate | `#5E6B73` | row palette (ai-nezumi) | destination line, icons, outline pill in block 6, captions | ≈ 2% |
| Mist gradient | `#E6EBEE` → `#D3DCE1` → `#E9EDE6` | Aoba band structure, slate family | block 5 only | ≈ 8% of home |
| Accent | `#0000F9` | Morioka accent | flag marks, labels, index labels, card links + circles | ≤ 1.5% |
| Ghost line | `#F0F1E4` | Morioka card line-art | T3 corners | — |
| Notice pill | `#EEEFE8` | derived from band | header notice pill, category pills | — |
| Muted | `#8A8F91` | derived | dates, meta | — |
| Rule | `#E3E5DC` | derived | header rule, hairlines | — |
- Contrast: ink on ground 10.4:1; accent on ground 8.5:1; white on ink 10.6:1; slate on ground 5.3:1.
- No navy/dark bands, no saturated fill anywhere. First screen saturated share target ≤ 3% (reference 1.3%), hard cap 15%.
- theme-meta tags: colors `light`, `calm`, `blue`, `neutral`; style `clean`, `photographic`, `airy`, `serene`; type `health`.

## 7. Type (font_direction: sans)
- Latin display: **Figtree** (variable 300–700): headings, wordmark, numbers. Latin text: **Public Sans** (variable 300–700): body, nav, labels, tables. Both sans; no serif anywhere.
- CJK: zh-TW **Noto Sans TC**, ja **Noto Sans JP** (gothic / hei) for headings, bundled as subsets (Hokuto / Hada method; the subset script is broken). zh/ja body uses the system sans (not bundled, and the body stack must not contain the bundled zh or ja family).
- Stacks (theme.json `fontFamilies` + `fontFace` so editor and front end match; style.css uses `:lang()`, so copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it):
  - display: `"Figtree", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`
  - body: `"Public Sans", system-ui, -apple-system, "Segoe UI", sans-serif`
  - `:root:lang(zh-TW)` display: `"Figtree", "Noto Sans TC", sans-serif`; body: `"Public Sans", "PingFang TC", "Microsoft JhengHei", sans-serif`
  - `:root:lang(ja)` display: `"Figtree", "Noto Sans JP", sans-serif`; body: `"Public Sans", "Hiragino Sans", "Yu Gothic", "Meiryo", sans-serif`
- Size presets (theme.json): small 0.8125rem, base 1rem, medium 1.125rem, large 1.5rem, x-large 1.75rem, xx-large 2.75rem, **huge 4.5rem** (max, ≥ 4.25rem satisfied; used by the hero H1).
- Values (`tok(b)`): hero H1 4.5rem/1.15/400 ls 0.04em; H2 1.75rem (reference 26–28 px)/1.6/500 ls 0.05em, margin 32px 0 40px; H3 1.5rem (reference 24 px)/1.6/500 ls 0.05em; column H3 1.25rem (reference 20 px); page-head H1 2.5rem/1.3/500; labels Public Sans 0.9375rem (15 px) ls 0.1em uppercase accent; nav 1rem ls 0.1em; pills 1rem ls 0.1em; body en 1rem/1.9 ls 0.02em; body zh/ja 1rem/2 ls 0.1em (reference airy body); centred message paragraphs line-height 2.
- CJK headings ≈ 0.75× the English size (hero 3.375rem zh/ja, still one preset); fr/de `hyphens: auto`.
- One top menu only.

## 8. Responsive rules (auto-gates)
- 390 px: no horizontal overflow (`html, body { overflow-x: clip }`; block 5 photo row and parallax boxes `overflow: clip`). First screen: no vertical text, no absolutely positioned labels, nothing overlapping the H1 (see 3).
- T2 pairs < 1024 px: in-flow row of four photos (2 per row at 390) under the text, no absolute positioning.
- T3 cards: 1 column < 782 px, padding 32 px; ghost corner 160×120.
- Feature rows < 782 px: photo full width (feather mask only left/right 4%), text under it.
- Fee table (`tc-fees`): at ≥ 782 px (checked at 800 and 1280) the table is 100% of the content width, `table-layout: auto`, price column `white-space: nowrap; text-align: right; width: 1%`, nothing cut. < 782 px every table stacks: each row becomes a block (item and note on top, price below, right-aligned), `thead` hidden visually. Same rule for any table on inner pages.
- Header < 960 px: menu button + overlay; notice row hidden.

## 9. Fixed numbers (identical on Home, Fees, Journeys, Appointment, Records, Groups, FAQ, Contact, footer, and all five languages; CAD everywhere)
**Fees (6):**
| Item | Note | Price |
|---|---|---|
| Travel-health consultation | 60 min, itinerary review and written plan | CA$95 |
| Follow-up dose visit | 15 min, per visit, vaccine priced separately | CA$35 |
| Yellow fever vaccine | includes the International Certificate | CA$185 |
| Typhoid vaccine | injectable, one dose | CA$95 |
| Hepatitis A vaccine | per dose | CA$90 |
| Record review and booklet re-issue | summary letter included | CA$40 |
Note line: "We confirm your plan and its total before any dose is given." Group clinics: from 8 people, quoted per group (no number).

**Hours:** Mon–Fri 9:00–18:00; Saturday 9:00–13:00; Sunday and statutory holidays closed. **Phone** 604-555-0142. **Email** hello@tabiji-clinic.example. **Address** 2F, 418 Water Street, Vancouver, BC V6B 1B6 (fictional unit); 4 min walk from Waterfront Station.
**Appointment hour:** 60 min = 01 Review 20 min + 02 Doses 25 min (includes 15 min rest after the injection) + 03 Record 15 min. **Lead time:** book 6 weeks before departure; later visits still welcome. **Founded** 2014.

**People (7):** Dr. Lena Okoye (founder, medical director, travel medicine physician); Dr. Mateo Ruiz (physician, altitude and expedition travel); Hana Kowalski RN (lead travel-health nurse); Priya Raman RN (nurse, children and families); Samuel Achterberg (pharmacist, vaccine supply and cold chain); Mei-Lin Chou (records and front desk); Tomás Varga (group clinics for employers and schools).
**Stories (4, anonymised, fictional; posts in category "Stories"):** (1) Three weeks overland, Nairobi to Kigali (yellow fever certificate, timing); (2) A semester in Cusco (altitude, hepatitis A, typhoid, rabies discussion); (3) A family of four to Hội An (children's plan); (4) A field team of twelve to the Mekong Delta (group clinic). Plus 2 posts in "Notices": "Holiday hours" and "What the stamp on your certificate means". Tags: yellow-fever, families, groups, altitude, records.
No efficacy claims, no statistics, no awards, no real media or people.

## 10. Scroll effects (sp-scroll; three types: parallax, reveal-zoom, count)
| Block | Class | Reference effect (site, trigger, time, easing) | Ours |
|---|---|---|---|
| 1 hero | `sp-parallax` on the Cover, `--sp-par: 8%` (≤ 781 px: `5%`) | Morioka hero ghost fades with the first scroll (CSS `scroll()`, linear, tied to scroll) — we translate the scroll-tied hero movement into the photo layer moving slower than the frame | background P01 moves; H1, destination line and notch card are foreground and do not move. No reveal in the hero. |
| 6 groups band | `sp-parallax`, `--sp-par: 10%` (≤ 781 px: `6%`) | Aoba blurred "for Medical" band (static there) + Morioka's scroll-tied motion | background P13 moves; heading, lines and pill are foreground |
| 2 message photos, 4 feature-row photos, 5 photo row container | `sp-reveal sp-reveal--zoom` (scale 1.06→1, 1.6s) | Morioka photos: CSS `view()` timeline, range cover, 0→18–22%: blur 20px→0, opacity 0→1, scale 1.1→1, linear | same idea within the sp limits (no blur, scale 1.06); on block 5 the class goes on the row container, not the four children |
| 2 text column, 3 cards, 4 text columns | `sp-reveal sp-reveal--up` (24 px, 0.8s `cubic-bezier(.23,1,.32,1)`); block 3 card grid parent `sp-stagger` (0.12s steps) | Morioka text: same `view()` timeline as photos | up 24 px |
| 5 facts | `sp-count` (1.2s easeOutCubic) on "60", "6", "1" | — (ours) | numbers count once |
Not animated: hero, fee table, notes list, footer, forms. Hover transitions 0.3s `cubic-bezier(0.4,0.4,0,1)` (`tok(g)`) on pills, links, circle arrows (circle fills ink, arrow turns white). Badge ring 24s linear. All: reduced motion and `?sp-static` = final state; editor = final state.
Inner pages: page-head frames get `sp-parallax` (`--sp-par: 6%`); T2 photos and feature-row photos `sp-reveal--zoom`; T3 cards `sp-stagger` + `--up`.

## 11. Photos (16, Grok, one at a time, read every one)
STYLE (exact string on every prompt):
`high-key documentary photograph, soft diffused window light, white walls and pale natural wood, clean modern travel-health clinic in an international city, shallow depth of field, calm candid moment, people look at each other not at the camera, diverse adults and children, muted palette of white, pale wood, soft slate blue-grey and light sage, medical details realistic and gentle, no text, no logos, no brand marks, no readable labels, no signage lettering, no Japanese elements`

Regenerate any image with text, logos, readable vial labels, broken hands, needles at odd angles, or a darker/colder grade. ≤ 300 KB, ≤ 2000 px, webp, no cutouts. One readme.txt line each (AI-generated, CC0).

| ID | Subject / composition | Ratio | Used on (once per page) |
|---|---|---|---|
| P01 ★ | At a pale-wood desk by a bright window, a nurse in a white top draws a vaccine from a small unlabelled vial into a syringe (left third); beside her a physician reads a printed itinerary with a pencil; a small travel backpack on the chair; the right 40% is soft white wall and window light, empty | 16:9 (2000×1125) | Home hero; Appointment head (right crop) |
| P02 ★ | High angle on a bright waiting area: pale-wood benches, a plant, one traveller with a small backpack reading | 3:4 | Home T2; About T2; Contact T2 |
| P03 ★ | Gloved hands holding a small unlabelled vial and a syringe over a white tray | 3:4 | Home T2; Fees head; Records T2; About T2 |
| P04 ★ | Physician talking with a young traveller across a desk, both seated, warm attention | 3:4 | Home T2; About T2; People head |
| P05 ★ | A carry-on suitcase and a blank closed booklet on a pale bench by a window | 3:4 | Home T2; About T2; Records T2; FAQ head; Contact T2 |
| P06 ★ | Physician and a couple leaning over a printed world map with pencil marks on a pale table | 3:2 | Home row 01; Appointment row 01; Groups T2; Notes post 1 |
| P07 ★ | Nurse giving an injection in the upper arm of a calm seated traveller, sleeve rolled | 3:2 | Home row 02; Appointment row 02 |
| P08 ★ | Nurse handing a small blank vaccination booklet to a traveller across the desk | 3:2 | Home row 03; Appointment row 03; Records head |
| P09 ★ | Close-up of a hand pressing a plain round stamp onto a blank booklet page | 4:3 | Home row block 5; Records T2; Notes post 6 |
| P10 ★ | Open medical fridge with neat rows of plain white boxes, cool soft light | 4:3 | Home row block 5; Fees body; Records T2; Contact T2 |
| P11 ★ | Nurse briefing five colleagues around a table in a bright meeting room | 4:3 | Home row block 5; Groups head; Notes post 4 |
| P12 ★ | Traveller with a backpack walking through a bright airport concourse, soft bokeh, no signs | 4:3 | Home row block 5; Journeys head; Notes index/archive head; Groups T2 |
| P13 ★ | Defocused bright clinic corridor, soft white light and pale wood, figures as soft shapes | 16:9 | Home block 6 (parallax); Groups T2; Notes post 2 |
| P14 ★ | Clinic entrance seen from the street: glass door, pale wood frame, a plant, morning light, no signage | 3:2 | Home visit; Contact head; Notes post 5 |
| P15 | Four clinicians talking together in the clinic hallway, relaxed | 3:2 | About head; People body (21:9 crop); Contact T2 |
| P16 | Nurse kneeling to talk with a child holding a toy plane, parent beside them | 3:2 | Journeys family row; Groups T2; Notes post 3 |
★ = used on the home page (14 positions). Notes posts (featured images): 1 Nairobi–Kigali P06, 2 Cusco P13, 3 Hội An P16, 4 Mekong team P11, 5 Holiday hours P14, 6 Certificate stamp P09; each once on the notes index (whose head is P12).
Per-page check: Home 14 distinct; About P15 P02 P03 P04 P05; Journeys P12 P16; Appointment P01 P06 P07 P08; Fees P03 P10; Records P08 P09 P10 P05 P03; Groups P11 P12 P16 P06 P13; People P04 P15; FAQ P05; Contact P14 P02 P05 P15 P10. Notes index P12 + P06 P13 P16 P11 P14 P09. No page repeats an image.

## 12. Similarity table (target 80%; reference values from `reference-tokens.md`)
| Dimension | Morioka / Aoba (reference) | Tabiji (this theme) |
|---|---|---|
| Ground | `#FBFCF7` | `#FBFCF7` |
| Pale band | `#F3F4EC` | `#F3F4EC` |
| Text / dark pill | `#423E3E` | `#423E3E` |
| Accent | `#0000F9`, < 1.5% | `#0000F9`, ≤ 1.5% |
| Card | `#FFFFFF`, r0, no shadow | `#FFFFFF`, r0, no shadow |
| Ghost line-art | `#F0F1E4`, 240×185 bottom-right | `#F0F1E4`, 240×185 bottom-right, own drawings |
| First-screen saturated share | 1.3% | ≤ 3% (cap 15%) |
| Header | 128 px band, nav 17px/400 ls 1.7px, outline pill 1 px + dark pill r9999 | 128 px, nav 1rem/400 ls 0.1em, same pills |
| Hero frame | 20 px inset, r8, ≈1400×765, under header | 20 px inset, r8, 1400 × min(765, 100svh−136) |
| Notch card | 586×205, bottom-right, concave corners, hours table | 560×210, bottom-right, concave corners, hours rows (no table) |
| Ghost headline | white ghost word ≈ 70 px + spaced Latin line | H1 4.5rem (72 px) light ink 90% + spaced Latin destination line |
| H2 / H3 | 26–28px/700/1.6/0.05em; 24px | 1.75rem/500/1.6/0.05em; 1.5rem |
| Label | 15px Roboto ls 1.5px uppercase accent, flag 14×6 above | 0.9375rem Public Sans ls 0.1em uppercase accent, flag 14×6 above |
| Body | 15–16px, lh ≈ 2, ls 0.1em | en 1rem/1.9/0.02em; zh/ja 1rem/2/0.1em |
| Section padding | 112 top / 133 bottom | 112 / 133 |
| Message block | text column ≈480 centred; clusters x 110–415 and 1025–1330, r6 | 480; same x ranges, r6, same sizes |
| Cards | 2×2, 540 wide, gap 40, padding 65 | identical |
| Feature rows | photo 668×445 at x 75, text from x 868, feathered left/right edges, "01 \| Word" accent | identical, feather 7% |
| Link | underlined, Ø36 outline circle arrow | identical |
| Badge | fixed Ø80, rotating ring text, bottom-right | identical size/position, ≥782 px only |
| Gradient band + cards (Aoba) | fluid teal band, white cards with Ø92 pale disc, 4 photos 295 wide bleeding right | slate-mist band, white cards Ø92 disc, 4 photos 295 wide bleeding right |
| Blurred photo band (Aoba) | inset 1046×410, centred title, outline pill 2 px | inset 1046×410, centred title, outline pill 2 px, + parallax |
| Shadows | none | none |
| Motion | `view()` blur 20 + scale 1.1 → sharp, linear; hover 0.3s `cubic-bezier(0.4,0.4,0,1)` | `sp-reveal--zoom` 1.06→1 1.6s + `--up`; hover 0.3s same easing; parallax 8% / 10% |
| Imagery | high-key documentary photos, pale wood, white walls | same direction, own Grok photos |
| Type | rounded gothic JP + Roboto labels | Figtree + Public Sans, Noto Sans TC/JP (row: sans) |

## 13. Home acceptance checklist (stage 1 review compares against this)
1. First screen 1440×900: 128 px header with notice row, nav, outline pill and dark pill; P01 in a 20 px inset frame, r8; H1 "Where are you / going next?" at 4.5rem in the right 38% over the white wall; destination line under it; ground-coloured notch card bottom-right with both concave corners and two dotted hours rows; rotating Ø80 badge bottom-right; accent flag + label visible. No table, form, search, giant centred word, dark overlay.
2. Mobile 390×844: inset frame 12 px, H1 and notch card in flow, nothing overlapping, no vertical text, no horizontal overflow.
3. Block order exactly as section 4 (9 blocks); T2 pairs stepped in opposite directions; T3 four white cards with visible ghost corners and circle-arrow links on `#F3F4EC`; three feathered rows with "01 | Review / 02 | Doses / 03 | Record".
4. Block 5 gradient band with wavy top, 3 counted facts, 2 icon-disc cards, 4 photos bleeding off the right edge without horizontal scroll.
5. Block 6 inset blurred band with parallax; hero parallax; `check-parallax.mjs` passes (≥ 6 px, reduced motion 0, ≥ 3 reveals hidden then shown, nothing transparent at the bottom).
6. Fee table: 6 rows, CA$ prices exactly as section 9; full width at 800 and 1280, price column nowrap, right-aligned, not cut; stacked on 390.
7. Colours = section 6 (ground `#FBFCF7`, band `#F3F4EC`, ink `#423E3E`, accent `#0000F9` small only); `check-first-screen.py` ≤ 15% (target ≤ 3%).
8. Fonts Figtree + Public Sans via theme.json fontFace; max preset 4.5rem; editor = front end.
9. 14 home photo positions, no repeats, no text/logos in photos, one STYLE.
10. ≥ 300 English words, ≥ 3 narrative paragraphs; numbers (60 min, 6 weeks, fees, hours) identical to section 9.
11. `auto-gates.mjs` pass for en (home), sp-* used only as section 10 (none in the hero except `sp-parallax`).
