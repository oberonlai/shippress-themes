# Mahora Foods: design spec (stage B, binding for implementation)

Slug `mahora-foods`, staff cafeteria contractor, type `business` (WooCommerce compatible, not required). Reference: https://www.repast.co.jp/ (Repast, screens in `ref/`, values in `reference-tokens.md`, cited below as [tok a]–[tok g]). No secondary reference.
Target: 80% similarity in colour, image treatment, motion, decoration and layout. Photos and copy are our own. No Repast images, text or logo.
Imagery: **photo** (per stage-a.md).
Font direction: **serif**.

Fixed brand facts are in section 10. Every page and all five languages use them.

Decisions that override stage-a.md (design director, reasons given):
1. **Colour:** stage-a proposed umimatsu green `#556652` as main and clay as accent. This spec uses the reference's own colours, as the similarity brief requires. A food contractor suits warm orange, so there is no industry reason to swap. Row hex is reference-only in common.md. umimatsu green survives in the photos (aprons), see section 5.
2. **Orange wedge:** stage-a dropped it. One capped wedge returns behind the tile row (T1), because Repast's identity depends on it, and the Tsumugi lesson says not to replace reference contrast with something faint. It is capped at ≤15% of that viewport, appears once, carries no text, and is not a pale band with a giant word (Minori).
3. **Hero geometry:** the strip is a separate row under the photo and text, not a scroller around them. Reason: `animation-timeline: view()` binds to the nearest scroll container, so a parallax photo inside an `overflow-x:auto` strip would not move and `check-parallax.mjs` would fail.

---

## 1. Signature techniques (three, all obvious at a glance)

### T1. Abutting photo tiles with overlapping white label tabs
- **Source:** Repast service section, https://www.repast.co.jp/ , `ref/scroll-repast-1800.png` and `-2700.png`.
- **Reference:** service photos touch edge to edge (366 px wide, 3:2) with no gap. A white tab 240×58 sits right-aligned over each photo's lower edge, half on the photo and half below it, with a 3 px orange bottom rule and bold orange text centred [tok e, d].
- **Home:** block 3, "Which workplaces it suits". Four tiles: Offices / Factories / Campuses / Depots.
- **Geometry (1440):** container 1100 px (x 170–1270) [tok c]. 2 × 2 grid, `gap: 0`, each tile 550 × 367 (3:2), radius 0, so the photos in each row touch and the two rows form a 1100 × 748 slab. Tile tab: `position:absolute; right:0; bottom:-14px`, 240 × 58, `#FFFFFF`, `border-bottom:3px solid #E63800`, label Newsreader 700 1.1875rem `#E63800`, centred. `row-gap: 14px` clears the tab overhang; there is no column gap. The whole tile is a link to `/workplaces/#<anchor>`.
- **Wedge (tok f):** one element behind the lower half of the slab, `.mf-wedge`, full-bleed, `linear-gradient(90deg,#ff3e00,#fe9600)`, `clip-path: polygon(0 100%, 100% 0, 100% 100%)` (rises left to right, 6°, about 150 px high at 1440). It is an `aria-hidden` child, never the element carrying `sp-reveal`. Area cap ≤15% of a 1440×900 viewport, measured with the tiles on top.
- **Hover:** tab text to `#2d313f`, `.3s ease` [tok g].
- **Do not dilute:** no gap between photos in a row, tab must overlap the photo edge, white tab with a clearly orange rule (3 px, not grey), radius 0, label bold orange.

