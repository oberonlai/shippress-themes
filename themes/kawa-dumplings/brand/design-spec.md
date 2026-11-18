# Kawa Dumpling House — design spec (stage 1, design director)

Type: **food-drink** (WooCommerce compatible, not required; ordering ahead is a request by form/email, not a shop). Industry: a **soup dumpling house with three branches** — dine-in, takeaway and frozen packs; every dumpling is folded behind a glass kitchen wall in front of the queue. Buyers: dumpling houses and small multi-branch restaurants with takeaway and frozen sales.
Primary reference: **https://tsuzuku-ni-tsuzuke.jp/** (S5-Style, food and drink: a returnable-bottle drink campaign with a short-story booklet). No secondary.
Tokens: `brand/reference-tokens.md`, cited **T(a)…T(g)**. Screens: `ref/tsuzuku-first.png` (first screen), `ref/scroll-tz-about-before.png` / `-after.png` (sentence rows, faint wordmark, pill-label box), `ref/scroll-tz-shops-before.png` / `-after.png` (ruled shop rows, tab label on a 2px rule, ▾ marker).
**Imagery: photo** (stage-a IMAGERY = photo): real documentary photography, high-key soft daylight (row `photo_direction: documentary`), one STYLE string (§10). The reference's single hand-drawn line illustration is **not** reproduced and not replaced by a drawing; its slot in the paper column becomes a round documentary photo (P02). 0 cut-outs.
Font direction: **sans** (row). Latin display **Outfit**, Latin body/UI **Rubik**; zh-TW / ja display **Noto Sans TC / Noto Sans JP** (gothic / sans), body system sans (§6). No serif anywhere.
Similarity target ≈ **80%** to tsuzuku-ni-tsuzuke.jp (cream + one brown, three-panel cover, sentence rows, dotted-leader index, scalloped badge, ticker, motion values). Photos, copy, names, logo are ours; no reference asset, text, illustration or logo reused.
Row constraints: archetype **card-mosaic**, hero **text-left-photo-right**, first_screen **three-equal-columns**, nav **centered**, page_structure **locations-network**, header required, exactly one top menu, five languages, first-screen saturated share **≤12% target** (common.md cap 15%; row cap 30%).
Class prefix `kd-`. Patterns `kawa-dumplings/<name>`. Every pattern = PHP docblock + `?>` + literal block markup (`pattern_source.py` must pass).

---

## 1. Signature techniques (3, obvious at a glance; none may be softened)

