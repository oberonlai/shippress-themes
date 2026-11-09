# Yanagi Hygiene: design spec (stage 1, binding for implementation)

Slug `yanagi-hygiene`, commercial pest control, **landing** theme (`type: landing`, page_structure `landing-longform`, archetype `sticky-media`, first screen `timeline-line`). Home is one long conversion page with an in-page anchor menu and **one** repeated call to action. Five languages: en, zh-TW, ja, fr, de.

Reference: **Asante** — https://www.asante.co.jp/ (Japanese termite and pest-control company). Secondary: none. Measurements: `brand/reference-tokens.md` (cited below as `tok(a)` … `tok(g)`); screenshots `brand/ref/asante-first.png`, `scroll-asante-900.png`, `scroll-asante-1800.png`, `scroll-asante-3600.png`. We borrow structure, techniques, colour relations, the key-visual concept and motion. We never copy Asante's photos, illustration, copy, logo or skyline drawing; every image, drawing and sentence is our own.

One call-to-action wording everywhere (all buttons, header, floating bar, request band, footer): **"Request an inspection hour"** → `/contact/` (`#request` on Home scrolls to the request band, whose button goes to `/contact/`). Localised once in brand.md and reused verbatim.

---

## 0. Fixed brand facts (identical on every page and in all five languages)

| Fact | Value |
|---|---|
| Name | Yanagi Hygiene |
| Founded | **2011** by Hana Yanagi (formerly a hospital infection-control officer) |
| Depot / office | 41 Wellington Street, Collingwood VIC 3066, Melbourne, Australia (fictional address; local address formats per language in brand.md) |
| Service area | sites within **60 km** of the Collingwood depot |
| Desk hours | Mon–Fri **07:00–18:00**, Sat **08:00–12:00** (Melbourne time); closed Sundays and public holidays |
| Visit hours | inspections and visits booked **05:30–23:00**, any day, around trading hours |
| Phone / mail | +61 3 9000 0418 · desk@yanagihygiene.example |
| Team | **14** people; 7 named below |
| Reply time | reply within **1 working day**; inspection hour held within **5 working days**; written findings left on site at the end of the hour; full report emailed within **2 working days** |
| Standard year | **4 visits**: February, May, August, November (one per season) |
| Records kept | for the life of the plan plus **3 years** |
| Currency | **AUD, GST included**, in every language (no converted prices) |

Named people (7):
1. **Hana Yanagi** — founder, field lead; leads most first inspection hours.
2. **Tomás Ferreira** — senior technician, kitchens and food production.
3. **Amara Mensah** — technician, hotels and mixed-use buildings.
4. **Liam O'Connell** — technician, warehouses, docks and cold stores.
5. **Priya Nair** — records and reports lead; writes every findings sheet template.
6. **Jonas Weber** — training and safety, entomologist; reviews identification.
7. **Grace Tan** — client desk; books the hour and the year.

Logbook stories (4, used on Home cases, Sites and Records; fictional, no claims of guaranteed results):
1. **Corner restaurant, 60 seats, office floor above** (Fitzroy) — the hour found a gap behind a dishwasher drain and an open cable riser into the ceiling void; a 6-visit plan. Photo I07.
2. **Cold-store warehouse, 2,400 m², 4 dock doors** (Port Melbourne) — worn dock seals and a pallet-wrap waste corner; a 6-visit plan with dock checks first. Photo I08.
3. **Hotel, 118 rooms, linen and laundry floor** (Southbank) — the linen room and the staff canteen became the two "always look" points; a 12-visit plan. Photo I09.
4. **Office building, 3 floors and a shared bin store** (Richmond) — the bin store and the kitchenettes decided the plan; a 4-visit plan. Photo I16.

Inspection hour (fixed four parts, used on Home, Inspection page and in five languages):
- **00–10 min** Walk the floor plan with the facilities manager: where deliveries arrive, where food and waste sit, what has been seen.
- **10–35 min** Look where nobody looks: ceiling voids, under kitchen lines, drains, risers, dock seals, plant rooms.
- **35–50 min** Map the points: monitors and stations marked on your floor plan, each with a number.
- **50–60 min** Write it down on site: a one-page findings sheet signed by both of you, with the plan we would suggest.

Fees (7 rows; Home `#fees`, Plan page, Terms; all languages identical):

| # | Item | Price (AUD, incl. GST) |
|---|---|---|
| 1 | Inspection hour — one site up to 1,000 m², findings sheet on the day (credited to the first year if a plan starts within 30 days) | 180 |
| 2 | Café and small kitchen — up to 250 m², 4 visits a year | 1,480 / year |
| 3 | Restaurant and food production — 250–800 m², 6 visits a year | 2,640 / year |
| 4 | Office building — up to 3 floors of 1,000 m², 4 visits a year | 1,960 / year |
| 5 | Warehouse and dock — up to 3,000 m², 6 visits a year | 3,420 / year |
| 6 | Hotel and mixed-use — 12 visits a year | from 6,900 / year |
| 7 | Call-out between visits (plan clients) | 220 per visit, included on 12-visit plans |

Plans run 12 months; either side can end with 30 days' notice. No language may add, round or convert a number. Copy must never promise a pest-free result; the promise is visits, looking, records and a plan.

---

## 1. Signature techniques (three, all obvious at a glance)

