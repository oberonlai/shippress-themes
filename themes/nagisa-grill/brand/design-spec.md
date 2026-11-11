# Nagisa Grill: design spec (stage B, binding for implementation)

Slug `nagisa-grill`, seafood restaurant, type `hospitality` (WooCommerce compatible but not needed; the theme works without it). Archetype editorial-magazine, full-bleed photo first screen with an info bar, overlay nav, page structure **day-schedule**.

Reference: https://www.cantina-zushi.com/ (main: Cantina, seaside Italian restaurant, S5-Style restaurant-cafe).
Secondary: https://restaurant.nelu.osaka/ (Nelu: first-screen link tabs only).
Measurements: `brand/reference-tokens.md` (every number below marked `tok(x)` comes from that file's section x). Screens: `brand/ref/`.
Borrow structure, technique, colour relationships, motion and the key-visual concept. Never copy their photos, copy, logo, wave artwork or page source. All photos and text are our own.

**Fixed brand facts** (every page, all five languages, footer, demo content; no other numbers anywhere):
- Nagisa Grill, founded **2019**, **7 Harbour Row, Port Ellery** (fictional coastal town; no country named). Email `table@nagisagrill.example`. No phone number.
- One boat: the day boat **Wren**, moored at **Berth 14**, skipper **Tomas Varga**. The restaurant cooks only what the Wren lands that morning.
- Open **Wednesday to Sunday**, one dinner service: bar from **17:30**, seatings at **18:00** and **20:30**, last order **22:00**, doors close **23:00**. Closed Monday and Tuesday (the boat's maintenance days).
- Currency **EUR (€)** in every language; no converted prices.

---

## 1. Signature techniques (three, all obvious at a glance)

### T1. Foot wordmark + info bar on a dimmed full-bleed film photo (Cantina hero + Nelu tabs)
- Source: Cantina first screen (`ref/cantina-t10000.png`, tok(b), tok(f)): a dimmed full-bleed food still; the name "CANTINA" in thin caps, ~150px, letter-spacing ≈0.5em, one line spanning the 80px side margins, sitting on the bottom edge; under it a 14px foot row: "Scroll" at x=80 left and a two-part tagline right. Nelu (`ref/nelu-first.png`): three outlined rectangular link tabs with a long thin arrow at the bottom right.
- Ours, home first screen (block 1): Cover 100svh, photo P01, dim overlay `#14191C` at **0.30** opacity (tok(e): hero overlay .3). Wordmark **"NAGISA"** (Latin in every language), Fraunces 300, `font-size: clamp(4.25rem, 10.4vw, 9.375rem)` (150px at 1440, tok(b)), uppercase, white, **each letter its own span** in a flex row with `justify-content: space-between`, row width = content width (side padding 80px desktop / 24px mobile) so the six letters span edge to edge like Cantina's seven. Bottom of the letters at 88% of the viewport height.
- Info bar directly under the wordmark (normal flow, not absolutely positioned): 1px `rgba(255,255,255,.55)` hairline on top, padding 18px 0 28px, Source Serif 4 0.875rem/1.5, letter-spacing 0.05em (tok(b) small labels 14px/21px ls .7px), white. Left: "Scroll" + a 1px × 24px vertical tick + "Wed–Sun · one service · 18:00 / 20:30". Right: "Today's boat: the Wren, Berth 14" then **two Nelu-style outlined tabs**: "The menu ⟶" and "Tables ⟶" (each 168×48px, 1px white border, radius 0, Source Serif 4 0.875rem, long thin arrow 28px drawn as inline SVG, 12px gap; hover = white fill, ink text, 0.3s).
- Inner pages (T1 mini): every inner page head is the same construction at **64svh** (mobile 56svh): full-bleed photo, overlay .30, the page title in Fraunces 300 uppercase `clamp(2.75rem, 7vw, 6.5rem)` letter-spacing 0.3em (not justified; left-aligned at the 80px margin), and the info bar beneath with "Nagisa Grill · <page name>" left and one fixed fact right (see section 4).
- Must not be diluted: wordmark ≥ 9rem at 1440 and spanning the full content width (first letter at 80px, last letter ending at 1360px ±10px); photo full-bleed edge to edge, no frame, no inset window, no rounded corners; info bar hairline visible; the two outlined tabs visible on desktop and on 390px. No giant centred word: the wordmark is bottom-anchored and edge-to-edge, never vertically centred.

### T2. Tide-line motif: three wavy 1px hairlines (Cantina logo underline and menu icon)
- Source: Cantina logo (tok(f)): caps wordmark with three wavy hairlines underneath (~140px wide, 1px, white); the same three-wave icon (60×20) is the menu trigger with the word "Menu" under it.
- Ours: one inline SVG drawn by us (do not trace Cantina's): three sine-wave strokes, viewBox 0 0 60 20, stroke 1px, `stroke-linecap: round`, wavelength 15 units, amplitude 1.6 units, line gaps 6 units, `fill: none`, `stroke: currentColor`. Used as:
  1. Logo lockup (header centre): "NAGISA GRILL" Fraunces 400 1.25rem letter-spacing 0.22em, tide lines 140×14px under it, then "ONE BOAT · ONE SERVICE" Source Serif 4 0.5625rem letter-spacing 0.3em (tok(f) "SEASIDE ITALIAN" line).
  2. Menu trigger (header left): tide icon 40×14px with the word "Menu" (0.875rem) under it. Implemented as the core Navigation block's open button (overlayMenu "always", text label "Menu", icon via CSS `background-image` SVG data URI; no `content:` text).
  3. Section dividers: a 60×20 tide mark (slate on light, white on dark) **above every section label** on home and inner pages, 24px above the label, left-aligned; and a full-width repeating tide hairline (SVG pattern, height 8px, 30% opacity) between the day-schedule rows (block 3) and between price rows on Menu.
  4. Footer: tide lines under the footer wordmark.
- Must not be diluted: lines are wavy (not straight rules), exactly three, 1px; visible in the header on every page and above every section label.

### T3. Near-black photo scene: offset photo duo, then a slate band with a light heading (Cantina scenes)
- Source: Cantina scenes (`ref/scroll-cantina-2700.png`, tok(c), tok(e), tok(g)): on a near-black ground `#151515`, a small photo flush left (≈28% width, 1.4:1) and a wide photo flush right (≈72%, 1.6:1) lower and larger, pinned and sliding over each other; then a full-bleed blue band `#1A4F71` with a thin white heading at 80px.
- Ours: section on deep ground `#14191C` full-bleed, padding 240px 0 (mobile 120px). Inside: label (tide mark + small caps "The kitchen") and heading top-left in white; then the **duo** in a full-bleed row with no side padding: small photo flush to the left viewport edge, width 28%, aspect 1.4:1, radius 0; large photo flush to the right edge, width 72%, aspect 1.6:1, top offset **+120px** below the small one's top, radius 0. The two touch at the 28% line (no gap) exactly like the reference. Copy (two paragraphs) in white sits under the small photo in the left 28% + 80px gutter on desktop, max-width 340px; on mobile it follows the duo.
- Each duo photo is wrapped in its own `sp-parallax` figure (`--sp-par: 10%` small, `6%` large) so they drift at different speeds and appear to slide over each other (our CSS-only stand-in for the pinned ScrollTrigger scene; no pin, no JS). Mask: `sp-reveal--mask` on the large photo's wrapper (gradient wipe 1.2s ease-out).
- Followed (home block 6, Day page, Menu page) by the **slate band** `#4A5963` with a Fraunces 300 white heading 4.25rem at the 80px margin (Cantina "Menu" band).
- Must not be diluted: ground stays near-black `#14191C` (not grey, not slate); photos touch edge to edge and bleed off both viewport sides; the large photo is visibly lower; radius 0.

### Continuation to inner pages (required)
| Page | T1 mini head (photo) | T2 tide | T3 scene duo / slate band |
|---|---|---|---|
| The Day | yes (P14) | tide hairlines between the 8 day rows | duo P03 + P05 after the rows; slate band "Before the doors open" |
| The Boat | yes (P02) | yes | duo P10 + P15 (the catch / the skipper) |
| Kitchen | yes (P04) | yes | duo P11 + P14 under "What we will not rush" |
| Menu | yes (P09) | tide hairline between price rows | slate band with the three plate panels P07 P08 P12 |
| Tables | yes (P05) | yes | duo P06 + P16 |
| About | yes (P15) | yes | duo P14 + P13 |
| Visit (contact) | yes (P13) | yes | duo P06 + P01 |
| Newsletter | yes (P16) | yes | — (deep ground form section, see 9) |
| Journal index / archive / tag / category | yes (P02) | yes | — |
| Single post | no photo head: solid slate header bar 60px (Cantina scrolled header) + featured image 16:9 full content width | yes | — |
T1 + T2 on ≥ 9 inner pages, T3 on 7 inner pages.

---

## Key visual concept

**(1) Reference first screen (Cantina).** What it draws: a dimmed, very close full-bleed still of a seafood plate (fried prawns, a gloved hand garnishing from above), a centred caps logo with three wave lines, a three-wave menu icon left, "Take out" + a filled blue "Reservation" pill right, an enormous widely tracked single-line wordmark resting on the bottom edge, "Scroll" bottom-left and a two-part tagline bottom-right. Story: *the sea is part of the table* — the food is shown close and calm, and the place's name lies along the foot of the picture like a horizon. Signature motion: a blue loading field → a small centred window of footage (634×396) ripples, then scales to full bleed in 0.8s (power3.in) → the wordmark letters rise one by one (y 24→0, opacity 0→1, stagger 0.2s, `cubic-bezier(.625,.05,0,1)`) → the header drops in (1.6s power1.out) → the overlay settles at 0.3; later, photo scenes slide over a dark ground.

**(2) Our translation (seafood restaurant, same composition, same motion idea, same image type = real photograph).** *One boat's catch served in one service.* A film-grain, slate-graded real photograph taken at table height during service: a server's hands set a whole grilled fish on a pale plate between two guests (seen from the shoulder down, mid-conversation), and behind them, softly out of focus, the chef raises chalk to the dark menu board to write the last line of the night. The name "NAGISA" lies along the foot like Cantina's horizon; the info bar under it carries the day (service times, today's boat) where Cantina has "Scroll" and its tagline. Motion: a slate field opens from a small centred window to full bleed, then the six letters rise one by one, then the header drops in; on scroll the photo drifts slower than the page (parallax).

**(3) KV checklist** (all six built in the home first screen and visible at 1440×900 and at 390×844):
| # | Reference element | Our equivalent | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Dimmed full-bleed close food still (overlay .3) | Film-grain photo: server setting a grilled whole fish between two guests, chef chalking the board behind; overlay `#14191C` .30 | whole first screen, 100vw × 100svh | `sp-parallax` on the Cover, `--sp-par: 8%` (mobile 6%); no reveal | P01 |
| 2 | Centred caps logo with three wave lines + three-wave menu icon "Menu" | "NAGISA GRILL" lockup over our own three tide hairlines (T2), centred; tide icon + "Menu" left | header: logo centre at y 40px, icon at x 80px | header drops in from y −12px, opacity 0→1, 0.9s `cubic-bezier(.25,.46,.45,.94)` (power1.out), delay 1.6s | — (SVG) |
| 3 | Huge single-line widely tracked wordmark on the bottom edge | "NAGISA" Fraunces 300, 9.375rem at 1440, letters justified across 80px margins | bottom, baseline at ~88% height | letters rise y 24px→0 + opacity, 1.2s each, stagger 0.2s, `cubic-bezier(.625,.05,0,1)`, start 0.9s (load-time CSS keyframe, see 7) | — |
| 4 | Transparent header: text link + filled blue pill right | "Visit" text link + filled slate pill "Book a table" (48px high, radius 999px) | header right, 80px from edge (mobile: pill only, 40px high) | drops in with the header | — |
| 5 | "Scroll" bottom-left + two-part tagline bottom-right (+ Nelu's outlined tabs) | info bar: "Scroll · Wed–Sun · one service · 18:00 / 20:30" left; "Today's boat: the Wren, Berth 14" + two outlined tabs "The menu ⟶" "Tables ⟶" right | under the wordmark, in flow, hairline above | none (visible at once) | — |
| 6 | Loading field + small footage window expanding to full bleed | slate `#4A5963` field with a centred window (40% × 44% of the viewport) that opens to full bleed, once per load | whole first screen, on load | 0.8s `cubic-bezier(.55,.055,.675,.19)` (power3.in) after a 0.25s hold; skipped with reduced motion / `?sp-static` | P01 (seen through the window) |
Not dropped: the scene (dinner service, fish set between guests, chef at the board), the horizon wordmark and the opening window are all mandatory. "Adapted" never means removing them.

---

## 2. Colour

Taken from Cantina's roles and shares (tok(a)): a deep sea band, a white ground, a near-black scene ground, a tiny red accent. **Hue change, with reason:** the design plan fixes this theme's palette as "Ainezumi" slate `#5E6E78` (palette_family slate), and Cantina's saturated `#1A4F71` + orange food photography gives a 39% saturated first screen, which breaks our 15% cap. So the band hue moves from sea blue to slate blue-grey, keeping Cantina's lightness relationships (band is the darkest colour after the scene ground; white text on it ≥ 7:1). Everything else uses Cantina's values within ±5% lightness.

| Role | Hex | Source (Cantina) | Use | Share of a page |
|---|---|---|---|---|
| Base | `#F4F6F7` | `#FFFFFF` (−3% lightness, cool white, not cream) | page ground | ~30% |
| Band (main) | `#4A5963` | `#1A4F71` role, hue → plan slate `#5E6E78` deepened | plate band, pills, section word colour, overlay menu ground, KV loading field, solid header bar | ~12% page, ≤ 4% first screen (pill only) |
| Slate (theme hex) | `#5E6E78` | `#1E5D87` assort role | hover of pills/tabs, tide hairlines on light ground, meta text on light | < 3% |
| Scene ground | `#14191C` | `#151515` (+cool tint, same lightness) | T3 scenes, footer, hero overlay colour | ~12% |
| Ink | `#1B2327` | `#151515` | headings and body on light | text |
| Light tint | `#E3E8EB` | `#F5F5F5` / `#C5C5C5` | rules, price-row hover, form field ground on light | ~4% |
| Muted text | `#5E6E78` | — | captions, dates | text |
| Accent ember | `#C8643C` | `#DC3232` red accent role | only: focus ring on the tabs/pills, form error text on dark (`#E08A66` lighter variant on `#14191C`), active nav underline | < 1% |
| Photography | slate-graded film photos | warm orange food, dim | hero, scenes, panels | ~35% |

- **First screen saturated share: hard cap 15%** (cap = min(30%, reference 39%) = 30% from the plan, lowered by this spec); target ≤ 12%. Achieve it with the cool slate photo grade (only the fish glaze and one candle carry warm colour) and no coloured UI except the one pill.
- Contrast: white on `#4A5963` = 7.4:1; white on `#14191C` 17:1; ink on `#F4F6F7` 15:1; `#5E6E78` on `#F4F6F7` 4.9:1 (captions ≥ 0.875rem).
- No beige, no cream, no large saturated field. Ember never fills an area larger than a 2px rule.

## 3. Type

font_direction **serif**: Latin serif for display and body; CJK headings in Noto Serif TC / Noto Serif JP (Mincho); no sans anywhere except system UI fallbacks.

- Display: **Fraunces** (variable, wght 300–400 used, opsz auto, SOFT 0, WONK 0), woff2 Latin subset. Replaces Cantina's Jost 400 light geometric look with a light serif (same thin, airy weight; tok(b)).
- Body: **Source Serif 4** (variable, wght 400 and 600), woff2 Latin subset.
- Load both and the CJK subsets **only through theme.json `fontFamilies` + `fontFace`** so the block editor iframe and the front end show identical fonts. style.css has `:lang()` rules → copy `shared/inc/editor-lang.php` unchanged to `inc/editor-lang.php` and `require_once` it in functions.php. Must pass `check-editor-fonts.mjs` (en and zh-TW).
- Stacks (exact):
  - display en/fr/de: `"Fraunces", "Source Serif 4", Georgia, serif`
  - body en/fr/de: `"Source Serif 4", Georgia, "Times New Roman", serif`
  - display zh-TW `:root:lang(zh-TW)`: `"Fraunces", "Noto Serif TC", "Songti TC", "PMingLiU", serif` (bundled subset of Noto Serif TC 400, built with the Hokuto/Hada workaround, not the broken subset script)
  - body zh-TW: `"Source Serif 4", "Songti TC", "PMingLiU", "MingLiU", serif` (no Noto Serif TC, no Japanese font — repo gate)
  - display ja `:root:lang(ja)`: `"Fraunces", "Noto Serif JP", "Hiragino Mincho ProN", "Yu Mincho", serif` (bundled Noto Serif JP 400 subset)
  - body ja: `"Source Serif 4", "Hiragino Mincho ProN", "Yu Mincho", serif`
- CJK: headings ≈ 0.75× the English size, letter-spacing 0.04em, body line-height 1.85; the hero/footer wordmark "NAGISA" stays Latin in every language; inner T1 page titles are translated and in zh-TW/ja set at 0.75× with letter-spacing 0.12em (no 0.3em caps tracking for CJK). fr/de: `hyphens: auto` on body and headings ≤ 4.25rem.
- theme.json font sizes (slug: value, source):
  - `small` 0.875rem (14px labels, tok(b) 14/21)
  - `base` 1rem (body 16px, tok(b))
  - `medium` 1.25rem
  - `large` 2rem (concept H2 32px, tok(b) 32/48, lh 1.5)
  - `x-large` `clamp(3rem, 5vw, 4.5rem)` (white headings on photos / bands)
  - `xx-large` `clamp(4.25rem, 6.7vw, 6rem)` (section word 96px slate, lh 1.2, tok(b) 96/115)
  - `wordmark` `clamp(4.25rem, 10.4vw, 9.375rem)` (150px, tok(b)) — **largest = 9.375rem ≥ 4.25rem**
- Weights: Fraunces 300 for every display size ≥ 2rem, 400 for the logo and small headings; body 400, 600 only for prices and the table's item names.
- Body: 1rem, line-height 1.7 (Cantina 24/16 = 1.5, raised for a serif at 16px), letter-spacing 0.02em (Cantina 0.1em is for Jost; tracking a serif that wide reads poorly). Labels: 0.875rem, uppercase small caps (`font-variant-caps: all-small-caps`), letter-spacing 0.12em.
- Overlay menu links (open menu): Fraunces 300 `clamp(2.5rem, 6.1vw, 5.5rem)` (88px, tok(b)) white on `#4A5963`, line-height 1.5, left at the 80px margin.

## 4. Header, footer, global

- Header (tok(f)): 3 columns, height 100px at top, transparent over the photo head, white type. Left: tide icon + "Menu" (Navigation overlay "always" — **exactly one top menu**). Centre: T2 logo lockup. Right: "Visit" text link (0.875rem) + slate pill "Book a table" (48px high, padding 0 26px, radius 999px, white 1rem; hover `#5E6E78`). Side padding 40px (tok(c) header 20px, doubled so the icon's visual edge lines up with the 80px content margin once the icon's own padding is counted). Header is `position: absolute` over the photo head on every page that has one (no sticky, no scroll script). On pages without a photo head (single post, 404, search): solid `#4A5963` bar 60px high (Cantina's scrolled header), same content.
- Mobile (< 782px): header 72px; left tide icon + "Menu"; centre logo lockup at 80% scale (wordmark 1rem, tide 104px); right pill "Book" 40px high. "Visit" text link hidden (it is in the overlay menu).
- Overlay menu: full screen `#4A5963`, links: The Day, The Boat, Kitchen, Menu, Tables, Journal, About, Visit, Newsletter (9). Under the links: hours line and the email. Close = "Close" text + × drawn with two 1px lines.
- Footer: ground `#14191C`, padding 160px 80px 48px. Row 1: newsletter subscribe (see 9) left half, hours + address right half. Row 2: footer wordmark "NAGISA" Fraunces 300 `clamp(4.25rem, 10.4vw, 9.375rem)` justified like the hero, letters `sp-reveal sp-reveal--up` inside an `sp-stagger` row (Cantina footer letters rise, stagger 0.2s → we use sp-stagger's 0.12s step, `--sp-dur: 1.2s`, ease `cubic-bezier(.625,.05,0,1)` via the `--sp-ease` variable if present, else default), tide lines under it. Row 3: small links (Newsletter, Visit, Journal) + "© 2019–2026 Nagisa Grill". Language switcher here.

---

## 5. Home page

### First screen (1440×900; see KV checklist)
- Cover 100svh, P01, overlay .30, `sp-parallax` `--sp-par: 8%`. Header absolute on top. Inner container: flex column, `justify-content: flex-end`, padding 0 80px; children in normal flow: wordmark row, info bar. No absolute-positioned text, no vertical text.
- 390×844: wordmark `4.25rem`, spans 24px margins (letters ~50px each, still edge to edge), baseline at ~74% height; info bar stacks: line 1 "Scroll · Wed–Sun · 18:00 / 20:30", line 2 "Today's boat: the Wren, Berth 14", line 3 the two outlined tabs side by side, each `calc(50% − 6px)` wide, 44px high. Nothing overlaps (auto-gates).
- Forbidden on the first screen: tables, forms, search, a centred giant heading, any second pill.

### Block order
| # | Pattern | Purpose | Layout and photos | Copy (en words) |
|---|---|---|---|---|
| 1 | `front-kv` | **T1** first screen | as above, P01 | ~20 |
| 2 | `front-concept` | one boat, one service | Cantina concept scene: full-bleed P02 (boat landing at dawn) at min-height 900px, overlay `#14191C` .45. Left column (x 80px, max-width 520px), vertically centred: tide mark, label "Concept", heading "One boat, / one service." Fraunces 300 `x-large` white; two narrative paragraphs white 1rem lh 2 (tok(b) JP lh 2.5 reference). Nothing on the right half (the photo shows). | 2 paragraphs, 95 words |
| 3 | `front-day` | how a service day runs (day-schedule) | Base ground, padding 240px 80px. Cantina Party/Buffet split (tok(c)): left column 469px: tide mark, section word "The day" `xx-large` slate `#4A5963`, then photo P03 (chalk board close-up) 4:5, width 360px, 64px under the word. Right column from x≈719 (50%) to 1360: one intro sentence, then **6 day rows** separated by the tide hairline: each row = time (small caps 0.875rem slate, 96px column) · title (Fraunces 400 1.5rem ink) · one sentence (1rem). Rows: 05:30 The Wren leaves Berth 14 · 10:30 The catch lands at the quay · 15:00 The board is written · 17:30 The bar opens · 18:00 First seating · 20:30 Second seating. Under the rows a text link "The whole day ⟶" to /the-day/. Rows: `sp-stagger` parent, each row `sp-reveal sp-reveal--up`. | 20 + 6×14 = ~105 |
| 4 | `front-kitchen` | what the kitchen will not rush | **T3 scene** on `#14191C`: label "The kitchen", heading "What the kitchen / will not rush." white `x-large`; duo P04 (small, hands scoring a fish over charcoal, 1.4:1, flush left 28%) + P05 (large, dining room before service, 1.6:1, flush right 72%, +120px). Two narrative paragraphs in white beside/below the small photo (desktop: under the small photo, max-width 340px; mobile: after the duo). | 2 paragraphs, 90 words |
| 5 | `front-tables` | how a table is held | Base ground. Cantina Party/Buffet (tok(c)): section word "Tables" `xx-large` slate left column 469px; right column from 50%: narrative paragraph (60 words) + the 4 table rules as short lines with a tide hairline between (deposit €20 per guest, held 15 minutes, cancel by 15:00 the day before, parties up to 8), then pill "Book a table" (48px, slate). Below, at x=80, photo P06 (host placing a folded card on a table for two) 555px wide, 1.4:1, radius 0 (tok(e) party photo 555px 1.4:1 at x=80); right of it, aligned to its bottom, a single italic Fraunces 1.25rem line: "A table is a promise; we keep it for fifteen minutes." | 60 + 40 = ~100 |
| 6 | `front-plates` | plates of the boat (menu entry) | **Slate band** `#4A5963` full-bleed, padding 140px 0 145px (tok(c) menu band 140/145). Heading "Plates of the boat" Fraunces 300 `x-large` white at x 80px. Then 3 equal full-bleed panels (Cantina Lunch/Dinner/Drink), each 1/3 width, height 640px (mobile: full width, 420px, stacked), photo with overlay `#14191C` .35: P07 "At the bar" / "Shore plates · €28", P08 "The Boat Menu" / "Five courses · €78", P09 "Whole fish for two" / "With two sides · €64". Title Fraunces 300 3rem white centred at 22% panel height, price line 0.875rem under it, a text link "The menu" with a 1px white underline at 84% height. Foot line right-aligned 0.875rem: "Tell us about allergies when you book." Panels are a row container with `sp-stagger`, panels `sp-reveal sp-reveal--up`. Not a price table. | ~40 |
| 7 | `front-journal` | stories | Base ground, padding 240px 80px. Section word "Journal" `xx-large` slate left; text link "All entries ⟶" right on the same baseline. Query Loop 3 latest posts, 3 columns gap 40px: featured image 4:3 radius 0, date (small caps slate), title Fraunces 400 1.5rem. Posts shown: 1 (P10), 2 (P11), 3 (P12). `sp-stagger` + `sp-reveal--up` on the cards' parent/columns. | Query Loop |
| 8 | `front-visit` | visit + book | Full-bleed `sp-parallax` Group/Cover, `--sp-par: 10%` (mobile 6%), P13 (harbour at dusk, the restaurant's lit windows across the water), min-height 72svh, overlay .30. Foreground, left at 80px, bottom-aligned: tide mark, "Visit" label, heading "7 Harbour Row, / Port Ellery." white `x-large`, hours line "Wednesday to Sunday · bar 17:30 · seatings 18:00 and 20:30", pill "Book a table" (white ground, ink text) + text link "How to find us ⟶". | ~30 |
| — | footer | subscribe + wordmark | see 4 and 9 | — |

English home: ~480 words visible; narrative paragraphs in blocks 2, 4 and 5 (≥ 3 paragraphs of ≥ 20 words each). CJK home ≥ 500 characters.

**Home photo positions (13, no repeats):** P01 (KV) · P02 (concept) · P03 (day) · P04 P05 (scene duo) · P06 (tables) · P07 P08 P09 (plate panels) · P10 P11 P12 (journal cards) · P13 (visit band). Journal post dates must make posts 1–3 the newest so the loop shows P10–P12.

### Comparison with recent themes
| # | Yawara Rheumatology | Kuki Climate | Toso Paints | Kyukyu College | **Nagisa Grill** |
|---|---|---|---|---|---|
| 1 | half-and-half first screen + sideways photo strip | framed KV window + year strip | three-column photo KV | stacked giant name + photo with polygons | **one full-bleed film photo, edge-to-edge foot wordmark, info bar + outlined tabs** |
| 2 | seam tab cards | concept card | ruled statement band | split ABOUT row | **full-bleed dim photo concept (white text left)** |
| 3 | plan steps + parallax band | ledger rows | range strip | sticky term rows | **96px word left + day rows right with tide hairlines + small photo** |
| 4 | team squares | parallax plant band | sticky chapters | week rows | **near-black scene, offset edge-to-edge photo duo** |
| 5 | journal squares | pill-toggle covers | catalogue | facts | **96px word + rules + pill, 555px photo** |
| 6 | close | survey | mixing offset rows | rail | **slate band with three full-bleed photo panels** |
| 7 | — | marquee strip | order | — | journal (3 cards) |
| 8 | — | prices / close | journal / visit | — | **parallax visit band** |
Why not alike: no framed inset window (Kuki), no half/half split first screen (Yawara), no polygons or stacked giant name (Kyukyu), no three-column first screen (Toso: our three panels are a mid-page slate band below near-black scenes), no sticky chapter stacks or ledger numerals (our day rows lead with small 14px times, the title dominates, rows are divided by wavy tide lines, and there is no pinning). Signature shapes (horizon wordmark, tide lines, edge-to-edge dark duo) are unique to this theme and not in `steps/used-refs.txt`. No team grid, no step grid, no vertical timeline, no dashboard, no cut-outs.

---

## 6. Inner pages (9 + journal templates)

Each page: T1 mini head (photo, title, info bar) → body sections opening with the T2 tide mark + label → close line (pill "Book a table" or text link). Content column 720px for prose; section word headings `xx-large` slate where the page uses the Cantina split (469px left / 50% right). No sidebar. Info bar right-hand fact per page in brackets.

1. **The Day** `/the-day/` (template `page-wide`; [Seatings 18:00 · 20:30]): head P14. Intro paragraph (60 words). The full **8 day rows** in the split layout with tide hairlines (adds 11:00 "The fish is broken down" and 23:00 "The board is wiped"), each with a 40–50 word paragraph (this is the page_structure day-schedule; rows, not a vertical line with dots). Then T3 duo P03 + P05 with "Why one service" two paragraphs. Slate band "Before the doors open" with one 50-word paragraph and text link to Kitchen.
2. **The Boat** `/the-boat/` ([The Wren · Berth 14]): head P02. Section "One boat" (the Wren, a small wooden day boat, line and pot fishing, out at 05:30, back by 10:30, skipper Tomas Varga). T3 duo P10 + P15. Section "What comes in" (the catch changes daily; typical: hake, mackerel, sea bream, squid, mussels, crab in season — no weights or yield numbers). Section "When the sea says no" (on days the Wren stays in, the menu is the shore plates and the stock-pot; tables stay booked).
3. **Kitchen** `/kitchen/` ([Charcoal grill · one pass]): head P04. "What we will not rush" as four short ruled statements (rest the fish after the grill; the stock simmers six hours; bread is baked at 14:00; the board is written only when the fish is broken down). T3 duo P11 + P14. People of the kitchen as **text rows** (name, role, one sentence; no photo grid): Inès Calder, Jun Park, Noor Haddad, Lucía Ferraz.
4. **Menu** `/menu/` ([Five courses €78]): head P09. Intro (the board changes daily; these are the fixed formats and prices). **Price table** (all 6 prices, section 8) full width ≥ 782px: columns Item / What it is / Price; price column `white-space: nowrap; text-align: right`; 1px tide hairline between rows; no reveal. Mobile: each row stacks (item, description, price on its own line right-aligned). Then the slate band with three panels P07, P08, P12 ("At the bar", "The Boat Menu", "Four glasses"). Allergies paragraph.
5. **Tables** `/tables/` (booking page; [Held 15 minutes]): head P05. Section word "Tables" split: narrative + **how a table is held** in 4 ruled lines (section 8). T3 duo P06 + P16. **Booking form slot** (section 9) on base ground after the duo, with the mailto fallback button "Email for a table". Paragraph on groups (up to 8 per table; larger parties write first).
6. **About** `/about/` ([Since 2019]): head P15. Story in three sections (founded 2019 by Inès Calder and Tomas Varga on Harbour Row; why one boat; why one service). T3 duo P14 + P13. **People**: all 7 named people as text rows (name Fraunces 1.5rem · role small caps · 25-word line), tide hairline between rows; no portrait grid.
7. **Journal** (`home.html` posts index `/journal/`, `archive.html`, `category.html` via archive, `tag.html`; [Every Wednesday]): head P02, section word "Journal"; 2-column list: image 4:3 left 7/12, text right for the first post, then 3-column cards. Single post (`single.html`): solid slate header bar, category label with tide mark, title Fraunces 300 `x-large`, date, featured image 16:9 full content width, text column 680px.
8. **Newsletter** `/newsletter/` ("The Board, by email"; [Wednesdays]): head P16. Standalone subscribe page (not an alias of the post list): 60-word explanation (Wednesday morning letter with the week's boat notes and the next two weeks' open tables), the **newsletter slot** on a `#14191C` section (dark-ground form tokens), privacy line, link to Journal.
9. **Visit** `/visit/` (contact; [Wed–Sun · 17:30–23:00]): head P13. Split: address, hours, email, getting there (harbour tram stop "Harbour Row", 4-minute walk; bicycle racks on the quay) on the left; **contact form slot** on the right with the mailto fallback "Write to us". T3 duo P06 + P01 below. Close line.
Also: 404 and search (solid slate header, tide mark, text link home).

theme-meta `pages`: home, about, news (`/journal/`), article (post 1), category (Category "From the boat"), tag (tag "the-wren"), newsletter (`/newsletter/`), contact (`/visit/`). Exactly one page with role `posts` (Journal, empty content).

---

## 7. Motion (sp-scroll only; max three effect types per page)

Chosen from stage-a.md candidates:
| Effect (sp-*) | Where | Source (site, trigger, time, ease) |
|---|---|---|
| `sp-parallax` | home KV Cover `--sp-par: 8%`; home visit band `10%`; scene duo figures `10%` small / `6%` large; every inner T1 head `6%` | Cantina: hero photo drifts and scene photos slide over the dark ground (scroll, continuous, scrub/linear) |
| `sp-reveal sp-reveal--up` inside `sp-stagger` | home day rows (block 3), plate panels (block 6), journal cards (block 7), footer wordmark letters; Day page rows; About people rows | Cantina: wordmark/footer letters rise, y 24→0, stagger 0.2s, 1.2s, `cubic-bezier(.625,.05,0,1)`; menu link stagger. Set `--sp-dist: 24px`, `--sp-dur: 1.2s` on these parents. |
| `sp-reveal sp-reveal--mask` | large photo of each T3 duo (on its wrapper, clip on the child per spec) | Cantina: footage window opening (0.8s power3.in); sp default 1.2s ease-out |
- **Parallax (mandatory):** home block 1 (KV) — Cover with class `sp-parallax`, background image P01 is the Cover background layer `.wp-block-cover__image-background`; foreground = wordmark + info bar in the inner container (never inside the moving layer); `--sp-par: 8%` desktop, `6%` at < 782px (set in a media query on the variable; parallax stays on mobile). Second parallax: home block 8, P13, `--sp-par: 10%` / 6%. Must pass `check-parallax.mjs` (≥ 6px difference desktop and mobile; 0 with reduced motion).
- **Hero has no `sp-reveal`.** The KV intro (opening window + letter rise + header drop) is a load-time CSS keyframe in style.css, not a reveal: all its hidden states only under `html.sp-js:not(.sp-no-motion)` inside `@media (prefers-reduced-motion: no-preference)`; `animation-fill-mode: both`; total ≤ 2.4s; final state = fully visible. The window is an empty `::after` on the KV Cover (`content: ""`, `position:absolute; inset:0; z-index:3; pointer-events:none; border: solid #4A5963; border-width: 0`), animated from `border-width: 28svh 30vw` (hold 0.25s) to 0 in 0.8s — no clip-path on any observed element and no change to the parallax layer's `animation`. Letters: `@keyframes` y 24px→0, opacity 0→1, 1.2s `cubic-bezier(.625,.05,0,1)`, delay 0.9s + n×0.2s. Header: y −12px→0, 0.9s, delay 1.6s. `?sp-static`, reduced motion, no-JS, editor: no animation, everything visible.
- No reveal on: hero, forms, price table, the Tables rules, legal/privacy text. `sp-reveal` count ≤ 60% of home blocks' elements; none inside block 1. No scroll listeners, no GSAP/AOS/Lenis/pin.

## 8. Fixed numbers (identical on every page, footer, demo posts and all five languages)

**Prices (6, EUR):**
| Item | What it is | Price |
|---|---|---|
| The Boat Menu | five courses from the morning's catch | €78 |
| Four glasses | wine pairing for the Boat Menu | €42 |
| Whole fish for two | grilled over charcoal, two sides | €64 |
| Shore plates | three small plates, bar only | €28 |
| Children's plate | under 12, grilled fish and potatoes | €18 |
| Table deposit | per guest, taken off the bill | €20 |

**How a table is held (process, 4):** 1) Book up to 30 days ahead by form or email. 2) A deposit of €20 per guest holds the table and comes off the bill. 3) We hold your table for 15 minutes after the seating time. 4) Cancel by 15:00 the day before and the deposit is returned in full. Tables for 1–8 guests.

**Service day (8 rows):** 05:30 the Wren leaves Berth 14 · 10:30 the catch lands at the quay · 11:00 the fish is broken down, bones go to the stock · 15:00 the board is written · 17:30 the bar opens · 18:00 first seating · 20:30 second seating (last order 22:00) · 23:00 the board is wiped. Home shows 6 of them (05:30, 10:30, 15:00, 17:30, 18:00, 20:30).

**People (7, fictional):** Inès Calder — chef and co-founder · Tomas Varga — skipper of the Wren, co-founder · Amara Osei — front of house, keeps the table book · Jun Park — grill cook · Noor Haddad — breaks down the fish · Lucía Ferraz — bread and desserts · Henrik Dahl — wine and the bar.

**Journal stories (4 posts, category / tags):** 1 "A morning on the Wren" (From the boat; the-wren, catch) P10 · 2 "What we do with the rest of the fish" (Kitchen; stock, catch) P11 · 3 "Four glasses for one boat" (At the table; wine) P12 · 4 "How we hold a table" (At the table; tables, the-wren) P16. Dates: post 4 oldest, post 1 newest. Each ≥ 350 words in en.

**Kitchen fixed times (Kitchen page only):** the stock simmers 6 hours; bread is baked at 14:00. **Getting there:** tram stop "Harbour Row", 4-minute walk.

**Place and time:** 7 Harbour Row, Port Ellery; founded 2019; Wed–Sun; closed Mon–Tue; 17:30–23:00; seatings 18:00 and 20:30.
No awards, no press, no "best", no guaranteed freshness claims, no real brands or real places.

## 9. Forms (form contract v1 — this theme has `steps/form-contract-v1`)

Copy `pipeline/assets/forms/shippress-forms.php` → `inc/shippress-forms.php`, CSS and editor JS unchanged → `assets/`; `require_once` in functions.php. Never hard-depend on a plugin, never fake a form, no mail/subscribe backend, no import-time plugin detection.

- **Tables** (`/tables/`, booking) and **Visit** (`/visit/`, contact): PHP pattern calls `shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) )` as its own block (not inside a paragraph/button). Fallback = the existing mailto button, unchanged class/href: Tables "Email for a table" → `mailto:table@nagisagrill.example?subject=<translated "Table request">`; Visit "Write to us" → `mailto:table@nagisagrill.example`. Never link to /visit/ itself. Position: Tables — after the T3 duo, left-aligned in the 720px column on base `#F4F6F7`; Visit — right half of the split, top-aligned with the address.
- **Newsletter** (`/newsletter/` standalone page) and **footer subscribe row** (every page, including home — far below the first screen): `shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'table@nagisagrill.example', 'label' => forms_email, 'submit' => forms_subscribe, 'notice' => forms_mail_notice, 'subject' => forms_mail_subject ) )`. Without plugins: visible required email input + submit, native mailto POST, notice under it. Plugin order: MailPoet (explicit ID via `shippress_form_id`), then first published MC4WP form; CF7/WPForms only by an explicit dedicated newsletter form ID. No newsletter form on the home first screen and none in the hero.
- **Fields to style** (all scoped to plugin classes / `.sp-newsletter-fallback`, no global input selectors): label (small caps 0.875rem, letter-spacing 0.12em), text/email/tel/date/number inputs and select (height 48px, padding 0 20px, 1px border), textarea (min-height 160px, padding 16px 20px), checkbox/radio (18px, accent `#4A5963`), acceptance/consent line, submit (48px pill), required marker, inline validation tip, response output (error/success), spinner.
- **Tokens:** `--sp-form-accent: var(--wp--preset--color--band)` (#4A5963); `--sp-form-on-accent: var(--wp--preset--color--base)` (#F4F6F7); `--sp-form-radius: 24px` (half the 48px pill height, tok(d) pills 999/48px → pill-ended fields and submit); `--sp-form-focus: var(--wp--preset--color--accent)` (#C8643C, 2px outline, offset 2px); `--sp-form-surface: #FFFFFF` on light, `--sp-form-text: #1B2327`; `--sp-form-border: #C5CDD2`.
  - Dark ground (footer, Newsletter form section, both `#14191C`): `--sp-form-surface: rgba(255,255,255,.06)`, `--sp-form-text: #F4F6F7`, `--sp-form-border: rgba(244,246,247,.45)`, `--sp-form-accent: #F4F6F7`, `--sp-form-on-accent: #14191C`, focus `#E08A66`.
  - Error: text and 1px border `#B4492A` on light, `#E08A66` on dark; success: `#3F6B5A` on light, `#9CC5B2` on dark; messages inherit the section font, 0.875rem, no filled boxes.
- **Five-language copy** (semantic keys in `inc/i18n/en.php` first, extract with `L10N_SEMANTIC=1`, then zh-TW, ja, fr, de, localised not literal; check the rendered dynamic-block attributes too): `forms_email` ("Your email"), `forms_subscribe` ("Send the request"), `forms_mail_notice` ("This opens your email app. Send the message to ask for the Wednesday letter — you are not subscribed yet."), `forms_mail_subject` ("Subscribe to The Board"), `contact_email` ("Write to us"), `tables_email` ("Email for a table"), `tables_mail_subject` ("Table request"), plus the footer row heading "The Board, by email" and a privacy line ("One letter on Wednesdays. Unsubscribe any time.").
- No `sp-reveal` on any form or its parent section. Must pass `form-runtime-check.php` (five languages, no plugins) and `repo-gates.sh forms`; check CF7 styling on light and dark at 390px and desktop without submitting.

## 10. Responsive

- 390px first screen: no vertical text, no absolutely positioned labels over text; wordmark and info bar in flow (section 5). Header items never overlap the wordmark (wordmark baseline ≥ 140px below the header bottom).
- Cantina split (469px / 50%) → single column < 960px, section word first, then the right column content.
- T3 duo < 782px: small photo 72% width flush left, large photo 100% width below it with −40px overlap upward (still edge to edge), copy after.
- Plate panels < 782px: stacked, 420px each.
- **Price table ≥ 782px: full content width (1280px at 1440, `width: 100%`), price column `white-space: nowrap; text-align: right; padding-right: 0`, never clipped (auto-gates at 800 and 1280).** < 782px: every table stacks (`display: block` rows, label line, price right on its own line).
- No horizontal scroll at 390 or 1280 (`overflow-x: clip` on html/body).

## 11. Imagery — photo (from stage-a IMAGERY: photo)

Real photographs, generated one at a time with `IMAGE_STYLE="<STYLE>" scripts/grok-image.sh out.webp "<subject>"`, read every image; regenerate on any text/letters, logo, broken faces/hands, style drift. 16 images, 0 cut-outs, each ≤ 300 KB and ≤ 2000px, WebP, one readme.txt line each (AI-generated, CC0).

STYLE (exact string, every image):
`film photograph, 35mm, visible fine film grain, soft halation on highlights, cool slate blue-grey colour grade with muted greys and deep soft shadows, natural available light, documentary candid moment, modern international coastal seafood restaurant, diverse adults, calm and unposed, no text, no readable writing, no letters, no logos, no signage, no Japanese elements`

| ID | Subject / composition | Aspect | Used on (each at most once per page) |
|---|---|---|---|
| P01 ★ | Evening service at table height: a server's hands set a whole grilled fish on a pale plate between two guests (shoulders and hands, mid-conversation); behind them, soft focus, the chef raises chalk to a dark board (marks abstract, unreadable); warm glaze on the fish is the only warm colour | 16:9 | **Home KV**; Visit duo (large) |
| P02 ★ | A small wooden-hulled day boat against a stone quay at dawn, a crew member hands a crate of fish up to a cook, light mist | 16:9 | **Home concept**; The Boat head; Journal index/archive head |
| P03 ★ | Close-up of a hand with chalk on a dark slate board, strokes blurred and illegible, flour-dusted apron edge | 4:5 | **Home day**; The Day duo (small) |
| P04 ★ | Hands scoring the skin of a whole fish over a low charcoal grill, wisps of smoke | 1.4:1 | **Home scene small**; Kitchen head |
| P05 ★ | Dining room before service: bare wood tables set, linen, tall windows onto a grey harbour | 1.6:1 | **Home scene large**; The Day duo (large); Tables head |
| P06 ★ | A host's hand placing a small folded blank card on a table set for two, candle unlit | 1.4:1 | **Home tables**; Tables duo (small); Visit duo (small) |
| P07 ★ | Three small plates on a zinc bar counter: grilled squid, mussels, bread; a glass of white wine | 3:4 | **Home plates panel 1**; Menu panels |
| P08 ★ | Overhead, one plated fish course with a clear broth on a grey ceramic plate | 3:4 | **Home plates panel 2**; Menu panels |
| P09 ★ | Whole grilled sea bream for two on an oval platter with lemon and greens, two forks | 3:4 | **Home plates panel 3**; Menu head |
| P10 ★ | Crates of fresh fish on ice on the boat deck in morning light | 4:3 | **Home journal (post 1)**; The Boat duo (small) |
| P11 ★ | A cook breaking down a fish on a wooden board, bones set aside in a steel tray for stock | 4:3 | **Home journal (post 2)**; Kitchen duo (small) |
| P12 ★ | Wine being poured into two glasses at a candlelit table | 4:3 | **Home journal (post 3)**; Menu panels |
| P13 ★ | Harbour at dusk, the restaurant's lit windows reflected across calm water, boats moored | 21:9 | **Home visit parallax band**; About duo (large); Visit head |
| P14 | The pass during service: three cooks plating side by side, focused, warm lamps | 16:9 | The Day head; Kitchen duo (large); About duo (small) |
| P15 | Skipper coiling rope on the deck of the day boat, overcast sea | 4:5 | About head; The Boat duo (large) |
| P16 | A table after service: folded napkins, a snuffed candle, two empty glasses | 16:9 | Newsletter head; Tables duo (large); Journal post 4 |
★ = used on the home page (13 positions, no repeats).
Per-page check (no repeats on a page): Home P01–P13 · The Day P14, P03, P05 · The Boat P02, P10, P15 · Kitchen P04, P11, P14 · Menu P09, P07, P08, P12 · Tables P05, P06, P16 · About P15, P14, P13 · Visit P13, P06, P01 · Newsletter P16 · Journal index / archive: head P02 + post cards P10, P11, P12, P16 · Single post: its featured image only.

## 12. Similarity table (target ≈ 80% to Cantina)

| Dimension | Reference value (token) | Nagisa Grill value |
|---|---|---|
| Main band colour / share | `#1A4F71`, ~14% (tok a) | `#4A5963` (plan slate, reason in 2), ~12% |
| Ground | `#FFFFFF` ~30% (tok a) | `#F4F6F7` ~30% |
| Scene ground | `#151515` ~12% (tok a) | `#14191C` ~12% |
| Accent | `#DC3232` < 0.5% (tok a) | `#C8643C` < 1% |
| First-screen saturation | 39% (tok a) | ≤ 12% target, hard cap 15% |
| Hero wordmark | ~150px, ls ≈ 0.5em, one line across 80px margins, bottom (tok b) | 9.375rem (150px), justified letters across 80px margins, bottom |
| Section word | 96px/115px, main colour (tok b) | 6rem / lh 1.2, `#4A5963` |
| Concept heading | 32px lh 1.5 (tok b) | 2rem lh 1.5 (`large`); photo headings `x-large` |
| Body | 16px / 24px (tok b) | 1rem / 1.7 (serif) |
| Small labels | 14px/21px ls .7px (tok b) | 0.875rem / 1.5, ls 0.05–0.12em |
| Overlay menu links | 88px (tok b) | `clamp(2.5rem, 6.1vw, 5.5rem)` |
| Side margin / header | 80px / 20px (tok c) | 80px / 40px |
| Section padding | 240–300px; menu band 140/145 (tok c) | 240px; slate band 140/145 |
| Split | heading col ~469px, copy from x≈719 (tok c) | 469px / from 50% |
| Pills | 48px, r 999px, main bg, white 16px (tok d) | 48px, r 999px, `#4A5963`, white 1rem |
| Shadows / borders / photo radius | none / none / 0 (tok d) | none / none / 0 |
| Hero image | 16:9 full-bleed, overlay .3 (tok e) | 16:9 full-bleed, overlay .30 |
| Scene duo | 28% 1.4:1 left + 72% 1.6:1 right lower, near-black (tok e) | identical proportions, +120px offset |
| Party photo | 555px 1.4:1 at x=80 (tok e) | P06 555px 1.4:1 at x=80 |
| Logo / icon | caps + 3 wave lines 140px; 60×20 icon + "Menu" (tok f) | caps + 3 own tide lines 140px; 40×14 icon + "Menu" |
| Header | 3 columns, transparent → solid main bar 60px (tok f) | 3 columns, transparent; solid 60px slate bar on pages without photo head |
| Hero foot | "Scroll" left + tagline right, 14px (tok f) | info bar "Scroll · service" left + boat + tabs right, 14px |
| Intro | blue field, window 634×396 → full bleed 0.8s power3.in (tok g) | slate field, centred window → full bleed 0.8s `cubic-bezier(.55,.055,.675,.19)` |
| Letter rise | stagger .2s, `cubic-bezier(.625,.05,0,1)` (tok g) | same values (KV keyframe); footer via sp-stagger, 1.2s |
| Header drop | 1.6s power1.out (tok g) | 0.9s power1.out after 1.6s delay |
| Scenes | pinned, slide over dark ground (tok g) | sp-parallax 10% / 6% duo + sp-reveal--mask |
| Imagery | real food/interior photos, dimmed (tok e) | real film-grain photos, slate grade, dimmed |
| Type family | Jost light sans (tok b) | Fraunces 300 / Source Serif 4 (plan: serif) |

## 13. Home acceptance checklist

1. First screen = KV checklist items 1–6 all visible: P01 full-bleed with overlay, centred tide logo, tide "Menu" icon left, "Visit" + one slate pill right, "NAGISA" edge to edge at the foot (≥ 9rem at 1440), info bar with hairline, two outlined tabs; opening window and letter rise play once with `?sp-motion`, nothing animates with `?sp-static`.
2. `check-first-screen.py` saturated share ≤ 15% (target ≤ 12%). No table, form, search or centred giant heading on the first screen.
3. 390px: no vertical text, no absolute labels over text, wordmark spans the width, tabs side by side, no overlap (auto-gates pass).
4. Block order exactly as section 5 (8 blocks + footer); differs from the four recent themes per the table.
5. T2 tide lines visible in header (logo + icon), above every section label, between day rows, under the footer wordmark.
6. T3 scene: near-black ground, small 28% photo flush left touching a 72% photo flush right that sits 120px lower, both bleeding off the viewport edges, radius 0.
7. Slate band with three full-bleed photo panels, prices €28 / €78 / €64 matching the Menu page.
8. 13 home photo positions P01–P13, no repeats, all film-grain slate grade, no text/logos/bad hands.
9. ≥ 250 English words; narrative paragraphs in blocks 2, 4, 5; numbers match section 8 (18:00, 20:30, 17:30, Berth 14, €20, 15 minutes, 2019).
10. Motion: `check-parallax.mjs` passes (KV and visit band parallax on desktop and mobile; ≥ 3 reveals hidden before entry; none left transparent; reduced motion static). No reveal in block 1, none on forms or the price table.
11. Fonts: Fraunces/Source Serif 4 and zh-TW/ja Noto Serif subsets via theme.json fontFace; `check-editor-fonts.mjs` passes; largest size 9.375rem.
12. Footer newsletter slot renders email + submit + mailto notice with no plugins, readable on `#14191C`; exactly one top menu.
