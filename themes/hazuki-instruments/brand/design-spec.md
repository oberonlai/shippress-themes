# Hazuki Instruments: design spec (stage B, binding for implementation)

Slug `hazuki-instruments`, musical-instrument shop (type `store`, WooCommerce product templates styled; checkout must work). Row b20-2: archetype asymmetric-masonry, hero framed-window + full-bleed-photo-info-bar, nav centred, page structure alternating-longform, palette blue-grey (aonezu) `#5C6A78`, **font_direction: sans**.
Reference (only one): **Shimamura Music, https://www.shimamura.co.jp/** — measurements in `reference-tokens.md`, screenshots in `ref/`. We borrow structure, technique, colour relationships and the key-visual concept. No copy, photos, illustrations or logo from the reference.

Fixed brand facts (every page, all five languages, identical numbers):
- **Hazuki Instruments**, founded **2009**, one shop on three floors at **14 Calder Lane, Wellmouth** (fictional, international neutral harbour town). Phone `+1 555 0142`, mail `hello@hazuki-instruments.example`.
- Hours **Tue–Sun 11:00–20:00**, closed Monday. Sound booths bookable **11:30–19:15** (last 45-min slot).
- Currency **USD** in every language; no converted prices.

---

## 1. Signature techniques (three; must be obvious at a glance)

