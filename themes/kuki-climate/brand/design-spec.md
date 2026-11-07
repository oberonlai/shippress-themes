# Kuki Climate: design spec (stage B, binding for implementation)

Slug `kuki-climate`, commercial HVAC maintenance contractor, **landing** theme (type `landing`, no WooCommerce needed; declare compatibility only). Design row b24-5: archetype single-column-longform, hero framed-window, nav top-bar, first screen timeline-line, page structure landing-longform, palette iron (tetsu-iro `#2E3A36`), font direction **sans**.

Main reference: Life Edit Renovation by MAJOR SCALE, https://major-scale.jp/life-edit-renovation/ (S5-Style listing). No secondary reference. Measurements: `reference-tokens.md` (cited below as `tok(a)`…`tok(g)`), screens `ref/ref-first.png`, `ref/scroll-le-900.png`, `ref/scroll-le-1800.png`, `ref/scroll-le-2700.png`, `ref/scroll-le-3600.png`. We borrow structure, techniques, colour relationships and the key-visual concept. We do **not** copy the photographs, copy, logo or the giant display serif.

Imagery: **photo** (stage-a IMAGERY = photo; the reference is all full-bleed documentary interior photography). Real-photography STYLE in section 7.

Fixed brand facts (every page and all five languages use exactly these; full list in section 8): Kuki Climate B.V., founded **2009**, depot and office at **Koelhuisweg 14, 3089 KN Rotterdam, Netherlands** (fictional street). Service area within **60 km** of Rotterdam. Seven named people. Currency **EUR** in every language, amounts excl. VAT.

The one repeated CTA everywhere: **"Request a survey hour"** → `#request` on home (inner pages link to `/#request`; the Survey page has its own copy of the request band).

---

## 1. Signature techniques (three, all must be obvious at a glance)

### T1. Numbered ledger rows: light numeral, two-line text, thin double chevron, flat colour panel (ref "Our Service" rows, `ref/scroll-le-2700.png` + `ref/scroll-le-3600.png`, `tok(c)`, `tok(f)`)
- Reference: under a centred light heading and a hairline, each row is ~355 px tall and laid on a 1300 px grid: numeral "01" (~48 px light) at x 61, a three-line text at x 171, a thin `>>` double chevron at x 695, and a **flat, unbordered colour panel** from x 822 to x 1364 (≈ 42% of the row, ≈ 260 px tall) holding a centred light title and one tiny sub-line. Rows are separated by 1 px rules that run the full container. Panels alternate cool grey `#C1C1B9` and sand `#C5BCAA`.
- Kuki: home block 3 "Which buildings a contract suits" (rows **01 Offices**, **02 Retail and hospitality**, **03 Clinics and schools**).
- Geometry at 1440 (container 1304 px, x 68–1372): grid columns `110px 1fr 64px 42%` with column gap 0; numeral cell left; text cell padding-right 48 px; chevron cell centred; panel cell.
  - Numeral: Manrope **200**, 3rem (48 px, `tok(b)` row numerals), line-height 1, colour `#1F2926`, vertically centred.
  - Text: Source Sans 3 **600**, 1.125rem, line-height 1.9, letter-spacing 0.04em, exactly 3 short lines in en (forced with `<br>`), colour `#1F2926`. Example row 01: "Offices of four to twelve floors / with rooftop units and a plant room / that tenants never want to think about".
  - Chevron: 36×22 px double chevron, 2 px stroke `#1F2926`, square caps (`tok(f)` "36px thin stroke"), drawn as a CSS background SVG on an empty `span.kc-chev` (decorative, `aria-hidden`). Hover on the row: chevron `translateX(6px)`, 0.3s `cubic-bezier(.22,1,.36,1)`.
  - Panel: height 260 px, **radius 0, no shadow, no border** (`tok(d)`); ground alternates `#C1C7C3` (row 01, 03) and `#C6C0B2` (row 02). Centred: title Manrope 300 2rem/1.2 (`tok(b)` panel titles 28–32 px), sub-line Source Sans 3 0.8125rem/1.6 ls 0.06em below it (gap 12 px). Row 01 panel title "Offices", sub "4 to 12 units, quarterly or monthly".
  - Rules: 1 px `#B9C0BC` top of the first row and bottom of every row, full container width. Row vertical padding 48 px (row height ≈ 356 px, `tok(c)`).
  - Each whole row is one link (to `/buildings/#offices` etc.).
- Mobile < 782 px: stack: numeral (2.5rem) + text on one line group, chevron hidden, panel full width 160 px tall **below** the text; rules stay. No absolute positioning.
- Must not be diluted: the panel must be a flat solid colour block (not a photo, not a card with shadow, not outlined), ≥ 40% of the row width at 1440; the numeral must stay light (weight ≤ 300) and ≥ 3rem; the double chevron must be visible between text and panel; the 1 px rules must span the full container.

### T2. Segmented pill toggle swapping the year (ref pill toggle "Renovated House | Custom Renovation", `ref/scroll-le-3600.png`, `tok(d)`)
- Reference: on a full-bleed cool-grey band `#C1C1B9`, a centred pill 369×42 px, radius 999 px, ground `#EAE6DE`, two labels left/right of a 1 px × 18 px divider; the active label is dark, the inactive one is 50% grey; the content below swaps.
- Kuki: home block 5 "What a maintenance year covers": pill **Quarterly visits | Monthly visits** swapping two panels.
- Geometry: full-bleed band `#C1C7C3`, padding 200 px top / 200 px bottom at 1440 (`tok(c)` airy rhythm). Centred section head (see 3, "section head") then the pill: **372×42 px**, radius 999 px, ground `#EEF1EF`, labels Source Sans 3 500 0.9375rem, active `#1F2926`, inactive `rgba(31,41,38,.5)`, divider 1 px × 18 px `#9AA39E` at the centre. Pill margin-bottom 72 px.
- Mechanism (CSS only, no JS): a small `core/html` block holds two `<input type="radio" name="kc-year">` (ids `kc-q`, `kc-m`, `kc-q` checked) + their `<label>`s styled as the pill. The two panels are ordinary editable Group blocks with classes `kc-year kc-year--q` and `kc-year kc-year--m`. CSS: `.kc-covers:has(#kc-m:checked) .kc-year--q, .kc-covers:has(#kc-q:checked) .kc-year--m { display:none }`. Without `:has()` support or in the editor both panels show stacked (acceptable fallback). Keyboard: radios focusable, visible 2 px `#1F2926` focus ring on the pill half.
- Each panel: two columns 5/12 + 7/12 within 1304: left a 4:3 photo (P04 quarterly / P05 monthly), right a 4-line lead (Manrope 300 1.75rem/1.4) then a ruled checklist of 6 items (Source Sans 3 1.0625rem, 1 px `#9AA39E` rules, each item ≥ 52 px tall) then the visit count line "4 visits a year · €2,400 from" / "12 visits a year · €8,400 from".
- Mobile: pill 100% width max 340 px; panels stack photo → lead → list.
- Must not be diluted: the pill must be a true rounded capsule (radius 999) with a visible divider, centred, sitting on the grey band, and switching must really swap the content; the band must be full-bleed grey, not ground colour.

