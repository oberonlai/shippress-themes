# Mimamori College: design spec (stage B, binding for implementation)

Slug `mimamori-college`, row b20-3, caregiver training college for career-changers, type `business`, category education-classes, no WooCommerce needed (declare compatibility only). Five languages: en, zh-TW, ja, fr, de.
Reference: https://www.nichiigakkan.co.jp/ (R1). Secondary: https://recruit.mosc.co.jp/ (R2, one structural idea only, no colours). Measurements: `reference-tokens.md`, cited below as `tok(a)`…`tok(g)`; screenshots in `brand/ref/`.
We borrow structure, technique, colour values and the key-visual idea. Photos, copy, logo and the feather drawing are our own.

**Decisions that override stage-a.md (read these first):**
1. **Colours are R1's actual values, not the plum set in stage-a.md.** A care company's palette fits a care college, so there is no reason to swap. It also avoids a clash: the row hex `#6E5D68` is almost the same as Minori Seminars' accent `#655A62`. The row hex survives only as muted text. See section 5.
2. **T2 is one white sheet, not separate cards.** `scroll-nichii-900.png` shows five cells on a single r15 sheet. stage-a.md's "3+2 cards" misread this.
3. **Audience content lives in the T1 tiles; the T2 sheet holds the five courses.** Otherwise the same four audiences would appear twice in the first two screens.

---

## 1. Signature techniques (three; each must be obvious at a glance)

