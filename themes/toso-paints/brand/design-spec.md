# Toso Paints: design spec (stage 1, binding for implementation)

Slug `toso-paints`. Paint and wallpaper shop, type **store** (WooCommerce declared, store templates styled, works without WooCommerce). Design-plan row b26-4: archetype asymmetric-masonry, hero product-grid-hero, nav overlay, first screen three-equal-columns, page structure spec-catalogue, palette moss `#3A4A3E`, fonts Instrument Sans / Onest, font_direction **sans**, photographic, photo direction **low-key**.

References (see `reference.md`, `reference-tokens.md`, `ref/*.png`):
- Main: **Open Rise**, https://open-rise.jp/ (S5-Style, buildings). Dark ink ground, low-key full-bleed photo, stacked caps nav at the left, hairline line drawing over the photo, ruled statement band, pinned chapters with a "03 | 03" counter, fixed bottom-centre outline button.
- Secondary: **FREDRIK by Fredrik Packers**, https://ffpfredrik.com/ja-jp/ (S5-Style, goods/shops). Structure only: round-thumbnail category strip with outline circle arrows, giant caps marquee, offset product rows with name / italic material / price, date + notice chip. Its coral/mint colour is **not** borrowed.

We borrow technique, structure, colour relations and the key-visual concept. We do not copy any photo, drawing, copy text or logo. Token references are written `tok(a)`…`tok(g)` = sections of `reference-tokens.md`.

---

## 0. Fixed brand facts (every page, every language; no other numbers anywhere)

- **Toso Paints**, paint and wallpaper shop with its own mixing counter. Founded **2009**. Shop: **Verfstraat 18, 3011 Rotterdam, Netherlands** (fictional street). Currency **EUR** in all five languages (no converted prices). Email hello@tosopaints.example, phone +31 10 000 1809 (fictional).
- **Hours:** Tue–Fri **09:00–18:00**, Sat **09:00–17:00** (swatch table **10:00–13:00**), Sun and Mon closed.
- **Order and collection:** mixed paint ready to collect in **2 hours**; orders placed before **15:00** (Tue–Sat) delivered in Rotterdam the **next working day**; wallpaper not in stock ordered in **3–5 working days**. Delivery in Rotterdam **€9**, free over **€150**; click and collect free.
- **Story line (one sentence, used on Home, About, translated in all languages):** "A colour is chosen against the room, not the chip."

### Price list (6 products + 3 services; Home table, Shop, single products, Order & Collection, all languages)
| # | Product (WooCommerce) | Category | Finish / spec | Size | Price |
|---|---|---|---|---|---|
| 1 | House Matt | Paint | flat matt, washable, walls and ceilings, about 12 m² per litre per coat | 2.5 L | **€58** |
| 2 | Wood & Metal Eggshell | Paint | low sheen, skirting, doors, radiators | 1 L | **€34** |
| 3 | Lime Wash | Paint | mineral, soft cloudy finish, about 8 m² per litre | 2.5 L | **€46** |
| 4 | Sample Pot | Paint | any colour mixed to order | 100 ml | **€6** |
| 5 | Linen-Weave Wallpaper | Wallpaper | paste-the-wall, woven texture | roll 10.05 × 0.52 m | **€72** |
| 6 | Grasscloth Wallpaper | Wallpaper | natural fibre on paper backing | roll 5.5 × 0.91 m | **€138** |

Services (Order & Collection, Colour Mixing, Home block 7): colour match at the counter **free**; in-home colour match visit **€45** (deducted from orders over **€200**); delivery in Rotterdam **€9** (free over **€150**).
Tags: matt, eggshell, mineral, sample, woven, natural-fibre, new.

### People (7, fictional; same names everywhere)
| Name | Role |
|---|---|
| Ines Valk | founder (2009), former decorator, mixing counter |
| Amara Osei | colour matcher, in-home visits |
| Lena Brandt | tinting machine and recipe file |
| Tomás Herrera | wallpaper lead, quantity calculations, hanging advice |
| Yusuf Demir | trade counter, orders and delivery |
| Mei Lindgren | swatch table (Saturdays), sample boards |
| Pieter de Wit | decorator in residence, first-Saturday demonstrations |

### Mixing process (4 ruled rows, not a step grid; same wording everywhere)
1. **Bring the room in** – a phone photo of the wall, a chip, a fabric or a flake of old paint.
2. **Read and mix a sample pot** – Lena reads the colour, writes a recipe and mixes 100 ml.
3. **Dry and check** – a drawdown card dries for **20 minutes**, then is checked by the window, not under the shop lights.
4. **Mix the order, label the lid** – the recipe number goes on the lid and stays on file for re-orders.

### Stories / cases (3; Colour Mixing page, About page, and Journal)
1. **North kitchen, Kralingen** – a green matched from a phone photo was mixed one step warmer after the drawdown check.
2. **Grasscloth hallway, Delfshaven** – four rolls calculated for a stair wall with a sloped ceiling; one spare roll from the same batch.
3. **Rental flat, Noord** – lime wash over old emulsion after a primer coat; two sample boards painted at the swatch table first.

---

## 1. Signature techniques (three main + one supporting; obvious at a glance, never diluted)

