# Hiroba Food Hall: design spec (stage 1, binding for implementation)

Slug `hiroba-food-hall`, a city food hall with eight kitchens under one roof, built around the weekday lunch. Type `hospitality` (declare WooCommerce compatibility only; the site works fully without it). Design row b26-3: archetype **card-mosaic**, hero **framed-window**, nav **split**, first screen **horizontal-scroll-strip**, page structure **day-schedule**, palette 黒茶 (row hex `#3F342C`, family ink), font direction **serif** (Fraunces / Literata, CJK Noto Serif TC / Noto Serif JP), imagery **photo** (film grain). Five languages: en, zh-TW, ja, fr, de.

References (see `reference.md`, `reference-tokens.md`, `ref/*.png`):
- Main: **Shiodome Yokocho** https://redine.jp/shiodome/ (shared food hall, many specialist kitchens on one floor). Source of the palette (ink, muted gold, white, warm paper band, stone band), the kitchen card (cover photo + round medallion straddling its edge + flanked-rule "recommended" label + three square thumbnails + dark hours chip + full-width gold button), the caps title lockup with a 40px gold rule, the gold-highlighted statement words, the hero ease (100svh → 97svh) and the SCROLL cue line.
- Secondary: **Food Stadium Tokyo** https://www.tokyo-dome.co.jp/foodstadium/ (food hall). Source of the first-screen composition only: an inset rounded photo window on a pale cool ground under a white header, the "today's hours" strip with a vertical hairline divider, and the convex arc edge cutting the pale band into a white block.

Borrow structure, technique, colour relationships and the key visual concept only. All photos, copy, names and marks are our own; nothing is copied, traced or re-used from either site.

Values marked `tok(x)` come from `reference-tokens.md` section (x).

---

## 0. Fixed brand facts (identical on every page and in all five languages)

| Item | Value |
|---|---|
| Name | Hiroba Food Hall ("hiroba" = open square; used as a name only, no Japanese decor) |
| Founded | **2019** (opened 4 March 2019) |
| Address | Hiroba Food Hall, Havenhof 12, 3011 AB Rotterdam, Netherlands (fictional address; ground floor of a former harbour warehouse) |
| Seats | **180** seats at long shared tables, plus a counter of 24 stools |
| Kitchens | **8** kitchens (list below) |
| Hall hours | Mon–Fri **11:00–21:30**; Sat **12:00–21:30**; Sun closed |
| Lunch service | Mon–Fri **11:00–15:00**, last lunch order **14:30**; lunch peak **12:10–13:00** |
| Held tables | a held table is kept **15 minutes** past the booked time; tables for **2–12**; groups of **6–12** book **24 hours** ahead |
| Contact | hello@hiroba-hall.example · +31 10 555 0190 (fictional) |
| Currency | **EUR** in every language (no conversion) |

### The eight kitchens and the people (8 named people)
| # | Kitchen | Cuisine | Lead | Lunch plates (3, used as the card thumbnails / captions) |
|---|---|---|---|---|
| 1 | Ladle Lane | noodle soups | **Tomás Ferreira** | Clear chicken noodle soup · Sesame broth with greens · Cold noodles with herbs |
| 2 | Ember Grill | charcoal flatbreads and skewers | **Amara Osei** | Flatbread with grilled squash · Chicken skewer plate · Yoghurt and herb dip |
| 3 | Green Counter | grain bowls and salads | **Lena Kowalski** | Barley bowl · Roast roots and lentils · Seasonal leaves |
| 4 | Wok Row | wok-fried rice and greens | **Daniel Cho** | Egg fried rice · Charred greens · Pepper tofu |
| 5 | Spice Shelf | curries | **Priya Nair** | Lentil dal · Chickpea and spinach curry · Rice with pickles |
| 6 | Fresca | fresh pasta | **Marco Bellini** | Tagliatelle with tomato · Ricotta ravioli · Bean and pasta soup |
| 7 | Bakehouse | breads and soups | **Ingrid Holm** | Soup and rye bread · Cheese toastie · Cardamom bun |
| 8 | Steep | coffee, tea and small sweets | run by the hall team, led by **Ruth Adeyemi** (hall manager since 2019) | Filter coffee · Black tea · Almond cake |

Ruth Adeyemi is the hall's voice (About, Tables, Contact). No other named people anywhere (no extra staff names in any language).

### Lunch prices (7 items, the only amounts on the site)
| Item | Price |
|---|---|
| Lunch plate (one main + one side, any kitchen) | €12.50 |
| Noodle or curry bowl | €11.00 |
| Grain bowl | €10.50 |
| Two-kitchen tray (half portions from two kitchens on one tray) | €14.00 |
| Soup and bread | €8.00 |
| Coffee or tea | €3.00 |
| Group lunch set (6–12 guests, held table, booked 24 h ahead), per person | €18.00 |
Holding a table costs nothing. No other amounts, discounts or loyalty numbers in any language.

### The lunch hour (day-schedule; the same stamps on Home, Lunch Hour and all languages)
| Stamp | Line (en, home version) |
|---|---|
| 11:00 | Doors open; trays, water and cutlery set on the rail. |
| 11:45 | Early tables fill; the kitchens fire their first bowls. |
| 12:10 | The peak begins: held tables are seated first, the queue moves by kitchen. |
| 13:00 | Second wave; tables turn, coffee starts at Steep. |
| 14:30 | Last lunch order; the hall quietens for slow eaters. |
The Lunch Hour page adds 15:00 (hall resets), 17:00 (evening kitchens open) and 21:30 (last tables).

