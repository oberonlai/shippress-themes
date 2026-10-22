# Kanade International School: design spec (stage 1, binding for implementation)

Slug `kanade-international-school`, IB international school (K–12), type `education`. Row b7-6: hero photo-left-text-right, centred nav, first screen three-equal-columns, page structure audience-gateway, archetype horizontal-strip, real high-key documentary photography, 青磁 `#7FA393` as the one muted accent.
Reference: Kobe Women's University, https://www.kobe-wu.ac.jp/ (S5-Style education; screenshots `ref/kobewu-*.png`). Borrow shapes, composition and colour relationships only. No copy, photos, logos, mascots or sparkle marks.

Fixed brand facts (every page, all five languages): **Kanade International School**, founded **1994**, campus at **Rua do Jardim Alto 18, 1400-150 Lisboa, Portugal** (fictional address). IB World School offering PYP, MYP and DP (a programme description, not an award). **640 students, ages 4–18, Kindergarten to Grade 12**, about **40 nationalities**, teaching language English. Currency **EUR** in every language, never converted.

---

## 1. Signature techniques (three, all obvious at a glance)

### T1. Curved sheet biting into the photo (kobe-wu hero, `ref/kobewu-first.png`)
- Reference: a huge blue curve rises from the lower left of the full-bleed hero photo, cutting off roughly the lower-left quarter of the image; a small promo card sits on that sheet, overlapping the photo edge. The curve is one continuous arc (radius ≈ 45% of the viewport width), not a wave.
- Kanade: hero is photo-left / text-right. The photo occupies the left **7/12** (edge-bleeds to the viewport's left edge, height 640 px at 1440×900). The **off-white ground of the text column bites into the photo from the lower right** with one quarter-circle arc: implement as an absolutely positioned `div.kn-bite` (decorative, `aria-hidden`, pointer-events none) inside the photo figure, `width: 46%; aspect-ratio: 1; right: -23%; bottom: -23%; border-radius: 50%; background: var(--ground)` (so about a quarter of a 46%-wide circle shows, curve cutting the photo's lower-right corner). The figure itself has `overflow: hidden` on the photo wrapper only; the bite is a sibling layer, not a clip-path on an observed element.
- On the bite sits the small **"Open morning" card** (white `#FFFFFF`, 1 px `#DDE2DD` border, radius 0, 260 × ~120 px), bottom-aligned with the photo's bottom edge, its left edge 64 px inside the photo: label "OPEN MORNING" Fira Sans 0.75rem uppercase 0.14em celadon-deep, line "Tuesday 10 November 2026, 9:30" Literata 1.125rem, link "Book a place →".
- Inner pages: every inner page head repeats the bite at small scale — page-head photo right 6/12, 3:2, the ground bites from its **lower left** with a circle 40% of the photo width (mirrored relative to home so it reads as the same sheet coming from the text side). Required on Admissions, Curriculum, Campus life, Our people, Parents, Careers, Fees, Contact.
- Must not be diluted: the curve must visibly remove ≥ 15% of the photo area (not a 24 px rounded corner), it must be one large arc, and the card must overlap both the sheet and the photo. Colour of the sheet = the page ground, not celadon (the reference's blue field is replaced by ground, the shape stays).

### T2. Card with one big rounded corner + circular date badge on its left edge (kobe-wu Event, `ref/kobewu-part1.png`)
- Reference: event cards whose bottom-left corner is rounded with a large radius (~64 px) while the other three corners are square; a filled circle with the date sits half outside the card's left edge.
- Kanade: calendar cards. Card ground `#E9ECE7` (stone), `border-radius: 0 0 0 64px`, padding 32 px 28 px 40px 56px, min-height 220 px. Date badge: 76 px circle, background ink `#1F2A2E`, white text (day Literata 1.75rem on top, month Fira Sans 0.7rem uppercase under), positioned `left: -24px; top: 28px` so one third of it sits outside the card. Card content: category label (Fira Sans 0.75rem uppercase, celadon-deep), title Literata 1.25rem, one line of time/place, "Details →".
- Every card in the row has the same corner; the row keeps 32 px left padding on the container so the badge never touches the viewport edge (also on 390 px: card margin-left 28 px).
- Must not be diluted: radius ≥ 56 px on exactly one corner (bottom-left), the badge must overlap the card edge and be ink-filled (not outline, not celadon full fill).

### T3. Tinted photo mosaic with centred white label chips (kobe-wu Featured, `ref/kobewu-part2.png`)
- Reference: one large photo tile left (≈ 40% width), a 2×2 grid of tiles right, every tile washed with its own colour, each with a white title and a white rectangular chip centred on it.
- Kanade: programme mosaic, full container width 1200 px, height 640 px at desktop, gap 4 px. Left tile 5/12 (spans both rows), right 7/12 split 2×2. Each tile = photo `object-fit: cover` + tint layer `mix-blend-mode: multiply` with a distinct low-chroma tint (table below) + centred stack: title Literata 1.75rem white (large tile 2.25rem), under it a white chip (background `#FFFFFF`, text ink, Fira Sans 0.8rem, padding 4px 12px, radius 0). Whole tile is the link; hover lightens the tint by 15% and moves the chip up 4 px.
- Tints (opacity of the multiply layer 0.62): PYP `#7FA393` celadon; MYP `#8C9DA8` slate; DP `#5E6B66` deep stone; Languages `#B3A893` warm stone; Arts & sport `#A4B8AE` pale celadon.
- Must not be diluted: tints must differ visibly tile to tile (not one uniform grey overlay), the chip must be solid white and centred, the large-left + 2×2 geometry must stay. Below 782 px: large tile full width 4:3, then the four tiles in a 2×2 grid (each 1:1), chips still centred.

### Continuation to inner pages (required)
| Page | T1 bite on page head | T2 corner card + date badge | T3 tinted mosaic |
|---|---|---|---|
| Admissions | yes (K16) | "Next open mornings" row: 3 cards | — |
| Curriculum | yes (K05) | — | full mosaic as the page index (same 5 tiles, links to anchors PYP/MYP/DP/Languages/Arts) |
| Campus life | yes (K09) | — | 4-tile variant (large + 3 stacked: Library, Sport, Music, Lunch) using K06, K11, K07, K10 |
| Calendar | yes (K13 crop) | full term list as T2 cards (8 cards, 2 per row desktop) | — |
| Parents | yes (K08) | "This month" 3 cards | small 3-tile strip of hub links (Calendar, Bus & lunch, Policies), tinted, chips |
| Careers | yes (K14) | open positions as T2 cards (badge = closing date) | — |
| Stories / News | — (index head only uses bite on featured story photo) | post cards: corner radius 0 0 0 64px on the image, badge = post date | — |
| Our people, Fees, Contact | yes | — | — |

---

## 2. Colour

From kobe-wu's relationships: a pale cool ground, one main hue on small elements, a support tone for surfaces, ink for type. The ref's saturated blue field (≈20.8% of its first screen) is **not** used; the curve shape survives in ground colour.

| Role | Hex | Source (kobe-wu) | Use | Share |
|---|---|---|---|---|
| Ground | `#F6F7F4` | ground `#EEF7FB`, shifted neutral-green | page ground, T1 sheet | ~62% |
| Surface / stone | `#E9ECE7` | support `#A4BFD4` relation (light surface) | T2 cards, fees panel, footer | ~20% |
| Ink | `#1F2A2E` | heading ink | text, date badges, buttons | ~10% |
| Accent 青磁 | `#7FA393` | green button `#72A59B` | rules (2 px), gateway top rules, PYP tint, focus ring | ≤ 3%, never a full-bleed field |
| Accent deep | `#4F7465` | derived (4.9:1 on ground) | small labels, links, hover | ≤ 2% |
| Slate | `#8C9DA8` | sky `#73AEC8` muted | MYP tint, map line | ≤ 1% |
| Rule | `#D5DAD4` | — | 1 px dividers | — |
| Muted text | `#5B6662` | — | captions, meta | — |

- Not beige-led: ground is a cool off-white; warm stone only as one mosaic tint.
- First screen saturated pixels (`scripts/check-first-screen.py`): **cap 15%, target ≤ 10%**. Achieved by a high-key photo (white/pale timber building, students in light neutral clothing, green kept to small foliage) and celadon only on 2 px rules and small labels. No celadon button background on the first screen (primary button = ink).
- Different from recent mains: Sora 桜鼠 pink-grey, Hibi teal, Yamabiko/Kazu/Yui — celadon green on cool off-white is new.

## 3. Type
- Display: **Literata** (OFL) 400/500, headings, numbers, badge days. Body/UI: **Fira Sans** (OFL) 400/500/600. Verify licence files when bundling.
- Sizes (theme.json): small 0.8125rem, base 1rem (body 1.0625rem, line-height 1.7), medium 1.25rem, large 1.75rem, x-large 2.75rem, xx-large `clamp(2.75rem, 5.2vw, 4.5rem)` = **4.5rem max** (≥ 4.25rem rule).
- Section heads: small label (Fira Sans 0.75rem uppercase 0.16em, accent deep, preceded by a 24 px × 2 px celadon rule) then Literata heading 2.75rem, left-aligned. H1 on home = xx-large; inner page H1 `clamp(2.5rem, 4.6vw, 4.25rem)`.
- zh-TW Noto Serif TC / ja Noto Serif JP for headings at ≈0.75×, body line-height 1.85; fr/de `hyphens: auto`. Use the Hokuto/Hada font approach (no broken subset script).
- Header: **centred nav** (row requirement). Row 1: wordmark "Kanade International School" centred (Literata 1.375rem) with a utility line right ("Admissions" ink button small, language switcher). Row 2: centred menu Fira Sans 0.875rem: About · Curriculum · Admissions · Fees · Campus life · Calendar · Parents · Contact. One menu only; under 960 px a menu button opens the overlay. Header ground = ground, 1 px rule below.

---

## 4. Home page

### First screen (1440×900)
- Header 112 px (two rows, centred).
- Hero 640 px: **photo left 7/12** (K01, bleeding to the viewport's left edge, object-position 40% 50%) with the **T1 bite** at its lower right and the Open morning card on it. **Text right** 5/12 on ground, vertically centred, padding-left 56 px: label "IB WORLD SCHOOL · LISBON · K–12", H1 Literata 4.5rem 3 lines "One school, / many ways / to arrive." (en; ≤ 3 lines), paragraph 1.125rem 30 words ("Kanade has welcomed families from about forty countries since 1994. Children from four to eighteen learn in English, keep their home language and leave ready for the IB Diploma."), buttons: ink filled "Plan a visit" + text link "Admissions and fees →".
- Then, still inside 900 px: **three equal columns gateway strip** (≈ 148 px, starts at y≈752): full container width, three columns separated by 1 px rules, each with a 2 px × 40 px celadon top rule, label (FOR PROSPECTIVE FAMILIES / FOR CURRENT PARENTS / FOR STAFF & CANDIDATES), Literata 1.375rem line ("Start with a visit" / "Calendar, bus and lunch" / "Teach with us") and an arrow link to Admissions / Parents / Careers. No photos in the strip. This is the audience gateway and the row's three-equal-columns first screen.
- Forbidden on the first screen: table, form, search box, giant centred text, vertical/rotated labels, celadon fields.

### 390 px first screen
Header (wordmark + menu button) → photo K01 at 4:3 full width with the bite (circle 60% of width, bottom-right) → card moves **below** the photo in normal flow (no absolute positioning on mobile) → label, H1 2.75rem, paragraph, buttons → gateway columns stacked as three rows. No vertical text, no absolutely positioned labels over text.

### Block order
| # | Block | Purpose | Layout & photo | Copy |
|---|---|---|---|---|
| 1 | Hero + gateway strip | identity, split visitors | as above, **T1** | 40 words |
| 2 | `intro` Why families choose Kanade | narrative | text left 6/12 (head "Learning in English, at home in many languages." + 3 paragraphs), photo right 5/12 at 4:5 **K02**, sp-parallax | 3 paragraphs ≈ 160 words |
| 3 | `programmes` Programmes | curriculum entry | **T3 mosaic**: K03 PYP (large left), K04 MYP, K05 DP, K06 Languages, K07 Arts & sport; head above left, one line right "Three IB programmes, one campus." | head + 5 chip lines |
| 4 | `calendar` Coming up | current parents & visitors | **T2** four cards in one row (no photos): 10 Nov Open morning · 17 Dec Winter concert · 6 Jan Term 2 begins · 31 Mar Priority applications close (Aug 2027 entry). Link "Full calendar →" | 4 × 15 words |
| 5 | `day` A day at Kanade | horizontal strip (archetype) | full-bleed horizontal strip of 4 photos 3:2 side by side edge to edge (4 × 25%), times in Literata 2rem over a white caption bar under each: 8:20 arrival **K08** · 10:40 break **K09** · 12:30 lunch **K10** · 15:30 activities **K11**; one caption line each. Mobile: 2×2 grid (not a scroller) | 4 × 18 words |
| 6 | `fees` Admissions & fees | real numbers | surface `#E9ECE7` full-bleed band. Top: head + 5 admissions steps as a ruled numbered **paragraph list in two columns** (not a step grid). Below: **full-width fee list** (8 rows, item left, note muted, price right nowrap), note "Fees per school year, 2026–27; payable in three instalments." Link "Fees and payment details →" | 70 words + 8 rows |
| 7 | `people` Who you will meet | trust | photo **K14** wide 21:9 full container width; under it the 7 named people as a 4 + 3 text roster (name Literata 1.25rem, role Fira Sans 0.875rem, 1 px top rule), no headshots | intro 40 words |
| 8 | `stories` Family stories | proof | featured story left 7/12: photo **K12** 4:5 with the T2 corner `0 0 0 64px`, quote Literata italic 1.5rem + attribution; right 5/12: two text stories stacked (quote 1.125rem, attribution, "Read →") | 3 × 40 words |
| 9 | `visit` Visit us | close | photo **K13** 21:9 full-bleed, **T1 bite** again from the lower left (circle 38% width) carrying a white card: address, office hours, phone, ink button "Book an open morning" + link "Contact admissions" | 50 words |

English home ≥ 250 words with narrative paragraphs in #2 (3) and #8. CJK ≥ 500 characters.

### Photo positions on home (13, none repeated)
K01 hero · K02 intro · K03 K04 K05 K06 K07 mosaic · K08 K09 K10 K11 day strip · K14 people · K12 stories · K13 visit. (≥ 8 ✔)

### Comparison with recent homes
| # | Sora Fertility | Yamabiko Outdoor | Hibi Wear (quality ref) | **Kanade** |
|---|---|---|---|---|
| 1 | full-bleed cover + info bar | full-bleed photo, low-left headline, info bar | hazy full-bleed, captions at thirds | **photo-left 7/12 with curved bite + card, text right, 3-column gateway strip** |
| 2 | FAQ on arch | product masonry catalogue | product line-up | **narrative intro + parallax portrait** |
| 3 | letter on tilted sheet | three shelves veil band | photo straddling band | **tinted mosaic (1 large + 2×2)** |
| 4 | three paths (offset portraits) | spec comparison table | before/after split | **calendar cards with big corner + date badge** |
| 5 | full-bleed interlude | how we test spread | fabric masonry | **edge-to-edge 4-photo day strip** |
| 6 | first 90 days row | rental price list | city photo | **admissions steps + full-width fees** |
| 7 | fees | field stories | promise numbers | **wide staff photo + name roster** |
| 8 | people (photo + roster) | visit | journal | **stories: featured + two text** |
| 9 | stories | — | close | **visit on bitten photo** |
| 10 | visit | — | — | — |
Why not alike: no full-bleed cover (hero is split photo-left/text-right with a curved bite), the first screen carries a three-column audience gateway that none of them had, the second block is a narrative not FAQ/catalogue, signatures (curved bite, big-corner badge cards, tinted mosaic) share nothing with Sora's arch/tilted sheet, Yamabiko's veil band/dash index/capsule chips or Hibi's dot labels/band/split tabs. Kazu Data Course and Yui Credit Union (spec files have no block table): Kanade uses none of their course-card/rate-table first screens; no table, form or dashboard anywhere on the first screen.

---

## 5. Inner pages (10, plus legal / 404 / search)
Each page: T1 page head (photo right 6/12 with lower-left bite, label + H1 + 40-word lead left) → body → closing strip "Plan a visit" with T1 small bite. No sidebar.

1. **Admissions** (`page-admissions`): who can apply (ages 4–18, entry in August and January, rolling when places allow); the 5 steps as ruled numbered paragraphs (§7); "Next open mornings" T2 row (10 Nov 2026, 12 Jan 2027, 9 Feb 2027, all Tuesdays 9:30–11:00); documents checklist (paragraph list); Leila Haddad contact; photo K16 head.
2. **Fees** (`page-fees`): full 8-row fee table (full container width ≥ 782 px, price column right-aligned nowrap; stacked rows on mobile); what tuition includes (books, IB exam registration for DP, day trips); instalments (August, January, April; 3% off if paid in full by 15 July); sibling discount 10% from the third child; refund policy paragraph. Head photo K13 (campus entrance crop).
3. **Curriculum** (`page-curriculum`): T3 mosaic index; sections PYP (K–G5), MYP (G6–G10), DP (G11–G12) each with 2 paragraphs + coordinator name; Languages (English, Portuguese from K, French or German from G6, mother-tongue clubs); photo K15 beside DP section.
4. **Campus life** (`page-campus`): 4-tile T3 variant (library, sport, music, lunch); after-school activities list (14:30 days); bus routes paragraph (4 routes, €1,650/year); lunch (€1,280/year).
5. **Calendar** (`page-calendar`): term dates 2026–27 (Term 1 1 Sep–18 Dec 2026; Term 2 6 Jan–26 Mar 2027; Term 3 12 Apr–25 Jun 2027) as a stacked list; 8 T2 event cards; school day times.
6. **Our people** (`page-people`): 7 named people, each a 2-column text row (name + role left, 50-word bio right) with K14 at the head; no headshot grid.
7. **Parents** (`page-parents`): hub for current parents: "This month" T2 cards, 3-tile tinted link strip (T3), school day, bus & lunch, absence reporting (email by 8:15), policies list. Head photo K08.
8. **Careers** (`page-careers`): why teach at Kanade (3 paragraphs), open positions as T2 cards (badge = closing date): MYP Mathematics teacher (closes 30 Nov 2026), PYP Grade 3 homeroom teacher (15 Jan 2027), Learning support specialist (31 Jan 2027); how to apply (email CV to careers@kanade-school.example). Head photo K14.
9. **Stories / News** (`home.html`, `archive.html`, `single.html`): 6 posts (3 family stories §7 + 3 news: "New science wing opens in September", "Grade 10 Personal Project exhibition", "Winter concert programme"); cards with T2 corner on the image + date badge; single post image with T2 corner, 680 px text column. Images: K12, K15, K16, K04, K07, K05 (one each).
10. **Contact & visit** (`page-contact`): address, office hours, phone, emails, getting here (Metro + bus 728, fictional stop name "Jardim Alto"), map placeholder as a plain stone panel (no embed); head photo K13. No form required (a mailto button).
Legal: Privacy, Safeguarding statement (text only).

---

## 6. Photos (16, Grok, one at a time; Read each; regenerate any with text, logos, signage letters, broken faces/hands)

STYLE (exact string on every prompt):
`photorealistic documentary photograph, high-key bright natural daylight, 35mm lens, modern international school campus with white walls, pale oak timber and large windows, soft neutral palette of off-white, pale grey, light oak and muted sage green, ethnically diverse students and adults, candid unposed moment, calm and warm atmosphere, no text, no letters, no logos, no signage, no uniforms with crests, no Japanese elements`

| ID | Subject / composition | Ratio | Used on (once per page) |
|---|---|---|---|
| K01 | campus courtyard in morning light, students aged 10–14 walking towards a pale timber-and-glass building, figures in the left two thirds, open bright sky top right | 3:2 | **Home hero** |
| K02 | teacher kneeling beside two young children reading picture books at a low table | 4:5 | **Home intro** |
| K03 | kindergarten children building with wooden blocks on a pale floor | 4:5 | **Home mosaic PYP**; Curriculum mosaic |
| K04 | teenagers in safety goggles doing a chemistry experiment at a white lab bench | 4:3 | **Home mosaic MYP**; Curriculum mosaic; News post 4 |
| K05 | five older students in a seminar discussion around a round oak table | 4:3 | **Home mosaic DP**; Curriculum head; News post 6 |
| K06 | bright library, two students reading in a window seat, shelves blurred (no readable spines) | 4:3 | **Home mosaic Languages**; Campus life tile |
| K07 | students playing violin and cello in a music room | 4:3 | **Home mosaic Arts & sport**; Campus life tile; News post 5 |
| K08 | morning arrival: parents walking children through an open campus gate along a tree-lined path | 3:2 | **Home day strip 8:20**; Parents head |
| K09 | children running on a grass field at break, low angle | 3:2 | **Home day strip 10:40**; Campus life head |
| K10 | bright dining hall, students at long tables with trays of food | 3:2 | **Home day strip 12:30**; Campus life tile |
| K11 | after-school basketball on an outdoor court, motion | 3:2 | **Home day strip 15:30**; Campus life tile |
| K12 | a family of four touring the campus corridor with a staff member | 4:5 | **Home stories**; Story post 1 |
| K13 | wide view of the campus entrance: low white building, oak canopy, trees, empty path | 21:9 | **Home visit**; Calendar head; Fees head; Contact head |
| K14 | teachers collaborating around a table with laptops in a staff room | 21:9 (crop to 3:2 on heads) | **Home people**; Our people head; Careers head |
| K15 | Grade 12 student writing in a notebook at a library study carrel | 4:5 | Curriculum DP section; Story post 2 |
| K16 | admissions meeting: a staff member talking with a parent and child across a small table | 3:2 | Admissions head; Story post 3 |

Home uses K01–K14 except K15/K16 (13 photos). Calendar, Fees and Contact all use K13 but are separate pages (one use per page). 0 cut-outs, each ≤ 300 KB and ≤ 2000 px, readme line per image (AI-generated, CC0).

---

## 7. Fixed numbers (single source; identical on home, inner pages and all five languages)

**Fees 2026–27 (EUR, per school year unless noted) — 8 items**
| Item | Price |
|---|---|
| Application fee (one-time, non-refundable) | €250 |
| Enrolment deposit (one-time, credited to the final term) | €2,000 |
| Kindergarten (ages 4–5) | €14,800 |
| Primary Years, Grades 1–5 | €17,600 |
| Middle Years, Grades 6–10 | €20,400 |
| Diploma Programme, Grades 11–12 | €23,900 |
| School bus (optional) | €1,650 |
| Lunch programme (optional) | €1,280 |
Home shows all 8. Instalments: August, January, April. Full payment by 15 July: 3% off. Third and further child: 10% off tuition.

**People (7)**
1. Dr. Helena Marsh — Head of School
2. Leila Haddad — Director of Admissions
3. Tomás Ferreira — Head of Primary (PYP)
4. Amara Nwosu — MYP Coordinator
5. Jonas Becker — DP Coordinator
6. Mei-Lin Chou — Head of Languages
7. Rafael Ortiz — Pastoral and Wellbeing Lead

**Stories (3)**
1. The Andersen family — moved from Copenhagen in 2024, children in Grade 2 and Grade 7; on settling in within the first term.
2. Priya Raman — DP class of 2025; on her extended essay and the library.
3. The Silva Okoro family — Portuguese-Nigerian family, joined in January; on keeping two home languages.

**Place and time**
- Rua do Jardim Alto 18, 1400-150 Lisboa, Portugal (fictional). +351 21 000 4800. admissions@kanade-school.example, office@kanade-school.example, careers@kanade-school.example.
- Office hours: Monday–Friday 8:00–16:30. School day: 8:20 arrival, 8:30–15:20 lessons, activities until 16:30.
- Open mornings: Tuesdays 9:30–11:00 — 10 Nov 2026, 12 Jan 2027, 9 Feb 2027.
- Terms 2026–27: 1 Sep–18 Dec 2026; 6 Jan–26 Mar 2027; 12 Apr–25 Jun 2027.

**Admissions process (5 steps, written as numbered paragraphs)**
1. Enquire (email or phone, reply within 2 school days).
2. Visit (open morning or a private tour).
3. Apply online with previous school reports and the €250 application fee.
4. Assessment and family meeting (within 10 school days of a complete application).
5. Offer and enrolment deposit of €2,000 to confirm the place.

No claims of guaranteed results, rankings, real media or real people. "IB World School" appears as the programme framework only.

---

## 8. Scroll effects (sp-scroll v1; copy `pipeline/assets/sp-scroll/` as is; hero and fees list get none)

| Effect | sp-* class | Where | Source (kobe-wu) trigger / time / easing | Setting |
|---|---|---|---|---|
| Fade-up | `sp-reveal sp-reveal--up` | section heads of #2 intro, #4 calendar, #5 day strip, #7 people, #8 stories, #9 visit card; inner page bodies (not page heads) | ScrollMagic `-inview`, triggerHook 0.9, opacity .6s / transform 1.2s, `cubic-bezier(.23,1,.32,1)`, 50 px | `--sp-dist: 24px` (≤ 30 px), `--sp-dur: 1s`, ease `cubic-bezier(.23,1,.32,1)` |
| Staggered children | `sp-stagger` on the mosaic grid (#3) and the calendar row (#4); each child `sp-reveal sp-reveal--up` | ScrollTrigger start "top 55%", .7s, stagger .15s, power3.out, 24 px | sp-stagger default 0.12s step (keep), dist 24 px |
| Image parallax | `sp-parallax` wrapping K02 (#2) and K13 (#9) | ScrollTrigger scrub 1.5, yPercent 0→−15 | default ±7% CSS scroll-driven; the bite layer stays outside the parallax wrapper |

Not used: sp-count, sp-marquee (no carousel on this theme). No reveal on the hero, gateway strip, fees list or any form. On mobile the day strip is a grid (no horizontal scroller), so reveal there is on the section head only.

---

## 9. Responsive (hard)
- 390 px first screen: no vertical text, no rotated labels, no absolutely positioned label or card over text; the Open morning card is in normal flow under the photo; the bite is decorative and never covers text.
- No horizontal overflow at 390 and 1280 (the bite circles sit inside `overflow: hidden` photo wrappers; T2 badges stay inside the container padding).
- Fee list/table at ≥ 782 px (800 and 1280): **full container width**, columns item | note | price, price column `white-space: nowrap; text-align: right`, never clipped or scrolled; no fixed width smaller than the container.
- Any table under 782 px becomes stacked rows (item on one line, price right on the next or same line, note below); no horizontal scroll.
- Mosaic under 782 px: large tile 4:3 full width + 2×2 squares. Day strip: 2×2 under 782 px. T2 cards: 1 per row under 600 px, 2 per row 600–1023, 4 per row ≥ 1024 (calendar on home).
- Gateway strip under 782 px: three stacked rows with 1 px rules between.

---

## 10. Home acceptance checklist
1. First screen: photo left 7/12 with a large curved bite at its lower right and the Open morning card overlapping bite + photo; text right with H1 ≤ 3 lines at 4.5rem; three-equal-column gateway strip visible within 900 px; centred two-row header; no table/form/search/giant centred text.
2. `check-first-screen.py` saturated ≤ 15% (target ≤ 10%); celadon only on rules/labels; primary button ink.
3. T1 bite on home hero and visit; on inner page heads of ≥ 8 pages.
4. T2: calendar row of 4 stone cards with one 64 px bottom-left corner and an ink date badge overlapping the left edge; also on Admissions, Calendar, Parents, Careers, News.
5. T3: mosaic 1 large + 2×2, five different tints, white centred chips; also on Curriculum, Campus life, Parents.
6. Block order exactly §4 (9 blocks); 13 photo positions, no repeat; differs from Sora/Yamabiko/Hibi per the table; no team headshot grid, step grid, vertical timeline, dashboard, sidebar, collage, cut-outs.
7. Fees: 8 rows, exact amounts §7, full width at ≥ 782 px with right-aligned nowrap prices; stacked at 390 px.
8. Names, dates, addresses and hours match §7 exactly (home, inner pages, five languages).
9. Home English ≥ 250 words, ≥ 3 narrative paragraphs.
10. Scroll: only the classes in §8; hero/fees untouched; `?sp-static` shows everything; auto-gates pass for en (`1 1`).
11. Typography: Literata + Fira Sans; max size 4.5rem; one menu.
