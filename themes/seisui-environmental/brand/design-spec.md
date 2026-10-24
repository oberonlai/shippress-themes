# Seisui Environmental: design spec (stage 1, binding for implementation)

Slug `seisui-environmental`, environmental consultancy for landowners and municipal clients, type **business** (WooCommerce-compatible declared, not required). Row b9-6: archetype `sticky-media`, hero `text-left-photo-right`, nav `split`, first screen `top-bottom-halves`, page structure `metrics-ledger`, film-grain real photography.
Reference: **R1 Dorokogyo** https://www.dorokogyo.co.jp/ (S5-Style, civil/land works). Measurements in `reference-tokens.md` (tokens quoted below as `[a]…[g]`). Borrow structure, technique, proportions and colour relationship only; no copy, illustrations, photos or logo.

Fixed brand facts (every page, all five languages): **Seisui Environmental**, founded **2009**, office and sample store at **14 Millrace Lane, Alder Bridge** (fictional river town on the **River Wend**). Hours **Mon–Fri 08:30–17:30**, field days by arrangement, closed weekends and public holidays. Phone **+1 555 0142 300**, hello@seisui-environmental.example. Currency **USD** in every language (no conversion).

---

## 1. Signature techniques (3, all obvious at a glance)

### T1. Ghost English word behind every section heading (R1 section heads, token [b][f])
- R1: a huge Latin word (Roboto 700, 183.46px, lh 155.9px, accent colour at opacity 0.15) centred behind the 48px Japanese heading (ls 0.1em), the heading overlapping the ghost word's lower half; heading top sits ~85px below ghost top.
- Ours, home sections INTRO/SERVICES/LEDGER/PROCESS/FEES/FIELD NOTES/PEOPLE/CONTACT: ghost word `p.ss-ghost` IBM Plex Sans 700, **11.5rem (184px)** desktop, `clamp(4.5rem, 12.8vw, 11.5rem)`, line-height 0.85, colour `#6A7A58` at **opacity 0.15**, uppercase, letter-spacing 0, centred, `aria-hidden="true"`, `user-select:none`, `white-space:nowrap`, overflow clipped by the section (`overflow-x:clip`).
- Heading `h2` Spectral 500 **3rem (48px)**, lh 1.5, letter-spacing **0.1em**, centred, ink `#333333`; placed with `margin-top: -5.3rem` (= ghost top + ~85px) so it overlaps the lower half of the ghost word. Under it a centred lead, 15px/1.8, max 3 short lines (≤ 38em).
- Ghost words always English, also in zh-TW/ja/fr/de (headings translated). Words: OUR WORK, SERVICES, LEDGER, PROCESS, FEES, FIELD NOTES, PEOPLE, CONTACT.
- Do not dilute: opacity stays 0.15 (not 0.05–0.08), size ≥ 11rem at 1440, the heading must physically overlap the ghost word (not sit under it), centred (not left).
- Mobile 390: ghost 4.5rem, heading 1.75rem, overlap `margin-top:-2.2rem`. Ghost is a normal-flow block (not absolute) → no overlapping labels in first screen (hero has no ghost).

