# Neiro Music: design spec (stage 1, binding for implementation)

Slug `neiro-music`, private music school for children and adult beginners (type education, page_structure **day-schedule**). Row b9-4: split-screen, hero photo-left-text-right, top-bar nav, real low-key photography, palette grape-grey `#705868` as the one muted accent.
References (see `reference.md`, measured in `reference-tokens.md`): **R1 Izanami** https://izanami-official.com/ (S5 schools, education, medicine and welfare, primary, ~80% similarity target) and **R2** https://bumpofchicken-30th.com/ (S5 bands, music and labels, one small detail only). Borrow structure, technique, colour relationship and measured numbers. No copy, photos, logo or whole-page layout from either site.

Fixed brand facts (every page, all five languages, never vary):
- **Neiro Music**, private music school, founded **2011** by pianist **Ilse Marchetti**. Address **Lindenhof 14, 9000 Ghent, Belgium** (a converted print works, two floors: 6 teaching rooms + the 60-seat **Long Room** for recitals). Currency **EUR** in every language.
- Hours: **Mon–Fri 14:00–21:30, Sat 09:00–18:00, Sun closed**. Office/phone **Mon–Fri 13:00–18:00**. 30 teaching weeks per year (Sept–June), 2 pupil recitals (December, June).
- Ages: from **5** (piano, violin), adults any age. **240** current pupils, **8** teachers (do not inflate; no "guarantee", no awards, no real media/brands/people).

---

## 1. Signature techniques (three, obvious at a glance; do not "soften")

