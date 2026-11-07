# Asagiri Hotel: design spec (stage 1 spec, binding for implementation)

Slug `asagiri-hotel`, airport hotel, type `hospitality` (business-like: WooCommerce compatible, not required). Archetype editorial-magazine, page structure **day-schedule** (one night told in clock order). Font direction **serif**. IMAGERY **photo** (low-key documentary).

Reference: Mampei Hotel, https://www.mampei.co.jp/ (S5-Style, classic hotel). No secondary site. Measurements: `reference-tokens.md` (sections a–g, cited below as (a)…(g)). Screenshots: `ref/`. We borrow structure, techniques, colour relationships, the key-visual concept and motion. We never copy its photos, text, logo, the oxblood notice band or the whole page layout.

Fixed brand facts (identical on every page, in brand.md and in all five languages):
- **Asagiri Hotel**, opened **2009**, 14 Perimeter Road, beside **Aldmere International Airport** (fictional, international and neutral). **64 rooms** on three floors.
- Front desk open **24 hours, every day**. Currency **USD** in every language, no converted prices.
- One-line idea: *the hotel that is awake between the last arrival and the first departure.*

---

## 1. Signature techniques (three, each obvious at a glance)

### T1. Dark inset photo in a pale page, under a two-column link band (Mampei first screen, `ref/mampei-first.png`)
- Reference: a 176 px pale header band (logo left, eight links in two 150 px columns, a filled oxblood button and an outlined Menu pill right). Below it a near-black photograph inset 30 px from both sides of the window, running from y 176 past the fold. A calm centred serif tagline and a "since" line sit in the middle of the photo; "Scroll" small at the lower left; two translucent booking tiles fixed at the bottom centre. (c)(d)(e)
- Ours, home: header band 160 px on ground `#E7E4E1`; photo **P01** inset **30 px** left and right (x 30 → 1410 at 1440), top at y 160, height `max(600px, calc(100svh - 160px + 40px))` so the photo runs about 40 px past the fold like the reference; radius 0. Tagline centred, narrow column (max 46rem), two lines. Detailed geometry in section 3.1.
- Ours, inner pages: every inner page head uses the same frame: 30 px inset, height `clamp(420px, 62vh, 640px)`, dark low-key photo, centred narrow column with the page title (x-large) and an italic one-line subline. Never full-bleed edge to edge, never light photos.
- Must not be diluted: the photo must be **dark** (mean luminance ≤ 30%), the 30 px pale margin must be visible on both sides at ≥ 782 px (12 px on mobile), radius stays 0, the header band stays pale (not over the photo, not transparent).

### T2. Huge light serif two-line opener with a tiny label at its top-right, text + arrow pill to the right, then a three-photo strip flush right with an empty left gutter (Mampei "Rooms & Suites", `ref/scroll-mampei-2700.png`)
- Reference: title "Rooms & Suites" ~96 px, weight 300–400, line-height ~0.95, at x 170; tiny JP label 14 px at the top-right of the title (x 527); text column at x 624 (43%) with a "see all" link + 48×40 pill arrow; a 130 px oxblood line motif (interlocking diamonds) floating top-right; below, three 337×420 portrait photos (0.80) from x 380 to 1410, gaps 10 px, the left 26% empty, captions under each. (b)(c)(e)(f)
- Ours: opener title `xx-large` (6rem at 1440) Libre Baskerville 400, letter-spacing -0.02em, line-height 0.95, starts at **x 170** (11.8%). The tiny label is the **clock time** of that section ("23:40 · Last arrival"), Lora 0.8125rem, letter-spacing 0.04em, placed at the title's top-right (absolute inside the title group only at ≥ 1024 px; in flow above the title below 1024 px). Text column starts at **x 624 (43%)**, max-width 560 px, its top aligned with the second title line; then the arrow pill link. Motif: our own **three nested squares rotated 45° in a row** (not the reference drawing), 130×130 px, 1 px stroke accent `#730D0D`, inline SVG in an HTML block, at x 1140, 120 px above the text column top. Strip: three 4:5 photos, x **380 → 1410**, gap **10 px**, left 26.4% empty; caption under each (name Libre Baskerville 1.25rem, two lines Lora 0.9375rem muted, a price line).
- Must not be diluted: the title must reach ≥ 5.5rem at 1440 and stay two lines; the label must sit at the title's top-right (not under it); the strip must be flush right with the empty left gutter (not centred, not full width); photos are portrait 4:5 with radius 0.

### T3. Pale panel with a photo that rises above it and overhangs its left edge, and its partner: a wide inset photo with a translucent card that carries a 6 px top rule (Mampei "Restaurants" and "Weddings", `ref/scroll-mampei-3800.png`, `ref/scroll-mampei-6500.png`)
- T3a reference: panel `#F1E8E5` from x 30 to 1410; portrait photo 545×560 (0.97) at x 95 that starts **68 px above** the panel's top edge; huge title "Restaurants" at x 790 with the tiny label at its top-right; text below at x 913. (e)
- T3a ours: panel `#F1EEEC` x 30 → 1410, padding-bottom 120 px; photo near-square **1:1**, width 545 px (37.8%), left x **95**, top **-68 px** relative to the panel (`margin-top:-68px` on the photo column, panel `overflow:visible`); title (xx-large, one or two lines) starts at x 790 with the time label at its top-right; text column x 913 → 1340.
- T3b reference: wide photo 1240×700 (1.77) inset 100 px from each viewport edge; card 430×280 at x 169, top at 30% of the photo height, 85% white, **6 px oxblood top rule**, no shadow; title ~64 px serif, small label, "details" link with pill arrow. (d)(e)
- T3b ours: photo 16:9, x **100 → 1340** (inset 100 px), radius 0. Card width **430 px**, left **69 px** from the photo's left edge, top at **30%** of the photo height, background `rgba(241,238,236,.85)`, `border-top:6px solid #730D0D`, padding 44px 46px 40px, no shadow, no blur. Inside: title x-large Libre Baskerville, time label Lora 0.8125rem, one 40–50 word paragraph, arrow pill link.
- Must not be diluted: the T3a photo must visibly break the panel's top edge (≥ 60 px) and sit inset from the panel's left (not flush); the T3b card must overlap the photo (not sit beside it), keep the 6 px accent rule and stay translucent (the photo must show through).
- Mobile (< 782): T3a photo full width minus 24 px, still rising 40 px above the panel; T3b card drops **below** the photo in normal flow (margin-top -40px is allowed only at ≥ 782), keeps the top rule. No absolute positioning on mobile.

