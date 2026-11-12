# Gaku Frames: design spec (stage 1 spec, binding for implementation)

Slug `gaku-frames`, picture framing shop, type `store` (WooCommerce compatible, not required; no checkout needed). Row b28-4: archetype asymmetric-masonry, hero framed-window, nav centered, first screen three-equal-columns, page structure alternating-longform. Font direction **sans** (Outfit / Nunito Sans; CJK Noto Sans TC / Noto Sans JP, gothic). IMAGERY **photo** (low-key documentary, see section 6).

Reference (primary): Daisuke Matsumoto, https://daisukematsumoto.com/ (S5-Style, photographer portfolio). Secondary: Toshiyuki Hashimoto, https://toshiyukihashimoto.jp/ (S5-Style, creative portfolio). Measurements: `reference-tokens.md`, cited below as (a)…(g). Screens: `ref/dm-first.png`, `ref/th-first.png`, `ref/scroll-*.png`. We borrow structure, techniques, colour relationships, the key-visual concept and motion. We never copy their photographs, text, names, logos or a whole page layout.

Fixed brand facts (identical everywhere, in brand.md and all five languages; full list in section 7):
- **Gaku Frames**, opened **2011**, **27 Cooper's Yard, Halden** (fictional, international and neutral). A street-level shop with the bench visible from the counter.
- One-line idea: *a picture is finished by its frame, and we fit the frame to the wall it will hang on.*
- Currency **USD** in every language; no converted prices.

---

## 1. Signature techniques (three, each obvious at a glance)

