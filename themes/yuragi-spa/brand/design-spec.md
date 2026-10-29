# Yuragi Spa: design spec (stage 1, binding for implementation)

Slug `yuragi-spa`, a day spa with a short list of treatments and quiet rooms. Type **hospitality** (business layout; WooCommerce declared compatible, not required). Design-plan row **b18-4**: archetype sticky-media, hero text-left-photo-right, nav overlay, real photography with film grain, palette grey (nezumi-iro) `#6A6E70` (stone), fonts EB Garamond / Outfit, font_direction **serif**, CJK Noto Serif TC / Noto Serif JP, first_screen full-bleed-photo-info-bar, page_structure **booking-led**.

Reference (only one): **Atami Sanga, https://atami-sanga.jp/** (S5-Style #12116, a small seaside inn, photo-led, quiet grey). Measurements are in `brand/reference-tokens.md`; token ids **(a)–(g)** are cited in [brackets] below. There are **no screenshots** (headless Chrome hung during research), so every number comes from the reference's served HTML and inline CSS, and anything marked (est.) is inferred. We borrow structure, shapes, motion, colour relationships and the key-visual concept. We do **not** copy their photos, words (mountain/sea etc.), catch copy, room names or logo.

Fixed brand facts (every page, all five languages; details in §8): **Yuragi Spa**, founded **2017**, 3 Linden Quay, Bristol BS1 4RN, United Kingdom (fictional address), +44 117 496 0418, hello@yuragi.example. Open **Tue–Sun 10:00–20:00** (last booking 18:30), closed Mondays. **4 treatment rooms + 1 soaking room + tea lounge.** Currency **GBP (£)** in every language.

---

## 1. Signature techniques (three; obvious at a glance; never soften them)

### T1. Contrast-word triplet with "(01) (02) (03)" counters over a full-bleed photograph (atami-sanga first screen [f])
- Reference: on a full-bleed sea photograph, three pairs of opposing words (mountain/sea, people/nature, everyday/non-everyday). Each pair has a parenthesised counter "(01)", "(02)", "(03)", and the pairs are revealed as you scroll. The type is white on the photo, with a "( Scroll )" cue at the bottom. The story: opposites dissolve into one quiet stay.
- Yuragi: three pairs, our own words, about what an hour at a spa holds:
  - `(01)` **Warm ── Cool** (warm stones / cool linen)
  - `(02)` **Touch ── Silence**
  - `(03)` **The week ── One hour**
  The two words are joined by the reference's **72×4 px dash mark** [f] (inline SVG `<svg width="72" height="4"><rect width="72" height="1.5" y="1.25" fill="currentColor"/></svg>`, vertically centred on the x-height, 0.4em margin each side).
