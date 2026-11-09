# Kyukyu College: design spec (stage 1, binding for implementation)

Slug `kyukyu-college`, paramedic training college, type `business` (category education-classes). Plan row b26-2: archetype editorial-magazine, palette tetsu-kon navy `#1E2A3A`, font_direction **serif** (Newsreader / Source Sans 3, CJK headings Noto Serif TC / Noto Serif JP), first_screen timeline-line, page_structure process-timeline, IMAGERY **photo**, five languages (en, zh-TW, ja, fr, de).

- Reference (main): https://www.kokushikan.ac.jp/ (S5-Style, university with an emergency-rescue course). Screenshots `brand/ref/kokushikan-first.png`, `scroll-kks-900.png` … `scroll-kks-4500.png`. Measured values: `brand/reference-tokens.md` (cited below as tok(a)…tok(g)).
- Borrow: structure, techniques, colour relationships, the key-visual concept. Do **not** copy photos, copy text, the logo, the skyline illustration or the page layout as a whole. All photos are our own (Grok, §8); the small vignette is our own SVG (§1 T4).

Fixed brand facts (every page and all five languages use these; full list in §9): **Kyukyu College**, founded **2011**, one campus at **41 Wexford Lane, Northmere** (fictional, international-neutral). Principal **Dr. Ruth Adeyemi-Holm**. Currency **USD** in every language, no converted prices.

---

## 1. Signature techniques (three, obvious at a glance; plus one supporting accent)

### T1. Crossed translucent polygons over a documentary photo (Kokushikan hero + wide photo band)
- Reference (`ref/kokushikan-first.png`, `ref/scroll-kks-2700.png`, tok(a), tok(e)): a real photo, radius 0, crossed by three or four very large hard-edged triangles / diamonds in pale blue, rose and aqua (straw sometimes) at ~25–35% alpha. The shapes run corner to corner, cut the photo diagonally, and one shape continues past the photo edge onto the grey ground. Same overlay is used on the hero photo and on the full-width 2.2:1 band.
- Ours: the same overlay on **P01** (hero, instructor timing compressions) and **P05** (wide band, ambulance bay) on the home page, and on the photo of every inner page head (§5).
- Build: one SVG file `assets/kk-tri.svg`, `viewBox="0 0 100 100" preserveAspectRatio="none"`, no strokes, laid over the photo as `background-image` of the photo wrapper's `::after` (empty `content:""`, no text), `position:absolute; inset:0; pointer-events:none; z-index:1`. Polygons (exact):
  | Shape | Fill | fill-opacity | points |
  |---|---|---|---|
  | A blue | `#98AADE` | .32 | `0,24 46,100 0,100` |
  | B aqua | `#78D7DD` | .28 | `22,0 60,0 34,64` |
  | C rose | `#DE8289` | .34 | `63,0 100,0 100,100 72,100 86,50` |
  | D straw | `#EDC880` | .26 | `86,50 100,30 100,74` |
  A second file `assets/kk-tri-band.svg` (for 2.2:1 bands) mirrors the composition: A `0,0 30,0 0,70`, B `24,100 52,22 80,100` (aqua .26), C `62,0 100,0 100,62` (rose .30), D `0,70 30,100 0,100` (straw .24).
- Ground spill (hero only, as in the reference where a rose diamond continues below and above the photo): `.kk-hero::before`, `content:""`, `position:absolute`, rose `#DE8289` at 18% opacity, `clip-path: polygon(78% 0, 100% 0, 100% 100%, 60% 100%)` covering the area from the photo's right half down to the bottom of the hero; it sits **behind** the photo (z-index 0) and is visible only in the 10–70px strips of grey ground above and below the photo. Clip-path is on a pseudo-element, never on an observed `sp-*` element.
- Must not be diluted: the shapes must be large (each spans ≥ 35% of the photo width), hard-edged (no blur, no gradient), at least three hues visible, alpha 24–34% (not 10%), and they must cross the people in the photo, not hide in a corner. Photo radius 0.

### T2. Hairline page frame with a centre split + giant serif section word with a small red subtitle (Kokushikan "WHY KOKUSHIKAN?" rows)
- Reference (`ref/scroll-kks-2700.png` bottom, `ref/scroll-kks-3600.png`, tok(c), tok(b), tok(f)): 80px side margins, a 1280px content column bounded by two 1px vertical hairlines that run down the whole page, plus a centre hairline that splits rows into 616 / 48 / 616. Rows are separated by 1px horizontal hairlines. Each section opens with a giant condensed Latin word (black, ~13rem, line-height 1) left in its cell with a small bold red subtitle directly below, and a statement in the right cell.
- Ours (desktop 1440): page frame lines at x = 80 and x = 1360 (the rail occupies 1360–1440), centre line at x = 720; colour `rgba(30,42,58,.14)`. Implement on the `main` element (`.kk-main`) as background images, not as extra blocks:
  `background: linear-gradient(var(--kk-line),var(--kk-line)) 80px 0/1px 100% no-repeat, linear-gradient(var(--kk-line),var(--kk-line)) calc(100% - 80px) 0/1px 100% no-repeat;` and the centre line only on sections that carry the class `kk-split` (`background: linear-gradient(...) 50% 0/1px 100% no-repeat`). Full-width photo bands (`.kk-band`) cover the lines (the reference does the same).
  - Viewport < 1440: margins stay 80px down to 1024; 1023–782: 40px; < 782: 20px, outer lines only, centre line hidden.
