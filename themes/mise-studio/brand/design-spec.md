# Mise Studio: design spec (stage 1 spec, binding for implementation)

Slug `mise-studio`, commercial kitchen design studio (local service promo landing page), theme-meta `type` **landing** (page_structure **landing-longform**; WooCommerce not used, not required). Row b29-5: archetype **asymmetric-masonry** (home block 5), hero **framed-window** (the hairline outline over the photo is the "frame"), nav **top-bar** (exactly one top menu), palette **murasaki-nezumi (plum grey)** (row hex `#6A5A66`), fonts **Libre Franklin / Public Sans**, font_direction **sans**, CJK **Noto Sans TC / Noto Sans JP** (gothic / sans direction), five languages en, zh-TW, ja, fr, de.

Reference (assigned by the plan row, not in `steps/used-refs.txt`): **LIXIL** https://www.lixil.co.jp/ — home, kitchen category https://www.lixil.co.jp/lineup/kitchen/, showroom https://www.lixil.co.jp/showroom/. No secondary reference. Measurements: `brand/reference-tokens.md`, quoted below as **RT(a)…RT(g)**. Screens: `brand/ref/lixil-home-first.png` (hero), `lixil-home-t0/t1.png`, `scroll-lixil-home-*.png` (flush photo-top cells), `scroll-lixil-kitchen-900.png` (ring title, product trio), `scroll-lixil-kitchen-2700.png` (grey-bar accordion sheet with 3-up thumbnails), `lixil-showroom-first.png` (inner page head: breadcrumb, light H1, container photo with caption).

