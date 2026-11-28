# Design spec: Taira Clinic (taira-clinic)

Plan row b42-1 · type **business** (category health-wellness) · archetype split-screen · page_structure **narrative-problem-method-proof** · nav **centered** · font_direction **sans** · IMAGERY **photo** (high-key documentary).
Main reference: **St. Luke's International Hospital**, https://hospital.luke.ac.jp/ (calm clinical home, clear patient path). Secondary (structure only, colour NOT followed): **Jikei University Hospital**, https://www.jikei.ac.jp/hospital/.
Token source: `brand/reference-tokens.md`, cited as `tok(a)` … `tok(g)`. Screens: `brand/ref/luke-first.png`, `luke-first-1440.png`, `scroll-luke-1800.png`, `scroll-luke-3000.png`, `jikei-first.png`.
Photos, copy, wordmark and icons are our own. We take the reference's structure, key-visual idea, colour relationships, measurements and motion idea; never its pictures, words, tan check wallpaper, crest or logo.

Class prefix for theme CSS: `tc-`. Effects only via sp-scroll classes copied unchanged from `pipeline/assets/sp-scroll/`.
Imagery row: **photo → real documentary photograph STYLE** (§13). No illustration anywhere (icons are 1.5 px line SVGs drawn by us: magnifier, arrow, phone).

---

## 1. Signature techniques (all three on the home page at full strength)

### T1. Docked finder box on the photo edge (Luke "search by disease / by department" box; `luke-first-1440.png`, `tok(d)(f)`)
- **Reference**: a small 185 × 108 box docked over the banner photo's left side (x+25, y+60), two stacked buttons each with a magnifier, 8 px padding, double outline (1 px #b18555 outer + 1 px #fbeedd inner). It is the first "path" a patient sees: find by problem.
- **Ours (home hero)**: a white box **288 × 136 px** docked on the **lower-right corner of the hero photo**, straddling the seam: 248 px over the photo, 40 px overhanging into the hero's **64 px column gap** (never touching the text column), bottom edge 40 px above the photo's bottom. Double outline: 1 px #5A6568 outer, 4 px white gap, 1 px #C9D1D2 inner (box-shadow `0 0 0 4px #fff inset` trick not allowed to blur: use `outline:1px solid #5A6568; outline-offset:0` on the box + inner `border:1px solid #C9D1D2` on a 4 px-inset child). Padding 12 px. Two rows, each 52 px tall, 1 px #C9D1D2 between: 20 px magnifier SVG (#5A6568) + label Figtree 1rem / 600 #1F2A2D "Find by symptom" / "Find by test" + 16 px arrow at right. Links: `/symptoms/` and `/assessment/`. Hover: label underline 1 px, arrow `translateX(3px)` .2 s.
- **Do not weaken**: it must overlap the photo (not sit beside it), keep the double outline, keep two rows with magnifiers, stay white on the photo. Ratio box:photo width ≈ 1 : 2.6 (ref 185 : 1000 is 1 : 5.4, ours larger because the photo is half-width; keep ≥ 1 : 3).
- Mobile (< 1024 px): static block directly under the photo, full width, same double outline, no overlap, no absolute position.

