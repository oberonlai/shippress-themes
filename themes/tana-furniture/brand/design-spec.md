# 1.0.1 owner revision (2026-11-11, Taipei) — supersedes stepped headline requirements below
The owner rejected the zig-zag headline. Home and every page-stage headline now form one left-aligned editorial block aligned with the logo at 50px desktop / 20px mobile. Desktop copy is anchored near the lower-left above the information bar, Albert Sans 600, clamp(4.5rem, 6.8vw, 6.5rem), line height 1.08, tracking -.035em; inner stages use a smaller scale. The house-outline CTA has a separate right-hand grid column, never between lines. Mobile keeps the original normal-flow stack on ink with the same typography and CTA underneath. CJK uses non-breaking translated phrases separated by wbr; Latin retains semantic spaces. The blurred veil is replaced by a bottom gradient scrim (72% ink from mid-stage, 88% at the foot). A restrained 1.06→1 scale/fade is disabled for static, reduced-motion and editor views. Three-pane photography, all content below the hero, palette and form contract remain unchanged. Mobile information rows now stack full-width and do not inherit the desktop translateX animation; verify 360px and 390px under normal motion as well as static/reduced motion. Historical reference notes below describe 1.0.0, not an acceptance requirement for 1.0.1.

# Tana Furniture: design spec (stage 1, binding for implementation)

Slug `tana-furniture`. Independent furniture shop that fits pieces to the room a household actually lives in. Type **store** (WooCommerce declared and its templates styled; the site works fully without WooCommerce). Plan row b27-4: archetype card-mosaic, hero framed-window, nav centered, first screen three-equal-columns (read as "three panes in one frame", see 3.1), page structure alternating-longform, palette bark `#5A4E46`, fonts Albert Sans / Onest, font_direction **sans**, photographic, photo direction **low-key**, five languages en, zh-TW, ja, fr, de.

References (S5-Style, furniture / interior): **main https://shiodakagu.com/** (regional interior and furniture shop), **secondary https://betchu-kagu.co.jp/** (made-to-order furniture workshop). Measurements: `brand/reference-tokens.md` (cited below as `tok(a)` … `tok(g)`), screens in `brand/ref/`. We borrow structure, technique, colour relationships and the hero concept. We never copy their photographs, text, logos, icons or full page layout.

Imagery: **photo** (stage-a IMAGERY = photo; the main reference is photographic). One STYLE string for every image, see section 8.

---

## 1. Fixed brand facts (every page, all five languages, identical numbers)

- Name **Tana Furniture**. Founded **2009** by **Ines Haldane** (upholsterer) and **Tomas Reyes** (joiner).
- Showroom and workshop: **22 Weir Lane, Aldmoor** (fictional market town; local address formats per language in brand.md). Email **hello@tanafurniture.example**, phone **+44 1632 960 214** (fictional range).
- Opening hours: **Tue–Sat 10:00–18:00, Sun 11:00–16:00, closed Mon**. Home measuring visits **Tue–Fri, slots 09:00 / 11:30 / 14:30**, about **90 minutes**.
- Currency **GBP (£)** in every language; no converted prices.
- Process (four stages, written as narrative rows, never as a step grid): **1 Visit the showroom → 2 Measure the room (home visit, 90 min) → 3 Make (8–10 weeks in our workshop) → 4 Deliver and place (two-person team, old piece taken away on request)**.
- Delivery radius **40 km** included-zone price; beyond by quote. Measuring visit radius **25 km**.

### People (7, named everywhere the same; no portrait team grid)
| Name | Role |
|---|---|
| Ines Haldane | co-founder, upholstery and sofas |
| Tomas Reyes | co-founder, joinery and tables |
| Amara Okoye | room measuring visits |
| Lukas Brandt | workshop lead |
| Mei-Lin Chou | fabrics, leathers and finishes |
| Samir Haddad | delivery and placement lead |
| Clara Novak | showroom and orders |

### Price list (7 items; Home shows none of these in a table; the Prices page has the table; the same amounts appear in text on Measure, Made to order, Delivery, Collection and in all languages)
| # | Item | Note | Price |
|---|---|---|---|
| 1 | Home measuring visit | within 25 km, 90 min; deducted from any order over £1,000 | **£45** |
| 2 | Weir Sofa, three-seat | made to order, your fabric, 8–10 weeks | **from £2,850** |
| 3 | Kiln Dining Table, solid oak | cut to length 160–260 cm | **from £1,980** |
| 4 | Loft Dining Chair | oak or walnut, wool seat | **£395** |
| 5 | Ash Bed Frame, double | slatted base, made to your ceiling height | **£1,450** |
| 6 | Delivery and placement | two-person team, within 40 km | **£85** |
| 7 | Old piece taken away | reused or recycled locally | **£30** |

### WooCommerce demo products (6; same prices)
Weir Sofa £2,850 (P07) · Kiln Dining Table £1,980 (P08) · Loft Dining Chair £395 (P05) · Ash Bed Frame £1,450 (P15) · Reading Desk £1,120 (P16) · Hall Bench £640 (P17). Categories: Sofas, Tables, Chairs & benches, Beds, Desks. Tags: oak, walnut, ash, wool, made-to-order.

### Rooms (case stories, 3)
| # | Title | Household / room | Photo |
|---|---|---|---|
| R1 | A bed under a sloping roof | couple, loft bedroom with 1.9 m eaves: Ash Bed Frame cut lower, drawers under the eaves | P15 |
| R2 | A study in the box room | 2.1 × 2.4 m spare room: Reading Desk and wall shelving fitted to a radiator | P16 |
| R3 | Six at a kitchen corner | family of five: Kiln table at 190 cm + Hall Bench against the wall | P17 |

Journal posts (3, each with category + tags): "How we measure a room in ninety minutes" (Measuring; P11), "Inside the workshop: a sofa frame, week three" (Workshop; P12), "Getting a sideboard up a narrow stair" (Delivery; P14).

---

## 2. Signature techniques (three main + one supporting, all obvious at a glance)

