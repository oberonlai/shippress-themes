# Koe Interpreters: design spec (stage 1, binding for implementation)

Slug `koe-interpreters`, conference interpreting agency, **landing** theme (one long home page with an anchor menu and one repeated CTA "Request a team"; plus standard inner pages). Design-plan row b24-6.
Reference: irep.inc (https://irep.inc/jp/, main). Secondary: rgf-professional.jp (https://www.rgf-professional.jp/, intro statement only). Measurements: `reference-tokens.md`; screenshots `ref/irep-first.png`, `ref/irep-scroll-1000.png`, `ref/irep-scroll-2200.png`, `ref/rgf-scroll-1000.png`.
We borrow composition, techniques, colour relationships, the first-screen concept and motion. We never reuse their photos, copy, logo, wordmark glyph or page template. All photos are our own (Grok, STYLE below), all copy is ours.

Fixed brand facts (every page, all five languages, no extra numbers anywhere):
- **Koe Interpreters**, founded **2011**, office and request desk at **Havenkade 14, 3011 AB Rotterdam, Netherlands** (fictional address). Currency **EUR (€)** in every language.
- Request desk hours: **Monday to Friday, 08:30–18:00 CET**. Reply to every brief **within one business day**. Urgent line for briefs under 72 hours: **+31 10 555 0140**. Email **requests@koe-interpreters.example**.
- Languages: **English, Traditional Chinese (Mandarin), Japanese, French, German** (five; the same five as the theme's languages).
- Roster: **38 conference interpreters** on the roster, **7 named people** below.
- Booth rule: **one language pair = one booth = two interpreters**, turns change **every 30 minutes**; a third language is handled by **relay** through English.

---

## 1. Signature techniques (three, all obvious at a glance)

### T1. Diagonal photo columns (irep About slanted column, `ref/irep-scroll-1000.png`, `tok(e)`)
- Reference: on the right of the About section, tall photo cards (about 190×260 to 230×300, radius about 8px) stacked in three columns, the whole group rotated about **-11deg** (tops lean left, bottoms run right), columns offset vertically by about **90px**, the group starts at x≈1030 and bleeds off the right edge; it drifts as you scroll.
- Koe home: **in the hero** (block 1, right side, x 1120–1440+) and again in **Briefs** (block 3, right side, two columns). Each column is a `.sp-parallax__layer` with its own `--sp-par` so the three columns drift at visibly different speeds.
- Geometry (desktop 1440): wrapper `koe-columns` absolutely positioned inside the hero, `right:-160px; top:40px; width:560px; height:1100px; transform: rotate(-11deg); transform-origin: 50% 0;` three flex columns, gap 22px, column widths 170 / 190 / 210px, column vertical offsets 0 / 90px / 180px (col 1 highest). Cards: `aspect-ratio: 3/4` (tok(e) "portrait-ish 3:4"), `border-radius: 8px`, gap 22px, no border, shadow `0 10px 30px rgba(12,35,54,.28)`.
- The diagonal is repeated by the hero scrim edge (see 3): scrim right edge and columns share the same -11deg so the first screen reads as one diagonal split.
- Must not be diluted: rotation stays **-11deg** (not 3–5deg), columns bleed off the right edge (never fully inside the viewport), ≥3 cards visible on the first screen at 1440×900, three different drift speeds (`--sp-par` 4% / 8% / 12%).

### T2. Rounded-top paper sheet over the hero, with a phrase marquee at the seam (irep first scroll, `ref/irep-scroll-2200.png`, `tok(d)` `tok(g)`)
- Reference: the hero stays behind while a white sheet with **40px** top corners slides over it; directly above the sheet's rounded edge a one-line marquee runs: huge white words with **inline 16:9 photo capsules (142×80, radius 20)** between phrases, 24s linear.
- Koe home: the bottom 100px of the hero is the seam strip `koe-strip sp-marquee`: Fraunces 400, **4rem (64px)**, white, letter-spacing -0.01em, phrases "English ⇄ Japanese · French ⇄ German · English ⇄ Chinese · Two rooms, one voice" (decoration text in the block markup, not CSS `content:`, translated per language; Latin script only in the en files) with capsules **P06** and **P07** (142×80, `object-fit: cover`, radius 20px, vertical-align middle, margin 0 28px). Marquee duration **24s** linear infinite (override `animation-duration` on `.koe-strip > *`; do not edit sp-scroll files).
- Directly under the strip the **white sheet** starts: block 2 has `margin-top: -40px; border-radius: 40px 40px 0 0; position: relative; z-index: 2; background: #FFFFFF`. At 1440×900 the sheet's rounded top is visible at y≈860–900. The "pinned" feeling comes from the hero background moving slower (`sp-parallax`, `--sp-par: 12%`) while the sheet scrolls up over it. **Do not** use `position: sticky` / fixed on the hero (breaks the parallax gate and the editor).
- Inner pages: every inner page head ends with the same seam strip (static, not a marquee, 2.5rem, one capsule) and a white sheet with 40px top corners overlapping the head by 40px.
- Must not be diluted: radius exactly 40px, sheet overlaps the band (negative margin, never a straight edge below it), seam type ≥ 4rem on home desktop, capsules are photos (not icons/dots).

### T3. Tilted white pair cards on the gradient ground (irep credential cards, `ref/irep-scroll-1000.png`, `tok(d)` `tok(f)`)
- Reference: nine white cards **160×255, radius 6px**, shadow `0 4px 16px rgba(0,0,0,.08)`, in a **5 + 4** stagger (second row indented 8px), each with a tiny different rotation (±1.5deg), on a 90deg gradient `#25535D → #B6B38F → #F0A040`.
- Koe home (block 3 "Briefs"): same cards and the same gradient. Content per card (no logos): top 55% the language pair in Fraunces 500 1.75rem ink `#0C2336`, centred (e.g. "EN ⇄ JA"); a 24px × 1px rule `#B6B38F`; bottom: Newsreader 0.8125rem/1.45 ink, centred, max 3 lines (what that booth usually covers). Card padding 18px. Rotations in order: +1.5, -1, +0.5, -1.5, +1 / -0.5, +1.5, -1, +0.5 deg. Gap 8px horizontal, 12px between rows.
- The nine cards (identical in all languages except the bottom line, which is translated):
  1. EN ⇄ JA: Board and investor meetings
  2. EN ⇄ ZH: Press conferences and trade delegations
  3. EN ⇄ FR: Policy round tables
  4. EN ⇄ DE: Engineering reviews and works councils
  5. FR ⇄ DE: Cross-border plenaries
  6. JA ⇄ ZH: Factory visits and supplier days
  7. JA → FR via EN: Relay booth for three-language days
  8. ZH → DE via EN: Relay for medical symposia
  9. Consecutive: Small rooms, site visits, dinners
- Must not be diluted: cards white on the **saturated gradient** (not on grey), visible rotation (each card ≥0.5deg off), 5 + 4 stagger, card size 160×255 on desktop.

### Continuation to inner pages (required; ≥4 inner pages carry each technique)
| Page | T1 diagonal columns | T2 sheet + seam | T3 pair cards |
|---|---|---|---|
| About | head: one slanted column (2 cards P15, P08) at the right of the head band | yes | — |
| Briefs | head column (P09, P02) + body: two slanted columns beside the cards (P05) | yes | full 9-card wall (as home) + text under each pair |
| Meeting day | head column (P11, P12) | yes | — |
| Rates | head column (P04, P07) | yes | 3 cards: "2 interpreters per booth", "30 min turns", "1 business day reply" |
| Request a team (contact) | head column (P16, P06) | yes | — |
| Notes (index, archive, category, tag) | head column (P03, P16) | yes | — |
| Single note | — | yes (featured image sits on the sheet) | — |
| Early access (newsletter) | head column (P07, P05) | yes | 3 cards: the three things the online brief will let you do |
| Thanks | head column (P14, P01) | yes | 1 card "Reply within 1 business day" |
| Privacy, Terms | — | yes (text-only head) | — |
T1 on 8 inner pages, T2 on all, T3 on 4 (Briefs, Rates, Early access, Thanks).

Inner page head (shared pattern `page-head`): alignfull, min-height 520px desktop / 360px mobile, background `linear-gradient(90deg, #25535D 0%, #55717D 55%, #6E8590 100%)` with a film-grain photo nowhere behind the text; left: small label (Newsreader 0.875rem, letter-spacing 0.08em, `#E3F1EE`, e.g. "Briefs") then H1 Fraunces 500 `clamp(2.75rem, 5.2vw, 4.5rem)` white, lh 1.02, max 2 lines, then a 1-sentence lead in white 1.125rem. Right: T1 column of two cards (200×267, -11deg, bleeding off top and right, `sp-parallax__layer` `--sp-par: 8%`, inside an `sp-parallax` wrapper). Bottom 72px: seam strip (static) in Fraunces 2.5rem white with one capsule, then the T2 sheet.

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
- **What is drawn** (`ref/irep-first.png`): a full-bleed photograph of a long suspension bridge across a bay, cool teal water, darkened by an overlay; a huge three-line white headline left-aligned (Unbounded 700, about 120px, x≈55, y≈280–630); a sub-line with a small three-wave glyph (teal / amber / navy); a transparent header with logo left, four nav links, a two-segment EN | JA pill and a green CTA pill on the right.
- **Story**: one agency is the bridge between two places, two languages and two markets ("data meets culture").
- **Signature motion**: on load the headline words rise 50px and fade in, staggered; the slide photo slowly zooms 1.10 → 1.00; while you scroll the photo stays behind (pinned) and the title drifts up slower; a white sheet with 40px top corners slides over; at the seam a marquee of huge words with photo capsules runs sideways (24s); a slanted -11deg column of photo cards enters from the right.

### (2) Our translation (conference interpreting, same composition, same motion, IMAGERY: photo)
- **Scene**: instead of the bridge between two shores, **the booth between two rooms**. P01, a film-grain documentary photograph taken from just behind an interpreting booth: in the booth (right half of the frame) an interpreter in a headset speaks quietly, looking through the glass; beyond the glass, the bright conference floor with a speaker at a lectern; beside her a colleague at the second console lifts two fingers to cue the next turn. The glass and the floor are the "bridge".
- **Story**: "Two rooms, one calm voice." The speaker's room and the listener's room are joined by one quiet voice in the booth; the agency staffs that booth.
- **Same composition**: full-bleed photo, dark overlay, huge three-line headline at the left, sub-line with our own wave glyph, transparent header with a language pill and one CTA pill. Our diagonal-split (design-plan hero) is the -11deg scrim edge and the -11deg photo columns at the right, both taken from irep's slanted column.
- **Same motion**: headline lines rise 50px on load (staggered), the hero photo moves slower than the page (parallax), the white sheet rides up over it, the seam marquee runs with photo capsules, the slanted columns drift at three speeds.
- **Same image type**: documentary photograph (wide 16:9 hero) + portrait 3:4 photo cards + 16:9 capsules.

### (3) KV checklist (all six on the first screen at 1440×900, visible in the `?sp-static` screenshot)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Full-bleed bridge photo with dark overlay, slow zoom | Full-bleed film-grain photo: interpreter in the booth, speaker on the floor through the glass, colleague cueing; overlay `rgba(12,35,54,.30)` plus the -11deg navy scrim (see 3) | whole hero 1440×900 (Cover background, focal point 62% 45%) | `sp-parallax` on the Cover, `--sp-par: 12%` desktop / 8% mobile | **P01** |
| 2 | Huge three-line white headline | H1 "Two rooms,<br>one calm voice,<br>in your meeting." Fraunces 500, `clamp(2.75rem, 6.6vw, 6rem)`, lh 1.0, ls -0.01em, white | x 56–750, y 262–550 | each line rises 50px + fades, 0.6s `cubic-bezier(0.16,1,0.3,1)`, delays 0.15 / 0.27 / 0.39s (CSS load animation, not sp-reveal) | — |
| 3 | Sub-line with three-wave glyph | Own SVG glyph (three wavy strokes 49×40: `#58B193`, `#F0A040`, `#FFFFFF`, 3px stroke) + "Conference interpreters for bilingual meetings, since 2011." Newsreader 500 1.375rem white | x 56–760, y 590–630 | rises 30px, delay 0.5s | — |
| 4 | Slanted -11deg column of photo cards entering from the right | T1: three columns rotated -11deg, cards P02 (col 1), P03 + P04 (col 2), P05 (col 3), bleeding off the right edge | x 1120–1440+, y 40–900 | three drift speeds: `--sp-par` 4% / 8% / 12% | **P02, P03, P04, P05** |
| 5 | Transparent header, EN \| JA pill, green CTA pill | Transparent header: wordmark left, 4 anchor links, five-segment language pill, green pill "Request a team →" | y 0–88 | none (absolute over the hero, scrolls away with it) | — |
| 6 | Marquee with inline photo capsules at the seam, then the rounded white sheet | T2 seam strip with capsules, then the white sheet's 40px rounded top | strip y 768–856, sheet top y 860 | `sp-marquee` 24s linear; sheet slides over via parallax difference | **P06, P07** |
Plus one CTA pill in the hero body (green `#58B193`, ink text, "Request a team →", 196×48, x 56, y 662) linking to `#request`.

---

## 3. Home first screen (1440×900) composition
- Layers bottom to top: (a) P01 Cover background with `sp-parallax --sp-par:12%`; (b) full overlay `rgba(12,35,54,.30)` (Cover dim); (c) scrim parallelogram `koe-scrim`: `#0C2336` at 0.62 opacity, `clip-path: polygon(0 0, 760px 0, 935px 100%, 0 100%)` (the right edge leans -11deg: +175px over 900px), on a pure decorative div inside the Cover (not the observed element); (d) text group x 56 (left padding 56px), max-width 700px; (e) T1 columns; (f) seam strip at the bottom; (g) header on top.
- P01 must put the booth window and the interpreter at x 760–1150 (right of the scrim edge, left of the columns) so the scene stays readable. Prompt says "subject in the right-centre of the frame".
- Hero height: `min-height: max(720px, 100vh)`, content vertically arranged as in the checklist (H1 starts 262px from top at 900 tall; use padding-top 250px and let the strip sit at the bottom with `margin-top:auto`).
- Header (`koe-header`, design-plan nav "split"): absolute, height 88px, padding 24px 24px 24px 40px (tok(c)). Left: wordmark "Koe Interpreters" Fraunces 500 1.5rem white. Centre-right: anchors "Briefs · Meeting day · Rates · Notes" Newsreader 600 1rem white, gap 28px. Right: language pill 5 segments "EN ZH JA FR DE" (Latin codes in every language) (height 40, radius 8, ground `rgba(255,255,255,.72)`, active segment white with ink text, others ink 70%, segment padding 0 12px, font 0.8125rem 600), then the green pill "Request a team →" (height 40, radius 50, padding 0 20px, `#58B193`, text `#0C2336` 600 0.9375rem; tok(d) pill 177×40). On inner pages the header has the same layout over the page head band.
- Forbidden on the first screen: table, form, search box, vertical text, absolute labels over text on mobile, giant centred text.
- First-screen saturated share (scripts/check-first-screen.py, S>35% V>24%): **gate 15%**, target **≤ 8%**. Achieve with the low-saturation teal-grey film grade of P01–P05 (S mostly < 0.3), the navy scrim (V 0.21, never counts), small green pill (≈0.6%), small capsules. The reference measured 29.5%; we are deliberately lower.

Mobile 390×844 (no overlap, no vertical or absolute labels):
- Header 64px: wordmark 1.25rem, compact language pill (current code + chevron, opens list), menu button (core Navigation overlay containing anchors + CTA).
- Scrim becomes full-width `rgba(12,35,54,.55)` (no clip-path under 782px). H1 `2.75rem` lh 1.02 (4 lines allowed), y≈120; sub-line 1rem; CTA pill full-width-auto 48px tall.
- T1 on mobile: an **in-flow** row (not absolute) under the CTA: three cards P02, P03, P05 at 104×139, rotated -11deg inside a 100%-wide wrapper with `overflow: clip`, height 190px, the third card cut by the right edge; P04 hidden under 782px. Drift `--sp-par` 4/6/8%.
- Seam strip 2.25rem with capsules 88×50; sheet radius 28px, overlap 28px.

---

## 4. Home blocks (landing, anchor menu, one repeated CTA)

| # | Pattern / anchor | Purpose | Layout and photos | Copy (en) | Motion |
|---|---|---|---|---|---|
| 1 | `front-hero` `#top` | KV | section 3 | H1 + sub + CTA (≈20 words) | parallax + load rise; no reveal |
| 2 | `front-statement` `#about` (first white sheet) | who we are (RGF line-fill + irep gradient words) | white sheet, radius 40 top. Text column x 352–1088 (RGF left-aligned column, not centred). Statement 3 lines Fraunces 500 3rem lh 1.25 ink `#0C2336`: "We put a quiet voice / between the speaker / **and the room that listens.**" where the bold line uses the irep gradient text (`linear-gradient(90deg,#0C2336,#25535D 45%,#B6B38F 80%,#F0A040)` background-clip:text). 56px below: two paragraphs Newsreader 1.0625rem/1.65 (left column 7/12). Then a text link "See how a meeting day is staffed ↓" (→ `#meeting-day`). Pale mint quarter-circle arcs `#E3F1EE` 420px in the lower-left corner (tok(f)). Padding 160px top / 140px bottom. | 3 lines + 2 × 55 words | `sp-stagger` on the statement wrapper; each line `sp-reveal sp-reveal--up` |
| 3 | `front-briefs` `#briefs` | which assignments a brief suits (**T3 + T1**) | alignfull gradient `linear-gradient(90deg,#25535D 0%,#55717D 34%,#B6B38F 70%,#F0A040 100%)`, padding 120 / 140. Left 6/12 (x 120–720): white label "Briefs", H2 Fraunces 500 3rem white "Which meetings / a brief suits", one paragraph white (70 words), then outline-white pill "Read the briefs →" (/briefs/). Below, x 120–960: the 9 pair cards 5 + 4. Right (x 1000–1440+): two slanted columns -11deg with **P08** (col 1, `--sp-par` 6%) and **P09** (col 2, offset 90px, `--sp-par` 12%), 220×293 cards. | 70 words + 9 card lines | card wall `sp-stagger`, each card `sp-reveal sp-reveal--up`; columns parallax |
| 4 | `front-booth` | breath; the booth from the hall (**parallax #2**) | core/cover alignfull, min-height 78vh desktop / 64vh mobile, **P10**, dim `rgba(12,35,54,.35)`, `sp-parallax --sp-par:10%` (mobile 6%). Foreground (not in the moving layer): one line bottom-left Fraunces 400 italic 2.75rem white "The audience should forget / the booth is there." + small caption Newsreader 0.875rem `#E3F1EE` "Koe booth rule no. 1". | 15 words | parallax only |
| 5 | `front-day` `#meeting-day` | how the meeting day is staffed | white. Row A: left 5/12 label "Meeting day" + H2 "One booth, two voices, / turns every 30 minutes" (3rem) + 2 paragraphs (90 words); right 7/12 **P11** 3:2, radius 8px. Row B (full content width 1200): the **hour ruler**: a 1px `#0C2336` horizontal line from 07:00 to 18:00, five markers placed proportionally (07:45, 08:15, 09:00, 12:30, 17:30; marker = 9px circle `#25535D`, the 09:00 one `#F0A040`), each with time in Fraunces 500 1.75rem and a 2-line note (Newsreader 0.9375rem) below; notes are top-aligned, not alternating, so it is not a vertical timeline. Under the ruler, one line: "Three languages? We add a booth and work through English relay." | 90 + 5 × 14 words | heading `sp-reveal sp-reveal--up`; ruler none |
| 6 | `front-rates` `#rates` | team composition and rates | white ground, top hairline `#D5DDE0`. Heading row: H2 "Rates, per interpreter" left (3rem); right a 2-line note "Prices in EUR, excluding VAT and travel. Same rates in every language." Then the **price table at full content width** (section 7 rules): 7 rows (section 8). Under it the worked example in a `#E3F1EE` box (radius 8, padding 24 32): "A one-day bilingual board meeting: 2 interpreters × €1,180 + 2 × €240 preparation = €2,840." Then the CTA pill again "Request a team →". | 60 words + table | none on table (rule) |
| 7 | `front-process` | how a request is handled | ink band `#0C2336` full width, padding 120. H2 white "Three steps from brief / to booth" left, then 3 text columns (each: "01" Fraunces 300 4.5rem `#B6B38F`, title Fraunces 500 1.5rem white, 40 words Newsreader `#E3F1EE`). Columns separated by 1px `rgba(255,255,255,.18)` vertical rules. No icons, no grid of cards. | 3 × 40 words | columns `sp-stagger` + `sp-reveal--up` |
| 8 | `front-notes` `#notes` | notes from the booth (posts) | white; H2 "Notes from the booth" + link "All notes →" right; Query Loop of the **2 newest posts** (post 1 **P12**, post 2 **P13**), two columns, image 4:3 radius 8px, category label (Newsreader 0.8125rem `#25535D` uppercase ls .08em), title Fraunces 500 1.5rem, 30-word excerpt. Pale mint arcs top-right. | Query Loop | heading reveal only |
| 9 | `front-request` `#request` | the single CTA + early access (irep CTA band with second marquee) | core/cover alignfull min-height 640px, **P14**, dim `rgba(12,35,54,.62)`. Top edge: second marquee strip Fraunces 3rem white "Request a team · Send the brief · Two rooms, one voice ·" (no capsules here), **16s** linear (tok(g) contact band). Below, left 6/12: H2 white "Send us the brief. / We reply in one business day." + 4-line list of what to send (date, venue, languages, agenda) + green pill "Request a team →" (→ /request/) + mail and hours line. Right 4/12: a white card (radius 6, 300×auto, rotated +1deg = T3 echo) "Early access: the online brief opens in spring 2027 → Join the list" (→ /early-access/). | 70 words | marquee |

English home ≥ 250 words (target ≈ 520) with narrative paragraphs in blocks 2, 3 and 5. CJK home ≥ 500 characters.
Home photo positions: **14** (P01, P02, P03, P04, P05, P06, P07, P08, P09, P10, P11, P12, P13, P14), no repeats on the page.
Footer (all pages): ink `#0C2336`, padding 80 / 48, wordmark + one-line "Conference interpreters for bilingual meetings, since 2011."; address, hours, email, urgent line; links Briefs, Meeting day, Rates, Notes, Early access, Privacy, Terms; pale mint arc `rgba(227,241,238,.08)` 520px bottom-right; copyright line.

### Comparison with recent home orders (must not repeat)
| # | Hibari Flight | Ibuki Cardiology | Waku Exhibits | Misora Links | **Koe Interpreters** |
|---|---|---|---|---|---|
| 1 | photo in a window, corner cut | white band over full photo | full-bleed photo, floor tape | ticket-frame photo + cropped word | **full photo + -11deg scrim + slanted photo columns + seam marquee** |
| 2 | approach (cloud blob) | problem statement | photo-filled statement | stone sheet + card rail | **white rounded sheet, line-by-line statement with gradient words** |
| 3 | circuit statement | clinics tile | edge-flush hall rows | rounds in ticket frames | **gradient band with tilted pair cards + slanted columns** |
| 4 | licences | 3-lane ticker | planning-hour band | full-bleed course | **full-bleed booth parallax band** |
| 5 | navy lesson strip | first-visit tile | full-bleed band | ink season rows | **meeting day: photo + horizontal hour ruler** |
| 6 | parallax field | slate proof band | price table | people | **rates table + worked example** |
| 7 | crew | fees | three stories | plan cards | **ink band, three text steps** |
| 8 | fees | follow-up strip | two-card photo close | circular story crop | **two notes (posts)** |
| 9 | stories / trial | people / news / close | — | journal / visit | **cover close with second marquee + tilted early-access card** |
Why not alike: no window/notch/ticket frame, no cropped giant word, no edge-flush rows, no ruled season rows, no plan cards, no people section on home. Koe's shapes (-11deg diagonal, 40px rounded sheet over the hero, white tilted 160×255 cards on a teal→amber gradient, capsule marquee) appear in none of them. Against used techniques: Kama Cookware's diagonal *staircase of product slabs* is a stepped still-life on a void; ours is rotated *columns of photo cards* bleeding off the edge beside text. Kairo Supply's pinned rounded-top *photo stage* is a photo inside a rounded frame; ours is a *white content sheet* covering a full-bleed hero, with a capsule marquee at its seam.

---

## 5. Inner pages (≥ 8, landing track + repo contract)
Every page: header → `page-head` (T1 column + T2 seam) → white sheet body (content column 760px for text, 1200px for tables/cards) → closing line "Request a team →" green pill → footer. No sidebar.

1. **About** (`page-about`, slug `about`): head "About / A small agency for two-room meetings" (P15, P08 in the column). Body: 3 narrative sections (Founded 2011 in Rotterdam; Why we only staff booths we can brief; How the roster of 38 is kept small enough to know). **P10** wide 21:9 between sections 2 and 3. Then "The people you will meet" as 7 text rows (name Fraunces 1.5rem, role and pairs Newsreader) in two columns, no portraits grid. Then the 2011 → today paragraph.
2. **Briefs** (`page-briefs`, slug `briefs`): head (P09, P02). Body: the full **T3** 9-card wall on the gradient band with T1 two slanted columns (**P05**, and P08 second card) on the right; then for each of four assignment families (Board and investor meetings · Press conferences · Technical and medical symposia · Site visits and dinners) a 70-word paragraph: what the brief should contain, typical team size. Link each family to its story (posts 3–5).
3. **Meeting day** (`page-meeting-day`, slug `meeting-day`): head (P11, P12). Body: **P01** 16:9 radius 8 at the top; the full hour ruler (5 markers as home + 2-line notes expanded to 40 words each); "Team composition" three text columns: one pair = one booth, two interpreters; three languages = two booths + English relay; full days over 6.5 hours = a third interpreter per booth. Then the equipment paragraph (ISO booths, technician, receivers).
4. **Rates** (`page-rates`, slug `rates`): head (P04, P07). Body: the full price table (same 7 rows), the worked example, three **T3** cards (2 interpreters per booth / 30-minute turns / reply in 1 business day), cancellation terms (more than 14 days before: free; 7–14 days: 50%; under 7 days: 100%), travel note.
5. **Request a team** (`page-contact`, slug `request`; screens.contact): head (P16, P06). Body: what to send (6 lines: date and times, venue or platform, languages, agenda and documents, audience size, contact person), the email button `mailto:requests@koe-interpreters.example`, desk hours, urgent line, address. No form block. Then "What happens next" = the three steps in one line each.
6. **Notes** (posts page, slug `notes`, role `posts`, content empty; `home.html` index, `archive.html`, `category.html`, `tag.html`): head (P03, P16) "Notes / From the booth". First post large (image 7/12 left, text right), then 2-column cards. Category label as on home.
7. **Single note** (`single.html`): T2 head without columns (title Fraunces 3.5rem white on the gradient head), the white sheet carries the featured image 16:9 radius 8 at full 1000px, text column 680px, category + tags at the end, "Request a team →".
8. **Early access** (`page-newsletter`, slug `early-access`; screens.newsletter): head (P07, P05) "Early access / The online brief, spring 2027". Body: 90-word explanation (a structured brief form that sends glossary and documents straight to the booth team); three **T3** cards (Upload agenda and slides · Pick languages and room plan · Get a fixed quote in one business day); a "Join the list" button `mailto:early@koe-interpreters.example?subject=Early%20access`; privacy note link.
9. **Thanks** (`page-thanks`, slug `thanks`): head (P14, P01) "Thank you / Your brief is with the desk". One **T3** card "Reply within 1 business day", desk hours, back-to-home link.
10. **Privacy** (`privacy`) and **Terms** (`terms`): text-only T2 head; legal text 680px; no motion. Terms repeat the cancellation numbers and the rates validity ("valid for meetings booked from 1 January 2027").
11. **404 / search**: small T2 head + link home.

Posts (5; categories **Stories** and **Notes**; tags `en-ja`, `en-zh`, `relay`, `sound-check`, `consecutive`, `medical`, `press`):
| # (newest first) | Title | Category | Tags | Featured |
|---|---|---|---|---|
| 1 | What the sound check is for | Notes | sound-check | P12 |
| 2 | Consecutive notes, explained | Notes | consecutive | P13 |
| 3 | Two days, one board: an EN ⇄ JA meeting | Stories | en-ja | P09 |
| 4 | Three languages through one relay: a medical symposium | Stories | relay, medical | P06 |
| 5 | A press conference at 48 hours' notice | Stories | en-zh, press | P17 |
The three stories are the fixed cases (no real clients: "a shipping group", "a medical-device association", "a consumer-electronics maker").

---

## 6. Colour (reference hex kept; tok(a))
Decision: we keep irep's colour codes (±0 lightness) instead of the dove mapping drafted in stage A. Reasons: (1) the similarity target asks for the reference colours unless the industry clearly does not fit; teal, navy and a warm amber suit a calm, international interpreting agency; (2) the dove/plum drafted in stage A (`#655A64` / ink `#2B2530`) is almost identical to Kaigi Centre (`#5C4A5E` / `#2B2530`), a conference-venue theme in the same space, so it would look like a sibling. The design-plan dove colour (hato-ba-nezumi) survives only as a muted mauve note in the film grade (see STYLE), not as UI colour. Recent themes: Hibari navy `#001650` is a main colour there; here navy is only ink and the scrim, the main is teal-grey.

| Role | Hex | Source token | Use | Share of a page |
|---|---|---|---|---|
| Ground | `#FFFFFF` | irep ground | sheets, page body | ≈ 55% |
| Ink | `#0C2336` | irep ink | text, hero scrim (62%), process band, footer | ≈ 15% |
| Teal deep | `#25535D` | irep primary | gradient start, page-head band start, labels, links | ≈ 8% |
| Teal grey | `#55717D` | irep gradient / photo | page-head band, hover | ≈ 8% |
| Sage stone | `#B6B38F` | irep gradient middle | gradient middle, rules on cards, process numerals | ≈ 3% |
| Amber | `#F0A040` | irep gradient tail | gradient end, wave glyph stroke, 09:00 marker, link underline on hover | ≤ 3% |
| Green | `#58B193` | irep CTA | CTA pills only (ink text on it) | ≤ 1% |
| Pale mint | `#E3F1EE` | irep arcs | arcs, example box, small labels on dark | ≈ 3% |
| Muted text | `#4A5B66` | derived from ink | captions, meta | — |
| Hairline | `#D5DDE0` | derived | table rules | — |
- Contrast: ink on white 16.9:1; ink text on green pill ≈ 6:1 (the reference uses white on green, 2.6:1, too low, so we use ink); white on `#25535D` 8.5:1; white on gradient only over the teal part (left half), cards carry their own white ground.
- No beige/cream anywhere. Gradient bands only in block 3 and the inner page heads.
- theme-meta tags: colors `teal`, `muted`, `cool`; style `photographic`, `documentary`, `layered`, `calm`; type `landing`.

## 7. Type (font_direction: serif)
- Latin display: **Fraunces** (variable, wght 300–600, opsz auto), headings and wordmark. Latin text: **Newsreader** (variable, wght 400–600), body, nav, labels, table.
- CJK: zh-TW headings **Noto Serif TC**, ja headings **Noto Serif JP** (Ming / serif style), both bundled as subsets (Hokuto / Hada method; the subset script is broken). zh/ja body uses system serif (not bundled).
- Stacks (theme.json fontFamilies; all loaded by `fontFace` so editor and front end match; copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and require it, because style.css uses `:lang()`):
  - display: `"Fraunces", "Noto Serif TC", "Noto Serif JP", Georgia, serif`
  - body: `"Newsreader", Georgia, "Times New Roman", serif`
  - `:root:lang(zh-TW)` display: `"Fraunces", "Noto Serif TC", serif`; body: `"Newsreader", "Songti TC", "PMingLiU", serif`
  - `:root:lang(ja)` display: `"Fraunces", "Noto Serif JP", serif`; body: `"Newsreader", "Hiragino Mincho ProN", "Yu Mincho", serif`
  - fr/de: `hyphens: auto`.
- Sizes (theme.json fontSizes): small 0.875rem · base 1.0625rem · medium 1.25rem · large 1.75rem · x-large 3rem (tok(b) 48px section titles, lh 60/48 = 1.25) · xx-large 4.5rem · huge `clamp(2.75rem, 6.6vw, 6rem)` (hero) . Max ≥ 4.25rem satisfied (4.5rem / 6rem).
- Weights / line-heights: hero 500 / 1.0, ls -0.01em; H2 500 / 1.25; H3 500 / 1.3; body 400 / 1.65 (tok(b) 1.5 raised because Newsreader is a text serif); CJK body 1.85, CJK headings ≈ 0.75× the English size; buttons Newsreader 600; labels 0.8125–0.875rem ls 0.08em.

## 8. Fixed numbers (identical on Home, Rates, Meeting day, Briefs, Request, Terms, footer and in all five languages)
Rates (EUR, excluding VAT and travel):
| # | Service | Unit | Price |
|---|---|---|---|
| 1 | Simultaneous interpreting, full day (up to 6.5 hours, two per booth) | per interpreter | €1,180 |
| 2 | Simultaneous interpreting, half day (up to 3.5 hours) | per interpreter | €720 |
| 3 | Consecutive or whispered interpreting, full day | per interpreter | €980 |
| 4 | Preparation and briefing (glossary, documents, speaker call) | per interpreter, per meeting | €240 |
| 5 | Overtime, each started 30 minutes | per interpreter | €140 |
| 6 | Chief interpreter on site (team coordination) | per day | €380 |
| 7 | Booth and receiver hire (one ISO booth, two consoles, 100 receivers, technician) | per day | €1,450 |
- Worked example: 2 × €1,180 + 2 × €240 = **€2,840**.
- Cancellation: >14 days free; 7–14 days 50%; <7 days 100%.
- Meeting day: 07:45 team arrives, glossary read-through · 08:15 sound check with the technician (30 min) · 09:00 plenary opens, turns every 30 minutes · 12:30 lunch, handover notes between booths · 17:30 close, chief interpreter files the glossary notes.
- Process: (1) send the brief → reply and fixed quote within 1 business day; (2) documents 5 working days before, 20-minute briefing call, glossary shared 2 days before; (3) team arrives 75 minutes before opening, glossary notes returned within 2 business days.
- People (7):
  1. **Ines Okonkwo-Bauer**: founder and chief interpreter, EN ⇄ DE ⇄ FR
  2. **Kenji Haraguchi**: booth lead, EN ⇄ JA
  3. **Mei-Lin Chou**: EN ⇄ ZH, press and trade delegations
  4. **Camille Dufresne**: FR ⇄ EN, FR ⇄ DE, policy round tables
  5. **Tobias Lindqvist**: DE ⇄ EN, engineering and medical briefs
  6. **Aiko Brennan**: JA ⇄ EN, relay booth for three-language days
  7. **Samuel Adeyemi**: request desk and scheduling (not an interpreter)
- Stories: 3 (posts 3–5). Founded 2011. Roster 38. Early access opens spring 2027.

## 9. Responsive rules (auto-gates)
- 390px: no vertical text anywhere; no absolutely positioned label over text in the first screen (T1 cards move in flow, section 3); no horizontal overflow (`html, body { overflow-x: clip }`, rotated groups inside `overflow: clip` wrappers).
- Price table ≥ 782px (checked at 800 and 1280): `width: 100%` of the 1200 content box (alignwide), `table-layout: auto`, columns Service ≈ 58% / Unit ≈ 24% / Price ≈ 18%; Price cell `white-space: nowrap; text-align: right; font-variant-numeric: tabular-nums; padding-right: 0`; row rules 1px `#D5DDE0`; no `overflow: hidden` on the wrapper; must not be cut at 800px.
- < 782px every table stacks: each row a block (service name 1.0625rem bold-ish 600, then unit left and price right on one flex line), 16px padding, rule between rows; `thead` visually hidden.
- Card walls: 5 + 4 at ≥ 1100px; 3 columns 782–1099; 2 columns under 782 (cards 100% × auto, min-height 200px, rotation ±1deg kept).
- Hour ruler under 782px: becomes a stacked list of the five times with a left 1px rule (allowed: this is a short list, not a decorative vertical timeline; keep markers as small dots).
- Process columns, notes and request blocks stack to one column under 782px.

## 10. Scroll effects (sp-scroll; three types: parallax, marquee, reveal-up with stagger)
| Effect | sp-* class | Where | Source (irep) trigger / time / easing | Our values |
|---|---|---|---|---|
| Parallax (required) | `sp-parallax` on Cover / wrapper; `.sp-parallax__layer` on columns | hero Cover (P01); hero columns; block 3 columns; block 4 booth band (P10); inner head columns | irep pinned hero photo + title drifting at 0.37× scroll; slanted columns at different speeds; scroll position, continuous, linear | hero `--sp-par: 12%` (≤781px: 8%); hero columns 4% / 8% / 12% (mobile 4/6/8%); block 3 columns 6% / 12%; block 4 `--sp-par: 10%` (mobile 6%); inner heads 8% |
| Marquee | `sp-marquee` (inner group duplicated with `aria-hidden="true"`) | hero seam strip; block 9 top strip | irep CSS keyframes, 24s (service text) and 16s (contact band), linear infinite | hero 24s, block 9 16s (override `animation-duration`), no reveal on children |
| Reveal up + stagger | `sp-reveal sp-reveal--up`, parent `sp-stagger` | block 2 statement lines (RGF line-by-line fill), block 3 card wall, block 5 and 8 headings, block 7 columns; inner pages: headings and T3 cards | irep h2/blocks: IntersectionObserver, opacity .4s / transform .6s, `cubic-bezier(0.16,1,0.3,1)`, 30px; RGF lines fill one after another | `:root{ --sp-dist: 30px; --sp-dur: .6s; --sp-ease: cubic-bezier(0.16,1,0.3,1); }`; stagger default 0.12s steps |
- Hero: no `sp-reveal`. The hero's own load rise (KV 2–3) is CSS keyframes only under `html.sp-js:not(.sp-no-motion)` inside `@media (prefers-reduced-motion: no-preference)`; with `?sp-static`, no JS or reduced motion the text is at its final state.
- Not used: header hide/show (would need a scroll listener; the header simply scrolls away with the hero), RGF converging photo field (collage), hover button easing beyond `transform .45s cubic-bezier(0.7,0,0.84,0)` on pills (tok(g), allowed as hover only).
- Never on: price table, request text, legal pages.
- Verify with `check-parallax.mjs` (desktop + mobile, ≥ 6px difference; reduced motion 0).

## 11. Photos (17, Grok, one at a time, read every one)
IMAGERY: **photo** (irep is photographic). STYLE (exact string on every prompt):
`documentary photograph shot on 35mm film, visible fine film grain, soft halation on highlights, slightly lifted blacks, muted cool teal-grey grade with a faint mauve tint and warm amber highlights, low saturation, high-key soft daylight from large windows, modern international conference venue, calm candid moment, adults of mixed ethnicities and ages in dark business clothing, natural hands, no readable text, no letters, no numbers, no logos, no brand marks, no signage, no flags, no Japanese elements`

| ID | Subject / composition | Ratio, px | Used on (each at most once per page) | Home |
|---|---|---|---|---|
| P01 | From just behind an interpreting booth: in the right-centre of the frame an interpreter in a headset speaks softly, looking through the booth glass; beyond the glass the bright conference floor with a speaker at a lectern; beside her a colleague at the second console raises two fingers to cue the next turn; left third darker booth wall (space for text) | 16:9, 2000×1125 | Home hero; Meeting day body; Thanks head | ✔ |
| P02 | Speaker at a lectern on a low stage, seen from the booth's height, audience heads in soft focus | 3:4, 900×1200 | Home hero col 1; Briefs head | ✔ |
| P03 | Headset resting on a booth desk beside handwritten glossary sheets (illegible pencil marks) and a pencil | 3:4 | Home hero col 2 (top card); Notes head | ✔ |
| P04 | Close-up of a hand on an interpreter console, unlabelled buttons, small red microphone light | 3:4 | Home hero col 2 (lower card); Rates head | ✔ |
| P05 | Delegates in a hall wearing single-ear receivers, listening, mid-shot | 3:4 | Home hero col 3; Briefs body; Early access head | ✔ |
| P06 | Row of lit interpreting booth windows at the back of a dim hall, seen from the floor | 16:9, 1200×675 | Home seam capsule; Request head; post 4 | ✔ |
| P07 | Receiver and earpiece on a conference table next to a water glass and notepad | 16:9 | Home seam capsule; Rates head; Early access head | ✔ |
| P08 | Two interpreters reading documents together at a small table before a meeting | 3:4 | Home briefs column; About head; Briefs body column 2 | ✔ |
| P09 | Long board table, a consecutive interpreter taking notes beside a speaking executive | 3:4 | Home briefs column; Briefs head; post 3 | ✔ |
| P10 | Wide view from the back of a plenary hall: blurred booth glass edge in the foreground, bright floor and rows of delegates beyond | 21:9, 2000×857 | Home booth band (parallax); About body | ✔ |
| P11 | Two interpreters changing turns in a booth: one slips off the headset and hands over, the other slides into the chair | 3:2, 1500×1000 | Home meeting day; Meeting day head | ✔ |
| P12 | Sound check at a booth door: technician with a cable and an interpreter testing a headset | 4:3, 1200×900 | Home notes (post 1); Meeting day head | ✔ |
| P13 | Open notebook with consecutive shorthand: arrows, circles and lines only, a hand holding a pen | 4:3 | Home notes (post 2); Notes index card | ✔ |
| P14 | Empty conference hall after the meeting, chairs slightly askew, evening light, booth windows still lit | 16:9, 2000×1125 | Home request close; Thanks head | ✔ |
| P15 | Five interpreters and a coordinator in a bright briefing room, standing around a table with papers, relaxed | 3:2 | About head | |
| P16 | Interpreter at a desk on a briefing call: laptop seen from behind (screen not visible), printed agenda, headset | 4:5, 960×1200 | Request head; Notes head | |
| P17 | Small press conference: two speakers at a table with microphones, cameras as dark shapes in the foreground | 3:2 | post 5 | |
- 17 images, 0 cutouts, each ≤ 300 KB webp and ≤ 2000px, one readme line each (AI-generated, CC0). Reject and regenerate any image with letters, logos, broken hands, warped faces, saturated teal-orange or a style drift.
- Per-page check: Home 14 distinct (P01–P14). About P15, P08, P10. Briefs P09, P02, P05, P08. Meeting day P11, P12, P01. Rates P04, P07. Request P16, P06. Notes index: head P03, P16 + post cards P12, P13, P09, P06, P17. Early access P07, P05. Thanks P14, P01. No page repeats an image.

## 12. Similarity table (target 80%; reference values from `reference-tokens.md`)
| Dimension | irep (reference) | Koe (this theme) |
|---|---|---|
| Ink | `#0C2336` | `#0C2336` |
| Primary | `#25535D` / `#55717D` | `#25535D` / `#55717D` |
| Gradient | 90deg `#25535D → #B6B38F → #F0A040` | same three stops (+ `#55717D` at 34%) |
| CTA colour | `#58B193`, white text | `#58B193`, ink text (contrast) |
| Ground | `#FFFFFF` | `#FFFFFF` |
| Decoration tint | mint arcs `#E3F1EE` | `#E3F1EE` arcs |
| First-screen saturated share | 29.5% | ≤ 8% target, gate 15% (rule) |
| Hero headline | Unbounded 700, ≈120px, 3 lines, white, left x≈55 | Fraunces 500, 96px (6rem), 3 lines, white, left x 56 (serif direction; 96px keeps it left of the -11deg edge) |
| Section title | 48px / lh 60px | 3rem / 1.25 |
| Body | 16px / 24px | 17px / 1.65 (serif text face) |
| Header | 88px, padding 24 24 24 39, pill 177×40 r50, lang pill 164×40 r8 | 88px, padding 24 24 24 40, pill 40 tall r50, lang pill 40 tall r8 |
| Container | ≈1200 (x 120–1320) | 1200 (x 120–1320) |
| Sheet radius | ≈40px top corners | 40px (mobile 28px) |
| Photo cards | r≈8px, -11deg, 3 columns, 90px offsets, bleed right | r 8px, -11deg, 3 columns, 90px offsets, bleed right |
| Credential/pair cards | 160×255, r6, shadow 0 4px 16px rgba(0,0,0,.08), ±1.5deg, 5 + 4 | identical |
| Capsules | 142×80, r20 inside 64px type | 142×80, r20 inside 4rem (64px) type |
| Hero image | full-bleed photo, dark overlay, zoom 1.10→1.00 | full-bleed photo, overlay + scrim, parallax 12% (scale 1.18 → moving) |
| Load motion | words rise 50px, staggered, `cubic-bezier(0.16,1,0.3,1)` | lines rise 50px, 0.12s stagger, same easing, 0.6s |
| Reveal | 30px, .4s / .6s, `cubic-bezier(0.16,1,0.3,1)` | 30px, .6s, same easing |
| Marquee | 24s / 16s linear | 24s / 16s linear |
| Hover pills | transform .45s `cubic-bezier(0.7,0,0.84,0)` | same |
| Image type | photographs, saturated teal-orange | photographs, film grain, muted teal-grey (own, Grok) |

## 13. Home acceptance checklist (stage 1 review compares against this)
1. First screen 1440×900 shows all six KV items: P01 full-bleed with the -11deg navy scrim edge, three-line white serif H1 ≥ 6rem at the left, sub-line with the three-wave glyph, ≥3 slanted -11deg photo cards bleeding off the right, transparent header with five-segment language pill and green pill, seam marquee with 2 photo capsules and the white 40px rounded sheet edge at the bottom.
2. `check-first-screen.py` ≤ 15% (target ≤ 8%); no table/form/search/vertical text on the first screen; 390px first screen: no overlap, T1 cards in flow.
3. T2: white sheet with 40px top corners overlaps the hero; the seam marquee runs (24s) in `?sp-motion` and is static in `?sp-static`.
4. T3: nine white 160×255 pair cards in 5 + 4 with visible small rotations on the teal→amber gradient; two slanted photo columns (P08, P09) at the right of block 3.
5. Parallax: hero Cover (12%), hero columns (4/8/12%), block 4 booth band (10%); `check-parallax.mjs` passes desktop and mobile, reduced motion 0.
6. Block order = section 4 (9 blocks), anchors `#about #briefs #meeting-day #rates #notes #request` work from the header; one CTA text "Request a team" repeated (header, hero, rates, close).
7. Rates table full content width at 800 and 1280, price column nowrap right, nothing cut; stacked under 782px. The seven prices and €2,840 match section 8.
8. 14 photo positions on home, all different, all film-grain same STYLE, no letters/logos.
9. Colours from section 6 only; no beige/dove UI; green only on CTA pills.
10. Fonts: Fraunces + Newsreader via theme.json fontFace; editor = front end; zh-TW / ja headings in Noto Serif TC / JP; theme.json max size ≥ 4.25rem.
11. English home ≥ 250 words with narrative in blocks 2, 3 and 5; numbers identical to section 8.
12. `auto-gates.mjs … en … 1 1` pass=true.
