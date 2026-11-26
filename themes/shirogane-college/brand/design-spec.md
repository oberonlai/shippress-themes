# Design spec: Shirogane College (shirogane-college)

Plan row b41-2 · type **business** (category education-classes) · archetype sticky-media · page_structure day-schedule · nav split · font_direction **sans** · IMAGERY **photo** (documentary).
Main reference: **Azabu University**, https://www.azabu-u.ac.jp/ (university with a veterinary school; hands-on animal care, clear audience paths). Secondary: **Yamazaki Gakuen**, https://www.yamazaki.ac.jp/ (animal-nursing school group; solid panel beside a photo, entry strip).
Token source: `brand/reference-tokens.md`, cited below as `tok(a)` … `tok(g)`. Screens: `brand/ref/azabu-first.png`, `azabu-900.png`, `azabu-1800.png`, `azabu-2300.png`, `azabu-2700.png`, `scroll-azabu-hero-before.png`, `scroll-azabu-hero-after.png`, `yamazaki-first.png`, `yamazaki-900.png`, `yamazaki-1800.png`.
Photos, copy, logo and marks are all our own. We take the references' structure, motion ideas, colour relationships and measurements. We never take their pictures, words or logos.

Class prefix for theme CSS: `sg-`. Effects use only the sp-scroll classes, copied unchanged from `pipeline/assets/sp-scroll/`.

---

## 1. Signature techniques (all three appear on the home page at full strength)

