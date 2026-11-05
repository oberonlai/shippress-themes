# Waku Exhibits: design spec (stage B, binding for implementation)

Slug `waku-exhibits`, exhibition stand builder, **landing** theme (landing-longform: one long conversion home with an anchor menu and ONE repeated CTA "Request a stand quote"). Reference: **Hakuten** https://www.hakuten.co.jp/ (single reference, no secondary). Measurements in `reference-tokens.md`, screenshots in `ref/`. Borrow structure, technique, motion, colour relationships and the key-visual concept. Never copy Hakuten's photos, copy, logo, showreel or its exact page.

Type direction: **sans**. IMAGERY: **photo** (Hakuten is documentary photography of built spaces).

---

## 0. Fixed brand facts (every page, all five languages; brand.md must match exactly)

- Name **Waku Exhibits** ("waku" = frame; the stand is a frame for a conversation). Founded **2014**. Workshop and office: **Unit 4, Harbour Works, 12 Dock Road, Lindhaven** (fictional, international-neutral port city), postcode `LH 2041`.
- Hours: **Mon–Fri 08:30–17:30**, workshop build days Sat by appointment. Phone `+00 20 4100 7720` (fictional), email `quotes@waku-exhibits.example`.
- Reply promise: **a written quote within 5 working days after the planning hour** (not a guarantee of outcome).
- People (8, named, used on About / Planning hour / stories; never a 4-person grid on home):
  1. **Ines Marlow** — founder, lead planner (does most hall walks)
  2. **Tomas Reyes** — structural lead, aluminium and timber systems
  3. **Aiko Brandt** — graphics and print production
  4. **Samuel Okoye** — workshop foreman
  5. **Lena Vasquez** — project manager, logistics and hall rules
  6. **Priya Nair** — lighting and power
  7. **Jonas Feld** — on-site build supervisor
  8. **Mei Lin Hart** — client desk (books the planning hour)
- Halls a quote suits (the 4 T2 rows; same 4 on home, Halls page and in every language):
  1. **Trade fair halls** (Messe, 18–120 m² row/corner/island stands)
  2. **Conference foyers** (sponsor stands 9–24 m², low-height rules)
  3. **Pop-up & retail atriums** (4–30 m², mall rules, night builds)
  4. **Touring stands** (modular kit reused at 3–8 shows a year)
- The planning hour (process, 5 steps, numbered inline, NOT a vertical timeline or step grid): 1 Request (form, 2 min) → 2 Planning hour (60 min, on the hall floor or by video with the hall plan) → 3 Written quote (≤5 working days) → 4 Workshop pre-build (we stand it up in our workshop first) → 5 Hall build & dismantle.
- Planning hour time split (sp-count figures): **15 min** hall plan & rules, **20 min** walking the footprint with tape, **15 min** materials & reuse, **10 min** budget & dates = 60 min.
- Price list (**EUR** in every language, no conversions; "from" prices, all excl. VAT; 7 items):
  | Item | Price |
  |---|---|
  | Planning hour (credited to the build if you go ahead) | €180 |
  | Shell-scheme upgrade, 9 m² | from €2,400 |
  | Custom row stand, 18 m² | from €7,800 |
  | Corner stand, 36 m² | from €14,500 |
  | Island stand, 72 m² | from €29,000 |
  | Touring kit, rebuilt per show | from €1,900 / show |
  | Storage between shows | €95 / month |
- Stories (3, used on home "notes from the hall floor" and Stories/News posts): (a) **"The pillar we built around"** — 36 m² corner stand where a hall column became the meeting table; (b) **"Three shows, one kit"** — touring stand for a valve maker reused in three halls; (c) **"A night build in the atrium"** — 12 m² pop-up assembled between 22:00 and 06:00. No client brand names, no claimed results.
- Figures (sp-count on home): **11** years, **60** minutes per planning hour, **5** working days to a written quote, **3–8** shows a touring kit typically does. No "500+ clients" style claims.

---

## 1. Signature techniques (three plus a supporting rail; all obvious at a glance)

