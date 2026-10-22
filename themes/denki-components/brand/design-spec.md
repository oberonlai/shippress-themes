# Denki Components: design spec (stage 1, binding for implementation)

Slug `denki-components`, row b7-8. B2B maker of passive electronic components (multilayer ceramic capacitors, thick-film chip resistors, power inductors, ferrite chip beads). Type `business` (declares WooCommerce support, does not need it, works without it). Row: archetype **sticky-media**, hero **framed-window**, nav **top-bar**, first screen **top-bottom-halves**, page structure **metrics-ledger**, real photography, palette family blue (鉄紺 `#2E3A4B`), fonts **IBM Plex Serif + IBM Plex Sans** (both OFL 1.1, verify the licence file when bundling).

References (see `reference.md`, `reference-tokens.md`, screenshots in `ref/`):
- **R1 (main)** Nitta DuPont, https://www.nittadupont.co.jp (S5-Style /10886/): pale cool ground, ruled product rows, outline pill with a round arrow disc, intro pushed into the right column, small portraits at different heights.
- **R2 (support)** elec Inc., https://elec-inc.com (S5-Style /11213/): fixed round badge with rotating ring text, photo field at staggered heights with caption + `#tag`. Only those shapes; its black ground and orange field are not used.

Borrow structure, technique, numbers and colour relationships only. No copy, photos, logos or whole-page layouts from either site. Target: about 80% visual similarity to R1 in colour, image treatment, motion, decoration and layout (section 11).

Fixed brand facts (every page, all five languages): **Denki Components B.V.**, founded **1987**, plant, lab and office at **Kanaalweg Oost 18, 5644 RK Eindhoven, Netherlands** (fictional street number and postcode). Currency **EUR** in every language, prices identical. Office hours **Mon–Fri 08:00–17:30 CET**; plant runs **24/7 in three shifts**; sample desk answers within **1 working day**. Email `samples@denki-components.example`, phone `+31 40 000 1987` (placeholder). The name is a brand name only; no Japanese motifs, scripts or scenes anywhere.

Lessons applied: no softening of R1's contrast into pale stone (Tsumugi); one number table used everywhere (Hatsumei); signatures on ≥ 4 inner pages (Hatsumei); no photo twice on a page (Sukoyaka); price column never clipped at ≥ 782 px and nothing absolutely positioned over text on a 390 px first screen (Taiyo); home block order not copied from any recent theme (Minato).

---

## 1. Signature techniques (three, obvious at a glance, never "softened")

### T1. Ruled ledger rows: photo left 54%, indexed text column from 62.5% (R1 product rows, `ref/nitta-part1.png`–`part3.png`, tokens c, e, f)
- **Reference**: a 1 px blue-grey hairline runs the full 1380 px container above each row. Under it, a 3:2 photo with 8 px corners sits flush left (x = 30, width 54%). The text column starts at x = 62.5% of the viewport: a small blue grotesk index label "(01) Polishing Pad" (14 px / 500), 16 px below it a 28 px / 600 title, then a 3-line body (14–15 px / 28 px), then a "see more" link with a dotted 1 px underline and a tiny arrow at the far right of a 166 px line. Rows repeat at ~537 px pitch (photo 495 + 42 gap). No shadows, no cards.
- **Denki (home block 3, "Product families")**: four rows, one per family. Markup per row: `div.dk-row` (alignwide, max 1380, `border-top: 1px solid rgba(52,96,149,.30)`, `padding-top: 16px`, `margin-bottom: 42px`), grid `grid-template-columns: 54% 1fr`, `column-gap: 8.5%` so the text column starts at 62.5% of the 1440 viewport (container 1380 + 30 px gutters).
  - Left: `figure.dk-row__media.sp-reveal.sp-reveal--wipe` > `img` aspect-ratio 3/2, `border-radius: 8px`, `object-fit: cover`.
  - Right (top-aligned with the photo top, `padding-top: 0`): `p.dk-index` "(01) Ceramic capacitors" — IBM Plex Sans 500, 0.875rem (14 px), line-height 2 (28 px), letter-spacing -0.02em, colour accent `#2E5DBC`; then 16 px gap; `h3` IBM Plex Sans 600 1.75rem (28 px), line-height 1.28, ink; 24 px gap; body 0.9375rem / 1.87 (28 px), max 3–4 lines, ink; then a **range line** (the ledger twist, ours): IBM Plex Sans 500 0.8125rem, letter-spacing 0.02em, muted ink `#4A5A6E`, e.g. "0201–1210 · 0.5 pF–100 µF · 6.3–100 V"; then 40 px gap; `a.dk-more` width 166 px, IBM Plex Sans 600 0.9375rem, `border-bottom: 1px dotted #13253B`, `padding-bottom: 10px`, `display:flex; justify-content:space-between`, arrow "→" 12 px accent at the right end.
  - Rows are **not** alternated: the photo stays left in every row (as R1).
- **Must not be diluted**: hairline must run the full 1380 width and be visibly blue-grey (not `#eee`); the text column must start at 62.5% (leave the 8.5% gap; do not centre the text against the photo); photo 3:2 at 54% with 8 px radius (not 0, not 16+); index label in accent blue with the "(01)" parentheses; title 28 px / 600 sans (not serif, not larger).

### T2. Outline pill with a filled round arrow disc at its right end (R1 "製品情報一覧" button, `ref/nitta-part1.png`, tokens d, f)
- **Reference**: 232 × 58 outline pill, radius 29, 1 px pale blue-grey outline on the pale ground, label 15 px / 600 ink at 32 px from the left, a **filled 34 px blue disc with a white 12 px arrow** sitting inside the right end (10 px right padding).
- **Denki**: every primary call to action site-wide (`a.dk-pill` via a `core/button` style variation "Pill disc"): `min-width: 232px; height: 58px; border-radius: 29px; border: 1px solid rgba(52,96,149,.35); background: #FFFFFF; padding: 0 10px 0 32px; display:inline-flex; align-items:center; justify-content:space-between; gap: 24px`; label IBM Plex Sans 600 0.9375rem ink `#13253B`; disc `::after` 34 × 34, `border-radius:50%`, background accent `#2E5DBC`, white arrow (inline SVG mask, 12 px). Hover: outline becomes `#2E5DBC`, disc becomes 鉄紺 `#2E3A4B`, arrow slides 3 px right (transition 300 ms `cubic-bezier(.22,1,.36,1)`).
- Used on home: hero ("Request samples"), block 2 ("About the company"), block 4 ("Quality reports"), block 7 ("All sample kits"), block 8 ("Request samples"). No other button style on the site except the form submit (same pill, `<button>`).
- **Must not be diluted**: the disc must be filled accent blue and sit inside the pill (not beside it); pill white on the pale ground with a visible outline; height ≥ 56 px on desktop, 52 px on mobile.

