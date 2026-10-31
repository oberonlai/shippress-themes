# Hibana College: design spec (stage 1, binding for implementation)

Slug `hibana-college`, welding and metal-fabrication trade school for adults changing jobs. Type `business` (WooCommerce-compatible, not required). Five languages: en, zh-TW, ja, fr, de.
Reference: OKINA PROJECT, https://okina-pj.com/ (no secondary site). Measurements: `brand/reference-tokens.md`, cited below as tok(a)–tok(g). Screens: `brand/ref/`.
Imagery: **photo** (row `photo_direction: low-key`; low-key documentary photography, overriding the generic "high-key" default in common.md because both the row and the reference are low-key). No illustration.
We take shapes, numbers, colour relationships and the hero concept. We take no photo, copy, logo, mask or Noh motif.

Three decisions the implementer must not "fix":
1. Ground is the reference `#080D1B`, not the `#0B0D14` drafted in stage-a.md (similarity rule: reference colour wins).
2. `#5C5A5E` (row seed) is 2.8:1 on the ground, so it is **rules and borders only, never text**. Secondary text is `#BFC0C6`.
3. The thin circles stay thin circles. Overlapping rings are the ripple pattern of a weld bead, so the reference motif translates literally. Do not replace them with sparks alone.

---

## 0. Fixed facts (home, inner pages, all five languages; no other amounts anywhere)

**College.** Hibana College, founded **2011**. Workshop and office: **27 Slipway Road, Port Aldren** (fictional). hello@hibanacollege.example, +1 555 0142. Currency **USD** in every language.
Founder and principal Marit Solberg left shipyard fitting to teach adults who had never held a torch.

**Hours.** Office Mon–Fri 9:00–17:00. Day course Mon–Thu 8:30–16:30. Evening course Tue and Thu 18:00–21:00. Open Bench first Saturday of each month 10:00–13:00.

**The Six-Month Course.** 26 weeks, Mon–Thu, 7 taught hours a day = **728 hours** (4 × 7 × 26). **12 students** per cohort, **2 instructors** on the floor (**1:6**), **24 booths**. **3 cohorts** a year, starting **11 January, 3 May, 6 September**. Fridays are free on purpose: many students keep a part-time job.

| Month | Name | What is taught | What leaves the bench | Photo |
|---|---|---|---|---|
| 1 | Bench & Safety | PPE, fume, grinding, cutting, reading a drawing | a squared, cut and filed steel block | M1 |
| 2 | MIG on Plate | flat and horizontal fillets | a T-joint that passes a break test | M2 |
| 3 | Stick & Position | stick, vertical and overhead | a vertical-up fillet plate | M3 |
| 4 | TIG, Steel & Stainless | torch and filler control | a clean stainless butt joint | M4 |
| 5 | Fabrication | layout, cutting, fit-up, distortion | a welded steel gate frame | M5 |
| 6 | Test Pieces & Placement | test plates seen by a visiting independent inspector; **two weeks** on placement in a local shop | a test plate set and an inspector's report | M6 |

**A workshop week (Six-Month Course).** Monday demonstration and drawing. Tuesday and Wednesday in the booth. Thursday morning cut, bend and review; Thursday afternoon clean down and next week's drawing. Each week ends with one marked piece on the review rack.

**How a cohort begins (four stages, always this order).**
1. Open Bench: free, first Saturday of the month, try a torch under supervision.
2. Application: a one-page form; no experience needed.
3. Bench talk: 30 minutes with Claire Dubois and one instructor.
4. Day one: **$500** deposit secures a booth; kit is issued on the first morning.

**Fees (5 items).**
| Item | Length | Fee |
|---|---|---|
| Six-Month Course | 26 weeks, 728 hours, kit included | **$9,800** |
| Evening Foundations | 12 weeks, two evenings, 72 hours | **$2,400** |
| TIG Short Course | 4 Saturdays, 24 hours | **$980** |
| Taster Day | one Saturday, 6 hours | **$180** |
| Graduate Booth Hire | one 3-hour session | **$45** |
Payment for the Six-Month Course: **$500** deposit, then **six monthly payments of $1,550** ($9,800 in total). Kit: helmet, jacket, gloves, boots. Open Bench is free.

