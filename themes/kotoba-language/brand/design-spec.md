# Kotoba Language: design spec (stage 1, binding for implementation)

Slug `kotoba-language`, adult language school for new arrivals and cross-border teams, type **education** (row b8-5; archetype split-screen, hero photo-left-text-right, first screen top-bottom-halves, page structure **audience-gateway**, nav split, real photography high-key). Reference: **QuSS — Quantum Science School, RIKEN, https://quss.riken.jp/** (S5-Style https://www.s5-style.com/12066/), screens in `brand/ref/`, measurements in `brand/reference-tokens.md` (tokens cited below as tok(a)–tok(g)). Borrow structure, technique and colour relationships only — no copy, photographs, logo or whole-page layout.

**Fixed brand facts (identical on every page and in all five languages):** Kotoba Language, founded **2016**, one school at **Scheepmakerspassage 14, 3011 VH Rotterdam, Netherlands**. Teaches six languages: **English, Dutch, French, German, Mandarin, Japanese**. Currency **EUR** in every language (no converted prices). Email `hello@kotobalanguage.example`, phone `+31 10 555 0142`.

---

## 1. Signature techniques (three; each must be obvious at a glance)

### T1. Oversized cropped display wordmark — source tok(b) row 2, `ref/quss-first.png`, `ref/quss-part2.png`
- **Reference:** QuSS sets one word in Imbue serif at ~200px (hero instance visually ~340px cap height), left-aligned at the ~80px side margin, so tall that the glyphs are **cut off by the section's own edge** — the hero "QuSS" sits over a ~190px top offset with its descender clipped, and a second instance at the very bottom of the page is sliced horizontally by the viewport edge so only the upper half of the letters shows. Flat black on the greige ground, no outline, no shadow.
- **Kotoba:** two instances. (a) **Hero, bottom half:** the single word `Kotoba.` in EB Garamond 400, `font-size: clamp(5rem, 15.5vw, 13.75rem)` (= **220px at 1440**, matching tok(b) ~200px), `line-height: 0.82`, letter-spacing `-0.015em`, ink `#0D0C0A`, **left-aligned** flush to the 80px side margin, inside a wrapper with `overflow: clip` whose height is 0.62× the text's line box, so the **bottom ~38% of the word is cut off by the first screen's lower edge**. (b) **Close section (home block 9) and the About page:** the word `Enrol.` / `Kotoba.` cropped the same way but by the section's **top** edge (upper 30% sliced), so the two instances mirror each other as on the reference.
- **Position / proportion:** the word's cap height is ≥ 0.33 × viewport height at 1440×900; its right edge ends between 38% and 46% of the content width (never centred, never full width).
- **Must not be diluted:** the crop must really clip glyph strokes (not just tight line-height); size must stay ≥ 11rem at 1440; left-aligned flush to the margin; solid ink on the plain ground — no gradient, outline, photo fill or opacity below 1. It is **not** a "giant centred heading" (forbidden): it is a cropped, left-flush wordmark.

### T2. Curved bracket arcs with dot terminators flanking a circular photo or a centred line — source tok(f) row 1, tok(e) row 1, `ref/quss-part1.png`, `ref/quss-part2.png`
- **Reference:** two thin 1px curved lines, like very large soft parentheses, bounding box **~110 × 400px** each, mirrored left and right of the block; each arc ends in a small **~6px filled dot**, the left arc's dot at its **top**, the right arc's dot at its **bottom** (diagonally opposed). They bracket either a **perfect circle photo crop ~370px diameter** (QuSS "Summer School 2026" block) or a single centred line of display text ("COMING SOON…"). Flat, no shadow.
- **Kotoba:** three places on the home page. (a) **Block 2 "Three ways in", the lead path (Work):** arcs flank a **circular photo, 372px diameter at 1440** (`border-radius: 50%`), right-aligned in a text-led row — same relationship as the reference, where the circle is right and the text block left. (b) **Block 5 classroom band:** arcs flank a centred EB Garamond 2.75rem pull-quote. (c) **Block 9 close:** arcs flank the centred enquiry line.
- **Geometry:** arc = inline SVG, `stroke-width: 1px`, stroke accent `#6E5C4C`, bounding box **112 × 400px**, arc bulge 26px outward (quadratic, control point at 26px), dot `r=3.5px` filled `#6E5C4C`; left arc dot top, right arc dot bottom. Horizontal gap between arc and the flanked element **64px** desktop, 20px at ≤ 782px (arc scales to 72 × 240px). Vertical centre of the arc pair aligns with the centre of the circle / text line.
- **Must not be diluted:** both arcs always present as a mirrored pair; the dots must be visible and diagonally opposed; the arc must be a **curve**, not a straight rule or a bracket glyph; the circle photo must stay a true circle ≥ 320px at 1440 (never a rounded rectangle).

