# Design spec — Enkai Rooms (enkai-rooms)

Row b37-4 · type landing (category food-drink) · archetype sticky-media · nav centered · page_structure landing-longform · font_direction **serif** · IMAGERY **photo**.
Reference: https://kyoto-kitcho.com/ (primary; tokens in `brand/reference-tokens.md` = "RT", screenshots `brand/ref/`). Secondary: https://kikunoi.jp/en/ ("RT2").
Similarity target: **80 %** to the reference in colour relationships, photo treatment, motion, decoration and layout. Photos, copy, names and logo are our own; no image, text, pattern file or logo from either reference is reused.

---

## 0. Fixed brand facts (identical on every page, in brand.md and in all five languages)

- **Enkai Rooms** — a restaurant on the harbour of **Calder** (fictional, international-neutral) that keeps **three private rooms** for company dinners, family celebrations and wedding parties. Opened **2011** by **Marguerite Okafor** in a former ropemaker's hall.
- Address: **Enkai Rooms, 14 Harbour Steps, Calder** (fictional; local address order per language in brand.md). Phone **+00 31 555 0186**. Email **rooms@enkai-rooms.example** (the same in every mailto, form fallback and footer).
- Hours: **Dinner Tue–Sat 18:00–23:00 · Private lunches Sat–Sun 12:00–15:30 · Closed Monday. Events office Tue–Sat 10:00–18:00. Every enquiry answered within one working day.**
- The rooms (numbers used everywhere):
  | Room | Seated | Standing | Table | Best for |
  |---|---|---|---|---|
  | **The Long Room** | 40 | 60 | one 14 m oak table (or 5 rounds) | company dinners, wedding parties |
  | **The Garden Room** | 18 | 25 | one long table, courtyard window | family celebrations |
  | **The Lamp Room** | 10 | — | one round table under a brass lamp | small anniversaries, board dinners |
- **Prices (7 items, EUR in every language, per head incl. VAT, service 10 % added; same on Home, Menus, Rooms, Weddings, Company dinners, Ask):**
  | # | Item | Price |
  |---|---|---|
  | 1 | Lamp Room supper — five courses | €68 per head |
  | 2 | Family table — six courses, shared main carved at the table | €78 per head |
  | 3 | Company dinner — six courses, printed menus and name cards | €84 per head |
  | 4 | Wedding party banquet — eight courses, toast glass and cake service | €112 per head |
  | 5 | Paired drinks — a glass with each course, or alcohol-free pairing | €42 per head |
  | 6 | Children's plate (under 12) | €28 per child |
  | 7 | Late room — each hour after 23:00 | €180 per hour |
  Minimum numbers: Lamp Room 6, Garden Room 10, Long Room 20. Deposit 30 % to confirm; final numbers 10 days before.
- **People (7, fictional):**
  1. **Marguerite Okafor** — owner, opened the house in 2011.
  2. **Teodor Brandt** — head chef; the man carrying the first course in the hero (P02).
  3. **Lucía Navarro** — floor manager; sets every name card herself (P01).
  4. **Aiyana Reyes** — events coordinator; answers every "Ask about a date".
  5. **Samir Haddad** — sommelier; the paired drinks.
  6. **Ingrid Solberg** — pastry chef; celebration cakes and the wedding cake service.
  7. **Kwame Mensah** — maître d' for wedding parties and the Long Room.
- **Evenings (3 stories, fictional, no claimed outcomes):** (a) **"Forty at one table"** — a logistics company's tenth-year dinner, Long Room, 38 guests, company dinner menu; (b) **"Eighty candles, sixteen chairs"** — a grandmother's eightieth, Garden Room, 16 guests, family table; (c) **"After the town hall"** — a wedding party, Long Room, 52 standing for the toast then 40 seated, wedding banquet.
- **The single way to book (4 steps):** 1 **Ask about a date** (form on the Ask page or email) → 2 Aiyana replies within one working day and holds the room for **7 days** → 3 Choose the menu (tasting for wedding parties of 30+), pay the 30 % deposit → 4 Final numbers 10 days before; on the night the name cards are set by 17:30.
- One repeated CTA everywhere: **"Ask about a date"** → `/ask-about-a-date/`.

---

## 1. Signature techniques (borrowed from kyoto-kitcho.com and kikunoi.jp; obvious at a glance; do not dilute)

### T1. Hanging paper tag over a thin strip and a black bar (RT (c)(d), `ref/kitcho-top-first.png`)
- Reference: a tall pale paper tag 80 × 174 px hangs from the top-left (x 30) over a 38 px saturated red announcement strip and a 70 px black nav bar; the tag casts a soft shadow onto the hero below. Nav labels separated by short grey hairlines; a white 1 px outline reservation button at the right.
- Ours (every page, header template part): strip **38 px, #6C3524**, centred text "Spring dates are open for company dinners and family tables" (Source Sans 3 .8125rem, ls .08em, #F2EEEA); bar **70 px, #17100D**; tag **80 × 174 at x 30, y 0**, ground #F7F4F1, shadow `0 8px 16px rgba(0,0,0,.35)`, radius 0, z above strip and bar and hanging 66 px into the hero. Tag content top-to-bottom: a 1 px #6C3524 rule 24 px wide, "ENKAI" Cormorant Garamond 600 1.125rem ls .1em #1B1411, "ROOMS" Source Sans 3 600 .5625rem ls .3em, then a 10 × 10 russet square. It is the site logo (link home).
- Centred nav (anchors on home, absolute links elsewhere): Rooms · Menus · Evenings · People · Questions, separated by 1 px × 14 px #5A4A44 rules; right: language links (EN 中 日 FR DE, .75rem) and the outline button **"Ask about a date"** (1 px #F2EEEA, 200 × 40, Source Sans 3 .875rem ls .1em; hover fills #F2EEEA, text #17100D, .4 s ease-out).
- Must not dilute: the tag must visibly hang below the bar onto the hero; the strip stays a saturated russet band (not a hairline); the bar stays near-black.

