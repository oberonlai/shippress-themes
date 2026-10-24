# Seiwa Furniture: design spec (stage 1, binding for implementation)

Slug `seiwa-furniture`, plan row b10-5. Office furniture manufacturer (task and meeting seating, desking systems, acoustic panels and storage, meeting tables) that works for architects and fit-out contractors. Type `business` (WooCommerce compatible, not required). Five languages en, zh-TW, ja, fr, de (Hokuto 1.1.0 way). `quality_gate: 2`.

Reference: **R1 STAGE Lab** https://stagelab.inkdom.jp/ (S5-Style https://s5-style.com/11827/), interior renovation brand. Every number in this spec marked `[tok a–g]` comes from `brand/reference-tokens.md`; screenshots in `brand/ref/`. We borrow structure, techniques, colour relationships, the key-visual concept and the motion. We never copy R1's photos, illustrations, copy or logo; all photos are generated, all line drawings are drawn by us as new SVG.

Row hints we follow: archetype `sticky-media` (home ledger: sticky factory photo beside scrolling rows), page structure `metrics-ledger`, nav `centered`, photo direction `high-key`, first screen `top-bottom-halves` (headline in the top half, photos in the bottom half — which is exactly R1's first screen). Row hint `photo-left-text-right` is overridden by R1's composition (headline top-left, photos bottom/right), because the KV concept must follow the reference.

---

## 0. Fixed facts (every page, every language — no other numbers anywhere)

| Fact | Value |
|---|---|
| Name | Seiwa Furniture (wordmark "Seiwa Furniture", never abbreviated) |
| Founded | **1994** |
| Factory, showroom, office | Werkhuislaan 40, 5652 AX Eindhoven, Netherlands (fictional address; same address in all languages, localised format only) |
| Phone / email | +31 40 000 1994 / studio@seiwa-furniture.example |
| Showroom hours | Mon–Fri **8:30–17:30**; Sat **10:00–14:00** by appointment; closed Sun and public holidays |
| Factory tour | every **Thursday 14:00**, **60 min**, max **8** people, booked by email |
| Standard lead time | **6 weeks** from signed drawings to delivery |
| Warranty (policy, not a claim of results) | **10 years** on steel and timber frames, **5 years** on mechanisms and gas lifts |
| Sample kit | free, posted within **2 working days**, return within **30 days** |
| Currency | **EUR**, list prices excl. VAT, identical figures in every language (no converted prices) |

### Price list 2026 (7 items; home price block, Price list page, Products page cards "from" lines, all languages)
| # | Item | What is included | Price |
|---|---|---|---|
| 1 | Sample kit | 24 fabric swatches, 8 laminate and veneer chips, 4 frame colours, posted and collected | Free |
| 2 | Task chair T2 | synchronous mechanism, adjustable arms and lumbar, fabric from the kit | €640 per chair |
| 3 | Meeting chair M4 | four-leg steel frame, upholstered seat and back, stackable to 4 | €380 per chair |
| 4 | Bench desk system B6 | per seat: 160 × 80 cm top, shared steel frame, cable tray, screen | €890 per seat |
| 5 | Height-adjustable desk H1 | twin motor, 65–130 cm, 160 × 80 cm top, memory handset | €1,180 per desk |
| 6 | Acoustic wall panel A2 | per m²: 40 mm recycled PET core, fabric wrapped, fixings | €165 per m² |
| 7 | Installation | per seat: delivery, assembly, evening or weekend fitting, packaging taken back | €45 per seat |
Footnote (every language): "List prices excl. VAT. Full-size mock-up of one workstation for 2 weeks on site: €450, credited against the order."

### People (7, named everywhere the same; fictional)
| Name | Role | At Seiwa since |
|---|---|---|
| Marieke Vos | founder, managing director | 1994 |
| Tomás Herrera | head of production | 2006 |
| Aisha Bello | specification lead (works with architects) | 2014 |
| Lukas Brandt | upholstery workshop lead | 2009 |
| Priya Raman | design engineer, drawings and mock-ups | 2018 |
| Jonas Eriksen | installation lead | 2012 |
| Chloé Martin | aftercare and spare parts | 2020 |

### Ledger 2025 (6 rows; home ledger, Factory page, all languages)
| Number | What it measures | Year | Note |
|---|---|---|---|
| 1,860 | seats delivered | 2025 | across 41 contracts |
| 41 | contracts completed | 2025 | for 23 architecture practices and fit-out contractors |
| 6 | weeks standard lead time | 2025 | from signed drawings to delivery |
| 40 of 41 | installations handed over on the agreed date | 2025 | one moved by the client |
| 68% | recycled content in steel frames | 2025 | supplier certificates on request |
| 10 | years warranty on frames | since 2019 | policy for all new orders |
Trend (Factory page only): seats delivered 2021 **1,120** · 2022 **1,340** · 2023 **1,510** · 2024 **1,690** · 2025 **1,860**.

### Projects / cases (4; home register, Projects page, all languages; client names generic, no real brands)
| Year | Project | City | Seats | Scope | Photo |
|---|---|---|---|---|---|
| 2025 | Canal-side law office, three floors | Rotterdam | 210 | bench desks B6, task chairs T2, installed over two weekends | `case-night-install.webp` |
| 2025 | Public library reading floor | Ghent | 96 | reading tables, M4 chairs, 140 m² acoustic panels A2 | `svc-acoustic.webp` |
| 2024 | Software studio | Düsseldorf | 140 | H1 height-adjustable desks, T2 chairs | `svc-desking.webp` |
| 2024 | Architecture practice, own studio | Lyon | 38 | 4.8 m oak meeting table, T2 chairs, storage | `table-sanding.webp` |

### How a specification is installed (5 stages; Specification page ledger rows, home intro mentions "6 weeks")
| Week | Stage | Who | Note |
|---|---|---|---|
| 0 | Brief and drawings | Aisha Bello + your architect | seat count, plan, finishes; we return a priced schedule in 5 working days |
| 1–2 | Sample kit and mock-up | Priya Raman | kit by post; optional on-site mock-up €450 (credited) |
| 2–8 | Production | Tomás Herrera, Lukas Brandt | 6 weeks from signed drawings |
| 8 | Delivery and installation | Jonas Eriksen | evenings or weekends; packaging taken back |
| +12 | Aftercare visit | Chloé Martin | one visit three months after handover; spare parts for 10 years |
Shown as hairline ledger rows (§5, Specification page), never as a step grid or a vertical timeline.

---

## 1. Signature techniques (three, all borrowed from R1, all obvious at a glance)

### T1. Staggered photo pair over flat pale panels — R1 first screen (https://stagelab.inkdom.jp/, `ref/stage-first.png`)
- **R1**: headline top-left on white; a wide 782×448 landscape photo at x 207 / y 481 (54 % of 1440) crossing the fold; a tall 400×692 portrait from x 1040 to the right edge, y 136, **top-left corner cut as a large quarter-ellipse**; flat pale sage panels behind (slanted-top trapezoid 150×460 off the left edge at y 440; rounded-top pill ≈ 80×560 behind the portrait) plus a semi-transparent darker sage shape overlapping the portrait's left edge; a pale mist rectangle under the right; small line drawings sitting on photo corners `[tok e, f]`.
- **Seiwa home**: the first screen (block 1). Geometry in §3 "First screen". Photos `kv-chair-line.webp` (wide) and `kv-swatch-hand.webp` (portrait).
- **Shape / proportion / position / contrast (1440 wide)**: wide photo left 14.4vw, width 54vw, ratio 1.75:1, radius 0; portrait right 0 (bleeds), width 27.8vw, ratio 0.58:1, `border-top-left-radius: 65% 38%`, other corners 0; panels flat `#DCE5EA`, no gradient, no shadow; the wide photo's bottom edge must sit **below** y 900 (cut by the fold).
- **Must not be diluted**: the portrait must bleed off the right edge with the large elliptical corner (not a small radius, not inside the container); the wide photo must straddle the fold; the panels must be visible as flat shapes partly off-canvas (not a faint tint < `#E6ECEF`); radius 0 on everything else.
- **Inner pages**: every inner page head uses a smaller T1 (headline top-left, landscape offset right-of-centre cut by the bottom of the head, portrait with the elliptical corner bleeding right, trapezoid panel left). Geometry §5.

### T2. Outlined white card, bleeding off the right edge, photo flush in the right half — R1 service block (`ref/scroll-stagelab-service-after.png`)
- **R1**: on the mist band `#F4F8F6`, cards 1252px wide starting at x 188 and running **to the viewport's right edge**; white fill; **1px `#222` border on top and left only**; padding 40px; min-height 404px; text in the left half: kicker with a 4×20px sage bar, 40px bold title, two short lines, a dashed-underline link with a small round ink arrow; a photo filling the right half flush to the card edges; cards stacked with 40px gap; a black line drawing with one flat sage spot fill sitting on the card's top edge above the title area; hover: border → `#90B4A6`, .6s `cubic-bezier(.23,1,.32,1)` `[tok c, d, f, g]`.
- **Seiwa home**: block 3 "Products" (3 cards), block 6 featured project card, block 9 contact card.
- **Numbers**: card width `calc(100vw - 13.06vw)` (= 86.94vw ≈ 1252px) aligned to the right edge (margin-left 13.06vw, margin-right 0); padding 40px (2.78vw); min-height 28vw (≈ 404px); text column 50 %, photo column 50 % `object-fit: cover`, no padding around it; border `1px solid #222222` top + left, right and bottom none; kicker bar 4×20px `#5E727C`, 12px gap; title Source Serif 4 2.5rem/1.6 600; body 0.9375rem/2.0; link 0.875rem 500 with `border-bottom: 1px dashed #222` and a 14px ink circle with a white → arrow; line drawing 120–150px tall, `top: -40px`, at 58 % of the text column.
- **Must not be diluted**: the card must touch the right viewport edge (not centred in the container); the border is ink `#222` (not grey), top + left only; the photo is flush (no inner margin, no radius); the line drawing must break the card's top edge.
- **Inner pages**: Products (4 cards), Specification (2), Projects (4 case cards), Price list (1 contact card), Contact (1).

### T3. Scattered photos with shaped masks around a centred text block, faint line plan bleeding off the left — R1 about block (`ref/scroll-stagelab-parallax-after.png`)
- **R1**: three photos of different sizes (240×380, 264×316, 284×398, 17–20 % width) at different heights around a centred block of short lines; one photo has a **quarter-circle top-left mask**, one a **hexagonal "roof" cut**; a 1px floor-plan line drawing 830×376 in `#C5D0CB` bleeds off the left behind the text; tiny line figures on photo corners; centred dashed link `[tok e, f]`.
- **Seiwa home**: block 2 "About". Photos `intro-frame-bolt.webp`, `intro-foam-stretch.webp`, `intro-plan-review.webp`. Line plan = our own SVG of an office floor plan (bench desks and chairs in plan view).
- **Numbers (1440)**: section padding 160px top/bottom; centred text column 560px; photo A 264×316 at left 10vw, top 250px, `border-top-left-radius: 100% 84%` (quarter-ellipse), photo B 284×398 at right 6.2vw, top 0, `clip-path: polygon(0 8%, 62% 0, 100% 8%, 100% 92%, 62% 100%, 0 92%)` on the `img` (not on the observed wrapper), photo C 240×380 at left 22vw, top 640px, no mask; plan SVG 830×376, stroke 1px `#C4CED4`, left −120px, top 420px, z-index below text.
- **Must not be diluted**: three different sizes at three different heights (never a row); both masks present; the line plan must be visible (stroke ≥ `#C4CED4`, not lighter).
- **Inner pages**: About, Factory, Showroom, Team.

### Continuation to inner pages (each page uses at least two of T1–T3; four or more pages carry each of T2 and T3)
| Page | T1 head | T2 outlined card | T3 scatter |
|---|---|---|---|
| About | yes (P17 + P15) | — | yes (P3, P4, P5 + plan) |
| Products | yes (P1 + P2) | 4 cards (P6, P7, P8, P17) | — |
| Specification | yes (P14 + P5) | 2 cards (P11, P16) | — |
| Projects | yes (P16 + P9) | 4 case cards (P13, P8, P7, P17) | — |
| Factory | yes (P1 + P4) | — | yes (P3, P12, P16 + chair elevation); ledger sticky P15 |
| Price list | yes (P6 + P3) | 1 contact card (P14) | — |
| Showroom & visits | yes (P10 + P2) | 1 tour card (P1) | yes (P11, P12, P5 + plan) |
| Team | yes (P14 + P15) | — | yes (P3, P4, P9 + chair elevation) |
| Contact | yes (P7 + P5) | 1 sample-kit card (P14) | — |
| Notes (index, single) | yes (index: P12 + P2; single: featured image as the wide photo, no portrait) | — | — |

---

## 2. Key visual concept

### (1) Reference first screen — concept, story, signature motion (R1, `ref/stage-first.png`, `ref/scroll-stagelab-kv-before.png`)
STAGE Lab opens on white with a bold two-part headline top-left ("see it, touch it, feel it — the home you want") and a one-line brand sub-line. Below and to the right: a **wide photo of a smiling worker rolling white paint onto a wall while a colleague's arm reaches over her** (people mid-task, hands and tools), sitting low and right of centre so the fold cuts it; on the right edge a **tall portrait of their showroom wall of switch and socket samples with a height scale**, its top-left corner swept into a big quarter-ellipse; **flat pale sage panels** (a slanted-top trapezoid off the left edge, a rounded pill behind the portrait, a darker translucent sage shape over the portrait's left edge, a pale mist block lower right) and **small black line drawings** (a little shelf of books on the wide photo's top-right corner, a clock on the portrait, a person carrying a light bulb walking off the portrait's lower-left corner). **Story**: a hands-on lab where makers and customers work side by side — you see the work being done and you touch the real samples before you decide. **Signature motion**: on load the header and headline appear first (screenshot at 0.7 s shows only them), then the photos, then the line drawings fade in (1–3 s, power2.out); on scroll the photos drift inside their frames (GSAP scrub 1, Δ ≈ 60px) under Lenis smooth scroll.

