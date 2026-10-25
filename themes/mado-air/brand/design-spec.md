# Mado Air: design spec (stage 1, binding for implementation)

Slug `mado-air`, design-plan row b11-7. Type **landing** (rules.landing_track): the home page is one long conversion page for a fictional compact air purifier, with an anchor menu and **one repeated CTA ("Pre-order")**. Five languages: en, zh-TW, ja, fr, de. WooCommerce is not required (pre-order button links to the `/pre-order/` page; the theme declares WooCommerce support but works without it).

Reference: **BALMUDA The Pure product page, https://www.balmuda.com/jp/pure/** (measurements in `reference-tokens.md`, screenshots in `brand/ref/`). We borrow structure, technique, colour relationships, the key-visual concept and motion timing. We never copy its photos, diagrams, copy, product shape or logo. The Mado Air unit is our own product design (described below), not a Pure look-alike.

**Imagery: photo** (IMAGERY = photo in stage-a.md). High-key natural-light interior photography generated with one STYLE string. The only non-photo is one hand-built line-art SVG cutaway diagram (Technology band), drawn in code, not generated.

**font_direction: sans.** Latin headings and body sans; CJK headings and body Noto Sans TC / Noto Sans JP (gothic). No serif or Mincho anywhere.

---

## 0. Fixed brand facts (every page, all five languages; numbers never change)

- **Mado Air**, made by **Mado Home Studio**, founded **2021**, design studio and test room in **Rotterdam, the Netherlands**. Support: **Mon–Fri 9:00–17:00 CET**, support@ example address only (`hello@mado-air.example`).
- The product (use this exact description in every image prompt as `PRODUCT`): *a compact square air purifier 22 × 22 × 38 cm with softly rounded vertical edges, matte chalk-white body, a band of light warm-grey woven fabric around the lower two-thirds, a flat round perforated aluminium grille on top with a thin brushed ring dial, a short tan leather carry loop on one side, no screen, no text, no logo.* Second colour: **Graphite** (same shape, charcoal body, dark grey fabric).
- Specs (spec page, home Specs block, Technology band and all languages identical):
  - Clean air delivery rate **160 m³/h** · recommended room up to **22 m²** · sound **19 dB** (Night) to **46 dB** (Boost) · power **3–28 W** · weight **2.6 kg** · size **22 × 22 × 38 cm** · filter **H13-grade pleated medium + activated carbon layer**, change every **6 months** · cable 1.8 m, USB-C service port only · 4 modes: Night, Calm, Auto, Boost · air sensor: PM2.5 light ring (soft white → pale cyan) · warranty **3 years**.
  - No claims of removing viruses, curing allergies, or any percentage. Copy says "designed to", "in our test room", "measured at 1 m".
- Pre-order and price list (exactly **6** items, USD in every language, no converted prices):
  | Item | Price |
  |---|---|
  | Mado Air, Chalk — pre-order (regular $329) | $289 |
  | Mado Air, Graphite — pre-order (regular $329) | $289 |
  | Two-room set (any two colours) | $549 |
  | Replacement filter (6 months) | $39 |
  | Filter plan, one filter every 6 months, cancel anytime | $34 / 6 months |
  | Oak wall shelf for windowsill-less rooms | $29 |
  Pre-orders ship **March 2027**; **$0 charged until shipping**, cancel anytime before; **60-day home trial**, free returns; free shipping in EU, UK, US, Canada, Japan, Taiwan.
- Process (pre-order flow, 4 steps, written as one sentence line / short list, not a step grid): **Reserve (no charge) → Confirm colour by e-mail in February 2027 → Ships March 2027 → 60-day home trial.**
- Named people (**7**, studio page; some quoted on other pages):
  1. **Ines Albrecht** — co-founder, industrial design
  2. **Tomás Reyes** — co-founder, airflow engineering
  3. **Priya Raman** — acoustics (the 19 dB Night mode)
  4. **Jonah Whitfield** — product lead, pre-order and launch
  5. **Léa Moreau** — materials and fabric
  6. **Kwame Mensah** — customer support lead
  7. **Hana Sato-Lindgren** — test-room coordinator (runs the home-trial programme)
- Early-tester stories (exactly **3**, home Reviews block and Reviews page; Reviews page adds a 4th):
  1. **Maya Okonkwo**, studio apartment, Lisbon — sleeps with it on Night mode beside the bed.
  2. **The Fischer family**, terraced house, Leipzig — moves one unit between the nursery and the living room with the leather loop.
  3. **Arjun Mehta**, home office, Toronto — runs it on Calm during video calls.
  4. (Reviews page only) **Camille Duret**, top-floor flat, Lyon — dries laundry indoors in winter.
  Stories describe how the room *feels* and how the unit lives in the room; no medical claims, no star ratings, no "verified" badges.

---

## 1. Signature techniques (three, all obvious at a glance)

