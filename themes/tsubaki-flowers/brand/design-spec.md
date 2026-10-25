# Tsubaki Flowers: design spec (stage 1, binding for implementation)

Slug `tsubaki-flowers`, florist shop for households and small ceremonies, type **store** (WooCommerce required, checkout must work). Row b11-3: archetype editorial-magazine, hero framed-window, nav top-bar, real photography with film grain, palette celadon grey (seiji-nezumi) `#6E7F74`, fonts Hanken Grotesk / Onest, **font_direction sans**, page_structure people-story.
Reference: **GOOD2 GARDEN** https://www.good2garden.com/ (S5-Style, exterior/garden, unused before). Measurements: `reference-tokens.md`; screenshots `ref/`. We borrow structure, technique, colour relationships and the key-visual concept. Photos, copy and logo are all ours.

Similarity target: about 80% on palette, imagery treatment, scroll motion, decoration and layout. Every number below is tagged with its token source, e.g. `[T:b]` = reference-tokens.md section (b).

Fixed brand facts (every page and all five languages use these): Tsubaki Flowers, founded **2011**, shop and workroom at **14 Linden Row, Aldmere** (fictional, internationally neutral harbour town). Named after the camellia bush by the door. Founder **Mara Ellison**. Currency **EUR (€)** in every language; no converted prices. Full list in section 9.

---

## 1. Signature techniques (three, all must be obvious at a glance)

