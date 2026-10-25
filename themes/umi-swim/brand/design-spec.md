# Umi Swim School: design spec (stage 1, binding for implementation)

Slug `umi-swim`, swimming school for children and adult beginners, type **business** (WooCommerce compatible, not required). Row b11-2: archetype horizontal-strip, hero full-bleed-photo + info bar, nav centred, real documentary photography, palette pale blue #6E8CA0, font_direction **sans** (Figtree / Inter Tight, CJK Noto Sans TC / Noto Sans JP gothic), page_structure **day-schedule**.
Main reference: **Welfit** https://welfit-sapporo.com/ (S5-Style, private fitness studio). All numbers below come from `reference-tokens.md` (cited as `tok(a)`…`tok(g)`). We borrow structure, technique, colour relationships and the key-visual concept. We do not copy photos, copy text, logos or the full page layout.

Fixed brand facts (every page, all five languages): **Umi Swim School**, founded **2014**, **12 Quay Road, Larkfield** (fictional, international-neutral). Two pools: **25 m main pool, 6 lanes, 29 °C** and **12 × 6 m teaching pool, 0.9 m deep, 32 °C**. Class sizes: kids max **4** per coach, adults max **5**, private **1:1**. Terms: **4 terms a year, 10 weeks each**. Currency **EUR** in every language (no conversion).

---

## 1. Signature techniques (three, all obvious at a glance)

### T1. Water-blob layers with a blob-masked photo (Welfit hero + section backgrounds)
- Reference (welfit-first.png): pale blue-green ground `#EBF3F3`; a large organic blob (≈780×620, aspect ≈1.26:1) holds a bright interior photo and bleeds off the **left** edge; a second, larger translucent gradient blob (`#C2DBDD → #D8E8EC`, ≈850×620) overlaps the photo's **right half**; more 800–1100 px blobs float behind later sections, partly off-canvas, one with a sky-blue `#78B6D6` lower lobe (welfit-mid1.png). `tok(a)(e)(f)`
- Umi: hero (KV), concept band, programmes section, and every inner page head.
  - Blob shapes: three SVG paths saved as `assets/blob-a.svg`, `blob-b.svg`, `blob-c.svg` (smooth 4–5-lobe closed curves, no sharp corners; draw your own, do not trace Welfit). Photo masks use `mask-image: url(blob-a.svg)` / `-webkit-mask-image`, `mask-size: 100% 100%`.
  - Hero photo blob: width **54%** of viewport (≈780 px at 1440), aspect **1.26:1**, left edge at **−4%** (bleeds off left), top **150 px** from hero top.
  - Water blob: `blob-b`, width **60%** (≈860 px), left at **36%**, top **130 px**, fill `linear-gradient(135deg, #D8E8EC 0%, #C2DBDD 70%)`, `opacity: .92`, sits **above** the photo blob (z-index 2) so it visibly overlaps the photo's right ~35% (translucent; the photo shows through). `mix-blend-mode: multiply` is **not** used (keeps it pale).
  - Section blobs: `blob-c` 1000–1100 px, `#C2DBDD → #D8E8EC`, with a lower-left lobe gradient to `#78B6D6` at 40% stop (only in the programmes section, matches welfit-mid1). Always partly off-canvas (≥15% outside), parent `overflow: clip` so no horizontal scroll.
- Must not be diluted: the overlap must be visible (the water blob covers part of the photo, not beside it); photo blobs are never rectangles; ground stays `#EBF3F3`, not white or beige; blobs are ≥ 50% viewport wide on desktop.

### T2. Oval-photo white cards with diagonal hairline and italic number (Welfit about cards)
- Reference: white card, radius **10 px**, soft shadow `0 8px 32px rgba(60,70,90,.08)`; an oval/egg portrait **280×360 (7:9), radius 9999 px** in the left ≈28%; in the card's top-left corner a **1 px diagonal hairline ≈100×95 px** with an italic number **01–04, 30 px**. Cards travel horizontally (pinned track). `tok(d)(e)(f)(g)`
- Umi: the **day schedule strip** on home ("A day at Umi", 6 cards 01–06 = from the first supported float to swimming a lane), plus programmes stages, coaches, stories and the first-lesson flow on inner pages.
  - Card desktop: **680 × 440 px**, padding 40 px, grid `220px 1fr`, gap 40 px. Oval photo **220 × 283 (7:9)**, `border-radius: 9999px`, `object-fit: cover`.
  - Corner: pseudo-element `::before` 1 px line `#3C465A` at 40% opacity from (0, 95px) to (100px, 0) (use a `linear-gradient(to top right, transparent calc(50% - .5px), rgba(60,70,90,.4) 50%, transparent calc(50% + .5px))` on a 100×95 box at top-left). Number `01`–`06` Figtree **italic 400 30 px**, positioned at top 14 px / left 18 px inside the triangle.
  - Above the title: time label (e.g. `15:30`) Figtree italic 16 px `#6E8CA0`, then h3 Figtree 400 **26 px / lh 50 px / ls 1.3 px** (`tok(b)` h3), then 2–3 lines Inter Tight 16/27.2.