### T3. Fixed round "Samples" badge with a rotating ring of tracked text (R2 "CONTACT" disc, `ref/elec-part1.png`, `ref/elec-part3.png`, token f)
- **Reference**: a 96 px filled disc fixed top-right with one bold word and a small icon; around it a 140 px ring of 10 px wide-tracked uppercase text rotating slowly; it stays in place while the page scrolls.
- **Denki**: `a.dk-badge` linking to `/samples/`, rendered once in the footer template part but `position: fixed`.
  - Desktop ≥ 782 px: `right: 30px; bottom: 30px` (bottom-right instead of R2's top-right, because our 80 px top bar holds the nav; size and behaviour unchanged). Disc 96 × 96, background 鉄紺 `#2E3A4B`, label "Samples" IBM Plex Sans 600 0.875rem white, under it a 14 px outline reel icon (inline SVG, white). Ring: SVG `textPath` on a 140 px circle, text "REQUEST SAMPLES · 3-DAY DISPATCH · " repeated to fill, IBM Plex Sans 500 0.625rem (10 px), letter-spacing 0.32em, uppercase, fill ink `#13253B` at 70%; one 6 px copper `#B5683A` dot on the ring at 12 o'clock (the only copper on the site besides the hover state of `dk-index` in the footer). Rotation: CSS `@keyframes dk-spin {to {transform: rotate(360deg)}}` 24 s linear infinite on the ring only. `@media (prefers-reduced-motion: reduce)` and `html.sp-no-motion`: `animation: none`. `z-index: 40`, `box-shadow: none`.
  - It must not cover the hero headline or the hero figure band at 1440 × 900 or 1280 × 800 (it sits over the framed photo at the bottom-right — check in the first-screen screenshot).
  - **Mobile < 782 px: the fixed badge is hidden** (`display:none`) so nothing is absolutely positioned over text on a 390 px screen; the header shows a plain "Samples" text link instead, and home block 8 shows a static 88 px badge (same disc, ring not rotating) inline above the pill.
  - Labels per language: ring text stays English uppercase in en/fr/de ("REQUEST SAMPLES · 3-DAY DISPATCH"), zh-TW/ja ring text also English (decorative), disc word translated: 樣品 / サンプル / Échantillons (0.75rem) / Muster.
- **Must not be diluted**: the disc stays filled 鉄紺 (not outline, not pale), ≥ 88 px, with the visible ring of tracked text; it is fixed and visible on every page on desktop.

### Supporting moves (not counted as signatures, but required)
- **S-a, intro in the right column (R1 A3, `ref/nitta-part1.png`)**: home block 2 and every inner page intro set their text in a column starting at 62.5% (`margin-left: 62.5%` on desktop inside alignwide, width ≤ 37.5% − 30 px), leaving the left 55% empty pale ground except one small caption (IBM Plex Sans 500 0.8125rem accent: "(About) Since 1987") at the top-left of that empty area. Mobile: full width.
- **S-b, staggered photo field with caption + #tag (R2 B1, `ref/elec-part3.png`)**: home block 5 and the Plant page. Photos of different sizes at staggered vertical offsets, each with a 0.875rem caption and a `# tag` line under it. Recoloured: pale ground, photos in colour but low chroma (STYLE), radius 8 px (R1) instead of R2's 0.
- **S-c, sticky media (row archetype)**: home block 4 and Quality page: a 4:5 photo in the left 5/12 column with `position: sticky; top: 112px` while the ledger rows scroll in the right column. Parent uses `overflow: clip`, never `hidden`.

### Continuation to inner pages (required; T1 + T2 + T3 on ≥ 4 inner pages — here on 9)
| Page | T1 ruled ledger rows | T2 pill + disc | T3 fixed badge | Supporting |
|---|---|---|---|---|
| Products (overview) | 4 family rows exactly as home but with 5-line bodies and the series codes; head photo P13, row photos P14, P11, P10, P16 (section 7) | "Request samples", "Download catalogue (PDF placeholder)" | yes | S-a intro |
| Ceramic capacitors | each series is a row: (DC-C0G) C0G/NP0, (DC-X7R) X7R, (DC-X5R) X5R, (DC-AQ) automotive; photo left only on the first row (P02), the rest text-only rows keeping the 62.5% column with a left-column spec summary | "Request samples" | yes | spec table |
| Chip resistors | rows per series (DR-TF thick film, DR-PR precision 0.1%, DR-AS anti-sulfur, DR-AQ automotive); first row photo P03 | yes | yes | spec table |
| Inductors & beads | rows: (DL-PW) power inductors, (DL-ML) multilayer inductors, (DF-FB) ferrite beads, (DF-HC) high-current beads; photos P04 first row, P05 third row | yes | yes | spec table |
| Quality | monthly figures as ruled ledger rows (sticky P06 left) + certificates as ruled rows | "Request a lot report" | yes | S-c sticky, sp-count |
| Samples & services | price list = ruled rows (section 9) + request form | form submit pill | yes (badge links to the form anchor) | — |
| Plant | process stages as ruled rows (text column at 62.5%, photo left on alternate rows) | "Book a plant visit" | yes | S-b staggered field |
| Cases (index + 3 case posts) | each case is a row on the index; single case: the results as ruled rows | "Talk to an applications engineer" | yes | — |
| About | history as ruled rows (1987, 1996, 2008, 2016, 2024 — as rows, not a vertical timeline graphic) and people as rows | "Contact" | yes | S-a intro, portraits at staggered heights |
| Contact | address / hours / sample desk as ruled rows | form submit pill | yes | — |
| News (index, single) | each post is a hairline row: date (index label style) left 25%, title + excerpt at 62.5% | — | yes | — |

---

## 2. Colour (R1 values; accent from the row's 鉄紺 used R1-style on small areas)

| Role | Hex | Source token | Use | Share of a scrolled screen |
|---|---|---|---|---|
| Ground (cool paper) | `#F0F2F7` | R1 (a) ground `#F0F0F8` / `#F8F8F8` (mid value, Δ lightness < 2%) | page ground of every section except bands | ~55% |
| Surface band | `#E8F0F0` | R1 (a) `#E8F0F0` exact | price band, Quality certificates band, footer ground, form fields ground | ~18% |
| White | `#FFFFFF` | R1 (a) header `#FFFFFF` | header bar, pill ground, table rows, form | ~15% |
| Ink | `#13253B` | R1 (a) rgb(19,37,59) exact | all text, headings, dotted underline | ~8% text |
| Muted ink | `#4A5A6E` | R1 ink lightened for meta | range lines, captions, dates | text only |
| Accent blue | `#2E5DBC` | R1 (a) accent rgb(46,93,188) exact | T1 index labels, T2 disc, active nav underline, links hover, scroll cue | ≤ 2% |
| 鉄紺 (row hex) | `#2E3A4B` | design-plan row b7-8 | T3 badge disc, pill hover disc, footer bottom rule text | ≤ 1.5%, never a full-bleed field |
| Hairline | `rgba(52,96,149,.30)` | R1 (a) hairline exact | T1 rules, table rules, header bottom rule | lines only |
| Copper spot | `#B5683A` | R2 orange `#E86010` logic, desaturated | the one dot on the T3 ring | < 0.2% |

- No beige/cream. No dark full-bleed section anywhere (R2's black ground is rejected: the row asks for a quiet low-chroma ground).
- Contrast: ink on ground 14.6:1; accent `#2E5DBC` on ground 5.6:1 (OK for the 14 px index labels); white on accent disc ≥ 5:1; white on 鉄紺 11:1.
- **First screen saturated pixels (`scripts/check-first-screen.py`): cap 15%, target ≤ 8%.** R1 hero was 13% from its art; ours has no coloured art — the only chroma is the hero photo (graded cool, low chroma by STYLE) and the accent disc. No coloured UI field over the photo.
- Hero photo P01 must not show green solder mask or saturated LEDs (STYLE excludes them); if a generated image measures > 8% saturated, regenerate rather than desaturate in CSS.

## 3. Typography (R1 sizes/weights/line-heights mapped onto the row's IBM Plex pair)

| Role | Family | Size (desktop 1440) | Weight | Line-height | Tracking | Source token |
|---|---|---|---|---|---|---|
| Hero H1 | IBM Plex Serif | `clamp(2.75rem, 6.1vw, 5.5rem)` = 88 px at 1440 (preset `display`, theme max **5.5rem ≥ 4.25rem**) | 300 | 1.12 | -0.01em | R1 (b) hero headline 88 px / 300 / ~1.2 |
| Section H2 | IBM Plex Serif | `clamp(2.25rem, 4vw, 3.5rem)` (preset `xx-large`) | 300 | 1.18 | -0.005em | R1 (b) section display, light |
| Inner page H1 | IBM Plex Serif | `clamp(2.6rem, 5vw, 4.25rem)` (preset `x-large-display`) | 300 | 1.14 | -0.01em | R1 hero scale stepped down |
| Row title H3 | IBM Plex Sans | 1.75rem (28 px) | 600 | 1.28 | 0 | R1 (b) row title 28 / 600 / 35.84 |
| Hero statement / lead | IBM Plex Sans | 1.25rem (20 px) | 400 | 2.0 | 0.01em | R1 (b) hero statement 24 / 400 / 2.3 (scaled for Latin) |
| Body | IBM Plex Sans | 0.9375rem (15 px), body copy blocks 1rem | 400 | 1.87 (28 px) | 0 | R1 (b) body 14–15 / 28 |
| Index label "(01) …" | IBM Plex Sans | 0.875rem (14 px) | 500 | 2 (28 px) | -0.02em | R1 (b) index 14 / 500 / 28 / -0.28 px |
| Section label (R2 B4) | IBM Plex Sans | 0.75rem | 500 | 1 | 0.24em, uppercase | R2 "STORY" label, recoloured accent |
| Nav / buttons | IBM Plex Sans | 0.8125rem (13 px) nav, 0.9375rem pill | 500 / 600 | 1 | 0.04em | R1 (b) nav 13 / 500 / 0.04em |
| Figures (hero band, ledger) | IBM Plex Serif | 2.5rem hero band, 3rem ledger values | 300 | 1 | -0.01em, `font-variant-numeric: tabular-nums` | ours (R1 has no figures) |
| Price | IBM Plex Sans | 1.125rem | 600 | 1.4 | tabular-nums | — |

Presets in theme.json: small 0.8125rem, base 0.9375rem, medium 1.25rem, large 1.75rem, x-large 2.5rem, xx-large 3.5rem, x-large-display 4.25rem, display 5.5rem. zh-TW Noto Serif TC / ja Noto Serif JP for H1/H2 at ~0.75× the English size, body Noto Sans TC/JP line-height 1.85; fr/de `hyphens: auto`. One top menu only.

**Header (top-bar, R1)**: 80 px white bar, sticky, `border-bottom: 1px solid rgba(52,96,149,.18)`; container 1380 with 30 px gutters (R1 c). Left: wordmark "Denki Components" IBM Plex Sans 600 1.0625rem ink with a 10 px accent disc before it (no logo image). Right: nav Products · Quality · Plant · Cases · About · Contact (13 px / 500 / 0.04em, 18 px side padding), then a 1 px dotted vertical divider, then language links EN | 中文 | 日本語 | FR | DE (13 px, active accent `#2E5DBC`, others ink 40%) — R1's JP | EN | ZH pattern. Mobile < 960: wordmark + "Samples" link + two-line menu icon opening a white overlay.

**Footer**: surface `#E8F0F0` full-bleed; 4 columns (address/hours, products, company, legal); bottom line 0.75rem muted with "© 2026 Denki Components B.V." (sample text). No dark footer.

---

## 4. Home page (en ≥ 250 words, ≥ 3 narrative paragraphs; blocks 2, 5, 6 carry narrative)

### First screen (1440 × 900) — top-bottom halves, framed window
- Ground `#F0F2F7` (whole screen except the 80 px white header).
- **Top half (y 80 → ~470)**, inside the 1380 container:
  - Left (x 30 → ~780): H1 IBM Plex Serif 300 5.5rem, ink, two lines: **"Small parts, / counted carefully."** Top margin 72 px under the header.
  - Right column starting at 62.5% (x 900), bottom-aligned with the H1 baseline: lead IBM Plex Sans 1.25rem/2.0 ink, 2–3 lines: "Capacitors, resistors, inductors and ferrite beads for engineers who need the same part every month. Made in Eindhoven since 1987." Then 24 px gap, T2 pill "Request samples".
  - **Figure band** directly under (margin-top 48 px): full 1380 width, `border-top` and `border-bottom` 1 px hairline, height 96 px, 4 equal cells separated by 1 px hairline verticals; each cell: value IBM Plex Serif 300 2.5rem ink + unit/label IBM Plex Sans 500 0.8125rem muted ink, left-aligned with 24 px padding. Values (fixed numbers, section 8): **1.8 bn** pieces shipped a month · **0.6 ppm** outgoing defect rate, 12-month rolling · **6 weeks** standard lead time · **3 days** sample dispatch. Static (no sp-count in the hero).
- **Bottom half (y ~600 → beyond the fold)**: the **framed window** — `div.dk-window.sp-parallax` alignwide (1380, 30 px gutters left and right, so pale ground frames it), height `min(72vh, 640px)`, `border-radius: 8px`, `overflow: clip`; inside, P01 (macro of the reel line) `object-fit: cover`. At 1440 × 900 about 300 px of the window is visible above the fold; the rest scrolls into view. No text over the photo. Bottom-left under the window (outside it, 16 px below): caption 0.8125rem muted "Taping line 3, Eindhoven — 0402 capacitors leaving the reel sealer."
- Scroll cue (R1 f): none over the photo; the cut-off window itself is the cue.
- Forbidden on the first screen: table, form, search, giant centred word, any coloured field, vertical text, absolutely positioned labels.
- **Mobile 390**: header 64 px; H1 2.75rem (2 lines may wrap to 3); lead 1.0625rem; pill full-width 52 px; figure band becomes a 2 × 2 grid with hairlines between (each cell 50%, value 1.875rem); window full width minus 16 px gutters, aspect 4:5, `--sp-par: 6%`. Everything in normal flow; T3 badge hidden.

### Block order
| # | Pattern | Purpose | Layout and photos | Copy |
|---|---|---|---|---|
| 1 | `front-hero` | promise + key figures | top-bottom halves above: H1 + right lead + T2 pill / 4-figure band / framed P01 with **sp-parallax** | ~45 words |
| 2 | `front-intro` | who we are | **S-a**: section padding 100 px (R1 c); text column at 62.5%; caption "(About) Since 1987" top-left of the empty left area; section label "THE COMPANY" accent; H2 serif "Four families of passive parts, one plant."; two paragraphs; T2 pill "About the company". No photo (R1 leaves this area empty). | ~110 words, 2 paragraphs |
| 3 | `front-families` | product families | **T1**: head row (label "PRODUCTS" + H2 "What leaves the reel line." left, a 3-line note at 62.5% right); 4 ruled rows: (01) Ceramic capacitors P02, (02) Chip resistors P03, (03) Power inductors P04, (04) Ferrite beads P05; each with body, range line, dotted "See the range →" link to its page. | 4 × 45 words |
| 4 | `front-ledger` | **metrics ledger** (row page_structure) | **S-c**: left 5/12 sticky P06 (QA inspector at a stereo microscope, 4:5, 8 px); right 6/12 (starting 7/12 + gap ≈ 62.5%): label "MONTHLY LEDGER", H2 "Figures we publish every month."; then 6 ruled rows, each `grid: 1fr auto` — left: metric name (Plex Sans 600 1.125rem) + one-line definition (0.875rem muted); right: value IBM Plex Serif 300 3rem ink, `white-space: nowrap`, right-aligned; a small "Sep 2026" date tag in index style above the rows. Rows = output, outgoing defect rate, on-time delivery, standard lead time, part numbers in catalogue, sample dispatch (section 8). Below: 1 paragraph on how the numbers are measured; T2 pill "Quality reports". | ~80 words + rows |
| 5 | `front-plant` | inside the plant | **S-b staggered field** on ground: head at left ("INSIDE THE PLANT" + H2 "Powder in, reels out."), narrative paragraph at 62.5% right. Then 4 photos in a 12-col grid at different sizes and vertical offsets: P07 (cols 1–3, 3:4, offset 0), P08 (cols 4–8, 3:2, offset 85 px), P09 (cols 9–10, 3:4, offset 24 px), P10 (cols 11–12 bleeding to container edge, 4:5, offset 140 px). Each figure is its own `sp-parallax` with different speeds (6 / 10 / 8 / 12%) — the vertical stand-in for R2's sideways drift. Caption under each (0.875rem ink) + `# tag` (0.75rem accent): "Reel store, 41,000 reels # logistics", "Continuous kiln at 1,250 °C # sintering", "Loading a 7-inch reel # taping", "Green-sheet stack before dicing # ceramics". | 1 × 90 words + captions |
| 6 | `front-cases` | proof through customers | left 4/12: P11 portrait (applications engineer Amara Osei at the bench, 3:4, 8 px) set 80 px lower than the text start (R1 A4 offset); right at 62.5%: label "CASES", H2 "Three boards, three problems.", then 3 ruled mini-rows (T1 small: "(Case 01) Hearing device", title, 2-line summary, dotted link). | 3 × 40 words + 40-word lead |
| 7 | `front-kits` | sample kits & lab services, price list | full-bleed surface band `#E8F0F0`, padding 100 px; head left ("SAMPLES & SERVICES" + H2 "Kits on the shelf, prices on the page."); **full-width price list** (section 9) with all 6 items; under it one line "Up to 5 part numbers × 50 pieces are free for qualified projects." + T2 pill "All sample kits". | 30 words + list |
| 8 | `front-close` | request + visit | ground; two columns: left 5/12 P12 (plant exterior, 3:2, 8 px); right at 62.5%: H2 "Send us your part numbers.", address, office hours, sample desk promise, mobile static badge (< 782 only), T2 pill "Request samples". | ~60 words |

Home photo positions: P01, P02, P03, P04, P05, P06, P07, P08, P09, P10, P11, P12 = **12** (≥ 8), none repeated.
Word count en: ≈ 45 + 110 + 180 + 80 + 90 + 160 + 30 + 60 ≈ 750 words (≥ 250), narrative paragraphs in blocks 2, 4, 5 (≥ 3).

### Comparison with the recent themes' home order
| # | Kanade | Yamabiko | Sora | Kazu | **Denki** |
|---|---|---|---|---|---|
| 1 | hero + gateway | hero (full-bleed + info bar) | cover + info bar | framed portrait hero | **top-bottom halves: headline + figure band / framed reel photo (parallax)** |
| 2 | intro | masonry catalogue | FAQ arch | letter | **right-column intro on empty ground** |
| 3 | mosaic | inset veil band | letter | chapter | **ruled product-family rows (T1)** |
| 4 | calendar | spec sheet + count | 3 bands | stat cards | **sticky photo + monthly ledger rows** |
| 5 | day strip | offset spread | interlude | mirrored chapter | **staggered photo field with #tags, per-photo parallax** |
| 6 | fees | price list | 4-stage row | student rows | **cases beside an offset portrait** |
| 7 | people | stagger cards | fees | preview | **sample-kit price list on band** |
| 8 | stories | visit | people split | price card | **request + visit** |
| 9 | visit | — | story rows | FAQ / close | — |

Why not alike: no recent home opens with figures in the first screen or uses a framed window inset with pale gutters below a headline; the product families are hairline-ruled rows with a fixed 54% / 62.5% grid (Yamabiko used masonry cards, Kazu chapters); the metrics are ledger rows next to a sticky photo, not Yamabiko's spec sheet or Kazu's stat cards and no sp-count on home; the photo field is staggered with #tags (R2) rather than Yamabiko's offset spread; there is no people grid, FAQ, calendar, letter or journal block on home. Signature shapes (blue hairline rows with "(01)" labels, pill with a filled disc, fixed rotating-ring badge) do not appear in Kanade (curved sheet), Yamabiko (veil band, pill thumbnail bar), Sora (arch, tilted sheet) or Kazu (flush-left giant serif, vertical name).

---

## 5. Inner pages (11; each = page head with S-a intro → body with T1 rows → T2 pill close; T3 badge fixed on all)

Page head (all inner pages): ground; breadcrumb 0.75rem muted; section label (uppercase accent); H1 serif 300 `x-large-display` left (cols 1–7); intro 2–3 lines at 62.5% right, bottom-aligned with the H1. Then an inset framed photo (alignwide, 8 px, height 420 px desktop / 4:3 mobile) on pages that list a "head photo" below, with `sp-parallax` `--sp-par: 8%` (6% mobile).

1. **Products** `/products/` — head photo P13 (tape casting of ceramic slurry). Four T1 rows (families) with photos (01) P14, (02) P11, (03) P10, (04) P16. Under the rows: "How to read our part numbers" — a ruled 5-row breakdown of `DC 0402 X7R 104 K 500` (series, size, dielectric, capacitance, tolerance, voltage). Close pill "Request samples".
2. **Ceramic capacitors** `/products/ceramic-capacitors/` — head photo none (first row carries P02). 4 series rows (T1). Spec table: Series / Sizes / Capacitance / Voltage / Tolerance / AEC-Q200 (5 rows). Note on DC-bias derating (paragraph). Pill "Request samples".
3. **Chip resistors** `/products/chip-resistors/` — first row P03; 4 series rows; spec table: Series / Sizes / Range / Tolerance / TCR / Power. Paragraph on anti-sulfur testing. Pill.
4. **Inductors & ferrite beads** `/products/inductors-beads/` — first row P04, third row P05; 4 series rows; spec table: Series / Sizes / Inductance or impedance @100 MHz / Rated current / DCR. Pill.
5. **Quality** `/quality/` — no head window; S-c sticky P06 left; ruled ledger rows of the 6 monthly figures **with sp-count**, each with last-3-months values in a small muted line ("Jul 0.7 · Aug 0.6 · Sep 0.6 ppm"); certificates band `#E8F0F0` with 4 ruled rows: ISO 9001:2015 (since 1996), IATF 16949:2016 (since 2008), ISO 14001:2015 (since 2011), AEC-Q200 qualified series (DC-AQ, DR-AQ, DL-PW); "What a lot report contains" paragraph; pill "Request a lot report". Head of Quality Tomasz Wierzba quoted (2 sentences).
6. **Samples & services** `/samples/` — head photo P16 (sample packing). Price list (section 9, full width). The 4-stage sample flow as ruled rows (section 8, text only, not a step grid). Form (core form or Contact Form 7 fallback markup): name, company, email, country, part numbers (textarea), annual quantity, project stage (select). Submit = T2 pill. Sample desk lead Sofie Brandt named.
7. **Plant** `/plant/` — no head window; **S-b staggered field** with P07, P08, P09, P13 (each sp-parallax 6/10/8/12%); then the process as ruled rows: (01) Powder & slurry, (02) Tape casting & printing, (03) Stacking & dicing, (04) Sintering, (05) Termination & plating, (06) Test & taping — text column at 62.5%, left column holds the stage's key figure (e.g. "1,250 °C", "100% electrical test") in serif 2.5rem. Lucas Ferreira (process engineer) quoted. Pill "Book a plant visit".
8. **Cases** `/cases/` (index = page listing 3 case posts as T1 rows with photos P11, P15, P09) and **3 single case posts** (category "Cases"): featured image as framed window with parallax; "Problem / What we changed / Result" as ruled rows; results stated as the customer's own measured outcome in neutral wording (no guarantees).
9. **About** `/about/` — S-a intro with caption "(About) Since 1987"; head photo P12; history as ruled rows (1987 founded with 14 people making disc capacitors; 1996 first MLCC line + ISO 9001; 2008 IATF 16949, inductors added; 2016 ferrite bead line; 2024 taping line 3) — rows, not a vertical timeline graphic; **people**: 7 named people as ruled rows (name 1.25rem 600, role, joined year, one sentence), with 2 portraits P11 and P15 placed in the left area at different heights (R1 A4 offsets: P11 top 0, P15 top 180 px). Pill "Contact".
10. **Contact** `/contact/` — head window P12 (16:9 crop, framed, sp-parallax 8%). Ruled rows: Address, Office hours, Plant, Sample desk, Email, Phone. Short form (name, email, message) with pill submit. Map placeholder: pale surface block with the address (no iframe).
11. **News** `/news/` (home.html index + single.html) — 5 posts: "Taping line 3 runs its first full month" (P09), "AEC-Q200 qualification for DL-PW" (P04), "Sample kit 2026 edition" (P16), "Plant open day, 14 November" (P12), "New anti-sulfur resistor series" (P03). Index = hairline rows (date left 25% in index style, title + excerpt at 62.5%, 160 px thumbnail 3:2 8 px at the right edge on desktop). Single: H1 serif 3rem, framed featured image, text column 680 px.
12. 404 / search: page head + pill home.

Each inner page has ≥ 1 T1 element, the T2 pill and the T3 badge — continuation satisfied on Products, 3 family pages, Quality, Samples, Plant, Cases, About, Contact, News.

---

## 6. Responsive rules (auto-gates must pass)
- **390 px first screen**: no vertical (writing-mode) text, no absolutely positioned or fixed label overlapping text; the T3 fixed badge is `display:none` below 782 px; figure band as a 2 × 2 grid in flow; no horizontal overflow (`html, body { overflow-x: clip }`).
- **T1 rows < 782 px**: single column; photo 3:2 full width; index label, title, body below; hairline stays full width. 782–1100: grid `50% 1fr`, gap 5%.
- **Sticky media < 960 px**: `position: static`; photo 4:5 above the ledger rows.
- **Staggered field < 782 px**: 2 columns, offsets reduced to 0 / 40 px; < 480 px one column, offsets 0.
- **Price list (section 9) ≥ 782 px**: alignwide full container width (1380 max, never inside a narrow column); grid `grid-template-columns: 9rem 1fr auto`; price cell `white-space: nowrap; text-align: right; padding-right: 0`; no `overflow: hidden` on the list; the price must be fully visible at 800 and 1280. < 782 px: each item stacks (code, name, description, price on its own line left-aligned, bold).
- **Every table** (spec tables, part-number breakdown): ≥ 782 px normal table, `width: 100%`, numeric columns nowrap; < 782 px stacked — each row becomes a block with `td::before { content: attr(data-label) }` labels; no horizontal scroll container required.
- Header < 960: menu overlay; language links inside the overlay.
- Ledger values: `white-space: nowrap`; at 390 they drop under the metric name, left-aligned, 2.25rem.

---

## 7. Photos (16, Grok, one at a time, read each)

STYLE (exact string on every prompt):
`photorealistic documentary photograph of a modern electronics component factory, cool neutral daylight and clean LED light, pale grey-blue and off-white surroundings, low-key subjects with deep matte blacks and graphite greys, brushed steel, white ceramic, small touches of muted copper, shallow depth of field, calm and precise mood, diverse adult staff in white or light grey cleanroom garments where people appear, no green circuit boards, no coloured LEDs, no text, no numbers, no logos, no labels, no signage, no Japanese elements`

Row says photo_direction **low-key**, the pipeline asks for bright documentary photos: resolved as low-key *subjects* (black ferrite, dark reels, graphite machinery) on bright, cool, pale surroundings — exactly R1's black pads on white. No cut-outs (0 transparent PNGs). ≤ 300 KB, ≤ 2000 px. readme.txt line per image (AI-generated, CC0).

| ID | Subject / composition | Ratio | Home? | Used on (each at most once per page) |
|---|---|---|---|---|
| P01 | macro of a tape-and-reel line: embossed carrier tape full of tiny chip components running over a steel sprocket, cover tape peeling off, background soft grey machine | 16:9 (crop 21:9 / 4:5) | **Home hero** | Home 1; Cases single #1 framed window |
| P02 | macro of multilayer ceramic chip capacitors scattered on a matte pale-grey ceramic plate, a few standing on end | 3:2 | **Home 3** | Home 3; Ceramic capacitors row 1 |
| P03 | top view of black chip resistors seated in white embossed carrier tape, diagonal composition | 3:2 | **Home 3** | Home 3; Chip resistors row 1; News post 5 |
| P04 | shielded black power inductors (small cubes) arranged loosely on a grey stone surface, raking light | 3:2 | **Home 3** | Home 3; Inductors row 1; News post 2 |
| P05 | stainless tweezers holding one ferrite chip bead above a pale surface, macro | 3:2 | **Home 3** | Home 3; Inductors row 3 |
| P06 | QA inspector in light grey garment at a stereo microscope, side view, hands on focus knob, pale lab | 4:5 | **Home 4** | Home 4; Quality sticky |
| P07 | tall automated reel store, rows of plain grey reels in racks, long perspective | 3:4 | **Home 5** | Home 5; Plant field |
| P08 | continuous sintering kiln: stainless tunnel, trays of ceramic chips entering, warm glow kept small | 3:2 | **Home 5** | Home 5; Plant field |
| P09 | operator's gloved hands loading a 7-inch reel onto a taping machine | 3:4 | **Home 5** | Home 5; Plant field; Cases index row 3; News post 1 |
| P10 | stacked ceramic green sheets on a vacuum table before dicing, blade above, macro | 4:5 | **Home 5** | Home 5; Products row 3 |
| P11 | applications engineer at a bench probing a small grey test board, instrument screens out of frame | 3:4 | **Home 6** | Home 6; Products row 2; About portrait 1; Cases index row 1 |
| P12 | plant exterior: modern low building, grey cladding and glass, overcast cool sky, empty forecourt | 3:2 | **Home 8** | Home 8; About head; Contact; News post 4 |
| P13 | tape casting: thin white ceramic slurry film spreading on a carrier belt under a steel doctor blade | 21:9 / 3:2 | — | Products head; Plant field |
| P14 | screen-printing station: squeegee drawing grey paste across a fine steel stencil | 3:2 | — | Products row 1 |
| P15 | two colleagues at a pale table reviewing a reel and a printed (blank) sheet, bright meeting room | 3:2 | — | About portrait 2; Cases index row 2 |
| P16 | hands packing small reels and anti-static bags into a plain unprinted white box | 3:2 | — | Samples head; Products row 4; News post 3 |

Binding per-page list:
- Home (12): P01 · P02 P03 P04 P05 · P06 · P07 P08 P09 P10 · P11 · P12.
- Products: head **P13**; rows **(01) P14, (02) P11, (03) P10, (04) P16**.
- Ceramic capacitors: P02. Chip resistors: P03. Inductors & beads: P04, P05.
- Quality: P06. Samples & services: P16. Plant: P07, P08, P09, P13. Cases index: P11, P15, P09; case singles: P01, P08, P04 (one each).
- About: P12, P11, P15. Contact: P12. News: posts 1–5 = P09, P04, P16, P12, P03.
- Total 16 unique images; no image twice on one page.

## 8. Fixed numbers and names (identical on every page and in all five languages)

**Monthly ledger** (September 2026, published figures; wording "we measured", never "guaranteed"):
| Metric | Value | Definition line |
|---|---|---|
| Output | **1.8 bn** pieces / month | all four families, shipped |
| Outgoing defect rate | **0.6 ppm** | 12-month rolling, customer-confirmed |
| On-time delivery | **97.8%** | against first confirmed date |
| Standard lead time | **6 weeks** | catalogue parts, full reels |
| Catalogue | **1,240** part numbers | across 13 series |
| Sample dispatch | **3 working days** | from approved request |
(3-month lines on Quality: defect rate Jul 0.7 / Aug 0.6 / Sep 0.6 ppm; on-time Jul 97.1 / Aug 97.5 / Sep 97.8%.)
Plant facts: 24/7 in three shifts, 420 employees, 3 taping lines, kiln at 1,250 °C, reel store 41,000 reels, founded 1987 with 14 people.

**Price list — Sample kits & lab services (EUR, excl. VAT)**:
| Code | Item | Detail | Price |
|---|---|---|---|
| K-C04 | Capacitor kit 0402 | 120 values × 25 pcs, C0G and X7R | €65 |
| K-R04 | Resistor kit 0402 | E24, 170 values × 50 pcs, 1% | €48 |
| K-L01 | Power inductor kit | 24 values × 5 pcs, DL-PW series | €72 |
| K-F01 | Ferrite bead kit | 30 values × 20 pcs, DF-FB and DF-HC | €39 |
| S-MR | Measurement report | DC-bias or impedance curve, per part number, 5 working days | €180 |
| S-FA | Failure analysis | one returned part, cross-section and report, 10 working days | €640 |
Free: up to 5 catalogue part numbers × 50 pieces per qualified project. Kit shipping €12 within the EU, €28 elsewhere.

**Sample request flow (4 stages, text rows)**: (1) send part numbers, project and annual quantity → (2) applications review within 1 working day → (3) samples dispatched in 3 working days with datasheet and lot report → (4) production quote within 5 working days; standard lead time 6 weeks.

**People (7)**:
| Name | Role | Joined | Appears |
|---|---|---|---|
| Ingrid Vass | Managing director | 2004 | About, home block 2 (named) |
| Tomasz Wierzba | Head of quality | 2009 | Quality, About |
| Amara Osei | Applications engineer, capacitors | 2017 | Home 6 (P11), Cases #1, About |
| Lucas Ferreira | Process engineer, taping lines | 2013 | Plant, About |
| Mei-Lin Huang | Supply planning lead | 2015 | Samples (lead times), About |
| Rahul Menon | Inductor design lead | 2011 | Inductors page, Cases #2, About |
| Sofie Brandt | Sample desk | 2019 | Samples, Contact, About |

**Cases (3, customers anonymised by type and country, no real brands)**:
1. *Hearing device, Denmark* — moved from 0402 to 0201 X7R capacitors to free board area; Amara Osei ran DC-bias measurements; the customer reports 18% less area on the amplifier board.
2. *E-bike motor controller, Germany* — DL-PW power inductors qualified to AEC-Q200; Rahul Menon reworked the winding for lower DCR; customer measured 6 °C lower coil temperature at rated current.
3. *Smart electricity meter, Spain* — DR-AS anti-sulfur resistors after field drift; 1,000-hour flowers-of-sulfur test on our side, customer reports no drift above 0.5% in its own test.

Location/hours (all languages): Kanaalweg Oost 18, 5644 RK Eindhoven, Netherlands · office Mon–Fri 08:00–17:30 CET · plant 24/7 · sample desk replies within 1 working day.

## 9. Price list component (home block 7, Samples page)
- `div.dk-price` alignwide (full 1380 container, never a narrow column), white rows on the `#E8F0F0` band (home) or on ground (Samples page), each row `border-top: 1px solid rgba(52,96,149,.30)`, padding 22 px 0, grid `9rem 1fr auto`, column gap 32 px: code (index-label style, accent), name (Plex Sans 600 1.125rem) + detail (0.875rem muted) stacked, price (Plex Sans 600 1.125rem, tabular-nums, `white-space: nowrap`, right-aligned). Last row has a bottom hairline. No sp-reveal on the list (rule: price tables never animate).
- < 782 px: stacked rows (code, name, detail, price), price left-aligned bold.

## 10. Scroll motion (sp-scroll; copy assets unchanged, adjust only CSS variables / theme-scoped overrides)

Chosen from stage-a.md "scroll candidates" (R1 IO + CSS transitions; R2 GSAP drift → sp-parallax):
| Effect (sp-* class) | Where | Source and its numbers | Our values |
|---|---|---|---|
| **sp-reveal sp-reveal--up** + parent **sp-stagger** | H2 + paragraph groups in home blocks 2, 4, 5, 6, 8; T1 text columns (`.dk-row__text` children); inner page body sections | R1 js-fadeup: IO adds is-shown, 1100 ms, base delay 100 ms, easeOutQuint `cubic-bezier(.22,1,.36,1)`, 40 px; js-fadeups +140 ms per child, 24 px | theme `:root { --sp-dur: 1.1s; --sp-ease: cubic-bezier(.22,1,.36,1); --sp-dist: 24px; }` (40 px capped to the ≤ 30 px rule → 24 px, R1's group value). Stagger uses the built-in 0.12 s steps (R1 0.14 s). |
| **sp-reveal sp-reveal--wipe** | T1 row photos (`figure.dk-row__media`), home blocks 3 and 6 photos, Products/family first-row photos | R1 js-mask: clip-path polygon wiping **left → right**, 1200 ms, 200 ms + 116 ms per child, easeInOutQuint `cubic-bezier(.86,0,.07,1)` | theme-scoped override (selectors still start with `html.sp-js:not(.sp-no-motion)`, clip stays on the child img): `html.sp-js:not(.sp-no-motion) .dk-row .sp-reveal--wipe:not(.sp-in) > * { clip-path: inset(0 100% 0 0); }` and `html.sp-js:not(.sp-no-motion) .dk-row .sp-reveal--wipe > * { transition: clip-path 1.2s cubic-bezier(.86,0,.07,1) .2s; }` |
| **sp-count** | Quality page ledger values only (not home: keeps home at 3 effect types) | R1 has none; stage-a suggests it for the ledger | built-in 1.2 s easeOutCubic; markup `<p class="sp-reveal sp-count">0.6 <small>ppm</small></p>` |
| **sp-parallax** (mandatory) | see below | R2 photo field GSAP ScrollTrigger `scrub:0`, ease `cubic-bezier(.19,1,.22,1)`; R1 hero page-2 mask reveal (scroll-linked) | CSS scroll-driven (built-in), JS IO fallback |

Effects per page ≤ 3 types: Home = reveal--up(+stagger), wipe, parallax. Quality = up, count, parallax. Other pages = up, wipe, parallax. No reveal in the hero (block 1), on the figure band, the price list, forms or legal text. Horizontal scroll rows: none planned. Rotating T3 ring is a plain CSS animation (not scroll), off under reduced motion and `sp-no-motion`.

### Parallax (required)
1. **Home hero framed window** (primary): `div.dk-window.sp-parallax` with `style="--sp-par:10%"` (desktop), `@media (max-width:781px) { .dk-window { --sp-par: 6%; } }`; moving layer = the direct `img` P01 (built-in scale 1.18 covers the travel). Foreground: none inside the window (headline, lead and figure band sit above it, outside the moving layer). Reference motion: R1's scroll-linked page-2 mask reveal under the hero (the photo seems to slide under the frame as you scroll) and R2's scrub-linked photo drift.
2. **Home block 5 staggered field**: each `figure.sp-parallax` with `--sp-par` 6% / 10% / 8% / 12% (P07 / P08 / P09 / P10), mobile all 5%. The differing speeds recreate R2's drifting field vertically. Captions sit outside the figures (not moving).
3. **Inner page head windows** (Products P13, Samples P16, About P12, Contact P12, case singles): `--sp-par: 8%`, mobile 6%.
- Verified by `check-parallax.mjs` (desktop 1280 × 900 and mobile 390 × 844, displacement ≥ 6 px; 0 under reduced motion). `?sp-static` and the editor: no motion.

---

## 11. Similarity targets (≈ 80% to R1 in five dimensions)

| Dimension | Reference value (token) | Denki value |
|---|---|---|
| Ground colour | R1 (a) `#F0F0F8` / `#F8F8F8`, ~75% | `#F0F2F7`, ~55% + white 15% |
| Band colour | R1 (a) `#E8F0F0` | `#E8F0F0` |
| Ink | R1 (a) `#13253B` | `#13253B` |
| Accent | R1 (a) `#2E5DBC` < 1% | `#2E5DBC` ≤ 2% + 鉄紺 `#2E3A4B` ≤ 1.5% (row hex) |
| Hairline | R1 (a) rgba(52,96,149,.30) 1 px | same |
| First-screen saturation | R1 13.0% | target ≤ 8%, cap 15% |
| Hero headline | R1 (b) 88 px / 300 / ~1.2 | 5.5rem (88 px) / 300 / 1.12, Plex Serif |
| Row title | R1 (b) 28 px / 600 / 1.28 | 1.75rem / 600 / 1.28 |
| Body | R1 (b) 14–15 px / 28 px | 15 px / 28 px (1.87) |
| Index label | R1 (b) 14 px / 500 / 28 px / -0.28 px, blue | 0.875rem / 500 / 2 / -0.02em, `#2E5DBC` |
| Nav | R1 (b) 13 px / 500 / 0.04em | 13 px / 500 / 0.04em |
| Container | R1 (c) 1380, 30 px gutters | 1380, 30 px gutters (alignwide) |
| Section padding | R1 (c) 100 px | 100 px (6.25rem), mobile 64 px |
| Header | R1 (c) 80 px white | 80 px white |
| Row grid | R1 (c) photo 54%, text from 62.5%, gap 124 px, pitch ~537 | 54% / 62.5% / 8.5% gap, 42 px row gap |
| Photo ratio / radius | R1 (e) 3:2, 8 px, no shadow | 3:2 (rows), 4:5 / 3:4 (sticky, portraits), 8 px everywhere, no shadow |
| Image mask | R1 (g) clip-path L→R wipe | same direction via sp-reveal--wipe override |
| Portrait offsets | R1 (e) 3:4 portraits at different heights | home 6 portrait +80 px; About portraits 0 / 180 px |
| Pill button | R1 (d, f) 232 × 58, r29, 34 px disc | 232 × 58, r29, 34 px `#2E5DBC` disc |
| Dotted link | R1 (d) 1 px dotted underline, 166 px | 1 px dotted, 166 px |
| Badge | R2 (f) 96 px disc, 140 px rotating ring, 10 px tracked | 96 px 鉄紺 disc, 140 px ring, 10 px / 0.32em, 24 s |
| Photo field | R2 (e) mixed sizes, y offsets 0–85 px, caption + #tag | 4 sizes, offsets 0 / 85 / 24 / 140 px, caption + `# tag` |
| Reveal | R1 (g) 1100 ms, easeOutQuint, 40 px | 1.1 s, `cubic-bezier(.22,1,.36,1)`, 24 px (≤ 30 rule) |
| Stagger | R1 (g) +140 ms | +120 ms (built-in) |
| Wipe | R1 (g) 1200 ms, `cubic-bezier(.86,0,.07,1)`, delay 200 ms | 1.2 s, same curve, .2 s |
| Scroll-linked image | R1 hero mask / R2 scrub drift | sp-parallax 10% hero, 6–12% field |
| Shadows | none | none |
Not copied: R1 hero blob art, R2 dark ground and orange, all text, photos, logos.

---

## 12. Home acceptance checklist (stage 1 review / stage 2 verdict)
1. First screen at 1440 × 900: ground `#F0F2F7`, 80 px white top bar, serif 300 H1 at ≥ 5rem left, lead + T2 pill starting at 62.5%, 4-cell hairline figure band with 1.8 bn / 0.6 ppm / 6 weeks / 3 days, framed P01 window with pale gutters below; no table/form/search/coloured field; `check-first-screen.py` ≤ 15% (target ≤ 8%).
2. 390 × 844 first screen: everything in flow, figure band 2 × 2, no badge, no overlap, no horizontal overflow.
3. T1 rows on home block 3: full-width blue-grey hairlines, 3:2 8 px photos at 54% flush left, text from 62.5% with accent "(01)" labels, 28 px / 600 titles, dotted 166 px links.
4. T2 pill with filled 34 px accent disc on every CTA (hero, 2, 4, 7, 8).
5. T3 fixed 鉄紺 badge with rotating ring visible bottom-right on desktop; hidden < 782; stops under reduced motion.
6. Block order equals section 4; sticky P06 beside the monthly ledger; staggered field with 4 photos, captions and #tags.
7. 12 photo positions, no repeats, no text/logos/broken hands, same STYLE; no cut-outs.
8. Price list full container width at 800 and 1280, prices nowrap right and fully visible; stacked < 782.
9. Numbers on home match section 8 exactly (figures, prices, names, address, hours).
10. Motion: no reveal in the hero; reveal--up/stagger, wipe (L→R) and parallax only; `check-parallax.mjs` passes (hero ≥ 6 px displacement desktop and mobile, 0 under reduced motion); `?sp-static` shows all content; no-JS shows all content.
11. Colours as section 2: accent and 鉄紺 only on small areas; no dark or saturated full-bleed field; no beige.
12. en home ≥ 250 words with ≥ 3 narrative paragraphs; IBM Plex Serif/Sans loaded locally (OFL), theme max font size 5.5rem.
13. `auto-gates.mjs … en … 1 1` passes.