### T1. Zig-zag honeycomb of six solid course hexagons over a pale band, with photos peeking at both band edges (Azabu course tiles; `ref/azabu-1800.png`, `ref/azabu-2300.png`, `tok(e)(f)`)
- **What Azabu does.** It shows six flat-colour **flat-top hexagons** (points left and right) in two zig-zag rows on a full-width pale lilac low-poly band (378 px high):
  - Tiles are about 260 × 232, at a horizontal step of 200 px, so neighbours interlock. Row 2 sits 150 px lower than row 1, and tiles alternate top / bottom.
  - Each tile holds a large white title plus a 10 px tracked caps English line.
  - Photographs (a horse's head at the left, fruit at the right) sit **behind** the tiles and bleed off both edges of the band.
  - Hover: the tile drops 15 px and fades to .8 over .4 s ease.
- **Ours, home §5 "Six parts of the diploma".** The band is full-bleed (alignfull) on pale sage **#EDF0E6**, 460 px high, with a low-poly triangulation drawn as an inline SVG.
  - **Triangulation:** about 40 triangles, filled in #EDF0E6 / #E4E9DB / #F3F5EE, strokes none. It is an `aria-hidden` background layer.
  - **Edge photos:** img-06 (calm grey-white dog, head and shoulders) is anchored to the **left edge**, 520 px wide, cropped by the viewport. img-07 (bandage rolls, stethoscope and a fob watch on a pale cloth) is anchored to the **right edge**, 460 px wide. Both sit **behind** the tiles (z-index 0), are full band height, and use `object-fit: cover`.
  - **Tiles:** six hexagons, **268 × 232** (regular flat-top ratio 1.155), **horizontal step 200 px**, alternating rows with **row 2 offset 150 px down**. Tiles 1, 3, 5 are in the top row and 2, 4, 6 in the bottom row. The total footprint is 5 × 200 + 268 = **1268 px**, centred, from y 40 to y 422 of the band.
  - **Tile markup:** `a.sg-hex` (no clip-path, carries `sp-reveal`) > `span.sg-hex__shape` (carries `clip-path: polygon(25% 0, 75% 0, 100% 50%, 75% 100%, 25% 100%, 0 50%)` and the fill) > title + caps line.
  - **Tile text:** title Manrope 700 1.5rem / 1.25 white, centred. Caps line 0.6875rem / 700 / .14em uppercase, white at 85 %, 16 px below the title.
  - **Hover / focus-visible:** `transform: translateY(15px); opacity: .8; transition: transform .4s ease, opacity .4s ease; transition-delay: 0s` (Azabu margin-top 15 px, .4 s, `tok(f)`). Focus-visible also gets a 2 px white outline inset 6 px on the shape.
  - **Fills** (Azabu's six-colour set re-toned to our muted family, darkened so white text is ≥ 4.5 : 1):

  | # | Tile title | Caps line | Fill | Link |
  |---|---|---|---|---|
  | 1 | Foundations | ANIMAL CARE & HANDLING | #5C6B48 pine | `/course/#foundations` |
  | 2 | Ward nursing | INPATIENT CARE | #7B5A44 bark | `/course/#ward` |
  | 3 | Theatre assist | ANAESTHESIA & SURGERY | #8E6E2A ochre | `/course/#theatre` |
  | 4 | Imaging & lab | X-RAY · SAMPLES | #A5586B clay rose | `/course/#imaging` |
  | 5 | Pharmacy | DISPENSING & DOSES | #3F7C85 slate teal | `/course/#pharmacy` |
  | 6 | Placement | 40 WEEKS IN CLINICS | #657A3E moss | `/course/#placement` |

- **Must not be diluted.** The tiles must be real hexagons (not rounded cards or circles), must interlock in the zig-zag with the 200 / 150 px offsets, must be solid colour, must keep **six different fills**, and must have the photos peeking out behind them at **both** band edges. Never reduce to a 3 × 2 grid on desktop.

### T2. Audience gateway row: five equal cells, line icon + label, 1 px dotted vertical separators, docked under the header (Azabu target row; `ref/azabu-first.png` y 145–207, `tok(c)`)
- **What Azabu does.** Directly below the global nav it runs a 62 px row of five equal cells ("for applicants", "for students and parents", …). Each cell holds a small solid icon and a label, and the cells are separated by 1 px dotted vertical rules, with a dotted rule also at the far left and right ends. The global nav items use the same dotted separators.
- **Ours, home §0 (in the front-page template, directly under the header; not a second menu).**
  - Group `.sg-audience`, alignfull, white, with a 1 px #DADDD5 bottom border and **56 px** high. It sits on the 1200 px container, which holds **5 equal cells**.
  - Each cell is an `<a>`: a 22 px line icon (inline SVG, 1.5 px stroke, #5C6B48), 10 px gap, then the label in Source Sans 3 0.9375rem / 600, letter-spacing .06em, #232820.
  - Separators: `border-left: 1px dotted #9AA190` on every cell plus `border-right` on the last.
  - Hover / focus: the label gets a 2 px #5C6B48 underline offset 6 px, .2 s.
  - It is markup in a pattern (a `core/group` of `core/paragraph` links, `aria-label="Who the course is for"`), **not** a `core/navigation`, so there is exactly one top menu.

  | Cell | Icon | Links to |
  |---|---|---|
  | Career changers | briefcase → paw | `/admissions/#career-changers` |
  | School leavers | backpack | `/admissions/#school-leavers` |
  | Clinic staff | stethoscope | `/course/#evening` |
  | Parents & supporters | two figures | `/admissions/#supporters` |
  | Partner clinics | building with a cross | `/about/#clinics` |

- **Home §3 expands it.** "Who the course is for" uses the same five cells at full size. Each cell is 1 of 5 columns with dotted vertical separators, holds a 40 px icon, an H3 1.125rem, 2 sentences (≈ 30 w) and a text link with a chevron.
- **Must not be diluted.** There must be exactly five cells, equal widths, **dotted** separators (not solid or pipes), and icons in line style. On desktop the row is docked under the header.

### T3. Thumb-left pickup tiles: 1 px grey frame, 80 px square thumb flush left, two-line title, thin chevron, soft shadow under the tile only (Azabu PICKUP; `ref/azabu-2300.png`, `tok(c)(d)`)
- **What Azabu does.** It shows a 3-column grid of white tiles, 314 × 82, with a gap of 20 × 20. Each tile has a 1 px #E0E0E0 frame and an 80 × 80 thumb flush left (illustration or logo). Next comes a title in 2 lines and a thin chevron at the right. The only shadow is a soft one under the tile (`0 8px 8px -6px rgba(0,0,0,.2)`). The section heading is the Latin word "PICKUP" in brand colour, a small subtitle on the same baseline, and a 1 px black rule under it.
- **Ours, home §10 "Where to next" and the foot of every inner page.**
  - 3 columns × 2 rows on home (6 tiles); 3 tiles on inner pages.
  - Tile: 380 × 82, gap 20 / 20, white, `border: 1px solid #E0E0E0`, `box-shadow: 0 8px 8px -6px rgba(0,0,0,.2)`, r 0.
  - **Thumb:** 80 × 80 flush left, **#EDF0E6 square holding a 36 px pine line icon** (Azabu uses illustrations, not photos, as thumbs, which keeps our photo count honest).
  - Title: Source Sans 3 1rem / 600 / 1.4 #232820, max 2 lines, 16 px from the thumb.
  - Chevron: 8 × 14 px, 1.5 px stroke #5C6B48, 20 px from the right.
  - Hover: border #5C6B48, chevron moves 4 px right, .2 s ease (`transition-delay: 0s`).
  - Home tiles: Fees and instalments · Open day, Sat 16 January · Visit the teaching ward · Meet the tutors · Placements in 22 clinics · Questions from applicants (→ `/admissions/#questions`).
- **Must not be diluted.** The thumb is a square flush with the left frame edge. There are no rounded corners. The shadow sits only under the tile, never all around.

### T4 (supporting, not counted). Solid panel with a pointed edge beside a photo + entry strip beneath (Yamazaki hero; `ref/yamazaki-first.png`)
- **What Yamazaki does.** A flat teal panel holds the copy on the left. Its large convex curved right edge cuts into a photo that fills the right ≈ 58 %. Directly below is a mint strip of three flat coloured entry buttons.
- **Ours.** The hero panel is pine #5C6B48. Its right edge is a **hexagon point**, not a curve, tying it to T1: `clip-path: polygon(0 0, calc(100% - 64px) 0, 100% 50%, calc(100% - 64px) 100%, 0 100%)`, so the panel overlaps the photo by 64 px. Below it sits the **booking bar** (§3). Inner page heads repeat a smaller version of this panel (§5).

### T5 (supporting). Section heads in the Azabu "PICKUP / NEWS" style
- H2 in caps Manrope 800 1.75rem / 1.2, .04em, #5C6B48. A subtitle sits on the same baseline 16 px to its right: Source Sans 3 0.875rem / 600, .08em, #6B7266.
- Then a **1 px #232820 rule** under both, full container width, 20 px below.
- Examples: "A TRAINING DAY / 07:45 to 17:00", "THE DIPLOMA / six parts, two years", "WHERE TO NEXT / for applicants".
- Left-aligned, never centred.

### Continuation on inner pages (≥ 4 carry T1–T3)
| Page | T1 hexes | T2 dotted audience cells | T3 pickup tiles | T4 pointed panel head |
|---|---|---|---|---|
| About `/about/` | 3 hexes "What we hold to" (Calm handling · Notes before memory · One tutor, six students), single row, step 300 px | partner-clinics cell expanded | ✓ (3) | ✓ |
| Course `/course/` | **full 6-hex band** (same as home, with photos img-14 / img-15 at the edges), each hex anchoring a module section below | clinic-staff cell → evening course | ✓ (3) | ✓ |
| A training day `/training-day/` | – | – | ✓ (3) | ✓ |
| Teaching ward `/ward/` | 3 hexes for the ward's rooms (Kennels · Prep & theatre · Imaging) | – | ✓ (3) | ✓ |
| Admissions `/admissions/` | 3 hexes for the three ways in (Diploma · Foundation · Evening) | **full 5-cell row** as the page's opening (each anchors a sub-section) | ✓ (3) | ✓ |
| Fees `/fees/` | – | – | ✓ (3) | ✓ |
| Tutors `/tutors/` | – | – | ✓ (3) | ✓ |
| Visit & open days `/visit/` | – | 5-cell row again ("who usually comes") | ✓ (3) | ✓ |
| Students `/students/` | – | – | ✓ (3) | ✓ |

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
- **Picture** (`ref/azabu-first.png`, `scroll-azabu-hero-*.png`): a full-viewport set of **documentary photographs** cross-dissolving into each other. In the captured frame, a black-and-white cow's head in a stall is double-exposed with students in protective clothing and the campus building, under a washed blue-grey wash.
  - Above: a **two-tier header**. Global nav items have a small tracked Latin sub-label under each, with dotted separators. The lower tier is the **five audience cells**.
  - Right below the photo: **three promotional banners** side by side (`azabu-900.png`), then **notice rows** with a crimson label cell.
- **Story**: "real hands-on animal care is what you study here, and there is a clear door for each kind of visitor".
- **Signature motion**:
  - pure CSS `slideShow`, 18 s loop, slides offset 3 s, opacity 0 → 1 at 5 %, hold to 12 %, → 0 at 20 %, linear, so two scenes **overlap as a double exposure** (`tok(g)`);
  - the hex tiles drop 15 px on hover.

### (2) Our transposed scene (same scene type, same motion idea, same image type: high-key documentary photos)
- **Scene, img-01**: Shirogane's **teaching ward** in daylight.
  - **Two students in pale sage scrubs steady a calm grey-and-white lurcher on a steel exam table, while a tutor (50s) checks a fresh forelimb bandage.** Kennels and a big window are behind them.
  - The figures sit in the centre-right of the frame so they stay clear of the panel point.
- **Double exposure**: img-01 cross-dissolves into img-02 (a student listening to a cat's chest with a stethoscope, the tutor watching) and img-03 (gloved hands laying instruments on a steel tray, a student blurred behind). The overlaps are the same "two scenes at once" moments as Azabu's.
- **Story**: "you learn nursing on a working ward, with a tutor beside you, and there is a clear way in for whoever you are". The five audience cells and the three entry cells are the "doors".
- **Composition change, required by the plan**: Azabu is full-bleed. Ours is **split-photo-right with the text on a solid pine panel and a booking bar** (`split-photo-right/on-solid-panel/booking-bar`). We keep the scene, the cross-dissolve and the doors, and move the photo set into the right column. No text sits on the photo.

### (3) KV checklist (all six implemented in the first screen and visible at 1440 × 900 and 1280 × 800; mobile in §3)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Cross-dissolving set of documentary photos (animal + students in protective gear) | 3 ward stills stacked: students + dog + tutor bandage / cat stethoscope / instrument tray | hero right column, from 44 % to 100 % of the viewport width, full hero height, under the panel point | CSS keyframes `sg-dissolve`, **18 s loop, linear**, overlapping fades (§3); static (img-01 only) under reduced motion / `?sp-static` | **img-01**, **img-02**, **img-03** |
| 2 | Two-tier header, nav items with tracked Latin sub-labels + dotted separators | Split nav: 3 links │ wordmark │ 3 links, each link with a caps sub-label (`<br><em>`), 1 px dotted separators between items; "Apply" button at the right | header, 80 px | hover underline .2 s | – (SVG wordmark mark) |
| 3 | Five audience cells with dotted separators under the header (T2) | `.sg-audience`: Career changers · School leavers · Clinic staff · Parents & supporters · Partner clinics | directly under the header, 56 px | hover underline .2 s | – (5 line-icon SVGs) |
| 4 | Yamazaki solid colour panel with a shaped edge cutting into the photo | Pine #5C6B48 panel holding eyebrow + H1 + lead + button, **hex-pointed right edge** overlapping the photo by 64 px | hero left, 0 → 44 % + 64 px point, full hero height | none (no reveal in the hero) | – |
| 5 | Three banners side by side (Azabu) / three flat entry buttons in a strip (Yamazaki) | **Booking bar**: three equal white cells **Apply · Open day · Visit the ward**, each with a 4 px top rule in a T1 tile colour, a date line and a chevron | hero foot, full 1200 container on a #EDF0E6 strip | hover: chevron 4 px right | – |
| 6 | Notice row with a crimson label cell + 1 px frame + chevron | **Intake notice** row: brick #B5472F label cell 150 px "Intake notice" + white text cell + 1 px brick frame + chevron | directly under the booking bar, 16 px gap, 1200 container | none in the first screen (it is in the first screen, so no reveal) | – |

img-01, img-02 and img-03 are in the image list (§13), marked home.

---

## 3. First-screen composition

**hero_composition: split-photo-right · hero_text: on-solid-panel · hero_footer: booking-bar · hero_fingerprint: split-photo-right/on-solid-panel/booking-bar**

- **split-photo-right**: photo set on the right, text column on the left, side by side, never stacked on desktop.
- **on-solid-panel**: all hero text sits on an opaque pine panel. Nothing is overlaid on the photo.
- **booking-bar**: the hero ends in a strip of three action cells (Apply / Open day / Visit the ward) with dates.
- This is **not** a full-bleed photo with text laid over it.

**Order from the top**: header (80) → `.sg-audience` (56) → `.sg-hero` (`min-height: clamp(400px, 53vh, 500px)`; 477 at 900 high, 424 at 800) → `.sg-bookbar` (104) → 16 px gap → `.sg-notice` first row (52).
- 1440 × 900: 80 + 56 + 477 + 104 + 16 + 52 = **785** ✓ (notice row fully visible).
- 1280 × 800: 80 + 56 + 424 + 104 + 16 + 52 = **732** ✓.

**Header** (template part `header`, white, 80 px, 1 px #DADDD5 bottom border, sticky: no). **Split nav**:
- 3 links left │ the centred wordmark (our own mark: a flat-top hexagon outline 28 px in pine with a small paw cut-out, then "Shirogane College" in Manrope 800 1.125rem #232820) │ 3 links right. Then an "Apply" button at the far right (pine fill, white, Source Sans 3 0.875rem / 700, height 40, padding 0 20px, r 0).
- **Links**: About / THE COLLEGE · Course / THE DIPLOMA · A training day / 07:45–17:00 ‖ Tutors / SEVEN PEOPLE · Admissions / FEB 2027 INTAKE · Fees / SIX ITEMS.
  - Label: Source Sans 3 0.9375rem / 700 #232820.
  - Sub-label: the `<em>` in the navigation link label, `font-style: normal`, 0.625rem / 700 / .14em uppercase #6B7266, on its own line, centred (Azabu 8 px caps sub-labels, `tok(b)`).
  - Each item: padding 0 18px, `border-left: 1px dotted #9AA190` (plus `border-right` on the last item of each side).
- One `core/navigation` only. Below 1024 px it collapses into the overlay with a "Menu" button.

**Hero** (`.sg-hero`, alignfull, grid `44fr 56fr`, margin 0):
1. **Panel** `.sg-hero__panel`: background #5C6B48, `clip-path: polygon(0 0, calc(100% - 64px) 0, 100% 50%, calc(100% - 64px) 100%, 0 100%)`, width `calc(100% + 64px)` (overlaps the photo column), z-index 2. Padding `40px 120px 40px max(24px, calc((100vw - 1200px) / 2))`, so text aligns with the 1200 container edge. Contents, vertically centred:
   - eyebrow "VETERINARY NURSING DIPLOMA · SINCE 2004": 0.75rem / 700 / .14em uppercase, #DDE3D3;
   - **H1** "Nursing, / learned on / the ward." Manrope **800, 4.5rem** (`clamp(3.25rem, 2.1rem + 2.9vw, 4.5rem)`), lh 1.02, ls −.02em, **#FFFFFF**, three lines, max-width 520 px;
   - lead, 1.0625rem / 1.7 Source Sans 3, #EEF1E8, max 440 px, ≈ 30 words: "A two-year diploma for people who want to work beside vets in clinics and animal hospitals. Every week, you spend real shifts on our teaching ward, six students to one tutor.";
   - button "See a training day" → `#day`: white fill, #3F4A31 text, 0.9375rem / 700, height 48, padding 0 28px, r 0, with a pine chevron.
2. **Photo set** `.sg-hero__media` (grid column 2, `position: relative; overflow: clip`). Three stacked `figure.wp-block-image` (absolute, inset 0), each img `object-fit: cover`:
   - `.sg-still--1` img-01, `object-position: 58% 45%`;
   - `.sg-still--2` img-02, `object-position: 55% 40%`;
   - `.sg-still--3` img-03, `object-position: 50% 50%`.

   The figures sit in the right 70 % of each frame so the panel point never covers a face.
   - **Cross-dissolve** (Azabu `slideShow` concept, adapted to three stills so a still is always fully visible), inside `@media (prefers-reduced-motion: no-preference)` and disabled by `html.sp-no-motion`:
     - still 1: the base layer, always opacity 1;
     - still 2: `animation: sg-dissolve-2 18s linear infinite` with keyframes `0%, 33.3% {opacity:0} 41.7%, 66.7% {opacity:1} 75%, 100% {opacity:0}`;
     - still 3: `animation: sg-dissolve-3 18s linear infinite` with keyframes `0%, 66.7% {opacity:0} 75%, 91.7% {opacity:1} 100% {opacity:0}`.
     - Fades take 1.5 s and overlap (2 → 3 at 12–13.5 s), giving Azabu's double exposure.
     - Default (static) state: stills 2 and 3 at opacity 0, so `?sp-static`, reduced motion, no-JS, the editor and screenshots all show img-01.
   - Photos 2 and 3 use `loading="lazy"` and `decoding="async"`. Photo 1 uses `fetchpriority="high"`.
3. **Booking bar** `.sg-bookbar` (alignfull strip #EDF0E6, padding 16px 0; inner 1200 container, grid of 3 equal cells, gap 16):
   - Each cell is an `<a>`: white, height 72, padding 14px 20px, **4 px top rule** (`border-top`), r 0, with no other border.
   - Cell content: label Manrope 800 1.0625rem #232820, a date line Source Sans 3 0.875rem #4A5145, and an 8 × 14 chevron at the right in #5C6B48.

   | Cell | Top rule | Label | Date line | Link |
   |---|---|---|---|---|
   | 1 | #5C6B48 | Apply for February 2027 | Applications close Fri 8 January | `/admissions/#apply` |
   | 2 | #8E6E2A | Open day | Sat 16 January, 10:00–13:00 | `/visit/#open-day` |
   | 3 | #3F7C85 | Visit the teaching ward | Wednesdays 15:30, up to 6 visitors | `/visit/#ward-visit` |

4. **Intake notice** `.sg-notice` (white ground, 1200 container, margin-top 16). Rows are 52 px, Azabu notice layout (`tok(f)`):
   - label cell 150 px, #B5472F fill, white Source Sans 3 0.875rem / 700 centred;
   - text cell, white, 1 px #B5472F frame, text 0.9375rem / 600 #232820, padding 0 24px;
   - chevron #B5472F at the right.
   - Row 1 (first screen): "Intake notice" | "February 2027 intake: 24 places. Applications close Friday 8 January 2027." → `/admissions/`.
   - Row 2 (just below the fold, rows 4 px apart): "Open day" | "Saturday 16 January, 10:00–13:00: tour the ward, meet the tutors, try a bandage." → `/visit/#open-day`.
- **No sp-reveal anywhere in §0–§2.** The cross-dissolve is the only first-screen motion.
- **Saturation**: the pine panel is HSV S ≈ 0.33 (under the 0.35 threshold of `check-first-screen.py`). The photo set is high-key with pale sage scrubs, a grey-white dog and steel. Saturated pixels come only from the brick label cell (150 × 52), the chevrons and the 4 px rules. **Target ≤ 8 %, hard cap 15 %** (plan note ceiling 30 %; Azabu 2 %, Yamazaki 30 % rejected, `tok(a)`).
- **Mobile 390 px (≤ 781 px)**:
  - Header 64 px: hex mark + wordmark left, "Menu" button right. The nav lives in the overlay.
  - `.sg-audience` becomes a single-row horizontal scroller (`overflow-x: auto; scroll-snap-type: x mandatory`). It holds 5 chips (icon 18 + label 0.875rem, padding 0 16px, height 48, dotted separators). No sp-reveal on its children. The body never scrolls sideways.
  - Hero stacks: **panel first** (full width, `clip-path: polygon(0 0, 100% 0, 100% calc(100% - 20px), 50% 100%, 0 calc(100% - 20px))`, i.e. the hex point turns downward, 20 px deep, padding 32px 20px 44px; H1 **2.75rem / 1.04**, three lines; lead; button full width), then the **photo set at 4:3** (cross-dissolve kept, same timing).
  - Booking bar: cells stack as 3 rows (height 64, gap 8).
  - Notice row: the label cell becomes a 28 px top band (full width), with the text cell below it.
  - **No vertical text, no absolutely positioned labels over text, no overlap, no horizontal page scroll.**

---

## 4. Home sections (sticky-media archetype, day-schedule page structure)

Container rules:
- content container **1200 px** (`tok(c)`: Azabu 980 / Yamazaki 1040, ours widened for 1440);
- side padding `clamp(20px, 4vw, 40px)`;
- section gaps **96 px** (Azabu 80–100 `tok(c)`), mobile 64 px;
- every section head uses T5.

| # | Section (anchor) | Purpose | Layout | Images | Copy | Motion |
|---|---|---|---|---|---|---|
| 0 | **Audience row** `.sg-audience` (T2) | doors for five visitor types | §1 T2, under the header | – (SVG icons) | 5 labels | none |
| 1 | **Hero + booking bar** `#top` | KV | §3 | img-01, img-02, img-03 | eyebrow + H1 + 30 w + 3 cells | cross-dissolve only |
| 2 | **Notices** | intake dates | §3 item 4, 2 rows | – | 2 lines | none |
| 3 | **Who the course is for** `#who` (T2 expanded) | qualify the reader | T5 head "WHO IT IS FOR / five ways in". 1 intro paragraph (≈ 50 w, max 720 px). Then the 5-column dotted-cell row at full size: 40 px icon, H3 Manrope 700 1.125rem, 2 sentences ≈ 30 w Source Sans 3 0.9375rem / 1.75 #4A5145, link "Read more" + chevron. Cells padding 8px 24px 0, dotted separators full height. | – | ≈ 200 w | `sp-stagger` on the row + `sp-reveal--up` per cell |
| 4 | **A training day** `#day` (sticky-media + day-schedule) | how a day runs | T5 head "A TRAINING DAY / 07:45 to 17:00". Narrative paragraph (≈ 60 w) under the head. Then **two sticky-media groups**, grid 5/7, gap 64: **left 5 columns = photo 4:5, `position: sticky; top: 104px`**, with a caption under it (0.8125rem #6B7266); **right 7 columns = time rows**. Group A "Morning" with img-04 (handover); group B "Afternoon" with img-05 (theatre assist). **Time row:** time in Manrope 800 1.75rem #5C6B48, tabular, nowrap, 120 px column; title Manrope 700 1.125rem #232820; 2 sentences ≈ 35 w; a chip (pill, 1 px #9AA190, 0.75rem / 600 #4A5145, padding 2px 10px, r 999, Yamazaki chips `tok(d)`) naming the place ("Kennels", "Prep room", …); 1 px **dotted** #9AA190 rule under each row, row padding 28px 0. Rows in §14 (A: 07:45, 08:30, 10:00; B: 13:00, 15:00, 16:30, 17:00). Text link "The full day, hour by hour" → `/training-day/`. | img-04, img-05 | ≈ 330 w | `sp-reveal--up` on each time row (not on the sticky photos) |
| 5 | **Six parts of the diploma** `#course` (T1) | the course | T5 head (inside 1200, above the band) "THE DIPLOMA / six parts, two years" + 1 line (≈ 25 w). Then the full-bleed hex band (T1), 460 px, with img-06 left edge and img-07 right edge behind the tiles. Under the band: one paragraph (≈ 45 w) on how the parts are spread over two years + link "How the course is built" → `/course/`. | img-06, img-07 | ≈ 90 w + 6 tile labels | `sp-stagger` on the honeycomb + `sp-reveal--up` per `a.sg-hex`; **img-06 is `.sp-parallax__layer` (parallax, §10)** |
| 6 | **The ward band** `#ward` | statement + mood; **main parallax** | alignfull **Cover `.sp-parallax`**, min-height 560 px (mobile 420), background img-08, overlay 0 (no scrim; high-key photo). In the cover's inner container (static), bottom-left: a pine #5C6B48 **pointed panel** (T4 shape, point on the right, 40 px deep), width 520 px, padding 32px 72px 32px 36px. It holds caps eyebrow #DDE3D3 "THE TEACHING WARD", H2 Manrope 800 2.25rem / 1.15 white "One tutor to six students, on every shift.", and 1 paragraph ≈ 40 w #EEF1E8 + link "Inside the ward" (white, underline) → `/ward/`. | img-08 | ≈ 55 w | `sp-parallax --sp-par: 10%` (mobile 6 %); panel `sp-reveal--up` |
| 7 | **Seven tutors** `#tutors` | trust | T5 head "TUTORS / seven people". Grid 5/7: left img-09 4:5 (r 0); right: 1 paragraph ≈ 60 w, then a **two-column name list** of the 7 people from §14: name Manrope 700 1.0625rem #232820, role 0.875rem #6B7266 under it, 1 px dotted #9AA190 rule under each entry, padding 14px 0. Link "Meet the tutors" → `/tutors/`. **No portrait grid.** | img-09 | ≈ 110 w | `sp-reveal--up` on the list group |
| 8 | **Three students** `#students` | proof (paths, not outcomes) | T5 head "STUDENTS / three ways through". **Feature**: grid 7/5, img-10 3:2 left; right: kicker "Career changer · 2023 intake", pull quote Manrope 600 1.5rem / 1.4 #232820, 2 paragraphs ≈ 90 w, fact line 0.8125rem #6B7266 "Hana Okafor / 34 / placement in a city small-animal clinic". **Below**: 2 wide **thumb-left story tiles** (T3 language, larger): white, 1 px #E0E0E0, soft underside shadow, **160 × 160 photo flush left** (img-11, img-12), text right: name + age kicker, title, 40 w, chevron. Link "Read the three stories" → `/students/`. | img-10, img-11, img-12 | ≈ 200 w | `sp-reveal--up` on the feature text; `sp-stagger` + `sp-reveal--up` on the 2 tiles |
| 9 | **Fees** `#fees` | clarity | T5 head "FEES / six items". **Full-width table** (6 rows from §14, §11 rules). Note 0.875rem #6B7266: "Tuition can be paid in ten monthly instalments. Four bursaries per intake cover half of the first year's tuition." Then an outline button "All fees and what is included" → `/fees/`. | – | 6 rows + note | **no reveal** |
| 10 | **Where to next** `#next` (T3) | navigation for applicants | T5 head "WHERE TO NEXT / for applicants". 3 × 2 pickup tiles (T3), icon thumbs. | – (icon thumbs) | 6 titles | `sp-stagger` + `sp-reveal--up` per tile |
| 11 | **Next intake** `#intake` | the single CTA, with figures | alignfull #EDF0E6 band, padding 80px 0. Grid 6/6: left img-13 3:2 (open-day tour); right: T5-style small eyebrow "NEXT INTAKE", H2 Manrope 800 2.5rem "February 2027: twenty-four places.", 1 paragraph ≈ 45 w. Then a **figure row** of 3 (dotted vertical separators): **24** places · **40** weeks on placement · **6** students per tutor (number Manrope 800 2.75rem #5C6B48, label 0.875rem #4A5145). Then the booking-bar trio again as 3 compact cells (same tokens as §3), stacked under the figures. | img-13 | ≈ 70 w | `sp-count` on the 3 numbers; `sp-reveal--up` on the text group |
| 12 | **The intake letter** `#letter` (newsletter slot) | updates on dates | white, 1 px #DADDD5 rule above, padding 64px 0. Grid 5/7: left H3 Manrope 700 1.5rem "The intake letter" + 2 lines (≈ 30 w: open-day dates, application deadlines, one note from the ward, six times a year); right `shippress_form_slot` kind newsletter (§12, light tokens). | – | ≈ 35 w | **no reveal** |

- **Footer** (dark): band #3F4A31 (pine-deep), text #EEF1E8 / #C9D1BD.
  - Row 1: hex mark + wordmark left; 6 links right with dotted separators.
  - Row 2: 3 columns: address + phone + email; office hours + ward hours; a "The intake letter →" link to `/newsletter/` (no second form on the home page).
  - Row 3: 0.75rem © 2026 Shirogane College · Privacy.
- **Home image positions: 13** (img-01 … img-13), all different, well above 8.
- **English words**: ≥ 900 (minimum 250).
- **Narrative paragraphs ≥ 20 words**: §3 intro, §4 intro + 7 rows, §5, §6, §7, §8 (2), §11, so ≥ 12.
- **Effects used on home**: cross-dissolve (own keyframes, hero only), `sp-reveal--up` (+ `sp-stagger`), `sp-parallax`, `sp-count`. None in §0–§2, §9 (table) or §12 (form).

### Not the same as recent home pages
| Theme | Their home order (stage-a) | Shirogane differs because |
|---|---|---|
| Kodou Charging | split hero + outlined booking banner → centred statement + pictograms → tab box → wide photo band → 4 tiles → narrative visit → pricing → stories → FAQ → newsletter | Kodou's hero is a white text column with one outlined banner. Ours is a **solid pine panel with a hex point**, a **cross-dissolving 3-photo set** and **three separate entry cells**, under a five-cell audience row. No centred statement, no tabs, no 4-tile row, no FAQ. The middle of the page is a **sticky-photo day schedule** and an **interlocking hex honeycomb**, which none of the four have. |
| Seimyaku Clinic | full-bleed photo + veil hero → 4 cards → parallax message → stacked-sheet chapters → ruled rows + right-edge photos → stories → team list → fees → visit → notes → letter | No full-bleed hero, no veil, no card row, no stacked sheets, no giant light words. Our heads are small caps H2 + rule (Azabu), and our parallax is a cover band with a pointed panel. |
| Enban Records | black keyword bar + inset slide hero + timeline strip → three ruled audience rows → crate cards → counter band → story → visit → letter | Our audience gateway is a **docked five-cell dotted row** (not ruled rows with photos). No keyword bar, no product cards, no horizontal timeline. |
| Fuchi Glazing | slanted panel + framed photo hero + info bar → survey plate → ledger rows → 4 × 2 square catalogue → masonry projects → prices | Fuchi's panel is slanted with a framed photo and a single info bar. Ours is hex-pointed with a dissolving set, a booking bar of three coloured-rule cells, **and notice rows with a label cell**. No ledger, no square catalogue, no masonry. |

---

## 5. Inner pages (11 pages + 3 posts)

**Every inner page head (T4 small)**: alignfull, height 320 px (mobile auto), grid 40/60.
- Left: a pine panel with the hex point (40 px deep, overlapping the photo). It holds the breadcrumb (0.75rem #DDE3D3, separators "›"), the H1 in Manrope 800 **3.375rem** / 1.08 white (mobile 2.25rem) and a 1-line lead in #EEF1E8.
- Right: `figure.sp-parallax` with the page's head photo, `--sp-par: 6%` (mobile 4 %).
- Mobile: panel first with the downward point, then the photo 16:9.
- Then `.sg-audience` is **not** repeated (it lives only on home, Admissions and Visit).
- Every page ends with the **T3 pickup row** (3 tiles) and a foot CTA band (#EDF0E6: one line + the "Apply" button + outline button "Book a ward visit").
- Never the same image twice on a page.

1. **About** `/about/`, head img-17 (college building).
   - Founded **2004** by Dr **Margit Halvorsen**, a small-animal vet who kept training new nurses on the job and wanted a ward built for teaching.
   - The ward opened in 2004 with 8 kennels and now has 18.
   - T1: 3 hexes "What we hold to" (Calm handling · Notes before memory · One tutor, six students), with 2 lines each below the honeycomb.
   - "Partner clinics" section (`#clinics`, T2 cell expanded): 22 clinics and animal hospitals, each takes 1–2 students per placement block. Text only, no logos or real names.
   - Address and hours.
2. **Course** `/course/`, head img-14 (imaging).
   - The full T1 band again (edge photos img-15 left and img-16 right, so they differ from the head photo).
   - Then 6 module sections (`#foundations` … `#placement`), each: T5 head, 2 paragraphs (≈ 90 w), and a "Hours" fact line. Hours: Foundations 260 · Ward nursing 420 · Theatre assist 300 · Imaging & lab 200 · Pharmacy 140 · Placement 40 weeks.
   - `#evening`: the evening course for clinic staff (12 evenings, Tuesdays 18:30–21:00) and the 10-week foundation certificate (part-time, Mondays and Thursdays).
3. **A training day** `/training-day/`, head img-04.
   - The full day-schedule as sticky-media groups (Morning: img-01, Midday: img-02, Afternoon: img-05), with all 8 rows from §14 at ≈ 60 w each.
   - Then "A week" table: Mon–Fri, with which rotation (ward / theatre / imaging / lecture) and the weekend feed rota (each student 1 weekend in 6, 08:00–11:00). The table stacks on mobile.
4. **Teaching ward** `/ward/`, head img-08.
   - T1: 3 hexes (Kennels, 18 · Prep & theatre · Imaging & lab).
   - Sections for each room: photo + 2 paragraphs (img-03, img-05, img-14).
   - "How animals come to the ward": partner clinics refer calm, stable inpatients and post-operative patients. Owners consent. A vet is on site 07:45–17:00.
   - Welfare rules as 5 dotted-rule rows.
5. **Tutors** `/tutors/`, head img-09.
   - 7 long rows (dotted rules): name / role / 3 lines / "teaches" chip(s). img-11 and img-02 are set into the right column.
   - Not a portrait grid.
6. **Admissions** `/admissions/`, head img-13.
   - Opens with the **full T2 five-cell row**. Each cell anchors a sub-section (`#career-changers`, `#school-leavers`, `#supporters`, …) of 2 paragraphs.
   - T1: 3 hexes for the three ways in (Diploma · Foundation certificate · Evening course).
   - **"How to apply"** (`#apply`): 6 steps from §14 as dotted-rule rows with dates (not a step grid).
   - Entry requirements in plain words (age 17+, a reference, a handling session; no prior animal job needed).
   - `#questions`: 8 Q&A as a 2-column list, no accordion.
7. **Fees** `/fees/`, head img-15 (pharmacy).
   - The full table (6 rows, same as home), "What is included" (8 lines), instalments (10 monthly), bursaries (4 per intake, half of year-one tuition), refunds (full refund of tuition until the end of induction week).
8. **Students** `/students/`, head img-10.
   - The 3 stories at ≈ 220 w each, each with 2 photos (none repeats the head img-10): Hana img-16 + img-02; Leo img-11 + img-18; Grace img-12 + img-14.
9. **Visit & open days** `/visit/` (the **booking page**), head img-18 (open-day talk).
   - `#open-day` (dates and programme as rows) and `#ward-visit` (Wednesdays 15:30–16:30, 6 visitors, closed shoes).
   - The T2 row "who usually comes".
   - Then **`shippress_form_slot` contact** (§12) in a 7/5 grid, with the visit facts in the right column. No reveal on the form section.
10. **Contact** `/contact/`, head img-17.
    - Left 7: H2 "Ask admissions" + `shippress_form_slot` contact (§12).
    - Right 5: address, phone, email, office hours, how to get there (bus 14 to Linden Yard, 4 min walk; bike racks; step-free).
11. **Newsletter** `/newsletter/`, head img-13.
    - Standalone "The intake letter": what is in it (4 dotted rows), how often (6 a year), then the newsletter slot **inside a pine panel** (dark tokens, §12).
12. **News** `/news/`: the posts page (empty content).
    - The list uses Azabu news rows: 80 × 80 square thumb with a 1 px #E0E0E0 frame, date 0.875rem #6B7266, a pill category chip, the title, a dotted rule under each row, and a chevron.
    - **Posts (3)**, category "From the ward", tags "open day", "placements", "handling":
      - "What happens at a February open day" (featured img-18)
      - "How placement blocks are matched to clinics" (img-16)
      - "Low-stress handling: the first thing we teach" (img-02)
    - single.html: T4 head with the featured image, 720 px text column.
13. **Privacy** `/privacy/` and **Thanks** `/thanks/` (no reveal).

theme-meta `pages`: home, about, news, article, category, tag, newsletter (→ `/newsletter/`), contact (→ `/contact/`). Exactly one `posts` role page (`/news/`). Templates: front-page, page, single, archive, category, tag (copied from archive, label TAG), 404, search. **Menu** (single): About · Course · A training day | wordmark | Tutors · Admissions · Fees. Ward, Students, Visit and Contact are reached via audience cells, booking bar, pickup tiles and the footer.

---

## 6. Colour (source `tok(a)`; reference relationship kept)

The relationship we keep from Azabu: **one deep brand colour** for headings and labels, **one multi-colour set used only on the course tiles** (and their echoes: booking-bar rules), **one crimson-type accent only in notice cells**, and everything else white or pale.

| Token | Hex | Share (home) | Source / note |
|---|---|---|---|
| ground | **#FFFFFF** | ~55 % | Azabu #FFFFFF `tok(a)` (unchanged) |
| pale band | **#EDF0E6** | ~12 % | Azabu pale band #EADDEE (lilac) → same lightness (±3 % L), hue moved to the plan's green family. Used for the booking strip, hex band, intake band, thumb squares |
| pale grey | #EEF1F2 | table header row | Azabu #EAEDF2 (±2 %) |
| **main (pine, plan palette "matsuba")** | **#5C6B48** | ~14 % (hero panel, heads, page heads) | plan hex. Takes Azabu's brand purple #7B2482 role: H2 heads, icons, links, Apply button, panels. HSV S 0.33 |
| pine-deep | #3F4A31 | footer, hover | – |
| panel light text | #EEF1E8 / #DDE3D3 | text on pine | – |
| ink | #232820 | headings, body | Azabu #000000 → warm-green black (L +12 %, softer on white; contrast 15 : 1) |
| body | #4A5145 | secondary body | – |
| meta | #6B7266 | dates, sub-labels | Azabu date #8D8D8D, darkened for AA (5.3 : 1) |
| rules | #E0E0E0 (frames), #DADDD5 (hairlines), #9AA190 (dotted) | – | Azabu 1 px #E0E0E0, dotted separators `tok(d)` |
| **accent (brick)** | **#B5472F** | ≤ 1 % | Azabu crimson label #FF1054 → brick: the plan's quiet palette forbids a neon crimson; same role (notice label cell + frame + chevron, and form errors). Never elsewhere |
| tile set | #5C6B48 · #7B5A44 · #8E6E2A · #A5586B · #3F7C85 · #657A3E | ~11 % of the hex screen only | Azabu #873489 · #9A4742 · #DDA833 · #CB5390 · #3CA8B8 · #88B83E: **same six hue slots** (purple → pine, brown-red → bark, yellow → ochre, pink → clay rose, cyan → slate teal, green → moss), desaturated and darkened for white text ≥ 4.5 : 1 |
| error / success | #A3341F / #3E6B3A | forms only | – |

- **First-screen saturated share: target ≤ 8 %, cap 15 %** (plan ceiling 30 %; Azabu 2 %, Yamazaki 30 % not adopted). The tile colours never appear in the first screen except as the three 4 px booking-bar rules.
- No cream or beige grounds. No blue or saturated scrubs in photos: scrubs are pale sage or grey.

## 7. Type (font_direction: **sans**)

- **Latin display / headings: Manrope** (700, 800). **Latin body / UI: Source Sans 3** (400, 600, 700). Both sans; no serif anywhere.
- **zh-TW** (black-body gothic only, never Ming):
  - headings `"Manrope", "Noto Sans TC", "PingFang TC", "Microsoft JhengHei", sans-serif` (bundled Noto Sans TC subset, 700, display only);
  - body `"Source Sans 3", "PingFang TC", "Microsoft JhengHei", "Noto Sans CJK TC", sans-serif` (no bundled CJK, no Japanese font).
- **ja**:
  - headings `"Manrope", "Noto Sans JP", "Hiragino Sans", "Yu Gothic", sans-serif` (bundled Noto Sans JP subset, 700);
  - body `"Source Sans 3", "Hiragino Sans", "Yu Gothic", "Noto Sans CJK JP", sans-serif`.
- **Loading:**
  - Load every family via **theme.json `fontFamilies` + `fontFace`**: woff2 files in `assets/fonts/`, listed in theme-meta `fonts[].files` with OFL licence files, and the family names in readme.txt.
  - Copy `shared/inc/editor-lang.php` → `inc/editor-lang.php` and require it, because style.css uses `:lang()`.
  - Editor and front end must match (`check-editor-fonts.mjs`, en + zh-TW).
  - Build the zh-TW / ja subsets with the Hokuto / Hada workaround (the subset script is known broken).
- CJK display ≈ 0.75 × the Latin size (H1 zh/ja 3.375rem). CJK body line height 1.85. fr / de `hyphens: auto` (H1 in de may break into 4 lines; allowed).

| Role | Desktop / mobile | Weight / lh / tracking | Source token |
|---|---|---|---|
| **Hero H1 (largest)** | **4.5rem** (`clamp(3.25rem, 2.1rem + 2.9vw, 4.5rem)`) / 2.75rem | Manrope 800 / 1.02 / −.02em | Yamazaki H1 33.7 px 700 on panel `tok(b)`, scaled for the plan's ≥ 4.25rem rule; theme.json `xx-large` = 4.5rem |
| Inner H1 | 3.375rem / 2.25rem | Manrope 800 / 1.08 | 0.75 × H1 |
| Statement / intake H2 | 2.25–2.5rem / 1.75rem | Manrope 800 / 1.15 | Yamazaki section H2 30 px 700 `tok(b)` |
| T5 section H2 (caps) | 1.75rem / 1.375rem | Manrope 800 / 1.2 / .04em uppercase, #5C6B48 | Azabu h2 23.8 px 700 brand colour, padding 50 0 20 `tok(b)` |
| T5 subtitle | 0.875rem | Source Sans 3 600 / .08em #6B7266 | Azabu small subtitle on the same baseline |
| Hex title | 1.5rem / 1.125rem | Manrope 700 / 1.25 white | Azabu tile label 24 px `tok(f)` |
| Hex caps line / nav sub-label | 0.6875rem / 0.625rem | 700 / .14em uppercase | Azabu 10 px / 8 px tracked caps `tok(b)(f)` |
| Time (day rows) | 1.75rem | Manrope 800 tabular, #5C6B48 | – |
| Figures (§11) | 2.75rem | Manrope 800 #5C6B48 | – |
| Body | 1rem (narrative 1.0625rem) | Source Sans 3 400 / 1.75 | Azabu 14 / 22.4 (1.6) scaled up; Yamazaki body 16 px `tok(b)` |
| Nav label | 0.9375rem | Source Sans 3 700 | Azabu nav 15 px 700 `tok(b)` |
| Pickup / tile title | 1rem | Source Sans 3 600 / 1.4 | Azabu pickup 15 px |
| Chip | 0.75rem | Source Sans 3 600 | Yamazaki pill chips |

## 8. Spacing, radius, borders, buttons (source `tok(c)`, `tok(d)`)

- **Sizes:** header 80 px (Azabu tier 1 ≈ 83 px); audience row 56 px (Azabu 62 px); container 1200; section gaps 96 / 64.
- **Pickup tiles:** 380 × 82, gap 20 (Azabu 314 × 82, gap 20 × 20, scaled to 1200). Thumbs 80 × 80.
- **Radius 0 everywhere** (Azabu r 0, Yamazaki buttons r 0) except the pill chips (r 999, Yamazaki tag chips) and inputs (r 0 as well).
- **Borders:**
  - tile frames 1 px #E0E0E0;
  - hairlines 1 px #DADDD5;
  - **dotted 1 px #9AA190** for nav separators, audience cells, day rows, name lists, news rows and figure separators (Azabu dotted nav and news, `tok(d)`);
  - notice frame 1 px #B5472F.
- **Shadow**: only `0 8px 8px -6px rgba(0,0,0,.2)` under pickup tiles and story tiles (Azabu, `tok(d)`). None elsewhere.
- **Primary button**: #5C6B48 fill, white, Source Sans 3 0.9375rem / 700, height 48, padding 0 28px, r 0, with an 8 × 14 chevron 12 px after the label.
  - Hover #3F4A31, .2 s ease.
  - **On-pine button**: white fill, #3F4A31 text.
  - **Outline button**: 1 px #5C6B48, pine text, same size.
- Focus ring everywhere: 2 px #B5472F outline, 2 px offset.

## 9. Scroll effects (from the stage-a scroll-effect candidates; sp-scroll copied unchanged)

**Three sp effects**: `sp-reveal--up` (with `sp-stagger`), `sp-parallax`, `sp-count`. The fourth motion is the hero cross-dissolve, our own CSS keyframes (Azabu `slideShow`, `tok(g)`), not an sp class. No wipe, no marquee.

Variables on `.sg-*` wrappers: `--sp-dur: .6s; --sp-ease: cubic-bezier(.25,.46,.45,.94); --sp-dist: 20px`.

| Effect | sp-* class | Where | Reference (trigger / time / easing) | Our values |
|---|---|---|---|---|
| Hex tiles entering in order + hover drop | `sp-stagger` on `.sg-honeycomb`, `sp-reveal sp-reveal--up` on each `a.sg-hex` (clip-path is on the child `span.sg-hex__shape`, never on the observed `a`) | home §5, Course, Ward, About, Admissions hexes | Azabu hex tiles: hover drop 15 px, .4 s ease (`tok(f)`); Azabu has no entry reveal, so the order of entry follows the zig-zag | reveal .6 s, 20 px, stagger 0.12 s; hover `translateY(15px)` .4 s ease with `transition-delay: 0s` |
| Rows and tiles rising | `sp-reveal sp-reveal--up` (+ `sp-stagger` on lists) | §3 cells, §4 time rows, §6 panel, §7 list, §8 feature + tiles, §10 pickup tiles, §11 text; inner content groups | Azabu float menu fadeIn 400 ms swing (`tok(g)`): the same quick, short fade applied to content | .6 s, 20 px, cubic-bezier(.25,.46,.45,.94) |
| Parallax | `sp-parallax` (+ `.sp-parallax__layer`) | §6 ward cover, §5 edge photo, inner page heads | Azabu's photo set sits behind content and moves independently (cross-dissolve, horse behind hexes); here turned into scroll depth | see §10 |
| Figures counting | `sp-reveal sp-count` | §11 "24 / 40 / 6" | Azabu none; it follows the stage-a pick (intake numbers) | spec default 1.2 s easeOutCubic |

Never on: the hero (§1), notices (§2), the audience row, the price table, forms and their sections, legal text, the header or the footer. Sticky in §4 is plain CSS (parents use `overflow: clip`, never `hidden`). No custom scroll listeners. No reveal inside the mobile horizontal audience scroller.

## 10. Parallax (required)

1. **Ward band** (home §6, the main one). Cover `.sg-wardband.sp-parallax`, background **img-08** (`.wp-block-cover__image-background` moves).
   - `--sp-par: 10%` desktop, **6 %** ≤ 781 px.
   - Foreground: the pointed pine panel with eyebrow, H2, paragraph and link, inside `.wp-block-cover__inner-container`, which does not move.
   - Reference: Azabu layers its documentary photography behind content and lets it move on its own (the dissolving hero, the horse behind the hexes). We give the full-width ward photo its own speed against the static panel.
2. **Hex band edge photo** (home §5, and Course). `.sg-hexband.sp-parallax`, with **img-06** (left) in `div.sp-parallax__layer` at `--sp-par: 8%` (mobile 5 %).
   - img-07 (right) is a plain absolute figure with no movement, so the two edges move differently.
   - The tiles are the foreground and do not move (only their reveal / hover).
   - Reference: the horse photo behind Azabu's honeycomb (`ref/azabu-2300.png`).
3. **Inner page heads**: `figure.sp-parallax` on the right photo, `--sp-par: 6%` (mobile 4 %).

All three are static under prefers-reduced-motion, `?sp-static`, no-JS and in the editor. `check-parallax.mjs` must measure ≥ 6 px on desktop and on mobile (the ward band is the measured target). The hero photo set does **not** use parallax; it has the cross-dissolve.

## 11. Responsive

- **390 px first screen**: header 64 → audience chip scroller (48) → panel (downward point; H1 2.75rem, 3 lines) → 4:3 photo set → 3 stacked booking cells → notice row with its top label band.
  - No vertical text.
  - No absolutely positioned labels over text.
  - No overlap.
  - No horizontal page scroll (`html, body { overflow-x: clip }`).
- **Day schedule ≤ 1023 px**: sticky off, the photo becomes a 3:2 image above its group's rows, and the time column goes above the title (time 1.5rem).
- **Hex band**:
  - **1024–1279 px**: scale the honeycomb with `transform: scale(.8)` on the inner wrapper from the centre (footprint 1014 px), and set the band height to 380.
  - **≤ 1023 px**: tiles become a **2-column grid of hexagons** (each 100 % of the column, ratio 1.155, gap 12). Rows 2 and 3 alternate an 8 % horizontal offset so the zig-zag still reads; edge photos show above and below the grid (img-06 at the top-left, img-07 at the bottom-right, 30 % of the width).
  - **≤ 480 px**: a 2-column grid without offset.
  - Hover drop is disabled on touch (`@media (hover: hover)` only).
- **Audience row** ≥ 1024: 5 cells. 782–1023: 5 cells with labels 0.8125rem and icons hidden. ≤ 781: horizontal chip scroller.
- **Booking bar / pickup tiles / story tiles**: ≤ 1023 px pickup tiles go to 2 columns; ≤ 781 px everything goes to 1 column (tiles keep 80 px thumbs; story tiles shrink to 112 px thumbs).
- **Price table** (`.sg-fees`, home §9 and `/fees/`):
  - **At ≥ 782 px it spans the full 1200 container width** (100 % of the container at 800 px), 3 columns: Item 32 % / What it covers 50 % / Fee 18 %.
  - The **fee column is `white-space: nowrap; text-align: right`**, Manrope 700 1.25rem tabular, and is never cut: no `overflow: hidden` on the table or its wrapper, `table-layout: auto`, and the description wraps.
  - Header row on #EEF1F2, 0.75rem / 700 uppercase #4A5145. 1 px #DADDD5 row rules, row padding 18px 16px.
  - **≤ 781 px every table (fees, the week table, hours) is stacked**: each row becomes a block (item bold, description, fee on its own line, right-aligned). The header row is visually hidden but kept for screen readers.
- Tutors list → 1 column ≤ 781. Feature story stacks with the photo first. Figure row → 3 columns kept down to 390 (numbers 2rem).

## 12. Forms (form contract v1: `steps/form-contract-v1` exists)

- **Assets:** copy `pipeline/assets/forms/shippress-forms.php` → `inc/` and the forms CSS / editor JS → `assets/`, unchanged. Require them from functions.php.
- **Placement:** forms are never in the first screen and never get sp-reveal (nor does their section). No fake forms, no mail backend, no import-time plugin detection.
- **Contact** `/contact/` **and the booking page** `/visit/` (open day / ward visit): the pattern calls `shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) )`.
  - `$fallback` is the `ob_start()`-buffered literal markup of the primary button, with the same class as the theme button:
    - `/contact/`: "Email admissions" → `mailto:admissions@shirogane-college.example?subject=<contact_subject>`;
    - `/visit/`: "Email to book a visit" → `mailto:admissions@shirogane-college.example?subject=<visit_subject>`.
  - The fallback never links to `/contact/`.
  - With CF7 or WPForms present, the first published form renders.
  - **Recommended fields** (documented for site owners in readme and a page note):
    - **Contact:**
      - Full name*, Email*, Phone
      - I am… (select: a career changer / a school leaver / clinic staff / a parent or supporter / a partner clinic)
      - Question about (select: the diploma / the foundation certificate / the evening course / fees and bursaries / placements)
      - Message* (textarea)
      - Consent* (checkbox linking `/privacy/`)
    - **Visit (booking):**
      - Full name*, Email*, Phone*
      - Visit type* (radio: Open day Sat 16 January 10:00–13:00 / Ward visit, Wednesday 15:30)
      - Preferred Wednesday (date)
      - Number of visitors (select 1–3)
      - Access needs (textarea)
      - Consent* (checkbox)
- **Newsletter** `/newsletter/` (standalone page, not an alias of News) and home §12:
  - `shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'admissions@shirogane-college.example', 'label' => _t('forms_email'), 'submit' => _t('forms_subscribe'), 'notice' => _t('forms_mail_notice'), 'subject' => _t('forms_mail_subject') ) )`.
  - MailPoet (explicit ID) or MC4WP is preferred. CF7 / WPForms only via an explicitly configured newsletter form ID, never the contact form.
  - **Without plugins**: a required `type=email` field + submit, performing a native mailto POST that carries the entered address. Visible notice: "Opens your email app. Send the message to receive the intake letter; you are not subscribed yet." Never claim success.
- **Light tokens** (home §12, contact, visit):
  - `--sp-form-surface #FFFFFF`, `--sp-form-text #232820`, `--sp-form-border #9AA190`;
  - `--sp-form-accent #5C6B48`, `--sp-form-on-accent #FFFFFF`;
  - `--sp-form-focus #B5472F` (2 px outline, 2 px offset), `--sp-form-radius 0`;
  - inputs height 48, padding 0 14px;
  - labels 0.875rem / 700 #232820;
  - error #A3341F (text + 1 px border + message under the field);
  - success #3E6B3A (text + 4 px left rule);
  - checkbox / radio 18 px, accent-color #5C6B48.
- **Dark tokens** (the pine panel on `/newsletter/`, any footer use):
  - surface #FFFFFF, text #232820, border #C9D1BD;
  - accent **#FFFFFF**, on-accent **#3F4A31**, focus #FFFFFF;
  - labels and notice #EEF1E8;
  - error text #FFC9BC, success #D4E6C8.
- **Plugin coverage:** style every plugin class consistently (CF7, WPForms, MailPoet, MC4WP, Jetpack): input, textarea, select, checkbox / radio, label, submit, focus, error, success. Scope to the plugin classes and `.sp-newsletter-fallback`; no global selectors. Map the `--sp-form-*` values to theme.json tokens in style.css.
- **Five-language strings** (en, zh-TW, ja, fr, de) as semantic keys in `inc/i18n/en.php`:
  - `forms_email` ("Your email"), `forms_subscribe` ("Send me the intake letter"), `forms_mail_notice`, `forms_mail_subject` ("Intake letter request");
  - `contact_email` ("Email admissions"), `contact_subject` ("Question for admissions"), `visit_email` ("Email to book a visit"), `visit_subject` ("Open day / ward visit booking");
  - all field labels above.

  Extract with `L10N_SEMANTIC=1`. `form-runtime-check.php` must pass in all five languages, and `repo-gates.sh forms` must pass.

## 13. Images (IMAGERY: **photo**; 18 images, 0 cut-outs)

**STYLE** (one string for every image, passed as `IMAGE_STYLE`):
`High-key documentary photograph in a veterinary teaching ward and clinic, bright even daylight from large windows, white and pale grey walls, brushed steel tables, pale sage-green and light grey scrubs (never blue, never saturated), calm relaxed animals, unposed working moments, real faces with natural expressions, diverse adult students and tutors of mixed ages and backgrounds, gentle shallow depth of field, low-saturation soft green-grey grade, 35mm lens at eye level, modern neutral international setting, no blood, no wounds, no text, no letters, no numbers, no logos, no brand names, no signage, no Japanese elements.`

| # | File | Subject / composition | Ratio | Used on (page · section) | Home |
|---|---|---|---|---|---|
| 01 | hero-ward-bandage.webp | **two students in pale sage scrubs steady a calm grey-and-white lurcher on a steel exam table while a tutor (50s) checks a fresh white forelimb bandage**; kennels and a big window behind; the group sits in the centre-right 60 %, the left 30 % is soft ward space | 16:10 (2000 × 1250) | Home · hero still 1 (KV #1); Training day · Morning | ★ |
| 02 | hero-ward-cat.webp | student listens to a calm tabby-grey cat's chest with a stethoscope on a padded table, tutor beside watching, window light; subjects centre-right | 16:10 | Home · hero still 2; Training day · Midday; Tutors · inline; Students · Hana; post 3 | ★ |
| 03 | hero-ward-tray.webp | gloved hands laying instruments and swabs on a steel tray in the prep room, a student blurred behind; centre-right | 16:10 | Home · hero still 3; Ward · prep room | ★ |
| 04 | day-handover.webp | 07:45 handover: six students and a tutor around a ward desk with clipboards (pages blank), kennels behind, morning light | 4:5 | Home · day Morning (sticky); Training day · head | ★ |
| 05 | day-theatre.webp | student in cap and pale scrubs watching an anaesthesia monitor (screen shows only soft wave lines) beside a vet, draped calm dog, no surgery visible | 4:5 | Home · day Afternoon (sticky); Training day · Afternoon; Ward · theatre | ★ |
| 06 | band-dog.webp | head and shoulders of a calm grey-and-white dog in profile facing right, plain pale wall, subject at the left third, lots of space | 3:2 | Home · hex band left edge (parallax layer) | ★ |
| 07 | band-kit.webp | bandage rolls, a stethoscope and a fob watch on a folded pale cloth, top-down, items at the right half | 3:2 | Home · hex band right edge | ★ |
| 08 | ward-wide.webp | wide view of the teaching ward: a row of kennels, two students checking patients, tall windows, bright, from a low corner; calm and orderly | 21:9 (2000 × 857) | Home · ward band (parallax); Ward · head | ★ |
| 09 | tutor-handling.webp | tutor (Owen, 40s) showing a student how to hold a cat gently in a towel wrap, close and warm | 4:5 | Home · tutors; Tutors · head | ★ |
| 10 | student-hana.webp | woman, 34, in pale scrubs at a city clinic consulting room, lifting a small dog onto the table with the vet | 3:2 | Home · feature story; Students · head | ★ |
| 11 | student-leo.webp | young man, 19, walking a recovering dog on a short lead along a bright clinic corridor | 1:1 | Home · story tile 1; Students · Leo; Tutors · inline | ★ |
| 12 | student-grace.webp | woman, 46, at a lab bench preparing a sample slide under a microscope, reading glasses on her head | 1:1 | Home · story tile 2; Students · Grace | ★ |
| 13 | openday-tour.webp | a student guiding a parent and a teenager through the ward doorway, gesturing towards the kennels | 3:2 | Home · next intake; Admissions · head; Newsletter · head | ★ |
| 14 | imaging-position.webp | two students in lead aprons positioning a calm dog on an X-ray table, tutor at the console (blank screen) | 16:9 | Course · head; Ward · imaging; Students · Grace | |
| 15 | pharmacy-count.webp | student counting tablets on a counting tray with a spatula, labelled-free amber bottles | 16:9 | Fees · head; Course · hex band left edge | |
| 16 | placement-clinic.webp | student at a partner clinic reception area handing a cat carrier to an owner, bright waiting area | 3:2 | Course · hex band right edge; Students · Hana; post 2 | |
| 17 | college-building.webp | low brick-and-timber college building with a path, bike racks and young trees, morning, no signage | 16:9 | About · head; Contact · head | |
| 18 | openday-talk.webp | small group of visitors seated in a bright classroom listening to a tutor demonstrating a bandage on a soft model leg | 3:2 | Visit · head; Students · Leo; post 1 | |

- webp, ≤ 300 KB, ≤ 2000 px. Generate one at a time with `scripts/grok-image.sh`.
- Read every image. Regenerate on any of:
  - text, letters or digits (whiteboards, screens, bottles);
  - a logo;
  - a broken face, hand or paw;
  - blue or saturated scrubs;
  - blood;
  - a warm or dusky grade.
- No image twice on one page. **13 on home**, 18 in the theme, 0 cut-outs.

## 14. Fixed facts (brand.md must match; identical in all five languages)

- **Name**: Shirogane College, a veterinary nursing college. **Founded 2004** by Dr Margit Halvorsen (small-animal vet).
- **Address** (fictional): 14 Linden Yard, Ashbourne Vale. Bus 14 to Linden Yard, 4 min walk; bike racks; step-free.
- **Phone** +00 44 555 0172 (fictional). **Email** admissions@shirogane-college.example.
- **Hours**:
  - admissions office Mon–Fri 08:30–17:00;
  - teaching ward Mon–Fri 07:45–17:00, with a vet on site;
  - weekend feeds rota 08:00–11:00 (each student 1 weekend in 6);
  - closed on public holidays except the feeds rota.
- **Programme**:
  - Diploma in Veterinary Nursing, **2 years full-time**, **24 places per intake**, intakes **February and September**;
  - **6 students per tutor** on the ward;
  - **40 weeks** of placement across **22 partner clinics** and animal hospitals;
  - teaching ward with **18 kennels**.
  - Also offered: the Foundation certificate (10 weeks, part-time, Mon and Thu) and the Evening course for clinic staff (12 evenings, Tuesdays 18:30–21:00).
- **A training day** (day / daily routine, used on home §4 and `/training-day/`):

  | Time | Title | Place |
  |---|---|---|
  | 07:45 | Ward handover | Ward desk |
  | 08:30 | Morning rounds and observations (temperature, pulse, breathing, notes) | Kennels |
  | 10:00 | Practical class: handling, bandaging, injections on models | Skills room |
  | 12:00 | Lunch (training-day page only) | – |
  | 13:00 | Rotation: theatre assist or imaging & lab | Prep & theatre / Imaging |
  | 15:00 | Lecture: anatomy, pharmacology or nursing care | Lecture room |
  | 16:30 | Evening feeds, medication round, ward notes | Kennels |
  | 17:00 | Handover to the late vet | Ward desk |

  Home shows 7 rows (12:00 omitted).
- **February 2027 intake**:
  1. Open day **Saturday 16 January 2027, 10:00–13:00**; ward visits **Wednesdays 15:30–16:30**, up to 6 visitors.
  2. Apply by **Friday 8 January 2027** (form or email).
  3. Interview + handling session, 45 min, **11–20 January**.
  4. Offer within **10 working days**.
  5. Kit fitting and induction week **25–29 January**.
  6. Term starts **Monday 1 February 2027**.
- **Fees** (6):

  | Item | What it covers | Fee |
  |---|---|---|
  | Application | Interview and handling session | €40 |
  | Diploma tuition, per year (2 years) | All teaching, ward shifts and placement support | €6,900 |
  | Kit and scrubs (one-off) | 3 sets of scrubs, fob watch, stethoscope, bandage scissors | €260 |
  | Foundation certificate | 10 weeks, part-time | €1,150 |
  | Evening course for clinic staff | 12 evenings | €780 |
  | Ward taster day | 1 day, 09:00–15:00, ages 16+ | €45 |

  Note: tuition can be paid in **10 monthly instalments**. **4 bursaries per intake** cover half of the first year's tuition. Tuition is refunded in full until the end of induction week.
- **People** (7):
  - Dr Margit Halvorsen (founder and principal, vet)
  - Owen Mbeki (head of ward nursing)
  - Lucía Ferraz (theatre and anaesthesia tutor)
  - Ji-woo Han (imaging and lab tutor)
  - Tomasz Wierzbicki (pharmacy tutor)
  - Aisha Rahman (placements coordinator)
  - Pieter de Wit (admissions and student support)
- **Students** (3; describe their path, not outcomes or job guarantees):
  - **Hana Okafor, 34**: career changer from a bank, 2023 intake, placement in a city small-animal clinic.
  - **Leo Brandt, 19**: school leaver, 2024 intake, Foundation certificate first, placement in a mixed practice.
  - **Grace Liang, 46**: clinic receptionist, took the evening course, then joined the diploma; now in year two.
- **Footer**: address, office and ward hours, phone, email.
- **Do not claim**: guarantees, employment rates, awards, accreditation by a real body, real clinics, brands, media or real people. Animals on the ward are calm referred inpatients with owner consent. Say once on Ward: "We do not take emergencies; the nearest emergency service is listed on the Visit page."

## 15. Home acceptance checklist

- [ ] First screen is `split-photo-right / on-solid-panel / booking-bar`:
  - the pine panel with the hex point on the left, holding all hero text;
  - the photo set on the right;
  - three booking cells under it;
  - the first notice row visible at 1440 × 900 and 1280 × 800.
  - Nothing is overlaid on the photo.
- [ ] KV #1–6 visible:
  - img-01 shows two students in pale sage scrubs + a calm grey-white dog + a tutor at a bandage;
  - the split nav has caps sub-labels and dotted separators;
  - the 5 audience cells with dotted separators;
  - the hex-pointed panel;
  - the 3 entry cells with coloured top rules and dates;
  - the brick "Intake notice" label row.
- [ ] Cross-dissolve runs (18 s, overlapping) in `?sp-motion`. `?sp-static` and reduced motion show img-01 only.
- [ ] T1:
  - 6 interlocking flat-top hexagons, 268 × 232, step 200, row offset 150, six fills;
  - dog photo and kit photo peeking behind at both band edges;
  - hover drop 15 px.
- [ ] T2: five equal dotted cells under the header and expanded in §3. T3: 6 pickup tiles with 80 px square icon thumbs flush left, 1 px frame, under-only shadow.
- [ ] §4 day schedule: 2 sticky 4:5 photos with time rows scrolling beside them. 7 times match §14.
- [ ] Parallax ≥ 6 px on the ward band (desktop + mobile) via `check-parallax.mjs`. Hex-band left photo moves at 8 %.
- [ ] 13 home images, 18 total, no repeats within a page, 0 cut-outs.
- [ ] Type:
  - H1 4.5rem Manrope 800;
  - Manrope / Source Sans 3 in the editor and on the front end;
  - zh-TW / ja heading stacks with Noto Sans TC / JP (gothic).
- [ ] Price table full width at 800 and 1280, fee column nowrap and right-aligned, not cut; stacked at 390.
- [ ] 390 px: no overlap, no vertical labels, no absolute labels over text, no horizontal page scroll. Audience chips scroll inside their own row.
- [ ] Effects only up / stagger / parallax / count + hero dissolve. None in the hero, notices, audience row, table or form.
- [ ] ≥ 900 English words; ≥ 3 narrative paragraphs ≥ 20 words. All numbers match §14 (24 places, 6 per tutor, 40 weeks, 22 clinics, 8 Jan, 16 Jan, 1 Feb, €6,900 …).
- [ ] Newsletter slot in §12 only (not in the first screen, no reveal). Exactly one top menu. First-screen saturation ≤ 8 % (cap 15 %).

## 16. Similarity table (target ≈ 80 %, values from `reference-tokens.md`)

| Dimension | Reference value (token) | Shirogane College |
|---|---|---|
| Ground / pale band | #FFFFFF ~55 %; pale lilac #EADDEE, grey #EAEDF2 `tok(a)` | #FFFFFF ~55 %; pale sage #EDF0E6 (same L), grey #EEF1F2 |
| Deep colour and its uses | #7B2482 on h2, nav, icons ~3 % `tok(a)` | #5C6B48 on caps H2, icons, Apply, panels (plan hue) |
| Multi-colour set | six saturated hex fills, only on course tiles `tok(a)` | six muted fills in the same hue slots, only on hexes + 3 booking rules |
| Notice accent | #FF1054 label cell + 1 px frame `tok(a)(f)` | #B5472F label cell 150 px + 1 px frame |
| First-screen saturation | 2 % (Azabu) / 30 % (Yamazaki) `tok(a)` | ≤ 8 % (cap 15 %) |
| Header | 2 tiers: nav with 8 px Latin caps sub-labels + dotted separators; 5-cell audience row 62 px `tok(b)(c)` | 2 tiers: split nav with 10 px caps sub-labels + dotted separators (80 px); 5-cell audience row 56 px |
| Hero | full-viewport documentary photo set cross-dissolving (Azabu); flat panel + curved edge, photo right 58 %, entry strip (Yamazaki) `tok(e)` | split: pine panel with hex point + photo set right 56 %, cross-dissolving; booking bar of 3 cells (plan composition) |
| Hex tiles | 6 flat-top, 260 × 232, step 200, row offset 150, labels 24 px + 10 px caps, hover 15 px / .8 / .4 s; photos behind at both edges; band 378 px `tok(e)(f)` | 6 flat-top, 268 × 232, step 200, row offset 150, labels 1.5rem + 0.6875rem caps, hover 15 px / .8 / .4 s ease; dog + kit photos behind at both edges; band 460 px |
| Pickup tiles | 314 × 82, gap 20, 80 × 80 thumb flush left, 1 px #E0E0E0, shadow 0 8px 8px -6px rgba(0,0,0,.2) `tok(c)(d)` | 380 × 82, gap 20, 80 × 80 icon thumb flush left, 1 px #E0E0E0, same shadow |
| Section heads | Latin word in brand colour + small subtitle on the baseline + 1 px black rule; h2 23.8 px 700 `tok(b)` | caps H2 Manrope 800 1.75rem pine + 0.875rem subtitle on the baseline + 1 px #232820 rule |
| Type | Montserrat + JP gothic, body 14 / 22.4; Yamazaki Noto Sans JP H1 33.7 / 49 700 `tok(b)` | Manrope + Source Sans 3, Noto Sans TC / JP gothic; body 16 / 1.75; H1 72 px 800 |
| Spacing | container 980 / 1040; sections 80–100 px `tok(c)` | container 1200; sections 96 px |
| Radius / border / shadow | r 0 everywhere; pill chips (Yamazaki); 1 px #E0E0E0; dotted separators; shadow only under pickup tiles `tok(d)` | r 0 everywhere; pill chips; 1 px #E0E0E0 + dotted #9AA190; shadow only under pickup / story tiles |
| Imagery | documentary photos of students and animals, real faces; banners 2.13 : 1; news thumbs 80 × 80; photo behind hex tiles `tok(e)` | high-key documentary ward photos, real faces, calm animals; news thumbs 80 × 80; photos behind hex tiles; 4:5 sticky day photos |
| Motion | hero `slideShow` 18 s linear, 3 s offsets, overlapping fades; hex hover .4 s; float menu fade 400 ms `tok(g)` | hero dissolve 18 s linear, 1.5 s overlapping fades; hex hover .4 s ease; reveal-up .6 s 20 px; parallax 10 % / 8 % / 6 %; count 1.2 s |
