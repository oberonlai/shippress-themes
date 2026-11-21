# Design spec — Nagare Workation Hotel (nagare-workation)

Row b36-5 · type hospitality · archetype horizontal-strip · nav split · page_structure pricing-led · font_direction **sans** · IMAGERY **photo**.
Reference: https://www.sa-nu.com/weekday (SANU 2nd Home Weekday; tokens in `brand/reference-tokens.md` = "RT", screenshots `brand/ref/`). No secondary reference.
Similarity target: **80 %** to the reference in colour relationships, photo treatment, motion, decoration and layout; photos, copy, names and logo are our own. Nothing from the reference (images, text, logo, the vertical Japanese tagline) is reused.

---

## 0. Fixed brand facts (identical on every page, in brand.md and in all five languages)

- **Nagare Workation Hotel** — a 24-room lakeside hotel on **Lake Ostra** (fictional, international-neutral) that rents rooms **by the week and by the month** to people who bring their work. Opened **2018** in a former 1960s boat-builders' lodge by **Ilse Varga**.
- Address: **Nagare Workation Hotel, 12 Shore Road, Ostra** (fictional; local address order per language in brand.md). Phone **+00 46 555 0142**. Email **stay@nagare-hotel.example** (the same in every mailto, form fallback and footer).
- Hours: **Front desk daily 07:00–22:00. Coworking floor open 24 h to staying guests; hosted Mon–Fri 08:30–18:00. Check-in Sunday or Monday from 15:00; check-out 11:00 on the last day.** Booking replies within one working day.
- Numbers used everywhere: **24 rooms · 38 desks · 1 Gbps fibre (wired at every desk) · 2 call booths · 1 meeting room for 8 · 7 nights minimum.**
- **Rates (6 items, EUR in every language, per room incl. VAT, weekly cleaning and breakfast included; same on Home, Rates, Rooms, Book):**
  | # | Item | Stay | Price |
  |---|---|---|---|
  | 1 | Desk Room — room + fixed desk on the coworking floor + breakfast | Week (7 nights) | €690 |
  | 2 | Desk Room | Month (28 nights) | €2,150 |
  | 3 | Window Studio — larger room with its own lake-window desk + floor desk + breakfast | Week | €890 |
  | 4 | Window Studio | Month | €2,790 |
  | 5 | Weekday dinners at the long table (Mon–Fri, 5 dinners) | per person per week | €120 |
  | 6 | Second guest in the room (breakfast included, no extra desk) | per week | €140 |
- **People (7, fictional):**
  1. **Ilse Varga** — founder and general manager.
  2. **Daniel Osei** — front desk and stays; the man setting down coffee in P01.
  3. **Mei-Lin Hoang** — coworking floor host (Mon–Fri 08:30–18:00).
  4. **Tomás Ferreira** — kitchen lead; breakfast and the weekday long-table dinners.
  5. **Ana Petrova** — connectivity and IT; the fibre, the booths, the monitors.
  6. **Jonas Lindqvist** — lake and grounds; boats, the sauna, the morning swim.
  7. **Priya Nair** — bookings; answers every request on the Book page.
- **Guest stories (3, fictional, no claimed outcomes):** (a) **"Four weeks to finish a release"** — Sofia, product designer, Window Studio monthly; (b) **"Two translators, one month"** — Karim and Elena, Desk Room monthly with second guest; (c) **"A week to write the first chapter"** — Hugo, writer, Desk Room weekly.
- **How to book (the single way, 4 steps):** 1 Choose a week or a month and a room → 2 Send your dates on the Book page (or by email) → 3 Priya confirms within one working day with an invoice → 4 Arrive Sunday or Monday from 15:00.

---

## 1. Signature techniques (borrowed from sa-nu.com/weekday; obvious at a glance; do not dilute)

