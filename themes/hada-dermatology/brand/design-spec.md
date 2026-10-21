# Hada Dermatology: design spec (stage B, binding for implementation)

Slug `hada-dermatology`, community dermatology clinic, type health (no WooCommerce). Stage one = **home page only, en**. References: DAILY SKIN CLINIC https://dailyskinclinic.jp/ (main: techniques + palette) and La Viora Clinical https://laviora-clinical.jp/ (supporting: headline set only, no colour). Measurements in `reference.md`. Borrow structure, technique and colour relationships only; no copy, photos or logos.

Fixed facts (every page, every language, home = inner pages): see section 7. Never invent other numbers.

---

## 1. Signature techniques (three, obvious at a glance)

### T1. Inset hero print on a tinted page band (DAILY D1)
- Reference: DAILY's hero photo is not full-bleed. It starts about 210 px from the left (after a 100 px rail) and stops about 100 px before the right edge; a warm-grey band `#F6F3F0` shows on the left, under and around it, so the photo reads as a framed print laid on a tinted page. The upper-left quarter of the page behind the header is band, the upper-right is white.
- Hada (desktop 1440): page ground `#FAFAF8`. The hero section is alignfull with a band `#F3F1EE` covering **left 36% of the width from the top to the bottom of the section** and a second band strip **full width under the photo, 120 px tall** (so the band forms an "L" around the photo's left and bottom; the top-right stays ground). Photo: inset rectangle, left edge at **15% of viewport (≈ 216 px)**, right edge at **≈ 96 px from the viewport edge**, height **68vh capped at 620 px** (min 460 px), top 24 px under the header, `border-radius: 0`, no shadow, no border.
- No side rail (brief forbids it). DAILY's black rail becomes a plain top header (section 3).
- Must not be diluted: the photo must stay a hard-edged inset rectangle with band visibly on its left **and** below (≥ 96 px of band each); never full-bleed, never rounded, never a card shadow. Band colour must be distinguishable from ground (`#F3F1EE` on `#FAFAF8`, do not lighten it further).

### T2. Oversized thin Latin line crossing the photo's lower edge (DAILY D2), with a small fact line above it and a staggered two-line headline at the left (DAILY D2 + La Viora V1)
- Reference: "daily skin new standard" in a thin sans at about 90 px, black, sits on the lower edge of the hero: its baseline is inside the photo, its right end runs past the photo onto the band. A small bold price line sits just above its right end. A short two-line headline floats at the left over band and photo, second line indented. La Viora sets its headline in a light serif, two sizes.
- Hada: line **"skin, seen clearly"** in Figtree **300**, `font-size: clamp(3.5rem, 6.4vw, 5.5rem)` (preset `xx-large` = 5.5rem, the theme maximum), letter-spacing -0.01em, ink `#14171A`, lower-case. Position: right-aligned with its right end **40 px past the photo's right edge** (i.e. over the ground), baseline **24 px above the photo's bottom edge** so the descenders and the "s, seen" sit on the photo while nothing is centred. Not a heading tag (use `p.hd-standard`, `aria-hidden` false, it is real text).
- Fact line above its right end: Figtree 600 1.05rem ink: "New patient visit $185 · Full-body skin check $160" (same numbers as section 7).
- Headline at the left (La Viora V1 two sizes, in Crimson Pro 300): line 1 `1.5rem` "Dermatology for the whole family," line 2 `clamp(2.4rem, 3.6vw, 3.25rem)` "explained by the doctor you see.", line 2 indented **2.5em**. Block left edge at **6% of viewport** (on the band), top at 34% of the hero height, so its right part overlaps the photo's left 15–20%. Under it, Figtree 0.85rem muted two short lines (address + "Accepting new patients, adults and children"). Then a 1 px × 72 px vertical rule with "Scroll" set vertical (writing-mode vertical-rl, Latin only, 0.7rem) at 8% from left, bottom of the band (La Viora's vertical label + rule).
- Photo must be light and calm on the right half where the line crosses (soft wall, daylight) so the ink line reads at ≥ 7:1 on the photo area it crosses; check with the screenshot.
- Must not be diluted: the line must be ≥ 5rem at 1440, weight 300 (not 400+), one line, and must physically cross the photo's bottom-right edge (part on photo, part on ground/band). No translucent box behind it.

