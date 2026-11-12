# Kikai Fair — design spec (stage 1)
Theme: Kikai Fair (`kikai-fair`), plan row b29-6, type **landing** (events-community), five languages (en, zh-TW, ja, fr, de).
Reference: https://www.bigsight.jp/english/ (single main reference, measured in `reference-tokens.md`). No secondary reference.
Imagery: **photo** (stage-a `IMAGERY: photo`) — documentary, high-key, real-photography STYLE below. 0 cut-outs.
Font direction: **sans** — Latin Hanken Grotesk (display) + Instrument Sans (body); CJK Noto Sans TC / Noto Sans JP (CJK sans "hei" direction, no Mincho anywhere).
Similarity target: ~80 % to the reference in colour, image presentation, decoration, layout rhythm, motion timing. Photos and copy are our own; no reference asset, text or logo.

---
## 1. Fixed facts (use everywhere: home, inner pages, five languages)
| Item | Value |
|---|---|
| Name | Kikai Fair 2027 — the 9th edition (founded 2011, biennial) |
| What | Trade fair for woodworking machinery: panel processing, CNC, edgebanding, solid-wood machining, finishing, dust extraction, tooling |
| Dates | Tue 9 – Thu 11 March 2027 (3 days) |
| Hours | Day 1–2: 09:00–17:30 · Day 3: 09:00–16:00 · Exhibitor build-up: Mon 8 March 07:00–20:00 |
| Venue | Hall 4, Riverside Exhibition Centre, 12 Harbour Road, Lindmark (fictional, international-neutral) |
| Floor | 22,000 m², 180 exhibitors, 62 machines running under power, 4 floor zones (A Panel & CNC · B Edge & Solid wood · C Finishing · D Extraction & Tooling) |
| Organiser office | Kikai Fair Office, 3rd floor, 40 Quay Street, Lindmark · Mon–Fri 09:00–17:00 · hello@kikaifair.example |
| Passes close | Online pass requests close **Sun 21 February 2027** (notice strip) |
| Single CTA | "Request a pass" → `#pass` on home and `/request-a-pass/` page (same wording in every language) |

### Price list (7 rows; identical on home "How to come", /visit/, /request-a-pass/, /exhibitors/)
| Item | Price |
|---|---|
| Trade day pass (pre-registered) | €25 |
| Three-day trade pass | €45 |
| Apprentice / student day pass (with school ID) | €10 |
| Group pass, 5 people, one day | €100 |
| Shell stand 9 m² (exhibitor) | €2,700 |
| Raw floor space, per m² (min. 18 m²) | €240 |
| Live demonstration slot, 30 min on the Demo Stage | €180 |

### Named people (8)
1. **Mira Halvorsen** — fair director (organiser; about, home value 01 quote)
2. **Tomás Ferreira** — exhibitor relations lead (exhibitors page)
3. **Aiyana Brooks** — visitor services & passes (request-a-pass, visit)
4. **Kwame Asante** — floor safety & power (programme: safety briefing 08:30)
5. **Lena Vogt** — Demo Stage host (programme)
6. **Rafael Ortega** — exhibitor, CNC router maker, stand A-14 (story 1)
7. **Priya Nair** — buyer, kitchen-cabinet workshop owner (story 2)
8. **Jonas Lindqvist** — joinery apprentice teacher, brings a class (story 3)

### Stories from the 2025 edition (3; news posts + exhibitors page)
1. "Six panels, one afternoon" — Rafael Ortega ran the same nesting job six times for six workshops on Day 2.
2. "Buying the edgebander she had only seen on paper" — Priya Nair compared three edgebanders in zone B before ordering one.
3. "Twelve apprentices and a dust meter" — Jonas Lindqvist's class measured extraction at each stand in zone D.

### A day at the fair (horizontal day line; same times everywhere)
08:30 Exhibitor safety briefing · 09:00 Doors open · 10:00 First live cutting demo (Demo Stage) · 12:30 Lunch talks (Stage B) · 14:00 Booked buyer meetings · 16:00 Last demo · 17:30 Doors close (16:00 on Day 3)

### Process "How to come" (3 steps, no step grid — written inline in value 03)
Request a pass → receive a QR pass by email within 2 working days → scan at the Hall 4 north entrance.

---
## 2. Signature techniques (from bigsight.jp/english — must be obvious at a glance)

