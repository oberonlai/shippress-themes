# Mame Coffee: design spec (stage 1, binding for implementation)

Slug `mame-coffee`, small specialty coffee roastery with a coffee bar. Row b15-4: type **hospitality** (WooCommerce compatible but not required; the site must work fully without it), archetype split-screen / hero framed-window / nav top-bar, `page_structure: people-story`, `font_direction: serif`, `photo_direction: film-grain`.
Reference (one site): **AFURI BREWING** https://afuribrewing.com/ (S5-Style https://www.s5-style.com/12018/, 飲料･食品･メーカー). Measurements: `brand/reference-tokens.md` (cited below as tokens (a)–(g)); screenshots `brand/ref/afuri-first.png`, `afuri-s1/s2/s3/s5/s7.png`, `scroll-hero-before/after.png`.
Borrow structure, technique, key-visual concept, proportions and motion. Never copy AFURI photos, copy, label art, logo or mountain glyph.

Fixed brand facts (all pages, all five languages): **Mame Coffee**, founded **2019** by **Ines Duarte** (head roaster) and **Tomas Varga** (green buyer). Roastery and bar at **Branderijstraat 12, 9000 Ghent, Belgium** (fictional street). One 5 kg drum roaster. Currency **EUR** everywhere (en/zh-TW/ja write `€17`, fr/de write `17 €`; the amount never changes).

---

## 1. Signature techniques (three, obvious at a glance)

### T1. Framed window on a full-bleed backdrop, wordmark crossing its lower-left corner (AFURI hero, `afuri-first.png`)
- Reference: a full-bleed backdrop photograph (sky + mountain ridge, dark band in the bottom ~30%) fills the first screen. In the centre floats a **sharp, square-cornered photo window 982×640 at (229,130)** = 68.2% of the width, 71% of the height, aspect 1.53:1, no border, no shadow. The wordmark **AFURI BREWING, ~86px caps, white**, starts at x=50 and crosses the window's lower-left edge (its cap height straddles the window bottom). A small lede sits upper-left at ~35% height and runs **over** the window's left edge; a "SCROLL DOWN" cue with a 2px line sits bottom-right. Tokens (c), (e), (f).
- Mame Coffee home: `front-hero` (block 1), see "Key visual concept" for the scene. Geometry at 1440×900: section height `100vh` (min 760px); frame `width: 68.2%`, `aspect-ratio: 982/640`, `top: 130px`, horizontally centred; wordmark left 50px, font-size `5.375rem` (86px, token (b)), its vertical centre on the frame's bottom edge (frame bottom at 770px → text box 724–816px).
- Inner pages: every page head is a smaller T1 (section 4): backdrop photo band, frame `width: 56%` aspect 1.53, top 120px, offset right (`margin-left: 30%`), page title Newsreader `4.25rem` caps crossing the frame's lower-left corner from x=50.
- Must not be diluted: the frame must be **visibly smaller than the backdrop with backdrop showing on all four sides** (≥ 120px left/right at 1440), **radius 0, no border, no shadow**, and the wordmark must **overlap the frame edge** (not sit below it). The backdrop is a photograph, never a flat colour or gradient.

### T2. 3px top-rule columns with a broken end, title + 24px round outline arrow, portrait panel with chip and rating bars (AFURI product row, `afuri-s1.png`, `afuri-s3.png`)
- Reference: 4-column grid in a 1340px container (x = 50 / 396 / 742 / 1088, column 302px, gap 44px). Each column opens with a **3px `#1D1D1D` rule**; the rule has a **small break near its right end** (main segment, 4px gap, short end segment ≈ 24px). 16px under the rule: title (26px/30px, weight 700, Latin in caps) left and a **24px circle with 1px `#C8C8C8` outline and a small filled ▸** right. One or two short lines (12–13px, weight 700), then a **302×390 portrait panel on `#E8E8E8`** with a white **chip** (12px bold, 8px padding, inset 12px top-left). Under the panel: **three rating groups of 5 small blocks** (filled `#1D1D1D`, empty `#D3D3D3`), a 1px `#C8C8C8` hairline, 14px/27px description, price line and a closing hairline. Wide variant: one card spans two columns (648×390 image) next to a narrow card (`afuri-s3.png`). Tokens (c), (d), (f).
- Mame Coffee home: `front-lots` (block 3, four lots, bags on `#E8E8E8`, rating = Sweetness / Acidity / Body), `front-people` (block 5, wide + narrow), `front-stories` (block 7, wide + two narrow).
- Must not be diluted: the rule stays **3px and near-black** (not 1px, not grey) with the **visible break near the right end**; the arrow is an **outline circle 24px** (not a filled button, not text "→"); panels are **radius 0** on `#E8E8E8`; the chip is white with dark text; rating blocks are square-ish (6×12px) and black, not stars or dots.

### T3. Rotated side label + wide photo with a ruled text column + hairline rows (AFURI about / story blocks, `afuri-s3.png`, `afuri-s5.png`, `afuri-s2.png`)
- Reference: (a) a **vertical label rotated 90°**, caps, ~13px, `#C8C8C8`, "ABOUT | AFURI BREWING", at x=50 in the left column while content starts at column 2; (b) a **wide photo spanning columns 1–3 (994×628)** with, in column 4, a **3px rule (no break)**, short stacked lines 14px/27px bold, and a 1px `#C8C8C8` hairline aligned with the photo bottom; (c) 1px `#C8C8C8` hairlines separate every spec / text row. Tokens (b), (c), (f).
- Mame Coffee home: `front-pour` (block 4, (b)), `front-people` (side label (a) + schedule hairline rows (c)), `front-bar` (side label + hairline price rows), `front-visit` (hairline info rows).
- Must not be diluted: the side label is **rotated (writing-mode: vertical-rl)**, grey `#C8C8C8`, **in its own left column** (content starts at x=396) on desktop; the wide photo takes **three of four columns** and the text column is **narrow (302px) with the 3px rule on top**; hairlines are 1px `#C8C8C8`, never dashed, never darker.
- Mobile (<960px): the rotated label becomes a normal horizontal line `PEOPLE | WHO ROASTS` (13px caps, `#8E8E8E`) above the section, in flow. **No vertical text and no absolutely positioned labels on mobile.**

