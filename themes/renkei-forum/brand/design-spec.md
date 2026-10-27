# Renkei Forum: design spec (stage 1, binding for implementation)

Slug `renkei-forum`, design-plan row b13-6. Type **landing** (rules.landing_track): the home page is one long conversion page with an anchor menu and **one repeated CTA** ("Request a ticket"); plus newsletter (waitlist), privacy, terms, thanks and the inner pages below. Category business-services, WooCommerce-compatible but not required.

Main reference (S5-Style, event / seminar category, not used by any earlier theme): **corekara "in-house EC brand case-study festival"** — https://corekara.co.jp/scratch/20260826_conference/ . Measurements: `reference-tokens.md` (every number below that says "token" comes from there). Screenshots: `ref/ref-first.png`, `ref/scroll-*.png`. We borrow structure, techniques, colour relation, key-visual concept and motion. We do **not** copy its photos, 3D glyph, copy, logo or full page layout.

Fixed brand facts (every page and all five languages use exactly these; brand.md must repeat them):
- **Renkei Forum 2027**, the 6th edition, organised by the Renkei Forum Association (founded **2019**), a non-profit that matches regional buyers with regional suppliers.
- Dates: **Thursday 13 – Friday 14 May 2027**. Day 1 doors 08:30, close 18:30 (with supplier reception 17:30–18:30). Day 2 doors 08:30, close 16:30.
- Venue: **Calder Hall, 12 Wharf Road, Northport** (fictional, international-neutral). Hall A = talks (420 seats), Hall B = 60 meeting tables, Foyer = 40 supplier tables.
- Numbers: **12 sessions**, **8 speakers**, **4 meeting rounds** (two per day), places for **160 buyers** and **220 suppliers**. Ticket requests close **16 April 2027**; meeting matching opens **19 April 2027**; every request answered within **5 working days**.
- Office: Mon–Fri 09:00–17:00, hello@renkeiforum.example.
- Currency **EUR** in every language (no converted prices).

---

## 1. Signature techniques (three, all obvious at a glance)