### T1 — Dark faceted band + one-row strip of four white poster cards
- **Reference:** directly under the hero, a full-bleed black band (`#000`, padding 92 px top / 77 px bottom). A diagonal wedge of pale 3D triangular facets bleeds in from the left (covers ~0–60 % of width, apex leaning right). Centred white serif title ~36 px, 2-line centred lead, white 260×48 outline button with long thin arrow; below, one row of four white cards (350 px wide, 10 px gaps, image area 4:3 white box) with date line + name in white 16/28 under each; long-arrow prev / pause / next controls centred below.
- **Ours (home block 3, `#floor`):** band `#0E100F`, padding 92 px / 77 px. Facets = theme SVG `assets/img/facets.svg` (inline-able, no text), triangles in `#2A2E2C`, `#3A3F3C`, `#4E5350` at 35–60 % opacity, wedge from x=0 to x=58 % at top narrowing to 30 % at bottom (12° lean, same angle as hero diagonal). Title "On the floor" Hanken Grotesk 700 2.25rem white centred; lead 2 lines max-width 46rem, `#E1DED5`; white outline button "See the floor plan →" (260×48, 1 px white border, transparent fill, arrow `#957123`). Four cards in one row (each `calc((100% - 30px)/4)`, gap 10 px, full width of the band, i.e. edge-to-edge like the reference with 5 px outer padding): white card, photo 4:3, under it in white text: zone line ("Zone A · Panel & CNC", 0.875rem, `#C9B27A`) + name (1rem/1.75, 2 lines). Controls row: two long thin arrows (48 px line) and a pause glyph, centred, white — decorative-only on home (cards are static, no carousel; the arrows link to `/exhibitors/#zones`).
- **Do not dilute:** black-ish band must be the darkest thing on the page, ≥ 620 px tall at 1440; the facet wedge must be visible (not < 25 % opacity overall); cards white on black, four in one row ≥ 782 px. On mobile: horizontal scroll-snap row (cards 78 vw), not a stack, keeps the "strip" idea.

### T2 — "value 01 / 02 / 03" rows with rotated micro-label, giant ochre numeral, slash-divided stat quad, 3:2 photo / stepped mosaic; row 02 on a full-bleed ochre band
- **Reference:** white rows ~120 px vertical padding; left column 50 %: rotated (90°, reading bottom-to-top) "value" 14 px ochre beside a 64 px ochre serif numeral "01"; heading 32/51 bold; 2-line lead; 2×2 stat quad (12 px bold caption left of a 44–48 px ochre numeral with small unit; "/" divider between the two columns); outline button. Right column: 620×400 photo (3:2). Row 02 flips: full-bleed `#957123` band, 2+1 stepped mosaic (308×200 / 308×140 / 308×200, 10 px gaps, right column offset 60 px down) on the LEFT, white text on the right. Row 03 white again, photos right with captions below.
- **Ours (home blocks 4, 5, 6):** exactly this rhythm.
  - 01 "Who is on the floor" (white): numeral `01` Hanken Grotesk 700 **4.25rem** `#957123`, rotated label "part" 0.875rem uppercase tracking .12em. Stat quad: `180 exhibitors / 62 running machines` and `4 floor zones / 22,000 m²`, numerals 2.75rem 700 ochre with `sp-count`. Photo V01 3:2 right (max 620×413).
  - 02 "How a day at the fair runs" (full-bleed ochre `#957123` band, white text): mosaic M01/M02/M03 left (2+1 stepped, sizes as reference ratios 3:2 / 11:5 / 3:2), right: numeral `02` white, heading, lead, and the **horizontal day line** (see block 5) beneath the text spanning the full container width under both columns.
  - 03 "How to come" (white): numeral `03`, heading, lead + the 3-step process inline, price list (7 rows), button. Photos right: V03a and V03b stacked in a 2-up stepped pair with captions under them (reference value 03 building photos with captions).
- **Do not dilute:** numerals ≥ 4.25rem and ochre; the rotated micro-label must be rotated (it is decorative, `aria-hidden` duplicate text allowed; it is written in block markup, not CSS `content:`) — **desktop only**, on < 782 px it becomes a normal horizontal eyebrow (no vertical text on mobile). Row 02's ochre must be full-bleed (edge to edge), not a card.

### T3 — Triangle-lattice corner motif + white hairline outline buttons with long thin ochre arrow
- **Reference:** pale sand downward triangles (`#EDE9E1`), block 176×150 px glued to the top-left viewport corner of white sections (and mirrored top-right in 50 % white on the ochre band). Buttons: 260×48, white fill, 1 px `#333` hairline, centred label 16 px, long thin arrow (~24 px line, ochre) at right, background-colour transition .2 s.
- **Ours:** `assets/img/lattice.svg` (triangles 3 cols × 3 rows, alternating offset, fill `#EDE9E1`), 176×150, absolutely positioned at top:0 left:0 of white sections (`.kf-lattice` modifier on the Group, CSS background — decoration only, behind content, `aria-hidden`); mirrored (`.kf-lattice--right`, `transform: scaleX(-1)`, fill `rgba(255,255,255,.5)`) on the ochre band. Buttons: `.kf-btn-line` — 260×48 min, 1 px `#333333` border, white fill, label Instrument Sans 500 1rem, arrow = inline SVG 28×6 line with 4 px head, `#957123`; hover: background `#F0EEEA`, `.2s ease`. On dark: transparent fill, white border, ochre arrow, hover `rgba(255,255,255,.08)`.
- **Do not dilute:** lattice visible at 1280 (≥ 150 px tall), never scaled below 120 px on mobile (on 390 px: 120×102). Radius 0 on every button and card.

### Supporting — twin audience bars docked across the hero photo's lower edge
Reference: two bars, ochre `#957123` | charcoal `#333`, 635×110 each at 1440, inset 80 px, 10 px gap, overlapping the hero illustration's bottom edge by ~30 px; "For" small + big word + long arrow. Repeated as the footer's first row.
Ours: "For visitors" (ochre) | "For exhibitors" (graphite `#4E5350`), same geometry (`calc(50% - 5px)`, height 110 px, inset 80 px, overlapping hero bottom edge by 30 px), "For" 0.875rem + word 1.5rem 700 white + 48 px thin white arrow right. Both link to `#pass` (visitors) / `/exhibitors/#stand` (exhibitors). Repeated in the footer above the address line (reference footer). Mobile: stacked full-width bars 72 px high, in normal flow under the hero (not overlapping, no absolute positioning).

