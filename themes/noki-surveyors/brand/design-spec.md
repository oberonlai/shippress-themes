# Noki Surveyors: design spec (stage 1 spec, binding for implementation)

Slug `noki-surveyors`. A small building surveying practice that reports on the condition of houses and small commercial buildings **before a buyer commits**. Row b39-6: archetype **horizontal-strip**, hero **diagonal-split**, nav **centered**, page structure **landing-longform**, type **landing** (home = one long conversion page with an anchor menu and **one repeated CTA "Request a survey" → `/request/`**; newsletter page = "Slot alerts" signup; plus privacy, terms, thanks), font direction **sans** (Barlow / IBM Plex Sans, CJK Noto Sans TC / JP), palette "Edo purple" `#5E5166`, category business-services. Five languages: en, zh-TW, ja, fr, de.

Primary reference (ref-check passed, not in `used-refs.txt`): **Kajima** https://www.kajima.co.jp/ (S5-Style entry, building contractor corporate home). No secondary reference. Measurements in `brand/reference-tokens.md`, quoted below as **RT(a)…RT(g)**. Screens in `brand/ref/`: `kajima-first.png` (two-pane hero), `scroll-kj-before.png` / `scroll-kj-after.png` (hero before / after the scatter), `kj-s1200.png` (notice strip + news rows), `kajima-2700.png` (dark sentence-builder band), `kj-s3400.png` (enlarged-centre projects strip), `kj-s4600.png` (heading rows + 3 cards), `kj-s6000.png`.

**Imagery: photo** (stage-a IMAGERY = photo; Kajima is ~90 % documentary architecture photography, RT(e)). All images are real-photo-style images we generate ourselves with one STYLE string (§6). We never copy Kajima's photographs, renders, copy, logo or full-page layout. Diagonal seams, the sentence-builder boxes, triangles, arrows and rules are our own CSS/SVG.

---

## 0. Fixed brand facts (identical on home, inner pages, posts and all five languages; brand.md copies these)

- **Noki Surveyors**, building surveying practice founded **2011** by Ines Kovač. Office **3 Ropewalk Yard, Elsmere Quay** (fictional, international-neutral harbour town). Survey area: **within 40 km of Elsmere Quay**. Email `hello@noki-surveyors.example`. Phone **+00 31 555 0148** (fictional format).
- **Hours:** request desk **Mon–Fri 08:30–17:30**; site visits **Mon–Sat 08:00–17:00** (Saturday by arrangement). Every request is answered **within one working day** with a fixed price and a visit slot.
- **Visit and report times (same everywhere):** flat or small house **about 90 minutes**; house 90–180 m² **2 to 3 hours**; large house **3 to 4 hours**; small commercial building **about 4 hours (half a day)**; single-defect inspection and re-visit **about 45 minutes**. Report **within 5 working days** of the visit (single-defect and re-visit letters: **2 working days**), followed by a **30-minute call**. Hero card row says "90 min – 4 h on site" and "Report in 5 working days".
- **Price list (6 items, EUR in every language, incl. VAT; home table = Visits & prices page = Request page summary):**
  | # | Survey | What it covers | On site | Price |
  |---|---|---|---|---|
  | 1 | Flat or small house | up to 90 m², full condition report | about 90 min | EUR 480 |
  | 2 | House | 90–180 m², full condition report | 2–3 h | EUR 640 |
  | 3 | Large house | over 180 m² or with outbuildings | 3–4 h | EUR 820 |
  | 4 | Small commercial building | shop, office or workshop up to 400 m², incl. a flat above | about 4 h | EUR 1,150 |
  | 5 | Single-defect inspection | one crack, damp patch or leak, short letter | about 45 min | EUR 290 |
  | 6 | Re-visit after repairs | checks the agreed repair, short letter | about 45 min | EUR 160 |
  Note line everywhere the table appears: "Prices include VAT and travel within 40 km of Elsmere Quay. Every full report includes a 30-minute call. You pay after the report is sent, within 14 days."