### Supporting details (not counted as signatures, but required)
- **Fixed booking tiles** (d): two tiles 160×52 px, gap 6 px, centred at the bottom, `bottom:20px`, background `rgba(241,238,236,.72)`, `backdrop-filter:blur(6px)`, radius 4 px, Lora 0.8125rem two lines centred, ink. Left "Reservations / Book a night" → Rates; right "Late check-in / Held to 04:00" → Late check-in. `position:fixed` only at ≥ 782 px; below 782 they render as a normal two-column row directly under the hero photo (inside the hero section), not fixed.
- **Label with hairline** (f): "Introduction" style labels, Lora 0.8125rem, then a 40 px 1 px hairline (`::after` with empty `content:""` and a border; the word itself is in the block markup).
- **Arrow pill** (d): text Lora 0.9375rem, gap 14 px, then a 48×40 pill `#F1EEEC`, `box-shadow: inset 0 0 0 1px rgba(42,42,40,.14)`, holding a 16 px 1 px-stroke arrow in `#730D0D`. Hover: pill fills `#730D0D`, arrow `#F1EEEC`, 0.3 s ease.

### Continuation to inner pages (required on all of these)
| Page | T1 inset dark head | T2 opener + flush-right strip | T3a panel overhang | T3b wide photo + card |
|---|---|---|---|---|
| Rooms | P08 | "Rooms / we keep", strip P03 P04 P05 | "Quiet / floors" with P10 | — |
| Late check-in | P06 | — | "The desk / waits" with P02 | "How we hold / your room" over P01 |
| Shuttle | P14 | — | — | "Calling / the shuttle" over P15 |
| Rates | P17 | — | — | "Every rate / includes" over P16 |
| Night pantry | P18 | — | "Breakfast / at 04:30" with P09 | — |
| About | P15 | "Kept by / the night desk", strip P02 P10 P07 (named captions) | — | — |
| FAQ | P13 | — | — | — |
| Contact | P16 | — | "Find / the desk" with P15 | — |
| News index / archive / category / tag | P08 (index), P12 (archive) | — | — | — |
| Single post | featured image in a T1 frame (inset 30 px, 56vh) | — | — | — |
T1 on all 10 page types; T2 on 2 pages + home; T3 (a or b) on 6 pages + home. Signature continues on well over 4 inner pages.

---

## Key visual concept

### (1) Reference first screen: concept, story, signature motion
- **What it shows**: a near-black macro of moss and wet stone under trees, one diagonal of daylight on the stone, inset in a pale paper page under a calm header band. In the middle, a centred serif line (in English: "A hotel is its people.") and under it "In Karuizawa since 1894." Bottom centre: two translucent booking tiles (Reservations / a seasonal offer); bottom left: "Scroll".
- **Story**: an old hotel defined by the people who keep it; told through low light, small details and a long date.
- **Signature motion**: a skippable intro with a tilted archive photo and a **counting year**; on scroll, photos open with a **clip-path polygon reveal** (`.js-show-block`, 0.25 s delay), text reveals (`.js-show-text`), photos drift slower than the page (`.js-parallax`). (g)

### (2) Our translation (airport hotel, same composition, same motion idea, same image type)
- **Scene**: the same dark, low-key, close photograph, but of the people who keep *this* hotel: at about 00:30, a **night porter's hand passes a key card across a dark wooden desk**; a **traveller sets a cabin bag down** at the edge of frame; one warm brass desk lamp is the only practical light; the lobby behind falls to black; through the glass at the back, a few blurred apron lights. Low-key documentary photograph, like the reference's moss macro: mostly near-black, one diagonal of warm light.
- **Story**: the hotel is awake between the last arrival and the first departure, and it is kept by the night desk. Tagline "Awake between the last arrival / and the first departure." Subline "Open all night beside Aldmere Airport since 2009."
- **Motion**: the reference's counting year becomes our counting year (`sp-count` on "2009" in the subline, 1.2 s, runs once on load, no intro loader); the photo drifts with `sp-parallax`; the two text lines rise once on load by CSS only (not sp-reveal). Lower on the page the clip-path photo reveal (`sp-reveal--wipe`) and the counting night clock (`sp-count` on 23:40 · 00:30 · 02:00 · 05:10) continue the same motion language.
- Same image type: real photograph, low-key, documentary. Not an illustration, not a high-key photo.