### Carry-through to inner pages (≥ 4)
| Page | T1 | T2 | T3 | Twin bars |
|---|---|---|---|---|
| /exhibitors/ | Page hero = dark faceted band with title + 4 zone cards; second strip of 4 "2025 stories" cards | — | outline buttons | footer |
| /programme/ | — | Day 1 / 02 / 03 as numerals 01–03 with rotated "day" label, day 02 on full-bleed ochre band, horizontal day line in each | lattice top-left | footer |
| /about/ | — | value rows 01–03 (history 2011, organiser team, floor rules) with stat quad | lattice | footer |
| /visit/ | faceted band as the "Getting there" header | stat quad (hours / distance) | lattice + outline buttons; parallax access band reused | yes, top |
| /request-a-pass/ | — | numeral 01–03 = the three steps | lattice; form under step 01 | yes (top, both linking to the in-page form anchors) |
| /newsletter/ | faceted band header (short, 360 px) | — | outline button | footer |
| /news/, single | — | — | lattice top-left on the list, hairline buttons for pagination | footer |

---
## 3. Key visual concept
### (1) Reference first screen (bigsight.jp/english)
- **Concept / picture:** a full-width woodblock-style drawing of the exhibition hall itself — the inverted-pyramid building rising out of a great wave, with mountain and boats — under a red "Important announcement" strip. Two small white side cards float at the right edge, a white outline link sits at lower right, and two big audience doors ("For Visitors" ochre / "For Organizers" charcoal) are docked across the bottom of the picture.
- **Story:** "Where excitement crosses" — the venue is the meeting point where organisers' stands and visitors cross; every visitor is routed to one of two doors.
- **Signature motion:** autoplay hero carousel with a pause control (top right), event-strip carousel below with long-arrow prev/next + pause; hover background transitions .2 s; no scroll effects.

### (2) Our translation (woodworking machinery fair, same composition, same image type for the body = photo)
The picture is the meeting itself at a machine: a documentary photograph **H01** of an exhibitor feeding a board through a sliding panel saw on a stand while a buyer leans in, ear defenders lowered around the neck, watching the cut — "exhibitors and buyers meet at the machine". Same composition as the reference: notice strip on top, one big full-width picture, a small white side card at the right, an outline link at the lower right, and twin audience doors docked across the bottom. The reference's diagonal / pyramid geometry becomes our **diagonal split** (plan hero `diagonal-split`): the photo fills the left ~62 % and is cut by a 12° diagonal into a graphite panel that carries the H1. The plan's `timeline-line` first screen is the thin horizontal date line across the bottom of the graphite panel (Day 1 · Day 2 · Day 3 ticks). Motion mirrors the reference carousel: a calm crossfade between three photographs of the floor (H01 → H02 → H03), 8 s each, 1.2 s fade, with a visible pause button top-right of the photo. The reference's hero is illustrated but every other reference image is photographic, so we keep photography (stage-a IMAGERY photo).

### (3) KV checklist (all visible in the first screen at 1440×900; mobile notes in §7)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Red "Important announcement" strip with tab | Notice strip: tab "Notice" 192×60 `#BD2D2D` white text + bar `#FAE3E3` with chevron link "Pass requests close 21 February 2027 ›" | full width directly under the header (top 88 px → 148 px) | none | — |
| 2 | Full-width hall illustration | Full-bleed photo H01 (exhibitor at panel saw, buyer with ear defenders lowered) cut by a 12° diagonal into a graphite `#4E5350` panel holding H1 "Machines running. Buyers listening." + 2-line lead | hero: photo x 0–62 % (diagonal edge from 66 % at top to 56 % at bottom), panel the rest; height `min(78vh, 720px)` | 3-photo crossfade H01→H02→H03, 8 s hold / 1.2 s fade, pause button (36×36, top-right of photo) | H01, H02, H03 |
| 3 | Two floating white side cards | One white card 220 px wide "9–11 March 2027 · Hall 4" with the timeline line inside the panel: 1 px `#E1DED5` line with three 8 px ticks "Day 1 / Day 2 / Day 3" and times | inside graphite panel, right edge inset 80 px, y ≈ 200 px from hero top; timeline line along panel bottom above the bars | none | — |
| 4 | Twin audience bars docked at the picture's lower edge | "For visitors" ochre `#957123` / "For exhibitors" graphite `#4E5350`, 110 px high, 10 px gap, inset 80 px | bottom of hero, overlapping the photo/panel edge by 30 px | background .2 s hover (`#7F601E` / `#424744`) | — |
| 5 | White outline link lower right | `.kf-btn-line` white "Request a pass →" 260×48 (the single repeated CTA) | graphite panel, under the lead, above the bars | hover .2 s | — |
| 6 | Dark band with title + event strip starting at the fold | T1 band top edge visible at y ≈ 840–900 (title "On the floor" peeks at the fold on 1440×900 like the reference) | directly below the hero | cards `sp-stagger` + `sp-reveal--up` (below the fold only) | C01–C04 |