### T2. Landscape photo band (parallax) behind a 3×2 grid of white radius-10 icon cards, foreground photo overlapping the band's lower edge (R1 MISSION / tech cards, tokens [c][d][e][f])
- R1: full-width mountain landscape band ≈1440×830, a 3×2 grid of white cards 393×180, gap 10, radius 10, no border, no shadow; 70px single-colour line icon (accent) above a 16px label; figures overlap the band's lower edge by ~140px; torn/irregular edge into the next band.
- Ours = home **SERVICES**: alignfull Group `sp-parallax` `--sp-par: 10%` (mobile 6%), min-height 830px, background photo **P02** (River Wend floodplain, wide) via `.sp-parallax__layer` img, `object-fit:cover`, plus a 35% white veil `rgba(255,255,255,.35)` on a non-moving `::after` so cards read. Section padding 100px top, 0 bottom.
- Ghost "SERVICES" + h2 sit on the photo (ghost in white at 0.55 opacity here, heading ink on a white 10px-radius plate `padding: .2em .8em`; this is the only ghost exception).
- Card grid: container 1200, 3 columns × 2 rows, each **393×180**, gap **10px**, `#FFFFFF`, radius **10px**, no border, no shadow, padding 28px 32px. Content: 48px line icon (stroke 1.5, `#6A7A58`) top-left, service name IBM Plex Sans 600 1.0625rem ink, one line 0.875rem `#5F5F5F`, "from $x" right-aligned bottom in accent 0.875rem 600 + 24px accent arrow → (R1 arrow cards). Whole card is a link to the service page.
- Foreground photo **P03** (hands filling a sample bottle at the stream edge), 4:5, width 380px, radius 10px, positioned right column (grid col 9–12), pulled down so it overlaps the band's lower edge by **140px** (`margin-bottom:-140px; position:relative; z-index:2`) onto the white next section. Below the band's bottom edge use an irregular soft edge: an SVG wave mask 48px tall in `#FFFFFF` (static, not animated) – our version of R1 torn paper.
- Mobile: band min-height auto, cards 1 column full width 100%×auto (min 120px), gap 10; P03 width 70% right-aligned overlap 80px; `--sp-par: 6%`.
- Do not dilute: the photo must be clearly visible between and around cards (cards ≤ 60% of band area), cards stay pure white with 10px corners, gap stays 10px (not 24–32), the foreground photo must cross the band's edge.

### T4. Hero headline right-aligned bottom-right, two lines, wide tracking, over a large photo offset right and cropped by the viewport edge (R1 first screen, token [b][e])
- R1: big image 1040×457 (2.28:1) right of centre, cropped by the right viewport edge; white below; two-line catch ~48px, ls ~0.12em, right-aligned to the bottom-right.
- Ours: see §3 first screen. Headline Spectral 400, `clamp(2.5rem, 5vw, 4.5rem)` (theme max preset `xx-large` = **4.5rem**), lh 1.25, letter-spacing **0.12em** (en/fr/de 0.06em because Latin is wider; zh-TW/ja 0.12em), right-aligned, two lines with `<br>`.
- Do not dilute: photo must touch and be cropped by the right viewport edge (no right margin, no radius on that side), headline right-aligned (not centred/left), photo ratio ≈ 2.28:1.

### Header (R1 split layout, supporting)
Logo centred (wordmark "Seisui" Spectral 500 1.5rem + small "ENVIRONMENTAL" Plex 0.625rem ls 0.2em below), slim text nav top-right (Plex 500 0.9375rem, ink, gap 20px, y≈33), left: phone number in 0.8125rem `#5F5F5F`. One menu only (mobile: same nav in WP navigation overlay). No MENU tab (would duplicate the menu). Header white, height 120 desktop / 64 mobile, not sticky.

### Continuation to inner pages (≥4 required; all inner pages get T1)
| Page | T1 ghost word | T2 photo band + white cards | T4 right-aligned headline on edge-cropped photo |
|---|---|---|---|
| About | ABOUT (head), HISTORY | — | page head: P14 2.28:1 cropped right, title right-aligned bottom-right |
| Services | SERVICES | full 3×2 cards over P12 band, parallax 8% | — |
| Water & Soil Assessment | ASSESSMENT, SCOPE | 2×2 cards (same card spec) over **P16** band | — |
| Monitoring Programmes | LEDGER | — | head with P09 |
| Habitat & Biodiversity | HABITAT | 3×1 cards over P13 band | — |
| Projects | FIELD NOTES | — | head with P07 per-case |
| Fees | FEES | — | — |
| How we begin | PROCESS | — | head with P16 |
| People | PEOPLE | — | head with P10 |
| Municipal clients / Landowners | FOR TOWNS / FOR LAND | 3 cards over P15 / P04 band | — |
| Contact | CONTACT | — | head with P11 |
Inner page head default (when no T4 row): ghost word + centred h2 + lead on white, 160px top padding.

