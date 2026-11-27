# Design spec: Sazanami Hotel (sazanami-hotel)

Plan row b41-3 · archetype editorial-magazine · nav centered · type business (WooCommerce-compatible, not required) · page_structure booking-led · five languages (en, zh-TW, ja, fr, de).
Reference: https://kei-kusatsu.com/ (small hot-spring inn; S5-Style hotel / ryokan). No secondary site. Measurements: `reference-tokens.md` (cited as `tok(a)`…`tok(g)`). Screenshots: `ref/kei-first.png`, `ref/scroll-kei-*.png`.
Imagery: **photo** (IMAGERY = photo in stage-a.md) — film-grain natural-light documentary stills, made by us. Nothing from the reference (photos, text, logo, code) is copied.

Working setting (fictional, international-neutral): **Sazanami Hotel, 14 Shore Lane, Lake Mirren**. A 1930s timber boathouse rebuilt in 2011 into seven rooms in one row, every room facing the water.

---

## 1. Signature techniques (all three visible on the home page at full strength)

### T1. Abutting photo pair flush to the viewport edge + narrow tracked verse column (kei "stay" / "onsen" rows; `ref/scroll-kei-1800.png`, `ref/scroll-kei-3600-after.png`)
- Reference: two 3:2 photos 570 × 380 stacked with only a 1 px hairline between them, glued to the **left viewport edge** (x 0, no gutter); the text column starts at x 798 (55 %), ~400 px wide, vertically centred on the pair; verse in short lines, 16 px, letter-spacing 0.15em, line height 30 px, 13 px between stanzas; under it a grey 12 px translation line (lh 2). 140 px of empty ground above, 120 px below (`tok(c)`).
- Home use: §H2 "stay" (pair flush **left**, verse right) and §H5 "breakfast" (mirrored: pair flush **right**, verse column starts at x 72 and ends at 45 %).
- Shape, ratio, position: photos 39.6 vw wide (570/1440) each 3:2, stacked, gap 1 px (`#EEF0F1` ground shows through as a hairline), x 0. Verse column `margin-left: 55.4vw; max-width: 400px`. No radius, border or shadow (`tok(d)`).
- Must not be softened: the pair touches the viewport edge (no padding, no container); the verse stays narrow (≤ 400 px) and widely tracked; the grey translation-style line under the verse (here: a smaller "plain note" paragraph in `#6B757D` 0.75rem lh 2) is required; ≥ 120 px empty ground above and below.
- Mobile (< 782 px): pair stays flush to both edges (full width, 1 px gap), verse below with 24 px side padding.