### Guest stories (4 journal posts, fixed)
1. "A table for twelve on a Thursday" (group lunch, held table) – category Tables – featured P15
2. "Two kitchens on one tray" (the two-kitchen tray) – category Kitchens – featured P16
3. "What 12:10 looks like from the pass" (Tomás at the noodle counter) – category Lunch hour – featured P17
4. "Why the hall resets at three" (Ruth on the afternoon) – category The hall – featured P18
Tags: lunch, groups, noodles, bread, coffee, weekday.

---

## 1. Signature techniques (three; all obvious at a glance)

### T1. Kitchen card: cover photo, round medallion straddling its edge, flanked-rule "Today's plates" label, three square thumbnails, dark Hours chip, full-width gold button
- Source: redine.jp shop list (`ref/redine-shopcards.png`, `ref/redine-feature.png`, `ref/redine-lower.png`). Their cards: white, radius 14px, shadow-sm, 2-up 496px with 32px gap on a warm paper band; a wide cover photo across the top; an 80px round logo medallion with a 4px white ring centred on the photo's bottom edge; shop name 20px/28px 700; cuisine line small grey; a "recommended menu" label flanked by two 32px gold hairlines; three ~144px square thumbnails with 12px captions; a dark "hours" chip beside the hours lines; a full-width gold button (radius 10px).
- Ours (home block 4): band `#F6F1E7` full bleed; container 1024px; 2 cards side by side, each **496px** wide, gap **32px** `tok(c)`. Card: white, `border-radius: 14px`, `box-shadow: 0 1px 2px rgba(63,52,44,.08)` `tok(d)`, no border, padding 0 20px 24px.
  - Cover: full card width, **16:9** (496×279), image top corners follow the card radius, bottom corners 0.
  - Medallion: **80px** circle, `border: 4px solid #fff`, background ink `#3F342C`, centred horizontally, its centre exactly on the photo's bottom edge (`margin-top: -40px`, in flow, `position: relative; z-index: 1`, not absolute). Inside: the kitchen's two-letter monogram in Fraunces 600 1.25rem, `letter-spacing: .06em`, colour `#F6F1E7` (e.g. "LL", "EG"). Our own monogram, no logos.
  - Name: Fraunces 600 1.25rem / 1.75rem (20/28 `tok(b)`), centred, ink; cuisine line Literata 0.8125rem, `#3F342C` at 60%.
  - Label "Today's plates": Literata 700 0.875rem, `letter-spacing: .12em`, centred, flanked by two **32px × 1px** gold `#B8860A` hairlines, 14px gap each side `tok(f)`. Written in the block markup (editable), not CSS `content`.
  - Thumbnails: 3 across, each **144px**, aspect **1 : 1.1**? no — **1:1**, `border-radius: 8px`, gap 12px; captions Literata 0.75rem / 1.1rem, centred, under each (plate names from section 0).
  - Hours row: dark chip "Hours" (background ink, `#fff` Literata 700 0.6875rem, padding 3px 8px, `border-radius: 4px`) then the lines "Mon–Fri 11:00–15:00 · 17:00–21:30" / "Sat 12:00–21:30" in Literata 600 0.875rem; chip and text centred as a row.
  - Button: full card width, height 46px, background gold `#B8860A`, white Literata 700 0.875rem, `border-radius: 10px`, label "See the kitchen" → Kitchens page anchor.
- Must not be diluted: the medallion must visibly straddle the photo edge (half on the photo, half on white); the gold hairlines and the gold full-width button must be gold, not grey; the three thumbnails must be real photos (not text chips); cards stay white on the paper band with 14px corners.

### T2. Framed rounded window on a pale cool ground, today's-hours strip with a vertical hairline divider, convex arc edge into white
- Source: Food Stadium Tokyo first screen and the strip below it (`ref/tdc-first.png`, `ref/scroll-tdc-after.png`). A ~1000px photo window, radius ~12px, inset on `#F1F5F5` under a white header with a 1px rule; directly below, "today's hours" in a bold figure on the left, a vertical hairline, three small icon links on the right; then a convex arc of white rises into the pale band (about 155px rise across 1440px).
- Ours (home blocks 1 + 2; see KV section for block 1): ground `#F1F5F5`, window **1000×540** desktop, `border-radius: 12px` `tok(d)`, overflow hidden, holding the horizontal photo strip.
  - Hours strip (block 2, same `#F1F5F5` ground, continuous with the hero): container 1000px, two halves. Left: small label "Today" Literata 0.875rem 60% ink; figure "11:00–21:30" Fraunces 600 **2.25rem** tabular-nums, ink; note under it "Lunch 11:00–15:00 · last lunch order 14:30" Literata 0.875rem. Centre: vertical hairline **1px × 116px**, ink at 20%. Right: three text links with our own 28px line icons (inline SVG, 1.5px stroke ink): bowl → "Kitchens", table → "Hold a table", pin → "Find us"; Literata 0.8125rem under each icon, 64px apart. Padding 56px top, 0 bottom.
  - Arc: the next block (white) starts with a convex arc: implement as the first child Group of block 3 with class `hb-arc`: `height: 160px; background: #fff; border-radius: 50% 50% 0 0 / 100% 100% 0 0; width: 140%; margin-left: -20%;` inside an alignfull wrapper on `#F1F5F5` with `overflow: hidden`. Rise **160px** at 1440 (`tok(f)` + `ref/scroll-tdc-after.png`), **56px** at 390.
- Must not be diluted: the window must stay inset (pale ground visible on all four sides, ≥ 24px top margin under the header, ≥ 220px either side at 1440), corners 12px; the hairline divider must be present; the arc must be a visible curve, not a straight edge or a wave.