---

## 2. Home block order

| # | Block | Purpose | Layout & photo | Copy |
|---|---|---|---|---|
| 0 | Header | split nav | see above | — |
| 1 | Hero (first screen) | promise | §3, **P01** | eyebrow + 2-line headline + 2-sentence lead + 2 buttons |
| 2 | Site strip | ledger mood, `sp-marquee` | thin 56px band `#EDF2EF`, site codes + places "WR-01 Wend River · Mill Weir — GW-07 Alder Bridge wells — …" Plex 0.875rem ls 0.08em `#5F5F5F`, separators accent dots 6px | 8 site names |
| 3 | OUR WORK (intro) | who we are | T1 head centred; below 2 columns 7/5: **P04** 3:2 left radius 10, right 3 paragraphs (≈170 words) + text link "About the practice →" | 3 paragraphs |
| 4 | SERVICES | T2 | **P02** parallax band + 6 white cards + **P03** foreground overlapping | 6×(name+line+from-price) |
| 5 | LEDGER (metrics-ledger) | monitored sites | T1 head; row of 3 figures (Plex 300 3.5rem accent-ink `#4E5A40`: "38 sites", "16 years", "4 rounds / yr") divided by 1px `#CCCCCC` verticals; then ledger table of 6 sites (code, site, medium, since, rounds/yr, last round) full width 1200, rows 64px, 1px `#CCCCCC` rules, code column in accent 600; link "Monitoring programmes →" | 6 rows |
| 6 | PROCESS — how an assessment begins (sticky-media) | process | 2 columns 5/7: left **P05** 4:5 radius 10, `position:sticky; top:96px`; right 4 steps stacked, each 1px top rule, number "01" Spectral 2.5rem accent, title 1.25rem, 2 sentences, time note. Parent `overflow:clip` not hidden | 4 steps |
| 7 | FEES | prices | T1 head; price list 6 rows full container width 1200 (§6 rules), note line under: "All prices exclude laboratory courier beyond 60 km and tax." + button "Ask for a scoping call" | 6 rows |
| 8 | FIELD NOTES (cases) | proof | 3 columns, each **P07 / P08 / P09** 3:2 radius 10, place + year small caps, title 1.25rem, 2 sentences, link | 3 cases |
| 9 | PEOPLE | team | 2 columns 6/6: **P10** 3:2 left radius 10; right a ledger list of 7 people (name 600 · role · discipline), 1px rules, no portraits grid | 7 rows |
| 10 | CONTACT (close) | conversion | pale band `#EDF2EF` 100px padding; T1 ghost CONTACT; 2 columns: **P11** 16:10 left radius 10; right address, hours, phone, email, primary button | short |
| 11 | Footer | — | ground `#39412F` (low-chroma dark green-ink, not saturated), text `#EDF2EF`; logo, 3 link columns, address/hours, ©. | — |

Home photo positions: P01, P04, P02, P03, P05, P07, P08, P09, P10, P11 = **10** (≥8).
Home text ≥ 250 English words; narrative paragraphs: hero lead, intro ×3, process, close = ≥3.

### Compare with recent themes
| Theme | Home order | Seisui difference |
|---|---|---|
| Kotoba Language | hero, paths, intro, levels, classroom, teachers, fees, stories, close | No paths cards after hero; marquee strip + ledger table + sticky process are absent there |
| Oto Audio | hero, categories, intro, compare table on ink, trio cards | No ink table section; our table is a light ledger with rules; cards sit on a parallax photo |
| Ito HR Partners | hero, services, intro, approach (parallax blurred bg + stacked cards), fees, people, stories, close | Ito's parallax is blurred bg behind stacked cards; ours is a sharp landscape band behind a 3×2 white grid with foreground photo crossing the edge; intro precedes services; ledger + sticky process; cases before people |
| Kaiten Skills | hero, intro, courses, steps timeline, prices, stories, interlude, tutors, close | Steps are sticky-media (photo pinned) not a timeline; ledger metrics block unique |
Unique to Seisui: top-bottom-halves hero with edge-cropped photo and bottom-right headline, ghost-word heads on every section, site-name marquee, metrics ledger.

