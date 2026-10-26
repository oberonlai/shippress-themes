# Kasane Venue: design spec (stage 1, binding for implementation)

Slug `kasane-venue`. Wedding venue in a daylit former wool-exchange hall. Business type (WooCommerce declared compatible, not required). Design-plan row b13-3: archetype editorial-magazine, nav overlay, real photography with film grain, palette kyubai-nezu `#6E6578`, fonts Fraunces / Figtree, font_direction **serif**, page_structure booking-led.

Main reference: **The Day Osaka, https://theday.osaka/** (garden resort hotel; S5-Style hospitality). Secondary (motion mood only): https://musu-sauna.com/. Measurements: `reference-tokens.md` (cited below as RT(a)…RT(g)). Screenshots: `ref/*.png`.
We borrow the structure, the shapes, the colour relationships, the motion values **and the key visual concept**. We do not copy their photographs, video, copy, logo or whole-page layout.

Fixed brand facts (every page, all five languages; see §8): Kasane Venue, the Weavers' Hall, 22 Calder Wharf, Halbrook (fictional riverside town). Hall built **1908** as a wool exchange; restored 2014–2016; opened as a wedding venue in **spring 2016** by **Ines Varga** and **Tomas Achterberg**. **One wedding a day.** Currency **EUR** in every language.

---

## 1. Signature techniques (three; all must be obvious at a glance)

### T1. One organic blob window on a white page (theday.osaka first screen)
- **Reference (RT(e), `ref/theday-first-blob.png`):** on a plain white page, a single organic egg/pebble-shaped window (≈ 680 × 750 at 1440, x 378–1060, y 85–835, aspect ≈ 0.9:1) shows a daylit photograph: one chair in focus in the foreground against blurred greenery. No frame, no border, no shadow. The outline morphs slowly between shapes (10 s per shape, easeInOutQuad). Short heading + 4-line English statement sit bottom-left, outside the blob. White surrounds the blob on all sides (white ≈ 62 % of the screen).
- **Ours, home first screen:** the same blob window, same size and position, showing photo **K1** (the long undyed-linen table, chairs pulled out, nobody seated). Details in §3 "First screen".
- **Shape:** implemented with an 8-value `border-radius` on the `img` (animatable everywhere, works in the editor). Four shapes:
  - `--blob-a` (hero rest shape, point to the upper-left like the reference egg): `border-radius: 64% 36% 42% 58% / 58% 46% 54% 42%`
  - `--blob-b`: `border-radius: 52% 48% 38% 62% / 62% 40% 60% 38%`
  - `--blob-c`: `border-radius: 40% 60% 58% 42% / 48% 56% 44% 52%`
  - `--blob-d`: `border-radius: 58% 42% 50% 50% / 40% 60% 40% 60%`
- **Morph (hero only):** CSS `@keyframes kv-blob` a → b → c → d → a, `animation: kv-blob 40s cubic-bezier(.455,.03,.515,.955) infinite` (= 10 s per shape, easeInOutQuad, RT(g)). It is a decorative CSS animation, not a scroll effect. Must be `animation: none` (rest shape a) under `html.sp-no-motion`, `@media (prefers-reduced-motion: reduce)`, and `.editor-styles-wrapper`.
- **Must not be diluted:** the photo is **never a rectangle** and never rounded-rectangle; the blob is ≥ 640 px tall at 1440×900; the page around it is pure white (no wash, no gradient, no texture); the photo is not rotated, not framed, no shadow; the heading stays **outside** the blob (bottom-left), not over the photo.

### T2. Alternating edge-bleeding blob photos with a narrow text column (theday.osaka Hotel / BBQ / GRILL / Activity)
- **Reference (RT(c), RT(e), `ref/scroll-bg-sage.png`, `ref/scroll-bg-mauve.png`):** each section is one wide photograph (≈ 790 × 380–560, ≈ 55 % of viewport width, aspect 2:1 to 1.4:1) clipped by a *different* organic blob, running off the left or right page edge; the opposite side holds a narrow text column (≈ 270 px, 18 % width): two-line heading, a JP paragraph 16/24, an EN paragraph 13/19.5, then "View More →". Photos alternate left / right; the photo sits ≈ 120 px higher than the text block; no overlap of photo and text; no rotation.
- **Ours, home blocks 4–7 (the four rooms):** figure width `min(58.3vw, 992px)` (= 840 px at 1440), aspect 2:1 (blocks 4, 6) or 1.6:1 (blocks 5, 7), blob shapes b / c / d / b-mirrored (static, no morph), alternating **left bleed** (figure starts at x −20 px) and **right bleed** (figure ends at x 1460). Text column 300 px wide at x 990 (photo-left rows) or x 180 (photo-right rows), `align-self: start`, top offset +120 px below the photo top. Gap photo↔text ≥ 70 px.
- **Must not be diluted:** the photo must visibly touch/run off the page edge (no white margin on the bleed side); the text column stays narrow (280–320 px, never 50 %); each blob is a different shape; four rows strictly alternate L/R/L/R.