### Continuation to inner pages (≥4 required; this spec carries all three to every listed page)
| Page | T1 page head (backdrop / frame) | T2 rule columns | T3 side label + ruled column + hairlines |
|---|---|---|---|
| About | 03 origin / 17 cup | — | yes: label `ABOUT | SINCE 2019`, wide 14 trip + ruled column, story rows |
| Lots | 01 hall / 15 cooling | yes: the four lots (04–07), full cards with bars | yes: "Past lots" hairline rows |
| Bar menu | 12 bar / 08 pour | yes: rule header row above the price list, Lena card (16) | yes: label `BAR | WED–SUN`, hairline price rows |
| Roastery | 01 hall / 09 roastroom | yes: four phases as rule columns (text only, no images except 13, 15) | yes: wide 02 drop + ruled column |
| Origins | 03 origin / 14 trip | yes: four producers, bag images 04–07 | yes: hairline spec rows (altitude, process, harvest) |
| People | 09 roastroom / 10 ines | yes: wide 14 trip (Tomas) + narrow 16 lena, then text rows | yes: label `PEOPLE | SEVEN OF US`, hairline rows for the other five |
| Cupping & classes | 12 bar / 11 cupping | yes: two class cards | yes: hairline price rows |
| Wholesale | 12 bar / 17 cup | — | yes: wide 04 bag … ruled column, terms rows |
| Journal (index/archive) | 01 hall / 11 cupping | yes: 4 posts as rule cards (wide + narrow) | — |
| Visit | 01 hall / 12 bar | — | yes: label `VISIT | GHENT`, hours/address hairline rows, card 16 |
| Single post | — (featured image as 1.53 frame on `#26211E` band, title crossing it) | — | hairline under meta |

---

## Key visual concept

### (1) Reference first screen: concept, story, signature motion
- **Draws**: a bright blue sky over a forested mountain ridge (full-bleed backdrop, dark green band in the bottom ~30%); floating in the centre, a sharp framed photograph of the product (a can on blue water) with the **finished drink, a blurred glass of beer, in the right third**; the brand name huge across the frame's lower-left corner; a short lede at the upper left with the key phrase underlined; "SCROLL DOWN" bottom right.
- **Story**: "beer made honestly at the foot of one mountain" — the place first (mountain), then the product (can) and the result (glass) in one picture.
- **Signature motion**: as you scroll, window and backdrop zoom (+15–17% per 200px, window rising ≈50px) until the backdrop **fills the screen** and the lede is replaced by a second statement over the mountain (`scroll-hero-after.png`).

### (2) Our transfer: same composition, same motion idea, same image type (photo)
- **Place first**: the backdrop is the Mame roastery hall at first light, photographed wide: tall steel-framed windows and hazy morning light fill the **upper ~65%** (our "sky"), the drum roaster, green-coffee sacks and the floor read as a **dark warm band in the bottom ~30%** (our "ridge"). Out of focus, film grain, muted.
- **Product + result in one framed photo**: in the centre frame, a sharp photograph of **Ines, the head roaster, watching roasted beans pour from the drum door into the round cooling tray** (left two thirds, beans in motion), with a **blurred glass pour-over carafe of the finished coffee in the right third** — the can-and-glass pairing becomes beans-and-carafe (process + result).
- **Story line** (lede): "Few lots, chosen at the farm. **Roasted this morning**, poured within weeks." — then the wordmark MAME COFFEE.
- **Motion**: the hero is an `sp-parallax` Cover: the hall backdrop (scale 1.18) drifts slower than the frame while scrolling (`--sp-par: 10%` desktop, 6% mobile) — the "backdrop moves around a still window" half of AFURI's zoom-through. The second half, "backdrop fills the screen with a new statement", is block 2 `front-statement`: a full-bleed photograph of the origin farm slope at dawn (our mountain), also `sp-parallax` (8%), with the underlined second statement upper-left. Scrolling hero → statement therefore reads like AFURI's before → after.

### (3) KV checklist (each item built on the first screen and visible at 1440×900 and, where stated, 390×844)
| # | 參考站元素 | 我們的對應 | 位置 | 動態 | 用哪張圖 |
|---|---|---|---|---|---|
| 1 | Full-bleed sky + mountain backdrop, dark ridge band at bottom | Full-bleed film-grain photo of the roastery hall: hazy bright windows top, dark drum/sacks band bottom 30%; overlay `#26211E` at 25% | whole hero, behind everything | `sp-parallax` on the Cover background, `--sp-par: 10%` (mobile 6%); no reveal | **01 hall** |
| 2 | Sharp 982×640 window photo, centred, 68% width, top 130px | Sharp frame: roaster watching beans drop from the drum into the cooling tray | centred, 68.2% width, top 130px (mobile: in flow, full width minus 40px, 1:1 crop at `object-position: 38% 50%`) | static (backdrop moves around it) | **02 drop** |
| 3 | Blurred beer glass in the right third of the window (product → result) | Blurred glass pour-over carafe of brewed coffee in the right third of the same photo | inside frame, right third | none (part of the photograph) | **02 drop** |
| 4 | 86px white caps wordmark crossing the window's lower-left edge + small native-script name under it | "MAME COFFEE" Newsreader 500, 5.375rem, white, caps, crossing the frame bottom-left; under it "Roastery & coffee bar · Ghent" Nunito Sans 600 1.375rem white | x=50, centred on the frame's bottom edge (mobile: in flow under the frame, `margin-top: -0.5em`, 2.6rem) | none | — (type) |
| 5 | Lede upper-left at ~35% height, key phrase underlined, overlapping the window's left edge | Newsreader 400 1.5rem/1.25 white, two lines: "Few lots, chosen at the farm. / <u>Roasted this morning</u>, poured within weeks." underline 1px white, `text-underline-offset: 6px` | x=50, top 36% (y≈320), max-width 380px so it runs over the frame's left edge (mobile: in flow above the frame) | none (no reveal in hero) | — (type over 01/02) |
| 6 | "SCROLL DOWN" + 2px line with a break, bottom-right | "Scroll down" Nunito Sans 600 1.0625rem white + 2px white line 146px with a 4px break and 14px end segment above it (same motif as T2 rule) + 14px circled ▾ | right 50px, bottom 52px (hidden < 960px) | none | — |