### T3. Framed window with an opening veil and a year line (ref opening cover lift on the full-bleed KV, `ref/ref-first.png`, `tok(g)`; row first_screen = timeline-line)
- Reference: the KV is a dimmed full-bleed documentary photo; a full-screen cover lifts on load to reveal it; the title fades/rises in; the photo then **stays still while the "Concept" card scrolls up over it** (`ref/scroll-le-900.png`, `ref/scroll-le-1800.png`).
- Kuki: home block 1 (the whole first screen) + block 2 riding over it. Full spec in section 2 (Key visual concept).
- Inner page heads repeat it small (see continuation).
- Must not be diluted: the iron frame must be visible on all four sides of the window at desktop (40 px sides, the 72 px bar on top, the 200 px year strip below); the year line must show 12 ticks and visit dots on the first screen; the photo must be dimmed so the white H1 reads on it.

### Supporting reference traits (not counted as signatures, but required)
- **Section head** (ref "Our Service" + tiny sub-label, `ref/scroll-le-2700.png`): centred Manrope 300 3rem/1.2 heading, 14 px gap, centred sub-line Source Sans 3 500 0.8125rem ls 0.08em `#4A5652`, then 64 px gap and a 1 px `#B9C0BC` rule across the container (rule only before T1 rows and the survey list). Used for every home block except 1, 2, 4, 10.
- **Very airy rhythm**: section padding 240 px top / 240 px bottom at ≥ 1200 px (`tok(c)` 243 px), 160 px at 782–1199, 96 px below 782.

### Continuation to inner pages (required)
| Page | T1 ledger rows | T2 pill toggle | T3 window + year line |
|---|---|---|---|
| About (`page-about`) | **people as rows**: 01–07 numeral, name + role + one line, chevron, flat panel with the person's area ("Rooftop plant", "Controls"…) | — | page head window (P12) + year line with the founding month marked |
| Contracts (`page-contracts`) | — | **full toggle**: Quarterly / Monthly, each panel with the 12-month schedule as a ruled list (visit month, what is done) | page head window (P03) + year line with quarterly dots |
| Buildings (`page-buildings`) | **rows 01–03 expanded**: under each row a 3:2 photo (P13, P18, P17) + two paragraphs; panels same colours | — | page head window (P07, 21:9 crop) |
| Survey (`page-survey`) | — | toggle **On site | What you receive** (the 60-minute plan vs the written report contents) | page head window (P06) + year line with "survey" dot on the current month concept |
| Prices & terms (`page-prices`) | three term rows (01 Contract length, 02 Notice, 03 Response target) with flat panels holding the number ("12 months", "60 days", "4 hours") | toggle **Quarterly | Monthly** filters the price table rows (both visible in editor/no-:has) | small window head (P16) |
| Field notes (`home.html`, `archive.html`, `tag.html`) | **post list as ledger rows**: 01, 02… numeral, title + date + excerpt line, chevron, flat panel holding the category name (Building stories `#C1C7C3`, Seasonal checks `#C6C0B2`) | — | small window head (P09) |
| Single article (`single.html`) | next/previous post as two ledger rows | — | featured image in the framed window (iron frame 24 px) |
| Contact (`page-contact`) | rows 01 Request a survey, 02 Service desk for contract clients, 03 Accounts, each panel holding the phone/email | — | window head (P15) + year line showing office days |
| Newsletter "Seasonal checklist" (`page-newsletter`) | — | — | window head (P10) + year line with the four mailing months (Mar, Jun, Sep, Nov) |
| Thanks (`page-thanks`) | rows 01 "Within 2 working days we call you", 02 "Survey hour booked", 03 "Report in 3 working days" | — | year line only (no photo) |

T1 appears on 6 inner pages, T2 on 3, T3 on all. Privacy and Terms are plain text pages (760 px column) with the small window head without photo (iron block 240 px with the page title).

---

## 2. Key visual concept

### (1) Reference first screen, story and signature motion
Life Edit Renovation opens on a **full-bleed, dimmed documentary photograph of a finished home** (dining corner, warm tiled wall, linen pendant lamp, oval stone table, upholstered bench), shot straight on and calm. A tiny logo lockup sits centred at the top; a small "MAJOR SCALE × PICNIC MOTEL" line floats mid-photo; a **very large light title runs along the bottom-left edge of the photo**. Story: *show the real, lived-in result before any sales copy* — quality of material and quiet daily life. Signature motion: a full-screen **opening cover lifts** to reveal the photo (GSAP, ~1.2 s, expo/power2 out), the title rises in; then on scroll **the photo stays pinned and a solid dark "Concept" card rises over it**, carrying a photo and three short paragraphs, while the photo and the giant title remain visible at its sides; smooth Lenis scrolling.

