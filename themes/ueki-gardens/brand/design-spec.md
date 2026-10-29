# Ueki Gardens: design spec (stage 1, binding for implementation)

Slug `ueki-gardens`, garden centre, **type store (WooCommerce)**: shop templates, demo products, checkout must work; the theme must still render without WooCommerce. Row b19-2: archetype card-mosaic, hero photo-left-text-right, nav split, first screen three equal columns, page structure spec-catalogue, palette 青磁 `#748578` (moss family), fonts Figtree / Manrope, **font_direction sans**, IMAGERY **photo** (high-key).

References: **plantica.net** (main, https://plantica.net/) and **Plants × Crafts** (secondary, https://plantsandcrafts.dougukan.jp/, ground split only). Measurements: `reference-tokens.md`; screens: `ref/plantica-first.png`, `ref/pac-first.png`, `ref/scroll-plantica-{500,1700,2900,3800,5500,7100}.png`. We borrow structure, technique, colour relationships, numbers and the key-visual concept. We never copy their photos, copy, logo or a whole page layout.

Fixed brand facts (every page, all five languages): **Ueki Gardens**, founded **1998** on **Alder Lane**, a fictional town called **Fernhill**. Address: 14 Alder Lane, Fernhill. Email hello@uekigardens.example, phone +1 555 014 8820 (fictional). Currency **USD** in every language. Name story for brand.md: *ueki* is the Japanese word for a plant grown to be kept in a garden or pot. The founder liked it. Nothing else on the site is Japanese.

---

## 1. Signature techniques (three from plantica plus one supporting device from Plants × Crafts; all must be obvious at a glance)

### T1. Ragged-top photo row under a full-measure two-line headline (plantica first screen, `ref/plantica-first.png`, `ref/scroll-plantica-500.png`)
- **Reference:** a white page. A 125 px two-line sentence-case grotesque headline spans the whole 1360 px measure, starting at y 202. A 15 px founder line sits at y 480. Under it, from y 601, a row of photographs with **different tops** (601 / 658 / 715 px) runs past the fold. The outer photos are cut by the viewport edges, every photo has a 5 px radius, and there are no captions on the photos.
- **Ueki (home hero):** headline "Plants a household / can keep." (two lines forced with `<br>` in en). Under it is a **three-equal-column** row (first_screen three-equal-columns, hero photo-left-text-right):
  - col 1 = photo **H1** (gardener wheeling potted shrubs), 3:4. Its left edge **bleeds to the viewport edge**: the column has no left padding and the wrapper is alignfull with `overflow: clip`, so the image is cut by the left edge just like plantica's first photo. Top offset **0**.
  - col 2 = photo **H2** (herb benches), 3:4, top offset **56 px**.
  - col 3 = text column, top offset **112 px**: lead 15 px / 25.5 px (4 short lines), then two pills (T3).
  - The steps 0 / 56 / 112 copy plantica's 57 px increments. The photos must run past the 900 px fold at 1440×900. Row top = y 600 ±20.
- **Geometry at 1440:** side margin 40 px; grid 3 × 1fr, gap 20 px. Each photo column is ≈ 453 px wide (plantica's big photo is 453 wide), and photo height = 604 px (3:4), so the bottom sits at ≈ 1204–1316 and the fold cuts it. `border-radius: 5px` on the figure, `overflow: clip`.
- **Must not be diluted:** the tops must visibly step (no common top line). The photos must be cut by the fold on desktop and photo 1 cut by the left edge. The headline must stay two lines across ≥ 80 % of the measure (not a narrow centred block). Radius stays 5 px (not 0, not 16+).
- **Inner pages (short version, "ragged-top head"):** H1 at 4.375rem (two lines), then the same three equal columns with tops stepped **0 / 40 / 80 px**: two photos (3:4) plus a text column with lead and pills. Photo heights are capped at 440 px so the head ends within ≈ 1.1 screens. It is used on In season, Choosing, Aftercare, About and Visit (see the continuation table).

### T2. Index rows: 70 px uppercase titles on 1 px rules with a ↘ arrow (plantica WORKS / PRODUCTS / EXHIBITIONS, `ref/scroll-plantica-2900.png`, `ref/scroll-plantica-3800.png`)
- **Reference:** a full-measure list. Each row is 104 px high with a 70 px uppercase 500 title at the left edge and a large ↘ arrow (≈ 34 px glyph, same ink) flush right. Rows are separated by 1 px `rgba(0,3,0,.2)` rules, with a rule above the first row too. Titles rise out of a mask on entry.
- **Ueki (home block 2, "On the benches"):** four rows **IN SEASON / SHRUBS & TREES / PERENNIALS / HERBS & INDOOR**. Each row has:
  - the title in Figtree 500, `4.375rem` (70 px), uppercase, line-height 1, letter-spacing −0.01em;
  - the ↘ arrow at the far right at 2.25rem, which rotates to → on hover (transform 0.4s);
  - a row of **outline micro-pills** under the title (T3), 16 px below it, with sizes / light / count (e.g. "2 L – 10 L", "SUN TO PART SHADE", "18 PLANTS").
  - Row padding 18 px top / 22 px bottom; 1 px rule above each row and below the last one.
  - Each row links to its WooCommerce product category.
- **Must not be diluted:** titles ≥ 4.25rem at 1440, uppercase, left-aligned. Arrow at the right end of the same row. Rules full measure (1360 px). **No hover thumbnails** (shiori-books uses those; ours stays type-only). No numbers in front of titles (sekisan uses numerals).
- **Mobile:** titles drop to `clamp(2.25rem, 9vw, 4.375rem)` uppercase. The arrow stays on the right. Pills wrap.
- **Inner pages:** Shop (category rows above the grid), In season (month rows Nov–Feb), Services (service rows **with price**, see §4.5), About (people rows, the 7 named staff), Journal index (story rows).

### T3. Hairline outline micro-pills + one filled pill (plantica header and tags, `ref/plantica-first.png`)
- **Reference:** every nav link is a 26 px high pill (13 px uppercase 400, 1 px border at 20 % ink, radius 65–100 px). Grouped pills sit at the right of the header. The CTA is a filled dark pill with white text. After scroll, a small filled accent pill "MENU" floats top-right (purple in the source).
- **Ueki:**
  - **Outline pill:** height 26 px, padding 0 12 px, Manrope 500 0.8125rem (13 px) uppercase, letter-spacing 0.04em, border `1px solid rgba(11,17,12,.2)`, radius 100 px, background transparent. Hover: border ink, background `#F2F5F3`.
  - **Filled pill (one per block at most):** height 40 px, padding 0 20 px, ink `#0B110C` ground, white text, Manrope 500 1rem, a → after the text, radius 100 px.
  - **Floating Menu pill** (mobile, and desktop after 600 px of scroll): moss `#748578` ground, white 13 px uppercase "MENU", 26 × 70 px, top-right 18 px from the edges. It takes plantica's purple MENU role.
  - Used in nav, product tags, spec values on cards, pill rows under index rows, filters, the cart count ("CART 2").
- **Must not be diluted:** pills stay 26 px high and hairline (not chunky 44 px buttons, not filled grey chips). The header nav is pills, not plain text links.

### T4 (supporting, Plants × Crafts). Ground split: white above, tinted band behind the lower part of the hero (`ref/pac-first.png`)
- **Reference:** a white top area, then a flat grey `#CCCCCC` band from ≈ 30 % of the first screen down, behind the hero photo and the headline foot. Hard edge, no gradient.
- **Ueki:** a full-bleed **seiji tint `#D5DDD7`** band (same lightness step as the grey: L ≈ 85 % vs white) starts at **y = photo row top + 150 px** (≈ y 750 at 1440×900) and runs to 160 px below the last photo. The photos and text column sit over the white/band edge, so the band visibly cuts behind col 1–3. Implement it as `linear-gradient(to bottom, #FEFFFE 0 var(--split), #D5DDD7 var(--split) 100%)` on the alignfull hero wrapper (`--split` set in px from the top of the photo row container) or as a positioned band behind the columns.
- Must not be diluted: hard edge, visible behind the photos (not starting below them), and the colour must not be paler than `#DDE4DF`.
- Inner pages: Single product (band behind the lower 45 % of the gallery and under the summary), Visit (behind address / photo), Services (behind the price rows), Cart / Checkout totals column.

### Continuation to inner pages (required)
| Page | T1 ragged-top | T2 index rows | T3 pills | T4 band |
|---|---|---|---|---|
| Shop / category / search | — | category rows (4) above the product grid | tags, filters, sizes | — |
| Single product | — | "Also on this bench" rows (3 related, 2.6rem variant) | spec pills (light, water, height, pot) | band behind gallery foot + summary |
| In season | yes (H2, B1) | month rows NOV / DEC / JAN / FEB | yes | — |
| Choosing a plant | yes (C1, C2) | — (card mosaic body) | spec pills on each card | — |
| Services & prices | — | service rows with price nowrap right | yes | band behind price rows |
| Aftercare | yes (A1, C3) | care-by-season rows | yes | — |
| About the nursery | yes (H1, H3) | people rows (7) | role pills | — |
| Visit | yes (V1, H3) | — | directions pills | band behind address + photo |
| Journal | — | story rows on the index | category pills | — |
T1 appears on 5 inner pages, T2 on 7, T3 on all, T4 on 4.

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
plantica.net opens on a plain white page. A huge two-line grotesque sentence states what the studio is ("… is a flower creative studio"), and one small founder line credits a named person and place. Below it, a row of flower photographs of different sizes hangs at different heights, cut by the left edge, the right edge and the fold, so the page feels like a bench of specimens you are walking past. The story: flowers are material, looked at closely, one at a time. The motion: words rise out of masks, the photographs slide in from the sides at different speeds, and Lenis smooth scroll makes the row drift as you scroll.

### (2) Our translation (garden centre, same composition, same motion idea, same image type: real photographs)
The same white page. The two-line sentence states what *we* are: **"Plants a household / can keep."** The founder line becomes **"Grown on Alder Lane since 1998."** The specimen row becomes our working nursery, three equal columns stepping down. Photo 1 is the row's signature scene: a gardener in a moss-green apron wheels a flat trolley of potted shrubs down a bright glasshouse aisle, in high-key overcast light. Photo 2 is benches of potted herbs receding down the glasshouse. The third column is the text: a short lead ("Every plant on our benches has spent a season with us first…") and two pills. The photos run past the fold onto a sage band, the way plantica's flowers run off the page. Story: the plants on these benches are the ones that survive a normal home, chosen and grown on site. Motion: no entrance animation in the hero. Instead the two photos drift vertically at **different parallax speeds** (6 % and 10 %) inside their 5 px frames, which is our library-safe equivalent of plantica's per-photo side drift. Hover scales an image to 1.05 over 0.8 s.

### (3) KV checklist (all implemented on the first screen at 1440×900 and visible)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | 125 px two-line sentence-case grotesque headline across the measure | Figtree 500 H1 "Plants a household / can keep.", `clamp(3rem, 8.7vw, 7.8125rem)` (125 px at 1440), line-height 1 | top, x 40–1400, first line at y ≈ 200 | none (hero, no reveal) | — |
| 2 | Small founder line under the headline | "Grown on Alder Lane since 1998." Manrope 500 15 px / 20 px, ink, two short lines like the source ("Grown on Alder Lane / since 1998.") | under H1, left, y ≈ 480 | none | — |
| 3 | Ragged-top row of photos cut by the fold and the left edge | three equal columns, tops 0 / 56 / 112 px, col 1 bleeds to the left viewport edge, bottoms cut by the fold | y ≈ 600 → past 900 | `sp-parallax` per photo: col 1 `--sp-par: 6%`, col 2 `--sp-par: 10%` | H1, H2 |
| 4 | Flower photos, 5 px radius, close specimen look | high-key nursery photographs, 5 px radius: gardener with trolley of shrubs (H1), herb benches (H2) | cols 1 and 2 | hover scale 1.05 / 0.8 s ease | H1, H2 |
| 5 | Outline micro-pill nav, grouped | split header: pills left (IN SEASON, PLANTS, CHOOSING, SERVICES), wordmark centre, pills right (ABOUT, VISIT, CART 0) + EN/language switch as 13 px text | header 75 px | none | — |
| 6 | Lead text column 15 / 25.5 px + filled pill | col 3: lead (≈ 40 words), outline pill "WHAT'S IN SEASON", filled ink pill "Visit the nursery →" | col 3, top +112 px | none | — |
| 7 (T4) | Plants × Crafts grey ground split | `#D5DDD7` band from y ≈ 750 behind the photos and the text column | full-bleed behind the row | none | — |

Not allowed here: "adapted, not copied" as an excuse to drop the trolley-in-the-aisle scene or the stepped row.

---

## 3. Colour

Reference relationships kept (plantica: white ground ≈ 70 %, near-black ink ≈ 6 %, body grey, a tiny accent, photos ≈ 22 %). Hex values from `reference-tokens.md (a)`, with lightness tweaks within ±5 %.

| Role | Hex | Source token | Use | Share (first screen / page) |
|---|---|---|---|---|
| Ground | `#FEFFFE` | (a) ground `#FEFFFE`, unchanged | page ground | ≈ 62 % / 65 % |
| Ink | `#0B110C` | (a) ink `#000300`, lightness +4 % | headings, nav, rules (at 20 %), filled pill | ≈ 6 % |
| Body | `#3E3E3E` | (a) body grey, unchanged | body copy, lead | < 2 % |
| Main / accent role | `#748578` 青磁 | replaces (a) accent `#976AE1` | floating MENU pill, tag dots on cards, active nav underline, links on hover, focus ring | < 1 % first screen, ≤ 3 % page |
| Band | `#D5DDD7` | Plants × Crafts band `#CCCCCC`, hue-shifted to seiji at the same lightness step | T4 ground split, totals column, footer ground | ≈ 8 % / 12 % |
| Pale hover | `#F2F5F3` | derived | pill hover, product card image ground | small |
| Photos | multi-hue, muted | (a) photos ≈ 22 % | — | ≈ 22 % |

- **Why the accent changes:** the row fixes palette 青磁 / moss, and plantica's vivid purple reads as florist/fashion, not as a garden centre. Seiji takes exactly the same role and share (menu pill, tag dots, active language), so the relationship stays.
- **Why the band changes:** a neutral `#CCCCCC` band makes a plant site look grey and dusty. The seiji tint keeps the same lightness step, so the contrast against white stays strong. (Tsumugi lesson: we do **not** use a near-white stone band.)
- No beige or cream anywhere. No large saturated fields: moss never fills a section.
- Contrast: ink on band 15:1; body `#3E3E3E` on white 10.6:1; white on moss `#748578` is 3.9:1, so the MENU pill text is 13 px 600 uppercase (UI label, not body text).
- **First-screen saturated share:** plantica measured 5.8 %; plan cap 30 %; gate `check-first-screen.py` **≤ 15 %**. Target **≤ 10 %**, reached by the high-key muted grade of H1/H2 (greens desaturated, no flowers in strong colour on the first screen).

---

## 4. Typography (font_direction **sans**)

- Latin headings: **Figtree** (500, 600). Latin body and UI: **Manrope** (400, 500, 600). Both are sans, matching plantica's grotesque PP Mori (token b). No serif anywhere, and no Mincho (明體) in CJK.
- Stacks (theme.json fontFamilies):
  - heading: `"Figtree", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`
  - body: `"Manrope", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`
  - `:lang(zh-TW)` headings and body: `"Figtree"/"Manrope", "Noto Sans TC", sans-serif`. `:lang(ja)`: `…, "Noto Sans JP", sans-serif`.
- **Loading:** all faces go through **theme.json `fontFace`** (woff2 in `assets/fonts/`): Figtree variable (400–700), Manrope variable (400–700), Noto Sans TC subset 400/500 and Noto Sans JP subset 400/500. Build the subsets from the zh-TW / ja demo strings with the Hokuto / Hada method; the broken subset script is not used. Because style.css uses `:lang()`, copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it. Editor and front end must show the same faces (check-editor-fonts.mjs).
- Sizes (theme.json fontSizes, token b):
  | Preset | Value | Use | Source |
  |---|---|---|---|
  | small | 0.8125rem (13 px) | pills, nav, meta, card tags | nav 13 px |
  | base | 1rem / line-height 1.7 | body | — |
  | lead | 0.9375rem / 1.7 (15 / 25.5 px) | lead columns | lead 15/25.5 |
  | medium | 1.25rem | card titles, product names | buttons 20 px |
  | large | 2.6rem | small T2 rows, inner H2 | — |
  | x-large | 4.375rem (70 px) | T2 index titles, section H2 (uppercase), inner H1 | index 70 px |
  | xx-large (max) | `clamp(3rem, 8.7vw, 7.8125rem)` (125 px at 1440) | home H1 only | H1 124.99 px |
  The max of 7.8125rem satisfies the ≥ 4.25rem rule.
- Headings: weight 500, line-height 1 (H1, T2), 1.1 (other H2), letter-spacing −0.01em. H1 in sentence case; section H2 and T2 titles in uppercase (plantica `.h3` 70 px uppercase).
- CJK: heading size ≈ 0.75 × en (H1 `clamp(2.4rem, 6.4vw, 5.6rem)`, T2 titles 3.25rem), weight 500, no uppercase transform, letter-spacing 0.02em. Body line-height **1.85**. Labels in zh-TW/ja stay English only where they are category codes (e.g. pills "2 L"); T2 titles are translated.
- fr/de: `hyphens: auto` on headings and body. T2 titles in de (e.g. "STAUDEN") may wrap to two lines. Never shrink below 3rem on desktop.
- One top menu only.

---

## 5. Header, footer, layout tokens

- **Header (split nav, 75 px, token c):** left group of outline pills IN SEASON · PLANTS (shop) · CHOOSING · SERVICES; centre wordmark "Ueki Gardens" in Figtree 600 1.375rem lowercase-initial ("ueki gardens", echoing plantica's lowercase wordmark); right group of pills ABOUT · VISIT · CART (count), then the language switch as 13 px text with an underlined active language (2 px moss underline). White ground, no shadow, a 1 px rule only after scroll. Below 960 px: wordmark left, floating moss MENU pill right, which opens a full-screen white overlay with the T2-style rows (2.6rem uppercase).
- **Footer:** band `#D5DDD7` ground. Left: wordmark plus address / hours. Middle: two pill columns of links. Right: "Grown on Alder Lane since 1998." Bottom line in 0.75rem 300-weight-look (Manrope 400) © line plus "Photos are AI-generated."
- Container 1360 px (wide) / content 760 px for long text; side padding 40 px desktop, 20 px under 782 px (token c). Section gap 160 px desktop (token: 100–200), 96 px mobile.
- Radius: photos **5 px**; pills 100 px; full-bleed band photo **0**; product cards 5 px. Borders 1 px `rgba(11,17,12,.2)`. **No shadows** (token d).

---

## 6. Home page

### First screen (1440×900)
Described in §1 T1 and the KV checklist. Vertical rhythm: header 0–75, H1 lines at y ≈ 200–450, founder line at y ≈ 480, photo row from y ≈ 600, band from y ≈ 750. The fold cuts photos 1 and 2. In col 3 (top y ≈ 712) the lead plus pills must be fully above 900.
Forbidden on the first screen: table, form, search box, vertical text, absolutely positioned labels on photos, centred giant word, cut-out objects.

### Block order
| # | Pattern | Purpose | Layout and photos | Copy |
|---|---|---|---|---|
| 1 | `front-hero` | KV: what we are | T1 + T4 + T3 header, as above. H1, H2. | H1 6 words, founder line, lead ≈ 40 words |
| 2 | `front-benches` | what is on the benches now (T2) | Top: a small label line "On the benches — this month" (13 px uppercase) left, and a lead (15/25.5, 377 px column at the 5th twelfth, like plantica's lead at x 532) with ≈ 45 words. Then the four T2 index rows with pills, linking to categories. No photos. | 45 words + pills |
| 3 | `front-nursery` | the nursery + this week's picks (plantica "Pickup" split, `ref/scroll-plantica-5500.png`) | 50/50 full-bleed split. **Left half:** photo H3 (glasshouse interior, 4:5 crop, cover-fit), height 100vh capped at 880 px, radius 0, bleeding to the left edge. **Right half:** at top, two narrative paragraphs (lead 15/25.5, 420 px column) about growing on site; at the bottom (`align-self: end`), a "↘ This week's picks" heading at 1.25rem and a row of **4 square product thumbnails** (P3, P7, P1, P6; 1:1, 5 px radius, ≈ 120–140 px each, gap 16 px) with name 0.8125rem and price under each; "View all plants" text link at the bottom left of the half, mirroring plantica's "View all". With WooCommerce: a Product Collection (4 handpicked); without: static images linking to /shop. | 2 × 55 words |
| 4 | `front-choose` | **spec catalogue: how a plant is chosen** (card mosaic) | H2 uppercase 4.375rem "HOW WE CHOOSE / A PLANT WITH YOU" (two lines, left), lead right. Mosaic on a 12-column grid, gap 20 px: **C1** card 6/12 × 2 rows (4:5 photo + text), **C2** card 3/12 (1:1 photo), **C3** card 3/12 (1:1 photo), **C4** card 6/12 wide (16:9 photo), placed under C2+C3 so that the right side's bottom aligns with C1. Each card: photo (5 px radius), question title in Figtree 500 1.25rem (LIGHT — "Where will it stand?" / SPACE — "How wide can it grow?" / TIME — "How often will you water?" / COMPANY — "Who else lives there?"), two lines of text, then 3 outline pills of spec values (e.g. "FULL SUN", "PART SHADE", "NORTH WINDOW"). `sp-stagger` + `sp-reveal--up`. | 4 × 30 words |
| 5 | `front-saturday` | the yard on a Saturday (full-bleed **parallax**) | Cover, alignfull, min-height 78vh (max 760 px), background **B1**, radius 0 (plantica's edge-to-edge band, `ref/scroll-plantica-1700.png`), `sp-parallax` `--sp-par: 10%`. Foreground (not moving): a white panel bottom-left, 40 px inset, max 420 px, padding 28 px, radius 5 px, holding one sentence plus an outline pill "OPENING HOURS". Under the band, a plain facts line in 4 columns on white: **28** years on Alder Lane · **42** benches · **6** glasshouse bays · **Open daily**, numbers Figtree 500 2.6rem, labels 13 px uppercase. | 25 words + facts |
| 6 | `front-services` | services and prices (ledger, consistent with §9) | H2 uppercase "SERVICES / AT THE COUNTER" left. Below, a **full-width** T2-small ruled list (rows 72 px, titles Figtree 500 1.75rem, sentence case), 5 rows: service name left, one-line description in the middle (Manrope 0.9375rem, muted), **price right, `white-space: nowrap`, text-align right**, then ↘. Price column min 9ch. Filled pill "All services →". **No reveal** (price list). | 5 rows + 30 words |
| 7 | `front-after` | **after the weekend** (aftercare + stories) | Mirror of block 3: **right half** photo A1 (Monday restock, 4:5, full-bleed right, radius 0, height ≤ 880). **Left half:** H2 uppercase "AFTER / THE WEEKEND"; a narrative paragraph (≈ 80 words) on what Monday at the nursery looks like and why we call customers' plants after a month; then 3 story rows (1 px rules, Figtree 500 1.25rem title + small pill with the plant), linking to journal stories 1–3. | 80 words + 3 titles |
| 8 | `front-visit` | visit | T4 again: white top, band `#D5DDD7` from 45 % of the block. Left 5/12: H2 uppercase "VISIT / ALDER LANE", address, hours (two lines), pills "DIRECTIONS" "CALL", filled pill "Plan a visit →". Right 7/12: photo **V1** 4:3, 5 px radius, straddling the band edge. | 50 words |

- English home ≥ 250 words with narrative paragraphs in blocks 3, 4 (lead), 7 and 8 (≥ 3 paragraphs). CJK ≥ 500 characters.
- **Home photo positions (14):** H1, H2 (hero) · H3 (nursery) · P3, P7, P1, P6 (picks) · C1, C2, C3, C4 (mosaic) · B1 (band) · A1 (after) · V1 (visit). No image repeats on the page.

### Comparison with recent home pages
| # | Yuragi Spa | Saji Culinary | Tsuya Jewellers | Kairo Supply | **Ueki Gardens** |
|---|---|---|---|---|---|
| 1 | full-bleed photo + info bar | framed hero | framed hero + caption strip | diagonal-band hero | **white page, 125 px H1, ragged-top 3-column row over a band** |
| 2 | intro narrative | pass band | offset pair | pinned stage | **70 px uppercase index rows (benches)** |
| 3 | name marquee | day rail | product tiles | two doors | **50/50 bleed photo + picks thumbnails** |
| 4 | sticky-media treatments | ruled term grid | commissions strip | who band | **4-card spec mosaic** |
| 5 | letterbox band | full-bleed photo | drawn commission | account prose | **parallax yard band + facts line** |
| 6 | booking steps | brigade | full-bleed bench band | counter pair | **services ledger rows** |
| 7 | people | graduates grid | people pair | rates table | **mirrored bleed photo + story rows** |
| 8 | season | tuition ledger | price table | morning Cover | **visit on band split** |
| 9 | guest notes / visit | notices / visit | visit | stories / apply | — |
Why not alike: none of the four starts with a white page carrying a giant sentence-case headline over a stepped photo row. None uses 70 px uppercase index rows with arrows, a mirrored pair of 50/50 bleed halves, or a mixed-size card mosaic. Ueki has no framed hero, no diagonal band, no marquee, no pinned stage, no people grid and no booking steps. From the used-refs list: no hover thumbnail on rows (shiori-books), no numerals before titles (sekisan), no Nikon-style bottom staggered row with a 50/50 hero (susugi-wash: ours has a full-measure headline above, three *equal* columns including a text column, and a band split).

---

## 7. Inner pages (9 + WooCommerce templates)

Each page = head (T1 ragged-top or T2 rows) → body → a closing line with the filled pill. No sidebar. All numbers come from §9.

1. **Shop** (`archive-product`, `taxonomy-product_cat`, `product-search-results`): H1 "Plants" (4.375rem) plus a lead. **T2 rows** for the 4 categories (2.6rem variant, pills = count and light), then a filter pill row and ordering on the right. Grid 4 columns ≥ 1100 / 3 ≥ 782 / 2 mobile, gap 20 px. Card: image 4:5 on `#F2F5F3`, radius 5 px, hover scale 1.05 / 0.8 s; under it a tag line with a 6 px moss dot + category 13 px uppercase (plantica card dot tags), name Figtree 500 1.25rem, price Manrope 600 1rem, and "Add to cart" as an outline pill. Pagination as pills.
2. **Single product** (`single-product`): two columns. Gallery left (main 4:5, 5 px radius); **T4** band starts at 55 % of the gallery height and runs under both columns. Right: category pill, H1 Figtree 500 2.6rem, price, short description, then the **spec catalogue** as a definition list on 1 px rules (Light / Water / Height & spread / Pot size / Hardiness / Pet-safe), values as outline pills. Quantity plus a filled ink "Add to cart" pill. Line "Local delivery $12 · free over $120 · Click & collect". Below: tabs (Description, Care, Delivery), then **T2 small rows** "Also on this bench" (3 related products, title + price nowrap + ↘).
3. **In season** (`page-in-season`): **T1 head** "What is on / the benches now" with **H2** + **B1**, text column + pills. Then **T2 rows** NOV / DEC / JAN / FEB, each with a 2-line note and pills of plants in season, and a 4-product row (P7, P2, P4, P5).
4. **Choosing a plant** (`page-choosing`; core of page_structure spec-catalogue): **T1 head** with **C1** + **C2**. Then the four questions as sections, each a left-text / right-spec-table pair (ruled dl, pill values, not a step grid). Then the "Bring a photo" note: plant clinic on Saturdays 10:00–13:00, with **C4**.
5. **Services & prices** (`page-services`): H1 plus lead. **T2 rows with prices** on the **T4 band** (§9 price list, 5 rows, full width, price column nowrap and right-aligned, never cut at ≥ 782 px). Under each row a 2-sentence detail. Photos: **P8** (repotting kit) beside the repotting note and **H1** (16:9 crop) beside the delivery and planting note. Then delivery area notes (15 km radius) and booking by phone/email.
6. **Aftercare** (`page-aftercare`): **T1 head** "After / the weekend" with **A1** + **C3**. **T2 rows** SPRING / SUMMER / AUTUMN / WINTER care notes. The one-month call explained (we phone or email 30 days after a planting visit). Plant clinic hours. No guarantee language.
7. **About the nursery** (`page-about`): **T1 head** "Grown on / Alder Lane" with **H1** + **H3**. Narrative (founded 1998 by Elena Marsh; six glasshouse bays, 42 benches; why we sell plants a household can keep). **B1** wide 16:9 (5 px radius) between sections. **T2 people rows**: the 7 people (name at 2.6rem, role pill, one line on what they look after), no portrait grid.
8. **Visit** (`page-visit`): **T1 head** "Visit / Alder Lane" with **V1** + **H3**. **T4 band** behind the address, hours, holiday closures, parking (40 spaces, trolleys at the gate), bus line "Route 7, stop Alder Lane", click & collect counter. Filled pill mailto / tel. No map embed required.
9. **Journal** (`home`, `archive`, `single`): H1 "Notes from / the benches". **T2 rows** for the 4 stories (title 2.6rem, date + plant pill, ↘). Single: category pill, title 3.2rem, featured image 5 px radius, 760 px text column.
10. **Cart / Checkout / My account / Order confirmation**: H1 2.6rem; totals column on `#D5DDD7` (T4) with 5 px radius; buttons filled ink pills; notices with a 3 px moss left rule. Shipping methods: Local delivery $12 (free over $120), Click & collect $0.
11. **404 / search**: H1 plus filled pill home.

**Per-page image check (no repeats within a page):** Home: 14 as above · Shop: product images · Single: own P + related P · In season: H2, B1, P7, P2, P4, P5 · Choosing: C1, C2, C4 · Services: P8, H1 · Aftercare: A1, C3 · About: H1, H3, B1 · Visit: V1, H3 · Journal: C2, P1, P3, A1 (stories 1–4).

---

## 8. Photos (18, Grok, one at a time, read each one)

**STYLE** (exact string on every prompt, `IMAGE_STYLE="…" scripts/grok-image.sh`):
`high-key documentary photograph, soft overcast daylight through glasshouse roof, clean white and pale green surroundings, natural but muted plant colours, sage and moss greens, terracotta and plain grey pots, diverse adults at work in a modern international garden centre, candid, 35mm lens, gentle shadows, no studio black background, no text, no logos, no signage lettering, no brand marks, no Japanese elements`

IMAGERY = **photo** (stage-a: the reference's main images are real photographs). No cut-outs (0 transparent images). Each image ≤ 300 KB and ≤ 2000 px; one readme.txt line each (AI-generated). Re-generate any image with text, logos, broken hands or faces, or style drift.

| ID | Subject / composition | Ratio | Used on (once per page) | Home |
|---|---|---|---|---|
| H1 | gardener in a moss-green apron wheeling a flat trolley loaded with potted shrubs down a long bright glasshouse aisle toward the camera, benches either side | 3:4 | Home hero col 1; About T1; Services (16:9 crop) | ✔ |
| H2 | long benches of potted herbs (basil, thyme, rosemary) receding in a glasshouse, one hand adjusting a pot at the edge | 3:4 | Home hero col 2; In season T1 | ✔ |
| H3 | wide glasshouse interior in the morning, rows of benches, one person watering with a hose wand, pale light | 4:5 | Home nursery half; About T1; Visit T1 | ✔ |
| C1 | bright white window sill with three potted plants of different heights, morning side light | 4:5 | Home mosaic (large); Choosing T1 | ✔ |
| C2 | small apartment balcony corner with grey pots, a fern and a small olive tree, overcast | 1:1 | Home mosaic; Choosing T1; Journal story 1 | ✔ |
| C3 | two hands pressing a finger into potting soil to check moisture, close-up | 1:1 | Home mosaic; Aftercare T1 | ✔ |
| C4 | staff member and customer comparing two potted shrubs on a bench, talking, side view | 16:9 | Home mosaic (wide); Choosing clinic note | ✔ |
| B1 | outdoor plant yard on a Saturday, wide, people with trolleys among rows of shrubs and small trees, glasshouse behind | 16:10 | Home parallax band; In season T1; About wide | ✔ |
| A1 | Monday morning, half-empty benches being restocked, a staffer carrying a crate of small pots, quiet | 4:5 | Home after-weekend half; Aftercare T1; Journal story 4 | ✔ |
| V1 | garden centre entrance: open glasshouse doors, potted trees by a gravel path, bicycles at a rack | 4:3 | Home visit; Visit T1 | ✔ |
| P1 | three small herb pots (basil, thyme, parsley) on a white bench, front view, centred | 4:5 | product 1; Home picks; Journal story 2 | ✔ |
| P2 | lavender in a 2 L pot on a white bench | 4:5 | product 2; In season | |
| P3 | hydrangea paniculata in a 5 L pot, pale lime flower heads, on a white bench | 4:5 | product 3; Home picks; Journal story 3 | ✔ |
| P4 | three hardy ferns in 1 L pots on a white bench | 4:5 | product 4; In season | |
| P5 | olive tree in a 10 L plain grey pot, about 1.2 m, against a white wall | 4:5 | product 5; In season | |
| P6 | peace lily in a 17 cm pot on a white plinth | 4:5 | product 6; Home picks | ✔ |
| P7 | winter heather bowl, 25 cm, white and pink heather muted, on a white bench | 4:5 | product 7; Home picks; In season | ✔ |
| P8 | repotting kit: a 20 L bag of plain unprinted compost beside a 25 cm terracotta pot and a trowel on a white bench | 4:5 | product 8; Services | |

Home uses 14 of the 18 (✔).

---

## 9. Fixed numbers (identical on every page and in all five languages)

**Products / price list (8, WooCommerce simple products):**
| # | Product | Category | Price (USD) | Spec (light · water · size) | Image |
|---|---|---|---|---|---|
| 1 | Kitchen herb trio (3 × 9 cm pots) | Herbs & indoor | $14 | sun · twice a week · 20 cm | P1 |
| 2 | Lavender 'Hidcote', 2 L | Perennials | $12 | full sun · weekly · 50 cm | P2 |
| 3 | Panicle hydrangea 'Limelight', 5 L | Shrubs & trees | $38 | sun to part shade · weekly · 1.5 m | P3 |
| 4 | Hardy fern trio (3 × 1 L) | Perennials | $24 | shade · keep moist · 60 cm | P4 |
| 5 | Olive tree, 10 L, 1.2 m | Shrubs & trees | $89 | full sun · every 10 days · 1.2 m | P5 |
| 6 | Peace lily, 17 cm pot | Herbs & indoor | $28 | bright indirect · weekly · 60 cm · not pet-safe | P6 |
| 7 | Winter heather bowl, 25 cm | In season | $22 | sun · weekly · 25 cm | P7 |
| 8 | Repotting kit (20 L peat-free compost + 25 cm terracotta pot) | Pots & compost | $32 | — | P8 |
Categories (WooCommerce, 5): In season, Shrubs & trees, Perennials, Herbs & indoor, Pots & compost. T2 home rows show the first four.

**Services (price ledger on Home block 6 and Services page; same 5 rows):**
| Service | Price |
|---|---|
| Local delivery (within 15 km) | $12 · free on orders over $120 |
| Planting visit (two gardeners, first hour) | $65 |
| Repotting at the counter (per pot up to 30 cm) | $8 |
| Plant clinic (bring a leaf or a photo), Saturdays 10:00–13:00 | Free |
| Saturday workshop (90 min, materials included) | $35 |

- **Hours:** Mon–Sat 8:30–18:00, Sun 10:00–17:00 ("Open daily"). Closed 25–26 December and 1 January.
- **Place:** 14 Alder Lane, Fernhill. 6 glasshouse bays, 42 benches, 40 parking spaces, bus Route 7 stop "Alder Lane". Founded 1998 (28 years in 2026).
- **People (7, named in brand.md, About rows, captions):** Elena Marsh (founder, glasshouse), Tomás Reyes (head grower, shrubs & trees), Priya Nair (perennials & herbs), Jonah Feld (indoor plants), Amara Okoye (plant clinic & aftercare), Lukas Brandt (delivery & planting crew), Mei Lin Ho (Saturday workshops).
- **Stories (4, journal posts + home rows 1–3):** 1 "A north balcony that keeps ferns now" (C2) · 2 "Herbs on a kitchen sill, three winters on" (P1) · 3 "One hydrangea for a shaded front yard" (P3) · 4 "Monday at the nursery: what the weekend leaves" (A1).
- **Process (how a plant is chosen; text, not a step grid):** Light → Space → Time → Company (who else lives there), then the one-month follow-up call after planting visits (30 days).
- **Policies:** returns of unused goods within 14 days with receipt; plant problems in the first 30 days: bring it to the plant clinic. No "guaranteed to thrive" wording, no awards, no media, no statistics claims.

---

## 10. Scroll motion (3 effects; library sp-scroll as-is, variables only)

Global CSS variables: `--sp-ease: cubic-bezier(.25,1,.5,1)` (plantica power4-out, token g), `--sp-dur: .8s` (plantica transform 0.8 s), `--sp-dist: 20px`.

| Effect | sp-* class | Where | Source and timing |
|---|---|---|---|
| Parallax | `sp-parallax` | (a) hero: each photo figure wrapper in col 1 (`--sp-par: 6%`) and col 2 (`--sp-par: 10%`); (b) Home block 5 Cover with background B1 (`--sp-par: 10%`); (c) About B1 wide (8 %) | plantica: hero photos drift at different speeds (js-iv, 0.8 s transform) + Lenis; Plants × Crafts: large photo revealed while scrolling. CSS scroll-driven linear. Mobile ≤ 781 px: `--sp-par` 4 % / 6 % / 6 % (kept, smaller). Foreground text never inside the moving layer. |
| Mask reveal | `sp-reveal sp-reveal--mask` | T2 index row titles (home block 2, inner T2 rows) and section H2s in blocks 3, 4, 6, 7, 8 | plantica `c-clip`: words rise out of an overflow mask, ≈ 0.8–1 s, power4-out, per-word stagger. Library: mask-position 1.2 s ease-out; rows get `sp-stagger` on the list wrapper so titles follow 0.12 s apart. |
| Stagger up | `sp-stagger` parent + `sp-reveal sp-reveal--up` children | Home block 4 mosaic cards (4) and block 3 picks thumbnails row (on the row container only if it scrolls horizontally on mobile) | plantica card entry, opacity 1 s / transform 0.8 s, power4-out; 0.12 s steps. |

- Not animated: hero (no reveal), the services price rows (block 6 and Services page), forms, checkout, legal text.
- Hover (CSS, not an sp effect): card and photo images `transform: scale(1.05)` with `transition: transform .8s ease` (token e), `transition-delay: 0s`.
- Must pass `check-parallax.mjs` (≥ 6 px layer shift, desktop and mobile; 0 under reduced motion; ≥ 3 reveals hidden before entry).

---

## 11. Responsive

- **390 px first screen:** header with wordmark plus MENU pill. H1 `3rem` (48 px), line-height 1.02, 3 lines max. Founder line. Photo row: H1 and H2 side by side as 2 columns (gap 12 px), tops stepped 0 / 32 px, 3:4, with the band behind the lower half. The text column moves under the photos (static flow). **No vertical text, no absolutely positioned labels over photos or text.** Col 1 photo still touches the left edge (bleed) inside `overflow: clip`; no horizontal scroll.
- T2 rows: titles `clamp(2.25rem, 9vw, 4.375rem)`, arrow right, pills wrap.
- 50/50 bleed halves (blocks 3, 7) stack: photo first at 4:5 full width, then text. Picks thumbnails become 2 × 2.
- Mosaic: 1 column (C1, C2, C3, C4 in order); 2 columns between 600 and 1023 px.
- **Price list (block 6, Services, cart):** at ≥ 782 px the list is **full container width** (1360 / content full), the price column `white-space: nowrap; text-align: right; min-width: 9ch` and never clipped or overflowing (auto-gates at 800 and 1280). Under 782 px each row stacks: name, description, then price on its own line, left-aligned.
- **Every table** (spec dl on product, size tables, WooCommerce cart table) stacks into label/value rows on mobile.
- Parallax stays on mobile with smaller `--sp-par`.

---

## 12. Similarity targets (≈ 80 % to plantica; values from `reference-tokens.md`)

| Dimension | Reference (token) | Ueki Gardens |
|---|---|---|
| Ground / ink | `#FEFFFE` / `#000300` (a) | `#FEFFFE` / `#0B110C` (+4 % L) |
| Body text | `#3E3E3E` (a) | `#3E3E3E` |
| Accent role & share | `#976AE1` menu pill, < 1 % (a) | `#748578` menu pill / dots, < 1 % first screen |
| Secondary band | `#CCCCCC` (Plants × Crafts) | `#D5DDD7` |
| First-screen saturated share | 5.8 % (a) | target ≤ 10 %, gate 15 % |
| Font class | grotesque PP Mori, 500 / 400 (b) | Figtree 500 / Manrope 400 |
| H1 | 125 px, 500, lh 1, 2 lines (b) | `clamp(3rem, 8.7vw, 7.8125rem)` = 125 px at 1440, 500, lh 1, 2 lines |
| Index titles | 70 px 500 uppercase lh 1, rows 104 px (b, c) | 4.375rem 500 uppercase lh 1, rows ≈ 104 px |
| Lead | 15 / 25.5 px, 377 px column (b) | 0.9375rem / 1.7, 377–420 px column |
| Nav / pills | 13 px 400 uppercase, 26 px pill, 1 px 20 % ink (b, d, f) | 13 px 500 uppercase, 26 px, 1 px `rgba(11,17,12,.2)` |
| Header height / side margin / container | 75 px / 40 px / 1360 (c) | 75 px / 40 px / 1360 |
| Hero positions | H1 y 202, founder y 480, photos y 601 (c) | H1 y ≈ 200, founder y ≈ 480, photos y ≈ 600 |
| Photo tops step | 601 / 658 / 715 (e) | +0 / +56 / +112 |
| Photo radius / ratio | 5 px, 3:4 portrait; bands edge-to-edge 0 (d, e) | 5 px, 3:4; bands 0 |
| Shadows | none (d) | none |
| Decoration | pills, ↘ arrows, 1 px rules, no shapes (f) | same set; no dots-as-ornament, no shapes |
| Motion easing / time | power4-out, transform 0.8 s, opacity 1 s (g) | `cubic-bezier(.25,1,.5,1)`, 0.8 s; mask 1.2 s (library) |
| Hover | image scale 1.05 / 0.8 s (e) | scale 1.05 / 0.8 s |
| Imagery | photographs, saturated studio flowers (intro) | photographs, high-key nursery documentary (own) |
| Section rhythm | 100–200 px gaps (c) | 160 px |

Photos, copy, the wordmark and the layout of each section are our own. We copy no plantica assets, text or logo.

---

## 13. Home acceptance checklist

1. First screen at 1440×900: white page, two-line Figtree H1 at ≈ 125 px across ≥ 80 % of the measure, founder line under it, three equal columns with tops stepped 0 / 56 / 112, photo H1 (trolley in the glasshouse aisle) bleeding off the left edge, H2 beside it, text column third. Photos cut by the fold. Sage band `#D5DDD7` visibly behind the row.
2. Header is split: pills left, lowercase wordmark centre, pills right with cart. All 26 px hairline pills.
3. No table, form, search, vertical text or overlaid labels on the first screen; saturated share ≤ 15 % (target ≤ 10 %).
4. Block order = §6 (8 blocks); T2 index rows with 70 px uppercase titles, ↘ arrows and pills in block 2.
5. Mosaic (block 4) shows 4 cards in mixed sizes (6/12 tall, 3/12, 3/12, 6/12 wide) with spec pills.
6. Parallax: hero photos at different speeds, B1 band at 10 %; `check-parallax.mjs` passes on desktop and mobile; mask reveal on T2 titles and H2s; stagger on the mosaic; no reveal in the hero or the price rows.
7. Services ledger: 5 rows, prices exactly as §9, full width at ≥ 782 px, price nowrap right, stacked on mobile.
8. ≥ 8 photo positions (14 planned), no repeats, same STYLE, no text/logos/hands issues.
9. Colours = §3; no beige, no saturated field; moss only for small roles.
10. Fonts: Figtree / Manrope plus Noto Sans TC / JP via theme.json fontFace, identical in the editor; max size ≥ 4.25rem.
11. 390 px: no horizontal overflow, no overlapping text, photos 2-up stepped, text below.
12. English home ≥ 250 words, ≥ 3 narrative paragraphs; all numbers match §9.
