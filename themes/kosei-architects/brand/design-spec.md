# Kosei Architects: design spec (stage 1, binding for implementation)

Row b8-2 · slug `kosei-architects` · architecture firm for workplaces and housing · type **business** (WooCommerce-compatible, not required) · archetype asymmetric-masonry · hero **photo-left-text-right** · nav **split** · first_screen **top-bottom-halves** · page_structure **results-first-case-wall** · font_direction **serif** · **IMAGERY: photo** · five languages en, zh-TW, ja, fr, de (Hokuto 1.1.0 mechanism, numbers identical in all five).

References (S5-Style, unused before): **R1 main (80 % target)** Showa Sekkei https://www.showa-sekkei.co.jp/ (ref/showa-first.png, showa-full.png, scroll-showa-*.png; tokens = reference-tokens.md). **R2 secondary** STAGE Lab https://stagelab.inkdom.jp/ (ref/stage-first.png, scroll-stage-*.png). We borrow structure, techniques, colour relationships and the key-visual concept; we copy no image, text, logo or full page layout.

Container 1360px (R1 content 41→1399 at 1440 = 1359, token c), side gutter 40px desktop / 20px mobile. Radius **0 everywhere** (token d). Shadows none. Hairlines 1px `#DDDDDD`, structural lines 1px `#A6A6A6` (token d).

---

## 1. Signature techniques (three, obvious at a glance)

### T1. Framed panel grid with diagonal bands + ■ index list (R1 hero, C1 + C3)
- **R1**: the first screen is split: left column (x32–569) holds a 2-line light headline, a 1px black progress line (265 of 537px) on a 1px #DDD rule, then an index list "■ 00 Philosophy / ■ 01 Architecture / ■ 02 Infrastructure / ■ 03 Sustainability" — active row on a #F2F0EF panel with a 2-line description and "See more ↗", inactive rows 28px in #A6A6A6, divided by hairlines. Right column (x629–1440) is a 2×2 grid of panels framed by 1px #A6A6A6 lines that bleeds to the right viewport edge (540px tall), crossed by diagonal parallelogram bands in #F2F0EF and the accent.
- **Ours (home hero, top half of the first screen)**: same two-column logic, but per row **photo-left-text-right**: LEFT = the framed 2×2 grid bleeding to the **left** viewport edge (x0–800 at 1440, 560px tall), its panels are the timber model photograph (top-left + bottom-left panels merged = one 2-row photo cell 540×560) + right column: top-right panel = pale `#F0EFED` with two diagonal bands (`#E6E3DF` wide band 38 % of the panel width, `#5C6A78` narrow band 14 %, 62° angle, clipped by the panel edges), bottom-right panel = white with a 2-line 12px caption "Timber model, 1:50 · Harbour Workshops, Ostend" top-left 16px inset. RIGHT column (x860–1400) = H1 + progress line + **■ index list 00–03** (00 Workplaces active on pale panel with 2-line text + "See the work ↗"; 01 Housing, 02 Renovation, 03 Studio inactive `#A6A6A6`).
- **Shape / proportion / contrast that must not be softened**: 1px visible frame lines (`#A6A6A6`, not lighter), grid **bleeds to the viewport edge**, diagonal bands are crisp parallelograms (no gradient, no blur, no radius), the accent band is solid `#5C6A78` not a tint; inactive list rows really grey `#A6A6A6`, the active row really on a panel. ■ markers 8×8.
- **Inner pages**: every inner page hero reuses a **reduced framed grid** (1 photo cell + 1 pale cell with one diagonal band, 1px frame, bleeding to one edge, 360px tall) beside the page title; the ■ 00/01 index list is used as the in-page sub-navigation on Services, Housing, Workplaces and About (anchor list with active row on panel).

