# Shizuka Hearing: design spec (stage 1, binding for implementation)

Slug `shizuka-hearing`, audiology clinic for adults who strain to follow conversation in noise. Row b11-1: type **business** (WooCommerce compatible, not required), page_structure **narrative-problem-method-proof**, first_screen **top-bottom-halves**, hero **text-left-photo-right**, nav **split**, **real high-key photography**, palette 青鈍 `#51676B`, **font_direction sans** (Manrope + Public Sans; CJK Noto Sans TC / Noto Sans JP 黑體; no 明體 anywhere).

Reference (see `reference.md`; numbers from `reference-tokens.md`, quoted as "token a–g"): **M.Stage Group** https://mstage-group.jp/ (S5-Style, medical sector), single reference, **80 % similarity target**. We borrow structure, techniques, colour relationships, measured numbers and the key-visual concept. We do **not** copy photos, copy, logos or whole-page layouts. Every photo is generated for this theme, every line of text is ours.

Fixed brand facts (all pages, all five languages, identical numbers): Shizuka Hearing, founded **2014**, clinic at **18 Harbour Lane, Northgate** (fictional), 2nd floor, lift access. Founder **Dr. Elena Varga**. Currency **EUR (€)** in every language, no conversion.

---

## 1. Signature techniques (three, obvious at a glance, never softened)

### T1. Scattered rounded photo tiles around a statement in white highlight strips (M.Stage hero, https://mstage-group.jp/ first screen; `ref/ms-first.png`)
- **Reference**: ~10 visible photo tiles (of 16), widths 142–506 px, landscape 1.5–1.7:1 plus a few portraits, radius 10.5 px, no grid, on pure white; 4 tiles bleed off the viewport edges (top, left, right, bottom); largest tile ≈548×310 slightly above centre; the statement is set in thin gothic inside **white highlight strips** (padding ~8 px) that overlap the large tile and the left tile (token e, b).
- **Ours (home hero, block 2)**: 9 tiles, same irregular scatter, the headline block anchored left in the upper half (text-left), the largest tile right of centre (photo-right), the lower half carries the lead + buttons on the left and smaller tiles on the right. Exact positions in §3 "First screen".
- **Shape / proportion / contrast**: radius **10.5px** on every tile (token d), no border, no shadow, `object-fit:cover`; tiles on `#FFFFFF`; strips `#FFFFFF` with text `#49565E`, the strip sits **on top of** the photo (z-index above the tile) so the white bar visibly cuts across the picture.
- **Must not be diluted**: at 1440 at least **4 tiles bleed** off an edge (top, left, right, bottom), the large tile ≥ 36vw wide, the two headline strips overlap the large tile by ≥ 60 px and the left tile by ≥ 120 px; no tinting/fading of tiles in the static state; no grid alignment (no two tiles share a top or left edge).

### T2. Stacked sticky cards over a blue-gray band with a sticky title column (M.Stage BUSINESS; `ref/scroll-ms-2-business-*.png`)
- **Reference**: band `#C5D1D5`; eyebrow BUSINESS + hairline; left column 316 px, sticky at top 450 px, holding the white thin statement and the big uppercase word; right: cards **945 px** wide, `border-radius:32px 0 0 0` (top-left only), bleeding to the right viewport edge, inner padding 74 px top / 63 px left, each with a Latin uppercase H3 44 px + JP sub-label + a 16:9 photo 337×189 + body; three tones (light grey `#F2F2F2` / accent / dark `#49565E`) that stack over each other via `position:sticky`; concentric 1 px white circles (≈250 / ≈150 px, 40 % white) left of the cards (token c, d, f, g).
- **Ours (home block 4, "Problem → Method → Review")**: the narrative spine of page_structure. Card 1 **THE MISSED SENTENCE** (`#F2F2F2`, text `#49565E`, photo h12), card 2 **THE FITTING** (`#51676B`, white text, photo h11), card 3 **THE REVIEW VISIT** (`#3A464D`, white text, photo h13). Left column: white eyebrow-free statement "From the sentence you missed to the one you caught." + big word **LISTEN** (2.75rem, white, ls .05em).
- **Must not be diluted**: band must be `#C5D1D5` (not lighter than `#CBD6D9`); cards must bleed to the right edge (no right margin, no right radius), only the top-left corner rounded 32 px; three clearly different tones; sticky stacking at ≥1024 px (CSS `position:sticky; top:120px / 160px / 200px` for cards 1/2/3, left column `position:sticky; top:180px`) — no JS, no scroll listener. Below 1024 px: cards stack normally with 24 px gap, same tones and radius.