---
## 4. Home page (one long conversion page, anchor menu, one repeated CTA "Request a pass")
Header (centred nav): logo wordmark left "KIKAI FAIR" (Hanken Grotesk 700, tracking .2em caps, mirrors reference logo tracking), centred anchor menu `On the floor · Who · A day · How to come · Newsletter`, right: language switcher + small `Request a pass` text link with ochre arrow. Height 88 px, white, bottom hairline `#ECEDEE`. **Exactly one top menu.** Sticky: no (reference header is static).

| # | Block (anchor) | Purpose | Layout / images | Copy |
|---|---|---|---|---|
| 1 | Notice strip | urgency, one link | KV #1 | 1 line |
| 2 | Hero `#top` (diagonal split + timeline line + twin bars) | promise + date + CTA | KV #2–5; H01 (H02, H03 crossfade) | H1 ≤ 6 words, lead 2 lines (~30 words) |
| 3 | `#floor` T1 faceted band "On the floor" | what you can see running | 4 poster cards C01 Panel saws & CNC nesting (Zone A) · C02 Edgebanders (Zone B) · C03 Spray & sanding lines (Zone C) · C04 Dust extraction & tooling (Zone D) | lead 2 lines (~35 words); card name 2 lines each |
| 4 | `#who` value 01 "Who is on the floor" | narrative 1 + stats | left text, right V01 3:2 (wide hall aisle, stands, visitors) | **narrative paragraph 1 (≥ 60 words)** + quote line from Mira Halvorsen + stat quad |
| 5 | `#day` value 02 ochre band "How a day at the fair runs" | narrative 2 + day line | left mosaic M01 (doors open queue at the north entrance), M02 (lunch talk on Stage B), M03 (buyer meeting at a stand table); right text; full-width **horizontal day line** below: 1 px white line, 7 ticks with time (1.25rem 700) + label (0.875rem), evenly spaced, white on ochre | **narrative paragraph 2 (≥ 60 words)** |
| 6 | `#come` value 03 "How to come" | narrative 3 + prices + process | left: text, 3-step inline process (numbers 1–3 small ochre), price list (7 rows); right: V03a (Hall 4 north entrance, daylight) + V03b (tram stop / bike racks at the centre), captions under each | **narrative paragraph 3 (≥ 50 words)**, process ~40 words |
| 7 | Parallax access band (`sp-parallax`) | where + floor plan | full-bleed P01 (Hall 4 interior aisle at opening, long perspective) dimmed with `rgba(14,16,15,.35)` overlay, two white boxes (reference access band): "Getting there — 12 Harbour Road, Lindmark" with pin icon, and "Floor plan — 4 zones, 22,000 m²" with map icon, each 50 % minus 5 px, 110 px high, inset 80 px | 2 short lines |
| 8 | `#pass` "Request a pass" band | the CTA | white section with lattice; left: H2 "Request a pass" ochre uppercase 2.75rem, 2-line lead, `kf-btn-line` → /request-a-pass/; right: photo S01 (visitor having the QR pass scanned at entrance) 3:2 | ~40 words |
| 9 | `#newsletter` early-access signup | waitlist | pale sand `#F0EEEA` band, centred: H3 "Hear first when the floor plan is out", 1 line, **newsletter form slot** (email + submit), notice text | ~25 words |
| 10 | Footer | | black `#0E100F`: twin bars row (repeat), then address line + links (Access, Floor plan, Privacy, Terms, Contact), © line | |

Home English ≥ 250 words (target ~420), ≥ 3 narrative paragraphs ≥ 20 words (paragraphs in blocks 4, 5, 6).
**Home image slots (13 visible + 2 crossfade):** H01, C01, C02, C03, C04, V01, M01, M02, M03, V03a, V03b, P01, S01 → 13 distinct visible images on home (+ H02/H03 in the hero crossfade = 15 `<img>`), well over the ≥ 8 rule. No image repeats on the home page.

### Comparison with the four most recent home orders
| Theme | Order (short) | Why ours differs |
|---|---|---|
| Shio Butchers | utility+header, shop-front hero with index rail, counter cards, intro 2-col, hour rows, parallax band, wrapping steps, farm cards, order band, newsletter | no index rail, no hour rows; our cards sit on a black faceted band; our parallax is an access band with two white boxes, not a figure band |
| Nohara Holiday Park | hero, ledger band, sticky narrative, stay cards, reservation rows, parallax grounds, off-season rows, price rows, journal, book band+newsletter | no sticky narrative, no ledger, no journal cards; prices live inside value 03, not a price section |
| Tsubasa College | utility+header, focus-pull hero+strip, intro+facts, isometric field, month ruler, certification table, parallax hangar, instructors, fees table, journal, newsletter | no ruler/table/instructors grid; our timeline is a horizontal day line on an ochre band |
| Hisui Clinic | split-window hero, narrative column, tabs, interlude, accordion, figures row, who answers, stories 2×2, fee rows, news filter, visit+newsletter | no tabs/accordion/2×2 stories; numbered value rows with rotated labels + stat quads are unique to this theme |
Ours: notice strip → diagonal-split hero + timeline line + twin bars → dark faceted card strip → value 01 → ochre value 02 + day line → value 03 → parallax access band → pass band → early-access newsletter → footer with twin bars.