### (2) Our transformation (office furniture manufacturer; same composition, same motion idea, same image type = photo)
Same composition, our industry. Top half on white: the serif headline **"See it made, sit in it, / then specify it."** with the sub-line "Chairs, desks and acoustic panels built to specification for architects and fit-out contractors — Eindhoven, since 1994." Bottom half: the **wide high-key photograph of an assembler fitting a pale blue-grey fabric back panel onto an office chair on the production line** (two hands pressing the panel into the frame; a colleague's forearm passing a part in from the edge of frame, like R1's reaching arm), low and right of centre, cut by the fold. On the right edge: the **tall portrait of a specifier's hand laying a fabric swatch on the arm of a finished task chair in the showroom**, with a row of swatch cards on a pale wall behind (our sample wall = R1's switch wall), its top-left corner swept into the same quarter-ellipse. Behind them the flat pale slate panels; on the wide photo's top-right corner a small line drawing of a **stack of swatch cards and a tape measure**; walking off the portrait's lower-left corner a line drawing of a **task chair in side elevation** (ink line, one flat blue-grey spot fill on the seat). Story: *you can see how it is made and handle the real fabric before you specify it*. Motion: headline first, photos next, drawings last (CSS load fade, not sp-reveal); on scroll both photos drift inside their frames at two different speeds (`sp-parallax`).