---

## 3. First screen (1440×900 and 390×844)
- Desktop: header 120px. Top half: photo **P01** at **2.28:1**, starting at x = 33% (left edge 480px at 1440) running to and cropped by the right viewport edge: width 67vw, height `calc(67vw / 2.28)` ≈ 423px, no radius (a 10px radius on the left corners only). Left of the photo (x 120–440, top aligned with photo): eyebrow "Environmental consultancy · since 2009" Plex 0.75rem ls 0.18em uppercase accent + 1px 48px accent rule.
- Bottom half (white, below photo, ~300px): left column 5/12 (x 120): lead 1.0625rem lh 1.8 `#333` (2 sentences) + buttons (primary: `#6A7A58` bg, white, radius 10, 14px 28px; secondary: text link ink with arrow). Right column 7/12: headline right-aligned flush with container right (x 1320), two lines, T4 sizes. Headline en: "Know the water,<br>then shape the land."
- Saturated pixels: only photo + buttons; target ≤ 10%, hard limit **15%** (check-first-screen.py). Photo P01 must be low-saturation film grain.
- Mobile 390: header 64; photo full width 100vw (cropped right edge, 16:10), then eyebrow, headline right-aligned `2.5rem` 2 lines, lead, buttons stacked full width. **No vertical text, no absolutely positioned labels, no overlap.** No ghost word in hero. Hero has no sp-reveal.

---

## 4. Inner pages (11)
1. **About** — T4 head (P14); history 2009→now as 3 dated paragraphs (no vertical timeline); principles (3 short columns); office location paragraph.
2. **Services** — T1; T2 3×2 cards over P12 band (parallax 8%); each service summary 80 words below as alternating rows text/price.
3. **Water & Soil Assessment** — T1 ASSESSMENT; scope list; 2×2 cards over P16 band; what you receive (report contents); price rows (Phase I/II, sampling round); photo P06 lab.
4. **Monitoring Programmes** — T4 head (P09); full ledger table (same 6 sites + 2 more = 8 rows), metrics row (38 / 16 / 4); how quarterly rounds work.
5. **Habitat & Biodiversity** — T1 HABITAT; P12 + P13; survey seasons (Apr–Sep), 3×1 cards over P13 band.
6. **Projects / Field notes** — T4 head (P07); the 3 cases in long form (challenge, what we did, outcome stated without guarantees), P08, P09.
7. **Fees** — T1 FEES; full price table (6 rows identical to home), what's included, payment terms (50% on instruction, 50% on report).
8. **How we begin** — T4 head (P16); same 4 steps as home in sticky-media layout with P05; FAQ (5 Q&A as details).
9. **People** — T4 head (P10); 7 people as ledger rows with 60-word bios; no portrait grid.
10. **For municipalities / For landowners** (one page, two halves) — T1 FOR TOWNS / FOR LAND; 3 cards each over P15 / P04 band.
11. **Contact** — T4 head (P11); address, hours, phone, email, map placeholder as pale `#EDF2EF` box with address text (no iframe), contact form (no reveal).

---