### T3. Section ground that changes colour per section (theday.osaka `data-home-bg`)
- **Reference (RT(a), RT(g)):** the page ground under the photo rows is a full-bleed pastel wash that changes per section: sage `#CAE2D3` → peach `#EFAE90` → dusty mauve-brown `#B5998E` → mist blue `#98C2D2` → back to white. A wash fills ≈ 80 % of a scrolled screen.
- **Ours:** home blocks 4–7 each sit on their own full-bleed wash (exact reference hex, §2) **edge to edge with no white gap between them**, so the ground visibly changes colour as you scroll from one room to the next; white returns from block 8. Implemented as static section backgrounds (no JS; the reference's 0.4 s cross-fade is replaced by the hard seam; see similarity table).
- **Must not be diluted:** washes stay at the reference strength (no lightening to near-white); each wash section is ≥ 760 px tall at 1440 so the colour dominates the screen; never two adjacent sections in the same wash.

### Supporting decoration (not counted as a signature, RT(f))
- Fixed right-edge **viewing tab** (≥ 782 px): 45 × 170 px, `#6E6578`, white vertical text "Request a viewing" Figtree 0.875rem (14 px), `writing-mode: vertical-rl`, `right: 0; top: calc(50% - 85px)`, radius 0, no border, links to /viewings. Below 782 px the tab is not rendered; a small pill "Viewing" (Figtree 0.8125rem, 1 px `#333` outline, radius 999 px, height 32 px) sits in the header left of the menu button.
- **News toast** (hero only, ≥ 1200 px): 330 × 90 white card, shadow `0 4px 20px rgba(0,0,0,.12)`, radius 0, 90 × 90 thumb **K13** left, meta "Open day" Figtree 0.6875rem (11 px) uppercase 0.04em, title "First Saturday of every month, 11:00–15:00" Figtree 0.8125rem (13 px). No close ×.
- "View More →" text links: Figtree 1rem, ink, 24 px thin arrow (1 px stroke, inline SVG), 12 px gap.
- No numbering, no rules, no dots, no badges anywhere (RT(f)). Dividers only in the fees list: 1 px `rgba(51,51,51,.2)`.

### Continuation to inner pages (required; ≥ 4 pages, we do all)
Every inner page = **page head with a static blob window (T1)** → body sections on washes with **alternating bleeding blob rows (T2+T3)** → close banner (§3 block 12). The viewing tab is global.

| Page | T1 page head (white, blob photo right, title bottom-left) | T2 bleeding blob rows | T3 wash grounds |
|---|---|---|---|
| Rooms | K2 in blob-c | 4 rows: K3, K4, K5, K6 (one per room, each with capacity line) | sage / peach / mauve-brown / mist |
| The Day | K7 in blob-b | 2 rows: K12 (morning, doors open), K10 (ceremony & evening) | sage / mist |
| Food & Drink | K15 in blob-d | 2 rows: K4 (dinner), K17 (next-morning brunch) | peach / sage |
| Fees & Dates | K14 in blob-a | 1 row: K12 (what the hire includes) above the fee table on white | sage (row), white (table) |
| Weddings (index) + single | K16 in blob-c (index) / featured image in blob-b (single) | single: 1 row with the second image | each single story on one wash (Elif & Jonah peach, Sanne & Theo mist, Marisol & Ade sage, Ruth & Ben mauve-brown) |
| The People | K11 in blob-b | 2 rows: K16 (florist), K15 (kitchen) | mauve-brown / sage |
| The Building | K14 in blob-d | 2 rows: K2 (the hall), K6 (dressing room) | mist / peach |
| Viewings | K12 in blob-c | 1 row: K13 (what to bring) | sage |
| Visit & Contact | K14 in blob-b | 1 row: K5 (garden court, arrival) | mist |
| FAQ | K3 in blob-d | — (text page on sage wash) | sage |
(Per-page image uniqueness is checked in §5.)

---

## 2. Colour (reference hex kept; ≤ 5 % lightness change only where noted)

| Role | Hex | Source token | Use | Share |
|---|---|---|---|---|
| Ground | `#FFFFFF` | RT(a) ground | page, header, hero, stories, people, fees, footer | ≈ 62 % of first screen; ≈ 50 % of the page |
| Ink | `#333333` | RT(a) ink | all text, nav, logo, menu button, arrows | text ≈ 3 % |
| Wash 1 sage | `#CAE2D3` | RT(a) wash 1 | room block 4 (North Room), viewing banner panel, inner rows | wash sections ≈ 80 % of their screens |
| Wash 2 peach | `#EFAE90` | RT(a) wash 2 | room block 5 (Long Hall) | ditto |
| Wash 3 mauve-brown | `#B5998E` | RT(a) wash 3 | room block 6 (Garden Court at dusk) | ditto |
| Wash 4 mist | `#98C2D2` | RT(a) wash 4 | room block 7 (Dressing Room) | ditto |
| Accent kyubai-nezu | `#6E6578` | design-plan row hex (replaces the reference's `#333` tab) | viewing tab, header "Viewing" pill hover fill, buttons, link hover, small label chip "Open day" | ≈ 2 % |
| Muted text | `#5C5862` | ink lightened toward the accent | captions, meta, toast meta | — |
| Line | `rgba(51,51,51,.2)` | RT(d) dividers | fee rows, footer rule | — |

- Why the one change: the row's kyubai-nezu mauve-grey must be the brand colour; it takes exactly the role and area of the reference's dark tab (2 %), so the colour relationship (white + four pastel washes + one dark small field) is unchanged. The four washes are wedding-appropriate as they are (sage, peach, dusty rose-brown, mist are classic wedding pastels), so they are kept 1:1.
- Contrast: `#333` on `#B5998E` = 4.9:1 (OK for body), on the other washes ≥ 8:1; white on `#6E6578` = 5.6:1.
- Not beige-led: white ground; no cream. Differs from the recent mains (Ayumi `#5F6348` olive, Kaname `#4A4036` brown, Isso grey `#F2F2F2`/`#2B2B2B`, Hakari red `#E8121F`).
- **First-screen saturated share:** reference measured 1.5 % (RT(a)); hard cap from the row = 30 %; the pipeline gate `check-first-screen.py` = **15 %**; this spec's target **≤ 5 %**. The first screen is white + one film-grain photo in linen/oak/sage tones + a 2 % mauve tab; no coloured UI, no wash on the hero.

## 2b. Typography (font_direction: **serif**)
- **Latin display / headings / logo:** **Fraunces** (variable; self-hosted woff2, axes wght + opsz; `font-variation-settings: "SOFT" 50, "WONK" 0`), weight **400 only** (RT(b): 400 everywhere, no bold).
- **Latin body / nav / UI:** **Figtree** 400 (500 only for the toast title). Reference uses a neo-grotesque for everything; we keep the grotesque for body and nav (Figtree) and give headings the row's serif.
- **CJK (serif direction = Mincho serif for headings *and* body, no Gothic sans anywhere):** zh-TW `"Noto Serif TC"`, ja `"Noto Serif JP"`, weights 400 (+ 600 for nothing; load 400 only). Subsets for zh-TW / ja per the Hokuto / Hada method (the subset script is known broken).
- Stacks (theme.json `fontFamilies`, each with `fontFace` entries pointing at `assets/fonts/*.woff2`; nothing loaded only via `wp_enqueue`):
  - `display`: `"Fraunces", "Noto Serif TC", "Noto Serif JP", Georgia, "Times New Roman", serif`
  - `body`: `"Figtree", "Noto Serif TC", "Noto Serif JP", system-ui, sans-serif`
  - `:lang(zh-TW)` headings and body: `"Noto Serif TC", "Fraunces", serif`; `:lang(ja)`: `"Noto Serif JP", "Fraunces", serif`. Because style.css uses `:lang(`, copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it so the editor iframe shows the same fonts (check-editor-fonts.mjs must pass in en and zh-TW).
- **Sizes** (theme.json `fontSizes`; source token in brackets):
  | slug | size | use |
  |---|---|---|
  | `x-small` | 0.6875rem (11 px) | toast meta, story dates [RT(b) small meta 11–12] |
  | `small` | 0.8125rem (13 px) | hero lead, EN paragraph in room columns [RT(b) EN body 13/19.5] |
  | `medium` | 1rem (16 px) | body, nav, "View More" [RT(b) body 16/24, nav 16] |
  | `large` | 1.5rem (24 px) | room headings, section labels ("Story", "People") [RT(b) H2 24/36, ls 0.05em] |
  | `x-large` | 2.25rem | inner-page section titles, fee totals |
  | `xx-large` | 3.125rem (50 px) | hero H1, inner page titles [RT(b) FV title max(50px, 3.47vw)] |
  | `huge` | **4.25rem** (68 px) — theme max | block 2 statement over the parallax hall, footer wordmark |
- Line-heights: headings 1.1 (FV) / 1.5 (H2 24/36 = 1.5) [RT(b)]; Latin body 1.5 [RT(b)]; CJK body **1.85**; CJK heading sizes ≈ 0.75 × Latin (H1 2.375rem, huge 3.25rem). Letter-spacing: large headings 0.05em [RT(b) 1.2 px], everything else 0. No uppercase except the toast meta. fr/de `hyphens: auto`.

---

## 3. Home page (en, 1440 × 900 reference viewport)

### Header (overlay, RT(f)/(g), `ref/theday-first-blob.png`)
Transparent over the white hero, `position: absolute; top: 0`, height 90 px, padding 20 px 30 px (not sticky; no scroll JS). Left: two-line wordmark "Kasane / Venue" Fraunces 1.625rem / 1.0 (second line 1.125rem, like "The Day / Osaka"). Centre: 5 nav items **Rooms · The Day · Food · Fees & Dates · Weddings** Figtree 1rem 400 sentence case, spread with `justify-content: space-between` from x 240 to x 1230. Right: language switch "en ▾" Figtree 0.875rem, then a 38 px dark circle menu button (`#333`, two white 12 px lines) opening an overlay menu with all pages. One top menu only. < 960 px: nav collapses into the circle button; the "Viewing" pill sits left of it (< 782 px).

### First screen composition (KV, see "Key visual concept")
- White page. Blob window **K1** centred: width `min(682px, calc((100svh - 150px) * 0.909))`, aspect 682 / 750, top 85 px, horizontally centred (left edge x 378 at 1440). `img` with `object-fit: cover`, `border-radius: var(--blob-a)`, morph animation (§1 T1). No reveal.
- Bottom-left text block (in a CSS grid row, **not absolutely positioned**): x 30, width 330 px, bottom padding 28 px, ends at y ≈ 880. H1 Fraunces 3.125rem / 1.1, 400: "The table / is set." Then 16 px gap, lead Figtree 0.8125rem / 1.5, 4 lines: "A daylit former wool hall on Calder Wharf, given to one wedding a day. One long undyed-linen table, the chairs pulled out, nobody seated yet. Walk through the rooms before you choose a date."
- Bottom-right toast (≥ 1200 px): x 1079–1410, y 760–850, K13 thumb (§1).
- Right edge viewing tab (fixed).
- Forbidden on the first screen: table, form, search box, giant centred word, wash colours, any second photo besides the toast thumb.
- **Mobile 390 × 844:** header 64 px (wordmark, "Viewing" pill, circle button). Blob K1 width 86vw (≈ 335 px), aspect 0.909, centred, top 76 px, static shape a (morph off below 782 px). Then H1 2.5rem, lead 0.875rem / 1.6, all in normal flow below the blob, side padding 24 px. **No vertical text, no absolutely positioned labels, no toast, no tab** in the mobile first screen.

### Block order
| # | Pattern slug | Purpose | Layout and photo | Copy |
|---|---|---|---|---|
| 1 | `kasane-hero` | KV, promise | T1 as above. **K1** (+ toast thumb **K13**) | 45 words |
| 2 | `kasane-opening` | the blob "opens" to the whole hall (reference first-wheel full-bleed) | Full-bleed Cover, height `min(90vh, 820px)`, **K2** background, **`sp-parallax`, `--sp-par: 10%`** (mobile 6 %). Overlay `#2B2730` at 22 % + bottom gradient to 45 %. Foreground (not in the moving layer), bottom-left x 180, bottom 96 px: Fraunces **4.25rem** / 1.05 white, two lines "One hall, / one wedding a day." + Figtree 1rem white line "Weavers' Hall, 1908 · Calder Wharf, Halbrook". Foreground text `sp-reveal sp-reveal--up`. | 15 words |
| 3 | `kasane-house` | concept (reference "Story" intro row) | White, padding 190 / 150. Three-column row inside 1080: left label "The house" Fraunces 1.5rem (x 180); middle 540 px: one lead line Fraunces 1.25rem / 1.6 + two paragraphs Figtree 1rem / 1.5; right "About the building →" (x 1260 right-aligned). No photo. `sp-reveal--up` on the middle column. | 110 words, 2 paragraphs |
| 4 | `kasane-room-north` | Room 1: ceremony | **T2 + T3**: wash sage `#CAE2D3`, min-height 820. Photo **K3** left-bleed, blob-b, 2:1, `sp-reveal sp-reveal--mask`. Text right (x 990, 300 px): heading "The North Room" Fraunces 1.5rem / 1.5 ls .05em; lead Fraunces 1rem / 1.6 (≈ 30 words); paragraph Figtree 0.8125rem / 1.5 (≈ 40 words); line "Ceremonies up to 120 seated"; "View More →" → /rooms#north. Text group `sp-reveal--up`. | 75 words |
| 5 | `kasane-room-hall` | Room 2: dinner | wash peach `#EFAE90`. **K4** right-bleed, blob-c, 1.6:1, mask reveal; text left at x 180. "The Long Hall", "Dinner for up to 96 at long tables". | 75 words |
| 6 | `kasane-room-garden` | Room 3: evening outside | wash mauve-brown `#B5998E`. **K5** left-bleed, blob-d, 2:1; text right. "The Garden Court", "Drinks and dancing for up to 140". | 75 words |
| 7 | `kasane-room-dressing` | Room 4: getting ready | wash mist `#98C2D2`. **K6** right-bleed, blob-b mirrored (`scaleX(-1)` on a wrapper is NOT allowed; write the mirrored radius `36% 64% 58% 42% / 46% 58% 42% 54%`), 1.6:1; text left. "The Dressing Room", "For up to 8, from 11:00". | 75 words |
| 8 | `kasane-day` | a wedding day as it actually runs | White, padding 190 / 150. Left: **K7** blob-c 4:5, width 440 px at x 180 (inside content, no bleed), mask reveal. Right (x 720, 460 px): label "The day" Fraunces 1.5rem; one paragraph (40 words); then a plain **two-column definition list** of the 8 fixed times (§8), time Fraunces 1rem, text Figtree 0.875rem, 12 px row gap — no lines, no dots, no vertical rail. "How the day runs →". `sp-stagger` on the list, items `sp-reveal--up`. | 40 words + 8 short lines |
| 9 | `kasane-stories` | three weddings (reference "Story" cards) | White. Head row like block 3: "Weddings" label left, one line middle, "View All →" right. Then a row of 3 rectangular photos, radius 0, heights 540 px: **K8** (x 18–560), **K9** (x 590–1220), **K10** (x 1250– bleeds off the right edge), each 3:4 / 7:6 / 3:4 crop as in `ref/scroll-after-story.png`; below each: date 0.6875rem, couple name Fraunces 1.25rem, one line. Row container `sp-reveal--up` (not the children; the row overflows). Mobile: one column, third image not bleeding. | 3 × 20 words |
| 10 | `kasane-people` | the people who keep the building | White, padding 150 / 150. Left text column 300 px at x 180: label "People" Fraunces 1.5rem, paragraph (50 words), then the 7 names as a plain list "Name — role" (Figtree 0.875rem, line 1.9). Right: **K11** right-bleed, blob-d, 1.4:1, mask reveal. List `sp-stagger` + `sp-reveal--up`. Not a team grid, no portraits. | 50 words + 7 lines |
| 11 | `kasane-fees` | dates & fees preview (booking-led) | White. Label "Fees & Dates" left, 4 rows full content width 1080 (Saturday / Friday or Sunday / Monday–Thursday / Winter day), name left, short note middle, price right **nowrap, right-aligned**, 1 px `rgba(51,51,51,.2)` rules, row height 64. Below: "Hire includes tables, chairs, undyed linen and the house team, 11:00–00:30." + "All fees →". **No reveal on the list.** | 30 words |
| 12 | `kasane-viewing` | close: request a viewing (reference member banner) | Inside 1080: two halves height 300. Left half **K12** rectangular (radius 0). Right half sage `#CAE2D3`: small chip "Open day" (`#6E6578`, white, 0.75rem, padding 4 / 12), heading Fraunces 1.75rem "Come and see the hall", underlined link "Request a viewing" → /viewings, line "Tue–Sun 10:00–17:00 by appointment". `sp-reveal--up` on the whole group. | 25 words |
| 13 | footer | access (reference access block) | White, padding 232 / 120. Left: wordmark "Kasane Venue" Fraunces **4.25rem**; right two columns: address, hours, email `hello@kasanevenue.example`; links to all pages; small line "© Kasane Venue". | 50 words |

- **Photo positions on home: 13** (K1, K13, K2, K3, K4, K5, K6, K7, K8, K9, K10, K11, K12), each once. ≥ 8 ✔.
- English home ≈ 700 words; narrative paragraphs in blocks 3 (2), 4–7 (4), 8, 10 (≥ 3 ✔). CJK home ≥ 500 characters.

### Comparison with the recent themes
| # | Ayumi Podiatry | Kaname Watches | Isso Relocation | Hakari Course | **Kasane Venue** |
|---|---|---|---|---|---|
| 1 | split 2×2 hero, confetti shapes | framed-window two-pane photo | split photo \| gradient, framed 3:4, glyph-rise wordmark | full-bleed photo, 88 px bottom corners, hashtags | **one morphing blob window on white, heading bottom-left** |
| 2 | listening square + glows | 1 px-gap tile row | "( 01 )" concept | course panel on wash | **full-bleed parallax hall + big statement** |
| 3 | full-bleed room band | caps hairline sections | photo trio | tilted −5° photos ×3 | **concept row: label · text · link** |
| 4 | tilted complaint wall | … | horizontal phases | syllabus sticky panel | **4 × alternating edge-bleeding blob photos, each on its own wash (sage / peach / mauve-brown / mist)** |
| 5 | marquee pills | … | hours rail | instructor tilted | (rooms continue) |
| 6 | 01/02/03 colour cards | … | one move band | rounded parallax band | **day as it runs: blob 4:5 + two-column times** |
| 7 | outcome photo + arch | … | 7-row price table | stories rotated ±5° | **3 large rectangular story photos, third bleeding right** |
| 8 | … | … | crew | cohorts | **people: names list + bleeding blob** |
| 9 | … | … | … | … | **4-row fees preview, viewing banner half photo / half sage** |
Why not alike: no split hero, no framed rectangle hero, no rotation, no numbering "( 01 )", no hashtags, no gradient half, no tile grid, no cards. The only shared idea is a full-bleed parallax band (mandatory for every theme); ours follows the blob hero as the "opening" moment and carries a 4.25rem statement. The fixed tab exists in Isso/Hakari too, so it is decoration only here, not a signature; our signatures (blob window, bleeding blob rows, per-section washes) appear in none of the four.

---

## Key visual concept

### (1) Reference first screen: concept, story, signature motion (theday.osaka)
- **Drawn:** a white page with one organic blob window onto a daylit garden-hotel room: a single chair in terracotta upholstery in sharp focus in the foreground, trees and a cabin blurred behind, curtains at the edge. Header nav across the top, short heading ""Spend time deeply" (Japanese heading)" + a 4-line English statement bottom-left, a dark vertical "reservation" tab on the right edge, two small news toasts bottom-right.
- **Story:** "Spend time deeply in the garden": every moment there is unrepeatable. The place is shown first through one soft window, a glimpse, and then opened to the whole room.
- **Signature motion:** the blob outline morphs continuously (10 s per shape, easeInOutQuad); on the first wheel the page whites out (0.8 s), the clip is removed and the room appears full-bleed; later sections fade up 25 px over 1.2 s while the page ground changes colour per section.

### (2) Our translation (wedding venue, same composition, same motion idea, same image type = photo)
- **Scene:** the daylit former hall before the guests arrive: through one pebble-shaped window we see the long undyed-linen table, chairs pulled out, nobody seated, one chair sharp in the foreground (the reference's chair), tall windows and the rest of the table softly blurred behind. Film-grain, high-key photograph.
- **Story:** "The table is set": the day has not started yet and it will happen only once. First a glimpse through one window, then (block 2) the window opens to the whole hall, then each room arrives in its own blob on its own colour ground.
- **Motion:** same blob morph (40 s cycle, 10 s per shape, easeInOutQuad); the "opening" becomes block 2's full-bleed hall photo with `sp-parallax` (the image moves slower than the page, like the reference full-bleed video under a fixed body); room rows reveal with `sp-reveal--up` 25 px / 1.2 s ease-out and photos with `sp-reveal--mask`; the ground changes colour per room.

### (3) KV checklist (all items in the first screen, visible at 1440 × 900)
| # | Reference element | Our counterpart | Position | Motion | Photo |
|---|---|---|---|---|---|
| 1 | White page with one organic blob window (≈ 680 × 750) onto a daylit room | Pebble blob window, white all around, ≈ 682 × 750, film-grain photo of the long linen table | centred, x 378–1060, y 85–835 (1440) | border-radius morph a→b→c→d, 10 s each, easeInOutQuad, loop; static in sp-static / reduced-motion / editor | **K1** |
| 2 | Foreground chair sharp against a blurred garden | One chair pulled out at the table's near end, sharp; the rest of the table and the tall windows blurred | inside the blob, chair in the lower-left third of the photo | none | **K1** |
| 3 | Bottom-left short heading + 4-line English statement | H1 "The table / is set." Fraunces 3.125rem + 4-line lead 0.8125rem | x 30–360, y ≈ 735–880 | none (hero has no reveal) | — |
| 4 | Transparent header: two-line logo, 6 spread nav items, round dark menu button | "Kasane / Venue" two-line wordmark, 5 spread nav items, 38 px `#333` circle button, "en ▾" | top, y 20–70 | none | — |
| 5 | Fixed right-edge dark vertical "reservation" tab | Vertical "Request a viewing" tab 45 × 170, `#6E6578`, white text | x 1395–1440, y 365–535 (fixed) | none | — |
| 6 | Bottom-right news toast with square thumbnail | One white toast "Open day · First Saturday of every month, 11:00–15:00" with 90 × 90 thumb | x 1079–1410, y 760–850 (≥ 1200 px) | CSS fade-in 0.8 s ease-out, 0.6 s delay (off in sp-static / reduced-motion) | **K13** |
The "opening to full-bleed" (reference first wheel) is block 2, directly below the fold: **K2** full-bleed with `sp-parallax`.

---

## 4. Inner pages (10 + single story + 404/search)
Every page: T1 page head → body → block-12 viewing banner → footer. Page head (white, height 640 at 1440): blob photo right (x 640–1240, 600 × 520, static shape, `object-fit: cover`), title bottom-left x 180 Fraunces 3.125rem + lead Figtree 1rem (≤ 40 words). Mobile: blob 86vw on top, title below, normal flow.

1. **Rooms** `/rooms`: four rooms, each a T2 row on its wash (North Room sage K3, Long Hall peach K4, Garden Court mauve-brown K5, Dressing Room mist K6) with: 120-word description, capacity line, light & sound notes, what stays in the room. Anchors `#north #hall #garden #dressing`. Close: "Wet-weather plan: ceremonies move from the Garden Court to the North Room in 20 minutes."
2. **The Day** `/the-day`: the full day in 8 fixed times (§8) as prose sections (time as Fraunces 1.5rem label, 60–80 words each) on white; two T2 rows: K12 (morning, doors open, sage) and K10 (ceremony & evening, mist). Notes: noise limit, candles allowed (no open flame on linen), confetti only dried petals in the Garden Court, last music 23:30.
3. **Food & Drink** `/food`: the house kitchen led by Lucien Marchetti; seasonal three-course dinner €118 per guest, next-morning brunch €34; dietary needs; outside caterers not permitted, outside cake allowed; bar run by Rafael Duarte. Rows: K4 (dinner, peach), K17 (brunch, sage).
4. **Fees & Dates** `/fees`: T2 row K12 "What the hire includes" on sage; then the **full fee table (7 rows, §8)** on white, full container width; then deposit / hold / balance / cancellation paragraphs; then "Dates still open this year" as text months (no calendar widget).
5. **Weddings** (posts index `home.html`, `archive.html`) + **single** (`single.html`): 4 stories (§8). Index: page head K16; large first story (K8 in a blob, text right) then 3 rectangular cards 3:4 (K9, K10, K17). Single: page head with the featured image in blob-b, text column 680 px, one T2 row with a second image on the story's wash.
6. **The People** `/people`: 7 people (§8) each as a short paragraph (name Fraunces 1.25rem, role, 50 words), in a 2-column text list on white; T2 rows K16 (Hana, flowers, mauve-brown) and K15 (Lucien, kitchen, sage). No portrait grid.
7. **The Building** `/the-building`: history 1908 wool exchange → 1971 storage → empty 2003–2013 → restoration 2014–2016 (lime-washed walls, the original oak floor, 14 tall windows) → opened spring 2016. Rows K2 (mist), K6 (peach).
8. **Viewings** `/viewings` (booking-led core): how a viewing works (60 min, with Priya Nair), the 5 booking steps as a numbered prose list (§8, no step grid), what to send (date range, guest count, ceremony inside or out), open day line, mailto button `#6E6578` "Email to request a viewing". Row K13 (what to bring, sage). No form required.
9. **Visit & Contact** `/visit`: address, office hours, viewing hours, arrival by train (Halbrook station, 12 min walk along the wharf), parking 18 spaces, step-free access to every room, nearest rooms to stay (generic, no real hotels). Row K5 (garden court, mist).
10. **Questions** `/questions`: 10 Q&As as plain text on the sage wash (capacity, exclusivity, music, candles, accessibility, children, weather, suppliers, deposit, cancellation).
11. **404 / search**: T1 head with **K14** in a blob + link home.

---

## 5. Photos (17, Grok, one at a time, Read each)

**Imagery: photo** (stage-a IMAGERY = photo; reference is real daylight photography).
STYLE (exact string on every prompt):
`film-grain documentary photograph, 35mm film look with fine visible grain, high-key bright natural daylight from tall windows, soft shallow depth of field with the foreground in sharp focus against a softly blurred background, muted palette of undyed linen, pale oak, soft sage green, dusty mauve and lime-washed white walls, gentle warm-green grade, slight highlight bloom, calm and quiet, modern international setting, diverse adults when people appear, no text, no logos, no signage lettering, no brand marks, no Japanese elements`

| ID | Subject / composition | Ratio | Used on (once per page) |
|---|---|---|---|
| **K1** ★ | KV: long undyed-linen table running away diagonally in a daylit former hall, chairs pulled out, nobody seated, one pale-oak chair sharp in the lower-left foreground, tall windows and the rest of the table blurred, plain glasses and folded napkins | 4:5 (crop 0.909) | Home hero |
| **K2** ★ | the whole hall wide: lime-washed walls, 7 tall windows with light shafts, the long table set down the middle, oak floor, empty | 16:9 | Home block 2 (parallax); Rooms head; Building row |
| **K3** ★ | North Room set for a ceremony: rows of simple oak chairs either side of an aisle facing a tall window, no people | 2:1 | Home block 4; Rooms row; FAQ head |
| **K4** ★ | close table detail: linen napkin, plain plate, stemmed glass, bread, a sprig on linen, window blur behind | 2:1 | Home block 5; Rooms row; Food row |
| **K5** ★ | Garden Court at dusk: gravel, two olive trees in planters, festoon bulbs lit, an empty high table, brick wall | 2:1 | Home block 6; Rooms row; Visit row |
| **K6** ★ | Dressing Room: an ivory dress on a hanger by a tall window, a mirror, a chair with a folded veil | 1.6:1 | Home block 7; Rooms row; Building row |
| **K7** ★ | hands (no faces) setting place cards and folding linen napkins on the long table | 4:5 | Home block 8; The Day head |
| **K8** ★ | couple seen from behind walking out of the hall's tall doorway into autumn light | 3:4 | Home story 1; Weddings index (lead) |
| **K9** ★ | small winter dinner: candles, a few guests out of focus at a short table, window blue hour | 7:6 | Home story 2; Weddings card |
| **K10** ★ | June ceremony in the Garden Court: guests standing, seen from behind, dried petals in the air | 3:4 | Home story 3; The Day row; Weddings card |
| **K11** ★ | building keeper on a wooden ladder opening a tall window, seen side-on, linen bundle on the floor | 1.4:1 | Home people; The People head |
| **K12** ★ | the hall's double doors standing open onto the garden court, morning light | 3:2 | Home viewing banner; The Day row; Fees row |
| **K13** ★ | a stack of folded undyed linen on a chair seat, close | 1:1 | Home toast thumb; Viewings row |
| K14 | exterior: brick former wool hall with tall arched windows, trees, wharf edge, no signage | 3:2 | Fees head; Building head; Visit head; 404 |
| K15 | kitchen: hands plating a simple seasonal starter on white plates | 4:5 | Food head; People row |
| K16 | florist's hands tying seasonal stems on a linen-covered table | 4:5 | People row; Weddings index head |
| K17 | next-morning brunch in the garden court: bread, fruit, coffee on a small table, no people | 3:4 | Food row; Weddings card (Ruth & Ben) |
★ = used on the home page (13 positions). 17 images total, no cutouts (0 transparent PNG), each ≤ 300 KB and ≤ 2000 px, webp, readme line per image (AI-generated). Regenerate any image with text, logos, broken hands or a face that fails.

Per-page uniqueness: Home K1 K13 K2 K3 K4 K5 K6 K7 K8 K9 K10 K11 K12 · Rooms K2 K3 K4 K5 K6 · The Day K7 K12 K10 · Food K15 K4 K17 · Fees K14 K12 · Weddings index K16 K8 K9 K10 K17 · People K11 K16 K15 · Building K14 K2 K6 · Viewings K12 (head) K13 · Visit K14 K5 · FAQ K3 · 404 K14. Single stories: Elif & Jonah K8 + K12, Sanne & Theo K9 + K4, Marisol & Ade K10 + K5, Ruth & Ben K17 + K13.

---

## 6. Scroll motion (sp-scroll; three effects, hero none)
| Effect | Class | Where | Source and values |
|---|---|---|---|
| Fade-up | `sp-reveal sp-reveal--up` (+ `sp-stagger` on lists) | text groups in home blocks 2 (foreground), 3, 4–7, 8 (list), 9 (row container), 10 (list), 12; inner-page section text | theday.osaka `animeFade`: trigger ≈ element top enters viewport bottom, 1.2 s ease-out, opacity 0→1, translateY 25 px→0, no stagger (RT(g)); musu-sauna "top 80 %" once. Set on `.kasane-reveal-scope` or `:root`: `--sp-dur: 1.2s; --sp-dist: 25px; --sp-ease: ease-out`. Stagger only on the day list and the people list (0.12 s steps, built-in). |
| Mask reveal of blob photos | `sp-reveal sp-reveal--mask` on the **figure wrapper**; the blob `border-radius` sits on the inner `img` | room photos (blocks 4–7), K7 (block 8), K11 (block 10), all inner T2 rows | theday.osaka FV blob → reveal: built-in 1.2 s ease-out top-to-bottom gradient mask. Do **not** use `sp-reveal--wipe` on blob photos (its child `clip-path: inset()` would fight the blob). |
| Parallax | `sp-parallax` on the Cover | home block 2 (K2), Rooms page head is static | theday.osaka first wheel → full-bleed; musu-sauna scrub parallax "top 80 %" → "top 20 %". `--sp-par: 10%` (≥ 782 px), `6%` (< 782 px). |
Not used: wipe, zoom, count, marquee. Hero: no reveal (only the CSS blob morph and the toast fade, both off in `?sp-static`). Fees table, forms, legal text: no reveal. Section ground colours are static (T3).

### Parallax (required)
- Block: home block 2 `kasane-opening`, full-bleed Cover, height `min(90vh, 820px)` (mobile `70svh`).
- Background (moving layer): `.wp-block-cover__image-background` = **K2**; scale 1.18 (built-in), `--sp-par: 10%` desktop, `6%` mobile (set by a media query on `.kasane-opening`).
- Foreground (static, not inside the moving layer): the 4.25rem statement + line, with `sp-reveal--up`.
- Reference motion: theday.osaka's blob-to-full-bleed opening (the room fills the screen under a held page) and musu-sauna's scrubbed parallax. Must pass `check-parallax.mjs` (≥ 6 px desktop and mobile, 0 under reduced motion).

---

## 7. Responsive rules
- **390 px first screen:** blob, H1 and lead in normal flow; no vertical text, no absolutely positioned labels, no toast, no fixed tab (header "Viewing" pill instead), no text over the photo; no horizontal overflow (bleeding photos use negative margins inside an `overflow-x: clip` page).
- Room rows < 782 px: photo first (bleeding to its side, width 92vw, aspect 1.4:1, same blob), text below with 24 px side padding; wash keeps full width; min-height removed, padding 72 / 88.
- Stories row < 782 px: one column, each photo 100 % width 4:5, no bleed.
- **Fee tables at ≥ 782 px** (800 and 1280 are checked): table `width: 100%` of the 1080 container (`alignwide`), `table-layout: auto`; price column `white-space: nowrap; text-align: right; min-width: 9ch`; no fixed widths that can clip; no horizontal scroll wrapper.
- **Any table < 782 px:** stacked: each row becomes a block (name Fraunces 1.125rem, note Figtree 0.875rem, price on its own line left-aligned), 1 px rule between rows.
- Viewing banner < 782 px: photo on top (3:2), sage panel below.
- Page heads < 782 px: blob photo 86vw on top, title below.

---

## 8. Fixed facts and numbers (identical on home, inner pages and all five languages)
- **Address:** Kasane Venue, Weavers' Hall, 22 Calder Wharf, Halbrook (fictional). Email `hello@kasanevenue.example`. No phone number on site.
- **History:** built 1908 (wool exchange), restored 2014–2016, opened spring 2016. One wedding a day.
- **Capacity:** ceremony up to **120** seated (North Room); dinner up to **96** at long tables (Long Hall); Garden Court up to **140** standing; Dressing Room up to **8**.
- **Hours:** viewings **Tue–Sun 10:00–17:00** by appointment (60 minutes); open day **first Saturday of every month, 11:00–15:00**, no booking; office **Tue–Fri 9:30–17:30**; closed Mondays except to that day's wedding party. Wedding hire **11:00–00:30**, music ends **23:30**.
- **Fees (EUR, incl. VAT; venue hire 11:00–00:30 incl. tables, chairs, undyed linen and the house team):**
  | # | Item | Note | Price |
  |---|---|---|---|
  | 1 | Saturday | April–October | €11,500 |
  | 2 | Friday or Sunday | April–October | €8,900 |
  | 3 | Monday–Thursday | April–October | €6,800 |
  | 4 | Winter day | any day, November–March | €5,200 |
  | 5 | Ceremony only | North Room, 2 hours, Monday–Thursday | €2,400 |
  | 6 | Dinner from the house kitchen | three courses, per guest | €118 |
  | 7 | Next-morning brunch | Garden Court, per guest | €34 |
  Home block 11 shows rows 1–4. Deposit **30 %** to confirm; date hold **7 days** free; balance due **8 weeks** before; cancellation: deposit kept, balance refunded if cancelled more than 8 weeks before.
- **Booking steps (prose, numbered, no grid):** 1 Request a viewing → 2 Walk the building with Priya (60 min) → 3 Hold the date free for 7 days → 4 Confirm with a 30 % deposit → 5 Three planning meetings with Amara (6 months, 8 weeks and 10 days before).
- **The day as it runs:** 11:00 doors open to the wedding party · 13:00 guests arrive in the Garden Court · 14:00 ceremony in the North Room · 15:00 drinks in the Garden Court · 18:30 dinner in the Long Hall · 21:00 tables moved back, dancing · 23:30 music ends · 00:30 doors close.
- **People (7):** Ines Varga — co-founder, venue director · Tomas Achterberg — co-founder, keeper of the building · Amara Okonjo — wedding coordinator (one contact from viewing to last song) · Priya Nair — bookings and viewings · Lucien Marchetti — head of the kitchen · Hana Kowalczyk — florist in residence · Rafael Duarte — evening host and bar.
- **Stories (4):** Elif & Jonah — October Saturday, 92 guests, rain moved the ceremony indoors (K8) · Sanne & Theo — winter Tuesday, 34 guests (K9) · Marisol & Ade — June garden ceremony, 120 guests (K10) · Ruth & Ben — Thursday lunch wedding, 24 guests (K17).
- No awards, no media, no guarantees, no real brands, no real hotels.

---

## 9. Similarity table (target ≈ 80 %)
| Dimension | Reference (token) | Kasane Venue |
|---|---|---|
| Page ground | `#FFFFFF` (RT(a)) | `#FFFFFF` |
| Ink | `#333333` (RT(a)) | `#333333` |
| Section washes | `#CAE2D3` / `#EFAE90` / `#B5998E` / `#98C2D2` (RT(a)) | same four, same order |
| Dark accent | `#333` tab, 2 % (RT(a)) | `#6E6578` tab, 2 % (row hex) |
| First-screen saturated share | 1.5 % (RT(a)) | target ≤ 5 %, gate 15 % |
| Wash share on a section screen | ≈ 80 % (RT(a)) | ≈ 80 % (min-height 820) |
| Heading weight | 400 only (RT(b)) | 400 only |
| FV title | 50 px, lh 1.1 (RT(b)) | 3.125rem = 50 px, lh 1.1 |
| H2 | 24 / 36 px, ls 0.05em (RT(b)) | 1.5rem / 1.5, ls 0.05em |
| Body | JA 16/24, EN 13/19.5 (RT(b)) | 1rem / 1.5; EN column paragraph 0.8125rem / 1.5; CJK lh 1.85 |
| Nav | 16 px, 400, sentence case, 6 items spread (RT(b)) | 1rem, 400, sentence case, 5 items spread |
| Content width | 1080–1100, side 180 at 1440 (RT(c)) | 1080, side 180 |
| Section padding | 70–300 px; story 300, news 190/168, access 232/182 (RT(c)) | house/day 190/150, people 150/150, footer 232/120 |
| Hero blob | ≈ 680 × 750, x 378–1060, y 85–835, aspect 0.9 (RT(e)) | 682 × 750, x 378–1060, y 85–835, aspect 0.909 |
| Blob morph | 7 shapes, 10 s each, easeInOutQuad (RT(g)) | 4 shapes, 10 s each, `cubic-bezier(.455,.03,.515,.955)` |
| Section photo | ≈ 790 × 380–560, 55 % width, aspect 2:1–1.4:1, bleeding, alternating (RT(e)) | `min(58.3vw, 992px)`, aspect 2:1 / 1.6:1, bleeding, alternating |
| Text column | ≈ 270 px, ≈ 260 px from edge (RT(c)) | 300 px, 180–190 px from edge |
| Photo offset vs text | photo ≈ 120 px above text (RT(e)) | text top = photo top + 120 px |
| Radius | photos 0 (shape by clip), cards 0 (RT(d)) | photos: blob only; rectangles 0; toast 0 |
| Shadow | toast `0 4px 20px rgba(0,0,0,.12)` (RT(d)) | same |
| Tab | 45 × 170 vertical, right edge, y 365–535 (RT(f)) | 45 × 170, same position |
| Toast | 330 × 90, thumb 90 × 90, 11 / 13 px (RT(f)) | same |
| Link | "View More →" 16 px + 24 px thin arrow (RT(f)) | same |
| Reveal | fade-up 25 px, 1.2 s ease-out, no stagger (RT(g)) | `sp-reveal--up` 25 px, 1.2 s ease-out; stagger only on two lists |
| Ground swap | per section, 0.4 s ease-out cross-fade (RT(g)) | per section, hard seam (static, no scroll JS) |
| Opening | wheel → white-out 0.8 s → full-bleed video (RT(g)) | block 2 full-bleed K2 with `sp-parallax` 10 % |
| Story cards | 3 large rect photos, third bleeding right (ref shot) | same: K8 / K9 / K10, third bleeding |
| Decoration | no numbers, no lines, no dots (RT(f)) | none |

---

## 10. Home acceptance checklist
1. First screen at 1440 × 900: white page, one blob window ≈ 682 × 750 centred with K1 (empty linen table, chair sharp in front), morphing (static in `?sp-static`); H1 "The table / is set." + 4-line lead bottom-left outside the blob; transparent header with two-line wordmark, 5 spread nav items, dark circle button; `#6E6578` vertical tab on the right edge; toast with K13 bottom-right. No rectangle hero, no wash, no table/form/search.
2. `check-first-screen.py` saturated share ≤ 15 % (target ≤ 5 %).
3. Block 2: full-bleed K2 with `sp-parallax` passes `check-parallax.mjs` desktop + mobile; foreground statement at 4.25rem, left-aligned.
4. Blocks 4–7: four blob photos (K3–K6), each a different shape, alternating left/right bleed, each touching the page edge, narrow 300 px text column opposite, on sage / peach / mauve-brown / mist in that order with no white gap between them.
5. Blocks 8–12 as in §3; stories row with third photo bleeding right; people list (7 names) with no portrait grid; fees preview 4 rows with prices right-aligned nowrap and matching §8; viewing banner half photo / half sage.
6. 13 photo positions on home, no image twice; all 17 images match STYLE, no text/logos/bad hands.
7. Typography: Fraunces 400 headings, Figtree body, CJK Noto Serif TC / JP (Mincho serif) via theme.json fontFace; editor = front end; max size 4.25rem used.
8. Motion: only `sp-reveal--up`, `sp-stagger`, `sp-reveal--mask`, `sp-parallax`; hero has no reveal; `?sp-motion` scroll-to-bottom leaves nothing hidden; reduced-motion shows everything.
9. 390 px: no horizontal overflow, no overlapping text, no vertical labels or toast/tab in the first screen; tables stacked.
10. Signatures continue on Rooms, The Day, Food, Fees, Weddings, People, Building, Viewings, Visit (blob page head + bleeding blob rows on washes).
11. Numbers (fees, capacities, times, hours, people, stories) identical on home, inner pages and all five languages.
