# Kairo Supply: design spec (stage 1, binding for implementation)

Slug `kairo-supply`, type **landing** (trade-account landing page for an electrical wholesaler's trade counter). Row b17-5: archetype sticky-media, hero full-bleed-photo, nav top-bar, page_structure landing-longform, font_direction **sans** (Inter Tight / Hanken Grotesk, CJK Noto Sans TC / Noto Sans JP gothic), palette blue-grey `#5C6E7A`, photographic.

Reference: **UNION TEC** https://www.union-tec.jp/ (S5-Style, not used by any earlier theme). Measurements: `brand/reference-tokens.md` (cited below as token (a)–(g)). Screenshots: `brand/ref/`. MonotaRO (named in the plan note) is an industry analogue only, not a visual reference.
We borrow structure, techniques, colour relationships, the key visual concept and the measured numbers. We do **not** copy UNION TEC's photos, copy, logo or SVG wordmark. All photos are generated, all copy is ours.

Landing rule: home = one long conversion page with an anchor menu and **one repeated CTA, "Open a trade account"** (always → `/apply/`). Newsletter page = early-access waitlist. Plus Privacy, Terms, Thanks.

---

## 1. Signature techniques (three, obvious at a glance; do not soften)

### T1. Stadium (pill) photo window over a giant ink wordmark cropped by both viewport edges, on a 176 px hairline grid (UNION TEC first screen, `ref/ut-fold.png`, token (e)(f))
- **Reference:** white page; a 1 px hairline grid (≈`#E6E6E6`, 176 px cells, small "+" ticks at intersections) fixed behind everything. Across the vertical centre runs the black wordmark "UNION TEC" at ≈180 px cap height, so wide that both viewport edges cut it ("NION TEC U"). A documentary photo sits in a **stadium mask** ≈950×405 (2.35:1, 66% of width, 45% of height) centred on top of the wordmark, so only the cut ends of the letters show left and right. At the bottom, one line of bold 25 px type spread letter by letter across the whole width, a 13 px sub line under it, and "Scroll" bottom-right.
- **Kairo, home block 1 (`front-kv`):** identical composition. Wordmark `SUPPLY KAIRO SUPPLY KAIRO` (one line, `white-space:nowrap`, centred so both ends are cut), photo **K01** in the stadium window, tagline spread across the width at the bottom. Exact values in §3.
- **Shape/ratio/position:** pill `border-radius: 9999px`, 66vw wide (max 950 px at 1440), aspect 2.35:1, centred horizontally, vertical centre at 50% of the hero (y≈247–652 at 1440×900). Wordmark cap height ≈ 0.4 × pill height; the pill covers the middle ≈ 65% of the wordmark.
- **Contrast:** pure ink letters `#0A0C0E` on white, no tint, no transparency on the first screen. The photo is the only grey-green/steel field.
- **Must not be diluted:** the wordmark must be **ink and huge** (cap height ≥ 160 px at 1440, ≥ 80 px at 390), cut by **both** edges; the photo must be a **true stadium** (fully round ends, not a rounded rectangle, not radius 24); the grid must be visible (1 px, ≥ `#E3E6E9`, not lighter); the tagline must stay one line spread across the full width on desktop.

### T2. Tall egg photo at the right with a large story set in 28 px / 2.0 lines at the left, ghost wordmark behind (UNION TEC story after the hero, `ref/scroll-hero-700.png`, `ref/scroll-hero-300.png`)
- **Reference:** after the hero, the photo becomes a tall **egg/oval** ≈375×540 (0.7:1) at the right (x874–1248, 26% of width), vertically centred; on the left, short story lines at 28 px / 56 px, ls 0.02em, which fill from pale grey to ink as you scroll; the wordmark is ghosted (`#F7F7F7`) behind both.
- **Kairo, home block 2 (`front-counter`, anchor `#counter`):** egg photo **K02** at columns 9–11 of 12 (26vw, max 375 px, aspect 0.7:1, i.e. 375×536), vertically centred on the story; story at columns 1–7 in `large` 1.75rem / 2.0 / ls .02em, Inter Tight 700, ink. Ghost wordmark `KAIRO SUPPLY KAIRO` in `#F4F6F7` behind (same size as T1), `aria-hidden`. Lines rise in one by one (`sp-stagger` + `sp-reveal--up`, §8) as the substitute for the grey→ink fill.
- **Egg shape:** symmetric oval `border-radius: 50%` on a 0.7:1 box (reads as the reference egg), `overflow: clip`; photo `object-fit: cover`.
- **Must not be diluted:** egg ≥ 340 px wide at 1440 and clearly taller than wide (0.7:1); story type ≥ 1.75rem with line-height 2.0 (not 1.5); ghost wordmark present but very light (`#F4F6F7`, never darker than `#EEF1F3`).

### T3. Outlined pill buttons with a 5 px dot + stacked pills top-right (UNION TEC nav/CTA, token (d)(f))
- **Reference:** two stacked pills top-right: "• Contact" filled black and "• Menu" outlined (height 24, radius 16, padding 0 12, 1 px border, 13 px bold); content CTAs are big pills 216×48, radius 9999, 1 px border, 16 px, a 5 px dot at the left; hover colour change .7 s.
- **Kairo:** the one CTA "Open a trade account" is always a pill with the dot. Block styles registered in theme.json/`register_block_style`:
  - `is-style-ks-pill` (big): min 216×48, padding 9px 32px, radius 9999px, 1px solid `#0A0C0E`, Hanken Grotesk 500 1rem, text ink on transparent; `::before` 5×5 circle `currentColor`, margin-right 16px. Hover: background `#0A0C0E`, text white, `transition: background-color .7s cubic-bezier(.26,.06,0,1), color .7s cubic-bezier(.26,.06,0,1)`.
  - `is-style-ks-pill-fill`: same, filled `#0A0C0E`, white text; hover background `#296EDF` (the only place the accent fills).
  - On dark (block 3): border and text white; hover fill white, text ink.
  - Header mini pills: height 24px, radius 16px, padding 0 12px, 1px border, Inter Tight 700 0.8125rem; "● Open an account" filled ink at top, "● Menu" outlined below (Menu = the navigation overlay toggle on < 1024 px; on ≥ 1024 px the second pill is "● Call 0100 555 0142" outlined, `tel:` link).
- **Must not be diluted:** pills are always fully round with the dot; no square or 8 px-radius buttons anywhere; no filled accent-blue buttons at rest.

### Supporting (not counted): sticky dark stage (UNION TEC service section, `ref/scroll-sticky-after.png`)
Full-bleed blurred, darkened photo (≈50% black), chamfered corners, a big white sentence-case list bottom-left and a small sharp blob-masked inset photo top-right, outlined white pill bottom-right. Used as home block 3 and carries the second parallax (§8).

### Continuation to inner pages (each technique on ≥ 4 inner pages)
| Page | T1 (page head) | T2 (egg + story) | T3 (pills) |
|---|---|---|---|
| Apply | ✔ word `APPLY`, pill K13 | — | ✔ fill pill submit/mailto, header pills |
| How the counter works | ✔ word `COUNTER`, pill K14 | ✔ egg K04, story "A morning at the counter" | ✔ |
| Range | ✔ word `RANGE`, pill K05 | — (stadium + egg pair as home block 5) | ✔ |
| Prices & credit | ✔ word `PRICES`, pill K08 | — | ✔ |
| Contractor stories | ✔ word `STORIES`, pill K09 | ✔ egg K10 beside story 1 | ✔ |
| The counter team | ✔ word `TEAM`, pill K16 | ✔ egg K12, founding story | ✔ |
| Visit & hours | ✔ word `VISIT`, pill K15 | ✔ egg K17 (trade yard entrance) | ✔ |
| Early access | ✔ word `EARLY`, pill K07 | — | ✔ |
| Notes (index/archive) | ✔ word `NOTES`, pill K03 | single post: featured image in the egg at right of the title | ✔ |
| Privacy / Terms / Thanks | small head: word cropped at 50% size, no photo | — | ✔ |
(9 pages carry T1, 4 carry T2, all carry T3.)

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
UNION TEC's first screen is a calm, monochrome engineering drawing: a white sheet with a fine hairline grid, a huge black company name cut by both edges, and over it one stadium-shaped documentary photograph of a hand at work (a pen marking out a floor plan on paper), then a single wide-spaced line that says what the company exists for. Story: **"space is made by what people do in it"** — the company is shown through a working hand, not a building. Signature motion: the tagline letters roll up into place on load (.7 s, 40 ms per letter); as you scroll, the stadium photo slides inside its mask and then reshapes into a tall egg at the right while the story text fills from grey to ink; later a full-screen dark stage pins with a blurred photo and a big list.

### (2) Our transfer scene (same composition, same motion idea, same image type)
An electrical wholesaler's **trade counter**, early morning: in the stadium window, a documentary daylight photograph seen at counter height — **a coil of grey cable, taped and labelled, being slid across a worn steel-topped counter by a staff member's hands toward a contractor's hands** (hi-vis cuff, work gloves tucked in a pocket), shelves of cable drums soft in the background. The hand-at-work of the reference becomes the handover across the counter; story: **"the counter is where a job starts"** — cable cut to the metre, fittings picked by job, and an account that makes it quicker every time. Same hairline grid (our grid = a counter's ruled cutting mat), same huge cropped ink wordmark `KAIRO SUPPLY`, same one wide-spaced line: **"Cable cut to the metre. Fittings picked by job."** Motion: words of the tagline roll up on load (same .7 s / 40 ms, theme CSS, §8); the photo drifts inside the stadium (`sp-parallax`); the next block shows the egg photo of the job-pick and the story lines rise in. Image type: documentary real photography, daylight, desaturated cool grey (token (e)).

