# Shirota Laundry: design spec (stage 1, binding for implementation)

Row b11-6 · card-mosaic · hero text-left-photo-right · nav centred · first screen three-equal-columns · page_structure service-index · business · photo (high-key) · font_direction **serif**.
Primary reference **union-tec.jp** (https://www.union-tec.jp/), secondary **rondomark.jp** (https://www.rondomark.jp/, palette/tracking only). Tokens: `brand/reference-tokens.md` (cited below as `tok(a)…tok(g)`). No asset, text or logo of either site is copied; photos are generated, copy is our own.

Idea in one line: **the white page is a freshly pressed sheet.** union-tec's hairline grid becomes the weave of the sheet, its giant wordmark becomes a ghost "SHIROTA" pressed into the cloth, and its oval porthole looks onto the roller iron.

---

## 1. Signature techniques (three, all visible at a glance)

### T1. Tall oval photo window over a ghost wordmark (union-tec hero, rest state after scroll)
- Reference: union-tec's first screen puts a ≈510×350 superellipse photo window over a 190px black wordmark; after ~350px of scroll the oval becomes a tall portrait oval ≈375×540 at the right (x≈875–1250, ≈26% of width) and the wordmark fades to ghost grey ≈#F5F5F5 (`tok(e)`, `tok(f)`, screenshot `scroll-union-hero-after.png`). We use that **rest state** as our hero (the plan demands text-left-photo-right and our rules forbid giant centred text).
- Home: hero (block H1). Inner pages: every page head (smaller oval, see §1 continuation).
- Geometry at 1440×900: oval box 375×540 (aspect 0.69:1), left edge x=875, top y=180; `border-radius: 50% / 42%` (superellipse-like, flatter sides than a pure ellipse), `overflow: clip`. Photo 01 inside, object-fit cover, focus on the hands and the sheet entering the rollers. At 1280: 340×490, right edge 24px from the grid's 7th line. At ≤781px: oval width 78vw, aspect 0.72, centred-right (margin-left auto, margin-right 24px), placed after the H1 in normal flow.
- Ghost wordmark "SHIROTA": Schibsted Grotesk 800, `font-size: clamp(7rem, 17.5vw, 16rem)`, letter-spacing −0.02em, line-height .8, colour `#F3EFEF` (ghost, ref #F5F5F5 warmed toward the accent), `aria-hidden="true"`, starts at x=−0.04em (bleeds off the left edge) and is cut by the right edge; vertical centre ≈ y 450. Desktop: absolutely positioned **behind** the H1 and oval (z-index 0; the oval sits over the letters "OT"). ≤781px: `position: static`, in flow at the top of the hero above the H1, font-size 30vw, overflow clip on the hero (no overlap with any text).
- Must not be diluted: the oval must be clearly tall (height ≥1.35× width), must cover part of the wordmark on desktop, and the wordmark must span edge to edge (not a centred title, not a small logo). Ghost colour stays visible against white (#F3EFEF, not #FAFAFA).

### T2. Full-page hairline grid with intersection ticks, wavy in the hero (union-tec decoration)
- Reference: 8-column 1px hairline grid (#E3E3E3) with small ticks at the intersections, fixed behind all content, slightly warped in the hero (`tok(c)`, `tok(f)`; cell ≈176px at 1440, 24px side gutter).
- Ours ("sheet weave"): `body` background (front end only, also in editor) = 8 vertical + horizontal hairlines, 1px `#E5E1E1`, cell = `(100vw − 48px)/8` wide and 176px tall, `background-attachment: fixed`, offset 24px; intersection ticks = 5px crosses `#C9C1C0` (CSS radial/linear gradient layer or a tiny repeated SVG). Hero only: an inline decorative SVG (`assets/images/weave-wave.svg`, aria-hidden) of 9 gently waving horizontal lines (amplitude 6–10px, stroke 1px #E5E1E1) replaces the straight horizontals inside the hero.
- Cards, header and footer are opaque (#FFFFFF or card grey) so the grid shows only in the gaps — exactly as on union-tec s4.
- Home: everywhere. Inner pages: everywhere (same body background).
- Must not be diluted: lines must be visible at 100% zoom (do not go lighter than #E8E4E4), ticks present, 8 columns on desktop (4 on ≤781px).

### T3. Staggered capability cards sitting in grid cells + ruled section heads (union-tec Capability / Service)
- Reference (`union-s4.png`): square light-grey cards (#F7F7F7, radius 0, no shadow/border) placed on grid cells but staggered vertically by about half a cell; each holds a small English label, a 1px outlined oval line icon (~70×100) and a two-line heading at bottom-left. Section heads: a 1px ink rule across the full content width, title 44px bold left with a small sub-label under it, paragraph starting at the column-4 line on the right.
- Ours: the **service mosaic** (home block H5) and the section heads of every block. Cards: 352×352 (2 grid cells) at 1440, background `#F6F4F4`, radius 0, padding 24px; top-left eyebrow (Schibsted Grotesk 700 11px), centre a 1px `#111111` outline oval icon set (one to five ovals, 70×100 each; e.g. stacked ovals = stacked towels — draw as inline SVG, no clip-art), heading bottom-left Newsreader 500 1.5rem/1.2. Alternate cards are photo cards: same 352×352 frame with an oval photo (260×300, `border-radius:50%/42%`) centred on `#F6F4F4`. Columns 2–3, 4–5, 6–7 (grid lines), second and fourth cards shifted down 176px (one cell), so the mosaic reads as a staggered checkerboard on the weave.
- Section head: `border-top: 1px solid #111111`, padding-top 24px, H2 left (cols 1–3), small serif sub-label under it, intro paragraph from col 4 to col 8.
- Must not be diluted: radius 0, no shadows, vertical stagger visible (≥120px), outline icons 1px ink (not filled, not accent-coloured).

### Supporting (counted as detail, not a signature)
- Pills (`tok(d)`): 216×48 radius 9999, 6px dot at left 20px; ink fill white text, or 1px ink outline. Header right: stacked pill pair 24px tall (Collection = ink / Rates = outline) like union's Contact/Menu.
- rondomark: wide tracking .08em on CJK headings (zh-TW/ja H2), soft band `#F0F0F0` for the CTA block.

### Continuation to inner pages (required)
| Page | T1 oval + ghost word | T2 weave | T3 cards / ruled head |
|---|---|---|---|
| Services (index) | head: oval 300×430 right (photo 10), ghost "SERVICE" | yes | full service mosaic (6 cards) + ruled heads |
| How it works | head: oval (photo 11), ghost "06:00" | yes, wave in head | ruled index rows of the 5 steps with oval thumbnails 120×170 (photos 08, 10, 14, 13) |
| Hotels & hospitality | head: oval (photo 04), ghost "HOTEL" | yes | 4-card mosaic (bed linen, towels, robes, F&B linen) |
| Clinics & care | head: oval (photo 05), ghost "CLINIC" | yes | 4-card mosaic (gowns, scrubs, curtains, mattress covers) |
| Linen rental | head: oval (photo 16), ghost "RENTAL" | yes | 3 set cards with oval icons |
| Rates | head: oval (photo 03), ghost "RATES" | yes | ruled head + full-width rate table |
| Quality & hygiene | head: oval (photo 12), ghost "71°C" | yes | 4 cards (temperature, inspection, mending, traceability) |
| About & people | head: oval (photo 14), ghost "1987" | yes | people list (ruled rows, not a grid of 4) |
| Client stories | head: oval (photo 07), ghost "STORIES" | yes | 3 story cards staggered |
| Contact & area | head: oval (photo 08), ghost "SHIROTA" | yes | ruled head + hours/address rows |

Page head layout: same as hero but shorter (min-height 640px desktop): breadcrumb-like eyebrow, H1 `clamp(2.75rem, 5vw, 4.25rem)` left, 1 lead paragraph, oval right at x≈62–88%, ghost word 12vw behind. Mobile: ghost word static on top, oval after the text.

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
- Scene: a white page crossed by a faint, slightly warped hairline grid; a huge black "UNION TEC" wordmark spans the width; an oval porthole floats over its middle showing a real photograph (artwork in an office); a Japanese sentence is spaced across the bottom in equal intervals; Contact/Menu pills fixed top-right.
- Story: "a space is more than a box — it moves people": the company's name is the frame, the oval is a window onto human activity behind it.
- Signature motion: on scroll the oval travels to the right and stretches into a tall portrait, the wordmark fades to ghost grey, the lead sentence fills grey→black, then the photo opens to full bleed with a small oval inset (`tok(g)`).

### (2) Our translation (commercial laundry for hotels and clinics)
- Same composition: white page = pressed sheet; weave grid = cloth; ghost "SHIROTA" wordmark across the width; tall oval porthole at right onto a **high-key photograph of an operative guiding white linen into the roller iron** (same image type: real documentary photo).
- Same story: "laundry is more than washing — it is the morning your guests and patients wake to". The bottom spaced sentence becomes our **three equal columns** (06:00 collection / 24 h cycle / 07:00 packed delivery), one per third, as union spaces its line across the width.
- Same motion idea with sp-scroll only: the oval photo moves inside its window (sp-parallax, the "travelling oval"); the next block opens into a **full-bleed packing-hall photo with a small oval inset top right** (sp-parallax), exactly the reference's stage after the oval. Wordmark is shown in its ghost end state (no custom scroll scrub).

### (3) KV checklist (all six in the first screen or the first full-bleed block, visible)
| # | reference element | our counterpart | position | motion | image used |
|---|---|---|---|---|---|
| 1 | Giant wordmark edge to edge | Ghost "SHIROTA", Schibsted Grotesk 800, 17.5vw, #F3EFEF, bleeding both edges | first screen, behind everything, centre y≈450 (mobile: in flow at top) | none (= reference's post-scroll ghost state) | — (text, aria-hidden) |
| 2 | Oval photo window (porthole) | Tall oval 375×540, `border-radius:50%/42%`, roller-iron photo | right, x 875–1250, y 180–720 @1440 | `sp-parallax`, `--sp-par: 10%` (mobile 6%) | 01 hero-roller-iron |
| 3 | Warped 8-col hairline grid with ticks | Weave grid 1px #E5E1E1 + 5px ticks; wave SVG in hero | full viewport, fixed | static | — (CSS/SVG) |
| 4 | Lead text lower-left | H1 "From morning collection to packed delivery." Newsreader 400 4.5rem, 3 lines + 1 lead paragraph + 2 pills | left, cols 1–4, y≈250–640 | none on H1/hero (rule: no reveal in hero) | — |
| 5 | Sentence spaced in equal thirds along bottom + fixed pill pair | Three equal columns with hairline top: "06:00 Morning collection" / "24 h Collected to shelf" / "07:00 Packed delivery"; header pill pair top-right | bottom band y≈780–880; pills top-right | pills hover dot nudge 4px, .8s cubic-bezier(.43,.05,.17,1) | — |
| 6 | Full-bleed photo with small oval inset (stage after the oval) | Full-bleed packing-hall photo + oval inset 320×220 top-right showing folded towels | home block H3, directly after the statement | `sp-parallax` on band `--sp-par: 8%` | 02 packing-hall, 03 towels-inset |

---

## 3. Colour (`tok(a)`; reference relation kept: white ground, near-black ink, colour only inside photos, one quiet accent)
| Role | Hex | Share (page / first screen) | Source |
|---|---|---|---|
| base | `#FFFFFF` | 70% / ~76% | union ground #FFFFFF |
| ink | `#111111` | 7% / ~7% | union #000000 (+6.7% lightness, softer on serif) |
| card ground | `#F6F4F4` | 12% / 0 | union card ~#F7F7F7, tinted 1% toward accent |
| soft band | `#F0F0F0` | 4% / 0 | rondomark ground #F0F0F0 |
| ghost wordmark | `#F3EFEF` | – / ~9% | union ghost ~#F5F5F5 warmed |
| grid hairline | `#E5E1E1` (ticks `#C9C1C0`) | <1% | union ~#E3E3E3 |
| accent red-mouse | `#8A6A68` | ≤3% | plan hex (union has no UI accent → we add one quiet accent; S≈0.25, not "saturated") |
| muted text | `#6B6463` | 3% | ink at ~60% |
- Accent used only for: pill dots, eyebrow labels, step numbers, link underline on hover, the 2px rule over the rate table header. Never as a fill larger than 48px tall.
- rondomark taupe #938978 is **not** used (two warm greys next to #8A6A68 muddy the accent).
- First-screen saturated share (S>0.35) ≤ 8% target, hard cap 15% (`check-first-screen.py`); reference 4.3%. Only the photo can contribute; photo 01 is high-key white linen.
- theme.json palette slugs: base, ink, card, band, ghost, line, accent, muted.

## 4. Type (`tok(b)`)
font_direction **serif**: Latin serif headings and body, CJK Mincho.
- Headings + body: **Newsreader** (variable, opsz 6–72, wght 300–700). Stack: `"Newsreader", "Noto Serif TC", "Noto Serif JP", Georgia, serif`. zh-TW: `"Newsreader", "Noto Serif TC", serif`; ja: `"Newsreader", "Noto Serif JP", serif`.
- UI (nav, pills, eyebrows, wordmark, table headings): **Schibsted Grotesk** (wght 400–800). Stack `"Schibsted Grotesk", "Noto Serif TC", "Noto Serif JP", system-ui, sans-serif` — in zh-TW/ja the CJK glyphs fall to Noto Serif (no gothic mixed in).
- All four families loaded via theme.json `fontFamilies` + `fontFace` (woff2 in assets/fonts; Noto Serif TC/JP subsets as in Hokuto/Hada); copy `shared/inc/editor-lang.php` → `inc/editor-lang.php` and require it, since style.css will have `:lang()` rules. Editor and front end identical.

| Element | Size | Weight / lh / ls | Source |
|---|---|---|---|
| Wordmark (deco) | clamp(7rem, 17.5vw, 16rem) | Schibsted 800 / .8 / −.02em | union wordmark ≈190px 900 |
| H1 hero (preset xx-large) | clamp(2.75rem, 5.2vw, **4.5rem**) | Newsreader 400 / 1.05 / −.01em | union lead block; max ≥4.25rem rule |
| H1 inner head | clamp(2.75rem, 5vw, 4.25rem) | 400 / 1.08 | |
| H2 section | 2.75rem (44px) | 500 / 1.2 / 0 | union section title 44px lh1.2 |
| Sub-label under H2 | 0.8125rem (13px) | Newsreader 600 / 1.4 | union 13px JP sub-label |
| H3 large / small | 2rem / 1.5rem | 500 / 1.2 | union H3 32/38.4, 24/28.8 |
| Statement lead | 1.75rem | 400 / 1.5 | union 25px lead |
| Body | 1.0625rem (17px) | 400 / 1.6 / .02em | union lh 1.6, ls .26/13 = .02em (size raised for serif legibility) |
| Nav / pill | 0.8125rem | Schibsted 500 / 1.2 / .02em | union nav 13px |
| Eyebrow | 0.6875rem (11px) | Schibsted 700 / 1.2 / .04em, accent colour | union eyebrow 11px 700 |
- No uppercase transforms (union is sentence case) except the ghost words.
- zh-TW/ja: sizes ×0.75 for H1/H2 (min 2.5rem H1), body 1rem lh 1.85, H2 letter-spacing .08em (rondomark). fr/de: `hyphens:auto`.

## 5. Spacing, radius, motion tokens
- Content: full width minus 24px gutters (union 1377 @1440); text measure max 38rem. 8-col grid on desktop, 4 on ≤781px.
- Section padding: top 174px / bottom 157px desktop; 104px / 96px mobile (`tok(c)`).
- Radius: cards 0; pills 9999px; ovals `50%/42%`; table 0; images other than ovals 0.
- Shadows: none anywhere. Borders: 1px ink rules on section heads; 1px #E5E1E1 rows.
- Motion: `--sp-dur: .9s; --sp-ease: cubic-bezier(.18,.06,.23,1); --sp-dist: 24px` (union 0.8–0.9s, translate capped from 43px to ≤30px). Stagger step 0.12s (union delays .1–.5s). Hover transitions .7s cubic-bezier(.43,.05,.17,1).

---

## 6. Home page (en)

### First screen (1440×900)
- Header 0–100px, white, opaque: logo "Shirota Laundry" left (Newsreader 500 1.375rem + small Schibsted "since 1987" under it), **centred nav** (Services · How it works · Hotels · Clinics · Rates · About — Schibsted 13px), right: stacked pills 24px tall, min-width 120px: "Book a collection" (ink) over "Rates" (outline). Language switcher text links under the logo (union "Ja En" position).
- Ghost wordmark layer (T1), wave weave behind (T2).
- Left (x 24–700): eyebrow "Commercial laundry for hotels & clinics" (accent) → H1 3 lines → lead 1.125rem/1.6, 2 sentences, max 34rem → pill row: "Arrange a trial week" (216×48 ink) + "See the service index" (outline).
- Right: tall oval, photo 01 (T1), `sp-parallax`.
- Bottom band y≈780–880, `border-top:1px #111`, **three equal columns** (each = 1/3 width, no cards): big Newsreader 2.25rem number + Schibsted 13px label: `06:00` Morning collection · `24 h` Collected to shelf · `07:00` Packed delivery.
- Saturation ≤8%; nothing below the fold peeks except the bottom band.

### Block order
| # | Block | Purpose | Layout / images | Copy amount | Motion |
|---|---|---|---|---|---|
| H1 | Hero | KV, promise | as above; photo 01 | H1 + 40 words + 3 numbers | sp-parallax on oval (no reveal) |
| H2 | Statement | union lead text + recruit stats | ruled head; lead 1.75rem across cols 1–6 (3 sentences, ~55 words); right cols 7–8 two stacked counters: "42 hotels and clinics on our routes", "9.6 t linen pressed per day" | 55 + 20 words | sp-reveal--up on lead; sp-count on counters |
| H3 | Packing hall band | KV #6, the reference's full-bleed stage | full-bleed photo 02, 16:9, height 80vh max 760px; oval inset 320×220 photo 03 at top-right (24px from right, 96px from top) on a white 12px frame; caption card white bottom-left 420px wide, H3 "Folded the way your housekeepers fold." + 1 sentence | 30 words | sp-parallax `--sp-par:8%` |
| H4 | Service index | page_structure = service-index; the day from collection to delivery | ruled head ("Service index / A day at Northgate") + 5 full-width ruled rows (1px #E5E1E1): step no. (accent Schibsted 13px) · time window (Newsreader 2rem, nowrap) · step name H3 1.5rem · one sentence · "→" link to How it works. Rows are a list, not a grid or timeline column | 5 × 22 words | sp-stagger + sp-reveal--left on rows |
| H5 | Service mosaic | what we wash (card-mosaic archetype, T3) | ruled head + intro; 6 cards staggered: Hotel bed linen (photo card 04) · Towels & robes (icon card, 4 stacked ovals) · Clinic gowns & scrubs (photo card 05) · Uniforms & workwear (icon card, 2 ovals on a hook line) · Table linen (photo card 06) · Linen rental (icon card, 5 ovals pyramid). Each card links to its page | 6 × heading + 12 words | sp-stagger + sp-reveal--up on cards |
| H6 | Rates | consistency with Rates page | ruled head left (cols 1–3) + table cols 4–8: 6 rows item / unit / price (nowrap, right) + note line on delivery fee; pill "All rates and conditions" | table + 25 words | none (tables never animated) |
| H7 | Client story | proof, union recruit layout | text left cols 1–4 (quote 1.75rem serif, name/role, 60-word story, 2 small story links); tall oval portrait 411×594 right cols 6–7, photo 07 | 90 words | sp-reveal--up on text |
| H8 | The plant | place, hours, route area | two columns: photo 08 (3:2, radius 0) left cols 1–4; right ruled rows: address, collection window, plant hours, office hours, route radius 40 km | 60 words | sp-reveal--up |
| H9 | Trial CTA | conversion | soft band #F0F0F0 full width; H2 "Start with one trial week." + 30 words + pills (Arrange a trial week / Call the plant); small oval 260×300 photo 09 right | 35 words | sp-stagger + sp-reveal--left on pills |
| — | Footer | nav, address, hours, langs | white, 1px top rule, 4 columns + big ghost "SHIROTA" 12vw in #F3EFEF at bottom (repeat of T1) | — | none |

Home ≥ 300 English words, ≥3 narrative paragraphs (H2 lead, H3 caption, H7 story, H8 intro). **Home photo slots: 9** (01, 02, 03, 04, 05, 06, 07, 08, 09), none repeated.

### Comparison with recent themes' home order
| Theme | Order | Ours differs because |
|---|---|---|
| Shizuka Hearing | scattered photo-tile hero → statement band → sticky narrative cards | our hero is one tall oval on a ruled grid, no tile scatter, no sticky cards |
| Kaigi Centre | aerial photo stage + logo tab → plum menu panel → room marquee → longform | no full-bleed hero, no coloured panel, no marquee |
| Tsubaki Flowers | full-bleed bottom-left headline → asymmetric about → 3-cell hairline grid → photo band | our hairline is a page-wide fixed weave, not a 3-cell section; hero is white with an oval, not full-bleed |
| Umi Swim | blob-masked hero → concept band → day-schedule strip → tabs in arc panel | our index is a ruled list of rows (not a strip/tabs), oval is a geometric superellipse, colours neutral |
| Hibi Wear (template only) | dot label heads, straddling band, before/after | no bands straddling photos, no tabs, radius 0 |
Ours: oval-over-ghost-wordmark hero with thirds → ruled statement + counters → full-bleed band with oval inset → ruled service index rows → staggered card mosaic → rates → oval portrait story → plant → grey-band CTA.

---

## 7. Inner pages (10 + news)
| Page (slug) | Key content |
|---|---|
| Services `/services/` | Index of 6 services as the T3 mosaic, each with 60–80 words, unit and lead time; link to rates |
| How it works `/how-it-works/` | 5 steps in ruled rows with times (§9), oval thumbnails 120×170 on rows 1/3/4/5 (photos 08, 10, 14, 13; row 2 has none because the head already shows 11), what you prepare (bags, tags), cut-off times |
| Hotels & hospitality `/hotels/` | par levels, room-turn rhythm, robe/towel programme, F&B linen; 4-card mosaic; story 1 |
| Clinics & care `/clinics/` | thermal disinfection 71°C for 3 min (process description only, no guarantees), separate soiled-linen bags, curtains swap; 4-card mosaic; story 2 |
| Linen rental `/linen-rental/` | 3 sets (bed set, bath set, table set), how stock is owned and rotated, photo 16 |
| Rates `/rates/` | full rate table (§9) + delivery fee, minimums, invoicing monthly, VAT note |
| Quality & hygiene `/quality/` | inspection under daylight panels, mending room, rewash policy, tagging & traceability; photo 12 |
| About & people `/about/` | history since 1987, 7 people as ruled rows (name, role, one line), photo 14 |
| Client stories `/stories/` | 3 stories (§9), each with quote, situation, what changed, story photos 07 (head), 15, 06 |
| Contact & area `/contact/` | address, hours, route area 40 km, collection request form (not on any first screen), phone, email; photo 08 |
| News (home.html / archive / single) | 3 posts: new Sunday route, mending room extension, holiday schedule |
Every page: T1 head, T2 weave, T3 ruled heads/cards. ≥9 reachable pages.

---

## 8. Images (16, IMAGERY: photo)
**STYLE** (one string for all): `High-key documentary photograph, bright soft daylight from large windows, clean white and pale grey tones, gentle warm-grey shadows, natural colour with low saturation, 35mm lens, shallow depth of field, real working laundry plant, modern international setting, diverse people, no text, no logos, no brand names, no Japanese elements.`

| # | File | Subject / composition | Ratio | Used on |
|---|---|---|---|---|
| 01 | hero-roller-iron.webp | operative's hands guiding a white sheet into a wide roller iron, sheet flowing toward camera, face partly out of frame | 2:3 portrait | **Home H1 oval**, (no other) |
| 02 | packing-hall.webp | wide bright hall, rows of folded white linen stacks on trolleys, two staff packing in background | 16:9 | **Home H3 band** |
| 03 | towels-inset.webp | close-up of neatly folded white towels stacked, side light | 3:2 | **Home H3 inset**, Rates head |
| 04 | hotel-bed-linen.webp | crisp white bed being made in a bright hotel room, hands smoothing the sheet | 1:1-ish 4:5 | **Home H5 card**, Hotels head |
| 05 | clinic-gowns.webp | stacks of pale blue-grey clinic gowns on stainless shelving | 4:5 | **Home H5 card**, Clinics head |
| 06 | table-linen.webp | white tablecloths and napkins folded on a restaurant table at morning | 4:5 | **Home H5 card**, Stories (story 3) |
| 07 | client-portrait.webp | housekeeping manager in a hotel corridor holding a folded stack, calm smile | 2:3 portrait | **Home H7 oval**, Stories head |
| 08 | loading-dock.webp | delivery van at the plant dock at dawn, staff loading wrapped linen carts | 3:2 | **Home H8**, Contact head, How it works row 1 |
| 09 | hem-check.webp | hands checking a hem of a white pillowcase under a daylight panel | 4:5 | **Home H9 oval** |
| 10 | tunnel-washer.webp | modern stainless tunnel washer, operator at control panel (no readable screen text) | 4:5 | Services head, How it works row 3 |
| 11 | sorting.webp | staff sorting linen into colour-coded bins (no text) | 4:5 | How it works head |
| 12 | mending.webp | mending room, sewing machine repairing a sheet | 4:5 | Quality head |
| 13 | delivery-trolley.webp | wrapped linen trolley in a hotel back corridor | 4:5 | How it works row 5 |
| 14 | folding-team.webp | two operatives folding a large sheet together at the folding table | 3:2 | About head, How it works row 4 |
| 15 | uniform-rail.webp | pressed chef and staff uniforms on hangers on a rail | 4:5 | Services uniforms card, Stories (story 2) |
| 16 | rental-shelves.webp | tall shelves of banded linen sets in the stock room | 4:5 | Linen rental head |
Rules: Grok one at a time, Read each; regenerate any with text, logos, broken hands/faces or style drift. ≤300 KB, ≤2000px, no cut-outs. No image twice on the same page.

---

## 9. Fixed numbers (identical on home, inner pages, all 5 languages)
- Founded **1987** by Kenji Shirota; run today by Ines Shirota. Plant: **14 Kiln Lane, Northgate Works, Lindmoor**. Route radius **40 km**. **42** hotels and clinics on routes; **9.6 t** linen per day; **38** staff.
- Hours: collection **06:00–09:00** daily (Mon–Sun); plant **Mon–Sat 05:00–21:00**; office **Mon–Fri 08:30–17:30**. Phone +00 21 4870 1987 (fictional), hello@shirota-laundry.example.
- Process (5 steps): 01 Collection 06:00–09:00 · 02 Sorting & weighing 09:00–10:30 · 03 Washing & thermal disinfection 10:30–13:00 · 04 Ironing & folding 13:00–16:30 · 05 Inspection & packed delivery 16:30 → 07:00 next morning. Cycle: **24 h** collected to shelf.
- Rates (EUR, excl. VAT):
  1. Hotel bed linen, flat — per kg **€3.40**
  2. Towels & bathrobes — per kg **€3.10**
  3. Clinic gowns & scrubs (thermal disinfection) — per piece **€1.25**
  4. Chef & staff uniforms, on hanger — per piece **€2.80**
  5. Table linen & napkins — per kg **€3.60**
  6. Linen rental bed set (duvet cover, 2 sheets, 2 pillowcases) — per change **€4.90**
  Delivery free from 60 kg per run, otherwise **€18** per collection. Trial week: normal rates, no contract.
- People (7): Ines Shirota (managing director) · Tomas Okafor (plant manager) · Leena Marsh (quality & hygiene lead) · Rafael Duarte (routes & delivery) · Hana Vos (client care) · Samir Haddad (finishing line supervisor) · Agnes Lind (mending room).
- Stories (3): Hotel Calder, 84 rooms (bed linen + robes, par level from 4 to 3 sets) · Westbrook Day Clinic (gowns & curtains, separate soiled bags, Sunday route) · Ostra kitchen & dining room (table linen and chef whites, 07:00 drop before prep). No percentages or guarantees.
- Thermal disinfection described as "71 °C held for 3 minutes" (process fact, no claims).

---

## 10. Scroll effects (sp-scroll only)
| Effect | sp class | Where | Source | Trigger / time / easing |
|---|---|---|---|---|
| Slide-in from left with stagger | `sp-stagger` parent + `sp-reveal sp-reveal--left` children | H4 service index rows, H9 pill row, inner How-it-works rows | union `.is-in` pills, translate-x −43px, delays .1–.5s | IO enter; .9s; cubic-bezier(.43,.05,.17,1); dist 24px; step .12s |
| Fade-up | `sp-reveal sp-reveal--up` (+`sp-stagger` on mosaic) | H2 lead, H5 cards, H7 text, H8 rows, inner section heads | union text/media reveal | IO enter; .9s; cubic-bezier(.18,.06,.23,1); dist 24px |
| Count | `sp-reveal sp-count` | H2 counters "42", "9.6" | (rhythm support) | 1.2s easeOutCubic |
| Parallax | `sp-parallax` | H1 oval, H3 band (+ inner page head ovals) | union oval morph / full-bleed photo scrub | scroll-linked |
Hero gets no reveal. Tables, forms, legal text get none. Total `.sp-reveal` ≤60% of home blocks.

## 11. Parallax (required)
- **P1 hero oval**: wrapper Group `.sl-oval sp-parallax` (border-radius 50%/42%, overflow clip — no clip-path on any observed element), direct `img` = photo 01 (scale 1.18 by sp-scroll). `--sp-par: 10%` desktop, `6%` at ≤781px. Foreground H1/pills are outside the moving layer. Reference: union's oval travelling/morphing over ~350px of scroll.
- **P2 packing band**: Cover block `sp-parallax`, background photo 02, `--sp-par: 8%` (mobile 6%). Foreground: oval inset (photo 03, not moving) and caption card. Reference: union's full-bleed photo stage after the oval.
- Must pass `check-parallax.mjs` (≥6px desktop and mobile, 0 under reduced-motion).

## 12. Responsive
- 390px first screen: ghost wordmark in normal flow (not absolute), no vertical writing, no absolutely positioned labels over text; order: wordmark → eyebrow → H1 (2.75rem) → lead → pills (full width stacked) → oval → three columns become 3 stacked rows with hairline separators.
- Mosaic: 2 columns at 782–1100 (stagger 88px), 1 column ≤781 (no stagger).
- Rates table ≥782px: full content width (cols 4–8 on home = ≥60% width; on Rates page 100%), `table-layout: auto`, price column `white-space: nowrap; text-align: right; padding-right: 0`, never clipped at 800 and 1280. ≤781px: every table becomes stacked rows (item on line 1, unit + price on line 2, price right).
- Header ≤1024px: centred nav collapses into the WP navigation overlay; pill "Book a collection" stays.
- No horizontal overflow at 390 / 1280 (wordmark clipped by `overflow-x: clip` on the hero).

## 13. Home acceptance checklist
- [ ] Ghost "SHIROTA" spans the full width behind a tall oval (h ≥1.35w) on the right; H1 left at 4.5rem Newsreader; three equal columns 06:00 / 24 h / 07:00 at the bottom.
- [ ] Weave grid with ticks visible on every section gap; wave lines in the hero.
- [ ] Packing-hall full-bleed band with oval inset directly after the statement; parallax on hero oval and band verified by check-parallax.
- [ ] Service index = 5 ruled rows with times; mosaic = 6 square cards, radius 0, staggered by one cell, 3 photo + 3 outline-oval icon cards.
- [ ] Rates: 6 rows, prices match §9, price column nowrap right at 800 and 1280; stacked on mobile.
- [ ] 9 distinct home photos, high-key, no text/logos.
- [ ] Colours: white/ink/#F6F4F4 dominate, accent only on dots/eyebrows/numbers; first-screen saturation ≤8% (cap 15%).
- [ ] Fonts: Newsreader + Schibsted Grotesk + Noto Serif TC/JP via theme.json fontFace; editor = front end.
- [ ] Pills 216×48 with dot; header stacked pill pair; centred nav.
- [ ] ≥300 English words, ≥3 narrative paragraphs; no guarantees, awards or real brands.
- [ ] Hero has 0 `.sp-reveal`; auto-gates pass at 390/1280.

## 14. Similarity table (target ≈80%)
| Dimension | Reference (union-tec unless noted) | Shirota Laundry |
|---|---|---|
| Ground / ink | #FFFFFF / #000000 | #FFFFFF / #111111 |
| Accent | none in UI; colour only in photos (4.3% saturated) | #8A6A68 ≤3%, photos high-key; ≤8% saturated |
| Card ground | ~#F7F7F7, radius 0, no shadow | #F6F4F4, radius 0, no shadow |
| Soft band | rondomark #F0F0F0 | #F0F0F0 |
| Grid | 8 col, 1px #E3E3E3, ticks, fixed, warped in hero | 8 col, 1px #E5E1E1, ticks, fixed, wave SVG in hero |
| Wordmark | ≈190px, 900, black → ghost #F5F5F5 | 17.5vw (≈252px @1440), 800, ghost #F3EFEF |
| Hero oval | 510×350 → 375×540 at right, x 875–1250 | 375×540 at right, x 875–1250 |
| Section title | 44px / 1.2, 700, + 13px sub-label | 44px / 1.2, Newsreader 500, + 13px sub-label |
| H3 | 32/38.4 and 24/28.8 | 32/38.4 and 24/28.8 |
| Body | 13px / 1.6 / .02em | 17px / 1.6 / .02em |
| Nav / eyebrow | 13px / 11px 700 | 13px / 11px 700 |
| Gutter / section padding | 24px; 174 / 157 desktop, 104 mobile | 24px; 174 / 157, 104 / 96 |
| Pills | 216×48 r9999 with 6px dot; header pair 88×24 | 216×48 r9999 with 6px dot; header pair ≥120×24 |
| Image masks | superellipse ovals, 1 full-bleed photo with oval inset 320×220 | `50%/42%` ovals; full-bleed band with 320×220 inset |
| Motion | .is-in .8–.9s, cubic-bezier(.18,.06,.23,1) / (.43,.05,.17,1), −43px x stagger; scroll scrub | sp-reveal .9s same curves, 24px left stagger; sp-parallax 10% / 8% |
| Typeface | Helvetica-type grotesk bold | Newsreader serif (plan font_direction serif) + Schibsted Grotesk for UI/wordmark — deliberate deviation |