### T1. Three-pane photo stage opening from black, stepped headline across the seam (shiodakagu first screen)
- Source: https://shiodakagu.com/ first screen (`ref/shioda-first.png`, `ref/scroll-shioda-hero-before.png` / `-after.png`). The screen opens on black with a large white headline; then three photographs fade in under it: two stacked 4:3 panes filling the left half, one tall pane filling the right half, **0 gap**. The headline's words sit at alternating heights so that the line zig-zags across the vertical seam at x = 50%. Tokens `tok(e)` (left panes 756×567, right 945×945 crop in 1440×900) and `tok(c)` (100svh stage, 68 px info bar docked at the foot from x 100 to 1340).
- Tana home: block 1 (section 3.1). Geometry at 1440: stage 100svh (min 640, max 960), ground `#111010`; left half = two panes each 50% height (object-fit cover, displayed ≈4:3), right half = one pane full height, gap 0, radius 0, no masks. Dark overlay on the photos `rgba(17,16,16,.28)` for white type.
- Stepped headline: four lines that alternate sides of the seam, each one lower than the last (a staircase crossing the seam): line 1 right-aligned ending 0.3em left of the seam, line 2 starting 0.3em right of the seam, line 3 left again, line 4 right again. Implement in flow (H1 with four `<span class="tf-step">` blocks, odd ones `width:50%; text-align:right; padding-right:.3em`, even ones `margin-left:50%; padding-left:.3em`), never absolute.
- Inner pages: every page opens with a **page stage** (`tf-stage--page`): same three panes, height 64svh (min 480), stepped H1 in two or three lines `xx-large` (4.5rem), plus the T3 stamp. See the continuation table.
- Must not be diluted: three panes, 0 gap, two stacked left + one tall right; seam exactly at 50%; white type on dark photos; the headline visibly crosses the seam in steps (not one centred block, not a single line). No equal three columns (that was Toso Paints).

### T2. Grey band of white photo-top cards + 5×2 line-icon tile index with a bracketed centred label (shiodakagu products band)
- Source: https://shiodakagu.com/ products band (`ref/scroll-shioda-cards-after.png`). Full-width grey `#DBDBDB` band; centred label in square brackets "[ … ]"; two white cards per row (photo on top 595×357 ≈ 1.67:1, then small category line and a two-line centred title); between card rows a **5×2 grid of white tiles** (row height 60 px, 1 px gaps showing the grey, 30 px teal outline icon + label at the left of each tile). Tokens `tok(a)` band share ~45%, `tok(c)` card pair 2 × 595 + 50 gutter, tiles 5 × 247 / 60 px rows / 1 px gap, `tok(d)` radius 0, no shadow, `tok(f)` icon tiles.
- Tana home: block 3 "[ What we make ]" (cards P07, P08), tile index of 10 categories, second card pair (P09 woods, P10 fabrics).
- Tile labels (10): Sofas, Dining tables, Chairs & benches, Beds, Storage, Desks, Shelving, Rugs, Curtains, Lighting. Icons: our own 1.5 px-stroke outline SVGs drawn for this theme (sofa, table, chair, bed, cupboard, desk, shelf, rug, curtain, lamp), 30×30, stroke `#006D80`; never trace the reference icons.
- Must not be diluted: band is grey `#DBDBDB` (not cream, not white), cards are pure white with radius 0 and no shadow, tiles show 1 px grey gaps, icons are teal outline, the label keeps its square brackets.

### T3. Pentagon house-outline stamp as the single CTA, centred on the seam (shiodakagu "how to choose" stamp)
- Source: https://shiodakagu.com/ first screen (`ref/shioda-first.png`), `tok(f)`: 100×80 px pentagon (a house outline: square body with a pitched roof), 1 px white stroke, two-line label inside, centred on the seam under the headline; hover scale 1.1 over .3 s, stroke turns teal.
- Tana: inline SVG pentagon 104×84 (points `52,1 103,30 103,83 1,83 1,30`), stroke 1 px currentColor, no fill; two-line label inside in HTML (editable), Onest 0.8125rem / lh 1.6 / ls .08em. Home hero stamp "How we / measure" → `/measure/`. On white or grey grounds the stamp is ink `#111010`; on photos white. Hover: `transform: scale(1.1)`, stroke `#006D80`, `.3s ease` (`tok(g)`).
- Placement: on Home hero (seam), Home block 6 (measure row, seam of the photo/card overlap), Home block 10 (Visit, "Book a / visit"), and on every page stage (label per page, see 2.5). Only ever one stamp per screen.
- Must not be diluted: pentagon house shape, 1 px line, ≥ 96 px wide, label inside it, centred on a seam. Not a round badge, not a rotating text ring, not a sticky tab.

### T4 (supporting, secondary reference; not counted). Hairline-ruled cell strip with thumbnail on top and "View more →" (betchu-kagu workshop strip)
- Source: https://betchu-kagu.co.jp/ (`ref/scroll-betchu-1500.png`): cells ruled with 1 px navy lines, thumbnail on top, "View More →" under it.
- Tana: Home block 8 Rooms strip (three cells R1–R3 + one text cell "All rooms →"), 1 px rules in bark `#5A4E46`, cell padding 32 px, thumbnail 4:3 on top, title 1.125rem, "View the room →" Onest 0.875rem. Also the text-only materials marquee (block 5) uses the same ruled cells. Rules in bark, not navy (navy is not ours).