- Type: words EB Garamond 400, preset `xx-large` = `clamp(2.5rem, 5.4vw, 4.5rem)` (the theme's max size; at 1440 it is 4.5rem = 72 px), line-height 1.18, letter-spacing 0.01em, colour `#FFFFFF`. Counters Outfit 400 0.8125rem, letter-spacing 0.14em, colour `#FFFFFF` at 70%, set on the first word's baseline, 16 px to the left (desktop: `display:inline-block; width:3.2em`, in the normal flow, **not** absolutely positioned).
- Position (1440×900): the left column of the hero, `padding-left: 7vw` (≈100 px), the block's top at 30% of the photo's height. The triplet is the H1 visually (wrap it in `<h1 class="yu-pairs">`, one `<span class="yu-pair">` per line). Beneath it: a 1-line italic subline in EB Garamond italic 1.1875rem white, "One quiet hour, held for you." (en; localised later), 28 px gap.
- Motion (from the reference's reveal, done as a **CSS time loop**; no scroll listener and no JS): `.yu-pair` opacity cycles between 0.42 and 1 so that **one pair is lit at a time**. 9 s loop, each pair lit for 3 s, `animation: yu-lit 9s cubic-bezier(0.07,0.36,0.66,0.97) infinite`, delays 0 s / 3 s / 6 s. Keyframes: 0% 0.42 → 6% 1 → 30% 1 → 36% 0.42 → 100% 0.42. The counter of the lit pair goes from 70% to 100% on the same timing. Wrap it in `@media (prefers-reduced-motion: no-preference)` and `html:not(.sp-no-motion)`. **Static final state** (`?sp-static`, reduced motion, editor, no JS): pair (01) at opacity 1, pairs (02) and (03) at 0.6, so all text is readable and the screenshot still shows the "one lit" idea.
- Mobile (390×844): words `2.5rem` (40 px), one pair per line, the dash shortened to 40×4 px; counters inline before each pair (same line, `width:2.6em`). All of this is in the normal flow inside the cover's inner container. Nothing is vertical, absolute or overlapping.
- Must not be diluted: three pairs, each with its counter and the dash mark; white type ≥ 4.25rem at 1440, sitting **on** the photograph (not on a panel); exactly one pair visibly brighter than the other two at any moment.

### T2. Lenticular-bracket section labels [ ] with an English italic subline (atami-sanga section labels [ a section name in Japanese ] [f])
- Reference: every section opens with a small label in lenticular brackets, a two-line heading under it, and a Latin italic subline in a wide-set, quiet tone. Ink on a pale grey or white ground. No highlight, no marquee.
- Yuragi markup (pattern `yu-label`, used in **every** home section after the hero and at **every** inner page head):
  1. `p.yu-bracket`: `[ Treatments ]`. Outfit 500 0.8125rem, letter-spacing 0.24em, uppercase Latin, colour `#1A1A1A`. The brackets are `::before { content:"\3010"; }` / `::after { content:"\3011"; }` in the font family **"Yuragi Brackets"**: a theme.json fontFace built from Noto Serif JP with `unicode-range: U+3010-3011` (a tiny file, so it loads in the editor too). Bracket glyph colour `#6A6E70`; 0.6em gap between bracket and word.
  2. Heading (`h2`): EB Garamond 400, `x-large` = `clamp(2rem, 3.4vw, 2.5rem)` (40 px at 1440 = the reference's largest section heading, 40 px [b]), line-height 1.35, colour `#1A1A1A`, two lines in en (`<br>`), 20 px under the label.
  3. `p.yu-sub`: the English italic subline, EB Garamond italic 1.1875rem (19 px lead size [b]), colour `#616161`, letter-spacing 0.02em, 14 px under the heading. It stays **English in all five languages** (it is a design element, like the reference's Latin sublines). The label word and heading are localised: zh-TW/ja labels use local words inside the brackets (the Chinese and Japanese words for "Treatments").
- Alignment: left-aligned to the content column (max 1200 px, 7vw side padding), never centred. Exception: the closing booking block, where the label sits at the top of its own column.
- Must not be diluted: real lenticular brackets (filled, not `[ ]` or `( )`), mid-grey brackets with ink word, an italic Latin subline on every label, and labels present on every section and every inner page.

### T3. Ultra-wide 3.75:1 letterbox photo band with a small caption card (atami-sanga 1448×386 band [e])
- Reference: one photograph at 1448×386 (3.75:1), full bleed, square corners, sits between sections like a held breath.
- Yuragi: pattern `yu-letterbox`: an `alignfull` Group with class `sp-parallax`, and in it a `figure > img` with `aspect-ratio: 3.75 / 1` (at 1440: 1440×384), `object-fit: cover`, square corners (`border-radius: 0` [d]), no overlay. The caption card overlaps the band's **bottom-left**: `#FFFFFF`, width 360 px, padding 28 px 32 px, starting at x = 7vw and dropping 48 px below the band's lower edge (`margin-top:-96px` on a following Group with `position:relative; z-index:2`; the card itself is in the normal flow). Contents: counter "(04)" in Outfit 0.75rem `#616161`, then one sentence in EB Garamond 1.25rem `#1A1A1A`, then a 72×4 dash mark.
- Parallax: `--sp-par: 10%` desktop, `6%` below 782 px (see §6).
- Mobile: the band's aspect becomes `2.2 / 1` (390×177) so it does not become a sliver; the card goes full width minus 40 px, `margin-top:-32px`, still in the normal flow.
- Must not be diluted: the band really is 3.75:1 at ≥ 782 px, edge to edge with square corners; the white card overlaps the lower edge; it appears on the home page once and on at least four inner pages.

### Supporting (not counted; also from the reference)
- "( Scroll )" cue at bottom-left of the hero photo [f]: Outfit 0.75rem, letter-spacing 0.2em, white, above a 1 px × 48 px white line. Opacity loop 0.4↔1 over 2.4 s ease-in-out (same reduced-motion guards; static = 1). Hidden below 782 px.
- Looped treatment-name row [f]: `sp-marquee` (see §6).
- The (01)–(0n) counters reappear as list numbering (booking parts, treatments, guest notes, FAQ).
- Hairlines 1 px `#DDDDDD` between list rows [d].

### Continuation to inner pages (all 10 pages)
Every inner page opens with the **page head** (pattern `yu-page-head`): a full-width `#F2F2F2` band, padding 160 px top (under the overlay header) / 72 px bottom. Left 7/12: T2 label + two-line heading (on page heads only: preset `x-large`, then 40 px) + italic subline. Right 5/12, aligned to the bottom: **one T1 contrast pair** with its counter, EB Garamond 2.5rem `#1A1A1A`, dash mark `#6A6E70` (the pair is fixed per page, below). Inner page heads have no photo, so the first photo on each page is the next block.

| Page | T1 echo (pair in the page head + counters in the body) | T2 labels | T3 letterbox band (image) |
|---|---|---|---|
| Treatments | (01) Warm ── Cool; treatment sections numbered (01)–(06) | head + each section | yes, between treatments 3 and 4 (Y09) |
| Rooms | (02) Light ── Shade; rooms numbered (01)–(06) | head + sections | yes, after the soaking room (Y08) |
| Booking | (03) The week ── One hour; the four parts (01)–(04) | head + sections | yes, before the cancellation note (Y09) |
| First visit | (01) Arrive ── Settle; arrival notes (01)–(04) | head + sections | yes (Y08) |
| People | (02) Hands ── Quiet | head + sections | no |
| About | (03) City ── Stillness | head + sections | yes (Y09) |
| Gift vouchers | (01) Give ── Rest | head | no |
| Journal (index, archive, single) | (02) Notes ── Rooms (index/archive); single: counter = post number | head | no |
| Questions | (03) Ask ── Ease; questions numbered (01)–(10) | head | no |
| Visit & contact | (01) Street ── Room | head + sections | yes (Y08) |

T3 appears on 6 inner pages and T1/T2 on all 10.

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
Atami Sanga's first screen is **one full-bleed photograph of the sea seen from the inn**, with **three pairs of opposing words** set in white, each with a "(01) (02) (03)" counter, and a "( Scroll )" cue. The **story** is "a place where time simply lingers": mountain and sea, people and nature, everyday and non-everyday stop being opposites for the length of a stay. The **signature motion** is scroll-linked: the word pairs and the photograph are revealed with CSS `view()` scroll-driven animations, with easing `cubic-bezier(0.07,0.36,0.66,0.97)` [g], and the photo drifts slowly. Below the fold, a strip carries the inn's practical facts and a reserve link.

### (2) Our translation (day spa, same composition, same motion idea, same image type: real photography)
**Scene:** a film-grain photograph of **a therapist folding a white cotton towel at the foot of a treatment bed**, in a quiet room with window light. The therapist and bed are in the **right 55%** of the frame (text-left-photo-right). The **left 45%** is a plain pale plaster wall in soft shade, where the white words sit, just as Atami Sanga's words sit on open sea and sky.
**Story:** "one quiet hour, held for you". The opposites that an hour dissolves (warm/cool, touch/silence, the week/one hour) take the place of mountain/sea.
**Motion:** the photograph drifts on scroll (`sp-parallax`, the reference's photo drift). The three pairs light up one at a time, translating the reference's word-by-word reveal into a gentle loop, because the hero must be fully visible without scrolling. Below the photo, the **info bar** carries hours, rooms, address and "Book a time": the reference's facts strip turned into the row's full-bleed-photo-info-bar.

### (3) KV checklist (every row is built on the first screen and visible at 1440×900 and 390×844)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Full-bleed sea photograph | Film-grain photo: therapist folding a towel at the foot of the treatment bed, full bleed | whole first screen above the info bar (desktop `calc(100svh - 76px)`, min 640 px; mobile 560 px) | `sp-parallax`, `--sp-par: 8%` (mobile 5%) | **Y01** |
| 2 | Three opposing word pairs (mountain/sea…) | Warm ── Cool / Touch ── Silence / The week ── One hour, white EB Garamond 4.5rem with 72×4 dash | left column, top at 30% of photo height, left 7vw | one pair lit at a time, 9 s CSS loop; static = (01) lit | Y01 (words sit on its plain wall) |
| 3 | "(01) (02) (03)" counters | same counters, Outfit 0.8125rem, white 70% | before each pair, same baseline | lit pair's counter goes to 100% | — |
| 4 | Facts strip + reserve link | Info bar `#F2F2F2`, 76 px: hours · rooms · address · **Book a time** (accent cell) | bottom edge of first screen, full width | none | — |
| 5 | "( Scroll )" cue | "( Scroll )" + 1×48 px line | bottom-left of the photo, 7vw from left, 32 px above the info bar (desktop only) | opacity loop 2.4 s | — |
| 6 | Italic Latin subline | "One quiet hour, held for you.", EB Garamond italic 1.1875rem white | 28 px under the triplet | none (static) | — |

Y01 is in the image list (§7) and marked as the home hero.

---

## 3. Colour (reference colour codes; ±5% lightness at most)

| Role | Hex | Source | Use | Share of a page |
|---|---|---|---|---|
| Base | `#FFFFFF` | ref page ground [a] | page ground, caption cards | ≈ 30% |
| Pale grey | `#F2F2F2` | ref panels [a] | info bar, page heads, booking block, footer | ≈ 20% |
| Pale grey 2 | `#F5F5F5` | ref panels [a] | alternate band (people block), table zebra | ≈ 5% |
| Hairline | `#DDDDDD` | ref `#EEEEEE` darkened 5% so it shows on `#F2F2F2` [a][d] | 1 px rules | — |
| Ink | `#1A1A1A` | ref ink [a] | headings, buttons, footer text | ≈ 8% |
| Text | `#333333` | ref body [a] | body copy | — |
| Mid grey | `#616161` | ref mid [a] | sublines, captions, meta | — |
| Stone (main) | `#6A6E70` | plan row grey (nezumi-iro) (sits between ref `#616161` and `#757575`) | bracket glyphs, dash marks, marquee words, info-bar dividers on hover, link underline | ≈ 3% |
| Accent | `#9C5B46` | **changed**: the reference's only chroma is a UI blue `#007CFF` (forms only). Blue reads clinical for a spa, so it becomes a muted clay at the same tiny share | "Book a time" cell in the info bar, primary buttons, focus ring | ≤ 2% |
| Photos | — | ref photo share ≈ 60% [a] | photos are graded muted grey / stone / off-white | ≈ 35–40% |

- Not beige-led: the ground is white and `#F2F2F2` (neutral grey), never cream.
- Contrast: `#333333` on `#FFFFFF` 12.6:1; `#616161` on `#F2F2F2` 5.4:1; white on `#9C5B46` 5.3:1; white hero words on the shaded wall: grade Y01 so the left 45% sits at L* 45–58, and add the overlay `linear-gradient(90deg, rgba(26,26,26,.34) 0%, rgba(26,26,26,.14) 45%, rgba(26,26,26,0) 70%)` (neutral, so saturation is unchanged).
- **First-screen saturated share: target ≤ 4%, hard limit 15%** (`scripts/check-first-screen.py`; the reference is est. 0–3%). Only the accent cell (220×76 px ≈ 1.3% at 1440×900) and the photo's faint warm wood are chromatic.

## 4. Type (font_direction **serif**)

- Latin headings / display / italic sublines: **EB Garamond** 400 and 400 italic (500 for the logo).
- Latin body / UI / labels / counters: **Outfit** 300/400/500 (the plan row pairs it with EB Garamond; serif headings, quiet geometric UI).
- zh-TW: headings **and** body **Noto Serif TC** ; ja: headings and body **Noto Serif JP** . No Noto Sans anywhere, and mincho and gothic are not mixed.
- Stacks (theme.json `fontFamilies`):
  - `serif`: `"EB Garamond", "Noto Serif TC", "Noto Serif JP", "Songti TC", "Hiragino Mincho ProN", Georgia, serif`
  - `sans` (body): `"Outfit", "Noto Serif TC", "Noto Serif JP", system-ui, sans-serif`. Latin body is Outfit; CJK characters fall through to the mincho faces. On `:lang(zh-TW)` / `:lang(ja)` put the Noto Serif face **first** for body and headings.
  - `brackets`: `"Yuragi Brackets"` (U+3010–3011 only, see T2).
- All faces load through **theme.json `fontFace`** (woff2 in `assets/fonts/`): EB Garamond 400/400i/500, Outfit 300/400/500, Noto Serif TC 400/600 zh-TW subset, Noto Serif JP 400/600 ja subset, Yuragi Brackets. The editor and the front end use the same faces. Because style.css has `:lang(` rules, copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it. The CJK subset script is known to be broken; follow the Hokuto/Hada workaround.
- Sizes (theme.json presets; reference sizes in [b]):

| Preset | Value | Source / use |
|---|---|---|
| small | 0.875rem (14 px) | ref captions 14/15 px; meta, counters, info bar |
| base | 1rem (16 px) | ref body 16 px; body, line-height 1.9 (CJK 1.85) |
| medium | 1.1875rem (19 px) | ref lead 18–19 px; italic sublines, lead paragraphs |
| large | 1.5rem (24 px) | ref 24 px; treatment names, card titles |
| x-large | clamp(2rem, 3.4vw, 2.5rem) (32→40 px) | ref 32/40 px; section headings (h2) |
| xx-large | clamp(2.5rem, 5.4vw, 4.5rem) (**max 4.5rem**, meets the ≥ 4.25rem rule) | hero contrast triplet only |

- Headings: weight 400, line-height 1.35 (hero 1.18), letter-spacing 0.01em. Labels: letter-spacing 0.24em [b]. CJK: headings ≈ 0.75× the en size (hero ja/zh 3.25rem max), letter-spacing 0.06em; fr/de `hyphens: auto`.

## 5. Header, footer, global

- **Header (nav overlay)**: on home it is `position:absolute` over the hero (in the normal flow on inner pages, with the same layout on top of the `#F2F2F2` page head). Height 88 px, padding 0 7vw. Logo wordmark "Yuragi Spa" EB Garamond 500 1.5rem, letter-spacing 0.04em. Nav: Outfit 400 0.8125rem, letter-spacing 0.14em, uppercase (en/fr/de): Treatments, Rooms, Booking, People, Journal, Visit, then a text link "Book ↗" with a 1 px underline. On home: white type over the photo; on inner pages: ink. One top menu only. Under 960 px a two-line menu icon (24×8 px) opens the core overlay (white ground, ink, items EB Garamond 1.75rem).
- **Footer**: `#F2F2F2`, 1 px `#DDDDDD` top rule; four columns: logo + 30-word line; address + phone + email; hours; nav. Bottom row: © 2026 Yuragi Spa, small 0.75rem `#616161`. No dark footer (the reference has none).
- Radius 0 on photos and cards, **2 px** on buttons, 6 px only on form inputs [d]. No shadows anywhere [d].
- Buttons: primary = `#9C5B46` ground, white Outfit 500 0.875rem, letter-spacing 0.12em, padding 16 px 32 px, radius 2 px; hover `#8A4F3C`. Secondary = text link with a 72×4 dash mark before it, ink, underline on hover.
- Spacing: section padding `clamp(96px, 12vw, 168px)` top and bottom (generous vertical rhythm [c]); copy column max 640 px; content max 1200 px.

---

## 6. Scroll techniques (three effects from stage-a candidates; sp-scroll copied verbatim)

| Effect | sp class | Where | Reference source and timing | Our values |
|---|---|---|---|---|
| Section copy/photo reveal | `sp-reveal sp-reveal--up` (lists use parent `sp-stagger`) | every home block from #2 on: the label group, each sticky-list entry, people rows, booking parts, guest notes, the visit columns; inner pages: section heads and photos. **Not** the hero, not the price table, not forms or legal text. | atami-sanga: CSS `animation-timeline: view()`, range entry 0%–100%, easing `cubic-bezier(0.07,0.36,0.66,0.97)` [g] | `--sp-ease: cubic-bezier(0.07,0.36,0.66,0.97)`, `--sp-dur: 1.1s`, `--sp-dist: 24px`; stagger 0.12 s (sp default) |
| Photo drift | `sp-parallax` | home hero (Y01), home letterbox band (Y08), inner-page letterbox bands | atami-sanga: scroll-driven photo drift, linear with easing baked in [g] | hero `--sp-par: 8%`, letterbox `10%`; below 782 px hero `5%`, letterbox `6%` |
| Looped name row | `sp-marquee` | home block #3: a looped row of the six treatment names | atami-sanga: looped room-name row [f], linear, continuous | sp default 30 s linear infinite; duplicate inner group `aria-hidden="true"`; the row's container may get `sp-reveal--up`, its children may not |

At most these three effects on any page. Sticky (block #4) is plain CSS `position: sticky`, not a counted effect; its ancestors use `overflow: clip`, never `hidden`.

### Parallax (required)
- **Where:** home block #1 (hero cover). The outer Cover block gets `sp-parallax`; the moving layer is the Cover background `.wp-block-cover__image-background` = **Y01**. Foreground (words, counters, subline, scroll cue) is in the Cover's inner container and **does not move**. The info bar is outside the Cover (next block), so it never moves.
- **Speed:** `--sp-par: 8%` (layer scale 1.18, sp default) at ≥ 782 px; `--sp-par: 5%` below 782 px (kept on mobile).
- **Second instance:** home block #5 letterbox Group `sp-parallax` with `figure > img` Y08, `--sp-par: 10%` / mobile 6%.
- **Reference motion it translates:** atami-sanga's scroll-driven photo drift on the first-screen sea photo and the 1448×386 band [g].
- Verified by `check-parallax.mjs` (≥ 6 px difference desktop and mobile, 0 under reduced motion).

---

## 7. Photos (18; real photography; Grok one at a time; read every image)

Imagery: **photo** (stage-a IMAGERY: film grain, high-key quiet documentary).
STYLE (this exact string on every prompt):
`documentary film photograph, 35mm film, fine visible film grain, soft natural window light, quiet high-key exposure, muted palette of warm greys, stone, off-white cotton linen and pale ash wood, very low saturation, no saturated colours, calm unposed moment, contemporary international day spa interior, plain plaster walls, diverse adults, unhurried, no text, no logos, no brand marks, no signage lettering, no Japanese elements`

No cutouts (0 transparent images). Each image ≤ 300 KB and ≤ 2000 px (letterbox images 2000×533). One readme line per image (AI-generated, CC0). Regenerate any image that shows text, logos, broken hands, a malformed face, or that drifts in style or saturation.

| ID | Subject / composition | Ratio | Used on (at most once per page) |
|---|---|---|---|
| **Y01** ★ | Therapist (linen apron, sleeves rolled) folding a white cotton towel at the foot of a treatment bed made with off-white linen; therapist and bed in the **right 55%** of the frame, the left 45% a plain plaster wall in soft shade with window light from the right; side view, three-quarter body, face turned down | 16:9 (2000×1125) | **Home hero**; Visit & contact (4:5 crop of the hands and towel) |
| **Y02** ★ | Close-up: two hands squaring the edge of a folded towel on pale wood | 4:5 | **Home #2 intro**; About; Journal post 1 |
| **Y03** ★ | Empty treatment room: bed with linen, folded blanket, window with sheer curtain, plaster wall | 4:5 | **Home #4 sticky column**; Rooms (room 01) |
| **Y04** ★ | Smooth dark warm stones on folded linen beside a ceramic basin of water | 4:5 | **Home #4 Warm Stone entry**; Treatments (03); Journal post 2 |
| **Y05** ★ | Back massage: guest lying face down under a towel, therapist's hands on the shoulder blades, seen from the side | 4:5 | **Home #4 Quiet Hour entry**; Treatments (01) |
| **Y06** ★ | Face and scalp: guest lying face up, eyes closed, therapist's fingertips at the temples, from above the head | 4:5 | **Home #4 Face & Scalp entry**; Treatments (04) |
| **Y07** ★ | Soaking room: deep grey stone bath with light steam, a stool and a folded robe, tall window | 4:5 | **Home #4 Bath & Rest entry**; Rooms (soaking room) |
| **Y08** ★ | Letterbox: a quiet corridor of four doors with linen curtains, one curtain slightly moving, morning light on the floor | 3.75:1 (2000×533) | **Home #5 band**; Rooms band; First visit band; Visit band |
| Y09 | Letterbox: tea lounge, a long low bench beneath a wide window with a pale overcast sky, two cups on a tray | 3.75:1 (2000×533) | Treatments band; Booking band; About band |
| **Y10** ★ | Tea lounge: guest in a robe holding a cup, sitting by the window, after a treatment, face in soft profile | 3:2 | **Home #9 guest notes**; First visit |
| **Y11** ★ | Reception desk: receptionist writing in a blank paper appointment book (no legible marks), a small bell, a vase with a single branch | 4:5 | **Home #6 booking**; Booking |
| **Y12** ★ | Portrait: founder Ines Kovač, 40s, linen apron, standing by a window, hands loosely clasped, looking aside | 4:5 | **Home #7 people**; About; People |
| **Y13** ★ | Two therapists preparing a linen trolley in a back room, mid-conversation, candid | 3:2 | **Home #7 people (under the list)**; People |
| **Y14** ★ | Foot & hand: guest's feet resting in a shallow ceramic bowl of warm water on a towel, therapist's hands nearby | 4:5 | **Home #4 Foot & Hand entry**; Treatments (05) |
| **Y15** ★ | Shelf of folded off-white towels with a sprig of dried cedar and a small amber-glass oil bottle with no label | 1:1 | **Home #8 this season**; Gift vouchers |
| **Y16** ★ | Entrance from the street: a plain timber door with a linen curtain, a stone step, morning light, a quiet city street | 4:5 | **Home #10 visit**; About; Visit & contact |
| Y17 | A linen robe and felt slippers on a hook and a bench, plaster wall | 4:5 | First visit; Questions; Gift vouchers; Journal post 3 |
| **Y18** ★ | Guest resting on the treatment bed under a blanket after the massage, eyes closed, room dim | 4:5 | **Home #4 Long Stillness entry**; Treatments (02) |

★ = used on the home page (16 photo positions; ≥ 8 required).

Per-page lists (binding; no repeats within a page):
- **Home (16):** Y01 · Y02 · Y03 · Y05 · Y18 · Y04 · Y06 · Y14 · Y07 · Y08 · Y11 · Y12 · Y13 · Y15 · Y10 · Y16.
- Treatments: Y05 · Y18 · Y04 · Y09 (band) · Y06 · Y14 (entry 06 Bath & Rest is text-only and links to Rooms, where Y07 is).
- Rooms: Y03 · Y07 · Y08 (band).
- Booking: Y11 · Y09 (band).
- First visit: Y08 (band) · Y17 · Y10.
- People: Y12 · Y13.
- About: Y02 · Y09 (band) · Y16.
- Gift vouchers: Y15 · Y17.
- Journal: post featured images Y02 · Y04 · Y17 (each once on index/archive).
- Questions: Y17.
- Visit & contact: Y01 (4:5 crop) · Y08 (band) · Y16.

---

## 8. Home page (en first; ≥ 250 words, ≥ 3 narrative paragraphs)

### First screen (1440×900)
- Header overlay (88 px, white type) on top of the Cover.
- Cover `alignfull sp-parallax`, height `calc(100svh - 76px)` (min 640 px), background **Y01**, overlay gradient (§3), `object-position: 62% 50%` so the therapist stays right of centre. Inner content: left column (max 46vw): T1 triplet (H1) + subline. "( Scroll )" cue bottom-left.
- **Info bar** (block #1b, directly under the Cover, `alignfull`, not inside it): `#F2F2F2`, height 76 px, 4 cells separated by 1 px `#DDDDDD` vertical rules, Outfit 0.875rem `#333333`, letter-spacing 0.06em: `Tue–Sun 10:00–20:00` | `4 rooms · 1 soaking room` | `3 Linden Quay, Bristol` | **Book a time →** (cell 220 px wide, ground `#9C5B46`, white, links to /booking/). Mobile: two rows of two cells (hours | rooms; address | Book), 56 px each, still in the normal flow below the photo; the Cover is 560 px tall on mobile.
- Forbidden on the first screen: tables, forms, search boxes, giant centred words, cutouts, any vertical or absolutely positioned label over text (mobile).

### Block order
| # | Pattern | Purpose | Layout and photos | Copy |
|---|---|---|---|---|
| 1 | `yu-hero` + `yu-infobar` | key visual + booking entry | as above; Y01 | ~25 words |
| 2 | `yu-intro` | what Yuragi is | white. Left 6/12: T2 [ Yuragi ] / "A short list, / quiet rooms." / *A place to set the week down*; two narrative paragraphs. Right 4/12 (offset one column, `align-self:end`): Y02 4:5, caption Outfit 0.875rem `#616161` "Every towel is folded by hand between guests." | **110 words** (narrative 1) |
| 3 | `yu-names` | the reference's looped name row | full bleed, white, 1 px `#DDDDDD` rules above and below, padding 28 px: `sp-marquee` row "Quiet Hour Massage ── Long Stillness ── Warm Stone Back Ritual ── Face & Scalp Rest ── Foot & Hand Calm ── Bath & Rest ──", EB Garamond italic 2.5rem `#6A6E70`, dash = 72×4 mark | names only |
| 4 | `yu-treatments` | **sticky-media** (archetype): what is offered this season | `#FFFFFF`. Two columns 5/12 + 6/12 (gap 1/12). **Left, sticky** (`position:sticky; top:120px`): T2 [ Treatments ] / "Six treatments, / one at a time." / *What is offered this season*; 50-word paragraph; Y03 4:5 at 100% column width (max 440 px); secondary link "All treatments and prices". **Right, scrolling list**: 6 entries, each a row: counter (01)–(06) Outfit 0.8125rem `#616161` · photo 4:5 at 38% of the column · text: name (EB Garamond `large` 1.5rem), "60 min · £85" (Outfit 0.9375rem, `white-space:nowrap`), two lines of description. Rows separated by 1 px `#DDDDDD`, padding 40 px 0. Photos: (01) Y05, (02) Y18, (03) Y04, (04) Y06, (05) Y14, (06) Y07. Mobile: the sticky column becomes static and goes first; entries stack photo-above-text (photo 100% width, 4:5 → 3:2 crop). | 50 + 6 × 30 words |
| 5 | `yu-letterbox` | breath between sections (**T3**) | full-bleed Y08 3.75:1, `sp-parallax 10%`; caption card "(04) Four rooms and one bath. The linen is changed for every guest." | 14 words |
| 6 | `yu-booking` | **how a time is held** (booking-led) | `#F2F2F2` band. Left 6/12: T2 [ Booking ] / "How a time / is held for you." / *Four quiet steps*; then four text rows (not a grid, no connecting line), each: counter (01)–(04) + title EB Garamond 1.25rem + one sentence, 1 px rules: (01) Choose a treatment, (02) Hold a time online or by phone, (03) Arrive fifteen minutes early for tea, (04) Stay in the lounge as long as you like. Primary button "Book a time" + secondary "First visit notes". Right 5/12: Y11 4:5. | **90 words** (narrative 2) |
| 7 | `yu-people` | **who is in the rooms** | `#F5F5F5`. Left 5/12: Y12 4:5, caption "Ines Kovač, founder". Right 6/12: T2 [ People ] / "Seven people, / four rooms." / *Who is in the rooms*; a 70-word paragraph in Ines's voice (narrative 3); then a **name list** of the 7 people (rows: name EB Garamond 1.25rem, role Outfit 0.875rem `#616161`, right-aligned years with Yuragi), 1 px rules; under the list Y13 3:2 at 100% column width. No portrait grid. | **70 + 7 rows** |
| 8 | `yu-season` | this season's note (and gift vouchers) | white. Left 6/12: T2 [ This season ] / "Cedar oil, / warm stones." / *Autumn and winter*; 60 words on the autumn Warm Stone Back Ritual (same £98, 75 min) and gift vouchers (valid 12 months); link "Gift vouchers". Right 5/12: Y15 1:1. | 60 words |
| 9 | `yu-notes` | guest notes (3 stories) | white, 1 px top rule. Left 5/12: Y10 3:2. Right 6/12: T2 [ Guest notes ] / "After the hour." / *In their own words*; three short notes stacked, each: counter (01)–(03), 35-word quote in EB Garamond italic 1.1875rem, first name + city in Outfit 0.8125rem. | 3 × 35 words |
| 10 | `yu-visit` | visit + book (close) | `#F2F2F2`. Left 5/12: Y16 4:5. Right 6/12: T2 [ Visit ] / "3 Linden Quay, / Bristol." / *Find the linen curtain*; address, phone, email, hours as a definition list (Outfit 1rem, rules); 40-word directions; primary button "Book a time" + secondary "Visit & contact". | 60 words |

Home word count (en): ≈ 600 words. Narrative paragraphs in #2, #6 and #7. CJK home ≥ 500 characters.

### Comparison with recent themes (block order)
| # | Tsuya Jewellers | Kairo Supply | Sekisan Partners | Shisei Clinic | **Yuragi Spa** |
|---|---|---|---|---|---|
| 1 | framed hero + caption strip | hero with diagonal band | full-bleed hero | arch hero + giant wordmark | **full-bleed photo + contrast-word triplet + info bar** |
| 2 | offset pair | pinned stage + cards | news panel over photo | concept narrative | **intro narrative + small photo** |
| 3 | pieces tiles | doors | … | … | **looped treatment-name row** |
| 4 | commissions strip | … | 16:9 wipe + stages | … | **sticky-media treatment list** |
| 5 | … | … | fee table | two full-bleed treatment panels | **3.75:1 letterbox band + caption card** |
| 6 | … | morning Cover | dark request | hours card | **booking: four text rows + photo** |
| 7 | visit | request | — | — | **people: portrait + name list** |
| 8–10 | — | — | — | — | **season · guest notes · visit** |

Why it is not alike: no framed/arch/diagonal hero and no giant wordmark; the hero's idea is the word triplet with counters, which no recent theme uses. The treatments are a sticky list, not tiles, panels or a fee table. The only full-bleed photo after the hero is a 3.75:1 letterbox (Sekisan uses 16:9 wipe, Shisei two tall panels). The signature shapes (lenticular brackets, counters with 72×4 dashes, letterbox + white card) are not in Tsuya (caption strip, offset pair), Kairo (diagonal band, pinned stage), Sekisan (news panel, wipe) or Shisei (arch, oval ghosts, pill bar). There is no dark block anywhere.

---

## 9. Inner pages (10)

Each page = `yu-page-head` (T2 + T1 pair) → body → small close: "Book a time" button + Visit line. No sidebar. Section labels inside pages use T2.

1. **Treatments** (`/treatments/`, the core). The full **price list** (6 items, §10) as a `core/table` with class `yu-prices`. At ≥ 782 px it spans the full content width (1200 px): columns Treatment (60%) | Duration (20%) | Price (20%, `text-align:right; white-space:nowrap`), Outfit 1rem, rows 64 px, 1 px `#DDDDDD` rules, zebra `#F5F5F5`, no reveal on the table. Then six treatment sections (01)–(06) with photo 4:5 left / text right, alternating sides (Y05, Y18, Y04, [Y09 letterbox band], Y06, Y14; (06) Bath & Rest text-only linking to Rooms). Each section lists what happens, the oils used, and who it suits. Note: "Please tell us about pregnancy, recent injuries or medication when booking." No health claims.
2. **Rooms** (`/rooms/`): 4 treatment rooms (01 Linen, 02 Cedar, 03 Clay, 04 Window), 1 soaking room, tea lounge: each a short paragraph. Y03 (room 01), Y07 (soaking room), Y08 band; rooms list as rows with counters.
3. **Booking** (`/booking/`, booking-led): the four parts (01)–(04) in detail; how to hold a time (online form placeholder / phone +44 117 496 0418 / email); deposit-free; **cancellation**: free until 24 hours before, within 24 hours 50% of the treatment price; vouchers; Y11, Y09 band before the cancellation note. A simple contact form is allowed here (off the first screen; no reveal).
4. **First visit** (`/first-visit/`): arrive 15 minutes early; a short health questionnaire on paper; what to wear (robe and slippers provided); phones stay in the lounge lockers; after: 20 minutes of tea in the lounge. Y08 band, Y17, Y10.
5. **People** (`/people/`): 7 people as **name rows** (name, role, since, 40-word note), Y12 founder portrait beside Ines's row, Y13 beside the list. No portrait grid.
6. **About** (`/about/`): founded 2017 by Ines Kovač in a former linen store on Linden Quay; why a short list; why four rooms; how we keep rooms quiet (12-minute reset between guests). Y02, Y09 band, Y16.
7. **Gift vouchers** (`/gifts/`): a voucher for any treatment on the list, at its listed price, valid 12 months, sent by email or posted in a plain card. Y15, Y17. No shop needed.
8. **Journal** (`home.html`, `archive.html`, `single.html`): 3 posts (§10). Index: first post large (image 7/12 left), then two cards. Single: T2 label = category, title `x-large`, date only, featured image 4:5 max 720 px, text column 640 px.
9. **Questions** (`/questions/`): 10 Q&A as `details/summary` with counters (01)–(10): what to wear, arriving late, couples (no couples rooms: one guest per room), pregnancy, age (18+), allergies to oils, tipping (not expected), accessibility (step-free entrance, ground-floor room 04), lockers, cancellation. Y17.
10. **Visit & contact** (`/visit/`): address, directions without a map ("five minutes on foot from the central station, along the quay; look for the linen curtain"), hours, phone, email; Y01 4:5 crop, Y08 band, Y16.
Plus 404 / search: page head with pair "(01) Lost ── Found" and a link home.

---

## 10. Fixed numbers (identical on every page, in the footer and in all five languages)

**Treatments and prices (6):**
| # | Treatment | Duration | Price |
|---|---|---|---|
| 01 | Quiet Hour Massage | 60 min | £85 |
| 02 | Long Stillness Massage | 90 min | £120 |
| 03 | Warm Stone Back Ritual | 75 min | £98 |
| 04 | Face & Scalp Rest | 50 min | £72 |
| 05 | Foot & Hand Calm | 45 min | £58 |
| 06 | Bath & Rest (private soaking room 40 min + Quiet Hour Massage) | 120 min | £150 |

**People (7):** Ines Kovač (founder, therapist, since 2017) · Theo Marchetti (lead therapist, 2017) · Amara Osei (therapist, face & scalp, 2018) · Lena Hoffmann (therapist, 2019) · Rafael Ortega (therapist, warm stones, 2020) · Mei Lin Park (bookings & reception, 2019) · Sunniva Berg (rooms & tea lounge host, 2021).

**Guest notes (3, fictional, experiential, no efficacy claims):** (01) Hannah, Bristol: the hour after a long project; (02) Tomás, Cardiff: first visit, the tea lounge; (03) Priya, Bath: a Bath & Rest gift from her sister.

**Journal (3 posts):** "Why we still fold every towel by hand" (Y02) · "A note on warm stones" (Y04) · "The first fifteen minutes" (Y17).

**Place and hours:** 3 Linden Quay, Bristol BS1 4RN, United Kingdom (fictional) · +44 117 496 0418 · hello@yuragi.example · Tue–Sun 10:00–20:00, last booking 18:30, closed Mondays · 4 treatment rooms + 1 soaking room + tea lounge · founded 2017.

**Booking flow (4):** choose a treatment → hold a time (online, phone or email) → arrive 15 minutes early for tea → rest in the lounge afterwards (about 20 minutes, no limit). Cancellation free until 24 h before; within 24 h, 50% of the price. Gift vouchers valid 12 months. Rooms reset for 12 minutes between guests. Guests 18+.

Currency is £ in every language (no conversion). ja/zh-TW write 60 min in Japanese and Chinese and £85.

---

## 11. Responsive rules

- **390 px first screen:** the triplet, counters and subline are in the normal flow inside the Cover's container; no vertical text, no absolutely positioned labels, no text over text; the scroll cue is hidden; the info bar is a 2×2 grid below the photo. Header 64 px, logo 1.25rem, menu icon.
- **Price table (`yu-prices`) at ≥ 782 px:** full content width (`width:100%`, the table block `alignwide` or full container), price column `white-space:nowrap; text-align:right`, no cut-off at 800 and 1280. `table-layout: fixed` with the 60/20/20 columns.
- **Every table on mobile (< 782 px) stacks:** each row becomes a block (`display:block`); the cells stack as name (1.125rem) / "duration · price" on one line with the price nowrap, separated by 1 px rules. The `<thead>` is visually hidden.
- No horizontal overflow at 390 and 1280 (`html, body { overflow-x: clip }`); the marquee wrapper is `overflow: clip`.
- The sticky column turns static below 960 px.
- The letterbox is 3.75:1 at ≥ 782 px and 2.2:1 below.

## 12. Home acceptance checklist

1. First screen at 1440×900: Y01 full bleed, therapist folding a towel on the right, the white triplet (01)(02)(03) with 72×4 dashes on the left at ≥ 4.25rem, one pair brighter; italic subline; "( Scroll )" cue; `#F2F2F2` info bar with hours, rooms, address and the clay "Book a time" cell. No table, form, search box or giant centred word.
2. `check-first-screen.py` saturated share ≤ 15% (expected ≤ 4%).
3. [ ] bracket label + two-line heading + English italic subline on every home block from #2 to #10 (the marquee row #3 is exempt).
4. Sticky-media block #4: left column sticks while 6 entries scroll; prices exactly as §10, nowrap.
5. Letterbox band #5 is 3.75:1 full bleed with square corners and the white caption card overlapping its bottom-left.
6. `sp-parallax` on the hero (Y01) and letterbox (Y08); `check-parallax.mjs` passes desktop and mobile; reduced motion = no movement.
7. `sp-reveal--up` on blocks #2–#10 (not the hero), `sp-marquee` on #3; at most 3 effect types; `?sp-motion` scrolled to the bottom leaves nothing hidden.
8. 16 photo positions, no image twice, all in the same film-grain STYLE, no text, logos or broken hands.
9. Colours as §3: white/`#F2F2F2` ground, ink `#1A1A1A`, stone `#6A6E70` for brackets and dashes, clay `#9C5B46` only on booking buttons; no beige-led page, no dark section.
10. Type: EB Garamond headings, Outfit body, zh/ja Noto Serif; fonts via theme.json fontFace; editor = front end.
11. 390 px: no overlap or vertical labels in the first screen; tables stack; no horizontal scroll. ≥ 782 px price table full width with the price column visible.
12. Home ≥ 250 words with 3 narrative paragraphs; numbers equal §10.

---

## 13. Similarity target (≈ 80% of the reference's look; values from reference-tokens.md)

| Dimension | Reference value [token] | Yuragi value |
|---|---|---|
| Page ground | pale grey `#F2F2F2`/`#F5F5F5` + white [a] | `#FFFFFF` / `#F2F2F2` / `#F5F5F5` |
| Ink / text / mid | `#1A1A1A` / `#333333` / `#616161` [a] | same |
| Hairline | `#EEEEEE` 1–2 px [a][d] | `#DDDDDD` 1 px (−5% L for contrast on `#F2F2F2`) |
| Chroma | none except UI blue `#007CFF` [a] | clay `#9C5B46` ≤ 2% (justified §3) + stone `#6A6E70` (plan row) |
| Area | photo 60 / grey 30 / ink 10 (est.) [a] | photo 35–40 / white+grey 50–55 / ink 8 / stone+clay ≤ 5 |
| Body / caption / lead | 16 / 14–15 / 18–19 px [b] | 16 / 14 / 19 px |
| Headings | 24 / 32 / 40 px, mincho [b] | 24 / 32→40 px EB Garamond 400 (CJK Noto Serif) |
| Hero words | paired words, white, large (est.) [f] | 4.5rem white, 3 pairs |
| Labels | [ ] + Latin italic subline, wide tracking [b][f] | same, 0.24em tracking, italic 19 px subline |
| Radius / shadow | 0–2 px, 6 px UI; no shadow [d] | 0 photos, 2 px buttons, 6 px inputs; no shadow |
| Image ratios | 0.9 cards (462×510), 216×234, 3.75:1 band [e] | 4:5 (0.8) cards/entries, 1:1, 3:2, 3.75:1 band |
| Image treatment | full bleed, square corners, sea/rooms [e] | full bleed, square corners, film grain, spa rooms |
| Decoration | (01)(02)(03), [ ], 72×4 dash, ( Scroll ), looped names [f] | all five, same sizes |
| Motion | view() scroll-driven, entry 0–100%, `cubic-bezier(0.07,0.36,0.66,0.97)` [g] | sp-reveal--up with that easing, 1.1 s, 24 px; parallax 8%/10% |
| Layout | single centred copy column, generous padding (est.) [c] | 640 px copy column inside 1200 px, section padding 96–168 px |

Photos, words and logo are our own; nothing is taken from the reference's materials.