---
## 5. Inner pages (≥ 8; all reached from footer + pass CTA; header stays the anchor menu with "Programme", "Exhibitors", "Visit" added to the footer)
| Slug | Role (theme-meta pages) | Key content |
|---|---|---|
| `/about/` | about | The fair since 2011 (value rows 01 history, 02 organiser team on ochre: Mira, Tomás, Aiyana, Kwame, Lena as a horizontal name list with roles — not a portrait grid, 03 floor rules: running machines only behind barrier lines, ear defenders at every stand, no sawdust on aisles). Photo I01 (organiser team walking the empty hall at build-up). |
| `/exhibitors/` | — | T1 band with 4 zone cards (C01–C04, each once), zone descriptions, exhibitor prices (shell stand, raw space, demo slot), stand booking steps, second T1 strip of 3 story cards (D01, M03, I03), contact Tomás. |
| `/programme/` | — | Day 1/2/3 as value rows with horizontal day lines (times from §1), Demo Stage slots (Lena Vogt), lunch talks, safety briefing (Kwame). Photo D01 (live demo on Demo Stage) + M02. |
| `/visit/` | — | Getting there (tram line 3 "Harbour Road" stop, 4 min walk; parking P2 €12/day; bike racks at north entrance), hours, ear-defender & safety notes, accessibility, cloakroom, price list (visitor rows), parallax band P02 (centre exterior). |
| `/request-a-pass/` | booking (`shippress_form_slot` kind contact, mailto fallback) | 3 steps as numerals 01–03; full price list; form slot under step 01; Aiyana Brooks as contact; "passes close 21 Feb 2027". Photo I01 (organiser team at build-up). |
| `/contact/` | contact (`shippress_form_slot` kind contact, mailto fallback) | office address, hours, email, three contacts (visitors: Aiyana, exhibitors: Tomás, press: Mira); photo V01 (hall aisle). |
| `/newsletter/` | newsletter (independent page, newsletter slot) | waitlist / early access: floor plan release 15 Jan 2027, exhibitor list, demo timetable; form; what you receive (3 lines) and how often (max 4 mails before the fair). |
| `/news/` | posts list (role `posts`, empty content) | 3 posts = the 3 stories (category "From the floor", tags "2025 edition", zone tags). |
| `/privacy/`, `/terms/` | legal | plain text, no reveal. |
| `/thanks/` | thanks | after pass request / mailto: "Check your mail app — the request is sent when you press send." outline button back home. |

Screens: news & article → posts list / first story; category "from-the-floor"; tag "2025-edition"; newsletter → `/newsletter/`; contact → `/contact/`.

---
## 6. Colour, type, tokens (values from `reference-tokens.md`)
### Palette
| Token | Hex | Share | Source |
|---|---|---|---|
| `base` (ground) | #FFFFFF | ~45 % | ref ground #FFFFFF |
| `ink` (text) | #333333 | text | ref main ink #333333 |
| `graphite` (main) | #4E5350 | ~15 % (hero panel, exhibitor bar, headings on white) | plan hex; replaces ref charcoal #333 bar — reason: plan palette "nibi-iro" graphite, keeps the dark/ochre twin-bar relationship |
| `night` (dark band, footer) | #0E100F | ~18 % | ref #000000, +5 % lightness with graphite hue to match `graphite` |
| `ochre` (accent) | #957123 | ~10–12 % (numerals, h2, visitor bar, value 02 band, arrows) | ref accent #957123 (unchanged) |
| `ochre-dark` (hover) | #7F601E | <1 % | ref accent −5 % lightness |
| `sand` | #F0EEEA | ~6 % (newsletter band, hover) | ref sand #F0EEEA |
| `sand-2` | #E1DED5 | lines | ref #E1DED5 |
| `lattice` | #EDE9E1 | decoration | ref lattice #EDE9E1 |
| `mist` | #ECEDEE | hairlines | ref #ECEDEE |
| `notice` / `notice-bg` | #BD2D2D / #FAE3E3 | < 2 % | ref notice |
Contrast: white on ochre #957123 = 4.6:1 (AA for ≥ 18 px bold and body 16 px ok); white on graphite 7.4:1.
**First-screen saturated share ≤ 15 %** (check-first-screen.py; reference measured 17.7 % from its illustration): ochre bar (~5 %) + notice tab (~1 %) + photo; photos must be muted (no saturated orange/red machine paint dominating; machine housings grey/white/green-grey).

### Type (font_direction sans)
- Families (theme.json `fontFamilies` + `fontFace`, woff2 in `assets/fonts/`, loaded identically in editor and front end): 
  - `display`: `"Hanken Grotesk", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif` (weights 500, 700)
  - `body`: `"Instrument Sans", system-ui, -apple-system, "Segoe UI", sans-serif` (400, 500, 600)
  - zh-TW: `:root:lang(zh*)` display stack `"Hanken Grotesk", "Noto Sans TC", sans-serif` (Noto Sans TC subset bundled via fontFace); body stack `"Instrument Sans", "PingFang TC", "Microsoft JhengHei", sans-serif` (no bundled zh/ja family in body).
  - ja: display `"Hanken Grotesk", "Noto Sans JP", sans-serif`; body `"Instrument Sans", "Hiragino Sans", "Yu Gothic", "Meiryo", sans-serif`.
  - zh-TW / ja subsets: Hokuto/Hada substitute subsetting method (CJK subset script known broken). Copy `shared/inc/editor-lang.php` → `inc/editor-lang.php` (style.css uses `:lang(`).
