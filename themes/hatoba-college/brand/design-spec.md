# Design spec - Hatoba College (hatoba-college)

Stage 1 spec (design director). Implementers follow this literally; any number here wins over a guess.
Row: b31-2, maritime training college, type `education`, editorial-magazine, framed-window hero, centred nav, serif (Newsreader / Source Serif 4, CJK Noto Serif TC / JP), five languages (en, zh-TW, ja, fr, de), page_structure process-timeline, first_screen timeline-line.
Main reference: https://web.aiu.ac.jp/ (S5-Style 11591). Secondary: https://boat-osaka.com/osaka-river-loop/ (S5-Style 11084). Tokens: `brand/reference-tokens.md` (cited below as `tok(a)..tok(g)`). Screens: `brand/ref/*.png`.
**IMAGERY: photo** (the reference is photographic). Film-grain documentary photographs; no illustration anywhere.

---

## 1. Signature techniques (3 counted + 1 supporting)

### T1 - Framed window with docked caption bar, pager notch and week-tick line (home hero)
- **Source:** AIU first screen, https://web.aiu.ac.jp/ (`ref/aiu-first.png`). AIU puts a hard-edged 1260x510 photographic slider directly under a 40px dark top bar; a solid green caption bar 480x56 is docked on the window's lower-left edge with white bold text; a white notch at the lower-right holds arrows, 5 dots and a square pause button. Swiper fade 800ms, 5s autoplay (tok(e), tok(g)).
- **Ours (home hero):** window 1260 wide at 1440 (centred, 90px side margins; scales `min(1260px, 100% - 2*clamp(16px,6.25vw,90px))`), aspect **2.4:1** (1260x525), radius 0, no border, top = header bottom + 0 (window touches the header band like AIU). Three slides P01/P02/P03 cross-fade.
  - Caption bar: `#3F5260`, **480x56**, docked flush at window bottom-left (left 0, bottom 0, i.e. inside the window frame, like AIU), text Newsreader 1.25rem/600 white, letter-spacing 0.02em, padding 0 28px, vertically centred. Text changes per slide (fades with it).
  - Pager notch: white `#FFFFFF`, **260x56**, flush bottom-right of the window, contains: prev arrow (chevron 18px, stroke 2px `#3F5260`), 3 dots (12px, `#C9CED2` idle, `#3F5260` current), next arrow, square pause button 28x28 (1.5px `#3F5260` outline, two bars). Real buttons with translated `aria-label`.
  - Week-tick line (row first_screen "timeline-line"): directly under the window, full window width, 40px tall row: 1px `#8FA3AE` line, **12 ticks** (1px x 8px) evenly spaced, labels "W1 ... W12" Source Serif 4 0.75rem `#5E6E79` under ticks 1, 4, 8, 12 only; a 2px `#3F5260` fill grows from W1 to the slide's week (slide1 = W4 "Shore school", slide2 = W8 "Harbour watch", slide3 = W12 "Berth confirmed"), transition `width 800ms ease-in-out`.
  - **Do not weaken:** hard edges (radius 0), the solid navy bar must be fully opaque and the same 480x56 proportion, the white notch must visibly cut into the photo, the window must stay inset (never full-bleed), the tick line must be visible in the first screen.
- **Inner pages:** every inner page hero = a smaller framed window (1260 wide, **3.6:1**, single photo, no pager) with the same docked navy caption bar carrying the page name, and the 12-tick line under it showing the page's relevant week span (Stages page: whole line; Programmes: W1-W12 filled; Admissions: none filled, label "Before W1"; Training berths: W12 tick filled). Used on: Programmes, The Course (stages), Harbour & Simulator, Instructors, Admissions, Training Berths, Cadet Stories, Visit & Contact, About.

### T2 - Enlarged-initial serif section words over a hairline with a short brass underline
- **Source:** AIU "AIU TOPICS / FEATURE / NEWS" (`ref/aiu-first.png`, `ref/scroll-aiu-1800.png`): Playfair 400 42px uppercase, first letter larger; below it a lowercase label "New" in serif with a 160px taupe underline segment sitting on a full-width 1px #DDD rule (tok(b), tok(c), tok(f)).
- **Ours:** every home section opens with an uppercase Newsreader 400 word, **2.75rem** (44px; ref 42px) desktop / 2rem mobile, letter-spacing 0.02em (ref 0.8px), colour `#1D1D1D`; the first letter wrapped in `<span class="hc-initial">` at **1.3em**. 20px below: a sub-label in Newsreader italic 1.5rem `#8A7456` (e.g. "Weeks 1-12") sitting on a **160px x 2px `#8A7456`** underline segment, which itself sits on a full-width (content width 1024px) **1px `#DDDDDD`** rule. Margin below rule 40px. Write the words and labels in block markup (no CSS `content:`).
- **Do not weaken:** the initial must be visibly larger (1.3x, not 1.1x); the underline segment must be brass/taupe, not grey; the rule must run the whole content width.
- **Inner pages:** all inner pages use T2 for every H2 section (Programmes "FEES", Course "STAGES", Instructors "PEOPLE", Admissions "INTAKES", etc.).

