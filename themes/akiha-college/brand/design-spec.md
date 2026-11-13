# Akiha College: design spec (stage 1 spec, binding for implementation)

Slug `akiha-college`, electrical apprenticeship college, type **business** (category education-classes; WooCommerce compatible, not required; the site must work with WooCommerce off). Row b30-2: archetype **editorial-magazine**, hero **framed-window**, nav **centered** (exactly one top menu), first screen **top-bottom-halves**, page structure **results-first-case-wall**, palette Konnezumi (navy grey) (row hex `#4E5964`, family ink), fonts **Newsreader / Source Serif 4**, font_direction **serif**, CJK **Noto Serif TC / Noto Serif JP** (Mincho direction), five languages en, zh-TW, ja, fr, de.

Reference (S5-Style, not in `steps/used-refs.txt`): **primary** https://www.landic.com/recruit/ (quiet mist-grey recruiting site, serif statement above a framed documentary photo, nav docked at the fold, sticky label rail, panels over a fixed photo). **Secondary** https://www.pro-seeds.com/ (structure only: figures strip, left label column, dated rows; its navy/yellow colours are NOT used). Measurements: `brand/reference-tokens.md`, quoted below as **RT(a)…RT(g)**. Screens: `brand/ref/landic-first.png`, `scroll-landic-900/1800/2700/4500/9000/14400/16200/18000/19800.png`, `seeds-first.png`.

**Imagery: photo** (stage-a IMAGERY = photo; the reference uses documentary natural-light photographs). Ours are generated documentary photographs (Grok, one STYLE string, §7), never the reference's pictures.

We borrow structure, techniques, colour relationships, measurements and the key-visual concept. We never copy the reference's photographs, copy, logo or whole-page layout. All text in this file and in the theme repo is English.

---

## 0. Fixed brand facts (identical on every page and in every language; brand.md repeats them verbatim)

- **Akiha College**: an electrical apprenticeship college that trains installation electricians on its own workshop boards and on real sites with partner employers. Founded **1998** by **Ines Varga**, a former site electrician, in a converted foundry shed. Address **Foundry Row 9, Calder Quay** (fictional, international-neutral; local address order per language in brand.md). Phone **+00 20 7410 0388** (fictional format). Email `hello@akiha-college.example` (every mailto and form fallback uses it). Sub-line everywhere: **"Electrical apprenticeship college · Since 1998 · Calder Quay"**.
- **Named people (8, no others)**:
  - Staff: **Ines Varga** (founder and principal, runs the open board Saturdays); **Rhea Lindqvist** (lead instructor, installation; the instructor in the hero photo); **Kofi Mensah** (instructor, inspection and testing); **Paloma Iturbe** (site assessor and employer liaison).
  - Apprentices (the four cases): **Joel Haddad** (Year 2), **Amira Sesay** (Year 1), **Sven Aalto** (Year 3), **Noor Rahimi** (Year 3).
- **Programme**: 12-week **foundation term** at the college → **trial week** with an employer → **3-year apprenticeship** (employer-signed contract; four days on site, one day at the college).
- **Intakes**: two a year, **24 places** each. **January 2027** intake starts Monday 11 January 2027, applications close Friday 27 November 2026. **September 2027** intake starts Monday 6 September 2027, applications close Friday 4 June 2027.
- **How a year is judged (fixed six pieces, always in this order)**: (01) The board — a distribution board built, terminated and labelled; (02) The tray run — containment measured, fixed and dressed; (03) The gland — armoured cable glanded and torque-checked; (04) The test sheet — inspection and test results written by hand and checked against the meter; (05) The site visit — the assessor watches a full working day on site, **three visits a year**; (06) The logbook — the employer's logbook, countersigned every month. Each piece is **signed** by an instructor or the assessor; a year is complete when all **six signed pieces** are in.
- **When an employer takes a trainee on (three conditions)**: foundation term complete; the first two signed pieces (the board and the gland); a trial week on the employer's site with Paloma's visit on day 3. **41 partner employers** (electrical contractors, facilities teams, a lift company; no names shown).
- **Figures (sp-count strip, fixed)**: 24 places per intake · 6 signed pieces a year · 3 assessor visits a year · 41 partner employers.
- **Cases (four, fixed)**:
  - (01) **Bakery refit, Calder Quay** — Joel Haddad, Year 2: a new 14-way distribution board, every circuit labelled; signed by Rhea Lindqvist. Photo C1.
  - (02) **School sports hall** — Amira Sesay, Year 1: a 38 m galvanised cable tray run at 4 m height; signed by Rhea Lindqvist. Photo C2.
  - (03) **Housing co-op car park** — Sven Aalto, Year 3: a charger circuit in armoured cable glanded into an isolator; signed by Paloma Iturbe on site. Photo C3.
  - (04) **Lift motor room** — Noor Rahimi, Year 3: fault-finding on a motor isolator, test sheet written by hand; signed by Kofi Mensah. Photo C4.
- **Fees (6 rows, EUR, identical everywhere)**:
  | Item | Price |
  |---|---|
  | Open board Saturday (3 hours, try a termination with an instructor) | Free |
  | Foundation term (12 weeks, full time) | €2,400 |
  | Apprenticeship tuition, per year (3 years; paid by the employer once signed) | €4,800 / year |
  | Tool kit and PPE (issued in week 1, yours to keep) | €620 |
  | Inspection and testing module (10 evenings) | €1,150 |
  | Practical re-assessment (one piece) | €180 |
- **Hours**: workshops Mon–Fri 07:30–16:30; admissions office Mon–Fri 09:00–17:00; open board Saturday the **first Saturday of each month 09:00–12:00**; closed Sundays and public holidays.
- **Process to apply (five ruled rows, never a grid)**: 1 Come to an open board Saturday → 2 Apply by form or email → 3 Foundation term (12 weeks) → 4 Trial week with an employer → 5 Signed on for three years.
- **Daily routine** (brand.md "day" section, also post 3): 07:30 boards uncovered and isolations checked; 08:00 the day's piece is set; 10:15 tea; 12:30 lunch; 15:45 tools counted, boards covered, the instructor signs what was watched; 16:30 workshop closed.
- No claims of guaranteed jobs, pass rates, awards, real media, real people or real brands.