### T1. Photo-filled statement (Hakuten vision, https://www.hakuten.co.jp/, `ref/scroll-hakuten-vision.png`)
- Hakuten: after the hero, a white section ~642px tall; a two-line statement ~72px, weight 900, whose glyphs are filled with a photograph (`background-clip:text`), left-aligned at x≈120, then an 18px/32px paragraph below.
- Ours (home block 2, "Statement"): two lines **"Every stand starts / as tape on a floor."** Onest 900, `clamp(3rem, 6.4vw, 5.5rem)` (=5.5rem / 88px at 1440, ≥4.25rem rule), line-height 1.02, letter-spacing −0.02em, left at the content edge (x 120 at 1440). Fill = image **P02** (hall floor with orange tape and timber offcuts) via `background: url(P02) center/cover; -webkit-background-clip:text; background-clip:text; color:transparent`, with `@supports not (background-clip:text)` → colour `#2E2B33`. Paragraph below: Hanken Grotesk 1.125rem / 1.78 (18/32), max-width 640px, ink.
- The statement is real heading text (`core/heading` with class `wk-fill`), editable; image path set in style.css (`.wk-fill`), editor shows the same.
- Must not be diluted: weight ≥800, size ≥4.25rem at ≥1024px, photo texture must read (P02 must be mid-dark with orange tape; check glyphs are not a flat grey). Never a gradient instead of a photo.

### T2. Edge-flush alternating hall rows (Hakuten works, `ref/scroll-hakuten-works-after.png`, `ref/scroll-hakuten-works2.png`)
- Hakuten: rectangular photo 818×505 (1.62:1, ≈57% of viewport) touching the viewport edge, alternating right/left; ≈404px text column opposite (small bold category line, 26px/700 heading, 14px/25px text, 1px hairline, `#tags` in `#959595`); rows 80–120px apart; a giant section word (~16rem/900) cut by the section top.
- Ours (home block 3, "Halls a quote suits", 4 rows = the 4 halls in §0): `alignfull` Columns, no gap to the edge: photo column 57% flush to the viewport edge (row 1 right, row 2 left, row 3 right, row 4 left), aspect 1.62:1, `object-fit:cover`, radius 0, no frame, no shadow. Text column 404px max, inset 137px from the opposite viewport edge at 1440 (fluid `clamp(24px, 9.5vw, 137px)`), vertically centred. Text stack: category line Hanken 0.75rem 700 caps ls 0.08em `#6E6478` ("HALL 01 · 18–120 m²"), heading Onest 1.625rem (26px) 700 lh 1.37 ls 0.066em, body Hanken 0.875rem lh 1.78 ls 0.05em, 1px `#2E2B33` hairline (margin 32px 0 16px), tags Hanken 0.875rem `#8F8896` (`#Messe  #Island  #Corner`). Row spacing 104px.
- Section word above row 1: paragraph "HALLS" (in markup, not CSS content) Onest 900, `clamp(6rem, 16vw, 16rem)`, colour `#2E2B33`, line-height .8, pulled up so the section top cuts ~25% of the glyph height (section `overflow:hidden`, word `margin-top:-0.22em`). Halftone dots (T4) float over the word / row 1.
- Must not be diluted: the photo must touch the viewport edge (no container padding), it alternates sides, the text never overlaps the photo, the hairline + tags line is present on every row.

### T3. Two flat white cards on a full-bleed photo (Hakuten contact band, `ref/scroll-hakuten-contact.png`)
- Hakuten: 768px full-bleed stand photo; two flat white 498×199 cards, gap 36, centred, H2 48px caps 700, 2-line text, no radius, no shadow.
- Ours (home block 8, "Request", the closing band, also the end of every inner page via a synced pattern): `core/cover` full-bleed, min-height 768px, image **P11** (assembled stand, evening hall lights), overlay `#2E2B33` at 25% dim. Two cards 498px × min 199px, gap 36px, centred, white `#FFFFFF`, padding 40px 44px, radius 0, no shadow: card A **"QUOTE"** heading Onest 3rem (48px) 700 caps + 2 lines "Request a stand quote. Book the planning hour; a written quote follows within 5 working days." + inline orange dot `•` `#D9663B` before the link text; card B **"EARLY ACCESS"** + "Join the early-access list for hall-season dates and the touring-kit waitlist." → /newsletter/. Whole card is the link; hover: card background → `#F3F1F5`, 300ms.
- Must not be diluted: flat white, no radius, no shadow, two cards side by side on ≥782px, photo clearly visible around them (cards cover ≤45% of band area).