### T3 - Stacked Stage bars ending in a "Berth confirmed" pill with big date lines
- **Source:** AIU FEATURE 1-5 bars (`ref/scroll-aiu-1800.png`: white bars ~790x46, 1px #E5E5E5 border, shadow 0 2px 6px rgba(0,0,0,.08), coloured serif label "Feature 1" left, title 20px) + ORL "Flight date" pill tag beside the river photo with large stacked date lines (`ref/orl-first.png`, tok(f)).
- **Ours (home "THE COURSE" + "BERTH" block):** five full-content-width (1024px) white bars on a `#E4E8EB` panel (panel padding 56px 64px). Each bar: min-height 96px, border 1px `#E5E5E5`, shadow `0 2px 6px rgba(0,0,0,.08)`, radius 0, grid `150px 1fr 1fr 1fr` gap 24px, padding 22px 28px:
  1. label "Stage 1" Newsreader italic 1.5rem `#3F5260`;
  2. title Newsreader 1.25rem/600 `#1D1D1D` + weeks chip below (pill 999px, 1px `#8FA3AE` border, Source Serif 4 0.8125rem, "Weeks 1-4");
  3. "Cadet does" (small caps label 0.75rem `#5E6E79` + 1-2 sentences 0.9375rem);
  4. "College does" (same).
  Bars stack with 12px gap. Directly after Stage 5 the **berth-confirmed block**: photo P05 left (4:5, 420 wide, hard edge), right column: brass pill tag "Berth confirmed" (bg `#8A7456`, white, Source Serif 4 0.875rem/700, letter-spacing 0.1em, padding 6px 18px, radius 999px - ORL 23px pill), then three big date lines Newsreader 2.25rem/400 (ref 36px), each with a 1px `#DDDDDD` rule under: "12 January 2027 - Intake", "26 March 2027 - Assessment", "2 April 2027 - Berth confirmed" (the date part `#1D1D1D`, the label part italic `#8A7456` 1.25rem).
- **Do not weaken:** five bars, all visible as separate shadowed white bars (not a table, not a vertical timeline line with dots); label in navy italic serif; the pill must be filled brass with white text.
- **Inner pages:** The Course page (full 5 bars, each bar expanded with a third "You leave with" column and a photo per stage band), Programmes (each programme row uses the bar shape with weeks chip), Admissions (4 application steps as bars, last one ends in the brass pill "Place confirmed" + dates), Training Berths (berth-confirmation bar + pill + the same three dates).

### T4 (supporting, not counted) - Outlined loop-glyph numbered sub-heads
- **Source:** ORL "How to enjoy" outline infinity glyph + 1/2/3 (`ref/scroll-orl-900.png`).
- **Ours:** a 28x16 outline rope-loop SVG (1.5px `#3F5260`, inline SVG via PHP asset helper) followed by "1 / 2 / 3" Newsreader italic; used on the home "A DAY ON THE QUAY" captions and Visit page "How to find Pier 3".

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
AIU's first screen is a calm photographic window directly under a dark 40px top bar: a faded mosaic of brochure pages and campus photographs fills the window, one centred cover stands out sharply, a solid green caption bar sits on the lower-left edge naming the item, and a white pager notch with dots, arrows and a pause button cuts into the lower-right. Story: "everything about studying here, in one quiet browsable window". Signature motion: Swiper fade 800ms, autoplay hold 5000ms, user-controllable pause; page load white overlay 0.4s.

### (2) Our transposed scene (same composition, same motion idea, same image type: documentary photograph)
A framed window onto a working harbour. Slide 1 (P01): film-grain photograph of an instructor and a cadet at a training-bridge console, the instructor's finger tracing a bearing line on a paper chart, the quay, cranes and a tug visible through the bridge windows behind them. Behind and right of the window, a faint contact-sheet strip of harbour frames (the "mosaic" of AIU) at 25% opacity. The navy caption bar names the moment ("Week 4 - Plotting the first bearing"), the white notch lets you step or pause, and the week-tick line under the window fills as the slides advance: the cadet is on a real harbour before the licence. Slide 2 (P02): cadet on the quay at mooring bollards with a line, week 8. Slide 3 (P03): cadet on the bridge wing with binoculars at dusk-overcast, week 12 ("Berth confirmed"). Motion: opacity cross-fade **800ms ease-in-out, hold 5000ms**, pause button; reduced-motion / `?sp-static` = slide 1 only, no autoplay, tick fill at W4.

### (3) KV checklist (all visible in the 1440x900 first screen; all images in the image list)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Hard-edged slider window 1260x510 directly under the dark bar | Framed window 1260x525 (2.4:1), radius 0, inset 90px each side, touching the header band | y 72-597, x 90-1350 | cross-fade 800/5000; photo layer `sp-parallax` --sp-par 6% | P01 (slides P02, P03) |
| 2 | Faded mosaic of pages behind the cover | Contact-sheet strip: P15 harbour panorama split into 6 frames by 8px gaps (CSS mask `repeating-linear-gradient`), opacity .25, grayscale(.3) | behind the window's right edge, x 1180-1440, y 96-560, z-index below window; hidden < 1100px | static | P15 |
| 3 | Solid green caption bar docked lower-left | Navy `#3F5260` bar 480x56, white Newsreader 1.25rem/600, text per slide | window bottom-left, flush | fades with slide (opacity 800ms) | - |
| 4 | White pager notch: dots, arrows, pause | White notch 260x56: prev, 3 dots, next, 28px pause square | window bottom-right, flush | controls the slider | - |
| 5 | Dark top bar + logo tile | 6px `#3F5260` band at the very top, centred wordmark "Hatoba College" Newsreader 1.5rem, one menu split 4 left / 4 right of the wordmark, total header 66px | y 0-72 | none (sticky off) | - |
| 6 | (row timeline-line) | 1px week-tick line W1-W12 under the window, navy fill to current week | y 609-649, x 90-1350 | width 800ms ease-in-out per slide | - |
| 7 | Serif Latin title under the window ("AIU TOPICS") | H1 Newsreader 400 **4.5rem** "Before the licence, the harbour." with 1.3x initial, left 7 columns; right 5 columns: 2-sentence lede + two buttons (navy pill "See the twelve weeks" -> The Course; text link "Intakes & fees") | y 680-900 (top of H1 visible above the fold) | none (hero: no reveal) | - |

Mobile 390: window 4:3 inset 16px; caption bar and notch become **in-flow** rows directly under the photo (caption bar full width, notch right-aligned below it) - no absolute positioning over text; strip hidden; tick line shows W1/W12 labels only; H1 2.75rem.

---

## 3. Home page (en) - block order

Content width 1024px (tok(c) card grid width), wide 1260px. Section vertical padding 112px desktop / 72px mobile.

| # | Section | Purpose | Layout & images | Copy amount | Motion |
|---|---|---|---|---|---|
| 0 | Header | Centred nav | 6px navy band, wordmark centred, menu left: The Course, Programmes, Harbour & Simulator, Instructors; right: Cadet Stories, Admissions, Journal, Visit. Mobile: wordmark left + "Menu" button | - | none |
| 1 | Hero (T1, KV) | Scene + promise | Framed window P01/P02/P03 + strip P15 + caption bar + notch + tick line + H1/lede row | H1 6 words, lede 35 words | crossfade, sp-parallax 6% on slide layer; **no reveal** |
| 2 | THE COLLEGE (T2) | Editorial intro | 2 columns 7/5: left three narrative paragraphs (founding 1987, harbour as classroom, a cadet's routine/day); right P04 portrait 4:5, 400 wide, top aligned 40px lower than text (magazine offset), caption under in italic | **3 paragraphs, 60-80 words each** | sp-reveal--up on the photo only |
| 3 | THE COURSE (T3) | Five stage bars | Pale panel `#E4E8EB`, 5 bars as spec'd; label "Weeks 1-12" | 5 x (title + 2 sentences) | `sp-stagger` on bar list, each bar `sp-reveal sp-reveal--up` |
| 4 | Berth confirmed (T3 end) | Date block | P05 left 4:5 + brass pill + 3 date lines + 1 sentence "A berth is confirmed in writing on the Friday of week 12, after the assessment." + link "How training berths work" | 40 words | sp-reveal--up on the text column |
| 5 | Quay band (parallax) | Full-bleed breathing photo | Full-bleed Cover P06, height 560px (mobile 420px), overlay `rgba(23,32,40,.35)`; foreground white panel 420 wide at left 90px: sp-count numbers "12 weeks / 18 cadets per intake / 3 intakes a year" in Newsreader 3rem, labels below | 3 numbers + 1 line | `sp-parallax` --sp-par 10% (mobile 6%); numbers `sp-count` |
| 6 | A DAY ON THE QUAY (T2 + T4) | Daily routine | Photo trio, three ratios side by side: P07 3:4 (07:30 muster on the quay), P08 1:1 (12:00 simulator debrief), P09 16:10 (16:00 line-handling with the tug crew); bottoms aligned, gaps 32px; under each: loop glyph + "1/2/3", time Newsreader italic, 2 sentences | 3 x 30 words + 1 intro paragraph 50 words (uses "daily routine") | sp-stagger + sp-reveal--up on each figure |
| 7 | PROGRAMMES & FEES | Ledger | Full content width ledger: name / weeks / next intake / price (price column right-aligned, `white-space:nowrap`, min 9ch); 4 rows (Harbour Foundation, Bridge Watch Rating, Engine Room Rating, Deck Officer Preparation) + link "All programmes and short courses". No image | 4 rows | **none** (price table) |
| 8 | CADET STORIES | One story, magazine style | P10 left 3:2 600 wide; right: pull quote Newsreader italic 1.75rem, name, cohort; under it 2 text links to the other stories | quote 35 words + 2 links | sp-reveal--up on quote |
| 9 | JOURNAL | Latest posts | 3 ruled rows (date 0.875rem / title Newsreader 1.375rem / category); first row has P11 thumb 3:2 240 wide at right | 3 titles | none |
| 10 | NEWSLETTER (dark) | Subscribe | Navy `#3F5260` band, T2 word in white, 1 sentence, `shippress_form_slot` newsletter (email + submit) | 25 words | **none (form)** |
| 11 | Footer | Address, hours, menu | `#1D1D1D` band (tok(a) ink), 4 columns: wordmark + 1 line, address, office hours, page links; bottom line "(c) Hatoba College" | - | none |

Home image positions: P01, P02, P03, P15, P04, P05, P06, P07, P08, P09, P10, P11 = **12 unique** (>=8). Home English words >= 450 (gate >= 250, >= 3 narrative paragraphs >= 20 words: section 2).

### Comparison with recent home pages
| Theme | Home order | Why ours differs |
|---|---|---|
| Shoko Archives | window hero with diagonal edge + outlined headline boxes -> info bar -> long landing scroll | Our window is hard-rectangular with a docked bar + notch + tick line; no info bar; structured sections not one long landing |
| Hojo Brokers | slate wedge title band + photo-first split -> case panels -> 01/02/03 stepping flow -> tab index | No wedge band, no numbered 3-step flow; our process is 5 shadowed horizontal bars with two action columns |
| Kohaku Brasserie | full-bleed cross-fade hero -> dark pinned intro -> ellipse statement -> letterbox chapters -> menu ledger | Our hero is inset (not full-bleed); no pinned bands/ellipse; only one dark band (newsletter) |
| Kaimon Fishmongers | hanging strips stage -> full-bleed dock cover with tab -> ruled rows -> cut section -> horizontal day strip | Our "day" is three static photos in three ratios, not a horizontal scroll strip; no hanging strips |

---

## 4. Inner pages (>= 8; each with T1 mini-window hero + T2 section words)

| Slug | Page | Key content | Images | Signature carried |
|---|---|---|---|---|
| `the-course` | The Course | 5 stage bars expanded (Cadet does / College does / You leave with), weekly rhythm table (stacks on mobile), what is assessed in week 12 | hero P12; stage photos P07, P08, P09 (not P12 again) | T1, T2, T3 |
| `programmes` | Programmes & Fees | 7-row fee ledger (all prices), what fees include, payment in 2 instalments, bursary note | hero P16 | T1, T2, T3 (bar rows) |
| `harbour-simulator` | Harbour & Simulator | Full-mission bridge simulator, Pier 3 training berth, engine room workshop, sea-survival pool; opening hours of facilities | hero P02; P12, P16 inside | T1, T2, parallax band P06 |
| `instructors` | Instructors | 7 people as ruled rows (name / role / years at sea / one sentence), group photo | hero P13 | T1, T2 |
| `admissions` | Admissions | Requirements (age 18+, medical, eyesight test), 4 application steps as bars ending "Place confirmed" pill + dates, intake dates, enquiry form slot (contact kind) | hero P14 | T1, T2, T3 |
| `training-berths` | Training Berths | How berths are arranged with partner operators (fictional, unnamed types: coastal ferry, harbour tug, short-sea cargo), berth-confirmed block with the same 3 dates | hero P05; P03 | T1, T2, T3 |
| `cadet-stories` | Cadet Stories | 3 stories, long-form, each with a photo and quote | hero P10; P09, P04 | T1, T2 |
| `about` | About | History since 1987, harbour address, principal's note, values | hero P15 (full frame); P13 | T1, T2 |
| `visit` (contact) | Visit & Contact | Address, office hours, open quay Saturday, how to find Pier 3 (T4 glyph list), contact form slot + mailto fallback | hero P02 | T1, T2, T4 |
| `newsletter` | Newsletter | Standalone subscribe page: 2 paragraphs (what we send: intake dates, open quay days, 1 email/month), newsletter slot | hero P06 | T1, T2 |
| `journal` | Journal (posts page, empty, role `posts`) | Post list | - | T2 header in archive template |
Posts (>= 1, recommended 3): "Open quay Saturday: 6 February 2027" (P11), "What the week-12 assessment looks like" , "A day on the simulator bridge" - categories `College news`, `Course notes`; tags `intake`, `simulator`, `open-quay`.
theme-meta `screens`: news -> journal, newsletter -> newsletter page, contact -> visit, article -> first post, category -> college-news, tag -> intake.

---

## 5. Colour (tok(a); main/accent swapped as noted)
| Role | Hex | Share (first screen) | Source |
|---|---|---|---|
| Base / page | `#F0F0F0` | ~55% | AIU base #F0F0F0 (exact) |
| Surface (bars, notch, cards) | `#FFFFFF` | ~5% | AIU white cards |
| Ink (text, footer band) | `#1D1D1D` | ~4% | AIU ink #1D1D1D |
| Main (caption bar, header band, labels, buttons, newsletter band) | `#3F5260` | ~8% | replaces AIU green #005020 / #1F8A3C; reason: row palette tetsu-onando and maritime fit (green reads forest campus). Same role and share as AIU green |
| Underline / pill / italic labels | `#8A7456` | <1% | AIU taupe #8A7456 (exact) |
| Rules | `#DDDDDD` | in base | AIU rule #DDD |
| Mist (tick line, chip borders) | `#8FA3AE` | in base | derived from main |
| Panel (stage bars panel) | `#E4E8EB` | below fold | base -5% lightness, cooled to main |
| Muted text | `#5E6E79` | - | main +15% lightness (AA on #F0F0F0: 5.0:1) |
| Photo | - | ~28% | desaturated film-grain |
First-screen saturated share (HSV s>0.35): target **<= 10%**, hard cap 15% (`check-first-screen.py`). Photos must be desaturated (STYLE). No beige/cream.

## 6. Type (font_direction: serif)
- Latin display: **Newsreader** (variable, opsz, 400/500/600 + italic 400), body: **Source Serif 4** (variable 400/600 + italic 400). Both bundled woff2 in `assets/fonts/`, loaded via **theme.json fontFamilies + fontFace** (editor and front end identical). List every file in theme-meta `fonts[].files` with OFL license file; names in readme.txt.
- Stacks:
  - display en/fr/de: `"Newsreader", "Noto Serif TC", "Noto Serif JP", Georgia, serif`
  - body en/fr/de: `"Source Serif 4", Georgia, "Times New Roman", serif`
  - `:root:lang(zh-TW)` display: `"Newsreader", "Noto Serif TC", "PMingLiU", serif` (bundled Noto Serif TC subset woff2 via fontFace); body: `"Source Serif 4", "Songti TC", "PMingLiU", "Noto Serif CJK TC", serif` (no bundled zh / ja family in body stack, per check-themes)
  - `:root:lang(ja)` display: `"Newsreader", "Noto Serif JP", "Hiragino Mincho ProN", serif` (bundled Noto Serif JP subset); body: `"Source Serif 4", "Hiragino Mincho ProN", "Yu Mincho", serif`
  - Mincho (serif) only, no Gothic mixing. Subsets: use the Hokuto/Hada workaround (the zh subset script is known broken). Because of `:lang(` rules, copy `shared/inc/editor-lang.php` to `inc/` and require it.
- Scale (rem, desktop / mobile 390): H1 hero **4.5 / 2.75** Newsreader 400 lh 1.08 ls -0.01em; section word 2.75 / 2.0 (initial 1.3em) lh 1.1 ls 0.02em uppercase; H3 1.5 / 1.25 Newsreader 500; bar title 1.25; date lines 2.25 / 1.625; count numbers 3.0 / 2.25; body 1.0625 (17px) lh 1.75 Source Serif 4 400; small 0.875 ls 0.02em; nav 0.875 Source Serif 4 600 ls 0.06em (tok(b) nav 14px).
- CJK: sizes x0.75 for display headings, body lh 1.85, letter-spacing 0.04em; fr/de `hyphens:auto`.
- theme.json fontSizes must include `xx-large` = 4.5rem (largest >= 4.25rem).

## 7. Spacing, radius, shadow, imagery tokens
| Token | Value | Source |
|---|---|---|
| Content width | 1024px | tok(c) card grid 1024 |
| Wide width | 1260px | tok(c) column 1260 |
| Header | 6px band + 66px bar | tok(c) 40px bar (ours lighter: centred nav needs height) |
| Window | 1260x525, top flush to header | tok(e) 1260x510 |
| Section padding | 112px / 72px | AIU ~100-120 between blocks (screens) |
| Title block | word, 20px gap, label + 160x2 underline on 1px rule, 40px after | tok(c) 8px under / 160px underline |
| Card / grid gap | 32px | tok(c) |
| Radius | 0 photos, bars, window, notch; 999px buttons, pills, chips | tok(d) |
| Bar border / shadow | 1px #E5E5E5 / 0 2px 6px rgba(0,0,0,.08) | tok(d) |
| Buttons | pill 999px, `#3F5260` fill, white Source Serif 4 0.9375/600, padding 14px 28px, 12px arrow | tok(d) "#111 more" pill -> navy |
| Photo ratios | window 2.4:1, inner window 3.6:1, portraits 4:5, cards 3:2, trio 3:4 / 1:1 / 16:10 | tok(e) 3:2, 4:3 |
| Photo treatment | hard edge, no mask, no shadow; strip opacity .25 | tok(e) |

## 8. Responsive
- 390px first screen: no vertical text, no absolutely positioned labels over text; caption bar and notch in flow below the photo; tick line in flow; H1 2.75rem, no overlap (auto-gates check).
- Stage bars at < 782px: single column stack (label, title+chip, Cadet does, College does), padding 20px.
- Fee ledger / any table at >= 782px: full content width (1024), price column `white-space:nowrap; text-align:right`, never clipped or scrolled. < 782px: each row becomes a stacked card (name, then weeks / intake, then price right-aligned on its own line). Same for the Course weekly table.
- Trio: < 782px stacks, each photo full width keeping its ratio.
- No horizontal overflow at 390 and 1280.

## 9. Image list (16 photos, all unique files, <= 300 KB, <= 2000px, webp)
STYLE (one string for all):
`film-grain documentary photograph, 35mm look with fine visible grain, soft bright overcast harbour daylight, high-key exposure, muted desaturated palette of navy, steel blue, cool grey and white with small brass details, natural candid moments, international modern maritime training setting, diverse adult people, no text, no logos, no signage, no flags, no Japanese elements`

| ID | Subject / composition | Used on (page - block) | Home |
|---|---|---|---|
| P01 | Instructor (50s) and cadet (20s) at a training-bridge console, instructor's finger tracing a bearing on a paper chart, quay with cranes and a tug through the windows; wide 2.4:1, people left-centre | Home hero slide 1 | yes |
| P02 | Cadet in work jacket and gloves at mooring bollards holding a line, grey water and moored vessel behind; wide | Home hero slide 2; Harbour & Simulator hero; Visit hero | yes |
| P03 | Cadet on an open bridge wing with binoculars, overcast sky, harbour mouth; wide | Home hero slide 3; Training Berths body | yes |
| P04 | Portrait 4:5: cadet reading a logbook by a window, soft light | Home College intro; Cadet Stories body | yes |
| P05 | Portrait 4:5: cadet and berth officer shaking hands on a gangway | Home berth block; Training Berths hero | yes |
| P06 | Wide quay at morning: bollards, coiled ropes, a small training vessel, low mist; no people close | Home parallax band; Harbour & Simulator band; Newsletter hero | yes |
| P07 | 3:4 morning muster on the quay, group of cadets in a line with an instructor | Home trio 1; The Course body | yes |
| P08 | 1:1 simulator debrief, instructor pointing at a radar screen (no readable text) | Home trio 2; The Course body | yes |
| P09 | 16:10 line handling with a tug crew, ropes and fenders | Home trio 3; The Course body; Cadet Stories body | yes |
| P10 | 3:2 cadet portrait on deck, looking off-frame, wind in jacket | Home story; Cadet Stories hero | yes |
| P11 | 3:2 visitors and cadets on an open quay day near a training vessel | Home journal thumb; post "Open quay Saturday" | yes |
| P12 | Full-mission bridge simulator room, dim, wide screens with sea view | The Course hero; Harbour & Simulator body | no |
| P13 | Instructors around a chart table, mixed ages | Instructors hero; About body | no |
| P14 | Admissions interview at a desk with a harbour window, applicant and officer | Admissions hero | no |
| P15 | Harbour panorama, very wide, cranes, water, low cloud (used split into 6 frames) | Home hero strip; About hero | yes |
| P16 | Engine room workshop, cadet with instructor at a diesel engine | Programmes hero; Harbour & Simulator body | no |
No cut-outs. Each image read back and regenerated if text, logo, distorted face/hand or style drift.

## 10. Fixed facts (identical on home, inner pages, five languages; brand.md source)
- Name Hatoba College; founded **1987**; address **Pier 3, 4 Quay Road, Port Ellery** (fictional harbour town); phone +00 0000 0000 style placeholder; email `admissions@hatoba-college.example`.
- Office hours: **Mon-Fri 08:30-17:00**; open quay day **first Saturday of the month 10:00-13:00**; closed Sundays and public holidays.
- Intakes: **January, April, September**; **18 cadets per intake**; Harbour Foundation = **12 weeks**.
- Stages (5): 1 Shore school W1-4; 2 Simulator bridge W5-7; 3 Harbour watch W8-10; 4 Tug and pilot runs W11; 5 Assessment and berth W12 (berth confirmed in writing on the Friday of week 12).
- Dates on home/berths/admissions: 12 January 2027 intake; 26 March 2027 assessment; 2 April 2027 berth confirmed; next open quay 6 February 2027.
- Fees (EUR, 7 items): Harbour Foundation 12 wk **EUR 4,800**; Bridge Watch Rating 8 wk **EUR 3,600**; Engine Room Rating 10 wk **EUR 4,200**; Deck Officer Preparation 24 wk **EUR 9,200**; Sea Survival & Fire 5 days **EUR 640**; Radar / ARPA Simulator 4 days **EUR 580**; Application & berth assessment **EUR 90**.
- People (7): Captain Mara Lindqvist (Principal, 26 years at sea); Tomas Okafor (Senior navigation instructor); Ines Duarte (Simulator lead); Ravi Menon (Engineering instructor); Helena Brandt (Berth placement officer); Samuel Achterberg (Harbour pilot liaison); Lucia Ferro (Admissions and cadet welfare).
- Stories (3): Noor Haddad (January 2026 cohort, berth on a coastal ferry); Elias Varga (career change from logistics, harbour tug); Joana Prieto (engine room rating, short-sea cargo).
- Application process (4): Enquiry -> Medical and eyesight check -> Interview at Pier 3 -> Place confirmed (deposit EUR 90 counted in the fee above).
- No claims of guaranteed berths, placement rates, awards or real companies.

## 11. Scroll techniques (sp-scroll; 3 effects + required parallax)
| Effect | sp-* class | Where | Source site / its trigger, time, easing | Our values |
|---|---|---|---|---|
| Section rise on entry | `sp-reveal sp-reveal--up` + parent `sp-stagger` | Stage bars (home + The Course), trio figures, intro photo, story quote, berth text column | AIU: ScrollMagic adds `in_view` on entry, ~0.6s opacity + short rise, ease (estimated) | `--sp-dist:20px`, `--sp-dur:.7s`, spec easing `cubic-bezier(.23,1,.32,1)`, stagger 0.12s |
| Parallax | `sp-parallax` | (a) hero slide layer `.sp-parallax__layer` wrapping the 3 slides, `--sp-par:6%`; (b) home quay band Cover P06 `--sp-par:10%` (mobile 6% via media query); (c) Harbour & Simulator band P06 10% | AIU/ORL Swiper fade slider (photo-led window) translated to scroll-linked depth; the window clips the moving layer like the AIU frame | caption bar, notch and band text are NOT inside the moving layer |
| Count | `sp-count` | Quay band numbers 12 / 18 / 3 | (ours, supporting AIU's data-led tone) | 1.2s easeOutCubic (built-in) |
- Hero: no reveal. Forms, fee ledger, legal text: no sp-*.
- Hero cross-fade is a small slider (not scroll): opacity 800ms ease-in-out, 5000ms hold, pause button; without JS / reduced-motion / `?sp-static` / editor: slide 1 visible, others hidden by `html.sp-js` scoped rules only.
- `check-parallax.mjs` must show >= 6px delta on desktop and mobile, 0 under reduced motion.

## 12. Forms (contract v1 - `steps/form-contract-v1` exists)
- Copy `pipeline/assets/forms/shippress-forms.php` -> `inc/`, CSS + editor JS -> `assets/`, require in functions.php.
- **Visit & Contact page** (`visit`): `shippress_form_slot(['kind'=>'contact','fallback'=>$fallback])`, fallback = existing navy pill mailto button "Email admissions" -> `mailto:admissions@hatoba-college.example` (buffered literal markup). Placed in the right column of "WRITE TO US", below address/hours.
- **Admissions page**: enquiry section "ASK ABOUT AN INTAKE" with the same contact slot + mailto fallback (subject: intake enquiry).
- **Newsletter page** (`newsletter`) and **home section 10** and **footer** (compact one-line): `shippress_form_slot(['kind'=>'newsletter','email'=>'admissions@hatoba-college.example','label'=>_t('forms_email'),'submit'=>_t('forms_subscribe'),'notice'=>_t('forms_mail_notice'),'subject'=>_t('forms_mail_subject')])`. Without plugins: required email field + submit, native mailto POST, notice visible: "Opens your email app. Send the request to subscribe; you are not subscribed yet." MailPoet / MC4WP preferred; CF7 / WPForms only with an explicit newsletter form id.
- Fields: contact (plugin-provided) name, email, phone (optional), intake of interest (select: January / April / September), message, consent checkbox; newsletter: email only.
- Tokens: light pages: `--sp-form-surface:#FFFFFF; --sp-form-text:#1D1D1D; --sp-form-border:#8FA3AE; --sp-form-accent:#3F5260; --sp-form-on-accent:#FFFFFF; --sp-form-focus:#8A7456; --sp-form-radius:0` (inputs square like the window; submit pill via plugin-scoped rule 999px). Dark (navy band, footer): surface `#FFFFFF`, text `#1D1D1D`, border `#FFFFFF`, accent `#1D1D1D`, focus `#E9DCC6` (outline 2px offset 2px, visible on navy). Error `#A3352B` text + 1px border, success `#2F5E46`, both with icon-free text messages.
- Strings in five languages via semantic keys in `inc/i18n/en.php` (`forms_email`, `forms_subscribe`, `forms_mail_notice`, `forms_mail_subject`, plus contact labels and fallback button); extract with `L10N_SEMANTIC=1`.
- Forms never use sp-reveal and are never in the home first screen.

## 13. Home acceptance checklist
- [ ] Inset framed window 2.4:1 under the header with navy 480x56 caption bar lower-left and white 260x56 notch lower-right (arrows, 3 dots, pause) - visible at 1440x900.
- [ ] Contact-sheet strip P15 at 25% behind the window's right edge; week-tick line W1-W12 with fill under the window; H1 4.5rem with enlarged initial begins above the fold.
- [ ] Slider: 800ms fade, 5s hold, pause works, `?sp-static` = slide 1.
- [ ] Every section word uses T2 (1.3x initial, brass 160px underline, 1px rule).
- [ ] Five shadowed white Stage bars on the pale panel, then brass "Berth confirmed" pill + 3 date lines beside P05.
- [ ] Parallax quay band P06 with count numbers; check-parallax passes desktop + mobile.
- [ ] Trio in three ratios; fee ledger full width, prices nowrap right at 800 and 1280; stacked at 390.
- [ ] 12 unique images, no repeats on the page, no cut-outs; >= 450 English words, 3 narrative paragraphs.
- [ ] Newsletter band with working fallback form; not revealed.
- [ ] First-screen saturated share <= 15% (target 10%); 390px first screen no overlap; one top menu; auto-gates pass.

## 14. Similarity targets (~80% of the reference) - comparison table
| Dimension | Reference value (token) | Hatoba College value |
|---|---|---|
| Base colour | #F0F0F0 (a) | #F0F0F0 |
| Ink | #1D1D1D (a) | #1D1D1D |
| Accent main | green #005020 / #1F8A3C, <6% (a) | navy #3F5260, ~8% (row palette; same roles) |
| Underline accent | taupe #8A7456 (a) | #8A7456 |
| Saturated share | 14.4% (a) | <= 10% target, cap 15% |
| Display face | Playfair Display 400, 42px, ls 0.8px, uppercase, big initial (b) | Newsreader 400, 44px section words, ls 0.02em, uppercase, initial 1.3em; H1 72px |
| Body | Noto Sans JP 16px lh 1.34 (b) | Source Serif 4 17px lh 1.75 (row serif direction; CJK lh 1.85) |
| Column | 1260px, cards 1024px (c) | wide 1260, content 1024 |
| Window | 1260x510 hard edge under 40px bar (c, e) | 1260x525 hard edge under 72px header |
| Caption bar | 480x56 solid, lower-left (d) | 480x56 navy, lower-left |
| Pager | white notch, arrows, 5 dots, 28px pause (f) | white 260x56 notch, arrows, 3 dots, 28px pause |
| Title rule | 1px #DDD + 160px taupe segment (c, f) | same |
| Feature bars | white, 1px #E5E5E5, 0 2px 6px rgba(0,0,0,.08), serif label (d) | same, 96px tall stage bars |
| Pill | 999px "more", 23px ORL CTA, ORL date pill (d, f) | 999px buttons, brass date pill |
| Radius | 0 photos/cards (d) | 0 |
| Image ratio | 3:2 / 4:3 cards, 2.47:1 window (e) | 3:2 cards, 2.4:1 window, 4:5 portraits |
| Imagery | documentary photos (e) | film-grain documentary photos |
| Slider motion | Swiper fade 800ms / 5000ms (g) | fade 800ms / 5000ms + pause |
| Section reveal | fade + rise ~0.6s (g) | sp-reveal--up 0.7s, 20px |
| Extra motion | load overlay 0.4s (g) | parallax 6-10% (required), count 1.2s |
Our own photos and copy only; no reference images, text or logos.