### T2. Centred bold heading, handwritten Latin sub-line, one-line lead
- **Source:** Repast section heads, `ref/scroll-repast-900.png` ("Commitment of taste"), `-1800.png` ("Service Information").
- **Reference:** centred 30 px / 700 heading, orange script Latin line directly under it, then one centred grey line, 40 px gaps [tok b, c].
- **Home:** opens blocks 2, 3, 4, 6, 7 and 9. Block 8 uses the panel variant (section 3).
- **Geometry:** `h2` Newsreader 700, 1.875rem (30 px) [tok b], colour `#2d313f`, centred. Script line `p.mf-script`: Dancing Script 600, 1.5rem, `#ff3e00`, margin-top 4 px, stays in English in all five languages. Lead 1rem, `#656874`, centred, max 720 px, margin-top 24 px. Head → content gap 40 px [tok c].
- **Do not dilute:** the script line must be handwritten and orange, must sit directly under the heading (≤8 px), and is never replaced by an uppercase label. Heading stays centred.

### T3. Slideshow panel: wide photo, white card, grey rule, dots and pause
- **Source:** Repast "commitment" carousel, `ref/scroll-repast-900.png` and `-1800.png`.
- **Reference:** photo 726 × ≈450 (≈1.6:1) at left, white text card at the right running to the container edge (≈34% width) with a thick grey bottom rule. Round white dots and a pause icon under the photo, large thin chevrons outside the container [tok e, f, g].
- **Home:** block 4, "A service day, staffed": four slides, Prep 06:30 / Pass 11:15 / Floor 11:30 / Close 14:30.
- **Geometry (1440):** container 1100 px. Photo 726 × 454, radius 0. Card 374 px wide, white, padding 32, `border-bottom:4px solid #c8c8c8`, aligned to the photo bottom, top offset +72 px so the card steps down from the photo top (as in the reference). Card content: time in Newsreader 700 1.75rem `#E63800`, title Newsreader 700 1.25rem, 45–55 words of body. Under the photo at left: 4 dots Ø12 (active filled, others 2 px outline) plus pause icon, gap 18 px, colour `#2d313f`. Panel sits on `#f5f5f5` full-bleed, padding 64 px.
- **Behaviour:** small `assets/mahora-slides.js`, no library and no scroll listener. Autoplay 6 s, crossfade `.3s ease`, dots and pause are real `<button>`s with aria-labels. Chevrons outside the container are 1.5 px lines, 56 px tall. Hidden slides only under `html.sp-js .mf-slides`. No JS or the editor shows all four stacked. `prefers-reduced-motion`, `?sp-static`: no autoplay, slide 1 shown.
- **Do not dilute:** photo stays ≥1.5:1 and wider than the card, the grey rule stays, dots stay round.

### Supporting: case panel (not counted as a signature, token f)
Block 8 and Case studies: `#f5f5f5` panel, 1100 px, 6 px `linear-gradient(90deg,#ff3e00,#ffc742)` top rule, pale white script watermark "Case Studies" (Dancing Script 8rem, `#FFFFFF`, top right, `aria-hidden`), heading + lead + link on one baseline, three white cards inside.

### Continuation to inner pages
Every inner page head = two abutting 21:9-ish photos (each 550 × 236, gap 0, inside the 1100 container) with one T1 tab holding the page name, then the T2 head. That is T1 + T2 on all pages. Mobile: one photo only.

| Page | T1 | T2 | T3 |
|---|---|---|---|
| How we work | head; tiles for 4 roles on a service day | yes, each section | full T3, 4 slides, same content as home |
| Workplaces | head; 4 tiles as anchors, then each type as a section | yes | small T3, 3 slides, a depot's week |
| Menus & nutrition | head; 4 tiles for week 1–4 of the cycle | yes | T3, 3 slides, how a menu is written |
| Lunchroom sites | head; one tile per district (4) with count in the tab | yes | — |
| Case studies | head | yes | panel variant around all 4 cases |
| Starting a contract | head | yes | T3, 4 slides, one per stage |
| Rates | head | yes | — |
| About | head | yes | T3, 3 slides, history 2009 / 2016 / 2024 |
| Notes, Contact | head | yes | — |

---

## 2. Key visual concept

### (1) Reference first screen, story, signature motion
Repast opens with a full-bleed, softly blurred video still of a close human gesture: hands tying up a cook's hair before work, seen from behind. A short centred headline and a handwritten "Tasty & Healthy" sit over it, with a slim nav, one orange CTA and a thin chevron at the bottom. Story: warmth and care stand behind everyday meals; the preparing person is the subject, not the food. Motion: slow looping footage.