### T3. Eyebrow + hairline to the right edge + sub-label (M.Stage section headers; token b, f)
- **Reference**: Latin uppercase eyebrow 22 px / 400 / lh 44 px / ls 0.1em, a **1 px rule running from the text's left edge to the right viewport edge**, a 14–16 px local sub-label under the rule.
- **Ours**: every home section and every inner page head: eyebrow (Manrope 300, 1.375rem, uppercase, ls .1em), `border-bottom:1px solid` (`#49565E` at 25 % on white, `rgba(255,255,255,.55)` on band/dark), line starts at the content gutter (84 px desktop / 20 px mobile) and runs to the viewport edge (`margin-right: calc(50% - 50vw)`), sub-label Public Sans 0.9375rem below, 14 px gap.
- **Must not be diluted**: rule must touch the right viewport edge; eyebrow Latin uppercase in all five languages (sub-label is localized); no centred section titles anywhere.

### Supporting (not counted, but use): clip-path wipe figure with right pill radius (token e/g: recruit) on home block 5; pill outline buttons 46×170 px radius 23 px, 1 px `rgba(73,86,94,.6)`, arrow in a 36 px circle that rotates 180° on hover in 1 s `cubic-bezier(.77,0,.175,1)` (token d, g).

### Continuation to inner pages (required; T1 on ≥ 4 pages, T2 on ≥ 4, T3 on all)
| Page | T1 (tiles) | T2 (sticky cards) | T3 (eyebrow+hairline) |
|---|---|---|---|
| About | page head: 4-tile mini scatter right (h15 large, h06, h08, h14), title strips left | 3 cards: 2014 FOUNDING / HOW WE WORK / THE ROOM | yes |
| Hearing Check | 3-tile scatter (h07 large, h05, h09) | cards: CONVERSATION / PURE-TONE / SPEECH IN NOISE | yes |
| Fitting Method | 4-tile scatter (h01 large, h02, h10, h11) | cards: CHOOSING / REAL-EAR MEASUREMENT / HOME TRIAL | yes |
| Tinnitus Care | 3-tile scatter (h16 large, h18, h06) | cards: LISTENING TO IT / SOUND THERAPY / FOLLOW-UP | yes |
| Aftercare & Review | 3-tile scatter (h13 large, h10, h03) | cards: 2 WEEKS / 6 WEEKS / 6 MONTHS | yes |
| Fees | — (head only: 1 tile h09 at right with strip overlap) | — | yes; full-width price table |
| Audiologists | — | — | yes; 7 people as a two-column ruled list (no portrait grid), one wide photo h14 with clip wipe |
| Stories | 3-tile scatter (h17, h16, h14) | each story = one sticky card (3 cards) | yes |
| FAQ | — | — | yes; `details` accordions, hairline separated |
| Visit & Contact | 2 tiles (h15 large, h06) | — | yes; address, hours, map placeholder text (no iframe), booking form below the fold |
Inner page head tile scatter: height 560 px desktop, title strips (Manrope 200, 4.375rem Latin page word, e.g. "FITTING", in white strips) + local H1 below in 2.125rem; mobile: tiles become a 2-up flow, strips static (no absolute positioning).

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
M.Stage opens on a white field scattered with rounded photographs of care: staff in scrubs on a sunny balcony, an adult finger held by an infant's hand (largest, centre), a young woman smiling, a nurse walking down a bright corridor, a doctor in consultation, a blurred window of ward light, a desk plant. The statement "すべては、持続可能な医療の未来をつくるために" sits in two white highlight strips across the photos. Story: many small, quiet moments of care that together make the medical system. Motion: tiles fade and drift softly on load; scrolling, the tile layer ghosts to ~10 % while the purpose statement reveals line by line (2 s, `cubic-bezier(.19,1,.22,1)`, 150 ms stagger); next the business cards slide over each other.

### (2) Our transformation (audiology, same composition, same motion idea, same image type = high-key photography)
A white field scattered with rounded high-key photographs of **the hearing journey**: the largest tile is the row's signature image, an audiologist seating a hearing aid behind a patient's ear in a bright consulting room (the "two hands" tile becomes "the fitting hands"); around it the moments that hearing brings back: two friends talking across a café table, a grandparent laughing with a grandchild, a fingertip holding a tiny hearing aid, an ear in soft window light, the quiet waiting room, a walk in the park, the charging case on a white table, a blurred corridor of clinic light. The statement in two white strips: **"The sentence you missed, / and every moment it brings back."** Story: conversation is recovered one small moment at a time. Motion: tiles fade in on load (CSS only, staggered), the tile layer moves on `sp-parallax` at a different speed from the headline; the next band (statement) overlaps the bottom of the hero in 90 % white so the bleeding tiles ghost to ~10 % behind the lines that reveal one by one (`sp-reveal--up` + `sp-stagger`).