## 5. Colour (source R1 [a]; accent replaced per row note)
| Role | Hex | Share | Source |
|---|---|---|---|
| Ground | `#FFFFFF` | ~85% | R1 ground #FFFFFF |
| Pale band | `#EDF2EF` | ~8% (marquee, contact, map box) | R1 pale band, exact |
| Text | `#333333` | body/headings | R1 text |
| Secondary text | `#5F5F5F` | captions | R1 secondary |
| Rule | `#CCCCCC` | ledger/price rules | R1 rule |
| Accent | `#6A7A58` | ≤3% (buttons, ghost 15%, icons, arrows, codes) | row hex; replaces R1 `#33A969` |
| Accent dark | `#4E5A40` | metric numbers, hover | accent −15% L |
| Footer | `#39412F` | footer only | R1 full-bleed accent footer, darkened |
Why accent replaced: row note requires "the palette hex as the one muted accent… never a full-bleed field"; R1's #33A969 is saturated and its footer is full-bleed accent. Relation kept: white ground, same pale green-grey band, same greys, green accent on ghost words/icons/arrows, coloured footer. First-screen saturated ≤ 15%.

## 6. Type (theme.json fontFamilies + fontFace, same in editor and front)
- Display: **Spectral** 400/500 (OFL). Body/UI/ghost: **IBM Plex Sans** 300/400/500/600/700 (OFL). Latin woff2 in `assets/fonts/`, declared in theme.json `fontFace`.
- zh-TW: headings Noto Serif TC 500, body Noto Sans TC 400; ja: Noto Serif JP 500 / Noto Sans JP 400 — subset woff2 via the Hokuto/Hada method, also declared in theme.json fontFace; `:lang()` rules ⇒ copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and require it. CJK heading sizes ×0.75, body lh 1.85; fr/de `hyphens:auto`.
- Scale: body 1rem/1.7 weight 400 (R1 16/500/1.7 — 400 because Plex is darker than Noto Sans JP); lead 0.9375rem/1.8; h3 1.25rem/1.7/600 (R1 20/700); h2 3rem/1.5 ls 0.1em (R1 48px); hero `xx-large` **4.5rem** (≥4.25rem); ghost `ghost` 11.5rem (R1 183.46px); small 0.8125rem; label 0.75rem ls 0.18em.

## 7. Responsive & tables
- 390px first screen: no vertical text, no absolute labels, nothing overlapping (auto-gates).
- Price list ≥782px: block `alignwide` = full container width 1200 (not half column); columns name (auto), detail (40%), price (`white-space:nowrap; text-align:right; min-width:9em`), never cut at 800 and 1280.
- Any table (ledger, price) at <782px stacks: each row becomes a block; label/value pairs with `data-label` via `::before`; price stays right-aligned nowrap on its own line.
- No horizontal scroll at 390/1280; ghost words clipped by `overflow-x:clip` on the section.

## 8. Photos (16) — one STYLE string
STYLE: `Film-grain documentary photograph, 35mm look with fine visible grain, high-key bright natural daylight, soft overcast or early-morning light, muted sage greens, stone greys and pale water tones, low saturation, gentle contrast, neutral international modern setting in temperate countryside or a small modern town, diverse people in plain practical outdoor workwear without logos, candid not posed, realistic hands and faces, no text, no letters, no logos, no brands, no signage, no Japanese elements`
| # | Subject & composition | Ratio | Used |
|---|---|---|---|
| P01 ★ | Field scientist in waders kneeling at a riverbank lowering a clear sample bottle into slow water, subject left third, river and far bank to the right, lots of sky-light | 16:7 (2.28:1) | Home hero |
| P02 ★ | Wide river floodplain: meandering river, meadows, hedgerows, low hills, morning mist, no people | 21:9 | Home SERVICES band |
| P03 ★ | Close-up hands in nitrile gloves filling a glass sample bottle at a stream edge, stones and water | 4:5 | Home SERVICES foreground |
| P04 ★ | Consultant with tablet walking a field margin with a landowner, fence and pasture | 3:2 | Home intro; For landowners band |
| P05 ★ | Soil cores laid in a tray on a vehicle tailgate, hand pointing at a layer | 4:5 | Home PROCESS sticky; How we begin |
| P06 | Bright laboratory bench, water vials in a rack, pipette, window light | 3:2 | Water & Soil |
| P07 ★ | Restored stream meadow with wildflowers and young willows | 3:2 | Home case 1; Projects head |
| P08 ★ | Former industrial gravel lot with birch saplings, surveyor with tripod | 3:2 | Home case 2; Projects |
| P09 ★ | Technician at a groundwater well head in a village field reading a handheld meter | 3:2 | Home case 3; Monitoring head |
| P10 ★ | Three colleagues at a table with paper maps and field notebooks (no legible text) | 3:2 | Home PEOPLE; People head |
| P11 ★ | Bright modern small office entrance, plants, wellies and sample cool box by the door | 16:10 | Home CONTACT; Contact head |
| P12 | Ecologist with binoculars at a reed-bed wetland | 21:9 | Services band; Habitat |
| P13 | Quadrat frame and measuring tape on grassland, close | 21:9 | Habitat band |
| P14 | River bank with willow-stake erosion repair, calm water | 16:7 | About head |
| P15 | Bright municipal meeting room, two people reviewing printed charts (no text) | 21:9 | For municipalities band |
| P16 | Field kit laid out on canvas: bottles, gloves, probe, cool box | 16:7 | How we begin head; Water & Soil band |
★ = home (10). No photo repeats on the same page. ≤300 KB, ≤2000px, no cut-outs.

