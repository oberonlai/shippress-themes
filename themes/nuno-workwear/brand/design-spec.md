# Nuno Workwear: design spec (stage 1, binding for implementation)

Slug `nuno-workwear`, row b12-3, type **business** (workwear and safety-clothing shop; WooCommerce declared compatible, not required; the site must work fully without it). Archetype card-mosaic · nav split · first screen top/bottom halves · page structure spec-catalogue. Font direction **sans**.
References (S5-Style, apparel/manufacturing): **main https://saab-group.jp/** (denim processing plant), **secondary https://occkwork.com/** (hairline column grid, white band over photo). All numbers below come from `reference-tokens.md` (cited as `tok (a)…(g)`). We borrow structure, technique, colour relationships, motion and the key-visual concept. No photos, text, logos or page copy are taken from either site.

Fixed brand facts (every page, every language, no variants):
- **Nuno Workwear**, founded **2009**, shop + repair workshop at **Rijnhaven Works, Unit 4, Kadeweg 18, 3072 Rotterdam, Netherlands** (fictional address). Currency **EUR** in all five languages.
- Hours: **Mon–Fri 07:00–18:00, Sat 08:00–13:00, Sun closed** ("we open before the first shift").
- Phone **+31 10 555 0142**, email **shop@nunoworkwear.example**.
- Sizes **XS–4XL**; leg lengths **30 / 32 / 34 / 36**; women's cut **XS–2XL**.
- Crew terms: **10% off crew orders of 10 garments or more**; sample kit in **5 working days**; crew order delivered **10 working days** after the sample kit is approved; free crew fitting on site **within 30 km** of the shop.

---

## 1. Signature techniques (three, obvious at a glance; do not dilute)