### (3) KV checklist (all six visible in the 1440×900 first screen; at 390×844 rows 1, 2, 6 visible, 3–5 below the fold are fine)
| # | 參考站元素 | 我們的對應 | 位置 | 動態 | 用哪張圖 |
|---|---|---|---|---|---|
| 1 | Bold headline + small bold sub-line, top-left on white | "See it made, sit in it, / then specify it." Source Serif 4 600 3rem/1.25 + sub-line Source Sans 3 600 0.875rem/2.0 | top half, left 80px, headline top y ≈ 274 | CSS load fade 0→1, .6s, `cubic-bezier(.33,1,.68,1)` (power2.out), delay 0 | none (text) |
| 2 | Wide 782×448 photo of a worker mid-task (paint roller, colleague's arm), straddling the fold, right of centre | Assembler fitting a blue-grey fabric back panel onto an office chair on the line, colleague's forearm passing a part in | left 14.4vw, top 481px, width 54vw, ratio 1.75:1, bottom ≈ 929px (cut by the fold) | `sp-parallax` `--sp-par: 8%` (mobile 5%) + load fade .8s delay .2s | `kv-chair-line.webp` |
| 3 | Tall 400×692 showroom portrait (switch sample wall), bleeding right, quarter-ellipse top-left corner | Specifier's hand laying a swatch on a task-chair arm, swatch cards on the wall behind | right 0, top 136px, width 27.8vw, ratio 0.58:1, `border-top-left-radius: 65% 38%` | `sp-parallax` `--sp-par: 12%` (mobile 7%) + load fade .8s delay .35s | `kv-swatch-hand.webp` |
| 4 | Flat pale sage panels: slanted trapezoid off the left, pill behind the portrait, translucent darker shape over the portrait's edge, mist block lower right | Flat `#DCE5EA` trapezoid 150×460 (left 0, top 440); pill 104×560 radius 52px 52px 0 0 behind the portrait (left 71vw, top 280); `rgba(94,114,124,.35)` pill 80×540 over the portrait's left edge (left 72.2vw, top 300); `#F3F6F8` block 284×250 (left 67.2vw, top 658) | behind the photos, partly off-canvas | none (static) | none (CSS shapes) |
| 5 | Small black line drawings on photo corners (book shelf, clock, person carrying a bulb) | Our SVG `line-swatch-tape.svg` 76×44 on the wide photo's top-right corner; `line-chair-elevation.svg` 140×220 overlapping the portrait's lower-left corner (ink 1.5px, `#8FA9B6` spot fill on the seat) | top-right of photo 2 (left 64.2vw, top 552); bottom-left of photo 3 (left 72.8vw, top 690) | load fade .6s delay .9s | `line-swatch-tape.svg`, `line-chair-elevation.svg` (decorations, §8) |
| 6 | Header: logo left, nav, black pill "contact" right (h 40, radius 20) | "Seiwa Furniture" wordmark left, **centred** nav (row: centered), ink `#222222` pill "Request a sample kit" right, h 40, radius 20 | header 128px, top of the first screen | pill hover: clip-path wipe of a `#5E727C` layer 1s `cubic-bezier(.5,0,0,1)` (R1 CTA wipe) | none |
All KV images are in §8 marked HOME. Do not replace the scene with a generic office, a product cut-out or a full-bleed photo.

---

## 3. Home page

### Header (all pages)
White `#FFFFFF`, height 128px desktop / 64px mobile, side padding 40px `[tok c]`, not sticky. Left: wordmark "Seiwa Furniture" Source Serif 4 600 1.375rem ink, under it "Office furniture, made to specification" Source Sans 3 500 0.6875rem ls .04em. Centre: one menu (Products · Specification · Projects · Factory · Price list · Showroom), Source Sans 3 400 1rem `[tok b nav 16/400]`, gap 32px, active item 1px `#5E727C` underline offset 8px. Right: ink pill "Request a sample kit" (h 40, padding 0 24px, radius 20, Source Sans 3 600 0.875rem white). Under 960px: wordmark + pill hidden + menu button (two 1px lines 24px) opening the core overlay menu. One top menu only; it has a "More" submenu (About, Team, Notes, Contact). The footer repeats these as plain text links in a footer column (not a second navigation bar).

### First screen (1440×900) — T1
- Header 0–128. Headline block left 80px, headline top 274px, sub-line at ≈ 344px; max width 760px.
- Wide photo `kv-chair-line.webp` left 207px (14.4vw), top 481px, 778×445 (54vw × 1.75:1) → bottom ≈ 926px, cut by the fold.
- Portrait `kv-swatch-hand.webp` left 1040px → right edge, top 136px, 400×692, elliptical top-left corner.
- Panels and drawings as in KV rows 4–5. Nothing else: no button in the hero, no table/form/search, no giant centred text, no vertical text.
- Implementation: one `alignfull` Group `sw-kv` with `position: relative; min-height: 940px`; headline/sub-line are normal flow; the two figures and the panels are absolutely positioned (desktop only, ≥ 960px). Each figure is a Group `sp-parallax sw-kv__wide` / `sp-parallax sw-kv__tall` containing one core/image (`figure>img`), wrapper `overflow: clip`.
- Saturation: hard cap **15 %** (row note, common.md; the rules' "≤ smaller of 30 % and reference" would give R1's 4.7 %, so we aim there) → **design target ≤ 5 %**: photos low-chroma (pale grey and blue-grey fabric, pale oak, white walls); the only UI colour is the ink pill. Write the measured value and R1's 4.7 % in gate.md and reference.md.

### Block order
| # | Pattern | Purpose | Ground | Layout and photos | Copy (en) |
|---|---|---|---|---|---|
| 1 | `front-kv` | KV, promise | white | T1 as above; photos **P1** `kv-chair-line`, **P2** `kv-swatch-hand` | headline 9 words + sub-line 20 words |
| 2 | `front-about` | who we are, factory you can visit | white | **T3**: centred 560px text; scatter **P3** `intro-frame-bolt` (A, quarter-ellipse), **P4** `intro-foam-stretch` (B, hexagon cut), **P5** `intro-plan-review` (C); `line-office-plan.svg` bleeding left; `line-castor.svg` (60×60) on P4's top-left corner | section label "About" + caption "Who we are"; one lead line 1.5rem; 3 short centred paragraphs (≈ 120 words) + dashed link "About the company" |
| 3 | `front-products` | what we make | mist `#F3F6F8` | section label "Products" / "What we make" left at 80px; **T2** × 3 stacked, each bleeding right: (1) Task and meeting seating **P6** `svc-seating`, from €640 / €380; (2) Desking systems **P7** `svc-desking`, from €890 per seat; (3) Acoustic panels and storage **P8** `svc-acoustic`, from €165 per m²; line drawings `line-chair.svg`, `line-desk.svg`, `line-panel.svg` on the top edges | per card: kicker, title, 2 lines (≈ 40 words), link |
| 4 | `front-ledger` | **metrics ledger** (row signature) — sticky-media | white | 12 cols: left cols 1–5 sticky figure **P9** `ledger-factory-floor` 4:5 (`position: sticky; top: 48px`), right cols 7–12: label "Ledger 2025" / "What we delivered"; 60-word paragraph; 6 ledger rows (§0) each `grid-template-columns: 15rem 1fr 6rem`: number Source Serif 4 400 4.5rem/1.0 nowrap `sp-count`, measure 1rem 600 + note 0.875rem `#5C666B`, year 0.875rem right; 1px `#222` top rule per row, last row bottom rule, row padding 32px 0 | 60 words + rows |
| 5 | `front-showroom` | visit the showroom and factory | mist `#F3F6F8` | label "Showroom" / "Come and sit in it" left; centred **P10** `showroom-wide` 3:2 at 44vw inside `sp-parallax` (`--sp-par: 10%`); square tiles **P11** `tile-sample-kit` 120×120 overlapping the photo's top-left corner (−40px, −40px) and **P12** `tile-castor-fit` 96×96 overlapping bottom-right (+40px, +40px) `[tok e showroom]`; centred under it 2 paragraphs + one facts line "Werkhuislaan 40, Eindhoven · Mon–Fri 8:30–17:30 · Factory tour Thursday 14:00" + dashed link "Plan a visit" | 75 words |
| 6 | `front-projects` | contracts delivered (proof) | white | label "Projects" / "Recently delivered"; one **T2** featured card bleeding right: **P13** `case-night-install`, kicker "2025 · Rotterdam · 210 seats", title "A law office that moved in over two weekends", 60 words; under it the **register**: 4 hairline rows Year · Project · City · Seats (the §0 cases), Group rows not a table | 60 words + register |
| 7 | `front-prices` | list prices | mist `#F3F6F8` | label "Price list" / "List prices 2026, excl. VAT"; core/table `sw-price` full container width (1280), 7 rows of §0, 3 columns (Item 28 % · What is included · Price right, nowrap); footnote | table + footnote 25 words |
| 8 | `front-notes` | notes (R1 news list) | white | label "Notes" / "From the workshop"; 3 rows: date 0.875rem · outline category pill (1px `#222`, radius 20, 0.75rem) · title Source Serif 4 1.25rem; hairline `#222` rules; link "All notes" | Query Loop, 3 latest posts |
| 9 | `front-contact` | CTA | mist `#F3F6F8` | **T2** card bleeding right: **P14** `contact-kit-desk`, kicker "Sample kit", title "Hold the fabric before you specify it", 50 words, ink pill "Request a sample kit" + line "+31 40 000 1994 · studio@seiwa-furniture.example"; `line-envelope.svg` on the card's top edge | 50 words |
Footer: white, 1px `#222` top rule, 4 columns: wordmark + one line; address + phone + email; hours + tour; text links (About, Team, Notes, Contact, Privacy). Copyright line 0.75rem.

Home photo positions: **14** (P1–P14, each once). English home ≥ 400 words; narrative paragraphs ≥ 20 words in blocks 2 (×3), 4, 5, 6 (≥ 5 paragraphs). CJK home ≥ 600 characters.

Section label pattern (R1 section titles `[tok b]`): Latin word Source Serif 4 300 2rem/1.2 ink, then 0.75rem Source Sans 3 500 caption under it, left-aligned at the container's left (x 80). In zh-TW/ja the Latin word stays English, the caption is translated. No numbering (R1 has none).

### Comparison with the last four themes
| # | Hodoki Clinic | Enishi Catering | Akari Hotel | Madoka Childcare | **Seiwa Furniture** |
|---|---|---|---|---|---|
| 1 | full-bleed hero + info bar | full-bleed hero + info bar | ink typographic hero | torn-frame hero | **white top half headline; staggered wide + elliptical portrait over flat panels** |
| 2 | about (arch photo + label) | centred statement | full-bleed dusk photo | welcome (2 offset photos) | **3 masked photos scattered round centred text + line floor plan** |
| 3 | problem single column + 16:9 | 5 zig-zag STEP boxes | 5 chapters, giant words, sticky stack | approach photo+text | **outlined cards bleeding off the right edge, photo flush right** |
| 4 | giant phrase band, 2 bleeding photos | 3 vertical-caps course rows | rates list | day blobs + whole-day card | **metrics ledger beside a sticky factory photo, counted numbers** |
| 5 | 3 photo cards | tasting split | 3 text notes | 3 room cards | **centred parallax showroom photo with 2 square tiles on its corners** |
| 6 | rounded parallax proof band | price list | enquire card | garden parallax band | **featured case card + project register rows** |
| 7 | price list | full-bleed photo band | — | fees card | price list (full-width table) |
| 8 | team arch | 6 circle portraits | — | visit band | **notes list rows with outline pills** |
| 9 | visit | stories rows → enquire | — | notes query | **contact as outlined card bleeding right** |
Why not alike: no full-bleed hero, no info bar, no arches, circles, torn edges, blobs or giant words; the first screen is white with photos in the bottom half; the signature shapes (elliptical corner, hexagon cut, ink top+left card border bleeding off the right edge, flat slanted panels, line drawings) appear in none of them; the ledger with a sticky photo is new. The price list is the only shared block type and sits at #7 as a plain full-width table. Different subject: factory line and showroom, not rooms/food/children/clinic.

---

## 4. Colour

R1 relationship kept exactly (white ground ≈ 55 %, mist bands ≈ 35 %, pale panel ≈ 4–7 %, one muted accent < 2 %, near-black ink for text, borders and the pill) `[tok a]`. **Hue change, with reason**: R1's sage family (`#677771`, `#DEE8E3`) is almost the accent of the most recent theme Hodoki Clinic (`#6E847C`, sage), and the common rules say avoid recent main colours; the row's palette is 藍鼠 `#5E727C`. So we rotate the hue from green-grey to blue-grey at the **same lightness** (each within ±5 % L), keeping ground and ink identical.

| Token (theme.json slug) | Hex | R1 source token | ΔL | Use | Share (page / first screen) |
|---|---|---|---|---|---|
| `base` | `#FFFFFF` | ground `#FFFFFF` | 0 | page ground, card fill, header | ≈ 55 % / ≈ 80 % |
| `mist` | `#F3F6F8` | mist band `#F4F8F6` | −0.3 % | alternate full-width sections (blocks 3, 5, 7, 9) | ≈ 35 % / ≈ 2 % |
| `panel` | `#DCE5EA` | pale sage panel `#DEE8E3` | −0.5 % | flat KV and page-head panels only | ≈ 4 % / ≈ 6 % |
| `accent` | `#5E727C` | sage `#677771` | −3 % | kicker bars, active nav underline, translucent KV pill (35 %), chart bars, link hover | < 2 % |
| `accent-soft` | `#8FA9B6` | sage hover `#90B4A6` / line spot `#8FB0A3` | +1 % | card border on hover, spot fill in line drawings | < 1 % |
| `line` | `#C4CED4` | floor plan stroke `#C5D0CB` | 0 | line plan / elevation SVGs | < 1 % |
| `ink` | `#222222` | ink `#222222` | 0 | text, 1px card borders, ledger rules, pill fill | text |
| `muted` | `#5C666B` | derived from ink | — | notes, captions, meta | — |
- Contrast: ink on white 15.9:1; `#5E727C` on white 4.9:1 (OK for 0.875rem+ link hover); white on ink pill 15.9:1.
- No cream/beige; no saturated field; accent never a section background.
- First screen saturated pixels: cap **15 %**, target ≤ 5 % (R1 4.7 %). `python3 scripts/check-first-screen.py screenshots/home-desktop.webp --max 15`.

---

## 5. Type (font_direction = **serif**)

Latin heading **Source Serif 4** (OFL, variable 200–900, opsz), Latin body **Source Sans 3** (OFL, variable 200–900). CJK = 明體: **Noto Serif TC** (zh-TW) and **Noto Serif JP** (ja) for headings and body; no 黑體 anywhere. All faces are loaded through **theme.json `fontFamilies` + `fontFace`** (woff2 in `assets/fonts/`, Latin subset for the two Source faces, zh-TW / ja subsets made the Hokuto/Hada way — the subset script is broken, use their replacement); no `wp_enqueue` font CSS. style.css uses `:lang()` → copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it so the editor iframe shows the same faces (check-editor-fonts.mjs en + zh-TW).

| Use | Stack |
|---|---|
| heading (en, fr, de) | `"Source Serif 4", "Noto Serif TC", "Noto Serif JP", Georgia, serif` |
| body (en, fr, de) | `"Source Sans 3", "Helvetica Neue", Arial, sans-serif` |
| heading + body `:lang(zh-TW)` | `"Source Serif 4", "Noto Serif TC", "PMingLiU", serif` (body at 400, lh 1.85) |
| heading + body `:lang(ja)` | `"Source Serif 4", "Noto Serif JP", "Hiragino Mincho ProN", "Yu Mincho", serif` (body at 400, lh 1.85) |

theme.json fontSizes (largest ≥ 4.25rem ✔):
| slug | size | use | source |
|---|---|---|---|
| `x-small` | 0.75rem | section captions, pills | R1 12px caption `[tok b]` |
| `small` | 0.875rem | sub-line, links, meta, year column | R1 14px sub-line / CTA `[tok b]` |
| `medium` | 1rem | body, lh **2.0**, weight 400 | R1 body 16/400/32 `[tok b]` |
| `large` | 1.5rem | intro lead line, people names | — |
| `x-large` | 2.5rem | T2 card titles, 600, lh 1.6 | R1 card title 40px/700/64 `[tok b]` |
| `xx-large` | clamp(2.25rem, 3.4vw, 3rem) | KV headline and inner page titles, 600, lh 1.25 | R1 hero 32px/700 enlarged ×1.5 for a 600-weight serif at 1440 (quality rule: confident display) |
| `huge` | clamp(3rem, 6vw, 4.5rem) | ledger numbers, 400, lh 1.0, `font-variant-numeric: lining-nums tabular-nums` | page_structure metrics-ledger (72px) |
Section label Latin word 2rem 300 (R1 28–32px light). Letter-spacing: Latin headings 0.01em; CJK headings 0.1em (R1 ls .1em). CJK sizes ≈ 0.75 × en for xx-large and huge; body 1rem. fr/de `hyphens: auto`.

---

## 6. Inner pages (≥ 8 + notes; each = T1 head → body → small closing line with dashed link)

**Inner T1 head (1440)**: height 760px; headline (xx-large) top 120px under the header at left 80, one-line lead 1rem max 520px under it; wide photo left 14.4vw, top 330px, width 46vw, 1.75:1, cut by the head's bottom edge (the next section overlaps 60px); portrait right 0, top 40px, width 22vw, 0.58:1, `border-top-left-radius: 65% 38%`; trapezoid panel 150×380 left 0, top 360; pill 88×460 behind the portrait. Both photos `sp-parallax` (8 % / 12 %; mobile 5 % / 7 %). Mobile: headline, lead, wide photo full width (left 16px, bleeds right), portrait below the wide photo at 56vw, right-aligned, bleeding right, elliptical corner kept (same as the home KV on mobile).

1. **About** `/about/` — head "Thirty years of furniture made where you can see it." (P17 + P15). Body: three narrative sections 7/12 column (1994: Marieke Vos opens a 400 m² upholstery shop; 2008: move to Werkhuislaan 40, steel line added; 2019: 10-year frame warranty, recycled steel), each ≥ 60 words; T3 scatter (P3, P4, P5 + `line-office-plan.svg`) around the line "We would rather show you the factory than describe it."; dashed link to Team.
2. **Products** `/products/` — head "Seating, desks, panels and tables, built to your drawings." (P1 + P2). Four T2 cards bleeding right: Task and meeting seating (P6; T2 €640, M4 €380), Desking systems (P7; B6 €890 per seat, H1 €1,180), Acoustic panels and storage (P8; A2 €165 per m²), Meeting tables (P17; "priced from drawings", no number). Each card ≈ 70 words: materials, finishes in the kit, lead time 6 weeks, warranty 10/5 years. Closing link "See the price list".
3. **Specification** `/specification/` — head "How a specification is installed." (P14 + P5). The 5-stage ledger (§0) as hairline rows `Week | Stage | Who | Note` (Week in Source Serif 4 2.5rem, nowrap). Then two T2 cards: "Sample kit and mock-up" (P11; free kit, €450 mock-up credited) and "Delivery and evening installation" (P16; €45 per seat, packaging taken back). Paragraph on drawings formats accepted (DWG, IFC, PDF).
4. **Projects** `/projects/` — head "Contracts delivered." (P16 + P9). Register rows (4 cases, Year | Project | City | Seats | Scope). Then 4 T2 case cards (P13 law office, P8 library, P7 software studio, P17 architecture studio), each ≈ 90 words: brief, what we built, how it was installed, one sentence from the architect (fictional, unnamed practice, no quotes of real people).
5. **Factory** `/factory/` — head "The factory, in numbers." (P1 + P4). Full ledger 2025 (6 rows, `sp-count`) beside the sticky photo **P15** (same layout as home block 4); T3 scatter **P3, P12, P16** + `line-chair-elevation.svg`; then the trend chart: 5 vertical bars (2021–2025, seats delivered) in `#5E727C`, 240px tall, value labels above, year labels below, built in HTML/CSS (no chart library); materials paragraph (recycled steel 68 %, FSC oak veneer, PET acoustic core), ≥ 120 words.
6. **Price list** `/price-list/` — head "List prices 2026." (P6 + P3). Full price table (§0, 7 rows), footnote, then three short paragraphs: what a list price includes, lead time 6 weeks, warranty 10/5 years. T2 contact card (P14) "Ask for a priced schedule".
7. **Showroom & visits** `/showroom/` — head "Come and sit in it." (P10 + P2). Address, hours, tour (Thursday 14:00, 60 min, max 8), directions (Eindhoven Centraal 12 min by bus, parking for 6 cars), all as hairline rows (Label | Value). T3 scatter (P11, P12, P5 + `line-office-plan.svg`) around "Bring your drawings; we will lay the room out in chairs." T2 tour card (P1).
8. **Team** `/team/` — head "Seven people you will meet." (P14 + P15). Seven people as hairline rows: Name (Source Serif 4 1.5rem) | Role | Since | one sentence (≈ 25 words) — not a portrait grid. T3 scatter (P3, P4, P9 + `line-chair-elevation.svg`) around a 60-word paragraph on the workshop.
9. **Contact** `/contact/` — head "Request a sample kit or a priced schedule." (P7 + P5). Hairline rows: phone, email, address, hours. T2 card (P14) "What to send us": drawings, seat count, finishes, date. No form required (if a form plugin is absent, show email link).
10. **Notes** — `home.html` index and `single.html`. Index head (P12 + P2), then R1 news rows (date · outline pill · title, hairline). 3 posts with featured images: "How we test a task chair before it ships" (P12), "Evening installation: what the night crew does" (P16), "Choosing fabric from the sample kit" (P6). Single: category pill, title xx-large, date, featured image as the head's wide photo (offset, cut by the head's bottom edge, `sp-parallax` 8 %), text column 680px.
11. 404 / search: small head, dashed link home.