**People (7).**
| Name | Role |
|---|---|
| Marit Solberg | Principal and founder |
| Tomas Reyes | Lead instructor, MIG and stick (P1) |
| Priya Nair | Instructor, TIG (P2) |
| Joseph Oduya | Instructor, fabrication |
| Lena Hartmann | Drawing and inspection |
| Samir Haddad | Workshop and safety officer |
| Claire Dubois | Admissions and placements |

**Graduate stories (3, fictional).**
| Graduate | Before | Now | Photo |
|---|---|---|---|
| Nadia Rahman | dental receptionist | fabricator at Slipway Railings | S1 |
| Owen Clarke | delivery driver, started at 41 | welder at Aldren Marine Repair | S2 |
| Beatriz Lima | line cook | fitter at Northmole Steelwork | S3 |

**Never claim.** No job guarantee, pass rate, salary figure, accreditation, award, government funding or real employer. Fees and Admissions carry one plain line: "We teach the trade and arrange the placement. We cannot promise a job or a test result."

---

## 1. Signature techniques (three, all obvious at a glance)

### T1. Edge-to-edge twin photo panels with a dark caption card and rounded tab
- **Source:** okina-pj.com, Archive panels (`ref/scroll-okina-1800.png`, `-2700.png`), tok(c)(d)(e). Two huge photos nearly touch, bleed almost to the viewport edges, and a flat dark card with a rounded "ARCHIVED" tab bites the bottom of each one.
- **Used on home:** block 3 The Months (three rows = six panels) and block 7 People (one row).
- **Geometry at 1440:** panels 695×768 (0.90:1), x=20 and x=725, gap **10px**, side margin **20px**, radius 0, no shadow. Fluid: `grid-template-columns:1fr 1fr; gap:10px; padding-inline:20px; aspect-ratio:695/768` on each panel.
- **Caption card:** ground `#080D1B`, left inset 60px, width 575px (83% of the panel), height about 112px, overlapping the panel bottom by **60px** and hanging about 45px below it. Two columns split by a 1px `#5C5A5E` vertical rule at 148px: left, big numeral or short name in Literata 400 1.875rem (30px) white, with a 0.875rem word under it; right, a 0.875rem 500 bold line and a 0.875rem 300 details line of 2 lines maximum.
- **Tab:** 138×40px, centred on the panel's x-centre, ground `#080D1B`, top corners radius 20px, bottom square, overlapping the card's top edge so that it rises 20px above it. Text white Work Sans 600 0.875rem: `MONTH 1`, `TOMAS REYES`.
- **Row gap:** 140px from panel bottom to next panel top.
- **Must not be diluted:** gap stays 10px; panels stay full-bleed minus 20px; never inside a 1200 container; no radius; card overlaps the photo; tab is rounded and rises above the card.

### T2. Serif caps heading row with hairline and round white arrow
- **Source:** okina-pj.com ABOUT / PERFORMANCE / EXHIBITION rows (`ref/scroll-okina-900.png`, `-3600.png`), tok(b)(d)(f).
- **Used on home:** every block after the hero.
- **Row:** x from 130 to 1310 (container 1180). Title Literata 400 uppercase lh 1.0, ls normal, **3.125rem (50px)**; About and the page heads **4.375rem (70px)**. Subtitle Work Sans 500 1rem white, baseline-aligned, 48px right of the title. At the row's far right, `VIEW DETAIL` Literata 0.75rem caps ls .1em, then a **Ø52 white circle** with a dark `#080D1B` arrow.
- **Hairline:** on About and page heads a 1px white rule 140–150px wide at x=130 under the title; body text starts at x=304 (offset 174px).
- **Hover:** `background-color, color .3s ease`; circle fills `#D9824B`. Never write `transition: all`.
- **Languages:** the caps title stays Latin in en, zh-TW and ja (the reference pairs a Latin title with a local subtitle); fr and de translate it. Long fr/de titles wrap and use `clamp(2.25rem, 4vw, 3.125rem)`.
- **Must not be diluted:** the arrow stays filled white, 52px, at the row end; the title stays caps serif at 400, never bold.

