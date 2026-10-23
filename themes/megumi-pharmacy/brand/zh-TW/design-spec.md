# Megumi Pharmacy: design spec (stage 1, binding for implementation)

Slug `megumi-pharmacy`, an independent community pharmacy on a neighbourhood high street with a small counter shop. Row b8-6: archetype **single-column-longform**, hero **full-bleed-photo**, first screen **full-bleed-photo-info-bar**, nav **centered**, page structure **people-story**, film-grain real photography, palette 紅消鼠 `#8A7070` as the one muted accent, fonts **Literata + Public Sans**, type **store** (WooCommerce required, checkout must work; the theme must still render without WooCommerce).

Only reference (80% similarity target): **R1 = Itoh Kampo Pharmaceutical, https://www.itohkampo.co.jp/** (S5-Style 医療・福祉／美容・健康). Values below are taken from `reference-tokens.md`; every number marked `tok(x)` is that file's section (a)–(g). Borrow structure, technique, measurements and colour relationships only: no copy, photos, illustrations or logo from R1.

Fixed brand facts (every page, all five languages): **Megumi Pharmacy**, founded **2006** by pharmacist **Megumi Ward**, at **1184 Queen Street East, Toronto, ON M4M 1L4, Canada** (fictional address). Phone **(416) 555-0148**, email **counter@megumipharmacy.example**. Currency **Canadian dollars**, written `$9.95` (dollar sign before, decimal point) in **all five languages** so the numbers match exactly; one note line "All prices in Canadian dollars." (translated) under every price list.

---

## 1. Signature techniques (three, obvious at a glance)