Sections on inner pages alternate white / mist like home. No sidebar.

---

## 7. Responsive (hard)
- **390px first screen**: header 64px (wordmark + menu button), headline xx-large → 2.25rem, sub-line, then `kv-chair-line` full width from left 16px, bleeding right, ratio 1.75:1. Below the fold: `kv-swatch-hand` 56vw right-aligned bleeding right with the elliptical corner, chair drawing 90×140 on its lower-left corner (over the photo only, never over text). Trapezoid panel 40×200 at left behind the wide photo. **No vertical text, no absolutely positioned label or tag over any text**, no overlap (auto-gates mobile overlap must pass). All absolute positioning of KV figures is desktop-only (≥ 960px); below 960 they are in normal flow.
- T2 cards < 782px: full width minus 16px left margin (still touching the right edge), border top+left kept, photo on top (3:2) then text; line drawing scaled to 96px and placed at the card's top-right.
- T3 scatter < 782px: two photos side by side (46vw each, the right one 48px lower), text below, third photo 70vw centred below text; plan SVG 140 % width at 40 % opacity behind text.
- Ledger < 782px: sticky off, photo above rows; each row stacks (number, then measure + note, then year), number 3rem.
- **Price table ≥ 782px**: full container width (`width: 100%`, `table-layout: fixed`, Item 28 %, Included auto, Price 18 %), Price column `white-space: nowrap; text-align: right`, never cut or overflowing at 800 and 1280 (auto-gates). **< 782px every table stacks**: `thead` hidden, each `tr` a block with 1px `#222` top rule, cells `display:block`, price on its own line right-aligned. Same for any other table (Specification rows and registers are Group rows already; they stack the same way).
- No horizontal overflow at 390 and 1280 (`html, body { overflow-x: clip }`).

