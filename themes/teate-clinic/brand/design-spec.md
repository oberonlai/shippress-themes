# Teate Clinic: design spec (stage 1 spec, binding for implementation)

Slug `teate-clinic`. A two-clinician **osteopathy clinic** for desk workers and amateur athletes that treats with the hands, not machines. Row b40-1: archetype **split-screen**, hero **photo-left-text-right**, nav **top-bar**, page structure **narrative-problem-method-proof**, type **business** (WooCommerce declared compatible, not required), font direction **sans** (Outfit / Figtree, CJK Noto Sans TC / JP, gothic / sans), palette "seiji (celadon)" `#6E8B74`, category health-wellness. Five languages: en, zh-TW, ja, fr, de.

Primary reference (ref-check passed; not in `used-refs.txt`): **Ito Hospital** https://www.ito-hospital.jp/ (S5-Style medical entry). No secondary reference. Measurements in `brand/reference-tokens.md`, quoted below as **RT(a)…RT(g)**. Screens in `brand/ref/`: `ito-first.png` (first screen 1440 × 900), `ito-tall.png` (whole home), `ito-visit.png` (first-visit page).

**Imagery: photo** (stage-a IMAGERY = photo; Ito Hospital leads with one documentary photograph, RT(e)). We generate every photograph ourselves with one STYLE string (§6). We never copy Ito Hospital's photographs, icons, copy, logo or full-page layout. The info card, outline boxes, "+" discs, dotted dividers, rules, tiles and line icons are our own CSS/SVG.

---

## 0. Fixed brand facts (identical on home, inner pages, posts and all five languages; brand.md copies these)

