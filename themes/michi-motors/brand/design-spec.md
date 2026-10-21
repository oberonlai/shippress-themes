# Michi Motors: design spec (stage B, binding for implementation)

Slug `michi-motors`, family-run car dealership (new cars + approved used, service & inspection, three locations, named sales team, test-drive booking). Type store, WooCommerce optional (vehicles = demo products if Woo is on; static pattern fallback if off). References: **Nissan Creative Services** (https://www.nissan-nics.co.jp/, headline + accent system) and **Renoca by FLEX** (https://www.flexnet.co.jp/renoca/, dimmed front-on vehicle photo + nav). See `reference.md` and `ref/*.png`. Borrow structure, technique, colour relationships only: no copy, photos, logos.

Fixed brand facts (all pages, all languages later): Michi Motors, founded **1987** by **Kenji Michida** (service bay first, sales later); run today by **Lena Michida-Hart** (managing director) with **Marcus Bell** (sales lead), **Priya Raman** (approved used manager), **Tomás Ortega** (service manager). Head site **Sacramento, California**. Currency **USD**. No real car brands, models, awards, media, ratings or customer counts.

---

## 1. Signature techniques (three; each must be obvious in one glance)

### T1. Staggered light-grotesque headline split across the photo (Nissan CS hero, N1)
- Reference: "Empowering / Mobility, ··· Ensuring / Quality." Huge light sans (~150px cap block, about 10vw), white, 3–4 lines broken between the **left half and the right half**: lines 1–2 flush left, line 3 starts at the horizontal centre, line 4 indented to ~50% too and sits lower. It overlaps the photo; tight line-height (~0.95); tracking slightly negative.
- Michi: home cover headline in en **"Driven / here since, ··· nineteen / eighty-seven."** → implement as 4 spans: L1 "Driven" left, L2 "here since," left, L3 "nineteen" starting at 50% vw on the same baseline as L2, L4 "eighty-seven." starting at 50% (one line below L3). Libre Franklin **300**, `font-size: clamp(4.25rem, 9vw, 8.5rem)` (theme preset `huge` = 8.5rem, max size ≥ 4.25rem satisfied), line-height 0.95, letter-spacing -0.02em, colour `#F4F6F8`.
- Grid: CSS grid 2 equal columns over the full 1440 width with 40px side padding; L1+L2 in col 1, L3+L4 in col 2 with `margin-top` so L3 shares L2's baseline. Never `text-align:center`.
- Must not be diluted: weight stays 300 (not 500+ / not serif); the right-half lines must start at the centre line (not right-aligned, not stacked under the left lines); size ≥ 7rem at 1440; the text overlaps the photo (no solid box behind it).

### T2. Crimson short rule + 3-line lead, "↓ Explore" bottom-left and outline ring bottom-right (Nissan CS N2 + N3 + N4)
- Reference: a 28px crimson line, then a 3-line small lead (16px) left-aligned under the headline; bottom-left a tiny crimson ↓ + "Explore" (17px, medium); bottom-right a 66px outline circle (1.5px light grey ring, crimson glyph inside). Crimson used **only** on these tiny marks (<1%).
- Michi: (a) under the cover headline, left col, `::before` rule 28×2px `#C42B3A`, gap 14px, lead in Libre Franklin 400 1rem/1.6, 3 lines max, width 20rem. (b) Cover bottom-left at 40px/40px: "↓ See the forecourt" (arrow crimson, text white 1.0625rem 500) anchors to block 3. (c) Cover bottom-right: 66px ring (1.5px `rgba(255,255,255,.55)`), crimson → arrow glyph, links to Test Drive (`aria-label="Book a test drive"`).
- **The rule + lead and the ring are a site-wide system**: every section head on the home page = small uppercase label (0.75rem, 0.2em tracking, steel) → heading → crimson 28px rule + lead. Every section ends with a 66px outline ring arrow + text link (ring `#14171F` 1.5px on light grounds, white on dark), crimson glyph.
- Must not be diluted: the rule stays crimson and short (24–32px, never full width, never grey); the ring stays an outline circle 60–72px with crimson glyph; crimson never fills a button or background.

### T3. Full-bleed dimmed front-on vehicle photo with transparent wide-tracked uppercase nav and a divider before utility links (Renoca R1 + R2)
- Reference: the vehicle straight-on, centred in the lower-middle, whole photo graded down with a navy-grey veil (~35–45%); nav small uppercase sans with wide letter-spacing in a single row at the right, a thin vertical rule (1px, ~18px tall) separating the last utility item(s); script logo far left.
- Michi: cover photo S1 (car front-on, centred, lower 55% of the frame, dusk forecourt) full-bleed 100svh (cap 900px), overlay `linear-gradient(180deg, rgba(17,19,28,.55) 0%, rgba(17,19,28,.30) 45%, rgba(17,19,28,.62) 100%)`. Header transparent over it: wordmark left "Michi Motors" (Gelasio italic 600 1.5rem, plain white), nav right: NEW CARS · APPROVED USED · SERVICE · LOCATIONS · FINANCE · JOURNAL │ TEST DRIVE · (916) 555-0187 ; Libre Franklin 600 0.75rem, letter-spacing 0.14em, uppercase, gaps 30px, 1px×18px divider `rgba(255,255,255,.5)` before TEST DRIVE. On scroll the header becomes solid `#14171F`. Mobile < 960px: wordmark + two-line menu icon opening an overlay; same uppercase list.
- Second full-bleed dimmed band on the home page (block 5) and the close (block 9) reuse the same grade: the car or subject centred front-on.
- Must not be diluted: photo full bleed edge to edge (no rounded card, no inset); vehicle front-on and centred, not 3/4 view; veil dark enough that white type passes 4.5:1 but the car is still clearly visible; nav stays uppercase spaced Latin with the divider.

### Continuation to inner pages (stage 2; required)
Every inner page head = **T3 band** (full-bleed dimmed photo, 62svh, cap 620px, transparent header) + **T1 staggered 2–3 line heading** (Libre Franklin 300, `clamp(3.4rem, 6.6vw, 6rem)`, first line left col, last line from centre) + **T2 rule + lead** bottom-left and ring bottom-right; every page body section ends with the T2 ring link.
| Page | T3 head photo | T1 heading (en) | T2 ring target / other |
|---|---|---|---|
| New Cars (shop / archive-product) | V7 front-on | "New on / the forecourt." | → Test Drive; product cards keep the label + rule head |
| Single vehicle (single-product) | its own V image as T3 band (front-on) | vehicle name split across halves | spec list (year, miles, price) in 2-col definition list, ring → Test Drive |
| Approved Used | S3 | "Checked, / then signed off." | → Finance & Warranty |
| Service & Inspection | S4 | "Booked in, / sorted out." | → Contact |
| Locations | S5 | "Three doors, / one family." | each location row ends with a ring → map link |
| Our Team | S8 | "Names you'll / remember." | → Contact |
| Finance & Warranty | S9 | "Clear numbers, / no surprises." | → Approved Used |
| Journal (index/archive/single) | S10 on index; single = featured image band | "From the / service bay." | → Journal index |
| Contact / Test Drive | S6 | "Take one / for a drive." | ring = tel link; form allowed (not on a first screen of home) |
| About (story) | S2 | "Since / nineteen eighty-seven." | → Our Team |

---

## 2. Colour (from Nissan CS + Renoca measurements; graphite / steel / one signal accent)

| Role | Hex | Source | Use | Share |
|---|---|---|---|---|
| Graphite (base dark) | `#14171F` | Nissan/Renoca dark `#11131C` | header on scroll, dark bands, footer, ring outlines, headings on light | ~30% of home |
| Steel (main) | `#3A4A5E` | Nissan steel blue `#38485F` | labels, secondary dark band (block 7), photo veil tint, link underline | ~10% |
| Light steel (secondary) | `#A3B0BC` | Nissan/Renoca `#A2B1BB` | rules, meta text on dark, borders | ~5% |
| Mist (light ground) | `#EEF1F4` | Renoca/Nissan `#C5CBD4` lightened | alternate light sections (blocks 3, 6, 8) | ~25% |
| White | `#FFFFFF` | — | page ground | ~30% |
| Signal crimson (accent) | `#C42B3A` | Nissan crimson `#C8102E`, slightly muted | T2 rule, arrows, ring glyph, price "Reserved" dot only | <1% |
| Body ink | `#1F232B` / muted `#5B6573` | derived | text | — |

- Not beige; not Kagi indigo, Hatsumei `#0D3770`, Nami green, Hibi white+warm band+teal. Steel is grey-blue (S≈0.25), never a saturated navy.
- First-screen saturated area: refs 8.8% / 0.2% → **gate `check-first-screen.py` at 9%**, target ≤ 5%: grade S1 cool and low-saturation (car paint graphite, silver or muted sage, never red/yellow), no coloured UI except crimson marks.
- Contrast: white on graphite 17:1; `#A3B0BC` on graphite 8:1; crimson only for non-text marks (or ≥ 1.0625rem 500 on white, 5.3:1).

Typography: **Libre Franklin** (display 300 for T1, UI 500/600 for nav/labels/prices, body 400) + **Gelasio** (wordmark italic, narrative lead paragraphs and pull lines 400/italic). Sizes: small 0.8125rem, base 1rem (body 1.0625rem/1.7), medium 1.25rem, large 1.75rem, x-large 2.75rem (section headings, Libre Franklin 300, line-height 1.05), xx-large 4.25rem (band headings), huge 8.5rem (cover T1). Section headings are left-aligned. One top menu only. Prices: Libre Franklin 500 tabular-nums.

---

## 3. Home page (stage 1, en only)

### First screen (1440×900)
Full-bleed S1 (T3) with dimmed veil, transparent uppercase nav with divider, T1 staggered 4-line headline in the upper 60% (left col lines 1–2 from y≈130px, right col lines 3–4), T2 rule + 3-line lead under the left lines ("A family dealership in Sacramento, Davis and Roseville. New cars, approved used and a service bay that has been open since 1987."), "↓ See the forecourt" bottom-left, 66px ring bottom-right. The car sits centred below the headline; the right-half lines may overlap the car roof/windscreen by ≤ 15% of the car height. Forbidden: table, form, search box, filled buttons, centred giant word.

### Block order
| # | Pattern | Purpose | Layout & photos | Copy |
|---|---|---|---|---|
| 1 | `front-cover` | mood + entry | as above, S1 | ~35 words |
| 2 | `front-family` | who we are (narrative) | White. 12 cols: text cols 1–6 (label "SINCE 1987" → heading "Three generations / under one sign." x-large → T2 rule + Gelasio lead → 2 paragraphs, Kenji / Lena named); photo S2 cols 8–12, 4:5, square corners, bottom-aligned with the text; small caption under the photo (Gelasio italic 0.9rem). Ring → About. | ~120 words, 2 paragraphs |
| 3 | `front-forecourt` | stock, lead with cars | Mist ground. Head (label "ON THE FORECOURT", heading "This week's / pick of five.") then a **feature + ledger** layout: left cols 1–7 V1 large 3:2 with name, year · miles · price under it in one line; right cols 8–12 a ledger of 4 rows (V2–V5): 120×80 thumb left, name (1.125rem 500) + "2023 · 18,400 mi" (muted) middle, price right (tabular), 1px `#A3B0BC` rule between rows, each row a link. Below ledger: "All 8 vehicles →" + ring → New Cars. (Woo on: V1–V5 = featured products; off: static.) | names + numbers only |
| 4 | `front-checked` | approved used promise | White. Two columns of text with a big light numeral line: left cols 1–5 head ("APPROVED USED", "Checked, / then signed off.", rule + lead); right cols 7–12 three stacked statement rows separated by rules, each = large Libre Franklin 300 2.75rem figure + one sentence: "152-point inspection", "12-month / 12,000-mile warranty", "7-day exchange". Under the rows a wide 21:9 photo S3 (technician with the inspection sheet beside a raised car) spanning cols 1–12. Ring → Approved Used. | ~90 words |
| 5 | `front-service` | service bay (T3 reprise) | **Full-bleed dimmed band** S4 (service bay, car front-on on the lift, centred), 80svh cap 760px; T1 staggered 2-line heading "Booked in, ··· sorted out." (xx-large, line 2 from centre); bottom-left T2 rule + lead (hours Mon–Fri 7:30–18:00, Sat 8:00–14:00; MOT-style state inspection, tyres, EV/hybrid servicing); bottom-right ring → Service. | ~60 words |
| 6 | `front-locations` | three sites | Mist ground. Head ("LOCATIONS", "Three doors, / one family."). Three **horizontal rows** full content width, each: photo 4/12 (3:2; S5 Midtown, S6 Davis, S7 Roseville), then name (x-large 300), address, hours, phone across cols 5–11, ring (map link) at col 12; 1px rule between rows. Not cards, no map embed. | ~75 words |
| 7 | `front-floor` | the people (not a grid) | Steel `#3A4A5E` band, white type. Wide 16:9 photo S8 (three staff talking with a customer beside a car, candid) cols 1–7; right cols 8–12: Gelasio italic 1.75rem pull line ("We'd rather sell you the right car than the expensive one." — Marcus Bell, sales lead), then a paragraph naming Marcus, Priya and Tomás and their roles; ring → Our Team. | ~80 words |
| 8 | `front-journal` | notes | White. Head ("JOURNAL", "From the / service bay."). Two posts only, side by side, unequal: post A cols 1–7 (image V6 3:2), post B cols 8–12 (image S9 4:5); category label + date-only + title + 1-line excerpt. | Query loop, 2 posts |
| 9 | `front-close` | test drive (T3 + T1 close) | Full-bleed dimmed S10 (car front-on on an open road at dusk, centred), 70svh; T1 3-line staggered "Take one ··· for a / drive." (xx-large); T2 rule + lead "Pick a car, pick a time, bring your licence. Thirty minutes, any of our three sites." + phone; ring → Contact/Test Drive. Followed by footer (graphite). | ~40 words |

English home ≥ 250 words; narrative paragraphs in #2 (2), #4 (1), #7 (1) = ≥ 3 paragraphs.

**Home photo positions: 17** — S1 · S2 · V1 V2 V3 V4 V5 · S3 · S4 · S5 S6 S7 · S8 · V6 S9 · S10 (+ footer none). No repeats.

### Comparison with the last three themes
| # | Hibi Wear (#260) | Nami (#252) | Hatsumei (#250) | **Michi Motors** |
|---|---|---|---|---|
| 1 | fog photo, captions at thirds | two photos + centre title column | prototype photo + deep blue bottom band | **dimmed front-on car, staggered 4-line light headline split L/R, ring** |
| 2 | product line-up 4 cols | intro | story | **family narrative + 4:5 photo** |
| 3 | idea (photo straddling band) | paths | attorneys (people) | **feature car + ledger rows** |
| 4 | before/after split | placement | practice | **three statement figures + 21:9 photo** |
| 5 | fabric masonry | quote | ways | **full-bleed dimmed service band w/ staggered heading** |
| 6 | city photo + narrative | consultants | chapters | **three horizontal location rows** |
| 7 | promise numbers on band | journal | fees | **steel band: wide photo + pull quote naming staff** |
| 8 | journal (3) | close | notes | journal (2, unequal) |
| 9 | close | — | close | close: dimmed road band + staggered heading |
Why not alike: Michi alternates dark full-bleed photo bands (1, 5, 9) with light text-led sections, which none of the three do; there is no 4-col product row (Hibi), no centre column/arcs/double photos (Nami), no polygons/(001)/fee table/people grid (Hatsumei). Its marks (light staggered headline, crimson short rule, outline ring, uppercase divider nav) share nothing with Hibi gold dot/band/tabs, Nami, Hatsumei or Kagi. No 4-person grid, step grid, timeline, dashboard, side rail, collage, cutouts.

---

## 4. Inner pages (stage 2; each page = T3 head band + T1 + T2 per section 1)
1. **New Cars** (archive-product / taxonomy / search): ledger-style list (thumb, name, year·miles, price, ring) toggled with a 3-col card grid on desktop; category chips New / Approved Used / Hybrid & EV (outline, graphite active).
2. **Single vehicle**: T3 band with its V image; spec list (year, mileage, fuel, transmission, colour, location), price, "Book a test drive" ring + text, warranty line from section 6; related vehicles ledger.
3. **Approved Used**: 152-point check explained in 4 paragraphs (not a step grid), the three figures rows from home #4, S3 wide, list of V2–V5,V8.
4. **Service & Inspection**: hours, services list in two text columns, price lines (oil & filter service $119, state safety inspection $39, EV/hybrid health check $89), S4 head + S7 inline.
5. **Locations**: the three rows from home #6 expanded (address, hours, phone, what each site does), map link per row.
6. **Our Team**: 5 named people as alternating text rows with one wide S8 photo (no portrait grid).
7. **Finance & Warranty**: APR from **4.9%** example, 12-month/12,000-mile warranty, optional 36-month extended **$1,190**, 7-day exchange; example payment line, disclaimer paragraph.
8. **Journal**: index (first post large, then 2-col list), archive, single.
9. **Contact / Test Drive**: three location lines, phone, email, hours; simple form allowed here.
10. **About**: 1987 story, three chapters as paragraphs (not a timeline), S2.
11. Cart / checkout / account: small T1 head without photo band (graphite strip 200px), totals column on Mist.

---

## 5. Photos (18, Grok, one at a time; Read each; regenerate any with text, logos, plate characters, broken faces/hands, warped bodywork)

STYLE (exact string, every prompt):
`photorealistic editorial photograph, 35mm lens at f/1.8, cool blue-grey dusk and soft window light, modern international car dealership setting, generic unbranded modern cars with no badges, no logos, no text, no lettering, blank number plates, muted graphite, silver, steel blue and soft white palette, fine film grain, diverse adults, calm candid moment, no Japanese elements`

| ID | Subject / composition | Use (each once per page) | Stage 1 |
|---|---|---|---|
| S1 | graphite hatchback straight front-on, centred in the lower half, on a wet dusk forecourt, showroom glass lit behind, lots of dark sky in the upper half, 16:9 | Home cover | ✔ |
| S2 | older man and adult daughter talking beside a silver sedan in a bright showroom, 4:5 | Home family; About head | ✔ |
| S3 | technician with a clipboard beside a car on a lift, wide 21:9 | Home checked; Approved Used head | ✔ |
| S4 | clean service bay, car front-on on a two-post lift, centred, symmetrical, 16:9 | Home service band; Service head | ✔ |
| S5 | glass-front urban showroom at dusk, lit, 3:2 | Home locations (Midtown); Locations head | ✔ |
| S6 | low suburban dealership building with trees, morning, 3:2 | Home locations (Davis); Contact head | ✔ |
| S7 | open forecourt with a row of cars under light poles, dusk, 3:2 | Home locations (Roseville); Service inline | ✔ |
| S8 | three staff and a customer talking beside a car, candid, 16:9 | Home floor; Our Team head | ✔ |
| S9 | hands holding a car key fob over a desk with paperwork, window light, 4:5 | Home journal post B; Finance head | ✔ |
| S10 | muted sage SUV front-on on an empty two-lane road at dusk, centred, 16:9 | Home close; Journal index head | ✔ |
| V1–V8 | one vehicle each, three-quarter front view in the showroom or forecourt, 3:2, colours per section 6 | product images; Home V1–V5 forecourt, V6 journal post A; V7 New Cars head | V1–V6 ✔ |

Stage 1 generates **16** (S1–S10, V1–V6); V7–V8 in stage 2. Total 18. No cutouts. ≤ 300 KB, ≤ 2000 px, readme line per image.

## 6. Fixed numbers (identical everywhere)

| # | Vehicle (fictional) | Year | Price | Mileage | Status | Image |
|---|---|---|---|---|---|---|
| 1 | Arden Tourer 2.5 Hybrid (wagon, graphite) | 2026 | $36,900 | 12 mi | New | V1 |
| 2 | Corvel Compact SE (hatchback, silver) | 2023 | $21,450 | 18,400 mi | Approved used | V2 |
| 3 | Halden 4 AWD (mid SUV, steel blue) | 2022 | $28,900 | 31,200 mi | Approved used | V3 |
| 4 | Lumen E-Hatch (EV, white) | 2025 | $27,800 | 6,900 mi | Approved used | V4 |
| 5 | Norvik Sedan LX (sedan, dark grey) | 2021 | $19,750 | 42,600 mi | Approved used | V5 |
| 6 | Pacer Van 7 (seven-seat MPV, sage) | 2026 | $41,200 | 9 mi | New | V6 |
| 7 | Arden Crossover 2.0 (crossover, silver) | 2026 | $33,400 | 15 mi | New | V7 |
| 8 | Corvel Estate Touring (wagon, black) | 2020 | $16,900 | 58,300 mi | Approved used | V8 |

- Approved used: **152-point inspection**, **12-month / 12,000-mile warranty**, **7-day exchange**; extended 36-month warranty **$1,190**; finance APR from **4.9%** (representative, subject to approval).
- Service: oil & filter $119, state safety inspection $39, EV/hybrid check $89.
- Locations (fictional addresses): **Midtown (head)** 2140 J Street, Sacramento, CA 95816 · (916) 555-0187; **Davis** 815 Olive Drive, Davis, CA 95616 · (530) 555-0142; **Roseville** 3300 Eureka Road, Roseville, CA 95661 · (916) 555-0263.
- Sales hours Mon–Sat 9:00–19:00, Sun 11:00–17:00; Service Mon–Fri 7:30–18:00, Sat 8:00–14:00. Email hello@michimotors.example.
- Founded 1987 (Kenji Michida), Sacramento.

## 7. Home acceptance checklist (self-review)
1. First screen: full-bleed dimmed **front-on centred** car; uppercase wide-tracked nav with divider before TEST DRIVE; T1 headline 4 lines, weight 300, ≥ 7rem at 1440, lines 3–4 begin at the centre line; crimson 28px rule + 3-line lead; "↓" label bottom-left; 66px outline ring bottom-right. No centred giant word, no table/form/search, no filled button. `check-first-screen.py` saturated ≤ 9%.
2. T2 system visible on every home section: label → heading → crimson short rule + lead; each section ends with a ring link. Crimson appears only as small marks.
3. T3 reprised as full-bleed dimmed bands in blocks 5 and 9 with staggered headings.
4. Block order = section 3; forecourt shows feature car + 4 ledger rows with exact numbers from section 6; locations are 3 horizontal rows; floor is a steel band with one wide photo (no people grid).
5. Colours: white/Mist/graphite dominant, steel band once, no beige, no saturated fields, no navy/green/teal main.
6. 17 photo positions, no image twice, all same STYLE, no text/logos/plate characters, no warped cars or hands.
7. ≥ 250 English words, ≥ 3 narrative paragraphs; numbers match section 6; no real brands/awards.
8. Max font size ≥ 4.25rem in theme.json; one top menu; no side rail, collage, cutouts, entrance animations.
9. Mobile 390px: T1 lines stack left (L3/L4 indent 18vw), ring and ↓ stay, no horizontal overflow.