### T1. Gateway strip biting the inset photo (R1 first screen, `nichii-first.png`, `tok(c)`)
- **Reference:** a 1400×473 photo inset 20 px from each side, directly under a 100 px header, radius 0. A 1120 px strip overlaps its bottom edge by about 35 px. The strip is translucent where it crosses the photo and reads as white below it. It holds four 247×85 banners with a gap of 23 px, each with a hairline and soft shadow.
- **Used in:** home block 2.
- **Geometry at 1440:** stage x 20–1420, y 100–573, 0 radius, `aspect-ratio: 1400/473`. Strip `width: min(1120px, 100% - 40px)`, centred, `margin-top: -35px`, `background: rgba(255,255,255,.85)`, `padding: 25px 31px 0`, `z-index: 2`. The strip is a **sibling after** the stage, never inside it, because `.sp-parallax` clips with `overflow: clip`.
- **Tile:** 247×85 (2.9:1), white, 1 px `#C5C5C5`, radius 0, shadow `3.5px 3.5px 4px rgba(0,0,0,.1)`. Inside: a 96×85 photo flush left (`object-fit: cover`), then a text column with padding 10 px 12 px: round ▶ dot Ø16 `#CD491C`, title Mulish 600 0.875rem/1.3 `#014B80`, one sub-line Mulish 0.75rem/1.35 `#333333`.
- **Tile copy** (each links to its anchor on Who it's for):
  - "Changing career" / "From any first job"
  - "Returning to care" / "A six-week refresher"
  - "Leaving school" / "Start at 18"
  - "Homes that host" / "Host a student"
- **Why the tile is split:** R1 bakes text into banner images, which we cannot do across five languages. The split keeps the 2.9:1 outer shape and leaves the text live.
- **Must not be diluted:**
  - The strip must visibly overlap the photo by 35 px and show the photo faintly through it.
  - The photo stays inset with square corners, not full-bleed or rounded.
  - The tiles stay small: four in a row at ≥1100 px, not large cards.

### T2. One white sheet with coloured rules (R1 services, `scroll-nichii-900.png`, `tok(a)(d)(f)`)
- **Reference:** a single white r15 sheet with a soft offset shadow on a cream band. Five cells in a 3+2 grid, each 345 wide with a gap of 22. Each cell has a 3 px rule across its top in its own colour, a centred round-dot title in that colour, a centred spot image, then 2–4 lines of left-aligned text. The sixth slot stays empty. Under the sheet sit small white link cards.
- **Used in:** home block 4, "Five ways to train".
- **Geometry:** band `#F6F6EB`, padding 30 px 0 80 px, centred H2 above. Sheet 1100 wide, padding 10 px, radius 15, white, shadow as `tok(d)`. Cells 345 wide, gap 22 px, 3+2. Cell padding: 32 px 30 px 36 px, with the rule on the cell's top edge.
- **Cell content, in order:** title row (Ø16 dot, Fraunces 500 1.25rem, centred), 4:3 photo 285 wide with r8, centred, 16 px below the title, then 3 lines of 0.9375rem/26px text.
- **Sixth slot:** one plain text link with an accent dot, bottom-right aligned, "Compare all five courses".
- **Under the sheet:** at the left, two white r8 link rows 352 wide with the same shadow and a `›` in `#CD491C`, 16 px apart, reading "Fees and bursaries" and "Next open morning". Nothing to their right.
- **Colours per cell** (rule and dot use R1's exact value; title text uses a darker same-hue value because R1's fail contrast at 2.2–3.6:1):

| Cell | Rule + dot | Title text | Contrast on white |
|---|---|---|---|
| Core Care Certificate | `#518DE0` | `#2B68BD` | 5.5:1 |
| Evening Route | `#F07690` | `#B83C58` | 5.5:1 |
| Return to Care | `#7DC21B` | `#4A7A0C` | 5.2:1 |
| Dementia Care Certificate | `#EE9A40` | `#A35C0F` | 5.1:1 |
| Safe Moving and Handling | `#EA5504` | `#BF4404` | 5.2:1 |

- **Must not be diluted:**
  - One sheet, one shadow. Do not split it into five boxes.
  - All five rule colours stay fully saturated. Do not swap them for greys or one brand colour.
  - The sixth slot stays visibly open.

### T3. Feather across the seam, above a ruled three-column row (R1, `scroll-nichii-1800.png`, `tok(f)`)
- **Reference:** a large pale feather pair, about 225×270 px, sits right of the container. About two-thirds is above the cream/white seam and one-third below. Below it is a 196 px row of three columns split by 1 px vertical rules, each with an icon and a dotted link.
- **Used in:** home block 5.
- **Feather:** our own hand-authored SVG `assets/feather.svg`, not traced from R1. Two quills, 225×270 overall. Large quill rotated 20°, vane fill `#BFE1F2`, shaft `#2C9CD0`. Small quill behind and lower right, fill `#E6EAF6`, shaft `#9DB3D6`. Its right edge sits about 90 px beyond the container's right edge (x≈1135–1360 at 1440), and 170 px sits above the seam.
- **Parallax box:** `.mc-feather.sp-parallax`, 300×380, absolutely positioned across the seam, `aria-hidden`, `pointer-events: none`. Inside it, `.sp-parallax__layer` holds the SVG, centred. The clearance is what stops `overflow: clip` cutting the quills at scale 1.18.
- **Row:** white band, padding 80 px 0. Three equal columns, 1100 total, 196 px tall, 1 px `#C5C5C5` rules at the far left, between columns and at the far right, as in R1.
- **Column content:** a figure in Fraunces 300 4.25rem/1 `#014B80` with `sp-count` where R1 has an icon, a 0.875rem unit line, then a dotted link.
  - "32" / "weeks, full-time" / link: The Core Care Certificate
  - "420" / "hours on placement" / link: How placement works
  - "1:8" / "instructor to students in the practice room" / link: Meet the instructors (keep "1:8" static with no `sp-count`)
- **Must not be diluted:**
  - The feather must cross the seam and stay at least 200 px wide.
  - All four vertical rules stay, and they must run full height.

### Continuation to inner pages (every page uses at least one; each technique on ≥4)
Inner head = `pattern page-head`: inset photo at 1400×350 (4:1, radius 0, 20 px margins), light Fraunces title at the right in `#2C6FB7`, then a white strip overlapping the bottom by 35 px holding 2–4 text tiles (no photos, dot + label, anchors within the page). This is T1 at reduced height. T3 small = a 96 px feather across the head/body seam at right.

| Page | T1 head | T2 sheet | T3 |
|---|---|---|---|
| Who it's for | yes, four audience anchors | four-cell sheet (2+2), one per audience | closing 3-col row |
| Courses | yes | full five-cell sheet with duration and fee line | small feather, closing row |
| Core Care Certificate | yes | three-cell sheet: Practice room / Classroom / Placement | full 32 / 420 / 1:8 row |
| A training day | yes | — | small feather, closing row |
| Placement | yes | two-cell "for students / for homes" sheet | full feather, closing row |
| Instructors | yes | — | small feather |
| Fees and bursaries | yes | three-cell "what's included" sheet | closing row |
| Student stories | yes | — | small feather |
| How to apply | yes | — | closing row |
| About | yes | — | full feather |
| Contact and visit | yes | — | closing row |
| Notices index, single | yes on index | — | small feather on index |

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
- **Concept:** a calm, high-key, soft-focus photograph. A child leans her forehead against an adult, on a pale sea ground. It is cropped tight enough that the touch is the subject and the adult's face is out of frame. It sits in an inset frame, with a thin blue two-line headline on the pale right side and four small banners on a strip over its lower edge.
- **Story:** gentleness can be a strength. A care company begins from the touch between two people, then opens a door for each audience.
- **Motion:** three slides cross-fade with opacity 1 s `cubic-bezier(.4,0,.2,1)`, with dots and a pause control. Banners respond to hover in .2 s. `tok(g)`

### (2) Our scene
Same composition, same motion idea, same image type (soft-focus documentary photograph). In a bright practice room with pale cool walls and hazy window light, an instructor steadies a trainee's forearm as the trainee helps an older volunteer move from a wheelchair to a bed. The crop stays close: **the hands and the shared moment are the subject**, as the forehead-and-hand is in R1. The subjects fill the left 55%. The right 45% falls away into pale out-of-focus room, which carries the headline. The story becomes: steadiness is taught, by one person's hand beside another's, and then there is a door for each kind of learner. Three practice-room photos cross-fade; four audience tiles open those doors.

### (3) KV checklist (all six visible on the first screen at 1440×900)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Inset 1400×473 soft-focus photo of two people touching | Close wheelchair-transfer photo, instructor's hand on trainee's forearm, high-key, shallow depth | x 20–1420, y 100–573 | Cross-fade through 3 photos, opacity 1 s `cubic-bezier(.4,0,.2,1)`, hold 6 s; `sp-parallax --sp-par: 6%` | K1, K2, K3 |
| 2 | Thin blue two-line headline at right | Fraunces 300 `#2C6FB7`: "Learn to care, / one steady hand at a time." plus a dotted text link "About the college" | Left edge at x 810, vertically 25–62% of the photo | None; hero has no reveal | on K1 pale area |
| 3 | Four banners on a strip overlapping the photo | Four audience tiles (T1) | Strip x 160–1280, top y 538; tiles y 563–648 | Hover: lift 4 px, .2 s same easing | A1, A2, A3, A4 |
| 4 | Carousel dots + pause | Three Ø12 dots + pause, active `#016FBD`, inactive white 60% | Photo bottom-right, about x 1168–1270, y 510 (above the strip) | Dot fill .2 s | — |
| 5 | Blush notice band with outlined circle-i | Two-row band: next intake and open morning | Full width, y 706–838 | None | — |
| 6 | Pale wide ground, no dark area, no CTA button on the photo | Same: only a text link on the photo, white page | Whole first screen | — | — |

The feather (stage-a item 6) sits off the first screen, as it does on R1, and is covered by T3. Item 6 above replaces it so that every item is visible on the first screen.

---

## 3. Home page

### Header (R1 two-row layout, single menu)
100 px, white, 1 px `#C5C5C5` bottom rule, static (not sticky), as `tok(c)`.
- **Row 1 (56 px, container 1100):** left: wordmark "Mimamori College" Fraunces 500 1.5rem `#014B80` with a 22 px line feather glyph. Right: "Mon–Fri 08:30–17:30" Mulish 0.8125rem `#6E5D68`, a 1 px rule, language switcher, a 1 px rule, dotted link "Request a prospectus".
- **Row 2 (44 px):** one Navigation block, justified edge to edge as R1: Courses, Who it's for, A training day, Placement, Fees, About, Contact. Mulish 600 0.9375rem `#333333`. Hover and current: `#014B80` with a 2 px underline.
- This is the only menu. No search box on the first screen, which is a deliberate departure from R1 (rule: no search on the first screen).
- **< 960 px:** 64 px bar with wordmark and menu button; overlay nav, white, full-screen, 1.25rem links with hairlines.
- Page-top button: 90×87, white, r8, `tok(d)` shadow, fixed bottom-right ≥782 px, chevron `#4A7A0C`, label "Top". Fades in over 0–400 px with a CSS `scroll()` timeline; it is simply visible where unsupported. No scroll listener.

### First screen (1440×900)
Header 0–100, photo 100–573, strip overlap from 538, tiles to 648, white gap, notice band 706–838, top of cream band to 900 showing the start of the H2.
- Headline: `clamp(2rem, 3.06vw, 2.75rem)`, weight 300, letter-spacing .04em (R1 uses .1em, but Latin serif falls apart at that tracking), line-height 1.6, two lines via `<br>` in en. Text column max width 45% of the stage. Grid overlay in the same cell as the stage, not absolute.
- If K1's right side is not at least as pale as `#EEF4F8`, regenerate the photo. Only as a last resort add `linear-gradient(to left, rgba(255,255,255,.35), transparent 55%)`.
- No H1 ≥4.25rem here on purpose: R1's calm depends on 44 px type. The theme's 4.25rem appears in block 5.
- Forbidden: table, form, search box, filled button, vertical text, large centred word.

### Block order
| # | Pattern | Band | Purpose and layout | Images | Copy | Effect |
|---|---|---|---|---|---|---|
| 1 | header | white | above | — | — | — |
| 2 | `front-hero` | white | **T1** + KV | K1 K2 K3, A1–A4 | 8 words + tiles | `sp-parallax`, no reveal |
| 3 | `front-notice` | `#F5DBD2` | Two rows, 132 px tall, container 1100. Circle-i + label `#A93A12` 0.9375rem, then an underlined `#014B80` link. "Next intake" / "12 January: 14 places left in the Core Care Certificate"; "Open morning" / "Saturday 21 November, 10:00, no need to book" | — | 20 words | none |
| 4 | `front-courses` | `#F6F6EB` | **T2**. Centred H2 "Five ways to train", one centred line under it | C1–C5 | 5 × 25 words | `sp-stagger` + `sp-reveal--up` on cells |
| 5 | `front-figures` | white | **T3** feather + 3-col row | SVG only | 15 words | `sp-count`, feather `sp-parallax` |
| 6 | `front-who` | white | "Who the year is for". 12-col: W1 4:5 r8 in cols 1–5; cols 7–12 H2, then three paragraphs, then dotted link. Each paragraph opens with a bold audience phrase | W1 | 120 words | `sp-reveal--up` on text column |
| 7 | `front-day` | `#D6E6F1` | "How a training day runs". White panel 1100 wide, radius 0, padding 20 (R1 news panel): centred 1.75rem H2, hairline under it, then left D1 4:3 r8 at 45%, right four time rows with hairlines between. Each row: time in `#014B80` Mulish 600, outline chip, one line. Dotted link centred under | D1 | 90 words | `sp-reveal--up` on panel |
| 8 | `front-placement` | photo → white | "How a home takes a student on placement". Full-bleed P1 at 21:9 (min-height 560 px), headline Fraunces 300 2.75rem `#014B80` on the pale left of the photo. **A white r15 panel, 1100 wide, overlaps the photo's bottom edge by 120 px** (sibling after the cover, same logic as T1), three columns split by 1 px rules | P1 | 110 words | `sp-parallax --sp-par: 10%` |
| 9 | `front-story` | white | "One story from last year". Left 7/12 S1 3:2 r8, right 5/12 Fraunces italic 1.5rem pull quote, attribution, one paragraph, then two hairline text rows linking to two more stories | S1 | 90 words | `sp-reveal--up` on right column |
| 10 | `front-notices` | `#D6E6F1` | Two white panels, 1100 wide, 40 px apart (R1): "Notices" with 3 dated rows + outline chips + centred dotted link; "Come and see the practice room" with 2 lines, address, hours, dotted link to Contact | — | 70 words | none |
| 11 | footer | `#F0F0F0` | Four link groups (14 px group title), wordmark, address, hours, "© 2009–2026 Mimamori College" | — | — | — |

Block 8's three columns:
- **"Weeks 1–8"**: "In the college. No resident is moved by a student who has not been signed off in the practice room."
- **"Weeks 9–28"**: "Two days a week with one host home and one named mentor."
- **"Weeks 29–32"**: "Four full weeks on the floor, with the mentor beside you."

Block 8 differs from Hazuki's TRIAL band on purpose: its panel floats inside the photo at left with stacked rows; ours straddles the bottom edge with ruled columns.

Block 7 rows: `08:45` chip "Classroom": handover practice; `09:15` chip "Practice room": transfers, one instructor to eight students; `13:15` chip "Scenario": a morning routine with a volunteer; `15:00` chip "Review": what went well and what to redo, day ends 15:30.

Chips: 1 px outline, radius 12, Mulish 0.75rem, `#016FBD` or `#CD491C` (R1 uses 11 px; 12 px for legibility). `tok(d)`

Home has 16 image positions. English ≥ 330 words with narrative paragraphs in blocks 6, 7, 8 and 9. CJK home ≥ 500 characters. No fee table and no prices on home (fees live on one page, so they cannot drift).

### Comparison with the most recent themes
| # | Hazuki | Kouhi | Minori | Shirushi | **Mimamori** |
|---|---|---|---|---|---|
| 1 | 4-panel seam strip | wide rounded photo | inset stage + notch card | dark pinned stage | **square inset photo + gateway tiles biting it** |
| 2 | info row | notice + 2×2 tiles | snap strip | desk intro | **blush notice band** |
| 3 | dated rows | intro | giant word on diagonal band | masonry | **one sheet of five coloured-rule cells** |
| 4 | statement + photo | lifted-card band | the day | dossier strip | **feather seam + ruled figures** |
| 5 | 3-then-4 tiles | sticky-media | photo cards | blurred-ground inset | **who it's for: portrait + narrative** |
| 6 | parallax band | story parallax band | vertical-word dates | prepare band | **a day in a white panel on pale blue** |
| 7 | longform CARE + prices | calendar rows | people | fee table | **placement photo with panel straddling its foot** |
| 8 | STAFF | how a visit runs | fee table | notes rows | **one graduate story** |
| 9 | VISIT | price table, FAQ | enrol, venue, FAQ | notice panel | **notices + visit panels** |

Why not alike:
- Minori also has an inset stage, but its card notches into a corner. Ours is a four-tile strip across the bottom edge with a square photo, and no giant type.
- Kouhi has a notice strip with 2×2 tiles and rows with chips, but its tiles are large and below the photo, on warm paper with an arc; ours overlap the photo and are small.
- Nothing here has a fee table, sticky media, dossier strip, dark band or masonry.
- The T2 rule colours and the T3 feather have no precedent in any of the four. The 3 px rule differs from awa/mame's single black broken rule: ours is five colours on one sheet.

---

## 4. Inner pages (12, plus 404 and search)

Each: page head (T1) → body → closing row (T3) where section 1 says so. Body type 0.9375rem/26px, text column 680–760 px. No sidebar.

1. **Who it's for** (`/who-its-for/`): head K3. 2+2 T2 sheet with A1–A4, each with its route and a link. Sections with anchors match the four home tiles. Two honest sub-sections: "Who should wait a year" and "What you need to start" (age 18+, reference check, no previous care work needed).
2. **Courses** (`/courses/`): head C1. Five-cell T2 sheet with duration, fee and next start, then a comparison table (course, length, placement, fee).
3. **Core Care Certificate** (`/courses/core-care-certificate/`): head K1. Three-cell sheet, then the eight units as ruled rows, what is assessed and how. State plainly that it is a college certificate and that local registration differs by country.
4. **A training day** (`/a-training-day/`): head D1. The full seven-row day as a table, then a narrative walk through the practice room, with K2 inset.
5. **Placement** (`/placement/`): head P1. Two-cell sheet (students / homes), the three stages, how mentors are chosen, the three named partner homes, and what a home commits to.
6. **Instructors** (`/instructors/`): head I2. Seven named people as ruled rows (name, role, years in care, what they teach, one sentence). No portrait grid.
7. **Fees and bursaries** (`/fees/`): head C3. Fee table, three-cell included sheet, instalments, bursary terms.
8. **Student stories** (`/stories/`): head S1. Four stories: each a pull quote + 120 words, alternating text alignment, with A1, A3, C3 inset. No claims about pay or job outcomes.
9. **How to apply** (`/apply/`): head A1. Four steps as paragraphs with ruled headings (not a step grid), dates, the "what we'll ask" list.
10. **About** (`/about/`): head I1. Founded 2009, why the name (*mimamori*, "watching over"), how the college is run, full feather.
11. **Contact and visit** (`/contact/`): head K2. Address, phone, email, hours, open morning, getting there. Text only; a form is optional and never on a first screen.
12. **Notices** (`/notices/`, `home.html`, `archive.html`, `single.html`): six posts in ruled dated rows with outline chips (categories Course, Open day, College). Single: chip + date, title, 680 px column.
13. **404 / search:** T1 head with no photo strip, dotted link home.

---

## 5. Colour (values from R1, `tok(a)`)

| Role | Hex | Source | Use | Share |
|---|---|---|---|---|
| Base | `#FFFFFF` | R1 base | header, white bands, panels | ≈38% |
| Band cream | `#F6F6EB` | R1 band | block 4 only (and T2 sheets on inner pages) | ≈25% |
| Band blue | `#D6E6F1` | R1 news band | blocks 7 and 10 | ≈24% |
| Notice | `#F5DBD2` | R1 notice | notice band | ≈3% |
| Footer | `#F0F0F0` | R1 footer | footer | ≈5% |
| Text | `#333333` | R1 text | body | — |
| Main | `#014B80` | R1 link blue | link text, headings on photo, figures, wordmark | ≈2% |
| Link 2 | `#016FBD` | R1 | active dot, blue chip | <1% |
| Headline | `#2C6FB7` | R1 hero headline | hero and page-head titles only | <1% |
| Accent | `#CD491C` | R1 accent | dots, circle-i, orange chip | <1% |
| Notice label | `#A93A12` | darker `#CD491C` for 4.8:1 on blush | notice label only | <1% |
| Card colours | section 1 T2 table | R1 five colours | rules, dots, titles | <1% |
| Muted | `#6E5D68` | row hex kyuba-nezumi | captions, meta, header info (6.1:1 on white) | text |
| Hairline | `#C5C5C5` | R1 | rules, tile border | — |

The cream band is one quarter of the page and comes straight from R1; white stays the ground, so this is not a cream-led page. No filled colour blocks anywhere: buttons are dotted text links as on R1. The one exception is the form submit on any page that has a form, filled `#014B80` with white text, r8.

**First-screen saturation:** R1 measures 3.8%. Target ≤ 8%, hard limit **15%** (`scripts/check-first-screen.py`), which is stricter than the row's 30% ceiling. Keep K1–K3 pale and low in saturation; A1–A4 are small.

Dark tones are not a section background anywhere. theme.json slugs: `base`, `band-cream`, `band-blue`, `notice`, `footer`, `contrast`, `primary`, `primary-2`, `headline`, `accent`, `muted`, `line`, plus `rule-1…5` and `title-1…5`.

---

## 6. Type

font_direction **serif**: Latin serif headings + Latin sans body + CJK Noto Serif Mincho for both CJK headings and CJK body. Do not mix in Noto Sans.
- Headings: `"Fraunces", "Noto Serif TC", "Noto Serif JP", serif`
- Body: `"Mulish", "Noto Serif TC", "Noto Serif JP", serif`
- `:lang(zh-TW)`: Noto Serif TC first. `:lang(ja)`: Noto Serif JP first. Copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and require it, because `:lang()` rules exist.
- Load everything through theme.json `fontFamilies` + `fontFace`, including zh-TW and ja subsets, so the editor and front end are identical. Use the Hokuto/Hada subsetting workaround (the Chinese subset script is known to be broken).
- Fraunces weights 300, 400, 500, italic 400, with the SOFT axis left at 0. Mulish 400, 600, 700.

| Preset | Size | Line height | Use | Source |
|---|---|---|---|---|
| x-small | 0.75rem | 1.35 | chips, tile sub-line | `tok(d)` 11 px, raised to 12 |
| small | 0.875rem | 1.5 | tile title, footer title | `tok(b)` 14 px |
| base | 0.9375rem | 26px | body | `tok(b)` 15/26 |
| medium | 1.25rem | 1.5 | T2 cell titles | `tok(b)` 18 px panel, one step up for serif |
| large | 1.75rem | 1.4 | section H2, weight 500 | `tok(b)` 22/38, raised for serif |
| x-large | 2.75rem | 1.6 | hero, page heads, block 8, weight 300 | `tok(b)` ~44 px |
| xx-large | 4.25rem | 1 | T3 figures, weight 300 (theme maximum, rule ≥4.25rem met) | ours |

Section H2s are centred, as on R1. zh-TW/ja headings about 0.75× the English size except hero (0.85×), body line-height 1.85, letter-spacing .04em; the zh-TW/ja hero may use R1's .1em. fr/de: `hyphens: auto`.

---

## 7. Responsive

- **≥ 1100:** as specified. Container 1100.
- **782–1099:** stage keeps 1400/473. Strip tiles 2×2. Sheet cells 2 across. Panels full width minus 40 px. Columns in T3 stay three, figure drops to 3rem.
- **< 782 (390 px):**
  - Order is header, headline on white, stage, strip. **The headline is not on the photo on phones.** Headline 2rem, left aligned, 20 px side padding.
  - Stage 4:3, K1 `object-position: 30% 50%`, inset 12 px each side.
  - Strip overlaps the photo by 24 px, full width minus 24 px, tiles stacked one per row, 72 px tall. Text in the strip must clear the photo: no label sits absolutely over anything. Dots + pause sit in a row below the strip, not on the photo.
  - No vertical text or absolutely positioned label on the first screen.
  - Sheet one column, rule across each cell. T3 row stacks, vertical rules become horizontal hairlines.
  - Block 8: P1 at 4:3, headline above the photo, panel overlap 40 px, columns stack.
  - Feather 140 px wide, `--sp-par: 8%`, right edge inside the viewport. Parallax stays on phones: hero `--sp-par: 6%`, block 8 `--sp-par: 8%`.
  - `html, body { overflow-x: clip }`. No horizontal overflow at 390 or 1280.
- **Fee table at ≥ 782:** 100% of the container width. `table-layout: auto`. Price column `white-space: nowrap; text-align: right`, never clipped; check at 800 and 1280.
- **Every table at < 782:** stacked: each row becomes a block, `data-label` as the label.

---

## 8. Imagery

**IMAGERY: photo** (from stage-a.md). R1's key visual is a photograph and its spot illustrations are small, so generated photographs fill every position, including those spots. No illustrations are generated; the only drawn item is the feather SVG.

STYLE (exact string on every prompt):
`photorealistic documentary photograph, 50mm lens, soft diffused window daylight, high-key exposure, shallow depth of field, soft-focus background, pale cool off-white and pale sea-blue walls, muted low-saturation colours, plain unbranded pale blue-grey and white care tunics, modern international care training setting, diverse adults of varied ages, calm candid moment, natural hands, no text, no logos, no signage, no name badges, no Japanese elements`

18 photos, one at a time, read each one. Reject text, logos, broken hands, or unsafe technique: brakes on, footplates folded for a transfer, nobody lifted under the arms. 0 cutouts. Each ≤ 300 KB, ≤ 2000 px. One readme.txt line each (AI-generated, CC0). ★ = on home.

| ID | Subject and composition | Ratio | Used on |
|---|---|---|---|
| K1 ★ | Close crop: instructor's hand steadying a trainee's forearm as the trainee supports an older volunteer rising from a wheelchair toward a bed; faces soft or partly out of frame; subjects in left 55%, right 45% pale empty room; action in the vertical middle third | 3:2 | Home hero; Core Care head; Courses sheet (Core cell) |
| K2 ★ | Trainee's hands on a transfer belt, instructor's hand beside, volunteer's arm relaxed; left 55% | 3:2 | Home hero; A training day inset; Contact head |
| K3 ★ | Trainee crouched folding a wheelchair footplate, instructor crouched beside and pointing; left 55% | 3:2 | Home hero; Who it's for head |
| A1 ★ | Adult in their 40s in a tunic reading notes at a table by a window | 4:3 | Home tile; Who sheet; Stories; Apply head |
| A2 ★ | Woman in her 50s tying a tunic, smiling slightly, corridor light | 4:3 | Home tile; Who sheet |
| A3 ★ | 19-year-old practising a bed-making corner beside an instructor | 4:3 | Home tile; Who sheet; Stories |
| A4 ★ | Care-home manager welcoming a student at a bright entrance | 4:3 | Home tile; Who sheet |
| C1 ★ | Six trainees around a practice bed, instructor demonstrating | 4:3 | Home sheet; Courses head |
| C2 ★ | Evening class at dusk, warm-neutral lamps, three adults by a practice bed, blue window | 4:3 | Home sheet; Courses sheet |
| C3 ★ | Returner taking an older volunteer's pulse at the wrist, instructor watching | 4:3 | Home sheet; Courses sheet; Fees head; Stories |
| C4 ★ | Trainee seated beside an older resident, both looking at an album with blank-looking pale pages | 4:3 | Home sheet; Courses sheet |
| C5 ★ | Two trainees operating a ceiling hoist with a volunteer, instructor at the side | 4:3 | Home sheet; Courses sheet |
| W1 ★ | Portrait: adult trainee in their 30s by a tall window, looking aside | 4:5 | Home who |
| D1 ★ | Morning handover: small group at a table with blank paper charts, one speaking | 4:3 | Home day; A training day head |
| P1 ★ | Wide: student walking slowly with an older resident using a frame in a sunlit care-home lounge; subjects right of centre, pale left third | 21:9 | Home placement; Placement head |
| S1 ★ | Graduate and older resident laughing quietly on a garden bench, pale daylight | 3:2 | Home story; Stories head |
| I1 | Plain modern two-storey college entrance, morning, pale render, trees, no signage | 3:2 | About head |
| I2 | Three instructors talking in an empty practice room between classes | 3:2 | Instructors head |

**Per-page uniqueness:** home K1–K3, A1–A4, C1–C5, W1, D1, P1, S1 (16, each once). Who: K3, A1–A4. Courses: head C1, sheet K1 + C2–C5 (K1 replaces C1 in the Core cell so C1 is not repeated). Stories: S1, A1, A3, C3. No page shows the same image twice.

---

## 9. Fixed facts (identical on every page and in all five languages)

- **Mimamori College**, founded **2009**, 18 Orchard Row, Lindmere (fictional). Phone +1 555 0142. hello@mimamoricollege.example.
- **Office:** Mon–Fri 08:30–17:30; Sat 09:00–12:00 in term.
- **Training day:** 08:45–15:30, Mon–Fri.
- **Currency:** USD in every language, no converted prices.

**Fees (6):**
| Item | Length | Fee |
|---|---|---|
| Core Care Certificate | 32 weeks full-time | $6,800 |
| Evening Route (same certificate) | 48 weeks, Mon and Wed evenings + Saturdays | $7,200 |
| Return to Care | 6 weeks part-time | $1,150 |
| Dementia Care Certificate | 10 weeks, one evening a week | $1,480 |
| Safe Moving and Handling | 2 days | $320 |
| Uniform and kit | one-off, Core and Evening only | $180 |

- Application: free. Open mornings: free. Hosting a student: free to the home.
- Instalments: four equal payments, no interest, on Core and Evening.
- Bursaries: up to **6** per intake, **$1,500** each.

**Core Care numbers:** **32** weeks; **420** placement hours (Weeks 9–28: 20 weeks × 2 days × 7 h = 280; Weeks 29–32: 4 weeks × 5 days × 7 h = 140); **8** units; **24** students per intake, **14** places left for January; **1:8** instructor to students in the practice room; **22** partner homes.

**Intakes:** 12 January and 7 September. Open morning: Saturday 21 November, 10:00.

**Stages:** Weeks 1–8 college only; Weeks 9–28 three college days + two placement days; Weeks 29–32 full placement.

**Training day (7 rows):** 08:45 Handover practice; 09:15 Practice room; 11:00 Classroom; 12:30 Lunch; 13:15 Scenario with a volunteer; 15:00 Review; 15:30 Day ends.

**People (7, fictional):** Ingrid Halvorsen, Principal; Samuel Adeyemi, Director of Practice; Rosa Delgado, Lead Instructor, Moving and Handling; Mei-Lin Tsai, Lead Instructor, Dementia Care; Tomasz Nowak, Clinical Skills Nurse; Aisha Rahman, Placement Coordinator; Daniel Brandt, Learner Support.

**Stories (4, fictional):** Noor Haddad, former bank teller (home block 9); Peter Vance, 52, former warehouse supervisor; Camille Roux, returning after eleven years; Joel Mensah, joined at 19.

**Partner homes (fictional):** Larchfield House (manager Greta Olsen), Mill Lane Care Home, The Orchards.

**Process (how to apply):** come to an open morning or call; application form; conversation with an instructor and a half-day in the practice room; reference check and place offered.

**Claims:** never promise a job, pay, pass rate, registration or accreditation. No awards or real organisations.

---

## 10. Motion

| Effect | sp-* class | Where | Source and values |
|---|---|---|---|
| Sheet cells rise in order | `sp-stagger` + `sp-reveal sp-reveal--up` | Block 4 cells; T2 sheets on inner pages | Ours. **R1 has no scroll effects** (`tok(g)`); stage-a candidate. IntersectionObserver via sp-scroll, `--sp-dur: .7s`, `--sp-ease: cubic-bezier(.4,0,.2,1)` (R1's easing), `--sp-dist: 24px`, built-in stagger step .12 s |
| Figures count up | `sp-reveal sp-count` | Block 5: "32", "420" only | stage-a candidate, 1.2 s easeOutCubic |
| Parallax | `sp-parallax` | Hero, block 8, feather | Below |
| Simple rise | `sp-reveal sp-reveal--up` | Text columns in blocks 6, 9; panel in block 7 | Same values |

Set the three `--sp-*` variables on `:root` in style.css after sp-scroll.css. Three effect types per page, no more. No reveal in block 2, 3, in the fee table, on forms or legal text. Hover uses .2 s with `transition-delay: 0s` explicitly (sp-scroll spec §4.3).

### Parallax (required)
| Place | Container | Moving layer | Foreground (static) | `--sp-par` desktop / phone | Reference motion |
|---|---|---|---|---|---|
| Home hero | `.mc-hero__stage.sp-parallax` | `.sp-parallax__layer` wrapping K1–K3 | Headline, dots (outside the layer) | 6% / 6% | R1's slow cross-fade; R1 has no parallax, added by house rule |
| Block 8 (primary, for `check-parallax.mjs`) | alignfull Cover `.sp-parallax` | Cover background P1 | Headline; panel is outside the Cover | 10% / 8% | none on R1 |
| Feather | `.mc-feather.sp-parallax` | `.sp-parallax__layer` holding the SVG | none | 12% / 8% | none on R1; it makes the seam feel lifted |

### Hero carousel (not sp-scroll)
Small `assets/hero.js`, loaded on the front page only. Timer only, no scroll listener, no libraries. Three stacked images in the layer: opacity 0→1, 1 s `cubic-bezier(.4,0,.2,1)`, hold 6 s, loop.
- The first image is visible without JS; the others are `opacity: 0`.
- Pause button and dots work with keyboard, `aria-label`s translated.
- Under `prefers-reduced-motion`, `?sp-static`, or in the editor: no autoplay, first image only. Stop on `visibilitychange`.
- Second and third images `loading="lazy"`; K1 `fetchpriority="high"`.

---

## 11. Similarity table (target 80%)

| Dimension | R1 value | Ours |
|---|---|---|
| Base / bands | `#FFFFFF`, `#F6F6EB`, `#D6E6F1`, `#F5DBD2`, `#F0F0F0` | Same |
| Accent / links | `#CD491C`, `#014B80`, `#016FBD` | Same |
| Card rules | `#518DE0` `#F07690` `#7DC21B` `#EE9A40` `#EA5504` | Same; title text darkened to pass contrast |
| First-screen saturation | 3.8% | ≤8%, limit 15% |
| Body | Noto Sans JP 15/26, 400 | Mulish 15/26, 400 |
| Hero headline | ~44 px, ~300, .1em, blue | 44 px, 300, .04em (Latin), `#2C6FB7` |
| H2 | 22/38, 700, centred | 28 px, 500, centred (serif needs more size) |
| Container | 1100 | 1100 |
| Header | 100 px, two rows, justified nav | Same, no search |
| Hero frame | 1400×473, inset 20, radius 0 | Same |
| Strip | 1120, overlap ~35, 4 × 247×85, gap 23 | Same |
| Notice band | 132 px, circle-i, underlined links | Same |
| Sheet | 3+2, 345 wide, gap 22, r15, 3 px rules | Same |
| Shadow | `3.5px 3.5px 4px rgba(0,0,0,.1)` | Same |
| Radii | 15 / 8 / 4, chip 12 | 15 / 8, chip 12 |
| Chip | 1 px outline, 11 px | 1 px outline, 12 px |
| Hairline | `#C5C5C5` | Same |
| Spot images | Line + wash illustrations, 90–130 px | 4:3 photos, 285 wide, r8 (IMAGERY: photo) |
| Hero image | Soft-focus, high-key documentary | Same type, own scene |
| Round dot | Ø16 before every link | Same |
| Feather | ~225×270, 2 layers, 20°, across seam | Same, own drawing |
| 3-col row | 196 tall, 1 px rules | Same; figures replace icons |
| News band | White panels 1100, 40 apart, padding 20 | Same |
| Hero motion | Fade, 1 s, `cubic-bezier(.4,0,.2,1)`, 3 slides, pause | Same |
| Hover | .2 s same easing | Same, 4 px lift |
| Scroll effects | None | Added by house rule: stagger, count, parallax |
| Page-top button | Fixed bottom-right | Same |

---

## 12. Home acceptance checklist

1. First screen at 1440×900 matches section 2 and shows all six KV items; `check-first-screen.py` ≤ 15%.
2. Photo is inset, square-cornered, 1400×473. Headline sits on the pale right side, thin and blue.
3. T1: strip overlaps the photo by 35 px with the photo showing through; four small tiles in one row.
4. Notice band is blush, 132 px, two rows.
5. T2: one r15 sheet, five exact rule colours, sixth slot open, text link inside it.
6. T3: feather crosses the cream/white seam, is not clipped, and sits over the top right of the row; four full-height vertical rules; figures at 4.25rem.
7. Block order equals section 3. No fee table, price, step grid, team grid, vertical timeline, sticky media, masonry, dark band or filled button.
8. All colours are from section 5. No plum or beige-led band.
9. ≥ 8 image positions (16), no repeats on home, all photos pass the rejection rules and share STYLE.
10. ≥ 330 English words, ≥ 3 narrative paragraphs, numbers match section 9.
11. `check-parallax.mjs` passes on desktop and phone; hero has no `.sp-reveal`; reduced motion and `?sp-static` show the final state and only K1.
12. 390 px: headline on white above the photo, no text over the photo, no absolute labels, no horizontal overflow. `auto-gates.mjs` passes.
13. Editor and front end show the same fonts (`check-editor-fonts.mjs`).
14. Carousel: three slides fade at 1 s, pause and dots work by keyboard.