### (2) Our translation
The same idea in a staff lunchroom: the human moment just before lunch. A cook sets trays of set lunches on the pass while two office workers wait with empty trays. It stays a documentary, soft-daylight photograph, close enough to read hands and trays, the person giving care in the foreground. The looping footage becomes slow vertical parallax on that photo, plus a horizontal strip that carries the rest of the service moment sideways.

### (3) KV checklist (every item built and visible in the first screen)
| # | Reference element | Our mapping | Position | Motion | Image used |
|---|---|---|---|---|---|
| 1 | Full-bleed human-gesture still | Cook setting trays on the pass, two workers waiting with empty trays | left 60%, bleeds to left edge and to the header | `sp-parallax`, `--sp-par: 8%` | M01 |
| 2 | Centred headline + script sub-line | Short serif H1 + script "set lunch, on time", left-aligned in the right column | right 40%, vertically centred | none (hero) | — |
| 3 | Slim nav + one pill CTA | Split nav, wordmark centred, filled orange pill "Plan a lunchroom" | top, 88 px, sticky | shadow after scroll | — |
| 4 | Scroll-down chevron | Thin chevron + "Scroll →" at right end of strip; third panel is cut by the viewport edge | bottom row, right | horizontal strip, CSS scroll-snap, no reveal | M02, M03, M04 |
| 5 | Orange pill / script accent | Orange script line, small, right under H1 | right column, under H1 | none | — |

M01–M04 are in the image list (section 5).