### T3. Weld-ripple ring field plus rotated micro-label rail
- **Source:** okina-pj.com hero canvas and "what is OKINA?" rail (`ref/okina-first.png`), tok(f)(g).
- **Rings:** about 70 hollow 1px circles, white at 10–40% opacity, Ø8–Ø170. Dense cluster centred at about 52% x, 48% y, falling off outward as in the reference; about 20 run along a gently rising diagonal, overlapping by half like a stack-of-dimes weld bead. Short broken arc segments in the densest part, as in the reference.
- **Build:** three hand-authored SVG files (`assets/rings-a.svg`, `-b`, `-c`) as backgrounds of three `aria-hidden` divs. CSS keyframes translate each ±12px, `alternate`, linear, 14s, 18s, 22s. No canvas, no scroll listener.
- **Embers:** a fourth layer, `assets/embers.svg`, 12 dots Ø2–3 in `#C9A27A`, rising 120px and fading 0→.9→0 on an 18s loop.
- **Rail:** right edge at x≈1364, y 320–430: rotated (−90°) Work Sans 0.875rem "Next cohort: 11 January", 1px white vertical line 110px beside it.
- **Continuation:** the same ring layers at 50% opacity sit in the ground of page heads, and blurred Ø60–100 soft white dots at 4% opacity drift on the ground of long pages (tok(f) and the blurred dots in `ref/scroll-okina-900.png`).
- **Must not be diluted:** rings stay thin hollow lines; no filled circles and no glow. Cluster must read as the main graphic left of the photo.
- **Motion off:** `@media (prefers-reduced-motion: reduce)` and `html.sp-no-motion` set `animation:none`; layers stay visible as a still.
- **Mobile:** one ring layer at 50%, no rail.

### Continuation to inner pages
| Page | T1 | T2 | T3 |
|---|---|---|---|
| The Six-Month Course | full six panels with fuller details | page head, section rows | page-head rings |
| A Workshop Week | one row: M2, Y1 | yes | page-head rings |
| Instructors | one row per pair: P1 P2, M5 M4 | yes | page-head rings |
| Graduate Stories | one row per story, tab = graduate name | yes | page-head rings |
| Fees | one row: M1, F1 | yes | page-head rings |
| Admissions | one row: C1, Y2 | yes | rail: next cohort |
| Workshop & Safety | one row: M1, F1 | yes | page-head rings |
| About | one row: K1, M6 | yes | rail: "Since 2011" |
| Contact | none | page head | page-head rings |

Each technique reaches at least 4 inner pages.

---

## Key visual concept

### (1) Reference first screen: concept, story, signature motion
A near-black navy field. A cloud of thin white circles drifts slowly across the middle. A small two-line headline sits at the left, a round scroll cue bottom-left, a rotated label on the right, and a huge pale wordmark is cropped by the bottom edge. Scrolling reveals a tall photo of an old mask floating on the same dark ground, overlapping the next heading.
Story: a quiet, serious inheritance; a craft handed down, looked at slowly in the dark. Signature motion: drifting circles, 2 s cross-fade photo sliders, strips sliding sideways against scroll.

### (2) Our scene
The same darkness is a workshop before the arc is struck. An instructor stands at a student's shoulder, watching the student lower a visor over a practice joint at a steel bench. Nothing is burning yet: one warm lamp, the moment before the first weld. The craft is handed on the same way, by someone watching closely.
The ring cloud becomes the ripple of a weld bead. It drifts in the dark beside the photo, with a few embers rising. The reference's wordmark at the foot becomes the row's timeline: a thin line drawing itself across the screen, with six month ticks. The first screen therefore says: this is a serious trade, a person will stand beside you, and it takes six months.

### (3) KV checklist (all six built and visible at 1440×900)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Near-black navy ground, 0% saturation | Same `#080D1B` | full first screen | none | — |
| 2 | Left headline with short lead | Literata H1 "Steady hands / are taught, / month by month." + 2-line lead | x 117, y 170–510 | load fade-up 20px, .8s | — |
| 3 | Tall photo on the dark ground, overlapping the next heading | Instructor and student at the bench, soft-masked edges, no cut-out | x 749–1383, y 0–1040; runs 140px past the fold over block 2 | `sp-parallax`, `--sp-par: 8%` | **K1** |
| 4 | Drifting thin circles | T3 weld-ripple rings + embers | cluster at 52% x, 48% y, behind the photo; embers in front | ±12px drift 14–22s; embers 18s | SVG only |
| 5 | Round white arrow | Ø52 arrow + label "See the course months" → `#months` | under the lead, x 117, y≈540 | hover .3s ease | — |
| 6 | Cropped wordmark at the foot (row `first_screen: timeline-line`) | 1px line with six ticks, Month 1–6 names under it | y≈790, x 117 to 1323 | line grows left→right on load, 1.6s | — |

