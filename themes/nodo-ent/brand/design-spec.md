# Nodo Clinic: design spec (stage 1, binding for implementation)

Slug `nodo-ent`, adult ear, nose and throat clinic, by appointment. Type `health`, WooCommerce-compatible but not required. Row b22-2: split-free full-bleed first screen with info bar, page structure narrative problem, method, proof. Five languages: en, zh-TW, ja, fr, de.

Reference: https://www.tanpopoen.net/ (only reference, measured in `reference-tokens.md`, cited below as [tok a] to [tok g]). Screens: `ref/tanpopo-first.png`, `ref/scroll-tanpopo-1.png`, `ref/scroll-tanpopo-2.png`. Borrow technique, colour, spacing and the key visual concept. Photos, copy and logo are our own.

Imagery: **photo**. Real-photography STYLE (section 8). The reference's gouache blob illustrations are minor and are not reproduced; photographs hold its main image positions.

Class prefix `nd-`. All geometry is given at 1440 wide unless stated.

---

## 1. Signature techniques (three, all obvious at a glance)

### T1. White vertical paper strips on a full-bleed documentary photograph
- Source: tanpopoen.net first screen. Two separate white strips, 52 px wide, sit low on the left of a full-bleed photograph. The right strip reads first; the left strip continues the sentence. They are top-aligned, different lengths, and look like paper slips laid on the picture.
- Use: home hero, the band in block 6 (one strip), and every inner page head.
- Geometry [tok f, tok c]: strips 52 px wide, gap 24 px, left strip at x 160, right strip at x 236. White `#FFFFFF`, radius 0, no shadow, no border. Padding 16 px along the text direction. Text `#3F2E1A`. Container `.nd-strips` is a flex row, `align-items: flex-start`, anchored `bottom: 112px` (72 px info bar + 40 px).
- Latin (en, fr, de): `writing-mode: vertical-rl`, sideways, Hanken Grotesk 500, 1.375rem, tracking 0.08em. Maximum 26 characters per strip.
- CJK (zh-TW, ja): same writing mode, upright by default, Noto Sans 500, 1.5rem, tracking 0.2em. Maximum 13 characters per strip.
- Must not be diluted: vertical on desktop, truly white, 52 px wide, two strips of different length, left third of the photo. Never a translucent panel, never one merged block, never horizontal at 782 px and up.
- Under 782 px: section 7 turns them horizontal and in flow.

### T2. Unframed photo walk
- Source: tanpopoen.net section photos (`ref/scroll-tanpopo-2.png`). Three photos of different sizes step left, right, left down a pale page. No frames, no radius, no shadow; 100 to 300 px of empty paper around them.
- Use: home block 4; two-step or three-step walks on inner pages (table below).
- Geometry [tok e], percentages of a 1440 wrapper so it scales:
  - P1: width 36.5% (525 px), left 6.6% (x 95), 3:2.
  - P2: width 30.6% (440 px), left 57.6% (x 830), top edge 240 px below P1's top edge, so it overlaps P1 in height only, never in x. 3:2.
  - P3: width 34% (490 px), left 15.3% (x 220), top edge 64 px below P2's bottom edge. 4:3.
  - Radius 0, no border, no shadow. Caption under each photo, 0.8125rem, `#6F6456`, one line, no box.
- Must not be diluted: sizes visibly differ, steps cross the page, voids stay empty (no text or decoration in them). Not a grid, not a masonry, not a 2-up.
- Under 782 px: widths 78%, 68%, 74%; alignment left, right, left at 8%; 48 px between items. Still stepping, never full width.

### T3. Round chevron disc plus underlined text link, as the only link style
- Source: tanpopoen.net "about" links (`ref/scroll-tanpopo-1.png`).
- Geometry [tok d]: disc 28 px, `#EBCB22`, white chevron 10 px centred. Gap 14 px to text. Text `#1A6D1D`, 0.9375rem, weight 500, tracking 0.08em, 1 px underline at offset 6 px. Links side by side are 30 px apart.
- Class `.nd-link`; the disc is `::before` with empty `content: ""` and an SVG background. Hover: disc moves 3 px right, 0.3s ease-out.
- Use: every call to action on every page, including the info bar, complaint rows and the footer.
- Must not be diluted: there are no filled buttons anywhere in the theme. The disc stays yellow, never grey or olive, and is always round at 28 px.

