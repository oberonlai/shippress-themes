# Kensa Laboratory: design spec (stage B, binding for implementation)

Slug `kensa-laboratory`, a materials testing laboratory (concrete, rebar, cores, chemistry) with a sample-submission landing page. Type **landing** (business-services; WooCommerce declared compatible, not required). Design-plan row **b18-5**: archetype single-column-longform, hero diagonal-split (overridden by the reference strip, see T1), nav top-bar, real photography, documentary, palette navy-indigo (nando) `#465D73` (steel), fonts Montserrat / Albert Sans, font_direction **sans**, CJK Noto Sans TC / Noto Sans JP, first_screen **top-bottom-halves**, page_structure **landing-longform**.

Reference (only one): **GBRC — https://www.gbrc.or.jp/** (Japanese building-materials test body). Screens `brand/ref/gbrc-first.png`, `gbrc-s1…s4.png`, `scroll-pagetop-*.png`; tokens `brand/reference-tokens.md` (cited below as [a]–[g]). We copy no photo, text, icon or logo of the reference; we copy its layout gestures, proportions, colour relationships and key-visual concept.

Imagery: **photo** (IMAGERY: photo from stage-a.md; the reference uses documentary daylight photographs in a slide strip, no illustration).

---

## 1. Signature techniques (three; all must be obvious at a glance)

### T1. Peeking-neighbour slide strip (GBRC first screen, https://www.gbrc.or.jp/ top)
- **Reference:** one 1000×380 (2.63:1) photograph centred under the header; the previous and next slides sit at the same height left and right, cut by the viewport edges (centre = 69% of 1440) [e]; a white bold headline ≈40px, letter-spacing ≈6px, lower-left on the photo [b]; five Ø10 dots under the strip, black active / grey [f]; bxSlider auto-advances sideways [g].
- **Ours (home block 1, top half of first screen):** a horizontal track `.kl-strip__track` of 5 photos, each `width:min(1000px, 69.5vw); aspect-ratio:1000/380; object-fit:cover; border-radius:0`, gap **0** (reference slides abut), track centred so photo 1 (hero-compression) is in the middle and photos 5 / 2 peek on left / right, both cut by the viewport edge by the same amount. Neighbour slides carry a **white 40% veil** (`::after` rgba(255,255,255,.4)) like the reference's inactive slides.
- Headline `h1` on the centre photo, lower-left: left 48px, bottom 44px (desktop ≥782px only), white, Montserrat 600, `calc(var(--kl-w) * 0.036)` (36px on the 1000px slide), letter-spacing **0.06em** (CJK 0.12em), line-height 1.45 (CJK 1.5), text-shadow `0 1px 8px rgba(31,42,51,.28)`, two lines, `white-space:nowrap` ("What will your / sample bear?").
- Five ticks under the strip: 24×3px bars (our flattening of the Ø10 dots), gap 8px, centred, 18px below; first `#1F2A33`, others `#C7D0D8`. Decorative (aria-hidden), not buttons.
- **Must not be weakened:** the neighbours must be visibly cut by both viewport edges at 1280 and 1440 (each ≥ 120px visible); the centre photo must stay 2.63:1 at ≥782px; headline stays white inside the photo, lower-left, not centred.

### T2. 4×2 outline tiles directly under the strip (GBRC SERVICE tiles)
- **Reference:** eight tiles in a 4×2 grid in the 1000px container, 2px `#0097E0` border, radius 3px, height 84px, 28px dark-grey line icon at left, label centred, gap 28px horizontal / 33px vertical; hover 0.25s ease-in-out [c][d][f][g].
- **Ours (home block 2, bottom half of first screen):** container 1000px; `grid-template-columns:repeat(4,1fr); column-gap:28px; row-gap:24px` (ref 33 → 24 so both rows fit in 900px high first screen); each tile is an `<a href="#test-…">` 84px high, `border:2px solid #465D73; border-radius:3px; background:#FFF`, inline SVG line icon 28px stroke 1.5 `#1F2A33` at left 20px, two-line label centred (line 1 test name Montserrat 600 1rem `#1F2A33`; line 2 specimen Albert Sans 0.8125rem `#5B6873`). Hover/focus: background `#465D73`, text and icon white, 0.25s ease-in-out (ref [g]); one tile (Custom test plan) has the rust icon `#B5541C`.
- Tiles: Compression · Flexure · Slump & air · Rebar tensile · Core test · Density & absorption · Chloride content · Custom test plan.
- **Must not be weakened:** 2px full-saturation steel border (not grey, not 1px), 84px height, eight tiles in exactly 4×2 at ≥1024px, sitting **directly** under the ticks (gap 32px), no heading between strip and tiles.