All three photos (01, 02, 03) are in the image list (section 6). Block 2 (03 origin) is the after-state and appears right below the fold.

---

## 2. Colour (tokens (a); relationships kept, sky blue replaced)

| Role | Ref hex (token) | Mame hex | Source / reason | Use | Share |
|---|---|---|---|---|---|
| Base | `#FFFFFF` (a) | `#FFFFFF` | exact | page ground below the hero | ~70% of a page |
| Text / rule | `#1D1D1D` (a) | `#1D1D1D` | exact | headings, body, 3px rules, rating blocks | ~8% |
| Panel | `#E8E8E8` (a) | `#E8E8E8` | exact | T2 image panels, chip-free grounds, journal fallback | ~10% |
| Hairline / side label | `#C8C8C8` (d) | `#C8C8C8` | exact | 1px hairlines, arrow circle outline, rotated labels | <1% |
| Rating empty | (f) grey block | `#D3D3D3` | measured from s1 | empty rating blocks | <0.5% |
| Main | `#00A0E9` sky, 41% of first screen (a) | **`#3F3834` 黒橡** | **swapped**: row palette is binding and a saturated sky blue has no place in a dim, film-grain roastery; same role (the colour that floods the first screen) is now taken by the warm-dark hall photograph, and `#3F3834` is the UI main (header on inner pages after scroll, footer text links, buttons) | buttons, focus, active nav underline, inner-head overlay tint | ≤4% as UI |
| Secondary | `#002020` dark ridge, 7% (a) | **`#26211E`** deep roast | same role and lightness (L≈13%) moved from green-black to brown-black to match the hall photo's dark band | hero overlay (25%), inner-page head overlay (40%), footer ground, single-post head band | footer only as a field |
| Muted text | — | `#6E6862` | derived from main +25% L | captions, meta, mobile section labels use `#8E8E8E` | — |
| Accent | none (a) | `#B8793E` copper | added only because the bags need one warm signal; chip dot 6px and the "Roasted this morning" underline **on light grounds only**; never on hero | <0.5% |

