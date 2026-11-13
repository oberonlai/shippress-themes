# Kohaku Brasserie — design spec (stage 1, design director)

Row b30-4 · archetype sticky-media · hero full-bleed-photo · nav overlay · first_screen timeline-line · page_structure booking-led · type hospitality / food-drink · font_direction **serif** · five locales (en, zh-TW, ja, fr, de).
Reference: https://sasa.osaka/ (primary) · Secondary: https://osteria-ao.com/ · measured values: `brand/reference-tokens.md` (cited below as T(a)…T(g)) · screenshots `brand/ref/`.
**Imagery: photo** (stage-a IMAGERY = photo) — low-key real photography, one STYLE string (§10). No illustration, no cut-outs.

The site is one city brasserie room seen across one service day. Every page carries the same three devices: the service-day hairline with its amber marker (T1), the pinned letterbox window (T2) and the plate-rim ellipse (T3). Never soften them into a plain hero, a plain image row or a flat band.

---

## 1. Signature techniques (3, visible at a glance, none may be softened)

### T1 — Service-day hero: full-bleed three-moment cross-fade, bracket counter, timeline hairline
- **Source:** sasa.osaka hero (https://sasa.osaka/) — a full-bleed square plated-dish photo with a top darkening gradient, three slides cross-fading, a rotated `(01 / 03)` counter with a 2px × 50px white bar at bottom-left (x 40, y 670) and a rotated `(scroll down)` below it (y 780). T(e), T(f).
- **Ours (home §1):** 100svh full-bleed photo (min 640px, max 980px), no radius, no inset. Three photos of **the same corner table** (H01 late sitting is the first and static frame; H02 lunch; H03 afternoon) stacked in one `.sp-parallax__layer`; CSS keyframes cross-fade 1.2s, hold 6s, 21.6s loop. Top gradient `linear-gradient(180deg, rgba(29,25,21,.62) 0%, rgba(29,25,21,0) 34%)` for the nav; bottom gradient `rgba(29,25,21,.55) → 0` over the lowest 40%.
- **Timeline hairline (row first_screen = timeline-line):** a 1px `#F6F3EC` line at 70% opacity running from x 40 to x (100% − 40px), 56px above the bottom edge. Three stamps sit on it as small serif labels above the line: `11:30 lunch` at 12%, `15:00 afternoon` at 50%, `22:00 late sitting` at 88%. An **amber `#B98A45` 9px disc** sits on the line and steps to the stamp of the visible slide (CSS keyframes in sync with the cross-fade, 0.8s `cubic-bezier(.19,1,.22,1)`). In `?sp-static` / reduced motion the disc rests on `22:00` and only H01 is visible.
- **Counter:** `(01 / 03)` 0.8125rem Literata + a 2px × 50px white bar, rotated −90° at x 40, bottom 170px on ≥1024px; `(scroll down)` rotated below it with a 50px 1px line. Text is block markup, never CSS `content`.
- **Must not soften:** photo stays edge to edge and dark (low-key); the hairline spans the full width; the amber disc is the only saturated UI element in the first screen; the counter keeps its brackets.

### T2 — Pinned letterbox window (sticky-media)
- **Source:** osteria-ao.com course block (letterbox photos 840×180 = 4.7:1 and 840×340 = 2.5:1 stacked, `02 / 06` counter at the photo's bottom-right, T(e)) + sasa pinned scenes (ScrollTrigger pin, T(g)).
- **Ours (home §4 "How the day is paced"):** a full-width (inset 40px each side) **2.4:1 letterbox photo** that is `position: sticky; top: 88px` (header height) while three ruled chapter rows scroll beneath it. Each chapter row: 1px clove hairline on top, left column 22% = time label (`11:30–14:30`, Fraunces 300 2.25rem) + chapter name in parentheses, right column 50% (starting at 40%) = 60–80 words. Each chapter row carries its own letterbox `figure` (H06, H07, H08); the figures share `position: sticky; top: 88px`, so each new chapter's photo slides over the previous one (pure CSS sticky, no JS, no scroll listener). Counter `02 / 03` in white 0.8125rem at the photo's bottom-right, 16px inset.
- Section min height = 3 × (letterbox height + 70vh). Mobile (<782px): sticky off, each chapter = letterbox photo (2:1) above its text.
- **Must not soften:** horizontal strip under the header (not a side column, not a split); ratio 2.4:1 on desktop; the counter on the photo; the photo changes per chapter.

### T3 — Plate-rim ellipse
- **Source:** osteria-ao.com about block — a large soft light ellipse crossing the top of the section with a centred serif statement, small photos at the edges (scroll-ao-1800 → 2700).
- **Ours (home §3):** on the stone `#D4D3C7` band, an ellipse `#E4E3D9` (stone +6% lightness) 150% of the section width, 62% of its height visible, centred, top edge at −18% of the section so its rim crosses the band top like the rim of a plate seen from above; edge `filter: blur(2px)` + a 1px `rgba(122,106,86,.35)` rim line 24px inside the edge (the plate's well). Inside: `(the room)` label, centred Fraunces 300 3.5rem statement two lines, 70-word paragraph centred max 34rem. One photo H05 (4:3, 34% width) sits **below the ellipse, offset right to x 58%**, overlapping the ellipse's lower rim by 80px. The ellipse is a `.sp-parallax__layer` with `--sp-par: 6%` (it drifts slower than the text).
- **Must not soften:** the ellipse must be visibly lighter than the ground and wider than the viewport (clipped by `overflow: clip` on the section); the rim line must be visible; never a circle, never a flat band.

### Supporting (T4, always on) — dated hairline ledger
sasa news: 1px `#C8C8C8`-family hairlines (ours `rgba(38,34,29,.18)`), date left, title, lowercase grey `#tag` right, one underlined arrow link. Used for Notes on home and every archive.

### Continuation on inner pages (all, ≥4 required)
| Page | T1 service-day hairline | T2 letterbox window | T3 plate-rim ellipse |
|---|---|---|---|
| The Room (about) | page hero: 62vh full-bleed H13 + hairline with stamps `2014 opened · 2019 counter added · today` | three chapters "The room / The pass / The counter" (H12, H14, H04) | closing statement on the founders |
| The Day | page hero H02 + the full four-stamp hairline `11:30 · 14:30 · 18:00 · 22:00` with amber disc on 11:30 | four chapters (Lunch, Quiet hours, Dinner, Late sitting) with H06, H07, H08, H11 | "Why one room all day" |
| Menus & Prices | page hero H10 (62vh), hairline stamps = the four menus | — | ellipse behind the price ledger heading |
| The Kitchen (people) | page hero H12, hairline stamps = shift starts `07:00 · 10:30 · 16:00` | people as letterbox chapters (pairs of names per chapter, H14, H15, H09) | — |
| Private Room & Groups | page hero H16 | — | ellipse statement with capacity numbers |
| Book a Table | slim hero H11 + hairline of the three sittings (amber disc on the sitting chosen in copy) | — | ellipse behind the booking steps |
| Visit | page hero H17 + hairline `Mon closed · Tue–Sat · Sun` | — | — |
| Notes / single / archives | — | — | T4 ledger; single post: letterbox featured image 2.4:1 |
Every page hero is full-bleed, dark, overlay nav, no inset (T1 language); the hairline sits 56px above its bottom edge.

---

## 2. Key visual concept

### (1) The reference first screen
sasa.osaka opens on **one huge photograph of a plate** and nothing else: a thin logotype, a serif nav floating on the photo, a tiny bracket counter and a rotated scroll caption. The photo cross-fades through three scenes (dish → occasion → room) and drifts slower than the page (yPercent 0 → 20), then the page dips into a **dim, fire-lit pinned scene** where short white lines appear. The story: *an invitation into a place where time slows and the cooking is the performance.* osteria-ao adds the calm stone ground and the plate photographed edge-on-edge.

### (2) Our translation (city brasserie, same composition, same motion, same image type)
Same composition: one full-bleed low-key photograph, nav floating on it, counter bottom-left, three cross-fading scenes, slow parallax drift, then a dim pinned night scene. Our scene: **the corner table at the late sitting — a waiter pours water into a glass while, in the soft-focus background, the chef sets a plate on the pass under a lamp.** The three slides are the same table at three hours of one day (lunch light, empty afternoon with a coffee cup, candle-lit late sitting), so the story becomes *"one room working from lunch to last orders"*; the service-day hairline with the moving amber disc makes the time visible. Image type: photo, low-key, same as both references.

### (3) KV checklist (all six in the first screen, visible at 1440×900 and 390×844)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Full-bleed plated-dish photo with top gradient | Full-bleed H01: waiter pouring water at the corner table, chef setting a plate on the pass behind; top gradient for the nav | whole first screen, 100svh | sp-parallax `--sp-par: 8%` (mobile 5%) on the photo layer + load zoom 1.00 → 1.04 over 14s (theme CSS keyframes, static in sp-static) | H01 |
| 2 | Three-slide cross-fade (dish / occasion / room) | Same corner table: H01 late sitting → H02 lunch → H03 afternoon | same frame | opacity cross-fade 1.2s, hold 6s; static = H01 | H01, H02, H03 |
| 3 | Rotated `(01 / 03)` counter + 2px bar | `(01 / 03)` + 2px × 50px white bar; rotated on ≥1024px, horizontal in-flow row on <1024px | desktop x 40 / bottom 170px; mobile in-flow above the hairline | counter text static (markup), bar fixed | — |
| 4 | Transparent overlay nav, dot under current item, white circle button top-right | Transparent header: wordmark "Kohaku" (Fraunces 400 1.5rem) left, 6 links centred with 5px dot under current, a white 48px disc "Book" with arrow at top-right (the single repeated CTA) | top, 88px high | header is absolutely overlaid on the hero (transparent); inner sections below have their own espresso/stone grounds; no scroll listener | — |
| 5 | Rotated `(scroll down)` caption | `(scroll down)` + 50px 1px line | desktop under the counter; mobile hidden | none | — |
| 6 | Thin logotype over the plate | Our H1 Fraunces 300, 5.5rem / lh 1.02, two lines "One room, / lunch to last orders." + 1-line Literata sub (≤18 words), bottom-left at x 120 (desktop), above the service-day hairline with stamps 11:30 / 15:00 / 22:00 and the amber disc | lower left + full-width foot | no reveal on the hero; the amber disc steps with the slide | H01–H03 (listed in §10) |

---

## 3. Home page — block order (booking-led, en ≥ 250 words, ≥ 3 narrative paragraphs ≥ 20 words each)

| # | Block | Purpose | Layout | Photos | Copy weight |
|---|---|---|---|---|---|
| 1 | **Service-day hero** (T1) | KV, the one-room-all-day promise | §2 above | H01, H02, H03 | H1 6 words + 18-word sub |
| 2 | **Night band "(introduction)"** | What the room is; dim pinned scene (sasa) | espresso `#1D1915` ground, H04 as dimmed background (opacity .38) `position: sticky` image; white text column left at x 120 width 40%: label, display word "All day." Fraunces 300 **7.5rem** ls −0.05em, then 3 short paragraphs (narrative 1, 2, 3; 30–45 words each) in Literata 1.0625rem lh 1.85 | H04 | ~120 words |
| 3 | **Plate-rim ellipse statement** (T3) | "The room is open all day": how the brasserie thinks | stone ground, ellipse, centred statement, H05 offset right overlapping the rim | H05 | 2-line statement + 70 words |
| 4 | **How the day is paced** (T2) | the three sittings | pinned 2.4:1 letterbox, 3 ruled chapter rows (Lunch 11:30–14:30 · The quiet hours 14:30–18:00 · The late sitting 22:00–00:00) | H06, H07, H08 | 3 × 60–80 words |
| 5 | **What the room is for in the afternoon** | the signature answer: afternoon plates, coffee, a table for work or a slow meeting | 2 columns on white `#F6F3EC`: tall 2:3 photo H09 at left (x 40, width 38%), text from 50%: label, Fraunces 2.75rem heading, 60 words, then 3 facts in hairline rows (`14:30–18:00` · `Afternoon plate €16` · `No booking needed for ≤4`) | H09 | 60 words + 3 facts |
| 6 | **Menus & prices ledger** | the four menus with prices (same as Menus page) | stone ground; heading row left; full-width price ledger (§8 rules); one 2:1 photo H10 above the ledger at right 50% width, wipe reveal | H10 | 6 rows |
| 7 | **Notes ledger** (T4) | 3 latest posts | white ground, dated hairline rows, `#tag` right, "All notes →" underlined | — | 3 rows |
| 8 | **Book a table** (close) | the single way to book | espresso band, H11 2.4:1 letterbox inset 40px with sp-parallax 8%, below it 3 columns: sittings + hours, phone/email, the big "Book a table →" link (Fraunces 2.75rem underlined, amber underline 2px) to /book/ | H11 | 40 words |
| — | Footer (espresso) | address, hours, menu, **newsletter slot** (§12) | 4 columns, hairlines | — | — |

Home image slots: H01, H02, H03, H04, H05, H06, H07, H08, H09, H10, H11 = **11** (≥8). No photo repeats on home.

### First-screen composition (1440×900)
Photo 100% × 100svh. Header 88px: wordmark x 40, links centred (Fraunces 400 1rem, white, 5px white dot under the current item), Book disc at right 40px. H1 bottom-left x 120, baseline 150px above the bottom. Hairline 56px above the bottom, stamps 12px above it. Counter rotated at x 40. Saturated share target ≤ 12% (cap 15% per `check-first-screen.py`): achieved by low-key photo + the 9px amber disc only.
**390×844:** photo 100svh (min 640), header 64px with wordmark + Book disc + menu button; H1 2.75rem three lines at x 20, bottom 140px; counter as a horizontal row `(01 / 03) ——` at x 20 above the H1; no rotated text, no absolutely positioned labels overlapping text; hairline at bottom 40px with only the three times (no words); `(scroll down)` hidden.

### Comparison with recent themes (must not match)
| Theme | Home order | Why ours differs |
|---|---|---|
| Kaze Clinic | slab header / hero + info bar / lead flip / 3-col symptoms / method / mist card / fees / hours / journal / newsletter | no info bar, no 3-col card grid, no flip statement; ours is pinned letterbox + ellipse |
| Akiha College | serif question + framed window hero / case rail + index / step-through / rail rows / curtain / employer rows / fees / journal | no framed window (ours is edge-to-edge), no rails or indexes |
| Kikai Fair | notice strip / diagonal hero / faceted band / value bands / parallax access / pass band | no strips, no diagonals, no poster cards |
| Mise Studio | split hero / brief ring / rooms / service band / masonry / process sheet / fees / flush cells | no split hero, no ring, no masonry |
| Kaimon Fishmongers | hanging-catch hero / dark photo + tab / index rows with thumbs / cut sequence | no hanging strips, no thumb index; the timeline hairline + letterbox stack are new |

---

## 4. Inner pages (10 pages + posts)
1. **The Room** (`about`, standard about): hero H13; story 2014 → today (3 paragraphs); T2 three chapters; founders Inès Marchetti & Tomasz Lindqvist; T3 closing.
2. **The Day** (`the-day`): four-stamp hero; four letterbox chapters with exact times; what changes in the room per sitting (light, music, linen); ellipse "Why one room all day".
3. **Menus & Prices** (`menus`): the full price ledger (§9), what is in each menu (3–5 dishes per menu as ruled rows, no photos per dish), allergens note, wine by the glass note; H14 2:1.
4. **The Kitchen** (`kitchen`): the 7 people (§9) as letterbox chapters, each with role, years, one sentence; hours of the kitchen shifts.
5. **Private Room & Groups** (`private-room`): the Lantern Room (14 seated / 20 standing), group set menu €62, minimum spend, 3 occasions (stories §9) in hairline rows.
6. **Book a Table** (`book`, booking page): 4-step booking flow (§9) in ruled rows; sittings table; rules (table held 15 min, groups ≥7 by email); **`shippress_form_slot` kind=contact** after the steps + mailto fallback (§12).
7. **Visit** (`contact`, standard contact): address, map placeholder block (no embed), hours ledger, getting there (tram/bike), accessibility; **form slot kind=contact** + mailto fallback.
8. **Notes** (posts page, role `posts`, empty content) — T4 ledger in archive/home templates.
9. **Newsletter** (`newsletter`, standalone): "The Monday letter" — what it contains (next week's afternoon plates, late-sitting music), frequency (one email each Monday), **form slot kind=newsletter**; no alias to the posts page.
10. **Wine & Bar** (`wine-bar`): bar seats (8), wines by the glass (from €7), the late-sitting bar menu; H15.
+ Posts: ≥3 demo posts ("Why we keep the room open at 15:00", "Autumn on the pass", "The late sitting playlist"), each with category (`From the kitchen`, `The room`) and tags (`#lunch`, `#late`, `#wine`). Legal/privacy page uses no reveal.
Standard map in theme-meta: home, about→The Room, news→Notes, article→first post, category, tag, newsletter→Newsletter page, contact→Visit.

---

## 5. Colour (from T(a); ao stone ground + sasa dim scene; clove from the row)
| Token | Hex | Share (page) | Source / reason |
|---|---|---|---|
| `stone` (base) | `#D4D3C7` | ~45% | ao `#CAC9BD` +3% lightness (within ±5%) |
| `stone-light` (ellipse) | `#E4E3D9` | ~6% | ao about light ellipse |
| `paper` | `#F6F3EC` | ~12% | sasa white paper bands, warmed so it never reads pure white; also text on photo |
| `espresso` (night bands, footer) | `#1D1915` | ~25% | sasa dim fire scene, darkened warm |
| `ink` (text) | `#26221D` | text | ao slate `#4F545A` relationship (dark neutral on stone) moved warm so it pairs with clove; contrast 11.2:1 on stone |
| `clove` (mid, row colour) | `#7A6A56` | ~8% | row palette "clove brown" (chojicha); rules, labels, small fills; ink-on-clove not used for body |
| `clove-text` | `#5E5141` | labels | clove darkened for AA small text on stone (5.0:1) |
| `amber` (accent) | `#B98A45` | <2% | lamp light; only the hero disc, the Book underline, focus outline on dark |
| `hairline` | `rgba(38,34,29,.18)` | — | sasa `#C8C8C8` row separators |
Not cream/beige (stone is a grey-green neutral). First-screen saturated share: target ≤ 12%, **hard cap 15%**; saturation only from the photographs.

## 6. Typography (serif)
- **Latin display:** Fraunces (variable, opsz 144, weight 300 for display, 400 for nav/wordmark). **Latin body:** Literata (400/500, italic 400). Both self-hosted woff2 via **theme.json `fontFamilies` + `fontFace`** (editor = front end).
- **CJK (serif direction, Mincho):** zh-TW display stack `"Fraunces", "Noto Serif TC", "Songti TC", serif`; ja display stack `"Fraunces", "Noto Serif JP", "Hiragino Mincho ProN", "Yu Mincho", serif`. Bundle Noto Serif TC and Noto Serif JP **subsets** (weights 400/600) as fontFace in theme.json using the Hokuto/Hada substitute subsetting (the zh subset script is known broken). Body CJK stacks use system serif only: zh-TW `"Literata", "Songti TC", "PMingLiU", serif`; ja `"Literata", "Hiragino Mincho ProN", "Yu Mincho", serif` (repo contract: zh body stack must not contain the bundled zh family or a JP family). `:lang()` rules → copy `shared/inc/editor-lang.php` to `inc/` and require it. CJK sizes ≈ 0.75× Latin, body lh 1.85; fr/de `hyphens: auto`.
- **Scale (theme.json fontSizes):** `display-xl` clamp(4.25rem, 8.3vw, **7.5rem**) ls −0.05em lh 1.0 (T(b) sasa 120px / ls −6px) · `display` clamp(2.75rem, 5.2vw, 5.5rem) lh 1.02 (hero H1) · `h2` clamp(2.25rem, 3.6vw, 3.5rem) lh 1.15 (T(b) ao 56px / lh 70px) · `h3` 1.5rem lh 1.6 ls 0.04em (sasa H3 24px) · `body` 1.0625rem lh 1.85 (T(b) 14–16px scaled up for legibility) · `small` 0.875rem · `label` 0.8125rem lh 1.55 in parentheses `(the room)`, sentence case (T(b) 13px / 20px). Nav Fraunces 400 1rem ls −0.025em (sasa 16px / −0.4px). Largest size 7.5rem ≥ 4.25rem ✓; mobile minimum of the largest preset 4.25rem.

## 7. Motion and scroll (sp-scroll only; hero has no reveal)
### 7.1 Chosen effects (from stage-a "Scroll effect candidates")
| Effect | sp-* class | Where | Source / trigger / time / easing |
|---|---|---|---|
| Photo / eyecatch drift slower than the page | `sp-parallax` | hero (§7.2), ellipse T3, Book band H11, page heroes | sasa GSAP scrub yPercent 0 → 20, linear, trigger top bottom → bottom top |
| Section appear from below | `sp-reveal sp-reveal--up` inside `sp-stagger` | night-band paragraphs, chapter rows, afternoon facts, Notes rows, people rows | sasa `appear` at center 80%, expo.out ≈ cubic-bezier(.19,1,.22,1), 0.6–0.9s → set `--sp-dur: .9s`, `--sp-dist: 24px`, stagger 0.12s |
| Frame / rule draws in | `sp-reveal sp-reveal--wipe` | H05, H09, H10 photos (on the figure wrapper, clip on child) | sasa clip-path inset .3125–.625s, delays 0 / .2 / .4 → keep default 1.1s wipe |
Not used: smooth-scroll library, page-transition mask, GSAP. Pinned night band and letterbox use plain CSS `position: sticky`. **No reveal on:** hero, forms, price ledger, legal text, horizontal scrollers.

### 7.2 Parallax (required)
- **Hero:** outer Group `kb-hero sp-parallax` with `overflow: clip`; background layer `.sp-parallax__layer` containing H01/H02/H03 `img` (cover); `--sp-par: 8%` desktop, **5% on ≤781px (kept on mobile)**. Foreground (H1, counter, hairline) is outside the moving layer. Source: sasa hero `yPercent 0 → 20`, linear scrub.
- **Plate-rim ellipse:** `.sp-parallax` section, ellipse in `.sp-parallax__layer`, `--sp-par: 6%` (mobile 4%). Source: sasa second layer 33% / ao about drift.
- **Book band:** figure H11 in `sp-parallax`, `--sp-par: 8%` (mobile 5%).
- `check-parallax.mjs`: displacement ≥ 6px desktop and mobile, 0 in reduced motion.

## 8. Responsive rules (hard)
- 390px first screen: no vertical/rotated text, no absolutely positioned labels overlapping the H1 or each other; counter in flow; stamps reduced to times; no horizontal overflow at 390 and 1280.
- Price ledger at ≥782px: **full content width** (max 1200px, inset 40px), columns `item | description | price`, price column `white-space: nowrap; text-align: right; min-width: 7ch`, never clipped (auto-gates checks 800 and 1280). Built as a table block or ruled Group rows.
- Any table < 782px becomes stacked rows: item + price on one line (price right, nowrap), description below.
- Letterbox sticky off < 782px; ellipse width 220% on mobile so the rim still shows.
- Side margins: 40px ≥1024, 24px tablet, 20px mobile. Vertical gaps 160px desktop (T(c) 120–220px) / 96px mobile.

## 9. Fixed facts (brand.md is the source; identical on every page and in all five locales)
- **Name / place:** Kohaku Brasserie, 14 Arcade Row, Old Exchange Quarter, Lowmarket (fictional city). Opened **2014**. 64 seats in the main room, 8 counter seats at the pass, 8 bar seats; the Lantern Room 14 seated / 20 standing.
- **Hours:** Tue–Sat 11:30–00:00 · Sun 11:30–17:00 · Mon closed. **Service day:** Lunch 11:30–14:30 · The quiet hours (afternoon plates, coffee) 14:30–18:00 · Dinner 18:00–22:00 · The late sitting 22:00–00:00 (kitchen last orders 23:15). Hero stamps 11:30 / 15:00 / 22:00.
- **Prices (6, € incl. service):** Set lunch, two courses €28 · Set lunch, three courses €34 · Afternoon plate €16 · Dinner à la carte, mains from €24 · Late-sitting menu, three courses €52 · Counter menu at the pass, six courses €78. (Lantern Room group menu €62 appears only on the Private Room page; wine by the glass from €7 only on Wine & Bar.)
- **People (7):** Inès Marchetti (co-founder, front of house) · Tomasz Lindqvist (co-founder, head chef) · Amara Osei (sous chef) · Kenji Albrecht-Mori (pastry) · Lucía Ferreira (sommelier, bar) · Daniel Okafor (head waiter, late sitting) · Hana Novak (bookings & private room).
- **Stories (3, Private Room / home Notes):** a Thursday lunch of six colleagues that became a monthly table; a 15:00 coffee meeting that ran into the late sitting; a wedding-eve dinner of 18 in the Lantern Room.
- **Booking flow (4):** 1 Choose the sitting and party size → 2 Send the request (form or email) → 3 Confirmation by email within 4 hours during opening times → 4 Table held 15 minutes; groups of 7+ book the Lantern Room. Booking up to 60 days ahead. Walk-ins welcome in the quiet hours.
- **Contact:** bookings@kohaku-brasserie.example, +00 20 7000 0414 (fictional format). Newsletter: "The Monday letter", one email each Monday.

## 10. Images (17 photographs, IMAGERY = photo)
**STYLE (single string, every image):** `Low-key documentary photograph of a working city brasserie, warm tungsten lamplight in dim pools, deep clove-brown wood, white linen, dark stoneware plates, soft shadows, shallow depth of field, natural film grain, muted colours with saturation only in the food, international modern setting, diverse staff and guests, one clear subject, edge-to-edge composition, no text, no logos, no signage, no brand names`
| ID | Subject / composition | Ratio | Used on (no repeats within a page) | Home |
|---|---|---|---|---|
| H01 | Corner table, late sitting: waiter pours water into a glass (hands and torso, face turned away), chef in soft focus setting a plate on the lit pass behind; candle on the table | 3:2 (cover, safe centre-left) | Home hero slide 1 | ✓ |
| H02 | Same corner table at lunch: daylight from a tall window, two set-lunch plates, bread | 3:2 | Home hero slide 2; The Day hero | ✓ |
| H03 | Same corner table, afternoon: empty room, one coffee cup and a book, long low sun | 3:2 | Home hero slide 3 | ✓ |
| H04 | Dim room from the bar end at night, lamps, guests as silhouettes | 16:9 | Home night band; The Room T2 | ✓ |
| H05 | Overhead plate on dark stoneware (roast fish, brown butter) on linen | 4:3 | Home ellipse | ✓ |
| H06 | Lunch service: hands placing plates on a full table | 2.4:1 | Home T2; The Day | ✓ |
| H07 | Quiet hours: a waiter folding napkins at an empty table | 2.4:1 | Home T2; The Day | ✓ |
| H08 | Late sitting: two guests' hands and glasses, candle, dessert | 2.4:1 | Home T2; The Day | ✓ |
| H09 | Afternoon plate and coffee by the window, laptop closed to one side | 2:3 | Home afternoon; The Kitchen T2 | ✓ |
| H10 | The pass: plates lined under the heat lamps, ticket rail (blank tickets) | 2:1 | Home menus; Menus hero | ✓ |
| H11 | Room entrance at dusk from inside: coat stand, lamps, reservation book (blank pages) | 2.4:1 | Home Book band; Book hero | ✓ |
| H12 | Chef team on the pass mid-service (backs/side profiles) | 3:2 | The Room T2; Kitchen hero | |
| H13 | Wide view of the whole room, empty, morning light before lunch | 3:2 | The Room hero | |
| H14 | Counter seats at the pass, chef plating in front of a guest | 2.4:1 | The Room T2; Kitchen T2; Menus | |
| H15 | Bar: sommelier pouring red wine, bottles out of focus (no labels) | 3:2 | Wine & Bar hero; Kitchen T2 | |
| H16 | The Lantern Room set for 14, paper lantern-style pendant lights, long table | 3:2 | Private Room hero | |
| H17 | Street-side façade at night, warm windows, cobbles, no signage | 3:2 | Visit hero; Newsletter | |
Rules: Grok via `scripts/grok-image.sh` with the STYLE above, one at a time; webp ≤ 300 KB, ≤ 2000px; check each with Read (no text/logos, no broken faces/hands); H01–H03 must share the table, window and angle; 0 cut-outs.

## 11. Similarity table (target ≈ 80%; from reference-tokens.md)
| Dimension | Reference value | Ours |
|---|---|---|
| Ground | ao stone `#CAC9BD` ~85% | stone `#D4D3C7` ~45% + espresso bands 25% (sasa dim scene) |
| Text | slate `#4F545A` / black on paper | ink `#26221D` / `#F6F3EC` on photo |
| UI colour | none, saturation only from food | clove ~8% rules/labels, amber <2% |
| First-screen saturation | 13.9% / 5.2% | ≤12% (cap 15%) |
| Hero | full-bleed 1:1, 3 slides, top gradient | full-bleed 100svh, 3 slides, top 34% gradient |
| Counter | `(01 / 03)` 13px rotated, x 40 y 670, 2×50 bar | same, 0.8125rem, x 40 bottom 170, 2×50 bar |
| Nav | 16px serif, dot 5px under current, white 40px disc top-right | Fraunces 1rem, 5px dot, 48px white disc "Book" |
| Display | Bodoni light 120px ls −0.05em | Fraunces 300 7.5rem ls −0.05em |
| Headline | ao 56px / lh 70px light | h2 3.5rem / lh 1.15 |
| Body | serif 13–14px lh 23–24px | Literata 1.0625rem lh 1.85 |
| Labels | `(news & topics)` 13px | `(the room)` 0.8125rem |
| Margins | 40 (ao) / 80px (sasa) | 40px, text column x 120 |
| Vertical rhythm | 120–220px | 160px |
| Radius / shadow | 0 / none | 0 / none |
| Hairlines | 1px `#C8C8C8` | 1px `rgba(38,34,29,.18)` |
| Letterbox | 4.7:1 & 2.5:1, `02 / 06` bottom-right | 2.4:1 sticky, `02 / 03` bottom-right |
| Light ellipse | large soft ellipse over about | 150% ellipse `#E4E3D9` + rim line |
| Parallax | yPercent 0→20 linear | `--sp-par` 8% / 6% |
| Appear | center 80%, expo.out .6–.9s | sp-reveal--up .9s, 24px, stagger .12s |
| Clip reveal | clip-path inset .31–.63s | sp-reveal--wipe on 3 photos |
| Pin | ScrollTrigger pin | CSS sticky night band + letterbox |

## 12. Forms (form contract v1 — `steps/form-contract-v1` exists)
- Copy `pipeline/assets/forms/shippress-forms.php` → `inc/`, CSS + editor JS → `assets/` unchanged; require in functions.php. No fake forms, no mail backend, no plugin detection stored at import.
- **Book a Table** (after the 4 steps, before the rules) and **Visit** (after the hours ledger): `shippress_form_slot( kind => 'contact', fallback => <buffered literal mailto button "Email a booking request" → mailto:bookings@kohaku-brasserie.example> )`. CF7/WPForms form renders when available; otherwise the mailto button stays (never a link to /contact/). Expected CF7 fields (documented for site owners): name*, email*, phone, date*, sitting* (select: Lunch / Quiet hours / Dinner / Late sitting), party size* (1–6), message (textarea), consent checkbox.
- **Newsletter page** (standalone) and **footer subscribe column** (every page, incl. home, never the first screen): `shippress_form_slot( kind => 'newsletter', email => 'bookings@kohaku-brasserie.example', label => forms_email, submit => forms_subscribe, notice => forms_mail_notice, subject => forms_mail_subject )`. MailPoet / Mailchimp for WP first; CF7/WPForms only with an explicit newsletter form id. No-plugin fallback: required email field + submit, native mailto POST, notice "Opens your email app. Send the request to subscribe; you are not subscribed yet."
- **Tokens, light (stone / paper):** `--sp-form-surface: #F6F3EC`, `--sp-form-text: #26221D`, `--sp-form-border: rgba(38,34,29,.35)` (hover `#5E5141`), `--sp-form-accent: #26221D`, `--sp-form-on-accent: #F6F3EC`, `--sp-form-focus: #5E5141` (2px outline, 2px offset), `--sp-form-radius: 0`. Label Literata .875rem 500 above field; input/select 52px, textarea min 160px, 1px border, 16px text; checkbox/radio `accent-color: #7A6A56`; submit ink fill, Fraunces 400 1rem, padding 0 32px, hover `#3A342C`. Error `#9E2B1F` border + .875rem message; success ink text on `#E4E3D9` with 3px clove left bar.
- **Tokens, dark (espresso footer):** surface `#2A241E`, text `#F6F3EC`, border `rgba(246,243,236,.4)`, accent `#F6F3EC`, on-accent `#1D1915`, focus `#B98A45`, error `#FFB4A6`, success text `#F6F3EC` with amber left bar.
- **i18n:** semantic keys in `inc/i18n/en.php` (`forms_email`, `forms_subscribe`, `forms_mail_notice`, `forms_mail_subject`, plus `contact_email` button label, booking fallback text) translated in en, zh-TW, ja, fr, de; extract with `L10N_SEMANTIC=1`; check dynamic block attributes in every locale.
- No sp-reveal on any form or its wrapper. Gates: `form-check.py`, `form-runtime-check.php` (5 locales), `repo-gates.sh forms`; real CF7 style check at 390px and desktop on light + dark, no submissions.

## 13. Home acceptance checklist (stage 1)
1. First screen = full-bleed low-key H01, overlay nav with dot + white Book disc, H1 Fraunces 300 two lines bottom-left, `(01 / 03)` counter, `(scroll down)`, service-day hairline with 11:30 / 15:00 / 22:00 and the amber disc — all six KV items visible at 1440 and 390 (counter in flow at 390).
2. Hero cross-fades H01→H02→H03 in `?sp-motion`; static shows H01 with the disc on 22:00; no reveal on the hero.
3. Night band espresso with dimmed H04 and the 7.5rem "All day." display word; 3 narrative paragraphs (≥20 words each); home ≥250 English words.
4. Plate-rim ellipse visibly lighter, wider than the viewport, rim line visible, H05 overlapping its lower rim; ellipse moves with sp-parallax.
5. Letterbox 2.4:1 sticky under the header, three chapters, photo changes per chapter, `0N / 03` counter on the photo.
6. Price ledger full width at 800 and 1280, price column nowrap right, stacked at 390; prices = §9 exactly.
7. Notes ledger with dates, `#tags`, underlined arrow link; Book band with H11 parallax and the single Book link; footer newsletter slot with email + submit (no reveal).
8. ≥8 home images (11 planned), no repeats; first-screen saturated share ≤15% (`check-first-screen.py`); no horizontal overflow at 390 / 1280; exactly one top menu; largest preset ≥4.25rem.
9. `check-parallax.mjs` passes (hero, ellipse, Book band ≥6px; reduced motion 0); auto-gates `1 1` pass; `check-editor-fonts.mjs` en + zh-TW pass; `pattern_source.py` pass.
10. Colours from §5 only; radius 0, no shadows anywhere; no cream/beige; no split hero, cards grid, vertical timeline or sidebar.