- Must not be diluted: the photo stays an oval (not a circle, not a rounded rectangle); the diagonal hairline and italic number are visible on every card; cards are white on the pale ground with the soft shadow; radius exactly 10 px.

### T3. Big vertical section title at the left edge + pill tab list (Welfit Service)
- Reference (welfit-mid1.png): "Service" set **120 px**, rotated 90°, at the far left edge, with a small vertical Japanese caption and a 1 px rule beside it; a two-line centred lead; a white pill tab list **900 × 60, radius 9999**, active tab ink `#3C465A` with a small triangle pointer below; below, a small centred italic label with a **1 px × 40 px vertical rule** and a white panel with an **arc top (radius ≈200 px)**. `tok(f)(d)`
- Umi: home "Programmes" section (tabs Kids / Adults / Private), and inner pages Programmes, Timetable (tabs Mon–Fri / Saturday / Sunday), Fees (tabs anchor-jump to the table groups), FAQ (tabs Kids / Adults / Booking).
  - Vertical title: Figtree 400 **7.5rem (120 px)**, `writing-mode: vertical-rl` (reads top→bottom like Welfit, no extra rotation), ink `#3C465A`, left 56 px from viewport edge, in a column outside the 1000 px container (desktop ≥1200 only). Caption beside it: 0.9375rem, `writing-mode: vertical-rl`, preceded by a 1 px × 24 px rule. For zh-TW/ja the big title stays the English word (Programmes) and the caption is localised.
  - ≤1199 px: the big title becomes horizontal, 3rem, left-aligned above the lead (no rotation, no absolute positioning).
  - Tab list: width min(900px, 100%), height 60 px, white, radius 9999 px, 3 equal tabs; active tab bg `#3C465A`, text white, triangle pointer 12×8 px under its centre; inactive text `#3C465A`; font Figtree 400 15 px ls .3 px (`tok(b)` tab). Real tabs: `role="tablist"`, buttons `role="tab"`, panels `role="tabpanel"`, a 30-line vanilla JS file `assets/tabs.js` (click + arrow keys; no scroll listeners). No-JS: all panels visible stacked, tab list hidden by `html:not(.sp-js) .umi-tabs__list{display:none}`.
  - Panel: white, `border-radius: 200px 200px 10px 10px` on desktop (arc top), padding 120 px 80 px 80 px; mobile radius `80px 80px 10px 10px`, padding 72 px 20 px 32 px. Above the panel: italic label + 1 px × 40 px vertical rule, centred.
- Must not be diluted: the vertical title must be big (≥ 7rem) and really vertical on desktop; the tab list is a single white pill with a dark active pill inside; the panel has a visible arc top.

### Continuation to inner pages (required)
| Page | T1 blob layers / blob photo | T2 oval cards 01–0n | T3 vertical title + pill tabs |
|---|---|---|---|
| About | page head: blob photo (C1) bleeding left + water blob overlap | 01–04 "how we teach" cards | — |
| Programmes | page head blob photo (P1) | stages 01–06 per programme (Kids 1–3, Adults 1–3) | vertical "Programmes" + tabs Kids / Adults / Private |
| Timetable (day schedule) | page head blob (S1) | each time slot as a compact card (oval 120×154) | vertical "Schedule" + tabs Mon–Fri / Sat / Sun |
| Coaches | page head blob (T1 photo) | 7 text-only coach cards 01–07 (hairline + italic number, no portraits) | — |
| Fees | section blob behind table | — | vertical "Fees" + tabs (Terms / Private / Club) as anchors |
| First lesson | page head blob (H2) | flow 01–05 as oval cards in a horizontal strip | — |
| Stories | page head blob (R3) | 3 story cards 01–03 | — |
| Pool & safety | page head blob (A1) + blob behind facts | — | vertical "Pool" title |
| FAQ | blob behind | — | vertical "FAQ" + tabs Kids / Adults / Booking |
| Access & contact | page head blob (R2) | — | — |
At least 4 inner pages use each of T1 and T2; T3 on 5 pages.

---

## 2. Key visual concept

### (1) Reference first screen
- **Drawn**: pale blue-green ground; a large organic blob holding a blurred, bright treatment-room photo that bleeds off the left edge; a translucent teal→sky gradient blob overlapping to the right; italic overline "Private Fitness" and a large italic wordmark centred at the top; a four-line vertical Japanese lead at the top right.
- **Story**: a calm, private, one-to-one place where body and mind are eased — soft, unhurried, shaped like water.
- **Signature motion**: on load, photos crossfade with scale 1.05→1 and blur 10 px→0 (1.2 s, stagger 0.4 s); the vertical lead lines wipe in top→bottom with blur→sharp (1.4 s, stagger 0.2 s, Power2.out). On scroll, the wide concept photo parallaxes −5%→+5%; cards move horizontally on a pinned track. `tok(g)`