### First-screen composition (1440×900)
- Header 88 px white, sticky [tok c]. No transparent overlay, because the split nav and pill stay legible on white.
- **Top row** 588 px high: M01 at x 0–864 (60%), radius 0, in `.mf-hero__photo.sp-parallax` (`overflow:clip`). Right column x 864–1440: white, padding-left 64, padding-right 170 (keeps the container's right edge at 1270).
  - H1: Newsreader 700, 4.25rem (preset `xx-large`, theme maximum), line-height 1.08, `#2d313f`, en "Lunch, on the pass by 11:15." on 3 lines. Exceeds tok b's 32 px, required by the ≥4.25rem rule.
  - Script line: Dancing Script 600, 1.75rem, `#ff3e00`, "set lunch, on time".
  - One line, 1rem, `#656874`, ≤20 words: "We run staff lunchrooms inside offices, factories, campuses and depots."
  - Plain text link "See how a service day runs ›" with orange chevron. No second button.
- **Bottom row** 224 px: `.mf-strip`, full-bleed, `overflow-x:auto; scroll-snap-type:x proximity`, hidden scrollbar. Three panels, each 39vw wide (≈562 px), gap 0, photos abut, radius 0, so the third panel is cut off at the right edge. Each has a white tab (T1, 200 × 44, 3 px orange rule) overlapping bottom right: "06:30 Prep", "11:30 Floor", "14:30 Close". Chevron and "Scroll →" sit 24 px from the right edge on a white 120 × 36 chip, in flow of the strip's end, ink 0.875rem.
- Forbidden: table, form, search box, any large centred heading, `sp-reveal` anywhere in the first section.

---

## 3. Home page

| # | Pattern | Purpose | Layout and photos | Copy (en) |
|---|---|---|---|---|
| 1 | `front-hero` | promise | as section 2; M01, M02, M03, M04 | ≈35 words |
| 2 | `front-welcome` | who we are | **T2** "Lunch should be the easy part" / script "quiet work" / lead. Centred 720 px column, two paragraphs, 1rem, text only, breathing room after the busy hero | 90 words, 2 paragraphs |
| 3 | `front-workplaces` | which workplaces it suits | **T2**, then **T1** four tiles M05, M06, M07, M08 on the wedge, then one sentence per type in a 4-column text row under the slab, then link "All workplaces ›" | 80 words |
| 4 | `front-serviceday` | how a service day is staffed | **T2** "A service day, staffed" / script "from prep to close", then **T3** slides M09 (prep), M10 (pass), M11 (floor), M12 (close) on `#f5f5f5`; flat button "How we work" | 4 × 50 words |
| 5 | `front-floor` | scale, parallax band | full-bleed 560 px, M13 dining room in daylight, `sp-parallax` (Cover). White card 374 px right-aligned to the container: three `sp-count` figures in Newsreader 700 2.6rem: 38 lunchrooms, 4 districts, since 2009 | 30 words |
| 6 | `front-contract` | how a contract begins | **T2** "How a contract begins" / script "four quiet stages". Four ruled text rows, 1 px `#e8e8e8`, 1100 px: week label left (Newsreader 700 1.25rem, 200 px), stage name 260 px, one sentence. Rows, not a step grid or timeline | 90 words |
| 7 | `front-rates` | rates | **T2** "Rates" / script "per lunch, plainly"; full-width table of 6 items (section 10); note line. No `sp-reveal` | 50 words |
| 8 | `front-cases` | proof | Case panel: heading "Case studies" left, lead, link right; 3 white cards: title Newsreader 700 1.25rem on top, photo 3:2 under it (as reference), one sentence. M14, M15, M16 | 3 × 25 words |
| 9 | `front-close` | contact | **T2** "Tell us about your lunchroom" / script "let's talk", M17 wide 1100 × 320 above, flat button 345 × 60 "Plan a lunchroom", phone and hours line | 40 words |

Home words ≥250 en, ≥3 narrative paragraphs (blocks 2 and 4). Copy total above ≈ 460 words. CJK ≥500 characters.

Home photo positions: **17** (M01–M17), each once.

Buttons [tok d]: flat, radius 0, 345 × 60, `linear-gradient(90deg,#fe9600,#ffc742)`, text Work Sans 700 1.0625rem **ink `#2d313f`** (reference uses white, which fails contrast here), `border-bottom:4px solid #c8c8c8`. Hover `.3s ease`. Scroll-to-top Ø50 `#2d313f`, bottom right 50 px [tok f].

Split header: left "How we work · Workplaces · Menus", centre wordmark "Mahora Foods" Newsreader 700 1.5rem, right "Sites · About" + pill. Nav Work Sans 400 1rem, no tracking [tok b]. Pill: `#E63800`, white, Work Sans 700 1.1875rem, radius 50px, 44 px high. One top menu only. Sticky shadow after scroll: `0 2px 8px rgba(0,0,0,.2)`. Below 960 px: wordmark left, pill hidden, menu toggle right.

Footer: `#2d313f`, white text, address, hours, four-column link list, script line "Tasty lunches, on time" in `#ffc742`.

### Comparison with recent themes
| # | Hazuki | Kouhi | Minori | Shirushi | **Mahora** |
|---|---|---|---|---|---|
| 1 | 4-panel seam strip + vertical headline | inset banner crossfade | inset photo stage + notch card | dark pinned stage + timeline | **60% photo, text column, tabbed 3-panel scroller under it** |
| 2 | info row | notice strip | giant word on diagonal band | dossier card strip | **centred script head + text** |
| 3 | 3-then-4 tiles | 2×2 slab tiles | tick cards | blurred-ground window + map | **abutting 2×2 tiles with tabs over orange wedge** |
| 4 | dated news rows | lifted centre card on curved band | dated list + vertical word | notice panel | **slideshow panel on grey** |
| 5 | — | tabbed news rows | — | — | **full-bleed parallax + count card** |
| 6–9 | — | — | — | — | **contract rows, rates, case panel, close** |

Why not alike: Kouhi's 2×2 slab tiles are the closest item. Mahora's tiles abut with no gap, are 3:2 photos, and carry an overlapping white tab on a saturated wedge, where Kouhi's are slabs on a pale ground. Hazuki's four full-height panels with a headline on the seam differ from a short scrolling strip below a dominant photo, with no text on it. Minori's wedge is a pale tint carrying a giant word; ours is a saturated decoration behind photos carrying no word. No recent theme uses a script sub-line, a slideshow panel or a rate table near the end of the home page.

---

## 4. Inner pages (11, content-led, no sidebar)

Each = T1/T2 head → body → close line with flat button.

1. **How we work** `/how-we-work/`: full T3; the staffing rule (1 team member per 40 lunches); the four roles as tiles M09–M12; allergen handling.
2. **Workplaces** `/workplaces/`: anchors `#offices #factories #campuses #depots`, each with photo, narrative, typical lunches per day, what changes (shifts, canteen size).
3. **Menus & nutrition** `/menus/`: four-week cycle, two mains plus one plant-based daily, sample week as a stacked list, dietitian's notes, allergen labels.
4. **Lunchroom sites** `/sites/` (locations-network, row's page structure): four districts with counts (section 10), site name, type, lunches per day as a table; one close-up of a representative site.
5. **Case studies** `/case-studies/`: 4 cases in the panel: challenge, what changed in operations, no outcome claims beyond facts.
6. **Starting a contract** `/starting/`: T3 with 4 stages, what we need from you, trial week terms, term and notice.
7. **Rates** `/rates/`: the same 6-item table, how a monthly invoice is built, what is included.
8. **About** `/about/`: 2009 founding, T3 history, people list of 7 as ruled rows, name, role, one line (no team grid).
9. **Notes** (index, archive, single): 6 posts with M-image thumbnails 3:2, radius 0, tab with date.
10. **Contact** `/contact/`: address, hours, phone, email, what to include in a first message. No form required.
11. **Privacy** `/privacy/`, plus 404 and search with T2 head.

---

## 5. Colour, type

| Role | Hex | Source | Use | Share of page |
|---|---|---|---|---|
| Base | `#FFFFFF` | ref ground | page | ≈68% |
| Panel | `#f5f5f5` | [tok a] | T3 ground, case panel | ≈15% |
| Line | `#e8e8e8` / `#c8c8c8` | [tok a] / ref button rule | rows / button and card rule | ≈1% |
| Ink | `#2d313f` | [tok a] | heads, body, footer ground | ≈8% |
| Muted | `#656874` | [tok a] | leads, captions | text |
| Orange | `#ff3e00` | [tok a] | script lines ≥1.5rem, wedge start | ≈1% |
| Orange text | `#E63800` | `#ff3e00`, −5% HSL lightness | tab labels, pill, tab rules, times | ≈2% |
| Amber | `#fe9600` → `#ffc742` | [tok a] | wedge end, buttons, top rule | ≈3% |
| Wedge total | gradient | [tok a, f] | block 3 only | ≤15% of that viewport |

- Contrast: `#E63800` on white = 4.27:1, so orange text is **bold and ≥1.1875rem** (large text, 3:1) everywhere. `#ff3e00` = 3.5:1, so script only at ≥1.5rem. Ink on amber ≥5:1. Never white on amber.
- umimatsu green `#556652` is not a UI colour. Staff aprons in the photos use it, so the row's character is kept and the photos stay calmer than the orange UI.
- No beige ground. White is dominant, as in the reference.
- **First-screen saturation cap:** reference <5% [tok a]. This theme: gate **≤15%** (common.md) with `check-first-screen.py --max 15`, target ≤8%. The pill is ≈0.4%, tab rules ≈0.1%, so the rest is the photo grade. Keep food colour modest in M01–M04.

### Type
Direction: **serif**. Fonts load through `theme.json` `fontFamilies` + `fontFace`, identical in editor and front end, zh-TW and ja subsets included. Because `style.css` will have `:lang(` rules, copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and require it.

| Slug | Stack |
|---|---|
| `heading` | `"Newsreader", "Noto Serif TC", "Noto Serif JP", serif` |
| `body` | `"Work Sans", "Noto Serif TC", "Noto Serif JP", serif` |
| `script` | `"Dancing Script", cursive` (Latin only; never receives CJK text) |

`:lang(zh-TW)` puts Noto Serif TC first, `:lang(ja)` puts Noto Serif JP first; headings and body both in Mincho/Ming serif, no gothic/sans mixed in. CJK heading size ≈0.75× en, body line-height 1.85, fr/de `hyphens:auto`.

Sizes: small 0.875rem; base 1rem [tok b]; medium 1.25rem; large 1.875rem (h2) [tok b]; x-large 2.6rem; xx-large **4.25rem** (max, H1 only). Weights: 700 headings, 400 body [tok b]. Line-height: headings 1.3, body 1.75 (not measured on reference, ours). Mobile H1 2.75rem.

---

## 6. Responsive

- **390 px first screen:** stacked and in flow: M01 at 4:3 full width, then H1, script, line, link, then strip. **No vertical text and no absolutely positioned label over text.** Tabs in the hero strip become static white bars under each photo (no overlap). Strip panels 78vw with scroll-snap.
- T1 on mobile: one column, tabs overlap by `margin-top:-24px` in flow, right aligned. Wedge kept, 30% smaller.
- T3 on mobile: photo full width, card below, dots under the card. Chevrons hidden.
- **Rate table ≥782 px:** `width:100%` of the container, price column `white-space:nowrap; text-align:right`, never clipped. `overflow` is not used to hide it.
- **Any table <782 px:** stacked rows with labels from `data-label`.
- No horizontal overflow at 390 and 1280; `.mf-strip` scrolls only inside itself. `html,body{overflow-x:clip}`.

---

## 7. Images (18, Grok, one at a time, Read each)

STYLE (exact string on every prompt):
`documentary photograph, 35mm lens, soft natural daylight, high-key bright interior, warm natural light, modern international workplace kitchen or staff dining room, white walls and light wood, staff in plain sage green aprons and white shirts, diverse adults, calm candid moment, fresh international set lunches, shallow depth of field, no text, no logos, no brand marks, no signage, no menus with lettering, no Japanese elements`

No cut-outs. ≤300 KB, ≤2000 px. One readme.txt line each (AI-generated, CC0).

| ID | Subject / composition | Ratio | Used on |
|---|---|---|---|
| M01 ★ | cook's hands and forearms setting a tray of set lunch on a steel pass, two office workers with empty trays waiting, soft focus | 3:2 | Home hero; How we work head |
| M02 ★ | two cooks portioning vegetables at dawn, window light | 5:2 | Home strip; Menus head |
| M03 ★ | server handing a plate across the counter to a worker | 5:2 | Home strip; Workplaces head |
| M04 ★ | wiping down a pass, trays stacked, empty kitchen in afternoon light | 5:2 | Home strip; Notes post 1 |
| M05 ★ | office lunchroom, people at light wood tables, city window | 3:2 | Home T1; Workplaces offices |
| M06 ★ | factory canteen, workers in clean work jackets at long tables | 3:2 | Home T1; Workplaces factories |
| M07 ★ | college dining hall, students and staff queueing | 3:2 | Home T1; Workplaces campuses |
| M08 ★ | depot break room, drivers in hi-vis vests with hot lunch boxes | 3:2 | Home T1; Workplaces depots |
| M09 ★ | cook chopping herbs at a prep bench in early window light | 1.6:1 | Home T3; How we work T1 |
| M10 ★ | trays lined up along the pass, close, steam | 1.6:1 | Home T3; How we work T1 |
| M11 ★ | team member clearing and greeting on the dining floor | 1.6:1 | Home T3; How we work T1 |
| M12 ★ | team doing close-down, stainless surfaces, sanitising | 1.6:1 | Home T3; How we work T1 |
| M13 ★ | wide empty daylit dining room before service, tables set, depth for parallax | 21:9 | Home band; Sites head |
| M14 ★ | manager and client at a table looking at a blank planning sheet | 3:2 | Home case 1; Case studies |
| M15 ★ | large set-lunch close-up: grilled fish, grains, greens | 3:2 | Home case 2; Menus T1 |
| M16 ★ | night-shift worker opening an insulated hot box | 3:2 | Home case 3; Case studies |
| M17 ★ | smiling team of three behind the counter, ready before service | 3.4:1 | Home close; About head |
| M18 | dietitian reviewing fresh ingredients at a table | 3:2 | Menus; About; Contact head |

★ = home. Page check: no image twice on one page. Inner heads use one image from this list plus a second that is not otherwise used on that page.

---

## 8. Scroll motion and parallax

From stage-a "scroll treatment candidates". Repast has no scroll library, so triggers are our adaptation of its soft fade behaviour, and hover stays `.3s ease` [tok g].

| Effect | Class | Where | Source | Trigger / time / easing |
|---|---|---|---|---|
| Section heads fade up | `sp-reveal sp-reveal--up` | every T2 head from block 2 | repast adaptation | IntersectionObserver; `--sp-dur:.6s`, `--sp-ease:cubic-bezier(.2,.7,.2,1)`, `--sp-dist:24px` |
| Tile and card row in sequence | `sp-stagger` on parent, `sp-reveal sp-reveal--up` on each | block 3 tiles, block 8 cards | repast adaptation | same; `--sp-dur:.7s`; stage-a's 80–100 ms step is not adjustable, the built-in .12s step applies |
| Numbers | `sp-reveal sp-count` | block 5 card | — | 1.2s easeOutCubic (built in) |
| Parallax | `sp-parallax` | see below | repast slow hero footage / carousel drift | CSS scroll-driven, linear |

Not on: first section, T3 slides, `.mf-strip` children, rate table, legal text.

### Parallax (required)
| Where | Background | Foreground | `--sp-par` desktop / mobile | Reference motion |
|---|---|---|---|---|
| Hero `.mf-hero__photo` | M01 (`figure>img`) | none; text sits in the separate right column | 8% / 6% | slow looping hero footage |
| Block 5 Cover | M13 (`.wp-block-cover__image-background`) | white count card, outside the moving layer | 10% / 6% | slow drift of the footage |

`.mf-hero__photo` must never sit inside `.mf-strip` or any other scroll container (see decision 3). Static under `prefers-reduced-motion`, `?sp-static`, editor. Verified by `check-parallax.mjs`.

---

## 9. Similarity table

| Dimension | Reference value | This theme |
|---|---|---|
| Ink | `#2d313f` [a] | `#2d313f` |
| Accent | `#ff3e00`, gradient to `#fe9600`, `#ffc742` [a] | same; `#E63800` (−5% L) for text |
| Greys | `#e8e8e8 #f5f5f5 #656874` [a] | same |
| First-screen saturation | <5%, small pill [a] | target ≤8% |
| Heading | h2 30 px / 700 centred [b] | 1.875rem / 700 centred, serif per row |
| H1 | 32 px / 700 [b] | 4.25rem / 700 (required by gate) |
| Body, nav | 16 px / 400, no tracking [b] | same |
| Container | ≈1100 px [c] | 1100 px |
| Gaps | ≈40 px [c] | 40 px |
| Header | white 88 px, sticky, shadow [c] | same, split nav |
| Radius | 0; 50% dots; 50 px pill once [d] | same |
| Buttons | flat, 4 px grey rule [d] | same; ink text |
| Label tab | 240 × 58, 3 px orange rule [d, e] | same |
| Tiles | abutting 3:2 [e] | same |
| Slideshow | 726 × 450, card ≈34% [e] | 726 × 454, 34% |
| Wedges | ≈6°, ≈35% of those screens [a, f] | 6°, once, ≤15% (cap, common.md forbids large saturated areas) |
| Case panel, watermark | grey panel, script [f] | same |
| Dots, pause, top button Ø50 | [f] | same |
| Motion | hero video, carousel, hover .3s ease [g] | parallax, carousel 6 s, hover .3s ease, soft reveal |
| Imagery | documentary soft daylight [e] | same, high-key |
| Hero | full-bleed, centred text | **differs:** 60/40 with strip, per row hero and stage-a KV |

---

## 10. Fixed numbers (identical everywhere, all five languages, USD in every language)

- **Company:** Mahora Foods, founded **2009**, office **14 Mill Quay, Eastmere** (fictional).
- **Scale:** **38** lunchrooms in **4** districts: Northshore 12, Harbour 11, Central 9, Westfields 6.
- **Office hours:** Mon–Fri 8:30–17:30. **Service window:** 11:30–13:30. Phone +1 (555) 014-0162, hello@mahorafoods.example.
- **Service day:** Prep 06:30, Pass 11:15, Floor 11:30, Close 14:30.
- **Staffing rule:** 1 team member per **40** lunches.
- **Menu:** **4**-week cycle, **2** mains + **1** plant-based daily.
- **Contract process:** Week 1 Site visit · Weeks 2–3 Menu and staffing plan · Week 6 Trial week · Week 8 First service. Minimum term **12** months, notice **90** days.

| Rate item | Price |
|---|---|
| Small lunchroom, 30–80 lunches a day | $9.20 per lunch |
| Standard lunchroom, 81–250 lunches a day | $8.40 per lunch |
| Large lunchroom, 251–600 lunches a day | $7.60 per lunch |
| Second shift, added service | $1.10 per lunch |
| Night-shift hot box | $6.80 per box |
| Trial week | $2,400 flat |

Note under table: site visit free; ingredients, team and cleaning included; prices before tax.

**People (7):** Ingrid Halvorsen (founder, managing director), Tomás Ferreira (executive chef), Amara Nwosu (dietitian), Wei-Lin Chen (head of site operations), Daniel Roth (purchasing), Priya Raman (client manager), Lucas Moreau (food safety lead).

**Cases (4, fictional):** Northgate Components, factory, 420 lunches, two shifts · Alder & Reeve Accountants, office, 120 lunches · Fernhill Technical College, campus, 310 lunches · Bayline Distribution, depot, 180 lunches including night hot boxes.

No guaranteed results, awards, savings percentages, or real brands.

---

## 11. Home acceptance checklist

1. First screen shows all five KV items: M01 left 60% with cook, trays, two waiting workers; H1 and orange script right; split nav with pill; 3-panel strip with third panel cut off; chevron + "Scroll →".
2. No `sp-reveal` in first section; `check-first-screen.py --max 15` passes.
3. T1: four photos touch left to right, white tabs overlap photo edges, 3 px orange rules, wedge visible at ≤15%.
4. T2 on every listed block: centred bold heading, orange handwritten line directly below, lead.
5. T3: 726 × ≈454 photo, card with grey rule, round dots + pause that work; reduced motion stops autoplay; no-JS shows all four.
6. Colours match section 5: `#2d313f` ink, orange and amber present, no umimatsu green in UI, white dominant, no beige.
7. Radius 0 apart from dots, pill, scroll-top.
8. Block order equals section 3; no team grid, step grid, vertical timeline, sidebar, collage, cut-outs.
9. 17 home photos, none repeated, no text or logos, same STYLE.
10. Rates table: six items, numbers as in section 10, full width ≥782 px, price nowrap right, stacked on mobile.
11. 390 px: stacked hero, no vertical text, no overlapping labels, no horizontal overflow.
12. `check-parallax.mjs` passes for both parallax areas on desktop and mobile; reduced motion 0.
13. Newsreader, Work Sans, Dancing Script and Noto Serif TC/JP load via `theme.json`, same in editor and front end; `check-editor-fonts.mjs` passes.
14. ≥250 en words, ≥3 narrative paragraphs; `auto-gates.mjs` pass.