### T3. Hairline concentric arcs and parallel lines over the hero edges (DAILY D3)
- Reference: three concentric hairline arches (U-shape open at the top) hang through the header across the photo's top edge near its right third; a half ring of three hairline circles is cut by the right viewport edge at mid height; three parallel horizontal hairlines enter from the left over the band and run about 120 px into the photo.
- Hada: decorative absolutely positioned SVG (`aria-hidden`), stroke `#14171A` at **opacity 0.45**, 1 px, no fill:
  - arch: 3 nested U shapes, outer 160 px wide × 250 px tall, 14 px apart, top at y = 0 of the hero section, centred at x = 68% of viewport, so they cross the photo's top edge;
  - half ring: 3 concentric circles, outer r = 82 px, 12 px apart, centre at x = 100% (right edge clips half), y = 50% of the photo;
  - lines: 3 horizontals 6 px apart from x = 0 to x = 15% + 150 px (into the photo), at y = 24% of the hero.
- Must not be diluted: all three motifs present, stroke visible at 1440 (opacity ≥ 0.4, not grey-on-grey 0.15), arch must overlap the photo top edge, lines must enter the photo.

### Supporting (not counted): D5 numbered hairline list on a pale gradient panel
Left column: big light heading + small English label + round ink "list" button; right column: panel with `linear-gradient(120deg, #E7EFE9 0%, #ECEAF3 55%, #F4E9E6 100%)`, items in two columns, 1 px `#14171A` 15% rules, small grey numbers `01`–`10`, arrow at the right of each row. Used for "Conditions we treat" and the fee list.

### Continuation to inner pages (stage two, required)
| Page | T1 inset print on band | T2 thin Latin line | T3 arcs/lines | D5 list |
|---|---|---|---|---|
| Conditions We Treat | page head: smaller inset photo (height 380 px) on the L-band | page line "conditions, plainly" 4.25rem crossing photo edge | arch + lines | full 10-item list on gradient panel, each row links to a chapter on the page |
| Skin Checks | head inset P03 | "check, then decide" | half ring | fee rows for skin check / biopsy / removal |
| Children's Skin | head inset P05 | "small skin, same care" | arch | — |
| Cosmetic Dermatology | head inset P11 | "quiet improvements" | lines | treatment list with prices |
| Our Doctors | each doctor = inset portrait on band with name line in Figtree 300 3.25rem crossing its lower edge | — | half ring by the lead doctor | — |
| Fees & Insurance | head inset P09 | "fees, in writing" | lines | complete fee table as D5 rows |
| Your First Visit | head inset P10 | "your first visit" | arch | — |
| Journal (index / single) | featured image inset on band | title stays Crimson; category line Figtree | lines on index only | — |
| Book / Contact | inset P02 (exterior) on band, hours + address on the band beside it | "see you soon" | arch + half ring | hours as hairline rows |

Every inner page head uses T1 + T2 + one T3 motif; at least the five pages above the line Journal must do so.

---

## 2. Colour (from DAILY SKIN CLINIC; La Viora not used for colour)

| Role | Hex | Source (DAILY) | Use | Share |
|---|---|---|---|---|
| Base | `#FAFAF8` | page white `#FCFCFC` | ground | ≈ 45% |
| Band | `#F3F1EE` | warm-grey hero band `#F6F3F0` | T1 L-band, footer, alternate sections | ≈ 15% |
| Ink | `#14171A` | rail / text / pill `#0C0C0C` | text, arcs, pill buttons (book button = ink pill, white text) | ≈ 8% |
| Main (muted sage) | `#6E8A7A` | hero photo mid-tone `#9CB49C`, darkened for text contrast (4.6:1 on base) | small labels, numbers, link hover, active nav underline | ≤ 3% |
| Accent tint | `#E7EFE9` | mint panel `#E4F5EA` | D5 gradient start, tag grounds | panels only |
| Lavender tint | `#ECEAF3` | lavender panel `#E6E3F2` | D5 gradient middle | panels only |
| Blush tint | `#F4E9E6` | blush panel `#F8E4E4` | D5 gradient end | panels only |
| Muted text | `#5C6166` | — | captions, meta | — |

- Not cream/beige-led: ground is near-white; band only as the L-shape and footer. Not indigo, not deep blue/green, not teal.
- First-screen saturated area (S > 0.35, V > 0.25): DAILY measured 0.1%; gate for `check-first-screen.py` = min(15%, ref) → set **5%**, target ≤ 3%. Achieve via the photo grade (soft daylight, pale walls, sage-grey and skin tones), no coloured UI over the hero.

