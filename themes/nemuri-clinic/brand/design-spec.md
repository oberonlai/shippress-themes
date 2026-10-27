# Nemuri Clinic: design spec (stage 1, binding for implementation)

Slug `nemuri-clinic`, evening sleep-medicine clinic for working adults. `type: business` (category health-wellness), WooCommerce declared compatible but not needed. Plan row b15-1: sticky-media archetype, photo hero with info bar, top-bar nav, real photography (low-key), sans type (Figtree / Public Sans, CJK Noto Sans TC / Noto Sans JP 黑體). Five languages: en, zh-TW, ja, fr, de.

Main reference: **sorahare-dental.com** (https://sorahare-dental.com/, S5-Style, dental clinic). Secondary, structure + scroll only: **hachioji-dm.com** (https://hachioji-dm.com/, internal-medicine clinic). Measurements: `brand/reference-tokens.md` (cited below as `tok (a)…(g)`). Screenshots: `brand/ref/`. We borrow structure, signature techniques, the key-visual concept, colour relationships and measured tokens. We do **not** copy their photos, copy, logos or page layouts as a whole.

Class prefix for theme CSS: `nc-`.

---

## 0. Fixed brand facts (binding on every page and in all five languages)

- **Nemuri Clinic**, founded **2016**, Suite 210, 88 Alder Lane, Seattle, WA 98101 (fictional street). Tel **(206) 555-0142**. Email hello@nemuriclinic.example.
- Positioning: an *evening* sleep clinic for working adults who cannot stay asleep. Consultations run late so nobody takes a day off to be seen.
- Currency **USD** in every language (no conversions). Self-pay fees; itemised receipt for insurance claims (we never promise reimbursement).
- No claims of guaranteed results, success rates, awards, real media or real people.

### Opening hours (one table, used on Home Visit, Access page, footer)
| | Mon | Tue | Wed | Thu | Fri | Sat | Sun |
|---|---|---|---|---|---|---|---|
| Consultations 13:00–17:00 | — | ● | ● | ● | ● | ▲ | — |
| Evening 17:30–21:00 | — | ● | ● | ● | ● | — | — |
| Night study (check-in 20:30, out 07:00) | — | ● | ● | ● | — | — | — |
▲ Saturday 09:00–15:00. Closed Sunday, Monday and public holidays.

### Fees (7 items, USD; Home fee list = Fees page = all languages)
| Item | Detail | Price |
|---|---|---|
| First consultation | 60 min with a sleep physician, two-week sleep diary handed out | $180 |
| Follow-up consultation | 30 min | $95 |
| Home sleep test | one-night recorder, set-up visit and physician reading | $320 |
| Night study in our room | one night of full polysomnography, technologist on watch, reading | $1,250 |
| Results visit | 45 min, the physician reads the night with you | $140 |
| CBT-I programme | six weekly 50-min sessions with a sleep psychologist | $780 |
| CPAP set-up and first-month check | fitting, coaching, data check at four weeks | $210 |

### People (7)
| Name | Role | Shown on |
|---|---|---|
| Dr. Hana Ellery | Medical director, sleep physician, founded the clinic in 2016 | Home pair (photo 08), Team, About |
| Owen Mbeki | Senior sleep technologist, watches the night studies | Home pair (photo 09), Team, Night study |
| Dr. Tomas Varga | Sleep physician, breathing disorders | Team, Symptoms |
| Dr. Priya Raman | Sleep psychologist, leads CBT-I | Team, Treatment (photo 17) |
| Lucía Ferrer | Sleep technologist, home tests | Team, Night study |
| Grace Lin | Nurse, CPAP coach | Team, Treatment |
| Malik Hassan | Front desk and scheduling | Team, First visit |

### Stories (3, fictional, first names only, no outcome numbers)
1. **"Awake at 3 a.m."**: Ana, 41, project manager. Home test showed no breathing problem; six CBT-I sessions; a fixed rise time. Photo 10.
2. **"The snoring someone else heard"**: Daniel, 52, bus dispatcher. Night study in our room; breathing pauses found; CPAP set-up and a four-week check with Grace. Photo 11.
3. **"Sleeping after the night shift"**: Mei, 34, ICU nurse. Rotating shifts; a light and sleep-timing plan built around her roster. Photo 12.

### Flow (5 steps, written as prose rows, never a step grid)
1. Book by phone or online → 2. First consultation (60 min) + two-week sleep diary → 3. One night recorded (home test or our study room) → 4. Results visit within 10 days → 5. Plan and follow-up (CBT-I, CPAP, timing plan, referral).
Home shows steps 2–5 as four "stages" in the sticky-media block.

---

## 1. Signature techniques (three, all from sorahare-dental.com, all obvious at a glance)

### T1. Offset photo with one big rounded top-left corner, text panel overlapping its lower-left, white info bar fused to its bottom-right (sorahare first view)
- **Reference**: on a pale sky ground, one documentary photo occupies the right 80% of the width (1152×702 at 1440, left 288, top 120), flush to the right edge; only the top-left corner is rounded (~120px); all other corners square. A short two-line lead + small 3-line paragraph sit at x≈144, y≈582 and overlap the photo's lower-left. A white bar (70%+ of photo width, 78px tall) is glued inside the photo's bottom-right: date | one line | round dot arrow. `tok (c)(d)(e)(f)`
- **Nemuri, Home hero**: photo 01 at `left: 20vw; top: 120px; width: 80vw; aspect-ratio: 1152/702` (1440 → 1152×702), `border-radius: 120px 0 0 0`, `overflow: clip`. Text panel (see §3.2) overlaps the photo's lower-left by 200px. Info bar white, 78px tall, `left: 576px` of viewport at 1440 → implement `width: 60vw` (864px) right-aligned to the viewport, bottom edge = photo bottom edge.
- **Must not be diluted**: radius stays 120px at ≥1200px (≥96px at 960–1199, 64px mobile), only one corner; photo flush to the right edge (no right gutter); the bar is white and sits *inside* the photo bottom edge, not below it; text panel genuinely overlaps the photo (≥160px) on desktop.

### T2. Half-disc "dome" heading cutting into the next photo or band (sorahare 当院の特徴 / 日々の予防と治療)
- **Reference**: at the boundary between a section and the photo/band below it, the bottom of a 680px circle in the upper section's colour protrudes ~85px down into the photo; the JP title (24px/500) and a wide-tracked EN label (Tenor 16–20px, ls .2em, main blue) sit inside that segment, centred. `tok (d)(f)`
- **Nemuri**: `.nc-dome` = a block 760px wide × 110px tall, centred on the top edge of the next photo/band (`margin: 0 auto -110px; position: relative; z-index: 2`) with `background: radial-gradient(circle 380px at 50% -270px, var(--dome) 379.5px, transparent 380px)` where `--dome` = colour of the section above (white `#FFFFFF` or ground `#EEF3F7`). Inside, centred: H2 Figtree 500 1.75rem / 1.3 ink `#363636`, then 6px gap, EN label Figtree 400 0.875rem ls .2em `#4A5560`. The H2 sits 0–20px above the boundary, the label inside the segment (i.e. the heading group starts 30px above the boundary and the dome continues 110px below it). No clip-path (use the gradient), so it is safe next to observed elements.
- Mobile (<782px): 480px wide, `circle 240px at 50% -170px`, 70px protrusion; H2 1.25rem; long en/fr/de titles may wrap to 2 lines — then the group sits fully above the boundary and only the label sits in the segment.
- **Must not be diluted**: the segment must visibly bite into a photo or a coloured band (not float on plain white over white); circle colour exactly the upper section's colour; label tracked .2em.

### T3. Photo row with ● heading and underlined long-arrow text button, dotted rules between rows (sorahare 診療のご案内 rows)
- **Reference**: container 1080 centred; photo 520×302 (≈1.72:1, radius 0) left, text column right with "● title" (dot #C0DBEF 1em, title main blue 20px), 2 lines of body, and a text button "View More": 0.875rem, padding `1em 60px 1em 0`, 1px main-colour underline, a 50×8 skewed arrow at its right end. Rows separated by 1px dotted #D9D9D9, ~65px gaps. `tok (c)(d)(f)`
- **Nemuri, Home "What people arrive with"**: 4 rows, photo left always (not alternating): `grid-template-columns: 520px 1fr; gap: 60px; max-width: 1080px`. Photo aspect 520/302, radius 0. Text: H3 with `::before` ● (0.9em circle `#8FA3B5`, gap 10px) Figtree 500 1.25rem `#4A5560`; body Public Sans 1rem/2; button "Read more" as §2 button. Row padding 65px 0; `border-top: 1px dotted #D9D9D9` (and bottom on the last row).
- Button `.nc-more`: inline-block, `padding: 1em 60px 1em 0; min-width: 180px; border-bottom: 1px solid #4A5560;` Figtree 500 0.875rem `#4A5560`; `::after` arrow `width: 50px; height: 8px; border-bottom: 1px solid; border-right: 1px solid; transform: skewX(45deg); position: absolute; right: 0; top: calc(50% - 6px)`; hover: arrow `translateX(6px)` 0.3s ease (`tok (g)`).
- **Must not be diluted**: the rows keep the 520px photo on the left at desktop, the ● dot and the long skewed arrow underline; dotted rules, not solid.

### Supporting details (from the reference, not counted as signatures)
- Pale circle bubble (80px, `#FFFFFF`) behind the first word of each page lead (hero + inner page heads).
- 2:1 equal-height photo pair (707×400 + 353×400) for the two people on Home and on Team.
- "01/03" counter card overlapping a 3:2 story photo (sorahare feature slider).
- Hours table with ● ▲ dots in `#4A5560`.

### Continuation to inner pages (binding; each signature on ≥4 inner pages)
| Page | T1 offset rounded photo + panel + bar | T2 dome heading | T3 photo rows + long-arrow button |
|---|---|---|---|
| About | ✔ page head (photo 13), bar "Evening clinic since 2016" | ✔ "How we work" dome into photo 08 | ✔ 3 rows (why evenings / one room / reading together) photos 07, 17, 16 |
| Symptoms & conditions | ✔ head photo 02, bar "Not sure which fits? Book a first consultation" | ✔ "Six reasons people come in" dome into band | ✔ 6 condition rows: photos 03, 04, 05, 14 + 2 text-only rows (dotted rules kept) |
| Night study | ✔ head photo 07, bar "Check-in 20:30 · out 07:00" | ✔ "Home test or our room" dome into band | ✔ 2 rows: home test (15), in-lab night (06); then 09 row "Who watches" |
| Treatment | ✔ head photo 17, bar "Plans start at the results visit" | ✔ "Four ways forward" dome into band | ✔ 4 rows: CBT-I (10), CPAP (11), timing plan (12), referrals (text-only) |
| Team | ✔ head photo 01, bar "Seven people, evening hours" | ✔ dome above the 2:1 pair (08 + 09) | ✔ 5 rows for the other people (text-only rows with ● names; no photos, no grid) |
| Fees | ✔ head photo 15, bar "Itemised receipts for every visit" | ✔ dome into the fee band | — (fee table) |
| First visit | ✔ head photo 16, bar "Bring: ID, medication list, 2 weeks of sleep notes" | ✔ "Your first evening" | ✔ 5 flow rows (prose), photos 14, 06; FAQ below as dotted-rule list |
| Stories | ✔ head photo 03, bar "Three nights, three people" | ✔ dome into story 1 photo | ✔ 3 long story rows (10, 11, 12) |
| Access & hours | ✔ head photo 16 (different crop OK), bar = tel | ✔ "Hours" dome into band | — (hours table) |
| Notes (blog index / single) | ✔ index head photo 13; single: featured image with the 120px corner | — | ✔ index = rows (featured image 520×302 + ● title + more) |

Inner page head geometry: photo right 72vw, height 460px (desktop), radius `120px 0 0 0`, top 110px; H1 panel overlapping lower-left (H1 Figtree 500 3rem / 1.3 ink, EN label under it; bubble behind first word); white bar 78px glued bottom-right, 50vw wide. Mobile: stacked (photo, then H1, then bar as normal-flow blocks).

---

## 2. Key visual concept

### (1) Reference first screen (sorahare-dental.com) — concept, story, signature motion
- **Draws**: a pale sky ground; one large bright documentary photograph of the clinic's reception (aquarium niche, mosaic-arched counter, white walls) pushed to the right 80% with one big rounded top-left corner; logo top-left, "Tel. 0120-…" and a three-line menu icon top-right; a two-line blue lead (location + "1 minute from the station") with a white circle bubble behind its first characters, then a 3-line plain paragraph, both overlapping the photo's lower-left; a white news bar glued to the photo's bottom-right with a date, one headline and a round blue dot arrow.
- **Story**: "A soft, bright clinic a minute from the station; easy to walk into." The place itself is the promise — no people, just the room you will enter.
- **Signature motion**: the photo and the news bar fade in over 2s (ease); the lead and paragraph lines rise 10px one after another (1s each, delays 1 / 1.5 / 2 / 2.5s). Header gains a fill after scrolling.

### (2) Our translation (sleep clinic for working adults; same composition, same motion, same image type = photograph)
- **Scene**: photo 01 — the *room you will enter in the evening*: a dim consultation room at dusk, a single warm table lamp, an upholstered armchair and a low sofa, and on the side table a small sleep recorder with its finger clip and chest belt neatly coiled; window glass blue with dusk. No people (as in the reference). Same offset framing, same 120px corner.
- **Story**: "A quiet room where your night is finally read — and someone sits with you over the result." The lead is the problem in the visitor's words; the paragraph says where and how.
- **Copy (en)**: lead H1 two lines "Can't stay asleep? / Let's read the night together." Paragraph: "Nemuri Clinic is an evening sleep clinic in Seattle for working adults. We listen first, record one night at home or in our study room, and sit with you to read it." Info bar: "2026.11.03 | Friday consultations now run until 21:00" + dot arrow → Notes.
- **Motion**: identical concept — photo + bar fade in 2s ease; lead line 1, line 2, paragraph, (button-less) rise 10px at 1 / 1.5 / 2 / 2.5s, 1s ease each. Plus a slow image parallax inside the rounded frame (hachioji scrub idea, see §8).

### (3) KV checklist (every item implemented and visible in the 1440×900 first screen)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Pale sky ground; logo left, tel + menu right | Ground `#EEF3F7`; wordmark "Nemuri Clinic" + "Sleep medicine · Seattle" left; nav, tel "(206) 555-0142", language switch right | 70px top bar, x 30 / right 40 | none (sticky, static fill) | — |
| 2 | Big reception photo, top-left ~120px curve, right 80%, flush right | Low-key photo of the dim consultation room: single lamp, sleep recorder on the side table, dusk window | left 20vw, top 120, 1152×702 at 1440, radius 120px top-left only | fade in 2s ease; image parallax `--sp-par: 6%` inside the frame | 01 `hero-consult-room` |
| 3 | White circle bubble behind first words of the lead | White 80px circle behind "Can't" | centre at x≈150, y≈600 (behind line 1 start) | rises with line 1 | — |
| 4 | Two-line blue lead + 3-line paragraph overlapping photo lower-left | Two-line H1 in `#4A5560` + 3-line paragraph on a pale panel overlapping the photo's lower-left | panel x 0–520, y 548–822; overlaps photo by 232px | lines rise 10px, 1s ease, delays 1/1.5/2/2.5s | (over 01) |
| 5 | White news bar fused to photo bottom-right, round dot arrow | White bar: date · "Friday consultations now run until 21:00" · 16px `#4A5560` dot arrow | bottom-right inside photo, 864×78 (60vw) | fade in 2s with the photo | — |
| 6 | Photo shows the room you will enter, no people, one bright feature (aquarium) | The room's one warm lamp + sleep recorder as the single focal feature, at the photo's right-centre (x 62–78% of frame) | inside photo, right third, clear of panel and bar | parallax only | 01 |

---

## 3. Home page

### 3.1 Header
70px, `position: sticky; top: 0`, ground `#EEF3F7` always (no scroll JS; reference swaps fill on scroll, ours is pre-filled, same colour as the hero ground so it reads transparent). Left x=30: wordmark "Nemuri Clinic" Figtree 600 1.5rem ls .04em `#4A5560`, under it "Sleep medicine · Seattle" Figtree 400 0.6875rem ls .2em. Right (gap 32px): text nav Public Sans 500 0.875rem ink (About · Symptoms · Night study · Treatment · Team · Fees · Visit), "Tel." Figtree 500 1rem + number Figtree 500 1.5rem `#4A5560` (`tok (b)` Poppins 500 → Figtree 500), language switch. <1200px the nav collapses into a menu button (three lines 24/18/12px, right-aligned, 1px `#4A5560`, transform transition 0.3s ease-in-out, `tok (g)`) opening a full-screen `#EEF3F7` overlay; tel stays visible ≥782px. One top menu only.

### 3.2 First screen composition (1440×900)
- Ground `#EEF3F7` full screen.
- Photo 01 as described in T1 (`left: 20vw; top: 120px` measured from the page top, i.e. 50px under the 70px bar; `width: 80vw; aspect-ratio: 1152/702; max-height: calc(100vh - 160px)` with `object-fit: cover; object-position: 60% 50%`).
- Text panel: `position: absolute; left: 0; bottom: <photo bottom>; width: 520px; padding: 56px 48px 48px 144px; background: rgba(238,243,247,.95)`, square corners. Contents: H1 (preset x-large 2.25rem, Figtree 500, lh 1.6 (ref 40/25), `#4A5560`, 2 lines with `<br>`), 24px gap, paragraph Public Sans 1rem/2 `#363636`, max 3 lines at 1440 (≈ 330px measure). Bubble: `::before` 80px circle `#FFFFFF`, `left: 108px; top: 50px` (behind H1 first word), z-index below text.
- Info bar: `position: absolute; right: 0; bottom: <photo bottom>; width: 60vw; height: 78px; background: #fff; display: flex; align-items: center; padding: 0 28px`: date Figtree 400 0.875rem `#4A5560` (width 96px) | 1px × 24px `#D9D9D9` divider, 28px gaps | headline Public Sans 0.9375rem ink, one line, ellipsis | 16px circle `#4A5560` with a white 5px chevron at `margin-left: auto`. Whole bar is one link.
- Below the photo, 78px of the next block (statement) shows at 900px height.
- 960–1199px: photo left 14vw, width 86vw; panel width 460px, padding-left 64px.
- **Mobile 390**: header 60px (wordmark + tel icon + menu). Photo `margin-left: 24px; width: calc(100% - 24px); aspect-ratio: 4/3.4; border-radius: 64px 0 0 0`. Then in normal flow (no absolute positioning, no vertical text, nothing overlapping): panel with bubble, H1 1.625rem/1.6, paragraph; then the info bar as a full-width white block (date on its own line, headline wraps to 2 lines max, dot arrow right). Hero text must not overlap any other text at 390.
- Forbidden on the first screen: table, form, search box, filled buttons, giant centred text.

### 3.3 Block order
| # | Pattern | Purpose | Layout and photos | Copy (en) |
|---|---|---|---|---|
| 1 | `nc-hero` | KV, who we are | §3.2. Photo **01** | lead 10 words + 32 words |
| 2 | `nc-statement` | the approach | Ground `#EEF3F7`; centred: label "Our approach" (Figtree 0.875rem ls .2em `#4A5560`), statement Figtree 400 1.5rem / 2 (ref 24/48) ink, 2–3 lines, max 760px; 40px gap; `.nc-more` "About the clinic" centred. Padding 120px 0 (`tok (c)` 120px). | 45 words |
| 3 | `nc-symptoms` (**T3**, problem) | what people arrive with | White section. Centred plain head: H2 Figtree 500 1.75rem + label "Symptoms" below. Then 4 T3 rows: **02** waking at 3 a.m. / **03** snoring someone else hears / **04** sleeping after a night shift / **05** heavy afternoons at work. Each: ● title, 2 short paragraphs (problem in their words + what we usually check), `.nc-more` → Symptoms page anchors. | 4 × 55 words |
| 4 | `nc-method` (sticky-media, method) | how a night is read | Ground band. **T2 dome** (`--dome: #FFFFFF`) bites into the band top: "How a night is read" / label "Night study". Two columns in 1080 container: left 5/12 photo **06** 4:5, `position: sticky; top: 110px`, radius `120px 0 0 0` (T1 echo); right 6/12 (offset 1 column) four stage panels, each `min-height: 62vh`, separated by 1px dotted `#D9D9D9`: small label (Figtree 500 0.8125rem ls .2em `#4A5560`) "Evening 1 · First consultation" / "Two weeks · Your sleep diary" / "One night · Home test or our room" / "Within 10 days · Results visit", H3 1.5rem, 2 paragraphs. No numbers, no connecting line (not a timeline). `.nc-more` "How a night study works" after panel 4. | 4 × 60 words |
| 5 | `nc-room` (parallax band) | the study room, trust | Full-bleed Cover, height 640px (mobile 520), photo **07** background, `sp-parallax`, `--sp-par: 10%` (mobile 6%). Non-moving overlay `rgba(30,37,44,.18)`. Centred white panel `rgba(255,255,255,.88)`, width 60% (max 860px; mobile calc(100% - 32px)), padding 64px 72px: label "The study room", H2 1.75rem "One room, one night, one person awake for you.", 3 lines of body, `.nc-more` → Night study. (sorahare recruit band translation.) | 60 words |
| 6 | `nc-people` | who sits with the result | White. Centred plain head "Who sits with the result" / label "Team". 2:1 equal-height pair in 1080 container (`grid-template-columns: 2fr 1fr; gap: 20px`), height 400: **08** Dr. Hana Ellery reading a night with a patient (707×400), **09** Owen Mbeki at the monitoring desk (353×400), radius 0. Under each, ● name (Figtree 500 1.125rem `#4A5560`), role line (0.8125rem ls .1em), one 35-word paragraph. `.nc-more` "Meet all seven" → Team. | 90 words |
| 7 | `nc-stories` (proof) | three quiet stories | Ground band. **T2 dome** (`--dome: #FFFFFF`) bites into the top of story 1's photo — exactly the reference slider moment. Horizontal row, `overflow-x: auto; scroll-snap-type: x mandatory; gap: 64px; padding-inline: calc((100vw - 896px)/2)`; slides 896 × 597 (3:2, mobile 86vw) photos **10**, **11**, **12**; white card 240px wide on the photo's right edge, top 53% → bottom, soft shadow `0 4px 16px rgba(0,0,0,.08)` (`tok (d)`): counter "01" Figtree 300 3rem + "/03" 1.25rem `#4A5560`, title Figtree 500 1rem `#4A5560`, 3 lines 0.875rem, `.nc-more` "Read the story". No arrows, no dots, no autoplay; scroll/drag only. | 3 × 40 words |
| 8 | `nc-fees` | fees | The stories band above is ground, so **T2 dome** (`--dome: #EEF3F7`) bites into this white section's top edge: title "Fees" / label "Self-pay, in USD". 140px top padding under the dome. Fee list = the 7 rows of §0 as a `<table>` 100% of the 1080 container: item Figtree 500 1rem ink, detail 0.875rem `#5C6670`, price Figtree 500 1.25rem `#4A5560` `white-space: nowrap; text-align: right; width: 1%`, rows 1px dotted `#D9D9D9`. Note under: "Itemised receipt for every visit. We cannot promise what your insurer will reimburse." `.nc-more` → Fees. | 30 words + table |
| 9 | `nc-strip` | atmosphere | Full-bleed `sp-marquee` strip of photos **13**, **14**, **15** (each 2:3, height 420, no radius, gap 0 — like the reference), duplicated aria-hidden group; duration 120s linear. | none |
| 10 | `nc-visit` | hours, access, call | Ground. Centred plain head "Visit" / label "Hours and access". Two columns 1080: left — hours table (§0, ● ▲ in `#4A5560`, 1px dotted rules), closed-days line, address 2 lines, "Tel." + number Figtree 500 **4.25rem** (preset `display`, `clamp(2.625rem, 5vw, 4.25rem)`, ref tel clamp(34px,4.5vw,42px) scaled for the theme max), `.nc-more` "Book a first consultation" (→ First visit). Right — photo **16** clinic entrance at dusk, 4:3, radius 0. | 50 words |
| 11 | footer | | White. Wordmark + address + tel (Figtree 500 1.75rem `#4A5560`) left; two link columns right (all pages); bottom line © 2016–2026 Nemuri Clinic, 0.75rem. | — |

Words: en home ≥ 300 words of narrative (blocks 2, 3, 4, 5, 6 carry ≥3 real paragraphs). CJK home ≥ 550 characters.

Home photo positions = **16**: 01 · 02 03 04 05 · 06 · 07 · 08 09 · 10 11 12 · 13 14 15 · 16. No image repeats on Home.

### 3.4 Comparison with recent themes (home block order)
| # | Niuke Scan | Komugi School | Fumoto Hostel | Kogu Hardware | **Nemuri Clinic** |
|---|---|---|---|---|---|
| 1 | full-bleed cover + info bar, giant tracked H1 | bench photo KV + rail + chip bar | top/bottom split hero | full-bleed hand photo, text bottom-left | **offset photo right 80%, 120px corner, panel overlap, bar fused inside photo** |
| 2 | ruled 3-photo gateway grid | statement | welcome (tinted) | ruled 3-col gateway grid | **centred statement + long-arrow button** |
| 3 | pinned 3-stop 100vh stage | Mon–Fri hairline rows + thumbs | rooms pebble window | asymmetric counter story | **4 photo rows (520px left, ● title, dotted rules)** |
| 4 | alternating bleed-ellipse rows | full-bleed parallax | rooms reversed | 3 sticky split service panels (dark half) | **dome → sticky 4:5 photo left, stage panels right** |
| 5 | blue spec band | two name tickers | kitchen / lounge | price list | **parallax room band + centred white panel** |
| 6 | price table | what leaves with student | sticky "a night here" | drawers grid | **2:1 equal-height people pair** |
| 7 | dock parallax + stories | fees list | people portraits | parallax floor | **dome → 1.5-slide story row with counter cards** |
| 8 | FAQ | journal rows | parallax window | stories ruled rows | **dome → fee list** |
| 9 | closing CTA | visit | rates | ask + visit | **marquee photo strip** |
| 10 | — | — | visit | — | **visit: hours dots + 4.25rem tel + entrance photo** |

Why not alike: no full-bleed cover (ours is an inset rounded photo on pale ground); no gateway grid, no tickers, no ellipse, no dark split panels; Niuke's pinned stage is a full-width 100vh dimmed photo with a dotted rail, ours is a half-width sticky photo beside text panels on a pale band. Our signature shapes (single 120px corner, half-disc dome, long skewed arrow underline, fused white bar) appear in none of the four. No people grid, step grid, timeline or dashboard.

---

## 4. Inner pages (10 + notes)

Every page = T1 page head (§1 geometry) → body → closing "Visit" strip (hours line + tel + `.nc-more` Book) on ground. No sidebar.
1. **About** (`page-about`): head 13; three narrative sections (2016 founding: Hana's night-shift years and why evening hours; one study room, not a sleep factory; reading the night *with* the patient); T2 dome "How we work" into photo 08 (full container, 21:9 crop); T3 rows 07 / 17 / 16. ≥400 words.
2. **Symptoms & conditions** (`page-symptoms`): head 02; intro; T2 dome; six T3 rows: insomnia and early waking (text-only, first row), sleep apnea signs (03), shift-work sleep (04), daytime sleepiness (05), restless legs (text-only), late body clock (14). Each: what it feels like, what we check, which test. "When to see your own doctor first" note (chest pain, drowsy driving → urgent).
3. **Night study** (`page-night-study`): head 07; T2 dome "Home test or our room"; row 15 (home test: pick-up, the kit, return next day), row 06 (in-lab: check-in 20:30, sensors, 07:00 out, coffee), row 09 (who watches: Owen and Lucía). "What to bring" list; what the reading shows (hypnogram explained in words). No promise of diagnosis on one night.
4. **Treatment** (`page-treatment`): head 17; T2 dome "Four ways forward"; rows CBT-I (10, Priya, 6 sessions $780), CPAP (11, Grace, set-up $210), timing and light plan (12), referrals for oral appliances / ENT (text-only). Fees cross-linked.
5. **Team** (`page-team`): head 01; T2 dome over the 2:1 pair 08 + 09 (Hana, Owen); then five text-only T3 rows (● name, role, 50-word bio) for Tomas, Priya, Lucía, Grace, Malik. No portrait grid.
6. **Fees** (`page-fees`): head 15; T2 dome "Self-pay, in USD"; the 7-row fee table (same as Home); notes on receipts, cancellations (24 h notice, otherwise $60 — fixed number), payment cards accepted.
7. **First visit** (`page-first-visit`): head 16; T2 dome "Your first evening"; the 5 flow steps as T3 prose rows (photos 14 sleep diary, 06 sensors on rows 2 and 3; others text-only); FAQ (8 Q&A) as dotted-rule list with `<details>`.
8. **Stories** (`page-stories`): head 03; T2 dome into story 1 photo; three long T3 rows (10, 11, 12), each 180 words; disclaimer "Stories are shared with permission and names changed. Every night is different."
9. **Access & hours** (`page-access`): head 16 (different crop from First visit is fine — different page); T2 dome "Hours"; hours table (stacks on mobile); address, transit line "a short walk from downtown transit" (no real station names), parking note; tel at 4.25rem.
10. **Notes** (`home.html` index, `archive.html`, `single.html`): index head 13; rows = featured image 520×302 + date + ● title + `.nc-more`. 4 posts: "Friday consultations now run until 21:00" (2026.11.03, image 16), "What a home sleep test can and cannot tell you" (15), "Shift work and light" (04), "Keeping a two-week sleep diary" (14). Single: featured image with the 120px corner, text column 720px.
11. **404 / search**: T1 small head (no photo, panel + bar only) + `.nc-more` home.

---

## 5. Colour

From sorahare's relationships (pale ground ~50%, white ~25%, one main colour <4% used only on text/lines/dots, soft tints for dots). Main hue changed — see reason.

| Role | Ours | Reference (`tok (a)`) | Change | Use | Share |
|---|---|---|---|---|---|
| Ground | `#EEF3F7` | `#F0FAFF` | sky tint greyed toward the 紺鼠 row palette, lightness −1% | page ground, hero, header, alternate bands | ~50% |
| Surface | `#FFFFFF` | `#FFFFFF` | same | sections, info bar, bubble, cards, dome | ~25% |
| Ink | `#363636` | `#363636` | same | body, headings | text |
| Main | `#4A5560` | `#2268B9` | **hue changed**: the row palette 紺鼠 is binding for the plan, and a bright daytime dental blue fights the low-key evening photography; same role and share | H1 lead, H3, labels, tel, buttons' underline, dots, links | <4% |
| Soft dot | `#8FA3B5` | `#89CCFF` | same lightness, desaturated | ● before H3, bullets | <1% |
| Soft tint | `#C9D4DE` | `#C0DBEF` | same lightness, desaturated | hours ▲ background chips, focus rings | <1% |
| Hairline | `#D9D9D9` | `#D9D9D9` | same | dotted rules, bar divider | lines |
| Muted text | `#5C6670` | derived (`#595959` hachioji) | slate tint | captions, detail lines | — |
| Lamp accent | `#C9A66B` | — (none) | added, tiny | 1px underline on hover of `.nc-more` only; never a fill | <0.5% |

- Contrast: `#4A5560` on `#EEF3F7` = 6.9:1; on white 7.5:1; ink on ground 11:1.
- **First-screen saturated share**: reference 0.9% (sorahare) / 5.1% (hachioji). Gate `scripts/check-first-screen.py <home-desktop> --max 15` (quality cap 15%), target ≤ 5%: the only warm pixels are the lamp in photo 01; grade the photo blue-grey, not orange.
- Not beige/cream; no large saturated field anywhere; no dark full-section background (footer is white).

## 6. Type (font_direction **sans**)

- Latin headings: **Figtree** (variable 300–600). Latin body: **Public Sans** (variable 400–700). No serif anywhere.
- CJK: **Noto Sans TC** (zh-TW) / **Noto Sans JP** (ja), 黑體／ゴシック for headings and body; no 明體.
- Stacks (theme.json `fontFamilies`, each with `fontFace` so the editor iframe and front end load the same files):
  - `heading`: `"Figtree", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`
  - `body`: `"Public Sans", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`
  - `:lang(zh-TW)` → `"Figtree"/"Public Sans", "Noto Sans TC", sans-serif`; `:lang(ja)` → `…, "Noto Sans JP", sans-serif`. Because style.css uses `:lang(`, copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it in functions.php.
- Font files: woff2 in `assets/fonts/`; Figtree + Public Sans latin + latin-ext (fr/de); Noto Sans TC / JP as zh-TW / ja subsets made with the Hokuto/Hada workaround (the CJK subset script is broken), weights 400 + 500.
- CJK sizes ≈ 0.75 × English for headings, body line-height 1.85 (CJK) vs 2.0 (Latin, ref 32/16). fr/de `hyphens: auto`.

| Preset | Size | Use | Weight / lh / ls | Ref token (`tok (b)`) |
|---|---|---|---|---|
| x-small | 0.8125rem | labels, stage labels, roles | 400–500 / 1.6 / .2em | label ls .2em |
| small | 0.875rem | buttons, bar date, captions, fee detail | 500 / 1.7 | button 14px |
| base | 1rem | body | Public Sans 400 / 2.0 | body 16/32 |
| medium | 1.25rem | H3, prices | Figtree 500 / 1.5 | H3 20/30 |
| large | 1.5rem | statement, H3 in panels, wordmark | Figtree 400–500 / 2.0 (statement) · 1.4 | statement 24/48 |
| x-large | 2.25rem | hero H1 lead, section H2 on inner pages | Figtree 500 / 1.6 | lead 25/40 (scaled 1.44× as Latin H1) |
| xx-large | 3rem | inner page H1 | Figtree 500 / 1.3 | — |
| display | **4.25rem** | tel number on Visit / Access (max preset ≥4.25rem) | Figtree 500 / 1.1 | tel clamp(34px,4.5vw,42px) |
Section H2 (plain heads and domes): 1.75rem Figtree 500 / 1.3 (ref H2 24/38.4). EN labels: Figtree 400 0.875rem ls .2em `#4A5560` under the title (ref Tenor Sans 16–20px ls .2em; Tenor not loaded — font set kept to two families). No uppercase transform (ref none).

## 7. Responsive (binding)
- 390px first screen: no vertical text, no absolutely positioned labels over text; hero panel and info bar in normal flow (§3.2). No horizontal overflow at 390 or 1280 (strip/marquee and story row are clipped inside their own `overflow` containers).
- Fee table ≥782px: 100% of the 1080 container (never shrink-wrapped), price column `white-space: nowrap; text-align: right`, never cut at 800 or 1280. <782px: each row stacks (`display: grid`): item, detail, price on its own line right-aligned.
- Hours table <782px: stacks to one line per row label with day list ("Tue–Fri 13:00–17:00 · Sat 09:00–15:00"); a visually hidden full table is not used.
- Any other table stacks on mobile likewise.
- T3 rows <782px: photo full width (520/302), text below. Sticky-media <960px: photo not sticky, appears above the four panels at 4:3. 2:1 pair <782px: stacked, each 4:3.
- Dome: mobile size per §1 T2. Story row: 86vw slides, `padding-inline: 7vw`.

## 8. Scroll effects (sp-scroll; 3 effects) and parallax

Copy `pipeline/assets/sp-scroll/` unchanged into `assets/`. Theme-level variable override (reference timing `tok (g)` fadeInUp 10px 1s ease): `body .sp-reveal { --sp-dist: 10px; --sp-dur: 1s; --sp-ease: ease; }`.

| # | Effect | sp class | Where | Source and its trigger / timing / easing |
|---|---|---|---|---|
| 1 | Image parallax (**required**) | `sp-parallax` | (a) Home block 5 `nc-room` Cover, background photo **07**, `--sp-par: 10%` desktop / `6%` <782px; foreground = centred white panel (not in the moving layer) + a non-moving tint overlay. (b) Hero photo frame (figure with the 120px corner, `overflow: clip`), img **01**, `--sp-par: 6%` / mobile `4%` — the frame and the text panel/bar do not move. | hachioji-dm.com: GSAP ScrollTrigger scrub, image yPercent 25, start "top bottom" → end "bottom top", no easing (scrub). Ours: CSS scroll-driven via sp-scroll, same start/end range. |
| 2 | Rise-in | `sp-reveal sp-reveal--up` (parent `sp-stagger`) | Home block 3: each of the 4 symptom rows (parent `.nc-symptoms__rows` has `sp-stagger`); Home block 6: the two people cards (parent `sp-stagger`). Total 6 `.sp-reveal` on Home (≤ 60% of 11 blocks). Inner pages: T3 rows only. | sorahare fadeInUp 10px, 1s ease, 0.5s stagger (load); hachioji `active` class at "top bottom", .5s linear. Ours: IO on entry, 10px, 1s, ease, 0.12s stagger steps. |
| 3 | Endless photo strip | `sp-marquee` | Home block 9 (`nc-strip`), photos 13 / 14 / 15, inner group duplicated with `aria-hidden="true"`; theme CSS `.nc-strip.sp-marquee > * { animation-duration: 120s; }` | sorahare infiniteslide 192s linear, leftward, no hover pause. |

- **Hero**: no `sp-reveal`. The hero load animation is theme CSS keyframes (photo + bar `opacity 0→1 2s ease`; H1 line 1, line 2, paragraph `translateY(10px)→0 + opacity, 1s ease, delays 1s / 1.5s / 2s`), hidden start state only under `html.sp-js:not(.sp-no-motion)` inside `@media (prefers-reduced-motion: no-preference)`, never in `.editor-styles-wrapper`; `?sp-static` = final state.
- Not animated: statement, sticky method panels (stickiness is the motion), stories row children, fee table, hours table, forms, legal text.
- `check-parallax.mjs` must pass desktop and mobile (layer shift ≥6px; 0 under reduced-motion; ≥3 reveals hidden before entry — the 4 symptom rows provide them).

## 9. Images (17, Grok, one at a time, Read each one; regenerate any with text, logos, broken hands, warped faces or style drift)

**Imagery: photo** (stage-a IMAGERY = photo; reference is documentary photography). Row photo_direction is low-key, so our photos are deliberately dimmer than the reference's high-key look, while keeping its documentary, uncluttered interiors and calm framing.

STYLE (exact string on every prompt):
`photorealistic documentary interior photograph, 35mm lens, low-key evening light from a single warm table lamp with soft cool blue-grey ambient light, slate grey-blue walls, pale linen and light oak accents, lifted shadows with clear detail (not murky, not orange), calm unhurried atmosphere, modern international clinic and home settings, diverse adults, natural skin tones, uncluttered composition, no text, no legible screens, no logos, no brand marks, no signage, no Japanese elements`

All ≤300 KB, ≤2000px, webp, no cutouts; readme line per image (AI-generated, CC0). ★ = used on Home.

| ID | File | Subject / composition (ratio) | Used on (each at most once per page) |
|---|---|---|---|
| 01 ★ | `hero-consult-room.webp` | empty dim consultation room at dusk: upholstered armchair + low sofa, single warm lamp on a side table at right-centre, a small sleep recorder with coiled finger clip and chest belt beside it, window with blue dusk; left 30% calm wall (sits under panel) (1.64:1, 1800×1098) | Home hero; Team head |
| 02 ★ | `symptom-3am.webp` | adult sitting on the edge of a bed in a dark bedroom, phone face-down, faint window light, face in shadow-side profile (1.72:1) | Home row 1; Symptoms head |
| 03 ★ | `symptom-snore.webp` | couple in bed, one asleep on their back, the other awake looking at the ceiling, low lamp light (1.72:1) | Home row 2; Symptoms row; Stories head |
| 04 ★ | `symptom-shift.webp` | nurse in scrubs arriving home at dawn, taking off a coat in a hallway, blue morning light (1.72:1) | Home row 3; Symptoms row; Notes post 3 |
| 05 ★ | `symptom-afternoon.webp` | office worker at a desk late afternoon, hand to brow, window light fading (1.72:1) | Home row 4; Symptoms row |
| 06 ★ | `method-sensors.webp` | technologist gently attaching a scalp sensor to a seated adult in pyjamas in the study room, lamp light (4:5) | Home sticky photo; Night study row; First visit row |
| 07 ★ | `study-room.webp` | the night study room: made bed with pale linen, bedside lamp, small recorder on the nightstand, soft curtains, wide (21:9, 2000×857) | Home parallax band; Night study head; About row |
| 08 ★ | `doctor-reading.webp` | sleep physician (woman, 50s) seated, reading a printed graph sheet with a patient seen from behind, lamp light; sheet unreadable (707:400) | Home pair; Team pair; About dome photo |
| 09 ★ | `technologist-desk.webp` | technologist (man, 30s) at a dim monitoring desk, screens with abstract soft waveforms only, headset around neck (353:400 ≈ 0.88) | Home pair; Team pair; Night study row |
| 10 ★ | `story-dawn-tea.webp` | woman by a kitchen window at dawn with a mug, calm (3:2) | Home story 1; Stories row; Treatment row |
| 11 ★ | `story-cpap.webp` | man in his 50s on a bed edge adjusting a CPAP mask strap, the machine on the nightstand, lamp light (3:2) | Home story 2; Stories row; Treatment row |
| 12 ★ | `story-blackout.webp` | nurse at midday drawing blackout curtains, bright edge light around them (3:2) | Home story 3; Stories row; Treatment row |
| 13 ★ | `strip-corridor.webp` | clinic corridor at evening, wall lamps, a bench, door ajar to warm light (2:3) | Home strip; About head; Notes index head |
| 14 ★ | `strip-diary.webp` | hands with a paper sleep diary and pencil on linen, writing not legible (2:3) | Home strip; Symptoms row; First visit row; Notes post 4 |
| 15 ★ | `strip-home-kit.webp` | home sleep test kit laid out on a bed: small recorder, finger clip, belt, pouch (2:3) | Home strip; Night study row; Fees head; Notes post 2 |
| 16 ★ | `visit-entrance.webp` | clinic entrance from inside at dusk: glass door, street lights bokeh outside, warm lamp inside (4:3) | Home visit; First visit head; Access head; About row; Notes post 1 |
| 17 | `cbt-session.webp` | psychologist and client talking across a small round table, evening, notebook (3:2; head crop 1.64:1) | Treatment head; About row |

Per-page check: Home 01–16 once each (16 positions). About 13, 08, 07, 17, 16. Symptoms 02, 03, 04, 05, 14. Night study 07, 15, 06, 09. Treatment 17, 10, 11, 12. Team 01, 08, 09. Fees 15. First visit 16, 14, 06. Stories 03, 10, 11, 12. Access 16. Notes index 13 + posts 16, 15, 04, 14. No page repeats an image.

## 10. Similarity table (target ≈80%)
| Dimension | Reference (sorahare unless noted) | Nemuri Clinic |
|---|---|---|
| Ground / surface ratio | `#F0FAFF` ~50% / `#FFFFFF` ~25% | `#EEF3F7` ~50% / `#FFFFFF` ~25% |
| Ink | `#363636` | `#363636` |
| Main colour role | `#2268B9`, <2%, text/lines/dots/tel | `#4A5560` (row 紺鼠), <4%, same roles |
| Soft dots | `#C0DBEF` / `#89CCFF` | `#C9D4DE` / `#8FA3B5` |
| Hairline | 1px dotted `#D9D9D9` | 1px dotted `#D9D9D9` |
| First-screen saturation | 0.9% | target ≤5%, gate 15% |
| Body type | 16px / 500 / lh 32 | 1rem Public Sans 400 / lh 2.0 |
| Lead | 25px / 500 / lh 40, main colour | 2.25rem Figtree 500 / lh 1.6, main colour |
| H2 / H3 | 24/38.4 · 20/30, 500 | 1.75rem/1.3 · 1.25rem/1.5, 500 |
| EN label | Tenor Sans 16–20px, ls .2em, main | Figtree 400 0.875rem, ls .2em, main |
| Statement | 24px / lh 48, centred | 1.5rem / lh 2.0, centred |
| Tel | Poppins 500 clamp(34,4.5vw,42) | Figtree 500 clamp(2.625rem,5vw,4.25rem) |
| Header | 70px, logo left, tel + menu right | 70px, wordmark left, nav + tel + lang right |
| Hero photo | 1152×702, left 288, top 120, flush right | 80vw × (702/1152), left 20vw, top 120, flush right |
| Hero corner | top-left ~120px only | top-left 120px only |
| Hero text | x≈144, y≈582, overlaps photo lower-left | panel padding-left 144, top ≈548, overlaps 232px |
| Bubble | white ~80px circle behind lead | white 80px circle behind lead |
| Info bar | white, ~75% photo width, 78px, dot arrow 16px | white, 60vw (75% of photo), 78px, dot arrow 16px |
| Dome | 680px circle segment ~85px, title + tracked label | 760px circle segment 110px, title + tracked label |
| Rows | photo 520×302 left, ● title, underlined long-arrow button, dotted rules, gap ~65 | identical values |
| Button | 1px underline, padding 1em 60px 1em 0, 50×8 skewed arrow, 0.3s | identical |
| Photo pair | 707×400 + 353×400 | 2fr/1fr × 400px (707/353 at 1080) |
| Slider | 896×597 3:2, 1.5 visible, card 240 with "01/04", shadow 0 4 16 .08 | 896×597, 1.5 visible (scroll-snap), card 240 "01/03", same shadow; no autoplay |
| Recruit band | full-width photo, white panel centred | parallax photo 07, white .88 panel 60% centred |
| Photo strip | 3 photos, endless, 192s linear | 3 photos, `sp-marquee` 120s linear |
| Photo radius | 0 except hero corner | 0 except T1 corners |
| Imagery | high-key documentary interiors | low-key documentary interiors (row photo_direction) |
| Hero motion | fade 2s ease; lines rise 10px 1s ease, 0.5s stagger from 1s | identical |
| Scroll motion | hachioji scrub parallax yPercent 25; `active` .5s | `sp-parallax` 10% / 6%; `sp-reveal--up` 10px 1s ease |
| Hours table | ●/▲ dots main colour | ●/▲ dots `#4A5560` |

## 11. Home acceptance checklist (stage-1 review compares against this)
1. First screen at 1440×900: pale `#EEF3F7` ground; photo 01 right 80%, flush right, only the top-left corner rounded 120px; text panel with white bubble overlapping the photo's lower-left; white 78px info bar inside the photo's bottom-right with date, one line and a dot arrow; header 70px with wordmark left, nav + tel right. No table/form/search/giant centred text. `check-first-screen.py --max 15` passes (target ≤5%).
2. All six KV checklist items (§2.3) visible in the first screen; hero has no `sp-reveal`; load fade/rise works with `?sp-motion`, final state with `?sp-static`.
3. Block order equals §3.3 (11 blocks incl. footer), ≥16 photo positions, no image repeated on Home, all from §9.
4. T2 dome visible three times (method, stories, fees) and biting into a band or photo; T3 rows (4) with 520px left photos, ● titles, dotted rules, long skewed-arrow buttons.
5. Sticky photo 06 stays pinned while the four stage panels scroll (≥960px); no numbers, no timeline line.
6. Parallax: band 07 and hero 01 move (`check-parallax.mjs` ≥6px desktop and mobile; 0 under reduced-motion); ≥3 symptom rows hidden before entry and visible after; marquee runs and stops under reduced-motion.
7. Fee list: 7 rows exactly as §0, full width at ≥782px, prices nowrap right and never cut at 800/1280; stacks on mobile. Hours table as §0, stacks on mobile.
8. Colours per §5 (main `#4A5560` only on text/lines/dots; lamp amber only as hover hairline); fonts Figtree + Public Sans (Noto Sans TC/JP for CJK) in editor and front end; theme.json max size 4.25rem used by the Visit tel.
9. 390px: no horizontal overflow, no overlapping text, hero panel and bar in normal flow.
10. English home ≥300 words with ≥3 narrative paragraphs; numbers (fees, hours, 2016, 7 people, 10 days, 20:30/07:00) match §0.