### (3) KV checklist (every item implemented and visible on the first screen at 1440×900)
| # | Reference element | Our counterpart | Position (1440×900) | Motion | Image |
|---|---|---|---|---|---|
| 1 | Largest centre tile: adult + infant hands | Large tile: audiologist seating a hearing aid, consulting room | x 560–1110, y 150–460 (≈38vw × 21.5vw, 16:9), radius 10.5 | CSS fade-in 1.2 s, delay 0; part of parallax layer | h01 |
| 2 | 8–10 scattered small tiles, 4 bleed off edges | 8 small tiles (sizes in §3); bleeds: h08 top, h05 left, h04 right, h10 bottom | around the field, irregular | CSS fade-in, 120 ms stagger; `sp-parallax` layer `--sp-par:10%` | h02 h03 h04 h05 h06 h08 h10 h18 |
| 3 | Statement in white highlight strips over the photos | 2-line H1 in white strips over h05 (left tile) and h01 | strips start x 112, y 360 / 426 | none (hero gets no reveal); static | (over h05, h01) |
| 4 | Staff on balcony tile top-right, bleeding | Café conversation tile top-right, bleeding off the right/top | x 1150–1440+, y −10–215 | parallax layer | h03 |
| 5 | Bottom press-release ticker line | Bottom notice line: "Today · Open 9:00–18:00 · Next open listening evening Thu 18:30 →" | y 856–888, x 500–1390, 14 px | none | — |
| 6 | Ghosting tiles behind next statement | Statement band overlaps hero bottom by 140 px in `rgba(255,255,255,.9)`; bleed tile h10 shows through | top of band visible at y 760–900 when scrolled 0–140 px; static at fold edge | lines `sp-reveal--up`, stagger 150 ms | (h10 behind) |

---

## 3. Home page