### T4 (supporting). Right rail + circle menu + halftone dots (Hakuten rail, dwicon, dots)
- Fixed 1px vertical line `#2E2B33` (white `rgba(255,255,255,.8)` while over the hero), `right: 57px`, from `top:120px` to the bottom; a 14px solid dot rides it via CSS `animation-timeline: scroll(root)` (translateY 0 → `calc(100vh - 134px)`, linear); dot colour `#D9663B`. Only ≥1024px, `aria-hidden`, not in the editor. Pure CSS, no scroll listener; reduced-motion → dot stays at top.
- 64px outline circle button (1px border, two 1px × 30px bars 8px apart), `top:24px; right:24px`, white over hero, ink after; it is the mobile menu toggle and on desktop opens the same anchor menu overlay (core/navigation overlay styled).
- Halftone dots: 3 own SVG circles (radial dot pattern, `#6E6478` dots on transparent, 80/64/96px), placed beside T2 row 1 and on the About and Halls page heads; CSS keyframes swing `translateY(0 → -15px)` 3s/3.5s/4.5s ease-in-out infinite alternate (reduced-motion: none). Decorative `aria-hidden` image blocks, not CSS content.

### Continuation on inner pages (≥4 required; here 7)
| Page | T1 | T2 | T3 | T4 |
|---|---|---|---|---|
| Halls (/halls/) | page head statement filled with P05 | 4 rows long form (each + rules & typical sizes) | closing band | rail, dots |
| Stand types (/stand-types/) | head statement filled with P07 | 4 rows: shell upgrade, row, corner, island | band | rail |
| Planning hour (/planning-hour/) | head statement filled with P02 | 3 rows: on the floor / by video / what you take away | band | rail |
| About (/about/) | head statement filled with P08 | 2 rows: workshop, people | band | rail, dots |
| Prices (/prices/) | head statement | — (price table) | band | rail |
| Stories (/news/ + 3 posts) | head statement on archive | posts list rows as compact T2 (photo 40% edge-flush) | band | rail |
| Contact (/contact/) | head statement | 1 row: address + map-free directions with P12 | card A only (form below) | rail |

Inner page head = white band, 72px top padding below header, statement 2 lines `clamp(2.8rem, 5.2vw, 4.5rem)` 900 photo-filled, 1 paragraph 18/32 beneath, small caps label above (`#6E6478`).

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
Hakuten opens with a dark `#3B3B3D` curtain with the logo, which lifts (height → 0, 800ms easeOutExpo) onto a full-bleed showreel of a **finished, built space** (a shopfront with a red plaster arch). Three bold white lines of catch sit lower-left at x≈120 with a smaller English sub-line beneath; a 65px header with a spaced wordmark left, 13px caps nav and a 64px outline circle menu; a 1px rail with a travelling dot at the right edge. Story: a company that builds spaces says calmly that a space is communication — no hard sell. Motion: curtain lift, footage moving, then blocks fade up 60px and photos un-mask with a white wipe + zoom-out; purple halftone dots drift.

### (2) Our translation (same composition, same motion idea, same image type)
Same composition: one full-bleed documentary photograph of a **built space in progress**, headline three bold white lines lower-left, English sub-line, split header, circle menu, right rail. Scene **P01**: inside a half-built exhibition stand (raw timber frame, aluminium uprights, grey hall carpet), a planner (Ines) crouches and points at a strip of **orange floor tape** marking the stand footprint, while a client stands holding the printed floor drawing; hall ceiling trusses and other stands under construction blurred behind; daylight from hall skylights. Story: "the quote starts with a walk through your hall." Motion: no curtain (hero has no reveal); instead the hero photo moves on `sp-parallax` (the "moving footage" feeling) and a **4px orange tape line draws across** the lower part of the hero once on load (scaleX 0 → 1, 1.2s `cubic-bezier(.16,1,.3,1)`, delay .3s, transform-origin left; pure CSS keyframes; reduced-motion: drawn) — the tape on the floor becomes the brand line. Then rows fade up and photos wipe in, as Hakuten.