- **Teate Clinic**, osteopathy clinic, founded **2014** by **Maren Holt** and **Kofi Mensah**. Address **14 Linden Row, Halbrook** (fictional, international-neutral city), ground floor, step-free. Phone **+00 44 555 0172** (fictional format). Email `hello@teate-clinic.example`.
- **Tagline (card + meta description):** "Hands-on care for desks and sport."
- **Hours (one ledger, everywhere):** Mon–Fri **08:00–19:30** · Sat **08:30–13:00** · Sun and public holidays closed. Last first-visit start: Mon–Fri **18:30**, Sat **12:00**. Phone desk Mon–Fri **08:00–18:00**. Evening slots (17:00–19:30) are kept mainly for desk workers.
- **The three complaints** (home #complaints = Conditions page sections, same order, same names):
  1. **Neck and shoulders from desk work**: stiffness, headaches at the end of the day, a shoulder that "sits up".
  2. **Lower back**: from long sitting, lifting, moving house, or a sudden twinge.
  3. **Sport niggles**: knees, ankles, hips and shoulders for runners, cyclists and swimmers who train for fun.
- **The first hour (60 minutes; the ledger; numbers used by `sp-count`):** **10 min** talk (where it hurts, when, what makes it better or worse) → **15 min** watching how you move (standing, sitting, bending, walking) → **25 min** hands-on treatment → **10 min** plan and two or three exercises to take home. Arrive **5 minutes** early for a one-page form. Wear clothes you can move in; shorts for knees.
- **Visit flow (4 prose lines, 01–04, never a timeline graphic or step grid):** 01 Book online, by phone or email. → 02 Fill in the one-page form on arrival (5 minutes). → 03 The first hour, as above. → 04 A plan: many people need two to four follow-ups over a few weeks; some need only one; we say so honestly.
- **Price list (6 items, EUR in every language; home table = Prices page = Book page summary):**
  | # | Visit | What happens | Length | Price |
  |---|---|---|---|---|
  | 1 | First visit | talk, movement check, treatment, plan | 60 min | EUR 95 |
  | 2 | Follow-up | treatment and review of your exercises | 40 min | EUR 70 |
  | 3 | Short follow-up | one area, for returning patients | 25 min | EUR 50 |
  | 4 | Sport check | running, cycling or swimming movement review and treatment | 50 min | EUR 85 |
  | 5 | Five follow-ups | five 40-minute follow-ups, used within six months | 5 × 40 min | EUR 320 |
  | 6 | Workplace visit | 90 minutes at your office, desk set-ups for up to four people | 90 min | EUR 240 |
  Note line everywhere the table appears: "Hands only: no machines, no ultrasound, no needles. Cancel up to 24 hours before at no cost. Many private health plans repay part of a visit; we give you a receipt to claim."
- **Named people (7, fictional):** clinicians **Maren Holt** (osteopath, co-founder; neck, shoulders and lower back of desk workers; Mon, Tue, Thu, Sat) and **Kofi Mensah** (osteopath, co-founder; sport niggles, knees and ankles, runs and cycles himself; Mon, Wed, Thu, Fri evenings); **Inès Laurent** (front desk, books every visit, answers the phone); **Ruth Adeyemi** (practice manager, writes the clinic letter). Patients in the stories: **Daniel Okafor**, **Sofia Brandt**, **Tomás Rivera**.
- **Stories (3, qualitative only; no percentages, no cure claims):**
  1. **Daniel Okafor, accountant, neck after the year-end deadlines** — Maren; four visits over six weeks; a new screen height and two exercises; he can check over his shoulder on the bike again without turning his whole body.
  2. **Sofia Brandt, weekend runner, outside of the left knee** — Kofi; a sport check and three follow-ups; the long run built up more slowly with one strength session a week; she ran her autumn half marathon at an easy pace.
  3. **Tomás Rivera, designer, lower back after moving house** — Maren; three visits; learned how to lift and how to break up long sitting; now comes back twice a year "for a service".
- **A day (brand.md "day" / daily routine section):** 07:45 rooms aired, couches made with fresh linen → 08:00 first patient → 12:30 notes written, Inès returns calls → 13:30 afternoon visits → 17:00–19:30 evening slots for people coming from work → 19:45 laundry on, rooms reset.
- **What we are not (home #why, About):** not a gym, no machines; we do not diagnose disease; if something you tell us needs a doctor (fever, numbness, night pain, a fall), we stop and refer you.
- No awards, no "certified/registered by" real bodies, no guarantees ("fixes back pain" is never said), no real brands, places, media or people.

---

## 1. Signature techniques (three, from Ito Hospital https://www.ito-hospital.jp/; obvious at a glance; not to be diluted)

### T1. Split first screen: rounded photo + info card + two outline entry boxes (`ref/ito-first.png`, RT(c)(d)(f))
- **Reference:** container 1296 px; left column 306 px holds a **saturated green info card** (logo, tagline, 1 px white rule, address, phone) at the top and two **outline boxes** at the bottom ("first visit" blue 2–3 px border with a 30 px blue "+" disc; "returning" orange border with an orange disc); 12 px gap; one **990 × 480 rounded (r8) photograph** to the right. Empty sky between card and boxes.
- **Ours (home hero):** mirrored to **photo left** (planned hero_composition). Photo 790 × 520, r8; right column 482 px: celadon card top, **H1 in the gap** where the reference shows sky, two outline boxes stacked at the bottom. Card ground `#5B7762`, white text; box 1 border 2 px `#5B7762` + disc `#5B7762`; box 2 border 2 px `#C69A5B` + disc `#C69A5B`. Discs 30 px circles, white "+" 14 × 2 px bars (CSS, not text).
- **Not to be diluted:** the card must be a solid colour block (not an outline, not a pale tint); the two boxes must be outlined, white-filled, full column width, stacked, with the coloured "+" disc left of the label; the photo must be one rounded landscape photograph flush with the card's top edge and the boxes' bottom edge.
- **Inner pages (T1 head on About, First visit, Conditions, Clinicians, Prices, Contact, Book, Stories):** same row scaled down: photo 64 % left (r8, ratio 3:2, height 400) + right column with the celadon card holding the **page title (H1 3.25rem white)** and a one-line lede, then two outline boxes "Book a first visit" (celadon) → `/book/` and "Call +00 44 555 0172" (ochre) → `tel:`.

### T2. Card-row sheet: five link cells with dotted dividers (`ref/ito-first.png` y 576–680, RT(c)(d)(f))
- **Reference:** one white rounded sheet (r8, shadow `0 3px 8px rgba(0,0,0,.24)`) 106 px tall, 48 px under the hero, full container; five equal cells, each a 40 px green line icon above a 15 px label; **dotted 3 px vertical dividers** ~72 px tall between cells.
- **Ours (hero_footer = card-row):** same sheet, 1296 × 106, 40 px under the hero row, five cells: **First visit** `#first-hour` · **Three complaints** `#complaints` · **Clinicians** `#clinicians` · **Hours** `#hours` · **Find us** `/contact/`. Icons: our own 36 px SVG line icons, stroke `#6E8B74` 1.75 px (open hand, three dots on a spine curve, two heads, clock, pin). Divider: `border-left: 3px dotted #6E8B74`, height 72, vertically centred.
- **Not to be diluted:** the shadow (not a hairline border only), the dotted dividers (not solid), five cells (not three, not four).
- **Inner pages:** the same sheet is the in-page anchor bar under the T1 head on **First visit** (Before · The hour · After · Prices · Book), **Conditions** (Neck · Back · Sport · When we refer · Book), **Prices** (Visits · Insurance · Cancel · Workplace · Book) and **Contact** (Address · Hours · Getting here · Access · Write).

### T3. Ruled ledger: celadon bold label + dark value on 1 px rules (`ref/ito-tall.png` hours column, RT(b)(d))
- **Reference:** label 20–26 px bold green ("reception hours") immediately followed on the same line by a bold dark value; **1 px green rule** under each label row; notes in 15 px below with an asterisk; news panel rows separated by **dotted horizontal dividers**.
- **Ours:** `.tc-ledger` rows: label Figtree 600 22 px `#5B7762` + value Figtree 600 17 px `#22302A` on the same baseline (gap 16), 1 px `#6E8B74` rule 8 px under, 14 px notes `#56615B` below prefixed by "*" in the markup (not CSS content). Used for home **#hours**, home **#first-hour** (minutes with `sp-count`), Prices note rows, Contact address/hours, First visit hour, Clinicians days, Book "before you come". Notice lists use `border-top: 2px dotted #6E8B74` per row.
- **Not to be diluted:** label colour must be the celadon (not ink), the rule must be the celadon (not grey), label and value on one line at ≥ 782 px.

### Supporting (required, not counted)
- **Tile grid** (`ref/ito-tall.png` 12 green tiles): home #ways = 8 tiles 4 × 2, ground `#6E8B74`, white Figtree 600 19 px label + 28 px white line icon above, r8, 312 × 96, gap 20 (RT tiles 204 × 64, gap ~20 → scaled to our 1296 container). Hover `#5B7762`, 0.3 s ease.
- **Header top stripe** (`ref/ito-visit.png` green top bar): 6 px `#6E8B74` stripe at the top of the header on every page.
- **Round menu disc** (RT(f) 80 px green hamburger with white ring): mobile menu toggle is a 48 px `#6E8B74` circle with a 3 px white ring and three white bars; desktop shows the inline menu (exactly one top menu).
- **Back-to-top tab** (RT(f)): 40 × 40 square `#6E8B74`, white chevron, fixed bottom-right 24 px, **only ≥ 782 px** (hidden on mobile so it never overlaps text).
- **Deep footer** (`ref/ito-tall.png` footer): full-width `#3F5A47`, white text.

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
Ito Hospital's first screen shows **the hospital building itself** in one large rounded photograph on a sky-blue cloud backdrop that fades to white; to its left the green identity card ("for people with thyroid disease", address, phone) and two outline entry boxes sort the visitor into **first visit** or **returning**; under it a five-icon sheet lists the five things a patient needs (the disease, outpatient guide, doctors' timetable, questions, access). **Story:** "you are in the right place; here is where to start." **Motion:** none on scroll; hover colour/height transitions 0.3–0.7 s ease only (RT(g)).

### (2) Our translation (same story "you are in the right place, here is where to start"; same composition family; image type photo; composition forced to split-photo-left / beside-photo / card-row)
Instead of the building we show **where the care happens**: a documentary photograph of Maren supporting a seated patient's shoulder on a low pale-wood couch in a pale room, window light from the left. The pale wash ground behind the hero (`#EEF3EF` fading to white at the card row) takes the role of the sky backdrop. The right column says "Tell us where it hurts." and sorts the visitor exactly like the reference: **Your first visit** / **Returning patients**. The card row lists the five things a new patient needs. Motion: like the reference, the first screen is **still** (no reveal, no parallax in the hero); hover 0.3 s ease on the boxes and cells. The first scroll motion is the parallax room band lower on the page.

### (3) KV checklist (all implemented on the home first screen at 1440 × 900 and visible)
| # | Reference element | Our equivalent | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Large rounded landscape photo of the hospital (990 × 480, r8) | Photo of clinician supporting a seated patient's shoulder, 790 × 520, r8, focal point 55 % 45 % | hero left, x 72–862, y 96–616 | still (no reveal, no parallax) | **#1 `hero-shoulder.webp`** |
| 2 | Green info card: logo, tagline, rule, address, phone | Celadon card `#5B7762`: "Teate Clinic · Osteopathy" (Figtree 600 14 px uppercase .1em), tagline "Hands-on care for desks and sport." (Outfit 400 22 px), 1 px white rule 60 % opacity, address + phone (14 px, phone is a `tel:` link, underlined) | right column top, 482 × 164, y 96 | still | — (CSS) |
| 3 | Sky between card and boxes | **H1** "Tell us where / it hurts." Outfit 300 4.25rem lh 1.05 `#22302A` + lede 16 px in the gap | right column middle | still | — |
| 4 | Blue outline "first visit" box with "+" disc | Box "Your first visit" + sub-line "60 minutes · EUR 95", border 2 px `#5B7762`, disc `#5B7762` → `/first-visit/` | right column, 482 × 68, bottom − 80 | hover: fill `#EEF3EF`, disc rotates 90°, 0.3 s ease | — |
| 5 | Orange outline "returning" box | Box "Returning patients" + "Book a follow-up", border 2 px `#C69A5B`, disc `#C69A5B` → `/book/` | right column bottom, 482 × 68, bottom 0 | same hover | — |
| 6 | Five-icon sheet with dotted dividers | T2 card row: First visit · Three complaints · Clinicians · Hours · Find us | under hero, 1296 × 106, y 656–762 | hover: label `#5B7762` + icon lifts 2 px, 0.3 s ease | — (own SVG icons) |

All six rows are visible above y 900 at 1440 × 900. Row 1 photo is listed in §6.

---

## 3. Home page

### First screen composition
**hero_composition: split-photo-left · hero_text: beside-photo · hero_footer: card-row · hero_fingerprint: split-photo-left/beside-photo/card-row**

- **split-photo-left:** Group `.tc-hero` alignfull, background `linear-gradient(180deg, #EEF3EF 0, #EEF3EF 62%, #FFFFFF 100%)` (the reference's sky backdrop fading to white, RT(a)), padding-top 24, padding-bottom 0. Inner grid wideSize 1296 (x 72–1368): `grid-template-columns: minmax(0,1fr) 482px; gap: 24px; height: min(520px, calc(100vh - 380px)); min-height: 440px`. Left cell `figure.tc-hero__photo > img` photo #1, `object-fit: cover`, `object-position: 55% 45%`, radius 8, no overlay, no gradient, **no text on the photo**. Not full-bleed: the photo stays inside the container with the wash visible on both sides.
- **beside-photo:** right cell `.tc-hero__side`, flex column, `justify-content: space-between`, height = photo height:
  1. KV #2 card (padding 24 28, radius 8). Card text has contrast ≥ 4.9:1 (white on `#5B7762`).
  2. Middle (flex 1, centred vertically, padding 0 4): **H1** "Tell us where<br>it hurts." Outfit 300 `clamp(2.75rem, 4.7vw, 4.25rem)` (68 px at 1440), lh 1.05, ls −0.01em, `#22302A`, max 2 lines in en (fr/de may take 3: `max-width: 12ch`, size floor 2.75rem); 16 px; lede Figtree 400 16 px / 1.75 `#56615B`, max 2 lines: "Two osteopaths, one pale room in Halbrook, no machines. The first hour is mostly listening and watching how you move."
  3. KV #4 and #5 boxes, gap 12, each `<a>` 68 px tall, padding 0 24, radius 8, white fill, disc 30 px left, label Figtree 600 18 px `#22302A`, sub-line 13 px `#56615B` right-aligned on the same line (wraps under on narrow widths).
- **card-row:** KV #6, `margin-top: 40px`, sheet white r8, shadow `0 3px 8px rgba(34,48,42,.24)` (RT(d) value, black tinted to ink), 5 equal cells `display:grid; grid-template-columns: repeat(5,1fr)`, each cell a link (icon 36 px, 10 px, label Figtree 500 15 px `#22302A`), dotted dividers per T2. Static: no reveal, no count.
- **Header (nav top-bar, exactly one top menu):** 72 px tall incl. the 6 px `#6E8B74` top stripe, white, sticky, bottom 1 px `#E1E8E3`. Left at x 72: mark = 22 px `#6E8B74` disc with a white open-hand line glyph (SVG) + wordmark "Teate Clinic" Outfit 500 20 px `#22302A`. Right: core navigation Figtree 500 15 px gap 28 — First visit · Conditions · Clinicians · Prices · Stories · Contact — then language switcher 13 px, then button "Book a visit" (40 px, §5 primary). Below 1100 px the menu collapses into the 48 px round disc toggle (core navigation overlay).
- **Vertical budget at 1440 × 900:** header 0–72 → hero row 96–616 → card row 656–762 → 48 px → #notes/#hours headings visible from y 810.
- **Saturated share** (HSL s > 0.35) on the first screen: **target ≤ 5 %, hard max 15 %** (`check-first-screen.py`; row cap 30 %). `#6E8B74` s ≈ 0.12 and `#5B7762` s ≈ 0.13 do not count; only the ochre box border + disc (< 1 %) and the photo count. Photo #1 must stay pale (white walls, light oak, pale linen; no saturated clothing).
- **Mobile 390:** header 60 px (mark + wordmark + 48 px round disc) → photo full width 358 × 268 (4:3, r8) → card (full width) → H1 2.75rem (2–3 lines) + lede → two boxes full width (sub-line wraps under the label) → card row as a 2-column grid of 5 cells (5th spans both), dotted dividers become `border-top: 2px dotted` between rows, no shadow change. **No vertical text, no absolutely positioned label, nothing overlapping**; normal flow only.

### Block order (narrative problem → method → proof; anchor ids in brackets)
| # | Block | Purpose | Layout / photos | Copy |
|---|---|---|---|---|
| 0 | Header | one top menu | §3 header | — |
| 1 | **Hero + card row** `#top` | KV, sort first / returning | T1 + T2, photo #1 | H1 + 30-word lede |
| 2 | **Notices + hours** `#hours` | reference's news / hours pair: practical reassurance | 2 columns 628 \| 640, gutter 28 (RT(c)). Left: heading row "Notices" + Latin sub-label "NOTES", 3 dated rows with 2 px dotted top dividers (date 13 px `#56615B`, title 16 px 600), link "All notes →" `/notes/`. Right: T3 ledger: **Open** Mon–Fri 08:00–19:30 · **Saturday** 08:30–13:00 · **Closed** Sun and public holidays · **Phone desk** Mon–Fri 08:00–18:00, notes "* Last first visit starts 18:30 (Sat 12:00)" "* Evening slots are kept mainly for people coming from work". No photo. | ~70 words |
| 3 | **Three complaints** `#complaints` (problem) | what people arrive with | heading row (H2 "Three things people come in with", sub-label "PROBLEM"), 3 columns gap 28; each: photo 4:3 r8 (#2, #3, #4), 12 px number "01" `#5B7762`, H3 Outfit 400 26 px, 50-word paragraph, link "More about this →" `/conditions/#neck` etc. Parent `sp-stagger`, cards `sp-reveal sp-reveal--up`. | 3 × 50 words |
| 4 | **Why hands, not machines** `#why` (narrative) | belief, 3 narrative paragraphs | heading row; prose in **two CSS columns** (`column-count: 2; column-gap: 56px`, 1080 wide) holding 3 paragraphs ≥ 60 words each; below, full-container photo #5 at **3:1**, r8 (1296 × 432); caption 13 px. One `sp-reveal--up` on the prose wrapper. | ≥ 190 words |
| 5 | **The first hour** `#first-hour` (method) | how a visit is paced | grid 7/5: left T3 ledger of 4 rows — label "10 min" / "15 min" / "25 min" / "10 min" (`sp-count` on the number span, label Figtree 600 **40 px** `#5B7762` for this block), value = step name, note = one sentence; under the ledger the 4-line prose flow 01–04 (§0) and the two outline boxes again (T1, "Your first visit" / "Returning patients"). Right: photo #6 at 4:5, r8, top-aligned. | ~170 words |
| 6 | **The room** (parallax band) | breathing space, the hands-only promise | full-width `sp-parallax` band, height 560 (mobile 420), photo #7 as `.sp-parallax__layer`; foreground white card r8, 440 wide, padding 32 36, positioned in flow at bottom-left of the container (grid align-end, margin-bottom 48): quote "We would rather spend ten minutes listening than guess." Outfit 300 28 px + line "Hands only: no machines, no ultrasound, no needles." 15 px `#56615B`. | ~25 words |
| 7 | **Two clinicians** `#clinicians` | who treats you | heading row; 2 equal columns gap 48; each: portrait 4:5 r8 (#8 Maren, #9 Kofi) 300 wide on the left + text right: name Outfit 400 30 px, role 14 px `#5B7762` uppercase, 70-word paragraph, mini T3 ledger "Days" (Maren Mon Tue Thu Sat / Kofi Mon Wed Thu Fri evenings) and "Best for". Parent `sp-stagger`, columns `sp-reveal--up`. Link "Meet the clinicians →". | 2 × 90 words |
| 8 | **Three stories** `#stories` (proof) | proof without numbers | heading row; 3 rows with 2 px dotted top dividers (reference news rows): photo 3:2 r8 280 × 187 left (#10, #11, #12) + name/context 14 px `#5B7762`, H3 22 px, 60-word account, "Clinician: Maren" line. Rows `sp-reveal--up` in `sp-stagger`. | 3 × 70 words |
| 9 | **Prices** `#prices` | the 6 visits | heading row; full-width table (§8), T3 rule colours, note line; below, the two outline boxes side by side (each 50 %). No reveal. | table + note |
| 10 | **Find your way** `#ways` | reference's tile grid | 8 tiles 4 × 2 (supporting): About · First visit · Conditions · Clinicians · Prices · Stories · Clinic letter · Contact. `sp-stagger` + tiles `sp-reveal--up`. | labels |
| 11 | Footer | address, hours, links | deep `#3F5A47`, 3 columns: wordmark + address + phone; short hours; link list (Privacy, Clinic letter, Notes). No form. | — |

Home photo positions: #1, #2, #3, #4, #5, #6, #7, #8, #9, #10, #11, #12 = **12 unique photos** (≥ 8 ✓). English words on home ≥ 800 (≥ 250 hard), #why has 3 paragraphs ≥ 60 words.

### Comparison with the most recent themes (home block order)
| Theme | Home order |
|---|---|
| Noki Surveyors | diagonal hero + 3 cards → notice → scattered field → why → sentence builder → report ledger → findings strip → parallax band → prices → cases → people → FAQ → request band |
| Shikii Mats | hero + anchor bar → site cards → why (7/5) → four-week round → doorway band → trial month → price table → stories → FAQ → book |
| Yuka Tiles | hero → ranges ledger → why window → borrow rows → showroom band → spec table → prices → project mosaic → visit → letter |
| Asayake Lodge | hero → notice card → why house → day sticky-media → rooms → quiet band → who for → rates → key-card CTA → letters |
| **Teate Clinic** | split hero (card + 2 outline boxes) + 5-cell sheet → notices \| hours ledger pair → three complaints → why in two text columns + 3:1 photo → first hour minute ledger → room parallax band → two clinicians → dotted story rows → prices → 8-tile grid → footer |

Why it does not repeat them: the hero is a photo-left split with a solid identity card and two **sorting** boxes (none of the four sorts visitors); the second block is a **two-column notices/hours pair** (Noki/Asayake use a single notice strip/card, none puts hours there); the method is a **minutes ledger with count-up**, not a round, a sentence builder or a sticky day; people are exactly **two** wide columns (not a list or grid); the page ends with a **tile grid** instead of FAQ + CTA band or a letter. No FAQ block, no anchor bar, no mosaic, no sticky media.

---

## 4. Inner pages (11 pages + 2 posts; every page has the header, the deep footer and its own photos)

| Page (slug) | Head | Key content |
|---|---|---|
| About (`/about/`) | T1 head, photo #14 | founding 2014 story (Maren and Kofi met working in a sports-club clinic), three paragraphs on hands-only care, "What we are not" list, the room (photo #5 3:1), the day (§0 routine as a T3 ledger), people: Inès and Ruth (text only). |
| First visit (`/first-visit/`) | T1 head, photo #13; T2 anchor sheet | Before you come (what to wear, form, arrive 5 min early), **The hour** T3 minute ledger with `sp-count` + photo #6, After (plan, exercises, follow-ups honest wording), price rows 1 and 2, outline boxes. |
| Conditions (`/conditions/`) | T1 head, photo #1; T2 anchor sheet | `#neck`, `#back`, `#sport` sections (each: photo #2/#3/#4 4:3 left, 150 words, "what we often do", "what you can do at home"), `#refer` "When we send you to a doctor" (fever, numbness, night pain, a fall) as T3 ledger. |
| Clinicians (`/clinicians/`) | T1 head, photo #14 | Maren and Kofi long profiles (portraits #8, #9), days ledger (T3), training described generically (no real institutions), Inès and Ruth short lines. |
| Prices (`/prices/`) | T1 head, photo #16; T2 anchor sheet | full price table (§0), insurance receipts, cancellation (24 h), five-pack rules, workplace visit details; T3 note rows. |
| Stories (`/stories/`) | T1 head, photo #7 | the 3 stories long (photos #10–#12, 200 words each), dotted row dividers, note "Every body is different; these are three people's experiences, not promises." |
| Book a visit (`/book/`) | T1 head, photo #13 | "Before you come" T3 ledger, price rows summary (1–4), **booking form slot** (§9), phone and hours. |
| Contact (`/contact/`) | T1 head, photo #15; T2 anchor sheet | T3 ledger: address, hours, phone, email; getting here (bus, bike rack, parking two streets away), access (step-free, ground floor, low couch); **contact form slot** (§9). |
| Notes (`/notes/`, posts page) | heading row + dotted post rows | role `posts`, content empty; archive template with dotted dividers, 3:2 thumbnails. |
| Clinic letter (`/newsletter/`) | T1 head, photo #17 | what the monthly letter holds (one exercise, hours changes, one short note from Maren or Kofi), **newsletter slot** (§9). |
| Privacy (`/privacy/`) | heading row only | plain-language privacy text (no reveal). |
| Posts (2) | single template, featured image 3:2 r8 | "Three small changes at a desk that help a stiff neck" (Maren; category Desk work; tags neck, exercises; featured #2) · "Building back after a knee niggle: notes for weekend runners" (Kofi; category Sport; tags running, knees; featured #17). |

Signature continuation: **T1** on About, First visit, Conditions, Clinicians, Prices, Stories, Book, Contact, Clinic letter (9); **T2** on First visit, Conditions, Prices, Contact (4); **T3** on First visit, Conditions, Clinicians, Prices, Book, Contact, About (7). theme-meta `pages` must include home, about, news (→ `/notes/`), article (→ post 1), category, tag, newsletter (→ `/newsletter/`), contact.

---

## 5. Colour, type, components

### Colour (Ito Hospital RT(a) roles; change of hue with reason)
| Token | Hex | Role | Share | Source |
|---|---|---|---|---|
| `base` | `#FFFFFF` | page ground, cards, boxes, sheet | ~65 % | RT(a) white cards (exact) |
| `wash` | `#EEF3EF` | hero backdrop, notice hover, box hover | ~10 % | RT(a) sky-blue photo ground role → pale celadon wash |
| `primary` | `#6E8B74` | rules, dotted dividers, icons, tiles, stripe, menu disc | ≤ 6 % first screen, ~8 % page | **change:** RT(a) saturated green `#3d9200 → #18a977` → plan palette celadon. Reason: the row fixes celadon and a quiet palette for a health clinic; the role (green identity colour on card, tiles, rules, footer) is kept 1:1. |
| `primary-strong` | `#5B7762` | info card ground, label text, buttons, box 1 border | ~4 % | `primary` −7 % L, so white text reaches 4.9:1 (AA for 14 px card text) |
| `deep` | `#3F5A47` | footer, hover of buttons | ~8 % | RT(a) footer green (darker, same role) |
| `ink` | `#22302A` | text | — | RT(a) ink `#231815` (≈ same L, hue moved to the green family) |
| `muted` | `#56615B` | secondary text, dates, notes | — | RT(a) `#595757` (−2 % L), 6.3:1 on white |
| `accent` | `#C69A5B` | returning box border + disc only | < 1 % | RT(a) orange `#f5a729` → ochre (−15 % saturation for the quiet palette; role identical: second entry box) |
| `line` | `#E1E8E3` | header bottom line, table zebra | small | wash −4 % L |
Ratio ≈ 65 white / 10 wash / 8 celadon / 8 deep footer / 4 card / < 1 ochre / rest photographs. No cream, no beige. First-screen saturated share target ≤ 5 %, hard max 15 %.

### Type (font_direction **sans**)
- Latin display / headings: **Outfit** (OFL; woff2 300, 400, 500): geometric, soft and light like the reference's Ubuntu 300 (RT(b)). Latin body / UI: **Figtree** (OFL; woff2 400, 500, 600). Files in `assets/fonts`, all listed in theme-meta `fonts[].files` with licence files; family names in readme.txt.
- Stacks: heading `"Outfit", "Figtree", system-ui, sans-serif`; body `"Figtree", system-ui, sans-serif`.
- zh-TW heading `"Outfit", "Noto Sans TC", sans-serif` (bundled Noto Sans TC subset, gothic sans, 400 / 500); ja heading `"Outfit", "Noto Sans JP", sans-serif` (bundled subset). CJK body (repo gate: no bundled CJK family in body): zh `"Figtree", "PingFang TC", "Microsoft JhengHei", "Noto Sans CJK TC", sans-serif`; ja `"Figtree", "Hiragino Sans", "Yu Gothic", "Noto Sans CJK JP", sans-serif`. **No Mincho / serif anywhere.**
- All faces through theme.json `fontFamilies` + `fontFace` (including zh-TW / ja subsets) so the editor iframe and the front end match; `:lang()` rules → copy `shared/inc/editor-lang.php` to `inc/` and `require_once` it. Subset with the Hokuto / Hada workaround.
- Scale (theme.json fontSizes; source): `xs` 0.8125rem (13: dates, sub-lines) · `s` 0.875rem (14: card labels, RT(b) 14) · `m` 1rem (16 body, lh 1.75, RT(b) 16 / 1.75) · `l` 1.125rem (18: box labels) · `xl` 1.375rem (22: ledger labels, card tagline, RT(b) labels 20–26 bold) · `2xl` 1.75rem (28: band quote, story H3 22–26) · `3xl` 2.5rem (40: H2, ledger minutes) · `4xl` 3.25rem (52: inner H1 in the card) · `display` **4.25rem** (68: home H1, ≥ 4.25rem ✓).
- Weights: display 300, H2 400, H3 400, labels 600, body 400. Letter-spacing: Latin headings −0.01em, uppercase labels 0.1em, CJK headings 0.04em, body 0. Line heights: display 1.05, H2 1.25, body 1.75 (CJK 1.85).
- Heading row (every H2): H2 left + Latin sub-label Figtree 600 12 px uppercase `#5B7762` inline after it (written in markup, e.g. "PROBLEM", "METHOD", "PROOF"), 12 px padding-bottom, 1 px `#6E8B74` rule under (RT(b) 1 px green rule under section labels).
- CJK: display × 0.75 (H1 3.1875rem), body lh 1.85; fr / de `hyphens: auto`; never uppercase-transform CJK.

### Components (exact values)
- **Primary button:** fill `#5B7762`, white Figtree 600 15 px, height 48 (40 in header), padding 0 24, radius 8, no shadow; hover `#3F5A47` 0.3 s ease; focus outline 2 px `#22302A` offset 2.
- **Outline entry boxes:** T1 (2 px border, r8, 68 px, 30 px disc). Hover fill `#EEF3EF`, disc `transform: rotate(90deg)`, 0.3 s ease (RT(g)).
- **Sheet:** T2. **Ledger:** T3. **Tiles:** §1 supporting.
- **Photos:** radius 8 everywhere (RT(d)); no masks, no overlaps, no cut-outs, no duotone.
- Containers: `wideSize` 1296 px (RT(c)), `contentSize` 1080 px, prose 680 px. Section padding 80 px top/bottom (RT(c)), 56 on mobile. Gutters 28 (RT(c) news/hours gutter), 48 between clinicians.

---

## 6. Photos (17, Grok, one at a time; Read every one; webp ≤ 300 KB, ≤ 2000 px)

**Imagery row: photo** (stage-a IMAGERY = photo → real-photo STYLE, default). **STYLE** (identical for every image):
`Real documentary photograph, high-key soft window daylight, pale calm rooms with white and very pale sage-grey walls, light oak and white linen, natural skin tones, calm unposed moments, people not looking at the camera, 35mm lens look with gentle depth of field, muted palette of white, pale celadon green, light oak, linen and soft grey, modern international neutral city, diverse ethnicities and ages, realistic hands and anatomy, modest everyday clothing; no medical machines, no screens, no strong colours, no text, no letters, no numbers, no logos, no brand names, no signage, no readable papers`

Rules: hands must be anatomically correct (most images show hands on a body: regenerate on any extra or fused fingers); clinicians wear plain pale grey-green tops, no badges; patients clothed (t-shirt, shorts); no Japanese elements; photo #1 must stay pale (first-screen check). 0 cut-outs.

| # | File | Subject | Composition / ratio | Used on (page → block) | Home |
|---|---|---|---|---|---|
| 1 | `hero-shoulder.webp` | osteopath (woman, 40s, short hair, Maren) standing beside a seated man (30s, shirt sleeves) on a low pale-wood treatment couch, one hand supporting his shoulder, the other at the shoulder blade, he looks down calmly; window left, white walls, plant | 3:2 landscape, subjects centre-right (focal 55 % 45 %), window light left | Home hero; Conditions head | ✓ |
| 2 | `complaint-neck.webp` | woman (30s) at a laptop at a light desk, rubbing the back of her neck, late-afternoon window light | 4:3 | Home #complaints 1; Conditions #neck; post 1 featured | ✓ |
| 3 | `complaint-back.webp` | man (40s) bending to lift a cardboard box in a bright hallway of a new flat, one hand at his lower back | 4:3 | Home #complaints 2; Conditions #back | ✓ |
| 4 | `complaint-sport.webp` | woman (30s) in running clothes seated on a park bench holding the outside of her knee, soft bright morning | 4:3 | Home #complaints 3; Conditions #sport | ✓ |
| 5 | `why-hands.webp` | close-up: two hands of the osteopath resting flat on a patient's lower back over a pale t-shirt, patient lying face down on white linen | 3:1 (generate 16:9, crop) | Home #why; About room | ✓ |
| 6 | `method-movement.webp` | osteopath (man, 30s, Kofi) watching a barefoot patient (woman, 50s) do a slow forward bend in the pale room, his hands relaxed at his sides | 4:5 portrait | Home #first-hour; First visit "The hour" | ✓ |
| 7 | `band-room.webp` | the empty treatment room: low couch with folded linen, sheer curtain, wooden stool, plant, morning light; quiet left 50 % for the card | 21:9 wide (generate 16:9 2000 px, crop) | Home parallax band; Stories head | ✓ |
| 8 | `clinician-maren.webp` | Maren (woman, 40s) standing by the window of the room, arms loosely folded, looking out | 4:5 portrait | Home #clinicians; Clinicians profile | ✓ |
| 9 | `clinician-kofi.webp` | Kofi (man, 30s) sitting on the edge of the couch, forearms on knees, mid-conversation, looking off-camera | 4:5 portrait | Home #clinicians; Clinicians profile | ✓ |
| 10 | `story-daniel.webp` | man (40s) on a city bike on a quiet tree-lined street, turning his head to look over his shoulder | 3:2 | Home #stories 1; Stories 1 | ✓ |
| 11 | `story-sofia.webp` | woman (30s) running at an easy pace on a riverside path in pale morning light | 3:2 | Home #stories 2; Stories 2 | ✓ |
| 12 | `story-tomas.webp` | man (50s) carrying a potted plant into a bright new flat, boxes stacked, upright easy posture | 3:2 | Home #stories 3; Stories 3 | ✓ |
| 13 | `visit-reception.webp` | front desk: Inès (woman, 30s) at a light-oak counter greeting a patient, plant, morning light, no screen visible | 3:2 | First visit head; Book head | — |
| 14 | `about-clinicians.webp` | Maren and Kofi talking at a small window table with two cups of tea | 3:2 | About head; Clinicians head | — |
| 15 | `contact-door.webp` | ground-floor glass door with a pale grey-green frame on a quiet tree-lined street, bicycle rack, no signage | 3:2 | Contact head | — |
| 16 | `prices-linen.webp` | still life: folded white towel and pale celadon linen at the end of a couch, a glass of water, soft light | 3:2 | Prices head | — |
| 17 | `letter-band.webp` | person (60s) seated on a chair by a window doing a gentle shoulder exercise with a pale resistance band | 3:2 | Clinic letter head; post 2 featured | — |

12 on the home page, 17 in total (12–18 ✓). Per page no repeats (Conditions: #1 head + #2/#3/#4; Clinicians: #14 + #8/#9; Stories: #7 + #10–12; First visit: #13 + #6; About: #14 + #5).

---

## 7. Motion and scroll effects (sp-scroll copied unchanged; 3 effects incl. parallax)

Ito Hospital has no scroll motion (RT(g): hover 0.3–0.7 s ease). We keep its hover language and add three sp-scroll effects from stage-a's candidates.

| Effect (class) | Where | Source / trigger / time / easing |
|---|---|---|
| `sp-parallax` (required) | Home block 6 room band: Group `.tc-band.sp-parallax`, background photo #7 as `.sp-parallax__layer` (img, object-fit cover), `--sp-par: 10%` desktop, `6%` mobile (media query on the variable); foreground white quote card is a sibling, never inside the layer. Inner T1 heads: `figure.sp-parallax` (wrapper r8 with `overflow: clip`) `--sp-par: 6%` (mobile 4 %). Not on the home hero. | stage-a "full-width photo band"; CSS scroll-driven `animation-timeline: view()`, IO + translate3d fallback; linear, continuous. Echoes the reference's still, calm first screen by keeping all motion below it. |
| `sp-reveal sp-reveal--up` + parent `sp-stagger` | Home #complaints cards, #why prose wrapper, #clinicians columns, #stories rows, #ways tiles; inner Conditions sections, Stories rows, Clinicians profiles | stage-a "complaint cards rise"; IO trigger; section sets `--sp-dist: 24px; --sp-dur: .7s; --sp-ease: cubic-bezier(.2,.7,.2,1)` (0.7 s = RT(g) longest hover time); stagger step = sp-scroll default 0.12 s (do not edit the CSS) |
| `sp-reveal sp-count` | Home #first-hour minute numbers (10 / 15 / 25 / 10) and First visit page ledger | stage-a "visit-pacing minutes"; IO trigger, 1.2 s easeOutCubic (sp-count built-in), unit "min" kept in a `<small>` |

- **Hero:** no `sp-reveal`, no `sp-count`, no `sp-parallax`. Only CSS hover transitions (0.3 s ease).
- No reveal on header, footer, forms, price tables, legal text, the parallax band card, or the T2 sheet. Reveal count ≤ 60 % of home blocks. No own scroll listeners; no GSAP / AOS / Lenis / jQuery.
- Verify with `check-parallax.mjs`: band layer moves ≥ 6 px on desktop and mobile, 0 under reduced motion; ≥ 3 reveals hidden before entry and finished after; nothing transparent at the bottom with `?sp-motion`.

---

## 8. Responsive rules (hard)
- **390 px first screen:** stacked as §3 Mobile; **no vertical text, no absolutely positioned labels over text**, the boxes never overlap the photo, the card row is in normal flow.
- No horizontal overflow at 390 / 800 / 1280; parallax wrappers `overflow: clip`.
- **Price table:** at ≥ 782 px it is **full container width** (1080 on home and Book, 1080 on Prices), `width: 100%`, `table-layout: auto`; columns: visit 20 % · what happens auto · length 130 px `white-space: nowrap` · **price `white-space: nowrap; text-align: right`, min-width 110 px**, never clipped (check at 800 and 1280); header row Figtree 600 14 px `#5B7762` with 1 px `#6E8B74` rule; rows 1 px `#E1E8E3` rules.
- **Every table < 782 px stacks:** each row becomes a block (visit bold, then what happens, then length and price on one line with price right-aligned); `thead` visually hidden; no horizontal scroll. T3 ledgers: value drops under the label < 600 px.
- Notices \| hours pair, why columns, first-hour 7/5, clinicians: 2 columns → 1 below 900 px (prose `column-count: 1`). Stories rows: photo full width above text < 600 px. Tiles 4 → 2 columns < 900 px. T1 inner head: photo above card < 900 px. Back-to-top hidden < 782 px.
- Five languages: fr / de titles may wrap (H1 `max-width: 12ch`); buttons and boxes use `min-height`, never fixed height; card text wraps, never truncates.

---

## 9. Forms (form contract v1 — `steps/form-contract-v1` exists)
- Copy `pipeline/assets/forms/shippress-forms.php` → `inc/`, its CSS + editor JS → `assets/`, `require` from functions.php; dynamic `shippress_form_slot` blocks only; no fake form, no theme mail or subscribe backend, no hard plugin dependency, no plugin decision at import. **No form anywhere on the home page or the footer** (no subscribe section there), so nothing near the first screen; forms never get `sp-reveal`.
- **Book a visit** (`/book/`, booking page): PHP pattern calls `shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) )` below the "Before you come" ledger and price summary; `$fallback` = `ob_start()` buffered literal mailto button "Email to book a visit" → `mailto:hello@teate-clinic.example?subject=<book_mail_subject>` + line "Tell us where it hurts, which days suit you and whether this is your first visit. Inès replies within one working day." Never a link to `/book/` or `/contact/`.
- **Contact** (`/contact/`): slot `kind => contact`; fallback mailto button "Email the clinic", subject `contact_mail_subject`.
- **Clinic letter** (`/newsletter/`, standalone page, not an alias of Notes): `shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'hello@teate-clinic.example', 'label' => forms_email, 'submit' => forms_subscribe, 'notice' => forms_mail_notice, 'subject' => forms_mail_subject ) )`. Without plugins: required email field + submit as a native mailto POST with the entered address; the notice says it opens the email app and the subscription is not complete until we reply. Plugin order: MailPoet (explicit id) → Mailchimp for WP → CF7 / WPForms only via an explicit dedicated newsletter form id (never the contact form).
- **Fields (documented in readme / brand; the theme does not create plugin forms):**
  - Booking (CF7 / WPForms recommended): name*, email*, phone*, visit type* (first visit / follow-up / short follow-up / sport check / workplace visit), where it hurts* (neck and shoulders / lower back / sport niggle / other), clinician (Maren / Kofi / either), preferred time (weekday morning / weekday afternoon / weekday evening / Saturday), message, consent* ("I agree that Teate Clinic may contact me about this booking."); submit "Send booking request".
  - Contact: name*, email*, message*, consent*; submit "Send message".
  - Clinic letter: email* (+ consent line in MailPoet / MC4WP forms); submit "Get the clinic letter".
- **States:** focus = 2 px outline `--sp-form-focus` offset 2 px on input, textarea, select, checkbox/radio and submit; error = message text under the field + 1 px border `#A33A2E` (never colour alone); success = block with 1 px border `#3F5A47` and "Thank you. Inès will reply within one working day." (plugins only; the mailto fallback never claims success).
- **Tokens (light; all three pages place the form on `#FFFFFF` inside a `#EEF3EF` panel r8 padding 32):** `--sp-form-accent: var(--wp--preset--color--primary-strong)` `#5B7762`; `--sp-form-on-accent: #FFFFFF`; `--sp-form-radius: 8px`; `--sp-form-focus: #22302A`; `--sp-form-surface: #FFFFFF`; `--sp-form-text: #22302A`; field border 1 px `#8FA596`; labels Figtree 600 14 px ink. **Dark variant** (on `deep` `#3F5A47`, defined for safety): labels `#FFFFFF`, surface `#FFFFFF`, field text `#22302A`, accent `#EEF3EF`, on-accent `#22302A`, focus `#EEF3EF`, error `#F3C1B8`, success `#D3E3D7`. Scoped to CF7, WPForms, MailPoet, MC4WP (and Jetpack) classes and `.sp-newsletter-fallback` only; no global selectors.
- **i18n (five languages):** semantic keys first in `inc/i18n/en.php`: `forms_email` "Email address", `forms_subscribe` "Get the clinic letter", `forms_mail_notice` "This opens your email app with your address filled in. Send it to ask for the clinic letter; you are not on the list until we reply.", `forms_mail_subject` "Clinic letter: Teate Clinic", `book_email_button` "Email to book a visit", `book_mail_subject` "Booking request", `book_fallback_note`, `contact_email_button` "Email the clinic", `contact_mail_subject` "Message for Teate Clinic"; extract with `L10N_SEMANTIC=1`; localise in en, zh-TW, ja, fr, de including dynamic block attributes; run `form-runtime-check.php` per locale and `repo-gates.sh forms`.

---

## 10. Similarity to the reference (target 80 %)
All values from `reference-tokens.md`; photographs and copy are ours; no Ito Hospital assets, text or logo.

| Dimension | Ito Hospital value (token) | Teate value |
|---|---|---|
| Hero row | 306 card column + 12 gap + 990 × 480 photo, r8, photo right (RT(c)(e)) | 790 × 520 photo left + 24 gap + 482 column, r8 (mirrored per plan; column widened to hold the 68 px H1) |
| Hero backdrop | sky photo ground fading to white, ~35 % (RT(a)) | `#EEF3EF` wash fading to white, ~30 % |
| Info card | saturated green gradient, white text, logo + tagline + rule + address + phone (RT(a)(f)) | solid `#5B7762`, white, name + tagline + rule + address + phone |
| Entry boxes | 2 stacked outline boxes, 2–3 px blue / orange, 30 px "+" discs, r8 (RT(d)(f)) | 2 stacked outline boxes, 2 px celadon / ochre, 30 px "+" discs, r8 |
| Icon sheet | 1296 × 106, r8, shadow `0 3px 8px rgba(0,0,0,.24)`, 5 cells, dotted 3 px dividers, 48 px gap (RT(c)(d)(f)) | 1296 × 106, r8, shadow `0 3px 8px rgba(34,48,42,.24)`, 5 cells, dotted 3 px dividers, 40 px gap |
| Second block | news 628 \| hours 636, gutter 28 (RT(c)) | notices 628 \| hours 640, gutter 28 |
| Ledger | label 20–26 bold green + bold value, 1 px green rule (RT(b)(d)) | label 22 / 600 `#5B7762` + value 17 / 600, 1 px `#6E8B74` rule |
| Row dividers | dotted horizontal (RT(d)) | 2 px dotted `#6E8B74` |
| Tiles | 12 saturated green tiles, white labels + icons, r8 (`ito-tall.png`) | 8 celadon tiles 312 × 96, white labels + icons, r8 |
| Footer | full-width saturated green, white (`ito-tall.png`) | full-width `#3F5A47`, white |
| Colour roles | green identity / white / ink `#231815` / orange accent / grey `#595757` (RT(a)) | celadon / white / ink `#22302A` / ochre / `#56615B` |
| Type | sans only, Ubuntu 300, body 16 / 1.75, labels 14 (RT(b)) | sans only, Outfit 300 display, Figtree body 16 / 1.75, labels 14 |
| Radius / shadow | 8 everywhere; one shadow on the sheet (RT(d)) | 8 everywhere; one shadow on the sheet |
| Containers / padding | 1296 container, ~80 px section top (RT(c)) | wideSize 1296, 80 px |
| Decoration | top stripe, 80 px round green menu disc, 40 px back-to-top tab (RT(f), `ito-visit.png`) | 6 px stripe, 48 px round menu disc (mobile), 40 px back-to-top tab (≥ 782 px) |
| Motion | hover 0.3–0.7 s ease, no scroll motion (RT(g)) | hover 0.3 s ease; reveals 0.7 s; parallax and count below the first screen only |
| Imagery | one documentary landscape photo, flat line icons, no illustration (RT(e)) | documentary photography, own flat line icons, no illustration |

---

## 11. Home acceptance checklist
1. First screen at 1440 × 900: top-bar header with 6 px celadon stripe and exactly one top menu; **photo left** 790 × 520 r8 (photo #1, no text on it, not full-bleed); right column: solid celadon card, H1 "Tell us where it hurts." 68 px Outfit 300, two stacked outline boxes (celadon + ochre, "+" discs); 5-cell shadowed sheet with dotted dividers below; fingerprint split-photo-left/beside-photo/card-row.
2. All 6 KV checklist rows visible above y 900.
3. Blocks in §3 order: notices \| hours pair (T3 ledger), three complaints (3 photos), why (2 text columns + 3:1 photo), first-hour minute ledger with count, room parallax band with quote card, two clinicians, 3 dotted story rows, prices, 8 tiles, deep footer.
4. 12 unique photos on home, 17 in the theme, 0 cut-outs, no readable text in any photo, hands correct.
5. Price table: 6 rows, full width at ≥ 782 px, price nowrap right-aligned, not clipped at 800 and 1280; stacked at 390; numbers identical to §0 on Prices, Book, First visit and all five languages. Hours and minutes identical everywhere.
6. ≥ 800 English words on home (≥ 250 hard); #why has 3 paragraphs ≥ 60 words.
7. Parallax measurable on the band (≥ 6 px desktop and mobile, 0 under reduced motion); ≥ 3 reveals hidden before entry and finished after; nothing transparent at the bottom with `?sp-motion`; hero has no reveal, count or parallax.
8. First-screen saturated share ≤ 15 % (target ≤ 5 %); largest type 4.25rem; Outfit / Figtree / Noto Sans TC / JP loaded via theme.json fontFace in editor and front end.
9. 390 px: no horizontal overflow, no overlapping text, no vertical labels, no absolute labels; auto-gates pass.
10. No form on home or footer; Book and Contact (contact slots + mailto fallback) and Clinic letter (newsletter slot with email + submit) work without plugins (stage 2).
11. T1 head on ≥ 4 inner pages, T2 on 4, T3 on ≥ 4 (stage 2).
