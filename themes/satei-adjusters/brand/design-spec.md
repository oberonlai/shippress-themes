# Satei Adjusters: design spec (stage 1, binding for implementation)

Slug `satei-adjusters`, **landing** theme (rules.landing_track): an independent loss-adjusting desk that insurers call after water or fire damage, taking requests for a limited number of insurer **panel places** (waitlist). Design-plan row b14-6: archetype horizontal-strip, hero text-left-photo-right, first_screen top-bottom-halves, nav centered, palette 葡萄鼠 `#6B5E66`, fonts Onest / Source Sans 3, font_direction **sans**, photo_direction **low-key**.

Main reference: **bright-avenue.jp** (S5-Style https://www.s5-style.com/12081/), measured in `reference-tokens.md`. Structural idea from the row note: NOT A HOTEL (one quiet scene, a short reason to join, a single waitlist form). Borrow structure, technique, colour relationships and key-visual concept. Do not copy photos, text, logo or the whole page layout. The pinned "photo shrinks into scattered cards" hero is **not** copied (collage banned) and is replaced by parallax.

---

## 0. Fixed brand facts (identical on every page and in all five languages)

- **Satei Adjusters**, independent loss-adjusting desk, founded **2014**. Desk: **Unit 3, 41 Canal Wharf, Bristol BS1 6XN, United Kingdom** (fictional address).
- Phone lines **Mon–Fri 08:00–18:00** (UK time). Site visits **Mon–Sat 08:00–17:00**. Email `desk@satei-adjusters.example`.
- Works **for insurers** (the insurer appoints us; the policyholder never pays us). Independent: not owned by any insurer or repair firm.
- **Panel places:** the desk works with at most **12 insurers** at a time. **4 places open in April 2027**; requests join the waitlist in the order received. This is the single CTA: **"Request a panel place"** → `/waitlist/`.
- Coverage: within **90 minutes' drive of Bristol** (South West England and South Wales).

### People (7, all fictional; names identical in all languages)
| Name | Role |
|---|---|
| **Helen Marsh** | Founder, chartered loss adjuster (water and buildings) |
| **Tomás Ferreira** | Adjuster, escape-of-water and drying |
| **Amara Nwosu** | Adjuster, fire and smoke |
| **Samir Haddad** | Building surveyor, re-inspections |
| **Jonas Pike** | Contents and inventory |
| **Lin Qiao** | Desk reviews and report editor |
| **Ruth Abernethy** | Scheduling and insurer liaison (answers the phone) |

### How a visit runs (4 stages; used on Home T1 panel and /how-a-visit-runs/; never a step grid or vertical timeline)
1. **The call** — Ruth confirms the appointment with the insurer **the same working day**.
2. **The visit** — an adjuster is on site **within 48 working hours** of the appointment.
3. **The record** — photographs, moisture readings, a room-by-room damage sheet and a contents list, before anything is stripped out.
4. **The report** — a written report to the insurer **within 5 working days** of the visit.

Stat numeral (T4): **48 h** "from appointment to first visit".

### Fees (6 items, GBP, excl. VAT, billed to the insurer; identical on Home, /fees/, /for-insurers/, FAQ, all languages — currency stays GBP in every language)
| Service | Note | Fee |
|---|---|---|
| Desk review of a claim file | photos and documents only, no visit | £180 |
| Standard site visit | escape of water, up to two rooms | £420 |
| Extended site visit | three or more rooms, or two storeys | £690 |
| Fire and smoke assessment | includes soot and odour notes | £860 |
| Contents inventory | per half day on site | £340 |
| Re-inspection after drying | one visit, readings and photos | £260 |

### Cases (3; fixed facts only; no percentages, no "saved £x", no guarantees)
1. **Basement flood, terraced house, Bristol (2024)** — burst pipe under a cellar stair; Tomás; 2 visits (first + re-inspection after 19 days drying); report on day 4.
2. **Kitchen fire, flat above a bakery, Cardiff (2023)** — Amara and Jonas; smoke reached two rooms; contents list of 212 items; report on day 5.
3. **Sprinkler leak, small office, Bath (2025)** — Samir; lifted laminate across 64 m²; desk review then one visit; report on day 3.

---

## 1. Signature techniques (three, obvious at a glance; all from bright-avenue.jp)

### T1. Colour-flooded sticky 50/50 split with TOC and stacked photos (bright-avenue "私たちの特徴")
- Reference (https://bright-avenue.jp/, screenshot `ref/scroll-feature-after.png`): the whole section is flooded with the accent colour. Left half (554/1440) is **sticky**: 1px white-40% hairline on top, small bold label far left, a table-of-contents list (current item white bold, others 55% white), and at the bottom a big two-tone headline (white / mauve-grey) with an outline pill button "→". Right half is a **deeper shade** of the same colour and holds stacked 1.23:1 photos with radius 5, each followed by an underlined h3 and one line of text; ends with a giant stat "45 + unit" under a hairline.
- Satei (home `#visit` "How a visit runs"): section `alignfull`, two columns 50/50, **no gap**. Left column background `#6B5E66`, right column `#5A4E56`. Left inner wrapper `position: sticky; top: 0; height: 100vh;` padding 40px, flex column, space-between: top = hairline (1px `rgba(255,255,255,.4)`) + row with label "How a visit runs" (12px/700 white) at left and TOC (4 stage names, 12px, line-height 1.67, `rgba(255,255,255,.55)`; first item white 700) starting at x≈277; bottom = two-tone H2 (2.5rem/1.2/700, line 1 `#FFFFFF`, lines 2–3 `#D9CFD3`) + outline pill "Request a panel place →" (1px white, radius 900px, height 30, padding 0 12px, 12px). Right column padding 0 40px 150px 167px (photo column 552px wide on 1440): four blocks, each = photo (aspect 1.23:1, `border-radius:5px`, object-fit cover) + gap 17px + H3 "1. The call" (18px/1.45/700 white, `text-decoration: underline; text-underline-offset: 4px`) + 1 line text (14px/1.65, `rgba(255,255,255,.7)`), blocks spaced 120px. Last: hairline + stat "48" (6rem/0.9/700 Onest white) + unit "h" 1.125rem + caption.
- TOC highlight: static (first item white). Do not write scroll JS; CSS sticky only.
- Mobile (<782px): columns stack, sticky off (`position: static; height:auto`), left panel content first, photos full width.
- Must not be diluted: both halves must be flooded with **solid mauve** (not a tint, not a white card on mauve); the right half must be visibly deeper; photos radius exactly 5px; the two-tone headline must show two colours.

### T2. Hairline section opener: left label + numbered underlined h3 with pill chips + big two-tone headline right (bright-avenue "事業内容")
- Reference: each section starts with a 1px hairline across the content width; a 12px bold label sits far left (≈1/6 column); the middle column holds numbered, underlined h3s ("1. …") with a short paragraph and 3–4 pill chips; the right half carries a large two-tone headline (part `#AFA3A3`, part ink).
- Satei: **every** home section except hero and `#visit` opens this way; every inner page head too. Grid on 1360 container (padding-inline 40px): label column 0–176px, middle column from x≈216 (to 50%), right column from 50%. Hairline 1px `rgba(51,51,51,.2)` on light grounds, `rgba(255,255,255,.4)` on mauve. Label 12px/1/700 `#333`. Two-tone H2 2.5rem/1.2/700 Onest: first phrase `#333333`, second phrase `#AFA3A3` (in markup: `<mark class="has-inline-color" style="color:#AFA3A3;background:none">`). Numbered h3 18px/1.45/700 underlined, offset 4px. Pill chips: 12px, `background:#FFFFFF`, radius 900px, padding 0 10px 1px, line-height 24px, `box-shadow: 0 1px 1px rgba(0,0,0,.09)`, gap 6px.
- Must not be diluted: the hairline must be visible above every section; the label stays far left, not above the headline; the headline must be two-tone; chips must be white pills with the tiny shadow (not outline tags).

### T3. Hero photo with bottom-right two-line statement, bottom-left address, square 60px colour button (bright-avenue first screen)
- Reference: full-bleed interior photo with foreground bokeh; white two-line statement (24px) bottom-right with a 4-line lead below; tiny address 10px bottom-left; a 60×60 radius-5 accent square "MENU" with 1px white inner ring top-right.
- Satei: see §2 and §5.2 (row forces top-bottom halves, so the photo takes the bottom half and bleeds right). Square button: 60×60, radius 5, `#6B5E66`, `box-shadow: inset 0 0 0 1px rgba(255,255,255,.6)`, label "JOIN" 12px/700 white, links `/waitlist/`; on hover background `#5A4E56` and label rolls (translateY −100% → second copy, .3s `cubic-bezier(.55,.05,.22,.99)`). It stays in the header on all pages and on mobile (header right).
- Must not be diluted: statement must be inside the photo, bottom-right, white; address inside the photo bottom-left; square must be square (not a pill) and coloured.

### Supporting (not counted): T4 stat numeral (in T1); mauve-grey band `#AFA3A3` (bright-avenue news ground) for the FAQ band.

### Continuation to inner pages (≥4 required)
| Page | T1 sticky mauve split | T2 hairline opener | T3 photo + bottom-right statement / square button |
|---|---|---|---|
| How a visit runs | full 4-stage split, longer text (~70 words per stage) | page head + "What we bring" | page-head photo band, statement bottom-right |
| For insurers | split with 3 items: appointment, panel terms, invoicing | page head + chips (water, fire, contents, re-inspection) | square button |
| Fees | — | page head + table opener | photo band with statement "One fee per visit. / Agreed before we go." |
| Adjusters | split: left "The desk" + TOC of 7 names, right 3 stacked photos | page head | — |
| Cases | split per case (3 stacked photos with underlined numbered h3) | page head | — |
| Waitlist | — | page head | photo band left of form intro, address bottom-left |
| FAQ, Contact, Privacy, Terms, Thanks | — | page head (all) | square button (header) |

---

## 2. Key visual concept

### (1) Reference first screen — concept, story, signature motion (bright-avenue.jp, `ref/ref-first.png`)
- **Draws:** a full-bleed, softly lit apartment interior (timber dining table, wishbone-style chairs, big plants, pale blue-grey wall), green out-of-focus foliage in the lower-left foreground, a huge pale metallic wordmark crossing the middle, a small white two-line statement with a short lead lower right, a tiny address lower left, an accent-blue square MENU button top right.
- **Story:** "we make a used flat's value brighter" — a calm room that is ready to live in, seen as if you just stepped through the door.
- **Signature motion:** page-load reveal of wordmark and text; on scroll the photo is pinned and shrinks into scattered photo cards; further down, photos clip-reveal from the top (1.3s, `cubic-bezier(.87,0,.13,1)`).

### (2) Our translation — same composition, same motion idea, same image type (photo)
A dim room the morning after a pipe burst, seen as if you just stepped through the door: low window light and a torch beam across a pale wall with a tide-mark stain, an adjuster kneeling beside the stained skirting writing on a clipboard, out-of-focus houseplant leaves in the lower-left foreground. Story: **"after the water, a calm, independent person arrives and writes down exactly what happened."** Same layering (foreground bokeh → person/room → wall), same quiet palette (mauve-grey cast replaces the pale blue), same text placement (statement lower right, address lower left, big wordmark crossing, square button top right). Motion: the hero photo moves with `sp-parallax` (replacing the pinned shrink), and the photos in the next sections clip-reveal from the top with the reference's timing.

### (3) KV checklist (all visible in the 1440×900 first screen and, where stated, on 390px)
| # | 參考站元素 | 我們的對應 | 位置 | 動態 | 用哪張圖 |
|---|---|---|---|---|---|
| 1 | Full-bleed bright interior photo | Low-key photo: adjuster kneeling by stained skirting with clipboard, torch beam on wall | bottom half (y 430–900), from x=40 bleeding off the right edge | `sp-parallax`, `--sp-par: 8%` (mobile 6%) | **01** hero |
| 2 | Green bokeh foreground lower-left | Out-of-focus houseplant leaves lower-left in the same photo (part of the photo, not a cut-out) | photo lower-left ~20% | moves with the photo | **01** |
| 3 | Huge metallic wordmark crossing the screen | "SATEI" wordmark, Onest 500 uppercase, `clamp(4.25rem, 12vw, 10.5rem)`, lh 0.83, ls −0.02em, colour `#AFA3A3` with a soft vertical gradient `linear-gradient(180deg,#C4BABD,#AFA3A3 60%,#9A8E92)` clipped to text; **left-aligned** (not centred), baseline sitting 24px into the photo top edge so it visibly crosses from ground into photo | top half, left, overlapping photo top | none (static) | — |
| 4 | Two-line white statement lower right + lead | H1 "Called after the water. / Here for the record." 1.5rem/1.35/700 white + lead 14px/1.65 `rgba(255,255,255,.8)` 4 lines, max-width 360px | inside photo, right 120px, bottom 64px (desktop); mobile: below photo in flow, ink on ground | none | on **01** |
| 5 | Tiny address lower left | "Unit 3, 41 Canal Wharf, Bristol · Mon–Fri 08:00–18:00" 10px/1.5 white 80% | inside photo, left 40px, bottom 40px (desktop); mobile: in flow under the statement | none | on **01** |
| 6 | Accent square MENU button | 60px square radius 5 `#6B5E66` "JOIN" with inner white ring → /waitlist/ | header top-right (x=1340, y=40) | hover label roll .3s | — |

The hero photo **01** must show all of: kneeling adjuster, clipboard, stain on skirting/wall, torch beam, blurred foreground leaves. Regenerate until it does.

---

## 3. Colour (bright-avenue relationships kept; accent swapped to the row palette)

| Role | Hex | Share (page / first screen) | Source token |
|---|---|---|---|
| Ground | `#F6F6F6` | ~60% / ~45% | (a) ground `#F6F6F6` |
| Section alt | `#FFFFFF` | ~10% | (a) sections alternate `#FFFFFF` |
| Ink | `#333333` | ~8% | (a) ink |
| Accent panel (T1 left, square button, links hover) | `#6B5E66` 葡萄鼠 | ~12% / <0.5% | (a) accent `#609AAE` → **swapped** |
| Accent deep (T1 right half, button hover) | `#5A4E56` | ~6% / 0 | (a) right half darker `#5A8C9F` → swapped |
| Mauve-grey (wordmark, two-tone grey half, FAQ band) | `#AFA3A3` | ~5% / ~4% | (a) `#AFA3A3` exact |
| Two-tone on mauve | `#D9CFD3` | <1% | (a) secondary white 70% equivalent |
| Stain accent (only inside photos / one 6px dot in case labels) | `#A8553F` | <1% / 0 | stage-a mapping |

Swap reason: the row fixes 葡萄鼠 as the palette and the reference's own mauve-grey `#AFA3A3` already sits beside it, so mauve keeps the reference's "one quiet accent + grey" relationship; teal would also be close to the most recent theme's blue (Niuke). Ratios, positions (accent 0% in the first screen except the square) and contrast are kept.
- **First-screen saturated share ≤ 15%** (`scripts/check-first-screen.py`; row allows 30%, we stay at the stricter 15%; target ≈5%, the low-key photo is desaturated mauve-grey).
- No cream/beige grounds. Text on `#6B5E66` is white only (contrast 6.4:1).

---

## 4. Type (font_direction **sans**)

- Latin headings: **Onest** (OFL) 500, 700. Latin body/UI: **Source Sans 3** (OFL) 400, 600, 700. CJK: **Noto Sans TC** (zh-TW) and **Noto Sans JP** (ja) 400 / 700, 黑體 only — no Noto Serif anywhere.
- Stacks (theme.json `fontFamilies` + `fontFace` woff2 in `assets/fonts/`; editor iframe and front end identical; zh-TW / ja subset files as in Hokuto/Hada):
  - heading: `"Onest", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`
  - body: `"Source Sans 3", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`
  - `:lang(zh-TW)` → `…, "Noto Sans TC", sans-serif`; `:lang(ja)` → `…, "Noto Sans JP", sans-serif`. style.css uses `:lang(` → copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it.
- Scale (theme.json presets; max **10.5rem wordmark**, page H1 **4.25rem** ≥ 4.25rem):

| Preset | Size | Use | Weight / lh / tracking | Token source |
|---|---|---|---|---|
| `caption` | 0.625rem (10px) | hero address | 400 / 1.5 / 0 | address 10px |
| `label` | 0.75rem (12px) | section label, nav, chips, buttons, TOC | 700 (label) / 400 (nav) / 1.67 | label 12px/700; nav 12px |
| `base` | 0.9375rem (15px) | body (en) | 400 / 1.75 / 0 | body 14px/1.65 (+1px for Latin legibility) |
| `medium` | 1.125rem | numbered underlined h3 | 700 / 1.45 | h3 18px/1.45 underline |
| `large` | 1.5rem | hero statement, case titles | 700 / 1.35 | hero h2 24px/1.35 |
| `x-large` | 2.5rem | section two-tone H2 | 700 / 1.2 / −0.01em | headline 40px/1.2 |
| `xx-large` | 4.25rem | inner page H1 (T2 head) | 700 / 1.05 / −0.02em | — (theme max requirement) |
| `stat` | 6rem | 48 h numeral | 700 / 0.9 | stat 96px |
| `wordmark` | clamp(4.25rem, 12vw, 10.5rem) | hero SATEI | 500 / 0.83 / −0.02em uppercase | wordmark 210px/500/lh .83 (scaled to the half-height hero) |
- CJK: headings ~0.75× (H2 1.875rem, page H1 3.25rem, statement 1.25rem), body 15px lh 1.85; wordmark stays Latin "SATEI" in all languages. fr/de `hyphens:auto` on body and H2.

---

## 5. Home page (landing-longform, anchor menu, one repeated CTA)

### 5.1 Header (centered nav)
Height 140px desktop (padding 40px). Logo text "Satei Adjusters" Onest 500 1.0625rem `#333` left; **centered** anchor nav (core/navigation, 12px Source Sans 3 400 `#333`, gap 28px): Why · Calls · A visit · Adjusters · Cases · Fees · FAQ; right: T3 square "JOIN". Mobile: logo + navigation overlay icon + square (48px on mobile). Transparent over ground, not sticky (the square button is enough).

### 5.2 First screen composition (1440×900, top-bottom halves)
- **Top half** (y 140–430, ground `#F6F6F6`): 2 columns on 1360. Left (7/12): small label "Independent loss adjusting · Bristol" (12px/700) then the **SATEI** wordmark (KV #3) whose lower ~24px overlaps the photo. Right (4/12, align-end): lead paragraph 15px/1.75 (~40 words: who calls us, what we do) + outline pill "Request a panel place →" (1px `#333`, radius 900px, 30px high). 
- **Bottom half** (y 430–900): photo **01** in a Group `sp-parallax` `--sp-par:8%`, starting at x=40 and running to the right viewport edge (`margin-right: calc(50% - 50vw)`), height 470px, `border-radius: 5px 0 0 5px`, overflow clip. Gradient scrim `linear-gradient(0deg, rgba(30,24,28,.55), transparent 55%)` for text. KV #4 statement bottom-right, KV #5 address bottom-left — these are foreground (not inside the moving layer).
- Mobile 390: label → wordmark (4.25rem, one line) → lead → pill → photo (aspect 4:3, full bleed, parallax 6%) → statement (ink, `large` 1.25rem) → address (12px) — **all in normal flow, no absolute positioning, no vertical text.**

### 5.3 Block order (anchors in brackets)
| # | Block | Purpose | Layout / images | Copy |
|---|---|---|---|---|
| 1 | Hero `#top` | KV | §5.2, photo **01** | statement + 40-word lead |
| 2 | Why a desk like ours `#why` (ground `#F6F6F6`, padding 150/150) | reason to join (NOT A HOTEL "short reason") | T2 opener: label "Why"; middle: three numbered underlined h3 "1. Independent", "2. Present", "3. Written down" each 2–3 lines + chips (No repair firm · No insurer owner · 7 people / Visit in 48 h · Mon–Sat / Readings · Photos · Inventory); right: two-tone H2 "We are not the insurer. / We are not the builder." + 2 paragraphs (~110 words); under the right column photo **02** (1.23:1, radius 5, `sp-reveal--wipe`) | ~150 words |
| 3 | What insurers call us for `#calls` (ground `#FFFFFF`, padding 150/150) | horizontal strip (row archetype) | T2 opener + one **horizontal strip of 4 photos** 1.60:1 on one row (gap 16px, each 25% of 1360), caption under each: underlined h3 + 1 line: **03** Escape of water, **04** Fire and smoke, **05** Damp and mould, **06** Contents. Parent `sp-stagger`, each figure `sp-reveal sp-reveal--wipe`. Mobile: 2×2 (not a horizontal scroller) | ~80 words |
| 4 | How a visit runs `#visit` | T1 signature | T1 split; right photos **07** call, **08** arrival, **09** measuring, **10** report; stat 48 h `sp-count` | 4 × ~35 words |
| 5 | The adjusters `#adjusters` (ground `#F6F6F6`) | who comes | T2 opener; left 5/12 photo **11** (two adjusters at desk, aspect 4:5, radius 5, `sp-reveal--wipe`); right 7/12 **ruled name list** of all 7 (each row: 1px hairline, name 1.125rem 700 Onest + role 14px `#666`, 56px rows) — not a portrait grid | ~60 words + 7 rows |
| 6 | Cases `#cases` (ground `#FFFFFF`) | proof without claims | T2 opener; 3 **rows**, each: thumbnail strip 95px high × 152px (1.6:1, radius 5) left, then year + city label (12px, 6px `#A8553F` dot), underlined h3 title, 2-line summary, right-aligned facts (visits, report day) — photos **12**, **13**, **14** | 3 × ~45 words |
| 7 | Fees `#fees` (ground `#F6F6F6`) | price list | T2 opener; full-width table (§8), 6 rows; note "GBP, excl. VAT, billed to the insurer." No motion | table + 1 line |
| 8 | FAQ band `#faq` (ground **`#AFA3A3`**, ink `#333`) | reference news band | label + 5 `core/details` rows with 1px `rgba(51,51,51,.25)` hairlines (Who pays? / Do you repair? / How far do you travel? / What does a panel place mean? / When do places open?) | ~120 words |
| 9 | Request a panel place `#panel` (ground `#F6F6F6`) | single CTA (repeated) | 50/50: left photo **15** (dim corridor, door ajar, 1.23:1, radius 5, `sp-reveal--wipe`); right T2-style two-tone H2 "Four places open / in April 2027." + 2 paragraphs + solid pill `#6B5E66` "Request a panel place →" (white, radius 900px, 44px) | ~80 words |
| 10 | Footer (ground `#333333`, text `#F6F6F6`) | facts | address, hours, email, links (Privacy, Terms, Waitlist); small "SATEI" 4.25rem `#AFA3A3` left | — |

Home image positions: **15** (01–15), none repeated. Home English copy ≥ 600 words, ≥ 3 narrative paragraphs.

### 5.4 Comparison with the most recent themes
| Theme | Home order | Signature | Why Satei differs |
|---|---|---|---|
| Niuke Scan | hero → how a delivery is counted → specs → price → stories → close quote | pinned full-bleed photo stages, ellipse photo, blue spec band | Satei hero is top/bottom halves with a crossing wordmark; process is a colour-flooded sticky 50/50 split (not pinned full-bleed stops); horizontal photo strip + mauve FAQ band; fees come after people and cases |
| Komugi School | chip-bar photo hero → programme → schedule rows → ticker → admissions | chip bar, hairline schedule rows | no ticker, no schedule; chips only inside T2 openers |
| Fumoto Hostel | pebble hero → welcome → rooms ×2 → kitchen → sticky night → people ×3 → parallax band → rates → visit | pebble shapes, sticky story | no organic shapes; the sticky block is a solid two-shade colour split with TOC; no separate parallax band (parallax in hero) |
| Kogu Hardware | hero → ruled 3-col → story → 3 sticky panels → prices → drawers grid → parallax → stories → visit | sticky panels, drawers grid | one split section only, no grids; strip of 4 photos in one row; square header button |

---

## 6. Inner pages (10 + 1 post)

Every page: T2 head (hairline, 12px label left, two-tone H1 `xx-large` 4.25rem, 1–2 line lead in the right column) → body → closing strip with the same CTA pill "Request a panel place →". No sidebar. Section padding 120/150.

1. **How a visit runs** (`/how-a-visit-runs/`): head "A visit / from call to report."; photo band **09** (16:7, radius 5, bleeding right, statement bottom-right "Readings first. / Strip-out after.", `sp-parallax` 6%); full T1 split (4 stages, ~70 words each, photos **07 08 16 10**, stat 48 h); T2 section "What we bring" with chips (moisture meter · thermal camera · torch · tape · damage sheet · contents tags) + 2 paragraphs.
2. **For insurers** (`/for-insurers/`): head "For insurers / one desk, twelve panels."; T1 split with 3 items (Appointment / Panel terms / Invoicing), photos **11 07 10**; panel terms text (max 12 insurers, 4 places April 2027, coverage 90 minutes from Bristol); fee summary link.
3. **Fees** (`/fees/`): head "Fees / agreed before we go."; full table (§0, same as home); photo band **16** with statement "One fee per visit. / Agreed before we go."; 4 fee FAQs (travel included within coverage, re-inspection, VAT, invoices monthly).
4. **The adjusters** (`/adjusters/`): head "Seven people / and one phone."; T1 split: left "The desk" + TOC of 7 names, right photos **17 11 02** with underlined h3 per person group; full ruled list with ~25-word bio each.
5. **Cases** (`/cases/`): head "Three cases / written down."; T1 split per case with photos **12 13 14**, each ~180 words (what we found, what we recorded, report day; qualitative only).
6. **FAQ** (`/faq/`): head; 10 `core/details` on the `#AFA3A3` band.
7. **Contact** (`/contact/`): head "Contact / the desk."; photo **06** 1.23:1 left, address, hours, email, phone lines; no form.
8. **Waitlist** (`/waitlist/`, newsletter page): head "Request / a panel place."; 50/50: photo **15** (radius 5) with address bottom-left inside; form card `#FFFFFF` radius 5, fields: name, work email, insurer, claims per month (select <20 / 20–60 / 60+), language; submit solid mauve pill. Note "We reply within one working day (Mon–Fri 08:00–18:00)."
9. **Thanks** (`/thanks/`): T2 head "Thank you. / You are on the list." + 2 lines (places open April 2027) + pill home.
10. **Privacy** (`/privacy/`) and 11. **Terms** (`/terms/`): T2 head; 680px text column; no motion.
- Post (≥1, Notes): "What we record before the strip-out" (featured **09**), ~400 words, T2 title 3rem + 680px column.
- 404/search: T2 head + pill home.

---

## 7. Scroll effects (sp-scroll; hero none except parallax; forms, tables, legal text none)
| Effect | sp-* class | Where | Reference (bright-avenue) trigger / time / ease | Our values |
|---|---|---|---|---|
| Parallax (required) | `sp-parallax` on hero photo Group (photo **01** as direct `img`/Cover bg) | Home hero bottom half; How a visit runs and Fees photo bands | ref pins the hero photo and shrinks it on scroll (rAF, scroll-linked) → we keep "the photo moves under the text" as parallax | `--sp-par: 8%` desktop, 6% ≤781px (keep on mobile); foreground statement/address/wordmark not in the moving layer |
| Clip reveal from top | `sp-reveal sp-reveal--wipe` (clip on child img) | photos **02**, strip 03–06 (parent `sp-stagger`), **07–10** in T1, **11**, **12–14**, **15**; inner T1 photos | `data-image-reveal`, IO-like, 1.3s `cubic-bezier(.87,0,.13,1)`, inset 100%→0 round 5px | `--sp-dur: 1.3s; --sp-ease: cubic-bezier(.87,0,.13,1)`; radius 5px on the img |
| Fade-up of text | `sp-reveal sp-reveal--up` + `sp-stagger` on T2 middle columns and case rows | T2 openers (not hero) | `.is-top-content-reveal-pending → -active`, ~0.8s `cubic-bezier(.16,1,.3,1)`, ~20px | `--sp-dist: 20px; --sp-dur: .8s; --sp-ease: cubic-bezier(.16,1,.3,1)` |
| Count | `sp-reveal sp-count` | "48 h" stat in T1 | number runs ~1.5s ease-out | built-in 1.2s easeOutCubic |
Max 3 kinds per page besides count. No marquee.

---

## 8. Responsive rules (hard)
- 390px first screen: no vertical text, no absolutely positioned labels or statement over text; wordmark one line at 4.25rem (≤ 360px wide); statement and address in flow below the photo. No horizontal overflow at 390 and 1280.
- Fee table at ≥782px: **full width** of the 1360 container (`width:100%`, `table-layout:auto`), 3 columns Service (50%) / Note / Fee; Fee column `white-space:nowrap; text-align:right; padding-right:0`, never clipped at 800 and 1280. Row hairlines 1px `rgba(51,51,51,.2)`, row height 64px, Service 1.125rem 700 Onest, fee 1.125rem 700.
- Every table <782px becomes stacked: each row a block (service bold, note, fee on its own line right-aligned).
- T1 split <782px stacks, sticky off. Strip of 4 → 2×2 at <782px (no horizontal scroller). Case rows: thumbnail on top at <600px.
- Square button 48px at <782px, never overlapping the logo.

---

## 9. Images (17 photos, Grok, one at a time, Read each; regenerate any with text, logos, broken hands, faces distorted or style drift)

**Imagery: photo** (stage-a IMAGERY: photo; row photo_direction low-key overrides the high-key default).
STYLE (identical for all 17):
`Low-key documentary photograph, dim ambient light from one window or a single torch, deep soft shadows, muted mauve-grey and cool grey colour cast with pale walls, natural skin tones, shallow depth of field with soft out-of-focus foreground, 35mm lens, quiet and calm mood, modern international residential and small-office interiors in the UK, diverse people in plain dark workwear, no faces looking at camera, no text, no logos, no brands, no signage, no Japanese elements, photorealistic`

| # | Subject / composition | Ratio | Used (page · block) | Home |
|---|---|---|---|---|
| 01 | Adjuster kneeling beside a water-stained skirting in a dim living room, clipboard on knee, torch beam across a tide-marked pale wall, blurred houseplant leaves lower-left foreground, space top-right | 16:9 (1920×1080) | Home hero | ★ |
| 02 | Quiet independent desk at dusk: lamp, claim folders, moisture meter, window behind | 1.23:1 | Home why · Adjusters T1 | ★ |
| 03 | Ceiling stain with a bucket catching drips, dim hallway | 1.6:1 | Home strip | ★ |
| 04 | Smoke-darkened kitchen cabinets, light through a window | 1.6:1 | Home strip | ★ |
| 05 | Close view of damp, peeling paint above a skirting, torch light | 1.6:1 | Home strip | ★ |
| 06 | Gloved hands tagging water-damaged books and boxes on a table | 1.6:1 | Home strip · Contact | ★ |
| 07 | Hands holding a phone over an open notebook at a desk, early morning | 1.23:1 | Home T1 · Visit T1 · For insurers | ★ |
| 08 | Adjuster with a case at an open front door, homeowner seen from behind | 1.23:1 | Home T1 · Visit T1 | ★ |
| 09 | Moisture meter pressed to a wall, hand close-up, reading glow | 1.23:1 (+16:7 crop) | Home T1 · Visit band · Post | ★ |
| 10 | Report being written at a kitchen table: laptop, printed photos, damage sheet | 1.23:1 | Home T1 · Visit T1 · For insurers | ★ |
| 11 | Two adjusters reviewing a floor plan at a desk, seen from the side | 4:5 | Home adjusters · Adjusters · For insurers | ★ |
| 12 | Cellar stairs with a waterline mark, dim | 1.6:1 | Home cases · Cases | ★ |
| 13 | Window frame and wall above it blackened by smoke, interior | 1.6:1 | Home cases · Cases | ★ |
| 14 | Office floor with lifted, buckled laminate, desks pushed aside | 1.6:1 | Home cases · Cases | ★ |
| 15 | Dim corridor, door ajar, warm light from the room beyond | 1.23:1 | Home panel · Waitlist | ★ |
| 16 | Dehumidifier and drying fans in an empty stripped room | 16:7 | Fees band · Visit T1 | |
| 17 | Adjuster portrait, half body in a hallway, looking at a clipboard | 4:5 | Adjusters T1 | |
WebP ≤ 300 KB, ≤ 2000px, no cut-outs. (17 photos total incl. #17; within 12–18.)

---

## 10. Similarity (target 80%; values from reference-tokens.md)
| Dimension | bright-avenue | Satei |
|---|---|---|
| Ground / alt | `#F6F6F6` / `#FFFFFF` (a) | same |
| Ink | `#333333` (a) | same |
| Accent panel / deep | `#609AAE` / `#5A8C9F` (a) | `#6B5E66` / `#5A4E56` (row palette; reason §3) |
| Mauve-grey | `#AFA3A3` (a) | same |
| First-screen saturated share | ≈2% (a) | ≤15%, target ≈5% |
| Body | 14px / 1.65 (b) | 15px / 1.75 |
| Section label | 12px/700 (b) | same |
| h3 | 18px/1.45 underline numbered (b,f) | same |
| Section headline | 40px/1.2 bold two-tone (b) | 2.5rem/1.2/700 two-tone |
| Hero statement | 24px/1.35 white (b) | 1.5rem/1.35/700 white |
| Wordmark | 210px/500/lh .83 `#AFA3A3` metallic (b) | clamp(4.25rem,12vw,10.5rem)/500/.83 `#AFA3A3` gradient, left-aligned |
| Stat | 96px + 18px unit (b) | 6rem + 1.125rem |
| Section padding | 150 / 150–190 (c) | 150 / 150 |
| Header padding-inline | 40px (c) | 40px |
| Feature split | 554 sticky / image col 552 at x=721 (c) | 50/50, image col 552 |
| Image radius | 5px (d) | 5px |
| Chips | radius 900, 0 1px 1px rgba(0,0,0,.09), 12px (d) | same |
| Outline pill | 1px ink, r900, h30, 12px (d) | same |
| Menu square | 60×60 r5 accent + white ring (a) | same, `#6B5E66`, "JOIN" |
| Image ratios | feature 1.23:1, cards 1.60:1, case strip 95px (e) | same |
| Image reveal | clip inset 1.3s `.87,0,.13,1` (g) | `sp-reveal--wipe` 1.3s same ease |
| Content reveal | fade-up ~20px `.16,1,.3,1` (g) | same |
| Hover UI | .3s `.55,.05,.22,.99` (g) | same |
| Hero motion | pinned shrink (g) | sp-parallax 8% |

---

## 11. Home acceptance checklist
- [ ] First screen 1440×900: label + SATEI wordmark top-left crossing into the photo; photo 01 bottom half bleeding right; statement bottom-right white; address bottom-left; square JOIN top-right; KV #1–#6 all visible.
- [ ] Photo 01 shows kneeling adjuster, clipboard, stain, torch beam, blurred foreground leaves; low-key.
- [ ] Hero `sp-parallax` moves ≥6px (check-parallax.mjs desktop + mobile), 0 with reduced motion; no reveal on the hero.
- [ ] T2 hairline opener on why, calls, adjusters, cases, fees, FAQ, panel; two-tone headlines; white chips with shadow.
- [ ] T1 split solid `#6B5E66` / `#5A4E56`, sticky left at ≥782px, 4 photos radius 5, underlined numbered h3, 48 h count.
- [ ] Strip of 4 photos in one row ≥782px; 2×2 on mobile.
- [ ] 15 home images, none repeated; no cut-outs; no text in images.
- [ ] Fee table full width, fee column nowrap right, 6 rows, GBP, matches §0; stacked on mobile.
- [ ] FAQ band `#AFA3A3`; CTA "Request a panel place" repeated (hero pill, T1 pill, panel button, square) → /waitlist/.
- [ ] Copy ≥ 600 words; no guarantees, awards, real media or brands; people, fees, times exactly as §0.
- [ ] Onest / Source Sans 3 via theme.json fontFace, same in editor; CJK Noto Sans TC/JP.
- [ ] First-screen saturated share ≤15%; no horizontal overflow 390/1280; mobile first screen no overlap, no vertical text.
- [ ] auto-gates.mjs en pass (stage 1: `1 1`).
