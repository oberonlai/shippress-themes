# Kogarashi Inn: design spec (stage 1, binding for implementation)

Slug `kogarashi-inn`, a country inn with six rooms (type `hospitality`, no WooCommerce needed; declare compatibility only). Design row b25-2: archetype **single-column-longform**, nav **centered**, first screen **top-bottom-halves**, page structure **day-schedule**, palette tetsu-onando (iron indigo-teal) (row hex `#2F484C`, family tide), font direction **serif** (Cormorant Garamond / Newsreader, CJK Noto Serif TC / JP), imagery **photo** (film grain). Five languages: en, zh-TW, ja, fr, de.

References (see `reference.md`, `reference-tokens.md`, `ref/*.jpg`):
- Main: **Kazenomori** https://goten-resort.jp/kazenomori/ (S5-Style; forest inn with 11 private rooms). Source of the misty ground, one-sentence-per-line copy, the dark intro band with a still background, the rotated small Latin label, the dashed rule, the leader-line "More ●" link, the back-to-top disc, the 1.2s fade-up and the overhead dinner-table first screen.
- Secondary: **URO** https://hotel-uro.jp/ (S5-Style; hotel, cafe and bar). Source of the live local clock/status line and the parenthesised numbered fields "(01)".
Borrow structure, technique, colour relationships and the key-visual concept. Do not copy their photos, copy, logos or a whole page layout. All photos and copy are ours.

Token references below are written `tok(a)`…`tok(g)` = sections of `reference-tokens.md`.

## 0. Fixed brand facts (every page and all five languages use these, no other numbers)

| Fact | Value |
|---|---|
| Name | Kogarashi Inn ("the first winter wind"; used as a name only, no Japanese motifs in imagery) |
| Founded | **2016**, by Ines Calloway and Rafael Oduya, in a restored 1890s farmhouse and barn |
| Place | **Hollin Moor**, a fictional fell village in Cumbria, England. Address: Fell Lane, Hollin Moor, Cumbria, England (no postcode). Time zone Europe/London (the clock uses it) |
| Getting there | Train to the fictional main-line station **Ashby Cross** (about 3 hours from London); free collection at **15:10** and **17:10**, a **25-minute** drive. Parking for 6 cars |
| Rooms | **6 rooms**, 12 guests at most: Garden Room ×2, Window Room ×2, Loft Room ×1, Hearth Room ×1 |
| Season | Open **1 February – 22 December**; closed 23 December – 31 January |
| Hours | Arrival **15:00–18:00**; departure by **11:00**; breakfast **07:30–09:00** (tables set at **06:40**); afternoon tea **15:30**; bath house **16:00–21:30**; dinner **19:00**, one sitting; quiet house from **22:00**; office and phone **09:00–18:00** daily |
| Contact | stay@kogarashi-inn.example · +44 1768 000 140 |
| Minimum stay | **2 nights** |
| Deposit / cancellation | **30%** deposit; free cancellation up to **14 days** before arrival |
| Currency | **GBP (£)** in every language; no converted prices |

### Rates (7 items; identical on Home, Rooms, Rates & Booking, Before You Come and all languages)
Per room per night for two guests, breakfast and dinner included.
| # | Item | Price |
|---|---|---|
| 1 | Garden Room (ground floor, door to the kitchen garden) | £210 |
| 2 | Window Room (first floor, tall window to the fell) | £240 |
| 3 | Loft Room (barn loft, skylight, sloped ceiling) | £265 |
| 4 | Hearth Room (own wood stove, two armchairs) | £310 |
| 5 | The Quiet Week: 7 nights, Sunday to Sunday, any room, 15% off | from £1,250 |
| 6 | Single occupancy, any room | £40 less per night |
| 7 | Packed walking lunch | £14 per person |

### People (7, fictional; named everywhere the same)
1. **Ines Calloway**, innkeeper and co-founder; sets the breakfast tables at 06:40 (the woman in the key visual).
2. **Rafael Oduya**, innkeeper, co-founder and cook of the evening meal.
3. **Maren Holt**, bread and breakfast.
4. **Kofi Mensah-Lyle**, kitchen garden, wood and the bath-house fire.
5. **Saoirse Dunn**, rooms and linen.
6. **Yuna Park**, evening kitchen and afternoon tea.
7. **Arthur Penhale**, walking guide (Tuesday and Thursday walks).

### Guest stories (3; on The House page, also posts 6 and two others in the Journal)
1. "Nine days in the Window Room": Hélène, a translator from Lyon, who came to finish a book and finished two chapters.
2. "The week we stopped checking the weather": Jonas and Miriam from Hamburg, a Quiet Week in March.
3. "Every November": Priya, who has come back each November since 2018 for the larches.

### The day (day-schedule; 8 time stamps, the same on Home, A Day and all languages)
| Stamp | Line (en) |
|---|---|
| 06:40 | Ines sets the tables by the east window; the kettle goes on. |
| 07:30 | Breakfast until nine: Maren's bread, eggs from the lane, porridge, tea. |
| 09:30 | Walks leave from the door; Arthur leads on Tuesdays and Thursdays. |
| 12:30 | Packed lunches on the fell, or soup in the reading room. |
| 15:00 | New guests arrive; the 15:10 car is back from Ashby Cross. |
| 16:00 | The bath house is warm until half past nine. |
| 19:00 | Dinner at one long sitting, four courses from the garden and the valley. |
| 22:00 | The house goes quiet; lamps stay on in the hall. |

### Booking flow (4 fields, URO numbering)
(01) Check dates on Rates & Booking or write to us. (02) We reply within one day and hold the room for 48 hours. (03) A 30% deposit confirms the stay. (04) Seven days before arrival we send an arrival letter with the train times, the 15:10/17:10 collection and the pace of the day.

---

## 1. Signature techniques (three; obvious at a glance, never diluted)