---

## 1. Signature techniques (three, obvious at a glance; not to be diluted)

### T1. Serif question over a full-width framed photo window, nav bar docked under the window at the fold (landic recruit first screen, `ref/landic-first.png`, `ref/scroll-landic-900.png`; RT(b)(c)(d)(e))
- **Reference**: pale mist ground; one line of mincho serif top-left at y≈190; a 1365×564 photo (2.42:1, radius 0) at x30/y277 with 30px gutters; the 59px navigation bar is the last thing on the first screen (y841–900) and then pins to the top; solid near-black entry button with a white square arrow box.
- **Ours (home block 1)**: H1 "Would you sign this off?" Newsreader 400, **4.75rem (76px)**, one line at 1440, left x30, baseline ≈ y240; photo window **H01** x30, y277, width calc(100% − 60px), height **calc(100svh − 336px)** (= 564px at 900; clamp 380–760px), `object-fit: cover`, radius 0; **header directly under the window** (59px), sticky `top:0` once it reaches the top.
- Proportions not to dilute: photo occupies ≥ 60% of the first-screen height; ground band above it ≥ 240px tall at 900; gutters exactly 30px; no overlay, no gradient, no text on the photo; the header is below the photo at the fold on desktop (≥ 782px).
- **Inner pages**: every page head (About, Apprenticeship, How we judge, Employers, Instructors, Fees & intakes, Open board, Contact, Newsletter) repeats the composition: serif H1 statement top-left (3.5rem) on ground, then a framed window 30px gutters, **2.42:1**, radius 0 (header normal at top on inner pages).

