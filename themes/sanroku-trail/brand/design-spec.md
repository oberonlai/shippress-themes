# Sanroku Trail Series — design spec (stage 1, binding for build and inner pages)

Row b34-6 · type `events` · archetype horizontal-strip · hero diagonal-split (interpreted below as photo/row split) · nav split · font_direction **sans** · IMAGERY **photo** (film grain).
Reference: https://camp.muji.com/ (main) · Secondary: https://50th.runners.co.jp/ (frame shape only).
Tokens source: `brand/reference-tokens.md` (cited as **[T-a]…[T-g]**). Screens: `brand/ref/muji-first.png` (=R0), `scroll-muji-1800.png` (=R1800), `scroll-muji-3600.png` (=R3600), `50th-first.png` (=R50).
Everything we ship (photos, copy, course outline, logo) is our own; nothing is copied from the reference sites.

---

## 1. Signature techniques (borrow visibly — do not soften)

### T1 — Flush film still + vertical headline in the sky + ruled rows directly under the photo
- Source: camp.muji.com first screen (R0). There: photo flush to the viewport, 1440×600 (2.4:1), people small in the lower-middle; a two-column vertical (vertical-rl) headline sits in the sky at the right (x≈1240–1340, y≈150–420); two site names bottom-left in white 15px; under the photo, on warm grey, full-width notice rows (red chip · date · title · chevron) separated by 1px hairlines, ~50px each.
- Ours: home hero (Section H1). Photo **P01** flush 100vw × 600px at ≥1024 (2.4:1, `object-fit:cover`, `object-position: 50% 45%`). Vertical H1 in white over the canopy gap at the right: right edge 100px from viewport right, top 150px. Caption bottom-left (x 24, bottom 32). Directly under the photo (no gap, no margin): four race rows + one "All dates and cut-offs" row, each 50px tall, 1px `#D6D4CF` hairlines, side padding 30px [T-c].
- Must not be softened: photo flush to both viewport edges (no inset, no radius, no mask [T-e]); headline really vertical on desktop; rows start exactly at the photo's bottom edge; chips are solid filled rectangles 70×22, not outlines.

### T2 — Dark green band: white hairline outline + one dot, beside an accordion with dotted leaders
- Source: camp.muji.com map band (R1800). There: full-width `#3A4F44` band ~475px high; left 60% a white 1px outline drawing with one 10px white dot and thin lines radiating to it; right column (x≈957–1376, ~420px) a 3-line white headline 26px, then accordion rows separated by 1px white hairlines, "+/−" at right; open row lists place ····· time with dotted leaders; two 12px notes bottom-left.
- Ours: home Section H4 "The four courses". Left 58%: our own SVG — four course lines drawn as white 1px strokes (stroke-opacity .55) forming one valley outline, with a single 10px white dot at Hollin Village (the shared race village) and four 1px lines from the dot to each course's high point; nothing else in the SVG (no labels inside SVG). Right column 420px (start x = 66% of 1312 frame): H2 white 3 lines, then a `core/details` accordion: one row per race (summary: race name + "+"), open body lists aid stations "Aid 2 · Beech Saddle ········ 14.2 km · 10:30" with dotted leaders (`border-bottom:2px dotted rgba(255,255,255,.45)` flex filler). First row open by default.
- Must not be softened: band colour exactly `#3A4F44` full-bleed; white hairlines (not grey boxes); leaders dotted; only one dot.

### T3 — Inset 1312px photo with a vertical caption, then split title / 43% body / 6-cell hairline table
- Source: camp.muji.com campsite section (R3600). Photo inset 64px each side, 1312×730 (1.8:1), vertical caption top-right in ink 26px; below it a split: big bold title (~48px) + 3-line sub at x=64, body copy column starting at x=621 (≈43%), then a 6-equal-cell table with 1px grey borders.
- Ours: home Section H5 "What you carry". Photo **P07** inset 64px (1312×730 at 1440), vertical caption in ink at its top-right sky area (right 40px, top 40px): "Carried, / not counted." Below (margin-top 40px): left column title "Mandatory kit" at 4.25rem Archivo 600 + 3 short lines; right column at 43%: one 70-word paragraph; under it a 6-cell table (6 equal columns, 1px `#BDBBB5` borders, cell 15px label + 12px note).
- Must not be softened: inset width = viewport − 128px (max 1312), photo 1.8:1, 6 *equal* cells in one row at ≥1024.