### Continuation to inner pages
| Page | T1 head (photo + two strips hold the H1) | T2 walk | T3 |
|---|---|---|---|
| About | C1 | I3, R1, O1 (three-step) | to Clinicians, First visit |
| Complaints | B1 | W2, I1 (two-step) | row discs to four complaint pages |
| Ears and hearing | W2 | W3, J3 | to First visit, Fees |
| Nose and sinuses | I1 | J1, O1 | same |
| Throat and voice | I4 | S1, J2 | same |
| Dizziness and balance | S2 | I3, W1 | same |
| First visit | H1 (crop) | I2, W1, W3 (three-step) | to Fees, Contact |
| Clinicians | R1 | I3, I4 | to Contact |
| Fees | I2 | O1 alone at x 830, 440 px wide, void left | to First visit |
| Patient stories | W3 | S1, S2, S3, I1 (stepping, one per story) | to complaint page of each story |
| Contact | C1 | I2 at x 830 | phone and mail links |
| Notes (index, archive, tag) | B1 | cards stepped at two widths (section 5) | "Read" links |

---

## Key visual concept

**(1) Reference.** A nursery path in daylight, seen between white posts. A carer in a pale blue smock holds small children's hands and walks away from the camera; one child looks back. A tree and a soft blurred post stand in the left foreground. A white nav pill floats top right, a yellow hand-drawn blob logo sits top left, two white vertical strips carry the greeting. Story: this is a place where people are walked into the day, one at a time, by someone who knows them. Motion: a polaroid-mat loader, then a slow image fade, then page transitions [tok g].

**(2) Our scene.** Same composition, same kind of image, same story told for an adult ENT room: a documentary daylight photograph looking through a white door frame into a consulting room. A clinician in a pale blue tunic and navy trousers sits on a low stool beside an adult patient, both turned to each other, mid-sentence, hand open in explanation. An otoscope rests on a linen tray on a side table. White frame posts cross the picture as in the reference, with one soft blurred post in the left foreground; a window shows garden green. Story: here you are seen one at a time, at a pace you can follow. Motion concept: the slow, calm image movement becomes a slow parallax on the photograph. No loader and no page transition, because the first screen must show at once.

**(3) KV checklist.** Every item is built on the first screen and visible.

| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Full-bleed corridor photo, carer with children | Full-bleed consulting-room photo: clinician seated beside patient, otoscope on linen tray | whole first screen above the info bar | `sp-parallax`, `--sp-par: 8%` | H1 |
| 2 | Floating white nav pill | White pill, wordmark "Nodo Clinic" plus 5 links | top right, x 400 to 1414, y 29 to 97, radius 40 px | none | none |
| 3 | Two white vertical caption strips | Two strips holding the H1 | low left, x 160 and x 236 | none, strips do not move | none |
| 4 | Yellow blob logo | Olive `#6B7B6E` irregular blob with white "N" | top left, 104 x 84 px at x 24, y 24 | none | none, CSS and text |
| 5 | Figures walking, posts crossing the frame | Clinician mid-gesture, white posts in the foreground, blurred post at far left | people centre-right, x 700 to 1230; posts x 60 to 200 and about x 540 | moves with photo | H1 |
| 6 | Bottom of the photograph | White info bar: hours, appointment line, chevron link | bottom edge, 72 px, full width, content from x 160 | none | none |

Strip copy en: right strip "One room, one person," left strip "at a pace you can follow." One `h1` with two child spans. Localise to the character limits in T1.

---

## 2. Colour