### First screen (1440×900; top-bottom halves, text left / photo right)
- **Header**: plain white bar in normal flow (no JS scroll state), height 96 px, side padding 36 px (token c: 111 px → 96 px because we use one row). **Split nav**: left group = logo (wordmark "Shizuka Hearing" Manrope 400 1.25rem, ls .02em + a 10 px `#0086BF` dot before it — the only accent on screen); centre-right group = About · Hearing Check · Fitting · Tinnitus · Fees · Audiologists · Stories (14 px uppercase Latin ls .05em `#49565E`, localized words in zh/ja, uppercase only for Latin); far-right group, separated by 48 px = language switch + pill button "Book a hearing check" (46 px, outline). Under 1024 px: logo + burger.
- Grey quarter-circle tab 30 px `#F2F2F2` at the top-left viewport corner (token f).
- **Top half (y 96–470)**: tiles h08 (x 150–310, y 0–78, bleeds top, 160×110 cropped), h05 (portrait, x −20–240, y 270–535, bleeds left, 260×265), h01 large (see KV), h03 (x 1150–1450, y −10–215, bleeds top/right). Headline strips: line 1 x 112, y 360, line 2 y 426 — each strip `display:inline` with `box-decoration-break:clone`, background #FFF, padding 8px 10px, Manrope 300 / 2.125rem / lh 1.95 / ls .01em, `#49565E`. Strips overlap h05 and the left 80+ px of h01.
- **Bottom half (y 470–900)**: left (x 112–520, y 560–790): lead paragraph Public Sans 1rem/1.9 (≈45 words: "We are an audiology clinic for adults who nod along in restaurants and miss the end of the sentence. We test hearing in noise, fit and verify hearing aids with real-ear measurement, and see you again until conversation feels easy."), then two pills: "Book a hearing check →" and "How a fitting works →". Right/lower tiles: h02 (x 600–855, y 575–735, 255×160), h06 (x 880–1128, y 615–780, 248×165), h18 (x 1060–1290, y 378–508, 230×130), h04 (x 1410–1520, y 470–555, bleeds right), h10 (x −10–46, y 790–900+, bleeds left/bottom, 56×120 visible; full tile 180×120 positioned so only a sliver shows like the reference). Notice line at y 856 (KV #5).
- Saturated colour on first screen: only the logo dot and photos' natural colour; measured target **≤ 5 %**, hard cap 15 % (script) and row cap 30 %.
- **Mobile 390**: header 64 px; tile field becomes a relative block: h01 full width (350×197) radius 10.5; h03 and h05 as two small tiles bleeding left/right edges above it (static flow + negative margins, not absolute over text); headline strips **below** h01 in normal flow (2.125rem → 1.625rem), lead + buttons below; tiles h02/h06 as a 2-up row under buttons; h04/h08/h10/h18 hidden <600 px. No vertical text, no absolutely positioned labels over text.

### Block order (≈1,050 English words on home; ≥ 3 narrative paragraphs; 18 photo positions)
| # | Block | Purpose | Layout / photos | Copy |
|---|---|---|---|---|
| 1 | Header | split nav | — | — |
| 2 | Hero tile field (T1, KV) | promise + entry | §3 first screen; 9 tiles h01 h02 h03 h04 h05 h06 h08 h10 h18; `sp-parallax` on tile layer | H1 2 lines, lead 45 w, 2 pills, notice line |
| 3 | Statement band "OUR APPROACH" (T3) | narrative opening: the problem in human terms | overlaps hero by −140 px, bg `rgba(255,255,255,.9)`, max 760 px text at left gutter; 3 statement lines Manrope 300 1.75rem/2 each `sp-reveal--up`, parent `sp-stagger`; then one paragraph 90 w | 3 lines + 90 w |
| 4 | Narrative sticky cards (T2) | problem → method → proof | band `#C5D1D5`, eyebrow "THE JOURNEY / 聞こえの道のり-style localized sub-label", left sticky column 316 px + concentric circles; 3 cards 945 px, each photo 16:9 at 337×189 + 2×2:1 sub-thumb row NOT used (keeps it calm) | each card: H3 2.75rem uppercase, sub-label, 80–100 w, link pill |
| 5 | The clinic (supporting clip wipe) | proof of place & founding | white; eyebrow "THE CLINIC"; large figure h07 (sound booth) 1000×600 at left gutter, `sp-reveal--wipe`, final radius `0 52.7px 52.7px 0`; overlapping figure h09 (420×280) bottom-right of it, offset −80 px up, radius `40px 0 0 0`; text column right: founded 2014, 18 Harbour Lane, 2 rooms + 1 sound booth, 120 w | 120 w + 3 facts (sp-count on "2014", "3", "45") |
| 6 | Fees (T3) | price transparency | `#F2F2F2` band, eyebrow "FEES", full-width table (7 rows, §6), price column right nowrap; no reveal | 1-line intro + footnote "first two review visits included with every fitting" |
| 7 | Stories (T3) | proof | white; 3 rows (not cards): thumbnail 2:1 at 380×190 radius 10.5 left, text right, 1 px hairline between rows; rows `sp-reveal--up`, parent `sp-stagger` | each 60 w + name/age |
| 8 | Audiologists strip (T3) | people | white; one sentence + a single line of 7 names with roles as a 2-column hairline list (no portraits) — "who you will meet"; pill to team page | 7 × (name, role) |
| 9 | Closing CTA (parallax) | booking | full-bleed Cover 560 px, bg h15 (clinic entrance, morning), overlay `rgba(73,86,94,.35)`, `sp-parallax --sp-par:8%`; left foreground: white strip H2 "Hear the whole sentence." (Manrope 200, 4.375rem → the theme's max size) + hours + pill (white border) | 25 w |
| 10 | Footer | | `#49565E` bg, white 85 % text; address, hours, nav, small watermark word "SHIZUKA" 6.75rem at 6 % white (token f) | — |
Home photo positions: hero 9 + cards 3 (h12, h11, h13) + clinic 2 (h07, h09) + stories 3 (h14, h16, h17) + CTA 1 (h15) = **18 positions, 18 distinct images, no duplicates**.

### Comparison with the most recent themes (block order must differ)
| Theme | Hero | 2nd | 3rd | 4th | Later |
|---|---|---|---|---|---|
| Akira Audit | boxed-verb hero + crop marks | scope circle photo + 3 link rows | … | … | overlapping photo pair in hairline frames |
| Kosei Architects | framed diagonal panel grid + index list | ruled Title/Explanation table | … | … | L-notch + arch photos on pale block |
| Seiwa Furniture | staggered photo pair over pale panels | outlined card bleeding right | price ledger | projects register | |
| Hayate Cycles | three off-grid bleeding photos | hairline service index 01–06 | process | stories | |
| **Shizuka Hearing** | **9-tile scatter + white highlight strips** | **ghost-overlap statement band** | **sticky stacked cards on blue-gray band** | **clip-wipe clinic figure pair** | fees → story rows → names list → parallax CTA |
Why not similar: no ruled index/service table near the top (Kosei/Hayate), no crop marks or framed panels (Akira/Kosei), no outlined bleeding card (Seiwa: ours are filled, top-left-radius, sticky and stacked), hero has 9 rounded tiles vs Hayate's 3 square-edged bleeding photos, and the price list comes after the narrative proof, not as block 4. Rounded 10.5 px tiles + white strips is a new device in the catalogue.

---

## 4. Inner pages (10 + blog templates)
All pages: T3 page head, Latin page word in white strips over the tile scatter (where listed), localized H1, then content. Text widths 680 px max; containers 1272 px (1440 − 2×84).
1. **About** — founding story 2014 (Dr. Elena Varga left a hospital ENT department to build a clinic where a fitting takes the time it needs), how we work (three sticky cards), the room (h15, h06), 300 w.
2. **Hearing Check** — what happens in 60 min: conversation, otoscopy, pure-tone audiometry, speech-in-noise test; what you take home (a plain-language summary); price €95 / €160 linked to Fees.
3. **Fitting Method** — choosing (no brand names), real-ear measurement explained, 14-day home trial with loaner devices, 2 fitting visits; €380.
4. **Tinnitus Care** — 75-min consultation, sound therapy and counselling with Mei Lin Hartmann, follow-up at 4 weeks; no cure claims ("many people find it becomes less intrusive").
5. **Aftercare & Review** — review visits at 2 weeks, 6 weeks, 6 months, then yearly; cleaning, re-tuning, €60 per review (first two included); as three sticky cards.
6. **Fees** — full table (7 rows), payment notes, cancellation (24 h), what is included.
7. **Audiologists** — 7 people as a ruled two-column list (name, role, 40-word note each), h14 wide photo with clip wipe. No 4-up portrait grid.
8. **Stories** — 3 stories, each a sticky card with photo, 180 w; disclaimer "experiences differ".
9. **FAQ** — 8 questions in `details`.
10. **Visit & Contact** — address, hours, transport (tram stop "Harbour Lane", 3 min walk), lift, booking form (name, email, phone, preferred day, message) below the fold.
Plus blog index / single / archive / 404 / search using T3 heads (Journal: 3 demo posts, featured images h09, h10, h18).

---

## 5. Colour (reference token a; ≤ ±5 % lightness)
| Role | Reference | Ours | Share (page) | Use |
|---|---|---|---|---|
| Base | #FFFFFF | **#FFFFFF** | ~58 % | hero, statement, clinic, stories |
| Base 2 | #F2F2F2 | **#F2F2F2** | ~10 % | fees band, card 1, quarter tab |
| Band | #C5D1D5 | **#C5D1D5** | ~14 % | journey band, contact band |
| Text / dark | #49565E | **#49565E** | ~12 % | body text, footer, card 3 base derivation |
| Primary (row 青鈍) | (ref accent card) | **#51676B** | ~4 % | card 2, button hover fill, link underline |
| Dark card | #49565E | **#3A464D** (#49565E −5 % L) | ~3 % | card 3 (needs contrast from card 2) |
| Accent | #0086BF | **#0086BF** | ≤ 1 % | logo dot, focus ring, 2 px active-nav underline only |
| Ghost | rgba(197,209,213) | `rgba(201,213,215,.6)` | — | watermark words, circle lines on band are `rgba(255,255,255,.4)` |
Why card 2 is `#51676B` not `#0086BF`: the reference fills one large card with its saturated accent; a 945×700 saturated block breaks the quiet-palette rule, so the row's 青鈍 takes that slot (same lightness band as the reference, keeps the three-tone stack). First-screen saturated share target ≤ 5 % (reference 3.4 %), hard cap 15 %.
Contrast: `#49565E` on #FFF 7.4:1; white on `#51676B` 6.0:1; white on `#3A464D` 9.9:1; `#49565E` on `#C5D1D5` 4.9:1 (band headings use white only at ≥1.75rem, body on band uses `#2F3A40`).

## 6. Type (font_direction **sans**)
- Latin headings: **Manrope** (200, 300, 400, 600) — stands in for HelveticaNeue Light/Thin (token b). Latin body: **Public Sans** (300, 400, 500).
- Stacks: heading `"Manrope", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`; body `"Public Sans", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`; `:lang(zh-TW)` puts **Noto Sans TC** first, `:lang(ja)` puts **Noto Sans JP** first (weights 300/400/500, 黑體). No serif / 明體 anywhere.
- Loading: all faces via **theme.json `fontFamilies` + `fontFace`** (woff2 in `assets/fonts/`, zh-TW and ja subsets made with the Hokuto/Hada workaround), so editor iframe and front end match; copy `shared/inc/editor-lang.php` → `inc/editor-lang.php` and require it (style.css has `:lang(` rules).
- Sizes (theme.json presets): small .875rem (nav, buttons, ls .05em, token b 14 px) · base 1rem / lh 1.9 Latin, 1.85 CJK (token b) · medium 1.375rem (eyebrow, ls .1em, lh 2, token b 22 px) · large 2.125rem (hero H1 strips, lh 1.95, ls .01em, token b 33.7 px) · x-large 2.75rem (card H3, lh 1.22, ls .05em, token b 44.3 px) · xx-large **4.375rem** (closing CTA H2, inner-page Latin word; Manrope 200, lh 1.1) · huge **6.75rem** (watermark words, token b 107.5 px). Max ≥ 4.25rem ✔.
- Weights: headings 300 (H1/H2/H3), 200 for xx-large/huge, nav 400; body 400; no bold above 600.
- CJK: sizes × 0.75 for xx-large/huge only (Latin page words stay Latin), body lh 1.85; fr/de `hyphens:auto`.

## 7. Spacing, radius, decoration (tokens c, d, f)
- Gutter 84 px desktop (5.85vw, clamp(20px, 5.85vw, 84px)), 20 px mobile. Section padding: 92 px top / 168 px bottom typical (business 92/42 → cards band 92/120). Header side 36 px.
- Radius: tiles & thumbnails 10.5 px; cards `32px 0 0 0`; wipe figure final `0 52.7px 52.7px 0`; overlap figure `40px 0 0 0`; pills 23 px. Shadows none.
- Lines: 1 px hairlines `rgba(73,86,94,.25)` on light, `rgba(255,255,255,.55)` on band/dark.
- Concentric circles: left of cards on the band, two 1 px `rgba(255,255,255,.4)` circles 250 px and 150 px (inline SVG, aria-hidden, overflow hidden by band).
- Watermark word: card band "LISTEN" is visible white; footer "SHIZUKA" 6.75rem `rgba(255,255,255,.06)`.

## 8. Responsive (hard requirements)
- 390 px first screen: no vertical text, no absolutely positioned labels or strips over text; strips flow after h01.
- Price tables at ≥ 782 px: `width:100%` of the 1272 container (table block align full within content), price column `white-space:nowrap; text-align:right; min-width:9ch`, never clipped at 800 and 1280. Below 782 px every table becomes stacked rows (`display:block`, label above, price right on its own line).
- Sticky cards only ≥ 1024 px; tiles reduce as in §3; no horizontal overflow at 390/1280.

## 9. Scroll motion (sp-scroll; from stage-a candidates, source mstage-group.jp)
| Effect | sp class | Where | Reference trigger / time / easing | Our values |
|---|---|---|---|---|
| Line reveal | `sp-reveal sp-reveal--up` + parent `sp-stagger` | block 3 statement lines, block 7 story rows, T3 eyebrows on inner pages | IO class toggle on enter; 2 s; cubic-bezier(.19,1,.22,1); 150 ms stagger | `--sp-dur:1.6s; --sp-dist:24px; --sp-ease:cubic-bezier(.19,1,.22,1)` (stagger is sp's 0.12 s) |
| Image wipe | `sp-reveal sp-reveal--wipe` | block 5 h07 figure; Audiologists h14 | enter; clip inset 20 % → 0 + fade, 2 s, (.19,1,.22,1) | sp default clip on child, `--sp-dur:1.6s`; final radius set on the img |
| Parallax | `sp-parallax` | hero tile layer (`.sp-parallax__layer` wrapping all 9 tiles), block 9 Cover h15 | tiles drift at a different speed than text (scroll-linked) | hero `--sp-par:10%` desktop / `6%` <782; CTA `--sp-par:8%` / `6%` |
| Sticky stack | CSS `position:sticky` (not sp) | block 4 and inner T2 pages | pure CSS | tops 120/160/200 px |
Hero: no reveal (CSS load fade only, gated by `html.sp-js:not(.sp-no-motion)` and reduced-motion). Fees table, forms, legal: no reveal. `sp-count` on block 5 facts.

### Parallax (required)
- **Where**: home block 2 hero. **Background**: the tile layer (h01 h02 h03 h04 h05 h06 h08 h10 h18) inside `.sp-parallax__layer`. **Foreground**: headline strips, lead, buttons, notice line — outside the layer, never move. **`--sp-par: 10%`** desktop, **6%** mobile (kept on mobile). Reference equivalent: M.Stage's tiles drifting and ghosting as the statement scrolls in.
- Second: block 9 Cover, bg h15, foreground strip H2 + pill, `--sp-par:8%` (6 % mobile).
- Must pass `check-parallax.mjs` (≥ 6 px difference, 0 under reduced motion).

## 10. Images (18, Grok, one at a time, read each; ≤300 KB, ≤2000 px; no text/logos/brands; diverse, international, no Japanese elements)
**Imagery: photo** (reference is high-key photography).
**STYLE** (identical for all): `high-key documentary photograph, bright soft daylight from large windows, airy white and pale blue-gray interiors, cool blue-teal colour grade, gentle shallow depth of field, soft focus edges, calm natural expressions, modern international clinic and everyday city settings, diverse adults 45-75, no text, no logos, no brand marks, no watermark, 35mm lens, clean minimal composition`
| ID | Subject / composition | Ratio | Used (page · block) |
|---|---|---|---|
| h01 ★ | audiologist (woman, 40s) seating a small behind-the-ear hearing aid on a seated man's ear (60s), consulting room, from the side | 16:9 | Home hero large tile; Fitting head |
| h02 ★ | fingertip holding a tiny hearing aid against soft white background, close-up | 3:2 | Home hero; Fitting head |
| h03 ★ | two friends (50s) talking and laughing across a café table, window backlight | 3:2 | Home hero; Aftercare head |
| h04 ★ | grandparent laughing with a grandchild at a bright kitchen table | 3:2 | Home hero |
| h05 ★ | adult ear and cheek in soft window light, profile, no device | 3:4 | Home hero (left bleed); Hearing Check head |
| h06 ★ | quiet bright waiting room, two chairs, plant, window blur | 3:2 | Home hero; About, Tinnitus, Contact heads |
| h07 ★ | sound booth with headphones on a chair, glass window, empty | 5:3 | Home clinic wipe figure; Hearing Check head |
| h08 ★ | abstract blurred bright clinic corridor light (bokeh) | 3:2 | Home hero (top bleed); About head |
| h09 ★ | audiologist showing a tablet chart to a patient, screen not readable | 3:2 | Home clinic overlap; Hearing Check; Fees head; Journal |
| h10 ★ | hearing aids in an open charging case on a white table | 3:2 | Home hero (bottom bleed); Fitting; Aftercare; Journal |
| h11 ★ | real-ear measurement: thin probe tube at patient's ear, audiologist looking at a monitor (unreadable) | 16:9 | Home card 2; Fitting head |
| h12 ★ | woman (50s) leaning in to listen in a busy restaurant, others blurred | 16:9 | Home card 1 |
| h13 ★ | follow-up visit: patient and audiologist smiling, relaxed handshake/conversation | 16:9 | Home card 3; Aftercare head |
| h14 ★ | man (60s) laughing with friends at a quiz-night table in a bright pub | 2:1 | Home stories row; Audiologists wipe; Stories; About head |
| h15 ★ | clinic entrance on a quiet street, glass door, morning light, no signage text | 16:9 | Home CTA parallax; About, Contact heads |
| h16 ★ | calm man (50s) in a consulting chair, small sound generator on side table | 2:1 | Home stories row; Tinnitus head; Stories |
| h17 ★ | woman (40s) singing in a community choir rehearsal, hearing aid visible, light hall | 2:1 | Home stories row; Stories |
| h18 ★ | older couple walking and talking in a park path, morning | 3:2 | Home hero; Tinnitus head; Journal |
★ = used on home (all 18; each exactly once on home).

## 11. Fixed numbers (identical everywhere, all 5 languages)
- Founded **2014**; address **18 Harbour Lane, Northgate**, 2nd floor; tram "Harbour Lane" 3 min; phone **+00 555 0184** (fictional), email hello@shizuka-hearing.example.
- Hours: **Mon–Fri 9:00–18:00**, **Thu until 20:00**, **Sat 9:00–13:00**, Sun & public holidays closed. Open listening evening: **Thursday 18:30** (monthly, free).
- Rooms: **2 consulting rooms + 1 sound booth**; hearing check **60 min**; diagnostic **90 min**; review **45 min**.
- Fees (7): Hearing check (60 min) **€95** · Diagnostic assessment with speech-in-noise test (90 min) **€160** · Hearing aid fitting & real-ear verification (2 visits, 14-day home trial) **€380** · Review visit (45 min) **€60** (first two included with fitting) · Tinnitus consultation (75 min) **€140** · Custom musician's earplugs (pair, incl. impressions) **€210** · Hearing aid cleaning & re-tune (30 min) **€35**.
- People (7): **Dr. Elena Varga** (founder, clinical audiologist) · **Samuel Okafor** (audiologist, fitting lead) · **Mei Lin Hartmann** (tinnitus counsellor) · **Tomás Reyes** (audiologist, review visits) · **Claire Dubois** (audiologist, Saturday clinic) · **Jonas Lindqvist** (hearing aid technician) · **Priya Nair** (patient coordinator).
- Stories (3): **Martin, 64** — quiz nights again (h14); **Henrik, 58** — tinnitus quieter at night (h16); **Ana, 47** — back in the choir's alto row (h17). No outcome guarantees.
- Process (narrative, 5 moments, written in prose / sticky cards, not a step grid): first conversation & hearing check → speech-in-noise test → fitting with real-ear measurement → 14-day home trial → review visits at **2 weeks, 6 weeks, 6 months**, then yearly.

## 12. Similarity table (target 80 %)
| Dimension | Reference (token) | Shizuka Hearing |
|---|---|---|
| Base / band / text / accent colour | #FFF #F2F2F2 / #C5D1D5 / #49565E / #0086BF ≤4 % (a) | same hexes; accent ≤1 %; card 2 #51676B (row) |
| First-screen saturated share | 3.4 % (a) | ≤ 5 % |
| Heading type | Helvetica Light, H1 33.7 px/400/lh 1.7/ls .01em (b) | Manrope 300, 2.125rem/lh 1.95/ls .01em |
| Eyebrow | 22 px / ls .1em / uppercase / lh 44 (b) | 1.375rem / ls .1em / uppercase / lh 2 |
| Card H3 | 44.3 px / ls .05em / lh 54 (b) | 2.75rem / ls .05em / lh 1.22 |
| Watermark | 107.5 px, ~6 % (b, f) | 6.75rem, 6 % |
| Body | 16 px / lh 1.85–2 / #49565E (b) | 1rem / 1.9 (CJK 1.85) / #49565E |
| Gutter / section padding | 84 px; 92/42, 70/168 (c) | 84 px; 92/120, 92/168 |
| Cards | 945 px, pad 74/63, radius 32 TL, sticky (c, d, g) | 945 px, pad 74/63, radius 32 TL, sticky ≥1024 |
| Left sticky column | 316 px, top 450 (c) | 316 px, top 180 (shorter header) |
| Tile radius / sizes | 10.5 px; 142–506 px; 4 bleeds (d, e) | 10.5 px; 160–550 px; 4+ bleeds |
| Highlight strips | white, padding ~8 px (b) | white, padding 8×10 px |
| Wipe figure | inset 20 %→0, radius 0 52.7 52.7 0, 2 s (e, g) | sp wipe, final radius 0 52.7 52.7 0, 1.6 s |
| Overlap figure | 40 px TL radius (e) | 40 px TL radius |
| Buttons | pill 46×170, r 23, 1 px rgba(73,86,94,.6) (d) | identical |
| Decoration | hairline to edge, concentric circles 250/150, quarter tab 30 px (f) | identical |
| Reveal motion | translateY 100 %→0, 2 s, (.19,1,.22,1), 150 ms (g) | sp-reveal--up 24 px, 1.6 s, (.19,1,.22,1), 120 ms |
| Hover | 0.5 s (.165,.84,.44,1); rotate 1 s (.77,0,.175,1) (g) | identical |
| Imagery | high-key cool soft-focus photos (e) | same, generated |

## 13. Home acceptance checklist
1. First screen 1440×900 shows ≥ 9 rounded tiles (10.5 px), ≥ 4 bleeding off edges, largest ≥ 36vw right of centre, two white headline strips overlapping h05 and h01; text block left, tiles right/lower; notice line at bottom.
2. Header split nav: logo + dot left, links centre-right, language + pill far right; only one menu.
3. Statement band overlaps the hero bottom in 90 % white; three lines reveal with stagger.
4. Journey band `#C5D1D5`, left sticky column with concentric circles + "LISTEN", three cards 945 px bleeding right with 32 px top-left radius, tones #F2F2F2 / #51676B / #3A464D, sticky stacking ≥ 1024.
5. Every section uses the eyebrow + hairline reaching the right viewport edge.
6. Clinic figure wipes in and ends with right pill radius 52.7 px; overlap figure 40 px TL radius.
7. Fees table full width at 800 and 1280, prices nowrap right, 7 rows matching §11; stacked on mobile.
8. 18 distinct photos on home, no duplicates; ≥ 250 English words (target ~1,050), ≥ 3 narrative paragraphs.
9. `sp-parallax` on hero tile layer (10 %) and CTA (8 %) passes check-parallax (desktop + mobile); reduced motion = static.
10. Fonts: Manrope + Public Sans, Noto Sans TC / JP for zh-TW / ja, same in editor; largest size 4.375rem+ present (CTA H2).
11. 390 px: no overlap, no vertical/absolute labels, no horizontal scroll; tiles reduced as specified.
12. First-screen saturated share ≤ 15 % (script), target ≤ 5 %; accent #0086BF only on logo dot / focus / active underline.