### T1. Seam headline strip with a flat label bar (Shimamura hero, `ref/shim-first.png`)
- Reference: directly under a 59 px white header, four full-height portrait photos sit edge to edge across the full width (1425×590 at 1440×900, each ≈25%, visible seams). One white vertical headline (≈38 px per glyph) runs down the seam between panels 2 and 3. A flat orange 26 px "Brand Promise" bar crosses the whole strip about 50 px above its bottom edge. The strip *is* the hero; nothing is overlaid besides the headline and bar.
- Hazuki (desktop 1440): `.hz-seam` alignfull Group, height `clamp(460px, 65.5vh, 590px)` (590/900 = 65.5% from token (e)), 4 columns `grid-template-columns: 1fr 1fr 1fr 1fr`, `gap: 2px` on ground `#FFFFFF` (the 2 px white seam), radius 0. Each panel is a `figure` with `img` `object-fit: cover`, `object-position` set per image (faces/hands in upper third).
- Headline: absolutely positioned at `left: 50%` (seam 2|3), `top: 44px`, `transform: translateX(-50%)`, `writing-mode: vertical-rl` in **ja and zh-TW**; in en/fr/de the headline is horizontal but rotated: `writing-mode: vertical-rl` + `text-orientation: sideways` (reads top→bottom). Text en: **"Find the one that fits."** Manrope 700, `2.375rem` (38 px = token f), letter-spacing .04em, white, `text-shadow: 0 1px 14px rgba(0,0,0,.28)`. ja(see demo-content.<lang>.json), zh-TW(see demo-content.<lang>.json).
- Label bar: absolutely positioned full width, `bottom: 50px`, height **26 px**, ground **steel `#5C6A78`**, centred label "Fit · Trial · Care" Manrope 600 `0.8125rem`, white, letter-spacing .06em. (Reference role: orange 26 px bar; we use the row's steel and keep the bar exactly flat, full width, 26 px.)
- Mobile ≤781: panels become a 2×2 grid (each 4:5), **no** vertical or absolutely positioned text: the headline moves under the grid as a normal horizontal `h1` (Manrope 700 2rem, ink, left, 24 px padding), the label bar becomes a static 26 px bar between the grid and the headline. (auto-gates checks overlap at 390 px.)
- Must not be diluted: four panels, edge to edge, 2 px seams visible, panel photos **of people with instruments** (not products), headline exactly on the 2|3 seam, bar flat 26 px full width in steel (not a pill, not a gradient, not a translucent overlay).

### T2. 3-then-4 plain tile rhythm with a wide outline button (Shimamura SERVICE, `ref/scroll-shim-2700.png`)
- Reference: pale band `#F6F6F6`, container ≈1274 px; row 1 three 4:3 photos (408 px wide), row 2 four narrower 4:3 photos (301 px), gap ≈16 px horizontally, ≈46 px between rows; caption **under** each image (17–18 px, ls .05em); radius 0; closed by a centred 408×80 white outline button with 1 px `#CCC` border.
- Hazuki: home "FLOORS" section. Content width 1274 px (`wideSize: 1274px`), page padding 76 px (`clamp(20px, 5.3vw, 76px)`). Row 1: 3 equal columns, gap 16 px, images 4:3. Row 2: 4 equal columns, gap 16 px, images 4:3. Row gap 46 px. Caption: IBM Plex Sans 500 `1.0625rem` (17 px), ls .05em, ink, `margin-top: 14px`; under it one sub-line IBM Plex Sans 400 `0.8125rem` `#6B737B` ("Ground floor · 140 guitars on the wall"). Whole tile is a link; hover: image `opacity: .82`, `transition: opacity .3s ease` (token g). Button: 408×80 (mobile 100%×64), white fill, 1 px `#CCCCCC`, label IBM Plex Sans 400 `0.9375rem` ls .05em centred, hover border+text `#5C6A78`, `.3s ease`.
- Mobile: row 1 = 1 column, row 2 = 2 columns (2×2). Captions stay under images.
- Must not be diluted: 3 then 4 (never 3+3 or 4+4), 4:3 photos, radius 0, captions under the photo (never overlaid), pale band behind, wide rectangular outline button (not a pill, not filled).

### T3. Quiet label system + dated hairline rows with chevron (Shimamura CATEGORY / news, `ref/scroll-shim-1800.png`, `shim-first.png`)
- Reference: each section opens with a small centred Latin-caps label (16 px/400, ls .06em, no rule, 58 px gap before content) on alternating white / `#F6F6F6` bands. News: rows with date column 140 px grey, title, chevron `>` right; hairline-free in ref, generous 54 px row pitch; "All news" link right-aligned below.
- Hazuki: every home section and every inner page opens with `p.hz-label`: Manrope 500 `1rem`, uppercase, letter-spacing .06em, ink, centred, `margin-bottom: 58px` (en/fr/de/zh-TW/ja all keep the English word: FLOORS, TRIAL, CARE, STAFF, VISIT, NOTES). Where a section also needs a heading, the heading follows the label at 16 px gap.
- Dated rows (`.hz-rows`): max-width 1050 px centred (ref news column 192→1240 px), row min-height 54 px, `border-bottom: 1px solid #E3E5E8` (we add the hairline for legibility; ref has none — allowed ±), grid `140px 1fr 20px`; date IBM Plex Sans 400 `0.9375rem` `#8C939A`; title IBM Plex Sans 400 `0.9375rem` ink, single line ellipsis on desktop; chevron 1.5 px stroke svg 10×16 ink at right. Hover: title colour `#5C6A78`, `.3s`. "All floor notes" right-aligned link 15px/500 under the last row, 24 px gap.
- The same row grammar is reused for: price list (date column → service name, chevron column → price, nowrap, right), staff list, hours list. This is what ties inner pages together.
- Must not be diluted: label stays centred small caps (never a big heading in its place), bands alternate white / `#F6F6F6` down the page, rows keep the right chevron.

### Continuation to inner pages (required)
| Page | T1 seam strip | T2 3-then-4 tiles | T3 label + rows |
|---|---|---|---|
| Floor guide | page head = 3-panel mini seam strip (height 320 px, 2 px seams, label bar "Ground · First · Second") | 7 tiles, one per room (3+4) | label FLOORS; rows = floor / what is there / chevron |
| Trial booth | page head mini strip (2 panels: booth, hands on keys) + bar "45 minutes · free" | — | label TRIAL; booking rules as rows; times rows |
| Care & repair | mini strip (3 panels: workbench, restring, piano tuning) + bar "Care" | 3-then-4 tiles of services (setup, restring, refret, pads, tuning, cleaning, estimate) | price list rows (§6) |
| Rentals | mini strip 2 panels + bar "Rent · Return · Keep" | 3 tiles (row 1 only) of instrument families | rental price rows |
| Staff | — | 3-then-4 portrait-free tiles = 7 specialities, each caption = person's name | label STAFF; 7 rows (name / speciality / floor ›) |
| Shop (WooCommerce archive) | — | products grid follows 3-then-4 rhythm (first row 3, then 4 per row), 4:3 images, radius 0, caption under | label SHOP; category filter as rows |
| Single product | — | related products 4-up | spec table as rows (stacked on mobile) |
| Floor notes (blog) | — | — | index = dated rows with chevron, exactly as home |
| Visit / Contact | mini strip (storefront, aisle) + bar "Tue–Sun 11:00–20:00" | — | hours + address rows |
| About | mini strip 4 panels (P13, P05, P08, P10) | — | label ABOUT; 2009→ history as dated rows (not a vertical timeline) |

---

## Key visual concept

**(1) Reference first screen.** Shimamura opens on four abutting full-height portraits of ordinary people who play: a grey-haired man at a desk with a pen, a man playing alto sax under warm stage light, a laughing young woman with an electric guitar against cool blue window light, a student at a school desk. The vertical headline (see demo-content.<lang>.json) ("you meet a new self") runs down the seam, and an orange "Brand Promise" bar crosses the foot. Story: every kind of person finds their own instrument and becomes a new self. Signature motion: the strip is a Swiper autoplay slider (3 slides, ≈4 s hold, default ease) and the header turns fixed on scroll.

**(2) Our translation (same industry, same composition, same image type — real photos of people).** Four film-grain documentary portraits of people meeting their instrument *inside Hazuki's shop*: a clerk lifting an acoustic guitar from a wall rack in a narrow aisle; a woman in her fifties at an upright piano in the sound booth; a teenager trying a trumpet with a staff member; an older man tuning a cello bow at the workbench counter. Warm shop light on panels 1 and 2, cool daylight on 3 and 4 (the same warm/cool split as the reference). Vertical headline "Find the one that fits." on the 2|3 seam; steel bar "Fit · Trial · Care" across the foot; under the strip an info row (hours · address · "Book a trial booth ›"). Story: **"A fitting, not a sale"** — the right instrument finds you, and we look after it afterwards. Motion: the reference's slider becomes slow vertical parallax of the four panel images (each `img` drifts inside its frame), and the header is sticky. No autoplay slider, no reveal on the hero.

**(3) KV checklist (all six built on the first screen at 1440×900 and visible).**
| # | Reference element | Our mapping | Position | Motion | Image used |
|---|---|---|---|---|---|
| 1 | Four abutting portrait panels, edge to edge | `.hz-seam` 4 panels, 2 px white seams, alignfull, 590 px high | hero, directly under the header | each panel `sp-parallax`, `--sp-par: 8%` (mobile 5%) | P01, P02, P03, P04 |
| 2 | Vertical headline on the seam | "Find the one that fits." vertical, white, Manrope 700 38 px, on seam 2|3 | strip centre, top 44 px | none (hero, no reveal) | over P02/P03 |
| 3 | Orange 26 px Brand Promise bar | steel `#5C6A78` 26 px bar "Fit · Trial · Care", full width | strip foot, `bottom: 50px` | none | — |
| 4 | Warm vs cool light across panels | P01/P02 warm tungsten shop light, P03/P04 cool window daylight | across the strip | — | P01–P04 (STYLE + per-image light note) |
| 5 | Dated news rows with chevron + "news list" link | 3 "Floor notes" rows (date · title · ›) + "All floor notes" right | below info row, visible above fold at 900 px (first row at y≈720) | `sp-stagger` + `sp-reveal--up` on the rows container (not the hero) | — |
| 6 | White 59 px header, fixed on scroll | white 64 px centred nav, `position: sticky; top: 0`, static 1 px `#EEEEEE` bottom border | top | sticky (CSS only) | logo = text wordmark |

Info row (part of the hero frame, row "full-bleed-photo-info-bar"): white, 56 px, max 1274 px, three items separated by 1px `#E3E5E8` vertical hairlines: "Tue–Sun 11:00–20:00" · "14 Calder Lane, Wellmouth" · "Book a trial booth ›" (link, steel). IBM Plex Sans 0.9375rem. On mobile it stacks into three 44 px rows.

---

## 2. Colour (reference relationships; steel replaces the orange role)

| Role | Hex | Source token | Use | Share |
|---|---|---|---|---|
| Ground | `#FFFFFF` | ref ground #FFFFFF (a) | page, header, rows, alternate bands | ≈55% page, ≈40% first screen |
| Pale band | `#F6F6F6` | ref band #F6F6F6 (a) | FLOORS, CARE, VISIT bands, inner page alt bands | ≈35% page, 0% first screen |
| Footer ground | `#FAFAFA` | ref footer #FAFAFA (a) | footer top part | ≈4% |
| Ink | `#1E2328` | ref #000 softened (allowed: text only) | all text, chevrons | text |
| Grey text | `#8C939A` | ref date grey ≈#999 (−5% L) | dates, sub-captions `#6B737B` | text |
| Hairline | `#E3E5E8` / button `#CCCCCC` | ref button #CCC (d) | rows, info row, outline buttons | lines |
| Main steel | `#5C6A78` | row blue-grey (aonezu) hex; takes the ref orange bar role | T1 label bar, link hover, buttons hover, footer bottom bar, WooCommerce primary button | ≈3% first screen, ≤5% page |
| Accent brass | `#B0702E` | ref orange relation (warm accent), muted | only the small dot before "Book a trial booth", sale badge, focus ring | <1% |

Reason for changing orange: row palette is blue-grey (aonezu) steel and recent themes avoid high-chroma; the reference keeps one accent at ≈4% — we keep the same share with steel, plus a tiny brass.
**First-screen saturated cap: ≤10%** (gate 15%; measured target ≈4%: bar 1440×26 + link text). Never use steel or brass as a section background except the footer bottom bar (48 px).

## 3. Type (font_direction **sans**)
- Latin headings: **Manrope** (500/600/700). Latin body: **IBM Plex Sans** (400/500).
- Stacks (theme.json fontFamilies, loaded by **fontFace** woff2 in `assets/fonts/`, same in editor and front):
  - heading: `"Manrope", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`
  - body: `"IBM Plex Sans", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`
  - `:lang(zh-TW)` → `"Noto Sans TC"` first; `:lang(ja)` → `"Noto Sans JP"` first (gothic sans, never Mincho/Mincho serif). Ship zh-TW and ja subset woff2 via the Hokuto/Hada method; copy `shared/inc/editor-lang.php` → `inc/editor-lang.php` and require it.
- Sizes (theme.json presets): small 0.8125rem; base **0.9375rem** (15 px, token b) lh 1.6 (ref 1.5, raised for long copy); medium 1.0625rem (17 px captions); large 1.5rem; x-large 2.375rem (38 px headline / section headings); xx-large **3.25rem** (52 px = ref store heading); **huge 4.5rem** (≥4.25rem; used once on home for the "A fitting, not a sale." statement and for inner page titles `clamp(2.6rem, 5vw, 4.5rem)`), lh 1.1, Manrope 600, ls −0.01em.
- Labels 1rem/500 ls .06em uppercase (token b h2 16 px .96 px). Nav IBM Plex Sans 400 1rem ls .06em (ref 16/300; Plex 300 too thin on Windows → 400).
- CJK: sizes ×0.75 of en headings, body lh 1.85; fr/de `hyphens: auto`.

## 4. Home page

### First screen (1440×900)
0–64 header (logo wordmark "HAZUKI INSTRUMENTS" Manrope 700 1rem ls .12em centred; links split either side: Floors · Trial booth · Care | Rentals · Shop · Visit; cart icon right). 64–654 seam strip (590). 654–710 info row. 710–900 Floor-notes dated rows, no label (as ref; first two rows visible). Ground white, photo mass ≈60%, steel ≈3%.

### Block order
| # | Block | Band | Layout & photos | Copy | Effect |
|---|---|---|---|---|---|
| 1 | Header (centred) | white | as above, sticky | — | — |
| 2 | Seam strip hero (T1) | white | 4 panels P01–P04, bar, vertical headline | headline 5 words + bar 3 words | `sp-parallax` on each panel |
| 3 | Info row | white | 3 cells | 3 lines | — |
| 4 | Floor notes (T3 rows) | white | 3 dated rows + right link | 3 titles (e.g. "2026/10/24 · Second-hand wall restocked: 18 acoustics checked and set up") | `sp-stagger` + `sp-reveal--up` |
| 5 | Statement "A fitting, not a sale." | white | asymmetric: left 7/12 heading huge 4.5rem (2 lines) ; right 5/12 two paragraphs + P05 4:5 photo under text, offset down 80 px (masonry offset) | ≈110 words | `sp-reveal--up` on right column |
| 6 | FLOORS (T2 3-then-4) | `#F6F6F6` | label, intro 1 line, row 3: P06 Guitars & basses, P07 Pianos & keys, P08 Band & orchestra; row 4: P09 Drums & percussion, P10 Strings, P11 Second-hand, P12 Accessories & sheet music; outline button "See the floor guide" | captions + sub-lines | `sp-stagger` + `sp-reveal--up` on each row |
| 7 | TRIAL — full-bleed parallax band | photo | alignfull Cover 560 px, bg P13 (sound booth through glass door), `sp-parallax --sp-par:10%` (mobile 6%); static white panel (480 px, padding 48, radius 0) left at container edge: label TRIAL, heading x-large "Forty-five minutes, a closed door, no hurry.", 1 paragraph, 3 hairline rows "1 Book a booth · 2 Bring your own pick or bow · 3 Play; staff wait outside", link "Book a trial booth ›" | ≈80 words | parallax only |
| 8 | CARE (alternating longform, photo right) | `#F6F6F6` | label CARE centred over the whole section; left 6/12: paragraph, then price rows (§6, 6 items) full container width below the two columns; right 6/12: P14 workbench 4:3 | ≈90 words + 6 rows | `sp-reveal--up` on text only (not price rows) |
| 9 | STAFF (alternating, photo left) | white | left 5/12 P15 two staff at the counter (4:5); right 7/12: label STAFF, 2 lines intro, 7 rows: name · speciality · floor › | ≈60 words + 7 rows | `sp-stagger` on rows |
| 10 | VISIT | `#F6F6F6` | left 6/12 P16 shopfront at dusk 3:2; right 6/12 rows: address, hours, booth hours, phone; outline button 408×80 "Plan your visit" | ≈50 words | `sp-reveal--up` |
| 11 | Footer | `#FAFAFA` + 48 px steel bar | 4 columns of links, wordmark, © 2009–2026 | — | — |

Home photo positions: P01, P02, P03, P04, P05, P06, P07, P08, P09, P10, P11, P12, P13, P14, P15, P16 = **16** (≥8). Home English copy ≥ 400 words, ≥3 narrative paragraphs (statement ×2, trial, care, staff intro).

### Comparison with recent themes (must not resemble)
| # | Hazuki | Kouhi Service | Minori Seminars | Shirushi Customs | Kensa Laboratory |
|---|---|---|---|---|---|
| hero | 4-panel seam strip, vertical headline, flat bar | lifted card on curved pale band | inset photo stage + notch card | dark pinned stage | peeking-neighbour slide strip |
| 2 | info row + dated rows | anchor tiles 2×2 | strip | front-desk statement | 4×2 outline tiles |
| 3 | big statement + offset photo | client photos | diagonal tint band, tick cards | declarations masonry | services |
| 4 | 3-then-4 tiles on pale band | sticky service | pick-up | dossier strip | NEWS saturated band |
| 5 | full-bleed parallax booth band w/ white panel | parallax band | vertical-word dates | notice panel | contact |
| 6+ | care price rows → staff rows → visit | plans → news → contact | enrol | map/contact | — |
Why different: no card-on-curve, no tint band/ticks, no dark stage, no peeking slider, no 4×2 outline tiles; ours is the only one with a multi-panel seam strip and an odd 3-then-4 tile rhythm, and the only one where news sits *directly under the hero*. Kouhi also had a parallax band, but ours carries a static white text panel with row steps, not a centred caption.

## 5. Inner pages (≥8 + WooCommerce)
1. **Floor guide** — mini seam strip (P06, P07, P08), 7 rooms as 3+4 tiles, then per-floor rows (Ground: guitars, basses, amps, second-hand; First: pianos & keys, strings; Second: band & orchestra, drums, 3 sound booths, workbench), "what to bring" paragraph.
2. **Trial booth** — mini strip (P13, P02), how a trial works (3 rows, not a step grid), booth rules, booking times rows, FAQ 5 rows, button to Visit.
3. **Care & repair** — mini strip (P14, P04, P10), 3+4 service tiles, full price list (§6), turnaround rows, aftercare promise (free first setup check within 90 days).
4. **Rentals** — mini strip (P08, P03), 3 tiles (band, strings, keyboards), rental price rows, rent-to-own rule (rent paid counts toward purchase within 12 months).
5. **Staff** — 7 rows + 3+4 speciality tiles; short paragraph per person.
6. **Shop** (WooCommerce archive, 3-then-4 grid; 8 demo products: accessories, strings, a used acoustic, a digital piano, a student trumpet, a cello bow, a metronome, sheet-music folder; prices USD).
7. **Single product** — gallery 4:3 radius 0, spec rows, "Book a trial for this one" link.
8. **Floor notes** (blog index = dated rows, 6 posts) + single post.
9. **About** — 2009 story, history rows (2009 opened ground floor · 2013 first floor pianos · 2017 sound booths · 2021 workbench moved upstairs · 2024 rentals desk), mini strip.
10. **Visit / Contact** — mini strip (P16, P01), address, hours rows, getting here, contact form (off first screen).
Cart / Checkout / My account: label system + rows, steel primary button.

## 6. Fixed numbers (site-wide, all languages)
**Price list (6, home CARE and Care & repair page; `.hz-rows` grid `1fr auto` at ≥782 px full container width, price column `white-space: nowrap; text-align: right`; on mobile each row stacks name above price):**
| Service | Price |
|---|---|
| Trial booth, 45 min | Free |
| Guitar / bass setup | $55 |
| Restring (strings extra) | $18 |
| Woodwind / brass pad & cork check | $40 |
| Piano tuning, home visit | $140 |
| Band-instrument rental | from $29 / month |

**Staff (7):** Mara Ellison (founder, guitars & basses, Ground) · Kenji Arai (pianos & keys, First) · Sofia Brandt (band & orchestra, Second) · Tomás Ruiz (drums & percussion, Second) · Leila Haddad (strings & bows, First) · Owen Pike (workbench / repair, Second) · Nia Okoro (rentals & lessons desk, Ground).
**Stories (3, floor notes / about):** a retired teacher choosing her first upright after 40 years; a school trumpet section fitted in one Saturday; a 1970s acoustic brought back by Owen.
**Flow (3):** Book a booth → Play with no one watching → Take it home, first setup check free within 90 days.
**Counts:** 3 floors, 7 rooms, 3 sound booths, 140 guitars on the wall.

## 7. Photos (16, Grok, one at a time, Read each; no text, logos, brand names on headstocks)
IMAGERY: **photo** (reference is photographic).
STYLE (same string for every image):
`film-grain documentary photograph, 35mm look with fine visible grain, mid-key exposure, soft natural window light mixed with warm tungsten shop light, muted steel-blue and warm wood tones, slightly lifted blacks, real people of diverse ages and ethnicities, candid unposed moment, contemporary international music shop interior, shallow depth of field, no text, no logos, no brand names, no readable labels`

| # | Subject & composition | Ratio | Used on |
|---|---|---|---|
| P01 | Clerk lifting an acoustic guitar from a high wall rack in a narrow aisle, seen from the aisle end, warm light | 2:3 portrait | **Home** hero panel 1; Visit strip |
| P02 | Woman in her fifties playing an upright piano inside a small sound booth, seen through the open door, warm | 2:3 | **Home** hero panel 2; Trial strip |
| P03 | Teenager trying a trumpet, staff member beside pointing at valves, cool daylight | 2:3 | **Home** hero panel 3; Rentals strip |
| P04 | Older man checking a cello bow at a wooden counter by a window, cool daylight | 2:3 | **Home** hero panel 4; Care strip |
| P05 | Two hands holding a guitar neck, staff hand adjusting the player's fingers, close | 4:5 | **Home** statement; About strip |
| P06 | Wall of acoustic and electric guitars, aisle perspective, person browsing | 4:3 | **Home** FLOORS tile; Floor guide strip |
| P07 | Showroom of upright and grand pianos, one person seated | 4:3 | **Home** FLOORS; Floor guide strip |
| P08 | Shelves of saxophones, clarinets and trumpets in open cases, staff assembling a clarinet | 4:3 | **Home** FLOORS; Floor guide strip; Rentals strip |
| P09 | Drum kit corner, young person testing a snare with brushes | 4:3 | **Home** FLOORS; Floor guide tile |
| P10 | Violins and cellos hanging, staff tightening a bow | 4:3 | **Home** FLOORS; Care strip; About |
| P11 | Rack of second-hand guitars with hand-written tags (blank tags, no text) | 4:3 | **Home** FLOORS; Floor guide tile |
| P12 | Table of strings, picks, metronomes, sheet-music folders, hand reaching | 4:3 | **Home** FLOORS; Shop header |
| P13 | Sound booth through its glass door, warm lamp, piano and amp, empty stool — wide | 16:9 (2000×1125) | **Home** TRIAL parallax band; Trial strip; About strip |
| P14 | Repair workbench: luthier levelling frets on a guitar neck, tools, daylight | 4:3 | **Home** CARE; Care strip |
| P15 | Two staff at the counter talking with a customer holding a ukulele | 4:5 | **Home** STAFF; Staff page |
| P16 | Shopfront at dusk, large windows, guitars visible inside, people passing (no signage text) | 3:2 | **Home** VISIT; Visit strip |
Same-page rule: on the home page each photo appears once. Inner pages may reuse, but never twice on one page. Each file ≤300 KB, ≤2000 px webp.

## 8. Scroll effects (sp-scroll; reference has no reveals — effects follow its quiet hover timing)
| Effect | Class | Where | Source & timing |
|---|---|---|---|
| Parallax (required) | `sp-parallax` `--sp-par: 8%` (≤781: 5%) on each hero panel figure (`figure>img`); `sp-parallax` `--sp-par: 10%` (≤781: 6%) on TRIAL Cover (bg P13) | hero, TRIAL band | Translates Shimamura's autoplay Swiper (≈4 s hold) into continuous slow drift; CSS scroll-driven, linear; foreground text (headline, bar, white panel) stays in non-moving layers |
| Staggered rows | `sp-stagger` + children `sp-reveal--up` | Floor notes rows, FLOORS rows, STAFF rows | IntersectionObserver, `--sp-dur: 600ms`, stagger 80 ms, `--sp-dist: 18px`, cubic-bezier(.2,.7,.2,1); mirrors ref card hover `.3s ease` calm |
| Single reveal | `sp-reveal--up` | statement right column, CARE text, VISIT text | same timing |
Not used: hero reveal, sp-count, sp-marquee, any reveal on the price list or forms.

## 9. Similarity table (target 80%)
| Dimension | Shimamura (token) | Hazuki |
|---|---|---|
| Ground / band | #FFFFFF / #F6F6F6, ≈40% page band (a) | #FFFFFF / #F6F6F6, ≈35% |
| Accent | orange ≈#EE7800, ≈4% first screen (a) | steel #5C6A78 ≈3% + brass <1% |
| Text | #000, dates ≈#999 (a) | #1E2328, #8C939A |
| Body | 15px/400/lh 1.5 (b) | 15px/400/lh 1.6 |
| Section label | 16px/400 caps ls .06em, centred, 58px gap (b) | 1rem/500 caps .06em, centred, 58px |
| Big heading | 52px (b) | 3.25rem xx-large + one 4.5rem statement |
| Hero | 4 panels 1425×590, ≈25% each, seams (e) | 4 panels full × 590, 25% each, 2px seams |
| Hero headline | vertical, white, ≈38px/glyph on seam 2|3 (f) | vertical, white, 38px, seam 2|3 |
| Bar | orange 26px across foot (f) | steel 26px across foot, bottom 50px |
| Section padding | 88 top / 40–110 bottom (c) | 88 top / 88 bottom (110 after T2) |
| Container | ≈1274px, padding 76 (c) | wideSize 1274, padding clamp(20px,5.3vw,76px) |
| Header | 59px white, fixed (c,g) | 64px white, sticky |
| Tiles | 3×408 then 4×301, 4:3, gap 16, caption under 17–18px (c,e) | 3 then 4, 4:3, gap 16, caption 17px under |
| Radius / shadow | 0 / none (d) | 0 / none |
| Button | 408×80 white, 1px #CCC, 15px ls .05em (d) | identical values |
| News rows | date 140px grey · title · chevron 20px (f) | same grid + 1px hairline |
| Motion | Swiper autoplay, hover all .3s, fixed header (g) | parallax 8–10%, hover .3s ease, sticky header, stagger 600ms |
| Photos | warm/cool documentary portraits (e) | film-grain documentary, warm/cool split |

## 10. Responsive requirements
- 390 px first screen: hero = 2×2 grid of 4:5 panels, horizontal h1 below, static 26 px bar; **no vertical text, no absolutely positioned labels** on mobile. Header collapses to wordmark + menu button (one menu only).
- Price list and every table/row list: at ≥782 px full container width, price column `nowrap`, right-aligned, never clipped (check at 800 and 1280). Below 782 px rows stack (name, then price/value under it, left-aligned).
- Any `<table>` (product specs, booth times) becomes stacked label/value blocks on mobile.
- No horizontal overflow at 390 / 1280 (parallax transform must not widen the page: panels `overflow: hidden`).

## 11. Home acceptance checklist
- [ ] Header white, centred nav, sticky; one menu.
- [ ] Hero: 4 abutting portrait photos P01–P04 (people with instruments), 2 px seams, ≈590 px tall at 1440×900.
- [ ] Vertical white headline on seam 2|3 (desktop); horizontal h1 under grid on mobile.
- [ ] Steel `#5C6A78` flat 26 px bar "Fit · Trial · Care" across the strip foot.
- [ ] Info row (hours · address · Book a trial booth ›) directly under the strip.
- [ ] 3 dated Floor-notes rows with chevrons + right-aligned "All floor notes", first row visible at 900 px.
- [ ] Statement heading at 4.5rem (≥4.25rem) with offset P05.
- [ ] FLOORS on #F6F6F6: exactly 3 tiles then 4 tiles, 4:3, radius 0, captions under, 408×80 outline button.
- [ ] TRIAL full-bleed P13 with `sp-parallax` (check-parallax ≥6 px desktop + mobile, 0 under reduced motion), static white panel.
- [ ] CARE price list: 6 items, numbers as §6, full width ≥782, nowrap right; stacked on mobile.
- [ ] STAFF 7 rows with the §6 names; VISIT address/hours as the fixed brand facts.
- [ ] Labels centred small caps on every section; bands alternate white / #F6F6F6.
- [ ] 16 distinct photos on home, no repeats, no text/logos in photos, film-grain STYLE consistent.
- [ ] First-screen saturated share ≤10% (check-first-screen.py), no reveal on hero, sp-static screenshots clean.
- [ ] Fonts Manrope / IBM Plex Sans / Noto Sans TC/JP via theme.json fontFace, editor = front.
- [ ] auto-gates pass for en (`1 1`).