The rail (T3) and the transparent header are also in the first screen. "Adapted" here means no copied image or wording; the scene, composition and motion are all kept.

---

## 2. Colour (tok(a); saturated share follows the reference)

| Role | Hex | Source | Use | Share |
|---|---|---|---|---|
| Ground | `#080D1B` | tok(a) exact | every page ground, caption cards, footer | ≈80% |
| Text | `#FFFFFF` | tok(a) exact | headings, body, arrow fill | ≈8% |
| Secondary text | `#BFC0C6` | white reduced for hierarchy | captions, meta (≈10:1 on ground) | ≈3% |
| Main mid-ink | `#5C5A5E` | row seed; plays the role of the reference's dim dividers | rules, borders, input borders; **never text** | ≈2% |
| Warm highlight | `#C9A27A` | sampled role: reference tungsten photo highlight | embers, active nav underline, month ticks | ≤2% |
| Accent | `#D9824B` | weld glow; reference has none on the first screen | arrow hover fill, one active tick, focus ring | ≤1% |

Photos add the rest (about 12%, warm tungsten on navy, tok(a)). No reference colour was replaced for industry reasons; `#D9824B`, `#C9A27A` and `#5C5A5E` are additions at very low share. Reference blue `#1F3F9E` is not used, since it belongs to that site's printed booklets.
Dark ground needs `theme.json` palette slugs `base` `#080D1B`, `contrast` `#FFFFFF`, `muted` `#BFC0C6`, `rule` `#5C5A5E`, `warm` `#C9A27A`, `accent` `#D9824B`, and the editor must show the dark ground too.

**First-screen saturation:** target ≤2%, hard cap **5%** (reference 0.0%; well under the 15% and 30% rules). K1 must show no blue-white arc flash; the lamp stays warm and small. If `check-first-screen.py` exceeds 5%, regrade K1 darker before touching UI.

---

## 3. Type (font_direction: **serif**; tok(b))

Direction: Latin serif headings, CJK Noto Serif (明體). Trajan-like caps are approximated with Literata caps at 400.
- **Headings stack:** `Literata, "Noto Serif TC", "Noto Serif JP", Georgia, serif`
- **Body stack (en, fr, de):** `"Work Sans", "Noto Serif TC", "Noto Serif JP", system-ui, sans-serif`
- **zh-TW:** `:lang(zh-TW)` headings and body `"Noto Serif TC", Literata, serif`
- **ja:** `:lang(ja)` headings and body `"Noto Serif JP", Literata, serif`
- Load everything with `theme.json` `fontFamilies` + `fontFace`, including zh-TW and ja subsets, so editor and front end match. Style.css uses `:lang(`, so copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it. Use the Hokuto/Hada subset workaround.

| Preset | Size | Use | Weight / lh | Source |
|---|---|---|---|---|
| xx-large | 4.375rem (70px) | H1, About, page heads | 400 / 1.1 (H1), 1.0 (caps) | tok(b) 70px; ≥4.25rem rule |
| x-large | 3.125rem (50px) | section titles | 400 / 1.0 caps | tok(b) 50px |
| large | 1.875rem (30px) | card numerals, pull lines | 400 / 1.3 | tok(b) 28–30px |
| medium | 1.25rem | story names, lead | 300 / 1.6 | — |
| base | 1rem | body | Work Sans 300 / 1.8 | tok(b) 14px raised to 16px: 14px at weight 300 on dark is too faint for 250+ words |
| small | 0.875rem | nav, card text, tabs | 400–600 / 1.6 | tok(b) 14px |
| x-small | 0.75rem | arrow label, details | 400 / 1.5 | tok(b) 12px |

CJK: headings about 0.75× English, body lh 1.85, weight 400 (Noto Serif 300 is too thin on dark). fr/de: `hyphens: auto`.

---

## 4. Tokens