### Secondary (frame only) — 50th.runners.co.jp
- Its photo sits in a hand-drawn, slightly wobbly rounded frame (R50). We use that shape **once**, small: About page head, a 360×270 inset photo P15 with an SVG mask of a wobbly rounded rectangle (radius ≈ 28px, edges perturbed ±3px). No mascot, no pastel/saturated colours, nowhere else.

### Carrying T1–T3 into inner pages (≥4 pages)
| Page | T1 | T2 | T3 |
|---|---|---|---|
| Races & Calendar | page head: flush photo P03 at 1440×440 (≈3.3:1) with vertical H1 at right; four ruled race rows directly under it (same row component as home) | — | each race block: inset photo + split title/body + 6-cell spec table (Distance · Climb · Start · Cut-off · Cap · Fee) |
| Course Guides | flush head P12 + vertical H1 | **main body**: one dark band per race with its own white course outline + one dot (start) and aid-station accordion with dotted leaders | — |
| Enter | flush head P11 + vertical H1; the 4-step flow as ruled rows (chip = step no.) | FAQ as dark-band accordion (no map; outline replaced by a single white hairline arrow 80×12 [T-f]) | — |
| Mandatory Kit | flush head P14 + vertical H1 | — | full T3: inset photo P07 (1.8:1), split, then **two** 6-cell tables (all races / Gorge 45 + Autumn Ridge 60 extras) |
| Safety & Cut-offs | flush head P13 + vertical H1 | cut-off clock accordion per race with dotted leaders on dark band | — |
| Volunteer | flush head P10 + vertical H1 | — | body: split title/43% body (no second photo) + 6-cell roles table (Marshal · Sweep · Aid · Kit check · Timing · Trail day) |
| About | head = split (no flush photo) with the secondary wobbly frame P15 | — | split title/43% body + 6-cell "the series in numbers" table |
Rule: one image appears at most once per page.

---

## Key visual concept

**(1) Reference first screen (camp.muji.com, R0).** A wide, calm, overcast landscape — a forested mountain over a still lake — with a small family standing on the near shore, seen from behind. Story: *leave nature as it is* — people are small guests, the land is the subject. Motion: the photo settles in gently on load, the vertical headline fades up with a long ease-out (.65s, cubic-bezier(.165,.84,.44,1) [T-g]); the notice list waits quietly underneath.

