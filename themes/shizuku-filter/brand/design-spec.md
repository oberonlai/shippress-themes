# Shizuku Filter — design spec (stage 1, binding for implementation)

Slug `shizuku-filter`, type **landing** (crowdfunding page for a countertop water filter). Main reference: **ampuleshot.jp** (https://ampuleshot.jp/, S5-Style product-brand landing). Measurements: `reference-tokens.md`; screenshots `ref/`. We borrow structure, techniques, colour relationships and the key-visual concept. We do not copy photos, renders, copy text or logos. Font direction: **sans**. IMAGERY: **photo** (high-key real photography, not CG).

## 0. Fixed brand facts (every page, all five languages, never change)
- **Shizuku Filter** — small maker of one product, the *Shizuku Countertop Filter* (matte stone-grey ceramic body, 1.6 L glass carafe, 4-layer cartridge, no plumbing, no electricity).
- Founded **2023**, workshop at **Harbour Lane 14, Rotterdam, Netherlands** (fictional address). Support hours **Mon–Fri 09:00–17:00 CET**. Email `hello@shizuku-filter.example`.
- Campaign: **21 days, 3 Nov – 23 Nov 2026**. Goal **$40,000**. Shown state on the page (static demo numbers): **$31,480 raised · 412 backers · 12 days left**. Early-bird: **38 of 300 left**. Currency **USD** in all languages.
- Cartridge life **2 months / about 150 L**. Filter flow **1.6 L in about 4 minutes**. No health/removal-rate claims: say "taste", "clearer", "less chlorine smell"; never "removes 99%", never medical claims, no awards, no press.
- **Rewards (6, fixed)**:
  | # | Reward | Price | Note |
  |---|---|---|---|
  | R1 | Thank-you letter + name on the maker wall | $12 | digital + printed card |
  | R2 | Cartridge pack ×3 (6 months) | $36 | ships with the filters |
  | R3 | **Early-bird** Shizuku Filter | $89 | 300 units, 38 left |
  | R4 | Shizuku Filter (standard) | $109 | retail later $149 |
  | R5 | Filter + 3 cartridges | $139 | most chosen |
  | R6 | Duo — 2 filters + 6 cartridges | $229 | for two homes |
- **Making schedule (4 steps, fixed)**: 01 Tooling — Dec 2026 · 02 Pilot run of 50 — Jan 2027 · 03 Production — Feb–Mar 2027 · 04 Shipping to backers — Apr 2027.
- **People (6)**: Ines Okoro (founder, industrial design) · Tomas Lindgren (water & cartridge engineering) · Priya Raman (ceramic body) · Mateo Ruiz (production & tooling) · Hana Kowalski (backer support) · Leo Brandt (photography & updates).
- **Stories (3, test households of the pilot)**: "The Verhoeven kitchen" (family of four, Rotterdam) · "A studio pantry" (design studio of 9 people, Lisbon) · "One small flat" (Amira, nurse on night shifts, Hamburg). Each: 2 short paragraphs + a one-line quote about habit, not health.
- **Flow for backers (4)**: Choose a reward → Pay via the platform → Updates every 2 weeks → Delivery Apr 2027.

## 1. Signature techniques (3, obvious at a glance, never diluted)

### T1. White header band with a giant two-line wordmark + 1px rule, photo directly under it (ampuleshot first screen)
- Reference: white band y0–237 at 1440, "AMPULE / SHOT" ≈130px uppercase black, lh .9, flush top-left (padding 11/11/29px), "SERIES" 52px beside line 2; 1px #000 rule; full-bleed photo starts exactly on the rule, no radius, no gap.
- Ours (home hero): band `#FFFFFF`, height **236px** at 1440 (min 168px at 1024, 128px mobile). Wordmark "SHIZUKU / FILTER" in Figtree 700, uppercase, **clamp(3.5rem, 9vw, 8.125rem)** (= 130px at 1440), lh **0.9**, ls -0.01em, ink `#10161A`, left padding 11px top 11px. Beside line 2: "COUNTERTOP" Figtree 600 **clamp(1.25rem, 3.6vw, 3.25rem)** (52px). Right side of band: anchor nav (split nav) Albert Sans 600 0.875rem uppercase ls .06em: WHY · FILTER · REWARDS · SCHEDULE · MAKERS · FAQ + small pill button "Back this project" (1px ink border, radius 9999). Bottom rule **1px solid #10161A**. Hero photo begins on the rule, full-bleed, **no radius**.
- Not to dilute: wordmark ≥ 8rem at 1440 and occupying ~34% of the band width; the rule is black (ink), not grey; no gap/margin between rule and photo.
- Inner pages: every inner page opens with the same band, wordmark replaced by the page title at **clamp(3rem, 7vw, 6.25rem)** uppercase two lines (e.g. "THE / REWARDS"), same 1px rule, then a full-bleed 16:7 photo directly under the rule (no radius).

### T2. Full-pill capsule cards (ampuleshot LINEUP)
- Reference: 1316×228 pill, radius 9999, 1px #000, padding 17/90/19/118: 45px EN name left, small product pair centre, check-circle list right, round 78px black CTA with white chevron at the far right; each series in its own fill; "+" crosshair marks between list and CTA.
- Ours (home REWARDS): 6 capsules stacked, gap 24px, width = content (1316 at 1440, x 62), min-height 228px, radius 9999px, border 1px `#10161A`. Columns: [price + name] 34% | [round photo 160×160, radius 50%, only R3/R5/R6] 18% | [3 check-circle lines] 30% | [78px round ink CTA, white chevron → platform link] right. Price Figtree 600 **2.8125rem (45px)** lh 1, name Albert Sans 700 1.25rem. Check icon 30px circle 1.5px ink + tick. Two "+" marks (20px, 1.5px ink) between list and CTA.
- Fills (replace the reference's saturated fills, see §4): R1 `#FFFFFF`, R2 `#F1F3F3`, **R3 `#4F6A74` with white text and a `#C8E86A` "38 left" mini pill**, R4 `#DCE7EA`, R5 `#FFFFFF`, R6 `#DCE7EA`.
- Mobile ≤781px: capsule becomes a stadium card radius 48px (not a table), stacked: price/name → photo 120px → checks → CTA 64px centred.
- Not to dilute: full pill shape (radius 9999 at desktop), 1px ink border, black round CTA, price ≥45px. No shadows.
- Inner: Rewards page (all 6 capsules + details), Making Schedule (4 horizontal capsules 01–04), FAQ (each question a capsule-row `<details>`, radius 9999 closed / 40px open), Waitlist (signup form inside one large capsule), Contact (three capsules: email / hours / address).

### T3. Left 80px rail with vertical section labels + crosshair headline block with white marker lines (ampuleshot CONCEPT)
- Reference: 80px left rail with 1px black right rule, vertical label (writing-mode) 18px 700 uppercase at x41; ground `#F1F1F1` with 45px white grid; headline block marked by four "+" crosshairs (≈20px, 1.5px) at its corners; each line of the lead sits on its own white marker strip.
- Ours: all home sections after the hero sit on a page ground `#F1F3F3` with a 45px `#FFFFFF` grid (CSS `background-image` two linear-gradients, 1px lines). Left rail **80px**, 1px ink right rule, vertical label Figtree 700 `max(10px,1.25vw)` uppercase, `writing-mode: vertical-rl`, x 41: WHY / FILTER / REWARDS / SCHEDULE / MAKERS / STORIES / FAQ. Sections separated by 1px ink horizontal rules (full width).
- Headline blocks (WHY, FILTER intro, back-CTA): lead Albert Sans 500 **2.25rem/1.5 (36/54)**, each line wrapped in a span with `background:#FFFFFF; box-decoration-break:clone; padding:0 .25em`; four "+" marks 20px/1.5px ink at the block corners (pseudo-elements, offset −10px).
- **Mobile ≤781px: the rail and vertical labels are removed**; label becomes a horizontal small-caps line above the heading (no vertical text on mobile anywhere, no absolute labels in the first screen).
- Not to dilute: rail rule must be ink 1px; grid must be visible (white on `#F1F3F3`); crosshairs ink not grey.
- Inner: The Filter, Our Story, Making Schedule, FAQ, Updates all use the rail + vertical label + one crosshair marker lead.

### Continuation table (inner pages)
| Page | T1 band + rule | T2 capsules | T3 rail + crosshair lead |
|---|---|---|---|
| Rewards | yes | 6 capsules full | rail "REWARDS", lead about delivery |
| The Filter | yes | 4 layer capsules | rail "LAYERS", crosshair lead |
| Making Schedule | yes | 4 step capsules, horizontal at ≥1024 | rail "SCHEDULE" |
| Our Story / Makers | yes | — | rail "MAKERS", marker lead |
| FAQ | yes | capsule `<details>` | rail "FAQ" |
| Updates (blog index/single) | yes | post cards as pills (title+date+chevron) | rail "UPDATES" |
| Waitlist | yes | form capsule | — |
| Contact | yes | 3 capsules | rail "CONTACT" |
| Privacy / Terms / Thanks | yes (small title 3rem) | Thanks: one capsule "Back to the page" | — |

## 2. Key visual concept

### (1) Reference first screen
ampuleshot.jp: a full-bleed glossy product render — an ampoule tube lying diagonally across a one-colour liquid ground, glass beads and molecule links floating, ghosted bottles behind; giant black wordmark in a white band above; a coloured pill badge with a mini product hung at lower right; a vertical MENU pill fixed on the right edge. Story: "pure ingredients, delivered undiluted." Signature motion: slow Ken Burns zoom-out 1.1→1 over 10s ease-out; headings wipe in left→right.

### (2) Our translation (same composition, same motion idea, photo)
A **high-key photograph** of the matte stone-grey Shizuku filter standing at left-centre and a glass carafe at right being filled by a thin clear stream, on a pale kitchen table in morning window light; real droplets and a single ring ripple in the carafe; a softly out-of-focus second glass behind. Story: "water, made a little quieter — back the first run." Same white band + giant wordmark above, same pill badge lower right, same vertical pill on the right edge, same 10s zoom-out.

### (3) KV checklist (all implemented and visible in the first screen at 1440×900)
| # | Reference element | Our counterpart | Position | Motion | Which image |
|---|---|---|---|---|---|
| 1 | Giant two-line black wordmark in white band + 1px rule | "SHIZUKU / FILTER" + "COUNTERTOP", ink, 130px | band y0–236, left, rule at 236 | static | — |
| 2 | Full-bleed liquid render, product on a diagonal | Photo: filter left-centre, carafe right, diagonal stream/table edge from lower-left to upper-right | full-bleed under rule, 1440×~810 (16:9), no radius | 10s ease-out zoom 1.1→1 on load + `sp-parallax` | 01 hero-filter-carafe |
| 3 | Floating glass beads | Real droplets on carafe + ring ripple at the mouth | right half, around carafe | none (in photo) | 01 |
| 4 | Ghosted bottles behind product | Out-of-focus second glass/carafe behind | centre-back | none | 01 |
| 5 | Coloured pill badge with mini product, lower right | Slate pill `#4F6A74` 268×178, radius 9999, 1px ink: round 72px thumb of the cartridge + "Early-bird $89" / "38 of 300 left" (white) | lower right, right 96px, bottom 32px of photo | fade + 16px up on load, 0.8s delay 0.4s | 04 reward-cartridge (thumb) |
| 6 | Vertical MENU pill fixed right edge | Vertical "BACK THIS" pill 83×152, white, 1px ink, links to #rewards | fixed, right 38px, top 160px | hover bg .25s → `#DCE7EA` | — |
Info bar (row first_screen "info-bar"): directly under the photo, white, 1px ink top/bottom rule, height 96px: four cells divided by 1px rules — **$31,480 raised of $40,000** · **412 backers** · **12 days left** · ink pill button "Back this project →". Photo height is `min(56.25vw, calc(100vh - 236px - 96px))` so band + photo + info bar all fit in 1440×900 (photo ≈568px tall, object-fit cover keeping filter and carafe in frame).
Mobile 390: band 128px (wordmark 3.5rem two lines), photo 4:5 crop with filter+carafe both visible, badge becomes static block **below** the photo (not overlaid), vertical pill hidden (replaced by sticky bottom bar "Back this project" 56px).

## 3. Home blocks (order, use, layout, images, copy)
| # | Block (anchor) | Use | Layout | Image | Copy |
|---|---|---|---|---|---|
| 1 | Header band | brand + anchor nav | T1 | — | nav only |
| 2 | Hero (#top) | KV | full-bleed photo + badge + vertical pill | 01, badge 04 | H1 = the wordmark (h1 element "SHIZUKU FILTER"); no text overlaid on the photo except the badge; the one-line claim "A quieter glass of water, made in small runs." sits in the info bar's first cell above the raised amount |
| 3 | Info bar | campaign status + CTA | 4 cells | — | numbers |
| 4 | WHY (#why) | why it exists | rail; crosshair marker lead left 7/12; photo right 5/12 aspect 4:5, no radius | 02 concept-tap-glass | lead 3 lines + 2 paragraphs (~120 words) |
| 5 | FILTER (#filter) | how it works | full-bleed 16:9 photo, heading "01 / FOUR / LAYERS" white Figtree 600 6rem lh1 top-left (x 80+66, y 60) like series KV; under it 4 layer capsules (T2 small, 120px tall) | 03 layers-kv (`sp-parallax`) | 4 × 25 words |
| 6 | REWARDS (#rewards) | 6 rewards | T2 capsules stacked | 05 (R3), 06 (R5), 15 (R6) | 6 × 3 check lines |
| 7 | SCHEDULE (#schedule) | making schedule | left photo 6/12 aspect 3:2; right 4 horizontal step capsules 01–04 stacked as 2×2 (no vertical timeline) | 07 schedule-workshop | 4 × 20 words + 1 para |
| 8 | MAKERS (#makers) | the people | one wide photo 21:9 full content width; under it a 1px-ruled list of 6 names (name Figtree 600 1.5rem / role) in 3 columns × 2 rows, no portraits grid | 08 makers-bench | 1 para ~60 words |
| 9 | STORIES (#stories) | 3 test households | 3 rows alternating: photo 5/12 (aspect 4:3) + text; row 3 text-only capsule quote | 09, 10 | 3 × 2 paragraphs |
| 10 | FAQ (#faq) | 5 questions | capsule `<details>` | — | 5 Q/A |
| 11 | BACK (#back) | single repeated CTA | full-bleed 16:7 photo with crosshair marker lead centred-left and 78px ink round CTA + pill button | 11 back-cta-table (`sp-parallax`) | 2 lines + button |
| 12 | Footer | links | white, 1px ink top rule, small wordmark 3rem, links: Rewards, Filter, Schedule, Story, FAQ, Updates, Waitlist, Contact, Privacy, Terms | — | — |
The CTA "Back this project" repeats identical (text, colour, target #rewards) in: band, vertical pill, info bar, rewards, back block (one CTA, repeated).
Home image map: hero 01, badge 04, why 02, filter 03, R3 05, R5 06, R6 15, schedule 07, makers 08, stories 09/10, back 11 = 12 positions, each unique. Home copy ≥ 400 English words.

### Comparison with recent homes (must not resemble)
| Theme | First screen / order | Ours |
|---|---|---|
| Kaname Watches | framed crossfading window → taupe caption bar → square strip → product row | white wordmark band + edge-to-edge photo, no frame, no crossfade |
| Ayumi Podiatry | confetti shapes + tracked headline → glow circles → tilted wall → 01/02/03 cards | no shapes, no tilt; capsule cards instead of numbered cards |
| Isso Relocation | split dark/grey + framed photo → glyph wordmark → overlapping photos → "( 01 )" sections | single full-bleed photo, no overlap; rail labels instead of "( 01 )" |
| Hakari Course | rounded-bottom photo + hashtag band → tilted photo + number rows → rounded panel | square-edged photo, info bar (numbers in cells, not hashtags), pills not panel |
Reason: the grid ground + left vertical rail + pill capsules + 130px wordmark band are a vocabulary none of the four uses.

## 4. Colour (reference roles kept; accents swapped for water/slate, saturated ≤15%)
| Role | Hex | Source token | Use | Share |
|---|---|---|---|---|
| Base | `#FFFFFF` | ref base/header `#FFFFFF` | band, marker strips, info bar | ~30% |
| Ground | `#F1F3F3` | ref `#F1F1F1` (+ slight cool tint, lightness same) | section ground with 45px white grid | ~35% |
| Ink | `#10161A` | ref `#000000` (−3% lightness shift toward slate, readability same) | type, 1px rules, CTA circles, crosshairs | ~5% |
| Main | `#4F6A74` | row hex; replaces ref series fills purple/yellow/pink (too saturated for a quiet water product; first-screen limit) | badge, R3 capsule, button hover | ≤6% |
| Aux | `#DCE7EA` | replaces ref gray `#BABABA` role | R4/R6 fills, pill hover | ≤8% |
| Point | `#C8E86A` | ref yellow `#FFE500` role (one small saturated element) | "38 left" mini pill, focus ring | <1% |
First-screen saturated share (S>.35) ≤ **12%** (target; hard limit 15%, scripts/check-first-screen.py). Photo grade is pale so it does not count much.

## 5. Typography (sans)
- Latin headings: **Figtree** 600/700; body: **Albert Sans** 400/500/700. CJK: Noto Sans TC (zh-TW), Noto Sans JP (ja) — a gothic sans, never a Ming serif.
- Stacks: heading `"Figtree", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`; body `"Albert Sans", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`; `:lang(ja)` puts Noto Sans JP before TC.
- Loaded via theme.json `fontFamilies` + `fontFace` (woff2 in assets/fonts, incl. zh-TW/ja subsets per Hokuto/Hada method); editor = front end; copy shared/inc/editor-lang.php if `:lang(` is used.
- Sizes (ref token (b)): wordmark clamp(3.5rem,9vw,8.125rem) lh .9 (130px); section KV heading clamp(3rem,6vw,5.4rem) lh 1 600 uppercase (ref 86.6px/6vw); preset max `xx-large` = **5.4rem** (≥4.25); capsule price 2.8125rem lh1 600; lead 2.25rem/1.5 500; H3 1.4rem/1.4 700; body 1.0625rem (16.9px)/1.66 500; check list 1.0625rem/1.5 700; rail label max(10px,1.25vw) 700. Latin headings uppercase. CJK sizes ×0.75, body lh 1.85; fr/de `hyphens:auto`.

## 6. Responsive
- 390px first screen: no vertical text, no absolutely positioned labels overlapping text; badge below photo; rail hidden; wordmark 3.5rem fits in 2 lines without overflow.
- Rewards are capsules (not a table). Any price list/table (Rewards page summary table, specs table): at ≥782px **full content width**, price column `white-space:nowrap; text-align:right`, never clipped; at ≤781px tables stack (each row a block, label/value pairs).
- No horizontal overflow at 390/1280.

## 7. Images (17, one STYLE, none repeated on the same page, no cut-outs)
STYLE: `High-key documentary photograph, bright soft morning window light, airy white and pale slate-blue tones, matte stone-grey ceramic and clear glass, real water droplets with soft refraction, clean modern kitchen, shallow depth of field, natural true colour with a slight cool tint, 35mm lens, calm and quiet, diverse people where present, no text, no logos, no brand marks, no labels, no Japanese elements, not CGI, not a render`
| # | file | subject / composition | used on | home |
|---|---|---|---|---|
| 01 | hero-filter-carafe | matte grey cylindrical countertop filter left-centre, glass carafe right filling from a thin stream, droplets, ring ripple, blurred second glass behind, pale table, window light, 16:9 wide, diagonal table edge | Home hero | ✔ |
| 02 | concept-tap-glass | hand holding a clear glass of water by a window, soft light, 4:5 | Home WHY | ✔ |
| 03 | layers-kv | four filter media in shallow glass dishes in a row (sand-coloured ceramic beads, black carbon granules, white fibre pad, fine mesh) on pale slate surface, top light, 16:9, left third empty for heading | Home FILTER | ✔ |
| 04 | reward-cartridge | single white cylindrical cartridge on pale surface, centred, square | Home badge thumb; Rewards R2 | ✔ |
| 05 | reward-filter-single | the filter alone on a counter, square | Home R3; Rewards R3 | ✔ |
| 06 | reward-filter-set | filter + three cartridges lined up, square | Home R5 | ✔ |
| 07 | schedule-workshop | small workshop bench with ceramic bodies drying on racks, 3:2 | Home SCHEDULE; Schedule page | ✔ |
| 08 | makers-bench | six people (diverse) around a long workbench, mid-shot, 21:9 | Home MAKERS | ✔ |
| 09 | story-family-kitchen | family kitchen, child pouring water from carafe, 4:3 | Home STORIES 1; Story page | ✔ |
| 10 | story-studio-pantry | office pantry shelf with the filter and glasses, two colleagues, 4:3 | Home STORIES 2 | ✔ |
| 11 | back-cta-table | breakfast table seen from above-side, carafe and two glasses, morning light, 16:7, calm left half | Home BACK | ✔ |
| 12 | filter-detail-hands | hands lifting the lid to insert the cartridge, close-up, 3:2 | The Filter |  |
| 13 | tooling-moulds | plaster moulds and a test body on a workshop shelf, 16:7 | Making Schedule header |  |
| 14 | founder-portrait | founder at a window bench with a prototype, 4:5 | Our Story |  |
| 15 | packing-boxes | plain unbranded cardboard boxes with paper fill, square | Home R6; Rewards R6 | ✔ |
| 16 | rewards-unboxing | hands opening a plain box with the filter inside, 16:7 | Rewards header, Thanks |  |
| 17 | waitlist-pour | carafe pouring into a glass, close, 16:7 | Waitlist header |  |
Inner headers: Rewards 16 · Filter 12 · Schedule 13 · Story 14 · FAQ 02 · Updates 10 · Waitlist 17 · Contact 08 · Thanks 16. Each ≤300KB, ≤2000px, webp. Read every image; regenerate any with text/logos/bad hands.

## 8. Inner pages (≥8)
1. **Rewards** — 6 capsules with full details (contents, shipping region, estimated delivery Apr 2027), summary table (≥782 full width, price nowrap right), shipping note: worldwide flat $14, EU free.
2. **The Filter** — 4 layers (ceramic pre-filter, activated carbon, ion-exchange resin, fine mesh), specs table (size 14×14×32cm, 2.1kg, carafe 1.6L, flow ~4min, cartridge 2 months/150L), care.
3. **Making Schedule** — 4 step capsules + monthly update promise; what could delay us (honest).
4. **Our Story / Makers** — founding 2023, 6 people as a ruled list with roles + 2–3 lines each; founder portrait.
5. **Stories** section lives on Story page bottom (all 3 households, full text).
6. **FAQ** — 10 questions (delivery, plumbing, cartridge cost $12 each, recycling, returns 30 days, regions).
7. **Updates** (posts index) — 3 seeded posts: "Day 1: we're live", "Tooling quotes are in", "Pilot households report back".
8. **Waitlist** (newsletter page) — early-access signup for the retail run, form in capsule.
9. **Contact** — email, hours, address, 3 capsules + short form.
10. **Privacy**, 11. **Terms** (pledge terms: charged at campaign end, refunds before shipping), 12. **Thanks**.

## 9. Scroll effects (sp-scroll; source ampuleshot.jp)
| Effect | Class | Where | Source trigger / timing / easing |
|---|---|---|---|
| Marker-line wipe | `sp-reveal sp-reveal--wipe` on the crosshair lead blocks (WHY, FILTER intro, BACK) and section KV headings; set `--sp-dur: .62s` on these if the variable exists (keep JS/CSS logic unchanged; direction as implemented) | ref: viewport entry, ≈620ms, in-out ≈cubic-bezier(.45,0,.55,1), clip left→right, no displacement |
| Capsule stagger | parent `sp-stagger`, each capsule `sp-reveal sp-reveal--up` (24px, 0.12s steps) | REWARDS, FILTER layer capsules, SCHEDULE steps | ref capsules static; we add (stage-a candidate 4) ease-out |
| Parallax (required) | `sp-parallax` | **Hero** (Cover bg = 01, foreground: badge only; `--sp-par: 8%` desktop, `5%` ≤781px) and **BACK** block (bg 11, foreground crosshair lead + CTA; `--sp-par: 10%`, mobile 6%) | ref motion = slow Ken Burns zoom-out 10s ease-out; we keep that as a CSS load animation on a wrapper `.sf-hero-zoom` (scale 1.1→1, 10s, ease-out, `overflow:clip` outer) and put the parallax on the image inside it, so the two transforms never fight. Reduced motion / `?sp-static` / editor: no zoom, no parallax |
Hero gets no reveal. Forms, tables, legal text get no reveal. Vertical rail labels: static (simplicity).

## 10. Similarity table (target 80%)
| Dimension | Reference (token) | Ours |
|---|---|---|
| Header band | white, 237px, 1px #000 rule (a,c) | white, 236px, 1px #10161A rule |
| Wordmark | 130px uppercase lh .9 600/700 (b) | 130px Figtree 700 uppercase lh .9 |
| Hero image | full-bleed 1440×811, no radius (e) | full-bleed 16:9 ≈1440×810, no radius |
| Hero motion | 10s ease-out zoom 1.1→1 (g) | same + sp-parallax 8% |
| Badge | pill 268×178, 1px #000, coloured (f) | pill 268×178, 1px ink, slate |
| Side pill | 83×152 white vertical MENU, bg .25s (d,g) | 83×152 white vertical BACK THIS, bg .25s |
| Ground | #F1F1F1 + 45px white grid (a) | #F1F3F3 + 45px white grid |
| Rail | 80px, 1px rule, vertical 18px 700 (c,b) | 80px, 1px rule, max(10px,1.25vw) 700 |
| Capsules | 1316×228, radius 9999, 1px, 45px title, 78px black CTA, check 30px (c,d,f) | identical numbers |
| Crosshair | "+" 20px 1.5px at block corners (f) | same |
| Lead | 36/54 on white marker strips (b,f) | 2.25rem/1.5 on white strips |
| Heading wipe | clip L→R ~620ms in-out (g) | sp-reveal--wipe .62s |
| Colour | black/white/grey + saturated series fills | ink/white/cool grey + slate/pale water, one lime point |
| Shadows | none (d) | none |

## 11. Home acceptance checklist
- [ ] Band 236px with 130px two-line wordmark + 1px ink rule; photo 01 starts on the rule, no radius.
- [ ] Badge (slate pill, thumb 04, "38 of 300 left") lower right; vertical BACK THIS pill right edge; info bar with $31,480 / 412 / 12 days / button.
- [ ] Grid ground + 80px rail + vertical labels (desktop) on every section after hero; none on mobile.
- [ ] 6 reward capsules, prices $12/$36/$89/$109/$139/$229, radius 9999, 78px ink CTA.
- [ ] Crosshair marker leads ≥2 on home.
- [ ] ≥12 image positions, none repeated; ≥400 English words, ≥3 narrative paragraphs.
- [ ] sp-parallax on hero and BACK; wipe + stagger work; `?sp-static` all final; check-parallax.mjs passes.
- [ ] First-screen saturated ≤15%; max font size ≥4.25rem; editor fonts = front end.
- [ ] 390px: no vertical text / overlapping labels; no horizontal overflow; tables stack.
- [ ] Numbers identical to §0 on every page and language.