### T1. House-log lines: one sentence per line, each with a hairline time stamp (Kazenomori intro copy, `ref/scroll-kaze-900.jpg`, `tok(b)`)
- Reference: Kazenomori sets its story copy in a narrow offset column, one sentence (or clause) per line, line-height ≈2.4, small serif, on a dark still photograph or on the misty ground. Each line stands alone, so the block reads like a log of the place.
- Ours: the same narrow column, each line one sentence, and (our addition, tied to the day-schedule structure) a **time stamp** before each line: stamp in Cormorant Garamond 500 1.0625rem tabular figures (`font-variant-numeric: tabular-nums`), colour main `#2F484C` (white on dark), then a **28px × 1px hairline** stub (same colour at 50%), 14px gap each side, then the sentence in Newsreader 1.0625rem.
- Geometry (desktop 1440): column width **400px** for plain lines, **560px** with stamps (stamp column 56px + stub 56px + text 448px). Line-height **2.3** (tok(b) 2.4, rounded for 17px). Rows separated by nothing (no borders, no dots, no vertical line) — it must not read as a timeline. Column offset: starts at **x 640** (≈44% of the viewport) on the light ground; at x 760 on the dark intro band (`tok(c)` text column offset to x 985 at 1440 scaled to our container).
- Home: block 2 (intro band, lines without stamps, white), block 4 (the day, 8 stamped lines). Also the hero tagline sentence (one line).
- Mobile: column full width minus 24px gutters; stamp row stays inline (stamp 48px + stub 20px + text), line-height 2.0, text may wrap but each sentence begins on its own row.
- Not to be diluted: one sentence per row (never merged into a paragraph); line-height ≥2.2 on desktop; stamps always present in the day blocks; no bullets, dots or vertical connecting line.

### T2. Misty cloud ground with a rotated brick label and a closing dashed rule (Kazenomori news / stay ground, `ref/scroll-kaze-2700.jpg`, `ref/scroll-kaze-5400.jpg`, `tok(a)`, `tok(d)`, `tok(f)`)
- Reference: between dark photo bands the page ground is a near-white with a soft, blurred cloud texture; every section title has a tiny Latin word (News, Stay, Cuisine) rotated 90° in brick-pink beside it; the news block closes with a 1px dashed ink rule across the 920px container.
- Ours:
  - Ground `#F3F5F3` with the cloud texture made in CSS only (no image), class `ki-mist` on full-width Groups:
    `background: radial-gradient(58% 42% at 18% 28%, rgba(255,255,255,.95), rgba(255,255,255,0) 70%), radial-gradient(46% 38% at 78% 62%, rgba(214,222,220,.55), rgba(214,222,220,0) 72%), radial-gradient(38% 30% at 44% 88%, rgba(228,233,231,.75), rgba(228,233,231,0) 70%), radial-gradient(30% 26% at 92% 12%, rgba(255,255,255,.8), rgba(255,255,255,0) 70%), #F3F5F3;` The texture must be visible (contrast of cloud patches vs ground ≥ 4% lightness), not flat.
  - Section head: a **rotated label** (Cormorant Garamond italic 400, 0.6875rem / 11px, letter-spacing 0.3em, colour accent `#A86A5A`, `writing-mode: vertical-rl`) placed 10px left of the heading's top line, then the heading (Cormorant Garamond 500, x-large 2.6rem, lh 1.25, ink `#1F2B2D`) set over two lines with `<br>`. Labels are marked-up text (`p.ki-vlabel`), not CSS `content`.
  - Closing rule: `border-top: 1px dashed #3A4446` across the content width (920px) under the notice row and at the foot of every inner-page head.
- Home: blocks 3 (notes), 4 (the day), 5 (rooms), 6 (table), 8 (people), 9 (rates and booking) all sit on `ki-mist`; dashed rules close blocks 3 and 9.
- Mobile (<782px): the label turns horizontal (`writing-mode: horizontal-tb`, sits 8px above the heading) so no vertical text appears on phones.
- Not to be diluted: cloud patches visible; the label is brick (not grey) and rotated on desktop; the rule is dashed (not solid, not dotted) and 1px dark ink, not pale grey.

### T3. House clock on the seam + parenthesised status fields (URO live time and "(01)" fields, `ref/uro-first.jpg`, `ref/scroll-uro-2700.jpg`)
- Reference: URO keeps a live local clock "Nagasaki, Japan 15:22:47" and parenthesised fields "(Elevation377)", "(01)" on its pale ground; time is part of the identity of the stay.
- Ours: a real **clock face** (not digital text) sitting exactly on the seam between the two halves of the first screen, plus a column of parenthesised status fields in the top half.
  - Clock: circle **Ø120px** desktop / **Ø84px** mobile, fill `#F3F5F3`, 1px border `#2F484C`; 12 tick marks 1px × 6px (`#2F484C` at 60%, the 12/3/6/9 ticks 1px × 10px); hour hand 2px × 30px and minute hand 1px × 44px `#1F2B2D`, rounded ends; centre dot 5px accent `#A86A5A`; label "House time" Newsreader 0.5625rem caps, letter-spacing 0.2em, inside the face at 68% height. Built in markup (a Group with spans, or inline SVG in a pattern), editable label.
  - Placement: in flow, never `position:absolute`: it is the first child of the bottom-half Group, centred, `margin: -60px auto -60px` (−42px on mobile) with `position: relative; z-index: 2`, so half sits on the mist and half on the photo. It is outside the parallax layer (does not move).
  - Time: default markup shows **06:40** (hour hand at 200°, minute hand at 240°): that is what screenshots, no-JS, `?sp-static` and reduced-motion show. `assets/house-clock.js` (≤1KB, no library, no scroll listener) sets the hands from `Intl.DateTimeFormat('en-GB',{timeZone:'Europe/London',hour:'2-digit',minute:'2-digit'})` at load and every 60s (`setInterval`), hands rotate with a 0.6s `cubic-bezier(.215,.61,.355,1)` transition; it does nothing when `html.sp-no-motion` is set or `prefers-reduced-motion: reduce`.
  - Status fields: URO parentheses, Newsreader 0.8125rem, lh 1.9, ink `#3A4446`, numbers in Cormorant: "(01) Hollin Moor, Cumbria" / "(02) Six rooms, open February to December" / "(03) Breakfast 07:30–09:00". Translated text, same numbers.
- Home: first screen (clock + fields), block 9 (small clock Ø64 beside the booking fields "(01)…(04)", plus "(Arrival 15:00–18:00)").
- Not to be diluted: an analogue face with two hands (not a digital readout); it straddles the seam (half on each half); fields keep the round parentheses and two-digit numbers.