- **Header (tok(c)):** 110px tall, padding 45/60px, transparent, `position:absolute` over the content. It does **not** stick: on the reference the fixed header collides with headings (`ref/scroll-okina-5400.png`). Wordmark "Hibana College" left, Literata 1.25rem caps; 7 links right, Work Sans 0.875rem: Course, Week, Instructors, Stories, Fees, Admissions, Contact. One menu only; under 960px a two-line menu icon opens an overlay.
- **Sections (tok(c)):** 140px gap between blocks. Container 1180 for rows; T1 is full-bleed minus 20px.
- **Radius (tok(d)):** 0 on photos, cards, inputs and table cells. Only arrow circles and tab tops are round.
- **Shadows:** none. Rules: 1px.
- **Footer (`ref/scroll-okina-5400.png`):** 1px `#5C5A5E` rule at x 70–1350, wordmark, contact line left, address and copyright right, secondary text.

---

## 5. Home page

### First screen (1440×900)
- Section: `min-height: clamp(720px, 100svh, 900px)`, ground `#080D1B`, `overflow: visible` so the photo overlaps block 2.
- Layers, bottom to top: rings → K1 → embers → text, timeline, rail.
- **K1:** absolute, `left:52%; right:4%; top:0; height: calc(100% + 140px)`, 634×1040 at 1440. Outer wrapper `sp-parallax`, `--sp-par: 8%`, overflow clip; `mask-image` two gradients, `linear-gradient(to right, transparent 0, #000 14%)` and `linear-gradient(to bottom, #000 80%, transparent 100%)`, `mask-composite: intersect`. No cut-out and no hard edge, so it reads as a figure emerging from the dark, like the reference mask.
- **Text (x=117, width ≤ 580):** H1 4.375rem, lh 1.1, three lines: "Steady hands / are taught, / month by month." Lead 1rem 300, two lines: "Six months of welding and fabrication for adults changing trade. Twelve students, two instructors, one booth each." Then arrow T2 with the label "See the course months". Wrapper fades up 20px, .8s, `cubic-bezier(.23,1,.32,1)`.
- **Timeline:** absolute, bottom 64px, x 117 to 1323. 1px white line, six ticks 12px tall in `#C9A27A` at equal spacing; the first tick is `#D9824B`. Under each tick, `Month N` x-small secondary + the month name small white ("Bench & Safety"). Line `transform: scaleX(0→1)`, origin left, 1.6s `cubic-bezier(.23,1,.32,1)`.
- Load animations are CSS only and sit under `html.sp-js:not(.sp-no-motion)` inside `prefers-reduced-motion: no-preference`. This is not `sp-reveal`: the hero gets none.
- Forbidden: table, form, search box, giant centred word, filled colour CTA.

