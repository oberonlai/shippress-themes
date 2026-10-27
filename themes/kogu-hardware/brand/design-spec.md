# Kogu Hardware: design spec (stage 1, binding for implementation)

Slug `kogu-hardware`, neighbourhood hardware store, **type `store`** (WooCommerce block templates styled, demo products, checkout works; theme still renders with WooCommerce off). Row b14-4: archetype asymmetric-masonry, hero text-left-photo-right *(realised as a full-bleed photo with the text on the left, the hand on the right — see KV)*, nav top-bar, first_screen full-bleed-photo-info-bar, page_structure audience-gateway, font_direction **sans**, IMAGERY **photo**.

Reference (one site, not used by any earlier theme): **Good2Garden — https://www.good2garden.com/** (exterior & garden works, Kobe; S5-Style). Measurements: `brand/reference-tokens.md` (every number below that says "ref" comes from there). Screens: `brand/ref/`. We borrow structure, technique, colour relationships, motion and the key-visual concept. We do **not** copy photos, text, logo or the page as a whole.

Fixed brand facts (every page, every language; brand.md must repeat them verbatim):
- **Kogu Hardware**, opened **1987** by **Mart Kogu** on **14 Alder Row, Wrenfield** (fictional town, international-neutral). Run since 2014 by his daughter **Liis Kogu**. ("Kogu" is used as the family name; no Japanese elements anywhere.)
- **1,248 drawers** behind one counter. Repair visits within **3 km**.
- Hours: **Mon–Fri 7:30–18:30 · Sat 8:00–17:00 · Sun closed**. Trade counter opens with the shop (7:30).
- Phone **(555) 014-1987** · email **counter@koguhardware.example**.
- Currency **USD ($)** in every language; never converted.

---

## 1. Signature techniques (three, all obvious at a glance)