### Supporting details (not counted as signatures, but required)
- **Leader-line link "More ●"** (Kazenomori `tok(d)`): text link in Cormorant Garamond 1.125rem, preceded by a **28px × 1px** hairline stub `#3A4446` (gap 12px) and followed by a **26px** disc `#1F2B2D` with a 4px white dot in the centre (gap 10px). The only "read more" style (buttons only in the header and in block 9). Hover: disc becomes `#2F484C`, stub grows to 40px (0.3s ease).
- **Back-to-top disc** (Kazenomori first screen): fixed bottom-right 24px, Ø80 desktop / Ø56 mobile, `#1F2B2D`, white Cormorant "Back to top" on three lines 0.6875rem with a small 1px chevron above; link to `#top`; lives in the footer template part (markup text, not CSS content). On mobile only "Top".
- **Dark intro band** with a still photo (Kazenomori `con_video_intro`, `tok(g)`): implemented with `sp-parallax` (section 8).

### Continuation to inner pages (all 10 pages; ≥4 required)
Every inner page head is the same unit: `ki-mist` ground → rotated brick label + two-line heading (T2) → a T1 lead of 4–6 one-sentence lines → small clock Ø56 with one parenthesised status field for that page (T3) → dashed rule (T2). Then the page body.
| Page | T1 | T2 | T3 |
|---|---|---|---|
| The House (about) | 6 lines on 2016 and the farmhouse | label "House"; three guest stories each closed by a dashed rule | "(Since 2016) Hollin Moor" |
| A Day (day-schedule) | the full 8 stamped lines, large (1.25rem), each followed by a 2-sentence note | label "Day" | live clock Ø120 (same as hero) + "(Now)" field |
| Rooms | 4 lines per room type | label "Rooms"; room list rows end in dashed rules | "(Arrival 15:00–18:00) (Departure 11:00)" |
| Table (dining) | dinner described one course per line at 19:00 | label "Table" | "(Breakfast 07:30–09:00) (Dinner 19:00)" |
| Walks & Bath | three walks one per line with distance and time | label "Walks" | "(Bath house 16:00–21:30)" |
| Rates & Booking | 4 lines on what the price includes | label "Rates"; rates table closed by dashed rule | booking fields "(01)–(04)" |
| Getting Here | stamped lines for the journey ("15:10 The car leaves Ashby Cross.") | label "Way" | "(Collection 15:10 / 17:10)" |
| Before You Come (FAQ) | answers set one sentence per line | label "Notes"; each Q closed by dashed rule | "(Office 09:00–18:00)" |
| Journal (index, archive, single) | intro 3 lines | label "Journal"; notice-row cards as on home | dates in the "(2026.11.02)" parenthesised form |
| Contact | address, phone, email one per line | label "Write" | "(Office 09:00–18:00)" |

---

## 2. Key visual concept

### (1) The reference first screen: concept, story, signature motion
- What it draws (Kazenomori, `ref/kaze-first.jpg`): a full-bleed, dark, looping video of a dinner table seen from directly above: a hot slate with sliced beef at the centre, glazed plates and a salad around it, warm low light. Logo with a one-line tagline at the top left ("In the forest, a world for two"), nav across the top, two outline buttons ("Before your stay", "Check availability") at the top right, a play arrow ringed with turning text in the exact centre, a dark round "Back to top" disc at the bottom right.
- The story: a private house in the forest where the meal is the first picture of the stay; a slow place for two.
- Signature motion: the table video drifts slowly; the ring of text turns; on scroll the intro copy fades up (1.2s) over a still, fixed photograph.
- Secondary (URO, `ref/uro-first.jpg`): pale ground, a live local clock and status fields at the bottom edge.

### (2) Our scene (country inn, same composition, same motion idea, same image type)
- The meal is still the first picture, but it is **breakfast** (our day starts at 06:40, the opening line of the log): a high-angle, near-overhead film-grain photograph of a breakfast table by a tall window, the innkeeper Ines's hands setting down a teacup among bread, butter, boiled eggs and a teapot on linen; at the right edge a guest in an armchair, only knees, a wool blanket and an open book visible. Morning window light, soft, high-key, 35mm grain.
- Composition (row: top-bottom-halves): the first screen is split. **Top half** (0–44% height) is the misty ground with the header, the two-line title and the tagline at the left and URO-style status fields at the right. **Bottom half** (44–100%) is the breakfast photograph, full bleed, edge to edge. The **clock** sits on the seam at the centre, exactly where Kazenomori's turning play ring sits on its table.
- Story line: "A quiet week, kept by the house." The clock says the house runs on its own time; the photograph says the first thing that happens here is a table being laid.
- Motion: the table photo drifts slowly (sp-parallax 8%) as Kazenomori's video drifts; the clock's hands move with real local time (our version of the turning ring); copy below fades up 1.2s (blocks 2+).

