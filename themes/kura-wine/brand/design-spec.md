# Kura Wine: design spec (stage 1, binding for implementation)

Slug `kura-wine`, independent wine merchant, type **store** (WooCommerce required, checkout must work; theme must still render with WooCommerce off). Row b16-2: archetype editorial-magazine · nav centered · first_screen full-bleed-photo-info-bar · page_structure alternating-longform · font_direction **serif** (Fraunces / Karla, CJK Noto Serif TC / Noto Serif JP 明體) · IMAGERY **photo** (film grain).

Main reference: **BAN INOUE, https://asa-ban.com/** (S5-Style 生活用品･物販 / ファッション). Measurements: `reference-tokens.md` (token letters (a)–(g) below refer to its sections). Screenshots: `brand/ref/asa-*.png`, `scroll-*.png`. We borrow composition, technique, colour relationships, motion values and the key-visual concept. Photos, copy and logo are our own; no asa-ban images, text, seal or wordmark.

Fixed brand facts (every page, all five languages): **Kura Wine**, founded **2014**, shop and cellar at **Kelderstraat 9, 3011 KD Rotterdam, Netherlands** (fictional address). Currency **EUR** in every language. Founder and buyer **Ines Varga**. See §7 for all numbers.

---

## 1. Signature techniques (three, obvious at a glance)

### T1. Full-bleed film photograph that is the whole first screen: slow zoom + 3-slide cross-fade, transparent header, nothing else but one quiet line and an info bar (asa-ban KV, `asa-first.png`)
- Reference: the KV is a full-viewport film photo (red linen in a forest; then a dark house; then rice terraces at dusk). The header (90px, logo left, small serif nav, two-hairline menu) sits transparent on the photo. No headline. Each photo zooms slowly over 10s linear while Splide cross-fades every 5s with a 3s fade, `cubic-bezier(.25,1,.5,1)` (g).
- Kura: `kw-kv` = 100svh (min 640px desktop, min 600px mobile), photos **K1 → K2 → K3** (cellar rack / opened case / tasting table). One Fraunces 300 H1 bottom-left and a 13px info bar on the bottom edge (row first_screen). Details in **Key visual concept**.
- Must not be diluted: photo is edge-to-edge (no frame, no inset, no rounded corners, no coloured overlay box); the header is transparent over it; the three slides really cross-fade and really zoom (motion mode); the H1 is the only large text and stays bottom-left, never centred; no buttons, cards, form, table or search on the first screen.
- Inner pages: every inner page opens with a **short version** of T1: `kw-pagehead` = full-bleed photo band 56vh (min 420px, mobile 48svh) with the page's photo, transparent header over it, the page title bottom-left (Fraunces 300 `xx-large` scaled to `clamp(2.4rem, 4.6vw, 4.25rem)`) and a 13px info line under it (e.g. Shop: "6 bottles from 3 shipments · Delivery in Rotterdam free over €100"). Single zoom only (no cross-fade) 10s linear alternate on inner heads; `sp-parallax` with `--sp-par: 8%`.

### T2. Scattered About on a flat dark field: tall 2:3 photo flush-left + small 3:2 photo flush-right and lower + a narrow text column from column 8; alpha-mask reveal (asa-ban About, `scroll-about-after.png`)
- Reference geometry at 1440 (c)(e): container padding 0 60px. Section label "About" 20px top-left; catch line 20px under it; text column starts x≈877 (col 8), width ~500; tall portrait 477×715 (2:3, 33% width) at x=60, its top starting **below** the text column's top (≈ text top + 170px); small landscape 329×220 (3:2, 23% width) flush to the right container edge, its top ≈140px below the end of the text column. Flat ground `#33363E`, radius 0, no overlap, no shadow. Images revealed by an organic alpha mask (5s).
- Kura geometry (desktop ≥1100px, 12-col grid, container max 1320, side padding 60px):
  - Row A: label + catch line at cols 1–6 (top-left), then the text column at **cols 8–12** (start x≈877 at 1440, max-width 500px), `margin-top: 80px` below the catch.
  - Row B (same section, CSS grid, not absolute): tall **2:3** photo at **cols 1–4** (width 33%, ~477px at 1440), top aligned to text column top + 170px; small **3:2** photo at **cols 10–12** (width 23%, ~329px), right edge on the container edge, top = text column bottom + 140px. Empty space between them stays empty (that emptiness is the technique).
  - Both photos: `sp-reveal sp-reveal--mask`, radius 0, no caption.
- Mobile (<782px): label, catch, text (full width, 24px gutters), then the 2:3 photo at 78% width flush-left, then the 3:2 photo at 62% width flush-right with `margin-top: 48px`. No overlap.
- Must not be diluted: the two photos stay in different columns, different sizes (2:3 large vs 3:2 small ≈ 1.45× width ratio) and visibly offset in height; the text column stays narrow (≤500px) and right of centre; the ground stays flat dark (no wash, no photo behind).
- Home: block 2 `kw-about`. Inner pages: About (K4 2:3 + K5 3:2), Growers (per grower: bottle photo P1/P4/P5 as 2:3 crop + vineyard K6/K7/K8 3:2), The Case (K1 2:3 crop + K5 3:2), Single product (P image 2:3 + region photo 3:2), Journal single post (featured 2:3 left + second image 3:2 right, text column col 8).

### T3. 50/50 split: dark text column with hairline link rows in 2 columns ending in ">" against a full-height 3:4 photo; and its sibling, 2-column hairline info rows over a washed photo band (asa-ban Company `asa-company.png` + Shop info `asa-shop.png`)
- Reference: Company section is two halves: left 0–728px flat `#33363E`, label "Company" 20px at top-left, then 2 × 2 grid of link rows (each cell ~173px wide at 1000px screenshot, ≈250px at 1440, row height 69–79px, padding-bottom 20px, 1px rule rgba(218,214,206,.2), ">" 6px right); right half 713×941 photo (3:4) bleeding to the top, right and bottom edges. Shop info: full-bleed blurred grey photo washed to `#7C8A91`, label left (cols 1–3), 2-col hairline rows (name 15px + address 13px, ">" at right, rule rgba(55,56,52,.3)), "View more >" right-aligned under the rows.
- Kura split (home block 5 `kw-case`): `core/columns` alignfull, gap 0, 50/50. Left: flat `#33363E`, padding 120px 60px (desktop), label "The case" (`medium` 20px/500) + catch line + one 70-word paragraph + **2 × 2 hairline link rows** (cells 250px min, row 72px tall, 1px `rgba(218,214,206,.2)` bottom rule, Fraunces 15px text, ">" Karla 13px right-aligned): "01 Arrives sealed", "02 Rests ten days", "03 Tasted by three", "04 Opened on Friday" → each links to `/the-case/#arrives` … `#friday`. Right: photo **K9** 3:4, `object-fit: cover`, fills the column height (min 760px desktop), bleeding to the viewport's right edge, radius 0.
- Kura info rows (home block 6 `kw-visit`): see block list; ground = blurred photo K11 washed with `#6A5A48` (煤竹) at 82% opacity, rows in `#E2DCD0` on it.
- Mobile: split stacks: photo first (4:5 crop, full width), then the text column; the 2×2 rows become 1 column. Info rows become 1 column.
- Must not be diluted: the photo is a true half (50% of viewport, full block height, touching the viewport edge, not a contained card); the rows are hairlines with ">" (not buttons, not cards, no icons, no numbers in circles); the info band is a full-bleed photo wash with dark-on-wash hairline rows, not a plain colour block.
- Inner pages: T3 split on The Case (mirrored: photo left), Tastings & Club (photo K10 right, rows = the six price items as links to anchors), Visit (photo K11 left, rows = address / hours / delivery / contact), About (photo K4 3:4 right, rows = Ines / Tomas / Ruth / Sam → anchors), Shop archive (rows = 3 shipment filters + "All bottles"). T3 info-row band is the pre-footer on **every** page (shared pattern `kw-visit`).