### T2. Slate title bar + two equal flat CTA blocks with arrow squares (Luke "for visitors" bar + book-online / book-by-phone blocks; `luke-first-1440.png`, `tok(a)(f)`)
- **Reference**: full-content-width green bar 950 × 56, white 24 px bold centred title; below, a one-line note, then **two equal strong-blue blocks 465 × 106** side by side, 20 px gap, white centred label and a 24 px white arrow square at the right end.
- **Ours (home §8 closing, plus compact version in the hero)**: bar 100 % of the 1200 container, **64 px** tall, #5A6568, title Figtree 1.5rem / 700 white centred, letter-spacing .06em "Book your first assessment". 2 px #5A6568 rule 24 px below; one centred line 0.9375rem #1F2A2D; then **two equal blocks 588 × 120** (gap 24) in **#2C5A86**, label Figtree 1.25rem / 600 white centred, sub-line 0.875rem #E3E8E8, **24 × 24 white arrow square** (arrow #2C5A86) 24 px from the right edge, vertically centred. Left "Book online — first assessment, 60 min" → `/contact/#book`; right "Call the desk — +1 (555) 014-2200" → `tel:`. Hover: block #234B72, arrow square `translateX(4px)` .2 s. Radius 0, no shadow.
- **Hero compact version** (KV #5): the same two blocks, 2-up inside the text column, 76 px tall, label 1rem / 600, arrow square 20 px.
- **Do not weaken**: the blocks are flat, filled, equal, side by side, with the arrow square; never outline buttons or pills.

### T3. Heading-plate cards in a peeking row (Luke promo strip; `scroll-luke-1800.png`, `tok(e)(f)`)
- **Reference**: 5 cards 200 wide in a strip cut at both ends; a bordered label plate is fused to the top of each card, photo under it, text under the photo, 1 px frame.
- **Ours (home §2 "What brings people in")**: row of **5 cards**, card 360 px wide (3 fully visible in the 1200 container + the 4th peeking ~120 px past the right edge; row bleeds to the viewport's right edge, `overflow-x:auto`, `scroll-snap-type:x mandatory`, gap 24). Card = 1 px #C9D1D2 frame; **plate** 48 px tall, #5A6568, white Figtree 1rem / 600 centred, letter-spacing .04em, fused flush to the photo (no gap); photo 3:2, radius 0; text 0.9375rem / 1.7, padding 16 20 20; foot link "Read more →" 0.875rem #2C5A86. Strip ground #F4F6F6 band 32 px padding top/bottom (Luke's patterned strip ground restaged as a flat pale band).
- **Do not weaken**: plate on top (not a caption under), the peek on the right, the 1 px frame.

### Supporting device (not counted): T4 gaze-chart headline
Hero headline in four left-aligned lines of **descending size** (rows of a gaze/acuity chart): 4.5 / 3.25 / 2.25 / 1.5rem. Re-stages Luke's four quiet lines over the banner.

### Continuation on inner pages (≥ 4 pages carry T1–T3)
| Page | T1 finder box | T2 title bar + CTA pair | T3 plate cards |
|---|---|---|---|
| Symptoms `/symptoms/` | docked on page-head photo | foot | 8 symptom cards (grid 3-up, no peek) |
| Assessment `/assessment/` | docked on page-head photo | foot | 4 test cards |
| Treatment `/treatment/` | — | foot | 3 stage cards |
| Clinicians `/clinicians/` | — | foot | 7 clinician cards (plate = name) — 3-up grid + 1, not a 4-person grid |
| Prices `/prices/` | — | foot (after table) | — |
| First visit `/first-visit/` | — | title bar used as page section heads | — |
| Patient stories `/stories/` | — | foot | 3 story cards |
| News archive | — | — | post cards with plate = category |
Every inner page head: slate 8 px top strip (site-wide), H1 + one lead line left, photo right 16:9 (split, echoes the hero).

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
St. Luke's first screen is a **wide, short banner photograph** of the hospital's towers and trees held inside a **deep-green frame and nav strip**; **four quiet centred lines** float in the sky; a small **two-button search box is docked on the photo** ("find by disease / find by department"); underneath, a thick green **title bar** and **two big blue booking blocks** (online / phone), then a peeking promo strip. Story: *a trustworthy institution that gives you one calm path — name your problem, then book.* Signature motion: the promo strip **slides slowly by itself** (2200 ms slide, every 7500 ms, circular, pauses on hover; Jikei's hero also auto-advances photos with 3 dots).

### (2) Our transposed scene (same composition idea, same motion idea, same image type = photo)
A **bright, high-key treatment room**: a clinician in a pale grey tunic steadies a patient standing on a **foam balance pad**, one hand lightly at the patient's elbow; a **gaze chart** (rows of plain dots and arrows, no letters) hangs on the white wall behind. The same calm path: *find your symptom or your test in the docked box, then book online or by phone.* Motion: the hero photo **slowly auto-advances** between two moments of the same session (img-01 patient wobbling, clinician's hand ready → img-02 patient steady, clinician's hand released): CSS crossfade, **hold 7.5 s, fade 2.2 s** (`tok(g)` timings), infinite, no dots, no JS. Composition is converted to split-photo-left (photo is not full-bleed, text is not on the photo).

### (3) KV checklist (all six implemented and visible in the first screen at 1440 × 900 and 1280 × 800)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Wide framed banner photo of the institution | High-key photo: clinician steadying patient on foam pad, gaze chart behind | left 7/12 of hero, full hero height (560 px), radius 0 | crossfade to img-02, hold 7.5 s / fade 2.2 s | img-01 + img-02 |
| 2 | Four quiet lines floating in the sky | T4 stepped four-line headline (4.5 / 3.25 / 2.25 / 1.5rem) | right column top | none (static; no reveal in hero) | — |
| 3 | Docked two-button search box | T1 finder box "Find by symptom / Find by test" | photo lower-right corner, straddling the seam | hover: arrow 3 px | — (on img-01/02) |
| 4 | Deep-green frame + nav strip | 8 px slate top strip + slate nav strip with 6 equal cells, centred wordmark above | header, full container | hover cell #4E5A5D | — |
| 5 | Title bar + two blue booking blocks | Compact T2 pair: "Book online" / "Call the desk", #2C5A86 | right column under lead | hover arrow square 4 px | — |
| 6 | (hero foot, ours) | Stats row: 4 figures with hairline dividers | across hero bottom, full width | none | — |

---

## 3. First-screen composition
**hero_composition = split-photo-left · hero_text = beside-photo · hero_footer = stats-row · hero_fingerprint = split-photo-left/beside-photo/stats-row**
- **split-photo-left**: hero grid gap 64 px; photo occupies the left 7 columns (≈ 688 px of 1200; at 1440 the photo bleeds to the container's left edge only, not the viewport), square corners, `object-fit:cover`, focal point 45 % 40 %. Never full-bleed, never text over it (only the T1 box overlaps its corner).
- **beside-photo**: all text (eyebrow, T4 headline, lead, T2 pair) sits in columns 8–12 to the right of the photo, top-aligned with the photo's top + 24 px, on white.
- **stats-row**: under both columns, a 1 px #C9D1D2 top rule then 4 equal cells (1 px #C9D1D2 vertical dividers), each: figure Figtree 2.5rem / 600 #1F2A2D + label 0.8125rem / 600 #5A6568 caps .08em. Values: **2011** "Opened" · **7** "Clinicians" · **60 min** "First assessment" · **6** "Sessions in a typical plan".

### Desktop 1440 × 900 (budget)
Header: 8 px slate strip · 64 px white wordmark row (centred wordmark "Taira Clinic" Figtree 1.375rem / 700 + 0.75rem caps tagline "Vestibular & balance"; at right "Book" text link + phone; at left language switcher) · **44 px slate nav strip** (#5A6568, 6 equal cells inside the 1200 container, white Manrope 0.9375rem / 500, 1 px rgba(255,255,255,.18) dividers): Symptoms · Assessment · Treatment · Clinicians · Prices · Contact (About, First visit, Stories, News in footer and in-page links; one top menu only). Total 116 px.
Hero: padding-top 32; photo 560 tall; stats row 104 tall, margin-top 32 → bottom at ~844 px. Saturated share ≤ 8 % target, **hard max 15 %** (`check-first-screen.py`).
Text column: eyebrow 0.8125rem / 600 caps .12em #5A6568 "Vestibular and balance clinic · Northgate"; H1 four lines "Steady" / "on your feet" / "before you head" / "back into the street." (sizes T4, Figtree 600, line-height 1.05, margin 0 0 .1em per line, colour #1F2A2D, line 4 #5A6568); lead 1.0625rem / 1.75, 44 words; T2 pair margin-top 32.

### 1280 × 800
Same structure; photo 500 tall; H1 line 1 4.25rem; stats row 88 tall; still fully visible above the fold.

### 782–1023 px
Photo 6/12, text 6/12; finder box static under the photo; stats 4-up.

### Mobile 390 × 844 (no vertical text, no absolutely positioned labels, no overlap)
Header 56 px: 4 px strip, wordmark left, "Menu" button right (core navigation overlay). Photo first, 4:3 full width; finder box static below (margin-top 16); headline lines 2.75 / 2.125 / 1.625 / 1.25rem; lead; T2 blocks stacked full width 64 px each; stats 2 × 2 grid. Crossfade kept.

---

## 4. Home sections (narrative-problem-method-proof)
| # | Section | Purpose | Layout | Photos | Copy |
|---|---|---|---|---|---|
| 1 | Hero | KV, path to booking | §3 | img-01, img-02 | eyebrow, 4-line H1, 44-word lead, 2 CTAs, 4 stats |
| 2 | What brings people in (T3) | symptoms people arrive with | H2 left + 1-line intro right; peeking 5-card plate row on #F4F6F6 band | img-03 Spinning when rolling over · img-04 Unsteady in crowds · img-05 Dizzy after a head knock · img-06 Falls or near-falls · img-07 Screens and aisles make you queasy | 25–30 words per card |
| 3 | The problem (narrative) | why balance fails and why rest alone rarely fixes it | text 5/12 left (H2 + **3 paragraphs, 45–60 words each**), photo 7/12 right 4:5 in `sp-parallax` | img-08 patient pausing at a corridor handrail | ~160 words |
| 4 | Our method: measure · retrain · return | the method, text-led | H2 + intro; three **hairline rows** (1 px #C9D1D2 top/bottom): col 1–3 "01 Measure" (Figtree 1.5rem), col 4–9 two sentences, col 10–12 **120 px square thumb with 1 px frame** (Luke list thumbnail) — not a step grid | img-09 goggles gaze test · img-10 foam-pad exercise · img-11 patient walking a corridor turning head | 40–50 words per row |
| 5 | One case (proof) | Mara's story, no guaranteed results | photo 5/12 left 4:5; right: H2 "Mara, 64: from the tram stop back to the market", three rows in a 1 px #5A6568 box "When she arrived / What we did / Twelve weeks on" (1–2 plain sentences each); figures row (sp-count): **6** sessions · **12** weeks · **2** short home exercises a day; note "Outcomes differ from person to person." Link `/stories/` | img-12 older woman stepping onto a kerb, clinician beside | ~110 words |
| 6 | From the clinic + visiting | dated rows + hours | 7/12 left: 3 latest posts as dated rows (date 0.8125rem, **category chip 88 × 20 #2C5A86 or #5A6568, white 0.6875rem caps**, title) — Luke news rows; 5/12 right: hours & address box (1 px #C9D1D2) with img-13 on top 16:9 | img-13 clinic entrance with ramp and handrail | hours table-free list |
| 7 | Balance notes (newsletter) | monthly letter | #F4F6F6 band, H3 + one line left, newsletter slot right (§12) | — | 30 words |
| 8 | T2 close | book | slate title bar + 2 blocks (§1 T2) | — | 1 line |
| — | Footer | | #F4F6F6, 4 columns: wordmark+address, pages, hours, contact; 8 px slate strip at very bottom | — | |
Home images: img-01…img-13 = **13 positions** (≥ 8), no repeats. Home English ≥ 250 words (target ~600), ≥ 3 narrative paragraphs ≥ 20 words (§3 has 3, §5 more).

### Not the same as recent home pages
| Theme | Their order | Ours |
|---|---|---|
| Hakuji Laboratory | collage hero + stats → news sheet → rounded sheets over photo bands → title-over-photo cards | split photo-left hero; no collage; cards have plates above photos, no titles over photos; square corners |
| Makido Shutters | lens band → hairline boxes → peeking door cards → narrative → parallax band → lead-time rows | no lens/arcs; our peek row comes right after hero with fused plates; parallax lives inside the narrative split, not a band |
| Sazanami Hotel | pinned hero strip + frosted pill → sliding chapters → neighbour rows → dark inversion | no pin, no frosted pill, no dark section; slate only as bars |
| Yukiki Shoes | mosaic split hero → tabs + 5-up → 5-step timeline → product cards → parallax band | no tabs, no timeline, method as 3 hairline rows with thumbs; ends on T2 booking blocks |

---

## 5. Inner pages (11 pages + 4 posts)
| Page (slug) | Content |
|---|---|
| About `/about/` | founding 2011 by Dr Lena Ortiz, why a balance-only clinic, the room and equipment, a typical day (day / daily routine paragraph); img-14 |
| Symptoms `/symptoms/` | T1 head; 8 plate cards: BPPV, vestibular neuritis, vestibular migraine, persistent postural-perceptual dizziness (PPPD), post-concussion dizziness, Ménière's-type episodes, age-related unsteadiness, motion/visual vertigo; "when to go to an emergency department instead" box |
| Assessment `/assessment/` | T1 head; 4 tests (video gaze test, positional test, balance platform, walking & turning test); what to wear; 60 min; img-09, img-16 |
| Treatment `/treatment/` | the 3 stages (Measure, Retrain, Return) in long form; home exercise programme; img-10, img-11 |
| Clinicians `/clinicians/` | 7 people (§14) as plate cards; img-15 group photo |
| Prices & cover `/prices/` | price table (§11), insurance/receipt notes, cancellation (24 h) |
| First visit `/first-visit/` | patient path 5 stages as T2 slate bars + text (not a step grid), getting here, accessibility; img-13 |
| Patient stories `/stories/` | 3 cases (§14) with plate cards; disclaimer |
| News `/news/` | posts page (role posts, empty) |
| Newsletter `/newsletter/` | standalone "Balance notes" page with slot (§12) |
| Contact & booking `/contact/` | contact slot, hours, address, phone; img-14 |
| Privacy `/privacy/` | legal text, no effects |
Posts (category + tags each): "Why rolling over in bed can set off a spin" (Conditions), "Three things to bring to your first assessment" (Visiting), "New Saturday morning sessions" (Clinic news), "Screens, aisles and visual vertigo" (Conditions).
Theme-meta pages: home, about, news, article, category, tag, newsletter, contact — screens point to real pages/posts.

---

## 6. Colour (source `tok(a)`; relationship and shares kept)
| Role | Reference | Ours | Share |
|---|---|---|---|
| Frame / nav strip / title bar / plates | #1C5D47 / #00734C deep green | **#5A6568** slate (aonibi) | ~12 % |
| CTA blocks | #294EA4 strong blue | **#2C5A86** muted steel blue (hover #234B72) | 2–6 % |
| Page ground | #FFFFFF | #FFFFFF | ~60 % |
| Pale bands (replaces tan wallpaper) | #D9C7A3 tan check | **#F4F6F6** flat | ~10 % |
| Hairlines | #b18555 | #C9D1D2, pale rule #E3E8E8 | ~2 % |
| Text | #000000, headings #764912 | **#1F2A2D**, headings #1F2A2D, secondary #5A6568 | — |
| Focus | — | #2C5A86 2 px outline, offset 3 px | — |
**Why the hue changes (not ±5 %)**: the plan row fixes the family to grey (aonibi #5A6568) and a quiet first screen; Luke's green and royal blue (s ≈ .6–.75) would push the saturated share past target and make the clinic look like a hospital chain. We keep the *relationship* exactly: one dark frame colour used thin (strip, nav, bars, plates), one deeper CTA colour in two large blocks, a big white ground and a pale secondary ground. Contrast: white on #5A6568 5.9 : 1, white on #2C5A86 6.2 : 1, #1F2A2D on #F4F6F6 13 : 1. First-screen saturated share target ≤ 8 %, hard max 15 % (ref 14 %).
theme-meta colors.tags: grey, calm, cool, light. style: clean, calm, professional, photographic.

## 7. Type (font_direction: **sans**)
- **Latin**: headings **Figtree** (variable 300–900), body **Manrope** (variable 200–800). OFL, woff2 latin + latin-ext in `assets/fonts/`, listed in theme-meta `fonts[].files` with licenseFile, named in readme.txt.
- **CJK (gothic / sans only, no Mincho)**: zh-TW headings **Noto Sans TC** 500/700 subset, ja headings **Noto Sans JP** 500/700 subset (Hokuto/Hada subset workaround).
- Stacks: heading `"Figtree", "Manrope", system-ui, sans-serif`; `:root:lang(zh*)` heading `"Figtree", "Noto Sans TC", "PingFang TC", "Microsoft JhengHei", sans-serif`; `:root:lang(ja)` heading `"Figtree", "Noto Sans JP", "Hiragino Sans", "Yu Gothic", sans-serif`. Body `"Manrope", system-ui, sans-serif`; zh body `"Manrope", "PingFang TC", "Microsoft JhengHei", sans-serif`; ja body `"Manrope", "Hiragino Sans", "Yu Gothic", "Meiryo", sans-serif` (no bundled CJK in body).
- Loaded only via theme.json `fontFamilies` + `fontFace` (editor = front end); copy `shared/inc/editor-lang.php` → `inc/editor-lang.php`, require_once. Must pass `check-editor-fonts.mjs` (en, zh-TW).

| Token | Size / weight / lh / tracking | Source |
|---|---|---|
| H1 hero line 1 (theme.json max) | **4.5rem** / 600 / 1.05 / −0.01em | row ≥ 4.25rem |
| H1 lines 2–4 | 3.25 / 2.25 / 1.5rem, 600 | T4 |
| H1 inner pages | 3rem / 600 / 1.15 | — |
| H2 | 2.25rem / 700 / 1.4 / **.06em** | Jikei h2 32 px / 700 / lh 1.5 / .08em `tok(b)` |
| Title bar (T2) | 1.5rem / 700 / white / .06em | Luke bar 24 px bold `tok(f)` |
| H3 | 1.25rem / 600 / 1.5 / .04em | Jikei h3 18 / .12em `tok(b)` (tracking reduced for Latin) |
| Figures | 2.5rem / 600 / 1, tabular-nums | — |
| Body | 1.0625rem / 400 / **1.8** | Jikei 16 / 28.8 `tok(b)` |
| Nav | 0.9375rem / 500 | Jikei footer 15 `tok(b)` |
| Eyebrow / labels | 0.8125rem / 600 caps .12em | — |
| Chips | 0.6875rem / 700 caps .06em | Luke chips 11 px `tok(f)` |
zh-TW / ja ≈ 0.75 × display sizes, body lh 1.85, tracking .02em; fr / de `hyphens:auto`.

## 8. Spacing, radius, borders, buttons (source `tok(c)(d)`)
- contentSize **1200 px**, wideSize 1280; gutters 24 (mobile 20); 12-col gap 32.
- Section padding **96 px** (mobile 64) — Jikei 90 `tok(c)`; plate-card band 48.
- Header 116 px desktop (8 + 64 + 44; Luke nav strip 34 → 44 for touch), mobile 56.
- Radius **0** everywhere (Luke radius 0 `tok(d)`); chips 2 px; no pills. Shadow none.
- Borders: hairline 1 px #C9D1D2; T1 double outline; case box 1 px #5A6568; T2 bar-follow rule 2 px #5A6568 (Luke 2 px rules `tok(d)`).
- Buttons: (a) T2 filled block #2C5A86 + arrow square; (b) text link #2C5A86 underline offset 4 px. No other button style. Focus-visible 2 px #2C5A86 offset 3 px (white outline on slate/steel).

## 9. Scroll effects (from stage-a candidates; sp-scroll unchanged; ≤ 3 kinds per page)
| Effect | sp-* class | Where | Source trigger / time / easing | Our values |
|---|---|---|---|---|
| Fade-up rows | `sp-reveal sp-reveal--up` in `sp-stagger` parent | home §4 method rows, §6 dated rows, §3 text column; inner: plate-card grids, story rows | Luke PICK UP scroller: click, **1500 ms easeInQuint** `tok(g)` | `--sp-dur:1.5s`, `--sp-dist:20px`, easing inverted to easeOutQuint `cubic-bezier(.23,1,.32,1)` (ease-in on entry reads as lag) |
| Number run | `sp-reveal sp-count` | home §5 case figures (6 / 12 / 2); not in hero | Luke has none; supports the case proof | default 1.2 s easeOutCubic |
| Parallax | `sp-parallax` | home §3 narrative photo; About head photo | Luke autoscroll strip / Jikei hero slide = slow self-moving image → here a slower-than-page photo | §10 |
- Hero: no sp class (the 7.5 s / 2.2 s crossfade is plain CSS keyframes on `.tc-hero__alt`; under `html.sp-no-motion` and `prefers-reduced-motion:reduce` → animation none, img-01 shown). Plate-card row (horizontal scroll) children get no reveal; the row container gets one `sp-reveal--up`. No reveal on forms, price table, privacy.

## 10. Parallax (required)
- **Block**: home §3 "The problem" — the right 7/12 Group is `sp-parallax` (overflow clip), direct `figure>img` = **img-08** (patient pausing at a corridor handrail, 4:5), moves; **foreground** = nothing on the photo; the text column beside it does not move.
- `--sp-par: 8%` desktop, **6 %** below 782 px (kept on mobile, ≥ 6 px displacement on 390 × 844).
- Second (optional): About page head photo img-14, `--sp-par: 6%`.
- Reference motion: Luke's strip and Jikei's hero image move on their own while the page holds still; here the photo drifts at a different speed from the page.
- Verify: `check-parallax.mjs` desktop + mobile ≥ 6 px, 0 under reduced motion; reveal checks (≥ 3 hidden before entry: §3 text, §4 rows, §5 figures, §6 rows).

## 11. Responsive
- 390 px first screen: §3 mobile — no vertical text, no absolutely positioned labels, no overlap; finder box static.
- Plate-card row: own `overflow-x:auto` container, cards 82 % width on mobile; document never scrolls sideways.
- **Price table** (`/prices/`): real `<table>` in `figure.wp-block-table`, **100 % of the 1200 container at ≥ 782 px** (checked at 800 and 1280); `table-layout:fixed`; columns Service 38 % · What it includes 44 % (0.9375rem #5A6568) · **Fee 18 %, `white-space:nowrap; text-align:right`**, Figtree 1.125rem / 600 tabular-nums. Header 0.75rem caps #5A6568 with 2 px #5A6568 bottom rule; rows 1 px #C9D1D2, padding 18 px 0. Never clipped.
- **Every table < 782 px stacks**: thead visually hidden; each row a block, 1 px top rule, padding 16 0; service 1.0625rem / 600, includes on its own line, fee on its own line with a visible `<em>Fee</em>` in markup (no CSS `content:` text).
- Splits collapse to one column < 782 px, photo first. Header < 1024: nav strip replaced by "Menu" overlay.
- Method rows mobile: name, text, thumb (120 px) stacked; case box full width; T2 blocks stacked.

## 12. Forms (form contract v1 — `steps/form-contract-v1` exists)
- Copy `pipeline/assets/forms/shippress-forms.php` → `inc/`, forms CSS + editor JS → `assets/`, unchanged; require in functions.php. No fake forms, no backend, no import-time plugin detection. **No form in the first screen; no sp-reveal on any form or its section.**
- **Contact & booking `/contact/`** (section `#book`, the only booking page): pattern calls `shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) )`; `$fallback` = `ob_start()`-buffered literal T2 block markup "Email the desk to book" → `mailto:desk@taira-clinic.example?subject=<booking_subject>` (never a link to /contact/). With CF7/WPForms the first published form renders. Recommended fields (readme + page note): Full name*, Email*, Phone*, Date of birth, Main symptom (select: Spinning / Unsteady / Dizzy after head injury / Falls / Visual vertigo / Not sure), How long (select: < 1 month / 1–6 months / > 6 months), Referred by a doctor? (radio Yes / No), Preferred days (checkboxes Mon–Sat), Message (textarea), Consent* (checkbox → /privacy/).
- **Newsletter `/newsletter/`** (standalone, not an alias of News) **and home §7**: `shippress_form_slot( array( 'kind'=>'newsletter', 'email'=>'desk@taira-clinic.example', 'label'=>_t('forms_email'), 'submit'=>_t('forms_subscribe'), 'notice'=>_t('forms_mail_notice'), 'subject'=>_t('forms_mail_subject') ) )`. MailPoet (explicit ID) or MC4WP preferred; CF7/WPForms only with an explicit newsletter form ID. Without plugins: required email + submit, native mailto POST with the entered address; notice "Opens your email app. Send the message to join Balance notes; you are not subscribed yet." Footer has no form.
- **Light tokens** (white / #F4F6F6): `--sp-form-surface #FFFFFF`, `--sp-form-text #1F2A2D`, border #8A9496 (3.1 : 1), `--sp-form-accent #2C5A86`, `--sp-form-on-accent #FFFFFF`, `--sp-form-focus #2C5A86` (2 px, offset 2), `--sp-form-radius 0`; inputs 48 px, padding 0 14; labels 0.875rem / 600; error #9E3A30 (text + 1 px border + message under field); success #2F6B52 (text + 4 px left rule); checkbox/radio 18 px `accent-color:#2C5A86`.
- **Dark tokens** (any form inside a slate #5A6568 area, e.g. if placed under the T2 bar): surface #FFFFFF, text #1F2A2D, border #C9D1D2, accent #FFFFFF, on-accent #3D4649, focus #E3E8E8, labels/notice #F4F6F6, error #FFD2C9, success #D3EADF.
- Style CF7, WPForms, MailPoet, MC4WP, Jetpack scoped classes + `.sp-newsletter-fallback`: input, textarea, select, checkbox/radio, label, submit, focus, error, success. No global selectors.
- Five-language semantic keys (en, zh-TW, ja, fr, de) in `inc/i18n/en.php`: `forms_email` "Your email", `forms_subscribe` "Join Balance notes", `forms_mail_notice`, `forms_mail_subject` "Balance notes request", `booking_email` "Email the desk to book", `booking_subject` "First assessment request", plus all field labels/options. `L10N_SEMANTIC=1`. `form-runtime-check.php` passes in 5 languages; `repo-gates.sh forms` passes; real CF7 at 390 px + desktop on light and dark, not submitted.

## 13. Images (IMAGERY: **photo**; 16 images, 0 cut-outs)
**STYLE (one string for every image):**
`Real documentary photograph, high-key and bright, soft diffused daylight from large windows, pale grey and white clinical interior with light wood accents, true-to-life low-saturation colour, slate grey and muted steel blue in clothing and equipment, natural skin tones, 35mm lens at eye level, medium depth of field, calm and candid, clinicians in plain pale grey tunics, diverse international adults, modern international setting, no visible text, no letters on charts, no logos, no brand marks, no signage, no watermarks, not CGI, not illustration, no Japanese elements`

| # | Subject / composition | Ratio | Used in | Home |
|---|---|---|---|---|
| img-01 | Clinician steadies a patient standing on a foam balance pad, hand ready at the elbow; wall gaze chart of plain dots and arrows behind; patient left-of-centre | 5:4 | home hero (KV 1) | ★ |
| img-02 | Same room and people, patient now steady, clinician's hand released, both calm | 5:4 | home hero crossfade | ★ |
| img-03 | Person sitting on the edge of a bed in morning light, hand on forehead | 3:2 | home §2 card; Symptoms | ★ |
| img-04 | Person pausing in a busy bright station concourse, hand on a pillar, others blurred | 3:2 | home §2; Symptoms | ★ |
| img-05 | Young cyclist with helmet in hand being checked by a clinician, eye-level | 3:2 | home §2; Stories (Theo) | ★ |
| img-06 | Older man rising from a chair using a walking stick, clinician beside | 3:2 | home §2; Symptoms | ★ |
| img-07 | Woman in a bright supermarket aisle, steadying herself on a trolley | 3:2 | home §2; Stories (Ines) | ★ |
| img-08 | Patient pausing at a corridor handrail, clinician a step behind, long bright corridor | 4:5 | home §3 parallax | ★ |
| img-09 | Patient wearing video goggles (no screens text) seated, clinician at a laptop beside | 1:1 | home §4 thumb; Assessment | ★ |
| img-10 | Patient on a foam pad, eyes closed, arms crossed, clinician spotting | 1:1 | home §4 thumb; Treatment | ★ |
| img-11 | Patient walking a corridor while turning the head, clinician walking alongside | 1:1 | home §4 thumb; Treatment | ★ |
| img-12 | Older woman stepping up onto a kerb outdoors, clinician beside, soft daylight | 4:5 | home §5 case; Stories (Mara) | ★ |
| img-13 | Clinic entrance: glass door, ramp, handrail, plants, bright morning | 16:9 | home §6; First visit | ★ |
| img-14 | Calm reception/waiting area, pale wood bench, receptionist talking with a patient | 16:9 | About head (parallax); Contact | |
| img-15 | Clinicians together around a treatment table reviewing notes (group, candid) | 16:9 | Clinicians head | |
| img-16 | Close view of a balance platform with bare feet in socks and the clinician's hands on a tablet (no text visible) | 16:9 | Assessment head; Prices head | |
Same image never twice on one page. Each ≤ 300 KB, ≤ 2000 px, webp. Read every image; regenerate any with text, logos, broken faces/hands, or style drift.

## 14. Fixed facts (brand.md must match; identical in all five languages)
- **Name** Taira Clinic — vestibular and balance clinic. **Opened 2011**. **Address** 14 Linden Row, Harbourside, Northgate (fictional). Phone +1 (555) 014-2200. Email desk@taira-clinic.example.
- **Hours**: Mon–Fri 08:00–18:30 · Sat 08:30–13:00 · Sun and public holidays closed. First appointments usually within 5 working days.
- **People (7)**: Dr Lena Ortiz (founder, vestibular physician) · Tomas Weller (lead vestibular physiotherapist) · Amara Osei (physiotherapist, falls prevention) · Priya Nair (clinical audiologist, gaze and positional testing) · Jonah Lindqvist (physiotherapist, post-concussion care) · Sofia Marchetti (patient coordinator) · Daniel Achebe (clinic manager).
- **Prices (6, EUR)**: First assessment, 60 min, gaze, positional and balance-platform tests — €145 · Rehabilitation session, 45 min — €85 · Repositioning visit for BPPV, 30 min — €70 · Six-session retraining block, prepaid — €460 · Falls-risk screen for over-65s, 40 min — €60 · Remote home-exercise review, 20 min — €35. Cancellation free up to 24 h before.
- **Path (5)**: 1 Book online or call → 2 First assessment (60 min) → 3 Plan agreed together → 4 Sessions (typically 6 over 8–12 weeks) + daily home exercises → 5 Review and a letter to your own doctor.
- **Method (3)**: Measure · Retrain · Return.
- **Stories (3)**: Mara, 64 — spinning after rolling over, a fall at a tram stop; repositioning + 6 sessions over 12 weeks, back to walking to the market. Theo, 31 — dizziness after a cycling crash; 8 sessions, back on the bike on quiet roads first. Ines, 47 — supermarket aisles and screens set off vertigo; graded visual exposure, shops with a list again. Each ends "Outcomes differ from person to person."
- Hero stats: 2011 · 7 clinicians · 60 min first assessment · 6 sessions typical plan. No guaranteed results, no awards, no real media, no real people or brands.

## 15. Home acceptance checklist
- [ ] Hero is split-photo-left / beside-photo / stats-row; no text on the photo, not full-bleed.
- [ ] KV 1–6 all visible at 1440 × 900 and 1280 × 800; crossfade 7.5 s / 2.2 s, static under sp-static / reduced motion.
- [ ] T1 box overlaps the photo's lower-right corner with double outline + 2 magnifier rows.
- [ ] Slate 8 px strip + 44 px slate nav strip with 6 equal cells; exactly one top menu.
- [ ] T3 plate row: plates fused on top, 4th card peeks, horizontal scroll inside its own row only.
- [ ] Method = 3 hairline rows with 120 px framed thumbs (no step grid, no timeline).
- [ ] Case box + sp-count figures + "Outcomes differ" note.
- [ ] T2 close: 64 px slate bar + two equal #2C5A86 blocks with arrow squares.
- [ ] 13 image positions, no repeats; ≥ 250 English words; 3 narrative paragraphs ≥ 20 words.
- [ ] H1 4.5rem (≥ 4.25rem); Figtree / Manrope from theme.json fontFace.
- [ ] First-screen saturated share ≤ 15 % (target ≤ 8 %).
- [ ] sp-parallax on §3 passes check-parallax (desktop + mobile); no reveal in hero, forms, tables.
- [ ] Newsletter slot on home §7 renders email + submit without plugins.
- [ ] 390 px: no overflow, no overlap, finder static, CTA stacked, stats 2 × 2.
- [ ] auto-gates pass (`1 1` home only in stage 1).

## 16. Similarity table (target ≈ 80 %, values from `reference-tokens.md`)
| Dimension | Reference value | Ours |
|---|---|---|
| Colour relationship | thin dark frame #1C5D47 ~9 % + CTA #294EA4 ~10 % + white ~40 % `tok(a)` | thin slate #5A6568 ~12 % + CTA #2C5A86 2–6 % + white ~60 % + #F4F6F6 ~10 % (hue changed, reason §6) |
| First-screen saturation | ~14 % | ≤ 8 % target, ≤ 15 % max |
| Hero photo | banner 4.35:1, radius 0, no mask, in frame `tok(e)` | split 5:4, radius 0, no mask, inside container |
| Docked box | 185 × 108, x+25 y+60, double 1 px outline, 2 rows + magnifier `tok(f)` | 288 × 136, lower-right seam, double 1 px outline (4 px gap), 2 rows + magnifier |
| Nav strip | 34 px green, 5 equal cells `tok(c)` | 44 px slate, 6 equal cells |
| Title bar | 950 × 56, white 24 px bold centred `tok(f)` | 1200 × 64, white 1.5rem / 700 centred |
| CTA blocks | 2 × 465 × 106, flat blue, 24 px arrow square `tok(f)` | 2 × 588 × 120, flat steel, 24 px arrow square |
| Plate cards | 5 × 200, plate on top, 1 px frame, strip peeks `tok(f)` | 5 × 360, 48 px plate on top, 1 px frame, right peek |
| List thumbs | 74 px square, 1 px frame `tok(e)` | 120 px square, 1 px frame |
| Category chips | 80 × 18, white 11 px `tok(f)` | 88 × 20, white 0.6875rem |
| Radius / shadow | 0 / none `tok(d)` | 0 / none (chips 2 px) |
| Rules | 2 px green `tok(d)` | 2 px slate after title bar; 1 px #C9D1D2 hairlines |
| Type | Jikei h2 32 / 700 / .08em, body 16 / 1.8 `tok(b)` | H2 2.25rem / 700 / .06em, body 1.0625rem / 1.8 |
| Section spacing | Jikei 90 px `tok(c)` | 96 px |
| Motion | strip 2200 ms every 7500 ms; list 1500 ms easeInQuint `tok(g)` | hero crossfade 2.2 s every 7.5 s; reveal 1.5 s easeOutQuint, 20 px |
Photos and copy are our own; no reference text, images, crest or logo are reused.
