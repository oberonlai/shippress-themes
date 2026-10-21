# Taiyo Solar Works: design spec (stage B, binding for implementation)

Slug `taiyo-solar-works`, regional solar installation company, `type business`, `category business-services`, no WooCommerce. References (S5-Style): **R1 BEST HOME EP** (besthome-ep.com, S5 gallery /11768/) = main source for layout and colour; **R2 URBAN HOME** (urbanhome-tt.com, S5 gallery /11763/) = one technique only (the circles), and the roof-pitch edge. Measurements are in `reference.md`. Borrow structure, technique and colour relationships only. No copy, photos, logos or whole-page layouts.

Stage 1 (this round) = front page in en only. Everything about inner pages below is for stage 2 but is fixed now, so the front page and inner pages agree.

Fixed brand facts (every page and all five languages use these, never re-invent them):
- **Taiyo Solar Works**, founded **2011**, workshop and office at **214 Foundry Lane, Marlow**, in the fictional **Alder Valley**. ("Taiyo" = sun; named by co-founder Tomás Ibarra after his first job on a Japanese-owned solar farm. Mention once on About, nowhere else.)
- Founders **Ruth Calloway** (electrical engineer, design and permits) and **Tomás Ibarra** (roofer, installs).
- Service area (within about 60 miles of Marlow): **Marlow, Kenning, Ashby, Halden, Pell Harbor, Westbrook**.
- Hours: **Mon–Fri 7:30–17:00**; **Sat 9:00–13:00** roof assessments by appointment only; Sun closed. Phone **(555) 014-2290**, email **hello@taiyosolar.example**.
- Track record wording: "more than 600 roofs since 2011" (no other volume claims, no awards, no media).
- Currency **USD** in every language. All savings are labelled **"est."** / "estimated" and the basis is given once per page in a small note: *"Estimates use the system's modelled yield and a $0.20/kWh household rate ($0.15/kWh for commercial). Your bill depends on your tariff, usage and weather. We do not guarantee savings."*
- No real panel, inverter or battery brands. No certification bodies. Incentives are mentioned only as "may be eligible; we check this during the assessment".

---

## 1. Signature techniques (three, all obvious at a glance)

Checked against the "do not repeat" list: not Hada's L-band / thin Latin across a photo edge / arches, not Michi's, not Hibi's gold dot + uppercase label / rounded portrait cut by a band / NEW–AFTER, not Nami's twin photos + central title / centre rule / convex arc, not Hatsumei's polygons / (001) / dark bottom band, not Kagi's chevron / white chips / rotated watermark. **R1's huge wide-tracked wordmark crossing the seam (A2) is deliberately NOT used** because it reads as Hada's "Latin lettering across a photo edge".

### T1. Split first screen: full-height roof photo | graded graphite panel with an inset portrait photo (R1 A1 + A3)
- Reference (R1 first screen, `ref/besthome-first.png`): the viewport is cut exactly in half. Left half = one full-height dark photograph to the top and bottom edges. Right half = a soft vertical grey gradient panel (lighter warm grey at the top, deeper grey-blue at the bottom). On the panel, slightly right of its centre, sits a small portrait photo (about 300×400 at 1440, 3:4) with a 2-line statement beside it. On the photo's left edge, a vertical rotated label "work" with a numbered ring "09" and the work type under it.
- Taiyo (desktop 1440×900, `min-height: 100svh`, capped at 960 px):
  - Left 50%: photo **P1** (finished family home roof with panels, tight crop, little sky), `object-fit: cover`, to the top, bottom and left edges; no overlay tint except a 0→30% black gradient on the bottom 25% so the vertical label reads.
  - Right 50%: panel `linear-gradient(172deg, #A7A9A8 0%, #6E7275 48%, #43474B 100%)`. Text white.
  - Inset photo **P2** (installer on a roof, harness visible), 3:4, **300×400 px** at 1440 (`width: clamp(220px, 21vw, 320px)`), square corners, positioned with its left edge at 58% of the panel width and its top at 30% of the viewport height. 1 px `rgba(255,255,255,.35)` outline offset 10 px (`outline-offset: 10px`).
  - Headline block to the LEFT of the inset photo inside the panel (left edge 8% into the panel, bottom-aligned with the inset photo bottom): small label "[01] Installations, Alder Valley" (Source Sans 3 0.75rem, 0.16em tracking, uppercase, white 80%), then H1 in Merriweather 300, `clamp(2.4rem, 3.4vw, 3.25rem)`, line-height 1.18, **left-aligned**, max 3 lines: "Solar roofs, / fitted by the people / who sign them off." Under it one 1rem sentence and two links: solid button "Book a free roof assessment" (ground `#F1F1EF` fill, graphite text) and text link "See installations →" (white, underline).
  - Vertical rotated label on the photo's left edge (R1 "work 09"): 24 px from the left, centred vertically: "install" (rotated 90°, Source Sans 3 0.8rem, 0.2em tracking, white) + a **32 px hairline ring** containing "07" + "Kenning · 8.8 kW" (rotated). The number = the featured case number (C2 below).
  - Bottom of the panel: thin news line (R2 B3, supporting): 1 px white 50% rules top and bottom, 56 px tall, spanning panel width minus 8% each side: "Oct 2026 | Now booking November roof assessments in Halden and Ashby | ●" (dot = accent `#B9822E`, 8 px).
  - Header sits over the split: logo left (over the photo, white), nav right (over the panel, white). See section 4.