### T3. Right-edge vertical micro-label rail with hairline cluster — source tok(f) row 2, visible in all three ref screens
- **Reference:** fixed to the viewport's right edge, a cluster of **3 horizontal hairlines of increasing length (~60 / 100 / 160px)** with a small dot at one end, ~45px from the top; separately, lower down on the right edge, a **rotated uppercase micro-label** ("SCROLL ↓", later swapping to "PAGE TOP ↑") at ~11px with wide tracking. It persists through the whole scroll.
- **Kotoba:** a `position: fixed` rail on the right edge, `right: 28px`, present on **every** template at ≥ 960px. Top: the three hairlines (1px, widths **56 / 96 / 152px**, 8px apart, accent `#6E5C4C`) with a 3.5px dot at the **left** end of the longest line. Below, vertically centred in the viewport: the rotated label (`writing-mode: vertical-rl`, Source Sans 3 500, **0.6875rem**, letter-spacing `0.14em`, uppercase, ink) reading **`ENQUIRE ↗`** and linking to the enquiry page; after 60% scroll depth the label text swaps to **`PAGE TOP ↑`** (one class toggled by `sp-scroll.js`'s existing IntersectionObserver on a sentinel at 60% of the page — no new scroll listener).
- **Must not be diluted:** the hairline cluster must be three lines of visibly different lengths plus the dot (not one rule); the label must be genuinely rotated and sit on the right edge; accent colour on the hairlines, ink on the label.
- **Responsive:** the whole rail is `display: none` below 960px (see §6 — no vertical text on the 390px first screen).

### Supporting (not counted as a signature): dark pill bar — source tok(a) row 4, tok(d) row 2
A fully rounded near-black `#15130F` bar, height 80px, max-width 712px, sitting at the base of the first screen, holding the label `Intake` + the next two intake dates as underlined links, Source Sans 3 0.875rem, white text. On ≤ 782px it becomes two stacked lines inside the same pill (never clipped — the reference clips, we do not, per §6).

### Continuation to inner pages (required)
| Page | T1 cropped wordmark | T2 arcs + circle | T3 right rail |
|---|---|---|---|
| About the school | `Kotoba.` cropped by the page-head's bottom edge | arcs + circular photo S2 beside the founding narrative | yes |
| Courses | `Courses.` cropped by the page-head's bottom edge | arcs flank the centred CEFR pull-line | yes |
| Pathway: Work & cross-border teams | `Work.` cropped (top edge, mid-page) | arcs + circular photo S3 | yes |
| Pathway: Settlement & daily life | `Settle.` cropped (top edge, mid-page) | arcs + circular photo S4 | yes |
| Pathway: Exam preparation | `Exams.` cropped (top edge, mid-page) | arcs + circular photo S5 | yes |
| Teachers | `Teachers.` cropped by the page-head's bottom edge | the 8 portraits are circular crops; arcs flank the director's quote | yes |
| Levels & placement | — (page head only) | arcs flank the centred "Where you start" line | yes |
| Fees & intake | `Fees.` cropped by the page-head's bottom edge | arcs flank the centred intake line under the table | yes |
| Learner stories (index + single) | `Stories.` cropped | arcs + circular portrait on each story | yes |
| Enquiry / visit | `Hello.` cropped by the page-head's bottom edge | arcs flank the centred address line | yes |
| Journal index / single, 404, search | page head only | arcs on 404 | yes |

---

## 2. Colour

Roles and ratios taken from QuSS tok(a); hex kept inside ±5% lightness of the reference except the row-mandated accent.

| Role | Hex | Source | Use | Share of a page |
|---|---|---|---|---|
| Base (ground) | `#F2F1EE` | QuSS ground `#F0F0EE`, +0.8% L | page ground everywhere | ~68% |
| Panel | `#FFFFFF` | derived (QuSS has no white panel; used to make the split hero read) | hero text half, fee table rows, story cards | ~8% |
| Ink | `#0D0C0A` | QuSS ink `#000000`, +5% L (warmed) | wordmark, headings, body, rules | ~20% |
| Pill / CTA fill | `#15130F` | QuSS news pill + "more" button | pill bar, filled buttons | ≤ 3% |
| Accent (kuwazome) | `#6E5C4C` | row b8-5 `hex` (QuSS has no accent hue outside photography; the row mandates this one) | arcs, dots, rail hairlines, section labels, level ticks, price accent | **≤ 5%, never a full-bleed field** |
| Muted text | `#5B564E` | derived from accent at 60% toward ink | captions, meta, table notes | — |
| Hairline | `#D9D7D1` | derived from base | table rules, 1px dividers | — |

- Photography carries the only saturated colour, exactly as on the reference (QuSS: one blue circle, <5% of the first screen, tok(a) row 3).
- **First-screen saturated-pixel cap: 15%** for `scripts/check-first-screen.py`; **target 6–12%** — achieved with a high-key classroom photograph (pale walls, daylight, oatmeal / stone / soft indigo clothing) occupying the left half of the top half only.
- Contrast: ink on base 17.9:1; white on `#15130F` 17.2:1; accent `#6E5C4C` on base 6.1:1 (fine for 0.6875rem labels and 1px rules).
- No beige/cream-led page, no large saturated field, no main colour from the four most recent themes (no lime, no slate-blue, no deep ink band, no leaf green).

---

## 3. Typography

- **Display:** EB Garamond (OFL) 400 + 500 + 400 italic — wordmark, headings, pull-quotes, prices.
- **Body / UI:** Source Sans 3 (OFL) 400 + 600 — body, labels, nav, tables.
- **zh-TW** Noto Serif TC 400/600, **ja** Noto Serif JP 400/600 for headings and body; CJK headings at **0.75×** the English size, body `line-height: 1.85`. fr/de `hyphens: auto` with `lang` set.
- **Loading (hard requirement):** all four families declared in `theme.json` → `settings.typography.fontFamilies` with **`fontFace`** entries (woff2 in `assets/fonts/`), so the block editor and the front end load the identical set. `style.css` will contain `:lang(zh-TW)` / `:lang(ja)` rules → copy `shared/inc/editor-lang.php` verbatim to `inc/editor-lang.php` and `require_once` it from `functions.php`. Verified by `check-editor-fonts.mjs` in en and zh-TW. Subsets: Noto Serif TC and JP shipped as pre-subset woff2 (Hokuto/Hada method — do **not** use the broken zh subset script).

| theme.json preset | rem | Used for |
|---|---|---|
| small | 0.8125 | meta, table notes |
| x-small (label) | 0.6875 | section labels, rail label |
| base | 1 (body copy 1.0625) | body |
| medium | 1.25 | lead paragraphs, teacher names |
| large | 1.75 | sub-heads, pull-quote on mobile |
| x-large | 2.75 | section headings, pull-quote (ref tok(b) h2 ≈ 52–56px → 2.75rem = 44px display serif reads at the same weight) |
| **xx-large** | **4.5** | page-head headings — **satisfies the ≥ 4.25rem rule** |
| (CSS only) wordmark | `clamp(5rem, 15.5vw, 13.75rem)` | T1 only |

Headings: EB Garamond 400, `line-height: 1.12` (wordmark 0.82), letter-spacing `-0.01em`, **left-aligned** except the three T2-flanked centred lines. Section label = accent uppercase 0.6875rem / `0.14em`, preceded by a **45px horizontal hairline** (tok(f) row 3) with 14px gap.

---

## 4. Header, spacing, radius

- **Nav = split** (row requirement): wordmark `Kotoba` EB Garamond 1.375rem at the left margin; primary links **Courses · Pathways · Teachers · Fees · Stories** centred-left of the viewport middle; **Enquire** as a near-black pill button at the right, with the language switcher (EN / ZH / JA / FR / DE) as plain 0.6875rem links beside it. One top menu only. Transparent over the hero, `#F2F1EE` with a 1px `#D9D7D1` bottom rule after scroll. Burger overlay below 960px.
- Spacing (from tok(c)): side margin **80px** at 1440 (24px at 390), content width **1200px**, narrow text column **680px**, section vertical rhythm **176px** desktop / 88px mobile, hero wordmark top offset **190px** from the viewport top.
- Radius: **circle photos 50%**, pill elements fully rounded, everything else **0px** — flat, **no shadows anywhere** (tok(d): QuSS is entirely flat).

---

## 5. Home page

### First screen (1440×900) — split top half, cropped wordmark bottom half
- **Top half (0–52vh):** two columns. **Left 6/12: photograph S1** (afternoon class at a long table, high-key) full-bleed to the left viewport edge, `aspect-ratio: 16/10`, **no radius**, wrapped in `sp-parallax` (see §9). **Right 6/12** on the base ground, text block starting at 44% of the column height: hairline + label `ROTTERDAM · SINCE 2016`, then the lead `<h1>`-adjacent line in EB Garamond **2.75rem / 1.12**, two lines: "Learn the language / your new life runs in." Below it one 42-word paragraph in body size and a plain text link `See the three ways in ↓`.
- **Bottom half (52–100vh):** base ground, the **T1 cropped wordmark `Kotoba.`** left-flush at the 80px margin, clipped by the viewport's lower edge; the **dark pill bar** floats over it, `left: 50%`-centred, 112px above the fold line.
- **Forbidden on the first screen:** table, form, search box, large saturated field, any centred giant heading, any rotated/absolutely-positioned label on mobile.

### Block order
| # | Pattern | Purpose | Layout / photos | Copy |
|---|---|---|---|---|
| 1 | `front-hero` | entry + mood | split top half (S1 left, text right) + cropped `Kotoba.` + pill bar | ~55 words |
| 2 | `front-paths` | **audience gateway, unequal weights** | Lead path **Work & cross-border teams**: text 6/12 left, **T2 arcs + circular photo S3 (372px)** right. Under it, two lighter rows: **Settlement & daily life** (hairline + 0.6875rem label + 1.75rem heading + 28 words + `→`, small 4:3 photo S4 at 3/12 right) and **Exam preparation** (same, photo S5). The three paths are deliberately **not** equal cards. | 3 × 30 words + 35-word intro |
| 3 | `front-intro` | who the school is for | narrow 680px text column with the hairline+label opener, three paragraphs; no photo | 150 words, 3 paragraphs |
| 4 | `front-levels` | where you start (CEFR) | a single **horizontal hairline scale** across the content width: 1px `#D9D7D1` rule with six accent ticks and labels A1 A2 B1 B2 C1 C2 under it, plus one sentence above and the link "Levels & placement →". Not a timeline, not a table. | 45 words |
| 5 | `front-classroom` | the room | **full-bleed photo band S6**, 1440×560, `sp-parallax`, with the **T2 arcs flanking a centred EB Garamond 2.75rem pull-quote** on the base ground directly below the photo | 28 words |
| 6 | `front-teachers` | the people | six circular portraits **P1–P6** (200px, 50% radius) in two rows of three, each with name (EB Garamond 1.25rem), language + role line (0.8125rem muted), and a 45px hairline above the name; link "All eight teachers →" | 6 × 14 words |
| 7 | `front-fees` | what it costs | **full-width fee table** on `#FFFFFF` rows (see §7 and §6); 8 rows; the accent `#6E5C4C` only on the 1px row rules and the "from" prefix; one note line under it | 8 rows + 40 words |
| 8 | `front-stories` | proof in use | three learner stories: each a 3:2 photo (**S7, S8, S2**) above a 1.25rem EB Garamond title and 45 words, three columns at 1200px, stacked on mobile | 3 × 45 words |
| 9 | `front-close` | enquiry | **T2 arcs flanking a centred line** "Book a free 45-minute placement interview", near-black pill button `Enquire`, hours + address lines; then the second **T1 cropped wordmark `Enrol.`** sliced by this section's **top** edge | 60 words |

English home ≥ **250 words** with ≥ 3 narrative paragraphs (block 3 alone carries three). CJK home ≥ 500 characters.

### Home photo positions (≥ 8 required) — 13 positions, no image twice
S1 (hero) · S3 (path 1 circle) · S4 (path 2) · S5 (path 3) · S6 (classroom band) · P1 P2 P3 P4 P5 P6 (six portraits) · S7 S8 S2 (three stories) = **14 positions, 14 distinct images**.

### Comparison with the four most recent themes
| # | Daichi Landscapes | Oto Audio | Ito HR Partners | Kaiten Skills | **Kotoba Language** |
|---|---|---|---|---|---|
| 1 | hero: photo top-half + staggered white tiles + stone bottom-half info card | hero: straddled H1 over photo | hero: marquee photo loop + slate pill | hero: hand-cut frame + blob plate + leaf CTA | **split top half (photo left / text right) + cropped wordmark clipped by the fold** |
| 2 | wave-band process timeline | line-icon category chips | pale inset service index | intro | **three unequally weighted gateway paths, lead path = arcs + circle photo** |
| 3 | services | ink comparison table | blurred full-bleed photo + vertical "Feature 01" cards | ink-band 5-step horizontal timeline | **narrow 680px narrative column** |
| 4 | people | white 3:4 product trio | fees | price panel | **CEFR horizontal hairline scale** |
| 5 | fees | listening room | people | people | **full-bleed classroom band + arc-flanked pull-quote** |
| 6 | stories | stories | stories | stories | **six circular portraits, 2×3** |
| 7 | close | close | close | close | **full-width fee table (8 rows)** |
| 8 | — | — | — | — | **three learner stories** |
| 9 | — | — | — | — | **arc-flanked close + second cropped wordmark** |
**Why not alike:** no vertical vein timeline (Daichi/Kaiten), no comparison table (Oto), no marquee loop or vertical "Feature 01" label cards (Ito), no hand-cut frame/blob (Kaiten), no staggered-tile hero text (Daichi), no straddled H1 over photo (Oto), no equal 3-up card grid anywhere. Kotoba's three shapes — a glyph-clipping wordmark, mirrored arcs with diagonal dots, and a fixed right-edge hairline rail — appear in none of the four. The gateway resolves into one heavy + two light rows, not a mosaic.

---

## 6. Responsive requirements (hard)

1. **390px first screen:** single column — S1 photo full width (16/10), then the text block, then the cropped `Kotoba.` at the 5rem clamp floor still clipped by its wrapper. **No vertical / rotated text and no absolutely positioned overlapping label anywhere on the mobile first screen**: the T3 rail is `display: none` below 960px, the pill bar is in normal flow (two stacked lines inside the pill, not clipped), and no element uses `position: absolute` over the heading.
2. **Fee table at ≥ 782px must be full width** (`width: 100%`, `table-layout: auto`, no `max-width` narrower than the content width) with the **price column `white-space: nowrap; text-align: right; min-width: 7.5rem; padding-right: 0`** so the amount is never clipped at 800px or 1280px. Verified at both widths by `auto-gates.mjs`.
3. **Every table stacks on mobile** (< 782px): `display: block` rows with the label as a `::before`, price on its own right-aligned line. Applies to the fee table, the level table on Levels & placement, and the intake-date table on Fees & intake.
4. No horizontal overflow at 390px or 1280px: `html, body { overflow-x: clip }`; T1 wrapper `overflow: clip`; arcs scale down to 72 × 240px and their 64px gaps to 20px at ≤ 782px.
5. The 4.5rem page-head headings drop to `clamp(2.4rem, 9vw, 4.5rem)`; line breaks never forced with `<br>` on mobile.

---

## 7. Fixed numbers (identical on home, every inner page and all five languages)

**Fees (EUR, 8 items)** — shown in full on Home block 7 and on Fees & intake; the first three also quoted on the pathway pages.

| Item | Detail | Price |
|---|---|---|
| Placement interview | 45 minutes, in person or online | **free** |
| Registration | once, on enrolment | **€45** |
| Evening course | 10 weeks, 2 × 90 min per week | **€590** |
| Daytime intensive | 4 weeks, 15 hours per week | **€880** |
| Exam preparation block | 8 weeks, 1 × 120 min per week | **€470** |
| Settlement conversation club | one term, weekly 90 min | **€150** |
| Private lesson | 60 minutes | **€62** |
| Workplace group, on site | up to 6 people, 10-week term | **€1,980** |

**Named people (8).** Portraits P1–P8.
1. **Noor Abadi** — director of studies, English; with the school since 2016 (P1)
2. **Mariam Haddad** — French, settlement track (P2)
3. **Petra Lindgren** — German, exam track (P3)
4. **Chidi Nwosu** — English for work (P4)
5. **Ana Sol Vidal** — Dutch, new arrivals (P5)
6. **Wei-Chun Hsu** — Mandarin (P6)
7. **Elias Ferrand** — placement adviser (P8)
8. **Sanna Mäkinen** — Japanese (P7)

**Learner stories (3)** — Home block 7 and the Stories pages:
- **A customer-support team lead** who moved from Beirut and sat the Dutch B1 exam after three terms on the evening course.
- **A five-person logistics team** at a shipping agency on the workplace group track, two 10-week terms of English for work.
- **A newly arrived couple** on the settlement conversation club, who now handle their own appointments in Dutch.

**Other fixed numbers:** founded **2016**; **six** languages taught; class size **maximum 8**; **four intakes a year — 12 January, 13 April, 7 September, 9 November 2026**; placement evening the **first Thursday of each month, 18:30**; level review at **week 5** of each term.
**Opening hours:** Mon–Thu 09:00–21:00, Fri 09:00–17:00, Sat 10:00–14:00 (placement interviews only), Sunday closed.
**Process (5 steps, written as paragraphs — never a step grid):** enquiry → free 45-minute placement interview → written level and track proposal → enrolment and registration fee → first class, with a level review at week 5.

---

## 8. Inner pages (11 + 404/search; ≥ 9 reachable for the gate)

Each page: page head (hairline + label + 4.5rem heading, T1 cropped wordmark where §1 lists it) → T2 block → body → close line with the pill button. **No sidebar.**

1. **About the school** — founding in 2016, why adult learners and cross-border teams, how classes are kept to 8; T2 arcs + circular S2; the 5-step process as paragraphs; cropped `Kotoba.`.
2. **Courses** — the six languages and the three course shapes (evening, daytime intensive, workplace group); arc-flanked centred CEFR line; links to the three pathways; prices from §7.
3. **Pathway: Work & cross-border teams** — who it is for, what a workplace group term covers, the €1,980 and €62 figures, S3 circle, teacher Chidi Nwosu (P4) quoted.
4. **Pathway: Settlement & daily life** — appointments, housing, schools, the €150 club and €590 evening course, S4 circle, Ana Sol Vidal (P5) and Mariam Haddad (P2).
5. **Pathway: Exam preparation** — CEFR targets and the €470 block (no claims about passing), S5 circle, Petra Lindgren (P3).
6. **Teachers** — all **eight** named people as circular portraits P1–P8 in a 4+4 list with language, role and two lines each; arcs flank Noor Abadi's quote.
7. **Levels & placement** — CEFR A1–C2 as a table (stacks on mobile), what the free 45-minute interview covers, the week-5 review; S9 photo.
8. **Fees & intake** — the §7 fee table in full (full width ≥ 782px, nowrap right-aligned prices) + the four 2026 intake dates + what the registration fee covers + payment in two instalments; cropped `Fees.`.
9. **Learner stories** (index + single) — the three stories, each with a 3:2 photo and a circular portrait flanked by arcs.
10. **Enquiry / visit** — address, hours, phone, email, the placement-evening line, a simple enquiry form (**form never on the first screen**), S10 street photo; cropped `Hello.`.
11. **Journal** (index + single) — notes on language learning in the city; 4 seed posts using S7, S8, S9, S10.
12. **404 / search** — page head + arcs + link home.

---

## 9. Scroll techniques (three effects; `sp-*` classes only)

QuSS loads **no** scroll library (tok(g): `gsap`, `ScrollTrigger`, `AOS`, `jQuery` all undefined) — so **no timing is attributed to the reference**; durations and easings below are the `sp-scroll` defaults from `pipeline/scroll-effects-spec.md` §1, and the *shape* of the motion is matched to what the reference's composition implies (a slow settle on a flat, quiet page).

| # | Effect | Blocks | Trigger | Duration / easing | Distance |
|---|---|---|---|---|---|
| E1 | **`sp-parallax`** (required) | Home block 1 hero photo half (`--sp-par: 10%`) and Home block 5 full-bleed classroom band (`--sp-par: 8%`); inner pages: the full-bleed photo on About and on each pathway page (`--sp-par: 8%`) | IntersectionObserver / CSS `view()` | continuous, no easing | 10% / 8% of layer height, layer `scale: 1.18` |
| E2 | **`sp-stagger`** + `sp-reveal sp-reveal--up` on children | Home block 2 (the three gateway paths — class on the **row container**, each path child gets `sp-reveal--up`), block 6 (six portraits), block 8 (three stories); inner: the teacher list and the story list | element enters viewport, `threshold 0.01` | 0.8s `cubic-bezier(.23,1,.32,1)`, step **0.12s** for the first five children | `--sp-dist: 24px` up |
| E3 | **`sp-reveal sp-reveal--wipe`** | the full-bleed classroom photo in Home block 5 and the pathway hero photos — clip-path applied to the **child `img`**, never the observed element | enters viewport | 1.1s `cubic-bezier(.77,0,.175,1)` | clip top→bottom, no translate |

- **Hero gets no reveal** (parallax only). Fee table, the enquiry form and legal text get no effect at all. Max 3 effect kinds per page.
- `prefers-reduced-motion`, `?sp-static`, no-JS and the block editor all render the final state; hidden states only via `html.sp-js:not(.sp-no-motion)` selectors. `assets/sp-scroll.css` / `.js` copied verbatim from `pipeline/assets/sp-scroll/` (JS in `<head>`, not deferred), `add_editor_style` for the CSS. No GSAP / AOS / Lenis / jQuery, no hand-written scroll listener.
- The T3 rail's `ENQUIRE ↗` → `PAGE TOP ↑` swap uses the existing observer on a 60%-depth sentinel; it changes text only, no transform.

### Parallax detail (mandatory section)
- **Primary:** Home block 1, the **left photo half of the hero**. Outer Group carries `sp-parallax` with `overflow: clip`; the moving layer is the direct `img` (S1) at `scale: 1.18`, `--sp-par: 10%`. **Foreground content — the right-hand text column, the cropped `Kotoba.` wordmark and the pill bar — sits outside the moving layer** and does not translate. The reference's hero is static, so the dynamic counterpart borrowed here is QuSS's *persistent* right-edge rail against a scrolling page (fixed vs. moving layers); the parallax makes the same figure/ground separation legible with photography.
- **Secondary:** Home block 5's full-bleed classroom band (Cover, background image S6, `--sp-par: 8%`), with the arc-flanked pull-quote below the photo, not inside the moving layer.
- **Mobile (390px): parallax is kept**, with `--sp-par: 6%` on both (smaller, still ≥ 6px measured displacement).
- Verified by `check-parallax.mjs` at 1280×900 and 390×844: layer-vs-container displacement **≥ 6px**, and ≤ 1px under reduced motion.

---

## 10. Photographs (16; Grok, one at a time, read every one)

**STYLE (use this exact string on every prompt):**
`photorealistic editorial photograph, 50mm lens, bright soft natural daylight from large windows, high-key pale walls and light wood, clean modern international classroom and city setting, muted palette of off-white, stone, oatmeal, warm brown and soft indigo, ethnically diverse adults aged 25-55, calm candid moment, shallow depth of field, no text, no lettering, no signage, no logos, no brand marks, no whiteboard writing, no Japanese elements, no cut-outs, no transparent background`

| ID | Subject / composition | Page & block (each image at most once per page) |
|---|---|---|
| **S1** | afternoon class of six adults around a long light-wood table, seen slightly from the side, window light from the left, 16:10 | **Home block 1 hero** (parallax); Courses page head band |
| **S2** | two adults talking across a small table in a bright corner, 1:1 crop-safe centre | **Home block 8 story 3** (3:2 crop); About T2 circle |
| **S3** | three colleagues with laptops at a long table in a bright meeting room, one explaining, 1:1 crop-safe | **Home block 2 lead path circle**; Pathway Work circle |
| **S4** | an adult filling in a form at a light counter with a staff member helping, 4:3 | **Home block 2 path 2**; Pathway Settlement circle |
| **S5** | an adult at a desk with an open workbook and a timer, concentrated, 4:3 | **Home block 2 path 3**; Pathway Exams circle |
| **S6** | wide empty bright classroom, long table, chairs, plants on the sill, 21:9 | **Home block 5 band** (parallax + wipe); Levels page band |
| **S7** | two adults laughing over coffee in a bright canteen corner, 3:2 | **Home block 8 story 1**; Journal post 1 |
| **S8** | a small group standing in a circle doing a speaking exercise, 3:2 | **Home block 8 story 2**; Journal post 2 |
| **S9** | hands and an open notebook with a printed level grid (no legible lettering), 3:2 | Levels & placement; Journal post 3 |
| **S10** | quiet modern street with a brick canal-side building entrance, no signage, 3:2 | Enquiry / visit; Journal post 4 |
| **P1–P6** | portrait, `shoulders-up, facing slightly off-camera, plain pale wall, soft daylight, 1:1` + STYLE — P1 Noor Abadi, P2 Mariam Haddad, P3 Petra Lindgren, P4 Chidi Nwosu, P5 Ana Sol Vidal, P6 Wei-Chun Hsu | **Home block 6** (all six, circular 200px); Teachers page; P4 on Pathway Work, P5+P2 on Pathway Settlement, P3 on Pathway Exams |
| **P7** | portrait, same recipe — Sanna Mäkinen | Teachers page; Stories single (circular portrait, story 2) |
| **P8** | portrait, same recipe — Elias Ferrand | Teachers page; Stories single (circular portrait, story 1) |

**Binding note:** Home block 8's third story uses **S2** as a 3:2 crop (not a portrait), so the home page holds **S1, S2, S3, S4, S5, S6, S7, S8 + P1–P6 = 14 distinct images**, none repeated. P7 and P8 appear on the Teachers page and the Stories pages only. Total **16 images**, 0 cut-outs, each ≤ 300 KB and ≤ 2000 px, one `readme.txt` line per image (AI-generated, CC0).

Per-page check: Home = the 14 above. About = S2, S6. Courses = S1. Pathway Work = S3, P4. Pathway Settlement = S4, P5, P2. Pathway Exams = S5, P3. Teachers = P1–P8. Levels = S6, S9. Fees = S1. Stories = S7, S8, S2, P7, P8. Enquiry = S10. Journal = S7, S8, S9, S10.

---

## 11. Similarity target (80%) — comparison table

Values on the right are binding; "source" names the token in `brand/reference-tokens.md`.

| Dimension | QuSS (reference) | Kotoba Language | Source |
|---|---|---|---|
| Ground colour | `#F0F0EE`, ~85% of first screen | `#F2F1EE`, ~68% of the page (split hero adds a white panel) | tok(a) 1 |
| Ink | `#000000`, ~10% | `#0D0C0A`, ~20% | tok(a) 2 |
| Accent hue | none outside photography | `#6E5C4C` on arcs/rail/labels only, ≤ 5%, never a field | row b8-5 `hex` |
| Pill fill | near-black `#15130F` | `#15130F` | tok(a) 4 |
| Saturated pixels, first screen | low single digits (one photo) | 6–12%, cap 15% | tok(a) 3 |
| Body size / line-height | 14px / 22.4px (1.6) | 17px (1.0625rem) / 1.6 | tok(b) 1 |
| Display wordmark size | ~200px Imbue serif, 400 | **220px at 1440** EB Garamond 400, `clamp(5rem, 15.5vw, 13.75rem)` | tok(b) 2 |
| Wordmark line-height / crop | tight ~0.9, clipped by overflow | **0.82**, wrapper `overflow: clip` at 0.62× line box | tok(b) 2 |
| Section heading | ~52–56px serif, 600–700, LH 1.2 | **2.75rem (44px)** EB Garamond 400/500, LH 1.12; page heads **4.5rem** | tok(b) 3 |
| Micro-label | ~11px sans, 400–500, ~0.1em, upper | **0.6875rem (11px)** Source Sans 3 500, **0.14em**, upper | tok(b) 4 |
| Side margin | ~80px | **80px** (24px at 390) | tok(c) 1 |
| Wordmark top offset | ~190px from viewport top | **190px** | tok(c) 2 |
| Section rhythm | ~160–200px | **176px** desktop / 88px mobile | tok(c) 3 |
| Circular photo | ~370px diameter, `border-radius: 50%` | **372px** at 1440, 50%; portraits 200px | tok(c) 4 / tok(d) 1 |
| Arc bounding box | ~110 × 400px, 1px, 6px dot | **112 × 400px**, 1px `#6E5C4C`, dot `r=3.5px`, bulge 26px | tok(c) 5 / tok(f) 1 |
| Arc gap to flanked element | ~64px (from screenshot) | **64px** desktop, 20px ≤ 782px | tok(c) 5 |
| Hairline cluster | 3 lines ~60 / 100 / 160px + dot, fixed right edge | **56 / 96 / 152px**, 8px apart, dot at the long line's left end, `right: 28px` fixed | tok(f) 2 |
| Section label rule | ~45px horizontal rule before body text | **45px**, 1px `#6E5C4C`, 14px gap | tok(f) 3 |
| Radius elsewhere | 0, pills fully rounded | 0, pills fully rounded | tok(d) 2–3 |
| Shadow | none | none | tok(d) 4 |
| Image treatment | circle crop, right-aligned in a text-led row, not full-bleed; no overlay | same for S2–S5; plus one 21:9 full-bleed band (our addition for the classroom) | tok(e) 1 |
| Motion | no library detected; subtle/none | `sp-scroll` defaults — 0.8s `cubic-bezier(.23,1,.32,1)`, 24px, 0.12s stagger, 1.1s wipe, parallax 10% / 8% | tok(g) — **not attributed to the reference** |
| Pill bar on narrow widths | clipped | **not clipped** — stacks to two lines inside the pill (§6) | tok(a) 4 |

Photographs and copy are entirely our own; nothing from the reference's assets, text or logo is reused.

---

## 12. Home acceptance checklist (stage 1 self-review and stage 2 verdict both check this)

1. First screen: top half = S1 photo left / text right; bottom half = `Kotoba.` cropped by the fold, left-flush at 80px; pill bar present; **no** table, form, search box, giant centred heading; `check-first-screen.py` saturated area ≤ 15%.
2. **T1** visible twice on home (hero and close) with real glyph clipping at ≥ 11rem at 1440.
3. **T2** visible three times on home (path 1 circle 372px, block 5 pull-quote, block 9 close) — mirrored arcs, diagonally opposed dots, accent `#6E5C4C`.
4. **T3** rail fixed to the right edge at ≥ 960px on every template; hidden below 960px.
5. Colours per §2: `#F2F1EE` ground dominant, ink `#0D0C0A`, accent ≤ 5% and never a full-bleed field; no beige-led page.
6. Block order equals §5 and differs from Daichi / Oto / Ito / Kaiten per the table; no 4-person grid, no 6-step grid, no vertical timeline, no dashboard, no sidebar, no collage, no cut-outs.
7. Home has **14 distinct photographs** in 14 positions, none repeated, all from the one STYLE string, no text/logo/broken hands.
8. Fee table: 8 rows, full width at 800px and 1280px, price column nowrap and right-aligned and not clipped; stacks below 782px.
9. 390px: no horizontal overflow, no rotated or absolutely-positioned overlapping label on the first screen.
10. Motion: `check-parallax.mjs` passes on desktop and mobile (≥ 6px displacement, ≤ 1px reduced-motion); `auto-gates.mjs` with `?sp-static` passes; `?sp-motion` scrolled to the bottom leaves no hidden element.
11. Fonts: EB Garamond + Source Sans 3 (+ Noto Serif TC / JP) loaded via `theme.json` `fontFace`; `check-editor-fonts.mjs` matches editor and front end in en and zh-TW; `theme.json` max size 4.5rem.
12. Numbers in §7 appear identically on home and every inner page; English home ≥ 250 words with ≥ 3 narrative paragraphs.
