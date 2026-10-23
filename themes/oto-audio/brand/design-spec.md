# Oto Audio: design spec (stage 1, binding for implementation)

Slug `oto-audio`, online hi-fi shop for headphones, amplifiers, DACs and speakers, with a listening room. Type **store**: WooCommerce required, checkout must work; the theme must still render without WooCommerce. Row b7-13: archetype split-screen, hero photo-left-text-right, first screen top-bottom halves, page structure **comparison-table**, nav top-bar, real photography, palette 煤竹色 `#6F5A43` as the one muted accent, fonts Newsreader + Public Sans.

References (S5-Style, never used before, see `reference.md`, numbers in `reference-tokens.md`, cited below as `tok(a)`…`tok(g)`):
- **R1 = CAMITA by MORITA, https://camitabox.com** (main: structure, photo-left bleed, spread nav, line drawings, numeral chips).
- **R2 = Luci KIWA series, https://luci.co.jp/led/en/pickup/kiwa** (ink ground, light serif, product trio, crosshair frame, hollow-circle labels, motion, parallax band).

Borrow structure, technique, numbers and colour relationships only. No copy, photos, logos or whole-page layouts from R1/R2. Also do not reuse anything from the in-repo audio themes `hibiki-records` and `oto-radio`.

Fixed brand facts (every page and all five languages): **Oto Audio**, founded **2012**, shop and listening room at **Pelgrimsgang 14, 3011 Rotterdam, Netherlands** (fictional address). Currency **EUR (€)** in every language, no converted prices. Full number list in section 8.

---

## 1. Signature techniques (three, all obvious at a glance)

### T1. Photo-left bleed with a heading straddling the photo edge (R1-a + R1-b, `tok(c)` `tok(e)` `tok(f)`, `ref/camita-first.png`)
- **Reference:** under a 79 px header whose five plain-text nav items are spread across the full width (first at the left gutter, last at the right), one photo starts 30 px under the header, flush to the **left edge** of the window, 1088×700 at 1440 (**75.5% of the width**, aspect 1.554, radius 0). The remaining right 24.5% is white. The wordmark sits low (≈ 82% of the photo height) and **starts about 60 px inside the photo**, so it straddles the photo's right edge; a small mark sits higher (≈ 35%). A tiny caption runs vertically down the far right edge.
- **Home (block 1, `front-hero`), desktop ≥ 1024 px, at 1440×900:**
  - Header 80 px, white. Nav row (R1-b): seven items spread with `justify-content: space-between` from x 24 to x 1416 (gutter 24 px, R1 22): `Oto Audio` (wordmark, Newsreader 400 1.5rem, links home) · Shop · Compare · Listening room · Services · About · `Cart (0)`. Items Public Sans 300 **1.5rem** (24 px; R1 uses 37.5 px, reduced because we have seven items), ls 0.03em, ink, no uppercase. Current item: 1 px ink underline, offset 6 px (R1). Nothing else in the bar (no button, no search).
  - Photo **S1** in `figure.oa-split__photo.sp-parallax` (`--sp-par: 6%`): x 0, y 110 (30 px under header), width **75.5%**, height `clamp(420px, calc(100svh - 290px), 700px)` (= 610 at 900 tall → aspect 1.78; 700 cap = R1 aspect 1.55 on tall screens), `object-fit: cover`, radius 0.
  - **H1 straddles the edge:** "Listen / first." (two lines, forced `<br>` in en; other languages see section 3) Newsreader 300 **4.75rem** (preset `huge`), lh 1.1, ls 0.01em, ink `#16160E`. Positioned absolutely inside the hero grid (desktop only): `left: calc(75.5% - 88px)`, bottom edge at 80% of the photo height. The 88 px that overlap the photo must fall on S1's pale plaster wall (S1 art direction, section 7); if the delivered photo is darker there, regenerate S1, do not drop the straddle and do not add a white box behind the text.
  - Small mark (R1 Λ Λ at 35%): at 30% of the photo height in the right column, `left: calc(75.5% + 32px)`: 10 px hollow circle (1 px `#6F5A43`) + "Rotterdam · since 2012" Public Sans 300 0.8125rem ls 0.05em.
  - Under the H1 in the right column (width 300 px, left `calc(75.5% + 32px)`): one sentence Public Sans 300 1rem lh 1.7 "Headphones, amplifiers and speakers, chosen by ear in our listening room and sent across the EU." then a text link "Book a listening hour →" (1 px underline in accent `#6F5A43`, offset 5 px).
  - Vertical caption (R1): far right edge (`right: 12px`), top aligned with the photo, `writing-mode: vertical-rl`, Public Sans 400 0.6875rem (11 px, R1 11.25), ls 0.03em, `#5D5D58`: "Oto Audio — hi-fi shop and listening room, Rotterdam". **Desktop only (≥ 1024).**
  - Bottom half = ink strip (see 4.1).
- **Below 1024 px (no overlap, no absolute text):** photo full width (bleeds both sides), aspect 4:3 at < 600, 16:10 at 600–1023; then H1 in normal flow left-aligned in the 20 px (mobile) / 40 px (tablet) gutter, mark line and sentence below it. Vertical caption `display:none`. Nav collapses to wordmark left + `Cart (0)` + text button "Menu" right (overlay menu, ink ground).
- **Must not be diluted:** photo flush to the left window edge (no left margin), ≥ 72% width on desktop, radius 0; the heading physically overlaps the photo by ≥ 64 px on desktop; the nav items stay spread across the full width (not grouped right); vertical caption present on desktop.