- Scale (desktop; ref token in brackets):
| Role | Size / line-height / weight | Ref |
|---|---|---|
| Hero H1 | clamp(2.75rem, 5.2vw, **5rem**) / 1.08 / 700, tracking −0.01em, white | largest ≥ 4.25rem rule |
| Value numerals 01–03 | **4.25rem** / 1 / 700 ochre | ref 64 px gold numeral |
| Section H2 (uppercase, ochre, centred above value rows "WHY COME") | 2.75rem / 1.2 / 700, tracking .04em | ref 44 px "OUR VALUE" |
| Band title (white) | 2.25rem / 1.3 / 700 | ref ~36 px |
| Value heading | 2rem / 1.5 / 700 graphite | ref 32/51 (1.6; −0.1 for sans) |
| Stat numerals | 2.75rem / 1 / 700 ochre, unit 0.875rem | ref 44–48 px |
| Stat caption, rotated label | 0.75rem / 1.5 / 700; label 0.875rem | ref 12 px bold / 14 px |
| Body | 1rem / 1.75 / 400 (500 on dark) `#333` | ref 16/28 weight 500 |
| Buttons | 1rem / 1 / 500 | ref 16 px 500 |
| Logo | 1rem 700 caps tracking .2em | ref logo tracking .2em |
- CJK: sizes ×0.75 for display, body line-height 1.85; de/fr `hyphens:auto`.

