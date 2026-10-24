# Shokutaku Dining: design spec (stage 1, binding for implementation)

Slug `shokutaku-dining`, neighbourhood restaurant (type **hospitality**, booking-led; WooCommerce declared compatible but not needed, site must work without it). Primary reference **Le Pont de Ciel** (https://pont-de-ciel.co.jp/), secondary **Pienezza** (https://pienezza.jp/, structure only: the reservation rail). Measured values: `reference-tokens.md` (cited below as **tok(a)…tok(g)**). Borrow structure, shapes, colour relationships and motion timing only. No copy, photos, logos, vertical Japanese text, Mincho/kanji type or Japanese elements.

Similarity target: about **80%** of the reference's look in colour, image presentation, motion, decoration and layout rhythm, while the content, block order and photos are our own.

Fixed brand facts (every page and all five languages use these; see section 8): Shokutaku Dining, opened **2014**, **Havenstraat 41, 3024 Rotterdam, the Netherlands** (fictional address). Chef-owner **Elena Vasquez**, co-owner and host **Tomasz Nowak**. Currency **EUR** in every language, no converted prices.

---

## 1. Signature techniques (three, all obvious at a glance, all from Le Pont de Ciel)

### T1. Arch-topped photo frames, scattered at different widths and heights (+ pill family for dishes)
- **Reference** (pont-de-ciel.co.jp, first screen and CONCEPT, tok(d)(e)): every photograph sits in an arch: semicircle top (`border-radius` = half the width), flat bottom, no border, no shadow. The hero arch is 520×800 at the right (x 770–1290 of 1440). In CONCEPT three arches float at different sizes: 320×580 (r160) 34px from the left viewport edge, 240×336 (r120) at the right around x 1050, 320×246 near the right; consecutive arches offset ≥100px vertically. The dish strip uses pills: 840×640 half-pill (`360px 0 0 360px`), 252×408 full pill (r160), 240×240 half-pill.
- **Shokutaku**: class `shk-arch` on a `core/image` (figure, `overflow:hidden`, `aspect-ratio` fixed, img `object-fit: cover`). Never `border-radius: 9999px` (gives a full ellipse on tall frames). The radius is written in `%` so the top stays a true semicircle at every width: `border-radius: 50% 50% 0 0 / X% X% 0 0` with X = (width/2)/height×100.
  - `shk-arch--hero` 520×800 (aspect 0.65) → X 32.5% (= 260px at full size)
  - `shk-arch--tall` 320×580 (0.55) → X 27.6% (= 160px)
  - `shk-arch--small` 240×336 (0.71) → X 35.7% (= 120px)
  - `shk-arch--low` 320×246 (1.30) → X 65% (= 160px)
  - pills: `shk-pill--half` 840×640, `border-radius: 50% 0 0 50% / 50% 0 0 50%` limited by height → `320px 0 0 320px` at full size (ref 360 on a 640-high frame renders as 320); `shk-pill` 252×408 `border-radius: 50% / 30.9%` (= 126px); `shk-pill--square` 240×240 `50% 0 0 50%` (= 120px).
  - Below 960px every frame takes `width: 100%` of its column and keeps the aspect and the % radius.
  - Photographs only, object-fit cover, no cut-outs, no frame line.
- **Home use**: hero (hero arch), block 2 TABLE (tall left at 34px + small right + low right), block 3 SITTINGS (tall), block 5 PLATES (pill strip), block 7 PEOPLE (portrait as rectangle like ref CHEF, see 3), block 8 VISIT (second photo with top radius 218px on 1080 width = `border-radius: 20% 20% 0 0 / 30% 30% 0 0`), block 9 NOTES (card images `shk-arch--small` ratio).
- **Must not be diluted**: the top must be a true semicircle (not 24px rounded corners, not a full ellipse); at least three different arch sizes on the home page; the left concept arch touches 34px from the viewport edge on desktop (it is not inside the content container); consecutive arches differ in top position by ≥100px.

### T2. Ghost display caps partly covered by an arch photo
- **Reference** (CONCEPT 320px, CHEF/MENU/NEWS/ACCESS 96px, tok(b)(f)): enormous thin geometric caps (Poiret One) in pure white on the greige ground, contrast ≈1.3:1, purely decorative; an arch photo or the chef photo overlaps the lower part of the letters; the real reading heading is a smaller line under it.
- **Shokutaku**: `p.shk-ghost` (aria-hidden="true") Fraunces weight **200**, uppercase, `font-variation-settings: "opsz" 144, "SOFT" 0, "WONK" 0`, colour `#FFFFFF`, line-height 1.0, letter-spacing 0.
  - `shk-ghost--xl` (one per page max, home block 2 "TABLE"): `font-size: clamp(6rem, 22vw, 20rem)` (20rem = 320px at 1440, tok(b) CONCEPT).
  - `shk-ghost` (section titles): `font-size: clamp(3.25rem, 6.7vw, 6rem)` (6rem = 96px, tok(b)), centred, `margin-bottom: -0.32em` so the following photo/heading tucks into it.
  - Immediately after the ghost: the real `h2` (lead title) Fraunces 300, 3rem/1.33 (tok(b) lead 48/64), ink `#303030`.
  - Overlap: the arch or rectangle photo below starts at 62–70% of the ghost cap height (it covers the bottom third of the letters). Set with `position: relative; z-index: 1; margin-top: -0.35em` (of the ghost size) on the photo wrapper. The ghost is never on top of a photo.
  - Ghost words (Latin in every language, decorative, not translated): TABLE, SITTINGS, MENU, PLATES, PEOPLE, VISIT, NOTES; inner pages: MENUS, RESERVE, PRIVATE, ROOM, PEOPLE, GROWERS, WINE, VISIT, NOTES.
- **Must not be diluted**: white (#FFF), not grey or pale ink; ≥96px at 1440 for section ghosts and 320px for the TABLE ghost; a ghost opens every home block 2–9 except block 4 (photo band); a photo visibly covers part of the letters in blocks 2, 7 and every inner page head.
- Accessibility: `aria-hidden="true"`, the h2/h1 carries the meaning. Ghost text never creates horizontal scroll: its section has `overflow-x: clip`.

### T3. Fixed vertical reservation tab on the right edge (booking-led)
- **Reference** (pont-de-ciel tok(d), Pienezza rail): a tall tab fixed to the right viewport edge, x 1336–1440, y 250–650 (104×400), 1px hairline (ink on greige), left corners rounded ≈60px, right side open into the edge, the word RESERVATION in upright stacked letter-spaced caps. Pienezza: full-height 56px dark rail `#3B3123` with ご予約.
- **Shokutaku**: `a.shk-tab` rendered once in `parts/header.html` (so it is on **every** template), linking to `/reservations/#book`.
  - Desktop ≥1280: `position: fixed; right: 0; top: calc(50vh - 200px); width: 104px; height: 400px;` `border: 1px solid #303030; border-right: 0; border-radius: 60px 0 0 60px;` background `rgba(223,218,214,.92)` (ground, so it stays legible over the photo band), z-index 50.
  - 960–1279: 72×320, `border-radius: 40px 0 0 40px`, top `calc(50vh - 160px)`.
  - Text: `writing-mode: vertical-rl; text-orientation: upright;` Fraunces 400 1rem, letter-spacing 0.18em, uppercase, ink. en **RESERVE**, fr **RÉSERVER**, de **RESERVIEREN** (font-size 0.875rem), zh-TW **線上訂位**, ja **ご予約** (CJK vertical, Noto Serif, no upright transform needed).
  - Hover/focus: background `#6E4E4A`, text and hairline `#FFFFFF`, transition `.6s cubic-bezier(.32,.95,.6,1)` (tok(g) link hover). Visible focus ring 2px `#6E4E4A` offset 3px.
  - Content gutter: at ≥960 every constrained layout and every price list must end ≥ 24px before the tab: `--shk-tab-gutter: 96px` (960–1279) / `128px` (≥1280); constrained content width = `min(1080px, 100vw - 2 * var(--shk-tab-gutter))`. Full-bleed photos may run under the tab (as on the reference).
  - **Below 960px the tab is hidden** (`display:none`). Mobile booking entry = a hairline pill "Book" in the header (see 2.4). No fixed bottom bar (it would overlap text in the mobile first-screen gate).
- **Must not be diluted**: the tab is a tall vertical hairline shape with rounded left corners at the right edge, visible on every page at 1280 and 1440, with upright stacked caps; it is not a horizontal floating button and not a filled colour bar.

### Not used as a separate signature
T4 (pinned horizontal dish strip) is folded into T1: the PLATES strip uses the pill family as a static strip that bleeds off the right edge (no pinning). The reference's hero "arch expands to full-bleed" is expressed as two states on the page: the arch hero (block 1) and the full-bleed parallax room band (block 4).

### Continuation to inner pages (required)
Every inner page head = `shk-page-head` pattern: greige ground, ghost word centred (6rem), arch photo (`shk-arch--small` 240×336 or `--tall` 320×580) at the right at x ≈ 62–78% overlapping the ghost's lower third, h1 lead title (Fraunces 300, 3rem) + 1 paragraph on the left (columns 2–6 of 12). The tab (T3) is on every template.

| Page | T1 arch / pill | T2 ghost | T3 tab | extra |
|---|---|---|---|---|
| Menus | head arch small **D3**; lunch/dinner section photos D1 half-pill + D4 pill beside the course headings (above the lists, never beside the price columns) | MENUS | yes | full-width price lists |
| Reservations | head arch tall P04; sittings list with arch P08 | RESERVE | yes (the tab links here; on this page it gets `aria-current`) | booking steps, policy, hours |
| Private dining | head arch tall P10; second photo `shk-arch--low` P03 | PRIVATE | yes | set menus, enquiry email |
| About / The room | head arch small P02; P05 full-bleed band with parallax; P11 tall arch beside the 2014 story | ROOM | yes | history paragraphs |
| People | head: P06 rectangle overlapping ghost (ref CHEF layout); P13 `shk-arch--low` | PEOPLE | yes | named list (no portrait grid) |
| Growers | head arch tall P09 | GROWERS | yes | three producers as text rows |
| Wine & drinks | head arch small P12; D4 pill | WINE | yes | by-the-glass list |
| Visit & contact | head arch tall P07; P08 with 20%-top-radius second photo overlapping P07 (ref ACCESS) | VISIT | yes | address, hours, transit |
| Journal (index, archive, single) | cards `shk-arch--small` ratio; single: featured image `shk-arch--low` full content width | NOTES | yes | 4 stories |

---

## 2. Colour, type, header

### 2.1 Palette (reference hexes kept; tok(a))
| Role | Hex | Source | Use | Share (UI, photos excluded) |
|---|---|---|---|---|
| Ground | `#DFDAD6` | Le Pont de Ciel body ground, kept exactly | page ground, header, tab fill | ~62% |
| Field light | `#E9E6E3` | ground +4% lightness (ref lighter wall glow, within ±5%) | elliptical field behind TABLE text, hero radial glow, form inputs | ~10% |
| Field deep | `#D5CFCA` | ground −4% lightness (ref darker ellipse curve, within ±5%) | elliptical field behind PEOPLE and VISIT | ~8% |
| Ghost | `#FFFFFF` | ref ghost headline fill | T2 only | ~6% |
| Ink | `#303030` | ref text ink, kept exactly | headings, body, hairlines, buttons outline | ~9% |
| Muted ink | `#5C5753` | derived from ink on greige (contrast 5.6:1 on #DFDAD6) | captions, price descriptions | — |
| Deep | `#3B3123` | Pienezza rail `#3B3123`, kept exactly | footer ground only | ~4% |
| Accent | `#6E4E4A` | row hex 小豆色 (ref has no UI accent) | tab hover, link underline on hover, focus ring, the 6px dot before the "Book" pill, active nav underline | ≤1% |

- Not beige/cream-led: the ground is a cool-warm greige wall colour, the reference's own. Never a full field of `#6E4E4A`; never `#6E4E4A` larger than a 104×400 hover state.
- Contrast: ink on ground 9.6:1; muted ink on ground 5.6:1; white on deep 12.9:1; white on accent 8.0:1.
- **First-screen saturated pixels (S>0.5, V>0.2) ≤ 15% hard cap; target ≤ 5%** (reference 0.0%). Achieved by the greige ground and the muted documentary grade of P01 (white plate, steel pass, chef in stone apron; any sauce is small).
- Decorative elliptical fields (tok(d) `2350px / 1240px` on 2400×1396): a `::before` on the section, `width: 166vw; aspect-ratio: 2400/1396; border-radius: 50%; left: -33vw;` colour field light or field deep, z-index 0, section `overflow: clip`. Only in blocks 2 (light, top 30%) and 7 (deep, top 18%) and the Visit page head. Tone-on-tone only.
- Hero light: `background: radial-gradient(60% 70% at 30% 50%, #ECE9E6 0%, rgba(236,233,230,0) 70%), #DFDAD6` (the reference's lighter wall spot left of the arch).

### 2.2 Type (theme.json `fontFamilies` + `fontFace`, woff2 in `assets/fonts/`, same in editor and front end)
- **Fraunces** (OFL, variable wght 100–900 + opsz) — display, ghost caps, lead titles, labels, prices (replaces Poiret One + Cinzel; tok(b)).
- **Source Sans 3** (OFL, variable 200–900) — body, nav, UI.
- **Noto Serif TC** (zh-TW) / **Noto Serif JP** (ja) headings and labels; **Noto Sans TC / Noto Sans JP** body — subset woff2 files declared as `fontFace` entries in theme.json (Hokuto 1.1.0 / Hada approach; the repo's subset script is broken, use their replacement). Language stacks via `:lang(zh-TW)` / `:lang(ja)` in style.css → copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it in functions.php so the editor iframe gets the same fonts. Verify licences (all OFL) in readme.txt. `check-editor-fonts.mjs` must pass in en and zh-TW.

| Role | Font | Size (desktop → 390) | Weight | Line-height | Letter-spacing | Source token |
|---|---|---|---|---|---|---|
| ghost XL (TABLE) | Fraunces caps | 20rem → 6rem (`clamp(6rem,22vw,20rem)`) | 200 | 1.0 | 0 | CONCEPT 320px/1.0 |
| ghost section | Fraunces caps | 6rem → 3.25rem | 200 | 1.0 | 0 | section 96px/1.0 |
| H1 hero / lead title (h1, h2) | Fraunces | 3rem → 2.125rem | 300 | 1.33 | 0.01em | lead 48/64 |
| course / sitting name (h3) | Fraunces caps | 2.25rem → 1.625rem | 300 | 1.11 | 0.04em | Cinzel 36/40 |
| person name, price | Fraunces | 1.5rem | 400 | 1.0 (price) / 1.67 (name) | 0.1em (price) | Cinzel 24px, ls 2.4px |
| label / date / nav | Source Sans 3 caps | 0.875rem | 500 | 1.6 | 0.12em | Cinzel 14–15px, ls .75–1.6px |
| body | Source Sans 3 | 1.0625rem (17px) | 400 | 2.0 (en/fr/de) | 0.02em | body 16–18px, lh 2.0–2.5 |
| footer line | Fraunces | 2.25rem → 1.5rem | 300 | 1.78 | 0.1em | footer 36/64, ls 3.6px |
| button | Source Sans 3 caps | 0.9375rem | 600 | 1 | 0.14em | CTA 20px 700 ls 1px |
- zh-TW / ja: headings Noto Serif at ≈0.75× the English size (lead 2.25rem, ls 0.1em — exactly the reference's 48px Mincho ls 0.1em ratio), body 1rem, line-height **1.85**, ls 0.04em. fr/de: `hyphens: auto` on body and h2/h3.
- theme.json `fontSizes` presets: small 0.875rem, base 1.0625rem, medium 1.5rem, large 2.25rem, x-large 3rem, **xx-large 6rem** (max ≥ 4.25rem satisfied), ghost-xl `clamp(6rem,22vw,20rem)` (preset slug `ghost`, fluid false).
- No bold display type anywhere; no centred giant sentence (the ghost is a single decorative word, not copy).

### 2.3 Spacing and shape tokens (tok(c)(d))
- theme.json spacing: 20 = 0.5rem, 30 = 1rem, 40 = 2rem, 50 = 4rem, 60 = 6rem, 70 = `clamp(6rem, 11vw, 10rem)`, 80 = `clamp(6rem, 16.7vw, 15rem)` (= 240px at 1440, tok(c) menu 240/240), 90 = `clamp(7rem, 22vw, 20rem)` (≈320px, tok(c) access 320/320).
- Section padding: block 2 top 100px (spacing 50 + 2.25rem → use `6.25rem`), blocks 3, 5, 7 top/bottom spacing-80, block 8 top/bottom spacing-90, others spacing-70. Mobile all sections 6rem top / 6rem bottom (≈0.27 × viewport as on the ref).
- Content width: constrained `min(1080px, 100vw - 2*var(--shk-tab-gutter))` (ref main photo 1086 wide); wide 1240px; side padding 48px (≥960), 24px (<960).
- Corners: arches/pills per T1; round buttons `height: 82px; padding: 0 44px; border-radius: 42px; border: 1px solid #303030; background: transparent` (tok(d)) — mobile 56px high / r28; round menu button 62px circle 1px hairline (mobile and ≥960 overlay toggle only). **No shadows anywhere. Borders 1px only.**
- Hairlines: 1px `#303030` at 100% for rules under sitting names and price rows (`rgba(48,48,48,.35)` for row separators).

### 2.4 Header and footer
- Header (static, not sticky, transparent on ground): wordmark left at 30px (tok(c) logo x 30): "SHOKUTAKU" Fraunces 300 caps 1.5rem ls 0.12em with "Dining" Source Sans 0.75rem caps ls 0.3em under it. **Centred** text nav (row: nav centered) Source Sans 0.875rem caps ls 0.12em: Menus · Reservations · Private dining · About · People · Journal · Visit. Right: language switch (EN / 中 / 日 / FR / DE, 0.8125rem) at x ≈ 1240 so it stays left of the tab. One top menu only.
- < 960: wordmark left, at right a hairline pill "Book" (40px high, r20, accent 6px dot before the word) and the 48px round hairline menu button opening a full-screen greige overlay with the same nav. No vertical text, nothing absolutely positioned over the hero copy.
- Footer: ground `#3B3123`, white text. Top: footer line Fraunces 300 2.25rem ls 0.1em "Tables open thirty days ahead." + round outline button in white "Book a table"; then 4 columns: address, hours (as lines, not a table), contact (+31 10 555 0142, table@shokutaku.example), nav. Bottom 0.8125rem: © 2014–2026 Shokutaku Dining.

---

## 3. Home page

### 3.1 First screen (1440×900; reference first screen = greige wall + right arch + wordmark left)
- Ground `#DFDAD6` with the hero light gradient (2.1). Header row at top (≈96px).
- **Right**: hero arch `shk-arch--hero` 520×800 scaled to fit: `height: min(800px, calc(100svh - 96px - 72px - 40px))` (≈692px at 900 high, width 450), left edge at 53.5% of the viewport (x 770 at 1440), top 24px under the header. Photo **P01** (chef plating at the open pass). The figure is wrapped in a Group with `sp-parallax` (`--sp-par: 6%`).
- **Left** at x 150 (10.4%), vertically centred against the arch, max-width 520px:
  1. label (0.875rem caps ls 0.12em muted ink): "Neighbourhood restaurant · Rotterdam · since 2014"
  2. **h1** lead title Fraunces 300 3rem/1.33: "Weekday lunch, unhurried dinner, a table near the pass."
  3. paragraph 1.0625rem/2.0 (max 44ch, ≈35 words): "Forty seats on Havenstraat, an open kitchen in the middle of the room and a short menu that changes with the Tuesday delivery. Book a sitting online, or ask for a counter seat when you walk past."
  4. buttons row: round hairline button **"Book a table"** (→ /reservations/#book) + text link "See the menus →" (Source Sans caps 0.875rem, 1px underline offset 6px).
- **Info bar** (row first_screen "info-bar"), bottom of the first screen, height 72px, full content width (from x 150 to the left edge of the tab gutter), 1px ink hairline on top, three inline items Source Sans 0.9375rem: "Lunch Tue–Fri 11:30–14:30" · "Dinner Tue–Sat 17:30–22:30" · "Havenstraat 41, Rotterdam". The arch ends 40px above the hairline.
- T3 tab visible at the right edge (x 1336–1440, y 250–650).
- Forbidden on the first screen: ghost caps, tables, forms, search, filled colour buttons, any centred giant text, vertical text on mobile.
- **Mobile 390×844**: header (wordmark + Book pill + menu circle) → label → h1 2.125rem (max 4 lines) → paragraph (first sentence only visible above the fold is fine) → buttons (Book a table full width 56px) → arch P01 full width minus 48px, aspect 0.65 (so it continues below the fold) → info bar as three stacked lines with hairline above. Everything in normal flow: **no absolute positioning, no vertical text, no overlap.** Parallax kept with `--sp-par: 4%`.

### 3.2 Block order
| # | Pattern slug | Purpose | Layout and photos | Copy |
|---|---|---|---|---|
| 1 | `front-hero` | who/where + book | 3.1. Photo **P01** (hero arch, parallax 6%) | ≈60 words |
| 2 | `front-table` | the idea (ref CONCEPT) | Light elliptical field. Ghost XL **TABLE** centred at the top. **T1 scatter** (≥1024, absolute inside a `position:relative` alignfull section, min-height 1240px): arch **P02** `--tall` 320×580 at left 34px, top 180px; arch **P03** `--small` 240×336 at right 150px, top 520px; arch **D3** `--low` 320×246 at right 330px, top 960px (offsets ≥100px). Centre text column 520px, starting at 62% of the ghost height (so the ghost sits behind/above): h2 "A short menu, cooked at the pass, served at forty tables." + 2 paragraphs + text link "About the room →". < 1024: ghost, h2, text, then P02 and P03 side by side (60/40 widths, P03 70px lower), D3 hidden on mobile. | 2 × 50 words |
| 3 | `front-sittings` | booking-led core: the three sittings | Ghost **SITTINGS**. Two columns (5/12 + 7/12, gap 6rem): left arch **P04** `--tall` 320×580 (left edge of the wide width), right: h2 "Three ways to sit down." then three sitting rows (`sp-stagger`, each row `sp-reveal sp-reveal--up`): name (h3 caps 2.25rem) / one-line time ("Tue–Fri · 11:30–14:30 · 75 minutes") / 30-word description / "Book this sitting →". 1px ink hairline under each row. Under the rows: one line "Tables open 30 days ahead; a table is held for 15 minutes; groups of 7–12 use the private room." | 3 × 30 + 25 words |
| 4 | `front-room` | the room (ref KV after-state + `.js-pax`) | **Full-bleed photo band, the mandatory parallax**: Cover block, background **P05** (evening dining room), `sp-parallax` `--sp-par: 10%` (mobile 7%), min-height `100svh` desktop (min 640px), `70svh` mobile, dim overlay `linear-gradient(to top, rgba(0,0,0,.42) 0%, rgba(0,0,0,0) 45%)`. Foreground (static, not in the moving layer) bottom-left at the content edge: label "THE ROOM" white 0.875rem caps, line Fraunces 300 2.25rem white "32 seats at tables, 8 at the counter, one open kitchen." No reveal. | 15 words |
| 5 | `front-menu` | what the room serves, with prices | Ghost **MENU**. h2 "Lunch and dinner, priced plainly." + 1 sentence. **Price list** full constrained width (1080 at 1440): six rows in two groups (LUNCH: 2, DINNER: 4; group labels caps 0.875rem). Row = `display:grid; grid-template-columns: 1fr auto; column-gap: 2rem;` name Fraunces 1.5rem + description muted 0.9375rem under it; price Fraunces 1.5rem ls 0.1em `white-space: nowrap; text-align: right;`; 1px hairline `rgba(48,48,48,.35)` between rows, 1.5rem row padding. No reveal on the list (rule). Below: round button "Full menus" → /menus/. No photo beside the list. | 6 rows + 25 words |
| 6 | `front-plates` | dishes (ref DISH strip, T1 pill family) | Ghost **PLATES**, h2 "This week from the pass." Strip: one flex row aligned to the content's left edge and **bleeding off the right viewport edge** (section `overflow-x: clip`), gap 32px, items bottom-aligned: **D1** `shk-pill--half` 840×640 (desktop 58vw max 840) · **D2** `shk-pill` 252×408 · **D4** `shk-pill--square` 240×240 (last, partly cut by the viewport edge). Captions under each (Fraunces 1.125rem + 0.8125rem muted ingredients). The whole strip container gets `sp-reveal sp-reveal--left` (children never). < 960: horizontal scroll-snap row (`overflow-x: auto; scroll-snap-type: x mandatory`), items 78vw / 52vw / 52vw, scrollbar hidden, no reveal on items. | 3 × 12 words |
| 7 | `front-people` | the kitchen and floor (ref CHEF) | Deep elliptical field. Ghost **PEOPLE** centred; **P06** chef portrait **rectangle** 320×480 (ref chef 240×360 rectangle, ×1.33), radius 0, at columns 4–6 (x ≈ 384 like the ref) overlapping the ghost's lower third. Right of it (columns 7–11): h2 "Seven people, one pass." + 2 paragraphs about Elena and Tomasz + a plain two-column **name list** of the seven people (name Fraunces 1.5rem / role 0.875rem caps), `sp-stagger` + `sp-reveal--up` per name. Link "Meet the team →". No portrait grid. | 2 × 45 words + list |
| 8 | `front-visit` | how to come, how to book (ref ACCESS) | Ghost **VISIT**. Left 7/12: **two overlapping photos** (ref 1080×800 rect + 1080×720 top-radius 218, offset): **P07** street front rectangle 4:3 at 80% column width, and **P08** counter `shk-visit-arch` 3:2 with `border-radius: 20% 20% 0 0 / 30% 30% 0 0`, 62% column width, offset +38% right and +42% down, overlapping P07's lower right corner (z above). Right 5/12: h2 "Find us on Havenstraat." address lines, **hours** as a 3-row definition list (label left, times right nowrap; stacks on mobile), the 4 booking steps as a short numbered list in plain text (1–4, one line each; not cards), round button "Book a table", phone line. | 80 words |
| 9 | `front-notes` | stories (journal) | Ghost **NOTES**. h2 "From the kitchen notebook." Query Loop of 3 latest posts (posts 1–3) in a 3-column row; images `shk-arch--small` aspect (0.71), cards offset vertically 0 / 100px / 50px (T1 rule: ≥100px between neighbours 1–2); date + title Fraunces 1.5rem + 20-word excerpt. `sp-stagger` + `sp-reveal--up` on cards. Featured images **P09, P11, P12**. | query |
| 10 | `front-close` | final booking call | Ground; centred Fraunces 300 3rem "Tables open thirty days ahead." + round button "Book a table" + "or call +31 10 555 0142". Then footer (deep `#3B3123`). | 15 words |

English home ≥ 300 words, narrative paragraphs in blocks 1, 2 (two), 3, 7 (two) and 8 → at least three paragraphs. CJK home ≥ 500 characters.

**Home photo positions (15, no repeats)**: P01 · P02 · P03 · D3 · P04 · P05 · D1 · D2 · D4 · P06 · P07 · P08 · P09 · P11 · P12. (P10, P13 are inner-page only.)

### 3.3 Comparison with the most recent themes
| # | Kotoba Language | Oto Audio | Ito HR Partners | Kaiten Skills | **Shokutaku Dining** |
|---|---|---|---|---|---|
| 1 | split hero + cropped wordmark | photo-left bleed hero, straddling H1, ink strip | one-line H1 + tick tags + rounded photo loop | inset hand-cut frame + blob plate | **greige wall, arch photo right, lead left, info bar** |
| 2 | 3 unequal paths (circle photo + arcs) | intro text/photo | inset band + 2×2 service cards | tilted-photo intro | **320px ghost TABLE with three scattered arches** |
| 3 | narrow intro | 4 line-icon categories | staggered photo pair + intro | course card strip | **three sittings + tall arch (booking)** |
| 4 | CEFR hairline scale | ink comparison table | blurred parallax + 3 cards | wave band + 5-step timeline + price table | **full-bleed room band, parallax** |
| 5 | full-bleed band + quote | product trio cards | fee list | stories mosaic | **price list (full width)** |
| 6 | 6 circular teachers | parallax band | slate people band, circle portraits | parallax interlude | **pill dish strip bleeding off the edge** |
| 7 | fee table | listening-room list | 3 stories | tutor list + photo | **ghost PEOPLE + rectangle chef + name list** |
| 8 | 3 stories | price list | FAQ + contact inset | FAQ + contact | **VISIT: two overlapping photos + hours + steps** |
| 9 | close with arcs | 3 journal posts | — | — | **3 notes in staggered arch cards** |
| 10 | — | visit photo bleed right | — | — | **close line + footer on deep rail colour** |

Why not alike: no circles, arcs or circular portraits (Kotoba, Ito); no photo-left bleed hero or ink comparison table (Oto); no photo loop, tick tags, cards in inset bands (Ito); no cut frames, blobs-as-plates, tilted photos, timelines (Kaiten). Shokutaku's shapes are arches/pills, its type device is the white ghost cap, and the right-edge vertical tab exists in none of them. Where content types repeat (price list, stories), position and form differ: the price list comes right after the parallax band and before the dish strip, and stories are staggered arch cards, not a mosaic or plain row.

---

## 4. Inner pages (9 + journal templates)

Each page: `shk-page-head` (ghost + arch photo overlapping + h1 + intro) → body sections (≥2, each opening with a small ghost or an h2) → `front-close` style booking line → footer. No sidebar. Tab on every template.

1. **Menus** (`page-menus`): ghost MENUS, head arch **D3** (`shk-arch--small` crop). Sections LUNCH (Tue–Fri) and DINNER (Tue–Sat): each opens with a pill photo row above the list (D1 half-pill for lunch, D4 pill for dinner), then the full-width price list (same component as home, plus 3 sample dishes per course as muted lines). Section CHILDREN & DIETS: children's plate €14; vegetarian version of every menu at the same price; allergens noted on request. Prices identical to section 8.
2. **Reservations** (`page-reservations`, anchor `#book`): ghost RESERVE, head arch **P04**. The three sittings (as home block 3, with arch **P08**), the 4 booking steps as a numbered text list, policy (30 days ahead, 15-minute hold, cancel by phone or email at least 24 hours ahead, groups 7–12 → private room), opening hours (definition list; stacked on mobile), a booking form block below the policy (name, email, date, time, guests 1–6; plain core/html form with mailto action or a "Book online" button linking to `#` placeholder; form is never in the first screen).
3. **Private dining** (`page-private-dining`): ghost PRIVATE, head arch **P10** (long table). The room: 12 guests, minimum 8, dinner menu €58 or tasting €78 per guest, wine pairing €38; one `shk-arch--low` **P03**; enquiry by email; steps: enquire → menu call → confirm → dinner.
4. **About / The room** (`page-about`): ghost ROOM, head arch **P02**. Story 2014 (Elena and Tomasz, former bakery on Havenstraat), the open pass, the weekday lunch idea; full-bleed **P05** band with `sp-parallax` `--sp-par: 10%`; tall arch **P11** beside "Bread at six" paragraph.
5. **People** (`page-people`): ghost PEOPLE, **P06** rectangle overlapping the ghost (ref CHEF). Seven people as text rows (name Fraunces 1.5rem, role caps, 40-word bio), hairline separated, two columns ≥960; **P13** `shk-arch--low` between rows 4 and 5. No portrait grid.
6. **Growers** (`page-growers`): ghost GROWERS, head arch **P09**. Three producers (section 8) as text rows with what they bring and on which day; paragraph on the Tuesday delivery; D2 pill.
7. **Wine & drinks** (`page-wine`): ghost WINE, head arch **P12**. By the glass (6 lines listing grape and region only, no extra prices), the wine pairing €38 (four glasses, with the dinner menu), and one line "house-made non-alcoholic drinks with each course on request" (no price); D4 pill.
8. **Visit & contact** (`page-visit`): ghost VISIT, deep elliptical field, **P07** + **P08** overlapping (ref ACCESS). Address, transit (tram 8 stop Havenstraat, 3 minutes' walk — fictional), step-free entrance and accessible toilet, hours, phone, email; no map iframe (a plain "Open in maps" link).
9. **Journal** (`home.html`, `archive.html`, `single.html`): ghost NOTES; index: 4 posts as staggered arch cards (2 columns, second column 100px lower); single: category label + h1 3rem, date, featured image `shk-arch--low` full content width, text column 680px.
10. **404 / search**: ghost "TABLE" at 6rem + h1 + round button home.

---

## 5. Photos (17, Grok, one at a time, read every one)

STYLE (exact string on every prompt):
`photorealistic documentary photograph, 35mm lens, soft high-key daylight from large windows, pale greige plaster walls, light oak and brushed steel, muted warm palette of stone, greige, ivory, soft brown and deep olive, modern international neighbourhood restaurant, diverse adults, candid unposed moment, natural food colours gently muted, fine film grain, no text, no logos, no brand marks, no signage lettering, no menus with writing, no Japanese elements, no chopsticks`

Generate at the frame aspect listed; ≤2000px, ≤300 KB, 0 cut-outs; readme.txt line per image (AI-generated, CC0). Reject and regenerate any image with text, logos, broken hands/faces, or saturated colour fields.

| ID | Subject / composition | Aspect | Home (★) / inner pages (each image once per page) |
|---|---|---|---|
| P01 | chef (woman, 40s, stone linen apron) plating at a steel open pass, hands placing a herb on a white plate, warm kitchen soft behind, vertical | 0.65 (2:3) | ★ hero arch; — |
| P02 | the empty dining room in morning light, oak tables, pale plaster wall, tall window | 0.55 (9:16) | ★ TABLE arch tall; About head |
| P03 | hands tearing a sourdough loaf over a linen-covered table, two glasses of water | 0.71 (5:7) | ★ TABLE arch small; Private dining low arch |
| P04 | weekday lunch for two by the window, two plates, a carafe, people seen from the shoulder down, candid | 0.55 | ★ SITTINGS arch; Reservations head |
| P05 | the dining room in the evening, wide, guests at tables, warm low lamps, open kitchen glowing at the back | 16:9 | ★ ROOM band (parallax); About band |
| P06 | head chef portrait at the pass, half-length, looking aside, plain stone wall | 2:3 | ★ PEOPLE rectangle; People head |
| P07 | street front: large glass window and wooden door of a corner building, no signage, morning | 4:3 | ★ VISIT rect; Visit head |
| P08 | counter seats along the pass, three guests watching cooks, from behind | 3:2 | ★ VISIT arch; Reservations sittings; Visit |
| P09 | grower unloading crates of root vegetables at the back door, early light | 0.71 | ★ NOTES post 1; Growers head |
| P10 | private room: long oak table set for twelve, linen, candles unlit, daylight | 0.55 | Private dining head; Journal post 4 |
| P11 | baker shaping loaves on a floured bench at dawn | 0.55 | ★ NOTES post 2; About tall arch |
| P12 | sommelier pouring white wine for two guests, bottle without label | 0.71 | ★ NOTES post 3; Wine head |
| P13 | kitchen team doing mise en place, three cooks, steel bench, bowls of herbs | 1.30 | People low arch |
| D1 | main course: roast fish with white beans and greens on a matte white plate, overhead-angled | 1.31 (4:3) | ★ PLATES half-pill; Menus lunch |
| D2 | spring vegetable starter, tall composition on a stoneware plate, side view | 0.62 | ★ PLATES pill; Growers |
| D3 | dessert: pear tart with cream on a grey plate | 1.30 | ★ TABLE low arch; Menus head |
| D4 | glass of red wine beside a plate of hard cheese and oat crackers on oak | 1.0 | ★ PLATES half-pill square; Menus dinner; Wine |

Per-page check: Home 15 (P01–P09, P11, P12, D1–D4), Menus (D3, D1, D4), Reservations (P04, P08), Private dining (P10, P03), About (P02, P05, P11), People (P06, P13), Growers (P09, D2), Wine (P12, D4), Visit (P07, P08), Journal posts 1–4 = P09, P11, P12, P10. No page repeats an image.

---

## 6. Scroll motion (sp-scroll v1/v2; copy `pipeline/assets/sp-scroll/` unchanged into `assets/`)
Three effects on the home page (max 3): **sp-parallax**, **sp-reveal--wipe**, **sp-reveal--up (+ sp-stagger)**; `sp-reveal--left` once for the plates strip counts with "up" as the same translate family (same timing vars). Hero: parallax only, no reveal. Price lists, forms, hours, legal text: nothing.

| Where | Class | Reference effect (site) | Ref trigger / time / easing | Ours |
|---|---|---|---|---|
| block 4 ROOM band (Cover, P05) — **mandatory parallax** | `sp-parallax` on the Cover, `--sp-par: 10%` (mobile `7%` via `@media (max-width: 781px) { .shk-room { --sp-par: 7% } }`) | pont-de-ciel KV arch → full-bleed and `.js-pax` two-layer parallax | ScrollTrigger start top bottom → end bottom top, scrub 2 outer / 1 inner, travel ≈100–300px | CSS `animation-timeline: view()`, layer = `.wp-block-cover__image-background`, scale 1.18; at 900px viewport 10% ≈ ±90px travel; foreground caption static |
| block 1 hero arch (P01) | wrapper Group `sp-parallax` `--sp-par: 6%` (mobile 4%) around `figure.shk-arch--hero > img` | pont-de-ciel `.js-pax` inner layer inside arch | same | image drifts inside the arch; no opacity change, no reveal |
| About page P05 band | `sp-parallax` `--sp-par: 10%` | same | same | same as home band |
| arch photos in blocks 2, 3, 7 (P06 rect), 8; inner page head arches | `sp-reveal sp-reveal--wipe` on the figure (clip on its child img) | pont-de-ciel `.clip_figure`: clip inset(100% 0 0 0)→0 | class toggle on enter; clip 1.2s `cubic-bezier(.32,.95,.6,1)`; opacity/translateY(50px) 2.6s `cubic-bezier(.16,1,.3,1)` | theme override in style.css (loaded after sp-scroll.css; same selector, so it wins; library file unchanged): `html.sp-js:not(.sp-no-motion) .sp-reveal--wipe > * { transition: clip-path 1.2s cubic-bezier(.32,.95,.6,1) var(--sp-delay,0s); }`. Do not put `sp-reveal--wipe` on a figure that is a direct child of an `sp-parallax` wrapper (hero arch, band). |
| sittings rows (block 3), name list (7), notes cards (9), page-body paragraphs on inner pages | parent `sp-stagger`, children `sp-reveal sp-reveal--up` | pont-de-ciel text/figure fade-rise 2.6s | translateY 50px, 2.6s `cubic-bezier(.16,1,.3,1)` | `:root { --sp-dist: 30px; --sp-dur: 1.6s; --sp-ease: cubic-bezier(.16,1,.3,1); }` — distance capped at 30px (rule); 1.6s instead of 2.6s because the expo-out curve is visually complete by ~60% and the motion gate checks the settled state; stagger 0.12s steps (library) |
| plates strip container (block 6) | `sp-reveal sp-reveal--left` on the strip wrapper only | pont-de-ciel horizontal drift (x +200→0, scrub 1.5) and pinned dish strip | start top bottom → top top | 30px drift from the left, 1.6s, same ease; children never revealed (horizontal scroller on mobile) |

Not used: pin, footer curtain, header colour toggle (static header), sp-marquee, sp-count.
Hard rules: hidden states only through `html.sp-js` selectors; reduced-motion, `?sp-static`, editor = final state; no scroll listeners or libraries; nothing causes horizontal scroll. `check-parallax.mjs` must pass (≥6px layer travel desktop and mobile, ≥3 reveals hidden before entry, none transparent after scrolling to the end, 0 travel under reduced motion).

---

## 7. Responsive requirements
- **390px first screen**: everything in normal flow (3.1 mobile), no vertical text (tab hidden < 960), no absolutely positioned labels, no ghost caps, no overlap; h1 ≤ 4 lines.
- T1 scatter positions (absolute arches, block 2) apply only ≥1024px; below that arches are in flow.
- Ghost caps scale via clamp and their sections use `overflow-x: clip`; `scrollWidth == innerWidth` at 390 and 1280.
- **Price lists at ≥782px**: span the full constrained width (1080 at 1440, ≥ 700 at 800); grid `1fr auto`; price cell `white-space: nowrap; text-align: right; min-width: 6ch`, never cut or overflowing, never beside a photo; the tab gutter keeps it clear of the tab at ≥960.
- **Any table** (hours, wine list if implemented as `core/table`) on < 782px becomes stacked: `display:block` rows, label above value. Prefer definition lists / grid rows over `core/table`.
- Plates strip: bleeds right ≥960; scroll-snap row < 960.
- Overlapping VISIT photos: < 782 the second photo moves to `margin-top: -18%; margin-left: 30%; width: 70%` (still overlapping, in flow).
- Tab: ≥1280 104×400, 960–1279 72×320, hidden < 960.

---

## 8. Fixed facts and numbers (identical on every page and in all five languages)
- **Opened 2014**, Havenstraat 41, 3024 Rotterdam, the Netherlands (fictional address). Phone +31 10 555 0142, table@shokutaku.example.
- **Hours**: Lunch **Tue–Fri 11:30–14:30** (last order 13:45). Dinner **Tue–Sat 17:30–22:30** (last seating 21:00). Closed Sunday and Monday.
- **Room**: **40 seats** = 32 at tables + **8 at the counter**; private room **12 guests** (minimum 8).
- **Sittings (3)**: Weekday lunch (Tue–Fri, 11:30–14:30, about 75 minutes); Early dinner (Tue–Sat, seatings 17:30–18:30, table for 2 hours); Late dinner (Tue–Sat, seatings 20:00–21:00, the table is yours until close).
- **Prices (6, EUR)**: Lunch, two courses **€26** · Lunch, three courses **€32** · Dinner menu, four courses **€58** · Kitchen tasting, six courses **€78** · Wine pairing, four glasses **€38** · Children's plate (under 12) **€14**. Private dining: dinner menu €58 or tasting €78 per guest (same prices, no extra amounts). Format: en/zh-TW/ja `€26`, fr/de `26 €`.
- **Booking process (4 steps)**: 1 Choose a sitting · 2 Book online or call · 3 Email confirmation, reminder the day before · 4 Arrive; the table is held for 15 minutes. Tables open **30 days** ahead; please cancel at least **24 hours** ahead; groups of **7–12** → private room. No deposit.
- **People (7)**: Elena Vasquez — chef-owner; Tomasz Nowak — co-owner and host; Amara Mensah — sous chef; Jonas Berg — bread and pastry; Priya Raman — wine and drinks; Mateo Rossi — reservations and private dining; Lea Fischer — lunch service lead.
- **Growers (3, fictional)**: Polder Vegetable Co-op (vegetables, Tuesday delivery); Molen Ten Wind (stone-milled flour, weekly); Harbour Day Boats (fish, Wednesday and Friday).
- **Stories (4 posts)**: 1 "The Tuesday crates" (P09, growers); 2 "Bread at six" (P11, Jonas); 3 "Pouring by the glass" (P12, Priya); 4 "A long table for twelve" (P10, private room).
- No claims of awards, guides, media, guaranteed outcomes or real brands.

---

## 9. Similarity table (reference vs Shokutaku)
| Dimension | Le Pont de Ciel (tok) | Shokutaku |
|---|---|---|
| ground colour | `#DFDAD6` (a) | `#DFDAD6` (same) |
| ink | `#303030` (a) | `#303030` (same) |
| ghost fill | `#FFFFFF` on ground (a)(f) | `#FFFFFF` on ground |
| tone-on-tone ellipses | 2400×1396, radius 2350/1240 (d) | 166vw ellipse `#E9E6E3` / `#D5CFCA` (±4% L) |
| dark rail | Pienezza `#3B3123` (a) | footer `#3B3123` |
| accent | none in UI (a) | `#6E4E4A` ≤1% (row hex; hover/focus only) |
| first-screen saturation | 0.0% (a) | target ≤5%, cap 15% |
| ghost XL | Poiret One 320px, lh 1.0 (b) | Fraunces 200 caps 20rem, lh 1.0 |
| section title | 96px, lh 1.0 (b) | ghost 6rem, lh 1.0 |
| lead title | 48/64, ls 0.1em (b) | 3rem/1.33 Fraunces 300 (CJK ls 0.1em) |
| label / price | Cinzel 14–15px / 24px ls 0.1em (b) | Source Sans caps 0.875rem ls .12em / Fraunces 1.5rem ls .1em |
| body | 16–18px, lh 2.0–2.5 (b) | 17px, lh 2.0 (CJK 1.85) |
| section padding | 240 / 320–360px (c) | spacing-80 240px, spacing-90 ≈320px |
| floating photo offset | left 34px; right group ends 150px from edge (c) | arch P02 left 34px; P03 right 150px |
| hero image | arch 520×800, x 770–1290 (e) | arch 0.65 aspect, x 53.5%, ≤800 high |
| arch radii | 320→160, 240→120 (d) | same sizes and radii |
| pill / half-pill | 840×640 r360 left; 252×408 r160; 240×240 (d) | same sizes, true half-height radii |
| access photos | 1080×800 rect + 1080×720 top radius 218, overlapping (e) | P07 rect + P08 20%/30% top radius, overlapping |
| chef photo | 240×360 rect overlapping CHEF title (e) | 320×480 rect overlapping PEOPLE ghost |
| buttons | 82px high, r42, 1px hairline, no fill (d) | same (mobile 56/r28) |
| reservation tab | fixed 104×400, x 1336–1440, y 250–650, r≈60 left, hairline, upright caps (d) | same geometry; ground fill 92%; hover accent |
| shadows / borders | none / 1px (d) | none / 1px |
| hero → full-bleed | pinned mask growth, scrub 3 (g) | arch hero + later full-bleed band with parallax 10% |
| parallax | `.js-pax`, scrub 2/1, travel 100–300px (g) | sp-parallax 6% hero / 10% band (≈±90px) |
| image reveal | clip 1.2s `(.32,.95,.6,1)` (g) | sp-reveal--wipe 1.2s `(.32,.95,.6,1)` |
| text rise | 50px, 2.6s `(.16,1,.3,1)` (g) | 30px (cap), 1.6s `(.16,1,.3,1)`, stagger .12s |
| hover | .6s `(.32,.95,.6,1)` (g) | .6s `(.32,.95,.6,1)` |
| dish strip | pinned horizontal scroll (g) | static strip bleeding off the right edge + 30px drift |
| header | logo left 30px, fixed, round 62px menu (c) | logo left 30px, static, centred nav; 48px round menu < 960 |

Own (not copied): photographs, all copy, wordmark, block order, the info bar, sittings list and price list content.

---

## 10. Home acceptance checklist
1. First screen at 1440×900: greige `#DFDAD6` ground with left glow, arch P01 on the right (true semicircle top, x ≈ 53.5%), lead h1 left, round hairline "Book a table" button, info bar with hours and address on a hairline; tab at the right edge; no ghost, table, form or filled buttons. `check-first-screen.py` saturated ≤15% (expect ≤5%).
2. 390×844 first screen: all in flow, no vertical text, no overlapping text, no tab; Book pill in header.
3. T1: ≥3 different arch sizes on home (hero, tall, small, low) + pill strip; P02 starts 34px from the left edge at 1440; arch tops are true semicircles.
4. T2: white Fraunces 200 ghost caps — TABLE at 320px, section ghosts at 96px — in blocks 2, 3, 5, 6, 7, 8, 9; photos cover the lower third of TABLE and PEOPLE.
5. T3: tab 104×400 fixed right at 1280/1440 on every template, hover turns `#6E4E4A`; no content (price list included) under it.
6. Block order = 3.2; no circles/arcs, portrait grid, step grid, timeline, cards in bands, collage, cut-outs, sidebar.
7. Price list at 800 and 1280: full width, prices right-aligned, nowrap, not cut; six prices exactly as section 8.
8. Photos: 15 unique on home (≥8 required), all from the STYLE string, no text/logos/bad hands; ≤300 KB.
9. Motion: `check-parallax.mjs` passes (band P05 travel ≥6px desktop and mobile; reveals on sittings/notes/arches); hero has no reveal; `?sp-static` shows everything.
10. Fonts: Fraunces + Source Sans 3 (+ Noto Serif/Sans TC/JP subsets) from theme.json fontFace; `check-editor-fonts.mjs` passes; max preset 6rem.
11. Copy: ≥300 English words, ≥3 narrative paragraphs; numbers (hours, seats, prices, 30 days, 15 minutes) match section 8.
12. `auto-gates.mjs … en … 1 1` pass=true.