---

## 8. Images (17 photos + 8 small line SVGs)

**Imagery: photo** (stage-a IMAGERY = photo; R1 is photo-led). All photos generated with Grok (`IMAGE_STYLE="<STYLE>" scripts/grok-image.sh out.webp "<subject>"`), one at a time, each read and regenerated if it shows text, logos, broken hands/faces or drifts in style. ≤ 300 KB, ≤ 2000px, webp, 0 cut-outs. One `readme.txt` line per image (AI-generated, CC0).

STYLE (exact, every photo):
`photorealistic documentary photograph, high-key soft daylight from large windows and skylights, 35mm lens, bright modern furniture workshop and office interiors with white walls, pale grey concrete floors, pale oak and light grey powder-coated steel, upholstery fabrics in pale grey and muted blue-grey, cool neutral colour grade with low saturation, shallow depth of field, people mid-task with hands at work, diverse adults in plain workwear, natural skin and correct hands, international modern setting, no text, no logos, no brand marks, no signage lettering, no Japanese elements`

| ID | File | Subject / composition | Ratio | HOME | Used on (once per page) |
|---|---|---|---|---|---|
| P1 | `kv-chair-line.webp` | assembler on a bright production line pressing a pale blue-grey fabric back panel into an office chair frame with both hands, a colleague's forearm reaching in from the left edge passing a part, other chairs on the line softly blurred | 16:9 (crop 1.75:1) | **HOME KV** | Home 1; Products head; Factory head; Showroom tour card |
| P2 | `kv-swatch-hand.webp` | close vertical shot: a specifier's hand laying a fabric swatch on the armrest of a finished pale grey task chair in a white showroom, a wall of small swatch cards on pegs behind, softly blurred | 9:16 (crop 0.58:1) | **HOME KV** | Home 1; Products head; Showroom head; Notes head |
| P3 | `intro-frame-bolt.webp` | hands tightening a bolt on a light grey powder-coated steel desk frame with a hex key, workbench, daylight | 3:4 | **HOME** | Home 2; About T3; Price list head; Team T3; Factory T3 |
| P4 | `intro-foam-stretch.webp` | upholsterer stretching pale grey fabric over a seat foam pad and stapling it, side view | 3:4 | **HOME** | Home 2; About T3; Factory head; Team T3 |
| P5 | `intro-plan-review.webp` | architect and specifier at a white table reviewing a printed office floor plan with swatch cards and a laminate chip, hands pointing | 3:4 | **HOME** | Home 2; About T3; Specification head; Showroom T3; Contact head |
| P6 | `svc-seating.webp` | a row of finished task and meeting chairs in pale grey fabric in a daylight showroom, low angle | 3:2 | **HOME** | Home 3; Products card; Price list head; Notes post 3 |
| P7 | `svc-desking.webp` | bench desk system with pale oak tops in a bright open-plan office, empty chairs, morning light | 3:2 | **HOME** | Home 3; Products card; Projects case; Contact head |
| P8 | `svc-acoustic.webp` | meeting room with blue-grey fabric acoustic wall panels, low white storage and a pale oak table | 3:2 | **HOME** | Home 3; Products card; Projects case |
| P9 | `ledger-factory-floor.webp` | wide factory floor under skylights, workers at stations, stacks of chair frames, deep perspective | 4:5 | **HOME** | Home 4; Projects head; Team T3 |
| P10 | `showroom-wide.webp` | showroom with desk sets and chairs arranged as a real office, large windows, a person sitting to test a chair | 3:2 | **HOME** | Home 5; Showroom head |
| P11 | `tile-sample-kit.webp` | overhead: open sample kit box with fabric swatches, laminate chips and steel colour chips in rows | 1:1 | **HOME** | Home 5 tile; Specification card; Showroom T3 |
| P12 | `tile-castor-fit.webp` | close-up hands fitting a castor to a five-star chair base | 1:1 | **HOME** | Home 5 tile; Factory T3; Showroom T3; Notes head; Notes post 1 |
| P13 | `case-night-install.webp` | installation crew assembling bench desks on an empty office floor at early evening, city lights softly outside, interior bright | 3:2 | **HOME** | Home 6; Projects case |
| P14 | `contact-kit-desk.webp` | specifier at a desk opening a sample kit beside a laptop and drawings, hands on swatches | 3:2 | **HOME** | Home 9; Specification head; Price list card; Team head; Contact card |
| P15 | `team-workbench.webp` | production manager at a workbench checking a chair mechanism with a gauge, upper body, face turned to the work | 3:4 | — | About head; Factory sticky; Team head |
| P16 | `delivery-bay.webp` | chairs wrapped in reusable blankets on trolleys in a bright loading bay, a worker pushing one | 3:2 | — | Specification card; Projects head; Factory T3; Notes post 2 |
| P17 | `table-sanding.webp` | craftsperson sanding the edge of a long pale oak meeting table, fine dust in daylight | 3:2 | — | About head; Products card; Projects case |

