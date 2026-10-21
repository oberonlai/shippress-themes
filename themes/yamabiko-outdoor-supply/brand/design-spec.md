# Yamabiko Outdoor Supply: design spec (stage 1, binding for implementation)

Slug `yamabiko-outdoor-supply`, row b7-4. Independent outdoor & camping gear store with a real shop, rental shelf and repair bench; online it is a **spec catalogue** (field-tested tents, packs, layers, sleep) with comparable spec sheets and WooCommerce checkout. Type **store**: WooCommerce required for shop/product/cart/checkout/my-account/order-received, every page also renders without WooCommerce (static pattern fallback). Archetype asymmetric-masonry, first screen full-bleed-photo-info-bar, top-bar nav, documentary high-key photography. Fonts Bitter + Karla (both OFL, verify on build).

Reference (one, S5-Style, unused by any earlier theme): **BOTANIST** https://botanistofficial.com/ — screens in `ref/`. Borrow structure, gesture, colour *relationship* (deep photo field + near-black veil + white UI hairlines) only. No copy, photos, logo, green field, bubbles or product-on-log composition.

Lessons applied: do not "soften" the inset/veil (Tsumugi); no repeated photo on one page (Sukoyaka); one number table for the whole site (Hatsumei); signatures on ≥4 inner pages (Hatsumei); price column never clipped at ≥782 and no stacked/absolute labels on the 390 first screen (Taiyo).

---

## 1. Signature techniques (three, all obvious at a glance)

### T1. Inset veil band — BOTANIST pinned hero that insets under a dark veil
- Reference: BOTANIST's first-screen forest photo stays put while scrolling, shrinks until it sits **38 px from the left and right edges** with square corners, and turns dark under a teal-black veil (`#103030` ~60%); three menu entries ("ABOUT / DEVELOPMENT / SUSTAINABILITY") sit in a row in the upper third, each a small caps label over a larger white title with a **1 px white underline the width of the title**. See `ref/scroll-botanist-pin-inset-after.png`.
- Ours (home block 3 "Three shelves"): a static band that *is* the after-state. `alignfull` section, inner photo box with **margin 0 38px** (desktop ≥1024; 20px at 782–1023; 12px mobile), square corners, no shadow, height `min(82vh, 760px)` (min 520px). Photo P09 `object-fit:cover`. Veil = `::after` `rgba(22,28,30,.62)` (ink-teal `#161C1E`), solid, not a gradient. Content: row of **three** entries placed at **top 24%**, centred group, gap 64px: each = label (Karla 0.75rem, 0.18em, uppercase, white 72%: "01 SHELTER" / "02 CARRY" / "03 LAYERS & SLEEP") then title (Bitter 300, 1.75rem, white: "Tents & tarps" / "Packs" / "Layers & sleep") with a 1 px white underline exactly title width, 10px under it. Each entry links to its filtered shop category. Bottom-left of the box at 40px/40px: one Karla 1rem sentence, white 80%, max 30rem: "Three shelves, nothing in between. Every item on them has spent at least ten nights outside with one of us." Mobile: entries stack vertically, left-aligned at 24px, top 18%.
- Must not be diluted: photo must be inset with visible ground on **both** sides (38px at 1440), corners square, veil dark enough that the photo reads as night (≥ .55 opacity), white hairline underlines visible. Never full-bleed, never a light veil, never rounded.