**Imagery: photo** (stage-a IMAGERY = photo: the reference's images are bright documentary photographs of real rooms with people mid-task). Ours are Grok-generated high-key documentary photographs of working commercial kitchens; never the reference's pictures.

We borrow structure, techniques, colour relationships, measurements and the key-visual concept. We never copy LIXIL's photographs, copy, product names, logo or whole-page layout. All text in this file and in the theme repo is English.

Landing rules (design-plan `rules.landing_track`): home is one long conversion page; header menu = in-page anchors to the home sections + **one CTA "Book a site visit"** (the only CTA label on the site); inner pages are reached from the footer; newsletter page = **visit waitlist** (early-access signup); plus privacy, terms and thanks pages; ≥ 1 post.

---

## 0. Fixed brand facts (identical on every page and in every language; brand.md repeats them verbatim)

- **Mise Studio** — designs commercial kitchens around the brigade that will cook in them: a site visit during the quiet hours, a written brief, a layout drawing, a full-scale floor-tape test with your cooks, then drawings and an equipment schedule for your contractor. Founded **2014** by **Renata Solberg** after twelve years cooking on hot lines. Address **Unit 4, Ferrier Yard, 22 Canal Street, Oldmere** (fictional, international-neutral; local address order per language in brand.md). Phone **+00 41 2207 5530** (fictional format). Email `hello@mise-studio.example` (every mailto and form fallback uses it). Sub-line wherever the brand is introduced: **"Commercial kitchen design · since 2014"**.
- **Studio hours**: **Mon–Fri 08:30–17:30**; closed weekends and public holidays. Email answered within **1 working day**.
- **Site visits**: **Mon–Thu**, in the gap between services: **09:30–11:30** or **15:00–17:00**; a visit takes **2 hours**. Visits within **80 km** of the studio (travel included; beyond that, travel at cost). Visit dates usually open **3 weeks** ahead → the **visit waitlist** (newsletter page) tells you when an earlier slot frees up.
- **Kitchens drawn**: **118 kitchens since 2014** (restaurants, hotels, schools, bakeries). No awards, rankings, "best", guaranteed savings or real brands.
- **Fees (6 items, EUR in every language, no conversion, excl. VAT)**:
  | Item | Unit | Price |
  |---|---|---|
  | Site visit and written brief (2 hours on site, brief within 5 working days) | per visit | €480 |
  | Layout drawing, one room (two revisions) | per room | €1,900 |
  | Floor-tape layout test (half a day on site with your brigade) | per test | €650 |
  | Full kitchen design up to 120 m² (all rooms, layout test, equipment schedule, services plan) | per kitchen | €7,800 |
  | Equipment schedule and tender pack | per kitchen | €1,200 |
  | Opening-week visit (one service, written adjustment list) | per visit | €390 |
  Note line (everywhere fees appear): "Prices exclude VAT. Travel within 80 km of the studio is included. The site visit fee is deducted from a full kitchen design commissioned within 3 months. 30% on commission, the balance on hand-over."
- **From visit to opening (5 parts; written as dated info rows, never a step grid or vertical timeline)**: **Week 0 · Visit** (2 hours, between services, Mon–Thu) → **Week 1 · Brief** (written brief within **5 working days**: covers, menu, brigade size, rooms, services on site) → **Weeks 2–3 · Drawing** (layout drawing, **two revisions**) → **Week 4 · Floor test** (the layout taped at full scale on your floor; the brigade walks a service with empty pans; **half a day**) → **Hand-over and opening week** (drawings, equipment schedule and services plan to your contractor; one service with you in opening week).
- **Rooms a brief covers (3 groups; same on home and the Rooms page)**: **Hot line and pass** · **Prep, pastry and cold rooms** · **Wash-up, goods-in and stores**.
- **Named people (7, fictional; titles only "founder", "designer", "site lead", "drawings", "services coordinator", "studio manager"; no qualifications or awards)**:
  1. **Renata Solberg** — founder and kitchen designer (12 years as a chef before 2014). *The designer unrolling the plan in hero photo H1; A1.*
  2. **Kwame Asante** — designer, hot lines, passes and extraction layouts. *Photo R3.*
  3. **Leonor Vidal** — designer, prep, pastry and cold rooms. *Photo R6.*
  4. **Piotr Nowak** — site lead: measured surveys and floor-tape tests. *Photos H2, T1.*
  5. **Aisha Rahman** — drawings and equipment schedules.
  6. **Felix Hartley** — services coordinator: gas, water, drainage and power with your contractor.
  7. **Mina Castell** — studio manager: the visit calendar, the waitlist and the phone.
- **Kitchens we've drawn (4 stories; first names, plain facts, no superlatives)**:
  1. **Ivo's bistro — 64 covers in a former print works.** The pass moved 1.4 m toward the dining room; the two line cooks no longer cross behind the fryer. (Photo K1.)
  2. **Grace's school kitchen — 420 lunches a day.** Wash-up moved to its own corridor so dirty trolleys never meet goods-in. (Photo K2.)
  3. **Anouk's bakery-café — a pastry bench at the window.** Deck oven loaded from one side; the bench sits in daylight, away from the espresso queue. (Photo K3.)
  4. **Samuel's hotel breakfast kitchen — a basement with one lift.** Goods-in route cut from 46 m to 18 m; the cold room now opens next to the lift. (Photo R8.)
- **Journal posts (≥ 1; build 3)**: "Why we tape the line before anyone orders a range" (category *Site tests*, tags *layout-test*, *hot-line*; image T1), "Visit dates for January are open" (category *Studio news*, tag *visits*; image H2), "Wash-up first: drawing a school kitchen for 420 lunches" (category *Kitchens*, tags *wash-up*, *schools*; image K2).
- **A day (brand.md "daily routine")**: 08:30 studio opens, drawings; 09:30–11:30 a site visit between breakfast and lunch service; 13:00 drawing reviews; 15:00–17:00 a second visit or a floor test after lunch service; 17:30 close.

---

## 1. Signature techniques (three, obvious at a glance; not to be diluted)

### T1. Hairline room outline on a photo window + flat side panel (LIXIL home hero, `ref/lixil-home-first.png`, RT(b)(e)(f)(g))
- **Reference**: under a 120px white header, a hero band **1440×511** (y 120–631): the photograph fills the **left 72%** (x 0–1041), a **flat light-grey panel `#F0F0F0`** fills the right 28% (x 1041–1440) holding a **3-line headline** (~56px / 500 / lh 1.3, `#4B4949`) and under it a small grey text link with a thin diagonal arrow. Over the photo a **1.5px white hairline polygon**: a rectangle with **one stepped notch at the top-right** (measured on the screenshot: left **21.5%**, top **12.7%**, width **57%**, height **71%** of the photo; the top edge runs to **65%** of the polygon width, drops **16.5%** of its height, then continues to the right edge) — it frames "the room" inside the picture. **Thin 2px chevrons** (≈30×60) at both edges: white on the photo, light grey on the panel. Slides change by slow fade (2000ms, every 5000ms).
- **Ours, home hero (block 1)**: header **120px**; hero band **1440×560** (y 120–680). Photo cell x 0–1037 (**72%**), panel x 1037–1440 (**28%**) flat `#F0EEF0`. Polygon = inline SVG `viewBox="0 0 100 100" preserveAspectRatio="none"` absolutely covering the photo cell, `<polygon points="21.5,12.7 58.5,12.7 58.5,24.4 78.5,24.4 78.5,83.7 21.5,83.7">`, `fill:none; stroke:#FFFFFF; stroke-width:1.5px; vector-effect:non-scaling-stroke`. **What it traces**: the footprint of the cooking line in photo H1 (range block and canopy inside the rectangle, the pass along its lower edge, the notch where the canopy steps) — the plan outline drawn onto the real room. Panel content: eyebrow, 3-line H1 (4.5rem), arrow link. Chevrons 2px, 28×56: left one white on the photo at x 12, right one `#B8B5B9` on the panel at x 1400, both vertically centred.
- **Must not dilute**: the photo/panel split 72/28 with **no gap and no radius**; the panel is **flat** (no gradient, no shadow, no card inside it); the polygon is a **thin white line with the stepped notch**, large (≥ 55% of the photo width), not a box-shadow frame or a coloured border; H1 sits on the panel, not on the photo; both chevrons visible.
- **Inner pages (continued on 8 pages)**: every inner page head = LIXIL showroom head (`ref/lixil-showroom-first.png`): breadcrumb (0.75rem, plum link), H1 Libre Franklin 400 **2.5rem** `#4B474A`, then the **head photo 948×420 inside the container** with the **same white stepped polygon** framing that photo's subject (same SVG, points tuned per photo in brand notes: default `18,14 60,14 60,26 82,26 82,86 18,86`) and a 2-line white caption bottom-left (Libre Franklin 500 1.375rem + Public Sans 0.875rem, on a 120px `linear-gradient(transparent, rgba(30,26,29,.45))` scrim). Pages: Studio, Rooms, Site test, Fees, Kitchens we've drawn, Book a site visit, Contact, Visit waitlist. Book a site visit additionally repeats the **72/28 photo + flat panel** split as its head (H1 photo left, panel with "Book a site visit" H1 and the visit hours) — the closest echo of the home hero.

### T2. Hollow-ring section titles and titled white sheets (LIXIL kitchen "recommended products" / "search by space image" titles and notice rows, `ref/scroll-lixil-kitchen-900.png`, `-2700.png`, RT(b)(c)(d)(f))
- **Reference**: every section title is a **32px hollow ring (7px accent stroke)** + 12px gap + a **light 28px / 400** title in `#4B4949`, left-aligned on the warm ground; the content below sits on **white sheets** (container 948px, 1px `#E6E6E6` border, radius 0, inner padding 53px, 30px between sheets). Info/notice sheets: a 22px / 400 title left, a **1px `#CCCCCC` rule** across the sheet, dated rows (14px tabular numerals + accent text link), and a small "list" link at the right with a **filled 14px accent dot**.
- **Ours**: H2 on every home section from block 2 on: ring = CSS `::before{content:"";width:32px;height:32px;border:7px solid var(--wp--preset--color--plum);border-radius:50%;box-sizing:border-box}` (empty content only — repo rule), 12px gap, H2 Libre Franklin **400 1.75rem / 1.4** `#4B474A`, 24px below the ring row the sheet starts. Sheets: `#FFFFFF`, 1px `#E6E4E6`, radius 0, padding **53px** (mobile 24px), stacked **30px** apart, container **948px**. Dated rows (home block 6 and Journal): sheet title Libre Franklin 400 1.375rem left + **1px `#CCCACC` rule** 100% under it; rows 64px min-height, label column 168px Public Sans 0.875rem 600 `tabular-nums` (`Week 0`, `Week 1`, `Weeks 2–3`…), text Public Sans 0.9375rem, a plum underlined text link where relevant; at the sheet's top-right a "dot link" (filled **14px plum disc** + 0.875rem text, e.g. "All fees").
- **Must not dilute**: the ring is **hollow, thick (7px), plum**, the title is **light (400) and small (1.75rem)**, never bold, never centred; sheets are **white on the pale ground** with a 1px border and square corners; no icons instead of the ring; no shadows.
- **Inner pages**: every inner page uses ring titles for its H2s and white sheets for its content (all 12 pages); dated-row sheets on **Fees** (5 process rows), **Book a site visit** (the same 5 rows + visit windows), **Journal / category / tag** (posts as dated rows: date · category · title), **Site test** (what happens hour by hour on test day: 4 rows).

### T3. Grey-bar accordion with a photo sheet (LIXIL kitchen "search by space image", `ref/scroll-lixil-kitchen-2700.png`, RT(c)(e)(f)(g))
- **Reference**: inside the 948 container a **flat 48px grey bar `#949292`**, white 15px label at 20px left padding, a **white round chevron Ø24** at the right; it opens (slideToggle ~300ms linear) a **white sheet with a 1px border** holding one intro line and **3-up thumbnails 264×175 (1.51:1) with 24px gutters**, inner padding 53px.
- **Ours, home block 3 "Rooms a brief covers"**: three `core/details` blocks (no JS), each `<summary>` is the bar: **48px**, flat **`#8A868B`** (reference grey −3% L, plum-tinted; see §4 contrast note), label Libre Franklin **600 1.1875rem** `#FFFFFF`, left padding 20px, right: white **Ø24 disc** with a plum 1.5px chevron (rotates 180° when open, 300ms linear). Bars stacked with **12px** gap. Open sheet: `#FFFFFF`, 1px `#E6E4E6`, no top border, padding **40px 53px 53px**; one intro line (Public Sans 0.9375rem, ≤ 22 words), 24px, then **3 thumbnails 264×175** (`aspect-ratio: 264/175`, radius 0, gutter **24px**) each with a caption line under it (0.8125rem, 8px gap). Bar 1 **open by default** (`open` attribute), bars 2–3 closed.
  - Bar 1 **Hot line and pass**: intro "Where the heat is: ranges, plancha and fryers under one canopy, and the pass the plates leave from." — R1 "The hot line", R2 "The pass", R3 "Clearances, measured".
  - Bar 2 **Prep, pastry and cold rooms**: intro "Where the morning goes: long benches, a cool bench for pastry, and cold rooms you can reach with full hands." — R4 "Prep benches", R5 "Pastry bench", R6 "Cold room shelving".
  - Bar 3 **Wash-up, goods-in and stores**: intro "Where trolleys travel: deliveries in one door, dirty plates out another, dry stores in between." — R7 "Wash-up", R8 "Goods-in", R9 "Dry store".
- **Must not dilute**: flat grey **full-width bars** (not outlined, not plum, not rounded), white disc chevron, the sheet with **three equal photo thumbnails** in a row, first bar open so the photos are visible on load.
- **Inner pages**: **Rooms** (the same 3 bars, all with their 3 photos, plus a 4th text-only bar "What a brief does not cover" — the only text-only variant), **Fees** (FAQ: 5 bars, text sheets), **Site test** (FAQ: 4 bars), **Contact** (FAQ: 5 bars). The bar look is identical everywhere.

### Supporting (not counted as signatures)
- **Flush photo-top cells with 1px borders** (LIXIL "recommended products" trio, `ref/scroll-lixil-kitchen-900.png`, RT(e)): cells butt with no gutter, 1px `#E6E4E6` borders, photo top 316×231 (1.37:1), white label block below: category label 0.8125rem 700 centred, name 1.375rem 400 centred, one line 0.8125rem centred, a plum dot link. Used in home block 5 (text-only variant, 3 cells), home block 8 (Kitchens, 3 photo cells) and the Kitchens page (4 cells, 2×2).
- **Flat grey square page-top button** (RT(f)): 60×60 `#CCCACC`, white CSS triangle (`content:""` borders), fixed bottom-right 30px/30px, **≥ 1200px only**; below 1200px it sits in the footer flow (never over text).
- **Container photo with caption bottom-left + pill bottom-right** (LIXIL kitchen category hero, RT(e)): home block 4 parallax band.

---

## Key visual concept

### (1) Reference first screen: concept, story, signature motion
lixil.co.jp opens on **a bright, real living room in daylight**: a family laughing on a grey sofa beside the kitchen counter, a teenager carrying plates, a dog, a big window onto the garden — people mid-task in a room that is plainly lived in. **A thin white stepped outline** is drawn over the picture, marking "the room" as if a plan had been laid on the photograph. To the right, a **flat light-grey panel** carries the three-line promise ("Create the daily life you love") and one small arrow link; thin chevrons at both edges say there are more rooms. The kitchen category page opens the same way (a wide room photo, a person at the counter, a caption bottom-left, one pill CTA) and the showroom page offers **one path: book a visit**. **Story**: *the product is the stage of everyday life; you see it already lived in, photograph first, then one quiet way to come and see it.* **Signature motion**: slow fade between hero slides (slick fade 2000ms, autoplay 5000ms), thin chevrons; accordion slideToggle 300ms; nothing moves on scroll.

### (2) Our translation (same composition, same story, same image type)
The same idea in a commercial kitchen studio: **a high-key documentary photograph of a working kitchen at the quiet minute before service** — founder-designer **Renata Solberg** (woman, 40s, grey-streaked short hair, navy work shirt, sleeves rolled) **unrolling a large paper layout plan on the stainless pass** while the **head chef** (man, 50s, white jacket, apron) **points back at the hot line**; two cooks doing mise en place in the background; the hot line (range block under a long canopy) runs across the middle of the frame. The **white stepped hairline traces the footprint of that cooking line on the photo** — exactly what the studio does: draws the room around the people who cook in it. The **flat pale plum-grey panel** at the right states the promise in three short lines, "Drawn / around / the line.", with one small arrow link "How a brief works". The second slide is the **same kitchen idea at the test stage** (H2: the layout taped on an empty floor, the chef walking it with an empty pan) — the reference's "more rooms" becomes "the next step". **One booking path**: the header CTA "Book a site visit" (the showroom visit translated into a visit to your kitchen). **Image type**: photo, documentary, high-key, people mid-task, never posed to camera. **Motion**: the outline **draws itself once** on load (SVG stroke, 1.6s), the two photographs **cross-fade slowly** (5s hold, 2s fade — the reference's slick timing), thin chevrons advance the slide; no scroll reveal on the hero. Scroll motion (`sp-parallax`) is reserved for the full-bleed service photo in block 4 — the reference has no scroll motion, so we add exactly one strong one there rather than inventing motion in the hero.

