# Genba Diary: design spec (stage 1 spec, binding for implementation)

Slug `genba-diary`, construction site-diary app, crew-rollout **landing** theme (type `landing`, archetype single-column-longform, hero diagonal-split, nav centred). Reference: **ANDPAD** (https://andpad.jp/) only. Measurements: `reference-tokens.md`; screenshots `ref/andpad-first.png`, `ref/andpad-scroll-900.png`, `ref/andpad-scroll-1800.png`, `ref/andpad-scroll-2700.png`. We borrow structure, techniques, colour relationships, measured values and the key-visual concept. We copy no photo, text, icon, UI screenshot or logo.

Landing rules (design-plan note): the home is one long conversion page with an anchor menu and **one repeated CTA, "Request a rollout"**. The newsletter page is the early-access waitlist. Privacy, Terms and Thanks pages exist.

---

## 0. Fixed brand facts (every page, all five languages, no other numbers anywhere)

| Fact | Value |
|---|---|
| Product / company | Genba Diary (app), made by Genba Diary B.V. |
| Founded | **2021** |
| Office | Havenkade 41, 3024 AB Rotterdam, Netherlands (fictional address; local formats per language in brand.md) |
| Support hours | **Mon–Fri 06:30–18:00 CET, Sat 07:00–12:00**, closed Sundays and public holidays |
| Phone / email | +31 10 555 0141 · rollout@genbadiary.example |
| Pilots start | every **Monday** |
| Diary day | **6 sections** per day: Morning board, Crew & hours, Deliveries, Photos & marks, Weather & delays, Sign-off. Daily sign-off at **17:00** |
| Rollout | **7-day pilot**, one site, one crew, no charge |

### People (7, named, fictional; shown as text rows, never a portrait grid)
| Name | Role |
|---|---|
| Marta Kowalczyk | Co-founder, product (former site manager) |
| Samuel Adeyemi | Co-founder, engineering |
| Inès Laurent | Rollout lead |
| Jonas Brandt | Rollout specialist, on site |
| Priya Raman | Support lead (answers 06:30–18:00) |
| Tomás Ortega | Design of the board and forms |
| Hannah Visser | Field notes editor |

### Rollout process (4 stages, 7 days; identical on Home, Rollout, Plans, FAQ)
1. **Day 1 — Request and call**: request form, 30-minute call with the rollout lead.
2. **Day 2 — Gate briefing**: 45 minutes at the hoist gate before the 07:00 shift; the crew is added to the diary.
3. **Days 3–6 — Diary days**: the crew writes the six sections; the rollout specialist reads each day by 18:00 and leaves one note.
4. **Day 7 — Review**: one hour with the site manager; keep, extend or stop. Nothing is billed for the pilot.

### Plans (6 items, USD in every language, no conversions)
| # | Plan | Included | Price |
|---|---|---|---|
| 1 | Pilot rollout | one site, one crew, 7 days, gate briefing | **$0** |
| 2 | Site plan | one active site, unlimited crew members, 6-section diary, daily PDF | **$59 / site / month** |
| 3 | Office plan | up to 10 active sites, weekly digest, export to the handover file | **$390 / month** |
| 4 | Onboarding day on site | one specialist, up to 3 crews briefed | **$480 one-off** |
| 5 | Extra photo storage | +100 GB | **$15 / month** |
| 6 | Archive export | closed site, full diary PDF and photo set | **$35 / site** |

### Stories (3, fictional customers; posts in category "Stories")
| # | Label | Customer (fictional) | Crew / site | Voice |
|---|---|---|---|---|
| 1 | STORY 01 | Harbourline Construction | concrete frame, six-storey housing block, 4 crews | Lena Hoffmann, site manager |
| 2 | STORY 02 | Moreau Interiors | fit-out of a school refurbishment, 2 crews | Karim Benali, foreman |
| 3 | STORY 03 | Northfield Roofing | roof and façade of a logistics hall, 3 crews | Ruth Okonkwo, project lead |
Stories describe what changed in the routine (the board is no longer wiped, deliveries are logged at the gate). No percentages, savings, awards, real media or real brands.

---

## 1. Signature techniques (three, obvious at a glance, never diluted)

### T1. Slanted triptych with round badge, square and banner strip (ANDPAD first screen, https://andpad.jp/, `ref/andpad-first.png`)
- Reference: one real photograph of a person on site cut into **three vertical slices** (each about 213 × 492 px, x 690–1348), separated by thin white gaps, the **middle slice dropped about 50 px**; a **Ø175 solid red badge** with white two-line text straddling the lower-left of slice 1, with a thin ring offset up-right of it; a **solid red ~40 px square** floating at the slice 2/3 seam; a **white banner strip** with heavy italic red/black words crossing the lower third of all slices.
- Ours (home hero, right 55%): photo G01 (site manager handing a tablet to a foreman at the hoist gate) in three slices at x 690–1348 (1440 desktop): slice width 214 px, gap 8 px white, height 492 px, slice tops y 135 / 185 / 135 (middle **+50 px**). Slices are **slanted** (this is our diagonal-split hero): each slice `clip-path: polygon(20px 0, 100% 0, calc(100% - 20px) 100%, 0 100%)` (≈2.3°, same angle on every edge). Badge Ø175 `#EF3340`, centre at (698, 582), white Albert Sans 700 1.625rem/1.25 "Today's / diary"; offset ring Ø175, 1 px `rgba(43,52,64,.35)`, shifted +12 px x / −12 px y, behind the badge. Square 40 × 40 `#EF3340`, left edge x 1112, top y 403 (straddles the slice 2/3 seam). Banner strip: white, 72 px tall, y 555–627, x 790–1348, text Albert Sans 800 italic 2.25rem: "06:40" in `#EF3340` + " Morning board · Gate 2" in `#2B3440`.
- Must not be diluted: three slices from one photo (not three photos), middle visibly lower (≥ 44 px), badge ≥ Ø160 and solid accent red (not outline, not steel), square solid accent, strip crossing all three slices. Radius 0 everywhere.
- Inner continuation: every inner page head has a **mini triptych** (see section 4): one photo masked into three slanted slices (8 px gaps, same 2.3° angle) 560 × 320, a 28 px accent square at the 2/3 seam and a Ø96 accent badge with the page word. The middle step is dropped on inner heads only (single image), the gaps, slant, square and badge are kept.

### T2. Rectangle-wipe sub-label + 32 px growing rule (ANDPAD sub-headings, CSS `left-to-right-rectangle` + `borderToLong`)
- Reference: a small label; a solid red rectangle sweeps across it left→right (scaleX 0→1, then 1→0 from the right) and leaves the label visible; 0.4 s `cubic-bezier(0.8,0,0.5,1)`, 0.6 s delay; under section headings a red rule grows 0→32 px.
- Ours: every home section and every inner page head opens with `p.gd-label` (Inter Tight 600 0.75rem, uppercase, letter-spacing 0.04em, ink) inside a Group with `sp-reveal sp-reveal--wipe`; theme CSS adds the red bar `.gd-label::before` (`#EF3340`, full label box) that runs scaleX 0→1 (origin left) then 1→0 (origin right) when the parent has `.sp-in`: 0.4 s each leg, `cubic-bezier(0.8,0,0.5,1)`, first leg delay 0.2 s. Hidden/bar states only under `html.sp-js:not(.sp-no-motion)`; static, no-JS, reduced-motion and editor = label visible, bar `scaleX(0)`. The H2 below it is Albert Sans 700 2.25rem and has a 32 × 3 px `#EF3340` rule 16 px under it (`.gd-rule`), growing 0→32 px (0.4 s linear, same trigger); static = 32 px.
- Section labels (en): CREWS, A DIARY DAY, ROLLOUT, STORIES, PLANS, QUESTIONS, REQUEST. Labels stay English in zh-TW/ja; headings are translated.
- Must not be diluted: the bar is solid accent red and full label height; the rule is accent red, exactly 32 px.

### T3. Logo tile + centred anchor menu + two-cell flush CTA block (ANDPAD header, `ref/andpad-scroll-900.png`)
- Reference: an 84 × 84 solid tile flush top-left holding the mark; centred text nav with 1 px dividers; two flush cells (≈150 × 50, dark red + red, white text with a line icon, darker bottom edge) pinned to the top-right corner; header sticky with a 1 px soft shadow.
- Ours (header part, all pages): height 84 px, white, sticky `top:0`, `box-shadow: 0 1px 0 rgba(0,0,0,.06)`. Tile 84 × 84 `#3A4654` flush at (0,0) with the white monogram "GD" (Albert Sans 800 1.5rem, a markup paragraph/site-logo link, not CSS content). Wordmark "Genba Diary" Albert Sans 700 1.25rem at x 108. Centred anchor menu (Navigation block, `justify-content:center`): Crews · A diary day · Rollout · Stories · Plans · Questions — Inter Tight 600 0.875rem, items separated by 1 px × 24 px `#E6E6E6` dividers, 28 px padding each side. On inner pages the same items link to `/#crews` etc. CTA block flush top-right, 2 cells 176 × 84: cell 1 `#C8102E` "Request a rollout" (links `#request` on home, `/request/` inside), cell 2 `#3A4654` "Call 06:30–18:00" (`tel:`), white Inter Tight 600 0.8125rem, 20 px line icon left (inline SVG), 3 px bottom border `rgba(0,0,0,.2)`.
- No header slide-in (no scroll listener); it is simply sticky.
- Mobile (< 960 px): tile 56 × 56, wordmark, overlay menu button; the CTA block becomes one 56 px cell "Request" `#C8102E` at the right. Must not be diluted: tile solid steel and flush to the corner (0 margin), CTA cells flush to the right edge, 0 radius.

### Supporting (not counted, but required): T4 case cards + edge tab (ANDPAD USE CASE, `ref/andpad-scroll-900.png`, `ref/andpad-scroll-2700.png`)
- Cards 283 px wide, 72 px gutter (3 cards = 993 px = the 994 container): micro-label "CREW 01" Inter Tight 0.75rem, title Albert Sans 700 1.5rem/1.4 above a 3:2 photo (283 × 189), one line of text 0.875rem/1.86, then right-aligned "VIEW MORE" Albert Sans 700 1.125rem + 20 × 1 px `#EF3340` dash, 12 px gap.
- Feature cards (A diary day): 16:9 photo, a 68 × 68 `#EF3340` tile radius 12 px with a white 32 px line icon overlapping the photo's bottom-right corner by 24 px (x and y), then title 1.5rem, one line, VIEW MORE dash.
- Edge tab 56 × 38 `#C8102E` flush to the left viewport edge, aligned to the top of the CREWS and A DIARY DAY section headings (desktop only; hidden < 960 px).

### Continuation to inner pages (≥ 4 required; all listed)
| Page | T1 mini triptych | T2 wipe label + 32 px rule | T3 header | T4 cards / edge tab |
|---|---|---|---|---|
| About | G17 | yes | yes | edge tab at "People" |
| Crews | G01 | yes | yes | 3 crew cards (G03–G05) + edge tab |
| A diary day | G02 | yes | yes | 6 feature cards with icon tiles (G06–G11) + edge tab |
| Rollout | G13 | yes | yes | — |
| Plans | G10 | yes | yes | — |
| Field notes (index/archive/tag) | — (head uses label + rule only) | yes | yes | post cards = T4 cards (label = category, title above 3:2 image, VIEW MORE dash) |
| Single post | featured image as mini triptych | category as wipe label | yes | 3 related posts as T4 cards |
| Waitlist | G06 | yes | yes | — |
| Request (contact) | G17 | yes | yes | — |
| Privacy / Terms / Thanks | — | yes | yes | — |

---

## Key visual concept

### (1) Reference first screen: concept, story, signature motion
ANDPAD's first screen: left, a bold two-line promise ("from management to the site"), a two-line sub-promise, a ruled share figure with a big red number and two figures inside laurel brackets, and one red download button with a darker bottom edge. Right, a **real photograph of a person in a white helmet and red vest on a site in front of blue hoarding**, cut into three vertical slices with the middle one lower, a round red "on air" badge on the lower-left, a red square and a white banner strip with heavy italic words across the lower third. Story: **the office promise is delivered by a person standing on the site.** Motion: text and slices fade up (0.5 s, ~30 px) on load; sub-headings wipe open with a red bar; header slides in after the first screen.

### (2) Our transposed scene (same industry, same composition, same motion idea, same image type)
A high-key documentary photograph (G01) at the **hoist gate** at 06:40: the site manager (white helmet, steel-grey jacket) hands a tablet to the foreman (white helmet, hi-vis vest in muted orange) who is ticking the morning board on the gate; scaffolding and pale hoarding behind, overcast light. It is cut into the three slanted slices with the middle dropped. Story: **the day is handed over at the gate and written once for everyone.** The badge says "Today's diary", the banner strip carries the moment "06:40 Morning board · Gate 2". Same composition (text left 45%, sliced photo right 55%, badge lower-left, square on the seam, strip across the lower third); same motion (slices rise staggered, badge scales in, strip wipes in left→right).

### (3) KV checklist (all six on the home first screen at 1440 × 900, visible without scrolling)
| # | Reference element | Our counterpart | Position (1440 desktop) | Motion | Image |
|---|---|---|---|---|---|
| 1 | Bold two-line promise | H1 "One diary / for the site." Albert Sans 700 4.25rem/1.12 ink + sub 1.5rem 700 "Every crew's day, recorded once / and read by the whole site." | left column x 110, width 520, H1 top y ≈ 190 | fade-up 24 px, 0.5 s ease, on load (CSS keyframes, no sp-reveal) | — |
| 2 | Ruled share figure + big red number + two laurel figures | ruled box "One crew · one site" (3 px ink rules top/bottom, 155 px) + "7-day pilot" Albert Sans 800 3.25rem `#EF3340`; two bracket-ring figures (1.5 px ink arcs left/right, 64 px tall): "Sections a day 6", "Sign-off 17:00" | under the sub, y ≈ 410–550 | none | — |
| 3 | Red button, darker bottom edge | single CTA "Request a rollout" + small line "one crew, 7 days, no charge"; 333 × 85, `#EF3340`, 4 px bottom `#C8102E`, radius 0 | left, y ≈ 592–677 | hover: background `#C8102E`, 0.2 s | — |
| 4 | Photo in three vertical slices, middle lower | G01 in three **slanted** slices (crops kv-1/2/3), 214 × 492, 8 px gaps, middle +50 px | x 690–1348, y 135–677 | slices rise 24 px + fade, 0.5 s ease, delays 0 / 90 / 180 ms | G01 |
| 5 | Round red badge + offset ring, red square | Ø175 `#EF3340` "Today's / diary" + 1 px offset ring; 40 px `#EF3340` square at the slice 2/3 seam | badge centre (698, 582); square (1112, 403) | badge scale .85→1 + fade, 0.4 s, delay 0.35 s | on G01 |
| 6 | White banner strip with heavy italic words | white strip 72 px, "06:40 Morning board · Gate 2" Albert Sans 800 italic 2.25rem | y 555–627, x 790–1348 | clip-path wipe left→right 0.5 s `cubic-bezier(.8,0,.5,1)`, delay 0.5 s | on G01 |

All load motions: CSS keyframes in style.css, only under `html.sp-js:not(.sp-no-motion)` inside `@media (prefers-reduced-motion: no-preference)`, `animation-fill-mode: both`, final state = natural state; never in the editor; `?sp-static` shows the final state. No `sp-reveal` inside the hero.

Mobile 390 × 844 (no absolute label over text): header 56 px; H1 2.5rem; sub 1.125rem; proof figures one row; CTA full width (358 × 72); slices below the CTA: 3 × 114 px wide, 260 px tall, 8 px gaps, middle +24 px; badge Ø88 and banner line become a **static flex row under the slices** (badge left, strip text 1.125rem right, white ground); the square 20 px stays on the seam (no text on it). Nothing positioned absolutely overlaps any text.

---

## 2. Colour

Reference relation kept: white page, pale grey band, black ink, one hot red used only on small solid blocks. Accent uses ANDPAD's exact reds (same industry, a red signal reads as site safety colour, so no reason to change). Ink/main moves from black to the plan's steel `#3A4654` (design-plan palette "blue steel"; reason: the row assigns steel, and steel on white keeps ≥ 10:1 contrast).

| Role | Hex | Source token | Use | Share of a page |
|---|---|---|---|---|
| Ground | `#FFFFFF` | (a) ground `#FFFFFF` | page | ~70% |
| Band | `#F9F9F9` | (a) band `#F9F9F9` | intro band, plans band, FAQ band | ~14% |
| Ink | `#2B3440` | (a) text `#000000` → steel ink | headings, body, rules, proof brackets | ~7% |
| Main steel | `#3A4654` | design-plan hex | logo tile, call cell, request band, footer, quote bar | ~6% |
| Accent | `#EF3340` | (a) accent `#EF3340` | hero CTA, badge, square, labels' wipe bar, 32 px rules, dashes, icon tiles | ≤ 3% |
| Accent pressed | `#C8102E` | (a) pressed `#C8102E` | header CTA cell, CTA bottom edge, hover, outline button border/text, edge tab | ≤ 1% |
| Lines | `#E6E6E6`, strong `#CCCCCC` | (a) hairlines | dividers, table rules | hairline |
| Muted text | `#6B7480` | derived from ink | captions, footnote, meta | — |

- First-screen saturated share: reference 18.9%; ours **target ≤ 8%, hard cap 15%** (`scripts/check-first-screen.py`), quality gate 30%. Budget at 1440 × 900: CTA 28.3k px + badge 24.1k + square 1.6k + header cell 14.8k + strip words ≈ 5k ≈ 74k / 1.296M ≈ **5.7%**. G01 must be graded high-key and muted (steel-grey, white, pale concrete; the vest a muted orange no larger than ~3% of the frame).
- Not beige: white ground, cool grey band. No large accent fields; the request band is steel, not red.
- Contrast: white on `#EF3340` 3.7:1 → button text ≥ 1.25rem bold (passes large-text); white on `#C8102E` 5.6:1; ink on band 12:1.

## 3. Typography (font_direction **sans**)

- Latin headings: **Albert Sans** (600/700/800, + 800 italic for the strip). Latin body and labels: **Inter Tight** (400/600). Both OFL, bundled in `assets/fonts/` as woff2, loaded with **theme.json `fontFamilies` + `fontFace`** (editor and front end identical), listed in theme-meta.json `fonts[].files` with licence and in readme.txt.
- CJK (sans-serif gothic, never serif): zh-TW **Noto Sans TC**, ja **Noto Sans JP**, bundled as subsets (Hokuto/Hada method; the zh subset script is known broken, use their workaround) and declared in theme.json fontFace.
  - Heading stack en/fr/de: `"Albert Sans", "Inter Tight", system-ui, sans-serif`
  - Body stack en/fr/de: `"Inter Tight", system-ui, -apple-system, "Segoe UI", sans-serif`
  - `:root:lang(zh*)` heading: `"Albert Sans", "Noto Sans TC", "PingFang TC", "Microsoft JhengHei", sans-serif`; body: `"Inter Tight", "PingFang TC", "Microsoft JhengHei", sans-serif` (no bundled zh font, no JP font in the body stack — repo contract).
  - `:root:lang(ja)` heading: `"Albert Sans", "Noto Sans JP", "Hiragino Sans", "Yu Gothic", sans-serif`; body: `"Inter Tight", "Hiragino Sans", "Yu Gothic", "Meiryo", sans-serif`.
  - Because style.css uses `:lang(`, copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it.
- Sizes (theme.json presets; source token (b)): small 0.75rem (labels, 12 px, uppercase, tracking 0.04em), body 0.9375rem / line-height 1.86 (token body 13–14 px / 26 px, raised 1–2 px for Latin readability), medium 1.5rem / 1.4 (token h3 24 / 33.6), large 2.25rem / 1.35 (section H2, token centred H2 ≈ 34 px), x-large 3.25rem (proof figure), **xx-large 4.25rem / 1.12** (hero H1; token ≈ 60 px raised to meet the ≥ 4.25rem rule). Weights: headings 700, figures 800, body 400, labels 600. Letter-spacing headings −0.01em.
- CJK: headings ≈ 0.75× the English size, body line-height 1.85; fr/de `hyphens: auto`.

## 4. Spacing, corners, shadows (source tokens (c), (d))
- Containers: text/sections **994 px** (`contentSize`), card rows and tables **1067 px** (`wideSize`); hero text column starts at x 110.
- Section padding 112 px top/bottom desktop (token 100–120), 72 px mobile.
- Radius **0** on buttons, cards, photos, tiles, table; only the feature icon tiles have 12 px.
- Outline button (secondary, jump links only): 1 px `#C8102E`, text `#C8102E` Inter Tight 600 0.9375rem, chevron, 260 × 52, radius 0.
- Quote heading: 4 px `#3A4654` left bar, 30 px left padding (token: 4 px black bar).
- Shadows: none, except the header's 1 px line.

---

## 5. Home page (one long page, anchors)

### First screen
See Key visual concept. Header 84 px (sticky). Hero area y 84–860, white. A one-line footnote at y ≈ 817, x 110: Inter Tight 0.75rem `#6B7480` "Pilots start every Monday. Support Mon–Fri 06:30–18:00 CET, Sat 07:00–12:00." The `#F9F9F9` intro band starts at y 860, so its top edge is visible. Forbidden on the first screen: table, form, search, giant centred word, cut-outs, vertical text.

### Block order
| # | Pattern / anchor | Purpose | Layout and photos | Copy (en) |
|---|---|---|---|---|
| 1 | `gd-hero` `#top` | key visual + CTA | T1, see KV | ~45 words |
| 2 | `gd-intro` | the promise in one paragraph | full-bleed band `#F9F9F9`; centred H2 2.25rem in 994 ("Written at the gate, read in the office, kept for the handover."); one centred 70-word paragraph (680 px measure); a centred 650 × 366 (16:9) photo **G02**; under it the outline button "See a diary day ›" → `#day` | 80 words (narrative ¶1) |
| 3 | `gd-crews` `#crews` | which crews a rollout suits | white; edge tab; T2 label CREWS + H2 "Crews that start the day at a gate." + rule; 3 × T4 cards in 994: CREW 01 Concrete & frame (**G03**), CREW 02 Fit-out & finishing (**G04**), CREW 03 Roofing & façade (**G05**); one line each; VIEW MORE → `/crews/#…`. Under the row, one 50-word paragraph on which crews are not yet suited (night shifts without signal). `sp-stagger` + `sp-reveal--up` on cards | 110 words |
| 4 | `gd-day` `#day` | how a diary day is recorded | white; edge tab; T2 label A DIARY DAY + H2 "Six sections, one sign-off at 17:00." + 60-word paragraph (narrative ¶2); 3 × 2 feature cards in 1067 (gutter 48 px), each 16:9 photo + 68 px icon tile overlapping bottom-right: Morning board **G06**, Crew & hours **G07**, Deliveries **G08**, Photos & marks **G09**, Weather & delays **G11**, Sign-off **G10**; one line each; VIEW MORE → `/diary-day/#…`. `sp-stagger` + `sp-reveal--up` | 60 + 6 × 14 words |
| 5 | `gd-gate` | pause, the site at dawn | **full-bleed Cover `sp-parallax`**, height 560 px desktop / 420 mobile, background **G12** (`--sp-par: 10%`, mobile 6%). Foreground (static) white box 460 px wide at x 110, bottom 64 px: quote heading (4 px steel bar) 1.5rem "The board used to be wiped at five. Now the day stays." + "Lena Hoffmann, site manager, Harbourline Construction" 0.75rem | 30 words |
| 6 | `gd-rollout` `#rollout` | how a rollout runs | white; T2 label ROLLOUT + H2 "Seven days, one crew, no charge."; two columns in 1067: left 7/12 = four rows separated by 1 px `#E6E6E6`, each row: day label Albert Sans 700 1.5rem `#3A4654` (Day 1 / Day 2 / Days 3–6 / Day 7) left 160 px, title + 30-word text right; right 5/12 = photo **G13** 3:4 top-aligned. Under the rows the CTA button (same as hero, 333 × 72) | 140 words (narrative ¶3) |
| 7 | `gd-stories` `#stories` | three stories | white; T2 label STORIES + H2 "Three crews, three sites."; three stacked rows in 994: 3:2 photo 420 px left, right: micro-label STORY 01, title 1.5rem, 45-word excerpt, VIEW MORE dash → post. Photos **G14**, **G15**, **G16**. Rows `sp-reveal--up` | 3 × 55 words |
| 8 | `gd-plans` `#plans` | prices | full-bleed band `#F9F9F9`; T2 label PLANS + H2 "Start free, pay per site."; table full 1067 width (6 rows from section 0: Plan / Included / Price), then the CTA button left-aligned under the table. No reveal on the table | 6 rows + 25 words |
| 9 | `gd-questions` `#questions` | FAQ | white; T2 label QUESTIONS + H2; 5 `details` blocks, 1 px `#E6E6E6` rules, summary Albert Sans 700 1.125rem, `+` drawn with CSS borders: signal at the gate, languages (5), who sees the diary, after the pilot, export at handover | 5 × 40 words |
| 10 | `gd-request` `#request` | the one CTA, closed | full-bleed `#3A4654`; centred in 994: white T2 label REQUEST (bar still accent), H2 white "Request a rollout for one crew."; one 40-word line; the CTA button (accent); a line "or call +31 10 555 0141, Mon–Fri 06:30–18:00 CET" `#D9DEE3`. Button links `/request/` | 60 words |
| 11 | footer | — | white, top hairline; logo tile 56 px + wordmark, address, hours, links (Field notes, Waitlist, Privacy, Terms), "© 2021–2026 Genba Diary B.V." | — |

English home ≥ 400 words in body copy, narrative paragraphs in #2, #4, #6 (≥ 3). CJK home ≥ 500 characters. The CTA "Request a rollout" appears in header, #1, #6, #8, #10 (same words, same colour).

### Home photo positions (18 `<img>`, 16 distinct photos, none repeated)
kv-1, kv-2, kv-3 (crops of G01) · G02 · G03 G04 G05 · G06 G07 G08 G09 G11 G10 · G12 (parallax) · G13 · G14 G15 G16.

### Comparison with recent home orders
| # | Kataribe Partners | Yanagi Hygiene | Kaban Luggage | Kogarashi Inn | **Genba Diary** |
|---|---|---|---|---|---|
| 1 | hero full-bleed + docked card | hero skyline foot | hero tile strip | cover halves | **sliced slanted triptych + badge + strip, text left** |
| 2 | brief band | intro wash | dark trip questions | dark intro parallax | **grey band, centred line + 16:9 photo + outline button** |
| 3 | fit 3×3 tick cells | sites | counter flush photo | notes | **3 crew cards (label/title/photo/dash)** |
| 4 | week strip | sticky-media hour | parts spec catalogue | day-schedule | **3×2 feature cards with icon tiles** |
| 5 | numbers gradient band | parallax dawn | fitting ink band | rooms flush photo | **parallax gate photo with quote box** |
| 6 | stories 3 cards | records | workshop price list | table | **rollout rows + 3:4 photo + CTA** |
| 7 | retainers table | cases grey panel | stories mosaic | walks parallax band | **story rows (photo left)** |
| 8 | people | fees | visit | people | **plans table on grey band** |
| 9 | request photo band | request | footer | stay rates | **FAQ details** |
| 10 | footer | notes / footer | — | footer | **steel request band** |
Why not alike: no full-bleed or halves cover (ours is a sliced, stepped photo on white with text left); no week strip, hour schedule or day-schedule (the day is shown as six feature cards, not a time list); no people section on the home; no mosaic; the only parallax is a mid-page gate photo with a static quote box (Yanagi/Kogarashi use dawn/walk bands without the steel-barred quote and sit in different positions). Signatures (slices + badge + strip, rectangle wipe, flush tile/CTA header, icon-tile cards, edge tab) appear in none of the four.

---

## 6. Inner pages (12 pages + post templates)

Every inner page: T3 header → page head (white, 994: left column T2 label + H1 Albert Sans 700 3.25rem two lines + 40-word lead; right mini triptych 560 × 320 with 28 px square and Ø96 accent badge carrying the page word; mobile: triptych under the lead, badge static) → body → steel request band (as home #10, shortened) → footer. No sidebar.

1. **About** (`about`): head G17, badge "2021". Story of founding in Rotterdam in 2021 by Marta (a site manager who kept a paper site diary for years) and Samuel; why one diary per site; G02 inside the text; parallax band G12 (`--sp-par: 8%`); "People" with edge tab: 7 people as text rows (name Albert Sans 700 1.125rem, role, one sentence), 1 px rules, no portraits grid.
2. **Crews** (`crews`): head G01, badge "Crews". Three crew types as T4 cards (G03–G05) with anchors `#concrete`, `#fit-out`, `#roofing`, each followed by a 90-word section; "Not yet suited" list; edge tab.
3. **A diary day** (`diary-day`): head G02, badge "17:00". The six sections as feature cards (G06–G11, anchors), each with a 70-word explanation of who writes it, when, and who reads it; a sample day as a two-column ruled list (time | entry, 6 rows; a list, not a timeline with dots); edge tab.
4. **Rollout** (`rollout`): head G13, badge "7 days". The 4 stages in full (ruled rows like home #6), what we need from the site (signal at the gate, one tablet or phone per crew, 45 minutes before the shift), after day 7. CTA.
5. **Plans** (`plans`): head G10, badge "$0 pilot". Full plans table (6 rows), billing notes (monthly, per active site, cancel at month end), FAQ on billing (3 details). CTA.
6. **Field notes** (posts page, role `posts`, empty content; `home.html`; also `archive.html`, `category.html`, `tag.html`): head label FIELD NOTES + H1 + rule; posts as T4 cards in 3 columns (283 / 72 gutter): category micro-label, title above 3:2 image, excerpt one line, VIEW MORE dash.
7. **Single post** (`single.html`): category as wipe label, title 2.25rem, date, featured image as mini triptych (640 × 360) with square, text column 680 px, quote heading style for blockquotes, 3 related posts as T4 cards.
8. **Waitlist** (`waitlist`, newsletter): head G06, badge "Early". Early access to the Handover pack module; a simple signup form (name, email, company, crew size) below the head; no first-screen form on home.
9. **Request** (`request`, contact): head G17, badge "Mon". The rollout request form (name, company, site city, crews, preferred Monday, phone), address, hours, phone, email; Thanks redirect.
10. **Privacy** (`privacy`), 11. **Terms** (`terms`): label + H1, text column 680, no image.
12. **Thanks** (`thanks`): label + H1 "Thank you. We'll call before 18:00." + what happens next (day 1 call) + link home.

Posts (5): Stories ×3 (G14, G15, G16), Product notes ×2 ("Why the board is a photo, not a form" G08; "Writing a diary day offline" G11). Categories: Stories, Product notes. Tags: concrete, fit-out, roofing, rollout, offline, handover.

`screens`: home `/`, about `/about/`, news `/field-notes/`, article = story 1, category = `/category/stories/`, tag = `/tag/rollout/`, newsletter `/waitlist/`, contact `/request/`.

---

## 7. Responsive (hard)
- 390 px first screen: no vertical text, no absolutely positioned label over text (badge and strip become a static row under the slices, see KV); no horizontal overflow (`html, body { overflow-x: clip }`).
- Plans table at ≥ 782 px: full `wideSize` width (1067 or 100% of the viewport minus padding), `table-layout: fixed`, columns 28% / auto / 16rem; price column `white-space: nowrap; text-align: right`, never clipped (tested at 800 and 1280).
- Every table < 782 px is stacked: each row a block (plan name 1.125rem bold, included text, price right-aligned on its own line), hairline between rows.
- Cards: 3 → 2 columns at < 1100 px, 1 column < 700 px; feature icon tile stays inside the viewport (overlap 16 px on mobile).
- Edge tabs hidden < 960 px. Header CTA collapses as in T3.

## 8. Imagery (IMAGERY: **photo**, follows ANDPAD: real people on real sites)

STYLE (exact string on every prompt):
`high-key documentary photograph of a modern construction site, soft overcast daylight, bright and airy exposure, steel-grey, white and pale concrete tones with muted safety orange accents, white helmets, natural candid moment, diverse adult crew, 35mm lens, clean uncluttered framing, no readable text, no logos, no brand marks, no signage lettering, no Japanese elements`

17 generated photos (G01–G17), one at a time, each read and regenerated if it shows text, logos, broken hands or faces, or style drift. G01 is cut by a script into three strips (`kv-1.webp`, `kv-2.webp`, `kv-3.webp`, each ⅓ of the width, cut from one 1800 × 1380 source) plus kept whole for inner use. All ≤ 300 KB, ≤ 2000 px, 0 cut-outs; readme.txt lists each (AI-generated, CC0). Tablets and phones show a blank pale screen.

| ID | Subject / composition | Ratio | Used on (once per page) |
|---|---|---|---|
| G01 ★ | hoist gate 06:40: site manager hands a tablet to a foreman who ticks a blank ruled morning board on the gate, scaffolding and pale hoarding behind, both centred so each third holds a figure/board | 4:3 source | Home KV (3 crops); Crews head |
| G02 ★ | close: two hands holding a tablet over a site drawing on a plywood table | 16:9 | Home intro; About body; Diary day head |
| G03 ★ | concrete crew pouring a slab, pump hose, rebar | 3:2 | Home crews; Crews |
| G04 ★ | fit-out crew installing ceiling boards in a bright classroom shell | 3:2 | Home crews; Crews |
| G05 ★ | roofer crew on a flat roof of a logistics hall, sky | 3:2 | Home crews; Crews |
| G06 ★ | foreman ticking a blank whiteboard grid with magnets at the gate | 16:9 | Home day; Diary day; Waitlist head |
| G07 ★ | crew arriving at the gate at sunrise, one scanning a phone | 16:9 | Home day; Diary day |
| G08 ★ | delivery truck at the gate, worker checking a pallet against a tablet | 16:9 | Home day; Diary day; post "board is a photo" |
| G09 ★ | phone photographing rebar ties, close-up | 16:9 | Home day; Diary day |
| G10 ★ | hand signing on a tablet in a bright site cabin at 17:00 | 16:9 | Home day; Diary day; Plans head |
| G11 ★ | light rain on site, tarps over materials, worker in a rain jacket | 16:9 | Home day; Diary day; post "offline" |
| G12 ★ | wide dawn view of a mid-rise frame with crane and hoist, pale sky (parallax, keep the top 15% quiet sky) | 21:9 | Home gate band; About parallax |
| G13 ★ | rollout specialist briefing four crew members at the hoist gate | 3:4 | Home rollout; Rollout head |
| G14 ★ | site manager and foreman reviewing a tablet beside a concrete column (Story 01) | 3:2 | Home stories; post 1 |
| G15 ★ | foreman measuring a wall in a school corridor under refurbishment (Story 02) | 3:2 | Home stories; post 2 |
| G16 ★ | project lead on a façade scaffold photographing panels (Story 03) | 3:2 | Home stories; post 3 |
| G17 | small bright office with a large window onto a harbour, three colleagues at a table with laptops and a site drawing | 3:2 | About head; Request head |
★ = used on the home page.

## 9. Scroll effects (sp-scroll v1, three kinds max)
| Effect | sp-* | Where | Reference (andpad.jp) | Our values |
|---|---|---|---|---|
| Fade-in-up | `sp-reveal sp-reveal--up` (+ `sp-stagger` on card rows) | intro paragraph+photo, crews cards, day cards, rollout rows, story rows, request heading | `data-inscreen` → `is-inscreen`, 0.5 s, ease, ~30 px, no stagger | `--sp-dur: .5s`, `--sp-ease: ease`, `--sp-dist: 28px`; stagger 0.12 s (spec default) on card rows |
| Rectangle wipe | `sp-reveal sp-reveal--wipe` on the label group + theme CSS bar keyed on `.sp-in` | every T2 label and 32 px rule | `left-to-right-rectangle` 0.4 s `cubic-bezier(0.8,0,0.5,1)`, delay 0.6 s; `borderToLong` 0→32 px | bar 0.4 s + 0.4 s, delay 0.2 s; rule 0.4 s linear |
| Parallax | `sp-parallax` | home #5 (G12), About band (G12) | no true parallax on ANDPAD; its depth device is the stepped hero slice + fade-up; we carry that depth into scroll on the gate photo | `--sp-par: 10%` desktop, 6% < 782 px (media-query override), Cover background moves, quote box static |
None on: hero, plans table, forms, FAQ, legal text. No custom scroll listeners, no libraries. Reveals ≤ 60% of home blocks.

## 10. Similarity table (target 80%)
| Dimension | Reference (token) | Genba Diary |
|---|---|---|
| Ground / band | #FFFFFF / #F9F9F9 (a) | #FFFFFF / #F9F9F9 |
| Ink | #000000 (a) | #2B3440 steel ink (plan palette) |
| Accent / pressed | #EF3340 / #C8102E (a) | #EF3340 / #C8102E |
| Lines | #E6E6E6 / #CCCCCC (a) | same |
| First-screen saturated | 18.9% (a) | ≈ 5.7%, cap 15% |
| Hero H1 | ≈ 60 px / 700, tight (b) | 68 px (4.25rem) / 700 / 1.12 |
| H3 | 24 / 33.6 px 700 (b) | 1.5rem / 1.4 / 700 |
| Body | 13–14 / 26 px 400 (b) | 15 px / 1.86 / 400 |
| Labels | 12–13 px uppercase 0.04em (b) | 0.75rem uppercase 0.04em |
| Containers | 994 / 1067 px, hero text x 110 (c) | 994 / 1067, x 110 |
| Section rhythm | 100–120 px (c) | 112 px |
| Header | 84 px, tile 84 × 84, 2 cells 150 × 50 (c)(f) | 84 px, tile 84 × 84 steel, 2 cells 176 × 84 |
| Radius | 0 (d) | 0 (icon tiles 12 px as reference) |
| Hero slices | 3 × ~213 × 492, middle −50 px, x 690–1350 (e) | 3 × 214 × 492, middle +50 px, x 690–1348, slanted 2.3° |
| Badge / square | Ø175 red + offset ring / 40 px red (f) | Ø175 #EF3340 + offset ring / 40 px |
| Banner strip | white, heavy italic, lower third (e) | white 72 px, Albert Sans 800 italic 2.25rem |
| Case cards | 283 px, 72 gutter, 3:2 photo, label/title/line/VIEW MORE + 20 px dash (c)(e)(f) | identical geometry |
| Feature cards | 16:9 + 68 × 68 r12 red icon tile overlap (e) | identical geometry, our own icons and photos |
| Edge tab | 56 × 38 red at viewport edge (f) | 56 × 38 #C8102E |
| Quote heading | 4 px black bar, 30 px pad (d) | 4 px steel bar, 30 px pad |
| Outline button | 1 px #C8102E, red text, chevron (d) | same, 260 × 52 |
| Motion | fade-up 0.5 s ~30 px; wipe 0.4 s cubic-bezier(.8,0,.5,1); underline 0→32 (g) | sp up 0.5 s 28 px ease; wipe bar 0.4 s same curve; rule 0→32 |
| Imagery | real site photography, people on site (e) | high-key real-style site photography, people on site |
Not copied: photos, UI screenshots, icons, copy, logo, laurels (ours are bracket rings), the red video card.

## 11. Home acceptance checklist
1. First screen 1440 × 900: H1 "One diary / for the site." at 4.25rem left; proof block with "7-day pilot" in accent and two bracket-ring figures; CTA 333 × 85 accent with darker bottom edge; G01 in three slanted slices with middle +50 px; Ø175 accent badge "Today's diary" + offset ring at the lower-left; 40 px square on the 2/3 seam; white italic strip "06:40 Morning board · Gate 2" across the slices; grey band edge at y 860. All six KV items visible without scrolling.
2. Header: steel tile 84 px flush top-left, centred anchor menu with dividers, two flush CTA cells top-right; sticky.
3. `check-first-screen.py` ≤ 15% (target ≤ 8%); no table, form, search, cut-out or vertical text on the first screen.
4. Block order equals section 5; anchors `#crews #day #rollout #stories #plans #questions #request` work from the menu.
5. Every section opens with the T2 label (wipe bar in motion mode) and the 32 px accent rule.
6. Crew cards and day cards match the T4 geometry; icon tiles overlap the photos; edge tabs on CREWS and A DIARY DAY.
7. `sp-parallax` on the gate band passes `check-parallax.mjs` (≥ 6 px desktop and mobile, 0 in reduced motion); reveals pass; no reveal in the hero.
8. Plans table: 6 rows, prices exactly as section 0, full width ≥ 782 px, price column nowrap right, stacked on mobile.
9. Home has 18 `<img>` (16 distinct photos), none repeated; no text/logos in photos.
10. One CTA wording "Request a rollout" everywhere; numbers (7 days, 6 sections, 17:00, $0/$59/$390/$480/$15/$35, hours) identical across home, inner pages and five languages.
11. Fonts: Albert Sans / Inter Tight, Noto Sans TC/JP for zh-TW/ja headings, same in editor and front end (check-editor-fonts.mjs).
12. 390 px: no horizontal overflow, no text overlap, badge/strip static under the slices.
