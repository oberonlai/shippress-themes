# Moyooshi Productions — Design spec (stage 1, binding for build and inner pages)

Reference: https://columbiaworks.jp/ (S5-Style, stage and space production). No secondary site.
Tokens: brand/reference-tokens.md (numbers below cite it as `tok(a)…tok(g)`). Screenshots: brand/ref/.
Archetype asymmetric-masonry, hero full-bleed-photo + info bar, nav top-bar, page structure narrative problem -> method -> proof.
**Imagery: photo** (stage-a IMAGERY = photo). Real documentary photographs, generated with one STYLE string (below). The reference's line-art wireframe video is not reproduced.
Similarity target: 80 % (palette relationships, image presentation, motion, decoration, layout). Photos and copy are our own; no reference assets, text or logo.

---

## 1. Signature techniques (borrowed, must be obvious; never "softened")

### T1. Hairline cue-cell grid (columbiaworks.jp first screen, ref/columbiaworks.jp-first.png)
- Reference: 1px #000 outlined tiles, radius 0, one large 690x425 tile + three 335x203 tiles, 20px gaps, top-right cell deliberately empty; each tile = 12px micro-label above a 60-80px Latin caps word, 24px diagonal arrow bottom-right; hover inverts colours .2s ease-in-out (tok(d)(e)(f)(g)).
- Home: the **hero info bar** docked on the bottom edge of the full-bleed photo. 5 equal columns at >=1024px (content width 1400px, gap 0, cells share 1px borders): cells 1-4 = `LOAD-IN 06:00`, `REHEARSAL 14:00`, `DOORS 18:30`, `STRIKE 23:30`; cell 5 = **empty**, holding only `( 01 )` micro-label top-left. Cell height 168px; 1px rgba(255,255,255,.9) outlines on the photo; micro-label 12px 600 caps (e.g. "Run of show · cue 1") top-left 16px; caps word Schibsted Grotesk 700 2.5rem (40px), -0.04em, bottom-left 16px; time 15px Karla under/next to word; arrow 24px bottom-right. Cell background rgba(10,15,17,.38) (so the photo shows through, white text legible). Hover: background #FFFFFF, text #0A0F11, .2s ease-in-out.
- Do not soften: 1px outlines must be visible, radius 0, the empty cell stays empty, caps words stay >= 2.5rem.
- Inner pages: Services (service index = 1 wide 2-col tile + 3 small tiles + 1 empty, ink outlines on white, 1.62:1 photo in the wide tile); Contact ("Ways in": 3 cells Brief / Call / Visit + empty cell); Work archive (filter cells per event type, outlined); About (4 cells = 4 crew desks: Production / Technical / Stage / Logistics). Also used in footer (outlined link cells).