Check per page (no repeats): Home P1–P14 (14). About P17, P15, P3, P4, P5. Products P1, P2, P6, P7, P8, P17. Specification P14, P5, P11, P16. Projects P16, P9, P13, P8, P7, P17. Factory P1, P4, P15, P3, P12, P16. Price list P6, P3, P14. Showroom P10, P2, P11, P12, P5, P1. Team P14, P15, P3, P4, P9. Contact P7, P5, P14. Notes index P12, P2 (post rows have no thumbnails, as in R1's news list); Notes single: its own featured image only.

**Line SVGs (ours, drawn by the implementer, inline or `assets/images/line-*.svg`, not photos, not cut-outs)**: ink `#222` stroke 1.5px, round caps, loose hand-drawn feel, one flat `#8FA9B6` spot fill, no shading — the style of R1's figures, our own subjects: `line-swatch-tape.svg` (stack of swatch cards + tape measure, 76×44), `line-chair-elevation.svg` (task chair side elevation, 140×220), `line-castor.svg` (castor wheel, 60×60), `line-chair.svg`, `line-desk.svg`, `line-panel.svg` (card toppers, ≈ 140×150), `line-envelope.svg` (contact card, 120×110); and `line-office-plan.svg` (1px `#C4CED4` plan of bench desks and chairs, 830×376). Never trace R1's drawings; no people figures needed.

---

## 9. Scroll effects (sp-scroll; three kinds per page max; hero has no reveal)
| Effect | sp class | Where | R1 source (trigger / time / easing) | Our values |
|---|---|---|---|---|
| Photo parallax | `sp-parallax` (wrapper Group, `figure>img` inside) | Home KV wide (`--sp-par: 8%`) and portrait (`12%`); home showroom photo (`10%`); every inner T1 head (8 % / 12 %); Notes single featured image (8 %) | `data-parallax` image-wrapper/content, ScrollTrigger scrub 1, start top-bottom → end bottom-top, inner image taller than frame, −50 → −10px (Δ ≈ 60px), linear + scrub smoothing `[tok g]` | built-in scroll-driven CSS (`animation-timeline: view()`), JS fallback; mobile `--sp-par` 5 % / 7 % / 6 % via media query; wrappers `overflow: clip`; text never inside a moving layer |
| Fade-up reveal + stagger | `sp-reveal sp-reveal--up`, parent `sp-stagger` | Home: T2 product cards (container `sp-stagger`, each card up), T3 scatter photos (each wrapper up, container stagger), project featured card, notes rows container, contact card; inner pages: T2 cards and T3 scatter | `data-show-anim=fade`, onEnter at top+20 % vh, once, .8s `cubic-bezier(.32,.95,.6,1)`, translateY 40px + scale .95 `[tok g]` | `--sp-dist: 24px` (≤ 30), `--sp-dur: .8s`, `--sp-ease: cubic-bezier(.32,.95,.6,1)`; stagger built-in .12s; cards with hover keep `transition-delay: 0s` on the border transition |
| Count-up | `sp-reveal sp-count` | Home ledger numbers (6) and Factory ledger + trend values | R1 has no count; this is the metrics-ledger page structure, replacing R1's belt wipe on text | built-in 1.2s easeOutCubic; "40 of 41" counts the first number only; `1,860` keeps the comma |
Not used: `sp-reveal--zoom` (R1 image scale 1.2→1 is already expressed by parallax), wipe, marquee, Lenis smooth scroll (forbidden). No reveal on the KV, on the price table, on forms or legal text. The KV load fade is plain CSS keyframes under `html.sp-js:not(.sp-no-motion)` inside `@media (prefers-reduced-motion: no-preference)` so `?sp-static`, no-JS and the editor show the final state.

**Parallax (required)**: block `front-kv` (home first screen). Background layers: `kv-chair-line.webp` (wide, `--sp-par: 8%`) and `kv-swatch-hand.webp` (portrait, `--sp-par: 12%`) — the two layers move at different speeds against the static headline and flat panels (foreground). R1 counterpart: both KV photos drift inside fixed frames with GSAP scrub 1 (Δ ≈ 60px). Phones keep it at 5 % / 7 %. Second parallax: `front-showroom` P10 at 10 % (mobile 6 %). Verified by `check-parallax.mjs` (≥ 6px desktop and mobile; 0 with reduced motion).

Hover (pure CSS): T2 card border `#222` → `#8FA9B6` .6s `cubic-bezier(.23,1,.32,1)`; ink pill: a `#5E727C` layer wipes in from the left via clip-path on a child `span` 1s `cubic-bezier(.5,0,0,1)`; dashed links: arrow circle moves 4px right .3s.

---

## 10. Similarity table (target ≈ 80 % of R1)
| Dimension | R1 value `[tok]` | Seiwa value |
|---|---|---|
| Ground / bands | `#FFFFFF` ≈ 55 %, mist `#F4F8F6` ≈ 35 % alternating `[a]` | `#FFFFFF` ≈ 55 %, `#F3F6F8` ≈ 35 % alternating (blocks 3, 5, 7, 9) |
| Panel | `#DEE8E3` flat polygons ≈ 4 % `[a, f]` | `#DCE5EA` same shapes and positions |
| Accent | `#677771` < 2 % `[a]` | `#5E727C` < 2 % (hue to blue-grey, ΔL −3 %, reason §4) |
| Ink | `#222222`, pill fill, 1px borders `[a, d]` | `#222222` identical |
| First-screen saturation | 4.7 % `[a]` | target ≤ 5 %, cap 15 % |
| Body type | 16px / 400 / lh 2.0 `[b]` | 1rem / 400 / lh 2.0 (CJK 1.85) |
| Headline | 32px / 700 / lh 1.0 top-left x 80, y 274 `[b, c]` | 3rem / 600 serif / lh 1.25, same position |
| Card title | 40px / 700 / lh 1.6, ls .1em `[b]` | 2.5rem / 600 / lh 1.6 (CJK ls .1em) |
| Section titles | Latin 28–32px light + 12px caption, left x 80 `[b]` | Latin 2rem 300 + 0.75rem caption, left x 80 |
| Container / padding | 1280px, header side 40px, section gaps 120–160px `[c]` | 1280px, header 40px, section padding 160px desktop / 80px mobile |
| Card geometry | 1252px from x 188 to right edge, pad 40, min-h 404, 50/50, gap 40 `[c]` | identical (86.94vw, 2.78vw, 28vw, 50/50, 40px) |
| Radius | 0 everywhere, pill 20 `[d]` | 0 everywhere, pill 20; masks only on the KV portrait and T3 photos |
| Borders | 1px `#222` top+left, hover `#90B4A6` .6s `[d]` | 1px `#222` top+left, hover `#8FA9B6` .6s same easing |
| KV images | 782×448 at x 207 y 481; 400×692 at x 1040 y 136, quarter-ellipse `[e]` | 54vw × 1.75:1 at 14.4vw / 481px; 27.8vw × 0.58:1 at right 0 / 136px, `65% 38%` ellipse |
| Scatter photos | 240×380, 264×316, 284×398, quarter-circle + hexagon masks `[e]` | identical sizes and masks |
| Showroom | 632×420 centred 44 %, square tiles on corners `[e]` | 44vw 3:2 centred, tiles 120 / 96px on corners |
| Decoration | trapezoid 150×460, pill 80×560, plan SVG 830×376 1px `#C5D0CB`, line figures on corners, 4×20 bar `[f]` | same sizes, `#DCE5EA`, `#C4CED4`, our own line SVGs, 4×20 `#5E727C` bar |
| Imagery | high-key daylight photos, hands mid-task, pale walls, desaturated blue-grey + wood `[e]` | same (STYLE §8) |
| Motion | load fade headline→photos→drawings; parallax scrub Δ 60px; fade-up .8s `cubic-bezier(.32,.95,.6,1)` `[g]` | CSS load fade same order; `sp-parallax` 8/12/10 %; `sp-reveal--up` .8s same curve, 24px |
| Layout | KV → about scatter → service cards → case → showroom → news `[c]` | KV → about scatter → product cards → ledger → showroom → projects → prices → notes → contact |
Photos, copy, logo and line drawings are our own.

---

## 11. Home acceptance checklist
1. 1440×900 first screen: white top half with the serif headline top-left at x 80; wide P1 straddling the fold right of centre; portrait P2 bleeding off the right edge with the big elliptical top-left corner; flat `#DCE5EA` trapezoid and pill + translucent accent pill + mist block; both line drawings on the photo corners; header with centred menu and ink pill. All 6 KV rows visible. No table, form, search, button in the hero, giant centred text or vertical text. `check-first-screen.py --max 15` passes (target ≤ 5 %).
2. 390px: no horizontal overflow, no vertical text, no absolutely positioned label over text, no overlap (auto-gates).
3. T3 about: three photos of different sizes at different heights, quarter-ellipse + hexagon masks, faint line plan bleeding off the left.
4. T2 cards (products ×3, project, contact) touch the right viewport edge, 1px ink top+left border, photo flush right half, line drawing breaking the top edge, 4×20 accent bar kicker; hover border turns `#8FA9B6`.
5. Ledger: sticky P9 on the left while 6 rows scroll; numbers 4.5rem serif, count up; rows with ink hairlines; values exactly §0.
6. Showroom: centred P10 with two square tiles on its corners, parallax works.
7. Price table full container width at 800 and 1280, price column right-aligned nowrap, not cut; stacked on mobile; prices exactly §0 and identical on Products, Price list and all languages.
8. Colours as §4; no cream, no saturated field; accent only on small elements.
9. Fonts: Source Serif 4 headings, Source Sans 3 body, Noto Serif TC/JP for zh-TW/ja, loaded via theme.json fontFace; editor = front end (check-editor-fonts.mjs); largest size 4.5rem.
10. 14 photo positions on home, P1–P14 each once; 17 photos total, same STYLE, no text/logos/bad hands; 0 cut-outs.
11. Motion: `check-parallax.mjs` passes (KV and showroom parallax ≥ 6px desktop and mobile, 0 reduced motion; ≥ 3 reveals hidden before entry and visible after; nothing transparent at the bottom); no reveal inside `front-kv`; `?sp-static` shows the final state.
12. Home ≥ 400 English words, ≥ 5 narrative paragraphs; facts (1994, Eindhoven address, hours, 6 weeks, 10/5 years, prices, people) identical everywhere.
13. Block order equals §3 and differs from Hodoki, Enishi, Akari and Madoka per the comparison table; no team grid, step grid, vertical timeline, dashboard, side rail, collage or cut-outs.