### T1. Three-pane desk window (RT §(e) hero 990×900 + 450×900, §(g) "Hero slides"; `ref/sanu-weekday-first.png`)
- **Reference:** the first screen is two full-height rectangular photographs with no gap: a wide 1.1:1 pane (a person on the phone at a long desk in front of a huge window) and a narrow 1:2 pane (the timber cabin among trees) carrying a vertical white tagline; slides change with a 2.4 s inset clip-path wipe.
- **Ours (home hero):** at 1440×900 three panes, edge to edge, 100vh (min 640, max 960): **photo pane x 0–864 (60 %)**, **text pane x 864–1296 (30 %, ground #EEF3F4)**, **sliver pane x 1296–1440 (10 %, photo P04)**. Photo pane corner radius 0, no gap, no border. The photo pane cycles P01 → P02 → P03 with the next slide revealed by `clip-path: inset(100% 0 0 0) → inset(0)` from the bottom, **2.4 s cubic-bezier(.23,1,.32,1), hold 5 s** (CSS keyframes, 3 slides, 22.2 s loop; under prefers-reduced-motion, `?sp-static` and in the editor: P01 only, no animation).
- **Must not dilute:** the unequal widths (60/30/10), full-height rectangles without radius, the wipe (not a crossfade), the sliver photo at the far right with its 2-line vertical micro caption (desktop only).
- **Inner pages (5):** Rooms, Coworking floor, A week at Nagare, Lakeside, Book a stay use a **two-pane page head**: photo pane 60 % (no radius, 560 px high) left + pale text pane right with H1 + lede, no sliver, no wipe (static).

### T2. Label-cell price board (RT §(d)(f), `ref/sanu-sec-price.png`)
- **Reference:** price board 1066 px wide: a 150 px beige-deep label cell (r10) + white value cells (r12), 20 px gaps, a bold "+" between rows, a giant light numeral (~96 px) with a tiny unit on its baseline, an outline pill with "+" toggle below.
- **Ours (home §4 "Weekly and monthly rates"):** board max-width 1066 px centred. Row 1: label cell **150 px wide, #C9DAE0, r10, 90 px high** "Week" / value area with "from" 14 px + numeral **€690** in Red Hat Display 300 **6rem (96px) #1E2B31** + unit "per room, 7 nights" 14 px on the numeral baseline. Row 2: label cell "Month" + numeral **€2,150** + "per room, 28 nights". Then a tall label cell "Included in every stay" (150 px) beside two stacked white r12 value cells (190 px sub-label cell #DCE7EB r10 + value): "Room, weekly cleaning, breakfast" **+** "Fixed desk, 1 Gbps fibre, booths, meeting room" — joined by a **bold 20 px "+" (#1E2B31) centred in the 20 px gap**. Below: outline pill **"See every rate +"** 280×55 r500 1 px #1E2B31, 16 px / 600 / ls .01em, links to /rates/. No shadows.
- **Must not dilute:** the coloured label cell vs white value cell contrast, the giant light numeral, the "+" joiner, the outline pill.
- **Inner pages (4):** Rates (full 6-item ledger, same cell system), Rooms (one board per room type: week / month), Coworking floor (what a desk includes, "+" joiners), Book a stay (summary board above the form).

### T3. Seam portrait (RT §(e)(f) "think" band, `ref/scroll-sanu-think.png`)
- **Reference:** a full-width landscape photo band (~575 px high) and a tall 0.63:1 portrait (352×557) centred, straddling the border into the pale ground below; four white words spread across the band on both sides of the portrait.
- **Ours (home §5):** band **1440×580, P09 lake and hills**, wrapper `sp-parallax` `--sp-par:10%`. Portrait **P10 352×557 (0.63:1), radius 0**, centred, top at band y 155, bottom 137 px below the band onto #EEF3F4 ground. Four words **"Bring" · "the work." · "The lake" · "stays."** in Red Hat Display 400 **20 px white at 85 % opacity** (RT 60 %; raised for contrast on our brighter lake photo), at x 80 / 290 / 1018 / 1220, y 487 of the band (two left, two right of the portrait). Words: `sp-reveal--left` (left pair) / `sp-reveal--right` (right pair), 24 px. Under the band: a centred 2-paragraph text block (max 640 px).
- **Must not dilute:** the portrait crossing the seam (≥120 px into the ground), the words split on both sides, no radius, no overlay text on the portrait.
- **Inner pages (4):** About (P09-variant: P15 band + P18 portrait), Coworking floor (P13 band + P11 portrait — different from home combos), Lakeside (P04 band + P06 portrait), Journal index head (P09 band + P16 portrait).

### Supporting (required, not counted)
- **Icon tiles** (RT §(f)): 70×70 **#1E2B31** squares r8 with 24 px white 1.5 px line icons, 3×2 grid, title 16 px 700 + 2 lines 14 px; on Home §6 and Coworking floor.
- **Right-edge photo strip** (RT §(e), `ref/scroll-sanu-workspace-b.png`): three abutting 1.1:1 photos (284×258 at 1440) flush to the right viewport edge beside a text column; Home §6, Rooms.
- **Label pair** (RT §(f)): H2 left, then English label (Red Hat Display 17 px) + 12 px sub-label on one baseline at the right of the same row.

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
sa-nu.com/weekday opens on a documentary photograph of a person sitting with their back to us at a long wooden desk in front of a floor-to-ceiling window onto snowy woods, on the phone; a narrow second photo shows the timber cabin among trees with a vertical tagline ("ideas are full of nature") and a small English caption. Story: an ordinary weekday, spent working inside beautiful nature, as a second home. Signature motion: slides of full-height photographs revealed by a slow clip-path inset wipe; later the seam portrait passes over a landscape band while words drift apart.

### (2) Our translation (hospitality: weekly/monthly lakeside workation; same composition idea, same motion idea, same image type = documentary photo)
The lakeside hotel's desk by the window: a guest on a video call, laptop open, the lake beyond the glass; Daniel from the front desk quietly sets a cup of coffee at the edge of the desk. Story: **"Rent a week. Bring the work. The lake does the rest."** The left pane wipes upward to the next real moment of the week (a monthly guest at the long table at breakfast; the coworking floor at 9:00), the sliver pane holds the lake dock at dawn and drifts in parallax. The reference's vertical tagline becomes a horizontal H1 in the text pane (forced composition split-photo-left / beside-photo / stats-row) plus a 2-line vertical micro caption on the sliver (desktop only).

### (3) KV checklist (all built in the home first screen at 1440×900, all visible)
| # | Reference element | Our equivalent | Position (1440×900) | Motion | Image |
|---|---|---|---|---|---|
| 1 | Wide left photo pane: person on a call at the window desk | Guest (from behind/profile) on a video call at the lake-window desk, staff hand setting down coffee | x 0–864, y 0–900, object-fit cover, focal point 55 % 50 % | clip-path inset wipe from bottom, 2.4 s cubic-bezier(.23,1,.32,1), hold 5 s; static = P01 | **P01** (+ slides P02, P03) |
| 2 | Vertical tagline on the narrow pane | H1 "Rent a week. / Bring the work." Red Hat Display 300 4.5rem/1.05 #1E2B31, horizontal | text pane x 904–1256, y 200–360 | none | — |
| 3 | Lede + outline pill bottom-left | lede (≈30 words) Nunito Sans 18/1.6 + outline pill "See weekly and monthly rates" 280×55 r500 | text pane x 904, y 400–600 | none | — |
| 4 | Narrow forest/cabin pane at the far right + small caption | Lake dock at dawn, 1:2 sliver; vertical micro caption "Lake Ostra · 38 desks" Red Hat Display 11 px white, `writing-mode: vertical-rl` (desktop ≥1100 only) | x 1296–1440, y 0–900 | `sp-parallax` `--sp-par:8%` on the image | **P04** |
| 5 | Transparent overlay header: logo left, menu tile right | split nav: logo over photo (white), links over the text pane (#1E2B31), language + "Book a stay" pill right; one top menu | y 24–80 | static | — |
| 6 | (required hero_footer) — | stats row: "€690 / week" · "€2,150 / month" · "38 desks" · "1 Gbps" in 4 hairline cells (1 px #BFD0D6 top border) | text pane x 904–1256, y 760–860 | static (no sp-count in hero) | — |

---

## 3. Home page

### First screen composition
**hero_composition = split-photo-left · hero_text = beside-photo · hero_footer = stats-row · hero_fingerprint = split-photo-left/beside-photo/stats-row**
- **split-photo-left:** the photo pane occupies the left 60 % edge to edge, full height (100vh, min 640, max 960), radius 0; the text pane is NOT laid over the photo. The 10 % sliver (P04) sits at the far right as the third pane; it is a photo column, not an overlay.
- **beside-photo:** H1, lede and pill sit on the pale #EEF3F4 text pane right of the photo, left-aligned at 40 px padding, vertically centred on y 200–600. No text on the photo except the white logo in the header.
- **stats-row:** four stat cells anchored at the bottom of the text pane (y 760–860): numeral Red Hat Display 400 1.75rem #1E2B31 (the € figures; the accent is not used here), label Nunito Sans 13 px #4A5A61; cells separated by 1 px #BFD0D6 vertical hairlines; at 1280 they stay one row (2×2 below 1100).
- Not full-bleed: no headline over a full-width photo, no info bar across the photo.
- Saturated share of the first screen: target ≤ 12 % (hard max 15 %; row note allows 30 %). Photos graded muted; the only saturated UI is the Book pill (#2A83A2, 120×40).

### Block order
| § | Block | Purpose | Layout and photos | Copy |
|---|---|---|---|---|
| 1 | Header (split nav) | single top menu | transparent over hero; logo left (white over photo); Rates · Rooms · Coworking · A week · Lakeside · Journal over the text pane; EN/… + "Book a stay" pill (#2A83A2, white text) right. Sticky after hero with #EEF3F4 ground | — |
| 2 | Hero T1 | KV | see §2 table; P01/P02/P03 + P04 | H1 + 30-word lede + pill + stats |
| 3 | "A week at the lake, in five frames" — horizontal photo strip | the archetype's horizontal strip: Monday to Friday | label pair heading at x 100; below, a horizontally scrollable strip (overflow-x: auto inside a full-width wrapper, scroll-snap, `scrollbar-width: thin`) of **4 photos 420×470 (0.9:1), 20 px gaps, radius 0**: P05 Monday key and room, P06 lunchtime swim from the dock, P07 call booth, P08 Thursday long-table dinner; caption under each "Mon / Arrive at 15:00 …" 14 px. Strip items get **no reveal**; the heading gets `sp-reveal--wipe`. Left: a narrative paragraph block (max 560) above the strip | 2 narrative paragraphs (≥40 words each) + 4 captions |
| 4 | "Weekly and monthly rates" T2 price board | pricing first | board §1 T2 on #EEF3F4; numeral €690 / €2,150 (accent **#2A83A2** on the two numerals only); outline pill to /rates/ | intro 1 line; cell copy |
| 5 | Seam portrait band T3 | the story turn | P09 band + P10 portrait, parallax 10 %; text block below | 2 paragraphs (≥25 words each) |
| 6 | "The coworking floor" | what a desk includes | left text column x 100–620 (label pair, paragraph, 3×2 icon tiles: Fixed desk & 27" monitor / 1 Gbps wired fibre / 2 call booths / Meeting room for 8 / Printer & supplies / Hosted Mon–Fri 08:30–18:00); right: **3 abutting photos P11, P12, P13 284×258 flush to the right viewport edge** at y aligned with the heading. Tiles: `sp-stagger` + `sp-reveal--up`; photos `sp-reveal--zoom` | 1 paragraph + 6 tile texts |
| 7 | "One day, a routine" | a daily routine, narrative | band #E1EAED; two columns 5/7: left photo **P14** (4:5, radius 0) Mei-Lin opening the floor at 08:30; right 3 short paragraphs (morning swim and breakfast / deep work and calls / dinner at the long table) — prose, **not** a timeline | 3 paragraphs (≥30 words each) |
| 8 | "Who stayed" — 3 guest stories | proof without claims | 3 white r12 cards on #EEF3F4, text-only: title 21 px 700, 2-line excerpt, meta "Window Studio · 4 weeks", link → story post. `sp-stagger` + `sp-reveal--up` | 3 × 30 words |
| 9 | "The one way to book" | conversion | full-width band: left 50 % photo **P15** (front desk, Priya at the booking book, 1.1:1, radius 0); right pane #E1EAED with the 4 steps as numbered lines (numeral Red Hat Display 300 2.5rem, text 16 px) — 4 lines in one column, not a grid; pill "Book a stay" (filled #2A83A2) + mail line | 4 steps + 1 sentence |
| 10 | Journal | freshness | 3 latest posts, image 3:2 radius 0 + title + date; heading label pair | auto |
| 11 | Footer | info + newsletter | #1E2B31 ground; address, hours, email; newsletter slot column (§9); single menu repeated as links | — |

Home photos: P01, P02, P03, P04, P05, P06, P07, P08, P09, P10, P11, P12, P13, P14, P15 = **15 positions** (≥8 ✓), none repeated on the page. Home English ≥ 250 words / ≥ 3 narrative paragraphs ≥ 20 words: §3 (2), §5 (2), §7 (3) ✓.

### Comparison with the most recent themes (home order must not match)
| Theme | Home order | Why ours differs |
|---|---|---|
| Tsukuri Design Office | tonal title strip / foam row / problem / method rows / full-bleed band / proof pairs / products / dark statement / start / journal | ours opens with a 3-pane photo hero and goes straight to a horizontal photo strip and a price board; no dark statement, no method rows |
| Yuzuriha Retreat | full-bleed film hero / what a retreat is / calendar cards / one day / lodge photos / price table / teachers / reserve / journal | ours is not full-bleed; price comes at §4 not §6, no calendar cards, no teacher grid; the day is prose next to one photo |
| Sumibi Yakiniku | cross-fade window / morning cut / dark band / courses tabs / price table / groups sticky / reserve steps / journal | ours uses a wipe (not crossfade), a label-cell ledger (not a table), no tabs, no sticky |
| Kisha Rail | rounded KV window + docked card / three cards / welcome / day sticky / viaduct band / what we carry / dark band / manager / brochure / journal | ours has no rounded window or docked cards; seam portrait and right-edge strip are new; no dark band mid-page |

---

## 4. Inner pages (11 pages + journal list + 3 posts; slugs identical in every language)
| Page | Slug | Key content | Signatures |
|---|---|---|---|
| Rates | /rates/ | full 6-item ledger (§0), what's included, cancellation (free until 14 days before arrival; then 50 %), long-stay note (3+ months: ask), tax note | T2 full ledger; label pair |
| Rooms | /rooms/ | Desk Room (18 m², 18 rooms) and Window Studio (26 m², 6 rooms); bed, storage, blackout, kettle; photos P16, P01 | T1 two-pane head (P16); T2 board per room; right-edge strip (P01, P05, P17) |
| Coworking floor | /coworking/ | 38 desks, 1 Gbps, 2 booths, meeting room, hosted hours, house rules (quiet floor, calls in booths) | T1 head (P03); T2 "what a desk includes"; T3 seam (P13 band + P11 portrait); icon tiles |
| A week at Nagare | /a-week/ | Sunday to Saturday prose: arrival, routine, meals, Friday on the lake, check-out | T1 head (P08); horizontal strip (P05, P06, P14, P02) |
| Lakeside | /lakeside/ | the lake, swim dock, boats, sauna, walking loop 6 km, train 2 h from the city (fictional) | T1 head (P06); T3 seam (P04 band + P10 portrait) parallax |
| About | /about/ | 2018 story, the boat-builders' lodge, 7 people (text list with roles, no 4-person grid; P18 staff photo) | T3 seam (P15 band + P18 portrait) |
| Guest stories | /stories/ | the 3 stories as long cards linking to posts (or the 3 posts themselves) | label pair, white r12 cards |
| FAQ | /faq/ | 10 Q&A: minimum stay, arrival days, monitors, calls, pets (no), families, invoices, visas (no letters), cancellation, dinners | white r20-top cards (RT §(d)) |
| Book a stay | /book/ | summary board, 4 steps, `shippress_form_slot` contact (booking), mailto fallback | T1 head (P15); T2 summary; form |
| Contact | /contact/ | address, phone, hours, map-free directions, form slot + mailto fallback | label pair |
| Newsletter | /newsletter/ | standalone "Lake letter" page: monthly room availability, 1 email a month; newsletter slot | white r12 card on #EEF3F4 |
| Journal | /journal/ (posts page, empty content) | list; 3 posts = the 3 guest stories (category "Stories", tags e.g. "monthly", "weekly", "writing") + images P17, P12, P07 | T3 head (P09 band + P16 portrait) on the index template |
Legal (privacy) may be added; it gets no motion.
T1 ≥4 pages ✓ (Rooms, Coworking, A week, Lakeside, Book); T2 ≥4 ✓ (Rates, Rooms, Coworking, Book); T3 ≥4 ✓ (Coworking, Lakeside, About, Journal).

---

## 5. Colour and type

### Colour (RT (a) relationships kept; beige recoloured to lake mist because the row palette is 花浅葱 blue and beige is banned as a default — each role keeps its RT share and lightness within ±5 %)
| Role | RT value | Ours | Share | Notes |
|---|---|---|---|---|
| Ink / text / icon tiles | #322E21 | **#1E2B31** | ~10 % | contrast on ground 13:1 |
| Ground | #F2EEE4 (L≈94) | **#EEF3F4** (L≈95) | ~40 % | page base, hero text pane |
| Band | #E9E3D1 | **#E1EAED** | ~22 % | §7, §9, label panels |
| Label cell | #D1C8A6 | **#C9DAE0** | ~5 % | price label cells |
| Sub-label cell | #E8E3D1 | **#DCE7EB** | ~2 % | |
| White | #FFFFFF | **#FFFFFF** | ~12 % | value cells, cards |
| Accent (one only) | #EC572E | **#2A83A2** 花浅葱 | ~4 % | the two price numerals, Book pill, links underline; small accent text uses **#1F6783** (5.6:1 on ground) |
| Line | — | **#BFD0D6** | hairlines | stats row, tables |
| Muted text | — | **#4A5A61** | captions | 6.4:1 on ground |
| Footer | (#322E21) | **#1E2B31** | footer | text #EEF3F4 |
First-screen saturated share: target ≤ 12 %, hard max 15 % (`scripts/check-first-screen.py`).

### Type (font_direction sans)
- Latin display: **Red Hat Display** (300, 400, 500, 700) — maps RT's Stahl-style display and numerals.
- Latin body: **Nunito Sans** (400, 600, 700).
- CJK: zh-TW **Noto Sans TC**, ja **Noto Sans JP** (黑體/ゴシック, no Mincho anywhere).
- Stacks (theme.json fontFamilies + fontFace, woff2 in assets/fonts, zh-TW/ja subsets; editor and front identical; copy shared/inc/editor-lang.php to inc/ and require it because style.css uses `:lang()`):
  - display: `"Red Hat Display", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif` — `:root:lang(zh*)` display stack `"Red Hat Display", "Noto Sans TC", "PingFang TC", "Microsoft JhengHei", sans-serif`; `:lang(ja)` `"Red Hat Display", "Noto Sans JP", "Hiragino Sans", "Yu Gothic", sans-serif`.
  - body: `"Nunito Sans", system-ui, -apple-system, "Segoe UI", sans-serif`; zh-TW body `"Nunito Sans", "PingFang TC", "Microsoft JhengHei", sans-serif` (no Noto TC, no JP font, per repo gate); ja body `"Nunito Sans", "Hiragino Sans", "Yu Gothic", "Noto Sans JP", sans-serif`.
- Scale (RT (b)): **price numeral 6rem (96px) 300 lh 1.0** (largest, ≥4.25 ✓) · **H1 4.5rem (72px) 300 lh 1.05 ls -.01em** (clamp 2.6rem→4.5rem) · H2 2.125rem (34px) 500 lh 1.4 ls .01em · H3 1.5rem (24px) 700 lh 1.5 · band caps 1.3125rem (21px) 700 · label (Latin) 1.0625rem (17px) 400 · body 1.125rem (18px) 400 **lh 1.6** (RT 1.5; +.1 for Latin reading) · small 0.875rem / 0.75rem. CJK sizes ≈0.75× display, body lh 1.85; fr/de `hyphens:auto`.

### Shape and spacing (RT (c)(d))
- Section padding 140 px top/bottom desktop (RT 140–150), 80 px at 390. Content container 1240 at x 100; price board 1066; tile grid 1040.
- Radius: photos 0 · price value cells 12 · label cells 10 · tiles 8 · cards 12 (FAQ cards 20 top corners) · pills 500. Borders 1 px; **no shadows** anywhere.
- Buttons: outline pill 280×55, 1 px #1E2B31, 16 px / 600 / ls .01em; filled pill (Book) #2A83A2 white text, same metrics.

---

## 6. Photos (18; IMAGERY = photo; Grok one at a time; Read every one; webp ≤300 KB, ≤2000 px; 0 cut-outs)

**STYLE (one string for all):** `Documentary photograph, natural window light, muted low-contrast colour grade, warm light timber against cool lake greens and blues, soft film grain, high-key and calm, real moment not posed, people seen from behind or in profile, no posed smiles, modern Scandinavian-style lakeside hotel interiors, international and mixed people, no Japanese elements, no text, no letters, no logos, no brands, no screens showing readable content.`

| # | Subject | Composition / ratio | Used on | Home |
|---|---|---|---|---|
| P01 | Guest (profile, from behind-left) on a video call at a long timber desk at a floor-to-ceiling lake window; a staff man's hand setting a coffee cup at the desk edge | 1.1:1 landscape-ish, window centre-right | Home hero slide 1; Rooms strip | ✓ |
| P02 | Monthly guest at a long breakfast table by the window, laptop and bowl, morning | 1.1:1 | Home hero slide 2; A week strip | ✓ |
| P03 | Coworking floor at 9:00, rows of timber desks, 3 people working, lake light | 1.1:1 | Home hero slide 3; Coworking head | ✓ |
| P04 | Wooden lake dock at dawn, mist, pines | 1:2 tall | Home sliver; Lakeside seam band | ✓ |
| P05 | Room key and a small bag on a made bed in a timber room, arrival | 0.9:1 | Home strip; Rooms strip; A week strip | ✓ |
| P06 | Guest stepping off the dock into the lake at lunchtime (from behind) | 0.9:1 | Home strip; Lakeside head; A week strip | ✓ |
| P07 | Person on a call inside a felt-lined call booth with a glass door | 0.9:1 | Home strip; Journal post 3 | ✓ |
| P08 | Long-table weekday dinner, 8 guests, warm lamps, lake dusk | 0.9:1 | Home strip; A week head | ✓ |
| P09 | Wide lake and low wooded hills, calm water, soft sky | 2.5:1 panorama | Home seam band; Journal seam band | ✓ |
| P10 | Guest at a narrow window desk with laptop, side view, plants outside | 0.63:1 tall | Home seam portrait; Lakeside portrait | ✓ |
| P11 | Desk detail: monitor, laptop, notebook, coffee, lake beyond | 1.1:1 | Home cowork strip; Coworking portrait | ✓ |
| P12 | Printer and supplies shelf, timber, tidy | 1.1:1 | Home cowork strip; Journal post 2 | ✓ |
| P13 | Meeting room for 8, timber table, lake window | 1.1:1 | Home cowork strip; Coworking seam band | ✓ |
| P14 | Host opening the coworking floor at 08:30, switching on lamps (profile) | 4:5 | Home §7; A week strip | ✓ |
| P15 | Front desk, staff writing in a booking book, guest with luggage (from behind) | 1.1:1 | Home §9; Book head; About seam band | ✓ |
| P16 | Window Studio room: bed, own window desk, lake | 4:5 | Rooms head; Journal seam portrait | |
| P17 | Breakfast spread on timber, hands pouring coffee | 3:2 | Rooms strip; Journal post 1 | |
| P18 | Kitchen lead and grounds staff talking at the back door (profile) | 0.63:1 | About seam portrait | |
No photo appears twice on the same page.

---

## 7. Motion and scroll effects (sp-scroll v1, assets copied unchanged; hero has no reveal)
| Effect | Where | Reference source and timing | sp-* setting |
|---|---|---|---|
| Hero slide wipe (not scroll) | Home hero photo pane | sa-nu Splide clip-path inset, 2.4 s, interval 5 s, cubic-bezier(.23,1,.32,1) | CSS keyframes in the theme; static under reduced motion / `?sp-static` / editor |
| **Wipe** | H2 headings of §3, §4, §6, §8 and inner-page H2s | sa-nu `up2show` clip-path wipe, .6 s ease, IO threshold .1 | `sp-reveal sp-reveal--wipe` (sp default 1.1 s; set `--sp-dur:.6s`, `--sp-ease:ease`) |
| **Fade up + stagger** | icon tiles §6, story cards §8, journal cards §10, inner tile/card rows | sa-nu fadeInUp 1 s ease, 10 px | `sp-stagger` parent + `sp-reveal sp-reveal--up`, `--sp-dist:10px`, `--sp-dur:1s` |
| **Zoom** | cowork right-edge photos §6, §7 photo, §9 photo | sa-nu ImageScaleIn 1.05→1, 1 s ease | `sp-reveal sp-reveal--zoom` |
| Split words | seam words | sa-nu ScrollTrigger words drift apart | `sp-reveal--left` / `--right` (24 px) |
No reveal on: hero, the horizontal strip items, the price board, forms, legal text.

### Parallax (required)
- **Home hero sliver pane**: wrapper Group `sp-parallax`, `--sp-par: 8%`, layer = P04 (`figure>img`); foreground caption is outside the moving layer. Reference: sa-nu narrow forest pane / Lenis smooth photo drift. Desktop ≥782 only (sliver hidden below).
- **Home seam band (§5)**: Cover/Group `sp-parallax`, `--sp-par: 10%` desktop, **6 % at ≤781 px (kept on mobile)**; background P09; foreground = the four words and the portrait P10 (portrait is a sibling outside the moving layer, positioned to overlap the seam). Reference: sa-nu "think" band scrub.
- Lakeside seam band (P04) also `sp-parallax` 8 %. Verified with `check-parallax.mjs` (≥6 px desktop and mobile; 0 under reduced motion).

---

## 8. Responsive rules (hard)
- **390 px first screen:** stacked: header (logo + menu button) → photo P01 at 4:5 (radius 0, full width) → text pane (H1 2.6rem, lede, pill) → stats row as 2×2 grid. **No vertical text, no absolutely positioned labels over text**; sliver pane and its vertical caption hidden (<782). Hero wipe still allowed (image only).
- 782–1099: hero photo 55 % / text 45 %, sliver hidden, stats 2×2.
- Price board (Home and Rates) at ≥782: **full content width (board 1066 or 100 % of the container), price column `white-space: nowrap`, right-aligned, never clipped**; at <782 each row stacks (label cell on top, full width, value below).
- **Every table** (Rates, FAQ, Rooms specs) becomes stacked label/value pairs on mobile; no horizontal page overflow at 390 and 1280.
- Horizontal strip: scrolls inside its wrapper; at 390 each photo 78 vw; page never overflows.
- Seam band at 390: band 360 px high, portrait 200×317 overlapping 90 px into the ground; words become one centred line under the band (static flow, not absolute).
- Right-edge strip at 390: 3 photos become a 3-column row of squares full-bleed under the text.

---

## 9. Forms (form contract v1 — `steps/form-contract-v1` exists)
- Copy `pipeline/assets/forms/shippress-forms.php` → `inc/shippress-forms.php`, CSS/editor JS → `assets/` unchanged, `require_once` in functions.php; patterns stay literal markup with a small PHP island; run `pattern_source.py`.
- **Book a stay (/book/)** and **Contact (/contact/)**: `shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) )` as its own block below the steps / address. Fallback (buffered literal markup) = the existing pill `<a class="wp-element-button nw-mail" href="mailto:stay@nagare-hotel.example?subject=…">` "Send your dates by email" (Book) / "Write to the front desk" (Contact) + line "Or call +00 46 555 0142, daily 07:00–22:00." Never link to /contact/ or /book/.
  - Recommended CF7/WPForms fields: **Book:** name*, email*, phone, stay (radio: Week / Month)*, room (radio: Desk Room / Window Studio)*, arrival date* (Sunday or Monday), number of weeks (select 1–12), second guest (checkbox), weekday dinners (checkbox), work needs (textarea: monitor, calls, meeting room), consent*, submit "Send my dates". **Contact:** name*, email*, subject (select: A stay / The coworking floor / Something else), message*, consent*, submit "Send".
- **Newsletter page** (standalone, slot on a white r12 card on #EEF3F4) and **footer newsletter column** (#1E2B31, every page, far below the first screen): `shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'stay@nagare-hotel.example', 'label' => forms_email, 'submit' => forms_subscribe, 'notice' => forms_mail_notice, 'subject' => forms_mail_subject ) )`. MailPoet → MC4WP → opt-in CF7/WPForms dedicated newsletter ID; no plugin → required `type=email` + submit "Subscribe", native mailto POST, visible notice "Opens your email app. Send the request to subscribe; you are not subscribed yet."
- Tokens: light — `--sp-form-accent:#2A83A2`, `--sp-form-on-accent:#FFFFFF`, `--sp-form-radius:10px`, `--sp-form-focus:#1E2B31` (2 px outline, offset 2 px), `--sp-form-surface:#FFFFFF`, `--sp-form-text:#1E2B31`, `--sp-form-border:#BFD0D6` (hover #4A5A61). Dark (footer) — accent #EEF3F4, on-accent #1E2B31, surface rgba(255,255,255,.06), text #FFFFFF, border rgba(255,255,255,.5), focus #C9DAE0. Error #A8392B / #F3B6AA (dark); success #2F6B4F / #B6DCC6 (dark). Inputs 52 px, label Nunito Sans 700 .875rem, input 1.0625rem, textarea min 140 px, checkbox/radio 20 px r4, submit pill height 52, 700 1rem.
- i18n semantic keys in `inc/i18n/en.php` first: `forms_email` ("Email address"), `forms_subscribe` ("Subscribe"), `forms_mail_notice`, `forms_mail_subject` ("The lake letter: subscribe"), `book_email_button`, `book_mail_subject` ("Stay request"), `contact_email_button`, `contact_mail_subject` ("Question for the front desk"), `forms_call_line`; localise in zh-TW, ja, fr, de; extract with `L10N_SEMANTIC=1`; check dynamic attributes in all locales.
- No `sp-reveal` on any form or its section; no form in the first screen.

---

## 10. Similarity to the reference (target 80 %)
| Dimension | Reference (RT) | Ours |
|---|---|---|
| Ground / band / label / white | #F2EEE4 / #E9E3D1 / #D1C8A6 / #FFF (warm pale) | #EEF3F4 / #E1EAED / #C9DAE0 / #FFF (same lightness steps, cool hue) |
| Ink | #322E21 | #1E2B31 |
| Accent, one only, on numerals | #EC572E | #2A83A2 (row palette) |
| First-screen saturation | 8.4 % | ≤ 12 % |
| Hero | 2 full-height panes 990 + 450, slide wipe 2.4 s cubic-bezier(.23,1,.32,1), interval 5 s | 3 panes 864 + 432 + 144, same wipe timing |
| Display type | Stahl-style sans 400; numerals ~96 px | Red Hat Display 300; numeral 96 px |
| H2 / H3 / body | 34/700/1.4 · 24/700/1.5 · 18/400/1.5 | 34/500/1.4 · 24/700/1.5 · 18/400/1.6 |
| Section padding | 140–150 px | 140 px |
| Containers | 1240 at x 100; board 1066; grid 1040 | same |
| Radius | photos 0; cells 10–12; tiles 8; pills 500; no shadow | same |
| Price board | label cell 150 + white cells, 20 px gaps, "+" joiner, outline pill 280×55 | same |
| Seam portrait | 352×557 straddling band ~575; 4 words 20 px white 60 % | 352×557, band 580; 4 words 20 px white 85 % |
| Icon tiles | 70 px dark squares, 3×2 | same |
| Right-edge strip | 3 × 284×258 flush right | same |
| Motion | fadeInUp 1 s/10 px; up2show .6 s; ImageScaleIn 1.05 1 s; scrub words | sp-reveal--up 1 s/10 px; --wipe .6 s; --zoom; --left/--right; parallax 8–10 % |
| Imagery | documentary photo, muted, timber vs green | same direction, lake blues |
Own: all photos (Grok), copy, names, logo (wordmark "Nagare" Red Hat Display 500 + small "Workation Hotel").

---

## 11. Home acceptance checklist
- [ ] First screen = split-photo-left / beside-photo / stats-row: photo 60 % left full height, text on pale pane right, 4-stat row at its foot, 10 % P04 sliver at right (desktop); not full-bleed overlay.
- [ ] All 6 KV items visible at 1440×900; hero wipe cycles P01→P02→P03 (static = P01 under `?sp-static`).
- [ ] H1 4.5rem Red Hat Display 300; price numeral 6rem; theme.json max ≥4.25rem.
- [ ] Block order §1–§11 as in §3; T1, T2, T3 unmistakable; icon tiles and right-edge strip present.
- [ ] Prices €690 / €2,150 (and the 6-item list on Rates) identical everywhere; 38 desks, 1 Gbps, 24 rooms consistent.
- [ ] ≥ 250 English words, ≥ 3 narrative paragraphs ≥ 20 words.
- [ ] 15 home image positions, no repeats on the page, no text/logos in photos, 0 cut-outs.
- [ ] Colours only from §5; saturated first-screen share ≤ 15 % (check-first-screen.py).
- [ ] Fonts via theme.json fontFace; editor = front (check-editor-fonts.mjs en + zh-TW).
- [ ] sp-reveal--wipe, --up + sp-stagger, --zoom present; no reveal in hero/strip/price board/forms; parallax on sliver (8 %) and seam band (10 %, 6 % mobile) passes check-parallax.mjs.
- [ ] 390 px: no horizontal overflow, no vertical/absolute labels overlapping in first screen; price board stacks; tables stack.
- [ ] ≥782 px: price board full width, prices nowrap right-aligned, not clipped (auto-gates.mjs pass).
- [ ] Exactly one top menu; footer newsletter slot works with no plugins (email + submit + notice).