### T3. White radius-8 panels on a full-width saturated band with dated rows (GBRC NEWS)
- **Reference:** full-width `#0097E0` band; inside the 1000px container, white panels radius 8px, padding 30px, gap 28px; panel title with icon in accent orange; rows: tracked date numerals (ls ~2px) + 80×24 solid chip radius 3 with white 12px text + underlined link [a][d][f] (screen gbrc-s1.png).
- **Ours (home block 7 "Sample log"):** full-bleed band `#465D73`, padding 64px 0; section label in white. Panel A "Lab notice" (title in rust `#B5541C` with a 28px circle-exclamation line icon): one row. Panel B "Recent log": six rows + an outlined white "All log entries »" chip button top-right (`#465D73` bg, white text, radius 3, 0.8125rem) linking to /sample-log/. Row = `time` Albert Sans 500 1rem letter-spacing **0.12em** tabular-nums `#1F2A33`, width 130px · chip 80×24 radius 3 white 0.75rem 600 centred · text 1rem underlined `#1F2A33` (underline offset 3px). Row gap 20px; rows wrap the text on narrow widths, chip never shrinks.
- Chip colours: Turnaround `#465D73`, Lab day `#8C969F` grey, Method `#6A6385` violet-grey, Notice `#B5541C` rust.
- **Must not be weakened:** band is the full viewport width and saturated steel (not mist); panels pure white radius 8; chips solid 80×24.

### Continuation to inner pages (at least 4; here 7)
| Page | T1 strip | T2 tiles | T3 band + panels |
|---|---|---|---|
| Tests | page-head strip (3 photos, 1000×300 centre, neighbours cut) | 4×2 tiles as in-page index to the 8 test sections | — |
| How to send a sample | page-head strip | 4×1 tiles = the four steps' anchors | band "Receiving calendar" panel with dated rows |
| Fees | — | 4×2 tiles = fee groups jump links | — |
| Lab & people | page-head strip | — | band panel "Lab-day status" rows |
| Case notes | page-head strip | — | each case summary as a white radius-8 panel on the steel band with dated rows (sampling dates) |
| Sample log | — | — | whole page is T3: band with Notice + full log (12 rows) |
| FAQ / Contact | — | 4×1 tiles = FAQ groups; Contact: 4 tiles (Book, Courier, Phone, Directions) | — |
Page-head strip = same component as home with `aspect-ratio:1000/300`, no headline overlay; `h1` sits below it in `#1F2A33` (left-aligned in 1000px container).

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
GBRC's first screen is a calm documentary photograph — city towers seen through green trees — in a centred wide slide window, with the previous and next photographs (crane, test facility) waiting at both viewport edges. A large tracked white headline sits lower-left, saying the body is a partner that builds trust and safety. Directly beneath, the eight services stand ready as outline tiles. Story: **a neutral third party standing behind every building.** Signature motion: the strip slides sideways, the next photograph already visible at the edge.

### (2) Our conversion (same composition, same motion concept, same image type)
A materials lab telling a builder what a sample will bear. The centre slide is a **documentary photograph of a gloved hand setting a marked concrete cylinder between the platens of a compression machine**; waiting at the edges are site coring (left) and a rebar bar in tensile grips (right); off-screen in the track are a curing tank and a slump test. The strip **drifts sideways** slowly (the "next photo waiting" idea) and the centre photo has a light parallax. Headline lower-left: **"What will your sample bear?"**. Directly under it, the eight open tests as outline tiles; one CTA "Book a submission" in the header (repeated later). Top half = header + strip; bottom half = tiles (first_screen top-bottom-halves).

