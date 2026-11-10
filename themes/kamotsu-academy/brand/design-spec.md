# Kamotsu Academy: design spec (stage 1, binding for implementation)

Slug `kamotsu-academy`, heavy-goods vehicle (HGV) training centre, type **business** (WooCommerce compatible, not required). Plan row b27-2: archetype `sticky-media`, hero `photo-left-text-right` (re-read below as the reference's full-bleed photo with left-aligned type), nav `split`, first_screen `timeline-line`, page_structure `process-timeline`, font_direction **sans**, palette navy (deep indigo-navy).

Main reference: **https://www.kobedenshi.ac.jp/** (S5-Style listed vocational college). Screens in `ref/`: `kobedenshi-first.png`, `scroll-kobedenshi-900.png`, `-1800`, `-2700`, `-3600`. Measurements: `reference-tokens.md` (cited below as tok(a)…tok(g)). We borrow structure, technique, colour relationships, motion and the key-visual concept. We never copy its photos, copy, Japanese tagline, logos, 3D stickers or the particle band.

**Imagery: photo** (stage-a IMAGERY = photo; the reference's main imagery is daylight documentary photographs of people working). Real-photography STYLE in section 9.

Fixed brand facts (every page, every language; section 10 has the full list): Kamotsu Academy, founded **2009**, **Bay 4, Hollins Freight Park, Carrow Lane, Ashby Vale** (fictional town). Founder and lead instructor **Ruth Abernethy**. Currency **GBP (£)** in all five languages.

---

## 1. Signature techniques (three; all must be obvious at a glance)

### T1. Giant white two-line caps word spanning the content width across the upper half of a full-bleed documentary photo (kobedenshi KV "LEARN BY / CREATION", https://www.kobedenshi.ac.jp/, `ref/kobedenshi-first.png`)
- Reference: a full-bleed 1440×790 photo (≈1.82:1, radius 0) of four students at a workshop table. A heavy grotesque caps word in **solid white**, two lines, each line ≈270 px tall, spans x≈135–1320 (the content width, not centred in a box, left edge = right edge margin), y≈95–640; the people stand in the lower 60% of the photo. A small caps kicker and a black italic tagline sit over line 1. tok(b), tok(e).
- Ours, home `front-kv`: photo **P01** full-bleed, white caps lines **"WALK ROUND" / "THEN DRIVE"** (the pre-drive walk-round check that every lesson starts with). Hanken Grotesk **800**, `text-transform: uppercase`, letter-spacing −0.02em, line-height 0.86, colour `#FFFFFF` at 100% opacity (never translucent, never outlined).
- Width-matched lockup (as the reference: both lines span the same width): line 1 font-size `clamp(3rem, 12.8vw, 11.5rem)`, line 2 `clamp(3.5rem, 14.8vw, 13.3rem)`. Implementer measures at 1440, 1280 and 390 and adjusts the two vw values (no JS fitting) so both lines run from the container's left edge to its right edge ±3% (container 1240 px, tok(c)). Largest type in the theme = 13.3rem (≥ 4.25rem rule met).
- Position (1440×790 photo): line 1 cap top y≈100, line 2 baseline y≈440 (≈56% of the photo height). The people's heads in P01 sit at 56–66% height, so the lower line ends on the people (the reference's "people in front of line 2" read). **No cut-out** (theme limit: 0): the word is a normal text layer above the photo; the photo is composed so faces are not covered (see P01 brief).
- A top-down scrim on the photo, `linear-gradient(180deg, rgba(26,33,48,.28) 0%, rgba(26,33,48,.10) 55%, rgba(26,33,48,0) 70%)`, keeps the white word ≥ 2.2:1 against the upper photo (the reference relies on a mid-grey room, tok(a) ≈#B8BCBE; our P01 upper half is a mid-grey steel depot wall + canopy for the same reason).
- Must not be diluted: white, solid, caps, two lines, spanning the full content width, over the photo (never on a plain ground, never inside a box, never centred as a short word). Line height ≤ 0.9.
- Continuation (inner pages): every inner page opens with a **page-head band** = full-bleed photo 1440×460 (`min-height: 46svh`, max 480, mobile 300) with **one** white caps word spanning the content width (`clamp(3rem, 11vw, 10rem)`, width-matched per word, e.g. COURSES, FEES, TEST DAY, THE YARD), same scrim, line placed at the band's upper half. See table in 1.4.

### T2. Docked white info card hanging from the photo's bottom-right corner (kobedenshi KV card, `ref/kobedenshi-first.png`, bottom-right)
- Reference: a white card 373×124 px, radius 8 px, very soft shadow `0 4px 20px rgba(0,0,0,.12)`, sitting inside the photo 40 px from the right edge and 28 px from the photo bottom (x 1027–1400, y 638–762). Left: small bold kicker (14 px 700), a bold title (20 px 700), a 28 px outline round chevron. Right: a 140×100 thumbnail, radius 4. tok(d), tok(e).
- Ours, home `front-kv` **"Next intake" card**: 400×136 px, radius 8, white, shadow as reference, `right: 40px; bottom: 28px` inside the photo. Left column (padding 18 px 20 px): kicker "NEXT INTAKE" Hanken Grotesk 700 .8125rem ls .06em ink; title "12 January 2027 · test in week 7" Hanken Grotesk 700 1.125rem lh 1.35; a **mini timeline line** (row first_screen `timeline-line`): 1 px ink line 150 px wide with two 7 px navy dots at the ends and an 11 px hi-vis yellow dot at the right end, labels under it "Enrol" (left) and "Test day" (right) Work Sans 500 .6875rem slate; then a 32 px outline round chevron (1 px ink border, ink chevron 10 px) linking to Fees & dates. Right: thumbnail **P02** 140×104, radius 4, object-fit cover.
- Must not be diluted: white, radius 8, docked to the bottom-right corner overlapping the photo (not below it, not centred), thumbnail on the right, round chevron present.
- Continuation: every inner page-head band carries a docked card with page-specific facts (table 1.4). The home parallax band (block 6) also carries one ("Test day"), so T2 appears twice on home.

### T3. Tall rounded promo cards on a pale grey ground: headline top-left, photo filling below, white 48 px round chevron bottom-left, staggered rise (kobedenshi promo row, `ref/scroll-kobedenshi-900.png`, and event row, `ref/scroll-kobedenshi-1800.png`)
- Reference: ground `#F5F5F5`; four cards 288×450 px (0.64:1), gap 30 px, radius 6 px, no border, no shadow; small 2-line kicker (14 px 700) and a 24–28 px 700 title in the top-left at 20 px inset; the photo fills the card and bleeds off the bottom, the top 40% tinted so the text reads; a white 48 px circle with a black chevron 20 px from the bottom-left; a 90 px round yellow-green badge on one card's lower-right corner. Second row: three square cards 393×393, same rules. Below a row: a centred outline pill 244×56, 1 px `#222`, radius 999. Motion: cards rise in column order, 200 ms steps. tok(c), tok(d), tok(f), tok(g).
- Ours, home `front-routes`: **four tall cards** on `#F5F5F5`, 1240 container, 4 columns, gap 30 px, card aspect 0.64:1 (≈288×450 at 1440), radius 6. Card = Group with photo as background (`object-position` centre 60%), a top tint `linear-gradient(180deg, rgba(255,255,255,.94) 0%, rgba(255,255,255,.80) 30%, rgba(255,255,255,0) 52%)`, kicker (Work Sans 600 .8125rem lh 1.5 ink, two lines) and title (Hanken Grotesk 700 1.5rem lh 1.3 ink) top-left at 20 px inset, white 48 px circle with ink chevron at left 20 / bottom 20. Cards: Class C+E (**P04**), Class C (**P05**), Refresher day (**P06**), Driver CPC week (**P07**). Card 1 carries the round **hi-vis badge** 90 px `#E8F52C`, ink Hanken Grotesk 700 .8125rem lh 1.15, three centred lines "Next intake / 12 Jan / 2027", at right 14 / bottom 14. Under the row: centred outline pill "Compare the courses" 244×56.
- Second form (square 3-up, 393×393, same rules) is used for the stories row (home block 9) and inner pages.
- Must not be diluted: the cards stay tall (0.64:1), text top-left, photo filling the lower part, white round chevron bottom-left, radius 6 (not 0, not 16+), pale grey ground behind. No borders, no shadows.
- Mobile < 782: tall cards become a 2-column grid (gap 14 px, aspect 0.72:1, title 1.125rem, chevron 40 px); square cards 1 column. No horizontal scroller (so stagger children stay normal reveals).

### 1.4 Continuation to inner pages (required; T1 on all, T2 and T3 on at least 4)
| Page | T1 head word + photo | T2 docked card | T3 cards |
|---|---|---|---|
| Courses | COURSES · P15 | "Next intake 12 Jan 2027" + mini line, thumb P02 | 4 tall cards P04–P07 (the full route set) |
| Class C+E | C+E · P10 | "From £1,640 · 6 days" thumb P02 | 3 square cards: Class C, Refresher, Driver CPC (P05, P06, P07) |
| Class C | CLASS C · P12 | "£1,890 · 6 days" thumb P02 | 3 square cards: C+E, Refresher, Driver CPC (P04, P06, P07) |
| The yard weeks | THE YARD · P01 | "7 weeks · enrol to test" thumb P13 | — (road timeline, section 4) |
| Fees & dates | FEES · P02 | "6 intakes a year" thumb P15 | 2 square cards: Assessment drive (P05), Open yard (P13) |
| Test day | TEST DAY · P11 | "Test booked for week 7" thumb P10 | — |
| About (instructors & story) | SINCE 2009 · P14 | "Founded 2009 · Ashby Vale" thumb P13 | — |
| Fleet & yard | FLEET · P15 | "5 lorries · 1.4 ha yard" thumb P02 | — |
| Stories (index, archive, category, tag) | STORIES / tag or category name · P09 | — | square 3-up post cards (featured images) |
| Contact & visit | VISIT · P13 | "Open yard: first Saturday, 09:00–12:00" thumb P03 | — |
| Single post | category word (smaller, `clamp(2.6rem, 8vw, 7rem)`) over the featured image | date + reading line card | 3 square cards "More stories" |

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
- Concept: a bright, ordinary workshop room; four students make things at one long table (keyboard, robot car, sketches). Over the upper half of the photo a giant white caps word "LEARN BY / CREATION" spans the width; the people stand in front of its lower line. A small "KOBE DENSHI" kicker and a black italic Japanese tagline ("learn by making") sit over line 1. White header area over the photo with dark nav and two black pills. A white info card docks at the bottom-right corner ("What is learn-by-making?").
- Story: you learn here by doing it with your hands, together, in a real room, from day one.
- Signature motion: the photo lags the page while scrolling (background offset = scrollTop/4 on desktop, /10 on phone), and content below rises into place (fade + rise, ~0.5 s ease-in-out, tok(g)).

### (2) Our transposition (same industry logic, same composition, same motion, same image type)
- Scene: a depot yard on an overcast bright morning. A white tractor unit with a plain grey curtain-side trailer fills the right half. The instructor (Ruth, 50s, hi-vis vest) stands on the lowest cab step holding the grab handle; the trainee (late 20s) stands by the front wheel reading a hand-held walk-round card; a second trainee crouches at the trailer's rear wheels checking a tyre. Wheel chocks, the red and yellow air lines, cones. Upper half: mid-grey steel depot wall and canopy (gives the white word its contrast). Documentary photo, high-key, desaturated, candid, no logos or text.
- Story: "you learn here by doing the check first", every lesson in a real yard starts with the walk-round, then you drive. Same idea as learning by making: hands first, in the real place.
- Motion: the KV photo moves slower than the page (`sp-parallax`, `--sp-par: 10%`, phone 6%); the lockup and card fade/rise once on load (CSS keyframes only, not sp-reveal); content below rises with `sp-reveal--up`.

### (3) KV checklist (all built in the first screen and visible at 1440×900, 1280×800; mobile per section 3)
| # | Reference element | Our counterpart | Position (1440×900) | Motion | Image |
|---|---|---|---|---|---|
| 1 | Full-bleed photo of four people working at a table, 1440×790 | Full-bleed documentary photo: instructor on the cab step, trainee with walk-round card at the front wheel, second trainee at the trailer wheels, tractor unit + trailer in a yard | x 0–1440, y 0–790 (`height: min(790px, 88svh)`, min 600) | `sp-parallax` on the hero Cover, `--sp-par: 10%` (≤781 px: 6%) | P01 |
| 2 | Giant white two-line caps word across the upper photo, spanning the content width | "WALK ROUND / THEN DRIVE", Hanken Grotesk 800, white, width-matched lines (T1) | x 100–1340, y 100–440 | load: opacity 0→1 + translateY 24→0 px, .9 s `cubic-bezier(.22,1,.36,1)`, CSS keyframes, no delay | — |
| 3 | Small caps kicker + black italic tagline over line 1 | Kicker "KAMOTSU ACADEMY · HGV TRAINING SINCE 2009" Hanken Grotesk 700 1rem ls .05em ink; tagline "Check first. Then drive." Hanken Grotesk 800 *italic* `clamp(2rem, 4.4vw, 4rem)` ink `#1A2130`, left-aligned at x 100 (not centred) | kicker y≈150, tagline y≈180–240, overlapping line 1 (≥1024 px only, via negative margin, not absolute) | fade .6 s, delay .3 s | — |
| 4 | Header over the photo: logo, six-item nav, two black pills | Split nav over the photo: menu left, wordmark centre, two navy pills right ("Open yard", "Book an assessment") | y 0–96 | none | — |
| 5 | White info card docked bottom-right with thumbnail + round chevron | "Next intake" card with the mini timeline line Enrol → Test day (T2) | x 1000–1400, y 626–762 (right 40, bottom 28 of the photo) | fade + rise 16 px, .7 s, delay .8 s | P02 |
| 6 | Hands-on props on the table (robot car, keyboard, sketches) | Props in the photo: walk-round card, hi-vis vests, wheel chocks, red/yellow air lines, cones | inside P01 | none (moves with the photo) | P01 |

Reference strip just under the hero (intro + `since 1958` + skyline strip) becomes our block 2 (since 2009 + yard panorama strip P03); the top of block 2 peeks under the hero at 900 px as on the reference.

---

## 3. Home: first screen composition and responsive rules

- Desktop 1440×900: header (transparent, absolute over the photo, height 96, padding 30 px 60 px, tok(c)); hero Cover alignfull, `height: min(790px, 88svh)`, min 600, P01 `object-position: 50% 62%`; inner container 1240 centred. Order in markup: kicker, tagline, line 1, line 2, card. At ≥1024 the tagline block pulls over line 1 with `margin-bottom: -0.55em` of line 1 (no absolute text). The docked card is the only absolutely positioned element (`position:absolute; right:40px; bottom:28px`). Below the hero, `#F5F5F5` starts and block 2's numeral and heading show at y 820–900.
- 1280×800: same, container 1120 (margins 80); word lines rescale by vw; card 380 wide.
- 782–1023: header becomes solid white 72 px (wordmark left, pills hidden except "Book an assessment", menu toggle); tagline sits above the word in flow (no overlap); card stays docked.
- Mobile 390×844: header white 64 px. Order top to bottom **in normal flow**: kicker + tagline (`clamp` → 2rem) on white, padding 20 px; then the photo (Cover, height 420 px) with the two white word lines inside it at the top (line sizes from the vw clamps ≈ 50/58 px), padding 20 px; then the docked card **below** the photo with `margin-top: -36px` overlapping the photo's bottom edge only (not any text), width calc(100% − 40px), thumbnail 96×80. **No vertical text, no absolutely positioned label over text, no element overlapping another text box.** The first screen shows tagline, photo with the word, the card's top.
- Forbidden in the first screen: table, form, search box, any saturated block > 2% of the area, centred giant text.

---

## 4. Home: block order (10 blocks)

All sections on `#F5F5F5` unless stated; section padding 100 px top/bottom (tok(c)); container 1240; card/column gap 30 px. Section heads: Work Sans 700 .875rem ls .05em caps kicker (ink) + H2 Hanken Grotesk 700 2rem lh 1.25 (tok(b) h2 32 px 700), **centred** for card rows (as the reference) and left-aligned in split rows.

| # | Pattern | Purpose | Layout and photos | Copy |
|---|---|---|---|---|
| 1 | `front-kv` | KV | Section 2(3) + section 3. P01 (Cover bg, `sp-parallax`), P02 (card thumb) | ~25 words |
| 2 | `front-since` | who we are (narrative 1) | Reference "68th since1958" row. Centre-aligned row at 1000 px: left a numeral lockup "since / 2009" (Hanken Grotesk 700, "2009" 3.5rem slate `#5E6B80`, "since" 1rem) and right the H2 "One yard, five lorries and five instructors." + lead line .9375rem. Under it (max 720 px, centred) the narrative paragraph (≈80 words; the phrase "every lesson starts with the walk-round" carries the hi-vis highlighter: `background: linear-gradient(transparent 62%, #E8F52C 62%)`). Then the **yard panorama strip P03** full container width 1240×155 (8:1), radius 6 (the reference skyline strip). `sp-reveal--up` on the text group and on the strip. | 95 words |
| 3 | `front-routes` | the four ways in | **T3** tall cards P04, P05, P06, P07 + hi-vis badge on card 1; centred H2 "Four ways into the cab" with kicker "COURSES"; centred outline pill "Compare the courses" under the row. `sp-stagger` on the row, each card `sp-reveal sp-reveal--up`. | 4 × (kicker 6 words + title 3 words) + 15 |
| 4 | `front-admits` | who the course admits (archetype sticky-media; narrative 2) | Two columns 5/12 + 7/12, gap 60. Left: **P08** 4:5, radius 6, `position: sticky; top: 110px` (parent `overflow: clip`, never hidden). Right: kicker "WHO WE ADMIT" + H2 "You need four things before week 4." + narrative paragraph (≈70 words) + **four white rows** (radius 6, padding 24 px 28 px, gap 12): big ink numeral (Hanken Grotesk 700 2.25rem, "01"–"04") left, title (Hanken Grotesk 700 1.125rem) + one sentence right: 01 Aged 18 or over; 02 A full car licence (Category B); 03 A Group 2 medical (D4 form, we book the doctor); 04 Provisional C / C+E entitlement on your licence. Each row `sp-reveal sp-reveal--up`. Mobile: photo 4:5 at top (not sticky), rows below. | 70 + 4 × 20 words |
| 5 | `front-weeks` | how the weeks in the yard are spent (page_structure `process-timeline`; narrative 3) | White section ground `#FFFFFF` (the only white section on home; separates it from the grey rows). Left-aligned head: kicker "THE WEEKS" + H2 "Seven weeks from enrolment to test day." + narrative paragraph (≈70 words, max 720 px). Then the **road timeline** (see 4.1) across 1240 px with 7 stops; under stops 2, 4 and 7 photos **P09**, **P10**, **P11** 3:2 radius 6. Text link "How the weeks run →" right-aligned under the road. | 70 + 7 × 18 words |
| 6 | `front-band` | breath + test day | Full-bleed `sp-parallax` band, `--sp-par: 12%` (mobile 8%), height 560 (mobile 360), background **P12** (lorry on an empty dual carriageway at dawn, 21:9) as Cover background; no text on the moving layer. Foreground: **T2 docked card** at right 40 / bottom 28: kicker "TEST DAY", title "We book your practical test for week 7 on the day you enrol.", round chevron → Test day. No thumbnail here (text-only card 420×132, radius 8) so no photo repeats on home. | 20 words |
| 7 | `front-fees` | fees (7 items) | Two columns 4/12 + 8/12: left kicker "FEES" + H2 "What it costs." + 2 lines ("Prices include the lorry for the test and a warm-up drive. The official test fees are paid by you to the testing authority.") + outline pill "Fees & dates". Right: **price table** in a white panel, radius 6, padding 8 px 32 px, rows separated by 1 px `rgba(34,34,34,.12)`: item name (Hanken Grotesk 700 1.0625rem) + detail line (Work Sans .8125rem slate) left, price right (Hanken Grotesk 700 1.25rem, `white-space: nowrap; text-align: right`, tabular-nums). No reveal on the table. See responsive rules in 8. | 7 rows + 40 words |
| 8 | `front-people` | who teaches | Two columns 6/12 + 6/12: left **P14** 3:2 radius 6 (instructors in the yard); right kicker "INSTRUCTORS" + H2 "Five people, one yard." + a hairline list of the five staff (name Hanken Grotesk 700 1.0625rem; role + years Work Sans .875rem slate; each row 1 px top rule), link "About the academy →". Not a grid of portraits. `sp-reveal--up` on the list. | 5 × 10 + 20 words |
| 9 | `front-stories` | stories (posts) | Centred kicker "STORIES" + H2 "From the yard". Query Loop: 3 latest posts in category Stories, **T3 square cards** 393×393 (featured images **P16**, **P17**, **P18**), date-less: kicker = trainee + course ("Leila · Class C+E"), title = post title, white round chevron. `sp-stagger` + `sp-reveal--up` per card. Centred outline pill "All stories". | Query Loop |
| 10 | `front-visit` | close: open yard + contact | Two columns 6/12 + 6/12, vertical centre: left **P13** 3:2 radius 6 (no docked card; T2 stays at two uses on home); right kicker "VISIT" + H2 "Come and stand in the yard." + paragraph (≈45 words: first Saturday each month 09:00–12:00, sit in the cab, meet the instructors), address + hours lines, two navy pills "Book an assessment" and "Open yard dates". | 60 words |

Footer: ground `#111111` (tok(a) footer), text `#FFFFFF` / `#B8BCBE`; four columns: wordmark + address; Courses (C+E, C, Refresher, Driver CPC); Academy (The yard weeks, Fees & dates, Test day, Fleet & yard, About, Stories); Hours + phone + email. Bottom line .8125rem "© Kamotsu Academy · Ashby Vale".

English home ≥ 250 words: narrative paragraphs in blocks 2, 4 and 5 (each ≥ 60 words) + block 10. CJK home ≥ 500 characters.

### 4.1 Road timeline (block 5; also the Yard weeks page)
- Not a hairline with dots (that was Kyukyu). A **road**: a 14 px tall navy `#243044` band, radius 7, spanning 1240 px, with a dashed white centre line (2 px, dash 24 / gap 16, `repeating-linear-gradient`). Seven **week chips** sit centred on the road at equal spacing (columns of 1240/7 ≈ 177 px): white pill, 1 px ink border, radius 999, height 32, Hanken Grotesk 700 .8125rem ls .04em caps ("WEEK 0", "WEEKS 1–2", …). Above the road: stop title Hanken Grotesk 700 1.125rem lh 1.3 (two lines max). Below: 2–3 lines Work Sans .875rem lh 1.65 (≈18 words). Stop 7 chip is ink filled with white text, plus the **hi-vis round badge** 90 px `#E8F52C` "Test / booked / day 1" above its title (the reference's round yellow badge, second and last use on home).
- Stops (fixed, section 10): 0 Assessment drive · 1–2 Medical and theory · 3 Theory tests, test date confirmed · 4 Yard week · 5 Road days · 6 Mock test · 7 Test day.
- Photos: P09 under stop 2, P10 under stop 4, P11 under stop 7, each 2 columns wide (≈ 354×236) aligned to its stop's left edge; the other columns hold text only.
- Motion: stops container `sp-stagger`, each stop `sp-reveal sp-reveal--up` (200 ms reference steps ≈ sp-stagger's .12 s steps; keep the sp default, do not change JS).
- Mobile < 782: the road turns vertical: 10 px navy band at x 24 with the dashed centre line vertical, chips on it, text to the right (allowed: page_structure is process-timeline). Photos full width under stops 2, 4, 7. No horizontal scroller.

### 4.2 Comparison with the latest themes (home block order)
| # | Kuki Climate | Toso Paints | Kyukyu College | Hiroba Food Hall | **Kamotsu Academy** |
|---|---|---|---|---|---|
| 1 | framed pinned KV window + year strip | three-column photo hero + drawing | giant stacked name beside photo + crossed polygons + term line | framed window strip | **full-bleed photo, giant white two-line word across it, docked card bottom-right** |
| 2 | iron concept card | ruled statement band | split about row (no photo) | hours strip + arc | **since 2009 numeral + narrative + 8:1 yard panorama strip** |
| 3 | ledger rows | range thumbnail strip | three sticky term rows | hall lockup statement | **four tall rounded promo cards with round chevrons + badge** |
| 4 | parallax plant room | three sticky chapters | full-bleed parallax band | kitchen cards | **sticky photo + four admission rows** |
| 5 | pill-toggle covers band | catalogue list | ruled week timeline (hairline + red dots) | lunch-hour ruler | **road timeline (navy road, dashed centre line, week chips, 3 photos)** |
| 6 | timed survey list | offset mixing rows | facts split | parallax pause | **parallax road band with docked card** |
| 7 | photo marquee + log | mirrored order rows | fees table | held-tables split | **fees: heading column + white price panel** |
| 8 | price table | journal rows | entry rows | guest notes cards | **instructor hairline list beside one group photo** |
| 9 | FAQ | visit close | notes cards | visit | **square story cards + outline pill** |
| 10 | request cover | — | visit split | — | **open-yard close split** |

Why not alike: no framed window, no pinned KV, no crossed polygons, no giant name beside a photo, no ledger/catalogue rows, no arcs or rulers. Kyukyu (same category) put a hairline term line and a red-dot week line with sticky chapters; ours is a full-bleed photo with the word *across* it, a docked card, a road-shaped timeline with chips, and tall rounded promo cards, which none of the four use. Kataribe Partners (older) has a left statement on a photo with a docked card; ours differs by the width-spanning two-line white word, the thumbnail + chevron card and the timeline line inside it.

---

## 5. Inner pages (11 pages + post templates; no sidebar)

Each page = T1 page-head band (+ T2 card) → page body on `#F5F5F5` → close row (outline pill or navy pill). Section heads as on home.

1. **Courses** (`page-courses`): head COURSES / P15; intro paragraph; T3 4 tall cards P04–P07; a comparison list (not a table on mobile) of the four courses: who it's for, days, vehicle, price; link to Fees & dates.
2. **Class C+E** (`page-class-ce`): head C+E / P10; "Who it's for" (Class C holders, or the C then C+E pathway); "The six days" as a mini road (stops: Yard day 1, Yard day 2, Road day 1, Road day 2, Mock test, Test day) using 4.1's styling; P04 4:5 beside "The vehicle: tractor unit + 13.6 m curtain-side trailer"; P11 3:2 beside "On test day"; price lines £1,640 / pathway £3,380; T3 square cards for other courses.
3. **Class C** (`page-class-c`): head CLASS C / P12; same structure; vehicle 18-tonne rigid; P05 and P09; price £1,890.
4. **The yard weeks** (`page-the-weeks`): head THE YARD / P01; full road timeline (4.1) with 7 stops and longer text per stop (≈45 words each) as rows below the road: each row = week chip + title + paragraph, photos P09, P10, P11 alternating left/right (radius 6); a "Typical yard day" schedule as paragraphs (07:30 walk-round, 08:00 manoeuvres, 10:30 road, 12:30 lunch, 13:15 reversing exercise, 16:00 debrief, 17:00 close), contains the word "daily" (repo contract).
5. **Fees & dates** (`page-fees`): head FEES / P02; full **price table** (all 7 items, section 10) full width; "What's included / not included"; intake dates list (six 2027 intakes); T3 two square cards (Assessment drive P05, Open yard P13).
6. **Test day** (`page-test-day`): head TEST DAY / P11; how the booking works (booked on enrolment for week 7), what to bring, the warm-up drive, the test parts (vehicle safety questions, reversing exercise, on-road drive), if you don't pass (retest within 10 working days, retest package £340 = one refresher day). Full-bleed `sp-parallax` band P12 (`--sp-par: 10%`) between sections.
7. **About** (`page-about`): head SINCE 2009 / P14; founding story (2009, Ruth Abernethy, ex tanker driver, started with one rigid in a rented bay); how we teach (two trainees per lorry per day; walk-round first); the five staff as hairline rows with role and years; P03 strip and P08.
8. **Fleet & yard** (`page-fleet`): head FLEET / P15; the five vehicles listed (3 × 18-tonne rigid, 2 × tractor unit + 13.6 m curtain-side trailer); yard facts (1.4 ha, reversing bay, coupling bay, two classrooms); P03 strip, P10.
9. **Stories** (posts index `home.html`, `archive.html`, `category.html`, `tag.html`): head STORIES (or TAG / category name) / P09; T3 square post cards 3-up; pagination as round chevrons.
10. **Contact & visit** (`page-contact`): head VISIT / P13; address, phone, email, hours; open yard dates; how to find us (paragraphs, no map embed); P08 beside "Book an assessment drive"; no form required (a simple core form is allowed off the first screen).
11. **Single post** (`single.html`): head band with the category word over the featured image; text column 720 px; "More stories" T3 square cards.
- Standard page mapping (theme-meta `pages` / demo-content `screens`): home → front, about → About, news → Stories (the empty posts page), article → story post 1, category → Stories category, tag → tag `class-ce`, newsletter → Stories (posts page), contact → Contact & visit.

---

## 6. Colour (reference values, tok(a))
| Role | Reference | Ours | Note / reason | Share of a page |
|---|---|---|---|---|
| Page ground | `#F5F5F5` | `#F5F5F5` | identical | ~55% |
| White (cards, word, header area, table panel) | `#FFFFFF` | `#FFFFFF` | identical | ~25% |
| Ink (text) | `#222222` | `#222222` | identical | text |
| Pills / darkest UI | `#111111` (black pills) | **`#243044` navy** | **changed**: plan row palette deep navy; navy keeps the "darkest filled control" role, white on it 12.9:1 | ≤ 6% (pills, road, ink chip) |
| Tagline ink (KV) | `#111111` | `#1A2130` | navy-black so it relates to the pills; −3% lightness vs ref ink | KV only |
| Secondary text | `#666666` (meta) | `#5E6B80` slate | navy-tinted grey at the same lightness | meta, numeral |
| Accent highlighter / badge | `#F2FF2E` yellow-green | `#E8F52C` | −4% lightness, same hue; kept because hi-vis yellow is the industry's own colour (vests, chocks) | < 1% (badge ×2, one highlighter, timeline end dot) |
| Photo greys | `#B8BCBE`–`#E8E8E8` | same range in our photos (grey depot wall, white cab, concrete) | photo grade | in photos |
| Footer | `#111111` | `#111111` | identical | footer |
| Hairlines | `rgba(0,0,0,.1)` | `rgba(34,34,34,.12)` | | 1 px |
- Not beige, not a recent theme's lead colour: Kyukyu used navy as ink with a red rail; ours uses navy only for pills/road and has no red.
- **First-screen saturated share**: reference 0.5%. Ours target ≤ 3%, hard cap **10%** (row cap 30%, script 15%). Navy `#243044` (S 0.47) is under the saturation threshold; the only saturated pixels are the 7 px timeline dots, the yellow dot and any hi-vis vests in P01 (keep vests small, desaturated photo grade).
- Contrast: ink on `#F5F5F5` 15.1:1; slate on white 5.4:1; ink on `#E8F52C` 15:1 (never white on yellow).

## 7. Type (font_direction **sans**)
| Use | Latin | zh-TW stack | ja stack |
|---|---|---|---|
| Display / headings / KV word | **Hanken Grotesk** (variable wght 100–900, normal + italic; we use 700, 800, 800 italic) | `"Hanken Grotesk", "Noto Sans TC", "PingFang TC", "Microsoft JhengHei", sans-serif` | `"Hanken Grotesk", "Noto Sans JP", "Hiragino Sans", "Yu Gothic", sans-serif` |
| Body | **Work Sans** (variable wght 100–900; 400, 500, 600, 700) | `"Work Sans", "PingFang TC", "Microsoft JhengHei", sans-serif` (repo contract: no bundled zh family, no JP font in zh body) | `"Work Sans", "Hiragino Sans", "Yu Gothic", "Noto Sans JP", sans-serif` |
- CJK direction **sans (gothic)** only; no Noto Serif anywhere, no serif (Mincho/Ming) mixing.
- Fonts are bundled woff2 and loaded only through `theme.json` `settings.typography.fontFamilies[].fontFace` (Hanken Grotesk normal + italic, Work Sans, Noto Sans TC 700 subset, Noto Sans JP 700 subset; use the Hokuto/Hada subset method, not the broken subset script), so the editor iframe and the front end show the same faces. style.css uses `:lang()` stacks → copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it. List every font file in theme-meta `fonts[].files` with licence (OFL) and name each family in readme.txt.
- theme.json font sizes (slug: value): `x-small` .75rem, `small` .8125rem, `medium` .9375rem (body), `large` 1.125rem, `x-large` 1.5rem (card titles, tok(b) 24 px), `xx-large` 2rem (H2, tok(b) 32 px), `huge` 4.25rem, `page-word` `clamp(3rem, 11vw, 10rem)`, `kv-1` `clamp(3rem, 12.8vw, 11.5rem)`, `kv-2` `clamp(3.5rem, 14.8vw, 13.3rem)`. Max 13.3rem.
- Body Work Sans 400 .9375rem / line-height 1.75 (tok(b) 14 px / 1.5; +1 px and more leading for Latin running text); nav Hanken Grotesk 700 .9rem (tok(b) 14.4 px 700); card kicker Work Sans 600 .8125rem lh 1.5; card title Hanken Grotesk 700 1.5rem lh 1.3 ls .02em; H2 Hanken Grotesk 700 2rem lh 1.25; kicker caps .875rem 700 ls .05em (tok(b) "KOBE DENSHI" 16 px 700 .05em).
- CJK: headings ≈ 0.75× the English size (KV lines become the English words kept in Latin caps "WALK ROUND / THEN DRIVE" in every language; only the tagline is translated), body line-height 1.85, letter-spacing .03em; fr/de `hyphens: auto` on body and H2 (never on the KV word).

## 8. Header, buttons, responsive rules
- Header (nav `split`, one menu only): height 96, padding 30 px 60 px (tok(c) 35/60). Left: core/navigation with 6 links Hanken Grotesk 700 .9rem ink, gap 26: Courses · The yard weeks · Fees & dates · Test day · About · Stories. Centre: wordmark "Kamotsu Academy" Hanken Grotesk 800 1.25rem ls −.01em, preceded by a 14×14 navy square with a 4 px yellow bar (simple CSS/SVG mark, no logo copied). Right: two pills (tok(d)): "Open yard" and "Book an assessment", navy `#243044`, white Hanken Grotesk 700 .875rem, height 48, padding 0 26 px, radius 999; hover `#33415A`, .3 s ease-in-out. On home the header is absolute over P01 (transparent, ink type; P01's top band is light enough: keep the top 96 px of P01 as pale overcast sky/canopy at ≥ #C8CCD0). Inner pages: same transparent header over the page-head band. Contact link lives in the footer and in the "Book an assessment" pill target (Contact & visit).
- < 1100: left menu collapses into the core overlay toggle (still the one navigation block); wordmark left; pill "Book an assessment" only. < 782: header solid white 64 px, static (not over the photo).
- Outline pill (tok(f)): 244×56, 1 px `#222`, radius 999, Hanken Grotesk 700 .875rem, centred under card rows; hover ink fill, white text .3 s ease-in-out.
- Round chevron: 48 px white circle, ink chevron 12 px, on cards; 32 px outline variant in docked cards. Hover: circle → navy, chevron white, .3 s ease-in-out.
- **Price table** (home block 7 and Fees page): at ≥ 782 the table fills its column / the full container width (`width: 100%`, no fixed max-width that leaves the price column off-screen), `table-layout: auto`, price column `white-space: nowrap; text-align: right; width: 1%` so it is never clipped at 800 or 1280. At < 782 every table becomes stacked rows (`display: block` per row: item, detail, price right-aligned on its own line); no horizontal scroll.
- Any other table (course comparison, intake dates) follows the same stacked rule on mobile.
- 390 px first screen: see section 3; nothing vertical, nothing absolutely positioned over text. No horizontal overflow at 390 / 1280 (`html, body { overflow-x: clip }`).

## 9. Photos (18, one STYLE, one at a time; read each one)
STYLE (exact, every prompt):
`documentary photograph, 35mm lens, bright overcast natural daylight, high-key and slightly desaturated colour grade, candid unposed moment, real working lorry depot in a modern international setting, ethnically diverse adults in plain hi-vis vests and workwear, plain white and grey vehicles without any lettering, clean concrete yard, soft grey sky, no text, no logos, no brand marks, no number plates readable, no signage lettering, no Japanese elements`

No cut-outs (0). Each ≤ 300 KB webp, ≤ 2000 px, one readme.txt line per image (AI-generated, CC0).

| ID | Subject / composition (ratio) | Home (★) and other pages (never twice on one page) |
|---|---|---|
| P01 | KV: wide shot of a depot yard; white tractor unit + plain grey curtain-side trailer filling the right half; instructor (woman, 50s, grey hair) on the lowest cab step holding the grab handle; trainee (man, late 20s) by the front wheel reading a hand-held checklist card; second trainee (woman) crouching at the trailer wheels; chocks, red and yellow air lines, cones; **upper half mid-grey steel depot wall and canopy, people's heads at 56–66% of the height, figures in x 25–70%**, nothing important in the bottom-right 30%×20% (card) (16:9, 2000×1125) | ★ KV bg; Yard weeks head |
| P02 | close-up: hands holding a checklist card next to a lorry tyre and wheel nuts (4:3) | ★ KV card thumb; Fees head; C+E, Class C, Courses card thumbs |
| P03 | yard panorama: a row of parked white rigid lorries and trailers in marked bays, low morning light, pale sky, generated 21:9 then cropped to an 8:1 band (2000×250) | ★ since strip; About; Fleet |
| P04 | articulated lorry reversing between cones in the yard, instructor watching from the side, seen from behind the trailer corner (4:5) | ★ card 1; Courses; C+E body; Class C card |
| P05 | trainee in the driver's seat of a rigid lorry seen through the open cab door, instructor on the step talking (4:5) | ★ card 2; Courses; Class C body; C+E card; Fees card |
| P06 | refresher: experienced driver (man, 60s) and young instructor beside the cab with a coffee, laughing (4:5) | ★ card 3; Courses; C+E and C cards |
| P07 | Driver CPC classroom: four drivers at a long table with route maps, notebooks and a tablet, daylight window (4:5) | ★ card 4; Courses; C+E and C cards |
| P08 | enrolment: coordinator and applicant at a table with forms and a licence card face down (4:5) | ★ sticky photo; About; Contact |
| P09 | evening theory session: three trainees at a table with laptops and highway-code style booklets (no readable text) (3:2) | ★ road stop 2; Class C body; Stories head |
| P10 | trainee connecting the red and yellow air lines between tractor unit and trailer, close-medium shot (3:2) | ★ road stop 4; C+E head; Fleet; Test day thumb |
| P11 | cab interior: trainee adjusting the mirror, instructor in the passenger seat with a clipboard, early light through the windscreen (3:2) | ★ road stop 7; Test day head; C+E body; Yard weeks thumb |
| P12 | a lorry on an empty dual carriageway at dawn, seen from a verge, lots of pale sky (21:9) | ★ parallax band; Class C head; Test day band |
| P13 | open yard Saturday: visitors at a folding table with coffee and printed course sheets (no readable text), lorry behind (3:2) | ★ visit close; Contact head; Fees card |
| P14 | the five instructors standing loosely in the yard in front of a rigid lorry, mixed ages and backgrounds, relaxed (3:2) | ★ people block; About head |
| P15 | fleet line-up: three rigid lorries and two tractor units parked in a row, front three-quarter view (3:2) | Courses head; Fleet head; notice post |
| P16 | story Leila: woman, 30s, in the C+E cab doorway, looking out (3:2, crops to 1:1) | ★ story card; post 1 |
| P17 | story Marcus: man, 40s, former bus driver, walking across the yard with a checklist (3:2) | ★ story card; post 2 |
| P18 | story Sofia: woman, 50s, back after ten years, checking tyre tread with a gauge (3:2) | ★ story card; post 3 |

Home uses 17 photo positions (P01–P14 and P16–P18; P15 is not on home), each once.
Per-page binding list (no image twice on one page):
- Courses: P15 head, P02 thumb, P04 P05 P06 P07 cards.
- Class C+E: P10 head, P02 thumb, P04 and P11 body, P05 P06 P07 cards.
- Class C: P12 head, P02 thumb, P05 and P09 body, P04 P06 P07 cards.
- The yard weeks: P01 head, P13 thumb, P09 P10 P11 in the rows.
- Fees & dates: P02 head, P15 thumb, P05 and P13 cards.
- Test day: P11 head, P10 thumb, P12 parallax band.
- About: P14 head, P13 thumb, P03 strip, P08.
- Fleet & yard: P15 head, P02 thumb, P03 strip, P10.
- Stories index/archive: P09 head, post cards P16 P17 P18 P15.
- Contact & visit: P13 head, P03 thumb, P08.
- Single post: its featured image + 3 other posts' images.

## 10. Fixed facts (identical on every page and in all five languages)
- Name Kamotsu Academy; founded **2009** by **Ruth Abernethy**; address **Bay 4, Hollins Freight Park, Carrow Lane, Ashby Vale AV3 7QN** (fictional); phone **01632 960 418**; email **hello@kamotsu-academy.example**.
- Hours: yard **Mon–Sat 07:00–17:30**; office **Mon–Fri 08:30–17:00**; **open yard first Saturday of each month 09:00–12:00**.
- People (8 named): staff — **Ruth Abernethy** (founder, lead instructor C+E, 24 years driving), **Kofi Mensah** (senior instructor C+E), **Ilse Brandt** (yard lead: reversing and coupling), **Daniel Moreau** (instructor Class C, refresher days, Driver CPC tutor), **Priya Natarajan** (course coordinator: medicals, licences, test bookings); trainees in the stories — **Leila Haddad** (warehouse picker → C+E), **Marcus Bell** (bus driver adding Class C), **Sofia Ferreira** (back after ten years, refresher).
- Fleet: **3 × 18-tonne rigid** (Class C), **2 × tractor unit with 13.6 m curtain-side trailer** (C+E) = 5 lorries; yard **1.4 hectares**; **2 trainees per lorry per day**; **12 places per intake**; **6 intakes a year**.
- Intakes 2027: **12 Jan, 9 Mar, 11 May, 6 Jul, 14 Sep, 9 Nov**.
- Process (7 stops): Week 0 assessment drive (2 h) · Weeks 1–2 medical (D4) and provisional entitlement, two theory coaching evenings · Week 3 theory and hazard perception tests passed, practical test date confirmed for week 7 · Week 4 yard week: walk-round, coupling, reversing exercise (2 days) · Week 5 road days: town, dual carriageway, rural (2 days) · Week 6 mock test with a second instructor (1 day) · Week 7 test day: warm-up drive then the practical test in our lorry.
- Fees (7 items, GBP, include the lorry on test day and the warm-up drive; official test fees are paid by the trainee to the testing authority):
  1. Assessment drive, 2 hours — **£120** (deducted from a course booked within 30 days)
  2. Theory and hazard perception coaching, 2 evenings — **£90**
  3. Class C course, 5 training days + test day — **£1,890**
  4. Class C+E course (for Class C holders), 5 training days + test day — **£1,640**
  5. C then C+E pathway, 10 training days + 2 test days — **£3,380**
  6. Refresher day, one-to-one, 6 hours (also the retest package) — **£340**
  7. Driver CPC periodic week, 5 × 7-hour modules — **£395**
- Stories (posts, category Stories): 1 "Leila: from the picking aisle to the C+E cab" (P16, tags class-ce); 2 "Marcus: a bus driver learns the reversing bay" (P17, class-c); 3 "Sofia: ten years away, one refresher day" (P18, refresher). Notice post (category Notices): "2027 intake dates and open yard Saturdays" (P15, open-yard). Posts are dated so the three stories are the latest.
- No claims of pass-rate guarantees, awards, real media, real test bodies or real brands. Wording: "most trainees", "we aim to", never percentages.

## 11. Scroll motion (sp-scroll only; 3 effects + parallax)
| Effect (source kobedenshi.ac.jp) | Reference trigger / time / easing (tok(g)) | Our class | Where | Our values |
|---|---|---|---|---|
| Fade + rise of sections | jQuery listener adds a class when the element top is 100–200 px above the viewport bottom; opacity .5 s, transform .3 s, ease-in-out | `sp-reveal sp-reveal--up` | block 2 text group + strip, block 4 rows, block 5 head, block 8 list, block 10 text; inner-page section heads | `--sp-dist: 24px`, `--sp-dur: .6s`, `--sp-ease: cubic-bezier(.45,0,.55,1)` (≈ ease-in-out) set on `:root`; triggered by sp-scroll's IntersectionObserver |
| Card stagger | per-item delay (i%3)×200 ms + row ×200 ms; none on phones | `sp-stagger` + `sp-reveal--up` children | block 3 cards, block 5 stops, block 9 story cards; Courses cards; Stories index cards | sp default steps .12 s (do not edit JS/CSS logic) |
| KV photo slower than the page | top = scrollTop/4 desktop, /10 phone, linear | `sp-parallax` | hero Cover (P01) | `--sp-par: 10%`; ≤ 781 px `--sp-par: 6%` |
| (second parallax) | same | `sp-parallax` | block 6 band (P12); Test day band | `--sp-par: 12%` (mobile 8%); Test day 10% (mobile 6%) |
- No reveal in the hero (the KV load animation is CSS keyframes on the lockup and card only, `@media (prefers-reduced-motion: no-preference)`, and disabled under `html.sp-no-motion`). No reveal on the price table, forms or legal text. Not adopted: slide-in menu panels, particle band, Slick carousel.
- Parallax: the moving layer is the Cover background image only; the word, tagline and docked card are in the static foreground. Reduced motion, `?sp-static`, editor: no movement.

## 12. Similarity to the reference (target 80%)
| Dimension | Reference (tok) | Kamotsu Academy |
|---|---|---|
| First-screen structure | full-bleed photo 1440×790 (1.82:1), header over photo, giant two-line white word, docked card bottom-right (tok(e)) | same: P01 1440×790, header over photo, two-line white word, docked card right 40 / bottom 28 |
| Giant word | heavy condensed caps, white, ≈270 px/line, lh ≈.9, spans x 135–1320 (tok(b)) | Hanken Grotesk 800 caps, white, 184/213 px per line, lh .86, spans the 1240 container |
| Kicker + tagline | 16 px 700 .05em caps kicker; black italic tagline over line 1 | 1rem 700 .05em kicker; ink 800 italic tagline over line 1 (left, not centred) |
| Docked card | 373×124, r8, shadow 0 4 20 rgba(0,0,0,.12), thumb 140×100 r4, 28 px chevron (tok(d)(e)) | 400×136, r8, same shadow, thumb 140×104 r4, 32 px chevron + mini timeline line |
| Header | padding 35/60, nav 14.4 px 700, two black pills r999 (tok(c)) | padding 30/60, nav .9rem 700, two navy pills r999 |
| Colour | white 44% / photo greys 45% / ink 6.5% / ground #F5F5F5 / footer #111 / accent #F2FF2E <1% / saturated 0.5% (tok(a)) | white / photo greys / ink #222 / ground #F5F5F5 / footer #111 / accent #E8F52C <1% / pills navy #243044 / saturated ≤3% |
| Type | Noto Sans JP; body 14/21; h2 32 px 700; card titles 24 px 700; card h3 16 px .04em (tok(b)) | Hanken Grotesk + Work Sans (+ Noto Sans TC/JP); body 15/26; h2 2rem 700; card titles 1.5rem 700; chips .8125rem .04em |
| Spacing | section ~100 px, container ~1240, gap 30 (tok(c)) | section 100 px, container 1240, gap 30 |
| Cards | tall 288×450 (0.64:1) and square 393×393, r6, no border/shadow, text top-left, photo bleeding at bottom, 48 px white round chevron bottom-left (tok(d)(e)(f)) | identical geometry: tall 0.64:1 and square 1:1, r6, text top-left, white 48 px chevron |
| Decoration | 8:1 skyline strip under the lead; yellow highlighter on one phrase; 90 px yellow round badge; centred outline pill 244×56 (tok(f)) | 8:1 yard panorama strip under the lead; hi-vis highlighter on one phrase; 90 px hi-vis badge (×2); centred outline pill 244×56 |
| Images | daylight documentary photos of people working, high-key, slightly desaturated; hero radius 0 (tok(e)) | same type and grade (STYLE); hero radius 0, all other photos r6 |
| Motion | fade+rise .5 s ease-in-out at 100–200 px; stagger 200 ms; KV parallax scrollTop/4 (/10 phone) (tok(g)) | sp-reveal--up .6 s ease-in-out 24 px; sp-stagger .12 s; sp-parallax 10% (6% phone) on KV + 12% band |
| Not copied | photos, copy, Japanese tagline, logo, 3D stickers, particle band, Slick news carousel | — |

## 13. Home acceptance checklist
1. First screen 1440×900: full-bleed P01 (people working at a lorry, documentary, high-key); white two-line caps "WALK ROUND / THEN DRIVE" spanning the content width over the upper half; kicker + italic ink tagline over line 1; header over the photo with split nav and two navy pills; white docked "Next intake" card bottom-right with P02 thumb, mini timeline line and round chevron.
2. KV checklist items 1–6 (section 2) all visible; no table, form, search box; `check-first-screen.py` saturated share ≤ 10% (target ≤ 3%).
3. 390 px first screen: tagline, photo with word, card in normal flow; no vertical text; no absolute label over text; auto-gates overlap check passes; no horizontal overflow at 390 and 1280.
4. Block order equals section 4 (10 blocks); differs from Kuki, Toso, Kyukyu, Hiroba per 4.2.
5. T3 tall cards (0.64:1, r6, white 48 px chevron bottom-left, hi-vis badge on card 1) and square story cards visible; T2 appears in the KV and on the block 6 band.
6. Road timeline: navy road with dashed centre line, 7 week chips, P09/P10/P11 under stops 2/4/7, stop 7 badge; vertical on mobile.
7. `sp-parallax` on the KV and block 6; `check-parallax.mjs` ≥ 6 px shift desktop and mobile, 0 under reduced motion; ≥ 3 reveals hidden before entry and visible after; none in the hero.
8. Price table: 7 items with the exact section-10 prices; at 800 and 1280 the price column is fully visible, nowrap, right-aligned; stacked on mobile.
9. ≥ 8 images on home (17 planned), none repeated on the page, no text/logos/broken hands, same STYLE.
10. ≥ 250 English words, narrative paragraphs in blocks 2, 4, 5 (≥ 20 words each, ≥ 3).
11. Colours per section 6 (ground #F5F5F5, ink #222, navy pills, hi-vis accent <1%, footer #111); fonts Hanken Grotesk + Work Sans, identical in editor and front end; max type ≥ 4.25rem; one top menu.
12. Fixed facts (section 10) identical on home, inner pages and all five languages.