### T1. Hairline room-elevation drawing over a three-column photo hero, with a stacked caps nav at the left (Open Rise first screen, `ref/openrise-first.png`, `tok(f)`)
- **Reference:** a full-bleed dusk photo of a three-storey house. Over its top-left quarter, a thin white drawing of a utility pole and wires (1px, about 50% alpha) crosses into the photo. At the left, a stacked list of six uppercase section names, 16px, one per line. Centred light wordmark. Pale button top right.
- **Toso:** three equal, full-height photo columns (H1 wall / H2 paper / H3 tin) separated by **6px seams** in ground `#1A211C` (the 6px frame of Open Rise chapters, `tok(c)`), with a 6px frame round the whole hero. A **room-elevation line drawing** (inline SVG file `assets/images/elevation-room.svg`) crosses the seams: picture rail (horizontal line at 22% height, full width of columns 1–2), skirting line (88% height), a window frame (in column 1, 34% × 40% of the column), a pendant cord dropping from the top edge in column 2 to a lamp shade outline at 30% height, and a door architrave in column 3 from 30% to 88% height. Stroke `#F2F4F0`, `stroke-width: 1`, `vector-effect: non-scaling-stroke`, layer opacity **0.5**, no fill. The drawing spans from the top-left of column 1 to the middle of column 3 (left 0 → 78% width), like the wires run from the pole into the photo.
- **Stacked nav:** header overlay; at ≥1024px the primary menu is a vertical list at top-left: x = 40px, first item top = 40px, Instrument Sans 400 1rem uppercase, letter-spacing 0.04em, line height 21px + gap 25px (pitch 46px, `tok(b)` "25px pitch"), colour `#F2F4F0`. Items: Ranges, Colour Mixing, Wallpaper, Order & Collection, Journal, About, Visit (7).
- **Must not be diluted:** the drawing is visible at first glance (opacity 0.5, not 0.2), it **crosses at least two seams**, the three columns are exactly equal width and full hero height, the nav is stacked vertically (not a horizontal bar) on desktop.

### T2. Ruled statement band (Open Rise ABOUT, `ref/scroll-openrise-900-before.png`, `ref/scroll-openrise-1800.png`, `tok(c)`, `tok(f)`)
- **Reference:** on the dark ground, a two-line large headline at the left; 60px below it a full-width 1px rule; under the rule two columns: at the left a small uppercase label with a short slanted underline (about 55px, -3deg); the paragraph starts exactly at 50% of the container; under the paragraph a wide image in the right half only.
- **Toso geometry (1440):** container full-bleed minus 40px side margins (1360px). Headline: 2 lines, `xx-large` 4rem (64px), line height 1.3, weight 400, `#F2F4F0`, max-width 1100px. Gap 60px. Rule: `border-top: 1px solid rgba(242,244,240,.2)` full container width. 48px below the rule: grid `1fr 1fr`; left: label 1rem uppercase letter-spacing .04em, with a 55px × 1px underline rotated **-3deg** placed 12px below the label baseline, colour `rgba(242,244,240,.6)`; right (starts at 50%): paragraph 1.125rem / line height 1.8, `rgba(242,244,240,.8)`, max 34em; then 48px gap and an image in the right column only (aspect 680:490 ≈ 1.39:1, radius 0).
- **Must not be diluted:** the paragraph column must start at 50% (not 33%, not centred), the rule must be full width, the slanted underline must be visibly slanted, and the right-half image must leave the left half empty below the label (the emptiness is the point).

### T3. Chapter word with "01 | 03" counter and tick pager over a full-bleed low-key photo (Open Rise CONCEPT, `ref/scroll-openrise-6500-concept.png`, `tok(b)`, `tok(f)`)
- **Reference:** chapters pinned while the image swaps; a 6px dark frame round the viewport; label "CONCEPT" with slanted underline top-left; three tick marks top-right of the text panel, the active tick taller; a large humanist word (80px) with a small line above it; counter "03 | 03" bottom-left (current larger, vertical 1px bar, total smaller).
- **Toso:** three chapters **Paint / Paper / Mix**, each a full-bleed Cover (100vh, min 640px) inside a 6px `#1A211C` frame, photo C1 / C2 / C3, dim overlay `rgba(26,33,28,.35)`. Content at the left 40% of the panel, inset 80px: label "RANGES" + slanted underline (T2 underline) at top 80px; three ticks at top-right of the text area (1px × 14px, active 1px × 32px, gap 14px, `#F2F4F0`); small line above the word (1rem, `rgba(242,244,240,.8)`), the **chapter word 5rem (80px), line height 1, letter-spacing -0.005em (-0.4px), weight 400**; under it 2 sentences (1.125rem) and a text link with an outline circle arrow (T4). Counter bottom-left inset 80px: current "01" 1.5rem, 1px × 18px vertical bar, total "03" 0.8125rem.
- **Pinned feel without JS:** at ≥782px each chapter panel is `position: sticky; top: 0` inside a wrapper, so the next chapter slides up over the previous one (stacking cards). Pure CSS; no scroll listeners. Each panel is also `sp-parallax` (photo moves). Below 782px the panels simply stack (no sticky).
- **Must not be diluted:** word ≥ 5rem on desktop, counter and ticks present on every chapter, 6px frame visible, photos full-bleed (not a 50/50 split; we deliberately differ from the "sticky 50/50 colour split" already used).