### (3) KV checklist (all implemented and visible in the first screen at 1440×900 and 1280×800)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Centre 1000×380 slide photo | Gloved hand setting marked cylinder into compression platens | centred under header, top 104px | `sp-parallax` on centre figure, `--sp-par:6%` | `hero-compression.webp` |
| 2 | Neighbour slides cut by viewport edges | Core drilling left, rebar tensile right, same height, 40% white veil | bleeding off both edges | track drift: `translateX(0 → -2.5%)` 40s linear alternate infinite; off under reduced-motion / `?sp-static` / editor | `strip-coring.webp`, `strip-rebar.webp` (+ `strip-curing.webp`, `strip-slump.webp` in track) |
| 3 | Tracked white headline lower-left | "What will your sample bear?" white, 0.08em tracking | inside centre photo, left 48 / bottom 44px | none (hero no reveal) | — |
| 4 | Five slide dots | Five 24×3 ticks, first dark | 18px under strip, centred | none | — |
| 5 | 4×2 outline service tiles | Eight test tiles with line icons, anchors to Tests rows | directly under ticks, 32px gap | `sp-stagger` + `sp-reveal sp-reveal--up` | — (SVG icons drawn ourselves) |
| 6 | Header with nav row | Slim top bar: wordmark, anchor menu (Tests / How to send / Fees / Lab / FAQ), "Book a submission" button | top, 72px | none | — |