### (3) KV checklist (all implemented on the home first screen at 1440×900 and visible)
| # | Reference element | Our counterpart | Position | Motion | Image used |
|---|---|---|---|---|---|
| 1 | Bright room photo with people mid-task, left 72% of the hero | Documentary photo: designer unrolling the plan on the stainless pass, chef pointing at the hot line, two cooks at mise en place behind | x 0–1037, y 120–680 (72% × 560), radius 0, `object-fit:cover; object-position: 45% 50%`; 390px: full width 390×260 under the header | slow cross-fade to H2 and back: 5s hold, 2s fade, `ease` (RT g), infinite; static under reduced motion / `?sp-static` / no JS (shows H1) | **H1** (`hero-plan-on-pass.webp`), **H2** (`hero-tape-floor.webp`) |
| 2 | Thin white stepped outline polygon over the photo | 1.5px white hairline with the stepped notch, framing the cooking-line footprint (range block + canopy, pass on its lower edge) | photo-relative: left 21.5%, top 12.7%, width 57%, height 71%, notch at 65% / 16.5% (SVG points in T1) | stroke draws in once on load: `stroke-dasharray/offset` 1.6s `cubic-bezier(.22,.61,.36,1)`, delay .3s; no redraw on slide change; reduced motion = drawn | on H1 (stays over H2 too: the tape lines in H2 sit inside it) |
| 3 | Flat grey side panel with a 3-line headline | Flat `#F0EEF0` panel; eyebrow "Commercial kitchen design · since 2014" (Public Sans 600 0.8125rem, .08em, `#6E6A6F`), H1 "Drawn / around / the line." Libre Franklin **500 4.5rem / 1.2** `#4B474A`, 3 lines | x 1037–1440 (28%), y 120–680; content left-aligned at x 1093 (56px padding), vertically centred | none (no reveal on hero) | — |
| 4 | Small arrow link under the headline | "How a brief works" Public Sans 500 0.9375rem `#6E6A6F` + a 22×10 thin diagonal arrow SVG (1.5px), → `#brief` | 32px under the H1 | hover: text plum + underline 1px offset 4px, .2s | — |
| 5 | Thin chevrons at both edges | 2px chevrons 28×56: white on the photo (left), `#B8B5B9` on the panel (right); buttons with `aria-label` "Previous / Next photo" | x 12 and x 1400, vertical centre of the hero (y 400) | click/keyboard = next/previous slide (2s fade); hidden < 782px | — |
| 6 | White 120px header: logo left, two-row nav with "/" separators, single menu | White **120px** header: wordmark left; utility row (phone · "Studio Mon–Fri 08:30–17:30" · language switcher, 0.8125rem); nav row: one `core/navigation` with 5 anchors (Brief / Rooms / Site test / Fees / Kitchens) separated by thin slanted 1px rules (CSS `content:""`, rotated 20°, 14px tall, `#B8B5B9`), then the plum pill CTA **"Book a site visit"** | y 0–120; wordmark x 246 (container 948 left edge); nav right-aligned to x 1194 | current anchor: 2px plum underline 6px below (RT nav); no slide-in | — |

The wordmark is text — "Mise Studio" Libre Franklin 600 1.625rem `#4B474A` — preceded by our own 26px mark: a 1.5px plum stepped outline (the T1 polygon reduced to a square with the notch). Not the reference logo.

---

## 2. Home page

### First screen composition (1440×900)
- **y 0–120 header** (white, 1px `#E6E4E6` bottom rule; sticky, `position: sticky; top:0`, height stays 120 — RT header band). Container 948 (x 246–1194). Left: mark + wordmark, vertically centred. Right, two rows: utility row (y 30–50) right-aligned; nav row (y 72–96): five anchors Libre Franklin **500 1rem** `#4B474A` (RT nav 16/500), 26px gap with the slanted rule between items, then 24px gap and the CTA pill **"Book a site visit"** 40px high, padding 0 22px, radius 999px (RT pill), `#6A5A66` fill, white Public Sans 600 0.9375rem; hover `#574A54` .2s. Below 1100px the five anchors collapse into a 44px square `#949195`-outlined menu button ("Menu" text label allowed by the CSS rule list; the button text is markup); the CTA pill stays.
- **y 120–680 hero** (KV 1–5): grid `72fr 28fr`, no gap, height 560. Photo cell: two stacked `figure>img` (H1, H2) absolutely layered inside the cell (decorative layer, no text in it), polygon SVG on top, left chevron. Panel cell: KV 3–4 + right chevron.
- **y 680–900 (220px)**: page ground `#F5F3F5`; 53px down, block 2 begins: ring + H2 "What a brief is" (y ~733) and the top of its white sheet with the first narrative line visible — the reference's "content sheet on the ground under the hero".
- First-screen saturated share target **≤ 6%** (RT measured 3.3–5.8%; check-first-screen.py hard limit 15%; row note 30%): plum pill and ring have HSV S ≈ .15 (not counted saturated); only the photograph's warm accents (vegetables, copper pans) count.
- **390×844**: header 64px (mark + wordmark 1.25rem left; right: compact pill "Book a visit" 36px + 44px menu button). Photo 390×260 (H1, `object-position: 40% 50%`), polygon kept (decorative, no text near it), no chevrons. Panel in normal flow under the photo: `#F0EEF0`, padding 32px 24px, eyebrow, H1 **clamp(2.75rem, 1.6rem + 4.5vw, 4.5rem)** in 3 lines, arrow link. **No vertical text, no absolutely positioned label over text.** The cross-fade still runs on mobile (H2 crop `object-position: 35% 60%`).