## 3. Type and header
- Crimson Pro (headings 300/400, italic for pull quotes) + Figtree (body 400/500/600; 300 for T2 lines). Sizes: small 0.8125rem, base 1rem (body 1.0625rem, line-height 1.75), medium 1.25rem, large 1.75rem, x-large 2.75rem, **xx-large 5.5rem** (max ≥ 4.25rem). Section headings Crimson Pro 300 `clamp(2.4rem, 4vw, 3.5rem)`, left-aligned.
- Header (one top menu): wordmark "Hada Dermatology" Crimson Pro 400 1.35rem + Figtree 0.7rem uppercase "Skin clinic · Madison" under it at left; text nav Figtree 500 0.875rem (Conditions, Skin Checks, Children, Cosmetic, Doctors, Fees, Journal); at right an **ink pill** "Book a visit" (DAILY's black pill; small white inset tag "New patients" inside it like DAILY's "24時間受付"). Header background transparent over the band/ground (no fill); under 960 px a two-line menu icon (two 24 px rules, 6 px apart) opens an overlay.

---

## 4. Home page

### First screen (1440×900)
T1 + T2 + T3 as specified. Photo **P01**: a dermatologist (woman, 50s, short grey hair, plain white coat) and an adult patient seated by a tall window, the doctor looking at the patient's forearm with a handheld magnifier lamp, both in the left half of the frame; the right half is a pale plaster wall in soft daylight (where the T2 line crosses). Visible above the fold: header, headline, fact line, T2 line, arcs, top of the band below. Forbidden: table, form, search box, any centred big type, coloured panels, carousel.