### T1. Two-tier header: dark global top bar + white sticky product sub-bar with pills (ref/balmuda-first.png)
- **Reference:** a #1F1F1F top bar 100 px tall with the wordmark left and 6 global links; under it a white 90 px product bar: product name (24 px) left, a row of 6 small anchor links (13 px) under the name, and two pills right — outline "Stores" and filled green "Buy". The white bar is the product's own navigation; the dark bar is the brand's.
- **Mado Air geometry (desktop 1440):**
  - Top bar: `#1F1F1F`, **64 px** tall (ref 100; reduced for a single-product site, ratio dark:white kept ≈ 1:1.1), content width 1200. Left: text wordmark "Mado Home Studio" Inter Tight 500 1rem white, letter-spacing .02em. Right: global links (Story, Support, Early access) + language switcher, Manrope .8125rem `#FFFFFF` at 80% opacity, gap 32 px. This is the single site navigation (only one top menu, per rules) — rendered as two rows of one header template part.
  - Sub-bar: white, **72 px**, `border-bottom: 1px solid #EDEDED`, `position: sticky; top: 0; z-index: 50` (the dark bar scrolls away, the sub-bar stays). Left column: "Mado Air" Inter Tight 500 **1.5rem** (24 px, = ref) and, directly under it (gap 2 px), anchors **Why · How it works · Design · Specs · Reviews · Pre-order · FAQ** in Manrope .8125rem `#333`, gap 22 px; the current section anchor turns `#1F1F1F` with a 1 px underline 4 px below (ref uses green; we use ink). Right: outline pill **"Notify me"** (→ `/early-access/`) and filled pill **"Pre-order"** (→ `#preorder` on home, `/pre-order/` elsewhere). Pills 32 px tall, radius 16 px (tok d), padding 0 18 px, Manrope .8125rem 500; outline = 1 px `#1F1F1F`, text `#1F1F1F`; filled = bg `#4DC0DB`, text `#1F1F1F` (cyan with white text fails contrast; ink text is 8.9:1). Hover: `transition: all .2s` (tok g); outline fills `#1F1F1F` with white text, filled darkens to `#3FAFC9`.
  - Mobile (<782): top bar 52 px, links collapse to the core navigation overlay (hamburger white). Sub-bar 56 px: "Mado Air" 1.125rem left + filled "Pre-order" pill right; the anchor row becomes a single horizontally scrollable line under it (height 36 px, `overflow-x:auto`, no wrap, no reveal on children), so the sub-bar total is 92 px. No vertical labels, nothing absolutely positioned over text.
- **Must not be diluted:** the top bar must be visibly dark (`#1F1F1F`, not grey), the sub-bar must be white with both pills visible at 1280 and the anchors listed, and it must stay sticky. "Pre-order" is the only filled button colour on the whole site (the one repeated CTA).
- **Inner pages:** the same two tiers on every page; on inner pages the sub-bar anchors switch to that page's own sections (e.g. Specs page: Dimensions · Performance · Filter · In the box) via a per-template header part `header-inner` that keeps "Mado Air" + both pills.

### T2. Technology band: light-grey band, uppercase Latin label + rule, tall line-art cutaway with cyan airflow cropped by the band edges (ref/balmuda-tech.png)
- **Reference:** a #E9E9E9 band ~710 px tall. Left column (490 px wide, from x=230): huge uppercase **TECHNOLOGY** (38.4 px, sans, black), then a 2-line subtitle (38 px), a 1 px #333 rule ~490 px long, body text 18 px / 1.8, footnote 12.8 px italic, cyan pill button. Right (~x=830): a very tall technical line drawing of the unit's interior with semi-transparent cyan airflow arrows rising; the drawing runs off the band's top and bottom edges, so the band crops it. It is the only non-photo on the page and the only place cyan is used generously.
- **Mado Air geometry:** `alignfull` section, bg `#E9E9E9`, `padding: 96px 0` (tok c), `min-height: 710px`, `overflow: clip`, inner container 980 px (tok c). Columns 50/50 with the text column max 490 px.
  - Text column: eyebrow-size Latin label **HOW IT WORKS** in Inter Tight 500 **2.4rem**, uppercase, line-height 1.2, `#000` (tok b, Section title); subtitle H2 "160 m³ of air, every hour, at a whisper" Inter Tight 400 **2.375rem**, line-height 1.2; then a **1 px `#333` rule, 490 px** (tok d), margin 28 px 0; body Manrope 1.125rem / 1.8 `#333` (2 paragraphs); then a row of **3 counters** (`sp-count`): `160 m³/h` · `19 dB` · `22 m²`, Inter Tight 400 2rem, label under each Manrope .8rem `#707070`; footnote Manrope .8rem italic `#707070` ("Measured in our Rotterdam test room at 1 m, Night mode."); outline-on-cyan pill "See the full specs" 180 × 44, radius 22 px (tok d), bg `#4DC0DB`, text `#1F1F1F` → `/how-it-works/`.
  - Diagram column: inline SVG `assets/img/mado-cutaway.svg`, our own drawing of the Mado Air (square body, fabric band hatched, pleated filter as zig-zag, a low centrifugal fan as a circle with curved blades, top grille as a dotted line) in 1.25 px `#333` lines on transparent; airflow = 5 upward arrows and a column of vertical stripes filled `#4DC0DB` at 35–55% opacity. Drawing box **460 × 1010 px** (ratio ~1:2.2, tok e), positioned so it starts **−60 px above** the band top and ends **−120 px below** the band bottom; both ends are cropped by the band's `overflow: clip`. Cyan stripes rise out of the top edge as in the reference.
  - Mobile: text first, diagram below at 100% width max 340 px, height capped by the band (bottom crop kept: diagram box 340 × 748, band crops last 80 px).
- **Must not be diluted:** the band must be `#E9E9E9` (not white, not beige), the label must be big uppercase Latin (≥2.4rem, also in zh-TW/ja: label stays "HOW IT WORKS", subtitle translated), the 1 px rule must be present, the cutaway must be tall and visibly cropped top and bottom, and the cyan airflow must be clearly visible (≥35% opacity), not a pale wash.
- **Inner pages:** the "label + subtitle + 1 px rule" heading is the page-head pattern of every inner page (How it works, Design, Specs, Reviews, Care, Pre-order, Support, Studio). The grey band reappears on How it works (full cutaway, larger, with 4 numbered callouts), Specs (dimensions drawing: front and side line elevations in the same SVG style), and Care (filter-change line drawing, 3 frames side by side, same strokes).

