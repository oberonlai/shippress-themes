# Kesho College: design spec (stage 1, binding for implementation)

Slug `kesho-college`, hairdressing and beauty college for future salon juniors, type **education** (WooCommerce compatible, not required; site works fully without it). Design-plan row b17-2: archetype split-screen, nav **centered**, first screen three-equal-columns, page structure **day-schedule**, palette grape-mauve (row hex `#6B5A68`), fonts Cormorant Garamond / Karla, font_direction **serif**, CJK Noto Serif TC / Noto Serif JP, photo_direction high-key.

Single main reference: **YOIKU** https://yoiku-salon.com/ (S5-Style #8997, hair salon). All numbers below come from `brand/reference-tokens.md` (token letters (a)–(g)) unless marked "ours". We borrow structure, technique, colour relations, motion values and the key-visual concept; never their photos, copy or logo.

Imagery: **photo** (stage-a IMAGERY = photo; the reference is editorial portrait photography).

---

## 1. Signature techniques (three, obvious at a glance; do not soften)

### T1. Three tall 2:3 portrait panels, edge to edge, drifting left (YOIKU first screen)
- Reference: three 600×900 (2:3) photographs fill the whole first screen at 1440, no gap, no radius, no border; the first panel is cut by the left viewport edge; the strip drifts left continuously (CSS ticker, linear, ≈42 px/s) (tokens e, g).
- Ours, home hero: one track of **4 distinct photos** (k-01…k-04), each panel `width: 41.7vw; aspect-ratio: 2/3` desktop (= 600px at 1440), `height: calc(100vh - 88px)` capped `min(…, 900px)`, `object-fit: cover`, radius 0, gap 0. Track starts at `translateX(-12vw)` so the first panel is visibly cut by the left edge (the reference's cut). Uses `sp-marquee` (pattern duplicates the group as `aria-hidden`; that duplicate is the loop mechanism, not a repeated photo slot).
- Must not be softened: no gaps, no rounded corners, no overlay tint over the photos, no white frames, panels really touch the viewport sides.
- Mobile 390: panel width 64vw (≈250px), height `min(78svh, 640px)`; still flush, still drifting.

### T2. Giant display word pinned to the bottom edge and clipped by it (YOIKU "HI-BASIC")
- Reference: 207px, lh .9, 2 lines, caps, accent colour, starting at x≈20, sitting over the panels and cut by the bottom of the viewport (≈35% of line 2 hidden) (token b, g).
- Ours: H1 **"LEARN / BY HAND"** (2 lines, `<br>`), Cormorant Garamond 700, `font-size: clamp(4.25rem, 14.4vw, 13rem)` (13rem = 208px ≈ token 207px), `line-height: .9`, `letter-spacing: -.01em`, uppercase, colour accent `#D9B6CF`. Absolutely positioned inside the hero (`left: 20px; bottom: 0; transform: translateY(32%)`) and the hero has `overflow: clip`, so the lower ≈32% of line 2 is cut by the hero bottom edge. Static (not in the moving track, not a reveal).
- Small sub-line (ours, needed for a real school): Karla 600 0.8125rem caps ls .12em white, on a `#120E12` chip (padding 6px 10px) at top-left of the hero (left 20px, top 24px): "HAIRDRESSING & BEAUTY COLLEGE · SINCE 2009". Horizontal only.
- zh-TW / ja: H1 becomes 2 lines of Noto Serif TC/JP 700 at `clamp(3.2rem, 10.8vw, 9.75rem)` (≈0.75×), lh 1.0, still clipped at the bottom. fr/de: same as en, `hyphens: manual` (no auto hyphenation in the H1); de "LERNEN / MIT HAND" is long → `clamp(3.8rem, 12vw, 11rem)` for `:lang(de)` and `:lang(fr)`.
- Must not be softened: the word is huge, overlaps the photos, and is visibly cut by the bottom edge.

### T3. Centred concept block, then a wide photo whose oversized caption overlaps its bottom edge, plus a small accent "VIEW MORE →" link (YOIKU "What is YOIKU?")
- Reference: concept block padding 150px 0, eyebrow Spartan 800 14px ls 1px, H2 60px lh 1.4 centred, body 16/2.0 centred; then a 1100×704 (≈16:10) photo centred, caption 90px lh 1 ls 6px white over the photo's bottom-left with `margin-top: -120px`, then a centred accent "VIEW MORE" link 18px with ~26px arrow (tokens b, c, e).
- Ours, home blocks 2–3: concept "Who the intake is for" + wide photo k-05 (instructor demonstrating a long-layer cut to a semicircle of students), caption **"A Training Day"** Cormorant Garamond 700 `clamp(3rem, 6.25vw, 5.625rem)` (5.625rem = 90px) lh 1 ls .06em white, `margin-top: -120px` (mobile −56px), left aligned to the photo's left edge, then the link **"SEE THE DAY →"** Karla 800 1.125rem ls .06em accent `#D9B6CF`, arrow 26px line glyph, centred, 40px under the caption.
- The photo sits in an `sp-parallax` wrapper (see §8).

(T4 square tiles from YOIKU news/blog are used as supporting structure for courses and journal, not counted as a signature.)

### Continuation to inner pages (at least 4; here all 10)
Every inner page uses an **inner hero = T1+T2 reduced**: a strip of 3 flush 2:3 panels at `height: 62vh` (min 460px, mobile 52svh) showing that page's own photos (static, no marquee on inner pages so the home stays special) with the page title as a giant Cormorant 700 word `clamp(3.5rem, 10vw, 9rem)` lh .9 accent, bottom-left, clipped by the strip bottom by 28%. Inner heroes use 1 page photo + 2 photos already used on *other* pages (never repeated on the same page).
- **About**: T3 — centred story block + wide photo k-13 with caption "Since 2009" overlapping −120px + link "MEET THE INSTRUCTORS →".
- **A Training Day**: T3 caption "08:45 – 17:00" over k-05's sibling k-14 + the full hour rows (§3 block 4).
- **Courses**: T4 squares for the 6 programmes + T3 caption "Six ways in" over k-06.
- **Instructors**: T2 again — each instructor's surname set as a giant Cormorant 700 6rem accent word clipped by the bottom of their 2:3 portrait (only 2 portraits, k-11 and k-12; others text rows).
- **Student Salon**: T3 caption "Open to the public" over k-10, link "BOOK A CHAIR →".
- **Graduate Stories, Admissions, Tuition & Intakes, FAQ, Visit**: T1+T2 inner hero + accent "→" links; Visit has T3 caption "Harbour Lane" over k-16.

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
YOIKU's first screen is nothing but three tall editorial portraits of different clients (close crops, faces cut by frame edges, soft daylight, plain walls, slight motion blur) laid edge to edge, slowly sliding left forever, with one enormous yellow word "HI-BASIC" sitting on the bottom edge and cut by it. The story: the salon is simple but high quality, it blends into the town without disappearing; people, not products, carry the message. Signature motion: the endless slow leftward drift of the photo strip while the headline stays still; below, blocks rise in with fadeInUp.

### (2) Our transfer scene
A hairdressing and beauty college: the first screen is three tall high-key daylight portraits of **people learning the craft**, cropped close like the reference (hands, shears, a profile cut by the frame edge), drifting slowly left; the still giant word **LEARN / BY HAND** in light mauve sits on the bottom edge and is cut by it. Story: "you learn this trade by hand, next to someone who does it every day". Same composition (3 equal 2:3 panels, flush), same motion concept (slow linear leftward drift, static word), same image type (editorial real photography, soft daylight, plain pale walls, a little motion blur on hands).

### (3) KV checklist (all six visible on the home first screen at 1440×900 and 390×844)
| # | Reference element | Our counterpart | Position | Motion | Photo |
|---|---|---|---|---|---|
| 1 | Three 2:3 portrait panels, flush, first cut by the left edge | 3 visible flush 2:3 panels (4 in the track), first cut by the left edge | full width under the 88px header | `sp-marquee` leftward, ≈42px/s (58s per group at 1440) | k-01, k-02, k-03, k-04 |
| 2 | Client portrait close-up, face cropped at frame edge | Instructor's hand guiding a student's shears at a mannequin head, both faces cropped by panel edge | panel 1 (cut by left edge) | drifts with track | k-01 |
| 3 | Full-length figure on plain wall, motion blur | Student in a plain apron turning while finishing a blunt bob on a mannequin, slight blur on the arm | panel 2 (centre) | drifts with track | k-02 |
| 4 | Profile portrait with hand near face, knit texture | Student applying makeup to a model, model's profile with closed eyes, brush near cheek | panel 3 (right) | drifts with track | k-03 |
| 5 | Giant 207px accent caps word on the bottom edge, clipped | "LEARN / BY HAND" Cormorant 700 13rem lh .9 `#D9B6CF`, bottom 32% clipped | bottom-left over panels 1–2 | static (no reveal) | — |
| 6 | Wordmark with one tinted letter | "Kesho College" wordmark, centred (row nav = centered), final "e" in accent | header centre | none | — |

(k-04, the 4th panel, enters from the right during the drift: student blow-drying a classmate's hair.)

---

## 3. Home page

### Header (all pages)
Solid `#120E12` bar, height 88px desktop / 64px mobile, not overlaid on photos (photos are high-key: white text over them would fail). Three zones: left = primary links (Courses, A Training Day, Tuition & Intakes, Student Salon) Karla 700 0.8125rem caps ls .1em white; **centre = wordmark** "Kesho College" Cormorant Garamond 700 1.75rem ls .02em white, last "e" `#D9B6CF`; right = About, Instructors, Visit + language switcher + accent "APPLY →" link. Mobile: wordmark centred, hamburger (3 bars 40×2px radius 9999 white, token f; on mobile 28×2px) right, panel menu full screen `#120E12`. One menu only.

### First screen composition (1440×900)
Header 88px → hero 812px: T1 track (k-01..k-04) with T2 word bottom-left and the small sub-line chip top-left. Nothing else: no button, no text block (matches reference). 390×844: header 64px, hero 78svh with 1.5 panels visible, H1 at 4.25rem (68px) in 2 lines bottom-left, chip top-left; no vertical text, no absolutely positioned label other than the chip, which must not overlap the H1 (chip top, H1 bottom; min 200px apart).

### Block order (home)
| # | Block | Purpose | Layout & photos | Copy |
|---|---|---|---|---|
| 1 | Hero (T1+T2) | Key visual | 4 flush 2:3 panels k-01..k-04, marquee; giant H1 | H1 + 1 chip line |
| 2 | Who the intake is for (T3a) | Concept | centred, max 760px, padding 150px 0 (mobile 96px); eyebrow "WHO THE INTAKE IS FOR" Karla 800 0.875rem ls .07em accent; H2 Cormorant 600 3.75rem lh 1.4 white; 2 paragraphs Karla 400 1rem lh 2.0 `#CFC6CD` centred; title→text 30px | ~110 words |
| 3 | A Training Day (T3b) | Bridge to schedule | 1100px (76vw) photo k-05 16:10, `sp-parallax --sp-par:10%`; caption overlaps −120px; accent link centred | caption + link |
| 4 | The day, hour by hour (day-schedule) | Page_structure row requirement | full container 1100px; 6 hairline rows (1px `rgba(255,255,255,.16)` top), grid `140px 260px 1fr 240px`: time Cormorant 600 2.5rem accent / title Karla 700 1.0625rem white / 1–2 sentences Karla 0.9375rem lh 1.85 `#CFC6CD` / 3:2 thumbnail (rows 1, 3, 5 only: k-06, k-07, k-08). Section title "08:45 – 17:00" Cormorant 600 3.75rem left. Mobile: rows stack (time → title → text → thumb full width). This is a list, not a vertical timeline (no line/dots). | ~150 words |
| 5 | Courses (T4) | Programmes | heading "SIX WAYS IN" Cormorant 700 3.75rem ls .02em centred; 3 square tiles 1:1 (max 480px, gutter 30px) k-09 Hairdressing Diploma, k-10 Barbering, k-11 Makeup & Nails; title inside bottom-left Cormorant 600 2rem white over a bottom gradient `linear-gradient(transparent 55%, rgba(18,14,18,.72))`; duration + "from €" Karla 0.8125rem; hover image scale 1.1 .3s `cubic-bezier(.13,1.05,.96,1)`; under tiles 3 text-only links for Nails, Evening Colour, Taster Saturday | ~60 words |
| 6 | Taught by working stylists | People | split: left 5/12 photo k-12 (3:4, flush to the container left, radius 0); right 7/12: intro paragraph + 6 hairline name rows (name Cormorant 600 1.5rem / role Karla 0.875rem `#B9B0B7`); link "MEET THE INSTRUCTORS →" accent | ~90 words |
| 7 | When the next class begins (tuition & intakes table) | Price table | **full container width at ≥782px**; 6 rows: course / length / next intake / tuition; tuition column `white-space: nowrap; text-align: right`, Cormorant 600 1.5rem white; hairlines; no reveal. ≤781px each row stacks (course on top, then length · intake, price right-aligned on its own line). Footnote: kit €420 (Diploma, Barbering), deposit €300. | table + 1 note |
| 8 | Graduates (3 stories) | Proof | 3 columns, each: 1px accent top rule, quote Cormorant italic 500 1.5rem lh 1.5 white, name + course/year Karla 0.8125rem caps; no photos (keeps the page from becoming a grid of faces) | ~120 words |
| 9 | Open morning (closing band) | CTA | full-bleed photo k-13 (16:7) with `sp-parallax --sp-par:8%`, centred on top a `#120E12` box (max 560px, padding 56px): H2 "Come to an open morning" Cormorant 600 3rem, date line, address, button "BOOK A PLACE" (Karla 800 0.875rem ls .08em, bg `#D9B6CF`, text `#120E12`, radius 0, padding 16px 32px) | ~40 words |
| 10 | Footer | Info | 4 columns on ground: wordmark + 1 line; address & hours; courses links; language + social text links; bottom rule `rgba(255,255,255,.16)` | — |

Home photo slots: k-01, k-02, k-03, k-04, k-05, k-06, k-07, k-08, k-09, k-10, k-11, k-12, k-13 = **13** (≥8). English body ≥250 words, ≥3 narrative paragraphs (block 2 ×2, block 6, block 8).

### Comparison with recent home block orders
| Theme | Order |
|---|---|
| Hatake Greens | hero → intro strip → why statement → 3:2 cards → full photo → 3 time cards → plan → members → FAQ → join band |
| Yoru Bar | KV 50/50 split → service → 3 strips list → circle story → white build wash → seats → notes rows |
| Suzu Ballet | arch hero → day strip → intro 2col → 3 reasons → panel+lattice → day by hour → parallax band → stories → trial |
| Kura Wine | full-bleed KV → scattered about → alternating shipment rows → bottle masonry → 50/50 split → event → info band |
| **Kesho College** | drifting 3-panel strip + clipped giant word → centred concept → wide photo with overlapping caption → hour rows with thumbnails → 3 square tiles → portrait + name rows → full-width tuition table → text quotes → parallax band with boxed CTA |

Why it is not similar: no other theme has a moving multi-panel hero or a clipped giant word; Suzu also had a day schedule, but as hour columns after a 3-reasons block on a light tint with an arch, while ours is hairline rows with inline 3:2 thumbnails on a near-black ground, preceded by the T3 caption-overlap photo; Yoru's dark ground is used in a 50/50 split with tan serif, ours is a full-width dark editorial page with a lilac accent and no split hero; nobody else uses square course tiles with titles inside.

---

## 4. Inner pages (10 + news)
| Page | Key content |
|---|---|
| About | Founded 2009 by Amara Lindqvist; method "demonstrate → practise on blocks → work on real clients"; class size max 14, ratio 1:7 on the floor; T3 "Since 2009" (k-13 is home, so About uses k-14); values in 3 hairline rows |
| Courses | 6 programmes as T4 squares (k-09, k-10, k-11 reused here only on this page's tiles — different page from home is allowed) with length, hours, tuition, next intake; T3 caption "Six ways in" over k-06 |
| Hairdressing Diploma | 12 months, modules (cutting, colour, chemistry, salon floor, business basics), weekly hours 30, assessment, kit list |
| A Training Day | full 6 hour-rows with photos k-14, k-07, k-08; what to bring; dress code |
| Tuition & Intakes | the same 6-row table as home (identical numbers), payment in 3 instalments, deposit €300, kit €420, refund policy summary |
| Instructors | 7 named people: 2 large portraits (k-12, k-15) with clipped surname (T2), 5 text rows |
| Student Salon | public can book services with supervised students; 3 prices (cut & finish €18, colour from €35, beard trim €10), hours Tue–Sat 10:00–16:00; photo k-10 + k-16 |
| Graduate Stories | 3 stories (same people as home, longer: 150 words each), photos k-03 and k-15 |
| Admissions | 4 steps (open morning → 1-hour practical trial → interview → offer & deposit), documents, age 16+, no prior experience needed; rows, not a grid |
| FAQ | 8 questions in `<details>` hairline rows |
| Visit / Contact | address, hours, map placeholder block (no embed), contact form (no reveal), open morning dates; T3 caption "Harbour Lane" over k-16 |
| Journal (blog index) | T4 square tiles 2–3 across, title inside |

---

## 5. Colour
Reference relation (token a): near-black ground 90 / white text 8 / one bright accent 2, colour carried by the photos (pastel). We keep the exact relation and the dark ground (contrast is the reference's character; Tsumugi lesson: do not pale it). Only the accent hue changes.

| Role | Hex | Share | Source |
|---|---|---|---|
| Ground | `#120E12` | ≈88% of lower pages; ≈10% of first screen (header) | token (a) `#070707`, +4% lightness with a grape-mauve tint (within ±5%) |
| Text | `#FFFFFF` | ≈8% | token (a) `#FFFFFF` |
| Body text soft | `#CFC6CD` | body paragraphs | ours (white at ~80% on ground) |
| Muted | `#B9B0B7` | roles, notes | ours |
| Accent | `#D9B6CF` (light grape-mauve/lilac mauve) | ≈2% lower pages; first screen ≈9% (the giant word) | **replaces** token (a) `#FAB128`. Reason: the row palette is grape-mauve and "quiet"; a yellow word on beauty-college portraits reads as discount signage, and YOIKU's own logo tint is mauve, so the hue stays within the reference family |
| Deep mauve | `#6B5A68` | button hover bg, focus rings, table row hover | row hex |
| Hairline | `rgba(255,255,255,.16)` | rules | ours (reference has none on dark; needed for rows) |

Photos carry pastel blue-grey, sage and warm skin like the reference (via STYLE). First-screen saturated share target ≤10% (the accent is low-saturation, HSL S≈33%); hard ceiling **15%** (check-first-screen.py) and row ceiling 30%. Contrast: `#D9B6CF` on `#120E12` ≈ 10.9:1; `#CFC6CD` ≈ 12:1; button text `#120E12` on `#D9B6CF` ≈ 10.9:1.
Do not use: beige/cream grounds, tan accents (Yoru), sage grounds (Hatake), any light page ground.

## 6. Type (font_direction serif)
- Latin display/headings: **Cormorant Garamond** 500/600/700 + 500 italic. Latin body, labels, nav, buttons: **Karla** 400/700/800 (reference pairs a heavy geometric label face with headings; Karla stands in for Spartan). Both loaded via **theme.json fontFamilies + fontFace** (woff2 in `assets/fonts/`), so editor and front end match.
- Stacks:
  - heading: `"Cormorant Garamond", "Noto Serif TC", "Noto Serif JP", Georgia, serif`
  - body: `Karla, "Noto Serif TC", "Noto Serif JP", system-ui, sans-serif`
  - `:lang(zh-TW)` headings and body: `"Noto Serif TC", "Cormorant Garamond", serif`; `:lang(ja)`: `"Noto Serif JP", "Cormorant Garamond", serif` (Mincho-style serif for both headings and body; no Gothic mixing). zh-TW/ja subset woff2 in fontFace (Hokuto/Hada replacement method; the CJK subset script is broken). Because style.css uses `:lang(`, copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it.
- Scale (theme.json fontSizes): `small` 0.8125rem, `base` 1rem (token b body 16px, lh 2.0), `medium` 1.5rem, `large` 2.5rem, `x-large` 3.75rem (token b H2 60px, lh 1.4), `xx-large` 5.625rem (token b caption 90px, lh 1, ls 6px → .06em), `display` `clamp(4.25rem, 14.4vw, 13rem)` (token b 207px, lh .9). Largest ≥4.25rem ✔.
- Eyebrows: Karla 800 0.875rem ls .07em caps (token b 14px ls 1px). Links: Karla 800 1.125rem accent + 26px arrow (token b/f).
- CJK: sizes ≈0.75× of Latin, body lh 1.85, letter-spacing .04em; fr/de `hyphens: auto` on body (not on the H1).

## 7. Spacing, radius, decoration (tokens c, d, f)
- Container 1100px (token c), side padding 20px mobile / 40px tablet. Section padding 150px 0 (concept), 160px gaps between sections (token c ≈160px); mobile 96px.
- Title→text 30px, text→image 80px (token c). Card gutter 30px.
- Radius 0 everywhere, no borders except hairline rows, no shadows (token d).
- Decoration only: hamburger bars 40×2 radius 9999 (token f), accent wordmark letter, 26px arrow on links. No dots, numbers-in-circles, lines across words, grain.

## 8. Scroll effects (sp-scroll, from stage-a candidates)
| Effect | sp-* class | Where | Source & timing |
|---|---|---|---|
| fadeInUp | `sp-reveal sp-reveal--up` with `--sp-dur: 1s; --sp-ease: ease; --sp-dist: 24px` | block 2 eyebrow/H2/text, block 3 caption + link, block 4 section title, block 6 text column, block 8 quotes, block 9 box; inner-page T3 blocks. **Not** on hero, tuition table, forms, FAQ | YOIKU WOW.js + animate.css fadeInUp, 1s, delay 0, ease, offset 200px, ≈20–30px |
| Stagger | `sp-stagger` on the parent of block 5 tiles and block 8 columns (children `sp-reveal--up`) | courses tiles, graduate quotes | YOIKU each item fades in as it enters (not staggered on the reference; small 0.12s step keeps the feel) |
| Marquee | `sp-marquee` on the hero track Group; theme CSS overrides duration only: `.kc-hero .sp-marquee > * { animation-duration: 58s }` desktop, `30s` ≤781px | home hero only | YOIKU CSS ticker, linear infinite, ≈42px/s leftward |
| Parallax | `sp-parallax` (see below) | blocks 3 and 9 | added (YOIKU has none; required) |
Reveal count ≤60% of home blocks; hero 0 reveals.

### Parallax (required)
- **Block 3** (primary): wrapper Group `.kc-wide sp-parallax`, `overflow: clip`, 1100×688 (16:10), direct `figure > img` = **k-05**; `--sp-par: 10%` desktop, `--sp-par: 7%` ≤781px (kept on mobile). Foreground = the overlapping caption and link, which sit **outside** the moving layer (caption is a sibling after the wrapper with `margin-top:-120px; position:relative; z-index:2`).
- **Block 9**: Cover `alignfull sp-parallax`, background image **k-13**, `--sp-par: 8%` (mobile 6%); foreground = the `#120E12` CTA box, not moving.
- Reference correspondence: YOIKU's motion is the slow sideways drift of photos behind a still word; our parallax keeps that "photo moves, type stays" relationship vertically. Verified by `check-parallax.mjs` (≥6px desktop and mobile, 0 under reduced motion).

## 9. Responsive rules
- 390px first screen: no vertical text, no absolutely positioned label overlapping text (only the chip at top-left; H1 bottom-left; ≥200px apart); no horizontal overflow (marquee track inside `overflow: clip`).
- Tuition table (home block 7, Tuition page, Courses page): at ≥782px full container width, price column `white-space: nowrap; text-align: right; min-width: 9ch`, never cut at 800 or 1280. ≤781px every table becomes stacked rows (`display:block` per row, label above value).
- Hour rows (block 4), name rows, all tables stack on mobile. T3 caption shrinks to clamp min 3rem and overlap −56px. Square tiles 1 per row ≤600px, 2 per row 601–1023px.

## 10. Photos (16, Grok, one at a time, read each one)
STYLE (identical for every image):
`IMAGE_STYLE="high-key editorial real photography, soft diffused daylight from a large window, plain pale grey-white plaster wall backdrop, muted pastel palette of powder blue-grey, sage and warm skin tones with a hint of dusty mauve, natural fine film grain, slight motion blur on moving hands, close intimate crops with faces or bodies cut by the frame edge, shallow depth of field, modern international training salon, diverse students and instructors aged 18 to 55, no text, no logos, no brand names, no Japanese elements, not glossy, not advertising"`

| ID | Subject / composition | Ratio | Used on (one place per page) | Home |
|---|---|---|---|---|
| k-01 | Instructor's hand guiding a student's hand holding shears at a mannequin head, both faces cut by the frame | 2:3 | Home hero panel 1; Hairdressing Diploma hero | ✔ |
| k-02 | Student in plain apron finishing a blunt bob on a mannequin, turning, slight blur | 2:3 | Home hero panel 2; About hero | ✔ |
| k-03 | Student applying makeup to a model, model's closed-eye profile, brush near cheek | 2:3 | Home hero panel 3; Graduate Stories | ✔ |
| k-04 | Student blow-drying a classmate's hair, round brush, hair in motion | 2:3 | Home hero panel 4; Courses hero | ✔ |
| k-05 | Instructor demonstrating a long-layer cut, semicircle of students watching, wide | 16:10 | Home block 3 (parallax) | ✔ |
| k-06 | Morning: mannequin heads lined on a bench, students sectioning hair with clips | 3:2 | Home block 4 row 1; Courses T3 | ✔ |
| k-07 | Afternoon: student cutting a real client's hair at a salon chair, instructor watching from behind | 3:2 | Home block 4 row 3; A Training Day | ✔ |
| k-08 | Critique: students and instructor looking at finished mannequin heads on a table | 3:2 | Home block 4 row 5; A Training Day | ✔ |
| k-09 | Hands with comb and shears over wet hair, top-down | 1:1 | Home tile 1; Courses tile | ✔ |
| k-10 | Barbering student doing a skin fade with clippers on a client | 1:1 | Home tile 2; Student Salon | ✔ |
| k-11 | Nail and makeup station: student painting a model's nails, pale palette | 1:1 | Home tile 3; Courses tile | ✔ |
| k-12 | Instructor portrait, arms crossed holding shears, face partially cut by frame | 3:4 | Home block 6; Instructors | ✔ |
| k-13 | Bright empty training salon, row of chairs and mirrors, daylight | 16:7 | Home block 9 (parallax) | ✔ |
| k-14 | Student sweeping hair clippings at day's end, long window light | 16:10 | About T3; A Training Day hero | |
| k-15 | Second instructor portrait, colour bowl and brush, profile | 3:4 | Instructors; Graduate Stories | |
| k-16 | Street-level entrance of the college, glass door, plants, no signage text | 16:10 | Visit T3; Student Salon | |
Same-page rule: no ID twice on one page (the marquee's aria-hidden duplicate is the only exception). All ≤300 KB, ≤2000px, webp, no cut-outs. Inner heroes pick 3 IDs not used elsewhere on that page.

## 11. Fixed facts (identical on home, inner pages, all 5 languages)
- Founded **2009**. Address: **14 Harbour Lane, Lindmoor** (fictional). Office Mon–Fri 09:00–17:30. Classes Mon–Fri 08:45–17:00. Student Salon Tue–Sat 10:00–16:00. Open mornings: first Saturday of each month, 10:00.
- Class size max **14**; floor ratio **1:7**.
- Tuition (6 items, EUR):
  | Course | Length | Next intake | Tuition |
  |---|---|---|---|
  | Hairdressing Diploma | 12 months, full-time | 6 Sep 2027 (also 1 Mar 2027) | €8,400 |
  | Barbering Certificate | 6 months, full-time | 11 Jan 2027 | €4,600 |
  | Makeup Artistry Certificate | 4 months, part-time | 8 Feb 2027 | €3,200 |
  | Nail Technology Certificate | 3 months, part-time | 19 Apr 2027 | €2,400 |
  | Evening Colour Course | 10 weeks, 2 evenings | 2 Mar 2027 | €1,350 |
  | Taster Saturday | 1 day | first Saturday monthly | €95 |
  Kit €420 (Diploma, Barbering); deposit €300; 3 instalments.
- People (7): Amara Lindqvist (founder & principal, colour), Theo Marchetti (head of cutting), Nadia Okafor (barbering lead), Inês Duarte (makeup), Hana Kowalski (nails), Samuel Reyes (Student Salon manager), Clara Weiss (admissions).
- Stories (3): Lucía Ferrer (Diploma 2024, now a junior stylist at a neighbourhood salon), Jonah Petrov (Barbering 2025, now renting a chair), Aisha Rahman (Makeup 2023, freelance for weddings and theatre). No real brands, no guaranteed-job claims.
- Day schedule (6 rows): 08:45 Floor opens & set-up · 09:00 Demonstration · 10:15 Block practice on mannequins · 12:30 Lunch · 13:30 Student Salon with real clients · 16:15 Critique & clean-down (close 17:00).
- Admissions: 4 steps (open morning → practical trial 1 hour → interview → offer & €300 deposit). Age 16+. No experience needed.

## 12. Home acceptance checklist
1. First screen 1440×900: header bar + 3 flush 2:3 panels (first cut by the left edge) + giant clipped "LEARN / BY HAND" in `#D9B6CF`; nothing else. KV items 1–6 all visible.
2. Marquee drifts left at ≈42px/s, H1 static; reduced-motion: static.
3. 390×844: 1.5 panels, H1 68px two lines bottom-left, chip top-left, no overlap, no vertical text, no horizontal overflow.
4. T3: concept block centred + 1100px photo with caption overlapping its bottom by 120px + accent link.
5. Parallax on block 3 (k-05) and block 9 (k-13) passes check-parallax (desktop + mobile ≥6px, reduced 0).
6. Reveals 1s ease ~24px on ≥3 off-screen blocks; none on hero/table; nothing left hidden at the end.
7. 13 distinct photos on home, none repeated; all match STYLE; no text/logos.
8. Tuition table full width at 800 and 1280, prices nowrap right; stacked on mobile; numbers equal §11.
9. Ground `#120E12`, accent only `#D9B6CF`, radius 0, no shadows; saturated first-screen share ≤15%.
10. Fonts from theme.json fontFace, same in editor and front end; zh-TW/ja in Noto Serif TC/JP.
11. ≥250 English words, ≥3 narrative paragraphs; centred nav with one menu.

## 13. Similarity to reference (target 80%)
| Dimension | Reference (token) | Kesho College |
|---|---|---|
| Ground | `#070707` (a) | `#120E12` (+4% L, mauve tint) |
| Text | `#FFFFFF` (a) | `#FFFFFF` |
| Accent | `#FAB128`, 2% / 10.6% first screen (a) | `#D9B6CF`, 2% / ≈9% first screen |
| Colour ratio | 90 / 8 / 2 (a) | 88 / 8 / 2 (+2 photos) |
| Hero panels | 3 × 600×900 2:3, flush, 0 radius (e) | 3 visible × 41.7vw 2:3, flush, 0 radius |
| Hero motion | ticker linear, ≈42px/s left (g) | sp-marquee linear, 58s/group ≈42px/s left |
| Giant word | Spartan 900 207px lh .9 caps, clipped bottom (b) | Cormorant 700 13rem (208px) lh .9 caps, clipped 32% |
| H2 | 60px lh 1.4 centred (b) | 3.75rem lh 1.4 centred |
| Body | 16px lh 2.0 centred (b) | 1rem lh 2.0 centred (concept) |
| Caption overlap | 90px lh 1 ls 6px, −120px (b) | 5.625rem lh 1 ls .06em, −120px |
| Container / padding | 1100px, 150px, gaps 160px (c) | 1100px, 150px, 160px |
| Radius / shadow | 0 / none (d) | 0 / none |
| Concept photo | 1100×704 ≈16:10 (e) | 1100×688 16:10 |
| Tiles | 480px squares, title inside, hover scale 1.1 .3s (e, g) | ≤480px squares, title inside, scale 1.1 .3s `cubic-bezier(.13,1.05,.96,1)` |
| Reveal | fadeInUp 1s ease, ≈20–30px (g) | sp-reveal--up 1s ease 24px |
| Parallax | none | added (required): k-05 10%, k-13 8% |
| Decoration | hamburger 40×2 r9999, tinted logo letter, 26px arrow (f) | same |
| Nav | logo left, hamburger right | centred wordmark + links (row nav = centered) |
Own work only: photos generated, copy written by us, no YOIKU logo/text/images.