### Block order (landing-longform, anchors in brackets)
| # | Block | Purpose | Layout, photos | Copy weight | Effects |
|---|---|---|---|---|---|
| 1 | **Hero (KV, T1)** `#top` | who / what / one CTA | see above; **H1**, **H2** | eyebrow + 5-word H1 + link | own cross-fade + outline draw; **no reveal** |
| 2 | **"What a brief is"** `#brief` (T2) | the story in one narrow column | ring + H2 in the 948 container; one white sheet, padding 53px, text column **640px centred** inside it (row first_screen "centered-narrow-column", used here): **3 narrative paragraphs** Public Sans **1.0625rem / 1.8** (≥ 50 words each, ~190 words): (a) Renata's twelve years on hot lines and why kitchens get drawn around equipment catalogues instead of cooks; (b) the visit — two hours between services, the brigade's real routes, the covers, the menu, the gas and drains already in the walls; (c) the brief — a written page within five working days that every later drawing is checked against, and the floor test before anyone orders a range. Then a 1px `#CCCACC` rule (640px) and a signature line "Renata Solberg, founder · 118 kitchens since 2014" (0.875rem `#6E6A6F`), and a plum dot link "About the studio" | ~210 words | ring/H2 row `sp-reveal sp-reveal--up`; paragraph group `sp-reveal sp-reveal--up` |
| 3 | **"Rooms a brief covers"** `#rooms` (T3) | what the service includes | ring + H2; one intro line (0.9375rem, 640px): "A brief covers every room a plate or a delivery passes through. Open a room to see what we look at on a visit."; then 3 grey bars (T3), bar 1 open; photos **R1 R2 R3** (bar 1), **R4 R5 R6** (bar 2), **R7 R8 R9** (bar 3); under the bars, right-aligned dot link "All rooms" | ~110 words incl. captions | **none** on the bars or sheets (interactive content; avoid hidden-in-details reveal bugs) |
| 4 | **Full-bleed service band** (supporting: container-photo caption + pill) | breath + the story's payoff: the kitchen in service | full width, **1440×540** (mobile 390×300), photo **P1** (full service on a finished line) is the moving layer; foreground (outside the layer): bottom-left a 2-line white caption on a 160px bottom scrim — Libre Franklin 500 **2rem** "Then the line cooks." + Public Sans 0.9375rem "Ivo's bistro, opening week. The pass moved 1.4 m; nobody crosses behind the fryer." (x 246, bottom 48px); bottom-right the **CTA pill "Book a site visit"** (x right edge 1194, bottom 48px). < 782px: caption and pill below the photo in flow on `#FFFFFF` | ~25 words | **`sp-parallax`**, `--sp-par: 10%` (mobile 6%); caption/pill static, no reveal |
| 5 | **"How a layout is tested on site"** `#site-test` (archetype asymmetric-masonry + supporting flush cells) | the method, the studio's difference | ring + H2; grid in 948: **`388px 1fr`**, gap 24px: left **T1** 4:5 (388×485, radius 0); right column: **T2** 3:2 (536×357) on top, under it (24px) a white sheet 536 wide, padding 32px: H3 Libre Franklin 600 1.25rem "Half a day, at full scale" + 1 paragraph (~55 words: tape on the floor where every bench, range and door will stand; the brigade walks a lunch service with empty pans; Piotr moves the tape until nobody waits, crosses or reaches). Below the grid (30px), **3 flush cells** (text-only variant of the LIXIL trio; 1px `#E6E4E6`, white, no gutter, each 316 wide, padding 40px 24px, centred): label (0.8125rem 700 `#6E6A6F`) "Tape" / "Walk" / "Adjust"; name Libre Franklin 400 1.375rem "Every bench, at full size" / "A service with empty pans" / "Until nobody crosses"; one line 0.8125rem "Coloured tape for benches, ranges, doors and trolley routes." / "Your own cooks, your own menu, timed on the floor." / "Changes go back into the drawing the same week."; then a plum dot link "The site test" | ~120 words | text sheet `sp-reveal sp-reveal--up`; cells row `sp-stagger` + each cell `sp-reveal sp-reveal--up` |
| 6 | **"From visit to opening"** `#process` (T2 dated-row sheet) | the five parts, with dates | ring + H2; white sheet: title "Five weeks, in order" + 1px `#CCCACC` rule + dot link "Book a site visit" at top-right; **5 rows** (label column 168px tabular: Week 0 · Week 1 · Weeks 2–3 · Week 4 · Opening week; text: bold 1-line title + 1 line, §0 facts: 2 hours Mon–Thu between services / brief within 5 working days / two revisions / half a day, full scale / one service with you), 1px `#E6E4E6` between rows; < 782px the label sits above the text | ~110 words | sheet `sp-reveal sp-reveal--up` (whole sheet, not rows) |
| 7 | **"Fees"** `#fees` | price, practical | ring + H2; white sheet **948 full width**, padding 53px: 6 fee rows (§0), grid `1fr 140px 150px`: item Public Sans 600 1rem · unit 0.875rem `#6E6A6F` · price Libre Franklin 500 **1.25rem tabular-nums, nowrap, right-aligned**; 1px `#E6E4E6` under each row, 18px vertical padding; note line (0.875rem) under; then a flat `#F0EEF0` strip inside the sheet (padding 24px 32px): left "Start with a visit — €480, deducted from a full design within 3 months." (Libre Franklin 500 1.125rem), right the CTA pill | table + 60 words | **none** (no reveal on prices) |
| 8 | **"Kitchens we've drawn"** `#kitchens` (supporting flush cells with photos) | proof without claims | ring + H2; 3 flush cells (948/3 each, 1px borders, no gutter): photo top 316×231 (**K1**, **K2**, **K3**); label block: category label 0.8125rem 700 ("Bistro · 64 covers" / "School · 420 lunches" / "Bakery-café"), name 1.375rem 400 ("Ivo's pass, moved 1.4 m" / "Grace's wash-up corridor" / "Anouk's window bench"), one line 0.8125rem (§0 story fact), plum dot link "Read the story"; under the row a right-aligned dot link "All four kitchens" | ~90 words | row `sp-stagger` + each cell `sp-reveal sp-reveal--up` |
| 9 | **Visit band + waitlist** `#visit` | conversion (the one CTA, last time) + early access | white sheet 948, 1px border, grid `1fr 1fr`, padding 53px: left: ring + H2 "Book a site visit", 2 lines ("Two hours in your kitchen, between services, Monday to Thursday. Visit dates usually open three weeks ahead."), address, studio hours, visit windows 09:30–11:30 / 15:00–17:00, phone, email; right: the **CTA pill** (large: 52px, Public Sans 600 1rem) and under it "€480 · brief within 5 working days" (0.875rem). Directly under (30px), a flat `#F0EEF0` strip, padding 40px 53px: left "Visit waitlist" Libre Franklin 400 1.375rem + 1 line "Leave your email; we write once when an earlier visit slot frees up."; right the **newsletter form slot** (§11) | ~80 words | ring/H2 `sp-reveal--up` only; **no reveal on the form or the CTA** |
| 10 | Footer | | white, 1px `#E6E4E6` top border; 948 container, 4 columns: wordmark + sub-line + address; "Studio" (Studio, Rooms, Site test, Kitchens we've drawn, Journal); "Visits" (Fees, Book a site visit, Visit waitlist, Contact); hours + phone + email + compact newsletter slot; bottom row: Privacy · Terms · © 2014–2026 Mise Studio; page-top button (in flow < 1200px). Text link columns, not a second navigation bar | | none |

Home English word count target **≥ 650** (≥ 250 required); narrative paragraphs: block 2 alone has 3 of ≥ 50 words.

**Home photo positions (17, all distinct): H1, H2, R1–R9, P1, T1, T2, K1, K2, K3** (≥ 8 ✓; visible without interaction: H1, R1, R2, R3, P1, T1, T2, K1, K2, K3 = 10). No photo repeats on the home page.

### Comparison with the most recent themes (no repeated skeleton)
| Slot | Nohara Holiday Park | Shio Butchers | Tsubasa College | Hisui Clinic | **Mise Studio** |
|---|---|---|---|---|---|
| Hero | photo-left 62% + serif H1, counter + cue line, pill with disc | shop-front rail + horizontal photo stage + paper panel | focus-pull photo + cohort strip | rule-split window, frosted index column | **photo 72% + flat panel 28%, white stepped hairline outline, chevrons, cross-fade** |
| 2 | 3-column hairline ledger, straddling title | counter cards with tabs | intro + facts row | single narrative column | **narrow narrative column on a white sheet with ring title** |
| 3 | sticky photo narrative | intro 2-col | isometric module field | conditions tabs | **grey-bar accordion, each bar a 3-photo sheet** |
| 4 | caption-panel cards | day hour rows | month ruler | parallax interlude | **full-bleed parallax service photo, caption bottom-left + pill bottom-right** |
| 5 | four ruled booking rows with numerals | parallax block with figures | certification ledger + table | text accordion ledger with numerals | **asymmetric masonry (tall + wide photo) + flush 3 text cells** |
| 6 | parallax band with inset card | wrapping step rows | parallax band with routine card | count-up figures | **dated-row sheet (Week 0 … Opening week)** |
| 7 | out-of-season alternating rows | farm cards | instructors | between-visits 58/42 | **fee rows in a white sheet + visit strip** |
| 8 | price rows | order band | fee table | stories grid | **flush photo-top cells (3 kitchens)** |
| 9 | journal caption cards | newsletter | journal | fees, news rows | **visit sheet + waitlist strip** |
| 10 | book band + newsletter | — | newsletter | visit + newsletter | footer |
Why not alike: no ledger columns, no straddling titles, no sticky media, no tabs, no count-up, no cards with badges; the only accordion (Hisui's) was a tinted text ledger with big numerals and an open-row edge — ours is a **flat grey bar opening a photo sheet**; the only "window" hero (Hisui) used a frosted index column and a rule — ours is a hairline outline drawn on the photo beside a flat panel; process appears as small dated rows inside a white sheet, not as large numbered rows; the page is built from **white sheets on a pale ground in a 948px column**, which none of the four used.

---

## 3. Inner pages (12 pages + posts; T1 head on 8, T2 on all, T3 on 4)

Inner head (T1 continuation) as specified in T1: breadcrumb, H1 2.5rem 400, container photo 948×420 with the white stepped outline and a 2-line caption, `sp-parallax` `--sp-par: 6%` (mobile 4%) on the head photo. Every page ends with a **closing visit row** inside a white sheet: "Book a site visit" Libre Franklin 400 1.375rem left + the CTA pill right (stacked on mobile) — except Book a site visit, Thanks, Privacy, Terms.

| Page (slug) | Head photo | Key content | Body images (no repeats on the page) | Techniques |
|---|---|---|---|---|
| Studio (`studio`) — about | **A1** | founding 2014 (≥ 220 words: Renata's twelve years, the first kitchen drawn on a café floor in chalk, why every layout is tested at full scale); "How we work" 3 short sheets (visit between services / one brief / tested before ordered); **the 7 people as a dated-row sheet** (name 168px column, role + one line), not a grid; the day (§0 a day) | H1, R3, T1 | T1 head, T2 |
| Rooms a brief covers (`rooms`) | **P1** | intro (80 words); T3 with the 3 bars (all 9 photos, bar 1 open) + 4th text-only bar "What a brief does not cover" (furniture for dining rooms, bar design, signage); per room group a paragraph of what is measured (clearances 1,050 mm hot aisle, 900 mm prep aisle, trolley widths, canopy overhang) | R1–R9 | T1, T2, T3 |
| The site test (`site-test`) | **H2** | why test before ordering (≥ 150 words); asymmetric masonry (T1 tall + T2 wide) as home block 5; **test-day dated rows** (13:00 tape / 14:00 walk a service / 15:30 adjust / 16:30 photographs and notes); 3 flush text cells (Tape / Walk / Adjust); FAQ T3 (4 bars: floor must be clear? who attends? does it disturb service? what if we change the menu?) | T1, T2, R3 | T1, T2, T3 |
| Fees (`fees`) | **R3** | full fee rows (6 items, §8 rules) + note line; the 5 process rows (T2 dated rows); payment terms; FAQ T3 (5 bars: travel beyond 80 km, VAT, revisions, deducted visit fee, cancellation 48 hours before a visit free) | R2 | T1, T2, T3 |
| Kitchens we've drawn (`kitchens`) | **P1** | 4 stories as flush photo-top cells **2×2** (K1 Ivo, K2 Grace, K3 Anouk, R8 Samuel), each followed below the grid by its 120–160-word story in a white sheet (anchor ids per story) | K1, K2, K3, R8 | T1, T2, supporting cells |
| Book a site visit (`book-a-visit`) — booking page | **H1** in the **72/28 hero split** (panel: H1 "Book a site visit", visit windows, €480) | 5 process rows; what to have ready (covers, menu, current floor plan if any, gas and power details); **contact form slot** (§11) under ring H2 "Ask for a visit date"; mailto fallback; phone and hours | T2, R2 | T1 (hero split), T2 |
| Contact (`contact`) | **R7** | **contact form slot** (§11) first under ring H2 "Write to the studio"; address, studio hours, phone, email; directions in prose (canal path, 6 min from Oldmere station — fictional); FAQ T3 (5 bars) | K2 | T1, T2, T3 |
| Visit waitlist (`waitlist`) — newsletter | **T2** | standalone page: 2 paragraphs (what you get: one email when an earlier visit slot frees up, plus a note when the next month's dates open; nothing else), **newsletter slot** in a `#F0EEF0` strip, privacy line | — | T1, T2 |
| Journal (posts page `journal`) | — (ring H1 on the ground, no photo) | posts as T2 dated rows in a white sheet (date · category · title · plum link) + featured image thumb 160×106 at the right of each row | featured images | T2 |
| Single post / category / tag | single: featured image 948×533 in the container under ring H1; 720 reading column; archives reuse the Journal layout | | T1, H2, K2 | T2 |
| Privacy (`privacy`), Terms (`terms`) | — | white sheet, ring H2s, 720 column; terms carry the fee terms of §0 | — | T2 |
| Thanks (`thanks`) | — | white sheet: "Thank you — Mina will reply within 1 working day." + what happens next (5 process rows short) + dot link back home | — | T2 |

Image assignment per page (authoritative): Studio head A1, body H1, R3, T1 · Rooms head P1, body R1–R9 · Site test head H2, body T1, T2, R3 · Fees head R3, body R2 · Kitchens head P1, body K1, K2, K3, R8 · Book head H1, body T2, R2 · Contact head R7, body K2 · Waitlist head T2.

Standard pages for theme-meta / demo-content `screens`: home, about → `studio`, news → posts page `journal`, article → post 1, category → *Site tests*, tag → *layout-test*, newsletter → `waitlist` (standalone, not an alias), contact → `contact`. Exactly one page with role `posts` (`journal`, empty content). Header menu: home anchors (`/#brief`, `/#rooms`, `/#site-test`, `/#fees`, `/#kitchens`) + CTA → `/book-a-visit/`; inner pages from the footer.

---

## 4. Colour (RT(a) relationship: pale ground, white sheets, photographs carry colour, one small accent)

| Role | Reference (RT a) | **Mise Studio** | Share (first screen) | Use |
|---|---|---|---|---|
| Ground | `#F9F7F1` warm off-white | **`#F5F3F5`** (−1.6% L; hue moved to the plum family because common rules forbid a cream/beige ground) | ~25% | page ground behind sheets |
| Sheet / header | `#FFFFFF` | **`#FFFFFF`** | ~20% | header, sheets, footer |
| Panel | `#F0F0F0` (hero panel) | **`#F0EEF0`** (same L, plum tint) | ~15% | hero panel, strips |
| Photograph | — | — | ~40% | |
| Ink | `#4B4949` | **`#4B474A`** (same L, plum tint) | text | body, headings |
| Muted | — | **`#6E6A6F`** | text | eyebrow, units, captions, dates |
| Bar | `#949292` | **`#8A868B`** (−3% L so 19px/600 white text reaches 3.5:1, WCAG large text) | ~0% (below fold) | T3 bars |
| Border | `#E6E6E6` | **`#E6E4E6`** | | sheet borders, row rules |
| Rule | `#CCCCCC` | **`#CCCACC`** | | sheet title rules, page-top button |
| Chevron on panel | light grey | **`#B8B5B9`** | | right chevron, nav separators |
| Accent | `#EF7A00` orange | **`#6A5A66`** plum (row hex, murasaki-nezumi) | ≤ 3% | CTA pill, rings, dot links, links, current nav underline, form accent |
| Accent hover | — | **`#574A54`** | | pill / link hover |
| Error (forms) | — | **`#A23B3B`** | | form errors only |
Accent change reason: the row assigns the murasaki-nezumi plum and a quiet palette; LIXIL's orange would be the only saturated element and reads retail/DIY for a design studio. The **role** (one small accent on rings, dots, links, the one CTA) is kept exactly. Plum `#6A5A66` on white = 6.5:1 contrast. **First-screen saturated share ≤ 6% target, 15% hard ceiling.** Plum differs from recent mains (Nohara olive, Shio bark/brass, Tsubasa slate, Hisui green).

theme.json palette slugs: `ground` #F5F3F5, `base` #FFFFFF, `panel` #F0EEF0, `ink` #4B474A, `muted` #6E6A6F, `bar` #8A868B, `border` #E6E4E6, `rule` #CCCACC, `plum` #6A5A66, `plum-deep` #574A54, `error` #A23B3B.

## 5. Type (font_direction **sans**)

- **Latin headings**: **Libre Franklin** (variable wght 100–900, latin + latin-ext), sans. **Latin body / UI**: **Public Sans** (variable wght 100–900, latin + latin-ext). No serif anywhere. (Reference: Hiragino Kaku Gothic ProN / Meiryo, a plain gothic — the same direction.)
- **CJK (gothic / sans direction)**: zh-TW headings `"Libre Franklin", "Noto Sans TC", sans-serif` (bundled Noto Sans TC subset, weights 400/500/700); ja headings `"Libre Franklin", "Noto Sans JP", sans-serif` (bundled subset). CJK body (repo contract: body stacks must not contain the bundled zh/ja families): zh-TW `"Public Sans", "PingFang TC", "Microsoft JhengHei", "Noto Sans CJK TC", sans-serif`; ja `"Public Sans", "Hiragino Kaku Gothic ProN", "Hiragino Sans", "Yu Gothic", "Meiryo", "Noto Sans CJK JP", sans-serif` (the reference's own body stack). Never Mincho.
- **Loading**: theme.json `fontFamilies` + `fontFace` for Libre Franklin, Public Sans, Noto Sans TC (subset), Noto Sans JP (subset); woff2 in `assets/fonts`, every file in theme-meta `fonts[].files` with OFL licenseFile; family names in readme.txt. Editor and front end load the same faces. style.css has `:lang(` rules → copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it. zh subset: Hokuto / Hada replacement method. check-editor-fonts.mjs must pass on en and zh-TW.
- **Scale** (RT(b) source in brackets):
  | Token | Size | Family / weight / lh / tracking | Use |
  |---|---|---|---|
  | `xx-large` | **4.5rem** (72px; never below 4.25rem ≥ 782px); mobile clamp(2.75rem, 1.6rem + 4.5vw, 4.5rem) [RT hero 56/500/1.3, raised to meet the 4.25rem floor] | Libre Franklin 500 / 1.2 / −0.01em | home H1 (max ≥ 4.25rem ✓) |
  | `x-large` | **2.5rem** [RT kitchen H1 25px, ×1.6 for a landing site] | Libre Franklin 400 / 1.3 | inner H1 |
  | `large` | **2rem** | Libre Franklin 500 / 1.3 | parallax caption |
  | `medium-large` | **1.75rem** [RT section title 28/400] | Libre Franklin 400 / 1.4 | H2 with ring |
  | `medium` | **1.375rem** [RT notice title 22/400, product name ~22/400] | Libre Franklin 400 / 1.4 | sheet titles, cell names, waitlist title |
  | h3 | 1.25rem | Libre Franklin 600 / 1.4 | H3, prices (500, tabular) |
  | bar | **1.1875rem** [RT bar 15px white, enlarged for contrast] | Libre Franklin 600 / 1 | T3 bar labels |
  | lead | 1.0625rem | Public Sans 400 / 1.8 | narrative paragraphs (block 2) |
  | `base` | **1rem** [RT body 15.2/1.6; nav 16/500] | Public Sans 400 / 1.7 (CJK 1.85) | body; nav 500 |
  | `small` | **0.875rem** [RT date rows 14px] | Public Sans 500 / 1.6, `tabular-nums` | dated-row labels, notes |
  | `x-small` | **0.8125rem** [RT card label 13/700, utility 13px] | Public Sans 700 (labels) / 400 (captions) | cell labels, captions, eyebrow (.08em) |
- zh-TW / ja: headings ≈ 0.75× English (H1 3.375rem — stays ≥ 3.375; the 4.25rem gate is measured on en), H2 1.375rem, letter-spacing .04em, body lh 1.85. fr / de: `hyphens: auto` on body and headings ≤ 2.5rem; de / fr H1 stays 3 lines ("Geplant / um die / Linie." / "Dessinée / autour de / la ligne.") and may drop to 4.25rem, never below.

## 6. Spacing, radius, decoration (RT c, d, f)
- Container **948px** for everything except the hero and the parallax band (RT container 948, x 246–1194 at 1440); 720 reading column (posts, legal), 640 narrative column inside the block 2 sheet. Section padding **53px** top/bottom between ring-title groups (RT section padding), **30px** between stacked sheets (RT), sheet padding **53px** desktop / 24px mobile. Header **120px** (RT). Hero **560px** (RT 511, +49 so the 3-line 4.5rem H1 + eyebrow + link fit with air).
- Radius **0** on photos, sheets, bars, panels, inputs (RT d). Round only: CTA pill 999px, chevron discs and dot-link dots 50%, ring 50%.
- Borders 1px `#E6E4E6` on sheets and cells; sheet-title rules 1px `#CCCACC`. **No shadows** anywhere (RT d). No gradients except the photo caption scrims.
- Decoration inventory (all from RT f): T1 stepped hairline polygon (hero + inner heads), 32px/7px hollow plum ring before H2s, 14px filled plum dot before dot links, Ø24 white disc chevron on bars, thin 2px hero chevrons, slanted 1px nav separators, 60×60 grey page-top square, 8px dots — not used (no carousels besides the hero).
- Not copied: LIXIL logo, the orange colour, banner strips/carousels of campaign images, the chat button, survey pop-up, "360°" badges, the notice box.

---

## 7. Photos (18, Grok, one at a time, read every one)

**Imagery: photo** (stage-a IMAGERY = photo). STYLE (exact string on every prompt, `IMAGE_STYLE="<STYLE>" scripts/grok-image.sh out.webp "<subject>"`):

`bright high-key documentary photograph, natural daylight from large windows plus even overhead kitchen light, clean whites and brushed stainless steel, soft shadows, true-to-life muted colours with small warm accents from vegetables and copper, people caught mid-task and not looking at the camera, diverse adults in plain chef whites, aprons and work shirts, a real working commercial kitchen in a modern international city, uncluttered, eye-level 35mm lens, no text, no letters, no numbers, no labels, no signs, no logos, no brands, no Japanese elements`

No cut-outs (0). Each ≤ 300 KB, ≤ 2000 px, webp; one readme.txt line each (AI-generated, CC0). Paper plans must show only lines and rectangles (no lettering); appliances, tape and crates without brand marks. Regenerate any frame with text, logos, broken faces, extra fingers, odd hands on knives/tape, or a style drift (dim, moody, warm-filtered, too saturated).

| ID | Subject / composition | Ratio (px) | Used on (page → block) | Home |
|---|---|---|---|---|
| **H1** | quiet minute before service: designer (woman, 40s, short grey-streaked hair, navy work shirt) unrolling a large paper layout plan (lines only) on a stainless pass in the lower-right foreground; head chef (man, 50s, white jacket, apron) beside her pointing back at the hot line; the hot line (range block under a long stainless canopy) runs across the middle of the frame from left 20% to 80%; two cooks doing mise en place behind; wide windows at left | 16:9 (1920×1080; shown 1.85:1) | Home hero slide 1 (KV 1, 2); Studio body; Book a site visit head | **home** |
| **H2** | an empty kitchen shell with a bare pale concrete floor and large windows: coloured floor tape outlining benches, ranges and doors at full scale; site lead (man, 40s, grey sweater, knee pads) kneeling to tape a corner; a chef in whites walking the taped line holding an empty pan | 16:9 (1920×1080) | Home hero slide 2 (KV 1); Site test head; journal post 2 | **home** |
| **P1** | wide view of a finished bright kitchen in full lunch service: five cooks in motion along the hot line and pass, steam over pans, plates under heat lamps, a server collecting; motion blur only in hands | 2.4:1 (2000×830) | Home block 4 parallax; Rooms head; Kitchens head | **home** |
| **R1** | close: the hot line — a cook (woman, 30s) working a plancha and two pans under the canopy, ranges and fryers along the line | 3:2 (1500×1000) | Home bar 1; Rooms bar 1 | **home** |
| **R2** | the pass: heat lamps, a chef plating three dishes, a server's hands waiting to collect, tickets rail empty | 3:2 | Home bar 1; Rooms bar 1; Fees body; Book body | **home** |
| **R3** | designer (man, 30s, West African, sleeves rolled) measuring the aisle between range and pass with a steel tape, a cook standing for scale | 3:2 | Home bar 1; Rooms bar 1; Fees head; Studio body; Site test body | **home** |
| **R4** | prep: two cooks chopping vegetables at long stainless benches with shelves beneath, crates of greens, morning light | 3:2 | Home bar 2; Rooms bar 2 | **home** |
| **R5** | pastry: a baker (woman, 30s) rolling dough on a pale stone bench under a window, deck oven behind, trays | 3:2 | Home bar 2; Rooms bar 2 | **home** |
| **R6** | walk-in cold room: designer (woman, 30s, Southern European) and a cook checking shelf heights with a tape, plain tubs and crates without labels | 3:2 | Home bar 2; Rooms bar 2 | **home** |
| **R7** | wash-up: a kitchen porter racking plates into a pass-through dishwasher, pre-rinse spray, stacked trays, steam | 3:2 | Home bar 3; Rooms bar 3; Contact head | **home** |
| **R8** | goods-in at a back door: crates of vegetables on a flat trolley, a cook checking the delivery against a clipboard, the driver's back, daylight | 3:2 | Home bar 3; Rooms bar 3; Kitchens body (Samuel's story) | **home** |
| **R9** | dry store: tall metal shelving with plain sacks and tubs (no labels), a cook reaching to the top shelf with a step | 3:2 | Home bar 3; Rooms bar 3 | **home** |
| **T1** | full-scale mock-up in an empty shell: timber-and-cardboard stand-ins for a range and a pass on taped lines; a chef reaching from mock range to mock pass while the site lead watches with a clipboard | 4:5 (1200×1500) | Home block 5 tall; Site test body; Studio body; journal post 1 | **home** |
| **T2** | four cooks walking a service with empty pans and plates along taped lanes on a bare floor, the designer at the side with a stopwatch and drawing | 3:2 | Home block 5 wide; Site test body; Book body; Waitlist head | **home** |
| **K1** | Ivo's bistro: an open kitchen seen from the dining room — pass with lamps facing the room, chef at the pass, two cooks behind, diners as soft shapes in the foreground | 4:3 (1600×1200; cells crop 1.37:1) | Home block 8 cell 1; Kitchens body (Ivo's story) | **home** |
| **K2** | Grace's school kitchen: cooks serving lunch trays from a long counter to a line of teenagers (seen from behind), bright, trolleys of clean trays | 4:3 | Home block 8 cell 2; Kitchens body; Contact body; journal post 3 | **home** |
| **K3** | Anouk's bakery-café: pastry bench by a large street window, baker lifting a tray of croissants, deck oven at the side | 4:3 | Home block 8 cell 3; Kitchens body | **home** |
| A1 | the seven-person studio team (mixed ages and backgrounds) around a large table with paper plans and a stainless sample panel, studio windows, mid-conversation | 16:9 | Studio head | |

**18 photos total** (12–18 ✓; **17 on home** ✓, 10 visible without opening a bar). No photo repeats on any page (check §3 assignment). If one must be cut, cut A1 (Studio head then uses T2; its body keeps H1, R3, T1). Every bar keeps three photos. Never cut H1, H2, P1, R1–R9, T1, T2, K1–K3.

---

## 8. Responsive rules (hard)
- **390px first screen**: no vertical writing, no absolutely positioned labels over text. Chevrons hidden < 782px; the panel (eyebrow, H1, link) is in normal flow under the photo; the polygon is an SVG over the photo only. Header 64px. auto-gates "mobile first-screen text overlap" must pass.
- **Fee rows (home block 7, Fees page)**: at **≥ 782px the list spans the full sheet width** (948 − 2×53 = 842px content; at 800px viewport the sheet is 100% − 48px): grid `1fr 140px 150px` (or `core/table` with `width:100%; table-layout:auto`), **price column `white-space: nowrap; text-align: right`**, min-width 120px, never clipped or overflowing at 800 and 1280. No fixed narrow width, no `max-width` on the list.
- **Every table on mobile (< 782px) stacks**: item on line 1, unit left + price right on line 2; dated rows: label above text; no horizontal scroll. Same for any `core/table` in posts or legal pages.
- T3 bars: full width at all sizes; thumbnails 3-up ≥ 782px, **1-up < 782px** (each 100% wide, 3:2, caption under); bar label may wrap to 2 lines (bar min-height 48px, padding 12px 56px 12px 20px).
- Block 5 masonry: < 782px stacks T1 (crop to 4:3) → T2 → text sheet; flush cells 1 column with borders kept.
- Block 4 band: < 782px photo 390×300 (still `sp-parallax` 6%), caption + pill below in flow on white.
- Block 8 cells: 3-up ≥ 782px, 1-up below (photo 1.37:1 full width). Kitchens page 2×2 → 1-up.
- Header: anchors collapse < 1100px into the menu button; CTA pill always visible (compact "Book a visit" < 600px).
- Visit band: 2 columns ≥ 782px, stacked below; waitlist strip stacks (form full width).
- Page-top square fixed only ≥ 1200px. No horizontal overflow at 390 and 1280 in any language (de: hyphens auto).

## 9. Motion and scroll effects (sp-scroll only for scroll; files copied unchanged into assets/)
The reference has **no scroll motion** (RT g); its motion is the hero slow fade and the 300ms accordion. We keep those two as non-scroll interactions and pick **three sp-* effects** from stage-a's candidates:
| Effect | Where | Reference source and behaviour | Trigger / time / easing (our values) |
|---|---|---|---|
| **`sp-parallax`** (required) | **Home block 4 full-bleed service band**: outer Group `mise-band sp-parallax`, direct `figure>img` **P1** is the moving layer; caption and pill are siblings outside the layer. Also inner page head photos (8 pages) | LIXIL has no parallax; its hero slow fade (2000ms) is the "slow drift" we translate onto the one full-bleed photo; LIXIL kitchen hero composition (caption bottom-left, pill bottom-right) | CSS scroll-driven `animation-timeline: view()`, IO + translate3d fallback; **`--sp-par: 10%`** desktop, **6%** < 782px (inner heads 6% / 4%); linear; layer scale 1.18 (built-in) |
| `sp-reveal sp-reveal--up` | block 2 ring/H2 row and paragraph group; block 5 text sheet; block 6 sheet; block 9 ring/H2 row; inner page ring/H2 rows and text sheets | adapted from LIXIL's slick fade (opacity only) + short rise | IO; **`--sp-dur: .6s`**, **`--sp-ease: cubic-bezier(0,0,.58,1)`** (ease-out), **`--sp-dist: 20px`** |
| `sp-stagger` + `sp-reveal--up` on children | block 5 flush cells (3), block 8 kitchen cells (3), Kitchens page cells (4) | adapted from LIXIL's flush product trio (static there) | built-in .12s steps; same dur/ease/dist as above |
- **Hero**: no sp-reveal, no sp-parallax. Its own motion: (a) cross-fade H1 ↔ H2: CSS `opacity` keyframes, **5s hold, 2s fade, `ease`**, 14s cycle, started only when `html.sp-js` is present and neither `html.sp-no-motion` nor `?sp-static` (a ~30-line `assets/js/hero-fade.js` adds `.is-fading` and handles chevron clicks / arrow keys / pause on hover and focus — **no scroll listener**, no library); (b) outline draw-in 1.6s once on load. Reduced motion, `?sp-static`, no JS, editor: H1 shown, outline fully drawn, no fade.
- **Accordion**: native `details/summary`; open transition **300ms linear** (RT slideToggle) via `::details-content` / `interpolate-size` where supported, instant elsewhere; chevron disc rotate 300ms linear. Not an sp-* class; no scroll listener.
- No reveal on: hero, header, T3 bars and sheets, the parallax caption, fee rows, CTA pills, forms, footer, legal text. Reveal count ≤ 60% of home blocks; hero 0.
- Hover: links → plum + underline 1px offset 4px, .2s; pills fill `#574A54` .2s; cell photos no zoom (LIXIL hover is opacity only: cells' links `opacity:.75` .2s).
- **check-parallax.mjs** must pass (P1 layer displacement ≥ 6px desktop and mobile; 0 under reduced motion; ≥ 3 reveals hidden before entry and restored; nothing transparent at the bottom).

## 10. Similarity to the reference (target 80%)
| Dimension | Reference value (token) | Mise Studio value |
|---|---|---|
| Colour relationship | ground `#F9F7F1` / sheets `#FFFFFF` / panel `#F0F0F0` / ink `#4B4949` / bar `#949292` / border `#E6E6E6` / accent orange `#EF7A00` ~3% (RT a) | ground `#F5F3F5` / `#FFFFFF` / `#F0EEF0` / `#4B474A` / `#8A868B` / `#E6E4E6` / plum `#6A5A66` ≤ 3% (all within ±5% L except the accent hue, reason §4) |
| First-screen saturated share | 3.3–5.8% (RT a) | ≤ 6% (ceiling 15%) |
| Header | white 120px, logo left, two-row nav right, 16/500 nav, "/" separators, accent underline on current (RT b c) | white 120px, wordmark left, utility row + nav row right, 1rem/500, slanted 1px separators, 2px plum underline; + one plum CTA pill |
| Hero | photo 72% + flat `#F0F0F0` panel 28%, 1440×511 (RT e) | photo 72% + flat `#F0EEF0` panel 28%, 1440×560 |
| Hero decoration | 1.5px white stepped polygon at 21.5/12.7%, 57×71%; thin chevrons both edges (RT f, screenshot) | same polygon geometry and stroke; 2px chevrons both edges |
| Hero headline | 3 lines ~56px / 500 / 1.3, `#4B4949`, small arrow link (RT b) | 3 lines 4.5rem / 500 / 1.2, `#4B474A`, small arrow link |
| Section titles | 32px hollow ring 7px accent + 28px / 400 (RT b f) | 32px hollow ring 7px plum + 1.75rem / 400 |
| Sheets | 948 container, white, 1px `#E6E6E6`, radius 0, padding 53, 30 apart (RT c d) | same values |
| Info rows | 22px title + 1px `#CCCCCC` rule + 14px tabular dates + filled dot link (RT f) | 1.375rem title + 1px `#CCCACC` + 0.875rem tabular labels + 14px plum dot link |
| Accordion | 48px `#949292` bar, white 15px, Ø24 white disc chevron, white sheet, 3-up 264×175 thumbs, 24px gutter, slideToggle 300ms linear (RT c e f g) | 48px `#8A868B` bar, white 1.1875rem 600, Ø24 white disc, white sheet, 3-up 264×175, 24px, 300ms linear |
| Flush cells | 316×231 photo top, 1px borders, no gutter, label 13/700, name ~22/400, price line 13 (RT e) | 316×231 photo top (block 8), 1px borders, no gutter, 0.8125rem/700, 1.375rem/400, 0.8125rem |
| Body | 15.2px / 1.6 gothic (RT b) | Public Sans 1rem / 1.7 |
| Radius / shadow | 0; pills 999px; discs round; no shadows (RT d) | same |
| Images | bright documentary room photos, people mid-task, straight rectangles, no masks; 2.82:1 hero, 1.37:1 cells, 1.51:1 thumbs (RT e) | bright documentary kitchen photos, people mid-task, no masks; hero 1.85:1, cells 1.37:1, thumbs 1.51:1, band 2.67:1 |
| Motion | hero fade 2000ms / 5000ms; accordion 300ms linear; hover opacity; no scroll effects (RT g) | hero cross-fade 2s / 5s hold; accordion 300ms linear; hover opacity on cells; + sp-parallax 10% on one band, sp-reveal--up .6s ease-out 20px |
| Decoration | page-top grey square 60px, ring bullets, dot links, chevron discs (RT f) | same four, plum where the reference is orange |

## 11. Forms (form contract v1 — `steps/form-contract-v1` exists)
- Copy `pipeline/assets/forms/shippress-forms.php` → `inc/`, its CSS and editor JS → `assets/` unchanged; `require_once` in functions.php. No fake forms, no mail/subscribe backend, no import-time plugin detection.
- **Contact** (`contact`) and **Book a site visit** (`book-a-visit`, the booking page): each calls `shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) )` — Contact: directly under ring H2 "Write to the studio" (first section after the head), in a white sheet, 720 column; Book: under ring H2 "Ask for a visit date", after the five process rows. First published CF7, then WPForms. **Fallback** (buffered literal markup, unchanged button): the **CTA pill** as `<a class="wp-element-button" href="mailto:hello@mise-studio.example?subject=…">` — label "Email the studio" (Contact) / "Ask for a visit date by email" (Book), subject "Site visit request — Mise Studio" — plus phone and studio hours line. Never link back to /contact/.
- **Visit waitlist page** (`waitlist`, standalone, not an alias of the journal): newsletter slot (email `type=email` required + submit) in the `#F0EEF0` strip under the two intro paragraphs. **Home block 9 strip** and the **footer** (compact) also carry the newsletter slot. Order: MailPoet (explicit ID via `shippress_form_id`), then MC4WP; CF7 / WPForms only by an explicit dedicated newsletter ID (never auto-reuse the contact form). No plugin: native mailto POST with the entered address and the visible notice "Opens your email app. Send the request to join the waitlist; you are not on the list yet."
- **Fields** (styling scoped to CF7, WPForms, MailPoet, MC4WP, Jetpack, `.wp-block-form` classes and the slot fallback only; no global selectors): contact/booking fields expected = name, kitchen or business name, email, phone (optional), kitchen type (select: restaurant / hotel / school or canteen / bakery-café / other), covers per service, town or postcode of the site, preferred visit window (select: Mon–Thu 09:30–11:30 / Mon–Thu 15:00–17:00), message (textarea), consent checkbox; newsletter = email (+ consent checkbox if the plugin provides it). Label Public Sans 600 0.875rem `#4B474A`; input/select/textarea **48px** (textarea 160px), 1px `#CCCACC` border, **radius 0**, background `#FFFFFF`, text `#4B474A`, placeholder `#6E6A6F`; checkbox/radio `accent-color: #6A5A66`; submit = CTA pill (plum `#6A5A66`, white Public Sans 600 1rem, 48px, radius 999px); **focus** 2px `#6A5A66` outline, 2px offset (on the submit: 2px `#4B474A`); **error** `#A23B3B` text + 1px `#A23B3B` border + message under the field; **success** `#4B474A` text on `#FFFFFF` with a 4px plum left edge and 1px `#E6E4E6` border.
- **Tokens**: `--sp-form-accent: var(--wp--preset--color--plum)`, `--sp-form-on-accent: var(--wp--preset--color--base)`, `--sp-form-radius: 0` (submit keeps 999px via its own scoped rule), `--sp-form-focus: var(--wp--preset--color--plum)`, `--sp-form-surface: #FFFFFF`, `--sp-form-text: var(--wp--preset--color--ink)`. Light grounds: white sheets, `#F0EEF0` strips, `#F5F3F5` ground → light tokens. **Dark-ground variant** (none planned; keep it working, e.g. if a user puts a slot on the parallax band): surface `#FFFFFF`, field text `#4B474A`, labels/notice `#FFFFFF`, accent `#FFFFFF`, on-accent `#4B474A`, focus `#FFFFFF`.
- **i18n semantic keys** in `inc/i18n/en.php` (then `L10N_SEMANTIC=1` extract; localised — not literal — in zh-TW, ja, fr, de): `forms_email` ("Your email address"), `forms_subscribe` ("Join the waitlist"), `forms_mail_notice` ("Opens your email app. Send the request to join the waitlist; you are not on the list yet."), `forms_mail_subject` ("Visit waitlist request — Mise Studio"), `contact_email` ("Email the studio"), `booking_email` ("Ask for a visit date by email"), `contact_subject` ("Site visit request — Mise Studio"), plus waitlist intro and privacy line ("One email when an earlier visit slot frees up. Leave any time; we never share your address."). Check rendered labels, fallback buttons, subject and notice in all five locales (and the dynamic block attributes, not only visible pattern text).
- Forms: **no `sp-reveal`**, **never in the home first screen** (home's slots are in block 9 and the footer). `form-runtime-check.php` (five languages, no plugins) and `repo-gates.sh forms` must pass; check real CF7 at 390 / desktop on `#FFFFFF` and `#F0EEF0` grounds without submitting.

## 12. Home acceptance checklist
- [ ] 1440×900 first screen shows KV 1–6: H1 photo in the left 72% under a white 120px header; flat `#F0EEF0` panel in the right 28% with eyebrow, 3-line H1 "Drawn / around / the line." at 4.5rem and the "How a brief works" arrow link; 1.5px white stepped outline over the cooking line (draws in once); thin chevrons at both edges; header with wordmark, utility row, 5 anchors with slanted separators and the plum "Book a site visit" pill; the ring title of block 2 visible at the fold.
- [ ] Hero cross-fades H1 ↔ H2 (5s hold, 2s fade) only with JS and motion allowed; static H1 under `?sp-static`, reduced motion, no JS, editor. No sp-* class in the hero.
- [ ] 390px: no vertical text, no absolute label over text, panel in flow under the photo, no chevrons; no horizontal overflow.
- [ ] First-screen saturated share ≤ 6% (check-first-screen.py ≤ 15%).
- [ ] Block order exactly §2 (10 blocks incl. footer); anchors `#brief #rooms #site-test #fees #kitchens` work from the header.
- [ ] Every H2 from block 2 on has the 32px / 7px hollow plum ring and is 1.75rem / 400, left-aligned; content sits on white 948px sheets with 1px borders on the `#F5F3F5` ground.
- [ ] Block 3: three flat grey 48px bars with white disc chevrons; bar 1 open showing R1 R2 R3 at 264×175 with 24px gutters; bars 2–3 open to R4–R6 and R7–R9; 300ms linear.
- [ ] Block 4: P1 full-bleed 1440×540 with `sp-parallax` (`--sp-par: 10%`, 6% mobile); caption bottom-left, pill bottom-right, both static; check-parallax.mjs passes desktop + mobile.
- [ ] Block 5: asymmetric masonry (T1 tall 388×485 left, T2 wide + text sheet right) + 3 flush text cells with 1px borders.
- [ ] Block 6: dated-row sheet with 5 rows Week 0 / Week 1 / Weeks 2–3 / Week 4 / Opening week, facts equal §0.
- [ ] Block 7 fee rows: 6 items full sheet width at ≥ 782px, price column nowrap right, not clipped at 800 / 1280; stacked on mobile; numbers equal §0 (€480, €1,900, €650, €7,800, €1,200, €390) and the note line.
- [ ] Block 8: 3 flush photo-top cells K1 K2 K3 (316×231) with label, name, one line, dot link.
- [ ] Block 9: visit sheet with the CTA pill + waitlist strip with the newsletter slot (email + submit without plugins, mailto notice visible); no reveal on forms.
- [ ] 17 distinct photos on home (≥ 8), no repeats; 0 cut-outs; images ≤ 300 KB, high-key documentary, no text/logos on plans, tape, crates or appliances.
- [ ] ≥ 250 English words (target 650) and ≥ 3 narrative paragraphs ≥ 20 words (block 2).
- [ ] Exactly one top menu (one `core/navigation`, 5 anchors) + one CTA label "Book a site visit" everywhere; footer link columns are not a second nav bar.
- [ ] Fonts Libre Franklin / Public Sans (+ Noto Sans TC / JP subsets) via theme.json fontFace; editor = front end; max size 4.5rem ≥ 4.25rem; no serif.
- [ ] Reveals `sp-reveal--up` .6s ease-out 20px on blocks 2, 5, 6, 8, 9 only; nothing transparent after scrolling to the bottom.
- [ ] auto-gates.mjs `en … 1 1` pass=true; pattern_source.py passes.