### T1. Overlapping portrait pair in the hero (R1 first screen after intro, `ref/iz-photopair.png`; token e "Hero big/small portrait")
- R1: on near-black ground, a large 2:3 portrait 468×720 sits at the right (x900–1368, top y47, bleeds under the nav row); a smaller 2:3 photo 252×376 overlaps its upper-middle (x1044–1296, y0–376) so it **breaks the top edge** of the big photo. Three-line serif heading on the left, third line indented ≈225px, then a body paragraph.
- Ours (row says photo-left-text-right, so **mirror it**): at 1440, content 72–1368.
  - Big photo **P01** (teacher and pupil at a grand piano, low-key): 2:3, **468×702** (width `min(32.5vw, 468px)`), left x=72, top = 47px below nav top (bleeds up under the nav bar, nav is transparent over ink).
  - Small photo **P02** (close-up: child's hands on the keys, teacher's hand beside): 2:3, **252×378**, positioned at x=216–468 (overlapping the big photo's upper-middle, offset 144px from its left edge), top **−48px relative to the big photo top** so it breaks the big photo's top edge. 0 radius, no border, no shadow (token d). `z-index` above the big one.
  - Text column starts at x=720 (50%), width ≤ 650px: H1 Crimson Pro 400, three lines, **third line indented 225px** (`padding-left: 225px` on a `<span class="nm-indent">` displayed block), then body 0.9rem/2.4 (token b body), then text link "See a teaching day" with the 72×1px line (T3 link style).
- Must not be diluted: the small photo must overlap AND rise above the big photo's top edge by ≥ 40px; both must be 2:3 portraits, square corners; the third-line indent must be visible (≥ 180px desktop).
- Mobile (390): stack — big photo full width minus 48px (left 24px), small photo 45% width overlapping its bottom-right corner (bottom −32px, right 0), static flow (`position: relative` inside the figure group; no absolutely positioned text). Text below, indent reduced to 2.5rem.

### T2. Stacked sticky day rows = "A teaching day" (R1 Projects rows, `ref/scroll-iz-sticky-*.png`; tokens c "Sticky row", f "Row index numeral", d "hairline")
- R1: three rows each 675px tall, `position: sticky; top:0`, the next row slides over the previous; each row = vertical rail label at x72, title + tagline + paragraph in a 324px column at x400, 324×495 portrait at x1044, 1px hairline x72–1044 at the row bottom, numeral "01/02/03" bottom-left at x72.
- Ours: the page_structure "day-schedule" as **five** sticky rows (one per time of day). Each row: ground `#0D0B06` (opaque, so it covers the previous row), height **675px** desktop, `position: sticky; top: 0` (pure CSS, no JS, no sp class on the sticky element itself).
  - Left x=72: the **lesson time as numeral** in place of "01" — Outfit 400 1.125rem (16.2px token → 18px), ls .08em, e.g. `15:30`, bottom-left at row bottom −40px. Above it at x=72 the vertical rail label (T3) `A TEACHING DAY`.
  - Text column x=400, width 324px (token c): row title Crimson Pro 400 **2.8125rem/1.1** (45px token), tagline Crimson Pro 400 1.125rem/1.8 (18px token), paragraph 0.9rem/2.4 (14.4px token), text link with 72px line.
  - Photo column x=1044, **324×495** (0.655) portrait, square corners, top-aligned with title (row padding 90px top/bottom, token c).
  - Hairline 1px `rgba(217,215,212,.18)` from x=72 to x=1044 at row bottom (stops at photo column).
  - Rows: 15:30 First lessons (P05) · 16:45 Strings room (P06) · 18:00 Theory & ear table (P07) · 19:15 Adult beginners (P08) · 20:30 Evening ensemble (P09).
- Must not be diluted: rows must really stack (sticky, opaque, the next covers the previous); photo column must be 324×495 portrait on the right; hairline stops at the photo column; times as the numerals. Do not turn it into a timeline with dots, cards or a grid.
- Mobile/tablet (<782px): no sticky (plain stacked rows), photo above text at 100% width aspect 2:3 max-height 70vh, time numeral above title, hairline full width.

### T3. Vertical rail label + line-link (R1 rail "PHILOSOPHY/PROJECTS/COMPANY", tokens b "Vertical rail label", f; text link "View …" with 72×1px line)
- Ours: every home section except hero has `p.nm-rail`: Outfit 400 **1rem (16px)**, `writing-mode: vertical-rl`, uppercase, ls **0.2em**, colour `#D9D7D4`, at x=72 (left gutter column 72–90), `position: sticky; top: 120px` inside its section (desktop ≥1024 only). Labels: PHILOSOPHY, A TEACHING DAY, INSTRUMENTS, TEACHERS, FEES, PUPILS' STORIES, VISIT. zh-TW/ja keep the English label (Latin caps), heading translated.
- Text links everywhere: 72×1px line (`#D9D7D4`), 17px gap, Crimson Pro 1.125rem (token b "Text link").
- Mobile (<1024): the rail label becomes a **horizontal** small-caps label above the heading (writing-mode horizontal, 0.75rem, ls .2em). **Never vertical text at 390px**, never absolutely positioned.
- Must not be diluted: desktop label truly vertical, at the far left gutter, separate column from the text (text starts ≥ x=252).

### R2 detail (supporting, not counted): small 1px crosshair ticks `+` (12px, `#D9D7D4` 40%) at the four corners of the parallax band (§3 block 6) only.

### Continuation to inner pages (required)
| Page | T1 overlapping pair | T2 sticky rows | T3 rail + line link |
|---|---|---|---|
| About | page head: big P03 + small P04 overlap (same geometry, smaller: 360×540 + 200×300) | 3 sticky rows "2011 / 2016 / today" history | yes |
| Lessons & Instruments | – | 4 sticky rows (piano, strings, voice, guitar) with P05, P10, P15, P14 | yes |
| A Week at Neiro (schedule) | – | full Mon–Sat as sticky rows (6 rows, time+room) | yes |
| Teachers | page head pair P14 + P15 | each teacher a row (8 rows, no sticky on >6 — sticky only first 4) | yes |
| Fees & Enrolment | – | – | yes + price list (§6) |
| Recitals & Ensembles | head pair P09 + P16 | 2 rows (December, June recitals) | yes |
| Stories | – | 3 story rows (sticky) | yes |
| Visit / Contact, FAQ, News | – | – | yes |
T1 on 3 inner page heads (About, Teachers, Recitals), T2 on 6 inner pages, T3 on all 10 → the signature set continues on ≥ 4 inner pages (T2 and T3 each ≥ 4).

---

## 2. Colour (R1 tokens a; ±5% lightness max)
| Role | Hex | Share (any viewport) | Source token |
|---|---|---|---|
| Ground (base) | `#0D0B06` (R1 `#0A0801` +1.5% L, slightly warmer to read as ink on screens) | 60–85% | a Ground |
| Lifted ground (price panel, footer, form fields) | `#17140E` (+4% L) | ≤ 15% | a Ground variant |
| Text / lines | `#D9D7D4` | 5–8% | a Text/line |
| Headline white | `#FFFFFF` | < 1% (H1 + logo only) | a Pure white |
| Accent grape-grey | `#705868` (row hex) | ≤ 3%: 4px nav dots, active nav underline, price numerals' small "€", form focus ring, button border | row (R1 has no UI accent; photo colour only) |
| Accent hover | `#8A7282` | button hover fill | derived |
| Muted text | `#9C9893` | captions, meta | between text and ground |
| Hairline | `rgba(217,215,212,.18)` | lines | d |
Why ink not off-white: R1 is entirely ink; the row allows "ink" ground and photo_direction low-key. Palette hex never full-bleed. **First-screen saturated pixels ≤ 5%** (gate 15%; R1 0.0%). Contrast: text `#D9D7D4` on `#0D0B06` ≈ 13:1; accent only on non-text or ≥ 18px.
theme.json palette slugs: `ink`, `ink-2`, `bone` (#D9D7D4), `white`, `grape` (#705868), `grape-light`, `muted`.

## 3. Type (row fonts; roles mapped from R1 token b)
| Role | Family | Size desktop 1440 | Weight | LH | LS | Source |
|---|---|---|---|---|---|---|
| H1 hero (3 lines) | Crimson Pro | `clamp(2.75rem, 5.2vw, 4.5rem)` → **4.5rem** preset `xx-large` | 400 | 1.18 | 0 | R1 heading 45px ×1.6 (hero must be ≥4.25rem) |
| H2 section (3 lines max) | Crimson Pro | `clamp(2.25rem, 3.6vw, 3.125rem)` (45px) | 400 | 1.4 | 0 | b Section heading |
| Row title | Crimson Pro | 2.8125rem | 400 | 1.1 | 0 | b Row title |
| Tagline / lead | Crimson Pro | 1.125rem | 400 | 1.8 | 0 | b Row tagline |
| Body | Crimson Pro | 1rem (R1 14.4px is too small for Crimson's x-height; 16px) | 400 | 2.2 (R1 2.4, -0.2 for longer copy) | 0 | b Body |
| Nav / buttons / rail / numerals | Outfit | 0.8rem (12.6px) nav, 1rem rail, 1.125rem time | 400 | 1 | .08em nav / .2em rail | b Cinzel roles |
| Small meta | Outfit | 0.75rem | 400 | 1.6 | .12em | — |
Max preset 4.5rem (≥ 4.25rem ✓). Fonts OFL (Crimson Pro, Outfit, Noto Serif TC/JP) — verify licence files.
**Loading:** only theme.json `fontFamilies` + `fontFace` (woff2 in `assets/fonts/`), same in editor and front. zh-TW: Noto Serif TC subset (headings + body), ja: Noto Serif JP subset; CJK heading size 0.75× Latin, body line-height 1.85. Any `:lang(` rule ⇒ copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it. fr/de `hyphens: auto`. Must pass check-editor-fonts.mjs (en, zh-TW).

## 4. Home blocks (order, desktop 1440; container 72–1368 = 1296px, token c)
| # | Block | Purpose / layout | Photos | Copy |
|---|---|---|---|---|
| 0 | Header (top-bar) | logo wordmark "Neiro" Crimson Pro 1.5rem left x72; nav right (Outfit .8rem caps, ls .08em, 4px grape dot above active item, token f Dots); transparent over ink, sticky solid `#0D0B06` after scroll via CSS only (`position: sticky`) | – | 6 items + "Book a trial" outline button (1px bone border, 0 radius) |
| 1 | **Hero — T1** | photo pair left, H1 right (x720) with 3rd-line indent, lead 2 lines, line-link | P01, P02 | H1 "Where a first note / becomes a lifelong / way of listening" + 40 words |
| 2 | Philosophy (R1 long dark run, shortened) | rail PHILOSOPHY; text column x=252 width 650: H2 3 lines + 2 paragraphs; right: **one** 324×495 portrait P03 at x1044, top offset +160px (staggered lower than text) | P03 | 90 words, 2 paras |
| 3 | **A Teaching Day — T2** | intro line (H2 "From the first lesson / to the evening ensemble") then 5 sticky rows | P05–P09 | 5 × (title + tagline + 45 words) |
| 4 | Instruments | rail INSTRUMENTS; 4 text-only columns with hairline tops (piano, strings, voice, guitar; ages + lesson lengths), each with line-link → Lessons | – (deliberately photo-free pause) | 4 × 30 words |
| 5 | Teachers | rail TEACHERS; left text 4/12; right 3 portraits 2:3 324px wide in a row with 24px gaps, name + instrument under each (NOT a 4-person grid; 3 named, link to all 8) | P14, P15, P04 | 60 words + 3 captions |
| 6 | **Parallax band (R1 T4 "Who we are")** | full-bleed `sp-parallax`, photo P16 (Long Room recital, warm lamps), top gradient 0→60% ink over first 35% (token d), centred text column **360px** (token c, x=540–900): H2 2 lines + 40 words + line-link → Recitals; crosshair ticks (R2) in corners | P16 | 40 words |
| 7 | Fees | rail FEES; full-width price list on `#17140E` panel (§6 rules), 6 items | – | 6 rows + 1 note line |
| 8 | Pupils' stories | rail PUPILS' STORIES; 3 stories as rows (not cards): left quote in Crimson Pro 1.5rem italic, right 324×216 landscape photo 3:2, hairline between | P10, P11, P12 | 3 × 50 words |
| 9 | Visit | rail VISIT; left: address, hours table-free list, phone, email; right: P13 (entrance/Long Room door) 3:2 648px wide; under it CTA "Book a free trial lesson" | P13 | 50 words |
| 10 | Footer | `#17140E`, 4 columns text, wordmark large Crimson Pro 3.125rem bone at 40% | – | |
Home photo positions: P01, P02, P03, P05, P06, P07, P08, P09, P14, P15, P04, P16, P10, P11, P12, P13 = **16 (≥ 8 ✓)**, no repeat on the page. Home copy ≥ 450 English words (≥ 250 ✓), ≥ 3 narrative paragraphs.

### First screen (1440×900)
Ink ground 100%; nav top; big photo P01 left x72–540, small P02 overlapping and rising above it; H1 at right x720 vertically centred ≈ y260–520; lead + line-link below; no table, form, search, centred giant text or badge. Photos are low-key (dark warm), saturated pixels ≤ 5%. At 390: nav (logo + MENU) → photo pair (in flow) → H1 `clamp` 2.75rem → lead. No vertical text, no absolutely positioned labels over text.

### Similarity to recent homes (must not repeat)
| Theme | Hero | Block order essence | Neiro difference |
|---|---|---|---|
| Kotoba | top-half split + cropped wordmark | gateway → CEFR scale → parallax arcs → circular portraits → fee table → stories | overlapping 2:3 pair breaking top edge on ink; sticky day rows; no wordmark crop, scales, arcs, circles |
| Oto Audio | straddled H1 over photo + strip | categories → comparison table → 3:4 trio → parallax → split → prices | no straddled H1, no comparison table, no trio |
| Ito HR | looping photo row + pill | service index → staggered pair → blurred parallax cards → fees → people band | no loop, no blur cards; parallax is one plain band with centred 360px column |
| Kaiten | cut-frame hero | course strip → wave 5-step timeline → stone price panel → mosaic → parallax → tutors | no strip/timeline/mosaic; schedule = sticky full-height rows |
Also differs from Hibi (light, dot labels, rounded straddle). Neiro is the only dark-ink theme with sticky stacking.

## 5. Inner pages (10; all start with rail label + H2 page head, ink ground)
1. **About** (`/about/`) — T1 pair head (P03 + P04), founder story 2011, 3 sticky history rows (2011 first room, 2016 Long Room opened, today 8 teachers), values list.
2. **Lessons & Instruments** (`/lessons/`) — 4 sticky rows (Piano P05, Violin & cello P10, Voice P15, Guitar P14): ages, lesson lengths 30/45/60 min, what a first term covers.
3. **A Week at Neiro** (`/schedule/`) — the day-schedule core: Mon–Sat as 6 sticky rows (day + time range + rooms + groups), plus an accessible stacked list version for mobile.
4. **Teachers** (`/teachers/`) — 8 named teachers as rows (portrait 2:3 left on even, right on odd, max 4 sticky), instrument, years teaching, short note.
5. **Fees & Enrolment** (`/fees/`) — full price list (§6), what's included, trial lesson, enrolment steps (§7 as numbered inline text, not a step grid), cancellation.
6. **Recitals & Ensembles** (`/recitals/`) — T1 head (P09 + P16), December and June recitals as 2 rows, Friday evening ensemble.
7. **Pupils' Stories** (`/stories/`) — 3 stories as sticky rows with photos.
8. **FAQ** (`/faq/`) — 10 Q&A in `<details>` hairline list.
9. **Visit & Contact** (`/visit/`) — address, hours, map placeholder (photo P13, no iframe), contact form (no sp-reveal).
10. **News** (blog index + 3 posts: term dates, June recital, new cello teacher).
+ Privacy. ≥ 9 reachable pages ✓.

## 6. Responsive and table rules (auto-gates)
- 390px first screen: no `writing-mode: vertical`, no absolute labels over text; rail labels horizontal below 1024px; photo pair in normal flow.
- **Price list ≥ 782px: full container width (1296 at 1440, 100% at 800)**, two columns: name+description left (flex 1), price right `white-space: nowrap; text-align: right; min-width: 9ch`; never inside a narrow column; no overflow at 800 and 1280. Rows separated by hairline, padding 20px 0. Implement as a list/grid of rows, not `<table>`; if any `<table>` is used anywhere it gets `display:block` stacking under 782px (each cell a line, label via `data-label`).
- No horizontal overflow at 390/1280 (photo pair offsets must stay inside the container on mobile: use negative top margin, not negative left/right).
- Sticky rows only ≥ 782px.

## 7. Fixed numbers (identical on home, inner pages, five languages; EUR)
**Fees (6):** Trial lesson 30 min — **€0** · Children's piano/strings 30 min weekly, per term (10 lessons) — **€290** · 45 min weekly, per term — **€420** · Adult beginners 45 min weekly, per term — **€450** · Ear & theory group (max 6), per term — **€140** · Friday evening ensemble, per term — **€120**. Registration fee once per year **€35**; sibling discount 10% (stated as text, not a price row).
**People (8):** Ilse Marchetti (founder, piano) · Tomás Rivera (guitar) · Amara Okonkwo (voice) · Léa Fournier (violin) · Jonas Weber (cello) · Priya Raman (piano, adult beginners) · Hannah Lindgren (ear & theory) · Marco Bellini (ensemble director). Office: Sofie De Smet (not counted as teacher).
**Stories (3):** Noor, 7, started violin, first played in the December recital after one term · Pieter, 58, adult piano beginner, now plays duets with his granddaughter · The Haddad sisters (10 and 13), piano and cello, play together in the Friday ensemble. (No outcome promises.)
**Teaching day (home T2):** 15:30 First lessons · 16:45 Strings room · 18:00 Ear & theory table · 19:15 Adult beginners · 20:30 Friday evening ensemble (Fri only; other days the last lessons end 21:30).
**Enrolment flow (4):** book free trial → meet a teacher (30 min) → choose instrument and weekly slot → start the term (registration €35).

## 8. Photos (16; one STYLE; low-key per row photo_direction; no Japanese elements, diverse people, no text/logos/brands, no cut-outs; ≤ 300 KB, ≤ 2000px)
STYLE string (use verbatim for every image):
`low-key documentary photograph, warm tungsten lamp light falling into deep near-black shadows, muted warm palette of umber, bone and faint dusty mauve, natural film grain, 50mm lens, shallow depth of field, quiet contemporary European music school interior with plaster walls and dark oak, diverse people, candid and unposed, no text, no logos, no brand names, no visible screens`
| # | Subject / composition | Ratio | Used (page → block) | Home |
|---|---|---|---|---|
| P01 | teacher (woman, 50s) beside a girl (8) at a black grand piano, side light, lots of shadow | 2:3 | Home hero big | ✓ |
| P02 | close-up: child's hands on keys, adult hand guiding, keys catching light | 2:3 | Home hero small | ✓ |
| P03 | empty teaching room, upright piano, window light, chair, music stand | 2:3 | Home philosophy; About head big | ✓ |
| P04 | founder portrait (woman, 50s, grey hair) leaning on piano lid, low light | 2:3 | Home teachers; About head small | ✓ |
| P05 | boy (6) and teacher at piano, first lesson, sheet with large notes | 2:3 | Home T2 15:30 | ✓ |
| P06 | girl with violin and teacher adjusting bow arm, dim strings room | 2:3 | Home T2 16:45 | ✓ |
| P07 | small group (4 kids) round an oak table with manuscript paper and a metronome | 2:3 | Home T2 18:00 | ✓ |
| P08 | adult man (50s) practising piano, reading glasses, lamp | 2:3 | Home T2 19:15 | ✓ |
| P09 | evening ensemble: cello, violin, guitar, piano in a lamp-lit room | 2:3 | Home T2 20:30; Recitals head big | ✓ |
| P10 | young girl holding violin case at doorway, smiling softly | 3:2 | Home story 1; Lessons row Violin & cello | ✓ |
| P11 | grandfather and granddaughter playing a duet | 3:2 | Home story 2; Stories row | ✓ |
| P12 | two sisters, piano and cello, rehearsal | 3:2 | Home story 3; Stories row | ✓ |
| P13 | school entrance hall at dusk, warm light from inside, coat hooks, instrument cases | 3:2 | Home visit; Visit page | ✓ |
| P14 | guitar teacher (man, 30s) mid-demonstration, low light | 2:3 | Home teachers; Teachers head big | ✓ |
| P15 | voice teacher (woman, 40s, Black) at piano singing with a teen | 2:3 | Home teachers; Teachers head small | ✓ |
| P16 | the Long Room: 60 chairs, grand piano on low stage, warm lamps, wide | 16:9 (2000×1125) | Home parallax band; Recitals head small (crop) | ✓ |
Inner pages reuse across pages is allowed, never twice on one page (on Lessons use P05 piano, P10 violin, P15 voice, P14 guitar; on Stories P10–P12). Read every image; regenerate on text, logos, broken faces or hands.

## 9. Scroll effects (stage-a candidates → sp-scroll; hero gets no reveal)
| Effect (R1 source) | sp class | Where | Values (token g) |
|---|---|---|---|
| Per-line text rise (GSAP, trigger ≈95% viewport, 1.0–1.3s, stagger .07, quart.out, 34.56px) | `sp-stagger` on the text Group + `sp-reveal sp-reveal--up` on heading, tagline, paragraph, link | Philosophy text, each T2 row text column, Instruments 4 columns, Teachers text, Visit text | `--sp-dist: 28px` (cap 30), `--sp-dur: 1.2s`, `--sp-ease: cubic-bezier(.25,1,.5,1)`; stagger step 0.12s (library fixed) |
| Photo shader reveal (WebGL, 1.1–2s) | `sp-reveal sp-reveal--wipe` (clip on child) | T2 row photos, Teachers portraits, Story photos, Visit photo | 1.1s `cubic-bezier(.77,0,.175,1)` (library default) |
| Background photo drift behind a fixed text block (ScrollTrigger scrub 1500→3300px) | `sp-parallax` | Block 6 band (required parallax) | see below |
| Sticky stacked rows | plain CSS `position: sticky` (no sp class) | T2 | 675px travel |
Not used: Lenis, sp-count, sp-marquee. No reveal on hero, price list, form, legal text. Children of sticky elements may reveal; the sticky row element itself has no sp class.

### Parallax (required)
- **Home block 6**: outer `wp-block-cover alignfull sp-parallax`, background P16, `min-height: 100vh` (R1 band 1440×900+), `--sp-par: 10%` desktop, `--sp-par: 6%` at <782px (keep on mobile). Overlay: `linear-gradient(to bottom, #0D0B06 0%, rgba(13,11,6,.6) 35%, rgba(13,11,6,.35) 100%)` (token d). Foreground (not in the moving layer): rail label, centred 360px column H2 + paragraph + line-link, 4 crosshair ticks. R1 counterpart: the misty-interior band that fades in and drifts behind a fixed text block.
- Optional second: Recitals page head P16 `--sp-par: 8%`.
- Must pass `check-parallax.mjs` (≥ 6px delta desktop & mobile, 0 with reduced motion).

## 10. Similarity table (target ≈ 80% of R1)
| Dimension | R1 value (token) | Neiro value |
|---|---|---|
| Ground | `#0A0801`, 60–85% (a) | `#0D0B06`, 60–85% |
| Text/line | `#D9D7D4` 5–8% (a) | `#D9D7D4` 5–8% |
| Accent | none (photo only) | `#705868` ≤ 3% small marks (row requirement) |
| First-screen saturation | 0.0% (a) | ≤ 5% |
| Heading face | Playfair Display 400, 45px/1.4 (b) | Crimson Pro 400, 3.125rem/1.4 (hero 4.5rem/1.18) |
| Tagline / body | Shippori 18/1.8, 14.4/2.4 (b) | Crimson Pro 18/1.8, 16/2.2 |
| Label face | Cinzel 12.6 caps .08em; rail 16–18 vertical .2em (b) | Outfit .8rem caps .08em; rail 1rem vertical .2em |
| Side margin / container | 72px / 1296 (c) | 72px / 1296 |
| Text col / photo col | x400 w324 / x1044 w324 (c) | identical |
| Sticky row | 675px, 90px pads, 3 rows (c) | 675px, 90px pads, 5 rows |
| Radius / shadow | 0 / none (d) | 0 / none |
| Hairline | 1px rgba(217,215,212,.18), x72–1044 (d) | identical |
| Hero photos | 468×720 + 252×376, overlap upper-middle, right (e) | 468×702 + 252×378, overlap, breaks top 48px, **left** (row: photo-left) |
| Row photo | 324×495 (e) | 324×495 |
| Band | full-bleed, top gradient 0→60% over 35%, text col 360–470 (c, d, e) | same, 360px centred |
| Numeral | "01" Cinzel 16.2 bottom-left (f) | time "15:30" Outfit 18 bottom-left |
| Nav dots | 4px above EN/JA, MENU (f) | 4px grape dot above active item |
| Link | 72×1px line + 17px gap + serif 18 (b, f) | identical |
| Text reveal | rise 1 line, 1.0–1.3s, quart.out, stagger .07 (g) | 28px, 1.2s, cubic-bezier(.25,1,.5,1), stagger .12 |
| Photo reveal | WebGL 1.1–2s (g) | wipe 1.1s |
| Band motion | scrub drift + fade (g) | sp-parallax 10% / 6% |
Own photos and copy; no R1/R2 text, imagery or logo.

## 11. Home acceptance checklist
- [ ] First screen: ink ground, photo pair left with small photo rising ≥ 40px above big photo top, 3-line H1 at ≥ 4.25rem with indented 3rd line; saturated ≤ 15% (target ≤ 5%) via check-first-screen.py.
- [ ] Rail labels vertical at x72 on desktop, horizontal on mobile; no vertical text at 390.
- [ ] T2: 5 sticky rows really stack at 1280/1440; times as numerals; 324×495 photos; hairline stops at photo column; plain rows < 782px.
- [ ] Parallax band P16 moves (≥ 6px desktop and mobile), static with reduced motion; text not in moving layer.
- [ ] Reveals hidden before entry (≥ 3), restored after; none on hero/prices/form; nothing transparent at page bottom with `?sp-motion`.
- [ ] Price list full width ≥ 782px, price column nowrap right, not clipped at 800/1280; stacked at 390.
- [ ] ≥ 8 images (16), none repeated on home; all from STYLE; no text/logos.
- [ ] ≥ 450 words, numbers equal §7; 8 teacher names match; accent ≤ 3%.
- [ ] Fonts from theme.json fontFace; editor = front (check-editor-fonts.mjs).
- [ ] auto-gates.mjs pass (390/1280 overflow, tables, overlap, images, lang).