### T2. 2 × 2 abutting photo tiles with dark scrim, centred serif label and short arrow (RT (c)(e)(f), `ref/scroll-kitcho-arashiyama-2700.png`)
- Reference: four photos 525 × 300 (1.76:1), 4 px gap, container ~1060, 45 % black scrim, centred white serif label with letter-spacing and a 24 px 1 px white arrow under it.
- Ours: home block 3 (below the narrative) and on Rooms, Menus, Weddings, Ask. Container 1060, gap 4 px, tiles 1.76:1, radius 0, scrim `rgba(23,16,13,.45)` (hover .30, .4 s ease-out), label Cormorant Garamond 500 1.75rem ls .12em #F2EEEA centred, arrow SVG 24 × 7 1 px under it at 14 px. Whole tile is a link.
- Must not dilute: four tiles abutting (4 px gap, never cards with padding/radius), scrim dark enough that the labels read white.

### T3. Seasonal caption centred on a dimmed photo (RT2 first screen, `ref/kikunoi-first.png`)
- Reference: on a near-black dish photograph, a two-line centred caption: month name (serif ~20–34 px, wide tracking) and a Latin month line below (~16 px).
- Ours: **"The first course of November" / "Chestnut broth, poured at the table"** — line 1 Cormorant Garamond 500 1.375rem ls .14em, line 2 Cormorant italic 1rem, #F2EEEA, with a 1 px × 32 px #BB944E vertical rule above (RT2 gold hairline). Sits on the hero seam (KV #6) and returns at the head of Rooms, Menus, About, Weddings and Journal on the 168 px title band, recoloured #1B1411 on the pale ground. Editable text in block markup (no CSS `content:`).