### T2. Fixed bottom-left dash index — BOTANIST "— TOP / — MISSION / — SPECIAL"
- Reference: fixed at bottom-left (≈32px from left, ≈36px from bottom), vertical list of uppercase 0.75rem labels each preceded by a short dash (12px); the active item's dash is **twice as long (24px)** and the label is darker. See same screenshot.
- Ours: a `<nav class="yb-index" aria-label="On this page">` fixed `left:28px; bottom:32px`, shown **only at ≥1360px** (content container max 1160px, so the 100px gutter is free); hidden below. Labels Karla 0.6875rem, 0.16em, uppercase, colour `#5B6266`; dash 12px × 1px `#5B6266`, gap 10px, rows 26px. Small backing so it stays legible over photos: `background: rgba(238,239,236,.9); padding:10px 14px 10px 12px;` no radius, no shadow. Items are anchor links to section ids. **Static active state** (no scroll listener is allowed): the item that represents the current page is active — dash 24px, colour accent `#8F5E3F`, label ink `#1E2022`. Home items: TOP · CATALOGUE · SHELVES · COMPARE · FIELD TESTS · WORKSHOP · STORIES · VISIT, active = CATALOGUE (the store's core).
- Must not be diluted: vertical, bottom-left, dashes visible, one long accent dash. Do not convert into a sidebar or a horizontal TOC.

### T3. Dark capsule "field pick" chip — BOTANIST "PRODUCT" link with arrow
- Reference: fixed bottom-right white capsule with a tiny product thumbnail, two-line label and arrow, always on top.
- Ours, inverted to dark: fixed `right:28px; bottom:28px`, height 64px, radius 999px, ground ink `#1E2022`, padding 8px 20px 8px 8px; left a **48px circle** thumbnail (P02 crop), then two lines (Karla 0.6875rem 0.16em uppercase white 64% "FIELD PICK · OCTOBER"; Karla 0.9375rem white "Ridgeline 2 Tent — €389"), then a 28px circle outline 1px white 40% with an accent-coloured → (`#C9A184` on dark for contrast). Links to the Ridgeline 2 product. Shown **≥782px only** (never on the 390 first screen). On cart/checkout it is hidden.
- Must not be diluted: dark capsule, round thumb, arrow, bottom-right, visible on every page from first load.

### First-screen mood (supporting, not counted): BOTANIST low-left light headline
Headline low-left over the photo, light weight, slightly tracked. See §3.

### Continuation to inner pages (required)
| Page | T1 inset veil band | T2 dash index | T3 chip |
|---|---|---|---|
| Shop (Woo archive) | page header band 46vh, three shelf links as in home | SHELTER / CARRY / LAYERS / SLEEP, active = current filter (All → SHELTER) | yes |
| Single product | — (product gallery instead) | GALLERY · SPECS · FIELD NOTES · COMPARE, active SPECS | chip switches to "Compare tents →" (/compare) |
| Compare | header band 46vh (P06) | TENTS · PACKS · LAYERS, active TENTS | yes |
| Rental | header band (P18), underlines = Reserve / Collect / Return | PRICES · HOW IT WORKS · KITS · FAQ, active PRICES | yes |
| Workshop (repair) | header band (P17) | PRICES · DROP-IN · TURNAROUND, active PRICES | yes |
| Field notes | header band (P13) | each story title, active first | yes |
| About | header band (P10) | STORY · PEOPLE · HOW WE TEST, active STORY | yes |
| Visit | header band (P16) | HOURS · MAP · EVENTS, active HOURS | yes |
| Returns & shipping, FAQ, Contact | header band compact 34vh (P09 different crop allowed on different page) | sections, first active | yes |
Inner header band = T1 at smaller height: `min(46vh, 440px)`, same 38px inset, same veil, label + H1 (Bitter 300, clamp(2.5rem,4.5vw,3.75rem), white) bottom-left 40px/40px, the 1px white underline row of up to 3 in-page links at top 24% right-aligned group (desktop) / below the title (mobile).

---

## 2. Colour

Source: BOTANIST first screen 1440×900 (measured in reference.md). We keep the relationship **dark field under veil / near-black / white hairline UI**, but the saturated green is *not* adopted: our field is a muted documentary photo, our ground is cool stone.

| Token | Hex | Role | Share (page) | Source |
|---|---|---|---|---|
| `ground` | `#EEEFEC` | page ground, cool stone (not beige) | ~55% | BOTANIST white ground, cooled to stone |
| `surface` | `#FFFFFF` | cards, tables, info bar | ~15% | BOTANIST white UI |
| `ink` | `#1E2022` | text, chip, buttons, footer | ~12% | BOTANIST `#101010`, softened |
| `veil` | `#161C1E` | photo veils (62%) | ~8% via photos | BOTANIST veil `#103030`, desaturated |
| `slate` | `#5B6266` | secondary text, dashes, labels | ~5% | derived |
| `line` | `#D3D6D2` | 1px rules, table lines | thin | derived |
| `accent` persimmon-tannin (kakishibu) | `#8F5E3F` | active dash, price figures, filter chip active border, link underline hover, info-bar dot | ≤3% | row hex |
| `accent-on-dark` | `#C9A184` | arrows/labels on ink/veil | tiny | accent lightened |

- Accent is never a section background, never a full button fill larger than 48px tall × 220px (primary button = ink fill, white text; accent appears as its 2px underline on hover only).
- First screen saturated pixels (S>0.5) ≤ **15%**, target ≤8%: hero photo P01 is graded low-chroma (STYLE enforces muted), the hero veil is neutral ink. Run `scripts/check-first-screen.py`.
- Avoided recent accents: Kazu `#6E5A7E`, Taiyo `#B9822E` (amber — ours is a brown persimmon-tannin, darker and duller, and never used for buttons), Michi `#C42B3A`.

## 3. Type

- Display/headings: **Bitter** 300 / 400. Body/UI: **Karla** 400 / 500. Numbers in tables: Karla with `font-variant-numeric: tabular-nums`.
- theme.json presets: `small` 0.8125rem, `base` 1.0625rem (line-height 1.7), `medium` 1.25rem, `large` 1.75rem, `x-large` clamp(2rem,3.6vw,3rem), `xx-large` clamp(2.5rem,4.5vw,3.75rem), `display` **clamp(3rem,6.4vw,5.5rem)** (max 5.5rem ≥ 4.25rem).
- H1 hero: Bitter 300, `display`, line-height 1.02, letter-spacing 0.01em, white. H2: Bitter 400 `x-large`, line-height 1.15, ink. Section label: Karla 500 0.75rem, 0.18em, uppercase, slate, preceded by a 12px dash (echo of T2).
- zh-TW/ja: Noto Serif TC/JP for headings at ~0.75× size, body line-height 1.85; fr/de `hyphens:auto`.

---

## 4. Home page

### First screen (1440×900) — full-bleed photo + info bar
- Header (top-bar, single nav): transparent over the photo, 76px tall, logo wordmark "Yamabiko" Bitter 400 1.375rem white + small "OUTDOOR SUPPLY" Karla 0.625rem 0.24em; nav right: Shop · Compare · Rental · Workshop · Field notes · Visit · cart icon with count. Becomes `ground` with ink text on inner pages (header band starts under it).
- Photo P01 full-bleed, height `calc(100svh - 112px)` (min 560px), `object-position: 50% 60%`. Veil: linear-gradient(to top right, rgba(22,28,30,.55) 0%, rgba(22,28,30,.18) 45%, rgba(22,28,30,0) 70%) — only to make the low-left type readable.
- Headline block **low-left**: left 7vw, bottom 72px above the info bar. Label "Est. 2011 · 14 Quarry Lane, Harrow Gap" (Karla 0.75rem 0.18em uppercase white 78%), H1 two lines: **"Slept in / before it's sold."** Under it one Karla 1.125rem white 86% line, max 34rem: "Tents, packs and layers we have carried ourselves, with honest spec sheets and a repair bench behind the counter." Then two links: ink-on-white solid button "Browse the catalogue" (surface fill, ink text, 48px) and white text link with 1px underline "Compare tents →".
- **Info bar** (in flow, not overlaid): 112px tall, `surface` background, full width, 4 equal cells divided by 1px `line` verticals, content container 1160px: each cell = label (Karla 0.6875rem 0.16em uppercase slate) + value (Karla 500 1rem ink). Cells: "OPEN TODAY · Tue–Fri 10:00–19:00" / "SHOP · 14 Quarry Lane, Harrow Gap" / "DELIVERY · Free over €120" / "RETURNS · 30-day trail returns" with an 8px accent dot before "OPEN TODAY". Not a table element (use a group/columns).
- Product chip T3 bottom-right; dash index T2 bottom-left (≥1360).
- 390px: photo 68svh, headline in normal flow at the photo bottom inside a padded box (position relative wrapper, text block uses `position:absolute; inset:auto 20px 24px 20px` **is not allowed** — use a flex column with `justify-content:flex-end` on the cover block instead). H1 clamp min 3rem, label one line. Info bar becomes a 2×2 grid **under** the photo. No chip, no index, no rotated/vertical text.

### Block order
| # | id / block | Purpose | Layout | Photos | Copy |
|---|---|---|---|---|---|
| 1 | `top` Hero | identity + promise | full-bleed photo, low-left headline, info bar | P01 | label + H1 + 1 line + 2 links |
| 2 | `catalogue` Field catalogue (product-grid) | the store's core: browse | **asymmetric masonry**: left column 4/12 sticky-free text (label "— FIELD CATALOGUE", H2 "Weighed, pitched, then shelved.", 2 paragraphs ~70 words, filter chips row: All · Under 1 kg · 3-season · 4-season · Rental too, linking to shop query args), right 8/12 two masonry columns: col A tiles tall(4:5)/short(4:3)/tall; col B offset down 96px: short/tall. 5 product tiles = photo, name (Bitter 400 1.25rem), meta line "1.38 kg · 3-season · 2 berths" (slate), price right-aligned nowrap in accent. Below grid: link "All 8 items in the catalogue →". Woo off → static pattern with same 5 items. | P02 Ridgeline 2, P03 Tarn 48, P04 Drift jacket, P07 Mistline shell, P05 Lowtide bag | ~90 words + tile meta |
| 3 | `shelves` Three shelves (T1) | category entry | inset veil band, 3 underlined links | P09 | 3 labels + 1 sentence |
| 4 | `compare` Spec sheet | comparable specs (row signature) | full container width (1160). Above: sp-count row of 3 numerals left-aligned in 3 columns, Bitter 300 3.5rem + Karla caption ("15 years on Quarry Lane", "1,140 nights logged in our gear since 2011", "30-day trail returns"). Then H2 "Compare before you carry." + one line, then **table** Ridgeline 2 / Saddleback 1 / Cairn 3 × rows Weight · Packed size · Berths · Season · Peak height · Price. Header row ink text, 1px line rules, first column Karla 500; price row accent, nowrap, right-aligned. Link "Full spec sheets for packs and layers →". | none (numbers) | ~40 words |
| 5 | `tests` How we test | documentary trust story | **offset two-photo spread**: big photo P10 left 7/12 at 4:5, right 5/12 text top (label, H2 "Ten nights, then a verdict.", 3 paragraphs ~140 words naming Tomas Rehn and Amara Okafor), small photo P11 under the text, 3:2, pushed 80px past the big photo's bottom edge (asymmetric). | P10, P11 | ~140 words |
| 6 | `workshop` Rental & repair price list | services, real prices | ground→surface panel full container width; left 4/12 heading "Rent it, mend it." + 1 paragraph + link to Workshop/Rental; right 8/12 **price list** of 6 rows (name + one-line note left, price right nowrap, 1px line rules). Small photo P17 above heading 3:2 at 4/12 width. | P17 | ~60 words + 6 rows |
| 7 | `stories` Field stories | proof from customers | 3 cards, masonry stagger: card 2 offset down 72px, card 3 down 24px; each photo 4:5, place/route label, title Bitter 1.25rem, 2-line excerpt, "Read →". | P12, P13, P14 | 3 × 30 words |
| 8 | `visit` Visit the shop | close + location | split: photo P15 (counter, fitting a pack) 6/12 left at 3:2; right: H2 "Come and lift them.", paragraph ~50 words, hours list (4 lines), address, ink button "Plan a visit" + text link "Book a pack fitting". Footer below (ink). | P15 | ~60 words |

Home photo positions: P01, P02, P03, P04, P07, P05, P09, P10, P11, P17, P12, P13, P14, P15 = **14** (≥8), no repeats. Home copy ≥ 450 English words, ≥3 narrative paragraphs (blocks 2, 5, 8).

### Comparison with recent homes (must not resemble)
| Theme | First screen | Order (short) | Why ours differs |
|---|---|---|---|
| Kazu Data Course | framed-window photo + statement | statement → alternating chapters → stat cards → price → student work | ours: full-bleed + info bar, product masonry 2nd, no alternating chapters, no stat cards (numbers sit inline above a table) |
| Taiyo Solar | split photo/panel, news line | featured install → 4 numeral cards → dark gable band → journal | no split hero, no news line, our dark band is an *inset* veiled photo with links, not a gable band |
| Hada Dermatology | L-band inset photo | doctor intro → rows → arch close | no band/L shape, no person-led rows, no arch |
| Michi Motors | dark full-bleed band, staggered headline | light/dark alternation (1,5,9), ring arrows | only one dark band (block 3), headline is two light lines low-left, no ring arrows; our arrows sit in the capsule chip |

---

## 5. Inner pages (≥8 + WooCommerce templates)
1. **Shop** (`archive-product`): T1 header band (P09 crop not used here — use P08) with shelf links; filter chips (All / Under 1 kg / 3-season / 4-season / Rentable) as tag links; product grid in **2-column masonry at ≥1024** (alternate tall/short like home), 1 column mobile; each card shows weight + season + price nowrap. 8 products.
2. **Single product** (`single-product`): gallery left 7/12 (product photo + 1 detail), right: name, price accent, weight/season chips, short description, add to cart (ink button), then **spec table** (full width, stacked mobile), "Field notes" paragraph naming the tester, "Compare with" 2 siblings. Index T2, chip "Compare tents →".
3. **Cart / Checkout / My account / Order received**: header plain (no band), ground page, surface panels, ink buttons, 1px rules, accent only on totals; chip hidden on cart/checkout.
4. **Compare**: header band (P05 not on this page if home uses it? — home ≠ compare, allowed; use P06 to avoid confusion), three full-width spec tables (Tents 3 / Packs 2 / Layers & sleep 3) each with price row right nowrap; short "how we measure" notes (scale, packed size).
5. **Rental**: band (P18); price list (rentals 3 rows) full width; 4-step how-it-works as a horizontal numbered row (not grid of 6, not vertical timeline); what's in each kit; FAQ 4 Q&As.
6. **Workshop**: band (P17 on this page is header; do not repeat P17 in body); repair price list (3 rows) + drop-in hours + turnaround; photo P15 not here; body photo P11.
7. **Field notes**: band (P13); 3 full stories as long entries (photo + 250 words each, names, route, gear used); masonry 2-up list at ≥1024.
8. **About**: band (P10); founding story 2011 Ines Calder (3 paragraphs); **people as list rows** (name, role, one sentence, what they test) — 7 people, no 4-portrait grid; photo P15 + P17 in body; "How we test" 3 short principles.
9. **Visit**: band (P16); hours table (stacked mobile), address, how to get there (bus line, parking), events (Thursday pack-fitting evenings 18:00–19:00, first Saturday repair clinic 10:00–13:00).
10. **Returns & shipping**, **FAQ**, **Contact** (form allowed here): compact band, text columns.

## 6. Photos (18, Grok, one at a time; Read each; regenerate any with text, logo, broken face/hands)

STYLE (identical for every photo, appended after the subject):
`high-key documentary outdoor photograph, soft overcast daylight, muted low-saturation colours (stone grey, slate, sand, faded olive, dark ink), gentle film grain, natural unposed moment, contemporary international setting, diverse people, plain unbranded gear with no logos no text no labels no signage, 35mm lens, realistic, no Japanese elements`

| # | Subject / composition | Used (page → block) | Home |
|---|---|---|---|
| P01 | wide dawn plateau of pale granite, small grey two-person tent pitched lower-right, two hikers (one Black woman, one older white man) packing, large calm sky upper-left for headline, landscape 16:9 | Home → hero | ★ |
| P02 | two-person tent on a pale meadow, a person unzipping the door from inside, 4:5 | Home → catalogue; product Ridgeline 2; chip thumb | ★ |
| P03 | hiker (South Asian man) tightening the hip belt of a 48 L pack on gravel trail, waist-up, 4:5 | Home → catalogue; product Tarn 48 | ★ |
| P04 | woman in a slate synthetic insulated jacket pouring coffee at camp, 4:3 | Home → catalogue; product Drift jacket | ★ |
| P05 | inside a tent at morning, sleeping bag and pad, soft light through fabric, 4:3 | Home → catalogue; product Lowtide bag | ★ |
| P06 | compact stove boiling water on a flat rock, hands only, 3:2 | Compare → header band; product Saddleback 1 (detail) | |
| P07 | hiker from behind in a light rain shell on a misty ridge, 4:5 | Home → catalogue; product Mistline shell | ★ |
| P08 | legs and trekking poles crossing scree, low angle, 16:9 | Shop → header band; product Scree 30 | |
| P09 | misty forest valley, wide, no people, dark mid-tones (will be veiled), 16:9 | Home → shelves band; FAQ/Returns header | ★ |
| P10 | staff member weighing a tent bag on a hanging scale in a workshop, 4:5 | Home → tests big; About header | ★ |
| P11 | tent flies drying on a line behind a small shop building, 3:2 | Home → tests small; Workshop body | ★ |
| P12 | family of three (Ghanaian-European) at a lakeside campsite in the evening, 4:5 | Home → stories 1; Field notes story 1 | ★ |
| P13 | solo hiker woman in her sixties on an alpine path, 4:5 | Home → stories 2; Field notes header | ★ |
| P14 | two friends outside a snowy mountain hut with a four-season tent, 4:5 | Home → stories 3; product Cairn 3 | ★ |
| P15 | shop interior, staff fitting a backpack on a customer, light timber shelves of unbranded gear, 3:2 | Home → visit; About body | ★ |
| P16 | shop exterior: glazed storefront on a quiet stone street, bicycles, no signage, 16:9 | Visit → header band | |
| P17 | hands patching tent fabric at a sewing machine, 3:2 | Home → workshop; Workshop header | ★ |
| P18 | rental shelf: rows of packed tents in plain grey bags, 16:9 | Rental → header band | |
Images ≤300 KB, ≤2000 px, webp/jpg. No cut-outs. Same photo never twice on one page (Compare and Shop deliberately avoid home-only photos where noted).

## 7. Fixed numbers (single source; identical in all 5 languages, prices in €)

- Founded **2011** by **Ines Calder**; shop **14 Quarry Lane, Harrow Gap** (fictional). Phone +00 0000 0000 style placeholder per brand.md.
- Hours: Tue–Fri 10:00–19:00 · Sat 09:00–18:00 · Sun 10:00–16:00 · Mon closed.
- Delivery free over **€120** (otherwise €6.90); **30-day trail returns**; numerals row: 15 years · 1,140 nights · 30-day.
- Products (8): Ridgeline 2 Tent 1.38 kg, 3-season, 2 berths, packed 42×14 cm, peak 104 cm, **€389** · Saddleback 1 Tent 0.98 kg, 3-season, 1 berth, 36×12 cm, peak 96 cm, **€329** · Cairn 3 Tent 2.64 kg, 4-season, 3 berths, 50×18 cm, peak 118 cm, **€549** · Tarn 48 Pack 1.12 kg **€229** · Scree 30 Daypack 0.68 kg **€139** · Drift Insulated Jacket 0.41 kg **€189** · Mistline Rain Shell 0.29 kg **€169** · Lowtide Sleeping Bag (comfort −5 °C) 0.94 kg **€279**.
- Service price list (6, home block 6; Rental and Workshop pages show their halves with the same figures): Tent rental, weekend Fri–Mon **€38** · Tent rental, 7 days **€72** · Pack & sleep kit, weekend **€29** · Tent door zip replacement **€45** · Fabric patch up to 10 cm **€18** · Wash & reproof, jacket or bag **€35**.
- People (7): Ines Calder (founder, buying), Tomas Rehn (workshop lead), Amara Okafor (tents & shelter), Lukas Brandt (pack fitting), Mei Lin Ho (layers & sleep), Rafael Duarte (rentals), Sofie Lund (online orders & returns).
- Stories (3): "The Mensah family — three nights at Lake Orrin" (Ridgeline 2); "Hanne Vos — nine days on the Grey Saddle route" (Saddleback 1, Mistline); "Jonas & Priya — Cairn 3 in February" (Cairn 3).
- Rental flow (4): Reserve online → Collect Friday from 15:00 → Return Monday by 12:00 → We check, dry and log it. Repair flow: Drop in → Quote within 2 working days → Fix in 5–10 working days → Collect.
- Events: Thursday pack-fitting evenings 18:00–19:00; first-Saturday repair clinic 10:00–13:00.

## 8. Scroll effects (sp-scroll, copy pipeline/assets/sp-scroll as is; set `--sp-dur:1s`, `--sp-ease:cubic-bezier(.25,1,.5,1)` if the variable exists, else default)
| Effect | Class | Where | Source on botanistofficial.com | Trigger / time / easing |
|---|---|---|---|---|
| Inset photo drift (stand-in for pin→inset scrub) | `sp-parallax` on the photo wrapper of home block 3 and every inner T1 header band | home `shelves`; inner header bands | hero photo pinned & inset under veil, GSAP ScrollTrigger scrub (+Lenis) | ours: CSS scroll-driven `view()`, ±7%, linear; wrapper `overflow:clip`; veil stays static |
| Title / tile rise in sequence | `sp-stagger` parent + `sp-reveal sp-reveal--up` children | home catalogue tiles (on each masonry column container), stories 3 cards, block-5 text column; Shop grid; Field notes list | section titles fade/rise, IO/ScrollTrigger at ~80% viewport, 0.8–1.2s, cubic-bezier(.25,1,.5,1) | IO, 1s, step 0.12s, 24px |
| Spec numerals | `sp-reveal sp-count` | home block 4 numerals row (15 · 1,140 · 30) only | (none on BOTANIST; our addition for the spec catalogue) | 1.2s easeOutCubic |
- Hero (block 1), info bar, tables, price list, forms, legal text: **no** sp-* classes. T2 index and T3 chip: no animation. `.sp-reveal` count ≤60% of home blocks' elements rule; none in the first section.

## 9. Responsive (hard)
- 390px first screen: no vertical/rotated text, no absolutely positioned labels over text; headline in flow; info bar 2×2 under photo; chip and index hidden.
- Every table (compare, product specs, hours) and the price list: at ≥782px full container width (`width:100%`, never `max-width` < container), price column `white-space:nowrap; text-align:right; font-variant-numeric:tabular-nums`, `table-layout:auto`, no `overflow:hidden` on wrappers; verified at 800 and 1280. Below 782px tables **stack**: each row becomes a block, `td::before{content:attr(data-label)}` labels, price on its own line right-aligned.
- T1 inset: 38px (≥1024) / 20px (782–1023) / 12px (<782); entries stack on mobile.
- Masonry → single column below 782 (offsets removed); stories cards lose their stagger offsets below 782.
- No horizontal overflow at 390/1280 (check offset tiles and chip).

## 10. Home acceptance checklist
- [ ] First screen: full-bleed P01, low-left two-line light Bitter headline "Slept in / before it's sold.", in-flow white info bar with 4 cells and accent dot; saturated pixels ≤15%.
- [ ] T1 visible: inset photo with ≥38px stone ground both sides at 1440, square corners, dark veil ≥.55, three labelled titles with white hairline underlines.
- [ ] T2 visible at 1440: bottom-left vertical dash list, CATALOGUE active with 24px accent dash; hidden <1360.
- [ ] T3 visible at 1440: dark capsule bottom-right with round thumb, two lines, arrow; hidden at 390.
- [ ] Block order exactly 1–8 as §4; masonry offsets present (col B down 96px; story card 2 down 72px).
- [ ] ≥8 (target 14) distinct photos, none repeated, no text/logos in photos.
- [ ] Spec table full width at 800 and 1280, price row/column nowrap and not clipped; stacked at 390. Price list prices right, nowrap.
- [ ] All numbers match §7 (prices, hours, address, 30-day, €120).
- [ ] ≥450 English words, ≥3 narrative paragraphs; Bitter + Karla only; max font size preset ≥4.25rem (5.5rem).
- [ ] sp-scroll: parallax on block 3, stagger+up on catalogue/stories, count on numerals; none in hero; `?sp-static` all visible; `auto-gates.mjs … en … 1 1` pass=true.
- [ ] Accent `#8F5E3F` only on small areas; no beige ground; no sidebar, no centred giant text, no cut-outs.
