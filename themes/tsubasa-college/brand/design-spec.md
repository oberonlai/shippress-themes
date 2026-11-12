# Tsubasa College: design spec (stage 1)
Slug `tsubasa-college` · type **education** · industry: aircraft maintenance training college (licence-track programme, hangar teaching).
Archetype: editorial-magazine · first screen: full-bleed photo + info bar · page structure: **process-timeline** (horizontal month ruler, never a vertical timeline).
Reference (main): **https://www.mhi.com/** — aviation page https://www.mhi.com/business/products-services/aviation/aircraft-aftermarket-service (`ref/mhi-mro-0.png`, `ref/mhi-mro-900.png`) and the home "magazine" hero (`ref/mhi-home-0.png`). Secondary: none.
Tokens: `brand/reference-tokens.md`, cited below as `tok(a)` … `tok(g)`.
Imagery: **photo** (stage-a IMAGERY = photo): high-key bright documentary colour photographs. 0 cut-outs.
Font direction: **serif** — Latin headings **Fraunces**, Latin body **Source Sans 3**, CJK headings **Noto Serif TC / Noto Serif JP**. Five languages: en, zh-TW, ja, fr, de.
Form contract: **v1** (`steps/form-contract-v1` exists) → §12.

---
## 1. Signature techniques (all three obvious at first glance; never soften)

### T1. Focus-pull hangar window (mhi aftermarket-service photo)
- **Reference:** https://www.mhi.com/business/products-services/aviation/aircraft-aftermarket-service — a 936×400 (2.34:1) documentary photo of technicians reaching into an airframe's underside. The sharp photo occupies only the **centre 64%** (600px); the **left and right 18% bands** are the same frame stretched and heavily blurred, so the picture "pulls focus" to the middle. Above it: 38px uppercase H1, a bracketed slate-grey sub-label `[ AVIATION ]`, and a **40×2px black rule**. `tok(b)(e)(f)`.
- **Ours (home hero):** full-bleed photo (img-01) at `height: clamp(520px, 74vh, 640px)` (592px at 1280×800). Construction: one `.sp-parallax__layer` holding (a) img-01 as a full-width backdrop, `object-fit: cover`, `filter: blur(18px) saturate(.92) brightness(1.04)`, `transform: scaleX(1.12)` (stretched), and (b) img-01 again as a **sharp centre window**, absolutely centred, `width: 64%`, full height, `object-fit: cover`, no border, no shadow. The edge between sharp and blurred is a hard vertical cut, exactly like the reference (no feathering).
  The H1 group sits over the **left-middle** of the hero (starts at container left; bottom edge 40px above the cohort strip): H1 + bracket label + rule (§6). A scrim `linear-gradient(90deg, rgba(20,24,29,.58) 0%, rgba(20,24,29,.30) 38%, rgba(20,24,29,0) 62%)` sits *below* the text, *above* the image layer.