### T2. Product trio on a white band between ink sections (R2-a, `tok(c)` `tok(e)` `tok(f)`, `ref/luci-sheet.png` row 2 right)
- **Reference:** after an ink section, a white band holds three portrait cards **427×576 (3:4) with a 20 px gap** inside 60 px gutters. Each card is a full-bleed product photograph with the product name at the foot (left) and a **40 px round outline "+" button** at bottom-right. Below each card: the name in thin brackets `| name |`, a one-line description, a 165×42 outline pill "View detail". Then ink again.
- **Home (block 5, `front-trio`) "One room, three boxes":** white `#FFFFFF` alignfull band, padding 160 px top/bottom, content 1320 px (60 px gutters, R2). Hollow-circle label + heading (section 3 type). Grid 3 columns, gap **20 px**, each card `aspect-ratio: 3/4` (≈ 427×569 at 1440), radius 0, image `object-fit: cover`: **PA40**, **PD2**, **PS5**. Inside each card, 24 px from the bottom-left: product name Newsreader 300 1.5rem ink (the photo's plinth area is pale, so ink reads); bottom-right 24 px: 40 px circle, 1 px ink border, "+" 16 px 1 px stroke centred; whole card is the link. Under the card (gap 20): `| Oto A40 |` Public Sans 300 0.875rem ls 0.05em `#464641` centred; one line description 0.875rem `#464641` centred; price Public Sans 400 1rem ink centred; pill "View detail" 165×42, radius 21 px, 1 px ink outline, transparent fill, 0.9375rem, centred. Hover: card image `scale: 1.03` .5s ease-out (R1 hover), "+" circle fills ink with white "+" (.3s `cubic-bezier(.22,1,.36,1)`, R2 hover).
- The section above (block 4) and the band after (block 6) are ink/photo, so the white band visibly sits between dark sections like R2.
- **Mobile:** one column, cards full width minus 40 px, aspect stays 3:4; gap 40 px between card groups. Tablet 2 columns (third card centred alone is not allowed; use 1 column below 782).
- **Must not be diluted:** 3:4 portrait cards, gap 20 px (not 32+), radius 0, the round outline "+" at bottom-right of each card, bracketed name under the card, white band directly after an ink section.

### T3. Crosshair frame around the comparison table on ink (R2-b, `tok(a)` `tok(d)` `tok(f)`, `ref/luci-sheet.png` row 2 middle)
- **Reference:** on the near-black ground `#16160E`, a three-column feature text block is framed by **1 px `#5D5D58` corner brackets** (L-shapes, arms ≈ 40 px) at its four corners and **"+" crosshair marks (arms ≈ 40 px)** where the column boundaries meet the top and bottom frame lines and the row line. Text `#E8E8E7`, light weight, centred per column.
- **Home (block 4, `front-compare`) "Three headphones, side by side":** ink `#16160E` alignfull, padding 160 px. Heading block on ink (hollow circle `#A8917A`, label + heading `#E8E8E7`). Then `div.oa-cross` (content 1320, padding 64 px on all sides) holding the headphone comparison table (section 8.2) with four columns: label column 22% + three product columns 26% each.
  - Corner brackets: four L-shapes at the `.oa-cross` corners, arms **40 px**, 1 px `#5D5D58` (implement with `::before`/`::after` on `.oa-cross` and on an inner `.oa-cross__in`; no images).
  - Crosshairs: a "+" (40 px × 40 px, 1 px `#5D5D58`) centred on each product-column boundary at the top frame line and at the bottom frame line (4 boundaries × 2 = 8 marks), plus one "+" at each boundary on the line under the header row (4 marks). Use absolutely positioned `span.oa-cross__plus` elements (aria-hidden) placed by `left: 22% / 48% / 74% / 100%` of the inner width; no clip-path, no images.
  - Table: header row = product thumbnail (3:4, 120×160, **PH1 / PH2 / PP7**, radius 0) + name Newsreader 300 1.5rem `#E8E8E7` + price Public Sans 400 1rem; body rows Public Sans 300 1rem lh 1.6, `#E8E8E7`, row label `#8B8B87` 0.875rem ls 0.05em; row rules 1 px `#3E3A39`; cells centred in product columns (R2 centres), label column left. No zebra, no fills, no shadows.
  - Under the frame: text link `#E8E8E7` "Compare amplifiers and speakers →" to `/compare/`.
- **Must not be diluted:** ink ground (not grey, not stone), brackets and plus marks visible on desktop (1 px `#5D5D58`, 40 px arms, not shortened to 12 px), no table fills, light weight text.
- **Mobile (< 782):** the table becomes three stacked product blocks (thumb 96×128 left + name/price right, then `dl` rows "Label — value", label `#8B8B87`). Corner brackets stay on the whole `.oa-cross`; plus marks `display:none`. No horizontal scroll.

### Supporting decorations (not counted as signatures, but required)
- **Hollow-circle section labels (R2-c):** every home section and every inner page head opens with a **10 px hollow circle (1 px stroke)** + 10 px gap + label in Public Sans 300 **1.125rem** (R2 20 px) ls 0.05em, no uppercase. Circle stroke `#6F5A43` on light grounds, `#A8917A` on ink.
- **Line-drawn category icons with numeral chips (R1-c, block 3):** four SVG line drawings (headphones, amplifier, DAC, speaker), 1.5 px ink strokes, `fill:none`, each drawn inside a 130×130 box, captions centred under them; the key number in each caption sits on an **ink chip** (`background:#16160E; color:#fff; padding: .1em .2em`, R1 highlight chip).

### Continuation to inner pages (T1 on all page heads; T2 and T3 on at least four inner pages each)
Inner page head = **small T1**: photo left bleed **62%** width, height `clamp(320px, 36vw, 540px)`, title (Newsreader 300 `clamp(2.75rem, 4.6vw, 4.25rem)`, preset `xx-large` cap) straddling the photo edge by 72 px with bottom at 80% of the photo, hollow-circle label above the title, one-sentence intro under it in the right column, vertical caption with the page name on the far right (desktop). Same mobile rules as home.

| Page | T1 head (photo) | T2 trio | T3 crosshair frame |
|---|---|---|---|
| Shop (`archive-product`, `taxonomy-product_cat`, `product-search-results`) | S9 | the whole product grid is built from T2 cards (3:4, gap 20, round "+", bracketed name); first row (PH1, PA10, PS8 by menu_order) labelled "Staff picks" | — |
| Single product (`single-product`) | — (gallery instead, see 4) | "Pairs well with" trio (related/upsells, 3 cards) | spec table of the product framed with brackets + plus marks on an ink panel |
| Compare (`page-compare`) | S4 | — (all product images already appear as table thumbnails) | **all three comparison tables** (headphones, amplifiers & DAC, speakers) |
| Listening room (`page-listening-room`) | S3 | "On the demo shelf" trio PP7, PS5, PD2 | the four-row "How a listening hour works" framed on ink |
| Services & prices (`page-services`) | S5 | — | price list framed with corner brackets on ink (plus marks only at the frame's top/bottom of the price column boundary) |
| About (`page-about`) | S1 (crop on the armchair side) | — | four facts with ink numeral chips (2012, 7 people, 8 house products, 60-minute hour) framed |
| Journal (`home.html`, `archive.html`, `single.html`) | S7 (index/archive); single = featured image as T1 head | — | — |
| Shipping & returns (`page-shipping`) | S10 | — | four fixed numbers framed on ink (€150, 30, 10, 2) |
| Contact (`page-contact`) | S9 | — | — |
| Cart / Checkout / My account / Order received | small hollow label + heading only (no photo) | empty cart: trio PH2, PD2, PS5 | order summary / cart totals in a bracket frame on stone `#F4F3F0` (brackets `#5D5D58`) |

T2 appears on Shop, Single product, Listening room, Cart (4). T3 on Single product, Compare, Listening room, Services, About, Shipping, Cart/Checkout (7). T1 on all content pages.

---

## 2. Colour (R2 relationship + R1 white, row accent)

| Role | Hex | Source token | Use | Share |
|---|---|---|---|---|
| Ground | `#FFFFFF` | R1 body bg `tok(a)` | page ground, header, trio band, services | ~50% |
| Stone | `#F4F3F0` | planned stone `tok(a)` (R2 white band, −4% L) | stories band, cart totals, product gallery ground | ~8% |
| Ink | `#16160E` | R2 ground `tok(a)` (exact) | hero bottom strip, compare, room, footer, mobile menu; all text on light | ~30% as bands |
| Ink panel | `#2F2F27` | R2 card bg | spec panel on single product, hover of rows on ink | ≤ 2% |
| Hairline on ink | `#5D5D58` | R2 hairlines | crosshair brackets/plus marks, dividers on ink | lines |
| Row rule on ink | `#3E3A39` | R2 `#3E3A39` | table row rules on ink | lines |
| Text on ink | `#E8E8E7` | R2 body on ink | body and headings on ink | — |
| Meta | `#8B8B87` | R2 footer meta | table labels on ink, footer meta, dates | — |
| Desc | `#464641` | R2 desc on white | card descriptions, captions on white | — |
| Mid line | `#5D5D58` | R2 | vertical caption, hairlines on white (also `#E2E1DC` for row rules on white, derived) | lines |
| **Accent 煤竹色** | `#6F5A43` | row hex (R1/R2 have no accent; R1's only colour is in the photo) | hollow circles on light, link underlines, in-stock dot, sale badge text, focus ring, nav hover underline | **≤ 3%**, never a section or button ground |
| Accent on ink | `#A8917A` | accent +28% L for contrast on `#16160E` | hollow circles and link underline on ink | < 0.5% |

- Contrast: ink on white 18.9:1; `#E8E8E7` on ink 15:1; `#8B8B87` on ink 5.3:1; accent `#6F5A43` on white 6.6:1 (fine for links).
- Not beige-led: white leads; stone only for the stories band and totals. Not a recent main colour: Ito `#3F5E4A`, Kaiten `#8A4B3A`, Hoshi `#6B6A3E`, Mochi `#B8973F`; ours is a greyed brown used on hairlines only and the big contrast comes from R2's ink bands.
- **First-screen saturated pixels:** R1 4.3%, R2 0–0.5% `tok(a)`. Hard cap (common) 15%; this spec's gate **≤ 8%**, target 3–6%. All saturation comes from S1 (walnut and oak, muted); no coloured UI on the first screen; the A10 thumbnail in the ink strip is dark metal.
- Buttons: primary = filled ink `#16160E`, white text, radius 21 px, height 42 px (add to cart, checkout, place order); secondary = R2 outline pill (1 px ink, transparent; on ink 1 px `#FFFEFA`). No accent-filled buttons.

---

## 3. Typography (fonts via theme.json fontFace; editor = front end)

Fonts (row): **Newsreader** (display, variable 300–400 with opsz, OFL, Production Type) and **Public Sans** (body/UI, variable 300–600, OFL, USWDS). Verify both OFL texts and ship `OFL-Newsreader.txt`, `OFL-PublicSans.txt` in `assets/fonts/`. Latin subset woff2 (latin + latin-ext for fr/de/nl names like Wójcik).
- **Loading (hard):** every family through `theme.json settings.typography.fontFamilies[].fontFace` (no `wp_enqueue_style` font CSS, no front-only `@font-face`). zh-TW **Noto Serif TC 400** and ja **Noto Serif JP 400** headings as fontFace entries whose `src` are subset woff2 files built from the theme's own zh-TW / ja strings (Hokuto 1.1.0 / Hada method; the shared subset script is broken, use the Hada replacement). CJK body stack `"Public Sans", "Noto Sans TC", "PingFang TC", "Microsoft JhengHei", sans-serif` / `"Public Sans", "Noto Sans JP", "Hiragino Sans", "Yu Gothic", sans-serif`, identical in editor and front. Any `:lang()` rule in style.css ⇒ copy `shared/inc/editor-lang.php` unchanged to `inc/editor-lang.php` and `require_once` it. `check-editor-fonts.mjs` must pass in en and zh-TW.
- Weights: R2 uses 300 throughout `tok(b)`: headings Newsreader **300**, body Public Sans **300** (≥ 1rem only), UI/prices Public Sans 400, never bold headings. CJK headings 400 (300 not subset). No uppercase anywhere (R1, R2).

| Preset | Size | Use | Source |
|---|---|---|---|
| `small` | 0.8125rem / lh 1.5 | meta, captions, table labels | R1 caption 11.25 px, R2 meta 13–14 px |
| `base` | 1.125rem / lh 1.6, ls 0.011em | body desktop (1rem / 1.7 below 782) | R2 body 18/28.8, ls 0.2 px |
| `medium` | 1.5rem / lh 1.4, ls 0.05em (Newsreader) | product names, item titles, nav | R2 item title 24 ls 1.2 |
| `large` | 2.25rem / lh 1.5, ls 0.05em | section headings on ink, card group titles | R2 concept 36/54 ls 1.8 |
| `x-large` | 2.625rem / lh 1.4, ls 0.05em | home section headings (`clamp(2rem, 3.4vw, 2.625rem)`) | R2 h-story 42 ls 2.1 |
| `xx-large` | 4.25rem / lh 1.1 | inner page titles (T1 small) | rule ≥ 4.25rem |
| `huge` | **4.75rem** / lh 1.1, ls 0.01em | home H1, footer wordmark | R1 wordmark scale; max ≥ 4.25rem ✓ |

- Label (hollow circle) 1.125rem Public Sans 300 ls 0.05em; nav 1.5rem Public Sans 300 ls 0.03em (R1 0.03em); buttons 0.9375rem ls 0.05em (R2 15–16 px ls 0.05em).
- zh-TW / ja: headings Noto Serif TC / JP at **0.75×** the English size (H1 3.5rem, section 2rem), body lh **1.85**, ls 0.04em. fr / de: `hyphens: auto` on body and headings, H1 may wrap to three lines (keep size).

---

## 4. Home page

### 4.1 First screen (1440×900) — top-bottom halves
- **Top half (y 0–720):** header 80 (spread nav) + T1: S1 photo-left bleed 1088×610 at y 110, H1 "Listen / first." straddling, mark line at 30%, sentence + link under H1, vertical caption. White elsewhere.
- **Bottom half (y 720–900, 180 px): ink strip `#16160E` alignfull**, padding 32 px 60 px, a 4-part row aligned centre: (1) hollow circle `#A8917A` + label "On the bench this month" `#E8E8E7`; (2) **PA10** thumbnail 3:2, 180×120, radius 0; (3) "Oto A10 desktop headphone amplifier" Newsreader 300 1.5rem `#E8E8E7` + one line Public Sans 300 0.875rem `#8B8B87` "Class A, 2 outputs, pairs with the P7 planar"; (4) price "€420" Public Sans 400 1.125rem + outline pill "See the A10" (1 px `#FFFEFA`, 165×42, radius 21) right-aligned at the right gutter.
- Forbidden on the first screen: table, form, search box, filled buttons in any colour, big centred heading, cut-outs.
- **Mobile 390×844:** header 64 (wordmark, Cart (0), Menu); S1 390×293 (4:3) full width; H1 3rem (en) two lines in normal flow at 20 px gutter; mark line; sentence; link. Nothing absolutely positioned over text, no vertical writing. Ink strip follows below the fold (stacked: label, thumbnail 100% × 3:2, name, line, price + pill).

### 4.2 Block order
Home section rhythm: white/ink → white → white → **ink** → **white (trio)** → photo band → **ink** → white → stone → white → ink footer. Vertical padding 160 px desktop (R2 120–200 `tok(c)`), 96 px mobile.

| # | Pattern | Purpose | Layout, photos, ground | Copy (en) |
|---|---|---|---|---|
| 1 | `front-hero` | mood + entry + featured product | **T1** S1 + ink strip with **PA10** (4.1). `sp-parallax` on the S1 figure (`--sp-par:6%`). No reveal. | H1 2 words + 18-word sentence + strip 20 words |
| 2 | `front-intro` | who we are, why listen first | White. R2 concept geometry `tok(c)`: text column **504 px** left, image **588×625** (0.94) right, gap 130 px, top-aligned, content 1222 centred. Label "A shop you can listen in", heading (x-large) "Most of what we sell, / you can hear first.", **3 paragraphs** (founded 2012 by Ines Vermeulen and Tomasz Wójcik; the 60-minute listening hour; a small house range of eight products tuned in the room). Image **S2** (listener in armchair), `figure.sp-reveal--wipe` (child img clipped). Text `sp-reveal--up`. | 130 words |
| 3 | `front-ways` | the four categories (R1-c) | White, continues block 2 (padding-top 0, 1 px `#E2E1DC` rule at top across content 1320). Four columns, each: 130×130 line icon (`figure.sp-reveal--wipe`, parent row `sp-stagger`), caption centred Public Sans 300 1.125rem lh 1.6, number on ink chip: "[3] headphones, / open, closed and planar" · "[2] amplifiers, / desk and room" · "[1] DAC, / made for both" · "[2] speaker pairs, / shelf and floor". Each column links to its category. No photos. | 30 words |
| 4 | `front-compare` | the core: side-by-side comparison | Ink. **T3**. Label "Compare", heading (large, `#E8E8E7`) "Three headphones, / side by side." + one 35-word paragraph ("we list sound character in words, measured at the same volume in the room"). Crosshair table with **PH1, PH2, PP7** thumbnails (8.2). Link to /compare/. Heading/paragraph `sp-reveal--up`; table no reveal. | 45 words + table |
| 5 | `front-trio` | the room system | White band. **T2** with **PA40, PD2, PS5**. Label "Room system", heading "One room, / three boxes." + 25-word line. Cards in `sp-stagger` > `sp-reveal--up`. | 25 words + 3 card lines |
| 6 | `front-band` | breathing photo + **main parallax** | **R2-e** band: alignfull frame height **480 px** (300 mobile), `div.oa-band.sp-parallax` `--sp-par:12%` (8% below 782). Moving layer `img.sp-parallax__layer` = **S3**, `position:absolute; inset:-25% 0; width:100%; height:150%; object-fit:cover`. Foreground (not in the layer): caption chip bottom-left 60 px / 32 px, ink `#16160E` ground, padding 10 px 14 px, `#E8E8E7` Public Sans 300 0.8125rem "The listening room, Pelgrimsgang 14 — open Tuesday to Saturday". | 10 words |
| 7 | `front-room` | how a listening hour works | Ink. Mirrored R2 concept: image **S4** 588×625 left, text 504 right, gap 130. Label "Listening room", heading "Bring your own music." + 40-word paragraph; then 4 rows (8.6) as a list: number Newsreader 300 1.5rem `#A8917A` "01" + title Public Sans 400 1rem `#E8E8E7` + one line 300 `#8B8B87`; 1 px `#5D5D58` rule between rows (rows, not a step grid). Hours line (8.5) and outline pill "Book a listening hour" (mailto). Text `sp-reveal--up`, rows in `sp-stagger`, image `sp-reveal--wipe`. | 110 words |
| 8 | `front-services` | prices of services | White. Label "Services", heading "Fixed prices for / the work around the music." Then the **price list (8.4)** full content width 1320. No reveal on the list. Note under it: "Home trial fee is credited when you buy." | 25 words + 7 rows |
| 9 | `front-stories` | stories from customers' rooms | Stone `#F4F3F0`. Label "Journal", heading "Rooms we have / listened in." Three posts (8.7 posts 1–3) in 3 columns gap 40: image **7:6** (R2 story 672×580) radius 0 = **S6, S7, S8**, date `#8B8B87` 0.8125rem, title Newsreader 300 1.5rem, 20-word excerpt. Row `sp-stagger`, cards `sp-reveal--up`. | 3×30 words |
| 10 | `front-visit` | visit / contact | White. **T1 mirrored**: photo **S9** bleeds to the **right** window edge, 62% width, aspect 1.55, radius 0; left column at 60 px gutter: label "Visit", heading "Pelgrimsgang 14, / Rotterdam." straddling the photo's left edge by 72 px (desktop only, over S9's pale wall), address, hours (8.5), phone, email, link "Directions →". Text `sp-reveal--up`. | 50 words |
| — | footer | | Ink `#16160E`, padding 120/60. Top: three link columns (Shop: categories; Visit: listening room, services, contact; About: about, journal, shipping & returns) Public Sans 300 1rem `#E8E8E7`; bottom row: wordmark "Oto Audio" Newsreader 300 **4.75rem** `#E8E8E7` left-aligned (R2 footer wordmark), meta `#8B8B87` 0.8125rem right ("© 2026 Oto Audio · Pelgrimsgang 14, 3011 Rotterdam"). Language switcher here. | — |

English home ≥ 250 words with narrative paragraphs in #2 (3), #4, #7 (≥ 3 paragraphs total); CJK home ≥ 500 characters.

**Home photo positions (15, no repeats):** S1 (hero) · PA10 (strip) · S2 (intro) · PH1, PH2, PP7 (compare) · PA40, PD2, PS5 (trio) · S3 (band) · S4 (room) · S6, S7, S8 (stories) · S9 (visit). PS8 and S5, S10 are not on the home page.

### 4.3 Comparison with recent homes
| # | Ito HR | Kaiten Skills | Hoshi Wealth | Mochi Pet | **Oto Audio** |
|---|---|---|---|---|---|
| 1 | hero: loop photo row + pill | hero: cut frame | hero: serif + sans over 2 photos | hero: 3 columns | **photo-left bleed 75.5%, heading straddling edge, ink product strip below** |
| 2 | services index | intro | letters | food finder | **intro: text 504 + near-square photo** |
| 3 | intro | course strip | prologue | concept mosaic | **four line-drawn category icons with ink numeral chips** |
| 4 | approach cards on blurred parallax | process wave band | partners dark band | box band | **ink comparison table in crosshair frame** |
| 5 | fixed fees list | prices | approach strip | subscribe | **white trio of 3:4 product cards** |
| 6 | people slate band | stories mosaic | families | interlude | **480 px full-bleed parallax band** |
| 7 | stories | interlude photo | meeting panel | nutrition desk | **listening hour: photo + 4 ruled rows on ink** |
| 8 | FAQ + contact | tutors | footer | stories | **service price list** |
| 9 | — | FAQ + contact | — | visit | **stories on stone (7:6 images)** |
| 10 | — | — | — | — | **visit: mirrored photo bleed right** |

Why not alike: no loop photo row, blurred card stack, wave band, sticky card on dark rows, three equal photo columns hero, finder, mosaic, people grid, FAQ. Oto leads with a featured product inside the first screen, puts a **comparison table** at the centre (row page_structure), and its shapes (left-bleed photo with an overlapping heading, 1 px crosshair brackets on ink, 3:4 cards with round "+") are unused by those four. Mochi's ink band and Hoshi's dark band are flat bands with cards/sticky items; ours is a framed table with hairline marks.

---

## 5. Inner pages (≥ 8 + WooCommerce templates)

Each content page: small T1 head → body → close line (hollow label + one sentence + link) → footer. No sidebar anywhere. Section padding 120 px desktop / 80 px mobile.

1. **Shop** (`archive-product`, `taxonomy-product_cat`, `product-search-results`): T1 head S9 "Shop / Eight pieces, / tuned in one room." Category text links row (All · Headphones · Amplifiers · DACs · Speakers; current = 1 px ink underline), result count + ordering right. Grid **3 columns, gap 20**, label "Staff picks" above the first row (menu_order: H1, A10, S8, then the rest), cards = T2 card (3:4 product photo on stone `#F4F3F0`, name at foot, round "+" = add to cart for simple products), under card: bracketed name, one-line "sound character" summary, price. Pagination as plain numbers. Without WooCommerce: a static 8-card grid from the pattern linking to `/shop/` and a note line.
2. **Single product** (`single-product`): two columns 7/5. Left gallery on stone `#F4F3F0`: main image 3:4 radius 0, thumbnails 4 across (gap 20). Right: hollow label = category, title Newsreader 300 2.625rem, price, short description (sound character in words), stock line with accent dot, quantity + "Add to cart" (filled ink pill), line "Free EU shipping over €150 · 30-day returns · 10-day home trial €25". Below: **T3 spec panel** — ink `#16160E` alignfull, the product's spec rows (same rows as its comparison table) in a 2-column table (label/value) inside the crosshair frame; then tabs (Description, Sound, Shipping); then **T2** "Pairs well with" trio (upsells/related, 3 cards).
3. **Compare** (`page-compare`, core page): T1 head S4 "Compare / Same room, / same volume." 60-word intro on how we listen (volume-matched, same tracks, notes in words). Three ink sections each with a **T3** framed table: Headphones (PH1, PH2, PP7), Amplifiers & DAC (PA10, PA40, PD2), Speakers (PS5, PS8; two product columns 39% each). Each table followed by 2 short "how to choose" paragraphs on white. End with the close line + link to Listening room (no trio on this page).
4. **Listening room** (`page-listening-room`): T1 head S3 "Listening room / An hour, / no hurry." Narrative 2 paragraphs (the room: 28 m², treated walls, two speaker pairs and all three headphones ready). **T3** framed four-row "How a listening hour works" on ink (8.6). Image S2 near-square beside a paragraph about bringing your own music. **T2** "On the demo shelf" trio PP7, PS5, PD2. Hours, address, booking by email/phone (mailto/tel links; no form required).
5. **Services & prices** (`page-services`): T1 head S5 "Services / The bench / behind the shop." Price list (8.4) in a **T3** bracket frame on ink (full width ≥ 782, price column right, nowrap). Three short service notes (home trial, placement visit, re-cabling and pads) with S8 (pads) 7:6 beside the third. Who does the work: Sofie Brandt (repairs), Lucas Moreau (placement), Tomasz Wójcik (bench).
6. **About** (`page-about`): T1 head S1 crop "About / Built around / a listening room." 3 narrative sections (2012 start in a former print shop; why a house range of eight; how we tune: listening, then measuring). **T3** framed facts row with ink numeral chips: "[2012] opened", "[7] people", "[8] house products", "[60]-minute listening hour". People (8.3) as a two-column text list (name Newsreader 1.25rem, role line, one sentence) — not a portrait grid. Image S9 7:6 between sections.
7. **Journal** (`home.html`, `archive.html`, `single.html`): T1 head S7 "Journal / Rooms, / records and repairs." Four posts (8.7): first post large (image 7:6 left 7/12, text right), then 3 in a row. Single: hollow label = category, title 3.5rem, date, featured image as the T1 left-bleed photo with the title straddling, text column 680 px.
8. **Shipping & returns** (`page-shipping`): T1 head S10 "Shipping / Packed in / Rotterdam." **T3** framed numbers on ink with chips: "[€150] free EU shipping over", "[30] days to return", "[10]-day home trial", "[2] years warranty on house products". Paragraphs: dispatch, delivery times, returns, home trial, warranty, speaker courier.
9. **Contact** (`page-contact`): T1 head S9 "Contact / Write, call / or drop in." Lines: address, phone, email, hours, people to ask (Yara Haddad for orders, Amara Nwosu for headphones). Link "Book a listening hour". No form required.
10. **Cart / Checkout / My account / Order received** (WooCommerce block templates `page-cart`, `page-checkout`, `order-confirmation`, my-account via page): hollow label + heading (xx-large, no photo); main column white; totals/summary column on stone `#F4F3F0` inside a bracket frame (corner brackets `#5D5D58` 40 px, no plus marks); buttons filled ink pill; notices with 1 px `#6F5A43` left rule. Empty cart: T2 trio PH2, PD2, PS5. Checkout must complete with the demo payment (cash on delivery / bank transfer) in the local test.
11. **404 / search**: hollow label + heading + link home.

---

## 6. Motion (sp-scroll; three effect types; hero has no reveal)

| Effect | sp class | Where | Reference (site, trigger, time, easing) | Our values |
|---|---|---|---|---|
| Fade-up + stagger | `sp-reveal sp-reveal--up`, parent `sp-stagger` | home #2 text, #4 heading, #5 cards, #7 text + rows, #9 cards, #10 text; inner page body text blocks and trio cards | R2, jQuery inview `.active`, .5s (features .7s, delay .3s +.1s), `cubic-bezier(.22,1,.36,1)`, 40 px | `--sp-dist: 28px` (≤ 30), `--sp-dur: .7s`, `--sp-ease: cubic-bezier(.22,1,.36,1)`; stagger steps from sp-stagger (.12s, R2 .1s) |
| Wipe | `sp-reveal sp-reveal--wipe` (clip on the child img/svg) | home #2 S2 image, #3 four line icons (parent `sp-stagger`), #7 S4 image; inner: T3 framed blocks' **heading only**, journal large image | R1 line draw: IO .5, 1s × len/400, step .2s, `cubic-bezier(.45,0,.55,1)`; R2 bar scaleX 1.2s and circle mask 2s `cubic-bezier(.22,1,.36,1)` | sp default 1.1s `cubic-bezier(.77,0,.175,1)`; on icons set `--sp-dur: 1s`, `--sp-ease: cubic-bezier(.45,0,.55,1)` (R1 exact) |
| Parallax | `sp-parallax` | **home #6 band (S3, main)**; home #1 hero S1 figure; inner T1 head photos (Compare, Listening room, About) | R2 band: image 960 high inside a 480 px overflow-hidden frame, margin-top −200 px, moves with scroll (≈ 200 px travel), linear | band: layer 150% of frame, `--sp-par: 12%` desktop (≈ ±86 px), `8%` < 782 (≈ ±36 px on 300 px frame); hero and heads: figure > img, `--sp-par: 6%` (within the 1.18 scale overflow) |

- Not used: R2 circle clip reveal (no sp equivalent; the 7:6 story images stay square-cornered), R1 KV crossfade slider, R1 Lenis, R1 fixed round badge (would cover the ink strip and cart; dropped). R2 KV blur-in may be done as a CSS-only load-in on the hero photo (opacity 0→1 + `filter: blur(20px)→0`, 2s `cubic-bezier(.2,.8,.2,1)`, only under `html.sp-js:not(.sp-no-motion)` and `prefers-reduced-motion: no-preference`); it is optional and must not hide the H1.
- Never on: hero text, comparison tables, price list, forms, legal text, WooCommerce templates' forms. Cart/checkout: no sp classes.
- Gates: `check-parallax.mjs` desktop + mobile (band ≥ 6 px, reduced-motion 0), ≥ 3 reveals hidden before entry, nothing transparent after scrolling to the end; screenshots with `?sp-static`.

---

## 7. Photos (18, Grok, one at a time, read each one)

STYLE (exact string on every prompt):
`documentary interior photograph, 35mm lens, soft natural window daylight, bright pale plaster walls and light oak floors, warm walnut furniture and matte black or dark grey hi-fi equipment, calm uncluttered modern European apartment or small shop, muted palette of off-white, stone grey, walnut brown and charcoal, low saturation, diverse adults when people appear, unposed quiet moment, no text, no logos, no brand names, no readable labels or dials with lettering, no Japanese elements, not a cut-out`

Photo direction: the row says low-key; the common rule asks high-key bright documentary. Resolution: bright daylight rooms (high-key walls) with dark equipment for contrast; the low-key mood of R2 comes from the ink bands, not from dark photos. Products are fictional designs (no real brand shapes copied, no logos). 0 cut-outs. Each ≤ 300 KB, ≤ 2000 px, one readme line per image (AI-generated, CC0).

| ID | Subject / composition | Ratio | Pages (each image at most once per page) |
|---|---|---|---|
| **S1** ★ | listening room: a pair of slim walnut floorstanding speakers and a grey fabric armchair, low walnut sideboard with an amplifier, seen from the left; **the right 20% of the frame is a plain pale plaster wall** (for the straddling H1) | 16:10, 2000×1250 | Home hero; About head (crop on armchair) |
| **S2** ★ | person (Black woman, 40s) in an armchair with open-back headphones, eyes closed, window light from left | 0.94 (1600×1700) | Home intro; Listening room body |
| **S3** ★ | wide room view late afternoon: speakers, record shelf without readable spines, rug, long shadows | 3:2, 2000×1333 | Home parallax band; Listening room head |
| **S4** ★ | two people (South Asian man, white older woman) at a long oak table with three headphones on stands, one listening | 0.94 | Home room; Compare head |
| S5 | workbench: hands soldering a headphone cable connector, magnifier lamp, tidy tools | 3:2 | Services head; Journal post 4 |
| **S6** ★ | small study ~14 m²: bookshelf speakers on stands either side of a desk, window | 7:6 | Home stories (post 1); Journal |
| **S7** ★ | evening apartment, person (East Asian man, 30s) on a sofa with closed-back headphones, city window with blurred lights | 7:6 | Home stories (post 2); Journal index/archive head; single post 2 featured image (the post 2 card on the Journal index uses PH2) |
| **S8** ★ | hands fitting a new ear pad onto a headphone on a cloth | 7:6 | Home stories (post 3); Services note |
| **S9** ★ | small shop interior by a street window: oak counter, headphones on stands, speakers on low shelves, daylight; left 20% pale wall | 3:2 | Home visit; Shop head; Contact head; About body |
| S10 | plain unprinted cardboard parcels and a wrapped speaker box on a packing table, tape, daylight | 3:2 | Shipping head |
| **PH1** ★ | Oto H1 Open: open-back over-ear headphone, walnut cups, grey fabric pads, on a pale stone plinth against warm grey plaster, front three-quarter view, centred, pale lower third | 3:4, 1200×1600 | Home compare; Shop grid; product |
| **PH2** ★ | Oto H2 Closed: closed-back headphone, matte black cups, same set | 3:4 | Home compare; Journal post 2 card; cart trio; product |
| **PP7** ★ | Oto P7 Planar: larger open-back planar headphone, dark grey grille, same set | 3:4 | Home compare; Listening room trio; product |
| **PA10** ★ | Oto A10: compact desktop headphone amplifier, dark grey aluminium, one knob, same set | 3:4 (strip crop 3:2) | Home first-screen strip; Shop grid; product |
| **PA40** ★ | Oto A40: integrated amplifier, black front, walnut side cheeks, same set | 3:4 | Home trio; product |
| **PD2** ★ | Oto D2: small USB DAC box, dark grey, same set | 3:4 | Home trio; Listening room trio; cart trio; product |
| **PS5** ★ | Oto S5: pair of walnut bookshelf speakers, grey grilles off, same set | 3:4 | Home trio; Listening room trio; cart trio; product |
| PS8 | Oto S8: pair of slim walnut floorstanding speakers (same model as in S1 is fine), same set | 3:4 | Shop grid; product |

★ = used on the home page (15 positions). Product prompt: `<product description>, standing on a pale stone plinth against a warm grey plaster wall, front three-quarter view, centred, generous space around it, pale lower third of the frame, ` + STYLE.

Per-page check: Home S1 PA10 S2 PH1 PH2 PP7 PA40 PD2 PS5 S3 S4 S6 S7 S8 S9 (no repeat). Shop: S9 + the 8 product images once each in the grid. Single product: its own image(s) + trio of three other products. Compare: S4 + the 8 product thumbnails once each. Listening room: S3, S2, PP7, PS5, PD2. Services: S5, S8. About: S1, S9. Journal index: S7 head + cards S6, PH2, S8, S5. Shipping: S10. Contact: S9. Cart (empty): PH2, PD2, PS5.

---

## 8. Fixed content and numbers (identical on every page and in all five languages)

### 8.1 Products (8, house range, WooCommerce simple products)
| # | Name | Category | Price | Image | One-line sound character |
|---|---|---|---|---|---|
| 1 | Oto H1 Open | Headphones | €349 | PH1 | airy and wide, light bass |
| 2 | Oto H2 Closed | Headphones | €299 | PH2 | close and warm, firm bass, keeps sound in |
| 3 | Oto P7 Planar | Headphones | €890 | PP7 | even and detailed, deep bass |
| 4 | Oto A10 Desktop Amplifier | Amplifiers | €420 | PA10 | quiet background, drives planars |
| 5 | Oto A40 Integrated Amplifier | Amplifiers | €1,290 | PA40 | relaxed, full, 2 × 40 W |
| 6 | Oto D2 USB DAC | DACs | €260 | PD2 | neutral, low noise |
| 7 | Oto S5 Bookshelf Speakers (pair) | Speakers | €780 | PS5 | open midrange for small rooms |
| 8 | Oto S8 Floorstanding Speakers (pair) | Speakers | €2,150 | PS8 | full range, for 20–35 m² |
Categories: Headphones (3), Amplifiers (2), DACs (1), Speakers (2). Featured: 4 (strip). Prices keep the € sign before the number in en; local formats per language in brand.md (de/fr `349 €`, `1.290 €` / `1 290 €`), same amounts.

### 8.2 Comparison tables (rows fixed; translate words, keep numbers)
- **Headphones** (H1 / H2 / P7): Type: open-back dynamic / closed-back dynamic / open-back planar · Driver: 50 mm / 40 mm / 90 mm planar · Impedance: 32 Ω / 24 Ω / 18 Ω · Weight: 290 g / 275 g / 420 g · Sound: airy, wide, light bass / close, warm, firm bass / even, detailed, deep bass · Leaks sound: yes / very little / yes · Best with: any phone or DAC / phone, night, travel / A10 or A40 · Price: €349 / €299 / €890.
- **Amplifiers & DAC** (A10 / A40 / D2): Role: headphone amplifier / integrated amplifier / USB DAC · Power: 1.2 W into 32 Ω / 2 × 40 W into 8 Ω / — · Inputs: 2 analogue / 3 analogue + phono / USB-C, optical · Outputs: 6.35 mm + 4.4 mm / speakers + 6.35 mm / RCA + 3.5 mm · Sound: quiet, controlled / relaxed, full / neutral, low noise · Best with: P7, H1 / S5, S8 / A10, A40 · Price: €420 / €1,290 / €260.
- **Speakers** (S5 / S8, pairs): Type: 2-way bookshelf / 3-way floorstanding · Drivers: 25 mm + 150 mm / 25 mm + 130 mm + 2 × 165 mm · Sensitivity: 86 dB / 90 dB · Room size: 10–20 m² / 20–35 m² · Sound: open midrange / full range, easy bass · Best with: A40 / A40 · Price: €780 / €2,150.

### 8.3 People (7)
| Name | Role |
|---|---|
| Ines Vermeulen | founder, buyer, hosts the listening room (since 2012) |
| Tomasz Wójcik | co-founder, bench technician, designs the A10 and A40 |
| Amara Nwosu | headphone specialist |
| Lucas Moreau | speaker placement visits |
| Daniel Reyes | digital: DACs and streaming set-ups |
| Sofie Brandt | repairs, re-cabling and pads |
| Yara Haddad | orders, shipping and returns |

### 8.4 Service price list (7 rows; table: service · duration/detail · price)
| Service | Detail | Price |
|---|---|---|
| Listening hour in the room | 60 minutes, by appointment | Free |
| Home trial, one headphone | 10 days, fee credited when you buy | €25 |
| Speaker placement visit | Rotterdam area, about 2 hours | €120 |
| Headphone re-cabling | cable and connectors included | €45 |
| Ear pad replacement | fitting, pads priced separately | €15 |
| Amplifier bench check and clean | 3–5 working days | €65 |
| Trade-in valuation | for any headphone or amplifier | Free |
**Price list layout (hard):** at ≥ 782 px the list is a real `<table>` at **100% of the content width** (1320 at 1440; never a narrow centred box), columns `auto / 32% / max-content`, price cell `white-space: nowrap; text-align: right; padding-right: 0`, numbers `font-variant-numeric: tabular-nums`, no horizontal overflow at 800 and 1280. Rows: name Public Sans 400 1.125rem, detail 300 1rem `#464641` (on ink `#8B8B87`), price Public Sans 400 1.125rem; 1 px rules `#E2E1DC` (on ink `#3E3A39`). **< 782 px: stacked** — each row becomes a block: name on line 1, detail on line 2, price right-aligned on line 2 (`display:grid; grid-template-columns: 1fr auto`), no table layout, no horizontal scroll. Same stacking rule applies to every comparison and spec table (see T3 mobile).

### 8.5 Place and hours
- Oto Audio, Pelgrimsgang 14, 3011 Rotterdam, Netherlands (fictional). Phone +31 10 555 0142, email hello@otoaudio.example.
- Listening room: **Tuesday–Friday 11:00–19:00, Saturday 10:00–17:00**, closed Sunday and Monday. Listening hours by appointment (walk-ins welcome when free).
- Online orders: dispatched **Monday–Friday**, within 1 working day for orders before 15:00.

### 8.6 Listening hour process (4 rows, same everywhere)
01 **Book an hour** — email or call; we hold the room for 60 minutes. · 02 **Bring your music** — phone, laptop or a USB stick; we also stream. · 03 **Compare side by side** — up to three headphones or two speaker pairs, volume-matched. · 04 **Decide later** — order online, or take one headphone home on a 10-day trial.

### 8.7 Journal posts (4) / stories
1. "Bookshelf speakers in a 14 m² study" (S6) — S5 speakers on stands, A40, placement visit by Lucas.
2. "Quiet nights above a tram line" (card image PH2 on Journal; S7 on Home) — H2 Closed for a light sleeper's partner. (Home card uses S7; Journal index uses S7 as head and PH2 as this card; the single post uses S7 as featured.)
3. "New pads, old favourites" (S8) — Sofie re-pads and re-cables a 15-year-old headphone; €45 + €15 + pads.
4. "How we compare in the listening room" (S5) — volume matching and why we write sound in words.
Dates 2026: post 4 = 12 June, post 3 = 3 August, post 2 = 9 September, post 1 = 2 October (home shows the newest three = 1, 2, 3).

### 8.8 Shop policy numbers
Free EU shipping over **€150**, otherwise **€9** flat (EU). Delivery Netherlands 1–2 working days, EU 2–5 working days; S8 floorstanders by courier, same rates. Returns within **30 days** (unused, original packing; return label free in NL). Home trial **10 days, €25** credited on purchase. Warranty **2 years** on the eight house products. Founded **2012**. No other amounts anywhere, in any language.

---

## 9. Responsive rules (hard)
- 390 px first screen: no vertical writing, no absolutely positioned labels or headings over text or photos; H1 in flow under the photo; no horizontal overflow (`html, body { overflow-x: clip }`).
- T1 straddle and vertical captions only ≥ 1024 px; between 782 and 1023 the photo is full width and text sits below.
- Price list: full content width and nowrap right-aligned price column at ≥ 782 (checked at 800 and 1280 by auto-gates); stacked < 782.
- Every table (comparison, spec, price, WooCommerce cart table) stacks < 782: no `overflow-x:auto` tables, no cut cells.
- Trio: 3 columns ≥ 1024, 2 at 782–1023 only for the Shop grid (trio sections switch to 1 column below 1024 to avoid a lone card), 1 below 782.
- Touch targets ≥ 42 px (pills 42 px tall).

---

## 10. Similarity table (target ≈ 80%)
| Dimension | Reference value (token) | Oto Audio |
|---|---|---|
| Ground | R1 `#FFFFFF` ~56% `tok(a)` | `#FFFFFF` ~50% |
| Dark ground / bands | R2 `#16160E` 50–76% `tok(a)` | `#16160E` exact, ~30% as bands (hero strip, compare, room, footer) |
| Text on ink / meta / desc | R2 `#E8E8E7` / `#8B8B87` / `#464641` | same |
| Hairlines / panels | R2 `#5D5D58`, `#2F2F27`, `#3E3A39` | same |
| Accent | none (R1 photo colour only) | `#6F5A43` row hex ≤ 3%, lines only (reason: row requires one muted accent) |
| First-screen saturation | R1 4.3%, R2 0–0.5% | gate ≤ 8%, target 3–6% |
| Display type | R2 serif-like display 300, ls 0.05em, no caps | Newsreader 300, ls 0.05em (0.01em on H1), no caps |
| Body | R2 18/28.8 (1.6) 300 ls 0.2 px | Public Sans 300 1.125rem / 1.6 ls 0.011em |
| Heading sizes | R2 42 / 36 / 32 / 24 px | 2.625 / 2.25 / — / 1.5rem (42 / 36 / 24 px) |
| Nav | R1 five plain items spread full width, 37.5 px, ls 0.03em, underline current | seven plain items spread full width, 24 px, ls 0.03em, underline current |
| Header | R1 79 px, photo 30 px below | 80 px, photo 30 px below (y 110) |
| Hero photo | R1 x 0, 75.5% width, aspect 1.554, radius 0 | x 0, 75.5%, aspect 1.55–1.78, radius 0 |
| Overlap | R1 wordmark starts ~60 px inside photo at ~82% height | H1 starts 88 px inside photo, bottom at 80% height |
| Vertical caption | R1 11.25 px, ls 0.03em, right edge | 11 px, ls 0.03em, right edge (desktop) |
| Gutters / container | R2 60 px, 1320 content | 60 px, 1320 |
| Concept columns | R2 text 504 + image 588×625, gap ~130 | 504 + 588×625, gap 130 (blocks 2 and 7) |
| Product cards | R2 427×576 (3:4), gap 20, round "+" 40 px, bracketed name, pill 165×42 r21 | 3:4 ≈ 427×569, gap 20, "+" 40 px, `| name |`, pill 165×42 r21 |
| Crosshair frame | R2 1 px `#5D5D58`, ~40 px arms, corners + plus marks | 1 px `#5D5D58`, 40 px arms, 4 corners + 12 plus marks |
| Section labels | R2 10 px hollow circle + 20 px label | 10 px hollow circle + 18 px label |
| Line icons + chips | R1 4 icons ~130 px, 1.5 px strokes, black numeral chip | 4 icons 130 px, 1.5 px, ink chip |
| Story images | R2 672×580 (1.16) | 7:6 (1.167) |
| Parallax band | R2 1440×480 frame, 3:2 image, ~200 px travel | 1440×480 frame, 3:2 image, layer 150%, ±86 px (≈ 173 px travel) |
| Radius / shadow | R1/R2 images 0, pills 21–24, no shadow | images 0, pills 21, no shadow |
| Reveal | R2 fade-up 40 px .5–.7s `cubic-bezier(.22,1,.36,1)`, stagger .1s | 28 px .7s same curve, stagger .12s |
| Draw / wipe | R1 1s, `cubic-bezier(.45,0,.55,1)`, step .2s | wipe 1s same curve, stagger .12s |
| Hover | R1 image scale 1.03 .5s ease-out; R2 .3s `cubic-bezier(.22,1,.36,1)` | same |
| Vertical rhythm | R2 120–200 px | 160 px home, 120 px inner |
Deliberate differences: serif display font (row), white leads instead of R2's ink-dominant page (row quiet palette + R1), accent added (row), nav has seven items, no fixed round badge, no circle mask.

---

## 11. Home acceptance checklist (stage-1 review compares against this)
1. First screen 1440×900: spread nav (7 items, justify-between); S1 flush left at x 0, ≈ 75.5% wide, starts 30 px under the header; H1 "Listen first." ≥ 4.25rem overlapping the photo ≥ 64 px and readable on the pale wall; vertical caption at the right edge; ink strip at the bottom with PA10, name, price, outline pill. No table/form/search, no centred giant text, no cut-outs. Saturated px ≤ 8% (`check-first-screen.py`).
2. 390×844: photo full width then H1 in flow; no vertical text, nothing absolutely positioned over text; no horizontal overflow.
3. Block order = 4.2 (10 blocks + footer); grounds alternate as specified; trio white band directly after the ink compare block.
4. T3: comparison table on ink with 4 corner brackets + plus marks (1 px `#5D5D58`, 40 px arms); stacks on mobile.
5. T2: three 3:4 cards, gap 20, round "+" bottom-right, bracketed names, outline pills.
6. Hollow-circle labels on every section; four line icons with ink numeral chips.
7. Price list: full width at 800 and 1280, price column nowrap right, stacked < 782; prices equal 8.4.
8. 15 photo positions, no image twice; all from one STYLE; no text/logos/brands, no broken hands/faces.
9. Motion: `check-parallax.mjs` passes (band S3 + hero S1 move ≥ 6 px desktop and mobile, 0 with reduced motion); reveals only from section 6 list; hero has no reveal; nothing left transparent after scrolling.
10. Colours only from section 2; accent ≤ 3% and never a fill; ink exactly `#16160E`.
11. Fonts: Newsreader / Public Sans (+ Noto Serif TC/JP subsets) via theme.json fontFace; editor = front (`check-editor-fonts.mjs` en + zh-TW); max preset 4.75rem.
12. Copy ≥ 250 English words with ≥ 3 narrative paragraphs; numbers (prices, hours, 2012, 7 people, 60 minutes, €150, 30 days, 10 days) match section 8.
13. auto-gates pass for en (`… en gates/en.json 1 1`).