### T1. Skyline-cut photo foot + shallow arc + 12-month tick rail (Asante first screen, `ref/asante-first.png` bottom 130 px, `tok(e)`)
- **Reference**: the full-bleed documentary KV (1440×680, 2.1:1) ends in a **white city silhouette** (blocks with square window grids, houses, two lattice towers) cut into the bottom ~130 px of the photo, followed by a **wide shallow white bowl/arc** (about 70–90 px deep) into a pale green wash. The photo becomes a "town" seen from below.
- **Ours, Home first screen**: our own SVG silhouette of a **commercial street** (left→right: office block with window grid, cafe with flat awning, warehouse with sawtooth roof and dock door, hotel tower, radio mast, low office row, repeat). Fill `#FFFFFF`, drawn by the implementer as `assets/images/skyline.svg` (no text, no logos; window squares are white-ground cut-outs showing photo through). Height **130 px at ≥1024**, 96 px at 782–1023, **64 px at <782**, repeated along x, anchored bottom of the Cover via `.yh-skyline::after` (empty `content:""`, background-image, `pointer-events:none`) so it does **not** move with the parallax background.
- Under the photo: a white strip that ends in a **shallow bowl arc 80 px deep** (`tok(d)` 70–90) into wash `#E8F4E4` (implement as an SVG/CSS ellipse edge: `border-radius: 0 0 50% 50% / 0 0 80px 80px` on the white strip over a wash section, or an inline SVG path; no image).
- **The tick rail (timeline-line first screen)** sits inside that white strip, centred, width 1200 (container): 1 px rule `#449A52`, 12 ticks (8 px tall, 1 px), month initials under each tick (Manrope 600, 0.75rem, `#4A5852`, letter-spacing .1em; localised initials from brand.md), and **4 orange markers** (`#F26B3A` 12 px circles, 2 px white ring) on **Feb, May, Aug, Nov**; at the right end a small caption "4 visits a year · standard plan" (Source Sans 3 0.875rem `#5E6A64`). Load-only CSS fill (markers scale 0→1, 1.2 s `cubic-bezier(.23,1,.32,1)`, 150 ms steps), disabled under `html.sp-no-motion` and reduced motion (static final state).
- **Not to dilute**: the silhouette must be **white**, cut into the photo (not under it), ≥ 110 px tall at 1440, with recognisably commercial buildings; the arc must be visibly curved (≥ 70 px deep); the markers must be orange and exactly four.
- **Inner pages**: every inner page head (About, Sites, Inspection, Plan, Records, Notes, Season list, Contact) = a 1440×420 photo band (16:4.7) with the **same skyline foot at 90 px** (56 px mobile) and the bowl arc into the wash where the T4 lockup sits. Privacy, Terms and Thanks: no photo; wash band with the skyline silhouette drawn in `#D3E6D0` on its top edge (Asante's pale green skyline over the testimonial arc, `scroll-asante-3600.png`).

### T2. Building cross-section with plus-pill hotspots (Asante Service block, `ref/scroll-asante-1800.png`, `tok(e)`, `tok(d)`)
- **Reference**: a pale house cutaway (1000×760) with six **big green pills** (radius 999, 100 px+ tall for two lines, white text, a white ⊕ circle at the right end) placed on the drawing; each opens a service.
- **Ours, Home `#sites`**: a **commercial building cross-section** drawn as an inline SVG by the implementer (`assets/images/section.svg`, 1000×760 viewBox): rooftop plant room with netting, two office floors (desks, kitchenette, ceiling void with cable tray shown as a dashed band), ground-floor restaurant (kitchen line, dining), rear loading dock with door, basement bin store and drain. Lines `#4A5852` 1.5 px, fills white/`#E8F4E4`/`#F3F7F1`, one warm `#F26B3A` dot on the drain only. Not watercolour, no people, no text in the drawing.
- **Six pills** on the drawing (absolute inside a `position:relative` wrapper, at ≥782 only): Ceiling voids · Kitchen lines · Loading docks · Bin stores · Plant rooms · Office kitchenettes. Pill: background `#449A52`, white Manrope 700 **1.25rem**, padding 20 px 28 px, height ≥ 72 px, radius 999 px, 2 px white outline, ⊕ = 28 px white circle with green plus at the right end. Each pill is a `<details>` (core HTML or Details block): opening shows a white note card under it (max 280 px, 2 lines, Source Sans 3 0.9375rem, 1 px `#CCCCCC`, radius 12). Placement (percent of the drawing): Ceiling voids 8%/22%, Plant rooms 58%/6%, Office kitchenettes 62%/34%, Kitchen lines 6%/58%, Loading docks 66%/66%, Bin stores 30%/86%.
- **<782 px**: drawing full width (no pills on it); under it the six pills stacked full width as `<details>` (same style, height 60 px). No absolutely positioned label on phones.
- **Not to dilute**: the pills must be **big saturated green with white text and ⊕**, overlapping the drawing (not beside it), six of them, ≥ 72 px tall on desktop.
- **Inner pages**: Sites (the full section drawing + six pills + the expanded notes as body sections), Inspection (kit photo I11 with five pills: Torch, Inspection mirror, Gap gauge, Monitor station, Moisture meter), Plan (the 12-month rail with four pill labels, one per visit season, each opening what that visit covers), Records (sample findings sheet drawn as an SVG floor plan with five numbered pills, e.g. "07 · Dock seal gap 9 mm").

### T3. Pentagon-point request tab in a sticky bottom bar (Asante floating bar, `ref/scroll-asante-900.png`, `tok(f)`, `tok(g)`)
- **Reference**: a translucent grey bar across the bottom of the window; at its left a **charcoal pentagon tab, point to the right, with a 3 px white inner outline** and two lines of bold white text; to the right two rounded contact tiles with a coloured caption strip ("\\ text //"). It appears after 500 px of scroll (fadeIn 500 ms).
- **Ours**: a full-width bar `rgba(74,88,82,.88)` (pine at 88%), height **112 px at ≥1024** (ref 120), inner 1200 container. Left: pentagon tab **440×88 px**, background `#4A5852`, clip-path `polygon(0 0, 92% 0, 100% 50%, 92% 100%, 0 100%)`, a **3 px white inner outline** following the same shape (inner pseudo-element inset 6 px with the same clip-path and a white 3 px border via a second polygon layer, or an inline SVG outline), text "Request an inspection hour" Manrope 700 1.5rem white, two lines allowed in de/fr. Right of it **one** info tile (not a link): 360×88, white, radius 10, 2 px `#F26B3A` border, a 24 px `#F26B3A` caption strip on top ("\ Booked within 5 working days /" — slash brackets typed in the block text, white 0.75rem bold), below it "Desk Mon–Fri 07:00–18:00 · Sat 08:00–12:00" `#1F2926` 0.9375rem.
- **Appearance after scroll without a scroll listener**: the bar is `position: sticky; bottom: 0; z-index: 40` and is the **last child of the wrapper Group that starts at `#sites`** (sections 3–9 of Home are inside that wrapper). Before the wrapper reaches the viewport the bar is not on screen; once `#sites` enters, it pins to the bottom (ref's "after scrolling" feel). It ends naturally above the footer. Ancestors must use `overflow: clip`, never `hidden`. No fade/JS; Asante's 500 ms fade is dropped for rule compliance.
- **<1024 px**: the bar keeps only the pentagon tab, full width minus 24 px, height 60 px, 1.0625rem; info tile hidden. Not present on Contact, Thanks, Privacy, Terms and Season list.
- Header uses a **small pentagon** of the same shape (190×44, 0.875rem) as the nav CTA; the request band (`#request`) uses the **large in-flow pentagon** (520×104, 1.75rem).
- **Not to dilute**: point to the right, white inner outline visible, pine charcoal (not green, not orange), one wording.
- **Inner pages**: About, Sites, Inspection, Plan, Records, Notes, single post.

### T4 (supporting, not counted). Section title lockup on an arc-edged wash (Asante section titles, `ref/scroll-asante-3600.png`, `tok(b)`, `tok(c)`, `tok(f)`)
Every section and inner page head: Latin title Manrope **300, 4.25rem** (68 px; ref 64 px, +6% to meet the ≥4.25rem rule), letter-spacing **.08em**, `#449A52`, centred; sub-title Source Sans 3 1.125rem `#449A52` 20 px under it (in zh-TW/ja the sub-title is the localised line, the Latin title stays English); then a **96×1 px** rule `#9DB8A4` 40 px under; 100 px from rule to content (`tok(c)`). Wash sections get bowl-shaped arcs (80 px deep) top and bottom. Mobile: title 2.5rem, tracking .04em, wraps to two lines allowed.

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
- **What it draws**: a low-key documentary photograph taken *inside the floor void* of a house: a technician in a green protective suit with a headlamp and respirator crouches under the joists; a termite-gnawed timber post splits the frame just left of centre; dust floats in the single hard light; warm dark shadow. Two thin, wide-tracked lines of copy top-left, white. A product badge sits right, mid height. The bottom edge is a white town silhouette, then a shallow arc into pale green.
- **Story**: "We go where nobody looks, so the home you remember stays safe." The camera is inside the hidden part of the building.
- **Signature motion**: cross-fading KV with a slow push-in (scale 1 → 1.08 over 3 s, ease-in-out; fade 2000 ms every 3500 ms), endless linear marquee strip below, floating bar fading in after 500 px.

### (2) Our transformation (commercial pest control, same composition, same motion idea, same image type: documentary photograph)
The camera is **inside the ceiling void** of a restaurant's back-of-house corridor. A technician in a **sage-green coverall** with a **headlamp** has lifted a ceiling tile and put head and shoulders up into the void, torch beam raking across cable trays and ducting; dust visible in the beam. A **vertical steel ceiling hanger / beam splits the frame at x 50–56%**, technician to its right (60–85%). Through the open tile square, lower left (10–38%), the bright corridor below shows the **facilities manager holding an unfolded floor plan, looking up**. Top-left is the dark void — the white two-line headline sits there. Story: *"We look where nobody looks, so your building stays open."* Motion: the push-in becomes `sp-parallax` on the Cover (slow, continuous, scroll-driven); the marquee becomes the site-types strip right under the hero; the floating bar becomes T3.

### (3) KV checklist (all six implemented and visible on the Home first screen at 1440×900 and 390×844 unless noted)

| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Dark floor-void documentary photo, worker with headlamp | Ceiling-void documentary photo: technician head-and-shoulders through a lifted tile, headlamp beam, dust; manager with floor plan visible below through the opening | Cover full bleed, 1440×680 at ≥1024 (2.1:1), 560 px tall at 390 (focal point 68% 40%) | `sp-parallax`, `--sp-par: 8%` desktop / `6%` <782 (replaces the 1→1.08 push-in) | **I01** |
| 2 | Gnawed timber post splitting the frame | Vertical steel ceiling hanger / beam with surface rust spots | x 50–56% of the photo, full height | none (inside the photo) | **I01** |
| 3 | Two thin wide-tracked white lines top-left | H1 "We look where nobody looks, / so your building stays open." Manrope 300, 3.5rem (56 px, `tok(b)`), letter-spacing .08em, line-height 1.5, white, max-width 46% | top-left, left 6%, top 64 px inside the Cover; at 390: left 24 px, top 40 px, 2.0rem, in normal flow | none (no reveal on hero) | — |
| 4 | White town silhouette + shallow arc into pale green | White commercial-street silhouette (T1) + 80 px bowl arc into `#E8F4E4`, with the 12-month tick rail and 4 orange visit markers | bottom 130 px of the Cover + white strip under it | markers fill left→right on load, CSS 1.2 s (static under sp-static / reduced motion) | `skyline.svg` (drawn) |
| 5 | Product badge on the right, mid height | Outlined white pill badge "One plan per building · from AUD 1,480 a year" (Manrope 600 1rem, 1.5 px white border, radius 999, padding 14 px 24 px, background `rgba(31,41,38,.35)`) | ≥1024: right 8%, 52% height inside the Cover's inner grid (grid placement, not absolute); <1024: in flow under the H1 | none | — |
| 6 | Floating action bar (charcoal pentagon tab + tiles) | T3 header pentagon (visible in the first screen, top right) + sticky bottom bar after `#sites` | header row 2 right; bar bottom of viewport once scrolled | bar slides in with the content (sticky), no JS | — |

Concrete scene, not "adapted, not copied": the implementer must generate I01 with the scene above; if Grok cannot produce the camera-inside-the-void angle after 4 tries, use the fallback angle *from the corridor floor looking up*: technician on a step ladder, head and torso inside the opened tile, beam visible in the void, manager in the lower left foreground holding the floor plan, the hanger rod splitting the frame — the dark void must still fill the top-left third for the white copy.

---

## 3. Colour (Asante relations; target similarity 8/10)

| Role | Hex | Source token | Use | Share of Home |
|---|---|---|---|---|
| Ground | `#FFFFFF` | Asante ground `tok(a)` #FFFFFF | page, header, skyline, arc strips | ~45% |
| Pale wash | `#E8F4E4` | Asante pale green wash `tok(a)` ~#E8F4E4 (unchanged) | arc-edged bands (intro, request, inner page heads), section grounds | ~20% |
| Brand green | `#449A52` | Asante green `tok(a)` #4CAC5B, lightness −5% (HSL 129°, 39%, 44%) for 3.5:1 on white (large text) | T4 titles and sub-titles, T2 pills, rail rule, links underline, list markers | ~3% |
| Pine charcoal (main ink of UI) | `#4A5852` | row palette "aonibi" (blue-grey pine); takes the role of Asante's charcoal tab `tok(a)` ~#555 (same luminance role, pine tint) | T3 tabs, buttons, nav text, fee table header rule, footer band | ~6% |
| Deep ink | `#1F2926` | Asante text `tok(a)` #000, softened to the pine hue | body text, dark overlay tints | ~4% |
| Grey panel | `#EBEBEB` + inset frame `#CCCCCC` | Asante testimonial panel `tok(d)` | logbook cases panel | ~5% |
| Work-light orange | `#F26B3A` | Asante floating-bar orange `tok(a)` ~#F26B3A (unchanged) | 4 rail markers, the info-tile frame and caption strip, the drain dot | < 1.5% |
| Muted text | `#5E6A64` | derived from deep ink | captions, meta, rail caption | — |
| Rule green | `#9DB8A4` | Asante 96 px grey-green rule `tok(f)` | T4 rules, table row rules | — |

- Asante's pink tile is **not used** (one call to action only; the second tile would be a second way to request).
- Not beige-led; white dominates; green appears only as type and pills (Asante's relation: the photo is the heavy mass, one saturated hue on type/pills).
- Contrast: body `#1F2926` on white 15:1, on wash 13:1; white on `#4A5852` 7.5:1; `#449A52` only for text ≥ 1.25rem bold or ≥ 1.5rem regular (3.5:1). Nav text is `#4A5852`, not green (Asante's green nav would fail 4.5:1 at 1.25rem regular).
- **First-screen saturated share** (scripts/check-first-screen.py, S>0.45 & V>0.35): Asante measures 7.4%. Ours target **≤ 8%**, gate **15%**, hard cap 30%. Achieve it: coverall sage (not vivid), no green fill on the first screen except the 4 orange markers and the small header CTA (pine, unsaturated).
- Distinct from recent mains: Kogarashi `#2F484C`, Okami `#2A3850`, Koe `#25535D`, Tabiji `#0000F9` — ours leads with a mid green `#449A52` type colour on white, pine `#4A5852` only on tabs/buttons.

---

## 4. Type

`font_direction: sans`. Latin headings **and** body are sans; CJK uses Noto Sans TC / Noto Sans JP (gothic / sans), never Mincho/Serif.

| Use | Latin family | zh-TW stack | ja stack | Size / weight / leading / tracking |
|---|---|---|---|---|
| T4 section title (`xx-large`) | Manrope | `"Manrope", "Noto Sans TC", sans-serif` (Latin titles stay Latin) | `"Manrope", "Noto Sans JP", sans-serif` | **4.25rem** / 300 / 1.15 / .08em (`tok(b)` 64 px light, .08em) |
| Hero H1 (`x-large-hero`) | Manrope | `"Noto Sans TC"` 500, 2.6rem, .12em | `"Noto Sans JP"` 500, 2.6rem, .12em | 3.5rem / 300 / 1.5 / .08em (`tok(b)` KV ~56 px, light; tracking .18em reduced to .08em for Latin length) |
| H2 inside sections | Manrope | Noto Sans TC 500 | Noto Sans JP 500 | 2.25rem / 500 / 1.3 / .01em |
| H3 chapters, cases | Manrope | Noto Sans TC 500 | Noto Sans JP 500 | 1.5rem / 600 / 1.35 |
| Nav (row 2) | Manrope | Noto Sans TC 500 | Noto Sans JP 500 | 1.125rem / 500 / 1 / .02em, `#4A5852` (`tok(b)` nav 20 px) |
| Body | Source Sans 3 | system: `"PingFang TC", "Microsoft JhengHei", "Heiti TC", sans-serif` | system: `"Hiragino Sans", "Hiragino Kaku Gothic ProN", "Yu Gothic", "Meiryo", sans-serif` | 1.0625rem (17 px; ref 14 px is too small for Latin) / 400 / 1.7 (CJK 1.85) |
| Small / captions | Source Sans 3 | system TC | system JP | 0.875rem / 400 / 1.5 |
| Pills, tab text | Manrope | Noto Sans TC 700 | Noto Sans JP 700 | 1.25rem / 700 (pills), 1.5rem / 700 (tab) |

- Font sizes preset (theme.json): small 0.875rem, medium 1.0625rem, large 1.5rem, x-large 2.25rem, xx-large **3.5rem**, xxx-large **4.25rem** (maximum; rule ≥ 4.25rem satisfied).
- Load **every** family via theme.json `fontFamilies` + `fontFace` (Manrope variable 200–800 woff2, Source Sans 3 variable 200–900 woff2, Noto Sans TC subset, Noto Sans JP subset), so editor and front end match; zh-TW / ja subsets via the Hokuto / Hada mechanism (the Chinese subset script is known broken). Copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it (style.css will have `:lang(` rules).
- check-themes contract: zh-TW display stack contains the bundled zh family; body stacks contain **neither** the bundled zh family **nor** a Japanese font. Every font file listed in theme-meta.json `fonts[].files` with `licenseFile` (OFL) and named in readme.txt.
- CJK sizes ≈ 0.75 × English for display (T4 Latin title stays 4.25rem; the localised sub-title is 1.25rem); fr/de `hyphens: auto`.

---

## 5. Home page

### Header (Asante two-row header, `tok(c)` 100 px)
White, 100 px at ≥1024, not transparent over the photo (Asante's header sits above the KV). Container 1200. Logo left: a small mark (24 px square, three thin willow-leaf strokes in `#449A52`, drawn SVG) + wordmark "Yanagi Hygiene" Manrope 600 1.375rem `#4A5852`. Right side, row 1 (utility, 0.8125rem `#5E6A64`, separated by 1 px `#D6DED8` rules): language switcher · "Desk Mon–Fri 07:00–18:00" · phone. Row 2: anchor nav **Sites · The hour · The year · Records · Fees** (`#sites`, `#hour`, `#year`, `#records`, `#fees`), then the small pentagon CTA. <1024: 64 px, logo + one menu button (core navigation overlay) with the same anchors + CTA. One menu only. Inner pages use the same header; anchors become `/#sites` etc.

### First screen composition (1440×900)
- y 0–100 header. y 100–780 Cover I01 (680 px, focal 68% 40%), overlay `linear-gradient(100deg, rgba(31,41,38,.55) 0 38%, rgba(31,41,38,0) 62%)` only on the left for the H1. H1 top-left (KV #3), badge right 8% at 52% height (KV #5). Skyline foot y 650–780. y 780–900 white strip with the rail centred at y ~808, arc bottom curving into the wash of section 2 (arc lowest point ~880).
- 390×844: header 64; Cover 560 (focal 72% 45%), H1 2.0rem two-four lines in flow, badge in flow under it; skyline 64 px; rail 342 px wide with initials 0.6875rem, markers 10 px, caption under the rail (not beside it). No vertical type, no absolutely positioned labels over text.
- Forbidden on first screen: table, form, search box, giant centred word, saturated fills.

### Block order (anchors in brackets)
| # | Block (pattern slug) | Purpose | Layout and images | Copy (en) |
|---|---|---|---|---|
| 1 | `yh-hero` [#top] | key visual, story, CTA in header | §2 checklist; Cover I01 + T1 skyline + rail | H1 11 words, badge 9 words, rail caption |
| 2 | `yh-intro` [#year] | one honest account of what a treatment year covers | wash `#E8F4E4`, bowl arc top and bottom; T4 "Treatment Year" / "What one plan covers"; text column 720 centred, two paragraphs left-aligned; under it **`sp-marquee`** strip of 8 site-type tiles (white, 300×120, radius 12, Manrope 600 1.25rem `#4A5852` + one 0.875rem line `#5E6A64`): Kitchens, Loading docks, Office floors, Hotel linen rooms, Bin stores, Plant rooms, Cold stores, School canteens; gap 40 px (`tok(e)`), 40 s linear loop, hover pause | 2 × 70 words |
| 3 | `yh-sites` [#sites] (wrapper Group starts here, ends after #9, holds the T3 sticky bar as last child) | which sites a plan suits | white; T4 "Sites We Look After" / "Six places we always open"; **T2** section drawing 1000×760 centred with six pills; under it one 50-word line centred 720 | 50 words + 6 pill notes × 20 words |
| 4 | `yh-hour` [#hour] | how the inspection hour is spent (the sticky-media core) | white; T4 "The Inspection Hour" / "Sixty minutes, four parts"; 12-col grid: **left cols 1–5 sticky photo I02** (4:5, radius 0, `position: sticky; top: 132px`, ≥1024 only); **right cols 7–12** four chapters, each: minute label pill (outline `#449A52` 1.5 px, radius 999, Manrope 600 0.875rem "00–10 min"), H3, 60–70-word paragraph, 1 px `#9DB8A4` rule after; chapter 1 includes I03 (3:2, width 100%), chapter 3 includes I04 (3:2); chapters `sp-reveal sp-reveal--up`. <1024: photo I02 at top full width (4:3 crop), chapters below | 4 × 65 words |
| 5 | `yh-dawn` | full-bleed parallax pause; the year in one line | **`sp-parallax`** Cover, I05, 560 px tall (420 at <782), `--sp-par: 10%` (7% mobile); top edge: pale-green `#D3E6D0` skyline silhouette + bowl (Asante `scroll-asante-3600.png` top); foreground (in the Cover's inner container, never in the moving layer): left 6%, panel `rgba(31,41,38,.62)` 520 px, padding 40, Manrope 300 2.25rem white "Four visits. Twelve months. One record each time." + 1 line Source Sans 3 white | 9 + 20 words |
| 6 | `yh-records` [#records] | what we record and leave behind | white; T4 "What We Record" / "One page, signed on the day"; two columns 6/6: left I06 (3:2, radius 0); right a ruled list of 5 items (each: 1 px `#9DB8A4` top rule, Manrope 600 1.125rem item + 1 line): numbered floor plan · what we found and where · what we changed · what you can change · next visit date; then one 60-word paragraph | 5 × 15 + 60 words |
| 7 | `yh-cases` [#cases] | four logbook stories | T4 "From the Logbook" / "Four buildings, four plans"; **grey panel** `#EBEBEB` 1200 wide with 1 px `#CCCCCC` frame inset 20 px (`tok(d)`), padding 60; 2×2 inside: each case = photo left 160×200 (4:5 crop) + text right (site line Manrope 600 1rem, 45-word story, plan line in `#449A52` 0.9375rem "6-visit plan"); photos I07, I08, I09, I16 | 4 × 55 words |
| 8 | `yh-fees` [#fees] | plans and fees | white; T4 "Plans and Fees" / "Seven prices, all of them"; fee table (7 rows from §0) full container width 1200 at ≥782, two columns: item (left, Source Sans 3 1.0625rem, line 2 detail `#5E6A64`), price (right-aligned, **`white-space: nowrap`**, Manrope 600 1.25rem, width min 200 px, `font-variant-numeric: tabular-nums`); header rule 2 px `#4A5852`, row rules 1 px `#9DB8A4`; note line "Plans run 12 months; 30 days' notice either side." No reveal on the table | 7 rows + 15 words |
| 9 | `yh-request` [#request] | the single request | wash `#E8F4E4`, bowl arc top; 12-col: left cols 1–5 I10 (4:5); right cols 7–12: H2 "Ask for one hour on site." (Manrope 500 2.25rem `#1F2926`), 3 ruled lines (reply within 1 working day / hour within 5 working days / findings left on site), **large in-flow pentagon** "Request an inspection hour", then desk hours + phone 0.9375rem. Then the T3 sticky bar (last child of the wrapper) | 70 words |
| 10 | `yh-notes` | latest notes (proof of activity) | white; left-aligned small heading "Notes" Manrope 600 1.5rem + rule; Query Loop 3 posts as text rows: date (0.875rem `#5E6A64`) · title (Manrope 600 1.25rem) · category; no images (avoids repeating I16 used in cases) | query |
| 11 | footer | links, address, hours | `#4A5852` band, white skyline silhouette at 40% opacity drawn on its top edge (56 px); 4 columns: logo + 30-word line; Pages (About, Sites, The inspection hour, The treatment year, Records, Notes, Season list, Request); Visit (address, hours, phone, mail); Legal (Privacy, Terms) | 60 words |

English Home ≥ **420 words**, narrative paragraphs in #2, #4, #6, #7 (≥ 3 required). zh-TW / ja Home ≥ 700 characters.

Home image positions (11 ≥ 8): I01 (hero), I02 (sticky), I03, I04 (chapters), I05 (parallax band), I06 (records), I07, I08, I09, I16 (cases), I10 (request). None repeats on Home.

### Comparison with the latest home pages
| # | Kogarashi Inn | Okami College | Tabiji Clinic | Koe Interpreters | **Yanagi Hygiene** |
|---|---|---|---|---|---|
| 1 | cover | hero window | hero | hero | **ceiling-void KV with white skyline foot + 12-month rail** |
| 2 | intro dark band | pick-up tiles | message | statement sheet | **wash intro + site-type marquee** |
| 3 | notes | results | journeys band | briefs gradient | **building section with six green pills** |
| 4 | day schedule | pacing | appointment hour | booth band | **sticky photo + four timed chapters** |
| 5 | rooms | desks cards | record gradient band | meeting day | **parallax dock band with skyline top** |
| 6 | table | house band | groups | rates | **records: photo + ruled list** |
| 7 | walks band | visit panel | fees | process ink | **grey framed panel of 4 logbook cases** |
| 8 | people | fees | notes | notes | **fee table** |
| 9 | stay/rates | faculty | visit | request | **request band + large pentagon** |
| 10 | — | news | — | — | **notes rows + sticky bar** |
Why not alike: no hero window / inset frame / sheet over the hero (Okami, Tabiji, Koe); no tiles or cards row near the top; no people grid; no gradient bands; no day schedule. The shapes are new to the catalogue: white skyline cut into the photo, bowl arcs, big green ⊕ pills on a drawn section, pentagon request tab. Sticky-media differs from Azuke's sticky *panel* and Ishizue's sticky *card stack*: here a single tall documentary photograph is pinned while timed chapters scroll; the CTA is a horizontal pentagon in a bottom bar, not a fixed vertical tab.

---

## 6. Inner pages (12 pages besides Home; landing rules: reachable from the footer)

Common frame: T1 page-head photo band (420 px, skyline foot 90 px, arc) → T4 lockup on wash → body → T3 sticky bar (where listed) → footer. No sidebar. Container 1200, text column 720.

1. **About** (`page-about`, code `about`): head I14 (Hana and Tomás at the depot, van side door open). T4 "About Us" / "Since 2011, from Collingwood". Story in three sections (why a hospital infection-control officer started a pest firm; why one hour first; why records). The 7 people as a two-column ruled list (name Manrope 600, role, one line) — no portrait grid. I15 (training) wide 3:2 between sections two and three. T3 bar.
2. **Sites We Look After** (`page-sites`): head I12 (rooftop plant room). Full **T2** section drawing with six pills; then the six site types as alternating text/photo rows: Kitchens + I07, Docks + I04, Office floors + I13, Bin stores + I16 (Ceiling voids and Plant rooms text only). Logbook case 1, 2, 4 one-liners. T3 bar.
3. **The Inspection Hour** (`page-inspection`): head I03. Same sticky-media block as Home #4 with I02 and fuller chapters (≈110 words each). **T2** kit photo I11 with five pills (Torch 18%/30%, Inspection mirror 42%/22%, Gap gauge 70%/28%, Monitor station 30%/70%, Moisture meter 74%/68%; list below on <782). "What to have ready": floor plan, keys to voids and risers, 60 minutes, someone who knows the site (prose, not a step grid). T3 bar.
4. **The Treatment Year** (`page-plan`): head I05 as `sp-parallax` (8%). Large 12-month rail (as Home first screen, 1200 wide) with **T2 pill labels** on Feb, May, Aug, Nov (each `<details>` opening what that season's visit covers); a sentence on 6- and 12-visit variants. Full fee table (same 7 rows, same rules as Home #8). Plan terms paragraph. T3 bar.
5. **Records** (`page-records`): head I06. **T2** sample findings sheet: SVG floor plan (restaurant ground floor) with five numbered pills (01 Back door sweep 6 mm gap · 04 Dishwasher drain · 07 Dock seal gap 9 mm · 09 Dry store shelf · 12 Bin store lid); what a report holds; how long we keep it (life of plan + 3 years); I09 3:2 with logbook case 3. T3 bar.
6. **Notes** (posts page, code `news`, role `posts`, empty content): head band without photo but with skyline-on-wash (T1 inner variant), T4 "Notes" / "From the field and the desk"; first post large (image 7/12 left, text right), then two-column rows. T3 bar.
7. **Single post** (code `article`): category label (Manrope 600 0.875rem green), title 2.25rem, date only, featured image full container width 21:9 with the skyline foot 56 px, text column 720. T3 bar. Category / tag archives (codes `category`, `tag`; `archive.html`, `tag.html` with "TAG" wording) use the Notes layout.
8. **Season List** (`page-newsletter`, code `newsletter`, the landing waitlist): head I08. T4 "Season List" / "Early slots for the next visit season". Explains: four emails a year, one before each visit season, with early inspection-hour slots for new sites; email field + button "Join the season list" (form styling only: 1 px `#4A5852` field, pine button; the form is not the CTA wording); privacy line. No T3 bar.
9. **Request an Inspection Hour** (`page-contact`, code `contact`): head I10. Left: what happens next (1 working day / 5 working days / findings on site / report in 2 working days), desk hours, visit hours, address, phone, mail, service area 60 km. Right: a simple request form (name, organisation, site type select with the 6 types, floor area, suburb, preferred time window, note) with the large pentagon as the submit button text "Request an inspection hour". No T3 bar.
10. **Thanks** (`page-thanks`): wash band + skyline top; "Thank you. Grace or another desk colleague will reply within 1 working day." + desk hours. No photo, no bar.
11. **Privacy** (`page-privacy`), 12. **Terms** (`page-terms`, includes the 7 fees, 12-month term, 30 days' notice, visit windows): T4 lockup, text column 720, no photo, no bar.

Demo posts (4, each with a category and tags): 1 "Why the first hour starts at the loading dock" (Field notes; docks, warehouses) I11 · 2 "What we teach new technicians in their first week" (From the desk; training) I15 · 3 "Bin stores after a long weekend" (Field notes; bin-stores, offices) I16 · 4 "Rooftop plant rooms in late spring" (Seasons; plant-rooms) I12.

theme-meta.json `pages`: home, about, news, article, category, tag, newsletter, contact (+ the extra pages in demo-content). demo-content `screens` for every code; exactly one `posts` page.

---

## 7. Images (16 photos, Grok, one at a time; read each one)

IMAGERY: **photo** (Asante's first screen and testimonial tiles are documentary photographs; its single watercolour cutaway is under a third of image positions). Our two diagrams (`section.svg`, findings plan SVG) and the skyline are drawn line graphics, not photographs and not illustrations in the Asante watercolour style; they do not count toward the photo total.

**STYLE** (exact string on every prompt):
`documentary photograph, 35mm lens, real commercial building interiors and back-of-house spaces, soft natural daylight with one warm work-light accent, muted palette of sage green, concrete grey, stainless steel and off-white, technicians in plain sage-green coveralls with no logos, diverse adults, calm candid working moment, fine dust and surface texture visible, slight film grain, modern international city setting, no text, no logos, no brand marks, no signage lettering, no Japanese elements, no visible insects or rodents`

| ID | Subject / composition | Ratio | Used on (once per page) | Home? |
|---|---|---|---|---|
| I01 | camera inside a dim ceiling void: technician's head and shoulders up through a lifted ceiling tile, headlamp beam across cable trays and ducts, dust in the beam; vertical steel hanger splitting the frame at 50–56%; through the tile opening lower left, bright corridor with a facilities manager holding an unfolded floor plan looking up; dark top-left third | 2.1:1 (2000×952) | Home hero | **yes** |
| I02 | technician kneeling, torch beam under a stainless commercial kitchen line, floor drain visible | 4:5 | Home sticky; Inspection sticky | **yes** |
| I03 | technician and facilities manager walking a back-of-house corridor, manager pointing at the unfolded floor plan | 3:2 | Home chapter 1; Inspection head | **yes** |
| I04 | gloved hand checking a rubber loading-dock door seal with a slim gap gauge, daylight through the gap | 3:2 | Home chapter 3; Sites (docks) | **yes** |
| I05 | wide loading dock at dawn, roller doors half open, technician walking along the dock edge with a hard case | 21:9 | Home parallax band; Plan head (parallax) | **yes** |
| I06 | findings sheet with a printed floor plan and hand-marked numbered points on a clipboard, technician and manager both signing at a steel table | 3:2 | Home records; Records head | **yes** |
| I07 | restaurant dining room after closing, chairs up on tables, technician placing a low monitor station under a banquette | 4:3 | Home case 1; Sites (kitchens) | **yes** |
| I08 | cold-store warehouse aisle with tall racking, technician with torch checking the base of the racking | 4:3 | Home case 2; Season List head | **yes** |
| I09 | hotel linen room with white stacked linen shelves, technician inspecting shelf backs with a torch | 4:3 | Home case 3; Records (case 3) | **yes** |
| I10 | client desk: a person on a headset in a bright office, wall planner calendar with four coloured dots, notebook | 4:5 | Home request; Contact head | **yes** |
| I11 | overhead flat lay of an open tool case on concrete: torch, inspection mirror, gap gauge, monitor stations, moisture meter, clipboard | 4:3 | Inspection (T2 pills); post 1 | no |
| I12 | rooftop plant room, bird netting over condenser units, technician checking netting edge, pale sky | 3:2 | Sites head; post 4 | no |
| I13 | empty open-plan office in the evening, technician checking under a kitchenette counter | 3:2 | Sites (office floors) | no |
| I14 | two staff (a woman in her 40s and a man in his 30s) at the depot beside a plain white van with the side door open, cases inside | 4:5 crop / 3.4:1 head band | About head | no |
| I15 | training room: trainer showing a monitor card under a magnifier lamp to two new technicians | 3:2 | About; post 2 | no |
| I16 | commercial bin store at dusk, technician checking a drain cover and bin lid seals | 3:2 | Home case 4; Sites (bin stores); post 3 | **yes** |

Per-page check (no image twice on one page): Home I01–I10 + I16 (11) · About I14, I15 · Sites I12, I07, I04, I13, I16 · Inspection I03, I02, I11 · Plan I05 · Records I06, I09 · Notes/posts I11, I15, I16, I12 (one each) · Season List I08 · Contact I10 · Thanks/Privacy/Terms none.
Each file ≤ 300 KB, ≤ 2000 px, webp, 0 cutouts; one readme.txt line per image (AI-generated, CC0). Reject and regenerate: any text/logo, broken hands or faces, insects/rodents shown, style drift, vivid green suits (saturation gate).

---

## 8. Scroll effects (sp-scroll; 3 kinds max per page)

| Effect | Where | Source on Asante | Our trigger / time / easing |
|---|---|---|---|
| `sp-parallax` | Home hero Cover (I01, `--sp-par: 8%`, `6%` <782) and Home #5 dawn band (I05, `10%`, `7%` <782); Plan page head (I05, 8%) | KV slow push-in scale 1 → 1.08, 3 s ease-in-out, cross-fade 2000 ms (`tok(g)`) | scroll-driven `animation-timeline: view()` (sp-scroll built-in), IO + translate3d fallback; layer scale 1.18 built-in |
| `sp-marquee` | Home #2 site-type tiles strip | Swiper loop, delay 0, speed 3500, linear, hover freeze (`tok(g)`) | 40 s linear infinite, duplicate group `aria-hidden`, hover pause; tiles get no reveal |
| `sp-reveal sp-reveal--up` (+ `sp-stagger` on lists) | T4 lockups (except hero), Home #4 chapters, #6 list (stagger), #7 cases panel (whole panel), #9 right column; inner page bodies | Asante has no scroll reveal; its floating bar fades 500 ms (`tok(g)`) — the only reveal-like move | `--sp-dist: 24px`, 0.8 s `cubic-bezier(.23,1,.32,1)`, stagger 0.12 s; never on hero, fee table, form, legal text, marquee children |

Parallax (required): Home hero = background I01 in a Cover with class `sp-parallax`, foreground = H1, badge, skyline (on the Cover `::after`, not in the moving layer); Home #5 = background I05, foreground = text panel. Both keep moving on phones at the smaller `--sp-par`. `?sp-static`, reduced motion and the editor: no movement. Verify with `check-parallax.mjs` (≥ 6 px desktop and mobile, 0 under reduced motion).

---

## 9. Responsive requirements

- **390 px first screen**: H1, badge and rail all in normal flow; no vertical type; no absolutely positioned label over text or photo; skyline 64 px; no horizontal overflow (`html, body { overflow-x: clip }`).
- **Fee table**: at ≥782 px the table is the **full container width** (1200 at 1280+, container minus 48 px at 800); price column right-aligned, `white-space: nowrap`, never clipped or wrapped; table-layout auto with the item column taking the remaining width. At <782 every row stacks: item and detail on top, price below right-aligned on its own line; no horizontal scroll. Same for any table (Terms fees, Records list if tabular).
- T2 pills on drawings/photos only ≥782; below that, stacked `<details>` list under the image.
- Sticky photo (#4) only ≥1024; below it the photo sits on top of the chapters.
- T3 bar: full at ≥1024, tab-only 60 px at <1024; never covers the last line of the footer (it ends with the wrapper).
- Header 100 → 64 px at <1024; one menu toggle.
- Cases panel 2×2 → one column at <782 (photo 120×150 left still, text right; at <480 photo on top 4:3).

---

## 10. Similarity table (target 8/10 vs Asante; values from `reference-tokens.md`)

| Dimension | Asante value (token) | Yanagi Hygiene value |
|---|---|---|
| Ground / wash | #FFFFFF / ~#E8F4E4 `tok(a)` | #FFFFFF / #E8F4E4 |
| Brand hue | green #4CAC5B on type & pills only `tok(a)` | #449A52 (−5% L) on type & pills only |
| CTA tab colour | charcoal ~#555 `tok(a)` | pine charcoal #4A5852 |
| Hot accent | orange ~#F26B3A (bar tile) `tok(a)` | #F26B3A (rail markers, info tile) |
| Panel | #EBEBEB + #CCC frame inset 20 px `tok(d)` | identical, cases panel |
| First-screen saturated share | 7.4% `tok(a)` | target ≤ 8% |
| Section title | Latin 64 px light, .08em, green, centred `tok(b)` | Manrope 300 4.25rem (68 px), .08em, #449A52, centred |
| Sub-title / rule | 1.1–1.2rem + 96×1 px rule `tok(b)` `tok(f)` | 1.125rem + 96×1 px #9DB8A4 |
| KV copy | ~56 px light, white, 2 lines top-left `tok(b)` | 3.5rem Manrope 300, white, 2 lines top-left |
| Nav | 20 px, two-row header 100 px `tok(b)` `tok(c)` | 1.125rem, two-row header 100 px |
| Body | 14 px / 1.5 `tok(b)` | 17 px / 1.7 (Latin legibility), CJK 1.85 |
| Container / section padding | 1200 / 120 px, title→content 100 px `tok(c)` | 1200 / 120 px (72 px <782), 100 px |
| KV size | 1440×680 full bleed, 2.1:1 `tok(e)` | 1440×680, 2.1:1 |
| KV foot | white town silhouette ~130 px + arc 70–90 px `tok(e)` | white commercial silhouette 130 px + 80 px arc |
| Pills | radius 999, green, white text, ⊕, six on cutaway `tok(d)` `tok(e)` | radius 999, #449A52, white, ⊕ 28 px, six on section drawing |
| Arc edges | bowl 70–90 px top/bottom of wash `tok(d)` | 80 px |
| Marquee | tiles 410×220, gap 40, linear endless `tok(e)` `tok(g)` | text tiles 300×120, gap 40, 40 s linear |
| Floating bar | grey bar, pentagon tab with 3 px white inner line, tiles `tok(f)` | pine 88% bar 112 px, pentagon 440×88 with 3 px white inner line, one orange-framed tile |
| KV motion | scale 1→1.08 3 s, fade 2000 ms `tok(g)` | sp-parallax 8% (scroll-driven) |
| Bar motion | fadeIn 500 ms after 500 px `tok(g)` | sticky-bottom entry after `#sites` (no JS) |
| Radius | pills 999; panels 0 `tok(d)` | pills 999; photos 0; tiles/notes 12; info tile 10 |
| Shadow | none except bar `tok(d)` | none except bar `0 -4px 16px rgba(31,41,38,.12)` |
| Photo type | low-key documentary, one hard light `tok(e)` | documentary, daylight + one warm work light; hero low-key with headlamp |

Our own: every photo, both drawings, the skyline, copy, logo. Not taken: Asante's watercolour illustration, mascots, product badge artwork, phone tile, pink tile, testimonial slider.

---

## 11. Home acceptance checklist

1. First screen 1440×900: header two rows 100 px white; I01 ceiling-void photo with technician, headlamp beam, hanger splitting the frame, manager with floor plan visible; white two-line H1 top-left; outlined badge right; **white commercial skyline cut into the photo bottom (≥110 px)**; white strip with the **12-month rail and 4 orange markers**; bowl arc into the wash. All six KV checklist items visible.
2. 390×844 first screen: no overlap, no vertical type, no absolute labels; rail and badge in flow; no horizontal scroll.
3. `check-first-screen.py` saturated share ≤ 15% (target ≤ 8%).
4. T2: six big green ⊕ pills on the drawn building section on Home (≥782) and on Sites, Inspection, Plan, Records pages.
5. T3: pentagon tab with white inner outline in the header, the request band and the sticky bottom bar (appears from `#sites`), one wording only.
6. T1 skyline foot on Home and on every inner page head listed in §6.
7. Block order equals §5; sticky photo I02 stays pinned while the four timed chapters scroll at 1280.
8. Fee table: 7 rows, full width at 800 and 1280, prices nowrap right, stacked on phones; numbers identical to §0 on Home, Plan, Terms, in all five languages.
9. ≥ 8 photos on Home (11 planned), none repeated on a page; 16 total; STYLE consistent; no text/logos/insects.
10. Motion: `sp-parallax` on hero and dawn band passes `check-parallax.mjs` (desktop + mobile), marquee runs, reveal only on listed blocks, nothing hidden under `?sp-static` / reduced motion / no JS.
11. Fonts: Manrope + Source Sans 3 + Noto Sans TC/JP via theme.json fontFace; editor equals front end (`check-editor-fonts.mjs`); max preset 4.25rem.
12. Colours as §3; green only as type/pills, pine only on tabs/buttons/footer; no beige, no large saturated field.
13. auto-gates pass (en, home only in stage 1: `… gates/en.json 1 1`).
