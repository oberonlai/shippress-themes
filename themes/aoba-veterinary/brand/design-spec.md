# Aoba Veterinary: design spec (stage 1, binding for implementation)

Slug `aoba-veterinary`, veterinary clinic for dogs and cats, type **health** (WooCommerce-compatible declared, not required; site works without it). Archetype single-column-longform, first screen `full-bleed-photo-info-bar`, page structure `narrative-problem-method-proof`.
Reference: **R1 Cross Animal Hospital, https://www.cross-ah.vet/** (measurements in `reference-tokens.md`, cited below as `tok(a)`…`tok(g)`). Borrow structure, technique, proportions and colour relationships only. No copy, photos, logo, badges or the cut-out portrait.

Fixed brand facts (all pages, all five languages): **Aoba Veterinary Clinic**, founded **2014**, at **214 Alder Street, Fairhaven** (fictional town; same address string in all languages, local formatting only). Dogs and cats only. Founder and clinic director **Dr. Elena Varga**. Currency **USD** in every language, no converted amounts.

---

## 1. Signature techniques (three; each must be obvious at a glance, never "softened")

### T1. Framed statement box on the full-bleed photo (R1 hero, `tok(e)`)
- Reference: under a white two-row header, a full-bleed photo band 1440×550 (≈2.6:1). Right of centre, in the lower half, a box 462×170 (x 795→1265, y 400→570 within the 900 viewport) with a **2 px navy outline**, translucent white fill ≈`rgba(255,255,255,.6)`, a second faint offset edge, padding 30/20/40, holding a two-line bold serif statement 30/48. Radius 0.
- Aoba (home hero, 1440 wide): alignfull Cover, height **560 px** (`min(560px, 62svh)`), background photo **P01**, `object-position: 35% 40%` so the vet and dog sit in the left 55%. Box: `position:absolute` inside the cover on desktop only, `right: max(24px, calc((100vw - 1080px)/2))`, `bottom: 56px`, **width 470 px**, min-height 170 px, `border: 2px solid #5F726E`, `background: rgba(255,255,255,.62)`, `backdrop-filter: blur(2px)`, padding **30px 24px 34px**, radius **0**, plus a 1 px `rgba(255,255,255,.9)` outline offset **6 px** outside the border (`outline: 1px solid rgba(255,255,255,.9); outline-offset: 6px`, R1's double edge). Content: h1 Libre Baskerville 700 **1.875rem / 1.6** (= 30/48 `tok(b)`), colour `#222`, two lines in en ("Calm, careful medicine / for the dogs and cats you love."), centred like R1; under it one Source Sans 3 0.875rem line `#333` "General practice · Surgery · Dentistry — Fairhaven since 2014".
- ≤781 px: the box is **not absolutely positioned**: it sits in normal flow **below** the photo (photo height 300 px, then the box with `margin: -40px 16px 0` overlapping the photo bottom by 40 px only through negative margin in flow, z-index 1, full width minus 32 px). No vertical text, no absolute labels on the mobile first screen.
- Must not be diluted: outline stays 2 px in the accent (not grey, not 1 px), the fill stays translucent so the photo shows through, the box stays lower-right of centre (not centred, not left), radius 0.
- Continuation: **every inner page head** is a 360 px (220 mobile) full-bleed photo band with the same box (width 420 px, h1 1.75rem) at lower right; on mobile the box drops below as above. The home story band (block 6) uses the box a second time for the quote.

### T2. Numbered translucent panels inset on square photo cards (R1 当院の特徴, `tok(e)`)
- Reference: on a full-width band whose background is a pale blurred photo (602 px tall), three photo cards **336×352 (0.96:1)**, gap **27 px**, radius 0, overlap the band's lower edge. Each card carries a **260×200 panel `rgba(255,255,255,.85)`** inset 38 px from the sides and 38 px from the top, holding a serif numeral "01" (24/36 w400) and a bold sans title (19/28.5 w700), centred. Section label above: serif ≈28 px w700, letter-spacing 0.3em, centred, with a **100×2 px** rule under it.
- Aoba (home block 3 "Symptoms · Method · Recovery"): section wrapper alignfull, height of the photo band **600 px** desktop, background **P03** (bright waiting area) with `filter: blur(6px) brightness(1.08)` and a `rgba(248,248,248,.55)` overlay (implemented as a Cover with dim 55% colour `#f8f8f8`). Label centred at the top of the band: Libre Baskerville 700 1.75rem, `letter-spacing:.3em` (en: `.18em`, CJK `.3em`), colour `#222`, 100×2 px `#5F726E` rule 14 px below. Cards: container 1062 px, 3 columns, gap 27 px, card aspect **0.96:1** (`aspect-ratio: 336/352`), radius 0, the card row starts at 62% of the band height so the cards' lower 40% hangs below the band onto `#f8f8f8` (negative margin-bottom on the band, not absolute). Panel: width **77%** (260/336), height **57%** (200/352), centred horizontally, top **11%**, `rgba(255,255,255,.85)`, padding 22 px 18px, content centred: numeral Libre Baskerville 400 **1.5rem/1.5** `#5F726E`, title Source Sans 3 700 **1.1875rem/1.5** `#222`, then one 0.875rem line `#333` (max 16 words). Photos: 01 Symptoms **P09**, 02 Method **P10**, 03 Recovery **P11**. Each card is a link (to Services, First visit, Recovery stories).
- Mobile: cards stack one per row, full width minus 32 px, aspect kept 0.96:1; panel stays inset (77%/57%); band height 360 px with cards starting at 70%.
- Must not be diluted: panels are white 85% (not a caption strip under the image, not 100% white), numerals present, radius 0, the overlap with the band edge is visible.
- Continuation: Services (01 Dogs / 02 Cats / 03 Surgery & dental), Cat care (01 Quiet arrival / 02 Separate waiting room / 03 Low-stress handling), Surgery & dental (01 Before / 02 Surgery day / 03 Home recovery), Your first visit (01 Book / 02 Arrive / 03 Exam & plan), Team (01–03 photo cards for the three areas of the clinic). That is 5 inner pages.

### T3. Slashed nav, long-arrow outline buttons and the solid timetable block (R1 header + greeting + footer, `tok(f)`)
- Nav: header row 2 centred, items Libre Baskerville 700 **0.875rem/1.43** (14/20), padding **10px 14px**, between items and at both ends a thin slanted stroke: `1px` `#bdbdbd`, **26 px** tall, rotated **20°** (`::before` on each item + `::after` on the last). Home icon first is not used; first item "Home" text.
- Buttons ("outlined long arrow"): **280×56**, `1px solid #5F726E`, background transparent, label Source Sans 3 600 0.9375rem `#222` centred, radius 0; an arrow drawn with CSS (`::after` line **64 px × 1 px** `#333` + a 9 px open arrowhead from a 1 px border rotated 45° at the right end) positioned so **24 px of the line sticks out past the right border**. Hover: background `#5F726E`, label white, arrow line stays (transition 0.3s ease). Every "read more" link sitewide is this button. The single booking CTA uses the same button with the accent filled (`#5F726E` ground, white label) — the only filled button on the site.
- Timetable block: solid **#5F726E** block **480×148** (full width on mobile, min-height 148), white Source Sans 3 0.875rem, days in a row (Mon–Sun), two rows (morning / afternoon), white ● (8 px) for open, "—" for closed, "▲" for Saturday short afternoon; note line under it in `#333` 0.75rem. Appears on home block 9, Access & hours, Book a visit, Your first visit and in the footer of every page.
- Must not be diluted: slashes are slanted strokes (not "|" or "/" characters, not dots), the arrow visibly breaks out of the button frame, the timetable block is a solid accent block with white dots (not a table with borders).

### Continuation summary
| Page | T1 framed box on photo head | T2 numbered panels | T3 nav / arrow button / timetable |
|---|---|---|---|
| About | P14 head | — | arrow → Team; timetable — |
| Services | P05 head | 01–03 P09/P10/P12 | arrow buttons per service |
| Cat care | P15 head | 01–03 P04/P16/P02 | arrow → Book |
| Surgery & dental | P13 head | 01–03 P12/P05/P11 | arrow → Fees |
| Fees | P02 head | — | price table + arrow → First visit |
| Your first visit | P10 head | 01–03 P14/P15/P05 | timetable block |
| Team | P16 head | 01–03 P07/P12/P11 | arrow → Book |
| Recovery stories (index + 3 singles) | P03 head (index), single = its own photo | — | arrow between stories |
| Access & hours | P08 head | — | timetable block + booking button |
| Book a visit | P01 head (16:5 crop) | — | timetable + filled booking button |
(Photo IDs here match section 6, which is binding.)

---

## 2. Colour (R1 relationships, `tok(a)`)

| Role | R1 hex | Aoba hex | Share | Use |
|---|---|---|---|---|
| Ground white | `#ffffff` | `#FFFFFF` | ≈40% | header, alternate bands, cards |
| Ground light | `#f5f5f5` / `#f8f8f8` | `#F5F5F5` / `#F8F8F8` (unchanged) | ≈30% | alternating section bands, T2 band overlay |
| Text | `#333333`, headings `#000` | `#333333`, headings `#222222` | ≈10% | body, headings (`#222` = `#000` lifted ≈5% to soften the serif) |
| Rule | `#e2e2e2` 1px / `#d0d0d0` 3px | `#E2E2E2` / `#D0D0D0` | <1% | list hairlines, price rows |
| Main | navy `#183863` | **`#5F726E` 青鈍** | ≈3% (≤4%) | T1 outline, T2 numerals, section rules, buttons, timetable block, footer bar |
| Secondary | pale blue `#aebed7` | **`#C5D0CC`** | <1% | stroke under nav hover, story quote marks, small round badges |
| Accent | yellow `#e8d030`, coral `#ff7f6e` | **none** | 0% | dropped |

- Why main changes: the row note (binding) makes #5F726E the one muted accent; R1's navy plays exactly that role (outlines, rules, solid timetable, footer bar) at the same ≈3% share, so the relationship is kept and only the hue changes. Secondary is R1's pale-of-main logic re-derived from the new main (same lightness ≈80% as `#aebed7`). Yellow/coral badges dropped: the row allows only one accent; R1's round badges become 84 px `#C5D0CC` circles with ink serif text (see section 3, block 8).
- Never a full-bleed accent field: the only solid accent areas are the timetable block (≤480×148), the booking button, and a 48 px footer bar.
- Not beige, not Ito's `#3F5E4A` (darker, yellower green). Contrast: white on `#5F726E` = 5.0:1 (passes AA for 0.875rem+ bold and body); `#5F726E` on white for 1.5rem numerals passes.
- First-screen saturated pixels ≤ **15%** (row gate, `check-first-screen.py`); target ≤ 9% (R1 8.9%). Achieve with P01 high-key (white walls, pale wood, light grey scrubs), no coloured UI over the photo except the 2 px outline.

## 3. Type (`tok(b)`), loaded only through theme.json `fontFamilies` + `fontFace`

- Display/nav/numerals: **Libre Baskerville** (OFL) 400, 400 italic, 700 — mirrors R1's bold Mincho for headings, nav and numerals.
- Body/UI: **Source Sans 3** (OFL) 400, 600, 700.
- zh-TW: headings **Noto Serif TC** 600, body **Noto Sans TC** 400; ja: **Noto Serif JP** 600 / **Noto Sans JP** 400 — subset woff2 files declared as `fontFace` in theme.json (Hokuto/Hada substitute method, the repo subset script is broken). Font-family stacks per language via `:lang()` in style.css, therefore copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it in functions.php so the editor iframe gets the same stacks. Editor and front-end must show the same faces (check-editor-fonts.mjs, en + zh-TW). CJK heading size ≈0.75× the Latin size, CJK body line-height 1.85; fr/de `hyphens:auto`.
- Size presets (theme.json): small 0.8125rem · base 1rem · medium 1.1875rem · large 1.5rem · x-large 1.875rem · xx-large 2.75rem · **huge 4.25rem (max)**.

| Element | R1 token | Aoba |
|---|---|---|
| Hero statement h1 | serif 30/48 w700 | Libre Baskerville 700 1.875rem/1.6 |
| Section label (h2) | serif 28 px w700, ls .3em, centred, 100×2 rule | Libre Baskerville 700 1.75rem/1.4, ls .18em (Latin) .3em (CJK), centred, 100×2 `#5F726E` rule |
| Longform h2 in narrative blocks | — | Libre Baskerville 400 xx-large 2.75rem/1.25, left, max 18ch |
| Numeral | serif 24/36 w400 | Libre Baskerville 400 1.5rem/1.5 accent |
| Card title h3 | sans 19/28.5 w700 | Source Sans 3 700 1.1875rem/1.5 |
| Nav | serif 14/20 w700, pad 10/14 | same |
| Body | 16/24; prose lh 2 | Source Sans 3 1.0625rem/1.75 (CJK 1rem/1.85) |
| Phone | serif ≈36 px ls .1em | Libre Baskerville 400 2.25rem ls .06em |
| Small | 12/24 | 0.75rem/2 |
| **Max (huge)** | — | **4.25rem** Libre Baskerville 400: the proof figure "10 weeks" in block 6 and the "$65" figure on Fees head body; left-aligned, never a giant centred word |

## 4. Home page

### First screen (1440×900) — `full-bleed-photo-info-bar`
- Header (white, R1 117 px): row 1 height 76 px, container 1080: wordmark left ("Aoba Veterinary" Libre Baskerville 400 1.375rem + a 1 px × 220 px accent line under it ending in a small leaf stroke — CSS/SVG line, not R1's cat logo), centre a 1 px slanted stroke 48 px tall then "Call us" 0.75rem + phone `+1 555 0142 300` Libre Baskerville 1.375rem with 1 px underline, right the hours in two 0.75rem lines. Row 2 (41 px): T3 slashed nav centred: Home · About · Services · Cat care · Surgery & dental · Fees · Team · Stories · Access. Language switcher at the far right of row 1 (small text). After scrolling 110 px the header becomes sticky white 62 px (row 1 only, nav inline right) with a 1 px `#E2E2E2` bottom rule — pure CSS `position:sticky` on row 2 + JS-free (no scroll listener; use sticky header block).
- Hero: T1 as specified, photo P01, `sp-parallax` (section 8). Bottom of hero at y≈677.
- Info bar (the row's "info-bar"), white, height 88 px, container 1080, directly under the hero, 4 cells separated by 1 px `#E2E2E2` vertical rules: (1) "Today" + hours line, (2) address "214 Alder Street, Fairhaven", (3) "Dogs & cats · by appointment, urgent same-day slots", (4) the **booking button** (filled accent, 240×56, long arrow). On ≤781 the bar stacks: hours, address, button full width; it sits after the mobile T1 box.
- Below at y≈765: the top of block 2 label is visible on `#F8F8F8` (scroll hint, like R1's schedule banner peeking).
- Forbidden on first screen: table, form, search box, vertical text, absolute labels on mobile, giant centred words, the timetable block.

### Block order
| # | Pattern | Purpose | Layout / photos | Copy (en) |
|---|---|---|---|---|
| 1 | `front-hero` | mood + trust | T1 box on full-bleed **P01**, `sp-parallax` | h1 12 words + 10-word line |
| 2 | `front-intro` | narrative opening | `#F8F8F8` band, single column 720 px centred block, text left-aligned: section label "Our clinic" (centred T2 label style) then longform h2 "A small clinic that takes the time to listen." + 2 paragraphs; to the right side nothing — single column. Under it a wide 16:9 photo **P14** (reception, owner with cat carrier) at 1080 width, radius 0 | 110 words |
| 3 | `front-path` | problem → method → proof map | **T2** band with P03 blurred, cards P09 / P10 / P11, `sp-stagger` + `sp-reveal` | label + 3 × 16 words |
| 4 | `front-signs` | **problem**: when to come in | white, single column 720: h2 "Signs that are worth a visit", paragraph, then a two-column list (8 signs, each a 1 px `#E2E2E2` bottom rule, 0.9375rem, accent 6 px square bullet) e.g. "Not eating for more than a day", "Limping that lasts beyond 24 hours", "Drinking much more than usual", "Repeated vomiting or diarrhoea", "Scratching ears or shaking the head", "Breathing faster at rest", "A cat hiding more than usual", "Lumps that change size"; right-aligned photo **P04** (vet gently checking a cat's ear) 4:5 floated into the column at 300 px on desktop (stacks on mobile). Note line: "If you are unsure, call us — a nurse will tell you whether it can wait." | 120 words |
| 5 | `front-method` | **method**: how a visit runs | `#F5F5F5` band, single column 720: h2 "How we examine, explain and plan", then 4 numbered text rows (Libre Baskerville numeral 1.5rem accent left, text right, 1 px rules between; NOT a step grid, NOT a timeline): 1 Book (online or phone, 30-minute first consultations), 2 Settle in (separate cat waiting room), 3 Examine & explain (we show you what we find, written estimate before any treatment), 4 Follow up (a nurse calls within 48 hours). Then full-width 16:9 **P05** (nurse and vet examining a dog on a low table) with a 0.75rem caption | 130 words |
| 6 | `front-story` | **proof**: one recovery story | full-bleed band **P06** (owner walking a beagle in a park, morning) height 520 px (320 mobile) with `sp-parallax --sp-par:10%`; foreground T1 box (left-of-centre lower, mirrored: `left` instead of `right`) with quote in Libre Baskerville italic 1.375rem "He was back on his morning walk by spring." (attributed "Biscuit's owner"). Below on white: two-column (desktop 5/7): left the figure **"10 weeks"** at huge 4.25rem accent + "from surgery to full walks" 0.875rem; right 3 paragraphs of Biscuit's story with `sp-reveal sp-reveal--up`; arrow button "Read the story" → story 1 | 150 words |
| 7 | `front-fees` | price transparency | white, h2 label "Fees" centred style; **full-width price list** (container 1080, see 7 rules) of the 8 fixed items; note "Prices include VAT. You always get a written estimate first."; arrow button → Fees | 8 rows + 20 words |
| 8 | `front-director` | people / greeting | `#F8F8F8` band (R1 ご挨拶 composition without cut-out): left 6/12 centred greeting 7 short lines (lh 2), arrow button → Team; right 5/12 framed photo **P07** (Dr. Elena Varga with a cat, 4:5, radius 0, 1 px `#5F726E` frame offset 12 px behind the photo, bottom-right) and a name tag beside the top-right corner: 84 px `#C5D0CC` circle with "Director" 0.75rem, then "Dr. Elena Varga" Libre Baskerville 700 1.125rem — inline in flow (not absolute on mobile) | 90 words |
| 9 | `front-visit` | hours, access, single booking link | white: two columns 1080: left wordmark + address + phone (2.25rem serif) + **T3 timetable block** + note; right **P08** (clinic entrance, glass door, plants, daylight) 4:3; under both the **booking button** (filled, same URL as info bar: `/book/`) and "Urgent? Call before you come." | 60 words |

Home English ≥ 250 words (≈ 700 planned) with narrative paragraphs in blocks 2, 4, 6, 8 (≥3). CJK ≥ 500 characters. Home photo positions: **P01, P14, P03, P09, P10, P11, P04, P05, P06, P07, P08 = 11** (≥8), no repeats.

### Comparison with recent homes (must differ)
| # | Oto Audio | Ishizue | Ito HR | Kaiten | **Aoba** |
|---|---|---|---|---|---|
| 1 | hero | hero photo bleed right | hero + marquee cards | hero cut frame | **full-bleed photo + framed box + info bar** |
| 2 | intro | ethos marquee | service index | intro | **single-column narrative + wide photo** |
| 3 | four categories | sticky-stack cards | intro photo pair | course strip | **3 numbered-panel photo cards on blurred band** |
| 4 | compare table (ink) | quay parallax | approach + 3 cards | 5-step timeline | **signs list (problem) with floated photo** |
| 5 | product trio | governance | fees | prices panel | **method rows (4, ruled) + wide photo** |
| 6 | parallax band | investors | people band | stories mosaic | **one recovery story: parallax photo band + big figure** |
| 7 | listening hour | owners (ink) | stories | interlude parallax | **full-width price list** |
| 8 | services prices | close | FAQ/contact | tutors | **director greeting, framed photo** |
| 9 | stories / visit | — | — | FAQ/contact | **visit: timetable block + one booking link** |
Why not alike: no marquee, no sticky stack, no comparison table, no timeline, no price panel in blocks 2–5, no ink bands; Aoba is a single-column narrative (problem → method → proof) with R1's framed box, panel cards and solid timetable, none of which appear in those four themes.

## 5. Inner pages (10 + story singles)
Every page: T1 photo head → body (single column 720 px for prose, 1080 for cards/tables) → closing strip with arrow button + footer (timetable block, address, phone, slashed footer nav, 48 px accent bar "© Aoba Veterinary Clinic"). No sidebar.
1. **About** `/about/` — head P14; story of the clinic (founded 2014 by Dr. Elena Varga after twelve years in a city referral hospital; why dogs and cats only; why 30-minute first consultations); a wide P03 (unblurred) between sections; values as three short paragraphs; arrow → Team.
2. **Services** `/services/` — head P05; T2 cards 01 Dogs (P09) / 02 Cats (P10) / 03 Surgery & dental (P12); then longform sections: consultations, vaccinations & prevention, diagnostics (in-house blood tests, digital X-ray, ultrasound), senior care, nutrition; each with arrow to Fees/Cat care/Surgery.
3. **Cat care** `/cat-care/` — head P15 (cat-only waiting room); T2 cards 01 Quiet arrival (P04) / 02 Separate waiting room (P16) / 03 Low-stress handling (P02); text: carrier tips, pheromone diffusers, appointment times kept short; story 2 (Juniper) teaser.
4. **Surgery & dental** `/surgery-dental/` — head P13; T2 01 Before (P12) / 02 Surgery day (P05) / 03 Home recovery (P11); fasting rules, anaesthesia monitoring, pain relief, discharge call; arrow → Fees.
5. **Fees** `/fees/` — head P02; huge "$65" figure + first consultation sentence; full price table (8 items, same as home) + "What a written estimate includes"; payment (card, cash, pet insurance claim forms filled for you).
6. **Your first visit** `/first-visit/` — head P10; T2 01 Book (P14) / 02 Arrive (P15) / 03 Exam & plan (P05); what to bring (vaccination record, list of food and medicines, a photo/video of the symptom); timetable block.
7. **Team** `/team/` — head P16; the 7 named people as ruled text rows (name, role, focus, one sentence; no portrait grid), T2 cards 01 Consult rooms (P07) / 02 Surgery (P12) / 03 Nursing & recovery (P11).
8. **Recovery stories** `/stories/` (posts index, `home.html`) + 3 singles — head P03; list of 3 stories (photo 4:3 left 5/12, text right, ruled), single: T1 head with the story's photo, longform 720 column, figure in huge style, arrow to next story. Single photos: Biscuit P06, Juniper P04, Otto P09 (index list uses the same three).
9. **Access & hours** `/access/` — head P08; address, parking (6 spaces), bus line text, timetable block, phone, holidays note; no map embed required (a styled address block is enough).
10. **Book a visit** `/book/` — head P01 (16:5 crop); three ways: online request link (mailto), phone, walk-in for urgent cases only after calling; what happens after booking; timetable block. No form needed.
Plus 404 and search: T1 head (P03) + arrow button home. Reachable pages ≥ 9 (auto-gates).

## 6. Photos (16, Grok, one at a time, read each one; regenerate on text, logos, broken faces/hands/paws)

STYLE (exact, every prompt):
`photorealistic documentary photograph, high-key bright natural daylight, white walls, pale oak wood and light grey surfaces, modern international veterinary clinic, calm and gentle mood, soft shadows, muted sage and grey-green accents, diverse people in light grey or sage scrubs, healthy relaxed dogs and cats, 35mm lens, no text, no logos, no brand marks, no signage, no Japanese elements`

| ID | Subject / composition | Ratio | Used on (once per page) |
|---|---|---|---|
| **P01** | vet kneeling beside a golden mixed-breed dog in a bright consult room, both in the left half, right half white wall and window light | 16:9 wide (2000×1125) | **Home hero**; Book head |
| P02 | nurse cradling a calm tabby cat on a towel, close, soft | 4:3 | Fees head; Cat care card 03 |
| **P03** | bright waiting area, oak bench, plants, empty, wide | 16:9 | **Home T2 band (blurred)**; About wide; Stories index head; 404 head |
| **P04** | vet gently checking a cat's ear with an otoscope | 4:5 | **Home signs**; Cat care card 01; story Juniper single and index card |
| **P05** | nurse and vet examining a beagle on a low table, stethoscope | 16:9 | **Home method**; Services head; First visit card 03; Surgery card 02 |
| **P06** | owner walking a beagle on a park path, morning light, from behind-side | 21:9 | **Home story band**; story Biscuit single and its Stories index card |
| **P07** | woman vet in her 50s (Dr. Varga) holding a grey cat, friendly, portrait | 4:5 | **Home director**; Team card 01 |
| **P08** | clinic entrance, glass door, potted olive tree, daylight, no signage | 4:3 | **Home visit**; Access head |
| **P09** | close-up of hands checking a dog's paw | 0.96:1 (1200×1250) | **Home card 01**; Services card 01; story Otto single and index card |
| **P10** | vet listening to a cat's chest with a stethoscope while the owner holds it | 0.96:1 | **Home card 02**; Services card 02; First visit head |
| **P11** | dog resting on a soft blanket in a recovery kennel with open door, calm | 0.96:1 | **Home card 03**; Surgery card 03; Team card 03 |
| **P12** | clean surgery prep room, instruments covered, monitor without readable text | 4:3 | Services card 03; Surgery card 01; Team card 02 |
| P13 | vet examining a sedated dog's teeth with a dental mirror, gloved | 16:9 | Surgery & dental head |
| **P14** | reception: owner with cat carrier talking to receptionist across an oak desk | 16:9 | **Home intro**; About head; First visit card 01 |
| P15 | cat-only waiting room: shelves for carriers, towels, a cat peeking from a carrier | 16:9 | Cat care head; First visit card 02 |
| P16 | three clinic staff talking in a bright corridor, diverse, smiling | 16:9 | Team head; Cat care card 02 |
Bold = home (11). No cut-outs; ≤300 KB, ≤2000 px; readme line per image (AI-generated, CC0).

## 7. Fixed numbers (identical on home, inner pages, footer, all five languages)

**Fees (USD, 8 items):**
| Item | Price |
|---|---|
| First consultation (30 min, full examination) | $65 |
| Follow-up consultation (15 min) | $45 |
| Annual vaccination (dog DHPP or cat FVRCP), incl. check | $58 |
| Microchip and registration | $49 |
| Senior blood panel | $110 |
| Cat spay / neuter | from $240 |
| Dog spay / neuter | from $380 |
| Dental scale and polish under anaesthesia | from $320 |

**People (7):** Dr. Elena Varga — founder, clinic director, internal medicine · Dr. Samuel Osei — surgery and orthopaedics · Dr. Priya Nair — feline medicine · Dr. Tomás Ribeiro — dentistry and imaging · Hannah Lindqvist — head veterinary nurse · Malik Haddad — veterinary nurse, rehabilitation · Clara Moreau — reception and care coordinator.
**Stories (3):** 1 Biscuit, beagle, 7, cruciate ligament repair by Dr. Osei, **10 weeks** to full walks with Malik's rehab plan · 2 Juniper, cat, 12, weight loss → thyroid condition managed with daily medication and checks every 3 months (Dr. Nair) · 3 Otto, labrador, 8 months, swallowed a sock, removed by endoscopy, home the same evening (Dr. Ribeiro). No guaranteed outcomes; "every animal is different" line on the index.
**Place:** 214 Alder Street, Fairhaven · phone +1 555 0142 300 · hello@aobavet.example · parking 6 spaces · founded 2014.
**Hours:** Mon–Fri 9:00–12:30 and 15:30–19:00 · Sat 9:00–12:30 and 15:30–17:00 (▲) · Sun and public holidays closed. Urgent same-day slots each weekday; out of hours: the regional emergency hospital (generic, unnamed).
**Visit flow (4):** Book → Settle in → Examine & explain (written estimate before treatment) → Follow-up call within 48 hours. First consultation 30 minutes.

## 8. Scroll effects (from stage-a candidates; `tok(g)`)
| Effect | sp-* | Where | Source | Trigger / time / easing |
|---|---|---|---|---|
| Card fade-in, no displacement | `sp-stagger` on the card row + `sp-reveal` (base, no modifier) on each card | Home block 3; T2 rows on Services, Cat care, Surgery, First visit, Team | R1 feature cards animate.css fadeIn | IO entry (sp-scroll, rootMargin 0), `--sp-dur:1s`, `--sp-ease: ease`, stagger 0.12s (ours; R1 none), once |
| Rise-in text | `sp-reveal sp-reveal--up` | Home block 6 story text, block 8 greeting column; story singles' first paragraph block | stage-a proposal (R1 fade + our 24 px) | `--sp-dist:20px`, `--sp-dur:1s`, ease |
| **Parallax (required)** | `sp-parallax` | see below | R1 has none (bxSlider 0.5s slide on hero is the motion it replaces) | CSS scroll-driven, JS IO fallback |
- Hero no reveal. Price table, timetable block, booking/legal text: no reveal. Max 3 effect kinds per page.
- **Parallax 1 — home hero (block 1):** outer Cover `.sp-parallax`, moving layer = Cover background image **P01** (`.wp-block-cover__image-background`), foreground = T1 box + h1 (not in the layer). `--sp-par: 8%` desktop, **5%** at ≤781 px (kept on mobile). R1 counterpart: the slow hero slideshow — we replace slide changes with depth.
- **Parallax 2 — home story band (block 6):** Cover `.sp-parallax`, background **P06**, foreground T1 box with quote. `--sp-par: 10%` desktop, 6% mobile. Also on every inner page photo head (`--sp-par: 6%`, 4% mobile).
- check-parallax.mjs must show ≥6 px shift desktop + mobile, 0 under reduced motion; screenshots with `?sp-static`.

## 9. Responsive rules (binding)
- 390 px first screen: no vertical text, no absolutely positioned labels; T1 box in flow under the photo; info bar stacked; header = wordmark + menu button (overlay nav), phone as a tap link.
- Price tables (home block 7, Fees): at ≥782 px the table is **full container width (1080 px, `width:100%`)**, two columns, item left, price column `white-space:nowrap; text-align:right; width:1%` with padding-left 24 px, rows 1 px `#E2E2E2`, last row 3 px `#D0D0D0` (R1 rule). Never cut or overflowing at 800 and 1280.
- Any table at ≤781 px becomes stacked (each row a block: item line, price line right-aligned under it), via `display:block` on tr/td; the timetable block stays a 7-day grid but shrinks (min cell 36 px) and scrolls nothing horizontally.
- No horizontal overflow at 390 / 1280; `overflow-x: clip` on html/body.

## 10. Home acceptance checklist
1. First screen: white two-row header with slashed nav, full-bleed P01 at ≈560 px, T1 box lower-right with 2 px #5F726E outline + translucent fill, info bar with one filled booking button; saturated ≤15%.
2. T2 band: blurred P03, three 0.96:1 cards with 85% white inset panels and numerals 01–03, overlapping the band edge.
3. Order equals section 4 table; problem (signs) → method (4 ruled rows) → proof (one story, "10 weeks" at 4.25rem) clearly readable; ≥250 en words, ≥3 narrative paragraphs.
4. Price list full width at ≥782 with nowrap right-aligned prices; stacked on mobile; prices = section 7.
5. Long-arrow outline buttons (arrow sticking out 24 px) for all secondary links; one booking URL only.
6. Solid #5F726E timetable block with white dots in block 9 and footer; hours = section 7.
7. 11 photo positions, no repeats, no text/logos, all from STYLE; no cut-outs.
8. sp-parallax on hero and story band (desktop + mobile), stagger fade on cards, reveal--up on story/greeting; no reveal in hero; check-parallax passes.
9. Fonts Libre Baskerville + Source Sans 3 (+ Noto TC/JP) via theme.json fontFace, same in editor; max preset 4.25rem.
10. No marquee, timeline, step grid, people grid, ink bands, sidebar, giant centred word.

## 11. Similarity table (target ≈80% to R1)
| Dimension | R1 value (token) | Aoba value |
|---|---|---|
| Ground | #f5f5f5/#f8f8f8/#fff ≈70% `tok(a)` | same hexes ≈70% |
| Main role/share | navy #183863 ≈3% `tok(a)` | #5F726E ≈3% (row-mandated hue) |
| Text | #333 / #000 | #333 / #222 |
| Header | 76 + 41 px, slashed nav serif 14/20 w700 `tok(c,f)` | 76 + 41 px, same nav metrics |
| Hero | full-bleed 1440×550 `tok(e)` | full-bleed 1440×560 |
| Statement box | 462×170, 2 px navy, rgba(255,255,255,.6), lower-right `tok(e)` | 470×≥170, 2 px accent, .62, lower-right, +6 px white outline |
| Statement type | serif 30/48 w700 `tok(b)` | Libre Baskerville 700 1.875rem/1.6 |
| Section label | serif 28 w700 ls .3em + 100×2 rule `tok(b)` | 1.75rem 700 ls .18em/.3em + 100×2 accent rule |
| Feature cards | 336×352, gap 27, radius 0 `tok(c,e)` | 0.96:1, gap 27, radius 0, row 1062 |
| Inset panel | 260×200 rgba(255,255,255,.85) `tok(e)` | 77%×57% .85 |
| Numeral / card title | serif 24/36 w400 · sans 19/28.5 w700 | 1.5rem/1.5 400 · 1.1875rem/1.5 700 |
| Blurred band behind cards | 602 px `tok(e)` | 600 px, blur 6 px |
| Buttons | 280×56, 1 px navy, long arrow out right `tok(f)` | 280×56, 1 px accent, 64 px arrow, 24 px outside |
| Timetable | solid navy 480×148, white ● `tok(f)` | solid #5F726E 480×148, white ● |
| Radius / shadow | 0 / none `tok(d)` | 0 / none |
| Container / section pad | 1080–1100; 56–76 top, 64–70 bottom `tok(c)` | 1080; 72 top, 72 bottom (48/48 mobile) |
| Motion | fadeIn 1s ease, 75% trigger, no stagger `tok(g)` | sp-reveal 1s ease, stagger 0.12s |
| Parallax | none (slider) | hero 8%, story 10% (rule) |
| Portrait | cut-out 502×657 | framed 4:5 photo, no cut-out (rule) |
