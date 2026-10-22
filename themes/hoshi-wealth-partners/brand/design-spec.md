# Hoshi Wealth Partners: design spec (stage 1, binding for implementation)

Slug `hoshi-wealth-partners`, row b7-10. Fee-only wealth-management firm, type `business` (declares WooCommerce support, does not need it, must work without it). The site is told through its advisers (page structure **people-story**): an editorial headline over a framed portrait, a profile row for each partner and the families they serve, the investment approach, and a private introductory meeting.

References (measurements in `reference-tokens.md`, screenshots in `ref/`):
- **R1 (main, 80% similarity target)** Naito & Otsuka Law Office, https://naito-otsuka.com/ (S5-Style, professional firms). Grain-paper ground, monochrome grain photography, mixed serif + grotesque uppercase headline overlapping photos, ruled 3-column service rows on a dark band with a sticky chapter card, full-bleed strip with a counter chip, framed lawyer portrait with an accent block and sprocket dots.
- **R2 (secondary, structure only)** Crea Life Partners, https://crea-lp.com/ (S5-Style, financial planning). One idea only: a flat panel sitting on a full-bleed photo with a centred label and a short rule. Its lime/olive colours are **not** used.

Borrow shapes, composition, proportions, colour relationships and motion timing. Never copy R1/R2 copy, photos, logos or wordmarks.

Fixed brand facts (every page and all five languages): **Hoshi Wealth Partners**, fee-only, founded **2009**, office **1418 Western Avenue, Suite 600, Seattle, WA 98101, USA** (fictional suite). Named after founding partner **Naomi Hoshi-Clarke**. Currency **USD** in every language (no converted prices). Seven people (section 7). No performance numbers, no return promises, no awards, no media, no real certifications or trademarks.

Class prefix for theme CSS: `hp-`.

---

## 1. Signature techniques (three, all obvious at a glance)