### Block order
| # | Pattern | Purpose | Layout | Photos | Copy |
|---|---|---|---|---|---|
| 1 | `front-hero` | promise | above | K1 | 30 words |
| 2 | `front-about` | who it is for | T2 big: "ABOUT" 70px + subtitle "A trade school for second careers" + hairline; text at x=304, width 600, two paragraphs; two arrows "About the college", "Workshop & safety". K1's tail overlaps the top right | (K1 tail) | 90 words, 2 paragraphs |
| 3 | `front-months` | how the months run; id `months` | T2 "THE MONTHS" + "Six months, one skill at a time" + VIEW DETAIL → Course; three T1 rows, each caption from section 0 | M1–M6 | 6 × 25 words |
| 4 | `front-week` | what a week produces | T2 "A WEEK'S WORK" + VIEW DETAIL → Week; narrative at x=304; three photos at x=130, widths 490 / 325 / 325, gap 20, height 447, (ref BOOKLET); caption under each | Y1 Y2 Y3 | 80 words + 3 × 12 |
| 5 | `front-floor` | scale, mood | full-bleed Cover, 640px, F1, `sp-parallax`, `--sp-par: 10%`; ground overlay `rgba(8,13,27,.45)`; foreground row of four static figures: 12 students / 2 instructors / 24 booths / 728 hours; Literata 3.125rem | F1 | 30 words |
| 6 | `front-cohort` | how a cohort begins | T2 "BEGIN" + "How a cohort begins"; left 7/12 four ruled rows (name, one sentence, right-aligned date or length); right tall C1 0.57:1, masked like K1, rising 120px over the heading row (repeat of the reference's mask overlap) | C1 | 4 × 25 words |
| 7 | `front-people` | who teaches | T2 "INSTRUCTORS" + VIEW DETAIL; one T1 row, tabs carry names | P1 P2 | 2 × 25 words |
| 8 | `front-stories` | proof | T2 "STORIES" + VIEW DETAIL; left S1 4:5; right 3 ruled rows: name large, before → now, one sentence. Line "We cannot promise a job" at the foot | S1 | 3 × 30 words |
| 9 | `front-fees` | price summary | T2 "FEES"; ruled price list of the five items, full width at ≥782px, price column nowrap right; payment note under it. No reveal | — | 40 words |
| 10 | `front-close` | contact | T2 "OPEN BENCH" + "First Saturday, 10:00–13:00, free"; address and office hours; two arrows Admissions, Contact | — | 30 words |

**Home photo positions: 15** (K1, M1–M6, Y1–Y3, F1, C1, P1, P2, S1), none repeated. English copy ≥ 250 words, ≥ 3 narrative paragraphs (blocks 2, 4, 8).

### Comparison with recent homes
| # | Hashira Partners | Mimamori College | Mahora Foods | Asaoka Screening | **Hibana College** |
|---|---|---|---|---|---|
| 1 | ruled two-line hero | inset photo + gateway strip | hero + panel strip | rounded photo pair + wave | **dark rings, tall masked photo, timeline foot** |
| 2 | vision statement | notices band | centred welcome | mission + problem | **T2 About, photo tail overlapping** |
| 3 | marquee line | one white sheet of courses | abutting tiles | scoop tiles | **six edge-to-edge month panels** |
| 4 | case panel | feather + figures | service day | ruled results rows | **three-object week row** |
| 5 | stepped archive | who it is for | parallax band | proof band | **parallax floor band** |
| 6 | — | training day panel | stages | twin white panels | **cohort rows + tall masked photo** |
| 7 | — | placement photo | rates table | packages | **instructor twin panels** |
| 8 | — | story | case cards | open dates | **stories rows** |
| 9 | — | notices | close | close | **fee list** |
| 10 | close | — | — | — | **Open Bench close** |

Why not alike: all four are light-ground pages; Hibana is near-black from top to bottom with photo-led, edge-to-edge panels. Nothing is rounded except arrows and tabs. Hashira's rules, Mimamori's coloured sheet, Mahora's white tabs on abutting tiles and Asaoka's scoop corners and wave do not appear. Asaoka's twin panels are white rounded cards inside a container; ours are 695×768 full-bleed photographs.
Also unlike `shirushi-customs` (used-refs: dark pinned stage with a bottom timeline): ours does not pin, the statement does not ride over the photo, the photo is a tall masked figure at the right, and the ring field is the main graphic. Keep it unpinned.

---

## 6. Inner pages (11)

Each page: T2 page head at 70px with hairline and rings → body → close line with arrow. No sidebar. Pattern `page-head` shared.

1. **The Six-Month Course**: all months as T1 panels with fuller details (taught, leaves the bench, hours); dates of 3 cohorts; "Fridays are free" paragraph; fee line → Fees.
2. **A Workshop Week**: Mon to Thu ruled rows with times; T1 row M2, Y1; review rack explained; Y3.
3. **Other Courses**: Evening Foundations, TIG Short Course, Taster Day, Graduate Booth Hire; ruled rows, times, fees, M4.
4. **Instructors**: 7 people; T1 rows for P1 P2, then ruled text rows for the other five. Not a portrait grid.
5. **Graduate Stories**: 3 T1 panels (S1–S3), each with a 120-word story; no-guarantee line. Stories also exist as 3 posts.
6. **Fees**: fee table, payment plan, kit list, what happens on withdrawal (deposit refundable up to 14 days before day one), no-guarantee line.
7. **Admissions**: the four stages, cohort dates, T1 row C1, Y2, "Who it suits" paragraph, Open Bench dates; arrow → Contact.
8. **Workshop & Safety**: booths, fume extraction, PPE, Samir Haddad's first-day briefing; T1 row M1, F1.
9. **About**: founded 2011, Marit Solberg's story, why 12 students, Port Aldren; T1 row K1, M6.
10. **Contact**: address, hours, email, phone in ruled rows; enquiry form with 1px `#5C5A5E` borders, white text, no reveal; F1 at 21:9 above it.
11. **Journal** (index, archive, single): post list as ruled rows with a 4:3 thumbnail; at least 3 posts plus the 3 stories.
Also 404 and search: T2 head + arrow home.

---

## 7. Images (17, Grok, one at a time, read each)

STYLE (exact string on every prompt):
`low-key documentary photograph, 35mm lens, dark steel workshop in deep navy-black shadow, single warm tungsten lamp as the only strong light, muted warm highlights on steel and worn work clothes, shallow depth of field, fine grain, calm serious mood, diverse adults, unbranded plain equipment, no text, no logos, no brand marks, no signage, no Japanese elements, no bright arc flash`

| ID | Subject / composition | Ratio | Home | Inner |
|---|---|---|---|---|
| K1 | instructor standing at a student's shoulder, student lowering a plain visor over a practice joint at a steel bench, bottom 25% falling to black, left edge in shadow | 0.61:1 | **hero** | About |
| M1 | hands in gloves squaring a steel block in a vice with a file | 0.9:1 | **months** | Course, Fees, Safety |
| M2 | student in a booth, MIG torch on a T-joint, faint warm glow | 0.9:1 | **months** | Course, Week |
| M3 | welder overhead on a vertical plate, seen from the side | 0.9:1 | **months** | Course |
| M4 | close view of TIG torch and filler rod over stainless, soft glow | 0.9:1 | **months** | Course, Other Courses, Instructors |
| M5 | two students fitting a steel gate frame on a layout table | 0.9:1 | **months** | Course, Instructors |
| M6 | older inspector checking a test plate with a gauge under a lamp, student beside | 0.9:1 | **months** | Course, About |
| Y1 | weld bead ripples on a plate, macro | 1.1:1 | **week** | Week |
| Y2 | a broken-open bend test coupon on a dark bench | 0.73:1 | **week** | Admissions |
| Y3 | a row of finished marked practice pieces on a steel rack | 0.73:1 | **week** | Week |
| F1 | wide empty workshop aisle of booths with curtains, one lamp lit | 21:9 | **floor** | Fees, Safety, Contact |
| C1 | applicant trying a torch at a bench, staff member beside, tall crop, bottom to black | 0.57:1 | **cohort** | Admissions |
| P1 | male instructor about 50, Latino, arms folded by a booth, helmet under one arm | 0.9:1 | **people** | Instructors |
| P2 | female instructor about 40, South Asian, holding a TIG torch unlit, looking at a joint | 0.9:1 | **people** | Instructors |
| S1 | woman in her 30s, South Asian, in a workshop apron, grinding-dust light, 4:5 | 4:5 | **stories** | Stories |
| S2 | man about 45, Black British look, in a boiler suit by a boat hull section | 0.9:1 | — | Stories |
| S3 | woman about 30, Latina, measuring a steel beam with a square | 0.9:1 | — | Stories |

Rules: 17 files, ≤ 300 KB, ≤ 2000px, 0 cut-outs, no image twice on one page. Reject any with text, logos, broken hands or gloves, a blue-white arc or a style drift. Add a `readme.txt` line per image (AI-generated, CC0).

---

## 8. Scroll effects (three kinds)

| Effect | sp-* | Where | Source: trigger, time, easing | Values |
|---|---|---|---|---|
| Heading and arrow rows fade in | `sp-reveal sp-reveal--up` | every T2 row; text blocks of 2, 4 and 8 | okina: on entry, .3–.4s, ease / ease-in-out | theme sets `--sp-dur: .4s; --sp-ease: ease; --sp-dist: 16px` on T2 rows |
| Large panels settle | `sp-reveal sp-reveal--zoom` | T1 panels in 3 and 7 (each panel, grouped in a `sp-stagger` row), week photos | okina Swiper fade, 2000ms; slider replaced by one still with 1.6s zoom-fade | default 1.06→1, 1.6s. Observed element = panel; no clip-path on it |
| Parallax | `sp-parallax` | see below | okina strips moving against scroll, about 1:1 over 700px, opacity 1→.63 over 2s | section below |

No slider: a single still per panel. No `sp-reveal` on hero, fee list, form, or legal text. No `sp-count`, keeping the page to three kinds. Ring motion is CSS keyframes (section 1), allowed as a decorative loop, not a scroll effect.

### Parallax (required)
- **Hero:** wrapper of K1 gets `sp-parallax`, `--sp-par: 8%`; background = K1; foreground (H1, lead, timeline) sits outside the moving layer. Mobile `--sp-par: 6%`.
- **Floor band:** Cover with `sp-parallax`, `--sp-par: 10%`, background F1; figures in the Cover's inner container, not moving. Mobile `--sp-par: 6%`.
- **Reference motion:** okina's strips move with scroll; ours is vertical, since `sp-parallax` is vertical and horizontal movement risks overflow.
- Verify with `check-parallax.mjs` on desktop and mobile: shift ≥6px, 0 with reduced motion.

---

## 9. Responsive

- **390px first screen:** one column in source order: H1, lead, arrow, K1 (4:5, static position, `sp-parallax` kept), timeline. **No vertical label, rail, or absolutely positioned label over text.** Rail hidden under 960px. H1 `clamp(2.75rem, 11vw, 4.375rem)`.
- **Timeline on mobile:** 6 ticks across, numerals 1–6 only; names go in a plain list under it. It must not overflow.
- **T1 under 782px:** one column, 20px margin to 10px, panel 4:5; card is static below the photo with a -32px top overlap, full width minus 20px; columns stack; tab stays.
- **T2 under 782px:** title, subtitle, arrow stack; arrow left-aligned.
- **Week row:** one column under 782px.
- **Price tables:** at ≥782px width 100%, price column `white-space: nowrap; text-align: right`, never clipped at 800 or 1280. Under 782px every table stacks (`display:block`, label over value).
- `html, body { overflow-x: clip }`. Hero overlap of block 2 is desktop only.
- Tablet (782–959px): hero stacks like mobile, two T1 columns stay.

---

## 10. Similarity table (target 80%)

| Dimension | Reference | This theme |
|---|---|---|
| Ground | `#080D1B` ≈85% | `#080D1B` ≈80% |
| Text | `#FFFFFF` | `#FFFFFF` |
| First-screen saturation | 0.0% | ≤2%, cap 5% |
| Section titles | Trajan 400 caps 70/50px, lh 1.0 | Literata 400 caps 70/50px, lh 1.0 |
| Hero H1 | 14px light (image masks) | 70px Literata (≥4.25rem rule) |
| Body | 14px, 300 | 16px, 300 (readability) |
| Caption | 28–30px serif + 12px | 30px Literata + 14px |
| Header | 110px, 45/60, transparent | same; absolute, not fixed |
| Twin panels | 695×768, x=20/725, gap 10 | same |
| Section gap | ≈140px | 140px |
| Photo radius | 0 | 0 |
| Arrow | Ø52 white, dark arrow | same |
| Caption card | `#080D1B`, overlap ≈60px, tab | same |
| Hairline | 1px white ≈140px | 1px white 140px |
| Shadow | none | none |
| Tall image | 421×738 (0.57:1) cut-out over heading | K1 634×1040 (0.61:1), C1 0.57:1, soft mask (no cut-out) |
| Photo type | low-key documentary, warm tungsten on navy | same, own photos |
| Decoration | thin rings, rotated rail | same, as weld ripples + rail |
| Hero motion | canvas drift | CSS drift 14–22s |
| Hover | .3s ease | .3s ease (listed properties) |
| Slider | fade 2000ms | none; 1.6s zoom-in reveal |
| Strip motion | horizontal, ≈1:1 | vertical `sp-parallax` 8–10% |

---

## 11. Home acceptance checklist

1. First screen shows all six KV items at 1440×900: dark ground, H1 left, K1 right, rings, Ø52 arrow, timeline with six labelled ticks. Rail visible.
2. K1 overlaps block 2 by about 140px at 1440, with no hard edge, no cut-out.
3. Rings are hollow 1px lines, drifting; still under reduced motion.
4. T1: six month panels and two instructor panels at 10px gap, 20px margin, radius 0, card overlapping 60px, rounded tab rising above it.
5. T2 on every block after the hero, with Ø52 white arrows on the rows that link onward.
6. Colours match section 2; `#5C5A5E` never used for text; first-screen check ≤5%.
7. Literata H1 ≥4.25rem; `theme.json` largest size 4.375rem; editor and front end fonts match, including zh-TW and ja.
8. Block order equals section 5; ≥8 images (15 planned), none repeated on the page.
9. All numbers match section 0, including 12, 1:6, 24, 728, $9,800, $500, $1,550 × 6.
10. Fee list full width at ≥782px, price nowrap right; stacked on mobile.
11. 390px: no vertical or overlapping labels; no horizontal overflow.
12. `auto-gates.mjs` passes; `check-parallax.mjs` passes on both sizes.
13. ≥250 English words, ≥3 narrative paragraphs. No guarantee, award, or real-brand claims.
14. Photos: same STYLE, no text, logos, or broken hands; low-key throughout.