### T4 (supporting). Round-thumbnail range strip with outline circle arrows + giant caps marquee (Fredrik, `ref/scroll-fredrik-900.png`, `tok(f)`)
- Strip: a row of 4 items, each a **72px round** thumbnail (P1, P3, P5, P6, `border-radius: 50%`, object-fit cover) + name (1rem) + **20px outline circle arrow** (1px border `currentColor`, arrow glyph 10px). Gap 56px between items, left-aligned after a label "RANGES" with a 1px vertical divider 40px tall (Fredrik's left "CATEGORY" + divider).
- Marquee: one line of giant caps, Instrument Sans **500**, `clamp(3rem, 6.25vw, 5.625rem)` (90px at 1440, Fredrik ~90px caps), letter-spacing 0.01em, `#1A211C` on the pale ground. Text (editable in block markup): "MATCH IT. MIX IT. HANG IT. LIVE WITH IT." followed by a 0.5em round dot in accent `#D9A66A` (replaces Fredrik's emoji). `sp-marquee`.
- Used for product/range navigation only; no emoji anywhere.

### Continuation to inner pages (≥4 required; this theme: all inner pages)
| Page | T1 (framed photo head + elevation drawing + stacked nav) | T2 (ruled statement band) | T3 (chapter word + counter) | T4 |
|---|---|---|---|---|
| Ranges / Shop (`archive-product`, `taxonomy-product_cat`, `product-search-results`) | head photo S10, `elevation-detail.svg` | intro "Two kinds of shelf: paint and paper." | two chapters Paint / Paper (C1, C2), "01 \| 02" | round strip = 2 categories + sample pot |
| Single product | small head (no photo, 220px dark band, drawing only) | product description opens with T2 rule + label = category | — | related products strip (round thumbs) |
| Colour Mixing (`page-colour-mixing`) | head S12 | yes | 4 ruled process rows each with "01 \| 04" counter style | — |
| Wallpaper (`page-wallpaper`) | head C2 | yes | 3 chapters Measure / Order / Hang over P5, P6, S9, counter 01 \| 03 | round strip = 2 papers |
| Order & Collection (`page-order-collection`) | head S9 | yes | — (price/services table) | — |
| About (`page-about`) | head S10 | yes, founder statement | one chapter "Since 2009" with S11, "01 \| 01" | — |
| Journal (`home.html`, `archive.html`, `tag.html`, `single.html`) | head drawing only on dark (220px band) | single post: T2 opens the article | — | category strip on index |
| Visit / Contact (`page-contact`) | head S10 crop | yes (address and hours as the paragraph) | — | — |
| Cart / Checkout / My account / Order confirmation | 220px dark band with drawing | — | — | — |

Inner head geometry: 6px frame, photo height `clamp(420px, 62vh, 620px)`, overlay `linear-gradient(to top, rgba(26,33,28,.75), rgba(26,33,28,.15) 60%)`, `elevation-detail.svg` (window + picture rail + skirting, same stroke rules) at the right 55% of the photo, H1 bottom-left inset 40px, `x-large` 3rem → see §6, label above it. The stacked nav sits on the photo top-left as on Home.

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
- **What it shows:** Open Rise fills the screen with one low-key dusk photograph of a three-storey concrete house. Window light is the only warm colour. A thin white line drawing of a utility pole and its wires runs from the top-left into the sky, crossing behind the stacked section list. A light, centred wordmark sits on the house. A pale button sits top right.
- **Story:** rational, beautiful city housing; the building is the product, and the lit windows say that someone lives there.
- **Signature motion:** a 0–100% loading counter, then the image scales in (1–1.5s, expo.out) under Lenis smooth scroll; later sections pin and swap images with a "03 | 03" counter. A fixed outline button stays bottom-centre on every screen.

### (2) Our transformation (paint and wallpaper shop; same composition, same motion idea, same image type)
- **Scene:** one room being finished, shown as **three equal tall low-key photographs** side by side: (H1) a wall half-painted in moss with the roller tray at the skirting; (H2) a clerk's hands unrolling a wallpaper sample across the counter; (H3) a freshly mixed open tin of moss paint on a dust sheet with the stirring stick resting across it. Window side light from the left in all three, so the three read as one room. The **room-elevation line drawing** (picture rail, window, pendant cord, door frame) crosses the seams the way the wires cross the house: it is the shop's "drawing of your room". Centred wordmark over the middle column. The only warm colour is the brass lamp-light accent (as the window light in Open Rise).
- **Story:** "A colour is chosen against the room, not the chip." Paint, paper and the mixed tin are the shop's three products; the drawing is the room they are matched to.
- **Motion:** Open Rise's image scale-in becomes **sp-parallax on each of the three columns at different speeds** (6% / 10% / 8%), so on scroll the columns drift against each other while the line drawing and wordmark stay still; the drawing appears to float over the room exactly like the wires over the house. The fixed bottom-centre outline button is kept ("Book a colour match"). The loading counter is not reproduced (no preloader); its counting role moves to the T3 chapter counters.
- Same image type: low-key documentary **photographs** (IMAGERY = photo).

### (3) KV checklist (all items implemented and visible on the first screen at 1440×900; on 390×844 as noted)
| # | Reference element | Our version | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Full-bleed low-key dusk photo of the product (house) | Three equal full-height low-key photo columns: wall / paper / tin, 6px seams and frame | whole first screen (100svh, min 640px); mobile 3 columns kept, 78svh | `sp-parallax` per column, `--sp-par` 6% / 10% / 8% (mobile 4% / 6% / 5%) | H1 `hero-wall`, H2 `hero-paper`, H3 `hero-tin` |
| 2 | Hairline white drawing of pole and wires over the photo | Room-elevation drawing (rail, window, pendant, door frame) crossing two seams | from top-left of column 1 to 78% width, 8%–88% height | static (hero has no reveal); the drawing stays still while the photos parallax | `assets/images/elevation-room.svg` (drawn by us) |
| 3 | Stacked caps section list at the left | Same stacked list: Ranges, Colour Mixing, Wallpaper, Order & Collection, Journal, About, Visit | top-left, x 40px, y 40px, 46px pitch (≥1024px); mobile: "Menu" button top-right | none | — |
| 4 | Centred light wordmark | H1 "TOSO PAINTS", Instrument Sans 400, `clamp(2.25rem, 4.4vw, 4rem)`, letter-spacing .12em, `#F2F4F0`; under it 0.875rem line "Paint and wallpaper, matched to your room · Rotterdam since 2009" | centred in the middle column, vertical centre at 50%; mobile centred across the three columns (grid overlay, not absolute) | none | — |
| 5 | Pale top-right button + fixed bottom-centre outline button | Outline "Book a colour match" top-right (240×50, 1px `rgba(242,244,240,.3)`), plus the same button fixed bottom-centre 42px from the bottom on every screen at ≥782px; cart link left of the top button | top-right 40px; fixed bottom-centre | hover fill `rgba(242,244,240,.08)` .4s `cubic-bezier(.16,1,.3,1)` | — |
| 6 | (Fredrik) date + notice chip bottom-left | Outline chip: "SAT 10:00" cell + "Swatch table every Saturday, 10:00–13:00 →" | bottom-left, x 40px, bottom 40px (desktop); mobile: in flow directly under the hero, full width | none | — |

Not allowed: replacing the three photos by one, dropping the drawing, moving the nav into a horizontal bar on desktop, or saying "adapted, not copied" to drop the scene.

---

## 3. Home page

### First screen (1440×900)
- Hero = KV checklist above. Ground behind seams/frame `#1A211C`. Photos are graded low-key; overlay on each column `rgba(26,33,28,.18)`; the middle column additionally `radial-gradient(closest-side, rgba(26,33,28,.35), transparent)` behind the wordmark.
- Header overlay (transparent), nav stacked left, cart + outline button top-right. On Home, the site title is visually hidden in the header (the H1 wordmark is the brand); inner pages show the site title.
- Forbidden on the first screen: table, form, search box, any filled saturated button, side rail, vertical type, text in absolute-positioned labels on mobile.
- Saturated share target ≤ 5%, gate **≤ 8%** (reference measured 1.3%, `tok(a)`; row cap 30%). Moss on the painted wall must stay muted (photo grade), accent only in 1px rules and a dot.

### Block order
| # | Pattern | Purpose | Layout and photos | Copy (en) |
|---|---|---|---|---|
| 1 | `front-hero` | KV, brand | three columns H1 H2 H3, drawing, wordmark, chip (§2) | ~25 words |
| 2 | `front-statement` | brand idea (narrative 1) | **T2** on `#1A211C`: headline "A colour is chosen / against the room, not the chip."; label "ABOUT"; paragraph from 50%; right-half image **S4** `match-phone` (customer holding three wallpaper samples beside a phone photo of the wall) | 70-word paragraph |
| 3 | `front-ranges` | what the shop stocks | pale ground `#E8ECE8`: **T4** strip (label RANGES + divider + P1, P3, P5, P6 round thumbs with names and circle arrows), then 80px gap, then the caps **marquee** full-bleed | 4 names + marquee line |
| 4 | `front-chapters` | Paint / Paper / Mix | **T3**, three sticky full-bleed chapters C1, C2, C3, counters 01–03 | 3 × 35 words |
| 5 | `front-catalogue` | spec-catalogue (the row's page structure) | pale ground `#E8ECE8`, ink text. Label "STOCK LIST" + slanted underline, H2 "What is on the shelf, / and what it costs." (3rem). Full-width table, 6 rows (§0 price list): columns Range · Finish · Size · Coverage · Price. Hairline rows `1px rgba(26,33,28,.15)`, row height 72px, price right-aligned `white-space: nowrap`, tabular numbers. Under it: "Sample pots of any colour, €6. In-home colour match €45, deducted from orders over €200." + circle-arrow link "All ranges" | ~60 words |
| 6 | `front-mixing` | how a colour is mixed (narrative 2) | dark ground. **Fredrik offset rows (asymmetric)**: left, photo **S8** `drawdown` 3:4 at columns 1–6 (top aligned with the heading); right columns 8–12, offset down 160px: H2 "How a colour / is mixed." + the 4 process rows as **ruled rows** (1px rule between, each row: "01" 0.8125rem / title 1.25rem / one sentence 1rem; no boxes, no icons). Caption under the photo in Fredrik's 3-line form: "Drawdown card" (1.0625rem) / *dried 20 minutes, checked by the window* (0.8125rem italic) / "Recipe kept on file" (0.875rem) | ~110 words |
| 7 | `front-order` | order and collection, hours (narrative 3) | dark ground, **mirrored offset row**: left columns 1–5: label "ORDER & COLLECTION", H2 "Ready in two hours, / or at your door tomorrow." (3rem), 2 short paragraphs, then a ruled 2-column hours list (Tue–Fri 09:00–18:00 / Sat 09:00–17:00 / Sun–Mon closed) and the delivery line (€9, free over €150); right columns 7–12 offset down 120px: photo **S9** `collect` 4:5 with the 3-line caption "Click and collect" / *mixed paint ready in 2 hours* / "Free" | ~90 words |
| 8 | `front-journal` | journal | dark `#232B25` raised panel band. Label "JOURNAL" + slanted underline; 3 latest posts as **rows** (not cards): each row = 1px top rule, date (0.8125rem) at col 1–2, title (1.375rem) at col 3–8, thumbnail 4:3 160px wide at col 10–12 right; posts 1–3 = S11, P4, S10 | Query Loop, 3 |
| 9 | `front-visit` | close / CTA | `#1A211C` with `elevation-detail.svg` drawn large (opacity .35) across the full width behind; centred-left text: label "VISIT", H2 "Bring a photo of the wall." (4rem, the only other xx-large heading), address + hours 1 line, outline button "Book a colour match" (240×50) + text link "Directions" | ~35 words |

English home ≥ 300 words; narrative paragraphs in blocks 2, 6 and 7 (≥3). CJK home ≥ 500 characters.

Home photo positions (16, no repeats): H1, H2, H3 · S4 · P1, P3, P5, P6 · C1, C2, C3 · S8 · S9 · journal S11, P4, S10.

### Comparison with the four most recent themes
| # | Kataribe Partners | Yanagi Hygiene | Kaban Luggage | Kogarashi Inn | **Toso Paints** |
|---|---|---|---|---|---|
| 1 | hero + docked card row | skyline-foot hero | dark macro hero | overhead table hero + clock | **three equal photo columns + room line drawing + stacked nav** |
| 2 | brief | wash intro | dark trip scene | house-log lines | **ruled statement band (paragraph at 50%, right-half image)** |
| 3 | fit tick-cells | section drawing with pills | paper counter | day stamps | **round-thumb range strip + caps marquee** |
| 4 | week strip | plans | parts chapters (vertical titles, photo pair) | rooms | **sticky full-bleed chapters with 01 \| 03 counter** |
| 5 | blue numbers band | sticky bottom request bar | ink fitting band | table | **stock-list table (spec catalogue)** |
| 6 | stories | — | workshop price list | people | **offset mixing row + ruled process rows** |
| 7 | retainers | — | — | rates + booking | **mirrored offset order row + hours** |
| 8 | — | — | — | — | **journal rows** |
| 9 | — | — | — | — | **visit close over large line drawing** |

Why not alike: no docked cards, tick-cells, pills, building section drawing, vertical titles, photo pairs, clock or day stamps. Kaban's chapters are a 65/35 abutting photo pair with vertical titles on paper; ours are framed full-bleed sticky photo panels with a horizontal 5rem word and a counter. Kaban's price list is a workshop list late on the page; ours is a stock catalogue table in block 5 that is the page's structural centre (spec-catalogue). Kogarashi's hero is one overhead photo with a clock; ours is three columns with a line drawing.

---

## 4. Inner pages (9 pages + store templates; no sidebar)

Every page: T1 framed photo head (or the 220px drawing band where noted) → T2 statement band → body → close line with outline circle arrow (to Visit).

1. **Ranges / Shop** (`archive-product.html`, `taxonomy-product_cat.html`, `product-search-results.html`): head S10, H1 "Ranges". T2: "Two kinds of shelf: / paint and paper." T4 strip (Paint, Wallpaper, Sample Pot). Two T3 chapters Paint (C1) / Paper (C2), counter 01 | 02, each followed by its products. Product cards: image 1:1 on `#232B25`, radius 0, Fredrik 3-line caption (name 1.0625rem / *finish italic 0.8125rem* / price 0.875rem) with a 20px outline circle arrow after the name; grid 3 columns desktop, every second column offset down 80px (Fredrik offset rows, asymmetric masonry), 2 tablet, 1 mobile (no offset). Add to cart = text link with arrow. Without WooCommerce: static stock table (Home block 5 pattern) and a note.
2. **Single product** (`single-product.html`): 220px drawing band. Two columns: gallery 1:1 left (7/12), summary right: label = category with slanted underline, title 3rem, price 1.375rem nowrap, finish / size / coverage as a ruled 3-row spec list, quantity + "Add to basket" (filled `#F2F4F0` text `#1A211C`, radius 0, 50px tall), line "Ready to collect in 2 hours · Delivery in Rotterdam €9, free over €150". Below: T2 band with the description; related products as a T4 round strip.
3. **Colour Mixing** (`page-colour-mixing`): head S12, H1 "Colour Mixing". T2 "Bring the room in. / We mix it to match." 4 process rows (§0), each a full-width ruled row with a counter "01 | 04" at left, title, two sentences; photo S8 in the right half beside rows 2–3 (offset). Then "Three rooms we matched" = 3 stories (§0) as ruled rows with one image each (S4, S11, P3). Services lines: counter match free, sample pot €6, in-home visit €45.
4. Wallpaper page (`page-wallpaper`): head C2, H1 "Wallpaper". T2 "Paper is ordered by the roll / and the batch." T3 three chapters **Measure / Order / Hang** with P5, P6, S9 as the photos (counter 01 | 03). Roll sizes from §0, the rule "order every roll from one batch, plus one spare", ordered-in time 3–5 working days; Tomás's hanging advice in 3 paragraphs.
5. **Order & Collection** (`page-order-collection`): head S9, H1 "Order & Collection". T2 with the 2-hour line. Full-width **price and services table** (6 products + 3 services; ≥782px full content width, price column right, nowrap). Ruled lists: collection, delivery, ordered-in wallpaper, returns of unopened stock within 14 days (mixed paint is not returnable; state plainly).
6. **About** (`page-about`): head S10, H1 "About". T2 founder statement (Ines, 2009). One T3 chapter "Since 2009" over S11, counter 01 | 01. **People as a ruled list** (7 rows: name 1.25rem / role 1rem / one sentence), photo S12 in the right half beside the list (no portrait grid). A day at the shop paragraph (contract: brand.md "day").
7. **Journal** (`home.html`, `archive.html`, `tag.html`, `category.html` via archive, `single.html`): 220px drawing band, H1 "Journal". T4 category strip (Mixing, Wallpaper, Shop notes). Posts as rows (Home block 8 style) with 4:3 thumbnails; single: T2 rule under title, featured image full content width 16:9, text column 680px, body 1.125rem/1.8.
8. **Visit / Contact** (`page-contact`): head S10 (different crop, focus right), H1 "Visit". T2 paragraph = address, hours, phone, email; outline button "Book a colour match" (mailto). Directions as plain text (tram 8 to Verfstraat, 2-minute walk); no map embed. No form required.
9. **Newsletter** (`page-newsletter`, screens.newsletter may point to the journal list): one T2 band explaining the monthly colour note, an email field rendered by core blocks or a mailto link.
10. **Cart / Checkout / My account / Order confirmation**: 220px drawing band, ink page `#1A211C`, totals column `#232B25`, filled buttons `#F2F4F0` on dark; notices with 2px `#D9A66A` left rule. **404 / search**: drawing band + circle arrow home.

Page set for theme-meta `pages`: home, about, news (journal posts page), article (single post), category, tag, newsletter, contact; plus colour-mixing, wallpaper, order-collection, shop.

---

## 5. Colour (from Open Rise `tok(a)`; moss hue from the row)

| Role | Hex | Source token | Use | Share |
|---|---|---|---|---|
| Ground (moss ink) | `#1A211C` | `tok(a)` ground `#121418` (HSL L 8.2%) shifted to the row's moss hue at L 11.6% (+3.4%, within ±5%) | page ground, seams, frame | ~55% |
| Raised panel | `#232B25` | `tok(a)` raised panel `#20222A` (L 14.5% → 15.3%) | journal band, cart totals, product image ground | ~8% |
| Moss (brand) | `#3A4A3E` | design-plan row palette "miru-iro" (sea-pine moss) | buttons hover on pale, active tick on pale, focus ring, footer band | ≤ 5% |
| Pale cool ground | `#E8ECE8` | Fredrik ground `#F4F4F4` (−4% L, moss tint) — Open Rise has no light section; needed for the readable stock table | ranges strip, catalogue table | ~15% |
| Text on dark | `#F2F4F0` (body at 80% alpha) | `tok(a)` `#FFFFFF`, body ~80% alpha | type | — |
| Text on pale | `#1A211C` | ground | type | — |
| Hairline | `rgba(242,244,240,.2)` / on pale `rgba(26,33,28,.15)` | `tok(d)` | rules | — |
| Accent: lamp brass | `#D9A66A` | `tok(a)` warm window light `~#D9A66A` | marquee dot, active nav underline, notice-chip date cell rule, 2px notice rule | < 2% |

- Change from stage A: the accent is `#D9A66A` (reference window light) instead of clay `#B4654A`, to stay at the reference value.
- Contrast: `#F2F4F0` on `#1A211C` ≈ 15:1; 80%-alpha body ≈ 11:1; `#1A211C` on `#E8ECE8` ≈ 14:1. Accent is never used for text smaller than 1.25rem.
- Not beige/cream. First-screen saturated share ≤ 8% (gate), target ≤ 5%.

## 6. Type (font_direction: sans)

- **Latin display and headings:** Instrument Sans (OFL) 400 / 500. **Latin body:** Onest (OFL) 400 / 500. Both bundled as woff2 via theme.json `fontFamilies` + `fontFace` (Latin subset), so the editor iframe and the front end load the same files.
- **zh-TW:** headings `"Instrument Sans", "Noto Sans TC", sans-serif` (Noto Sans TC 400/500 bundled zh-TW subset via fontFace); body `Onest, "PingFang TC", "Microsoft JhengHei", "Noto Sans CJK TC", sans-serif` (no bundled zh font, no Japanese font in the body stack — repo contract).
- **ja:** headings `"Instrument Sans", "Noto Sans JP", sans-serif` (bundled ja subset via fontFace); body `Onest, "Hiragino Sans", "Hiragino Kaku Gothic ProN", "Yu Gothic", "Noto Sans CJK JP", sans-serif`.
- Gothic (hei) sans only; never a Mincho / Ming font. CJK heading sizes ≈ 0.75× English, body line height 1.85; fr/de `hyphens: auto`. Subsetting: use the Hokuto / Hada workaround (the zh subset script is known broken). `:lang()` rules → copy `shared/inc/editor-lang.php` and require it.

| Preset | Size | Use | Source |
|---|---|---|---|
| small | 0.8125rem | captions, counter total, meta | Open Rise 10px captions, raised for legibility |
| base | 1.125rem / lh 1.8 | body | `tok(b)` 18px / 32.4px |
| medium | 1.375rem | row titles, price | — |
| large | 2rem | single post / small heads | — |
| x-large | 3rem | inner H1, section H2 | — |
| xx-large | 4rem / lh 1.3 | statement headline, visit close | `tok(b)` 64px h2, lh 1.6 tightened for Latin |
| huge | 5rem / lh 1, ls -0.005em | T3 chapter words (max size, ≥ 4.25rem ✓) | `tok(b)` 80px/80px, -0.4px |
Labels / nav: 1rem uppercase, letter-spacing .04em, weight 400 (`tok(b)` 16px uppercase). Weights: headings 400 (chapter words, statement), 500 for marquee and product names. Use `clamp()` on huge/xx-large: huge `clamp(3rem, 5.6vw, 5rem)`, xx-large `clamp(2.25rem, 4.45vw, 4rem)`.

## 7. Spacing, shapes, images (with source tokens)

- Section padding 120px top/bottom desktop (`tok(c)` 80–144px), 72px mobile. Side margin 40px desktop, 20px mobile; content full-bleed minus margins (1360 at 1440).
- Radius **0** everywhere except round thumbnails (50%) and the circle arrows (`tok(d)`).
- Hairlines 1px `rgba(242,244,240,.2)`; outline buttons 240×50, 1px `rgba(242,244,240,.3)`, Instrument Sans 0.875rem; no shadows (`tok(d)`).
- 6px frame round hero, chapter panels and inner heads (`tok(c)`).
- Image ratios: hero columns 2:3 crops (fill height), chapter photos 16:9 full-bleed, statement image 1.39:1, offset-row photos 3:4 and 4:5, product 1:1, journal thumbs 4:3 (`tok(e)`: 1.6:1 hero, 3:4 chapter, Fredrik 1:1 / 3:4 / 4:3).
- Slanted underline: 55px × 1px, rotate(-3deg), 12px below the label (`tok(f)`).
- Notice chip: 1px `rgba(242,244,240,.4)` outline, height 34px, date cell 0.75rem with right 1px divider, message 0.8125rem, trailing 16px circle arrow (`tok(f)` Fredrik).
- Header: overlay on all pages; after 100px of scroll the stacked nav does **not** follow (it scrolls away like Open Rise); only the fixed bottom-centre button stays.

## 8. Scroll effects (sp-scroll; 3 kinds; hero only parallax)

Global CSS variables: `--sp-dist: 24px` (Fredrik ~24px rise), `--sp-dur: .7s` (Open Rise split text 0.7s), `--sp-ease: cubic-bezier(.16,1,.3,1)` (Open Rise expo.out / CSS hover curve, `tok(g)`).

| Effect | sp-* class | Where | Source and timing |
|---|---|---|---|
| Parallax | `sp-parallax` | hero columns (each column Group > figure > img), T3 chapter Covers, inner page head photos | Open Rise image scale-in 1–1.5s expo.out + pinned scrub → CSS scroll-driven parallax, layer scale 1.18 |
| Rise + stagger | `sp-stagger` on the parent, `sp-reveal sp-reveal--up` on children | T2 statement band (headline, label, paragraph, image = 4 children), mixing process rows (4), journal rows (3), people rows on About | Open Rise split-text stagger 0.03–0.1s, 0.7s power2.out, start "top bottom-=25%"; Fredrik rows rise ~24px ease-out; sp-stagger steps 0.12s |
| Marquee | `sp-marquee` | Home block 3 caps statement (duplicate inner group `aria-hidden`) | Fredrik CSS ticker, continuous linear; 30s linear (sp-scroll default) |

Not animated: hero (no reveal), tables (catalogue, price), forms, legal text, marquee children, T4 strip thumbnails. Reveal count ≤ 60% of home blocks. Lenis smooth scroll and the preloader counter are not reproduced (rules).

### Parallax (required)
- **Hero:** each of the three columns is a Group `sp-parallax` with a direct `figure > img`. `--sp-par`: H1 **6%**, H2 **10%**, H3 **8%**; mobile (≤781px) **4% / 6% / 5%**. Foreground (wordmark, drawing, nav, chip) is outside the moving layers and stays still. Reference: Open Rise hero image scale-in and Lenis-smoothed scroll.
- **Chapters:** each T3 Cover `sp-parallax` with `--sp-par: 10%` (mobile 6%), background C1 / C2 / C3; chapter word and counter are foreground. Reference: Open Rise pinned chapter image swap (scrub).
- **Inner heads:** `sp-parallax`, `--sp-par: 8%` (mobile 5%).
- reduced-motion / `?sp-static` / editor: no movement. Verified by `check-parallax.mjs` (≥6px desktop and mobile).

## 9. Responsive rules

- **390px first screen:** three columns stay (each ≈ 122px wide), hero 78svh; wordmark centred across all three via a CSS grid overlay (same grid area as the columns, not `position:absolute`), max 2 lines; the elevation drawing is kept (scaled, `preserveAspectRatio="none"` off; it may crop); the stacked nav is replaced by the core Navigation overlay "Menu" button top-right and site title top-left; the notice chip moves in flow under the hero; the fixed bottom button is hidden below 782px (a "Book a colour match" outline button appears after the chip). **No vertical text, no absolutely positioned labels over text.**
- Statement band: single column below 782px; paragraph full width; image full width.
- Chapters: no sticky below 782px; word `3rem`; counter stays bottom-left in flow.
- Offset rows: offsets removed below 782px; photo first, text second.
- **Tables:** at ≥782px the catalogue and price tables are full content width (`width:100%`, `table-layout: auto`), price column `text-align:right; white-space:nowrap`, never cut or scrolled (check at 800 and 1280). Below 782px every table becomes stacked rows (each row a block: range name on its own line, then "Finish · Size · Coverage", price right on the name line), no horizontal scroll.
- No horizontal overflow at 390 and 1280 (marquee uses `overflow: clip`).

## 10. Images (18; one STYLE string; Grok, one at a time, read each)

IMAGERY = **photo** (Open Rise is photographic; low-key per the row's photo_direction, which overrides the generic high-key default).

STYLE (exact string for every image):
`photorealistic low-key documentary photograph, 35mm lens, soft side light from a single tall window on the left, deep moss green and charcoal shadows, matte surfaces, shallow depth of field, muted desaturated palette of moss, slate grey, chalk white and a touch of warm brass lamp light, modern international paint and wallpaper shop or apartment interior, diverse adults, candid, no text, no letters, no numbers, no labels on tins, no logos, no brand marks, no signage, no Japanese elements`

| ID | File | Subject / composition | Ratio | Where (never twice on one page) | Home |
|---|---|---|---|---|---|
| H1 | hero-wall | an interior wall half-painted in muted moss, upper half old chalk white, roller tray and roller on a dust sheet at the skirting, window light from the left | 2:3 | Home hero col 1 | ✓ |
| H2 | hero-paper | a shop clerk's hands unrolling a textured wallpaper sample across a dark wooden counter, two more rolls beside, face out of frame | 2:3 | Home hero col 2 | ✓ |
| H3 | hero-tin | an open plain metal paint tin of freshly mixed moss paint on a canvas dust sheet, wooden stirring stick across the rim, drops on the lid | 2:3 | Home hero col 3 | ✓ |
| S4 | match-phone | a customer holding three wallpaper samples fanned beside a phone whose screen shows a photo of a plain green wall (no interface text), clerk's hand pointing at one sample | 1.39:1 | Home statement; Colour Mixing story 1 | ✓ |
| C1 | chapter-paint | dim room, a person mid-stroke with a long roller on a moss wall, seen from behind at an angle | 16:9 | Home chapter Paint; Shop chapter Paint | ✓ |
| C2 | chapter-paper | hands smoothing a fresh wallpaper drop with a wide brush, seam line visible, low light | 16:9 | Home chapter Paper; Shop chapter Paper; Wallpaper head; Journal post 4 | ✓ |
| C3 | chapter-mix | close view of a tinting machine nozzle releasing a thin stream of colourant into an open white can, brass light | 16:9 | Home chapter Mix | ✓ |
| S8 | drawdown | painted drawdown cards in greens and greys drying on a slim rack by a window | 3:4 | Home mixing; Colour Mixing rows; Journal post 5 | ✓ |
| S9 | collect | a counter with plain paper-wrapped tins and two wallpaper rolls tied with string, ready for collection | 4:5 | Home order; Order & Collection head; Wallpaper chapter Hang | ✓ |
| S10 | shop-wall | wide view of the shop interior: wall of plain unlabelled tins on shelves and racks of rolls, one person browsing | 16:9 | Home journal row (post 3); Shop head; About head; Visit head | ✓ |
| S11 | swatch-table | Saturday swatch table: three people of different ages painting small sample boards at a long table | 4:3 | Home journal row (post 1); About chapter; Colour Mixing story 2 | ✓ |
| S12 | mixing-counter | two staff at the mixing counter, one holding a handheld colour reader against a fabric swatch, the other writing a recipe card (no legible writing) | 4:5 | Colour Mixing head; About people | |
| P1 | product-matt | plain unlabelled 2.5 L metal tin, lid off, moss matt paint, on dark slate surface, centred packshot | 1:1 | product House Matt; Home strip | ✓ |
| P2 | product-eggshell | plain 1 L tin with a small angled brush across the top, satin grey-green paint | 1:1 | product Eggshell; Journal post 6 | |
| P3 | product-limewash | plain 2.5 L tin beside a sample board with a cloudy lime-wash finish | 1:1 | product Lime Wash; Home strip; Colour Mixing story 3 | ✓ |
| P4 | product-sample | four small 100 ml glass sample jars of different greens and greys in a row | 1:1 | product Sample Pot; Home journal row (post 2) | ✓ |
| P5 | product-linen-paper | a roll of linen-weave wallpaper partly unrolled, texture visible | 1:1 | product Linen-Weave; Home strip; Wallpaper chapter Measure | ✓ |
| P6 | product-grasscloth | a roll of natural grasscloth wallpaper standing on end, fibres visible | 1:1 | product Grasscloth; Home strip; Wallpaper chapter Order | ✓ |

Rules: no cutouts (0 transparent images), each ≤ 300 KB and ≤ 2000px, readme.txt line per image (AI-generated). Read every image: regenerate if any text, letters on tins, logos, broken hands/faces, or high-key look appears. The two SVG drawings (`elevation-room.svg`, `elevation-detail.svg`) are hand-written line art by the implementer and are not counted as photos.

Journal posts (6, in this order, each with category + tags): 1 "What happens at the Saturday swatch table" (S11, Shop notes), 2 "Why we sell a sample pot before a tin" (P4, Mixing), 3 "One green, two rooms: north light and south light" (S10, Mixing), 4 "Hanging the first drop straight" (C2, Wallpaper), 5 "Drawdown cards, and why we wait twenty minutes" (S8, Mixing), 6 "Eggshell on old skirting" (P2, Shop notes). Journal index shows six different images.

## 11. Similarity table (target ≈ 80% to Open Rise; Fredrik for strip/marquee/rows)

| Dimension | Reference value | Toso value |
|---|---|---|
| Ground | `#121418`, ~100% of scroll area | `#1A211C` (+3.4% L, moss hue), ~70% of the page (pale bands for the table) |
| Raised panel | `#20222A` | `#232B25` |
| Text | `#FFFFFF`, body 80% alpha | `#F2F4F0`, body 80% alpha |
| Accent | warm window light ~`#D9A66A`, <2% | `#D9A66A`, <2% |
| First-screen saturated share | 1.3% | ≤ 5% target, ≤ 8% gate |
| Display type | humanist sans 400, chapter 80px / lh 1, -0.4px | Instrument Sans 400, 5rem / lh 1, -0.005em |
| Statement h2 | 64px / lh 1.6 | 4rem / lh 1.3 (Latin) ; CJK lh 1.6 |
| Body | 18px / lh 1.8 | 1.125rem / lh 1.8 (CJK 1.85) |
| Nav | 16px uppercase, stacked, 46px pitch, top-left 40px | identical |
| Section padding | 80–144px | 120px |
| Side margin | 40px, full-bleed container | 40px, full-bleed container |
| Statement layout | headline, rule +60px, label left, paragraph at 50%, image right half | identical |
| Slanted underline | ~55px, -3deg | 55px, -3deg |
| Frame | 6px dark frame round chapters | 6px round hero, chapters, inner heads |
| Radius / shadow | 0 / none | 0 / none (round thumbs 50%) |
| Buttons | 240×50 outline, 1px .3 alpha, fixed bottom-centre | identical |
| Hero image | one full-bleed photo 1.6:1, low-key dusk | three equal low-key photo columns (row's three-equal-columns), full-bleed |
| Line drawing | white 1px ~50% wires over top-left | white 1px 50% room elevation over top-left → 78% |
| Chapter pager | 03 \| 03 counter, 3 ticks | 01 \| 03 counter, 3 ticks |
| Chapter photo | right half 3:4, pinned | full-bleed 16:9, sticky stacking (no 50/50) |
| Reveal | 0.7s power2.out, stagger 0.03–0.1s, start bottom-25% | `.7s cubic-bezier(.16,1,.3,1)`, stagger .12s, 24px |
| Image motion | scale-in 1–1.5s expo.out + scrub | sp-parallax 6–10%, scale 1.18 |
| Category strip (Fredrik) | round thumbs ~48px + outline circle arrows | 72px round thumbs + 20px outline circle arrows |
| Marquee (Fredrik) | ~90px grotesque 700 caps, linear | `clamp(3rem,6.25vw,5.625rem)` Instrument Sans 500 caps, 30s linear |
| Offset rows (Fredrik) | name / italic material / price captions | identical caption form on mixing, order, shop cards |
| Notice chip (Fredrik) | date cell + message, 1px outline, bottom-left | identical, "SAT 10:00 · Swatch table…" |

Photos and copy are our own; no reference assets, text or logos.

## 12. Home acceptance checklist

1. First screen at 1440×900: three equal full-height low-key photo columns with 6px seams and frame; white 1px room-elevation drawing at 50% opacity crossing ≥2 seams; stacked caps nav top-left (7 items, 46px pitch); centred "TOSO PAINTS" wordmark; outline "Book a colour match" top-right and fixed bottom-centre; notice chip bottom-left. No table/form/search/vertical type.
2. 390×844: three columns kept, wordmark centred in a grid overlay, no overlapping text, no absolute labels, Menu button, chip in flow under the hero.
3. `check-first-screen.py` saturated share ≤ 8%.
4. T2 band: headline 2 lines 4rem, full-width rule, label with -3deg underline, paragraph starting at 50%, image S4 in the right half only.
5. T4 strip with 4 round 72px thumbnails and outline circle arrows; marquee of giant caps moving (static in `?sp-static`).
6. T3: three framed full-bleed chapters Paint / Paper / Mix, 5rem word, 3 ticks, "01 | 03"… counters; sticky stacking ≥782px.
7. Stock table full width at 800 and 1280, price column right, nowrap, not cut; stacked on mobile; the 6 prices equal §0.
8. Mixing and order blocks are offset (asymmetric) rows with 3-line Fredrik captions; process = 4 ruled rows (no step boxes, no icons).
9. 16 photo positions, no repeats, all from §10; journal rows show S11, P4, S10.
10. Colours per §5; accent only in small marks; no beige/cream.
11. `check-parallax.mjs`: hero and chapter parallax ≥6px on desktop and mobile, 0 with reduced motion; ≥3 reveals hidden before entry and visible after; nothing transparent after scrolling to the end.
12. Fonts: Instrument Sans + Onest; zh-TW/ja Noto Sans TC/JP headings via theme.json fontFace, same in editor and front end; max preset 5rem.
13. Numbers (prices, hours, 2 hours, 15:00, €9 / €150, €45 / €200, 20 minutes, 2009, Verfstraat 18) identical on Home, inner pages and all five languages.
14. Home ≥ 300 English words, ≥ 3 narrative paragraphs; `auto-gates.mjs` pass.
