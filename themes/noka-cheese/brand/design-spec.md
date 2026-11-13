# Noka Cheese: design spec (stage 1 spec, binding for implementation)

Row b31-4 · slug `noka-cheese` · type **store** (WooCommerce required, cart and checkout must work; pickup only, no shipping) · archetype card-mosaic · hero text-left-photo-right · nav split · first_screen centered-narrow-column · page_structure spec-catalogue · industry: independent cheese shop · five languages en, zh-TW, ja, fr, de · font_direction **sans** · IMAGERY **photo** (high-key) · form contract **v1** (steps/form-contract-v1 exists).

Reference (only one): **https://cheesetart.com/** (cheese-confectionery brand, S5-Style gallery). Screens `brand/ref/ct-first.png` (blur intro), `ct-s900.png` (pebble + statement), `ct-s1800.png`, `ct-s2700.png` (pebble rim + "Commitment" label), `ct-s6300.png` (product grid + sticky pebble), `ct-s8100.png`, `ct-s10000.png` (paper band + arch), `ct-s12000.png` (news), `ct-s14000.png`. Measured values in `brand/reference-tokens.md`, cited as RT(a)…RT(g).

What we take: the flat pale tinted ground with three full-height dotted guides and the fixed double-line glyph; the asymmetric **double-rim pebble** photo mask; the stacked wordmark + outline line-drawing glyph resolving from blur; the product grid of small 3:2 thumbs in the left cell beside a sticky pebble; the warm paper band with a tall **arch** holding the outline glyph; white pills (2 px border, radius 24.8 px); line-by-line text rise. What we never take: their photos, copy, logo glyph, tart products, Japanese text, the page as a whole. Our glyph is our own drawing of a washed-rind wedge.

---

## 0. Fixed brand facts (identical on every page, in every language; brand.md must match)

- **Name:** Noka Cheese. Independent cheese shop with one counter and a small ageing cellar under it. Founded **2014**. About **60 cheeses** on the counter at any time, kept in **6 styles**.
- **Location (fictional, neutral):** Old Dairy Yard, 9 Tannery Lane, Brookmere. Phone **+00 21 4418 2290**, email **counter@nokacheese.example**.
- **Hours:** Tue–Fri **10:00–19:00** · Sat **09:00–17:00** · Sun **10:00–14:00** · Mon closed. Board pickup from **11:00**; reserve by **18:00 the day before**.
- **One CTA wording (everywhere):** **"Reserve a board"** → `/boards/` (product category in the shop). Secondary link wording only: "Visit the counter" → `/visit/`.
- **People (7):**
  1. **Noa Kessler**, founder and head monger (since 2014) — washed rinds, buys every wheel herself.
  2. **Elif Arslan**, cellar keeper — turns, brushes and washes the wheels at **11 °C / 92 %** humidity.
  3. **Tomás Reyes**, counter monger — alpine and long-aged hard cheeses.
  4. **Grace Owusu**, boards and Saturday tastings.
  5. **Henrik Dahl**, sourcing — visits the four makers twice a year.
  6. **Mei Chou**, counter and wrapping, weekends.
  7. **Samuel Adeyemi**, orders and pickups — confirms every reservation by email.
