# Madoka Childcare: design spec (stage 1, binding for implementation)

Slug `madoka-childcare`, a childcare centre for babies and toddlers of working parents (type **education**, page_structure **day-schedule**). Row b10-2: split-screen, hero photo-left-text-right, top-bar nav, real documentary photography, palette walnut `#7A6858` as the one muted accent, **font_direction sans** (Albert Sans + Public Sans, CJK Noto Sans TC / Noto Sans JP, no Ming typeface anywhere).
References (see `reference.md`; numbers from `reference-tokens.md`, quoted below as "token a–g"): **R1 Southern Hills Kodomo-en** https://southern-hills.ed.jp/ (S5-Style preschool, entry 12142; primary, ~80 % similarity target) and **R2 Yanokuchi** https://yanokuchi.ed.jp/ (entry 12141, same template in green; only used to tell structure from colour). Borrow structure, technique, colour relationships and measured numbers. No copy, photos, logo, mask files or whole-page layout from either site: every mask shape (torn edge, blobs) is drawn new for this theme.

Fixed brand facts (every page, all five languages, never vary):
- **Madoka Childcare**, founded **2015** by early-years teacher **Madoka Quinlan**. Address **12 Linden Row, Ranelagh, Dublin 6, Ireland** (fictional; a two-storey brick house with a back garden). Currency **EUR** in every language, no converted amounts.
- Ages **4 months to 4 years**, **39 places** in three rooms (see §8). Hours **Mon–Fri 07:30–18:30**; closed weekends, Irish public holidays and **24 Dec – 1 Jan**.
- Phone **+353 1 555 0172**, hello@madoka-childcare.example. Visits **Tuesday and Thursday at 10:00 and 16:00**.
- No guarantees, awards, ratings, real media, real people or real brands. Ratios are stated as our own policy, not as a claim of being "the best".

---

## 1. Signature techniques (three, obvious at a glance; do not "soften" them)