### (3) KV checklist (all six visible on the home first screen at 1440×900; at 390×844 items 1–5 visible, item 6 is block 2 directly below)
| # | Reference element | Our counterpart | Position | Motion | Photo |
|---|---|---|---|---|---|
| 1 | Stadium photo of a hand marking a floor plan, 950×405 (2.35:1) | Stadium photo: coil of taped grey cable slid across a steel counter from staff hands to a contractor's hands | centre; 66vw (max 950) × 2.35:1; y≈247–652 at 1440×900; mobile 342×214 (1.6:1) under the wordmark | `sp-parallax` inside the mask, `--sp-par: 8%` (mobile 6%) | K01 |
| 2 | Giant black "UNION TEC" wordmark, ≈180 px cap, cut by both edges, behind the photo | `SUPPLY KAIRO SUPPLY KAIRO` Inter Tight 800 ink, cap ≈184 px, cut both sides, behind the pill | full width, vertical centre of hero (cap y≈358–542) | static | — |
| 3 | 1 px hairline grid, 176 px cells, "+" ticks | Same grid, `#E3E6E9` lines, 9 px "+" ticks `#B9C1C7`, fixed; on the photo a white 28% copy of the grid | whole hero (and site background) | static (fixed attachment ≥ 1024 px) | — |
| 4 | One bold JP line spread letter by letter across the full width + 13 px sub line | H1 "Cable cut to the metre. Fittings picked by job." spread word by word across the width; sub line "Electrical trade counter in Ostwick since 2004 · accounts open in two working days" | bottom: H1 baseline y≈808, sub y≈870, "Scroll" bottom-right | words roll up on load: translateY(100%)→0, .7 s `cubic-bezier(.25,1,.5,1)`, delay 40 ms × index | — |
| 5 | Stacked pills top-right: filled "Contact", outlined "Menu"; Ja/En top-left under logo | Filled "● Open an account", outlined "● Call 0100 555 0142" (mobile "● Menu"); language switcher under the logo (EN · ZH · JA · FR · DE, inactive `#BDC3C7`) | header top-right / top-left | hover fill .7 s | — |
| 6 | Pill morphs into a tall egg photo at right while story text fills grey→ink | Tall egg photo of the job-pick (staff member's hands placing labelled fittings into a crate beside a cable drum) right; story lines rise in left | block 2, egg right 26vw 0.7:1; story cols 1–7 | `sp-stagger` + `sp-reveal--up` 16 px .8 s; egg static | K02 |

Both K01 and K02 are in the image list (§10).

---

## 3. Home page

### Header (all pages)
- Height 96 px, transparent over the white grid (no bar colour, no shadow), `position: sticky; top: 0` with a white 92% background + 1 px `#E3E6E9` bottom rule only after 1 px of scroll (CSS `:has` not needed: plain sticky white background is acceptable; keep it white, never dark).
- Left (x 24): wordmark `KAIRO SUPPLY` Inter Tight 800 1.75rem ls -.01em ink (text, not an image); under it at 12 px the language switcher, Inter Tight 700 1rem, current ink, others `#BDC3C7`.
- Centre-right (from x≈940): **the only menu** (`core/navigation`), anchor links in two columns × 3 rows like the reference (Hanken Grotesk 500 0.8125rem/1.35, ink): Counter `#counter` · What we do `#stage` · How it opens `#how` · Range `#range` · Prices `#prices` · Stories `#stories`. (Team and Apply are reached via the CTA and footer.) On inner pages the same links point to `/#…`.
- Right (x 1416 edge, 24 px margin): the two stacked mini pills (T3).
- < 1024 px: navigation collapses to its overlay; the overlay button is styled as the outlined "● Menu" mini pill, stacked under the filled "● Open an account" pill. Overlay = white with the grid, links Inter Tight 700 2.5rem.

### First screen composition (1440×900)
Implement as one Group `ks-kv` (`alignfull`, `min-height: 100svh`, max 1000 px) with a CSS grid of rows — **no absolute positioning for text**:
- Row A (header, 96 px).
- Row B (flexible, centre): one grid cell holding two stacked layers via `grid-area: 1/1`: (1) `p.ks-mark` wordmark, `aria-hidden="true"`, Inter Tight 800, `font-size: clamp(5.5rem, 17.5vw, 16rem)` (252 px at 1440 → cap ≈184 px), line-height .8, ls -.02em, `white-space: nowrap`, `justify-self: center`, the cell `overflow: clip`; (2) Group `ks-pill sp-parallax` width `min(66vw, 950px)`, `aspect-ratio: 2.35`, `border-radius: 9999px`, `overflow: clip`, centred, `z-index: 1`, `figure > img` K01 (`object-fit: cover`, focus 50% 55%). `::after` overlay = the grid in `rgba(255,255,255,.28)`.
- Row C (bottom, padding 0 24px 24px): H1 `ks-tag` Inter Tight 700 1.5625rem/1.5 (25/37.5), ink; desktop each word in a `span` and the line `display:flex; justify-content:space-between` across the full width (24 px margins). Under it, 26 px gap: sub line Hanken Grotesk 400 0.8125rem/1.6 ls .02em `#3E4A52`, left; "Scroll" Inter Tight 700 0.75rem right on the same baseline.
- Nothing else: no button in the hero body (the CTA is the header pill), no table/form/search, no extra labels.
- Saturated share: target ≤ 3% (K01 is a grey/steel photo; only a small hi-vis cuff may be yellow-green). Hard limit 15% (common.md); reference measured 1.5% (token (a)).

### First screen at 390×844
- Header 72 px: wordmark 1.25rem; pills stacked right (filled "● Open an account" 24 px high, outlined "● Menu" under it). Language switcher moves into the menu overlay (no second row in the header).
- Row B: wordmark `font-size: 8rem` (128 px, cap ≈94 px) cut both sides; pill 342×214 (`aspect-ratio: 1.6`), still 9999 px radius, centred over the wordmark.
- Row C: H1 wraps naturally, left-aligned, 1.25rem/1.5, `justify-content: flex-start; flex-wrap: wrap; column-gap: .3em`; sub line under it; "Scroll" hidden.
- No vertical text, no absolutely positioned labels; the only overlap is image over the `aria-hidden` wordmark. If `auto-gates.mjs` flags that overlap, render the wordmark as an inline SVG `<text>` (fallback: outlined SVG) — never shrink it.

### Block order (home, landing-longform; anchors in brackets)
| # | Pattern | Purpose | Layout, photos | Copy (en) |
|---|---|---|---|---|
| 1 | `front-kv` | key visual (T1) | as above; K01 in stadium, `sp-parallax` | H1 9 words + sub 14 words |
| 2 | `front-counter` `#counter` | who the counter is for (T2) | section padding 160 px; ghost wordmark behind; story cols 1–7, three short paragraphs as lines (1.75rem/2.0); under it a 1.125rem/2.0 paragraph (cols 1–6) and the big pill "● Open a trade account"; egg K02 cols 9–11 | 3 × 30 words + 50 words |
| 3 | `front-stage` `#stage` | what the counter does (supporting dark stage) | full-bleed Cover `sp-parallax`, 100svh (min 760), bg K03 with `filter: blur(14px)` applied to the image layer and overlay `#000` 50%; corners chamfered 96 px (four white triangle pseudo-elements, not clip-path); top-right blob inset K04 320×220 (`border-radius: 48% 52% 46% 54% / 55% 45% 55% 45%`), sharp; bottom-left list (4 lines) Inter Tight 700 3.5rem/1.55 white sentence case: "Cable cut to the metre" / "Fittings picked by job" / "Collection from 06:30" / "Van drops by noon"; label above "What the counter does" 0.6875rem 700 white 70%; bottom-right outlined white pill "● How the counter works" → `/counter/`; white grid overlay `rgba(255,255,255,.08)` | 4 lines + 1 sentence (20 words) |
| 4 | `front-how` `#how` | how an account is opened | white grid; left cols 1–4: H2 "How an account opens" 2.5rem 700 + sub "Two working days, four steps" 1.125rem 700 + 1 paragraph + fill pill "● Open a trade account"; right cols 6–12: four `#F9F9F9` cards 320×336 (UNION TEC capability cards) in a 2×2 offset grid (right column pushed down 176 px = one grid cell), each slightly turned `transform: perspective(1200px) rotateY(-8deg)` (static), no shadow; inside: 0.6875rem 700 label "Step 1"…, an outlined oval glyph (CSS: 84×116 box, `border: 3px solid #0A0C0E; border-radius: 50%`), step title 1.375rem 700, one sentence | 4 × 25 words + 45 words |
| 5 | `front-range` `#range` | what's on the shelves | H2 "What's on the shelves" + sub; row: stadium K05 cols 1–8 (2.35:1) + egg K06 cols 10–12 (0.7:1) whose top aligns 88 px lower (half a grid cell); below, a 2-column hairline list (1 px `#E3E6E9` rules) of the 6 range families, each: name 1.125rem 700 + one line 0.9375rem `#3E4A52`; a small blob K07 200×140 sits at the end of the right column beside "Lighting & controls" | 70 words |
| 6 | `front-prices` `#prices` | prices & credit on account | heading row: H2 "Prices and credit on account" cols 1–7 + pill photo K08 cols 9–12 (2.35:1); then the **price table full container width** (6 rows, §11) with 1 px hairlines, item 1.125rem 700, detail 0.9375rem, price Inter Tight 700 1.25rem right `nowrap`; under it one line "Prices ex VAT. Credit up to €5,000 on 30-day terms, subject to approval." + outlined pill "● Full prices & credit" → `/prices/` | 60 words + table |
| 7 | `front-stories` `#stories` | three contractors (cases) | H2 "Three accounts, three ways of working"; three rows separated by 1 px hairlines; each row: stadium photo cols 1–5 (2.35:1) K09 / K10 / K11, text cols 7–12: 0.6875rem label (trade · since year), name 1.75rem 700, 2 sentences, a quote line 1.125rem; rows alternate photo left/right | 3 × 50 words |
| 8 | `front-team` `#team` | behind the counter | egg K12 cols 1–3 (0.7:1) left with `position: sticky; top: 120px` inside the section (archetype sticky-media); right cols 5–12 a hairline list of the 7 people (§11): name 1.25rem 700, role 0.875rem `#3E4A52`, one line; "● Meet the team" outlined pill → `/team/` | 7 × 15 words |
| 9 | `front-apply` `#apply` | the single way to apply (repeat CTA) | ghost wordmark `APPLY APPLY APPLY` `#F4F6F7` behind; centre a stadium K13 (min(56vw, 800px), 2.35:1); under it H2 "Open a trade account" 3.5rem 700 left at cols 1–7, three lines of what you need (company name and VAT number · one trade reference · names of up to 5 buyers) cols 1–7, right cols 9–12 counter hours + address; fill pill "● Open a trade account" → `/apply/` | 55 words |
| — | footer | | white grid; 4 columns (Counter address · Hours · Pages: Apply, Prices, Team, Visit, Early access, Notes · Privacy, Terms); bottom: wordmark `KAIRO SUPPLY` Inter Tight 800 clamp(4rem, 14vw, 12rem) ink, cut at the bottom edge by 30% (`overflow: clip`) | |

English home ≥ 250 words with narrative paragraphs in blocks 2, 4, 7 (≥ 3 paragraphs of ≥ 20 words). CJK home ≥ 500 characters.
Home photo positions: K01, K02, K03, K04, K05, K06, K07, K08, K09, K10, K11, K12, K13 = **13**, no repeats.
CTA "Open a trade account" appears in header, blocks 2, 4, 9 (same wording, same target).

### Comparison with recent home block orders
| # | Kesho College | Eiyo Clinic | Hikari Lighting | Getsuji Payroll | **Kairo Supply** |
|---|---|---|---|---|---|
| 1 | flush 2:3 marquee strip + clipped giant word | inset rounded photo + headline under | dark curtain-lift KV, stencil wordmark | full-bleed photo + navy panel + white message panel | **white hairline grid, giant ink wordmark cut both sides, stadium photo over it, spread one-line H1** |
| 2 | centred concept | 4-line text-fill statement + photo | intro | about | **egg photo right + 28 px story lines left, ghost wordmark** |
| 3 | wide photo + overlapping caption | coverflow stalls | dark room box w/ lit window | 3 doors | **full-screen dark stage: blurred photo, 3.5rem list, blob inset** |
| 4 | day schedule rows | pine block with arches | alternating lamp rows | pick-up | **four tilted grey cards on the grid (how an account opens)** |
| 5 | 3 square tiles | stories cards | room project rows | notes columns | **stadium + egg pair, 2-col hairline range list** |
| 6 | instructors portrait + rows | room split | mirrored room box | people | **full-width price table with pill photo** |
| 7 | tuition table | — | — | — | **three case rows with stadium photos** |
| 8 | text quotes | — | — | — | **sticky egg portrait + 7 name rows** |
| 9 | parallax band + boxed CTA | — | — | — | **stadium + ghost APPLY + repeat CTA** |
Why not alike: no marquee, no inset rounded photo under a headline, no curtain/stencil, no side panels over a full-bleed photo, no dot grids or orange rules. Kairo's shapes are geometric masks (stadium, egg, blob) on a white engineering grid with ink type and pills — none of the recent themes uses a mask-shaped photo, a hairline grid, or pill buttons. Kesho also used a clipped giant word, but Kairo's is ink, centred behind a photo and cut by both side edges (not sitting on the bottom edge in an accent colour).

---

## 4. Inner pages (12 + posts; all reachable from header CTA, footer or home links; ≥ 9 for auto-gates)

Every page except Privacy / Terms / Thanks: **T1 page head** → body → closing strip "Open a trade account" (one sentence + fill pill). No sidebar. Body text column ≤ 720 px; tables full container width.
**T1 page head:** height 560 px desktop (mobile auto): grid background; page word Inter Tight 800 `clamp(5rem, 12vw, 11rem)` ink, repeated twice and cut by both edges (e.g. `PRICES PRICES`), `aria-hidden`; stadium photo `min(52vw, 760px)` 2.35:1 over it (mobile 1.6:1); under it H1 (Inter Tight 700 2.5rem, left) + one line 1.125rem + breadcrumb "Kairo Supply / Prices" 0.75rem.

1. **Apply** `/apply/` — head K13. What you need (company name, VAT number, one trade reference, up to 5 named buyers); the four steps as plain numbered paragraphs (§11); what happens after (counter card, credit decision, first order); a mailto/fill-pill "● Send your application" (subject "Trade account application") and "or apply at the counter with your VAT number"; a form plugin may be added later but never on a first screen. Closing: hours + phone.
2. **How the counter works** `/counter/` — head K14. T2: egg K04 + story "A morning at the counter" (06:30 doors, cutting bay, job packs on the left rack, locker collection). Sections: Cut to length (cut fee €0 on account, min 5 m, cut while you wait ≤ 10 min) · Job packs (pick list by 15:00 → ready 06:30 next day, €8 per pack) · Collection & lockers · Van delivery (order by 11:00, drop same day within 20 km, €15). Photo K15 (van loading) 2.35:1 between sections.
3. **Range** `/range/` — head K05. The 6 families (§11), each a section with 3–5 lines of what's stocked (brands not named; "major manufacturers' ranges, cable to standard sizes 1.0–35 mm²"); stadium K06 and blob K07; note on special orders (next working day for stocked lines, 3–5 days for specials).
4. **Prices & credit** `/prices/` — head K08. The full price table (same 6 rows as home, same widths), credit terms (30 days from statement, limit up to €5,000 at opening, review after 3 months), returns (unused, unopened within 30 days; cut cable not returnable), drum deposit refund. Egg K14 beside "How credit is decided" paragraph. K08 appears only in the head.
5. **Contractor stories** `/stories/` — head K09. The three cases (§11) in full, 150 words each; T2 egg K10 with story 1; stadium K11 with story 3; quote lines 1.375rem.
6. **The counter team** `/team/` — head K16. T2: egg K12 + founding story (Ruth Abernethy opened the counter in 2004 in a former tyre depot on Mill Road); the 7 people as hairline rows (name, role, since year, one line); "how we work" (one named counter contact per account).
7. **Visit & hours** `/visit/` — head K15. T2: egg K17 (trade yard entrance) + directions paragraph (yard parking for vans, 12 bays, height limit none); address, phone, email, the hours table (stacked on mobile); early locker explanation.
8. **Early access** `/early-access/` — newsletter = **waitlist** for "Job-pack ordering online" (send pick lists from your phone, ready at 06:30): head K07; label "EARLY ACCESS"; what you get (3 lines); email field + fill pill (mailto subject "Early access" if no form plugin); privacy link.
9. **Notes** (posts index `home.html`, `archive.html`, `single.html`) — head K03. Hairline list: date + tag pill + title + one line, 3:2 thumbnail right. Single: title left, featured image in an egg (0.7:1, 300 px) at right of the title, text column 720 px. Posts (3): "Why we cut cable while you wait" (K14), "Packing a job the night before" (K02), "Drum returns: how the deposit works" (K15).
10. **Privacy** `/privacy/`, 11. **Terms** `/terms/` — small head (page word at 50% size, no photo), plain legal text, H2 1.5rem.
12. **Thanks** `/thanks/` — small head, "We'll call you within one working day", outlined pill home.

---

## 5. Colour (token (a); reference roles kept)

| Role | Hex | Source (token) | Use | Share (home) |
|---|---|---|---|---|
| Base | `#FFFFFF` | UT ground `#FFFFFF` (a) | page ground | ≈66% |
| Ink | `#0A0C0E` | UT ink `#000000` (a), +4% L | wordmark, text, filled pills, hairline glyphs | ≈7% (≈6% on fold) |
| Panel | `#F9F9F9` | UT light grey (a) | step cards, table header row | ≈3% |
| Grid | `#E3E6E9` | UT hairline `#E6E6E6` (a), steel tint | 1 px grid, hairline rules | lines only |
| Tick | `#B9C1C7` | UT "+" ticks (f) | grid crosses | lines only |
| Ghost | `#F4F6F7` | UT ghosted wordmark `#F7F7F7` (a)(b) | ghost wordmarks | ≈4% |
| Steel | `#5C6E7A` | plan hex blue-grey; takes the role of UT photo cast `#8F9E97` (a) | photo grade; secondary text `#3E4A52` (derived, darker for 4.5:1); dark-stage overlay tint | photos ≈20% |
| Accent | `#296EDF` | UT accent blue (a) — kept: blue suits an electrical trade | link hover, focus ring, fill-pill hover, the step-card label dot | ≤ 1% |
| Muted | `#BDC3C7` | UT inactive `#BDBDBD` (f) | inactive language links | — |

- No beige, no cream. Steel only as photo grade and darker secondary text; no steel section backgrounds. Dark stage = photo + 50% `#000`.
- Text contrast: `#3E4A52` on white 9:1; white on dark stage ≥ 7:1.
- First-screen saturated share (S>35%, V>24%): reference 1.5% (token (a)); this theme's gate `check-first-screen.py --max 15` (common.md) and target ≤ 3%.

## 6. Type (font_direction **sans**; token (b))

- Latin display: **Inter Tight** (OFL) 700 / 800. Latin body: **Hanken Grotesk** (OFL) 400 / 500 / 700. Both sans; no serif anywhere.
- CJK: **Noto Sans TC** (zh-TW) and **Noto Sans JP** (ja), 400 / 700, gothic sans for headings and body; never a Ming serif.
- Stacks (theme.json `fontFamilies`, all with `fontFace` so the editor iframe and the front end load the same files):
  - `display`: `"Inter Tight", "Noto Sans TC", "Noto Sans JP", "Helvetica Neue", Arial, sans-serif`
  - `body`: `"Hanken Grotesk", "Noto Sans TC", "Noto Sans JP", "Helvetica Neue", Arial, sans-serif`
  - `:lang(zh-TW)` → `"Inter Tight"/"Hanken Grotesk", "Noto Sans TC", sans-serif`; `:lang(ja)` → `…, "Noto Sans JP", sans-serif`. Because style.css uses `:lang(`, copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it.
  - fontFace files in `assets/fonts/`: Inter Tight variable latin woff2, Hanken Grotesk variable latin woff2, Noto Sans TC 400/700 zh-TW subset, Noto Sans JP 400/700 ja subset (use the Hokuto/Hada subsetting workaround; the theme's subset script is known broken).
- theme.json `fontSizes` (fluid off except where clamp is written):

| slug | size | use | token |
|---|---|---|---|
| small | 0.8125rem | sub line, nav, captions (13 px, ls .02em) | (b) hero sub 13 px |
| base | 1rem | body, lh 1.6 (CJK 1.85) | (b) body 16/24 |
| medium | 1.125rem | lead paragraphs lh 2.0, H2 sub | (b) 18/36 |
| tag | 1.5625rem | hero H1, lh 1.5 | (b) tagline 25/37.5 |
| large | 1.75rem | story lines lh 2.0 ls .02em | (b) 28/56 |
| x-large | 2.5rem | section H2 700 lh 1.2, page H1 | (b) "Capability" 40 px |
| xx-large | 3.5rem | dark-stage list lh 1.55, apply H2 | (b) 56/1.55 |
| huge | clamp(5.5rem, 17.5vw, 16rem) | wordmarks, lh .8, ls -.02em, 800 | (b) wordmark ≈180 px cap |
Largest preset = 16rem (≥ 4.25rem ✔).
- Labels 0.6875rem/1.2 700 (token 11/13.2). Buttons 1rem 500. Wordmark stays Latin `KAIRO SUPPLY` in every language.
- zh-TW/ja: headings ≈ 0.75× the English size (H2 1.875rem, stage list 2.625rem, story 1.375rem lh 2.0), body lh 1.85, ls .04em; the desktop spread H1 also works with CJK (spread by phrase spans). fr/de: `hyphens: auto` on body and H2.

## 7. Spacing, radius, decoration (tokens (c)(d)(f))
- Full-bleed layout with 24 px side margins (token (c) `--grid-margin` 24), 12 columns, 20 px gutter (≥ 1024), 6 columns / 16 px gutter on mobile. Text columns max 720 px.
- Section padding: 10rem top/bottom (160 px; token 174/160/155), mobile 6.5rem (104 px token).
- Grid background (site-wide): `background-image: url(assets/images/grid.svg)` — a 176×176 SVG with 1 px `#E3E6E9` lines on the right and bottom edges and a 9 px "+" in `#B9C1C7` at the corner; `background-size: 176px; background-position: 8px 0` (first line at x=8 as in the reference); `background-attachment: fixed` ≥ 1024 px, `scroll` below. Not counted as a photo.
- Radius: photos only stadium (9999px), oval (50%) or blob; buttons 9999px; cards 0; tables 0. Shadow: none anywhere (token (d)). Photo masks have no border.
- Hairline rules 1 px `#E3E6E9`. No numbering badges; step labels are 0.6875rem 700 text with a 5 px accent dot.

## 8. Scroll effects (sp-scroll; from stage-a candidates)
Copy `pipeline/assets/sp-scroll/` unchanged to `assets/`; enqueue css+js in head (js non-defer), `add_editor_style`. Three effects only:

| Effect | sp-* | Where | Reference (site, trigger, time, ease) | Our values |
|---|---|---|---|---|
| Parallax photo in mask | `sp-parallax` | block 1 pill (K01), block 3 Cover (K03) | union-tec.jp: photo slides inside the stadium as the sticky hero scrolls, scrub ≈100vh, quart-out (g) | `--sp-par: 8%` (block 1), `10%` (block 3); mobile 6% / 7% |
| Text fill grey→ink | `sp-stagger` + `sp-reveal sp-reveal--up` | block 2 story lines (each paragraph one reveal), page T2 stories | union-tec.jp: scroll scrub ≈300 px per paragraph, linear (g); true scrub not available → stagger | `--sp-dist: 16px; --sp-dur: .8s; --sp-ease: cubic-bezier(.25,1,.5,1)`; stagger .12 s steps (built-in) |
| Sticky stage lines slide up | `sp-stagger` + `sp-reveal sp-reveal--up` | block 3 list lines; block 4 cards; block 7 rows | union-tec.jp: IntersectionObserver, .8 s, ≈40 px, `cubic-bezier(.18,.06,.23,1)` (g) | `--sp-dist: 24px` (≤30 px rule), `--sp-dur: .8s`, `--sp-ease: cubic-bezier(.18,.06,.23,1)` |
- Hero (block 1): **no sp-reveal**. The tagline word roll is a load-time CSS animation, not a scroll effect: `html.sp-js:not(.sp-no-motion) .ks-tag span { animation: ks-roll .7s cubic-bezier(.25,1,.5,1) both; animation-delay: calc(var(--i) * 40ms) }` inside `@media (prefers-reduced-motion: no-preference)`; each span wrapped in an `overflow: clip` inline-block; `@keyframes ks-roll { from { transform: translateY(100%) } }`. No-JS / `?sp-static` / reduced motion = static final state. Total ≤ 1.2 s.
- Not animated: price table, apply block text, forms, legal pages, block 5 photos (static).
- No Lenis (not allowed), no scroll listeners, no GSAP/AOS.

### Parallax (required)
- **Block 1 (primary):** Group `ks-pill sp-parallax` (stadium, `overflow: clip`, `border-radius: 9999px` — no clip-path on the wrapper); moving layer = direct `figure > img` **K01**; `--sp-par: 8%` desktop, `6%` ≤ 781 px (kept on mobile). Foreground (wordmark, H1) is outside the moving layer.
- **Block 3:** Cover `alignfull sp-parallax`, background image **K03** (blurred via the image layer), `--sp-par: 10%` desktop, `7%` mobile; foreground = list, inset K04, pill — not moving.
- Reference correspondence: UNION TEC slides the photo inside its stadium window while the hero is scrolled and cross-fades the stage photo behind fixed type — same "photo moves, type stays" relation. Verified by `check-parallax.mjs` (desktop + mobile ≥ 6 px; reduced motion 0; ≥ 3 reveals hidden before entry, none left hidden at the end).

## 9. Responsive rules
- 390 px first screen: no vertical text, no absolutely positioned labels; header pills right, wordmark + pill in one grid cell, H1 below in flow; no horizontal overflow (`html, body { overflow-x: clip }`, wordmark cells `overflow: clip`).
- Price table (home block 6, Prices page) and hours table (Visit): at ≥ 782 px the table is **full container width** (`width: 100%`), price column `white-space: nowrap; text-align: right; min-width: 11ch`, never cut or overflowing at 800 and 1280. ≤ 781 px every table becomes stacked rows (`display: block` per row; item above, detail, price right-aligned on its own line).
- Block 2: egg moves above the story, width 70vw (max 280 px), centred. Block 3: list 2rem/1.4, inset 200×138 top-right, chamfer 48 px, min-height 640 px. Block 4: cards one column, no rotation ≤ 781 px, no offset. Block 5: stadium full width, egg 60vw under it. Blocks 7: photo above text. Block 8: egg not sticky, 60vw above the list.
- Page heads: page word `clamp(4rem, 22vw, 6rem)`, stadium 1.6:1 full width minus 48 px.

## 10. Photos (17, Grok, one at a time, read each one)
**Imagery = photo** (stage-a IMAGERY: photo; UNION TEC is ≈95% documentary photography). No illustration, no cut-outs.

STYLE (identical for every image):
`IMAGE_STYLE="documentary real photography, natural high-key daylight from large skylights and roller-door openings, desaturated cool grey and steel blue-grey cast, matte, no stylised grading, honest working detail, hands and people at work, modern international electrical wholesaler trade counter and warehouse, galvanised steel shelving, grey and white cable, brushed steel counter tops, plain light-grey walls, diverse tradespeople and staff aged 22 to 60 in plain dark workwear without logos, small touches of copper conductor and muted hi-vis, 35mm lens, shallow depth of field, no text, no readable labels, no logos, no brand names, no signage lettering, no Japanese elements, not glossy, not advertising"`

| ID | Subject / composition | Ratio | Used on (once per page) | Home |
|---|---|---|---|---|
| K01 | Counter-height view: staff hands slide a taped coil of grey cable across a worn steel counter to a contractor's hands (hi-vis cuff), cable drums soft behind; hands centred, wide | 21:9 (crop 2.35:1) | Home block 1 (KV) | ✔ |
| K02 | Job-pick: staff member's hands placing fittings (junction boxes, glands, sockets) into a grey plastic crate beside a cable drum, plain blank tag on the crate; vertical | 2:3 (crop 0.7:1) | Home block 2 (egg); post "Packing a job the night before" | ✔ |
| K03 | Wide aisle of tall galvanised shelving with cable drums, soft light at the far roller door (will be blurred/darkened) | 16:9 | Home block 3 (bg, parallax); Notes head | ✔ |
| K04 | Close-up: cable being pulled from a drum through a wall-mounted metre counter, hands in work gloves | 3:2 | Home block 3 (blob inset); Counter T2 egg | ✔ |
| K05 | Rack of cable drums in grey, white and black, side light, rows receding | 21:9 | Home block 5 stadium; Range head | ✔ |
| K06 | Drawer bank of wiring accessories, a hand lifting a pack of glands, vertical | 2:3 | Home block 5 egg; Range body | ✔ |
| K07 | Lighting & controls bay: plain LED panels and boxed drivers on shelves, staff member checking one | 3:2 | Home block 5 blob; Early access head; Range body | ✔ |
| K08 | Contractor and counter staff looking at a paper pick list together on the counter (text not readable), coffee cup | 21:9 | Home block 6; Prices head | ✔ |
| K09 | Two-person domestic electrician team loading boxed fittings into a plain white van at dawn in the yard | 21:9 | Home story 1; Stories head | ✔ |
| K10 | Shopfit project lead signing for a cable drum delivery on a commercial site (unfinished interior, concrete floor) | 21:9 (crop 0.7:1 on Stories) | Home story 2; Stories T2 egg | ✔ |
| K11 | Sole-trader EV-charger installer collecting a small order from a steel locker, early light | 21:9 | Home story 3; Stories body | ✔ |
| K12 | Counter manager portrait at the counter, half-turned, hands resting on the steel top, shelves behind, face natural | 2:3 | Home block 8 (sticky egg); Team T2 egg | ✔ |
| K13 | Wide: the trade counter from the customer side at opening time, two contractors waiting, staff behind, daylight | 21:9 | Home block 9; Apply head | ✔ |
| K14 | Cutting bay: cable cutter closing on a grey cable over a ruled steel bench, tape measure | 21:9 / 2:3 | Counter head; Prices egg; post "Why we cut cable while you wait" | |
| K15 | Van being loaded at a roller door with a cable drum on a trolley, morning | 21:9 | Counter body; Visit head; post "Drum returns" | |
| K16 | The counter team (four staff, informal, mid-shot) at the end of the counter, candid, not posed in a row | 21:9 | Team head | |
| K17 | Trade yard entrance: open roller door, parked vans, plain unlettered building, daylight | 2:3 | Visit T2 egg | |
Same-page check: Home 13 distinct (K01–K13). Counter: K14, K04, K15. Range: K05, K06, K07. Prices: K08, K14. Stories: K09, K10, K11. Team: K16, K12. Visit: K15, K17. Early access: K07. Notes: K03 + post thumbnails K14, K02, K15. Apply: K13. All ≤ 300 KB, ≤ 2000 px, webp, readme.txt line each (AI-generated, CC0). Reject any image with readable text, logos, broken hands or warm/glossy grading.

## 11. Fixed facts (identical on home, inner pages, footer and all five languages)
- **Kairo Supply**, electrical wholesaler trade counter, founded **2004**. Address: **Unit 3, Brennan Yard, 41 Mill Road, Ostwick** (fictional). Tel **0100 555 0142**, counter@kairosupply.example.
- **Hours:** Counter Mon–Fri **06:30–17:00**, Sat **07:30–12:00**, Sun closed. Collection lockers from **06:00** (account holders). Van orders by **11:00** for same-day drop within **20 km**.
- **Account:** opened in **two working days**; credit up to **€5,000** at opening on **30-day** terms from statement; review after 3 months; up to **5** named buyers per account.
- **Price list (6 items, EUR ex VAT):**
  | Item | Detail | Price |
  |---|---|---|
  | Trade account | 30-day terms, credit up to €5,000, up to 5 named buyers | No fee |
  | Cable cut to length | any length from 5 m, cut while you wait (≤ 10 min) | €0 per cut |
  | Job pack | picked and labelled by job; pick list by 15:00, ready 06:30 | €8 per pack |
  | Van delivery | within 20 km, same day if ordered by 11:00 | €15 per drop |
  | Cable drum deposit | refunded in full when the drum comes back | €40 per drum |
  | Special order | non-stock lines, 3–5 working days | €0 · 20% deposit |
- **Account steps (4, as paragraphs, not a step grid):** 1 Apply online or at the counter (10 minutes: company name, VAT number, one trade reference) → 2 Credit check the same day → 3 Counter card and named buyers set up by the next working day → 4 First order on account.
- **People (7):** Ruth Abernethy (founder & director), Daniel Osei (counter manager; K12), Mei Lin Hart (accounts & credit — opens accounts), Tomás Rocha (cutting bay lead), Priya Natarajan (lighting & controls), Jonas Weber (deliveries), Aoife Brennan (job packs, early shift).
- **Stories (3):** Halden Electrical (two-person domestic rewires, owner Sami Halden, account since 2019 — moved to job packs collected at 06:30); Northgate Fit-Out (shopfitting, project lead Grace Mbeki, since 2021 — drum drops to site); Lucas Ferreira (sole trader, EV chargers, since 2025 — account open in two days, first locker collection next morning). No results figures, no real brands.
- **Range (6 families):** Cable & flex · Containment & trunking · Wiring accessories · Distribution & protection · Lighting & controls · EV charging & renewables.
- Returns: unused, unopened within 30 days with the invoice; cut cable not returnable.

## 12. Home acceptance checklist
1. 1440×900 first screen: white hairline grid (176 px, ticks), ink wordmark cut by both edges at cap ≥ 160 px, stadium K01 (2.35:1, ≈66vw) centred over it, one-line spread H1 at the bottom, sub line, "Scroll"; header logo + language switcher left, 2×3 anchor menu, stacked pills right. KV items 1–5 visible; block 2 egg (item 6) directly below.
2. No hero reveal; tagline words roll up on load in motion mode only; `?sp-static` shows final state.
3. 390×844: wordmark cut both sides, pill 1.6:1, H1 in flow, no vertical text, no absolute labels, no overlap flagged, no horizontal overflow.
4. T2: egg K02 0.7:1 ≥ 340 px at 1440 right, story 1.75rem/2.0 left, ghost wordmark `#F4F6F7`.
5. Dark stage: blurred K03 + 50% black, chamfered corners, 3.5rem white list, blob inset K04, white outlined pill.
6. Parallax on block 1 (K01, 8%) and block 3 (K03, 10%) passes `check-parallax.mjs` desktop + mobile; reduced motion 0.
7. Reveals only blocks 2, 3, 4, 7 (≥ 3 hidden before entry, none left at the end); no reveal on hero, prices, apply.
8. 13 distinct photos on home, all in STYLE, no text/logos; masks only stadium/oval/blob; no shadows; no square buttons.
9. Price table full width at 800 and 1280, price column nowrap right, stacked ≤ 781; numbers equal §11 everywhere.
10. Colours: white/ink dominant, accent `#296EDF` ≤ 1%, no beige; saturated first-screen share ≤ 15% (target ≤ 3%).
11. Fonts Inter Tight / Hanken Grotesk / Noto Sans TC / Noto Sans JP from theme.json fontFace, same in editor and front end; no serif.
12. ≥ 250 English words, ≥ 3 narrative paragraphs; one menu; CTA "Open a trade account" in header + blocks 2, 4, 9.

## 13. Similarity to reference (target 80%)
| Dimension | Reference (token) | Kairo Supply |
|---|---|---|
| Ground | `#FFFFFF` 68.5% (a) | `#FFFFFF` ≈66% |
| Ink | `#000000` 5.8% (a) | `#0A0C0E` (+4% L) ≈6% on fold |
| Panel | `#F9F9F9` (a) | `#F9F9F9` |
| Photo cast | grey-green `#8F9E97`, ≈24% fold (a) | steel `#5C6E7A` grade, ≈22% fold |
| Accent | blue `#296EDF`, unused on fold (a) | `#296EDF`, 0% on fold, ≤ 1% page |
| Fold saturation | 1.5% (a) | target ≤ 3%, gate 15% |
| Grid | 1 px ≈`#E6E6E6`, 176 px, "+" ticks, fixed (f) | 1 px `#E3E6E9`, 176 px, 9 px ticks `#B9C1C7`, fixed ≥ 1024 |
| Wordmark | ≈180 px cap, black, cut both edges (b) | 16rem/17.5vw Inter Tight 800, cap ≈184 px, cut both edges |
| Hero photo mask | stadium 950×405, 2.35:1, 66% w, centred (e) | stadium min(66vw, 950) × 2.35:1, centred |
| Tagline | 25 px/37.5 bold, spread full width (b) | 1.5625rem/1.5 700, spread full width |
| Hero sub | 13 px/20.8, ls .02em (b) | 0.8125rem/1.6, ls .02em |
| Story | 28 px/56, ls .02em; egg 375×540 0.7:1 at right 26% (b)(e) | 1.75rem/2.0, ls .02em; egg 26vw max 375, 0.7:1, cols 9–11 |
| Section head | ≈40 px bold, sub 18 px (b) | 2.5rem 700, sub 1.125rem 700 |
| Stage list | 56 px/1.55 white, blurred photo 50% black, inset 320×220 (b)(e) | 3.5rem/1.55 white, K03 blur + 50% black, inset 320×220 |
| Cards | `#F9F9F9` tilted 3D, ring glyph (e) | `#F9F9F9` rotateY(-8deg), oval ring glyph |
| Labels | 11 px/13.2 700 (b) | 0.6875rem/1.2 700 |
| Buttons | pills 24 px r16 / 216×48 r9999, 1 px, dot (d)(f) | same |
| Spacing | margin 24 px, 12 cols, gutter 16–20, sections 160–174 px, mobile 104 (c) | 24 px, 12 cols, 20 px, 160 px, mobile 104 |
| Radius / shadow | masks + pills only / none (d) | same |
| Motion | letter roll .7 s `.25,1,.5,1` 40 ms; photo slides in mask; text fill scrub; stage lines ≈40 px .8 s `.18,.06,.23,1` (g) | word roll .7 s `.25,1,.5,1` 40 ms; `sp-parallax` 8%/10%; stagger reveal 16 px .8 s; 24 px .8 s `.18,.06,.23,1` |
| Hover | colour .7 s (g) | .7 s `cubic-bezier(.26,.06,0,1)` |
| Smooth scroll | Lenis (g) | none (not allowed) |
| Imagery | documentary photo, desaturated cool grey, hands at work (e) | same, own Grok photos |
Own work only: photos generated, copy written by us; no UNION TEC logo, SVG wordmark, text or images.
