# Suzu Ballet: design spec (stage 1, binding for implementation)

Slug `suzu-ballet`, ballet school for children and adults, type **education** (business-like: WooCommerce compatible but not required; the site must work fully without it). Design-plan row b16-3 (archetype sticky-media, hero text-left-photo-right, nav split, first screen horizontal-scroll-strip, page structure day-schedule, palette grape mouse `#5C4A55`, fonts Outfit / Source Sans 3, font_direction **sans**).

References (measurements in `reference.md` / `reference-tokens.md`):
- **Main: Anjali Rokko** https://anjalirokko.jp/ (yoga studio, S5-Style #10986). Borrow: arch-window hero with thin caps headline across it, 50/50 tinted-panel split, three hairline columns with line icons, full-bleed tinted parallax band, round masked thumbnails, palette relationships, motion timing.
- Secondary: Pikkas International https://pikkasinternational.com/ (preschool, S5-Style #10530). Only one idea: small photo "chips" set inline in a line of text — used **once**, in the Stories heading (§5 block 8). Its giant centred headline and white floating bar are **not** borrowed.

Borrow structure, technique, shapes, colour relationships, measurements and motion. Never copy their photos, text, logo or the elephant mark. All photos are generated (§9), all copy is ours (brand.md).

Fixed brand facts (every page, all five languages): **Suzu Ballet**, founded **2012** by **Mira Ostrowska**, one daylight studio building at **2nd floor, 210 Alder Row, Victoria, BC V8W 1A1, Canada** (fictional address). Two rooms: the **Window Studio** (three tall arched windows, sprung maple floor, upright piano) and the **Garden Studio** (smaller, used for pre-ballet and rehearsals). Live piano in every adult class and every Juniors class. Currency **CAD**, written `$` in every language (no conversion).

---

## 1. Signature techniques (three, all must be obvious at a glance)

### T1. Arch window with a thin caps headline crossing its shoulders (Anjali Rokko first screen)
- Reference (anjalirokko.jp, 1440×900): page tint `#EDE6E0`; a photograph clipped to a tall arch (round top = full semicircle, straight sides, square bottom) 851 px wide = 59% of the viewport, top at 205 px (23% of the viewport height), bleeding off the bottom of the first screen; a thin display headline 130 px uppercase, line 1 at x≈117 starting left of the arch and running over its upper-left shoulder, line 2 starting at x≈480 *inside* the arch and running out past its right shoulder. A small spaced sub-label sits under line 1 on the left. Radius only on the arch top, no shadow, no frame.
- Suzu (home hero, `front-hero`): exactly that geometry, moved slightly right because the row says text-left / photo-right: arch left edge at **36%** of the viewport (518 px at 1440), width **59%** (850 px), top **205 px**, total height **935 px** (ratio 1 : 1.1), so ~235 px of arch continues below the fold. `border-radius: 1000px 1000px 0 0` on the clipping wrapper (gives a perfect semicircle at any width), `overflow: clip`. Photo **B1** fills it (`object-fit: cover`, focal point at the teacher's hand on the student's arm, ~42% from top).
- Headline (H1) "STAND TALL, / AT THE BARRE." Outfit **200**, `text-transform: uppercase`, size `clamp(2.75rem, 8.4vw, 7.5rem)` (120 px at 1440), line-height **1.0**, letter-spacing **0.02em**, colour `#393035`. Line 1 starts at x = 8% (117 px), top 160 px, so its right part ("TALL,") crosses the arch's upper-left shoulder. Line 2 is indented to start at x = 32% of the viewport (desktop only, via `padding-left`/`margin-left` on a span, not absolute positioning) and runs across the arch's interior and right shoulder. The headline sits **above** the photo in z-order (photo is high-key, dark text stays readable; no scrim, no text-shadow).
- Sub-label under line 1, left: "Ballet school for children and adults · Victoria" Source Sans 3 300, 1rem, letter-spacing 0.16em, colour `#5B4652`, at x 8%, ~16 px under line 1's baseline.
- Must not be diluted: the arch must be a full semicircle top (not a soft 24 px radius, not a pill), ≥ 55% of the viewport wide at 1440, bleed off the first screen's bottom, and the headline must **visibly cross** the arch edge on both lines at ≥ 960 px. Headline weight stays 200–300 (thin), never 500+.
- Inner pages (continuation): every inner page head uses a **small arch**: arch 40% wide (max 520 px), right-aligned in the content area, top 150 px, height 1.15 × width, page-head background `#EDE6E0`; page title Outfit 200 caps `clamp(2.6rem, 6vw, 5.625rem)`, line 1 left, line 2 indented so its last word crosses the arch's left shoulder. Same rule: arch bleeds 120 px below the page-head band onto `#F8F7F5`.