### Supporting (required, not counted)
- Gold-label ledger rows on alternating dark rows (RT2 info rows, `ref/scroll-kikunoi-1000.png`): label .6875rem caps 600 ls .2em #BB944E left (120 px), value Source Sans 3 1rem #F2EEEA; rows 52 px, alternating #17100D / #261A16, no borders.
- Title band 168 px with centred serif title + small Latin sub-line (RT (c)) on the pale ground with our own arc hairline pattern (SVG, 1 px #6C3524 at 6 % opacity, 48 px repeat; drawn by us, not seigaiha files from the reference).
- Hairline list rows 1 px #E2DCD8 (RT (d) dated list) for prices, journal list, FAQ.
- Three equal 3:2 room photos, 1060 wide, 8 px gap (RT2 room strip).

### Continuation to inner pages (≥ 4)
| Page | T1 | T2 | T3 | Supporting |
|---|---|---|---|---|
| Rooms | ✓ | ✓ tiles: Menus / Weddings / Company dinners / Ask | ✓ title band caption | 3-photo strip + gold ledgers |
| Menus & prices | ✓ | ✓ tiles: Rooms / Weddings / Company dinners / Ask | ✓ | hairline price rows |
| Weddings & celebrations | ✓ | ✓ tiles: Rooms / Menus / About / Ask | ✓ | gold ledger of the day |
| Company dinners | ✓ | — | — | gold ledger, hairline rows |
| The house (About) | ✓ | — | ✓ | people on hairlines |
| Journal | ✓ | — | ✓ | hairline dated list |
| Ask about a date | ✓ | ✓ tiles: Rooms / Menus / Weddings / Company dinners | — | gold ledger of hours/contacts |

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
kyoto-kitcho.com opens on a pitch-black stage with one glazed dish photographed close and low-key (shallow depth, glaze highlights, deep vignette), the hanging white paper tag at top-left, a thin red strip over a black bar, and a small "SCROLL" chevron centred near the foot. Story: *the house cooks one thing with great care; the room is a calm, set table waiting — the dish first, the rooms after.* Motion: fullpage slides (1000 ms easeInOutCubic); the slide title and button fade in after 700 ms over 1400 ms; a second element after 1500 ms over 1300 ms; background layers drift 400 px and settle over 1.5 s; the scroll cue fades in 4000 ms after 2000 ms. kikunoi.jp adds the seasonal month caption centred on a dimmed dish.

### (2) Our translation (private dining rooms; same scene type, same motion idea, same image type = low-key documentary photo)
Same story turned into a private-hire evening: **the room is being set and the first course is on its way.** Composition is the row's **diagonal-split / split-over-seam / none**: two low-key photographs meet on one diagonal seam — left, Lucía setting name cards along the Long Room's table under warm lamps (P01); right, Teodor carrying the first course through the doorway (P02). The H1 sits across the seam (line 1 ends left of it, line 2 starts right of it), the seasonal caption sits on the seam near the foot with the scroll cue, the tag hangs from the header onto the left photo. Motion keeps the reference's timing: photos fade in 1.4 s after 0.7 s (right photo 0.3 s later), H1 fades in 1.4 s after 0.7 s, caption 1.3 s after 1.5 s, scroll cue 4 s after 2 s, all `cubic-bezier(.65,0,.35,1)`. The hero background layers (both photos) drift with `sp-parallax` (§7) — the reference's "background settles" idea, scroll-driven.

### (3) KV checklist (all built in the home first screen at 1440 × 900, all visible)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Hanging white paper tag with stacked wordmark | Pale tag 80 × 174, "ENKAI / ROOMS", soft shadow, hangs 66 px into the hero | x 30, y 0–174 | none (static with header) | — |
| 2 | Thin red strip above a black nav bar | Russet #6C3524 38 px strip with the spring-dates line; #17100D 70 px bar, centred nav, outline CTA | y 0–108 full width | none | — |
| 3 | Low-key dish close-up on a black stage | Chef carrying the first course through a doorway, plate in focus, steam lit warm, deep shadow | right part of the hero, clipped by the diagonal (top x 60 % → bottom x 44 %) | fade 1.4 s, delay 1.0 s; parallax 8 % | **P02** |
| 4 | Fullpage background image / the room waiting | Floor manager setting name cards along a long table, lamps warm, room in shadow | left part of the hero (top 0–60 %, bottom 0–44 %) | fade 1.4 s, delay 0.7 s; parallax 6 % | **P01** |
| 5 | Title fading in after the slide arrives | H1 "Three rooms, / set for your table." split across the seam, Cormorant 5rem; 1 px #BB944E seam rule between photos | centred on the seam, y 48–66 % of hero | fade 1.4 s, delay 0.7 s | — |
| 6 | Seasonal month caption + SCROLL chevron | T3 caption "The first course of November / Chestnut broth, poured at the table" + "Scroll" + 40 × 14 chevron | on the seam, y 80–94 % of hero | caption fade 1.3 s delay 1.5 s; cue 4 s delay 2 s | — |
No "inspired by, not copied" shortcut: every row above is built and visible in the first screen.

---

## 3. Home page

### First screen composition
**hero_composition: diagonal-split · hero_text: split-over-seam · hero_footer: none · hero_fingerprint: diagonal-split/split-over-seam/none**
- **diagonal-split**: hero height `calc(100svh - 108px)` (792 at 1440 × 900, min 620). Two `figure` layers fill the hero, each `object-fit:cover`: P01 clipped `polygon(0 0, 60% 0, 44% 100%, 0 100%)`, P02 clipped `polygon(60% 0, 100% 0, 100% 100%, 44% 100%)` (clip-path on the *child img wrapper*, not on an observed element). A 1 px #BB944E line is drawn along the seam (SVG line from (60 %, 0) to (44 %, 100 %), 70 % opacity). Both photos are low-key; add a seam vignette `linear-gradient(100deg, transparent 30%, rgba(23,16,13,.55) 50%, transparent 70%)` so the text reads. Not full-bleed single photo; never a bar of facts at the foot.
- **split-over-seam**: H1 two lines, Cormorant Garamond 500, 5rem / lh 1.05 / ls .01em, #F2EEEA. Line 1 "Three rooms," right-aligned, its right edge 24 px left of the seam at that height; line 2 "set for your table." left-aligned, its left edge 24 px right of the seam. The seam crosses the gap between them. Under line 2 (left-aligned with it): one 1.0625rem Source Sans 3 sentence (#E6DED8, max 30ch) "Company dinners, family celebrations and wedding parties, from ten to sixty guests." and the russet filled button "Ask about a date" (200 × 48, #6C3524, text #F2EEEA, ls .1em). Text block is in normal flow in a centred grid over the photos (CSS grid overlay, not absolutely positioned labels).
- **none**: no hero footer row. Only the T3 caption + scroll cue sit at the seam foot (KV #6) — they are centred content, not a footer bar.
- 390 px: hero becomes top/bottom: P01 at 4:3 with clipped bottom edge `polygon(0 0,100% 0,100% 86%,0 100%)`; then on #17100D the H1 (2.75rem, line 1 left, line 2 right-aligned = seam echo), sentence, button; then P02 4:3 with clipped top edge `polygon(0 14%,100% 0,100% 100%,0 100%)`; caption below it centred. All in flow — **no vertical type, no absolutely positioned labels over text**. Tag 56 × 120 at x 16; strip text has padding-left 84 px so its box never intersects the tag.

### Block order (anchor ids in brackets)
| # | Block | Purpose | Layout & photos | Copy |
|---|---|---|---|---|
| 0 | Header (T1) | brand, anchor nav, CTA | strip 38 + bar 70 + tag | strip line, 5 anchors, CTA |
| 1 | Hero `#top` | KV | §3 composition; **P01, P02** | H1 + 1 sentence + CTA + caption |
| 2 | The evening `#evening` | narrative (≥3 paragraphs) | title band 168 px pale + arc pattern ("An evening in a private room" / sub-line "Private dining · Banquets · Celebrations"); full-bleed 1440 × 625 (2.3:1) **P03**; then a 640 px centred column of 3 paragraphs (each 45–70 words) | ~190 words |
| 3 | Explore (T2) | route to rooms/menus/weddings/ask | 2 × 2 tiles 1060, 4 px gap: Rooms **P04**, Menus **P05**, Weddings **P06**, Ask about a date **P07** | 4 labels |
| 4 | The rooms `#rooms` | three rooms and sizes | dark #17100D section; H2 "Three rooms, three sizes"; RT2 strip of three 3:2 photos (1060, 8 px gap): Long **P08**, Garden **P09**, Lamp **P10**; under each photo its name (Cormorant 1.75rem) and a gold-label ledger (Seated / Standing / Table / Best for / From) on alternating rows | 3 × 5 ledger rows + 1 line each |
| 5 | Menus & prices `#menus` | per-head cost | pale; two columns 450 text left (H2 "What a banquet costs per head", 2 short paragraphs incl. service/deposit) + right photo **P11** (3:2, 560 wide); below, full-width (1060) price table of the 7 items on hairlines, price column right, nowrap | ~80 words + 7 rows |
| 6 | Parallax band | the table mid-evening | full-bleed Cover 1440 × 640 **P12**, `sp-parallax` `--sp-par:10%`; foreground centred on a 45 % scrim: T3-style caption "Evenings we remember" + one line "Three tables from the last year, told by the people who set them." | 2 lines |
| 7 | Three evenings `#stories` | social proof without claims | #261A16 dark continuation; three text columns (1060 / 3, 48 px gap), each: gold label (room · guests), Cormorant 1.5rem title, 50–60-word story | ~170 words |
| 8 | The people `#people` | who runs the floor | pale; photo **P13** (3:2) left 7/12; right 5/12 list of the 7 people on 1 px hairlines: name Cormorant 1.25rem + role .875rem | 7 rows |
| 9 | How booking goes | single path | pale #ECE7E4; 4 numbered steps in one row (Cormorant numerals 3rem #6C3524, 1 line title, 20–30 words each); not a timeline | ~110 words |
| 10 | Questions `#questions` | FAQ | 6 `details` rows on hairlines, 840 wide (minimums, dietary needs, deposit, children, music/speeches, access & parking) | ~150 words |
| 11 | Ask `#ask` | the one CTA, repeated | dark #17100D; centred H2 "Ask about a date", 1 sentence, russet button, then email + phone + hours line; small **P14** name-card photo (4:5, 280 wide) left of the text on desktop | ~40 words |
| 12 | Footer | contacts + dates list | #120C0A; 4 columns: tag mini + address; hours; pages (Rooms, Menus, Weddings, Company dinners, The house, Journal, Ask, Dates list, Privacy, Terms); "Dates list" newsletter slot (§9) | |
Home image positions: **P01–P14 = 14**, no repeats. English words ≥ 250 (≈ 750 planned), narrative paragraphs ≥ 3 (block 2 + stories).

### Comparison with the most recent themes (home order must not match)
| Theme | Hero | Sequence after hero |
|---|---|---|
| Hozue Food Festival | framed photo window + card row | weekend chips → programme panel → tickets → riverbank parallax → people → getting here → FAQ → journal → waitlist |
| Shimaya Villas | framed window + hold-dates bar | why direct → morning → three houses → season list → what direct adds → arrival day → hosts → hold dates → journal |
| Kuruma Tabi | split hero + timeline foot | welcome → day timeline → route rows → fares band → guides → vehicle circles → stories band → FAQ → form |
| Nagare Workation | three-pane desk hero | horizontal strip → label-cell price board → seam portrait → coworking column → routine day → stories → request |
| **Enkai Rooms** | **diagonal two-photo seam, no footer** | **title band + wide room photo narrative → 2×2 scrim tiles → dark 3-photo strip with gold ledgers → hairline per-head price table → parallax band → dark story columns → people list → 4 steps → FAQ → ask** |
Why different: the only hero without a frame/pane/foot row; the 2×2 abutting scrim tiles and hanging-tag header appear in none of them; prices are a hairline table, not cells or a band; no horizontal strip, no timeline, no circles; dark/pale alternation of a restaurant at night rather than daylight tones.

---

## 4. Inner pages (11 pages + journal list + 3 posts; slugs identical in every language)
Every inner page: T1 header; 168 px pale title band (title Cormorant 600 2.25rem ls .1em + Latin sub-line .875rem ls .1em; RT (b)(c)); content max 1060; footer.
1. **Rooms** `/rooms/` — T3 caption; full-bleed P08 (2.3:1); each room a section: H2 room name, 2 paragraphs, gold ledger (Seated, Standing, Table, Light, Minimum guests, From €/head), its photo (Long P08 is the band, so here Garden **P09**, Lamp **P10**, Long **P12**); floor plan note; T2 tiles.
2. **Menus & prices** `/menus/` — T3 caption; P05 wide; the full 7-item price table (identical to Home); four sample menus (course lists, 6–8 lines each) on hairlines; drinks with **P15**; dietary needs paragraph; T2 tiles.
3. **Weddings & celebrations** `/weddings/` — T3 caption; **P16** wide; the wedding party day as a gold ledger (17:30 cards set · 18:00 toast standing · 19:00 seated banquet · 22:30 cake · 23:00 late room optional); family celebrations section with P06; story (c) and (b); T2 tiles.
4. **Company dinners** `/company-dinners/` — **P17** wide; printed menus, name cards, speeches & screen, invoice to company; story (a); price rows 3 + 5 + 7 (subset of the table, same figures).
5. **The house** `/about/` — T3 caption; **P18** entrance at dusk; since 2011 (ropemaker's hall), the 7 people with one-line bios on hairlines + P13; a day in the house (morning deliveries → 15:00 briefing → 17:30 cards → service), hours.
6. **Journal** `/journal/` (role posts; empty content) — T3 caption at title band; hairline dated list (RT dated list): date · gold category · title.
7. **Ask about a date** `/ask-about-a-date/` (screen `contact`) — **P07** beside the intro; the 4 steps; gold ledger of hours, phone, email, address; `shippress_form_slot` contact (§9) with mailto fallback; T2 tiles.
8. **Dates list** `/dates-list/` (screen `newsletter`) — waitlist: next season's private-room dates are sent to the list one week before they open publicly; **P14** small; newsletter slot.
9. **Privacy** `/privacy/`, 10. **Terms** `/terms/` (deposit 30 %, cancellation: full refund ≥ 30 days, 50 % 10–29 days, none < 10 days), 11. **Thanks** `/thanks/` (after enquiry: "Aiyana will reply within one working day").
Posts (3, category "From the rooms", tags): "How we set a name card", "A winter menu for forty", "Planning a toast that people hear". Post template: title band, featured image (P03 / P11 / P16), hairline meta.
Standard screens: home, about=/about/, news=/journal/, article=first post, category=/category/from-the-rooms/, tag=a tag, newsletter=/dates-list/, contact=/ask-about-a-date/.

---

## 5. Colour and type

### Colour (RT (a) relationships kept; accent red → row russet because the row palette is 錆色 and the first-screen cap is 15 %)
| Role | RT | Ours | Share | Note |
|---|---|---|---|---|
| Base dark (bar, hero ground, dark sections) | #000000 | **#17100D** | ~35 % | warm black, L +5 % |
| Alt dark row | #242424 | **#261A16** | rows | same step |
| Footer | #140E0E | **#120C0A** | footer | |
| Base light | #F7F7F7 | **#F3F0EE** | ~55 % | −2 % L, not cream |
| Pale band (steps) | — | #ECE7E4 | 3 % | |
| Paper tag | #FFFFFF | #F7F4F1 | tag | |
| Text on light | #000000 | **#1B1411** | | |
| Text on dark | #F2F2F2 | **#F2EEEA** | | footer text #CCC4BE (RT #CCCCCC) |
| Muted text | — | #6E625C | | ≥ 4.5:1 on #F3F0EE |
| Accent (strip, buttons, numerals) | #FF2219 | **#6C3524** | ≤ 4 % | row hex; changed for palette + saturation cap |
| Gold labels on dark | #BB944E | **#BB944E** | < 3 % | kept |
| Gold on light (labels ≥ .75rem caps) | — | #8A6A33 | | darkened for 4.5:1 |
| Hairlines | #E7E7E6 | #E2DCD8 / on dark rgba(242,238,234,.16) | | |
First-screen saturated share (HSV s > .45, v > .24): RT 29.4 %; **ours target ≤ 12 %, hard cap 15 %** (check-first-screen.py): low-key muted photos, the russet strip (~4 %) and button only.

### Type (font_direction serif)
- Latin display: **Cormorant Garamond** (500, 600, italic 500). Latin body: **Source Sans 3** (400, 600).
- CJK display: zh-TW **Noto Serif TC**, ja **Noto Serif JP** (明體 / 明朝; subsets for zh-TW and ja shipped as woff2). No 黑體 headings.
- Stacks (theme.json fontFamilies + fontFace, woff2 in assets/fonts, license files, listed in theme-meta `fonts[].files` and readme.txt; editor = front; copy `shared/inc/editor-lang.php` → `inc/editor-lang.php` and require it because style.css uses `:lang()`):
  - display: `"Cormorant Garamond", "Noto Serif TC", "Noto Serif JP", Georgia, serif`; `:root:lang(zh*)` display `"Cormorant Garamond", "Noto Serif TC", "Songti TC", "PMingLiU", serif`; `:lang(ja)` display `"Cormorant Garamond", "Noto Serif JP", "Hiragino Mincho ProN", "Yu Mincho", serif`.
  - body: `"Source Sans 3", system-ui, -apple-system, "Segoe UI", sans-serif`; zh-TW body `"Source Sans 3", "PingFang TC", "Microsoft JhengHei", sans-serif` (no Noto TC, no JP font — repo gate); ja body `"Source Sans 3", "Hiragino Sans", "Yu Gothic", sans-serif`.
- Scale (RT (b) mapped): **H1 5rem (80 px) Cormorant 500 lh 1.05** — largest (≥ 4.25rem ✓), `clamp(2.75rem, 6vw, 5rem)` · step numerals 3rem · H2 2.625rem 500 lh 1.2 ls .04em · title band 2.25rem 600 ls .1em (RT 36 px/700/4 px) · H3/room names 1.75rem 500 (RT2 36 px) · tile label 1.75rem ls .12em · caption 1.375rem ls .14em (RT2 20 px) · price 1.5rem Cormorant 600 `lining-nums tabular-nums` · nav 1rem Source Sans 400 ls .1em (RT 16/1.6 px) · body 1.0625rem (17 px) 400 lh 1.75 ls .02em (RT 15 px/1 px; enlarged for Latin reading) · labels .6875rem 600 caps ls .2em (RT2 10 px) · small .875rem. CJK headings ≈ 0.75× Latin, body lh 1.85; fr/de `hyphens:auto`.

### Shape and spacing (RT (c)(d))
- Header 38 + 70 = 108 px; tag 80 × 174 at x 30. Section padding 120 px desktop / 72 px at 390. Container 1060 (tiles, strip, prices); text column 450 (two-column) / 640 (narrative); title band 168 px; row gap 80 px; footer padding-top 75 px (RT).
- Radius **0 everywhere** (photos, tiles, buttons, inputs). Borders 1 px. Shadow only on the tag.
- Buttons: outline 1 px (dark grounds) 200 × 40; filled russet 200 × 48; label Source Sans 3 600 .875rem ls .1em; hover .4 s ease-out (RT).

---

## 6. Photos (18; IMAGERY = photo; Grok one at a time; Read every one; webp ≤ 300 KB, ≤ 2000 px; 0 cut-outs)
**STYLE (identical for every image):**
`low-key documentary photograph of a contemporary international restaurant interior at evening, warm tungsten lamp light against deep brown-black shadow, muted desaturated palette of oak, linen, dark stoneware and brass with a faint russet note, shallow depth of field, natural film grain, quiet and unposed, diverse adults, no text, no logos, no signage, no menus with writing, no Japanese elements`
(Imagery row: photo → real-photo STYLE, low-key, as both references; no illustration.)
| ID | Subject / composition | Ratio | Used on (page · block) | Home |
|---|---|---|---|---|
| P01 | Floor manager (woman, 40s) placing blank name cards along a long set table, lamps above, room falling into shadow; subject left third | 3:4 tall crop safe, 2000×1500 | Home hero left | ✓ |
| P02 | Chef in dark apron carrying a plated first course through a doorway toward camera, plate sharp, steam lit | 2000×1500 | Home hero right | ✓ |
| P03 | Wide view of the Long Room set for forty, one oak table, candles unlit, evening window | 2.3:1 | Home narrative; post 1 | ✓ |
| P04 | Garden Room glimpsed through an open door, table set, courtyard plants dark outside | 1.76:1 | Home tile Rooms | ✓ |
| P05 | First course in a dark stoneware bowl, close-up from 45°, black ground | 1.76:1 | Home tile Menus; Menus wide | ✓ |
| P06 | Hands raising glasses over a candlelit long table, faces out of frame | 1.76:1 | Home tile Weddings; Weddings | ✓ |
| P07 | Maître's stand: open reservation book (blank pages), pen, small brass lamp | 1.76:1 | Home tile Ask; Ask page | ✓ |
| P08 | Long Room empty and set, from the end of the table | 3:2 | Home rooms strip; Rooms wide | ✓ |
| P09 | Garden Room long table by a tall courtyard window at dusk | 3:2 | Home rooms strip; Rooms | ✓ |
| P10 | Lamp Room round table for ten under one brass pendant | 3:2 | Home rooms strip; Rooms | ✓ |
| P11 | Head chef plating at the pass, hands and plates, heat lamps | 3:2 | Home menus; post 2 | ✓ |
| P12 | Long table mid-dinner from the far end, many guests softly blurred, candles lit | 2.25:1 (2000×890) | Home parallax band; Rooms (Long Room) | ✓ |
| P13 | Floor team of six in a short briefing before service, standing by the bar | 3:2 | Home people; About | ✓ |
| P14 | Close-up of a blank folded name card on a linen napkin with a sprig | 4:5 | Home ask; Dates list | ✓ |
| P15 | Sommelier pouring red wine at a set table | 3:2 | Menus drinks | |
| P16 | Celebration cake carried to a round table, sparkler-free, candles | 2.3:1 | Weddings wide; post 3 | |
| P17 | A guest standing to speak at a long company dinner, glass in hand, others listening | 2.3:1 | Company dinners wide | |
| P18 | Restaurant entrance at dusk, warm light from the doorway, harbour steps | 2.3:1 | About wide | |
Home uses P01–P14 (14). No image repeats on any single page. Regenerate any with text, logos, broken faces/hands or style drift.

---

## 7. Motion and scroll effects (sp-scroll v1 copied unchanged; hero has no reveal)
| Effect | Class | Where | Source (RT (g)) | Values |
|---|---|---|---|---|
| Fade-up of headings and paragraphs | `sp-reveal sp-reveal--up` | block 2 column, block 5 intro, block 8 list, block 10 heading, title bands of inner pages | kitcho slide title fade (1400 ms after 700 ms, easeInOutCubic) | `--sp-dur:1.4s; --sp-dist:10px; --sp-ease:cubic-bezier(.65,0,.35,1)` |
| Staggered rise | `sp-stagger` parent + `sp-reveal sp-reveal--up` children | T2 tiles (4), rooms strip columns (3), story columns (3), booking steps (4) | kitcho second element (1300 ms after 1500 ms) → step .12 s | `--sp-dur:.9s`, step .12 s, same ease |
| Parallax | `sp-parallax` | hero layers + band 6 (+ Rooms wide P08) | kitcho background layer drift (translateY −400 → 0 over 1.5 s) | §7.1 |
Not on: hero content, price table, forms, FAQ details, legal pages. Anchor links: `html{scroll-behavior:smooth}` (RT anchor easing; disabled under reduced motion). Hero load fades (§2) are CSS keyframes scoped `html.sp-js:not(.sp-no-motion) .er-hero …` so no-JS, reduced motion and `?sp-static` show the final state.

### 7.1 Parallax (required)
- **Band 6** (primary, checked by check-parallax.mjs): core/cover full-bleed 1440 × 640, background **P12** (`.wp-block-cover__image-background`), class `sp-parallax`, `--sp-par:10%` desktop, `--sp-par:6%` at ≤ 781 px (kept on mobile). Foreground caption and line stay in the cover inner container (not in the moving layer), scrim `rgba(23,16,13,.45)`.
- **Hero**: the hero group carries `sp-parallax`; each photo wrapper is `.sp-parallax__layer` — P01 `--sp-par:6%`, P02 `--sp-par:8%` (the two halves drift at different speeds across the seam — our scroll-driven version of the reference's settling background layers). H1/caption are not in the layers.
- Rooms page: P08 wide band `sp-parallax --sp-par:8%`.
- Reduced motion / `?sp-static` / editor / no JS: layers static, not scaled.

---

## 8. Responsive rules (hard)
- 390 px first screen: no vertical type, no absolutely positioned labels overlapping text; hero stacks as §3; tag 56 × 120 never intersects strip/nav text boxes; nav collapses into one "Menu" button (core navigation overlay) — still exactly one top menu.
- Price table: at ≥ 782 px the table is the full 1060 container width, 2 columns, price column `white-space:nowrap; text-align:right; width:1%; padding-left:32px`, never clipped (auto-gates 800 + 1280). At ≤ 781 px every table stacks: `tr`/`td` `display:block`, price on its own line left-aligned under the item, hairline between items. Any other table (menus, policies) does the same.
- Ledgers are groups (not tables) and wrap: label above value at ≤ 480 px.
- Tiles: 2 × 2 down to 600 px, then 1 column (1.76:1). Rooms strip and story columns: 1 column ≤ 781 px.
- No horizontal overflow at 390 / 1280; `html,body{overflow-x:clip}`.

---

## 9. Forms (form contract v1 — `steps/form-contract-v1` exists)
- Copy `pipeline/assets/forms/shippress-forms.php` → `inc/shippress-forms.php`, its CSS/editor JS → `assets/` unchanged; `require_once` in functions.php. Patterns stay literal markup with a small PHP island; run `pattern_source.py`.
- **Ask about a date** (`/ask-about-a-date/`, the contact screen and the only booking/enquiry page): below the 4 steps, its own block: `shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) )`. Fallback (ob_start literal markup) = existing russet button `<a class="wp-element-button er-mail" href="mailto:rooms@enkai-rooms.example?subject=…">` "Email us your date" + line "Or call +00 31 555 0186, Tue–Sat 10:00–18:00." Never link back to /ask-about-a-date/ or /contact/.
  - Recommended CF7/WPForms fields: name*, email*, phone, occasion (select: Company dinner / Family celebration / Wedding party / Other)*, room (radio: Long Room / Garden Room / Lamp Room / Not sure)*, preferred date*, second date, guests (number 6–60)*, lunch or dinner (radio), menu interest (select: the 4 menus), dietary needs (textarea), message (textarea), consent*, submit "Ask about this date".
- **Dates list** (`/dates-list/`, newsletter screen; standalone, slot on a #F7F4F1 panel on #F3F0EE) and **footer "Dates list" column** (#120C0A, every page, far below the first screen): `shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'rooms@enkai-rooms.example', 'label' => forms_email, 'submit' => forms_subscribe, 'notice' => forms_mail_notice, 'subject' => forms_mail_subject ) )`. MailPoet (explicit ID) → MC4WP → opt-in CF7/WPForms dedicated newsletter ID; no plugin → required `type=email` + submit "Join the dates list", native mailto POST, visible notice "Opens your email app. Send the request to join the dates list; you are not on the list yet."
- Tokens (map in style.css from theme.json presets): light — `--sp-form-accent:#6C3524`, `--sp-form-on-accent:#F2EEEA`, `--sp-form-radius:0`, `--sp-form-focus:#1B1411` (2 px outline, offset 2 px), `--sp-form-surface:#FFFFFF`, `--sp-form-text:#1B1411`, border #CFC6C1 (hover #6E625C). Dark (footer) — accent #BB944E, on-accent #17100D, surface rgba(242,238,234,.06), text #F2EEEA, border rgba(242,238,234,.4), focus #F2EEEA. Error #9E2F22 / #F0B3A8 (dark); success #3E6B47 / #B9D8BE (dark). Inputs 48 px, label Source Sans 3 600 .8125rem caps ls .12em, input 1rem, textarea min 140 px, checkbox/radio 18 px square, submit 48 px 600 .875rem ls .1em. Scoped to plugin classes / `.sp-newsletter-fallback` only.
- i18n semantic keys in `inc/i18n/en.php` first: `forms_email` ("Email address"), `forms_subscribe` ("Join the dates list"), `forms_mail_notice`, `forms_mail_subject` ("Dates list: please add me"), `ask_email_button` ("Email us your date"), `ask_mail_subject` ("Private room enquiry"), `ask_call_line`; localised in zh-TW, ja, fr, de; extract with `L10N_SEMANTIC=1`; check dynamic attributes in every locale.
- No `sp-reveal` on any form or its section; no form in the home first screen (home has none except the footer).

---

## 10. Similarity to the reference (target 80 %)
| Dimension | Reference (RT / RT2) | Ours |
|---|---|---|
| Header | 38 px red strip + 70 px black bar + 80 × 174 hanging tag at x 30 | 38 px #6C3524 + 70 px #17100D + 80 × 174 tag at x 30 |
| Ground dark / alt / footer | #000 / #242424 / #140E0E | #17100D / #261A16 / #120C0A |
| Ground light | #F7F7F7 patterned | #F3F0EE + own arc hairline pattern |
| Text | #000 / #F2F2F2 / #CCC | #1B1411 / #F2EEEA / #CCC4BE |
| Accent | #FF2219 4.2 % of first screen | #6C3524 ≤ 4 % |
| Gold | #BB944E < 3 % | #BB944E (dark), #8A6A33 (light) < 3 % |
| First-screen saturation | 29.4 % | ≤ 12 % (cap 15) |
| Hero | full-bleed dish 1440 × 592, dark vignette, centred SCROLL cue | two low-key photos on a diagonal seam, seam vignette, centred cue + caption |
| Type | mincho throughout; title 36/700/ls 4; nav 16/ls 1.6; body 15/ls 1 | Cormorant + Noto Serif TC/JP; title 36/600/ls .1em; nav 16/ls .1em; body 17/ls .02em |
| Title band | 168 px, centred title + Latin sub-line | same |
| Wide room photo | 1440 × 625 (2.3:1) under title band | same (P03 home, P08 Rooms) |
| Tiles | 2 × 2, 1.76:1, 4 px gap, 45 % scrim, 24 px arrow, ~1060 | same |
| Room strip | 3 × 3:2, 1060, 8 px gap | same |
| Info rows | gold caps labels on alternating dark rows | same |
| Lists | 1 px #E7E7E6 hairlines | 1 px #E2DCD8 |
| Radius / shadow | 0 / tag only | 0 / tag only |
| Buttons | 1 px white outline 173 × 34 | 1 px outline 200 × 40; filled russet 200 × 48 |
| Motion | fade 1400 ms after 700; 1300 after 1500; bg drift 1.5 s; cue 4000 after 2000; easeInOutCubic; hover .4 s ease-out | hero CSS fades same timings; sp-reveal--up 1.4 s/10 px; stagger .12 s; parallax 6–10 %; hover .4 s ease-out |
| Imagery | low-key documentary food + rooms | same direction (own Grok photos) |
Own: all photos, copy, names, logo (tag wordmark "ENKAI / ROOMS").

---

## 11. Home acceptance checklist
- [ ] First screen = diagonal-split / split-over-seam / none: P01 left, P02 right on one diagonal seam with gold line; H1 lines on either side of the seam; no hero footer row; not full-bleed overlay.
- [ ] All 6 KV items visible at 1440 × 900 (tag hanging into hero, russet strip, black bar + centred nav + outline CTA, both photos, split H1, seam caption + scroll cue).
- [ ] H1 5rem Cormorant Garamond 500; theme.json max ≥ 4.25rem.
- [ ] Block order 0–12 as §3; T1, T2 (4 abutting scrim tiles), T3 caption unmistakable.
- [ ] Prices (7 items, €68–€112 per head, €42, €28, €180/h) and room sizes (40/60, 18/25, 10) identical to Menus, Rooms, Weddings, Company dinners, Ask.
- [ ] ≥ 250 English words, ≥ 3 narrative paragraphs ≥ 20 words.
- [ ] 14 home image positions (P01–P14), no repeats, no text/logos, 0 cut-outs.
- [ ] Colours only from §5; first-screen saturated share ≤ 15 % (check-first-screen.py).
- [ ] Fonts via theme.json fontFace incl. Noto Serif TC/JP subsets; editor = front (check-editor-fonts.mjs en + zh-TW).
- [ ] sp-reveal--up, sp-stagger, sp-parallax only; no reveal in hero / prices / forms; parallax band P12 10 % (6 % mobile) and hero layers pass check-parallax.mjs.
- [ ] 390 px: no horizontal overflow, no vertical or absolute labels overlapping in first screen; tables stack.
- [ ] ≥ 782 px: price table full width, prices nowrap right-aligned, not clipped (auto-gates.mjs pass).
- [ ] Exactly one top menu; one repeated CTA "Ask about a date"; footer dates-list slot works with no plugins (email + submit + notice).