- Section word: Newsreader 600, uppercase, `font-size: var(--wp--preset--font-size--huge)` = `clamp(4.25rem, 9vw, 8.5rem)`, line-height .9, letter-spacing -.02em, colour `#1E2A3A`, left-aligned at the left cell padding (cell padding 96px left at 1440, 24px at mobile), **never edge-cropped and never centred**. Every home word is ≤ 5 letters so it fits the 616px cell at 8.5rem: ABOUT, TERM, WEEK, FACTS, FEES, ENTRY, NOTES, VISIT. Inner pages use the same rule (§5). In zh-TW / ja the Latin word stays (it is a label, edited in the block), only the subtitle and body are translated.
- Subtitle: directly under the word (gap 12px), Newsreader 600, 1.625rem (ja/zh 1.25rem Noto Serif), line-height 1.4, colour `#D9001E`.
- Right cell: statement H2 Newsreader 600 `x-large` 2.625rem, line-height 1.35, navy; then body.
- Section padding top/bottom 140px desktop (tok(c) 120–160), 72px mobile. Horizontal hairline `1px solid rgba(30,42,58,.14)` between sections.
- Must not be diluted: the three vertical lines must be visible through at least blocks 2, 3, 5, 6, 7, 8 of the home page; the word must be ≥ 8rem at 1440 on home; the subtitle must be red.