### Block order (9 blocks)
| # | Slug | Purpose | Layout | Photo | Copy |
|---|---|---|---|---|---|
| 1 | `inset-hero` | first screen | T1/T2/T3 | P01 | headline 2 lines, fact line, 2 meta lines |
| 2 | `doctor-letter` | the founder explains the clinic | a letter: left 7/12 Crimson Pro 1.35rem body, three paragraphs (≈ 140 words) signed "Dr. Naomi Reyes, founder" in italic; right 4/12 a **small inset portrait P06** (3:4, 300 px wide) on a band square offset 32 px down-right (mini T1) | P06 | 3 paragraphs |
| 3 | `concerns-index` | conditions we treat | D5: left 4/12 heading "What brings people in" + label "CONDITIONS" + round ink list button "All conditions"; right 8/12 gradient panel, 10 numbered rows in 2 columns (Eczema, Acne & acne scarring, Moles & skin checks, Psoriasis, Rosacea, Warts & molluscum, Hair & scalp, Nail problems, Children's rashes, Pigment & sun damage) | — | 1 lead sentence |
| 4 | `chapters` | doctor-explained chapters | three chapters as **wide horizontal bands**, each: inset photo 7/12 on a band strip that extends to the viewport edge on the photo side (T1 again, alternating left/right), text 4/12: small numeral "Chapter 1" in main sage, Crimson heading, 1 paragraph ≈ 60 words, a "Read the chapter" text link. Ch.1 Skin checks (P03), Ch.2 Eczema & everyday rashes (P04), Ch.3 Children's skin (P05) | P03, P04, P05 | 3 × 60 words |
| 5 | `doctors-line` | the team, not a 4-up grid | one row per doctor (4 rows), hairline-ruled: 120 px square portrait (P07, P08, P12), name Crimson 1.75rem, focus in Figtree, 1 sentence, days in clinic at right. Lead doctor already in block 2, so rows show the other three + a "Meet all four doctors" link | P07, P08, P12 | 3 sentences |
| 6 | `standard-band` | T2 echo mid-page | full-width band `#F3F1EE`, inset photo P10 (waiting room, 21:9, 80% width, right-aligned) with a second thin line "unhurried, on purpose" (Figtree 300, 5rem) crossing its lower-left edge; under it two short paragraphs on the first visit (arrive, history, look, plan) ≈ 80 words + link to Your First Visit | P10 | 2 paragraphs |
| 7 | `fees-list` | fees and insurance | D5 again but mirrored: left 8/12 hairline rows of the 10 fees (name · price right-aligned, numbers tabular), right 4/12 reception photo P09 (3:4 inset) + insurance note 2 sentences + ink pill "Fees & insurance" | P09 | table-like rows (allowed off first screen) |
| 8 | `journal` | 3 latest posts | 3 columns, inset image 4:3 on band offset 16 px, date (date only), Crimson title, 1 line excerpt | P11, P14, P15 | 3 excerpts |
| 9 | `visit-close` | hours, address, book | band section with arch motif (T3) at right; left: heading "Book a visit", hours as hairline rows, address, phone; right: ink pill "Book a visit" + "Same-week appointments for new rashes and changing moles" | — | short |

Home photo positions: P01, P06, P03, P04, P05, P07, P08, P12, P10, P09, P11, P14, P15 = **13** (≥ 8), none repeated. Total English words ≥ 400, ≥ 3 narrative paragraphs (block 2 alone has 3).

### Comparison with recent themes
| # | Michi Motors | Hibi Wear | Nami Staffing | Sukoyaka Clinic | **Hada** |
|---|---|---|---|---|---|
| 1 | front-cover (split headline across photo halves) | front-cover (full-bleed haze) | front-cover (two photos + centre column) | front-opening | **inset print on L-band + thin line crossing edge** |
| 2 | family | lineup | intro | welcome | **doctor letter (signed, small inset portrait)** |
| 3 | forecourt | idea | paths | path | **numbered conditions index on gradient panel** |
| 4 | checked | wash | placement | team | **3 wide chapter bands, alternating** |
| 5 | service | fabrics | quote | ages | **doctor rows (hairline list, not grid)** |
| 6 | locations | city | consultants | lists | **mid-page thin-line band (first visit)** |
| 7 | floor | promise | journal | close (+rates) | **fee rows + reception photo** |
| 8 | journal | journal | close | — | journal |
| 9 | close | close | — | — | visit-close |
Why not similar: no full-bleed cover (all four open full-bleed or split); the hero is an inset print with line ornament. Hada opens with a signed letter rather than an intro/welcome strip, puts a numbered index before any story, explains conditions as chapter bands (Sukoyaka used a path + age groups, team grid), and shows doctors as ruled rows. Only journal/close are shared, as in every theme.

---

## 5. Inner pages (stage two)
1. **Home** (above).
2. **Conditions We Treat**: T1/T2 head; D5 index of 10; then one short chapter per condition (what it is, what we check, typical first steps, when to come in soon); no cure claims.
3. **Skin Checks**: who should book, what happens in a full-body check (gown, scalp to soles, dermatoscope, photos of moles with consent), biopsy and results timing (lab report in 7–10 days), fee rows.
4. **Children's Skin**: Dr. Mei Castellano; birthmarks, eczema in babies, warts, acne in teens; how we make visits easy for kids; child consultation fee.
5. **Cosmetic Dermatology**: Dr. Priya Raman; consultation first, light peels, acne-scar options, sun-damage care; self-pay, honest expectations, no before/after claims.
6. **Our Doctors**: four doctors, each an inset portrait with name line (T2 small), training summary (fictional, no real institutions named), days in clinic.
7. **Fees & Insurance**: full fee list (section 7), insurance note, cancellation policy (24 h notice), payment methods.
8. **Your First Visit**: before (forms, photos of rash if it comes and goes), on the day (arrive 10 min early, 30-minute new patient slot), after (written plan, follow-up).
9. **Journal**: index + single; 6 posts in total (3 on home).
10. **Book / Contact**: hours, address, phone, exterior image P02, contact form pattern (works with no plugins: plain mailto/HTML form pattern), urgent note ("for a rapidly changing mole call us; for emergencies call 911").

---

## 6. Photos (16; one STYLE string; generate one at a time; read each; regenerate on text/logos/bad hands/faces)

STYLE: `35mm film photograph, soft natural daylight from a large window, visible fine grain, muted sage-grey and warm-white palette, pale plaster walls, calm modern community dermatology clinic, international neutral setting, diverse people, natural skin texture, no wounds, no blood, no needles close-up, no text, no logos, no brand names, no signage, editorial documentary style`

| ID | Subject / composition | Used on | Stage one |
|---|---|---|---|
| P01 | doctor (woman 50s, short grey hair) with seated adult patient by tall window, looking at forearm with handheld magnifier lamp; people in left half, right half pale wall; landscape 16:9 | Home hero | **yes** |
| P02 | clinic exterior, quiet tree-lined street, low brick-and-glass building, no sign text | Contact | no |
| P03 | doctor examining a mole on a patient's upper back with a handheld dermatoscope, patient seated in gown, side view; 16:10 | Home ch.1 / Skin Checks head | **yes** |
| P04 | close view of hands applying plain unlabelled moisturiser, soft towel, window light; 16:10 | Home ch.2 / Conditions | **yes** |
| P05 | young child on parent's lap, female doctor kneeling and smiling, looking at child's arm; 16:10 | Home ch.3 / Children head | **yes** |
| P06 | portrait Dr. Naomi Reyes: woman 50s, short grey hair, white coat, by window, waist up; 3:4 | Home letter / Doctors | **yes** |
| P07 | portrait Dr. Samuel Odum: man 40s, Black, navy scrubs under white coat; square | Home doctors / Doctors | **yes** |
| P08 | portrait Dr. Mei Castellano: woman 30s, East Asian, cardigan over scrubs, stethoscope; square | Home doctors / Doctors | **yes** |
| P09 | reception desk, light oak, receptionist talking to a patient, plants; 3:4 | Home fees / Fees head | **yes** |
| P10 | waiting room, linen chairs, large window, one person reading; wide 21:9 | Home band / First Visit head | **yes** |
| P11 | cosmetic consultation: doctor and adult woman at a small table, mirror on wall, talking; 4:3 | Home journal / Cosmetic head | **yes** |
| P12 | portrait Dr. Priya Raman: woman 40s, South Asian, white coat, hair tied; square | Home doctors / Doctors | **yes** |
| P13 | treatment room, clean exam couch with paper roll, overhead lamp, instrument tray covered; 16:9 | Skin Checks (minor surgery) | no |
| P14 | plain unlabelled sunscreen tube and hat on a windowsill; 4:3 | Home journal | **yes** |
| P15 | teenager talking with a doctor at a desk, laptop closed; 4:3 | Home journal / Conditions (acne chapter) | **yes** |
| P16 | doctor's hands typing notes, dermatoscope on desk, window; 16:9 | Your First Visit | no |

Stage one generates 13 (P01, P03–P12, P14, P15). Each ≤ 300 KB, ≤ 2000 px, webp/jpg. No cutouts.

---

## 7. Fixed facts (whole site, all languages)
- Clinic: **Hada Dermatology**, community dermatology clinic, founded **2011**, **418 Willow Street, Madison, Wisconsin 53703**, phone **(608) 555-0142**. Currency USD.
- Hours: **Mon–Fri 8:00–17:30, Thu until 19:00, Sat 9:00–13:00, Sun closed.**
- Doctors (4, fictional):
  1. **Dr. Naomi Reyes**, founder: medical dermatology, eczema, psoriasis (Mon–Thu)
  2. **Dr. Samuel Odum**: skin checks, biopsies and minor skin surgery (Mon, Wed, Fri, Sat)
  3. **Dr. Mei Castellano**: children's skin and birthmarks (Tue, Thu, Fri)
  4. **Dr. Priya Raman**: acne, rosacea and cosmetic dermatology (Wed–Sat)
- Fees (self-pay; insured visits billed to plan):
  | Service | Price |
  |---|---|
  | New patient consultation (30 min) | $185 |
  | Follow-up visit (15 min) | $110 |
  | Full-body skin check | $160 |
  | Child consultation (under 16) | $150 |
  | Skin biopsy, incl. lab | $195 |
  | Mole or lesion removal (minor surgery, single) | from $240 |
  | Patch testing series (3 visits) | $340 |
  | Acne plan review | $120 |
  | Cosmetic consultation (credited to treatment) | $60 |
  | Light chemical peel | from $150 |
- Insurance: "We accept most major insurance plans for medical visits; no referral needed. Cosmetic treatments are self-pay. We confirm your coverage before your first visit." No insurer names.
- Copy limits: no cure or result guarantees, no awards, no statistics, no real brands, institutions or media.

---

## 8. Home acceptance checklist (self-review must pass every line)
1. At 1440×900: hero photo is a hard-edged inset rectangle; band visible left of it and below it (≥ 96 px); top-right is ground.
2. "skin, seen clearly" is one line, weight 300, ≥ 5rem, crosses the photo's bottom-right edge onto the ground; fact line with $185 / $160 above it.
3. Arch over the photo top edge, half ring at the right viewport edge, three lines entering the photo from the left; stroke visible.
4. Headline two sizes, second line indented, left-aligned; no big centred text anywhere on the page.
5. No table, form, search box or carousel on the first screen; one top menu; ink pill "Book a visit" at top right; no side rail.
6. `check-first-screen.py` saturated area ≤ 5%.
7. Block order exactly as section 4; 13 distinct photos, none repeated; no cutouts; no visible text/logos in photos; faces and hands fine.
8. Concerns index has numbered hairline rows on the pastel gradient panel; doctors are rows, not a grid; chapters alternate sides.
9. Fees on home equal section 7 exactly; hours, address and doctor names identical everywhere.
10. ≥ 400 English words; letter has 3 paragraphs; no medical overclaiming.
11. 390 px mobile: inset photo becomes full width minus 20 px with band below; T2 line wraps to max 2 lines at 2.75rem and still overlaps the photo bottom; arcs scaled to 60%; no horizontal scroll.
12. reference-compare.png shows DAILY first screen beside Hada first screen and the three techniques are recognisable side by side.
