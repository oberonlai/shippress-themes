# Budou Academy: design spec (stage 1, binding for implementation)

Slug `budou-academy`, sommelier school for people who already work in service (waiters, bartenders, floor managers). Type **business** (WooCommerce compatible, not required). Five languages: en, zh-TW, ja, fr, de.
Main reference: **Daiichi Seminar https://www.daiichisemi.net/** (S5-Style #12132, school / education; one reference only, fukujo.ac.jp was in maintenance). Measurements: `brand/reference-tokens.md` (every number below that says "ref" comes from there). Screenshots: `brand/ref/daiichi-first.png`, `daiichi-s2.png`, `daiichi-s3.png`, `scroll-parallax-a|b.png`, `scroll-fadeup-*.png`.
Borrow structure, technique, colour relationships, motion **and the key-visual concept**. Never copy their photos, copy, logo or full page layout. Our photos are generated (Grok), our copy is our own.

**IMAGERY: photo** (stage-a.md). Real documentary photography, high-key, as the reference.
Type direction: **serif** (row b13-4). Quiet palette; first-screen saturated share ≤ 10% target, gate ≤ 15% (`check-first-screen.py`), never > 30%.

Fixed brand facts (every page, all five languages, see §9): Budou Academy, founded **2014**, **Bordeaux, France**; classes on **Mondays** (the day most restaurants close); **12 seats** per class.

---

## 1. Signature techniques (three, all obvious at a glance)

