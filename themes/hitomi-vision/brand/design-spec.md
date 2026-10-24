# Hitomi Vision: design spec (stage 1 design, binding for implementation)

Slug `hitomi-vision`, optometry clinic for office workers and school-age children, type **health** (WooCommerce declared compatible, not required). Row b10-1: archetype single-column-longform, hero framed-window, nav overlay, first screen top-bottom halves, page structure **narrative → problem → method → proof**, photo direction high-key.
References (see `reference.md`, numbers in `reference-tokens.md`): **sumire-totalbeauty.jp** (main, https://sumire-totalbeauty.jp/) and **hta-program.jp** (sub, https://hta-program.jp/, first-screen headline treatment only). Borrow structure, technique, colour relationships and motion values only. No copy, photos, illustrations or logos. Similarity target: about 80% of sumire's colour, image presentation, motion, decoration and layout rhythm, with our own photographs and copy.

Fixed brand facts (every page, all five languages): **Hitomi Vision**, independent optometry clinic, founded **2011**, **2nd floor, 14 Linden Row, Northgate** (fictional, international neutral), three exam rooms and a small frame room. Phone `+1 555 0142 208` (fictional), email `hello@hitomivision.example`. Currency **USD** in every language, no converted prices.

---

## 1. Signature techniques (three, obvious at a glance; do not soften)

### T1. Dome band behind every section head (sumire `.bg-round`, token (f), (a), (c))
- Reference: each section sits on a full-width pale ellipse whose top edge crests about 120 px above the section; box 1440×1149 at 1440 wide; fill = ground +2–3% L; the small centred heading (title + lower-case Latin sub-title) sits inside the crest. No border, no shadow: the edge is the arc itself. See `ref/sumire-costume.png`.
- Optometry reading: the arc of a lens / the top of an iris. It is the theme's main graphic.
- Hitomi geometry: class `hv-dome` on the alignfull section Group. Implement with a `::before` pseudo element: `position:absolute; top:-120px; width:118vw; left:-9vw` on ≥1024 so the side edges curve down out of the viewport like the reference (the ellipse meets the viewport edges about 380 px below its crest); `height:1150px; border-radius:50%; background:var(--wp--preset--color--dome)` (`#DEE3DE`); `z-index:0`; section content `position:relative; z-index:1`. Section `overflow:clip` horizontally only (`overflow-x:clip`) so no horizontal scroll. Next section's dome overlaps the previous section's bottom by 120 px (that is intentional, as in the reference).
- Heading inside the dome: centred, top padding 166 px from section top (token (c) 166.6 px), title Newsreader 400 2rem (`x-large`), line-height 1.6, colour text; under it the Latin sub-title Figtree 400 0.875rem, letter-spacing 0.15em, lower-case, colour sub-text `#516258`, margin-top 12 px. 164 px space (token: heading block → image 330−166) before the section body.
- Mobile 390: dome `width:180vw; left:-40vw; height:720px; top:-64px`; heading padding-top 96 px.
- Must not be diluted: the dome must be visible as a curve on every screenshot (contrast ground `#D6DCD6` vs dome `#DEE3DE` is the minimum; do not make the dome a rectangle band, do not add a border, do not reduce to a small circle behind the heading). Every home section except hero, interlude and footer uses it.

### T2. Polaroid "exam record" pair (sumire photo-plan cards, token (e), (d))
- Reference: two photos on pale mats, card 305×370 with an even ~18 px mat and a thicker bottom (~70 px), radius 0, soft shadow; the right card is 110 px higher than the left; title + text column to the right. See `ref/sumire-photo-polaroid.png`.
- Hitomi: the **corrected case** on home (proof). Class `hv-polaroid-pair` (Columns 7/12 + 5/12 inside content width 1200). Left column holds two cards `hv-polaroid`: card width 305 px (min(305px, 42vw)), padding 18px 18px 70px, background mat `#E4E8E4`, `box-shadow:0 2px 10px rgba(0,0,0,.08)`, radius 0; photo inside 1:1.02 (ref 257×262), object-fit cover. Card A at x offset 0, `margin-top:110px`; card B at x offset 365 px (60 px gap), margin-top 0 → B sits 110 px higher than A. Each card carries a hand-written-looking caption **in the bottom mat**: Figtree 0.8125rem, letter-spacing 0.06em, colour sub-text, e.g. "week 0 — 4 pm, second coffee" / "week 6 — same desk, new lenses". Right column: small dome-style heading left-aligned (title 2rem + Latin sub), then 3 paragraphs.
- Mobile: cards side by side at 46vw each, card B still 48 px higher; text below.
- Must not be diluted: thicker bottom mat (≥ 3.5× side mat), the 110 px vertical offset on desktop, the visible shadow, radius 0. Never turn them into plain images or a 2-up grid with equal tops.

### T3. Alternating 2:3 portrait with a narrow caption column (sumire costume / dress / hair rows, token (c), (e))
- Reference: one tall 2:3 photo 427×651 at x=293 (left rows) or x=770 (mirrored rows) under a centred section head; a narrow vertical text column (67×246) about 276 px from the photo; huge empty ground around it.
- Hitomi: class `hv-portrait-row` and `hv-portrait-row--mirror`. Desktop ≥1024 inside a 1360 container: photo width 427 px (31.4%), aspect 2:3, radius 0, starting at x=293 (left 21.5%) or ending at x=1197 (mirror, photo left edge 770 → 56.6%). Caption column width 260 px at 276 px from the photo edge: **on ≥1024 the caption is set `writing-mode:vertical-rl`** in ja and zh-TW (natural vertical, 3 short lines, Noto Serif, 0.9375rem, letter-spacing 0.12em) and **horizontal** in en/fr/de (Latin must not be rotated): Newsreader italic 1.25rem, line-height 1.9, max 3 lines × 32 characters, vertically centred to the photo, preceded by a 40 px 1 px rule in accent `#6A8A88`. Below the caption (same column) a paragraph block of body text, max-width 360 px.
- Mobile < 1024: photo 78vw centred (mirror rows: right-aligned with 22vw left gap so the alternation still reads), caption and paragraph below, **all horizontal** (no vertical text on mobile in any language).
- Must not be diluted: 2:3 aspect, photo no wider than 32% of the container on desktop (the emptiness is the point), true alternation left → right across consecutive rows, radius 0.

### Supporting first-screen detail (hta, not counted as a signature)
hta label strips: each line of the hero H1 sits on its own pale strip `#EEF1EE` (`box-decoration-break:clone; padding:0 .18em; line-height 1.32`), like hta's white boxes behind each headline line (`ref/hta-first.png`). Plus one giant faint backdrop word, *clarity*, Newsreader italic 300 15rem, colour text at 6% opacity, positioned behind the top edge of the framed window (desktop ≥1024 only, `aria-hidden`, `display:none` below 1024).

### Continuation to inner pages (required)
| Page | T1 dome | T2 polaroid | T3 portrait row |
|---|---|---|---|
| About | page head in dome; dome behind "the clinic in 2011" section | founding pair: P16 waiting room + P12 front window, captions "2011" / "today" | P11 director portrait row (mirror) |
| Eye Exams | page head + "what we measure" section | — | P5 phoropter row, then P6 slit-lamp row mirrored |
| Children's Vision | page head + "signs at school" section | case 2 pair (P3 reading / P13 frame wall) | P3 portrait row |
| Screen & Workplace Eyes | page head + "the working distance" section | case 1 pair (P9 / P10) | P2 portrait row |
| Dry Eye & Contact Lenses | page head + "tear film" section | case 3 pair (P15 / P14) | P14 portrait row (mirror) |
| Frames & Lenses | page head | — | P8 lens tray row, P13 frame wall row mirrored |
| Fees | page head; table sits on the dome ground | — | — |
| Case Stories | page head + one dome per case | all three cases as T2 pairs, alternating side (pair left / pair right) | — |
| Our Optometrists | page head | — | 2 T3 rows (P11 director, P7 technician) + a typographic name list for the other five (see §4) |
| Visit & Book | page head | — | P12 front window row |
| Journal (index / single) | index head in dome; single title in dome | — | single featured image 2:3 at T3 position |

---

## 2. First screen (1440×900 and 390×844)

Top-bottom halves (row `first_screen`), framed window hero (row `hero`), overlay nav (row `nav`). Hero gets **no reveal**; it is visible on load.

Desktop 1440:
- Header 90 px (token (c)), transparent, overlaying the top half (ground shows through). Logo left at x=40: wordmark "hitomi vision" Figtree 300 1.25rem, letter-spacing 0.08em, lower-case, colour text. Nav right: Figtree 400 14px lower-case, letter-spacing 0.06em, colour `#65736B`, gap 35 px: exams, children, screen eyes, dry eye, frames, fees, about, visit. Far right at x=1400: outline button "book an exam" (1px `#8A938E`, radius 1px, padding 6px 12px, 14px). Items with a submenu get the 12 px outline "+" (token (f)) — only "exams" (Eye Exams / Children / Screen eyes / Dry eye & contacts).
- **Top half** (y 90–430, 340 px on ground `#D6DCD6`): Columns 7/5 inside 1360 (x 40–1400). Left: H1 Newsreader 300 `huge` = clamp(2.75rem, 5.6vw, 4.75rem), line-height 1.12, letter-spacing −0.01em, colour text, three lines each on hta strip: "Tired eyes by four o'clock / are telling you / something measurable." Right column (aligned to H1 bottom): lede Newsreader 400 1.0625rem lh 2.2, 2 sentences (~40 words); then outline button large "book a 60-minute exam" (padding 10px 20px) and beside it a text line Figtree 0.8125rem "Mon–Fri 10:00–19:00 · Sat 9:00–16:00".
- **Bottom half** (y 470–900+): the framed window. Group `hv-window sp-parallax` alignfull with 40 px side gutters: inner frame 1360×470 visible above the fold (total height 560, continues 90 px below), radius 0, `overflow:clip`. Background photo **P1** (optometrist setting a trial frame on a patient, high-key) as Cover background (`.wp-block-cover__image-background`), focal point 40% 45%, `--sp-par: 8%`. Frame: a 1 px `#8A938E` hairline drawn 12 px outside the photo (`outline:1px solid #8A938E; outline-offset:12px`) — this is the "window". The faint word *clarity* sits behind the window's top-right edge. Small caption bottom-left inside the gutter, under the frame: Figtree 0.75rem lower-case "trial frame, room two".
- Saturated pixels (HSV s>.35, v>.2) on the first screen: **cap 15%, target ≤ 3%** (reference 0.0–0.1%). Only the accent rule and the photo may carry colour; the photo is high-key and low-chroma.

Mobile 390:
- Header 64 px: logo left, "menu" text button + 2-line icon right (overlay menu), no CTA in header.
- Top half: H1 clamp → 2.75rem (44px), strips on, 4–5 lines max; lede 1rem; button full width minus 40 px. No absolute labels, no vertical text, no backdrop word (hidden), caption static under the photo.
- Window: 350×300 (20 px gutters, outline offset 8 px), `--sp-par: 5%` (kept on mobile).

---

## 3. Home blocks (order, purpose, layout, photos, copy)

| # | Block | Purpose (narrative step) | Layout | Photos | Copy |
|---|---|---|---|---|---|
| 0 | Header (overlay) | — | see §2 | — | — |
| 1 | Hero: top-bottom halves + framed window | promise | §2 | **P1** | H1 9–11 words, lede ~40 words |
| 2 | "Eyestrain at four o'clock" (dome) | problem: adults | T1 head (title + sub "symptoms, at work"), then T3 row (photo left at x=293) | **P2** office worker pressing the bridge of her nose at a laptop | caption 3 lines; paragraph ~90 words listing headaches, blur after screens, dry burning eyes, neck tension |
| 3 | "And at the school desk" (same dome continues; no new dome) | problem: children | T3 row **mirrored** (photo right, x=770), 120 px below row 2 | **P3** girl about 9 reading at a desk, book close to her face | caption 3 lines; paragraph ~80 words: skipping lines, rubbing eyes, avoiding reading, board blur |
| 4 | Interlude (full-bleed photo, no dome) | breath / transition to method | alignfull Cover 100vw × 720 px (token: interlude 900 window, we use 80vh max 720), no text on the photo; caption Figtree 0.75rem below it, right-aligned | **P4** bright exam room, phoropter and chart, wide | caption 1 line |
| 5 | "One sixty-minute exam" (dome) | method | T1 head (sub "the method"); single centred text column 640 px with 4 short paragraphs, each opening with a small-caps Figtree term (history · refraction · binocular vision · eye health), **no numbers, no step cards**; then a 3-photo triptych, content width 1200, three 4:5 photos with 40 px gaps, each with a 2-line caption below; `sp-stagger` | **P5** refraction at the phoropter, **P6** slit-lamp exam, **P7** technician with retinal image on screen | ~200 words column + 3 captions |
| 6 | "One corrected case" (dome) | proof | **T2** polaroid pair left, text right | **P9** (week 0) accountant leaning toward monitor, **P10** (week 6) same woman, new glasses, upright | ~140 words: Case 1 (§6) as her account; numbers 55 cm → 65 cm screen distance, +0.75 near add, occupational lenses; ends "we can't promise the same result; we can measure." link "read three cases →" |
| 7 | "Fees" (dome) | practical | heading, then full-width (content 1200) price list, 6 rows: name + duration (left), price (right, nowrap); one-line note under it: "Frames from $160, lenses quoted after the exam. Same prices in every language." outline link to Fees | — | 6 rows + note |
| 8 | "Who will see you" (dome) | trust | T3 row (photo left) for the director + below the row a single typographic line of the other six names and roles, middot separated, centred, 0.9375rem, max-width 900 | **P11** Dr. Elena Marsh at the slit lamp, smiling, 2:3 | ~90 words director note signed |
| 9 | "Visit" (dome) | action | Columns 6/6 in 1200: left **P12** clinic front window from the street, 3:2; right: address, hours (definition list, not a table), phone, email, outline button "book an exam" | **P12** | ~60 words + hours |
| 10 | Footer | — | ground `#C9D0C9` (reference ground, 1 step darker than page), logo, 3 columns: visit, hours, pages; small copyright | — | — |

Home photo positions: P1, P2, P3, P4, P5, P6, P7, P9, P10, P11, P12 = **11** (≥ 8). None repeated on home. English word count target 650–800 (≥ 250, ≥ 3 narrative paragraphs).

### Order compared with recent themes
| # | Hitomi Vision | Aoba Veterinary | Megumi Pharmacy | Daichi Landscapes | Neiro Music |
|---|---|---|---|---|---|
| 1 | top/bottom halves: strip H1 above, framed photo window below | framed box on full-bleed photo | photo stage + intro | photo + staggered tiles + info card | photo pair + H1 |
| 2 | dome + 2:3 portrait row (adults) | narrative intro 720 | 3 portrait label cards | intro + photo | philosophy rail |
| 3 | mirrored portrait row (children) | numbered-panel cards on blurred band | people | sticky-media services | 5 sticky rows |
| 4 | full-bleed interlude photo (parallax) | signs list 2-col | wide 21:9 story | timeline on band | 4 text columns |
| 5 | dome + longform method column + triptych | 4 numbered method rows | numbered rows + photo | 3-project grid | teachers |
| 6 | polaroid case pair | full-bleed story band | notices | rings | parallax band |
| 7 | fees list | fees list | counter shelf | crew | fees |
| 8 | director portrait row + name line | director greeting | visit cover | close tiles | stories |
| 9 | visit, photo + hours | visit + timetable | — | — | visit |
Why not similar: no section uses cards, numbered rows, panels or bands; every section head is a centred heading inside a dome curve (none of the four has it); the problem is told through alternating 2:3 portraits with large empty ground; the proof is a polaroid pair with offset, not a story band. Aoba shares the narrative arc (signs → method → story → fees → director), so Hitomi breaks it visually: problem = two photo rows (not a list), method = prose column + triptych (not numbered rows), proof = polaroids (not a full-bleed band), and the full-bleed photo sits between problem and method, not after method.

---

## 4. Inner pages (11)
All page heads: T1 dome, title Newsreader 300 `xx-large` 2.75rem centred + Latin sub (lower-case, 0.15em), short lede 640 px centred. Pages end with a small "book an exam" outline button and hours line.
1. **About** (`/about/`): story since 2011 (3 paragraphs), why office workers and children, T2 founding pair (P16/P12), T3 director row P11, values as 3 short paragraphs (not cards).
2. **Eye Exams** (`/eye-exams/`): the 60-minute exam in prose: the five process stages (§6) as a longform column with Figtree small-caps lead terms; T3 rows P5 and P6 (mirror); what to bring; fee $120 line.
3. **Children's Vision** (`/childrens-vision/`): signs at school, how we test ages 5–15 (games, no reading needed), myopia follow-up every 6 months, T3 row P3, T2 case 2 pair **P13 + P17** (P3 is already the T3 row on this page); fee $95; after-school slots.
4. **Screen & Workplace Eyes** (`/screen-eyes/`): working distance, monitor height, 20-20-20, occupational lenses; T3 row P2; T2 case 1 (P9/P10); fee $85.
5. **Dry Eye & Contact Lenses** (`/dry-eye-contacts/`): tear film, lid care, daily lenses, fitting with two follow-ups; T3 row P14 mirrored; T2 case 3 (P15 + P18); fees $90 / $110.
6. **Frames & Lenses** (`/frames-lenses/`): frame room, fitting by Ines Kowalczyk, lens types in prose; T3 rows P8 and P13 mirrored; "frames from $160".
7. **Fees** (`/fees/`): full price table (6 items, same as home) + what is included per item + insurance receipts note + FAQ (6 Q&A as Details blocks). No reveal on the table.
8. **Case Stories** (`/cases/`): 3 cases, each in its own dome with a T2 pair alternating side: case 1 P9/P10, case 2 P13/P17, case 3 P15/P18. Each ~180 words; disclaimer "individual accounts, results differ".
9. **Our Optometrists** (`/optometrists/`): 7 people: T3 row P11 (Elena Marsh), T3 mirrored row P7 (Samuel Achebe, technician), then the remaining five as a typographic list (name Newsreader 1.5rem, role Figtree 0.8125rem, 2-line bio), single column 720, hairline separators. **No team grid.**
10. **Visit & Book** (`/visit/`): address, how to find (2nd floor, lift), hours definition list, children's slots, phone/email, a simple contact form (below the fold, no reveal), P12 T3 row, P16 waiting room photo.
11. **Journal** (`/journal/` posts index + 3 sample posts: "The 20-20-20 habit, measured", "Is my child's reading distance normal?", "Why eyes feel drier in winter offices"). Featured images **P16, P13, P14** respectively.
Plus: 404, search, privacy (text only).

---

## 5. Colour (sumire values, ±5% L for the high-key row)

| Role | Theme hex | Source token (a) | Change | Use | Share |
|---|---|---|---|---|---|
| Ground | `#D6DCD6` | `#C9D0C9` | +4.9% L (row: high-key, note: low-chroma off-white/stone ground) | page ground | ~72% |
| Dome | `#DEE3DE` | `#D0D6D0` | +5% L, keeps ground +2.9% L gap (ref +2.5%) | T1 domes | ~14% |
| Mat | `#E4E8E4` | `#CFD6D0` + shadow | +5% L over dome so the card reads | T2 mats | ~2% |
| Strip | `#EEF1EE` | hta white strips | sub-site role | H1 strips only | <1% |
| Footer ground | `#C9D0C9` | `#C9D0C9` | 0 | footer | ~5% |
| Text | `#3E4D43` | `#3E4D43` | 0 | headings, body | ~3% |
| Sub text | `#516258` | `#516258` | 0 | Latin sub-titles, captions | <1% |
| Nav | `#65736B` | `#65736B` | 0 | nav, meta | <1% |
| Line | `#8A938E` | `#8A938E` | 0 | buttons, window outline, hairlines | <1% |
| Accent | `#6A8A88` | none in ref (single hue); row hex | — | caption rules (40 px), link underline, hover fill of buttons (text turns `#F4F6F4`), focus ring | ≤ 3%, never a section ground |

Contrast: text on ground 7.0:1; sub text on ground 4.9:1; `#F4F6F4` on accent 3.9:1 → hover text 14px weight 500, fine for state. Not beige: the whole site is one sage-grey hue like the reference.
First-screen saturated share: cap 15% (rule), target ≤ 3%.

## 6. Type
- Families (theme.json `fontFamilies` with `fontFace`, woff2 in `assets/fonts/`, loaded in editor and front alike; OFL — verify licence files when building): **Newsreader** (variable opsz, 300/400 + italic 300/400) display + body; **Figtree** (300/400/500) UI, nav, labels, captions; **Noto Serif TC** and **Noto Serif JP** (400/500, subset woff2 made the Hokuto/Hada way, not the broken subset script) for zh-TW / ja headings and body. If style.css has any `:lang(` rule, copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and require it.
- Sizes (theme.json fontSizes): small 0.8125rem, base 1.0625rem, medium 1.25rem, large 1.5rem, x-large 2rem, xx-large 2.75rem, **huge clamp(2.75rem, 5.6vw, 4.75rem)** (max 4.75rem ≥ 4.25rem).
| Role | Face | Size | Weight | Line-height | Letter-spacing | Source |
|---|---|---|---|---|---|---|
| Hero H1 | Newsreader | huge | 300 | 1.12 | −0.01em | rule (ref hero has no H1) |
| Page head | Newsreader | xx-large | 300 | 1.3 | 0 | — |
| Section title | Newsreader | x-large 2rem | 400 | 1.6 | 0 | (b) h3 21.5px/1.6, scaled for Latin |
| Latin sub-title | Figtree | 0.875rem | 400 | 1.6 | 0.15em, lower-case | (b) sub 14px 0.15em |
| Body | Newsreader | base 1.0625rem | 400 | 2.2 | 0.02em | (b) 13.87px/2.3/0.1em, enlarged for Latin |
| Caption T3 | Newsreader italic | medium | 400 | 1.9 | 0 | (f) vertical column |
| Nav / button | Figtree | 14px | 400 | 1.6 | 0.06em, lower-case | (b) nav 14px |
| Small / meta | Figtree | small | 400 | 1.7 | 0.04em | — |
- zh-TW / ja: headings Noto Serif at 0.75× the English size, body line-height 1.85, letter-spacing 0.06em; fr / de `hyphens:auto`.

## 7. Spacing, radius, decoration (tokens (c), (d), (f))
- Section padding: `clamp(6rem, 11.6vw, 10.4rem)` top and bottom (166.6 px at 1440, token (c)); fees/visit 184 px → `clamp(6rem, 12.8vw, 11.5rem)`.
- Container 1360 (40 px gutters, token (c)); content 1200; text column 640; mobile gutter 20 px.
- Radius 0 on all images and cards; buttons radius 1px, border 1px `#8A938E`, padding 6×12 (header) / 10×20 (large), Figtree 14px. Hover 0.3s `cubic-bezier(.215,.61,.355,1)` (token (g) hover): border and fill turn accent.
- Hairlines 1px `#8A938E` at 50% opacity between price rows and list rows.
- Decoration list (nothing else): domes, window outline, H1 strips, faint *clarity* word, 40 px accent rules before T3 captions, nav "+", polaroid shadow. No icons, no blobs, no illustrations.

## 8. Images (high-key, no radius)
| Image | Aspect | Desktop size | Treatment | Token |
|---|---|---|---|---|
| Hero window P1 | ~2.9:1 visible (1360×470 of a 3:2 source) | 1360 wide | Cover bg, parallax 8%, outline offset 12 | (e) hero full-bleed → framed per row |
| T3 portraits | 2:3 | 427×640 | radius 0, `sp-reveal--wipe` | (e) 427×651 |
| Interlude P4 | 16:9 source in 100vw×720 window | full-bleed | parallax 6% | (e) interlude −6% |
| Triptych | 4:5 | 373×466 | radius 0, stagger | — |
| Polaroids | 1:1.02 photo in 305×(305+88) card | 305 wide | mat, shadow | (e) 305×370 |
| Visit P12 | 3:2 | 580×387 | radius 0 | (e) salon large |

---

## 9. Responsive requirements (hard)
- 390 px first screen: no vertical text, no absolutely positioned labels over text, no backdrop word; H1 strips may wrap but never overlap the lede. auto-gates "mobile overlap" must pass.
- Price list (home and Fees): at ≥782 px it spans the full content width (1200 or 100% of the container, never a narrow column); each row is a flex row: left name (Newsreader 1.25rem) + duration (Figtree small, sub text), right price `white-space:nowrap; text-align:right; flex:0 0 auto; padding-left:24px` (Newsreader 1.25rem tabular-nums). If implemented as a `<table>`: `width:100%; table-layout:auto`, price column `nowrap; text-align:right; width:1%`. Nothing may be clipped at 800 and 1280.
- Every table (prices, hours if a table) stacks on < 600 px: each row becomes a block (name on one line, price on the next line right-aligned or after the name), no horizontal scroll.
- T3 rows, T2 pair and the triptych collapse as described above; no horizontal overflow at 390 (domes use `overflow-x:clip` on the section).
- Hours on home are a definition list (not a table).

## 10. Photo list (18) and STYLE
**STYLE** (append to every prompt, one image per call): `high-key documentary photograph, bright soft daylight from large windows, white and pale sage-grey interior, low saturation, gentle film grain, natural skin tones, calm unposed moment, modern international optometry clinic, diverse adults and children, 50mm lens, shallow depth of field, no text, no logos, no brand names, no signage, no Japanese elements`
| ID | Subject / composition | Used on (page → block) | Home |
|---|---|---|---|
| P1 | Optometrist (woman, 40s) gently placing a trial frame on a seated man's face, both in profile, wide 3:2, subjects left 40%, empty bright wall right | Home hero window | ✔ |
| P2 | Woman in her 30s at a laptop, pressing the bridge of her nose, eyes closed, vertical 2:3 | Home row 2; Screen Eyes T3 | ✔ |
| P3 | Girl about 9 reading at a desk, book held close, vertical 2:3 | Home row 3; Children's T3 | ✔ |
| P4 | Empty bright exam room, phoropter on its arm, chair, chart on far wall (no readable letters), wide 16:9 | Home interlude; Eye Exams optional page-head Cover | ✔ |
| P5 | Patient behind a phoropter, optometrist adjusting dials, 4:5 | Home triptych; Eye Exams T3 | ✔ |
| P6 | Slit-lamp examination, patient chin on rest, close 4:5 | Home triptych; Eye Exams T3 mirror | ✔ |
| P7 | Technician (man, 30s, Black) beside a retinal camera, a soft abstract retina image on screen, 4:5 / 2:3 crop safe | Home triptych; Optometrists T3 | ✔ |
| P8 | Tray of trial lenses and a trial frame on white linen, top-down, 2:3 | Frames & Lenses T3 | |
| P9 | Woman (40s, accountant) leaning toward a monitor, slight squint, square | Home polaroid A; Screen Eyes T2; Cases | ✔ |
| P10 | Same type of woman, new thin metal glasses, sitting upright at the same desk, relaxed, square | Home polaroid B; Screen Eyes T2; Cases | ✔ |
| P11 | Director (woman, 50s) at a slit lamp, turned to camera, soft smile, 2:3 | Home people row; About; Optometrists | ✔ |
| P12 | Clinic front window from the street, plants, pale frame display, no signage, 3:2 | Home visit; About T2; Visit T3 | ✔ |
| P13 | Boy about 8 trying frames at a pale wood frame wall with a parent, 2:3 | Frames T3 mirror; Children's T2; Cases; Journal post 2 | |
| P14 | Optometrist teaching a young man to insert a contact lens, close, 2:3 | Dry Eye T3; Journal post 3 | |
| P15 | Man in his 30s with a warm compress eye mask in a bright treatment chair, square | Dry Eye T2; Cases | |
| P16 | Bright waiting area, pale sofa, side table with plant, empty, 3:2 | About T2; Visit; Journal post 1 | |
| P17 | Same boy as P13 type reading the board in a classroom, new glasses, square | Children's T2; Cases | |
| P18 | Man (30s) at a desk, eyes comfortable, glass of water, laptop, evening light, square | Dry Eye T2; Cases | |
(18 total; all ≤ 300 KB, ≤ 2000 px, no cut-outs.)

## 11. Fixed facts (all pages, all languages)
- **Prices (USD, 6)**: Comprehensive eye exam, 60 min **$120** · Children's vision exam (ages 5–15), 50 min **$95** · Screen-work eye assessment, 45 min **$85** · Dry eye evaluation, 40 min **$90** · Contact lens fitting (incl. 2 follow-ups) **$110** · Follow-up check within 6 months, 20 min **$40**. Frames from **$160**.
- **People (7)**: Dr. Elena Marsh, OD — founder & director (adults, binocular vision) · Dr. Tomas Reyes, OD — children's vision & myopia follow-up · Dr. Priya Nair, OD — dry eye & contact lenses · Dr. Jonah Whitfield, OD — screen & workplace vision · Ines Kowalczyk — optician, frames & lens fitting · Samuel Achebe — clinical technician, imaging · Hana Lindgren — front desk & scheduling.
- **Cases (3)**: (1) M., 46, accountant — 4 pm headaches; screen at 55 cm, near add +0.75; occupational lenses for 50–70 cm, screen moved to 65 cm; at the 6-week check she reported afternoons without headaches. (2) L., 9, primary school — board blur, skipped lines; mild myopia −1.25 both eyes; first glasses, front-row seat, follow-up every 6 months. (3) D., 31, software engineer — burning eyes, contacts uncomfortable by evening; short tear break-up time; lid care routine, daily lenses, 20-20-20 breaks; comfortable through the workday at 8 weeks. Always "individual account, results differ".
- **Location**: 2nd floor, 14 Linden Row, Northgate (lift from the street door). Founded 2011. Three exam rooms + frame room.
- **Hours**: Mon–Fri 10:00–19:00 · Sat 9:00–16:00 · Sun & public holidays closed. Children's after-school slots Mon–Fri 15:30–18:30 and Sat 9:00–12:00.
- **Process (one 60-minute exam, 5 stages)**: 1 history & symptoms (10 min) → 2 refraction (15 min) → 3 binocular vision & working distance (10 min) → 4 eye health & tear film imaging (10 min) → 5 explanation & plan (15 min). Follow-up within 6 months $40.

## 12. Scroll effects (sp-scroll; max 3 types per page; hero none)
| Effect | sp class | Where | Source | Source trigger / time / easing | Theme values |
|---|---|---|---|---|---|
| Rise | `sp-reveal sp-reveal--up` | every dome heading group, T3 captions + paragraphs, case text, visit text | sumire `data-scroll-trigger=top` | IO rootMargin bottom −20%, 1.0s, cubic-bezier(.165,.84,.44,1), 8% | `--sp-dist:24px; --sp-dur:1s; --sp-ease:cubic-bezier(.165,.84,.44,1)` |
| Image wipe | `sp-reveal sp-reveal--wipe` | T3 portraits (P2, P3, P11), polaroid cards, triptych photos, visit photo | sumire mask reveal (brush upward) / hta clip wipe | IO, 1.8s, cubic-bezier(0,.4,.48,1) | `--sp-dur:1.6s; --sp-ease:cubic-bezier(0,.4,.48,1)` (clip on the child, as sp-scroll does) |
| Stagger | `sp-stagger` (parent) | triptych (3), polaroid pair (2), name line on Optometrists | hta mask stagger 116 ms | IO, step 116 ms | sp default 0.12s step |
Not animated: hero, price list, hours, form, footer, legal text. Interlude and hero use parallax only.

## 13. Parallax (required)
| Where | Layer | Foreground | `--sp-par` | Reference motion |
|---|---|---|---|---|
| Home hero bottom half `hv-window` (Cover with `sp-parallax`) | P1 as Cover background image | none inside the photo (H1 is in the top half, never inside the moving layer); caption outside the frame | desktop **8%**, mobile **5%** (`@media (max-width:781px){.hv-window{--sp-par:5%}}`) | sumire hero is static; we take the scrub feel of sumire interlude (yPercent 0→−6, linear, `top bottom`→`bottom top`) |
| Home interlude (block 4, Cover `sp-parallax`) | P4 Cover background | none | desktop **6%** (token (g) −6%), mobile **5%** | sumire interlude parallax, scrub linear |
| Inner pages: Eye Exams and About page heads may add a 21:9 Cover of P4 / P16 with `sp-parallax` 6% | | | | |
Dome scrub (sumire scaleX 1→1.15, y −10%) has no sp-* equivalent; domes stay static (do not hand-roll). Verify with `check-parallax.mjs` (≥ 6 px desktop and mobile, 0 under reduced motion).

## 14. Similarity table (target ~80%)
| Dimension | sumire (token) | Hitomi Vision |
|---|---|---|
| Ground | `#C9D0C9` (a) | `#D6DCD6` (+4.9% L) |
| Dome fill / gap | `#D0D6D0`, +2.5% L (a)(f) | `#DEE3DE`, +2.9% L |
| Text / sub / nav / line | `#3E4D43` / `#516258` / `#65736B` / `#8A938E` | same |
| Accent | none | `#6A8A88` ≤ 3% |
| First-screen saturation | 0.0% | ≤ 3% target |
| Body | serif 13.87px / 2.3 / 0.1em | Newsreader 17px / 2.2 / 0.02em |
| Section title | 21.5px / 1.6, centred + Latin sub 14px 0.15em lower-case | 32px / 1.6 centred + Figtree 14px 0.15em lower-case |
| Nav | sans 14px lower-case 0.06em | Figtree 14px lower-case 0.06em |
| Section padding | 166.6 px | clamp(6rem, 11.6vw, 10.4rem) = 166 px |
| Gutters / container | 40 px / 1360 | 40 px / 1360 |
| Radius | 0 images, 1px button | same |
| Button | 1px `#8A938E`, 6×12 / 10×20 | same |
| Section portrait | 427×651 2:3 at x=293 / 770 | 427×640 2:3 at x=293 / 770 |
| Polaroid | 305×370, mat 18 px, offset 110 px, soft shadow | 305 wide, 18/70 mat, 110 px offset, `0 2px 10px rgba(0,0,0,.08)` |
| Dome | 1440×1149 ellipse, crest −120 px | 118vw×1150, crest −120 px |
| Interlude | full-bleed, parallax −6% | full-bleed 720, `--sp-par` 6% |
| Hero | full-bleed dark photo | framed window, high-key (row: framed-window, high-key) |
| Rise | 1.0s, cubic-bezier(.165,.84,.44,1), 8% | 1s, same curve, 24 px |
| Image reveal | mask 1.8s cubic-bezier(0,.4,.48,1) | wipe 1.6s same curve |
| Hover | 0.3s cubic-bezier(.215,.61,.355,1) | same |

## 15. Home acceptance checklist
- [ ] First screen 1440: header overlay over the ground; H1 three lines on pale strips at ≥ 4.25rem; framed P1 window with 12 px outline below; saturated pixels ≤ 15% (`check-first-screen.py`), expected ≤ 3%.
- [ ] 390: no vertical text, no overlapping labels, no backdrop word; window kept, parallax 5%.
- [ ] Every section from 2 to 9 has a visible dome curve behind a centred heading + Latin lower-case sub-title.
- [ ] Rows 2 and 3 are 2:3 portraits alternating left (x≈293) and right (x≈770) with captions; Latin never rotated.
- [ ] Polaroid pair: thick bottom mat, 110 px offset, shadow, captions in the mat.
- [ ] Interlude full-bleed P4 with parallax; hero window parallax; `check-parallax.mjs` passes desktop + mobile, reduced motion 0.
- [ ] ≥ 3 sp-reveal elements below the fold hide then appear; nothing transparent after scrolling to the bottom; hero has no reveal.
- [ ] Price list: 6 items exactly as §11, full width at 800 and 1280, prices right and never clipped; stacked on mobile.
- [ ] 11 photo positions, no repeats, all from the STYLE string, no text/logos/cut-outs.
- [ ] Copy 650–800 words, ≥ 3 narrative paragraphs; no guarantees, awards, real media or brands; case framed as individual account.
- [ ] Fonts from theme.json fontFace; editor and front show the same faces (`check-editor-fonts.mjs`).
- [ ] auto-gates en `1 1` pass; no horizontal overflow at 390/1280.