**(2) Our scene (trail-running race series, same composition, same motion idea, same image type = documentary photograph).** A wide film-grain photograph of a beech-forest ridge in early spring, overcast: in the lower-middle third a course marshal (seen three-quarter from behind) ties a pale ribbon around a beech trunk; behind and above him on the path, three or four runners climb, small. Story: *the course is marked by hand, then left as it is* — the race borrows the mountain for one day. The vertical headline sits in the bright sky/canopy gap at the right, exactly where the reference puts its line; the four races of the season are the ruled rows underneath (the reference's notice list → our season). Motion: the photo drifts slower than the page (sp-parallax), the headline is static (no reveal on hero), rows are static with hover chevron movement.

**(3) KV checklist (all visible in the first screen at 1440×900)**
| # | Reference element | Our counterpart | Position | Motion | Image used |
|---|---|---|---|---|---|
| 1 | Full-bleed overcast landscape, people small, flush to viewport | Film-grain beech ridge, marshal tying ribbon + 3–4 runners climbing, all ≤ 1/4 frame height | 0–1440 × 0–600 | `sp-parallax` `--sp-par:8%` (mobile 5%) | P01 |
| 2 | Vertical headline in the sky at right, 2 columns | Vertical-rl H1, white, two columns: "Marked by hand." / "Left as it is." Archivo 600 3rem, letter-spacing .1em, text-shadow 0 0 24px rgba(0,0,0,.18) | right 100px, top 150px, height ≤ 300px | none (static) | P01 (sky gap upper-right must be bright, tree-free) |
| 3 | Two site names bottom-left in white | Two-line caption "Four races · Hollin Village" / "Spring snowmelt to the autumn ridge", Inter Tight 500 15px white | left 24px, bottom 32px of photo | none | P01 |
| 4 | Sand "book" button top-right (4px radius) | Sand `#E0CEAA` button "Enter a race", ink text 13px 600, 4px radius, 96×40 | header right, top 42px | bg colour .2s ease-out | — |
| 5 | Ruled notice rows under the photo: red chip · date · title · chevron | Four race rows: olive chip (distance "21 km") · date · race name + cut-off · chevron; 5th row "All dates and cut-offs" | y 600–900, full width, 30px side padding | none on load; hover: chevron translateX 4px .2s | — |
| 6 | Logo top-left over photo, "Menu" right | Split nav: stacked wordmark top-left (white over photo), one top menu (5 links) centre-right, CTA right | header, height 110px, transparent over P01 | — | — |

---

## 2. Home page (en) — blocks in order

Frame: content 1312px max (64px side margins at 1440) [T-c]; ground `#F1F0EE`. Vertical rhythm between sections 120px desktop / 72px mobile.

| # | Block | Purpose | Layout | Image | Copy |
|---|---|---|---|---|---|
| H1 | **Hero: flush film still + vertical H1 + race rows** (T1, KV) | Scene + the season at a glance | Cover 100vw×600 (`sp-parallax`) then 5 ruled rows on ground | P01 | H1 6 words, caption 2 lines, rows: 4×(chip, date, name, cut-off) |
| H2 | **Story "Borrowed for a day"** | Who we are, why hand-marked | Split: left 1/3 eyebrow "Since 2014" (12px .06em) + H2 26px; right 43%-start column 3 paragraphs; small photo P02 at 3:2 width 420 under the left H2 | P02 | 3 ¶ × 45–60 words (narrative, counts toward 250) |
| H3 | **Season strip** (row first_screen = horizontal-scroll-strip) | The four races, horizontally | Full-bleed horizontal scroller, `scroll-snap-type:x mandatory`, cards 520px wide (4:3 photo + month numeral + name + 3 specs), gap 24, left padding 64; arrow 80×12 hint bottom-right [T-f]; at ≥1440 the 4th card is half-visible (intentional) | P03, P04, P05, P06 | each card: month "04" Archivo 4.25rem, name, "21 km · +1,150 m · 5 h cut-off", 1 sentence |
| H4 | **The four courses** (T2) | Aid stations and cut-offs | Dark band `#3A4F44`, padding 96/64, SVG outline left 58%, accordion right | — (SVG) | H2 3 lines, 4 accordion rows, 2 notes 12px |
| H5 | **What you carry** (T3) | Mandatory kit | Inset photo 1312×730 + vertical caption; split title/43% body; 6-cell table | P07 | title, 3-line sub, 70-word body, 6 cells |
| H6 | **Ribbon day — a race day in milestones** (page_structure timeline-milestone) | The routine of a race day | Horizontal milestone row (NOT vertical): 1px ink line across 1312 with 6 nodes (8px ink dots), time above in Archivo 600 26px, label below 15px; P08 inset 1:1 at left 420px, row at right; on mobile becomes a stacked list with left hairline | P08 | 6 × (time + 12-word line); intro 40 words |
| H7 | **Parallax band** | Pause: the mountain after the race | Full-bleed Cover 100vw × 560, `sp-parallax --sp-par:10%`, one 2-line quote bottom-left in white 26px + attribution 12px | P09 | quote ≤ 16 words |
| H8 | **The one way to enter** | Fees + flow + CTA | Section head split; fee ledger table full width (6 rows); below, 4 steps as ruled rows (chip = "Step 1"); CTA sand button "Open the entry page" | — | 1 ¶ 40 words, 6 fees, 4 steps |
| H9 | **Journal + letter** | 3 latest posts + subscribe | 3 columns (photo 3:2, date 12px, title 18px); under it a hairline-ruled newsletter row: left text, right `shippress_form_slot` newsletter (email + submit) | P10, P11, P12 (post featured images) | 3 titles; subscribe 2 lines |
| Footer | dark `#3A4F44`, white text, wordmark, address, office hours, legal 12px; **no form** | | | | |

Home photo positions: P01, P02, P03, P04, P05, P06, P07, P08, P09, P10, P11, P12 = **12** (≥8 met, no repeats).
Home English words ≥ 300 (H2 3 narrative ¶ + H3 cards + H5 + H6 + H8).

### First-screen composition (1440×900)
- 0–110 header over photo (gradient overlay top 0→160px `rgba(20,24,20,.28)`→0, only behind header).
- 0–600 P01 flush; vertical H1 right; caption bottom-left; no buttons on the photo except the header CTA.
- 600–900 rows: each 50px + 1px hairline `#D6D4CF`; chip 70×22 `#715C1F` white 12px 600 .06em; date 14px tabular-nums at x=132; name 15px 600 at x=235; cut-off muted `#6D6D72` 13px right before chevron; chevron 8×14 1.5px stroke at right 30px.
- Saturated share target ≤ 5% (only chips + a few grain specks), hard cap 15%.

### Comparison with recent themes (home order must differ)
| Theme | Home order | Why ours differs |
|---|---|---|
| Kawa Dumplings | three-panel stage → fold story → branches tabs → take-home → order-ahead → glass band → menu ledger → journal → letter | No panels/tabs; ours opens with one flush still + ruled rows, then a horizontal strip |
| Ashiato Hotel | inset window hero + quick answers → welcome → rooms → dog-run band → rates → FAQ → register → book → journal | Hero is flush (not inset window); no FAQ on home; dark map band with accordion is unique |
| Yukishiro Chalet | full-bleed hero + seam desk → intro → packages → compare → sticky → band → rooms → day → find-us → journal → letter | No overlapping desk card; vertical-rl headline; horizontal season scroller instead of packages grid; milestone row is horizontal |
| Kodama Sound | framed window + trace line → field → credit sheet → band → schedule → sounds → studio → send → journal → letter | No framed hero; signature = ruled rows + dotted-leader accordion + 6-cell kit table |

---

## 3. Inner pages (11, slugs fixed for all five languages)
| Slug | Page | Key content |
|---|---|---|
| `about` | The Series | Wobbly-frame head (P15); founding story 2014; stewardship (trail-day hours, ribbons collected within 24 h); 7 people list (name · role · 1 line, ruled rows, no portrait grid); 6-cell numbers table |
| `races` | Races & Calendar | T1 head P03; 4 race rows; per race T3 block (inset photo from P04/P05/P06 — P03 only in head) + 6-cell spec table |
| `course-guides` | Course Guides | T1 head P12; 4 dark T2 bands (one per race), aid stations with dotted leaders; GPX note "files sent with your entry confirmation" |
| `enter` | Enter (the one way to enter) | T1 head P11; fee ledger (full price table); 4-step ruled flow; **contact form slot** (entry enquiry) with mailto fallback; refund/transfer policy; FAQ dark-band accordion |
| `mandatory-kit` | Mandatory Kit | T1 head P14; T3 inset P07 (inner pages may reuse home images; never twice on one page), two 6-cell tables, kit-check times |
| `safety` | Safety & Cut-offs | T1 head P13; cut-off accordion on dark band; sweep runners; weather call (decision 18:00 the evening before); medical lead |
| `volunteer` | Volunteer | T1 head P10; 6-cell roles table; trail day dates; what volunteers get (free entry to one later race in the season) |
| `journal` | Journal (role `posts`, empty) | post list; screens.news |
| `newsletter` | Letters from the ridge | standalone page: intro, what you get (4 letters a year, one before each race), newsletter form slot |
| `contact` | Contact | race office address, hours, email, map-free directions as ruled rows; contact form slot + mailto fallback |
| `privacy` | Privacy | legal text, no effects |
Posts (≥3, each with category + tag): "Course recce: the Beech Line after the thaw" (P12), "Why a foil blanket on a 21 km" (P14), "Trail day: 46 volunteers, 380 m of drainage" (P16). Categories: Courses, Kit, Stewardship. Tags: snowmelt-21, beech-line-32, gorge-45, autumn-ridge-60.
Templates: single, archive, tag (copy of archive), page, page-wide; header and footer parts.

---

## 4. Colour (reference relation kept; [T-a])
| Role | Hex | Share (home) | Source |
|---|---|---|---|
| Ground | `#F1F0EE` | ~35% | [T-a] ground, unchanged |
| Ink | `#1D1D1F` | ~10% | [T-a] |
| Muted text | `#6D6D72` | — | [T-a] |
| Hairline | `#D6D4CF` (rows), `#BDBBB5` (table cells) | — | [T-d] grey hairlines |
| Dark band / footer | `#3A4F44` | ~12% | [T-a] dark band, unchanged |
| Button (CTA) | `#E0CEAA` bg + ink text | <1% | [T-a] sand button, unchanged |
| Accent (chips, links underline, focus) | `#715C1F` (olive-brown, uguisu-cha) | ~1–2% | plan hex; replaces the reference's red chip `#B5242B` — reason: red reads as "warning"; our chips are race distances, not alerts |
| Photos | muted greens `#899D88` / `#546657`, bark browns | ~40% | [T-a]/[T-e] |
| Error / success (forms) | `#8E2B22` / `#3A4F44` | — | derived, ≥4.5:1 on ground |
First-screen saturated (S>0.45,V>0.2) ≤ 5% target, ≤ 15% hard (check-first-screen.py); plan note cap 30% irrelevant since we are far under.

## 5. Type (font_direction **sans**)
- Latin headings: **Archivo** 600 (variable or 500/600/700 woff2). Latin body: **Inter Tight** 400/500 (body 500 like the reference's Medium [T-b]).
- zh-TW: headings `Archivo, "Noto Sans TC", sans-serif` (Noto Sans TC subset bundled, a gothic sans); body `"Inter Tight", "PingFang TC", "Microsoft JhengHei", "Noto Sans CJK TC", sans-serif` (must not contain the bundled zh family nor JP fonts — repo gate).
- ja: headings `Archivo, "Noto Sans JP", sans-serif` (Noto Sans JP subset bundled, a gothic sans); body `"Inter Tight", "Hiragino Sans", "Yu Gothic", "Noto Sans CJK JP", sans-serif`.
- No serif or mincho serif anywhere. All faces via theme.json `fontFamilies[].fontFace` (editor = front end); `:lang()` rules → copy shared/inc/editor-lang.php; zh/ja subset via the Hokuto/Hada workaround; list every file in theme-meta.json fonts[].
| Token | Size / weight / line-height / tracking | Use | Source |
|---|---|---|---|
| xx-large | 4.25rem (68px), 600, 1.05, .02em | H3 season numerals, H5 "Mandatory kit", inner T3 titles | ≥4.25 rule; the reference big title ~48px scaled |
| x-large | 3rem (48px), 600, 1.3, .1em | hero vertical H1, inner page vertical H1 | [T-b] vertical ~40px glyphs, +20% |
| large | 1.625rem (26px), 600, 1.5 (39px), .1em | H2 section titles, vertical captions | [T-b] h2 26/39/2.6px |
| medium | 1.125rem (18px), 600, 1.5 | card titles, accordion summary | — |
| body | 1rem (16px), 500, 1.8 | paragraphs | [T-b] 16px |
| small | .9375rem (15px), 500, 1.6 | rows, captions | R0 site names |
| x-small | .75rem (12px), 500, 1.5 (18px), .06em | notes, chips, eyebrows, nav sub | [T-b] 12/18/.72px |
CJK sizes ≈ 0.75× Latin display; body line-height 1.85; de/fr `hyphens:auto`.

## 6. Spacing, radius, decoration ([T-c] [T-d] [T-f])
- Gutter 24px (rows 30px), frame 1312 (64px margins), split body column starts at 43% of frame, band padding 96 top/bottom (the reference 64–120), section gap 120.
- Radius: buttons 4px; photos 0; chips 0; cards 0. No shadows anywhere.
- Hairlines 1px. Dotted leaders 2px dotted. One 10px dot on the outline SVG. Arrow glyph 80×12 (1px line + 6px head) bottom-right of H3 strip and of inset photo P07.
- Photos: flush 2.4:1 (hero), inset 1.8:1 (T3), 4:3 cards, 3:2 journal, 1:1 milestone photo; no masks except the single wobbly frame (About).

## 7. Responsive
- **390px first screen**: P01 390×480 (`object-position:62% 45%`); H1 becomes **horizontal**, static (normal flow) on the ground directly below the photo, 2.25rem, 2 lines; caption becomes 12px static text under H1; no vertical text, no absolutely positioned labels over the photo. Header: wordmark + "Menu" (core navigation overlay) + CTA hidden (CTA appears in the first race row area as full-width sand button under rows).
- Race rows on mobile: 2-line rows (chip + date on line 1, name + cut-off line 2), chevron right-centred.
- Vertical captions (T3, inner heads) become horizontal static captions below the photo at <782.
- Season strip: cards 82vw, snap, padding-left 24; no reveal on cards.
- Dark band: SVG above (height 240), accordion below, full width.
- 6-cell tables: 3×2 at 782–1023, 2×3 at 600–781, **stacked list** (label left, value right, hairline) <600.
- **Fee ledger at ≥782px: full width of the 1312 frame**, columns Race · Distance · Date · Fee; fee column `white-space:nowrap; text-align:right; width:9rem`; never clipped (gate: 800 and 1280). <782: each row stacked (name line, meta line, fee right-aligned on name line).
- Milestone row → vertical stacked list with 1px left hairline only on mobile.
- Any table on mobile = stacked; no horizontal overflow at 390.

## 8. Scroll effects (sp-scroll; copy assets unchanged; CSS vars `--sp-dist:24px; --sp-dur:.65s;` easing `cubic-bezier(.165,.84,.44,1)` [T-g])
| Effect | sp class | Where | Source / trigger / time / easing |
|---|---|---|---|
| Fade + rise 24px | `sp-reveal sp-reveal--up` | H2 story columns, H3 strip *container* (not cards), H4 headline column, H5 split text, H6 intro, H8 head, H9 posts row; inner section heads | camp.muji.com own IntersectionObserver, .65s, ease-out-quint |
| Photo scale-in | `sp-reveal sp-reveal--zoom` | H5 inset P07 figure, H6 P08, inner T3 inset photos | camp.muji.com, .65s same curve (spec default 1.6s → set `--sp-dur:.9s` on these only) |
| Sequence | `sp-stagger` parent + `sp-reveal--up` children | H4 accordion rows, H8 step rows (not the fee table), H6 milestone nodes | camp.muji.com rows ~80ms; sp-stagger 0.12s steps accepted |
- Not on: hero (H1), fee ledger table, forms, legal text, strip cards.

### Parallax (required)
- **H1 hero**: Cover with class `sp-parallax`, background = P01, `--sp-par:8%` desktop / `5%` at <782 (keep on mobile). Foreground (H1, caption) is not in the moving layer. Reference motion: the reference's slow settle of the first-screen photo on load + photo drifting under the scroll — we express it as scroll-linked drift.
- **H7 band**: Cover `sp-parallax`, background P09, `--sp-par:10%` (mobile 6%); quote in foreground.
- reduced-motion / `?sp-static` / editor: no movement. Verify with check-parallax.mjs (≥6px desktop and mobile).

## 9. Forms (form contract v1 applies — `steps/form-contract-v1` exists)
- Copy `pipeline/assets/forms/shippress-forms.php` → `inc/`, CSS + editor JS → `assets/`, require in functions.php. No fake form, no backend.
- **Contact page**: after the office details, `shippress_form_slot( kind=contact, fallback= buffered literal mailto button "Email the race office" → mailto:office@sanrokutrail.example )`. CF7 first, WPForms second. Expected CF7 fields (documented in readme for owners): name, email, race (select: 4 races + "Not sure yet"), message.
- **Enter page** (booking-type): same `kind=contact` slot under the fee ledger and 4 steps, fallback mailto button "Email entries" → mailto:entries@sanrokutrail.example, subject `_t()` key.
- **Newsletter page** (`newsletter`, standalone, not an alias to posts) and **home H9** subscribe row: `shippress_form_slot( kind=newsletter, email=letters@sanrokutrail.example, label=forms_email, submit=forms_subscribe, notice=forms_mail_notice, subject=forms_mail_subject )`. MailPoet (explicit id) → MC4WP → CF7/WPForms only by explicit id. Without plugins: required email input + submit, native mailto POST, notice visible: "Opens your email app. Send the request to subscribe; you are not subscribed yet." Footer has no form.
- Tokens (style.css, mapped to theme.json presets): `--sp-form-accent: var(--wp--preset--color--sand)` (#E0CEAA), `--sp-form-on-accent: var(--wp--preset--color--ink)`, `--sp-form-radius: 4px`, `--sp-form-focus: var(--wp--preset--color--accent)` (#715C1F, 2px outline, 2px offset), `--sp-form-surface:#FFFFFF`, `--sp-form-text:#1D1D1F`, input border 1px `#BDBBB5`, height 48px, label 12px .06em above field; error text + border `#8E2B22` 13px; success `#3A4F44` with 1px left rule. Dark sections (if a form is ever placed on `#3A4F44`): surface `rgba(255,255,255,.08)`, text `#FFFFFF`, border `rgba(255,255,255,.45)`, focus `#E0CEAA`, error `#F2B8A8`, success `#E0CEAA`. Scoped class selectors only (CF7, WPForms, MailPoet, MC4WP, Jetpack); no global input selectors.
- i18n semantic keys in inc/i18n/en.php, translated into en / zh-TW / ja / fr / de (L10N_SEMANTIC=1): `forms_email` ("Your email"), `forms_subscribe` ("Ask to subscribe"), `forms_mail_notice`, `forms_mail_subject` ("Subscribe to Sanroku Trail letters"), `contact_email` ("Email the race office"), `enter_email` ("Email entries"), `enter_mail_subject` ("Race entry enquiry"). Check dynamic block attributes render translated in each locale.
- No sp-reveal on any form or its parent row; no form in the first screen.

## 10. Images (16 total; STYLE string identical for all)
STYLE (Imagery = photo, per stage-a IMAGERY): `real documentary photograph, 35mm film grain, natural overcast light, muted greens and bark browns, soft pale sky, people small in the frame and seen from behind or in three-quarter view, unposed, calm, international diverse people, modern technical trail-running clothing in muted colours, no text, no logos, no race numbers legible, no brand marks, no Japanese elements`
| ID | Subject / composition | Ratio | Used on (page · block) | Home |
|---|---|---|---|---|
| P01 | Beech ridge early spring; marshal in olive jacket tying pale ribbon to trunk lower-middle; 3–4 runners climbing path behind; bright tree-free sky gap upper-right third | 2.4:1, 2000×834 | Home H1 (KV) | ✔ |
| P02 | Hollin Village meadow at dawn, start area: a handful of runners stretching, wooden barn, mist | 3:2 | Home H2 | ✔ |
| P03 | Snowmelt: runners crossing old snow patches between bare beeches, April | 4:3 / head 3.3:1 crop | Home H3 card 1 · Races head | ✔ |
| P04 | Beech Line: single runner on a green beech ridge in June, ferns | 4:3 | Home H3 card 2 · Races body | ✔ |
| P05 | Gorge: two runners fording a shallow clear river on stones, August | 4:3 | Home H3 card 3 · Races body | ✔ |
| P06 | Autumn Ridge: line of small runners on a golden-larch ridge, October, low cloud | 4:3 | Home H3 card 4 · Races body | ✔ |
| P07 | Forest clearing aid table; a runner checks a vest pack, volunteer pours water, wide sky | 1.8:1 | Home H5 · Mandatory Kit inset | ✔ |
| P08 | Two marshals at first light walking a ridge path with a bundle of ribbons | 1:1 | Home H6 | ✔ |
| P09 | Wide valley under cloud, tiny line of runners on far ridge | 2.4:1 | Home H7 parallax | ✔ |
| P10 | Volunteers at an aid station filling bottles from jerrycans | 3:2 | Home H9 post · Volunteer head | ✔ |
| P11 | Village-meadow finish: timing mat on grass, runner crossing, a few people clapping | 3:2 | Home H9 post · Enter head | ✔ |
| P12 | Two course setters with a paper map at a forest trail junction | 3:2 | Home H9 post · Course Guides head · post "Course recce" | ✔ |
| P13 | Sweep runner with headlamp on a dusk forest trail | 3:2 / head 3.3:1 | Safety head | |
| P14 | Kit-check tent: jackets, blankets, bottles laid on a table, hands checking a list | 3:2 / head 3.3:1 | Mandatory Kit head · post "foil blanket" | |
| P15 | Race office: small timber cabin at the edge of a meadow, bikes leaning | 4:3 | About head (wobbly frame) · Contact | |
| P16 | Trail-day volunteers digging a drainage channel across a trail | 3:2 | About body · post "Trail day" | |
All ≤ 300 KB, ≤ 2000px, webp; read each and regenerate if text, logos, warped hands/faces or style drift. 0 cut-outs.

## 11. Fixed facts (identical on home, inner pages, five languages)
- Name: Sanroku Trail Series. Founded 2014. Race village & office: Hollin Village, Upper Arden Valley (fictional). Office: Hollin Village Hall, Mill Lane 4. Email office@sanrokutrail.example / entries@ / letters@.
- Office hours: Tue–Fri 10:00–16:00; race weeks Thu–Sun 07:00–19:00. Kit check: Friday before each race 15:00–19:00 and race morning from 1h before start.
- Races 2027:
| Race | Date | Distance / climb | Start | Cut-off | Cap | Fee |
|---|---|---|---|---|---|---|
| Snowmelt 21 | Sat 17 Apr 2027 | 21 km / +1,150 m | 08:00 | 5 h | 400 | €58 |
| Beech Line 32 | Sat 12 Jun 2027 | 32 km / +1,900 m | 07:00 | 8 h | 350 | €74 |
| Gorge 45 | Sat 21 Aug 2027 | 45 km / +2,700 m | 05:30 | 11 h | 300 | €96 |
| Autumn Ridge 60 | Sat 16 Oct 2027 | 60 km / +3,600 m | 05:00 | 15 h | 250 | €128 |
- Fee ledger (6): the four races + Series pass (all four) €310 + Transfer to another runner €15. Refund: 50% until 30 days before.
- Entries open Mon 1 Feb 2027, 10:00; one way to enter: the Enter page (form/email). Flow (4): Choose a race → Send the entry form → Kit check in Hollin Village → Start line.
- Mandatory kit (6): waterproof jacket with taped seams · 1 L water · foil blanket · charged phone with race office number · whistle · reusable cup. Extras for Gorge 45 & Autumn Ridge 60: headlamp + spare batteries, warm layer.
- Ribbon day milestones (6): 04:30 marshals leave the hall · 05:00 first start (Autumn Ridge) · 07:30 aid stations staffed · 12:00 cut-off checks · 19:00 sweep runners finish · next day 24 h: every ribbon collected.
- People (7): Maren Kosta (founder, race director) · Tobias Wren (course setter) · Aiyana Brooks (head marshal) · Dr Samir Haddad (medical lead) · Lucía Ferro (entries & volunteers) · Joon-ho Park (sweep lead) · Elise Duval (trail stewardship).
- Stories (3): "The ribbon that came back" · "Forty-six spades" (trail day) · "The 18:00 weather call".
- Volunteers: about 60 per race; trail day 2026 phrase fixed: "46 volunteers, 380 m of drainage".
- No claims of guarantees, awards, real media, real brands or real people.

## 12. Similarity table (target ≈ 80%)
| Dimension | Reference (camp.muji.com) | Sanroku Trail |
|---|---|---|
| Ground / ink / muted | #F1F0EE / #1D1D1F / #6D6D72 | same |
| Dark band | #3A4F44, white 1px outline, one 10px dot | same values, our own course outline |
| CTA | sand #E0CEAA, 4px radius, ink 12–13px | same |
| Chips | red #B5242B, filled | #715C1F filled (reason §4) |
| First-screen saturated | 0.4% | ≤5% |
| Type | Gothic MB101 DemiBold/Medium, h2 26/39 .1em, body 16 Medium, notes 12/18 .06em | Archivo 600 / Inter Tight 500, same sizes; largest 4.25rem |
| Vertical headline | vertical-rl, ~40px, right of photo sky | vertical-rl 48px, right 100px top 150px (desktop only) |
| Frame / gutters | 1312 frame, 64 margins, 24/30 gutters, body column at 43% | same |
| Hero photo | flush 1440×600 (2.4:1), people small | same |
| Inset photo | 1312×730 (1.8:1), vertical caption top-right | same |
| Rows | 1px hairlines, ~50px, chip·date·title·chevron | same, 50px |
| Accordion | 1px white hairlines, +/−, dotted leaders | same |
| Tables | 6 equal cells, 1px grey | same |
| Shadows / masks | none | none (one wobbly frame from secondary, About only) |
| Motion | fade+rise .65s cubic-bezier(.165,.84,.44,1); scale .65s; hover .2s | sp-reveal--up/zoom at .65s same curve (zoom .9s); sp-stagger; hover .2s; + sp-parallax 8%/10% |

## 13. Home acceptance checklist
- [ ] P01 flush edge-to-edge 600px tall at 1440; no radius/inset.
- [ ] Vertical-rl H1 visible in the sky at right on desktop; horizontal and static at 390.
- [ ] Caption bottom-left; sand CTA top-right; split nav with exactly one menu.
- [ ] Four race rows + "All dates" row start at y=600 with filled #715C1F chips, hairlines, chevrons; visible within 900px.
- [ ] Story has 3 narrative ¶ (≥20 words each); home ≥250 English words.
- [ ] Season strip scrolls horizontally with snap, 4 cards with P03–P06, no reveal on cards, no page-level horizontal overflow.
- [ ] Dark #3A4F44 band with white hairline outline + one dot + accordion with dotted leaders.
- [ ] Inset P07 1.8:1 with vertical caption, split title (4.25rem)/43% body, 6 equal cells.
- [ ] Milestone row horizontal on desktop (6 nodes) with P08.
- [ ] H7 parallax band P09; hero parallax; check-parallax.mjs passes desktop+mobile.
- [ ] Fee ledger full width at 800/1280, fee column nowrap right-aligned; stacked at 390.
- [ ] Newsletter slot in H9 shows email + submit + notice without plugins; not revealed; not in first screen.
- [ ] ≥8 (12) unique home images; no duplicates; 0 cut-outs; first-screen saturation ≤15% (target ≤5%).
- [ ] Facts match §11 exactly (dates, fees, cut-offs, caps).
- [ ] auto-gates.mjs en `1 1` pass; pattern_source.py pass; editor fonts = front-end fonts.