## 9. Fixed numbers (identical on every page and language)
**Fees (USD)**: Site walkover & desk study $1,850 · Phase I environmental site assessment $3,400 · Water quality sampling round (up to 6 points) $2,250 · Habitat & biodiversity survey $4,200 · Phase II soil investigation from $8,900 · Annual monitoring programme (4 rounds, per site) $6,600 / year. Home cards show "from" the same numbers.
**People (7)**: Dr Ilse Varga — founder, hydrologist · Tomas Brandt — soil & contamination lead · Amara Okonkwo — ecologist · Lucía Ferreira — field sampling lead · Henrik Aalto — GIS & data · Priya Raman — permitting & municipal liaison · Noah Bakker — laboratory QA.
**Cases (3)**: (1) Wend Meadow reach, Alder Bridge council, 2021 — floodplain meadow restoration baseline + 3-year monitoring; (2) Former tannery lot, Fennick Road, private landowner, 2023 — Phase I/II before resale; (3) Hollin village wells, parish council, 2024 — groundwater quality programme for 5 wells.
**Ledger**: 38 sites monitored, 16 years (since 2009), 4 rounds a year. Home rows: WR-01 Wend River · Mill Weir (surface water, 2012) · WR-04 Wend River · Ferry Steps (2015) · GW-07 Hollin wells (groundwater, 2024) · SL-02 Fennick Road lot (soil, 2023) · WM-03 Wend Meadow (habitat, 2021) · PD-05 Alder Bridge mill pond (surface water, 2018). Monitoring page adds GW-09 Copse Farm borehole (2019), SL-06 Station yard (2022).
**Process (4)**: 01 Scoping call — free, 20 minutes, within 2 working days · 02 Desk study & walkover — within 10 working days · 03 Sampling & laboratory — results in 15 working days · 04 Report & next steps — written report and a 45-minute review meeting.
**Hours/place**: as top of file.

## 10. Scroll effects (sp-scroll only; hero no reveal)
| Effect | Block | Class | R1 source (trigger/time/easing) | Ours |
|---|---|---|---|---|
| Parallax (required) | Home SERVICES band (+ Services, Habitat inner bands) | outer Group `sp-parallax`, P02 as `.sp-parallax__layer` | R1 landscape band behind cards; R1 uses ScrollSmoother depth on long scroll | `--sp-par:10%` desktop, `6%` ≤781px; cards/headline in non-moving foreground |
| Marquee | Home site strip | `sp-marquee` (pattern duplicates `aria-hidden` group) | R1 hero vehicles x −2500px, 8–10s linear | linear infinite; `--sp-marquee-dur: 40s` (slower, quiet); no reveal on children |
| Stagger reveal | SERVICES cards, LEDGER rows, FIELD NOTES cards, inner card grids | parent `sp-stagger`, children `sp-reveal sp-reveal--up` | R1 objects fade+drop 0.4s power2.out per-item delay | `--sp-dist:24px`, duration 0.6s, `cubic-bezier(.25,.46,.45,.94)` (power2.out), step 0.12s |
Not on: hero, price list, contact form, legal text. Hover: cards/links 0.2s ease (R1 [g]).