### T3. Dark macro "Design" band: full-bleed close-up, text left in white, white pill (ref/balmuda-design.png)
- **Reference:** right after the light Technology band, a full-bleed 1440 × 710 near-black macro photograph of the product's top grille, dark overlay ≈ .4, label **DESIGN** + subtitle + body in white on the left 490 column, white outline pill. The light → dark contrast jump is the page's strongest rhythm moment.
- **Mado Air geometry:** `wp:cover` alignfull, `min-height: 710px` (tok c), image `design-macro` (image 6) with `dimRatio: 40` and overlay `#1F1F1F` (tok e: overlay .4), focal point 65% 50% so the grille sits right. Content in 980 container, left column 490 px: label **DESIGN** Inter Tight 500 2.4rem uppercase white; subtitle H2 "A window-sill object, not an appliance" 2.375rem 400 white; 1 px rule `rgba(255,255,255,.7)` 490 px; body 1.125rem / 1.8 white 88%; white outline pill 180 × 44 radius 22 "Inside the design" → `/design/` (1 px #FFF, hover fills white with ink text). **`sp-parallax` `--sp-par: 10%`** on the cover (background moves, text static).
- It must follow directly after the Technology band (grey → near-black), never be split by a white section.
- **Must not be diluted:** the photo must be genuinely dark (mean luminance <30%), full bleed edge to edge, ≥ 640 px tall at 1280, text left (not centred).
- **Inner pages:** a shorter (480 px) dark macro band with the same layout closes the Design page (fabric macro), the Studio page (workbench macro) and the Pre-order page (packaging macro), each with a white outline pill.

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
- **Drawn:** a bright, almost empty living room photographed straight-on: a large pale warm-grey wall fills the upper two-thirds, light-wood floor, a cream armchair with a throw cropped at the left edge, slippers on a rug, a tall potted tree and a smaller plant cropped at the right edge. The slim white purifier stands alone in the lower centre, whole and uncropped, about 1/9 of the frame width. Product name + one-line tagline ("a room that feels good") in white, lower-left. A round 110 px play button with a 4 px white border at the lower right, slim round arrows at the sides.
- **Story:** the machine disappears into the room. Air quality isn't shown with numbers or particles; you get it from the calm, the light and the empty wall. The product reads as furniture.
- **Signature motion:** a slow carousel crossfade between 5 room scenes; the text overlay and play button fade with `opacity 1s ease-out` (tok g). Bands further down fade in (`opacity 1s`) as they enter at 80% of the viewport.

### (2) Our translation (same industry type, same composition and motion, same image type)
- Mado Air is a compact purifier, so where the reference shows a floor unit in a living room, ours stands **on a deep white windowsill** ("mado" = window): high-key morning light comes in through sheer linen curtains that lift slightly, a few dust motes catch the sun beam, a pothos trails at the right edge, a chair arm and a folded knit throw are soft and out of focus at the left edge. The big calm surface is the **pale wall and window reveal on the left half**, kept empty for type, exactly like the reference wall. The unit is whole, uncropped, about 1/7 of the frame width, centre-right in the lower half.
- Story on the long page: **the stale room (closed windows, drying laundry, long winter afternoons) → a room that feels like an open window**. The tagline: "Mado Air. The open-window feeling, with the window closed."
- Motion: the same slow 3-photo crossfade (morning sill → living-room shelf → bedroom sill), done in CSS only; the lockup fades in once over 1 s ease-out; background photos sit in a `sp-parallax` layer so the room drifts slower than the page. No reveal classes in the hero.

### (3) KV checklist (all six implemented in the first screen and visible at 1280 × 800 and the relevant ones at 390)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Full-bleed bright room photo, large calm empty wall | Morning-light windowsill room, empty pale wall + window reveal on the left half for type | Full width under the two-tier header, height `calc(100svh - 136px)`, min 560 px, max 810 px (tok c: 1440×810) | Slow CSS crossfade between 3 photos: each visible 6 s, crossfade **1 s ease-out**, total 21 s loop; no-JS / `sp-static` / reduced-motion show photo 1 only | **01 hero-sill-morning** (first, KV), 02 hero-living-shelf, 03 hero-bedroom-sill |
| 2 | Product small, whole, centred low in the room | Mado Air unit whole, uncropped, ≈1/7 frame width, centre-right lower half, sitting on the sill / shelf | Unit centre at ≈ 62% x, 70% y in all 3 photos (prompt says so; `object-position: 60% 50%` desktop, `66% 50%` mobile so the unit stays in frame at 390) | Background layer `sp-parallax`, `--sp-par: 8%` desktop / 5% mobile | 01, 02, 03 |
| 3 | Framing: armchair + throw cropped left, tall plant cropped right | Chair arm with folded knit throw blurred at left edge, trailing pothos / small olive tree at right edge | Left 0–12% and right 85–100% of frame | none (moves with the photo layer) | 01, 02, 03 |
| 4 | White product name + one-line tagline lower-left | H1 **"Mado Air"** Inter Tight 400 **4.5rem** white + tagline Manrope 1.5rem white 92%, on a bottom-left gradient scrim (`linear-gradient(20deg, rgba(31,31,31,.38) 0%, rgba(31,31,31,0) 55%)`) | Lower-left: left 8% of viewport (min 24 px), bottom 12% | One-time fade-in `opacity 0→1, 1s ease-out, delay .2s` (CSS keyframe under `html.sp-js:not(.sp-no-motion)` only; never a `sp-reveal` class) | on 01–03 |
| 5 | Two-tier header: dark brand bar + white product sub-bar with anchors and outline + filled pills | T1 header: `#1F1F1F` 64 px bar + white 72 px sticky sub-bar, 7 anchors, "Notify me" outline + "Pre-order" filled cyan | Top 136 px | Pills hover `.2s`; sub-bar sticky | – |
| 6 | Round play button with 4 px white border, lower right | Round **96 px** button, 4 px white border, white ▶ triangle 24 px, transparent fill (`rgba(255,255,255,.08)` + blur 4 px). Label under it (Manrope .75rem white, uppercase): "40 s · how it sounds". Links to `#night` (Quiet-night block); no video file required | Bottom 7%, right 8% (tok f) | Fades in with the lockup; hover `scale(1.06)` `.2s` | – |
- Plus the info bar (row `first_screen: full-bleed-photo-info-bar`): directly under the hero photo, a white bar 64 px tall, 1 px `#EDEDED` bottom border, container 980: three facts left in Manrope .875rem `#333` separated by 1 px `#BDBDBD` vertical hairlines — "Pre-order from $289" · "Ships March 2027" · "$0 until shipping · 60-day home trial" — and the dot pager (3 dots, 8 px, `#BDBDBD`, active `#333`, tok f) on the right showing which hero photo is current (decorative in CSS; static first-dot active in no-JS). Mobile: the three facts stack as three lines (left-aligned, 0.8125rem, line-height 1.6), dots hidden. The info bar is not a table and contains no form.
- At 390 px: items 1, 2, 4, 5 (compact sub-bar) and 6 (button 64 px, bottom 5% right 6%, label hidden) must be visible; the H1 drops to 2.75rem; the lockup sits bottom-left with 24 px margin and never overlaps the play button (lockup max-width 68%).

---

## 3. Home page (en): block order

Container 980 px (tok c) for text blocks; full-bleed bands 100%. Section padding 96 px top/bottom (tok c), 64 px on mobile. Every section heading uses the T2 head: uppercase Latin label (2.4rem) + subtitle H2 + 1 px rule, left-aligned (never centred). Total ≥ 650 English words.

| # | Block (anchor) | Purpose | Layout | Photo(s) | Copy |
|---|---|---|---|---|---|
| 0 | Header (T1) | brand + anchor menu + CTA | two-tier | – | – |
| 1 | Hero (KV, §2) | the calm-room key visual | full-bleed crossfade, lockup lower-left, play button lower-right | 01, 02, 03 | H1 + tagline |
| 2 | Info bar | launch facts | white 64 px bar, 3 facts + dots | – | 3 short facts |
| 3 | **Why** (`#why`) "THE STALE ROOM" | the problem | white; 880 px text column (tok c) left: label, H2 "Some rooms forget to breathe.", rule, lead Manrope 1.3rem / 1.8 (tok b Lead) + 2 body paragraphs; below it a 980 × 551 (16:9) photo, radius 0, `sp-reveal` fade 1s | **04 stale-room** | 3 paragraphs, ~170 words |
| 4 | **How it works** (`#how`) — **T2** | technology | grey band, text left, cutaway SVG right, 3 counters | SVG (not a photo) | ~110 words + 3 numbers |
| 5 | **Design** (`#design`) — **T3** | the object | full-bleed dark cover 710 px, parallax | **06 design-macro** | ~80 words |
| 6 | **Quiet night** (`#night`) | 19 dB Night mode | full-bleed photo band 640 px (ref usage slider): photo with soft blurred foreground, text left 490 px in ink on the photo's light left third (no overlay; photo prompt leaves left third pale), single static image (no slider) | **05 night-bedroom** | label NIGHT MODE, H2 "Quieter than the room itself.", ~90 words |
| 7 | **Gallery** (`#gallery`) "IN YOUR ROOMS" | lifestyle proof | 3 × 2 square tiles 313 × 313 (1:1), gap 10 px, centred in 980 (tok c), radius 0, captions none; `sp-stagger` + `sp-reveal` fade on tiles. Mobile: 2 × 3, gap 6 px | **07–12** (6 different photos) | label + one-line H2 |
| 8 | **Specs** (`#specs`) | numbers | white; 2 columns: left 40% packshot portrait (radius 0), right 60% spec list as `<dl>` rows (term left `#707070` .875rem, value right `#333` 1rem nowrap, 1 px `#EDEDED` row rules, 10 rows from §0); "Full specifications →" text link to `/specs/`. Mobile: image on top, rows stack (term above value) | **13 packshot-pair** | 10 rows + 1 line |
| 9 | **Reviews** (`#reviews`) "EARLY TESTERS" | social proof | white; three 1/3 columns: 4:3 photo (radius 0) then quote Manrope 1.125rem / 1.8, name + room + city .8125rem `#707070`; `sp-reveal` fade. Mobile: stack | **14, 15, 16** | 3 × ~45 words |
| 10 | **Pre-order** (`#preorder`) | the conversion | white section with a `#F4F4F4` card (tok d: 1 px `#EDEDED`, radius 5 px): left the two colour names with small round swatches (16 px Chalk `#F2F1EE`, Graphite `#3A3B3D`), price "$289" Inter Tight 400 3rem + "regular $329" struck `#828282`, the 4-step flow line, filled **Pre-order** pill 44 px (→ `/pre-order/`) and outline "Notify me". Below the card: **full-width price list** (6 items, §0) and **3 icon assurances** in a row (line icons 32 px `#333`: truck "Free shipping", calendar "$0 until March 2027", return arrow "60-day home trial") in 1 px `#EDEDED` panels radius 5 px (tok d). No sp-reveal on price list. | – (icons are SVG) | ~70 words + list |
| 11 | **FAQ** (`#faq`) | objections | 880 px column, 7 `<details>` rows with 1 px `#333` top rule each, summary Inter Tight 400 1.25rem, + / − 1 px icon right | – | 7 Q&A, ~220 words |
| 12 | Closing CTA | repeat CTA | grey `#E9E9E9` band 360 px, left: H2 "Reserve yours. Pay when it ships.", right: filled **Pre-order** + outline **Notify me** pills 44 px | – | 1 line |
| 13 | Footer | links | `#1F1F1F`, white 70%, 3 columns: brand line + Rotterdam + hours / product links (all inner pages) / legal (Privacy, Terms) + language links | – | – |

Home photo positions: 01, 02, 03 (hero), 04, 05, 06, 07–12 (6), 13, 14, 15, 16 = **16 photos, 16 distinct images**, none repeated on the page (≥8 met with margin; at least 10 visible at `sp-static`, since 02 and 03 are layered behind 01).

### Comparison with recent home pages (must not look alike)
| # | Mado Air | Kiban Structural | Shizuka Hearing | Tsubaki Flowers | Umi Swim School |
|---|---|---|---|---|---|
| 1 | Two-tier header + crossfading full-bleed room photo, lockup lower-left, play button | hero tagline + info bar | scattered rounded-tile hero | full-bleed bokeh cover | blob-photo hero |
| 2 | white info bar with launch facts + dots | rounded dark parallax band | … | asymmetric about | concept card bleeding left |
| 3 | problem text column + one 16:9 photo | sticky-media process timeline | sticky stacked tone cards | 3-cell hairline grid | horizontal day strip |
| 4 | grey tech band with cropped tall line cutaway + counters | statement + counts | eyebrow + hairline headers | parallax photo band | pill-tab programmes |
| 5 | full-bleed dark macro band (parallax) | tilted service cards | wipe figure | week rows | coaches hairline list |
| 6 | photo band with text on pale third | 2×2 projects | – | people list | story cards |
| 7 | 3×2 square gallery | fees | – | price list | fees |
| 8+ | spec `<dl>` + packshot · 3 tester columns · pre-order card + price list + assurances · FAQ · grey CTA band | | | | |
- Why it differs: none of those uses a two-tier product header, a crossfading hero, a technical line-art cutaway, or a light→dark band pair; Mado Air has no scatter tiles, sticky stacked cards, blob masks, hairline 3-cell grids, tilted cards, timelines or people lists on the home page. Corners are 0 on all photos (Kiban/Umi/Shizuka are rounded). Its rhythm is white → grey → near-black → photo → white, a product-page rhythm, not a service-business one.

---

## 4. Inner pages (≥ 8 content pages + legal; all reachable from footer, sub-bar or home)

Every inner page: T1 two-tier header (page-specific anchors), T2 page head (Latin uppercase label 2.4rem + H1 subtitle `clamp(2.25rem, 3.6vw, 2.375rem)` 400 + 1 px rule, left, 980 container), at least one photo, the closing grey CTA band (block 12) above the footer. Same facts as §0.

| # | Page (slug) | Label | Key content | Signature carried | Images |
|---|---|---|---|---|---|
| 1 | How it works (`/how-it-works/`) | HOW IT WORKS | Full-size cutaway on grey band with 4 numbered callouts (intake through fabric band, H13 + carbon filter, low fan, top grille); airflow explained in 3 short sections; air-sensor light ring; four modes as a 4-row `<dl>` (mode, dB, W) | **T2** (grey band, big cropped cutaway), T1 | 08 gal-filter-slide, 05 night-bedroom |
| 2 | Design (`/design/`) | DESIGN | Why a windowsill object; fabric (Léa Moreau quote), aluminium grille, leather loop; two colours with swatches; ends with 480 px dark fabric-macro band | **T3** (two dark macro bands: top uses 06, bottom uses 17, never the same photo twice), T2 head | 06 design-macro, 12 gal-carry-loop, 17 studio-bench |
| 3 | Specs (`/specs/`) | SPECIFICATIONS | Dimension line drawings (front + side elevations, SVG on grey band); full spec list (10 rows + box contents: unit, 1 filter installed, cable, quick guide); `<dl>` stacks on mobile | **T2** (grey band, line drawing), T1 | 13 packshot-pair |
| 4 | Reviews (`/reviews/`) | EARLY TESTERS | 4 tester stories (§0), each: 4:3 photo left 5/12 + story right; a short note on the 60-day trial run by Hana Sato-Lindgren | T2 head, T1, closing CTA | 14, 15, 16, 11 gal-kitchen |
| 5 | Filters & care (`/care/`) | CARE | When to change (6 months, the light ring blinks pale cyan twice), 3-frame filter-change line drawing on grey band, cleaning the fabric band, filter plan $34 / 6 months, recycling programme | **T2** (grey band drawing), T1 | 08 gal-filter-slide, 10 gal-reading-nook |
| 6 | Pre-order (`/pre-order/`) | PRE-ORDER | Pre-order card (same as home block 10), full price list (6 items), 4-step flow as one numbered sentence list, shipping countries, cancel/return terms in plain words; ends with dark packaging-macro band; WooCommerce product if active, otherwise the pill links to `/early-access/` | **T3** (dark band), T1 pills, T2 head | 18 unboxing, 13 packshot-pair |
| 7 | Support & FAQ (`/support/`) | SUPPORT | 12 FAQ `<details>` (incl. the 7 from home), contact block (e-mail, hours Mon–Fri 9:00–17:00 CET, Kwame Mensah), warranty 3 years | T2 head, T1 | 09 gal-desk |
| 8 | Our studio (`/studio/`) | STUDIO | Founded 2021 in Rotterdam; why a window; the 7 people as a two-column hairline name list (name / role, no portrait grid); the test room; ends with dark workbench macro band | **T3** (dark band), T2 head | 17 studio-bench, 07 gal-top-dial |
| 9 | Early access (`/early-access/`) — newsletter page | EARLY ACCESS | waitlist / early-access signup (name, e-mail, country, colour preference) with 3 benefits (first shipping batch, colour confirmation in February 2027, launch-day note); form is the main content (not first screen of home) | T2 head, T1 | 03 hero-bedroom-sill |
| 10 | Thanks (`/thanks/`) | THANK YOU | confirmation, what happens next (the 4-step flow), back to home | T2 head | 01 hero-sill-morning |
| 11 | Privacy (`/privacy/`), 12 Terms (`/terms/`) | PRIVACY / TERMS | plain legal text, 720 px column, no sp-* | T1, T2 head | – |

Signature continuation: T1 on all 12 pages; T2 grey band on How it works, Specs, Care (+ heads everywhere); T3 dark band on Design, Pre-order, Studio → **≥ 4 inner pages** carry a T2/T3 band beyond the header.

---

## 5. Colour (tok a; reference colours used directly)

| Token (theme.json slug) | Hex | Share (page) | Source |
|---|---|---|---|
| `base` | `#FFFFFF` | ~50% | tok a Base |
| `soft` | `#E9E9E9` | ~12% (tech band, CTA band) | tok a Soft base |
| `card` | `#F4F4F4` | ~3% (pre-order card) | between #E9E9E9 and #FFF (+5% L of soft) |
| `line` | `#EDEDED` | rules, panels | tok a Greys |
| `mouse` | `#8E9194` | captions on dark, dot pager inactive alt, hairlines in footer | row hex shironezu |
| `muted` | `#707070` | captions, spec terms (4.9:1 on white) | tok a Greys |
| `ink` | `#333333` | body text | tok a Ink |
| `black` | `#000000` | T2 labels | tok a |
| `dark` | `#1F1F1F` | ~15% (top bar, footer, overlays) | tok a Dark |
| `cyan` | `#4DC0DB` | <1% (Pre-order pills, tech button, airflow) | tok a Accent 1 |
| `cyan-deep` | `#3FAFC9` | hover only | cyan −5% L |
- The reference's green CTA (#4BA53A) is **not** used: it is the reference brand's own buy colour; our filled CTA uses the reference's second accent (cyan) so the palette stays the reference's. No beige, no cream.
- First-screen saturated share (scripts/check-first-screen.py): target **≤ 12%** (ref 11%), hard cap 15%. Saturation comes only from the plant green and light wood in the photos and the cyan pill. Photos keep walls neutral warm grey (#D3D3CE region), not yellow.

## 6. Type (font_direction **sans**; tok b)

- Latin headings: **Inter Tight** (400, 500). Latin body / UI: **Manrope** (400, 500). Both via `theme.json` `fontFamilies` + `fontFace` (woff2 in `assets/fonts/`), so editor and front end match.
- Stacks:
  - heading: `"Inter Tight", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`
  - body: `Manrope, "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`
  - `:lang(zh-TW)` → `"Inter Tight"/Manrope, "Noto Sans TC", sans-serif`; `:lang(ja)` → `…, "Noto Sans JP", sans-serif`. Noto Sans TC / JP 400 + 500 loaded as `fontFace` subsets (zh-TW and ja subsets built with the Hokuto/Hada method, not the broken subset script). Because style.css uses `:lang(`, copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it in functions.php.
- Hierarchy by size, weight stays 400 (reference is 400 almost everywhere); 500 only for T2 labels, the sub-bar product name and buttons.

| Use | Size (desktop → mobile) | Weight | Line-height | Tracking | Source |
|---|---|---|---|---|---|
| Hero H1 (preset `xx-large`, theme max) | **4.5rem** → 2.75rem | 400 | 1.1 | −0.01em | ref 3rem; raised to meet the ≥4.25rem rule |
| T2 label (uppercase) | 2.4rem → 1.75rem | 500 | 1.2 | 0.01em | tok b Section title |
| H2 subtitle | 2.375rem → 1.75rem | 400 | 1.2 | normal | tok b H3 |
| Price (pre-order card) | 3rem → 2.5rem | 400 | 1.1 | normal | tok b hero name |
| Hero tagline | 1.5rem → 1.125rem | 400 | 1.4 | normal | tok b tagline (2rem) scaled to the larger H1 |
| Lead | 1.3rem → 1.125rem | 400 | 1.8 | normal | tok b Lead |
| Body | 1.125rem → 1rem | 400 | 1.8 | normal | tok b Body |
| Small / sub-bar / pills | .8125rem | 400/500 | 1.5 | normal | tok b Sub-nav |
| Footnote | .8rem italic | 400 | 1.8 | normal | tok b Footnote |
- zh-TW / ja: heading sizes × 0.75 (labels stay Latin at full size), body line-height 1.85, `letter-spacing: .04em` for CJK body. fr/de: `hyphens: auto` on body and H2.

## 7. Responsive (hard requirements)
- 390 px first screen: no vertical text, no absolutely positioned labels over text; the only absolutely positioned items are the lockup and the play button, which never overlap (lockup max-width 68%, button at right 6%, bottom 5%, 64 px). No horizontal overflow (anchor row scrolls inside itself only).
- Price list: at ≥ 782 px the price list spans the full 980 container (`width:100%`), price column `white-space: nowrap; text-align: right; width: 1%` (never clipped at 800 and 1280); at < 782 px every table and `<dl>` stacks (item on one line, price under it right-aligned or on the same line if it fits; spec term above value).
- Gallery 3×2 → 2×3; three-column reviews and assurances → one column; tech band → stacked with diagram below.
- Hero height `calc(100svh - 136px)` desktop, `calc(100svh - 144px)` mobile min 520 px.

## 8. Images (18; one STYLE string; photo)

**STYLE** (use verbatim for every image):
> `High-key natural-light interior photograph, soft diffused morning daylight, airy and calm, desaturated warm greys and off-white walls, light oak wood, a little fresh plant green, matte low-contrast finish, gentle shadows, shallow depth of field, eye-level 35mm lens, minimalist contemporary European home, uncluttered, editorial product-lifestyle photography, no people's faces in close-up, no text, no logos, no brand marks, no Japanese elements.`
Image 06 adds to the subject (not the STYLE): "dark moody low-key grade, near-black background" (tok e: Design band is dark). Every subject that shows the unit includes the full `PRODUCT` description from §0. Hands may appear (diverse skin tones); people appear only at distance or from behind. 1600–2000 px wide, webp ≤ 300 KB, no cutouts.

| # | File | Subject / composition | Ratio | Used on (page → block) | Home |
|---|---|---|---|---|---|
| 01 | `hero-sill-morning.webp` | **KV.** Straight-on view of a deep white windowsill in morning sun, sheer linen curtains lifting slightly, dust motes in the light beam; PRODUCT (Chalk) whole on the sill at ≈62% x / 70% y, ≈1/7 frame width; pale empty wall and window reveal across the left half; trailing pothos at right edge; blurred chair arm with folded knit throw at left edge | 16:9 | Home hero (1st); Thanks | ✔ |
| 02 | `hero-living-shelf.webp` | Bright living room, low light-oak shelf under a window, PRODUCT (Chalk) whole on the shelf centre-right, big calm grey wall left, small olive tree right edge, linen sofa corner blurred left | 16:9 | Home hero (2nd) | ✔ |
| 03 | `hero-bedroom-sill.webp` | Bedroom at dawn, PRODUCT (Graphite) on a wide sill beside the bed, white bedding blurred left, pale wall, eucalyptus in a jar right edge | 16:9 | Home hero (3rd); Early access | ✔ |
| 04 | `stale-room.webp` | The problem: a closed window on a grey winter afternoon, laundry drying on a rack, a mug and open book, slightly hazy flat light, no unit visible | 16:9 | Home Why | ✔ |
| 05 | `night-bedroom.webp` | Dim calm bedroom at night lit by one warm lamp, PRODUCT (Chalk) on a nightstand right third with its soft white light ring glowing, left third pale wall left clear for text, foreground blurred blanket | 16:9 wide (crop 2:1) | Home Quiet night; How it works | ✔ |
| 06 | `design-macro.webp` | Macro of the top round perforated aluminium grille and brushed ring dial of PRODUCT (Graphite), dark moody low-key, near-black, grille at right two-thirds | 2:1 | Home Design band; Design page top band | ✔ |
| 07 | `gal-top-dial.webp` | Top view, a hand turning the brushed ring dial of PRODUCT (Chalk) on a light oak sill | 1:1 | Home gallery; Studio | ✔ |
| 08 | `gal-filter-slide.webp` | Two hands sliding the pleated filter cartridge out of the base of PRODUCT on a white table | 1:1 | Home gallery; How it works; Care | ✔ |
| 09 | `gal-desk.webp` | PRODUCT (Graphite) on a pale desk beside a closed laptop and a notebook, window light | 1:1 | Home gallery; Support | ✔ |
| 10 | `gal-reading-nook.webp` | Reading nook: armchair, floor lamp, PRODUCT (Chalk) on the floor beside a stack of books, person reading seen from behind | 1:1 | Home gallery; Care | ✔ |
| 11 | `gal-kitchen.webp` | PRODUCT (Chalk) at the end of a light kitchen counter near a window, herbs in pots, no food mess | 1:1 | Home gallery; Reviews page | ✔ |
| 12 | `gal-carry-loop.webp` | A hand carrying PRODUCT by its tan leather loop through a bright hallway, motion feel, body cropped at the wrist | 1:1 | Home gallery; Design | ✔ |
| 13 | `packshot-pair.webp` | Two units side by side, Chalk and Graphite, on a seamless light-grey (#E9E9E9) sweep, soft shadow, whole and uncropped, studio light | 3:4 portrait | Home Specs; Specs; Pre-order | ✔ |
| 14 | `review-studio-apt.webp` | Small bright studio apartment, bed and plants, PRODUCT on a sill, a woman seen from behind opening the curtain (Maya) | 4:3 | Home Reviews; Reviews page | ✔ |
| 15 | `review-family.webp` | Terraced-house living room with a play mat and wooden toys, PRODUCT on a low cabinet, adult and child at distance, faces not visible (Fischer family) | 4:3 | Home Reviews; Reviews page | ✔ |
| 16 | `review-home-office.webp` | Home office corner, man from behind at a desk with headphones, PRODUCT on the shelf beside him (Arjun) | 4:3 | Home Reviews; Reviews page | ✔ |
| 17 | `studio-bench.webp` | Design studio workbench: fabric swatches, aluminium grille samples, calipers, a disassembled unit, top-down soft light, moderately dark grade for the band | 2:1 | Studio dark band; Design bottom band | |
| 18 | `unboxing.webp` | Hands lifting PRODUCT out of a plain unprinted recycled-cardboard box with paper pulp insert, light table | 3:2 | Pre-order dark band (overlay .4) | |
- Check every image with Read: no text/logo on the unit, product shape consistent (square, fabric band, round top grille, leather loop), no faces breaking, hands with five fingers. Regenerate otherwise.

## 9. Scroll motion (sp-scroll; 3 effects + mandatory parallax)

`assets/sp-scroll.css` / `.js` copied unchanged. Theme variables: `--sp-dur: 1s` and `--sp-ease: ease` on plain fades (tok g: opacity 1s, default ease), `--sp-dist: 24px` for `--up` (ref fadeInUp 40px, capped by our ≤30px rule).

| Effect (class) | Where | Reference source & timing | Notes |
|---|---|---|---|
| `sp-reveal` (plain fade) | Why photo (04), Quiet-night text group, Reviews columns, FAQ heading group, inner-page photos | balmuda .lazyload → .loaded: opacity 0→1, **1s**, default ease, triggered when section top reaches 80% of viewport | no translate (ref only fades); not on hero, price list, forms, legal |
| `sp-stagger` + `sp-reveal sp-reveal--up` | Gallery 3×2 tiles; spec `<dl>` rows; 3 assurances | balmuda fadeInUp keyframe: translateY 40→0, ~.5s ease; ours 24px, 0.12s step | tiles are a normal grid (not horizontally scrolling) |
| `sp-reveal sp-reveal--wipe` | Tech cutaway SVG wrapper (home + How it works + Specs + Care drawings) | the ref's diagram is revealed cropped at the band edge; wipe 1.1s `cubic-bezier(.77,0,.175,1)` clip on the child | clip-path on the child, never on the observed wrapper |
| `sp-count` | 3 tech counters (160 / 19 / 22) | (ours; numbers are the ref's tech-band focus) 1.2s easeOutCubic | text keeps unit |
| **`sp-parallax`** | (a) **Hero** wrapper: background layer `.sp-parallax__layer` containing the 3 crossfading photos (01/02/03); foreground lockup + play button outside the layer; **`--sp-par: 8%`** desktop, **5%** at <782 (kept on mobile). (b) **Design dark cover** (06): `--sp-par: 10%` desktop, 6% mobile; text static | Ref has no parallax; its counterpart is the hero's slow crossfade drift and the light→dark band reveal — parallax gives the same "room is still, page moves past" feel | CSS scroll-driven + IO fallback built in; static under reduced-motion, `?sp-static`, editor |
- Hero crossfade: pure CSS keyframes on the three layered images (`opacity`, 21 s loop, 1 s ease-out fades), gated by `html.sp-js:not(.sp-no-motion)`; otherwise photo 01 only. It is not a sp-* class and not a scroll listener.

## 10. Similarity targets (≈80% to reference-tokens.md)

| Dimension | Reference (token) | Mado Air |
|---|---|---|
| Base / soft / dark colours | #FFF / #E9E9E9 / #1F1F1F (a) | identical |
| Accent | cyan #4DC0DB + green #4BA53A (a) | cyan #4DC0DB only (green dropped, brand-specific) |
| Saturated share first screen | 11% (a) | ≤ 12% |
| Font genre / weight | Open Sans 400 + Gothic (b) | Inter Tight / Manrope 400 (+500) + Noto Sans TC/JP |
| Section title | 2.4rem uppercase, lh 1.2 (b) | 2.4rem uppercase, lh 1.2 |
| Subtitle | 2.375rem, lh 1.2 (b) | 2.375rem, lh 1.2 |
| Body / lead | 1.125rem/1.8, 1.3rem/1.8 (b) | identical |
| Hero name | 3rem white lower-left (b) | 4.5rem white lower-left (≥4.25 rule) |
| Header | 100 px dark + 90 px white sub-bar (c) | 64 px dark + 72 px white sticky sub-bar |
| Section padding / container | 96 px / 980 px, text 490 px (c) | identical |
| Pills | r16 32 px, r22 180×44, 1 px outline (d) | identical |
| Rule | 1 px #333 ≈490 px (d) | identical |
| Photo radius / shadow | 0 / none (d) | 0 / none |
| Hero image | full-bleed 16:9, 5-slide crossfade (e,g) | full-bleed 16:9-ish, 3-slide crossfade 1s ease-out |
| Diagram | tall ~1:2.2 line art, cyan airflow, cropped by band (e) | own SVG 460×1010, cyan 35–55%, cropped top + bottom |
| Design band | full-bleed 710 px dark macro, overlay .4 (e) | identical + parallax 10% |
| Gallery | 3×2, 313 px squares, gap 10 (c,e) | identical |
| Decoration | 110 px play button 4 px border, dots 6–8 px, Latin labels (f) | 96 px play button 4 px border, 8 px dots, Latin labels |
| Motion | opacity 1s, fadeInUp 40px, buttons .2s (g) | fade 1s ease, up 24px, buttons .2s; + wipe, count, parallax |
Photos, product, diagram and copy are our own.

## 11. Home acceptance checklist
- [ ] Two-tier header: `#1F1F1F` 64 px bar + white 72 px sticky sub-bar with "Mado Air", 7 anchors that scroll to existing ids, "Notify me" outline + "Pre-order" cyan filled pill; sticky after scrolling.
- [ ] Hero is full bleed, photo 01 visible with `?sp-static`, unit whole and uncropped at 1280 and 390, H1 "Mado Air" 4.5rem white lower-left, tagline, 96 px round play button lower-right; all six KV items visible.
- [ ] Hero crossfade runs with `?sp-motion` (3 photos, 1 s fades); `sp-parallax` on hero background measured ≥ 6 px by check-parallax.mjs; no reveal class in the hero.
- [ ] Info bar with 3 launch facts under the hero; no table, form or search in the first screen.
- [ ] Order: Why → How it works (grey band) → Design (dark band, directly after) → Quiet night → Gallery → Specs → Reviews → Pre-order → FAQ → CTA band → footer.
- [ ] Tech band `#E9E9E9`, label HOW IT WORKS ≥ 2.4rem uppercase, 1 px rule, cutaway cropped top and bottom with visible cyan airflow, counters 160 m³/h · 19 dB · 22 m².
- [ ] Design band dark, full bleed, ≥ 640 px tall, text left, white pill, parallax 10%.
- [ ] 16 distinct photos on home, none repeated, 0 cutouts; gallery 3×2 squares.
- [ ] Price list: 6 items exactly as §0, full width at 800/1280, prices nowrap right; stacks at 390. Same prices on Pre-order page and all five languages.
- [ ] "Pre-order" is the only filled-colour button and appears in sub-bar, pre-order card and closing CTA.
- [ ] ≥ 650 English words, ≥ 3 narrative paragraphs; no guaranteed-effect, medical, award or press claims.
- [ ] First-screen saturated share ≤ 12% (≤ 15% hard).
- [ ] 390 px: no horizontal overflow, no vertical/overlapping labels; auto-gates.mjs pass.
- [ ] Fonts identical in editor and front end (check-editor-fonts.mjs en + zh-TW).