### T2. Sticky 208px label rail with a dimmed index, beside a 1018px content column of wide indexed photos and ruled rows (landic `ref/scroll-landic-9000.png`, `-14400.png`, `-18000.png`; RT(c)(e)(f))
- **Reference**: left rail 208px at x30, sticky: 10px × 1px dash, Latin label ("Project Story"), an index list (active #222, others ≈ 40% opacity), "View All" link + 16px dark square arrow box. Content column starts at x377, 1018px wide: wide 1.85:1 photos with "(01)" index above captions; next photo cut by the right viewport edge; ruled rows "(05) title — description — arrow box".
- **Ours (home blocks 2, 4, 6, 7, 8)**: grid `208px 1fr`, column gap 139px, so the column starts at x377 and ends at x1395 (1018px). Rail: `position: sticky; top: 99px` (59 header + 40). Block 2 rail index = the four case names; block 4 rail = "How a year is judged"; block 6 "Employers"; block 7 "Fees and intakes"; block 8 "Journal". Each rail ends with "View all" + arrow box.
- Not to dilute: the rail is on the left, sticky, text-only, small (0.8125rem); the column is never centred; case photos are **1.85:1**, radius 0, full column width; "(01)" marks 0.75rem above each caption; rows separated by 1px rules.
- Index dimming: entry 1 ink, entries 2–4 at opacity .4, hover/focus 1. Progressive enhancement only: inside `@supports (animation-timeline: view())` and `@media (prefers-reduced-motion: no-preference)`, each case article declares `view-timeline-name: --case-N`, the block sets `timeline-scope`, and each rail link animates opacity .4→1→.4 over its case's `contain` range. No JS, no scroll listener; `?sp-static`, no-JS and editor show the static state.
- **Inner pages**: Work (4 cases + 6 pieces), How we judge (six rows), Apprenticeship (three years as rows), Fees & intakes (table), Instructors (four rows), Journal and archives (topic rows).

### T3. Pale panels passing over one full-bleed photograph, a pale serif line in the slit (landic interview section `ref/scroll-landic-16200.png`, `-18000.png`; RT(e) "fixed full-bleed photo behind three pale cards")
- **Reference**: a photo fixed behind the section (`position: fixed; inset: 0`); pale ground-coloured text cards scroll over it; the photo shows between them.
- **Ours (home block 5 "On site")**: a full-bleed **Cover** (min-height 160vh desktop, 120vh mobile) with photo **F1**, class `sp-parallax`, `--sp-par: 12%` (desktop) / 6% (mobile) so the photo moves much slower than the panels (the "fixed" feel without `background-attachment: fixed`). Inside, aligned to the 1018 column (x377–1395): **panel A** (ground #E6EAEB at 96% opacity, padding 64px, Newsreader 1.875rem statement + 2 lines) → **slit 240px** (desktop) / 160px (mobile) where only the photo shows, with one white serif line Newsreader 2.25rem centred-left in the slit: "Nobody signs off work they have not watched." (text sits on the Cover inner container, not on the moving layer) → **panel B** (same ground, three short cards in one row ≥ 1100px, stacked below: "Three visits a year", "A whole working day", "Signed on the day").
- Not to dilute: the photo is seen to the left of the panels (x0–377) and through the slit; panels are pale, square, unshadowed; the slit line is the only white text.
- **Inner pages**: About ("The shed in 1998"), Apprenticeship ("Four days on site, one day here"), How we judge ("The site visit"), Employers ("The trial week"), Open board ("Come on a Saturday").

### Supporting (not counted as signatures)
- 10px × 1px dash above every Latin label (CSS border on an empty pseudo-element, no `content` text).
- 16px dark square arrow box (`#1F262C` square, white arrow SVG) as the only icon; on the slate button the box is white with a slate arrow.
- "(01)" index marks 0.75rem Source Serif 4.
- Intake notice card (RT(f) 210×89 near-white `#F4F5F6`, underlined 0.6875rem headline + 0.625rem date): **in flow** in the hero top half, right column, bottom-aligned with the H1 (not fixed, so it never covers content or the fees column).

---

## Key visual concept

### (1) Reference first screen: concept, story, signature motion
Landic's first screen is a single serif question ("can you be proud of this city?") on a quiet mist-grey ground above a wide dusk photograph: a person in soft-focus dark silhouette in the foreground, the city sharp behind, blue-hour sky. The navigation bar sits at the very bottom of the first screen. Story: it does not sell the company; it asks the reader a question about their work and lets the photographs answer. Motion: the photo drifts slowly inside its window (ScrollTrigger scrub, linear), the nav bar rides up and pins to the top, and below, tall photos of the same person step past while short serif lines rise one after another.

### (2) Our translation (same composition, same motion idea, same image type = documentary photo)
Our first screen asks the question every electrician's work is judged by: **"Would you sign this off?"** — one serif line on the mist ground above a wide documentary photograph: an apprentice terminating an armoured cable into an isolator on a plywood training board, sharp in the right half; in the left-centre third, the instructor (Rhea) in soft-focus dark silhouette, watching the gland. The college shows the work before it explains the course. The photo drifts slowly in its window (sp-parallax), the nav bar docked under the window rides up and sticks; below, the four cases (results first) and then a tall gland close-up stand still while serif lines about what the instructor watches rise one after another.

### (3) KV checklist (all six implemented on the home first screen at 1440×900 and visible)
| # | Reference element | Our counterpart | Position (1440×900) | Motion | Image |
|---|---|---|---|---|---|
| 1 | One-line serif question top-left on pale ground | H1 "Would you sign this off?" Newsreader 400, 4.75rem, ink #1F262C | x30, baseline ≈ y240 (top half) | none (hero has no reveal) | — (text on ground; H01 below) |
| 2 | Wide dusk photo window 1365×564, 30px gutters, radius 0 | Framed window 1380×564 (2.42:1), radius 0, documentary workshop scene | x30–1410, y277–841 | — | **H01** |
| 3 | Soft-focus dark foreground silhouette, sharp context behind | Instructor in soft-focus silhouette (left-centre third, ≈ 30% of window width), apprentice's hands, gland and board sharp in the right half | inside the window | — | **H01** (composition requirement in §7) |
| 4 | Photo drifts inside its window (scrub, ease none) | `sp-parallax` on the window figure, `--sp-par: 8%` (mobile 5%) | window | linear scroll-driven drift; visible as soon as the user scrolls | **H01** |
| 5 | Nav bar docked at the bottom of the first screen, then sticks | Header 59px: wordmark left, 6 centred links, slate "Apply for a place" button with arrow box right | y841–900, then `sticky; top:0` | CSS sticky | — |
| 6 | Quiet mist ground, near-black ink, no brand colour; small dated notice card | Ground #E6EAEB, ink #1F262C, slate only on the button; notice card #F4F5F6 210×89 "January 2027 intake — applications close 27 November 2026" | card in the top half, right edge x1395, bottom aligned with H1 baseline | none | — |

The reference's step-through tall photos continue in home block 3 (H02, sticky) directly below — part of the concept, not of the first screen.

---

## 2. Home page

### First screen composition (1440×900, top-bottom halves)
- **Top half** (y0–277, ground #E6EAEB): grid `1fr 210px`, padding 0 30px, `align-items: end`, padding-bottom 22px. Left: H1 (above). Right: notice card 210×89 (`#F4F5F6`, padding 16px, 1px lift = `box-shadow: 0 1px 0 rgba(31,38,44,.06)`), headline underlined 0.6875rem, date 0.625rem `#5E666D`, whole card is a link to `/fees/#intakes`. No other element in the top half (no logo here: the wordmark is in the docked header).
- **Bottom half**: window H01 (y277–841), then header (y841–900).
- Saturated share ≤ 15% (check-first-screen.py; reference 8.4%). Only colour comes from H01 (cool grade, one small copper glint) and the slate button (≈ 1%).
- **< 782px**: the header moves to the top (`.home .wp-site-blocks{display:flex;flex-direction:column}` + header `order:-1`, 56px, sticky). H1 2.75rem (44px), lh 1.12, wraps to 2–3 lines, padding 32px 20px 20px. Window H01 below at **4:3**, margin 0 20px. Notice card becomes an in-flow full-width row under the photo (#F4F5F6, padding 14px 20px). No absolute-positioned or vertical labels anywhere in the first screen.

### Block order (results-first case wall; ≈ 520 English words on home)
| # | Block | Purpose | Layout | Photos | Copy | Effects |
|---|---|---|---|---|---|---|
| 1 | **Hero (T1)** + docked header | question + scene | top-bottom halves (above) | **H01** | H1 + card (12 words) | `sp-parallax` (window) only |
| 2 | **Case wall "What apprentices leave behind" (T2)** | results first | rail (dash, label "Work", index of 4 case names, "View all" → /work/) + column: 4 cases stacked, each: "(0N)" mark, photo 1018×550 (1.85:1), then grid `1fr 1fr`: left case name Newsreader 1.5rem + apprentice · year; right 2 serif lines (1.125rem) + spec row "Signed by … · Year N" 0.8125rem. Case gap 120px. Above case 1: H2 "What apprentices leave behind." 1.875rem | **C1, C2, C3, C4** | ≈ 120 words | each case `sp-reveal sp-reveal--up` (photo + caption as one unit) |
| 3 | **"What the instructor watches"** (step-through, KV continuation) | narrative | grid `712px 1fr`; left: tall photo **H02** 712×838 (0.85:1), flush to the left viewport edge (bleed, no gutter), `position: sticky; top: 59px`; right column padding-left 128px, max 520px: H2 "What the instructor watches." + **three narrative paragraphs** (≥ 40 words each: the gland, the labels, the hands) each preceded by a short serif lead line (Newsreader 1.5rem). Paragraph groups spaced 200px so they pass the still photo | **H02** | ≈ 170 words | right column `sp-stagger`, each group `sp-reveal sp-reveal--up` |
| 4 | **"How a year on site is judged" (T2)** | method | rail (label "Assessment", "View all" → /how-we-judge/) + column: figures strip (4 cells in one row, hairline separators: numeral Newsreader 3.5rem `sp-count` + label 0.8125rem) then **six ruled rows** RT-style: "(01)" 0.75rem · title Newsreader 1.5rem (col 1: 380px) · one-line description 0.9375rem (col 2) · arrow box (right). Row height ≥ 86px, 1px rules | — (text block; adds breathing room) | ≈ 90 words | figures `sp-count`; rows parent `sp-stagger` + rows `sp-reveal--up` |
| 5 | **"On site" curtain (T3)** | proof of supervision | full-bleed Cover F1 with panel A → slit 240px with white serif line → panel B (three cards) | **F1** | ≈ 70 words | `sp-parallax` (Cover background, `--sp-par: 12%`) |
| 6 | **"When an employer takes a trainee on" (T2, Positions style)** | employer route | rail (label "Employers", "View all" → /employers/) + column: two photos side by side (`1fr 1fr`, gap 24px) 1.4:1, each followed by a title Newsreader 1.5rem + arrow box (E1 "Foundation and trial week", E2 "Signed on for three years"); beneath, the **three conditions** as underlined serif link rows (1rem, lh 2) | **E1, E2** | ≈ 60 words | photos `sp-reveal--up` |
| 7 | **Fees and intakes (T2)** | prices | rail (label "Fees", "View all" → /fees/) + column: the 6-row fee table (§0) full column width, then intake line: "January 2027 · starts 11 January · applications close 27 November 2026 — September 2027 · starts 6 September · applications close 4 June 2027 — 24 places each" | — | 6 rows | **none** (prices never animate) |
| 8 | **Journal (T2, Topics style)** | latest | rail (label "Journal", "View all" → /journal/) + column: 3 post rows: thumbnail 208×117 (16:9) · title Newsreader 1.25rem + "Category | date" 0.8125rem `#5E666D` · arrow box right; 1px rules; row padding 40px 0 | **J1, J2, J3** | 3 titles | rows `sp-reveal--up` |
| 9 | **Apply band + newsletter** | conversion | ground #DDE2E4 band, padding 160px 30px: left (x377 column) H2 "Come and terminate a cable on a Saturday." Newsreader 3rem, 2 lines of copy (open board, first Saturday 09:00–12:00, free), slate button "Apply for a place" + text link "Book an open board" → /open-board/. Below, a 1px rule, then a newsletter strip in the same column: left "Letters from the workshop" Newsreader 1.5rem + one line ("Intake dates and one workshop note a month."), right the **newsletter form slot** (§11) | — | ≈ 55 words | H2 `sp-reveal--up` only; **no reveal on the form** |
| 10 | Footer (dark) | | `#1F262C` ground, text #E6EAEB; 4 columns in container 1380: wordmark + sub-line + address; Study (Apprenticeship, How we judge, Fees & intakes, Open board); College (About, Instructors, Employers, Work, Journal); Hours + phone + email; under the columns a compact **newsletter slot** row (dark tokens §11); © 1998–2026 Akiha College. Text links only, not a second nav | | | none |

Home photo positions: H01, C1, C2, C3, C4, H02, F1, E1, E2, J1, J2, J3 = **12** (≥ 8), all different.
Home must carry ≥ 250 English words with ≥ 3 narrative paragraphs ≥ 20 words: block 3 has the three paragraphs; blocks 2, 5, 6, 9 add the rest.

### Comparison with the most recent themes (no repeated skeleton)
| # | Kikai Fair | Mise Studio | Shio Butchers | Nohara Holiday Park | **Akiha College** |
|---|---|---|---|---|---|
| 1 | notice strip | outline hero + side panel | utility bar | photo-left hero | **question over framed window, nav docked under it** |
| 2 | diagonal-split hero | white narrative sheet | rail + stage hero | three-column ledger | **sticky-rail case wall (4 wide indexed photos)** |
| 3 | 4 poster cards | room accordion | counter cards | sticky narrative | **bleeding tall photo + rising serif lines** |
| 4 | value 01 + stats | full-bleed band | intro 2-col | stay cards | **figures + six ruled assessment rows** |
| 5 | ochre mosaic | method masonry | day hour rows | reservation method | **panels over one photo with a slit line** |
| 6 | how to come + prices | dated process | parallax band | parallax grounds | **two 1.4:1 photos + condition links** |
| 7 | parallax access band | fees | wrapping steps | off-season rows | **fee table in the rail column** |
| 8 | CTA band | three photo cells | farms | price rows | **journal topic rows** |
| 9 | newsletter | visit + waitlist | order band | journal / book band | **apply band + newsletter strip** |
Why different: no recent theme docks the nav under the hero or opens with results; our whole page is organised by one left label rail (T2) that none of them uses; the T3 slit curtain replaces their standard parallax bands; no cards grid, no mosaic, no split hero.

---

## 3. Inner pages (11 pages + 3 posts; signatures continue on ≥ 4 inner pages)

| Page (slug) | Head (T1 window) | Content | Other photos | Signatures |
|---|---|---|---|---|
| About (`about`) | A1 | Ines Varga, the foundry shed in 1998, what the college believes (show the work first), the workshop bays (4 bays × 6 boards = 24 places), Calder Quay; three narrative paragraphs | F1 (T3 band "The shed in 1998"), H02 | T1, T2 (rail "College"), T3 |
| Apprenticeship (`apprenticeship`) | P1 | foundation term 12 weeks; Year 1/2/3 as three ruled rows (what you build, what is signed); four days on site, one day here; tool kit | E2 (T3 band) | T1, T2, T3 |
| Work (`work`) | statement only (results first, no window) | the 4 cases in full (photo, apprentice, site, what was built, who signed, one paragraph each), then "The six pieces" rows | C1–C4 | T2 (rail index of cases), T1 statement |
| How we judge (`how-we-judge`) | S1 | figures strip, six signed pieces as rows with a paragraph each, the three site visits, what happens when a piece is not signed (re-assessment €180) | F1 (T3 "The site visit") | T1, T2, T3 |
| Employers (`employers`) | E1 | the three conditions, the trial week, what the employer pays (tuition €4,800 / year), logbook, how to take a trainee on (contact link) | O1 (T3 "The trial week"), E2 | T1, T2, T3 |
| Instructors (`instructors`) | H01 | the four staff as ruled rows (name Newsreader 1.5rem · role · "what I watch" sentence · since year) — never a 4-up team grid | — | T1, T2 |
| Fees & intakes (`fees`, anchor `#intakes`) | J2 | the 6-row fee table, both intakes with dates and 24 places, what is included, payment by the employer, process to apply (5 rows) | — | T1, T2 |
| Open board Saturdays (`open-board`, booking page) | O1 | first Saturday each month 09:00–12:00, free, what you will try (one termination), what to wear, **contact form slot** under "Book a Saturday", mailto fallback | K1 (T3 "Come on a Saturday") | T1, T3 |
| Contact (`contact`) | K1 | **contact form slot**, mailto fallback, address, phone, hours, directions in prose, FAQ 6 ruled rows (`core/details`) | — | T1, T2 |
| Newsletter (`newsletter`) | J3 | standalone subscribe page: 2 paragraphs (what we send), newsletter slot, privacy line | — | T1 |
| Journal (`journal`, role posts, empty content) | — | topic rows (T2 style) via home.html/archive.html | post featured images | T2 |
| Posts | featured J1/J2/J3 | (1) "What the gland tells you" — cat *Workshop notes*, tags *glands*, *year one*; (2) "January 2027 intake: dates and the open board" — cat *Intakes*, tags *intake*, *open board*; (3) "A day in bay two" — cat *Workshop notes*, tags *daily routine*, *year one* | | |

Standard pages for theme-meta / demo-content `screens`: home, about, news → `journal`, article (post 1), category (*Workshop notes*), tag (*year one*), newsletter (`newsletter`, standalone), contact (`contact`). Templates: front-page, page, single, archive, category, `tag.html`, home, 404, search. Header menu (6 centred links): Work, Apprenticeship, How we judge, Employers, Fees, Journal + button "Apply for a place" → `/contact/`.
Signatures continue on inner pages: T1 on 9 pages, T2 on 7, T3 on 5.

---

## 4. Colour (RT(a): monochrome mist page, colour only from photographs)
| Role | Reference | Ours | Share (first screen) | Use |
|---|---|---|---|---|
| Ground (mist) | `#E6EAEB` | **`#E6EAEB`** (same) | ≈ 33% | body, header, panels |
| Ground 2 | — | `#DDE2E4` (−3% L) | 0 | apply band, figures strip |
| Card | `#F4F5F6` | **`#F4F5F6`** | < 1% | notice card, form fields surface |
| Ink | `#222222` | **`#1F262C`** (≈ −1% L, cooler) | 3% | text, rules, arrow boxes, footer ground |
| Muted | #222 @ 40% | `#5E666D` | — | captions, dates, inactive index (opacity .4 on ink) |
| Slate (brand, row hex Konnezumi (navy grey)) | dark accent `#202028` button | **`#4E5964`** | ≈ 1% | header button, links hover, focus ring |
| Copper accent | none | `#B8582B` | ≤ 0.5% (≤ 1.5% site-wide) | the 1px underline under "Signed by" and the case year tag only |
| Rules | #222 low opacity | `rgba(31,38,44,.18)` | — | row rules |
| Error / success (forms) | — | `#9A3A2C` / `#3E6B52` | — | form states only |
Reason for the slate button instead of near-black: the row palette Konnezumi (navy grey) `#4E5964`; white on it = 7.1:1. Saturated share: reference 8.4%; our cap **≤ 15%** (scripts/check-first-screen.py). Photos are graded cool and low-saturation (§7) so they carry the same "colour from the photograph only" relation.

## 5. Type (font_direction **serif**)
- Latin display **Newsreader** (400, 500; variable opsz), Latin body **Source Serif 4** (400, 600). Both OFL, woff2 in `assets/fonts/`, loaded through **theme.json `fontFamilies` + `fontFace`** (editor and front end identical; check-editor-fonts.mjs must pass). Labels and nav use Source Serif 4 too (no sans anywhere; the reference's Inter labels become Source Serif 4 at the same sizes).
- CJK (Mincho direction): subset **Noto Serif TC 500** and **Noto Serif JP 500** woff2 for headings, also via theme.json fontFace (Hokuto/Hada subset workaround).
  - `display` en/fr/de: `"Newsreader", Georgia, serif`
  - `:root:lang(zh-TW)` display: `"Newsreader", "Noto Serif TC", "Songti TC", serif`; body: `"Source Serif 4", "Songti TC", "PMingLiU", serif` (no theme zh font, no JP font)
  - `:root:lang(ja)` display: `"Newsreader", "Noto Serif JP", "Hiragino Mincho ProN", serif`; body: `"Source Serif 4", "Hiragino Mincho ProN", "Yu Mincho", serif`
  - copy `shared/inc/editor-lang.php` → `inc/editor-lang.php` and require it (style.css has `:lang(` rules).
- Scale (theme.json fontSizes; RT(b) source in brackets):
  | Token | Size | Weight / lh / tracking | Use |
  |---|---|---|---|
  | `hero` | clamp(2.75rem, 4.6vw + .5rem, **4.75rem**) | Newsreader 400 / 1.08 / −0.01em | home H1 (largest ≥ 4.25rem) [statement serif, scaled up to meet the gate] |
  | `xxl` | clamp(2.5rem, 3.6vw, 3.5rem) | 400 / 1.12 | inner H1, figures |
  | `xl` | 3rem | 400 / 1.2 | apply band H2 |
  | `l` | 1.875rem (30px) | 400 / 1.6 / 0.01em (CJK: 0.06em, lh 1.8) | section H2 [H2 28px / 1.8 / .06em] |
  | `m` | 1.5rem | 500 / 1.5 / 0.01em | case names, row titles [card H3 500] |
  | `s` | 1.25rem | 500 / 1.65 / 0.02em (CJK .08em) | H3, journal titles [H3 18px / 29.7] |
  | body | 1rem | Source Serif 4 400 / 1.75 (CJK 1.85) | paragraphs [16 / 24] |
  | `small` | 0.8125rem | 400 / 2 / 0.02em | labels, captions, spec rows [12–13px / 26px] |
  | `xs` | 0.75rem | 400 / 1.6 | "(01)" marks |
  | nav | 0.8125rem | 600 / 1 / 0.04em | header links [12px Demi .04em] |
- CJK heading sizes ≈ 0.75 × Latin; fr/de `hyphens: auto` on body and H2.

## 6. Spacing, radius, decoration (RT(c)(d)(f))
- Gutter `--space-side: 30px` (≥ 782), 20px (< 782). Full-width containers (no centred max-width), content column 1018px at x377 via the `208px 1fr` rail grid with column-gap 139px (≥ 1100px). 782–1099: rail stacks above the column (label + View all in one line), column full width.
- Section padding: 180px top/bottom (desktop) [RT 160–200], 96px (mobile). Paragraph groups in block 3: 200px apart.
- Header 59px desktop / 56px mobile, ground colour, 1px bottom rule only once stuck.
- Radius **0** everywhere (photos, cards, buttons, fields) [RT(d)].
- Rules 1px `rgba(31,38,44,.18)`. No shadows except the 1px card lift.
- Arrow box 16×16 (`#1F262C`, white 10px arrow SVG inline in markup). "View all" = underlined 0.8125rem text + box, gap 10px.
- Button "Apply for a place": slate #4E5964, white 0.8125rem 600, height 40px (header) / 52px (bands), padding 0 12px 0 16px, white 16px arrow box at right, gap 24px [RT entry button].
- Label dash: 10px × 1px ink, 28px above the label.
- Hover: links underline offset 4px; row hover `background: rgba(31,38,44,.03)`; photo inside link `scale(1.03)` .6s cubic-bezier(.33,1,.68,1), `transition-delay: 0s`.

## 7. Photos (17, Grok, one at a time, read every one)
**STYLE** (identical for every image):
`documentary natural-light photograph, soft overcast daylight from high workshop windows, muted cool grey-blue colour grade, low saturation, real training-workshop and building-site surfaces (plywood training boards, galvanised cable tray, grey conduit, concrete floors), shallow depth of field, candid unposed people of mixed ages and backgrounds in plain charcoal or navy workwear and clear safety glasses, cables with grey or black sheaths and only small copper glints, international modern setting, no orange hi-vis, no text, no readable labels, no logos, no signage, no brand marks, no Japanese elements`

| ID | Subject / composition | Ratio (px) | Used on | Home |
|---|---|---|---|---|
| **H01** | apprentice (woman, 20s) terminating an armoured cable into a grey isolator on a plywood training board, hands and gland sharp in the right half; instructor in soft-focus dark silhouette in the left-centre third, back three-quarters to camera, watching; window light from the left | 2.42:1 (2000×826) | home hero; Instructors head | ✓ |
| **H02** | close-up: brass cable gland on armoured cable, two hands with a torque spanner, instructor's finger pointing, tall framing | 0.85:1 (1200×1412) | home block 3; About | ✓ |
| **C1** | finished 14-way distribution board, door open, blank white label strips, neat cores, in a bakery back room (flour sacks soft in background) | 1.85:1 (1850×1000) | home block 2 case 01; Work | ✓ |
| **C2** | long galvanised cable tray run along a school sports hall wall at height, an apprentice on a podium step dressing cables | 1.85:1 | home case 02; Work | ✓ |
| **C3** | outdoor car park under a canopy, armoured cable glanded into a grey isolator next to a wall-mounted charger (no brand), apprentice kneeling, overcast | 1.85:1 | home case 03; Work | ✓ |
| **C4** | lift motor room, apprentice with a multifunction tester (blank screen) at a motor isolator, handwritten test sheet on a clipboard (unreadable) | 1.85:1 | home case 04; Work | ✓ |
| **F1** | the college workshop at the end of the day: rows of plywood training boards, tools laid out, empty, long high windows, one instructor walking away in the distance | 16:9 (2000×1125) | home block 5 (T3); About T3; How we judge T3 | ✓ |
| **E1** | trainee and site supervisor walking a corridor of a building under fit-out, looking at a ceiling cable route, conduit overhead | 1.4:1 (1400×1000) | home block 6; Employers head (cropped 2.42:1) | ✓ |
| **E2** | site assessor (woman, 40s) and apprentice at a consumer unit on site, she holds a clipboard, both looking at the work | 1.4:1 | home block 6; Apprenticeship T3; Employers body | ✓ |
| **J1** | macro of a gland and cut armour wires on a workbench, side light | 16:9 (1600×900) | home block 8; post 1 | ✓ |
| **J2** | the college's open front door in the morning, two newcomers with backpacks arriving, workshop visible inside | 16:9 | home block 8; post 2; Fees head (2.42 crop) | ✓ |
| **J3** | bay two at 07:30: boards uncovered, an apprentice hanging a lock-off on an isolator, kettle and mugs on a side bench | 16:9 | home block 8; post 3; Newsletter head | ✓ |
| **A1** | founder (woman, 60s, grey hair) at an old wooden workbench in a converted brick foundry shed, testing a joint, archive boards behind | 2.42:1 | About head | |
| **P1** | a row of six training boards with six apprentices working side by side, seen along the row, instructor in the middle distance | 2.42:1 | Apprenticeship head | |
| **S1** | on a real site: assessor watches an apprentice mark out a containment route on a block wall with a level | 2.42:1 | How we judge head | |
| **O1** | open board Saturday: visitors of mixed ages (a teenager, a parent, a career changer in their 40s) trying a termination with an instructor guiding | 2.42:1 | Open board head; Employers T3 | |
| **K1** | the college exterior: brick and steel foundry shed with tall windows, a small yard, bicycles, morning overcast | 2.42:1 | Contact head; Open board T3 | |
Rules: ≤ 300 KB, ≤ 2000px, webp; 0 cut-outs; no page shows the same photo twice; regenerate any image with text, logos, broken faces/hands, unsafe practice (live work without isolation), or a warm/orange cast that pushes the first screen over 15%.

## 8. Responsive rules (hard)
- 390px first screen: header at top (56px), H1 2.75rem in flow, H01 4:3, notice row in flow. **No vertical text, no absolutely positioned labels**, nothing overlapping.
- Rail grid only ≥ 1100px; 782–1099 rail stacks; < 782 single column, case photos full width (1.85:1 kept), H02 becomes a normal 4:5 photo above the paragraphs (not sticky).
- **Fee table**: at ≥ 782px the table spans the full content width (column 1018 at ≥ 1100; full container at 782–1099), two columns `1fr auto`, price column `white-space: nowrap; text-align: right; min-width: 10ch`; never clipped or overflowing (auto-gates at 800/1280). < 782: every row stacks (item on line 1, price on line 2 left-aligned, bold), no horizontal scroll. Any other table (intakes, FAQ) stacks the same way.
- Figures strip: 4 in a row ≥ 782, 2×2 below.
- Block 6 photos: side by side ≥ 782, stacked below. T3 panel B cards: 3 in a row ≥ 1100, stacked below; slit 160px on mobile.
- `html, body {overflow-x: clip}`; `scrollWidth == innerWidth` at 390 and 1280.

## 9. Motion and scroll effects (sp-scroll only; files copied unchanged into assets/)
Theme CSS variables: `--sp-dur: .9s`, `--sp-ease: cubic-bezier(.33,1,.68,1)` [RT(g) power2.out / cubic-bezier(.33,1,.68,1), ≈ 0.9 s], `--sp-dist: 24px`. Stagger step stays the built-in .12s (reference .14s).
| Effect | Where | Reference (trigger / time / ease) |
|---|---|---|
| **`sp-parallax`** (required) | (a) home hero window figure H01, `--sp-par: 8%` desktop / 5% mobile; (b) home block 5 Cover F1, `--sp-par: 12%` / 6%; inner T3 bands same values | landic hero photo drift: ScrollTrigger scrub, start "top bottom" → end "bottom top", ease none; landic fixed interview photo |
| **`sp-reveal sp-reveal--up` + `sp-stagger`** | block 2 cases, block 3 paragraph groups (stagger), block 4 rows (stagger), block 6 photos, block 8 rows, block 9 H2; inner pages same row patterns | landic statement lines: start "top 80%", 0.9–1.8 s, power2.out, stagger .14, small upward shift |
| **`sp-count`** | block 4 figures (24, 6, 3, 41); How we judge figures | pro-seeds figures strip (static there; count added as our motion) |
- Foreground text is never inside a moving layer: on the hero the window holds only the image; on T3 the slit line and panels sit in the Cover inner container.
- **No reveal** on: hero (block 1), header, notice card, fee table, forms, footer, legal text, T3 panels. Max 3 effect types per page ✓.
- No scroll listeners, no GSAP / Lenis / AOS; header stickiness is plain CSS; rail dimming is the CSS-only enhancement in §1 T2.
- Screenshots and gates use `?sp-static`; `check-parallax.mjs` must pass (≥ 6px drift desktop and mobile, 0 under reduced motion; ≥ 3 reveals below the fold hidden before and visible after).

## 10. Similarity to the reference (target 80%)
| Dimension | Reference value (RT) | Akiha value |
|---|---|---|
| Ground | #E6EAEB | #E6EAEB |
| Ink | #222222 | #1F262C |
| Button | solid #202028, white square arrow | solid #4E5964 (row hex), white square arrow |
| Saturated first screen | 8.4% | ≤ 15% (target ≈ 9%) |
| Headline type | mincho serif 400, single line top-left | Newsreader 400, single line top-left, 4.75rem |
| H2 | 28px / 1.8 / .06em | 30px / 1.6 / .01em (CJK 1.8 / .06em) |
| Labels / nav | Inter 12–16px, lh 2; nav 12px 600 .04em | Source Serif 4 13px, lh 2; nav 13px 600 .04em |
| Gutter | 30px | 30px |
| Header | 59px, docked at fold, then sticky | 59px, docked at fold, then sticky |
| Hero window | x30 y277 1365×564 (2.42:1), radius 0 | x30 y277 1380×564 (2.42:1), radius 0 |
| Rail / column | 208px at x30 / column x377, 1018px | 208px at x30 / column x377, 1018px |
| Case photos | 1.85:1, "(01)" index | 1.85:1, "(01)" index |
| Tall story photo | 0.85:1 half width, flush | H02 0.85:1, 712px flush left, sticky |
| Positions photos | 1.4:1 ×2 + title + arrow box | E1/E2 1.4:1 ×2 + title + arrow box |
| Fixed photo section | fixed photo, pale cards over it | Cover + parallax 12%, pale panels + slit |
| Radius / shadow | 0 / none (1px card lift) | 0 / none (1px card lift) |
| Decoration | 10px dash, 16px arrow box, (01) marks | same |
| Notice card | 210×89 #F4F5F6, fixed bottom-right | 210×89 #F4F5F6, in flow in hero top half |
| Motion | scrub parallax (ease none), reveal top 80%, power2.out, stagger .14 | sp-parallax 8% / 12%, reveal--up .9s cubic-bezier(.33,1,.68,1), stagger .12 |
| Section rhythm | 160–200px | 180px |
| Imagery | documentary photo, backlit silhouettes, soft focus | documentary photo, soft-focus silhouette, cool grade |
Our own: all photographs, copy, wordmark; the slate brand button; copper hairline accent.

## 11. Forms (form contract v1 — `steps/form-contract-v1` exists)
- Copy `pipeline/assets/forms/shippress-forms.php` → `inc/`, its CSS and editor JS → `assets/` unchanged; `require_once` in functions.php. No fake forms, no mail/subscribe backend, no import-time plugin detection. Slots are their own blocks, never inside a paragraph/button.
- **Contact** (`contact`): `shippress_form_slot( kind: contact )` directly under H2 "Write to admissions" (first section after the head), column 760px. **Open board Saturdays** (`open-board`, booking page): same slot under H2 "Book a Saturday", after the date/what-to-bring rows. First published CF7, then WPForms. **Fallback** (buffered literal markup, unchanged): the slate button as `<a href="mailto:hello@akiha-college.example?subject=…">` — "Email admissions" (Contact) / "Book a Saturday by email" (Open board), subject "Enquiry — Akiha College" / "Open board booking — Akiha College", plus phone and office hours line. Never link back to /contact/.
- **Newsletter** (`newsletter`, standalone page, not an alias of the journal): newsletter slot under the two paragraphs, column 760px. Also in **home block 9** (strip) and the **footer** (compact row, dark ground). Order: MailPoet (explicit ID via `shippress_form_id`), then MC4WP; CF7 / WPForms only by an explicit dedicated newsletter ID. No plugin: required `type=email` field + submit, native mailto POST, visible notice "Opens your email app. Send the request to subscribe; you are not subscribed yet."
- **Fields**: contact = name, email, phone (optional), "I am" select (school leaver / career changer / employer / parent), preferred intake select (January 2027 / September 2027 / open board only), message textarea, consent checkbox; open board = name, email, Saturday select (next three first Saturdays), number of people, message; newsletter = email (+ consent if the plugin provides it).
- **Styling** (scoped to CF7, WPForms, MailPoet, MC4WP, Jetpack, `.wp-block-form`, `.sp-newsletter-fallback`; no global selectors): label Source Serif 4 0.8125rem 600 ink; input/select/textarea height 50px (textarea 160px), background `#F4F5F6`, 1px `#1F262C` bottom-and-sides border, radius 0, text ink, placeholder `#5E666D`; checkbox/radio `accent-color: #4E5964`; submit = slate button (40/52px, radius 0, white text, arrow box optional on plugin submits); **focus** 2px `#4E5964` outline, 3px offset; **error** `#9A3A2C` text + 1px border + message under the field; **success** ink text on `#F4F5F6` with a 4px `#3E6B52` left edge.
- **Tokens** light (ground #E6EAEB / #DDE2E4): `--sp-form-accent: var(--wp--preset--color--slate)`, `--sp-form-on-accent: #FFFFFF`, `--sp-form-radius: 0`, `--sp-form-focus: var(--wp--preset--color--slate)`, `--sp-form-surface: var(--wp--preset--color--card)`, `--sp-form-text: var(--wp--preset--color--ink)`. **Dark** (footer #1F262C): surface `#F4F5F6`, text ink inside fields, labels/notice `#E6EAEB`, accent `#E6EAEB`, on-accent `#1F262C`, focus `#E6EAEB`, error `#E8A090`.
- **i18n semantic keys** in `inc/i18n/en.php` (then `L10N_SEMANTIC=1` extract; localised, not literal, in zh-TW, ja, fr, de): `forms_email` ("Your email address"), `forms_subscribe` ("Send me the letters"), `forms_mail_notice` (notice above), `forms_mail_subject` ("Newsletter request — Akiha College"), `contact_email` ("Email admissions"), `booking_email` ("Book a Saturday by email"), `contact_subject`, `booking_subject`, newsletter intro and privacy line ("One letter a month. Unsubscribe any time; we never share your address.").
- **No `sp-reveal` on forms; never in the home first screen** (home slots only in block 9 and the footer). `form-runtime-check.php` (five languages, no plugins) and `repo-gates.sh forms` must pass; check real CF7 at 390 / desktop on #E6EAEB and the dark footer without submitting.

## 12. Home acceptance checklist
- [ ] First screen 1440×900: one-line serif H1 at x30, H01 window x30/y277 ≈ 1380×564 radius 0, header docked at y841–900, notice card top-right of the top half; all six KV items visible.
- [ ] H01 shows the apprentice terminating a cable, instructor in soft-focus silhouette; no text/logos; saturated share ≤ 15%.
- [ ] Header sticks to the top after scrolling; exactly one top menu with 6 centred links + slate button.
- [ ] 390px: header on top, no vertical/absolute labels, no overlap, no horizontal scroll.
- [ ] Block order 1–10 as §2; 12 different photos on home; ≥ 250 English words, block 3 has three paragraphs ≥ 20 words.
- [ ] T2 rail sticky at 208px / column x377 on blocks 2, 4, 6, 7, 8; "(01)" marks; arrow boxes; dashes.
- [ ] T3 curtain: F1 visible left of the panels and through a 240px slit with the white serif line.
- [ ] `sp-parallax` on hero and block 5 passes check-parallax (desktop + mobile, 0 drift reduced-motion); hero has no reveal; ≥ 3 reveals below the fold.
- [ ] Fee table: 6 rows, prices identical to §0, full width at ≥ 782, price column nowrap right, stacked on mobile; no reveal.
- [ ] Newsletter slot in block 9 and footer shows email + submit without plugins and the mailto notice; no reveal on forms.
- [ ] Fonts: Newsreader / Source Serif 4 via theme.json fontFace; largest size 4.75rem ≥ 4.25rem; editor matches front end.
- [ ] auto-gates (en, `1 1`) pass; pattern_source.py passes.