### Spacing / shape
Container 1280 px (wide 1440 for bands). Value rows padding 120 px top/bottom (mobile 64). Dark band 92/77. Hero bars inset 80 px, gap 10 px. Card gap 10 px. Radius **0** everywhere (buttons, cards, images, inputs). No shadows. Photo frames: none, no masks/clip-path except the hero diagonal (clip-path on the photo **wrapper's child**, not an observed element).

---
## 7. Responsive
- **390 px first screen:** header (logo + menu button) → notice strip as 2 lines (tab "Notice" inline-block above the text, not overlapping) → photo H01 full width 4:3 with a straight bottom (diagonal only ≥ 782 px; on mobile a 6° diagonal bottom edge is allowed as a clip-path on the image child) → graphite panel in normal flow with H1 (2.75rem), lead, date card **in flow** (not floating), timeline line horizontal with 3 ticks → twin bars stacked 72 px each. **No vertical text, no absolutely positioned labels overlapping text**; rotated "part" label hidden (eyebrow shown instead). Pause button stays on the photo corner (it overlaps the image only, never text).
- T1 cards: mobile horizontal scroll-snap row (no sp-reveal on the children; reveal on the row container).
- Value rows stack: numeral + heading → text → stats (2×2 kept, slash dividers become thin vertical rules) → photo.
- **Price list:** at ≥ 782 px a full-width 2-column list within its column (item left, price right) with dotted leader `#E1DED5`; price cell `white-space:nowrap; text-align:right`, never cut (checked at 800 and 1280). If implemented as a `<table>` it is `width:100%`, `table-layout:auto`; under 600 px each row stacks (item on line 1, price on line 2 aligned right) — every table on the site stacks on mobile.
- Day line: ≥ 782 px horizontal with 7 ticks; < 782 px horizontal scroll-snap strip of ticks (still horizontal — no vertical timeline).
- 390 & 1280: no horizontal overflow (`html,body{overflow-x:clip}`).

---
## 8. Images (16 total, one STYLE string, all generated, ≤ 300 KB, ≤ 2000 px, webp, 0 cut-outs)
**STYLE:** `Documentary trade-fair photograph, high-key daylight from a high skylit exhibition hall, pale grey floor and white stand walls, natural muted colour with warm birch-plywood tones and grey-green machine housings, 35mm lens at eye level, candid mid-action, real working woodworking machinery, people of mixed ethnicity in plain workwear and smart-casual clothes, soft contrast, medium depth of field, international modern setting, no text, no letters, no logos, no brand names, no signage, no Japanese elements`
| ID | Subject / composition | Ratio | Used (page · block) | Home |
|---|---|---|---|---|
| H01 | Exhibitor feeding a birch panel through a sliding panel saw on a stand; buyer leaning in at right, ear defenders lowered round the neck, watching the blade; subject in left two-thirds | 16:10 | home hero (KV #2) | ✓ |
| H02 | CNC router nesting cabinet parts on a stand, two visitors behind a barrier line watching the spindle | 16:10 | home hero crossfade | ✓ |
| H03 | Edgebander feeding a white panel, exhibitor pointing to the edge while a visitor touches a finished sample | 16:10 | home hero crossfade | ✓ |
| C01 | Panel saw and nesting area, close-medium, stacked cut parts | 4:3 | home T1 card 1; /exhibitors/ zone A | ✓ |
| C02 | Edgebander close-up with edge-tape roll and visitor's hand | 4:3 | home T1 card 2; /exhibitors/ zone B | ✓ |
| C03 | Sanding / spray line booth with a technician in a mask, clean daylight | 4:3 | home T1 card 3; /exhibitors/ zone C | ✓ |
| C04 | Dust extraction unit with ducting, visitor reading a meter with an exhibitor | 4:3 | home T1 card 4; /exhibitors/ zone D | ✓ |
| V01 | Wide hall aisle from a mezzanine, stands with running machines, visitors | 3:2 | home value 01; /about/ value 01 | ✓ |
| M01 | Morning queue at the north entrance doors, people with lanyards, daylight | 3:2 | home value 02 mosaic | ✓ |
| M02 | Lunch talk on a small stage, speaker beside a cabinet carcass, seated audience | 11:5 | home value 02 mosaic; /programme/ | ✓ |
| M03 | Buyer meeting at a stand table, plywood samples and a laptop, two people | 3:2 | home value 02 mosaic; news story 2 | ✓ |
| V03a | Exhibition centre north entrance exterior, glass facade, people walking in | 3:2 | home value 03; /visit/ | ✓ |
| V03b | Tram stop and bike racks in front of the centre | 3:2 | home value 03; /visit/ | ✓ |
| P01 | Long perspective of the empty main aisle at 08:55, lights on, machines covered, one person walking | 21:9 (2000×857) | home parallax band (`sp-parallax`) | ✓ |
| S01 | Visitor's QR pass being scanned at an entrance gate, hands and badge | 3:2 | home pass band; /thanks/ | ✓ |
| I01 | Organiser team (4 people) walking the hall during build-up with tablets, crates around | 3:2 | /about/ value 02; /request-a-pass/ | |
| I03 | Teacher with apprentices at a jointing machine stand, dust meter | 3:2 | /exhibitors/ stories; news story 3 | |
| D01 | Live demo on the Demo Stage: host with microphone beside a running spindle moulder, audience | 3:2 | /programme/ day 02; news story 1 | |
**18 files total** (H01–H03, C01–C04, V01, M01–M03, V03a, V03b, P01, S01, I01, I03, D01); 15 used on home. Never repeat an image within one page. /newsletter/ uses M01 in its short band header; /contact/ uses V01.
Every image: check with Read — no text, logos, broken faces/hands; machines must look plausible (blade guards present, people not touching blades).

---
## 9. Scroll motion (sp-scroll; 3 effects; source: reference has none — timing derived from its .2 s hover rhythm and stage-a choices)
| Effect | Class | Where | Trigger / time / easing |
|---|---|---|---|
| Value rows lift in | `sp-reveal sp-reveal--up` (`--sp-dist:24px`, `--sp-dur:.6s`) | text column and photo column of value 01/02/03 (home), value rows on /about/, /programme/ | IO enter, .6 s, `cubic-bezier(.22,.61,.36,1)` |
| Cards / mosaic in sequence + counting stats | `sp-stagger` on the T1 card row container (desktop) and the mosaic group; children `sp-reveal sp-reveal--up`; stat numerals `sp-count` | home blocks 3, 4, 5; /exhibitors/ | stagger .12 s; count 1.2 s easeOutCubic |
| Parallax | `sp-parallax` | home block 7 (see §10); /visit/ header band | CSS scroll-driven, linear |
Not on: hero (no reveal), notice strip, forms, price list, legal pages, the T1 row's children on mobile (scroll-snap container). Hero crossfade is a CSS keyframe animation (not scroll), stopped by `prefers-reduced-motion`, `?sp-static` (shows H01 only) and the pause button (`animation-play-state:paused` via a `button[aria-pressed]` toggle; a few lines of non-scroll JS in a theme script or pure CSS `:has(input:checked)`).

## 10. Parallax (required)
- **Block:** home block 7 "access band" — outer Cover with `sp-parallax`, background image **P01** (`.wp-block-cover__image-background`), overlay `#0E100F` at 35 %, min-height 480 px (desktop) / 360 px (mobile).
- **Foreground (not in the moving layer):** two white boxes "Getting there" / "Floor plan" (110 px high, inset 80 px, 10 px gap, ochre icons, long thin ochre arrow right) — exactly the reference access band.
- **Speed:** `--sp-par: 10%` desktop; `@media (max-width:781px){ --sp-par: 6% }` (kept on mobile).
- **Reference counterpart:** bigsight's full-bleed dimmed access photo with two white boxes (static there); our movement replaces the reference's carousel motion as the "living picture" below the fold.
- Second instance: /visit/ header band — Cover with V03a background, `--sp-par: 8%`.
- Verify with `check-parallax.mjs` (≥ 6 px desktop and mobile, 0 under reduced motion).

---
## 11. Forms (form contract v1 — `steps/form-contract-v1` exists)
- Copy `pipeline/assets/forms/shippress-forms.php` → `inc/shippress-forms.php`, CSS/JS → `assets/` unchanged; `require` in functions.php.
- **/request-a-pass/** (booking) and **/contact/**: PHP pattern with `ob_start()` literal mailto button (`mailto:hello@kikaifair.example?subject=…`, label `_t('contact_email')` / `_t('pass_request_mail')`), then `shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) )`. CF7 first, then WPForms; otherwise the mailto button stays. Position: request-a-pass under step 01 heading in the left 7/12 column; contact page under the address block. Never link fallback back to /contact/.
- **Newsletter** — `/newsletter/` (independent page, not alias of posts) and home block 9: `shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'hello@kikaifair.example', 'label' => _t('forms_email'), 'submit' => _t('forms_subscribe'), 'notice' => _t('forms_mail_notice'), 'subject' => _t('forms_mail_subject') ) )`. MailPoet (explicit ID) → MC4WP → CF7/WPForms only via `shippress_form_id`. Without plugins: required email input + submit, native mailto POST with notice "Opens your email app. Send the message to join the early-access list; you are not on it yet." No footer form (footer carries twin bars only).
- **Fields:** contact/pass fallback — none (button); plugin forms styled: input, textarea, select, checkbox/radio, label, submit. Newsletter fallback: 1 email field (label visible), 1 submit, notice line.
- **Tokens:** `--sp-form-accent: var(--wp--preset--color--ochre)`, `--sp-form-on-accent: #fff`, `--sp-form-radius: 0`, `--sp-form-focus: 0 0 0 2px #fff, 0 0 0 4px #957123` (on white); inputs 48 px high, 1 px `#333` border (like `kf-btn-line`), label 0.875rem 600. On dark (`night`/`graphite`) sections: `--sp-form-surface: transparent`, `--sp-form-text: #fff`, border white, focus ring `#C9B27A`. Error `#BD2D2D` text + `#FAE3E3` bg; success `#2F5D45` text + `#E6EFE9` bg (on dark: white text, 1 px border in those colours).
- **i18n (five languages):** semantic keys in `inc/i18n/en.php`: `forms_email`, `forms_subscribe`, `forms_mail_notice`, `forms_mail_subject`, `contact_email`, `pass_request_mail`, `pass_request_subject`; extract with `L10N_SEMANTIC=1`; translate in zh-TW, ja, fr, de (in-place rewrite, not literal).
- No reveal on any form; no form in the first screen (home form is block 9, far below the fold).

---
## 12. Similarity table (target ~80 %)
| Dimension | Reference (token) | Kikai Fair |
|---|---|---|
| Ground / text | #FFFFFF / #333333 | same |
| Accent | #957123 ochre, ~12 % | #957123, ~10–12 % |
| Dark band | #000000, ~18 % | #0E100F, ~18 % |
| Second bar colour | #333333 | #4E5350 (plan graphite) |
| Sand / lattice | #F0EEEA, #E1DED5, #EDE9E1 | same |
| Notice | #BD2D2D on #FAE3E3, tab 192×60 | same |
| Body type | 16/28, 500, sans | 16/28 (1.75), 400/500 Instrument Sans |
| Display | Yu Mincho serif 700 | Hanken Grotesk 700 (plan sans direction) |
| Numerals | 64 px ochre, rotated 14 px "value" label | 68 px (4.25rem) ochre, rotated 14 px "part" label |
| Value heading | 32/51 bold | 32/48 700 |
| Radius / shadow | 0 / none | 0 / none |
| Buttons | 260×48 hairline, long ochre arrow, bg .2 s | same |
| Hero | full illustration + twin bars 635×110, inset 80, gap 10 | full photo diagonal split + twin bars same geometry |
| Event strip | black band 92/77, facet wedge, 4 cards 350 w, gap 10 | night band 92/77, SVG facet wedge, 4 cards, gap 10 |
| Value rows | 120 px padding, 3:2 photo 620×400 right, row 02 ochre + 2+1 mosaic | same |
| Access band | full-bleed dimmed photo + 2 white boxes | same + parallax 10 % |
| Footer | black, twin bars repeated | night, twin bars repeated |
| Motion | hover .2 s, autoplay carousels with pause | hover .2 s, hero crossfade with pause, reveal-up .6 s, stagger .12 s, parallax 10 % |
| Imagery | documentary photos, no masks | documentary photos, no masks |

---
## 13. Home acceptance checklist
- [ ] Notice strip, diagonal-split hero with H01, graphite panel with H1 (≥ 4.25rem at 1440), date card + timeline line, pause button, twin bars docked 30 px over the hero edge, "Request a pass" outline button — all visible at 1440×900; T1 title peeks at the fold.
- [ ] 390 px: everything stacked in flow, no vertical text, no overlapping labels, twin bars stacked.
- [ ] T1 black faceted band with visible facet wedge + 4 white-card strip (1 row ≥ 782 px).
- [ ] Value 01/02/03 with rotated label (desktop), 4.25rem ochre numerals, stat quad with "/" dividers and `sp-count`; value 02 full-bleed ochre with 2+1 mosaic and horizontal day line.
- [ ] Price list (7 rows) in value 03: price column nowrap/right, not clipped at 800 and 1280; stacks < 600 px; prices identical to /visit/, /request-a-pass/, /exhibitors/.
- [ ] Lattice motif top-left of white sections and mirrored on ochre; all buttons 0-radius hairline with long ochre arrow.
- [ ] Parallax access band (P01, `--sp-par` 10 % / 6 %) passes check-parallax (desktop + mobile).
- [ ] ≥ 13 distinct images on home, none repeated; 0 cut-outs; first-screen saturated share ≤ 15 %.
- [ ] ≥ 250 English words (target ~420), 3 narrative paragraphs ≥ 20 words.
- [ ] One top menu (centred anchors); one CTA wording "Request a pass" repeated (hero, value 03, pass band).
- [ ] Newsletter slot in block 9 (email + submit + notice) without plugins; no reveal on it.
- [ ] Fonts identical in editor and front end (Hanken Grotesk / Instrument Sans / Noto Sans TC/JP).
- [ ] auto-gates en pass (`1 1`), pattern_source.py pass.
