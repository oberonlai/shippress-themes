# Design spec: Kodou Charging (kodou-charging)

Stage 1 design spec (design director). Implementers follow this literally; when a value here conflicts with taste, this file wins. Row b40-5: landing type, single-column-longform, sans, palette 錆浅葱 #5A7E78, IMAGERY **photo**.

- Main reference: Nichicon V2H / V2L page, https://www.nichicon.co.jp/products/v2h/ (screens `brand/ref/nichicon-v2h-first.png`, `brand/ref/nichicon-v2h-full.png`, `brand/ref/nichicon-first.png`, `brand/ref/scroll-nichicon-fade-*.png`). Measured values: `brand/reference-tokens.md` (cited below as `tok(a)`…`tok(g)`).
- No secondary reference.
- We borrow structure, techniques, colour relations, the key-visual concept and the motion. We never copy Nichicon photos, renders, copy, product names, award badge or logo.

---

## 1. Signature techniques (borrow all three, visibly, at full strength)

### T1. Full-width outlined notice banner = the single repeated CTA
- **Reference** (`ref/nichicon-v2h-full.png`, y≈1185–1494): a full-container-width white box with a **1 px accent border, radius 8 px**, a line-drawn pictogram at the left, one bold sentence in ink with **one phrase in accent colour**, and an **outbound arrow glyph at the far right**. It is the page's one outward path (subsidy link). `tok(d)`, `tok(f)`.
- **Ours**: the one CTA of the landing page, "Request a site assessment". Used in three places on home: (a) as the hero **booking bar** (hero_footer), (b) mid-page after the price table, (c) closing band before the footer.
- **Shape / proportion**: width = content width 1340 px (1440 viewport) / 100 % container on mobile; height 112 px desktop (padding 28 px 40 px); border 1px solid `#5A7E78`; radius 8 px; background #FFFFFF; no shadow. Left: 56 px line pictogram (inline SVG, stroke 1.5 px `#2F4A45`: wall charger with coiled cable). Middle: sentence 1.25rem / 700 / ink, accent phrase in `#5A7E78` 700 (e.g. "Book a **90-minute site visit** for your car park."). Right: 40 px circle outline with "↗" arrow (SVG, not CSS content), the whole banner is one link.
- **Not to be diluted**: it is a *rectangle with a thin coloured outline*, not a pill, not a filled button, not a docked/sticky bar, not a grey card. The accent phrase must be coloured. The arrow must sit at the far right edge.
- Hover: border 2 px (inset box-shadow 0 0 0 1px #5A7E78 added), arrow translateX(4px), 0.3 s ease.

### T2. Flush two-cell tab switch in a soft-shadowed box
- **Reference** (`ref/nichicon-v2h-full.png`, y≈1590–1760): centred box 1172 px wide, **radius 8 px, shadow 0 0 16px rgba(17,17,17,.10)**, two flush rectangular cells 60 px tall, **active cell solid accent with white bold label**, inactive cell white with ink label; the panel below sits on a pale band (#F6F6F6) and swaps text + figure. `tok(c)`, `tok(d)`, `tok(f)`.
- **Ours**: home section "Which sites suit" with tabs **Staff car parks** / **Visitor & fleet bays**. Panel = 4:3 photo left (50 %), text right (criteria list of 5 dotted bullets + one sentence on what we check).
- **Shape**: tab box 1172 px wide, cells 50/50, height 64 px, label 1.25rem (20 px) / 700 (large text so white on #5A7E78 passes 3:1), no gap between cells, 1 px #D9E0DE divider only between inactive cells. Panel band #F2F5F4, padding 56 px, radius 0, directly under the tab box with 0 gap.
- **Mechanics (no JS)**: inside a `core/html` block two visually hidden radio inputs (`#kc-tab-staff` checked, `#kc-tab-fleet`) + two `<label>` cells; panels are normal block Groups `.kc-panel--staff` / `.kc-panel--fleet`. CSS: `.kc-tabs:has(#kc-tab-fleet:checked) .kc-panel--staff{display:none}` and the reverse; default (no :has support, editor) shows both panels stacked. Focus-visible ring 2 px #2F4A45 offset 2 px on the label. No sp-reveal on the tab box itself (reveal the whole section).
- **Not to be diluted**: solid filled active cell (not underline tabs, not pill segmented control), flush cells, soft shadow box, pale band panel.

### T3. Centred bold statement with one accent phrase + two 110 px line-pictogram columns
- **Reference** (Nichicon introduction block): centred two-line H2 **32 px / 700 / lh 1.55** ink with one phrase in accent; below, two columns (2 × 499 px): **110 px monochrome line pictogram** left, 24 px / 700 title and **three dotted bullets** right. `tok(b)`, `tok(c)`, `tok(f)`.
- **Ours**: home section 2 "Charging where people already park". Columns: "For the people who drive in" / "For the people who run the building".
- **Shape**: statement max-width 900 px centred, 2rem/700/1.55, accent phrase `#5A7E78`; columns 2 × 499 px, gap 96 px, icon 110 × 110 inline SVG stroke 1.5 px #15201E (no fill, no tint circle), title 1.5rem/700, bullets with 4 px round dots `#5A7E78` (CSS `::before` with empty content is allowed; no text in content).
- **Not to be diluted**: centre alignment of the statement, the coloured phrase, the large outline pictograms (110 px, not 48 px icons in tinted circles).

### T4 (support). Product-in-situ tiles
- White card, radius 4 px, shadow 0 2px 12px rgba(17,17,17,.10), 4:3 photo field, white caption strip below (title 1.125rem/700 + one line 0.875rem #4A5755). Home section "What the assessment includes" (4 tiles).

### Continuation to inner pages (≥4)
| Page | T1 banner | T2 tabs | T3 statement + pictograms | T4 tiles |
|---|---|---|---|---|
| About | closing banner | – | yes ("Why we only do workplaces") | – |
| Site assessment | under the page intro + closing | – | yes (what you prepare / what we bring) | 4 tiles (checks) |
| Services & pricing | closing | yes: "Wall units" / "Twin posts" | – | 3 tiles (hardware in situ) |
| Sites we fit | closing | yes: "Offices" / "Depots & yards" | – | – |
| Case stories | closing | – | – | story cards use T4 frame |
| Contact | top banner replaced by form slot; banner variant with email/phone | – | – | – |
| Newsletter | banner variant linking to contact | – | – | – |
Each inner page uses at least T1; About, Site assessment, Services, Sites carry a second technique.

---

## 2. Key visual concept

### (1) Reference first screen
- **What is drawn**: a high-key photograph of a pale vertical-board exterior wall washed with dappled leaf shadow; at the left edge a car is cropped mid-body; a post-mounted charger with its cable looped and a wall box are fixed to the wall; the product name and a one-line tagline float in the right half over the pale wall. A plain page title sits above the KV on white.
- **Story**: the car quietly becomes part of the building's power — "a new possibility starts moving". Calm, domestic, technical without showing technology off.
- **Signature motion**: the KV itself is still; every section below fades up 30 px (0.8 s, ease-in-out) as it enters the viewport.

### (2) Our transposed scene (same composition idea, same motion idea, same image type = photo)
Workplace car park instead of a house wall. A documentary photograph of a **fitter kneeling beside a half-mounted wall charger on a pale concrete car-park column, cable coiled in one hand**, dappled daylight through a perimeter tree line falling across the concrete (our version of the leaf-shadow wall), and the **front bumper of a staff car cropped at the photo's left edge** (our version of the cropped car). The story becomes "your staff car park is about to start charging — first, we come and look". Motion idea kept: still KV with a slow parallax drift of the photo (the "quiet wall"), then fade-up 30 px sections below. Because the plan fixes split-photo-left, the text that Nichicon floats over the wall moves **beside** the photo, on white.

### (3) KV checklist (all six visible in the first screen at 1440 × 900 and at 390 px)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Pale board wall with dappled leaf shadow | Pale concrete column + wall, dappled tree shadow | hero photo background | sp-parallax `--sp-par: 6%` (mobile 4 %) on the photo only | img-01 `hero-fitter-column.webp` |
| 2 | Charger + wall box with coiled cable | Half-mounted wall unit on the column, fitter holding a coiled cable | hero photo, centre-right | (inside the parallax photo) | img-01 |
| 3 | Vehicle cropped at the left edge | Staff car front bumper + wheel cropped at the photo's left edge | hero photo, left 25 % | (inside the parallax photo) | img-01 |
| 4 | Product name + tagline in the right half | Eyebrow + H1 + one-line promise **beside** the photo on white | right text column (44 %) | none (no reveal in hero) | – |
| 5 | Plain page title / breadcrumb line above the KV | Light-grey uppercase eyebrow "WORKPLACE EV CHARGING · SITE ASSESSMENT" above the H1 (0.8125rem, .12em, #8A9693) | top of text column | none | – |
| 6 | Outlined notice banner (T1) below the KV | Booking bar = T1 banner with three facts + arrow, full container width under photo and text | hero foot | hover only | inline SVG pictogram |
Fade-up of following sections (reference motion) is implemented below the fold (see §9), never in the hero.

---

## 3. First-screen composition

**hero_composition: split-photo-left · hero_text: beside-photo · hero_footer: booking-bar · hero_fingerprint: split-photo-left/beside-photo/booking-bar**

- **split-photo-left**: Group `.kc-hero` alignfull, two columns 56 / 44. Photo column bleeds to the left viewport edge (no left padding), photo height 600 px at ≥1280 (aspect ≈ 1.34:1 at 1440 → 806 × 600), `object-fit: cover; object-position: 38% 50%`, radius 0 (reference KV is square-cornered). Wrapped in `figure.sp-parallax` with `overflow: clip`. Not full-bleed under text; nothing is laid over the photo.
- **beside-photo**: text column on #FFFFFF, vertically centred, padding 0 50px 0 64px, max-width 560 px. Order: eyebrow (KV #5) → H1 "Charging for the car park you already have." at **4.5rem / 600 / lh 1.08 / -0.01em**, Hanken Grotesk, ink #15201E, with "you already have" in #5A7E78 → promise 1.125rem/1.6 #4A5755 (≈30 words) → a quiet text link "How a site visit works ↓" (anchor #assessment) in #2F4A45 underlined 1 px. No button in this column (the one CTA is the booking bar).
- **booking-bar**: directly under both columns, inside the 1340 container, margin-top 32 px: the T1 banner. Content: pictogram | three facts separated by 1 px #D9E0DE vertical rules ("90-minute visit on site" · "Written report in 5 working days" · "€290, credited against your install") | label "Request a site assessment" 700 + ↗ circle. Whole bar links to `/contact/`.
- Heights at 1440 × 900: header 134 + photo 600 + 32 + bar 112 = 878 → bar fully visible above the fold. At 1280 × 800: photo height clamps to `min(600px, calc(100svh - 134px - 176px))` (min 440 px).
- **Mobile 390**: single column, in DOM order: photo (4:3, full width, parallax 4 %) → eyebrow → H1 2.5rem → promise → booking bar stacked (pictogram hidden, facts as a 3-line list with hairline separators, the label row with arrow full-width at bottom, min tap height 56 px). No vertical text, no absolutely positioned labels, nothing overlaps the photo.
- Saturation: only the accent phrase, the bar border and the arrow are saturated → target ≤ 5 % of the first screen (cap 15 %, row note 30 %); photo graded cool grey-green, low chroma.

---

## 4. Home sections (order, one long conversion page with anchor menu)

Anchor menu (the single top menu): Sites `#sites` · Assessment `#assessment` · Pricing `#pricing` · Stories `#stories` · FAQ `#faq` · plus one outlined header button "Request a visit" → /contact/. Utility bar (56 px, #F5F5F5) holds text only: hours + phone + email (no second navigation block).

| # | Section (anchor) | Purpose | Layout | Images | Copy | Motion |
|---|---|---|---|---|---|---|
| 1 | Hero `#top` | KV + CTA | §3 split + T1 booking bar | img-01 | H1 + 30 w | parallax only |
| 2 | Statement `#why` | why workplace charging | T3: centred 2-line statement + 2 pictogram columns × 3 bullets | – (SVG pictograms) | 2 lines + 2 × 3 bullets + 1 narrative paragraph (≥40 w) centred under the columns, max 720 px | sp-reveal--up |
| 3 | Which sites suit `#sites` | qualify the lead | section H2 left (accent, 1.875rem/600) + intro; T2 tab box; panel: 4:3 photo left 50 % + 5 dotted criteria right | img-02 (staff panel), img-03 (fleet panel) | intro 35 w, each panel 5 bullets + 1 sentence | sp-reveal--up on section |
| 4 | Wide site band | breathing room / mood | full-width photo 3.13:1 (1440 × 460, ref KV ratio `tok(c)`), caption line below left in 0.875rem #4A5755 | img-04 | 1 caption line | **sp-parallax --sp-par 10 %** (mobile 6 %) |
| 5 | What the assessment includes `#assessment` | the product | H2 + intro; 4 × T4 tiles (4:3) in one row, gap 24 px | img-05, img-06, img-07, img-08 | each tile title + 1 line (≈15 w) | sp-stagger + sp-reveal--up per tile |
| 6 | A visit, in order | narrative + figures | 2 columns 5/7: photo 4:5 left (img-09); right: **3 narrative paragraphs (≥25 w each)** describing the visit, then a hairline and a row of 3 figures (sp-count): "90 min", "5 working days", "60 days" (quote validity) | img-09 | ≈110 w | sp-reveal--up + sp-count |
| 7 | Pricing `#pricing` | prices | full-width table (6 rows), §7; then T1 banner (mid CTA) | – | 6 rows + note | **no reveal** (table) |
| 8 | Stories `#stories` | proof | 3 rows, each: photo 3:2 left 40 % + text right (site name H3, 2-line story, 3 small facts: bays / units / days on site), hairline between rows | img-10, img-11, img-12 | 3 × 45 w | sp-reveal--up per row |
| 9 | FAQ `#faq` | objections | 2-column question/answer list (Q 1.125rem/700, A body), 6 items, hairlines, no accordion | – | 6 × 30 w | sp-reveal--up on section |
| 10 | Updates (newsletter slot) | waitlist / tariff updates | pale band #F2F5F4, text left (H3 + 1 line), `shippress_form_slot` newsletter right | – | 25 w | **no reveal** |
| 11 | Closing CTA | single CTA repeated | T1 banner (third time) + below it one line with email and phone | – | 15 w | none |

Home image positions: **12** (img-01…img-12). English words ≥ 300. Reveals: sections 2,3,5,6,8,9 (6 of 11 blocks ≤ 60 %).

### Not the same as recent home pages
| Theme | Home order | Kodou Charging differs because |
|---|---|---|
| Enban Records | black keyword bar / inset hero card + peek strip / news cards / 5-up crate cards / counter band / visit | no dark bar, hero is split photo-left with outlined booking bar; no card wall of 5; counters live inside a narrative 2-column block |
| Kaoru Cocoa | framed-window hero / sticky hour plates / 3-col outline card wall / days panel / accordion / visit | no framed window, no sticky, FAQ is a flat 2-column list not an accordion; tabs (T2) are new |
| Kikan College | framed end-panel hero with stats / numeral-over-title heads / day strip / 3×2 tinted tiles / fee table / taster band | no stats in hero, no tinted tiles (white shadow tiles 1×4), pricing followed by an outlined banner, wide parallax band |
| Teate Clinic | split hero with info card + two entry boxes / 5-cell icon card row / ruled ledger / tile grid / room band / stories | our split puts photo LEFT, text beside, a single outlined bar (no info card, no two entry boxes); pictograms are 2 big outline columns under a centred statement, not a 5-cell card row |

---

## 5. Inner pages (landing track; ≥8 pages + posts)
Every inner page: page-title block like the reference (breadcrumb 0.75rem uppercase #8A9693, H1 2.5rem/500 plain left on white, 184 px block `tok(c)`), then a 3.13:1 page KV photo (not repeated on that page), then content, closing T1 banner.
1. **About** (`/about/`): company story (founded 2017, Northfield), T3 statement "We only work in car parks people use every day" + 2 pictograms, team: 7 named people as a two-column text list (name, role, one line) beside one team photo img-13 (no 4-person grid). KV img-04.
2. **Site assessment** (`/site-assessment/`): what is checked (T4 × 4 reusing img-05…08), what to prepare (T3 two columns: "What you prepare" / "What we bring"), the 4-step process as ruled rows (number, title, 2 lines), report contents. KV img-09.
3. **Services & pricing** (`/services/`): T2 tabs "Wall units" / "Twin posts" (img-14 / img-15), full price table (same 6 rows as home), aftercare paragraph. KV img-16.
4. **Sites we fit** (`/sites/`): T2 tabs "Offices" / "Depots & yards" (img-02 / img-03), suitability checklist, what is *not* suitable (honest list). KV img-11.
5. **Case stories** (`/stories/`): the 3 stories in long form, each with T4-framed photo (img-10, img-11, img-12) and the same numbers as home.
6. **Contact / request a visit** (`/contact/`): §12 form slot (contact) with mailto fallback, address, hours, what happens next (3 lines). Photo img-14 (wall unit detail).
7. **Newsletter** (`/newsletter/`): standalone waitlist / updates signup (§12), 3 bullets of what we send (tariff changes, grant deadlines, new hardware), img-15.
8. **News** (`/news/`, posts page, empty content) + 3 posts (category "Site notes", tags "assessment", "load management", "grants"); post featured images from img-06, img-07, img-16.
9. **Privacy**, 10. **Terms**, 11. **Thanks** (after-request page: "We'll reply within one working day" + T1 banner back to home).
theme-meta pages: home, about, news, article, category, tag, newsletter (→ /newsletter/), contact (→ /contact/).

---

## 6. Colour (source `tok(a)`; reference relation kept, accent hue swapped)
| Token | Hex | Share | Source / note |
|---|---|---|---|
| base | #FFFFFF | ~70 % | ref ground #FFFFFF |
| panel | #F2F5F4 | ~15 % | ref pale band #F6F6F6, −1.5 % L, tinted to teal |
| utility | #F5F5F5 | header bar | ref #F5F5F5 |
| ink | #15201E | text | ref ink #111111 (+2 % L, teal tint) |
| body | #4A5755 | text | ref body grey #555555 (−3 % L) |
| muted | #8A9693 | breadcrumb, eyebrow | ref #B1B1B1 darkened for contrast |
| hairline | #D9E0DE | rules | ref #E0E0E0 |
| accent | #5A7E78 | ~6–8 % | **replaces ref blue #1450E1**: plan palette 錆浅葱 is fixed by the row; blue would also read as a generic utility brand. Used exactly where Nichicon uses blue: section H2s, accent phrases, active tab fill, banner border, bullet dots |
| deep | #2F4A45 | footer bg, links, focus | ref navy #113293 role (logo/footer only) |
| spark | #C8873A | <1 % | only the 8 px live dot in the booking bar pictogram and form success icon |
Contrast: accent on white ≈ 4.4:1 → only for text ≥ 20 px bold / 24 px regular; small links use deep #2F4A45 (≈ 9.6:1). First-screen saturated share ≤ 5 % (check-first-screen.py cap 15 %).

## 7. Type (font_direction: **sans**)
- Latin headings: **Hanken Grotesk** (400/500/600/700); Latin body: **Nunito Sans** (400/600/700). Both sans; no serif anywhere.
- CJK: zh-TW `"Hanken Grotesk", "Noto Sans TC", "PingFang TC", "Microsoft JhengHei", sans-serif` for headings (bundled Noto Sans TC subset, display only); body `"Nunito Sans", "PingFang TC", "Microsoft JhengHei", "Noto Sans CJK TC", sans-serif` (system, no bundled CJK). ja headings `"Hanken Grotesk", "Noto Sans JP", "Hiragino Sans", "Yu Gothic", sans-serif`; body `"Nunito Sans", "Hiragino Sans", "Yu Gothic", "Noto Sans CJK JP", sans-serif`. 黑體 only, no 明體.
- Load all through theme.json `fontFamilies` + `fontFace` (woff2 in assets/fonts, listed in theme-meta `fonts[].files` with OFL license); copy `shared/inc/editor-lang.php` to `inc/` and require it (style.css uses `:lang()`), so editor = front end. zh-TW/ja subsets via the Hokuto/Hada workaround.
| Role | Size | Weight / lh / tracking | Source |
|---|---|---|---|
| Hero H1 (largest) | 4.5rem (72 px); mobile 2.5rem | 600 / 1.08 / −0.01em | ref H1 40/500 scaled to meet ≥4.25rem rule |
| Page H1 | 2.5rem | 500 / 1.25 / .02em | `tok(b)` 40/500/.02em |
| Statement H2 (T3) | 2rem | 700 / 1.55 | `tok(b)` 32/700/1.55 |
| Section H2 | 1.875rem, accent | 600 / 1.6 | `tok(b)` 30/600/1.6 blue → teal |
| H3 | 1.5rem | 700 / 1.4 | `tok(b)` 24/700 |
| Body | 1rem | 400 / 1.6 (zh/ja 1.85) | `tok(b)` 16/1.6 |
| Lead | 1.125rem | 400 / 1.6 | – |
| Caption / small | 0.875rem | 400 / 1.5 | `tok(b)` 14 |
| Eyebrow / breadcrumb | 0.8125rem uppercase | 600 / .12em | ref breadcrumb caps |
CJK sizes ≈ 0.75 × Latin for display; de/fr `hyphens:auto`.

## 8. Spacing, radius, shadow (source `tok(c)`, `tok(d)`)
- Wide size 1340 px (50 px side padding at 1440); content 1172 px (tab box width); text max 720 px.
- Section padding 96 px top / 96 px bottom (ref 90–100); mobile 64 px. Header 134 px = 56 utility + 78 main, shadow 0 4px 16px rgba(0,0,0,.16) (`tok(d)`); mobile header 64 px, menu in a modal overlay.
- Radius: 8 px banner + tab box; 4 px cards and buttons; 0 everything else (photos square).
- Shadows: tab box 0 0 16px rgba(17,17,17,.10); tiles 0 2px 12px rgba(17,17,17,.10). Nothing else.

## 9. Scroll effects (from stage-a candidates; sp-scroll copied unchanged)
| Effect | sp-* class | Where | Reference (trigger / time / easing) | Our values |
|---|---|---|---|---|
| Section fade-up | `sp-reveal sp-reveal--up` | home sections 2, 3, 5, 6, 8 rows, 9; inner-page content groups | Nichicon `u-fade--up`: IntersectionObserver rootMargin −50px, threshold 0, once; 0.8 s ease-in-out, translateY 30 px | override CSS vars: distance 30 px (cap), duration 0.8 s, easing ease-in-out |
| Tiles in sequence | `sp-stagger` parent + tiles `sp-reveal--up` | home 5 (4 tiles), Site assessment tiles, Services tiles | Nichicon product tiles appear with the section (same observer) | 0.12 s steps |
| Count-up | `sp-count` | home 6 figures (90 / 5 / 60) | ours (stage-a 3b), 1.2 s ease-out | default |
| Parallax | `sp-parallax` | §10 | – | – |
Never on: hero, tab box internals, price table, forms, legal text, footer.

## 10. Parallax (required)
1. **Hero photo** (home §1): `figure.wp-block-image.sp-parallax` wrapping img-01, `--sp-par: 6%` desktop, 4 % at ≤781 px. Foreground text is in the other column, never in the moving layer. Reference counterpart: Nichicon's still leaf-shadow wall — we let the "wall" drift slowly behind the frame.
2. **Wide site band** (home §4): alignfull Group `.sp-parallax` with img-04 as direct img (3.13:1, 460 px tall), `--sp-par: 10%` desktop, 6 % mobile; caption sits below the band, outside the moving layer.
3. Inner page KV photos (3.13:1): `sp-parallax` with `--sp-par: 6%`.
Static under prefers-reduced-motion, `?sp-static` and in the editor. check-parallax.mjs must measure ≥6 px.

## 11. Responsive
- 390 px first screen: photo → text → stacked booking bar; no vertical text, no absolute labels, no overlap; H1 2.5rem, no horizontal scroll.
- T2 tabs on mobile: cells stay side by side (50/50, label 1rem/700, height 56 px); panel stacks photo above text.
- T3 columns stack; pictogram 80 px.
- **Price table**: at ≥782 px full content width (1172 px), 3 columns (item 55 % / note 25 % / price 20 %), price column `white-space: nowrap; text-align: right`, no `overflow:hidden`, never cut. ≤781 px every table becomes stacked rows (item bold, note, price on its own line right-aligned).
- Stories rows stack (photo on top). FAQ goes 1 column.

## 12. Forms (form contract v1 — `steps/form-contract-v1` exists)
- Copy `pipeline/assets/forms/shippress-forms.php` → `inc/`, CSS/editor JS → `assets/` unchanged; require from functions.php.
- **Contact page** `/contact/` (and no separate booking page): pattern calls `shippress_form_slot( kind=contact, fallback=<buffered literal mailto button> )` in the left column under "Request a site assessment"; right column: address, hours, phone, "what happens next". Fallback = button "Email us to book a visit" → `mailto:visits@kodou-charging.example?subject=Site%20assessment%20request` (translated subject key). With CF7/WPForms present the real form renders; site owners should build it with: Name*, Company*, Email*, Phone, Site address*, Number of bays (select: 1–6 / 7–12 / 13–24 / 25+), Preferred weekday (checkbox Mon–Fri), Message (textarea), consent checkbox* linking /privacy/.
- **Newsletter page** `/newsletter/` (standalone, not an alias): H1 "Updates and early access", 3 bullets, `shippress_form_slot( kind=newsletter, email=visits@kodou-charging.example, label=forms_email, submit=forms_subscribe, notice=forms_mail_notice, subject=forms_mail_subject )`. MailPoet / MC4WP preferred; CF7/WPForms only with an explicitly configured newsletter form id. No plugin: required email input + submit, native mailto POST with visible notice "Opens your email app. Send the request to subscribe; you are not subscribed yet."
- **Home section 10** and **footer**: same newsletter slot (footer on deep #2F4A45 = dark variant). Never in the first screen; no sp-reveal on any form or its section.
- Tokens light: `--sp-form-surface #FFFFFF`, `--sp-form-text #15201E`, `--sp-form-border #B7C3C0`, `--sp-form-accent #2F4A45`, `--sp-form-on-accent #FFFFFF`, `--sp-form-focus #5A7E78` (2 px ring + 2 px offset), `--sp-form-radius 4px`; error #A23B2A text + border, success #2E6B4F with spark-amber dot. Dark (footer): surface #FFFFFF, text #15201E, border #8FA8A3, accent #FFFFFF, on-accent #2F4A45, focus #E7C08F; labels/notice on dark #FFFFFF / #D9E0DE.
- Strings in all five languages (en, zh-TW, ja, fr, de) via semantic keys in `inc/i18n/en.php`: forms_email, forms_subscribe, forms_mail_notice, forms_mail_subject, contact_email (button), contact_subject, plus labels above; extract with `L10N_SEMANTIC=1`.

## 13. Images (IMAGERY: photo — documentary stills; 16 images, 0 cut-outs)
**STYLE** (one string for every image):
`High-key documentary photograph, quiet and unposed, soft overcast daylight with dappled leaf shadow, cool grey-green grade, low saturation, pale concrete, painted steel and light board surfaces, office and depot car parks, natural skin tones, diverse adults in plain work clothes, 35mm lens, shallow but not extreme depth of field, generous empty space, no text, no logos, no brand names, no signage lettering, no Japanese elements.`
| # | File | Subject / composition | Used on (page · section) | Home |
|---|---|---|---|---|
| 01 | hero-fitter-column.webp | fitter kneeling beside half-mounted wall charger on pale concrete column, coiled cable in one hand, car bumper cropped at left edge, dappled shadow; landscape 4:3, subject right of centre | Home · hero | ★ |
| 02 | staff-bays.webp | row of staff car bays under a canopy with two wall units on columns, morning light, 4:3 | Home · tabs (staff); Sites · tabs | ★ |
| 03 | fleet-bays.webp | small depot yard with two vans backed to twin charging posts, 4:3 | Home · tabs (fleet); Sites · tabs | ★ |
| 04 | site-band-wide.webp | wide low view along a pale office car-park wall, three mounted units, leaf shadow, empty bays; 3.13:1 | Home · wide band; About · KV | ★ |
| 05 | check-switchboard.webp | assessor's hands with a meter at an open distribution board, 4:3 | Home · tile 1; Site assessment · tile | ★ |
| 06 | check-cable-route.webp | tape measure along a cable tray on a concrete ceiling, 4:3 | Home · tile 2; Site assessment · tile; post 1 | ★ |
| 07 | check-bay-layout.webp | assessor marking a bay corner with chalk, clipboard on ground, 4:3 | Home · tile 3; Site assessment · tile; post 2 | ★ |
| 08 | check-report.webp | printed site plan and notes on a car bonnet, pen, 4:3 | Home · tile 4; Site assessment · tile | ★ |
| 09 | visit-walkthrough.webp | assessor and facilities manager walking a car-park ramp, talking, 4:5 portrait | Home · visit; Site assessment · KV (crop 3.13:1) | ★ |
| 10 | story-offices.webp | finished wall units along an office car park, one car charging, 3:2 | Home · story 1; Stories | ★ |
| 11 | story-depot.webp | depot yard with vans plugged into posts at dusk-light (still bright), 3:2 | Home · story 2; Stories; Sites · KV | ★ |
| 12 | story-health-centre.webp | visitor bays beside a low clinic building with twin post, 3:2 | Home · story 3; Stories | ★ |
| 13 | team-yard.webp | three fitters loading kit into a white unmarked van, 3:2 | About · team | |
| 14 | wall-unit-detail.webp | close-up of a wall unit with cable coiled on its hook, 4:3 | Services · tab 1; Contact | |
| 15 | twin-post.webp | twin-socket charging post on a kerb island, 4:3 | Services · tab 2; Newsletter | |
| 16 | load-module.webp | electrician fitting a small module inside a grey enclosure, 4:3 | Services · KV (crop); post 3 | |
Rules: ≤300 KB, ≤2000 px, webp; Read each one; regenerate if any text, logo, broken face or hand, or style drift. No image twice on one page.

## 14. Fixed facts (brand.md must match; same in all five languages)
- Name Kodou Charging; founded **2017**; office and yard: **Unit 4, 18 Lantern Street, Northfield** (fictional); phone +00 20 7946 0180 (fictional), email visits@kodou-charging.example.
- Hours: office Mon–Fri 08:00–17:30; site visits Mon–Sat 07:30–16:00.
- Process (4 steps): 1 Request (form or email) → 2 Site visit, **90 minutes** on site → 3 Written report and fixed quote within **5 working days**, quote valid **60 days** → 4 Fitting, typically **1–3 days**, then handover and staff briefing.
- Prices (6): Site assessment visit, up to 12 bays — **€290** (credited against the install) · Each further 12 bays assessed — **€120** · 7.4 kW wall unit, fitted — **from €1,480 per unit** · Twin-socket post, fitted (2 bays) — **from €2,950** · Load-management module — **€640 per site** · Annual service visit — **€180 per site + €25 per unit**.
- People (7): Ines Halvorsen (founder, lead electrician) · Tomas Reyes (site assessor) · Amara Okafor (install lead) · Lena Brandt (load and supply engineer) · Priya Nair (client desk and scheduling) · Owen Castell (fitter) · Sofia Lund (aftercare).
- Stories (3): Brightwell Offices — 36 staff bays, 8 wall units, 2 days on site · Harlow Lane print depot — 14 van bays, 4 twin posts, 3 days · Northfield Health Centre — 6 visitor bays, 3 twin posts, 1 day.
- No guarantees of savings, no award claims, no real brands or grants named.

## 15. Home acceptance checklist
- [ ] First line of hero matches split-photo-left / beside-photo / booking-bar; photo left bleeding to edge, text beside on white, T1 booking bar visible in 1440×900 first screen.
- [ ] KV checklist #1–6 all visible; img-01 shows fitter, half-mounted unit, coiled cable, cropped bumper, dappled shadow.
- [ ] T1 outlined banner appears 3× (hero, after pricing, closing) with coloured phrase and right arrow; T2 filled-cell tabs switch without JS; T3 centred statement + 110 px pictograms.
- [ ] 12 home images, 16 in theme, none repeated within one page, 0 cut-outs.
- [ ] H1 4.5rem (≥4.25rem); Hanken Grotesk / Nunito Sans in editor and front end; zh-TW/ja Noto Sans heading stacks.
- [ ] Price table full width at 800 and 1280, price column nowrap right-aligned; stacked at 390.
- [ ] 390 px: no overlap, no vertical labels, no horizontal scroll.
- [ ] sp-reveal not in hero, forms, table; fade 30 px / 0.8 s ease-in-out; sp-stagger tiles; sp-count figures; parallax hero 6 % + band 10 % measured ≥6 px; reduced-motion static.
- [ ] ≥300 English words, ≥3 narrative paragraphs ≥20 words; numbers match §14.
- [ ] Newsletter slot on home §10 + footer, not in first screen; one top menu only (anchor menu).
- [ ] First-screen saturated share ≤ 5 % (cap 15 %).

## 16. Similarity table (target ≈ 80 %)
| Dimension | Nichicon (token) | Kodou Charging |
|---|---|---|
| Ground / panel / ink | #FFFFFF / #F6F6F6 / #111111 `tok(a)` | #FFFFFF / #F2F5F4 / #15201E |
| Accent use | blue #1450E1, text + thin lines only | teal #5A7E78, same uses only (hue changed per plan) |
| First-screen saturation | 1.1 % | ≤ 5 % |
| Type | Open Sans + Noto Sans JP, 400–700 `tok(b)` | Hanken Grotesk / Nunito Sans + Noto Sans TC/JP, 400–700 |
| Statement / section H2 | 32/700/1.55; 30/600/1.6 accent | 2rem/700/1.55; 1.875rem/600/1.6 accent |
| Body | 16/1.6 | 1rem/1.6 |
| Container | 1340 content, 50 px padding; tab box 1172 `tok(c)` | wide 1340, content 1172 |
| Section rhythm | 90–100 px | 96 px |
| Radius | 8 banner/tabs, ~4 cards, 0 else `tok(d)` | identical |
| Shadows | header 0 4 16 .16; tab 0 0 16 rgba(17,17,17,.10) | identical |
| KV image | 3.13:1 full-bleed photo, text right 45 % over wall | split 56/44 photo left (plan), 3.13:1 band reused as wide band + inner KVs |
| Imagery | high-key product-in-situ photos, leaf shadow, cool grade `tok(e)` | high-key documentary photos, leaf shadow, cool grey-green grade |
| Decoration | outlined banner, filled two-cell tab, 110 px line pictograms, dotted bullets `tok(f)` | all four kept with same dimensions |
| Motion | fade-up 30 px 0.8 s ease-in-out, once `tok(g)` | sp-reveal--up 30 px 0.8 s ease-in-out + stagger + count + parallax |