### 2.5 Continuation to inner pages (T1 + T3 on all pages, T2 on ≥ 5, T4 on ≥ 3)
| Page | T1 page stage (panes TL / BL / R) + stepped H1 | T3 stamp label → target | T2 grey band / cards / tiles | T4 ruled cells / offset rows |
|---|---|---|---|---|
| About `/about/` | P12 / P10 / P18 · "Two makers, / one room / at a time." | Visit us → /visit/ | — | offset rows (founding, workshop, people) |
| Collection `/collection/` (+ WooCommerce shop/archive/search) | P09 / P10 / P13 · "Pieces, / sized to / your rooms." | How we measure → /measure/ | **full tile index (10) + product cards in white pairs on the grey band** | — |
| Made to order `/made-to-order/` | P12 / P05 / P07 · "Made / to measure." | See prices → /prices/ | **white cards P09 woods, P10 fabrics** on grey | offset rows (frame, fabric, finish) |
| How we measure `/measure/` | P01 / P02 / P03 (same as home set A; different page) · "We come / with a tape." | Book a visit → /visit/ | **4 white text cards** (what we measure: walls, doors & stairs, light, how you sit) | offset rows (before, during, after the visit) |
| Rooms `/rooms/` | P15 / P17 / P16 · "Three rooms, / three households." | Book a visit → /visit/ | — | **cell strip R1–R3** + one offset row per room |
| Delivery `/delivery/` | P14 / P06 / P13 · "Up the stair, / into place." | See prices → /prices/ | **white cards** (in the zone / beyond / old piece taken) | offset row P14 |
| Prices `/prices/` | P11 / P04 / P08 · "Prices, / plainly." | How we measure → /measure/ | table sits on a white card on the grey band | — |
| Visit `/visit/` (booking page) | P18 / P13 / P03 · "Come and / sit on it." | Write to us → /contact/ | **white card** with hours + address on grey | — |
| Contact `/contact/` | P18 / P10 / P11 · "Write / to the shop." | Visit us → /visit/ | form inside a white card on grey | — |
| Newsletter `/newsletter/` | P09 / P02 / P13 · "Letters / from the workshop." | Read the journal → /journal/ | form inside a white card on grey | — |
| Journal (index, archive, category, tag) | P11 / P12 / P14 · "Notes / from the shop." | Visit us → /visit/ | **post cards = T2 white photo-top cards in pairs on grey** | — |
| Single post | stage uses the featured image in the tall right pane, left panes = two fixed images not used by that post | Visit us → /visit/ | — | — |
| WooCommerce single product, cart, checkout, account | stage 40svh variant (right pane = product image) | Book a visit | totals column = white card on grey | — |

---

## 3. Key visual concept

### (1) The reference first screen: concept, story, signature motion
shiodakagu.com opens on **pure black with a big white serif line set in stepped words** ("choose furniture together with the way you live"). After about 1.7 s three documentary photographs fade in beneath the type: top-left a close-up of a dark chair arm, bottom-left a wooden floor with a chair, right a whole dining room by a garden window. The story runs **from detail to room**: the hand-feel of one piece, then the floor it stands on, then the life around it. A pentagon house-outline stamp ("how to choose furniture") sits on the seam; a white news bar with a teal button docks at the foot. Motion (`tok(g)`, stage-a breakdown): headline scale 1.3 → 1 over 2.5 s Power2.easeOut on black; stage fade 1 s; stamp and lead rise 20 px at 1.5 s delay; the three-pane set cross-fades to another set every 6 s.

### (2) Our translation (same composition, same motion idea, same image type: low-key documentary photos)
Tana Furniture tells the same **detail → room** story, but for a shop that fits furniture to a real room: the screen opens on ink-black `#111010` with the white stepped line **"Furniture, / fitted to / the room / you live in."**; then three panes fade in: **top-left** a salesperson (Amara) kneeling with a tape measure at the arm of a sofa; **bottom-left** the customer's hand holding a wool fabric swatch up to the window light; **right (tall)** the finished living room with that sofa in place by the window. The pentagon stamp "How we / measure" sits on the seam. A white bar docks at the foot with the showroom hours and a teal "Book a visit" button. Every 6 s the stage cross-fades to a second set telling the next part of the story: **TL** two hands running a tape along a dining-table edge, **BL** a close-up of an oak chair leg on a floorboard, **R** two delivery people carrying a sideboard through a front door.

### (3) KV checklist (all items on the home first screen, visible at 1440×900 with `?sp-static`)
| # | Reference element | Our equivalent | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Black first frame with a large stepped white headline | Ink `#111010` ground; H1 "Furniture, / fitted to / the room / you live in." Albert Sans 300 white, `clamp(3rem, 6.5vw, 6.25rem)`, four lines alternating sides of the seam, each lower | centred block, lines straddling x = 50%, vertical centre at 46% of the stage | load-time CSS: `scale(1.3) → 1`, 2.5 s `cubic-bezier(.215,.61,.355,1)`; no reveal | — (type only) |
| 2 | Top-left pane: chair-arm close-up | Kneeling salesperson, tape at the sofa arm | left half, top 50% | stage `opacity 0 → 1`, 1 s, delay 1.7 s (load-time) | P01 |
| 3 | Bottom-left pane: floor with a chair | Hand holding a fabric swatch to the window light | left half, bottom 50% | same fade | P02 |
| 4 | Right tall pane: whole dining room by a window | Finished living room, sofa in place by the window | right half, full height | same fade + `sp-parallax` `--sp-par: 6%` on this pane | P03 |
| 5 | Pentagon house stamp "how to choose" on the seam | Pentagon stamp "How we / measure" → /measure/ | centred on the seam, 40 px under the H1 (in flow) | rises 20 px + fades, 1 s, delay 1.5 s; hover scale 1.1 .3 s | — (SVG) |
| 6 | White docked bar: news line + teal button | White bar: "Showroom · Tue–Sat 10–18 · Sun 11–16" + latest journal title; teal button "Book a visit" → /visit/ | bottom of the stage, x 100 → 1340 at 1440 (container 1240), height 68 px | none | — |
| (7) | Set swap every 6 s | Second set cross-fades in, then back | all three panes | 1.2 s opacity cross-fade, cycle 12 s (pure CSS keyframes; off with reduced motion, `?sp-static` and in the editor: set A only) | P04, P05, P06 |

Rules: hero content is never hidden by a scroll reveal; with `?sp-static` / reduced motion everything is in its final state (set A visible, H1 scale 1, stamp in place). Do not drop the scene for "adapt, don't copy": the three panes must show those exact subjects.

---

## 4. Colour

Reference relationship (`tok(a)`): white ground / one neutral grey band / black text / one deep accent under 3%. We keep the reference hexes; bark from the plan row only takes the footer.

| Role | Hex | Source | Use | Share of a page |
|---|---|---|---|---|
| Base | `#FFFFFF` | ref ground `#FFFFFF` | page ground, cards, tiles, info bar | ~35% |
| Band | `#DBDBDB` | ref band `#DBDBDB` (exact) | T2 bands, offset-row bands, card grounds | ~40–45% |
| Ink | `#111010` | ref text `#000000` / hero black (+6% lightness, softer on white) | body, headings, hero ground, page-stage ground | text + hero |
| Accent | `#006D80` | ref accent `#006D80` (exact) | primary buttons (info bar, forms), tile icons, stamp hover stroke, link hover, focus ring | < 3% |
| Bark | `#5A4E46` | plan row  | footer ground, T4 cell rules, small caption rules | footer only (~8%) |
| Muted text | `#5C5A58` | derived from ink | captions, meta, dates | — |
| Hairline | `#CCCCCC` | ref hairline `tok(d)` | nav underline, rows on white | — |
| Paper | `#FAF9F7` | stage-a | only the newsletter card inner ground on bark (footer) | < 2% |