- **How a wedge is chosen (3 steps, used on home #6 and /how-we-cut/):**
  - **01 Taste** — tell us what it is for; we cut a sliver of two or three on the knife tip.
  - **02 Cut** — washed and soft rinds with the wire, hard wheels with the two-handled knife; weighed in front of you, **150 g** is a good wedge for two.
  - **03 Wrap** — two-layer cheese paper, name and date written on the fold, a line on how to keep it.
- **Styles kept (6 cards; price per 100 g; same on home #4, /cheeses/ and all languages):**
  | # | Style | Milk / rind | Note (one line) | From |
  |---|---|---|---|---|
  | K1 | Fresh & lactic | cow or goat, no rind | bright, made this week | €3.20 / 100 g |
  | K2 | Bloomy | cow, white rind | ripened 4–6 weeks, soft to the edge | €4.40 / 100 g |
  | K3 | Washed rind | cow, orange rind | washed in brine twice a week in our cellar | €4.90 / 100 g |
  | K4 | Alpine | raw cow, hard | 12–18-month mountain wheels, nutty | €4.60 / 100 g |
  | K5 | Blue | sheep or cow | cut from the wheel, never pre-packed | €4.80 / 100 g |
  | K6 | Goat & sheep | natural or ash rind | small farms, seasonal | €5.40 / 100 g |
- **Price list (6 items; same table on home #8, /boards/, shop products, all languages):**
  | Item | What is in it | Price |
  |---|---|---|
  | Counter board for two | 3 cheeses, 300 g, bread, quince paste | €26 |
  | Table board for four | 5 cheeses, 600 g, bread, quince, pickles | €48 |
  | Long board for eight | 7 cheeses, 1.2 kg, two breads, quince, honey | €92 |
  | Monger's three wedges | 3 × 150 g chosen at the counter, wrapped | €22 |
  | Cheese of the month | one 250 g wedge of the month's washed rind | €12 |
  | Saturday tasting | 45 min, 6 cheeses, max 8 people, per person | €18 |
- **Saturday tastings:** **10:30** and **15:00**, 45 minutes, 6 cheeses, max **8** people, led by Grace Owusu.
- **Makers (stories, 4; fictional):** **Hollin Ridge Farm** (goat, fresh and ash logs, kidding in spring) · **Ostra Creamery** (two cheesemakers, small washed-rind wheels finished in our cellar) · **Vell Alpine Cooperative** (summer-pasture wheels, 18 months) · **Lowmere Sheep Dairy** (one blue, made October–May).
- **A day (brand.md must contain "day"):** 07:30 Elif turns and brushes the cellar wheels · 09:30 the counter is set, wires checked · 10:00 doors open · 11:00 board pickups start · 14:00 Samuel confirms tomorrow's reservations · 18:00 reservations close for the next day · 19:00 every cut face is re-wrapped and the counter cleared.
- **Numbers that recur:** 2014, 60 cheeses, 6 styles, 7 people, 150 g, 11 °C / 92 %, 18:00 the day before, pickup from 11:00, €26 / €48 / €92 / €22 / €12 / €18, tastings 10:30 and 15:00, 4 makers. Identical in all five languages (currency stays €).

---

## 1. Signature techniques (three + one supporting; all obvious at a glance; never "softened")

### T1. Double-rim pebble photo (source: cheesetart.com, ref/ct-s900.png, ct-s2700.png, ct-s6300.png; RT(d)(e))
- **Reference:** every product photo sits in an asymmetric rounded "pebble" mask ≈535 × 540 at 1440 (≈37% of width); a second warm off-white pebble sits offset behind it so a **10–14 px crescent rim** shows on the lower right; no shadow; the pebble occupies the left or right 4/12 between the guides, text in the opposite cell; in the product section the pebble is sticky while the grid scrolls.
- **Ours:** `figure.nk-pebble` (core/image with class) — `border-radius: 58% 42% 47% 53% / 52% 46% 54% 48%; overflow: hidden; aspect-ratio: 1 / 1.01;` the rim is `box-shadow: 14px 12px 0 0 var(--wp--preset--color--rind)` on the same element (follows the radius, gives the crescent bottom-right; it is a solid offset shape, not a blurred shadow). Three radius variants so pebbles differ like the reference's morphing shapes: `--a` above, `--b: 46% 54% 41% 59% / 57% 49% 51% 43%`, `--c: 52% 48% 60% 40% / 44% 58% 42% 56%`. Size: **535 px** at 1440 (`width: min(37.2vw, 535px)`), 420 px on inner page heads, 300 px at 390.
- **Home:** hero (H1 photo, variant a, right cell), #3 statement (H2, variant b, left cell, **sticky** `top: 120px`), #4 styles (S0, variant c, right cell, **sticky**), #7 monger's note (M1, variant a, right cell).
- **Do not dilute:** the rim crescent must be visible (≥10 px at its widest), rim colour `#EBCB94` never white or ground-coloured; the mask must be organic (never a circle, ellipse or plain rounded rectangle); size ≥ 35% of viewport width on desktop; no border, no drop shadow.
- **Inner pages (all content pages):** every inner page head = eyebrow + H1 in the left cell, a 420 px double-rim pebble in the right cell (photos per §4). /cheeses/ also keeps the sticky pebble beside the card grid.

### T2. Dotted three-guide page + fixed double-line glyph (source: cheesetart.com, every screen, ct-s900.png, ct-s6300.png, ct-s12000.png; RT(c)(f))
- **Reference:** three full-page-height 1 px **dotted** white vertical lines at x = 149 / 720 / 1290 at 1440 (10.3% / 50% / 89.6%); every label, heading, paragraph and photo sits on or between them; a 50 × 14 double-line glyph (two 1 px white lines) fixed top-left on the first guide; small sentence-case English eyebrow (12–13 px) above each big heading, starting exactly on the guide.
- **Ours:** on `.wp-site-blocks` (template level, so every page has it): `background-image:` three `linear-gradient(to bottom, #FFFFFF 2px, transparent 2px)` layers, each `background-size: 1px 6px; background-repeat: repeat-y; background-position: 10.3% 0, 50% 0, 89.7% 0;` over the ground colour. Sections with their own ground (paper arch band, parallax band, willow letter band, footer) cover the guides, as the reference's paper band does. Content grid: left cell starts **on** the 10.3% guide (labels flush with the line), right cell text starts at 50% + 5.1vw (x 794 at 1440) and is max **447 px** wide (RT(c)). Double-line glyph: inline SVG 50 × 14, two 1 px lines `#FFFFFF` (stroke 1.5 px for visibility on our lighter ground), in the header at x = 10.3% guide; the header is sticky, so the glyph stays fixed. At <1024 the same glyph is the navigation overlay toggle icon.
- **Do not dilute:** guides must be dotted (not solid, not hairline grid with ticks), exactly three, full page height, visible at 100% zoom; eyebrows must sit on the left guide; no other vertical rules.
- **Inner pages:** all pages (template-level). Spec tables on /cheeses/, /boards/, /tastings/ use dotted 1 px row rules in the same white, echoing the guides.

### T3. Arch closing band (source: cheesetart.com, ct-s10000.png; RT(a)(e)(f))
- **Reference:** after the tinted sections, a warm paper band (`#FBF3E3`); a tall arch (semicircle top, straight sides) filled with the tinted ground, a white rim ≈8 px, holding the outline glyph in white; the arch's bottom is cropped by the band floor; heading and eyebrow at left on paper; white full-width pills with a centred arrow.
- **Ours (`nk-arch` synced pattern):** paper `#FAF5EA` band, height **640 px**, `overflow: hidden`. Arch: `width: 580px; height: 760px; border-radius: 290px 290px 0 0; background: var(--ground); box-shadow: 0 0 0 8px #FFFFFF inset` placed in the right cell at left 54%, top 120 px (its bottom 240 px is cropped by the band floor). Inside the arch, centred 80 px from the top of its straight part: **our wedge glyph** SVG (same drawing as the hero, 300 × 300, stroke 6 px `#FFFFFF`, round joins). Left cell: eyebrow "Visit" (on the 10.3% guide), H2 "One counter. One way to reserve." 2.5rem, a 40-word paragraph, then **two full-width pills** stacked 16 px apart (width 100% of the left cell, max 447 px, height 49.6 px, radius 24.8 px, white fill, 2 px white border, willow text, centred label + 16 px right arrow): "Reserve a board →" (/boards/) and "Visit the counter →" (/visit/).
- **Do not dilute:** the arch must be ≥ 560 px wide and ≥ 500 px visible high, cropped by the floor (never a full rounded card), glyph white on ground; paper band must contrast with the ground (not the same tint).
- **Inner pages:** the same band closes /cheeses/, /boards/, /tastings/, /about/ and /visit/ (on /visit/ the pills read "Reserve a board →" and "Call +00 21 4418 2290").

### T4 (supporting, home hero only). Blur-to-focus first screen (source: cheesetart.com intro, ct-first.png; RT(g))
- Stacked H1, wedge glyph and hero pebble start at `filter: blur(14px); opacity: .4` and resolve to `blur(0); opacity: 1` over **1.4 s** `cubic-bezier(.22,1,.36,1)`, glyph first (0 s), H1 0.15 s, pebble 0.3 s. CSS `@keyframes` in style.css only inside `@media (prefers-reduced-motion: no-preference)` and selector `html:not(.sp-no-motion)`, so `?sp-static`, reduced motion and the editor show the final state. This is not `sp-reveal` (hero has no reveal).

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
- **Draws:** a flat pale periwinkle field filling the whole screen; right of centre a large white outline line-drawing of a cheese-tart wedge (≈400 × 500); lower-left of it a stacked three-line wordmark in white caps, right-aligned against the glyph; everything is blurred and resolves into focus. Scrolling on, a pebble-masked photograph of a tart resting on cream plaster forms appears in the left cell with a cream rim, and short statement lines appear in the right cell.
- **Story:** "say cheese and people picture a yellow wedge with holes — we want to melt that picture into new shapes" (Cheese Metamorphose): an everyday food re-seen, shape by shape.
- **Signature motion:** blur-to-focus intro; statement lines rising one by one (`.e-step`, stagger ≈0.1 s, ≈24 px); pebble masks changing shape as the next product arrives; magnetic hover on links; ground colour changing between sections (1.2 s).

### (2) Our translation (same composition, same motion idea, same image type: high-key photography)
A cheese counter seen up close. On the pale willow field with three dotted guides, our own outline wedge glyph and the stacked headline **"Named. / Cut. / Wrapped."** resolve from blur; in the right cell a double-rim pebble photograph: **at a pale counter, the monger (Noa, sleeves rolled, linen apron) draws a steel cutting wire down through a washed-rind wheel with an orange rind, while a customer on the other side reads a short handwritten list on a small card (no readable writing)**. Story: *we know cheese as a wedge in plastic; here every wedge is named, cut and wrapped for the person standing at the counter.* Motion idea kept: focus resolve on load, statement lines rising in #3, pebbles that change shape from block to block (variants a / b / c) as the next photograph arrives, parallax depth inside the hero pebble.

### (3) KV checklist (all implemented on the home first screen at 1440 × 900 and visible)
| # | Reference element | Our counterpart | Position | Motion | Photo used |
|---|---|---|---|---|---|
| 1 | Flat pale tinted field over the whole screen | Pale willow ground `#DDE3D3` behind header and hero, no band, no gradient | whole first screen | none | — (colour) |
| 2 | White outline wedge glyph, 2 px stroke | Our washed-rind wedge line drawing (inline SVG 380 × 420, stroke 2.5 px `#FFFFFF`, round joins; wedge with a curved rind edge and a wire-cut line) | x 610–990, y 150–570 (straddles the 50% guide), partly behind the pebble's upper-left | blur 14 px → 0, 1.4 s, first | — (SVG) |
| 3 | Stacked three-line wordmark, right-aligned, lower left | H1 "Named. / Cut. / Wrapped." three lines, Albert Sans 600 **4.5rem**/1.0, ink `#2D3324`, right-aligned to x 560 | left cell, x 300–560, y 380–600 | blur → focus, 0.15 s delay | — |
| 4 | Pebble photo with cream crescent rim | Double-rim pebble (T1 variant a) 535 × 540, rim `#EBCB94` 14/12 px | right cell x 790–1325, y 250–790 | blur → focus 0.3 s delay; `sp-parallax` on the img, `--sp-par: 6%` | **H1** `hero-wire-cut` |
| 5 | Three dotted guides + fixed double-line glyph | Guides at 10.3 / 50 / 89.7 %, white 1 px dotted; double-line glyph at x 149, y 44 in the sticky header | full height; glyph top-left | none (glyph stays fixed with the sticky header) | — |
| 6 | Round vertical "Buy & Order" pill at the left edge | Vertical pill "Reserve a board" 50 × 176, white fill, 2 px white border, willow text, `writing-mode: vertical-rl`, links to /boards/ | fixed, x 48, vertically centred in the left margin (0–10.3%) | hover: background `#5F6849`, text white, `translate(2px,-2px)`, .3 s ease (CSS only, no mousemove) | — |

H1 is in the image list (§6) and marked home. Shown only ≥1024 px: #6 (at <1024 the header pill replaces it; no vertical text on mobile).

---

## 3. Home page

### First screen composition (1440 × 900)
- **Header (y 0–88, sticky, ground `rgba(221,227,211,.94)` + `backdrop-filter: blur(6px)`):** split nav (row nav "split"): double-line glyph at x 149; left menu group (Cheeses · Boards · How we cut · Tastings) Instrument Sans 500 0.9375rem ink; **centre wordmark "Noka Cheese"** Albert Sans 600 1.375rem, letter-spacing 0.02em; right group (Makers · Visit · Journal) + language switcher + cart icon (WooCommerce mini-cart, count) + white pill "Reserve a board" (height 40, radius 20). It is **one** core/navigation block split by a flex spacer around the site-title (or two nav groups inside one Navigation block via a centred site-title in a row); exactly one top menu.
- **Hero (y 88–900, ground):** left cell (x 149–720): eyebrow "Cheese counter · Brookmere · since 2014" Instrument Sans 500 0.8125rem, on the guide at y 230; H1 stacked (KV #3) right-aligned to x 560 at y 380–600; under it, also right-aligned to x 560, max-width 360: lead (30 words, Instrument Sans 500 **1.125rem / 2.0**, RT(b) lead 18.6/37.2): "About sixty cheeses in six styles, kept in our own cellar. Tell us what it is for, taste two or three, and we cut a wedge for you." Then a willow pill "Reserve a board →" (height 49.6, radius 24.8, `#5F6849` fill, white text) right-aligned at y ≈ 760, and one text line "Tue–Sun · pickup from 11:00" 0.8125rem muted. Right cell: glyph (KV #2) and pebble H1 (KV #4).
- The narrow column (row first_screen centered-narrow-column) = the 360 px right-aligned text stack in the left cell.
- **Saturated share:** ground S 7%, willow `#5F6849` HSV S 30% (below the 35% gate threshold); only the cheese rind/props inside H1 (~22% of the screen × ≈25% saturated pixels) and the rim crescent count → **expected ≤ 7%**, target ≤ 8%, gate `--max 15` (note cap 30%).
- **Forbidden in the first screen:** table, form, search box, giant centred text, sp-reveal, absolutely positioned labels over the photo, more than one menu.
- **Mobile 390:** header 64 (glyph-as-toggle left, wordmark centre, cart right); guides at 6% / 50% / 94%; eyebrow, H1 **3rem**/1.02 **left-aligned** (not right), lead 1rem/1.85, full-width willow pill; then pebble H1 300 × 303 centred with the glyph scaled to 220 × 243 behind its upper-left (glyph `z-index` below the pebble, never over text); vertical pill hidden. Everything in normal flow; no absolute text, no vertical text.

### Block order (spec-catalogue store; 11 blocks)
| # | Pattern | Purpose | Layout and photos | Copy |
|---|---|---|---|---|
| 1 | `nk-header` | split menu + CTA | above | — |
| 2 | `nk-hero` | KV (T1, T2, T4) | first screen above. **H1** | H1 + 30-word lead |
| 3 | `nk-statement` | narrative: why we cut to order | Ground, padding 250 / 200 (RT(c) section top ~250). Left cell: **H2** `statement-wrap` pebble variant b, **sticky top 120 px** (`position: sticky` on the figure's column). Right cell (x 794, max 447): eyebrow "Commitment", H2 "A wedge, not a packet." 2.5rem 500, then **three narrative paragraphs** (≈50 words each, 1.125rem/2.0; each paragraph `sp-reveal sp-reveal--up` inside an `sp-stagger` group): (1) most cheese is sold pre-cut in plastic and dries at the face; (2) at our counter the wheel is opened when you ask, cut with a wire or a two-handled knife and weighed in front of you; (3) we write the name and date on the paper so the wedge keeps its name at home. Then a white text-link pill "How we cut →". | 170 words |
| 4 | `nk-styles` | card-mosaic: the six styles we keep (spec catalogue) | Ground. Eyebrow "Styles" + H2 "Six styles, about sixty cheeses." on the left guide. Left cell: **2 × 3 cards** (card 248 wide, column gap 49.6, row gap 56, RT(e) grid), each: photo **K1–K6** 3:2 square corners (248 × 165), then eyebrow milk/rind 0.8125rem willow, name 1.0625rem 500 ink, one-line note 0.875rem/1.5, price "from €4.40 / 100 g" 0.875rem muted. Group `sp-stagger`, cards `sp-reveal sp-reveal--up`. Right cell: **S0** `styles-arrangement` pebble variant c, **sticky top 140 px** while the cards scroll (ct-s6300). Under the grid: white full-width pill (left cell width) "All six styles →" /cheeses/. | 6 × 20 + 15 words |
| 5 | `nk-counter-band` | full-bleed parallax | Cover 1440 × 600, background **P1** `counter-band`, class `sp-parallax`, `--sp-par: 10%` (mobile 6%). Foreground: paper `#FAF5EA` panel bottom-left, x 149, width 447, padding 40, radius 24.8: eyebrow "The counter", one sentence 1.5rem 500 "One counter, opened at ten, cleared and re-wrapped at seven." + hours line. Panel is not in the moving layer. Guides hidden under the band. | 25 words |
| 6 | `nk-choose` | how a wedge is chosen (3 steps) | Ground, padding 200 / 160. Left cell: eyebrow "How a wedge is chosen", H2 "Taste, cut, wrap." 2.5rem, photo **C1** `choose-taste` 4:5 (447 × 559) square corners under it. Right cell: three step rows separated by **dotted 1 px white rules**, each: numeral "01" Albert Sans 500 2.5rem willow, step name 1.25rem 500, paragraph ≈45 words 1rem/1.8 (text from §0). Group `sp-stagger` + rows `sp-reveal--up`. | 3 × 45 words |
| 7 | `nk-monger` | people: the monger's note | Ground. Left cell: eyebrow "Behind the counter", quote 1.75rem/1.5 500 ink (≈30 words, Noa: "I buy every wheel I would be happy to cut for a friend, and I would rather tell you we are out than sell you the wrong one."), attribution, then a paragraph ≈50 words about the cellar under the shop (11 °C / 92 %, Elif turns the wheels at 07:30), then the **7 names** as a two-column list (name 500 + role 0.875rem muted), dotted rules. Right cell: **M1** `noa-cellar` pebble variant a, `sp-reveal sp-reveal--zoom`. | 80 words + 7 lines |
| 8 | `nk-reserve` | the single way to reserve a board + price list | Ground, padding 200 / 120. Row: left cell **B1** `board-four` 3:2 (447 × 298), square corners; right cell eyebrow "Boards", H2 "Reserve a board." 2.5rem, paragraph ≈60 words (choose a board in the shop, pay online, reserve by 18:00 the day before, pick up from 11:00, Samuel confirms by email), willow pill "Reserve a board →" /boards/. Below, **full container width (x 149–1290)**: price table (6 rows from §0; columns item / what is in it / price; price `white-space: nowrap; text-align: right`), dotted white row rules, Instrument Sans 1rem. No reveal on the table. | 60 words + 6 rows |
| 9 | `nk-journal` | journal (3 latest posts) | Ground. Eyebrow "Journal" + H2 "From the counter" on the left guide; three thumbs in a row (248 wide, 3:2, gap 49.6, as ct-s12000) with date 0.8125rem + title 1rem 500: posts' featured **J1**, **J2**, **T1**. Text link "All entries →". Query Loop (3), `sp-stagger` + `sp-reveal--up` on the loop wrapper's items. | 3 titles |
| 10 | `nk-letter` | newsletter "Counter letter" | **Willow `#5F6849` band** (the reference changes the ground per section; this is our single section-ground change), padding 96, guides covered. Left cell: eyebrow "Counter letter" `#E3E8DA`, H2 "One letter a month." 2.25rem white, 35 words (what is in the cellar, the cheese of the month, the tasting dates; unsubscribe any time). Right cell: `shippress_form_slot` kind **newsletter**, dark-ground tokens (§8). No reveal. | 40 words |
| 11 | `nk-arch` + `nk-footer` | T3 arch band, then footer | Arch band per T3. Footer: ground `#DDE3D3` continues (guides visible again), padding 96/40: stacked small wordmark "NOKA / CHEESE" Albert Sans 600 2rem, address, hours (4 lines), phone, email; links (Cheeses, Boards, How we cut, Tastings, Cellar, Makers, About, Visit, Journal, Newsletter, Shop, Privacy, Terms); "© 2026 Noka Cheese" 0.8125rem; a plain up-arrow link (thin 1 px stroke arrow 40 × 50, as ct-s6300) at the right guide → `#top`. | — |

**Home photo positions: H1, H2, S0, K1, K2, K3, K4, K5, K6, P1, C1, M1, B1, J1, J2, T1 = 16** (≥ 8), none twice on the page.
English home ≥ 320 words; narrative paragraphs: #3 (3 × ≈50), #6 (3 × ≈45), #7 (≈50) → ≥ 3 paragraphs ≥ 20 words. CJK home ≥ 600 characters.

### Comparison with the most recent themes (home block order must not match)
| Theme | Home block order | Noka differs because |
|---|---|---|
| Hatoba College | header band → framed window hero → editorial intro 7/5 → five stage bars → date block → parallax band → day trio → ledger → story → journal → dark newsletter → footer | no framed window, no stage bars or date block; our hero is a blur-resolving glyph + pebble on a flat tint; the page is ruled by three dotted guides, not a 7/5 editorial grid |
| Hisagi Neurology | stadium window hero → lead with disc → symptoms → principles capsule band → parallax room → one case → fees table → visit pill → journal → letter panel → footer | no stadium/capsule shapes; our masks are organic double-rim pebbles; catalogue cards with sticky pebble replace a symptoms list |
| Shoko Archives | looping window + outlined headline boxes → info bar → covers → cards → aisles parallax → retrieval → team → prices → footer | no info bar, no outlined headline boxes; our cards sit in one guide cell beside a sticky pebble, not a full-width card row |
| Hojo Brokers | wedge hero → reads → two-tab index → parallax yard → flush steps → wording → people strip → case → fee table → CTA band + newsletter → FAQ → footer | no tabs, no coloured step columns, no FAQ, no wedge band; steps are dotted-rule rows in a cell; the close is a paper arch band |
Ours: blur-resolve glyph + pebble → sticky-pebble statement → 2×3 catalogue cards + sticky pebble → parallax counter band → dotted-rule steps → monger's note in pebble → board + full-width price list → 3 journal thumbs → willow letter band → paper arch band → footer. None of the four uses dotted page guides, pebble masks, a sticky-pebble catalogue or an arch close.

---

## 4. Inner pages (12 pages + WooCommerce + posts; T1 pebble head on all content pages, T2 guides on every page, T3 arch on 5)

| Page | Slug | Content | Signatures | Photos (head pebble / inline) |
|---|---|---|---|---|
| Cheeses | /cheeses/ | spec catalogue: the 6 styles, each a section with anchor (`#fresh` …): card photo, milk, rind, texture, age, how to keep it, what is on the counter now (3 cheese names per style, generic descriptive names, no brands), price per 100 g; sticky pebble beside the grid | T1 head + sticky, T2 dotted spec rules, T3 close | head **S0**; inline **K1–K6** |
| Boards | /boards/ | the 3 boards + monger's wedges + cheese of the month; how reserving works (shop → pay → pickup 11:00, by 18:00 the day before); full price table (§0); link to shop category; "For more than eight people" with the **contact form slot** (§8) | T1, T2, T3 | head **B1**; inline **B0**, **B2** |
| How we cut | /how-we-cut/ | the 3 steps expanded (taste, cut, wrap), wire vs knife, how to keep a wedge at home (paper, 4–8 °C, take out 45 min before) | T1, T2 dotted step rows | head **C1**; inline **H2** |
| Tastings | /tastings/ | Saturday tastings 10:30 and 15:00, 45 min, 6 cheeses, max 8, €18, led by Grace; booking via the "Saturday tasting" product | T1, T2, T3 | head **T1** |
| Cellar | /cellar/ | the cellar under the shop: 11 °C / 92 %, Elif's routine, washed rinds brushed twice a week, which wheels we finish ourselves | T1, T2 | head **J1**; inline **K3** |
| Makers | /makers/ | the 4 maker stories (§0), 2 paragraphs each, Henrik's two visits a year | T1, T2 | head **J2**; inline **K6**, **K4** |
| About | /about/ | since 2014; the 7 people (text list with roles, dotted rules); a day at the counter (the §0 day as a dotted-rule time list, not a vertical timeline graphic) | T1, T2, T3 | head **M1**; inline band **P1** (3:1, `sp-parallax --sp-par 6%`) |
| Visit (contact) | /visit/ | address, hours, phone, email, text directions (two streets, tram stop), pickup notes, contact form slot (§8) | T1, T2, T3 | head **P1** |
| Newsletter | /newsletter/ | "Counter letter": monthly, what is in it, three short paragraphs, newsletter form slot (§8) | T1 head, T2 | head **H2** |
| Journal (posts) | /journal/ | role `posts`, empty content; archive = 3-column 3:2 thumbs as home #9 | T2 | featured images |
| Privacy | /privacy/ | legal text | T2 | — |
| Terms | /terms/ | terms of sale, pickup only, reservations, cancellation until 18:00 the day before, allergens | T2 | — |
| Shop / product / cart / checkout / my account | WooCommerce | 6 products from the price list (category **Boards**: 3 boards; **Counter**: wedges, cheese of the month; **Tastings**: Saturday tasting). Shop grid styled like the home cards (3:2 thumbs, square corners, white "Add to basket" pill). Local pickup only. | T2 guides, T1 pebble on single product image (variant b) | products: B0 (two), B1 (four), B2 (eight), H2 (three wedges), K3 (month), T1 (tasting) |

Posts (3): (1) "A week in the cellar at 11 °C" featured **J1**; (2) "Kidding season at Hollin Ridge" featured **J2**; (3) "Six cheeses on a Saturday" featured **T1**. Category **From the counter**; tags *cellar*, *makers*, *tastings*. On a single post the featured image is never repeated inline.

Signatures on ≥ 4 inner pages: T1 on all content pages (Cheeses, Boards, How we cut, Tastings, Cellar, Makers, About, Visit, Newsletter, product); T2 on every page; T3 on Cheeses, Boards, Tastings, About, Visit.

---

## 5. Colour, type

### Colour (reference RT(a) relationships, hue remapped to willow)
Reason for the hue change: the design row fixes palette family "willow" `#5F6849`, and the reference's periwinkle `#C5DBFF` is that brand's identity colour; a green-grey willow suits a cheese counter (rinds, cellar, paper). We keep the reference's structure exactly: one pale low-chroma tinted ground at ≈ the same lightness (ref HSL L 88.6% → ours 85.9%), white guides/glyph/pills, a warm paper band, colour in the photographs.

| Token (theme.json slug) | Hex | Role | Share (page) | Source |
|---|---|---|---|---|
| ground | `#DDE3D3` | page ground, header | ≈ 64% | RT(a) ground `#C5DBFF` (≈70%), same lightness band, hue → willow |
| paper | `#FAF5EA` | arch band, counter-band panel | ≈ 10% | RT(a) paper `#FBF3E3` (chroma reduced) |
| white | `#FFFFFF` | guides, glyph, pills, arch rim | ≈ 3% | RT(a) white type/rules/pills |
| primary | `#5F6849` | CTA pill, letter band, numerals, eyebrows | ≈ 7% | row hex; plays the reference's lilac-blue label colour `--color-lilac` |
| ink | `#2D3324` | headings and body | text | ref uses white text on tint (contrast 1.4, fails); ink replaces it for legibility |
| muted | `#5A614D` | meta, prices, captions (contrast 5.0 on ground) | text | — |
| rind | `#EBCB94` | pebble rim only | ≈ 1% | RT(e) cream rim, warmed so it reads on green |
| mist | `#E3E8DA` | eyebrow on willow band, hover ground | <1% | stage-a ground |
First-screen saturated share (HSV S > 35%, V > 24%): **≤ 8%** target, gate `check-first-screen.py --max 15`; note cap 30%.
Contrast: ink on ground 10.6:1; muted on ground 5.0:1; white on primary 5.8:1; primary on white 5.8:1. Never white text on the ground.

### Type (font_direction **sans**: Latin headings and body sans; CJK Noto Sans TC / JP (gothic); no serif / Mincho anywhere)
- Display: **Albert Sans** (variable, 400–700; used 500, 600). Body: **Instrument Sans** (variable, 400–600; used 400, 500). Both OFL, woff2 in assets/fonts, loaded via **theme.json `fontFamilies` + `fontFace`** (not only wp_enqueue) so editor iframe and front end match; listed in theme-meta.json `fonts[].files` with licenseFile; named in readme.txt.
- Stacks:
  - heading `"Albert Sans", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`
  - body `"Instrument Sans", system-ui, -apple-system, "Segoe UI", sans-serif`
  - `:root:lang(zh-TW)` heading `"Albert Sans", "Noto Sans TC", sans-serif` (bundled zh-TW subset of Noto Sans TC 500/700); body `"Instrument Sans", "PingFang TC", "Microsoft JhengHei", "Noto Sans CJK TC", sans-serif` (no bundled zh family, no JP family in body).
  - `:root:lang(ja)` heading `"Albert Sans", "Noto Sans JP", sans-serif` (bundled ja subset 500/700); body `"Instrument Sans", "Hiragino Sans", "Yu Gothic", "Meiryo", sans-serif`.
  - style.css has `:lang(` rules → copy shared/inc/editor-lang.php to inc/editor-lang.php and require it. Subsets with the Hokuto/Hada substitute method (the zh subset script is broken).
- Scale (theme.json fontSizes, rem at 16 px): xs 0.8125rem (eyebrows, meta; RT(f) 12–13 px) · s 0.875rem (card notes; RT(b) small 13.97) · base 1rem/1.75 (body; RT(b) 16.55/24.8, opened for long reading) · m 1.125rem/2.0 (lead, statement paragraphs; RT(b) 18.6/37.2) · l 1.25rem (step names, link labels; RT(b) 20–22 px) · xl 1.75rem (quote) · xxl **2.5rem**/1.3 (H2; RT(b) 41.4 px, 1.12–1.5) · hero **4.5rem**/1.0 (H1; ≥ 4.25rem; `clamp(3rem, 5vw, 4.5rem)`).
- Weights: H1 600, H2 500 (RT(b) fw 500), body 400, lead/labels 500. Letter-spacing: H1 −0.01em, wordmark +0.02em, eyebrows 0.02em sentence case (RT(f) sentence case, no uppercase body).
- CJK: H1/H2 × 0.75 (H1 zh/ja 3.375rem, kept as three short stacked lines in every language: name / cut / wrap, written locally, not translated word for word), body line-height 1.85, eyebrows letter-spacing 0.08em; fr/de `hyphens: auto` on body, H2, card names.

---

## 6. Photos (18, Grok, one at a time; Read every one; no text, no logos)

**STYLE (one string for every image):**
`High-key real photograph, bright soft daylight from a large window, pale sage-grey and warm off-white surroundings, smooth pale plaster and limewashed surfaces, rounded sculptural pale props, gentle soft shadows, natural true-to-life cheese colours, shallow depth of field (50mm f/2.8), calm and clean, modern international cheese shop, adults of diverse ethnicity and age in plain linen aprons, no Japanese elements, no text, no readable writing, no labels, no logos, no brand names, no signage, editorial food photography for a shop website.`

| # | File | Subject / composition | Ratio / px | Used on (page → block) | Home |
|---|---|---|---|---|---|
| H1 | hero-wire-cut.webp | at a pale counter the monger (woman, sleeves rolled, linen apron) draws a steel cutting wire down through a large washed-rind wheel with an orange rind; across the counter a customer holds a small card list (blank/unreadable) and looks on; subjects centred so the pebble crop keeps both hands and the wheel | 1:1, 1600 | home #2 hero | ✔ |
| H2 | statement-wrap.webp | close: two hands folding two-layer cheese paper around a wedge on a pale counter, pencil beside | 1:1, 1400 | home #3; /how-we-cut/ inline; /newsletter/ head; product "Monger's three wedges" | ✔ |
| S0 | styles-arrangement.webp | six different cheeses (fresh, white bloomy, orange washed, alpine, blue, ash goat) resting on smooth pale plaster forms, high-key | 1:1, 1600 | home #4 sticky; /cheeses/ head | ✔ |
| K1 | style-fresh.webp | fresh lactic cheese in a small basket mould on a pale surface, one spoonful out | 3:2, 1200 × 800 | home #4; /cheeses/ | ✔ |
| K2 | style-bloomy.webp | white-rind round, cut open, soft paste at the edge | 3:2 | home #4; /cheeses/ | ✔ |
| K3 | style-washed.webp | wedge of orange sticky washed rind, cut face | 3:2 | home #4; /cheeses/; /cellar/ inline; product "Cheese of the month" | ✔ |
| K4 | style-alpine.webp | wedge from a large hard wheel, small eyes, natural rind | 3:2 | home #4; /cheeses/; /makers/ inline | ✔ |
| K5 | style-blue.webp | blue-veined wedge on pale paper, crumb beside | 3:2 | home #4; /cheeses/ | ✔ |
| K6 | style-goat.webp | ash-coated goat log sliced, white paste, grey rind | 3:2 | home #4; /cheeses/; /makers/ inline | ✔ |
| P1 | counter-band.webp | wide: long pale stone counter, oak shelves of whole wheels behind, monger in soft focus at the far end, morning light; left 40% calm counter for the panel | 21:9, 2000 × 860 | home #5 (parallax); /about/ band; /visit/ head (pebble crop) | ✔ |
| C1 | choose-taste.webp | monger offers a sliver of cheese on a knife tip across the counter to a customer's hand | 4:5, 1200 × 1500 | home #6; /how-we-cut/ head | ✔ |
| M1 | noa-cellar.webp | founder (woman, 40s) in a pale cellar turning a washed-rind wheel on a wooden board, waist up, looking at the wheel | 1:1, 1400 | home #7; /about/ head | ✔ |
| B1 | board-four.webp | board for four: five cheeses, bread, quince, pickles on a pale wooden board on plaster | 3:2, 1400 × 933 | home #8; /boards/ head; product "Table board for four" | ✔ |
| J1 | cellar-brushing.webp | cellar keeper brushing orange rinds of small wheels on shelves, cool soft light | 3:2 | home #9 (post thumb); /cellar/ head; post 1 | ✔ |
| J2 | farm-goats.webp | goats in a bright pale barn with a farmer and the sourcing lead talking by the gate | 3:2 | home #9 (post thumb); /makers/ head; post 2 | ✔ |
| T1 | tasting-table.webp | Saturday tasting: six small pieces in a row on a pale table, four guests' hands and glasses of water, host pointing | 3:2 | home #9 (post thumb); /tastings/ head; post 3; product "Saturday tasting" | ✔ |
| B0 | board-two.webp | small board for two: three cheeses, bread, quince, on pale linen | 3:2 | /boards/ inline; product "Counter board for two" | |
| B2 | board-eight.webp | long board for eight: seven cheeses, two breads, honey, from above | 3:2 | /boards/ inline; product "Long board for eight" | |

**18 unique images**; home uses **16**; no page shows the same image twice (check /boards/ head B1 vs inline B0/B2; /cheeses/ head S0 vs K1–K6; /makers/ J2 vs K4/K6; /cellar/ J1 vs K3; /about/ M1 vs P1). webp, ≤ 300 KB, ≤ 2000 px, **0 cut-outs**. Pebble crops come from the same file via `object-fit: cover`. Generate one at a time with `IMAGE_STYLE="<STYLE>" scripts/grok-image.sh out.webp "<subject>"`; Read each; regenerate on text, logos, broken faces/hands, plastic-looking cheese or style drift (not high-key).

---

## 7. Motion and scroll effects (sp-scroll, unchanged class names)
Reference motion (RT(g)): GSAP ScrollTrigger `.e-step` lines rising (≈0.8 s, stagger ≈0.1 s, ≈24 px, ease-out), pebble photos arriving with a slight scale (≈1.2 s, 0.96→1), blur-to-focus intro, `html` ground colour transition 1.2 s, Lenis smooth scroll and magnetic hover (not used: no scroll listeners, no libraries).

| Effect | sp class | Where | Trigger / time / easing | Source |
|---|---|---|---|---|
| Lines rise in sequence | `sp-stagger` on the group + `sp-reveal sp-reveal--up` on each child; `--sp-dist: 24px; --sp-dur: .8s` | home #3 paragraphs, #4 cards, #6 step rows, #9 journal items; inner: /cheeses/ sections, /how-we-cut/ steps | IntersectionObserver once; 0.8 s `cubic-bezier(.22,1,.36,1)`; stagger 0.12 s (sp default ≈ ref 0.1 s) | cheesetart `.e-step` |
| Pebble arrives | `sp-reveal sp-reveal--zoom` on the pebble **column wrapper** (not the figure with the radius/clip), `--sp-dur: 1.2s` | home #7 (M1); inner pages' inline pebbles (not heads) | IO once; 1.2 s ease-out; sp zoom 1.06→1 | cheesetart pebble morph-in |
| Parallax (required) | `sp-parallax` | (a) **home #5 counter band**: Cover with background **P1**, `--sp-par: 10%` desktop / 6% mobile; foreground paper panel not in the layer. (b) **hero pebble**: `figure.nk-pebble.sp-parallax` with direct img **H1**, `--sp-par: 6%` / 4% mobile (img moves inside the pebble; KV #4). (c) /about/ P1 band 6%. | CSS scroll-driven `view()`, IO + translate3d fallback; linear | reference depth: pebble scale/morph while scrolling; ground transition |
| Hero focus resolve | CSS keyframes (T4), not sp | hero only | load, 1.4 s cubic-bezier(.22,1,.36,1) | cheesetart intro |

Not animated: hero (no `.sp-reveal`), price table, forms, letter band, legal text, footer, sticky pebbles in #3/#4 (they stay put; only their sibling text reveals). `.sp-reveal` count ≤ 60% of home blocks (#3, #4, #6, #7, #9 = 5 of 11). prefers-reduced-motion, `?sp-static`, no-JS and editor → final state. Translate ≤ 24 px. `check-parallax.mjs` desktop + mobile ≥ 6 px delta, 0 under reduced motion. Sticky columns must not create horizontal overflow; sticky disabled < 782 px.

---

## 8. Forms (form contract v1)
- Copy `pipeline/assets/forms/shippress-forms.php` → `inc/shippress-forms.php`, CSS + editor JS → `assets/` unchanged; require from functions.php. Only `shippress_form_slot` dynamic block; no import-time plugin detection, no fake form, no mail backend, no hard plugin dependency.
- **Visit `/visit/`** (pattern `nk-visit`): right cell under "Write to the counter" (after address/hours in the left cell): `shippress_form_slot(['kind'=>'contact','fallback'=>$fallback])`, `$fallback` = `ob_start()` around the literal mailto button (white pill `wp-element-button nk-pill`, `href="mailto:counter@nokacheese.example?subject=…"`, label `_t('contact_email')`). With CF7/WPForms: name, email, phone (optional), date wanted, number of people, message, consent checkbox; submit "Send to the counter". Without plugins the mailto pill stays (never a link to /visit/).
- **Boards `/boards/`** (reservation page) section "For more than eight people": same contact slot with its own mailto fallback (subject "Board for a larger table"). Normal reservations go through WooCommerce products.
- **Newsletter `/newsletter/`** (standalone, "Counter letter", monthly): T1 head, three short paragraphs, then `shippress_form_slot(['kind'=>'newsletter','email'=>'counter@nokacheese.example','label'=>_t('forms_email'),'submit'=>_t('forms_subscribe'),'notice'=>_t('forms_mail_notice'),'subject'=>_t('forms_mail_subject')])`. Also **home #10** (willow band, dark variant). Footer has only a text link to /newsletter/. Order: MailPoet (explicit id) → MC4WP → explicit CF7/WPForms newsletter id; never the contact form. No plugin → required email input + submit, native mailto POST with visible notice "Opens your email app. Send the request to subscribe; you are not subscribed yet."
- **Tokens (style.css, mapped to theme.json presets):** light (ground/paper pages) — `--sp-form-surface: #FFFFFF; --sp-form-text: var(--wp--preset--color--ink); --sp-form-border: #C9D0BD; --sp-form-accent: var(--wp--preset--color--primary); --sp-form-on-accent: #FFFFFF; --sp-form-focus: var(--wp--preset--color--ink); --sp-form-radius: 24.8px` (inputs 12px radius via the plugin-scoped rules, submit pill 24.8). Dark (`.nk-letter`): `--sp-form-surface: rgba(255,255,255,.1); --sp-form-text: #FFFFFF; --sp-form-border: rgba(255,255,255,.55); --sp-form-accent: #FFFFFF; --sp-form-on-accent: var(--wp--preset--color--primary); --sp-form-focus: #FFFFFF`. Focus: 2 px outline `--sp-form-focus`, offset 2 px. Error: text + border `#A2422C` (light) / `#F4C2B4` (dark); success `#3E6B3A` / `#D7EBC9`; message line under the field, no icon. Labels above inputs, Instrument Sans 500 0.875rem; inputs 48 px; checkbox/radio 20 px with `accent-color` primary (white on dark).
- **i18n:** semantic keys in inc/i18n/en.php first (`forms_email`, `forms_subscribe`, `forms_mail_notice`, `forms_mail_subject`, `contact_email`, plus contact labels: `forms_name`, `forms_phone`, `forms_date`, `forms_people`, `forms_message`, `forms_consent`, `forms_send`), extract with `L10N_SEMANTIC=1`; written in all five languages (en, zh-TW, ja, fr, de), including dynamic block attributes and the mailto subject.
- Forms never in the first screen, never `sp-reveal`. `form-runtime-check.php` (five languages) and `repo-gates.sh forms` must pass; check CF7 at 390 px and desktop on ground and on the willow band.

---

## 9. Responsive rules (hard)
- **390 px:** no horizontal overflow; first screen per §3 mobile (H1 left-aligned, no vertical text, no absolutely positioned label over text, vertical pill hidden, glyph behind the pebble only). Guides 6 / 50 / 94 %. Cells stack (photo after text except #3/#7 where pebble comes first); sticky off; pebbles 300 px; cards 2 columns of 160 px (style name 0.9375rem) — or 1 column if any name overflows in de/fr; arch band: arch 300 × 420 below the pills, glyph 160.
- **Tables (price list and any spec table):** at ≥ 782 px full container width (x 10.3% → 89.7%, 1141 px at 1440), price column `white-space: nowrap; text-align: right; min-width: 6rem`, never clipped at 800 or 1280; middle column wraps. At < 782 px each row becomes a stacked block (item 500, description 0.875rem, price right on its own line), no horizontally scrolling table.
- **782–1023:** guides stay; cells 50/50 with 32 px gutters; H1 3.5rem; pebble 40vw; header collapses to glyph toggle + wordmark + cart.
- WooCommerce shop grid: 3 columns ≥ 1024, 2 at 782–1023, 2 at 390 (cards 160).
- Run `auto-gates.mjs <home> en …/gates/en.json 1 1` after every layout change.

---

## 10. Similarity to the reference (target 80%)
| Dimension | Reference value (token) | Noka value |
|---|---|---|
| Colour relationship | pale tint `#C5DBFF` ≈70%, white type/rules, paper `#FBF3E3` ≈12%, white pills, colour only in photos (RT(a)) | pale willow `#DDE3D3` ≈64%, white guides/glyph/pills, paper `#FAF5EA` ≈10%, ink text, colour in photos; one willow letter band |
| Ground lightness / saturation | HSL L 88.6%, HSV S 23% (RT(a)) | L 85.9%, S 7% |
| First-screen saturated share | ≈ few % (flat tint below threshold) | ≤ 8% |
| Guides | 3 dotted 1 px white, x 149/720/1290, full height (RT(c)(f)) | 3 dotted 1 px white at 10.3/50/89.7%, full height |
| Menu glyph | 50 × 14 double line, fixed top-left at guide 1 (RT(f)) | 50 × 14 double line in sticky header at guide 1 |
| Pebble mask | ≈535 × 540, asymmetric, cream rim crescent 10–14 px lower-right, no shadow (RT(e)) | 535 × 540, three asymmetric radii, rind rim 14/12 px lower-right, no shadow |
| Layout cells | photo in one 4/12, text in the other; text column x 794 w 447 (RT(c)) | pebble in one cell, text column x 794 w 447 |
| Product grid | 2 per row, thumbs 248 × 166 (3:2 measured on ct-s6300), gap 49.6, caption + price under, square corners (RT(e)) | 2 × 3, 248 × 165, gap 49.6, eyebrow + name + note + price, square corners |
| Sticky pebble beside grid | yes (ct-s6300) | yes (#4, /cheeses/) |
| Body type | 16.55 / 24.8, fw 500 gothic (RT(b)) | Instrument Sans 16 / 28, fw 400 |
| Lead | 18.6 / 37.2 (RT(b)) | 18 / 36 |
| Headings | H2 31–41.4 px, fw 500, lh 1.12–1.5 (RT(b)) | H2 40 px 500 / 1.3; H1 72 px 600 (quality gate ≥ 4.25rem) |
| Eyebrows | 12–13 px sentence-case English above each heading, on the guide (RT(f)) | 13 px sentence-case, on the guide |
| Section spacing | top ≈250 px, 200–300 px empty ground between blocks (RT(c)) | 250 / 200 px desktop, 120 / 96 at 390 |
| Pills | radius 24.8, 2 px white border, height 49.6, full-width "more" pill with centred arrow (RT(d)) | radius 24.8, 2 px white border, height 49.6, full-width pills with arrow |
| Vertical pill | 49.6 × 175.9 "Buy & Order" at left edge (RT(d)) | 50 × 176 "Reserve a board", desktop only |
| Arch band | paper band, tall arch in tint with white rim, white outline glyph, cropped by floor (RT(e)(f)) | paper band 640, arch 580 × 760 cropped, 8 px white rim, own wedge glyph 6 px stroke |
| Intro | blur-to-focus (RT(g)) | blur 14 → 0, 1.4 s |
| Text motion | `.e-step` rise, stagger ≈0.1 s, ease-out (RT(g)) | sp-reveal--up 24 px, 0.8 s, stagger 0.12 s, cubic-bezier(.22,1,.36,1) |
| Section ground change | html bg transition 1.2 s (RT(g)) | static section grounds (paper arch band, willow letter band) |
| Imagery | high-key studio product shots on pale sculptural plaster props (RT(e)) | high-key cheese on pale plaster props + counter scenes with people |
| Shadows | none (RT(d)) | none |

---

## 11. Home acceptance checklist
- [ ] 1440 × 900 first screen: flat `#DDE3D3` ground, three dotted white guides, double-line glyph at the left guide, white wedge glyph straddling the centre guide, stacked right-aligned H1 "Named. / Cut. / Wrapped." 4.5rem, H1 photo in a double-rim pebble with a visible rind crescent, willow CTA pill, vertical pill at left; all six KV rows visible.
- [ ] Blur-to-focus plays with `?sp-motion` and is absent with `?sp-static` / reduced motion (screenshots sharp).
- [ ] 390 px first screen: H1 left-aligned 3rem, no vertical text, no overlap, glyph only behind the pebble, CTA full width.
- [ ] check-first-screen ≤ 8% (gate 15); exactly one top menu (split); one CTA wording "Reserve a board".
- [ ] Pebbles: 4 on home (hero, #3 sticky, #4 sticky, #7), three different radii, rim visible on each; never circles.
- [ ] #4: 6 cards 2 × 3 in the left cell with 3:2 thumbs and prices from §0; sticky S0 pebble in the right cell.
- [ ] Parallax on #5 (P1, 10%) and hero pebble (6%) passes check-parallax desktop + mobile; hero has no `.sp-reveal`.
- [ ] 16 home images, none repeated; 18 total; none twice on one page; no text/logos in photos; 0 cut-outs.
- [ ] English ≥ 250 words (target 320), ≥ 3 narrative paragraphs ≥ 20 words; facts match §0 (2014, 60 cheeses, 6 styles, 7 people, €26/€48/€92/€22/€12/€18, hours, 18:00 / 11:00).
- [ ] Price table full width at 800 and 1280, price nowrap right; stacked rows at 390.
- [ ] Newsletter slot in #10 (dark tokens) renders email + submit + notice without plugins; not revealed; not in first screen.
- [ ] Arch band: arch cropped by the floor, white rim, glyph, two full-width white pills.
- [ ] WooCommerce active: 6 products, cart → checkout works with local pickup.
- [ ] Fonts identical in editor and front end (Albert Sans / Instrument Sans; Noto Sans TC/JP headings in zh/ja); auto-gates home pass.