### Supporting detail (not counted, but required): vertical title beside a 3:2 photo (asa-ban Service slides, `asa-s1.png`, `scroll-service-3.png`)
- Reference: 3:2 photo (539×359, ~37% width) with a vertical-rl title (20px/600, ls 6px, `#DAD6CE`) set immediately to the photo's right edge, bottom-aligned with the photo, padding-left 20px.
- Kura: home block 3 `kw-shipments`, each shipment row; inner Shipments page and Growers page. Text: the region name ("Jura", "Douro", "Burgenland"; zh-TW「侏羅」「斗羅河谷」「布爾根蘭」, ja「ジュラ」「ドウロ」「ブルゲンラント」). `writing-mode: vertical-rl`, Fraunces 500 20px, letter-spacing 6px (Latin) / 0.3em (CJK), bottom-aligned to the photo, 20px gap. Different from Mame's rotated side label: ours is attached to each photo's edge as the photo's own caption, not a page-edge rail beside a header row.
- **Desktop only (≥782px).** Below 782px the title is horizontal (`writing-mode: horizontal-tb`) above the photo, 0.875rem ls .12em caps. Never on any first screen.

### Continuation to inner pages (≥4 required; all listed)
| Page | T1 (photo head) | T2 (scattered) | T3 (split / info rows) | vertical title |
|---|---|---|---|---|
| Shop (archive-product, taxonomy, search) | K10 head, "Bottles" | — | split rows = shipment filters (K2); pre-footer info band | — |
| Single product | no photo head; header solid `#282B33` | P image 2:3 main + region photo 3:2 lower right (T2 offsets) | pre-footer info band | region vertical beside the 3:2 photo (≥782) |
| Shipments | K2 head | — | pre-footer | ✓ 3 rows |
| Growers | K3 head | ✓ ×3 (one per grower) | pre-footer | ✓ |
| The Case | K2 head | ✓ (K1 2:3 crop + K5 3:2) | ✓ mirrored split (K9) | — |
| Tastings & Club | K12 head | — | ✓ split (K10) + price table below | — |
| About | K1 head | ✓ (K4 2:3 + K5 3:2) | ✓ split (people rows, K9) | — |
| Visit | K11 head | — | ✓ split (K12) + info band (K3 wash on this page) | — |
| Delivery & Returns | K2 head | — | pre-footer | — |
| Journal index / single | K8 head (index) | ✓ on single | pre-footer | — |

---

## Key visual concept

### (1) Reference first screen: concept, story, signature motion
- **Concept**: the first screen is nothing but a full-bleed film photograph. Slide 1: a person in a white shirt swinging red linen in a green forest; slide 2: a dark house; slide 3: rice terraces at dusk under a magenta sky. A tiny transparent header (logo left with a red seal, small serif nav, two-hairline menu) is the only UI. No headline: the picture is the message.
- **Story**: "memories of Nara woven into daily life — beauty you can touch". The photos move from the hand touching the cloth → the house where things are made → the land they come from.
- **Signature motion**: Splide fade, 3 slides, interval 5000ms, fade 3000ms `cubic-bezier(.25,1,.5,1)`; each image is scaled to ~130% and zooms slowly over 10s linear. Header background fades in on scroll (.3s `cubic-bezier(.215,.61,.355,1)`). Below the fold, text rises 8% over 1.5s `cubic-bezier(.165,.84,.44,1)`.