Drift CSS must be gated: `@media (prefers-reduced-motion:no-preference){ html.sp-js:not(.sp-static) .kl-strip__track{animation:kl-drift 40s linear infinite alternate} }` (use the same static flag sp-scroll.js sets for `?sp-static`; if it sets none, add the drift class from a 3-line inline check of `location.search` in the block's view script — no scroll listener). Editor: no animation.

---

## 3. Colour
Source: GBRC [a]. Relationship kept: white ground + one photo on first screen, one saturated mid-blue as band/border/button colour, a small orange accent for notices and chips, grey/purple secondary chips, dark grey text.

| Role | Ours | Reference | Share (page / first screen) |
|---|---|---|---|
| Main (band, tile borders, buttons, links) | `#465D73` nando steel | `#0097E0` | ~30% page / ~6% FS |
| Main dark (button hover, footer) | `#34485B` | — | ~4% |
| Secondary ground (CTA band, table header) | `#DDE4EA` mist | — | ~6% / 3% |
| Ground | `#FFFFFF` page, `#F3F5F7` alt / footer menu | `#FFFFFF`, `#EBEBEB` | ~55% / 55% |
| Text | `#1F2A33` body, `#5B6873` muted | `#333333` | — |
| Accent (notice title, one icon, notice chip, CTA hover outline) | `#B5541C` rust | `#E06807` | <1% |
| Chips | `#8C969F` grey, `#6A6385` violet-grey | `#A0A0A0`, `#5C4B8A` | <1% |
| Lines | `#C7D0D8` | — | — |

**Why the main hue changed beyond ±5%:** the design-plan row fixes navy-indigo (nando) `#465D73` and a quiet palette; GBRC's `#0097E0` cyan over ~38% of the page would exceed the quiet brief and repeat a bright corporate blue. We keep the *role and area* (band ≈ a third of the page, tiles and buttons in main colour) and the hue family (blue), only lowering chroma; accent/chips are darkened in step so contrast relations stay the same. White on `#465D73` = 6.6:1; rust on white = 5.0:1.

First-screen saturated share: target ≈12% (photos are cool, foliage-free; steel band not in first screen), **hard cap 15%** (check-first-screen.py), never above 30% (row quality_gate 2).

---

## 4. Type
font_direction **sans**: Latin headings and body both sans; CJK Noto Sans TC / JP. No serif anywhere.
- Headings: **Montserrat** 500/600/700 (the Latin face the reference sets its SERVICE-style labels in; CJK headings use the bundled Noto Sans 600 cut, never faux bold). Stack: `"Montserrat", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`; under `:lang(ja)` put Noto Sans JP before TC.
- Body: **Albert Sans** 400/500/600. Stack: `"Albert Sans", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif` (ja: JP first).
- Load all via theme.json `fontFamilies` + `fontFace` (woff2 in assets/fonts, Latin + zh-TW and ja subsets via the Hokuto/Hada workaround). style.css has `:lang(` rules → copy shared/inc/editor-lang.php to inc/editor-lang.php, require_once in functions.php. Editor and front must match (check-editor-fonts.mjs).

| Preset | Size | Weight / lh / tracking | Use | Source |
|---|---|---|---|---|
| `display` | clamp(2.5rem, 4.6vw, **4.25rem**) | 700 / 1.1 / 0.08em | hero h1 | [b] slide headline 40px ls 6px, scaled to theme max |
| `xx-large` | clamp(2rem, 3.2vw, 2.75rem) | 600 / 1.2 / 0.01em | section h2 | — |
| `x-large` | 1.25rem | 700 / 2 (40px) / 0.2em (=4px) | h3 / panel titles | [b] h3 20/40 700 ls 4px |
| `label` | 1rem | 500 / 1.5 / 0.125em (2px), uppercase | section label | [b] h2 16px ls 2px lh 24px |
| `medium` | 1.0625rem | 400 / 1.75 | body | [b] body 14/21, raised to 17px for reading |
| `small` | 0.875rem | 400 / 1.6 | meta, tile line 2 | — |
| `x-small` | 0.75rem | 600 / 24px | chips | [f] 12px |
zh-TW/ja: sizes ×0.75 for display and xx-large, body line-height 1.85; fr/de `hyphens:auto`.

Section opener (no Latin lockup — already used elsewhere): label in caps `label` preset `#465D73` followed by a 32×1px rule `#465D73` 10px to its right on the same baseline, then h2 16px below.

---

## 5. Spacing, radius, decoration, motion tokens
| Token | Value | Source |
|---|---|---|
| Container | 1000px content, 15px inner padding (desktop) / 20px (mobile) | [c] |
| Prose column (single-column longform) | 720px, left-aligned inside the 1000 container | ours (archetype) |
| Section padding | 60px top/bottom desktop, 44px mobile | [c] |
| Header | 72px single bar (ref 120 + 50 — reduced for an anchor-menu landing) | [c] |
| Strip | 1000×380, gap 0, radius 0 | [c][e] |
| Tiles | 84px, border 2px, radius 3, gap 28/24 | [c][d] |
| Panels | white, radius 8, padding 30, gap 28, no shadow | [c][d] |
| Chips | 80×24, radius 3 | [d][f] |
| Buttons | radius 3, height 48, padding 0 28px, `#465D73` bg; hover `#34485B` 0.3s | [g] buttons 0.3s |
| Page-top button | Ø40 `#1F2A33` circle, white chevron, bottom-right 24px, fades in after 300px (CSS scroll-driven `animation-timeline:scroll()` or JS-free `:target`-less; if not possible, always visible in footer) | [f][g] |
| Shadows | none anywhere | [d] |
| Anchor scroll | `scroll-behavior:smooth` (≈400ms) with reduced-motion off | [g] |
| FAQ | native `<details>`; open/close 300ms height via `interpolate-size` where supported | [g] slideToggle 300 |
| Nav hover | 200ms fade | [g] |

---

## 6. Home page

### First screen (1440×900; 1280×800 same structure)
- 0–72 header: wordmark "KENSA LABORATORY" Montserrat 700 1.125rem ls 0.12em left; anchor menu centre-right (Tests · How to send · Fees · Lab · FAQ, Albert Sans 500 0.9375rem); button "Book a submission" right.
- 104–484 strip (T1) with headline; 502 ticks.
- 536–728 tiles (T2) 4×2.
- 760–900: start of intro (label + first line of h2 visible) on white.
Ratio: white ~55%, photo ~35%, steel ~6%, mist 3%, rust ≤1%.

### Block order
| # | Block | Purpose | Layout / photo | Copy |
|---|---|---|---|---|
| 0 | Header | nav + single CTA | sticky top bar, white, 1px `#C7D0D8` bottom line | — |
| 1 | Strip (KV, T1) `#top` | concept + what we do | 5 photos: **hero-compression** (centre), strip-coring, strip-rebar, strip-curing, strip-slump | h1 only + visually-hidden one-line summary |
| 2 | Test tiles (T2) | 8 open tests, anchors | 4×2 grid | 16 labels |
| 3 | Intro "A neutral bench between the pour and the decision" `#about` | who/why | 720 prose column, 3 paragraphs; then **intro-bench** full container 1000×380; facts line under it: "8 open tests · 2 working days to report · 6 people at the bench" with `sp-count` | ~170 words |
| 4 | Tests in detail `#tests` | what each test tells you | 8 ruled rows (`dl`, 1px `#C7D0D8` top rule; name 30% / what it shows + specimen + turnaround 70%); between row 4 and 5 a two-photo pair 3:2 side by side, gap 28: **test-flexure**, **test-chloride** | 8 × ~30 words |
| 5 | Full-bleed parallax band | pause / receiving bay mood | `sp-parallax` cover, **parallax-receiving**, 100vw × 56vh (min 380px); foreground: white caption bottom-left in 1000 container "Every sample is logged the hour it arrives." on a `#1F2A33` 60% strip, not on the moving layer | 1 line |
| 6 | How to send a sample `#send` | the process | 720 column; 4 numbered prose paragraphs (big number Montserrat 600 2.75rem `#465D73` in normal flow left, text right), not a grid, not a timeline; button "Book a submission" after step 4 | ~180 words |
| 7 | Sample log band (T3) `#log` | proof of activity | full-bleed steel band, two white panels | 7 rows |
| 8 | Fees `#fees` | price table | full-width 1000 table, 8 rows, price column nowrap right; note under table (turnaround, express) | 8 rows + 2 lines |
| 9 | Lab & people `#lab` | who tests | 720 prose (2 paragraphs) + **people-team** 1000×380; then 6 names as a two-column ruled list (name 600 / role muted) — no portrait grid | ~120 words |
| 10 | Case notes `#cases` | 3 cases | 3 rows: thumbnail 240×160 (3:2) left, text right (title, site type, tests run, what it showed): **case-bridge**, **case-school**, **case-retrofit** | 3 × ~45 words |
| 11 | FAQ `#faq` | objections | 6 `<details>` in 720 column, 1px rules, plus/minus icon | 6 Q&A |
| 12 | Booking CTA `#book` | single conversion | mist `#DDE4EA` band; h2 "Book a submission", one sentence, button, address + receiving hours in two short lines | ~40 words |
| 13 | Footer | menu, legal | `#F3F5F7` menu row (ref footer menu) + `#34485B` strip with © line; page-top button | — |

Home photo positions: 5 (strip) + 1 + 2 + 1 + 1 + 3 = **13** (≥8). English words ≥ 650.

### Comparison with recent themes
| Theme | Home order | Kensa differs because |
|---|---|---|
| Saji Culinary | hero frame / pass (word+seal+portrait) / day band / terms ruled grid / full-bleed photo / brigade | Kensa opens with a sideways strip + 4×2 tiles, no framed hero, no portrait pass |
| Yuragi Spa | hero + info bar / intro / name marquee / sticky treatments / letterbox / booking / people | no info bar, no marquee, no sticky media; long single column |
| Tsuya Jewellers | framed hero + strip / who offset pair / pieces / commissions strip / drawn / bench band / people / prices | no offset pairs, no product cards; dated log panels on a band are new |
| Kairo Supply | hero / pinned stage / two doors / who / account stages / counter / rates / morning photo / stories / apply | no pinned stage, no two-door split, process is prose not stages |
Kensa's skeleton: strip → tiles → prose → ruled test rows → parallax band → numbered prose → steel log band → full table → people list → case rows → FAQ → CTA. None of the four shares its opening or its band device.

---

## 7. Inner pages (11 reachable + home; landing track)
1. **Tests** `/tests/` — T1 page-head strip (test-flexure centre, density, broken-cylinder); T2 tile index; 8 sections each with h2, what it shows, specimen size, method family ("written to recognised standard methods, EN/ASTM equivalents named on the report"), turnaround, price (same as fees). Photos: test-density, test-broken.
2. **How to send a sample** `/how-to-send/` — strip head (reception, courier, receiving); tiles = 4 steps; packing rules (label with submission number, cast date, mark not legible on photos), cylinders 100×200 or 150×300, cores ≥ 3× aggregate size; T3 band "Receiving calendar" (dated rows). Photos: reception, courier.
3. **Fees** `/fees/` — T2 tiles = fee groups; full price table (same 8 rows), express +40%, site visit, report copies; payment terms 30 days. Photo: intro-bench.
4. **Lab & people** `/lab/` — strip head; history (founded 2009, moved to Harbour Works 2017); 6 named people with role and one-line bio, text list; T3 band "Lab-day status". Photos: people-team, test-chloride.
5. **Case notes** `/cases/` — strip head; 3 cases in white panels on steel band with dated sampling rows, then long text. Photos: case-bridge, case-school, case-retrofit.
6. **Sample log** `/sample-log/` — T3 page: notice panel + 12 dated rows (6 from home + 6 older).
7. **FAQ** `/faq/` — tiles 4×1 (Sending, Results, Fees, Site visits), 14 details.
8. **Contact / Book a submission** `/book/` — 4 tiles (Book, Courier pickup, Phone, Directions); form (name, company, project, tests, number of specimens, cast date, drop-off date) below the fold; address, hours, map placeholder as a photo (receiving).
9. **Waitlist** `/newsletter/` — early access to the online submission portal: email signup, three lines what it will do. Photo: strip-curing.
10. **Privacy** `/privacy/`, 11. **Terms of testing** `/terms/` (sample retention 30 days, liability limited to fee), 12. **Thanks** `/thanks/`.
Header anchor menu on inner pages points to `/#tests` etc.; button always "Book a submission" → `/#book` on home, `/book/` elsewhere.

---

## 8. Fixed facts (identical on home, inner pages, five languages)
- Name Kensa Laboratory; founded **2009**; address **Unit 4, 18 Harbour Works Road, Northgate** (fictional, neutral).
- Hours: Mon–Fri 08:00–17:30; **sample receiving 08:30–16:00**; Sat 09:00–12:00 by arrangement; closed Sun and public holidays.
- Turnaround: written report (signed PDF) **2 working days** after the test; express **24 h, +40%**; samples kept **30 days** after report.
- Fees (8):
| Test | Unit | Price |
|---|---|---|
| Compressive strength | set of 3 cylinders | $85 |
| Flexural strength | per beam | $70 |
| Slump & air content | site visit, up to 6 tests | $140 |
| Rebar tensile & bend | per bar | $60 |
| Core extraction & test | per core | $165 |
| Density & absorption | per specimen | $45 |
| Chloride content | per sample | $95 |
| Custom test plan | per project | from $250 |
- People (6): **Ingrid Valen** — lab director; **Tomás Ferreira** — concrete lead; **Amara Okafor** — metals & rebar; **Priya Nair** — chemistry; **Marcus Lindqvist** — site coring; **Lena Hoffmann** — sample reception.
- Process (4): 1 Book a submission online → submission number by email; 2 Label & pack (submission number + cast date on each specimen); 3 Drop off at receiving 08:30–16:00 or book courier pickup; 4 Test on the due date → report 2 working days later.
- Cases (3): pedestrian bridge deck pour (28-day cylinders + cores); primary school extension (slump/air on site, rebar bends); mid-rise retrofit (cores, chloride profile).
- No accreditation, award, guarantee or real-client claims.

---

## 9. Photos (17; Grok, one at a time, Read each; ≤300 KB, ≤2000px, no cut-outs)
STYLE (one string, whole theme):
`High-key documentary photograph of a working materials testing laboratory, natural daylight from large windows, cool steel-blue colour grade, clean white and pale grey surfaces, real hands in nitrile gloves, real concrete and steel samples, shallow depth of field, 35mm lens, calm and precise, diverse adult technicians in neutral modern workwear, no text, no letters, no numbers, no logos, no brands, no Japanese elements`
Specimen markings must be illegible marker strokes / blank tags (no readable characters).

| # | File | Subject / composition | Ratio | Used on | Home |
|---|---|---|---|---|---|
| 1 | hero-compression.webp | gloved hand setting a marked concrete cylinder between steel platens of a compression machine, hand lower-right, cylinder centre-right, left third calm (headline space) | 2.63:1 (2000×760) | home strip centre | ✔ |
| 2 | strip-coring.webp | technician core-drilling a concrete slab on site, water slurry, side view | 2.63:1 | home strip left | ✔ |
| 3 | strip-rebar.webp | steel rebar clamped in tensile test grips, close side view | 2.63:1 | home strip right | ✔ |
| 4 | strip-curing.webp | rows of cylinders in a clear-water curing tank, top-down angle | 2.63:1 | home strip (track), newsletter | ✔ |
| 5 | strip-slump.webp | slump cone lifted from fresh concrete on a site board | 2.63:1 | home strip (track) | ✔ |
| 6 | intro-bench.webp | wide lab bench, calipers, cylinders, blank log clipboard | 2.63:1 | home intro, fees | ✔ |
| 7 | test-flexure.webp | concrete beam in a flexural frame, mid-span crack | 3:2 | home tests pair, tests head | ✔ |
| 8 | test-chloride.webp | chemist with powdered concrete in glass beaker, gloved | 3:2 | home tests pair, lab | ✔ |
| 9 | parallax-receiving.webp | receiving bay, crates of marked cylinders, daylight door, wide | 16:9 (2000×1125) | home parallax band, contact | ✔ |
| 10 | people-team.webp | two technicians examining a fractured cylinder at a bench | 2.63:1 | home lab, lab page | ✔ |
| 11 | case-bridge.webp | pedestrian bridge deck pour, workers, pump boom | 3:2 | home cases, cases page | ✔ |
| 12 | case-school.webp | low school-extension frame, rebar cages, morning | 3:2 | home cases, cases page | ✔ |
| 13 | case-retrofit.webp | core holes in a mid-rise concrete wall, technician with drill | 3:2 | home cases, cases page | ✔ |
| 14 | reception.webp | sample bag handed over a reception counter, hands only | 2.63:1 | how-to-send head | |
| 15 | courier.webp | sample cooler box on a hand trolley at a van door | 2.63:1 | how-to-send head | |
| 16 | test-density.webp | specimen on a digital balance under water basket | 2.63:1 | tests head | |
| 17 | test-broken.webp | close-up of a broken cylinder's cone fracture | 2.63:1 | tests head | |
(17 images; within 12–18. No photo twice on the same page.)

---

## 10. Scroll effects (sp-scroll, copied unchanged)
| Effect | Class | Where | Source | Trigger / time / easing |
|---|---|---|---|---|
| Tiles enter | parent `sp-stagger`, each tile `sp-reveal sp-reveal--up` | home block 2; same on Tests/Fees tile indexes | GBRC tiles (ref static; hover 0.25s ease-in-out) | in view; `--sp-dur:600ms`, stagger as sp-scroll (0.12s), `--sp-dist:24px`, ease cubic-bezier(.2,.7,.2,1) |
| Parallax | `sp-parallax` | (a) hero centre figure `--sp-par:6%`; (b) **block 5 full-bleed band** `--sp-par:10%` desktop / 6% at ≤781px | GBRC sideways slide motion (bxSlider) translated into depth | scroll-driven, linear, continuous |
| Count | `sp-reveal sp-count` | home intro facts line (8 · 2 · 6) | ours (supporting) | in view, 1.2s easeOutCubic |
Also `sp-reveal--up` on case rows and log rows (not on tables, form, FAQ, legal). Hero: no reveal.

**Parallax (required):** block 5 — Cover block with class `sp-parallax`, background `parallax-receiving.webp` (moving layer = `.wp-block-cover__image-background`), foreground caption strip static; `style="--sp-par:10%"`, mobile 6% via media query on the variable. Reference counterpart: GBRC's sideways slide drift (the next photo moving into place) → rendered as vertical depth on the one full-bleed photograph. Must pass check-parallax.mjs (≥6px desktop + mobile, 0 with reduced motion).

---

## 11. Responsive
- 390px first screen: strip centre slide `width:84vw; aspect-ratio:3/2`, neighbours peek ~8vw each side; **headline moves below the strip in normal flow** (`#1F2A33`, `clamp(2rem, 9vw, 2.5rem)`), no absolute overlay text, no vertical type; ticks under it; tiles `repeat(2,1fr)`, 72px tall, gap 12px.
- Header ≤781px: wordmark + "Book" button + menu toggle (one navigation only).
- Price table ≥782px: `width:100%` of the 1000 container, `table-layout:auto`, price column `white-space:nowrap; text-align:right; width:1%`, no horizontal scroll at 800 and 1280. ≤781px: every table stacks (each row a block: test bold, unit muted, price right-aligned on the same line).
- Test rows `dl` stack under 782px. Photo pair stacks. Case rows: thumbnail on top full width.
- No horizontal overflow at 390 / 1280 (strip track is `overflow:clip` inside a full-width wrapper).

---

## 12. Similarity to reference (target ~80%)
| Dimension | GBRC | Kensa |
|---|---|---|
| Main colour role/area | #0097E0, ~38% page, 6% FS | #465D73, ~30% page, 6% FS (row palette, see §3) |
| Accent | #E06807 <1% | #B5541C <1% |
| Chips | #A0A0A0, #5C4B8A, 80×24 r3 | #8C969F, #6A6385, 80×24 r3 |
| Ground | #FFF / #EBEBEB | #FFF / #F3F5F7 |
| Text | #333 | #1F2A33 |
| Container | 1000px, pad 15 | 1000px, pad 15 |
| Slide | 1000×380, r0, neighbours cut | 1000×380, r0, neighbours cut |
| Slide headline | ~40px 700 ls 6px white lower-left | 68px 700 ls .08em white lower-left |
| Dots | 5 × Ø10 | 5 × 24×3 ticks |
| Tiles | 4×2, 84px, 2px border, r3, gap 28/33, 28px icon | 4×2, 84px, 2px border, r3, gap 28/24, 28px icon |
| Section padding | 60px | 60px |
| h2 label | 16px ls 2px lh 24 | 16px ls 0.125em lh 1.5 |
| h3 | 20/40 700 ls 4px | 20/40 700 ls 0.2em |
| Panels | white r8 pad 30 gap 28 on band | white r8 pad 30 gap 28 on band |
| Date numerals | ls ~2px | ls 0.12em |
| Shadows | none | none |
| Imagery | documentary daylight, cool grade | documentary high-key, steel-blue grade |
| Motion | slide auto, hover 0.25s, buttons 0.3s, page-top fade >300px, Q&A 300ms | drift 40s, parallax, tile stagger 600ms, hover 0.25s, buttons 0.3s, page-top >300px, details 300ms |
| Body | 14/21 | 17/1.75 (readability) |

---

## 13. Home acceptance checklist
- [ ] First screen 1440×900: header, strip with both neighbours cut by edges, white tracked headline lower-left, 5 ticks, 4×2 tiles fully visible.
- [ ] KV checklist rows 1–6 all visible; drift runs with motion, static with `?sp-static` / reduced motion / editor.
- [ ] Tiles: 2px steel border, r3, 84px; hover steel fill 0.25s; each anchors to its test row.
- [ ] Steel full-bleed log band with two white r8 panels, 80×24 chips, tracked dates.
- [ ] Full-bleed parallax band (parallax-receiving) passes check-parallax.mjs desktop + mobile.
- [ ] Price table: 8 rows matching §8; ≥782px full width, price nowrap right, not cut at 800/1280; stacked at 390.
- [ ] 13 photo positions, no duplicates, no text/logos in photos.
- [ ] ≥650 English words, ≥3 prose paragraphs; numbers match §8.
- [ ] Fonts Montserrat / Albert Sans via theme.json fontFace; CJK Noto Sans; editor = front.
- [ ] First-screen saturated share ≤15%; max font size 4.25rem in theme.json.
- [ ] 390px: no overlay/vertical labels, headline under strip, no horizontal overflow.
- [ ] Only one top menu; one CTA label "Book a submission" repeated (header, after process, final band).
- [ ] auto-gates.mjs en pass (`1 1`).