- Why not bark as the accent: the reference's single deep accent is teal; bark is too close to the photographs' wood tones to read as a button. Bark keeps the plan identity in the footer and the T4 rules. Teal differs from recent mains (Nagisa slate, Yawara, Kuki iron, Toso moss).
- Contrast: white on `#006D80` = 5.9:1 (OK at 0.875rem); ink on `#DBDBDB` 14.8:1; white on bark 8.3:1.
- **First-screen saturated share** (`scripts/check-first-screen.py`): ref 11.6% (`tok(a)`), plan note ≤ 30%, common ≤ 15% → **gate 15%, target ≤ 12%**. Achieve with the low-key desaturated photo grade and the overlay; no coloured UI except the teal button (≈ 250×68 px).

## 5. Type (font_direction = sans)

Latin headings and body are sans; CJK uses Noto Sans TC / Noto Sans JP ( / ), never Mincho.
- Display: **Albert Sans** 300 / 400 (woff2, Latin + Latin-ext). Body: **Onest** 300 / 400 / 500 (woff2, Latin + Latin-ext).
- zh-TW: **Noto Sans TC** 400 subset; ja: **Noto Sans JP** 400 subset (Hokuto/Hada subset method; the zh subset script is known broken, use their replacement).
- All loaded via **theme.json `fontFamilies` + `fontFace`** so the editor iframe and the front end match; `style.css` has `:lang(` rules → copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and require it.
- Stacks (theme.json families + `:root:lang()` overrides):
  - en/fr/de display: `"Albert Sans", "Helvetica Neue", Arial, sans-serif`; body: `"Onest", "Helvetica Neue", Arial, sans-serif`.
  - zh-TW display: `"Albert Sans", "Noto Sans TC", "PingFang TC", "Microsoft JhengHei", sans-serif`; body: `"Onest", "PingFang TC", "Microsoft JhengHei", "Heiti TC", sans-serif` (no Noto Sans TC, no JP font in body).
  - ja display: `"Albert Sans", "Noto Sans JP", "Hiragino Sans", "Yu Gothic", sans-serif`; body: `"Onest", "Hiragino Sans", "Hiragino Kaku Gothic ProN", "Yu Gothic", Meiryo, sans-serif`.
- Scale (theme.json presets; source `tok(b)`): small 0.8125rem · base 1rem · medium 1.3rem (ref card H3 20.8px) · large 1.75rem · x-large 3.125rem (ref H2 lead 50px) · xx-large 4.5rem (page stage H1) · **huge 6.25rem** (home hero, ref ≈100px; max size, ≥ 4.25rem satisfied).
- Weights: headings 300 (hero, stage, H2) / 400 (H3, labels); body 300 (ref body 300), 400 for UI.
- Line-height: body 2.0 Latin (ref 32/16), **1.85 CJK**; H2 1.6 (ref 90/50 = 1.8, tightened for Latin); hero/stage 1.05; card titles 1.75.
- Letter-spacing: ref 0.1em on Japanese; Latin body 0.03em, headings 0.02em, bracket labels and nav 0.1em, stamp 0.08em.
- Bracket label: "[ What we make ]" Onest 400 1.1rem (ref 17.6px), centred, brackets are typed text in the block (no CSS `content:`).
- CJK headings ≈ 0.75× the English size (hero zh/ja `clamp(2.25rem, 4.8vw, 4.5rem)`); fr/de `hyphens: auto`.

Header (ref `tok(c)` 110 px): height 96 px desktop / 64 px mobile; logo wordmark "Tana Furniture" Albert Sans 400 1.25rem + a small 1 px pentagon mark (T3 shape, 22 px) at left x 50; **one centred menu** (nav centered): Collection, Made to order, How we measure, Rooms, Journal, About, Visit, Onest 0.875rem ls .1em; right: hamburger (2 lines 28 × 8 px) under 1100 px opening the same menu as an overlay. Over the dark stage the header is transparent with white type; it is `position:absolute` on every template because every template starts with a stage. Exactly one `core/navigation` (the header). Footer links are plain paragraph links, not a second navigation block.

Footer (bark `#5A4E46`, white text): newsletter slot (see 11) left, address / hours / phone / email centre, text links right (Prices, Delivery, Contact, Newsletter, Journal); bottom line © 2009–2026 Tana Furniture.

---

## 6. Home page

### 6.1 First screen (1440×900; see KV checklist)
Stage 100svh: three panes (P01 TL, P02 BL, P03 R tall) under `rgba(17,16,16,.28)`; header on top; H1 stepped across the seam; T3 stamp under it on the seam; white info bar docked at the foot (container 1240, 68 px, left: 0.8125rem muted "Showroom" label + hours line + latest note title; right: teal block button 250 × 68 "Book a visit"). Mobile 390: see section 9. Forbidden on the first screen: table, form, search box, giant centred single word, cut-outs.