### T2. Giant section word on a hairline + square arrow tab (columbiaworks.jp BUSINESS / WORKS, ref/scroll-cw-1800.png, scroll-cw-3600.png)
- Reference: full-width 1px #000 `border-top`, below it a 160px / 160px Baufra 700 caps word, letter-spacing -0.08em, left at the 20px margin; bottom-right of the same row "VIEW MORE" 15px + 60x60 solid black square with white 14px diagonal arrow (tok(b)(d)).
- Home: section heads for **METHOD, WORKS, JOURNAL, BRIEF**. Word = Schibsted Grotesk 800, `clamp(3.5rem, 11.2vw, 10rem)` (max 160px), line-height 1, letter-spacing -0.08em, caps, color ink. Row: `border-top:1px solid ink`, padding-top 16px. Right side: "View more" 15px caps + 60x60 square ink block with 14px white arrow (teal #008899 arrow on hover, block stays ink). Under the word, left, 3 lines 1.25rem statement (like the reference's 3-line Japanese tagline).
- Do not soften: word must reach >= 10rem at 1440px, tight tracking, hairline visible, tab is a solid 60px square (not a circle, not outlined).
- Inner pages: every inner page H1 is this giant word row (SERVICES, WORK, ABOUT, CREW, PROCESS, FEES, JOURNAL, CONTACT, NEWSLETTER) at `clamp(3.5rem, 9vw, 8.5rem)` with the tab linking to the next logical page.

### T3. Offset 50 % column + bracket labels + ledger rows (columbiaworks.jp PHILOSOPHY / services, ref/scroll-cw-900.png, scroll-cw-2700.png)
- Reference: `( PHILOSOPHY )` 12px label at the left page edge; statement + body start at x=730 (50.7 %); ledger rows start at x=493 (34 %), 927px wide, 1px top rule, `( 01 )` 12px, 36px 700 title, 15px English line, 24px arrow far right (tok(c)(f)).
- Home: "The problem" block (`( THE PROBLEM )` left edge, text column from 50.7 %, max-width 600px) and the METHOD ledger (4 rows `( 01 ) Brief`, `( 02 ) Build`, `( 03 ) Show`, `( 04 ) Strike`, row starts at 34 %, title 2.25rem 700, sub-line 15px, arrow teal right). Also the day-of-show run sheet rows.
- Do not soften: the left half stays visually empty apart from the bracket label (no photo filling it); brackets written with spaces `( 01 )`; rules 1px ink.
- Inner pages: Process (5 ledger rows with full text), Fees (ledger rows = price list), About (offset story), Case study posts (offset narrative), FAQ on Fees (ledger rows).

Supporting (not counted): mixed-width portrait triptych, tops aligned, 20px gaps, r0 (WORKS).

---

## Key visual concept

**(1) Reference first screen.** columbiaworks.jp opens on a bare white page: a calm 60px statement ("we make stages where people shine"), then a 1px-outlined tile grid whose big tile plays a looping line-art city model that builds itself up from wireframe; the small tiles are doors into the company (WORKS / COMPANY / IR) with one cell left empty. Story: *we construct the stage before anyone arrives.* Signature motion: the wireframe builds, tiles fade in one after another (1s linear, ~0.125s stagger), and lower down a black band shows the same model as white wire on black while the fixed header inverts over it.

**(2) Our translation (event production, same composition, same motion idea, same image type: documentary photograph).** The first screen is an **empty exhibition hall in build state** at dawn: a producer in a headset holding a stage cue sheet in the foreground-left third, two technicians raising a black lighting truss on chain hoists behind, flight cases, no audience yet. Story: *we build the hall before the doors open.* The calm statement sits upper-left on the photo; the outlined tile grid becomes the **info bar of run-of-show cue cells** docked to the photo's lower edge, cells appearing one after another like cues being called (the reference's staggered tile fade). The photo settles slowly (scale 1.04 -> 1) and moves with parallax (the reference's building-up model -> our hall being built). Directly after the problem block, a **dark teal band** shows the same truss finished and lit (the reference's black wire band = the finished model).

