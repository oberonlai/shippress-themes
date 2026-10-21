# Sora Fertility Centre: design spec (stage B, binding for implementation)

Slug `sora-fertility-centre`, fertility clinic, type **health** (declares WooCommerce support, works without it). Row b7-5: editorial-magazine, full-bleed photo hero with info bar, centred nav, **faq-led** page structure. Reference: sumire (https://sumire-totalbeauty.jp/, S5-Style 美容･健康･サロン), measurements in `reference.md`. Borrow structure, technique and colour relationships only. No copy, photos, logo or whole-page layout.

Fixed brand facts (every page, all five languages, identical numbers): **Sora Fertility Centre**, founded **2011**, **14 Harbour Lane, Lindenport** (fictional, internationally neutral harbour city), second floor, lift access. Currency **EUR** in every language (no conversion). Tone: calm, plain, answers first; never promises outcomes, no success-rate percentages, no awards, no real media, no real people or brands.

---

## 1. Signature techniques (three, all obvious at a glance)

### T1. The arch field (sumire service bands, `ref/sumire-part1.png`)
- Reference: on a mid grey-green ground `#D0D6D0`, a huge circle ~1440 px wide whose top sits ~290 px into the section rises from below; it is one tone lighter (`#DEE2E6`), no border, no shadow. A tiny centred title + lowercase English subtitle sits inside the top of the arch; content continues on the lighter field below.
- Sora (home block 2, the FAQ, and home block 4 top): section alignfull, background ground `#D5D0CB`. Arch = `radial-gradient(circle at 50% calc(var(--arch-top) + 50vw), #E6E2DE 0 50vw, transparent calc(50vw + 1px))` or a pseudo-element `::before` with `width: max(100vw, 1100px); aspect-ratio: 1; border-radius: 50%; left: 50%; translate: -50% 0; top: 160px` (desktop) / `top: 96px` (mobile, width 180vw so the curve still reads as an arch). Below the circle's equator the lighter tone continues as a straight full-width field (so the arch never "closes").
- Inside the arch top: small label (Open Sans 0.8125rem, letter-spacing 0.16em, uppercase, ink 70%) above a Spectral 300 heading `clamp(2.25rem, 3.6vw, 3rem)`, **centred** (the only centred headings on the site), and a lowercase italic Spectral subtitle 1.125rem under it (e.g. *answers first*).
- Must not be diluted: arch tone must be visibly lighter than the ground (ΔL ≥ 4; `#E6E2DE` on `#D5D0CB`, do not raise the ground toward white); the curve must span the full viewport width at 1440 (circle ≥ 1300 px); no border/outline; never a rounded card.

### T2. Offset 2:3 portrait with a short text column on its left (sumire service band layout)
- Reference: one portrait 427×651 (2:3) placed right of centre (left edge ~53% of 1440), a narrow text column to its left with a small "view more" link and leaf mark; huge vertical whitespace (~330 px top padding).
- Sora (home block 4 "Three paths", three bands stacked): content width 1200. Photo: 2:3, width **430 px desktop** (≈30% of 1440), left edge at **54% of the content width**, `border-radius: 0`, no shadow. Text column: 340 px wide, ending 72 px before the photo, `align-self: end` (bottom-aligned with the photo). Text = small number label (`01 / 03`, Open Sans 0.75rem, 0.16em), Spectral 400 heading 2rem, 2 short paragraphs (≈45 words), then the link "Read about IVF →" in Open Sans 0.875rem with a 16 px 桜鼠 `#B39A9A` 1 px circle before it (our version of the leaf mark). Band vertical padding 160 px desktop / 72 px mobile.
- The three bands keep the same right offset (as the reference does; no zigzag).
- Mobile (<782): photo 78% width, aligned right, text below it full width; never side-by-side.
- Must not be diluted: photo must stay single, portrait 2:3, off-centre to the right; text column must stay narrow (≤ 360 px) and to the left; no second photo, no card box around the text.

### T3. Tilted paper sheet behind a photo (sumire concept "letter")
- Reference: a paper sheet rotated ~6–10° (origin right centre) lies behind a photo, a sprig overlaps the photo edge; text in two offset columns on the left.
- Sora (home block 3 "A letter from our director"): right half: a sheet `#F2EFEC` (paper) 420×540 px rotated **7deg** around `right center`, a photo P3 (4:5, 380 px wide) on top, unrotated, offset 48 px left and 40 px down from the sheet's top-left, so ≥ 60 px of sheet shows top and right. A real sprig is **inside the photograph** (P3 includes a eucalyptus sprig on the desk crossing toward the frame edge) — no cut-out PNG overlay (cut-outs forbidden). Left half: letter text in **two offset columns** (column 2 starts 96 px lower than column 1), Open Sans 1rem / line-height 2.1, signed "Dr. Helena Marsh, Medical Director" in Spectral italic 1.25rem.
- Mobile: sheet 86% width rotated 5deg, photo on it, text one column below.
- Must not be diluted: the rotation must be visible (5–8°, never 0–2°); the sheet must be a distinct lighter tone than the ground; photo stays unrotated.

### First-screen mood (sumire cover, supporting)
Full-bleed soft photo, tiny italic Spectral line, ghost-outline "Book a first consultation" button at the far right of the header. Film-grain is in the photographs themselves (STYLE string), not a CSS overlay.

### Continuation to inner pages (required)
| Page | T1 arch | T2 offset portrait | T3 tilted sheet |
|---|---|---|---|
| FAQ | full FAQ sits on the arch field (page head inside arch) | — | — |
| Treatments overview | page head in arch | four treatment bands (tests, IUI, IVF, freezing) as T2 | — |
| IVF step by step | — | P10 offset portrait beside "What a cycle feels like" | the cycle calendar card (text only) sits on a 6° tilted sheet |
| Fees & funding | page head in arch; price list on the lighter field | — | — |
| About / Our approach | — | P12 offset portrait with founding story | director letter (full) on tilted sheet with P3 |
| Care team | page head in arch | each doctor (3) as T2 band with portrait | — |
| First consultation & contact | — | P9 reception photo as T2 | "What to bring" checklist on a 6° tilted sheet |
| Patient stories | — | each story (3) as T2 band | — |

---

## 2. Home blocks (order, use, layout, photos, copy)

| # | Block | Layout | Photo | Copy |
|---|---|---|---|---|
| 1 | Hero cover + info bar | full-bleed P1, 88vh (min 560, max 860); H1 and italic line bottom-left in normal flow; info bar under the photo | P1 | H1 7 words, italic line 6 words |
| 2 | Answers first (FAQ) | T1 arch; 3 groups (Tests / IVF steps / Costs) × 3 `<details>` = 9 questions, 760 px column centred on the arch field; link "All 28 questions →" | — | answers 40–70 words each |
| 3 | A letter from our director | T3 tilted sheet right, two offset text columns left | P3 | ≈150 words |
| 4 | Three paths | small arch top again (T1) with centred head "Where people usually start"; then 3× T2 bands | P4, P5, P6 | each 45 words + link |
| 5 | Interlude | full-bleed P2 band 70vh, tiny italic Spectral quote low-left in white (*"We wrote down every question you asked us."*), no button | P2 | 1 line |
| 6 | Your first 90 days | ground; left-aligned head; 4 stages in one horizontal row, thin 1 px top rule each, number in Spectral 3rem 桜鼠 deep `#8E7474`, title + 25 words; not cards, not a timeline | — | 4×25 words |
| 7 | Fees | white-ish field `#EFECE9` full width; head left; 6-row price list (first 6 of the 8 fees) full-width, price right nowrap; note on medication; link to Fees page | — | 6 rows + note |
| 8 | The people you will meet | split: P7 (team at the round table, 3:2) left 7/12; right 5/12: roster of all 7 names in two columns (name Spectral 1.25rem, role Open Sans 0.875rem) | P7 | intro 40 words |
| 9 | Stories | 3 stories as horizontal text rows (quote Spectral italic 1.5rem, attribution, "Read →"), P8 small 3:4 photo beside the first row only | P8 | 3×35 words |
| 10 | Visit / first consultation | P9 (bright reception) right 6/12 square-ish 5:4; left: address, hours table-free list, phone, ghost button + solid button "Book a first consultation" | P9 | 60 words |

Home ≥ 9 photo slots (P1–P9), word count ≈ 900 en. Footer: logo, address, hours, menu repeat, small print "No outcomes are guaranteed; every plan is individual."

### First screen (1440×900)
- Header transparent over P1, height 88 px, **centred nav** (row requirement): logo wordmark "Sora" (Spectral 400 1.5rem, letter-spacing 0.04em) **centred**, menu items split 3 left / 3 right of the logo (Treatments · IVF · Fees | FAQ · Team · Contact), Open Sans 0.875rem lowercase-first-letter, white 90%; far right ghost button "Book" 1 px white 70% border, 40 px tall. After scroll header is solid ground `#D5D0CB` with ink text (CSS only via sticky + background, no scroll JS).
- P1: soft consultation room, light from a window on the right, two chairs and a low table, plant, no people's faces in focus. object-position 60% 50%.
- H1 bottom-left at x = 7vw, 120 px above the photo bottom: "Questions first. Then, a plan." Spectral 300 `clamp(2.75rem, 5.4vw, 4.5rem)` (preset `xx-large` 4.5rem = theme max), white, line-height 1.08, max-width 11ch. Above it the italic line *"Ask us anything, first."* Spectral italic 1.125rem white 85% (our own words; do not echo the reference's quote).
- A dark-to-clear bottom gradient (rgba(35,31,30,.38) → 0, bottom 40%) for legibility.
- Info bar: directly under the photo (not overlaid), ground `#D5D0CB`, height 76 px, 4 items in one row separated by 1 px rules: "Mon–Fri 7:30–18:00 · Sat 8:00–12:00" | "14 Harbour Lane, Lindenport" | "First consultation €180, 60 min" | "Book →" (link in deep accent). Open Sans 0.875rem. At 1440×900 the bar's top edge is visible on the first screen (hero 88vh ≈ 792 px + bar).
- Saturated pixels ≤ 5% target (limit 15%); P1 is low-chroma.
- Mobile 390: photo 72vh, H1 `2.6rem` in normal flow inside the photo's flex container (`display:flex; align-items:flex-end`), no absolute labels, no vertical text, nothing overlapping; info bar stacks to a 2×2 grid below the photo; nav becomes logo centred + burger right.

### Home order vs recent themes
| # | Sora | Hada Derm | Michi Motors | Taiyo Solar | Yamabiko |
|---|---|---|---|---|---|
| 1 | full-bleed cover + info bar | inset hero | cover | split screen | hero |
| 2 | **FAQ on arch** | doctor letter | family narrative | roofwork | catalogue |
| 3 | letter on tilted sheet | concerns index | forecourt | featured case | three shelves |
| 4 | three paths (offset portraits) | chapters | checked promise | installations | spec sheet |
| 5 | full-bleed interlude | doctors line | service | services | how we test |
| 6 | first 90 days row | standard band | locations | assessment | price list |
| 7 | fees | fees list | people | crew | field stories |
| 8 | people (photo + roster) | journal | journal | news | visit |
| 9 | stories | visit | close | close | — |
| 10 | visit | — | — | — | — |
Why not alike: the FAQ comes second (no recent theme opens with answers); arch field, offset 2:3 portraits and tilted sheet are new to the catalogue; no journal block; team is a roster, not a grid or a "line"; the hero is full-bleed with an under-photo info bar (Hada inset, Taiyo split).

---

## 3. Inner pages (≥ 8, plus legal)
1. **Treatments** (`/treatments/`): arch head; four T2 bands — Fertility tests, IUI, IVF & ICSI, Egg & embryo freezing — each 120 words + "who it suits" 3 bullets + link.
2. **IVF step by step** (`/ivf/`): 6 stages written as prose sections with numbered small labels (stimulation 10–12 days; 3–4 monitoring scans; egg collection ~20 min under light sedation; 5 days in the lab; transfer ~15 min; pregnancy test 12 days later). Layout: alternating text widths on ground, P10 T2 portrait, calendar card on 4° sheet. No 6-card grid, no vertical timeline.
3. **Fertility tests** (`/tests/`): what each test measures (AMH, antral follicle scan, hormone panel day 2–5, semen analysis, tubal check HyCoSy), when results arrive (5 working days), P11.
4. **Fees & funding** (`/fees/`): arch head; full price list (all 8), what is included per item, medication estimate note ("usually €1,200–2,500 per IVF cycle, billed by the pharmacy"), cancellation policy, payment in two parts.
5. **FAQ** (`/faq/`): arch field; 28 questions in 4 groups (Before you start 7, Tests 7, IVF & treatment 8, Costs & practical 6), native `<details>`; anchor index at top.
6. **About / Our approach** (`/about/`): founding 2011 story, "answers first" principle, full director letter on a T3 tilted sheet (text only) next to P12 as a T2 portrait, lab standards described plainly.
7. **Care team** (`/team/`): arch head; 3 doctors as T2 bands (P13, P14 portraits; third doctor text-only band) + roster of the other 4.
8. **Patient stories** (`/stories/`): 3 stories ≈200 words each, T2 bands; consent note; no results figures.
9. **First consultation & contact** (`/contact/`): what happens in the 60 minutes, what to bring (sheet), address, hours, map placeholder (CSS block, no iframe), booking form (contact block; no form on first screen of home).
10. Privacy (`/privacy/`) plain text.

---

## 4. Colour
| Role | Hex | Source (sumire) | Use | Share |
|---|---|---|---|---|
| Ground (warm stone-grey) | `#D5D0CB` | ground `#D0D6D0` re-hued warm | page ground, header after scroll, info bar | ≈ 50% |
| Arch / light field | `#E6E2DE` | arch `#DEE2E6` | T1 arch, fees field uses `#EFECE9` | ≈ 18% |
| Paper | `#F2EFEC` | paper sheet | T3 sheet, details open state bg | ≈ 4% |
| Ink | `#2E2A29` | `#232827` | headings | ≈ 8% |
| Body ink | `#4B4543` | `#3E4D43` | body text (must reach ≥ 4.5:1 on ground; verify at build, darken if short) | ≈ 12% |
| Accent 桜鼠 | `#B39A9A` | accent `#34603E` role | small circles, rules, number marks, focus ring — **never a field** | ≤ 2% |
| Accent deep (text) | `#8E7474` | same role, darker for contrast | links, step numbers, hover | ≤ 1% |
| White | `#FFFFFF` | — | text over photos only | — |
Not cream, not beige; distinct from Taiyo (`#F1F1EF` + ochre), Hada (`#FAFAF8` + gradient panel). First-screen saturation limit 15% (target ≤ 5%).

## 5. Type
- Display: **Spectral** (OFL) 300/400 + 300 italic. Body/UI: **Open Sans** (OFL) 400/600. Both self-hosted woff2, licence verified at build.
- theme.json presets: small 0.875rem, medium 1rem, large 1.375rem, x-large 2.25rem, xx-large **4.5rem** (max ≥ 4.25rem).
- H1 hero `clamp(2.75rem, 5.4vw, 4.5rem)` 300; inner page H1 `clamp(2.5rem, 4.6vw, 4.25rem)` 300; H2 `clamp(2.25rem, 3.6vw, 3rem)` 300; H3 2rem 400; body 1rem / 1.9 (CJK 1.85), labels 0.8125rem 0.16em uppercase.
- zh-TW/ja: Noto Serif TC/JP headings at ~0.75× size; de/fr `hyphens:auto`.

## 6. Responsive (hard)
- 390 px first screen: no vertical text, no absolutely positioned labels over text; H1/italic line in flow; info bar below photo; no horizontal overflow at 390/1280.
- Price list at ≥ 782 px: **full content width** (alignwide 1200, never a half column), two columns `1fr auto`, price cell `white-space:nowrap; text-align:right`, never clipped at 800 or 1280; dotted leader optional.
- Every table (fees, hours if a table, test list) on < 782 px becomes stacked rows (label above value) — no horizontal scroll.
- T2 / T3 collapse to single column < 782 px as specified above; arch keeps its curve on mobile.

## 7. Photos (14, one STYLE string, no cut-outs, ≤ 300 KB, ≤ 2000 px)
STYLE = `high-key documentary photograph, soft natural window light, subtle 35mm film grain, muted low-saturation palette of warm stone grey, off-white and faint dusty rose, calm modern international clinic interior, light oak and linen, shallow depth of field, diverse adults, relaxed candid moments, no text, no logos, no signage, no brand marks, no Japanese elements`

| ID | Subject / composition | Ratio | Used on | Home |
|---|---|---|---|---|
| P1 | empty consultation room, two linen chairs, low table, plant, window light from right | 16:9 | Home hero | ★ |
| P2 | wide corridor/waiting area with soft daylight, one person reading far away | 16:9 | Home interlude | ★ |
| P3 | desk close-up: open notebook, pen, cup, eucalyptus sprig crossing toward frame edge | 4:5 | Home letter | ★ |
| P4 | clinician's hands pointing at a printed cycle calendar for a couple (faces out of frame) | 2:3 | Home path 01 (tests) | ★ |
| P5 | embryologist at microscope, side light, lab in soft focus | 2:3 | Home path 02 (IVF) | ★ |
| P6 | woman in her late 30s looking out a window, calm, cardigan | 2:3 | Home path 03 (freezing) | ★ |
| P7 | care team of 5 around a round table, candid, mid laugh | 3:2 | Home people | ★ |
| P8 | couple walking on a quiet harbour promenade, from behind | 3:4 | Home stories | ★ |
| P9 | bright reception desk with flowers, receptionist smiling softly | 5:4 | Home visit | ★ |
| P10 | nurse explaining an injection pen to a patient, hands focus | 2:3 | IVF | |
| P11 | ultrasound room, prepared and empty, soft blanket | 3:2 | Tests | |
| P12 | building entrance/staircase with daylight and plants | 2:3 | About | |
| P13 | Dr. Helena Marsh, seated at desk, natural light | 2:3 | Team (band 1) | |
| P14 | Dr. Amara Osei talking with a patient, three-quarter view | 2:3 | Team (band 3) | |
Reuse across pages is allowed; never twice on one page. Inner-page map: Treatments P4, P11, P5, P6 · IVF P10, P5 · Tests P11, P4 · Fees P1 (page head strip) · FAQ P2 (closing band) · About P12, P3 · Team P13, P7, P14 (third doctor band text-only → Dr. Tomas Varga) · Stories P8, P6, P9 · Contact P9, P12.

## 8. Fixed numbers (site-wide, all languages)
- Hours: Mon–Fri 7:30–18:00, Sat 8:00–12:00 (scans and collections), Sun closed; phone line Mon–Fri 8:00–17:00; on-call nurse for patients in cycle.
- Fees (EUR): First consultation, both partners, 60 min **€180** · Fertility assessment (AMH, scan, hormone panel, semen analysis) **€420** · IUI cycle **€950** · IVF cycle (monitoring, egg collection, lab, one fresh transfer) **€4,800** · ICSI add-on **€1,100** · Frozen embryo transfer **€1,450** · Egg freezing cycle **€3,900** · Storage per year **€350**. Home shows the first six.
- People (7): Dr. Helena Marsh (Medical Director, reproductive medicine, founder 2011) · Dr. Tomas Varga (fertility specialist) · Dr. Amara Osei (fertility specialist & gynaecologist) · Lina Bergström (lead embryologist) · Rafael Duarte (andrology lab) · Nadia Haddad (nurse coordinator) · Grace Lin (fertility counsellor).
- Stories (3): Mei & Jonas (IVF, second cycle); Priya (egg freezing at 36); Claire & Sam (tests, then IUI). No outcome promises, no figures.
- Process (first 90 days): 1 First consultation (60 min) → 2 Assessment (cycle day 2–5, results in 5 working days) → 3 Plan review (30 min, included) → 4 Treatment or watchful waiting.
- IVF timings as in page 2. FAQ counts: home 9, FAQ page 28.

## 9. Scroll effects (sp-scroll v1; hero none; FAQ, fees, form none)
| Effect | sp-* | Where | Source behaviour | Our timing |
|---|---|---|---|---|
| Band photo drift | `sp-parallax` on the figure wrapping each T2 portrait (home P4–P6, inner T2 bands) and the interlude P2 | sumire service-band image scaleX 1→1.15, yPercent 0→-10, ScrollTrigger scrub top-bottom→bottom-bottom, ease none | CSS scroll-driven ±7%, `scale:1.15`, wrapper `overflow:clip`; linear (scrubbed) |
| Photo unveil | `sp-reveal sp-reveal--wipe` on the T3 photo P3 (home) and the T3 sheet blocks on About/Contact | sumire hero/paper entry, `cubic-bezier(.215,.61,.355,1)` | 1.1s `cubic-bezier(.77,0,.175,1)` default; set `--sp-dur:1.1s`; clip on child per spec |
| Quiet fade-up | `sp-stagger` parent + `sp-reveal sp-reveal--up` children on: first-90-days row (4), people roster, stories rows | sumire uses its `.215,.61,.355,1` ease for text entries | `--sp-dist:20px`, 0.8s, stagger 0.12s |
Max 3 kinds per page. The tilted sheet itself is static (7°); no rotate scrub (not in sp set). No custom scroll listeners.

## 10. Home acceptance checklist
- [ ] Full-bleed P1 hero, H1 4.5rem at 1440, italic line, centred nav with logo centre, ghost Book button; info bar under the photo with hours / address / €180 / Book.
- [ ] Block 2 is the FAQ on a visible arch (lighter `#E6E2DE` on `#D5D0CB`, curve spans full width); 9 native details, keyboard operable.
- [ ] Letter block: sheet visibly rotated ~7°, photo P3 unrotated on it, two offset text columns.
- [ ] Three T2 bands: single 2:3 portrait right of centre, narrow text left bottom-aligned, link with 桜鼠 circle.
- [ ] Full-bleed interlude P2 with tiny italic quote.
- [ ] 90-day row is 4 stages horizontal (stacked on mobile), not cards/timeline.
- [ ] Fees: 6 rows, full width ≥ 782, prices nowrap right, figures identical to Fees page and brand.md; stacked on mobile.
- [ ] People: P7 + 7 named roster; stories 3; visit with P9, address, hours.
- [ ] ≥ 9 photos, none repeated on the page, no text/logos in photos, no cut-outs.
- [ ] ≥ 250 words, ≥ 3 narrative paragraphs; no outcome claims.
- [ ] First-screen saturation ≤ 15%; 390 px: no overlap, no vertical labels, no overflow.
- [ ] sp effects only as §9, hero static, `?sp-static` shows all; reduced-motion respected.
- [ ] auto-gates.mjs home (`1 1`) pass=true.