### 6.2 Block order (patterns `front-*`)
| # | Pattern | Purpose | Layout and photos | Copy (en) |
|---|---|---|---|---|
| 1 | `front-stage` | KV (T1 + T3) | section 6.1; P01, P02, P03 (+ swap set P04, P05, P06) | 12 words + bar 20 |
| 2 | `front-idea` | what kind of shop | White, padding 100 px. Label "[ The shop ]" centred; H2 `x-large` 300 centred two lines "We start with the room, / then the furniture." ; one narrative paragraph centred max 720 px | **narrative 1: 70 words** |
| 3 | `front-make` | what we make (T2) | Grey band `#DBDBDB`, padding 100. Label "[ What we make ]"; card pair (P07 "Sofas built on our frames, / covered in your cloth"; P08 "Oak tables cut / to the length of your room"), each: photo 1.67:1 top, category 0.8125rem, title 1.3rem two lines centred, card padding 36 px; then **5×2 tile index**; then second pair (P09 "Five woods, / chosen in daylight"; P10 "Wools, linens / and leathers to hold"). `sp-stagger` + `sp-reveal--up` on each card and on the tile grid as a whole. | 4 × 12 words + tile labels |
| 4 | `front-showroom` | breath + parallax | Full-bleed `sp-parallax` (`--sp-par: 10%`, mobile 6%), height 72vh (min 480, max 760), background P13 (showroom wide). Foreground bottom-left inside the 1240 container: white card 420 px, padding 40: label "[ Showroom ]", 2 lines "Twenty rooms' worth / of pieces to sit on." + link "Visit the showroom →". Text never on the moving layer. | 25 words |
| 5 | `front-materials` | materials (T4 + marquee) | White, padding 48 0. Full-width `sp-marquee` strip of text-only ruled cells (1 px bark rules, cell 220 × 88, 30 px inner padding): White oak · Walnut · Ash · Cherry · Smoked oak · Wool bouclé · Washed linen · Vegetable-tanned leather · Wool felt · Linseed oil. Duration 30 s linear, pause on hover. No images (avoids duplicate photos). | 10 names |
| 6 | `front-ways` | measure / make / deliver (alternating-longform, offset photo + white card, ref `ref/shioda-offset-card.png`) | Grey band, padding 100. Three rows. Row A: P11 (room plan, scale ruler, tape) 792×575 bleeding off the **right** viewport edge, white card 595 wide overlapping the photo's left edge by 47 px (`tok(e)`), card vertically centred, padding 50; T3 stamp "Book a / visit" (ink) on the seam between card and photo in this row only. Row B mirrored: P12 (workshop: upholsterer at a sofa frame) bleeds **left**, card right. Row C like A: P14 (delivery through a doorway). Row gap 50 px. Card: H3 1.75rem 300, paragraph, link "More →" with teal arrow. `sp-reveal--up` on each card only (not photos). | **narrative 2–4: 3 × 60 words** (Measure, Make, Deliver) |
| 7 | `front-people` | who you meet (no grid) | White, padding 100. Label "[ Who you'll meet ]"; left 5/12: **text only**, a list of the 7 names with roles in hairline rows (1 px `#CCC`, 56 px rows, name Albert Sans 400 1.125rem, role Onest 300 muted right-aligned); right 7/12: narrative paragraph about the team (50 words) + link "About the shop →". | 50 words |
| 8 | `front-rooms` | proof by stories (T4) | Grey band, padding 100. Label "[ Rooms ]" + H2 "Three rooms, / three households." left; strip of 4 ruled cells (bark 1 px) on white: R1 P15, R2 P16, R3 P17 (thumbnail 4:3 top, "01" counter 0.75rem, title, one line, "View the room →"), cell 4 text-only "All rooms →". `sp-stagger` + `sp-reveal--up` on the cells (strip is not horizontally scrolling at ≥782; on mobile cells stack). | 3 × 18 words |
| 9 | `front-notes` | journal as news rows (no images, avoids repeats) | White, padding 80. Label "[ Notes ]"; Query Loop 3 latest posts as 1 px ruled rows: date (Onest 0.8125rem muted) · category · title (1.125rem) · "→" at right; link "All notes →". | Query Loop |
| 10 | `front-visit` | close: visit + letters | Grey band, padding 100. Left 6/12: P18 (shop front on Weir Lane, 4:3, radius 0); right 6/12 white card: H2 "Come and / sit on it." `x-large`, address, hours, phone, T3 stamp "Book a / visit" (ink) → /visit/. Below the two columns, full width, white card: newsletter slot (section 11) with label "[ Letters ]" and one line "One letter a season from the workshop." | 45 words |

Footer follows (bark). English home ≥ 250 words; narrative paragraphs ≥ 20 words in blocks 2 and 6 (A, B, C) and 7 → five. CJK ≥ 500 characters.

**Home photo positions (18 distinct, none repeated):** P01 P02 P03 (stage A) · P04 P05 P06 (stage B) · P07 P08 P09 P10 (block 3) · P13 (block 4) · P11 P12 P14 (block 6) · P15 P16 P17 (block 8) · P18 (block 10). Even with set B hidden in `?sp-static`, 15 visible ≥ 8.

### 6.3 Comparison with recent themes (home block order)
| # | Nagisa Grill | Yawara Rheumatology | Kuki Climate | Toso Paints | **Tana Furniture** |
|---|---|---|---|---|---|
| 1 | dimmed film hero + foot wordmark | half-and-half KV, square strip | framed pinned window + year strip | three equal columns + drawing | **2 stacked + 1 tall panes from black, stepped H1 across seam, pentagon stamp, docked bar** |
| 2 | dark concept scene | problem + square photo | iron concept card | statement band | **centred bracketed idea** |
| 3 | day rows | parallax band + steps | ruled building rows | range strip + caps marquee | **grey band: white photo-top cards + 5×2 icon tiles** |
| 4 | kitchen duo | 3 abutting squares team | parallax plant room | sticky chapters | **parallax showroom with white card** |
| 5 | tables | count figures | pill-toggle panels | spec table | **text marquee of ruled material cells** |
| 6 | plates panels on slate | day row | survey list | offset mixing rows | **three offset photo-bleed rows with overlapping white cards** |
| 7 | journal cards | square journal | marquee photo log | order rows | **name/role hairline list (no portraits)** |
| 8 | parallax visit | visit strip | price table | journal rows | **ruled room cells (T4)** |
| 9 | — | — | — | drawn-line visit | **news rows** |
| 10 | — | — | — | — | **visit + newsletter on grey** |
Why not alike: no pinned window (Kuki), no equal three columns (Toso), no half-and-half KV (Yawara), no sticky chapters, no price table on home, no foot wordmark (Nagisa), no portrait squares. Tana's shapes (pentagon house stamp on a seam, stepped words crossing a seam, grey band with 1 px-gap icon tiles, photo bleeding off the viewport under a white card) appear in none of them. Toso's offset rows were staggered product columns; ours are single full-bleed photos with an overlapping card.

---

## 7. Inner pages (12 + WooCommerce templates)