### (2) Our scene (same composition, same motion idea, same image type)
"Plant kept in service, all year round." The first screen is the **iron page itself acting as a frame**: under the iron top bar, a wide window holds one dimmed documentary photograph of the *finished, working result* in our industry — **a technician opening the access panel of a rooftop condenser while the building's facilities manager stands beside her holding the service log** (P01), morning daylight, other rooftops behind. The huge light title sits on the photo's bottom-left like the reference. Under the window, the iron strip carries a **12-month year line** whose visit dots draw in left to right: the maintenance year the photo belongs to. On load an iron **veil lifts** off the window (the reference cover lift). On scroll the window stays pinned and an **iron "What a maintenance year is" card** rises over the photo (the reference Concept card), carrying a close-up of the service log (P02) and three paragraphs. Same image type (real documentary photo, dimmed), same composition (full-width photo, small centred mark at top, giant light title bottom-left), same motion (cover lifts → title rises → photo pinned while a solid card rides over it).

### (3) KV checklist (1440×900 first screen; every item implemented and visible)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Full-bleed dimmed documentary interior photo (finished home) | Framed window with the rooftop condenser scene, technician + facilities manager with the log; overlay `rgba(31,41,38,.38)` (ref dim ~35%, `tok(e)`) | x 40–1400, y 72–700 (1360×628, ≈ 2.17:1), radius 0 | pinned (`position: sticky`) while block 2 rides over it, ≥ 782 px only | **P01** |
| 2 | Small centred logo lockup at the top | Wordmark "Kuki Climate" centred in the 72 px iron bar, anchor menu split left/right of it, outline CTA pill at the far right | y 0–72, wordmark centred at x 720 | none | none |
| 3 | Huge light title along the bottom-left of the photo | H1 "Plant kept in service, / all year round." Manrope 300, `clamp(2.5rem, 6.4vw, 6rem)`, lh 1.02, ls −0.02em, `#F4F6F5`, inside the window, left 56 px, bottom 48 px | bottom-left of the window, y ≈ 450–652 | rises 24 px + fades in, 0.9 s `cubic-bezier(.22,1,.36,1)`, delay 0.9 s (after the veil) | P01 behind |
| 4 | Small "partner × partner" line floating on the photo | Sub-line "Maintenance contracts · commercial buildings · Rotterdam", Source Sans 3 600 0.8125rem uppercase ls 0.16em `#F4F6F5`, 20 px above the H1 | window, directly above H1 | fades in 0.6 s, delay 1.3 s | P01 behind |
| 5 | Dark base tone of the page under the KV | Iron year strip: label "A maintenance year" + 1 px line 1000 px wide with 12 month ticks (J F M A M J J A S O N D, 0.6875rem) + 12 small dots (6 px, `#C1C7C3`) for monthly visits and 4 larger brass dots (12 px, `#B8863B`) at Mar, Jun, Sep, Nov for quarterly visits; at right: outline CTA "Request a survey hour →" + "60 minutes on site · €190, credited to year one" | y 700–900, line x 40–1040, CTA x 1100–1400 | line draws `scaleX(0→1)` from left 1.0 s ease-out, delay 1.0 s; dots pop `scale(0→1)` 0.3 s each, stagger 0.08 s from 1.4 s | none (CSS/markup) |
| 6 | Opening cover that lifts to reveal the photo | Iron veil `#2E3A36` covering the window, `translateY(0 → −101%)` | over the window only (frame and bar stay) | 1.2 s `cubic-bezier(.22,1,.36,1)`, delay 0.2 s, on load | P01 revealed |

All load animations are CSS keyframes gated by `html.sp-js:not(.sp-no-motion)` (so no-JS, `?sp-static`, reduced-motion and the editor show the final state with no veil). Hero gets **no** `sp-reveal`.

Concept card ride-over (block 2, first thing seen on scroll): wrapper `.kc-kv` (iron ground) contains block 1 and block 2. At ≥ 782 px and only under `html.sp-js:not(.sp-no-motion)`, block 1 is `position: sticky; top: 72px; height: calc(100vh - 72px); min-height: 760px; z-index: 0`; block 2 follows in flow with `position: relative; z-index: 1`, so while the user scrolls the card slides up over the still photo; the wrapper ends 160 px after the card so the window shows again below it (ref `scroll-le-2700.png`), then the pale block 3 begins. Under `sp-no-motion` and below 782 px: no sticky, normal flow (window, then the card on the iron ground).

Mobile 390×844 first screen: bar 60 px (wordmark left, "Menu" button right, no anchor menu); window x 16–374 at **4:5** (358×448), photo `object-position: 62% 50%`, sub-line + H1 (2.5rem, 3 lines) **inside the window bottom-left in normal flow (Cover content position bottom-left, no absolute positioning)**; below the window the year strip (line full width, 12 single-letter ticks, dots), then the CTA as a full-width outline button. No vertical text, no absolutely positioned labels over text anywhere.

---

## 3. Home page

### First screen (1440×900)
As the KV checklist: iron bar (0–72) → window with P01, sub-line + H1 bottom-left (72–700) → iron year strip with year line and CTA (700–900). Header bar anchor menu: left of the wordmark "Buildings · The year · Survey", right "Prices · Questions" + outline pill CTA "Request a survey hour" (1 px `#EEF1EF` 60%, radius 999, 0.875rem, height 40 px; hover fill `#EEF1EF` text `#2E3A36`). The header is sticky (iron, 72 px) for the whole page. Forbidden on the first screen: table, form, search box, filled accent buttons, centred giant text, side bars.