### T1. Hairline ruled 3-column grid with mixed-ratio photos centred in the cells (ref "Works", scroll-g2g-1800/2800)
- **Reference:** full-bleed grid (edge to edge, no outer margin), three equal columns 480px at 1440; 1px `#141811` rules on the top of the grid and on the right/bottom of every cell (so the cells read as a ruled ledger); cell padding 70px 75px; one photo per cell, width 329px, ratios **3:4, 3:2, 2:3 mixed on the same row**, vertically centred inside a fixed-height photo area, so the row looks uneven; below the photo, centred: an underlined small area label, a 15px title on two lines, a muted tag line. Hover tints the cell `#EEEEE7` (0.3s). The section title sits above the top rule, left at the 75px gutter: EN word 35px + muted JA word 13px inline to its right.
- **Ours — home block 2 "Who comes in" (the audience gateway) and home block 6 "From the drawers" (3 products).**
  - Geometry (1440): alignfull, `display:grid; grid-template-columns:repeat(3,1fr)`, `border-top:1px solid #141811`; each cell `border-right:1px solid #141811; border-bottom:1px solid #141811` (last cell no right rule), padding `70px 75px 64px`. Photo area height **460px**, `display:flex; align-items:center; justify-content:center`. Photo width **329px** (≈68.5% of the cell), radius 0. Ratios per row, left to right: **3:4 · 3:2 · 2:3** (gateway), **2:3 · 3:4 · 3:2** (drawers, so the two rows don't repeat the same rhythm).
  - Under the photo (gap 32px), centred: underlined label (Manrope 0.8125rem, 1px ink underline, padding-bottom 3px) = audience or drawer number ("Home fixers", "Trade", "Makers & schools"; drawers: "Drawer 214", "Drawer 088", "Drawer 301"); title Instrument Sans 1rem/1.8 two lines max; tag line Manrope 0.8125rem `#6B6D67` ("#hinges #taps #keys"). Whole cell is one link; hover background `#EEEEE7` 0.3s `cubic-bezier(.25,.46,.45,.94)`.
  - Title row above the grid: left 75px, "Who comes in" Instrument Sans 2.1875rem/400, then inline (gap 12px, baseline) a muted sub-label Manrope 0.8125rem `#858781` "to the counter". Under the grid, centred, the underlined "View more →" button (see Decoration).
  - Tablet 782–1099: same 3 columns, cell padding 48px 32px, photo width 78%. Mobile <782: **one column**, each cell full width with only a bottom rule, padding 48px 20px, photo width 82%, photo area height auto (ratios kept, still varied cell to cell).
- **Must not be diluted:** the rules must be 1px **ink `#141811`** (not grey, not hidden on desktop), the grid must be **full-bleed** (rules touch both viewport edges), and the three ratios must be visibly different on one row. No card shadows, no radius, no background boxes.

### T2. Asymmetric "tall portrait left + small landscape floating top-right + text column offset down" (ref About, scroll-g2g-900)
- **Reference:** 1440 wide. Big portrait **500×750 (2:3)** at x=75 (≈34% of the width), radius 0. Small landscape **260×184 (1.41:1)** at x=1105, its top aligned with the portrait's top. The text column starts at **x=728**, width **637px**, and begins ≈**300px below** the top of the portrait (i.e. under the small photo). Heading 20px/500/1.8/ls .1em (2 lines), gap 56px, body 15px/2.3; underlined "View more →" under the text. Lots of empty ground between the photos — that emptiness is the technique.
- **Ours — home block 3 "Since 1987" (the counter story).** Same geometry with CSS grid on a 1440 canvas: `grid-template-columns: 75px 500px 153px 377px 260px 75px` (sums to 1440; scale with `fr`/% below 1440). Portrait **C1** (2:3) spans rows 1–3 in col 2; small landscape **C2** (1.41:1) in col 5, row 1; text in cols 4–5 (width 637px), row 2, `margin-top: 116px` below C2 (≈300px below portrait top). Text: heading Instrument Sans 1.25rem/500/1.8 two lines ("One counter, one thousand two hundred / and forty-eight drawers."), gap 48px, three paragraphs Manrope 1rem/1.9 (≈150 words), then "Meet the counter →" underlined button to About.
  - Mobile <782: portrait full width minus 40px gutter (2:3 capped at 70svh height, `object-fit:cover`), then the small landscape **right-aligned at 62% width** with `margin-top:-48px` overlapping the portrait bottom edge (keeps the asymmetric float; it is in normal flow with a negative margin, not absolute), then the text. No absolute positioning.
- **Must not be diluted:** the portrait must be tall 2:3 and ~34% wide, the small photo must be small (≤ 18% of the width) and float high on the right with empty ground between it and the portrait, and the text must start clearly lower than both photos' tops.

### T3. Split service stage: dark half with centred label + title + small overlapping photo, full-bleed photo half (ref Service, scroll-g2g-4200/6000)
- **Reference:** 50/50 panels 100dvh high; left half dark (`#141811`, the next panel a dark green), centred: small "Service" 15px white, gap ~80px, JA line 15px + EN title ~48px white; a small portrait photo **240×320** overlaps the title from below, centred in the dark half; underlined "View more →" in white under it. Right half: one full-bleed photo 720×900. Panels swap as you scroll (sticky stage).
- **Ours — home block 4 "At the counter" (three services):** three panels, each `min-height: min(100svh, 900px)`, `display:grid; grid-template-columns:1fr 1fr`. Left half dark, right half photo (`object-fit:cover`, full height). Left content centred: "Service 0X" Manrope 0.9375rem white 80% opacity; gap 72px; one-line sub-label Manrope 0.9375rem white; title Instrument Sans **3rem**/1.15/400 white; then the small photo **240×320 (3:4)** centred with `margin-top:-18px` so it overlaps the title's last line (the title sits above in z-order: `position:relative; z-index:1` on the title); gap 48px; white underlined "View more →".
  - Panel 1 "Keys & locks" — dark `#141811`; big photo **S1**; small photo **PR6** (padlock).
  - Panel 2 "Repairs & how-to" — dark `#4E4B4A` (charcoal); big photo **S2**; small photo **PR4** (washer kit).
  - Panel 3 "Cut to size & tool hire" — dark `#141811`; big photo **S3**; small photo **PR5** (folding rule).
  - **Stacking (CSS only, replaces the ref's GSAP swap):** at ≥960px every panel is `position: sticky; top: 0`, so each next panel slides up over the previous one (the "stage swap" read). Parent and ancestors use `overflow: clip`, never `hidden`. No JS, no scroll listener.
  - Mobile <960: not sticky; each panel stacks: photo first (4:5, full width), then the dark block (padding 72px 24px) with the small photo overlapping the title; title 2.25rem.
- **Must not be diluted:** the dark halves must be truly dark (`#141811` / `#4E4B4A`, white text), 50/50 with a full-height photo, and the small photo must overlap the title (not sit beside it).

### Supporting detail (not a signature): underlined arrow button
"View more →" = Manrope 1.0625rem (17px ref), ls 0.03em, `border-bottom:1px solid currentColor`, padding-bottom 12px, width 160px, text left / 20×16 arrow right; on hover the arrow slides out right and back in from left, 0.3s `cubic-bezier(.445,.05,.55,.95)` (ref). No filled buttons anywhere on the pages (WooCommerce add-to-cart/checkout buttons are the only filled ones: ink `#141811`, white text, radius 0).

### Continuation to inner pages (binding; each signature on ≥4 inner pages counting Home)
| Page | T1 | T2 (portrait + small) | T3 panel (big + small) |
|---|---|---|---|
| About | — | C1 + C2 (mirrored) | — |
| Home fixers | PR1 · PR2 · PR3 | G1 + A1 | S2 + PR4 (`#4E4B4A`) |
| Trade | PR3 · S3 · I2 | G2 + C2 | S1 + PR6 |
| Makers & schools | S3 · PR5 · I3 | G3 + PR2 | — |
| Services & prices | — | — | S1+PR6 · S2+PR4 · S3+PR5 |
| The drawers (shop) | product grid | — | — |
| Single product | ruled gallery cell | — | — |
| How to ask | — | A1 + PR2 | — |
| Visit | — | I1 + C2 | P1 big + PR6 small (dark `#141811`, hours in the dark half) |
| Stories index / single | ruled 3-col cards | single: featured image as portrait + C2 small | — |
=> T1 on 6 inner pages, T2 on 7, T3 on 4 inner pages (+ Home). Page heads: see §6.

---

## 2. Key visual concept

### (1) Reference first screen
Good2Garden opens on a **full-bleed documentary close-up of a bare hand laid on moss-covered tree bark** (1440×908): the hand enters from the bottom right, a white shirt cuff at the bottom right corner, light raking across the knuckles; the left third falls away into **soft green bokeh**; the whole frame is dark and deep. Story: *"the garden is the scenery of a life"* — touch, craft, care; a person's hand on the material. Signature motion: a white loader with two centred lines, then a **muted looping video** of the hand fades in; the kicker (JA 20px) + one-line EN headline 64px sit **bottom-left** in white (left 97px, bottom 42px); the header is transparent over the photo with white nav and an outlined phone pill (135×38, radius 9999).

### (2) Our translation (same composition, same motion idea, same image type = documentary photo)
**H1 — a hand lifting a solid-brass hinge off a pegboard hook in the shop**: the hand and forearm enter from the bottom right, a rolled charcoal work-shirt cuff at the bottom right corner, fingers at 55–85% x / 20–70% y, side window light raking across the knuckles and the brass; behind it a **pegboard and drawer wall in shallow focus**, the left third dissolving into **warm grey bokeh** of out-of-focus screws, drawer pulls and tins; overall dark charcoal and wood. Story: *"we hand you the exact part — and show you how to fit it."* Motion: the photo moves slower than the page (`sp-parallax`, the scroll-driven stand-in for the ref's living video), and the kicker + headline fade up once after load. Text bottom-left in white, transparent header over the photo, outlined phone pill. Directly under the photo, the info bar (row first_screen).

### (3) KV checklist (all six must be implemented and visible on the 1440×900 first screen)
| # | Reference element | Our equivalent | Position | Motion | Which image |
|---|---|---|---|---|---|
| 1 | Hand resting on tree bark, centre-right, light on knuckles | Hand lifting a brass hinge from a pegboard hook, light on knuckles and brass | right 55% of the photo; fingers 55–85% x, 20–70% y | `sp-parallax` on the Cover background, `--sp-par: 10%` (mobile 6%) | **H1** |
| 2 | Green bokeh at left, dark vignette | Warm-grey bokeh of out-of-focus screws, drawer pulls, tins; charcoal vignette (photo + `rgba(20,24,17,.28)` overlay at left via Cover gradient) | left 0–35% | moves with the background (parallax) | **H1** |
| 3 | White shirt cuff entering bottom right | Rolled charcoal work-shirt cuff entering bottom right | x 62–82%, bottom edge of the photo | parallax with bg | **H1** |
| 4 | Two-line text bottom-left: JA kicker 20px + EN headline 64px, white | Kicker Manrope 1.25rem/500 ls .05em + H1 Instrument Sans 4.25rem/400/1.4 ls .02em, white, one line at 1440 | left 97px, bottom 48px above the info bar | fade-up once on load: opacity 0→1 + translateY 16px→0, 1s `cubic-bezier(.165,.84,.44,1)`, delay 0.4s (CSS animation; off under reduced-motion and `html.sp-no-motion`) | — |
| 5 | Transparent header over the photo, white nav, outlined phone pill | Same: 75px transparent bar, white wordmark + nav 15px, outlined pill "(555) 014-1987" 1px white 60%, radius 9999, 150×38; cart link icon | top, full width | becomes ground `#F7F6F0` + ink text after 80px of scroll **only via CSS** `@supports (animation-timeline: scroll())`; otherwise the header is `position:absolute` and scrolls away (no scroll listener) | — |
| 6 | Loader lines before the hero (story beat "first, the promise") | Info bar under the photo carries the promise as plain ruled text: "Open Mon–Sat · 7:30–18:30" · "Keys cut while you wait" · "14 Alder Row, Wrenfield" · underlined "How to ask →" | bottom of the first screen, full width, 72px | none (static; it is the first thing read under the photo) | — |
H1 is listed in §8 and is used only on the Home hero.

---

## 3. Colour (ref token (a); ≤ ±5% lightness unless stated)

| Role | Hex | Source token | Use | Share |
|---|---|---|---|---|
| Ground | `#F7F6F0` | ref ground `#F7F6F0` (exact) | page ground, info bar, header after scroll | ~65% |
| Ink | `#141811` | ref ink `#141811` (exact) | text, **all 1px rules**, T3 panels 1 & 3, footer, filled Woo buttons | ~10% text/rules + ~12% panels/footer |
| Charcoal | `#4E4B4A` | row hex; replaces the ref's second panel colour (dark green ≈`#2E3B31`) | T3 panel 2, Trade T3 panel, hover on filled buttons | ~5% |
| Hover | `#EEEEE7` | ref hover `#EEEEE7` (exact) | T1 cell hover, price-row hover | <1% |
| Muted label | `#858781` | ref muted `#858781` (exact) | decorative sub-labels next to titles (13px+) only | <1% |
| Meta text | `#6B6D67` | ref muted −12% lightness (**exception**: AA 4.6:1 on ground for small meta text; `#858781` is 3.5:1) | tag lines, dates, captions | <1% |
| Brass dot | `#A9823A` | none in ref (it has no accent); taken from the hero hinge | the 6px dot before "Open" in the info bar, focus ring | <0.5% |
| White | `#FFFFFF` | ref hero type | type on photo and dark panels | — |
- Why not cream: `#F7F6F0` is the ref's own ground (chroma ≈ 3%), almost white; we keep it exact for the 80% similarity target. No other warm tint anywhere.
- Contrast: ink on ground 17.6:1; white on `#4E4B4A` 8.5:1; white on `#141811` 18:1.
- **First-screen saturated share: hard cap 15% (check-first-screen.py), target ≤ 8%** (ref 6.6%). Achieve by grading H1 muted (brass is the only warm saturated element, the bokeh warm-grey not orange) and no coloured UI over the photo.

## 4. Type, header, spacing, decoration (ref tokens (b)(c)(d)(f))

**font_direction = sans.** Latin headings **Instrument Sans** (400, 500), Latin body **Manrope** (400, 500, 600). zh-TW **Noto Sans TC**, ja **Noto Sans JP** (gothic sans) for both headings and body — no Mincho anywhere.
- Stacks: heading `"Instrument Sans", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`; body `"Manrope", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`; `:lang(ja)` puts Noto Sans JP first, `:lang(zh-TW)` Noto Sans TC first.
- Load **only through theme.json `fontFamilies` + `fontFace`** (woff2 in `assets/fonts/`, Latin subsets + zh-TW / ja subset files made the Hokuto/Hada way), so the editor iframe and the front end show the same faces. Because style.css uses `:lang()`, copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it. check-editor-fonts.mjs must pass in en and zh-TW.

Sizes (theme.json presets; px at 1440):
| Preset | Value | Use | Ref token |
|---|---|---|---|
| small | 0.8125rem (13px) | sub-labels, tags, meta | JA sub-label 13px |
| base | 1rem (16px), lh 1.9, ls .01em | body | body 15px / 2.3 (EN needs less leading) |
| medium | 1.25rem (20px), 500, lh 1.8, ls .05em | hero kicker, T2 heading | kicker 20px/500; About heading 20px/500/1.8 |
| large | 1.5rem | story titles, price-list group heads | — |
| x-large | 2.1875rem (35px), 400, lh 1.3, ls .02em | section titles ("Who comes in") | section EN 35px/400/ls .02em |
| xx-large | 3rem (48px), 400, lh 1.15 | T3 panel titles, inner page heads at <1100px | panel title ≈48px |
| huge | **4.25rem (68px)**, 400, lh 1.4, ls .02em | hero H1, inner page heads ≥1100px | hero 64px (+4px to meet the ≥4.25rem rule) |
- Hero H1 fluid: `clamp(2.5rem, 4.8vw, 4.25rem)`. No uppercase transforms (ref Title Case labels). Weights 400 for display (ref).
- CJK: headings ≈0.75× (hero `clamp(1.9rem, 3.6vw, 3.2rem)`), body lh **1.85**, ls .06em; fr/de `hyphens:auto` on body and headings.

Header: one top menu. Wordmark "Kogu Hardware" Instrument Sans 1.375rem/500 left at x=24 (ref logo x24); nav right, Manrope 0.9375rem white over the hero: **About · Who comes in ▾ (Home fixers / Trade / Makers & schools) · Services · The drawers · Stories · How to ask · Visit**, then the outlined phone pill and a cart icon with count. Height 75px. Over non-hero pages the header is on ground with ink text and a 1px ink bottom rule. Mobile <960: wordmark + phone icon + two-line menu icon → full-screen ground overlay, links 1.5rem stacked.

Footer: ink `#141811`, white text: wordmark, address, hours (3 lines), phone, email; nav repeat in two columns; bottom line "© Kogu Hardware, Wrenfield" 13px. 1px white 20% rules between rows. Padding 120px top / 48px bottom.

Spacing (ref (c)): side gutter `clamp(20px, 5.2vw, 75px)`; section padding-top **140px** desktop (ref 130–160), bottom mostly 0 because the next section's top padding carries the rhythm; between the gateway grid and the next section 160px; mobile section top 88px. Container: full width with the gutter; text measure max 637px (ref About text width).
Radius **0** everywhere (photos, buttons, inputs, product cards), except the phone pill (9999px). Shadows none. Rules always 1px ink.

## 5. Home page

### First screen (1440×900)
- Header 75px transparent over the photo (KV 5).
- Photo **H1** as a Cover, full bleed, height `calc(100svh - 72px)` (= 828px at 900; min 560px), `sp-parallax` with `--sp-par:10%`; gradient overlay left→right `rgba(20,24,17,.42) 0%, rgba(20,24,17,0) 45%` so the white type reads; no other overlay.
- Text bottom-left (KV 4), normal flow inside the Cover (content position bottom-left, padding `0 0 48px 97px`): kicker "A neighbourhood hardware store on Alder Row, since 1987." then H1 **"The right part, and how to fit it."**
- **Info bar** 72px, ground `#F7F6F0`, 1px ink bottom rule, four cells split by 1px ink rules: (1) brass 6px dot + "Open Mon–Sat · 7:30–18:30" (2) "Keys cut while you wait" (3) "14 Alder Row, Wrenfield" (4) underlined "How to ask →" (right aligned). Manrope 0.9375rem ink. Differs from Shizuku's info bar: no numbers/progress, no pill button, sits under a full-height photo with no wordmark band above.
- Mobile 390: header 64px; photo `height: 72svh`, `--sp-par:6%`; kicker 1rem and H1 2.5rem, both in flow at the bottom-left with 20px padding — **no vertical text, no absolutely positioned labels**; the info bar becomes 2×2 cells (rules between) and may fall partly below the fold.
- Forbidden on the first screen: tables, forms, search boxes, filled buttons, any centred giant word.

### Block order
| # | Pattern | Purpose | Layout / photos | Copy (en) |
|---|---|---|---|---|
| 1 | `front-hero` | KV + promise | §5 first screen; **H1** | kicker 12 words + H1 7 words + info bar |
| 2 | `front-gateway` | audience gateway: who comes in | **T1**: G1 (3:4) "Home fixers" · G2 (3:2) "Trade" · G3 (2:3) "Makers & schools"; each links to its page | title + 3 × 25 words |
| 3 | `front-counter` | the store story | **T2**: C1 portrait + C2 small; heading + 3 paragraphs (founded 1987 by Mart Kogu; Liis since 2014; why one counter and 1,248 drawers; "we'd rather show you how") | ~150 words |
| 4 | `front-services` | what we do at the counter | **T3** three sticky panels: S1+PR6, S2+PR4, S3+PR5; the dark half holds only label, sub-line (max 18 words), title, small photo and View more | 3 × 18 words |
| 5 | `front-prices` | counter prices (the 7 fixed services) | full-width ruled price list (§7), title row T1-style; "All prices and how they work →" to Services | 7 rows + 30-word note |
| 6 | `front-drawers` | products (WooCommerce) | **T1** ruled grid: PR1 (2:3) · PR2 (3:4) · PR3 (3:2); label "Drawer 214/088/301", name, price; "Open the drawers →" to shop. With WooCommerce: the three featured products in the same markup; without: static images linking to /shop | 3 × 12 words |
| 7 | `front-floor` | breathing space + number | full-bleed **P1** shop floor 21:9, `sp-parallax` `--sp-par:8%`; bottom-left white text (in a non-moving inner group): "1,248 drawers. One counter." (number with `sp-count`) | 5 words |
| 8 | `front-stories` | proof by stories (no testimonials grid) | three ruled rows (1px ink top/bottom rules, full width with gutter): left col 20% underlined label (Home fixers / Makers / Trade), middle title 1.5rem + one-line excerpt, right "Read →"; text only (images live on the posts) | 3 × 30 words |
| 9 | `front-ask` | how to ask + visit | **A1** 3:4 at left (cols 1–5 of 12, gutter), right cols 7–12: title "How to ask", four ruled lines numbered 01–04 small (§7 process), then hours (3 lines) and address, phone, "Plan your visit →" | ~90 words |
| 10 | footer | — | ink footer (§4) | — |
English home ≥ 250 words with narrative paragraphs in #3 (three) and #9 (one) plus story excerpts. CJK ≥ 500 characters.

Home photo positions (17, all different): H1 · G1 G2 G3 · C1 C2 · S1 PR6 S2 PR4 S3 PR5 · PR1 PR2 PR3 · P1 · A1.

### Comparison with the most recent themes
| # | Budou Academy | Hibiki Speech | Renkei Forum | Shizuku Filter | **Kogu Hardware** |
|---|---|---|---|---|---|
| 1 | tile-collage hero + slanted gradient H1 | torn-edge photo pair hero | ellipse + marquee strips KV | wordmark band → photo → info bar | **full-height documentary photo, text bottom-left, ruled info bar** |
| 2 | about | welcome | highlight-bar H2s | WHY rail + crosshair | **audience gateway in a full-bleed ruled 3-col grid, mixed photo ratios** |
| 3 | day schedule | difficulty | speakers in ellipse | FILTER full-bleed | **asymmetric portrait + floating small photo + offset text** |
| 4 | 3 features | method (vertical heading) | programme dome | rewards capsules | **sticky dark/photo split service stage** |
| 5 | programmes | people | … | schedule | **ruled price list** |
| 6 | fees | proof | … | makers | **ruled product grid** |
| 7 | faculty | fees | … | stories | **full-bleed parallax floor photo + count** |
| 8 | alumni | notes | … | FAQ | **text-only ruled story rows** |
| 9 | visit | close | … | back CTA | **how to ask + visit** |
Why not alike: no collage, torn edges, ellipses, marquees, capsules, rail/crosshair, vertical headings or gradient type. Kogu's vocabulary is 1px ink ledger rules, full-bleed edges, square photos of mixed ratio and dark/photo halves. The only shared idea with Shizuku is "photo + info bar" (it is the row's first_screen); ours differs in height (full screen vs. banded), content (hours/address vs. funding numbers), no pill button, and text on the photo.

## 6. Inner pages (10 + WooCommerce)
Page head on every page (no photo hero): ground, padding 160px top (75px header + 85px), left gutter: muted sub-label (small, `#858781`) above, then the title Instrument Sans **4.25rem**/400/1.4 (3rem <1100, 2.25rem mobile), then a 1px ink rule full-bleed 56px below. Then the signatures per §1 table. No sidebar anywhere.

1. **About — "Since 1987"**: T2 mirrored (C1 right, C2 top-left), 3 narrative sections (opening on Alder Row in 1987; the drawer system and its 1,248 numbered drawers; Liis taking over in 2014 and the repair visits); then **the counter roster**: 7 ruled rows (name 1.25rem · role · "ask about…" muted), no photos, no grid of faces.
2. **Home fixers** (`/home-fixers/`): T2 G1+A1 ("bring the broken part"); T1 grid PR1 PR2 PR3 ("drawers home fixers open most"); T3 panel (`#4E4B4A`, S2 big, PR4 small) "Repairs & how-to"; a short ruled list of 5 common jobs (sticking door, dripping tap, loose hinge, fly-screen, picture hanging) with what to bring; prices excerpt rows 1, 4, 7 (same numbers).
3. **Trade** (`/trade/`): T2 G2+C2; T1 grid PR3 S3 I2 (trade account · local delivery · boxed quantities); T3 panel (`#4E4B4A`, S1 big, PR6 small) "Trade counter from 7:30"; terms rows: account 30-day invoice, 10% off shelf prices on account, delivery within 3 km $6 (free over $60).
4. **Makers & schools** (`/makers/`): T2 G3+PR2; T1 grid S3 PR5 I3 (cut to size · tool hire · Saturday class); Saturday class facts (§7); school orders paragraph.
5. **Services & prices** (`/services/`): T3 three panels (S1+PR6, S2+PR4, S3+PR5), then the **full price list** (§7) and notes (sharpening turnaround same day; repair visits book by phone).
6. **The drawers** (Woo `archive-product`, `taxonomy-product_cat`, `product-search-results`): head + category links as underlined labels in one row (Hinges & latches · Fixings · Plumbing · Measuring · Locks); product grid = T1 ruled cells, 3 cols desktop / 2 tablet / 1 mobile; card: photo centred (display ratio by position 2:3/3:4/3:2 via `aspect-ratio` + `object-fit:contain` on ground so the product is never cut), underlined "Drawer ###", name, price, text link "Add to bag →". Result count + ordering on one ruled line above.
7. **Single product**: left: gallery inside one ruled cell (1px ink border right/bottom), product photo centred on ground; right: underlined drawer label, title 3rem, price 1.5rem, short description, quantity + filled ink add-to-cart (radius 0), line "Click & collect free · Local delivery within 3 km $6 (free over $60)". Below: tabs as ruled rows (Description · How to fit · Delivery & returns); related products = T1 grid of 3.
8. **Stories** (`home.html`, `archive.html`, `single.html`): index = T1 ruled grid of the 4 stories (featured images in cells, mixed ratios); single = T2 (featured image as the 2:3 portrait + C2 as the small photo), text column 637px, date + underlined audience label.
9. **How to ask** (`/how-to-ask/`): T2 A1+PR2; the 4 process lines as ruled rows (01–04, not a step grid); FAQ 6 questions as ruled `<details>` rows (Do you cut car keys? — no, only house and padlock keys; Can I bring a photo? yes; Do you deliver? 3 km; Returns? 30 days; Trade account? see Trade; Do you hire tools? yes, $16/day).
10. **Visit** (`/visit/`): T2 I1+C2; address, hours, phone, email; a T3 panel (ink, P1 big, PR6 small) "Parking and bikes" + directions paragraph (fictional: two bike racks, 3 min from Wrenfield Market tram stop). No map embed, no form required.
11. **Cart / Checkout / My account / Order confirmation**: page head small (3rem); summary column with 1px ink border, ground; buttons filled ink; notices with 1px ink border. **404 / search**: page head + underlined "Back to the counter →".

## 7. Fixed numbers (identical on Home, inner pages, footer, demo content and all five languages)

Counter prices (7):
| Service | Price |
|---|---|
| Standard key cut (house, padlock) | $4.50 per key |
| Security / dimple key cut (owner card required) | $14 per key |
| Sharpening: knife, scissors, chisel | $6 per blade |
| Fly-screen mesh re-fit | $22 per frame |
| Cut to size, sheet or timber | $1.50 per cut |
| Tool hire: drill, tile cutter, sander | $16 per day |
| Home repair visit within 3 km | $58 first hour |
Price list layout: ≥782px **full content width** (gutter to gutter), two columns, service left, **price column `white-space:nowrap; text-align:right`** never cut or wrapped; 1px ink rules between rows; row padding 22px 0; hover `#EEEEE7`. <782px: each row stacks (service line, then price right-aligned under it) — implemented as a table with `display:block` rows on mobile, or as ruled rows; never a horizontal scroll. No sp-reveal on the list.

Products (6, WooCommerce; categories in brackets):
| # | Product | Price | Image |
|---|---|---|---|
| 1 | Solid brass butt hinges, 75 mm, pair (Hinges & latches) — Drawer 214 | $12 | PR1 |
| 2 | Brass cabinet latch with keeper (Hinges & latches) — Drawer 088 | $18 | PR2 |
| 3 | Stainless wood screw assortment, 220 pcs, tin (Fixings) — Drawer 301 | $14 | PR3 |
| 4 | Tap washer & O-ring kit, 40 pcs (Plumbing) — Drawer 512 | $9 | PR4 |
| 5 | Beech folding rule, 2 m (Measuring) — Drawer 640 | $16 | PR5 |
| 6 | Brass padlock 40 mm with 3 keys (Locks) — Drawer 733 | $24 | PR6 |
Featured on Home: 1, 2, 3.

Policies: click & collect free; local delivery within **3 km $6**, free over **$60**; returns **30 days**, unused with receipt; trade account **30-day invoice, 10% off** shelf prices.
Saturday fixing class (Makers page): **Sat 10:00–12:00, $20, 8 places**, led by Hanna Berg.

People (7, ruled roster, no face grid): **Mart Kogu** (founder, 1987; Saturdays at the key bench) · **Liis Kogu** (owner since 2014; counter and ordering) · **Yusuf Demir** (keys & locks) · **Tomás Reyes** (repair visits) · **Priya Nair** (paint & finishes) · **Samuel Okoro** (trade counter & accounts) · **Hanna Berg** (cut-to-size room, Saturday class).

Stories (4 posts): (1) "A latch from 1962" — Home fixers, a renter on Birch Street matches a window latch from Drawer 088 (featured A1). (2) "Forty pieces for a school stage" — Makers, Wrenfield Primary's play set cut to size (G3). (3) "The tap that dripped for a year" — Home fixers, a ten-minute washer swap shown at the counter (S2). (4) "Saturday, 7:30" — Trade, a plumber's early order boxed before opening (G2). Home shows 1–3.

Process "How to ask" (4 lines): 01 Bring the old part, or a photo with a coin beside it for scale. 02 Tell us what it does and where it lives. 03 We match it from the drawers and show you how to fit it at the counter. 04 If it doesn't fit, bring it back within 30 days.

Hours, address, phone: see the top of this spec. Founded 1987. 1,248 drawers. 3 km.

## 8. Photos (18 = 12 scenes + 6 products; IMAGERY photo)
STYLE (exact string on every Grok prompt):
`documentary photograph, real neighbourhood hardware store, 50mm lens, natural window side light, shallow depth of field, slightly lifted shadows, muted desaturated grade of charcoal, warm wood, worn brass and stone white, calm unposed moment, diverse adults, modern international town, no text, no letters or numbers on labels, no logos, no brand marks, no Japanese elements`
Product shots add: `single product centred on a plain pale stone-white surface #F7F6F0, soft daylight, generous empty margin around the object, 4:5`.
Each ≤300 KB, ≤2000px, webp, 0 cutouts, one readme line each (AI-generated). Read every image; regenerate any with text, logos, broken hands or off-style.

| ID | Subject / composition | Ratio | Used on (once per page) | Home |
|---|---|---|---|---|
| H1 | hand lifting a brass hinge off a pegboard hook, hand from bottom right, rolled charcoal shirt cuff bottom-right, warm-grey bokeh of drawers left third, raking window light | 16:9 2000×1125 | Home hero | ★ |
| G1 | woman in her 30s at the counter holding a loose cabinet hinge, staff hand pointing at it | 3:4 | Home gateway; Home fixers T2 | ★ |
| G2 | plumber in work jacket lifting a boxed order of pipe fittings at the trade counter, early morning | 3:2 | Home gateway; Trade T2; Story 4 | ★ |
| G3 | teacher and two teenagers stacking cut plywood pieces by the cutting room | 2:3 | Home gateway; Makers T2; Story 2 | ★ |
| C1 | older man and his daughter behind a long wooden counter, wall of small wooden drawers behind, candid | 2:3 | Home counter; About T2 | ★ |
| C2 | close-up of rows of brass key blanks hanging on hooks | 1.41:1 | Home counter; About; Trade T2; Visit T2 | ★ |
| S1 | hands guiding a key in a key-cutting machine, fine metal shavings | 4:5 | Home T3 p1; Services; Trade T3 | ★ |
| S2 | staff showing a customer how to fit a tap washer, both hands on a tap body on the counter | 4:5 | Home T3 p2; Services; Home fixers T3; Story 3 | ★ |
| S3 | panel saw cutting a plywood sheet in a back room, sawdust in window light | 4:5 | Home T3 p3; Services; Trade T1; Makers T1 | ★ |
| P1 | wide shop floor: aisle of wooden drawer cabinets, rolling ladder, window light, nobody close | 21:9 2000×857 | Home floor band; Visit T3 | ★ |
| A1 | hand holding an old worn door latch next to a new matching one on the wooden counter | 3:4 | Home ask; Home fixers T2; How to ask T2; Story 1 | ★ |
| I1 | corner shop exterior, display window with tools, two bikes at a rack, morning | 3:2 | Visit T2 | |
| I2 | stacked plain cardboard boxes of fittings on a trolley by the trade door | 3:2 | Trade T1 | |
| I3 | workbench with clamps, hand drill and small wood project, Saturday class mood, hands only | 2:3 | Makers T1 | |
| PR1 | pair of solid brass butt hinges | 4:5 | product 1; Home drawers; Home fixers T1 | ★ |
| PR2 | brass cabinet latch with keeper | 4:5 | product 2; Home drawers; Home fixers T1; Makers T2; How to ask T2 | ★ |
| PR3 | open tin of stainless wood screws | 4:5 | product 3; Home drawers; Home fixers T1 | ★ |
| PR4 | tap washers and O-rings spread in an open palm-size tray | 4:5 | product 4; Home T3 p2; Services; Home fixers T3 | ★ |
| PR5 | half-unfolded beech folding rule | 4:5 | product 5; Home T3 p3; Services; Makers T1 | ★ |
| PR6 | brass padlock with three keys | 4:5 | product 6; Home T3 p1; Services; Trade T3; Visit T3 | ★ |
(18 images: H1, G1–G3, C1–C2, S1–S3, P1, A1, I1–I3, PR1–PR6.) Per-page no-repeat check: Home 17 (listed in §5); Home fixers G1 A1 PR1 PR2 PR3 S2 PR4; Trade G2 C2 PR3 S3 I2 S1 PR6; Makers G3 PR2 S3 PR5 I3; Services S1 PR6 S2 PR4 S3 PR5; About C1 C2; How to ask A1 PR2; Visit I1 C2 P1 PR6; Stories index A1 G3 S2 G2; story single = its featured image + C2.

## 9. Scroll effects (sp-scroll; max 3 kinds per page; hero no reveal)
| Effect | sp class | Where | Ref source & timing | Our values |
|---|---|---|---|---|
| Parallax | `sp-parallax` | **Home hero Cover (H1)**; Home floor band (P1); Visit T3 panel photo | ref hero is a looping video (living image) → scroll-driven depth | hero `--sp-par:10%` (≤781px: 6%); floor `--sp-par:8%` (mobile 6%); foreground text in a non-moving inner group |
| Fade / rise | `sp-reveal sp-reveal--up` on section titles and T2 headings; plain `sp-reveal` (fade only) on body paragraphs | Home 2, 3, 5, 6, 8, 9 titles/text; inner page bodies | ref `top`: translateY(8%)+opacity, 1s `cubic-bezier(.165,.84,.44,1)`; ref `fade`: 1.8s `cubic-bezier(.25,.46,.45,.94)`; IO once | `--sp-dist:24px` (8% capped ≤30px), `--sp-dur:1s`, `--sp-ease:cubic-bezier(.165,.84,.44,1)` for --up; paragraphs set `--sp-dur:1.8s; --sp-ease:cubic-bezier(.25,.46,.45,.94)` |
| Image wipe | `sp-reveal sp-reveal--wipe` on the `figure` (clip on the child img) | T1 grid photos (gateway, drawers), T2 photos (C1, C2), story index | ref `mask`: image revealed inside an overflow-hidden figure, 0.65s `cubic-bezier(.25,.46,.45,.94)` | built-in wipe 1.1s `cubic-bezier(.77,0,.175,1)` (spec-fixed; do not edit JS/class names) |
| Count | `sp-count` (inside the floor band text) | "1,248" | (ours; small) | default 1.2s |
Not used: marquee, stagger (ref has delay 0 on all reveals). Never on the hero, price list, forms, Woo templates' forms, or T3 sticky panels (sticky + reveal conflict). check-parallax.mjs must pass desktop + mobile.

## 10. Similarity to the reference (target 80%)
| Dimension | Reference (token) | Kogu |
|---|---|---|
| Ground / ink / hover / muted | `#F7F6F0` / `#141811` / `#EEEEE7` / `#858781` | identical |
| Dark panel | `#141811` + dark green | `#141811` + `#4E4B4A` (row colour) |
| Accent | none | brass `#A9823A` <0.5% (one dot) |
| First-screen saturation | 6.6% | ≤8% target (≤15 cap) |
| Display type | Neue Haas Grotesk Display 400, 64px, lh 1.4, ls .02em | Instrument Sans 400, 68px, lh 1.4, ls .02em |
| Section title | 35px/400 + 13px muted sub-label inline | 35px/400 + 13px `#858781` inline |
| Body | 15px/2.3/ls .1em (JA) | 16px/1.9 EN; CJK 1.85/ls .06em |
| Gutter / section top | 75px / 130–160px | 75px / 140–160px |
| Grid | full-bleed 3×480, 1px ink rules, cell pad 70/75, photo 329w mixed 3:4/3:2/2:3 | same numbers |
| About geometry | 500×750 at x75; 260×184 at x1105; text x728 w637, −300px offset | same numbers |
| Service stage | 50/50, 100dvh, dark half centred, 240×320 overlap, GSAP swap | 50/50, min(100svh,900), same centre stack, 240×320 overlap, CSS sticky stack |
| Radius / shadow | 0 / none; pill 9999 | 0 / none; pill 9999 |
| Hero | full-bleed hand-on-bark video, text bottom-left 97/42, transparent header | full-bleed hand-on-hinge photo + parallax, text bottom-left 97/48, transparent header, info bar |
| Motion | fade 1.8s, top 1s, mask 0.65s, hover 0.3s | fade 1.8s, up 1s, wipe 1.1s, hover 0.3s, parallax |
| Button | underlined "View more →" 17px, pb 12px, w160, arrow slide 0.3s | identical |

## 11. Home acceptance checklist
1. First screen = KV checklist 1–6 visible at 1440×900: H1 hand + hinge at right, bokeh left, cuff bottom-right, white kicker + 4.25rem headline bottom-left, transparent header with white nav and outlined phone pill, 72px ruled info bar with 4 cells. check-first-screen ≤15% (target ≤8%).
2. Mobile 390: no horizontal overflow, no vertical/absolute labels, headline and kicker readable in flow, info bar 2×2.
3. T1 full-bleed 1px ink grid with three visibly different photo ratios (gateway and drawers rows).
4. T2 geometry: tall 2:3 portrait ~34% at left, small 1.41 photo high right, text starting lower.
5. T3: three 50/50 dark/photo panels, small photo overlapping the title, sticky stacking ≥960px.
6. Price list: 7 rows, full width at ≥782px (check at 800 and 1280), price column nowrap right-aligned; stacked on mobile.
7. ≥8 photo positions (spec: 17), none repeated, all from §8, no text/logos.
8. Parallax on hero and floor band passes check-parallax (desktop + mobile, ≥6px; 0 under reduced-motion); reveals hidden before entry, visible after, nothing transparent at the bottom; hero has no sp-reveal.
9. Colours only from §3; no beige/cream fields beyond the ground; radius 0.
10. Fonts: Instrument Sans / Manrope + Noto Sans TC/JP via theme.json fontFace; editor = front end.
11. Numbers (1987, 1,248, hours, address, 7 prices, 6 product prices, 3 km, $6/$60, 30 days) identical on home, inner pages and in all languages.
12. ≥250 English words, ≥3 narrative paragraphs.

theme-meta.json labels: type `store`; colors.tags `neutral`, `grey`, `light`, `muted`; style `documentary`, `photographic`, `minimal`, `crafted`.