Every page: page stage (T1, 64svh, panes from table 2.5) + stamp (T3) → body alternating grey band / white (alternating-longform) → close row "Come and sit on it" with address + stamp. No sidebar.
1. **About** (`page-about`): founded 2009 by Ines Haldane and Tomas Reyes; three offset rows on grey (2009 the first sofa frame P13, choosing cloth P02, the rooms we fit P16; photos bleed alternately); the 7 people as hairline name/role rows with a paragraph each (25 words); "A day at the shop" narrative (daily routine: 08:30 workshop opens, 10:00 showroom, Tue–Fri measuring visits, 16:00 dispatch). 3 narrative sections ≥ 60 words.
2. **Collection** (`page-collection`; WooCommerce `archive-product`, `taxonomy-product_cat`, `product-search-results` reuse the layout): T2 tile index (10, each anchor to a section), then product cards in white pairs on grey (6 products: image 1.67:1, category, two-line name, price "from £…"). Without WooCommerce the pairs are static and link to /made-to-order/. Add to cart = text link with arrow.
3. **Made to order** (`page-made-to-order`): woods (P09) and fabrics (P10) T2 cards; offset rows Frame (P14 carried in, the frame tested in the room), Cover (P02), Finish (P08); stage is P12 / P05 / P07, so no repeat; lead time 8–10 weeks; prices in text (sofa from £2,850, table from £1,980).
4. **How we measure** (`page-measure`): 4 white text cards on grey (Walls and alcoves / Doors, stairs and lifts / Light and windows / How you sit and eat); offset rows Before (P11), During (P04), After (P15) the 90-minute visit; £45 within 25 km, deducted from orders over £1,000; slots 09:00 / 11:30 / 14:30 Tue–Fri.
5. **Rooms** (`page-rooms`): T4 cell strip R1–R3 then one offset row per room (P15, P16, P17 are in the stage → rows use P07, P08, P05 detail shots of the pieces in those rooms) with a 90-word story each, household and the piece and measurement that mattered.
6. **Delivery** (`page-delivery`): three white cards (Within 40 km £85 / Beyond 40 km by quote / Old piece taken away £30); offset row P12 (stage has P14/P06/P13); two-person team led by Samir Haddad; we carry, unwrap, place and level, take packaging back.
7. **Prices** (`page-prices`): the 7-row table from section 1 inside a white card on grey, **full container width at ≥ 782 px**, columns Item / Note / Price, price column `white-space: nowrap; text-align: right`, min-width 9rem; no reveal. Line under: "All prices include VAT. Made-to-order pieces: 30% deposit, balance on delivery."
8. **Visit** (`page-visit`, booking page): address, hours, measuring slots, how to find us (by train 6 min walk from Aldmoor station, parking for 4 cars at the yard); white card with `shippress_form_slot` kind contact (section 11) + mailto fallback "Book a visit by email".
9. **Contact** (`page-contact`): address, phone, email, hours; form slot (section 11).
10. **Newsletter** (`page-newsletter`): standalone subscribe page, form slot kind newsletter (section 11), what the letter contains (one per season: new woods, workshop notes, showroom changes), "no other use of your address".
11. **Journal** (posts page `/journal/`, `home.html`, `archive.html`, `category.html`, `tag.html` with "TAG" label, `single.html`): post cards as T2 white photo-top cards in pairs on grey; single: stage + text column 720 px on white, category in brackets above the title.
12. **404 / search**: small stage (40svh, P13 / P09 / P18) + bracket label + stamp "Back / home".
WooCommerce single product / cart / checkout / account: 40svh stage, main column white, summary column = white card on grey, buttons teal radius 3 px.

---

## 8. Images (18, Grok, one at a time; read each one)

STYLE (exact string for every image):
`documentary interior photograph, 35mm lens, quiet low-key natural daylight from a single window, soft deep shadows, desaturated warm palette of oak, walnut, charcoal, oatmeal wool and pale linen, contemporary international homes and a small furniture workshop, diverse adults, candid unposed working moment, visible wood grain and fabric texture, no text, no logos, no brand marks, no readable numbers on tapes or papers, no Japanese elements`

No cut-outs (0). Each ≤ 300 KB, ≤ 2000 px, webp; readme.txt line per image (AI-generated, CC0).

| ID | Subject / composition | Ratio | Used on (once per page) | Home |
|---|---|---|---|---|
| P01 | salesperson (woman, dark work apron) kneeling, tape measure at the arm of a grey wool sofa, side view, window light | 4:3 | Home stage A TL; Measure stage | ✓ |
| P02 | customer's hand holding an oatmeal wool swatch up to a window, sofa edge blurred | 4:3 | Home stage A BL; About row; Made-to-order row; Newsletter stage | ✓ |
| P03 | finished living room, the grey sofa by a tall window, rug, low table, nobody | 3:4 tall | Home stage A R; Measure stage; Visit stage | ✓ |
| P04 | two hands running a tape along the edge of an oak dining table | 4:3 | Home stage B TL; Measure row; Prices stage | ✓ |
| P05 | close-up of an oak chair leg on a wide floorboard, raking light | 4:3 | Home stage B BL; Made-to-order stage; Rooms row | ✓ |
| P06 | two delivery people carrying a wrapped sideboard through a front door | 3:4 tall | Home stage B R; Delivery stage | ✓ |
| P07 | couple reading on a made-to-order sofa in a living room | 1.67:1 | Home card; Made-to-order stage; Rooms row; product Weir Sofa | ✓ |
| P08 | family laying a long oak dining table, mid-afternoon | 1.67:1 | Home card; Made-to-order row; Rooms row; Prices stage; product Kiln Table | ✓ |
| P09 | overhead grid of twelve wood samples (oak, walnut, ash, cherry, smoked oak) | 1.67:1 | Home card; Collection stage; Newsletter stage; Made-to-order card | ✓ |
| P10 | open swatch book of wools and linens on a table, hand turning a page | 1.67:1 | Home card; Collection stage; About stage; Contact stage; Made-to-order card | ✓ |
| P11 | room plan on paper with a scale ruler, tape and pencil, hand at the edge | 4:3 | Home row A; Measure row; Prices stage; Contact stage; Journal stage; post 1 | ✓ |
| P12 | upholsterer stretching fabric over a beech sofa frame in the workshop | 4:3 | Home row B; About stage; Made-to-order stage; Delivery row; Journal stage; post 2 | ✓ |
| P13 | the showroom: long room of sofas, tables and lamps under skylights, wide | 21:9 | Home parallax; Collection stage; Delivery stage; Visit stage; About row; Newsletter stage | ✓ |
| P14 | two people carrying a sideboard up a narrow stair, one guiding | 4:3 | Home row C; Delivery stage; Made-to-order row; Journal stage; post 3 | ✓ |
| P15 | loft bedroom under a sloping roof, ash bed, drawers under the eaves | 4:3 | Home rooms R1; Rooms stage; Measure row; product Ash Bed | ✓ |
| P16 | small study: desk and wall shelving fitted beside a radiator | 4:3 | Home rooms R2; Rooms stage; About row; product Reading Desk | ✓ |
| P17 | kitchen corner: oak table and a bench against the wall, set for six | 4:3 | Home rooms R3; Rooms stage; product Hall Bench | ✓ |
| P18 | the shop front on a quiet street, large window, warm interior light at dusk, no lettering on the sign | 4:3 | Home visit; About stage; Visit stage; Contact stage | ✓ |