### T1. Accent title band + monumental centred object + ghost words + thin ellipse + marquee strips (corekara hero)
- **Reference** (`ref/ref-first.png`): a 201px electric-blue band runs the full width at the top (event name in heavy display type centred, date under it, speaker names small at left, pill nav at right). Below, a black field; dead centre a 612px-wide (42 %) bone-white monumental object that overlaps the band by ~25px; two ghosted giant glyphs (~6 % white) to its left and right, cut by the viewport edges; a 1px blue ellipse ≈1440×700 crosses everything; 99px uppercase marquee words run along the top and bottom of the field.
- **Ours, home B0+B1** (first screen): a **104px** `#0C62ED` band (lower than the ref's 201px only to keep the first-screen saturated share ≤15 %; the band is still full width, flat, and the strongest shape on screen). Centre: one documentary photograph (photo 01, the host fastening a blank badge at a linen desk, empty auditorium behind) at **42 % width, ratio 0.87:1, radius 0**, overlapping the band by **24px** (`margin-top:-24px`, z-index above the band). Ghost words "BUYERS" (left) and "MAKERS" (right), 1px `#0C62ED` ellipse, sector marquee top and bottom. Exact geometry in §3.
- **Must not be diluted**: band is solid accent, full width, flat (no gradient, no rounding); the photo stays centred and large (≥40 % width at 1280–1440) and really overlaps the band; ghost words really bleed off both viewport edges; the ellipse is visible (1px, full accent, not 20 % alpha).

### T2. Highlight-bar headings (corekara section H2s)
- **Reference**: each heading line sits on its own solid accent rectangle (inline `background:#0C62ED`, black text, tight line-height 0.9, negative tracking), left aligned at the 45px gutter; lines are separate blocks of different length.
- **Ours**: every section H2 on home and inner pages is 2–3 short lines, each line a `<mark class="rf-bar">` (or a paragraph line wrapped in a span) with `background:#0C62ED; color:#0B0C0D; padding:.04em .18em; box-decoration-break:clone`. Font Schibsted Grotesk 800, 3.375rem/0.9, letter-spacing −0.05em (token: H2 54px / lh 48.6 / ls −2.7px). Left aligned, never centred. First use in the first screen (B1 statement, bottom-left).
- **Must not be diluted**: bars are full accent with near-black text (not tinted, not outlined, not underlines); each line is its own bar with visible ink gaps between lines (line gap 6px).

### T3. Ellipse / dome containers (corekara speakers + timetable)
- **Reference** (`ref/scroll-speakers-ellipse-*.png`, `scroll-session-stack-*.png`): the speakers heading sits inside a full-width `border-radius:50%` ellipse 1350×315; the timetable opens under a huge dome curve (≈1700px circle clipped).
- **Ours**: home B5 Speakers heading inside a 1px-accent-outlined ellipse, fill `#0B0C0D`, width 100 % of content (1350px at 1440), height **19.6875rem (315px)**, `border-radius:50%`, label + T2 heading centred inside the ellipse (the only centred heading on the site — the ellipse is the frame). Home B6 Programme opens with a dome: the section's top edge is `border-radius: 50% 50% 0 0 / 220px 220px 0 0` in panel `#26282A` rising out of the ground colour.
- **Must not be diluted**: the ellipse is a true ellipse (50 %), at least 1200px wide on desktop, outline 1px full accent; the dome curve is ≥200px tall.

### Supporting structure (not counted): T5 sticky-rail programme
Programme = 225px sticky left rail (Day / date / time span / track pills) + stacked session cards, 3 columns 72 | 1fr | 234 (token), 1px `#4A4C4F` rules, radius 0, cards `position:sticky; top:45px` at ≥1024px so they stack while scrolling (CSS only).

### Continuation to inner pages (required, ≥4; we do all)
| Page | T1 | T2 | T3 |
|---|---|---|---|
| Programme | header band (template part) + sector marquee strip under page title | page H1 + day headings as bars | dome top on the schedule section; T5 rail with portraits |
| Speakers | header band + sector marquee strip under the title | name headings as bars (one bar each) | page title inside the ellipse container (same 315px ellipse) |
| Venue & travel | band + full-width photo 12 with ghost word "CALDER" bleeding off the left edge | H2 bars | floor plan list inside ellipse outline |
| Tickets | band + marquee | H2 bars | dome top over the price table |
| For buyers / For suppliers | band + ghost word "BUYERS" / "MAKERS" behind the title, bleeding off edge | H2 bars | ellipse callout around the key fact (free pass / table price) |
| Stories | band | case titles as bars | dome top |
| FAQ, About, Newsletter | band | H1 bars | Newsletter form card inside ellipse outline on ≥782px (rounded rectangle on mobile) |

Rule for implementer: every inner page template starts with the header band, then a page title block = `Sec.`-style small label (12px accent) + H1 in T2 bars, left aligned; then at least one T3 shape.

---

## 2. Colour

| Token | Hex | Role | Source |
|---|---|---|---|
| `ground` | `#0B0C0D` | body, hero field, most sections (~62 % page) | ref ground `#000000`, +4 % lightness and an ink tint (palette family ink) |
| `panel` | `#26282A` | meta strip, programme dome, cards, FAQ (~18 %) | ref panel `#262626` (same lightness, ink tint) |
| `ink` | `#3A3C3E` | marquee words, ghost-word outline-free fill on inner pages, disabled | row hex `#3A3C3E` |
| `rule` | `#4A4C4F` | 1px hairlines, card borders, table rules | ref hairline `#4C4C4C` |
| `accent` | `#0C62ED` | header/footer band, T2 bars, ellipse outline, labels, CTA hover (~8 % page) | ref accent `#0C62ED` (unchanged) |
| `text` | `#FFFFFF` | copy on ground/panel | ref |
| `text-2` | `rgba(255,255,255,.62)` → `#A3A4A5` on ground | secondary copy, captions | ref white 60 % |
| `on-accent` | `#0B0C0D` | text on band and bars | ref black on blue |

- Why keep the electric blue: the reference's contrast (black field + one electric accent) is the whole identity; the ink family is honoured by the ground/panel/ink greys and by the restraint of the accent's area. No second accent colour.
- CTA pill: `#0B0C0D` fill + white text on the band; on dark ground: white fill `#FFFFFF`, text `#0B0C0D`, hover fill `#0C62ED` + white text. Radius 999px, 238×50, padding 9px 40.5px (token).
- **First-screen saturated share ≤15 %** (scripts/check-first-screen.py; stricter than the row's 30 %). Budget at 1440×900: band 104px = 11.6 %; two T2 bars of the statement ≈ 2 %; ellipse ≈ 0.2 %; photo graded low-saturation ≈ <1 % → ≈14 %. **No** blue gradient behind the photo, **no** blue marquee text (ref has both; they are the cut that keeps us under 15 %). Mobile 390×844: band ≤76px (9 %).
- Footer: band again (accent, 200px CTA band) then ground footer.

## 3. Type

- font_direction **sans**. Latin: **Schibsted Grotesk** (headings, display, marquee, numbers; 700/800) and **Manrope** (body, UI; 400/500/600). CJK: **Noto Sans TC** (zh-TW) / **Noto Sans JP** (ja), gothic, 500/700 headings, 400 body. No serif, no mincho anywhere.
- Stacks (theme.json fontFamilies, loaded with fontFace from `assets/fonts/`, woff2, same in editor and front end, zh-TW and ja subsets included; copy `shared/inc/editor-lang.php` → `inc/editor-lang.php` and require it, since style.css will use `:lang()`):
  - heading: `"Schibsted Grotesk", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`
  - body: `Manrope, "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`
  - `:lang(zh-TW)` → put `"Noto Sans TC"` first after the Latin face; `:lang(ja)` → `"Noto Sans JP"` first. CJK sizes ≈0.75× of the Latin display sizes, body line-height 1.85, letter-spacing 0 (never negative for CJK). de/fr: `hyphens:auto`.
- Scale (theme.json fontSizes; px at 1440, fluid min for 390):

| Use | Size | Weight / lh / tracking | Token source |
|---|---|---|---|
| Band H1 "Renkei Forum" | **4.25rem** (68px) → 2.75rem mobile | 800 / 0.9 / −0.05em | H1 68.4px lh .9 |
| Ghost words | 15rem (240px) decorative, not in theme.json scale | 800 / 0.85 / −0.05em | ghost glyph ≈ 400px tall |
| Marquee | 6.1875rem (99px) → 3.5rem mobile | 800 uppercase / 1 / −0.03em | marquee 99px |
| H2 (bars) | 3.375rem (54px) → 2.25rem | 800 / 0.9 / −0.05em | H2 54 / 48.6 / −2.7px |
| H3 / session title | 1.4625rem (23.4px) | 700 / 1.4 / 0.05em | session title 23.4 / 32.76 / 1.17px |
| Body | 1rem (16px) | 400 / 1.7 / 0 | body 16px (lh raised from "normal" for long copy) |
| Small / abstract | 0.9rem (14.4px) | 400 / 1.5 | session body 14.4 / 1.5 |
| Label (Sec.01, 01/02) | 0.8rem (12.8px) | 600 / 1.2 / 0.04em, accent | labels 12–13px |
| Caption | 0.75rem | 500 / 1.4, text-2 | captions 9–10.8px (raised for legibility) |

Max size in theme.json = 6.1875rem (marquee) and 4.25rem H1 → satisfies ≥4.25rem.

## 4. Home page

### 4.1 First screen (1440×900) — exact composition
- **B0 header band** (template part `header`, not sticky): full width, `#0C62ED`, height 104px, gutters 45px. Three zones on one row:
  - left (300px): two small lines in `on-accent`, 0.8rem/1.3: "Regional Procurement Forum · 6th edition" and "13–14 May 2027 · Calder Hall, Northport".
  - centre: H1 "Renkei Forum" (site title), 4.25rem Schibsted 800, centred in the band (the only centred text in the header — a title band, not a giant centred headline).
  - right: anchor pills Programme · Speakers · Venue · Tickets · FAQ (radius 999, 1px `#0B0C0D` outline, 0.8rem, padding 4px 14px, gap 6px) + CTA pill "Request a ticket" (`#0B0C0D` fill, white text). Language switcher is a small text toggle after the CTA.
  - 782–1279px: pills hidden behind a "Menu" pill (core navigation overlay), left zone shows only the date line. ≤781px: band 76px, H1 2.75rem left aligned, Menu pill right, nothing else.
- **B1 hero KV** (`#top`, ground `#0B0C0D`, `min-height: calc(100svh - 104px)`, max 796px, `overflow:clip`, position relative). Layers back→front:
  1. Ellipse: absolutely positioned div, 1440×700 (100 % width × 88 % height), centred, `border:1px solid #0C62ED; border-radius:50%`, aria-hidden. Static.
  2. Ghost words "BUYERS" / "MAKERS": absolute, vertical centre at 52 %, 15rem Schibsted 800, colour `#1C1E20` (≈6 % lift over ground, token ghost 6 %), left word right-aligned so it ends 40px under the photo's left edge and its start bleeds off the left viewport edge; right word mirrored. aria-hidden. Hidden ≤781px.
  3. Marquee strips: top strip at y 0–99px of the hero, bottom strip at the last 99px; words in `#3A3C3E` (ink), 6.1875rem uppercase, `sp-marquee`; top runs left, bottom runs right (second strip reversed with `animation-direction:reverse` in theme CSS). Top: "PACKAGING · TEXTILES · FOOD & DRINK · LOGISTICS · COMPONENTS · FACILITIES ·". Bottom: "BUYERS MEET MAKERS · TWO DAYS · ONE HALL ·". Latin in all five languages (decorative, aria-hidden).
  4. Photo 01 in a Group `sp-parallax` (`--sp-par: 8%`), width 42 % (605px at 1440; min 520px at 1280), ratio 0.87:1 (≈ 605×695), radius 0, centred horizontally, `margin-top:-24px` so it overlaps the band by 24px (z-index 2 above band). No border, no shadow.
  5. Statement (T2, bottom-left, in normal flow inside a left column 45px from the edge, bottom 120px, max-width 340px): two bars "Two days." / "One room of buyers." 2.25rem Schibsted 800 on accent bars; under it 0.9rem text-2: "Place a request, get matched, sit down with the people who buy what you make." No reveal (hero).
  6. Right column (mirror, bottom 120px, right 45px, max-width 300px, right aligned): "12 sessions · 8 speakers · 4 meeting rounds" 0.8rem label, then the white CTA pill "Request a ticket" (the repeated CTA).
- **Mobile 390×844**: band 76px → photo 01 full width minus 20px gutters (ratio 0.87:1 crops to 4:5), no negative margin overlap of text (the band contains only H1 + Menu pill; overlap is image over band background only — or set 0 if the gate complains); top marquee strip in normal flow **above** the photo (3.5rem), bottom strip below the statement; statement and CTA stacked in flow under the photo. **No absolutely positioned text, no ghost words, no vertical text on mobile.** Ellipse kept as a 1px decorative outline behind the photo (absolute, no text).

### 4.2 Key visual concept
**(1) Reference first screen, story, signature motion.** corekara draws a blue title band carrying the event name, date, speakers and a pill nav; under it a black field with one monumental bone-white 3D calligraphic glyph ("festival") in the centre, overlapping the band, flanked by two ghosted giant glyphs and crossed by a thin blue ellipse, with 99px marquee words ("NO MORE WANDERING IN SEARCH OF THE RIGHT STRATEGY") running along the top and bottom. Story: one monumental symbol stands for the whole day — a festival of case studies where you stop wandering. Motion: intro black → blue band wipes in (0.9s power3.inOut), the marquees glide at ≈128px/s linear, the emblem and ghosts move at different scroll speeds (ScrollTrigger scrub .55–.8).

**(2) Our translation (regional procurement forum, buyers meet suppliers).** Same composition, same image type (one real photographed object-scene in the centre, monumental, light against a dark field) and same motion idea. The monumental symbol becomes **the moment the forum starts: a host's hands fastening a blank badge at a linen-covered registration desk, the empty 420-seat auditorium soft behind** — "the room is ready, your seat is waiting". The ghost glyphs become the two sides of the forum, **BUYERS** and **MAKERS**, flanking the photo; the marquee carries the sectors on the floor; the ellipse is the "circle" the two sides form. The photo floats at a different scroll speed than the page (sp-parallax), the marquee words glide, and the band is the title + ticket desk.

**(3) KV checklist** (all in the first screen at 1440×900 and visible):

| # | Reference element | Our counterpart | Position | Motion | Which image |
|---|---|---|---|---|---|
| 1 | 201px accent title band: event name, date, speakers, pill nav | 104px `#0C62ED` band: "Renkei Forum" H1 4.25rem centred, date/venue left, anchor pills + CTA right | top, full width, 45px gutters | none (static; ref load wipe dropped — hero has no reveal) | — |
| 2 | Monumental centred bone-white glyph 612px (42 %), overlaps band ~25px | Photo of host fastening a blank badge at a linen desk, auditorium behind; 42 % width, 0.87:1, radius 0, overlaps band 24px | centre | `sp-parallax` `--sp-par:8%` (mobile 6 %) | photo 01 `hero-badge-desk` |
| 3 | Ghosted giant glyphs left/right (~6 % white) | "BUYERS" / "MAKERS" 15rem in `#1C1E20`, bleeding off both viewport edges | left & right of photo, vertical centre 52 % | static (desktop only) | — |
| 4 | 1px blue ellipse ≈1440×700 crossing hero | 1px `#0C62ED` ellipse 100 % × 88 % of hero | behind everything, centred | static | — |
| 5 | 99px marquee words top & bottom | Sector words 6.1875rem in ink `#3A3C3E`, top strip ←, bottom strip → | top & bottom edges of hero | `sp-marquee`, ≈128px/s linear | — |
| 6 | Highlight-bar heading lines | Statement "Two days. / One room of buyers." on two accent bars + one-line lead | bottom-left, 45px gutter | none in hero | — |

## 4.3 Block order (home)

| # | Block (anchor) | Purpose | Layout / photo | Copy |
|---|---|---|---|---|
| B0 | Header band | title + anchor nav + CTA | §4.1 | — |
| B1 | Hero KV `#top` | key visual | §4.1, photo 01 | ~30 words |
| B2 | Meta strip | the facts in one line | panel `#26282A`, padding 45/45, 4 columns divided by 1px rules: Dates / Venue / Programme ("12 sessions · 8 speakers") / Meetings ("4 rounds of 20-minute tables"); label 0.8rem accent over value 1.4625rem | 4×8 words |
| B3 | Brief `#about` | why the forum exists | 12-col: left 5 cols H2 bars "Fewer cold emails." / "More tables with" / "the right people." (`sp-stagger` + `sp-reveal--wipe` per line); right 7 cols three paragraphs (~170 words) then photo 02 at 3:2, full column width, radius 0 | 170 words |
| B4 | How it works | the 4-step flow | 4 columns with a 1px top rule each, "01" accent label + 24×2px accent dash (token) + H3 + 2 lines: 01 Request a ticket → 02 Profile review (5 working days) → 03 Meeting matching (opens 19 April) → 04 Two forum days. No cards, no icons | 4×25 words |
| B5 | Speakers `#speakers` | who is on stage | panel ground; T3 ellipse 315px with label "Speakers" + H2 bars "Eight people who buy," / "make and move goods."; below, **8 portraits in one row** flush on a 1px rule grid (each ≈168px wide at 1440, ratio 0.82:1, `filter:grayscale(1) contrast(1.08)` — token: B/W speaker portraits), name 1rem 700 + role 0.75rem text-2 under each. 782–1279: 4×2; ≤781: 2-column grid | 8×10 words |
| B6 | Programme `#programme` | the schedule | dome-top panel; T5: sticky rail 225px (Day 1 · Thu 13 May · 09:00–18:30 / Day 2 · Fri 14 May · 09:00–16:30) + 6 stacked cards (Sec.01–03 day 1, Sec.07–09 day 2), cols 72 \| 1fr \| 234: "Sec.01" + time / title H3 + 2-line abstract / speaker name + org + track pill (`#26282A` pill, accent text, radius 999). **No portraits here** (same page as B5). Link "Full programme →" | 6×35 words |
| B7 | Venue `#venue` | where and when | full-bleed photo 11 (21:9, 640px tall) in Group `sp-parallax` `--sp-par:6%`; foreground info panel `#0B0C0D` 420px wide at left-bottom (inside the frame, 45px inset, not moving): address, Hall A/B/Foyer, doors 08:30, closes 18:30 / 16:30, "8 minutes on foot from Northport Central" | 70 words |
| B8 | Stories from 2026 | proof by example | left 5 cols photo 13 (4:5); right 7 cols H2 bars "What came out" / "of last year" + 3 stories stacked with 1px rules, each "Case 01" label + H3 + 3 lines (§6) | 3×45 words |
| B9 | Tickets `#tickets` | conversion | row: left H2 bars "Request a ticket" + 2 lines; right photo 14 at 3:2, 40 % width. Below **full-width price table** (6 rows, §6) and the CTA pill | table + 40 words |
| B10 | FAQ `#faq` | objections | centred 810px column (token), 6 `details` with 1px rules, + "All questions →" | 6×30 words |
| B11 | Closing band | repeated CTA | accent band 200px: H2 "13–14 May 2027 · Calder Hall" left, CTA pill (black) right; under it one ink marquee strip on ground | 15 words |
| — | Footer | | ground; 4 columns: forum / pages / office hours / newsletter link; legal links | |

Home photo positions: 01, 02, 03–10 (8 portraits), 11, 13, 14 = **14 positions**, no repeats. English copy ≥250 words in ≥3 narrative paragraphs (B3 has 3).

### 4.4 Comparison with recent themes (must not resemble)

| # | Renkei Forum | Shizuku Filter | Kasane Venue | Kaname Watches | Ayumi Podiatry |
|---|---|---|---|---|---|
| 1 | accent title band = header | header band wordmark | blob hero | framed two-pane crossfade | 2×2 halves hero |
| 2 | dark field, centred monumental photo + ghost words + ellipse + marquee | full-bleed hero photo + badge | full-bleed parallax opening | product tiles strip | listening narrative |
| 3 | meta strip | info bar | house concept | bench price list | parallax room band |
| 4 | highlight-bar brief | WHY rail + photo | 4 room sections alternating | story / visit | rotated photo wall |
| 5 | 4-step flow (rules) | rewards capsules | day timeline | footer CTA | method cards |
| 6 | ellipse speakers + 8-portrait row | schedule | stories row of 3 | | outcomes marquee |
| 7 | dome + sticky-rail stacking programme | makers | CTA | | FAQ |
| 8 | full-bleed venue + panel | stories | | | |
| 9 | photo + stacked stories | FAQ | | | |
| 10 | tickets table, FAQ, accent CTA band | | | | |

Why different: the only dark-ground theme of the five; the hero is a centred object on a field under a title band (no other uses a centred monumental image or a band header); headings are highlight bars (none of them); speakers sit under an ellipse in a single flush row (no team grid); the programme is sticky stacking cards on a rail (Shizuku's schedule is a plain list, Kasane's is a timeline); Ayumi's marquee is a text band between sections, ours lives inside the hero as texture.

## 5. Inner pages (≥8 + landing extras)

| Page (slug) | Key content | Photos | Signatures |
|---|---|---|---|
| Programme (`programme`) | all 12 sessions over 2 days + 4 meeting rounds + breaks; T5 rail + stacking cards **with 234px B/W portrait column** (ref card); track legend (Sourcing / Matching / Contracts) | 12 (page header, 21:9), portraits 03–10 in cards | T1 band + marquee, T2, T3 dome |
| Speakers (`speakers`) | 8 bios (80–100 words each), session they give, alternating portrait 0.82:1 left / text right on 1px rules | 03–10 | T3 ellipse page title, T2 names |
| Venue & travel (`venue`) | Calder Hall address, halls and capacities, hours per day, transit (train, bus, bike parking), accessibility, nearby hotels (3 fictional) | 12, 15 | ghost "CALDER", ellipse floor list |
| Tickets (`tickets`) | price table (6 rows), what each pass includes, 4-step flow, refund rule (full refund until 16 April, then transferable), invoice details, CTA → form | 14 | dome over table |
| For buyers (`for-buyers`) | who qualifies for the free buyer pass, how meeting requests work (up to 8 per buyer), what to prepare | 02 | ghost "BUYERS", ellipse callout "€0 after profile review" |
| For suppliers (`for-suppliers`) | pass vs table, table spec (180×75 cm, 2 chairs, power), meeting package, sample rules | 13 | ghost "MAKERS", ellipse callout "€1,450 table, 2 passes" |
| Stories (`stories`) | the 3 cases in full (≈180 words each), what changed for each side | 16, 17, 13 | T2 titles, dome |
| FAQ (`faq`) | 12 questions in 3 groups | — | T2, ellipse group headings |
| About (`about`) | association since 2019, Ilse Varga + team, contact, office hours, code of conduct summary | 03 (Ilse Varga) | T2, ellipse callout "since 2019" |
| Newsletter (`newsletter`) | waitlist / early access for 2028 + updates, form in ellipse (desktop) | 18 | T3 |
| Thanks, Privacy, Terms | short; thanks repeats dates + "what happens next" | Thanks: 18 | band + T2 H1 |


## 6. Fixed numbers (identical on home, inner pages, five languages)

**Tickets (EUR)** — price column right-aligned, `white-space:nowrap`:
| Pass | Includes | Price |
|---|---|---|
| Buyer delegate, two days | talks, meeting rounds, lunch both days (after profile review) | €0 |
| Supplier pass, two days | talks, up to 4 meeting requests, lunch both days | €290 |
| Supplier pass, one day | talks and meetings on the chosen day, lunch | €180 |
| Supplier table, two days | foyer table 180×75 cm, power, 2 supplier passes | €1,450 |
| Meeting package (add-on) | 6 pre-booked 20-minute meetings | €240 |
| Observer, two days | public-sector staff and students, talks only | €60 |

**People (8):** Ilse Varga — forum director (host); Tomás Ferreira — head of packaging category, Northport Grocers' Cooperative; Amara Nwosu — supplier development lead, Northport city procurement office; Chen Wei-Lin — founder, contract textiles workshop; Mirela Novak — regional logistics planner; Rafael Duarte — components buyer, agricultural machinery maker; Sophie Brandt — food-safety auditor; Kofi Mensah — small-business finance adviser.

**Programme (12 sessions, 25–40 min):** Day 1 — Sec.01 09:00 Opening: why regional (Varga) · Sec.02 09:40 Splitting a tender into lots (Nwosu) · Sec.03 10:30 Packaging that travels 80 km, not 8,000 (Ferreira) · Meeting round 1 11:15–12:45 · Sec.04 14:00 Uniform contracts for small workshops (Chen) · Sec.05 14:45 Shared deliveries (Novak) · Meeting round 2 15:30–17:00 · Sec.06 17:00 Q&A panel · reception 17:30–18:30. Day 2 — Sec.07 09:00 Buying components close to home (Duarte) · Sec.08 09:40 Passing an audit the first time (Brandt) · Sec.09 10:30 Payment terms that keep suppliers alive (Mensah) · Meeting round 3 11:15–12:45 · Sec.10 14:00 Writing a supplier profile buyers read (Varga) · Sec.11 14:40 Lots, frameworks, call-offs (Nwosu & Duarte) · Meeting round 4 15:15–16:15 · Sec.12 16:15 Closing.

**Stories (3, 2026 edition, no claimed figures beyond these):** Case 01 a bakery cooperative found a flour mill 60 km away and moved to monthly deliveries; Case 02 the city kitchen split one catering tender into 4 lots so two local growers could bid; Case 03 a textiles workshop and a hospital laundry agreed a 2-year uniform trial.

**Flow (4 steps):** Request → Profile review (≤5 working days) → Matching (opens 19 April 2027) → Forum days 13–14 May 2027.

## 7. Photos (18, Grok, one at a time, read each one)

STYLE (identical for all 18):
`Documentary photograph, real moment at a modern regional business forum in an international city, natural daylight mixed with soft overhead hall light, high-key exposure, muted colour-neutral grade (linen white, warm grey, charcoal, no strong colours), low saturation, 35mm lens, shallow depth of field, unposed, diverse adults in plain business-casual clothes, clean contemporary architecture, no text, no letters, no logos, no signage, no brand names, no Japanese elements, no cut-out background.`

| # | File | Subject / composition | Ratio | Used on (★ = home) |
|---|---|---|---|---|
| 01 | hero-badge-desk.webp | close: a host's hands fastening a **blank** fabric badge onto a lanyard at a linen-covered registration desk, row of blank badges, empty auditorium rows softly blurred behind; subject centred, light linen against darker hall | 4:5 (crop 0.87:1) | ★ B1 hero |
| 02 | buyer-supplier-table.webp | buyer and supplier at a small meeting table, samples and an open notebook between them, side view | 3:2 | ★ B3; For buyers |
| 03 | portrait-varga.webp | head-and-shoulders, woman ~50, plain light-grey wall, soft window light | 4:5 | ★ B5; Speakers; Programme; About |
| 04 | portrait-ferreira.webp | man ~40, same setup | 4:5 | ★ B5; Speakers; Programme |
| 05 | portrait-nwosu.webp | woman ~35, same setup | 4:5 | ★ B5; Speakers; Programme |
| 06 | portrait-chen.webp | woman ~45, East-Asian, same setup | 4:5 | ★ B5; Speakers; Programme |
| 07 | portrait-novak.webp | woman ~30, same setup | 4:5 | ★ B5; Speakers; Programme |
| 08 | portrait-duarte.webp | man ~55, same setup | 4:5 | ★ B5; Speakers; Programme |
| 09 | portrait-brandt.webp | woman ~40, same setup | 4:5 | ★ B5; Speakers; Programme |
| 10 | portrait-mensah.webp | man ~45, same setup | 4:5 | ★ B5; Speakers; Programme |
| 11 | venue-foyer.webp | wide: bright foyer of a converted wharf hall, tall windows, rows of empty supplier tables with linen, morning | 21:9 | ★ B7 (parallax) |
| 12 | auditorium-empty.webp | wide: empty 400-seat auditorium, grey seats, low stage, daylight from side | 21:9 | Programme header; Venue |
| 13 | supplier-samples.webp | supplier table with packaging, fabric swatches and jars, a visitor's hand picking one up | 4:5 | ★ B8; For suppliers; Stories |
| 14 | registration-queue.webp | short queue at registration desk, people holding phones, host checking a list (no readable screen) | 3:2 | ★ B9; Tickets |
| 15 | meeting-hall-tables.webp | Hall B: many small two-chair tables with people talking, overhead view | 3:2 | Venue |
| 16 | loading-bay.webp | small loading bay, pallets of flour sacks (unlabelled), worker with a hand trolley | 3:2 | Stories (case 01) |
| 17 | city-kitchen.webp | large public kitchen, cooks unloading crates of vegetables | 3:2 | Stories (case 02) |
| 18 | lanyards-notebook.webp | flat lay on linen: blank lanyards, notebook, pen, coffee cup | 3:2 | Newsletter; Thanks |

Portraits are displayed with `filter: grayscale(1) contrast(1.08)` (ref B/W portraits); all other photos in colour as generated. ≤300 KB, ≤2000px, 0 cut-outs.

## 8. Scroll effects (sp-scroll) and parallax

| Effect | sp-* class | Where | Reference behaviour (corekara) | Ours |
|---|---|---|---|---|
| Marquee | `sp-marquee` | B1 top + bottom strips, B11 strip, Programme/Tickets page strips | JS rAF, ≈128px/s, linear, two copies | spec default 30s linear; theme CSS overrides `animation-duration` so speed ≈128px/s (one copy ≈3200px → 25s); bottom strip reversed |
| Highlight-bar wipe | `sp-stagger` on the H2 group + `sp-reveal sp-reveal--wipe` on each bar line | B3, B5 (inside ellipse), B8, B9 H2s; inner page H2s | ScrollTrigger start `top 68%`, scrub .7, ease none | spec 1.1s `cubic-bezier(.77,0,.175,1)`, stagger 0.12s; clip on the child, not on the observed element |
| Parallax (required) | `sp-parallax` | **B1 hero** (Group around photo 01, figure>img) `--sp-par:8%`; **B7 venue** (Group with photo 11) `--sp-par:6%` | ScrollTrigger scrub .55–.8, emblem/ghosts at different speeds | photo moves inside its 0.87:1 frame (scale 1.18), the band, statement, CTA and ghost words stay static (no text in the moving layer). Mobile keeps both (`--sp-par:6%` hero, 5 % venue via media query) |

No reveal in B1 or B0; none on the price table, forms, FAQ or legal text. Session cards: no reveal (sticky stacking is the motion). Count of `.sp-reveal` ≤60 % of home blocks. Must pass `check-parallax.mjs` (≥6px desktop and mobile, 0 with reduced motion; ≥3 wipe bars hidden before entry).

## 9. Responsive rules
- 390px: no vertical text, no absolutely positioned labels over text, no ghost words; marquee strips in flow; band 76px; no horizontal overflow (hero `overflow:clip`).
- Price table: at ≥782px full content width (1350px at 1440), 3 columns 30 % / 1fr / 140px, price column `white-space:nowrap; text-align:right`, never cut at 800 or 1280. ≤781px every table (price, programme, venue hours) becomes stacked rows: label line, then value line, price on its own line right-aligned.
- Programme cards: sticky stacking only ≥1024px; below that normal flow, rail becomes a day heading, card columns stack (Sec + time / title + abstract / speaker).
- Speaker row: 8 → 4×2 (782–1279) → 2 columns (≤781).
- Ellipse on ≤781px: becomes `border-radius: 160px / 80px` rounded shape with padding 32px so the heading never touches the curve.

## 10. Similarity table (target ≈80 %)

| Dimension | Reference (token) | Renkei Forum |
|---|---|---|
| Ground / panel / accent | `#000000` / `#262626` / `#0C62ED` | `#0B0C0D` / `#26282A` / `#0C62ED` |
| Accent share first screen | 27 % | ≈14 % (gate ≤15 %) |
| Text | white, white 60 % | white, white 62 % |
| Hairline | `#4C4C4C` 1px | `#4A4C4F` 1px |
| Gutter | 45px | 45px (20px mobile) |
| Top band | 201px blue, title centred | 104px blue, title centred |
| H1 | 68.4px / lh .9 / −0.05em | 68px (4.25rem) / .9 / −0.05em |
| H2 | 54px / 48.6 / −2.7px, on blue bars | 54px / .9 / −0.05em, on blue bars |
| Session title | 23.4 / 32.76 / 0.05em | 23.4px / 1.4 / 0.05em |
| Body | 16px | 16px / 1.7 |
| Pills / CTA | radius 999, 238×50, pad 9 / 40.5 | same |
| Ellipse | 50 % radius, 1350×315; hero 1px ellipse 1440×700 | same sizes |
| Cards | radius 0, 72 \| 816 \| 234, sticky top 45 | radius 0, 72 \| 1fr \| 234, sticky top 45 |
| Hero object | 612px (42 %), overlaps band 25px, radius 0 | 42 %, overlaps 24px, radius 0 |
| Ghosts | ~6 % white, bleed off edges | `#1C1E20` (~6 %), bleed off edges |
| Marquee | 99px uppercase, ≈128px/s linear | 99px uppercase ink, ≈128px/s linear |
| Portraits | B/W, flush 1px grid | grayscale(1), flush 1px grid |
| Motion easing | scrub; cubic-bezier(.77…)/(.22,1,.36,1) | wipe .77,0,.175,1 1.1s; parallax view() |
| Photos / copy / logo | theirs | ours (Grok, own copy, own wordmark) |

## 11. Home acceptance checklist
1. First screen 1440×900 shows all 6 KV items: accent band with centred "Renkei Forum", photo 01 centred at ~42 % overlapping the band, BUYERS/MAKERS ghosts cut by both edges, 1px ellipse, two marquee strips, statement on two accent bars.
2. check-first-screen saturated share ≤15 %; no blue gradient, no blue marquee text.
3. Dark ground everywhere except accent bands; no beige/cream sections; no second accent colour.
4. Every H2 on home is T2 bars (left aligned except inside the ellipse).
5. Speakers ellipse is a real 50 % ellipse ≥1200px wide with 1px accent outline; 8 portraits in one flush B/W row at 1440.
6. Programme opens with a ≥200px dome; rail + 6 cards, sticky stacking ≥1024px; no portraits in the home programme.
7. Venue full-bleed photo 11 with parallax; info panel not moving.
8. Price table full width at 800 and 1280, price column nowrap right, 6 rows exactly as §6; stacked at 390.
9. "Request a ticket" is the only CTA label (band, hero, tickets, closing band), all → `/tickets/#request`.
10. ≥14 image positions, no repeats on the page; ≥250 English words; dates, venue, numbers and prices match §6.
11. Fonts: Schibsted Grotesk headings, Manrope body, Noto Sans TC/JP for zh-TW/ja, via theme.json fontFace, same in editor; no serif.
12. 390px: no horizontal overflow, no overlapping text, no ghost words, no vertical text.
13. Motion: check-parallax pass (hero and venue), marquee moving, wipe bars reveal, `?sp-static` final state, reduced-motion static.