### T3. Caps title lockup + small sub-label + 40px gold rule, gold-highlighted words in the statement
- Source: redine section heads ("FEATURE", "SHOP LIST", "HOW TO ORDER", `ref/redine-lower.png`): Latin caps 36px, tracking 0.2em, centred; a sub-label 14px tracking 0.3em at 50% ink; a 40px gold rule; then a bold statement line 30px with gold-highlighted words.
- Ours: every home section except the hero and every inner page head. Markup (all editable blocks): `p.hb-caps` Fraunces 500 **2.25rem** (36px), `letter-spacing: .2em`, uppercase, line-height 40px, ink, centred → `p.hb-sub` Literata 0.875rem, `letter-spacing: .3em`, ink 50% → Separator `hb-rule` **40px × 2px** `#B8860A`, 20px margin above and below → statement H2 Fraunces 600 **1.875rem** (30px), line-height 1.6, centred, with 1–3 words wrapped in `<mark class="hb-gold">` (colour `#B8860A`, background none).
- Caps words: THE HALL, KITCHENS, LUNCH HOUR, TABLES, GUEST NOTES, VISIT (and per inner page). In zh-TW/ja the caps line stays Latin; sub-label and statement are translated.
- Must not be diluted: centred, caps, tracking 0.2em, the gold rule exactly 40px and gold; the gold words must be in the statement on every use.

### Continuation to inner pages (all pages; ≥ 4 required)
Every inner page = pale head (`#F1F5F5`, framed window r12 with one photo, T3 lockup under it) → arc edge into white (T2) → page body → close band (stone, hours chip). Specific uses:

| Page | T1 kitchen card | T2 window / hours strip / arc | T3 lockup |
|---|---|---|---|
| Kitchens | **all 8 cards** (2-up), full T1 with thumbnails on cards 1–2 and the plate names as a 3-line caption list (same flanked label) on cards 3–8 | head window P13 crop + arc | KITCHENS |
| Lunch Hour | — | head window P17 + the full hours strip (Today 11:00–21:30) + arc; ruler (section 3, block 5) at full size with 8 stamps | LUNCH HOUR |
| Hold a Table | one card variant: "Your table" card (cover P14, medallion with "12", hours chip "Held 15 min", gold button = mailto) | head window P02 + arc | TABLES |
| Prices | — | head window P04 + arc | PRICES (price table, section 4) |
| About | — | head window P13 + arc | THE HALL |
| People | 8 people as T1 cards without thumbnails (cover = kitchen photo, medallion = monogram, name, kitchen, 2-line note) | head window P16 + arc | PEOPLE |
| Visit | — | head window P18 + **full hours strip** with three links + arc | VISIT |
| Journal (index/archive/single) | post cards use the T1 shell (white r14, cover 16:9, medallion = category monogram) | head window (featured image on single) + arc | GUEST NOTES |
| Contact | — | head window P01 + arc | CONTACT |

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
- redine.jp (`ref/redine-first.png`, `ref/scroll-redine-hero-after.png`): a full-bleed, dimmed photograph of the empty hall (counter, stools, a glowing sign), white tagline and wordmark centred, a transparent header with white caps nav and three buttons (white, gold, white), and a SCROLL caps label over a 2px × 80px white line at the bottom. Story: "a different way to eat" — many specialist kitchens on one floor, one place to sit. Signature motion: the hero eases from 100svh to 97svh after 2s (1s, forwards), revealing the page edge; the header gains a scrim on scroll.
- Food Stadium Tokyo (`ref/tdc-first.png`): the hall is shown **through an inset rounded window** on a pale ground: a photo of friends at a table with counters behind; the window carousels between counters and tables; today's hours sit directly underneath.

### (2) Our translation (city food hall, weekday lunch; same composition, same motion concept, same image type: real photographs)
A pale cool ground under a split white header; in the centre a rounded framed window (the Tokyo Dome window) through which the hall's lunch is seen as a **horizontal strip of film-grain photographs**: a cook passing a bowl across the counter, a guest steadying a tray, steam over a wok, the tray rail with a table marker. The strip can be dragged/scrolled sideways, the fourth frame peeks, and on load the window eases from slightly inset to its final frame (our version of redine's 100→97svh ease) and the strip makes one slow sideways nudge (our version of the Tokyo Dome carousel). Story: several kitchens, one roof, one table held for you at lunch. Under the window the H1 and buttons, left-aligned at normal display size — never a giant centred word. A small hours chip with a drawing-down line replaces redine's SCROLL cue. Directly below: today's hours strip and the arc (T2).

