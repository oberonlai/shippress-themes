# Mugi Bakehouse: design spec (stage B, binding for implementation)

Slug `mugi-bakehouse`, neighbourhood bakery, type **store** (WooCommerce compatible but not required; the site must work fully without it). Archetype editorial-magazine, hero full-bleed photo + info bar, nav centred, page structure **day-schedule**, font direction **serif**.
Reference (only one): **noraisinsandwich.com** (https://noraisinsandwich.com/, S5-Style Food & Beverage). Measurements: `reference-tokens.md` (cited below as tok(a)…tok(g)). Screenshots: `ref/nora-first.png`, `ref/nora-products.png`, `ref/nora-grid.png`, `ref/scroll-nora-before.png`, `ref/scroll-nora-after.png`.
We borrow the first-screen concept, the edge/corner tab system, the slanted-rule product rows, the colour relationships, sizes and motion. We do **not** copy any photo, text, logo, the woven emblem or the "(NO) RAISIN SANDWICH" wordmark. Photos and copy are ours.

Fixed brand facts (every page, all five languages, no variants): **Mugi Bakehouse**, founded **2019**, **9 Spelt Yard, 9000 Ghent, Belgium** (fictional address). Currency **EUR** in every language. Hours **Tue–Sat 07:00–15:00, Sun 08:00–13:00, closed Mon**. Phone `+32 9 000 14 19`, email `hello@mugibakehouse.example`. Full list in section 8.

---

## 1. Signature techniques (three, all obvious at a glance)

### T1. Half-ring edge tabs that switch the side of the scene (noraisinsandwich.com, `ref/nora-first.png`, tok(f))
- **Reference:** two 1 px ink outline half-circles hug the left and right viewport edges, vertically centred, 80 px tall; letters stacked one per line ("N/O" left, "Y/E/S" right). They stay fixed on every page (visible in `nora-products.png` and `nora-grid.png` too) and represent the site's either/or story (raisin or no raisin).
- **Ours:** "OVEN" on the left edge, "BENCH" on the right edge. On the **home hero** they are a two-state picture switch: OVEN shows photo H1 (baker sliding the peel into the deck oven), BENCH shows photo H2 (colleague dusting flour across the bench, same room, same light). Crossfade 0.8 s `ease` (opacity only), default frame = OVEN, `aria-pressed` on the active tab, keyboard focusable buttons. On inner pages the same fixed tabs are links: OVEN → The Oven Day, BENCH → Loaves; the tab of the current page is "active".
- **Geometry (≥1024 px):** `position: fixed; top: 50%; translate: 0 -50%`; size 36 px visible width × 88 px tall; the ring is a box 72×88 with `border: 1px solid #1A1A1A; border-radius: 44px` offset so only the inner half shows (left tab `left: -36px`, right tab `right: -36px`). Letters: Fraunces 500, 0.8125rem (13 px), uppercase, line-height 1, one glyph per line (markup: each letter in its own line via `<br>` in the block, not CSS `content`), centred in the visible half. Colour ink on light pages; on the hero they sit over the pale wall of the photo (still ink). Active state: fill `rgba(107,69,64,.10)` and letters `#6B4540`. Hover: fill `rgba(26,26,26,.06)`. z-index above content, below the overlay menu.
- **782–1023 px:** same tabs but 32×80.
- **<782 px:** fixed tabs are **hidden**. On the home hero they are replaced in-flow by a horizontal two-segment pill under the wordmark ("Oven | Bench", 1 px ink outline, radius 999 px, 36 px tall, each half 88 px wide, active half filled `rgba(107,69,64,.10)`). No vertical text, no absolute labels on the mobile first screen.
- **Must not be diluted:** both tabs must be half-rings cut by the viewport edge (not full circles, not rectangles), letters stacked vertically on desktop, both visible on the first screen at mid-height, and clicking must actually swap the hero photo (two different photos, not a filter).

### T2. Outline capsule tabs fixed at the bottom corners + ring dot menu (noraisinsandwich.com, `ref/nora-first.png`, `ref/nora-products.png`, tok(d)(f))
- **Reference:** two 1 px ink pills (28×68 px, fully rounded) fixed at the bottom-left and bottom-right corners with vertical labels; a 6 px ring dot top-left as the menu; an outline bag icon top-right. These are the only "buttons" of the site; there are no filled CTAs.
- **Ours:** bottom-left capsule "BREAD" → Loaves; bottom-right capsule "NOTES" → Journal. Ring dot top-left; outline basket icon top-right linking to Standing Orders (shows the WooCommerce cart count inside the basket only when WooCommerce is active; no number otherwise).
- **Geometry (≥1024 px):** capsules 28×84 px (5 stacked letters; tok(d) 28×68 scaled for 5 Latin glyphs), `border: 1px solid #1A1A1A; border-radius: 999px`, background `rgba(249,246,242,.72)`, fixed `left: 32px; bottom: 32px` and `right: 32px; bottom: 32px`. Letters Fraunces 500 0.6875rem (11 px), line-height 1.15, one per line (`<br>` in markup). zh-TW and ja labels are the localised two-character words for "bread" and "journal" (set in demo-content.zh-TW/ja), CJK stacks naturally (`writing-mode: vertical-rl` allowed on desktop only). Ring dot: 10 px box, 1 px ink border, at `top: 32px; left: 40px`; basket: 24 px outline icon at `top: 28px; right: 40px`. Hover on capsules: background `#E7E5DD`.
- **782–1023 px:** same, capsules 26×78.
- **<782 px:** fixed capsules hidden. On the home hero the info bar ends with two **horizontal** outline pills "Bread →" "Notes →" (32 px tall, 1 px ink, radius 999 px). On inner pages the same two horizontal pills appear at the end of each page head. Ring dot = the navigation overlay toggle (top-left, 44×44 hit area).
- **Every CTA in the theme** (home, inner pages) is a 1 px outline capsule (radius 999 px, 44 px tall horizontal, Fraunces 500 0.875rem, uppercase, letter-spacing 0.08em) or a text link with the thin long arrow (T3). No filled buttons except WooCommerce checkout.
- **Must not be diluted:** capsules stay outline (never filled russet), fully rounded, vertical letters on desktop, fixed at both bottom corners on every page.

### T3. Slanted 1 px rule rows with price, suffix, marker chip and a thin long arrow (noraisinsandwich.com, `ref/nora-products.png`, `ref/nora-grid.png`, tok(b)(c)(d)(f))
- **Reference:** each product column ends in a price row — price ~28 px 500, tiny "tax in" 11 px suffix, a date/status chip with a pink or mint marker highlight, a thin long arrow at the far right — and under it a single 1 px ink rule that is visibly **not horizontal**: it rises from left to right (about 13 px over a 582 px column, about 5 px over a 254 px column).
- **Ours:** every loaf on Home and Loaves, every hour row of the oven day, every standing-order plan, every neighbour story, every journal row, every person on About ends this way.
  - Price row: `display:flex; align-items:baseline; gap:12px`. Price Fraunces 500 1.75rem (28 px) `white-space: nowrap`; suffix Source Serif 4 0.6875rem (11 px) ("per loaf", "each", "per slab", "per week"); chip Source Serif 4 1rem with marker background — bake-day chip `#F9D4D8` (pink, e.g. "Tue–Sat"), "Daily" chip `#BFEBD9` (mint); chip padding 0 3px, no radius. Arrow: inline SVG 32×10, 1 px stroke ink, pushed right with `margin-left:auto`.
  - Rule: a 1 px ink line drawn as an inline SVG background `<line x1="0" y1="100%" x2="100%" y2="0"/>` with `vector-effect: non-scaling-stroke; preserveAspectRatio="none"`, so the **rise is fixed in px**: 12 px tall box in 2-up columns and full-width rows, 6 px tall box in 4-up columns. `margin-top: 20px`. Left end low, right end high, always.
- **Must not be diluted:** the rule must be visibly slanted (not a horizontal hr), 1 px solid ink (not grey, not dashed), one per item; the arrow is thin and long (≥32 px), the chips are flat marker highlights (no radius, no border).

### Continuation to inner pages (required)
| Page | T1 edge tabs | T2 capsules / outline CTAs | T3 slanted rows |
|---|---|---|---|
| Loaves | fixed; BENCH active | fixed corners; page-head CTA "Order a standing loaf" capsule | 6 loaf rows (2-up then 4-up) + full-width price table rows end in slanted rules |
| The Oven Day | fixed; OVEN active | fixed; capsule "Keep a standing order" | 9 hour rows, each ending in a slanted rule |
| Standing Orders | fixed | fixed; capsule = mailto order | 3 plan rows (price per week) + 4 "how it is kept" rows |
| Neighbours | fixed | fixed | 3 story columns end in slanted rules with the delivery count as "price" |
| About / The Bakers | fixed | fixed | 7 people rows (name as price position, role chip) |
| Flour & Grain | fixed | fixed | 3 grain rows (mill, distance in km as the number) |
| Journal (index, archive, category, tag) | fixed | fixed | every post row = date chip + title + arrow + slanted rule |
| Visit & Contact | fixed | fixed; capsules "Call", "Write" | 7 opening-hours rows (one per day) with slanted rules |
| Single post | fixed | fixed | post meta row + the rule under the title |

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
noraisinsandwich.com opens on **one full-bleed, high-key daylight still-life photograph** (`ref/nora-first.png`): a pale concrete wall fills the upper half, a white table with plates of sandwich biscuits, cups, a teapot, a gift box and small ceramic animals fills the lower half, soft side light from the right. Centred in the pale upper third: a small emblem, a three-line stacked wordmark with the middle line outlined in gold, and one small subtitle line. On the viewport edges at mid-height: "NO" and "YES" half-ring tabs; bottom corners: two capsule tabs; top-left ring dot; top-right bag. **Story:** "sit down at our table and pick a side" — raisin or no raisin, the same table seen two ways. **Signature motion:** content fades up softly as it enters (`js_anime--showUp`), and a parallax inner layer lags behind its wrapper (translateY 90 px at scrollY 700, tok(g)).

### (2) Our transposition (same composition, same motion idea, same image type = photography)
The first screen is **the bakehouse at 06:15**, one film-grain, high-key full-bleed photograph. Pale limewashed plaster wall fills the upper ~45% (where the wordmark sits, exactly as the concrete wall does in the reference); the lower half is the working floor: on the right a steel deck oven with its door open and a baker sliding a long wooden peel of loaves into it; on the left, a long floured wooden bench. **Story:** "pick a side of the same room" — the OVEN tab and the BENCH tab show the two halves of the bakery's morning (H1: the peel going into the oven, colleague dusting flour soft in the background; H2: the same room seen from the bench, the colleague dusting flour across shaped loaves in the foreground, the oven soft behind). The either/or story of the reference becomes the bakery's two stations. At the foot, a quiet info bar says what the oven is baking today and when the door opens — the bakery "supplies the street outside". **Motion:** the photo layer drifts slower than the page (sp-parallax), the wordmark fades up once on load (0.9 s ease, CSS only, not a reveal class), the tabs crossfade the frame (0.8 s ease).

### (3) KV checklist (all on the home first screen at 1440×900, all visible)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Full-bleed high-key still-life photo, pale wall upper half, table lower half | Full-bleed film-grain photo: pale plaster wall upper 45%, deck oven + baker with peel (right), floured bench (left) lower half | whole first screen, 100vw × 100svh (min 640 px) | `sp-parallax`, `--sp-par: 10%` desktop / 6% mobile | **H1** |
| 2 | Small emblem + three-line stacked wordmark, middle line outlined gold, one subtitle line, centred upper third | 56 px wheat-ear lattice emblem (SVG, russet outline) + "MUGI / BAKE / HOUSE" stacked, "BAKE" outlined (`-webkit-text-stroke: 1.2px #6B4540; color: transparent`), subtitle "Bread for the street outside, since 2019" | centred, emblem top at 14% of hero height, wordmark block centred at 33% | fade-up once on load: opacity 0→1, translateY 12px→0, 0.9 s ease, delay 0.2 s; none in reduced-motion / `?sp-static` / editor | — (type + SVG) |
| 3 | "NO" / "YES" half-ring edge tabs, mid-height | "OVEN" / "BENCH" half-ring tabs; click swaps the hero photo between two frames | left and right viewport edges, vertical centre | crossfade 0.8 s ease between H1 and H2 | **H1 / H2** |
| 4 | Two outline capsule tabs, vertical labels, bottom corners | "BREAD" (→ Loaves) and "NOTES" (→ Journal) capsules | bottom-left / bottom-right, 32 px insets | fade-in 0.6 s ease after 1.0 s (CSS, once) | — |
| 5 | Ring dot menu top-left, outline bag icon top-right | Ring dot (home link desktop / menu toggle mobile) + outline basket (→ Standing Orders); centred text nav between them | top corners, nav centred 32 px from top | none | — |
| 6 | Foot of the scene: the table with the products on it | Info bar along the bottom edge: "Open today 07:00–15:00" · "From the oven today: country sourdough, dark rye, baguette, cardamom buns" · "Standing orders close 14:00 the day before" | bottom 0, full width, 56 px tall, text inset 112 px left/right (clear of the capsules) | none | — (sits on H1/H2) |

Mobile (390×844): items 1, 2, 5, 6 as above in flow; item 3 becomes the horizontal "Oven | Bench" pill under the subtitle; item 4 becomes the two horizontal pills at the end of the info bar (the info bar then wraps to 2 lines and sits **below** the photo crop, not over it — see section 3). Hero photo crop on mobile: `object-position: 62% 50%` so baker + oven stay in frame.

---

## 3. Home page

### Header (one menu only, centred nav)
- Home: header overlays the hero, transparent. Left ring dot (`top 32px; left 40px`), centred nav (Loaves · The Oven Day · Standing Orders · Neighbours · Journal · Visit) in Fraunces 500 0.75rem uppercase letter-spacing 0.08em, ink, gap 32 px, 32 px from top; right basket icon. No logo in the home header (the wordmark is in the hero, as in the reference).
- Inner pages: same row, plus a small stacked wordmark centred above the nav (emblem 28 px + "Mugi Bakehouse" Fraunces 500 1.125rem), header ground `#F9F6F2`, 1 px `#E7E5DD` bottom rule. Two header template parts: `header-home` and `header`.
- <782 px: nav goes into the core Navigation overlay; the overlay toggle is styled as the ring dot (top-left). Basket stays top-right.

### First screen composition (1440×900)
- H1 as the full-bleed layer (`.sp-parallax__layer` containing H1 and H2 stacked, H2 `opacity:0` until BENCH is chosen). No dark overlay; if the wordmark needs help, a top gradient `linear-gradient(to bottom, rgba(249,246,242,.35), rgba(249,246,242,0) 50%)`.
- Wordmark block (see KV #2): Fraunces 500, uppercase, `font-size: clamp(2.75rem, 4.8vw, 4.25rem)` (preset `xx-large`, the theme maximum, 68 px at 1440), line-height 0.98, letter-spacing 0.02em (tok(b) h2), ink `#1A1A1A`; subtitle Source Serif 4 1.125rem, letter-spacing 0.08em, 20 px below. Wordmark width ≈ 340 px at 1440: it is a stacked mark, not a giant centred headline.
- Info bar: ground `rgba(249,246,242,.88)`, 1 px `#1A1A1A` top rule at 60% opacity, three items separated by 1 px × 16 px vertical hairlines, Source Serif 4 0.875rem, letter-spacing 0.04em; the hours item has the mint `#BFEBD9` marker on "Open today".
- Forbidden on the first screen: table, form, search box, filled buttons, large saturated fields.
- Mobile 390: hero = photo 100vw × 72svh with the wordmark (2.5rem) over the pale wall area, the "Oven | Bench" pill under the subtitle; the info bar sits under the photo on `#F9F6F2` as three stacked lines + the two horizontal pills. No absolutely positioned text other than the wordmark block, which is centred in flow inside the Cover (no overlap with anything).

### Block order (10 blocks)
| # | Pattern | Purpose | Layout and photos | Copy |
|---|---|---|---|---|
| 1 | `front-hero` | key visual | section 2; **H1 + H2** (two frames) | ~35 words (wordmark, subtitle, info bar) |
| 2 | `front-street` | who the oven feeds | very large white space above (160 px). 12-col: label + h2 at cols 2–6 ("THE STREET OUTSIDE" small label 0.75rem tracked 0.08em; h2 "Bread for the / street outside." Fraunces 500 3rem); two paragraphs at cols 2–6; **S1** at cols 8–12, 4:5, radius 0 | 110 words, 2 paragraphs |
| 3 | `front-loaves-pair` | the two daily loaves (2-up, reference product rows) | section head: h3-size title "DAILY LOAVES" 1.75rem + 0.6875rem sub-label "Baked every opening day". 2 columns 582 px, gap 72 px: **P1** country sourdough, **P2** dark rye, 1:1 crops on pale grey ground; under each: name (Fraunces 500 1.5625rem uppercase), 0.75rem sub-label, 2-line description, T3 price row + slanted rule (12 px rise) | 2 × 35 words |
| 4 | `front-loaves-four` | the four smaller bakes (4-up) | 100 px below #3. Head "FROM THE SAME OVEN". 4 columns 254 px, gap 72 px: **P3** baguette, **P4** seeded spelt tin, **P5** cardamom buns, **P6** rosemary focaccia, 4:5 crops; same item anatomy, rule rise 6 px. Under the grid, right-aligned: text link "All loaves and prices" + long arrow | 4 × 20 words |
| 5 | `front-oven-day` | day-schedule: how the oven day is run | band `#E7E5DD` full-bleed. 12-col: left cols 1–5 two photos stacked with 24 px gap: **S2** shaping at the bench 4:5, **S3** cooling racks 3:2; right cols 7–12: head "THE OVEN DAY" + h2 "From 04:30 / to the last crate." 3rem; 7 hour rows (04:30, 05:30, 06:15, 07:00, 09:30, 11:00, 12:30, section 8), each row: time Fraunces 500 1.75rem nowrap left (in the T3 "price" slot), task title 1rem + one line, chip (who: "Lukas", "Ama"…) pink marker, slanted rule 12 px rise. Not a timeline: no vertical line, no dots. Capsule "The whole day" → The Oven Day | 40-word intro + 7 × 15 words |
| 6 | `front-counter` | full-width photo break | **S4** full-bleed 21:9 (desktop) / 4:5 (mobile), `sp-parallax`, `--sp-par: 8%`; under it (not over it) a caption row on `#F9F6F2`: left "07:00 — the door opens" Fraunces 500 1.5625rem, right one 30-word paragraph | 35 words |
| 7 | `front-standing-order` | how a standing order is kept | 12-col: text cols 2–6 (head "STANDING ORDERS", h2 "Same loaf, / same day, every week." 3rem, 2 paragraphs, 4 short facts as T3 rows without price: "Order by 14:00 the day before", "Two loaves a week minimum", "Pause with 48 hours' notice", "Pick up or bike delivery within 3 km"), photo **S5** cols 8–12, 3:4, top-aligned 80 px lower than the head (offset, not overlapping). Capsule "Start a standing order" | 120 words, 2 paragraphs |
| 8 | `front-neighbours` | the 3 neighbours we supply (stories) | head "NEIGHBOURS" + h2 "Who the crates / go to." 3rem. 3 columns (gap 72): **S6** Café Lune, **S7** Westpark Primary kitchen, **S8** Okafor Grocer; 4:5 crops; name, one-sentence story (30 words), T3 row with the delivery number as the "price" (e.g. "18" + suffix "baguettes a day") + chip (days) + arrow → Neighbours | 3 × 35 words |
| 9 | `front-notes` | journal ("day book") as text rows | head "DAY BOOK"; Query Loop of 4 latest posts as full-width rows: date chip (pink marker) left, title Fraunces 500 1.5625rem, category 0.75rem, long arrow right, slanted rule 12 px rise. No images in this block (keeps the home without repeats) | Query Loop |
| 10 | `front-visit` | visit + order close | band `#E7E5DD`. Left cols 1–6 **S9** baker at the counter window 4:5; right cols 7–12: h2 "Come by / before the rye runs out." 3rem, address, the opening-hours list as 3 T3 rows (Tue–Sat 07:00–15:00 / Sun 08:00–13:00 / Mon closed), capsules "Directions" (→ Visit) and "Write to us" (mailto) | 60 words |

Copy totals: English home ≥ 300 words; narrative paragraphs in #2, #5 (intro), #7 (≥ 3). CJK home ≥ 500 characters.

**Home photo positions: 17** — H1, H2 (hero frames) · S1 · P1 P2 · P3 P4 P5 P6 · S2 S3 · S4 · S5 · S6 S7 S8 · S9. No image repeats on the home.

### Comparison with recent themes
| # | Tomari Marina | Wariate Shifts | Kango College | Nodo Clinic | **Mugi Bakehouse** |
|---|---|---|---|---|---|
| 1 | hero | hero | hero | hero | **full-bleed photo with two switchable frames, edge half-rings, corner capsules, info bar** |
| 2 | statement | week | three paths | opening | **street intro: text left, 4:5 photo right** |
| 3 | pinned 3-step berths | why | voices | complaints | **2-up product columns with slanted-rule price rows** |
| 4 | dawn photo | demo | day rows | walk | **4-up product columns** |
| 5 | harbour board + fee table + sticky tab | shops | admit | pace | **oven day: 7 hour rows on a band, two stacked photos** |
| 6 | crew | morning photo | lab | corridor | **full-bleed parallax photo + caption row below** |
| 7 | logbook stories | hour | band | roster | **standing order: text + offset photo** |
| 8 | booking close | prices | notes | stories | **3 neighbour stories** |
| 9 | — | stories | close | notes | **day book text rows** |
| 10 | — | FAQ, book | — | close | **visit close on band** |

Why not alike: Mugi leads with products in blocks 3–4 (none of the four do), its day schedule is a ruled ledger on a band with stacked photos (not Kango's day rows: no image-per-row, no alternating; not Tomari's pinned steps; not a timeline), it has no FAQ, no fee table on the home, no people block, no sticky tab. Its shapes (edge half-rings, corner capsules, slanted 1 px rules, marker chips) appear in none of them.

---

## 4. Inner pages (8 pages + post templates)

Common page head (all pages): `#F9F6F2`, 120 px top padding, label 0.75rem tracked 0.08em + h1 Fraunces 500 `clamp(2.5rem, 4.4vw, 3.5rem)` uppercase-free sentence case, two lines in en; 1-paragraph standfirst (max 640 px); then a full-width photo (radius 0) unless stated. Fixed T1 tabs and T2 capsules on every page (≥782). No sidebar.

1. **Loaves** (`page-loaves`): head photo **S3** 21:9. Section "Daily loaves" 2-up (P1, P2) and "From the same oven" 4-up (P3–P6) exactly as home #3/#4 but with 60-word descriptions and an ingredients line. Then **price table** (section 5 rules): Loaf · Weight · Bake days · Price, 6 rows. Close: allergens paragraph (wheat, rye, spelt, sesame; nuts not used) + capsule → Standing Orders.
2. **The Oven Day** (`page-oven-day`): head photo **H1** in a `sp-parallax` band 21:9 (`--sp-par: 8%`). All 9 hour rows (section 8) as T3 rows, two columns at ≥1024 (time+task left 7/12, who+note right), with **S2** after 05:30 and **S4** after 07:00 as 3:2 inset photos at cols 2–8. Close: "What the evening is for" paragraph (16:00 levain feed) + capsule → Standing Orders.
3. **Standing Orders** (`page-standing-orders`): head **S5**. 3 plans as T3 rows with price per week (section 8). "How it is kept" 4 facts as T3 rows. A 6-row **price table** "Single loaves for standing orders" (same 6 loaves, same prices). Order = capsule mailto + phone. No form on the first screen; a simple email link is enough.
4. **Neighbours** (`page-neighbours`): head no photo; 3 long stories (≈150 words each) alternating photo left/right at 5/12: **S6** Café Lune, **S7** Westpark Primary kitchen, **S8** Okafor Grocer; each ends in its T3 row (delivery number, days chip, arrow → Standing Orders).
5. **About / The Bakers** (`page-about`): head **S9** 3:2. Founding story (2019, Ines and Tomasz, the second-hand deck oven), "Why one oven" paragraph, then 7 people as T3 rows (name in the price slot Fraunces 1.75rem, role chip, one-line duty, start hour). No portraits grid.
6. **Flour & Grain** (`page-flour`): head **S10** 3:2. 3 grain rows (mills and distances, section 8) as T3 rows with km in the price slot; paragraph on levain (one starter kept since 2019); **H2** inset 4:5 at the levain paragraph; **P2** at the rye paragraph.
7. **Journal** (`home.html` posts page, `archive.html`, `category.html`, `tag.html`): head "Day book / Notes from the bench." First post large (featured image 3:2 cols 1–7, text cols 8–12), then rows like home #9 but with a 4:5 thumbnail 120 px at the left of each row. Single (`single.html`): category label, title 3rem, date chip, featured image 3:2 full content width, text column 680 px, slanted rule under the title row.
8. **Visit & Contact** (`page-visit`): head **S4** 21:9. Address block, 7 opening-hours rows (Mon closed … Sun 08:00–13:00) as T3 rows, how to find us (tram 4 to Spelt Yard stop, bike rack for 12, step-free door), phone, email, capsules "Call" / "Write". No map embed.
9. 404 / search: page head + capsule "Back to the bakehouse".

Required by repo contract: theme-meta `pages` home, about, news (posts page), article (a post), category, tag, newsletter (→ posts page), contact (→ Visit). Demo posts (6) with categories **Bakehouse**, **Loaves**, **Neighbours** and tags (sourdough, rye, levain, standing-orders, street, seasons). Exactly one page with role `posts` (Journal, empty content).

Journal posts (titles, featured images): 1 "Why the oven is lit at 04:30" — H2 · 2 "A week of rye from Lindenhof mill" — S10 · 3 "Cardamom buns on Saturdays" — P5 · 4 "Cooling is part of the bake" — S3 · 5 "Bread for a school kitchen" — S7 · 6 "Crates on the street at 12:30" — S1.

---

## 5. Responsive rules (binding; auto-gates checks them)
- **390 px first screen:** no vertical text, no absolutely positioned labels except the wordmark block centred in flow inside the Cover; edge half-rings and corner capsules hidden (`display:none` below 782 px); the Oven/Bench pill and Bread/Notes pills are horizontal and in flow; nothing overlaps.
- **Price tables (Loaves, Standing Orders) at ≥782 px:** table spans the full content width (`width:100%`, `alignwide` 1236 px), `table-layout: auto`, price column last, `white-space: nowrap; text-align: right; padding-right: 0`, never clipped or overflowing at 800 and 1280. Table rows separated by 1 px `#1A1A1A` at 25%; the last row ends in the slanted rule.
- **Any table <782 px:** stacked: each row becomes a block (`display:block`), cells as label/value lines using `data-label` written in the markup (not CSS `content`), price on its own line right-aligned.
- 2-up → 1 column <782; 4-up → 2 columns 782–1023, 2 columns <782 (gap 24 px); side margin `clamp(20px, 7.1vw, 102px)` (tok(c) 102 px at 1440).
- No horizontal overflow at 390 or 1280 (`html, body {overflow-x: clip}`).

---

## 6. Colour (reference hex, kept exact unless noted)

| Role | Hex | Source | Use | Share |
|---|---|---|---|---|
| Ground | `#F9F6F2` | tok(a) page ground, exact | page ground, info bar, capsule fill | ~55% |
| Ink | `#1A1A1A` | tok(a) text ink, exact | text, rules, ring/capsule outlines | ~20% |
| Band | `#E7E5DD` | tok(a) footer band, exact | oven-day band, visit band, footer, hover | ~12% |
| Russet (main) | `#6B4540` | design-plan ebicha (russet); **replaces** the reference's gold outline (`~#C8B27A`) | outlined "BAKE" line, emblem, active tab fill (10%), link hover, focus ring | ≤4% |
| Pink marker | `#F9D4D8` | tok(a) pink highlight, exact | bake-day / date chips | <1% |
| Mint marker | `#BFEBD9` | tok(a) mint chip, exact | "Daily" / "Open today" chips | <1% |
| Muted text | `#5C5752` | derived from ink on ground | sub-labels, meta | — |
| Photo grade | desaturated warm grey `~#D8CFB4` wall / `#FAFAF8` highlights | tok(a)(e) | hero and all photos | photos |

- Why the one swap: the design row fixes the palette to ebicha (russet) russet, and a gold outline on a film-grain wall reads weak; russet keeps the same role (one outlined line + emblem) at a similar share.
- Not beige-led: ground is near-white `#F9F6F2`; `#E7E5DD` only as bands.
- Contrast: ink on ground 16.9:1; ink on band 14.3:1; russet links on ground 8.6:1.
- **First-screen saturated share:** reference ~3% (tok(a)). Hard limit for `scripts/check-first-screen.py` = **15%**; target **≤ 8%**. Achieve with desaturated photo grade (no orange oven glow beyond a small area; warm greys), no coloured UI except the tiny mint chip.

## 7. Typography (font_direction = serif)
- Latin display: **Fraunces** (variable, opsz 9–144, wght 400–600; use 500 as the reference heading weight tok(b)). Latin body: **Source Serif 4** (variable, 400/600, italic 400).
- zh-TW headings: **Noto Serif TC** (Mincho/Ming serif, subset), ja headings: **Noto Serif JP** (Mincho/Ming serif, subset), both bundled.
- Stacks (theme.json `fontFamilies` + `fontFace`, so editor and front end load the same files):
  - display: `"Fraunces", "Noto Serif TC", "Noto Serif JP", Georgia, serif`
  - body: `"Source Serif 4", Georgia, "Times New Roman", serif`
  - `:root:lang(zh-TW)` display: `"Fraunces", "Noto Serif TC", "Songti TC", "PMingLiU", serif`; body: `"Source Serif 4", "Songti TC", "PMingLiU", "Noto Serif CJK TC", serif` (must not contain the bundled Noto Serif TC nor any JP family — repo contract)
  - `:root:lang(ja)` display: `"Fraunces", "Noto Serif JP", "Hiragino Mincho ProN", "Yu Mincho", serif`; body: `"Source Serif 4", "Hiragino Mincho ProN", "Yu Mincho", "Noto Serif CJK JP", serif`
  - Because style.css uses `:lang(`, copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and require it in functions.php. Subset fonts per the Hokuto/Hada method (the CJK subset script is known broken).
- Size presets (rem): small 0.75 (12 px captions, tok(b) 11–12) · base 1.125 (18 px body, tok(b)) · medium 1.5625 (25 px h3, tok(b)) · large 1.75 (28 px section titles/prices, tok(b)(c)) · x-large 3 (48 px h2, tok(b)) · **xx-large 4.25** (68 px, hero wordmark; theme maximum, ≥ 4.25rem satisfied). Extra tiny 0.6875 (11 px suffix, tok(b)) as a custom size.
- Weights / line-height / tracking: h2 500, lh 1.1, ls 0.02em, uppercase on section labels and h3 only (tok(b)); h2 headlines sentence case; h3 500, lh 1.24 (31/25, tok(b)), ls 0.04em (≈1 px); body 400, lh 1.8 (tok(b)), Latin ls 0.01em (the reference's 0.08em is a Japanese-gothic value; on a Latin serif it breaks word shapes, so 0.08em is kept for labels, nav, subtitle and CJK body only); CJK size ≈ 0.75× English for headings, body lh 1.85, ls 0.08em (tok(b) exact); fr/de `hyphens: auto`.

---

## 8. Fixed numbers (identical on Home, inner pages, footer and all five languages)

**Loaves (6) — prices EUR**
| # | Loaf | Weight | Bake days | Price | Image |
|---|---|---|---|---|---|
| 1 | Country Sourdough | 900 g | Daily (Tue–Sun) | €6.80 per loaf | P1 |
| 2 | Dark Rye | 1 kg | Tue–Sat | €7.40 per loaf | P2 |
| 3 | Baguette | 250 g | Daily | €2.60 each | P3 |
| 4 | Seeded Spelt Tin | 800 g | Tue, Thu, Sat | €5.90 per loaf | P4 |
| 5 | Cardamom Bun | 90 g | Fri–Sun | €3.20 each | P5 |
| 6 | Rosemary Focaccia | slab 400 g | Wed–Sat | €4.50 per slab | P6 |

**Standing order plans (per week):** Weekday Loaf — 2 Country Sourdough a week, €13.00 · Family Table — 3 loaves of your choice + 4 baguettes, €28.00 · Street Kitchen (cafés, schools, grocers) — from 10 loaves a day, priced per loaf at −10%. Order by **14:00 the day before**; minimum **2 loaves a week**; pause with **48 hours'** notice; pickup or bike delivery within **3 km** (€1.50 per round).

**The oven day (9 rows; the home shows the first 7):** 04:30 mix and autolyse (Lukas) · 05:30 divide and shape at the bench (Ama) · 06:15 first bake: sourdough into the deck oven (Ines) · 07:00 doors open, counter (Priya) · 09:30 rye and buns bake (Mei) · 11:00 standing orders packed into crates (Priya) · 12:30 bike rounds go out (Hugo) · 15:00 doors close · 16:00 levain fed for tomorrow (Tomasz).

**People (7):** Ines Moreau — head baker, co-founder · Tomasz Wierzbicki — co-founder, oven and flour · Ama Owusu — bench lead · Lukas Brandt — early mixer · Priya Raman — counter and standing orders · Hugo Lindahl — bike rounds · Mei Chen — buns and pastry.

**Neighbours (3 stories):** Café Lune — 18 baguettes a day, Tue–Sun · Westpark Primary kitchen — 12 Seeded Spelt Tins a day, Mon–Fri term time (packed the afternoon before) · Okafor Grocer — 8 Dark Rye + 6 Country Sourdough, Tue and Fri.

**Flour & Grain (3 mills):** Lindenhof mill (rye) 38 km · Molen Ter Beke (wheat) 22 km · Haverveld farm (spelt) 54 km. One levain since 2019.

**Place and time:** 9 Spelt Yard, 9000 Ghent, Belgium (fictional); tram 4, Spelt Yard stop; Tue–Sat 07:00–15:00, Sun 08:00–13:00, Mon closed; founded 2019. Never claim awards, organic certification, guaranteed freshness claims or real press.

---

## 9. Photos (18, IMAGERY = photo, Grok, one at a time, read each)

STYLE (this exact string on every prompt):
`film photograph, 35mm, soft visible film grain, high-key soft window daylight, desaturated warm greys with muted russet and pale plaster tones, flour dust in the air, pale limewashed walls, worn wood and steel, calm documentary moment in a small modern neighbourhood bakery, diverse adults, international neutral setting, no text, no logos, no brand marks, no signage lettering, no Japanese elements`

Product shots P1–P6 add: `top-down on a pale grey linen ground, centred, generous empty margin, single item`.
All ≤ 300 KB, ≤ 2000 px, WebP, 0 cutouts, one readme.txt line each (AI-generated, CC0).

| ID | Subject / composition | Ratio | Used on (once per page) | Home |
|---|---|---|---|---|
| H1 | Wide interior at 06:15: pale limewashed plaster wall filling the upper 45% of the frame (empty, for type), steel deck oven with open door lower right, baker in apron sliding a long wooden peel with three loaves into it, colleague softly out of focus at a floured bench lower left dusting flour, side window light from the right | 16:10 (2000×1250) | Home hero frame OVEN; Oven Day head | ✔ |
| H2 | Same room, reverse station: pale wall upper 45%, colleague in the foreground lower half dusting flour across rows of shaped loaves on a long wooden bench, the deck oven soft in the background right, flour haze in the light | 16:10 | Home hero frame BENCH; Flour & Grain inset; Journal post 1 | ✔ |
| S1 | Bakery door at dawn from the street: open door, two stacked wooden crates of loaves on a cargo bike, pale facade, no lettering | 4:5 | Home street; Standing Orders (delivery); Journal post 6 | ✔ |
| S2 | Hands dividing and shaping dough on a floured bench, close | 4:5 | Home oven day; Oven Day inset | ✔ |
| S3 | Tall cooling racks full of crusty loaves by a window | 3:2 (21:9 crop on Loaves) | Home oven day; Loaves head; Journal post 4 | ✔ |
| S4 | Wide shop counter at opening: wooden shelves of loaves behind a plain counter, window light, baker turning the door sign (blank) | 21:9 | Home counter (parallax); Oven Day inset; Visit head | ✔ |
| S5 | Linen-lined crates being packed with loaves and plain paper bags (no print) on a steel table | 3:4 | Home standing order; Standing Orders head | ✔ |
| S6 | Café table by a window: sliced baguette, butter, two coffees, a person's hands | 4:5 | Home neighbours; Neighbours story 1 | ✔ |
| S7 | School kitchen: cook slicing seeded tin loaves on a large board, steel worktops | 4:5 | Home neighbours; Neighbours story 2; Journal post 5 | ✔ |
| S8 | Small grocer's wooden shelf with rye and sourdough loaves beside vegetables, grocer arranging them | 4:5 | Home neighbours; Neighbours story 3 | ✔ |
| S9 | Baker in apron at the counter window holding a loaf, three-quarter view, calm | 4:5 (3:2 crop on About) | Home visit; About head | ✔ |
| S10 | Hands holding rye and spelt grain over an open flour sack, mill-room light | 3:2 | Flour & Grain head; Journal post 2 | — |
| P1 | Round country sourdough loaf, ear and flour pattern | 1:1 | Home 2-up; Loaves | ✔ |
| P2 | Dark rye loaf, cracked top, one slice cut | 1:1 | Home 2-up; Loaves; Flour & Grain inset | ✔ |
| P3 | Two baguettes side by side, diagonal | 4:5 | Home 4-up; Loaves | ✔ |
| P4 | Seeded spelt tin loaf | 4:5 | Home 4-up; Loaves | ✔ |
| P5 | Three cardamom knot buns | 4:5 | Home 4-up; Loaves; Journal post 3 | ✔ |
| P6 | Rosemary focaccia slab on parchment | 4:5 | Home 4-up; Loaves | ✔ |

Per-page check: Home 17 positions (H1 H2 S1 P1 P2 P3 P4 P5 P6 S2 S3 S4 S5 S6 S7 S8 S9), no repeat. Loaves: S3, P1–P6. Oven Day: H1, S2, S4. Standing Orders: S5, S1. Neighbours: S6, S7, S8. About: S9. Flour & Grain: S10, H2, P2. Visit: S4. Journal index: posts 1–6 = H2, S10, P5, S3, S7, S1 (each once).
Images must keep the upper wall area of H1/H2 calm and pale (the wordmark sits there). Reject any frame with lettering, logos, warped hands or a strong orange glow.

---

## 10. Scroll effects (sp-scroll; max 3 kinds; hero has no reveal)
| Effect (sp class) | Applied to | Reference source (trigger / time / easing) | Values |
|---|---|---|---|
| `sp-reveal sp-reveal--up` | home #2 text column and S1, #3 two loaf columns, #5 hour rows (each row), #7 text and S5, #10 text column; inner pages: loaf columns, story blocks, people rows | noraisinsandwich.com `js_anime--showUp`: fade-up on entering the viewport, ~0.6–0.8 s, default `ease` (tok(g), stage-a) | `--sp-dur: .7s; --sp-ease: ease; --sp-dist: 24px` |
| `sp-stagger` (parent) + `sp-reveal--up` children | home #4 4-up grid, #8 three neighbours, #5 hour-rows wrapper | same showUp applied per item in the reference's product grids (`ref/nora-grid.png`) | default 0.12 s step |
| `sp-parallax` | home #1 hero (layer = H1/H2 stack), home #6 S4, Oven Day head band (H1) | `js_parallax` / `js_parallax_inner`: inner layer translateY 90 px at scrollY 700, linear with scroll (tok(g)) | hero `--sp-par: 10%` desktop, `6%` <782; S4 `8%`, mobile `6%`; Oven Day `8%` |
Not animated: hero content (only the CSS load fade of the wordmark and capsules, disabled by `html.sp-no-motion`, reduced motion and in the editor), price tables, forms, the day-book Query Loop, footer, legal text.

### Parallax (required)
- **Hero:** Cover/Group `front-hero` gets `sp-parallax`; the moving layer `.sp-parallax__layer` holds H1 and H2 (absolutely stacked imgs, `object-fit: cover`); foreground (wordmark, Oven|Bench pill on mobile, info bar) is **outside** the layer. `--sp-par: 10%` (≈90 px over a 900 px hero, matching the reference's 90 px at 700 px scroll), mobile `6%`.
- **Mid-page:** `front-counter` S4 full-bleed with `sp-parallax`, `--sp-par: 8%`, caption row below it (not in the layer). Mobile kept at 6%.
- Must pass `check-parallax.mjs` (≥ 6 px layer offset desktop and mobile, 0 under reduced motion).

---

## 11. Similarity table (target ≈ 80%)
| Dimension | Reference value (token) | Mugi value |
|---|---|---|
| Ground / ink / band | #F9F6F2 / #1A1A1A / #E7E5DD (a) | same |
| Highlights | pink #F9D4D8, mint #BFEBD9 on tiny chips (a) | same, same role |
| Wordmark accent | gold outlined middle line | russet #6B4540 outlined middle line (palette rule) |
| First-screen saturation | ~3% (a) | target ≤ 8%, limit 15% |
| Heading size / weight | h2 48 px 500 ls 0.02em; h3 25/31 px 500 (b) | 3rem 500 0.02em; 1.5625rem lh 1.24 500 |
| Body | 18 px, lh 1.8, ls 0.08em (b) | 1.125rem, lh 1.8; ls 0.08em on CJK and labels, 0.01em Latin serif |
| Price | ~28 px 500 + 11 px suffix (b) | 1.75rem 500 + 0.6875rem suffix |
| Font genre | grotesque Latin + Japanese gothic | serif (Fraunces / Source Serif 4 / Noto Serif) — required by the design row |
| Container / margins | ~1236 px, 102 px sides (c) | 1236 px, `clamp(20px, 7.1vw, 102px)` |
| Product grid | 2-up 582 px gap 72; 4-up 254 px gap 73 (c) | 2-up 582 gap 72; 4-up 254 gap 72 |
| Group spacing | ~100 px; head 28 px + 11 px sub-label (c) | 100 px; 1.75rem + 0.6875rem |
| Radius / shadow | 0 / none (d) | 0 / none (pills 999 px only) |
| Product rule | slanted 1 px ink (d)(f) | slanted 1 px ink, 12 px / 6 px rise |
| Capsules | 28×68, 1 px, pill, bottom corners (d)(f) | 28×84, 1 px, pill, bottom corners |
| Edge tabs | half-rings 80 px, mid-height, stacked letters (f) | half-rings 88 px, mid-height, stacked letters |
| Corner icons | 6 px ring dot TL, bag TR (f) | ring dot TL, basket TR |
| Hero image | one full-bleed 1.6:1 high-key still life, pale wall upper half (e) | full-bleed 1.6:1 high-key film-grain interior, pale wall upper 45% |
| Product photos | top-down on pale grey, 1:1–4:5, radius 0 (e) | top-down on pale grey linen, 1:1 / 4:5, radius 0 |
| Reveal | fade-up on enter ~0.7 s ease (g) | sp-reveal--up 0.7 s ease, 24 px |
| Parallax | inner layer 90 px @ 700 px scroll (g) | sp-parallax 10% hero, 8% S4 |
| Shadows / filled buttons | none | none |

---

## 12. Home acceptance checklist
1. First screen at 1440×900: full-bleed H1 with pale upper wall; emblem + stacked "MUGI / BAKE / HOUSE" with outlined russet "BAKE" centred in the upper third (≤ 4.25rem, not a giant headline); OVEN / BENCH half-rings at both edges mid-height; BREAD / NOTES capsules at both bottom corners; ring dot TL, basket TR, centred nav; info bar along the bottom with hours, today's bake and the 14:00 cut-off. All six KV items visible.
2. Clicking BENCH swaps to H2 (crossfade), OVEN back to H1; keyboard works; `aria-pressed` updates.
3. 390×844: no vertical text, half-rings and corner capsules hidden, horizontal Oven|Bench pill and Bread/Notes pills in flow, no overlapping text (auto-gates).
4. Block order equals section 3 (10 blocks); 17 photo positions, no repeats.
5. T3 slanted rules visible under every loaf (2-up 12 px rise, 4-up 6 px), every hour row, every neighbour, every day-book row; prices `nowrap`; marker chips pink/mint flat.
6. Colours: ground #F9F6F2, ink #1A1A1A, band #E7E5DD on #5 and #10 and footer; russet only on the outlined line, emblem, active tab, links; `check-first-screen.py` ≤ 15% (target ≤ 8%).
7. Fonts: Fraunces + Source Serif 4 via theme.json fontFace; same in editor and front end (`check-editor-fonts.mjs`); max preset 4.25rem.
8. Motion: sp-reveal--up + sp-stagger + sp-parallax only; hero no reveal; `check-parallax.mjs` passes (hero and S4 move ≥ 6 px; reduced motion 0).
9. Copy: ≥ 300 English words, ≥ 3 narrative paragraphs; prices, hours, plan prices and the 14:00 cut-off identical to section 8.
10. No table/form/search on the first screen; no filled buttons, shadows, radius other than pills, side rail, people grid, step grid, timeline line, collage or cutouts.