### T1. The photograph is the stage: hero copy, then the intro, both on one still full-bleed photograph that the page slides over (R1 fixed backdrop, `tok(e)`, `tok(g)`)
- **R1:** one full-viewport photograph sits fixed behind the page (`position:fixed; inset:0`, 100dvh). Three short lines of white display type sit at the left (x≈75, vertically just below centre), wide tracking. Scrolling does not move the photo: first a centred 548–645 px column of white intro text with a 1 px white outline button rises over the same photo (`ref/scroll-itoh-hero-y900.png`), then the first white section slides up and covers it. Header is transparent over the photo, a 60 px round accent menu button floats at the top right. A tiny "Scroll Down" caption with a 1 px vertical line sits at bottom centre.
- **Ours (home block 1 `front-stage`):** one `core/cover` `alignfull`, class `mp-stage sp-parallax`, background **P01** (pharmacist counselling a customer across the counter). The Cover is **tall** and holds two parts on the same photo:
  - **Part A – first screen** (`div.mp-stage__first`, `min-height: 100svh`, flex column, `justify-content: flex-end`, padding `0 75px 0` desktop (`tok(c)` hero gutter 75), `0 24px` mobile):
    - Hero copy, 3 lines, left, its block vertically centred at ~55% of the viewport height (R1 copy top at 49%): "Your medicines," / "talked through," / "by name." (forced `<br>` in en). Literata 400, `font-size: clamp(2.5rem, 4.4vw, 4.25rem)` (preset `huge`, max 4.25rem), line-height **1.6** (`tok(b)` 69/43.1), letter-spacing **0.06em** in en/fr/de (R1 0.25em is for kana; Latin capped), **0.2em** in zh-TW/ja at 0.75× size, colour `#FFFFFF`, `text-shadow: 0 1px 18px rgba(56,55,54,.25)`. `h1`. No reveal, no load animation (R1's per-line spring rise is deliberately dropped: hero must be immediately visible; see 9).
    - Under the copy, 40 px gap: one line Public Sans 500 1rem ls 0.08em white 90%: "Community pharmacy on Queen Street East since 2006."
    - **Info bar** (row `full-bleed-photo-info-bar`): last child of part A, `margin-top: 96px`, full content width (between the 75 px gutters), `border-top: 1px solid rgba(255,255,255,.55)`, padding 18px 0 22px, flex row, gap 48 px, Public Sans 500 0.8125rem ls 0.08em white: `Mon–Fri 8:30–19:00 · Sat 9:00–17:00 · Sun 10:00–14:00` | `1184 Queen Street East, Toronto` | `Repeat prescriptions ready within 24 hours` | right-aligned text link `Plan your visit →` (white, 1 px underline offset 5 px). Below 782 px the four items stack in normal flow (one per line, gap 6 px, 0.8125rem), the link last. **In flow, never absolutely positioned.**
    - Scroll cue (R1 "Scroll Down"): centred **above** the info bar, `margin-bottom: 28px`: "Scroll" Public Sans 600 0.6875rem ls 0.12em white + a 1 px × 56 px white line under it. Desktop (≥ 1024) only; `display:none` below.
  - **Part B – intro over the same photo** (home block 2 content, inside the same Cover): `div.mp-stage__intro`, `max-width: 645px` centred, padding **109px 37px 120px** (`tok(c)` intro), white text. Kicker `OUR PHARMACY` (see 4, white on photo), then three short paragraphs Public Sans 500 **1.0625rem / line-height 2.0 / ls 0.04em** (`tok(b)` intro 16.9/33.8/.16em, Latin tracking reduced), about 85 words: who we are, that every new medicine is explained at the counter, that the same six people are here every week. Then the **R1 outline button**: `Our story →` 1 px solid white, radius **7.5px**, padding **18.75px 37.5px** (`tok(d)`), Public Sans 500 0.9375rem white, transparent fill; hover fill `rgba(255,255,255,.14)`. Part B group `sp-reveal sp-reveal--up` (this is not the hero: it is below the first screen).
  - Overlay: Cover gradient (one value, overlay opacity 100): `linear-gradient(180deg, rgba(56,55,54,.30) 0%, rgba(56,55,54,.16) 32%, rgba(56,55,54,.30) 58%, rgba(56,55,54,.52) 100%)` so the first screen stays bright (R1 photo is light) and the intro reads on a dimmer lower half (R1 intro photo is dimmed). Ink `#383736` based, never black.
  - Motion: `sp-parallax` on the Cover, `--sp-par: 8%` (≥ 782) / `6%` (< 782) — the photo moves slower than the two text parts, which is our scroll-driven version of R1's pinned photo. **Do not raise above 8%**: sp-scroll scales the layer 1.18 (9% spare each side); a larger value exposes the Cover edge on a tall Cover.
  - Then block 3 (white, `#FFFFFF`) starts directly under the Cover with no gap, so the white page "slides up over" the photo exactly as in R1.
- **Header over the photo (R1 F):** on the front page the header is `position:absolute; top:0; left:0; right:0; z-index:20`, height **87px** (`tok(c)`), transparent, white text. Left (x 52): small tagline `Community pharmacy · since 2006` Public Sans 500 0.6875rem ls 0.1em above the wordmark **Megumi Pharmacy** Literata 500 1.375rem. **Centre:** the one navigation (row nav centered): Prescriptions · Services & fees · People · Stories · Shop · Visit — Public Sans 500 0.875rem ls 0.08em, gap 36 px. Right: language pill (1 px white outline, 999px radius, 52×26, `EN` 0.75rem) + cart text link `Cart (0)` + the **R1 round button**: **60 px circle `#8A7070`** (R1 `#79B121` 60 px), two white 18×1.5 px lines inside (R1 two-line icon). ≥ 1024: it is a link to `/visit/` (aria-label "Plan your visit") and is `position: fixed; top: 13px; right: 52px; z-index: 50` so it floats down the page like R1's. < 1024: it is the core Navigation overlay toggle, in flow inside the header row (not fixed). Mobile header 72 px; part A gets `padding-top: 120px` so the header never touches the hero copy. Inner pages: the same header on white with ink text, `border-bottom: 1px solid #DDDDDD`.
- **Must not be diluted:** the photo must be full bleed edge to edge (no inset, no radius, no white frame); the hero copy stays three left-aligned white lines (not centred, not one big word); the intro paragraphs and outline button sit **on the same photo** (not on a white band below it); the white section that follows starts flush under the photo; the 60 px round accent button is present and stays a circle.

### T2. Portrait link cards with the label inside the image, bottom-left (R1 category cards, `tok(e)`)
- **R1:** three tall cards in a row, image **452×589 (0.77)**, radius **7.5**, gap **~40**; the label sits **inside** the image at the bottom-left (white, 31.9 px, 500, padding 51×37) followed by a small round accent arrow pill; hover scales the image **1.07**.
- **Ours (home block 3 `front-ways`):** three cards in a row, content width 1290 (gutters 75), gap **40px**, each `figure` aspect **0.77** (`aspect-ratio: 452 / 589`), `border-radius: 7.5px`, `overflow: hidden`. Images **P02, P03, P04**. Bottom 45% of each image carries a gradient `linear-gradient(180deg, rgba(56,55,54,0) 0%, rgba(56,55,54,.55) 100%)` (inside the figure, not a box). Label inside bottom-left, padding **51px 37px** (`tok(e)`): Literata 500 **1.75rem** white, line-height 1.3 (R1 31.9 px → 28 px, Latin labels longer), then on the same line a **30×18 px pill `#8A7070`** with a white 10 px arrow (R1 green pill). Labels: "Prescriptions", "Medicine reviews", "Vaccinations & travel". Whole card is one link (to the inner page). Hover: image `scale: 1.07`, `transition: scale .6s cubic-bezier(.33,1,.68,1)`, `transition-delay: 0s` (sp-scroll pitfall 4.3). Under each card, 18 px gap: one sentence Public Sans 400 0.9375rem/1.9 muted `#6B6A68` (≈20 words).
  - Above the row (block head): kicker `WHAT WE DO` + h2 "Three things we do every day, slowly enough for questions." (see 4), left-aligned at the gutter; right end of the head row: text link `Services & fees` + accent pill.
  - Mobile < 782: cards stack one per row, width 100%, aspect stays 0.77 up to 520 px tall (`max-height: 520px; object-position: center 30%`), gap 32 px. Label padding 28px 24px, size 1.5rem.
  - Motion: parent row `sp-stagger`, each card `sp-reveal sp-reveal--up` (not a horizontal scroller, so allowed).
- **Must not be diluted:** portrait ratio 0.77 (not square, not landscape); label **inside** the image bottom-left (never under it); radius exactly 7.5 px (not 0, not 16+); hover zoom 1.07; the accent pill beside the label.

### T3. Numbered index rows 01–05 on a pale inset panel beside one tall 3:4 photo whose neighbour peeks at the window edge (R1 安全・安心 block, `tok(c)(e)(f)`)
- **R1:** a pale grey panel `#F4F4F4` inset **15 px** from both viewport edges with rounded corners; inside, left: accent kicker + two-line heading, then five rows `01 … 05`, each **78 px** high with a **1 px `#DDD`** rule, index 15 px 500, title 18.75 px, a tiny round arrow pill at the right; the active row is underlined in accent and opens its text (`grid-template-rows 0fr→1fr .25s ease-in-out`). Right (block starting at ~54% of the width): one **338×450 (3:4) radius 7.5** photo with the next photo **peeking** at the right viewport edge, cropped by it (`ref/itoh-sheet.png` panel 4).
- **Ours (home block 6 `front-process`, "How a prescription is talked through"):** Group `alignfull`, class `mp-panel`: `margin: 0 15px` (`tok(c)` 15 px inset), background **`#F4F4F4`**, `border-radius: 15px`, padding **120px 0**, `overflow-x: clip` (peeking photo must not cause horizontal scroll). Inner grid 12 columns on 1290 content:
  - Cols 1–6: kicker `PRESCRIPTIONS`, h2 "How a prescription / is talked through." then one 40-word paragraph, then the **five rows** as five `core/details` blocks (class `mp-row`), list total 5 × 78 = 390 px closed:
    - Row: `border-top: 1px solid #DDDDDD` (last row also bottom), `min-height: 78px`, summary = flex row: index `01` Public Sans 500 **0.9375rem** (`tok(f)` 15 px) ls 0.06em muted, 28 px gap, title Literata 500 **1.1875rem** (`tok(f)` 18.75), then at the far right the **30×18 pill**: open row = `#8A7070` with white arrow; closed rows = 1 px `#8A7070` outline, accent arrow. Hide the native marker.
    - Open row: index + title get a **2 px `#8A7070` underline** under the summary text (R1 active underline, 56 px wide from the index), body text Public Sans 0.9375rem/1.9, 2–3 lines (≈35 words), padding 0 0 22px 56px. Row 01 `open` by default.
    - Open/close animation: `::details-content` with `transition: height .25s ease-in-out, content-visibility .25s allow-discrete; interpolate-size: allow-keywords` where supported (`tok(g)` .25s ease-in-out); no JS; browsers without support just snap.
    - Rows (fixed copy, section 7): 01 Hand it in · 02 We check it against your record · 03 Prepared and double-checked · 04 Talked through at the counter · 05 A call two weeks later.
  - Cols 8–12 (block starts at 58% of the width, R1 61%): **P07** at **338×450** fixed size (3:4) `border-radius: 7.5px`, top-aligned with the h2; then 15 px gap and **P08** at the same 338×450, radius 7.5, which runs past the content edge and is **cropped by the window edge** (visible width ≈ 160 px at 1440, ≈ 40 px at 1280; the section clips it). Under P07: caption Public Sans 0.8125rem muted "Daniel Osei showing a new inhaler technique." P08 is decorative-next (alt text still given: "Samuel Brandt double-checking a label.").
  - Below 1024: photos move above the rows; P07 width 72% (3:4), P08 at 24% visible at the right edge, same clip. Rows full width.
  - Motion: head group `sp-reveal sp-reveal--up`; rows container (not each row) `sp-reveal sp-reveal--up`; photos no reveal.
- **Must not be diluted:** the panel is pale `#F4F4F4` (not white, not dark, not the accent), inset 15 px with rounded corners; rows are **numbered `01–05` with hairlines**, not cards, not a timeline, not a step grid; the photo is **3:4 at 338×450 with 7.5 px radius**, and a second photo **visibly peeks** cut by the window edge.

### Continuation to inner pages (at least 4 required; here 9)
Every inner page opens with **T1-page**: a full-bleed Cover `alignfull` class `mp-stage mp-stage--page sp-parallax`, `--sp-par: 8%` (6% mobile), `min-height: 62svh` (mobile 420 px), same gradient overlay, header absolute over it (same as home). Inside, left at the 75 px gutter, bottom-aligned with 72 px bottom padding: kicker (white) + page title Literata 400 `clamp(2.25rem, 3.6vw, 3rem)` white, line-height 1.6, ls 0.06em, two lines max; then directly under the Cover the 645 px intro column on white (`tok(c)` intro width) with 2 paragraphs. (Variant of T1: same still photo with white title, the page then slides over; the inner intro sits on white because inner pages are short.)

| Page | T1 (photo stage) | T2 (portrait label cards) | T3 (index rows + 3:4 photo with peek) |
|---|---|---|---|
| About / Our story | **P12** stage | — | "Twenty years on Queen Street": rows 01 2006 opened · 02 2011 consultation room · 03 2015 blister-pack service · 04 2019 home delivery · 05 2024 six of us; photos **P05** + peek **P09** |
| Prescriptions | **P08** stage | — | full T3, same five rows as home, longer text (≈60 words), rows 02–05 closed; photos **P02** + peek **P06** |
| Services & fees | **P03** stage | three T2 cards **P02, P06, P04** | — (price list, section 6) |
| Medicine reviews | **P11** stage | — | rows 01 Bring everything · 02 One list · 03 What changes · 04 Your copy · 05 A follow-up call; photos **P03** + peek **P06** |
| Vaccinations & travel | **P04** stage | — | rows 01 Flu · 02 Travel consultation · 03 Travel vaccines · 04 Records · 05 Aftercare; photos **P10** + peek **P12** |
| People | **P01** stage | **six T2 cards**, 3 per row: Megumi Ward P05, Daniel Osei P10, Leila Haddad P11, Ana Kovač P04, Samuel Brandt P08, Grace Liu P02; label = name inside, role + 40-word note under the card | — |
| Stories (index, archive) | **P12** stage | three story cards in T2 form (P06, P04, P07; title inside bottom-left, Literata 1.5rem) | notices list below in the home block 7 layout |
| Single post | featured image as stage (fallback P12) | — | — |
| Visit | **P09** stage | — | rows 01 By streetcar · 02 On foot or by bike · 03 By car · 04 Step-free entrance · 05 Home delivery; photos **P12** + peek **P01** |
| Shop (Woo archive) | **P01** stage | product cards keep radius 7.5 and hover 1.07 (1:1, label below) | — |

(Final binding photo assignment per page is the table in section 5; where this table and section 5 differ, section 5 wins.)

---

## 2. Colour (R1 relationships, ±5% only; accent replaced by the row hex)

| Role | Hex | Source `tok(a)` | Use | Share of a page |
|---|---|---|---|---|
| Ground | `#FFFFFF` | R1 ground `#FFFFFF` | page ground, cards ground | ≈ 60% |
| Ink (text) | `#383736` | R1 text `#383736` (exact) | headings, body, overlays tint base | ≈ 8% |
| Panel | `#F4F4F4` | R1 pale panel `#F4F4F4` (exact) | T3 panel, product image ground, notice chips, footer | ≈ 12% |
| Hairline | `#DDDDDD` | R1 rule `#DDD` (exact) | row rules, header bottom rule, table rules | lines |
| Accent | `#8A7070` | **row palette 紅消鼠** (replaces R1 `#79B121`) | 60 px round button, kickers, 30×18 arrow pills, open-row underline, price list "from" marks, focus ring | ≈ 1–2% (R1 1–2%) |
| Accent hover | `#7D6565` | accent −5% lightness | hover on round button / pills | — |
| Muted text | `#6B6A68` | ink lightened for captions | captions, meta, roles | — |
| Photo | film-grain photos | R1 full-bleed photo | hero, visit, inner stages | first screen ≈ 96% |

- **Why the accent changes:** R1's leaf green `#79B121` is saturated (S≈0.8); the row note requires the palette hex as the one muted accent on small areas. `#8A7070` takes exactly the green's roles and area (round button, labels, arrow pills) so the relationship "white ground + warm grey ink + pale grey panel + one small accent" is unchanged. Contrast: white on `#8A7070` 4.6:1, `#8A7070` on white 4.6:1 (kickers are 700 weight).
- **Not borrowed:** R1's yellow band `#F6BB37` (~12%) and its rounded band T4. That share goes to the `#F4F4F4` T3 panel and the visit photo.
- Not beige-led: white is the ground; no cream anywhere. No full-bleed accent field (largest accent area = 60 px circle).
- **First screen saturated pixels:** R1 measured ≈ 1%; cap **15%** (row), target **≤ 4%**. Achieved by the muted film-grain P01 (stone, white, pale wood, dusty rose clothing) and the gradient overlay; only coloured UI = the 60 px circle (≈ 0.3%). Run `scripts/check-first-screen.py`.

## 3. Type

- **Literata** (OFL, variable 200–900 + italic; display, headings, labels in cards, wordmark) and **Public Sans** (OFL, variable 100–900; body, nav, kickers, UI). zh-TW: **Noto Serif TC** for headings + body stack `"Public Sans", "Noto Sans TC", "PingFang TC", "Microsoft JhengHei", sans-serif`; ja: **Noto Serif JP** headings + `"Public Sans", "Noto Sans JP", "Hiragino Sans", "Yu Gothic", sans-serif`. CJK headings ≈ 0.75× the English size, CJK body line-height **1.85**, fr/de `hyphens: auto`.
- **Loading (binding):** all faces declared in `theme.json` `settings.typography.fontFamilies[].fontFace` (woff2 in `assets/fonts/`): Literata variable roman + italic, Public Sans variable roman, Noto Serif TC subset, Noto Serif JP subset (subset files made the Hokuto/Hada way, not the broken subset script; cover every heading string in the zh-TW/ja demo content plus the common 2,500 characters). No `wp_enqueue_style` / front-only `@font-face`. `style.css` uses `:lang(zh-TW)` / `:lang(ja)` rules → copy `shared/inc/editor-lang.php` verbatim to `inc/editor-lang.php` and `require_once` it in `functions.php`. `check-editor-fonts.mjs` must pass for en and zh-TW (editor = front for heading and body).
- **Scale (theme.json presets, rem = 16 px):** small 0.8125 · base 1 · medium 1.0625 · large 1.375 · x-large 2.25 · xx-large 3 · **huge 4.25 (max, ≥ 4.25 rule met)**.

| Element | Face / weight | Size | Line-height | Letter-spacing | Source |
|---|---|---|---|---|---|
| Hero copy (h1) | Literata 400 | `clamp(2.5rem, 4.4vw, 4.25rem)` (63 px at 1440, R1 43.1 px JP) | 1.6 | 0.06em (CJK 0.2em) | `tok(b)` hero 43.1/69/.25em |
| Section h2 | Literata 400 | `clamp(1.75rem, 2.4vw, 2.25rem)` | 1.65 | 0.04em | `tok(b)` section copy 26.25/45.9/.1em |
| Inner page title | Literata 400 | `clamp(2.25rem, 3.6vw, 3rem)` | 1.6 | 0.06em | T1 scaled |
| Kicker | Public Sans 700 | 0.9375rem | 1.4 | 0.14em, uppercase (Latin) | `tok(b)` kicker 15.94/700/.14em, accent |
| Card label (T2) | Literata 500 | 1.75rem | 1.3 | 0.02em | `tok(e)` 31.9/500 |
| Row title (T3) / h3 | Literata 500 | 1.1875rem | 1.4 | 0.02em | `tok(f)` 18.75 |
| Row index | Public Sans 500 | 0.9375rem | 1 | 0.06em | `tok(f)` 15/500 |
| Latin display label (notices) | Public Sans 600 | 1.9375rem uppercase | 1.25 | 0.1em | `tok(b)` Futura-PT 600 ≈31/.1em |
| Body | Public Sans 400 | 1rem | **1.9** (intro blocks 2.0) | 0.01em | `tok(b)` 15.94/31.9 (2.0) |
| Intro on photo | Public Sans 500 | 1.0625rem | 2.0 | 0.04em | `tok(b)` intro 16.9/33.8 |
| Nav | Public Sans 500 | 0.875rem | 1 | 0.08em | `tok(b)` nav 500 .16em |
| Caption / meta | Public Sans 400 | 0.8125rem | 1.7 | 0.02em | — |

Kicker markup: `p.mp-kicker` accent `#8A7070` (white on photos), directly above the h2 with a 14 px gap. In zh-TW/ja the kicker stays the English word (e.g. `PEOPLE`) and the h2 is translated.

## 4. Home page

### First screen (1440×900) — composition
Full-bleed P01 (customer and pharmacist facing each other across a low pale-wood counter; the pharmacist on the right third, the customer's back/shoulder at the right edge or centre-right; the left 45% is soft out-of-focus shelving and pale wall so the white copy sits on calm tone). Transparent header 87 px over it (wordmark left, nav centred, `EN` pill + Cart + 60 px `#8A7070` circle right). Three white lines of hero copy at the left gutter, block centred at ~55% height. Scroll cue centred; info bar along the bottom with a white hairline above it. Nothing else: no table, form, search box, price, card or badge; no giant centred word; no vertical text; no absolutely positioned labels except the header itself.
Mobile 390×844: header 72 px in the photo (wordmark + circle toggle), hero copy 3 lines at 2.5rem from y≈200, one-line subline, info bar stacked in flow at the bottom; photo `object-position: 62% center` so the pharmacist stays visible. No element overlaps another.

### Block order
| # | Pattern | Purpose | Layout & photos | Copy (en) |
|---|---|---|---|---|
| 1 | `front-stage` part A | identity + practical facts | **T1** first screen as above, **P01**, `sp-parallax` on the Cover | h1 7 words + subline 9 + info bar 25 |
| 2 | `front-stage` part B (same Cover) | who we are | **T1** intro over the same photo, 645 col, 3 paragraphs + outline button `Our story →`; `sp-reveal--up` | ≈ 85 words |
| 3 | `front-ways` | the three services | white, padding-top **150px** (`tok(c)` section 150), **T2** cards **P02 · P03 · P04**; `sp-stagger` + `sp-reveal--up` | head 12 + 3 × 20 words |
| 4 | `front-people` | people-story core: who dispenses | white, padding 150/0. 12 cols on 1290: **P05** (Megumi Ward portrait) cols 1–5, **3:4, radius 7.5**; cols 7–12 top-aligned: kicker `PEOPLE`, h2 "Six people, / one counter.", a 75-word paragraph (Megumi opened the pharmacy in 2006; the same faces at the counter each week; why names matter for medicines), then the **people list**: 6 rows, each 56 px, `border-top: 1px solid #DDDDDD` (+ bottom on last): name Literata 500 1.0625rem left, role Public Sans 0.875rem muted right-aligned, a 30×18 outline accent pill at the far right; whole row links to `/people/#slug`. Under the list: text link `Meet the people →`. Text group `sp-reveal--up`; the list container `sp-reveal--up`. Mobile: photo full width 3:4 (max 520 px tall), list below. | ≈ 90 words + 6 rows |
| 5 | `front-story` | one short story (single-column longform) | white, padding 150/0. **P06** wide **21:9** at full content width 1290, radius 7.5 (`figure`, no reveal). Under it a centred **645 px** column (`tok(c)` intro width): kicker `A MORNING AT THE COUNTER`, h2 "Ruth brought her medicines / in a shopping bag.", two paragraphs (≈ 140 words; story 1, section 7), signature line Literata italic 1.0625rem "— Leila Haddad, pharmacist", then the outline-ink version of the R1 button `Read the story →` (1 px `#383736`, radius 7.5, padding 18.75 × 37.5). Column `sp-reveal--up`. | ≈ 160 words |
| 6 | `front-process` | how a prescription is talked through | **T3** on the inset `#F4F4F4` panel, `margin-top: 150px`, photos **P07** + peek **P08**, 5 details rows | head 12 + 40 + 5 × 35 words |
| 7 | `front-notices` | pharmacy notices (R1 NEWS RELEASE block) | white, padding 150/0, 12 cols on 1140 (`tok(c)` 150 gutters): cols 1–3 the Latin display label "PHARMACY / NOTICES" (Public Sans 600 1.9375rem uppercase ls .1em, 2 lines), under it 0.8125rem muted "From the counter"; cols 4–12 Query Loop (category **Notices**, 3 latest): each row `border-bottom: 1px solid #DDDDDD`, padding 22px 0, grid `120px 110px 1fr 30px`: date 0.8125rem muted (`2026.10.01` format in every language), category chip (`#F4F4F4`, 0.75rem, radius 3, padding 3px 10px), title Public Sans 1rem (1–2 lines), accent pill 30×18 at the right. Under the rows right-aligned: `All notices` + pill. Mobile: date + chip on one line, title below, pill right. Rows container `sp-stagger`, each row `sp-reveal--up`. No photos (R1 none). | 3 titles |
| 8 | `front-shelf` | the counter shop (store type) | white, padding 150/0. Head: kicker `COUNTER SHELF`, h2 "Small things we keep / by the till.", 30-word line ("Chosen by the pharmacists, sold without fuss; ask us at the counter if you are not sure."), link `Visit the shop →` at the head's right. Four product cards in a row (gap 40): image **1:1** on `#F4F4F4`, radius 7.5, hover image scale 1.07; name Literata 500 1.125rem, price Public Sans 600 1rem nowrap. Products 1–4 (**P13–P16**). With WooCommerce = Product Collection (handpicked 1–4, same markup) with a text "Add to cart" link; without = static images linking `/shop/`. Row `sp-stagger`, cards `sp-reveal--up`. Below 782: 2 × 2 grid. | 30 words + 4 cards |
| 9 | `front-visit` | visit (R1 closing over the photo) | Cover `alignfull`, class `mp-visit sp-parallax`, `--sp-par: 8%` (6% mobile), **P09** (shopfront), `min-height: 680px` (mobile 560), `margin-top: 150px`, overlay `rgba(56,55,54,.42)` flat. Foreground centred **645 px** column, white: kicker `VISIT`, h2 "1184 Queen Street East, / near the streetcar stop.", hours as three lines (Public Sans 500 1rem/2.0), phone `(416) 555-0148`, then the white outline R1 button `Plan your visit →`. Text group `sp-reveal--up` (the layer moves, the text does not). | ≈ 45 words |
| — | footer | — | white, `border-top: 1px solid #DDDDDD`, padding 96/48, 4 columns: wordmark + address + phone + email; Pharmacy (About, People, Stories, Notices); Services (Prescriptions, Medicine reviews, Vaccinations & travel, Services & fees, Shop); Hours (section 7). Bottom line 0.75rem muted: "© 2026 Megumi Pharmacy · The information on this site is general and does not replace advice from your pharmacist or doctor." | ≈ 50 words |

English home ≥ 250 words with narrative paragraphs in blocks 2, 4 and 5 (≥ 3 narrative paragraphs; total ≈ 600 words). CJK home ≥ 500 characters. **No price list on the home page** (fees live on Services & fees; the info bar only states the 24-hour repeat time, which is a fixed fact).

**Home photo positions (13 ≥ 8):** P01 (stage) · P02 P03 P04 (cards) · P05 (people) · P06 (story) · P07 P08 (process) · P13 P14 P15 P16 (shelf) · P09 (visit). No image repeats on the page.

### Comparison with the most recent themes (home block order)
| # | Oto Audio | Ito HR Partners | Kaiten Skills | Hoshi Wealth | **Megumi Pharmacy** |
|---|---|---|---|---|---|
| 1 | photo-left bleed hero + heading straddle + ink product strip | one-line H1 + tick tags + marquee photo loop + floating pill | inset hand-cut frame + blob + leaf | mixed serif/sans H1 over landscape + right-bleeding square | **full-bleed photo stage, 3 white lines left, info bar at the bottom** |
| 2 | intro text + near-square photo | inset pale band: photo + 2×2 service cards | intro + tilted photo | ruled letters list | **intro text on the same photo (no white band)** |
| 3 | four line-icon categories | intro + staggered photo pair | horizontal course strip | olive tile + 2:1 prologue | **three 0.77 portrait cards, label inside** |
| 4 | ink comparison table | white cards over blurred parallax | five-step timeline on wave band | dark partner rows + sticky chapter card | **one 3:4 portrait + hairline list of six names** |
| 5 | white 3:4 trio | fees (price list) | price table on panel | parallax strip + approach on dark | **single-column story: 21:9 photo + 645 column** |
| 6 | parallax band | slate people band | stories mosaic | family stories (T3) | **numbered 01–05 detail rows on inset pale panel + 3:4 photo with peek** |
| 7 | ink listening room + rows | client stories cards | parallax interlude | meeting panel on photo | **Latin display label + notice rows** |
| 8 | services price list | FAQ + contact close | tutors list | dark footer | **four product squares** |
| 9 | journal | — | FAQ/contact | — | **visit text directly on a parallax photo** |
| 10 | visit (mirrored hero) | — | — | — | white footer |

Why not alike: no split / top-bottom / framed hero (ours is the only one where both the hero and the intro share one uncropped full-bleed photo); no ink or dark band anywhere (Oto, Hoshi), no marquee or floating pill (Ito), no wave band, timeline or price table on the home (Kaiten, Oto, Ito), no sticky chapter card (Hoshi). Our rows sit on a **pale** inset panel with accordion behaviour and a peeking photo, unlike Hoshi's dark ruled partner rows or Oto's ink list. The closing is plain text on a moving photo with no panel (Hoshi's closing is a stone panel on a static-centred photo). Also not Hibi: no dot labels, no band cutting through a photo, no before/after split.

## 5. Photos (18, Grok, one at a time, read each one)

**STYLE** (exact string appended to every prompt):
`documentary film photograph, 35mm film look with fine visible film grain, soft bright high-key daylight, calm modern neighbourhood community pharmacy on a city high street, white walls, pale stone counter and light oak shelving, plain unlabelled boxes and bottles, muted palette of off-white, warm grey, stone and dusty rose-brown, diverse adults in plain clothing, pharmacists in white or pale stone coats, natural candid moment, natural skin texture, no text, no readable labels, no logos, no brand marks, no signage lettering, no Japanese elements`

12 scenes (P01–P12) + 6 product images (P13–P18). 0 cutouts. Each ≤ 300 KB, ≤ 2000 px, one `readme.txt` line each (AI-generated, CC0). Regenerate any image with text, logos, broken hands or faces. Saturation: keep the clothing and objects muted; nothing bright red, green or blue (P01 especially).

| ID | Subject / composition | Ratio | Used on (once per page) | Home |
|---|---|---|---|---|
| P01 | pharmacist (Megumi, 50s, stone coat) on the right third leaning slightly over a low pale-oak counter, talking with a customer seen from behind/side at centre-right; left 45% soft out-of-focus shelving and white wall (calm for white copy) | 16:9 wide (2000×1125) | Home stage; People stage; Shop stage | ★ |
| P02 | Grace Liu (20s, front counter assistant) handing a plain white paper pharmacy bag across the counter to an older man; hands and faces visible | 4:5 portrait | Home T2 card 1; People card (Grace); Prescriptions T3 main; Services T2 card 1 | ★ |
| P03 | Leila Haddad (40s) at a small round table in the consultation room with a woman in her 70s, plain pill organiser and a written list between them | 4:5 | Home T2 card 2; Services stage; Medicine reviews T3 main | ★ |
| P04 | Ana Kovač (30s) giving a flu shot to a young man's upper arm in a bright consultation room, cotton pad, calm | 4:5 | Home T2 card 3; People card (Ana); Vaccinations stage; Services T2 card 3; Stories card 2 / Story 2 featured | ★ |
| P05 | portrait of Megumi Ward (50s, East Asian Canadian, short grey hair, stone coat) standing in front of light oak dispensary drawers, three-quarter, soft smile | 3:4 | Home people; People card (Megumi); About T3 main | ★ |
| P06 | overhead-angled view of a consultation table: a heap of plain unlabelled medicine boxes and bottles beside a canvas shopping bag, two pairs of hands (pharmacist and older woman) sorting them into rows | 21:9 wide | Home story; Stories card 1; Prescriptions T3 peek; Medicine reviews T3 peek; Services T2 card 2; Story 1 featured | ★ |
| P07 | Daniel Osei (30s) showing a teenage boy how to hold an inhaler with a spacer, both standing at the counter end | 3:4 | Home T3 main; Stories card 3 / Story 3 featured | ★ |
| P08 | Samuel Brandt (40s, pharmacy technician) in the dispensary checking a printed label against a plain box, a second pharmacist's hand pointing, shelves behind | 3:4 | Home T3 peek; People card (Samuel); Prescriptions stage | ★ |
| P09 | the pharmacy shopfront on a high street in early morning: large clean windows, a bench and a bicycle, people passing, sign area blank/out of frame | 16:9 wide | Home visit; About T3 peek; Visit stage | ★ |
| P10 | portrait of Daniel Osei (30s, Black Canadian, pale coat) at the counter end, half-length, three-quarter | 3:4 | People card (Daniel); Vaccinations T3 main | |
| P11 | portrait of Leila Haddad (40s, Middle Eastern, hair tied back, white coat) in the consultation room doorway | 3:4 | People card (Leila); Medicine reviews stage | |
| P12 | interior: the bright pharmacy floor from the door — low shelves, pale stone counter, consultation-room door ajar, one customer browsing, empty-ish | 16:9 wide | About stage; Stories stage; post fallback; Vaccinations T3 peek; Visit T3 main | |
| P13 | product: 7-day AM/PM pill organiser (translucent stone/grey, no lettering) on a pale stone surface, centred | 1:1 | product 1; Home shelf | ★ |
| P14 | product: digital thermometer (white, blank display) beside its plain case | 1:1 | product 2; Home shelf | ★ |
| P15 | product: travel first-aid pouch (warm grey canvas, zip open showing plain plasters and gauze) | 1:1 | product 3; Home shelf | ★ |
| P16 | product: unscented hand balm in a plain white tube and a small tin, no print | 1:1 | product 4; Home shelf | ★ |
| P17 | product: reusable linen-covered heat pack, folded | 1:1 | product 5 | |
| P18 | product: cotton wrist support, stone colour, laid flat | 1:1 | product 6 | |

**Binding per-page photo list (no repeats on a page):**
- **Home:** P01 · P02 P03 P04 · P05 · P06 · P07 P08 · P13 P14 P15 P16 · P09 (13).
- **About:** stage P12 · T3 P05 + peek P09.
- **Prescriptions:** stage P08 · T3 P02 + peek P06.
- **Services & fees:** stage P03 · T2 cards P02 (Prescriptions & packs), P06 (Medicine reviews), P04 (Vaccinations & travel).
- **Medicine reviews:** stage P11 · T3 P03 + peek P06.
- **Vaccinations & travel:** stage P04 · T3 P10 + peek P12.
- **People:** stage P01 · T2 cards P05, P10, P11, P04, P08, P02.
- **Stories (index):** stage P12 · T2 story cards P06, P04, P07.
- **Single story:** its featured image as stage (S1 P06, S2 P04, S3 P07). Notices posts: no featured image; stage falls back to P12.
- **Visit:** stage P09 · T3 P12 + peek P01.
- **Shop / product archive:** stage P01 · product images P13–P18. Single product: own image + related products.



## 6. Inner pages (≥ 8 + Woo templates)

Each page = **T1-page stage** → 645 px intro on white → page body → small close (kicker `VISIT` + one line + outline ink button to `/visit/`). Content width 1290 (gutters 75) for grids, 1140 (gutters 150) for lists, 645 for prose. Section spacing 150 px desktop / 96 px mobile (`tok(c)`). No sidebar.

1. **About / Our story** (`/about/`, `page-about`): stage "Twenty years / on Queen Street." · intro (2006, why Megumi opened an independent pharmacy) · T3 history rows 01–05 (years listed in section 1) with P05 + peek P09 · two narrative sections in the 645 column (how we work at the counter; what we will not do: no pressure sales, no promises about results) · close.
2. **Prescriptions** (`/prescriptions/`): stage "Bring it in, / we talk it through." · intro · full T3 (five rows, ≈60 words each) with P02 + peek P06 · "Ways to send a prescription" three short paragraphs (paper at the counter, e-prescription from your doctor, repeat request by email or phone) · ready times (section 7) as two lines, Literata 1.375rem · close.
3. **Services & fees** (`/services/`): stage · intro · T2 cards ×3 (P02, P06, P04) linking to Prescriptions, Medicine reviews, Vaccinations · **price list** (section 7, 7 rows) · note "All prices in Canadian dollars. Vaccines for travel are charged at cost in addition to the consultation." · close.
4. **Medicine reviews** (`/medicine-reviews/`): stage · intro · T3 rows (bring everything / one list / what changes / your copy / a follow-up call) with P03 + peek P06 · fee line "$35 · 30 minutes · by appointment" · link to Story 1 · close.
5. **Vaccinations & travel health** (`/vaccinations/`): stage · intro · T3 rows (flu / travel consultation / travel vaccines / records / aftercare) with P10 + peek P12 · fee lines (flu $25; travel consultation $45, 30 min) · "Book at the counter or by phone" · close.
6. **People** (`/people/`): stage "The people / behind the counter." · intro (people-story) · six T2 portrait cards (3 per row desktop, 2 tablet, 1 mobile; label = name; under the card role in accent 0.8125rem 700 + 40-word note each) · a 140-word story in the 645 column ("A Tuesday, 8:30 to 19:00") · close.
7. **Stories** (`home.html` posts index + `archive.html`): stage · intro · three story cards in T2 form (0.77, title inside bottom-left) · "Pharmacy notices" list in the home block 7 layout · pagination as numbers + accent pill.
8. **Single post** (`single.html`): T1-page stage with the featured image (fallback P12), category as the white kicker, title white; content column 645 px, body 1rem/2.0; signature line; previous/next as hairline rows with pills.
9. **Visit** (`/visit/`): stage · address, hours (section 7) and phone as a two-column block (left: address + phone + email; right: hours) · T3 "Getting here" rows with P12 + peek P01 · home delivery note (within 3 km, $4) · no map embed, no form required.
10. **Shop** (`archive-product.html`, `taxonomy-product_cat.html`, `product-search-results.html`): stage "The counter shelf." (P01) · intro "We keep a short shelf of things that help around medicines." · product grid 3 columns desktop / 2 / 1, gap 40, card: 1:1 image on `#F4F4F4` radius 7.5, hover 1.07, name Literata 500 1.125rem, price Public Sans 600 nowrap, text link `Add to cart` + pill. No sidebar.
11. **Single product** (`single-product.html`): two columns: gallery 1:1 radius 7.5 on `#F4F4F4` left; right: kicker = category, title Literata 2.25rem, price, short description, quantity + Add to cart (filled `#383736`, white text, radius 7.5, padding 18.75 × 37.5), a muted line "Questions about a product? Ask the pharmacist at the counter or call (416) 555-0148." Related products row below.
12. **Cart / Checkout / My account / Order received**: T1-page is **not** used (plain white head with kicker + title 3rem); summary column on `#F4F4F4` radius 15; buttons filled ink; notices with a 3 px accent left rule. Store pickup + local delivery wording; no prescription-medicine sales online.
13. **404 / search**: plain head (kicker + title) + outline ink button home.

### Price list component (Services & fees; any page that shows fees)
- Desktop **≥ 782 px: full content width** (1140 between the 150 gutters, or `alignwide` 1290; never a narrow column), a `table` or list with `width: 100%`, rows `border-bottom: 1px solid #DDDDDD`, padding 22px 0. Columns: service (Literata 500 1.1875rem) · detail (Public Sans 0.9375rem muted, wraps) · **price: `white-space: nowrap; text-align: right; font-variant-numeric: tabular-nums;` min-width 7.5rem**, Public Sans 600 1.0625rem, never truncated at 800 and 1280 widths.
- **< 782 px: stacked** (each row becomes a block: service + price on one line with the price right/nowrap, detail below). Every table on the site (fees, hours, Woo tables) stacks below 782.
- No reveal classes on the price list.

## 7. Fixed numbers and content (identical everywhere, all five languages)

- **Founded 2006**, Megumi Ward. **Address** 1184 Queen Street East, Toronto, ON M4M 1L4, Canada. **Phone** (416) 555-0148. **Email** counter@megumipharmacy.example.
- **Hours:** Mon–Fri 8:30–19:00 · Sat 9:00–17:00 · Sun 10:00–14:00 · statutory holidays closed (24-hour clock in every language).
- **People (6):** Megumi Ward — founder & pharmacist · Daniel Osei — pharmacist manager (inhalers, new medicines) · Leila Haddad — pharmacist (medicine reviews) · Ana Kovač — pharmacist (vaccinations & travel health) · Samuel Brandt — pharmacy technician (dispensing, blister packs) · Grace Liu — pharmacy assistant (front counter, deliveries).
- **Prescription process (5):** 01 Hand it in (paper, e-prescription or repeat request) · 02 We check it against your record (allergies, other medicines; about 10 minutes) · 03 Prepared and double-checked (technician prepares, a pharmacist checks) · 04 Talked through at the counter (or in the consultation room) · 05 A call two weeks later (for every new long-term medicine).
- **Ready times:** new prescriptions usually ready in **20 minutes**; repeat prescriptions ready within **24 hours**. ("usually", never "guaranteed".)
- **Price list (7 services):**

| Service | Detail | Price |
|---|---|---|
| Prescription dispensing | per item | $9.95 |
| Weekly blister packs | prepared each week, per week | $6.00 |
| Medicine review | 30 minutes, by appointment | $35.00 |
| Blood pressure check | 10 minutes, no appointment | Free |
| Flu vaccination | in the consultation room | $25.00 |
| Travel health consultation | 30 minutes; vaccines at cost | $45.00 |
| Home delivery | within 3 km | $4.00 |

- **Products (6, WooCommerce, category "Counter shelf" + sub-categories):** 1 Weekly Pill Organiser $14.00 (Medicine helpers) · 2 Digital Thermometer $19.00 (Home care) · 3 Travel First-Aid Pouch $28.00 (Travel) · 4 Unscented Hand Balm 75 ml $16.00 (Skin) · 5 Linen Heat Pack $18.00 (Home care) · 6 Cotton Wrist Support $24.00 (Home care). Home shelf = 1–4. Pickup at the counter free; local delivery $4.00 within 3 km. No medicines sold online.
- **Stories (3 posts, category Stories):** S1 "One list instead of twelve boxes" (Ruth, 78, medicine review with Leila; P06) · S2 "Two weeks before the flight" (a couple's travel consultation with Ana; P04) · S3 "The inhaler that finally worked" (Teo, 15, technique with Daniel; P07). First names only, fictional, no health outcome claims ("felt more confident", not "cured").
- **Notices (3 posts, category Notices):** "Flu vaccination clinics from 1 October" · "Holiday opening hours" · "Repeat prescriptions by email". Dates 2026.10.01, 2026.09.18, 2026.09.02.
- No awards, real media, real brands, real people or guaranteed outcomes. Medical wording neutral; footer disclaimer as in block 9 row.

## 8. Scroll effects (sp-scroll, R1 motion mapped)

Three effects + required parallax (one page ≤ 3 kinds: reveal--up, stagger, parallax).

| Effect (sp-*) | Where | R1 source (`tok(g)`) | Trigger / timing / easing / distance |
|---|---|---|---|
| `sp-parallax` (required) | Home block 1 `front-stage` Cover (P01) — **main**; Home block 9 `front-visit` Cover (P09); every inner T1-page stage | R1 fixed full-bleed photo with content sliding over it (CSS `position:fixed`) | scroll-linked (CSS `animation-timeline: view()`, IO + translate3d fallback in sp-scroll.js); `--sp-par: 8%` desktop, **6%** below 782 (kept on mobile); layer = `.wp-block-cover__image-background` (scale 1.18 by sp-scroll). Foreground text is never inside the moving layer. |
| `sp-reveal sp-reveal--up` | Home block 2 intro group (on the photo), 3 cards, 4 text + list, 5 story column, 6 head + rows container, 7 rows, 8 cards, 9 text; inner intros and close lines | R1 `.inview.-fadeIn` | IntersectionObserver once; set on the theme root: `--sp-dur: 1s`, `--sp-ease: cubic-bezier(.33,1,.68,1)`, `--sp-dist: 14px` (R1 1 s / cubic-bezier(.33,1,.68,1) / 14 px) |
| `sp-stagger` | parent of the T2 card row (home 3, Services, People, Stories), notices rows (home 7), shelf row (home 8) | R1 link fade with 0.5 s delay after the text | sp-scroll default 0.12 s steps |

- Hero part A: **no reveal and no load animation** (R1's line-by-line skew rise is not reproduced; hero must be visible at once). Price list, forms, checkout and legal text: no motion classes. No `sp-count`, `sp-marquee`, wipe or zoom.
- Not scroll: card hover `scale: 1.07` (.6 s cubic-bezier(.33,1,.68,1)), details row open `.25s ease-in-out`, round button hover colour `.2s`.
- Hard rules: reduced-motion / `?sp-static` / editor = final state; no-JS visible; transform-only ≤ 30 px; `html, body { overflow-x: clip }`; T3 panel `overflow-x: clip` for the peeking photo.
- Verify: `check-parallax.mjs` desktop 1280×900 and mobile 390×844 must show ≥ 6 px layer offset on `front-stage` and `front-visit`, 0 with reduced motion; ≥ 3 reveals hidden before entry and restored after.

## 9. Similarity table (target ≈ 80% of R1)

| Dimension | R1 Itoh Kampo (`tok`) | Megumi Pharmacy |
|---|---|---|
| Ground / text / panel / hairline | `#FFFFFF` / `#383736` / `#F4F4F4` / `#DDD` (a) | **same four values** |
| Accent role & area | `#79B121`, 1–2%, round button + labels + pills (a) | `#8A7070` (row hex), 1–2%, same roles |
| Big colour band | yellow `#F6BB37` ~12% rounded band (a) | not used (row: no accent field); share → `#F4F4F4` panel |
| First-screen saturation | ≈ 1% (a) | target ≤ 4%, cap 15% |
| Hero | fixed full-bleed photo 100dvh, 3 white lines left, wide tracking (e) | full-bleed photo Cover 100svh, 3 white lines left, ls .06em, sp-parallax 8% |
| Intro | 645 max, padding 109/37/120, white text on the photo, 1 px white outline button r7.5 pad 18.75×37.5 (c)(d) | identical numbers |
| Display type | mincho 43.1 / lh 1.6 / ls .25em (b) | Literata 400 clamp(2.5–4.25rem) / 1.6 / .06em (CJK .2em) |
| Section copy | 26.25 / lh 1.75 / ls .1em (b) | clamp(1.75–2.25rem) / 1.65 / .04em |
| Body | 15.94 / lh 2.0 (b) | 16 / 1.9 (intro 2.0) |
| Kicker | 15.94 / 700 / .14em accent (b) | 15 / 700 / .14em accent |
| Section spacing / gutters | 150 / 75 & 150 (c) | 150 / 75 & 150 (mobile 96 / 24) |
| Header | 87 px, transparent over photo, 60 px round accent button fixed right (c)(f) | 87 px, transparent over photo, 60 px `#8A7070` circle fixed right (≥1024) |
| Cards | 3 × 0.77, r 7.5, gap 40, label inside bottom-left 31.9/500, hover 1.07 (e) | 3 × 0.77, r 7.5, gap 40, label inside 28/500, hover 1.07 |
| Index rows | 01–05, 78 px, 1 px `#DDD`, index 15/500, title 18.75, arrow pill, accordion .25s (f)(g) | identical numbers, `core/details`, pill 30×18 |
| Panel | `#F4F4F4`, inset 15, rounded (c) | `#F4F4F4`, inset 15, r 15 |
| Step photo | 338×450 3:4 r 7.5 at ~61%, neighbours peek (e) | 338×450 3:4 r 7.5 at 58%, P08 peeks at the window edge |
| News block | Latin uppercase label left, hairline rows with date / chip / title / pill (f) | identical structure (notices) |
| Image radius | 7.5 everywhere (d) | 7.5 everywhere (panel 15) |
| Shadows | none (d) | none |
| Reveal motion | 1 s, cubic-bezier(.33,1,.68,1), 14 px, once (g) | `--sp-dur 1s`, same easing, `--sp-dist 14px`, once |
| Hero motion | per-line rise 1.2 s spring (g) | none (rule: no hero animation) |
| Backdrop motion | fixed photo (g) | sp-parallax 8% / 6% |
| Closing | footer over the fixed photo | visit text on parallax photo P09, white footer below |
| Photos | bright, warm, lifestyle, real (e) | bright film-grain documentary, real |

Deliberate differences (≈ 20%): accent hue (row), no yellow band, no hero load animation, Latin tracking reduced, visit Cover replaces the photo footer, product shelf block (store type).

## 10. Responsive requirements (binding)

- 390 px first screen: no vertical text, no absolutely positioned labels over text; header (absolute) must not overlap the hero copy (part A `padding-top: 120px`); info bar in normal flow; scroll cue hidden. No text overlap (auto-gates).
- No horizontal overflow at 390 and 1280 (peeking P08 clipped by the panel's `overflow-x: clip`; T2 hover zoom inside `overflow: hidden` figures).
- Price list and every table: ≥ 782 full content width with the price column `nowrap`, right-aligned, uncut at 800 and 1280; < 782 stacked.
- T2 rows: 3 → 1 column below 782 (People: 3 → 2 → 1). T3: photos above rows below 1024. Shelf: 4 → 2 × 2 below 782.
- Round button: fixed only ≥ 1024; in flow (menu toggle) below.
- Hero copy 2.5rem minimum, still three lines; zh-TW/ja hero 0.75× size, max two lines per sentence.

## 11. Home acceptance checklist (stage 1 review compares against this)

1. First screen = full-bleed P01 edge to edge with the gradient overlay, transparent 87 px header (wordmark left, nav **centred**, `EN` pill, Cart, **60 px `#8A7070` circle** right), three white Literata lines at the left (`huge` preset, max 4.25rem), subline, scroll cue, **info bar** with hours / address / 24-hour repeats / Plan your visit. No table, form, search, price, cards, giant centred word. `check-first-screen.py` ≤ 15% (target ≤ 4%).
2. Scrolling: the intro (645 px column, three paragraphs, white outline button r 7.5) appears **on the same photo**, then white block 3 starts flush under the photo. `sp-parallax` on the stage Cover moves the photo (≥ 6 px offset desktop and mobile), none under reduced motion.
3. T2: three 0.77 portrait cards P02–P04, radius 7.5, gap 40, label + accent pill **inside** bottom-left, hover 1.07.
4. People block: P05 3:4 + six-name hairline list with roles (the six people of section 7) — not a people grid.
5. Story block: P06 21:9 full content width + 645 column, two paragraphs, signature.
6. T3: inset 15 px `#F4F4F4` panel r 15, rows `01–05` 78 px with `#DDD` hairlines and accent pills, row 01 open with the accent underline, P07 at 338×450 r 7.5 and **P08 visibly peeking, cut by the window edge**; no horizontal scroll.
7. Notices: Latin display label left, three hairline rows (date, chip, title, pill).
8. Shelf: four 1:1 products P13–P16 with names and the exact prices ($14.00, $19.00, $28.00, $16.00); Woo add-to-cart works.
9. Visit: P09 parallax Cover, centred white text, hours/phone exactly as section 7, outline button.
10. Colours only from section 2 (white, `#383736`, `#F4F4F4`, `#DDD`, `#8A7070` small); no cream, no dark band, no accent field.
11. ≥ 13 photo positions, no repeat on the page, all film-grain from the one STYLE; no text/logos; 0 cutouts.
12. Motion: only sp-parallax, sp-reveal--up (1 s, cubic-bezier(.33,1,.68,1), 14 px), sp-stagger; none in part A; `?sp-static` shows everything; no transparent leftovers after scrolling to the bottom.
13. English home ≥ 250 words (≈ 600), ≥ 3 narrative paragraphs; numbers equal to section 7.
14. Fonts: Literata + Public Sans loaded via theme.json fontFace, identical in editor and front (check-editor-fonts.mjs).
15. auto-gates (home, `1 1`): pass at 390 and 1280; no overflow, no overlap, ≥ 8 images, `<html lang>` correct.