### T1. Mixed serif + grotesque uppercase headline overlapping two framed photos (R1 hero, candidate C1)
- **R1:** a 3-line English sentence in uppercase, words alternating between a high-contrast serif (Cormorant Garamond 600) and a grotesque (Heebo 500), cap height about 110–130 px at 1440. Line 1 starts at the left (x86), line 2 is split (one word at the left, one at the right edge), line 3 is right-aligned (ends x1350). Under it a 2:1 landscape photo 450×225 at x182 (13% of width, y351) with a 12 px uppercase caption under it, and a 450×450 square portrait from x990 bleeding off the right edge (y351→801). Line 3 overlaps the top of both photos by about 60 px. One word has a noisy, slightly blurred edge. (`tok(b)` display, `tok(e)` Hero A/B)
- **Hoshi, home hero (1440×900):**
  - Words: line 1 `STEADYING` (serif) `THE` (sans); line 2 `MONEY.` (sans, left, noisy edge) … `PLANNING` (sans, flush right); line 3 right-aligned `THE` (sans) `DECADES.` (serif). Each word is its own `<span class="hp-w hp-w--serif|--sans">` inside one `h1`, so screen readers read "Steadying the money. Planning the decades."
  - Serif = **EB Garamond 500**, sans = **Heebo 500**, both uppercase, colour ink `#212836`, size `clamp(2.25rem, 8.6vw, 8.25rem)` (124 px at 1440; theme.json preset `display` = 8.25rem is the max size, ≥ 4.25rem rule met), line-height 0.92, letter-spacing −0.01em (serif) / 0 (sans). Block from x86 to x1350 (container 1264 wide, `tok(c)` hero headline). Top of line 1 at 24 px under the 80 px header.
  - Noisy edge on `MONEY.` only: `text-shadow: 0 0 1px rgba(33,40,54,.55), 1px 0 2px rgba(33,40,54,.25), -1px 0 2px rgba(33,40,54,.18)` (stand-in for R1's blurred word; no image, no filter on the whole h1).
  - Photo A: **P01** 2:1, width 31.25vw (450 at 1440), left edge at 12.6vw (x182), `object-fit: cover`, radius 0. Caption under it, 14 px gap: `HOSHI WEALTH PARTNERS · FEE-ONLY SINCE 2009` Heebo 500 0.75rem uppercase, letter-spacing 0.04em, ink.
  - Photo B: **P02** 1:1, width 31.25vw, from x 68.75vw to the viewport right edge (bleeds, `margin-right: calc(50% - 50vw)` inside an alignfull wrapper), top aligned with Photo A. Caption under it right side, 12 px caps: `NAOMI HOSHI-CLARKE, FOUNDING PARTNER`.
  - Overlap: the photo row is **in flow** with `margin-top: -3.75rem` (≈ 60 px at 1440) so line 3 sits over the top of both photos; `h1` has `position: relative; z-index: 2`. No absolute positioning. Both photos are generated with a light top quarter (window light) so ink text stays readable (≥ 4.5:1 on the overlapped area; check at implementation).
- **Mobile 390:** h1 left-aligned on all three lines (no split right word), size 2.25rem (36 px), words wrap naturally; no overlap with photos (`margin-top: 1.5rem` instead of negative). Photo A full width minus 24 px gutters, caption under it; Photo B 78% wide, flush to the right viewport edge, caption under it. **No vertical text, no absolutely positioned labels over text** on the first screen.
- **Must not be diluted:** the serif/sans alternation must be visible in every line; the headline must be ≥ 7.5rem at 1440; line 3 must visibly overlap both photos; Photo B must bleed off the right edge; photos stay monochrome, square-cornered.

### T2. Ruled partner rows on a dark band with a sticky chapter card (R1 service section, candidates C2 + C3)
- **R1:** a full-bleed dark band `#40403D`. A light chapter card (405 wide, "SERVICE" + "CHAPTER: 01") sits at the top centre over the photo column and stays sticky while the rows scroll. Each row (611 px incl. a 1 px top rule) has an 8 px red dot + `SERVICE 01` label (12 px caps) at the left, then 3 columns: title (muted large caps + JP subtitle) with a MORE button at the bottom (2 px top rule, 1 px bottom rule, 66×24 stone chip with a hairline arrow) | a centred 405×405 grain photo at x518 | a bottom-aligned list of links with 1 px rules and 26 px hairline arrows at x1050. Column widths 292 | 405 | 292, gaps about 125. (`tok(c)` grid, `tok(d)` button, `tok(f)` dot/rules/arrow)
- **Hoshi, home block 4 "Partners":**
  - Section `alignfull`, background `#40403D`, padding 0 0 120 px, `overflow: clip` (never `hidden`, sticky must work).
  - Chapter card: first child, width 405 px, height 120 px, centred on the photo column (x518→923), background `linear-gradient(#F2F2E9, #DCDCD3)`, `position: sticky; top: 80px; z-index: 3; margin-top: -40px` (straddles the band's top edge by 40 px). Inside: `PARTNERS` Heebo 500 2.205rem (35.28 px) uppercase ink, line-height 1.1, left at 44 px; `CHAPTER: 01` Heebo 500 0.75rem uppercase right-top. Below 782 px the card is static (not sticky) and full width minus 24 px.
  - Three rows (Tomás Ferreira, Priya Raman, Henrik Aalto; Naomi is the hero). Each row: `border-top: 1px solid rgba(183,183,177,.35)`, padding 18 px 0 100 px, min-height 600 px at ≥1024. Row label `• PARTNER 01`: dot 8 px circle `#A8A672` (olive tint for dark ground), gap 8 px, Heebo 500 0.75rem uppercase `#B7B7B1`.
  - Grid at ≥1024: `292px 1fr 292px` inside the 1244 container, middle column centres the 405 px square. Row content starts 80 px under the label.
    - Left column: surname-first name in Heebo 500 3.25rem uppercase, line-height 1.05, colour `#9C9C96` (R1 muted title, lifted to ≥ 3:1 for large text), two lines (`TOMÁS` / `FERREIRA`); role under it Heebo 400 1.2425rem (19.88 px) `#B7B7B1`, letter-spacing 0.04em; then a 35-word line on who they serve, 0.9375rem/1.7 `#D6D6CF`. Bottom of the column (`margin-top: auto`): the R1 button — width 292, height 60, `border-top: 2px solid #B7B7B1; border-bottom: 1px solid #B7B7B1`, no side borders, label `PROFILE` Heebo 500 1.125rem `#D6D6CF` left, chip 66×24 `#B7B7B1` right holding a 26 px hairline arrow in `#40403D`. Hover: chip `#F2F2E9`, 0.3s ease.
    - Middle: square portrait 405×405 (28% of width), grain monochrome, radius 0: P04 / P05 / P07.
    - Right column, `align-self: end`: heading `FAMILIES SHE/HE WORKS WITH` 0.75rem caps `#B7B7B1`, then 4 links, each 34 px tall, `border-top: 1px solid rgba(183,183,177,.5)` (last also bottom), Heebo 400 0.9375rem `#D6D6CF`, letter-spacing 0.04em, 26 px hairline arrow right (`→` drawn as 1 px line + 5 px head, colour `#B7B7B1`). Links go to Services anchors and Stories.
  - Under the three rows: right-aligned R1 button `ALL SEVEN PEOPLE` (same button, 292 wide) → /people/.
- **Mobile:** label, name (2.25rem), role, line, square photo full width, link list, button; rows padding 18 / 64.
- **Must not be diluted:** dark band `#40403D` full-bleed (not a softened grey or card); the light chapter card must stay sticky and visibly pinned while rows scroll; the photo must sit centred as a square between two narrow text columns (not a 2-column split); 1 px rules and the dot label on every row; the button keeps 2 px top + 1 px bottom with the stone chip.

### T3. Framed portrait with thin rules, an olive block, sprocket dots and a vertical word (R1 lawyer section, candidate C4)
- **R1:** ground section with a 187 px left rail holding the rotated word `LAWYER` (80 px, ink) and a 1 px vertical rule at x187; another vertical rule near the right edge. A name in caps serif sits on a horizontal 1 px rule above a cut-in photo; one letter of the name in red; a flat red block (about 116 wide) overlaps the photo at its left; three small white squares (sprocket dots) on the block's top; thin rules cross the frame. (`tok(e)` lawyer portrait, `tok(f)` vertical word)
- **Hoshi, home block 6 "Families":**
  - Section `alignfull`, ground, padding 0 (rules reach the section edges), min-height 820 at 1440.
  - Rail: left 187 px, `border-right: 1px solid #212836`. Word `FAMILIES` Heebo 500 5rem (80 px) ink, `writing-mode: vertical-rl; transform: rotate(180deg)` reading bottom-to-top as R1, top at 50 px. Second vertical rule at 60 px from the right viewport edge.
  - Text column x278→700: label `• CHAPTER: 03 — STORY 01` (olive dot 8 px `#6B6A3E`), heading EB Garamond 500 2.6rem/1.15 `The Moreau-Adeyemi family`, role line 0.875rem caps `THREE GENERATIONS · CLIENTS SINCE 2014`, two paragraphs (110 words), R1 button `READ THE STORY` (ink rules on ground, chip `#212836` with ground-colour arrow) → Stories#moreau-adeyemi.
  - Frame x765→1380 (right of the text): a horizontal 1 px ink rule at 75 px from the section top runs from x765 to the right rule; on it the name `MOREAU-ADEYEMI` EB Garamond 500 2rem uppercase ink, the `A` of ADEYEMI in olive `#6B6A3E` (R1 initial highlight). Photo **P09** 4:5, width 555 (x825→1380), top at the rule, radius 0, monochrome grain. A second 1 px vertical rule at x825 runs the full section height (the photo's left edge sits on it).
  - Olive block: 116×150, `#6B6A3E` with the grain overlay, positioned in flow by a grid overlap: column x765→881, rows from 40% to 58% of the photo height, so it covers the photo's left 56 px (`margin-right: -56px; z-index: 2`). On its top edge three sprocket dots: 10×14, radius 2, `#F2F2E9`, gap 8, starting 14 px from its left.
  - Under the text column: three ruled rows (stories 02–04), each `STORY 02` caps + name + one-line summary + hairline arrow, 1 px ink rules (`tok(f)` arrow link).
- **Mobile:** rail becomes a horizontal 2.5rem `FAMILIES` heading above, left rule removed; frame: name on its rule, photo full width minus 24 px, olive block 72×96 overlapping the photo's left edge by 24 px (in flow, negative margin), dots 8×11.
- **Must not be diluted:** the vertical word ≥ 4.5rem with its 1 px rail rule (desktop); the thin rules visibly cross/frame the photo; the olive block overlaps the photo (not beside it) and carries the 3 sprocket dots; one olive letter in the name.

### Supporting moves (not counted as signatures)
- **S-strip (R1 C3 strip):** full-bleed 1440×420 photo strip with a flat olive counter chip 174×74 at bottom right, `02 | 03` Heebo 500 0.875rem `#F2F2E9` with a 1 px × 16 px divider; this is the main **sp-parallax** (section 6).
- **S-panel (R2 C5):** flat ground panel 700×540 centred on a full-bleed photo, centred label + 40 px × 1 px rule; used for the meeting close (second parallax). R2's pill button is replaced by the R1 ruled button (radius 0 everywhere, `tok(d)`).
- **Grain ground (R1 a):** body background `#F2F2E9` + an SVG `feTurbulence` noise tile (baseFrequency 0.9, 2 octaves, opacity 0.07, 160 px tile, data URI) + horizontal scan lines `repeating-linear-gradient(to bottom, rgba(33,40,54,.025) 0 1px, transparent 1px 4px)`. Same grain overlay (opacity 0.12) on the olive block/tile/chip.

### Continuation to inner pages (each technique on ≥ 4 inner pages)
| Page | T1 mixed headline + photo | T2 dark band ruled rows + sticky card | T3 framed portrait + olive block + vertical word |
|---|---|---|---|
| About the firm | `A FIRM / PAID ONLY / BY YOU.` (serif FIRM, PAID; sans others) + P03 2:1 | — | Naomi founder letter: rail word `FOUNDER`, P02 framed, `O` of HOSHI olive |
| People | `SEVEN PEOPLE, / ONE TABLE.` + P16 2:1 | 4 partner rows (P02, P04, P05, P07), card `PEOPLE / CHAPTER: 01`; associates as text-only ruled rows below | — |
| Approach | `FEWER MOVES, / BETTER REASONS.` + P14 2:1 | S-strip P08 (parallax) under the head, then 4 principle rows (label `PRINCIPLE 01`), middle squares P01, P11, P13, P12, card `APPROACH / CHAPTER: 02` | — |
| Services | `PLANS THAT / OUTLAST / A MARKET.` + P13 2:1 | 4 service rows (Planning P01, Retirement income P11, Investment management P08, Tax & estate coordination P14), card `SERVICES` | — |
| Fees | `PLAIN FEES, / IN DOLLARS.` + P14 2:1 | — (price list on ground, section 4) | small frame: P10 with olive block, rail word `FEES` (close panel on this page uses P03) |
| Stories | `FOUR FAMILIES, / FOUR DECADES.` + P03 2:1 | — | each of the 4 stories as a T3 frame (P09, P11, P12, P13), mirrored left/right alternately; rail word `STORY 01`… |
| Introductory meeting | `SIXTY MINUTES. / NO PITCH.` + P10 2:1 | process as 4 ruled rows on the dark band (label `STAGE 01`, middle column = duration in EB Garamond 5rem `#9C9C96` instead of a photo) | — |
| Letters (index, archive, single) | index head `LETTERS / FROM THE DESK.` + P14 2:1 | — | single post: featured image in the T3 frame with olive block (no rail word) |
| Contact / Office | `1418 WESTERN / AVENUE.` + P15 2:1 | — | P03 framed with olive block, rail word `OFFICE` |
| Disclosures | small head only (two words, no photo) | — | — |

Inner T1 heads: 2–3 lines, `clamp(2.25rem, 6vw, 5.5rem)`, same serif/sans alternation, photo 2:1 at 31.25vw from 12.6vw with the last line overlapping its top by 2.5rem (desktop only), caption under it. Every inner page then ends with the S-panel close (no parallax on inner pages except Approach strip and the close panel, see section 6).

---

## 2. Colour (R1 relationships kept; accent changed)

| Role | Hex | Source (`tok(a)`) | Use | Share of home |
|---|---|---|---|---|
| Ground | `#F2F2E9` | R1 surface-100 | page ground + grain | ~50% |
| Ground 2 | `#EEEEE2` | R1 surface-200 | chapter card gradient end `#DCDCD3`, letters hover | ~3% |
| Ink | `#212836` | R1 grayscale-900 | text, rules, h1, footer ground | ~10% (footer incl.) |
| Dark band | `#40403D` | R1 surface-800 | Partners band + approach text area | ~25% |
| Stone | `#B7B7B1` | R1 surface-500 | text/rules/buttons on dark | ~3% |
| Muted text | `#5C5F66` | derived from ink | captions, meta | — |
| Accent | `#6B6A3E` | **row hex 海松色** (replaces R1 red `#D3030F`) | dots, olive tile, chip, block, one letter, link hover | ≤ 2% (never a section ground) |
| Accent tint | `#A8A672` | accent lightened for dark ground | dots on `#40403D` | < 0.5% |
| Photos | monochrome grain | R1 `tok(e)` treatment | — | ~20% |

- Why the accent changes: red on a wealth-management site reads as loss/alerts and the row requires `#6B6A3E`; the role, size and positions of R1's red are kept exactly (8 px dots, 174×74 chip, 116 px block, one letter, one flat tile). Contrast: `#6B6A3E` on `#F2F2E9` ≈ 5.1:1 (fine for 12 px labels next to dots; the dot itself is decoration).
- Not beige-led: the ground is R1's cool grey-green paper `#F2F2E9` with grain, not cream; the dark band and ink carry the page.
- **First screen saturated pixels: target ≤ 3%, hard cap 15%** (`scripts/check-first-screen.py`). R1 measures 1.5%. Everything on the first screen is monochrome except the 8 px olive dot of the Letters label.
- Avoids recent mains: Mochi mustard `#B8973F`, Kanade celadon `#7FA393`, Denki, Shikaku.

## 3. Type

- **EB Garamond** (OFL) 400/500/italic: serif display words, section headings, names, prices. **Heebo** (OFL) 400/500: sans display words, nav, labels, body. Verify both licence files when building. Lato (row) is not used: Heebo matches R1's grotesque (`tok(b)`), two families only.
- Body: Heebo 400 1rem (16 px) / 1.6 (R1 1.5 for JP; Latin needs 1.6), letter-spacing 0.04em → 0.02em for Latin body (R1 0.04em kept for labels), ink.
- theme.json font sizes: `x-small` 0.75rem (12 px caps captions, `tok(b)` micro) · `small` 0.875rem (14 px dates) · `medium` 1.125rem (button 18 px) · `large` 1.2425rem (19.88 px sub-head) · `x-large` 2.205rem (35.28 px EN section title, lh 1.1, ls 0.02em, uppercase Heebo 500) · `xx-large` clamp(2.25rem, 6vw, 5.5rem) (inner T1 heads) · `display` clamp(2.25rem, 8.6vw, 8.25rem) (home h1; **max 8.25rem ≥ 4.25rem**).
- Section headings on ground (Letters, Prologue, Families heading): EB Garamond 500 2.6rem/1.15 sentence case. Section labels: 8 px dot + Heebo 500 1.1rem uppercase (`TOPICS` size in R1 ≈ 20 px) for block labels, 0.75rem for row labels.
- zh-TW Noto Serif TC / ja Noto Serif JP for EB Garamond roles at ×0.75, body line-height 1.85; CJK body falls back to Noto Sans TC/JP (Heebo has no CJK glyphs). In zh-TW/ja the h1 is translated into 3 short lines, Noto Serif spans for the "serif" words and Noto Sans spans for the "sans" words, size ×0.75, same left / split / right line placement. fr/de: `hyphens: auto` on body; h1 uses `clamp(2.25rem, 7.6vw, 7.5rem)` because words are longer (no `overflow-wrap: anywhere`).
- Header (R1 nav `tok(b)`): fixed bar 80 px, background `#F2F2E9` + grain, 1 px ink bottom rule. Wordmark left at 30 px gutter: `Hoshi Wealth Partners` EB Garamond 500 1.25rem ink (text only, no logo image). Nav right: Heebo 500 1rem uppercase, letter-spacing 0.08em, gap 32: APPROACH · PEOPLE · SERVICES · FEES · STORIES · LETTERS · CONTACT, and last `• INTRODUCTION` with an olive 8 px dot. One top menu only. < 1024: wordmark + `MENU` text toggle (Heebo caps) opening a full-screen ground overlay with the same items at 1.75rem.

## 4. Responsive rules (hard)

- **390 px first screen:** no vertical text, no absolutely positioned labels or captions over text, no overlap between h1 and photos (T1 mobile above). The vertical word `FAMILIES` / rail words are desktop-only (≥ 1024); below that they become horizontal headings.
- **No horizontal overflow** at 390/800/1280 (`html, body { overflow-x: clip }`); Photo B bleed uses the alignfull wrapper, not 100vw on an inner element.
- **Fee list (Fees page, also any fee snippet):** at ≥ 782 px it spans the full 1244 container (`alignwide`, width 100%). Each row `display: grid; grid-template-columns: minmax(0,1fr) auto; column-gap: 48px`; price cell `white-space: nowrap; text-align: right; justify-self: end`, EB Garamond 500 2rem ink, never clipped (no `overflow: hidden` on rows, no fixed widths). Name Heebo 500 1.125rem + description 0.9375rem muted under it. 1 px ink rules between rows, 24 px padding. Checked at 800 and 1280 by auto-gates.
- **Tables on mobile:** any `<table>` (fee examples, office hours, Disclosures) under 782 px becomes stacked: `thead` visually hidden, each `tr` a block with 1 px rule, each `td` a row with `data-label` shown via `::before` (0.75rem caps). Fee rows under 782: name, description, then price left-aligned 1.75rem on its own line.
- Header bar 64 px on mobile; sticky chapter card static below 782.

---

## 5. Home page

### First screen (1440×900)
Header 80 px (ink rule) → T1 headline (y104→~470) → Photo A (P01, y≈410, 450×225) at the left third with caption, Photo B (P02, 450×450) bleeding off the right edge from the same top; line 3 overlaps both photo tops. Under Photo A (y≈700) the Letters label `• LETTERS` and the first ruled row start in the left column, while Photo B continues to y≈860 on the right — the first screen ends cutting through the letters list and the portrait, as R1. Forbidden on the first screen: table, form, search, filled colour buttons, centred giant word, olive anywhere except one 8 px dot.

### Block order
| # | Pattern | Purpose | Layout and photos | Copy |
|---|---|---|---|---|
| 1 | `front-hero` | identity | **T1** as above | h1 6 words + 2 captions |
| 2 | `front-letters` | current notes (R1 TOPICS) | Left 7/12 (x98→788): label `• LETTERS` (Heebo 500 1.25rem), right of it category chips 61×24 (`ALL` filled ink with ground text; `MARKETS`, `PLANNING`, `FIRM` text-only, 0.75rem). 3 ruled rows (Query Loop, latest 3 posts): 1 px ink rule top, date `2026.10.02` Heebo 0.875rem + 1 px × 14 px divider + category 0.75rem, title Heebo 400 1.125rem ls 0.04em on the next line, 26 px hairline arrow top-right; row height 125. Right column (x1042→1342) bottom-aligned: R1 button `ALL LETTERS` (ink chip). No photos. Parent `sp-stagger`, rows `sp-reveal sp-reveal--up`. | 3 titles |
| 3 | `front-prologue` | who we are (R1 gallery row) | Padding 200/160. Left group at x90: olive flat tile 225×225 (`#6B6A3E` + grain, `EST. 2009` 0.75rem caps `#F2F2E9` bottom-left at 14 px) + 15 px gap + **P03** 450×225 (2:1). Under the tile `• PROLOGUE` 0.75rem caps; under the photo two 225-wide columns 0.8125rem/1.45 muted (45 words each). Right column x900→1342, bottom-aligned with the photo: EB Garamond 2.6rem `A small firm, / paid only by you.` + 2 paragraphs Heebo 1rem/1.6 (≈130 words: fee-only since 2009, no commissions, no products, about 140 households, Seattle office) + text link `About the firm →`. Whole block `sp-reveal sp-reveal--up`. | ≈220 words |
| 4 | `front-partners` | the advisers (people-story core) | **T2** dark band, card `PARTNERS / CHAPTER: 01`, 3 rows: Tomás Ferreira **P04**, Priya Raman **P05**, Henrik Aalto **P07**; each link list `sp-stagger` + li `sp-reveal--up`. Button `ALL SEVEN PEOPLE`. | 3 × (name, role, 35 words, 4 links) |
| 5 | `front-approach` | investment approach | Continues the dark band: **S-strip** full-bleed **P08** 1440×420 (`sp-parallax`, chip `02 \| 03`), then padding 70/120 on `#40403D`: left x90→720 heading EB Garamond 500 2.205rem `#D6D6CF` 2 lines `Fewer moves, / better reasons.`, then a paragraph 1rem/1.8 `#B7B7B1` (≈90 words: written investment policy, low-cost index funds, rebalance by rule, quarterly report). Right x950→1350, top-aligned with the heading: R1 button `APPROACH` (stone rules + stone chip). Text group `sp-reveal sp-reveal--up`. | ≈100 words |
| 6 | `front-families` | client stories | **T3** with **P09**; stories 02–04 as ruled rows below the text (`sp-stagger`). | 110 + 3 × 15 words |
| 7 | `front-meeting` | private introductory meeting | **S-panel** on Cover `alignfull`, min-height 760 (mobile 300 photo + panel), background **P10**, no overlay, `sp-parallax`. Panel 700×540 (50% at 1440), `#F2F2E9` + grain, centred, padding 64, text centred: label `PRIVATE INTRODUCTION` 0.75rem caps, 40×1 px ink rule, EB Garamond 2.6rem `Sixty minutes, / no fee, no pitch.`, 60-word paragraph, facts line `Tue–Thu · 60 minutes · Seattle office or video`, R1 button `BOOK AN INTRODUCTION` (ink, 292 wide, centred). Panel not in the moving layer. | ≈75 words |
| 8 | footer | — | Ink `#212836`, padding 100/48, text `#B7B7B1`. 4 columns: wordmark (ground colour) + address + phone; Firm (About, People, Approach, Disclosures); Clients (Services, Fees, Stories, Introductory meeting); Hours (section 7). Bottom: `© 2026 Hoshi Wealth Partners` + one-line disclosure 0.75rem: "Advisory services are offered for a fee. Investing involves risk, including loss of principal; no strategy assures a profit." | ≈60 words |

English home ≈ 560 words (≥ 250), narrative paragraphs in #3, #5, #6 (≥ 3). CJK ≥ 500 characters.

### Home photo positions (9, no repeats)
P01 hero A · P02 hero B · P03 prologue · P04, P05, P07 partner rows · P08 strip · P09 families frame · P10 meeting cover.

### Comparison with recent themes
| # | Mochi | Denki | Shikaku | Kanade | **Hoshi** |
|---|---|---|---|---|---|
| 1 | headline over 3 photo columns | top-bottom halves + figure band | paper-strip hero | photo-left hero + bite | **mixed serif/sans h1 overlapping landscape + right-bleeding square** |
| 2 | food finder | right-column intro | course marquee | intro | **ruled letters list (topics)** |
| 3 | concept mosaic | ruled family rows | about panel | programmes mosaic | **olive tile + 2:1 photo prologue** |
| 4 | ink band box | sticky photo ledger | course ladder | calendar cards | **dark band partner rows, sticky chapter card** |
| 5 | subscribe | staggered photo field | lesson player fan | day strip | **full-bleed parallax strip + counter chip, approach text** |
| 6 | interlude | cases + portrait | plans table | fees band | **framed family portrait, vertical word, olive block** |
| 7 | desk/people list | kits price list | faculty split | people | **panel on full-bleed photo (meeting)** |
| 8 | stories cards | close | stories rows | stories / visit | footer |

Why not alike: no mosaic, ladder, fan, ledger, marquee, calendar, price table or card grid on home. Denki's ruled rows are full-width text rows on light ground with 62.5% offset; ours are a 292 | 405 | 292 three-column row with a centred square portrait on a dark band under a sticky card. Mochi's ink band holds a box card; ours holds people. The hero is the only one with a mixed-typeface overlapping headline, and the only one where the first screen is cut through a text list and a bleeding portrait.

---

## 6. Scroll effects (three effects, `pipeline/assets/sp-scroll/` unchanged)

CSS variables set in theme CSS (from R1 `tok(g)` fadein-up): `--sp-dist: 30px; --sp-dur: .6s; --sp-ease: ease;` (30 px is the hard maximum).

| Effect | Class | Where | R1/R2 source | Trigger / time / easing |
|---|---|---|---|---|
| Fade-up | `sp-reveal sp-reveal--up` | Letters rows, Prologue block, Approach text group, Families text column, Stories rows, inner page body sections (not price list, not forms, not Disclosures) | R1 `fadein-up`: IO rootMargin 0 0 −100px 0, threshold 0, once | sp-scroll IO (once) / 0.6s / ease, 30 px |
| Stagger | `sp-stagger` on parent | Letters list, each partner's 4-link list, stories 02–04 rows, People associate rows | R1 `data-anime-delay` 0.1s steps, `fadein-up02` | built-in 0.12s steps (keep; R1 0.1s) / 0.6s / ease |
| Parallax | `sp-parallax` | (a) **Approach strip** (home #5, Approach page head strip); (b) **Meeting cover** (home #7 and every inner page close) | R1 full-bleed office strip; R2 full-bleed photo with fixed-background feel (waypoints 1s cubic-bezier(.455,.03,.515,.955)) | CSS scroll-driven `view()`, JS IO fallback; continuous |

- **Parallax (a) Approach strip:** outer Group `alignfull hp-strip sp-parallax`, height 420 (mobile 260), `overflow: clip`; moving layer = direct `img` **P08** (`object-fit: cover`, scale per sp-scroll 1.18). `--sp-par: 10%` desktop, `6%` below 782 (`@media (max-width:781px){ .hp-strip{ --sp-par:6% } }`). Foreground: olive chip `02 | 03` is a sibling outside the layer (bottom-right, in flow via grid `align-self: end; justify-self: end`), never moves.
- **Parallax (b) Meeting cover:** Cover block `alignfull hp-meeting sp-parallax`, background image **P10** (`.wp-block-cover__image-background` moves), `--sp-par: 8%` desktop, `5%` mobile. Foreground panel is in `.wp-block-cover__inner-container`, not in the layer.
- Hero: no reveal, no parallax (LCP). R1's hero line slide-up is **not** reproduced.
- Sticky chapter card is plain CSS `position: sticky` (not an sp-effect).
- `?sp-static` for all screenshots/gates; `check-parallax.mjs` must show ≥ 6 px differential on both parallax blocks on desktop and mobile, 0 under reduced motion, ≥ 3 reveals hidden before entry.

---

## 7. Fixed facts (identical on every page and in all five languages)

**People (7):**
| # | Name | Role | Photo | Serves |
|---|---|---|---|---|
| 1 | Naomi Hoshi-Clarke | Founding partner, family wealth & retirement income | P02 | three-generation families, retirees |
| 2 | Tomás Ferreira | Partner, chief investment officer | P04 | portfolio construction, investment policy |
| 3 | Priya Raman | Partner, tax & estate coordination | P05 | widowed and single clients, estates, giving |
| 4 | Henrik Aalto | Partner, business owners | P07 | owners selling or passing on a firm, equity pay |
| 5 | Grace Mwangi | Associate adviser | P16 | young families, first plans |
| 6 | Samuel Ortiz-Bell | Client service manager | P16 | paperwork, transfers, meeting notes |
| 7 | Lena Fischer | Operations & compliance | — | custody, reporting, disclosures |

**Fees (6 items, USD; Fees page full list; home mentions only "first meeting free" and links):**
| Service | Fee |
|---|---|
| Introductory meeting (60 minutes) | $0 |
| Written financial plan (one-off, three meetings) | $4,800 |
| Ongoing planning retainer (billed quarterly) | $7,200 / year |
| Investment management, first $2M | 0.80% / year |
| Investment management, above $2M | 0.50% / year (minimum $9,600 / year) |
| Hourly project advice | $380 / hour |
No commissions, no product fees, no performance fees; custody at an independent custodian (unnamed).

**Stories (4, illustrative composites, names changed, no results claimed):** 1 The Moreau-Adeyemi family — three generations, a shared house and a grandchild's education fund, clients since 2014 (P09, Naomi). 2 Walter & June Brennan — two retiring teachers turning pensions and savings into a monthly income (P11, Naomi). 3 Rosa Delgado — furniture-workshop owner preparing to sell to her employees (P12, Henrik). 4 Amir & Hana Saleh — young parents writing their first plan (P13, Grace).

**Office:** 1418 Western Avenue, Suite 600, Seattle, WA 98101 · +1 206 555 0148 · hello@hoshiwealth.example. **Hours:** Mon–Fri 8:30–17:30 (Pacific); Thursday meetings until 19:00 by appointment; closed weekends and US public holidays.

**Process (4 stages):** 1 Introductory meeting — 60 minutes, free, Tue–Thu, office or video. 2 Discovery — about 2 weeks, documents gathered, one working session. 3 Written plan — presented within 6 weeks of the first meeting. 4 Ongoing — quarterly report, two review meetings a year, written investment policy updated yearly.

Other numbers: founded 2009; about 140 households; 7 people. Nothing else numeric.

---

## 8. Inner pages (10)

Each page: T1 head → body (techniques per table in section 1) → S-panel meeting close (P10 parallax on every page except Introductory meeting and Fees, which use P03 because P10 already appears there). No sidebar.

1. **About the firm** (`page-about`): T1 head + P03; story of the firm (2009, why fee-only, why small) in three narrative sections in a 7/12 column; T3 Naomi founder letter (P02 framed, rail `FOUNDER`); a ruled "What we do not do" list (no commissions, no products, no performance fees).
2. **People** (`page-people`): T1 + P16; T2 dark band with 4 partner rows (P02, P04, P05, P07), card `PEOPLE / CHAPTER: 01`; associates Grace, Samuel, Lena as text-only ruled rows on ground (name EB Garamond 1.75rem, role, 40 words).
3. **Approach** (`page-approach`): T1 + P14; S-strip P08 parallax; T2 4 principle rows (Written policy first / Costs we can control / Rebalance by rule / Report in plain words), middle photos P01, P11, P13, P12 (P08 is the strip; P14 the head); a short "What we will not promise" paragraph.
4. **Services** (`page-services`): T1 + P13; T2 4 service rows with anchors (#planning P01, #retirement P11, #investment P08, #tax-estate P14), each list links to Fees and Stories.
5. **Fees** (`page-fees`): T1 + P14; full-width fee list (section 4 rules); two worked examples as stacked-on-mobile table ("$1.5M invested → $12,000 a year"; "$3M invested → $16,000 + $5,000 = $21,000 a year"); T3 small frame P10 with rail `FEES`; note on billing (quarterly in arrears).
6. **Stories** (`page-stories`): T1 + P03; 4 stories each as a T3 frame alternating sides (P09, P11, P12, P13), 150 words each, adviser named, composite disclaimer.
7. **Introductory meeting** (`page-meeting`): T1 + P10; T2 process rows on dark band (stage label, duration in the middle column, what happens, what to bring list), card `MEETING`; booking info as text (email, phone, hours) — no form required; close panel uses P03.
8. **Letters** (`home.html`, `archive.html`, `single.html`): T1 head + P14; R1 letters rows (date, category chips, title, arrow), 6 sample posts using P01, P03, P08, P11, P12, P15 as featured images (single only); single post: category label, EB Garamond 3.2rem title, featured image in T3 frame, 680 px text column.
9. **Contact / Office** (`page-contact`): T1 + P15 (`1418 WESTERN / AVENUE.`); T3 frame P03 with rail `OFFICE`; address, hours table (stacks on mobile), phone, email, getting there (two lines).
10. **Disclosures** (`page-disclosures`): small head; fee-only statement, conflicts, custody, privacy; plain text, no effects.
Plus 404 and search: small T1 head + R1 button home.

---

## 9. Photos (16, Grok, one at a time, Read every image)

STYLE (exact string on every prompt):
`documentary film photograph, near-monochrome silver-gelatin look with a faint warm neutral tone, visible fine 35mm film grain, soft natural window light, bright high-key modern interior, clean contemporary international architecture, calm candid moment, diverse adults, understated clothing in charcoal, navy, grey and off-white, no text, no logos, no brand marks, no readable documents or screens, no Japanese elements`

Post-process every file: `-modulate 100,15` (saturation ≤ 15%), resize ≤ 1600 px long side (squares 1200), JPEG q 70–74, strip metadata, ≤ 300 KB. No cutouts. `readme.txt` one line per image (AI-generated, CC0).

| ID | Subject / composition | Ratio | Used on (once per page) | Home |
|---|---|---|---|---|
| P01 | hands across a pale table: adviser's hand with a pen over a blank notebook, client's clasped hands, a water glass; top quarter bright | 2:1 | Home hero A; Approach row 1; Services #planning; Letters post 1 | ✓ |
| P02 | Naomi (woman, ~55, Black British-Caribbean features, short grey hair) seated by a tall window, hand at chin, looking out, light top area | 1:1 | Home hero B; About T3; People row 1 | ✓ |
| P03 | office reading room: long table, chairs, bookshelf, desk lamp, big window | 2:1 | Home prologue; About head; Stories head; Contact T3; Meeting close; Fees close; Letters post 2 | ✓ |
| P04 | Tomás (man, ~45, Southern European) standing at a window wall, half-turned, sleeves rolled | 1:1 | Home row 1; People row 2 | ✓ |
| P05 | Priya (woman, ~42, South Asian) at a desk with a closed folder, gentle smile, side light | 1:1 | Home row 2; People row 3 | ✓ |
| P07 | Henrik (man, ~50, Nordic) in a workshop-like bright meeting room, arms crossed loosely | 1:1 | Home row 3; People row 4 | ✓ |
| P08 | wide architectural interior: quiet corridor of glass meeting rooms, plants, long horizontal composition, no people or one blurred figure far away | 16:9 (cropped to 1440×420) | Home strip; Approach strip; Services #investment; Letters post 3 | ✓ |
| P09 | three generations at a kitchen table: grandmother, mother, child drawing; documentary | 4:5 | Home families T3; Stories 1 | ✓ |
| P10 | empty meeting room: two armchairs facing each other by a window, low table, notebook | 3:2 | Home meeting cover; inner page closes (except Meeting, Fees); Meeting head; Fees T3 | ✓ |
| P11 | retired couple walking on a seaside path from behind, light coats | 4:5 | Stories 2; Approach row 2; Services #retirement; Letters post 4 | |
| P12 | woman (~50, Latina) in her furniture workshop, sanding a chair, sawdust in light | 4:5 | Stories 3; Approach row 4; Letters post 5 | |
| P13 | young parents (Middle Eastern) at a living-room table with a toddler, papers face-down | 4:5 | Stories 4; Services head; Approach row 3 | |
| P14 | desk still life: printed report face-down, reading glasses, pen, cup | 2:1 | Approach head; Fees head; Services #tax-estate; Letters head | |
| P15 | building entrance: brick and glass facade, street trees, doorway | 2:1 | Contact head; Letters post 6 | |
| P16 | Grace and Samuel at a standing desk talking over a printed page (not readable) | 2:1 | People head | |
| P06 | (reserve) street-level view of a waterfront city at morning, no landmarks | 16:9 | 404 / search head | |

Approach rows in order: P01, P11, P13, P12. Per-page check: Home 9 unique (above). People: P16, P02, P04, P05, P07, P10. Approach: P14, P08, P01, P11, P13, P12, P10. Services: P13, P01, P11, P08, P14, P10 — head P13 must not repeat, so #planning P01, #retirement P11, #investment P08, #tax-estate P14 ✓. Stories: P03, P09, P11, P12, P13, P10. Fees: P14, P10 (T3) → close uses P03 on Fees. Contact: P15, P03 → close uses P10 ✓. Meeting: P10 head → close P03 ✓. About: P03 head + P02 → close P10 ✓.

---

## 10. Home acceptance checklist

1. First screen 1440: 80 px header with ink rule, mixed EB Garamond/Heebo uppercase h1 ≥ 7.5rem in 3 lines (left / split / right), line 3 overlapping P01 (2:1 at x≈182) and P02 (square bleeding off the right edge); captions 12 px caps; letters list starts at the bottom left. No table/form/search, no colour fields; saturated ≤ 15% (target ≤ 3%).
2. 390: no vertical or absolutely positioned overlapping text on the first screen; h1 wraps cleanly; no horizontal scroll.
3. Grain + scan-line ground visible at 100% zoom; radius 0 everywhere; no shadows.
4. T2: full-bleed `#40403D` band, light sticky chapter card pinned while scrolling, 3 rows with 1 px rules, dot labels, 292 | 405 | 292 columns, centred square portraits, bottom-aligned link lists with hairline arrows, R1 buttons (2 px top / 1 px bottom + chip).
5. Strip: full-bleed P08 with olive `02 | 03` chip 174×74 bottom-right; parallax moves ≥ 6 px (check-parallax) desktop and mobile.
6. T3: vertical `FAMILIES` 5rem with rail rule, framed P09 with crossing 1 px rules, olive block overlapping the photo with 3 sprocket dots, one olive letter in the name.
7. Meeting: P10 full-bleed with parallax, centred 700×540 ground panel, label + 40 px rule, R1 button.
8. 9 photos, all monochrome grain, none repeated, no text/logos/broken hands.
9. Olive appears only as dots, tile, chip, block, letter, link hover (≤ 2%).
10. English ≥ 250 words, ≥ 3 narrative paragraphs; numbers match section 7 (2009, Seattle address, $0 first meeting, Tue–Thu, 7 people).
11. Effects: only sp-reveal--up, sp-stagger, sp-parallax; hero has none; reduced-motion shows everything; no residual hidden elements.
12. auto-gates home pass (`… en gates/en.json 1 1`), ≥ 8 images.

---

## 11. Similarity table (target 80% of R1)

| Dimension | R1 value (token) | Hoshi value |
|---|---|---|
| Ground | `#F2F2E9` + grain + scan lines (a) | same `#F2F2E9`, SVG noise 0.07 + 1/4 px scan lines |
| Ink | `#212836` (a) | `#212836` |
| Dark band | `#40403D`, full-bleed (a) | `#40403D`, full-bleed, Partners + Approach |
| Stone | `#B7B7B1` (a) | `#B7B7B1` |
| Accent | `#D3030F` < 1% (a) | `#6B6A3E` ≤ 2% (row hex; red unsuitable for finance) |
| First-screen saturation | 1.5% (a) | target ≤ 3%, cap 15% |
| Body | 16/24, ls 0.04em (b) | Heebo 16 / 1.6, ls 0.02em (Latin) |
| Section title | Heebo 500 35.28 px, lh 1.1, ls 0.02em, caps (b) | same (`x-large` 2.205rem) |
| Display | Cormorant 600 + Heebo 500, caps, 3 lines, ~130 px (b) | EB Garamond 500 + Heebo 500, caps, 3 lines, 124 px (8.6vw, max 8.25rem) |
| Micro | Heebo 12 px caps ls 0.04em (b) | same |
| Nav | Heebo 16 px 500 caps ls 0.08em, 80 px bar, logo left (b) | same, wordmark EB Garamond 20 px |
| Container | 1244 (x98→1342), gutters 30 (c) | 1244, gutters 30 (24 mobile) |
| Row grid | 292 \| 405 \| 292, 611 px rows (c) | 292 \| 405 \| 292, min 600 px rows |
| Radius / shadow | 0 / none (d) | 0 / none |
| Button | 2 px top + 1 px bottom, 66×24 chip (d) | same, 292×60 |
| Hero photos | 2:1 450 at x13%; 450 square x69→100% (e) | 2:1 31.25vw at 12.6vw; square 31.25vw from 68.75vw, bleeding |
| Headline overlap | ~60 px over photos (e) | −3.75rem (60 px) in flow |
| Photo treatment | monochrome + coarse grain (e) | near-monochrome (sat ≤ 15%) + 35mm grain |
| Strip | 1440×335 + red 174×74 counter (e/f) | 1440×420 + olive 174×74 `02 \| 03` |
| Dot label | 8 px circle (f) | 8 px olive (`#A8A672` on dark) |
| Arrow link | 26 px hairline (f) | 26 px hairline |
| Vertical word | 80 px rotated, rule at x187 (f) | 80 px `FAMILIES`, rail 187 px |
| Portrait frame | thin rules + red block + 3 sprocket dots (e) | thin rules + olive 116×150 block + 3 dots 10×14 |
| Reveal | fade-up 30 px 0.6s ease, IO −100px once (g) | sp-reveal--up 30 px 0.6s ease, once |
| Stagger | 0.1s steps (g) | sp-stagger 0.12s steps |
| Sticky chapter card | yes (g) | yes, 405×120, top 80 |
| Full-bleed photo motion | strip / fixed feel (g, R2) | sp-parallax 10% (strip), 8% (meeting); 6% / 5% mobile |
| Hero line slide-up | 1s per line (g) | not used (hero no motion rule) |