### T1. White intro screen → full-bleed film hero, headline bottom-left (good2garden first screen)
- Reference (https://www.good2garden.com/, `ref/g2g-first.png`, `ref/g2g-load*.png`, `ref/g2g-hero.png`): page opens on a plain white screen with one small Japanese line over one big Latin line; it fades out and a muted full-bleed film of a hand on a tree trunk fades in. The headline returns bottom-left in white: small line (1.25rem, ls .05em) above a 4rem Latin line (w400, lh 1.4, ls .02em), left 97px, bottom 42px. Transparent header, white nav right, 1px outlined pill (phone) far right.
- Ours: home first screen. See **Key visual concept** for the scene. Geometry: hero = Cover block `alignfull`, `min-height:100svh` (min 640px), photo `object-fit:cover` `[T:e]`. Headline content position bottom-left, padding-left `97px` desktop / 24px mobile, padding-bottom `42px` desktop / 32px mobile `[T:c]`. Small line Onest `1.25rem` ls `.05em` white; Latin line Hanken Grotesk **`clamp(2.75rem, 6vw, 4.25rem)`** w400 lh 1.25 ls .02em white (`[T:b]` 4rem → 4.25rem to meet the theme max). Dim overlay on Cover: `#141811` at 18% (keeps white text AA on the bokeh).
- Intro screen: a fixed white (`#F4F6F3`) layer, `aria-hidden="true"`, centred small line ("Since 2011, Linden Row") 1rem grey + one Latin line ("Flowers for the table.") Hanken Grotesk 2.5rem ink. Pure CSS `@keyframes`: hold 0.9s, fade opacity 1→0 over 0.7s (total 1.6s), `animation-fill-mode:forwards` ending with `visibility:hidden; pointer-events:none`. The hero headline fades in (opacity 0→1, 1.2s, delay 1.3s, `cubic-bezier(.25,.46,.45,.94)` `[T:g]`) via its own keyframes, **not** sp-reveal. Under `prefers-reduced-motion`, `?sp-static`, the editor, and on every page except the front page: intro is `display:none`, headline at final state. Plays once per session is not required (CSS only, no JS).
- Must not be diluted: photo is truly full-bleed edge to edge and 100svh (no inset frame, no split); headline sits **bottom-left**, not centred, not in a box; Latin line ≥4.25rem at 1440; header is transparent over the photo with white text.

### T2. Hairline three-column grid with mixed-aspect photos floating in air (good2garden "Works")
- Reference (`ref/g2g-part1.png`, `ref/scroll-works-*.png`): section title "Works" 26px + grey 12px sub-label inline; then a full-bleed grid of 3 equal columns (480px each at 1440) separated by **1px solid ink vertical rules** spanning the full cell height, with a 1px ink rule across the top. Each cell holds one photo, portrait (3:4, ~329×437) or landscape (3:2, ~329×220), flush rectangle, centred with 70–110px of vertical air; caption 15px centred below, grey hashtag line 12px under it `[T:c][T:e][T:f]`.
- Ours: home block 3 "Stems of the week". `alignfull`, no side padding, 3 columns gap 0; `border-top:1px solid #1B221E`; column 2 and 3 `border-left:1px solid #1B221E`. Cell padding `70px` (desktop) `[T:c]`; photo width 69% of cell (≈330px at 1440), centred; order **portrait / landscape / landscape** (same rhythm as the reference) so the landscape cells show visible air above and below. Caption Onest 15px lh 27px centred ink; tag line 12px grey `#7F8782` ("#ranunculus #tablesize #householdorder"). No radius, no shadow `[T:d]`.
- Must not be diluted: the rules are **1px ink**, not light grey (Tsumugi lesson: never swap the reference contrast for pale stone); grid is full-bleed; photos have mixed aspect and do not fill the cells.
- Mobile (<782px): one column, each cell `border-top:1px solid ink`, no vertical rules, padding 40px 24px, photo width 78%.

### T3. Asymmetric about block: tall portrait left, small landscape floating top-right, text low-right (good2garden "About")
- Reference (`ref/g2g-part0.png`): 12-col grid; portrait 2:3 (500×750) at column 1–5 from the left content edge (75px); small landscape (260×184, ≈19% width) top-right flush with the portrait top; text block (lead 20px lh 36px ls 2px, paragraph 15px lh 2.3 ls 1.5px) starts at column 7, about 300px below the top; a "View more →" link with 1px underline under it `[T:b][T:c][T:e]`.
- Ours: home block 2 "The shop". Side padding 75px. Portrait **H2** 2:3 width `min(500px, 36vw)`; small landscape **H3** 3:2 width `min(260px, 19vw)` aligned to the right edge and the portrait top; text column starts at 7/12, `margin-top: clamp(120px, 20vw, 300px)`. Lead Onest 1.25rem lh 1.8 ls .06em; body 15px lh 2.3 ls .04em (ls 1.5px from the reference is reduced in Latin; keep 1.5px in zh-TW/ja). Then the T-link.
- Must not be diluted: the small photo stays small (≤20% width) and **floats detached** top-right with empty space between it and the text; text block must start clearly lower than the portrait top.
- Mobile: portrait full width minus 24px; small landscape 58% width aligned right, overlapping nothing (normal flow, margin-top -40px is NOT allowed; use margin-top 24px); text below.

### Shared detail: section title + T-link (reference decoration `[T:f]`)
Every section title: Latin word Hanken Grotesk 26px→ we use `1.75rem` (28px) w500 lh 1.6, followed inline by a grey 12px sub-label in the page language (en sub-label in small caps-free sentence case, e.g. "Stems of the week · this Thursday"). "View more →" = Onest 15px ink, `→` 18px, width 160px, `border-bottom:1px solid ink`, padding-bottom 12px, arrow pushed right (flex space-between) `[T:f]`.

### Continuation to inner pages (required)
| Page | T1 (bottom-left over full-bleed photo) | T2 (hairline 3-col grid) | T3 (asymmetric portrait + floating small photo) |
|---|---|---|---|
| Our Story | page hero: full-bleed 62vh photo **I1**, title bottom-left white, sp-parallax | three founding facts (2011 / 14 Linden Row / 7 people) as text-only hairline cells | founder block: **I2** portrait + **H3** small |
| People | page hero **I3** 62vh bottom-left | 7 people as hairline grid (3 + 3 + 1, last row 1 cell then 2 empty ruled cells), mixed photo cells + text-only cells, name + role + grey tag line | lead florist feature: **H10** portrait + **H3** small |
| A Week in the Shop | page hero **H8** 62vh bottom-left | Mon–Sat days as 3×2 hairline text cells (day name 28px + 3 lines) — text cells, not steps | Monday market block: **I5** portrait + **H9** small |
| Flowers & Prices | — (plain head, see 4) | 3 order types (Household / Ceremony / Sympathy) in hairline cells with photo **H4/H5/H6** | — ; price list full width (see 6) |
| Ceremonies | page hero **I6** bottom-left | 3 ceremony formats in hairline cells | wedding story block: **H11** portrait + **I7** small |
| Stories | — | 4 stories as hairline grid (3 + 1) with photos | each single story uses T3 at the top |
| Shop (WooCommerce archive) | — | product grid uses the hairline grid (3 cols, 1px rules, mixed photo air, centred caption + price) | — |
| Visit & Order | page hero **H12** bottom-left | hours / address / delivery in 3 hairline cells | — |
T1 on 5 inner pages, T2 on 8, T3 on 5 → well above 4.

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
GOOD2 GARDEN opens on a white screen (one small line, one big Latin line), then a muted full-bleed **film loop of a single human hand resting on a tree trunk**: a green bokeh patch fills the left third, dark mossy bark fills the right half, a white shirt cuff enters bottom-right. No product, no garden shown. The story is *"the garden becomes the backdrop of life"*: people and plants, one quiet touch. Motion: white intro → film fades in → slow looping footage → headline bottom-left; below, sections fade in (1.8s, no movement).

### (2) Our translation (florist, same composition, same motion idea, same image type = photo)
A **film-grain photograph of a florist's hand resting on a bundle of freshly conditioned stems** on the wooden workbench: the hand and wrist (light linen cuff) enter from the right-centre, fingers spread lightly over the stems; the **left third is a soft green-and-white bokeh of the shop window** (daylight through glass, out-of-focus leaves) — this is our "framed window" (row hero) inside a full-bleed photo; the right half is dark, close leaf and stem texture with the bench edge low. No finished bouquet, no faces. Story: *"Flowers become part of the table"* — the quiet, careful touch before flowers go into a home or a small ceremony. Motion: white intro (CSS) → photo already there underneath → hero photo drifts slowly with sp-parallax (our stand-in for the looping film), headline fades in bottom-left.
Row `first_screen: top-bottom-halves` is a reference value only; the reference full-bleed composition wins (stage-a decision). The "lower half" is answered by block 2 starting right below the fold.

### (3) KV checklist (all six implemented and visible in the first screen)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | White intro screen, small line + big Latin line | white `#F4F6F3` layer: "Since 2011, Linden Row" + "Flowers for the table." | full viewport, centred | CSS fade out, 0.9s hold + 0.7s, ends hidden | — |
| 2 | Hand on trunk, close-up | florist's hand on a bundle of stems at the bench | hand right-centre (x 55–85%, y 25–75%) | sp-parallax on Cover bg, `--sp-par:8%` (mobile 5%) | **H1** |
| 3 | Green bokeh, left third | shop-window bokeh, soft green/white | left 0–33% | moves with the photo (parallax) | **H1** |
| 4 | Dark bark texture, right | dark leaves / stems texture, bench edge low | right 50%, bottom 15% | moves with the photo | **H1** |
| 5 | White headline bottom-left (small line + 4rem Latin) | "Flowers for households and small ceremonies." small line + "Flowers, part of the table." 4.25rem | left 97px, bottom 42px | CSS fade-in 1.2s, delay 1.3s (no sp-reveal) | — |
| 6 | Transparent header, white nav right, outlined phone pill | transparent top-bar, white nav, 1px white pill "Order flowers" (→ Visit & Order) far right | top, height 72px | header gets `#F4F6F3` bg + ink text after hero (opacity transition .3s `[T:g]`; CSS-only via sticky + `animation-timeline:scroll()` where supported; otherwise stays transparent over hero and solid on inner pages) | — |

---

## 3. Colour (reference relationships kept, ±5% lightness; source `[T:a]`)
| Role | Reference | Ours | Share | Note |
|---|---|---|---|---|
| base | `#F7F6F0` | **`#F4F6F3`** | ≈80% | same lightness; hue moved from warm to cool so it is not a beige default (common rule) |
| ink / text / hairlines | `#141811` | **`#1B221E`** | ≈3% | +3% L, green-black |
| deep accent (buttons, focus, active nav underline) | `#314032` | **`#3F4D44`** (hover `#2A352E`, ref hover `#121912` direction) | <2% | +5% L |
| brand celadon grey (seiji-nezumi) (row) | — | **`#6E7F74`** | <4% | price list header rule, tag dots, footer bg tint 8% |
| grey (sub-labels, tags) | `#858781` | **`#7F8782`** | small | |
| light rule | `#EEEEEE` | **`#E3E7E3`** | small | form fields, table row separators |
| white | `#FFFFFF` | `#FFFFFF` | hero text, nav over photo | |
| footer | — | `#1B221E` bg, `#F4F6F3` text | one block | reference footer is dark; keep |
First-screen saturated share: reference ≈7%; **limit 15%, target ≤10%** (scripts/check-first-screen.py). The green bokeh must stay desaturated (film grade). No other colour areas. Avoid the recent themes' mains (Seiwa/Kosei/Akira/Shiori).

## 4. Type (font_direction **sans**)
- Latin headings: **Hanken Grotesk** (400, 500) — closest free match to neue-haas-grotesk-display `[T:b]`. Latin body: **Onest** (400, 500).
- Stacks: headings `"Hanken Grotesk", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`; body `"Onest", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`. `:lang(zh-TW)` puts Noto Sans TC first, `:lang(ja)` Noto Sans JP first (sans-serif gothic only, no Mincho anywhere).
- Load all via theme.json `fontFamilies` + `fontFace` (woff2 in assets/fonts, zh-TW and ja subsets via the Hokuto/Hada workaround), so the editor iframe and front end match; copy `shared/inc/editor-lang.php` → `inc/editor-lang.php` and require it.
- Sizes (theme.json presets): small 0.75rem (sub-labels/tags, ref 12px) · base 1rem (body 16/25.6 `[T:b]`) · paragraph-long 0.9375rem lh 2.3 · medium 1.25rem (lead, ref 20/36) · large 1.75rem (section titles, ref 26 w500) · x-large 2.5rem (page titles) · **xx-large `clamp(2.75rem,6vw,4.25rem)`** (hero, max 4.25rem). Weight 400 body/hero, 500 titles. No uppercase transforms `[T:b]`. Letter-spacing hero .02em.
- CJK: sizes ×0.75 for hero/titles, body line-height 1.85 (long paragraphs 2.1); fr/de `hyphens:auto`.

## 5. Home page

### First screen (1440×900 and 390×844)
Desktop: as Key visual (full-bleed H1, transparent header with logo wordmark "Tsubaki Flowers" Hanken Grotesk 1.25rem white left at 24px, nav right: Story · People · A Week · Flowers & Prices · Shop · Visit, then the outlined pill). Mobile 390: same photo cropped to the hand + bokeh (`object-position: 62% 50%`), hamburger right, pill hidden in the menu; headline in normal flow at the bottom of the Cover (Cover content position bottom-left, no absolute/vertical labels), Latin line 2.75rem, small line 1rem. Nothing else on the first screen (no table, form, search).

### Block order
| # | Block | Purpose | Layout & photo | Copy |
|---|---|---|---|---|
| 1 | Hero (T1, KV) | mood, promise | full-bleed **H1**, sp-parallax | 2 lines |
| 2 | The shop (T3) | who we are | portrait **H2** left, small **H3** top-right, text low-right | lead 2 lines + 2 paragraphs (≈110 words) + "Our story →" |
| 3 | Stems of the week (T2) | what is on the bench now | full-bleed hairline 3 cells **H4** (portrait) **H5** **H6** (landscape) | title + 3 captions + tags + "See this week's flowers →" (Shop) |
| 4 | Monday, 5:40 a.m. (full-bleed photo band) | people-story opener | full-bleed **H7** 16:7 (mobile 4:3), `sp-parallax --sp-par:10%` (mobile 6%); caption below left: "Felix at the flower market" 12px grey | 1 caption |
| 5 | A week in the shop | the people-story: three days | 1px top rule; three rows, each `grid 3/12 | 5/12 | 4/12`: day word (Hanken 1.75rem: Monday / Thursday / Saturday) · paragraph (60 words) · photo (Mon **H8** 3:2, Thu **H9** 3:4, Sat none → grey italic quote). Rows separated by 1px ink rules. Not a timeline (no line/dots), not cards | ≈180 words + "Read the whole week →" |
| 6 | The people at the bench | named people | left: **H10** portrait 3:4 of Tomás Reyes (5/12) with a 2-line quote under it; right (6/12, offset 1): list of the 7 names, each row `name (Hanken 1.25rem) — role (grey 0.875rem)`, 1px `#E3E7E3` rules, "Meet everyone →" | quote + 7 rows |
| 7 | Ways to order + prices | conversion | full-width hairline price list (see 6), 6 items, left title column 4/12 with 2-line intro, list 8/12 | 6 rows |
| 8 | Small ceremonies | stories | text left 5/12 (title, 70-word story "A garden wedding for thirty", "All stories →"), **H11** landscape 3:2 right 7/12 flush to the right edge | ≈80 words |
| 9 | Visit | address/hours | **H12** shop front 3:2 left 6/12; right: address, hours, phone, delivery rule, button "Order flowers" (`#3F4D44`, radius 0, white text) | facts |
| 10 | Footer | dark `#1B221E` | 3 columns: wordmark + one line, links, hours; language switcher | — |
Home photo positions: **12** (H1–H12, none repeated) ≥ 8. Home English copy ≥ 450 words, ≥5 narrative paragraphs.

### Comparison with recent themes (structure must differ)
| Theme | Hero | Block order | Why ours is different |
|---|---|---|---|
| Shiori Books | two-half split | split hero → new books → people → visit | ours is single full-bleed photo + white intro; no split |
| Akira Audit | hero + info bar | hero → circle card → … → 2 offset photos | no info bar, no circle card |
| Kosei Architects | 2×2 framed grid | grid hero → masonry → services table → L-notch/arch | no grid hero, no masonry, no crops; hairline grid has equal columns with air |
| Seiwa Furniture | wide + portrait hero | about → product cards → featured → contact | no cards: hairline rules only; people-story week rows + photo band in the middle |

## 6. Price list (home block 7 and Flowers & Prices)
Markup: core Table block (`is-style-sp-prices`) or Group rows. ≥782px: **full width of its column/container**, 2 columns `item (left) | price (right)`, price `white-space:nowrap; text-align:right; font-variant-numeric:tabular-nums`, never clipped (check 800 and 1280). Rows: padding 20px 0, `border-bottom:1px solid #E3E7E3`, top rule `1px solid #6E7F74`. Item name Hanken 1.125rem + description 0.875rem grey on the next line. Mobile <782px: each row stacks (name, description, price left-aligned below). Any other table on the site stacks the same way. No sp-reveal on the price list.

## 7. Inner pages (≥8, plus WooCommerce)
1. **Our Story** — T1 hero I1; T3 founder block (I2 + H3); 2011 → today in 3 paragraphs; T2 three facts; "Why camellia" paragraph.
2. **People** — T1 hero I3; T3 lead feature (H10 + H3); T2 hairline grid of 7 people (photo cells I2 Mara, I5 Felix, H9 Aiyana, H8 Noor; 3 text-only cells; each with name, role, 40-word bio, grey tag line).
3. **A Week in the Shop** — T1 hero H8; T3 Monday market (I5 + H9); T2 Mon–Sat text cells (Monday market, Tuesday conditioning, Wednesday subscriptions, Thursday ceremony prep, Friday deliveries, Saturday open bench); full-bleed band H7 with sp-parallax.
4. **Flowers & Prices** — head (title + 2-line lead); T2 three order types (H4, H5, H6); full price list (section 9, 6 items); delivery rules; ordering process (4 steps as one paragraph list, not a step grid).
5. **Subscriptions** — household weekly flowers: how it works, €36/delivery, pause/skip rules, photo H4 + T-link to Shop.
6. **Ceremonies** — T1 hero I6; T2 three formats (small wedding, naming day, memorial); T3 wedding story (H11 + I7); ceremony package €420.
7. **Stories** — T2 grid of 4 stories (photos H11, I7, H5, H6); each single post opens with T3.
8. **Flower Care / FAQ** — conditioning at home, water, vase life (honest: "usually 5–7 days, depends on the flower"), 8 FAQ items (details blocks), photo H3.
9. **Visit & Order** — T1 hero H12; hours, address, phone, delivery radius, contact form (below the fold), T2 3 info cells.
10. **Shop** (WooCommerce archive/single/cart/checkout) — 6 products matching the price list; hairline product grid; checkout works locally.
Plus Journal (blog index), privacy, 404.

## 8. Photos (18; Grok; one at a time; read each; no text/logo; no Japanese elements; diverse people; no cut-outs; ≤300 KB, ≤2000px)
STYLE (one string for the whole theme):
`Natural daylight documentary photograph of a small modern florist shop, high-key, soft overexposed highlights, shallow depth of field, muted sage and moss greens, cool off-white walls, fine 35mm film grain, gentle low contrast, calm and quiet, no text, no logos, no brand names`

| ID | Subject / composition | Ratio | Used on |
|---|---|---|---|
| H1 | **KV**: close-up of a florist's hand (light linen cuff) resting on a bundle of fresh green stems on a wooden bench; left third soft green-white window bokeh, right half dark leaf texture; no face | 16:9 (2000×1125) | **Home 1 hero** |
| H2 | tall shot of the shop interior: zinc buckets of seasonal stems on a concrete floor, window light | 2:3 | **Home 2** |
| H3 | detail: hands tying a small posy with twine | 3:2 | **Home 2**, Our Story T3 |
| H4 | single tall jar of ranunculus and foliage on a pale table | 3:4 | **Home 3**, Flowers & Prices |
| H5 | low table centrepiece, loose garden roses and grasses, dinner table | 3:2 | **Home 3**, Flowers & Prices, Stories |
| H6 | sympathy arrangement in white and green, simple wreath of foliage on linen | 3:2 | **Home 3**, Flowers & Prices |
| H7 | wide early-morning flower market, buyer with a trolley of stem bundles, blue-grey dawn light | 16:7 | **Home 4 band**, A Week band |
| H8 | workroom: florist stripping leaves from stems into a bucket, conditioning | 3:2 | **Home 5 (Mon)**, A Week hero |
| H9 | florist checking a ceremony arch of foliage on a stand, Thursday prep | 3:4 | **Home 5 (Thu)**, A Week T3 |
| H10 | portrait of a florist in a canvas apron (man, 40s, Latino) at the bench, three-quarter, soft smile | 3:4 | **Home 6**, People T3 |
| H11 | small garden wedding table for thirty with low arrangements, afternoon light, guests blurred | 3:2 | **Home 8**, Ceremonies T3, Stories |
| H12 | shop front with large window, buckets outside, camellia bush by the door, quiet street | 3:2 | **Home 9**, Visit hero |
| I1 | wide shop interior from the doorway, morning light, empty | 16:9 | Our Story hero |
| I2 | portrait of founder (woman, 50s, Black, short grey hair) arranging stems by the window | 2:3 | Our Story T3 |
| I3 | three florists working at a long bench, seen from the side, hands and aprons | 16:9 | People hero |
| I5 | buyer (man, 30s, East Asian, = Felix) choosing bundles at the market | 2:3 | A Week T3, People grid |
| I6 | hand-tied bridal bouquet held low against a pale linen dress, no face | 16:9 | Ceremonies hero |
| I7 | buttonholes laid out in a row on a wooden tray | 3:2 | Ceremonies T3, Stories |

Total **18 files** (H1–H12, I1, I2, I3, I5, I6, I7; no I4). Home uses H1–H12. Inner reuse across pages is allowed, never twice on one page.

## 9. Fixed numbers (all pages, five languages)
- Founded 2011; 14 Linden Row, Aldmere; phone (020) 555 0148; hello@tsubakiflowers.example.
- Hours: Tue–Sat 9:00–18:00, Sun 10:00–15:00, Mon closed (market and workroom day).
- Delivery: within 8 km, €8; same-day if ordered before 12:00 (Tue–Sat).
- Prices (6): Table posy from €28 · Hand-tied bouquet from €48 · Weekly household subscription €36 per delivery · Seasonal arrangement in a vessel from €85 · Sympathy tribute from €120 · Small ceremony package (bouquet, table flowers for up to 30, 6 buttonholes) from €420. WooCommerce products = these 6 at the same "from" price.
- People (7): Mara Ellison (founder), Tomás Reyes (head florist), Aiyana Brooks (ceremonies), Lin Wei (subscriptions and deliveries), Noor Haddad (workroom and conditioning), Felix Brandt (market buyer and driver), Ada Okafor (front of shop). (I2 = Mara, H10 = Tomás, I5 = Felix — use different-looking people per ID; captions must match.)
- Stories (4): "A table for eight" (anniversary dinner), "Fridays for Mrs. Duval" (subscription), "A garden wedding for thirty", "Goodbye with sweet peas" (memorial).
- Ordering process (4): tell us the day and the room → we choose with Monday's market → stems conditioned 24 hours → delivery or collection.
- No guarantees, awards, media or invented statistics.

## 10. Scroll motion (sp-scroll; source good2garden `[T:g]`)
| Effect | sp class | Where | Reference trigger / timing / easing | Our values |
|---|---|---|---|---|
| Fade, no movement | `sp-reveal` (fade-only; if the base class requires a modifier, `sp-reveal sp-reveal--up` with `--sp-dist:0px`) | home 2 text block, 5 rows, 6, 8 text; inner page intros | IO rootMargin 0 0 -20% 0, opacity 0→1, **1.8s**, cubic-bezier(.25,.46,.45,.94) | `--sp-dur:1.8s` (and `--sp-ease` if the CSS exposes it) on these blocks |
| Mask reveal of grid photos | `sp-reveal sp-reveal--mask` on each figure, parent row `sp-stagger` | home 3 (3 cells), People/Stories/Shop grids (not on horizontally scrolling rows) | GSAP mask on card figures, ~0.6–1s, expo-like | default 1.2s ease-out, stagger 0.12s |
| Parallax | `sp-parallax` | home 1 hero Cover (`--sp-par:8%`, mobile 5%), home 4 band (`--sp-par:10%`, mobile 6%), inner T1 heroes (`8%`) | reference hero is a slow looping film; our photo drift stands in for it | built-in CSS scroll-driven + IO fallback |
Rules: hero has no sp-reveal; price list, forms, legal text none; `.sp-reveal` only in home blocks 2, 3, 5, 6, 8 (5 of 10, ≤60%). Mobile keeps parallax at the smaller value. Foreground text never inside a moving layer. Reduced-motion / `?sp-static` / editor: final state.

### Parallax (required)
- Block: **home 1 hero** (Cover `sp-parallax`), background **H1**, foreground = headline (bottom-left) + transparent header; `--sp-par:8%` desktop, `5%` at <782px. Reference counterpart: the muted looping hand-on-trunk film (slow continuous movement behind a static headline).
- Second: **home 4 band** Group `sp-parallax` with `figure>img` **H7**, no foreground text (caption sits outside the group), `--sp-par:10%` / mobile 6%.
- check-parallax.mjs must show ≥6px layer offset on desktop and mobile, 0 under reduced-motion.

## 11. Responsive musts
- 390px first screen: no vertical text, no absolutely positioned labels overlapping text; intro layer hidden under sp-static so no overlap is detected.
- No horizontal overflow at 390 and 1280 (hairline grid uses `box-sizing:border-box`, full-bleed via alignfull, not 100vw).
- Price list ≥782px full width, price column nowrap right; all tables stack on mobile.
- T3 floating photo uses normal flow on mobile (no negative overlaps).

## 12. Similarity table (target ≈80%)
| Dimension | Reference | Tsubaki Flowers |
|---|---|---|
| Base / ink / accent | #F7F6F0 / #141811 / #314032 | #F4F6F3 / #1B221E / #3F4D44 (+ celadon grey (seiji-nezumi) #6E7F74 small) |
| Area split | base 85%, photo 12%, ink 3% | base ≈80%, photo ≈16%, ink ≈3%, sage ≤1% |
| First-screen saturation | ≈7% | ≤10% |
| Latin family | neue-haas-grotesk-display | Hanken Grotesk / Onest |
| Hero type | .en 4rem w400 lh1.4 ls.02em; .ja 1.25rem ls.05em | 4.25rem w400 lh1.25 ls.02em; small line 1.25rem ls.05em |
| Section title | 26px w500 lh1.6 + 12px grey label | 1.75rem w500 lh1.6 + 0.75rem grey label |
| Paragraph | 15px / lh 2.3 / ls 1.5px | 15px / lh 2.3 / ls .04em (CJK 1.5px) |
| Section padding | 130–200px top, 160px bottom; side 75px; hero text 97px | 130 / 160 / 200px top by block, 160px bottom; side 75px; hero text 97px (mobile 24px, sections 80px) |
| Works grid | 3×480px, 1px ink rules, cell pad 70px, photo 330px | 3 equal, 1px ink rules, pad 70px, photo 69% (≈330px) |
| Photo ratios | works 3:4 / 3:2; about 2:3 + 260×184; hero 100vw×100vh | same: 3:4 / 3:2; 2:3 + 3:2 at ≤19%; 100vw×100svh |
| Radius / shadow | 0 / none; pill 24px | 0 / none; header pill 24px |
| Decoration | hairlines, underlined View more →, grey tag line | same |
| Motion | fade 1.8s (.25,.46,.45,.94); rise 1s; mask on figures; header .3s | sp-reveal 1.8s same curve; mask on grid figures; parallax hero + band; header .3s |
| Imagery | natural-light, shallow DOF, muted greens, film softness | same + film grain, high-key |

## 13. Home acceptance checklist
1. White intro shows ≤1.6s then disappears (CSS only); hidden under `?sp-static` and reduced-motion.
2. Hero H1 full-bleed 100svh, hand right-centre, green window bokeh left third, dark leaves right; headline bottom-left at 97px/42px, Latin ≥4.25rem at 1440; transparent header with white nav and outlined pill.
3. Hero and home 4 band move with sp-parallax (check-parallax ≥6px desktop and mobile).
4. T3 about: portrait left, small photo ≤20% floating top-right, text clearly lower right, underlined "Our story →".
5. T2 grid full-bleed with **1px ink** vertical rules and top rule; portrait/landscape/landscape photos with visible air; captions + grey tags; mask reveal.
6. Week rows with 1px rules, three days, two photos; not a timeline/card grid.
7. People block shows all 7 names; price list shows the 6 prices, full width, price right and unclipped at 800/1280; stacks on mobile.
8. 12 distinct photos on home; no text/logo in any photo; no repeats.
9. Section titles: Latin 1.75rem + grey sub-label inline on every section.
10. Colours only from section 3; first-screen saturated share ≤10% (≤15% hard).
11. Fonts Hanken Grotesk / Onest (Noto Sans TC/JP for CJK) identical in editor and front end.
12. ≥450 English words on home; numbers equal to section 9.
13. auto-gates pass (390/1280 overflow, 800/1280 tables, mobile first-screen overlap, ≥8 images); sp-static shows all content; sp-motion leaves nothing hidden.