### (3) KV checklist (all six on the first screen, visible at 1440×900 and 390×844)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Full-bleed overhead dinner-table video | Film-grain near-overhead breakfast table by a window, Ines's hands setting a cup, a guest's knees and book at the right edge | bottom half, y 44%–100%, x 0–100% (full bleed); mobile 390×330 under the top half | `sp-parallax`, `--sp-par: 8%` desktop / 6% mobile | **P01** |
| 2 | Logo + one-line tagline at the top left | Header wordmark (wind mark + "Kogarashi Inn") at the top left; in the top half the H1 "A quiet week, / kept by the house." (4.5rem) and one tagline sentence under it | header x 120; H1 at x 120, y 120–290 | none (no reveal on the hero) | — |
| 3 | Outline + solid buttons at the top right ("Before your stay", "Check availability") | "Check dates" outline 1px `#2F484C` and "Book a week" solid `#2F484C` white text, 116×38, radius 2px | header right, x 1050–1320 | hover only | — |
| 4 | Play arrow in a turning-text ring at the centre | Analogue house clock Ø120 on the seam with "House time" in the face | centre x 50%, centred on the seam y 44% | hands set to Europe/London time, 60s tick, 0.6s ease; static 06:40 under reduced motion / sp-static | — |
| 5 | URO bottom status line and "(Elevation377)" fields | Three parenthesised fields "(01) Hollin Moor, Cumbria / (02) Six rooms, open February to December / (03) Breakfast 07:30–09:00" | top half right column x 900–1320, bottom-aligned to the seam minus 32px; mobile under the tagline | none | — |
| 6 | Dark round "Back to top" disc at the bottom right | Ø80 `#1F2B2D` disc "Back to top" | fixed, bottom-right 24px (over the photo) | hover: lift 2px | — |
(Stage-a's items 5–6, the portrait beside the lines and the small photo sliding in at the edge, are kept in home block 2; they are continuations of the KV, not first-screen items.)

---

## 3. Home page

### First screen (1440×900; all KV items above)
- Header 64px, ground `#F3F5F3` (same as the top half, no line between them): left wind mark (three curved 1.5px strokes, 22px, `#3F6B58`) + "Kogarashi Inn" Cormorant 500 1.375rem; **centred** nav Newsreader 0.8125rem, letter-spacing 0.08em, gap 26px (tok(b) nav 11.7px scaled): The House · A Day · Rooms · Table · Walks & Bath · Journal · Contact; right the two buttons. Static header (not sticky, no transparent-to-white swap), no bottom border on the home first screen; inner pages get a 1px `rgba(31,43,45,.08)` bottom border.
- Top half: `min-height: calc(44svh - 64px)`, `ki-mist` ground. Left (x 120, max-width 760): H1 Cormorant 500 **4.5rem**, lh 1.04, letter-spacing −0.005em, ink `#1F2B2D`, two lines; 20px below, one sentence Newsreader 1.0625rem lh 1.9 `#3A4446`, max 36em: "Six rooms on Hollin Moor for people who have left the city: breakfast by the window, a walk, a bath at four, dinner at seven." Right column: the three status fields (T3).
- Bottom half: alignfull Group `sp-parallax ki-hero-photo`, height `56svh` (min 360px, max 620px), P01 as a direct `img` (object-fit cover, object-position 50% 55%); clock first child on the seam.
- Saturated share target ≤ 8% (gate threshold for `check-first-screen.py`: 15%). Grade P01 muted; no coloured field anywhere on the first screen except the two buttons and the clock dot.
- Mobile 390×844: header 60px (mark + name, "Book" text link, Menu); top half: H1 2.6rem (en) in 2–3 lines, tagline, fields as 3 rows; photo 390×330 (`sp-parallax`, 6%); clock Ø84 centred on the seam. **No vertical text, no absolutely positioned labels over text.** The Back-to-top disc (Ø56) sits over the photo, not over text.
- Forbidden on the first screen: tables, forms, search boxes, a giant centred word, any saturated colour field.

### Block order
| # | Pattern | Purpose | Layout and photos | Copy |
|---|---|---|---|---|
| 1 | `front-cover` | KV, entry | top/bottom halves as above; **P01**; clock; fields | ~40 words |
| 2 | `front-intro` | who the house is (T1 + dark band) | alignfull dark band `#1F2B2D`, height ≈ 760px desktop, **`sp-parallax` `--sp-par: 10%`** with **P02** (fells at dawn past the house, graded down: overlay `rgba(31,43,45,.55)`). Left at x 200: portrait **P03** 3:4, 300px wide, 8px radius, `sp-reveal--up`; heading (white) "Six rooms, / one slow house." with rotated label "House" in `#D9B3A8`; right column at x 760, 400px: 6 white one-sentence lines lh 2.3. Small **P04** 0.6:1 (208px wide) flush to the right viewport edge (x 1232–1440), its top at 70% of the band, overhanging the band's foot by 120px into block 3, radius 8px on the left corners only, **`sp-reveal--left`** | 6 lines ≈ 70 words |
| 3 | `front-notes` | news from the house (Kazenomori puts News straight after the intro) | `ki-mist`; container 920px; rotated label "News" + heading "Notes from / the house."; two latest posts side by side: 165px 4:3 thumb (8px radius) + title (Newsreader 500 1rem) + date in accent `#A86A5A` "(2026.11.02)" + 2-line excerpt; a thin 48px arrow line under each; "More ●" leader link under the heading; block closed by the dashed rule. Thumbs = featured images of posts 1 and 2: **P10**, **P11** | Query Loop, 2 posts |
| 4 | `front-day` | the day-schedule (T1, the page structure) | `ki-mist`; left 5/12: **P05** (hands shaping dough at dawn) 4:5, 8px radius, `sp-reveal--up`; right from x 640: label "Day" + heading "How a day / is paced."; the 8 stamped lines (section 0) with T1 stubs; "The whole day ●" → A Day | 8 lines ≈ 110 words |
| 5 | `front-rooms` | which rooms are kept (Kazenomori Stay) | `ki-mist`; **P06** (Window Room) 1.38:1 flush to the **left** viewport edge, width 60% (x 0–864), radius 8px on the right corners only (`tok(c)`, `tok(e)`); right column from x 985, 320px: label "Rooms" + heading "Six rooms, / four kinds."; 3 lines; four hairline rows "Garden Room · 2 rooms · £210", "Window Room · 2 · £240", "Loft Room · 1 · £265", "Hearth Room · 1 · £310" (prices nowrap right); "Rooms ●". Padding-top 13rem (tok(c) 16em) | ≈ 70 words |
| 6 | `front-table` | the table (Kazenomori Cuisine, not mirrored edge-flush) | `ki-mist`; centred container 920px: label "Table" + heading "Dinner at seven, / one long table." at left over 5 one-sentence lines at x 560; under them **P07** (dinner table overhead at lamplight) 3:2 at the container width, 8px radius, `sp-reveal--up`; **P08** (bread basket) 4:5, 200px wide, overlapping P07's bottom-left corner by 64px outward and 80px down, 8px radius, 6px `#F3F5F3` border | 5 lines + 40-word paragraph |
| 7 | `front-walks` | breath + walks and the bath house | alignfull photo band 21:9 (min-height 520px), **`sp-parallax` `--sp-par: 8%`** with **P09** (wood-fired bath house steaming at dusk, fells beyond); foreground bottom-left inside the container: white Cormorant 2.6rem "Walks from the door, / a bath at four." + 2 lines Newsreader white + "Walks & Bath ●" (white stub and disc `#F3F5F3` with a dark dot). Text sits on a bottom gradient `linear-gradient(transparent 40%, rgba(31,43,45,.6))`, not on a box | ≈ 40 words |
| 8 | `front-people` | the seven people (no grid of faces) | `ki-mist`; left 7/12: **P12** (staff at the long kitchen table before service) 3:2, 8px radius, `sp-reveal--up`; right 5/12: label "People" + heading "Seven people / keep the house."; 7 rows, each name (Cormorant 500 1.25rem) + role (Newsreader 0.875rem `#5C6668`), 1px solid `rgba(58,68,70,.25)` between rows; one 45-word paragraph under | ≈ 80 words |
| 9 | `front-stay` | rates + how a stay is booked (close) | `ki-mist`; container 920px; label "Rates" + heading "What a stay / costs."; the **rates table, full container width**, 7 rows (section 0), item left, price right nowrap; note line "Breakfast and dinner included. Minimum two nights. 30% deposit; free cancellation up to 14 days before arrival."; then the booking unit: small clock Ø64 left + four URO fields "(01)…(04)" (section 0) one per line + "(Arrival 15:00–18:00)"; buttons "Check dates" (outline) and "Book a week" (solid); closed by the dashed rule. No reveal on the table | ≈ 90 words |
Footer: dark `#1F2B2D`, white text: wordmark, address, phone, email, office hours, season line; second column links: Getting Here, Before You Come, Rates & Booking, Journal; language switcher; © line. Back-to-top disc.

English home ≥ 250 words with narrative in blocks 2, 4, 6 and 8 (≥3 paragraphs/line groups). CJK home ≥ 500 characters.

### Comparison with the four most recent themes (home block order)
| # | Koe Interpreters | Hibari Flight | Ibuki Cardiology | Waku Exhibits | **Kogarashi Inn** |
|---|---|---|---|---|---|
| 1 | full-bleed bridge photo + slanted columns | window hero, one big corner | white band + full photo + info bar | full-bleed showreel still | **mist top half + breakfast photo bottom half, clock on the seam** |
| 2 | white sheet statement | approach (stickers) | problem statement | photo-filled statement | **dark parallax band, portrait + one-sentence lines, edge photo** |
| 3 | briefs gradient band | circuit statement | clinics (portrait + ink tile) | halls, edge-flush rows | **news notice row with dashed rule** |
| 4 | booth cover photo | licences | ticker | planning hour band | **stamped day log beside a 4:5 photo** |
| 5 | meeting day rows | lesson navy band slide strip | first visit | cover photo band | **rooms: one 60% left-bleed photo + rows** |
| 6 | rates | airfield breath | proof | prices table | **table: wide photo + overlapping small photo** |
| 7 | process | crew | fees | … | **bath-house parallax band** |
| 8 | notes | fees | follow-up | … | **seven people as name rows** |
| 9 | request CTA band | stories / trial | people / news / close | … | **rates + booking fields + small clock** |
Why not alike: no window/framed hero, no ink tile, no edge-flush *alternating* rows (only one bleeding photo), no statement band with word fill, no slide strip, no ticker; news comes third (Kazenomori order) instead of near the end; the shapes that carry the page (cloud ground, rotated brick label, dashed rule, stamped one-sentence lines, analogue clock on a seam) appear in none of the four. Hibari also had top-bottom halves, but its seam carried a single big rounded corner window; ours is flat mist over a full-bleed photo with a clock.

---

## 4. Inner pages (10 pages + journal templates; no sidebar)
Every page: inner head unit (section 1, continuation table) → body → "More ●" leader link to the next page in the day order → footer.
1. **The House** (`page-the-house`, about): head "The house / since 2016." + 6 lines (farmhouse 1890s, restored 2016, two innkeepers, why six rooms, why a week, what we don't do: no TV, no events). Body: P13 (kitchen garden in frost) 3:2 at the container width; the 3 guest stories as three narrative sections (≈120 words each) set in a 600px column, each closed by the dashed rule, with P16 (writing desk) 4:5 at 320px beside story 1. People list (7 names, rows as home block 8, no photo).
2. **A Day** (`page-a-day`, day-schedule): live clock Ø120 in the head; the 8 stamped lines at 1.25rem, each followed by a 2-sentence note in 0.9375rem `#5C6668`; photos placed after the matching stamp: P01 after 07:30 (3:2 crop), P10 after 09:30, P09 after 16:00, P07 after 19:00. Each photo 3:2 at 720px width, 8px radius, `sp-reveal--up`.
3. **Rooms** (`page-rooms`): four room sections in the home block-5 shape, the photo side **stays left** each time (no alternation; left-bleeding photos at 52% width): Garden Room P14, Window Room P06 (plus P04 0.6:1 at the right edge with `sp-reveal--left`), Loft Room P15, Hearth Room P17. Each: label, name, 4 lines, facts row (bed, bath, view, sleeps 2), price per room per night for two from section 0 (e.g. "£210 per night") nowrap. Then "(Arrival 15:00–18:00) (Departure 11:00)".
4. **Table** (`page-table`): breakfast and dinner as two T1 line groups (breakfast stamped 07:30, dinner 19:00, one course per line); P07 and P08; dietary note paragraph; packed lunch £14.
5. **Walks & Bath** (`page-walks-and-bath`): three walks one per line ("Hollin Tarn, 7 km, 2½ hours, from the door"; "The larch path, 4 km, 1½ hours"; "Ridge of the Moor, 14 km, 5 hours, with Arthur on Tue/Thu"); P11 and P10; bath house section with P09 in a `sp-parallax` band (`--sp-par: 8%`, same treatment as home block 7); bath house hours.
6. **Rates & Booking** (`page-rates`): the rates table (7 rows, full width), notes (deposit, cancellation, minimum stay, season, children over 10 welcome, dogs in the Garden Rooms only, £20 per stay); the four booking fields with the clock Ø64; a contact form is allowed here below the fields (no reveal on the table or form).
7. **Getting Here** (`page-getting-here`): stamped journey lines (12:00 London, 15:00 Ashby Cross, 15:10 the car, 15:35 Hollin Moor; and the 17:10 run); P18 (country station platform and a plain car waiting, no logos) 3:2; driving directions as 4 one-sentence lines; parking for 6 cars.
8. **Before You Come** (`page-before-you-come`, FAQ): 10 questions, each a Cormorant 1.25rem question + answer one sentence per line, each closed by the dashed rule; P15 (Loft Room skylight) 4:5 beside the first 3 questions.
9. **Journal** (`home.html` index, `archive.html`, `category.html`, `tag.html`, `single.html`): index uses the home notice-row card (165px 4:3 thumb + title + "(date)" + excerpt) in two columns, dashed rule every two rows; single: head unit with category as the rotated label, featured image 3:2 at 920px, text column 640px, lh 1.9.
10. **Contact** (`page-contact`): head "Write to / the house."; address, phone, email, office hours one per line; P03 (the innkeeper at the window) 3:4; a simple form (name, email, dates, message) is allowed; season line.
11. Standard extras: 404 and search use the head unit + "More ●" home link. `pages` in theme-meta.json: home, about (= The House), news (= Journal index), article (single post), category, tag, newsletter (= Journal index), contact.

---

## 5. Colour (from Kazenomori `tok(a)`; tetsu-onando from the row)
| Role | Ours | Reference | Source / change | Use | Share |
|---|---|---|---|---|---|
| Ground (mist) | `#F3F5F3` | `#FBFCFB` | tok(a) ground, −3% lightness so the white cloud patches show | page ground, top half, `ki-mist` | ~45% |
| Dark ground | `#1F2B2D` | `#202020`–`#333333` | tok(a) charcoal photo ground, same lightness, hue moved toward the row's tetsu-onando | intro band, footer, back-to-top disc, "More" disc, hands of the clock | ~30% (with dark photos) |
| Main (tetsu-onando) | `#2F484C` | — (Kazenomori has no main colour) | design row hex; used where Kazenomori uses its dark ink buttons | solid button, clock ring, time stamps, links on hover | ≤ 6% |
| Text ink | `#3A4446` | `#444444` | tok(a) text, same lightness, cooled | body text, dashed rule | text |
| Heading ink | `#1F2B2D` | `#333333` | tok(a) | headings | text |
| Muted | `#5C6668` | — | derived | roles, notes, captions | text |
| Accent (brick) | `#A86A5A` | about `#B87463` | tok(a) brick label, −5% lightness for contrast on mist (4.1:1 at 11px italic is not text-critical; dates use 0.8125rem) | rotated labels, dates, clock centre dot | < 1% |
| Accent on dark | `#D9B3A8` | — | brick lifted for the dark band | rotated label on block 2 | < 1% |
| Mark green | `#3F6B58` | about `#2F7A4D` | tok(a) logo green, desaturated to sit with tetsu-onando | wind mark only | < 0.5% |
- Not beige: the ground is a cool grey-green mist. No saturated field anywhere. Recent themes' mains (Koe, Hibari navy `#001650`, Ibuki, Waku) are not reused: ours is a grey teal.
- First-screen saturated share (HSV s>0.5, v>0.25): reference 9% (Kazenomori), 0% (URO); ours target **≤ 8%**, gate threshold **15%** (row note cap 30%).

## 6. Type (font_direction: serif)
- Latin display: **Cormorant Garamond** 500 (headings, H1, stamps, names) and 400 italic (rotated labels). Latin body/UI: **Newsreader** 400/500 (+400 italic). Both OFL, woff2 in `assets/fonts/`. Reference uses Yu Mincho for everything (tok(b)); a serif pair is the faithful translation.
- zh-TW (Ming serif): headings `"Cormorant Garamond", "Noto Serif TC", "Songti TC", "PMingLiU", serif`; body `"Newsreader", "Songti TC", "PMingLiU", "MingLiU", serif` (body stack must NOT contain the bundled Noto Serif TC nor any JP family: repo rule).
- ja (Mincho serif): headings `"Cormorant Garamond", "Noto Serif JP", "Hiragino Mincho ProN", "Yu Mincho", serif`; body `"Newsreader", "Hiragino Mincho ProN", "Yu Mincho", serif`.
- fr/de: as en; `hyphens: auto` on body and on headings ≤ 2.6rem.
- Loading: theme.json `fontFamilies` + `fontFace` for Cormorant Garamond, Newsreader, Noto Serif TC subset (500), Noto Serif JP subset (500), so the editor iframe equals the front end (`check-editor-fonts.mjs`). style.css uses `:lang()` → copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it. CJK subset: Hokuto/Hada replacement method. Every file in theme-meta.json `fonts[].files` with licence; every family named in readme.txt.

Scale (theme.json fontSizes):
| Preset | Size | Use | Source |
|---|---|---|---|
| small | 0.8125rem | nav, fields, dates, captions | tok(b) nav 11.7px ×1.1 |
| base | 1.0625rem | body, T1 lines (lh 2.3), en body lh 1.9 | tok(b) story copy 13px, scaled for Latin readability |
| medium | 1.25rem | names, FAQ questions, A Day lines | — |
| large | 1.75rem | inner sub-heads | — |
| x-large | 2.6rem | section headings (two lines, lh 1.25) | tok(b) section title 24px vertical, enlarged for horizontal Latin |
| xx-large | **4.5rem** | H1 on the first screen and inner page heads (`clamp(2.6rem, 5.2vw, 4.5rem)`) | max preset ≥ 4.25rem rule |
- Rotated label 0.6875rem, letter-spacing 0.3em (tok(b) 9–10px wide-tracked). Nav letter-spacing 0.08em. Headings letter-spacing 0. CJK headings ≈0.75× en size, lh 1.45; CJK body lh 1.85, size 1rem.

## 7. Spacing, shapes, images (with source tokens)
- Content container 920px for text sections (tok(c) 920px); wide 1200px for the header and the top half; full bleed for bands and edge photos.
- Section padding-top: 6rem news/notice (tok(c) 6em), 10rem standard, 13rem before the rooms block (tok(c) 16em); padding-bottom 6rem. Mobile: 4.5rem / 6rem (tok(c) 9–10em at 13px ≈ 6rem).
- Radius: photos **8px** (tok(d)); edge-bleeding photos 8px on the inner corners only; buttons **2px** (tok(d)); no shadows anywhere (tok(d)).
- Buttons 116×38 (tok(d) 105×35 scaled), Newsreader 0.8125rem, letter-spacing 0.06em.
- Image ratios (tok(e)): hero full bleed (16:9 source, shown ≈2.9:1 crop desktop); rooms photo 1.38:1 at 60% bleed left; edge portrait 0.6:1 at 208px; notice thumbs 4:3 at 165px; table photo 3:2; walks band 21:9.
- Overlap (tok(e)): P04 overhangs the dark band foot by 120px; P08 overlaps P07's corner by 64px/80px; the clock straddles the seam by half its height.
- Photo treatment: film grain is in the photos (STYLE); no CSS filters, no duotone, no masks other than the radius.

## 8. Scroll effects (sp-scroll; 3 kinds; hero only parallax)
| Effect | sp-* class | Where | Source and timing |
|---|---|---|---|
| Fade-up on view | `sp-reveal sp-reveal--up` with `--sp-dur: 1.2s; --sp-dist: 30px; --sp-ease: cubic-bezier(.215,.61,.355,1)` | home blocks 2 (P03, heading, lines as one group), 3 (cards group), 4 (P05 and line column), 5 (text column), 6 (P07), 8 (P12 and rows); inner page bodies (photos, story sections). Never on the hero, the rates table, forms or legal text | Kazenomori `motion_fadeInUp slow`: inview once, 1.2s, easeOutCubic `cubic-bezier(0.215,0.61,0.355,1)`, translate 20% (capped to 30px), no stagger (tok(g)) |
| Edge photo slide-in | `sp-reveal sp-reveal--left` (`--sp-dist: 30px`, 1.2s, same easing) | home block 2: P04 at the right viewport edge; Rooms page: the facts row of each room | Kazenomori small portrait sliding in from the right edge (inview, once, 1.2s easeOutCubic) |
| Parallax | `sp-parallax` | hero bottom half P01 `--sp-par: 8%` (mobile 6%); block 2 dark band P02 `--sp-par: 10%` (mobile 6%); block 7 P09 `--sp-par: 8%` (mobile 6%); Walks & Bath page band P09 8% | Kazenomori fixed-background intro (`position: fixed` video, linear, continuous) and drifting hero video; implemented only by sp-scroll's CSS scroll-driven animation / IO fallback |
- Not used: Lenis smooth scroll, header colour swap, stagger, count, marquee.
- If the sp-scroll version does not read `--sp-dur`/`--sp-ease`, set them on the theme's `.sp-reveal` override in style.css (variables only; the JS and class names stay unchanged).

### Parallax (required)
- Primary: **hero bottom half** (`front-cover` bottom Group, class `sp-parallax`), background = **P01** as a direct `img` (the moving layer), foreground = the clock (outside the layer, does not move) and nothing else; `--sp-par: 8%` desktop, `6%` at <782px. Reference counterpart: Kazenomori's slow-drifting table video.
- Second: **block 2 dark band**, P02 as `.sp-parallax__layer` img under a fixed overlay; foreground text and P03/P04 are not in the moving layer; `--sp-par: 10%` / mobile 6%. Reference counterpart: the intro band's fixed video background while the copy scrolls.
- Third: block 7 P09, 8% / 6%.
- reduced-motion, `?sp-static`, no-JS, editor: no movement. `check-parallax.mjs` must show ≥6px layer drift on desktop and mobile, 0 under reduced motion.

## 9. Responsive rules
- 390px: no horizontal overflow; no vertical text (rotated labels become horizontal under 782px); no absolutely positioned label over text anywhere on the first screen (the clock is in flow; the back-to-top disc sits over the photo area at the bottom-right).
- T1 rows: stamp + short stub + text inline; text wraps under itself (hanging indent), not under the stamp.
- Block 2 at <782px: band becomes a column: P03 (full width minus 48px), heading, lines; P04 moves into the flow after the lines at 60% width aligned right (keeps `sp-reveal--left`), no overhang.
- Block 5 at <782px: photo full bleed 4:3 (radius 0), text below. Block 6: P08 overlap reduced to 24px.
- **Rates table**: at ≥782px it spans the **full container width (920px)**, two columns, item column auto, price column `width: 11rem; white-space: nowrap; text-align: right`, never clipped at 800 and 1280. At <782px every row stacks: item on one line, price on its own line right-aligned (`display:block`), separated by the 1px row rule. Any other table (room facts, FAQ data) stacks the same way on phones.
- Header ≥960px full centred nav; <960px: wordmark, "Book" link, Menu button opening the core overlay navigation.

## 10. Images (18; one STYLE string; Grok, one at a time, read each)
STYLE (exact, on every prompt):
`documentary film photograph, 35mm, visible fine film grain, soft high-key natural window light, muted palette of mist grey, slate teal, oatmeal linen, pale wood and dark stoneware, quiet country inn in the English fells, modern simple interiors, diverse adults, calm candid moment, no text, no logos, no brand marks, no signage lettering, no Japanese elements`

| ID | Subject / composition | Ratio / size | Used on (never twice on one page) | Home |
|---|---|---|---|---|
| P01 | near-overhead breakfast table by a tall window: a woman's hands setting a teacup among bread, butter, boiled eggs, a teapot on linen; at the right edge a guest's knees under a wool blanket and an open book in an armchair | 16:9, 2000×1125 | Home cover (KV); A Day (07:30) | ★ |
| P02 | the fells at dawn seen from the house terrace, mist in the valley, stone wall, low light (will be darkened) | 16:9, 2000×1125 | Home intro band (parallax) | ★ |
| P03 | innkeeper (woman, 50s) at a window holding a tray, side light, waist-up | 3:4, 1200×1600 | Home intro band portrait; Contact | ★ |
| P04 | guest reading in a window chair, close, vertical, blanket and teacup | 0.6:1, 1080×1800 | Home intro edge photo; Rooms (Window Room side) | ★ |
| P05 | hands shaping bread dough on a floured kitchen table at dawn, lamp light | 4:5, 1280×1600 | Home day block; Table | ★ |
| P06 | Window Room: low bed with wool blanket, tall window to the fell, reading lamp | 1.38:1, 2000×1450 | Home rooms; Rooms (Window Room) | ★ |
| P07 | dinner table at 19:00 from above, lamplight, dark stoneware and slate, six places | 3:2, 2000×1333 | Home table; A Day (19:00); Table | ★ |
| P08 | bread basket and butter dish on linen, close | 4:5, 1000×1250 | Home table overlap; Table; Journal post 4 | ★ |
| P09 | wood-fired timber bath house on a deck steaming at dusk, fells beyond | 21:9, 2000×857 | Home walks band (parallax); A Day (16:00); Walks & Bath band | ★ |
| P10 | muddy walking boots by the door and packed lunches in plain paper on a bench | 4:3, 1600×1200 | Home notice (post 1 featured); A Day (09:30); Walks & Bath | ★ |
| P11 | larch path in autumn mist, two small walkers far away | 4:3, 1600×1200 | Home notice (post 2 featured); Walks & Bath | ★ |
| P12 | six staff, diverse, at the long kitchen table with tea before service, candid | 3:2, 2000×1333 | Home people; Journal post 5 | ★ |
| P13 | kitchen garden in morning frost, kale beds, stone wall, the farmhouse behind | 3:2, 2000×1333 | The House; Journal post 3 | |
| P14 | Garden Room: bed and a glazed door to the kitchen garden | 4:3, 1600×1200 | Rooms (Garden Room); Rates & Booking head | |
| P15 | Loft Room: sloped timber ceiling, skylight, white bed | 4:5, 1280×1600 | Rooms (Loft Room); Before You Come | |
| P16 | writing desk by a window, notebook, teacup, rain on glass | 4:5, 1280×1600 | The House (story 1) | |
| P17 | Hearth Room: small wood stove lit, two armchairs, sheepskin | 4:5, 1280×1600 | Rooms (Hearth Room); Journal post 6 | |
| P18 | small country station platform at dusk, a plain dark car waiting, no signs readable | 3:2, 2000×1333 | Getting Here | |
Binding per-page list: Home P01–P12 (12 positions, no repeat). The House P13, P16. A Day P01, P10, P09, P07. Rooms P14, P06, P04, P15, P17. Table P05, P07, P08. Walks & Bath P11, P10, P09. Rates & Booking P14. Getting Here P18. Before You Come P15. Contact P03. Journal posts 1–6 featured = P10, P11, P13, P08, P12, P17.
- 18 images, all photos, 0 cutouts, each ≤300 KB and ≤2000px webp, one readme.txt line each (AI-generated, CC0). Re-generate any with text, logos, broken hands or faces, or off-STYLE colour.

Journal posts (6; categories: House notes, Walks, Kitchen; tags: autumn, breakfast, quiet-week, guests, walks):
1. "Walking lunches are back for the autumn" (Walks) P10 — 2026.11.02
2. "Larches turning on the Hollin path" (Walks) P11 — 2026.10.24
3. "The first frost on the kitchen beds" (Kitchen) P13 — 2026.10.15
4. "Bread at six" (Kitchen) P08 — 2026.09.30
5. "Quiet Weeks for March are open" (House notes) P12 — 2026.09.12
6. "Nine days in the Window Room" (House notes, guest story 1) P17 — 2026.08.28

## 11. Similarity table (target ≈80% to the main reference)
| Dimension | Reference value (token) | Ours |
|---|---|---|
| Ground colour | `#FBFCFB` misty white with cloud texture, ~45% (a) | `#F3F5F3` + CSS cloud gradients, ~45% |
| Dark ground | `#202020`–`#333` photo/charcoal, ~35% (a) | `#1F2B2D` band + dark photos, ~30% |
| Text ink | `#444` (a) | `#3A4446` |
| Accents | brick `#B87463` label, green `#2F7A4D` logo (a) | `#A86A5A` labels/dates, `#3F6B58` mark |
| First-screen saturation | 9% (a) | ≤ 8% |
| Type family | Mincho serif for all (b) | Cormorant Garamond + Newsreader, Noto Serif TC/JP |
| Story copy | one sentence per line, lh ≈2.4 (b) | one sentence per line, lh 2.3 + time stamps |
| Section label | tiny wide-tracked Latin, rotated 90°, brick (b)(f) | 0.6875rem italic, 0.3em, rotated, `#A86A5A` |
| Nav | 11.7px, centred row (b) | 0.8125rem, centred row |
| Container | 920px text rows (c) | 920px |
| Section padding | 6em–16em (c) | 6rem–13rem |
| Edge photo | 60% width bleeding left, text at x 985 (c)(e) | rooms photo 60% bleeding left, text at x 985 |
| Radius | 8px photos, 2px buttons (d) | 8px / 2px |
| Rules | 1px dashed ink closing news (d) | 1px dashed `#3A4446` closing news, rates, inner heads |
| More link | text + 26px dark disc with white dot + stub (d) | same proportions: 28px stub, 26px disc, 4px dot |
| Back to top | 80px dark disc, bottom right (f) | Ø80 `#1F2B2D`, bottom right |
| Hero image | full-bleed overhead dinner table video (e) | half-height full-bleed near-overhead breakfast table photo |
| Small edge photo | 0.6:1 vertical sliding in at the right edge, overlapping the intro band (e) | P04 0.6:1, 208px, right edge, overhangs the band by 120px |
| Reveal | fadeInUp 1.2s, easeOutCubic, 20%, once (g) | sp-reveal--up 1.2s, cubic-bezier(.215,.61,.355,1), 30px, once |
| Still-background intro | fixed video bg while copy scrolls (g) | sp-parallax 10% on the dark band |
| Hero centre object | turning text ring + play arrow | analogue house clock (URO time idea) |
| Header | transparent → white 52px bar (g) | static mist 64px bar |
Deliberate differences: half-height hero (row first_screen), horizontal headings (Latin site; the vertical feel is kept by the rotated label), the clock (secondary reference), a static header.

## 12. Home acceptance checklist
1. First screen 1440×900: mist top half with H1 4.5rem two lines left and three "(01)–(03)" fields right; full-bleed P01 bottom half from ≈44%; analogue clock Ø120 centred on the seam (half on each); header with centred nav and the two buttons; Back-to-top disc bottom right. No table/form/search/giant centred word. `check-first-screen.py` ≤ 15% (target ≤ 8%).
2. 390×844: same order, clock Ø84 on the seam, no vertical text, no overlapping labels, no horizontal scroll.
3. KV checklist items 1–6 all visible on the first screen.
4. T1: block 2 (6 white lines) and block 4 (8 stamped lines with 28px stubs) set one sentence per row, lh ≥2.2, no bullets or vertical line.
5. T2: cloud texture visible on blocks 3–6, 8, 9; rotated brick labels on every section head (horizontal on phones); dashed rules close blocks 3 and 9.
6. T3: clock on the seam and small clock in block 9 with the four booking fields.
7. "More ●" leader links (stub + 26px disc) and no other read-more style.
8. Block order equals section 3; 12 home photo positions P01–P12, none repeated; P04 overhangs the dark band; P08 overlaps P07.
9. Rates table at 800 and 1280: full 920px width, price column nowrap, right-aligned, not clipped; stacked on 390.
10. Numbers identical to section 0 (prices, 6 rooms, hours, 7 people, 2016, Hollin Moor) on the home, inner pages and five languages.
11. Motion: `check-parallax.mjs` passes (hero, block 2, block 7 drift ≥6px desktop and mobile; reveals hidden before and visible after; reduced motion static); hero has no reveal; `?sp-static` shows the clock at 06:40.
12. Fonts: Cormorant Garamond / Newsreader on en, Noto Serif TC / JP headings on zh-TW / ja, same in the editor; max preset 4.5rem.
13. English home ≥ 250 words with ≥3 narrative groups.