### T1. Hand-torn photo frame + torn band edges (R1 hero frame and section edges; token c "Hero frame", d "irregular mask", f "Wobbly section edge")
- **R1:** the first-screen photo sits in a frame 1386×787 (aspect 1.76) inset 27 px left/right, 86 px from the top, 27 px from the bottom; its outline is not a clean rounded rectangle but a hand-torn line: ~28 px corners with a 3–6 px wobble along every edge. The same torn line (amplitude ≈ 8 px over the full width) separates every tinted band from the off-white ground, and the cream cards have torn top/bottom edges (53.5 px decoration height). Screenshots: `ref/southern-first.png`, `ref/scroll-lead-imgs-after.png` (bottom edge of the hero), `ref/scroll-point-title-after.png` (band edge).
- **Ours (draw new SVGs, do not download R1's webp masks):**
  - `assets/mask/frame-torn.svg` — viewBox `0 0 1000 568`, `preserveAspectRatio="none"`, one closed path: a rounded rectangle with **corner radius 20 units** (= 28 px at 1386 px wide) whose four edges wobble irregularly by **±2–4 units** (= 3–6 px) with a new bump every 40–90 units; no two edges identical. Used as `mask-image` (`mask-size: 100% 100%; mask-repeat: no-repeat`) on the frame wrapper.
  - `assets/mask/frame-torn-tall.svg` — same drawing language, viewBox `0 0 800 1000` (4:5) for mobile hero and portrait frames.
  - `assets/mask/edge.svg` — viewBox `0 0 1440 16`, filled shape whose top line wobbles with **amplitude 8 px** (token f), bumps every 120–260 px; `mask-repeat: repeat-x; mask-size: 1440px 16px`. Rendered as a `::before` (top edge, `top:-15px`) and/or `::after` (bottom edge, flipped with `scale: 1 -1`, `bottom:-15px`) pseudo-element of the band, `height:16px`, `background: inherit` (the band colour), so the band appears torn into the off-white ground. Class `mc-torn-top` / `mc-torn-bottom` on the band Group.
- **Where on home:** hero frame (§3 block 1); top edge of the day band (block 4); top and bottom of the garden parallax band (block 6, edges painted in ground colour over the photo); top/bottom of the cream cards (block 4 "whole day" card, block 7 price card) with `mc-torn-top mc-torn-bottom` in the card colour; top of the visit band (block 8); top of the footer.
- **Must not be diluted:** the hero frame is a torn outline (not `border-radius` alone), inset exactly 27 px each side at ≥1280 px wide, and ≥ 4 torn band/card edges are visible on the home page. Wobble amplitude 3–6 px on frames and 8 px on band edges: visible but not jagged. Never replace with straight edges or with a CSS wave/zig-zag pattern.

### T2. Organic blob-masked photo straddling a band edge, with a white label tab (R1 "policy" block; token e "policy blob photo", f "Label tab"; `ref/scroll-policy-img-after.png`)
- **R1:** a photo in an organic egg/pebble mask (258×236 at 1440, ratio ~1.09; larger blobs up to 440 wide in the lead) sits across the torn edge between the peach band and the off-white ground — about half on each. Beside its lower right a **white rectangle 286×63** carries the next section's title in ink 20 px; the tab overlaps the ground just under the edge. Separately, loose flat colour blobs sit behind photo groups (orange and yellow, partly off-canvas).
- **Ours:**
  - Masks (draw new): `assets/mask/blob-egg.svg` (viewBox `0 0 440 404`, a lopsided egg, widest point at 40 % from the top, slightly flattened bottom-right) and `assets/mask/blob-pebble.svg` (viewBox `0 0 440 380`, rounder pebble with one flat side). `mask-size: 100% 100%`.
  - Blob photo size: **440×404** desktop (home day band and visit band), **320×294** on inner pages, `min(78vw, 320px)` on mobile. `object-fit: cover`.
  - Position: the figure straddles the torn edge: its **vertical centre sits 24 px below the edge line** (≈ 55 % on the upper section, 45 % on the lower; R1 split). Horizontal: starts at the container's column 1 (x = 78 px at 1440, token c "items 1284px, 78px side margin").
  - Label tab `p.mc-tab`: background `#FFFFFF`, ink `#372828`, Albert Sans 500 **1.25rem** (20 px, token f), padding `1.125rem 2rem` → ≈ 286×63 at en length, `border-radius: 0` (R1 tab is a hard rectangle). Placed in normal flow to the right of the blob: same row, `align-self: end`, `margin-bottom: 0` so its bottom aligns with the blob's bottom; at 1440 its left edge is at x ≈ 577 px (R1 tab x 577). The tab text is the next block's title (it acts as that block's eyebrow).
  - Flat blobs (decor, `aria-hidden` empty Groups with the blob mask and a solid fill): `mc-blob--band` fill `#F3DDBD`, 300×260, and `mc-blob--walnut` fill `#7A6858`, 220×150; placed behind photo groups, allowed to run off the right/left edge of the viewport (parent `overflow-x: clip`). Desktop ≥ 1024 only (hidden below).
- **Where on home:** block 4 entry (P05 egg across the ground→band edge + tab "A day at Madoka"); block 8 (P17 pebble across the band top edge + tab "Come and see the rooms"); block 2 decor blobs behind the photo pair; block 5 room cards carry the same white tab overlapping each photo's lower-left (tab −24 px over the photo bottom).
- **Must not be diluted:** the mask is clearly organic (no circle, no rounded rectangle), the photo visibly crosses the torn edge (≥ 35 % on each side), the tab is pure white on the off-white/band ground with ink text and square corners, and sits directly at the photo's lower right.

### T3. Stripe-per-line headings + time numerals in a soft blob (R1 "point" block; token b "h2 section", f "Title stripes", f "Numerals 01–03"; `ref/scroll-point-title-after.png`)
- **R1:** on the peach band each line of the h2 sits on its own off-white stripe (#FBFAF3, padding ≈ 0.2em 0.4em, 47 px tall within a 63 px line, so a 16 px gap of band shows between stripes); h2 colour = accent. Each point row has a numeral "01" (44.8 px, weight 200, accent) in an 85×85 yellow blob that overlaps the photo's top-left corner (blob centre ≈ 38 px left of and 50 px above the photo corner).
- **Ours:**
  - Every section heading on home and every inner-page H1/H2 uses `.mc-stripe`: `<h2 class="wp-block-heading mc-stripe …"><mark class="mc-stripe__in">Text</mark></h2>`; CSS: `.mc-stripe__in { background: #FBFAF3; color: #7A6858; padding: .2em .4em; -webkit-box-decoration-break: clone; box-decoration-break: clone; }` and h2 `line-height: 1.8` so wrapped lines separate into stripes with a gap. On off-white ground the stripe colour switches to `#FFFFFF` (`.mc-stripe--white`) so the stripe still reads (R1 uses the same trick on its cream areas). Lines are broken deliberately with `<br>` in en (2–3 short lines); zh-TW/ja break naturally, max 3 lines.
  - Time numerals (the page_structure **day-schedule** hook): `.mc-time` blob, **128×104** (R1 85×85 enlarged because "07:30" has 5 glyphs), mask `blob-pebble.svg`, fill spot `#E2E1A2`, text Albert Sans **200** **2rem**, colour walnut `#7A6858`, `font-variant-numeric: tabular-nums`, centred. Placed overlapping the photo's top-left corner: `margin: 0 0 -52px -40px; position: relative; z-index: 2` (normal flow + negative margins; **not** absolute). Numbered steps (Enrolment) use the same blob with "01"–"05" at 2.8rem/200 in an **96×96** blob (R1 85×85).
- **Where on home:** all 8 section headings (blocks 2–9); 3 time blobs in block 4; no other numerals on home.
- **Must not be diluted:** each wrapped line has its own stripe with visible band/ground between lines (not one block background); heading text walnut, weight 500; time blobs weight 200, overlapping the photo corner (not floating beside the text), spot colour fill (not walnut, not white).

### Supporting detail (counted for similarity, not as a signature)
- **Round floating badge** (token f "Round CTA badge"): 132 px circle, fill spot `#E2E1A2`, `box-shadow: 4px 4px 0 rgba(0,0,0,.12)`, centred content: a 20 px line icon (open door, stroke walnut 1.5 px, own SVG), 2-line label "Book / a visit" Albert Sans 500 0.9375rem ink with a 2 px **dotted underline** (`border-bottom: 2px dotted #372828`), small arrow → 12 px walnut. Desktop ≥ 782: `position: fixed; right: 68px; bottom: 68px; z-index: 40` placed in the **header** template part (`.mc-badge--fixed`). It disappears near the end of the page because the footer is `position: relative; z-index: 50` with an opaque background (pure CSS; replaces R1's IntersectionObserver; no JS). Hover: hop `translateY(-4px)` 0.4s `cubic-bezier(0,.95,.51,1.37)` (token g hover). Mobile < 782: the fixed badge is `display:none`; an in-flow **104 px** copy (`.mc-badge--inline`) sits right-aligned at the end of the hero text group and again in block 8. Never overlaps text.
- **Corner logo blob** (token f "Logo blob"): 195×130 organic shape (own SVG, `assets/mask/blob-logo.svg`) stuck to the top-left corner (x 0, y 0), fill walnut `#7A6858`, wordmark in `#FBFAF3`: "Madoka" / "Childcare" Albert Sans 500 1.125rem, line-height 1.3, plus a 0.625rem line "Infant & toddler care · Dublin" above it (R1 has the small line above). Mobile: 130×86, wordmark 0.9375rem, small line hidden.
- **Dotted text links** (token d): every link-button is text + arrow with `border-bottom: 2px dotted currentColor; padding-bottom: 2px`; no filled buttons anywhere except the form submit on Visit (filled ink, white text, radius 999px).

### Continuation to inner pages (required; each page lists which signatures appear)
Inner page head pattern `mc-page-head` (all inner pages): ground; container 1284; row 1: white label tab (T2 tab style, the English section word in en/fr/de, translated in zh-TW/ja) and under it the H1 stripe heading (T3) 3rem walnut; row 2: a **torn-frame banner photo** (T1), full width minus 27 px each side, aspect **3.2:1** (1386×433 at 1440; mobile 4:3 inset 12 px) with `sp-parallax` (`--sp-par: 8%`, mobile 5%).

| Page | T1 torn frame / edges | T2 blob photo + tab | T3 stripes + numerals |
|---|---|---|---|
| About & approach | banner P04; band with torn edges for "Three rooms, one house" | P15 egg across the band edge, tab "How we work" | stripes; — |
| The care day | banner P13; 9 rows on a band with torn top; whole-day card torn | P05 egg at band edge, tab "Hour by hour" | stripes; **9 time blobs** 07:30…18:30 |
| Rooms & ages | banner P18; each room section alternates band/ground with torn edges | Nest photo P10 in an egg + tab "Nest"; Meadow/Grove photos with white tabs | stripes; numerals 01–03 for the rooms |
| Educators | banner P15; people list on band with torn edges | P05 pebble + tab "Your key person" | stripes |
| Food & kitchen | banner P08; menu card torn | P14 egg + tab "This week's lunches" | stripes |
| Fees & hours | banner P03; price card torn (§3 block 7 markup reused) | P17 pebble + tab "What's included" | stripes |
| Enrolment & settling in | banner P17; band torn | P02 egg + tab "Settling in" | stripes; **numerals 01–05** for the steps |
| Families' stories | banner P13 (crop centre-right); each story on alternating band/ground with torn edges | each story photo in an egg/pebble with the family name on a white tab | stripes |
| FAQ | banner P18; Q&A on a torn cream card | — | stripes |
| Visit & contact | banner P01; band torn | P12 pebble + tab "Find us" | stripes |
| Notes (index/archive/single) | index banner P12; single: featured image in the torn frame 16:9 | — | stripes on index heading and single title |
So T1 and T3 are on all 11; T2 on 9; the time/number blobs on 3 pages. Badge (fixed) on all pages.

---

## 2. Colour (R1 token a; changes explained)

| Role | R1 | **Ours** | Change | Use | Share |
|---|---|---|---|---|---|
| Ground | `#FBFAF3` | **`#FBFAF3`** | none | page ground, heading stripes on bands | ~52 % |
| Band | `#FFD89D` peach | **`#F3DDBD`** | L 80.8 → 84.7 % (+3.9 %), chroma reduced (HSV S 0.38 → 0.22). Reason: the row note (binding) asks for a quiet low-chroma ground with walnut as the only accent, and the first-screen script counts HSV S > 35 %; R1's peach would count as saturated. Hue kept (36°) so the warm-band relationship stays. | day band, visit band, room sections, footer edge decor | ~25 % |
| Light card | `#FFFBE2` | **`#FDF8E6`** | L 94 → 94.5 %, slightly less yellow | whole-day card, price card, FAQ card, garden-band text card | ~12 % |
| Accent | `#EC7600` orange | **`#7A6858`** walnut | replaced: row hex, "the one muted accent" (binding note) | heading text (stripes), logo blob, time digits, nav ▾ markers, flat walnut blob (≤ 220×150), link hover colour | < 3 % |
| Spot | `#E4E959` | **`#E2E1A2`** | chroma reduced (S 0.62 → 0.28), L 63 → 76 % to stay fresh instead of muddy; reason as for band | round badge, time/number blobs | < 1 % |
| Text | `#372828` | **`#372828`** | none | body, nav, tabs, links | — |
| Muted text | — | `#6F625A` | derived (ink → walnut) | captions, meta, dates | — |
| White | `#FFFFFF` | `#FFFFFF` | none | label tabs, stripes on ground | < 2 % |

- Contrast: walnut on `#FBFAF3` ≈ 5.0:1 (headings always ≥ 1.5rem, so also fine for small use); ink on band ≈ 10:1; ink on spot ≈ 9:1.
- **First-screen saturated pixels (HSV S > 35 %, V > 24 %, `scripts/check-first-screen.py`): target ≤ 6 %, hard cap 15 %** (R1 3.3 %). Walnut (S 0.28), band, spot all sit below the threshold; the only possible saturated pixels are in P01 (keep clothes/toys muted: oatmeal, sage, sand, walnut; one small muted mustard toy at most).
- Never a full-bleed walnut field. Not beige-led: off-white `#FBFAF3` is the ground; the warm sand appears only as torn bands.
- theme.json palette slugs: `ground` #FBFAF3, `band` #F3DDBD, `card` #FDF8E6, `walnut` #7A6858, `spot` #E2E1A2, `ink` #372828, `muted` #6F625A, `white` #FFFFFF.

## 3. Type (font_direction **sans**; roles from R1 token b)

Families (load with **theme.json `fontFamilies` + `fontFace`** so the editor iframe and the front end use the same faces; woff2 in `assets/fonts/`; OFL licences checked and copied into `assets/fonts/LICENSES/`):
- `heading`: **Albert Sans** (weights 200, 400, 500; normal) — stack `"Albert Sans", "Noto Sans TC", "Noto Sans JP", system-ui, -apple-system, "Segoe UI", sans-serif`.
- `body`: **Public Sans** (400, 500) — stack `"Public Sans", "Noto Sans TC", "Noto Sans JP", system-ui, -apple-system, "Segoe UI", sans-serif`.
- `cjk-tc`: **Noto Sans TC** (400, 500) zh-TW subset; `cjk-jp`: **Noto Sans JP** (400, 500) ja subset (the CJK subset script is broken — use the Hokuto/Hada replacement method).
- `:lang(zh-TW)` → headings and body `"Noto Sans TC", "Albert Sans", sans-serif` (body `"Noto Sans TC", "Public Sans", sans-serif`); `:lang(ja)` → `"Noto Sans JP", …`. Because style.css uses `:lang(`, copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it in functions.php. **No serif / Ming font anywhere.**
- Weight never above **500** (R1: "soft, rounded feel"). Albert Sans 200 only for time/number blobs.

| Role | Family | Size (desktop 1440) | Weight | LH | LS | Source |
|---|---|---|---|---|---|---|
| H1 hero (2 lines) | Albert Sans | **4.3125rem** (preset `huge`, theme max, ≥ 4.25 ✓); `clamp(2.5rem, 4.8vw, 4.3125rem)` | 500 | 1.25 en / 1.56 CJK | 0 en / 0.05em CJK | b h1 67.1 px = 4.3125rem, 500, lh 1.56 |
| Page H1 (inner, stripes) | Albert Sans | 3rem `clamp(2.125rem, 3.6vw, 3rem)` | 500 | 1.8 | 0.02em | b h2 scaled ×1.33 |
| H2 section (stripes) | Albert Sans | **2.25rem** `clamp(1.75rem, 2.6vw, 2.25rem)` | 500 | 1.8 | 0.02em en / 0.05em CJK | b h2 35 px = 2.25rem, lh 1.8, ls .05em |
| H2 small (visit band) | Albert Sans | 1.75rem | 500 | 1.6 | 0.02em | b CTA band 27.2 px |
| H3 card / row title | Albert Sans | 1.5rem | 500 | 1.6 | 0.02em | b card titles 24.3 px |
| Lead | Public Sans | 1.125rem | 500 | 1.9 | 0.02em | b lead 17.5 px / 500 |
| Body | Public Sans | 1rem | 400 | 1.9 en/fr/de · 1.85 zh/ja | 0.02em en / 0.05em CJK | b body 15.57 px, lh 2.0, ls .05em (Latin −0.1 lh and less tracking for longer words) |
| Nav | Public Sans | 0.9375rem | 400 | 1 | 0.04em | b nav 14.6 px |
| Label tab | Albert Sans | 1.25rem | 500 | 1.4 | 0.02em | f tab 20 px |
| Time blob | Albert Sans | 2rem (steps 2.8rem) | 200 | 1 | 0 | f numerals 44.8 px / 200 |
| Small / meta | Public Sans | 0.875rem | 400 | 1.7 | 0.02em | — |
- CJK headings ≈ 0.75× English sizes (H1 3.25rem, H2 1.6875rem), body 1rem lh 1.85; fr/de `hyphens: auto`.
- Presets in theme.json: `small` 0.875, `base` 1, `medium` 1.125, `large` 1.5, `x-large` 2.25, `xx-large` 3, `huge` 4.3125 (rem).

## 4. Spacing, radius, motion tokens (CSS custom properties in theme.json `custom`)
| Token | Value | Source |
|---|---|---|
| `--mc-wrap` | 1284px content, side padding `max(20px, 5.4vw)` (= 78 px at 1440) | c items 1284, 78 px margin |
| `--mc-hero-inset` | 27px sides, frame top 86px from page top, 27px bottom gap | c hero frame |
| `--mc-sec-s` | `clamp(3.5rem, 5.4vw, 4.875rem)` (78 px) | c point 78/78 |
| `--mc-sec-l` | top `clamp(6rem, 14vw, 12.75rem)` (204), bottom `clamp(5rem, 10.8vw, 9.75rem)` (156) | c policy 204/156 |
| `--mc-band-gap` | 6.625rem (103 px) between a band and the next block | c between bands |
| `--mc-col-gap` | 3.625rem (58 px) text/photo; card inner gap 4.875rem (78 px) | c policy 58, facility 78 |
| `--mc-r` | 1.25rem (20 px) all rectangular photos and cards | d 1.25rem |
| `--mc-shadow` | `4px 4px 0 rgba(0,0,0,.12)` badge only | d |
| `--mc-hop` | `.4s cubic-bezier(0,.95,.51,1.37)` hover | g hover |
Borders: none (hairlines not used). Card padding `clamp(2rem, 3.4vw, 3.4375rem)` (55 px, c facility card margin 43/54).

---

## 5. Home page

### First screen (1440×900 and 390×844)
Desktop: header (logo blob top-left, nav right, height 86 px, transparent on ground) → **torn frame** `mc-hero__frame` x 27–1413, y 86–873 (1386×787, T1), `sp-parallax` with `--sp-par: 8%`, image **P01** (`figure > img`, `object-fit: cover; object-position: 30% 50%`). Composition of P01: educator and two toddlers at a low wooden block table in the **left 55 %**, a pale plain wall and window light in the **right 45 %** (photo-left-text-right). A soft veil over the right part only: frame `::after` `linear-gradient(to left, rgba(251,250,243,.55) 0%, rgba(251,250,243,0) 55%)` (R1 veils its photo in white).
Text group `mc-hero__text` sits **in the same CSS grid cell** as the frame (`display:grid; grid-template-areas:"s"` and both children `grid-area: s` — no absolute positioning), `justify-self: end; align-self: start; margin: 9% 6% 0 0; max-width: 34rem` → the H1 starts ≈ x 905, y 170 (R1 title position):
- H1 (no stripes in the hero, ink `#372828`, 4.3125rem/1.25, 2 lines): **"Little days, / held gently."**
- Lead 1.125rem/500 ink, max 26em: "Childcare for babies and toddlers of working families in Ranelagh, Dublin. Open 07:30–18:30, Monday to Friday."
- Dotted link "See the care day →" (to /the-care-day/).
- Fixed badge at bottom-right (68/68 px), partly over the frame's lower-right corner like R1.
R1 sets the title white; we use **ink** for legibility over the pale wall (contrast ≥ 7:1 on the veil). No reveal, no char animation in the hero (rule: hero static); its only motion is the parallax.
Mobile 390: header 86 px (logo blob 130×86, two-line menu icon right). Frame inset 12 px, **4:5** (366×458) with `frame-torn-tall.svg`, `object-position: 25% 50%`, parallax `--sp-par: 5%`. The text group switches to its own grid row **below** the frame (`grid-template-areas: "f" "t"`), padding 24px 20px: H1 2.5rem/1.25 2 lines, lead 1rem, link, then the inline 104 px badge right-aligned. No vertical text, no absolutely positioned labels, nothing over the photo.
Forbidden on the first screen: tables, forms, search, filled buttons, giant centred words, collage.

### Block order
| # | Pattern slug | Purpose | Layout and photos | Copy (en) |
|---|---|---|---|---|
| 1 | `mc-hero` | mood + who it is for | as above, **P01** | ~30 words |
| 2 | `mc-welcome` (R1 lead) | the promise: one key person | ground, padding `--mc-sec-l`. Grid: text column 384 px at x ≈ 158 (R1), then photo area 734 px. Text: H2 stripes **"Every child has / a key person, / every day."** (white stripes on ground) + 3 short paragraphs + link "Our approach →". Photo area (`sp-stagger`): **P02** 4:5, 300×375, top 0, right-aligned; **P03** 3:2, 400×267, left of it, top offset **+100 px** (R1 ±100 px), both radius 20 (`--mc-r`), each `sp-reveal sp-reveal--zoom mc-pop`. Behind: `mc-blob--band` 300×260 bleeding off the right edge at P02's lower right; `mc-blob--walnut` 220×150 under P03's lower-left corner (≥1024 only). Two photos only (not a collage). Mobile: text, then P02 full width 4:5, P03 80 % width right-aligned with −40 px top margin overlap (no offset grid). | 110 words, 3 paragraphs |
| 3 | `mc-approach` (R1 policy, first half) | the house and rooms | ground, padding `--mc-sec-s` top / 0 bottom. Columns 7/12 + 5/12, gap 58 px: **P04** 3:2 (≈ 592×394, radius 20) left; right: H2 stripes **"One house, / three small rooms."** + 2 paragraphs + link "Rooms & ages →". | 80 words, 2 paragraphs |
| 4 | `mc-day` (R1 policy blob + points 01–03) — **day-schedule** | the care day | Starts with the **T2 straddle**: band `#F3DDBD` with `mc-torn-top`; **P05** in `blob-egg` 440×404 across the edge at column 1 (`sp-reveal--zoom mc-pop`), white tab **"A day at Madoka"** at its lower right. Then on the band (padding 78 px): one intro paragraph (left 6/12). Then **three rows** (gap 120 px), R1 point geometry: photo 3:2 **591×394** radius 20 at columns 1–6, text columns 8–12, vertically centred; the time blob (T3) overlaps each photo's top-left corner (`sp-reveal--zoom mc-pop`); text: H3-size stripe heading (2 lines, `#FBFAF3` stripes, walnut) + 2 paragraphs. Rows alternate: row 1 photo left **07:30 Hello at the door** (**P06**), row 2 photo right **09:30 Out in the garden** (**P07**), row 3 photo left **17:00 Stories and late pickup** (**P09**). Then the **whole-day card** (`mc-card mc-torn-top mc-torn-bottom`, `#FDF8E6`, max 1255 px, margin 43 px auto 0): H3 "The whole day" + a 2-column list (not a table) of the 9 fixed times (§8), time in Albert Sans 500 walnut `white-space: nowrap`, activity in body; footer line "Doors close at 18:30 · Closed weekends and public holidays" + link "The care day in full →". Not sticky, no timeline line, no dots (differs from Neiro). Mobile: rows stack (time blob, photo 100 %, text); list 1 column. | 40 + 3×55 + list (≈ 230 words) |
| 5 | `mc-rooms` (R1 facility cards) | rooms by age | ground, padding `--mc-sec-l`. H2 stripes **"Three rooms, / grouped by age."** Row of 3 equal cards (`sp-stagger`, each `sp-reveal sp-reveal--up`), gap 47 px: photo 3:2 radius 20 (**P10** Nest, **P11** Meadow, **P12** Grove); white tab with the room name overlapping the photo's lower-left (−24 px, T2 tab at 1.125rem); under it ages · ratio · group size (meta line) and one sentence; link "Rooms & ages →". Mobile: 1 column. | 3×30 words |
| 6 | `mc-garden` — **parallax** | the garden, one family voice | full-bleed Group `sp-parallax mc-torn-top mc-torn-bottom` (edges painted ground colour so the photo looks torn), height **560 px** desktop / **420 px** mobile, `--sp-par: 10%` desktop / `6%` mobile, layer **P13** (`figure > img`, wide garden). Foreground (static, not inside the moving layer): a `#FDF8E6` card radius 20, padding 40/48, max-width 460 px, at the container's lower-left (grid placement, `align-self:end; margin-bottom: 56px`): small tab-style label "From a parent", quote 1.125rem/1.9 (Story 1 excerpt, §8), name line, link "Families' stories →". Mobile: card below the photo band (photo 420 px, card overlaps it by −48 px via negative margin). | 50 words |
| 7 | `mc-fees` | fees and hours | ground, padding `--mc-sec-s`. Row: H2 stripes **"Fees, plainly."** + paragraph (5/12) and hours lines (7/12, list: Mon–Fri 07:30–18:30 · Visits Tue & Thu 10:00, 16:00 · Closed 24 Dec–1 Jan). Below, **full container width** price card (`mc-card mc-torn-top mc-torn-bottom`): `ul.mc-prices` with the 6 fixed rows (§8): each row `display:flex; justify-content:space-between; gap:24px; padding:18px 0; border-bottom:1px dotted rgba(55,40,40,.25)`; left name (Albert Sans 500 1.125rem) + note (0.875rem muted); right price `white-space:nowrap; text-align:right; flex:0 0 auto` Albert Sans 500 1.25rem walnut. Footnote: meals, nappies and sun cream included. Link "Fees & hours →". No sp-reveal on the price card. | 70 words + list |
| 8 | `mc-visit` (R1 CTA band + access) | book a visit | band `#F3DDBD` `mc-torn-top`, padding 156/139 (c CTA band). T2 straddle: **P17** in `blob-pebble` 440×380 across the top edge at the left, tab **"Come and see the rooms"**. Right 6/12: H2 small (1.75rem) stripes "Visits on Tuesday / and Thursday." + paragraph; enrolment in 4 plain sentences as an ordered list (1–4, no step grid): Visit → Place offer and €150 registration → Family meeting with your key person → Two-week settling-in; address, phone, email; dotted link "Enrolment & settling in →"; inline badge 132 px "Book a visit" (mobile 104 px). | 90 words |
| 9 | `mc-notes` (R1 news) | notes from the rooms | ground, padding 8rem/9rem (c news 217/234 scaled). H2 stripes "Notes from / the rooms." Query Loop, 3 latest posts in a row, featured image 3:2 radius 20 (posts 1–3 = **P14, P16, P18**), date (muted 0.875rem) + title (1.125rem/500), link "All notes →". | Query |
| — | Footer | — | `#FDF8E6` `mc-torn-top`, `position:relative; z-index:50` (covers the fixed badge), padding 98/48: small logo blob, address, hours, phone, email; 3 link columns (About, Families, Visit); language switcher; © 2015–2026 Madoka Childcare. | — |

Home words: en ≥ 450 (≥ 250 required), narrative paragraphs in blocks 2, 3 and 4 (≥ 3). CJK home ≥ 600 characters.
**Home photo positions: 16** — P01 · P02 P03 · P04 · P05 · P06 P07 P09 · P10 P11 P12 · P13 · P17 · P14 P16 P18. No image appears twice on home (P08, P15 unused on home).

### Comparison with the recent themes (home block order)
| # | Seisui | Shokutaku | Ishizue | Neiro (same day-schedule) | **Madoka** |
|---|---|---|---|---|---|
| 1 | hero photo right | arch hero | rounded hero bleeding right + timeline line | overlapping portrait pair | **torn-frame full-width photo, title on the pale right** |
| 2 | intro | table, floating arches | marquee ethos rows | philosophy | **welcome: text + two offset photos over flat blobs** |
| 3 | services on parallax band + 3×2 grid | sittings | sticky stacked company cards | teaching day, 5 sticky rows | **approach: photo + stripe heading** |
| 4 | metrics ledger | parallax room band | history | instruments | **care day: blob photo across a torn band edge + 3 zig-zag rows with time blobs + whole-day card** |
| 5 | sticky-media process | plates pill strip | people | teachers | **three room cards with white tabs** |
| 6 | fees | menus | — | fees | **garden parallax band with a story card** |
| 7 | field notes | people | — | parallax band (recitals) | **fees + hours, price card** |
| 8 | people | visit | — | stories | **visit band (blob + tab + badge)** |
| 9 | contact | notes | — | visit (vertical rails) | **notes** |
Why not alike: no ghost words, arches, vertical rails, ledgers, sticky rows or overlapping portrait pairs. Neiro shows its day as opaque sticky rows on ink with a rail; Madoka shows it as non-sticky zig-zag rows on a torn sand band with soft blob numerals and a compact list card. The shapes (torn outlines, organic blobs, white tabs, stripe headings, round badge) do not occur in any of the four. No people grid on home (educators are named on their own page).

---

## 6. Inner pages (11 + system)
Every page: `mc-page-head` (§1) → body → closing visit strip (band with torn top, one sentence + dotted link "Book a visit →"). No sidebar. Photos within one page never repeat.

1. **About & approach** `/about/` — head "ABOUT / A small house / for small people." banner P04. Story: founded 2015 by Madoka Quinlan after twelve years as a room leader; why three small rooms; the key-person system; outdoor time every day; settling in slowly. Band "Three rooms, one house" with P15 egg + tab "How we work"; 4 narrative sections (≈ 450 words), P07 3:2 between sections 2 and 3.
2. **The care day** `/the-care-day/` — head "THE CARE DAY / From 07:30 / to 18:30." banner P13. Band (torn top) with P05 egg + tab "Hour by hour". **All 9 times** as zig-zag rows with time blobs: photo rows 07:30 (P06), 09:30 (P02), 11:30 (P08), 12:30 (P16), 15:30 (P11), 17:00 (P09); text-only rows (blob + heading + 2 lines) 09:00, 15:00, 18:30. Then a note "Babies keep their own rhythm" (Nest naps and feeds on demand), then the whole-day card. ≈ 600 words.
3. **Rooms & ages** `/rooms/` — head "ROOMS / Three rooms, / grouped by age." banner P18. Three room sections alternating ground/band (torn edges), numerals 01–03 in blobs on the photos: Nest P10, Meadow P11, Grove P12, each with facts list (ages, ratio, places, key person name, nap space) + 2 paragraphs. The Nest photo P10 is shown **only** in the egg mask with tab "Nest" (T2); Meadow P11 and Grove P12 are 3:2 radius 20 with white tabs.
4. **Educators** `/educators/` — head "EDUCATORS / The people / your child knows." banner P15. P05 pebble + tab "Your key person" + paragraphs on the key-person system and training (every educator holds a QQI Level 6 early-childhood award or higher — stated as our hiring policy, no claim about outcomes). The 8 named people (§8) as a **two-column text list** on the band (name in stripe H3, role, room, since year, languages, one sentence). No photo grid, no four-person card grid.
5. **Food & kitchen** `/food/` — head "FOOD / Cooked here, / every morning." banner P08. P14 egg + tab "This week's lunches"; sample week (Mon–Fri lunch + afternoon snack) as a list in a torn card; allergies and dietary needs; babies' purées and baby-led weaning; cook Tomás Rivera.
6. **Fees & hours** `/fees/` — head "FEES / Fees, / plainly." banner P03. The same price card as home (6 rows, §8; full width ≥ 782, price nowrap right); "What's included" with P17 pebble + tab; hours, closures, payment (12 monthly payments, direct debit), notice period (one month), childcare subsidy note ("we provide the statements families need for the National Childcare Scheme; amounts depend on your family").
7. **Enrolment & settling in** `/enrolment/` — head "ENROLMENT / Settling in, / slowly." banner P17. The **5 steps** as zig-zag rows with number blobs 01–05 (§8 process): steps 1–3 with photos (P03, P05, P02 — P02 in the egg + tab "Settling in"), steps 4–5 text rows. Waiting list explained; what to bring (list).
8. **Families' stories** `/stories/` — head "STORIES / Families, / in their words." banner P13. The **3 stories** (§8), each a section alternating ground/band, story photo in an egg or pebble with the family name on a white tab (P06, P07, P09), 150–200 words each; a closing note that stories are shared with permission and lightly edited (fictional sample content).
9. **FAQ** `/faq/` — head "QUESTIONS / What parents / ask us first." banner P18. 9 Q&As as `core/details` in a torn cream card (sick days, nappies, naps, phones/photos policy, late pickup, holidays, allergies, settling-in length, siblings).
10. **Visit & contact** `/visit/` — head "VISIT / Come and see / the rooms." banner P01. P12 pebble + tab "Find us"; address, hours, visits Tue & Thu 10:00/16:00, how to get here (Ranelagh Luas stop 4 minutes on foot, bike parking with child seats for 12 bikes, buggy shed), phone, email; simple enquiry form (no sp-reveal on the form).
11. **Notes** — `home.html`/`archive.html`: head "NOTES / From the / rooms." banner P12, first post large (image 7/12 radius 20 + text), then 2 columns. `single.html`: category as white tab, stripe title 3rem, date, featured image in the torn frame 16:9, text column 680 px.
12. **404 / search** — page head without banner + dotted link home.

Posts (6, featured images): 1 "What we cook in a week" P14 · 2 "Why naps don't follow the clock" P16 · 3 "Washing hands, forty times a day" P18 · 4 "Paint, water and mess" P11 · 5 "Rainy-day garden" P07 · 6 "The first morning" P06. Home shows the latest three = posts 1–3.

## 7. Responsive (hard requirements)
- **390 px first screen**: no vertical text, no absolutely positioned labels or badges over text; hero = frame then text (grid rows). The fixed badge is hidden < 782; time blobs, tabs and blobs are positioned with flow + negative margins only.
- **Price list** (`ul.mc-prices`, home and Fees): at ≥ 782 px it spans the full container width (no 5/12 column), price column `white-space: nowrap; text-align: right; flex: 0 0 auto`, never clipped at 800 and 1280 (auto-gates). < 600 px: each row stacks (name/note, then price left-aligned, still nowrap).
- **Any table** (if a core/table is used anywhere, e.g. FAQ or Food) stacks on mobile: `thead` hidden, each row a block, cells `display:block` with `data-label` prefix. Prefer lists over tables.
- Columns stack < 782; zig-zag rows become photo-then-text; decor blobs hidden < 1024; parallax kept on mobile with smaller `--sp-par`.
- `html, body { overflow-x: clip }`; no horizontal overflow at 390 and 1280.

## 8. Fixed content (identical on home, inner pages, footer and all five languages)
**Day schedule (9 times):** 07:30 Doors open, hello at the door, breakfast · 09:00 Morning circle · 09:30 Garden and outdoor play · 11:30 Lunch · 12:30 Nap and quiet rest · 15:00 Afternoon snack · 15:30 Studio play (paint, blocks, water, music) · 17:00 Stories and first pickups · 18:30 Last pickup, doors close. Home rows: 07:30, 09:30, 17:00.

**Rooms (39 places):** Nest 4–15 months, ratio 1:3, 9 places · Meadow 15–30 months, 1:4, 12 places · Grove 2½–4 years, 1:6, 18 places.

**Fees (EUR per month, 12 payments a year; meals, nappies, wipes and sun cream included):**
| # | Item | Note | Price |
|---|---|---|---|
| 1 | Five days | 07:30–18:30, Mon–Fri | €1,480 / month |
| 2 | Four days | any four fixed weekdays | €1,240 / month |
| 3 | Three days | any three fixed weekdays | €980 / month |
| 4 | Two days | from 15 months (Meadow and Grove) | €690 / month |
| 5 | Extra day | booked one week ahead, if a place is free | €78 / day |
| 6 | Registration | once, when you accept a place | €150 |
Settling-in fortnight: included in the first month's fee. Notice: one month. Locale formats per language (en €1,480; fr/de 1 480 € / 1.480 €; zh-TW/ja €1,480) but the same amounts.

**People (8):** Madoka Quinlan — founder and centre director (since 2015) · Aoife Brennan — deputy director, Meadow room lead (2016) · Samuel Osei — Nest room lead (2017) · Clara Moreau — Grove room lead (2018) · Priya Raman — Nest educator (2019) · Jonas Weber — Grove educator, garden and outdoor play (2020) · Tomás Rivera — cook (2016) · Hanna Kowalski — family coordinator, enrolment and visits (2021).

**Stories (3):** 1 The Haddad family — Lina started in the Nest at 7 months; settling in over two weeks while her mother returned to work (garden quote on home). 2 The Byrne-Okafor family — twins in the Meadow; how two key persons, one for each twin, kept the mornings calm. 3 The Lindqvist family — Elias moved from Nest to Grove over three years; late pickups on hospital-shift days.

**Enrolment process (5):** 01 Visit (Tue/Thu 10:00 or 16:00, 45 minutes) · 02 Place offer and €150 registration · 03 Family meeting with your key person (routines, food, sleep) · 04 Settling-in fortnight (short days growing to full days) · 05 First full day.

**Other:** founded 2015; Madoka Quinlan; 12 Linden Row, Ranelagh, Dublin 6; Mon–Fri 07:30–18:30; closed 24 Dec–1 Jan and public holidays; +353 1 555 0172; hello@madoka-childcare.example.

## 9. Photos (18, Grok, one at a time, read every image)
STYLE (exact string on every prompt):
`documentary photograph, high-key bright natural daylight, 35mm lens at a seated child's eye level, soft pale walls, light oak and white furniture, muted palette of off-white, warm sand, stone, walnut brown and soft sage, modern international childcare centre in a northern European city, diverse educators and children, candid unposed moment, gentle film grain, no text, no letters, no logos, no brand marks, no posters or signs with writing, no Japanese elements`

| ID | Subject / composition | Ratio | Used on (once per page) |
|---|---|---|---|
| P01 ★ | educator kneeling with two toddlers at a low wooden block table, all in the left 55 %; right 45 % a pale plain wall and window light | 16:9 (export 2000×1125) | Home hero; Visit banner |
| P02 ★ | toddler's hands stacking wooden blocks, educator's hand steadying the tower | 4:5 | Home welcome; Care day 09:30 row; Enrolment step 3 (egg) |
| P03 ★ | morning doorway: a parent handing a toddler to an educator, coats and bags | 3:2 | Home welcome; Fees banner; Enrolment step 1 |
| P04 ★ | bright playroom, low open shelves with baskets, rug, window light, no people or one small child far back | 3:2 | Home approach; About banner |
| P05 ★ | educator reading a picture book (cover blank) to three toddlers on floor cushions | ~1.09 (square-ish, export 1200×1100) | Home day band egg; Care day egg; Educators pebble; Enrolment step 2 |
| P06 ★ | 07:30 arrival: child hanging a coat on low hooks, parent kneeling beside | 3:2 | Home day row 1; Care day 07:30; Story 1; Post 6 |
| P07 ★ | garden: toddlers digging in a sandbox with an educator, small wooden spades | 3:2 | Home day row 2; About; Story 2; Post 5 |
| P08 | lunch at a low table, toddlers eating with small spoons, educator seated with them | 3:2 | Care day 11:30; Food banner |
| P09 ★ | late afternoon story corner, warm lamp, a parent arriving in a coat, child running to them | 3:2 | Home day row 3; Care day 17:00; Story 3 |
| P10 ★ | Nest: baby crawling on a soft mat toward an educator, low mirror rail | 3:2 | Home rooms; Rooms Nest (egg only) |
| P11 ★ | Meadow: toddlers painting at a low easel, aprons, washable paint | 3:2 | Home rooms; Rooms Meadow; Care day 15:30; Post 4 |
| P12 ★ | Grove: three-year-olds pouring water at a water table | 3:2 | Home rooms; Rooms Grove; Visit pebble; Notes banner |
| P13 ★ | wide back garden: low wooden planters, small balance bikes, willow tunnel, no people or distant figures, soft overcast-bright light | 21:9 (export 2000×857) | Home parallax; Care day banner; Stories banner |
| P14 ★ | nursery kitchen: cook chopping vegetables, pots, bright tiles without patterns or writing | 4:5 | Home notes (post 1); Food egg; Post 1 |
| P15 | two educators at a low table writing observation notes in plain notebooks, cups of tea | 3:2 | About egg; Educators banner |
| P16 ★ | quiet nap room: low cots, soft curtains half drawn, one child asleep under a blanket | 3:2 | Home notes (post 2); Care day 12:30; Post 2 |
| P17 ★ | first visit: parent with toddler on a low sofa talking with an educator, toys on the rug | 3:2 | Home visit pebble; Fees pebble; Enrolment banner |
| P18 ★ | toddler washing hands at a low sink, educator helping, soap dispenser without labels | 4:5 | Home notes (post 3); Rooms banner; FAQ banner; Post 3 |
★ = used on the home page (16). No cut-outs (0 transparent PNGs). Each ≤ 300 KB, ≤ 2000 px; readme.txt line per image (AI-generated, CC0). Re-generate any image with text, logos, warped faces or wrong hands. Keep clothes muted (first-screen saturation).

## 10. Scroll motion (sp-scroll; copy `pipeline/assets/sp-scroll/` unchanged into `assets/`)
Three effects per page at most; hero has no reveal; price card, form and legal text get none.
| # | Effect (sp-*) | Applied to | R1 source (token g) | Our values |
|---|---|---|---|---|
| E1 | `sp-reveal sp-reveal--wipe` | every `.mc-stripe` H2 / page H1 below the first screen (home blocks 2–9; inner page bodies — not the page head H1 in the first screen) | title-line wipe: start "top 85%", 0.8s, power2.out, `clip-path: inset(0 100% 0 0) → 0` | theme style.css override (selector must begin with `html.sp-js:not(.sp-no-motion)`): `.mc-stripe.sp-reveal--wipe:not(.sp-in) > * { clip-path: inset(0 100% 0 0); }` and `.mc-stripe.sp-reveal--wipe > * { transition-duration: .8s; transition-timing-function: cubic-bezier(.215,.61,.355,1); }` (left→right like R1). Clip is on the child `mark`, never on the h2. |
| E2 | `sp-stagger` + `sp-reveal sp-reveal--zoom` (+ class `mc-pop`) | welcome photo pair, P05/P17 blob photos, the 3 time blobs, room cards' photos (cards use `--up`) | lead images pop: "top 60%", 0.7s, 0.2s stagger, back.out(1.2), scale 0→1; numerals rotate-scale 0.9s back.out(1.4) | `.mc-pop { --sp-dur: .7s; --sp-ease: cubic-bezier(.34,1.56,.64,1); }` (back-out); stagger delays overridden `.sp-stagger > .mc-pop:nth-child(2){--sp-delay:.2s} :nth-child(3){--sp-delay:.4s}`. sp-scroll's zoom is 1.06→1 (we do not exceed the library's transform); rotation not used. |
| E3 | `sp-parallax` | home hero frame (P01) and home garden band (P13); every inner page-head banner | hero photo slow zoom 1→1.08, 7s linear (R1 has no scroll parallax; this is its "moving hero photo" translated to scroll) | hero `--sp-par: 8%` (mobile 5%); garden `--sp-par: 10%` (mobile 6%); banners 8% / 5%. Moving layer = `figure > img` inside the masked frame; text and cards are outside the layer. |
Not used: sp-marquee (R1's photo strips would repeat photos on the page), sp-count, char splitting. `?sp-static` for all screenshots and gates; `check-parallax.mjs` must pass (≥ 6 px layer shift desktop and mobile; reduced-motion 0).

## 11. Similarity table (target ~80 %)
| Dimension | R1 value (token) | Madoka value |
|---|---|---|
| Ground / band / card / accent / spot / ink | #FBFAF3 / #FFD89D / #FFFBE2 / #EC7600 / #E4E959 / #372828 (a) | #FBFAF3 / #F3DDBD / #FDF8E6 / #7A6858 / #E2E1A2 / #372828 |
| Area shares | 52 / 25 / 12 / <3 / <1 % (a) | same |
| First-screen saturated | 3.3 % (a) | ≤ 6 % target |
| Hero frame | 1386×787, inset 27/86/27, torn mask 28 px corner, 3–6 px wobble (c, d) | identical numbers, own SVG |
| Hero title | 4.3125rem / 500 / lh 1.56, right half, white, 2 lines (b) | 4.3125rem / 500 / lh 1.25 en (1.56 CJK), right 45 %, ink, 2 lines |
| H2 | 2.25rem / 500 / lh 1.8 / ls .05em, accent, stripe per line (b, f) | 2.25rem / 500 / lh 1.8 / ls .02em en (.05em CJK), walnut, stripe per line |
| Body | 1rem / 400 / lh 2.0 / ls .05em (b) | 1rem / 400 / lh 1.9 en, 1.85 CJK / ls .02em en, .05em CJK |
| Weight ceiling | 500 (b) | 500 |
| Section padding | 78/78, 204/156, 156/139, 217/234; band gap 103 (c) | same values as clamp maxima |
| Container | 1284, 78 px margins (c) | 1284, 5.4vw (= 78 px) |
| Photo radius | 1.25rem (d) | 1.25rem (20 px) |
| Blob photo | egg ~1.09, 258–440 wide, across band edge (e) | egg/pebble 440×404 home, 320 inner, across edge 55/45 |
| Label tab | white 286×63, 20 px ink (f) | white ≈ 286×63, 1.25rem ink, square |
| Band edge | torn, 8 px amplitude, 103 px decoration (f) | torn SVG, 8 px amplitude, 16 px pseudo-element |
| Numerals | 85×85 blob, 44.8 px / 200, accent, on photo corner (f) | 128×104 blob (times) / 96×96 (steps), 2rem–2.8rem / 200, walnut, on photo corner |
| Badge | 132 px, spot fill, 4 px hard shadow, fixed 68/68, dotted label (f) | identical; hidden behind footer by z-index; inline 104 px on mobile |
| Logo | 195×130 accent blob top-left (f) | 195×130 walnut blob top-left |
| Point rows | photo 3:2 591×394 left/right + text (e) | same, zig-zag ×3 on home |
| Lead cluster | 4 photos ±100 px offsets over blobs (e) | 2 photos, +100 px offset, 2 flat blobs (no collage) |
| Motion | wipe 0.8s power2.out; pop 0.7s/0.2s back.out; hero zoom 7s (g) | E1 wipe 0.8s cubic-bezier(.215,.61,.355,1); E2 zoom .7s back-out, .2s stagger; E3 parallax 8–10 % |
| Hover | hop 0.4s cubic-bezier(0,.95,.51,1.37) (g) | same |
Deliberate differences: band and spot muted, accent walnut (binding row note); hero title ink not white (legibility); no marquee (no repeated photos); lead cluster reduced to 2 photos (no collage).

## 12. Home acceptance checklist (stage 1 review)
1. First screen 1440: logo blob top-left, torn frame 27 px inset with P01 (people left, pale wall right), H1 "Little days, held gently." ink at the upper right inside the frame, fixed spot badge bottom-right; no table/form/search, no reveal in the hero; `check-first-screen.py` ≤ 15 % (target ≤ 6 %).
2. 390 first screen: frame 4:5 then text below; no vertical text, no absolute labels, no overlap (auto-gates pass).
3. T1: hero frame torn; ≥ 4 torn edges visible (day band, garden band ×2, whole-day card, price card, visit band, footer).
4. T2: P05 egg across the day band edge with white tab "A day at Madoka"; P17 pebble across the visit band edge with tab; room cards carry white tabs.
5. T3: all 8 section headings have per-line stripes in walnut; 3 time blobs (07:30, 09:30, 17:00) overlap the photo corners in spot colour; whole-day list shows the 9 fixed times.
6. Block order = §5 table; differs from Seisui, Shokutaku, Ishizue, Neiro; no ghost words, arches, rails, sticky rows, ledgers, people grid, step grid, timeline line, collage, cut-outs.
7. Colours = §2; no walnut field larger than the logo blob / flat blob; no beige-led page.
8. Fonts: Albert Sans headings + Public Sans body; zh-TW/ja Noto Sans TC/JP; no serif; editor = front end (check-editor-fonts.mjs); theme.json max size 4.3125rem.
9. Price card full width at 800 and 1280, prices nowrap right, not clipped; amounts = §8.
10. 16 home photo positions, all different, all from the STYLE string, no text/logos.
11. Motion: E1 wipe, E2 zoom+stagger, E3 parallax on hero + garden; `check-parallax.mjs` pass (desktop + mobile ≥ 6 px, reduced-motion 0, no hidden residue); `?sp-static` final state for shots.
12. English home ≥ 450 words with ≥ 3 narrative paragraphs; all numbers match §8.