### S-A. Giant two-line uppercase headline set across the band/photo seam (saab hero "WE ARE / SAAB")
- **Reference:** saab-group.jp first screen. Jost 500 at **288px ≈ 20vw**, line-height 1.0, ls .9px, uppercase, cream `#FEFAEF`, two lines in a 1083×576 box at x 171 / y 162 over a full-bleed plant photo; a small JP tagline (24px, 900) sits right of line 2 (tok (b)). The type is the composition: it fills two thirds of the screen width.
- **Ours (home):** line 1 **"MADE"** in ink on the pale top band, bottom-aligned to the seam; line 2 **"FOR SHIFTS"** in cream `#F3F2EF` over the photo, its cap top 0.12em below the seam. Albert Sans **500**, `font-size: clamp(4.25rem, 11.5vw, 11rem)` (1440 → 166px; 1280 → 147px), line-height **1.0**, letter-spacing **0.005em** (tok (b) .9px/288px), uppercase, left edge on guide 1 (x = container left, 120px at 1440). Line 2 is wider than line 1 (as saab's longer line). Spec tagline right of line 2 (see §3).
- **Inner pages:** every page head repeats the device at a smaller scale: ground band with eyebrow + line 1 (ink) and a 16:5 full-bleed photo strip with line 2 (cream) crossing in. Size `clamp(4.25rem, 8vw, 7.5rem)`, same weight/leading. (Heads in §4.)
- **Must not be diluted:** never under 4.25rem on desktop; never one line; never centred; line 2 must actually sit on the photo (not on the band); no text box or scrim behind the letters (the photo is graded dark enough at its top 30%: overlay `linear-gradient(to bottom, rgba(31,29,27,.38), rgba(31,29,27,0) 45%)` only).

### S-B. Dashed column guides behind every page, content and card mosaic snapped to them (saab 4 dashed guides + occkwork 5 hairline columns)
- **Reference:** saab draws 1px dashed vertical lines at 4 x positions across the whole page (`rgba(254,250,239,.1)` on dark, ink at ~.1–.2 on light), fixed, behind content, and section dividers are 1px dashed horizontal (`saab-service.png`). occkwork snaps every block to 5 equal 288px columns with 1px `#ECECEC` lines (tok (a),(f)).
- **Ours:** 5 vertical guides = the 1200px container's left edge, 25%, 50%, 75%, right edge (at 1440: x 120 / 420 / 720 / 1020 / 1320), i.e. 4 equal 300px columns. Implement once as a fixed overlay: `body::after { position: fixed; inset: 0; pointer-events: none; z-index: 1; }` with five 1px-wide backgrounds, each `linear-gradient(to bottom, rgba(31,29,27,.14) 0 4px, rgba(243,242,239,.16) 4px 8px)` sized `1px 8px`, `repeat-y` (two-tone dashes: visible on both ground and ink bands, like saab). Horizontal section dividers: `border-top: 1px dashed rgba(31,29,27,.22)` (on ink: `rgba(243,242,239,.18)`). ≤781px: 3 guides (24px, 50%, right 24px). Guides are decoration: `aria-hidden`, no layout shift, no horizontal overflow.
- **Card mosaic on the guides (archetype card-mosaic):** the trade catalogue cards, price-list columns, order steps and footer columns all start and end exactly on guide lines. Cards: radius **0**, no shadow, 1px dashed border `rgba(31,29,27,.22)` on top only, photo radius 0 (tok (d) photos radius 0).
- **Must not be diluted:** guides visible at 100% zoom on every page (not opacity < .1), dashed (not solid), and the mosaic edges must coincide with them (±2px at 1440 and 1280).

### S-C. Ground ↔ ink band rhythm with text-colour flip; full-bleed photo opening from a centred box (saab Sustainability)
- **Reference:** saab alternates cream ground and deep ink full-bleed bands (~35% of the page), heading/body flip to cream on dark; the sustainability photo starts as a centred 50% box (clip polygon 25%→0) and opens to full bleed with a dark overlay (tok (a),(g); `saab-sustain-dark.png`, `scroll-saab-zoommask-*`).
- **Ours:** ink bands `#1F1D1B` (same colour as body text, exactly saab's relationship text = dark base). Home has two ink bands (#4 "On the floor", #8 "How to order") plus the footer, ≈ 30% of page height. In #4 the full-bleed photo P10 sits inside the band with overlay `rgba(31,29,27,.55)`, revealed with `sp-reveal--mask` (closest sp-* to the opening; see §7), and a centred 50%-width inner frame (1px dashed cream at .35) marks the "box" it opens from. Text in ink bands is cream `#F3F2EF`, eyebrow `#E39A62` (accent lightened for dark ground), H2 cream.
- **Inner pages:** each page has one ink band (listed in §4).
- **Must not be diluted:** ink is `#1F1D1B` (not a mid grey); band is full-bleed; at least two ink bands on home; flip is complete (no ink text on ink).

### Supporting: heading system (saab service header, not counted)
Parenthesised eyebrow `(CREW ORDERS)` Albert Sans 600 1.125rem uppercase ls .04em accent `#A9521D`; under it H2 uppercase Albert Sans 600 **2.875rem / 1.38** ls .028em in accent `#A9521D` (saab H2 46px/63.5px in accent, tok (b)); on the right (from guide 3) a 1rem lead (max 2 lines) and an outline button. Buttons: **62px tall, radius 10px, padding 16px 20px, 2px solid** ink (filled = ink ground, cream text; outline = transparent), a 1px vertical divider 28px tall at 64% of the width and an arrow `→` right (tok (d)). Round enquiry button **58px circle**, 1px border, bg `rgba(255,255,255,.1)` on photo / `rgba(31,29,27,.04)` on ground.

### Continuation to inner pages (≥ 4 required; all listed pages carry all three)
| Page | S-A page head (line 1 / line 2 + strip photo) | S-B guides + mosaic | S-C ink band |
|---|---|---|---|
| Catalogue | "BY / TRADE" + P02 | 5-trade mosaic (P05–P09) + garment spec cards | "Fabrics we stock" band with P18 (mask) |
| Fabrics & specs | "SIX / CLOTHS" + P18 | 6 fabric cards on 3 guide columns (2 rows) | "Wear test" band, text only + numbers |
| Fit & sizing | "FIT / NOTES" + P11 | size table columns aligned to guides | "Book a fitting" band with P16 (mask) |
| Crew orders | "CREW / ORDERS" + P13 | 4 order steps on the 4 columns | "Reorder by crew sheet" band with P03 (mask) |
| Repairs & re-proofing | "MEND / AND PROOF" + P10 | price list columns on guides | "Autumn re-proofing" band with P01 (mask) |
| Crew stories | "CREW / STORIES" + P03 | 3 story rows, text on col 1–2, photo col 3–4 | closing band "Your crew next" text only |
| About | "SINCE / 2009" + P16 | people list rows: name col 1, role col 2, line col 3–4 | "The workshop" band with P10 (mask) |
| Visit & contact | "VISIT / THE SHOP" + P16 | address / hours / phone in columns 1–3 | ink band with hours repeated large |
| Journal (index, single) | "SHOP / NOTES" + P18 | post cards on guides (2 across, first large) | footer only (index) |

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
saab-group.jp opens on a **full-bleed documentary photograph inside the denim processing plant**: blue and orange industrial washers, silver ducting overhead, one worker in the middle distance, heaps of washed jeans in the foreground left and right. A **huge cream two-line headline "WE ARE / SAAB"** is laid over the photo, with a small JP line ("with us, it can change") tucked right of line 2; dashed guides and a round contact button frame it. **Story:** a working plant where people handle real garments by hand and machine — honest, physical, close to the cloth. **Signature motion:** the headline lines rise out of a line mask on load (≈1.2s, power4.out); the photo slides cross-fade slowly (opacity 2s, cubic-bezier(.25,1,.5,1)); further down, photos wipe up and the dark band opens from a centred box.

### (2) Our translation (same composition, motion concept and image type)
Nuno Workwear is a shop for crews who need clothes that last a shift. The first screen is **a documentary photograph inside our shop-workshop before opening**: waxed jackets hung on a timber rail, worn safety boots lined on a heavy timber bench, folded canvas trousers stacked in the foreground corners, a fitter in the middle distance — the same "real garments, real workroom, people at work" story, grainy and slightly under-lit like saab. The photograph fills the **bottom half full-bleed** (occkwork's top/bottom halves), the giant headline **"MADE / FOR SHIFTS"** straddles the seam (line 1 on the pale band, line 2 over the photo, as saab's type over plant photo), and a short spec tagline sits right of line 2 like saab's JP line. Motion: line-mask rise on load, slow 2s cross-fade between three bench/rail scenes, parallax on the photo layer. Image type: **photo** (documentary).

### (3) KV checklist (each item implemented and visible on the first screen at 1440×900)
| # | 參考站元素 | 我們的對應 | 位置 | 動態 | 用哪張圖 |
|---|---|---|---|---|---|
| 1 | Full-bleed documentary plant photo (machines, worker, cloth) | Full-bleed workshop photo: waxed jackets on a timber rail, boots on a bench, fitter mid-distance | bottom half, y 392→900, x 0→100% | `sp-parallax` `--sp-par: 8%` on the layer + CSS cross-fade P01→P02→P03, 2s fade every 7s | P01 (first, static frame), P02, P03 |
| 2 | Giant two-line headline "WE ARE / SAAB", cream, 288px | "MADE" (ink, band) / "FOR SHIFTS" (cream, photo), Albert Sans 500 clamp(4.25rem,11.5vw,11rem) | left on guide 1 (x 120); line 1 baseline 24px above seam; line 2 cap top 20px below seam | line-mask rise on load: spans translateY(105%)→0, 1.2s cubic-bezier(.23,1,.32,1), line 2 delay .15s | — (type) |
| 3 | Small JP tagline beside line 2 | Spec tagline "12 oz duck · 8 oz waxed cotton · XS–4XL" Manrope 700 1.125rem/1.5 cream, max-width 190px, 2–3 lines | right of line 2, right edge on guide 5 (x 1320), bottom aligned to line 2 baseline | fade in 0.6s after headline (delay 1.2s) | over P01 |
| 4 | Heaps of washed denim, foreground left and right | Stacks of folded canvas trousers (left) and a pile of waxed jackets (right) in the lower corners of the photo | photo foreground corners | static within the parallax layer | P01 (composition requirement) |
| 5 | Coloured machine blocks (blue/orange) behind the worker | One small hi-vis/orange detail (a soft-shell on a peg) mid-right; everything else charcoal, indigo, tan | photo mid-right, ≤ 6% of the frame | — | P01, P03 |
| 6 | Round contact button top right + dashed guides over the photo | Round 58px enquiry button (envelope icon) right end of the split nav; 5 dashed guides run over band and photo | header right x 1320; guides full height | guides static; button hover fill .3s cubic-bezier(.4,.4,0,1) | — |

Images P01–P03 are in the image list (§8). The first frame (P01) is what screenshots and the saturation check see.

---

## 3. Home page

### Header (split nav; saab nav type, occkwork white top band)
Height **80px** (tok (c) `--headerHeight`), ground `#F3F2EF`, bottom 1px dashed `rgba(31,29,27,.22)`. Left group (from guide 1): Catalogue · Fabrics · Fit · Repairs. Centre: wordmark "NUNO WORKWEAR" Albert Sans 700 1.25rem ls .12em. Right group (ending before the round button): Crew orders · Stories · Contact, then the language switcher (`EN | 中 | 日 | FR | DE`, 0.875rem 700, tok (b) lang links 14px 700), then the 58px round enquiry button (mailto/contact). Nav links Albert Sans 600 **1rem** uppercase ls .02em (saab 18px; one step smaller because we carry 7 links + 5 languages). Sticky; after 100px scroll background stays ground and the bar gains `box-shadow: 0 1px 0 rgba(31,29,27,.12)`, transition .6s cubic-bezier(.25,1,.5,1) (tok (g) header). <960px: wordmark left, round button + two-bar menu button right, overlay menu on ground. Only one top menu.

### First screen (1440×900; top/bottom halves)
- **Top band** y 80→392 (312px), ground `#F3F2EF`. Left: eyebrow `(WORKWEAR & REPAIRS · ROTTERDAM, SINCE 2009)` accent, 1rem 600, at y ≈ 120; line 1 "MADE" bottom-aligned 24px above the seam. Right column (guide 4 → guide 5, x 1020–1320): lead "Trousers, jackets, aprons and boots chosen by trade, fitted on your crew, embroidered and mended in our own workshop." Manrope 1.0625rem/1.75, then two buttons stacked 12px apart: filled "See the catalogue" and outline "Book a crew fitting" (both 62px, radius 10, divider + arrow). Under them hours line 0.8125rem: "Open Mon–Fri 07:00–18:00 · Sat 08:00–13:00".
- **Bottom half** y 392→900+ (`min-height: calc(100svh - 392px)`, min 480px), full-bleed photo layer (P01/P02/P03 stacked, cross-fade), top gradient overlay as S-A. Line 2 "FOR SHIFTS" over it, spec tagline right (KV #3). A thin "Scroll" cue: 1px × 56px cream line at guide 3, bottom 24px, label 0.75rem above.
- Saturated area ≤ **15%** (`check-first-screen.py`): photo grade desaturated (orange detail small), accent only on eyebrow text; buttons are ink, not accent. Row quality_gate cap 30%; reference saab ≈ 20% → ours target 6–12%.
- Forbidden: table, form, search box, large centred word, scrim box behind headline.
- **Mobile 390×844:** no absolute positioning of text on the photo. Order: header 64px → band: eyebrow, line 1 "MADE" and line 2 "FOR SHIFTS" **both in ink, stacked, in normal flow** (`font-size: 15vw` ≈ 58px, lh 1.0) → photo full-bleed 4:3 (`sp-parallax`, `--sp-par: 5%`) → tagline (ink, one line) → lead → buttons full width. No vertical text, no rotated labels, no overlap.
- Hero gets **no** `sp-reveal`. The load animation is CSS only, selectors start with `html.sp-js:not(.sp-no-motion)`, inside `@media (prefers-reduced-motion: no-preference)`; `?sp-static` / reduced motion / no-JS / editor → final state, and only P01 shown (no cross-fade).

### Block order
| # | Pattern | Purpose | Layout and photos | Copy (en) |
|---|---|---|---|---|
| 1 | `front-hero` | KV, entry | §3 first screen; P01, P02, P03 | ~40 words |
| 2 | `front-shop` | who we are | Ground. Heading system eyebrow `(THE SHOP)`. Left cols 1–2: statement Albert Sans 600 **2rem/1.6** ink ("We fit clothes on the people who wear them to work, then keep them going.") + 2 paragraphs Manrope 1rem/1.875. Right col 3–4: portrait P04 ratio **0.85** (tok (e) about pic1), radius 0, `sp-reveal--wipe`; caption 0.8125rem "Leila pinning a hem, Saturday fitting." Padding 125/142 (tok (c) about). | 110 words |
| 3 | `front-trades` | **catalogue by trade — card mosaic (S-B)** | Ground. Heading system: `(CATALOGUE)` / H2 "BY TRADE" left; lead + outline "Full catalogue" right. Mosaic on 4 guide columns, 2 rows: card A cols 1–2 × rows 1–2 (P05 Build & carpentry, 4:5), B col 3 (P06 Kitchen, 4:3), C col 4 (P07 Workshop, 4:3), D col 3 (P08 Grounds, 4:3), E col 4 (P09 Warehouse, 4:3). Each card: photo, trade name Albert Sans 600 1.5rem uppercase, 3 spec rows (dashed separators): "Fabric · Weight · From" with values (e.g. "Cotton duck · 12 oz · €89"). Gap 0 horizontally (cards share guide lines), 32px inner padding. `sp-stagger` + cards `sp-reveal sp-reveal--up`. | 5 × 25 words |
| 4 | `front-floor` | **ink band (S-C)**: repairs & re-proofing story | Full-bleed ink band, padding 300/207 (tok (c) sustainability). Inside: full-bleed P10 with overlay .55, `sp-reveal--mask`, dashed centred 50% frame; over it at cols 1–2: eyebrow `(ON THE FLOOR)` light accent, H2 cream "MENDED, NOT REPLACED", 2 paragraphs cream; outline button cream border "Repairs & prices". | 80 words |
| 5 | `front-fit` | fit notes + embroidery (spec rows) | Ground, dashed divider top. Two saab service rows: text **456px** left (cols 1–2) / photo **636px** right (cols 2.5–4, ratio **1.63**, tok (e) service rows), gap 108. Row 1 `(FIT NOTES)` H3 "Sized for kneeling, climbing, lifting" + P11, `sp-reveal--wipe`. Row 2 `(NAMES & LOGOS)` H3 "Embroidered in the back room" + P12, `sp-reveal--wipe`. H3 Albert Sans 600 2rem/1.375. Body + text link "Fit & sizing →" / "Crew orders →". | 2 × 60 words |
| 6 | `front-prices` | repairs & finishing price list | Secondary band `#E4E2DD` full bleed. Heading system `(PRICE LIST)` / "WORKSHOP PRICES". Table full container width (1200), 7 rows (§9), columns: service (cols 1–2), detail (col 3), price (col 4, right-aligned, `white-space: nowrap`, Albert Sans 600 1.25rem). Rows separated by 1px dashed. Note line: "Crew fittings within 30 km are free. 10% off crew orders of 10 garments or more." No sp-reveal. | 40 words + rows |
| 7 | `front-crews` | 3 crew stories | Ground. Heading system `(CREW STORIES)` / "WORN ON THE JOB". Horizontal row of 3 cards **400×229 (1.75)** (tok (e) people slider), starting at guide 1 and bleeding past the right viewport edge, `overflow-x: auto`, scroll-snap; card: photo P13 / P14 / P15, crew name Albert Sans 600 1.25rem, one-line kit, "12 people · 2 fittings". `sp-reveal--up` on the row container only (children none). | 3 × 35 words |
| 8 | `front-order` | **ink band (S-C)**: how to order | Ink band, padding 207/160. Heading `(HOW TO ORDER)` / "FOUR STEPS, ONE CREW SHEET" cream. Four columns on the guides: number "01–04" Albert Sans 500 **4.375rem** cream (tok (b) movie heading 70px), title 1.25rem 600, one sentence. Button filled cream / ink text "Start a crew order". `sp-stagger` + `sp-reveal--up` per column. | 4 × 20 words |
| 9 | `front-visit` | visit / contact | Ground. Photo P16 left (cols 1–2.5, 636×391, ratio 1.63, `sp-reveal--wipe`), right: `(VISIT)` H3 "Open before the first shift", address, hours, phone, email; filled button "Directions & contact" + round enquiry button. | 45 words |
| — | footer | | Ink band, 4 columns on guides: wordmark + one line; pages; address & hours; languages. Bottom row 0.75rem "© 2026 Nuno Workwear". | |

English home ≥ 320 words; narrative paragraphs in #2, #4, #5 (three). CJK home ≥ 600 characters.

### Home photo positions (16, no repeats)
P01 P02 P03 (hero cross-fade) · P04 (#2) · P05 P06 P07 P08 P09 (#3) · P10 (#4) · P11 P12 (#5) · P13 P14 P15 (#7) · P16 (#9). auto-gates needs ≥ 8 `<img>`; hero P02/P03 are real `<img>` elements stacked in the layer.

### Comparison with recent themes
| # | Sumika Residences | Fumi Press Launch | Kazoe Books App | Mado Air | **Nuno Workwear** |
|---|---|---|---|---|---|
| hdr | pill header | left rail | standard | two-tier | **split nav + round button, dashed guides** |
| 1 | torn-edge hero + info bar | framed-window hero, title across photo | boxed-label H1, gradient+photo | crossfade hero | **top band / bottom photo halves, giant type straddling seam** |
| 2 | offset pair intro | statement in hairline frames | numbered feature rows | info bar | **statement + one portrait (wipe)** |
| 3 | 3 houses sticky media | dates | pricing | why | **5-trade card mosaic on guides** |
| 4 | glide strip | editions | FAQ rows | how (SVG cutaway) | **ink band, photo opens from centred box** |
| 5 | a day | stamp CTA | fixed CTA pair | dark macro cover | **two spec rows text 456 / photo 636** |
| 6 | parallax band | — | — | night band | **price list on stone band** |
| 7 | rates table | — | — | 3×2 gallery | **bleeding story slider 1.75 cards** |
| 8 | numbered arrival list | — | — | specs, reviews, pre-order, FAQ | **ink band, 4 order columns** |
| 9 | voices bubbles, enquire | — | — | CTA band | **visit row** |
Why not alike: no torn edges, rail, frames, label boxes, pill or two-tier header, gradient, SVG cutaway, bubbles or gallery grid. Nuno's identity is the giant type across a half-height seam, two-tone dashed guides with a mosaic snapped to them, and two ink bands. Mado's cross-fade hero is a centred full-screen slideshow; ours is a half-height photo under a type-led band, and the cross-fade is secondary (P01 is the static frame).

---

## 4. Inner pages (9 + 404)

Every page: S-A head (band 260px with eyebrow + line 1; strip 16:5 full-bleed, max-height 420px, line 2 cream) → body → one ink band (S-C) → closing line with outline button. Guides on all. No sidebar.

1. **Catalogue** `/catalogue` — head "BY / TRADE" (P02). Intro 2 paragraphs. Same 5-trade mosaic as home (P05–P09) but each card lists its garments. Then **garment spec cards** (6, on 3 columns × 2 rows, text cards on `#E4E2DD`): name, fabric, weight, sizes, care, price (§9 garments). Ink band "Fabrics we stock" with P18 (mask) → link Fabrics. Close: "Not sure what your trade needs? Book a fitting."
2. **Fabrics & specs** `/fabrics` — head "SIX / CLOTHS" (P18). Fabric library: 6 cards (cotton duck, waxed cotton, cotton twill, poly-cotton, soft-shell, full-grain leather; §9) with composition, weight, finish, care, used in. Fabric table (stack on mobile). Service row text 456 / photo 636 with P01 ("How we choose a cloth"). Ink band "Wear test": three sentences on how we test seams and knees in our own workshop (no performance claims, no certifications).
3. **Fit & sizing** `/fit` — head "FIT / NOTES" (P11). Fit notes (Relaxed / Regular / Women's cut), size table XS–4XL (chest, waist in cm), leg lengths 30–36, "how to measure" as 4 short paragraphs (not a step grid). Row with P04 ("Fitting in the shop"). Ink band "Book a fitting" with P16 (mask): free on site within 30 km, Saturday fittings at the shop.
4. **Crew orders** `/crew-orders` — head "CREW / ORDERS" (P13). The 4 steps on the 4 guide columns (same as home #8 but on ground), terms (10% ≥10 garments, sample kit 5 working days, delivery 10 working days, invoice 30 days for registered businesses), embroidery row with P12. Ink band "Reorder by crew sheet" with P03 (mask). Close: email + phone.
5. **Repairs & re-proofing** `/repairs` — head "MEND / AND PROOF" (P10). Full price list (same 7 rows and prices as home), turnaround (repairs 3 working days, re-proofing 5, resole 10). Row with P17 (boot resole). Ink band "Autumn re-proofing" with P01 (mask).
6. **Crew stories** `/stories` — head "CREW / STORIES" (P03). 3 stories (§9) as long rows: text cols 1–2, photo cols 3–4 (P13, P14, P15, ratio 1.63, wipe), each 150–200 words: crew, what they needed, what we fitted, what wore out and how we mended it. Closing ink band "Your crew next" text only.
7. **About** `/about` — head "SINCE / 2009" (P16). History in 3 paragraphs (2009 opened as a repair counter; 2014 added the catalogue; 2021 embroidery room). People: 7 dashed-ruled list rows (name col 1, role col 2, one line cols 3–4); **no portrait grid**. Row with P04. Ink band "The workshop" with P10 (mask).
8. **Visit & contact** `/contact` — head "VISIT / THE SHOP" (P16). Columns 1–3 on guides: address / hours / phone & email; "Getting here" paragraph (tram stop, parking for vans, loading bay). Ink band: hours repeated in Albert Sans 500 2.875rem cream. A plain contact form is allowed below the first screen (optional).
9. **Journal** `home.html` / `archive.html` / `single.html` — head "SHOP / NOTES" (P18). 4 demo posts (first large cols 1–2 + text cols 3–4, then 2 across): "Re-proofing a waxed jacket" (P01), "Why double knees" (P11), "Choosing a boot for concrete floors" (P17), "Ten names in a day: the embroidery room" (P12). Single: eyebrow = category, title 4.25rem two lines, featured image full container, text column 720px.
10. **404 / search** — S-A head "NOT / FOUND" without photo strip (band only), outline button home.

Graceful without WooCommerce (business type): no shop templates required; if WooCommerce is active, product archive/single use the card style of Catalogue.

---

## 5. Colour

Relationships from saab (text = dark band ink; light ground; one saturated accent used for eyebrows and H2), lightness within ±5% where kept.
| Role | Hex | Source token | Use | Share of page |
|---|---|---|---|---|
| Ground | `#F3F2EF` | saab `#FFFCF5` (−4% L, cooler: rule forbids cream default) | page ground, header | ≈ 45% |
| Ink | `#1F1D1B` | saab `#00161E` text + dark bands (same relationship; navy → warm charcoal: row palette 消炭/grey, and navy/blue would echo Kazoe/Mado) | body text, ink bands, footer, filled buttons | text + ≈ 30% bands |
| Main (charcoal) | `#524E4A` | row hex 消炭 | muted text, card spec values, secondary button hover, form borders | ≈ 5% |
| Stone band | `#E4E2DD` | occkwork `#F7F7F7` band role (tok (a)) | price list band, spec cards | ≈ 10% |
| Accent | `#A9521D` | saab hero machine orange `#E9772B` (photo palette), darkened for 4.8:1 on ground; takes the role of saab accent `#0389C5` (blue avoided: Kazoe/Mado) | eyebrows, H2 labels, link underline hover | ≤ 3% |
| Accent on ink | `#E39A62` | same hue, lightened | eyebrows on ink bands | < 1% |
| Cream (on dark) | `#F3F2EF` | saab `#FEFAEF` | text on ink and on photos | — |
Contrast: ink on ground 15.0:1; ground on main 7.4:1; accent on ground 4.8:1; ink on stone 13.0:1.
First screen saturated share **≤ 15%** (target 6–12%); reference saab ≈ 20%, occkwork ≈ 24%; row cap 30%.
theme-meta.json: `type: business`; `colors.tags: ["grey", "neutral", "dark", "warm"]`; `style: ["documentary", "photographic", "modular", "precise"]`.

## 6. Type

- **Latin:** headings **Albert Sans** (500, 600, 700), body **Manrope** (400, 500, 700). Both sans (font_direction sans). Load with theme.json `fontFamilies` + `fontFace` (woff2 in `assets/fonts/`), same in editor and front end.
- **CJK (黑體):** Noto Sans TC 400/700 and Noto Sans JP 400/700 subset woff2 (Hokuto/Hada replacement method), declared as fontFace in theme.json.
- Stacks: heading `"Albert Sans", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`; body `"Manrope", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`; `:lang(ja)` puts Noto Sans JP before TC. If any `:lang(` rule exists, copy `shared/inc/editor-lang.php` and require it. No serif or Mincho anywhere.
- Sizes (theme.json presets): small 0.8125rem · base 1rem · medium 1.125rem · large 1.5rem · x-large **2.875rem** (H2, tok saab 46px) · xx-large **4.375rem** (order numbers, tok 70px) · huge `clamp(4.25rem, 11.5vw, 11rem)` (hero) · head `clamp(4.25rem, 8vw, 7.5rem)` (inner heads). Max ≥ 4.25rem ✓.
- Weights / leading: hero 500 / 1.0 / ls .005em; H2 600 / 1.38 / .028em uppercase; H3 600 2rem / 1.375; statement 600 2rem / 1.6; body 400 1rem / **1.875** (tok 16/30) ls .01em; nav 600 1rem uppercase .02em; eyebrow 600 1.125rem uppercase .04em.
- zh-TW / ja: headings ≈ 0.75× en size (hero `clamp(3.2rem, 8.6vw, 8.25rem)`), no uppercase transform, ls .04em; body 1rem / 1.85 ls .06em (saab JP body .08em). fr / de: `hyphens: auto`, hero may drop to 10vw so "FÜR SCHICHTEN" / "POUR LES ÉQUIPES" fit on one line each (lines may be re-split by meaning, still two lines).

## 7. Scroll effects (sp-scroll only) and parallax

`--sp-dur: 1.5s; --sp-ease: cubic-bezier(.23,1,.32,1); --sp-dist: 28px` (saab 1.5s power4.out, 3rem capped to 28px ≤ 30px). Picks:
| Effect | sp-* | Where | Source (trigger / time / ease) |
|---|---|---|---|
| Photo wipe | `sp-reveal sp-reveal--wipe` | home #2 P04, #5 P11/P12, #9 P16; inner service rows and story rows | saab `data-inview=pic`: ScrollTrigger "top 90%" once, clip bottom→top 1.5s power4.out (sp wipe runs top-down 1.1s, accepted as-is: JS/CSS logic not changed) |
| Card stagger up | parent `sp-stagger`, cards `sp-reveal sp-reveal--up` | home #3 mosaic, #8 order columns; Catalogue/Fabrics cards | saab `data-inview-each=up`: "top 90%" once, 1.5s, stagger .1s (sp .12s), power4.out, 70px → 28px |
| Band opening | `sp-reveal sp-reveal--mask` on the band's photo figure | home #4 P10; inner ink bands with photos | saab sustainability: scrub "top 75%"→"top 20%", clip 25%→0 (sp mask: gradient wipe 1.2s ease-out; centred dashed 50% frame keeps the "box" idea) |
Not used: sp-count, sp-marquee. No reveal on hero, price list, forms, legal text, story slider children. `.sp-reveal` count ≤ 60% of home blocks' elements rule; hero has 0.

**Parallax (required):** home #1 hero bottom half. Outer Group `sp-parallax` with `--sp-par: 8%` (desktop) and `--sp-par: 5%` at ≤781px (kept on mobile). Moving layer = `.sp-parallax__layer` wrapping P01/P02/P03 `<img>` (object-fit cover); foreground = line 2 "FOR SHIFTS" and spec tagline, which are **outside** the layer (siblings, z-index 2) and do not move. Reference counterpart: saab's slow hero slide movement + scrub-driven deco strips (tok (g)), plus its cross-fade. Second parallax (optional): every inner page head strip, `--sp-par: 6%`. `check-parallax.mjs` must show ≥ 6px layer displacement on desktop and mobile, 0 under reduced motion.

Hero load motion (CSS, not sp-reveal): `.nw-hero__line { overflow: hidden }` `> span` translateY(105%)→0, 1.2s cubic-bezier(.23,1,.32,1), line 2 delay .15s; tagline opacity 0→1 0.6s delay 1.2s; cross-fade: three stacked images, keyframes 21s infinite, each visible 7s with 2s opacity fade cubic-bezier(.25,1,.5,1). All under `html.sp-js:not(.sp-no-motion)` + `prefers-reduced-motion: no-preference`.

## 8. Images (18, photo)

**Imagery: photo** (stage-a IMAGERY = photo; references are documentary photography).
STYLE (exact, every prompt):
`documentary photograph, 35mm lens, natural window and workshop light, slightly under-lit, soft film grain, muted desaturated palette of charcoal, indigo, tan and off-white, real heavy fabric texture (canvas, waxed cotton, twill, leather), timber and concrete surfaces, diverse adults at work, candid, modern international city setting, no text, no logos, no brand marks, no readable labels, no Japanese elements`

| ID | Subject / composition | Ratio | Used on (once per page) | Home |
|---|---|---|---|---|
| P01 | Shop-workshop before opening: waxed jackets on a timber rail across the frame, worn safety boots lined on a long timber bench, folded canvas trousers stacked lower-left, a jacket pile lower-right, a fitter in the mid-distance; top 30% darker wall for the headline | 16:9 (2000×1125) | Home hero (frame 1); Fabrics row; Repairs ink band; Journal post 1 | ✓ |
| P02 | Same workshop, bench close: folded canvas trousers, a tape measure, leather gloves, chalk, hands of a fitter | 16:9 | Home hero (frame 2); Catalogue head | ✓ |
| P03 | Wall of pegs with soft-shell jacket (one small orange), tool belts, boots below, a worker reaching for a jacket | 16:9 | Home hero (frame 3); Crew orders ink band; Stories head | ✓ |
| P04 | Fitter pinning the hem of canvas work trousers on a standing worker, shop interior | 0.85 portrait | Home #2; Fit row; About row | ✓ |
| P05 | Carpenter in double-knee canvas trousers and work shirt at sawhorses, sawdust light | 4:5 | Home #3 card A; Catalogue mosaic | ✓ |
| P06 | Cook in a twill bib apron at a steel pass, steam, kitchen | 4:3 | Home #3 B; Catalogue | ✓ |
| P07 | Mechanic in a poly-cotton coverall at a workbench, engine part | 4:3 | Home #3 C; Catalogue | ✓ |
| P08 | Groundskeeper in a waxed field jacket by a clipped hedge, overcast | 4:3 | Home #3 D; Catalogue | ✓ |
| P09 | Warehouse worker in a charcoal soft-shell between pallet racks | 4:3 | Home #3 E; Catalogue | ✓ |
| P10 | Repair bench: industrial sewing machine, a waxed jacket being re-proofed with a wax bar, under-lit | 16:9 | Home #4 band; Repairs head; About ink band | ✓ |
| P11 | Worker kneeling on concrete in double-knee trousers, knee-pad pocket detail | 1.63 | Home #5 row 1; Fit head; Journal post 2 | ✓ |
| P12 | Embroidery machine stitching an abstract shape on a twill shirt chest, threads, hands | 1.63 | Home #5 row 2; Crew orders row; Journal post 4 | ✓ |
| P13 | Joinery crew of three in matching canvas trousers in a timber workshop | 1.75 | Home #7; Crew orders head; Stories row 1 | ✓ |
| P14 | Kitchen crew in aprons at prep stations before service | 1.75 | Home #7; Stories row 2 | ✓ |
| P15 | Grounds team in waxed jackets loading tools into a van, early morning | 1.75 | Home #7; Stories row 3 | ✓ |
| P16 | Shop interior at 7 a.m.: counter, rails by trade, timber floor, door open to the street | 1.63 | Home #9; About head; Contact head; Fit ink band | ✓ |
| P17 | Worn leather safety boot on a cobbler's last being resoled, tools | 4:3 | Repairs row; Journal post 3 | — |
| P18 | Fabric swatches on a timber table: duck canvas, waxed cotton, twill, soft-shell, leather | 16:9 | Fabrics head; Catalogue ink band; Journal head | — |
Per page no duplicates (Journal index: head P18, posts P01 P11 P17 P12). Each image ≤ 300 KB, ≤ 2000px, webp, 0 cutouts, readme line per image (AI-generated). Read every image; regenerate on text, logos, broken hands/faces, or style drift.

## 9. Fixed content (identical on every page and in all five languages)

**Trades (catalogue, 5):** Build & carpentry · Kitchen & hospitality · Workshop & mechanics · Grounds & outdoor · Warehouse & logistics.
**Garments (6, EUR):**
| Garment | Fabric | Weight | Trade card | Price |
|---|---|---|---|---|
| Double-knee canvas trouser | 100% cotton duck | 12 oz (407 g/m²) | Build | €89 |
| Waxed field jacket | waxed cotton, paraffin finish | 8 oz (271 g/m²) | Grounds | €179 |
| Twill bib apron | 100% cotton twill | 10 oz (339 g/m²) | Kitchen | €38 |
| Mechanic's coverall | 65/35 poly-cotton | 245 g/m² | Workshop | €96 |
| Soft-shell work jacket | 3-layer soft-shell | 320 g/m² | Warehouse | €124 |
| Composite-toe work boot | full-grain leather, Goodyear welt | 2.2 mm upper | all trades | €149 |
**Workshop price list (7):** Crew fitting, 45 min, shop or on site within 30 km — **Free** · Hemming or tapering, per garment — **€14** · Name or logo embroidery, per piece — **€7** · Reflective tape sewn on, per garment — **€16** · Waxed jacket re-proofing — **€32** · Zip or seam repair — **from €18** · Boot resole — **€69**. Turnaround: repairs 3 working days, re-proofing 5, resole 10.
**People (7):** Ines Navarro — founder, fit and patterns · Tomasz Wilk — workshop lead, repairs and re-proofing · Amara Mensah — crew accounts · Jonas Berglund — embroidery and finishing · Leila Haddad — shop floor and fittings · Mateo Ruiz — boots and resoling · Hana Kowalczyk — fabrics and sourcing.
**Crew stories (3, fictional):** Vos Joinery — 12 joiners, double-knee trousers + waxed jackets, 2 fittings, delivered in 10 working days · Canal House Kitchen — 18 cooks and servers, twill aprons with embroidered names · Westpark Grounds Team — 9 groundskeepers, waxed jackets re-proofed every autumn.
**How to order (4):** 01 Tell us the trade and headcount · 02 Fitting at the shop or on site · 03 Sample kit in 5 working days · 04 Crew order delivered 10 working days after approval (then reorder anytime with your crew sheet).
No guarantees, no certification or standard claims (no EN ISO numbers), no awards, no real brands or people.

## 10. Responsive rules
- 390px: hero as §3 mobile (no absolute/vertical labels, no text over the photo). Mosaic → 1 column (card A first, then B–E). Service rows → photo then text. Order columns → stacked list. Story slider stays horizontal (scroll-snap, 85vw cards). Guides 3 lines.
- Price list ≥ 782px: full container width (1200, never a narrow column), price column right-aligned, `white-space: nowrap`, never clipped at 800 or 1280. ≤ 781px every table (price list, size table, fabric table, garment specs) becomes stacked rows: label/value pairs, price on its own line right-aligned.
- No horizontal overflow at 390 and 1280 (guides and bleeding slider included: slider is `overflow-x: auto` inside an `overflow-x: clip` section).

## 11. Similarity to reference (target ≈ 80%)
| Dimension | Reference value (token) | Nuno value |
|---|---|---|
| Ground / text / band relation | saab `#FFFCF5` / `#00161E` text = dark band (a) | `#F3F2EF` / `#1F1D1B` text = ink band |
| Dark band share | ≈ 35% (a) | ≈ 30% (2 ink bands + footer) |
| Accent role | `#0389C5` eyebrow + H2, ≈ 2% (a) | `#A9521D` eyebrow + H2, ≤ 3% |
| First-screen saturation | 20% (a) | ≤ 15% (target 6–12%) |
| Hero type | Jost 500 288px ≈ 20vw, lh 1.0, cream, 2 lines (b) | Albert Sans 500 11.5vw (166px), lh 1.0, 2 lines, line 2 cream over photo |
| H2 | 600 46px / 63.5px uppercase ls 1.28px (b) | 600 2.875rem / 1.38 uppercase .028em |
| Body | 16px / 30px (b) | 1rem / 1.875 |
| Big number / heading | 70px / 99px (b) | 4.375rem order numbers |
| Header | 80px, nav 600 18px uppercase (b,c) | 80px, nav 600 1rem uppercase |
| Container / rows | 1200; text 456 / photo 636, gap 108 (c) | 1200; 456 / 636 / 108 |
| Section padding | 125–316 top, 142–207 bottom (c) | 125–300 top, 142–207 bottom |
| Photo radius / shadow | 0 / none (d) | 0 / none |
| Buttons | 62px, radius 10, 2px, divider + arrow; round 58px (d) | identical values |
| Photo ratios | hero 1.60, about 0.85, service 1.63, cards 1.75 (e) | hero 16:9 bottom half, P04 0.85, rows 1.63, stories 1.75 |
| Guides | 4 dashed 1px, ~.1–.2 opacity; occkwork 5 cols (f) | 5 lines / 4 equal columns, dashed 1px two-tone .14/.16 |
| Motion | 1.5s power4.out, 3rem, stagger .1s; pic wipe; band opening; hero line mask 1.2s; cross-fade 2s (g) | 1.5s cubic-bezier(.23,1,.32,1), 28px, stagger .12s; wipe; mask; same hero mask and 2s cross-fade |
| Imagery | documentary grainy plant photos, ≥ 90% photo (e) | documentary grainy workshop photos, 18 |
Own work: all photos generated, all copy written, logo is a wordmark in Albert Sans; nothing of saab/occkwork is copied.

## 12. Home acceptance checklist
1. First screen 1440×900: top band with eyebrow, "MADE" in ink, lead + 2 buttons right; bottom half full-bleed P01; "FOR SHIFTS" cream over the photo ≥ 4.25rem (≈166px at 1440), spec tagline right of it; 5 dashed guides visible; round 58px button in header. No table/form/search/centred word.
2. KV checklist items 1–6 all visible; cross-fade and line-mask run in `?sp-motion`, final state in `?sp-static`.
3. `check-first-screen.py` saturated ≤ 15%.
4. Block order equals §3 (#1–#9 + footer); mosaic edges on guides; two ink bands with cream text.
5. ≥ 16 home images, none repeated, all from §8, style consistent.
6. Price list full width at 800 and 1280, prices nowrap right; stacked at 390. Prices equal §9.
7. Mobile 390: no overlap, no vertical/absolute labels, no horizontal overflow; parallax still ≥ 6px.
8. `check-parallax.mjs`: hero layer ≥ 6px desktop + mobile, reduced motion 0; ≥ 3 reveals hidden before entry, all visible after scroll to bottom.
9. Fonts: Albert Sans headings / Manrope body / Noto Sans TC-JP via theme.json fontFace, identical in editor (check-editor-fonts.mjs).
10. English home ≥ 320 words, 3 narrative paragraphs; facts (2009, Rotterdam, hours, prices, 30 km, 10%, 5/10 working days) match §9.