### (3) KV checklist (every row implemented and visible in the first screen at 1440×900; mobile notes in 3.1)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Pale header band with logo, links in two columns, filled oxblood button, Menu pill | Wordmark "Asagiri Hotel" left; 8 links in two columns of four, block centred; filled `#730D0D` "Book a night" button right (Menu pill only < 1024) | top band, 160 px, ground `#E7E4E1` | none | — |
| 2 | Near-black inset photo with 30 px pale margin, running past the fold | P01 night porter hands a key card across the desk, traveller sets down a cabin bag, one warm lamp | x 30 → 1410, y 160 → ~940 | `sp-parallax`, `--sp-par: 8%` (6% < 782) | **P01** |
| 3 | Centred serif tagline + "since" line | "Awake between the last arrival / and the first departure." + "Open all night beside Aldmere Airport since 2009." | centred column max 46rem, tagline centre at 54% of photo height | CSS load rise on the two text lines (24 px, 0.9 s, delay 0.2 s / 0.35 s) | on P01 |
| 4 | Counting year (intro) | "2009" in the subline counts up | inside the subline | `sp-count` (1.2 s easeOutCubic, built-in) | — |
| 5 | Fixed bottom pair of translucent booking tiles | "Reservations / Book a night" and "Late check-in / Held to 04:00" | fixed bottom centre, bottom 20 px | none | — |
| 6 | "Scroll" at lower left | "Scroll" Lora 0.8125rem `#F1EEEC` + 1 px × 40 px vertical hairline under it | last flex child of the cover content, aligned left, 50 px from the photo's left and bottom edges | none | — |
P01 is listed in section 6 as the home hero image.

---

## 2. Colour

Taken from Mampei (a). The ground is cooled; everything else stays within ±5% lightness of the reference.

| Role | Hex | Source token | Use | Share |
|---|---|---|---|---|
| Ground | `#E7E4E1` | (a) ground `#ECE2DC`: L −1.5%, chroma reduced (see reason) | page ground, header band | ~50% |
| Panel | `#F1EEEC` | (a) panel `#F1E8E5`, same L, same cooling | T3a panel, tiles, arrow pill, T3b card (85%) | ~8% |
| Ink | `#2A2A28` | (a) ink `#222` + 3% L (row hex) | text, close band, rules | ~22% (text + close band) |
| Deep | `#1B1B1A` | (a) hero dark `#000–#222` | photo overlay tint, footer ground | ~8% |
| Accent (oxblood) | `#730D0D` | (a) accent `#730D0D` (exact) | Book button, arrows, motif lines, T3b top rule, link underline on hover | ≤ 3%, never a section ground |
| Muted text | `#5E5A56` | derived from ink on ground | captions, meta, label hairlines | — |
| On-dark text | `#F1EEEC` | = panel | text on photos and ink bands | — |

- Reason for cooling the ground: `#ECE2DC` reads as a pink-beige paper; the project rule forbids a beige/cream default, and an airport night calls for a cooler grey-paper. The faint warm undertone stays (R > B) so the oxblood relationship from the reference is unchanged.
- **Not used**: the reference's full-bleed oxblood notice band (81% saturated) and its per-section ground flips.
- Recent themes' mains avoided: Ibuki `#131414`+white, Hibari navy `#001650`, Waku white + `#2E2B33` + orange, Misora pine `#3E5346`. Ours is a grey-paper ground with oxblood; no white page ground.
- Contrast: ink on ground 12.6:1; muted on ground 5.4:1; `#F1EEEC` on `#730D0D` 10.9:1; on-dark text on P01 needs the overlay below.
- **First-screen saturated share** (scripts/check-first-screen.py, S > 35%, V > 24%): reference 0.7%; hard cap **15%** (common rule; row cap 30%); our target **≤ 6%**. Achieve with a muted photo grade (P01 lamp is the only warm area, ≤ 4% of the frame), cover overlay `rgba(27,27,26,.30)`, and only the small Book button in accent.

---

## 2b. Typography (font_direction = serif)