### T3. Sticky photo column beside numbered chapters with red numerals (Kokushikan "three features" list)
- Reference (`ref/scroll-kks-3600.png`, `ref/scroll-kks-4500.png`, tok(g)): the left cell keeps an image pinned (`position:sticky; top:0; height:100svh`) while the right cell scrolls through items; each item opens with a big red condensed numeral "01" and a red bold two-line lead, then a black heavy H3 and body; generous empty space.
- Ours ("How a term is arranged", home block 3): three rows, one per term. Each row is a two-column `kk-split` row (616 / 48 / 616). Left cell: the term's photo, **sticky within its own row** (`position:sticky; top:110px;` aspect 4:5, `max-height: calc(100svh - 150px)`, object-fit cover, radius 0). Each row has `min-height: 125svh` at ≥ 782px, so the photo holds while the text scrolls and the next row's photo pushes it out (pure CSS, no JS, no scroll listener; parents use `overflow: clip`, never `hidden`).
- Right cell per row: numeral `01` / `02` / `03` Newsreader 600 5rem, line-height 1, `#D9001E`, `font-variant-numeric: lining-nums`; beside it (flex, gap 28px, aligned to the numeral's cap-height) the red lead Newsreader 600 1.625rem two lines; below (margin-top 40px) H3 navy Newsreader 600 2.625rem line-height 1.35; body Source Sans 3 1.0625rem lh 1.8; a small hairline-ruled fact line ("12 weeks · September to December · 1 instructor per 8 students"). Text column `padding-top: 18svh`.
- Mobile (< 782): no sticky; photo 4:5 full width (minus 20px margins) above its text; numeral 3.5rem.
- Must not be diluted: numerals red and ≥ 5rem on desktop; photo actually stays pinned while its text scrolls (verify at 1280×900 with `?sp-motion`); photos change per row (P02, P03, P04).

### T4 (supporting accent, not counted). Flat tinted tile with our own skyline + ambulance vignette
- Reference (`ref/scroll-kks-3600.png`, `ref/scroll-kks-4500.png`): a square pastel tile of overlapping circles and diagonals with a small flat town skyline and an ambulance standing on its top edge.
- Ours: one SVG `assets/kk-vignette.svg`, **drawn by us** (no tracing, different buildings, different vehicle): tile 1:1, ground `#E9EDF0`, two overlapping half-circles and two diagonals in the four overlay tints at 45% opacity, flat; on the top edge a strip 22% of the tile height: three simple block buildings (`#B9C3CE`, `#8CA1B5`), two round trees (`#9DB89A`), a station roof, and a small boxy ambulance (white body, navy windows `#1E2A3A`, one red stripe `#D9001E`, no letters, no cross symbol, no star of life). Used once on home (block 6) and once on Campus & visit. It is an accent tile, never the main imagery, and not counted in the photo total.

### Continuation to inner pages (required)
| Page | T1 polygons | T2 frame + giant word | T3 sticky chapters |
|---|---|---|---|
| About the college | page-head photo P12 | yes, word ABOUT | 3 rows: 2011 founding / how we teach / who teaches (P16, P13, P15) |
| Paramedic Diploma (course) | page-head photo P15 | yes, word TERM | 3 term rows (P02, P03, P04) + Year 2 rows |
| Ride-along placements | page-head photo P05 (band version) | yes, word WEEK | 3 rows: before / on shift / after (P06, P07, P09) |
| Admissions | page-head photo P08 | yes, word ENTRY | 3 rows: written test / fitness assessment / interview (P16, P11, P17) |
| Fees & funding | page-head photo P07 | yes, word FEES | — (price list) |
| Faculty | page-head photo P16 | yes, word STAFF | 2 rows: sticky portrait P13 beside four people, then P14 beside four people |
| Campus & visit | page-head photo P17 | yes, word VISIT | — (T4 vignette tile, facilities rows) |
| Stories (posts index, archive, category, tag) | first post's featured image with polygons | yes, word NOTES / TAG / topic | — |
| Single post | featured image with polygons | category as red subtitle under a smaller word | — |
| Contact | page-head photo P10 | yes, word WRITE | — |
T1 on 10 page types, T2 on all, T3 on 5 pages. Each signature reaches ≥ 4 inner pages.

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
- What it draws (`ref/kokushikan-first.png`): a pale cool-grey page. At the left, a short bold lead line and under it the institution's name stacked in three lines of a giant condensed black word ("KOKU / SHI / KAN"), slightly overlapping the photo. At the right, a large campus photo (1.3:1) flush to the right frame edge, crossed by translucent blue / rose / aqua triangles, with a black play disc and a small caption at its bottom-right. A solid red icon rail is fixed to the right edge of the window.
- Story: "the strength to support people and society" — a school introduced through its people and its place: a real, lively photo, tinted with the school's colour geometry, under a confident name.
- Signature motion: the photo fades in after the word (opacity, 1.2s, delay 1.2s) and the slider crossfades several photos; sections rise in on view (IntersectionObserver threshold .3, 1.2s `cubic-bezier(.6,0,.4,1)`); figures count up.

### (2) Our transposition (same composition, same motion idea, same image type)
- Scene: a paramedic college. The documentary photo **P01** shows an instructor kneeling beside a training manikin, holding a stopwatch, while a student does chest compressions and another student watches the manikin's small green feedback light. Same story: "people who arrive first, taught by people who have" — a college introduced by its people in the room where they train.
- Same composition: lead line + stacked three-line name at the left, slightly overlapping a large 1.3:1 photo flush to the right frame edge; polygons crossing the photo; a play disc at its bottom-right; a red rail fixed at the right edge.
- Same image type: real documentary photography (IMAGERY photo).
- Motion: the photo moves under the static polygons with `sp-parallax` (the reference's photo motion becomes a scroll motion; the hero gets no reveal because the first screen must be visible immediately). The section rise-in and the count-up are carried over as `sp-reveal--up` and `sp-count` (§6).
- Our extra required by the plan row (first_screen `timeline-line`): one hairline "term line" along the bottom of the photo column (KV item 7).

### (3) KV checklist (all items built in the first screen and visible at 1440×900 and 1280×800)
| # | Reference element | Our counterpart | Position (1440×900) | Motion | Image |
|---|---|---|---|---|---|
| 1 | Giant condensed name in three stacked lines, overlapping the photo edge | "KYU / KYU / COLLEGE" Newsreader 600 caps, navy `#1E2A3A`, width-matched lockup (lines 1–2 `hero` size, line 3 sized so its width equals line 1 ±4%), grid overlap (not absolute) | x 80–520 (overlaps photo by 78px), y 270–830, bottom aligned with photo bottom | none | — |
| 2 | Bold lead line above the name | "Trained to arrive first." Newsreader 600 `clamp(1.5rem,2.4vw,2.25rem)`, letter-spacing .02em | x 80, y ≈ 205 | none | — |
| 3 | Large photo box flush to the right frame edge, 1.3:1, radius 0 | P01 instructor timing compressions | x 442–1360, y 120–830 (918×710), object-position 42% 40% | `sp-parallax`, `--sp-par: 8%` (mobile 5%) | P01 |
| 4 | Crossed translucent triangles over the photo, spilling onto the ground | `kk-tri.svg` A–D + rose ground spill (§1 T1) | over the photo; spill on the right ground above/below it | static (photo moves beneath) | — |
| 5 | Black play disc + caption at the photo's bottom-right | Ø56 navy disc with white triangle, caption "Watch a drill" Source Sans 3 600 .8125rem navy on a white 4px-padded chip, links to the Paramedic Diploma page | inside photo, right 46px, bottom 46px | hover `scale(1.05)` .3s ease-out (tok(g)) | — |
| 6 | Fixed red icon rail at the right window edge | 80px rail `#D9001E`, four cells 90px tall: Apply, Fees, Visit, Contact, white 22px line icons + white labels | fixed, x 1360–1440, y 0–360 | none | — |
| 7 | (plan row: timeline-line) | Term line: 1px navy line under the photo with four red 9px dots at 0 / 33 / 66 / 100% and labels "Sep · Classroom", "Dec · Skills lab", "Mar · Ride-along", "Jul · Qualify" | x 442–1360, y 852 (labels above the line, .8125rem) | none | — |
Image list entries: P01 (§8). Forbidden in the first screen: table, form, search box, centred giant text, vertical text, any label absolutely positioned over text.

---

## 3. Colour (reference values, tok(a))
| Role | Reference | Ours | Note / reason | Share of a page |
|---|---|---|---|---|
| Ground | `#EBEEEE` | `#E9EDF0` | same lightness, 2° cooler to sit with navy | ~50% |
| Ink (display, buttons, disc) | `#000000` | `#1E2A3A` | **changed**: plan palette tetsu-kon navy; black → navy keeps the same "darkest value" role and contrast 14.6:1 on ground | ~15% |
| Body text | `#444444` | `#3A4553` | same lightness, navy-tinted | text |
| Accent (signal red) | `#E60020` (hover `#C8142F`) | `#D9001E` (hover `#B80019`) | −3% lightness, same hue; white on it 5.3:1 for the rail labels | rail + numerals + subtitles, ≤ 4% |
| Accent tint | `#FDECED` | `#FCEBEC` | notices / focus ring ground | < 1% |
| Overlay blue / rose / aqua / straw | `#98AADE` `#DE8289` `#78D7DD` `#EDC880` | identical | only inside photos (T1) and the vignette tile (T4) | in photos |
| White | `#FFFFFF` | `#FFFFFF` | header after first section, story cards, fees rows ground | ~25% |
| Hairlines | `rgba(0,0,0,.1)` | `rgba(30,42,58,.14)` | navy-based equivalent | 1px |
- First-screen saturated share (`scripts/check-first-screen.py`): reference 3.0%. Ours: hard cap **10%**, target ≤ 6% (rail 80×360 = 2.2%, red dots, P01 graded high-key with the polygons). No saturated block anywhere bigger than the rail; red is never a section background.
- Recent themes' main colours avoided as the lead: not beige, not the dark macro of Kaban, not Kataribe's blue numbers band.

## 4. Type (font_direction **serif**)
| Use | Latin | zh-TW | ja |
|---|---|---|---|
| Display / headings | **Newsreader** (variable, opsz 6–72, wght 200–800; we use 500/600 + 400 italic) | `"Newsreader", "Noto Serif TC", "Songti TC", serif` | `"Newsreader", "Noto Serif JP", "Hiragino Mincho ProN", serif` |
| Body | **Source Sans 3** (variable, 400/600/700) | `"Source Sans 3", "PingFang TC", "Microsoft JhengHei", sans-serif` (no Noto Serif, no JP font, per repo contract) | `"Source Sans 3", "Hiragino Sans", "Yu Gothic", sans-serif` |
- Fonts are bundled woff2 and loaded only through `theme.json` `fontFamilies[].fontFace` (Newsreader normal + italic, Source Sans 3, Noto Serif TC 600 subset, Noto Serif JP 600 subset), so the block editor iframe and the front end show the same faces. Because style.css uses `:lang()` stacks, copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it. List every file in theme-meta.json `fonts[].files` with license (OFL) and name each family in readme.txt. CJK subset: use the Hokuto / Hada substitute method (the subset script is known broken).
- Reference tok(b) uses a condensed sans (Barlow Condensed 600/900); our serif direction keeps the same role (giant, caps, tight, line-height ≤ 1, letter-spacing −.02em) in Newsreader 600 at display optical size.
- theme.json font sizes: `small` .875rem, `medium` 1.0625rem (body), `large` 1.625rem, `x-large` 2.625rem, `xx-large` 4.25rem, `huge` `clamp(4.25rem, 9vw, 8.5rem)`, `hero` `clamp(5.25rem, 10.5vw, 10.5rem)`. Maximum = 10.5rem (≥ 4.25rem rule met).
- Body 1.0625rem / line-height 1.8 / letter-spacing .01em (tok(b) 16px / 1.8 / .03em; .03em is for Japanese, kept for ja and zh-TW). CJK: headings ≈ 0.75× the English size, body line-height 1.85; fr/de `hyphens:auto`.
- Hero lockup sizes: lines 1–2 `hero` size, line-height .86; line 3 "COLLEGE" `clamp(2.45rem, 4.9vw, 4.9rem)` (implementer: measure at 1440 and 390, adjust so its width matches "KYU" within ±4%; no JS fitting).
- Buttons (tok(d)): pill, radius 50px, navy `#1E2A3A`, min 300×60 desktop (min-height 52 mobile, full width), white Source Sans 3 600 1rem label + a 32px long arrow (inline SVG line). Hover: background `#2C3B50`, arrow translates 6px, .3s ease-out. Radius 0 on photos and cards. No shadows anywhere.

## 5. Header, rail, footer
- Header (90px, tok(c)): ground `#E9EDF0`, not sticky (no scroll script). Left: a 12×12 red square + wordmark "Kyukyu College" Newsreader 600 1.5rem navy. Centre (plan nav `centered`): one menu, Source Sans 3 600 .9375rem navy, gap 36px: Course · Ride-along · Admissions · Fees · Faculty · Stories (About, Campus, Contact sit in the footer and in the rail). This is the only top menu.
- Rail (KV 6), ≥ 1024px only: header template part contains a Group `.kk-rail` (`position:fixed; top:0; right:0; width:80px; z-index:50`), four link cells 80×90, `#D9001E`, white icon 22px (pencil = Apply → Admissions, book = Fees, pin = Visit → Campus & visit, envelope = Contact), label Source Sans 3 700 .75rem white, horizontal text (no vertical text), 1px `rgba(255,255,255,.35)` dividers inset 12px; hover `#B80019`. Under the cells, a Ø50 navy "top" disc fixed at right 15px bottom 45px (anchor `#top`). Body gets `padding-right: 80px` at ≥ 1024 so nothing hides under the rail.
- < 1024px: rail hidden; header shows the wordmark, a small red pill "Apply" (Source Sans 3 700 .8125rem, white on `#D9001E`, radius 50px, 36px tall) and the menu toggle (core navigation overlay). No fixed bottom bar (would overlap text at 390).
- Footer: white ground, frame lines continue; four columns: wordmark + address; Pages (About, Campus & visit, Contact, Stories); Hours; Open evening line + pill "Book a visit". Bottom row .8125rem: "© Kyukyu College · Northmere".

---

## 6. Home page

### First screen composition
- Desktop 1440×900: see KV table §2(3). Grid on `.kk-hero` (alignfull, padding 0 80px, `min-height: calc(100svh - 90px)` capped at 810px): `grid-template-columns: 362px 78px 1fr; grid-template-rows: auto 1fr auto;` lead in col 1 row 1, lockup in col 1/3 rows 2 (z-index 2, align-self end), photo figure col 2/4 rows 1/3 (z-index 1), term line col 2/4 row 3. Photo height `min(710px, calc(100svh - 190px))`, width fills to the frame line.
- 1280×800: same grid, side margin 80 → photo x 402–1200, lockup scales by vw.
- Mobile 390×844: one column, 20px margins. Header 64px; lead line 1.25rem; lockup lines 1–2 5.25rem, line 3 2.45rem (all in flow, no overlap with the photo); photo 4:3 full content width with polygons and disc (disc Ø44); term line becomes a 2×2 list of the four labels each with a red dot, in flow. Nothing absolutely positioned over text, no vertical text. First screen shows the lead, the lockup and the top of the photo.

### Block order
| # | Pattern | Purpose | Layout and photos | Copy |
|---|---|---|---|---|
| 1 | `front-hero` | KV: who we are | §2(3). P01 with T1 + `sp-parallax` | lead line (4 words) + term-line labels + disc caption only; no paragraph in the hero (it would collide with the lockup) | ~15 words |
| 2 | `front-about` | what the college is | T2 `kk-split` row: left ABOUT + red sub "A college for the first eight minutes"; right H2 statement "We teach the work that happens before the hospital." + 2 paragraphs (founded 2011, small cohorts of 24, instructors who still work shifts). No photo. `sp-reveal--up` on word and right cell | 120 words |
| 3 | `front-term` | how a term is arranged (page_structure) | T2 head row (TERM / "How a year is arranged") then **T3** three sticky rows: 01 Classroom (P02), 02 Skills lab (P03), 03 Ride-along (P04). Text `sp-reveal--up` | 3 × 55 words |
| 4 | `front-band` | breath + place | **T1** full-bleed 2.2:1 band P05 with `kk-tri-band.svg`, `sp-parallax --sp-par: 10%` (mobile 6%); covers the frame lines; one caption line below inside the frame, .875rem: "The bay at Northmere station, 06:40, before the day crews sign on." | 15 words |
| 5 | `front-week` | what a ride-along week asks (process-timeline) | T2 head row: left WEEK + sub "What a ride-along week asks", right paragraph + P06 3:2 (616 wide). Then a **horizontal ruled timeline** across the full 1280 frame: 1px navy line, five stops at equal spacing, red 11px dots; above the line: day (Newsreader 600 1.5rem) + time (Source Sans 3 600 .875rem red, tabular, nowrap); below: 2-line text (~22 words). Stops `sp-stagger` + `sp-reveal--up`. Mobile: vertical list, 1px line at x 28, dots on it, text right (allowed: page_structure is process-timeline) | 60 + 5 × 22 words |
| 6 | `front-facts` | numbers | T2 `kk-split`: left T4 vignette tile 616×616 (`kk-vignette.svg`, as an image block with alt text); right FACTS + sub "The course in four numbers", then 2×2 hairline cells: **36** weeks a year · **480** hours on shift · **8** students per instructor in the lab · **24** places per intake. Number Newsreader 600 `clamp(4.25rem,7vw,6.5rem)` navy, unit line Source Sans 3 600 .9375rem `#D9001E`; each number paragraph `sp-reveal sp-count` | 4 × 8 words |
| 7 | `front-fees` | courses and fees (price list) | T2 head row: FEES + sub "Courses and what they cost"; right: paragraph about instalments and bursaries. Then the **price list** (§9 six rows), full frame width 1280 at ≥ 782: columns name+note / length / intake / fee; fee Newsreader 600 1.5rem, `white-space:nowrap; text-align:right`, tabular; rows 1px hairlines, white row ground. No reveal on the table. Pill "Fees & funding →" | 40 + table |
| 8 | `front-entry` | who the course accepts | T2 `kk-split`: left P08 4:5 (616 wide, radius 0); right ENTRY + sub "Who the course accepts", 5 requirement rows: red numeral 01–05 Newsreader 600 2.5rem + one sentence, hairlines between rows (`sp-stagger`), pill "Admissions →" | 110 words |
| 9 | `front-notes` | stories (3 posts) | T2 head: NOTES + sub "From the classroom and the road"; Query Loop, 3 latest posts in a 3-column row (gap 48px): featured image 4:3 (P09, P10, P11), white card ground below with red category label .75rem 700 uppercase, title Newsreader 600 1.375rem, date, ↗ icon right. Row `sp-stagger`, cards `sp-reveal--up` | Query Loop |
| 10 | `front-visit` | come and see | T2 `kk-split`: left P12 3:2 (616 wide); right VISIT + sub "Open evening, first Thursday of the month", address, hours lines, navy pill "Book a visit →" (Campus & visit page) | 60 words |
English home ≥ 250 words with three narrative paragraphs at least (blocks 2, 3, 5). CJK home ≥ 500 characters.

### Home photo positions (11, no repeats)
P01 (hero) · P02, P03, P04 (term rows) · P05 (band) · P06 (week head) · P08 (entry) · P09, P10, P11 (story cards via posts' featured images) · P12 (visit). Plus the T4 vignette tile (SVG, not counted). ≥ 8 ✓.

### Comparison with recent themes
| # | Kataribe Partners | Yanagi Hygiene | Kaban Luggage | Kogarashi Inn | **Kyukyu College** |
|---|---|---|---|---|---|
| 1 | full-bleed photo + slogan + docked card | ceiling-void photo hero + skyline foot | dark macro hero + peeking strip | top/bottom halves cover + clock | **name lockup at left, framed photo at right with crossed polygons, red rail, term line** |
| 2 | brief band | year intro wash + marquee | dark trip scene, vertical lines | dark parallax intro band + portrait | **hairline split row: giant word + statement** |
| 3 | 3×3 fit cells | building cross-section hotspots | counter split | mist news | **sticky photo + red-numbered term chapters** |
| 4 | week strip of 5 photos | plans | three-part catalogue | rates | **full-bleed tinted photo band** |
| 5 | blue numbers band | sticky bottom bar | ink fitting rows | day log lines | **horizontal ruled week timeline** |
| 6 | stories cards | … | price list | … | **vignette tile + count-up figures** |
| 7 | retainers | … | stories mosaic | … | **price list** |
| 8 | … | … | visit | … | **entry requirement rows beside a photo** |
| 9 | | | | | **three magazine cards** |
| 10 | | | | | **visit split row** |
Why not alike: no docked card, no dark hero, no halves or clock, no hotspots, no marquee, no photo mosaic. Our page reads as one ruled two-column frame (vertical hairlines through every section), which none of the four uses; the hero is a typographic lockup + framed photo, not a full-bleed cover; the colour geometry (polygons) and the fixed red rail are new. Kataribe's week strip is five photos; ours is a single hairline with five dots and text. Price list exists in Kaban too but here it sits inside the split frame with a different head (giant word) and is required by the industry.

---

## 7. Inner pages (9 + templates; no sidebar anywhere)
Every inner page opens with the **page head pattern** `page-head`: T2 `kk-split` row (left giant word + red subtitle; right H1 page title Newsreader 600 `xx-large` 4.25rem + 40-word intro), then a frame-width photo 2.6:1 (1280 wide, radius 0) with `kk-tri-band.svg` and `sp-parallax --sp-par: 6%`. Pages close with a split row "Next" linking to the next page in the course path + navy pill.
1. **About the college** (`page-about`, word ABOUT, head P12): founding in 2011 by Dr. Ruth Adeyemi-Holm and two station paramedics; how we teach (scenario first, theory behind it); T3 rows with P16 / P13 / P15; a ruled list of the building (two classrooms, a skills lab with two ambulance-body simulators, a drill hall).
2. **Paramedic Diploma** (`page-course`, word TERM, head P15): Year 1 three terms as T3 rows (P02, P03, P04) with module rows under each term (hairline rows: module name / hours); Year 2 (consolidation, 480 ride-along hours total across both years, final assessment in July); the EMT Certificate in a short split row.
3. **Ride-along placements** (`page-ride-along`, word WEEK, head P05 band crop different from home: object-position 70% 50%): the same 5-stop week timeline (horizontal ≥ 782, vertical mobile); T3 rows before / on shift / after (P06, P07, P09); kit list rows; the placement supplement fee ($640) linked to Fees.
4. **Admissions** (`page-admissions`, word ENTRY, head P08): five requirements rows (same as home); the 5-step process as a horizontal ruled timeline (Apply by 31 March → Written test April → Fitness & manual handling assessment April → Interview May → Health and background check June); T3 rows test / fitness / interview (P16, P11, P17); dates for the February intake (apply by 30 September).
5. **Fees & funding** (`page-fees`, word FEES, head P07): the full price list (§9, same six rows and prices as home); application fee; instalments (three per year, due Sep / Jan / Apr); two bursaries of $3,000 per year; refund line (full refund of tuition if you withdraw before the first day of term, application fee non-refundable).
6. **Faculty** (`page-faculty`, word STAFF, head P16): eight people (§9) in hairline rows (name Newsreader 600 1.5rem, role red .875rem, two-line bio), grouped in two T3 rows: sticky portrait P13 beside the first four, P14 beside the last four. Not a card grid.
7. **Campus & visit** (`page-campus`, word VISIT, head P17): address and getting there (bus 14 and 31, 6 minutes from Northmere station), T4 vignette tile beside facility rows, open evening (first Thursday 18:00–20:00), office and skills-lab hours, P12 3:2 in a split row.
8. **Stories** (posts page, `home.html`; also `archive.html`, `category.html`, `tag.html` = archive copy with TAG wording, `search.html`): head word NOTES (TAG on tag archive), first post large (featured image with polygons, 7/12) then 3-column magazine cards. Single (`single.html`): category as red subtitle under the word NOTES (huge size reduced to `xx-large`), title H1, date, featured image with `kk-tri.svg` 3:2, text column 720px.
9. **Contact** (`page-contact`, word WRITE, head P10): address, email `admissions@kyukyu-college.example`, phone `+1 555 0142`, office hours; prospectus request = mailto link; a "Visit" pill. No form required.
- Newsletter screen → Stories page. Demo posts: 6 (3 stories §9 + 3 college news: "Open evening dates for spring", "New ambulance-body simulator in the skills lab", "February intake: applications open"), categories Stories / College news, tags ride-along, skills-lab, admissions, open-evening, faculty.
- Featured images: story 1 P09, story 2 P10, story 3 P11, news 1 P17, news 2 P03, news 3 P16.

## 8. Photos (17, Grok, one at a time; read every image)
IMAGERY: **photo** (follows the reference: natural-light campus and people photography). STYLE (exact string on every prompt):
`photorealistic documentary photograph, 35mm lens, bright soft daylight, high-key clean modern training college and ambulance station, pale grey walls, navy uniforms with small red details, diverse adults of mixed ages and ethnicities, candid focused moment, natural skin, realistic hands, no text, no logos, no letters on vehicles or clothing, no signage, no Japanese elements`
Each ≤ 300 KB, ≤ 2000px, webp, 0 cutouts; one readme.txt line per image (AI-generated, CC0). Vehicles plain white with a red stripe, no lettering, no star of life.
| ID | Subject / composition | Ratio | Used on (once per page) |
|---|---|---|---|
| **P01** | instructor kneeling with a stopwatch beside a CPR manikin on a floor mat, a student doing chest compressions, a second student leaning in to watch the manikin's small green feedback light; people in the left two thirds, window light | 4:3 (1.3:1) | **Home hero** |
| **P02** | small classroom, instructor at a blank whiteboard, students with printed ECG strips (no readable text) on desks | 4:5 | **Home term 01**; Course term 01 |
| **P03** | skills lab: two students lifting a manikin on a stretcher into an ambulance-body simulator | 4:5 | **Home term 02**; Course term 02; news post 2 |
| **P04** | student in a reflective jacket beside a paramedic checking a kit bag at the open back of a white ambulance | 4:5 | **Home term 03**; Course term 03 |
| **P05** | ambulance bay at morning, two plain white ambulances with doors open, two crew walking past, wide | 2.2:1 | **Home band**; Ride-along head |
| **P06** | shift handover at a station table, crew and a student with clipboards (no readable text), coffee mugs | 3:2 | **Home week**; Ride-along row 1 |
| P07 | close-up of hands tightening stretcher straps | 3:2 | Fees head; Ride-along row 2 |
| **P08** | applicant lifting a weighted carry chair with an assessor timing beside her in a drill hall | 4:5 | **Home entry**; Admissions head |
| **P09** | graduate in crew uniform at an ambulance's side door, calm half smile | 4:3 | **Home story card** (story 1); Ride-along row 3 |
| **P10** | mature student (40s) studying with a tablet on a bench outside the college under trees | 4:3 | **Home story card** (story 2); Contact head |
| **P11** | instructor debriefing two students after a scenario, one hand raised explaining | 4:3 | **Home story card** (story 3); Admissions row 2 |
| **P12** | low modern brick-and-glass college building with trees, students walking toward the entrance | 3:2 | **Home visit**; About head; Campus split row |
| P13 | principal (woman, 50s, short grey hair, navy blazer) standing in the skills lab | 4:5 | About row 2; Faculty row 1 |
| P14 | lead instructor (man, 40s, paramedic uniform) beside an ambulance | 4:5 | Faculty row 2 |
| P15 | drill hall with a staged roadside scenario, a car door and a manikin, students working under bright hall lights | 3:2 | Course head; About row 3 |
| P16 | library corner, two students with an anatomy torso model | 3:2 | About row 1; Admissions row 1; Faculty head; news post 3 |
| P17 | open evening: visitors in the skills lab being shown a defibrillator trainer | 3:2 | Campus head; Admissions row 3; news post 1 |
Per-page check (no repeats on a page):
- Home: P01 P02 P03 P04 P05 P06 P08 P09 P10 P11 P12.
- About: P12, P16, P13, P15. Course: P15, P02, P03, P04. Ride-along: P05, P06, P07, P09. Admissions: P08, P16, P11, P17. Fees: P07. Faculty: P16, P13, P14. Campus: P17, P12 + vignette. Contact: P10. Stories index: P09, P10, P11, P17, P03, P16 (each once).
Total 17 images (12–18 ✓).

## 9. Fixed facts and numbers (identical on every page and in all five languages)
- Kyukyu College, founded **2011**, 41 Wexford Lane, Northmere (fictional). Office Mon–Fri 08:30–17:00; skills lab open to students Mon–Sat 07:30–21:00; open evening first Thursday of each month 18:00–20:00. Email admissions@kyukyu-college.example, phone +1 555 0142.
- Intakes: September and February, **24 places** each. Year = **36 weeks**, three 12-week terms (Classroom Sep–Dec, Skills lab Jan–Mar, Ride-along Mar–Jun); qualify in July of Year 2. **480 hours** on shift across the diploma. Lab ratio **1 instructor : 8 students**.
- Price list (USD, 6 rows):
  | Course | Length | Intake | Fee |
  |---|---|---|---|
  | Paramedic Diploma | 2 years full-time | Sep / Feb | $14,800 per year |
  | Emergency Medical Technician Certificate | 1 year | Sep | $9,600 |
  | Foundation Term (science and fitness, pre-entry) | 12 weeks | Sep / Feb | $2,400 |
  | Ride-along placement supplement (uniform, insurance, vaccinations) | per year | — | $640 |
  | Advanced Life Support refresher | 3 days | monthly | $720 |
  | Emergency driving theory | 2 days | monthly | $480 |
  Application fee $60. Bursaries: two of $3,000 per year. Instalments: three per year (Sep, Jan, Apr).
- Ride-along week (5 stops): Mon 07:00–19:00 day shift · Tue 07:00–19:00 day shift · Wed rest day + reflective log · Thu 19:00–07:00 night shift · Fri 10:00–12:00 debrief with your tutor.
- Entry requirements (5): aged 18 or over; school-leaving certificate with English, maths and a science (or our Foundation Term); pass the fitness and manual-handling assessment (carry-chair lift, 3-minute step test); health clearance and vaccinations; background check. A driving licence is welcome but not required to start.
- Admission process (5): apply by 31 March (Sep intake) / 30 September (Feb intake) → written test (April / October) → fitness assessment → interview → health and background check.
- People (8): Dr. Ruth Adeyemi-Holm (Principal, former emergency physician); Tomás Arriaga (Lead clinical instructor, paramedic for 18 years); Grace Lindqvist-Mbeki (Skills lab coordinator); Owen Castellanos (Ride-along placement manager); Priya Raman (Pharmacology tutor); Samuel Okoro (Emergency driving instructor); Lena Fischer (Admissions officer); Marco Bellini (Student support and wellbeing).
- Stories (3 posts): "The night shift I stopped counting" (Aiyana Clarke, class of 2023, now on a city crew; P09); "Starting at forty-one" (Daniel Weiss, joined after twelve years in warehouse work; P10); "Why we time every compression" (Tomás Arriaga; P11).
- No guarantees of employment, no pass-rate statistics, no awards, no real services or brands.

## 10. Scroll motion (sp-scroll; three effects + required parallax)
| Effect | sp class | Applied to | Reference source (trigger / time / easing) | Our values |
|---|---|---|---|---|
| Section rise-in | `sp-reveal sp-reveal--up`; rows in a parent `sp-stagger` | T2 giant words + right cells (blocks 2, 3, 5, 6, 8, 9, 10), T3 text cells, week stops, entry rows, story cards | Kokushikan `.js-in-view`, IntersectionObserver threshold .3, transform 1.2s `cubic-bezier(.6,0,.4,1)` (tok(g)) | `--sp-dur: 1.2s; --sp-ease: cubic-bezier(.6,0,.4,1); --sp-dist: 24px` |
| Count-up | `sp-reveal sp-count` | four numbers in block 6 (36, 480, 8, 24) | Kokushikan counter, IO threshold .5, 1000ms linear-ish rAF | sp-count default (1.2s easeOutCubic) |
| Parallax | `sp-parallax` | hero photo wrapper (block 1), band (block 4), every inner page-head photo | Kokushikan hero photo fade (opacity 1.2s, delay 1.2s) and slider crossfade; translated to scroll motion | see below |
Not on: hero (no reveal), the price list, forms, legal text, horizontal-scroll children. Max 3 effect kinds per page.

### Parallax (required)
- Block 1 hero: the figure wrapper `.kk-hero__photo` gets `sp-parallax`, `style="--sp-par:8%"`; moving layer = the direct `img` (P01). The polygon overlay `::after` and the play disc are on the wrapper, not on the moving layer, so they stay still while the photo slides under them. Front text (lockup) is outside the parallax wrapper. Mobile: `--sp-par: 5%` via `@media (max-width:781px){.kk-hero__photo{--sp-par:5%}}`.
- Block 4 band: alignfull Group `.kk-band sp-parallax`, `--sp-par: 10%` (mobile 6%), background = P05 (`figure>img`), front = the polygon overlay only; caption is below the band, outside.
- Inner page heads: `--sp-par: 6%` on every 2.6:1 head photo.
- Wrapper `overflow: clip`. Reduced motion / `?sp-static` / editor: no movement. Verify with `check-parallax.mjs` (≥ 6px desktop and mobile).

## 11. Responsive rules (hard)
- 390px first screen: no vertical text, no absolutely positioned label over text; lockup, lead and photo in flow; rail hidden (Apply pill in the header instead).
- Frame lines: < 782 only outer lines at 20px; centre line hidden; split rows stack (left cell first, then right cell).
- Price list at ≥ 782: full frame width (not a narrow column), fee column `white-space:nowrap; text-align:right; min-width: 10ch`, nothing clipped at 800 and 1280. Under 782: each row stacks (`display:block` cells), name first in Newsreader 600 1.25rem, then length · intake on one line, fee on its own line left-aligned 1.375rem. Every other table (Course module hours, Faculty is rows not table) also stacks under 782.
- Week / admissions timelines: horizontal ≥ 782, vertical < 782; no horizontal scroll.
- `html, body { overflow-x: clip }`; sticky parents `overflow: clip`. 390 and 1280: `scrollWidth == innerWidth`.

## 12. Similarity table (target ~80%)
| Dimension | Reference (token) | Kyukyu College |
|---|---|---|
| Ground | `#EBEEEE` (a) | `#E9EDF0` |
| Ink | `#000000` (a) | `#1E2A3A` (plan palette; same role) |
| Accent | `#E60020`, ~3% first screen (a) | `#D9001E`, ≤ 6% target |
| Overlay tints | `#98AADE #DE8289 #78D7DD #EDC880` ~25% alpha (a, e) | identical hexes, .24–.34 |
| Display type | Barlow Condensed 600/900 caps, lh 1, −.02em (b) | Newsreader 600 caps, lh .86–.9, −.02em (serif direction) |
| Body | 16px / 1.8 / .03em (b) | 17px / 1.8 / .01em (CJK .03em) |
| Hero word | 3 lines ≈ 190px (b) | 3-line lockup, lines 1–2 168px at 1440 |
| Section word | ≈ 13rem (b) | 8.5rem (fits ≤ 5 letters in the 616 cell) |
| Frame | 80px margins, 1280 column, 616/48/616, 1px lines (c) | identical, lines `rgba(30,42,58,.14)` |
| Header | 90px (c) | 90px |
| Section padding | 120–160px (c) | 140px |
| Buttons | pill r50, black, 300×60, long arrow (d) | pill r50, navy, 300×60, long arrow |
| Photo radius / shadows | 0 / none (d) | 0 / none |
| Hero photo | 928×710, 1.3:1, flush right, op 42% 40% (e) | 918×710, 1.3:1, flush to rail, op 42% 40% |
| Band | full width 2.2:1 + shapes (e) | full width 2.2:1 + shapes |
| Rail | fixed right, 80px, red, 5 cells (f) | fixed right, 80px, red, 4 cells |
| Numerals | red big "01/02/03" + red lead (f) | red 5rem + red lead |
| Play disc | Ø50 black, bottom-right (f) | Ø56 navy, bottom-right |
| Reveal motion | 1.2s cubic-bezier(.6,0,.4,1), threshold .3 (g) | 1.2s cubic-bezier(.6,0,.4,1), 24px |
| Count-up | 1000ms (g) | 1.2s sp-count |
| Sticky list | sticky image 100svh, swap (g) | sticky per row, push swap |
| Hero photo motion | fade 1.2s (g) | parallax 8% |
Photos, copy and logo are our own.

## 13. Home acceptance checklist
1. First screen (1440×900 and 1280×800): all 7 KV items visible: lead line, KYU/KYU/COLLEGE lockup overlapping the photo by ~78px, P01 flush to the frame edge, ≥ 3 crossed polygons + ground spill, play disc, red rail with four cells, term line with four red dots. No table/form/search, no centred giant text. Saturated share ≤ 10% (target ≤ 6%).
2. 390×844: lockup, lead and photo in flow, no overlap, no vertical text, rail hidden, Apply pill in header.
3. T2: three vertical hairlines visible through blocks 2, 3, 5, 6, 7, 8 at 1440; every home section after the hero opens with a ≤ 5-letter giant word ≥ 8rem plus a red subtitle.
4. T3: three term rows, red 5rem numerals, photo pinned while its text scrolls (≥ 782).
5. T1 polygons on P01 and on the P05 band; T4 vignette tile beside the count-up figures.
6. Block order = §6 table; 11 photos, none repeated; story cards come from the posts' featured images.
7. Price list: six rows, prices exactly as §9, full width at ≥ 782, fee column nowrap right-aligned and not clipped at 800 / 1280; stacked under 782.
8. Motion: hero and bands parallax (check-parallax ≥ 6px desktop and mobile, 0 with reduced motion); ≥ 3 reveal elements hidden before entry; count-up on four numbers; nothing left transparent after scrolling to the end.
9. Fonts: Newsreader + Source Sans 3 from theme.json fontFace in editor and front end; max size ≥ 4.25rem; zh/ja headings Noto Serif TC / JP.
10. English home ≥ 250 words, ≥ 3 narrative paragraphs; numbers identical to §9.