### T2. Dot on the current nav word + header ink that inverts over dark ground (kei header; `ref/scroll-kei-2700-band.png`, `ref/scroll-kei-room-7600.png`, `ref/scroll-kei-around-17400.png`)
- Reference: transparent fixed header; a 6 px black dot sits before the current item; over dark chapters the header ink turns light.
- Ours (no scroll listener allowed): header `position: sticky; top: 0`, **no background**; nav links, wordmark and the "book a stay" link are `color:#fff; mix-blend-mode: difference` (header has `isolation: auto`, nothing behind it is isolated) → on the mist ground they render near-black (#111), over the dark lake-night / slate bands they render pale. This is the CSS-only inversion.
- Dot: `.current-menu-item > a::before` / `[aria-current="page"]::before` — `content:""`, 6 × 6 px circle, `currentColor`, 10 px before the word, vertically centred. On the home page the dot sits on "stay" (the first item, home anchor). Inner pages: dot on their own item.
- Must not be softened: lower-case Latin nav at 0.875rem, 28 px gaps, dot exactly 6 px, no underline, no pill, no background bar.
- Continues on every page (it is the header).

### T3. Two-column hairline neighbour rows (kei "around"; `ref/scroll-kei-around-17400.png`)
- Reference: on a near-black ground, two columns (x 72–684 and 756–1368); each row = 3:2 thumb 228 × 152, then a small grey kicker, a 24 px name (ls .12em), an address line with a grey translucent pill chip "map" (11 px, radius 999), a tel line underlined, and a 1 px outline pill "website ↗" (~112 × 30, radius 999); 1 px bottom rule `rgba(255,255,255,.12)`; row pitch ~195 px; a centred closing note below (`tok(c)`, `tok(d)`).
- Home use: §H6 "around" — 4 rows (2 × 2) on `#242B31`: Mirren Boat House, Harbour Lane Bakery, Shore Trail (5.2 km loop), Willow Cove swimming steps. Each: thumb 3:2 228 × 152 (`object-fit: cover`), kicker (0.6875rem, ls .2em, `#A9BCC6`), name Fraunces 1.5rem / 400 / ls .12em `#EEF0F1`, line "7 min on foot" + chip "map" (bg `rgba(238,240,241,.16)`, 0.6875rem, padding 2px 10px, radius 999), one-line detail, outline pill "directions ↗" (1 px `#EEF0F1`, radius 999, 0.75rem, padding 6px 20px). Chip and pill link to the Around page anchors (no external sites).
- Must not be softened: the dark ground, two columns, thumbs exactly 3:2 at 228 px (not cards, no boxes, no shadows), hairline rules, both pill shapes.
- Mobile: single column; thumb 120 × 80 left, text right; pill below.

### T4 (support, not counted). Ground that steps light → dark down the page (kei `is-invert`, `tok(a)`)
Home grounds in order: `#EEF0F1` (hero, stay) → `#E3E7E9` (rooms) → photo band → `#C9CFD2` (breakfast) → `#242B31` (around, booking) → `#4A5560` (journal + newsletter) → `#1B2126` footer. Static CSS, no interpolation.

### Chapter opener (part of T1/T3 rhythm, kei glyph + Latin word)
Every home chapter opens with a centred two-line label: a small wave mark (inline SVG, 28 × 10 px, two stacked 1 px curves, `currentColor`) above one lower-case Latin word (Fraunces italic 1.125rem, ls .02em) — stay, rooms, breakfast, around, booking, journal. No CJK glyph (theme is international). Words are block markup (not CSS `content:`); 140 px above the first photo, 120 px below the last (`tok(c)`).

### Continuation on inner pages (≥ 4)
| Page | T1 abutting pair + verse | T2 dot / inversion | T3 hairline rows | Opener |
|---|---|---|---|---|
| About (the house) | pair flush left (img 16 + 17), verse on the 1934 boathouse → 2011 hotel | header ink inverts over the dark "people" band (#242B31) | 7 people as hairline rows (no photos of faces: name, role, one line) | yes |
| Rooms | one pair per room type, alternating left/right (imgs 06, 01, 15, 04 + 07) | dot on "rooms" | rate table in hairline rows (§9) | yes |
| Breakfast | pair flush right (09, 10), verse with times | dot on "breakfast" | menu rows (4 items, time + one line) | yes |
| Around the lake | — | dot on "around" | full T3 list, 8 rows on dark ground (11–14 + 4 text-only rows) | yes |
| Booking | — | dot on "book a stay" | 4 booking steps as hairline rows + rate summary | yes |
| Contact & access | pair flush left (08 crop, 02) | — | travel rows (car / train / boat) | yes |
Signature appears on 6 inner pages (≥ 4 required).

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
- Concept: a dusk photograph of the inn almost full-bleed — cool blue-grey sky (#78939B), warm lit timber and glass, dark trees; a tiny centred emblem (glyph + Latin word) between two short hairline dashes; a frosted notice pill bottom-right; transparent lower-case nav (`ref/kei-first.png`).
- Story: a quiet place to stop; the stay begins before you read a single detail.
- Signature motion: the emblem overlay fades out (1.6 s, cubic-bezier(.445,.05,.55,.95)); the hero stays pinned (sticky stage) while the pale chapters slide up over it; chapter content fades in (1.2 s, 6 px rise) (`tok(g)`).

### (2) Our transposed scene (same idea, same image type: film-grain documentary photo)
The same first breath of quiet, at a lakeside hotel, hours before breakfast. Because the hero composition is fixed (**strip / beside-photo / logo-row**), the one dusk photograph becomes a **film strip of three still frames in one row** — the widest middle frame is the window seat with the linen curtain lifted and the still lake in early light; left: the jetty at dawn; right (cut by the viewport edge, swipe to see): a water glass and folded towel on the sill. The short invitation sits **beside** the strip; the emblem between two hairlines and a frosted notice pill sit in the logo row at the hero foot. Motion: the middle frame drifts with parallax; on ≥ 1024 px the hero is sticky and the pale "stay" chapter slides up over it (CSS `position: sticky`, no script). Cool dawn light against warm timber = the reference's cool sky against warm lit wood.

### (3) KV checklist (every item implemented and visible in the first screen at 1440 × 900 and 1280 × 800)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Dusk photo of the inn, cool sky over warm lit timber, grain-soft | Window-seat still: linen curtain lifted, still lake in early light, warm timber sill, visible grain | Strip middle frame, 560 × 520 at x 737 (1440) | `sp-parallax`, `--sp-par: 8%` | 01 `hero-window-seat.webp` |
| 2 | Neighbouring glimpses at the sides of the scene (timber, trees) | Two narrow frames: jetty at dawn (left), glass + towel on sill (right, cut by the viewport edge) | Strip left x 500–736 and right x 1298 → clipped at 1440 | none; strip is horizontally swipeable (scroll-snap) | 02 `hero-jetty-dawn.webp`, 03 `hero-sill-glass.webp` |
| 3 | Tiny emblem between two hairline dashes at the fold | "Sazanami" wordmark (Fraunces 1.0625rem ls .2em) between two 24 px × 1 px hairlines, wave mark above | Logo row centre, y ≈ 790 | none (reference overlay fade is dropped: hero never gets reveal) | — (SVG) |
| 4 | Frosted notice pill bottom-right | Pill 372 × 54, frosted: chip "open" + "Seven rooms, all facing the water · from 1 March" | Logo row right end, right edge x 1368 | none | — |
| 5 | Transparent lower-case nav, dot on current, "reservation" at right | Centred lower-case nav (stay, rooms, breakfast, around, journal) with 6 px dot on "stay"; "book a stay" + calendar icon at right; ink via `mix-blend-mode: difference` | Header y 0–84 | ink inverts over dark bands (CSS) | — |
| 6 | Pinned hero, pale chapters slide over it | Hero `position: sticky; top: 0; z-index: 0` (≥ 1024 px); §H2 has `position: relative; z-index: 1; background:#EEF0F1` and slides over | Hero → §H2 seam | CSS sticky (no scroll listener); off on mobile and reduced-motion | — |
All three hero images are in the image list (§14) and marked home.

---

## 3. First-screen composition
**hero_composition: strip · hero_text: beside-photo · hero_footer: logo-row · hero_fingerprint: strip/beside-photo/logo-row**
- **strip** — the photo is a single horizontal row of three abutting frames (1 px hairline gaps of ground colour), not a full-bleed image. The row is an `overflow-x: auto; scroll-snap-type: x mandatory` container (`.sz-strip`, scrollbar thin `#C9CFD2`), whose own box ends at the viewport edge, so the third frame is visibly cut and can be swiped; the document itself never overflows horizontally. Frames are `figure > img` with `object-fit: cover`, radius 0, each frame `scroll-snap-align: start`. Under each frame a frame caption in Source Serif 4 italic 0.6875rem `#6B757D` (film-strip index): "05:40 · the jetty", "06:10 · room four, window seat", "06:25 · the sill". Children of the strip never get sp-reveal.
- **beside-photo** — text occupies its own column to the left of the strip, on plain `#EEF0F1` ground; no text over any photo; no overlay gradients.
- **logo-row** — a full-width row at the hero foot, 1 px top rule `#C9CFD2` from x 72 to 1368, 72 px tall: left = "neighbours on the shore" label (0.6875rem ls .2em `#6B757D`) + four fictional neighbour wordmarks set in type (Fraunces small caps 0.8125rem `#4A5560`, 32 px gaps: Mirren Boat House · Harbour Lane Bakery · Shore Trail Trust · Lake Mirren Rowing); centre = wave mark + "Sazanami" between two 24 px hairlines; right = frosted notice pill (KV #4). These are text, not images, and not real brands.

Desktop 1440 × 900 (1280 × 800 in brackets):
- Header 84 px (76): wordmark "Sazanami Hotel" left x 72 (Fraunces 1.0625rem ls .12em); centred nav; right "book a stay" + 16 px calendar icon + language switch "EN". Transparent.
- Hero box: `min-height: 100svh; max-height: 900px`; `display: grid; grid-template-columns: 428px 1fr` (368px), column gap 0; grid starts at x 72.
- Text column x 72–452 (72–420), vertically centred on the strip:
  - kicker "a lakeside hotel · Lake Mirren" 0.75rem ls .2em `#6B757D`;
  - H1 Fraunces 300, **4.25rem** (3.75rem at 1280; clamp(2.75rem, 4.7vw, 4.25rem)), lh 1.06, ls -0.01em, `#1B2126`: "Still water,<br>early light.";
  - verse 3 lines, Source Serif 4 1rem, ls .15em, lh 1.875, `#1B2126`, max-width 360px: "Seven rooms in a row, / each with a window seat / and the lake beyond it.";
  - plain note 0.75rem lh 2 `#6B757D`, ≤ 2 lines: "Breakfast at the window from 7:30. Check-in from 15:00.";
  - actions: outline pill "check dates" (→ /booking/, 1 px `#1B2126`, radius 999, 0.8125rem, padding 10px 26px) + text link "see the rooms →" (underline 1 px offset 4px).
- Strip x 500 → viewport edge (x 480 at 1280); top y 156 (140); height **520 px** (460). Frames: L 236 × 520 (210 × 460) · M 560 × 520 (500 × 460) · R 236 × 520, about 142 px visible at 1440. Middle frame is ≈ 2.4 × each side frame.
- Logo row y 748–820 (672–744). Fold below it: 80 px (56) of empty ground.
- Saturated share (S > 0.5, V > 0.2) of the first screen ≤ **8 %** (reference 1.2 %; hard cap 15 %, `scripts/check-first-screen.py`). Photos are desaturated (STYLE); no coloured block anywhere in the first screen.
- No table, form, search box, vertical type or absolutely positioned label in the first screen.

Mobile 390 × 844:
- Header 64 px: wordmark left, "book" + menu button right (core navigation overlay; same single menu).
- Normal flow, no sticky hero, no absolute positioning: kicker → H1 2.75rem lh 1.08 → verse (0.9375rem ls .1em) → note → actions (pill full width 100 %, link below) → strip (height 300, frames L 128 · M 300 · R 128, swipeable, padding-left 24px, bleeds right) → captions → logo row stacked (emblem centred; neighbour marks in two lines, wrap; pill full width). Text never overlaps photos.

---

## 4. Home sections (order and content)
| § | Section | Ground | Layout | Photos | Copy |
|---|---|---|---|---|---|
| H1 | Hero (strip) | #EEF0F1 | §3 | 01, 02, 03 | H1 + 3-line verse + note (~35 words) |
| H2 | stay — opener + T1 pair flush left + verse | #EEF0F1 | pair x 0 (39.6 vw), verse from 55.4 vw | 04 `verse-mist-lake`, 05 `verse-timber-corridor` | verse 3 stanzas (~45 words) + note paragraph (~45 words): the boathouse, the row of rooms, slow mornings |
| H3 | rooms — opener; large 3:2 840 × 560 at x 72 + tall 2:3 270 × 405 bleeding off the right edge, 120 px lower (kei large+small, `tok(e)`); below: rate rows (4 room types, hairline, price right nowrap) + link "all rooms and rates" | #E3E7E9 | text column (H3 1.5rem ls .12em + 60-word paragraph) between photos at x 960–1368 | 06 `room-lakeview-bed`, 07 `room-bath-window` | ~90 words + 4 rate rows |
| H4 | Water band — full-bleed 100 vw × 900 px (≥ 1280; 70svh mobile) photo with **sp-parallax**; one short line in a solid `#242B31` plate below the photo edge (not over it): "The lake is the quietest at six." | photo → #242B31 | full-bleed | 08 `band-still-water` | 8 words |
| H5 | breakfast — opener + T1 mirrored: pair flush right, verse left (x 72, ≤ 400 px); times "7:30–10:00 at your window table; hamper from 6:30 for early boats" | #C9CFD2 | mirrored T1 | 09 `breakfast-window-table`, 10 `breakfast-bread-coffee` | verse + note ~70 words |
| H6 | around — opener + T3 2 × 2 hairline rows + centred closing note | #242B31 | T3 | 11 `around-boathouse`, 12 `around-bakery`, 13 `around-trail`, 14 `around-cove` | 4 × ~20 words + 30-word note |
| H7 | booking — opener + 4 steps as hairline text rows (number in Fraunces italic 1.5rem `#A9BCC6`, title, one line; 2 columns × 2 at ≥ 782 px; not a step grid with icons) + one-sentence policy + pill "check dates" | #242B31 (continues, separated by a 1 px `rgba(238,240,241,.12)` rule) | text only | — | ~80 words |
| H8 | journal — opener + 3 latest posts in one row (3:2 thumb, date, title; core Query Loop) | #4A5560 | 3 columns | post featured images 18, 15, 17 | titles only |
| H9 | letter from the lake — newsletter slot (email + submit), left heading "A short letter, four times a year", right the form (§13). No reveal. | #4A5560 | 2 columns 5/7 | — | 30 words |
| — | Footer: address, hours, small footer links (about, faq, contact, newsletter, privacy — not a second top menu), wordmark between hairlines | #1B2126 | 4 columns | — | — |
Home photo positions: 01–14 + 3 journal thumbs = **17** (≥ 8). Home English copy ≥ 250 words with ≥ 3 narrative paragraphs ≥ 20 words (H2 note, H3 paragraph, H5 note, H6 closing note).

### Not the same as recent home pages
| Theme | Home order | Sazanami differs by |
|---|---|---|
| Shirogane College | audience row → hero + booking bar → intake notice → sticky-media sections | no audience row, no booking bar in hero; strip hero; chapters with abutting edge pairs |
| Seimyaku Clinic | hero photo + arc + veil → message (parallax) → stacked method chapters → proof | no veil/arc, no stacked sheets; parallax is a full-bleed water band mid-page and the strip frame |
| Fuchi Glazing | slanted panel hero + info bar → survey plate → ledger rows → 4×2 catalogue → narrative | no slant, no catalogue grid; hairline rows appear only as dark 2-column neighbour rows (thumb + chips + pills), not a ledger |
| Enban Records | keyword bar → inset slide card + peek → audience ruled rows → process → crates | no keyword bar, no slide card; strip is three film frames, not a card carousel |

---

## 5. Inner pages (12 pages + 3 posts; all pages use the same header, opener and grounds)
1. **About — the house** `/about/`: opener "the house"; T1 pair (16 front desk hands, 17 lounge fire) + verse on history (1934 boathouse, 2011 rebuild, 7 rooms); "the people" — 7 named people as hairline rows (name Fraunces 1.25rem, role, one line), no portraits; "a day at Sazanami" (daily routine: 05:30 lake light, 6:30 hamper, 7:30 breakfast, 11:00 check-out, 15:00 arrivals, 22:00 desk closes).
2. **Rooms** `/rooms/`: four room-type chapters alternating left/right, one photo each plus 07 once (Shore 06 + 07, Window-Seat 01, Corner 15, Jetty Suite 04; no repeats within the page), each with size, bed, view, max guests; full rate table (§9).
3. **Breakfast** `/breakfast/`: T1 mirrored (09, 10); the four breakfast items as hairline rows; times; dietary note (vegetarian / gluten-free on request the day before).
4. **Around the lake** `/around/`: full T3 list on dark ground: 8 rows (4 with thumbs 11–14, 4 text-only: Mirren village shop, St Aud's chapel walk, bicycle hire at the station, the lake ferry), anchors `#boat-house` etc. used by home chips.
5. **Booking** `/booking/` (booking-led primary page; nav right "book a stay"): booking steps (hairline rows), rate summary, policies (deposit, cancellation), **booking form slot** (§13) after the policies, mailto fallback.
6. **Contact & access** `/contact/`: address, desk hours, phone, email; travel rows (by car 2 h from the city, by train to Mirren station + 12-min hotel car, by lake ferry in summer); T1 pair (08 crop, 02); contact form slot (§13).
7. **Stay information / FAQ** `/faq/`: 10 Q&A as `details` rows with hairlines (check-in, children, pets, accessibility — ground-floor rooms 1 and 2, parking 8 cars, quiet hours 22:00–7:00).
8. **Journal** `/journal/` (role `posts`, content empty) — the posts list; news screen.
9. **Newsletter** `/newsletter/`: standalone page; T1 pair (13, 14) + "letter from the lake" text + newsletter slot.
10. **Gift a stay** `/gift/`: voucher values €100 / €245 / any amount, ordered by email (no shop), photo 17.
11. **Privacy** `/privacy/`: plain text, no reveal.
12. **Home** `/`.
Posts (category "from the lake", tags "mornings", "breakfast", "seasons"): "The first hour on the water" (img 18), "Why breakfast is served at the window" (img 15), "What we mend in January" (img 17). Each ≥ 300 words.

---

## 6. Colour (source `tok(a)`; reference relationship kept: pale ground, black-ish ink, a dark invert ground, photos the only large colour, no accent)
The reference ground is a warm grey (hsl 52, 5–10 %). The row's palette is kon-nezumi navy-grey; a lakeside hotel reads cooler, so we keep the **lightness steps of the reference** (98→90 %, ~72 %, ~18 %) and move the hue to blue-grey (hsl 205–210). This is the only deviation and it is intentional (palette family navy, avoids recent themes' teal #51686B).
| Token | Hex | Role | Share (page) | Source |
|---|---|---|---|---|
| mist | #EEF0F1 | base ground | ~38 % | ref light ground #E3E3DF–#FAFAFA (L 93 %) |
| mist-2 | #E3E7E9 | rooms ground | ~8 % | ref #E3E3DF |
| fog | #C9CFD2 | mid ground (breakfast), hairlines on light | ~12 % | ref mid #B8B6AA–#D4D3CC |
| slate (primary) | #4A5560 | journal/newsletter ground, buttons on light, small labels | ~12 % | row hex #4A5560 |
| lake-night | #242B31 | invert ground (around, booking) | ~18 % | ref dark #343329 (L ~18 %) |
| ink | #1B2126 | text, footer ground | text + ~6 % | ref ink #1A1A1A |
| sub | #6B757D | captions, notes, kicker | text | ref sub grey (~40 % L) |
| glint (accent) | #A9BCC6 | step numbers, kicker on dark, focus ring on dark | < 2 % | ref has none; tiny only |
| white | #FFFFFF | form surface | < 1 % | — |
First-screen saturated share ≤ 8 % (cap 15 %; row note ≤ 30 %). Contrast: ink on mist 15.4:1; mist on lake-night 13:1; sub on mist 4.6:1; glint on lake-night 7.6:1.
Paper grain (`tok(f)`): a 160 × 160 px inline SVG `feTurbulence` noise as `background-image` on body at opacity .035 (multiply), not on photos.

---

## 7. Type (font_direction: **serif**)
- Latin display: **Fraunces** (variable, opsz 9–144, wght 300–600; SOFT 50, WONK 0) — headings, wordmark, numbers, chapter words.
- Latin body: **Source Serif 4** (variable opsz, wght 400–600, italic) — body, verse, nav, captions.
- zh-TW (`:root:lang(zh*)`): display `"Fraunces", "Noto Serif TC", "Songti TC", serif`; body (system Mincho-style serif, must not contain the bundled Noto Serif TC or any JP font per repo gate) `"Source Serif 4", "Songti TC", "PMingLiU", serif`.
- ja: display `"Fraunces", "Noto Serif JP", "Hiragino Mincho ProN", serif`; body `"Source Serif 4", "Hiragino Mincho ProN", "Yu Mincho", serif`.
- Mincho-style serif only for CJK (no Noto Sans). Bundled: Fraunces, Source Serif 4, Noto Serif TC subset, Noto Serif JP subset (Hokuto/Hada subsetting method), woff2, all via **theme.json `fontFamilies` + `fontFace`** so editor and front end match; copy `shared/inc/editor-lang.php` → `inc/editor-lang.php` and require it (style.css uses `:lang(`). Licenses OFL in `assets/fonts/`, listed in theme-meta.json and readme.txt.
| Role | Size (rem) | Weight / lh / ls | Source |
|---|---|---|---|
| H1 hero (largest, theme.json `display`) | **4.25** (clamp 2.75 → 4.25) | Fraunces 300 / 1.06 / -0.01em | gate ≥ 4.25rem (ref logo is small; ours is larger by rule) |
| H2 section title | 2.25 | Fraunces 300 / 1.2 / 0 | — |
| chapter word | 1.125 | Fraunces italic 400 / 1.4 / .02em | tok(b) 18 px / .02em |
| H3 | 1.5 | Fraunces 400 / 1.4 / .12em | tok(b) 24 px / .12em |
| H4 | 1.1875 | Source Serif 4 400 / 1.5 / .02em | tok(b) 19 px |
| verse | 1.0 | Source Serif 4 400 / 1.875 / .15em; stanza gap 0.8125rem | tok(b) 16 px / 30 px / .15em |
| body | 1.0 (ref 14 px; we use 16 px for readability) | 400 / 1.8 | tok(b) |
| note / translation line | 0.75 | 400 / 2.0 / .04em, #6B757D | tok(b) 12 px lh 2 |
| nav | 0.875 | Source Serif 4 400, lower-case, gap 28 px | tok(b) |
| kicker / chip | 0.6875 | 400 / ls .2em | tok(d) 11 px |
CJK: sizes × 0.75 for display headings, body lh 1.85, letter-spacing .08em for verse; fr/de `hyphens: auto`.

---

## 8. Spacing, radius, borders, buttons (source `tok(c)`, `tok(d)`)
- Gutter 72 px desktop (`--sz-gutter: clamp(24px, 5vw, 72px)`); header 84 px; chapter padding 140 px top / 120 px bottom (mobile 88 / 72).
- Images radius 0, no border, no shadow; abutting pairs 1 px gap.
- Pills: 1 px outline, radius 999, 0.75–0.8125rem; chip: translucent fill, radius 999. Notice pill: radius 8, 372 × 54, `background: rgba(238,240,241,.62); backdrop-filter: blur(8px); border: 1px solid rgba(27,33,38,.08)`; inner chip "open" bg `#4A5560` text #fff 0.6875rem radius 999.
- Primary button (booking page, forms): filled `#4A5560`, text #fff, radius 999, padding 12px 30px; hover `#242B31`. Outline pill everywhere else.
- Hairline rows: 1 px `#C9CFD2` on light, `rgba(238,240,241,.12)` on dark; T3 row pitch ~195 px.

---

## 9. Rate table (rooms page full; home H3 compact; booking page summary)
- Markup: core table (or group rows) `.sz-rates`, full container width (≥ 782 px: width 100 % of the 1296 px content box, never a narrower column); columns room · size · view · per night. Price column `white-space: nowrap; text-align: right; font-variant-numeric: tabular-nums;` never clipped (`overflow: visible`, no fixed widths on the table).
- < 782 px: each row stacks (`display: block`), label/value pairs, price on its own line right-aligned.
- No reveal on rate tables.

---

## 10. Scroll effects (from stage-a "scroll effect candidates"; sp-scroll copied unchanged, only CSS variables tuned)
| Effect | sp-* class | Where | Reference source / trigger / timing / easing | Our values |
|---|---|---|---|---|
| Opacity fade of photos | `sp-reveal` (no modifier: fade) | H2/H3/H5 photos (each `figure`), H8 thumbs as a group | kei `js-sa__op`, IO rootMargin 50% 0, threshold 0, 1.2 s, cubic-bezier(.25,.1,.25,1) | `--sp-dur: 1.2s; --sp-ease: cubic-bezier(.25,.1,.25,1)` |
| Rise + fade of verse/text | `sp-reveal sp-reveal--up` | openers, verse columns, H3 text, H7 steps | kei `js-sa__up`, 1.2 s, 6 px | `--sp-dist: 6px; --sp-dur: 1.2s` same ease |
| List stagger | `sp-stagger` parent + `sp-reveal sp-reveal--up` children | H6 neighbour rows (4), Around page rows | kei `js-sa__list__op`, +60 ms per item | children `--sp-delay: 0s/.06s/.12s/.18s` set inline (overrides default .12 s step) |
Never on: hero (H1) or its strip children, rate tables, forms and their sections (H9, booking/contact form groups), privacy text. The CSS `position: sticky` hero (KV #6) is layout, not reveal. Reduced motion → final state; no-JS → visible; editor → final state.

## 11. Parallax (required)
| Where | Background image | Foreground | `--sp-par` | Reference motion |
|---|---|---|---|---|
| H4 water band (primary, full-bleed) | 08 `band-still-water.webp` as Cover background (or `figure>img`) | none over the photo; the line sits in the `#242B31` plate below | 10 % desktop, 6 % < 782 px | kei sticky hero stage + full-bleed water band moving at a different speed |
| H1 strip middle frame | 01 `hero-window-seat.webp` (`figure.sp-parallax > img`, frame `overflow: clip`) | text is in the other column (never in the moving layer) | 8 % desktop, 5 % mobile | kei pinned hero image while chapters slide |
Both kept on mobile. `check-parallax.mjs` must show ≥ 6 px difference on desktop and mobile, 0 with reduced motion.

## 12. Responsive
- 390 px: no vertical type, no absolute-positioned labels or overlapping text in the first screen; all T1 pairs full width; T3 one column; booking steps one column; header menu overlay (core navigation).
- ≥ 782 px (800 and 1280 tested): rate table full width; price column nowrap, right, unclipped.
- Any table < 782 px stacks.
- No horizontal document overflow at 390 / 1280 (the strip scrolls inside its own box; tall photo in H3 bleeds via `margin-right: calc(-1 * var(--sz-gutter))` inside an `overflow-x: clip` section).

## 13. Forms (form contract v1: `steps/form-contract-v1` exists)
- Copy `pipeline/assets/forms/shippress-forms.php` → `inc/`, forms CSS + editor JS → `assets/`, unchanged; require from functions.php. Never in the first screen; no sp-reveal on forms or their sections.
- **Booking** `/booking/` and **Contact** `/contact/`: pattern calls `shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) )`; `$fallback` = `ob_start()`-buffered literal button markup "Email us your dates" → `mailto:stay@sazanami-hotel.example?subject=<booking_subject>` (contact page: "Write to the desk" → subject `contact_subject`), same class as theme buttons; never links to `/contact/` itself. With CF7 / WPForms present, the first published form renders.
  - Recommended booking fields (documented in readme + page note): Full name*, Email*, Phone, Arrival date*, Nights* (1–14), Guests* (1–4), Room type (select: Shore Room / Window-Seat Room / Corner Lake Room / Jetty Suite / Any lake room), Early breakfast hamper (checkbox), Message (textarea), Consent* (checkbox linking `/privacy/`).
  - Contact fields: Name*, Email*, Subject, Message*, Consent*.
- **Newsletter** `/newsletter/` (standalone page) + **home H9** (slate #4A5560 ground) + **footer** (#1B2126): `shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'stay@sazanami-hotel.example', 'label' => _t('forms_email'), 'submit' => _t('forms_subscribe'), 'notice' => _t('forms_mail_notice'), 'subject' => _t('forms_mail_subject') ) )`. MailPoet / MC4WP preferred; CF7 / WPForms only via an explicitly configured newsletter form id. Without plugins: required `type=email` + submit, native mailto POST with the entered address; visible notice "Opens your email app. Send the message to receive the letter from the lake; you are not subscribed yet." Never claim success.
- Light tokens (booking/contact on #EEF0F1): `--sp-form-surface #FFFFFF`, `--sp-form-text #1B2126`, `--sp-form-border #C9CFD2` (hover #6B757D), `--sp-form-accent #4A5560`, `--sp-form-on-accent #FFFFFF`, `--sp-form-focus #242B31` (2 px outline, 2 px offset), `--sp-form-radius 0` (inputs; submit keeps the 999 pill via theme button), labels 0.8125rem / 400 / ls .04em #1B2126; error #9B3B32 (text + 1 px border + message under field); success #2F5E4E (text + 1 px left rule).
- Dark tokens (H9 #4A5560, footer #1B2126): surface `rgba(255,255,255,.96)`, text #1B2126, border #C9CFD2, accent #EEF0F1, on-accent #1B2126, focus #A9BCC6, labels + notice #EEF0F1 / #C9CFD2, error text #F2C6BF, success #CFE3DA.
- Style CF7, WPForms, MailPoet, MC4WP (+ Jetpack) scoped classes consistently: input, textarea, select, checkbox/radio, label, submit, focus, error, success. No global selectors.
- Five-language semantic keys in `inc/i18n/en.php` (en, zh-TW, ja, fr, de, in-place rewrites): `forms_email` ("Your email"), `forms_subscribe` ("Send me the letter"), `forms_mail_notice`, `forms_mail_subject` ("Letter from the lake"), `contact_email` ("Write to the desk"), `contact_subject` ("A question for the desk"), `booking_email` ("Email us your dates"), `booking_subject` ("Stay request"), plus all field labels above. Extract with `L10N_SEMANTIC=1`. `form-runtime-check.php` (5 locales) and `repo-gates.sh forms` must pass.

---

## 14. Images (IMAGERY: **photo**; 18 images, 0 cut-outs, each ≤ 300 KB, ≤ 2000 px, webp)
STYLE (identical for every image):
`film-grain documentary photograph, natural early light, slightly desaturated cool blue-grey tones with warm pale timber, soft visible 35mm film grain, gentle contrast, calm and quiet, generous negative space, contemporary minimal lakeside architecture, international neutral setting, no Japanese elements, no text, no logos, no signage, no brands, no watermark`
People: at most hands or distant figures from behind, diverse; no faces in close-up.
| # | File | Subject / composition | Ratio | Used in (home ★) |
|---|---|---|---|---|
| 01 | hero-window-seat.webp | window seat with cushion, linen curtain lifted by a breeze, still lake and far shore beyond in early light, timber sill foreground | 3:2 | ★ H1 strip middle (parallax); Rooms "Window-Seat" |
| 02 | hero-jetty-dawn.webp | narrow timber jetty running into flat water, mist, low sun | 2:3 | ★ H1 strip left; Contact pair |
| 03 | hero-sill-glass.webp | glass of water and folded white towel on a pale timber sill, lake blurred behind | 2:3 | ★ H1 strip right |
| 04 | verse-mist-lake.webp | mist lifting off the lake, a line of reeds, nothing else | 3:2 | ★ H2 pair top; Rooms "Jetty Suite" |
| 05 | verse-timber-corridor.webp | long timber corridor with a row of doors and morning light on the floor | 3:2 | ★ H2 pair bottom |
| 06 | room-lakeview-bed.webp | low bed with linen, wide window to the lake, morning | 3:2 | ★ H3 large; Rooms "Shore" |
| 07 | room-bath-window.webp | deep stone bath beside a tall window onto water | 2:3 | ★ H3 tall bleed |
| 08 | band-still-water.webp | full-frame flat lake surface, faint ripples, far tree line at the top edge | 16:10 | ★ H4 band (parallax); Contact pair (crop); Booking band |
| 09 | breakfast-window-table.webp | breakfast table set at a window: bread, butter, jam, coffee pot, lake light | 3:2 | ★ H5 pair; Breakfast pair |
| 10 | breakfast-bread-coffee.webp | close view of sliced rye bread, boiled egg, coffee cup, hands pouring | 3:2 | ★ H5 pair; Breakfast pair |
| 11 | around-boathouse.webp | wooden rowing boats tied at a small boat house | 3:2 | ★ H6 thumb; Around |
| 12 | around-bakery.webp | small village bakery window with loaves on a shelf (no lettering) | 3:2 | ★ H6 thumb; Around |
| 13 | around-trail.webp | footpath through birch trees along the shore | 3:2 | ★ H6 thumb; Around; Newsletter pair |
| 14 | around-cove.webp | stone swimming steps into a quiet cove | 3:2 | ★ H6 thumb; Around; Newsletter pair |
| 15 | room-reading-corner.webp | armchair, wool blanket, a few books, lake window | 3:2 | ★ H8 journal thumb (post 2); Rooms "Corner" |
| 16 | desk-hands-key.webp | hands placing a brass room key on a timber front desk | 3:2 | About pair |
| 17 | lounge-fire.webp | small lounge with a wood stove, evening, lake dark in the window | 3:2 | ★ H8 journal thumb (post 3); About pair; Gift |
| 18 | rowboat-fog.webp | a single rowboat on foggy water seen from the jetty, person from behind | 3:2 | ★ H8 journal thumb (post 1); post featured |
No image repeats within one page. Review every image (no text, logos, broken hands/faces, style drift); regenerate otherwise.

---

## 15. Fixed facts (brand.md must match; identical on home, inner pages and all five languages)
- Name: Sazanami Hotel. Address: 14 Shore Lane, Lake Mirren. Founded: boathouse built 1934, opened as a hotel 2011. Seven rooms, all facing the water.
- Hours: check-in 15:00–20:00; check-out 11:00; front desk 7:00–22:00; breakfast 7:30–10:00 (hamper from 6:30); quiet hours 22:00–7:00. Closed 6–31 January (repairs). Phone +00 555 0140, email stay@sazanami-hotel.example.
- Rates per night, two guests, breakfast included (EUR): Shore Room (2 rooms, 24 m², max 2) €210 · Window-Seat Room (2 rooms, 28 m², max 2) €245 · Corner Lake Room (2 rooms, 34 m², max 3) €290 · Jetty Suite (1 room, 46 m², max 4) €380 · Extra bed €45 · Early breakfast hamper €18 · Rowboat half-day €30. (7 items.)
- Booking flow (4 steps): 1 Choose dates and a room · 2 Send the request (form or email) · 3 We reply within 24 hours with a confirmation and a 30 % deposit link · 4 Arrive from 15:00; the rest is settled at departure. Free cancellation up to 14 days before arrival; after that the deposit is kept.
- People (7): Ilse Varga — owner and host · Tomas Reyes — co-owner, carpenter who rebuilt the rooms · Amara Okafor — breakfast cook · Jun Park — front desk · Léa Moreau — housekeeping · Henrik Dahl — keeps the boats (neighbour, Mirren Boat House) · Priya Nair — baker (Harbour Lane Bakery, neighbour).
- Stories (3 posts): "The first hour on the water", "Why breakfast is served at the window", "What we mend in January".
- Neighbours (Around): Mirren Boat House 3 min · Harbour Lane Bakery 7 min · Shore Trail 5.2 km loop · Willow Cove steps 10 min; parking 8 cars; Mirren station 12 min by hotel car.
No awards, media, guarantees or real brands.

---

## 16. Home acceptance checklist
- [ ] First screen = strip/beside-photo/logo-row exactly as §3: three abutting frames, right frame cut by the viewport edge and swipeable; text column left on plain ground; logo row with neighbour marks, emblem between hairlines, frosted pill. No full-bleed overlay.
- [ ] KV #1–#6 visible at 1440 × 900 and 1280 × 800; 01/02/03 in the strip.
- [ ] H1 4.25rem Fraunces 300 (largest type ≥ 4.25rem in theme.json).
- [ ] Header: centred lower-case nav, 6 px dot on "stay", `mix-blend-mode: difference` ink readable on light and dark; exactly one top menu.
- [ ] T1 pair touches the viewport edge (H2 left, H5 right), 1 px gap, verse ≤ 400 px with ls .15em + grey note.
- [ ] T3 dark 2-column rows with 228 × 152 thumbs, "map" chips, outline pills, hairlines.
- [ ] Grounds step #EEF0F1 → #E3E7E9 → band → #C9CFD2 → #242B31 → #4A5560 → #1B2126.
- [ ] Parallax on H4 band (10 %) and strip middle frame (8 %); check-parallax passes desktop + mobile.
- [ ] Reveals only as §10; none on hero, rate rows, forms.
- [ ] ≥ 8 home images (17 positions), none repeated; 0 cut-outs.
- [ ] ≥ 250 English words, ≥ 3 narrative paragraphs ≥ 20 words; prices/times match §15.
- [ ] First-screen saturated share ≤ 8 % (cap 15 %).
- [ ] 390 px: no overlap, no absolute labels, no horizontal overflow; rate rows stack.
- [ ] Newsletter slot in H9 and footer works without plugins (email + submit + notice).
- [ ] auto-gates (home, `1 1`) pass.

## 17. Similarity table (target ≈ 80 %, values from `reference-tokens.md`)
| Dimension | Reference (kei-kusatsu.com) | Sazanami Hotel |
|---|---|---|
| Ground light | #E3E3DF–#FAFAFA (L 90–98 %) `tok(a)` | #EEF0F1 / #E3E7E9 (L 93 / 90 %), hue → blue-grey |
| Ground mid | #B8B6AA–#D4D3CC `tok(a)` | #C9CFD2 (L 80 %) |
| Ground dark | #343329 (L ~18 %) `tok(a)` | #242B31 (L 17 %) |
| Ink / sub | #1A1A1A / ~40 % grey | #1B2126 / #6B757D |
| Accent | none (black dot) | none in large areas; glint #A9BCC6 < 2 % |
| First-screen saturation | 1.2 % | ≤ 8 % |
| Chapter word | 18 px / 400 / .02em `tok(b)` | 1.125rem / 400 italic / .02em |
| H3 | 24 px / 500 / .12em | 1.5rem / 400 / .12em |
| Verse | 16 px / lh 30 px / ls .15em | 1rem / lh 1.875 / .15em |
| Translation line | 12 px / lh 2 grey | 0.75rem / lh 2 #6B757D |
| Nav | 14 px lower-case, 28 px gaps, 6 px dot | 0.875rem lower-case, 28 px gaps, 6 px dot |
| Gutter / header | 72 px / 84 px `tok(c)` | 72 px / 84 px |
| Chapter spacing | ~140 above / ~120 below | 140 / 120 |
| Pair | 570 × 380 3:2 abutting, flush left, text at 55 % | 39.6 vw 3:2 abutting, flush, text at 55.4 vw |
| Large + tall photo | 840 × 560 at x 72 + 270 × 405 bleeding right, 100–150 px lower | same values (H3) |
| Listing rows | 2 cols 72–684 / 756–1368, 228 × 152 thumbs, 195 px pitch, 1 px rule | same |
| Radius | images 0; pills 999; notice 8 | images 0; pills 999; notice 8 |
| Notice pill | 372 × 54 frosted dark | 372 × 54 frosted light (on mist ground) |
| Decoration | dot, hairline dashes, glyph + word openers, paper grain | dot, 24 px hairlines, wave mark + word openers, paper grain .035 |
| Motion | fade 1.2 s, up 6 px 1.2 s, stagger 60 ms, cubic-bezier(.25,.1,.25,1) `tok(g)` | sp-reveal / --up / sp-stagger with the same durations, distance and ease |
| Hero motion | sticky stage, chapters slide over; overlay fade 1.6 s | CSS sticky hero ≥ 1024 px, chapters slide over; parallax 8 % on the middle frame; no load fade |
| Header inversion | JS-interpolated ink | CSS `mix-blend-mode: difference` |
| Composition (forced different) | full-bleed hero photo | strip / beside-photo / logo-row (plan rule) |