Reference values kept unless a reason is given. Stage A's softer values for ground, text and accent are replaced by the exact tokens: Tsumugi showed that softening the reference's contrast makes a theme weak.

| Role | Hex | Source | Use | Share |
|---|---|---|---|---|
| Ground | `#F8F8F4` | [tok a] exact | page ground | about 55% |
| White | `#FFFFFF` | [tok a] exact | strips, nav pill, info bar, story panels | about 12% |
| Text | `#3F2E1A` | [tok a] exact | body, strips, table text | text |
| Heading | `#1A6D1D` | [tok a] exact | h2, h3, nav, link text | text only |
| Accent | `#EBCB22` | [tok a] exact | link discs, nav plus markers only | under 3% |
| Main | `#6B7B6E` | row b22-2 (changed from the reference's yellow logo) | logo blob, thin rules at 40% | under 3% |
| Deep olive | `#3F5244` | stage A | footer ground (white text 8:1; white on Main is only 4.49:1) | about 6% |
| Muted | `#6F6456` | derived from Text | captions, meta | text |

- Reason for the one change: a large yellow blob is the reference's childcare signal and is wrong for an adult clinic, and the row asks for a quiet olive identity. Yellow survives where it does the same job, in link discs and nav markers.
- Saturated first-screen share: the reference is under 4% [tok a]. Target for flat UI colour under 1%; `check-first-screen.py` hard limit **15%**, including the photograph. H1 grade therefore stays pale; garden green only in the window. The row's upper limit of 30% is not used.
- Not a beige theme: the ground is the reference's cool grey-green paper.

## 3. Type

Direction **sans**. Latin headings and body sans-serif; CJK headings and body gothic. No serif or Mincho anywhere.

- Latin: Hanken Grotesk (headings, strips, wordmark) 400/500/600; Onest (body, nav, tables) 400/500.
- Load everything through `theme.json` `fontFamilies` + `fontFace`, so editor and front end match. Separate family entries for `Noto Sans TC` and `Noto Sans JP`. `style.css` will have `:lang()` rules, so copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and require it. Use the Hokuto/Hada subset workaround.

```
en, fr, de display: "Hanken Grotesk", "Helvetica Neue", Arial, sans-serif
en, fr, de body:    "Onest", "Helvetica Neue", Arial, sans-serif
zh display: "Noto Sans TC", "Hanken Grotesk", "PingFang TC", "Noto Sans CJK TC", "Microsoft JhengHei", sans-serif
zh body:    "Onest", "PingFang TC", "Noto Sans CJK TC", "Microsoft JhengHei", sans-serif
ja display: "Noto Sans JP", "Hanken Grotesk", "Hiragino Sans", "Yu Gothic", sans-serif
ja body:    "Onest", "Hiragino Sans", "Hiragino Kaku Gothic ProN", "Yu Gothic", Meiryo, sans-serif
```
The zh and ja body stacks deliberately leave out the bundled family, as the repo contract requires. `check-themes-own.mjs` and `check-editor-fonts.mjs` must both pass.

| Preset | rem | Use | Weight, line-height, tracking | Token |
|---|---|---|---|---|
| small | 0.8125 | captions, meta | 400, 1.8, 0.04em | tok b label 12 px |
| base | 1 | body | 400, 2.1 | tok b 15 px, 2.9; raised 1 px for adult readers, line-height reduced for Latin |
| medium | 1.1875 | h3, roster names | 600, 1.7, 0.08em | tok b 19 px / 600 |
| large | 1.5 | small h2, CJK h2 | 400, 1.7, 0.08em | tok b 24 px |
| x-large | 2 | h2 | 400, 1.7, 0.08em | tok b 32 px / 400 |
| xx-large | 4.25 | large numerals only | 400, 1.1, 0 | theme rule, no reference token |

- Reference headings are small and airy; keep that. H2 at `clamp(1.5rem, 2.3vw, 2rem)`, colour Heading, left-aligned, never above 2rem. The 4.25rem preset is used only for fixed numbers (45 in block 5, First visit, Fees).
- Latin tracking 0.08em, because the reference's 0.2em breaks Latin word shapes. CJK h2 keeps the exact 0.2em at 1.5rem (0.75 x 2rem).
- zh, ja body line-height 1.85, letter-spacing 0.03em, no italics. fr, de `hyphens: auto`.

## 4. Spacing and header

- Text column starts at x 160 [tok c]: `padding-left: clamp(20px, 11.1vw, 160px)` inside a 1440 max wrapper. Text measure 640 px.
- Section gap 160 px desktop, 88 px under 782 px, following the very large voids of [tok c].
- Radius: photos 0, strips 0, nav pill 40 px [tok d]. Nothing else is rounded except discs and the blob.
- Header template part, one menu only, `position: fixed` on desktop as in the reference. Blob ends at x 128, left of the text column, so it never covers headings (the reference's blob does; do not copy that fault).
- Blob: `border-radius: 58% 42% 55% 45% / 52% 48% 56% 44%`, white "N" Hanken Grotesk 500, 2.25rem.
- Pill: 68 px tall, x 400 to 1414 (`right: 26px; width: min(1014px, calc(100% - 180px))`). Wordmark left, Hanken Grotesk 600, 1.125rem, Heading colour. Links right, Onest 500, 0.875rem, tracking 0.08em: Complaints, First visit, Clinicians, Fees, Contact. Complaints carries a 16 px yellow circle plus marker [tok f], drawn as a CSS background, and opens the four complaint pages. No words in CSS `content:`.
- Under 960 px: inset 12 px, 56 px pill, blob hidden, wordmark left, "Menu" right, overlay menu.
- Footer: Deep olive, white text. Address, hours, appointment line, About, Patient stories, Notes, Newsletter links. Links here use T3 with white text.

---

## 5. Home page

### First screen (1440 x 900)
`front-hero` wrapper is `min-height: max(640px, 100svh)`, a flex column:
1. Core Cover, class `sp-parallax nd-hero__photo`, flex 1, H1 background, dim 0, no text inside. `object-position: 62% 50%`.
2. Group `.nd-strips`, sibling of the Cover, absolute on desktop (T1). Never inside the moving layer.
3. Group `.nd-info`, 72 px, white, static in flow, content from x 160: "Mon to Thu 8:30 to 17:30 · Fri 8:30 to 14:00" / "Appointments +32 9 555 01 40" / `.nd-link` "Book a first visit".

Forbidden on the first screen: table, form, search box, filled button, centred text, reveal animation.

### Block order
| # | Pattern | Purpose | Layout and photos | Copy |
|---|---|---|---|---|
| 1 | `front-hero` | KV | Above. **H1** | 25 words |
| 2 | `front-opening` | Problem | Ground. Text at x 160, H2 "Some complaints are slow to say out loud.", two paragraphs, two T3 links (About, Patient stories). Right column, left edge x 840 (same line as R1), 440 px wide 3:2 **O1**, unframed, top aligned 120 px below the H2 | 90 words |
| 3 | `front-complaints` | Which complaints the room is set up for | Ground. H2 at x 160, then 6 full-column ruled rows, x 160 to 1280, 1 px Main at 40%, row height about 96 px: complaint name (medium), one-line description (base), disc right. Rows link to the four complaint pages. No images | 75 words |
| 4 | `front-walk` | Method, what a room is like | **T2**. Short H2 "Three things we do slowly." at x 160, then **W1, W2, W3** with one-line captions | 50 words |
| 5 | `front-pace` | How a first visit is paced | White band, full bleed. H2 at x 160, then one horizontal sentence in three parts of unequal width: "45" (xx-large, Heading) "minutes" / "15 to listen" / "15 to look" / "15 to plan", joined by discs, then a paragraph and T3 link to First visit. Includes "A first visit is €95." Not cards, not a grid | 70 words |
| 6 | `front-corridor` | Pause and story echo | Full-bleed `sp-parallax` Cover, 560 px, **B1**, one white T1 strip at x 160 reading "Walked to the door, every time." Under 782 px the strip is horizontal and in flow below the photo | 6 words |
| 7 | `front-roster` | Who keeps the list | Ground. Left at x 160: H2 and paragraph, then 8 roster lines in two text columns, name (medium, Heading), role and days (small). No portraits, no rules. Right column, left edge x 840 (same line as O1): **R1** 440 px 4:3, void beneath. T3 to Clinicians | 80 words |
| 8 | `front-stories` | Proof | Ground. H2, then three stories in stepping pairs: **S1** 36% left with text right; **S2** 30% right with text left; **S3** 34% at x 220 with text right. Each 45 words, name-free ("A teacher, 44"). T3 to Patient stories. Line: "Composite accounts. Results vary from person to person." | 150 words |
| 9 | `front-notes` | Notes | Query Loop, 3 posts in a row of unequal widths (5/12, 4/12, 3/12 columns), image 3:2 no radius: **J1, J2, J3**, date and title. T3 to Notes | Loop |
| 10 | `front-close` | Visit | Ground. Left at x 160: H2 "Come by appointment.", address, hours, line, two T3 links. Right, 525 px 3:2, right-aligned to the content edge (x 755 at 1280): **C1** | 45 words |

English home at least 250 words with at least 3 narrative paragraphs (blocks 2, 5, 7). CJK at least 500 characters. 14 photo positions, no repeats: H1, O1, W1, W2, W3, B1, R1, S1, S2, S3, J1, J2, J3, C1. There is no fee table on the home page, only the €95 line, matching the Fees page.

### Comparison with recent themes
| # | Mikura Storage | Aya Paper | Noboru Lifts | Shiki Linen | **Nodo Clinic** |
|---|---|---|---|---|---|
| 1 | blue bar, touching squares, fact bar | three-column frame, contour rings | paper, huge cut headline, card | three panels, centred statement | **full-bleed photo, vertical strips, info bar** |
| 2 | feature tiles | shop intro | three-column intro | photo + text | **problem narrative** |
| 3 | sticky sizes | spec index rows | visit band | weaves | **ruled complaint rows** |
| 4 | visit | parallax | buildings checkerboard | gradation | **unframed photo walk** |
| 5 | price table | weights | parallax | catalogue table | **45-minute sentence** |
| 6 | parallax | wrap | sheet | order | **parallax with paper strip** |
| 7 | stories | envelope pair | fee table | parallax | **text roster and one photo** |
| 8 | dock card | catalogue | notes | thread line | **stepped stories** |
| 9 | — | — | — | — | **unequal notes row** |
| 10 | — | — | — | — | **close** |

Why not alike: no other recent theme opens on one uninterrupted documentary photograph, and none uses vertical paper strips, a floating pill or disc links. There is no fee table, no numbered tile, no spec row and no filled CTA. Aya's index rows are large spec figures with data cells; ours are plain sentences. The narrative runs problem, method, proof. A parallax band also appears in all four, so ours differs by carrying the strip and echoing the hero's story.

---

## 6. Inner pages (11 plus templates)

Every page: T1 head (full-bleed photo, 52vh, `min-height: 420px`, strips hold the H1, no info bar), body at x 160, T2 walk per the table in section 1, close line with T3. No sidebar.

1. **About** `/about`: founded 2011, why appointments only, why 45 minutes, the daily routine (brand.md needs a "day" text), three narrative sections.
2. **Complaints** `/complaints`: the 6 home rows, each with 2 sentences, grouped to the four pages below.
3. **Ears and hearing** `/ears-hearing`: earache, wax, hearing loss, tinnitus; what the room holds; when to come; hearing test.
4. **Nose and sinuses** `/nose-sinuses`: blocked nose, sinus pressure, smell, snoring; nasal endoscopy explained.
5. **Throat and voice** `/throat-voice`: hoarseness, swallowing, sore throat, voice users; voice assessment.
6. **Dizziness and balance** `/dizziness-balance`: types of dizziness in plain words; balance assessment; what to bring.
7. **First visit** `/first-visit`: "45" numeral, the three 15-minute parts as sentences, what to bring, how to book, how to cancel.
8. **Clinicians** `/clinicians`: 8 people as text entries with a 60-word note, no portrait grid.
9. **Fees** `/fees`: full fee table (section 7), insurance note, cancellation.
10. **Patient stories** `/stories`: 4 stories, composite notice.
11. **Contact** `/contact`: address, hours, line, mail, directions in words. No form required.
12. **Notes**: role `posts`, empty content, no template. `home.html`, `archive.html`, `single.html`, `templates/tag.html`. Cards stepped: odd cards 7/12, even cards 5/12, in two columns, images 3:2 radius 0. Single: 680 px text column, H1 in strips over the featured image.

`theme-meta.json` pages: home, about, news, article, category, tag, newsletter, contact, all with `screens.*` URLs. news and newsletter point at Notes. Six posts, two categories (Ears, Nose and throat), tags on each. Also `404` and `search`: T3 link home.

Suggested labels: type `health`; colours `green`, `muted`, `light`; style `documentary`, `photographic`, `quiet`, `airy`.

## 7. Responsive

- **390 px first screen:** no vertical text and no absolutely positioned labels over text. Order in flow: fixed pill, photo at 56svh with `object-position: 66% 50%` so both people stay in view, strips, info. Strips become horizontal white strips, in flow, left 20 px, stacked 8 px apart, 1.25rem (CJK 1.25rem, tracking 0.12em), padding 10 x 14 px, `width: fit-content`, right strip's line first. No negative margins. Info stacks into two lines plus the link.
- Set this at the 781 px breakpoint for all strips, including inner heads and block 6.
- **Fee table at 782 px and up:** full container width, x 160 to 1280, `table-layout: auto`. Price column `white-space: nowrap`, right-aligned, never cut. Rules 1 px, no zebra.
- **Any table under 782 px:** stacked. Each row a block, label left, price below or right, no horizontal scroll.
- Pace sentence stacks under 782 px. Rows wrap with disc kept right. Roster one column, notes one column. No horizontal overflow at 390 and 1280.

---

## 8. Images (18)

STYLE (exact string on every prompt):
`documentary colour photograph, natural window daylight, high-key pale walls, shallow depth of field, 35mm lens, unposed moment mid-activity, modern international outpatient clinic, soft muted palette of pale blue, white, linen and quiet garden green, diverse adults, gentle film grain, no text, no logos, no brand marks, no signage lettering, no screens with writing, no Japanese elements`

Under 300 KB, under 2000 px, no cutouts, each read after generation; redo on text, logos, bad hands or faces. Keep instruments on trays or held plainly, not inserted into ears. Marked ★ = home.

| ID | Subject and composition | Ratio | Used |
|---|---|---|---|
| H1 ★ | Through a white door frame, clinician in pale blue tunic and navy trousers on a low stool beside an adult patient, turned to each other, open hand mid-sentence, otoscope on a linen tray on a side table, garden window, blurred white post far left, calm pale left third | 16:10 | Home hero; First visit head |
| O1 ★ | Adult in a chair by a window, coat on lap, waiting and thinking, pale wall | 3:2 | Home opening; About, Nose, Fees, Notes post 5 |
| W1 ★ | Close on two hands setting a clean otoscope on a folded linen cloth | 3:2 | Home walk; Dizziness, First visit, Notes post 4 |
| W2 ★ | Audiologist fitting headphones on an older patient in a pale sound booth, door open | 3:2 | Home walk; Complaints, Ears head |
| W3 ★ | Clinician showing an unlabelled ear model to a patient at a small table | 4:3 | Home walk; Ears, First visit, Stories head |
| B1 ★ | Long daylit white corridor, posts and door frames in series, nurse walking beside a patient away from the camera | 21:9 | Home band; Complaints head, Notes head |
| R1 ★ | Five staff at a morning huddle around a plain table with blank paper, relaxed | 4:3 | Home roster; About, Clinicians head |
| S1 ★ | Speech therapist and adult teacher doing a breathing exercise, hand on ribs | 4:3 | Home stories; Throat, Stories |
| S2 ★ | Clinician steadying an adult in cycling clothes during a slow balance exercise on a mat | 3:2 | Home stories; Dizziness head, Stories |
| S3 ★ | Older couple listening beside each other in a consulting room, one taking notes on blank paper | 3:2 | Home stories; Stories |
| J1 ★ | Flexible nasal scope coiled on a linen tray, no display | 3:2 | Home notes; Nose, Notes post 1 |
| J2 ★ | Glass of water and a blank notebook on a window sill | 3:2 | Home notes; Throat, Notes post 2 |
| J3 ★ | Plain ear plugs in a small open case, on a coat pocket | 3:2 | Home notes; Ears, Notes post 3 |
| C1 ★ | Clinic entrance, pale brick, white posts, small tree, unmarked door, daylight | 3:2 | Home close; About head, Contact head |
| I1 | Clinician with head lamp examining an adult's nose, three-quarter view | 3:2 | Complaints, Nose head, Stories, Notes post 6 |
| I2 | Coordinator at a reception desk on a phone, plain paper diary, no screen text | 3:2 | First visit, Fees head, Contact |
| I3 | Clinician writing by hand at a desk near a window | 4:3 | About, Dizziness, Clinicians |
| I4 | Clinician looking at an adult's throat with a small light, patient seated, calm | 3:2 | Throat head, Clinicians |

Each page uses an image at most once (section 1 table). Readme gets one line per image (AI-generated, CC0).

## 9. Fixed facts (all pages, all five languages)

- **Nodo Clinic**, founded **2011**, 18 Veldstraat, 9000 Ghent, Belgium (fictional practice). Line +32 9 555 01 40, hello@nodoclinic.example. Adults only, by appointment.
- Hours: **Mon to Thu 8:30 to 17:30, Fri 8:30 to 14:00**, closed weekends. The appointment line is open during opening hours. Daily routine: rooms set at 8:00, first patient 8:30, closed 12:30 to 13:15.
- First visit: **45 minutes**, in three parts of 15: listen, look, plan. One patient per room.

Fees (EUR, no conversions):
| Service | Time | Price |
|---|---|---|
| First consultation | 45 min | €95 |
| Follow-up consultation | 20 min | €55 |
| Hearing test | 40 min | €70 |
| Nasal endoscopy (added to a visit) | 10 min | €60 |
| Balance assessment | 60 min | €130 |
| Voice assessment | 45 min | €85 |
| Earwax removal | 15 min | €45 |

Cancellation free up to 24 hours before. Reimbursement depends on your insurer.

People (8, fictional):
| Name | Role | Days |
|---|---|---|
| Dr. Ines Vandermeer | Founder, ears and hearing | Mon, Tue, Thu |
| Dr. Samir Haddad | Nose and sinuses | Mon, Wed, Fri |
| Dr. Lucia Ferreira | Throat and voice | Tue, Thu |
| Dr. Tomasz Wrona | Dizziness and balance | Wed, Fri |
| Amara Nwosu | Audiologist | Mon to Fri |
| Helen Park | Speech-language therapist | Tue to Thu |
| Joris Claes | Lead nurse | Mon to Fri |
| Noor El Amrani | Practice coordinator | Mon to Fri |

Stories (4, composite, no promised outcome): a teacher, 44, whose voice gave out by Thursday; a cyclist, 58, for whom the room tilted; a couple, 71 and 73, and the television volume; a baker, 36, with years of blocked nose. Home shows the first three.

Copy rules: no guaranteed results, no statistics, no awards, no real brands or media. Calm, plain, adult; never cute.

## 10. Scroll effects (three, no others)

| Effect | Class | Where | Source | Trigger, time, easing |
|---|---|---|---|---|
| Fade and rise | `sp-reveal sp-reveal--up` | H2 and intro of blocks 2, 3, 4, 7, 8, 10; `--sp-dist: 24px` | tanpopoen `img-fadein` [tok g] | enter viewport, 0.8s, sp-scroll default `cubic-bezier(.23,1,.32,1)` (reference measured as about ease-out) |
| Staggered walk | `sp-stagger` on parent, `sp-reveal sp-reveal--up` on figures | Blocks 4, 8; inner walks | tanpopoen section photos | enter viewport, 0.8s, same easing, 0.12s step |
| Parallax | `sp-parallax` | Blocks 1, 6, below | ours, replacing the reference's slow image fade | scroll, linear |

Hero has no reveal. Fee table, roster data, legal text and forms have no reveal. Copy `pipeline/assets/sp-scroll/` unchanged. No loader, no page transition, no GSAP, no scroll listener.

## 11. Parallax (required)

| Block | Layer | Image | Foreground | `--sp-par` desktop | under 782 px |
|---|---|---|---|---|---|
| `front-hero` | Cover background | H1 | none inside; strips and info are siblings outside the moving layer | 8% | 6% |
| `front-corridor` | Cover background | B1 | one strip, in Cover inner content, static | 10% | 6% |

Reference equivalent: the slow image fade after its loader, the calm movement of one large photograph. It has no scroll parallax, so this is our translation. Both stay on mobile. Must pass `check-parallax.mjs` (displacement at least 6 px; 0 with reduced motion).

## 12. Similarity table (target 80%)

| Dimension | Reference | Nodo Clinic |
|---|---|---|
| Ground | `#F8F8F4` | `#F8F8F4` |
| White share | `#FFFFFF`, about 12% | same |
| Text | `#3F2E1A` | same |
| Heading | `#1A6D1D` | same |
| Accent | `#EBCB22`, under 3% | same |
| Logo | yellow blob 180 x 130 | olive blob 104 x 84 (changed, section 2) |
| H2 | 24 to 32 px, 400, 0.2em | same size and weight; Latin 0.08em, CJK 0.2em |
| h3 | 19 px, 600 | same, 0.08em tracking |
| Body | 15 px, line-height 2.9 | 16 px, 2.1; CJK 1.85 (theme rule) |
| Text column | x 160 | x 160 |
| Hero | full bleed 1440 x 900 | full bleed, minus 72 px info bar |
| Strips | two, 52 px, white, low left | same |
| Nav | white pill, radius 40 px, y 29 to 97 | same, wider to hold wordmark |
| Photos | radius 0, no border, 300 to 525 px, 3:2 and 4:3 | same |
| Photo steps | x 95, 830, 220 | same |
| Link | 28 px disc, 1 px underline | same |
| Reveal | fade and rise, about 0.8s, ease-out | same, 24 px rise |
| Page motion | loader, barba | none, for first-screen speed |
| Illustrations | minor gouache blobs | none |

## 13. Home acceptance checklist

1. First screen shows all six KV items; H1 photo holds clinician, patient and otoscope on linen tray.
2. Strips: two, white, 52 px, vertical, x 160 and x 236 at 1440; never behind the info bar at 1280 x 720; hold the `h1`.
3. Blob and pill as specified; blob does not cover the text column.
4. Saturated share within limit; no table, form, search, filled button or centred text on the first screen.
5. Block order equals section 5; no team grid, step grid, timeline, dashboard, fee table.
6. Photo walk: three sizes, stepping left, right, left, unframed, empty voids.
7. Every link call to action is T3; yellow discs at 28 px.
8. 14 photos, no repeats, no text or logos, single STYLE.
9. Colours match section 2 exactly; H2 never above 2rem; 4.25rem only on numerals.
10. `--sp-par` set, both parallax areas pass; hero has no reveal.
11. 390 px: horizontal in-flow strips, no overlap. Auto-gates pass.
12. Theme fonts match in editor and front end; numbers match section 9.