### (2) Our transfer (independent wine merchant; same composition, same motion idea, same image type = photo)
- Same story arc **hand → place → table**: slide 1 a buyer's hand sliding a bottle out of a cellar rack (the touch); slide 2 a just-opened wooden case in straw (the shipment, the place it came from); slide 3 a tasting table by a window at dusk with two glasses and the opened bottle (where it ends up). Story: *"A few shipments a year, sold with the grower's story."*
- Same composition: full-bleed film photo edge-to-edge, transparent 90px header on top, nothing else in the upper two thirds. Our only additions are what the row's first_screen asks for: one quiet H1 bottom-left and a bottom info bar.
- Same motion: 3-slide cross-fade (5s interval, 3s fade, `cubic-bezier(.25,1,.5,1)`), each slide slow zoom 10s linear; plus `sp-parallax` on the slide layer (the reference's GSAP image parallax, token (g)). H1 has no reveal (hero rule).
- Same image type: documentary film photographs, muted, grain, cool-green shadows, a dusk magenta sky only in slide 3's window.

### (3) KV checklist (each built on the first screen; visible at 1440×900 and 390×844)
| # | 參考站元素 | 我們的對應 | 位置 | 動態 | 用哪張圖 |
|---|---|---|---|---|---|
| 1 | Full-bleed film photo, image scaled ~130% for zoom (e) | Buyer's hand drawing a bottle out of a cellar rack, film grain, dim cellar light, hand + plain bottle sharp right of centre, lower-left third dark and quiet for the H1 | full viewport (100svh), edge to edge | slow zoom: `scale` 1 → 1.10, 10s linear, `alternate infinite` (inner `img`) + `sp-parallax` `--sp-par: 10%` (mobile 6%) on the slide layer | **K1** |
| 2 | 3-slide fade (g) | Slide 2 opened wooden case in straw with six bottles; slide 3 tasting table by a window at dusk, two glasses, opened bottle | same frame, stacked | cross-fade 15s cycle, 5s interval, 3s fade, `cubic-bezier(.25,1,.5,1)`; each slide zooms as #1 | **K2**, **K3** |
| 3 | Transparent header 90px: logo left + red seal, small serif nav, 2-hairline menu (c)(f) | Transparent header 90px, side padding 40px: our seal (22px wine circle `#7A1E22` with 1px `#E2DCD0` inner ring) + wordmark "KURA WINE" Karla 500 15px ls .2em at left; nav centred Fraunces 15px ls .05em `#E2DCD0` (Bottles · Shipments · Growers · The Case · Tastings · Visit); right: language "EN" + cart count Karla 13px + 2 hairlines 36×8px | top | header ground `transparent` → `#282B33` after 90px scroll, .3s `cubic-bezier(.215,.61,.355,1)` (CSS `animation-timeline: scroll()` or a class toggled by sp-scroll's existing IO sentinel — no new scroll listener; if neither is possible, keep transparent on front page and solid elsewhere) | — |
| 4 | No copy; the picture is the message | One H1 only, Fraunces 300 `clamp(2.5rem, 5.2vw, 4.5rem)`/1.05, `#F1ECE3`, max 11ch per line, 2 lines: "A few cases, / and who made them." (≤7 words). Text-shadow `0 1px 24px rgba(0,0,0,.35)` | bottom-left: left 60px (mobile 24px), bottom = info bar top − 48px | none (hero has no reveal) | over K1–K3 |
| 5 | Dark flat base under the fold `#282B33` (a) | Page continues in `#282B33`; the KV bottom edge meets block 2 with no rule, no gradient | below KV | — | — |
| 6 | (row first_screen: info bar) | Bottom info bar on the photo: three items separated by 1px × 12px rules, Karla 13px ls 1.3px `#E2DCD0`: "Pouring this week: Jura Savagnin" · "Open Wed–Sun" · "Next case opens Friday 18:00". Top 1px `rgba(226,220,208,.25)` rule spanning the container; height 56px | bottom edge, container width (60px sides) | none | over K1–K3 |

Implementation notes (KV):
- Structure: Group `.kw-kv.sp-parallax` (alignfull, `display:flex; flex-direction:column; justify-content:flex-end`) → child Group `.kw-kv__slides.sp-parallax__layer` (`position:absolute; inset:0`) with three Image blocks stacked `position:absolute; inset:0; object-fit:cover`, **DOM order K3, K2, K1** (K1 last = on top, so no-JS / `?sp-static` / editor / reduced-motion show K1 with no hidden-state rule). Foreground Group (H1 + info bar) in normal flow, `position:relative; z-index:2` — never inside the moving layer. The H1 and info bar are **not** absolutely positioned (flex end), so nothing can overlap at 390px.
- Fade: hidden states only under `html.sp-js:not(.sp-no-motion)` inside `@media (prefers-reduced-motion: no-preference)`. Keyframes `kw-fade` 15s infinite, timing `cubic-bezier(.25,1,.5,1)`: `0% {opacity:1} 13.333% {opacity:1} 33.333% {opacity:0} 80% {opacity:0} 100% {opacity:1}`; delays K1 `0s`, K2 `-10s`, K3 `-5s` (gives K1 first, each slide 2s full + 3s fade = 5s interval). Zoom `kw-zoom` 10s linear infinite alternate `scale:1 → 1.1` on each `img`.
- Darkening: one `::after` on `.kw-kv` = `linear-gradient(to top, rgba(40,43,51,.55) 0, rgba(40,43,51,0) 45%)` for H1/info-bar legibility; nothing else.
- Saturation: K1–K3 graded muted (STYLE §6). First-screen saturated share target **≤10%**, gate limit 15% (row note cap 30%; ref slide 1 is 72%, we do not copy that). The only saturated pixels are the seal (22px) and the wine in slide 3's glasses.

---

## 2. Colour (reference relationships and values kept; one swap with reason)

| Role | Hex | Source token (a) | Use | Share |
|---|---|---|---|---|
| Base | `#282B33` | ref body `#282B33` (identical) | page ground, header after scroll, footer | ~62% |
| Section | `#33363E` | ref sections `#33363E` (identical) | T2 About field, T3 split text half, product cards ground | ~14% |
| Text | `#E2DCD0` | ref `#DAD6CE`, +3% lightness (contrast on `#282B33` 11.6:1) | body, headings, nav | text |
| Text bright | `#F1ECE3` | ref text +8% (KV only) | KV H1 over photos | text |
| Muted | `#8C8C8C` → `#94918A` | ref `#8C8C8C` warmed, +3% | footer address, meta, captions (4.9:1 on base) | <1% |
| Wash / 煤竹 | `#6A5A48` | replaces ref slate wash `#7C8A91` (same role, same ~5–8% share). Reason: row palette 煤竹 is binding, and it is the colour of cork, cask and rack wood — a wine merchant's natural mid-tone; the grey-blue wash would read as a clinic. | T3 info band wash (82% over K11), selected size/filter chips border, quantity input rule | ~8% |
| Rows on wash | `#E2DCD0` text, rule `rgba(226,220,208,.3)` | ref rows `#373834` on light wash; inverted because 煤竹 is darker than the ref wash (4.6:1) | info rows | — |
| Hairline | `rgba(226,220,208,.2)` | ref `rgba(218,214,206,.2)` | all 1px rules on dark | — |
| Accent wine | `#7A1E22` | ref accent `#6C030B`–`#8A1B1B` (mid of the range) | seal, focus ring, cart count dot, sale badge, link underline on hover | ≤2% |

- Not beige-led and not the recent warm-dark: Mame's ground `#26211E` is warm brown-black; ours keeps the reference's cool slate `#282B33`, with umber only as the mid band. Azuke's `#2E322F` was a single CTA band on a light page; Kura is dark throughout.
- Buttons (WooCommerce too): ref text button — label + ">" with 1px bottom rule `rgba(226,220,208,.4)`, min-width 120px, padding-bottom 10px, Fraunces 14px ls .05em; hover = rule turns `#E2DCD0` and ">" moves 4px right (.3s `cubic-bezier(.165,.84,.44,1)`). Primary checkout button only: solid `#E2DCD0` ground, `#282B33` text, radius 0, 48px tall.
- First screen: saturated share ≤10% target, `check-first-screen.py` limit 15%.

## 3. Type (font_direction **serif**)
- Latin headings, body, nav, prices: **Fraunces** (variable, opsz + wght; weights 300, 400, 500; italic 400). Reference is serif everywhere (Lusitana), so Fraunces carries body too (opsz auto keeps 15px text tight).
- Latin utility only (wordmark, info bar, labels in caps, meta, form fields, WooCommerce notices, cart count): **Karla** 400/500.
- zh-TW: **Noto Serif TC** (明體) headings **and** body; ja: **Noto Serif JP** (明體) headings **and** body. No Noto Sans / 黑體 anywhere.
- theme.json `fontFamilies` with `fontFace` (local woff2 in `assets/fonts/`, including zh-TW and ja subsets made with the Hokuto/Hada method — the CJK subset script is known broken). Editor and front end load the same faces. style.css uses `:lang()` → copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it in functions.php.
  - `serif` (headings + body): `"Fraunces", "Noto Serif TC", "Noto Serif JP", Georgia, "Times New Roman", serif`
  - `utility`: `"Karla", "Noto Serif TC", "Noto Serif JP", system-ui, sans-serif`
  - `:lang(zh-TW)` all text: `"Noto Serif TC", "Fraunces", serif`; `:lang(ja)`: `"Noto Serif JP", "Fraunces", serif`. CJK headings ≈0.75× the English size; CJK body line-height 1.85; fr/de `hyphens:auto`.

| Preset | Size / lh / ls / weight | Use | Ref token (b) |
|---|---|---|---|
| small | 0.8125rem (13px) / 1.6 / 1.3px / 400 Karla | info bar, footer address, meta, captions | footer 13px ls 1.3px |
| base | 0.9375rem (15px) / 1.7 (25.5px) / .05em / 400 | body, nav, rows, buttons (14px) | body 15px/25.5 ls .75px |
| medium | 1.25rem (20px) / 1.7 / .05em / 500 | section labels ("About", "The case"), catch lines (lh 34px), vertical titles (ls 6px), product names | h2/h3 20px/600, lh 25.5–34 |
| large | 1.75rem (28px) / 1.4 / .02em / 400 | inner page section headings, shipment names on Shipments page | — (needed for long pages) |
| x-large | 2.75rem (44px) / 1.15 / 0 / 300 | single product title, pull lines | — |
| xx-large | `clamp(2.5rem, 5.2vw, 4.5rem)` (72px max) / 1.05 / -.005em / 300 | KV H1, inner page titles (capped 4.25rem there) | — (ref max 20px; theme max 4.5rem ≥ 4.25rem ✓) |
- Prices: Fraunces 400 `font-variant-numeric: tabular-nums lining-nums`, `white-space: nowrap`.
- Section rhythm stays reference-quiet: below the KV, section labels are 20px (as the ref), not display size. Only KV and page heads use xx-large.

Header (one menu only): 90px, padding 0 40px, transparent on KV / page heads, solid `#282B33` after scroll and on templates without a photo head. <960px: seal + wordmark left, cart + 2-hairline button right (36×8px, hairlines 1px `#E2DCD0`), full-screen `#282B33` overlay menu with Fraunces 1.75rem items and 1px rules; language switcher at its foot.
Footer: `#282B33`, padding 210px 100px 0 50px (ref c) desktop, 120px 24px 0 mobile. Col 1 seal + wordmark + one line "Independent wine merchant, Rotterdam, since 2014"; col 2 address + phone (Karla 13px `#94918A` ls 1.3px); col 3 hours; col 4 nav list Fraunces 15px. Bottom line: "© 2026 Kura Wine · Sale of alcohol to persons 18 and over only."

Grid & spacing (c): container max 1320px, padding 0 60px (≥1100), 0 40px (782–1099), 0 24px (<782). Section padding 230px top / 210px bottom desktop (About, Shipments), 160/160 for others; mobile 112/96. Catch line → body margin 90px desktop, 40px mobile; paragraph gap 20px. Radius **0 everywhere**, no shadows.

---

## 4. Home page

### First screen (1440×900)
See KV checklist. Top 90px transparent header; K1 edge-to-edge; H1 two lines bottom-left; info bar along the bottom inside the container. Mobile 390×844: same photo (object-position 62% 50% so hand + bottle stay in frame), H1 `2.5rem`, info bar wraps to 3 short lines stacked (each its own line, no rules between), everything in normal flow, no vertical text, no absolutely positioned labels.

### Block order (alternating-longform: photo side alternates left/right block to block)
| # | Pattern | Purpose | Layout and photos (position → photo) | Copy |
|---|---|---|---|---|
| 1 | `kw-kv` | KV (T1) | full-bleed K1/K2/K3 + H1 + info bar | H1 7 words + bar 15 words |
| 2 | `kw-about` | who we are (T2) | `#33363E` field. Label "About", catch "We buy a little, and we buy it in person." Text col 8–12: 3 paragraphs. **K4** tall 2:3 cols 1–4 (left), **K5** small 3:2 cols 10–12 (right, lower). Text button "Our story >" → About | 120 words |
| 3 | `kw-shipments` | the shipments this season (alternating rows + vertical titles) | `#282B33`. Label "Shipments" + catch "Three shipments landed this autumn." Then 3 rows, each 12-col: row 1 photo **K6** (3:2, cols 1–5, ~37% width) + vertical title "Jura" on its right edge, text cols 8–12 (grower, arrival, cases, 45-word note, "2 bottles >"); row 2 mirrored: text cols 1–5, photo **K7** cols 7–11 + vertical "Douro"; row 3 as row 1 with **K8** + "Burgenland". Row gap 160px | 3 × 50 words |
| 4 | `kw-pouring` | the bottles (shop) | `#282B33`. Ref blog geometry: **K10** large 3:4 at cols 1–5 (36.7%), right cols 7–12: label "Pouring this week" + one sentence, then 2 × 2 product grid (WooCommerce Product Collection, 4 featured: **P1, P3, P5, P6**): image 3:4 on `#33363E`, region Karla 13px caps ls .12em, name Fraunces 20px/500, grower 15px muted, price right `nowrap`. Text button "All bottles >" → Shop. WooCommerce off: same markup with static images linking to `/shop/` | 40 words + product data |
| 5 | `kw-case` | how a case is opened (T3 split) | 50/50: text half `#33363E` left (label, catch "Nothing goes on the shelf untasted.", 70 words, 2×2 hairline rows 01–04), **K9** 3:4 right half bleeding to edge | 90 words |
| 6 | `kw-friday` | the Friday table (event + tasters) | `#282B33`, centred 8-col text block (cols 3–10, left-aligned text): label "Fridays", catch "The case opens at six.", 2 paragraphs naming the three tasters (Ines, Tomas, Ruth) and the price (€22, five pours), then **K12** wide 21:9 photo (hands passing glasses across the Friday table) full container width below the text. Text button "Book a seat >" → Tastings & Club | 80 words |
| 7 | `kw-visit` | visit / info rows (T3 info band) | full-bleed `sp-parallax` band: **K11** blurred (CSS `filter: blur(6px)` on the layer image, scale 1.18) under `#6A5A48` at 82%; label "Visit" cols 1–3; 2-col hairline rows at cols 4–12: "Shop & cellar — Kelderstraat 9, Rotterdam" · "Open — Wed–Sat 12:00–20:00, Sun 12:00–17:00" · "Delivery — free in Rotterdam over €100" · "Shipment Club — one case each shipment, €112". Each ends with ">" (links: Visit, Visit#hours, Delivery, Tastings#club). "View more >" right under the rows | 40 words |

English home ≥ 300 words, narrative paragraphs in #2, #3 (×3), #5, #6 (≥3 ✓). CJK home ≥ 550 characters.

Home photo positions (≥8 ✓, 14 distinct, no repeat): K1, K2, K3 (KV) · K4, K5 · K6, K7, K8 · K10, P1, P3, P5, P6 · K9 · K12 · K11 = **16 positions**.

### Comparison with recent themes (home block order)
| # | Azuke Finance | Nagi Imaging | Kama Cookware | Mame Coffee | **Kura Wine** |
|---|---|---|---|---|---|
| 1 | tight H1 + bowed photo mosaic | scattered rounded photos + ticker | diagonal product slabs | framed window on backdrop + wordmark | **full-bleed cross-fading film photo, H1 bottom-left, info bar** |
| 2 | full-bleed photo + overlay box (parallax) | studies list + 2 photos | question statement | full-bleed parallax statement | **scattered About: 2:3 left, 3:2 right lower, narrow text col 8** |
| 3 | sticky chapters | pinned statement | sticky 50% picture swap | rule-column lot cards | **3 alternating shipment rows with vertical region titles** |
| 4 | fee table | reporting strips | masonry featured | wide photo + rotated label + ruled text | **big 3:4 photo + 2×2 bottles** |
| 5 | story cards | fees table | dark gallery band | people / who roasts | **50/50 split, hairline 2×2 link rows, half-bleed photo** |
| 6 | FAQ | full-bleed cover | service price table | bar price list | **Friday table text + 21:9 photo** |
| 7 | dark CTA band | scattered referrer cards → people rows → visit | … → wordmark marquee | contained photo visit | **umber photo-wash band with hairline info rows (parallax)** |
Why not alike: no framed window, no wordmark on the KV, no overlay box, no sticky/pinned sections, no price table on home, no FAQ, no cards with pill tags, no ticker/marquee, no rotated page-edge label. Kura's shapes (hard-edged full-bleed cross-fade, scattered 2:3/3:2 pair in empty dark space, true half-bleed split with hairline cells, umber photo wash) are all from asa-ban and appear in none of the four.

---

## 5. Inner pages (9 + WooCommerce templates; all reachable from menu or footer)
Every page: T1 photo head → body → `kw-visit` pre-footer band. No sidebar. Text column for long prose: max 640px at cols 7–12 (asa-ban text sits right of centre) unless stated.

1. **Bottles / Shop** (`archive-product`, `taxonomy-product_cat`, `taxonomy-product_tag`, `product-search-results`): head K10 "Bottles". T3 split strip (height auto, photo K2 4:5 right half, 360px tall) with rows = "Jura (2)", "Douro (2)", "Burgenland (2)", "All bottles (6)" → category links. Product grid 3 col desktop / 2 tablet / 1 mobile (≥390 still 1), gap 60px; card = 3:4 image on `#33363E`, region caps, name, grower, price nowrap right, text button "Add to case >". Result count + ordering in Karla 13px. Pagination numbers + ">".
2. **Single product** (`single-product`): solid header. Left cols 1–5: product image 2:3 (T2 tall); right cols 8–12: region caps label, title x-large, grower + vintage + 75cl, price `large`, short description, quantity (1px `#6A5A48` underline input) + add-to-cart text button, line "Delivery in Rotterdam free over €100 · Age 18+ on delivery". Below, T2 lower-right: the shipment photo (K6/K7/K8 by region) 3:2 at cols 10–12 with the region vertical title beside it (≥782). Then tabs (Tasting note, The grower, Serving) as hairline rows; related bottles 3 across.
3. **Shipments** (`page-shipments`): head K2. Intro 60 words. The 3 shipments as on home but long form: each row photo 3:2 + vertical title + 150-word note + table-free facts list (arrived, cases, bottles, tasted by) as hairline rows. Then "Past shipments" hairline 2-col rows (8 past: e.g. "Spring 2026 — Sicily (Etna)", text only, no photos).
4. **Growers** (`page-growers`): head K3. Three T2 scattered blocks, one per grower (mirror every second one): Élise Gérin (Jura) P1 (2:3 crop) + K6 3:2; João Serra (Douro) P4 (2:3 crop) + K7 3:2; Martina Halbmayr (Burgenland) P5 (2:3 crop) + K8 3:2. Each 180 words. Vertical region title beside each 3:2.
5. **The Case** (`page-the-case`): head K2. T3 mirrored split (K9 left half) with the 4 stage rows as anchors; then four long-form sections `#arrives`, `#rests`, `#tasted`, `#friday` (each 100 words) with one T2 placement between sections 2 and 3: K1 2:3 crop left + K5 3:2 right lower; ends with the Friday price line €22. Not a step grid: prose sections, the numbers 01–04 only as small Karla labels.
6. **Tastings & Club** (`page-tastings`): head K12. T3 split (K10 right) intro; then the **price list** (§7, 6 rows) full container width; then sections `#friday`, `#club` (Shipment Club, how to join/pause, 120 words).
7. **About** (`page-about`): head K1. T2 (K4 2:3 + K5 3:2) with the 2014 founding story (200 words); T3 split with people rows (Ines Varga, Tomas Ekwueme, Ruth Delacourt, Sam Okoro → `#ines`…) and K9 right; four short people paragraphs (60 words each) in the narrow column. No team photo grid.
8. **Visit** (`page-visit`): head K11. T3 split (K12 left, rows: address, hours, phone `+31 10 555 0142`, email `cellar@kurawine.example`); directions paragraph (tram 23 to Kelderplein — fictional); the Friday table note; a map-free text only.
9. **Delivery & Returns** (`page-delivery`): head K2. Prose + hairline rows with the fixed numbers (§7): Rotterdam delivery, NL & BE, age check 18+, corked-bottle replacement within 30 days, packaging returns.
10. **Journal** (`home.html` index, `archive.html`, `single.html`): head K8 "Notes". Index: first post ref-blog layout (3:4 image cols 1–5 + title/excerpt cols 7–12), the other two as rows with 1:1 thumbs 178px + date + title (hairline). Single: T2 placement (featured 2:3 left, second image 3:2 lower right), text column cols 8–12, date Karla 13px.
11. **Cart / Checkout / My account / Order confirmation**: solid header; page title x-large; `#33363E` order-summary column; inputs: transparent, 1px `rgba(226,220,208,.35)` bottom rule, Karla 15px; primary button solid `#E2DCD0`. Notices: 2px `#7A1E22` left rule. Works with WooCommerce off (no fatals; shop page shows static bottles + note).
12. **404 / search**: solid header, title x-large, text button "Back to the cellar >".

Journal posts (3 = the stories, fixed): 1 "Ten days on the rack: why we wait" (featured **K5**, second image K9), 2 "A Friday in the Jura" (featured **K6**, second image P1), 3 "Terraces at dusk: buying in the Douro" (featured **K7**, second image P4). Index page images: K8 head, K5, K6, K7 — each once.

---

## 6. Photos (18 = 12 scenes K1–K12 + 6 bottles P1–P6; photo, film grain; one at a time with `scripts/grok-image.sh`, Read each)
IMAGERY: **photo** (reference is photo-led film documentary). Generate exactly these 18; no others. ★ = used on Home.

STYLE (exact, every prompt):
`documentary film photograph, 35mm, visible fine film grain, Kodak Portra 160 look slightly faded, muted low-contrast palette of slate grey, umber, cork brown, deep wine and pale cream, cool green-grey shadows, soft dim natural light, small independent wine shop and cellar in a modern international European city, diverse adults, candid unposed moment, shallow depth of field, plain unlabelled bottles or blank cream paper labels, no text, no logos, no printed labels, no signage lettering, no brand marks, no Japanese elements`

| ID | Subject / composition | Ratio | Home | Pages (max once per page) |
|---|---|---|---|---|
| K1 ★ | Buyer's hand sliding a dark-green unlabelled bottle out of a wooden cellar rack, wrist and white shirt cuff, bottle and hand right of centre, lower-left third dark rack, dim warm cellar light | 16:10 (2000×1250) | KV slide 1 | Home; About head; The Case T2 (2:3 crop) |
| K2 ★ | Just-opened wooden wine case on a table, lid leaning, six bottles in straw, seen from 45° above, side light | 16:10 | KV slide 2 | Home; Shop split strip (4:5 crop); Shipments, The Case, Delivery heads |
| K3 ★ | Tasting table by a tall window at dusk (soft magenta-grey sky outside), two half-filled glasses of red, opened bottle, cork on the table | 16:10 | KV slide 3 | Home; Growers head; Visit pre-footer wash |
| K4 ★ | Ines (woman, 40s) standing in a narrow cellar aisle holding a bottle by the neck, face three-quarter turned away, racks either side | 2:3 | About (tall) | Home; About T2 |
| K5 ★ | Close-up: hands drawing a cork with a waiter's friend over a bare wooden counter | 3:2 | About (small) | Home; About T2; The Case T2; Journal post 1 |
| K6 ★ | Stony limestone vineyard slope in the Jura at dusk, rows running up the hill, magenta-grey sky | 3:2 | Shipments row 1 | Home; Shipments; Growers (Élise); Journal post 2; single product (Jura) |
| K7 ★ | Douro river terraces of vines at dusk, river below, low mist | 3:2 | Shipments row 2 | Home; Shipments; Growers (João); Journal post 3; single product (Douro) |
| K8 ★ | Burgenland grower's barrel hall: a woman (Martina, 50s) drawing wine with a glass pipette from a large old cask, side light | 3:2 | Shipments row 3 | Home; Shipments; Growers (Martina); Journal head; single product (Burgenland) |
| K9 ★ | Shop cellar doorway: a man (Tomas) carrying a stack of two wooden cases down stone steps, back light | 3:4 | Case split | Home; The Case split; About people split; Journal post 1 second image |
| K10 ★ | Shop counter: row of opened bottles with corks beside them, glasses, a chalk-free blank slate board, cream wall | 3:4 | Pouring (large) | Home; Shop head; Tastings split |
| K11 ★ | Shop front at blue hour from across a quiet street, warm window light, bottles on shelves inside, no lettering | 16:9 | Visit band (blurred) | Home; Visit head; pre-footer band on every page except Visit |
| K12 ★ | Friday table from above-side: several hands passing glasses along a long wooden table, candles, bottles | 21:9 (2000×857) | Friday | Home; Tastings head; Visit split |
| P1 ★ | Jura Savagnin bottle (clavelin-shaped, dark) standing on a slate shelf, blank cream label, cellar light, centred | 3:4 | Pouring | product 1; Growers (Élise, 2:3 crop); Journal post 2 |
| P2 | Jura Trousseau bottle (burgundy shape, pale glass showing light red) on the same slate shelf | 3:4 | — | product 2 |
| P3 ★ | Douro white bottle (bordeaux shape, clear glass, pale gold wine) on the shelf | 3:4 | Pouring | product 3 |
| P4 | Douro red bottle (bordeaux shape, dark glass) on the shelf | 3:4 | — | product 4; Growers (João, 2:3 crop); Journal post 3 |
| P5 ★ | Burgenland Blaufränkisch bottle (tall dark glass) on the shelf | 3:4 | Pouring | product 5; Growers (Martina, 2:3 crop) |
| P6 ★ | Grüner Veltliner bottle (tall flute, pale green glass) on the shelf | 3:4 | Pouring | product 6 |

### Per-page image map (binding)
| Page | Images (each once) |
|---|---|
| Home | K1 K2 K3 · K4 K5 · K6 K7 K8 · K10 P1 P3 P5 P6 · K9 · K12 · K11 |
| Shop | head K10 · split strip K2 · product images P1–P6 · pre-footer K11 |
| Single product | its P image · its region photo (K6 / K7 / K8) · related bottles' P images · pre-footer K11 |
| Shipments | head K2 · rows K6 K7 K8 · pre-footer K11 |
| Growers | head K3 · Élise T2: P1 (2:3 crop) + K6 · João T2: P4 (2:3 crop) + K7 · Martina T2: P5 (2:3 crop) + K8 · pre-footer K11 |
| The Case | head K2 · split K9 · T2 K1 (2:3 crop) + K5 (3:2) · pre-footer K11 |
| Tastings & Club | head K12 · split K10 · pre-footer K11 |
| About | head K1 · T2 K4 + K5 · people split K9 · pre-footer K11 |
| Visit | head K11 · split K12 · pre-footer band K3 (instead of K11) |
| Delivery & Returns | head K2 · pre-footer K11 |
| Journal index | head K8 · posts K5, K6, K7 |
| Journal single | featured (K5/K6/K7) 2:3 crop + second image 3:2 crop (post 1: K9, post 2: P1, post 3: P4) · pre-footer K11 |
Total generated: **18** (K1–K12, P1–P6). No cutouts. Each ≤300 KB, ≤2000px, webp; one readme line each (AI-generated, CC0). Regenerate on any text, logo, printed label, melted face, odd hands, saturated colour or style drift.

---

## 7. Fixed numbers (identical on home, inner pages, footer, product data and all five languages)
- Founded **2014**, Kelderstraat 9, 3011 KD Rotterdam. Phone +31 10 555 0142, cellar@kurawine.example.
- Hours: **Wed–Sat 12:00–20:00, Sun 12:00–17:00, closed Mon–Tue.** Friday case opening **18:00**.
- Shipments: **4 a year** (Feb, May, Sept, Nov); this autumn's three: **Jura** (arrived 12 Sept, 40 cases), **Douro** (26 Sept, 36 cases), **Burgenland** (10 Oct, 30 cases). Each rests **10 days** at **13 °C** before tasting. Tasted by **three**: Ines, Tomas, Ruth.
- People (7): **Ines Varga** (founder, buyer), **Tomas Ekwueme** (cellar and deliveries), **Ruth Delacourt** (shop and tastings), **Sam Okoro** (Saturday counter, club), growers **Élise Gérin** (Maison Gérin, Jura), **João Serra** (Quinta da Serra Velha, Douro), **Martina Halbmayr** (Weingut Halbmayr, Burgenland).
- Bottles (6, WooCommerce simple products, 75 cl):
| # | Name | Grower | Region | Price | Image |
|---|---|---|---|---|---|
| 1 | Savagnin Ouillé 2021 | Maison Gérin | Jura | €36 | P1 |
| 2 | Trousseau "Les Graviers" 2022 | Maison Gérin | Jura | €31 | P2 |
| 3 | Douro Branco 2023 | Quinta da Serra Velha | Douro | €19 | P3 |
| 4 | Douro Tinto 2021 | Quinta da Serra Velha | Douro | €27 | P4 |
| 5 | Blaufränkisch "Kogl" 2022 | Weingut Halbmayr | Burgenland | €26 | P5 |
| 6 | Grüner Veltliner 2023 | Weingut Halbmayr | Burgenland | €18 | P6 |
Categories: Jura, Douro, Burgenland. Tags: white, red, skin-contact-free, organic-farmed. Featured on home: 1, 3, 5, 6.
- Price list (Tastings & Club page, 6 rows; the same values wherever mentioned):
| Item | Detail | Price |
|---|---|---|
| Tasting flight | three pours from the open case, Wed–Sun | €14 |
| Friday case opening | a seat at the table, five pours, 18:00 | €22 |
| Half case, merchant's pick | 6 bottles from the current shipments | €118 |
| Full case, merchant's pick | 12 bottles from the current shipments | €224 |
| Shipment Club | one 6-bottle case each shipment (4 a year), pause any time | €112 per case |
| Delivery | Rotterdam free over €100, otherwise €8; NL & BE €12 | from €0 |
- Delivery: Rotterdam same or next day (Wed–Sat); NL & BE 2–3 working days; ID check 18+ on delivery; corked or faulty bottle replaced within **30 days**.
- Stories (3): the three journal posts in §5.
- Process (4 stages): Arrives sealed → Rests ten days → Tasted by three → Opened on Friday.

---

## 8. Scroll effects (sp-scroll; 3 effects + hero CSS motion; hero has no reveal)
Copy `pipeline/assets/sp-scroll/` unchanged into `assets/`; theme `:root` overrides only variables: `--sp-dur: 1.5s; --sp-ease: cubic-bezier(.165,.84,.44,1); --sp-dist: 24px;` (ref data-scroll-trigger "top": 8% rise, 1.5s, same curve, token (g); 8% of a block exceeds the 30px cap, so 24px).
| Effect (class) | Where | Source (asa-ban) | Trigger / time / easing |
|---|---|---|---|
| `sp-reveal sp-reveal--up` + parent `sp-stagger` | About text column paragraphs; Shipments text columns (each row's text group); Pouring 2×2 grid (on the grid container's children: the 4 product items are not a horizontal scroller, so items get the class); `kw-case` row grid; Friday text; Visit rows group (`sp-stagger` on the rows container, rows `sp-reveal--up`) | `data-scroll-trigger="top"` IO rootMargin 0 0 -20% 0 | sp-scroll IO (threshold .01), 1.5s, `cubic-bezier(.165,.84,.44,1)`, stagger .12s steps |
| `sp-reveal sp-reveal--mask` | About K4 and K5; Shipments K6/K7/K8 figures; Pouring K10; Case K9 (on the figure, not the column); inner T2 images | `data-scroll-trigger="mask"` alpha-mask 5s `cubic-bezier(.16,1,.3,1)` | sp-scroll mask: gradient mask top→bottom, 1.2s ease-out (fixed in sp-scroll.css; do not edit) |
| `sp-parallax` | **KV** `kw-kv` (layer `.kw-kv__slides`, `--sp-par: 10%`, mobile `6%`) and **Visit band** `kw-visit` (layer = K11 image, `--sp-par: 6%`, mobile `4%`); inner page heads `kw-pagehead` `--sp-par: 8%` (mobile 5%) | GSAP ScrollTrigger image parallax, scrub 3, y 0 → −height (g) | CSS `animation-timeline: view()`; IO + translate3d fallback in sp-scroll.js; static under reduced-motion / `?sp-static` / editor |
- KV slide cross-fade + zoom: CSS keyframes only (see Key visual concept), not sp-*, not a reveal; static K1 under `html.sp-no-motion`, reduced-motion, no-JS and in the editor.
- Not used: blur-to-sharp, glyph rise, pinned horizontal track (not in sp-scroll; not allowed). No reveal on price table, forms, WooCommerce templates, legal text, KV.
- Count: `.sp-reveal` ≤60% of home blocks' elements rule → at most ~20 reveal elements on home; KV has 0.
- Parallax validation: `check-parallax.mjs` must show layer shift ≥6px on desktop and mobile, 0 under reduced motion; ≥3 reveals hidden before entering.

## 9. Responsive rules
- 390px first screen: no vertical text, no absolutely positioned labels or text; H1 and info bar in flow (flex end); info bar 3 stacked lines; header 64px.
- Vertical titles only ≥782px; horizontal caps line above the photo below that.
- T2 scattered and T3 split stack as described; no overlap at any width; no horizontal overflow at 390 and 1280 (the 50/50 photo bleeds with `margin-right: calc(50% - 50vw)` only inside an `alignfull` block, never wider than the viewport).
- Price list (Tastings & Club, and any table): at ≥782px **full container width** (`alignwide` 1320 max, `width:100%`, `table-layout:auto`), 3 columns (item Fraunces 15px/500, detail 15px muted, price right-aligned, `white-space:nowrap`, min-width 9ch, tabular nums); hairline rows 1px `rgba(226,220,208,.2)`, row padding 22px 0. Checked at 800 and 1280: price column fully visible. **<782px every table stacks**: each row a block (item / detail / price on its own line, price left-aligned), no horizontal scroll. WooCommerce cart table uses Woo's stacked mobile layout styled the same.
- Product grids: 2×2 on home ≥782; 1 column <600 (2 columns 600–781).
- Images ≤2000px, `sizes` set; KV uses `fetchpriority=high` on K1 only.

## 10. Home acceptance checklist
1. First screen = K1 edge-to-edge under a transparent 90px header, H1 (2 lines, ≥4.25rem at 1440, Fraunces 300) bottom-left, info bar with 3 items on the bottom edge; nothing else. `?sp-motion`: K1 → K2 → K3 cross-fade every 5s with 3s fades, slow zoom visible; `?sp-static`: K1 only, still.
2. Saturated share on first screen ≤15% (target ≤10%); colours = §2 (`#282B33` ground, `#33363E` sections, `#E2DCD0` text, 煤竹 `#6A5A48` only as the Visit wash and small rules, wine `#7A1E22` ≤2%).
3. T2 scattered About visible: 2:3 left (≈33%), 3:2 right lower (≈23%), text column right of centre ≤500px, empty dark space between.
4. Three shipment rows alternate sides; each 3:2 photo has its vertical region title on its right edge at 1440 (horizontal at 390).
5. Pouring block: big 3:4 photo left + 2×2 bottles with prices from §7; links go to real WooCommerce products; add-to-cart → checkout works.
6. T3 split: half-bleed K9 photo touching the viewport edge, 2×2 hairline rows with ">".
7. Visit band: blurred K11 under the umber wash, parallax moves (≥6px), 2-col hairline rows with ">" and the fixed hours/address.
8. Block order equals §4 and differs from Azuke, Nagi, Kama, Mame per the table; no price table, FAQ, cards with pills, sticky sections, marquee, team grid, step grid, timeline on home.
9. ≥8 photo positions (16), no image twice on the page, no text/logo/label lettering in any photo.
10. Fonts: Fraunces + Karla Latin, Noto Serif TC/JP for zh-TW/ja, loaded via theme.json fontFace, identical in editor (check-editor-fonts.mjs passes).
11. auto-gates (`1 1` home mode) pass at en; check-parallax passes (KV + Visit band).
12. English home ≥300 words, ≥3 narrative paragraphs; numbers equal §7.

## 11. Similarity target (≈80%) — 相似度對照表
| 維度 | 參考站數值 (token) | 本主題數值 |
|---|---|---|
| Page ground | `#282B33` ~75–80% (a) | `#282B33` ~62% + `#33363E` 14% = 76% |
| Section ground | `#33363E` (a) | `#33363E` identical |
| Text | `#DAD6CE` (a) | `#E2DCD0` (+3% L) |
| Muted | `#8C8C8C` 13px ls 1.3px (a)(b) | `#94918A` 13px ls 1.3px |
| Mid wash | `#7C8A91` ~5%, blurred photo (a) | `#6A5A48` 82% over blurred K11, ~8% (row 煤竹; reason §2) |
| Accent | `#6C030B`–`#C8161D`, seal + photo (a) | `#7A1E22`, seal + wine in photos, ≤2% |
| Hairlines | 1px rgba(218,214,206,.2) (a)(d) | 1px rgba(226,220,208,.2) |
| First-screen saturation | slide 1 ≈72%, others 1–5% (a) | all slides ≤10% (quality gate) |
| Body type | Lusitana 15px/25.5 ls .75px 400 (b) | Fraunces 15px/25.5 ls .05em 400 |
| Section label / catch | 20px/600 lh 25.5 / 34 (b) | 20px/500 lh 1.7 (34px) |
| Vertical title | vertical-rl 20px/600 ls 6px, pl 20px (b)(f) | vertical-rl Fraunces 20px/500 ls 6px, gap 20px (≥782) |
| Display | max 20px (b) | KV H1 4.5rem, page titles 4.25rem (rule ≥4.25rem); sections stay 20px |
| Header | 90px, pad 40px, transparent on KV, 2-hairline menu 50px (c) | 90px, pad 40px, transparent on KV/heads, 2 hairlines 36px |
| Container | padding 0 60px, 1320 at 1440, 12 col (c) | identical |
| Section padding | 230 / 210 (c) | 230 / 210 (About, Shipments); 160 others; mobile 112/96 |
| Catch → body | 90px (c) | 90px (mobile 40px) |
| Footer padding | 210 100 0 50 (c) | identical |
| Radius / shadow | 0 / none (d) | 0 / none |
| Button | text + ">" 1px bottom rule, 120px, pb 10px (d) | identical |
| Rows | 69–79px, pb 20px, ">" 6px right (d) | 72px, pb 20px, ">" Karla 13px right |
| KV photo | full-bleed 1872×1170 scaled 130% (e) | full-bleed, layer scale 1.18 + slide zoom 1→1.1 |
| About photos | 2:3 477px @x=60 (33%); 3:2 329px right (23%), +140px lower (e) | identical ratios, columns and offsets |
| Service photo | 3:2 539×359 (~37%) + vertical title (e) | 3:2 cols 1–5 (~37%) + vertical title |
| Company split | 50/50, photo 713×941 (3:4) full height (c)(e) | 50/50, K9 3:4 full height, bleeding to edge |
| Blog | 3:4 528×702 left + 3:2 + 1:1 178px (e) | Pouring 3:4 left + 3:4 bottles; Journal 3:4 + 1:1 178px |
| Mask reveal | alpha mask 5s cubic-bezier(.16,1,.3,1) (g) | sp-reveal--mask 1.2s ease-out (sp-scroll fixed) |
| Text reveal | translateY 8%, 1.5s cubic-bezier(.165,.84,.44,1), IO −20% (g) | sp-reveal--up 24px, 1.5s same curve, IO |
| KV slider | fade 5000/3000 cubic-bezier(.25,1,.5,1), zoom 10s linear (g) | identical values, CSS keyframes |
| Parallax | ScrollTrigger scrub 3, y 0→−h (g) | sp-parallax 10% KV, 6% Visit, 8% heads |
| Header bg | .3s cubic-bezier(.215,.61,.355,1) (g) | identical |
| Imagery | film documentary, muted, grain, cool-green shadows, dusk magenta (e) | identical direction (STYLE §6) |
Photos and copy are our own; no asa-ban images, text, seal or logo.
