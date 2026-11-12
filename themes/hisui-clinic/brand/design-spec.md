# Hisui Clinic: design spec (stage 1 spec, binding for implementation)

Slug `hisui-clinic`, endocrinology and diabetes clinic, type **health** (WooCommerce compatible, not required; the site must work with WooCommerce off). Row b29-1: archetype **single-column-longform**, hero **text-left-photo-right** inside a **top-bottom-halves** first screen, **top-bar** nav (exactly one top menu), page structure **narrative → problem → method → proof**, palette family celadon (row hex #6E8B84), fonts **Manrope / Figtree**, font_direction **sans**, CJK **Noto Sans TC / Noto Sans JP** (gothic sans direction), five languages en, zh-TW, ja, fr, de.

Reference (S5-Style medical category, not in `steps/used-refs.txt`): **Kameda Medical Center group site** https://www.kameda.com/ plus one department page of the same group (https://medical.kameda.com/clinic/medi_services/index_16.html). One reference only. Measurements: `brand/reference-tokens.md`, quoted below as **RT(a)…RT(g)**. Screens: `brand/ref/kameda-first.png`, `kameda-dept-first.png`, `kameda-news.png`, `kameda-part1-3.png`, `scroll-kameda-*.png`.

**Imagery: photo** (stage-a IMAGERY = photo: the reference uses real photographs and a video still, no illustration). Our photos are generated (Grok), high-key documentary, never the reference's pictures.

We borrow structure, techniques, colour relationships, measurements and the key-visual concept. We never copy the reference's photographs, video, copy, icons, logo or page layout as a whole. All text in this file and in the theme repo is English; Japanese words seen on the reference are described in English only.

---

## 0. Fixed brand facts (identical on every page, in every language; brand.md repeats them verbatim)

- **Hisui Clinic**, endocrinology and diabetes clinic for adults (from 16). Founded **2011**. Address **3F, 42 Alder Quay, Harwell Green** (fictional, international-neutral; local address order per language in brand.md). Phone **+00 21 5840 3317** (fictional format). Email `hello@hisui-clinic.example` (used by every mailto and form fallback).
- Hours: **Mon–Fri 08:00–18:00**, **Sat 08:30–12:30**, closed Sun and public holidays. Fasting blood tests **08:00–10:00** only.
- **Between-visits line** (nurse educators): messages and calls **Mon–Fri 09:00–17:00**, **reply within 1 working day**. Not an emergency service (footer and Your plan page say: "In an emergency call your local emergency number").
- **Named people (7, fictional; titles only "endocrinologist", "diabetes nurse educator", "dietitian", "patient coordinator"; no university, award or real credential)**:
  1. **Helena Varga** — founder, endocrinologist; type 2 diabetes and long plans. *The doctor in the hero photo H1.*
  2. **Tomas Okafor** — endocrinologist; thyroid and pituitary. *Photo C2.*
  3. **Mei Lindgren** — endocrinologist; hormones across life (PCOS, menopause, bone). *Photo C3.*
  4. **Rosa Almeida** — diabetes nurse educator; runs the between-visits line. *Photo N1.*
  5. **Priya Nair** — diabetes nurse educator; sensors and insulin pumps. *Photo C1.*
  6. **Jonas Reiter** — dietitian. *Photo P1.*
  7. **Claire Mbeki** — patient coordinator; first calls, lab slots, receipts. *Photo A2.*
- **Conditions (three groups = the three hero index rows = three condition pages)**:
  - **Diabetes** — type 1, type 2, prediabetes, diabetes in pregnancy (with the patient's obstetric team).
  - **Thyroid and pituitary** — under- and overactive thyroid, thyroid nodules (ultrasound in clinic), pituitary and adrenal follow-up.
  - **Hormones across life** — PCOS, menopause care, bone density and osteoporosis follow-up.
- **Fees (7 items, EUR in every language, no conversion, no "from")**:
  | Item | Time | Price |
  |---|---|---|
  | First call with the patient coordinator | 15 min | Free |
  | First consultation with lab review | 60 min | €160 |
  | Follow-up consultation | 30 min | €85 |
  | Plan review (every 3 months, with HbA1c or thyroid labs) | 40 min | €110 |
  | Thyroid ultrasound | 20 min | €95 |
  | Sensor start session (fitting and teaching) | 45 min | €70 |
  | Dietitian session | 45 min | €65 |
  Note line (everywhere the fees appear): "Laboratory tests are billed by our partner laboratory. Itemised receipts for your insurer. The between-visits line is included with every active plan. Please give 24 hours' notice to cancel."
- **Your plan (5 parts, written as accordion rows / prose, never a step grid or vertical timeline)**: **First call** (15 min, free, with Claire) → **First consultation** (60 min; fasting labs taken the same morning) → **Regimen agreed** (a one-page written plan within **7 days**, signed off by doctor and patient together) → **Plan reviews** (every **3 months**, the same doctor) → **Between visits** (nurse line, reply within **1 working day**).
- **Figures used by `sp-count`** (home + Your plan page; process facts, not outcome statistics): **60** minutes first consultation · **7** days to a written plan · **3** months between reviews · **1** working day to a reply.
- **Stories (4; first names, "in her/his case" framing, no guaranteed-result wording)**:
  1. **Marta, 58 — type 2 diabetes.** Moved her plan review to Saturday mornings; with Jonas she rebuilt breakfasts around what she already cooks; with Helena the regimen was simplified to one tablet change. (Home feature, photo S1.)
  2. **Daniel, 31 — type 1 diabetes, new sensor.** Sensor start session with Priya; sends his weekly trace to the nurse line before night shifts. (S2.)
  3. **Aiyana, 44 — thyroid nodule.** Ultrasound in clinic with Tomas, a follow-up plan instead of a rushed decision, review every 6 months. (S3.)
  4. **Sofia, 52 — menopause and bone.** Mei explained the bone density result at the desk; a plan with exercise, vitamin D and a scan in two years. (S4.)
- Blog posts (≥1; build 3): "What to bring to a first consultation" (category Visits, tags first-visit, labs), "Fasting blood tests: the 08:00–10:00 window" (category Visits, tag labs), "Sensor start sessions now on Saturdays" (category Clinic news, tag diabetes). Audience tag per post: patients or referring clinicians (drives the T3 icons).
- No claims of cure, guaranteed results, statistics of outcomes, awards, real media, real institutions, real brands or devices by name. Year 2011 only.

---

## 1. Signature techniques (three, all obvious at a glance; not to be diluted)

### T1. Rule-split window (kameda.com first screen, `ref/kameda-first.png`, RT(c)(f))
- **Reference**: 1440×630 full-bleed photo (70% of a 900 viewport); one **2px white vertical rule at x = 30%** (433px) running the full photo height; left of it an index column of **three link rows** (label left, **28px outline-circle arrow** right, **64px pitch**, first row ~250px from top); right of it the open photograph and one thin caption (**weight 100, letter-spacing 8px, 40px**) in the lower middle; a vertical "scroll" micro-label with a 1px line at lower right.
- **Ours, home hero**: photo window **1440×540 starting under the 88px header** (y 88–628, 60% of 900; header is solid so the window is shorter than RT 630 but keeps 70% of the area below the header). Rule **2px #FFFFFF at 30%** full window height. Left of the rule a **frosted column** (`background: rgba(255,255,255,.86)`, `backdrop-filter: blur(6px)`) holding three rows: **Diabetes / Thyroid and pituitary / Hormones across life**, Figtree 1.0625rem 500 #165C48, 28px outline circle (1px #165C48) with arrow at right, row pitch **64px**, 1px #E0E0E0 rule between rows, rows start 120px below the window top, column inner padding 48px left / 40px right. Right of the rule: the open photograph; caption **"One plan, followed over years"** Manrope 200, 2.25rem, letter-spacing .2em (= RT 8px at 40px), colour #165C48, at x 46%–90%, y = 62% of the window (sits on the pale wall planned in H1). "Scroll" micro-label: Manrope 500 .6875rem, letter-spacing .2em, `writing-mode: vertical-rl`, #165C48 with a 40px 1px line under it, at the lower right of the window (desktop only).
- **Must not dilute**: the rule must be a crisp 2px white full-height line (not a gap, not a shadow); the column must lie **on** the photo (photo visible through the frost), not on a white panel next to it; arrows are outline circles, not filled; exactly three rows.
- **Inner pages**: every page head (About, three conditions, Your plan, Team, Fees, Stories, Contact) is a **mini window**: 1440×360 photo, same 2px rule at 30%, frosted column listing that page's three main sections as anchor rows (same circle arrows, 56px pitch), page H1 in the white zone below (the page's own T2 band follows on condition pages). News / archive / single use a 240px window without the column (rule kept).

### T2. Department band + anchor tabs + two-tone rule (kameda department page, `ref/kameda-dept-first.png`, RT(d)(f))
- **Reference**: flat mid-green band **180px** tall, full width; **80px white circle medallion** with a line icon at the left of a 1040 container; small label (section) above a large title in white; below, on white, **five anchor tabs** each 168px wide, gap 30px, **1px deep-green top and bottom rules**, label left, chevron-down right; section headings with a **two-tone rule**: **218px deep-green segment over a 3px #E0E0E0 full-width rule**, 44px under the heading.
- **Ours, home block 3 "Conditions we follow"**: a full-width band **#3A8770, 180px**, container 1040; medallion 80px #FFFFFF circle with a 36px line icon (stroke 1.5px #3A8770: a droplet-and-curve glyph, inline SVG drawn by us); label "Conditions" Figtree 1.1875rem 600 #FFF; title "Three groups, one long plan" Manrope 2.25rem 600 #FFF. Below on white: **five tabs** (168×64, gap 30, 1px #165C48 top + bottom rule, chevron-down 14px): Diabetes · Thyroid · Pituitary & adrenal · Hormones across life · Bone; each links to an anchor on the condition page. Each of the three condition entries below uses the **two-tone heading rule** (218px × 3px #165C48 over 3px #E0E0E0 full width, 44px under the H3).
- **Must not dilute**: the band is flat colour (no gradient, no photo), medallion white and round, tabs are ruled top and bottom (not pills, not cards).
- **Inner pages**: band (with the condition's own icon: droplet / butterfly-gland outline / circle-arc) opens **Diabetes, Thyroid and pituitary, Hormones across life**; **Your plan** and **Fees** use the band with a calendar / receipt icon; tabs on every one of these five pages; two-tone rule under every H2 site-wide (content pages and posts).

### T3. Audience-tagged update rows (kameda news block, `ref/kameda-news.png`, RT(d)(f))
- **Reference**: left column **360px** of five filter rows (74px tall, label + 28px circle arrow, 1px rule), active row tinted #E8EFED with a **5px deep-green right edge**; legend (person icon = for patients, stethoscope = for clinicians) under the list; **solid deep-green block button** at its foot (72px, white text, circle arrow). Right: dated rows (date 14px 600, **outline pill** category: 1px #165C48, radius 999, 36px high), title on the next line, tiny audience icons at the far right.
- **Ours, home block 9 "News and notices"**: same anatomy, container 1200. Filter rows: All · Clinic news · Visits · For referring clinicians · Hours. Active row "All". Legend: person = for patients, stethoscope = for referring clinicians (inline SVG 16px, #3A8770 active / #C8D3D0 inactive). Button "All news" #165C48 block. Right: 4 latest posts as dated rows (date Figtree .875rem 600, pill, title Figtree 1rem 400, 1px #E0E0E0 rule under each row, 24px vertical padding).
- **Inner pages**: News (posts page), category archive, tag archive, and the Team page (team list uses the filter column "All / Doctors / Nurse educators / Dietitian / Coordinator" with the same active row + block button "Book a first visit"). The filter rows are real links to category archives (no JS filtering).

### Supporting (not counted as signatures)
- Accordion rows from the reference ledger (RT(c)(d): 74px row, tint #E8EFED, condensed numerals #848484, open row 5px #165C48 right edge, circle chevron) — used for Your plan (home block 5 and the Your plan page) and FAQ on the Contact page. Built from `core/details` (no JS).
- Header "Book a first visit" pill (RT reference: dept page dark pill button with chevron): #165C48, radius 999, 44px high.

---

## Key visual concept

### (1) Reference first screen: concept, story, signature motion
kameda.com opens on a quiet, wide hospital-atrium photograph (a muted looping video with a pendant light) that takes 70% of the first screen. A single 2px white vertical rule at 30% splits it into an index column of three link rows with outline-circle arrows and the open photograph, which carries one thin, widely tracked caption with the centre's name; a small vertical "scroll" label sits at the lower right; below, the page turns white with a bold section title over a pale ledger. **Story**: one group, many doors — before reading anything you choose which door you need, inside an ordinary, calm building. **Signature motion**: the photograph keeps moving slowly (video) behind a perfectly still index column and rule; the menu drawer slides in at .3s ease; hovers fade at .3s ease.

### (2) Our translation (same composition, same motion idea, same image type)
The same window: one **high-key photograph** of **Helena Varga (endocrinologist, woman in her 50s, plain white coat)** turning a printed glucose trace toward a patient (man in his 60s) across a pale wooden desk in an ordinary consulting room, window light from the right, a pale plain wall in the upper right two thirds. The frosted 30% column on the left lists **the three condition groups the clinic follows** (Diabetes / Thyroid and pituitary / Hormones across life) — the "doors" — and each lands on its condition page, which opens with the T2 band. The caption reads "One plan, followed over years". The white lower half carries the large headline and one link. **Motion**: the photograph drifts slowly with scroll (`sp-parallax`, the scroll-driven equivalent of the reference's slow video) while the column, rule and caption stay still. No video, no reveal on the hero. The top bar is the only menu; the column is an index of three condition pages, not a second menu.

### (3) KV checklist (all implemented on the home first screen at 1440×900 and visible)
| # | Reference element | Our counterpart | Position | Motion | Image used |
|---|---|---|---|---|---|
| 1 | Full-bleed atrium photo, 70% of the first screen, video still | High-key photo: endocrinologist turning a glucose trace to a patient at a pale desk | y 88–628 at 1440×900, full width (100vw); 390px: full width, 292px tall | `sp-parallax`, `--sp-par: 8%` (mobile 5%) | **H1** (hero-consult.webp) |
| 2 | 2px white vertical rule at 30% | Same rule, #FFFFFF 2px, full window height | x = 30% (432px) | static | on H1 |
| 3 | Index column, three link rows, 28px outline-circle arrows, 64px pitch | Frosted column (rgba(255,255,255,.86) + blur 6px), rows Diabetes / Thyroid and pituitary / Hormones across life | x 0–30%, rows from y 208, 64px pitch | arrow translateX 4px on hover, .3s ease (CSS) | on H1 |
| 4 | Thin tracked caption (weight 100, 8px tracking) | "One plan, followed over years", Manrope 200 2.25rem, .2em, #165C48 | x 46%, y ≈ 62% of the window, over the pale wall | static | on H1 |
| 5 | White lower half with large bold title | H1 "Diabetes and hormone care, on one long plan." Manrope 600 4.5rem lh 1.08, #1F2A27, left 7/12; right 5/12: 2-line lead + text link "See how a plan is agreed →" | y 652–880, container 1200 | none | — |
| 6 | Vertical "scroll" micro-label + 1px line | "Scroll" label + 40px hairline, #165C48 | window lower right, x 1396 | none | on H1 |

Header (not counted, required): solid white top bar 88px, logo text "Hisui Clinic" (Manrope 700 1.375rem, #165C48, with a 22px celadon circle mark drawn in SVG), six links, one pill button.

---

## 2. Home page

### First screen composition (1440×900)
- y 0–88: header (white, 1px #E0E0E0 bottom rule). Logo x 40; links Figtree .9375rem 500 #333 (gap 32px): Conditions · Your plan · Team · Fees · News · Contact; pill "Book a first visit" #165C48 at right x 1400.
- y 88–628: T1 window (KV 1–4, 6). Photo `object-fit: cover; object-position: 60% 40%`, radius 0 (RT(d)).
- y 628–900: white. Container 1200, grid 7/5: H1 two lines left (top padding 24px); right: lead Figtree 1.125rem lh 1.75 #333 (2–3 lines: "We follow diabetes, thyroid and hormone conditions over years, with the same doctor, a written plan, and a nurse who answers between visits.") then text link #165C48 underline 1px offset 4px.
- First-screen saturated share target **< 5%** (limit 15% per scripts/check-first-screen.py; row note 30%): only the pill button, the circle arrows and link text are saturated.
- 390×844: header 64px (logo + "Menu" button opening the same top-bar menu as a drop panel, .3s ease); photo 390×292 full width (rule and caption hidden); then the three index rows **below** the photo as normal-flow white rows (64px, hairlines, circle arrows) — no absolute labels over text, no vertical text; then H1 2.75rem (clamp) and the lead. No overlapping elements.

### Block order (narrative → problem → method → proof)
| # | Block | Purpose | Layout and images | Copy weight | Effects |
|---|---|---|---|---|---|
| 1 | Hero (T1 window + white lower half) | KV, choose a door | see above; **H1** | H1 + 40-word lead | `sp-parallax` (no reveal) |
| 2 | Narrative: "A long condition needs a long plan" | narrative + problem | single 760px column (left edge of the 1040 container), H2 with two-tone rule, **3 paragraphs** (≥ 30 words each, ~150 words total: years of short visits with different people; numbers without a plan; nobody to ask between visits); after paragraph 2 an inset photo **D1** 1040×440 (2.36:1), caption line under it | ~170 words | `sp-reveal--up` on the paragraphs group |
| 3 | Conditions we follow (T2) | what the clinic follows | T2 band 180px + five tabs; then three entries stacked, each: H3 + two-tone rule, 2-line description, "Often for:" one line, text link "Diabetes care →"; photo right 400×267 (3:2), text left 560; entries 80px apart. Photos **C1** (Diabetes), **C2** (Thyroid), **C3** (Hormones) | 3×45 words | `sp-stagger` + `sp-reveal--up` on the three entries (not on the band) |
| 4 | Full-bleed photo interlude | breath + "same morning" story | 1440×560 photo **M1** (morning fasting blood draw, bright), no text on the moving layer; one white caption plate (static, frosted like T1, 360px wide) at lower left: "Fasting tests 08:00–10:00, results discussed the same day" | 12 words | `sp-parallax`, `--sp-par: 10%` (mobile 6%) |
| 5 | Method: "How a regimen is agreed" | method | container 1040; H2 + two-tone rule + 1 paragraph (40 words); **five accordion rows** (supporting ledger): numeral 01–05 Manrope 500 3.375rem #848484 (RT 54px), label, circle chevron; row 74px tint #E8EFED, open row (02 "First consultation" open by default) with 5px #165C48 right edge; open content: 2 lines + inset photo **M2** 320×213 (doctor and patient reading a one-page plan) | 5×35 words | `sp-stagger` + `sp-reveal--up` on rows |
| 6 | Figures row | method proof | four columns separated by 1px #E0E0E0 vertical hairlines, 1040 wide: **60** min · **7** days · **3** months · **1** working day, numerals Manrope 600 3.375rem #165C48, label Figtree .9375rem | 4×8 words | `sp-count` |
| 7 | Who answers between visits | proof | 58/42 split in a 1200 container: photo **N1** 696×497 (7:5) left; right: H2 + two-tone rule, 2 paragraphs (Rosa and Priya, hours Mon–Fri 09:00–17:00, reply within 1 working day), a small list of the 7 people in two text columns (name 600 + role), link "Meet the team →" | ~110 words | `sp-reveal--up` on text column only |
| 8 | Stories | proof | H2 + two-tone rule; 2×2 grid in 1040, each card: photo 1.74:1 (RT card ratio 265×152) **S1–S4**, name/age/condition line, 2-line story, link | 4×35 words | `sp-stagger` + `sp-reveal--up` |
| 9 | Fees | proof / practical | container 1040, full container width rows (7 items), see §8 rules; note line; link "All fees →" | table + note | none (price rows get no reveal) |
| 10 | News and notices (T3) | proof / alive | 360 filter column + dated rows (4 posts) + legend + block button | 4 titles | `sp-stagger` + `sp-reveal--up` on the dated rows container (right column only) |
| 11 | Visit and newsletter | conversion | tint #F8FAF8 band; container 1200, 3 columns: photo **E1** 4:5 (entrance, 360×450) · address + hours + phone + "Book a first visit" pill · newsletter form slot (email + submit + notice) | 60 words | none (form) |
| 12 | Footer | | #E8EFED ground, #165C48 text links, 4 columns (logo + 1 line, Conditions links, Clinic links, hours), emergency line, © 2011–2026 | | none |

Home English word count target ≥ 420 (≥ 250 required); narrative paragraphs ≥ 3 of ≥ 20 words (block 2 alone has 3).

**Home photo positions (13, all distinct): H1, D1, C1, C2, C3, M1, M2, N1, S1, S2, S3, S4, E1.**

### Comparison with the most recent themes (no repeated skeleton)
| Slot | Meguri Waste | Homura Safety | Gaku Frames | Himuro Gelato | **Hisui Clinic** |
|---|---|---|---|---|---|
| Hero | pan-strip | dark KV hero | framed window | photo-to-paper | **rule-split window: frosted 3-row index on a high-key photo + white lower half** |
| 2 | wash-band intro | docked jump strip | mitre-field intro + offset photo | intro + edge photo | **single-column narrative, 3 paragraphs, inset wide photo** |
| 3 | ruled stream rows | intro with count facts | split-head masonry | pinned flavour viewer | **flat department band + medallion + ruled tabs + 3 condition entries** |
| 4 | day pictogram steps | two notch pairs | parallax framed band | dark lit-row process | **full-bleed parallax interlude (early, not near the end)** |
| 5 | parallax dock band | three scrim tiles | 4 alternating process rows | price list + reserve | **tinted accordion ledger with open-row edge (method)** |
| 6 | price rows | parallax visit band | price table | three people rows | **count-up figure row** |
| 7 | two people rows | findings excerpt | delivery 58/42 | parallax visit band | **between-visits 58/42 with a text list of 7 people (no people cards)** |
| 8 | two case rows | fees table | journal 3-up | two journal rows | **2×2 story cards** |
| 9 | conversion band | team | dark bench card | newsletter | **fee rows** |
| 10 | slate footer | three cases / journal / book / waitlist | footer | grain footer | **filter column + audience-tagged dated rows**, then visit + newsletter, pale celadon footer |
Why not alike: no dark hero or dark band anywhere; the parallax band is the 4th block, not a closing visit band; people appear as a text list, not rows or a grid; the news block is a two-column filter + dated rows that none of these themes used; the condition band is a flat colour band with a medallion, a form no recent theme used.

---

## 3. Inner pages (11 pages + posts; each continues T1 + T2 or T3)

| Page (slug) | Head | Key content | Images (no repeats on the same page) | Techniques |
|---|---|---|---|---|
| About (`about`) | T1 mini window, column rows: Since 2011 / How we work / The building | founding story 2011 by Helena Varga (≥ 200 words), "one doctor, one plan" principles as 3 prose paragraphs, building and access | A1 (head), A2, E1 | T1, two-tone rule |
| Diabetes (`diabetes`) | T1 mini window + **T2 band** (droplet icon) + tabs: Type 1 · Type 2 · Prediabetes · Pregnancy · Sensors | each tab section: what we follow, what a review covers, who you see; link to fees | C1 (head), P1, S2 | T1, T2 |
| Thyroid and pituitary (`thyroid-pituitary`) | T1 + T2 (gland icon) + tabs: Underactive · Overactive · Nodules · Ultrasound · Pituitary & adrenal | ultrasound in clinic (20 min, €95), follow-up intervals | C2 (head), S3, L1 | T1, T2 |
| Hormones across life (`hormones`) | T1 + T2 (arc icon) + tabs: PCOS · Menopause · Bone density · Adrenal · Referral | Mei Lindgren's clinics, bone scan referrals | C3 (head), S4, A1 | T1, T2 |
| Your plan (`your-plan`) | T1 + T2 (calendar icon) + tabs: First call · Consultation · Regimen · Reviews · Between visits | the 5 parts as accordion rows (supporting ledger), figures row (`sp-count`), between-visits line rules, emergency note | M2 (head), M1, N1 | T1, T2 |
| Team (`team`) | T1 mini window (rows: Doctors / Nurse educators / Dietitian and coordinator) | **T3 filter column** (All / Doctors / Nurse educators / Dietitian / Coordinator) + 7 people as dated-row-style rows (name, role, 2 lines, audience-style icon for "sees patients"), block button "Book a first visit" | TM (team huddle, head), N1, P1 | T1, T3 |
| Fees (`fees`) | T1 + T2 (receipt icon) + tabs: Consultations · Tests · Education · Insurance · Cancelling | full 7-row fee list, note, insurance paragraph | L1 (head), A2 | T1, T2 |
| Stories (`stories`) | T1 mini window (rows: Diabetes / Thyroid / Hormones) | 4 stories, each 120–160 words, photo 1.74:1, "in her/his case" wording | S1 (head), S2, S3, S4 | T1, two-tone rule |
| News (posts page, `news`) | 240px window with rule | **T3** filter column + dated rows with pills and audience icons + legend + block button | (featured images per post) | T1 mini, T3 |
| Contact / Book a first visit (`contact`) | T1 mini window (rows: Book / Find us / Questions) | `shippress_form_slot` contact (§11), mailto fallback, address, hours, FAQ as accordion rows (6 questions) | E1 (head), A2 | T1, ledger |
| Newsletter (`newsletter`) | 240px window with rule | standalone subscribe page: 2 short paragraphs (what we send: hours changes, Saturday sessions, 1 note a month), newsletter slot, privacy line | A1 | T1 mini |
| Posts (3) / category / tag | 240px window | single: two-tone H2 rules, audience icon beside date; category and tag archives reuse the T3 layout | post featured images: P1, L1, C1 | T3 |

Standard pages map for theme-meta / demo-content `screens`: home, about, news (posts page), article (post 1), category (Visits), tag (labs), newsletter (`newsletter` page, standalone, not an alias), contact (`contact`).

---

## 4. Colour (reference RT(a) codes; one nudge with reason)

| Role | Reference (RT a) | **Hisui** | Share | Use |
|---|---|---|---|---|
| Base | #FFFFFF | **#FFFFFF** | ~78% | page ground |
| Base 2 | #F8FAF8 | **#F8FAF8** | ~6% | visit band, menu panel |
| Tint | #E8EFED | **#E8EFED** | ~7% | accordion rows, active filter row, footer |
| Main deep | #165C48 | **#165C48** | ≤ 3% | links, rules, pill/block buttons, circle arrows, caption |
| Sub (band) | ~#409980 | **#3A8770** (−4.7% lightness) | band only, never in the first screen | T2 band; reason: white text on #409980 is 3.45:1, on #3A8770 4.30:1 |
| Celadon (row hex) | — | **#6E8B84** | < 1% | medallion line icons on pale ground, inactive-pill hover, footer divider dots; the row's celadon kept as a quiet secondary |
| Text | #333333 | **#333333** (headings #1F2A27) | | body / headings |
| Muted | #848484 | **#848484** | | numerals, dates |
| Hairline | #E0E0E0 | **#E0E0E0** | | rules |
| Error / success (forms) | — | **#A23B2C** / **#165C48** | | form states only |
No accent colour (RT: "the one green does everything"). The photograph carries the first screen. Deep green #165C48 differs from recent theme mains (#22B0A4 teal, #314A57 slate, #6B5A5E, #5C4A3E). First-screen saturated share **< 5%**, hard ceiling 15%.

theme.json palette slugs: `base` #FFFFFF, `base-2` #F8FAF8, `tint` #E8EFED, `deep` #165C48, `band` #3A8770, `celadon` #6E8B84, `ink` #1F2A27, `text` #333333, `muted` #848484, `line` #E0E0E0, `error` #A23B2C.

## 5. Type (font_direction **sans**)

- Latin headings: **Manrope** (variable 200–800, latin + latin-ext for fr/de). Latin body: **Figtree** (variable 300–700, latin + latin-ext). Both sans; no serif anywhere.
- CJK: zh-TW headings `"Manrope", "Noto Sans TC", sans-serif` (bundled Noto Sans TC subset, weights 500/700); ja headings `"Manrope", "Noto Sans JP", sans-serif` (bundled subset). CJK body (repo contract: body stacks must not contain the bundled zh/ja families): zh-TW `"Figtree", "PingFang TC", "Noto Sans CJK TC", "Microsoft JhengHei", sans-serif`; ja `"Figtree", "Hiragino Sans", "Noto Sans CJK JP", "Yu Gothic", "Meiryo", sans-serif`. All gothic sans; no Mincho / serif.
- Loading: **theme.json `fontFamilies` + `fontFace`** for all four families (woff2 in assets/fonts, listed in theme-meta `fonts[].files` with license OFL), so editor and front end match; style.css has `:lang(` rules → copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and require it. Chinese subset: use the Hokuto / Hada replacement method (subset script known broken). check-editor-fonts.mjs must pass on en and zh-TW.
- Scale (RT(b) source in brackets):
  | Token | Size | Weight / lh / tracking | Use |
  |---|---|---|---|
  | `xx-large` | **4.5rem** (72px), mobile clamp(2.75rem, 1.6rem + 5vw, 4.5rem) | Manrope 600 / 1.08 / −0.02em | home H1 (max ≥ 4.25rem ✓) |
  | `x-large` | 3.125rem (50px) [RT H1 50px/700] | Manrope 700 / 1.3 (CJK 1.6) | H2 section titles |
  | `large` | 2.25rem | Manrope 600 / 1.3 | T2 band title, page H1 on inner pages (3rem there) |
  | caption | 2.25rem [RT 40px/100/8px] | Manrope 200 / 1.2 / .2em | T1 caption |
  | numeral | 3.375rem [RT 54px/500 #848484] | Manrope 500 | accordion numerals, figures |
  | `medium` | 1.25rem | Manrope 600 / 1.5 | H3 |
  | `base` | 1rem (16px) [RT 16/1.75] | Figtree 400 / 1.75 | body |
  | `small` | .875rem | Figtree 500 / 1.6 | dates, pills, captions |
  | micro | .6875rem | Manrope 500 / .2em | "Scroll" |
- zh-TW / ja: heading sizes ×0.75 of English for H1/H2, body lh 1.85, letter-spacing .02em. fr / de: `hyphens: auto` on body and headings ≤ 3.125rem.

## 6. Spacing, radius, decoration (RT c, d, f)
- Containers: 1200 (home wide blocks, header), **1040** (dept-style content, RT 1040), 760 reading column. Section gap 120px desktop / 72px mobile (RT ~100 + title block). Header 88px (RT 100 white state; −12px to keep the photo window taller).
- Radius **0** on all photos, rows, bands, cards (RT d). Round only: 28px circle arrows, 80px medallion, pill buttons (radius 999, 44px), 36px outline category pills.
- Rules: hairline 1px #E0E0E0; two-tone heading rule 218×3px #165C48 over 3px #E0E0E0; open-row edge 5px #165C48; tabs 1px #165C48 top + bottom.
- Shadow: none, except the back-to-top circle (0 2px 8px rgba(0,0,0,.2), RT d).
- Not copied: the 5-column faint vertical hairline backdrop and the 50/50 photo + grey panel (used by earlier themes; reference.md).

---

## 7. Photos (18, Grok, one at a time, read every one)

**Imagery: photo.** STYLE (exact string on every prompt, `IMAGE_STYLE="<STYLE>" scripts/grok-image.sh out.webp "<subject>"`):
`candid documentary photograph, high-key, bright soft daylight from large windows, pale walls, pale birch and white surfaces, low contrast, gentle shadows, natural skin tones, a few muted celadon green accents in fabrics or objects, 35mm lens at seated eye level, people absorbed in conversation and not looking at the camera, diverse adults, ordinary modern international outpatient clinic, uncluttered, no text, no letters, no numbers on screens or paper, no logos, no brands, no Japanese elements`

No cutouts (0). Each ≤ 300 KB, ≤ 2000 px, webp; one readme.txt line each (AI-generated, CC0). Paper charts and screens must show plain curves only; regenerate any frame with legible text, logos, broken faces or hands.

| ID | Subject / composition | Ratio | Used on (page → block) | Home |
|---|---|---|---|---|
| **H1** | endocrinologist (woman, 50s, plain white coat) turning a printed glucose curve toward a patient (man, 60s) across a pale birch desk; both seated, she on the right; window light from the right; **left 30% and upper-right two thirds of the frame a plain pale wall** (column + caption sit there) | 2.67:1 (1920×720) | Home hero (KV) | **home** |
| **D1** | kitchen table at home in the evening light, a woman in her 50s looking at a glucose sensor reading on a phone (screen shows only a curve), a cup of tea, alone | 2.36:1 | Home narrative inset (home only) | **home** |
| **C1** | diabetes nurse educator (woman, 30s, South Asian) placing a small round sensor on a young man's upper arm, both smiling slightly | 3:2 | Home conditions (Diabetes); Diabetes page head; post 3 | **home** |
| **C2** | endocrinologist (man, 40s, Black) doing a neck ultrasound on a seated woman, screen out of focus | 3:2 | Home conditions (Thyroid); Thyroid page head | **home** |
| **C3** | endocrinologist (woman, 40s, East Asian) explaining a printed bone-density image to a woman in her 50s at a desk | 3:2 | Home conditions (Hormones); Hormones page head | **home** |
| **M1** | early-morning lab corner: a phlebotomist drawing blood from a man's arm, tubes in a white rack, bright window, wide | 2.57:1 (1800×700) | Home parallax interlude; Your plan body | **home** |
| **M2** | doctor and patient side by side reading a single printed page plan (text-free, only boxes and lines), pens on the desk | 3:2 | Home method open row; Your plan head | **home** |
| **N1** | nurse educator (woman, 40s, Latina) with a headset at a bright desk, smiling while listening, a sensor kit and a notebook beside | 7:5 | Home between visits; Your plan body; Team body | **home** |
| **S1** | woman, late 50s, cooking a simple breakfast in a bright kitchen | 1.74:1 | Home story 1; Stories head | **home** |
| **S2** | man, early 30s, in hospital-worker scrubs at home checking his arm sensor before a night shift | 1.74:1 | Home story 2; Stories; Diabetes body | **home** |
| **S3** | woman, mid 40s, walking out of the clinic into daylight, relaxed | 1.74:1 | Home story 3; Stories; Thyroid body | **home** |
| **S4** | woman, early 50s, on a brisk walk in a park in the morning | 1.74:1 | Home story 4; Stories; Hormones body | **home** |
| **E1** | the clinic entrance at street level: pale stone, glass door, a small planter, morning, no signage text | 4:5 | Home visit band; About body; Contact head | **home** |
| A1 | waiting area: light birch benches, plants, two patients reading, wide | 3:2 | About head; Hormones body; Newsletter | |
| A2 | patient coordinator (woman, 30s, Black) at a reception desk talking to a patient, appointment book (blank pages) | 3:2 | About body; Contact body; Fees body | |
| P1 | dietitian (man, 40s) with a patient looking at a plate model with vegetables, grains and fish on the table | 3:2 | Diabetes body; Team body; post 1 | |
| L1 | close-up of hands placing label-free blood tubes into a rack, bright | 3:2 | Thyroid body; Fees head; post 2 | |
| TM | morning team huddle: four clinicians standing in a bright corridor with tablets and folders, mixed ages | 2.67:1 | Team head | |

**18 photos total** (12–18 rule ✓; 13 on home ✓). No photo repeats on the same page. If one must be cut, cut TM (Team head then uses A1) — never H1, C1–C3, M1, N1, S1–S4, E1.

---

## 8. Responsive rules (hard)
- **390px first screen**: no vertical writing and no absolutely positioned labels over text. The rule, caption and "Scroll" label are `display:none` below 782px; the three index rows move under the photo in normal flow; header 64px; H1 clamp ≥ 2.75rem without overlap. auto-gates "mobile first-screen text overlap" must pass.
- **Fee rows (home block 9, Fees page)**: at ≥ 782px the list spans the **full container width (1040)**: grid `1fr auto auto`, time column 120px, **price column `white-space: nowrap; text-align: right`**, min-width 96px, never clipped or overflowing at 800 and 1280. Built as a list of rows (or `core/table` with `table-layout: auto; width:100%`), no fixed narrow width.
- **Every table on mobile (< 782px) stacks**: each row becomes a block (item on line 1, time + price on line 2 with price right-aligned), no horizontal scroll. Same for any `core/table` in posts.
- T2 tabs: 5 across ≥ 1040px; 2-column grid (168 → 50%) on tablets; on mobile a single column of ruled rows (no horizontal scroll strip).
- T3: filter column stacks above the dated rows on < 782px (filter rows 56px), block button full width; audience icons stay on the row's right.
- Figures row: 2×2 below 782px; stories 1 column; between-visits 58/42 stacks photo first.
- No horizontal overflow at 390 and 1280 in any language (de long words: hyphens auto).

## 9. Motion and scroll effects (sp-scroll only; files copied unchanged into assets/)
| Effect (sp-*) | Where | Reference source and behaviour | Trigger / time / easing |
|---|---|---|---|
| **`sp-parallax`** (required) | **Home hero** (Group `hisui-window sp-parallax`, direct child `figure>img` = H1 is the moving layer; frosted column, rule, caption, "Scroll" are siblings outside the layer) | kameda.com: slow looping video behind a still index column | CSS scroll-driven (`animation-timeline: view()`), IO + translate3d fallback; **`--sp-par: 8%`** desktop, **5%** below 782px; linear |
| `sp-parallax` (second) | Home block 4 interlude (Group with `figure>img` = M1; caption plate outside the layer); also Your plan page M1 band | same motion idea | **`--sp-par: 10%`** desktop, 6% mobile |
| `sp-reveal sp-reveal--up` + `sp-stagger` | Home blocks 2 (paragraph group), 3 (condition entries), 5 (accordion rows), 7 (text column), 8 (story cards), 10 (dated rows column); inner: condition sections, team rows, news rows | our pick on the reference's calm pace: rows lift into place; kameda hover/drawer timing .3s ease informs the restraint | IO (sp-scroll), `--sp-dist: 20px`, `--sp-dur: .6s`, easing cubic-bezier(.22,.61,.36,1); stagger step .09s (set via CSS var if exposed, otherwise the default .12s) |
| `sp-count` | Home block 6 figures, Your plan figures | our pick | IO, 1.2s easeOutCubic (built-in) |
- **Hero gets no reveal** (parallax only). Forms, fee rows, legal text, T2 band and tabs, header and footer get no reveal. Hover: links, arrows (translateX 4px), pill/block buttons background .3s ease (RT g). Mobile menu panel: transform + visibility .3s ease (RT g), not an sp-* class.
- Reduced motion / `?sp-static` / editor: everything final, parallax still. check-parallax.mjs must pass (hero layer displacement ≥ 6px desktop and mobile; 0 under reduced motion; ≥ 3 reveals hidden before entry).

## 10. Similarity to the reference (target 80%)
| Dimension | Reference value (token) | Hisui value |
|---|---|---|
| Colour relationship | one green on white: #165C48 / ~#409980 / #E8EFED / #FFF / #F8FAF8 / #333 / #848484 / #E0E0E0, no accent (RT a) | identical codes; band #3A8770 (−4.7% L for contrast); row celadon #6E8B84 < 1% |
| First-screen saturated share | 0.3% (RT a) | < 5% (ceiling 15%) |
| Hero proportion | photo 1440×630 = 70% of 900, white below (RT c) | photo 1440×540 under an 88px header (= 66% of the viewport incl. header), white below |
| Hero split | 2px white rule at 30%, 3 rows 64px pitch, 28px circle arrows (RT f) | same values |
| Caption | Barlow Condensed 40px / 100 / 8px tracking, white (RT b) | Manrope 2.25rem / 200 / .2em, deep green (photo is high-key) |
| Section title | 50px / 700 / lh 1.75, #333 (RT b) | 3.125rem / 700 / lh 1.3 Latin, 1.6 CJK, #1F2A27 |
| Body | 16px / lh 1.75 (RT b) | 1rem / 1.75 (CJK 1.85) |
| Hero H1 | n/a (50px title) | 4.5rem (pipeline rule ≥ 4.25rem) |
| Containers | 1200 / 1040 (RT c) | 1200 / 1040 / 760 |
| Radius | 0 everywhere; round controls 28/36/80px, pill 999 (RT d) | same |
| Rules | 1px #E0E0E0; 5px open edge; two-tone 218px over 3px; tab rules 1px deep (RT d f) | same |
| Dept band | flat ~#409980, 180px, 80px white medallion (RT f) | #3A8770, 180px, 80px medallion |
| News | 360px filter column, active tint + 5px edge, pills 36px, audience icons + legend, block button (RT f) | same anatomy |
| Ledger rows | 74px tint rows, numerals 54px #848484 (RT c) | same, for the plan accordion |
| Images | real photos, 0 radius, cards 1.74:1, no masks / overlap (RT e) | high-key photos, 0 radius, story cards 1.74:1, no masks, no overlap except the frosted column (as reference) |
| Motion | slow video in hero, .3s ease hovers/drawer, no scroll reveals (RT g) | hero parallax 8%, .3s ease hovers/menu, restrained reveals 20px .6s (pipeline requires 2–3 effects) |
| Decoration | vertical "scroll" label, hairline backdrop columns (RT f) | "Scroll" label kept (desktop); backdrop columns intentionally not used (seen in earlier themes) |

## 11. Forms (form contract v1 — `steps/form-contract-v1` exists)
- Copy `pipeline/assets/forms/shippress-forms.php` → `inc/`, its CSS and editor JS → `assets/`, require in functions.php. No fake forms, no mail/subscribe backend, no import-time plugin detection.
- **Contact / Book a first visit page** (`contact`): `shippress_form_slot( kind: contact )` directly under the "Book" anchor section (the first section after the T1 mini window), container 760. Uses the first published CF7, then WPForms form. Fallback (buffered literal markup): the mailto pill button `mailto:hello@hisui-clinic.example?subject=…` with label "Email us to book a first visit", plus phone and hours line. Never link back to /contact/. No other booking page exists; if one is added it gets the same slot.
- **Newsletter page** (`newsletter`, standalone, not an alias of News): newsletter slot with email (required, `type=email`) + submit, below the 2 intro paragraphs. **Home block 11** and the **footer** (compact one-line version on #E8EFED) also have the newsletter slot. Order: MailPoet (explicit ID via `shippress_form_id`), then MC4WP; CF7 / WPForms only by explicit dedicated ID. No plugin: native mailto POST with the entered address and the notice "Opens your email app. Send the request to subscribe; you are not subscribed yet."
- Fields styled consistently (CF7, WPForms, MailPoet, MC4WP, Jetpack, `.wp-block-form` scoped classes only): label Figtree .875rem 600 #333; input/textarea/select 48px high, 1px #848484 border, radius 0 (RT d), background #FFFFFF, text #333; checkbox/radio accent #165C48; submit = pill #165C48 / #FFFFFF, radius 999, 48px; **focus** 2px #165C48 outline with 2px offset; **error** #A23B2C text + 1px border; **success** #165C48 text on #E8EFED.
- Tokens: `--sp-form-accent: var(--wp--preset--color--deep)`, `--sp-form-on-accent: var(--wp--preset--color--base)`, `--sp-form-radius: 0` (button keeps 999 via its own rule), `--sp-form-focus: var(--wp--preset--color--deep)`, `--sp-form-surface: #FFFFFF`, `--sp-form-text: #333333`. Dark-ground variant (only if a form ever sits on #165C48): surface #FFFFFF, text #333, accent #FFFFFF on-accent #165C48, focus #FFFFFF. On the pale #E8EFED footer and #F8FAF8 band the light tokens apply.
- i18n semantic keys in `inc/i18n/en.php` (then `L10N_SEMANTIC=1` extract; translated in zh-TW, ja, fr, de, localised not literal): `forms_email` ("Your email address"), `forms_subscribe` ("Subscribe"), `forms_mail_notice`, `forms_mail_subject` ("Newsletter request — Hisui Clinic"), `contact_email` ("Email us to book a first visit"), `contact_subject` ("First visit request"), plus newsletter intro and privacy line ("One short note a month about hours and sessions. Unsubscribe any time.").
- Forms: no `sp-reveal`, never in the home first screen. `form-runtime-check.php` (five languages, no plugins) and `repo-gates.sh forms` must pass; check real CF7 at 390 / desktop on light grounds, without submitting.

## 12. Home acceptance checklist
- [ ] 1440×900 first screen shows KV 1–6: H1 photo full width under an 88px white header, 2px white rule at 30%, frosted column with exactly three condition rows and outline-circle arrows over the photo, thin tracked caption, "Scroll" label, white lower half with H1 4.5rem + lead + link.
- [ ] Hero is `sp-parallax` (`--sp-par: 8%`, 5% mobile), no reveal; check-parallax.mjs passes desktop + mobile.
- [ ] 390px: no vertical text, no absolute label over text, index rows under the photo; no horizontal overflow.
- [ ] First-screen saturated share < 5% (check-first-screen.py ≤ 15%).
- [ ] Block order exactly §2 (12 blocks); T2 band + medallion + ruled tabs + two-tone rules visible on home; T3 filter column + dated rows + audience icons + legend + block button visible on home.
- [ ] 13 distinct photos on home (≥ 8), no repeats; 0 cutouts; all images ≤ 300 KB.
- [ ] ≥ 250 English words (target 420) and ≥ 3 narrative paragraphs ≥ 20 words.
- [ ] Fee rows: 7 items, full 1040 width at ≥ 782px, price nowrap right, not clipped at 800 / 1280; stacked on mobile; numbers equal §0 (€160, €85, €110, €95, €70, €65, Free).
- [ ] Figures 60 / 7 / 3 / 1 count up; same numbers on Your plan.
- [ ] Exactly one top menu; footer has no second nav bar.
- [ ] Newsletter slot in home block 11 and footer shows email + submit without plugins and the mailto notice; no reveal on forms.
- [ ] Fonts: Manrope / Figtree via theme.json fontFace; editor = front end; max size ≥ 4.25rem.
- [ ] auto-gates.mjs `en … 1 1` pass=true; pattern_source.py passes.