| Use | Latin | zh-TW | ja | Size / weight / line-height / tracking | Source token |
|---|---|---|---|---|---|
| Display (titles, tagline, captions' names, prices) | **Libre Baskerville** 400 (+ 400 italic, 700 for strong) | "Libre Baskerville", **"Noto Serif TC"**, "Songti TC", "PMingLiU", serif | "Libre Baskerville", **"Noto Serif JP"**, "Hiragino Mincho ProN", "Yu Mincho", serif | see scale | (b) the-seasons light serif |
| Body, nav, labels, UI | **Lora** 400/500 (+ italic) | Lora, "Songti TC", "PMingLiU", "MingLiU", serif (no bundled zh font, no JP font) | Lora, "Hiragino Mincho ProN", "Yu Mincho", "YuMincho", serif | body 1.0625rem / 1.9 | (b) body 16–17 px, 1.9 |

Scale (theme.json `fontSizes`):
| Slug | Size | Use | Source |
|---|---|---|---|
| small | 0.8125rem | time labels, Scroll, tiles, captions meta (tracking 0.04em) | (b) label 12–14 px, tracking 0.04em |
| base | 1.0625rem | body, line-height 1.9 | (b) 16–17 px / 1.9 |
| medium | 1.25rem | caption names, price rows, nav (0.9375rem) | (b) |
| large | 1.75rem | hero subline (Lora italic), pull lines | (b) subline 28 px |
| x-large | 3.5rem | hero tagline (3.25rem on the hero, see 3.1), inner page heads, T3b card titles | (b) tagline 56 px, Weddings ~64 px |
| xx-large | `clamp(3.25rem, 6.6vw, 6rem)` | T2/T3a openers; **max 6rem ≥ 4.25rem** | (b) 90–100 px |
- Display: weight 400, letter-spacing -0.02em, line-height 0.95 for xx-large, 1.15 for x-large. Body line-height 1.9 (CJK 1.85). Nav Lora 0.9375rem, tracking 0.04em, no uppercase anywhere (reference has none).
- zh-TW / ja: display sizes × 0.75 (xx-large → `clamp(2.4rem, 4.9vw, 4.5rem)`), letter-spacing 0.04em, line-height 1.3; body 1rem / 1.85. fr/de: `hyphens:auto` on body and on headings ≥ x-large.
- Loading: all faces in **theme.json `fontFamilies[].fontFace`** (woff2 in `assets/fonts/`): Libre Baskerville 400, 400 italic, 700; Lora variable 400–700 normal + italic; Noto Serif TC (heading subset, 500) and Noto Serif JP (heading subset, 500) using the Hokuto/Hada subset method (the zh subset script is broken). Same faces in editor and front end. Because style.css uses `:lang()` rules, copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it. Every font file listed in theme-meta.json `fonts[].files` with OFL licence files; family names in readme.txt.

---

## 3. Home page

### 3.1 First screen (1440×900), composition
- **Header band** 160 px, ground `#E7E4E1`, three-column grid `1fr auto 1fr`, padding 30 px:
  - left: wordmark "Asagiri Hotel" Libre Baskerville 1.5rem ink at x 30, top 30 px.
  - centre: one `core/navigation` (the only top menu), links laid out as a **grid of two columns × four rows**, column width 170 px, row pitch 31 px (`grid-auto-flow:column; grid-template-rows:repeat(4,auto)`), Lora 0.9375rem ink; links: Rooms, Late check-in, Shuttle, Rates / Night pantry, About, News, Contact. Hover: 1 px accent underline.
  - right: filled button "Book a night" (→ Rates) `#730D0D` ground, `#F1EEEC` Lora 0.875rem, 42 px high, padding 0 22px, radius 4 px; with a small ↗ arrow. (Reference Online-shop button.)
- **Photo** P01 as a `core/cover` (class `sp-parallax`, `--sp-par:8%`, overlay `#1B1B1A` at 30%), inside a group with 30 px side padding. Height `max(600px, calc(100svh - 120px))` → about 40 px past the fold.
- **Cover content** is a flex column, `justify-content:space-between`, padding 50 px, full height:
  1. empty top spacer;
  2. centred narrow column (max 46rem, text-align centre): tagline Libre Baskerville **3.25rem**/1.2, `#F1EEEC`, two lines with `<br>` after "arrival"; 22 px gap; subline Lora italic 1.75rem/1.3 `#F1EEEC` at 92% opacity, `sp-count` on the paragraph (first number = 2009);
  3. bottom row, left-aligned: "Scroll" + 40 px vertical hairline.
- **Tiles**: as section 1, fixed, centred at the bottom of the window over the photo.
- Forbidden on the first screen: tables, forms, search boxes, giant centred words (the tagline stays ≤ 3.25rem), vertical text, cut-outs, high-saturation areas.
- **Mobile 390×844**: header 72 px (wordmark 1.25rem left; Book button 36 px + Menu outlined pill 60×40 right; nav in the core overlay). Photo inset **12 px**, height `max(520px, 72svh)`, cover padding 24 px; tagline 2rem/1.25 (centred, no forced `<br>`), subline 1.125rem; Scroll row stays in flow at the bottom. Tiles: in-flow row under the photo, two equal columns, 52 px high. **No vertical text, no absolutely positioned labels, nothing overlapping**; the auto-gates mobile overlap check must pass.

### 3.2 Block order (one night in clock order)
| # | Pattern | Purpose | Layout and photo positions | Copy |
|---|---|---|---|---|
| 1 | `front-hero` | KV | section 3.1; **P01** | ~25 words |
| 2 | `front-intro` | who we are, kept by people | label "Introduction ——" at x 30; text column x 308 (21%) → 820, three short paragraphs Lora 1.25rem/1.9 (reference intro size); **P02** portrait 3:4, 318 px wide, flush right at x 1092 → 1410, top aligned with the text. Under the paragraphs: "On the night desk" small label, then **seven names** as two columns of ruled lines (name Libre Baskerville 1.125rem, role + hours Lora 0.875rem muted, 1 px rule `rgba(42,42,40,.18)`) — a list, not a portrait grid. | 120 words + 7 names |
| 3 | `front-rooms` | 23:40 Last arrival: rooms and rates | **T2** opener "Rooms / we keep", label "23:40 · Last arrival", text 55 words, arrow pill "All rooms" → Rooms; motif SVG; strip **P03 P04 P05** with captions (Night room / Twin room / Quiet suite, two lines each, "from $138", "from $164", "from $246"). 120 px below the strip: **rates rows** (section 7, all 7 rows) full content width x 100 → 1340, as `core/table.ag-rates`; a line under it "Prices per room per night, taxes included." | 55 + 3×22 words + rates |
| 4 | `front-checkin` | 00:30 Late check-in | **T3b**: **P06** 16:9 inset 100 px; card: label "00:30 · Late check-in", title "We hold / the room", 48 words (held to 04:00 without a flight number, all night with one), arrow pill → Late check-in. | 50 words |
| 5 | `front-shuttle` | 02:00 Shuttle on call | ground; left: **P07** 4:5, x 100 → 520; right x 624 → 1340: label "02:00 · Shuttle", title x-large "The shuttle / is a phone call away", 45 words, then four **ruled time rows** (not a table; Lora 1.0625rem, time in Libre Baskerville nowrap right): "Every 20 minutes — 05:10 to 00:30", "On call, ready in 10 minutes — 00:30 to 05:10", "Terminal 1 — 6 minutes", "Terminal 2 — 9 minutes"; arrow pill → Shuttle. | 70 words |
| 6 | `front-clock` | the night at a glance | full-width inset (30 px) `core/cover` **P08** 21:9, min-height 70vh, overlay `#1B1B1A` 45%, `sp-parallax --sp-par:10%` (6% < 782). Foreground centred container 1100 px: four numerals in a row **23:40 · 00:30 · 02:00 · 05:10** Libre Baskerville x-large `#F1EEEC` each with `sp-count`, a 1 px `#F1EEEC` 40% hairline between them, and two lines Lora 0.9375rem under each (Last arrival / rooms ready; Late check-in held; Shuttle on call; First shuttle to the terminals). Mobile: 2×2. | 4×8 words |
| 7 | `front-departure` | 05:10 First departure | **T3a**: panel `#F1EEEC`; **P09** 1:1 rising 68 px above the panel at x 95; title "First / departure" with label "05:10 · First shuttle" at x 790; 70 words (early breakfast from 04:30, wake-up call, bag hold, first shuttle 05:10); arrow pill → Night pantry. | 70 words |
| 8 | `front-notes` | Night notes (stories) | opener small (x-large title "Night notes" at x 170, label "From the desk log" top-right); Query Loop, 3 newest posts, 3 columns x 170 → 1340 gap 40 px, featured image 3:2 radius 0 (**P11 P12 P13**), date + title Libre Baskerville 1.25rem + 20-word excerpt; arrow pill "All notes" → News. | Query Loop |
| 9 | `front-close` | book / call | ink `#2A2A28` band inset 30 px (same frame as the hero, no photo), padding 160 px 0, centred narrow column: Libre Baskerville x-large `#F1EEEC` "Land late. / The desk is up."; Lora 1.0625rem two lines (address, "Front desk 24 hours · +1 555 0140 2009"); two arrow pills on dark (pill `#F1EEEC`): "Book a night" → Rates, "Call the shuttle" → Shuttle. | 35 words |
Footer: ground `#1B1B1A`, full width, Lora 0.875rem `#F1EEEC` 80%: wordmark, address, desk hours, footer links (FAQ, Rates, Contact, News), "© Asagiri Hotel". Section gaps: **200 px** desktop (reference 160–300 px of paper), 96 px mobile.

Home photo positions: P01, P02, P03, P04, P05, P06, P07, P08, P09, P11, P12, P13 = **12**, no repeats. English home ≥ 300 words with narrative paragraphs in #2, #3, #4, #7 (≥ 3). CJK home ≥ 500 characters.

### 3.3 Comparison with the latest four themes (block order must not match)
| # | Ibuki Cardiology | Hibari Flight | Waku Exhibits | Misora Links | **Asagiri Hotel** |
|---|---|---|---|---|---|
| 1 | hero T1 (white band + photo) | window hero, huge corner | full-bleed hero | ticket-frame hero | **dark photo inset 30 px in pale page under a two-column link band, fixed tiles** |
| 2 | problem statement | approach | photo-filled statement | sheet | **intro text at 21% + flush-right portrait + night-desk name list** |
| 3 | clinics T2 | circuit | halls rows | rounds | **23:40 huge opener + flush-right 3-photo strip + rates** |
| 4 | ticker | licences | planning hour | course full-bleed | **00:30 wide inset photo + translucent card** |
| 5 | first visit T2 mirrored | lesson navy band | full photo band | season ink band | **02:00 portrait + ruled shuttle times** |
| 6 | proof slate | field photo | prices | people | **night-clock band (counting times, parallax)** |
| 7 | fees | crew | stories | fees | **05:10 pale panel, photo breaking its top edge** |
| 8 | follow-up photo strip | fees | request cards | stories | **night notes (3 posts)** |
| 9 | people | stories | — | journal | **ink close in the hero's frame** |
| 10–11 | news, close | trial | — | visit | — |
Why not alike: Asagiri is the only one ordered by the clock (four timed sections) and the only one with no separate people section (names live in the intro) and no stand-alone fees block (rates follow the rooms strip). Its shapes (inset dark frame under a link band, top-right time labels on 6rem openers, flush-right strip with a 26% empty gutter, photo breaking a panel's top edge, translucent card with a 6 px rule) are not used by Ibuki (white band + info bar), Hibari (window with one huge corner, stickers), Waku (full-bleed opaque cards, tape line) or Misora (ticket frame, ink season band).

---

## 5. Inner pages (≥ 8, plus posts templates)

Every page: T1 inset dark head → body in the ground → small close line with an arrow pill. No sidebar. Texts in brand.md.

1. **Rooms** (`page-rooms`): head P08 "Rooms" / "Sixty-four rooms on three quiet floors." T2 opener "Rooms / we keep" + strip P03 P04 P05 (captions with "from" prices). Then five room types as text rows in a 760 px column (name, size, beds, sleeps, price nowrap right): Nap room, Night room, Twin room, Family room, Quiet suite (prices from section 7). T3a "Quiet / floors" with P10 (blackout curtains, triple glazing, no room above the lift lobby, housekeeping between 11:00 and 14:00 only). Close → Rates.
2. **Late check-in** (`page-late-check-in`): head P06 "Late check-in" / "We hold the room until you land." T3b over P01 "How we hold / your room" (rules in section 7). The four-step process as four numbered paragraphs in the 760 px column (not a step grid). T3a "The desk / waits" with P02 (named night manager Tomasz Wierzbicki). Close → Contact.
3. **Shuttle** (`page-shuttle`): head P14 "Shuttle" / "Called from the desk, any hour." Time rows (section 7) full width; how to call (desk phone button 9, or ask at the desk; from arrivals: Door 4 kerb); T3b over P15 "Calling / the shuttle". Driver named (Lucas Ferreira). Close → Late check-in.
4. **Rates** (`page-rates`): head P17 "Rates" / "One price per room per night." Full rates table (section 7; ≥ 782 full content width, price column nowrap right; mobile stacked); policies (check-in from 14:00, check-out 11:00, hold rules, cancellation free until 18:00 on the arrival day); T3b over P16 "Every rate / includes" (shuttle, wake-up call, bag hold, Wi-Fi). Close → Contact.
5. **Night pantry** (`page-night-pantry`): head P18 "Night pantry" / "Something warm after a late landing." Pantry 22:00–03:00 (soup, toasted sandwiches, fruit, tea), early breakfast 04:30–10:00 ($18); T3a "Breakfast / at 04:30" with P09; named cook Samir Haddad. Close → Rates.
6. **About** (`page-about`): head P15 "About" / "Opened in 2009 for the night between flights." T2 opener "Kept by / the night desk" + strip P02 P10 P07 with name captions (Tomasz Wierzbicki, Hanna Lindgren, Lucas Ferreira); history paragraphs (2009 opening, 64 rooms, why the desk never closes); all seven people as ruled rows (name, role, hours, one line). Close → Contact.
7. **FAQ** (`page-faq`): head P13 "Questions" / "What travellers ask at 02:00." Ten `core/details` with 1 px rules (late arrival, flight number, shuttle hours, early breakfast, wake-up, bag hold, cancellation, children, accessibility, parking). Close → Contact.
8. **Contact** (`page-contact`): head P16 "Contact" / "The desk answers at any hour." T3a "Find / the desk" with P15: address, phone, email, desk hours lines, arrow pill (mailto). Directions from both terminals. No form required.
9. **News** (posts index `home.html`, `archive.html`, `category.html`, `tag.html`): head P08 (index) / P12 (archive) with title "News" / "Night notes and notices"; list: first post large (image 3:2 left 7/12, text right), then 2-column cards, radius 0. Standard pages news and newsletter → posts page.
10. **Single post** (`single.html`): category label + date, title x-large centred narrow column, featured image in a T1 frame (inset 30 px, 56vh, `sp-parallax 6%`), text column 680 px.
11. **404 / search**: T1 frame without photo (ink), title, arrow pill home.

---

## 6. Photos (18, Grok, one at a time, read every one)

STYLE (identical on every prompt, `IMAGE_STYLE`):
`low-key documentary photograph, real hotel interior at night, one warm practical light source per frame (brass desk lamp, bedside lamp or window glow), deep soft shadows falling to near black, muted palette of charcoal, warm grey, dark walnut and dim amber with a hint of oxblood, 35mm lens, natural film grain, quiet candid moment, people seen from the side or as hands and silhouettes, diverse adults, modern international airport hotel, no text, no logos, no signage lettering, no readable screens or clocks, no Japanese elements`

Imagery row: IMAGERY = photo → real-photography STYLE above (reference is photographic). 18 images, 0 cut-outs, each ≤ 300 KB and ≤ 2000 px, one readme line each (AI-generated, CC0). Re-generate any image with text, logos, broken hands, a bright high-key look or a lit area over ~10% of the frame.

| ID | Subject / composition | Ratio | Used on (never twice on one page) | Home |
|---|---|---|---|---|
| P01 | night porter's hand passes a key card across a dark wooden desk to a traveller who sets a cabin bag down at the frame edge; brass lamp at left; lobby falls to black; blurred apron lights through glass behind | 1.9:1 (2000×1050) | Home hero; Late check-in T3b | **yes (hero)** |
| P02 | night manager writing in a paper ledger at the desk, lamp light on the page, face turned down | 3:4 | Home intro; Late check-in T3a; About strip | **yes** |
| P03 | single "Night room": queen bed turned down, bedside lamp on, heavy curtains a hand open, blurred runway lights outside | 4:5 | Home strip; Rooms strip | **yes** |
| P04 | twin room, two single beds, one lamp between them, dark wood headboards | 4:5 | Home strip; Rooms strip | **yes** |
| P05 | quiet suite corner: armchair, floor lamp, low table with a glass of water, window glow | 4:5 | Home strip; Rooms strip | **yes** |
| P06 | 00:30 lobby: a key envelope waiting on the empty counter under the lamp, a porter by the glass door looking out at the kerb | 16:9 | Home check-in T3b; Late check-in head | **yes** |
| P07 | small dark shuttle van at the hotel kerb at night, driver holding the sliding door, traveller lifting a suitcase in | 4:5 | Home shuttle; About strip | **yes** |
| P08 | hotel window at night looking over the apron, aircraft lights blurred into soft dots, armchair silhouette in the foreground | 21:9 | Home night-clock band; Rooms head; News index head | **yes** |
| P09 | 04:30 breakfast counter: coffee poured into a cup, a traveller in a coat with a bag strap on the shoulder, warm pendant light | 1:1 | Home departure T3a; Night pantry T3a | **yes** |
| P10 | housekeeper folding towels in a dim linen room, one lamp | 4:5 | Rooms T3a; About strip | no |
| P11 | small group of tired passengers from a diverted flight at the desk, porter handing out key envelopes | 3:2 | Post 1 (home notes) | **yes** |
| P12 | parent carrying a sleeping child down a dim corridor, roller bag behind | 3:2 | Post 2 (home notes); News archive head | **yes** |
| P13 | two flight crew in plain dark uniforms (no insignia) walking a corridor with roller bags | 3:2 | Post 3 (home notes); FAQ head | **yes** |
| P14 | shuttle interior at night, empty seats, luggage rack, window streaked with lights | 3:2 | Post 4; Shuttle head | no |
| P15 | hotel exterior at blue hour: low three-storey building, lit entrance, airport fence and distant tower lights | 16:9 | About head; Shuttle T3b; Contact T3a; Post 6 | no |
| P16 | entrance canopy and lit glass door at night, wet pavement reflecting the light | 16:9 | Contact head; Rates T3b | no |
| P17 | bedside detail: glass of water, folded eye mask, warm lamp, edge of white sheet | 3:2 | Rates head; Post 5 | no |
| P18 | night pantry shelf under a lamp: soup pot, wrapped sandwiches, fruit bowl, tea tins without labels | 16:9 | Night pantry head | no |
Posts: 1 P11, 2 P12, 3 P13 (newest three, shown on home), 4 P14, 5 P17, 6 P15. News index shows P08 head + P11 P12 P13 P14 P17 P15 (no repeat).

---

## 7. Fixed numbers (identical on Home, inner pages, brand.md, footer, tiles and all five languages)

Rates (USD, per room per night, taxes included) — **7 rows**:
| Item | Details | Price |
|---|---|---|
| Nap room | 4 hours at any time of night, one queen bed | $64 |
| Night room | one queen bed, until 11:00 | $138 |
| Twin room | two single beds, until 11:00 | $164 |
| Family room | one queen + two singles, sleeps 4 | $212 |
| Quiet suite | sitting room and bath, top floor | $246 |
| Late check-in hold | room held until 04:00, or all night with a flight number | Included |
| Early breakfast | 04:30–10:00, per person | $18 |
Table rules: `core/table` with class `ag-rates`, `width:100%` of the content (x 100 → 1340 at 1440) at ≥ 782 px; columns 28% / auto / `min-width:9ch`; price cell `white-space:nowrap; text-align:right`, Libre Baskerville 1.25rem; 1 px rules `rgba(42,42,40,.18)`; no cell padding over 16 px horizontally. < 782 px: `table, tbody, tr, td {display:block}`; each row = name + price on one line (`tr` grid `1fr auto`), details below in muted text. No sp-reveal on the table.

- **People (7)**: Ines Marchetti, general manager (since 2014); Tomasz Wierzbicki, night manager (22:00–07:00); Amara Okonkwo, night porter; Priya Raman, reservations and late check-in; Lucas Ferreira, shuttle coordinator and driver; Hanna Lindgren, housekeeping lead; Samir Haddad, night pantry and early breakfast.
- **Stories (4 posts, category "Night notes")**: "When a flight diverted at 01:50"; "A family after a missed connection"; "Crew rest after a ground stop"; "The 04:30 wake-up". Plus 2 posts in category "News": "Winter shuttle times" (same times as below), "The night pantry this season". Tags: late-arrival, shuttle, rooms, breakfast, crew, family.
- **Place**: 14 Perimeter Road, Aldmere International Airport (fictional). Phone +1 555 0140 2009 (fictional), desk@asagirihotel.example.
- **Hours**: front desk 24 hours, every day; check-in from 14:00, check-out 11:00; night pantry 22:00–03:00; early breakfast 04:30–10:00.
- **Shuttle**: free; scheduled every 20 minutes **05:10–00:30** (first run 05:10, last 00:30); **on call 00:30–05:10**, ready in 10 minutes; Terminal 1 in 6 minutes, Terminal 2 in 9 minutes. Pick-up at Arrivals Door 4. Use exactly these values everywhere.
- **Late check-in process (4 steps)**: 1) book and add your flight number; 2) the desk follows the arrival time; 3) your key envelope waits under the lamp; 4) call from Arrivals Door 4 and the shuttle collects you. Hold: until 04:00 without a flight number, all night with one. Cancellation free until 18:00 on the arrival day.
- **Night clock**: 23:40 last arrival (rooms ready), 00:30 late check-in held / last scheduled shuttle, 02:00 shuttle on call, 05:10 first shuttle.
- The tile text "Held to 04:00" and the rates row must match.

