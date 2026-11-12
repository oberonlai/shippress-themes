# Kakeru Run: design spec (stage B, binding for implementation)

Slug `kakeru-run`, running shoe fitting shop, type **store** (WooCommerce required, checkout must work). Main reference **4kake** (https://4kake.com/, S5-Style product site), secondary **Amprem** (https://amprem.jp/, colour relation only: one deep brown ground with off-white type). Measurements: `reference-tokens.md`; screenshots: `ref/`. Borrow structure, technique, key-visual concept and colour relationships. Never copy their photos, copy text, logo or the "4ke" glyph.

Design row b24-4: archetype card-mosaic, hero product-grid-hero, nav split, first_screen three-equal-columns, page_structure spec-catalogue, photo_direction high-key, font_direction **sans**.

Similarity target: **80%** to 4kake in palette relation, image presentation, scroll motion, decoration and layout. All numbers below cite their token (`tok:a`…`tok:g` = sections of reference-tokens.md).

---

## 0. Fixed facts (every page, every language, never change)

| Item | Value |
|---|---|
| Name | Kakeru Run ("kakeru" = to run / to dash) |
| Founded | **2014** |
| Address | **2140 Canyon Row, Boulder, Colorado 80302, USA** (fictional street) |
| Hours | **Tue–Fri 10:00–19:00 · Sat 09:00–17:00 · Sun 10:00–15:00 · Mon closed**. Gait sessions start on the hour, last start 18:00 (Sat 16:00, Sun 14:00) |
| Phone / mail | +1 (303) 555-0142 · hello@kakeru-run.example |
| Currency | **USD** in all five languages (no conversion) |
| Shipping | flat **$8** in the US, **free over $120**, ships in **1–2 business days** |
| Returns | **30 days**, unworn; pairs run only on our treadmill count as unworn |
| Special order (another last or size) | **10–14 days**, **$20** deposit credited to the pair |

### People (7, named everywhere the same)
| Name | Role | Note for copy |
|---|---|---|
| Noor Haddad | founder, head fitter | opened the shop in 2014 after years of club running and shop-floor fitting |
| Tomas Varga | co-founder, lasts and stock | chooses the four lasts and the six pairs, works with the partner factory |
| Priya Raman | gait session lead | trains every fitter on the session script |
| Daniel Osei | fitter, trail | runs the Saturday trail fittings |
| Lucía Ferreira | fitter | evenings and Sunday sessions |
| Ben Kowalski | workshop | moulded insoles, lacing, heel-lock set-ups |
| Hana Lindgren | orders desk | online orders, special orders, returns |

### The four lasts (core of "which lasts it stocks")
| Code | Last | Fits | Forefoot width (US M9, measured inside) |
|---|---|---|---|
| N | Narrow | low-volume feet, narrow heel | 94 mm |
| S | Standard | most feet | 98 mm |
| W | Wide | high-volume or wide midfoot | 103 mm |
| O | Open toe | wide forefoot, toes that spread on landing | 108 mm |

### The six pairs (house line made with a partner factory; WooCommerce products; label "PAIR 0x")
| Label | Name | Use | Lasts | Drop | Stack (heel) | Weight US M9 | Price |
|---|---|---|---|---|---|---|---|
| PAIR 01 | Daily | everyday training | S, W | 8 mm | 32 mm | 268 g | **$145** |
| PAIR 02 | Long | long runs | S, W | 6 mm | 38 mm | 285 g | **$165** |
| PAIR 03 | Tempo | faster days, races | N, S | 6 mm | 30 mm | 225 g | **$185** |
| PAIR 04 | Ridge | trail | S, W | 4 mm | 30 mm | 296 g | **$160** |
| PAIR 05 | Ease | recovery, walking | W, O | 4 mm | 34 mm | 252 g | **$125** |
| PAIR 06 | Open | open-toe trainer | O | 0 mm | 27 mm | 240 g | **$150** |

### Price list (services, 6 items; identical on Home, Gait session, Prices, all languages)
| Service | Time | Price |
|---|---|---|
| Gait session (treadmill, side and rear video, three pairs on two lasts) | 45 min | **$40**, credited if you buy a pair within 30 days |
| Quick fit (no treadmill) | 20 min | **Free** |
| Three-week re-check run | 20 min | **Free** with a pair |
| Moulded insoles | 30 min | **$60** |
| Lacing and heel-lock set-up | 10 min | **Free** |
| Special order (other last or size) | 10–14 days | **$20** deposit, credited |

### Gait session flow (4 parts, 45 min; not a step grid, see 4.3)
1. **Talk** 10 min — what you run, how often, what your current pair does well or badly.
2. **Watch** 10 min — your current shoes on the treadmill at an easy pace, filmed from the side and from behind; we look at where you land and how the foot rolls.
3. **Try** 20 min — three pairs on two lasts, two minutes each on the treadmill, played back side by side.
4. **Decide** 5 min — buy now, order online later from your session notes, or special-order.

### Ordering flow (3 ways)
In store after a session · online with your session code (notes kept 12 months) · special order (10–14 days).

### Stories (3, customers are fictional; no health or performance claims)
1. **Maren, 52** — back to running after ten years; moved from her old pair to Ease on the Open-toe last; "my toes finally have room on the downhill".
2. **Jonah, 31** — first marathon; tried Tempo on Narrow, settled on Long on Standard after the side video showed his heel slipping.
3. **Ama, 38** — trail 50 km; Ridge on Wide with a heel-lock lace set-up; came back for the three-week re-check.

### A day at the shop (brand.md "day" / "daily routine" paragraph)
09:30 treadmill belt check and camera charge; 10:00 doors open, first session; noon restock from the back wall of lasts; 17:00 evening runners after work; 19:00 the day's online orders go to the carrier.

---

## 1. Signature techniques (three, must be obvious at a glance)

### T1. Hexagon-outline stage inside a ruled grid with outer rails (4kake first screen; ref/fk-first.png)
- Reference: the whole page is a ruled grid. Two outer rail columns (128 px each at 1440, `--m: max(20px, 8.9vw)`, tok:c), content 1184 px = three equal cells of 395 px. Header row 125 px. The hero photo (1184×666, 1.78:1, r0, tok:e) fills the three middle cells edge to edge; in each rail cell, two long diagonal hairlines go from the rail's outer top and bottom corners of the stage row to a point at mid-height on the outer page edge, so the stage reads as an elongated hexagon. Under the stage, an empty 108 px cell row with the dot pager in the centre cell.
- Kakeru Run, home first screen: identical geometry. Header row 3 equal cells + 2 rail cells (125 px). Stage row: photo P01 (fitter + treadmill + bench pair) 1184×666, `object-fit: cover`, no radius, no mask, no shadow; left and right rail cells carry the diagonals: two `linear-gradient` hairlines per rail (top half: from the stage's top inner corner to the outer edge at 50% height; bottom half: back to the bottom inner corner), line 1 px `#1A1714` (0.5 px is invisible on 1x screens; tok:d says .5 px desktop, we use 1 px everywhere), drawn as CSS backgrounds on the rail cells (decoration only, no text). Under the stage: pager row 108 px with the three cells and both rails ruled; dots in the centre cell.
- Must not be diluted: rails must be visible ruled columns at ≥782 px (not white margins), the diagonals must meet in a point at the page edge, the photo must fill the 3 cells exactly (no padding, no rounded corners), the hairlines are ink `#1A1714`, not grey.
- Mobile (<782 px): rails shrink to 20 px (`--m` floor, tok:c) and stay ruled; the diagonals are replaced by a straight rail line (no points), the stage becomes 4:5 crop of P01, header becomes 2 cells (wordmark | menu + cart).

### T2. Specimen cells (4kake product tiles; ref/scroll-fk-2600.png)
- Reference: three equal 1:1 photos, each one object on its own coloured seamless paper, filling three equal cells edge to edge; between photo rows an empty "breathing" row of three ruled cells, 129 px high; wide photo pairs at 2-up 592 px (3:2); never mixed ratios in one row.
- Kakeru Run: each of the six pairs is photographed as a specimen: one shoe, top-down or 3/4, on its own muted seamless paper (sage, slate, clay, olive-grey, powder, kraft). Home row: P04 / P05 / P06 at 1:1, 395×395, edge to edge, 1 px hairline between them. Breathing rows of 129 px between every photo row on the home page (3 ruled empty cells, rails ruled).
- Under each tile: a 1 px ruled caption cell (height auto, padding `max(10px,1.1vw)` = 16 px): label "PAIR 01" (Albert Sans 0.775rem / 700 / 0.18em uppercase, tok:b), name Instrument Sans 1.65rem / 700 / 0.04em (tok:b 26.3 px), spec line "Lasts S · W — 8 mm drop — 268 g" 0.875rem, price right-aligned `white-space: nowrap`.
- Must not be diluted: tiles exactly 1:1 and touching (gap 0, only the 1 px line), papers are flat colour fields reaching all four edges, shoe never crosses the cell edge (no cut-outs, no broken frame), breathing rows really empty.

### T3. 2+1 info row with an outline pill and a rail slash cell (4kake "OBJECT 03" row; ref/scroll-fk-6500.png, ref/scroll-fk-lines-before.png)
- Reference: a row where one cell is text (small caps label, bold name, two lines, pill low-centre) and two cells are one wide photo; the photo on the right runs on into the right rail to the page edge; the left rail cell next to the text is filled with a strong colour with one diagonal hairline from top-left to bottom-right; the next such row is mirrored (photo left, pill cell right).
- Kakeru Run: text cell = label "LASTS" / "SESSION" / "ORDER", name 1.65rem, 2–4 lines of copy, outline pill (999 px radius, 1.5 px ink border, Albert Sans 0.845rem / 700 / 0.2em uppercase, tok:b, padding 20 px 56 px, height 66 px) placed low-centre (bottom 72 px). Pill ground: `#A8745A` clay (replaces yellow/red, see 2) in the first info row, white with ink outline in the mirrored row. Rail slash cell: filled `#A8745A` with one 1 px ink diagonal from top-left to bottom-right, only on the text side of the first info row; mirrored row uses no fill, slash only.
- Photo: 2-cell wide, 789×(row height ≥ 488) 3:2 ratio (tok:e), in the first row extending into the right rail to the viewport edge (like the reference), in the mirrored row staying inside the grid.
- Must not be diluted: the pill must be large (≥ 240×64 px), not a text link; the slash cell must be a solid colour block the full row height; the photo must touch the cell lines on all sides.

### Supporting decoration (not counted, but required on the first screen; KV checklist)
- **Outline monogram "KR"** of our own drawing (SVG in `assets/kr-monogram.svg`): K and R built from three long straight strokes each like a stride, stroke 22 px ink, no fill, inner box drawn with 1 px hairline (the reference's thin rectangle around the glyph), ~400 px wide, positioned on the line between header cell 2 and the stage, crossing ~100 px down into the stage top. Decorative `<img alt="">`, `pointer-events:none`.
- **Stacked letters in the left rail**: "K A K E R U" as six single letters in a paragraph (block markup, editable), each letter rotated 90° (`display:block; rotate: 90deg`), Instrument Sans 1.6rem / 500, top 12 px, gap 18 px. Desktop ≥782 px only; hidden below (no vertical type on mobile first screen).

### Continuation to inner pages (required; at least 4, we use 8)
| Page | T1 ruled grid + rails | T1 hexagon | T2 specimen cells | T3 info row + slash |
|---|---|---|---|---|
| Shoes (shop archive) | yes, every row ruled | page head stage: P03 in a short hexagon (1184×420) | the six products as 3-up 1:1 specimen cells + caption cells; breathing row every 2 rows | one "Which last?" info row (P16) above the grid |
| Single product | yes | — | gallery main image 1:1 specimen cell, thumbnails as 4 ruled cells | spec table + add to cart sit in the text cell; rail slash cell beside it |
| Lasts (spec catalogue) | yes | — | each last row's photo is a 1:1 specimen (P06, P04, P13, P15) | intro row P07 + each last = one 2+1 row, alternating mirror, slash cell on N |
| Gait session | yes | page head hexagon with P08 | — | 4 parts as two mirrored info rows (P09, P12) |
| Prices | yes | — | — | price list in a full-width ruled table, one rail slash cell at the head |
| About / People | yes | page head hexagon with P11 | 7 people as ruled text cells 3-up (no portraits) | founder info row with P16 |
| Stories (journal) | yes | — | post cards = 1:1 image cell + caption cell, 3-up | — |
| Visit / Contact | yes | — | — | address and hours in the text cell, P11 2-cell photo, slash cell |

---

## 2. Key visual concept

### (1) Reference first screen (4kake.com)
- **What is drawn**: a ruled grid; a three-cell split header (tagline "Objects for Discovery" + social icons | huge outline brand glyph | nav Objects · About · Contact) with account and cart icons in the right rail; one wide high-key still-life photo (plates and cutlery on grey paper) filling the stage; diagonal rail hairlines closing it into a hexagon; four pager dots in an empty row; the brand word stacked as rotated letters in the left rail.
- **Story**: "Objects for Discovery" — every product is a specimen laid out on its own paper, to be discovered one at a time; the grid is the shop's display case.
- **Signature motion**: grid hairlines draw themselves in (scaleX/scaleY 0→1, .9 s, cubic-bezier(.77,0,.18,1), tok:g); cell content rises 24 px; the stage slider crossfades between still lifes; a white intro curtain with the logo lifts (not used); hover swaps a photo for an alternate shot.

### (2) Our translated scene (running shoe fitting shop)
Same composition, same image type (high-key photo on a quiet grey-warm ground), same motion idea. The stage is **the shop's display case turned into the fitting room**: a high-key photo of a fitter (Noor) crouched beside a shop treadmill watching a customer's feet as they jog, and on a pale bench in the foreground another pair waits on its box. Story: "We watch how you land first, then show you the pairs worth trying." The specimen idea continues straight under the fold: the stocked pairs are laid out one per cell on their own seamless paper, like the reference's objects. The slider crossfades from the session (P01) to the bench of waiting pairs (P02) to one shoe as a specimen on grey paper (P03) — "watch → choose → the pair". The grid draws itself in as you scroll, exactly like the reference.

### (3) KV checklist (all items implemented and visible on the home first screen at 1440×900 unless marked)
| # | Reference element | Our equivalent | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Three-cell split header: tagline + icons / glyph / nav + cart | cell 1: tagline "Shoes fitted to how you land" (Albert Sans 1.05rem/700) + 2 small icon links (map pin → Visit, calendar → Book a session); cell 2: wordmark "Kakeru Run" (text logo) under the monogram; cell 3: nav Shoes · Lasts · Gait session · Visit; right rail: account + cart icons | top row, 125 px, 3 × 395 px between 128 px rails | none on load (hero no reveal); nav hover text roll .55 s (CSS) | — |
| 2 | Hexagon-outline stage with one wide still-life photo | P01 fitter + customer on treadmill + bench pair, in the hexagon outline made by the rail diagonals | row 2, 1184×666 at 1440, x 128–1312, y 125–791 | CSS-only crossfade P01 → P02 → P03, 6 s each (18 s loop), 1.2 s fade, `cubic-bezier(.77,0,.18,1)`; stops (shows P01) under reduced motion / `?sp-static` | P01, P02, P03 |
| 3 | Giant outline brand glyph crossing header into stage | own "KR" stride monogram SVG ~400×230 px, hairline inner box | centred on header cell 2, top −20 px, bottom ~100 px into the stage | none (static) | `kr-monogram.svg` (drawn, not a photo) |
| 4 | Brand word stacked as rotated letters in left rail | "K A K E R U" rotated single letters | left rail, top 12 px, ≥782 px only | none | — |
| 5 | Dot pager in an empty ruled row | 3 dots 7 px (tok:f) + "01 / 03" caption 0.775rem | pager row, centre cell, y ≈ 825 | active dot follows the crossfade (same CSS keyframes) | — |
| 6 | Specimen tiles on coloured paper below the stage | P04 / P05 / P06 three 1:1 tiles | row 4 (after breathing row), just below the fold; their top 8 px edge visible at 900 px height is not required | rise 24 px + stagger | P04, P05, P06 |

Intro curtain: deliberately not built (hero must render immediately); line draw-in replaces it. Crosshair cursor: not built (JS). Mobile 390: items 1 (2-cell version), 2 (4:5 stage), 5 must show; 3 shrinks to 120 px inside header cell 1 without touching text; 4 hidden.

---

## 3. Colour (tok:a; secondary relation from Amprem)

| Role | Hex | Source token | Use | Share (home) |
|---|---|---|---|---|
| Ground | `#FFFFFF` | tok:a white #FFFFFF | page, cells | ~50% |
| Stage mist | `#E4E1DD` | tok:a grey photo #B4B4BA, lightened and warmed for high-key (stage-a) | caption cells under specimens on hover, notice / empty-cart grounds, form fields | ~6% UI + photo greys |
| Ink | `#1A1714` | tok:a ink #111111 (+4% lightness, warm) | hairlines, text, nav, pill outline | ~12% |
| Body text | `rgba(26,23,20,.78)` | tok:a rgba(18,18,18,.75) | paragraphs | — |
| Main (Rikyu-cha) | `#6B5C4C` | design row hex; Amprem brown #4B3A2C–#6F4A28 relation | **one** brown band (home block 9 "Order"), footer ground, wordmark colour on hover, product "Add to cart" button | ~10% of full page, **0% on first screen** |
| Off-white on brown | `#F4F1EC` | Amprem off-white type | text on the brown band and footer | — |
| Clay accent | `#A8745A` | replaces tok:a yellow #FFFF00 / red #FF2E00 pills and red slash cell | first info-row pill fill, rail slash cell, link underline hover | ≤ 2% |
| Paper tints (inside photos only) | sage `#8F9A86`, slate `#5E6B78`, clay `#B08A6C`, olive-grey `#6E6B57`, powder `#C9D2DC`, kraft `#C49A72` | tok:a papers plum/olive/navy/kraft/powder → muted family; kraft and powder within ±5% of tok:a | seamless paper in specimen photos | 6–13% in scrolled views (ref 8–13%) |

- Why the reference accents change: yellow #FFFF00 / red #FF2E00 / green #00E244 are high-chroma fills; the quality rules forbid high-saturation colour areas and the design row asks for a quiet clay palette. Their **role and shape** stay (big pill, solid rail slash cell); only the hue becomes clay `#A8745A`.
- Contrast: ink on `#A8745A` 4.6:1 → pill text 0.845rem/700 uppercase is OK; `#F4F1EC` on `#6B5C4C` 6.0:1.
- **First-screen saturated share**: reference 0.5% (tok:a). Target ≤ 8%, hard cap **15%** (`scripts/check-first-screen.py`; row note cap 30% is looser, the 15% gate applies). Achieve with P01 graded high-key (white walls, pale grey treadmill, sand-coloured bench, shoes in grey/sage) and no brown or clay on the first screen.

## 4. Type (font_direction = sans)

- Latin display: **Instrument Sans** (variable 400–700); Latin body: **Albert Sans** (variable 400–700). Both sans; no serif anywhere.
- zh-TW: display `"Instrument Sans", "Noto Sans TC", "PingFang TC", "Microsoft JhengHei", sans-serif`; body `"Albert Sans", "PingFang TC", "Microsoft JhengHei", sans-serif` (body must not include the bundled zh family or a JP font — repo gate).
- ja: display `"Instrument Sans", "Noto Sans JP", "Hiragino Sans", "Yu Gothic", sans-serif`; body `"Albert Sans", "Hiragino Sans", "Yu Gothic", "Meiryo", sans-serif`.
- Loading: all through theme.json `fontFamilies` + `fontFace` (latin woff2 for both Latin families; Noto Sans TC zh-TW subset and Noto Sans JP ja subset, 500/700) so the editor iframe and the front end match; `:root:lang(zh|ja)` overrides in style.css → copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and require it. Use the Hokuto/Hada subset workaround (the zh subset script is broken).
- CJK: sizes ×0.75 for headings (`--kr-hs: .75`), body line-height 1.85, `line-break: strict`; fr/de `hyphens: auto`.

| Preset | Size | Use | Token source |
|---|---|---|---|
| small | 0.775rem, 700, ls 0.18em, uppercase | labels "PAIR 03", "LASTS" | tok:b 12.4 px / 700 / 2.2 px |
| pill | 0.845rem, 700, ls 0.2em, uppercase | pill text | tok:b 13.5 px / 700 / 2.7 px |
| base | 1rem / 1.8, ls 0.0375em | body | tok:b 16 / 28.8, .6 px |
| medium | 1.05rem, 700, ls 0.0375em | nav, tagline | tok:b 16.8 px / 700 |
| large | 1.65rem, 700, ls 0.04em, lh 1.25 | pair names, cell headings | tok:b 26.3 px / 700 / 1.05 px |
| x-large | 2.5rem, 700, lh 1.15 | section heads | tok:b H1 40 px / 800 |
| xx-large | **4.5rem**, 600, lh 1.02, ls −0.01em | the brown band heading, inner page H1 (`clamp(2.75rem, 5.2vw, 4.5rem)`) | ≥ 4.25rem rule; left-aligned, never centred |

Header/nav: one top menu only (split header = the 3-cell row). Under 782 px a "Menu" text button opens an overlay list.

## 5. Grid and layout tokens (all from tok:c, tok:d)

- `--kr-m: max(20px, 8.9vw)` rails (128 px at 1440); content = 3 equal columns (`grid-template-columns: var(--kr-m) repeat(3, 1fr) var(--kr-m)`), at 1440 each 394.67 px.
- Hairlines 1 px `#1A1714` on every cell edge (borders on cells, collapsed: each cell draws right + bottom). Info cells: 1.5 px outline (tok:d).
- Header row 125 px; breathing rows 129 px; pager row 108 px; cell padding `max(10px, 1.1vw)` (16 px at 1440); text cells inner padding 24 px top.
- Radius 0 on everything except pills (999 px). No shadows. No gradients except the rail diagonals.
- Header on scroll: sticky, row shrinks to 50 px (ref/scroll-fk-6500.png), monogram hidden after 125 px of scroll via `position: sticky` stacking (no JS: monogram is in the page flow, not in the sticky header).
- Width: `.alignfull` grid; nothing exceeds the viewport; `html, body { overflow-x: clip }`.

---

## 6. Home page

### First screen (1440×900)
Row 1 header (0–125): rails + three cells as KV #1; monogram crosses down. Row 2 stage (125–791): hexagon + P01 slider. Row 3 pager (791–899): dots in the centre cell, left cell holds the one-line intro "Since 2014 · 2140 Canyon Row, Boulder" 0.775rem uppercase, right cell holds a text link "Book a gait session →" (no button). Nothing else; no table, form or search; no big centred text. Text over the photo: none.
Mobile 390×844: header 64 px (wordmark + Menu + cart), stage 4:5 P01 full content width (350 px), pager row 64 px with dots; no rotated letters, no absolutely positioned text over anything.

### Block order (one continuous ruled grid; only block 9 is a coloured band)
| # | Pattern | Purpose | Layout and photos | Copy |
|---|---|---|---|---|
| 1 | `kr-stage` | KV, first screen | T1 header row + hexagon stage (P01/P02/P03) + pager row | tagline + 2 short lines |
| 2 | `kr-intro` | who we are | 2+1 row: 2-cell text (x-large heading "We watch how you land first." + 2 paragraphs) and 1 cell holding the four fixed facts as ruled lines (Founded 2014 / 4 lasts / 6 pairs / 45-min session) | 110 words |
| 3 | breathing row | rhythm | 3 empty ruled cells 129 px | — |
| 4 | `kr-specimens` | the pairs (T2) | P04 Daily (sage), P05 Long (slate), P06 Tempo (clay), 1:1 3-up + caption cells; under the row a full-width ruled cell with "All six pairs →" link right | 3 × 12 words |
| 5 | breathing row | | | — |
| 6 | `kr-lasts` | which lasts we stock (T3, first info row) | left rail slash cell clay + 1 text cell ("LASTS" / "Four lasts, one fit" / 70 words on N, S, W, O widths) + pill "See the lasts" (clay fill) + P07 four lasts on paper 2-cell, extending into the right rail | 70 words |
| 7 | `kr-lab` | parallax pause | **sp-parallax** row: P08 gait lab full content width + right rail (x 128 → viewport edge), height 560 px (420 px mobile); left rail empty ruled; a 1-cell caption plate under it (not on the image): "Side and rear video at an easy pace." | 20 words |
| 8 | `kr-session` | how a gait session runs (T3 mirrored) | P09 fitter checking toe room 2-cell left + text cell right with the 4 parts as a ruled list (Talk 10 / Watch 10 / Try 20 / Decide 5 min) + pill "Book a session" (white, ink outline); then a 3-cell row of the price list (first 3 items) as ruled lines, price right nowrap, link "All prices →" | 90 words + list |
| 9 | `kr-order` | how a pair is ordered — **the one brown band** `#6B5C4C`, full width incl. rails | xx-large heading "Order the pair you ran in." left over 2 cells, off-white; 3 equal ruled cells (hairlines `rgba(244,241,236,.35)`): In store / Online with your session code / Special order 10–14 days, each 30 words; P10 boxed pair top-down as a 1:1 tile in the right column of the heading row | 100 words |
| 10 | `kr-stories` | three customer stories | 3 equal cells: cell 1 = 1:1 photo P18 (Maren) with caption cell; cells 2 and 3 = text cells with label "STORY 02" / "STORY 03", a quote line in Instrument Sans 1.65rem and two sentences (Jonah, Ama); link "All stories →" | 3 × 40 words |
| 11 | `kr-visit` | visit / close | 2+1: text cell with address, hours (two-line list), phone; P11 shop front room 2-cell right; rail slash cell (slash only, no fill) | 50 words |
| footer | `footer` | | brown `#6B5C4C` ground, off-white; 3 cells: wordmark + address / nav / hours; rails ruled in `rgba(244,241,236,.35)` | — |

Home images: P01, P02, P03 (slider) + P04, P05, P06, P07, P08, P09, P10, P11, P18 = **12 distinct images**, 10 positions (slider counts once); none repeats on the page.

English home ≥ 300 words; narrative paragraphs in blocks 2, 6, 8, 9 (≥ 3).

### Comparison with recent home pages
| # | Ibuki Cardiology | Waku Exhibits | Misora Links | Kanjo College | **Kakeru Run** |
|---|---|---|---|---|---|
| 1 | white head band + photo + corner block | full-bleed hero | ticket-frame split hero | framed window hero | **3-cell split header + hexagon stage in a ruled grid with rails** |
| 2 | problem statement | photo-filled statement | stone sheet + card rail | prose intro | **2+1 ruled intro with fact lines** |
| 3 | clinics rows | hall rows | rounds band | four paper cards on ledger | **1:1 specimen tiles on coloured paper, edge to edge** |
| 4 | ticker | planning band | full-bleed course cover | 12-week timeline | **info row + clay slash cell + big pill** |
| 5 | first visit mirrored | parallax band | ink season band | parallax pause | **grid-confined parallax running into the right rail** |
| 6 | slate proof band | price table | people on pine | lecturers ledger | **mirrored info row with session parts + 3 price lines** |
| 7 | fees list | 3 stories | fee cards | fee table | **one brown order band (only coloured band)** |
| 8 | photo strip, people, news, close | request cards | stories, journal, close | stories, steps, news | **stories cells, visit 2+1, brown footer** |

Why not alike: none of the four uses an outer-rail ruled grid, a hexagon outline, edge-to-edge 1:1 specimen tiles, empty breathing rows or a rail slash cell; there is no band-per-section rhythm (one band only), no people grid, no timeline, no full-bleed photo hero with a caption block.

---

## 7. Inner pages (9 + WooCommerce templates; each page head = ruled grid row with H1, then its T1/T2/T3 per the table in 1)

1. **Shoes** (`archive-product.html`, `taxonomy-product_cat.html`, `product-search-results.html`): head hexagon 1184×420 with P03 (shoe on grey paper; P13 appears in the grid as Ridge); H1 "Six pairs, four lasts." (xx-large clamp); filter row of last pills (N / S / W / O, outline, active = ink fill); "Which last?" info row with **P16** (fitters reviewing a side-view frame); products 3-up 1:1 specimen cells with caption cells (label, name, lasts, drop, weight, price nowrap); breathing row after row 2; mobile 2-up then 1-up at <480.
2. **Single product** (`single-product.html`): 2+1: 2-cell gallery (main 1:1 specimen; 4 ruled thumbnail cells) + text cell (label "PAIR 03", H1 large→x-large, price, last select N/S/W/O as chips, size select, quantity, Add to cart = `#6B5C4C` ground off-white text, radius 999 px like the pill), rail slash cell clay beside the text cell. Below: spec table (Lasts, Drop, Stack, Weight, Use) full width ruled, 2 columns, value nowrap; then "Fitted in a session" line linking to Gait session; related 3-up specimens.
3. **Lasts** (`page-lasts`, the spec-catalogue core): H1 "Four lasts." Intro 2+1 row with **P07** (all four lasts). Then 4 info rows alternating mirror, each showing a pair made on that last: N → **P06** (Tempo), S → **P04** (Daily), W → **P13** (Ridge), O → **P15** (Open). Each row: forefoot width, who it fits, which pairs come on it, a pill "See pairs on S". Under them a full-width comparison table (Last / Width / Pairs) – mobile stacked.
4. **Gait session** (`page-gait-session`): head hexagon with P08; intro 2+1; the 4 parts as two mirrored info rows (P09 Watch/Try, P12 insole moulding → for "Decide and set-up"); price list excerpt (Gait session, Quick fit, Re-check); "Book" = contact link with session hours; FAQ as ruled text cells (6 Q/A).
5. **Prices** (`page-prices`): H1 "Prices"; the 6-item service table full width, rail slash cell at the table head; then the six pairs price list (name, lasts, price); shipping, returns, special-order facts as 3 ruled cells. Table rules in 8.
6. **About** (`page-about`): head hexagon with P11; story of 2014 (Noor, Tomas), "A day at the shop" paragraph (with the word "daily routine"), founder info row with P16; the 7 people as ruled text cells 3-up (name 1.65rem, role label, one sentence) — no portraits grid.
7. **Stories** (posts page `home.html`/`index.html`, `archive.html`, `category.html`, `tag.html`, `single.html`): 3-up post cards = 1:1 featured image cell + caption cell (label category, title 1.65rem, date). Single: 2+1 head (title cell + 2-cell featured image), body in a 2-cell column with ruled left rail. Six posts: 3 stories (Maren P18, Jonah P05, Ama P17) + 3 shop notes ("How we film a session" P09, "Why four lasts" P07, "Re-check after three weeks" P12). Categories: Stories, Shop notes; tags: road, trail, lasts, session. Archive page shows each image once.
8. **Ordering** (`page-ordering`): the three ways as a mirrored info row (P10) + ruled 3 cells; shipping, returns, special order facts; session code explanation; link to Shoes.
9. **Visit / Contact** (`page-contact`): 2+1: address, hours, phone, mail; **P02** (bench of waiting pairs) 2-cell; rail slash cell; a simple contact form (native/Jetpack-free HTML form block or core pattern) off the first screen; map is a text direction list ("5 min from the creek path"), no embed.
10. Newsletter screen = posts page; Cart, Checkout, My account, Order received: ruled grid with rails, H1 x-large, totals column in a 1.5 px outline cell.

Images may repeat across pages but never on the same page.

## 8. Responsive (hard)
- 390 px first screen: no vertical type, no rotated letters, no absolutely positioned text; monogram ≤ 120 px placed in the header cell beside the wordmark without overlapping it; stage photo is a normal block.
- 782 px and up: every table (Prices, spec table, lasts comparison, cart) is `width: 100%` of its grid span (3 cells), `table-layout: auto`; the price / value column `white-space: nowrap; text-align: right; padding-right: 16px`; no `overflow: hidden` on the table wrapper; must pass auto-gates at 800 and 1280.
- < 782 px: every table becomes stacked rows (`display:block` rows, `td::before` is NOT allowed for text → use a visible label `<span class="kr-th">` inside each cell, written in the block markup), price stays on the same line as its label, right-aligned.
- Grid: 3 columns ≥ 1024; 2 columns 782–1023 (specimens 2-up, info rows stack text over photo); 1 column < 782 with 20 px rails. Breathing rows 64 px on mobile.
- No horizontal overflow at 390 and 1280 (P08 parallax band extends to the viewport edge only, never beyond).

## 9. Images (18 files; IMAGERY = photo, high-key real photography per stage-a)

STYLE (one string for every image):
`High-key documentary and still-life photograph, soft even daylight from a large window, bright white and pale warm-grey surroundings, gentle shadows, true-to-life muted colours, clean modern running shoe shop or seamless paper studio, 35mm lens look, sharp focus, no text, no logos, no brand marks on shoes, no Japanese elements, plain unbranded running shoes with simple knit uppers and smooth foam soles, diverse adults`

| # | Subject and composition | Ratio / size | Used on (page → block) | Home |
|---|---|---|---|---|
| P01 | KV: a fitter (woman, 30s, dark hair tied back) crouching at the side of a white shop treadmill, watching the feet of a customer (man, 40s) jogging; in the foreground a pale wooden bench with one unbranded running shoe pair resting on its box; white walls, wall of shoes softly out of focus; wide 3/4 view | 16:9, 1920×1080 | Home → stage slide 1 | ✔ |
| P02 | the pale bench with three pairs waiting on boxes in a row, treadmill edge at frame side, high-key | 16:9 1920×1080 | Home → stage slide 2; Visit → 2+1 | ✔ |
| P03 | one shoe 3/4 view on seamless light grey paper, centred, lots of air | 16:9 1920×1080 | Home → stage slide 3; Shoes → head hexagon | ✔ |
| P04 | PAIR 01 Daily, single shoe top-down on sage seamless paper (#8F9A86) | 1:1 1200 | Home → specimens; Daily product; Lasts → S row | ✔ |
| P05 | PAIR 02 Long, top-down on slate paper (#5E6B78) | 1:1 1200 | Home → specimens; Long product | ✔ |
| P06 | PAIR 03 Tempo, light racer, top-down on clay paper (#B08A6C) | 1:1 1200 | Home → specimens; Tempo product; Lasts → N row | ✔ |
| P07 | four plain shoe lasts (pale wood/grey polymer) in a row from narrow to open-toe, top-down on kraft paper | 3:2 1800×1200 | Home → lasts row; Lasts → first row; Stories → "Why four lasts" | ✔ |
| P08 | gait lab: side view at ankle height of a runner's feet on the treadmill belt, small camera on a tripod in the foreground, white wall | 16:9 1920×1080 (wide crop for parallax, subject in centre 60%) | Home → parallax band; Gait session → head hexagon | ✔ |
| P09 | fitter's hands pressing the toe of a shoe on a seated customer's foot, close 3/4 | 3:2 1800×1200 | Home → session row; Gait session → row 1; Stories → "How we film a session" | ✔ |
| P10 | boxed pair top-down on a packing table, tissue folded open, kraft box without print | 1:1 1200 | Home → order band; Ordering → info row | ✔ |
| P11 | the shop room: long white wall of shoes on shallow shelves, treadmill in the middle, large window light, empty | 3:2 1800×1200 | Home → visit; About → head hexagon | ✔ |
| P12 | workshop: hands moulding an insole on a warm plate, bench of tools, high-key | 3:2 1800×1200 | Gait session → row 2; Lasts → W row; Stories → "Re-check" | |
| P13 | PAIR 04 Ridge trail shoe top-down on olive-grey paper (#6E6B57) | 1:1 1200 | Ridge product; Shoes grid; Lasts → W row | |
| P14 | PAIR 05 Ease top-down on powder paper (#C9D2DC) | 1:1 1200 | Ease product; Shoes grid | |
| P15 | PAIR 06 Open (wide open-toe) top-down on kraft paper (#C49A72) | 1:1 1200 | Open product; Shoes grid; Lasts → O row | |
| P16 | two fitters (man 50s and woman 20s) at the bench looking at a tablet with a side-view frame (screen blank/blurred) | 3:2 1800×1200 | About → founder row; Shoes → "Which last?" row | |
| P17 | runner on a gravel trail at early morning, high-key pale sky, seen from the side at a distance | 3:2 1800×1200 | Story "Ama" | |
| P18 | woman in her 50s easy-running on a pale park path, soft morning light, side view | 1:1 1200 | Home → story 1; Story "Maren" | ✔ |

**Total 18 files: P01–P18** (webp, ≤ 300 KB, ≤ 2000 px). Jonah's story reuses P05 (Long) on the Stories page only.
Each generated image is checked with Read: no text, no logos or brand stripes, faces and hands natural, same daylight high-key look; regenerate otherwise. No cut-outs (0 background removals).

## 10. Scroll motion (sp-scroll only; ≤ 3 effects per page; hero none)
| Effect | sp-* class | Where | Source (tok:g) | Values |
|---|---|---|---|---|
| Hairlines draw in (vertical lines grow downward) | `sp-reveal sp-reveal--wipe` on each breathing row and on each info row wrapper (the clip is on its child, the ruled cells) | home rows 3, 5, 6, 8, stories row; inner pages: every breathing row and info row | 4kake grid lines scaleY 0→1, .9 s, cubic-bezier(.77,0,.18,1), IO threshold .05 | built-in wipe 1.1 s `cubic-bezier(.77,0,.175,1)` (≈ reference); set `--sp-delay: .1s` on the second wipe in a pair |
| Cell content rises | `sp-stagger` on the specimen row / people row / post grid, `sp-reveal sp-reveal--up` on each cell | home row 4, stories row 10; Shoes grid (first 6), About people, Stories archive | 4kake content 24 px, .9 s, cubic-bezier(.22,1,.36,1), stagger --dc | `--sp-dist: 24px; --sp-dur: .9s; --sp-ease: cubic-bezier(.22,1,.36,1)` in `:root`; stagger built-in .12 s |
| Parallax (required) | `sp-parallax` on the `kr-lab` Cover (background = P08) | home block 7; also Gait session head (P08) is NOT parallax (hexagon stays still) | 4kake has none; our own pause, slow like the reference's slider fades | `--sp-par: 10%` desktop, `--sp-par: 6%` at < 782 px (kept on mobile); foreground caption plate is outside the cover, so no text moves |

Not animated: hero stage (slider crossfade is CSS keyframes, not a reveal), price tables, forms, legal text, the brown band text (static). Hover (CSS only): nav underline grows left→right .55 s cubic-bezier(.77,0,.18,1) (stands in for the reference's text roll; no CSS `content:` text), specimen photo hover = caption cell background `#E4E1DD` .3 s. The CSS crossfade and pager dots are disabled under `prefers-reduced-motion` and `html.sp-no-motion` (show P01, dot 1 active).

## 11. Similarity table (target 80%)
| Dimension | 4kake value (token) | Kakeru Run value |
|---|---|---|
| Grid | rails max(20px, 8.9vw), 3 × 395 px cells (tok:c) | same |
| Header | 3 equal cells, 125–129 px, sticky 50 px (tok:c) | 3 equal cells, 125 px, sticky 50 px |
| Hero | 1184×666, 1.78:1, r0, slider + 4 dots 7 px (tok:e,f) | 1184×666, r0, 3-slide CSS crossfade (P01/P02/P03) + 3 dots 7 px |
| Hexagon rail diagonals | yes (tok:f) | yes, 1 px ink |
| Brand glyph | ~400 px outline glyph crossing header→stage (tok:f) | own "KR" monogram ~400 px, same position |
| Rail letters | stacked rotated letters (tok:f) | "KAKERU" stacked rotated letters |
| Breathing rows | 129 px empty ruled rows (tok:c) | 129 px (64 px mobile) |
| Product tiles | 1:1 3-up edge to edge on coloured paper (tok:e) | same, muted papers |
| Info row | 2+1, label 12.4/700/2.2 px, name 26.3/700, pill 13.5/700/2.7 px 999 radius, slash cell (tok:b,d,f) | same values, clay fill instead of yellow/red |
| Lines | .5 px #111 (tok:d) | 1 px #1A1714 |
| Radius / shadow | 0 except pills; none (tok:d) | same |
| Body type | 16/28.8 px ls .6 px, Helvetica/Inter (tok:b) | 1rem/1.8 ls .0375em, Albert Sans / Instrument Sans |
| Colour first screen | white 34%, grey photo 45%, ink 8%, saturated 0.5% (tok:a) | white ~40%, high-key photo ~48%, ink ~8%, saturated ≤ 8% |
| Accent | yellow / red / green pills (tok:a) | clay #A8745A (quiet-palette rule) |
| Coloured ground band | none on 4kake; Amprem deep brown | one brown #6B5C4C band + footer |
| Motion | lines .9 s cubic-bezier(.77,0,.18,1); content 24 px .9 s cubic-bezier(.22,1,.36,1) (tok:g) | wipe 1.1 s cubic-bezier(.77,0,.175,1); up 24 px .9 s cubic-bezier(.22,1,.36,1) |
| Parallax | none (tok:g) | sp-parallax 10% / 6% on P08 band (required by pipeline) |

## 12. Home acceptance checklist
- [ ] 1440 first screen = 3-cell header with rails, hexagon stage with P01 filling 1184×666, KR monogram crossing into the stage, KAKERU rail letters, pager row with dots; no text over the photo; saturated ≤ 8% (cap 15%).
- [ ] Hexagon diagonals meet at the page edge; hairlines are ink, 1 px, on every cell.
- [ ] Specimen row: three 1:1 tiles touching, each on a different paper colour, captions with label / name / spec / price nowrap.
- [ ] Breathing rows 129 px present between photo rows (≥ 2 on the home page).
- [ ] Lasts info row: clay rail slash cell, pill ≥ 240×64, P07 runs into the right rail; mirrored session row follows.
- [ ] Parallax band P08 moves ≥ 6 px vs foreground at desktop and mobile; 0 under reduced motion (`check-parallax.mjs`).
- [ ] Exactly one brown band (order) + brown footer; no other coloured section backgrounds.
- [ ] ≥ 8 image positions, no image twice on the home page.
- [ ] Prices on home = price list table in section 0 ($40, Free, Free); pair prices = $145 / $165 / $185.
- [ ] Fonts: Instrument Sans headings, Albert Sans body, same in editor; max preset 4.5rem used on the brown band heading.
- [ ] 390 px: no rotated letters, no overlapping text, no horizontal scroll; tables stacked.
- [ ] `?sp-static` shows everything; `?sp-motion` scroll to bottom leaves no hidden element.
- [ ] auto-gates `1 1` pass for en.
