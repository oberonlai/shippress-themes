# Daichi Landscapes — design spec (stage 1, binding for implementation)

Slug `daichi-landscapes`, commercial landscaping company (campuses, civic streets, forecourts), type **business** (WooCommerce compatible, not required). Row b8-4: archetype sticky-media, hero text-left-photo-right, first screen top-bottom-halves, page_structure **process-timeline**, documentary photography. Reference: **R1 Ishii Zouen https://www.ishii-zouen.co.jp/** (S5-Style https://www.s5-style.com/10051/). Tokens: `reference-tokens.md` (cited below as `tok(a)…tok(g)`). Borrow structure, technique, colour relationship and numbers only — no copy, illustration, logo or layout of whole pages.

Fixed brand facts: Daichi Landscapes Ltd., founded **2009**, yard and office **Unit 4, 210 Mill Creek Road, Vancouver, BC V5Y 1Z3, Canada** (fictional address), Mon–Fri **7:00–17:00**, Sat **8:00–12:00** (yard pickups only), Sun closed. Phone +1 604 555 0148, hello@daichi-landscapes.example. Currency **CAD** in every language.

---

## 1. Signature techniques (3, all visible at a glance)

### T1. Staggered white label tiles holding the H1 over the photo (R1 hero, tok(e)(f))
- R1: three white vertical tiles 78 px wide, heights 204 / 263 / 321 px (differ by text length), gap 15 px, top-right of the hero image (x 966–1230, y 172+), black 40 px type, no shadow, radius 0.
- Daichi (Latin, so tiles are **horizontal bars**, same idea rotated): three white (`#FFFFFF`) tiles stacked with **15 px vertical gap**, each tile holds one line of the H1, **widths differ by text length** and the right edges are staggered: tile 1 right-aligned to the photo's right edge minus 64 px, tile 2 offset 48 px further left, tile 3 offset 96 px further left (stair stepping down-left). Tile padding 14 px 22 px, radius 0, no shadow, Lora 600 `clamp(2.25rem, 4.2vw, 4.25rem)`, line-height 1.1, ink `#1E1E1C`. Position: top-right quadrant of the hero photo, first tile top at 18% of photo height.
- en H1: "Green that / keeps a city / working." (3 tiles). zh-TW/ja: 3 tiles, horizontal writing (no vertical writing anywhere).
- Mobile ≤781 px: tiles are **in normal flow below the photo** (no absolute positioning, no overlap), still white on the stone band, stagger reduced to 0/16/32 px left indent, font 2.25rem.
- Must not dilute: tiles are pure white, flat, square-cornered, 15 px gaps visible, three separate tiles (not one card), staggered edges, sitting **on the photo** at ≥782 px.
- Inner pages: every page head = photo strip (21:9, 360 px tall desktop) with a 1–2 tile title stack in the same position (Services, Projects, Process, Aftercare, About, Team, Careers, Contact, Journal single).