### T2. 50/50 split: tinted panel with line lattice + one inset 3:4 portrait (Anjali Rokko LESSON & PRICE)
- Reference: full-bleed section 835 px tall; left half sage `#BBC6B9` with a white 35% geometric line pattern (~120 px cells) over the whole half, giant caps title 90 px at x 165 / y 170 (two lines, lh 1.0), a small sub-label under it, a short paragraph at y≈465 (width ~300 px), an outline pill (radius 50 px, 1 px border) under it; right half pure white with ONE portrait photo 388 × 503 (ratio 0.77), radius 0, inset 166 px from the centre line, top 162 px.
- Suzu (home `front-classes`): identical geometry. Left half `#C6B9C1` (the sage panel moved to the row's mauve, same lightness, see §3) with our **harlequin lattice** (thin diagonal diamond grid, 120 × 120 px cells, 1 px white at 35%) — a ballet-costume motif, our own drawing, no hemp-leaf pattern. Title "CLASSES / & FEES" Outfit 200 caps 5.625rem, lh 1.0, colour `#5B4652`; sub-label "Children from 4, adults at any age"; paragraph (55 words); outline pill "CLASSES & FEES →". Right half `#FFFFFF` with photo **B6** 388 × 503 (3:4 crop) at 166 px from centre, top 162 px, radius 0.
- Must not be diluted: the panel must be exactly half the viewport and full-bleed (not a rounded card), the lattice visible (white 35%, not 10%), the photo small and inset (not filling the half), radius 0.
- Inner pages: Classes, Fees & Terms, Teachers & Pianists, Trial Class, About each have one T2 split (photo per §9), alternating panel left / right between pages is **not** allowed: panel is always left, like the reference.

### T3. Full-bleed tinted photo band with an oversized caps word sitting on its bottom edge, parallax (Anjali Rokko mid-page band)
- Reference: a full-width band ~1440 × 690 px of a close-up photograph desaturated to greige, scrubbed slower than the page (GSAP scrub), with a huge caps headline repeated along its bottom edge.
- Suzu (home `front-band`): band 100% wide, height `clamp(420px, 48vw, 690px)`, wrapper `sp-parallax` with photo **B11** as the moving layer (`--sp-par: 10%` desktop, 6% under 782 px). Greige grade: the image is generated already desaturated (STYLE), plus a `#EDE6E0` overlay at 30% opacity (`mix-blend-mode: normal`). Foreground (not in the moving layer): "EVERY DAY" Outfit 200 caps `clamp(4.25rem, 13vw, 11.5rem)`, colour `#F8F7F5`, line-height 0.8, left-aligned at x 4%, positioned so the baseline sits 0.06em above the band's bottom edge (letters touch the edge). One small line above it right-aligned: "Live piano in every adult and Juniors class" Source Sans 3 300 1rem `#F8F7F5`.
- Must not be diluted: band full-bleed, word ≥ 9rem at 1440 and touching the bottom edge, photo visibly greige (not colourful), parallax active.
- Inner pages: About (B16), Classes (B11), Timetable (B14), Showcase (B9), Contact (B5) each end their body with a T3 band with their own word (STUDIO, PRACTICE, TIMING, ON STAGE, VISIT).

### Supporting (from the same site, not counted as signatures)
- Three columns with 65 px thin line icons and 1 px vertical hairlines (reference strength row) → home `front-reasons`.
- Round 150 px masked thumbnails (reference blog list) → home `front-stories`, Journal index.
- Underlined statement lines (reference about block, 1 px underline per line) → home `front-intro`.
- Hero ground with a shallow dome edge: the `#EDE6E0` hero tint ends in a wide elliptical curve so the lighter `#F8F7F5` rises behind the arch's bottom (reference: curve visible at the hero/about join). Implement as a hero `::after`: `#F8F7F5`, width 140vw, left −20vw, height 260 px, `border-radius: 50% 50% 0 0 / 100% 100% 0 0`, bottom 0, z-index below the arch. At the viewport edges the curve meets ~60 px lower than its hidden crest.

### Continuation table (≥ 4 inner pages; here all 9)
| Page | T1 small arch head (photo) | T2 split (photo) | T3 band (photo, word) |
|---|---|---|---|
| Classes | B6 | B10 "CHILDREN / & JUNIORS" | B11 PRACTICE |
| Timetable | B7 | — | B14 TIMING |
| Fees & Terms | B13 | B2 "WHAT'S / INCLUDED" | — |
| Teachers & Pianists | B4 | B3 "PIANISTS" | — |
| Trial Class | B1 | B15 "YOUR FIRST / CLASS" | — |
| About the Studio | B5 | B12 "SINCE / 2012" | B16 STUDIO |
| Showcase & Rehearsal | B16 | — | B9 ON STAGE |
| Journal (index/single) | B8 (index) / featured image (single) | — | — |
| Contact & Visit | B15 | — | B5 VISIT |

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
anjalirokko.jp opens on a warm greige page with a faint geometric line pattern in the corners. Through a tall **arched window** of photograph we see a bright, small studio: one woman holds a high lunge, arms raised, and the **wall mirror doubles her**; tall windows and green plants fill the light. The thin caps line "BE REBORN, / FROM THE BONES." crosses the arch's shoulders, with a tiny Japanese sub-label beneath. The story: *body alignment, taught gently, in a calm daylight room*. Signature motion: the headline reveals on load (expo-out), the arch photo **scrolls slower than the text** (scrub parallax), and every later section fades up 20–72 px.

### (2) Our translation (same composition, same motion idea, same image type = high-key daylight photograph)
A daylight ballet studio seen through the same arched window: at the barre, **the teacher gently lifts a student's arm into second position**, her other hand on the student's shoulder blade; the **wall mirror behind doubles both of them**; tall arched windows on the right flood the room with white morning light; one or two green plants by the window. The story: *posture is taught by hand, one correction at a time, in one bright room shared by children and adults* (the row's signature). Headline "STAND TALL, / AT THE BARRE." crosses the arch like the reference. Motion: the arch photo moves slower than the headline (`sp-parallax`); no load reveal on the hero (pipeline rule); the following sections fade up.

### (3) KV checklist (all six in the first screen at 1440×900, visible without scrolling)
| # | Reference element | Our match | Position | Motion | Image used |
|---|---|---|---|---|---|
| 1 | Arch-clipped studio photo, 59% wide, top 23vh, bleeds off bottom | Arch with teacher correcting a student's arm at the barre | x 36–95%, top 205 px, continues ~235 px below fold | `sp-parallax` on arch wrapper, `--sp-par: 8%` (mobile 5%): photo slower than text | B1 |
| 2 | Thin 130 px caps headline crossing both arch shoulders | "STAND TALL, / AT THE BARRE." Outfit 200, 7.5rem, line 2 indented to 32% | line 1 x 8% top 160 px; line 2 x 32% top 280 px | none (hero: no reveal) | — (over B1) |
| 3 | Small spaced sub-label under line 1 | "Ballet school for children and adults · Victoria" | under line 1, x 8% | none | — |
| 4 | Faint geometric line pattern in the hero corners | Harlequin diamond lattice, white 35%, 120 px cells, fading out toward the centre (radial mask) | top-left and top-right corners, ~420 × 420 px each | static | — (CSS/SVG) |
| 5 | Mirror doubling the pose inside the photo | Mirror wall behind the barre reflecting teacher and student | inside the arch, left half of the photo | moves with B1 | B1 (prompt must include the mirror reflection) |
| 6 | Floating header: centred logo, dark pill CTA with icon, double-hairline menu | Split nav: 3 links left, wordmark centre, 2 links + "Book a trial" pill `#5C4A55` + double hairline toggle right | header overlay, height 100 px, transparent on `#EDE6E0` | none | — |

Image B1 is listed in §9. Item 5 is a hard prompt requirement for B1; regenerate B1 if the mirror is missing.

---

## 3. Colour

Reference relationships kept exactly; **one hue change**: the reference's sage greens are moved to the row's mauve (grape mouse). Reason: the row palette is binding for catalogue variety, and the last two shipped themes before Kama already used grey-green mains (Susugi `#4A5C5E`, Azuke `#5E6E68`); a third sage-green theme would read as a repeat. Lightness and saturation are taken from the reference values (computed HSL, hue rotated to 323°), so the contrast and calm are the same. Neutrals are the reference's values unchanged.

| Role | Reference (token a) | Suzu | Change | Use | Share of a page |
|---|---|---|---|---|---|
| Hero tint | `#EDE6E0` | `#EDE6E0` | exact | hero ground, inner page heads | first screen ~62% |
| Base | `#F8F7F5` | `#F8F7F5` | exact | page ground | ~55% of a page |
| Soft band | `#F0EFEB` | `#F0EFEB` | exact | strip ground, close block, footer | ~8% |
| White | `#FFFFFF` | `#FFFFFF` | exact | right half of T2, timetable ground | ~6% |
| Panel | `#BBC6B9` (L 75%, S 10%) | `#C6B9C1` (L 75%, S 10%) | hue → mauve | T2 left half, card hover ground | 50% of a T2 section; 0% first screen |
| Primary (button) | `#5A695F` (L 38%) | `#5C4A55` (L 33%, row hex; −5% L) | hue → mauve | pill CTA fill, active nav underline, focus ring | ~3% |
| Text (headings & body) | `#465B4E` (L 32%) | `#5B4652` | hue → mauve | section titles, body text, outline pill border | ~4% |
| Deep text | `#303930` / `#212821` | `#393035` / `#282125` | hue → mauve | hero H1 / CJK H2 | <3% |
| Hairline | `#BBC6B9`-ish 1 px | `#C6B9C1` 1 px | follows panel | column dividers, list rules | — |
| Lattice | white 35% | `rgba(255,255,255,.35)` | exact | hero corners, T2 panel | — |
| Accent | none | none | exact | — | 0 |

- Contrast: `#5B4652` on `#F8F7F5` ≈ 8.6:1, on `#C6B9C1` ≈ 4.6:1 (body text on the panel at 1rem is fine); white on `#5C4A55` ≈ 8.9:1.
- **First-screen saturated share: gate ≤ 15%, target ≤ 3%** (reference 0.4%; plan cap 30% → common rule 15% is the tighter one). The only colour on the first screen is the photo; B1 must be high-key with neutral clothing (plants are the only green).
- No beige-led page: `#F8F7F5` (near-white) is the ground; the warmer `#EDE6E0` only appears in hero / page heads.

## 4. Type (font_direction **sans**)

| Use | Latin font | CJK fallback (zh-TW / ja) | Size | Weight | Line-height | Letter-spacing | Source token |
|---|---|---|---|---|---|---|---|
| Hero H1 | Outfit | Noto Sans TC / Noto Sans JP | `clamp(2.75rem, 8.4vw, 7.5rem)` (preset `huge` 7.5rem = theme max) | 200 | 1.0 | 0.02em, uppercase | b: 129.9px / 300 / lh 1.0 |
| Section H2 (T2 title, block titles) | Outfit | same | `clamp(2.6rem, 6vw, 5.625rem)` (preset `xx-large`) | 200 | 1.0 | 0.01em, uppercase | b: 90px / lh 90–108 |
| Band word (T3) | Outfit | same | `clamp(4.25rem, 13vw, 11.5rem)` (custom, not a preset) | 200 | 0.8 | 0 | b: oversized caps |
| Statement lines | Outfit | same | 1.625rem | 300 | 2.2 | 0.06em, 1 px underline | b: JP lead 26px/57px/300 ls 1.6px |
| H3 / names | Source Sans 3 | same | 1.25rem | 400 | 1.6 | 0.02em | b: names 20px ls .48 |
| Body | Source Sans 3 | same | 1rem | 300 (400 for small text) | 1.6 (CJK 1.85) | 0.02em | b: 16/25.6 |
| Label / nav | Source Sans 3 | same | 0.875rem | 400 | 1.4 | 0.04em, uppercase (Latin only) | b: nav 14px |
| Time numbers (strip, timetable) | Outfit | — | 3.5rem (preset `x-large`) | 200 | 1.0 | 0 | ours |

Presets in theme.json: small 0.875rem, base 1rem, medium 1.25rem, large 1.625rem, x-large 3.5rem, xx-large 5.625rem, huge 7.5rem (max ≥ 4.25rem ✓).

Stacks (theme.json `fontFamilies`, all faces via `fontFace`, so editor iframe and front end load the same files):
- `heading`: `"Outfit", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`
- `body`: `"Source Sans 3", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`
- `:lang(ja)` puts `"Noto Sans JP"` before `"Noto Sans TC"` for both stacks; since style.css then has `:lang(` rules, copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it in functions.php.
- Files (woff2 in `assets/fonts/`): Outfit variable 200–400; Source Sans 3 300/400/600; Noto Sans TC 300/400 and Noto Sans JP 300/400 **subset** to the characters used in the zh-TW / ja content (the subset script is known broken: use the Hokuto / Hada workaround). No serif / Mincho anywhere.
- CJK: no uppercase / letter-spacing tricks; headings at ~0.75× the Latin size (hero zh/ja `clamp(2.2rem, 6vw, 5.25rem)`, two lines, e.g. "Stand tall, / start at the barre."), body line-height 1.85. fr/de: `hyphens: auto` on body and H2; check that the hero line 2 still fits (reduce to 6.75rem for de if "AN DER STANGE." overflows).

## 5. Home page

### Header (row nav = split; reference header)
Height 100 px, `position: absolute` over the hero (not sticky; no scroll listener). Left: Classes · Timetable · Teachers (0.875rem caps, ls 0.04em, `#5B4652`). Centre: wordmark "SUZU BALLET" Outfit 300 1.375rem ls 0.32em with a tiny 1 px arch outline (14 × 16 px) above the "Z" — our own mark. Right: About · Contact, then pill "Book a trial" (162 × 43, radius 30 px, `#5C4A55`, white 0.875rem, with a 14 px line calendar glyph right), then the double-hairline toggle (two 1 px lines 56 px and 40 px wide, 8 px apart, right-aligned; reference 80×2 offset). Under 960 px: wordmark left, pill hidden (moved into the overlay menu), toggle right. One menu only.

### First screen (1440×900)
Ground `#EDE6E0`, lattice in the two top corners, header, H1 two lines crossing the arch, sub-label, arch B1 (x 36–95%, top 205 px) running off the bottom, dome edge hidden behind the arch's lower part. Nothing else: no table, form, search box, buttons other than the header pill, no centred giant word. Saturated share ≤ 3%.

Mobile 390×844: header 64 px; H1 `2.75rem` two lines **stacked above** the arch, left-aligned at 24 px, no indent, no overlap with the photo (overlap starts at ≥ 960 px); sub-label under it; arch `calc(100% − 48px)` wide, ratio 1 : 1.15, top-round semicircle, bleeding off the bottom. No vertical text, no absolutely positioned labels, lattice only top-right at 50% size.

### Block order
| # | Pattern | Purpose | Layout and photos | Copy |
|---|---|---|---|---|
| 1 | `front-hero` | key visual | **T1** as above, B1 in the arch | 18 words |
| 2 | `front-day-strip` | "A Wednesday at Suzu" (row first_screen horizontal-scroll-strip) | `#F0EFEB` band, label + small H2 "A WEDNESDAY AT SUZU" (x-large), then a horizontally scrolling row of 6 time cards (scroll-snap x, `overflow-x: auto` on the row only, thin scrollbar, right-edge fade 80 px, "Scroll →" hint 0.875rem). Card 260 px wide (mobile 220), 1 px left hairline `#C6B9C1`, padding 0 28 px: time Outfit 200 3.5rem ("07:00"), class name 1.25rem, line "Adults · intermediate · live piano" 0.875rem, teacher + pianist names. Text only (no photos). 6 cards = the Wednesday rows of §8. Cards have **no** sp-reveal (row container may). | 6 × 14 words |
| 3 | `front-intro` | the school in one breath | reference about block: 2 columns, left 2 underlined statement lines "Every class begins at the barre. / Every dancer leaves a little taller." (Outfit 300 1.625rem lh 2.2, 1 px underline offset 0.5em); right 2 paragraphs + outline pill "OUR STUDIO →" (radius 50 px, 1 px `#5B4652`, 185 × 44). Padding 120 / 110. | 95 words (narrative 1) |
| 4 | `front-reasons` | three reasons | container 1290, 3 columns of 430 px, 1 px vertical hairlines between, each: 65 px line icon (stroke 1 px `#5B4652`, our SVGs: a barre with two brackets / three piano keys with a quaver / two overlapping circles = children + adults), title 1.125rem centred, paragraph 0.9375rem left-aligned. Titles: "Live piano, every adult class" · "Small classes: 12 children, 16 adults" · "One studio, ages 4 to 70+". Padding 70 / 110. `sp-stagger` + `sp-reveal--up`. | 3 × 45 words (narrative 2) |
| 5 | `front-classes` | classes & fees entry | **T2**: panel `#C6B9C1` + lattice left, "CLASSES / & FEES", 55-word paragraph naming Pre-ballet / Children / Juniors / Adults and "trial class $15", outline pill → Classes; right white half with B6 388 × 503 inset (`sp-reveal--mask`). | 70 words |
| 6 | `front-day` | the day hour by hour (row archetype sticky-media + page_structure day-schedule, row signature) | `#F8F7F5`; H2 "THE DAY, / HOUR BY HOUR" left. Then 3 rows (Morning · Afternoon · Evening), grid 12 columns, gap 64 px: photo cols 1–5, 4:5, radius 0, `position: sticky; top: 120px` inside its own row (so the photo changes as you pass from morning to evening, pure CSS, parent `overflow: clip` not hidden); text cols 7–12: label "MORNING · 07:00–11:15", H3, a narrative paragraph, then a ruled list (1 px `#C6B9C1` rules) of that period's Wednesday classes: time — class — teacher — pianist. Morning text says how the 75-min class is divided (barre 40 min: pliés, tendus, ronds de jambe, fondus, frappés, adage, grands battements; centre 25 min; allegro; révérence 5 min) and what Hélène plays (a slow 3/4 for pliés, a crisp 2/4 for tendus, a mazurka for ronds de jambe, a broad waltz for grands battements). Afternoon: pre-ballet and Juniors. Evening: Adult Improvers, then who stays for the 20:30 Repertory rehearsal. Photos: Morning **B7**, Afternoon **B8**, Evening **B9**. Text column `sp-reveal--up`. | ~200 words (narrative 3) |
| 7 | `front-band` | mood + parallax | **T3**: full-bleed B11, `sp-parallax --sp-par 10%`, "EVERY DAY" on the bottom edge | 10 words |
| 8 | `front-stories` | three stories | `#F8F7F5`; H2 "STORIES FROM / THE STUDIO" where the Pikkas idea appears once: a 96 × 64 px inline photo chip (radius 32 px, crop of B10) sits between "STORIES" and "FROM" at cap height. Then 3 horizontal rows (not cards), each: round 150 px thumbnail (`sp-reveal--mask`) left, title 1.25rem + 2-line excerpt middle, "Read →" right, 1 px rules above/below. Thumbnails **B12, B13, B14**; the heading chip is a crop of **B10** (not B13), so the page has no repeat. | 3 × 30 words |
| 9 | `front-trial` | book a trial / visit | `#F0EFEB`; left 6/12: H2 "BOOK A / TRIAL CLASS", "Any class, any level, $15, with live piano." then an ordered list of 4 lines with hairlines (1 Book online or call · 2 Arrive 15 minutes early, we lend a barre spot and show the changing room · 3 Take the class · 4 Talk with the teacher about the right class and term), dark pill "Book a trial" + outline pill "Timetable"; under it address + hours lines. Right 5/12: B15 at 3:4, **arch-topped** (`border-radius: 1000px 1000px 0 0`, the motif returns), 420 × 560. | 80 words |
| — | footer | | `#F0EFEB`, 1 px top rule; wordmark centred; 3 columns: address & phone · hours · links (Classes, Timetable, Fees & Terms, Teachers, Trial, About, Showcase, Journal, Contact); bottom line © Suzu Ballet. | |

Home photo positions: B1, B6, B7, B8, B9, B11, B10 (chip), B12, B13, B14, B15 = **11** (≥ 8), no repeats. English home ≥ 250 words with narratives in #3, #4, #6 (≥ 3 paragraphs); CJK home ≥ 500 characters.

### Comparison with the four most recent themes
| # | Susugi Wash | Azuke Finance | Kama Cookware | Mame Coffee | **Suzu Ballet** |
|---|---|---|---|---|---|
| 1 | 50/50 hero | bowed-mosaic hero | diagonal-staircase hero | window-on-backdrop hero | **arch window + thin caps across it** |
| 2 | reason | ALEX overlay gap | question statement | parallax statement | **horizontal day strip (time cards)** |
| 3 | CTA | chapters | sticky 50% hob guide | rule-column lots | **underlined statement + paragraph** |
| 4 | parallax pass | fees table | masonry products | wide photo + ruled column | **three hairline columns with line icons** |
| 5 | rush rows | stories | dark service band | people w/ rotated label | **50/50 mauve panel + inset portrait** |
| 6 | bottom-bleed photo row | FAQ | price table | bar price rows | **sticky photo day schedule (3 periods)** |
| 7 | machine band | dark apply band | parallax band | stories | **greige band, word on bottom edge** |
| 8 | fitting | — | people rows | visit | **stories as round-thumb rows** |
| 9 | — | — | — | — | **trial close with arch photo** |
Why not alike: no 50/50 hero (Susugi), no mosaic/staircase/window-frame hero, no rotated labels or rule columns (Mame), no price table or FAQ on home (Azuke, Kama), no dark bands (all our bands are light). Kama also has a sticky section, but Kama's is one 50% sticky hob guide; ours is three time-of-day rows each with its own sticky 4:5 photo next to a ruled timetable list. The arch, the harlequin lattice and the bottom-edge word are new in the catalogue.

---

## 6. Inner pages (9 + utility)

Every page = T1 small-arch head → body → (T2 / T3 as in §1 table) → short close line "Try a class for $15 →" (outline pill → Trial). No sidebar. Page heads: label (English word, all languages) + 2-line caps title.

1. **Classes** (`page-classes`): head "CLASSES / FOR EVERY AGE" (B6). Four sections in a 7/12 text column with a 4/12 photo column: Pre-ballet 4–6 and Children 7–10 (text only, on a narrow `#C6B9C1` lattice strip), Juniors 11–15 (T2 split with B10 "CHILDREN / & JUNIORS"), Adults (Beginners, Improvers, Open class; photo B2). Each: ages, length, classes per week, max class size, what to wear, live piano yes/no, term fee (from §8). T3 band B11 "PRACTICE".
2. **Timetable** (`page-timetable`): head "THE WEEK / AT SUZU" (B7). The weekly timetable per day (Mon–Sat) as **six day blocks** (day name Outfit 200 3.5rem, then ruled rows time — class — room — teacher — pianist), not a dashboard. Desktop: day blocks in 2 columns; mobile 1 column, rows stacked (time on its own line). Holiday note: closed on statutory holidays; three 12-week terms. T3 band B14 "TIMING".
3. **Fees & Terms** (`page-fees`): head "FEES / & TERMS" (B13). The **price table** (7 rows, §8): ≥ 782 px full content width (1290 max), 3 columns (item · what's included · price), price column `white-space: nowrap; text-align: right; width: 1%`, never cut; < 782 px each row stacks (item, description, price on its own line, right-aligned). Then term dates, sibling note (10% off the second child's term — fixed), refunds (pro-rata within the first 2 weeks), what's included. T2 split B2 "WHAT'S / INCLUDED". No sp-reveal on the table.
4. **Teachers & Pianists** (`page-teachers`): head "TEACHERS / & PIANISTS" (B4). Mira as a text feature row with a pull quote (her photo B4 is the page head); T2 split with B3 for "PIANISTS" (Hélène and Daniel, what they play and why live music); then the other five people as ruled rows: name 1.25rem, role, classes taught, one 30-word bio. No 4-person grid, no portraits grid.
5. **Trial Class** (`page-trial`): head "YOUR FIRST / CLASS" (B1). The 4-line process (same as home) as numbered paragraphs (not a step grid); what to wear (children: leotard/T-shirt and leggings, ballet shoes or socks; adults: anything you can move in); arrive 15 min early; T2 split B15; short FAQ (5 questions, plain accordion `details`); contact line for booking (phone + email; no form required).
6. **About the Studio** (`page-about`): head "ABOUT / THE STUDIO" (B5). Narrative: founded 2012 by Mira after 14 years dancing with touring companies (unnamed, no claims); the two rooms; why live piano; children and adults in the same building. T2 split B12 "SINCE / 2012". Three hairline columns with icons (same as home #4, different text: floor, piano, light). T3 band B16 "STUDIO".
7. **Showcase & Rehearsal** (`page-showcase`): head "ON STAGE / IN JUNE" (B16). The June Showcase (second Saturday of June, in the school's hall-hire at a community theatre — unnamed), who dances (every class that wishes, Repertory group), rehearsal schedule (Repertory Wed & Fri 20:30–21:30 from the Spring term), costumes lent by the school. T3 band B9 "ON STAGE".
8. **Journal** (`home.html`, `archive.html`, `single.html`): head "JOURNAL / FROM THE STUDIO" (B8). Index = round-thumb rows like home #8 (3 stories + 3 short notices: term dates, summer intensive, studio closed for floor oiling). Single: small arch featured image right, text column 680 px.
9. **Contact & Visit** (`page-contact`): head "CONTACT / & VISIT" (B15). Address, phone, email, hours, transit note (5 min walk from the Douglas St bus stops — generic), "Trial bookings: Lena Hofmann". T3 band B5 "VISIT". No form required.
10. **404 / search**: T1 head with the small arch on `#EDE6E0` (no photo, arch filled with `#C6B9C1` + lattice) + pill home.

---

## 7. Responsive (hard requirements)
- 390 px first screen: no vertical text, no absolutely positioned labels or captions over text; H1 above the arch, nothing overlapping. Header pill hidden under 960 px.
- No horizontal page overflow at 390 / 800 / 1280 / 1440 (`html, body { overflow-x: clip }`); the day strip scrolls inside its own row only.
- Price table (Fees, and any table): at ≥ 782 px full content width, price column `white-space: nowrap`, right-aligned, never clipped at 800 or 1280; under 782 px every table becomes stacked rows (`display: block` per row, label/value lines). Timetable rows stack the same way.
- T2 under 782 px: panel full width (padding 64 / 24, title 2.6rem), photo below on white at 80% width, centred; lattice stays. T3 under 782 px: height 420 px, word 4.25rem, `--sp-par: 6%`.
- Sticky day schedule under 960 px: photo un-sticky, stacked above its text at 4:5 full width.
- Small arch on inner pages under 782 px: arch 70% wide, right-aligned, under the title (no crossing).

## 8. Fixed numbers (identical on Home, Classes, Timetable, Fees, Trial, Teachers, Contact, footer and all five languages)

**People (7):**
| Name | Role | Teaches / plays |
|---|---|---|
| Mira Ostrowska | founder (2012), artistic director | Morning Open Class (Mon–Fri 07:00), Saturday Adult Open |
| Tomás Ferreira | teacher | Juniors, Repertory rehearsal |
| Aiko Brandt | teacher | Pre-ballet, Children |
| Priya Raman | teacher | Adult Beginners, Adult Improvers |
| Hélène Marchetti | pianist | morning and Saturday classes |
| Daniel Mensah | pianist | evening classes and Repertory rehearsal |
| Lena Hofmann | studio manager | trial bookings, enrolment, front desk |

**Weekly timetable:**
| Day | Time | Class | Room | Teacher / pianist |
|---|---|---|---|---|
| Mon–Fri | 07:00–08:15 | Morning Open Class (adults, intermediate+) | Window | Mira / Hélène |
| Mon, Wed, Fri | 10:00–11:15 | Adult Beginners (daytime) | Window | Priya / Hélène |
| Mon, Wed | 15:45–16:30 | Pre-ballet (4–6) | Garden | Aiko |
| Tue, Thu | 16:30–17:30 | Children (7–10) | Garden | Aiko |
| Mon, Wed, Fri | 17:30–19:00 | Juniors (11–15) | Window | Tomás / Daniel |
| Mon, Wed | 19:15–20:30 | Adult Improvers | Window | Priya / Daniel |
| Tue, Thu | 19:15–20:30 | Adult Beginners (evening) | Window | Priya / Daniel |
| Wed, Fri | 20:30–21:30 | Repertory rehearsal (by invitation, Spring term) | Garden | Tomás / Daniel |
| Sat | 09:00–09:45 | Pre-ballet (4–6) | Garden | Aiko |
| Sat | 10:00–11:00 | Children (7–10) | Garden | Aiko |
| Sat | 11:15–12:45 | Saturday Adult Open (all levels) | Window | Mira / Hélène |
Home strip (Wednesday): 07:00 Morning Open · 10:00 Adult Beginners · 15:45 Pre-ballet · 17:30 Juniors · 19:15 Adult Improvers · 20:30 Repertory rehearsal.

**Fees (7, CAD):**
| Item | Includes | Price |
|---|---|---|
| Trial class | any one class, once per person | $15 |
| Pre-ballet term | ages 4–6, 1 class a week, 12 weeks | $180 |
| Children term | ages 7–10, 2 classes a week, 12 weeks | $300 |
| Juniors term | ages 11–15, 3 classes a week, 12 weeks | $480 |
| Adult drop-in | any one adult class | $24 |
| Adult 10-class card | any adult classes, valid 4 months | $200 |
| Adult unlimited month | all adult classes for 30 days | $165 |
Second child in the same family: 10% off their term fee. No registration fee. Uniform not required.

**Other fixed facts:** class size max **12** children / **16** adults; three **12-week** terms starting the first week of **September, January, April**; Showcase **second Saturday of June**; hours: front desk **Mon–Fri 06:45–21:45, Sat 08:30–13:00, Sun closed**; phone **+1 250 555 0142**; email **hello@suzuballet.example**; trial flow = the 4 lines in §5 #9.

**Stories (3, Journal posts 1–3):** (1) "Back at the barre at 41": Nora Whitfield returns to Adult Improvers after twenty years away (B12). (2) "Six months to the first pointe shoes": a Junior's readiness check with Tomás — strength, not age, decides (B13). (3) "What the pianist plays for pliés": Hélène's notebook of tempos (B14). Plus 3 notices (posts 4–6, no photo needed; use B5, B7, B16 as featured images on the Journal pages only). No guaranteed outcomes, no exam pass rates, no awards, no real companies or people.

---

## 9. Photos (16, IMAGERY: photo — generated, one at a time, read each)

Imagery: **photo** (reference is soft daylight documentary photography). STYLE (exact string on every prompt):
`photorealistic documentary photograph, soft morning daylight through tall arched windows, high-key warm white, pale maple sprung floor, white walls, wall mirror and wooden barre, one or two green potted plants, dancers in plain black, white, soft grey and pale mauve practice clothes, diverse children and adults of mixed ages, calm candid moment, natural skin tones, gently desaturated greige grade, 50mm lens, no text, no logos, no brand marks, no lettering, no posters, no Japanese elements`

Each ≤ 300 KB, ≤ 2000 px, webp, 0 cutouts, readme line per image. Check hands, feet, arm anatomy, no extra limbs, no text on sheet music (notation blurred / illegible), mirror reflection plausible.

| ID | Subject / composition | Ratio | Used on (once per page) |
|---|---|---|---|
| **B1** ★ | teacher (woman, 40s) at the barre gently lifting a girl's (≈11) arm into second position, other hand on her shoulder blade; **wall mirror behind reflecting both**; tall arched windows right, white light, a plant by the window; subjects centred-left, headroom above for the arch top | 4:5 (crop to arch 1:1.1) | **Home hero**; Trial head |
| B2 | adult beginners (ages 25–60, mixed) in centre work, tendu devant, seen from the side | 3:2 | Classes (Adults); Fees T2 |
| B3 | pianist (woman, 50s) at an upright piano in the studio corner, dancers soft-focus at the barre behind | 3:4 | Teachers T2 |
| B4 | portrait of the founder (woman, 40s) standing by an arched window, black wrap cardigan, arms relaxed | 3:4 | Teachers head |
| B5 | empty Window Studio in early light, three tall arched windows, barres, piano, plant | 16:9 | About head; Contact T3; Journal notice |
| **B6** ★ | adult woman (40s) in tendu à la seconde at the barre, portrait framing, mirror soft behind | 3:4 | **Home T2**; Classes head |
| **B7** ★ | morning class: row of adults in plié at the barre, pianist visible at the back | 4:5 | **Home day: Morning**; Timetable head; Journal notice |
| **B8** ★ | pre-ballet children (4–6) skipping in a circle with their teacher, bright floor | 4:5 | **Home day: Afternoon**; Journal head |
| **B9** ★ | evening rehearsal: teens and adults marking a sequence, teacher counting with a raised hand, last daylight plus soft warm lamps (still high-key) | 4:5 | **Home day: Evening**; Showcase T3 |
| **B10** ★ | juniors (11–14) at the barre in relevé on demi-pointe, from behind at three-quarter | 3:2 | **Home stories chip (crop)**; Classes T2 |
| **B11** ★ | close-up: a dancer's arm and hand in port de bras against a pale wall, very soft, greige | 16:9 | **Home T3 band (parallax)**; Classes T3 |
| **B12** ★ | adult woman (≈41) sitting on a bench tying soft ballet flats, studio behind | 1:1 | **Home story 1**; About T2; Journal post 1 |
| **B13** ★ | close-up of hands tying pointe-shoe ribbons at the ankle | 1:1 | **Home story 2**; Fees head; Journal post 2 |
| **B14** ★ | pianist's hands on the keys, a pencil and an open notebook (illegible) on the piano | 1:1 | **Home story 3**; Timetable T3; Journal post 3 |
| **B15** ★ | studio entrance: a bench with dance bags and ballet shoes under an arched window | 3:4 | **Home trial (arch)**; Trial T2; Contact head |
| B16 | daylight hall, a small group of dancers in révérence on a low stage, blurred chairs foreground | 16:9 | Showcase head; About T3; Journal notice |
★ = used on the home page (11 positions with B10 as chip).

Per-page check: Home B1 B6 B7 B8 B9 B10 B11 B12 B13 B14 B15 · Classes B6 B10 B2 B11 · Timetable B7 B14 · Fees B13 B2 · Teachers B4 B3 · Trial B1 B15 · About B5 B12 B16 · Showcase B16 B9 · Journal B8 + posts B12 B13 B14 B5 B7 B16 · Contact B15 B5. No page repeats an image.

---

## 10. Scroll effects (sp-scroll; ≤ 3 kinds; hero no reveal)
Global: `--sp-dur: 1s`, easing `cubic-bezier(0.165, 0.84, 0.44, 1)` (token g, easeOutQuart), `--sp-dist: 24px` (token 20–72 px, capped by pipeline at 30 px; use 30 px on the T2 panel text and day-schedule text blocks).

| Effect (sp class) | Applied to | Source (site, trigger, time, easing) |
|---|---|---|
| `sp-reveal sp-reveal--up` (+ `sp-stagger` on #4) | #3 intro columns, #4 three columns (stagger 0.12 s), #5 panel text, #6 text columns, #8 heading, #9 left column; inner pages: section headings and text blocks | anjalirokko: IntersectionObserver `[data-scroll-trigger]`, rootMargin 0 0 −20% 0, opacity + translateY 20–72 px, 1 s cubic-bezier(.165,.84,.44,1) |
| `sp-parallax` | **#1 hero arch** (`--sp-par: 8%`, mobile 5%) and **#7 T3 band** (`--sp-par: 10%`, mobile 6%); inner T3 bands 8% | anjalirokko: GSAP ScrollTrigger scrub, ease none — arch photo and tinted band move slower than text |
| `sp-reveal sp-reveal--mask` | #5 B6 portrait, #8 round thumbnails (on the figure wrapper, not the img; no clip-path on the observed element), Journal index thumbs | anjalirokko: `data-scroll-trigger="mask"` on round thumbs, ~1 s, same quart ease |
Not used: Lenis smooth scroll, headline load reveal (hero rule), any scroll listener. No reveal on: hero, day-strip cards (row container may get `--up`), price table, timetable rows, footer, forms.

### Parallax (required)
1. **Hero arch** (`front-hero`): wrapper `.suzu-arch.sp-parallax` (the element with the arch radius and `overflow: clip`), moving layer = its direct `img` (B1). Foreground H1 and sub-label are siblings outside the wrapper (never inside the moving layer). `--sp-par: 8%` desktop, 5% mobile (still moves on mobile). Reference: Anjali's arch photo scrubs slower than the headline.
2. **Greige band** (`front-band`): full-bleed Group `.sp-parallax` with B11 as `figure > img` (or Cover background), the word "EVERY DAY" and its caption in a separate foreground layer. `--sp-par: 10%` desktop, 6% mobile.
`check-parallax.mjs` must report ≥ 6 px layer shift on desktop and mobile, 0 under reduced motion; ≥ 3 reveals hidden before entry and visible after.

---

## 11. Similarity target (≈ 80% to anjalirokko.jp)
| Dimension | Reference value (token) | Suzu value |
|---|---|---|
| Ground colours | `#EDE6E0` hero, `#F8F7F5` page, `#F0EFEB` band (a) | identical |
| Panel / primary / text | `#BBC6B9` / `#5A695F` / `#465B4E` / `#303930` (a) | `#C6B9C1` / `#5C4A55` / `#5B4652` / `#393035` (same L & S, hue → row mauve; reason §3) |
| First-screen saturated share | 0.4% (a) | ≤ 3% (gate 15%) |
| Hero headline | 129.9 px, weight 300, lh 1.0, caps, thin display (b) | 120 px (7.5rem), Outfit 200, lh 1.0, caps (sans per row) |
| Section H2 | 90 px, lh 1.0–1.2 (b) | 5.625rem (90 px), lh 1.0 |
| Body | 16 / 25.6 px, 300–400 (b) | 1rem / 1.6, Source Sans 3 300 |
| Statement lines | 26 px, lh 2.2, 1 px underline (b) | 1.625rem, lh 2.2, 1 px underline |
| Hero arch | 851 px = 59% wide, top 205 px, 1 : 1.1, bleeds off fold, semicircle top (d)(e) | 59% wide, top 205 px, 1 : 1.1, bleeds 235 px, semicircle top; x shifted to 36% (row: photo right) |
| Headline × arch | line 1 over left shoulder, line 2 inside → past right shoulder (e) | same |
| Split section | 835 px, 50/50, panel + pattern, photo 388 × 503 inset 166 px, radius 0 (c)(e) | identical numbers |
| Three columns | 430 px each, 1 px vertical hairlines, 65 px line icons (c)(f) | identical |
| Tinted band | ~1440 × 690, greige, huge caps at bottom edge, scrub parallax (e)(g) | 100% × clamp(420, 48vw, 690), greige, 11.5rem word on edge, `--sp-par 10%` |
| Thumbnails | round 150 px, mask reveal (e)(g) | round 150 px, `sp-reveal--mask` |
| Radius | pill 30 px CTA, 50 px outline pill, photos 0, arch top only (d) | identical |
| Pattern | asanoha lines ~120 px, white 35% (f) | harlequin lattice 120 px, white 35% (own motif) |
| Header | 100 px overlay, centred logo, dark pill 162 × 43, double hairline menu (c)(f) | identical sizes; split links added (row nav) |
| Spacing | about 120 top; info 70/110; instructor 160/130; container 1290; gutters 70 (c) | intro 120/110; reasons 70/110; day 160/130; container 1290; gutters 64–70 |
| Motion | fade-up 20–72 px, 1 s, cubic-bezier(.165,.84,.44,1), rootMargin −20% (g) | `--up` 24–30 px, 1 s, same curve (sp-scroll IO) |
| Imagery | high-key daylight documentary, mirror, plants, neutral clothing (e) | same, in a ballet studio |

## 12. Home acceptance checklist (stage-1 review checks against this)
1. First screen at 1440: `#EDE6E0` ground, semicircle-top arch ≈ 59% wide at x 36–95%, top ≈ 205 px, bleeding off the bottom, B1 shows teacher correcting a student's arm with the mirror reflection; H1 thin caps two lines both crossing the arch edge; sub-label; lattice in top corners; split header with mauve pill and double hairline. Saturated share ≤ 15% (target ≤ 3%).
2. 390 px: H1 stacked above the arch, no overlap, no vertical/absolute labels; no horizontal overflow.
3. Day strip directly after the hero: 6 Wednesday time cards, scrolls horizontally inside its row only, times match §8.
4. T2 at #5: exact half-width mauve panel with visible lattice, 90 px caps title, inset 3:4 B6 radius 0 on white.
5. #6 sticky day schedule: three rows, each 4:5 photo sticks while its text scrolls; morning text explains barre/centre split and the pianist's music; evening names the 20:30 rehearsal.
6. T3 band at #7: full-bleed greige B11, "EVERY DAY" ≥ 9rem touching the bottom edge, parallax moves.
7. Three hairline columns with our line icons; stories as round-thumb rows with one inline photo chip in the heading; trial close with arch-topped B15.
8. Colours as §3 only; no green UI; no dark bands; fonts Outfit + Source Sans 3 (CJK Noto Sans TC/JP) loaded via theme.json fontFace, same in editor; max preset 7.5rem.
9. Block order exactly §5; no people grid, no step grid, no vertical timeline, no table on home, no sidebar, no cutouts.
10. ≥ 8 photo positions (11 planned), no repeats, all match STYLE; fixed numbers identical to §8; English home ≥ 250 words with ≥ 3 narrative paragraphs.
11. Motion: hero has no sp-reveal; `check-parallax.mjs` passes (hero arch + band ≥ 6 px; reduced motion 0); `auto-gates.mjs … en … 1 1` passes.