**(3) KV checklist** (all six visible in the first screen at 1440x900 except #6, which is the first band after the problem block; #1-#5 must be in the 900px viewport):

| # | Reference element | Our equivalent | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Calm 60px statement above the grid | H1 "We build the hall before the doors open." white, Schibsted Grotesk 700, 4.5rem / 1.15, max 2 lines, max-width 900px | upper-left of photo, 20px page margin, top 22 % | none (hero: no reveal) | on `hero-build.webp` |
| 2 | Large outlined tile with the wireframe city building up | Full-bleed documentary photo: producer with headset + cue sheet, truss rising | whole first screen, 100vw x 100svh (min 640px) | CSS settle scale 1.04->1, 1.6s cubic-bezier(0,0,0,1) on load + `sp-parallax --sp-par:8%` | `hero-build.webp` |
| 3 | Three small outlined tiles: micro-label + caps word + arrow | Info bar: LOAD-IN 06:00 / REHEARSAL 14:00 / DOORS 18:30 / STRIKE 23:30, 1px white outlines, 2.5rem caps, arrow | docked bottom edge, full content width (1400px), height 168px | CSS-only keyframe fade (not sp-reveal): opacity 0->1, 1s linear, delays .37/.5/.62/.75s | on `hero-build.webp` |
| 4 | Empty top-right cell | Empty 5th cell with only `( 01 )` | bottom-right of info bar | fade .87s delay | — |
| 5 | Black rectangle CONTACT in header | Flat ink rectangle "Send a brief" 168x40, r0, white 14px | top bar right | hover invert .2s ease-in-out | — |
| 6 | Black wire band under the inverting header | Dark teal #0B3A42 full-bleed band with the finished, lit truss; 3-line statement white | first band after "The problem" | `sp-parallax --sp-par:10%` | `truss-lit.webp` |

The hero keyframe fade must be wrapped in `@media (prefers-reduced-motion: no-preference)` and gated on `html.sp-js:not(.sp-no-motion)` so `?sp-static`, no-JS and the editor show final state. It is not an `sp-reveal` (hero has 0 sp-reveal).

---

## 2. Home page blocks (order is binding)

| # | Block | Purpose / layout | Photo (file) | Copy |
|---|---|---|---|---|
| 0 | Header (top bar) | Transparent over hero, white text; logo wordmark "MOYOOSHI / PRODUCTIONS" 2 lines left; 6 caps items centre (Services, Work, Process, Fees, About, Journal) 15px; lang switch; ink CTA "Send a brief". Over white sections: white bg, ink text (sticky, CSS only). One top menu. | — | — |
| 1 | Hero + info bar (KV) | Full-bleed photo, gradient overlay linear-gradient(180deg, rgba(10,15,17,.45) 0, rgba(10,15,17,0) 35%, rgba(10,15,17,.5) 100%); H1 upper-left; one 1.125rem sub-line (max 46ch); info bar bottom (T1) | 1 `hero-build.webp` | H1 + 1 line + 4 cell labels |
| 2 | The problem (T3) | `( THE PROBLEM )` left edge; right column from 50.7 %: 60px/84px statement (desktop 3.75rem), 3 paragraphs (~150 words). Below, one 1.62:1 photo 690px wide aligned to the right column's left edge, caption 12px. Bottom-right: View more tab | 2 `brief-table.webp` | 3 paragraphs |
| 3 | Lit-truss band (KV #6) | Full-bleed dark teal band 560px, photo cover with teal overlay rgba(11,58,66,.72); white 3-line statement left at margin, `( SHOW NIGHT )` label; header inverts (white) over it | 3 `truss-lit.webp` (parallax) | 3 lines + 1 short paragraph |
| 4 | METHOD (T2 + T3 ledger) | Giant word on hairline + tab; 3-line statement under it; 4 ledger rows from 34 %: Brief / Build / Show / Strike, each title + 15px line + 2-sentence body + teal arrow. Left of rows (0-30 %), one small portrait photo 335x420 aligned to first row top | 4 `cue-sheet-hands.webp` | 4 x ~35 words |
| 5 | WORKS (T2 + triptych) | Giant word + tab; triptych 572 / 335 / 453 px widths (ratios 41/24/32 % of 1400 with 20px gaps), all 700px tall at 1440, portrait, tops aligned; each caption: `( 01 )` + project title 1.25rem + type/year line 14px | 5 `kickoff-hall.webp`, 6 `awards-stage.webp`, 7 `launch-reveal.webp` | 3 captions |
| 6 | Proof figures | 4 figures on one 1px ruled row (borders between, not cards): `214` events since 2014 · `38` crew on call · `1,600` largest seated room · `6` weeks typical brief-to-show; Schibsted 4.25rem 700; label 14px. Left: `( PROOF )` label. `sp-count` | — | 4 labels + 1 paragraph (~50 words) |
| 7 | Day-of-show run sheet | Two columns: left 41 % photo 4:5 (`crew-loadin.webp`); right ledger of 6 time rows (06:00 Load-in, 10:00 Line check, 14:00 Rehearsal, 18:30 Doors, 19:00 Show, 23:30 Strike), time in tabular nums teal 1rem, title 1.25rem, 1 line each; this is the brand.md "a day" text | 8 `crew-loadin.webp` | 6 rows + 1 paragraph |
| 8 | Crew line | Mist #EEF3F3 band; 3 portrait photos 335x420 in a row (producers), name + role under each, plus `( 6 PRODUCERS · 38 CREW )` label and link to About (not a 4-person grid) | 9 `producer-portrait.webp` (Mara), 10 `stage-manager.webp` (Tomasz), 11 `tech-desk.webp` (Ines at desk) | 3 captions + 2 sentences |
| 9 | JOURNAL (T2) | Giant word + tab; 3 ledger rows (date `( 2026.10 )`, title, category, arrow) with a 160x100 thumbnail at the far left of each row | thumbnails reuse post featured images (not counted again) | 3 rows |
| 10 | BRIEF (T2) + newsletter | Giant word "BRIEF"; left 50 %: 2 sentences + ink button "Send a brief" (mailto/contact link, not a form); right 50.7 %: newsletter slot (email + submit) on white with 1px ink outline box | 12 `strike-dawn.webp` full-width 21:9 strip above the word row | ~60 words |
| 11 | Footer | Ink #0A0F11; outlined link cells (T1) 4 columns: Studio address / Hours / Pages / Follow; small newsletter link; © line | — | — |

Home photo positions: 12 (#1-#12), all unique. Home >= 250 English words with >= 3 narrative paragraphs (the problem 3 x 45 words + band + method + run sheet).

### First-screen composition (1440x900)
Photo 100 % bleed; top bar 80px transparent; H1 at x=20, y≈200, 2 lines; sub-line under; info bar y=900-168-20 to 880, x 20-1420, 5 cells. Ink text never on the photo except via overlay. Saturated share target <= 8 % (hard max 15 %, row note 30 %): teal only on arrows and the `( 01 )` brackets.

### Compared to recent themes (home order)
| Theme | Order | Ours differs because |
|---|---|---|
| Sanroku Trail | film still + vertical H1 -> split story -> horizontal season strip -> dark accordion -> table -> parallax band -> fee ledger -> journal | no vertical type, no horizontal strip, no accordion; our hero docks an outlined cell bar |
| Tabidachi | framed photo + story rail -> 3 gateway cards -> paragraphs -> 4 tall cards -> gold quote band -> price table -> black CTA | no cards row, no framed photo, no price table on home; giant-word section heads |
| Ashiato Hotel | rounded inset window + huge light headline -> story -> room cards -> routine -> reviews -> FAQ -> booking | no rounded window, r0 everywhere, no reviews/FAQ on home |
| Kawa Dumplings | three-panel cover -> dashed rows -> 3 cards -> panel -> glass band -> menu ledger -> journal -> newsletter | full-bleed single photo, solid 1px rules (never dashed), problem -> method -> proof narrative |

---

## 3. Inner pages (>= 8 pages + posts; T1/T2/T3 continue on each)

| Page (slug) | Key content | Techniques |
|---|---|---|
| Services (`services`) | 4 services: Sales kick-offs, Award nights, Product launches, Conferences/off-sites; T1 tile index (wide tile photo `kickoff-hall` NOT reused — use `services-hall.webp`), then each service in offset T3 column with deliverables list | T1, T2, T3 |
| Work (`work`, posts category "Case studies") | 4 case studies, mixed-width triptych + 1 wide; filter cells (T1) | T1, T2 |
| Process (`process`) | 5 ledger rows: Brief (week 0), Concept & budget (weeks 1-2), Build & rehearse (weeks 3-5), Show day, Strike & report (+5 days); day-of-show run sheet repeated in full | T2, T3 |
| Fees (`fees`) | Price ledger (6 items) + what is included + FAQ ledger (5 Q) | T2, T3 |
| About (`about`) | Story since 2014, offset column; 4 desk cells (T1); 7 named people as ledger list with 3 portraits | T1, T2, T3 |
| Venues & partners (`venues`) | 5 partner hall types (no real brands), capacities, photo `venue-empty.webp` | T2, T3 |
| Journal (`journal`, posts page, empty content) | post list | T2 |
| Contact (`contact`) | Ways-in cells (T1) + contact form slot + mailto fallback; address/hours | T1, T2 |
| Newsletter (`newsletter`) | standalone subscribe page: offset T3 text + newsletter slot | T2, T3 |
| Privacy (`privacy`) | legal text, no motion | T2 |

Posts (>= 4): 3 case-study posts (Northline kick-off, Halden awards night, Vesta product launch) + 1 journal note "What a cue sheet is for". Categories: Case studies, Notes. Tags: kick-off, awards, launch, crew.
theme-meta screens: home, about, news -> journal, article -> a case study post, category -> case-studies, tag -> kick-off, newsletter -> newsletter page, contact -> contact.

---

## 4. Fixed facts (identical on home, inner pages and all five languages)
- Name: Moyooshi Productions. Founded 2014. Studio + warehouse: Unit 4, Harbour Works, 18 Quay Road, Port Ellery (fictional, international neutral). Email brief@moyooshi.example (mailto recipient for all forms).
- Hours: studio Mon-Fri 09:00-18:00; show days on call 06:00-24:00; replies to briefs within 2 working days.
- People (7): Mara Lindqvist (founder, executive producer), Tomasz Okafor (stage manager), Ines Duarte (technical director), Kenji Arata (lighting designer), Priya Raman (producer, awards), Lucas Weber (logistics and strike lead), Amara Osei (client lead).
- Numbers: 214 events since 2014; 38 crew on call; largest room 1,600 seated; typical brief-to-show 6 weeks.
- Process: Brief -> Concept & budget -> Build & rehearse -> Show day -> Strike & report. Day: 06:00 Load-in, 10:00 Line check, 14:00 Rehearsal, 18:30 Doors, 19:00 Show, 23:30 Strike.
- Fees (EUR, excl. VAT): Discovery brief workshop €1,800 · Half-day kick-off (up to 300 guests) from €18,000 · Full-day kick-off from €32,000 · Award night (up to 600) from €45,000 · Product launch show from €38,000 · Technical production only (per day) €6,500.
- Case studies (3): Northline Logistics annual kick-off (900 guests, 2025); Halden Engineering awards night (420 guests, 2026); Vesta Audio product launch (250 guests + stream, 2026). All fictional.

---

## 5. Colour (reference relationships kept; teal only as accent)
| Token | Hex | Share | Source |
|---|---|---|---|
| base | #FFFFFF | ~60 % page | tok(a) base #FFFFFF 78 % |
| ink | #0A0F11 | text, 1px outlines, tabs, CTA, footer ~16 % | tok(a) #000000, lightness +5 % with a cool cast (photo-led site; pure black reads harsh next to teal) |
| mist | #EEF3F3 | crew band, form surface ~8 % | tok(a) pale wash #F2F2F2, cooled |
| line | #0A0F11 1px; on photo rgba(255,255,255,.9) | | tok(d) |
| muted text | #4A5559 | captions, sub-lines | — |
| accent | #008899 () | arrows, bracket numbers, run-sheet times, focus ring; <= 4 % | row hex; reference has no accent (0 %) — the design row requires the teal family, used only as line/ink accent |
| deep | #0B3A42 | one dark band (truss) | row teal family, darkened |
First-screen saturated share: <= 8 % target, hard limit 15 % (check-first-screen.py). Teal is never a large fill. No beige/cream.

## 6. Type (font_direction = sans)
- Latin display: **Schibsted Grotesk** (600/700/800). Latin body: **Karla** (400/500/700). Both sans; no serif anywhere.
- Stacks: display `"Schibsted Grotesk", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`; body `Karla, system-ui, -apple-system, "Segoe UI", sans-serif`.
- zh-TW: `:root:lang(zh-TW)` display `"Schibsted Grotesk", "Noto Sans TC", "PingFang TC", "Microsoft JhengHei", sans-serif`; body `Karla, "PingFang TC", "Microsoft JhengHei", "Noto Sans CJK TC", sans-serif` (body must not contain the bundled zh family or JP fonts). ja: display `"Schibsted Grotesk", "Noto Sans JP", "Hiragino Sans", "Yu Gothic", sans-serif`; body `Karla, "Hiragino Sans", "Yu Gothic", "Noto Sans CJK JP", sans-serif`. CJK =  only, never Mincho/.
- Loading: all via theme.json `fontFamilies` + `fontFace` (woff2 in assets/fonts, Latin + zh-TW/ja subsets of Noto Sans TC/JP 700 for headings, via the Hokuto/Hada subset workaround); editor and front identical; copy shared/inc/editor-lang.php when `:lang(` rules exist.
- Scale (tok(b)): giant word `clamp(3.5rem, 11.2vw, 10rem)` 800, lh 1, -0.08em (ref 160px/-0.08em) · H1 hero 4.5rem 700 lh 1.15 (largest theme.json size `xx-large` = 10rem, `x-large` = 4.5rem, >= 4.25rem satisfied) · statement H2 3.75rem/1.4 700 (ref 60/84) · row title 2.25rem 700 (ref 36px) · cell caps 2.5rem 700 -0.04em · body 1rem (16px) lh 1.9 (ref 14/33.6 lh 2.4, enlarged for Latin legibility) · English sub-line 15px · micro-label 12px 600 caps -0.04em (ref 12px 600 -0.48px) · nav 15px caps.
- CJK: sizes x0.75 for giant word/H1, body lh 1.85; giant words stay Latin caps in all languages (they are labels), translated statement beneath. de/fr: `hyphens:auto`.

## 7. Spacing, radius, decoration (tok(c)(d)(f))
Page margin 20px (content 1400px at 1440; no max-width cap). Section padding top 80px, bottom 200px (problem, method) / 120px (others); 320px bottom before WORKS once. Grid gaps 20px. Offset column at 50.7 %, ledger at 34 %. Radius 0 everywhere (buttons, images, cells, forms). Borders 1px. No shadows. Bracket labels `( LABEL )` 12px. Arrow 24px diagonal (SVG, stroke 1.5). Square tab 60x60.

## 8. Responsive
- 390px first screen: H1 2.5rem, 3 lines max, horizontal, in normal flow; info bar becomes a 2x2 grid of cells (empty cell hidden) in normal flow **below** the photo's text, inside the hero height (hero min-height 100svh; content stacked with flex, no absolute-positioned labels, no vertical text, nothing overlapping). Giant words hit the 3.5rem clamp floor at 390 (still on hairline). Tab 48px.
- Offset column / ledger collapse to full width at <782px; bracket label stays above.
- Triptych stacks 1 column (4:5) at <782px; 2+1 at 782-1023.
- Fees ledger at >= 782px: full content width, price column `white-space:nowrap; text-align:right`, min-width 11ch, never clipped. Every table (fees, venue capacities) stacks to label/value rows at <782px. No horizontal overflow at 390/1280.

## 9. Scroll effects (sp-scroll; hero never uses sp-reveal)
| Effect | Where | Source behaviour | sp class / vars |
|---|---|---|---|
| Staggered fade | METHOD ledger rows, run-sheet rows, WORKS triptych figures, proof row cells | columbiaworks instaReveal: opacity 0->1, 1s linear, ~0.125s stagger (tok(g)) | parent `sp-stagger`, children `sp-reveal sp-reveal--up`; set `--sp-dur:1s`, `--sp-dist:16px`, stagger 0.12s (built-in) |
| Section word rise | giant words METHOD / WORKS / JOURNAL / BRIEF and inner H1 rows (not home hero) | ScrollTrigger class toggle ~0.8s cubic-bezier(0,0,0,1) | `sp-reveal sp-reveal--up`, `--sp-dist:24px`, `--sp-ease:cubic-bezier(0,0,0,1)` |
| Parallax | hero photo; lit-truss band | GSAP ScrollTrigger scrub band (linear) | see §10 |
Counter: `sp-count` on the 4 proof figures (1.2s). Header inversion over the dark band and tile hover inversion: CSS only (.2s ease-in-out). No reveal on forms, fees ledger, legal text, footer. sp-reveal count <= 60 % of home blocks.

## 10. Parallax (required)
- **Hero** (block 1): Cover with class `sp-parallax`, background `hero-build.webp`; foreground = H1, sub-line, info bar (not in the moving layer). `--sp-par: 8%` desktop, `5%` at <782px (kept on mobile).
- **Lit-truss band** (block 3): Cover `sp-parallax`, background `truss-lit.webp`, overlay teal; foreground white statement. `--sp-par: 10%` desktop, `6%` mobile.
- Reference equivalent: columbiaworks' GSAP-scrubbed black band where the media moves slower than the text. reduced-motion / `?sp-static` / editor: no movement. Must pass check-parallax.mjs (>= 6px difference).

## 11. Forms (contract v1 — steps/form-contract-v1 exists)
- Copy pipeline/assets/forms/shippress-forms.php -> inc/, CSS + editor JS -> assets/, require in functions.php. Never on the home first screen; never inside sp-reveal / sp-stagger.
- **Contact page**: after the Ways-in cells, offset column (50.7 %): `shippress_form_slot` kind `contact`. With CF7/WPForms form: render it; fields name, email, company, event type (select: Kick-off / Award night / Product launch / Conference / Other), date, guest count, message, consent checkbox, submit "Send a brief". Without plugin: keep the ink mailto button "Email your brief" -> mailto:brief@moyooshi.example?subject=(translated "Event brief") — same class/href, never a link to /contact/.
- **Newsletter page** (standalone, not an alias of the posts list) + **home block 10** + **footer** link/slot: `shippress_form_slot` kind `newsletter`, email (required, type=email) + submit "Subscribe". Priority MailPoet -> MC4WP; CF7/WPForms only via an explicit newsletter form id filter. No plugin: native mailto POST fallback with the entered address + notice "This opens your mail app to send a sign-up request; you are not subscribed yet."
- Tokens: `--sp-form-accent: var(--wp--preset--color--ink)`, `--sp-form-on-accent: #FFFFFF`, `--sp-form-radius: 0`, `--sp-form-focus: #008899` (2px outline, 2px offset), `--sp-form-surface: #FFFFFF`, `--sp-form-text: #0A0F11`, border 1px ink. Dark sections (footer #0A0F11): surface transparent, text #FFFFFF, border rgba(255,255,255,.7), accent #FFFFFF, on-accent #0A0F11, focus #3FC1CC. Error: #B3261E text + 1px border; success: #0B3A42 on #EEF3F3. Labels always visible above fields, 12px 600 caps.
- i18n: semantic keys in inc/i18n/en.php (forms_* keys from README + brief/newsletter labels, mailto subject, fallback notice), extracted with `L10N_SEMANTIC=1`, localised (not literal) in en, zh-TW, ja, fr, de, including dynamic block attributes.

## 12. Images (16, all unique; one STYLE; 0 cut-outs; <= 300 KB, <= 2000px)
STYLE: `documentary photograph, high-key daylight mixed with cool work-light, muted cool palette of teal-grey, steel, white flight cases and black truss, real crew in a real event hall or studio, natural candid poses, international diverse people, shallow depth of field, 35mm lens, soft film grain, no text, no logos, no signage, no screens with readable content`

| # | File | Subject / composition | Used (page, block) | Home |
|---|---|---|---|---|
| 1 | hero-build.webp | 16:9 wide, empty exhibition hall at dawn; producer with headset and clipboard cue sheet left third, two technicians raising black truss on chain hoists behind; lower 25 % calm floor (info bar sits there) | Home hero | ✓ |
| 2 | brief-table.webp | 1.62:1 producer and client leaning over a floor plan and cue sheets on a white table | Home problem | ✓ |
| 3 | truss-lit.webp | 16:9 finished truss lit cool white over an empty dark stage, haze | Home band; Process header strip | ✓ |
| 4 | cue-sheet-hands.webp | 4:5 hands marking a printed cue sheet with a pencil, headset on table | Home METHOD | ✓ |
| 5 | kickoff-hall.webp | portrait, wide seated hall from the back, audience silhouettes facing a plain stage | Home WORKS; Northline post | ✓ |
| 6 | awards-stage.webp | portrait, presenter lectern and soft spotlights, tables with white cloths | Home WORKS; Halden post | ✓ |
| 7 | launch-reveal.webp | portrait, product plinth under a cloth on a minimal stage, crew adjusting light | Home WORKS; Vesta post | ✓ |
| 8 | crew-loadin.webp | 4:5 crew rolling flight cases through a loading door at early morning | Home run sheet; Process | ✓ |
| 9 | producer-portrait.webp | 4:5 portrait of a woman producer (Mara) with headset in a hall | Home crew; About | ✓ |
| 10 | stage-manager.webp | 4:5 stage manager (Tomasz) at a prompt desk with a paper script | Home crew; About | ✓ |
| 11 | tech-desk.webp | 4:5 technical director (Ines) at a lighting/sound desk, faders | Home crew; About | ✓ |
| 12 | strike-dawn.webp | 21:9 empty hall after strike, chairs stacked, early light | Home BRIEF strip; Contact | ✓ |
| 13 | services-hall.webp | 1.62:1 conference room set in rows with stage, overhead view | Services T1 wide tile; Fees | |
| 14 | venue-empty.webp | 16:9 empty raw warehouse venue with high windows | Venues; About header | |
| 15 | studio-warehouse.webp | 3:2 Moyooshi warehouse shelves of cases and cable drums | About; Contact ways-in | |
| 16 | rehearsal.webp | 3:2 rehearsal: speaker on stage with crew in house seats watching | Process; "cue sheet" post | |
Home uses 12 (#1-#12). Same image never twice on one page.

## 13. Similarity table (target 80 %)
| Dimension | Reference (columbiaworks.jp) | Ours |
|---|---|---|
| Base / ink | #FFFFFF 78 % / #000000 16 % | #FFFFFF ~60 % / #0A0F11 ~16 % |
| Accent | none, 0 % saturated | #008899 <= 4 %, first screen <= 8 % (photo) |
| Display type | Baufra 700, 160px, lh 1, -0.08em caps | Schibsted Grotesk 800, 10rem, lh 1, -0.08em caps |
| Statement | 60/84 700 | 3.75rem/1.4 700 (hero H1 4.5rem) |
| Body | 14/33.6 Noto Sans JP | 16/30.4 Karla; CJK Noto Sans TC/JP |
| Margin / gaps | 20px / 20px | 20px / 20px |
| Offset column | 50.7 %; ledger 34 % | 50.7 %; ledger 34 % |
| Section padding | 60-80 top, 120-320 bottom | 80 top, 120/200/320 bottom |
| Radius / borders / shadow | 0 / 1px #000 / none | 0 / 1px ink / none |
| Tile grid | 690x425 + 3x 335x203, one empty | hero info bar 4 cells + 1 empty; Services 1 wide + 3 small + 1 empty |
| Arrow tab | 60x60 black, VIEW MORE 15px | 60x60 ink, "View more" 15px |
| Photo presentation | portrait triptych 572/335/453, tops aligned, gap 20, r0 | same widths and alignment |
| Hero media | line-art wireframe video in large tile | full-bleed documentary photo, parallax 8 % |
| Dark band | black 1440x450, header inverts | #0B3A42 photo band 560px, header inverts, parallax 10 % |
| Reveal | opacity 1s linear, ~0.125s stagger | sp-reveal--up 1s, 0.12s stagger, 16px |
| Hover | .2s ease-in-out invert | .2s ease-in-out invert |

## 14. Home acceptance checklist
- [ ] Hero: full-bleed `hero-build.webp`, H1 4.5rem white upper-left, info bar with 4 outlined cells + 1 empty cell visible within 900px; no sp-reveal in hero; sp-parallax works (>= 6px).
- [ ] KV checklist #1-#6 all present; header CTA ink rectangle.
- [ ] Giant words METHOD / WORKS / JOURNAL / BRIEF at >= 10rem (1440) on 1px rule with 60px square tab.
- [ ] Problem block in offset column (50.7 %) with `( THE PROBLEM )`; METHOD ledger 4 rows from 34 %.
- [ ] Lit-truss band dark teal with parallax; WORKS triptych mixed widths, tops aligned.
- [ ] 12 unique photos; >= 250 English words; >= 3 narrative paragraphs of >= 20 words.
- [ ] Figures 214 / 38 / 1,600 / 6 match About; fees not on home (only link) or identical to Fees page.
- [ ] Newsletter slot in BRIEF block (not first screen, no reveal); email + submit visible without plugins.
- [ ] Radius 0, 1px borders, no shadows, no cards row, no dashed rules, no vertical text.
- [ ] First-screen saturated share <= 15 % (target <= 8 %); exactly one top menu.
- [ ] 390px: no overflow, no overlapping/absolute labels, info bar 2x2 in flow; auto-gates pass; editor fonts = front fonts.
