# Homura Safety: design spec (stage 1)
Slug `homura-safety` · type **landing** (one long conversion page, anchor menu, one repeated CTA) · industry: fire-safety consultancy (compliance review of workplace fire precautions).
Reference (main): **https://www.hochiki.co.jp/** (fire-alarm maker). Secondary: none. Tokens: `brand/reference-tokens.md` (cited below as `tok(a)…tok(g)`).
Imagery: **photo** (per stage-a IMAGERY): low-key documentary photographs, real people and equipment in real rooms. No illustration, no cut-outs (0).
Font direction: **sans** (Libre Franklin headings, Source Sans 3 body, CJK Noto Sans TC / Noto Sans JP ). Five languages: en, zh-TW, ja, fr, de.

---
## 1. Signature techniques (all three must be obvious at first glance; do not soften)

### T1. Slanted bar lettering crossing the photo (hochiki hero)
- **Reference:** https://www.hochiki.co.jp/ hero: giant white skewed bars that form katakana letters, running across the full-bleed portrait; bars sit partly *behind* the head (the face is in front) and partly cross the open backdrop, ending in a "!" at top right. Huge, bold, pure white on saturated red.
- **Ours (home hero):** the word **CHECK** built from thick white parallelogram bars (Libre Franklin 900 letterforms, `transform: skewX(-8deg)` on each bar group), cap height ≈ 30% of hero height (desktop ≈ 240px tall glyphs; font-size `clamp(4.25rem, 16vw, 15rem)`), placed across the **upper-left 60%** of the hero, with a long free bar extending right ending in a slanted "!" bar block at top right (mirrors reference rhythm: letters left, long bar, exclamation right).
- **Behind/in front:** implemented as two stacked layers: layer A (bars) under the photo's foreground layer B = the *same* photo file with a CSS `mask-image` (soft vertical gradient band) over the consultant's head/shoulders region, so the consultant appears in front of the C-H bars. If mask proves fragile, acceptable fallback: bars fully in front at `opacity:1` but must not cover faces (bars stop 24px before the head bounding box). Text is real text (`<p class="hs-barword" aria-hidden="true">CHECK</p>` + visually hidden H1), editable in editor, never `content:`.
- **Contrast must stay:** pure #FFFFFF bars on the low-key dark photo (#1E1814 avg). No transparency, no outline-only letters, no reduction below 4.25rem on mobile (mobile: `font-size: 4.5rem`, single row, top area, no overlap with CTA; see §8).
- **Inner pages:** every inner page hero (`hs-pagehead`) repeats a short slanted bar word (≈ `clamp(4.25rem,9vw,7.5rem)`, white on that page's dark photo band, 320px tall band): About **WHO**, Review scope **SCOPE**, Process **STEPS**, Findings sample **READ**, Fees **FEES**, Contact **CALL**, Newsletter **NEWS**, Journal **NOTES**. Same skew -8deg and white bar weight.

### T2. Docked quick-link strip (hochiki link strip)
- **Reference:** white strip, 1170px wide × 68px, 4 equal cells (50px square thumbnail + bold label), 1px #EBEBEB vertical dividers, soft shadow `0 0 12px rgba(0,0,0,.12)`, overlapping the hero's bottom edge (≈ 58px over, rest sitting just inside photo). `tok(c)(d)(e)`.
- **Ours:** home hero foot, `max-width:1170px`, height 68px, cells: **Premises we review** (#scope) · **How a review reads** (#findings) · **Fees** (#fees) · **Book the visit** (#book). Each cell: 50×50 square thumbnail (crop of img-03, img-05, img-08, img-10 respectively), label Libre Franklin 700 1rem ink, small chestnut dot arrow at right. Strip bottom sits 0px above hero bottom edge with `margin-top:-68px` offset so it straddles; radius 0.
- **Not to soften:** stays white, stays docked over the photo, 4 cells, shadow visible. Mobile: becomes 2×2 grid (each 64px tall) placed *below* the photo, still white with shadow, no overlap with text.
- **Inner pages:** each inner page hero ends with a 3–4-cell docked strip linking to sibling pages (About → Team, Scope, Process, Contact; Scope → Kitchens, Warehouses, Offices, Fees; Process, Fees, Findings same pattern). Required on at least About, Scope, Process, Fees, Findings.

### T3. Notch pair + short-rule section titles (hochiki About/Support pair)
- **Reference:** two-up card: saturated tile with product photo and a **triangular notch** (≈ 24px) on its edge pointing into a white text panel; mirrored; section titles in bold gothic 2rem with a tiny red uppercase Latin sub-label and a 20×2 red rule. `tok(b)(e)(f)`.
- **Ours:** home "Who we are" and "What the visit includes" rows: left tile = chestnut #5C4A3E block containing a 4:3 low-key equipment photo inset 32px, with a **24px CSS triangle notch** on its right edge (pointing into the white panel); right = white panel with title, 2 paragraphs, "Read more" link with ember dot. Second row mirrored (photo right, notch pointing left). Proportion 1:1 desktop, panel min-height = tile height.
- **Section title system** (whole site): H2 Libre Franklin 800 `2.5rem`, below it a 20×2px ember (#B8431F) rule + uppercase sub-label 0.75rem letter-spacing .14em chestnut (e.g. "SCOPE", "PROCESS"). Sub-labels are real block text.
- **Inner pages:** notch pair is reused on About (founders), Scope (each premises type), Process (step pairs, max 2 pairs; not a 6-step grid), Fees (what is included). Short-rule titles on every page.

### Supporting: header slab with two hanging cells
White header slab 85px tall, inset from left so it starts at container left (1170 container), flush to top, overlapping the hero photo (`position:absolute` on desktop only); logo left, anchor menu (Scope · Process · Findings · Fees · Team · Journal), then two hanging square cells at right: **chestnut "Book"** cell (85×85, white label + small calendar icon) and **black language cell** (85×85, globe icon + current lang code). Mobile: normal static header, white, 64px, burger + Book cell.

---
## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
hochiki.co.jp opens with a full-bleed portrait of a person looking straight at camera in front of a saturated red studio backdrop. Giant white slanted bars spell the company sound across and behind the face; a thin white tagline sits bottom-right ("protecting people and lives"); a single red CTA ("What is Hochiki") sits bottom-left; a white 4-cell link strip docks at the foot. Story: *the people behind the alarm, and the one thing to press.* Signature motion: hero slideshow crossfade (2s fade, autoplay 8s) with a thin linear progress bar (8.5s linear), cubic-bezier(.455,.03,.515,.955) for UI transitions; no scroll reveals.

### (2) Our translation (fire-safety consultancy)
Same composition and image type (real photo, people + equipment, full bleed): a **low-key photograph in a commercial kitchen after service**: consultant (woman, 40s, dark work jacket, clipboard) crouching beside a wall-mounted wet-chemical suppression nozzle above the range, while the head chef (man, 50s, whites) stands and points at the red manual pull station on the wall. Single practical light (hood lamp) warm, rest falls to chestnut-graphite dark. Slanted white bars **CHECK** run across the upper left behind the consultant's head; the exclamation bar block top-right. Tagline bottom-right, thin white: *"Would your precautions hold on the night they're needed?"*. Single chestnut CTA bottom-left: **Book the visit**. Docked white 4-cell strip at foot. Story: *the person who checks, the person who works there, and the one thing to book.* Motion: slow 2-still crossfade of the same kitchen (still 1 = nozzle/pull station; still 2 = consultant reading the pull station tag with torch) every 8s, 2s fade, with a 2px white linear progress bar under the CTA (8.5s linear), plus `sp-parallax` on the photo layer.

### (3) KV checklist (all in the first screen, visible at 1280×800)
| # | Reference element | Our equivalent | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Full-bleed portrait, subject centred on saturated backdrop | Consultant crouched at suppression nozzle, chef pointing at pull station, low-key kitchen | full hero, 100vw × 810px (desktop), subjects centre to centre-right | `sp-parallax --sp-par:8%` (mobile 5%); crossfade still 1↔2 every 8s, 2s fade | img-01 (+ img-02 second still) |
| 2 | Giant slanted white bar lettering crossing behind the face | White skewed (-8deg) bars spelling **CHECK** + "!" bar block | upper-left 60% + top-right block | CSS clip wipe-in from left on load 1.0s cubic-bezier(.455,.03,.515,.955) (CSS keyframe, not sp-reveal); static under reduced-motion/sp-static | over img-01 |
| 3 | Thin white tagline bottom-right | "Would your precautions hold on the night they're needed?" Libre Franklin 300 1.5rem white, max 22ch | bottom-right, 120px above strip | none | — |
| 4 | Red CTA bottom-left | Chestnut #5C4A3E button "Book the visit", white text, white dot-arrow, 270×58px, radius 0 (+ 2px white progress bar 270px wide under it) | bottom-left, 120px above strip, aligned to container left | hover bg #4A3B31 0.2s; progress bar width 0→100% 8.5s linear | — |
| 5 | Docked white 4-cell link strip | Premises / How a review reads / Fees / Book the visit, 50px thumbs | bottom, 1170×68, straddling hero edge | static (hover thumb opacity .8, 0.2s) | thumbs from img-03, img-05, img-08, img-10 |
| 6 | White header slab + red "Global" + black "Search" hanging cells | White slab + chestnut **Book** cell + black language cell | top, flush, from container left | none | — |

---
## 3. Home page (landing-longform; anchor menu; one repeated CTA "Book the visit" → #book)
| # | Block (anchor) | Purpose | Layout | Image | Copy weight |
|---|---|---|---|---|---|
| 1 | Header slab | nav + Book + lang | §1 supporting | — | menu 6 items |
| 2 | **KV hero** (#top) | key visual | §2; full bleed 810px, dark | img-01, img-02 | H1 (visually hidden "Fire-safety compliance reviews for working premises"), tagline, CTA |
| 3 | Docked strip | jump links | T2 | 4 thumbs (crops) | 4 labels |
| 4 | **Intro statement** (#about) | who we are, why | white; container 1170; left column title (short-rule "ABOUT"), right column 2 narrative paragraphs (≈90 words) + three inline facts (`sp-count`: 1,460 reviews · 14 years · 7 people) in a hairline row | — | 2 paragraphs |
| 5 | **Notch pair ×2** (#scope) | what premises a review covers | T3; row 1 tile left = img-03 (kitchen hood) notch right; row 2 mirrored tile right = img-04 (warehouse racking sprinklers) notch left | img-03, img-04 | each panel 1 paragraph ≈55 words + bullet list 4 premises |
| 6 | **Three scrim tiles** (premises types) | Kitchens & food halls · Warehouses & workshops · Offices & clinics | pale band #F6F6F6; 3 equal tiles 1.3:1, dark scrim `linear-gradient(transparent 30%, rgba(0,0,0,.55))`, white centred title + one line (tok(e)) | img-05, img-06, img-07 | 1 line each |
| 7 | **Parallax visit band** (#process) | the visit, step by step (4 steps inline text, not a grid) | full-bleed 560px photo band img-08 with `sp-parallax --sp-par:10%`; foreground white panel 520px wide anchored left inside container (not in moving layer): short-rule title "PROCESS", 4 numbered lines (01 Call, 02 Walk-through, 03 Written findings, 04 Follow-up visit) | img-08 | ≈70 words |
| 8 | **How a review reads** (#findings) | show the findings document | white; left 7/12 = photo of a printed findings page on a desk under lamp (img-09, 4:3), right 5/12 = an excerpt card styled as a report row (finding ID, location, observation, priority badge pill r999 black) ×3 + paragraph | img-09 | 1 paragraph ≈60 words + 3 rows |
| 9 | **Fees table** (#fees) | price list, 5 items | full width container 1170, table (see §7), `nowrap` price right; note line below | — | table + 1 line |
| 10 | **Team row** (#team) | 6 named consultants | pale band; 2 people with photo (img-10 Mara, img-11 Tobias) in notch-pair-style mini cards side by side (photo 1:1 left, text right) + 4 more as text-only hairline list (name, role, years) | img-10, img-11 | ≈30 words per featured |
| 11 | **Cases** (#cases) | 3 short stories | white; 3 columns, each: photo 1.95:1 top (img-12, img-13, img-14), short-rule mini label (premises type), title, 40-word story | img-12, img-13, img-14 | 3 × 40 words |
| 12 | **Journal** | 3 latest posts | query loop, text + small 16:9 thumb (post featured images) | featured images (img-15, img-16 + others reused only from posts) | titles |
| 13 | **Book the visit** (#book) | the single conversion | chestnut #5C4A3E band full width, white text: title "Book the visit", hours, phone, email, "Book the visit" button (white bg, chestnut text) linking to /contact/; right side photo img-17 (consultant at door with clipboard, 4:5) | img-17 | ≈50 words |
| 14 | **Waitlist subscribe** | newsletter (early access to the monthly code-change brief) | pale band; left text 2 lines, right `shippress_form_slot` newsletter (email + submit) | — | 2 lines |
| 15 | Footer | address, hours, links, legal | ink #1B1612 ground, white text, 4 columns | — | — |

Home image positions: img-01, img-02 (hero stills), img-03, img-04, img-05, img-06, img-07, img-08, img-09, img-10, img-11, img-12, img-13, img-14, img-17 = **15 photos** on home (≥8 ✔), each different. Strip thumbs are crops of home photos and do not count.
Home English words ≥ 400 (target), ≥ 3 narrative paragraphs ≥ 20 words (blocks 4, 5, 8, 13).

### Comparison with recent home orders
| Theme | Order | Why ours differs |
|---|---|---|
| Gaku Frames | framed-window hero > intro > mouldings > framed parallax band > process > price table > delivery > journal > closing | Ours: full-bleed portrait hero with bar lettering + docked strip; notch pairs and scrim tiles instead of framed windows; no "closing card" — a saturated booking band |
| Himuro Gelato | KV > intro > pinned viewer > dark process band > prices > people rows > parallax visit > journal > newsletter | No pinned viewer; our parallax carries process (not visit); findings document block unique; prices after findings |
| Tochi Academy | disc slider > college > cohort cards > ticker > timeline > parallax > exam > instructors > journal > fees | No slider/ticker/timeline; anchor-menu landing |
| Haru Allergy | pinned photo + veil poem > edge portraits > method band > cases parallax > voice > visit | No pinned/veil; cases are 3-column photo stories; hero is hochiki-style bar lettering |

---
## 4. Inner pages (≥ 8 + legal)
Every inner page: dark photo pagehead band (320px desktop / 220px mobile) with slanted bar word (T1) + short-rule H1 + docked sibling strip (T2) where noted; body uses short-rule titles and notch pair (T3) where noted.
| Page (slug) | Bar word | Key content | Image | T2 | T3 |
|---|---|---|---|---|---|
| About (`about`) | WHO | founding 2011 story (3 paragraphs), principles (we do not sell equipment; we write what we saw), team list of all 7 people | img-18 pagehead, img-10 | ✔ | ✔ founders pair |
| Review scope (`scope`) | SCOPE | 3 premises types, what is checked (detection, suppression, escape routes, signage, extinguishers, staff drills, records), what is out of scope (design approval, equipment sales) | img-05 pagehead, img-03, img-04 | ✔ | ✔ per type |
| Process (`process`) | STEPS | 4 steps detail, timings (visit 2–4 h, report in 7 working days), what to prepare | img-08 pagehead, img-09 | ✔ | ✔ 2 pairs |
| Findings sample (`findings`) | READ | sample report structure: summary, 12 example findings rows (table → stacked on mobile), priority definitions | img-09 pagehead | ✔ | — |
| Fees (`fees`) | FEES | full fee table (same 5 items), what's included, travel, cancellation | img-06 pagehead | ✔ | ✔ included pair |
| Cases (`cases`) | CASES | 3 stories expanded (≈150 words each) | img-12, img-13, img-14 | — | — |
| Contact / book (`contact`) | CALL | address, hours, phone, email; `shippress_form_slot` contact (kind contact) with mailto fallback; map-less location text | img-17 pagehead | — | — |
| Newsletter (`newsletter`) | NEWS | waitlist/early-access to monthly "Code-change brief"; standalone subscribe form | img-15 pagehead | — | — |
| Journal (`journal`, role posts) | NOTES | post list (empty page content) | — | — | — |
| Privacy, Terms, Thanks | — | legal text, plain, no reveal | — | — | — |
Posts: ≥ 3 (e.g. "What a pull-station tag tells you", "Wet-chemical nozzles after a deep clean", "Escape-route signs in mixed-use buildings"), categories Notes / Field, tags. Featured images img-15, img-16, img-07.

---
## 5. Colour (from tok(a); hochiki red replaced by chestnut — industry/brief requires the quiet chestnut row palette and saturated cap; reason: hochiki red #ED1C23 hero backdrop is ~55% saturated, the row note forbids >30% and chestnut is the assigned palette)
| Token | Hex | Role | Share (page) | Source |
|---|---|---|---|---|
| base | #FFFFFF | ground | ≈ 55% | tok(a) ground white |
| pale | #F6F6F6 | bands | ≈ 18% | tok(a) pale band |
| ink | #1B1612 | text, footer | text | tok(a) ink #000 → warmed |
| primary | #5C4A3E | CTA, Book cell, notch tiles, booking band | ≈ 9% | row hex (replaces #ED1C23) |
| primary-dark | #4A3B31 | hover | — | primary −10% L |
| photo-dark | #1E1814 | low-key photo average, pagehead fallback bg | hero | stage-a |
| hairline | #EBEBEB | dividers | — | tok(a) |
| accent ember | #B8431F | 20×2 rule, link dots only | < 1% | stand-in for hochiki red small marks |
| black | #000000 | language cell, pill tags | — | tok(a) black search cell |
First-screen saturated share: target < 8%, hard cap 15% (check-first-screen.py), never above 30% (row note). Chestnut is low-chroma so CTA + Book cell ≈ 3%.

## 6. Typography (sans direction)
- Latin: **Libre Franklin** (headings 700/800/900; tagline 300) and **Source Sans 3** (body 400/600). Both bundled woff2 in assets/fonts, loaded via **theme.json fontFamilies + fontFace** (editor = front end), listed in theme-meta.json fonts[].files with OFL license file, names in readme.txt.
- Stacks: heading `"Libre Franklin", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`; body `"Source Sans 3", system-ui, -apple-system, "Segoe UI", sans-serif`.
- `:root:lang(zh-TW)` heading: `"Libre Franklin", "Noto Sans TC", "PingFang TC", "Microsoft JhengHei", sans-serif` (bundled zh subset family Noto Sans TC 700); body: `"Source Sans 3", "PingFang TC", "Microsoft JhengHei", sans-serif` (no bundled zh/ja font in body). `:root:lang(ja)` heading `"Libre Franklin", "Noto Sans JP", "Hiragino Kaku Gothic ProN", "Yu Gothic", sans-serif`; body `"Source Sans 3", "Hiragino Sans", "Yu Gothic", sans-serif`. Use Hokuto/Hada substitute subsetting (CJK subset script known broken). Copy shared/inc/editor-lang.php → inc/editor-lang.php and require it. No anywhere.
- Scale (root 16px; hochiki 10px root values ×0.625 → rem): bar word `clamp(4.25rem,16vw,15rem)` 900 lh .9 (largest, ≥4.25rem ✔; theme.json `xx-large` = 4.5rem, `huge` = clamp above); H1 page `3rem` 800; H2 `2.5rem` 800 lh 1.2 (tok(b) 2.0rem@10px base scaled up one step for Latin); H3 `1.375rem` 700; body `1.0625rem` lh 1.75 (CJK 1.85, CJK size ×0.75 for display only); labels `0.75rem` 600 uppercase .14em; tagline `1.5rem` 300; strip labels `1rem` 700. DE/FR `hyphens:auto`.

## 7. Fixed facts (brand.md must use these; same everywhere, all five languages)
- Name **Homura Safety**, fire-safety compliance consultancy, founded **2011**, location: **Unit 4, 18 Harbour Row, Port Ellery** (fictional, neutral). Hours **Mon–Fri 08:00–18:00, Sat 09:00–13:00**; site visits also **after service 21:00–23:00 by arrangement**. Phone +00 21 4460 2011, email hello@homura-safety.example.
- People (7): **Mara Lindqvist** (founder, lead consultant), **Tobias Achebe** (senior consultant, kitchens), **Yuna Park** (consultant, warehouses), **Rafael Duarte** (consultant, offices & clinics), **Ines Moreau** (report editor), **Samir Haddad** (follow-up visits), **Keiko Brandt** (bookings & office).
- Process (4): 01 Call (15-min scoping) → 02 Walk-through visit (2–4 h) → 03 Written findings (within 7 working days) → 04 Follow-up visit (optional, within 90 days).
- Fees (5, single currency €, excl. VAT): Small premises review (up to 250 m²) **€420** · Standard review (250–1,000 m²) **€780** · Large site review (1,000–4,000 m²) **€1,450** · Kitchen suppression & hood check (add-on) **€190** · Follow-up visit **€260**.
- Facts row (home intro, About): **1,460 reviews · 14 years · 7 people**.
- Cases (3): Linden Hall food court (kitchen, 6 outlets, blocked hood nozzle found); Northgate cold store (warehouse racking, sprinkler heads obstructed by stock); Ashby Street dental clinic (escape route through store room). Outcomes described qualitatively only, no guarantees.
- Fees table (≥782px): `width:100%` of container, 2–3 columns (service, scope, price), price column `white-space:nowrap; text-align:right; min-width:8ch`, never clipped. <782px: each row stacks (service bold, scope, price on its own line right-aligned).

## 8. Responsive
- 390px first screen: header 64px; hero photo 560px tall with bar word `4.5rem` single line "CHECK" across top area (not vertical, not overlapping tagline/CTA); tagline + CTA stacked below the bar word in normal flow (no absolutely positioned labels that can overlap); docked strip becomes 2×2 below photo. No vertical text anywhere.
- All tables stack on mobile (fees, findings sample). Notch pairs stack (tile above panel, notch rotates to point down). Scrim tiles 1 column. No horizontal overflow at 390 / 1280.
- Header slab absolute only ≥ 1024px.

## 9. Images (18; STYLE identical for all)
STYLE: `low-key documentary photograph, warm-dark interior lit by a single practical light, shallow depth of field, muted chestnut and graphite colour grade, fine film grain, natural unposed moment, real equipment, diverse adults in plain work clothes, international modern setting, no text, no logos, no brand marks, no signage lettering`
| # | Subject / composition | Use (page · block) | Home |
|---|---|---|---|
| img-01 | Commercial kitchen after service: consultant (woman 40s) crouching by wall suppression nozzle above range, chef (man 50s, whites) pointing at red pull station; wide 16:9, subjects centre-right, dark open area upper-left for bars | Home KV still 1 | ★ |
| img-02 | Same kitchen, consultant reading pull-station tag with small torch, chef beside; 16:9 same framing | Home KV still 2 | ★ |
| img-03 | Close detail: stainless hood with nozzle and fusible link, lamp glow; 4:3 | Home notch row 1; Scope body | ★ |
| img-04 | Warehouse racking aisle with sprinkler heads and consultant measuring clearance; 4:3 | Home notch row 2; Scope body | ★ |
| img-05 | Food hall kitchen line at dusk, extinguisher on wall; 1.3:1 | Home tile 1; Scope pagehead | ★ |
| img-06 | Workshop with fire door and hose reel; 1.3:1 | Home tile 2; Fees pagehead | ★ |
| img-07 | Quiet clinic corridor with illuminated exit and extinguisher cabinet (no lettering); 1.3:1 | Home tile 3; post featured | ★ |
| img-08 | Wide: consultant walking a dim corridor with clipboard checking escape route, long perspective; 21:9 | Home parallax band; Process pagehead | ★ |
| img-09 | Printed findings report on desk under a lamp, pen, floor plan; 4:3 | Home findings; Process body; Findings pagehead | ★ |
| img-10 | Portrait Mara Lindqvist at office window, low light; 1:1 | Home team; About body | ★ |
| img-11 | Portrait Tobias Achebe in kitchen doorway; 1:1 | Home team | ★ |
| img-12 | Food court back corridor, consultant and manager looking up at hood; 1.95:1 | Home case 1; Cases | ★ |
| img-13 | Cold store with frosted racking, consultant torch on sprinkler; 1.95:1 | Home case 2; Cases | ★ |
| img-14 | Dental clinic store room with escape door, consultant and receptionist; 1.95:1 | Home case 3; Cases | ★ |
| img-15 | Hands writing in notebook beside fire-extinguisher inspection tags (blank); 16:9 | Newsletter pagehead; post featured | |
| img-16 | Smoke detector on ceiling being tested with pole tool; 16:9 | post featured | |
| img-17 | Consultant at shop door at evening with clipboard, 4:5 | Home booking band; Contact pagehead | ★ |
| img-18 | Team around a table reviewing floor plans, lamp light; 21:9 | About pagehead | |
No duplicate on one page (Scope uses img-05 head + img-03/04 body; Process img-08 head + img-09 body; About img-18 + img-10). Each ≤300 KB, ≤2000px, webp. Read each output; regenerate if text/logos/hand errors.

## 10. Scroll effects (sp-scroll; hero excluded from sp-reveal)
| Effect | Where | Source | Trigger/time/easing |
|---|---|---|---|
| `sp-parallax` | Home hero (img-01/02 layer, `--sp-par:8%`, mobile 5%); home visit band img-08 (`--sp-par:10%`, mobile 6%); inner pageheads `--sp-par:6%` | hochiki 8s slideshow drift / 2s crossfade (motion continuity of photo) | CSS scroll-driven, fallback IO |
| `sp-reveal sp-reveal--up` + parent `sp-stagger` | Notch pair panels, scrim tiles row, cases row, team cards | hochiki tab fadeIn 400ms swing → ours 0.8s, `--sp-ease: cubic-bezier(.455,.03,.515,.955)` | IO enter |
| `sp-count` | Facts row (1,460 · 14 · 7) | hochiki progress bar linear count feel | 1.2s easeOutCubic |
Not on: hero, fees table, forms, legal pages, docked strip. Bar word wipe-in is a load CSS keyframe in hero (not sp-reveal), suppressed under reduced motion and `?sp-static`. Crossfade: CSS keyframes only (two `figure` layers, `animation: 16s infinite`), off under reduced motion; no JS slider.
Parallax hard rules: foreground text never in moving layer; container `overflow:clip`; check-parallax.mjs Δ≥6px desktop+mobile, 0 under reduced motion.

## 11. Forms (contract v1)
- Copy `pipeline/assets/forms/shippress-forms.php` → `inc/`, CSS/editor JS → `assets/` unchanged; require in functions.php.
- **Contact page** (`contact`): below hours/address panel, own block: `shippress_form_slot(kind contact, fallback = buffered literal mailto button "Email us to book" → mailto:hello@homura-safety.example?subject=…)`. CF7 first, then WPForms; else fallback button (never link to /contact/). Expected plugin fields: name, email, phone, premises type (select: Kitchen / Warehouse / Office or clinic / Other), floor area, preferred date, message, consent checkbox.
- **Newsletter page** (`newsletter`, standalone waitlist "Code-change brief"): slot kind newsletter with email (required) + submit; MailPoet (explicit id) → MC4WP; CF7/WPForms only via explicit dedicated id. No-plugin: native mailto POST with the entered email and the notice "Opens your email app. Send the request to join the list; you are not subscribed yet."
- **Home block 14 + footer**: newsletter slot (email + submit). Never in first screen; never `sp-reveal` on forms or parents.
- Tokens: `--sp-form-accent: var(--wp--preset--color--primary)` (#5C4A3E), `--sp-form-on-accent:#FFFFFF`, `--sp-form-radius:0`, `--sp-form-focus: #B8431F` (2px outline offset 2px), `--sp-form-surface:#FFFFFF`, `--sp-form-text: #1B1612`, border #1B1612 1px. Dark grounds (footer #1B1612, booking band #5C4A3E): surface `transparent`, text `#FFFFFF`, border `rgba(255,255,255,.6)`, accent `#FFFFFF`, on-accent `#5C4A3E`, focus `#F6F6F6`. Error text/border `#B8431F` on light, `#F2B8A6` on dark; success `#2F5D3A` light / `#BFE3C6` dark; messages inherit section colour otherwise.
- Strings (semantic keys in inc/i18n/en.php, all 5 languages, `L10N_SEMANTIC=1`): `forms_email`, `forms_subscribe`, `forms_mail_notice`, `forms_mail_subject`, plus contact label `contact_email` ("Email us to book"). Localised, not literal.

## 12. Similarity table (target 80%)
| Dimension | Reference (tok) | Homura Safety |
|---|---|---|
| Ground / band | #FFFFFF 62% / #F6F6F6 22% | #FFFFFF 55% / #F6F6F6 18% |
| Primary | #ED1C23 red | #5C4A3E chestnut (row palette; quiet cap) |
| Text | #000000 | #1B1612 |
| Hairline | #EBEBEB 1px | #EBEBEB 1px |
| Container | 1170 / 1280 | 1170 / 1280 wide |
| Hero height | 810px | 810px (min(810px,100vh)) |
| Header | white slab 85px, inset, two hanging 85px cells (red, black) | same, chestnut + black |
| Section padding / gap | 90px / 40px | 90px / 40px (mobile 56/24) |
| Radius | 0; pills r999 | 0; pills r999 (findings priority) |
| Shadow | 0 0 12px rgba(0,0,0,.12) | same, strip + cards |
| Strip | 1170×68, 50px thumbs, hairline dividers | identical numbers |
| Titles | bold 2.0rem (10px root) + red 20×2 rule + uppercase red sub-label | 2.5rem 800 + ember 20×2 + uppercase sub-label |
| Hero lettering | slanted white bars across face | slanted white bars "CHECK" across consultant |
| Tiles | 1.3:1 with dark scrim, centred title | 1.3:1, scrim .55, centred title |
| Wide cards | 1.95:1 | 1.95:1 (cases) |
| Notch | ≈24px triangle on tile edge | 24px triangle |
| Motion | crossfade 2s / 8s, bar 8.5s linear, UI .2–.8s cubic-bezier(.455,.03,.515,.955) | same crossfade/bar; UI .2s; reveal .8s same curve; parallax 8–10% |

## 13. Home acceptance checklist
- [ ] All 6 KV items visible at 1280×800 first screen; bar word ≥4.25rem white; strip docked over photo edge.
- [ ] T1/T2/T3 visible on home and ≥4 inner pages (About, Scope, Process, Fees, Findings).
- [ ] 15 distinct home photos, 0 cut-outs, no duplicates on any page.
- [ ] ≥250 English words, ≥3 narrative paragraphs; fixed facts identical to §7.
- [ ] Fees table full width at 800/1280, price nowrap right; stacked at 390.
- [ ] 390px: no vertical/absolute labels overlapping; no horizontal overflow.
- [ ] First-screen saturated share ≤15% (target <8%).
- [ ] Exactly one top menu (anchor menu); one repeated CTA "Book the visit".
- [ ] sp-parallax on hero + visit band passes check-parallax.mjs; no reveal on hero/forms/table.
- [ ] Fonts via theme.json fontFace, editor = front end (check-editor-fonts.mjs).
- [ ] Newsletter slot on home block 14 + footer + standalone newsletter page; contact slot with mailto fallback.
- [ ] auto-gates pass (`1 1` for stage 1).