### (3) KV checklist (every item on the 1440×900 first screen, visible)
| # | Reference element | Our counterpart | Position (1440×900) | Motion | Image |
|---|---|---|---|---|---|
| 1 | Full-bleed showreel still of a finished shopfront | Full-bleed documentary photo of a planner pointing at orange floor tape in a half-built booth, client holding the drawing | 0,0 → 1440×900 (`min-height:100svh`, max 960px) | `sp-parallax`, `--sp-par: 10%` | **P01** |
| 2 | Three-line bold white catch lower-left + English sub-line | H1 "Plan the stand / on the hall floor, / before the hall opens." Onest 800 white `clamp(2.6rem, 5.6vw, 5rem)` lh 1.06 + sub "Exhibition stand quotes, planned where the stand will stand." Hanken 1.25rem 500 | left x 120, H1 baseline block y≈430–700, sub y≈730 | none | P01 (behind) |
| 3 | Spaced wordmark left, 13px caps nav, 64px outline circle menu | Split nav: wordmark "WAKU EXHIBITS" (Onest 700, ls .24em, 0.9375rem) left; 4 caps anchors (HALLS · PLANNING HOUR · PRICES · STORIES) + orange-dot "REQUEST A QUOTE" link right; 64px circle menu at far right | header 0–88px, wordmark x 80, nav ends x≈1290, circle x 1352 y 24 | none; header is absolute (not sticky) over the hero, white text; on inner pages the same header sits on white with ink text | — |
| 4 | Fixed 1px rail with travelling dot | 1px rail, 14px orange dot rides with scroll | x = 1440−57, y 120 → bottom | CSS scroll-timeline | — |
| 5 | Dark logo curtain lifting at load | Orange floor-tape line drawing across the hero | full width, y≈800 (bottom 96px), 4px `#D9663B` | scaleX 0→1, 1.2s `cubic-bezier(.16,1,.3,1)` once | — |
| 6 | Purple halftone dots drifting | 1 lilac halftone dot (64px) at the hero's lower right above the tape, 2 more by T2 row 1 | x≈1180, y≈720 | swing 15px, 4s ease-in-out infinite | — (own SVG) |

Dimmer: hero overlay `linear-gradient(to top, rgba(46,43,51,.55) 0%, rgba(46,43,51,.15) 55%, rgba(46,43,51,0) 100%)` so white text passes 4.5:1 lower-left while the upper photo stays clear.

---

## 3. Colour (Hakuten relationships; ink shifted into the row's family)

| Role | Hex | Share | Source token |
|---|---|---|---|
| Ink (text, footer, hairlines, section word) | `#2E2B33` | 28% | Hakuten ink `#3B3B3D` 30% → −4% L, hue toward lilac (row palette); still a near-neutral dark |
| Support lilac-grey (labels, category lines, dots, button outlines) | `#6E6478` | 7% | row hex; plays Hakuten's purple dots / grey category role |
| Base white | `#FFFFFF` | 45% | Hakuten ground 55% |
| Base tint (alt band: planning hour, prices) | `#F3F1F5` | 12% | lilac-tinted near-white, replaces part of Hakuten white so the long page has rhythm |
| Tag grey | `#8F8896` | text only | Hakuten tags `#959595` |
| Accent tape orange (CTA dot, rail dot, tape line, link underline) | `#D9663B` | ≤2% | Hakuten red logo accent <1%; orange = hall floor tape |
| Photo | — | 6–15% | Hakuten photo 15% |

Change reason: ink kept neutral-dark but lilac-tinted, and the accent turned from red to tape orange because floor tape is the story; both within the token relationships (one dark ink 30%, white majority, one tiny accent). First-screen saturated share **≤12%** target (Hakuten measured 10.8%), hard limit 15% (`scripts/check-first-screen.py`); P01 must be daylight, muted, with the orange tape the only strong colour. No cream/beige anywhere.

## 4. Type (sans direction)

- Latin display: **Onest** (700, 800, 900; variable woff2). Latin body/UI: **Hanken Grotesk** (400, 500, 700).
- CJK: zh-TW **Noto Sans TC** (700 for headings, subset), ja **Noto Sans JP** (700, subset) — , never . Body CJK uses system sans.
- Stacks (theme.json `fontFamilies` + `fontFace`, same in editor and front end; include zh-TW/ja subset files; copy `shared/inc/editor-lang.php` if any `:lang()` rule):
  - display: `"Onest", "Hanken Grotesk", "Helvetica Neue", Arial, sans-serif`
  - body: `"Hanken Grotesk", "Helvetica Neue", Arial, sans-serif`
  - `:root:lang(zh*)` display: `"Onest", "Noto Sans TC", "PingFang TC", "Microsoft JhengHei", sans-serif`; body: `"Hanken Grotesk", "PingFang TC", "Microsoft JhengHei", sans-serif` (no Noto Sans TC/JP in body)
  - `:root:lang(ja)` display: `"Onest", "Noto Sans JP", "Hiragino Sans", "Yu Gothic", sans-serif`; body: `"Hanken Grotesk", "Hiragino Sans", "Yu Gothic", sans-serif`