### (2) Our transformation (same composition, motion concept and image type)
- **Scene**: the pool edge of a bright teaching pool. A documentary photograph of a coach crouching at the pool edge, one hand near a 6-year-old learner who holds the rail, sits inside the water-shaped blob bleeding off the left. The pale "water" blob overlaps its right side like the surface of the pool. Story: *the first calm minutes in the water — someone beside you at the edge — then the lane.* The blob shapes literally become water.
- **Motion**: three pool photos crossfade inside the blob (rail hold → supported float → lane swim), each entering with scale 1.05→1 + blur 10→0; the vertical lead "Hold the rail. / Float. / Then swim." wipes in line by line; the water blob drifts slowly on scroll (parallax layer).
- **Image type**: real documentary photography (IMAGERY = photo), high-key, soft natural light, like Welfit.
- Info bar (row's first_screen `full-bleed-photo-info-bar`): a white pill bar across the hero bottom with ages · water temperature · next term start · "Book a trial" link.

### (3) KV checklist (all on the home first screen, visible at 1440×900 and 390×844)
| # | Reference element | Our mapping | Position | Motion | Which image |
|---|---|---|---|---|---|
| 1 | Blurred interior photo in a big blob bleeding off left | Coach crouched at pool edge, child holding the rail, in `blob-a` mask | left, 54% wide, left −4%, top 150 px (mobile: 92% wide, left −6%) | load: fade + scale 1.05→1 + blur 10→0, 1.2 s | H1 |
| 2 | Crossfading slides inside the blob | 3 slides in the same mask: H1 → H2 → H3, 6 s each, 1.2 s crossfade, loop | same blob | CSS keyframes, stagger 0.4 s on first entry; stops at H1 under reduced-motion / `?sp-static` / editor | H1, H2, H3 |
| 3 | Translucent teal→sky blob overlapping the photo's right half | "Water" blob `#D8E8EC→#C2DBDD`, 0.92 opacity, overlapping the photo's right ~35% | left 36%, 60% wide, top 130 px | `sp-parallax` layer, `--sp-par: 8%` (mobile 6%) | (no photo; SVG) |
| 4 | Italic overline + italic wordmark centred top | "Swim School" overline (Figtree italic 1.5rem, ls .1em) + h1 "Umi" (Figtree italic 400, 4.5rem) centred above the blobs | top centre, 40 px under header | heading fade 1.2 s on load | — |
| 5 | Vertical 4-line JP lead, top right | Vertical lead, 3 lines (English "Hold the rail. / Float. / Then swim."; zh-TW, ja, fr and de use the translated lines), `writing-mode: vertical-rl`, 20 px / lh 49 px / ls 4 px | top right, x ≈ 1215–1380 at 1440 (right 60 px) — **desktop ≥1024 only**; mobile: horizontal 2-line lead in normal flow under the wordmark | load: clip-path wipe top→bottom + blur 10→0, 1.4 s, stagger 0.2 s, `cubic-bezier(.25,.46,.45,.94)` | — |
| 6 | Bottom pill tab / CTA language | Info bar: white pill (radius 9999, height 64), 4 cells split by 1 px vertical rules: "Ages 6 months – adult" · "Teaching pool 32 °C" · "Next term starts 6 January" · pill link "Book a trial →" (ink bg) | hero bottom, centred, width min(1000px, 92%), bottom 40 px. Mobile: white card radius 10 px, 3 rows + full-width pill button, in flow below the photo | fade up 24 px, 0.9 s, delay 1.2 s (load) | — |

Hero is not `sp-reveal`ed; the load animations are plain CSS keyframes gated by `html.sp-js:not(.sp-no-motion)` (no-JS, reduced motion, `?sp-static` and editor show the final state immediately with H1 visible).

---

## 3. Colour (reference tokens, no beige)
| Role | Hex | Share | Source |
|---|---|---|---|
| Ground (page) | `#EBF3F3` | ~65% | tok(a) base, exact |
| Card / panel white | `#FFFFFF` | ~20% | tok(a) |
| Blob pale | `#C2DBDD` → `#D8E8EC` | ~15% | tok(a) blob pale, exact |
| Blob lobe / sky accent | `#78B6D6` | first screen ≤ 3%, page ≤ 5% | tok(a) blob saturated |
| Ink (text, active tab, dark pill) | `#3C465A` | text | tok(a) --base-color |
| Muted label / hairline / time labels | `#6E8CA0` | <3% | row hex (pale blue); sits between ink and blob |
| CTA gradient (header "Book a trial" pill only) | `#4A9FC8 → #E6A0A8` | <0.5% | tok(a) CTA gradient |
| Footer ground | `#3C465A` with text `#EBF3F3` | bottom only | ink inverted |
- Contrast: ink on ground 9.0:1; `#6E8CA0` used only for ≥15 px labels on white/ground (3.6:1, labels only, never body).
- First-screen saturated share (S>0.35): target ≤ 5%, hard limit 15% (`check-first-screen.py`). The pool photos must be shot with **muted pale aqua water** (STYLE below), otherwise the hero fails; regenerate any hero photo with vivid cyan water.
- Not used by recent themes (Akira greys/violet, Kosei warm greys, Seiwa #DCE5EA/#90B4A6 sage, Hayate olive). Seiwa is also pale blue-grey: our difference is the green-tinted `#EBF3F3` ground, the sky lobe `#78B6D6` and ink-dark pills.

## 4. Typography (sans)
- Latin: **Figtree** (headings, wordmark, italic labels, numbers, nav) and **Inter Tight** (body). Both via theme.json `fontFamilies` + `fontFace` (woff2 in `assets/fonts/`, Figtree 400/400 italic/500, Inter Tight 400/500), so the editor iframe and front end match.
- CJK fallback (gothic sans, no Mincho anywhere): heading stack `"Figtree", "Noto Sans TC", "Noto Sans JP", sans-serif`; body `"Inter Tight", "Noto Sans TC", "Noto Sans JP", sans-serif`; `:lang(ja)` puts Noto Sans JP before TC. Noto Sans TC/JP subset woff2 loaded via theme.json fontFace (zh-TW/ja subsets, use the Hokuto/Hada substitute subsetting method). Because style.css will have `:lang(` rules, copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and require it.
- Weights: **400 everywhere** (Welfit is all 400, `tok(b)`); 500 only for buttons and table prices.
- Scale (theme.json presets): small 0.9375rem (15, tabs/buttons) · medium 1rem (16 body, lh 1.7 = 27.2 px, `tok(b)`) · large 1.25rem (20, hero lead/copy, lh 1.7, ls 1px) · x-large 1.625rem (26, h3, lh 50 px ≈1.92, ls 1.3 px) · xx-large clamp(2.25rem, 4vw, 3rem) (h2) · huge clamp(3.5rem, 6vw, **4.5rem**) (hero wordmark, inner page titles) — max ≥ 4.25rem ✔. Vertical section title 7.5rem is a custom size (not a preset).
- Italic labels: Figtree italic 16 px (nav, section labels), card numbers Figtree italic 30 px — replaces Welfit's Red Hat Display italic.
- CJK: headings ≈0.75× Latin size, body lh 1.85, ls .04em; fr/de `hyphens: auto`. No uppercase transforms (Welfit has none).

## 5. Header (nav centred)
Height **89 px**, padding 20 px 0, bg = ground `#EBF3F3`, no border, sticky (`tok(c)`). Grid `1fr auto 1fr`: left = text logo "Umi Swim School" (Figtree italic 1.25rem); centre = nav (About, Programmes, Schedule, Coaches, Fees, Stories, Access) Figtree italic 16 px, separated by 1 px × 16 px vertical rules `#6E8CA0`; right = language switcher + pill "Book a trial" 160×40, CTA gradient, white text. ≤1080 px: nav collapses to the WP navigation overlay (one menu only).

---

## 6. Home page

### First screen (1440×900)
Header 89 px; hero min-height `calc(100svh - 89px)`, max 820 px, ground `#EBF3F3`, `overflow: clip`. Layers back→front: photo blob H1/H2/H3 (z 1) → water blob (z 2, `.sp-parallax__layer`, overlapping the photo) → text and info bar (z 3). Centre top: overline + "Umi". Top right: vertical lead. Bottom: info bar. No other text. Mobile 390: header 64 px; overline + "Umi" 3rem centred; horizontal 2-line lead (1.125rem) centred; blob photo 92% width bleeding left, water blob behind/overlapping right 30%; info bar as white card in flow. **No vertical text and no absolutely positioned labels over the photo on mobile.**

### Block order
| # | Block | Purpose | Layout | Photos | Copy |
|---|---|---|---|---|---|
| 1 | Hero (KV) | identity, the pool-edge scene | see §2 | H1, H2, H3 | wordmark, 3-line lead, info bar |
| 2 | Concept "Calm first, then the lane" | why Umi teaches the way it does | Welfit concept02: white card (radius 0 10px 10px 0) bleeding off the left edge, 560 px wide, 2 paragraphs + underline link "About the school ›" (1 px underline 180 px, `tok(d)`); right: wide photo 16:9, 620 px wide, radius 10 px, inside `sp-parallax` (`--sp-par: 6%`), offset 80 px lower than the card | C1 | label + h2 + 2 paras (~110 words) |
| 3 | Day schedule strip "A day at Umi" | page_structure day-schedule: from first supported float to swimming a lane | label "Schedule" + 1 px × 40 px rule + h2 left; then a **horizontal scroll-snap strip** of 6 T2 cards (680×440, gap 80 px `tok(c)`), starting at container left and running off the right edge; `scroll-snap-type: x mandatory`, thin scrollbar `#6E8CA0`, prev/next round buttons 48 px outlined ink at top right. Children **not** revealed (horizontal row rule); the whole strip wrapper is `sp-reveal sp-reveal--up` | S1–S6 | each card: time, title, 2–3 lines |
| 4 | Programmes (T3) | Kids / Adults / Private | blob-c with sky lobe behind; vertical "Programmes" left; centred 2-line lead; pill tabs; arc-top white panel: grid 5/7 — blob-masked photo (blob-a, 420×340) left, right: h3, 1 para, 3 stage chips "Stage 1 · 2 · 3", fact row (age · class size · length), price "from €180 / 10 weeks", link | P1, P2, P3 (one per panel) | lead + ~60 words per panel |
| 5 | Coaches | who is beside you at the edge | 2 cols: left 6/12 photo T1 in `blob-b` mask with small pale blob behind its top-right; right: h2 + 1 para + **hairline list** of the 7 coaches (name · role · since year), 1 px `#C2DBDD` rules, Figtree italic year at right; `sp-stagger` on the list rows (each `sp-reveal--up`) | T1 | ~70 words + list |
| 6 | Stories | three learners | 3 white T2 cards in a row (desktop), 1 col mobile; card: number 01–03 corner, quote 1.25rem, name + "Kids Stage 2, 2025"; only card 01 carries an oval photo (R3, 160×206) — cards 02–03 text-only so the page does not repeat; `sp-stagger` + `sp-reveal--up` | R3 | 3 × ~40 words |
| 7 | Fees | prices visible on home, same as Fees page | full-width (container 1000 px) price list, 7 rows, label left / price right `white-space: nowrap; text-align: right`, 1 px `#C2DBDD` rules, on white panel radius 10 px; link "Full fees & term dates ›"; no reveal | — | 7 rows + 1 note |
| 8 | Pool & access | where, when, first step | blob photo A1 (blob-c mask, 52%, bleeding off the **right** edge — mirror of hero), left: address, hours table-less list, 2 pills "Book a trial" (ink) / "Get directions" (outlined); a pale blob behind | A1 | ~50 words |
| 9 | Footer | ink `#3C465A` ground, text `#EBF3F3`, logo, address, hours, nav, languages | — | — | — |

Home photo positions: H1, H2, H3, C1, S1, S2, S3, S4, S5, S6, P1, P2, P3, T1, R3, A1 = **16** (≥8 ✔), no repeats. Home copy ≥ 250 English words, ≥ 3 narrative paragraphs (concept 2, coaches 1, programmes panel paragraphs, access).
Section headings: label (Figtree italic 16 px `#6E8CA0`, centred or left) + 1 px × 40 px vertical rule + h2; section padding desktop **180 px top / 100 px bottom** (`tok(c)` u-pt--90 ×2), mobile 72/48 px; container 1000 px (`tok(c)`), wide 1200.

### Comparison with recent themes
| # | Akira Audit | Kosei Architects | Seiwa Furniture | Hayate Cycles | **Umi Swim** |
|---|---|---|---|---|---|
| 1 | full-bleed photo + info bar | hero | two-photo screen, pale panels | overlapping-grid hero | blob-masked photo + translucent water blob + vertical lead + info pill |
| 2 | inset scope card (circle) | recent work | about, scattered masked photos | hairline service index 01–06 | white card bleeding left + parallax 16:9 photo |
| 3 | services | hairline service index + hover thumbs | 3 outlined cards bleeding right | capsule photo + dashed road | **horizontal snap strip** of oval-photo cards (day schedule) |
| 4 | crop-mark photo pair | studio L-notch photo | price list | journal | vertical title + pill tabs + arc-top panel |
| 5 | process rows | process | featured project | workshop process | coaches: blob photo + hairline name list |
| 6 | fees | contact | contact card | contact | stories cards → fees → blob photo bleeding right + access |
Why not similar: no recent theme uses organic blob masks, a horizontal card strip, vertical type or tabs; Akira's hero is a rectangular full-bleed photo with an info bar, ours keeps only the info bar idea and puts the photo in a blob on a pale ground; Hayate's hairline index of huge names is not used (our hairline list is a small 7-row coach list inside a 2-column block).

---

## 7. Inner pages (11)
1. **About** — story since 2014 (Lena Moreau opened a 4-lane school after 12 years coaching nervous adults), how we teach (T2 cards 01–04: calm first; one coach per four; warm teaching pool; progress cards each term), the two pools. Photos C1 (head), R1.
2. **Programmes** — T3 tabs Kids (Stages 1–3, 4–12 yrs) / Adults (Beginner 1–3) / Private; each with T2 stage cards, length, class size, price from the fee table. Plus Parent & baby (6–36 months) as a fourth block below tabs. Photos P1 (head), P2, P3, S2.
3. **Timetable** (day schedule) — T3 tabs Mon–Fri / Sat / Sun; each slot a compact T2 card (time, programme, pool, coach). Mobile: stacked cards, never a table. Photo S1 head.
4. **Coaches** — 7 people: T1 group photo as page head, then **text-only T2 cards 01–07** (role, since, programmes, one sentence). Photos T1 head, S5 inline.
5. **Fees & terms** — full price table (7 items), term dates (4 terms × 10 weeks: 6 Jan, 7 Apr, 7 Jul (summer intensive), 6 Oct), sibling discount 10%, missed-lesson make-up (2 per term), cancellation (14 days before term). Photo R1.
6. **First lesson** (trial & flow) — flow 01–05 as T2 strip; what to bring; booking by phone/email links (no plugin form). Photo H2 head, R2.
7. **Stories** — 3 stories in full (~120 words each), T2 cards. Photos R3 head, S3, S6.
8. **Pool & safety** — pool facts, water temperatures, lifeguard always on deck, changing rooms (family cubicles), accessibility (hoist, step-free). Photos A1 head, R2, H3.
9. **FAQ** — T3 tabs Kids / Adults / Booking, 4 Q&As each (details/summary). Photo none, blob only.
10. **Access & contact** — address, hours, transport ("8 minutes' walk from Larkfield Central"), phone +00 0000 0000 placeholder style, email hello@umi-swim.example. Photo R2 head.
11. **News** (posts index) + single post template (blob page head, oval featured image).
All page heads: T1 blob photo bleeding left (40% wide), water blob overlap, label + title (huge preset) right, 1-line intro.

---

## 8. Fixed facts (identical on every page and in all five languages)
**Hours**: Mon–Fri 06:30–21:00 · Sat 08:00–18:00 · Sun 08:00–13:00 · closed public holidays.
**Fees (EUR)**
| Item | Price |
|---|---|
| Trial lesson, 30 min, any age | €15 |
| Parent & baby water (6–36 months), 10 weeks × 30 min | €140 |
| Kids Stages 1–3 (4–12 yrs), 10 weeks × 45 min, max 4 per coach | €180 |
| Adult beginners, 8 weeks × 60 min, max 5 | €200 |
| Private lesson 1:1, 45 min | €55 |
| Private block of 5 × 45 min | €250 |
| Lane swim club (adults), monthly | €48 / month |
**People (7)**: Lena Moreau — founder & head coach (since 2014) · Tomás Ribeiro — kids lead coach (2015) · Priya Nair — adult beginners (2017) · Amara Osei — parent & baby (2018) · Jonas Weber — lane swim club (2019) · Sofia Lindgren — private lessons & nervous swimmers (2020) · Daniel Kim — bookings & pool safety lead (2016).
**Stories (3)**: Maya, 7 — from the rail to her first width of the teaching pool in her second term · Robert, 54 — afraid of water since childhood, swam his first 25 m length in Adult Beginner 2 · Inès and baby Leo — parent & baby, now Kids Stage 1. (No promises; phrase as personal experience.)
**Flow (5)**: 01 Book a trial online or by phone → 02 Trial lesson & water check (30 min, teaching pool) → 03 Stage placement with the coach → 04 10-week term → 05 Progress card at term end.
**Day schedule (home strip & Timetable, Mon–Fri)**: 01 06:30 Early lanes (lane swim club, main pool, Jonas) · 02 09:30 Parent & baby water (teaching pool, Amara) · 03 15:30 Kids Stage 1 — first supported float (teaching pool, Tomás) · 04 16:30 Kids Stage 2 — kick board & breathing (teaching pool, Tomás) · 05 18:00 Adult beginners — float, breathe, glide (teaching pool, Priya) · 06 19:30 Adult Beginner 3 → first lengths in lane 1 (main pool, Priya & Sofia). Sat: 08:00–13:00 kids classes, 14:00 private lessons, 16:00 adult beginners. Sun: 08:00–13:00 family swim + private lessons.

---

## 9. Photos (18, IMAGERY = photo) — Grok, one at a time, read each
**STYLE** (identical for all): `Bright high-key documentary photograph, soft natural daylight from high windows over an indoor swimming pool, muted pale aqua water with low saturation, pale blue-grey and white tiles, calm unposed moment, gentle shallow depth of field, slightly desaturated cool tones, 35mm lens, eye level, modern international setting, diverse people, no text, no logos, no signage, no numbers, no brand marks, no Japanese elements`
| ID | Subject / composition | Used on (page · block) | Home |
|---|---|---|---|
| H1 | Coach crouching at the pool edge, hand near a 6-year-old who holds the rail and looks up, water at chest; subject in left-centre, calm water right (KV) | Home hero slide 1 | ✔ |
| H2 | Coach's hands supporting a child's back in a float, close, from the side | Home hero slide 2 · First lesson head | ✔ |
| H3 | Adult swimming freestyle in a lane, low angle from the deck, lane rope foreground | Home hero slide 3 · Pool & safety | ✔ |
| C1 | Wide empty pool hall at morning, high windows, still water, lane ropes (16:9) | Home concept (parallax) · About head | ✔ |
| S1 | Adult pushing off the wall in an early lane, splash minimal | Home strip 01 · Timetable head | ✔ |
| S2 | Parent holding a baby in the teaching pool, both smiling | Home strip 02 · Programmes (parent & baby) | ✔ |
| S3 | Child gliding with a pale kick board, coach walking alongside in water | Home strip 03 · Stories | ✔ |
| S4 | Child with goggles blowing bubbles, face at the surface, coach beside | Home strip 04 | ✔ |
| S5 | Adult beginner with a foam noodle, coach guiding at arm's length | Home strip 05 · Coaches | ✔ |
| S6 | Two adults resting at the wall at the end of a lane, smiling, goggles up | Home strip 06 · Stories | ✔ |
| P1 | Four children sitting on the pool edge, legs in water, coach facing them | Home programmes Kids · Programmes head | ✔ |
| P2 | Small adult group standing waist-deep in the shallow end, listening | Home programmes Adults · Programmes | ✔ |
| P3 | One-to-one: nervous adult holding the rail, coach beside in water | Home programmes Private · Programmes | ✔ |
| T1 | Coaching team of 7 standing on the pool deck in plain pale polo shirts, relaxed | Home coaches · Coaches head | ✔ |
| A1 | Bright reception area with plants, folded towels, glass view to the pool | Home access · Pool & safety head | ✔ |
| R1 | Still life: pale kick boards and pull buoys stacked on a bench by the pool | About · Fees | |
| R2 | Clean bright family changing cubicle / corridor with benches | Pool & safety · First lesson · Access head | |
| R3 | Parent wrapping a child in a towel on a poolside bench after the lesson | Home stories card 01 · Stories head | ✔ |
Rules: webp ≤300 KB, ≤2000 px; regenerate if text/logos/numbers, warped hands or faces, or vivid cyan water appear. Masks are CSS only (no cut-outs).

---

## 10. Scroll effects (sp-scroll, copy assets as-is)
CSS vars: `--sp-dist: 30px` (Welfit y30, `tok(g)`, ≤30 ✔), `--sp-dur: .9s` (Welfit section fade 0.9 s), easing `cubic-bezier(.25,.46,.45,.94)` (≈Power2.out).
| Effect | Class | Where | Source (Welfit) trigger / time / easing |
|---|---|---|---|
| Section fade-up + stagger | `sp-reveal sp-reveal--up` on section heads, the strip wrapper, programmes panel; `sp-stagger` parent on coach list rows and story cards | home 2–6, inner T2 card lists (vertical lists only) | ScrollTrigger start "top 50%", autoAlpha 0→1 + y 30→0, 0.9 s, second item +0.2 s |
| Lead line mask | `sp-reveal sp-reveal--mask` on the 2-line programmes lead, concept h2, stories h2 | home 2, 4, 6; inner page intros | copy spans y30 + clip wipe 0.6 s stagger 0.05, Power2.out |
| Parallax | `sp-parallax` | see §11 | concept02 image y −5%→+5%, scrub 1.5 |
Not revealed: hero, info bar, fees table, forms, legal text, children of the horizontal strip. Welfit's pinned horizontal track is replaced by a native scroll-snap strip (no pin, no scroll listener).

## 11. Parallax (required)
- **Primary — home concept block (2)**: wrapper Group `.umi-concept__photo.sp-parallax` (radius 10 px, `overflow: clip`, 16:9), direct `img` = **C1**, `--sp-par: 6%` desktop, `--sp-par: 5%` mobile (≥6 px displacement on a ~220 px tall mobile image ✔). Foreground: the white text card is **outside** the parallax wrapper. Reference: Welfit concept02 image −5%→+5% scrubbed.
- **Secondary — hero water blob**: hero Group gets `sp-parallax`; the water blob is `.sp-parallax__layer` (decorative SVG, `aria-hidden`), `--sp-par: 8%` desktop / 6% mobile. Text and info bar are not inside the layer. Reference: Welfit's slow-moving gradient blob behind the hero.
- Both static under reduced motion, `?sp-static`, and in the editor. Verify with `check-parallax.mjs` (desktop + mobile).

## 12. Responsive rules
- 390 px first screen: no vertical text, no absolutely positioned labels overlapping text; wordmark, lead, blob photo, info card stack in normal flow. Vertical section titles become horizontal below 1200 px.
- Price list at ≥782 px: full container width (1000 px), two columns `1fr auto`, price cell `white-space: nowrap; text-align: right`, never clipped at 800 and 1280. Below 782 px: each row stacks (item, then price on its own line right-aligned).
- Every table (timetable, fees, hours) becomes stacked cards / definition rows on mobile. The horizontal strip on mobile: cards 86vw wide (oval 140×180 on top, text below), snap, no page overflow (strip has its own `overflow-x: auto`, section `overflow: clip`).
- Blobs never cause horizontal scroll (`overflow: clip` on every section with a blob).

---

## 13. Similarity table (target ≈80%)
| Dimension | Welfit (reference) | Umi (this theme) |
|---|---|---|
| Ground | #EBF3F3 ~65% | #EBF3F3 ~65% |
| Blob / card | #C2DBDD→#D8E8EC ~20%, white ~20% | same values, same shares |
| Saturated accent | #78B6D6 ≈0.1% first screen, ≈5% mid | #78B6D6 ≤3% first screen, ≤5% page |
| Ink | #3C465A | #3C465A |
| Body | 16 / 27.2, weight 400 | 16 / 27.2 (Inter Tight 400) |
| h3 | 26 / 50, ls 1.3 | 26 / 50, ls 1.3 (Figtree 400) |
| Hero lead | 20 / 49, ls 4, vertical | 20 / 49, ls 4, vertical (desktop) |
| Card number | 30 px italic | 30 px Figtree italic |
| Vertical section title | 120 px | 7.5rem (120 px) |
| Wordmark | ~64 px italic | 4.5rem (72 px) Figtree italic (≥4.25rem rule) |
| Header | 89 px, italic nav with 1 px rules, pill 160×40 | same |
| Container / section padding | 1000 px; 180 / 100 px | 1000 px; 180 / 100 px |
| Card | white, r10, 0 8px 32px rgba(60,70,90,.08), gap 80 | same |
| Photo shapes | blob ≈1.26:1 bleeding left; oval 280×360 (7:9) | blob 1.26:1 bleeding left; oval 220×283 (7:9) |
| Overlap | pale blob over photo's right half | water blob over photo's right ~35% |
| Tabs | 900×60 pill, active ink + triangle | same |
| Panel | arc top ~200 px | 200 px arc top |
| Diagonal hairline | ≈100×95 px, 1 px | 100×95 px, 1 px ink 40% |
| Hero motion | scale 1.05→1, blur 10→0, 1.2 s stagger 0.4; lead wipe 1.4 s stagger 0.2 | same (CSS keyframes) |
| Scroll motion | y30 fade 0.9 s, stagger 0.2; parallax ±5% | sp-reveal--up 30 px 0.9 s, sp-stagger; sp-parallax 6% |
| Imagery | high-key documentary interior photos | high-key documentary pool photos |
| Differences (by design) | serif Mincho, pinned horizontal track, pink CTA prominence | sans (row), native snap strip, CTA gradient only in header pill |

## 14. Home acceptance checklist
1. First screen at 1440: blob-masked H1 bleeding off left, translucent water blob visibly overlapping its right side, "Umi" wordmark centred top, vertical 3-line lead top right, white info pill at the bottom. Saturated share ≤ 15% (target ≤ 5%).
2. 390 px: no vertical text, no overlaps; info bar is a stacked card; no horizontal overflow.
3. Hero slides crossfade H1→H2→H3 with blur→sharp on `?sp-motion`; `?sp-static` shows H1 sharp.
4. Concept photo C1 parallaxes (≥6 px, desktop + mobile), reduced-motion 0.
5. Day schedule strip: 6 white cards, oval 7:9 photos, diagonal hairline + italic numbers 01–06, times 06:30…19:30 matching §8, scroll-snap, extends off the right edge.
6. Programmes: vertical 120 px title at the left edge (desktop), pill tabs working (keyboard too), arc-top panel, prices match §8.
7. Coaches list 7 names exactly as §8; stories 3; fees 7 rows, price column nowrap right at 800 and 1280, full container width.
8. ≥8 home image positions (16), no repeated photo on the page, no text in photos.
9. ≥250 English words, ≥3 narrative paragraphs; only one top menu; header centred nav.
10. Fonts identical in editor and front end (Figtree / Inter Tight; zh-TW/ja Noto Sans TC/JP), max preset 4.5rem.
11. At least 3 sections reveal on scroll (`sp-reveal--up`, `sp-reveal--mask`), none left transparent at page bottom.