## 11. Home acceptance checklist
- [ ] First screen: P01 2.28:1 touching/cropped at right viewport edge; headline right-aligned bottom-right, ≥4.25rem at 1440 (4.5rem), ls 0.12em/0.06em; saturated ≤15%.
- [ ] Every section from OUR WORK on has a 15%-opacity accent ghost word ≥11rem with the 48px heading overlapping it.
- [ ] SERVICES: sharp photo band visible around a 3×2 grid of 393×180 white radius-10 cards, gap 10; P03 crosses the band's lower edge by ~140px; parallax moves (check-parallax ≥6px desktop and mobile, 0 under reduced motion).
- [ ] Marquee strip runs; stagger reveals ≥3 hidden before entry, none left transparent after scrolling to bottom.
- [ ] Ledger table 6 rows + 3 metrics; process photo sticky while 4 steps scroll.
- [ ] Price list 6 rows full width, prices nowrap right at 800/1280; tables stack at 390.
- [ ] ≥8 photos (10), none repeated, no text/logos in photos; ≥250 words.
- [ ] Numbers match §9; one menu; no sidebar; no horizontal scroll at 390/1280.
- [ ] Editor and front show Spectral/Plex (and Noto TC/JP in zh-TW/ja).

## 12. Similarity table (target 80%)
| Dimension | R1 | Seisui |
|---|---|---|
| Ground / band / text | #FFFFFF / #EDF2EF / #333333 | same exact |
| Accent | #33A969 | #6A7A58 (row note: muted, no full-bleed) |
| Footer | full-bleed accent | full-bleed #39412F (accent family, dark) |
| First-screen saturation | ≈6% | ≤10% target |
| Body | 16 / 500 / 1.7 | 16 / 400 / 1.7 |
| h2 | 48px / 500 / lh 1.5 / ls 0.1em centred | 3rem / 500 / 1.5 / 0.1em centred |
| Ghost word | 183.46px 700, 15% accent, behind heading, overlap ~85px | 11.5rem 700, 15% accent, overlap ~85px |
| h3 | 20 / 700 / 34px | 1.25rem / 600 / 1.7 |
| Hero catch | ~48px ls 0.12em, right-aligned bottom-right, 2 lines | 4.5rem ls 0.12em (Latin 0.06em), right-aligned bottom, 2 lines |
| Hero image | 1040×457 2.28:1, cropped by right edge | 67vw at 2.28:1, cropped right |
| Container / side | 1200 / 120 | 1200 / 120 |
| Section padding | 100/100 band; 200/100 | 100/100 bands; 160/100 white sections |
| Cards | 393×180, gap 10, r10, white, no border/shadow | same |
| Icon / arrow | 70px line icon accent; 24px arrow | 48px line icon accent; 24px arrow |
| Photo band | ≈1440×830 full-bleed, figures overlap edge ~140px, torn edge | 1440×830 parallax, P03 overlaps 140px, SVG soft edge |
| Header | logo centred, right text nav, MENU tab | logo centred, right text nav (no tab: one menu) |
| Motion | GSAP intro 0.4s power2.out; vehicles linear 8–10s; hover 0.2s ease | stagger 0.6s power2.out-curve; marquee linear 40s; hover 0.2s ease; parallax 10% |
| Imagery | watercolour illustration | film-grain photographs (row: photographic only) |