---

## 8. Scroll techniques (sp-scroll, copied as-is from `pipeline/assets/sp-scroll/`)

| Effect | sp-* class | Where | Reference source and its trigger / time / easing | Ours |
|---|---|---|---|---|
| Photo clip-path reveal | `sp-reveal sp-reveal--wipe` (clip on the child img) | home: P02 figure, each strip figure (parent `sp-stagger`), P06 figure, P07 figure, P09 figure; inner: T2 strips, T3 photos | Mampei `.js-show-block`: IntersectionObserver, rootMargin 0, threshold 0, start delay 0.25 s, 4-point polygon clip (duration not extracted) (g) | built-in 1.1 s `cubic-bezier(.77,0,.175,1)`, top-to-bottom; stagger 0.12 s on the strip |
| Text reveal | `sp-reveal sp-reveal--up` inside `sp-stagger` | home: intro paragraphs group, opener text column (#3, #7), shuttle rows group, T3b card | Mampei `.js-show-text`, same observer (g) | 24 px (`--sp-dist`), 0.8 s `cubic-bezier(.23,1,.32,1)`, 0.12 s steps |
| Counting numbers | `sp-count` (no sp-reveal in the hero) | hero subline ("2009"); night-clock numerals (#6) | Mampei intro year counter on load (g) | built-in 1.2 s easeOutCubic; leading zeros are restored at the end |
| Parallax | `sp-parallax` | hero cover P01 (`--sp-par:8%`, mobile 6%); night-clock cover P08 (`--sp-par:10%`, mobile 6%); inner heads 6% | Mampei `.js-parallax` (GSAP ScrollTrigger, continuous, linear) (g) | CSS scroll-driven `view()`, linear, layer scale 1.18; IO + translate3d fallback |
- Hero: no `sp-reveal` at all; its text rise is a CSS keyframe guarded by `html.sp-js:not(.sp-no-motion)` inside `@media (prefers-reduced-motion:no-preference)`, `translate 24px → 0`, opacity 0 → 1, 0.9 s `cubic-bezier(.22,.61,.36,1)`, delays 0.2 s / 0.35 s.
- Not on: tables, forms, the rates rows, the fixed tiles, query-loop cards (keep them static), legal text. At least 3 reveals below the fold for check-parallax. No horizontal scrollers (the strip stacks on mobile).
- Mobile parallax kept (6%). `?sp-static`, reduced motion and the editor show the final state.

---

## 9. Responsive rules
- 390 px: no vertical text anywhere; no absolutely positioned labels on the first screen (time labels go in flow above titles below 1024 px); T3b cards drop below their photos; the strip stacks to one column (4:5 photos, full width minus 24 px, captions under each); intro portrait goes under the text at 70% width, right-aligned; night clock 2×2; all tables stacked; no horizontal overflow at 390 or 1280.
- 782–1023 px: openers 4.25rem, label above the title, strip keeps the left gutter at 12%; rates table full content width.
- ≥ 782 px: price column never cut (auto-gates checks 800 and 1280).

---

## 10. Similarity targets (≈ 80%; values from reference-tokens.md)
| Dimension | Reference (token) | Asagiri |
|---|---|---|
| Ground | `#ECE2DC` (a) | `#E7E4E1` (L −1.5%, cooled; reason in 2) |
| Panel | `#F1E8E5` (a) | `#F1EEEC` |
| Ink / hero dark | `#000–#222` (a) | `#2A2A28` / `#1B1B1A` |
| Accent | `#730D0D` <3% (a) | `#730D0D` ≤3% |
| First-screen saturated | 0.7% (a) | ≤ 6% target, 15% cap |
| Display face | light high-contrast serif, 300–400 (b) | Libre Baskerville 400, -0.02em |
| Opener size / line-height | 90–100 px / 0.95 (b) | 6rem (96 px) / 0.95 |
| Hero tagline / subline | 56 px / 28 px (b) | 52 px (3.25rem) / 28 px (1.75rem) |
| Body | 16–17 px / 1.9 (b) | 17 px / 1.9 |
| Label | 12–14 px, tracking 0.04em (b) | 13 px, 0.04em |
| Page gutter | 30 px (c) | 30 px |
| Header band | 176 px, links in two 150 px columns (c) | 160 px, two 170 px columns |
| Section gap | 160–300 px (c) | 200 px |
| Opener positions | title x 170, text x 624 (43%) (c) | same |
| Strip | x 380 → 1410, 3 × 337 px, gap 10 px, 0.80 (c)(e) | same, 4:5 |
| Panel photo | 545 × 560, x 95, 68 px above panel (e) | 545 × 545, x 95, 68 px above |
| Wide photo + card | 1240 × 700 inset 100 px; card 430 × 280 at x 169, top 30%, 85% white, 6 px rule (d)(e) | same values, card `rgba(241,238,236,.85)` |
| Hero photo | inset 30 px, from y 176, ~1.9:1, past the fold (e) | inset 30 px, from y 160, 1.9:1, ~40 px past the fold |
| Corners | photos 0; Menu pill; button 4 px (d) | photos 0; Menu pill; button and tiles 4 px |
| Arrow pill | 48 × 40, oxblood arrow (d) | 48 × 40, `#730D0D` arrow |
| Tiles | 160 × 52, gap 6 px, fixed bottom centre (d) | same (in flow < 782) |
| Decoration | 130 px 1 px oxblood diamond motif; label + 40 px hairline (f) | 130 px 1 px nested-diamond motif (own drawing); label + 40 px hairline |
| Motion | clip reveal (0.25 s delay), text reveal, parallax, year counter (g) | wipe 1.1 s, up 0.8 s, parallax 8–10%, sp-count 1.2 s |
| Imagery | low-key documentary interiors (e) | low-key documentary airport-hotel night (STYLE in 6) |
Photos and copy are our own; nothing is copied from the reference.

---

## 11. Home acceptance checklist (stage 1 review compares against this)
1. First screen at 1440×900 shows all six KV rows: pale 160 px header band with two-column links and the oxblood Book button; dark P01 inset 30 px; centred two-line tagline + subline with "2009" counting; fixed two tiles; "Scroll" lower left. P01 shows the key card passing across the desk and the cabin bag.
2. `check-first-screen.py` ≤ 15% (target ≤ 6%). No table/form/search/vertical text on the first screen; 390 px first screen has no overlapping text.
3. T2 on #3: 6rem two-line opener at x 170 with the "23:40" label top-right, text at 43%, arrow pill, motif, flush-right 4:5 strip with the empty left gutter.
4. T3b on #4: inset 16:9 photo with the translucent card and 6 px oxblood rule overlapping it. T3a on #7: P09 breaking the panel's top edge by ~68 px.
5. Four timed sections in order 23:40 → 00:30 → 02:00 → 05:10, and the night-clock band with four counting numerals over P08 with parallax.
6. Rates: 7 rows, full content width at 800 and 1280, prices nowrap right and not cut; stacked on mobile; same prices on Rooms and Rates pages.
7. 12 photo positions, no repeats, all from the same STYLE, no text/logos/bad hands.
8. Motion: `check-parallax.mjs` passes (hero + clock parallax ≥ 6 px desktop and mobile; ≥ 3 reveals hidden before entering; none left hidden; reduced motion static). No reveal in the hero.
9. Fonts: Libre Baskerville / Lora, Noto Serif TC / JP for CJK headings, loaded via theme.json fontFace, same in editor and front end; max size 6rem.
10. Colours as section 2; accent ≤ 3%; no white page ground; no oxblood band.
11. Block order equals 3.2 and differs from the four themes in 3.3; no portrait grid, step grid, vertical timeline, dashboard, side rail, collage or cut-outs.
12. Copy: ≥ 300 English words, ≥ 3 narrative paragraphs, all seven names, fixed numbers as section 7.