### Block order
| # | Pattern / anchor | Purpose | Layout and photos | Copy |
|---|---|---|---|---|
| 1 | `kc-hero` / `#top` | KV | T3 framed window (P01) + year strip; pinned at ≥ 782 px | ~25 words |
| 2 | `kc-concept` / `#year` | what a maintenance year is (the reference "Concept" card) | Iron card `#2E3A36` over the pinned window: width 652 px centred (ref 651/1425, `tok(c)`), padding 88 px 56 px 96 px, radius 12 px (ref card bottom corners). Inside: centred Manrope 300 3.5rem `#F4F6F5` "The year" + sub "What a contract is for" 0.8125rem; 40 px gap; P02 at 470×600 (≈ 0.78, `tok(e)` concept photo) centred; 48 px gap; 3 paragraphs Source Sans 3 1rem/2 `#E3E8E5` (≈ 160 words): the plant on the roof is the part of the building nobody sees until it fails; a contract turns a year into four (or twelve) planned visits and one log; the log stays with the building. Then a small line "Kuki Climate · Rotterdam · since 2009" 0.75rem caps ls .16em centred. Mobile: card full width minus 20 px on the iron ground, photo 100% at 4:5. | 160 words, 3 paragraphs |
| 3 | `kc-buildings` / `#buildings` | which buildings a contract suits | Pale ground. Section head "Buildings" / "Which buildings a contract suits", hairline, **T1** rows 01 Offices, 02 Retail and hospitality, 03 Clinics and schools. Below the rows one centred text link "All building types →" (to Buildings). | 3 × 3 lines + 1 intro sentence |
| 4 | `kc-plant` | a breath; depth | Full-bleed `sp-parallax` (`--sp-par: 10%`), height 72vh (min 520, max 760), background P03 (plant room, 21:9). Foreground: small pale plate `#EEF1EF` bottom-left (left 68 px, bottom 56 px, padding 20×28, max-width 420 px) with caption "Plant room, an office in Kralingen, 07:40. Quarterly visit 2 of 4." 0.9375rem. The plate is **not** in the moving layer. Mobile: height 56vh, plate becomes a caption under the image (normal flow), `--sp-par: 6%`. | 1 caption |
| 5 | `kc-covers` / `#covers` | what a maintenance year covers | **T2** on the full-bleed `#C1C7C3` band. Head "Covers" / "What a maintenance year covers"; pill Quarterly visits / Monthly visits; panel Q = P04 + lead + 6 items (spring cooling start-up, filter change, coil and drain clean, belts and bearings, refrigerant check by an F-gas certified technician, autumn heating changeover) + "4 visits a year · from €2,400"; panel M = P05 + lead + 6 items (all quarterly items, plus monthly filter pressure log, monthly controls reading, monthly drain check, priority call-out) + "12 visits a year · from €8,400". | 2 × 90 words |
| 6 | `kc-survey` / `#survey` | how the survey hour is spent | Pale ground. Section head "Survey" / "How the survey hour is spent", hairline. Two columns: left 7/12 a **single-column ruled list of 5 timed lines** (time in Manrope 300 1.75rem `tabular-nums` left column 140 px: "0–10", "10–30", "30–45", "45–55", "55–60"; text Source Sans 3 1.0625rem; 1 px rules; each line ≈ 96 px tall); right 4/12 (offset 1 col) P06 portrait 4:5 (`tok(e)` 0.78). Under the list: "A written report follows within 3 working days." + CTA text link "Request a survey hour →". | 5 × 25 words |
| 7 | `kc-log` / `#log` | from the service log (three buildings = the three stories) | Pale ground with a full-bleed **`sp-marquee` photo strip** of P07–P11 (5 photos, 4:3, height 300 px, gap 16 px, radius 0, 40 s linear) across the top; below it, section head "Log" / "From the service log", then 3 text columns (gap 48 px) each: building name (Manrope 500 1.25rem), sector + contract line (0.8125rem caps ls .1em), a 50-word log excerpt in quotes-free prose, link "Read the note →" to the story post. No `sp-reveal` on marquee children. | 3 × 55 words |
| 8 | `kc-prices` / `#prices` | contract terms and prices | Pale ground, `alignwide` (1304 px). Section head "Prices" / "Contract terms and prices, excl. VAT". Full-width 3-column table (Item / What it includes / Price), 7 rows (section 8), header row Source Sans 3 600 0.8125rem caps ls .1em, rows 1.0625rem, 1 px `#B9C0BC` rules, row padding 22 px 0, **price column `white-space: nowrap; text-align: right; width: 1%; padding-left: 32px`**, Manrope 500 1.125rem `tabular-nums`. Under the table: "12-month contracts, 60 days' notice. VAT 21% is added." + link "Full terms →". No `sp-reveal` on the table. | 7 rows + 2 lines |
| 9 | `kc-questions` / `#questions` | questions | Pale ground continues, 760 px column. Section head "Questions" / "Before you request a survey". 6 `core/details` rows with 1 px rules, summary Manrope 500 1.125rem, `+` icon right (CSS rotate 45° when open), answer 1rem/1.85. | 6 × 45 words |
| 10 | `kc-request` / `#request` | the single way to request a survey | Full-bleed Cover `sp-parallax` (`--sp-par: 8%`), background P15 (rooftop row of units at early morning), overlay `#2E3A36` at **78%**, min-height 640 px. Centred: Manrope 300 3.5rem `#F4F6F5` "Request a survey hour"; sub 1.0625rem `#E3E8E5` "One hour on your roof and in your plant room with Leila Haddad, a written report within 3 working days. €190, credited to your first contract year."; one button (filled `#EEF1EF`, text `#2E3A36`, radius 999, 56 px tall, 0.9375rem 600) "Request a survey hour" → `mailto:survey@kukiclimate.example?subject=Survey%20hour`; under it "+31 10 555 0140 · Mon–Fri 07:30–17:30". Mobile `--sp-par: 6%`. | 45 words |
| — | footer | | Iron `#2E3A36` (continuing block 10's tone, ref dark footer `tok(a)`), 4 columns: wordmark + address; Pages; Hours; Legal (Privacy, Terms) + "Seasonal checklist" link. Text `#C9D1CD` 0.875rem. | |

English home ≥ 250 words: narrative paragraphs in blocks 2 (3 paragraphs), 5 (2 leads) and 7 (3 excerpts). Real total ≈ 900 words. CJK home ≥ 500 characters.

### Home photo positions (≥ 8 required; 11 visible)
P01 (1), P02 (2), P03 (4), P04 (5, default panel; P05 is the second panel), P06 (6), P07, P08, P09, P10, P11 (7, marquee; the aria-hidden duplicate set is the marquee's own copy, no other block reuses these), P15 (10). No photo appears twice in normal content on the home page.

### Comparison with the latest four home pages
| # | Ibuki Cardiology | Waku Exhibits | Misora Links | Kanjo College | **Kuki Climate** |
|---|---|---|---|---|---|
| 1 | hero: head band + photo + info bar | hero | split hero | framed rounded window right, vertical caption, stickers, route bar | **wide iron-framed window, giant light H1 inside bottom-left, 12-month year line, pinned** |
| 2 | problem statement | photo-filled statement | horizontal card rail | intro prose + portrait | **iron card riding over the pinned photo** |
| 3 | clinics T2 | halls rows edge-flush | rounds 3 cols | paper cards band | **ledger rows with flat colour panels + double chevrons** |
| 4 | ticker | planning hour band | full-bleed course | horizontal 12-week row | **parallax plant room with caption plate** |
| 5 | first visit T2 mirrored | photo band | season ruled rows | parallax pause | **pill toggle on grey band (quarterly / monthly)** |
| 6 | proof slate band | prices table | people | lecturer ledger | **timed survey hour list + portrait** |
| 7 | fees list | stories 3 cols | fee plan cards | fee table | **marquee photo strip + 3 log excerpts** |
| 8 | follow-up photo strip | request cards on photo | stories circle | stories | **price table** |
| 9 | people | — | journal | close band | **questions (details)** |
| 10 | news / close | — | visit | news | **request band on parallax photo** |
Why not alike: the nearest is Kanjo (also framed-window + sans + timeline-line). Kanjo's window is a 560×700 rounded (r48) portrait on a pale ground at the right with a vertical caption, outlined stickers and a fixed bottom route bar; ours is a near-full-width **square-cornered landscape window in an iron frame**, the H1 sits **inside** the photo, the year line is static in the first screen (not fixed), and the photo is pinned while a card rides over it. Kanjo has paper cards and a people ledger; we have no people block on home at all, and our rows carry flat colour panels (building types), not portraits. None of the four uses a pill toggle, a pinned KV with a ride-over card, or a double-chevron row. We have no stats band, no ticker, no 3-column story cards with photos, no news block on home (landing page).

---

## 4. Inner pages (≥ 8 pages)

Every inner page head = **small T3**: iron bar, then an iron frame 40 px wide holding a 1360×360 window (photo, overlay 38%), page title Manrope 300 `clamp(2.5rem, 5vw, 4.25rem)` white bottom-left inside the window, sub-line above it; under the window a 120 px iron strip with the year line (12 ticks, dots as noted per page). Mobile: window 16:10, title 2.25rem. Then pale ground, 240 px rhythm. Close every inner page with the request band (block 10 pattern, smaller: min-height 480, its own photo per page as noted, else iron solid).

1. **About** (`page-about`, head P12): founding in 2009 by Anneke Visser and Daichi Mori ("kuki" is Japanese for "air", Daichi's word from his training years in Osaka); why contracts not call-outs; "A day in the year" narrative (a typical **daily routine**: 07:00 depot briefing, 07:30 vans out, roofs before the heat, controls readings after 11:00, log written before leaving each building, 16:30 service desk hand-over); **T1 people rows 01–07** (section 8); P07 not used here — closing band solid iron.
2. **Contracts** (`page-contracts`, head P03): **full T2 toggle** Quarterly / Monthly with the visit calendar per month as ruled rows; what is not covered (parts at cost, listed in the report; major replacement quoted separately); P04 and P05 inside the panels; the log ("one binder and one shared PDF per building").
3. **Buildings** (`page-buildings`, head P07): **T1 rows 01–03 expanded**, each followed by a 3:2 photo (01 P13 office, 02 P18 hotel lobby, 03 P17 classroom) + two paragraphs on typical plant, typical contract, seasonal pressure points. Anchors `#offices`, `#retail`, `#clinics`.
4. **Survey** (`page-survey`, head P06): the 60-minute plan (same 5 lines as home, longer text), **T2 toggle On site / What you receive** (report contents: unit list with nameplates, condition grade per unit A–D, risks, recommended contract, first-year price), who comes (Leila Haddad + one technician), what to have ready (roof access, last year's records if any); P11 between sections; own request band (P15).
5. **Prices & terms** (`page-prices`, head P16): **T1 term rows** (12 months / 60 days / 4 hours), **T2 toggle** filtering the full price table (all rows visible when `:has` is unsupported), payment terms (quarterly invoices, 30 days), VAT line.
6. **Field notes** (`home.html` posts index, `archive.html` category, `tag.html`; head P09): T1 rows list of posts; 6 demo posts (section 8).
7. **Single article** (`single.html`): framed featured image (iron frame 24 px), title Manrope 300 3rem, date + category, 680 px text column, next/previous as two T1 rows.
8. **Contact** (`page-contact`, head P15): T1 rows 01 Request a survey (survey@kukiclimate.example), 02 Service desk for contract clients (desk@kukiclimate.example, out-of-hours line +31 10 555 0149 for contract clients), 03 Accounts (accounts@kukiclimate.example); address, hours, service area (60 km), a static map-like 1 px line drawing is **not** needed; no form required.
9. **Seasonal checklist** (`page-newsletter`, the landing "waitlist" page; head P10): four emails a year (March, June, September, November) with the checks a facilities manager can do between visits; email field + button (form allowed off the first screen of home; this is an inner page); year line marks the four months.
10. **Thanks** (`page-thanks`): T1 rows of next steps, year line only.
11. **Privacy** (`page-privacy`) and 12. **Terms** (`page-terms`): 760 px text, iron head without photo.

theme-meta `pages`: home, about, news (→ Field notes), article (→ first post), category (→ Building stories), tag (→ tag rooftop), newsletter (→ Seasonal checklist), contact, plus contracts, buildings, survey, prices. Exactly one `posts` role page (Field notes, empty).

---

## 5. Colour

Reference relationships (`tok(a)`): one quiet ground ~45%, two flat mid-tone panels (cool grey + sand), one dark band/footer, text one dark tone of the family. The design row fixes the iron palette (tetsu-iro `#2E3A36`) and the rules forbid defaulting to cream/beige, so the reference's warm brown family is moved into the iron family **keeping each role's lightness within ~5%** of the reference; only the dark band is darker (row-mandated iron). Reason for the shift: a warm brown/cream palette reads as interiors/renovation, and the row's iron colour is the brief.

| Role | Reference (`tok(a)`) | Kuki | Use | Share |
|---|---|---|---|---|
| Ground | `#F1EDE7` | `#EEF1EF` | page ground | ~45% |
| Text / headings | `#523423` | `#1F2926` | all text on light grounds, rules of T1 chevrons | text |
| Muted text | — | `#4A5652` | sub-lines, captions (contrast 7.4:1 on ground) | text |
| Panel A cool grey | `#C1C1B9` | `#C1C7C3` | T1 panels 01/03, T2 band | ~15% |
| Panel B sand | `#C5BCAA` | `#C6C0B2` | T1 panel 02, Field notes "Seasonal checks" panel | ~8% |
| Dark band / frame / footer | `#67422C` | `#2E3A36` (iron, row hex) | header, hero frame + year strip, concept card, request band overlay, footer | ~20% |
| Light on dark | `#F1EDE7` (KV title) | `#F4F6F5` / `#E3E8E5` | text on iron and on the dimmed photo | text |
| Hairline | `#C9C2B8` | `#B9C0BC` (on bands `#9AA39E`) | 1 px rules | — |
| Pill ground | `#EAE6DE` | `#EEF1EF` | T2 pill | <1% |
| Accent (ours; ref has none) | — | `#B8863B` brass | 4 quarterly dots on year lines, focus underline in menu | <1% |

Contrast: `#1F2926` on `#EEF1EF` 13.6:1; `#F4F6F5` on `#2E3A36` 11.2:1; `#1F2926` on `#C1C7C3` 9.6:1.
First-screen saturated share: target ≤ 8%, **hard cap 15%** (`scripts/check-first-screen.py`; quality gate 30%). Saturation only from the dimmed photo (muted grade) and the four brass dots; iron is low-chroma. No coloured fills larger than the CTA pill on the first screen.

---

## 6. Type

Direction **sans** (row `font_direction: sans`): Latin headings and body both sans; CJK Noto Sans TC / Noto Sans JP (黑體), never Serif/明體.
- Headings: **Manrope** (variable 200–800; ship 200, 300, 500, 600) — `"Manrope", "Noto Sans TC", "Noto Sans JP", "Helvetica Neue", Arial, sans-serif` (zh-TW) / `"Manrope", "Noto Sans JP", "Noto Sans TC", …` (ja).
- Body: **Source Sans 3** (400, 500, 600) — en/fr/de `"Source Sans 3", "Helvetica Neue", Arial, sans-serif`; zh-TW body `"Source Sans 3", "PingFang TC", "Microsoft JhengHei", sans-serif` (**no** bundled zh font, no JP font in the zh body stack, per check-themes); ja body `"Source Sans 3", "Hiragino Sans", "Yu Gothic", "Meiryo", sans-serif`.
- Display stacks `:root:lang(zh*)` heading = Manrope + bundled **Noto Sans TC** subset; `:lang(ja)` heading = Manrope + bundled **Noto Sans JP** subset (use the Hokuto/Hada subset workaround; the zh subset script is known broken).
- All fonts load through `theme.json` `fontFamilies` + `fontFace` (woff2 in `assets/fonts`, each listed in theme-meta `fonts[].files` with licence OFL), so the editor iframe and the front end render the same faces. Because style.css uses `:lang(` rules, copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it in functions.php.
- Scale (theme.json presets, rem): small 0.8125 · base 1.0625 (body, lh 1.85, ls 0.02em, `tok(b)` 1.8–2.3 / 0.02–0.05em) · medium 1.25 · large 1.75 · x-large 3 (section heads, `tok(b)` ~48 px) · xx-large 4.25 (inner page titles max) · **huge 6** (hero H1; max ≥ 4.25rem satisfied).
- Weights/line-heights: H1 300 / 1.02 / −0.02em; section head 300 / 1.2 / −0.01em; panel titles 300 / 1.2; numerals 200 / 1; row text 600 / 1.9 / 0.04em; body 400 / 1.85.
- CJK: heading sizes × 0.75, body line-height 1.85 (ja/zh body 1.9 allowed), letter-spacing 0.04em; fr/de `hyphens: auto` on body and headings ≤ x-large.

---

## 7. Photos (18, Grok, one at a time, Read each one)

Imagery: **photo** (real documentary photography, following the reference).

STYLE (exact string on every prompt):
`Documentary photograph, natural daylight, high-key and soft, slightly cool neutral grade with muted greys and grey-greens, 35mm lens at eye level, real working commercial buildings (rooftops, plant rooms, ductwork, service corridors), people in plain unbranded work clothes, candid and unposed, diverse adults, modern international European city, calm composition with generous negative space, fine film grain, no text, no lettering, no readable numbers or screens, no logos, no brand marks, no signage, no Japanese elements.`

Specs: webp ≤ 300 KB, ≤ 2000 px long side, no cut-outs. Regenerate on any text, logo, broken face/hands or style drift.

| ID | Subject / composition | Ratio | Used on (page → block) | Home |
|---|---|---|---|---|
| P01 | Flat commercial rooftop, morning: a technician (woman, 30s, grey work jacket, gloves) opens the side access panel of a large rooftop condenser; beside her a facilities manager (man, 50s, navy jumper) holds an open ring-binder service log; other rooftops soft behind. Subjects in the **right 55–80%**, bottom-left third calm (H1 area). | 16:9, 2000×1125 | Home → 1 hero | ✔ |
| P02 | Close-up from above: open service log on a clipboard resting on a condenser's top panel, a gauge manifold and pen beside it, a gloved hand writing a line (writing illegible, out of focus). | 4:5 portrait | Home → 2 concept card; Field notes post "What goes in the log" | ✔ |
| P03 | Wide plant room: two chillers, insulated pipework with valves, pale painted floor, high windows, one technician small in the far background. | 21:9 | Home → 4 parallax; Contracts → head | ✔ |
| P04 | Technician slides a fresh pleated filter into an open air-handling unit, side light. | 4:3 | Home → 5 quarterly panel; Contracts → quarterly panel | ✔ |
| P05 | Technician and facilities manager at an open controls cabinet, she points at relays and a thermostat module (no screens). | 4:3 | Home → 5 monthly panel; Contracts → monthly panel | ✔ |
| P06 | Survey walk: surveyor (woman, 40s) and facilities manager walking between rooftop units, she carries a closed tablet, both looking at a unit. | 4:5 portrait (0.78) | Home → 6 survey; Survey → head | ✔ |
| P07 | Condenser coil being rinsed with a low-pressure spray, fins glistening. | 4:3 | Home → 7 marquee; Buildings → head (crop 21:9) | ✔ |
| P08 | Technician on a step ladder clearing the condensate tray of an office ceiling cassette, ceiling tile lifted. | 4:3 | Home → 7 marquee; Field notes post "Drains before summer" | ✔ |
| P09 | Gloved hands checking fan-belt tension inside an AHU. | 4:3 | Home → 7 marquee; Field notes → head | ✔ |
| P10 | Macro: refrigerant gauge hoses connected to service valves on copper pipe, dials blurred. | 4:3 | Home → 7 marquee; Seasonal checklist → head | ✔ |
| P11 | Duct inspection hatch open, a torch beam inside a clean galvanised duct. | 4:3 | Home → 7 marquee; Survey → between sections | ✔ |
| P12 | Depot morning briefing: five people around a workbench with plans and binders, vans' open doors behind (no logos). | 3:2 | About → head | |
| P13 | Office building from the street: stone and glass, six floors, rooftop units visible on the roofline, plane trees. | 3:2 | Buildings → row 01; post "Halvorsen House" | |
| P14 | Bright clinic corridor, ceiling supply diffusers, a nurse walking away. | 3:2 | post "Noordpoort Health Centre" | |
| P15 | Early-morning rooftop: a row of four units, soft haze over the city. | 16:9 | Home → 10 request band; Contact → head; Survey → request band | ✔ |
| P16 | Service van rear doors open, neat shelves of filters and parts (no logos), technician loading a filter box. | 3:2 | Prices & terms → head | |
| P17 | Empty classroom in afternoon light, a ceiling-mounted cassette unit. | 3:2 | Buildings → row 03; post "Maasweg Primary School" | |
| P18 | Quiet hotel lobby before opening, linear ceiling grilles, staff member at the desk. | 3:2 | Buildings → row 02 | |

18 photos (within 12–18). Home uses 12 files (11 visible at once + P05 behind the toggle). No page uses the same photo twice.

---

## 8. Fixed numbers and facts (identical on home, inner pages and all five languages)

- Name: Kuki Climate B.V. Founded **2009** by Anneke Visser and Daichi Mori. Office/depot: Koelhuisweg 14, 3089 KN Rotterdam, Netherlands. Phone +31 10 555 0140; contract clients' out-of-hours line +31 10 555 0149. Emails `survey@`, `desk@`, `accounts@kukiclimate.example`. Service area: within 60 km of Rotterdam.
- Hours: office and service desk **Mon–Fri 07:30–17:30**; survey hours booked **Tue–Thu, starts 08:00–15:00**; out-of-hours line for contract clients 24/7.
- People (7): **Anneke Visser** (co-founder, managing engineer) · **Daichi Mori** (co-founder, controls engineer) · **Leila Haddad** (contract manager, leads every survey hour) · **Tomás Ribeiro** (lead service technician, rooftop plant) · **Samuel Mensah** (refrigeration technician, F-gas certified) · **Marta Kowalska** (service desk coordinator) · **Jonas Becker** (second-year apprentice technician).
- Contracts: 12 months, 60 days' notice. Quarterly = **4 visits** (Mar, Jun, Sep, Nov; Mar = cooling start-up, Nov = heating changeover). Monthly = **12 visits**. Response target for contract clients: on site within **4 hours** on weekdays 07:00–19:00, next morning otherwise (a target, never "guaranteed"). Report after a survey within **3 working days**; proposal valid 30 days; we call back to book within 2 working days.
- Survey hour (60 min): 0–10 walk the building with the facilities manager and the existing log · 10–30 roof and plant room: every unit, nameplates, condition · 30–45 controls, filters, drains, refrigerant · 45–55 notes at the table: risks and what a year would cover · 55–60 agree the next step.
- Prices (EUR, excl. VAT 21%), 7 rows: Survey hour and written report **€190** (credited to year one) · Quarterly, up to 4 units **€2,400 / year** · Quarterly, 5–12 units **€4,800 / year** · Monthly, up to 12 units **€8,400 / year** · Monthly, 13–30 units **€14,800 / year** · Each extra unit **€320 / €560 per year** (quarterly / monthly) · Out-of-hours call-out (contract clients) **€95 / hour**, parts extra. Local number formats allowed (de "2.400 €", fr "2 400 €"); amounts never converted.
- Stories (3, category **Building stories**): **Halvorsen House** (six-floor office, 9 rooftop units, quarterly since 2019, monthly in Jun–Aug) · **Noordpoort Health Centre** (two-floor clinic, 2 AHUs + 6 cassettes, monthly since 2021) · **Maasweg Primary School** (3 rooftop units + classroom cassettes, quarterly since 2022, changeovers in school holidays). Plus 3 posts in **Seasonal checks**: "Drains before summer", "What goes in the log", "The November changeover". Tags: rooftop, filters, controls, changeover.
- Newsletter: "Seasonal checklist", four emails a year (Mar, Jun, Sep, Nov).
- No claims of guaranteed results, awards, savings percentages, real clients or media.

---

## 9. Scroll motion (sp-scroll; spec `pipeline/scroll-effects-spec.md`)

Chosen from stage-a candidates (reference = major-scale.jp):
| Effect | sp class | Where | Reference trigger / time / easing |
|---|---|---|---|
| Section fade/rise | `sp-reveal sp-reveal--up` (24 px) on section heads and the survey list; `sp-stagger` parent on T1 rows (each row `sp-reveal--up`) and the three log columns | blocks 3, 5 (head + panels group), 6, 7 (text columns only), 9 head | GSAP ScrollTrigger, start ≈ 80% of viewport, 0.8–1 s, 20–40 px, power2.out → sp default 24 px, stagger 0.12 s |
| Auto-scrolling image strip | `sp-marquee` | block 7 photo strip P07–P11 (children no sp-reveal) | Splide AutoScroll, continuous linear → 40 s linear infinite (`--sp-marquee-dur` if available, else default 30 s accepted) |
| Parallax (required) | `sp-parallax` | block 4 Cover (P03, `--sp-par: 10%`, mobile 6%), block 10 Cover (P15, `--sp-par: 8%`, mobile 6%) | reference: photo stays still while content moves over it (pinned KV + Lenis smooth scroll); our plant room / rooftop photo moves slower than the page, foreground plate/text static |
Hero: no sp-reveal; its veil/H1/year-line keyframes are CSS on load (section 2), and the pinned KV is plain `position: sticky` (no scroll listener). Not animated: price table, questions, forms, legal text. `.sp-reveal` count ≤ 60% of the number of home blocks; hero contains 0.
Parallax must keep working on mobile 390 (check-parallax.mjs ≥ 6 px difference, ≤ 1 px with reduced motion).

---

## 10. Responsive rules
- 390 px first screen: no vertical text, no absolutely positioned labels over text; H1/sub-line in normal Cover flow; year-line labels single letters 0.6875rem with ≥ 24 px per month; CTA full-width below. No horizontal overflow at 390 and 1280 (marquee track clipped by `overflow: clip` on its section).
- Price table ≥ 782 px: `alignwide` full container width (1304 px at 1440, 100% − 64 px at 800), `table-layout: auto`, price column `white-space: nowrap; text-align: right; width: 1%`, never clipped or scrolled at 800 and 1280.
- Every table < 782 px becomes stacked: each `tr` a block with 1 px rule, cells `display: block`, item 600, includes line muted, price on its own line right-aligned nowrap; `thead` visually hidden.
- T1 rows < 782 px stack (panel below text, chevron hidden). T2 panels stack. Sticky KV off < 782 px.

---

## 11. Similarity targets (≈ 80% to the reference; numbers from `reference-tokens.md`)
| Dimension | Reference | Kuki |
|---|---|---|
| Ground / panels / dark | `#F1EDE7` / `#C1C1B9` + `#C5BCAA` / `#67422C` (`tok(a)`) | `#EEF1EF` / `#C1C7C3` + `#C6C0B2` / `#2E3A36` (lightness within ~5% except row-mandated iron) |
| Colour shares | ground 45, panel A 15, panel B 10, dark 8 | 45 / 15 / 8 / 20 (dark larger: frame + card) |
| KV photo | full-bleed 1425×998, dimmed ~35%, radius 0 (`tok(e)`) | window 1360×628 inset 40 px in iron, overlay 38%, radius 0 |
| KV title | ~115 px light, bottom-left, white | 6rem (96 px) Manrope 300, bottom-left inside photo, `#F4F6F5` |
| Logo position | small, centred top | wordmark centred in 72 px bar |
| Opening motion | cover lifts ~1.2 s, expo/power2 out; title rises | veil `translateY(−101%)` 1.2 s `cubic-bezier(.22,1,.36,1)`; H1 rises 24 px 0.9 s |
| Pinned KV + concept card | card 651 px centred, dark, photo 469×598 inside, 3 paragraphs | card 652 px, iron, P02 470×600, 3 paragraphs, radius 12 |
| Section heading | ~48 px light, centred, tiny sub-label | 3rem Manrope 300 centred + 0.8125rem sub |
| Row numerals | ~48 px light | 3rem Manrope 200 |
| Row grid | 61 / 171 / 695 / 822–1364, rows ~355 px, 1 px rules | 110 px / 1fr / 64 px / 42%, rows ≈ 356 px, 1 px `#B9C0BC` |
| Panels | flat, radius 0, no shadow, alternating grey/sand | same, `#C1C7C3` / `#C6C0B2` |
| Pill toggle | 369×42, r999, `#EAE6DE`, 1 px divider, on grey band | 372×42, r999, `#EEF1EF`, 1 px × 18 divider, on `#C1C7C3` band |
| Section padding | ~243 px top, 243–381 bottom | 240 / 240 |
| Container | ~1300 px | 1304 px |
| Body type | sans, lh 1.8–2.3, ls 0.02–0.05em | Source Sans 3, lh 1.85, ls 0.02em |
| Reveal | ScrollTrigger 20–40 px, 0.8–1 s, power2.out | sp-reveal--up 24 px, sp default timing |
| Marquee | Splide AutoScroll linear | sp-marquee 40 s linear |
| Masks / clip | none | none |
Own material only: photos, copy, wordmark and the double-chevron SVG are ours.

---

## 12. Home acceptance checklist (stage-1 review compares against this)
1. 1440×900 first screen shows: iron bar with centred wordmark + anchor menu + outline CTA pill; iron-framed window (40 px sides) with dimmed P01; sub-line + H1 Manrope 300 ≥ 5.5rem bottom-left inside the photo; iron year strip with 12 ticks, 12 small dots, 4 brass dots and the CTA. Nothing else.
2. With `?sp-motion`: veil lifts, H1 rises, year line draws, dots pop; with `?sp-static`/reduced motion: final state immediately, no veil.
3. Scrolling at 1440 (`sp-motion`): the window stays pinned while the iron concept card (652 px, P02 inside, 3 paragraphs) rides over it; with `sp-static` the card simply follows.
4. T1 rows 01–03 with light 3rem numerals, 3-line text, visible double chevrons, flat panels (grey, sand, grey) ≥ 40% width, full-width 1 px rules.
5. Parallax block 4 (P03) and block 10 (P15) pass `check-parallax.mjs` on desktop and mobile.
6. T2 pill (372×42, r999, divider) on the grey band really swaps Quarterly/Monthly panels.
7. Survey list: 5 timed lines 0–10 … 55–60 + P06 portrait.
8. Marquee strip P07–P11 moves (sp-motion), static in sp-static; three log excerpts name Halvorsen House, Noordpoort Health Centre, Maasweg Primary School.
9. Price table: 7 rows, full width at 800 and 1280, prices nowrap right-aligned, not clipped; stacked at 390.
10. 6 questions as details rows; request band with one button "Request a survey hour"; the CTA label is identical in header, block 6, block 10.
11. ≥ 8 images visible on home (11), no duplicates; ≥ 250 English words; numbers match section 8.
12. First-screen saturated share ≤ 15% (target ≤ 8%); no horizontal overflow at 390/1280; 390 first screen has no overlapping text and no vertical text.
13. Editor and front end show Manrope / Source Sans 3 (and Noto Sans TC/JP for zh-TW/ja headings) identically.
14. `auto-gates.mjs … en … 1 1` passes.