- Mobile (<782 px): photo P1 first at 62svh full width, the panel below it (same gradient), the inset P2 at 60% width floated right overlapping up into the photo by 64 px, headline below. The vertical label becomes a horizontal caption on the photo bottom-left.
- **Must not be diluted:** the seam is exactly 50% and runs the full viewport height; the panel is a visible grey gradient ending dark (not flat pale, not beige; Tsumugi's pale-stone mistake); the inset photo is a separate small portrait (not cropped from P1) with ≥ 24% panel margin around it; the headline is left-aligned, never centred, never above 3.25rem; nothing (form, table, search) on the first screen.

### T2. Two overlapping hairline circles carrying the case figures (R2 B1)
- Reference (R2 first screen): two thin 1 px circles about 250 px wide overlap each other by about 10% and overlap the imagery behind them; each holds a tiny English caption, a big figure and a short line.
- Taiyo, home block 3 (featured installation): photo **P4** 3:2 occupies columns 1–7 of the 12-column 1200 grid. Two circles **260 px** diameter (`clamp(200px, 18vw, 260px)`), 1 px `#43474B` border, transparent fill with `backdrop-filter` none (plain), overlapping each other by **28 px** horizontally, the pair straddling the photo's right edge: the left circle's centre sits on the photo edge, the right circle is fully on the ground `#F1F1EF`; vertical position: centres at 62% of the photo height. Left circle (over the photo): white border and white text. Right circle (over the ground): graphite border and text. No `mix-blend-mode`.
  - Circle 1: caption "System size" (0.72rem, uppercase, 0.14em), figure "8.8 kW" (Merriweather 300, 3.25rem), line "+ 13.5 kWh battery".
  - Circle 2: caption "Yearly output (est.)", figure "11,000" (3.25rem) + "kWh", line "≈ $2,150 a year saved (est.)" with the figure in accent `#B9822E`.
  - Text columns 9–12: "[02] Featured installation", H2 "A gabled roof in Kenning, with a battery for the evenings.", 2 paragraphs (~90 words), link "Read the Kenning case →".
- Mobile: photo full width, the circles 180 px, side by side overlapping by 20 px, pulled up 90 px over the photo bottom edge (left one white over photo, right one partly over ground; keep both borders visible).
- **Must not be diluted:** two circles, really overlapping each other AND the photo edge; 1 px hairline (not filled discs, not shadows, not ≥ 2 px); figures ≥ 3rem; the "(est.)" stays.

### T3. Big-numeral spec cards as the installation strip (R1 A5, with R1 A4 [01] labels)
- Reference (R1 mid-page, `ref/besthome-contact-sheet.png`): white cards on a pale grey ground, 3-up, each with one big navy numeral, a small unit, a small caption; sections open with a bracketed number label "[01]" above a thin serif heading; generous space between sections.
- Taiyo, home block 4 "[03] Installations": section ground `#E6E6E3` (one step darker than page ground), full bleed. A 4-up row of white `#FFFFFF` cards (gap 24 px, no radius, no shadow, 1 px `#D6D7D5` border). Each card top to bottom: photo 4:3 (P5–P8, edge to edge in the card); then 28 px padding; small caption "C1 · Marlow · 2024" (0.75rem uppercase, mid grey `#6E7275`); the **big numeral = system size** in Merriweather 300 **4.5rem** graphite `#43474B` with unit "kW" 1rem beside it baseline-aligned; a 1 px rule; two small lines "≈ 8,000 kWh / yr est." and "≈ $1,600 / yr saved est."; arrow link "Case →". Under the row, left: "Figures are estimates…" note (0.8rem), right: "All installations →" link.
- Numeral colour stays graphite (R1 uses navy; we keep the relation dark numeral on white card but avoid navy because of Hatsumei/Kagi). The only accent on the card is a 24×2 px `#B9822E` bar above the caption.
- Every section heading on every page uses the "[0n]" label (Source Sans 3 0.75rem, 0.16em, uppercase, mid grey, square brackets in graphite) directly above a Merriweather 300 heading. Section spacing 128–160 px on desktop (`clamp(5rem, 10vw, 10rem)`).
- **Must not be diluted:** numerals ≥ 4.25rem; cards white on a visibly darker grey ground (not white on white); numeral = kW (the defining figure), not a price; 4 cards on desktop, 2 at tablet, 1 + horizontal scroll-snap on mobile.

### Supporting (not counted, used once each on home)
- **Roof-pitch edge (R2 B4):** the top edge of the dark band (home block 6) is a shallow gable: `clip-path: polygon(0 64px, 50% 0, 100% 64px, 100% 100%, 0 100%)` with the band starting 64 px higher; pitch about 5° at 1440 (never steeper than 64 px rise). Used also at the top of the footer on every page.
- **Thin news line (R2 B3):** first screen bottom, and as the Journal list style (block 8).

### Continuation to inner pages (stage 2, required)
| Page | T1 split + inset | T2 two circles | T3 numeral cards / [0n] labels |
|---|---|---|---|
| Installations (case wall) | page head = T1 at 70svh: left = P14 (commercial roof), panel with inset P5, H1 "Installations" | — | all 7 cases as T3 cards, 3-up, with filter links (Residential / Battery / Commercial) as plain text links |
| Case study single (C1–C7, use one template) | head = T1 at 70svh: left = the case photo, inset = a second photo from the list; H1 = town + kW | two circles straddling the right edge of the case's main photo: size / yearly output est. (+ battery line where present) | spec row of 3 white numeral cards (kW, kWh/yr est., $ /yr est.) + [0n] labels for "The roof", "The install", "The numbers" |
| Residential Solar | T1 head (P1 crop variant left, P3 inset) | circles over P3: "4–10 kW" / "from $11,800" | price lines as numeral cards (4–6 kW, 7–10 kW) |
| Batteries & EV Charging | T1 head (P9 left, P13 inset) | circles: "13.5 kWh" / "from $10,900" | numeral cards: battery, EV charger |
| Commercial | T1 head (P14 left, P16 inset) | circles over P14: "96 kW" / "≈ 118,000 kWh est." (C6) | numeral cards for C6, C7 |
| How It Works (free roof assessment process) | T1 head (P12 left, P10 inset) | — | the 4 steps as numeral cards "1–4" (big numeral = step, not a time line, horizontal row) |
| Our Installers | T1 head (P11 left, P15 inset) | — | each installer as a row: 3:4 portrait + name + specialty + "years on roofs" numeral (not a 4-up grid) |
| Pricing & Financing | small T1 head (40svh) | circles: "$190 / yr" maintenance / "15-yr" workmanship | price table (tables fine off the first screen) + [0n] |
| Journal / single post | — | — | thin news-line list (date | title | dot); single: [0n] label = category |
| Free Roof Assessment / Contact | T1 head (P12 left, P2 inset) | circles: "45 min" on-site / "5 days" written proposal | contact form pattern below the head (never in the first screen), hours and towns |
At least Installations, Case Study, Residential, Batteries, Commercial, Contact carry T1 + T2 or T3 = well over 4 pages. Footer on every page: roof-pitch top edge, graphite `#43474B`.

---

## 2. Front page blocks (order fixed)

Grid: content 1200 px at 1440 (`contentSize` 1200, `wideSize` 1320), section spacing `clamp(5rem, 10vw, 10rem)`. Copy total ≥ 320 English words, ≥ 3 narrative paragraphs.

| # | Pattern slug | Purpose | Layout | Photos | Copy |
|---|---|---|---|---|---|
| 1 | `front-split` | first screen, T1 | 50/50: photo left, gradient panel right with inset portrait, headline, news line | P1 (left), P2 (inset) | label, H1 (3 lines), 1 sentence, 2 links, news line |
| 2 | `front-roofwork` | what we do, voice of the company | [01] label + H2 left (cols 1–5) "We design, permit, fit and look after rooftop solar in the Alder Valley."; right cols 7–12: two paragraphs (~120 words) and a 3-item fact line (since 2011 · 600+ roofs · 15-yr workmanship) separated by hairlines; under the paragraphs a 4:5 photo P3 at cols 9–12 offset down 80 px | P3 | ~140 words |
| 3 | `front-featured-case` | featured installation, T2 | photo cols 1–7, circles across its right edge, text cols 9–12 | P4 | ~100 words |
| 4 | `front-installations` | case strip, T3 | darker grey band, 4 numeral cards, note + link | P5, P6, P7, P8 | captions + figures |
| 5 | `front-services` | services and starting prices | [04] label + H2 left; a ruled list (5 rows, 1 px `#C9CAC8` rules): name (Merriweather 1.5rem) / one line / "from $…" (right, tabular figures) / arrow. Rows: Residential solar, Batteries, EV charging, Commercial roofs, Maintenance. A 3:4 photo P9 sits at cols 1–4 `position: sticky; top: 120px` beside the list (list cols 6–12) | P9 | ~80 words |
| 6 | `front-assessment` | how the free roof assessment works | full-bleed graphite `#43474B` band with roof-pitch top edge, white text; left cols 1–5 [05] + H2 "A free roof assessment, then a written proposal." + 1 paragraph; right cols 7–12 photo P10 3:2; below both, one horizontal line of 4 steps separated by hairlines (number 2.5rem white, title, one line) | P10 | ~110 words |
| 7 | `front-crew` | named installers | [06] label; wide photo P11 3:2 at cols 1–7; right cols 8–12 a ruled list of the 4 installers (name, role, "years on roofs" figure); 1 short paragraph above the list | P11 | ~90 words |
| 8 | `front-notes` | journal as a thin news line | [07] label + H2 "Field notes" left cols 1–3; right cols 5–12 three rows (date | title | category | dot), 64 px rows, hairlines, no images | — | 3 titles |
| 9 | `front-close` | free roof assessment CTA, mirrors T1 | 50/50 again but mirrored: graphite panel LEFT (towns, hours, phone, button), photo P12 RIGHT; inset none (keeps the first screen's inset unique) | P12 | ~60 words |

Front-page photo positions: P1, P2, P3, P4, P5, P6, P7, P8, P9, P10, P11, P12 = **12**, no repeats.

### Comparison with the last three themes
| # | Hada Dermatology (#268) | Michi Motors (#264) | Hibi Wear (#260) | **Taiyo Solar Works** |
|---|---|---|---|---|
| 1 | inset hero with L-band + arches | full-bleed cover, staggered headline | full-bleed cover | **50/50 split, graded panel, inset portrait** |
| 2 | doctor letter | family intro | lineup | **roofwork: heading left / text + offset photo right** |
| 3 | concerns index | lineup | straddling photo + statements | **featured case with overlapping circles** |
| 4 | chapters (wide bands) | big-numeral rows | wash split photo | **4 white numeral cards on grey band** |
| 5 | doctors line | dimmed service band | fabrics masonry | **ruled service list + sticky photo** |
| 6 | standard band | locations rows | 21:9 city | **graphite band with roof-pitch edge, 4 inline steps** |
| 7 | fees list | steel band | promise band | **crew: wide photo + ruled installer list** |
| 8 | journal 3-col | journal 2 posts | journal 3 posts | **news-line journal, no images** |
| 9 | visit close | close | close | **mirrored split close** |
Why not alike: no full-bleed cover (Michi/Hibi), no letter/family intro, the case content (2 circles + 4 numeral cards) is two consecutive case blocks unique to this industry, Michi's big numerals are rows of text while ours are white photo cards with kW numerals, the journal has no images (all three used image cards), and the close mirrors our own first screen instead of a centred band. Also differs from Tsumugi/Nami/Kasumi (no twin photos, no central rule, no tables on home).

### First-screen composition rules
No huge centred text, no table, form or search. H1 ≤ 3.25rem left-aligned on the panel. Saturated area (S>.35, V>.25) target **≤ 5%**, gate **8%** (`check-first-screen.py --max 8`; R1 measured 5.0%, R2 excluded as colour source). Achieve with P1 graded muted (dark grey-blue panels, slate roof, ≤ 12% sky, pale overcast or late soft light), P2 muted, the only UI colour = the 8 px ochre dot.

---

## 3. Inner pages (stage 2)
1. **Home** (above).
2. **Installations** – case wall: T1 head, intro (60 words), filter text links, 7 T3 cards (C1–C7), estimate note, CTA to assessment.
3. **Case Study** single (template for C1–C7; build full content for C2 Kenning and C6 Westbrook, others shorter): T1 head, T2 circles, "[01] The roof" (orientation, pitch, shading), "[02] The install" (days on site, crew names), "[03] The numbers" (3 numeral cards), homeowner quote (fictional, plain, no names of real people), next/prev case.
4. **Residential Solar**: what's included, 4–6 kW and 7–10 kW price cards, roof types we fit, warranty summary, FAQ (5).
5. **Batteries & EV Charging**: 13.5 kWh battery add-on, EV charger, when a battery makes sense (honest), price cards.
6. **Commercial**: flat-roof ballast and pitched warehouses, $/W range, C6 and C7, process for businesses.
7. **How It Works**: the free roof assessment in 4 steps (numeral cards), what we check, what you get (written proposal in 5 working days), timeline from yes to switch-on (typically 4–8 weeks incl. permits).
8. **Our Installers**: founders + 4 installers as rows (portrait 3:4 + text), safety approach (harness, edge protection, two-person rule).
9. **Pricing & Financing**: full price table (section 6), financing options, incentives wording, warranty table.
10. **Journal**: news-line index; 3 posts minimum (titles in section 6).
11. **Free Roof Assessment / Contact**: T1 head, T2 circles, contact form pattern (works without plugins: plain HTML form or mailto fallback), towns list, hours, phone, map-free address block.

---

## 4. Colour and type

From R1 (grey ground / graphite gradient panel / dark numerals on white cards, saturated 5.0%) with a muted sun-ochre accent in R1's small-numeral role; R2 only gave the optional terracotta. Not beige: the ground is a neutral cool-warm grey.

| Role | Hex | Source | Use | Share |
|---|---|---|---|---|
| Ground (base) | `#F1F1EF` | R1 page ground `#F0F0F0` | page ground | ~50% |
| Card / white | `#FFFFFF` | R1 cards | T3 cards, header on scroll | ~10% |
| Band grey | `#E6E6E3` | R1 card-row ground | T3 section ground | ~8% |
| Graphite (main) | `#43474B` | R1 panel bottom / footer `#3A3A3A`, `#484858` | panel end, dark band, footer, body ink, numerals | ~25% |
| Mid grey (sub) | `#6E7275` (text) / `#8C8F90` (lines, panel mid) | R1 `#686868`/`#585858`, panel gradient | captions, labels, rules | ~5% |
| Accent (sun ochre) | `#B9822E` | R1 small coloured numerals role (navy re-hued to ochre for the sun; muted) | news dot, 24×2 card bar, est. savings figure, link underline hover | ≤ 2% |
| Spot (optional) | `#B8694A` | R2 terracotta poster | journal category dot only | ≤ 0.5% |
| Hairline | `#C9CAC8` | derived | rules | — |
Contrast: graphite on ground 8.9:1; white on graphite 9.4:1; `#6E7275` on ground 4.7:1 (captions OK); ochre on ground ~3.0:1, so ochre only for ≥ 1.25rem figures, dots and bars, never small body text. Avoids Kagi indigo, Hatsumei #0D3770, Nami #0B5D3A, Hibi teal, Hada sage, Michi's main.

Typography: **Merriweather** (headings, 300 and 400; RFN/OFL TTF → woff2) + **Source Sans 3** (body 400/600, labels). Body 1.0625rem, line-height 1.7. Sizes: small 0.8125rem, medium 1.125rem, large 1.5rem, x-large `clamp(2rem, 3.2vw, 2.75rem)` (section H2), xx-large `clamp(2.6rem, 4vw, 3.25rem)` (H1 on panel), **huge 4.5rem** (T3 numerals, max; ≥ 4.25rem rule met). Tabular figures (`font-variant-numeric: tabular-nums`) for all prices and kW.

Header: one top menu. Logo "Taiyo Solar Works" Merriweather 400 1.15rem + a 14 px hairline sun ring (circle) before it; nav Source Sans 3 0.875rem: Installations, Residential, Batteries & EV, Commercial, How It Works, Pricing, Contact; right a small outline button "Free roof assessment". Transparent over the T1 split (white), becomes `#FFFFFF` with graphite text after scroll (or static white on inner pages if simpler, but over T1 heads keep white-on-image). Mobile: menu button opens an overlay in graphite.

---

## 5. Photos (17, one STYLE string, Grok one at a time)

STYLE = `35mm documentary photograph, natural daylight, soft overcast or low late-afternoon light, muted desaturated colour grade with slate greys and warm neutrals, visible fine film grain, realistic, contemporary neutral international suburb, diverse people, workers wearing harnesses, helmets and gloves where on a roof, no text, no logos, no brand names, no signage, no Japanese elements`

| ID | Subject / composition | Ratio | Used on | Stage 1 |
|---|---|---|---|---|
| P1 | Two-storey gabled family home, dark slate roof fully fitted with black solar panels, tight three-quarter view from street level, sky ≤ 12% of frame, overcast | 4:5 (crop to half viewport) | Home 1 (left) · Residential head | ✔ |
| P2 | Installer on a pitched roof fastening a panel rail, harness and rope visible, helmet, seen from slightly above, vertical | 3:4 | Home 1 inset · Contact inset | ✔ |
| P3 | Close-up of panel corners and aluminium frame with roof tiles, raking light, grain | 4:5 | Home 2 · Residential inset | ✔ |
| P4 | Gabled house in a quiet street (Kenning case) with panels on the south slope, garage with wall-mounted battery cabinet visible through open door | 3:2 | Home 3 · Case C2 | ✔ |
| P5 | Brick terrace house with a neat 6 kW array, street view (C1 Marlow) | 4:3 | Home 4 · Case C1 · Installations inset | ✔ |
| P6 | Single-storey bungalow, grey roof, small array (C3 Ashby) | 4:3 | Home 4 · Case C3 | ✔ |
| P7 | Modern timber-clad home with panels and a car charging in the driveway (C4 Halden) | 4:3 | Home 4 · Case C4 | ✔ |
| P8 | Coastal house with weathered cladding and panels, pale haze (C5 Pell Harbor) | 4:3 | Home 4 · Case C5 | ✔ |
| P9 | Plain unbranded battery cabinet and inverter on a garage wall, electrician's hands checking a cable, no screens with text | 3:4 | Home 5 · Batteries head | ✔ |
| P10 | Surveyor with tablet (screen not visible) and homeowner standing in a driveway pointing at the roof, conversation | 3:2 | Home 6 · How It Works inset | ✔ |
| P11 | Crew of four (mixed genders and backgrounds) beside a plain white work van with ladders, no lettering, morning | 3:2 | Home 7 · Installers head | ✔ |
| P12 | Installer measuring a roof slope with a tape and inclinometer on a ladder at eave height | 3:2 | Home 9 · How It Works head · Contact head | ✔ |
| P13 | Unbranded wall-mounted EV charger in a tidy garage, cable to a car | 3:4 | Batteries inset | |
| P14 | Low warehouse flat roof with long ballasted panel rows, wide (C6 Westbrook) | 3:2 | Installations head · Commercial head · Case C6 | |
| P15 | Portrait: woman installer, 30s, helmet in hand, by a ladder, shallow depth | 3:4 | Installers (Sofia Reyes) | |
| P16 | Portrait: electrician, 40s, at an open inverter cabinet, looking at camera | 3:4 | Installers (Priya Natarajan) · Commercial inset | |
| P17 | Small retail building flat roof with tilted panels, street corner (C7 Ashby) | 3:2 | Case C7 · Commercial | |
Rules: one image per Grok call, Read each; regenerate for any text, logo, warped faces/hands, panels with impossible frames or floating rails, or roof with no fixings. ≤ 300 KB, ≤ 2000 px, webp/jpg. No cut-outs. Same photo never twice on one page.

---

## 6. Fixed figures (whole site, all languages)

### Prices (USD, installed, before any incentive)
| Item | Price |
|---|---|
| Home solar 4–6 kW | $11,800 – $16,900 |
| Home solar 7–10 kW | $18,500 – $26,000 |
| Battery add-on 13.5 kWh | from $10,900 |
| EV charger, Level 2 (48 A), installed | $1,450 – $2,300 |
| Commercial roofs 25–150 kW | quoted per site, typically $2.10 – $2.60 per watt |
| Annual maintenance visit | $190 |
| Roof assessment and written proposal | free |
Warranties: **15-year workmanship** (ours, includes roof penetrations); **25-year** panel performance and **10-year** battery (manufacturer, passed on). Financing: pay on completion, or **10, 15 or 20-year** loans through the local Alder Valley Credit Union (fictional); no leases. Deposit 10% on signing, balance on switch-on.

### Cases (system size, est. yearly output, est. yearly saving)
| ID | Place | Year | System | Output (est.) | Saving (est.) |
|---|---|---|---|---|---|
| C1 | Marlow, brick terrace | 2024 | 6.4 kW | 8,000 kWh | $1,600 |
| C2 | Kenning, gabled family home (featured, ring "07") | 2025 | 8.8 kW + 13.5 kWh battery | 11,000 kWh | $2,150 |
| C3 | Ashby, bungalow | 2023 | 4.8 kW | 6,000 kWh | $1,200 |
| C4 | Halden, timber house + EV charger | 2025 | 10.2 kW | 12,750 kWh | $2,450 |
| C5 | Pell Harbor, coastal house | 2024 | 5.6 kW | 6,700 kWh | $1,350 |
| C6 | Westbrook, warehouse | 2025 | 96 kW | 118,000 kWh | $17,700 |
| C7 | Ashby, corner shop roof | 2026 | 32 kW | 39,000 kWh | $5,850 |
(Yield ~1,250 kWh/kW, 1,200 at Pell Harbor; savings at $0.20/kWh residential, $0.15 commercial. Home strip shows C1, C3, C4, C5; featured = C2. Ring number "07" on the first screen = C2's job number in the 2025 list; use it only as a label.)

### People
- Founders: Ruth Calloway (electrical engineer, designs every system), Tomás Ibarra (roofer, runs installs).
- Installers: **Marcus Bell** – lead installer, pitched roofs and racking, 14 years on roofs; **Priya Natarajan** – licensed electrician, batteries and EV chargers, 9 years; **Jonah Kessler** – commercial and flat-roof systems, 11 years; **Sofia Reyes** – roof assessments and system layout, 7 years.

### Free roof assessment (4 steps, same wording everywhere)
1. **Book** – phone, email or the form; we reply within one working day.
2. **Visit** – 45 minutes on site: roof condition, pitch, shading, meter and fuse board.
3. **Proposal** – written within 5 working days: system size, layout, price, est. output and saving.
4. **Install** – usually 1–3 days on the roof; switch-on after inspection, typically 4–8 weeks from yes.

### Journal titles (home news line)
- 2026-10-02 "What we look at on a 45-minute roof visit" (Process)
- 2026-09-15 "Does a battery pay for itself? Our honest maths" (Batteries)
- 2026-08-28 "Cleaning panels: when to bother, and when not to" (Maintenance)

---

## 7. Front-page acceptance checklist (self-review)
1. At 1440×900 the first screen is a hard 50/50 split: full-height roof photo left, graphite gradient panel right, small 3:4 inset portrait, left-aligned H1 ≤ 3.25rem beside it, vertical "install / ⓪07" ring label on the photo edge, ruled news line at the bottom. No centred big text, no form/table/search.
2. `check-first-screen.py` saturated ≤ 8% (target ≤ 5%).
3. Two hairline circles visibly overlap each other and the right edge of P4; figures ≥ 3rem; "(est.)" present.
4. Four white cards on the `#E6E6E3` band with 4.5rem kW numerals; captions match section 6 exactly.
5. Every section starts with a "[0n]" label; sections numbered 01–07 in order.
6. Graphite assessment band has the shallow roof-pitch top edge; 4 steps inline, wording = section 6.
7. Installer names, prices, kW, kWh and $ figures match section 6 character for character; savings say "est."; the estimate note is on the page.
8. 12 photo positions, none repeated, no text/logos, muted grade; no cut-outs.
9. ≥ 320 words, ≥ 3 narrative paragraphs; no claims of awards, media, guaranteed savings, real brands.
10. Palette: ground, graphite, greys; ochre only on dots/bars/est. figures (≤ 2%); no beige wash, no navy, no green.
11. One top menu; header readable over both halves of the split; mobile 390 px: split stacks, inset overlaps, circles side by side, cards scroll-snap, nothing overflows horizontally.
12. reference-compare.png shows R1 first screen beside ours (split + inset recognisable) and R2 circles beside our featured case.