### T2. Ruled "Title / Explanation" table with ■ label + 3:2 thumbnail and ↗ (R1 Service, C2)
- **R1**: under the big Latin title "Service", a 12px muted table header "Title | Explanation" over a 1px rule; rows 187–201px tall separated by hairlines; col 1 (x41–200) = ■ + small English label with a ~101×67 3:2 thumbnail under it; col 2 (x233) = large ~28px title; col 3 (x863–1399) = two paragraphs (#222 then #6B6B6B); ↗ accent glyph at the row end; on hover the thumbnail widens to 40 % of the row.
- **Ours (home "Services" block, and the case wall rows)**: identical grid: header row "Title | Explanation" 12px `#6B6B6B` uppercase ls .08em; rows min-height 196px, padding 32px 0, 1px `#DDDDDD` rules (top + between + bottom); col widths 200 / 600 / rest (gap 32): col 1 = "■ 01 · Workplaces" label 13px + **thumbnail 120×80 (3:2)**; col 2 = title Source Serif 4 400 1.75rem; col 3 = paragraph 1 (1rem `#222`) + paragraph 2 (0.9375rem `#6B6B6B`, contains duration + fee "from"); ↗ 16px `#5C6A78` bottom-right. Hover: thumbnail width animates 120px→ 40 % of col 1+2 (CSS `transition: width .3s ease`, token g) — desktop only. Mobile: stacks label → thumb (full width 3:2) → title → text, rules kept.
- **Must not be softened**: the header row text "Title / Explanation" (localized), real rules between rows, thumbnails small (not cards), ↗ in accent.
- **Inner pages**: Services page = full table (6 rows); Projects archive = same ruled rows as the "case wall list" view; Fees page uses the ruled grid for the price list; Journal list = ruled rows with 3:2 thumbnail.

### T3. Stepped L-notch crop + arch-topped tall photo on a pale block (R2, C6)
- **R2**: hero photos crop with an L-shaped step cut out of one corner; a tall arch-topped photo at the right edge with a sage `#D0E0E0` shape behind it, offset.
- **Ours (home "Studio" block and every page's people/studio photo)**: photo A 4:5 with an **L-notch** at its top-left corner (notch 96×96 desktop / 48×48 mobile, via `clip-path: polygon(96px 0,100% 0,100% 100%,0 100%,0 96px,96px 96px)`), photo B **arch-topped** (`border-radius: 999px 999px 0 0` on the figure, i.e. a semicircle top, ratio 3:4) set at the right edge, behind it a pale block `#E4E8EC` (our accent at 15 % on white, replacing R2 sage) offset 40px right / 40px down. The radius-0 rule applies everywhere else; the arch is the **only** curve.
- **Must not be softened**: the notch must be clearly visible (≥ 96px), the arch must be a full semicircle, pale block offset visible.
- **Inner pages**: About (founders arch), Studio & People (studio notch photo), Housing (notch on the lead project), Contact (arch photo of the studio entrance).

### Continuation to inner pages (≥ 4, required)
| Page | T1 framed grid / ■ index | T2 ruled table | T3 notch / arch |
|---|---|---|---|
| Workplaces | reduced grid hero + ■ index sub-nav | 3 project rows | — |
| Housing | reduced grid hero + ■ index sub-nav | 2 project rows | notch on lead photo |
| Services | reduced grid hero + ■ index | full 6-row table | — |
| Projects (case wall) | reduced grid hero | list view rows | — |
| About | reduced grid hero + ■ index (00 Founding / 01 Method / 02 Values) | — | arch portrait |
| Studio & People | reduced grid hero | people as ruled rows (name / role / text) | notch studio photo |
| Fees | reduced grid hero | price list on ruled grid | — |
| Contact | reduced grid hero | — | arch entrance photo |

---

## 2. Key visual concept

**(1) Reference first screen (R1 Showa Sekkei).** Concept: *"Supporting society, creating the future"* — a design firm presenting itself as an ordered, engineered system. The picture is not a photo but a **drawing-board grid**: four framed panels like sheets on a plan table, diagonal parallelograms (abstract roads / beams / the logo's slash) cutting across them. The story is told by the **index list** on the left: Philosophy → Architecture → Infrastructure → Sustainability, one active at a time, a black **progress line** growing over the list as it auto-advances (a slow tour of what the firm does). Signature motion: the active index row cycles, the progress bar fills, the panels/diagonals swap state; below, the "Pick Up" photo strip slides horizontally. R2 adds people at work (painting a wall) beside a tall arch photo — the human in the process.

**(2) Our transposition (architecture firm, same composition, same motion idea, same image type = photo).** Kosei shows its own drawing table: the framed 2×2 grid becomes **a work table seen from above-front: a 1:50 timber model of an office building on a pale studio table** in the large photo cell, next to the pale panel with the diagonal bands (the model's roof slope abstracted, our accent as "the one built line"). The index list tells our story: **00 Workplaces / 01 Housing / 02 Renovation / 03 Studio** — the four kinds of work, with the progress line. Story: *"From a model on the table to a building people use every day"* — the bottom half (case wall) then shows the finished buildings, matching the row's results-first page structure. Motion: (a) **parallax** on the model photo (photo moves slower than frame/text, `--sp-par: 8%`), (b) the progress line is a static 50 % line (we do not auto-cycle: no custom JS; the active row is fixed at 00), (c) case-wall photos below reveal with the R1 **wipe**. Image type stays photographic (R1 uses photos everywhere outside the hero graphic, R2 too).

**(3) KV checklist (all visible in the 1440×900 first screen, en):**
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | 2×2 panel grid framed by 1px lines, bleeding to the viewport edge (R1) | 2×2 framed grid, 1px `#A6A6A6`, bleeds to the **left** edge; left column = one photo cell over 2 rows | x0–800, y88–648 | photo cell `sp-parallax` `--sp-par: 8%` (6 % mobile) | `hero-timber-model.webp` |
| 2 | Diagonal parallelogram bands (pale + accent) cut by the panel edges (R1) | top-right panel `#F0EFED`, band `#E6E3DF` + band `#5C6A78`, 62°, clipped by the panel | x540–800, y88–368 | static | none (CSS) |
| 3 | Light 2-line headline + 1px progress line over a hairline (R1) | H1 "From a model on the table / to buildings in use." Source Serif 4 300 4.25rem; 1px `#222` line 50 % width over 1px `#DDDDDD` | x860–1400, y120–330 | none (hero: no reveal) | — |
| 4 | ■ 00–03 index list, active row on pale panel with text + "↗" link, inactive grey (R1) | ■ 00 Workplaces (active, `#F0EFED` panel, 2-line text, "See the work ↗"), 01 Housing, 02 Renovation, 03 Studio in `#A6A6A6` | x860–1400, y350–640 | none | — |
| 5 | Pick Up photo strip starting at the bottom of the first screen (R1) / people at work (R2) | **Bottom half begins**: "■ Recent work" label + first row of the case wall: 3 photos 3:2 (finished office, housing, renovation), top edges visible at y≈720 | y690–900 | `sp-reveal--wipe` on each figure, `sp-stagger` 0.12s | `case-harbour-office.webp`, `case-linden-housing.webp`, `case-mill-renovation.webp` |
| 6 | Split nav, ■ logo mark (R1 logo mark in accent) | split nav: wordmark "KOSEI ARCHITECTS" with 8×8 ■ `#5C6A78` left of it, centre-left links, right "Contact ↗" with 36×36 accent square | top 72px | link hover colour .3s ease | — |

---

## 3. Colour (source R1 tokens a; accent swapped per row)
| Role | Hex | Share (home) | Source token |
|---|---|---|---|
| Ground | `#FFFFFF` | ~60 % | R1 ground #FFFFFF |
| Pale panel / hero bands / table active row | `#F0EFED` | ~22 % | R1 primary-100 #F2F0EF (−1 % L) |
| Pale 2 / footer band / wide diagonal | `#E6E3DF` | footer + band | R1 primary-200 #EBE6E2 (−2 % L) |
| Accent pale (T3 block behind arch) | `#E4E8EC` | ~4 % | R2 sage-tint role, derived from accent |
| Ink | `#222222` | text | R1 |
| Muted | `#6B6B6B` | 2nd paragraphs, meta | R1 |
| Inactive | `#A6A6A6` | inactive index rows, frame lines | R1 |
| Hairline | `#DDDDDD` | rules | R1 |
| **Accent** | `#5C6A78` (blue-grey) | ≈5 % (■ markers, ↗, one diagonal band, CTA square, scroll-top tab) | row hex replaces R1 #A92B5F (magenta is a corporate-brand colour; the row requires the quiet blue-grey and the note forbids a saturated accent) |
| Accent hover | `#4A5663` | buttons | accent −10 % L |
- Darkened interlude overlay: `rgba(34,34,34,.45)` (R1 45 % black, token e).
- First screen saturated pixels **≤ 15 %** (target ≤ 8 %; photo must be warm-neutral timber/white, no saturated sky in the hero). Accent never as a full-bleed field.

## 4. Typography (font_direction **serif**)
- **Latin display**: Source Serif 4 (OFL) 300 / 400. **Latin body / UI / nav / numerals**: Source Sans 3 (OFL) 400 / 600. (R1 = Heebo + Noto Sans JP; the row asks for Source Serif 4 + Source Sans 3; we keep R1's light display weight and its sizes.)
- Stacks (theme.json `fontFamilies` + `fontFace`, woff2 in `assets/fonts/`, same in editor iframe and front end; zh-TW/ja subset files done the Hokuto/Hada way):
  - `display`: `"Source Serif 4", "Noto Serif TC", "Noto Serif JP", Georgia, serif`
  - `body`: `"Source Sans 3", "Noto Serif TC", "Noto Serif JP", system-ui, sans-serif` — for `:lang(zh-TW)` body stack `"Source Sans 3","Noto Serif TC",serif`; `:lang(ja)` `"Source Sans 3","Noto Serif JP",serif` (CJK in Mincho per serif direction; no Noto Sans mixed in). Because `:lang(` rules exist → copy shared/inc/editor-lang.php to inc/editor-lang.php and require it.
- Scale (tokens b):
| Use | Font | Size | Weight | lh | ls |
|---|---|---|---|---|---|
| H1 hero (max, theme.json `xx-large`) | Source Serif 4 | **4.25rem** (68px) desktop / 2.5rem mobile, clamp(2.5rem,4.7vw,4.25rem) | 300 | 1.2 | 0 | (R1 hero ≈52–56, raised to meet ≥4.25rem)
| Section big Latin title ("Recent work", "Services") | Source Serif 4 | 2.75rem (R1 43.92px) | 400 | 1.1 | 0.03em (R1 1.32px) |
| H2 | Source Serif 4 | 2.25rem | 400 | 1.25 | 0 |
| Row title (T2) / index row | Source Serif 4 | 1.75rem (R1 ≈28px) | 400 | 1.3 | 0.01em |
| Section label "■ Pick Up" | Source Sans 3 | 1.5rem (R1 23.76) | 500→600 | 1.1 | 0.03em |
| Body | Source Sans 3 | 1rem | 400 | **1.8** (R1 28.8/16) | 0.03em (R1 .48px) |
| Meta / label | Source Sans 3 | 0.875rem | 400 | 1.8 | 0.03em |
| Index numerals 00–03 | Source Sans 3 | 13px | 400 | 1.1 | 0.03em, `#6B6B6B` |
| Nav | Source Sans 3 | 1.0625rem (R1 18px) | 400 | 1.1 | 0.03em |
- CJK: headings ≈0.75× (H1 `clamp(1.9rem,3.6vw,3.2rem)`), body 1rem lh **1.85**, ls 0.04em. fr/de `hyphens:auto`, headings `overflow-wrap:anywhere`.

## 5. Home page

### First screen (1440×900) — top-bottom halves
- 0–72: split header (wordmark left at x40; links "Work · Services · Studio · Journal" from x≈620; right "Fees" + "Contact" with 36×36 `#5C6A78` square ↗; a 1px `#DDDDDD` vertical divider before Contact as in R1).
- **Top half 88–648**: T1 hero (photo-left framed grid / text-right index list) — see KV table rows 1–4.
- **Bottom half 690–900+**: "■ Recent work" label (Source Sans 3 1.5rem) + right-aligned "All projects ↗", then the case wall's first row (KV 5).
- Mobile 390: header 64px (wordmark + menu button), grid becomes a single photo 4:3 full width (frame line top/bottom kept, one diagonal pale panel 100 % × 96px under it with the accent band), then H1, progress line, index list (all horizontal flow, **no vertical or absolutely positioned labels over text**, the caption sits under the photo in flow).

### Block order
| # | Block (class) | Purpose | Layout & photo | Copy |
|---|---|---|---|---|
| 1 | `ks-hero` | promise + the four kinds of work | T1 (above); **hero-timber-model** | H1 11 words + active row 30 words |
| 2 | `ks-wall` | **results first: case wall** (row page_structure) | asymmetric masonry, 3 columns 1360: col A 3:2 (`case-harbour-office`), col B 4:5 (`case-linden-housing`), col C 3:2 (`case-mill-renovation`) row 1; row 2: col A 4:5 (`case-school-annex`) offset −80px up, col B+C 16:9 spanning (`case-cooperative-yard`). Each tile: figure (`sp-reveal--wipe`) + under it ■ + type label 13px, project name Source Serif 4 1.375rem, then 3 lines "**Question** … / **Work** … / **Result** …" (0.9375rem, labels 600). Vertical 1px `#DDDDDD` dividers between columns (R1 Pick Up). | 5 × 35 words |
| 3 | `ks-intro` | who we are (narrative 1) | 2 cols: left 4/12 "■ 00 · Practice" + big Latin title "Practice"; right 7/12 H2 "We draw slowly so buildings can be used for a long time." + 3 paragraphs; small 3:2 photo 320×213 `studio-desk-drawings` under the text, wipe | ≈130 words |
| 4 | `ks-services` | services | **T2** ruled table, 4 rows (Workplaces, Housing, Renovation, Feasibility study), thumbs `svc-workplace`, `svc-housing`, `svc-renovation`, `svc-feasibility` (small 120×80) ; `sp-stagger` + rows `sp-reveal--up` ; "All services ↗" | 4 × 45 words |
| 5 | `ks-interlude` | quiet band + **parallax** | full-bleed (100vw × 720px desktop / 480px mobile) `sp-parallax` `--sp-par:10%` (6 % mobile), photo `interlude-concrete-light` (darkened `rgba(34,34,34,.45)` on a separate static layer); foreground left-bottom (x40, bottom 64): white label "■ How we work" + one sentence Source Serif 4 300 2.25rem "Every project starts with a question, not a style." (R1 interlude has no text; we add one line, foreground not inside the moving layer) | 10 words |
| 6 | `ks-process` | how a project runs | ■ index list (T1 grammar) left 5/12: 00 Brief & site visit · 01 Sketch design · 02 Permit drawings · 03 Construction stage, row 01 active on panel; right 6/12 the active step's 2 paragraphs + numbers (weeks). Not a 6-step grid, not a vertical timeline. | ≈110 words |
| 7 | `ks-studio` | people / trust | **T3**: left text 5/12 (H2 "Eight people, one table." + 2 paragraphs naming Anna Kosei & Rui Almeida + a typographic line of the other 6 names); right: notch photo `studio-team-table` (4:5, 520 wide) + arch photo `founder-anna-arch` (3:4, 300 wide) at the right edge on the `#E4E8EC` offset block | ≈120 words |
| 8 | `ks-fees` | fees | ground; label "■ Fees"; H2 "Fees, before we draw a line."; **full-width price list** (§8, all 6 items) on the ruled grid (T2 header "Service / What is included / Fee"), price col nowrap right; note + "Fee details ↗" | 6 rows + 40-word note |
| 9 | `ks-journal` | notes / journal | 3 posts, R1 Pick Up style: 3:2 310×206 images, ■ "Journal" + date meta, title 1rem, ↗ bottom-right, vertical hairline dividers; `sp-stagger` | 3 titles |
| 10 | `ks-contact` | visit / contact | pale `#F0EFED` band: left address + hours + phone; right arch photo `studio-entrance` (3:4, 360 wide, wipe off) + "Book a first meeting ↗" accent-square link | ≈60 words |
Footer: `#E6E3DF` band (R1 primary-200), 4 columns, ■ wordmark, small links; fixed scroll-top tab 50×184 `#5C6A78` with white rotated "To top" at the right edge (desktop only; hidden <782px).

Home photo slots = 18 (≥ 8): hero-timber-model, 5 case-*, studio-desk-drawings, interlude-concrete-light, studio-team-table, founder-anna-arch, studio-entrance, 4 svc-* thumbs (own files, never a case image reused), 3 journal images (model-workshop, journal-site-visit, journal-timber-detail). Each file once on the home page. Home English words ≥ 600.

### Comparison with recent themes
| # | Hayate Cycles | Hozen Facilities | Seiwa Furniture | Hodoki Clinic | **Kosei** |
|---|---|---|---|---|---|
| 1 | hero | hero | kv | hero + info bar | **framed-grid hero + ■ index** |
| 2 | index | band | about | about | **case wall (results first)** |
| 3 | shop story | statement | products | problem | intro |
| 4 | ride band | sites | ledger | unwind | ruled services table |
| 5 | process | network | showroom | method cards | darkened parallax interlude |
| 6 | prices | roof | projects | proof parallax | process as index list |
| 7 | stories | callout | prices | fees | notch + arch studio |
| 8 | floor | services | notes | therapists | fees |
| 9 | contact | prices / notes / contact | contact | … | journal, contact |
Why different: only Kosei puts the **project wall directly under the hero** (results-first), uses a framed panel grid with diagonal bands as the hero, a ruled Title/Explanation table, and the notch/arch crops; no full-bleed photo hero (Hodoki), no card row of method photos, no ledger table (Seiwa), no sticky dark band (Hoshi), no marquee under hero (Ito).

## 6. Inner pages (10)
| Page | Slug | Key content |
|---|---|---|
| Projects (case wall) | `projects` | all 4 cases as masonry wall + list view (T2 rows); filter labels as ■ text links (no JS) |
| Case: Harbour Workshops office | `projects/harbour-workshops` (post) | question / work / result, facts table (stacks on mobile), 3 photos |
| Workplaces | `workplaces` | approach, 3 rows of workplace projects, fee "from", FAQ (3) |
| Housing | `housing` | co-housing and small apartment buildings, notch lead photo, 2 rows |
| Renovation | `renovation` | reuse of industrial buildings, before/after described in text, 1 row |
| Services | `services` | full 6-row T2 table, deliverables per stage |
| Process | `process` | 4 stages ■ index list with weeks, what the client supplies |
| Fees | `fees` | full price list (§8) + how fees are calculated (percent of build cost explained, no guarantees) |
| Studio & People | `studio` | 8 people as ruled rows (name, role, since, 2 lines), notch studio photo |
| About | `about` | founding 2008, method, values, arch portrait of Anna |
| Journal | `journal` | posts (3), ruled list |
| Contact | `contact` | address, hours, map placeholder block (no embed), form (Contact Form plugin-free: simple mailto block or WP form pattern), arch entrance photo |

## 7. Responsive (hard)
- 390px: no horizontal overflow; first screen has **no vertical text, no absolutely positioned labels overlapping text** (caption, index numbers all in flow); hero grid collapses to photo + pale strip.
- Price list ≥782px (800 & 1280): **full container width**, 3 columns `minmax(12rem,1fr) 2fr auto`, price cell `white-space:nowrap; text-align:right`, never clipped. <782px: each row stacks (service / included / fee), fee bold on its own line.
- Every table (facts, people rows, fees) stacks under 782px. Masonry wall → 1 column on mobile, 2 at 782–1100.
- Scroll-top tab hidden <782px.

## 8. Fixed numbers (identical on home, inner pages, five languages)
- Studio: Kosei Architects, founded **2008**; studio at **Quai des Charbonnages 12, 1080 Brussels, Belgium** (fictional address); open **Mon–Fri 09:00–18:00**, Sat/Sun closed; first meeting by appointment; phone +32 2 555 01 84 (fictional); **8 people**.
- People (8): **Anna Kosei** (founder, architect, since 2008), **Rui Almeida** (partner, architect, 2011), **Lieve Maes** (project architect, housing, 2014), **Samuel Okafor** (project architect, workplaces, 2016), **Clara Vogt** (technical design & permits, 2017), **Yusuf Demir** (site & construction stage, 2019), **Inès Laurent** (model maker & visualisation, 2020), **Mei Tan** (studio manager, 2018).
- Prices (EUR, excl. VAT, 6 items):
| # | Service | Included | Fee |
|---|---|---|---|
| 1 | First meeting | 60 min at the studio or on site, written note of the brief | Free |
| 2 | Feasibility study | site and planning check, 2 massing options, area schedule, cost range | €3,800 |
| 3 | Sketch design | plans, sections, 1:100 model, cost estimate | from €9,500 |
| 4 | Permit drawings | full permit set, consultants coordinated, submission | from €14,000 |
| 5 | Full service (design to handover) | all stages, site meetings, handover file | 9 % of build cost |
| 6 | Interior workplace fit-out | per m², layout, finishes, furniture plan | €38 per m² |
- Process: 4 stages — Brief & site visit (2 weeks) → Sketch design (6–8 weeks) → Permit drawings (10–12 weeks) → Construction stage (per contract).
- Cases (4):
  1. **Harbour Workshops, Ostend** (2023, office, 4,200 m²): *Question* a logistics firm needed one floor for 180 desks in a 1960s warehouse; *Work* timber mezzanine, roof lights, kept the steel frame; *Result* in use since 2023, 180 desks, daylight at every desk. Photo `case-harbour-office`.
  2. **Linden Court housing, Leuven** (2022, 24 apartments, co-housing): shared garden, timber frame, deck access. Photo `case-linden-housing`.
  3. **Old Mill studios, Ghent** (2024, renovation, 1,600 m²): a flour mill turned into 14 workshops. Photo `case-mill-renovation`.
  4. **Rivière school annex, Namur** (2021, 6 classrooms, 900 m²): timber annex built in 11 months. Photo `case-school-annex`.
  (`case-cooperative-yard` = Linden Court shared yard detail; used only in the home wall.)
- No awards, no guarantees, no real brands or media.

## 9. Scroll effects (from stage-a.md candidates; pipeline/scroll-effects-spec.md)
| Effect | sp-* | Where | Source & timing |
|---|---|---|---|
| Fade-up reveal + stagger | `sp-reveal sp-reveal--up` on rows, parent `sp-stagger` | services table rows, process copy, journal cards, studio text | R1 data-anime fadein-up: IO rootMargin bottom −100px, once, .3s ease, 30px, delay .1s steps → set `--sp-dist: 24px` (≤30), `--sp-dur: .6s`, keep stagger .12s |
| Image wipe | `sp-reveal sp-reveal--wipe` on figures | case wall tiles (home + Projects), intro photo, inner page lead photos | R1 c-slide-anime01: 1.1s `cubic-bezier(.165,.84,.44,1)` → set wipe duration 1.1s, easing as R1 |
| Parallax | `sp-parallax` | hero photo cell (`--sp-par: 8%` desktop / 6 % mobile) and interlude (`--sp-par: 10%` / 6 % mobile) | R1 GSAP ScrollTrigger scrub on the full-bleed band; ours CSS scroll-driven |
- Hero has **no** reveal. Price list, form, legal text: no effects. No sp-marquee (avoid Ito's marquee).

### Parallax (required)
- **Block 1 hero photo cell**: Group `sp-parallax` = the left photo cell of the framed grid (overflow clip), `hero-timber-model.webp` as direct img, `--sp-par: 8%` (mobile 6 %). Frame lines, bands and all text are outside the moving layer.
- **Block 5 interlude**: Cover/Group `sp-parallax`, background `interlude-concrete-light.webp` as `.sp-parallax__layer`, static overlay layer `rgba(34,34,34,.45)`, foreground label + sentence, `--sp-par: 10%` (mobile 6 %). R1 equivalent: the darkened full-bleed photo band moved by ScrollTrigger.
- Must pass check-parallax.mjs (≥6px differential, 0 in reduced motion).

## 10. Images (18, one STYLE string, photo)
**Imagery: photo** (R1 and R2 are photographic). STYLE:
`High-key documentary architectural photography, natural daylight, soft shadows, white and pale warm-grey surfaces, light oak timber, concrete, muted blue-grey accents, neutral international modern European setting, calm and precise, 35mm lens, no text, no logos, no signage, no Japanese elements, diverse people when present, realistic`

| # | File | Subject / composition | Page · block | Home |
|---|---|---|---|---|
| 1 | hero-timber-model.webp | 1:50 light timber model of a 3-storey office building on a pale studio table, eye-level close, tracing paper and a steel ruler at the edge, white wall background, 4:5 | Home · hero | ✔ |
| 2 | case-harbour-office.webp | interior of converted warehouse office, timber mezzanine, roof lights, desks, 3:2 | Home wall · Case page hero · Workplaces | ✔ |
| 3 | case-linden-housing.webp | 4-storey timber-clad apartment building with deck access, garden, 4:5 | Home wall · Housing | ✔ |
| 4 | case-mill-renovation.webp | brick mill hall renovated into workshops, white steel, daylight, 3:2 | Home wall · Renovation | ✔ |
| 5 | case-school-annex.webp | single-storey timber school annex with large windows, morning light, 4:5 | Home wall · Projects | ✔ |
| 6 | case-cooperative-yard.webp | shared courtyard garden between housing blocks, benches, bicycles, 16:9 | Home wall | ✔ |
| 7 | studio-desk-drawings.webp | architect's hands marking a printed plan with a pencil, scale ruler, 3:2 | Home intro · Process | ✔ |
| 8 | interlude-concrete-light.webp | empty concrete-and-timber stairwell with a slanted daylight beam, 16:9 wide | Home interlude | ✔ |
| 9 | studio-team-table.webp | three architects around a large table with models and drawings, bright studio, 4:5 | Home studio (notch) · Studio page | ✔ |
| 10 | founder-anna-arch.webp | woman architect in her 50s by a studio window holding a model piece, 3:4 | Home studio (arch) · About | ✔ |
| 11 | studio-entrance.webp | studio entrance: glass door in a white brick facade, bicycle, plants, 3:4 | Home contact · Contact | ✔ |
| 12 | svc-workplace.webp | open-plan office corner with acoustic timber slats, 3:2 | Home services · Services | ✔ |
| 13 | svc-housing.webp | apartment interior, living room with timber floor and large window, 3:2 | Home services · Housing | ✔ |
| 14 | svc-renovation.webp | exposed old brick wall meeting new white steel stair, 3:2 | Home services · Renovation | ✔ |
| 15 | svc-feasibility.webp | site visit: two people with a tablet and measuring tape on an empty urban lot, 3:2 | Home services · Fees | ✔ |
| 16 | model-workshop.webp | model maker cutting timber strips at a workbench, 3:2 | Home journal · Journal post 1 · About | ✔ |
| 17 | journal-site-visit.webp | architect and client in hard hats on a timber-frame construction site, 3:2 | Home journal · Journal post 2 · Process | ✔ |
| 18 | journal-timber-detail.webp | close detail of a timber beam joint with steel connector, raking light, 3:2 | Home journal · Journal post 3 · Services | ✔ |
Each page uses an image at most once. ≤300 KB, ≤2000px, no cut-outs.

## 11. Similarity table (target 80 % of R1)
| Dimension | R1 value (token) | Kosei value |
|---|---|---|
| Ground / pale / pale2 | #FFFFFF / #F2F0EF / #EBE6E2 (a) | #FFFFFF / #F0EFED / #E6E3DF |
| Ink / muted / inactive / hairline | #222 / #6B6B6B / #A6A6A6 / #DDD (a) | same |
| Accent & share | #A92B5F 5.5 % (a) | #5C6A78 ≈5 % (row hex) |
| Body | 16px / 1.8 / .03em (b) | 1rem / 1.8 / .03em |
| Section title | 43.92px 400 ls 1.32 (b) | 2.75rem 400 .03em |
| Row title | ≈28px (b) | 1.75rem |
| Nav | 18px, height 72 (b,c) | 17px, 72px |
| Container / gutter | 1359 / 41px (c) | 1360 / 40px |
| Section padding | 110.8px (c) | 112px desktop / 72px mobile |
| Hero split | text 537 / graphic 811 full-bleed, 540 tall (c) | graphic 800 full-bleed / text 540, 560 tall (mirrored per row) |
| Service rows | 187–201px, 3 cols, thumb 101×67 (c,e) | min 196px, 200/600/rest, thumb 120×80 |
| Radius / shadow | 0 / none (d) | 0 / none (only exception: T3 arch from R2) |
| Card image | 3:2 310×206 (e) | 3:2 310×206 journal; wall 3:2 / 4:5 / 16:9 |
| Interlude | full-bleed, 45 % black (e) | full-bleed 720px, 45 % black |
| Marker / arrow | ■ 8×8, gap 8; ↗ 16px; 36×36 CTA square (f) | same, accent |
| Scroll-top tab | 50×184 accent (f) | 50×184 #5C6A78 |
| Reveal | fade-up .3s ease 30px, .1s steps (g) | sp-reveal--up 24px .6s, .12s stagger |
| Wipe | 1.1s cubic-bezier(.165,.84,.44,1) (g) | same |
| Hover | .3s ease (g) | .3s ease |

## 12. Home acceptance checklist
- [ ] First screen 1440×900 shows all 6 KV checklist items; framed grid bleeds left; diagonal bands crisp; ■ index list with active panel + grey rows; case wall top visible.
- [ ] T1, T2, T3 visible at a glance; T2 header "Title / Explanation" present; notch ≥96px and full semicircle arch.
- [ ] Block order exactly §5 (10 blocks); ≥8 photos (spec: 18 slots incl. thumbs/journal); no image twice on the home page.
- [ ] Accent only on small marks + one band + tab; saturated ≤15 % (check-first-screen.py).
- [ ] H1 Source Serif 4 300 4.25rem; theme.json max ≥4.25rem; fonts via fontFace, editor = front end.
- [ ] Price list full width ≥782px, price nowrap right; stacked on 390px; numbers = §8.
- [ ] 390px: no overflow, no overlapping/vertical labels in the first screen.
- [ ] sp-parallax on hero photo + interlude passes check-parallax.mjs; hero has no reveal; reduced motion static.
- [ ] Home ≥250 English words, ≥3 narrative paragraphs; no awards/guarantees/real brands.
- [ ] auto-gates.mjs en `1 1` pass=true.