Product Loft Dining Chair uses P05. Per-page uniqueness: implementer checks each page's list above (stage panes + rows + cards); if a conflict appears, swap within the row column, never repeat on one page.

---

## 9. Responsive

- **390 px first screen**: the stage becomes a vertical stack in normal flow: panes as a 2-column grid (P01 | P02 at 1:1 each, P03 below full width 4:3), height auto; the H1 sits **above** the panes on ink `#111010` (padding 88 px 20 px 32 px), lines left-aligned with no side alternation (`margin-left:0; text-align:left` on all `.tf-step`; optional 1.2em indent on even lines in flow), size `clamp(2.6rem, 11vw, 3.25rem)`, lh 1.05. Stamp in flow under the H1 (left 20 px). Info bar becomes a normal block under the panes (hours line then a full-width teal button). **No vertical text, no absolutely positioned labels over text, no overlap.**
- Header 64 px, logo + hamburger only; the menu overlay is the same single menu.
- T2: card pairs stack (1 column), tiles 2 columns × 5 rows (1 px gaps), icons 24 px.
- Offset rows (block 6 etc.): photo full width (no bleed), card below with 0 overlap and 20 px side margin; stamp moves under the card text.
- Parallax kept on mobile (`--sp-par: 6%`), hero right pane parallax off below 782 (pane is short).
- Marquee keeps running on mobile (reduced motion: static, wraps to two lines, horizontal overflow clipped by `overflow:clip` on the strip, no page-level horizontal scroll).
- Rooms cells stack 1 column; news rows: date above title.
- **Tables**: Prices table at ≥ 782 px fills the container width (`width:100%`, `table-layout:auto`), price column `white-space:nowrap; text-align:right` and never clipped (check at 800 and 1280). Below 782 every table becomes stacked rows (each row a block: item bold, note, price right-aligned on its own line; `thead` visually hidden). No horizontal scroll anywhere at 390 and 1280.

---

## 10. Scroll effects (sp-scroll; copy `pipeline/assets/sp-scroll/` unchanged)

Three effects (≤ 3 per page), none in the hero:
| Effect | Where | Source and its timing | Our values |
|---|---|---|---|
| `sp-parallax` (required) | **Home block 4** showroom band, background P13, foreground white card (not on the layer). Also the hero right pane (P03 / P06), `--sp-par: 6%`, ≥ 782 only. Inner: the full-bleed P13 band on Collection and Visit. | shiodakagu continuous photo motion + stage fade (Swiper linear rail, TweenMax fade); the reference has no true parallax, so this is the photo-in-motion idea translated to depth | `--sp-par: 10%` desktop, `6%` mobile; layer scale default 1.18; CSS scroll-driven with the IO fallback built into sp-scroll |
| `sp-reveal sp-reveal--up` + `sp-stagger` | T2 cards and tile grid (Home 3, Collection, Made to order, Measure, Delivery, Journal cards), offset-row cards (Home 6, inner rows), Rooms cells (Home 8), people rows | shiodakagu stamp + lead rise: y 20 px → 0, 1 s, Power2.easeOut, delay 1.5 s | `--sp-dist: 20px`, `--sp-dur: .9s`, easing `cubic-bezier(.215,.61,.355,1)` (Power2.out); stagger default 0.12 s steps |
| `sp-marquee` | Home block 5 material cells; Made-to-order page (same strip) | shiodakagu Swiper autoplay delay 0, speed 6000, loop, 30 px gap, linear | 30 s linear infinite, gap 30 px (cells carry the gap), duplicate group `aria-hidden` |
Not on: hero, forms, Prices table, legal text, the marquee children. Hero load motions (H1 scale 1.3 → 1 over 2.5 s, panes fade at 1.7 s, stamp rise 20 px at 1.5 s, 12 s set cross-fade) are plain CSS keyframes on `.tf-stage`, disabled by `html.sp-no-motion`, `prefers-reduced-motion: reduce` and inside `.editor-styles-wrapper` (final state: set A, scale 1, opacity 1). Verify with `check-parallax.mjs` (≥ 6 px shift desktop and mobile, 0 under reduced motion; ≥ 3 reveals hidden before entry).

---

## 11. Forms (contract v1; `steps/form-contract-v1` exists)