- **Request flow (4 prose lines, numbered 01–04, never a timeline graphic or step grid):** 01 Send the request form (or email) with the address, the type of building and the date you need the report by. → 02 Within one working day Lucía replies with a fixed price and a visit slot. → 03 The surveyor visits; someone lets us in, you are welcome to join for the last 20 minutes. → 04 The report arrives within five working days, followed by a 30-minute call.
- **Inside the report (8 numbered sections, the "ledger"):** 01 Structure and movement (cracks, lintels, floors, chimney) · 02 Roof and rainwater (coverings, flashings, gutters, downpipes) · 03 Damp and ventilation (readings, air bricks, condensation) · 04 Walls, windows and doors · 05 Services we can see (visible electrics, heating, drainage covers; visual only, not a test) · 06 Inside: ceilings, stairs, fire escape routes · 07 Outside: boundaries, paths, outbuildings, trees near walls · 08 Priorities in three columns: **now / within two years / keep an eye on**, each with a rough cost range. Every finding has a photograph and a plain-words sentence.
- **Named people (8, fictional):** staff — **Ines Kovač** (founder, lead surveyor, commercial and older houses), **Tomasz Wren** (house surveys; the surveyor on the ladder in hero pane A), **Adaeze Nwosu** (damp and interiors; hero pane B), **Henrik Saari** (small commercial buildings), **Lucía Pardo** (request desk, books every visit, writes the reply within one working day); clients in the case notes — **Ruth Bell**, **Sana Iqbal**, **Dev Anand**.
- **Case notes (3, invented, qualitative only — no percentages, no money "saved"):** (1) **Ruth Bell, two-bed 1920s terraced house** — cracked brick lintel over the bay; Tomasz; the report said the lintel needed replacing before winter and Ruth agreed the repair with the seller before signing. (2) **Sana Iqbal, corner shop with a flat above** — ponding on the rear felt flat roof; Henrik; the report recommended a roofer's quote before exchange; the seller re-covered the roof. (3) **Dev Anand, ground-floor flat in a converted 1890s house** — a damp patch at the skirting; Adaeze; the readings and a blocked air brick showed condensation, not rising damp; a small fix.
- **A day (brand.md "day" / daily routine section):** 07:45 the van is loaded (ladder, pole camera, damp meter, torch) → 08:30 first visit → 12:30 photographs uploaded from the van → 14:00 second visit or writing at the office → 17:00 Lucía confirms tomorrow's slots and replies to the day's requests.
- **What we are not (used on home #why and About):** we do not sell or arrange repairs; we do not work for the seller or the agent; a survey is not a valuation.
- No awards, no "certified/chartered by" real bodies, no guarantees ("the report finds every defect" is never said), no real brands, buildings, media or people.

---

## 1. Signature techniques (three, from Kajima https://www.kajima.co.jp/; obvious at a glance; not to be diluted)

### T1. Diagonal two-pane photo hero with a seam (Kajima first screen, `ref/kajima-first.png`, RT(e)(d))
- **Reference:** two full-height photographs abut at a hard vertical seam (64 % / 36 %, seam at x = 926 of 1425), radius 0, no frame; one tracked tagline sits over the seam; the photos are the whole statement.
- **Ours (home hero):** the photo area is the right 60 % of the hero (x 576–1440, y 72–700 at 1440 × 900) and holds **two photographs split by one diagonal seam leaning 9°**; the left edge of the photo area is cut at the same 9°, so pane A is a parallelogram and the text column sits **beside** the photo (fingerprint beside-photo). Seam = a **2 px gap showing the `#F5F6F7` ground**. Pane A ≈ 64 %, pane B ≈ 36 % of the photo area at mid-height (Kajima's 64/36). Radius 0.
- **Not to be diluted:** both diagonals visible and parallel (9° ± 1°); the seam stays a crisp 2 px pale line (not a shadow, not a gradient); the two panes are two different photographs at full height of the hero; no rounded corners, no frame, no text over the photos.
- **Inner pages (8):** Report, Findings, Visits & prices, Small commercial, Cases, About, Request, Contact (and Slot alerts) open with the **T1 inner head** (§4): text left 40 %, one photo pane right 60 % with the 9° diagonal left edge and one 2 px pale seam line crossing the photo at 72 % of its width.

### T2. Sentence-builder band (Kajima dark band, `ref/kajima-2700.png`, RT(a)(b)(f))
- **Reference:** ink band `#363434`, 100 px padding; centred white question 24 px 700; one sentence with two inline boxes: a **white** box and a **grey** box, each 248 × 62, radius 2, value centred, ▼ triangle right; under it three photo cards 356 wide, gap 16, radius 4.
- **Ours (home block 5 `#ask`):** ink `#2E2B31` band; question "What should the report tell you?"; sentence **"I am buying [ a house ▾ ] and I want to know about [ cracks ▾ ]"** — box A white `#FFFFFF` (active, ink text), box B grey `#9EA3A6` (ink text, like the reference's inactive box), both **248 × 62, radius 2, Barlow 500 20 px value + 12 px ▼ at right 24 px**. Each box is a `<details>` disclosure (not a form, no JS): open list = white panel 248 wide, 1 px `#9EA3A6`, rows 48 px, each a link. Box A options: *a flat* → `#price-1`, *a house* → `#price-2`, *a large house* → `#price-3`, *a shop or office* → `#price-4` (ids on the price-table rows). Box B options: *cracks* → `#ask-cracks`, *damp* → `#ask-damp`, *the roof* → `#ask-roof` (ids on the three cards). Below: **three photo cards 356 × (274 photo + caption)**, gap 16, radius 4 (photo top corners), photos Q1/Q2/Q3; caption on the ink band in white: title Barlow 600 22 px + 2-line text IBM Plex 15/1.7 `#D9D6DD` + link "Inside the report →" (to `#report`). Optional CSS-only enhancement: `:target` card gets a 3 px purple top rule.
- **Not to be diluted:** the band is dark ink (not a grey tint; Tsumugi lesson), full width, ≥ 100 px padding; the two boxes stay one white and one grey, the full sentence on one line at ≥ 1100 px; three photo cards, not text cards.
- **Inner pages (4, compact version on `#F5F6F7` ground: sentence in ink, box A white with 1 px `#9EA3A6` border, box B `#E7E9EC`):** Visits & prices (box A → price rows), Report (box B → ledger sections `#sec-01`…`#sec-08` subset: cracks → 01, damp → 03, the roof → 02), Findings (box B → finding anchors), Request (both boxes above the form, linking to the price row and the report section; the form itself is separate).

### T3. Enlarged-centre case strip (Kajima projects strip, `ref/kj-s3400.png`, RT(e)(f)(g))
- **Reference:** a strip of photo cards: centre card **452 px wide and taller (top 64 px higher)**, neighbours **286 px**, dimmed (white veil), cards bleed off both viewport edges; **56 px round outline arrows** sit on the strip at both sides; radius 4; heading row above.
- **Ours (home block 7 `#finds` "What a visit finds"):** five finding photographs S1–S5, **centre S3 452 × 560**, neighbours **286 × 430** (bottom-aligned with the centre, so the centre rises 130 px), gap 32, the row centred on the viewport so the outer cards S1/S5 are cut by the viewport edges (container overflow clip, no horizontal page scroll). Neighbours carry a **`rgba(245,246,247,.45)` veil** (dimmed, like Kajima); centre has none. Captions under each card (centre: Barlow 600 22 px + 2 lines; neighbours: Barlow 600 16 px, 1 line). **Arrows:** two 56 px circles, 1 px `#2E2B31` outline, `#FFFFFF` fill, 20 px arrow glyph (own SVG), at the neighbours' vertical centre, x = 154 and x = 1230 (Kajima positions); they are links to `#find-2` and `#find-4` (aria-label "Previous finding" / "Next finding"). Static layout (no autoplay, no Swiper).
- **Not to be diluted:** centre clearly bigger (≥ 1.55× neighbour width) and undimmed; outer cards cut by the viewport edge; the round arrows present.
- **Inner pages (3):** Findings (same five-card strip, top of page), Report (strip of S1–S5 under the ledger titled "Photographs from recent reports"), Small commercial (3-card version: centre S5 452, neighbours S4 / Q3 286).

### Supporting (required, not counted)
- **Heading row** (RT(b)(d), `ref/kj-s4600.png`): H2 left Barlow 600 2.625rem (42 px) lh 1.4, Latin label right Barlow 600 1rem uppercase ls .06em ink (e.g. "THE REPORT"), 1 px `#9EA3A6` rule full container width 40 px under the baseline, 64 px to the content. Used on every home section and inner page section. (Labels are block text, never CSS `content:`.)
- **Notice strip** (RT(c)(f), `ref/kj-s1200.png`): `#E7E9EC` strip, 180 px tall, inset 100 px; left column 260 px: bold label 16 px ink + Latin sub-label Barlow 600 13 px uppercase **purple `#5E5166`** (Kajima's red "INFO"); link column from x 360: one underlined line 16 px.
- **List rows with a dash marker** (Kajima news filter): active item has a 16 × 2 purple dash before it; rows separated by 1 px `#E7E9EC`; purple chevron right (own SVG, 12 px).
- **Own mark:** a 10 × 22 parallelogram leaning 9° in purple before the wordmark (same angle as the seam).

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
Kajima opens on **two full-height architectural photographs side by side**: on the left a tall timber tower standing in an open park under a wide sky, people tiny at its foot; on the right a bright planted atrium of a white building with a person walking through it. A hard vertical seam joins them; one tracked tagline crosses the seam; a small media badge floats bottom-right; the header sits transparent over the photos. **Story:** what the company builds connects to how people live — the structure outside and the life inside, seen together. **Signature motion:** on the first 250 px of scroll the two panes shrink and scatter into a loose field of differently sized photographs on pale grey (0.75 s, power1.out), each photo then drifting at a different speed (scrubbed 16 / 0 / 12 / 4 / 2 / 8 vh), with one plain statement in the middle of the field; the header switches from transparent to solid.

### (2) Our translation (same idea "the outside of the building and the life inside, read together"; same motion family; image type photo; composition forced to diagonal-split / beside-photo / card-row)
The building is a 1920s brick terraced house on a grey morning, and the person is the surveyor reading it before a buyer signs. **Pane A** (the tall vertical subject, Kajima's tower): Tomasz on a short aluminium ladder against the brick front, photographing a cracked brick lintel above a sash window, clipboard under one arm, overcast sky above the roofline. **Pane B** (Kajima's bright interior with a person): inside the same kind of house, Adaeze in a pale hallway holding a damp meter against the wall near the skirting, a torch in the other hand, soft window light. One diagonal seam joins outside and inside. Instead of a tagline over the seam, the headline sits **beside** the photographs in the text column (planned composition), and Kajima's floating badge becomes the **card row** at the hero's foot, the third card carrying the one CTA. The motion keeps Kajima's family: the two panes **drift at different parallax speeds** as the page leaves the hero, pane A settles with a slow 1.04 → 1 zoom on load, and the next block is the **scattered photo field** on pale grey (three photos of different sizes, edges touching the viewport, one plain statement in the middle) whose photos rise in with a stagger and drift at different speeds — the "scatter" told as a sequence instead of a scroll-locked timeline. The scene is kept, not dropped: outside fabric + inside reading + person at work, before you commit.

### (3) KV checklist (all implemented on the home first screen at 1440 × 900 and visible)
| # | 參考站元素 (reference element) | 我們的對應 (our counterpart) | 位置 (position, 1440 × 900) | 動態 (motion) | 用哪張圖 (image) |
|---|---|---|---|---|---|
| 1 | Hard seam between two full-height photo panes (64 / 36) | Two panes cut by one 9° diagonal seam = 2 px gap showing `#F5F6F7`; photo area's left edge cut at the same 9° | photo area x 576–1440, y 72–700; seam from (1224, 72) to (1125, 700) | panes move at different speeds: pane A `--sp-par: 6%`, pane B `--sp-par: 10%` (mobile 4 % / 6 %) | H1 + H2 |
| 2 | Tall timber tower (vertical hero subject in open air) | Surveyor on a short ladder photographing a cracked brick lintel, clipboard under one arm, overcast sky | pane A (parallelogram, ≈ 549 px wide at mid-height), subject on the pane's centre-left third | settle: figure `scale` 1.04 → 1, 1.6 s cubic-bezier(.5,1,.89,1) on load (CSS keyframe; final state under reduced motion / sp-static / editor) + parallax 6 % | H1 `hero-ladder-lintel.webp` |
| 3 | Bright atrium with a person walking (life inside) | Surveyor in a pale hallway reading a damp meter at the skirting, torch in hand | pane B (right, ≈ 266 px at mid-height, flush to the right viewport edge) | parallax 10 % (counter-speed to pane A) | H2 `hero-damp-meter.webp` |
| 4 | One tracked tagline at the seam | H1 "Read the house before you sign." beside the photo: Barlow 500 4.5rem, lh 1.05, ls −0.005em, ink; purple 64 × 3 rule under it; eyebrow + lede + CTA | text column x 80–556, H1 top ≈ y 230 | none (hero has no reveal) | — |
| 5 | Floating badge bottom-right | Card row: 3 flat cards overlapping the photo bottom by 48 px; cards 1–2 white, card 3 ink with the CTA "Request a survey →" | y 652–800, container x 67–1372 (3 × 419, gap 24) | none | — |
| 6 | Header transparent → solid on scroll, nav over photo | Centred anchor menu; header always `#F5F6F7`, its 1 px `#9EA3A6` bottom rule fades in over the first 120 px of scroll (CSS `animation-timeline: scroll()`, inside `@supports` + `prefers-reduced-motion: no-preference`; otherwise the rule is always shown) | y 0–72 | CSS scroll-driven only (no scroll listener) | — |

Supporting after the first screen (Kajima's scatter, not in the checklist because it sits below 900 px): block 3 field of three photos F1–F3, `sp-reveal--zoom` + `sp-stagger` + different `--sp-par`.

Reduced motion / `?sp-static` / editor: panes static, no settle zoom, field photos visible and still.

---

## 3. Home page

### First screen composition
**hero_composition: diagonal-split · hero_text: beside-photo · hero_footer: card-row · hero_fingerprint: diagonal-split/beside-photo/card-row**

- **diagonal-split:** Group `.nk-hero` alignfull, ground `#F5F6F7`, height 628 px at 1440 × 900 (`min(628px, calc(100vh - 272px))`, min 520). CSS grid `40% 60%`. Right cell `.nk-hero__media` (position relative, height 100 %, flush to the right viewport edge) contains two absolutely positioned wrappers, each with a **non-zero clip-path polygon on the wrapper `.nk-pane`** and inside it a Group `.sp-parallax` (never clip-path on the `.sp-parallax` element itself) holding `figure > img` (`object-fit: cover`):
  - `.nk-pane--a` `clip-path: polygon(11.5% 0, 75% 0, 63.5% 100%, 0 100%)` (9°: offset 99 px over 628 px = 11.5 % of 864), image H1, focal point 42 % 40 %, `--sp-par: 6%`.
  - `.nk-pane--b` `clip-path: polygon(calc(75% + 2px) 0, 100% 0, 100% 100%, calc(63.5% + 2px) 100%)`, image H2, focal point 50 % 45 %, `--sp-par: 10%`.
  - The 2 px gap between the polygons shows the ground = the seam. Settle zoom on `.nk-pane--a figure` only. No overlay, no gradient, no text on the photos. Not full-bleed, no text over the photo.
- **beside-photo:** left cell, padding-left 80 px (container start x ≈ 67 + 13), padding-right 20 px, flex column centred vertically. Eyebrow Barlow 600 13 px uppercase ls .12em purple "Building surveys · houses and small buildings"; 20 px; **H1** Barlow 500 `clamp(2.75rem, 5vw, 4.5rem)` (72 px at 1440) lh 1.05, ink `#2E2B31`, max 3 lines ("Read the house / before you / sign."); 24 px; rule 64 × 3 `#5E5166`; 24 px; lede IBM Plex Sans 17 px / 1.8, `#5A5660`, max-width 440 px: "Condition reports for houses and small commercial buildings within 40 km of Elsmere Quay. We spend 90 minutes to half a day on site and send the report in plain words within five working days."; 32 px; row: button **"Request a survey"** (→ `/request/`) + 24 px + text link "What a report covers" + chevron → `#report`.
- **card-row:** Group `.nk-cards` contentSize-wide container (1305: x 67–1372), 3 equal columns gap 24, each 419 × 148, **margin-top −48 px** so the cards overlap the bottom of the photo area (Kajima's floating badge), z-index above the panes, radius 0, no shadow except `0 1px 0 #E7E9EC`. Card padding 28 32; inside: label Barlow 600 12 px uppercase ls .1em purple + value Barlow 500 30 px ink + one line IBM Plex 14 / 1.6 `#5A5660`.
  - Card 1 (white): **ON SITE** · "90 min – 4 h" · "A two-bedroom house takes about two hours."
  - Card 2 (white): **REPORT** · "5 working days" · "Plain words, photographs and costed priorities."
  - Card 3 (**ink `#2E2B31`**, white text, whole card a link → `/request/`): **REQUEST** · "One short form" · "Request a survey →" (IBM Plex 600 15 px, chevron). Hover: background `#3A363E`.
  - Static: no reveal, no count in the hero.
- **Header (nav centered, exactly one top menu):** 72 px, `#F5F6F7`, sticky. Left at x 67: mark (10 × 22 parallelogram, 9°, purple) + wordmark "NOKI SURVEYORS" Barlow 600 18 px ls .1em ink. **Centre (absolutely centred in the bar):** core navigation, anchor links IBM Plex Sans 500 15 px, gap 32: Report `#report` · Findings `#finds` · Visits `#visit` · Prices `#price` · Cases `#cases` · Questions `#questions`. Right: language switcher (13 px) + button "Request a survey" (40 px tall). Below 1100 px the menu collapses to a "Menu" button (core navigation overlay). Bottom rule per KV #6.
- Bottom of the first screen at 900: card row ends y 800; 40 px gap; notice strip starts at y 840 (its top 60 px visible).
- **Saturated share** (HSL s > 0.35) of the first screen: **target ≤ 10 %, hard max 15 %** (`check-first-screen.py`; row cap 30 %). Purple `#5E5166` is s ≈ 0.11; photos overcast and graded down (brick stays muted brown, no blue sky).
- **Mobile 390:** order = header 60 px (mark + wordmark + Menu) → text column full width, padding 24 (eyebrow, H1 2.75rem 3–4 lines, lede 16 px, button full width, link) → photo area 390 × 300 with the same two polygons (percentages unchanged, so both diagonals and the seam stay) → card row stacked 3 cards full width, gap 12, **no negative margin on mobile** (margin-top 16). No vertical text, no absolutely positioned label over text, nothing overlapping.

### Block order (landing narrative; anchor ids in brackets)
Ground `#F5F6F7` unless stated. Section padding **100 px** top/bottom (RT(c)); every section opens with the heading row (§1 supporting). Containers: wide 1305, content 1100, prose 720.

| # | Block | Purpose | Layout (image/text arrangement) | Photos | Copy |
|---|---|---|---|---|---|
| 0 | Header | nav + CTA | §3 first screen | — | labels |
| 1 | Hero `#top` (T1, KV) | key visual, promise | §3 | H1, H2 | H1 + 35-word lede + 3 cards |
| 2 | Notice strip | timely note | supporting notice strip; label "Winter visits" / sub-label "NOTICE"; line "In frost or rain we check roofs from the ground and with a pole camera; the report says plainly what could not be seen." → `#questions` | — | ~30 words |
| 3 | The fabric field `#fabric` (Kajima scatter) | continues the KV motion | full width, height 860, ground; three photos placed absolutely on a 1440 frame (percent-based): **F1** 379 × 450 at x 0 (flush left edge), y 40; **F2** 518 × 330 at x 470, y 0; **F3** 182 × 513 flush to the right edge, y 150; statement centred x 520–1100, y ≈ 470: "Every house shows how it has been looked after. We write it down before you sign." Barlow 400 2.25rem lh 1.4 ink, + one line IBM Plex 16 px muted "Tomasz, Adaeze, Henrik and Ines survey about twelve buildings a week." Each photo: outer figure `sp-reveal sp-reveal--zoom` (parent `sp-stagger`), inner Group `sp-parallax` with `--sp-par` 6 % / 12 % / 9 %. Radius 0 (RT(e)). Mobile: F1 and F2 side by side 50/50 (4:5 crops), then the statement, then F3 as a 390 × 160 band (object-position center); all in normal flow | F1, F2, F3 | ~30 words |
| 4 | Why survey first `#why` | narrative | heading row "Why survey before you commit" / "WHY"; grid 12: cols 1–7 **three narrative paragraphs** IBM Plex 17 / 1.8, 55–70 words each: (a) a viewing lasts twenty minutes and is spent on light and space, not on the lintel over the bay or the stain behind the wardrobe; (b) what a survey does: a trained eye spends 90 minutes to half a day on the fabric, from the roof edge to the floor joists, and writes down what it sees; (c) why before you sign: once you commit, repairs are yours; before, they are something to talk about with the seller. Cols 9–12 aside on `#E7E9EC`, padding 32: "What we are not" + 3 lines (§0) with 16 × 2 purple dashes | — | ~200 words |
| 5 | Sentence builder `#ask` (T2) | route by concern | §1 T2 exactly; ink band alignfull, content 1100; cards Q1 (cracks), Q2 (damp), Q3 (roof), ids `ask-cracks` `ask-damp` `ask-roof`; each card text 30–40 words ("We measure the crack width, look at which way it steps and whether the lintel above it has dropped…") | Q1, Q2, Q3 | ~130 words |
| 6 | Inside the report `#report` (numbered ledger) | what a report covers | heading row "Inside the report" / "THE REPORT"; grid 12: cols 1–5 photo R1 4:5 (520 × 650), top-aligned; cols 7–12 **8 ledger rows** (§0), each row: numeral "01" Barlow 500 2.5rem purple, 72 px column · title Barlow 600 20 px + one line IBM Plex 15 / 1.7; 1 px `#9EA3A6` rule between rows, row padding 20 0; ids `sec-01`…`sec-08`; container `sp-stagger`, rows `sp-reveal sp-reveal--up`; below the ledger: ink secondary button "See the report page" → `/report/` | R1 | ~170 words |
| 7 | What a visit finds `#finds` (T3) | proof | heading row "What a visit finds" / "FINDINGS"; §1 T3 strip, ids `find-1`…`find-5`; strip wrapper `sp-reveal sp-reveal--up` (whole row, not the cards); captions: S1 "Slipped slates at a valley · 1930s semi" · S2 "Tide mark above the skirting · ground-floor flat" · **S3 (centre) "Cracked lintel over a bay window · 1920s terrace — the lintel had dropped about 4 mm; we wrote: replace before winter, ask the seller."** · S4 "Upstairs floor falling 18 mm towards the front wall" · S5 "Ponding on a felt flat roof · shop with a flat above"; right under the strip: link "All findings" → `/findings/` | S1–S5 | ~90 words |
| 8 | How long a visit takes `#visit` (parallax band) | visit length | alignfull 1440 × 600, Group `sp-parallax` `--sp-par: 10%` (mobile 6 %), photo B1 `figure > img` (person in the left half); foreground **sibling** (not in the layer): white `#FFFFFF` panel 520 wide, right x 852–1372, vertically centred, padding 48, radius 0: label "VISIT LENGTH" purple + H2 Barlow 600 2rem "How long a visit takes" + 5 rows (`dl`): Flat or small house — about 90 min · House 90–180 m² — 2–3 h · Large house — 3–4 h · Small commercial — about 4 h · Single defect or re-visit — about 45 min (times right, nowrap); line "Someone needs to let us in. You don't have to stay." Mobile: photo 390 × 280 band, panel below it full width (no overlap) | B1 | ~70 words |
| 9 | Prices `#price` | the offer | ground `#E7E9EC` band; heading row "Prices" / "PRICES"; **full-width price table** (6 rows of §0, row ids `price-1`…`price-6`, §8 rules) + note line; below, 2 columns (gap 64): left the 4-line request flow (§0) numerals Barlow 500 14 px purple; right: "One fixed price, agreed before the visit." 2 lines + **button "Request a survey"** → `/request/`. No form here. No reveal on the table | — | ~120 words + table |
| 10 | Case notes `#cases` (Kajima news list) | social proof | heading row "Before they signed" / "CASES"; left column 260 px: list "All three" (active, purple dash) · "House" · "Shop" · "Flat" (links to `#case-bell` `#case-iqbal` `#case-anand`); right column (from x 360): **3 text rows** like Kajima news rows: meta line IBM Plex 13 px muted "Terraced house · 1920s · Tomasz Wren" + title IBM Plex 500 18 px ("A cracked lintel, agreed with the seller") + 35-word summary 15 / 1.7 + purple chevron right → `/cases/#bell`; 1 px `#E7E9EC` rules; rows `sp-reveal--up` in an `sp-stagger` container | — | ~150 words |
| 11 | Who visits `#people` | trust | heading row "Who comes to the house" / "PEOPLE"; cols 1–5: 70-word paragraph (founded 2011 by Ines in Elsmere Quay; five people; one van, one ladder, one pole camera) + "A day" in 5 short timed lines (§0 day); cols 7–12: **5 staff list rows** (name Barlow 600 20 px · role 12 px uppercase purple · one line 15 px), 1 px rules; no portrait grid, no photos | — | ~160 words |
| 12 | Questions `#questions` | objections | heading row "Questions" / "QUESTIONS"; content 1100; 6 `details` rows, white `#FFFFFF` on ground, 1 px `#E7E9EC` gaps, summary Barlow 600 18 px + plus/minus glyph right, answer IBM Plex 15 / 1.8: Do I need to be there? · Do you go on the roof? (ladders to about 3 m, single-storey roofs; otherwise pole camera and binoculars; we never walk on roofs) · Do you lift floors or move furniture? (no fixed floors; carpet corners where allowed) · Is this a valuation? (no) · Who sees the report? (only you, unless you share it) · What if you find something serious? (we say so on the call and name the kind of specialist to ask, such as a structural engineer) | — | ~200 words |
| 13 | Request band `#request` + footer | the one CTA again | ink `#2E2B31` band alignfull, padding 100, content 1100, two columns: left H2 white Barlow 500 3rem "Request a survey" + 2 lines `#D9D6DD` ("Tell us the address, the type of building and the date you need the report by. Lucía replies within one working day with a fixed price and a visit slot.") + button inverted (fill `#F5F6F7`, ink text) → `/request/`; right: email, phone, hours (§0) in 15 px rows with 1 px `rgba(245,246,247,.2)` rules. Footer (light `#F5F6F7`, 1 px `#9EA3A6` top rule): wordmark + address; links Report · Findings · Visits & prices · Small commercial · Cases · About · Contact · Notes · Slot alerts · Privacy · Terms; languages; "© 2011–2026 Noki Surveyors" 12 px. **No subscribe form on home or footer**; "Slot alerts" is a text link to `/newsletter/` (if one is ever added it must be a `shippress_form_slot` newsletter slot, §9) | — | ~50 words |

**Home photo positions:** H1, H2, F1, F2, F3, Q1, Q2, Q3, R1, S1, S2, S3, S4, S5, B1 = **15 positions, 15 unique images** (≥ 8 ✓, no repeats). **Home English copy ≥ 1,000 words**, 3 narrative paragraphs ≥ 55 words in #why. The CTA "Request a survey" → `/request/` appears in header, hero, card 3, #price and #request with the same label.

### Comparison with the most recent themes (home block order)
| # | Yuka Tiles | Asayake Lodge | Shikii Mats | Zaseki Panel | **Noki Surveyors (ours)** |
|---|---|---|---|---|---|
| 1 | wordmark header, sun-edge triptych hero | framed-field hero + booking bar | anchor bar + collage hero | notice strip, photo / clay grid panel / photo, info bar | **centred nav; text beside two diagonal photo panes; overlapping card row** |
| 2 | ranges | notes | sites rail | walking the floor | **grey notice strip** |
| 3 | why the window | why the house | why a mat | how a desk is held | **scattered three-photo field with one statement** |
| 4 | borrow a sample | day in the house (sticky media) | round track | parallax band | **why survey first: 3 paragraphs + "what we are not" aside** |
| 5 | showroom parallax band | rooms | doorway band | tile directory | **dark sentence-builder band with two boxes + 3 photo cards** |
| 6 | spec sheet | quiet parallax band | trial | install table | **numbered 8-row report ledger beside a portrait photo** |
| 7 | prices | who for | price table | price band | **enlarged-centre finding strip with round arrows** |
| 8 | projects mosaic → visit → letter | rates → key-card band → letters | notes → questions → book | pilots lists → questions → stripe close | **visit-length parallax band → price table + flow → text case rows → people list → questions → dark request band** |

**Why not alike:** none of the four has a diagonal hero, a sentence-builder band, a numbered ledger or an enlarged-centre strip. Zaseki's first screen is three equal tiles with an info bar; ours is a 40/60 split with diagonal panes and floating cards. Shikii's collage hero and Yuka's triptych are full-width image rows; ours keeps text beside the photos. No booking bar (Asayake), no sticky media, no tile directory, no stripe close, no mosaic.

---

## 4. Inner pages (13 pages + 2 posts)

**T1 inner head:** Group alignfull height 420 (390: auto), grid 40 / 60. Left: heading-row style eyebrow (Latin label purple 13 px) + page title Barlow 500 3.5rem lh 1.1 + 1–2-line lede 17 / 1.8, vertically centred, padding-left 80. Right: `.nk-pane` wrapper `clip-path: polygon(11.5% 0, 100% 0, 100% 100%, 0 100%)` > Group `sp-parallax` `--sp-par: 6%` > `figure > img`; plus one decorative empty Group `.nk-seam` (2 px wide, `#F5F6F7`, height 120 %, rotated 9°, absolutely at 72 % of the pane width, `aria-hidden`). 390: title block, then pane 390 × 240 (diagonal kept). Text-only heads (Privacy, Terms, Thanks, Notes archive): eyebrow + title + heading-row rule, no photo.

| Page (slug) | T1 head photo | Content | T2 | T3 |
|---|---|---|---|---|
| The report (`report`) | R1 | the 8 ledger sections in long form (80–110 words each, anchors `sec-01`…`sec-08`); "How we write" (plain words, a photo per finding, three priority columns explained); strip "Photographs from recent reports" | ✓ box B → sections | ✓ S1–S5 |
| Findings (`findings`) | F1 | five-card strip at top; then the five findings in long form (each 100–130 words, anchors `find-1`…`find-5`, photo 3:2 beside text, alternating sides), what each usually means and what the report says | ✓ box B → finding anchors | ✓ S1–S5 |
| Visits & prices (`prices`) | B1 | full 6-row price table + note (§8); visit lengths list; travel within 40 km; how payment works (after the report, 14 days); what a survey does not include (testing services, lifting fixed floors, roof walking) | ✓ box A → price rows | — |
| Small commercial (`commercial`) | K1 | shops, offices and workshops up to 400 m², with or without a flat above; what Henrik looks at (shopfront, flat roofs, fire escape, separation between shop and flat); price row 4 repeated; Sana Iqbal case summary → `/cases/#iqbal` | — | ✓ 3-card (S5 centre, S4, Q3) |
| Case notes (`cases`) | H1 | the 3 cases in full (170–220 words each, anchors `bell`, `iqbal`, `anand`); case 1 beside S3, case 2 beside S5, case 3 beside S2 (3:2 crops); meta line (building, age, surveyor) | — | — |
| About (`about`) | A1 | founded 2011 in Elsmere Quay by Ines; "A day" (daily routine, §0); the 5 staff as list rows (name, role, two lines); "What we are not"; photo H2 (3:2 crop) beside the routine; office address and hours | — | — |
| Request a survey (`request`) — booking/enquiry page | N1 | 2-paragraph intro; compact sentence builder (T2); price summary (6 rows, compact table, §8); the 4-line flow; **contact-kind form slot** (§9) with mailto fallback "Email your survey request"; request desk hours | ✓ | — |
| Contact (`contact`) | F2 | address, phone, email, desk hours, visit hours, area within 40 km; **contact form slot** (§9) with mailto fallback "Email the request desk" | — | — |
| Notes (`notes`, role posts, empty content) | text head "Notes" / "NOTES" | Kajima-style dated rows (date 13 px + category tag + title + chevron), 1 px rules | — | — |
| Slot alerts (`newsletter`) — standalone | Q3 | "Get an email when visit slots open": what you get (at most two emails a month, only slot openings and winter notes), **newsletter form slot** (§9); not an alias of Notes | — | — |
| Privacy (`privacy`) | text head | plain text, 720 measure | — | — |
| Terms (`terms`) | text head | terms of a survey: scope (visual, non-invasive), what is excluded, payment after the report within 14 days, cancellation free until 24 h before the visit, the report is for the named client only; no guarantee wording | — | — |
| Thanks (`thanks`) | text head | "Lucía will reply within one working day." + link home | — | — |
| Post 1 "A cracked lintel is not always a structural problem" (category Findings; tags lintels, brick) | featured S3 | Tomasz on reading a lintel crack, 350 words | | |
| Post 2 "Why damp meters read high in winter" (category Field notes; tags damp, winter) | featured Q2 | Adaeze on condensation vs rising damp, 350 words | | |

Signature continuity: T1 head on 9 inner pages; T2 on 4 (Report, Findings, Visits & prices, Request); T3 on 3 (Report, Findings, Small commercial); heading rows + notice-strip style (on Visits & prices: "Winter visits" note) everywhere. Category / tag templates = Notes rows with eyebrow "CATEGORY" / "TAG"; `templates/tag.html` from archive. theme-meta screens: home → home, about → `/about/`, news → `/notes/`, article → post 1, category → Findings category, tag → tag lintels, newsletter → `/newsletter/`, contact → `/contact/`. Photo uniqueness per page holds for every row above.

---

## 5. Colour, type, components

### Colour (Kajima RT(a) roles; neutrals exact or within ±5 % lightness; accent changed with reason)
| Token | Hex | Role | Share | Source |
|---|---|---|---|---|
| `base` | `#F5F6F7` | page ground, header, seams | ~55 % | RT(a) ground `#F5F6F7` (exact) |
| `contrast` | `#2E2B31` | text, dark bands, card 3 | text + ~12 % bands | RT(a) ink `#363434` (−3 % L, hue nudged toward the purple) |
| `muted` | `#5A5660` | secondary text, meta lines | small | RT(a) ink soft `#595757` (≈ same L), 6.6:1 on base |
| `strip` | `#E7E9EC` | notice strip, price band, aside, row rules | ~10 % | RT(a) ground 2 `#E7E9EC` (exact) |
| `rule` | `#9EA3A6` | heading rules, inactive box B | hairlines | RT(a) grey rule `#9EA3A6` (exact) |
| `white` | `#FFFFFF` | cards, box A, question rows, visit panel | ~6 % | Kajima select box / cards white |
| `accent` | `#5E5166` | labels, 64 × 3 rule, numerals, CTA button, dashes, chevrons, mark | 5–8 % page, ≤ 3 % first screen | **change:** RT(a) red `#E6002D` → plan palette Edo purple `#5E5166`. Reason: the design plan fixes the purple family for this row and the note demands a quiet palette; the role (one small, sharp accent on labels and marks against grey/ink) is kept. White text on it 7.9:1. |
| `accent-dark` | `#4D4255` | button hover / focus | — | accent −5 % L |
| `on-dark-muted` | `#D9D6DD` | secondary text on ink bands | small | base mixed toward ink |
Ratio ≈ 55 ground / 12 ink bands / 10 strip / 6 white / 5–8 purple / rest photographs. No cream or beige. Photos overcast (no blue sky). First-screen saturated share target ≤ 10 %, hard max 15 %.

### Type (font_direction **sans**)
- Latin headings / labels: **Barlow** (OFL; static woff2 400, 500, 600 — Kajima's Latin labels are a condensed grotesque, RT(b)). Latin body / UI: **IBM Plex Sans** (OFL; 400, 500, 600). Files in `assets/fonts`, listed in theme-meta `fonts[].files` with licence files; family names in readme.txt.
- Stacks: heading `"Barlow", "IBM Plex Sans", system-ui, sans-serif`; body `"IBM Plex Sans", system-ui, sans-serif`.
- zh-TW heading `"Barlow", "Noto Sans TC", sans-serif` (bundled Noto Sans TC subset, 黑體, 500/700); ja heading `"Barlow", "Noto Sans JP", sans-serif` (bundled subset). CJK body (repo gate: no bundled CJK family in body): zh `"IBM Plex Sans", "PingFang TC", "Microsoft JhengHei", "Noto Sans CJK TC", sans-serif`; ja `"IBM Plex Sans", "Hiragino Sans", "Yu Gothic", "Noto Sans CJK JP", sans-serif`. **No Mincho / serif anywhere.**
- All faces through theme.json `fontFamilies` + `fontFace` (including the zh-TW / ja subsets) so the editor and the front end match; `:lang()` rules in style.css → copy `shared/inc/editor-lang.php` to `inc/` and `require_once` it. Subset with the Hokuto / Hada workaround.
- Scale (theme.json fontSizes; source in brackets): `xs` 0.75rem (12: card labels, legal) · `s` 0.875rem (14: meta, card lines) · `m` 1rem (16 body, lh 1.8 — RT(b) 16 / 1.8) · `l` 1.0625rem (17: lede, narrative) · `xl` 1.375rem (22: card titles — RT(b) card H3 22 / 700 → 600) · `2xl` 2rem (32: statement band, visit panel title) · `3xl` 2.625rem (42: H2 — RT(b) 42 / 700 / lh 1.4 → Barlow 600) · `4xl` 3.5rem (56: inner titles) · `display` **4.5rem** (72: home H1, ≥ 4.25rem ✓).
- Letter-spacing: CJK headings 0.1em (RT(b) exact), Latin headings 0.04em (0.1em is too loose on Latin bold; deliberate deviation); body 0.05em CJK (RT exact), 0.01em Latin; uppercase labels 0.06–0.12em. Sentence-builder sentence Barlow 600 24 px ls 0.05em (RT(b) 24 / 700 / 1.2 px).
- CJK: display sizes × 0.75 (H1 3.375rem), body lh 1.85; fr / de `hyphens: auto`; uppercase only on Latin labels and the wordmark (never transform CJK).

### Components (exact values)
- **Primary button (one style):** fill `#5E5166`, white IBM Plex Sans 600 15 px, height 52 (40 in header), padding 0 28, radius 2 (RT(d) select r2), no shadow; hover/focus `#4D4255`; focus outline 2 px `#2E2B31` offset 2. On ink bands inverted (fill `#F5F6F7`, ink text, outline `#F5F6F7`).
- **Secondary button** (Kajima "view all" button, `ref/kj-s4600.png`): fill `#2E2B31`, white 14 px 500, 260 × 52, chevron right 12 px at right 24, radius 0.
- **Heading row, notice strip, dash list rows:** §1 supporting.
- **Sentence-builder boxes:** §1 T2 (248 × 62, r2).
- **Strip cards:** radius 4 (RT(d) r4), arrows 56 px circles.
- **Photos:** radius 0 everywhere except T2 and T3 cards (4).
- Containers: `wideSize` 1305 px (RT(c)), `contentSize` 1100 px (RT(c) dark-band content), prose 720 px. Gutter 24 (cards), 64 (columns). Section padding 100 (RT(c)). No shadows.

---

## 6. Photos (18, Grok, one at a time; Read every one; webp ≤ 300 KB, ≤ 2000 px)

**Imagery row: photo** (stage-a IMAGERY = photo → real-photo STYLE, default). **STYLE** (identical for every image):
`Real documentary photograph, overcast soft daylight with a flat pale grey-white sky, high-key but soft exposure, muted desaturated palette of weathered brick brown, grey render, slate grey, pale stone, off-white plaster and muted green, plain journalistic framing, people at work unposed and not looking at the camera, 35mm lens look, natural detail and real wear on ordinary brick and rendered houses and small shops in an international neutral town, diverse ethnicities, realistic hands and tools; no blue sky, no strong colours, no text, no letters, no numbers, no logos, no brand names, no signage, no readable screens or papers`

Rules: meters, notebooks and cameras show no legible digits or text (regenerate if any); check hands on ladders and tools; no cut-outs (0 in the theme); no Japanese elements; first-screen photos H1/H2 must keep brick muted (re-grade or regenerate if the first-screen check exceeds 15 %).

| # | File | Subject | Composition / ratio | Used on (page → block) | Home |
|---|---|---|---|---|---|
| 1 | `hero-ladder-lintel.webp` (H1) | surveyor (man, 30s, Tomasz) on a short aluminium ladder against a 1920s brick terraced house, photographing a cracked brick lintel over a sash window with a compact camera, clipboard under one arm, overcast sky above the roofline | 4:5 portrait, subject centre-left, lintel at upper third, sky top 20 % | Home hero pane A; Case notes head | ✓ |
| 2 | `hero-damp-meter.webp` (H2) | surveyor (woman, 30s, Adaeze) in a pale hallway of an older house, crouched, holding a damp meter against the wall above the skirting, torch in the other hand, soft window light | 2:3 portrait, subject centre, wall and floorboards visible | Home hero pane B; About body | ✓ |
| 3 | `field-terrace-row.webp` (F1) | a row of brick terraced houses seen from across the street on an overcast morning, a small figure with a clipboard at one front door | 0.84 (379 × 450 → generate 4:5) | Home field; Findings head | ✓ |
| 4 | `field-sill-photo.webp` (F2) | close: hands photographing a cracked stone window sill with a compact camera, notebook in the other hand | 1.57 (3:2 generate) | Home field; Contact head | ✓ |
| 5 | `field-downpipe.webp` (F3) | tall vertical: an old downpipe on a rendered wall with a damp streak running down, full height of the wall | 0.35 (generate 9:16, crop) | Home field | ✓ |
| 6 | `ask-crack-gauge.webp` (Q1) | hand holding a plain crack-width gauge card (no markings readable) against a diagonal plaster crack above an interior door frame | 1.3 (356 × 274; generate 4:3) | Home #ask card "cracks" | ✓ |
| 7 | `ask-floorboards.webp` (Q2) | surveyor kneeling, lifting a corner of carpet by an external wall, torch on old floorboards and a damp-stained skirting | 4:3 | Home #ask card "damp"; post 2 featured | ✓ |
| 8 | `ask-pole-camera.webp` (Q3) | surveyor on the pavement raising a long pole camera toward the roof and gutter of a two-storey house, overcast | 4:3 (vertical pole in frame) | Home #ask card "roof"; Slot alerts head; Small commercial strip | ✓ |
| 9 | `report-table.webp` (R1) | kitchen table by a grey window: field notebook with sketch lines only, damp meter, compact camera, tape measure, torch, a surveyor's hands writing | 4:5 | Home #report; Report head | ✓ |
| 10 | `find-valley-slates.webp` (S1) | slipped and cracked slates in a roof valley, seen close from a pole-camera height | 286 × 430 (2:3) | Home strip; Report strip; Findings strip + body | ✓ |
| 11 | `find-tide-mark.webp` (S2) | tide-mark damp stain on plaster above a skirting in an empty room | 2:3 | Home strip; Report strip; Findings; Cases case 3 | ✓ |
| 12 | `find-lintel-crack.webp` (S3) | cracked brick lintel over a bay window, the crack stepping up through the mortar | 452 × 560 (4:5) | Home strip centre; Report strip; Findings; Cases case 1; post 1 featured | ✓ |
| 13 | `find-floor-level.webp` (S4) | spirit level on sloping floorboards of an empty upstairs room, window light | 2:3 | Home strip; Report strip; Findings; Small commercial strip | ✓ |
| 14 | `find-flat-roof.webp` (S5) | ponding water on a felt flat roof behind a small shop with a flat above, overcast | 2:3 | Home strip; Report strip; Findings; Small commercial strip centre; Cases case 2 | ✓ |
| 15 | `visit-ladder-walk.webp` (B1) | Tomasz walking along a terrace pavement carrying a short ladder on his shoulder, bag over the other, overcast; person in the left 40 %, quiet brick and sky right | 2.4:1 wide | Home #visit band; Visits & prices head | ✓ |
| 16 | `about-team-table.webp` (A1) | five people (diverse, 30s–50s) around a long office table with drawings and a laptop closed, relaxed, grey window light | 3:2 | About head | — |
| 17 | `commercial-shopfront.webp` (K1) | two-storey small commercial building, shop below and flat above, a surveyor with a clipboard looking up at the fascia, overcast street | 3:2 | Small commercial head | — |
| 18 | `request-desk.webp` (N1) | request desk: a woman (40s, Lucía) on the phone at a tidy desk by a window, paper diary closed, plant | 3:2 | Request head | — |

15 on the home page, 18 in total (12–18 ✓). Per-page uniqueness verified in §4 (e.g. Small commercial uses K1 head + S5 / S4 / Q3 strip; Findings uses F1 head + S1–S5).

---

## 7. Motion and scroll effects (sp-scroll copied unchanged; 3 effects incl. parallax)

| Effect (class) | Where | Kajima source (stage-a) | Trigger / timing / easing (ours) |
|---|---|---|---|
| `sp-parallax` (required) | Home hero pane A (`--sp-par: 6%`, mobile 4 %) and pane B (`10%`, mobile 6 %); home field F1 / F2 / F3 (`6%` / `12%` / `9%`, mobile 4 / 8 / 6 %); home band B1 (`10%`, mobile 6 %); inner T1 heads (`6%`) | scrubbed drift of the scattered photos at different speeds (16 / 0 / 12 / 4 / 2 / 8 vh, scrub 0.1, linear) | sp-scroll CSS scroll-driven (`animation-timeline: view()`), IO + translate3d fallback; linear; foreground never inside the moving layer; mobile values via media query on `--sp-par` |
| `sp-reveal sp-reveal--zoom` + parent `sp-stagger` | Home field F1–F3 outer figures only | panes shrink and scatter (ScrollTrigger `top top` → +=250 px, 0.75 s, power1.out) | IO trigger (sp-scroll), section sets `--sp-dur: .75s; --sp-ease: cubic-bezier(.5,1,.89,1)` (power1.out ≈ RT(g)); stagger 0.12 s steps |
| `sp-reveal sp-reveal--up` + parent `sp-stagger` | #report ledger rows, #finds strip wrapper (whole row), #cases rows; inner: Report sections, Findings long-form items, Notes rows | heading line 2 fade-in (0.75 s, power1.out) | `--sp-dist: 16px; --sp-dur: .75s; --sp-ease: cubic-bezier(.5,1,.89,1)` |

- **Hero:** no `sp-reveal`, no `sp-count`. Pane A settle zoom is a theme CSS keyframe on the figure (load-time), selectors start with `html.sp-js:not(.sp-no-motion)` inside `@media (prefers-reduced-motion: no-preference)`; header rule fade is CSS scroll-driven inside `@supports (animation-timeline: scroll())` and the same media query.
- Not copied from Kajima: scroll lock, scroll-locked shrink timeline, header blend modes, Swiper autoplay. No own scroll listeners, no GSAP/AOS/Lenis/jQuery.
- No reveal on forms, price table, legal text, header, footer, the sentence-builder band, or strip cards inside the mobile scroll-snap row (reveal only on the strip wrapper).
- Reveal count ≤ 60 % of home blocks; verify with `check-parallax.mjs` (≥ 6 px desktop and mobile, 0 under reduced motion; ≥ 3 reveals hidden before entry; nothing transparent at the bottom with `?sp-motion`).

---

## 8. Responsive rules (hard)
- **390 px first screen:** stacked as §3 Mobile; no vertical text, no absolutely positioned labels over text; the cards never overlap the photo or the text on mobile.
- No horizontal overflow at 390 / 800 / 1280: hero media, field and strip clip their own overflow (`overflow: clip`, not hidden on sticky parents).
- **Price table:** at ≥ 782 px it is **full container width** (1100 on home, 1100 on Visits & prices and Request), `width: 100%`, `table-layout: auto`; columns: survey 22 % · covers auto · on site 120 px nowrap · **price `white-space: nowrap; text-align: right`, min-width 120 px**, never clipped; no fixed widths summing over 100 %.
- **Every table under 782 px stacks:** each row becomes a block (survey bold on its own line, covers, then "on site" and price on one line, price right-aligned), `thead` visually hidden; no horizontal scroll. Same for the visit-length `dl` (time drops under the label below 390 if needed).
- **Sentence builder < 1100 px:** sentence wraps into lines: "I am buying" / box A (full width up to 320) / "and I want to know about" / box B; the three cards become 1 per row (photo 16:10); open list panels stay inside the viewport.
- **Strip < 782 px:** horizontal scroll-snap row (`scroll-snap-type: x mandatory`), cards 78 vw, centre emphasis dropped (all undimmed, equal size), arrows hidden; no reveal on the cards.
- **Field < 782 px:** §3 block 3 mobile layout; no absolute positioning.
- Ledger, cases, people: 2 columns → 1 below 900 px. Visit band: panel below the photo below 900 px.
- Five languages: German/French lines may wrap; headlines use `max-width` in ch; buttons `min-height` not fixed height; card values wrap, never truncate.

---

## 9. Forms (form contract v1 — `steps/form-contract-v1` exists)
- Copy `pipeline/assets/forms/shippress-forms.php` → `inc/`, CSS + editor JS → `assets/`, require from functions.php; dynamic `shippress_form_slot` blocks only; never a fake form, never a theme mail or subscribe backend, never hard-depend on a plugin, never decide the plugin at import time. **Forms are never on the home page (first screen or elsewhere) and never revealed.**
- **Request a survey** (`/request/`, the booking/enquiry page): PHP pattern calls `shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) )` below the flow and price summary; `$fallback` = `ob_start()` buffered literal mailto button "Email your survey request" → `mailto:hello@noki-surveyors.example?subject=<request subject>` + line "Tell us the address, the type of building and the date you need the report by. We reply within one working day." Never a link to `/contact/` or `/request/` itself.
- **Contact** (`/contact/`): slot `kind => contact`; fallback mailto button "Email the request desk", same address and its own subject.
- **Slot alerts** (`/newsletter/`, standalone, not an alias of Notes): `shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'hello@noki-surveyors.example', 'label' => forms_email, 'submit' => forms_subscribe, 'notice' => forms_mail_notice, 'subject' => forms_mail_subject ) )`. Without plugins it shows a required email field + submit as a native mailto POST with the entered address, and the notice says clearly that this opens the email app and that the subscription is not complete until we reply. Plugin order: MailPoet (explicit id) → Mailchimp for WP → CF7 / WPForms only via an explicit dedicated newsletter form id (never reuse the contact form).
- **Fields (all forms, documented in readme / brand; the theme does not create plugin forms):**
  - Request (CF7 / WPForms recommended): name*, email*, phone, property address*, building type* (flat or small house up to 90 m² / house 90–180 m² / large house / small commercial / single defect / re-visit), approximate age (before 1919 / 1919–1945 / 1945–1980 / after 1980 / don't know), report needed by* (date), who lets us in (agent / seller / tenant / me), main concern (cracks / damp / roof / other), message, consent* ("I agree that Noki Surveyors may reply about this request."); submit "Send request".
  - Contact: name*, email*, message*, consent*; submit "Send message".
  - Slot alerts: email* (+ consent line in MailPoet / MC4WP forms); submit "Get slot alerts".
- **States:** focus = 2 px outline `--sp-form-focus` offset 2 px on every input, textarea, select, checkbox/radio and submit; error = text + 1 px border in `--sp-form-error` with the message under the field (never colour alone); success = message block with 1 px border `--sp-form-success` and the text "Thank you. Lucía will reply within one working day." (contact) — the native mailto fallback never claims success.
- **Tokens (light, all three pages sit on `#F5F6F7`):** `--sp-form-accent: var(--wp--preset--color--accent)` `#5E5166`; `--sp-form-on-accent: #FFFFFF`; `--sp-form-radius: 2px`; `--sp-form-focus: #2E2B31`; `--sp-form-surface: #FFFFFF`; `--sp-form-text: #2E2B31`; border 1 px `#9EA3A6`; labels IBM Plex 600 14 px ink; error `#A3263A`; success `#3E6B4F`. **Dark variant** (`.has-contrast-background-color` / ink band, if a form is ever placed there): labels `#F5F6F7`, surface `#FFFFFF`, field text `#2E2B31`, accent `#F5F6F7`, on-accent `#2E2B31`, focus `#C9C1D0`, error `#F2B8C0`, success `#CFE3D5`. Scoped to CF7, WPForms, MailPoet, MC4WP (and Jetpack) classes and the slot fallback only; no global `input` / `form` selectors.
- **i18n (five languages, en, zh-TW, ja, fr, de):** semantic keys first in `inc/i18n/en.php`: `forms_email` "Email address", `forms_subscribe` "Get slot alerts", `forms_mail_notice` "This opens your email app with your address filled in. Send it to get slot alerts; you are not on the list until we reply.", `forms_mail_subject` "Slot alerts: Noki Surveyors", `request_email_button` "Email your survey request", `request_mail_subject` "Survey request", `request_fallback_note`, `contact_email_button` "Email the request desk", `contact_mail_subject` "Message for Noki Surveyors"; extract with `L10N_SEMANTIC=1`; localise (not literal translation) in all five, including dynamic block attributes; check rendered label, button, notice and subject per locale. Gates: `form-runtime-check.php` per locale and `repo-gates.sh forms`; then real CF7 at 390 px and desktop, light and dark, without submitting.

---

## 10. Similarity to the reference (target 80 %)
All values from `reference-tokens.md`; photographs and copy are our own; no Kajima assets, text or logo.

| Dimension | Kajima value (token) | Noki value |
|---|---|---|
| Ground / strip / rule | `#F5F6F7` / `#E7E9EC` / `#9EA3A6` (RT(a)) | identical |
| Ink / ink soft | `#363434` / `#595757` (RT(a)) | `#2E2B31` / `#5A5660` (−3 % L, ≈ same) |
| Accent | red `#E6002D`, labels only, < 1 % (RT(a)) | Edo purple `#5E5166`, labels / marks / CTA, 5–8 % (plan palette) |
| Dark band | `#363434`, 100 px padding, white 24 / 700 question (RT(a)(b)(c)) | `#2E2B31`, 100 px, white 24 px Barlow 600 ls .05em |
| Sentence boxes | white + grey `#9EA3A6`, 248 × 62, r2, ▼ (RT(f)) | identical sizes and colours, `<details>` links |
| Band cards | 3 × 356, gap 16, r4, ratio 1.3 (RT(c)(e)) | 3 × 356, gap 16, r4, photo 356 × 274 |
| Hero panes | two full-height panes 64 / 36, hard vertical seam, r0 (RT(e)) | two panes ≈ 64 / 36, 9° diagonal seam 2 px, r0 (planned diagonal-split) |
| Hero title | ~36 px light, tracked, over the seam (RT(b)) | 72 px Barlow 500 beside the photo (≥ 4.25rem rule; beside-photo) |
| Badge | floating white card bottom-right 255 × 70 (RT(f)) | card row of 3 × 419 × 148 overlapping the photo by 48 px |
| Scatter field | 6 photos, sizes 278 × 270 … 182 × 513, edges touching viewport, centre statement (RT(e)) | 3 photos 379 × 450, 518 × 330, 182 × 513, edges touching, centre statement |
| Drift | scrub, 16 / 0 / 12 / 4 / 2 / 8 vh (RT(g)) | `--sp-par` 6 / 10 / 6 / 12 / 9 / 10 % |
| Hero timing | 0.75 s power1.out (RT(g)) | reveals 0.75 s cubic-bezier(.5,1,.89,1) |
| Strip | centre 452, neighbours 286 dimmed, 56 px round arrows, r4 (RT(e)(f)) | identical widths, veil .45, 56 px arrows, r4 |
| Heading row | 42 / 700 / lh 1.4 / ls .1em, Latin label right, 1 px `#9EA3A6` (RT(b)(d)) | 42 / 600 / lh 1.4 / ls .04em Latin (.1em CJK), label right, same rule |
| Body | 16 / 400 / ls .05em / lh 1.8 (RT(b)) | 16 / 400 / lh 1.8, ls .05em CJK, .01em Latin |
| Notice strip | `#E7E9EC`, 226 tall, inset 100, label col 260, link from 360, red Latin sub-label (RT(c)(f)) | `#E7E9EC`, 180 tall, inset 100, col 260, link from 360, purple sub-label |
| Containers / padding | 1305 container, 1100 band content, 100 px sections (RT(c)) | wideSize 1305, contentSize 1100, 100 px |
| Radius / shadow | 0 photos, 4 cards, 2 boxes; no shadows (RT(d)) | identical |
| Imagery | documentary architecture photography, ~90 % of image area (RT(e)) | documentary survey photography, overcast (no blue sky, quiet palette) |

---

## 11. Home acceptance checklist
1. First screen at 1440 × 900: centred-menu header; text column (eyebrow, H1 72 px Barlow, purple 64 × 3 rule, lede, CTA) **beside** a 60 % photo area with two panes split by a 9° diagonal 2 px pale seam and a 9° left edge; 3-card row overlapping the photo bottom by 48 px, card 3 ink with the CTA; fingerprint diagonal-split/beside-photo/card-row; no text on photos; not full-bleed.
2. All 6 KV checklist rows visible on the first screen; H1 / H2 are the ladder-lintel and damp-meter photographs.
3. Exactly one top menu (anchors `#report #finds #visit #price #cases #questions`), every anchor id exists; "Request a survey" → `/request/` in header, hero, card 3, #price, #request.
4. Blocks in the §3 order; notice strip, scattered field, dark sentence-builder band (white + grey 248 × 62 boxes, 3 photo cards), 8-row ledger, enlarged-centre strip with round arrows, parallax visit band, price table, text case rows, people list, questions, dark request band.
5. 15 unique photos on home, 18 in the theme, 0 cut-outs, no readable text in any photo.
6. Price table: 6 rows, full width at ≥ 782 px, price nowrap right-aligned and not clipped at 800 and 1280; stacked at 390; same numbers as §0 on Visits & prices, Request and in all five languages.
7. ≥ 1,000 English words on home (≥ 250 hard), 3 narrative paragraphs ≥ 55 words in #why.
8. Parallax measurable in hero panes, field and band B1 (≥ 6 px desktop and mobile, 0 under reduced motion); ≥ 3 reveals hidden before entry and finished after; nothing transparent at the bottom with `?sp-motion`; hero has no reveal.
9. First-screen saturated share ≤ 15 % (target ≤ 10 %); largest type ≥ 4.25rem; Barlow / IBM Plex Sans / Noto Sans TC / JP loaded via theme.json in editor and front end.
10. 390 px: no horizontal overflow, no overlapping text, no vertical labels, cards not overlapping; auto-gates pass.
11. No form on home; Request and Contact (contact slots + mailto fallback) and Slot alerts (newsletter slot with email + submit) work without plugins.
12. T1 head on ≥ 4 inner pages, T2 on 4, T3 on 3 (checked at stage 2).