### T1. Interlocking rounded photo-tile collage + one huge slanted two-tone headline crossing the seam (daiichisemi.net hero)
- **Reference (https://www.daiichisemi.net/, `daiichi-first.png`)**: the whole first screen is photographs in big rounded tiles (radius **54px**). Left column: two stacked tiles (x 0–702; top tile ends y 535, second starts y 572 and is cut by the viewport bottom). Right column: one tall tile (x 738–1440, y 166–866) that bleeds off the right edge, plus a sliver of the next tile above it (top-right, ends y 130). Gutter **36px** both ways. Over everything one line of very large, italic-slanted, orange→yellow gradient type ("(ref slogan)", glyph height ≈ 190px) runs from x ≈ 275 to x ≈ 1165 at the vertical middle, **crossing the gutter between the columns**. The two photo columns drift vertically in opposite directions.
- **Budou (home `front-hero`)**: same grid, same proportions, same seam crossing. Photos K1–K4 (§7). Headline "Taste it. Name it." in Cormorant Garamond **Italic 600**, gradient `#4A6358 → #82997A` left→right, `background-clip: text`, starting at x = 19% of the viewport, baseline at 56% of hero height, crossing the 36px gutter at x ≈ 49%. Left column tiles `sp-parallax --sp-par: 10%`, right column tiles `--sp-par: -8%` (opposite direction, the static substitute for the ref's vertical sliders).
- **Must not be diluted**: radius stays **54px** on desktop (not 24, not 0); tiles fill the first screen edge to edge (no white margins around the collage, only the 36px gutters); the right tall tile bleeds off the right edge; the headline is ≥ 8rem at 1440, slanted, gradient, and **physically crosses the gutter between photos** (not set in a white box, not under the photos). No dark overlay on photos.

### T2. White floating pill header inset from the edges, three coloured programme tabs with 3px underlines, three solid CTA tiles at the right (daiichisemi.net header)
- **Reference**: white bar inset **54px** left and right, flush to the top, bottom corners rounded (≈ 24px), soft shadow; logo + small two-line descriptor left; text nav; a grey `#F3EEE6` pill ("(ref find-a-classroom)"); three solid 90×90 CTA tiles in graduated orange (`#F6A700`, `#EF7C00`, `#E85D27`) with a line icon over two short lines of white text; hamburger. Under the bar, a 48px tab row split in three equal tabs ("(ref audience tabs)"), each with a **3px coloured underline** (`#F6A700`, `#EF7C00`, `#13884D`), thin 1px `#EEE` dividers.
- **Budou (`parts/header.html`, all pages)**: identical geometry (§5.4). Tabs = the three programmes: "Service Floor Certificate" (underline `#7E968A`), "Cellar & Trade Diploma" (`#4A6358`), "Advanced Tasting" (`#6E2A3A`). CTA tiles: "Sit in on a Monday" `#5B7568` (glass icon), "Open evening" `#4A6358` (calendar icon), "Prospectus" `#6E2A3A` (envelope icon). Grey pill = "Next term · 11 Jan" link to /term-fees/.
- **Must not be diluted**: the header must float (inset 54px, page/photo visible on both sides of it, bottom radius 24px, shadow), the CTA tiles must be solid colour squares 90×90 touching the bar's top edge (not outline buttons), the 3px underlines must be in three different colours.

### T3. Saturated band with one huge rounded corner + translucent circle arcs; a big rounded photo overlaps the band edge, alternating sides (daiichisemi.net "features 01–03")
- **Reference (`daiichi-s3.png`)**: a full-height orange gradient band starts at the left page edge and stops at ≈ 64% of the width, its **top-right corner radius ≈ 90px**; inside, large translucent tone-on-tone circle arcs (Ø ≈ 700) at left; a white dot label "● Daiichi Seminar features 01", a white bold H3 (≈ 33px), white body. A 720×540 photo (radius **36px**) starts 40px below the band top and runs past the band's right edge onto white. The next feature mirrors (band from the right edge, photo left). Row gap ≈ 128px.
- **Budou (home `front-features`, 3 rows)**: band `linear-gradient(to top right, #4A6358, #5E7A6C)`, top-right corner 90px (mirrored rows: band from the right, top-left corner 90px), two arcs `rgba(255,255,255,.10)` 2px stroke-free filled circles Ø 700 and Ø 460 at band left (clipped by band), photo F1/F2/F3 4:3 at 720×540, radius 36, top offset 40px, overlapping the band edge by 260px (photo half on band, half on white).
- **Must not be diluted**: band is saturated green (not pale sage, not panel grey), the single 90px corner is clearly visible, arcs visible (10% white, not 3%), photo really overlaps the band edge (≥ 200px on the band, ≥ 200px off it), sides alternate.

### Continuation to inner pages (required)
Inner-page head = **T1 mini**: H1 (Cormorant Italic 600, gradient, `clamp(3rem, 5.06vw, 5.06rem)`) left, starting at the container left, crossing the 36px gutter onto a **pair of interlocking tiles** at the right (tall tile 4:5 radius 54 at cols 8–12, small tile 1:1 radius 36 at cols 6–8 offset 120px down, gutter 36px). Tiles `sp-parallax` with opposite `--sp-par` (8% / −6%).
| Page | T1 mini head (tiles) | T2 header | T3 band (photo) |
|---|---|---|---|
| About | F2 + A2 | active nav underline | "Why Mondays" band, F3 |
| The Day | K4 + K2 | — | "After the day" band, F1 |
| Programmes | K1 + A1 | **tab of each programme row is active** (6px underline) | one T3 row per programme: P1, P2, P3 (alternating) |
| Term & Fees | A2 + K4 | Next-term pill active | "How to start" band, N1 |
| Faculty | M1 + X3 | — | "Who we hire" band, F1 |
| Alumni | X4 + A1 | — | "Where they went" band, F2 |
| For Restaurants | X2 + K3 | — | "Team day" band, P1 |
| Journal (index/archive) | X1 + K4 | — | — (cards radius 36) |
| Visit & Contact | N1 + K1 | — | "Sit in" band, F2 |
| Single post / 404 / search | no tiles: H1 gradient italic only + dot label | yes | — |
T1 mini + T2 on all 9 inner pages, T3 on 8 of them (≥ 4 required).

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
daiichisemi.net opens with a short plain line ("(ref tagline)"), then fills the screen with big rounded photographs of real learners and a teacher: a girl smiling at her desk, a boy concentrating as he writes, a teacher leaning in. Across the faces runs a giant slanted orange gradient headline "(ref slogan)" ("with Daiichi, you can") that bridges the gap between the photographs. Story: **one teacher beside one learner, close-up and real; you can do it here.** Motion: the photo columns slide slowly in opposite vertical directions (Splide loop) and continue drifting with scroll (parallax); a search bar slides in from the left at the bottom; a white floating header with coloured course tabs sits on top.

### (2) Our translation (same composition, same motion idea, same image type)
Same scene type in our industry: **the long oak table at Budou on a Monday morning**, documentary photographs close-up: an instructor pouring a taste for two students (the main tall tile = the row's signature photo), a student with the glass at her nose, the instructor's hands decanting beside a notebook, the row of twelve glasses. The headline bridges the photographs exactly like the ref: "Taste it. Name it." (zh-TW(ZH tagline), ja(JA tagline), fr « Goûtez. Nommez. », de „Probieren. Benennen.“). Story: **people who already pour wine every night learn, one Monday at a time, beside a teacher, to say why it tastes like that.** Motion: the two photo columns drift in opposite directions (sp-parallax +10% / −8%); the "next term" bar wipes in from the left at the bottom; floating white header with three programme tabs on top. Intro animation of the ref (8s opening line) is **not** reproduced.

### (3) KV checklist (all six must be implemented and visible in the first screen at 1440×900)
| # | Ref element | Our match | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Large top-left tile: girl smiling at desk (r 54) | Student (South Asian woman, 30s) with the glass at her nose, eyes half closed, window light | left column top, x 0–49%, y −60px → 59% of hero (top bleeds under the header) | `sp-parallax --sp-par:10%` (drift up) | **K2** |
| 2 | Tall right tile: boy writing (r 54, bleeds right) | Instructor (woman, 50s) pouring a taste into glasses for two students at the long oak table | right column, x 51.25%–100%, y 166px → 166+700px, bleeds right edge, corners r 54 | `sp-parallax --sp-par:-8%` (opposite) | **K1** (main) |
| 3 | Lower-left tile: teacher's face, cut by the viewport | Instructor's hands decanting red wine, notebook beside, cut by the hero bottom | left column, top at 59% + 36px, height 600px (cut by hero bottom) | with #1 (`--sp-par:10%`) | **K3** |
| 4 | Sliver of next tile above the tall tile | Row of twelve tasting glasses with small pours on oak (only its bottom ~130px shows) | right column, top −470px → 130px | with #2 (`--sp-par:-8%`) | **K4** |
| 5 | Giant slanted gradient headline crossing the seam | "Taste it. Name it." Cormorant Garamond Italic 600, gradient `#4A6358→#82997A`, one line | left 19%, baseline 56% of hero, crosses the gutter at 49% | none (hero: no reveal); the headline is visible on first paint | — (type) |
| 6 | Floating white pill header with 3 coloured tab underlines + 3 CTA tiles; bottom search bar sliding in | T2 header (programme tabs, CTA tiles); bottom "Next term" bar: `Next term · Mon 11 January 2027` · `Mondays 09:30–16:30` · `12 seats` · dark button "See the day ►" | header top inset 54px; bar bottom-centre, 692×62, bottom 18px, radius 9px | bar: `clip-path inset(0 100% 0 0)→inset(0)` + translateX(−24px→0), 0.4s `cubic-bezier(.25,1,.5,1)`, delay 0.3s, on load only, motion mode only (final state in `?sp-static` / reduced-motion / no-JS) | — (UI) |
K1–K4 are in the image list (§7) and are home-only in the hero.

---

## 3. Colour (ref relationships kept; hue moved from orange to vine green; neutrals exact)

**Why the hue changes**: the ref's orange→yellow is a children's cram-school signal; a sommelier school for working adults must read quiet and grown-up, the row requires a quiet palette and (ref term) `#4A6358`, and the brand is about grapes/vines. We keep **every role, the lightness ladder (deep→light gradient), the share ratio and the exact neutrals**; only the saturated hue moves.

| Role | Ref token (a) | Ours | Use | Share (page / first screen) |
|---|---|---|---|---|
| Ink | `#333333` | **`#333333`** (exact) | body, headings in black, dark primary button | text / button |
| Base | `#FFFFFF` | **`#FFFFFF`** (exact) | page ground, header pill | ≈ 60% |
| Panel | `#F3EEE6` | **`#F3EEE6`** (exact) | day panel (r 45), stories ground, grey header pill, secondary buttons | ≈ 10% |
| Main gradient (type) | `#F86F0E → #FFD649` | **`#4A6358 → #82997A`** | hero H1, display H2, About statement lines | ≈ 4% / 4% |
| Band gradient | `#F09E2C → #FFD649` (to top), band `#FFA20F`/`#F9BA39` | **`#4A6358 → #5E7A6C`** (to top right) | T3 bands, close band | ≈ 22% / 0% |
| Wash (About ground) | pale orange→yellow wash | **`#E9EFE9 → #F7F9F5`** (to bottom right) | About section ground | ≈ 6% |
| CTA tiles | `#F6A700` `#EF7C00` `#E85D27` | **`#5B7568` `#4A6358` `#6E2A3A`** | 3 header tiles | ≈ 2% / 2% |
| Tab underlines | `#F6A700` `#EF7C00` `#13884D` | **`#7E968A` `#4A6358` `#6E2A3A`** | 3 programme tabs, programme accents | < 1% |
| Accent | `#13884D` (<1%) | **`#6E2A3A`** wine | Advanced tab, Prospectus tile, dot labels on white | < 2% |
| Muted text | — | `#6B6B6B` | captions, meta | — |

- Contrast: white on `#4A6358` 6.5:1, on `#5E7A6C` 4.7:1 (band text OK across the gradient); white on `#6E2A3A` 10:1; `#333` on `#F3EEE6` 11:1.
- First screen saturated share: photos high-key + muted green (HSV S ≈ 0.25) → expected ≤ 6%; gate 15%; ref 9.9%.
- Not cream-led: white is the ground; `#F3EEE6` only in panels. Distinct from recent mains (Kaname `#4A4036`, Ayumi olive `#5F6348`, Isso grey, Hakari mint/red): ours is a blue-leaning green with a wine accent.

## 4. Type

| Use | Latin | zh-TW / ja | Size / weight / line-height | Source |
|---|---|---|---|---|
| Hero H1 | **Cormorant Garamond Italic 600** | Noto Serif TC / Noto Serif JP 700 + `transform: skewX(-8deg)` (ref slants JA type) | `clamp(3.25rem, 9.6vw, 9rem)` (138px at 1440; CJK 0.75× → `clamp(2.6rem, 7.2vw, 6.75rem)`), lh 1.0, ls −0.01em | ref (b) hero ≈ 12rem glyph, italic slant |
| Display H2 (About, The Day, Programmes, Faculty) | Cormorant Garamond Italic 600, gradient | Noto Serif 700 skew −8° gradient | **5.06rem (81px)** = preset `xx-large`, lh 1.15 (ref 1.875 is for one-line JA; Latin needs tighter) | ref (b) H2 81px/500 |
| Statement lines (About left) | Cormorant Italic 600, gradient | Noto Serif 700 skew | `x-large` **2.6rem**, lh 1.35 | ref s2 (≈ 42px) |
| Band H3 (white) | Cormorant Garamond 700 (upright) | Noto Serif 700 | `large` **2.06rem (33px)**, lh 1.3 | ref (b) band H2 33px/700 |
| Sub-heading | Cormorant Garamond 700 | Noto Serif 600 | **1.69rem (27px)**, lh 1.4 | ref (b) 27px/700 |
| Body | **Source Sans 3 400** | Noto Serif TC / JP 400 | **1rem**, lh **1.875**, ls 0.01em (ref 0.9rem: +1.6px for Latin legibility; CJK 0.95rem, lh 1.875) | ref (b) 14.4/1.875 |
| Labels, nav, buttons | Source Sans 3 600 | Noto Serif 600 | 0.9rem (nav 14.4px ref), labels 0.875rem; **no uppercase** (ref has none) | ref (b) nav 14.4/500 |
- Stacks: `--wp--preset--font-family--display: "Cormorant Garamond", "Noto Serif TC", "Noto Serif JP", Georgia, serif;` `--…--body: "Source Sans 3", "Noto Serif TC", "Noto Serif JP", system-ui, sans-serif;` `:lang(zh-TW)` puts Noto Serif TC first for both, `:lang(ja)` Noto Serif JP first. CJK never uses a sans (no sans mixing).
- All faces loaded through **theme.json `fontFamilies` + `fontFace`** (woff2 in `assets/fonts/`: Cormorant Garamond 600, 600 italic, 700; Source Sans 3 400, 600; Noto Serif TC 400/700 subset; Noto Serif JP 400/700 subset — use the Hokuto/Hada subset method, not the broken script). Copy `shared/inc/editor-lang.php` → `inc/editor-lang.php` + `require_once` (style.css uses `:lang(`). Editor and front must show the same faces (check-editor-fonts.mjs).
- Font-size presets: small 0.875, base 1, medium 1.25, large 2.06, x-large 2.6, xx-large **5.06 (≥ 4.25 ✓)**; hero uses its own clamp. fr/de `hyphens: auto`. CJK headings ≈ 0.75× Latin.

## 5. Spacing, radius, decoration, header (ref tokens c, d, f)

### 5.1 Layout
Container **1260px** (`contentSize` 1044px for text, `wideSize` 1260px). Section padding **108px** top/bottom (ref flow), panel sections **90px** inside (ref grade); About padding-bottom **157px**. Two-column text split 50/50 at the container centre. Feature-row gap **128px**. Mobile gutters 20px, section padding 72px.

### 5.2 Radius / border / shadow
Hero tiles **54px** (mobile 32px); feature photos **36px** (mobile 24px); panel **45px** (mobile 28px); header pill bottom **24px**; primary button **9px** (dark `#333`, height 63px, padding 0 27px, white text, "►" 0.7rem after the label, hover `#4A6358`); secondary button **5.4px** (`#F3EEE6`, ink). No borders except 1px `#E6E6E6` table rules and tab dividers. Header shadow `0 4px 20px rgba(0,0,0,.08)`.

### 5.3 Decoration
- **Dot label**: Ø 8px dot `#6E2A3A` on white / `#FFFFFF` on bands, gap 10px, Source Sans 3 600 0.875rem, e.g. "● About", "● What makes Budou 01" (ref "● About", "features 01").
- **Arcs** in T3 bands: two filled circles `rgba(255,255,255,.10)` Ø 700 (left −220px, top 60px) and Ø 460 (left 140px, top 300px), clipped by the band (`overflow: clip`). CSS pseudo-elements only.
- Back-to-top: white circle Ø 44, shadow as header, chevron, fixed bottom-right 28px (ref).
- No hashtags, no wordmark band, no tilted photos, no dashed lines, no numbered circle cards.

### 5.4 Header (T2) geometry
Desktop ≥ 1024: wrapper `position:absolute; top:0; left:54px; right:54px; z-index:20` (scrolls away with the page; inner pages identical), white, bottom radius 24px, shadow. Row 1 height **90px**: wordmark "Budou Academy" Cormorant 700 1.6rem + two-line descriptor Source Sans 3 0.72rem `#6B6B6B` ("Sommelier school / for people in service") at left 28px; nav (About · The Day · Programmes · Term & Fees · Faculty · Visit; 0.9rem/500, gap 22px); grey pill `#F3EEE6` r 6px, 36px high ("◷ Next term · 11 Jan"); three CTA tiles **90×90** flush top-right (no gap between tiles, the last one at the pill's right edge minus 0 — the bar's right 90px is the tile area; no hamburger at desktop), white line icon 24px + label 0.72rem two lines, centred. Row 2 height **48px**: three equal tabs, 1px `#EEEEEE` dividers, label 0.95rem/600 ink centred, **3px underline** across the full tab width in its colour; active tab underline 6px. Tabs are three links in a Group (programme switcher to `/programmes/#certificate|#diploma|#advanced`), not a second Navigation block.
Below 1024: pill inset 12px, 64px high, wordmark + one CTA tile "Sit in" 64×64 `#5B7568` + Navigation block overlay toggle; the tab row moves into the overlay menu. Only one Navigation block in the header.

---

## 6. Home page

### 6.1 First screen (1440×900) — composition
Hero `front-hero` = `alignfull`, height `min(100svh, 940px)`, min 760px, `overflow: clip`, ground white. Grid exactly as KV §2: left column 48.75% (0–702px), gutter 36px (2.5%), right column 48.75% (738–1440). Left: K2 tile y −60 → 535 (r 54 on all corners; top corners hidden under the viewport top), K3 tile y 571 → 1171 (cut by the hero bottom). Right: K4 tile y −470 → 130, K1 tile y 166 → 866. Each tile = Group `sp-parallax` (r 54, overflow clip) with a direct `figure > img` (object-fit cover). H1 absolutely positioned **inside the hero grid, outside the tiles** (z above tiles), left 19%, top 47%, one line. Header (T2) on top. Term bar bottom-centre (left 26%, width 692px, height 62px, bottom 18px, white, r 9px, shadow as header): cell 1 `#F3EEE6` 150px "◷ Next term", cells 2–3 text 0.9rem ink, cell 4 dark button `#333` "See the day ►".
No table, form or search on the first screen; no buttons in the main colour except the header tiles; no text blocks besides H1 and the term bar.

**Mobile 390×844**: header pill (76px incl. inset). Stack (all in normal flow, **no absolute positioning, no vertical text**): K1 full width minus 12px each side, 1:1, r 32, `sp-parallax --sp-par:6%`; H1 two lines ("Taste it. / Name it."), `margin-top: -0.55em` so the first line overlaps the photo's bottom edge only (no text under it), padding-inline 20px; then K2 and K3 side by side 1:1 r 24, gap 12px (parallax 6% / −6%); then the term bar as a stacked card (3 lines + full-width dark button). K4 hidden on mobile.

### 6.2 Block order
| # | Pattern | Purpose | Layout and photos | Copy |
|---|---|---|---|---|
| 1 | `front-hero` | KV, promise | T1 + T2 + term bar (§6.1). **K1 K2 K3 K4** | H1 + 16 words in bar |
| 2 | `front-about` | why the school exists (ref "mission / About") | Wash ground. Two small rounded photos at the top edge: **A1** 4:5, 288px wide, r 36, at x 8% top 0 (half above the section start, overlapping block 1's bottom by 0 — keep inside the section); **A2** 3:2, 420px wide, r 36, at right x 63%, top −40px. Each a `sp-parallax` Group (`--sp-par: 12%`). Display H2 "Why we teach on Mondays" (gradient italic 5.06rem) at x 198px (text column start), dot label "● About" under it. Then two columns 50/50: left three statement lines (gradient italic 2.6rem): "You pour it every night." / "You can taste the difference." / "At Budou, you learn to say why."; right 2 paragraphs + dark button "About the school ►" → /about/. | 2 × 50 words |
| 3 | `front-day` | **the shape of a day** (page_structure day-schedule) | Panel `#F3EEE6`, r 45, inset to 1260 container, padding 90. Dot label "● The day" + display H2 "A Monday at Budou". Then a **horizontal time rail** across the full panel width: 1px `#333` line at 50% opacity; 7 stops evenly spaced (Ø 12px dots on the line, the 13:00 dot `#6E2A3A`, others `#4A6358`); above each dot the time in Cormorant 600 2.06rem gradient; below: title (Source Sans 3 600 1rem) + one line (0.9rem `#6B6B6B`). Stops = §9 day. Under the rail: one paragraph (60 words) + secondary button "The full day ►" → /the-day/. `sp-stagger` on the stops (each `sp-reveal sp-reveal--up`). | 7 stops + 60 words |
| 4 | `front-features` | what makes it different (ref features 01–03) | **T3 ×3**: 01 band left / photo right **F1** "Taught by people still on the floor"; 02 band right / photo left **F2** "Twelve seats at one long table"; 03 band left / photo right **F3** "A staff lunch you have to pair". Each: dot label "● What makes Budou 0n" white, H3 white 2.06rem, 2 paragraphs white (≈ 55 words), text link white "Read more ►". Band height = photo height + 120px; band width 64% of the viewport. Photos `sp-parallax --sp-par: 6%`. Text column `sp-reveal sp-reveal--up`. | 3 × 55 words |
| 5 | `front-programmes` | the term: three programmes | White. Dot label "● Programmes", display H2 "Three ways through the year". 3 cards in a row (gap 36px), each: photo 4:3 r 36 (**P1, P2, P3**), a **3px top rule** in its tab colour (`#7E968A`, `#4A6358`, `#6E2A3A`) above the title, title Cormorant 700 1.69rem, line "12 Mondays · from 11 Jan 2027 · €1,480" (Source Sans 3 600), 2 lines of description, text link "The programme ►". `sp-stagger` + `sp-reveal--up` per card. Mobile: stacked. | 3 × 35 words |
| 6 | `front-fees` | term & fees (price list) | White, container 1260. Left-aligned H2 "Term & fees" (Cormorant italic 600 2.6rem, gradient) + one line. **Full-width price table** (7 rows, §9) — no reveal. Columns: Programme (name 600 + one-line note) / Length / Price. Price column `white-space: nowrap; text-align: right`, Cormorant 700 1.6rem, `min-width: 9ch`. Rows 1px `#E6E6E6`. Under it: next intakes line + secondary button "Term dates and how to pay ►". | 7 rows + 30 words |
| 7 | `front-faculty` | who teaches | White. Two columns 5/12 + 7/12: left **M1** 3:4 r 36 (`sp-parallax --sp-par: 8%`); right dot label "● Faculty", display H2 "Who teaches" (5.06rem), one paragraph (50 words), then a **two-column name list** (not a portrait grid): 6 names, each name Cormorant 700 1.4rem + role line 0.9rem + one sentence. `sp-stagger` on the list items. Button "Meet the faculty ►". | 50 + 6 × 15 words |
| 8 | `front-alumni` | 3 short stories | Panel `#F3EEE6` full-bleed band (square corners, no photos). Dot label "● Alumni", H2 2.6rem. 3 text columns: big open quote mark Cormorant 4rem `#82997A`, 45-word story, name + "then / now" line ("Waiter → head of wine, bistro, Lyon"). `sp-stagger` + `sp-reveal--up`. | 3 × 45 words |
| 9 | `front-visit` | sit in / visit (close) | **T3 mirrored** band (from the right, top-left corner 90px), photo **N1** 4:3 left overlapping. Dot label "● Visit", H3 white "Sit in on a Monday", 1 paragraph (40 words: €95, credited), address + hours lines, white button (`#FFFFFF` ground, ink text, r 9) "Book a sit-in day ►" → /visit/. | 60 words |
Home photo positions: **14** (K1 K2 K3 K4 · A1 A2 · F1 F2 F3 · P1 P2 P3 · M1 · N1), no image twice. English home ≥ 250 words; narrative paragraphs in blocks 2, 3, 4 and 7 (≥ 3). CJK home ≥ 500 characters.

### 6.3 Comparison with recent themes (block order and signature)
| # | Kaname Watches | Ayumi Podiatry | Isso Relocation | Hakari Course | **Budou Academy** |
|---|---|---|---|---|---|
| 1 | framed two-pane window | 2×2 halves + geometric pieces | split head photo/gradient + giant wordmark | full-bleed photo r 88 bottom + hashtags | **interlocking 54px tile collage, slanted gradient H1 across seam, floating pill header + tabs** |
| 2 | 4 square tiles | listening square photo + glows | "( 01 )" concept | white rounded course panel | **About on wash, two small floating photos, gradient statement lines** |
| 3 | centred narrow list | full-bleed parallax room | Saturday photo trio | 3 tilted "why" rows | **horizontal Monday time rail on r 45 panel** |
| 4 | parallax tray band | rotated photo wall | 5-phase text row | syllabus panel + sticky photo | **3 saturated bands with 90px corner + arcs, photo overlapping edge** |
| 5 | 5 product cards | complaint marquee | 61-hour rail | instructor (rotated photo) | **3 programme cards with coloured top rules** |
| 6 | alt rows choose | 3 stacked method cards | one-move story | parallax practice band | **full-width fees table** |
| 7 | two in full | one outcome | price table | 3 rotated story cards | **faculty: tall photo + 2-col name list** |
| 8 | bench + prices | … | crew | cohort dates | **alumni text quotes on panel** |
| 9 | visit split | CTA band | FAQ / quote | fee, FAQ, close echo | **mirrored band "Sit in"** |
Why not alike: no rotated/tilted photos (Ayumi, Hakari), no hashtags/stickers/fixed side tabs (Hakari), no "( 01 )" numbering, wordmark or vertical lines (Isso), no framed window or square tiles (Kaname). Hakari is also education: we have no rounded white panel over a wash, no syllabus/sticky photo, no FAQ; the hero is a **multi-tile collage** (Hakari: one full-bleed photo), the header is **one inset pill with tabs and solid tiles** (Hakari: two chips), and the order leads with the day before the term (row structure "day → term → who teaches"). Isso has an hours rail too: ours is inside a rounded warm panel with gradient serif times and dots, theirs a bare ink line on white; Isso is not an education theme.

---

## 7. Photos (18, Grok, one at a time, Read every one)

STYLE (exact string, every prompt; `IMAGE_STYLE="<STYLE>" scripts/grok-image.sh out.webp "<subject>"`):
`documentary photograph, high-key, bright soft window light, shallow depth of field, 35mm lens, close and candid, warm natural skin tones, light oak table, clear stemmed wine glasses, white and pale sage-green walls, muted palette of sage green, oak, white linen and deep wine red, diverse adult students and instructors in plain dark aprons or simple service clothes, clean modern international city setting, calm focused moment, no text, no readable labels on bottles, no logos, no brand marks, no signage, no Japanese elements`

No cutouts. ≤ 300 KB, ≤ 2000px, webp. readme line per image (AI-generated, CC0). Reject: text/labels on bottles, broken hands around stems, warped glasses, dark/moody grade.
| ID | Subject / composition | Aspect | Used (each at most once per page) |
|---|---|---|---|
| **K1** ★ | Instructor (woman, 50s, grey hair tied back, dark apron) pours a small taste into two glasses held by two students (young Black man in a server's waistcoat, East Asian woman, 30s) at a long oak table by a tall window; bottle unlabelled; faces visible, gentle smiles | 4:5 | Home hero tall tile; Programmes head; Visit head |
| **K2** ★ | Student (South Asian woman, 30s) holds a glass of white wine at her nose, eyes half closed, window light from the left, close crop face + glass | 4:3 | Home hero tile 1; The Day head; Journal post 1 |
| **K3** ★ | Instructor's hands decanting red wine from an unlabelled bottle into a clear decanter, open notebook beside, close crop | 4:3 | Home hero tile 3; For Restaurants head |
| **K4** ★ | Row of twelve tasting glasses with small pours (whites to reds) on the oak table, morning light, low angle | 3:2 | Home hero sliver; The Day head; Term & Fees head; Journal head |
| **A1** ★ | Hands of a server carrying a tray of six filled glasses, motion, apron, close crop | 4:5 | Home About left; Programmes head; Alumni head |
| **A2** ★ | Hands writing tasting notes in a plain notebook beside a glass of red, pencil, top-down 45° | 3:2 | Home About right; About head; Term & Fees head; Journal post 2 |
| **F1** ★ | Instructor (man, 40s, Latino) shows four students how to hold and present a bottle at a service station, students watching | 4:3 | Home band 01; The Day band; Faculty band |
| **F2** ★ | Wide view of the long oak table set for twelve, students arriving, coats on chairs, tall windows | 4:3 | Home band 02; About head; Alumni band; Visit band; Journal post 5 |
| **F3** ★ | Staff lunch at the long table: simple bistro plates, bread, glasses, a chef in whites setting down a dish, laughter | 4:3 | Home band 03; About band; Journal post 4 |
| **P1** ★ | Student opening a sparkling wine with a white napkin over the cork, focused, service practice | 4:3 | Home programme card 1; Programmes row 1; For Restaurants band |
| **P2** ★ | Small cellar room, racks of unlabelled bottles, student with a clipboard counting stock, warm-white light | 4:3 | Home programme card 2; Programmes row 2 |
| **P3** ★ | Blind tasting: six glasses in opaque black sleeves, numbered by position only (no digits printed), hands of two tasters | 4:3 | Home programme card 3; Programmes row 3; Journal post 3 |
| **M1** ★ | Founder (woman, 50s, as K1) at the end of the table listening to a student, half-profile, portrait | 3:4 | Home faculty; About body; Faculty head |
| **N1** ★ | The school room seen from the door: tall windows, oak table, empty glasses, early light, nobody | 4:3 | Home visit band; Term & Fees band; Visit head; Journal post 6 |
| X1 | Wednesday evening tasting: small group standing at a light bar counter tasting, daylight still in windows | 3:2 | Journal head |
| X2 | Restaurant team (5, mixed ages) in an empty dining room before service, instructor teaching at a table | 3:2 | For Restaurants head |
| X3 | Instructor (man, 60s, German, beard) pouring one glass at a service station, looking at the pour | 4:5 | Faculty head |
| X4 | Former student, now sommelier, presenting an unlabelled bottle to two diners at a restaurant table | 4:5 | Alumni head |
★ = used on the home page (14). Generate K1, K2, K3, K4 first, read them, then the rest.

## 8. Inner pages (9 + templates; each: T1 mini head → body → T3 band (where listed) → close line with dark button)
1. **About** (`page-about`): head "A school for people already on the floor" (F2 + A2). Founded 2014 in Bordeaux by Hélène Marchetti after 18 years as a head sommelier; why Mondays; why one long table; what we do not do (no exam promises). M1 in body (5/12). T3 band "Why Mondays" (F3). ≈ 400 words.
2. **The Day** (`page-the-day`, page_structure core): head "A Monday at Budou" (K4 + K2). The full horizontal rail (same as home, larger: each stop gets a 3-line paragraph under it, rail scrolls horizontally on < 782 with snap; stops in the scroller have no `sp-reveal`, the scroller itself has `sp-reveal--up`). Then "What to bring" (3 short paragraphs: notebook, black clothes optional, no perfume). T3 band "After the day" (F1): notes sent Tuesday, 20 min of homework, Wednesday evening tastings.
3. **Programmes** (`page-programmes`, anchors `#certificate #diploma #advanced`): head (K1 + A1). Three T3 rows (P1 band left, P2 band right, P3 band left), the active header tab per row is visually the programme colour; each row: length, Mondays, start dates, what you can do at the end (no guarantees), price, link to Term & Fees.
4. **Term & Fees** (`page-term-fees`): head (A2 + K4). Full price table (§9, 7 rows, same rules as home). Intakes table (3 rows: January / April / September with first Monday) — stacked on mobile. How to start as **paragraphs** (not a step grid): sit in → 20-minute talk → €300 deposit → first Monday. Payment: Diploma in two instalments. T3 band "How to start" (N1).
5. **Faculty** (`page-faculty`): head "Who teaches" (M1 + X3). 7 people (§9) as alternating text rows (name, role, 80-word bio) — no portrait grid; only M1/X3 photos. T3 band "Who we hire" (F1): everyone still works service at least one night a week.
6. **Alumni** (`page-alumni`): head (X4 + A1). Three stories in full (150 words each, then/now line). T3 band "Where they went" (F2). No claims of job placement rates.
7. **For Restaurants** (`page-for-restaurants`): head (X2 + K3). Team day (€1,200, up to 8 staff, at your venue, 10:00–16:00 on a Monday), what we cover, how to book. T3 band "Team day" (P1).
8. **Journal** (`home.html`, `archive.html`, `single.html`): head "Notes from the table" (X1 + K4). 6 posts (images K2, A2, P3, F3, F2, N1 in order). Cards: image 3:2 r 36, dot label category, Cormorant 1.69rem title, date. Single: dot label + gradient italic H1 3.2rem, featured image r 36, 720px text column.
9. **Visit & Contact** (`page-visit`): head "Sit in on a Monday" (N1 + K1). Address, hours, how to get there (tram B, "Chartrons" stop, 4 minutes on foot), sit-in day €95 (credited), open evening date, email. T3 band "Sit in" (F2). No form needed (mailto button).
10. **404 / search**: dot label + gradient H1 + dark button home.
Programmes, Term & Fees and home quote the same numbers (§9) in all five languages.

## 9. Fixed numbers and names (identical everywhere)
- **Budou Academy**, founded **2014**, **6 cour des Tonneliers, 33000 Bordeaux, France** (fictional address). hello@budou-academy.example, +33 5 56 00 14 14 (fictional).
- **Hours**: classes **Mondays 09:30–16:30**; Wednesday evening tastings **19:00–21:00**; office **Tue–Fri 10:00–18:00**. **12 seats** per class.
- **Intakes**: January, April, September. **Next term: Monday 11 January 2027**; then Monday 12 April 2027, Monday 13 September 2027. **Open evening: Wednesday 2 December 2026, 19:00.**
- **Fees (EUR, same figures in every language; wines, Monday lunch and notes included)**:
| # | Item | Length | Price |
|---|---|---|---|
| 1 | Service Floor Certificate | 12 Mondays | **€1,480** |
| 2 | Cellar & Trade Diploma | 24 Mondays (two terms) | **€2,950** |
| 3 | Advanced Tasting | 10 Mondays | **€1,650** |
| 4 | Sit-in Monday (lunch included, credited against any course) | 1 Monday | **€95** |
| 5 | Wednesday evening tasting | 2 hours | **€45** |
| 6 | Team day at your restaurant (up to 8 staff) | 1 day | **€1,200** |
| 7 | Exam re-sit | 1 morning | **€180** |
Deposit **€300**; Diploma payable in two instalments.
- **The day (7 stops)**: 09:30 Coffee & palate warm-up · 10:00 Flight one: six wines blind · 11:30 The map: region, grape, law · 13:00 Staff lunch: pair it, defend it · 14:15 Service practice: open, decant, pour twelve even glasses · 15:30 The list: cost it, price it, write it · 16:30 Notes home.
- **Faculty (7)**: Hélène Marchetti (founder, director of studies, tasting); Tomás Ferreira (service floor lead); Amara Okonkwo (cellar, wine lists and costing); Lukas Brenner (German and Austrian wines, exam coach); Naoko Fujii (regions and viticulture); Priya Raman (food pairing, runs the Monday lunch with guest chefs); Samuel Adeyemi (admissions and student office, not teaching). Home list shows the first six.
- **Alumni stories (3)**: Inès Laurent — waiter → head of wine at a neighbourhood bistro, Lyon (Certificate 2021); Marco Bellini — bartender → runs the wine list of a hotel bar, Turin (Diploma 2022); Grace Mensah — restaurant manager → trains her own floor team, Bordeaux (Certificate 2019 + team days).
- No guarantees, no pass-rate or placement figures, no awards, no real wine brands or real people.

## 10. Scroll effects (sp-scroll, from stage-a "scroll candidates"; max 3 kinds per page)
| Effect | sp class | Where | Ref source & timing | Our values |
|---|---|---|---|---|
| Fade-up | `sp-reveal sp-reveal--up` (+ `sp-stagger` on rows) | Home blocks 2 (columns), 3 (rail stops), 4 (text columns), 5 (cards), 7 (name list), 8 (stories), 9 (text); inner-page body sections | daiichisemi `.u-fadeup`: translateY 45px→0, opacity 0→1, 0.4s, `cubic-bezier(.25,1,.5,1)`, on viewport enter | `--sp-dist: 30px` (cap), `--sp-dur: .4s`, easing `cubic-bezier(.25,1,.5,1)` set on `.sp-reveal` in theme CSS; stagger 0.12s (default) |
| Parallax | `sp-parallax` (§11) | hero tiles, About small photos, band photos, faculty photo, inner head tiles | daiichisemi `.js-img` continuous translateY, linear | `--sp-par` 6–12% / negative for opposite drift |
| Load wipe (not sp) | theme CSS keyframes on `.ba-termbar` | hero term bar only | ref search bar slides in from −346px, ≈ 0.4s | clip-path wipe + 24px, §2 #6; gated by `html.sp-js:not(.sp-no-motion)` + `prefers-reduced-motion: no-preference` |
Not on: hero (no reveal), price/intake tables, footer, legal text. No scroll listeners, no libraries.

## 11. Parallax (required)
- **Primary: home hero** `front-hero`: four tiles, each tile Group `sp-parallax` with direct `figure > img`; left column K2/K3 `--sp-par: 10%` (≈ ±60px at 600px tile height), right column K4/K1 `--sp-par: -8%` — columns drift in **opposite** directions = ref's vertical Splide sliders + `.js-img` parallax (≈ −300…−500px over 900px scroll in the ref; ours is smaller to stay calm). Foreground: H1 and term bar sit on the hero, **not** inside any moving layer.
- Secondary: home About A1/A2 `--sp-par: 12%` (ref About scattered photos), band photos F1–F3 and N1 `--sp-par: 6%` (ref feature photos ≈ 144px), faculty M1 8%.
- Mobile: kept; hero K1 6%, K2/K3 6% / −6%; bands 5%.
- reduced-motion, `?sp-static`, no-JS, editor: no movement (built into sp-scroll). Must pass `check-parallax.mjs` (≥ 6px desktop and mobile; 0 with reduced motion).

## 12. Responsive rules
- **390px first screen**: no vertical text, no absolutely positioned labels over text, H1 in flow (§6.1); no horizontal overflow (the 54px tiles become 12px-inset tiles).
- Header < 1024: single pill, overlay menu, tabs inside overlay.
- **Price table ≥ 782px**: full container width (1260 / 100%), not inside a narrow column; price column `white-space: nowrap; text-align: right`, never clipped at 800 and 1280. Every table (fees, intakes) **< 782px becomes stacked**: each row a block, item name first, then length, then price on its own line.
- T3 bands < 782px: band full width with 0 radius except the 90px corner reduced to 48px; photo moves above the band, full width minus 20px, r 24, overlapping the band top by 48px; arcs scaled 0.6.
- Day rail < 782px: horizontal scroll-snap row (stop width 220px), gradient fade at the right edge, no reveal on stops.
- Programme cards and feature columns stack < 782; the faculty name list becomes one column.

## 13. Similarity to the reference (target ≈ 80%)
| Dimension | Reference value (token) | Budou value |
|---|---|---|
| Ink / base / panel | `#333333` / `#FFFFFF` / `#F3EEE6` (a) | identical |
| Saturated main | orange→yellow gradient, type + bands (a) | vine green gradient `#4A6358→#82997A` (type) / `#4A6358→#5E7A6C` (bands) — same roles and ladder, hue moved (§3) |
| Tiles / tabs colours | 3 graduated tiles, 3 tab lines incl. one green (a) | 3 graduated tiles, 3 tab lines incl. one wine |
| Share | 60 base : 25 bands : 10 photos : 5 tabs; first screen sat 9.9% (a) | 60 : 22 : 12 : 6; first screen ≤ 6% (gate 15%) |
| Hero composition | 3 tiles + sliver, 702 / 36 / 702, r 54, right bleeds (e) | identical geometry |
| Hero headline | ≈ 12rem, slanted, gradient, crosses seam (b) | 9rem Cormorant Italic, gradient, crosses seam (CJK skew −8°) |
| Display H2 | 81px/500 gradient (b) | 81px (5.06rem) italic 600 gradient |
| Band H3 / sub | 33px/700, 27px/700 (b) | 2.06rem/700, 1.69rem/700 |
| Body | 14.4px / 1.875 (b) | 16px / 1.875 (CJK 15.2px / 1.875) |
| Container / column / padding | 1260 / 1044 / 90–108, about bottom 157.5, row gap 125–130 (c) | 1260 / 1044 / 90–108, 157, 128 |
| Radius | tiles 54, photos 36, panel 45, buttons 9 / 5.4, header ≈ 24 (d) | identical |
| Shadow | header 0 4px 20px rgba(0,0,0,.08) (d) | identical |
| Image treatment | documentary high-key photos, 1:1 / 3:4 / 4:3 / 4:5 / 3:2, no mask (e) | same type, same ratios, no mask |
| Overlap positions | band photo 40px below band top, crosses band edge; About photos scattered at top (e) | 40px, 260px over the edge; A1/A2 at the About top |
| Decoration | dot labels 8px, arcs Ø ≈ 700, one 90px band corner, dark ► button, Ø 44 back-to-top (f) | identical shapes; dot wine/white, arcs white 10% |
| Motion | fade-up 45px 0.4s cubic-bezier(.25,1,.5,1); parallax photos; opposite column drift; search bar slide-in (g) | fade-up 30px 0.4s same curve; sp-parallax; opposite `--sp-par`; term bar wipe-in |
| Header | floating pill inset 54, tabs 3px lines, 90×90 tiles (d)(g) | identical |
Own: all photos (Grok), copy, wordmark, icons. No ref asset, text or logo.

## 14. Home acceptance checklist (stage-1 review)
1. First screen 1440: 4 rounded tiles r 54 filling the screen (two left, tall right bleeding, sliver top-right), 36px gutters; H1 "Taste it. Name it." gradient italic ≥ 8rem crossing the gutter; floating white pill header inset 54px with 3 coloured tab lines and 3 solid 90×90 tiles; term bar bottom-centre. KV items 1–6 all visible.
2. No table/form/search/large saturated field on the first screen; `check-first-screen.py` ≤ 15%.
3. Block order exactly §6.2; 14 photo positions, none repeated; no rotated photos, step grid, portrait grid, vertical timeline.
4. About: wash ground, two small rounded photos, 81px gradient H2 + dot label, gradient statement lines left, text right.
5. Day rail horizontal with 7 stops and the times of §9; on mobile horizontal scroller.
6. Three T3 bands: saturated green, 90px corner, visible arcs, 4:3 photo r 36 overlapping the band edge, alternating sides.
7. Fees table full width at 800 and 1280, prices nowrap right, figures = §9; stacked on 390.
8. Colours = §3 (ink `#333`, white, panel `#F3EEE6`, green gradients, wine accent < 2%); fonts Cormorant Garamond + Source Sans 3, CJK Noto Serif TC/JP, same in editor.
9. Motion: hero has no reveal; `check-parallax.mjs` passes (hero opposite drift ≥ 6px desktop + mobile; reduced-motion 0); ≥ 3 fade-ups hidden before entering; nothing left transparent at the bottom.
10. 390px: no overflow, no overlapping text, no vertical labels; header pill 12px inset.
11. English home ≥ 250 words, ≥ 3 narrative paragraphs; `auto-gates.mjs … en … 1 1` pass.