Copy `pipeline/assets/forms/shippress-forms.php` → `inc/shippress-forms.php`, its CSS + editor JS → `assets/` unchanged; require from functions.php. Dynamic block `shippress/form` via `shippress_form_slot` only (no import-time plugin detection, no fake form, no mail backend).
- **Contact** `/contact/`: slot `kind => contact` in the white card on grey, right column (6/12) beside the address column; fallback = the existing mailto button "Write to the shop" (`href="mailto:hello@tanafurniture.example"`, class `wp-element-button`), never a link to /contact/.
- **Visit** `/visit/` (booking page): slot `kind => contact`, fallback mailto button "Book a visit by email" (`mailto:hello@tanafurniture.example?subject=` + translated subject "Showroom or measuring visit"). Copy above the slot asks for: preferred day, slot (09:00 / 11:30 / 14:30), postcode, which room.
- **Newsletter** `/newsletter/` (standalone page, not an alias of the posts page) + **Home block 10** + **footer**: slot `kind => newsletter`, `email => hello@tanafurniture.example`, label `forms_email`, submit `forms_subscribe`, notice `forms_mail_notice`, subject `forms_mail_subject`. Plugin order: MailPoet (explicit id via `shippress_form_id`) → MC4WP first published form; CF7 / WPForms only via an explicit dedicated newsletter id. No plugin: visible required `type=email` field + submit, native mailto POST, notice "Opens your email app. Send the request to subscribe; you are not subscribed yet."
- Contact form fields when a plugin form exists (CF7 / WPForms styled, not built by us): name, email, phone (optional), message textarea, select (topic: showroom visit / measuring visit / an order / delivery), checkbox consent, submit.
- Styling: `--sp-form-accent: var(--wp--preset--color--accent)` (`#006D80`), `--sp-form-on-accent: #FFFFFF`, `--sp-form-radius: 3px` (`tok(d)` buttons), `--sp-form-focus: #006D80` (2 px outline, 2 px offset), `--sp-form-surface: #FFFFFF`, `--sp-form-text: #111010`; inputs 1 px `#CCCCCC` border, height 48 px, label Onest 0.875rem 400 above the field; error text + 1 px border `#A33A2B` with message under the field; success `#2E6B4F` text with a 3 px left rule. **Dark ground (footer bark `#5A4E46`)**: `--sp-form-surface: #FAF9F7`, `--sp-form-text: #111010` inside the fields, labels and messages white, `--sp-form-focus: #FFFFFF`, accent button stays teal with white text (contrast 5.9:1).
- i18n: semantic keys in `inc/i18n/en.php` (`forms_email`, `forms_subscribe`, `forms_mail_notice`, `forms_mail_subject`, plus `contact_email_button`, `visit_email_button`, `visit_mail_subject`), translated in all five dictionaries, extract with `L10N_SEMANTIC=1`; check rendered labels, fallback button, subject and notice in every locale.
- Never `sp-reveal` on any form or its card; no form, table or search on the first screen. Pass `form-runtime-check.php` (5 locales) and `repo-gates.sh forms`.

---

## 12. Similarity to the reference (target 80%)

| Dimension | Reference (shiodakagu, `tok`) | Tana Furniture |
|---|---|---|
| Ground / band / text / accent | `#FFFFFF` ~35% / `#DBDBDB` ~45% / `#000000` / `#006D80` < 3% `tok(a)` | `#FFFFFF` ~35% / `#DBDBDB` ~40–45% / `#111010` / `#006D80` < 3% (+ bark footer) |
| First-screen saturated share | 11.6% `tok(a)` | ≤ 12% target, gate 15% |
| Hero composition | black → 3 panes (2 stacked 4:3 left, 1 tall right), 0 gap, stepped white headline across the seam `tok(e)` | identical structure, P01–P03, stepped 4-line H1 |
| Hero headline size | ≈ 100 px serif 700 `tok(b)` | 6.25rem (100 px) Albert Sans 300 (plan: sans) |
| Docked info bar | white 68 px, x 100–1340, teal button `tok(c)` | white 68 px, container 1240, teal 250 px button |
| Stamp | pentagon house 100×80, 1 px, hover 1.1 / .3 s `tok(f)` | pentagon 104×84, 1 px, hover 1.1 / .3 s, teal stroke |
| Section label | "[ … ]" 17.6 px centred `tok(b)` | "[ … ]" 1.1rem centred |
| H2 lead | 50 px / lh 1.8 `tok(b)` | 3.125rem / lh 1.6, weight 300 |
| Body | 16 px / 300 / lh 2.0 / ls 0.1em `tok(b)` | 1rem / 300 / lh 2.0 (CJK 1.85) / ls 0.03em (Latin) |
| Section padding / container | 100 px / 1240 `tok(c)` | 100 px / 1240 |
| Card pair | 2 × 595 + 50 gutter, photo 1.67:1, radius 0 `tok(c,e)` | same |
| Tile index | 5 × 247, 60 px rows, 1 px gap, 30 px teal icons `tok(c,f)` | same, our own icons |
| Offset photo + card | photo 792×575 bleeding off the edge, white card overlaps 47 px `tok(e)` | same values, alternating sides |
| Radius / shadow | 0 photos and cards, 3 px buttons, no shadow `tok(d)` | same |
| Header | 110 px, logo left, centred nav, menu icon right `tok(c)` | 96 px, same arrangement |
| Motion | H1 scale 1.3 → 1 2.5 s power2.out; fade 1 s; rise 20 px at 1.5 s; 6 s set swap; linear rail speed 6000 / 30 px gap `tok(g)` | same values in CSS; `sp-reveal--up` 20 px; marquee 30 s / 30 px; plus required parallax 10% |
| Imagery | low-saturation documentary interiors, people at home, chair detail, wood mosaic, plan with scale ruler `tok(e)` | same image types, our own photos P01–P18 |
Not copied: photographs, words, logo, icons, the vertical online-shop tab, the left social rail, Japanese serif type.

---

## 13. Home acceptance checklist (stage-1 review and later stages)

1. First screen at 1440 (`?sp-static`): ink ground with **three panes (2 stacked left, 1 tall right, 0 gap)** showing P01, P02, P03; stepped H1 crossing the seam; pentagon stamp on the seam; white docked bar with teal "Book a visit". All 6 KV items visible.
2. Largest type ≥ 4.25rem (hero 6.25rem); fonts Albert Sans / Onest in editor and front end (`check-editor-fonts.mjs` en + zh-TW).
3. Saturated share ≤ 15% (`check-first-screen.py`).
4. Block order exactly 6.2 (10 blocks); T2 band grey `#DBDBDB` with white cards and 10 teal-icon tiles; offset rows bleed off alternate edges with 47 px card overlap.
5. ≥ 8 distinct images on home (18 listed, none repeated); no cut-outs; no text/logos in photos.
6. ≥ 250 English words, ≥ 3 narrative paragraphs ≥ 20 words.
7. `sp-parallax` on block 4 shifts ≥ 6 px on desktop and mobile; ≥ 3 reveals; nothing hidden after scrolling to the bottom; hero has 0 reveals; marquee runs.
8. 390 px: no vertical type, no overlapping labels, no horizontal overflow; panes and bar in flow.
9. Newsletter slot in block 10 and footer shows email + submit without plugins, notice visible; no form in the first screen; no reveal on forms.
10. Exactly one top menu (centred); header transparent over the stage.
11. Numbers match section 1 everywhere (hours, £45, 8–10 weeks, 40 km, people names).
12. `auto-gates.mjs … 1 1` passes.