### S1 (stage-a T1): The three-panel cover — paper column with a framed rim | flat index column | full-height documentary photo, edge to edge, no gutters
- **Source**: tsuzuku-ni-tsuzuke.jp first screen (`tsuzuku-first.png`, T(c)): the whole 1440×900 viewport is three flat panels **411 | 619 | 411 px (28.5 / 43 / 28.5%)**, no gaps, no radius, no shadow: a full-height documentary photo (0.46:1) with a cream title at its foot; a cream paper column `#F6F1E7` with an ornamental scroll border inset ≈20px, wordmark, title, subtitle, a drawing and a contents list; a flat brown column `#8E6D2E` with logo, rule, vertical contents index and a news bar. Inner pages keep the frame and swap the photo.
- **Ours (home §1 `kawa-dumplings/stage`)**: same three flat panels, same proportions, reordered to the row's text-left-photo-right: **paper 43% (x0–619) | index 28.5% (x619–1030) | photo 28.5% (x1030–1440)** at 1440. Height `calc(100svh - 72px)`, min 640, max 828 (header 72 above; header + stage = 900). No gutter, no radius, no shadow between panels; the seams are hard edges.
  - Paper panel `#F6F1E7`: **pleat-rim frame** (`kd-rim`, inline SVG + two borders, `aria-hidden`): outer 1px solid `#82642A` inset 20px from the panel edges, inner 1px dashed `#82642A` 6px inside it; a 28px "pleat fan" ornament (half circle with 5 radiating strokes = a soup dumpling's top seen from above, stroke 1.25px `#82642A`, no fill) at the 4 corners and the 4 edge midpoints, sitting on the line on a `#F6F1E7` knock-out so the line breaks around it (ref: ornaments interrupt the scroll border). Inside, centred, top to bottom (ref order wordmark → title → subtitle → picture → contents): wordmark line → H1 → lede → P02 circle → buttons. Content max 450px (ref measure T(c)).
  - Index panel `#D4BF96` (see §5 why not the reference brown): see S3.
  - Photo panel: **P01** full height, `object-fit: cover; object-position: 45% 40%`, no radius; foot scrim `linear-gradient(0deg, rgba(60,44,16,.42) 0%, rgba(60,44,16,0) 38%)`; cream caption at the foot (ref: cream title at the photo foot): "Eighteen folds, then the steamer." Outfit 500 1.5rem/1.25 `#F6F1E8`, left 32 bottom 40, max 320.
- **Never soften**: three flat panels edge to edge filling the whole first screen; the wide one is the paper; the photo runs full height (not a card, not rounded, not inset); the frame is a visible double line with ornaments (not a hairline box); the index panel is a clearly darker flat colour than the paper (≥1.6:1 against it). Not a split hero, not two columns plus a sidebar card.
- **Repeats**: inner page heads `kawa-dumplings/page-head` = a slim version, 420px tall: paper (H1 + lede inside the rim, corner ornaments only) | index (that page's own index rows, S3) | photo (a different photo per page — ref swaps the photo per page). Home §2 re-uses the thirds as a spread (sticky photo | sentence rows | index facts).

### S2 (stage-a T2): One sentence per row between dashed rules
- **Source**: /about (`scroll-tz-about-after.png`, T(c), T(f)): centred sentences, one per row, each row between **1px dashed brown rules**, measure ≈450px, row pitch ≈42px, stanzas of 3–4 rows separated by ≈40px of empty paper; a **giant faint wordmark** (≈90px serif, colour a shade darker than the paper) sits behind/below the stanza; below it a **white box with 1px brown border** whose label sits in a **pill straddling the top edge**, a dashed divider inside.
- **Ours**: `kd-rows` = Group, max-width 450px, centred; each sentence is its own paragraph `kd-row`: Rubik 500 1rem/1.5, `#82642A`, centred, `padding: 9px 0`, `border-bottom: 1px dashed #82642A`; the first row of a stanza also has `border-top`. Stanzas: 3 rows each, 40px gap. Faint wordmark `kd-ghost`: a paragraph "KAWA" (in markup, not CSS) Outfit 800 9rem/1, ls .02em, colour `#ECE3D2`, `aria-hidden`, placed after the last stanza, overlapping it by −2.5rem (z-index below), clipped by the section (`overflow: clip`). Pill-label box `kd-ticket`: `#FFFDF8`, 1px solid `#82642A`, radius 0, padding 40px 32px 28px; label pill straddling the top edge (`translateY(-50%)`): `#F6F1E7` fill, 1px `#82642A`, radius 999px, Outfit 600 1.125rem ls .14em, padding 6px 24px; inner dashed divider 1px `#82642A`.
- **Used on home**: §2 The fold (3 stanzas, 9 rows), §4 reheating (3 rows), §5 order ahead (3 numbered rows). The `kd-ticket` box: §3 branch cards, §5 cut-off times.
- **Never soften**: each sentence alone on its own dashed-ruled row, centred, narrow measure; rows are never merged into a paragraph, never solid rules, never left-aligned bullet lists.

### S3 (stage-a T3): Dotted-leader index with a ▾ marker + scalloped rattling badge + boxed-label ticker
- **Source**: the brown column (`tsuzuku-first.png`, `scroll-tz-shops-after.png`, T(f), T(g)): logo, a full-width 1px rule, a contents index — each entry a label, a **dotted leader** and a **number** at the end — a **▾** over the current entry; a **scalloped round badge 97px** (cream, brown text) rotated **−12°** at the column's top-left that **rattles every 5s**; at the column foot a news bar: **boxed small label** + a ticker sliding **translateX 0 → −50%, 18s linear infinite**. Hover inverts colours (cream on brown).
- **Ours** (`kd-index`, index panel of §1): padding 64px 40px 0. Top: label "Today at the counters" Outfit 600 .8125rem ls .14em uppercase `#5C4518`; 1px solid `#5C4518` rule 16px under. Then **6 entries**, each a link row 56px high: number (Outfit 600 .875rem, `01`…`06`) — label (Rubik 500 1rem) — dotted leader (`flex:1; border-bottom: 2px dotted #5C4518; margin: 0 8px 6px`) — right value (Rubik 400 .875rem, nowrap). Entries:
  | # | Label | Value | Link |
  |---|---|---|---|
  | 01 | Harbour Street | 11:00–21:00 | /branches/harbour-street/ |
  | 02 | Linden Market | 10:00–17:00 | /branches/linden-market/ |
  | 03 | Station Arcade | 07:30–20:00 | /branches/station-arcade/ |
  | 04 | Frozen packs | 4 boxes | /frozen-packs/ |
  | 05 | Order ahead | by 11:00 | /order-ahead/ |
  | 06 | The menu | 6 baskets | /menu/ |
  **▾** (inline SVG 10×8, `#5C4518`, in markup) above entry 01 (the flagship glass kitchen; static, no clock JS). Hover/focus: row background `#82642A`, text and leader `#F6F1E8`, .3s ease (ref inversion).
  **Badge** `kd-badge`: 104px scalloped circle (inline SVG, 16 scallops), fill `#82642A`, text `#F6F1E8` Outfit 600: "Frozen packs" .75rem / "Fridays" 1.25rem / "restocked" .75rem, centred; rotated −12°; **straddles the index/photo seam** at top 40px (centre on the seam). Animation `kd-rattle` 5s linear infinite: rotate −12° held to 84%, −4° at 86%, −14° at 88%, −12° at 90%→100% (T(g)). Off under `prefers-reduced-motion`, `html.sp-no-motion`, editor.
  **Ticker** `kd-ticker` at the index panel foot (absolute bottom 0 within the panel, full panel width, 44px, top 1px `#5C4518` rule): boxed label "Today" (`#82642A` fill, `#F6F1E8` Outfit 600 .75rem ls .14em, padding 3px 8px, radius 0) fixed at left 16px; to its right the `sp-marquee` track (aria-hidden duplicate) "Frozen packs restocked every Friday · Order ahead by 11:00 for lunch, by 16:00 for dinner · Station Arcade opens 07:30 on weekdays · Eighteen folds on every dumpling ·" Rubik 400 .875rem `#5C4518`; theme CSS sets the marquee child `animation-duration: 18s` (T(g); class and JS unchanged).
- **Repeats**: every inner page-head index panel uses the same index (page-specific rows), ▾ on the current page's entry; branch pages list that branch's day hours with leaders; the menu and frozen price lists use the dotted leader; tab labels (below) everywhere.
- **Tab label on a 2px rule** (ref /shops group tab, T(d)): section openers on home §3 §4 §5 §7 and inner lists: a tab `kd-tab` (`#82642A` fill, `#F6F1E8` Outfit 600 1.125rem ls .14em, padding 6px 40px, radius 3px 3px 0 0) sitting on a full container-width **2px solid `#82642A`** rule.
- **Never soften**: leaders stay dotted and run to a right-aligned value; the ▾ stays; the badge is scalloped (not a plain circle), tilted, brown with cream text, and rattles; the ticker has the boxed label and moves.

### Continuation on inner pages (≥4 required; here 10)
| Page | S1 three-panel head | S2 sentence rows / ticket box | S3 index / leaders / tab / badge |
|---|---|---|---|
| Menu | head P11 | dish notes as rows (2 per dish) | price list with leaders, tab "Baskets", badge |
| Branches (hub) | head P04 | — | 3 branch `kd-ticket` boxes + ruled rows like ref /shops, tabs "Dine in" / "Takeaway only" |
| Harbour Street | head P10 | "Through the glass" 6 rows | hours by day with leaders, ▾ on today-label "Kitchen glass" |
| Linden Market | head P05 | market-day rows | hours with leaders |
| Station Arcade | head P06 | commuter rows | hours with leaders |
| Frozen packs | head P07 | reheating 6 rows | pack list with leaders, tab "Take home", badge |
| Order ahead | head P09 | 3 numbered rows | cut-off `kd-ticket`; form slot (§11) |
| About (The fold) | head P12 | the fold 12 rows + ghost "KAWA" | people as index rows with leaders (name … role) |
| Contact | head P16 | — | 3 branch address rows with leaders; form slot |
| Steam letter | head P08 | 3 rows "what you get" | form slot in `kd-ticket` |
| Journal / posts | head P02 / post image | posts end with 3-row summary | tab "Notes" |

---

## Key visual concept

### (1) Reference first screen: concept, story, signature motion
- **Draws**: a book-cover of three panels. Left: a documentary daylight photo of a young woman drinking from a glass bottle while reading a booklet, the campaign title in cream at the photo foot. Middle: a cream page inside an ornamental scroll border (bottle and pen glyphs), wordmark, title, a one-line subtitle, a brown line drawing of two people reading under a tree, and a vertical contents list. Right: a flat brown panel with the wordmark, a rule, a vertical contents index with dotted leaders and numbers, a tilted scalloped "vol. 6" badge, and a news bar with a boxed label and a ticker.
- **Story**: "Drink, then read" — the bottle comes back and returns as a new story; a ritual that repeats.
- **Signature motion**: logo blur-in, text fade-up 20px, the frame border drawing itself on load, the badge rattling every 5s, the news ticker sliding (18s linear), smooth scroll with the photo column holding still while the paper scrolls.

### (2) Our scene (same composition, same motion idea, same image type: documentary photo + paper + index)
A soup dumpling house's cover: **"Folded in front of you, then handed over."** Left paper panel inside the pleat-rim frame: wordmark, H1 **"Folded in front of you."**, a two-line lede ("Every soup dumpling at Kawa gets eighteen folds behind the glass, a few steps from the queue. Eat in at three branches, take it home frozen, or order ahead."), a round photo of an opened steamer (P02, the slot where the reference had its drawing) and the single way in: pill **"Order ahead"** + text link "See the three branches". Middle flat index panel: today's three counters and their hours with dotted leaders, ▾ on the glass-kitchen flagship, the rattling scalloped "Frozen packs · Fridays · restocked" badge on the seam, and the "Today" ticker. Right: the full-height documentary photo **P01** — a cook pleating the eighteenth fold at a steel bench while, behind her, a colleague lifts a stack of bamboo steamers in a cloud of steam; caption at its foot. The ritual that repeats = fold, steam, queue, take home — told by the index (where/when), the photo (the fold) and the ticker (what is fresh today). Motion: the photo moves slower than the page (sp-parallax = the reference's photo holding still while the paper scrolls), the frame draws in, the badge rattles, the ticker slides.

### (3) KV checklist (all in the home first screen, visible at 1440×900)
| # | Reference element | Our counterpart | Position (1440×900) | Motion | Image |
|---|---|---|---|---|---|
| 1 | Full-height documentary photo panel, cream title at its foot | **P01** cook pleating the 18th fold, steamers lifted in steam behind; cream caption "Eighteen folds, then the steamer." | photo panel x1030–1440, y72–900, full height, no radius | `sp-parallax` `--sp-par: 8%` (mobile 5%) | **P01** |
| 2 | Cream paper column with ornamental scroll border, wordmark, title, subtitle | Paper `#F6F1E7` with the pleat-rim double frame + 8 pleat-fan ornaments; wordmark line, H1 4.5rem, 2-line lede, pill "Order ahead" + link | paper panel x0–619, content centred max 450 | frame lines draw in on load (`kd-draw` 1s ease, scaleX/scaleY 0→1 on the rule spans; text itself static, no reveal) | — |
| 3 | Line drawing inside the paper column | Round documentary photo of an opened steamer basket, 200px circle, 1px dashed `#82642A` ring 8px outside it | paper panel, between lede and buttons | none | **P02** |
| 4 | Vertical contents index, dotted leaders, numbers, ▾ on current | 6 index rows (3 branches + hours, frozen, order ahead, menu), dotted leaders, numbers 01–06, ▾ on Harbour Street | index panel x619–1030, from y≈136 | hover inversion .3s | — |
| 5 | Scalloped round badge, −12°, rattles every 5s | Scalloped 104px brown badge "Frozen packs · Fridays · restocked" | straddling index/photo seam, top 40px (x≈978–1082) | `kd-rattle` 5s linear infinite (CSS keyframe; off for reduced motion / sp-static) | — |
| 6 | News bar: boxed label + ticker | Boxed "Today" + ticker of today's facts | index panel foot, 44px, x619–1030 | `sp-marquee`, 18s linear | — |

---

## 2. Home copy target
≥250 English words (target ≈650), ≥3 narrative paragraphs ≥20 words (§2 intro ¶, §3 intro ¶, §4 ¶, §7 ¶), plus the sentence rows. Tone: plain, warm, exact (numbers, times), no superlatives, no claims of awards or guarantees. Numbers only from §9.

## 3. Home page: block order
Container 1200 (`kd-wide`), text measure 450 (rows) / 640 (paragraphs). Section padding 112 / 72 (desktop / mobile; ref row pitch 112, T(c)). Background paper `#F6F1E7` unless noted.

| § | Block (pattern) | Purpose | Layout and images | Copy |
|---|---|---|---|---|
| 0 | Header `parts/header` | one top menu | 72px, paper, bottom 1px dashed `#82642A`; wordmark left (Outfit 700 1.125rem ls .14em "KAWA DUMPLING HOUSE"), **links centred** (Menu · Branches · Frozen packs · Order ahead · About · Journal — Rubik 500 .9375rem `#82642A`, gap 32), right: text link "Steam letter" underlined | — |
| 1 | **Stage** `kawa-dumplings/stage` | KV, S1 + S3 | three panels (§1); P01 photo, P02 circle | H1 + 2-line lede + caption + index + ticker |
| 2 | **The fold** `kawa-dumplings/fold-spread` | story of the fold (S2 + S1 spread) | thirds again: left 28.5% **P03** (hands pleating, 2:3) `position: sticky; top: 96px`, height 640, no radius · middle 43%: tab-less kicker "The fold" (Outfit 600 .8125rem ls .14em), H2 "Eighteen folds, one at a time", intro ¶ (≈60 words), **3 stanzas × 3 sentence rows** (S2), ghost "KAWA" · right 28.5% `#D4BF96` panel, sticky, 3 index-style fact rows with leaders: "Folds … 18", "Weight … 21 g", "Steam … 7 min" (Outfit 600 2.25rem values) | ≈60 + 9 rows (≈110) |
| 3 | **Three branches** `kawa-dumplings/branches` | locations network (card mosaic) | tab "Dine in · three counters" on 2px rule; intro ¶ (≈45 words) left 43% of the container; **mosaic**: Harbour Street large (grid col 1, rows 1–2): **P04** 4:5 + `kd-ticket` below; Linden Market (col 2 row 1): **P05** 3:2 + ticket; Station Arcade (col 2 row 2): **P06** 3:2 + ticket. Grid `1.15fr 1fr`, gap 32. Ticket: pill label "01 · Harbour Street", hours line Outfit 600 1.5rem, dashed divider, address Rubik .9375rem, days line, underlined "Map" + "Branch page" links | ≈45 + 3 tickets |
| 4 | **Take home** `kawa-dumplings/frozen-shelf` | frozen packs + reheating | tab "Take home"; 2 cols 5/7: left **P07** (frozen trays, 4:5) with **P08** (home steamer, 3:2, 60% width) overlapping its lower-right corner by 48px (both no radius, P08 with 8px `#F6F1E7` border) · right: ¶ (≈55 words), **4 pack rows** with dotted leaders and price right (`nowrap`, Outfit 600), then sub-head "From frozen" + **3 sentence rows** (S2); badge repeated small (80px, static on mobile) | ≈55 + rows |
| 5 | **Order ahead** `kawa-dumplings/order-ahead` | the single way to order ahead | full-bleed `#D4BF96` panel; tab "Order ahead"; thirds: left 43% **3 numbered sentence rows** (01 Choose from the menu or the frozen list. / 02 Send it on the Order ahead page by 11:00 for lunch or 16:00 for dinner. / 03 Collect it at the window of the branch you picked.) + pill "Order ahead" (→ /order-ahead/) · middle 28.5% `kd-ticket` "Cut-off times" (Lunch pickup 12:00–14:00 … order by 11:00 / Dinner pickup 17:30–20:00 … order by 16:00 / 100+ dumplings … 48 h notice) · right 28.5% **P09** (paper bag passed through a pickup window, 2:3) full panel height. **No form here** | ≈70 |
| 6 | **Kitchen glass band** `kawa-dumplings/glass-band` | atmosphere + parallax | full-bleed Cover 560px (mobile 420), **P10** (queue watching cooks through the glass, 21:9) `sp-parallax` `--sp-par: 10%`; foreground a paper card `#F6F1E7` 1px `#82642A` border, 420 wide, bottom-left (left 64, bottom 64; mobile in flow below band top 24): one sentence Outfit 600 1.75rem/1.25 "The queue is part of the kitchen." + one line Rubik | ≈25 |
| 7 | **The menu** `kawa-dumplings/menu-ledger` | price list (6 baskets) | tab "Baskets · eat in"; top row 2 cols: ¶ (≈50 words) left, **P11** (dumpling on a spoon with broth, 3:2) right at 43% width; then **table full container width** (§8 rules): Dish · Pieces · Note · Price (right, nowrap); rows 64px, 1px dashed `#82642A` between, dotted leader cell between note and price on ≥782; link "Full menu" | ≈50 + 6 rows |
| 8 | **Journal** `kawa-dumplings/journal` | 3 latest notes | tab "Notes"; 3 cards in a row: image 3:2 **P13 / P14 / P15** (no radius), date Rubik .8125rem, title Outfit 600 1.25rem, 1-line excerpt; 1px dashed rule above each card's text | 3 × 20 |
| 9 | **Steam letter** `kawa-dumplings/steam-letter` | newsletter | `kd-ticket` box centred 640 wide, pill label "Steam letter", 2 rows (S2): "One letter a month, on the first Friday." / "New baskets, frozen restocks and branch hours." + **newsletter form slot** (§11); no reveal | ≈30 |
| 10 | Footer `parts/footer` | facts | `#D4BF96`; 3 cols = 3 branches with address + hours (leaders), 4th col links (Contact, Steam letter, Journal, Privacy); bottom line © Kawa Dumpling House · 2014 | — |

Home images (14): P01 P02 P03 P04 P05 P06 P07 P08 P09 P10 P11 P13 P14 P15 — each once.

### First-screen composition (1440×900)
Header 72 (paper, dashed bottom). Stage y72–900: paper x0–619 (frame inset 20, content block centred: wordmark line y≈150 "KAWA DUMPLING HOUSE · SINCE 2014" Outfit 600 .875rem ls .14em; H1 two lines "Folded in / front of you." Outfit 700 **4.5rem/1.02** `#5C4518` y≈190–340; lede Rubik 400 1rem/1.5 `#82642A` max 400 y≈365–413; P02 circle 200px y≈445–645; buttons y≈690: pill "Order ahead" 52px `#82642A`/cream + text link "See the three branches" underlined) | index `#D4BF96` x619–1030 (label y≈136, 6 rows y≈180–520, ticker y≈856–900) | P01 x1030–1440 full height, caption at the foot. Badge on the index/photo seam at y≈112. Nothing else; no form, no table, no search.

### Comparison with recent themes' home orders (must not match)
| Theme | Home order | Why ours differs |
|---|---|---|
| Yukishiro Chalet | full-bleed film hero + arc + 3-cell desk → chapter head + 3 ¶ → tabs + 6 peeking cards → comparison table → sticky photo + 5 rows → parallax band → 1+2×2 mosaic → six time rows → grey panel + half-bleed photo → journal → newsletter | our hero is three flat panels (no full-bleed photo, no arc, no desk); no card strip, no comparison table; mosaic is 1+2 branch tickets; no time rows |
| Tabidachi Tours | top bar + framed photo with rail of 5 timed entries → 3 gateway cards → 3 ¶ → term line → 4 tall cards → inset gold quote band → figures → price table → black band + pill → 3 journal rows | no framed window, no rail, no quote band, no dark band; index is a flat panel, not a rail |
| Kodama Sound | framed window + trace line → 3 ¶ + flush photos → 4 credit sheets → parallax band → sliver + 3-zone row → 7 name rows → "Send a cut" sheet → journal → newsletter | no window frame on a photo; our frame surrounds text on paper; no credit sheets / name rows |
| Ugoki Animation | dark window + cyan strip + HUD → studio note → 4 credit-ledger rows → contact sheet → 5 process rows → full-bleed band → credit stack → rates table → journal → quote window → newsletter | light paper, no HUD, no ledger of numerals, no process rows |
| **Kawa (ours)** | three-panel cover → fold spread (sticky photo │ sentence rows │ fact panel) → branch ticket mosaic → frozen shelf (overlapped photos + leaders + rows) → clay order-ahead thirds → glass parallax band → menu table → journal → steam letter | — |

## 4. Inner pages (11 pages + Journal + 3 posts)
All start with `kawa-dumplings/page-head` (S1 slim three panels, 420px; paper H1 3.5rem Outfit 700 + lede inside rim; index panel with page rows + ▾; photo panel with the page photo, `sp-parallax` 6% / mobile 4%). Every page ends with the footer; pages with a list use the tab-on-rule opener.
| Page (slug) | Head photo | Content |
|---|---|---|
| **Menu** (`menu`) | P11 | tab "Baskets · eat in": 6-dish price table (§9) + 2 sentence rows per dish (filling, how to eat); tab "On the side": 3 extras with leaders (chilli oil €1.50, black vinegar & ginger free, jasmine tea pot €3.50); allergen note row; badge |
| **Branches** (`branches`, hub) | P04 | intro ¶; tab "Dine in": Harbour Street, Linden Market as ruled rows like ref /shops (name Outfit 600 1.25rem, address, hours, "Map" underlined right, 112px rows, dashed rules); tab "Takeaway counter": Station Arcade; 3 `kd-ticket` cards; transit line per branch |
| **Harbour Street** (`branches/harbour-street`) | P10 | the glass kitchen flagship: 6 rows "Through the glass"; hours by day with leaders; seats 38; P12 in body; map link |
| **Linden Market** (`branches/linden-market`) | P05 | market counter: rows; hours Tue–Sat; 14 counter seats; P14 in body |
| **Station Arcade** (`branches/station-arcade`) | P06 | takeaway window + 6 stools; breakfast basket from 07:30; hours; P09 in body |
| **Frozen packs** (`frozen-packs`) | P07 | 4 packs with leaders and prices; tab "From frozen": 6 sentence rows (steam 12 min, don't thaw, 3 months at −18 °C…); P08 in body; where to buy (all 3 branches, restocked Fridays) |
| **Order ahead** (`order-ahead`, booking) | P09 | 3 numbered rows; cut-off `kd-ticket`; **form slot (§11)**; large orders note (100+ = 48 h); P16 in body |
| **About — The fold** (`about`) | P12 | story ¶×3 (2014 founding, glass wall, three branches); 12 sentence rows + ghost "KAWA"; **people** as index rows: name … role (7, §9), no photo grid; milestones as leader rows; a day (daily routine) as leader rows; P03 in body |
| **Contact** (`contact`) | P16 | 3 branch addresses with leaders, phone, email; **form slot (§11)**; P04 not repeated (head only) |
| **Steam letter** (`newsletter`) | P08 | 3 rows what you get; newsletter slot in `kd-ticket`; past issues link to Journal |
| **Journal** (`journal`, posts page, empty content) | P02 (template head) | 3 posts as cards (tab "Notes") |
| Posts ×3 | P13 / P14 / P15 | category "Kitchen notes" / "Branch notes"; tags; ends with 3-row summary (S2) |
| Privacy (`privacy`) | none (paper head without photo) | legal text, no motion |

## 5. Colour (reference relationship: one cream paper + one brown for text, lines and a flat panel; the photo carries the rest)
| Role | Hex | Share (first screen) | Source |
|---|---|---|---|
| Paper (base) | **#F6F1E7** | ~43% | T(a) paper `#F6F1E7`, exact |
| Ink / lines / pill / tab / badge | **#82642A** | text + lines ≈3% | T(a) brown `#8E6D2E`, −3% HSL lightness (4.90:1 on paper; the exact brown is 4.26:1, under AA for 16px body) |
| Index panel (flat) | **#D4BF96** | ~28.5% | T(a) brown block `#8E6D2E` → same hue tint (S 0.29). **Reason for the swap**: the reference brown panel alone is 28.5% of the screen at HSV S 0.68; `check-first-screen.py` counts S>35% → the panel alone would exceed the 15% common.md cap (reference measures 34.9%). The tint keeps the panel clearly darker than the paper (1.60:1) so the three-panel contrast stays — not a pale stone (Tsumugi lesson) |
| Deep ink (H1, text on the index panel) | **#5C4518** | text only | same hue, darker for 5.04:1 on `#D4BF96` |
| Cream on brown (inverted labels) | **#F6F1E8** | <1% | T(a) cream on brown |
| Cinnamon (row hex) | **#BE8F68** | <1% | row `hex`; P02 dashed ring hover, focus ring, ▾ hover — small accents only |
| Ghost wordmark | **#ECE3D2** | below fold | paper −5% L (T(f) faint wordmark) |
| Ticket surface | **#FFFDF8** | below fold | T(f) white box |
Saturated first-screen share target **≤12%** (counted: H1/lede/index text ≈4%, badge 0.7%, pill 0.4%, P01 warm areas ≈4–6%); cap 15%. No large saturated fill ever; cinnamon never fills an area. theme.json palette slugs: `paper`, `ink`, `deep`, `clay` (#D4BF96), `cream`, `cinnamon`, `ghost`, `ticket`.

## 6. Typography (sans direction)
theme.json `fontFamilies` + `fontFace` (woff2 in `assets/fonts`, all listed in theme-meta.json `fonts[].files` with license OFL; family names in readme.txt); the editor and the front end load the same faces. Because style.css uses `:lang(` rules, copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and require it.
- **Display (Latin)**: `"Outfit", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif` — weights 500, 600, 700, 800 (variable file ok).
- **Body (Latin)**: `"Rubik", system-ui, -apple-system, "Segoe UI", sans-serif` — 400, 500.
- **zh-TW** (`:root:lang(zh*)`): display `"Outfit", "Noto Sans TC", "PingFang TC", "Microsoft JhengHei", sans-serif` (bundled Noto Sans TC subset, 500/700); body `"Rubik", "PingFang TC", "Microsoft JhengHei", "Noto Sans CJK TC", sans-serif` (no bundled zh family, no Japanese family in body).
- **ja** (`:root:lang(ja)`): display `"Outfit", "Noto Sans JP", "Hiragino Sans", "Yu Gothic", sans-serif` (bundled Noto Sans JP subset, 500/700); body `"Rubik", "Hiragino Sans", "Yu Gothic", "Meiryo", sans-serif`.
- CJK: sizes ≈0.75× Latin headings, body line-height 1.85; subsets from the five-locale strings via the Hokuto/Hada workaround (the zh subset script is known broken). de/fr `hyphens: auto`.
| Token | Size / line / weight / tracking | Use | Source |
|---|---|---|---|
| `xx-large` | **4.5rem** / 1.02 / Outfit 700 / −0.01em | home H1 (largest, ≥4.25rem) | T(b) H1 900 tight leading, scaled up |
| `x-large` | 3.5rem / 1.05 / 700 / −0.01em | inner H1 | T(b) |
| `large` | 2.25rem / 1.15 / 600 | H2, fact values | — |
| `medium` | 1.5rem / 1.25 / 600 | ticket hours, caption, card titles 1.25rem | — |
| `label` | 1.125rem / 1.2 / Outfit 600 / **0.14em** | tab labels, ticket pills | T(b) group label 17.9px ls 2.5px |
| `kicker` | .8125–.875rem / 1.3 / Outfit 600 / 0.14em uppercase | kickers, index label, wordmark line | T(b) |
| body | **1rem / 1.5** / Rubik 400; rows Rubik 500 | text, sentence rows | T(b) 16/24 weight 500 |
| small | .875rem / 1.45 / 400 | index values, ticker, meta | T(b) 14–16 |
Colour: H1 `#5C4518`; H2 and body `#82642A`; on the index panel `#5C4518`.

## 7. Motion and scroll (sp-scroll)
Copy `pipeline/assets/sp-scroll/` unchanged to `assets/`; enqueue CSS + JS in head (JS not deferred); `add_editor_style('assets/sp-scroll.css')`. Overrides: `:root { --sp-dur: .8s; --sp-ease: cubic-bezier(.22,1,.36,1); --sp-dist: 20px; }` (T(g) text fade-up 20px, ≈.8s, ease-out). UI hover .3s ease (T(g) inversion).
### 7.1 Chosen effects (3 kinds per page max)
| Effect | sp-* | Where | Source trigger / time / easing |
|---|---|---|---|
| Rise in, staggered | `sp-reveal sp-reveal--up` + parent `sp-stagger` | home §2 stanzas (each stanza group), §3 tickets, §4 pack rows + reheating rows, §5 numbered rows, §7 intro ¶ + P11, §8 cards; inner: sentence rows, branch rows, people rows | ref GSAP ScrollTrigger text fade-in translateY 20px → 0, ≈.8s, ≈.1s stagger, ease-out → ours 20px, .8s, cubic-bezier(.22,1,.36,1), built-in .12s stagger |
| Ticker | `sp-marquee` | home §1 index foot; inner page heads' index foot (same ticker) | ref news ticker translateX 0 → −50%, 18s linear infinite → ours 18s linear (theme sets `animation-duration: 18s` on `.kd-ticker.sp-marquee > *`) |
| Parallax (required) | `sp-parallax` | §7.2 | ref: photo column holds still while the paper scrolls (Lenis + fixed column) |
Not used: wipe, zoom, count (stage-a listed count; dropped to keep 3 kinds per page). Non-scroll CSS (allowed, off under reduced motion / `html.sp-no-motion` / editor): `kd-rattle` badge 5s linear infinite (T(g)); `kd-draw` frame lines 1s ease on load (T(g) menu-border-draw) — lines only, all text static and visible at first paint.
**No reveal**: hero/stage, page heads, tables and price rows of §7, menu/frozen prices on inner pages, forms and their wrappers, footer, privacy. (Home §4 pack rows contain prices → they get **no** reveal; only the reheating rows do.)
### 7.2 Parallax (required)
| Where | Block | Moving layer | Foreground (static) | `--sp-par` desktop / mobile | Reference motion |
|---|---|---|---|---|---|
| **Home §1 photo panel** | Group `kd-stage__photo sp-parallax` (overflow clip) | P01 `figure>img` | caption is a sibling outside the figure; badge outside the panel | **8% / 5%** | photo column holding still while the paper scrolls |
| **Home §6 glass band** | Cover `kd-band sp-parallax` | P10 cover background | paper card (sibling, not inside the layer) | **10% / 6%** | same |
| Inner page heads | `kd-head__photo sp-parallax` | head photo | none in the layer | 6% / 4% | ref photo swap per page |
Reduced motion / `?sp-static` / no JS / editor: no movement. `check-parallax.mjs` desktop + mobile must pass (≥6px).

## 8. Responsive rules (hard)
- **390px first screen**: header 64px in flow: wordmark left, "Menu" button right (overlay menu, same single nav). Stage stacks **paper → photo → index**: paper panel with the rim inset 12px (corner ornaments only, midpoints hidden); wordmark line, H1 **2.75rem/1.05** in flow, lede, pill + link in flow; P02 circle 150px after the buttons. P01 in flow 4:5 full width, caption **in flow below the photo** (not overlaid). Badge **in flow** (static position, centred, 88px, under the photo, rotation kept, rattle kept) — never absolutely positioned over text. Index rows full width; ticker in flow under them. **No vertical text, no absolutely positioned labels over text, no overlap**; `scrollWidth == innerWidth`.
- 782–1179: stage keeps three panels at 43/28.5/28.5 but H1 3.25rem, P02 circle 160; index values may wrap under labels (leader hidden then). Header: if links overflow (de/fr), switch to the overlay menu below 1180px for `html:lang(de), html:lang(fr)`.
- §2 <1024: photo not sticky, in flow 3:2 above the rows; fact panel becomes a full-width row of 3 facts.
- §3 mosaic <782: single column, each photo 3:2. §4 overlap removed <782 (P08 in flow below P07). §5 thirds stack: rows → ticket → P09 3:2.
- **Price tables ≥782px** (home §7, Menu, Frozen packs): `width: 100%` of the container (1200), `table-layout: auto`; **price column `white-space: nowrap; text-align: right; width: 1%`**, Outfit 600; never clipped at 800 / 1280; no `overflow: hidden` wrapper, no fixed widths on other columns.
- **Every table <782px**: stacked — dish name + price on one flex line (price right, nowrap), pieces/note as a second line, dashed rule between items; no horizontal scroll. Leader rows keep the leader only ≥390 when the value fits; otherwise value wraps below, leader hidden.
- Touch targets ≥44px; focus visible (2px `#BE8F68` outline, offset 2).

## 9. Fixed facts (brand.md is the source; identical everywhere, 5 locales)
- **Kawa Dumpling House**, **Port Aldren** (fictional harbour city). **Founded 2014** by **Lena Kowal** and **Samuel Adeyemi** with one glass-walled kitchen on Harbour Street. Email `hello@kawa-dumplings.example`, phone +00 555 0140 (fictional).
- **The fold**: 18 folds per dumpling · 21 g each (6 g wrapper, 15 g filling with broth jelly) · steamed 7 minutes · folded behind the glass in front of the queue.
- **Branches (3)**:
  1. **Harbour Street** — 12 Harbour Street; the glass kitchen, flagship (2014); 38 seats; **Tue–Sun 11:00–21:00**, Mon closed.
  2. **Linden Market** — Stall 21, Linden Covered Market (2018); 14 counter seats; **Tue–Sat 10:00–17:00**.
  3. **Station Arcade** — Unit 4, Station Arcade (2022); takeaway window + 6 stools; **Mon–Fri 07:30–20:00, Sat–Sun 10:00–18:00**.
- **Menu (6 baskets, eat in / takeaway same price)**: Pork soup dumplings, 6 — **€9.50** · Crab & pork, 6 — **€12.50** · Mushroom & greens (vegan), 6 — **€9.00** · Chicken & ginger, 6 — **€9.50** · Spicy wontons in chilli oil, 8 — **€8.50** · Garlic greens — **€5.50**. Extras: chilli oil €1.50, jasmine tea pot €3.50, vinegar & ginger free.
- **Frozen packs (4)**: Pork, 24 — **€19** · Mushroom & greens, 24 — **€18** · Crab & pork, 18 — **€22** · Mixed box, 30 (10 pork, 10 mushroom, 10 chicken) — **€26**. Keep at −18 °C up to 3 months; steam from frozen 12 minutes; do not thaw. Restocked every **Friday** at all 3 branches.
- **Order ahead (single way)**: the Order ahead page (form or email) → order by **11:00** for lunch pickup **12:00–14:00**, by **16:00** for dinner pickup **17:30–20:00** → collect and pay at the chosen branch's window. 100+ dumplings: **48 h** notice.
- **People (7)**: Lena Kowal (co-founder, wrappers and the fold) · Samuel Adeyemi (co-founder, broth) · Priya Raman (kitchen lead, Harbour Street) · Jonas Lindqvist (counter lead, Linden Market) · Wen Li (lead, Station Arcade) · Carla Moretti (frozen packs and orders ahead) · Tomasz Nowak (front of house and the queue).
- **A day (daily routine, Harbour Street)**: 06:30 broth jelly set, doughs rested · 08:00 wrappers rolled · 10:30 first folds at the glass · 11:00 doors open · 15:00 frozen packing · 21:00 close and clean.
- **Milestones**: 2014 Harbour Street opens · 2016 glass wall widened to the whole kitchen · 2018 Linden Market stall · 2020 frozen packs · 2022 Station Arcade · 2024 order ahead page.
- **Stories / posts (3)**: "How the broth gets inside" (P13, Kitchen notes) · "A table for six at Harbour Street" (P14, Branch notes) · "Morning: the first two thousand wrappers" (P15, Kitchen notes).
- **Steam letter**: monthly, first Friday.

## 10. Images (16 photographs, one STYLE; 14 on home)
`IMAGE_STYLE="real documentary photograph, high-key soft daylight, muted warm tones of clay, steam white, pale bamboo and brushed steel, low contrast, gentle film grain, natural skin tones, 35mm lens, candid, modern international dumpling restaurant with an open glass kitchen, cooks and guests of diverse ages and ethnicities, real hands, no text, no letters, no numbers, no logos, no brand names, no signage, no Japanese elements"`
One at a time via `scripts/grok-image.sh`; Read each; regenerate any with text, logos, broken faces/hands, low-key or saturated look. webp ≤300 KB ≤2000px, no cut-outs.
| # | File | Subject / composition | Ratio | Used on | Home |
|---|---|---|---|---|---|
| P01 | `kv-eighteen-folds.webp` | **KV**: a cook (woman, 30s, grey apron, hair tied) at a brushed-steel bench pleating a soup dumpling, hands and dumpling sharp in the lower third; behind her, slightly soft, a colleague lifts a stack of bamboo steamers in a cloud of steam; daylight from the left; tall framing | 2:3, 1200×1800 (cropped to 0.46:1) | Home §1 | ✔ |
| P02 | `steamer-open.webp` | top-down: an opened bamboo steamer, 6 pleated soup dumplings on parchment, wisps of steam, centred (for a circle crop) | 1:1 | Home §1 circle · Journal head | ✔ |
| P03 | `hands-pleating.webp` | close: two hands making the pleats, flour on the bench, a row of finished dumplings | 2:3 | Home §2 · About body | ✔ |
| P04 | `harbour-glass-kitchen.webp` | street view: the glass kitchen window, cooks folding inside, a short queue outside on the pavement | 4:5 | Home §3 large · Branches head | ✔ |
| P05 | `linden-market-stall.webp` | market stall counter under a covered market roof, steamers stacked, customers on stools | 3:2 | Home §3 · Linden Market head | ✔ |
| P06 | `station-arcade-window.webp` | narrow takeaway window in a bright arcade, commuter receiving a paper box | 3:2 | Home §3 · Station Arcade head | ✔ |
| P07 | `frozen-trays.webp` | trays of frozen dumplings dusted with frost on parchment, plain kraft boxes (blank), freezer light | 4:5 | Home §4 · Frozen packs head | ✔ |
| P08 | `home-steamer.webp` | home kitchen: a person lifting a steamer lid on a stove, frozen dumplings cooked, family table soft behind | 3:2 | Home §4 overlap · Frozen packs body · Steam letter head | ✔ |
| P09 | `pickup-window.webp` | a plain paper bag passed through a pickup window between two hands | 2:3 | Home §5 · Order ahead head · Station Arcade body | ✔ |
| P10 | `queue-through-glass.webp` | wide: guests in a queue watching cooks behind the glass wall, steam on the inside | 21:9, 2000×857 | Home §6 band · Harbour Street head | ✔ |
| P11 | `dumpling-on-spoon.webp` | a soup dumpling on a ceramic spoon, bite opened, broth visible, ginger strips | 3:2 | Home §7 · Menu head | ✔ |
| P12 | `long-bench-team.webp` | four cooks at a long bench rolling wrappers, morning light, aprons | 3:2 | About head · Harbour Street body | — |
| P13 | `post-broth.webp` | pot of broth and a tray of set broth jelly being cut into cubes | 3:2 | Home §8 card 1 · post 1 | ✔ |
| P14 | `post-table-six.webp` | six friends sharing baskets at a wooden table, hands reaching | 3:2 | Home §8 card 2 · post 2 · Linden Market body | ✔ |
| P15 | `post-wrappers.webp` | dough being rolled into thin wrappers, a scale, stacks of rounds | 3:2 | Home §8 card 3 · post 3 | ✔ |
| P16 | `steamer-trolley.webp` | a steel trolley of stacked steamers ready for a large order, kitchen behind | 3:2 | Contact head · Order ahead body | — |
**Per page (no repeat on a page)**: Home P01–P11, P13–P15 · Menu P11 · Branches P04 · Harbour Street P10 + P12 · Linden Market P05 + P14 · Station Arcade P06 + P09 · Frozen packs P07 + P08 · Order ahead P09 + P16 · About P12 + P03 · Contact P16 · Steam letter P08 · Journal P02 + cards P13 P14 P15 · posts P13 / P14 / P15.

## 11. Forms (form contract v1: `steps/form-contract-v1` exists)
Copy `pipeline/assets/forms/shippress-forms.php` unchanged to `inc/`, its CSS + editor JS unchanged to `assets/`, require in functions.php. Literal markup + small PHP island (`ob_start()` fallback). **No form in the first screen (the stage has only links); no `sp-reveal` on any form or its wrapper.**
- **Order ahead** (`order-ahead`, booking): inside a `kd-ticket` box (pill label "Your order"), after the 3 numbered rows: `shippress_form_slot( kind: contact, fallback )`; fallback = buffered literal mailto button **"Email your order"** (`wp-element-button`, pill `#82642A`, cream, 52px) → `mailto:hello@kawa-dumplings.example?subject=<forms_order_subject>` + hint row "Opens your email app. Tell us the branch, the pickup time and what you would like." Recommended CF7 fields (documented in readme): name*, email*, phone*, branch* (select: Harbour Street / Linden Market / Station Arcade), pickup day* (date), pickup time* (select: lunch 12:00–14:00 / dinner 17:30–20:00), order* (textarea: baskets or frozen packs and quantities), large order 100+ (checkbox), note, consent*, submit "Send my order". Never links to /contact/.
- **Contact**: slot kind contact; fallback "Email the house" → same address (subject `forms_contact_subject`); fields name*, email*, branch (select 3 + "Any"), topic (select: A visit / Large order / Frozen packs / Other), message*, consent*.
- **Steam letter** (`newsletter`, standalone page): `kd-ticket` box: `shippress_form_slot( kind: newsletter, email: hello@kawa-dumplings.example, label: forms_email, submit: forms_subscribe, notice: forms_mail_notice, subject: forms_mail_subject )`.
- **Home §9** the same newsletter slot (light). Footer: link to Steam letter only (no form).
- Plugin order: newsletter MailPoet (explicit id) → MC4WP; CF7/WPForms only with a dedicated newsletter id. Contact/order: CF7 → WPForms. No plugin: required email + submit, native mailto POST, notice visible ("opens your email app; you are not subscribed yet").
- **Tokens, light** (paper / ticket): `--sp-form-accent: var(--wp--preset--color--ink)` #82642A; `--sp-form-on-accent: #F6F1E8`; `--sp-form-radius: 0` for fields (T(d) radius 0) and submit as pill (`999px`, T(d) pill); `--sp-form-focus: #BE8F68` (2px outline, offset 2px); `--sp-form-surface: #FFFDF8`; `--sp-form-text: #5C4518`. Fields 52px, 1px solid `#82642A` border, radius 0; labels Outfit 600 .8125rem ls .14em uppercase `#82642A`; placeholder `#A08A5E`; submit 52px Outfit 600 1rem, hover inversion (cream bg, brown text, 1px brown border) .3s ease; error text + border `#A3402A`; success: `#F6F1E7` panel, 1px dashed `#82642A` top and bottom rules (S2), text `#5C4518`; checkbox/radio `accent-color: #82642A`; disabled 50% opacity.
  **Dark** (`.kd-dark`, used if a form is placed on a brown `#82642A` ground, e.g. a future footer variant): surface `#6E5426`, text `#F6F1E8`, accent `#F6F1E8`, on-accent `#5C4518`, focus `#E4CDB6`, border `rgba(246,241,232,.5)`, labels `#EADFC8`, error `#F4B9A6`, success text `#F6F1E8` with dashed cream rules. Test both on the clay `#D4BF96` panel too (text `#5C4518`).
  Styled: input, textarea, select, checkbox/radio, label, submit, hover, focus-visible, disabled, error, success; scoped to CF7, WPForms, MailPoet, MC4WP (+ Jetpack, `.wp-block-form`), `.sp-newsletter-fallback`; no global selectors.
- **i18n keys** (en.php, `L10N_SEMANTIC=1`, local rewrites in en, zh-TW, ja, fr, de; dynamic block attributes translated in all five): `forms_email` "Email address", `forms_subscribe` "Send me the steam letter", `forms_mail_notice` "This opens your email app. Send the message to subscribe; you are not subscribed yet.", `forms_mail_subject` "Subscribe to the steam letter", `forms_contact_subject` "Hello from the website", `forms_order_subject` "Order ahead for Kawa Dumpling House", `contact_email` "Email the house", `forms_order_button` "Email your order", `forms_order_hint`, `forms_contact_hint`.
- Validation: `form-check.py`, five-locale `form-runtime-check.php`, `repo-gates.sh forms`; real CF7 check at 390px + desktop on paper (Contact, Order ahead) and clay; never submit.

## 12. Similarity table (target ≈ 80%; reference-tokens.md)
| Dimension | Reference (token) | Kawa Dumpling House |
|---|---|---|
| Paper | #F6F1E7 ~43% (T(a)) | #F6F1E7 ~43% |
| Brown (text, lines) | #8E6D2E (T(a)) | #82642A (−3% L for AA) |
| Flat third panel | #8E6D2E ~28.5% (T(a)) | #D4BF96 same hue ~28.5% (saturation cap, §5) |
| Inversion | cream #F6F1E8 on brown (T(a)) | #F6F1E8 on #82642A (badge, tab, "Today", hover) |
| First-screen saturation | 34.9% (T(a)) | ≤12% |
| Panel split | 411 / 619 / 411, edge to edge (T(c)) | 619 / 411 / 410 (reordered text-left-photo-right), edge to edge |
| Text measure | ≈450px (T(c)) | 450px |
| Row pitch | ≈42px sentence rows; 112px shop rows (T(c)) | 42px sentence rows; 112px branch rows |
| Rules | 1px dashed / dotted brown; 2px under tab (T(d)) | 1px dashed #82642A; 2px dotted leaders; 2px solid under tab |
| Radius / shadow | 0; pill tab and badge only; no shadow (T(d)) | 0; pill buttons/labels, badge; no shadow |
| Display type | Zen Old Mincho H1 30/30 900, ls −0.25px (T(b)) | Outfit 700 4.5rem/1.02, −0.01em (sans per row) |
| Body | 16/24 weight 500 (T(b)) | Rubik 16/24, 400 text / 500 rows |
| Labels | 17.9px ls .14em, cream on brown tab (T(b)) | Outfit 600 18px ls .14em, cream on brown tab |
| Frame | ornamental scroll border around the paper column (T(f)) | pleat-rim double line + 8 pleat-fan ornaments, inset 20 |
| Index | vertical contents, dotted leaders, numbers, ▾ (T(f)) | horizontal rows (no vertical text, 5 languages), dotted leaders, numbers 01–06, ▾ |
| Badge | scalloped 97px, −12°, rattle 5s at 84–90% (T(f),(g)) | scalloped 104px, −12°, rattle 5s at 84–90% |
| Ticker | boxed label + translateX 0→−50%, 18s linear (T(g)) | boxed "Today" + sp-marquee 18s linear |
| Photo | documentary daylight, full-height 0.46:1, no radius, cream title at foot (T(e)) | documentary high-key, full-height 0.46:1, no radius, cream caption at foot |
| Photo per page | swaps per page (T(e)) | different head photo per inner page |
| Faint wordmark | ≈90px serif behind text (T(f)) | "KAWA" Outfit 800 9rem #ECE3D2 |
| Pill-label box | white box, 1px brown, pill on top edge, dashed divider (T(f)) | `kd-ticket` identical |
| Motion | fade-up 20px ≈.8s ease-out, stagger ≈.1; border draw ≈1s; hover inversion (T(g)) | sp-reveal--up 20px .8s cubic-bezier(.22,1,.36,1), stagger .12; kd-draw 1s ease; inversion .3s |
| Scroll feel | photo column holds while paper scrolls (T(g)) | sp-parallax 8% hero photo, 10% band, 6% heads |

## 13. Home acceptance checklist (stage 1)
1. 1440×900: header 72 (wordmark left, centred links, dashed rule) + **three flat panels edge to edge**: paper 619 with the pleat-rim double frame + 8 ornaments, H1 "Folded in front of you." Outfit 700 4.5rem `#5C4518`, lede, P02 circle with dashed ring, pill "Order ahead" + link | clay `#D4BF96` index with 6 dotted-leader rows, numbers, ▾ on Harbour Street, "Today" ticker at the foot | **P01** full height with cream caption. Scalloped brown badge on the index/photo seam, tilted −12°. Nothing else; no form/table/search.
2. `?sp-motion`: badge rattles every 5s, ticker slides 18s, frame lines draw in once, P01 parallax ≥6px; `?sp-static`: all final, badge at −12° still.
3. 390×844: header 64; paper panel then P01 (caption below it) then badge in flow then index then ticker; H1 2.75rem; no vertical text, no absolute labels over text, no overlap, no horizontal overflow.
4. §2: sticky P03 | 3 stanzas × 3 dashed sentence rows centred at 450 + ghost "KAWA" | clay facts 18 / 21 g / 7 min.
5. §3 tab on 2px rule; 1 large + 2 branch mosaic with pill-label tickets; hours equal §9.
6. §4 P07 with P08 overlapping; 4 pack rows with leaders and nowrap prices; 3 reheating rows. §5 clay thirds: numbered rows, cut-off ticket, P09; no form.
7. §6 P10 band parallax with paper card; §7 menu table full width, price column nowrap right, not clipped at 800/1280, stacked at 390; §8 3 journal cards; §9 newsletter slot (email + submit + notice without plugins, no reveal); footer 3 branches.
8. 14 unique images on home (≥8), none repeated; 0 cut-outs; every image Read-checked high-key documentary, no text/logos.
9. ≥250 English words (target ≈650), ≥3 narrative ¶ ≥20 words; all numbers equal §9.
10. Effects only sp-reveal--up + sp-stagger, sp-marquee, sp-parallax (+ CSS rattle/draw); stage/table/prices/form no reveal; `check-parallax.mjs` passes desktop + mobile.
11. Saturated first screen ≤12% (`check-first-screen.py`); largest size 4.5rem; fonts via theme.json fontFace (Outfit, Rubik, Noto Sans TC/JP subsets), editor = front end; sans direction, no serif.
12. One top menu; no `content:` text in CSS (ornaments, ▾, badge, ghost word are markup/inline SVG); auto-gates `1 1` pass for en; `pattern_source.py` passes.