- **Not to soften:** the blurred flanks stay 18% each on desktop (≥1024px), 12% on 782–1023px, 8% on mobile; blur ≥16px; the cut stays hard; the 40×2 rule stays (white in hero, #14181D on white pages).
- **Inner pages (all of them):** the pagehead **is the reference page layout**: on white, uppercase Fraunces H1 2.375rem + `[ SECTION ]` bracket label + 40×2 #14181D rule, then the focus-pull photo inside the container at **2.34:1** (max-height 480px), sharp centre 64%, flanks 18% blurred, `sp-parallax --sp-par:6%`. Required on About, Programme, Modules, Facilities, Instructors, Admissions, Fees, Graduates, Contact, Newsletter.

### T2. Isometric module field with pill tags (mhi home "Spectra" hero)
- **Reference:** https://www.mhi.com/ home — ~14 square photo tiles laid on **one rotated plane** (isometric: rotateX + rotateZ, same angle for all), each tile carrying a **white pill tag** (`#Aerospace`, `#Hydrogen`…) rotated with the plane, one pill dark; tiles bleed past the right viewport edge and up out of the slate band into the pale wash above; tiny offset shadow on tiles. `tok(a)(d)(e)`.
- **Ours (home block 4):** 8 square photo tiles (img-03 … img-10) on one plane. Grid `3 columns × 3 rows` with the last cell empty (bottom-right), tile 188px, gap 36px. Plane transform `transform: rotateX(52deg) rotateZ(-34deg)`; `transform-origin: 50% 50%`; no perspective (orthographic, like the reference). Tile shadow `3px 3px 0 rgba(20,24,29,.18)`. Each tile has a pill at top-left (`top:-14px; left:12px`, inside the tile so it rotates with the plane): white #FFFFFF, text #14181D, Source Sans 3 600 0.8125rem, padding 6px 16px, radius 999px, `box-shadow: 0 2px 6px rgba(0,0,0,.18)`. **One dark pill** (#14181D bg, white text) on "Human factors" (the thread that runs through all 18 months — mirrors the reference's single dark pill).
  Section background: upper 42% pale wash #E6ECEE, lower 58% slate #3C5D69 with the reference's faint diagonal hatch `repeating-linear-gradient(135deg, rgba(255,255,255,.04) 0 2px, transparent 2px 10px)`. The plane sits in the right 7/12, its top row rising out of the slate into the wash, its right column bleeding off the viewport edge (section `overflow: clip`).
- **Not to soften:** all tiles on one rigid plane at the same angle (no individual tilts, no cards fanning out), pills rotate with the plane, the plane crosses the wash/slate boundary, tiles bleed right. Mobile keeps the rotation (tile 104px, gap 20px, pills 0.6875rem), placed below the text, centred, section `overflow: clip`.
- **Inner pages:** Programme (full 8-tile plane = module index), Facilities (6 tiles = workshops), Admissions (2×2 = entry routes), Graduates (2×2 = where graduates work; pill = graduate's first name). Same angle, pills, wash/slate split.

### T3. Slate strip with white notice card (mhi home "READ THE LATEST ARTICLES ›")
- **Reference:** a slate band (#3C5D69 → #476672) crossing the lower part of the home hero from the left viewport edge, carrying a white uppercase label with a `›` chevron and a **white news card** (photo thumbnail 256×144 left, title + date right, 1px grey underline with a small **red chevron** at its right end). `tok(a)(f)`.
- **Ours (home hero foot = "cohort strip"):** slate #3C5D69 band from the **left viewport edge to 62% of viewport width** (desktop), height 224px; it overlaps the hero photo by 152px and extends 72px below onto a pale wash #E6ECEE strip (full width, 72px) — the reference's wash under its band. Contents aligned to container left: label `NEXT INTAKE ›` (Source Sans 3 600, 1.375rem, uppercase, tracking .04em, white, chevron white), 16px gap, then the white card 512×120: thumb img-02 (213×120, 16:9) left, right: title "March 2027 cohort starts Monday 1 March" (Source Sans 3 600 1.0625rem, #14181D, 2 lines max), meta "18 months · 24 places · Hangar 2, Carrow Field" (0.875rem #476672), bottom: 1px #E5E5E5 underline across the text column with **red #E31F26 `›`** at right and the link text "Ask about a start" (0.875rem #14181D). The card is the only enquiry in the first screen (kept small, like the reference).
- **Not to soften:** band starts at viewport x=0 (not container), straddles the photo edge, card is pure white radius 0, chevron red.
- **Inner pages:** each of Programme (next cohort), Admissions (application deadline 15 January 2027), Fees (two intake cards), Contact (next open day), Journal (latest post) ends its pagehead with the same strip (left edge → 62%, 1 or 2 cards). Plus the supporting reference furniture on every page: #E5E5E5 5-column sitemap footer and the 48×48 black back-to-top square (white up-chevron), `tok(f)`.

### Supporting (not counted)
- Red chevron bullet links in two columns `• Powerplant ›` (`ref/mhi-mro-0.png` "• CRJ ›"): bullet #14181D, chevron #E31F26 0.75em, link text #14181D 1.0625rem; column gap = 50% container. Home intro + every inner page's "related" row.
- Header: two tiers like the reference (utility row + main row), 1px #E5E5E5 hairline below.

---
## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
- **What it draws:** mhi.com's aviation page opens on a hangar floor at working height — two technicians reaching up into the underside of an airframe, wing/fuselage overhead, another aircraft's tail fin and ground equipment behind, shallow depth of field. The frame is a focus pull: sharp working centre, blurred stretched sides. Headline in uppercase, a bracketed category, a short black rule; the enquiry is kept small (a one-line statement and two `• Name ›` links). The home hero adds a slate band with a white news card and an isometric field of tagged photos.
- **Story:** quiet, competent people keep aircraft safe and ready; the company is the sum of that careful work.
- **Signature motion:** slow image parallax (simpleParallax, scale ~1.2) on the photograph, in-view waypoint reveals for content below; nothing flashy in the first screen.

### (2) Our translation (aircraft maintenance training college)
Same composition, same image type (real documentary photograph, people at an aircraft, hangar depth), same motion: a **bright hangar at mid-morning**, high windows; an **instructor (woman, 50s, navy coveralls) steadies an open engine cowling** with both hands while a **student (man, 20s, grey coveralls, safety glasses) reaches up with a torch to check the engine mounts** of a twin-engine turboprop wing; the aircraft nose, a work stand and a tool trolley behind, softly out of focus. The sharp centre window holds both people; the blurred flanks stretch the hangar. Story: *this is where people learn to release an aircraft back to service* — the teacher's hands stay on the work, the student does the check. Motion: the photo layer drifts with scroll (sp-parallax), text stays still. Enquiry kept small in the cohort card.

### (3) KV checklist (all items in the first screen, visible at 1280×800)
| # | Reference element | Our equivalent | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Hangar photo with sharp centre 64% and blurred stretched 18% side bands (`mhi-mro-0`) | Instructor steadying cowling, student checking engine mounts; blurred stretched flanks of the same frame | full-bleed hero, 100vw × 592px (1280×800); sharp window centred | `sp-parallax`, `--sp-par: 8%` (mobile 5%) on the layer; scale 1.18 | img-01 |
| 2 | Uppercase H1 + `[ AVIATION ]` bracket label + 40×2 black rule | H1 "Release an aircraft back to service." (Fraunces 500) + `[ AIRCRAFT MAINTENANCE COLLEGE ]` + 40×2 **white** rule, white text on scrim | left-middle over the photo, from container left, max-width 12ch | none (static) | over img-01 |
| 3 | Slate band from left edge + white news card with thumb, date, red chevron underline (`mhi-home-0`) | Cohort strip: `NEXT INTAKE ›` + white card "March 2027 cohort starts Monday 1 March", meta, "Ask about a start ›" | hero foot, viewport x=0 → 62%, straddling photo bottom edge by 152px | none (hero: no reveal) | img-02 (card thumb) |
| 4 | White pill tags rotated with the isometric plane (`mhi-home-0`) | Two white pills pinned on the photo at the work points: "Engine mounts" (near the student's torch) and "Cowling latch" (near the instructor's hand), rotated −34° like the T2 plane, one 6px white dot + 1px white leader line (24px) to the point | inside the sharp window, upper-right third (desktop ≥1024px). <1024px: same pills shown flat in a row under the H1 in normal flow | none | on img-01 |
| 5 | Two-tier header: small utility row + uppercase nav, red active item, hairline below | Utility row (phone · hours · language) + main row: wordmark left, **centred** uppercase nav, active item text #E31F26; 1px #E5E5E5 hairline | top, 112px (36 + 76) | none | — |
All five items are implemented in the hero/header pattern and visible without scrolling at 1280×800. Mobile: items 1, 2, 3, 5 visible in the first 844px; item 4 as flat pills below the H1.

---
## 3. Home page (blocks, order, layout)
Container 1296px, side padding `clamp(20px, 5vw, 72px)`; section padding 100px top/bottom (`tok(c)`), mobile 56px.
| # | Block | Purpose | Layout & images | Copy weight |
|---|---|---|---|---|
| 1 | **Header** | wordmark, single menu, language | §1 supporting; utility row 36px (`+00 41 7720 1998 · Student office Mon–Fri 08:30–17:00` left, language switcher right, 0.8125rem); main row 76px: wordmark "TSUBASA COLLEGE" Fraunces 600 1.25rem tracking .08em left, nav centred (About · Programme · Modules · Instructors · Admissions · Fees · Contact; Source Sans 3 600 0.875rem uppercase tracking .04em), right empty to balance (same width as wordmark) | 7 nav items |
| 2 | **Focus-pull hero + cohort strip** | key visual | §1 T1 + T3, §2 KV; dark scrim left | H1 (6 words), label, 1 sub-line "An eighteen-month licence-track programme in two working hangars at Carrow Field." (white 1.0625rem, max 34ch), card |
| 3 | **Intro** (white) | who we are, how we teach | 12-col: left 4 cols `[ THE COLLEGE ]` + H2 "TAUGHT ON THE HANGAR FLOOR"; right 8 cols: **3 narrative paragraphs** (≈60 words each, `sp-reveal--up`), then the two-column chevron link list (8 modules `• Powerplant ›` … linking to /modules/#m1…#m8), then a facts row in 4 cells with 1px #E5E5E5 vertical hairlines: **2,400** hours · **18** months · **8** modules · **24** places per cohort (Fraunces 500 2.75rem numbers, `sp-count`; label 0.875rem uppercase #476672) | 180 words + list + facts |
| 4 | **Isometric module field** (T2) | the eight modules at a glance | §1 T2; left 5/12: on the wash `[ MODULES ]`, H2 "EIGHT MODULES, ONE HANGAR" (#14181D), 1 paragraph ≈50 words; on the slate below: white uppercase link `HOW THE MONTHS ARE SEQUENCED ›` (anchor to block 5). Right 7/12: the plane; tiles = img-03 Powerplant, img-04 Airframe, img-05 Avionics, img-06 Landing gear, img-07 Inspection (NDT), img-08 Human factors (dark pill), img-09 Composites, img-10 Task records; each tile links to /modules/#… ; parent `sp-stagger`, tiles `sp-reveal sp-reveal--up` | 50 words + 8 pills |
| 5 | **Month ruler** (process-timeline, horizontal) | how the 18 months are sequenced | white; `[ PROGRAMME ]` + H2 "HOW THE EIGHTEEN MONTHS ARE SEQUENCED" + 1 paragraph (≈50 words). Ruler: CSS grid `grid-template-columns: 220px repeat(18, 1fr)`; head row month numbers `01…18` (0.75rem, tabular-nums, #476672); vertical tick hairlines 1px #E5E5E5 every column; 5 ruled rows 64px, 1px #E5E5E5 bottom: label cell (Fraunces 500 1.125rem + hours 0.8125rem) and a bar spanning the months, height 32px, white label inside (0.8125rem): Foundation 1–6 (#3C5D69) · Systems 7–12 (#3C5D69) · Hangar practice & type familiarisation 13–15 (#476672) · Line placement & final assessment 16–18 (#3A4654) · **Human factors & regulation thread 1–18** (4px #E31F26 line, label in the left cell only). Rows container `sp-reveal--up`. Link `• See each phase in detail ›` → /programme/ | 50 words + rows |
| 6 | **Certification ledger** | what each module certifies | white; 12-col row: left 5 cols photo img-14 (4:3, radius 0); right 7 cols `[ CERTIFICATION ]` + H2 "WHAT EACH MODULE CERTIFIES" + 1 paragraph ≈60 words (row `sp-reveal--up`). Below, **full-width table** (8 rows, §8 table rules): Module · Months · Hours (right, nowrap) · How it is assessed. No reveal on the table | 60 words + table |
| 7 | **Parallax hangar band** | a day in the hangar (daily routine) | full-bleed 560px band (mobile 420px), img-11 in `.sp-parallax__layer`, `--sp-par: 10%` (mobile 6%); foreground (not in the layer): white card 480px wide (mobile: full width minus 20px each side, bottom), anchored container-left, bottom 48px: `[ A DAY IN THE HANGAR ]`, H3 "From toolbox check to sign-off", 5-line routine list (07:30 / 07:45 / 08:00–12:00 / 12:45–15:00 / 15:00–16:00, §9) | ≈70 words |
| 8 | **Instructors** | who teaches | `[ INSTRUCTORS ]` + H2 "PEOPLE WHO SIGN THEIR OWN WORK"; two wide cards side by side (each 50%, gap 36px): photo 4:5 left 45% (img-12 Daniel Okafor, img-13 Mei Lin Hartmann), text right: name Fraunces 500 1.5rem, role 0.875rem uppercase #476672, 45-word bio, `• Instructors ›` with red chevron and 1px #E5E5E5 underline (same anatomy as the T3 card). Below: 5 remaining people in a 5-column hairline row (name + role). Parent `sp-stagger`, cards `sp-reveal--up`. Mobile: cards stack, photo on top 4:5 at 60% width | 2×45 words + 5 names |
| 9 | **Fees and intakes** | price list + next starts | white; `[ FEES ]` + H2 "FEES AND INTAKES"; **full-width fee table** 6 rows (§9, §8 rules), note line "All fees in euros. The programme fee can be paid in six instalments of €3,600." Then a T3 slate strip from viewport x=0 to 70%: label `NEXT INTAKES ›` + two white notice cards side by side, **text-only** (img-02 is already used in the hero card on this page), each with a 4px #476672 left edge: "Monday 1 March 2027 · apply by 15 January 2027" and "Monday 6 September 2027 · apply by 15 July 2027", red `›` underline as T3 | table + 1 line + 2 cards |
| 10 | **Journal** | 3 latest posts | `READ THE LATEST FROM THE HANGAR ›` (Source Sans 3 600 1.375rem uppercase, like the reference label) then 3 columns: thumb 16:9 (post featured images img-15, img-16, img-17), title Source Sans 3 600 1.0625rem, date 0.875rem, 1px #E5E5E5 underline + red `›` | 3 titles |
| 11 | **Newsletter** ("Hangar notes") | monthly open-day and intake notes | pale wash #E6ECEE band, 2 columns: left H3 "Hangar notes, once a month" + 1 line (open days, application deadlines, one workshop story); right `shippress_form_slot` kind newsletter (email + submit), §12. **No reveal** | 30 words |
| 12 | **Footer** | sitemap | #E5E5E5 band, padding 100px 0 36px, **5 columns at 268px pitch** (`tok(c)`): College (About, Instructors, Facilities) · Programme (The 18 months, Modules, Graduates) · Admissions (Admissions, Fees & intakes, Contact) · Journal (Journal, Newsletter) · Visit (address, office hours, open days). Column heads Source Sans 3 600 1rem uppercase, links 0.8125rem 600 uppercase #14181D. Below on white: 48×48 black back-to-top square (bottom-right of container, white chevron up), legal links (Privacy) 0.8125rem, "© Tsubasa College" | — |

**Home photo positions (≥8 required): 17** — img-01, img-02, img-03, img-04, img-05, img-06, img-07, img-08, img-09, img-10, img-11, img-12, img-13, img-14 + journal featured img-15, img-16, img-17. No photo appears twice on the home page.
Home English words: target ≈450 (≥250 required), ≥3 narrative paragraphs ≥20 words (block 3 has three; blocks 4, 5, 6 add more).

### Comparison with recent home orders (must differ)
| Theme | Their order | Why ours differs |
|---|---|---|
| Homura Safety | header slab → KV (bar lettering) → docked strip → intro → notch pair ×2 → scrim tiles → parallax visit band → findings → fees → team → cases → journal → book band → waitlist → footer | No docked link strip, no notch pairs, no scrim tiles, no booking band. Our hero is a focus-pull window with a left-edge slate notice strip; our signature body block is a rotated 3D plane; process is a horizontal month ruler; no cases on home |
| Meguri Waste | pan-strip hero → dissolving-wash intro → stream ruled rows → pictogram day line → parallax dock band → price rows → people rows → case rows → schedule band → footer | No pan strip or pictograms; our day appears as a card on a parallax band, our ruler is an 18-column grid with spanning bars, people are two cards + hairline row, not rows |
| Gaku Frames | framed-window hero → mitre intro → masonry mouldings → framed parallax band → alternating mount rows → price table → delivery 58/42 → journal 3 → bench card → footer | No framed/mitred windows or masonry; our "window" is a blur focus pull, not a frame; no alternating rows; journal uses the reference card anatomy |
| Himuro Gelato | split header → KV hero → intro column → pinned viewer → dark grain process band → price list → people rows → parallax visit band → journal rows → newsletter → wave footer | No pinned viewer or grain band; light, white-dominant palette; grey 5-column sitemap footer instead of wave; ledger table + ruler unique to ours |

---
## 4. Inner pages (10 + journal + legal)
Every inner page: T1 pagehead (H1 uppercase 2.375rem + bracket label + 40×2 rule + 2.34:1 focus-pull photo, `sp-parallax --sp-par:6%`); "related" two-column chevron list near the end; footer as home. No photo repeated on the same page.
| Page (slug) | Bracket label | Key content | Pagehead | Other images | T2 | T3 |
|---|---|---|---|---|---|---|
| About (`about`) | `[ THE COLLEGE ]` | founding 1998 by Henrik Aalto in one hangar; moved to two hangars 2009; principles (we teach on real aircraft; every task is signed and countersigned; small cohorts of 24); 3 paragraphs + facts row (sp-count) + all 7 people list | img-18 | img-08 | — | ✔ open-day card (thumb img-16) |
| Programme (`programme`) | `[ PROGRAMME ]` | the 18 months: full month ruler (as home block 5) + one ruled section per phase (what you do, hours, which modules), the daily routine (§9), placement rules | img-11 | tiles img-03…img-10 | ✔ 8-tile plane (module index) | ✔ next cohort card (thumb img-02) |
| Modules (`modules`) | `[ CERTIFICATION ]` | 8 modules with anchors #m1…#m8: hours, months, content (4 bullets each), assessment; full ledger table; note on what the authority issues (licence exams sat with the national authority, not the college) | img-14 | img-10 | — | — |
| Facilities (`facilities`) | `[ FACILITIES ]` | Hangar 1 (airframe & structures), Hangar 2 (turboprop & jet airframes), engine shop, avionics lab, composites room, tool store & library | img-17 | tiles img-03, img-04, img-05, img-09, img-11, img-06 | ✔ 6-tile plane | — |
| Instructors (`instructors`) | `[ INSTRUCTORS ]` | all 7 people: 2 large cards (img-12, img-13), 5 text cards (name, role, years, 40 words) | img-08 | img-12, img-13 | — | — |
| Admissions (`admissions`) | `[ ADMISSIONS ]` | who can apply (18+, maths & physics at school-leaving level or the 6-week bridging course), entry routes, assessment day (4 steps inline: aptitude test · hangar visit · interview · offer within 10 working days), deadlines | img-02 | tiles img-16, img-14, img-06, img-07 | ✔ 2×2 plane (School leavers · Career changers · Working mechanics · Returning to aviation) | ✔ deadline card "Apply by 15 January 2027" (thumb img-18) |
| Fees & intakes (`fees`) | `[ FEES ]` | full fee table (same 6 items), instalments, what's included (toolkit & PPE kept), what isn't (authority exam fees, accommodation), refunds before start | img-04 | — | — | ✔ two intake cards (text-only) |
| Graduates (`graduates`) | `[ GRADUATES ]` | 3 graduate stories (≈150 words each, §9), where graduates work (line stations, base maintenance, engine shops, avionics benches) | img-16 | tiles img-15, img-05, img-06, img-11 | ✔ 2×2 plane (pills: Kwame, Lena, Sofia, "Cohort placements") | — |
| Contact (`contact`) | `[ CONTACT ]` | address, office hours, open days, phone, email, how to reach Carrow Field; **contact form slot** §12 | img-18 | — | — | ✔ open-day card "Saturday 5 December 2026, 10:00–14:00" (thumb img-16) |
| Newsletter (`newsletter`) | `[ HANGAR NOTES ]` | standalone subscribe page: what the monthly note contains, frequency, unsubscribe; **newsletter slot** §12 | img-15 | — | — | — |
| Journal (`journal`, role posts) | `[ JOURNAL ]` | post list (page content empty) | — | — | — | ✔ latest-post card (template part) |
| Privacy (`privacy`) | — | plain legal text, no reveal | — | — | — | — |
T1 ✔ on all 10 inner pages · T2 ✔ on 4 (Programme, Facilities, Admissions, Graduates) · T3 ✔ on 5 (About, Programme, Admissions, Fees, Contact; + Journal).
Posts (3, categories **Hangar notes** / **Admissions**, tags e.g. `powerplant`, `inspection`, `first-week`): "What a duplicate inspection teaches" (img-17), "Reading a borescope image" (img-15), "A first week in Hangar 2" (img-16).

---
## 5. Colour (reference hexes kept; `tok(a)`)
| Token (theme.json slug) | Hex | Role | Share (page) | Source |
|---|---|---|---|---|
| `base` | #FFFFFF | ground | ≈ 65% | tok(a) ground #FFFFFF |
| `ink` | #14181D | text, headings, back-to-top square | text | tok(a) #000000 → +5% L toward iron (only change) |
| `primary` | #3A4654 | iron: submit buttons, placement bar, focus-free UI | ≈ 4% | row hex #3A4654 (iron blue) |
| `slate` | #3C5D69 | cohort strip, module-field band, ruler bars | ≈ 10% | tok(a) slate band |
| `slate-2` | #476672 | bracket labels, meta, hangar-practice bar | small | tok(a) slate band end |
| `wash` | #E6ECEE | wash under bands, newsletter band | ≈ 7% | tok(a) pale wash |
| `grey` | #E5E5E5 | footer, hairlines | ≈ 12% (footer) | tok(a) quiet grey |
| `accent` | #E31F26 | chevrons, active nav, human-factors thread line, focus ring | < 0.5% | tok(a) accent red (kept exactly) |
- No cream/beige anywhere. Red is never a fill larger than a 4px line.
- First-screen saturated share (S>0.5, V>0.3): target ≤ 8% (reference 2.6–6.5%), hard cap **15%** (`scripts/check-first-screen.py`), never above 30% (row note). Slate #3C5D69 has S≈0.43 → not counted; risk is only the photo, so STYLE forbids coloured liveries.
- Red text is not used for body links (contrast); link text stays #14181D, chevron carries the red.

## 6. Typography (serif direction)
- Latin: **Fraunces** (headings: 500, 600; static woff2 subsets latin + latin-ext) and **Source Sans 3** (body/UI: 400, 600). CJK headings: **Noto Serif TC** (zh-TW, 600, subset) and **Noto Serif JP** (ja, 600, subset), bundled. All loaded via **theme.json `fontFamilies` + `fontFace`** (editor iframe = front end), every file listed in theme-meta.json `fonts[].files` with OFL licence file; family names in readme.txt. Because style.css uses `:lang(` rules, copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it.
- Stacks:
  - heading (en/fr/de): `"Fraunces", "Noto Serif TC", "Noto Serif JP", Georgia, "Times New Roman", serif`
  - body (en/fr/de): `"Source Sans 3", system-ui, -apple-system, "Segoe UI", Arial, sans-serif`
  - `:root:lang(zh-TW)` heading: `"Fraunces", "Noto Serif TC", "Songti TC", "PMingLiU", serif`; body: `"Source Sans 3", "PingFang TC", "Microsoft JhengHei", sans-serif` (no bundled zh/ja family in body)
  - `:root:lang(ja)` heading: `"Fraunces", "Noto Serif JP", "Hiragino Mincho ProN", "Yu Mincho", serif`; body: `"Source Sans 3", "Hiragino Sans", "Yu Gothic", "Meiryo", sans-serif`
  - CJK: display sizes ×0.75, body line-height 1.85, no uppercase transform effect; fr/de `hyphens: auto` on body and headings.
- Scale (root 16px; reference values from `tok(b)`):
| Role | Size | Weight / lh / tracking | Source |
|---|---|---|---|
| Hero H1 (largest) | `clamp(2.75rem, 6.4vw, 5.5rem)` (≈5.1rem at 1280; theme.json max preset `display` = 5.5rem ≥ 4.25 ✔) | Fraunces 500, lh 1.02, −0.01em, sentence case | tok(b) display word ~88px |
| Inner H1 | 2.375rem (38px) | Fraunces 600, lh 1.1, uppercase, .02em; padding-bottom 18px before label | tok(b) h1 38/41.8 |
| H2 section | 2.025rem (32.4px) | Fraunces 600, lh 1.1, uppercase, .02em | tok(b) h2 32.4/35.64 |
| H3 | 1.375rem | Fraunces 500, lh 1.25 | — |
| Bracket label | 1rem | Source Sans 3 400, #476672, .06em, `[ … ]` written in block text | tok(b) sub-label 16px |
| Rule | 40×2px | #14181D (white over photos), 20px below label | tok(f) |
| Body | 1.08rem (17.28px) | Source Sans 3 400, lh 1.5 (1.6 in long article text) | tok(b) body 17.28/25.92 |
| Nav / labels | 0.875rem (14px) | Source Sans 3 600 uppercase .04em | tok(b) nav 14px |
| Meta / pills | 0.8125rem | Source Sans 3 600 | — |
| Facts numbers | 2.75rem | Fraunces 500, tabular-nums | — |

## 7. Responsive
- **390px first screen:** header 64px (wordmark left, "Menu" button right — the only menu, opens the same nav). Hero photo 390×360 (flanks 8% blurred each), `sp-parallax --sp-par:5%`. **H1 group is in normal flow below the photo on white** (#14181D text, 2.75rem, label, #14181D rule) — no absolutely positioned text over the photo, no vertical text, no rotated labels over the photo; KV pills appear as a flat row of pills below the H1. Cohort strip becomes a full-width slate band in flow (no overlap), card stacks (thumb 16:9 top, text below). Nothing overlaps; no horizontal overflow.
- 782–1023px: hero H1 over photo as desktop but pills move into flow under H1; strip to 80% width.
- **Tables:** ≥782px every table (fees, ledger) is `width:100%` of the container, `table-layout:auto`; the **price/hours column `white-space:nowrap; text-align:right; min-width:10ch; font-variant-numeric: tabular-nums`**, never clipped or overflowing (check at 800 and 1280). <782px: **every table stacks** — each row becomes a block (first cell bold, other cells as `label: value` lines, price right-aligned on its own line), `thead` visually hidden.
- Month ruler <782px: each row = label line + an 18-track mini bar (tracks ~18px), month numbers shown only at 1, 6, 12, 18; stays horizontal.
- T2 plane <782px: below the text, tile 104px, gap 20px, same rotation, section `overflow:clip`; plane height ≈ 420px.
- Instructor cards, journal cards, footer columns stack to 1 column (footer 2 columns at 600–1023px). Back-to-top square stays 48px.
- `html, body { overflow-x: clip }` (no horizontal scroll at 390 / 1280).

## 8. Images (18; one STYLE for all)
STYLE (identical in every call): `high-key bright documentary colour photograph, natural hangar daylight through high windows, shallow depth of field, real aircraft maintenance work, diverse adults in plain navy or grey coveralls, aircraft painted plain white and light grey with no livery, muted cool colour grade, clean and quiet, international modern setting, no text, no numbers, no logos, no brand marks, no signage lettering, no cut-outs`
| # | Subject / composition | Use (page · block) | Home |
|---|---|---|---|
| img-01 | Instructor (woman 50s, navy coveralls) steadying an open engine cowling on a turboprop wing; student (man 20s, grey coveralls, safety glasses) checking engine mounts with a torch; aircraft nose and work stand behind; wide 21:9, both people in the centre 60%, calm hangar floor left/right | Home hero (KV) | ★ |
| img-02 | New cohort (6 diverse students) at a morning briefing round a tool shadow board with an instructor; 16:9 | Home cohort card thumb; Admissions pagehead; Programme T3 thumb | ★ |
| img-03 | Turbofan engine open on a stand, hands with a torque wrench on a fitting; 1:1 | Home tile "Powerplant"; Programme, Facilities tiles | ★ |
| img-04 | Student riveting an aluminium panel on a jig, instructor watching; 1:1 | Home tile "Airframe"; Fees pagehead; Programme, Facilities tiles | ★ |
| img-05 | Technician with a multimeter at an open avionics bay; 1:1 | Home tile "Avionics"; Programme, Facilities, Graduates tiles | ★ |
| img-06 | Main landing gear leg on jacks, student inspecting the strut; 1:1 | Home tile "Landing gear"; Programme, Facilities, Admissions, Graduates tiles | ★ |
| img-07 | Eddy-current probe moved along a wing skin, screen trace out of focus; 1:1 | Home tile "Inspection (NDT)"; Programme, Admissions tiles | ★ |
| img-08 | Two students doing a duplicate inspection of a control cable run, one holding a blank checklist card; 1:1 (also crops 2.34:1) | Home tile "Human factors"; About body; Instructors pagehead | ★ |
| img-09 | Vacuum-bagging a composite panel on a bench; 1:1 | Home tile "Composites"; Programme, Facilities tiles | ★ |
| img-10 | Open maintenance logbook and manual on a bench beside a torque wrench, blank pages; 1:1 | Home tile "Task records"; Modules body | ★ |
| img-11 | Wide hangar at morning, doors open to the apron, white aircraft nose, small figures at work stands; 21:9 | Home parallax band; Programme pagehead; Facilities, Graduates tiles | ★ |
| img-12 | Portrait: Daniel Okafor (man 50s) at an engine stand, arms relaxed; 4:5 | Home instructors; Instructors body | ★ |
| img-13 | Portrait: Mei Lin Hartmann (woman 40s) at the avionics bench; 4:5 | Home instructors; Instructors body | ★ |
| img-14 | Student signing a blank task card on a clipboard while an instructor countersigns, aircraft behind; 4:3 | Home ledger; Modules pagehead; Admissions tile | ★ |
| img-15 | Borescope inspection: hands guiding the probe into an engine port, small screen glow; 16:9 | Post featured (home journal); Newsletter pagehead; Graduates tile | ★ |
| img-16 | Students walking out across the apron to a parked white aircraft, soft morning light; 16:9 | Post featured (home journal); Graduates pagehead; Admissions tile; About/Contact T3 thumb | ★ |
| img-17 | Workshop bench with a tool shadow board and a student counting tools at day's end; 16:9 | Post featured (home journal); Facilities pagehead | ★ |
| img-18 | College exterior: two light-grey hangar buildings with an office wing, apron, windsock, clear sky; 21:9 | About, Contact pagehead; Admissions T3 thumb | |
Per-page uniqueness checked in §4 (e.g. Programme: head img-11 + tiles 03–10 + thumb img-02; Facilities: head img-17 + tiles 03, 04, 05, 09, 11, 06). webp, ≤300 KB, ≤2000px. Read every output; regenerate on any text, logo, livery, warped hands or faces, or off-style result.

## 9. Fixed facts (brand.md uses exactly these; identical in all five languages)
- **Tsubasa College**, aircraft maintenance training college, founded **1998** by **Henrik Aalto** (retired 2019). Location: **Hangar Road 4, Carrow Field Aerodrome, Westmere** (fictional, neutral). Phone **+00 41 7720 1998**, email **admissions@tsubasa-college.example**.
- Hours: student office **Mon–Fri 08:30–17:00**; hangar teaching day **Mon–Fri 07:30–16:00**; open days **first Saturday of each month 10:00–14:00** (next: **Saturday 5 December 2026**).
- Programme: **licence-track programme, 18 months, 2,400 hours, 8 modules, 24 places per cohort**, two intakes a year: **Monday 1 March 2027** (apply by **15 January 2027**) and **Monday 6 September 2027** (apply by **15 July 2027**). The licence itself is issued by the national aviation authority after its own examinations; the college does not issue licences or guarantee results.
- Phases (ruler): Foundation months 1–6 (900 h) · Systems 7–12 (1,040 h) · Hangar practice & type familiarisation 13–15 (200 h) · Line placement & final assessment 16–18 (140 college hours) · Human factors & regulation thread 1–18 (120 h). Total 2,400 h.
- Modules (ledger): M1 Mathematics & physics, months 1–2, 220 h, written exam · M2 Electrical & electronic fundamentals, 2–4, 260 h, written exam + bench test · M3 Materials, hardware & maintenance practices, 3–6, 420 h, practical task book · M4 Airframe structures & systems, 7–9, 380 h, task book + oral · M5 Powerplant (turbine engines), 9–11, 360 h, task book + written · M6 Avionics & instruments, 10–12, 300 h, bench test + written · M7 Human factors & regulation, 1–18, 120 h, case reviews · M8 Hangar practice & type familiarisation, 13–18, 340 h, supervised sign-offs + final assessment. (Sum 2,400 h.)
- Fees (6, euros): Application & assessment day **€60** · Licence-track programme (18 months) **€21,600** (or 6 instalments of **€3,600**) · Foundation term only (months 1–6) **€7,800** · Single systems module (for working mechanics) **€1,450** · Type-familiarisation course (4 weeks) **€3,200** · Toolkit & PPE (issued, yours to keep) **€680**.
- People (7): **Ingrid Solberg** (principal) · **Daniel Okafor** (head of powerplant) · **Mei Lin Hartmann** (head of avionics) · **Tomás Rivera** (airframe & structures) · **Aisha Rahman** (inspection & composites) · **Pieter de Vries** (human factors & regulation) · **Clara Benoit** (admissions & student office).
- Graduate stories (3; qualitative, no employment rates): **Sofia Marchetti** (car mechanic → night line maintenance at a regional line station), **Kwame Asante** (engine shop, borescope work), **Lena Fischer** (electrician → avionics bench). No real employers named.
- Facts row: **2,400 hours · 18 months · 8 modules · 24 places**.
- **Daily routine** (brand.md "a day"): 07:30 tool control & toolbox check · 07:45 shift briefing · 08:00–12:00 task cards in the hangar · 12:45–15:00 theory · 15:00–16:00 duplicate inspection, sign-off and tool count, hangar closes 16:00.

## 10. Scroll effects (sp-scroll; max 3 per page; hero never revealed)
| Effect (class) | Where | Reference source | Trigger / time / easing |
|---|---|---|---|
| `sp-parallax` | Home hero layer (img-01) `--sp-par: 8%`, mobile 5%; home hangar band (img-11) `--sp-par: 10%`, mobile 6%; inner pageheads `--sp-par: 6%`, mobile 4% | mhi.com simpleParallax on hero/article photos (scale ~1.2, linear, scroll-linked) | CSS scroll-driven (`animation-timeline: view()`), linear; IO + translate3d fallback from sp-scroll.js; layer scale 1.18 |
| `sp-reveal sp-reveal--up` (+ parent `sp-stagger`) | Home intro paragraphs, module-field tiles (stagger), ruler rows, ledger intro row, instructor cards (stagger); inner body sections | mhi.com jquery.waypoints in-view triggers (~80% viewport), ~0.6s, ease | IO enter; `--sp-dur: .6s; --sp-ease: ease; --sp-dist: 24px`; stagger 0.12s steps |
| `sp-count` | Facts row (2,400 · 18 · 8 · 24) on home and About | mhi waypoint-triggered counters feel | 1.2s easeOutCubic, on enter |
Not on: hero (no reveal, no count), cohort strip, tables (fees, ledger), forms and their parents, footer, legal pages. Slick carousel from the reference is **not** used (tiles are static on the plane).

### Parallax (required)
- **Block:** home block 2 hero. **Background:** img-01 (both the blurred backdrop and the sharp window are inside the single `.sp-parallax__layer`, so the focus-pull moves as one). **Foreground (static, outside the layer):** scrim, H1 group, KV pills, cohort strip. `--sp-par: 8%` desktop, `5%` mobile.
- **Second:** home block 7 hangar band, background img-11 in `.sp-parallax__layer`, foreground white routine card outside the layer; `--sp-par: 10%` desktop, `6%` mobile.
- Reference motion: mhi simpleParallax photo drift. Container `overflow: clip`; reduced-motion / `?sp-static` / editor → no movement. `check-parallax.mjs` must show Δ ≥ 6px desktop and mobile and ≤1px under reduced motion.

## 11. Decoration (exact)
- Radius 0 on photos, cards, buttons, inputs; pills 999px only (`tok(d)`). Hairlines 1px #E5E5E5. Shadows only: tiles `3px 3px 0 rgba(20,24,29,.18)`, pills `0 2px 6px rgba(0,0,0,.18)`.
- Bracket labels are real text `[ PROGRAMME ]` in blocks (no CSS `content`). Chevrons `›` are text in links; CSS colours them red via a span class.
- Back-to-top: 48×48 #14181D square, white 16px up-chevron (SVG), bottom-right of footer container (`tok(f)`).
- Buttons: iron #3A4654 bg, white Source Sans 3 600 0.875rem uppercase, 48px tall, padding 0 28px, hover #2F3945 0.2s.

## 12. Forms (contract v1)
- Copy `pipeline/assets/forms/shippress-forms.php` → `inc/shippress-forms.php`, `shippress-forms.css` and `shippress-forms-editor.js` → `assets/`, unchanged; `require_once` in functions.php.
- **Contact page** (`contact`): after the address/hours/open-day panel, as its own block: `shippress_form_slot( kind contact, fallback = ob_start() literal mailto button )`. Fallback button: `wp-element-button` "Email admissions" → `mailto:admissions@tsubasa-college.example?subject=<forms contact subject>`; never a link to /contact/. Plugin order CF7 → WPForms. Recommended plugin fields (documented in readme for site owners): name (required), email (required), phone, interest (select: Licence-track programme / Single module / Type-familiarisation course / Open day), preferred intake (select: March 2027 / September 2027), message (textarea), consent checkbox.
- **No booking/enquiry/appointment/reservation page** exists (Admissions links to Contact), so no other contact slot.
- **Newsletter page** (`newsletter`, standalone "Hangar notes", not an alias of the post list) and **home block 11**: `shippress_form_slot( kind newsletter, email = admissions@tsubasa-college.example, label/submit/notice/subject from forms_* keys )`. MailPoet (explicit id) → MC4WP; CF7/WPForms only by an explicit dedicated newsletter id. No plugin: required email input + submit, native mailto POST carrying the entered address, notice visible. Footer has **no** form (link to Newsletter only), so the home page carries one subscribe form.
- Never in the first screen; never `sp-reveal` on a form or its parent.
- Tokens (light grounds: white, wash #E6ECEE): `--sp-form-accent: var(--wp--preset--color--primary)` (#3A4654) · `--sp-form-on-accent: #FFFFFF` · `--sp-form-radius: 0` · `--sp-form-focus: var(--wp--preset--color--accent)` (#E31F26, 2px outline, offset 2px) · `--sp-form-surface: #FFFFFF` · `--sp-form-text: #14181D` · `--sp-form-border: #14181D` (1px; inputs 56px tall like the reference search box). **Dark grounds** (slate #3C5D69, iron #3A4654 — e.g. if a site owner places the slot in a slate band): `--sp-form-surface: #FFFFFF`, `--sp-form-text: #14181D`, `--sp-form-border: #FFFFFF`, `--sp-form-accent: #FFFFFF`, `--sp-form-on-accent: #3A4654`, `--sp-form-focus: #FFFFFF`; labels and messages inherit white.
- States: focus = 2px ring as above; error = text inherits section colour + 3px left rule #E31F26 (on dark #FFFFFF) and `aria-invalid` border 2px; success = inherit colour + 3px left rule #3C5D69 (on dark #FFFFFF). Checkbox/radio 20px, accent-color = `--sp-form-accent`. Same for CF7, WPForms, MailPoet, MC4WP, Jetpack classes only; no global `input`/`form` selectors.
- Strings (semantic keys in `inc/i18n/en.php`, translated — localised, not literal — in zh-TW, ja, fr, de; extract with `L10N_SEMANTIC=1`): `forms_email` "Email address" · `forms_subscribe` "Subscribe" · `forms_mail_notice` "Opens your email app. Send the request to join Hangar notes; you are not subscribed yet." · `forms_mail_subject` "Hangar notes: subscription request" · `contact_email` "Email admissions" · contact mail subject "Enquiry about the licence-track programme". Check all five locales render label, button, notice and subject.

## 13. Similarity table (target 80%; numbers from reference-tokens.md)
| Dimension | Reference (tok) | Tsubasa College |
|---|---|---|
| Ground / wash / grey | #FFFFFF ~70% / #E6ECEE ~8% / #E5E5E5 footer (a) | #FFFFFF ~65% / #E6ECEE ~7% / #E5E5E5 footer |
| Text | #000000 (a) | #14181D |
| Band | slate #3C5D69 → #476672 ~14% (a) | #3C5D69 / #476672 ~10% |
| Accent | #E31F26 < 0.5% (a) | #E31F26 < 0.5% (chevrons, active nav, thread line, focus) |
| First-screen saturated share | 2.6–6.5% (a) | target ≤ 8%, cap 15% |
| H1 | 38px uppercase, lh 1.1, pb 18px (b) | inner 2.375rem uppercase Fraunces, lh 1.1, pb 18px; hero display 5.5rem max (≈88px display word) |
| H2 / body / nav | 32.4px / 17.28px lh 1.5 / 14px uppercase (b) | 2.025rem / 1.08rem lh 1.5 / 0.875rem uppercase |
| Sub-label + rule | `[ AVIATION ]` 16px slate-grey + 40×2 black (b)(f) | `[ … ]` 1rem #476672 + 40×2 #14181D (white on photo) |
| Container / margins | 1296px, 72px at 1440 (c) | 1296px, clamp(20px, 5vw, 72px) |
| Section / footer padding | ~100px; footer 100px 0 36px, 5 cols at 268px (c) | 100px (mobile 56); footer 100px 0 36px, 5 cols at 268px |
| Header | 120px, logo left, uppercase nav, hairline (c) | 112px two-tier, wordmark left, nav centred (row), hairline 1px #E5E5E5 |
| Photo ratio / focus | 936×400 = 2.34:1, sharp centre 64%, blurred 18% flanks (e) | hero full-bleed 592px with 64% sharp window; inner 2.34:1, 64/18/18 |
| Radius / borders / shadow | 0; pills 999px; 1px #E5E5E5; tiny tile shadow (d) | identical; tile shadow 3px 3px 0 rgba(20,24,29,.18) |
| Isometric field | ~14 tiles on rotated plane, white pills, one dark pill, slate band + wash (e) | 8 tiles, rotateX(52) rotateZ(−34), white pills, one dark pill, slate + wash |
| News card | 512×144, thumb 256×144, red chevron underline (f) | 512×120, thumb 213×120, red chevron underline |
| Bullet links | `• Name ›` two columns, red chevron (f) | identical anatomy |
| Back-to-top | 48×48 black square (f) | 48×48 #14181D square |
| Motion | simpleParallax (scale ~1.2, linear), waypoints ~0.6s ease (g) | sp-parallax 6–10% (scale 1.18), reveal--up .6s ease, stagger .12s |
Own material only: photos generated, copy written for Tsubasa College; no reference images, text, or logo reused.

## 14. Home acceptance checklist
- [ ] KV items 1–5 (§2.3) visible at 1280×800 without scrolling; focus-pull flanks clearly blurred, hard cut at 18%/82%; H1 ≥4.25rem rendered at 1280.
- [ ] Cohort strip starts at viewport x=0, straddles the photo edge, white card with red chevron underline.
- [ ] Module field: 8 tiles on one rotated plane, pills rotate with it, one dark pill, plane crosses wash/slate boundary and bleeds right; also on mobile without horizontal overflow.
- [ ] Month ruler horizontal (18 columns), 4 phase bars + red thread; no vertical timeline anywhere.
- [ ] 17 distinct photos on home (≥8), 0 cut-outs, none duplicated on any page.
- [ ] ≥250 English words (target ≈450), ≥3 narrative paragraphs ≥20 words; all numbers match §9.
- [ ] Fee and ledger tables full width at 800/1280, price/hours column nowrap right-aligned and not clipped; stacked at 390.
- [ ] 390px: no vertical or absolutely positioned labels over text; H1 in flow below photo; no horizontal overflow.
- [ ] First-screen saturated share ≤15% (target ≤8%), no cream/beige.
- [ ] Exactly one top menu; fonts via theme.json fontFace, editor = front end (check-editor-fonts.mjs), zh-TW/ja serif heading subsets.
- [ ] sp-parallax on hero + hangar band passes check-parallax.mjs; reveal only below the hero; no reveal on tables/forms; ≤3 effect types.
- [ ] Newsletter slot on home block 11 (email + submit, notice) not in first screen; contact slot planned for the contact page.
- [ ] auto-gates pass (`… en …/gates/en.json 1 1`), `pattern_source.py` passes.