### (3) KV checklist (all six on the first screen, visible at 1440×900; mobile notes in section 3)
| # | Reference element | Our counterpart | Position (1440×900) | Motion | Image |
|---|---|---|---|---|---|
| 1 | Hall photo as the whole first screen (redine) seen through an inset rounded window on a pale ground (Tokyo Dome) | Framed window 1000×540, r12, on `#F1F5F5` | x 220–1220, y 104–644 | window starts `clip-path: inset(2% round 12px)` and eases to `inset(0 round 12px)`, 1s ease, delay 0.4s, CSS keyframe `hb-window-in` on the window's inner child (not on an observed element) | P01–P04 |
| 2 | Carousel of counters and tables (Tokyo Dome) | Horizontal scroll strip inside the window: 4 photos, each 720×540 (4:3), gap 8px, frame 1 at x 0, frame 2 peeking 272px; `overflow-x: auto; scroll-snap-type: x mandatory`, scrollbar hidden, two 40px round white prev/next buttons inside the window bottom-left (anchor links to `#hb-f1…#hb-f4`, no JS) | inside the window | one-time nudge: track `translateX(0 → -24px → 0)`, 1.6s `cubic-bezier(.4,0,.2,1)`, delay 2.4s (redine's 2s hero delay + 0.4s); none under reduced motion / `?sp-static` | P01 cook passing bowl, P02 guest steadying tray, P03 steam over wok, P04 tray rail |
| 3 | Header with caps nav and three buttons, one gold (redine) / white header with 1px rule (Tokyo Dome) | Split nav, white header 88px, 1px rule `#3F342C` at 12%: left links KITCHENS · LUNCH HOUR · TABLES; centre wordmark; right VISIT · JOURNAL + gold button "Hold a table" (r6, 36px tall) | y 0–88 | shadow `0 1px 8px rgba(63,52,44,.08)` after 40px scroll, 0.15s `cubic-bezier(.4,0,.2,1)` (CSS + `sp-js` class only; no scroll listener — use `position: sticky` + `animation-timeline: scroll()` where supported, otherwise static rule) | — |
| 4 | Tagline + wordmark over the photo (redine), not giant | H1 "Eight kitchens, one hall, your table held." Fraunces 600 **4.25rem**/1.05, ink, left-aligned at x 220, max 2 lines in 1000px (en is one line + short second); standfirst Literata 1.125rem 1 line; right-aligned at x 1220 on the H1 baseline: gold button "Hold a table" (r6, 48px) + outline button "See open kitchens" (1px ink, r6) | y 668–880 | none (no reveal in the hero) | — |
| 5 | SCROLL caps label + 2×80 white line (redine) | Hours chip inside the window bottom-right: white pill r6, Literata 600 0.8125rem "12:10 · 8 kitchens open", and under it a **2px × 80px** white line | window bottom-right, inset 24px | line draws down (`scaleY 0→1`, origin top) 1.6s ease, loops every 3.2s; static under reduced motion | — |
| 6 | Today's hours strip under the window (Tokyo Dome) | The block-2 hours strip top edge ("Today 11:00–21:30") peeks at the fold | y ≥ 880 (peek) | none | — |

Every row must be implemented and visible; the KV images P01–P04 are in the image list (section 6). Do not swap the strip for a single still or a giant word.

---

## 3. Home page

### First screen composition (1440×900)
- Header white 88px (`tok(c)` 92px, rounded down), split nav, Fraunces 500 0.75rem caps links, `letter-spacing: .1em` `tok(b)`. Wordmark: "Hiroba" Fraunces 600 1.5rem + "FOOD HALL" Literata 0.625rem caps tracking .3em under it, centred.
- Ground `#F1F5F5` from y 88 down to the arc in block 2.
- Window (KV 1–2, 5), H1 + standfirst + two buttons (KV 4), strip peek (KV 6).
- Saturated share: target ≤ 6% (gate `check-first-screen.py` 15%; row cap 30%); photos graded warm-neutral and muted; the only saturated UI is the gold button (≈ 1.2%).
- Mobile 390×844: header 64px (wordmark left, "Menu" button right; split nav collapses to the overlay; "Hold a table" inside the overlay and as the first hero button). Window full width minus 16px each side (358×268, r12), strip frames 300×268, frame 2 peeks 50px. **The hours chip moves out of the window into the flow** directly under it (left-aligned, no line) — no absolutely positioned label on the mobile first screen. H1 2.5rem/1.1 (2–3 lines), standfirst, buttons stacked full width (48px). No vertical text, no overlapping labels.
- Forbidden on the first screen: table, form, search box, giant centred word, saturated field.

### Block order (9 blocks; ≥ 250 English words, ≥ 3 narrative paragraphs in blocks 3, 5, 7)
| # | Pattern | Purpose | Layout and photos | Copy |
|---|---|---|---|---|
| 1 | `hb-hero` | KV | framed window with strip P01 P02 P03 P04 on `#F1F5F5`; H1 + buttons under | ~25 words |
| 2 | `hb-hours` | today's hours (T2) | `#F1F5F5`; hours strip with hairline divider and three icon links; ends in the 160px arc into white | ~20 words |
| 3 | `hb-hall` | who the hall is (T3) | white, padding 96px `tok(c)`; T3 lockup THE HALL / "Since 2019, Rotterdam" / statement "Eight kitchens cook, **one hall** seats you, and a **held table** waits." Then a 2-column text (2 paragraphs, 1056px container, 7/5 split: left paragraphs, right three `sp-count` figures stacked: **8** kitchens · **180** seats · **15** minutes a table is held; figures Fraunces 600 3rem, label Literata 0.8125rem) | 2 × 55 words |
| 4 | `hb-kitchens` | kitchens (T1, card-mosaic) | `#F6F1E7` band, padding 112px `tok(c)`; T3 KITCHENS / "Open for lunch today"; 2 T1 cards: Ladle Lane (cover **P05**, thumbs **P07 P08 P09**) and Ember Grill (cover **P06**, thumbs **P10 P11 P12**); under the cards a centred row of the other six kitchen names as monogram discs Ø48 (ink disc, paper monogram) + name, 3 per row on mobile; "All eight kitchens →" text link | cards + 30 words |
| 5 | `hb-lunch-hour` | the day-schedule | white, 96px; T3 LUNCH HOUR / "Weekdays, 11:00–15:00" / statement "The hall is paced around **12:10**." One paragraph (60 words) centred 640px. Then the **hour ruler**: a horizontal 1px ink-20% line across 1000px from 11:00 to 15:00 with ticks every 30 min (1px × 8px); the peak 12:10–13:00 drawn as a **4px gold `#B8860A` bar** on the line; five stamps above the line (Fraunces 600 1.25rem tabular-nums) at their true positions; under each stamp its line from section 0 (Literata 0.875rem, max 180px wide). Not a vertical timeline, no step numbers, no boxes. Mobile: the ruler becomes a horizontal scroll row (overflow-x:auto inside the block, 900px wide track) with a hint "Swipe the hour →" | 60 + 5 × 12 words |
| 6 | `hb-pause` | parallax photo band (see section 8) | alignfull `sp-parallax`, height 560px desktop / 360px mobile, background **P13** (the hall at 12:20); foreground: white card 420px, r14, bottom-left at x 220, y −56px from band bottom, padding 32px: sub-label "12:20, a Tuesday" + one sentence | 25 words |
| 7 | `hb-tables` | how a table is held | stone band `#E5E2D8`, padding 112px; two columns 1056px: left 6/12 **P14** 4:3 r8; right T3 lockup (left-aligned variant is NOT allowed: keep centred over the right column) TABLES / "Held for 15 minutes" / statement with gold "**free**"; 2 paragraphs (book by email or phone; tables for 2–12; groups 6–12 book 24 h ahead, Group lunch set €18.00 pp); gold button "Hold a table" r10 | 2 × 45 words |
| 8 | `hb-notes` | guest notes | light grey band `#F4F4F4` `tok(a)`, padding 96px; T3 GUEST NOTES / "From the tables"; Query Loop, 2 latest posts as T1-shell cards (white r14, cover 16:9, medallion with category monogram, title Fraunces 600 1.125rem, date, 2-line excerpt), 2-up 496px gap 32; featured **P15**, **P16**; "All notes →" | loop |
| 9 | `hb-visit` | visit / close | stone `#E5E2D8` band, padding 80px `tok(c)`; T3 VISIT / "Havenhof 12, Rotterdam"; two columns: left address lines, dark "Hours" chip + hall hours, "Lunch 11:00–15:00 · last order 14:30", phone and email; right **P18** 4:3 r8; gold button "Plan your visit" | 40 words |

Footer: ink `#3F342C` ground, `#F6F1E7` text 80%, wordmark, the hours chip inverted (paper chip, ink text), address, nav repeat, © 2026.

### Home photo positions (17, none repeated): P01 P02 P03 P04 (strip) · P05 P06 (covers) · P07–P12 (thumbs) · P13 (parallax) · P14 (tables) · P15 P16 (notes) · P18 (visit).

### Comparison with the last four themes
| # | Kataribe Partners | Yanagi Hygiene | Kaban Luggage | Kogarashi Inn | **Hiroba Food Hall** |
|---|---|---|---|---|---|
| 1 | hero + docked card | skyline hero | dark macro hero + strip | top/bottom-half cover + clock | **framed rounded window with horizontal photo strip on pale ground** |
| 2 | brief band | intro wash with arcs | dark trip questions | dark intro log lines | **today's hours strip + convex arc** |
| 3 | fit | sites | counter story | news | **the hall: lockup + count figures** |
| 4 | week strip | inspection hour (sticky) | parts catalogue | day-schedule (stamped lines, narrow column) | **kitchen cards with medallions + thumbnails (paper band)** |
| 5 | numbers band | parallax pause | fitting | rooms edge-flush | **horizontal hour ruler with gold peak bar** |
| 6 | 3 stories | records | workshop prices | table | **parallax hall photo + white card** |
| 7 | retainers table | 4 logbook cases | stories mosaic | walks band | **held tables: photo + lockup on stone** |
| 8 | people | fees table | visit | people | **guest notes (T1-shell cards, grey band)** |
| 9 | request band | request / notes | — | rates | **visit on stone with Hours chip** |
Why not alike: no dark hero or dark bands (Kaban, Kogarashi), no clock or stamped narrow column (Kogarashi's day-schedule is vertical one-line stamps; ours is a horizontal ruler with a gold peak bar), no docked card or week strip (Kataribe), no skyline / sticky media (Yanagi), no table or people grid on the home page. Our shapes (inset r12 window + strip, convex arc, medallion straddling a card photo, caps lockup with gold rule) do not appear in any of the four. Also differs from Awa Taproom's framed window: Awa's frame is sharp, sits over a full-bleed parallax photo with a caps word crossing it; ours is rounded, on a flat pale ground, holds a scrollable strip and has no overlapping word.

---

## 4. Inner pages (10 + templates; no sidebar)

Each page: pale `#F1F5F5` head (window 1000×420 r12 with one photo, T3 lockup under it) → arc → body → visit close band (stone, Hours chip). Single post and archive use the same head.

1. **Kitchens** (`page-kitchens`): T3 KITCHENS / "Eight counters, one roof"; intro 80 words; 8 T1 cards 2-up (covers: Ladle Lane P05, Ember Grill P06, Green Counter P09, Wok Row P03, Spice Shelf P11, Fresca P08, Bakehouse P12, Steep P10 — each once); cards 1–2 with thumbnails P07 / P04 … no: cards 1–2 keep the three-plate **caption list** too (thumbnails only on the home page to keep the page free of repeats); each card: cuisine, lead cook, Hours chip with that kitchen's hours (all: Mon–Fri 11:00–15:00 and 17:00–21:30, Sat 12:00–21:30; Steep and Bakehouse open at 11:00 and close at 17:00), gold button "Plates and prices" → Prices.
2. **Lunch Hour** (`page-lunch-hour`, the day-schedule page): head P17; hours strip (T2); the ruler at full size 11:00–21:30 with all 8 stamps (lunch segment 11:00–15:00 on white, evening on paper); under the ruler 8 short notes (2 sentences each) in two columns, each opened by its stamp; a paragraph on how the peak is paced (queues by kitchen, trays on the rail, held tables seated first).
3. **Hold a Table** (`page-tables`): head P02; T3 TABLES / "Held for 15 minutes"; "Your table" card (T1 variant, cover P14); how it works as 4 short paragraphs (not a step grid): write or call by 11:00 → we confirm → table marked with a wooden block → held 15 minutes past the time; groups 6–12 book 24 h ahead, group lunch set €18.00 pp; accessibility notes (step-free entrance, 6 lower tables); mailto button.
4. **Prices** (`page-prices`): head P04; the price table (section 0, 7 rows) — rules in section 7; one paragraph on allergens (ask at each counter; all kitchens list the 14 EU allergens).
5. **About** (`page-about`, standard "about"): head P13 crop; T3 THE HALL / "Since 2019"; 3 narrative sections (a harbour warehouse opened 4 March 2019; why eight kitchens and one tray; why lunch is the hall's centre); P15 4:3 r8 between sections 2 and 3; Ruth Adeyemi's note.
6. **People** (`page-people`): head P16; 8 people as T1 cards without thumbnails (cover = their kitchen photo, medallion = monogram, name, kitchen, 2-line note). Cards 2-up (not a four-person grid).
7. **Visit** (`page-visit`): head P18; full hours strip with three links; address block; how to get there (tram 8 to Havenhof, 4 min walk; bicycle racks 60; no car park) as paragraphs; P01 not used here; second photo P13? no — P14 not here; use **P18 only** plus the hours strip.
8. **Journal** (`home.html` posts page "Guest notes", `archive.html`, `tag.html`, `single.html`): index head P15; 4 posts as T1-shell cards 2-up; single: featured image in the window head, text column 680px, T3 lockup with the category as the caps word.
9. **Contact** (`page-contact`, standard "contact"; newsletter screen → posts page): head P01; T3 CONTACT / "Write to the hall"; email, phone, address, Hours chip; Ruth Adeyemi signs. No form required.
10. **404 / search**: pale head without photo, T3 lockup, gold button home.

Standard screens (`demo-content.json` `screens`): home, about → About, news → posts page, article → post 1, category → Tables, tag → lunch, newsletter → posts page, contact → Contact.

---

## 5. Colour, type, spacing

### Colour (from redine `tok(a)` and Tokyo Dome; row hex kept as ink)
| Role | Hex | Source | Use | Share |
|---|---|---|---|---|
| Ink | `#3F342C` | row hex; redine ink `#3B3225` (+3% lightness) | text, headings, medallions, Hours chip, footer | ~12% |
| Base | `#FFFFFF` | redine ground | white blocks, cards | ~40% |
| Paper | `#F6F1E7` | redine shop band `#F7F2E6` (−1%) | kitchens band, monograms | ~25% |
| Window ground | `#F1F5F5` | Tokyo Dome pale ground | hero, page heads, hours strip | ~10% (first screen ~45%) |
| Stone | `#E5E2D8` | redine access band | tables, visit bands | ~8% |
| Grey band | `#F4F4F4` | redine news band | guest notes | ~4% |
| Gold accent | `#B8860A` | redine gold | buttons, gold rules, hairlines, peak bar, gold words | ≤ 3% page, ≈ 1% first screen |
| Muted text | `#3F342C` at 60% (`#8C847E` on white) | redine 50% ink | sub-labels, captions | — |
- Contrast: white on `#B8860A` = 3.3:1 → button labels 700 weight ≥ 0.875rem (large-ish bold); also offer ink text variant on hover (`#3F342C` background, white).
- First-screen saturated share: target ≤ 6%, gate 15%, hard cap 30%.

### Type (theme.json fontFamilies + fontFace; editor and front end identical)
| Role | en / fr / de | zh-TW | ja |
|---|---|---|---|
| Display (headings, caps lockup, figures) | **Fraunces** (variable, latin + latin-ext, 400–700, opsz) → `Fraunces, Georgia, "Times New Roman", serif` | `Fraunces, "Noto Serif TC", "Songti TC", "PMingLiU", serif` | `Fraunces, "Noto Serif JP", "Hiragino Mincho ProN", "Yu Mincho", serif` |
| Body | **Literata** (variable, latin + latin-ext, 400–700) → `Literata, Georgia, serif` | `Literata, "Songti TC", "PMingLiU", "MingLiU", serif` (system Mincho; built-in Noto Serif TC must NOT be in the body stack) | `Literata, "Hiragino Mincho ProN", "Yu Mincho", serif` (no built-in JP font in the body stack) |
- Serif direction: Latin serif + CJK Noto Serif TC / JP 明體; no 黑體 anywhere.
- Noto Serif TC / JP: subset woff2 (headings only, ≤ 400 KB each) loaded via theme.json `fontFace`; use the Hokuto / Hada subsetting workaround (the shared subset script is broken). `:lang()` rules → copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and require it.
- Presets: small 0.8125rem, base 1rem (body 1.0625rem, line-height 1.75), medium 1.25rem, large 1.875rem (statement 30px `tok(b)`), x-large 2.25rem (caps lockup 36px `tok(b)`), xx-large 3rem, **huge 4.25rem** (H1; ≥ 4.25rem rule).
- CJK: sizes ≈ 0.75× en for display, body line-height 1.85, caps lockup stays Latin; fr/de `hyphens: auto`.
- Weights: Fraunces 500 caps / 600 headings; Literata 400 body / 600 hours / 700 labels and buttons.

### Spacing, radius, borders (`tok(c)`, `tok(d)`)
- Block padding: 96px white, 112px coloured bands, 80px close; mobile 64 / 72 / 56px.
- Containers: content 1056px, cards 1024px (2 × 496 + 32), window/strip 1000px, wide 1232px.
- Radius: window 12px; cards 14px; photo tiles 8px; header buttons 6px; card buttons 10px; Hours chip 4px; medallion 50%.
- Shadow: cards `0 1px 2px rgba(63,52,44,.08)` only. No borders on cards.

---

## 6. Images (18, Grok, one at a time, read each one)

IMAGERY: **photo**. STYLE (use this exact string for every image):
`real photography, film-grain 35mm look, soft halation on highlights, fine visible grain, slightly lifted blacks, warm neutral tone with tungsten counter lights against cool daylight from tall hall windows, natural skin, shallow depth of field, documentary and quiet, modern international city food hall, ceramic bowls, steel counters, pale wood trays, diverse adults of mixed ages and backgrounds, no text, no logos, no brands, no signage lettering, no Japanese elements`

All ≤ 300 KB, ≤ 2000px, webp, no cutouts, one readme.txt line each (AI-generated, CC0). Re-generate any image with text, logos, broken hands or faces, or a drift from the STYLE.

| ID | Subject / composition | Ratio | Used on (once per page) |
|---|---|---|---|
| P01 | **[Home]** a cook's hands passing a steaming ceramic noodle bowl across a steel counter to a guest's hands, counter lights above | 4:3 | Home strip 1; Contact head |
| P02 | **[Home]** a guest steadying a pale wood tray with two bowls while walking between long shared tables, window light | 4:3 | Home strip 2; Hold a Table head |
| P03 | **[Home]** steam and flame rising over a wok at a counter, cook seen from the side | 4:3 | Home strip 3; Kitchens (Wok Row) |
| P04 | **[Home]** the tray rail: stacked trays, cutlery cups, water carafes and a small blank wooden table block | 4:3 | Home strip 4; Prices head |
| P05 | **[Home]** noodle kitchen: a ladle lifting noodles over a large pot, broth steam | 16:9 | Home card 1 cover; Kitchens (Ladle Lane); People (Tomás) |
| P06 | **[Home]** charcoal grill with flatbreads and skewers, cook's hand turning one | 16:9 | Home card 2 cover; Kitchens (Ember Grill); People (Amara) |
| P07 | **[Home]** overhead: clear chicken noodle soup in a pale ceramic bowl on wood | 1:1 | Home thumb |
| P08 | **[Home]** overhead: sesame broth noodles with greens; also reads as pasta-like fresh noodles | 1:1 | Home thumb; Kitchens (Fresca); People (Marco) |
| P09 | **[Home]** overhead: cold noodles with herbs and a barley-and-leaves side | 1:1 | Home thumb; Kitchens (Green Counter); People (Lena) |
| P10 | **[Home]** flatbread with grilled squash on a plate, coffee cup at edge | 1:1 | Home thumb; Kitchens (Steep); People (Ruth) |
| P11 | **[Home]** chicken skewer plate with rice and a curry bowl beside | 1:1 | Home thumb; Kitchens (Spice Shelf); People (Priya) |
| P12 | **[Home]** yoghurt herb dip with torn bread and a soup cup | 1:1 | Home thumb; Kitchens (Bakehouse); People (Ingrid) |
| P13 | **[Home]** wide interior at 12:20: long shared tables full, counters along the back, tall windows, warm lights | 21:9 | Home parallax band; About head; Kitchens head |
| P14 | **[Home]** a held table for six by the window: trays waiting, chairs tucked, a small blank wooden block on the table | 4:3 | Home tables; Hold a Table card |
| P15 | **[Home]** a group of colleagues of mixed ages sharing one long table, two kitchens' plates on one tray | 3:2 | Home note 1; About; Journal post 1 |
| P16 | **[Home]** a cook at the pass in apron looking down at a ticket rail (no readable text), portrait-ish | 3:2 | Home note 2; People head; Journal post 2; People (Daniel, crop) — not twice on People: Daniel uses P03 |
| P17 | hands chopping herbs at 10:30 prep, empty hall behind softly lit | 3:2 | Lunch Hour head; Journal post 3 |
| P18 | **[Home]** the hall entrance from the street: glass doors, bicycles, midday daylight | 4:3 | Home visit; Visit head; Journal post 4 |

People page mapping (each image once on that page): head P16; Tomás P05, Amara P06, Lena P09, Daniel P03, Priya P11, Marco P08, Ingrid P12, Ruth P10.

---

## 7. Responsive and tables
- 390px: no horizontal overflow (the strip and the ruler scroll inside their own containers; page `overflow-x: clip`); first screen has no vertical text and no absolutely positioned labels over text (hours chip in flow on mobile).
- Cards 1-up below 782px (cover full width, medallion still straddling), thumbnails stay 3 across (≈ 100px).
- Price table (Prices page): **full content width (1056px) at ≥ 782px**, two columns `item | price`; price column `white-space: nowrap; text-align: right; width: 9rem`, tabular-nums, never clipped; rows separated by 1px ink-12% rules; group set row note on its own line under the item. Below 782px every table becomes stacked rows (item on one line, price right-aligned under or beside it, no horizontal scroll).
- Any other table (accessibility, opening hours) follows the same stacking rule.
- Hours strip below 782px: halves stack, hairline becomes horizontal 1px × 64px, three icon links in one row.

## 8. Motion (sp-scroll; copy `pipeline/assets/sp-scroll/` unchanged)
Chosen effects (3, from the stage-a candidates):
| Effect | Class | Where | Source and its motion | Trigger / time / easing |
|---|---|---|---|---|
| Parallax | `sp-parallax` | Home block 6 (P13 band); also the About page head window | redine's hero photo easing while the page moves past it, Tokyo Dome's sliding window: the hall seen moving past a still frame | scroll-driven; **`--sp-par: 10%`** desktop, **6%** under 782px (`@media` override on the block); linear |
| Reveal + stagger | `sp-stagger` on the cards row, `sp-reveal sp-reveal--up` on each card | Home blocks 4 (2 cards + monogram row as one) and 8 (2 post cards); Kitchens and People card grids | ours (reference has no reveals); timing matched to redine's menu ease | in view; `--sp-dist: 20px`, `--sp-dur: .8s`, `cubic-bezier(.23,1,.32,1)`, 0.12s steps |
| Count | `sp-reveal sp-count` | Home block 3 figures 8 / 180 / 15 | ours, figures echo Tokyo Dome's big hours figure | in view; 1.2s easeOutCubic |
- Parallax details: alignfull Group `sp-parallax hb-pause`, P13 as a direct `img` (object-fit cover, object-position 50% 60%); foreground white card is a sibling outside the moving layer. Mobile keeps the parallax at 6%. Reduced motion / `?sp-static` / editor: still.
- Hero: no `sp-reveal`; only the CSS window ease, the one-time strip nudge and the cue line (all off under `prefers-reduced-motion` and `html.sp-no-motion`).
- Not used: `sp-marquee` (it duplicates the strip's images on the page; the strip is a native scroll-snap row instead). No reveals on the price table, contact block or legal text.
- Hover/nav: 0.15s `cubic-bezier(.4,0,.2,1)`; mobile menu 0.2s `cubic-bezier(0,0,.2,1)` `tok(g)`.

## 9. Similarity targets (≈ 80% of the reference feel)
| Dimension | Reference value | This theme |
|---|---|---|
| Ink | `#3B3225` | `#3F342C` |
| Accent | gold `#B8860A`, <1% first screen | `#B8860A`, ≈1% first screen, ≤3% page |
| Grounds | white / `#F7F2E6` / `#E5E2D8` / `#F4F4F4`; TDC `#F1F5F5` | `#FFFFFF` / `#F6F1E7` / `#E5E2D8` / `#F4F4F4` / `#F1F5F5` |
| Section title | Jost 500 36px caps, 0.2em, lh 40px; sub 14px 0.3em 50%; 40px gold rule | Fraunces 500 36px caps, 0.2em, lh 40px; sub 14px 0.3em 50%; 40×2px gold rule |
| Statement | 30px 700 lh 1.6, gold words | Fraunces 600 30px lh 1.6, gold words |
| Body | 16/24, cards 14/20 | Literata 17/30 (1.0625rem, 1.75), cards 14/20 |
| Nav | 12px 500, 0.1em | Fraunces 500 12px caps, 0.1em |
| Block padding | 96 / 112 / 80px | 96 / 112 / 80px |
| Cards | 2-up 496px, gap 32, r14, shadow-sm, white on paper band | same |
| Medallion | 80px, 4px white ring, straddles cover edge | same (our monogram) |
| Thumbnails | 3 × 144px, r8, 12px captions | 3 × 144px 1:1, r8, 12px captions |
| Buttons | header r6 36px; card full-width r10 gold | header r6 36px; card full-width r10 gold, 46px |
| Hours chip | ink bg, white 11px, r4 | ink bg, white 11px, r4 |
| Flanked label | two 32px gold hairlines | two 32×1px gold hairlines, 14px gap |
| Hero window (TDC) | ~1000×563, r~12 on `#F1F5F5` | 1000×540, r12 on `#F1F5F5` |
| Arc edge (TDC) | ~155px convex rise | 160px |
| Hours strip (TDC) | bold figure ~32px + vertical hairline + 3 icon links | Fraunces 600 36px + 1×116px hairline + 3 icon links |
| Scroll cue | SCROLL + 2×80 line | hours chip + 2×80 line |
| Hero motion | 100→97svh, 1s, delay 2s, ease | window inset 2%→0, 1s ease, delay .4s; strip nudge 1.6s at 2.4s |
| Imagery | real photos, food close-ups 4:3 r8, wide interiors | real film-grain photos, same ratios and radius |

## 10. Home acceptance checklist
1. First screen at 1440×900 shows all six KV rows: rounded r12 window on `#F1F5F5`, 4-photo horizontal strip (frame 2 peeking), split header with gold "Hold a table", H1 4.25rem left under the window with two buttons, hours chip + 2×80 line in the window, hours strip peeking at the fold. No giant centred word, no table/form/search. Saturated share ≤ 6% (gate 15%).
2. 390×844: window + strip, chip in flow, H1 ≤ 3 lines, no overlapping or vertical labels, no horizontal page overflow.
3. Block order equals section 3 (9 blocks); comparison table holds; no people grid, step grid, vertical timeline or dashboard on Home.
4. T1: two white r14 cards on the paper band, 80px medallion straddling the cover edge, gold-flanked "Today's plates", three photo thumbnails, ink Hours chip, full-width gold button.
5. T2: hours strip with vertical hairline and three icon links, visible 160px convex arc into white.
6. T3 lockup (caps 36px 0.2em + sub-label + 40px gold rule + statement with gold words) on blocks 3, 4, 5, 7, 8, 9.
7. Hour ruler: horizontal line, ticks, gold peak bar 12:10–13:00, five stamps at true positions.
8. Parallax band P13 moves ≥ 6px relative to the band (check-parallax.mjs, desktop and mobile); reduced motion 0; ≥ 3 reveals hidden before entry and visible after; nothing transparent at the bottom.
9. 17 home photo positions, no repeats, all from the STYLE, no text/logos.
10. Numbers identical to section 0 (8 kitchens, 180 seats, 15 minutes, 11:00–15:00, 14:30, 12:10–13:00, €12.50 … €18.00, 2019, Havenhof 12 Rotterdam); ≥ 250 English words, ≥ 3 narrative paragraphs.
11. Fonts: Fraunces + Literata via theme.json fontFace, zh-TW/ja Noto Serif subsets; editor = front end; theme.json max font size 4.25rem.
12. auto-gates.mjs home (`1 1`) pass=false is a fail.