### T2. One long wave edge out of a pale band (R1 wave section, tok(c)(f))
- R1: pale lime band `#f5f1d8` whose bottom edge is a single soft asymmetric swell (amplitude ≈70 px) into white, between works carousel and impact section.
- Daichi: the **process timeline band** (home #4) uses `#F5F1D8` with a **single** asymmetric swell bottom edge: SVG `viewBox 0 0 1440 120`, path `M0,0 H1440 V40 C1180,40 1020,110 760,110 C520,110 330,30 0,60 Z` filled `#F5F1D8`, placed directly under the band, height 120 px desktop / 56 px mobile (amplitude 70 px desktop). Only one wave per page, never repeating sine. (Kaiten Skills used a top/bottom repeating wave on a coloured course band; ours is one asymmetric swell, pale lime, on the timeline only.)
- Must not dilute: band colour stays `#F5F1D8` (not white, not grey), amplitude ≥60 px on desktop, curve visible on every page that has it.
- Inner pages: Process (timeline band), Services (service list band), Aftercare (season calendar band), Projects single (facts band), About (history band) — one wave each.

### T3. Ring meters with count-up (R1 impact rings, tok(e)(f)(g))
- R1: three rings ≈260 px, stroke ≈26 px, light track + coloured arc, big % number centred, plants overlapping the ring edge.
- Daichi: home #6 "Commitments": three rings 260 px desktop / 200 px mobile, stroke 26 px, track `#E6E3D8`, arc `#5E6B52` (ring 2 arc `#46A882` mint-muted, ring 3 `#5E6B52`), arc drawn via `conic-gradient` mask (static, no scroll JS), number Lora 600 3.5rem in centre with `sp-count`, unit Karla 1rem. A documentary photo crop (circle 120 px, 1 per ring: P9 soil, P10 saplings, P11 pruning) overlaps the ring's lower-right edge by 40 px (replaces R1 illustration plants). Values (company policy, not claims): **80 %** of planting stock grown within 150 km; **24 months** aftercare on every planting contract (ring full); **60 %** native or adapted species in each planting plan.
- Must not dilute: real rings with visible track, ≥200 px, stroke ≥20 px, number centred and counting.
- Inner pages: Aftercare (24-month ring), About (the three rings repeated small 180 px), Projects single (one ring "trees established after 24 months" = case-specific numbers from §6), Sustainability block on Services.

---

## 2. Colour (R1 → Daichi)

| Role | R1 (tok a) | Daichi | Share | Note |
|---|---|---|---|---|
| Ground | `#f7edde` cream | `#FFFFFF` white | ~55% | note forbids cream ground; R1's own white `#ffffff` used |
| Stone ground (first-screen bottom half, footer) | — | `#F2F1EC` | ~15% | low-chroma derived from R1 cream, desaturated |
| Band | `#f5f1d8` | `#F5F1D8` (exact) | ~20% | wave band, timeline, tiles' context |
| Text | `#000000` | `#1E1E1C` | ~6% | softened ink |
| Main | `#118856` | `#5E6B52` moss (row hex) | ≤4% | row note: one muted accent, small areas (buttons, ring arcs, rules, labels) — never a full field |
| Sub | `#46d8ac` mint | `#46A882` (mint darkened ~20% for quiet palette) | ≤1% | ring 2 arc, link hover underline |
| Accent | `#fe6806` | `#E2662A` (≤5% lightness from R1) | <0.5% | 10 px sun dot before section labels only |
| Card | `#ffffff` + shadow | `#FFFFFF`, `0 2px 12px rgba(0,0,0,.12)`, radius 8 | — | floating info card |

First-screen saturated pixels **≤15%** (`check-first-screen.py`), target 6–12%: photo graded high-key, foliage muted; no main-colour fields on first screen except the 1 button.

## 3. Type (tok b; R1 single gothic → row fonts)
- Display **Lora** (400/600, italic 400), body **Karla** (400/500/700). zh-TW: headings Noto Serif TC 600, body Noto Sans TC 400; ja: Noto Serif JP / Noto Sans JP. All via **theme.json fontFamilies + fontFace** (woff2 in assets/fonts, CJK subsets as in Hokuto/Hada), so editor and front end match; style.css `:lang()` rules → copy shared/inc/editor-lang.php to inc/editor-lang.php and require it.
- Sizes (R1 px → rem): body 1.125rem (18 px) / line-height 1.6 (tok b); lead 1.4rem / 2.0 (R1 lead 22.5/45); small 0.875rem; medium 1.4rem; large 2.1rem; x-large 2.75rem (R1 h2 43.75 px); xx-large **4.25rem** (tiles, home section heads max; ≥ R1 51.75 px h2). Headings letter-spacing normal, sentence case (R1 no uppercase). Nav Karla 700 0.95rem (R1 15 px w700). CJK headings 0.75× en, body line-height 1.85. fr/de `hyphens:auto`.

## 4. Spacing, radius, motion tokens
- Container 1193 px (tok c), wide 1320; section padding `clamp(120px, 12vw, 200px)` top/bottom (tok c); heading→content gap `clamp(33px, 10.3vw, 97px)` (tok c).
- Photo radius **10 px** (tok d); card radius 8 px; buttons radius 0, flat, `#5E6B52` ground, white Karla 700, padding 22 px 44 px (R1 CTA flat).
- Motion: reveal 0.8 s `cubic-bezier(.65,0,.35,1)` (R1 inview curve tok g) set via `--sp-dur:.8s`; ring/count 1.5 s; `--sp-dist:24px`.

## 5. Home page

### First screen (1440×900, top-bottom halves, text-left-photo-right)
- Header 88 px white: wordmark "Daichi Landscapes" Lora 600 1.5rem left (small moss leaf mark 28 px circle outline, not R1's logo); nav right Karla 700: Services, Projects, Process, Aftercare, About, Contact; button "Request a site survey" (moss).
- **Top half (y 88–560):** full-bleed photo P1 (crew planting street trees on a new campus forecourt) in an `sp-parallax` cover, `--sp-par: 10%` desktop / 6% mobile; T1 tiles top-right over it.
- **Bottom half (y 560–900) on stone `#F2F1EC`:** 12-col grid; left 6 cols: lead Karla 1.4rem/2.0 "Planting, paving edges and aftercare for campuses, hospitals and civic streets across Metro Vancouver since 2009." + moss button + text link "See the process →". Right 5 cols: photo P2 (survey team measuring a tree pit, 4:3, radius 10) rising 120 px up into the top half (overlaps the hero bottom edge; no text on it). Bottom-right **floating info card** (R1 tok f: 377×108, white, radius 8, shadow, 90×90 moss icon tile with a line icon of a tree guard): "Winter planting slots for 2027 are open · Book a survey →".
- Forbidden: table, form, search, giant centred word, vertical text.

### Block order
| # | Block | Purpose | Layout & photos | Copy |
|---|---|---|---|---|
| 1 | hero | above | P1 parallax + T1 tiles; P2; info card | 35 words |
| 2 | intro "Who we plant for" | positioning | left 5 cols: 2 paragraphs; right 7 cols: P3 (hospital courtyard maintained, 3:2, r10); label with orange sun dot | 110 words |
| 3 | services | **sticky-media**: left column sticky P4 (crew on irrigation), right 4 service entries (Tree & street planting, Campus grounds, Green roofs & planters, Seasonal aftercare), each H3 + 50 words + "from CAD" price | 220 words |
| 4 | process timeline (T2) | survey→aftercare | `#F5F1D8` band, horizontal 6-stage timeline (one row, dots on a 2 px moss line, stage name + week range + 25 words), P5 wide 21:9 above the line, wave edge below | 160 words |
| 5 | projects | 3 case studies | asymmetric: P6 large 3:2 left (7 cols) + P7, P8 stacked 4:3 right (5 cols); each caption: client type, city, year, scope | 3×40 words |
| 6 | commitments (T3) | rings | three rings with photo circles P9 P10 P11, centred row, intro line | 60 words |
| 7 | people | crew leads | one wide photo P12 (crew at morning briefing, 21:9 r10) + 2-col names list (6 names, role) — no portrait grid | 70 words |
| 8 | close | contact | stone band: left address/hours/phone, right T1-style 2 tiles "Walk the site / with us." on P13 (spring flowering forecourt) + button | 45 words |

Home photo positions: P1, P2, P3, P4, P5, P6, P7, P8, P9, P10, P11, P12, P13 = **13**, no repeats. en home ≥ 700 words, narrative paragraphs in #2, #3, #4.

### Comparison with recent themes
| # | Oto Audio | Ito HR | Kaiten Skills | Hoshi Wealth | **Daichi** |
|---|---|---|---|---|---|
| 1 | hero straddle H1 | hero + marquee photo loop | leaf CTA hero | hero | **photo top half + white staggered tiles + stone bottom half with info card** |
| 2 | … | services | courses on wave band | dark band ruled partner rows | **intro text + courtyard photo** |
| 3 | … | approach cards over blurred parallax | dotted-rule curriculum | sticky chapter card | **sticky photo + 4 services** |
| 4 | compare table on ink | — | — | framed portrait vertical word | **horizontal 6-stage timeline on pale band, one wave** |
| 5 | white 3:4 product trio | — | — | parallax strip | **asymmetric 3-project grid** |
| 6–8 | — | — | — | — | **rings · crew photo + names · close tiles** |
Not alike: no marquee, no dark ruled rows, no 3:4 trio, no repeating wave on a coloured band (Kaiten), no vertical word (Hoshi), no compare table (Oto). Signatures (stair tiles, asymmetric swell, ring meters) appear in none of them.

## 6. Fixed numbers (identical everywhere, all 5 languages)
- **Prices (CAD, "from")**: Site survey & planting plan **$1,200**; Street tree planting (per tree, incl. guard & 2 seasons watering) **$680**; Campus grounds maintenance (per month, up to 2 ha) **$3,400**; Green roof / planter install (per m²) **$145**; Seasonal aftercare visit **$420**; Winter pruning (per day, crew of 3) **$1,950**. (6 items)
- **People (6)**: Hana Mori-Ellis (founder, landscape architect); Marcus Delgado (operations lead); Priya Raman (arborist); Tom Okafor (crew lead, planting); Elise Brandt (irrigation & green roofs); Samuel Quist (aftercare coordinator).
- **Cases (3)**: Northshore College forecourt, 2024 — 64 trees, 1,800 m² planting; Riverside General Hospital courtyard, 2023 — 3 courtyards, sensory garden; Fraser Street renewal, 2025 — 1.2 km, 112 street trees. Ring on case pages: trees established after 24 months 62/64, 3/3 courtyards, 109/112.
- **Process (6 stages)**: 1 Site survey (week 1–2) · 2 Planting plan (week 3–5) · 3 Ground preparation (week 6–8) · 4 Planting (week 9–11) · 5 Handover walk (week 12) · 6 Seasonal aftercare (24 months).
- Founded 2009; 6 named people; crew of 28 (only stated on About).

## 7. Inner pages (9 + journal)
Each: T1 tile head on a 21:9 photo strip → body → close line. No sidebar.
1. **Services** — 4 services with sticky photo P14, price table (6 rows) on wave band (T2), sustainability rings small (T3).
2. **Pricing** — full price table + what's included; table full width ≥782 px, price column `white-space:nowrap; text-align:right`; mobile stacked rows (name over price). Photo P5.
3. **Projects** — index of 3 cases (P6 P7 P8, 3:2 r10) with year/city/scope.
4. **Project single ×3** — head tile on case photo, facts band with wave, one ring (T3), story 300 words, 2 photos.
5. **Process** — the 6-stage horizontal timeline large on `#F5F1D8` band + wave (T2), each stage a paragraph block below; photo P2, P5.
6. **Aftercare** — 24-month ring (T3), season calendar (4 seasons, 4 columns text) on wave band, P11, P13.
7. **About** — history 2009→2025 (paragraphs, not vertical timeline), rings 180 px (T3), P3, P12.
8. **Team** — P12 wide + 6 names with roles and 40-word bios in 2-col text list (no portrait grid).
9. **Careers** — crew roles, season, P10.
10. **Contact** — address, hours, phone, email, map placeholder photo P13; no first-screen form.
11. **Journal** (index/single), 404, search: tile head.

## 8. Photos (14, Grok, one at a time)
STYLE (exact, every prompt): `documentary photograph, 35mm lens, high-key bright overcast daylight, clean modern international city and campus setting, muted greens, pale concrete, light stone and white, diverse adult crew in plain unbranded moss-green and grey workwear, candid working moment, natural colour, no text, no logos, no brand marks, no signage lettering, no Japanese elements`

| ID | Subject / composition | Use |
|---|---|---|
| P1 ★ | crew of three planting a young street tree on a new pale-paved campus forecourt, wide 16:9, open sky top-right (for tiles) | Home hero (parallax) |
| P2 ★ | two surveyors measuring a tree pit with tape and tablet, 4:3 | Home hero bottom; Process |
| P3 ★ | maintained hospital courtyard, benches, grasses, 3:2 | Home intro; About |
| P4 ★ | crew laying drip irrigation in a planting bed, 4:5 | Home services sticky |
| P5 ★ | aerial-ish wide view of a civic street with new trees in a row, 21:9 | Home timeline; Pricing; Process |
| P6 ★ | college forecourt with young trees and students walking, 3:2 | Home projects; Projects; case 1 |
| P7 ★ | hospital sensory garden, 4:3 | Home projects; Projects; case 2 |
| P8 ★ | renewed street with planted median, 4:3 | Home projects; Projects; case 3 |
| P9 ★ | hands holding compost soil, close, 1:1 | Home ring 1 |
| P10 ★ | rows of potted saplings in a regional nursery, 1:1 | Home ring 2; Careers |
| P11 ★ | arborist pruning a tree on a ladder in winter light, 1:1 | Home ring 3; Aftercare |
| P12 ★ | crew morning briefing beside a truck (unbranded), 21:9 | Home people; About; Team |
| P13 ★ | spring flowering forecourt with seating, 16:9 | Home close; Aftercare; Contact |
| P14 | green roof planters being installed on a low building, 4:5 | Services sticky; journal |
Each ≤300 KB, ≤2000 px, no cutouts. Same image never twice on one page.

## 9. Scroll effects (tok g; R1 GSAP ScrollTrigger "top 80%", once)
| Block | sp-* | Source & timing |
|---|---|---|
| Home #2, #3 entries, #5 projects, #7 | `sp-reveal sp-reveal--up` (+ parent `sp-stagger` on #5 and #3 list) | R1 `.js-inview` start top 80% once; `--sp-dur:.8s`, ease `cubic-bezier(.65,0,.35,1)`, 24 px |
| Home #6 rings | `sp-reveal sp-reveal--zoom` on ring wrapper + `sp-count` on numbers | R1 ring draw 1.5 s cubic-bezier(.65,0,.35,1) |
| Home #4 timeline P5 photo | `sp-reveal sp-reveal--wipe` | R1 footer circle fill 1.2 s delay .3 s |
Hero: no reveal. Not on price table, forms, legal text.

### Parallax (required)
- **Home #1 hero top half**: Cover block `sp-parallax`, background P1, foreground = T1 tiles (separate, not inside the moving layer), `--sp-par: 10%` desktop, `6%` at ≤781 px. R1 counterpart: GSAP hero scene timeline (layers moving at different speeds, tok g).
- Second: Home #7 people P12 strip, `sp-parallax`, `--sp-par: 8%`. Inner page head strips may use 6%.
- Verify with `check-parallax.mjs` (≥6 px desktop and mobile, 0 under reduced motion).

## 10. Responsive
- 390 px first screen: no vertical text, no absolutely positioned labels over text; tiles flow below photo; info card flows after button.
- Price table ≥782 px: 100% width of the content column, price column nowrap right-aligned, never clipped; ≤781 px every table becomes stacked rows.
- No horizontal overflow at 390/800/1280.

## 11. Home acceptance checklist
1. Top half photo with 3 white staggered tiles (15 px gaps) top-right; stone bottom half with lead, button, P2 overlap, white info card.
2. First-screen saturation ≤15%; no table/form/search/vertical text.
3. Pale `#F5F1D8` timeline band with 6 horizontal stages and one asymmetric wave ≥60 px.
4. Three rings 260 px with counting numbers and overlapping photo circles.
5. 13 photo positions, no repeats, same STYLE, no text/logos.
6. Prices, names, cases, process stages match §6 everywhere.
7. sp-parallax on hero moves ≥6 px; reveals pass check-parallax; `?sp-static` all visible.
8. Fonts Lora/Karla via theme.json fontFace; editor = front end.
9. Max font 4.25rem; moss only on small areas.

## 12. Similarity table (target 80%)
| Dimension | R1 | Daichi |
|---|---|---|
| Ground / band | `#f7edde` / `#f5f1d8` | `#FFFFFF`+`#F2F1EC` / `#F5F1D8` |
| Main / accent | `#118856` / `#fe6806` | `#5E6B52` / `#E2662A` |
| Body type | 18 px / 1.6 w400 | 1.125rem / 1.6 w400 |
| Lead | 22.5/45 | 1.4rem / 2.0 |
| H2 max | 51.75 px w700 | 4.25rem (tiles) / 2.75rem sections |
| Container | 1193 px | 1193 px |
| Section rhythm | 120–200 px | clamp(120,12vw,200) |
| Photo radius / card | 10 / 8 + shadow | 10 / 8 + `0 2px 12px rgba(0,0,0,.12)` |
| Hero labels | 3 white tiles, 15 px gap, top-right | 3 white tiles, 15 px gap, top-right (horizontal) |
| Wave | ~70 px swell | 70 px swell |
| Rings | 260 px, stroke 26 | 260 px, stroke 26 |
| Info card | 377×108 r8, 90 px green tile | same |
| Motion | inview top 80% once; 1.5 s cubic-bezier(.65,0,.35,1) | sp-reveal .8 s same curve; ring 1.5 s |
| Button | flat, radius 0 | flat, radius 0 |