- No beige/cream grounds: white is the page; `#E8E8E8` only in panels, exactly as AFURI.
- First-screen saturated share: reference 45% (token (a)); row quality_gate cap 30%; common gate 15%. **This spec sets the gate at 15% and the target at ≤10%**: photos 01/02 graded muted (STYLE string), overlay `#26211E` 25%, no coloured UI on the hero, accent absent from the first screen.
- Contrast: `#1D1D1D` on white 16.9:1; white on `#3F3834` 11.6:1; `#6E6862` on white 5.6:1. White hero text over photo 01 relies on the 25% overlay plus a darker left quarter in photo 02 (subject's dark apron and the drum face).

theme-meta.json labels (App list only): `type: hospitality`; `colors.tags: ["dark", "warm", "brown", "neutral"]`; `style: ["photographic", "documentary", "editorial", "minimal"]`.

---

## 3. Type (font_direction **serif**)

- Latin display / headings / wordmark / prices: **Newsreader** (400, 500, 400 italic; opsz axis if the variable file is used).
- Latin body / nav / labels / chips / rating labels: **Nunito Sans** (400, 600, 700). (The reference is all-sans; the row asks for a serif heading voice, so the reference's 700 sans titles become Newsreader 500 caps at the same 26px size.)
- zh-TW: **Noto Serif TC** (明體) for headings **and** body; ja: **Noto Serif JP** (明體) for headings **and** body. No Noto Sans / 黑體 anywhere in CJK.
- Stacks (theme.json `fontFamilies`, all loaded by `fontFace` with local woff2, including the zh-TW and ja subsets made with the Hokuto/Hada method; editor and front end identical; copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it because style.css uses `:lang()`):
  - `heading`: `"Newsreader", "Noto Serif TC", "Noto Serif JP", Georgia, serif`
  - `body`: `"Nunito Sans", "Noto Serif TC", "Noto Serif JP", system-ui, sans-serif`
  - `:lang(zh-TW)` body and headings: `"Noto Serif TC", "Newsreader", serif`; `:lang(ja)`: `"Noto Serif JP", "Newsreader", serif`. CJK sizes ≈ 0.75× the English heading size, body line-height 1.85; fr/de `hyphens: auto`.

| Preset (slug) | Size | Use | Ref token (b) |
|---|---|---|---|
| small | 0.8125rem (13px) | chips (700, 0.75rem), side labels (caps, ls 0.12em), card sub-lines (700) | 12–13px |
| base | 0.9375rem (15px) / lh 1.8 (27px) | body; card descriptions 0.875rem/27px | 12–14px / 27px |
| medium | 1.0625rem (17px) | nav (Nunito 600), label lines "LOTS | ON THE BAR", scroll cue | 17px |
| large | 1.625rem (26px) / lh 1.15 | T2 titles (Newsreader 500, Latin caps, ls 0.01em), section titles | 26/30 700 |
| x-large | 2.25rem (36px) / lh 1.25 | statement block (block 2), visit statement | 36/45 |
| xx-large | 4.25rem (68px) / lh 1 | inner page titles crossing the frame (mobile `clamp(2.4rem, 9vw, 4.25rem)`) | — |
| huge | `clamp(2.6rem, 6vw, 5.375rem)` (86px max) / lh 0.95 | hero wordmark only | 86px |
Max size 5.375rem ≥ 4.25rem ✓. Lede = 1.5rem/1.25 Newsreader 400 (ref 24/30). Prices Newsreader 500 1.25rem `font-variant-numeric: tabular-nums`.

Header (top-bar, one menu only): height 116px (logo centre y=58 as ref). Left: a 30×18px outline coffee-bean glyph (1.5px white stroke, our own SVG) + visually hidden site title. Right: nav **LOTS ⁝ BAR ⁝ PEOPLE ⁝ ROASTERY ⁝ VISIT** Nunito Sans 600 1.0625rem, caps, separated by a 1px dotted vertical rule 14px tall with 10px gaps (ref separators); far right a language switcher `EN` in the same style. On the front page the header is absolutely over the hero, white; on inner pages it is over the inner T1 head, white. Not sticky. < 960px: glyph left, "Menu" text button right, full-screen white overlay menu with Newsreader 1.625rem items separated by hairlines.

Footer: `#26211E` ground, white text; 4-column grid (x=50…): col 1 wordmark "MAME COFFEE" Newsreader 2.25rem caps; col 2 address + phone; col 3 bar hours + roasting days; col 4 nav list; a 3px white rule with the T2 break at the top of each column. Bottom line 13px `#C8C8C8`: "© 2026 Mame Coffee · Ghent".

---

## 4. Home page

### First screen (1440×900)
See Key visual concept (3). Stack inside one `core/cover` (`sp-parallax`, background 01 hall, overlay `#26211E` dimRatio 25, `min-height: 100vh`): header, lede (KV 5), frame image 02 (KV 2/3), wordmark + sub-line (KV 4), scroll cue (KV 6). Desktop ≥960px may position lede, wordmark and cue with grid/absolute; **< 960px everything is in normal flow** in this order: header → lede (1.25rem, 2 lines) → frame (1:1) → wordmark (2.6rem, overlapping the frame bottom by negative margin, not absolute) → sub-line. Forbidden on the first screen: table, form, search box, buttons, giant centred text, vertical text.

### Block order
Grid: container 1340px, page gutter 50px (mobile 20px), 4 columns 302px, gap 44px (token (c)); section top padding 140px (token (c) 120–160).
| # | Pattern | Purpose | Layout and photos | Copy (en) |
|---|---|---|---|---|
| 1 | `front-hero` | KV: place → process → result | T1 as above; photos **01** (backdrop), **02** (frame) | lede 14 words + sub-line 5 |
| 2 | `front-statement` | AFURI after-state: origin + second statement | full-bleed `core/cover` `sp-parallax` (`--sp-par: 8%`), photo **03 origin**, overlay `#26211E` 20%, `min-height: 88vh`; upper-left at x=50 / y=60px: Newsreader 2.25rem/1.25 white, three lines with the first two key phrases underlined: "<u>Buy few lots.</u> <u>Know who grew them.</u> / Roast them on Monday, Tuesday and Thursday, / and pour them before they fade." Right middle: small caps "MAME COFFEE · GHENT" 0.8125rem white (ref "AFURI BREWING" label). Under the statement, a 380px Nunito paragraph (white, 0.9375rem/1.8). | 30 + **paragraph 1, 60 words** (we buy six green lots a year, four on the bar at a time) |
| 3 | `front-lots` | the coffee: what the current lots taste like | label line "LOTS | ON THE BAR NOW" (1.0625rem caps, 48px above the cards) then **T2 × 4**: photos **04, 05, 06, 07** (bags) at 302×390 on `#E8E8E8`, chips "NEW LOT" / "ON THE BAR" / "LAST WEEKS" / "SATURDAY CUPPING"; rating bars Sweetness · Acidity · Body (values in section 7); description 2–3 lines; price "€17 / 200 g". Below the row, right-aligned text link with 24px arrow circle: "All lots and past lots". `sp-stagger` on the row, `sp-reveal sp-reveal--up` on each card. | 4 × 30 words |
| 4 | `front-pour` | how a cup is poured | **T3 (b)**: photo **08 pour** at cols 1–3 (994×628), `sp-reveal sp-reveal--wipe` (clip on the inner `img` wrapper, see section 8); col 4: 3px rule, title "HOW A CUP IS POURED" 1.625rem, then 3 stanzas of short bold lines 0.875rem/27px 700 (15 g / 250 g / 93 °C / 40 s bloom / three pours / done at 3:00), closing hairline aligned with the photo bottom; arrow link "The bar menu". | **paragraph 2: 3 stanzas ≈ 70 words** |
| 5 | `front-people` | who roasts that morning (people-story) | **T3 (a)** rotated label `PEOPLE | WHO ROASTS` at x=50; **T2 wide + narrow** at cols 2–4: wide card (cols 2–3) title "ON BY 6:30, / THREE MORNINGS A WEEK" + arrow, line "ROASTERY | 5 KG DRUM", photo **09 roastroom** 648×390; narrow card (col 4) title "INES DUARTE" + arrow, line "HEAD ROASTER · CO-FOUNDER", photo **10 ines** 302×390. Under both, at cols 2–4, **T3 (c)** schedule as 4 hairline rows (list, not table): `Mon 6:30 · Ines Duarte · Kiamara, Alto Rocío` / `Tue 6:30 · Amara Okoye · Hara Bura, El Mirador` / `Thu 6:30 · Tomas Varga · whichever lot runs low` / `Thu 11:00 · Mei Lin Ho cups every roast of the week`. `sp-stagger` on the two cards. | **paragraph 3, 70 words** under the wide card |
| 6 | `front-bar` | at the bar: price list | rotated label `BAR | WED–SUN 8:00–16:00` at x=50 beside the header row only; a T2 rule (with the break) and header row span the **full container**: title "AT THE BAR" left + arrow, one line right "Filter is always the current lot." Then the **price list full width (1340px)**: 7 rows, grid `minmax(0,2fr) minmax(0,3fr) max-content`, name Newsreader 1.25rem, note 0.875rem `#6E6862`, price Newsreader 1.25rem right-aligned `white-space: nowrap`; 1px `#C8C8C8` hairline between rows, 18px row padding. No reveal (price list). No photo in this block. | 7 rows + 25 words |
| 7 | `front-stories` | stories (people-story) | **T2 wide + 2 narrow** across cols 1–4: wide (cols 1–2) photo **14 trip** 648×390, narrow photo **13 green** 302×390, narrow photo **15 cooling** 302×390; each: rule, title (journal title, caps) + arrow, line "JOURNAL | <month year>", photo, 2-line excerpt. With posts: Query Loop of the 3 newest posts (stories 1–3) in this markup. `sp-stagger` + `sp-reveal--up`. | 3 × 25 words |
| 8 | `front-visit` | visit | contained photo **12 bar** at 1340×640 inside the 50px gutters (AFURI `afuri-s7.png` contained-mountain block), underlined white statement upper-left at 60px/60px inside the photo: "<u>Sit at the bar</u> / <u>while the roaster cools.</u>" Newsreader 2.25rem; below the photo, T3 (c) hairline rows in 4 columns: Address · Bar hours · Roasting days · Contact, then arrow link "Plan a visit". | 40 words |
| — | footer | | `#26211E` as in section 3 | |

English home ≥ 250 words with three narrative paragraphs (blocks 2, 4, 5). CJK home ≥ 500 characters. Home photo positions: **14** (01, 02, 03, 04, 05, 06, 07, 08, 09, 10, 14, 13, 15, 12) — no image twice.

### Comparison with recent themes
| # | Kyugo Training | Nemuri Clinic | Satei Adjusters | Niuke Scan | **Mame Coffee** |
|---|---|---|---|---|---|
| 1 | stage-width hero | framed hero + info bar | hero (kneeling adjuster) | hero KV + facts | **framed window floating on full-bleed backdrop, wordmark crossing it** |
| 2 | notes/dates | centred statement | why (hairline opener) | message | **full-bleed origin photo with underlined statement (parallax)** |
| 3 | about + stacked cards | symptoms rows | calls strip | pinned 3-stop stage | **4 rule-topped product columns with chips and rating bars** |
| 4 | hall | sticky-media method + dome | sticky split | ellipse product rows | **wide photo (3/4) + narrow ruled stanza column** |
| 5 | courses/fees | parallax room band | adjusters | blue spec band | **rotated side label + wide/narrow people cards + schedule rows** |
| 6 | stat band | people | cases rows | pricing | **full-width hairline bar menu** |
| 7 | instructors | stories (dome) | fees table | parallax dock + stories | **wide + 2 narrow story columns** |
| 8 | stories / steps / footer | fees / marquee / visit | FAQ / CTA | FAQ / CTA | **contained photo with statement + 4 info columns** |
Why not alike: no sticky split, no dome, no side rails (the rotated label is a 13px grey word inside one section, not a fixed rail), no pinned stops, no ellipse rows, no stat band, no FAQ, no marquee, no step grid. Mame's hero is the only one with a floating square window and a wordmark crossing it; its product row (3px broken rule, round outline arrow, grey panel with chip, block rating bars) has no counterpart in the four. Nemuri's "framed hero" is a photo framed by page margin with an info bar; Mame's frame floats over a second full-bleed photograph with backdrop visible on all sides.

---

## 5. Inner pages (10 + journal single, each reachable from menu or footer)

Each page = T1 head (backdrop photo full-bleed, overlay `#26211E` 40%, frame 56% width aspect 1.53 at top 120px offset right, title Newsreader 4.25rem caps white crossing the frame's lower-left corner from x=50, one-line intro under it 1.0625rem white) → body on white using the 4-column grid → close row (3px rule, one line, arrow link). Head height ≈ 760px desktop; mobile: header → frame (4:3, full width minus 40px) → title (2.4rem, negative margin) → intro, all in flow.
1. **About** (`page-about`, head 03 / 17): T3 label `ABOUT | SINCE 2019`; wide **14 trip** + ruled column ("Why so few lots"); three narrative sections in hairline-separated rows at cols 2–4: Founded 2019 by Ines and Tomas after years roasting for others; Why four lots at a time; Why we pour within 28 days. Close → People.
2. **Lots** (`page-lots`, head 01 / 15): the four lots as full T2 cards (04–07) with all fields (producer, region, process, altitude, harvest, ratings, tasting notes, €/200 g, "roasted Mon/Tue"); then "Past lots" as T3 hairline rows (6 rows: 2025–2026 lots, name · country · process · months on bar); then **11 cupping** wide with ruled column "Taste them before you buy: Saturday cupping". Without WooCommerce, "Buy at the bar or ask for a bag by email" text; if WooCommerce is active the four lots may become simple products at the same prices.
3. **Bar menu** (`page-bar`, head 12 / 08): side label `BAR | WED–SUN 8:00–16:00`; full-width price list (7 items, section 7) + a second full-width list "Beans to take home" (4 lots, €/200 g); narrow T2 card **16 lena** "LENA BRANDT, HEAD BARISTA". Prices identical to home.
4. **Roastery** (`page-roastery`, head 01 / 09): wide **02 drop** + ruled column "One drum, 5 kg"; then four phases as T2 rule columns, text only except two panels: Green arrives (13 green), Sample roast & cupping, Production roast Mon/Tue/Thu, Rest day 5 → bar day 28 (15 cooling). Paragraphs, not a step grid with numbers/icons.
5. **Origins** (`page-origins`, head 03 / 14): four producers as T2 cards with bag panels 04–07 (the lot's bag) and hairline spec rows (country, region, altitude, process, harvest, price we pay per kg is **not** stated — no claims); one narrative section "How Tomas chooses a lot".
6. **People** (`page-people`, head 09 / 10): label `PEOPLE | SEVEN OF US`; T2 wide **14 trip** (Tomas Varga, green buyer) + narrow **16 lena** (Lena Brandt); then hairline rows for the other five (name Newsreader 1.25rem · role · days · one sentence): Ines Duarte, Amara Okoye, Mei Lin Ho, Rafael Souza, Joost de Wit. Not a portrait grid.
7. **Cupping & classes** (`page-cupping`, head 12 / 11): two T2 cards (text + panel): Saturday cupping (photo **08 pour** wide card) and Home brew class (narrow card, panel `#E8E8E8` with text only); hairline price rows: Cupping €12, 8 seats, Sat 10:00–11:00; Home brew class €45, 6 seats, first Sunday 14:00–16:00; booking by email (no form needed).
8. **Wholesale** (`page-wholesale`, head 12 / 17): wide **04** bag panel + ruled column; terms as hairline rows: minimum 5 kg a month, roasted to order Mon/Tue/Thu, delivery in Ghent by bike Thursday, outside Ghent by courier, equipment advice by Rafael Souza and Joost de Wit; contact email.
9. **Journal** (`home.html` index, `archive.html`; head 01 / 11): 4 posts as T2 cards — first row wide (post 1, 14) + 2 narrow (posts 2, 3: 13, 15), second row narrow post 4 (17); single post: `#26211E` band with the featured image as a 1.53 frame and the title Newsreader 3rem crossing it, date only, text column 680px, hairline under meta.
10. **Visit** (`page-visit`, head 01 / 12): label `VISIT | GHENT`; hairline rows: address, bar hours, roasting days (bar open, roaster visible), cupping time, phone +32 9 000 12 34 (fictional), hello@mamecoffee.example; narrow T2 card **16 lena** "Ask for Lena at the bar"; text "Five minutes' walk from Gent-Dampoort station" (generic, no map embed needed).
11. **404 / search**: T1-style small head on `#26211E` (no photo), arrow link home.

---

## 6. Photos (17, photo, film grain; one at a time with `scripts/grok-image.sh`, Read each one)

IMAGERY: **photo** (reference is photo-led). STYLE (exact, every image):
`documentary film photograph, 35mm, visible fine film grain, Kodak Portra 400 look, soft morning window light, bright mid-to-high key exposure with clean highlights, muted desaturated palette of warm grey, charcoal, roasted brown, oat and pale steel, gentle natural contrast, small specialty coffee roastery and bar in a modern international European city, diverse adults, candid unposed moment, shallow depth of field, no text, no logos, no labels, no printed packaging, no signage lettering, no brand marks, no Japanese elements`

No cutouts. Each ≤300 KB, ≤2000px, webp; one readme line per image (AI-generated, CC0). Regenerate if any text, logo, broken hands, faces melted, saturated colour, or style drift.
| ID | Subject / composition | Ratio | Home? | Pages (max once per page) |
|---|---|---|---|---|
| 01 hall | roastery hall at first light, wide, tall steel-framed windows with hazy bright light filling the upper two thirds, drum roaster and stacked jute sacks as dark out-of-focus shapes along the bottom third, no people in focus | 16:10 | **yes** hero backdrop | Home 1; Lots head; Roastery head; Journal head; Visit head |
| 02 drop | woman in her 40s with a dark canvas apron at the left third, watching roasted beans pour from the drum door into a round perforated cooling tray, beans in motion; right third: a glass pour-over carafe of brewed coffee on the counter, strongly blurred | 1.53:1 | **yes** hero frame | Home 1; Roastery body |
| 03 origin | coffee farm slope at dawn, rows of coffee shrubs climbing a hill, mist in the valley, pale sky upper half, dark green-brown hillside lower part (muted) | 16:9 | **yes** block 2 | Home 2; About head; Origins head |
| 04 lot-kiamara | plain unprinted kraft-brown paper coffee bag standing upright, centred, small heap of roasted beans in front, plain light grey seamless background | 302:390 (≈3:4) | **yes** block 3 | Home 3; Lots; Origins; Wholesale |
| 05 lot-altorocio | same set-up, plain off-white matte bag | 302:390 | **yes** | Home 3; Lots; Origins |
| 06 lot-harabura | same set-up, plain charcoal matte bag | 302:390 | **yes** | Home 3; Lots; Origins |
| 07 lot-mirador | same set-up, plain muted sage-grey matte bag | 302:390 | **yes** | Home 3; Lots; Origins |
| 08 pour | close side view of a hand pouring from a gooseneck kettle into a pour-over cone on a glass server, steam, bar counter, window light | 994:628 (≈1.58:1) | **yes** block 4 | Home 4; Bar head frame; Cupping card |
| 09 roastroom | the roast room: a roaster checking a bean sample from the trier beside the drum, sacks behind | 648:390 (≈5:3) | **yes** block 5 | Home 5; Roastery head frame; People head backdrop |
| 10 ines | portrait of the head roaster (woman, 40s, Mediterranean, dark hair tied back, canvas apron) standing by the drum, half body, looking aside | 302:390 | **yes** block 5 | Home 5; People head frame |
| 11 cupping | cupping table from a slight high angle: rows of small bowls of coffee, spoons, three people bending to smell, window light | 4:3 | no | Lots body; Cupping head frame; Journal head frame |
| 12 bar | the coffee bar interior: long wooden counter, two guests seated, barista behind, big window, plants | 2:1 | **yes** block 8 | Home 8; Bar head; Cupping head; Wholesale head; Visit head frame |
| 13 green | hands sorting green coffee beans in a round sieve, close | 302:390 | **yes** block 7 | Home 7; Roastery phase; Journal post 2 |
| 14 trip | green buyer (man, 30s, Central European) and a producer (woman, 50s, East African) talking beside raised drying beds of coffee cherries | 648:390 | **yes** block 7 | Home 7; About; Origins head frame; People wide card; Journal post 1 |
| 15 cooling | macro of freshly roasted beans in the cooling tray, slight motion of the stirring arm | 302:390 | **yes** block 7 | Home 7; Lots head frame; Roastery phase; Journal post 3 |
| 16 lena | portrait of the head barista (woman, 30s, West African, short natural hair, linen apron) behind the bar, half body | 302:390 | no | Bar; People; Visit |
| 17 cup | a cup of filter coffee on a wooden table by the window, an open notebook beside it, morning light | 4:5 | no | About head frame; Wholesale head frame; Journal post 4 |

---

## 7. Fixed numbers (identical on home, inner pages, footer and all five languages)

- Founded **2019**, Ghent; founders Ines Duarte and Tomas Varga. One **5 kg** drum roaster.
- We buy **6 green lots a year**; **4 lots** on the bar at a time; each lot is poured from **day 5 to day 28** after roasting.
- Roasting: **Mon, Tue, Thu from 6:30**; Mei Lin Ho cups every roast **Thu 11:00**.
- Bar hours: **Wed–Sun 8:00–16:00**; Mon–Tue closed to guests (roasting only).
- Pour recipe: **15 g coffee, 250 g water at 93 °C, 40 s bloom, three pours, done at 3:00**.
- Lots (200 g bag price; rating = Sweetness / Acidity / Body, out of 5):
  | Lot | Origin | Process | Rating | Price |
  |---|---|---|---|---|
  | Kiamara | Nyeri, Kenya, 1,800 m | washed | 3 / 5 / 3 | €17 |
  | Alto Rocío | Huila, Colombia, 1,700 m | washed | 4 / 3 / 3 | €15 |
  | Hara Bura | Guji, Ethiopia, 2,000 m | natural | 5 / 3 / 2 | €16 |
  | El Mirador | Chalatenango, El Salvador, 1,600 m | honey | 4 / 2 / 4 | €18 |
  (producer names are fictional.)
- Bar menu (7): Filter, current lot €4.50 · Espresso €3.00 · Cortado €3.80 · Flat white €4.20 · Pour-over flight, two lots × 150 ml €8.00 · Cold brew (summer, current lot) €4.50 · Cardamom bun €3.50.
- Cupping **€12**, 8 seats, Saturday 10:00–11:00. Home brew class **€45**, 6 seats, first Sunday of the month 14:00–16:00.
- Wholesale minimum **5 kg** a month.
- People (7): **Ines Duarte** (head roaster, co-founder), **Tomas Varga** (green buyer, co-founder), **Amara Okoye** (roaster, Tuesdays), **Mei Lin Ho** (quality and cupping), **Lena Brandt** (head barista), **Rafael Souza** (barista, home brew class), **Joost de Wit** (wholesale and deliveries).
- Stories (4, journal posts): 1 "A week at Hara Bura" (14 trip) · 2 "Sorting by hand" (13 green) · 3 "Day 5 to day 28" (15 cooling) · 4 "Our first lot, 2019" (17 cup).
- Address Branderijstraat 12, 9000 Ghent, Belgium; +32 9 000 12 34; hello@mamecoffee.example (all fictional).
No awards, no "best", no media, no real brands or real people, no guaranteed effects.

---

## 8. Scroll effects (sp-scroll; 3 effects; hero has no reveal)

| Effect (class) | Where | Source (afuribrewing.com, token (g)) | Trigger / timing / easing |
|---|---|---|---|
| `sp-parallax` | **Block 1 hero Cover** (background 01, foreground lede/frame/wordmark never in the moving layer): `--sp-par: 10%` ≥960px, `6%` <960px (set via media query on the block class). **Block 2 statement Cover** (background 03): `--sp-par: 8%` (mobile 6%). | hero zoom-through: backdrop 1656→1938px (+17%) and window +15% per 200px scroll, window rising ≈50px; own scroll handler + rAF, linear follow | scroll-linked (CSS `animation-timeline: view()`, IO + translate3d fallback from sp-scroll.js); linear; layer scale 1.18 (sp default) gives the slight "zoomed" backdrop of the reference |
| `sp-stagger` + `sp-reveal sp-reveal--up` | Block 3 lot cards (4), block 5 people cards (2), block 7 story cards (3); inner: Lots, Origins, Journal card rows | AFURI 4-up card row (entrance not verified; header easing taken from token (g)) | IO enter, 0.8s, stagger 0.12s, `--sp-dist: 24px`; easing override `cubic-bezier(.165,.84,.44,1)` (AFURI header transform curve) |
| `sp-reveal sp-reveal--wipe` | Block 4 pour photo (clip on the child wrapper, never on the observed element); inner: Roastery wide 02 photo, About wide 14 photo | AFURI logotype slide / image fade (0.43s cubic-bezier(.77,0,.175,1)) | IO enter, 1.1s, `cubic-bezier(.77,0,.175,1)` (sp default = same curve) |
Not animated: hero, price lists, hairline schedule/info rows, footer, forms. Copy `pipeline/assets/sp-scroll/` unchanged to `assets/`; only CSS variables may change. Screenshots/gates use `?sp-static`; check `check-parallax.mjs` desktop + mobile (layer shift ≥6px, reduced-motion 0).

---

## 9. Responsive rules
- 390px first screen: no vertical text, no absolutely positioned labels over text; lede, frame, wordmark, sub-line stacked in flow; scroll cue and side labels hidden. No horizontal overflow at 390/1280 (`html, body { overflow-x: clip }`).
- 4-column grid → 2 columns at 782–1199px (wide cards span 2), 1 column < 782px; wide card images keep their ratio.
- Price lists (bar menu, beans, cupping, past lots): at **≥782px full container width**, price column `max-content`, `white-space: nowrap`, right-aligned, never cut (checked at 800 and 1280); **<782px stacked**: name + price on one flex row (price nowrap), note below. Any `<table>` (lot table on Origins if used) stacks on mobile (`display:block` rows with `data-label`).
- Inner T1 heads on mobile: frame 4:3 in flow, title with negative top margin over the frame bottom (not absolute), backdrop band remains behind and keeps parallax off (inner heads have no parallax).

## 10. Home acceptance checklist
1. First screen = KV checklist items 1–6 all visible at 1440×900: hall backdrop photo on all four sides of a sharp, radius-0 frame (68% width, top 130px); roaster + beans + blurred carafe inside; MAME COFFEE ≥5rem crossing the frame's lower-left edge; underlined lede upper-left overlapping the frame edge; scroll cue bottom-right. Saturated share ≤15% (`check-first-screen.py`).
2. Block 2 directly below: full-bleed origin photo with underlined statement; both block 1 and 2 pass `check-parallax.mjs` (≥6px desktop and mobile, 0 under reduced motion).
3. T2 visible in blocks 3, 5, 7: 3px near-black rule with a break near the right end, 24px outline circle arrow, `#E8E8E8` panels with white chips, black block rating bars in block 3.
4. T3 visible: rotated grey label in blocks 5 and 6 (desktop), wide 3/4 photo + 302px ruled column in block 4, 1px `#C8C8C8` hairline rows in blocks 5, 6, 8.
5. Block order exactly as section 4; 14 photo positions, none repeated; no team grid, step grid, timeline, stat band, FAQ, sticky split, dome, rails.
6. Colours: white ground, `#1D1D1D` text, `#E8E8E8` panels, `#26211E` overlay/footer, `#3F3834` UI; no beige/cream fields, no sky blue, accent only in chips/underline below the fold.
7. Type: Newsreader headings/wordmark, Nunito Sans body/nav; zh-TW/ja in Noto Serif TC/JP for headings and body, same in editor and front end.
8. Price list full width ≥782px with prices unclipped; stacked on 390px. Fixed numbers equal section 7.
9. English home ≥250 words, three narrative paragraphs (blocks 2, 4, 5).
10. Motion: only sp-parallax (1, 2), stagger+up (3, 5, 7), wipe (4); nothing hidden after scrolling to the bottom.

---

## 11. Similarity target (≈80%) — 相似度對照表
| 維度 | 參考站數值 (token) | 本主題數值 |
|---|---|---|
| Page ground / text / panel / hairline | `#FFFFFF` / `#1D1D1D` / `#E8E8E8` / `#C8C8C8` (a)(d) | identical |
| First-screen main colour | `#00A0E9` sky 41%, sat share 45% (a) | warm-dark hall photo + `#26211E` 25% overlay; sat share ≤10% (row 黒橡 binding, gate ≤15%) |
| Dark band | `#002020`, bottom ~30% (a) | `#26211E`, bottom ~30% of photo 01 |
| Hero frame | 982×640 at (229,130), 68%/71%, radius 0 (c)(e) | 68.2% width, aspect 982/640, top 130px, radius 0 |
| Backdrop scale | 1656×1078 on 1440×900 (e) | Cover layer scale 1.18 (sp-parallax) |
| Wordmark | ~86px caps white, bottom-left over frame edge (b) | 5.375rem Newsreader 500 caps white, x=50, centred on frame bottom |
| Lede | 24/30, 400, white, 1px underline (b) | 1.5rem/1.25 Newsreader 400 white, 1px underline offset 6px |
| Section statement | 36/45 400 white (b) | 2.25rem/1.25 Newsreader 400 white |
| Card title | 26/30 700 caps (b) | 1.625rem/1.15 Newsreader 500 caps |
| Nav / labels | 17px Helvetica Now Medium (b) | 1.0625rem Nunito Sans 600 caps |
| Body | 12–14px, lh 27px (b) | 0.875–0.9375rem, lh 27px |
| Side label | rotated 90°, ~13px, `#C8C8C8`, x=50 (b)(f) | vertical-rl, 0.8125rem caps ls .12em, `#C8C8C8`, x=50 (desktop) |
| Grid | gutter 50, container 1340, 4 cols 302, gap 44 (c) | identical (mobile gutter 20) |
| Section padding | 120–160px (c) | 140px |
| Top rule | 3px `#1D1D1D`, break near right end (c)(f) | 3px `#1D1D1D`, main segment, 4px gap, 24px end segment |
| Arrow | 24px circle, 1px `#C8C8C8` outline, ▸ (d)(f) | identical |
| Chip | white, 12px bold, 8px pad, inset 12px (f) | identical (0.75rem Nunito 700) |
| Rating bars | 5 blocks × 3 groups, black/grey, 12px tall (f) | 5 blocks × 3 groups (Sweetness/Acidity/Body), 6×12px, `#1D1D1D`/`#D3D3D3` |
| Radius / shadow | 0 / none (d) | 0 / none everywhere |
| Image ratios | window 1.53, product 302:390, feature 648:390, wide 994:628 (e) | identical (02, 04–07/10/13/15/16, 09/14, 08) |
| Imagery | photo, daylight, shallow focus, grey packshot ground (e) | photo, film grain, morning light, shallow focus, bags on light grey |
| Hero motion | zoom-through +15–17%/200px, linear, scroll-linked (g) | sp-parallax 10% (mobile 6%), scale 1.18, scroll-linked linear |
| Easing | .25s cubic-bezier(.165,.84,.44,1); .43s cubic-bezier(.77,0,.175,1) (g) | reveal 0.8s cubic-bezier(.165,.84,.44,1); wipe 1.1s cubic-bezier(.77,0,.175,1) |
| Scroll cue | "SCROLL DOWN" 17px + 2px line with break, bottom-right (f) | identical structure, "Scroll down", 146px line |
Photos and copy are our own; no AFURI images, text, label art or logo.