### T1. Mitred frame window holding butted photo columns with one centred label (primary first screen `ref/dm-first.png` + row hero framed-window / three-equal-columns)
- **Reference**: the whole window is two tall black-and-white photographs side by side, edge to edge, no container, no gap, seam at x ≈ 698–827 (drifts). One white 24 px label (letter-spacing .04em) with a tiny arrow sits dead centre over the photos. Radius 0. (c)(e)(f)
- **Ours, home hero**: a walnut picture frame with **visible 45° mitre joints** holds **three equal photo columns butted together** (1 px `#1C1F23` line between them, no gap). One white 24 px Outfit label with an arrow is centred in the stage. The frame is the only "container"; the photographs still fill almost the whole first screen.
  - Frame: outer box x **20 → 1340** at 1440 (left gutter 20 px = (c) page gutter; the 100 px right column is kept for T2's vertical rule), y **80 → 872**. Border **32 px** solid with four different walnut shades so the browser draws the diagonal joints itself: top `#6B5F53`, left `#5E5348`, right `#544A40`, bottom `#4A4139`. Inside the border a **12 px mount** `#E8EBF0` with a 1 px inner bevel line `#C9CDD3` (`box-shadow: inset 0 0 0 1px #C9CDD3` on the photo row). Photo area ≈ 1232 × 704 → three columns ≈ 410 × 704 (ratio ≈ 0.58; photos are 2:3 and `object-fit:cover`). Radius 0 everywhere. No shadow (d).
  - Each column is its own `sp-parallax` container (`overflow:clip`), so the three prints shift at different speeds behind the mount (section 8).
- **Ours, inner pages**: every inner page head has the same frame (same border shades, 32 px / 12 px; 20 px / 8 px below 782 px) holding **two butted photos** (the reference's pair) or one photo, height `clamp(360px, 56vh, 560px)`, with the 24 px centred label naming the page's promise. Masonry cards and the home band use the same mitred border at 10 px (section 3).
- **Must not be diluted**: the four border shades must differ so the 45° joints are visible at a glance at every corner; the columns must be butted (1 px line only, never a gutter); the photos must be low-key (mean luminance ≤ 35%); the label stays centred and white, 24 px, not a big headline; radius 0.

### T2. Mitre hairline field with a vertical rule and small rotated caption, plus the giant split headline (secondary `ref/th-first.png`, `ref/scroll-th-after.png`)
- **Reference**: white ground crossed by 1 px diagonal hairlines (canvas, `#E6E6E6`, one faint yellow), one vertical 1 px rule 85 px from the right edge with a small vertical name; a 130.6 px uppercase headline, weight 400, line-height 0.92, tracking -3%, cut into lines where the second line starts with "/" and is indented. (b)(f)
- **Ours**: 
  - **Hairline field**: two crossing 45° 1 px lines per section (the exact angle of a mitre cut), drawn with CSS `linear-gradient` backgrounds on the section Group (`.gk-mitre-field`): `linear-gradient(45deg, transparent calc(50% - .5px), #E3E5E8 calc(50% - .5px), #E3E5E8 calc(50% + .5px), transparent calc(50% + .5px))` and the same at `-45deg`, `background-size:100% 100%`, no-repeat. On the hero the lines run through the header band and the right column (visible around the frame). One of the two lines on home section 2 is brass `rgba(176,138,82,.35)` (reference's single tinted line).
  - **Vertical rule + rotated caption**: 1 px `#E3E5E8` rule at **x 1355** (85 px from the right edge, = (f)), full height of the hero and of each inner page head; caption "Cut to fit · 45°" (inner pages: page-specific, e.g. "Mount · 12 mm bevel") as a core/paragraph with class `gk-vcaption`, `writing-mode: vertical-rl`, Nunito Sans 0.75rem, letter-spacing .08em, `#5F646B`, centred vertically at x 1378. Text lives in block markup (no CSS `content`). **Hidden below 1024 px** (no vertical text on tablet or mobile).
  - **Split headline**: section titles on home #3, #5, #6, #8 and every inner page head: line 1 = core/heading (h2; h1 on inner pages) uppercase Outfit 300, line 2 = core/paragraph `.gk-split__line2` same size starting with "/", indented **22%** of the content width (ref "/ LAB & RESEARCH" indent). Home size `xx-large` = `clamp(3rem, 9vw, 8.2rem)` (8.2rem = 131 px = (b) 130.6 px); inner heads `x-large` `clamp(2.75rem, 7vw, 6.5rem)`. line-height 0.92, letter-spacing -0.03em.
- **Must not be diluted**: the diagonals must be visible lines (not a texture at 5% opacity): 1 px, `#E3E5E8` on `#FAFAFA`; the split headline must reach 8.2rem at 1440 on home and keep the "/" second line with the indent; the vertical rule must run the full height of the hero at ≥ 1024 px.

### T3. Dark "On the bench" card docked bottom-right + grey pill cluster (secondary `ref/th-first.png` card; primary `ref/dm-first.png` pills)
- **Reference card**: `#202220`, 565 × 196 at x 840, y 684, radius 2 px; 191 px image on the left (padding 12 px), title, sub-line, one highlighted line with a dot, date line, and a "[ → ]" tag at the top-right. (d)(f)
- **Ours card** (`.gk-bench-card`): `#202220`, **565 × 196**, radius 2 px, padding 12 px, grid `191px 1fr`, gap 20 px; left: photo **P04** 191 × 172 (object-fit cover, radius 2 px); right: tag "[ → ]" top-right (Nunito Sans 0.75rem, `#FAFAFA`), small label "On the bench today" (0.75rem uppercase .08em `#A9ADB3`), title Outfit 500 1.25rem `#FAFAFA` ("A 50 × 70 walnut frame for a hallway print"), sub-line Nunito Sans 0.875rem `#D6D9DE`, **highlight line** with a 6 px brass dot: Nunito Sans 600 0.875rem `#C9A46C` ("Mount cut this morning · glazing at 15:00"), date line 0.8125rem `#A9ADB3`. Whole card is a link to Book a fitting. Home: docked over the hero frame's bottom-right: **x 795 → 1360, y 668 → 864** (crosses the frame's right edge by 20 px into the right column). Reused as the closing card on home #9 (larger, 880 × 300, with a drawn mitre-corner SVG instead of a photo, see 3.2) and on inner page head docked at the frame's bottom-right with page-specific content.
- **Ours pills** (`.gk-pill`): Nunito Sans 600 **12 px**, line-height 12 px, letter-spacing .04em, padding **5px 8px 4px**, radius **999 px**, background **`#E8EBF0`**, ink text, no border, no shadow; hover and current page invert (ink background `#1C1F23`, `#FAFAFA` text) in **.4s cubic-bezier(.16,1,.3,1)** (d)(g). Used for: the centred top menu (each nav item is a pill; gap 8 px), the site-name pill (filled ink) that starts the row, post category/tag chips, moulding chips on Mouldings, price-table group labels, and the "[ → ]" buttons (grey button 36 px high, radius 2 px, `#E8EBF0`, Nunito Sans 600 0.8125rem uppercase, = secondary button).
- **Must not be diluted**: the card must be dark `#202220` on a light page and overlap the frame edge (not sit in its own row) at ≥ 1024 px; it keeps the 191 px image, the brass highlight line and "[ → ]". Pills stay 12 px with radius 999 and the grey `#E8EBF0` (not outlined, not walnut).

### Supporting details (required, not counted as signatures)
- Copyright line 10 px centred at the bottom of the footer (a): "© 2011–2026 Gaku Frames".
- Small "/ LABEL" kickers (secondary "/ PROJECT"): Nunito Sans 600 0.75rem uppercase, letter-spacing .06em, ink, above photos and text columns.
- Content column at **x 605 (42%)**, width **565 px** for long text on home #2 and inner pages (c).

### Continuation to inner pages (required)
| Page | T1 frame head (photos) | T2 hairlines + rule + split head | T3 bench card / pills | Mitred 10 px frames in body |
|---|---|---|---|---|
| Mouldings | pair P06 + P02 | "MOULDINGS / SIX WOODS" | card: "Borrow sample corners for 7 days"; wood chips (pills) | masonry of six wood cards |
| Mounting & glazing | pair P12 + P13 | "MOUNTS / CUT BY HAND" | card: "Conservation board in stock" | step photos in 12 px mount |
| Prices | single P09 | "PRICES / BY SIZE" | card: "Express in 3 working days"; table group pills | — |
| Delivery & hanging | pair P15 + P14 | "DELIVERED / TO THE WALL" | card: "Hanging rounds: Tue and Fri" | P15 detail |
| About | pair P05 + P02 | "THE SHOP / SINCE 2011" | card: "Seven people, one bench" | P16 |
| Book a fitting | single P01 | "BRING THE PRINT / MEASURE THE WALL" | card: "30-minute fittings" | — |
| Contact (Visit) | single P03 | "VISIT / COOPER'S YARD" | card: hours | — |
| Newsletter | single P11 | "BENCH NOTES / MONTHLY" | — | — |
| FAQ & care | single P10 | "CARE / AND QUESTIONS" | — | — |
| News index / archive / category / tag | single P13 (index), P12 (archive/category/tag); never a photo that is a post's featured image | "JOURNAL / FROM THE BENCH" | tag pills | — |
| Single post | featured image in a T1 frame (one photo, 56vh) | rule + hairlines | category/tag pills; bench card "[ → ] Book a fitting" at the end | — |
T1 on all 11 page types; T2 on all; T3 card on 7 inner pages, pills on all. Every signature continues on well over 4 inner pages.

---

## Key visual concept

### (1) Reference first screen: concept, story, signature motion
- **What it shows** (`ref/dm-first.png`): two tall black-and-white street photographs fill the window edge to edge, butted at one seam, no frame, no container. A single small white label (the site name with an arrow) sits in the dead centre. A tiny stack of grey pills (name, About, Journal) sits at the top-left; a 10 px copyright at the bottom centre. Nothing else: the photograph is the page.
- **Story**: "you walk through someone's pictures one pair at a time": the site is a wall of prints and the visitor is in front of it.
- **Signature motion**: the strip of photographs drifts sideways (translate3d) under the fixed centred label; the strip fades in .55s `cubic-bezier(.37,0,.63,1)` once images decode; pills invert in .4s `cubic-bezier(.16,1,.3,1)` on hover (g). Secondary adds a dark docked card bottom-right, diagonal hairlines and a vertical rule (f).

### (2) Our translation (picture framing shop; same composition, same motion idea, same image type)
- **Scene**: the same "wall of prints" first screen, but the prints are now **inside one mitred walnut frame**: the visitor stands at the framer's counter looking at a finished frame. Three low-key documentary photographs, butted like the reference pair, tell the shop's job left to right: **P01** the framer fitting a mitred corner at the bench while the client holds the print flat (the row's signature image), **P02** sample corners and moulding lengths laid out on the bench, **P03** a finished, mounted frame leaning against the wall it is going to hang on.
- **Story**: "a picture is finished by its frame, and we fit it to your wall": from bench, to choice, to wall, in one glance.
- **Label**: centred white 24 px, the h1: "Gaku Frames — framed for the wall it hangs on →" (links to Book a fitting).
- **Motion**: the reference's drifting strip becomes three prints shifting at different speeds behind the mount (sp-parallax per column, middle column faster), the way a print slides under a mat before the framer fixes it; the label fades in .55s like the reference strip. Pills invert on hover. Same image type: photographs, near-monochrome, grainy.
- **Docked card** (secondary): "On the bench today", what the framer is working on right now.

### (3) KV checklist (every row implemented and visible in the home first screen at 1440×900; `?sp-static` shows the final state; mobile in 3.1)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Two full-height B&W photos butted, no gap, no container (primary) | Three equal butted photo columns, 1 px `#1C1F23` line between, `object-fit:cover`, radius 0 | stage inside the frame, photo area x 64 → 1296, y 124 → 828 | each column `sp-parallax` (`--sp-par` 6% / 9% / 6%), reduced motion static | P01, P02, P03 |
| 2 | One white 24 px label with arrow centred on the photos (primary) | h1 label "Gaku Frames — framed for the wall it hangs on →", Outfit 400 24 px, .04em, `#FAFAFA`, on a soft scrim `radial-gradient(closest-side, rgba(28,31,35,.45), transparent)` 520 × 120 | centred on the photo area (≈ x 680, y 476) | fade-in .55s `cubic-bezier(.37,0,.63,1)` (CSS keyframe guarded by `html.sp-js:not(.sp-no-motion)`, no sp-reveal) | — |
| 3 | Grey pill stack (primary) | One centred pill row: ink site-name pill "Gaku Frames" + Mouldings, Mounting, Prices, Delivery, About, Visit; 12 px, radius 999, `#E8EBF0` | header, centred, y 24 → 46 | invert .4s `cubic-bezier(.16,1,.3,1)` on hover/current | — |
| 4 | Full-bleed photographs (primary) → framed-window (row) | Walnut frame, 32 px border, four shades (`#6B5F53` / `#5E5348` / `#544A40` / `#4A4139`) so all four 45° joints show; 12 px `#E8EBF0` mount with 1 px bevel | outline x 20 → 1340, y 80 → 872 | static | — |
| 5 | Dark docked card bottom-right (secondary) | "On the bench today" card `#202220` 565 × 196, P04 191 px thumb, title, brass highlight line, "[ → ]" | x 795 → 1360, y 668 → 864, over the frame's right edge | none | P04 |
| 6 | Diagonal hairlines + vertical rule with small vertical name (secondary) | Two 1 px 45° lines `#E3E5E8` across the hero (visible in header band and right column), vertical rule x 1355, caption "Cut to fit · 45°" vertical | behind the frame / right column | static | — |
All four images P01–P04 are in the image list (section 6) and marked as home.

---

## 2. Colour

From the references' relation (near-white ground, near-black ink, cool grey tint, dark card, one tiny accent) with the row's walnut carried only by frames. Within ±5% lightness of the reference tokens except the accent (reason below).

| Role | Hex | Source token | Use | Share of first screen |
|---|---|---|---|---|
| Base | `#FAFAFA` | (a) primary base `#FAFAFA` (exact) | page ground, header | ~12% (gutters, header, right column) |
| Ink | `#1C1F23` | (a) primary ink `#1C1F23` (exact) | text, site pill, column lines, current pill | ~1% |
| Tint | `#E8EBF0` | (a) primary pill `#E8EBF0` (exact) | pills, buttons, mount, table header band | ~5% (mount + pills) |
| Dark card | `#202220` | (a) secondary dark card `#202220` (exact) | bench cards, footer ground | ~3% |
| Walnut (main) | `#5E5348` (+ shades `#6B5F53`, `#544A40`, `#4A4139`) | row hex b28-4; reference has no brown (photographs only) | picture-frame borders only, masonry card frames, focus ring on light ground | ~13% (the frame border) |
| Hairline | `#E3E5E8` | (d)(f) `#E6E6E6`, cooled −1% L | diagonals, vertical rule, table rules | <1% |
| Muted text | `#5F646B` | derived from ink on base (5.9:1) | captions, meta, vertical caption | — |
| Accent (brass) | `#B08A52` (text on dark `#C9A46C`) | (a) secondary accent `#F4FF7E` relation (one highlight line, one tinted hairline) | bench-card highlight line + dot, one tinted diagonal, price "from" marks | ≤ 0.5% |
| Photos | low-key, near-monochrome | (e) primary B&W photographs | — | ~66% |

- Accent change reason: the secondary's acid yellow `#F4FF7E` would clash with walnut and a quiet shop; brass is the framer's own highlight (gilt slip, brass hanging hardware). Same role and share (one line, ≤ 0.5%).
- Walnut is **never** a section ground or a band (Kakeru Run used a brown order band `#6B5C4C`; ours is a frame, not a band). Footer is `#202220`, not walnut. No cream/beige anywhere.
- Recent mains avoided: Tochi green `#26362C`, Haru slate `#5C656E`, Kakeru brown band `#6B5C4C`, Asagiri grey-paper + oxblood `#730D0D`. Ours: cool near-white + walnut frames + dark card.
- Contrast: ink on base 16.2:1; muted on base 5.9:1; `#FAFAFA` on `#202220` 15.9:1; `#C9A46C` on `#202220` 7.6:1; ink on `#E8EBF0` 13.9:1; white label on the scrim over low-key photos ≥ 7:1.
- **First-screen saturated share** (scripts/check-first-screen.py, S > .35): reference 0.0% / 0.3% (a); hard cap **15%** (common), row cap 30%; **our target ≤ 3%**. Walnut S ≈ 0.13 does not count; the brass dot/line is the only saturated pixel group; photos graded desaturated (section 6).

---

## 2b. Typography (font_direction = sans)

| Use | Latin | zh-TW stack | ja stack | Size / weight / line-height / tracking | Source token |
|---|---|---|---|---|---|
| Display (split headlines, page titles, card titles, hero label, prices) | **Outfit** 300 / 400 / 500 | "Outfit", **"Noto Sans TC"**, "PingFang TC", "Microsoft JhengHei", sans-serif | "Outfit", **"Noto Sans JP"**, "Hiragino Sans", "Yu Gothic", sans-serif | see scale | (b) secondary display 130.6 px / 400 / 0.92 / -3%; primary label 24 px / .04em |
| Body, nav pills, labels, UI | **Nunito Sans** 400 / 600 (+ 400 italic) | "Nunito Sans", "PingFang TC", "Microsoft JhengHei", "Noto Sans CJK TC", sans-serif (no bundled zh font, no JP font) | "Nunito Sans", "Hiragino Sans", "Yu Gothic", "Meiryo", sans-serif | body 1rem / 1.75, .01em | (b) primary body 16 px .04em; secondary body 13.9 px / 600 |

All sans: no serif and no Mincho anywhere (Latin or CJK).

Scale (theme.json `fontSizes`):
| Slug | Size | Use | Source |
|---|---|---|---|
| tiny | 0.75rem (12 px) | pills (12 px / lh 12 px / .04em), kickers, vertical caption, card label | (b) pills 12 px / .04em |
| small | 0.875rem | captions, card sub-lines, table details, footer | (b) secondary 13.9 px |
| base | 1rem | body, line-height 1.75 (CJK 1.85) | (b) 16 px |
| medium | 1.5rem (24 px) | hero label, inner frame labels, card titles at large size, step titles | (b) primary label 24 px .04em |
| large | 2.5rem (40 px) | section sub-headlines (Outfit 500, -0.03em), closing card title | (b) secondary sub-headline 39.6 px / 700 / -3% |
| x-large | `clamp(2.75rem, 7vw, 6.5rem)` | inner page split heads | (b) |
| xx-large | `clamp(3rem, 9vw, 8.2rem)` | home split headlines; **max 8.2rem ≥ 4.25rem** | (b) 130.6 px |
- Split headlines: Outfit **300**, uppercase (English, French, German only), line-height 0.92, letter-spacing -0.03em; `overflow-wrap:anywhere` off, `hyphens:auto` for fr/de; words may wrap on mobile.
- Body: Nunito Sans 400, 1rem / 1.75, letter-spacing .01em; strong 600. Pills and buttons Nunito Sans 600.
- zh-TW / ja: display sizes × 0.75 (xx-large → `clamp(2.4rem, 6.75vw, 6.15rem)`), **no uppercase transform**, letter-spacing 0.02em, line-height 1.25; body 1rem / 1.85, letter-spacing .04em. fr/de: `hyphens:auto` on body and headings ≥ large.
- Loading: all faces via **theme.json `fontFamilies[].fontFace`** (woff2 in `assets/fonts/`): Outfit variable 300–500; Nunito Sans variable 400–600 normal + 400 italic; **Noto Sans TC** (display subset, weight 400/500) and **Noto Sans JP** (display subset, 400/500) built with the Hokuto/Hada subset method (the zh subset script is broken). Editor and front end load the same faces. Because style.css uses `:lang()` rules, copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it. Every font file listed in theme-meta.json `fonts[].files` with OFL licence files; family names in readme.txt. zh-TW `:root:lang(zh*)` display stack contains "Noto Sans TC"; body stack contains neither bundled CJK family.

---

## 3. Home page

### 3.1 First screen (1440 × 900), composition
- **Header** (y 0 → 64, ground `#FAFAFA`, crossed by the two diagonals): one centred row (`justify-content:center`, gap 8 px) at y 24: ink site-name pill "Gaku Frames" (`#1C1F23` / `#FAFAFA`) then the core/navigation block with six pill items (Mouldings, Mounting, Prices, Delivery, About, Visit). **Exactly one top menu.** No other header buttons.
- **Frame stage** (`.gk-frame-window`, core/group): x 20 → 1340, y 80 → 872 (height `min(792px, calc(100svh - 28px))`, min 560 px). Border shades and mount as T1. Inside: core/columns (no gap, `is-not-stacked-on-mobile`) with three core/group columns `.gk-col sp-parallax`, each holding one core/image (P01, P02, P03; alt text describes the scene). Column divider: `border-left:1px solid #1C1F23` on columns 2 and 3.
- **Label** (h1, core/heading inside a core/group `.gk-seam-label` absolutely centred on the photo area at ≥ 782 px; contains a link). The scrim is the group's background.
- **Right column** (x 1340 → 1440): vertical rule at x 1355 and the vertical caption (≥ 1024 px only).
- **Bench card**: absolutely positioned at ≥ 1024 px (right 80 px, bottom 36 px relative to the hero section), see T3.
- **Not on the first screen**: no table, no form, no search, no big centred type, no cut-outs.
- **782–1023 px**: frame x 16 → right 16 (no right column), border 24 / mount 10; label still centred in the photos; bench card drops in flow under the frame (full width, max 565 px, right-aligned).
- **390 px** (mobile): header = site-name pill left + "Menu" pill right (navigation overlay; overlay lists the same six items as pills). Frame x 12 → 378, border **16 px**, mount **6 px**; three columns **stay side by side** (≈ 109 × 300 px each, 1 px lines) so the three-equal-columns idea survives; the label is **in flow below the frame** (ink text 1.125rem on `#FAFAFA`, no scrim, no absolute positioning); bench card in flow below the label, grid `96px 1fr`, auto height; no vertical rule/caption. No vertical text, no absolutely positioned labels, nothing overlapping.

### 3.2 Block order (alternating long form over an asymmetric masonry)
| # | Section | Purpose | Layout (1440) | Photos | Copy |
|---|---|---|---|---|---|
| 1 | **Hero: framed window** | KV (section above) | 3.1 | P01, P02, P03, P04 | h1 label 8 words; card ~25 words |
| 2 | **"Framed for the wall" intro** | narrative: why we frame for the actual wall | `.gk-mitre-field` (one brass diagonal). Kicker "/ THE SHOP" at x 20. Photo P05 4:5, width 440 px at x 20, top offset +120 px below the kicker, inside a 12 px `#E8EBF0` mount with 1 px bevel (no wood). Text column at **x 605 (42%)**, width 565 px: large sub-headline (Outfit 500 2.5rem, -0.03em, 2 lines: "We frame for the wall, not for the counter."), then **three paragraphs** (40–60 words each) and a grey "[ → ] About the shop" button. | P05 | ~160 words |
| 3 | **"MOULDINGS / SIX WOODS IN STOCK"** | what we stock | Split head xx-large (line 2 indented 22%). Below: **asymmetric masonry** = core/columns 40% / 26% / 34%, gap 20 px; middle column `margin-top:160px`, right column `margin-top:64px`. Left: card A P07 (4:5) + text card "Six woods" (list of six woods with widths). Middle: text card "Profiles" (flat 20 mm, scoop 30 mm, box 40 mm, slip 8 mm) + card B P08 (1:1). Right: card C P09 (3:2) + card D P10 (4:5). Photo cards: 10 px mitred border in **that wood's colours** (A walnut `#5E5348` set; B oak `#A58B6A`/`#9A7F5F`/`#8D7354`/`#7F674A`; C black-stained ash `#2E2B28`/`#26231F`/`#201E1B`/`#1A1816`; D ash `#C8BBA6`/`#BBAD96`/`#AE9F87`/`#A19279`), caption under each: wood name (Outfit 500 1rem) + "from $95" small. Text cards: `#E8EBF0` ground, radius 2 px, padding 28 px. Grey button "[ → ] All mouldings". | P07, P08, P09, P10 | ~110 words |
| 4 | **Framed band (parallax)** | the bench at work, wide | Full-width walnut frame (x 20 → 1420, border 32 / mount 12) holding one photo P06, height `clamp(420px, 70vh, 640px)`; `sp-parallax` on the inner group, `--sp-par:10%` (mobile 7%). Centred white 24 px label on a scrim: "Every corner is cut at 45° and joined by hand →" (links to Mounting). | P06 | 10 words |
| 5 | **"MOUNTS / CUT BY HAND"** — how a mount is cut | process in alternating long-form | Split head. Then **four alternating rows** (not a grid, not a timeline): row 1 text left (x 20 → 565) photo right (x 605 → 1340, 3:2), row 2 swapped, etc.; rows 140 px apart. Each text: number "01"–"04" (Outfit 300 2.5rem `#5F646B`), title (Outfit 500 1.5rem), 45–60 words. Photos in a 12 px mount with bevel line. Steps: 01 Measure the print and the wall; 02 Cut the 45° bevel by hand; 03 Hinge the print with conservation tape; 04 Glaze, seal and fit. | P11, P12, P13, P14 | ~220 words |
| 6 | **"PRICES / BY SIZE"** | the 7 fixed prices | Split head, then the price table (section 7) **full content width** (x 20 → 1420) on base ground; group pills above ("Frames", "Upgrades", "Delivery"); one short note below (turnaround, walnut/gilt +20%). Button "[ → ] Full price list". No reveal. | — | ~60 words |
| 7 | **"DELIVERED / TO THE WALL"** | delivery and hanging | Split head; two columns 58 / 42: left P15 (3:2) in a 10 px walnut mitred frame; right at x ~860: two paragraphs (40–50 words) + three facts as a definition list (Delivery and hanging $45 within 25 km; hanging rounds Tuesday and Friday; up to 3 frames per visit). | P15 | ~110 words |
| 8 | **"JOURNAL / FROM THE BENCH"** | latest 3 posts | Split head; core/query 3 columns, gap 20 px: image 3:2 (radius 2 px), category pill, title (Outfit 500 1.25rem), date small. | P16, P17, P18 (featured images of the 3 newest posts) | titles only |
| 9 | **Closing bench card** | booking CTA | `.gk-mitre-field`; a large dark bench card `#202220` 880 × 300, right-aligned at x 540 → 1420 (T3 reprise): left 191 px square holds an inline SVG walnut mitre corner (two 45° joined strips in the four shades, drawn in the theme, not a photo), right: label "Book a fitting", title Outfit 500 2.5rem "Bring the print. Measure the wall.", brass highlight line "30-minute fittings · Tue–Sat", grey button "[ → ] Book a fitting". Left of the card at x 20: hours and address in small text. | — | ~40 words |
Footer (all pages): `#202220`, padding 80 px 20 px 24 px; three columns: address + hours; newsletter subscribe "Bench notes, once a month" with the **newsletter form slot** (section 12); the six nav links as pills (inverted: `#2E302E` ground, `#FAFAFA` text; footer link list is not a second top menu); then the 10 px centred copyright.

Home photo positions: **18** (P01–P18, each once). English copy ≥ 650 words, ≥ 3 narrative paragraphs ≥ 20 words (section 2 has three, sections 5 and 7 more).

Intro paragraphs (direction; final copy in brand.md): (1) a print looks different on the counter than in the hallway, so we ask for a photo and the measurements of the wall; (2) Mira Haldane opened the shop in 2011 with one bench and six woods, and still cuts every mitre on the same saw; (3) a frame should make the wall and the picture agree: light, distance, the colour of the paint, the height of the eye.

### 3.3 Comparison with the latest four themes (block order must not match)
| Theme | Home order | Gaku Frames differs because |
|---|---|---|
| Tochi Academy | KV disc + slider → story → cohort cards → hashtag ticker → week timeline → parallax evening band → date band → instructor rows → journal → fees + visit | no disc, no slider, no ticker, no timeline, no instructor rows; our first screen is a framed three-column photo window; masonry of woods replaces cards; price table sits before delivery, not at the end |
| Haru Allergy | pinned photo + poem veil → edge-flush portraits → method band with circles → parallax cases band → voice slider → visit | no pinned photo/veil, no portraits row, no circles, no slider; our parallax is inside a mitred frame, not a full-bleed band |
| Kakeru Run | hexagon stage in ruled grid → specimen cells → info row → price list → order flow → brown order band | no hexagons or ruled grid; walnut never forms a band; prices come after an alternating mount process, closing is a dark docked card |
| Asagiri Hotel | inset dark hero → intro with portrait → opener + photo strip → inset cover with card → panel with rising photo → night notes loop → ink close | no inset single photo (ours: framed three butted columns), no clock labels, no rising panel photo; ours has masonry (#3) and alternating step rows (#5) |
Signature techniques are also different: Tochi disc, Haru veil, Kakeru hex, Asagiri inset + overhang vs. our mitred frame window, mitre hairline field + split head, dark docked bench card + pills.

---

## 4. Shared components (CSS class names for patterns)
- `.gk-frame` (any mitred frame; modifiers `--lg` 32/12, `--sm` 10/0, `--wood-oak|ash|black|walnut`), `.gk-mount` (12 px `#E8EBF0` + bevel line), `.gk-frame-window` (hero), `.gk-col` (column), `.gk-seam-label`, `.gk-mitre-field`, `.gk-vrule` + `.gk-vcaption`, `.gk-split` + `.gk-split__line2`, `.gk-bench-card` (+ `--lg`), `.gk-pill`, `.gk-btn` (grey 36 px button), `.gk-masonry`, `.gk-step` (alternating row), `.gk-prices` (table).
- All visible words in block markup / `_t()` keys; CSS `content` only "" for decoration.
- Patterns are literal block markup after the PHP docblock (pattern source contract); forms are the only PHP islands.

---

## 5. Inner pages (11 pages + post templates)
| Page (slug) | Purpose and content | Key layout |
|---|---|---|
| **Mouldings** (`mouldings`) | the six woods (oak, walnut, ash, maple, black-stained ash, gilt/brass leaf), four profiles, widths 8–40 mm; sample corners loan (7 days, free); price note (oak/ash/maple/black at table price, walnut and gilt +20%) | T1 pair head P06+P02; wood chips; masonry of six wood cards (photo cards P07, P08, P09, P10 with wood-coloured mitred borders + two text cards); alternating row "Choosing by the wall" with P03 |
| **Mounting & glazing** (`mounting`) | mount colours (5 whites + 2 greys), conservation board, hand-cut 45° bevel, float hinge vs. window mount; glazing: float glass (standard), UV-filtering museum glass, acrylic for large/oversize | T1 pair P12+P13; the same 4 alternating steps as home #5 with longer copy (steps 01 and 04 with P11 and P14; steps 02 and 03 text only, because P12/P13 are in the head); glazing comparison as a 3-column text list (stacked on mobile), not a table |
| **Prices** (`prices`) | the 7-row table (section 7), turnaround, express, wood surcharge, worked example ("50 × 70 print, walnut, museum glass: $165 + 20% + $65 = $263") | T1 single P09; full-width table; bench card "Express in 3 working days (+$40)" |
| **Delivery & hanging** (`delivery`) | $45 within 25 km up to 3 frames; Tue and Fri rounds; wall types (plaster, brick, drywall), picture rail; care for the first week | T1 pair P15+P14; 2 alternating rows (P06, P04) |
| **About** (`about`) | 2011 opening, one bench, the seven people as **named rows** (name, role, one sentence; not a portrait grid), the bench and the counter | T1 pair P05+P02; alternating rows: story with P16; people list as hairline rows |
| **Book a fitting** (`book`) | 30-minute fitting appointments Tue–Sat; what to bring (print, wall photo, measurements); the 4-step fitting process (section 7); **contact form slot** (booking) with mailto fallback | T1 single P01; process as 4 alternating text rows (no photos, numbers 01–04 large); form section on base ground |
| **Contact / Visit** (`contact`) | address, hours, phone, email, how to find Cooper's Yard, parking; **contact form slot** with mailto fallback | T1 single P03; two columns: details left, form right (stacked on mobile) |
| **Newsletter** (`newsletter`) | "Bench notes": one letter a month (new woods, finished frames, hanging rounds); **newsletter form slot** (email + submit) | T1 single P11; text column at 42%; form below; no reveal on form |
| **FAQ & care** (`faq`) | 8 questions (turnaround, bring frames to re-frame, oversize, sunlight, cleaning glass, hanging weight, sample loans, cancellations) as core/details | T1 single P10; details list full content width |
| **News** (`news`, posts page, empty content) | journal index | head P13; query grid 3 columns (P16, P17, P18, P06) |
| **Privacy** (`privacy`) | short legal text | plain, no T1 photo (rule + hairlines only), no reveal |
Templates: `single.html` (T1 frame featured image, text column 42%, pills, closing bench card), `archive.html`, `category.html` (copy of archive), `tag.html` (TAG label), `index.html`, `page.html`, `page-contact.html`/`page-newsletter.html` may use `page.html`. Demo: 4 posts (section 7) with categories and tags; theme-meta `pages` include home, about, news, article, category, tag, newsletter, contact, all mapped in `screens`.

---

## 6. Photos (18, Grok, one at a time, read every one)

Imagery row: **IMAGERY = photo** → real-photography STYLE (the primary reference is black-and-white photography). 18 images, 0 cut-outs, each ≤ 300 KB, ≤ 2000 px, webp. Regenerate any image with text, logos, readable labels, broken hands, a bright high-key look, saturated colour or a lit area over ~15% of the frame.

STYLE (identical on every prompt, `IMAGE_STYLE`):
`low-key documentary photograph, real picture framing workshop, dark walnut workbench, single warm window light from one side, deep soft shadows falling to near black, muted desaturated palette of charcoal, warm grey and walnut brown with small brass highlights, fine 35mm film grain, shallow depth of field, candid hands doing real framing work, diverse adults, modern international neutral workshop, no text, no logos, no watermark, no readable labels, no Japanese elements`

| ID | File | Subject / composition | Ratio | Used on (never twice on one page) | Home |
|---|---|---|---|---|---|
| P01 | p01-bench-corner.webp | framer's hands pressing a mitred walnut corner together in a corner clamp at the bench (lower half), client's hands holding an unframed photographic print flat on the bench above it; faces out of frame or turned away | 2:3 | Home hero col 1; Book head | **yes** |
| P02 | p02-sample-corners.webp | sample frame corners (oak, walnut, black, ash, gilt) laid in a row on the bench beside moulding lengths, a pencil and steel rule | 2:3 | Home hero col 2; About head; Mouldings head | **yes** |
| P03 | p03-frame-on-wall.webp | finished frame with white mount leaning against a painted wall in a quiet room, window light across it, picture hook marked in pencil above | 2:3 | Home hero col 3; Contact head; Mouldings row | **yes** |
| P04 | p04-clamped-frame.webp | small frame in a band clamp drying, glue bead at the joint, close | 1:1 | Home bench card; Delivery row | **yes** |
| P05 | p05-counter-fitting.webp | at the counter: framer and client hold two sample corners against a print, deciding; side view | 4:5 | Home intro; About head | **yes** |
| P06 | p06-bench-wide.webp | wide view of the workshop: long bench, mitre saw, moulding lengths racked on the wall, one window light | 16:9 (2000×1125) | Home framed band; Mouldings head; Delivery row; Post 4 | **yes** |
| P07 | p07-walnut-rack.webp | walnut moulding lengths standing in a wall rack, ends showing profiles | 4:5 | Home masonry A; Mouldings masonry | **yes** |
| P08 | p08-oak-profiles.webp | short cut pieces of oak moulding stood on end showing their profiles, on dark wood | 1:1 | Home masonry B; Mouldings masonry | **yes** |
| P09 | p09-black-frame.webp | corner of a black-stained ash frame around a monochrome print, on the bench | 3:2 | Home masonry C; Prices head; Mouldings masonry | **yes** |
| P10 | p10-ash-frame.webp | light ash frame held up by two hands against a dark wall | 4:5 | Home masonry D; FAQ head; Mouldings masonry | **yes** |
| P11 | p11-measure.webp | steel rule and pencil measuring a print's margin on the bench | 3:2 | Home step 01; Newsletter head; Mounting step 01 | **yes** |
| P12 | p12-bevel-cut.webp | hand guiding a mount cutter along a straight edge, bevelled cut in white board | 3:2 | Home step 02; Mounting head; News archive head | **yes** |
| P13 | p13-hinge.webp | fingers placing a paper hinge behind a print on a mount | 3:2 | Home step 03; Mounting head; News index head | **yes** |
| P14 | p14-glaze-fit.webp | glass being lowered into a frame, gloved hands, cloth beside | 3:2 | Home step 04; Delivery head; Mounting step 04 | **yes** |
| P15 | p15-hanging.webp | person hanging a framed print on a hallway wall with a level and a second person holding the bottom edge | 3:2 | Home delivery; Delivery head | **yes** |
| P16 | p16-wedding-print.webp | a large framed photograph carried down a narrow hallway | 3:2 | Post 1 (home journal); About row | **yes** |
| P17 | p17-maps.webp | three framed maps laid on the bench, mounts identical, before hanging on a stair wall | 3:2 | Post 2 (home journal) | **yes** |
| P18 | p18-drawing-glass.webp | a child's crayon drawing (abstract shapes, no letters) being mounted under glass | 3:2 | Post 3 (home journal) | **yes** |
Posts: 1 P16, 2 P17, 3 P18 (newest three, shown on home), 4 P06. One readme line per image (AI-generated, CC0). Grade: if any comes out colourful, regenerate (do not desaturate in post-processing beyond a mild grade).

---

## 7. Fixed numbers (identical on Home, inner pages, brand.md, footer and all five languages)

**Prices (USD, per frame, includes standard mount, float glass and fitting) — 7 rows:**
| Item | Includes | Price |
|---|---|---|
| Small frame | up to 30 × 40 cm, oak, ash, maple or black-stained ash | $95 |
| Medium frame | up to 50 × 70 cm | $165 |
| Large frame | up to 70 × 100 cm | $260 |
| Oversize frame | up to 100 × 140 cm, two-person fitting | $420 |
| Conservation mount | acid-free board, hand-cut bevel, hinged print | +$28 |
| Museum glass | UV-filtering, low reflection, per frame | +$65 |
| Delivery and hanging | within 25 km, up to 3 frames | $45 |
- Walnut and gilt mouldings: **+20%** on the frame price. Turnaround **10 working days**; express **3 working days, +$40**. Sample corners: borrow up to **6 for 7 days**, free.
- Table rules: core/table class `gk-prices`, **`width:100%` of the content (x 20 → 1420 at 1440) at ≥ 782 px**; columns 26% / auto / `min-width:9ch`; price cell **`white-space:nowrap; text-align:right`**, Outfit 400 1.25rem; header row `#E8EBF0`; 1 px `#E3E5E8` rules; cell padding 14 px 12 px; `table-layout:auto`, no fixed widths that could cut the price column (auto-gates checks 800 and 1280). **< 782 px**: `table, thead, tbody, tr, td {display:block}`, thead hidden visually; each row a grid `1fr auto` with name + price on one line and the details below in muted text. No sp-reveal on the table.
- **People (7)**: Mira Haldane, founder and framer (since 2011); Tomas Reyes, bench framer (mitres and joins); Nadia Sørensen, mount cutter; Kwame Boateng, glazing and fitting; Lucía Moreno, front counter and fittings; Eli Brandt, delivery and hanging; Priya Nair, conservation and repairs.
- **Stories (4 posts)**: category "From the bench": 1 "A wedding print for a narrow hallway" (P16), 2 "Three maps for a stairwell" (P17), 3 "A child's drawing under museum glass" (P18); category "Shop news": 4 "Why we still cut mounts by hand" (P06). Tags: mouldings, mounts, glazing, hanging, conservation, delivery.
- **Place**: 27 Cooper's Yard, Halden (fictional). Phone +1 555 0127 2011 (fictional). Email bench@gakuframes.example (same address in all mailto fallbacks).
- **Hours**: Tuesday–Saturday 10:00–18:00, Thursday until 20:00; Sunday and Monday closed (bench days). Fittings by appointment, 30 minutes, Tue–Sat. Hanging rounds Tuesday and Friday.
- **Fitting process (4 steps, Book page and brand.md)**: 1) bring the print and a photo of the wall with its measurements; 2) choose moulding, mount and glass at the counter with sample corners (30 minutes); 3) we cut, join, mount and glaze at the bench (10 working days); 4) collect, or we deliver and hang ($45 within 25 km).
- **Mount process (home #5 and Mounting)**: 01 measure the print and the wall; 02 cut the 45° bevel by hand; 03 hinge the print with conservation tape; 04 glaze, seal and fit.
- **Stock**: 6 woods, 4 profiles (flat 20 mm, scoop 30 mm, box 40 mm, slip 8 mm), 7 mount colours.

---

## 8. Scroll techniques (sp-scroll, copied as-is from `pipeline/assets/sp-scroll/`)

| Effect | sp-* class | Where | Reference source; trigger / time / easing | Ours |
|---|---|---|---|---|
| **Parallax (required)** | `sp-parallax` | (a) **hero**: each `.gk-col` (direct img), `--sp-par` **6% / 9% / 6%** (mobile **5% / 7% / 5%**); (b) **home #4 framed band** P06, `--sp-par:10%` (mobile 7%); (c) inner page frame heads `--sp-par:6%` | primary: photo strip drifts sideways via translate3d, continuous, fade .55s `cubic-bezier(.37,0,.63,1)` (g) | built-in CSS scroll-driven `view()`, linear, layer scale 1.18; IO + translate3d fallback. The sideways drift becomes prints shifting at different speeds behind the mount (sp-parallax is vertical). Foreground label is outside the moving layer. |
| **Split headline lines rise** | `sp-stagger` on `.gk-split`, `sp-reveal sp-reveal--up` on the heading and on `.gk-split__line2` | home #3, #5, #6, #7, #8 heads; inner page heads below the fold are not needed (heads are at the top: **no reveal on the page head frame or title** of inner pages, treat as hero) | secondary: headline split into lines, each rises from a mask (`a-up`), IO adds class, `data-d` stagger, ~.8s `cubic-bezier(.16,1,.3,1)` (g) | 24 px (`--sp-dist`), 0.8 s, `--sp-ease: cubic-bezier(.16,1,.3,1)`, stagger 0.12 s |
| **Mosaic photo reveal** | `sp-reveal sp-reveal--wipe` (clip on the child img) | home #3 masonry photo cards (each column group `sp-stagger`), home #5 step photos, #7 P15 | secondary: project images reveal as a mosaic on viewport entry, IO, ~.6s ease-out (g) | built-in 1.1 s `cubic-bezier(.77,0,.175,1)`, top-to-bottom |
- Hero: **no sp-reveal**. Only the label fade-in (.55s `cubic-bezier(.37,0,.63,1)`, 0.2 s delay) as a CSS keyframe guarded by `html.sp-js:not(.sp-no-motion)` inside `@media (prefers-reduced-motion:no-preference)`. Pills: CSS hover only.
- Not on: forms (contact, booking, newsletter, footer), the price table and its pills, query-loop cards, FAQ details, privacy text, the bench cards. ≥ 3 reveals below the fold on home for check-parallax. No horizontal scrollers.
- Three effects per page maximum. `?sp-static`, reduced motion, no-JS and the editor show the final state.

---

## 9. Responsive rules
- **390 px**: first screen as 3.1 (three columns kept side by side, label in flow, card in flow; **no vertical text, no absolutely positioned labels, no overlap**). Split heads wrap naturally (line 2 indent 0 below 782 px); masonry stacks to one column (card order A, Six woods, Profiles, B, C, D; middle/right top offsets removed); step rows stack photo-then-text; delivery stacks; journal one column; closing card full width (SVG corner 96 px). Frames: border 16 px / mount 6 px (heads), cards 6 px. All tables stacked as in section 7. No horizontal overflow at 390 or 1280 (`html, body {overflow-x:clip}`).
- **782–1023 px**: no right column / vertical rule; frame 24/10; masonry two columns (40/60, offsets 80 px); price table full content width; bench cards in flow.
- **≥ 782 px**: price table full width, price column nowrap right, never cut (auto-gates at 800 and 1280).
- **≥ 1024 px**: everything as specified for 1440.

---

## 10. Similarity targets (≈ 80%; values from reference-tokens.md)
| Dimension | Reference (token) | Gaku Frames |
|---|---|---|
| Base | `#FAFAFA` (a) | `#FAFAFA` |
| Ink | `#1C1F23` (a) | `#1C1F23` |
| Tint (pills/buttons) | `#E8EBF0` / `#EDEDED` (a) | `#E8EBF0` |
| Dark card | `#202220` (a) | `#202220` |
| Accent | `#F4FF7E` one line, < 0.5% (a) | brass `#B08A52` / `#C9A46C` one line, ≤ 0.5% (reason in 2) |
| Main colour | none (B&W photos) (a)(e) | walnut `#5E5348` frames only (row hex) |
| First-screen saturated | 0.0% / 0.3% (a) | target ≤ 3%, cap 15% |
| Display | 130.6 px / 400 / lh 0.92 / -3% uppercase, split lines (b) | 8.2rem (131 px) / Outfit 300 / 0.92 / -0.03em uppercase, split lines |
| Sub-headline | 39.6 px / 700 / -3% (b) | 2.5rem (40 px) / Outfit 500 / -0.03em |
| Seam label | 24 px / .04em white (b)(f) | 24 px Outfit 400 / .04em `#FAFAFA` |
| Pills | 12 px, lh 12, .04em, padding 5/8/4, radius 999, `#E8EBF0`, invert .4s `cubic-bezier(.16,1,.3,1)` (b)(d)(g) | identical |
| Button | 36 px high, radius 2 px, `#EDEDED`, 13.9 px 600 uppercase, "[ → ]" (b)(d) | 36 px, 2 px, `#E8EBF0`, 0.8125rem 600 uppercase, "[ → ]" |
| Body | 16 px .04em / 13.9 px 600 (b) | 16 px / 1.75 / .01em, Nunito Sans 400 |
| Gutter | 20 px (c) | 20 px |
| Content column | x 605–722 (42–50%), 565 px (c) | x 605 (42%), 565 px |
| Photo layout | two full-height photos butted 50/50, radius 0 (e) | three butted columns in a frame, radius 0 |
| Photo ratio | 0.68 portrait / 1.5 landscape (e) | 2:3 hero, 4:5, 1:1, 3:2, 16:9 |
| Corners | photos 0 (primary), 2–4 px (secondary), card 2 px (d) | hero/frames 0; cards, journal images, buttons 2 px |
| Shadows | none (d) | none |
| Hairlines | 1 px diagonals `#E6E6E6`, one tinted (f) | 1 px 45° `#E3E5E8`, one brass-tinted |
| Vertical rule | 1 px, 85 px from right, vertical name (f) | 1 px at x 1355, vertical caption |
| Dark card | 565 × 196 at x 840, y 684, 191 px image, highlight line, "[ → ]" (f) | 565 × 196 at x 795, y 668, 191 px P04, brass line, "[ → ]" |
| Motion | strip drift + .55s fade (37,0,63,1); pill invert .4s; line rise ~.8s (16,1,3,1); mosaic reveal (g) | parallax 6–10%; label .55s same curve; pills identical; reveal-up .8s same curve, stagger .12s; wipe 1.1s |
| Imagery | B&W documentary, grain, strong contrast (e) | low-key near-monochrome documentary, grain (STYLE) |
Photos and copy are our own; nothing is copied from either reference.

---

## 11. Home acceptance checklist (stage 1 review compares against this)
1. First screen 1440 × 900 shows all six KV rows: centred pill nav (one menu), mitred walnut frame with four visible 45° joints and the 12 px mount, three butted low-key columns P01/P02/P03, centred white 24 px h1 label, dark bench card with P04 over the frame's bottom-right, diagonals and the vertical rule with caption. P01 visibly shows the mitred corner at the bench and the client holding the print.
2. `check-first-screen.py` ≤ 15% (target ≤ 3%). No table/form/search/big centred type on the first screen. 390 px: three columns side by side, label and card in flow, no vertical text, no overlap.
3. Split headlines at 8.2rem (1440) with indented "/" second line on #3, #5, #6, #7, #8; max theme size 8.2rem.
4. Masonry #3: three unequal columns with offsets, four photo cards with wood-coloured mitred frames + two text cards.
5. Framed band #4 with P06 and parallax; alternating mount rows #5 (01–04, sides swapping).
6. Price table: 7 rows, full content width at 800 and 1280, prices nowrap right and not cut; stacked on mobile; same values on Prices page and brand.md.
7. 18 home photo positions, no repeats, one STYLE, no text/logos/bad hands, 0 cut-outs.
8. Motion: `check-parallax.mjs` passes (hero columns + band ≥ 6 px desktop and mobile; ≥ 3 reveals hidden before entry; none left hidden; reduced motion static). No reveal in the hero, forms or table.
9. Fonts: Outfit / Nunito Sans; Noto Sans TC / JP for CJK display; theme.json fontFace; same in editor and front end; no serif anywhere.
10. Colours as section 2; walnut only in frames; footer `#202220`; no cream; brass ≤ 0.5%.
11. Block order equals 3.2 and differs from 3.3; no side rail, collage, team grid, six-step grid, vertical timeline, dashboard.
12. Copy ≥ 250 English words (target ~650), ≥ 3 narrative paragraphs; seven names, prices, hours and address as section 7. Footer newsletter slot renders email + submit with the mailto notice without plugins.

---

## 12. Forms (form contract v1 — `steps/form-contract-v1` exists)
Copy `pipeline/assets/forms/shippress-forms.php` unchanged to `inc/shippress-forms.php`, its CSS/editor JS unchanged to `assets/`, `require_once` in functions.php. Patterns call `shippress_form_slot`; no fake forms, no mail/subscribe backend, no hard plugin dependency, nothing decided at import time.

| Location | Kind | Plugin order | Fallback without plugins |
|---|---|---|---|
| **Contact** page, right column below the details | `contact` | first published CF7 form, then WPForms | the existing grey "[ → ] Email the shop" `.gk-btn` mailto button to `bench@gakuframes.example` (subject `_t('contact_mail_subject')`), captured with `ob_start()` and passed as `fallback`; never a link back to /contact/ |
| **Book a fitting** page, after the 4-step process | `contact` (booking) | same | mailto button "[ → ] Request a fitting" to the same address, subject "Fitting request" key `book_mail_subject` |
| **Newsletter** page, text column at 42% | `newsletter` | MailPoet (explicit ID via `shippress_form_id`), then first MC4WP form; CF7/WPForms only with an explicit dedicated newsletter form ID | required `<input type="email">` + submit, native mailto POST to `bench@gakuframes.example`, notice shown under the field |
| **Footer** subscribe (all pages, incl. home; never in the first screen) | `newsletter` | same | same email + submit + notice, on dark `#202220` |
- **Fields**: contact/booking come from the plugin form (expected: name, email, phone optional, message; booking adds preferred day and print size as plain text fields in the owner's CF7 form); fallback = button only. Newsletter fallback = one email field (label visible, `required`, `autocomplete="email"`) + submit.
- **Tokens** in style.css: light ground `--sp-form-accent: #1C1F23; --sp-form-on-accent: #FAFAFA; --sp-form-radius: 2px; --sp-form-focus: #5E5348; --sp-form-surface: #FFFFFF; --sp-form-text: #1C1F23;` inputs 1 px `#C9CDD3` border, 44 px high, Nunito Sans 1rem; submit = 44 px, radius 2 px, Nunito Sans 600 0.8125rem uppercase ("[ → ] Subscribe"). Dark ground (footer, any `#202220` section): `--sp-form-accent: #E8EBF0; --sp-form-on-accent: #1C1F23; --sp-form-focus: #C9A46C; --sp-form-surface: #2A2C2A; --sp-form-text: #FAFAFA;` border `#4A4D4A`. Focus: 2 px outline in `--sp-form-focus`, offset 2 px. Error: text and border `#9B3B2E` on light, `#E8A193` on dark, message 0.875rem under the field; success: `#2F5D46` on light, `#9CCBB2` on dark (plugin message classes only). Same styles for CF7, WPForms, MailPoet, MC4WP (and Jetpack blocks), scoped to their classes and `.sp-newsletter-fallback`; checkbox/radio 18 px with accent colour; no global `input`/`form` selectors.
- **Copy (semantic keys in inc/i18n/en.php, translated in all five dictionaries; extract with `L10N_SEMANTIC=1`)**: `forms_email` "Your email address"; `forms_subscribe` "Subscribe"; `forms_mail_notice` "This opens your email app. Send the message to ask for Bench notes; you are not subscribed yet."; `forms_mail_subject` "Bench notes subscription"; `contact_email` "Email the shop"; `contact_mail_subject` "Question for Gaku Frames"; `book_request` "Request a fitting"; `book_mail_subject` "Fitting request". Locally rewritten for zh-TW, ja, fr, de (not literal), including dynamic block attributes.
- No sp-reveal on any form or its section wrapper. Validate with `form-runtime-check.php` in five locales and `repo-gates.sh forms`; check CF7 styling at 390 px and desktop on light and dark grounds without submitting.