- Sizes (theme.json presets): small .875rem (14, Hakuten work outline), base 1.125rem (18/32 = lh 1.78, Hakuten vision body), medium 1.625rem (26, Hakuten work h3), large 3rem (48, Hakuten card H2), x-large `clamp(2.8rem,5.2vw,4.5rem)`, xx-large `clamp(3rem,6.4vw,5.5rem)` (max 5.5rem ≥ 4.25rem), section word `clamp(6rem,16vw,16rem)`.
- Weights: hero 800, statement 900 (Hakuten 900), headings 700, nav 500 caps 0.8125rem (13px, Hakuten nav) ls .08em.
- CJK: size ×0.75 of Latin for display presets, body lh 1.85, ls .04em; fr/de `hyphens:auto`.

## 5. Home page

### First screen (1440×900)
Full-bleed P01 cover with parallax, absolute transparent header (wordmark left, caps anchors + orange-dot CTA right, circle menu), H1 three lines lower-left at x120, sub-line, orange tape line drawing, one halftone dot, right rail. No table, form, search, cut-out, centred giant type or vertical label. Mobile 390: photo 100svh max 720px, H1 `2.6rem` 3–4 lines left 24px, sub below, circle menu only; no absolute labels, nothing overlapping the H1.

### Block order (anchor menu targets in brackets; one CTA wording "Request a stand quote" → /contact/ #request)
| # | Block | Purpose | Layout & images | Copy |
|---|---|---|---|---|
| 1 | Hero [#top] | KV | full-bleed **P01**, parallax | H1 + sub (≈15 words) |
| 2 | Statement (T1) | who we are | white, photo-filled 2-line statement (fill **P02**), paragraph + small right-aligned 2-figure row (`sp-count`: 11 years, 5 working days) | 70–90 words |
| 3 | Halls a quote suits [#halls] (T2) | which halls | section word HALLS cut by top; 4 edge-flush rows **P03, P04, P05, P06**, halftone dots | 4×50 words |
| 4 | The planning hour [#planning-hour] | how the hour is spent | `#F3F1F5` band; left 5/12: heading + 60-word intro; right 7/12: 4 horizontal ruled lines (15/20/15/10 min, `sp-count` numbers 4rem Onest 800 + label), below one wide 2.4:1 photo **P07** (planner and client with tape measure) inside content width | 120 words |
| 5 | Full-bleed hall photo band | breath / parallax #2 | `core/cover` 70vh **P08** (wide hall during build-up, trusses, lift), `sp-parallax --sp-par 8%`, one white line lower-left "Five working days from the walk to a written quote." | 12 words |
| 6 | Prices [#prices] | the 7 prices | white; heading left + note; full-width price table (§0), price column right nowrap; under it a 3:2 photo **P09** left 5/12 with "What is in a quote" 5 bullets right 7/12 | 90 words |
| 7 | Notes from the hall floor [#stories] | 3 stories | 3 columns, each 4:3 photo **P10, P12, P13** top, date-free label "STORY 01", title 1.25rem 700, 30-word excerpt, hairline + tags; links to posts | 3×35 words |
| 8 | Request (T3) [#request] | single CTA + early access | full-bleed **P11** cover with two white cards | 50 words |
| — | Footer | | `#2E2B33`, 4 columns: address/hours, anchors, pages (About, Halls, Stand types, Planning hour, Prices, Stories, Contact, Newsletter), legal (Privacy, Terms); wordmark big 2.5rem left; copyright | |

Home photo positions: P01, P02 (fill), P03, P04, P05, P06, P07, P08, P09, P10, P12, P13, P11 = **13** (≥8). Home English ≥250 words (target 650), ≥3 narrative paragraphs (blocks 2, 4, 6).

### Comparison with recent themes (must not resemble)
| Theme | Home order | Waku difference |
|---|---|---|
| Sokuten Survey | accordion photo strip → sites → hour stages → notes → takeaway → CTA | no strip/accordion; hero is a single full-bleed photo; statement is photo-filled type; halls are edge-flush alternating rows; CTA is two cards on a photo, not a single pill band |
| Kanjo College | framed window hero + ledger line art → cards → term row → lecturers → fees → fixed bottom route bar | no frame, no ledger rules, no bottom bar (we use a right rail), no people grid |
| Mugi Bakehouse | full-bleed still-life with half-ring tabs → street → pairs → oven band → photo break → order → hours | no tabs; our full-bleed images carry type lower-left + rail; T1/T2 do not exist there |
| Tayori Nursing | care-service page led by cards and people | no card grid of services, no people block on home; rows touch the viewport edge alternately |
| Misora Links | ticket-frame photo + giant cropped word → rounds | our giant word only heads the HALLS rows, and the hero has no frame/ticket |
Reason: the page is driven by three Hakuten devices (photo-filled statement, edge-flush alternating rows, two white cards on a photo) none of which appear in the last five themes.

## 6. Inner pages (11 + archives)
| Page | Slug | Key content |
|---|---|---|
| About | /about/ | T1 head (P08 fill); story since 2014 in Lindhaven; workshop row (P14) and people row (P15) as T2; 8 people as a ruled name list (name · role · one line), not a photo grid; band |
| Halls | /halls/ | 4 halls as long-form T2 rows (P05, P16, P04, P06) with typical sizes, hall rules, build windows; band |
| Stand types | /stand-types/ | 4 T2 rows: shell upgrade, row 18 m², corner 36 m², island 72 m² (P16, P17, P10, P03) each with "from" price matching §0; band |
| Planning hour | /planning-hour/ | 5 steps as numbered inline paragraphs in two columns, time split 15/20/15/10, what to bring (hall plan, rules, brand files), 3 T2 rows (P07, P18, P02); band |
| Prices | /prices/ | full price table (7 rows), notes (VAT, deposits 30%, reuse credit), FAQ 6 Q&A (details blocks); band |
| Stories | /news/ (posts page) | 3 posts (§0 stories) + 3 short notes; compact edge-flush rows |
| Story post (single) | /stories/<slug>/ | 16:9 photo, 600–800 words, tags, band |
| Contact / Request | /contact/ | T1 head, card A, form (name, company, show & hall, stand size, dates, message), address, hours, phone; P12 row |
| Newsletter (early access) | /newsletter/ | waitlist: hall-season dates + touring-kit waitlist; email form; 3 reasons; P13 |
| Privacy | /privacy/ | legal text, no motion |
| Terms | /terms/ | quote validity 30 days, deposit 30%, cancellation, liability; no motion |
| Thanks | /thanks/ | "Request received. Mei Lin replies within 1 working day to book the planning hour." P11 thin band |
Standard: home, about, news, article, category (Stories categories: Trade fairs, Foyers, Pop-up, Touring), tag, newsletter, contact. All counts and prices identical to §0.

## 7. Responsive
- 390px first screen: no vertical text, no absolutely positioned labels over the H1; H1 left 24px, max 4 lines; tape line full width bottom 48px; rail and dots hidden <1024px (one hero dot hidden <782px).
- T2 rows <782px: photo full width edge-to-edge on top (still flush), text below with 24px padding; order photo→text for every row.
- T3 cards <782px stack, 100% − 48px wide, band min-height auto, padding 96px 24px.
- Price table ≥782px: `alignwide`/full content width (≥1080px at 1280), `table-layout:auto`, price column `white-space:nowrap; text-align:right; width:1%`, no horizontal scroll, never cut. <782px: every table stacks (each row a block: item on top, price below right-aligned, 1px hairline between).
- No horizontal overflow at 390 and 1280; section word at 390 = 6rem, `overflow:hidden` on its section.

## 8. Scroll techniques (sp-scroll; hero has no reveal; forms, price table, legal text no motion)
| Effect | sp class | Where | Hakuten source & timing | Our values |
|---|---|---|---|---|
| Fade-up | `sp-reveal sp-reveal--up` (+ `sp-stagger` on tag/label groups and story columns) | T1 statement + paragraph, T2 text columns, planning-hour lines, story columns, T3 cards | `.prx-fadein-up` 1s, delay .1s, `cubic-bezier(.16,1,.3,1)`, 60px | `--sp-dist:30px`, `--sp-dur:1s`, ease `cubic-bezier(.16,1,.3,1)` |
| Wipe on photos | `sp-reveal sp-reveal--wipe` (clip on the child img) | T2 row photos (home + inner), planning hour P07 | `.prx-maskin` white overlay slides off 1.5s easeOutExpo, delay .5s (+ zoom 1.33→1) | default wipe 1.1s; inner page T2 too |
| Parallax | `sp-parallax` | hero cover (P01) `--sp-par:10%` (mobile 6%); hall band P08 `--sp-par:8%` (mobile 6%) | rellax on dots + showreel movement; zoom-out 2s | CSS scroll-driven, IO fallback |
| Count | `sp-count` | 11 / 5 (block 2), 15/20/15/10 (block 4) | (Hakuten none; supports the "hour") | default 1.2s |
Max 3 kinds per page besides parallax. Swing of dots and the tape line are plain CSS keyframes (transform only), off under reduced-motion and in the editor.

### Parallax (required)
- Block 1 hero: outer `core/cover` class `sp-parallax`, background **P01**, `--sp-par:10%` desktop / 6% at <782px; foreground H1, sub and tape line are NOT inside the moving layer. Hakuten counterpart: the moving showreel behind the static catch.
- Block 5 hall band: `core/cover` class `sp-parallax`, background **P08**, `--sp-par:8%` / 6% mobile; foreground one white line. Hakuten counterpart: zoom-out / rellax depth on photos.
- Verified by `check-parallax.mjs` (≥6px difference, 0 under reduced-motion), desktop and mobile.

## 9. Images (18, Grok, one at a time; read every one; ≤300 KB, ≤2000px; no text/logos/brands)
STYLE (identical for every image):
`Documentary photograph, high-key natural daylight from hall skylights, mid contrast, muted neutral palette of raw timber, white board, aluminium, grey carpet and soft lilac-grey walls, one strong accent only from orange floor tape, real modern international exhibition hall or workshop, diverse adults mid-gesture, candid not posed, 35mm lens, shallow-to-medium depth of field, no text, no signage lettering, no logos, no brand names, no Japanese elements, rectangular full frame, nothing cut out.`

| ID | Subject / composition | Ratio | Used on (unique per page) | Home |
|---|---|---|---|---|
| P01 | Inside a half-built stand: planner crouching, pointing at orange tape on grey hall floor; client standing holding a printed floor drawing; timber frame and aluminium uprights; trusses blurred behind; subjects in right 60%, calm darker floor lower-left for the headline | 16:9 (2000×1125) | Home hero | ✔ |
| P02 | Close top-down of hall floor: orange tape corners, chalk marks, timber offcuts, tape measure; mid-dark tones | 3:2 | Home T1 fill; Planning hour row 3 | ✔ |
| P03 | Large trade fair hall, island stand frame going up, two builders on a platform | 1.62:1 | Home T2 row 1; Stand types row 4 | ✔ |
| P04 | Conference foyer, low sponsor stand being fitted, carpet and glass wall | 1.62:1 | Home T2 row 2; Halls row 3 | ✔ |
| P05 | Retail atrium at night, pop-up stand being assembled, escalators blurred | 1.62:1 | Home T2 row 3; Halls row 1; Halls head fill | ✔ |
| P06 | Touring kit: labelled-free crates and stacked panels being loaded in workshop | 1.62:1 | Home T2 row 4; Halls row 4 | ✔ |
| P07 | Planner and client measuring with a tape measure across the footprint, hall plan on a clipboard | 2.4:1 | Home block 4; Planning hour row 1; Stand types head fill | ✔ |
| P08 | Wide empty hall during build-up: scissor lift, trusses, half-built stands, daylight | 21:9 | Home hall band (parallax); About head fill | ✔ |
| P09 | Workshop table: material samples (timber, fabric, aluminium profile), hands comparing | 3:2 | Home prices block; Prices page | ✔ |
| P10 | Corner stand with a hall column used as meeting table (story a) | 4:3 | Home story 1; Stand types row 3; post a | ✔ |
| P11 | Finished stand in evening hall light, empty aisle, calm, wide | 16:9 | Home T3 band; all inner T3 bands; Thanks | ✔ |
| P12 | Touring stand rebuilt in another hall, builder fixing a panel (story b) | 4:3 | Home story 2; Contact row; post b | ✔ |
| P13 | Night build in an atrium, two people with work lights (story c) | 4:3 | Home story 3; Newsletter; post c | ✔ |
| P14 | Workshop pre-build: full stand standing in a workshop, foreman checking | 3:2 | About row 1 |  |
| P15 | Team at a long table over a printed hall plan, mixed ages and ethnicities, no faces staring at camera | 3:2 | About row 2 |  |
| P16 | Shell-scheme stand being upgraded with timber panels | 1.62:1 | Stand types row 1; Halls row 2 |  |
| P17 | Row stand 18 m² nearly finished, lighting being aimed | 1.62:1 | Stand types row 2 |  |
| P18 | Video call planning: laptop showing a hall plan drawing (no readable text) on a workshop bench, coffee cup | 3:2 | Planning hour row 2 |  |
18 images. Never the same image twice on one page (T3 band P11 is the only cross-page repeat; T1 fills count as uses).

## 10. Similarity to the reference (target 80%)
| Dimension | Hakuten (token) | Waku Exhibits |
|---|---|---|
| Ground / ink / photo share | white 55 / `#3B3B3D` 30 / photo 15 | white 45 + tint 12 / `#2E2B33` 28 / photo ≤15 |
| Accent | red logo + purple dots <1% | orange `#D9663B` ≤2% + lilac `#6E6478` dots |
| First-screen saturated | 10.8% | ≤12% |
| Hero | full-bleed footage, 3-line bold white catch lower-left x120, EN sub-line | full-bleed P01 photo + parallax, 3-line Onest 800 white lower-left x120, sub-line |
| Header | 65px, wordmark x80, 13px caps nav, 64px circle | 88px, wordmark x80, 13px caps, 64px circle |
| Statement | 72px/900 photo-filled 2 lines + 18/32 body | 5.5rem/900 photo-filled 2 lines + 18/32 body |
| Rows | photo 818×505 1.62:1 edge-flush alternating; text 404px; h3 26/700 ls .066em; 14/25; hairline + tags `#959595`; gap 80–120 | identical values; tags `#8F8896`; gap 104 |
| Section word | ~16rem/900 cut by section top | HALLS `clamp(6rem,16vw,16rem)`/900 cut ~25% |
| Contact band | 768px photo + two 498×199 white cards gap 36, H2 48 caps | identical |
| Radius / shadow | 0 / none (circle button only) | 0 / none (circle button only) |
| Rail | 1px at right 57, dot 14px | identical, dot orange |
| Dots | 4 halftone ~80px, swing 15px 3–4.5s | 3 halftone 64–96px, swing 15px 3–4.5s |
| Reveal | fade-up 60px 1s `cubic-bezier(.16,1,.3,1)`; mask 1.5s; zoom 1.33 | fade-up 30px 1s same curve; wipe 1.1s; parallax 8–10% |
| Footer | `#3B3B3D` 331px | `#2E2B33` ~360px |
Own: all photos (Grok), all copy, wordmark; no Hakuten asset, text or logo.

## 11. Home acceptance checklist
- [ ] KV checklist items 1–6 visible at 1440×900 (P01 scene readable: tape, pointing planner, client with drawing).
- [ ] H1 three lines lower-left, white, 5rem at 1440; T1 statement 5.5rem; theme max preset ≥4.25rem.
- [ ] T1 glyphs show photo texture (not flat), fallback ink works.
- [ ] T2 four rows, photos touch viewport edge, alternate R/L/R/L, hairline + tags each row, HALLS word cut by the section top.
- [ ] T3 two flat white cards on P11, no radius/shadow, side by side ≥782px.
- [ ] Rail + orange dot moves (≥1024px), circle menu works as mobile toggle.
- [ ] One CTA wording "Request a stand quote" everywhere (header, block 4 link, prices, T3).
- [ ] Price table full width ≥782px, price column nowrap right, not cut; stacked on 390.
- [ ] 13 image positions, no repeat on the page; first-screen saturated ≤12% (≤15% hard).
- [ ] Parallax on hero and hall band passes check-parallax (desktop+mobile); reveals hidden before, visible after, none in hero; reduced-motion static.
- [ ] 390px: no overflow, no overlapping text in first screen, no vertical labels.
- [ ] Fonts identical in editor and front end (Onest/Hanken; Noto Sans TC/JP subsets for display).
- [ ] Numbers match §0 (€180 planning hour, 5 working days, 60 min, 15/20/15/10, 8 people, 3 stories, Mon–Fri 08:30–17:30, Lindhaven).
- [ ] auto-gates pass (`1 1` for stage one).
