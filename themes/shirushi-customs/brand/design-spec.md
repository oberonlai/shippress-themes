# Shirushi Customs: design spec (stage 1, binding for implementation)

Slug `shirushi-customs`, customs broker for small manufacturers, type **business** (WooCommerce declared compatible, not required). Design-plan row b19-4: archetype asymmetric-masonry, hero full-bleed-photo, nav overlay, first_screen **timeline-line**, page_structure **process-timeline**, font_direction **sans**.

Main reference: **takenaka-foodware.jp** (https://takenaka-foodware.jp/), screenshots `brand/ref/scroll-take-*.png`, measured values `brand/reference-tokens.md` (cited below as `tok(a)`…`tok(g)`). No secondary reference. Borrow structure, technique, colour relationships, motion and the key-visual concept. Do **not** copy its photos, video, text, logo or its exact page.

Imagery: **photo** (stage-a IMAGERY: photo). Documentary photography, the hero a dimmed low-key frame, list photos high-key on pale ground. No illustration.

Fixed brand facts (all pages, all five languages, see §8): Shirushi Customs, founded **2009**, desk at **Shed 11, North Quay, Port Ardale** (fictional port). Currency **USD** in every language.

---

## 1. Signature techniques (three + one supporting; each must be obvious at a glance)

### T1. Dark pinned-feeling stage, statement rides up over a slow photo, timeline line along the bottom (takenaka first screen → 900 → 1800)
- **Reference** (`scroll-take-first.png`, `-900`, `-1800`; `tok(c)`, `tok(g)`): a dark, desaturated, full-bleed still-life (rows of stacked bowls on timber shelves, a gloved hand) fills the whole first screen under an overlay header. There is no headline at first; the 3-line statement sits low and rides up as you scroll (hero 250vh, copy sticky, y 170 scrub). A tiny "Scroll Down" label + 1px bar sits bottom-right. Then a pale grained paper sheet takes over edge-to-edge (the photo just ends, no rounded edge, no gradient).
- **Ours (home block 1 `front-stage`)**: full-bleed Cover, `min-height: 150vh` desktop / `125vh` mobile (`tok(c)` 250vh/200vh, reduced so the paper arrives sooner), background **W1** with `sp-parallax` (`--sp-par: 10%`, mobile 6%). The content column starts at `padding-top: 64vh`, so at load the H1 statement's first two lines are visible at bottom-left of the first screen; because the photo moves slower than the content, the statement visibly *rides up over the photo* while scrolling (the parallax delta replaces GSAP scrub; no reveal on hero).
  - H1 statement at columns 2–7: "Your goods, / cleared with / every line checked." Onest 400, `clamp(2.25rem, 4.4vw, 4.25rem)` (preset `xx-large` = 4.25rem), line-height 1.15, letter-spacing .01em, colour `#F1F3F2`. Left-aligned, never centred.
  - Intro paragraph at columns 7–11, top aligned 40vh below the H1 (ref places the 3-line copy at x≈720 of 1440): Source Sans 3 1rem, line-height 2.0, letter-spacing .06em (ref `tok(b)` intro 16px/200%/.12em; .12em kept for zh-TW/ja), white at 92%. ~45 words.
  - Text link pill under the intro: "How a clearance runs" + Ø32 white disc with ink arrow (`tok(f)` pill/disc, inverted on dark).
  - **Timeline line** (= ref "Scroll Down" bar, made the first_screen `timeline-line`): a `position: sticky; bottom: 32px` element at the end of the stage content, so it is pinned to the bottom of the viewport the whole time the stage is on screen. Geometry: 1px line `rgba(241,243,242,.35)` from 22% to 92% of the viewport width; five 1×9px ticks at 0/25/50/75/100% of the line; labels above each tick in Onest .75rem, letter-spacing .16em, uppercase: `01 DOCUMENTS · 02 CLASSIFICATION · 03 DECLARATION · 04 DUTY · 05 RELEASE`. Far left (x 40px) the word "Scroll" .6875rem + a 1×24px bar (ref "Scroll Down" knob).
  - Fill: a 1px `#F1F3F2` overlay on the line. Static / no-JS / reduced-motion / `?sp-static` / unsupported browsers = **fully filled, all labels `#F1F3F2`** (final state). Optional enhancement only inside `@supports (animation-timeline: scroll()) and (prefers-reduced-motion: no-preference)` with selectors starting `html.sp-js:not(.sp-no-motion)`: `scaleX(.2→1)` on `animation-timeline: view()` of the stage, labels change **colour** from `rgba(241,243,242,.6)` to `#F1F3F2` (never opacity < 1, so the motion checker never sees transparent text). No JS, no scroll listener.
  - Then the paper sheet `#F1F3F2` (+ grain, §2) starts straight under the photo, flat edge, no overlap tricks.
- **Must not be diluted**: the first screen is ≥95% photograph, dark (average luminance ≤ 18%), with only the header, the first statement lines bottom-left and the timeline line; no boxed card, no gradient band, no centred headline, no buttons in colour. The statement must start low (top ≥ 60vh at 1440×900) and must move against the photo when scrolling.

### T2. Dossier cards: photo and text panel fused into one pale card, strip with peeking neighbours, progress line + round arrows (takenaka RECOMMEND, `scroll-take-5000.png`)
- **Reference** (`tok(c)`, `tok(e)`, `tok(f)`): on band `#EDEBE5` a header row (Latin title 24px left at column 2, two-line lead at x≈720); below, a horizontal strip of cards: each card = photo 344×443 (0.78) **directly fused** to a text panel of the same height ≈340 wide on a lighter ground; 16px gap between cards; neighbours cut at both viewport edges. Text panel: title 20px, body 14px/1.8, black pill "VIEW MORE" + Ø32 black disc arrow, bracket tag "( TAKENAKA )" 12px bottom-right. Under the strip, centred: Ø30 outline-ish white round arrow, 340px 1px grey line with dark fill, Ø30 arrow.
- **Ours (home block 4 `front-handover`, "How a shipment is handed across")**: band `#E6EAE9` full bleed, padding 212px top / 157px bottom (`tok(c)`). Header row: title "HANDOVER" Onest 500 1.5rem letter-spacing .04em at column 2; lead (2 lines, 1rem/2.0) at column 7. Strip of **five stage cards** (01 Documents → 05 Release), each card 688×443 at 1440: photo 344×443 (`aspect-ratio: .78`, `object-fit: cover`, radius 0) + text panel 344×443 on `#F6F7F7`, padding 24px; strip starts at column 2 and overflows right, first card's left neighbour area empty at load, last card cut by the right edge. Panel content: stage title Onest 500 1.25rem; 45–55 words body; link "VIEW MORE" Onest .875rem 500 + Ø32 `#1D2426` disc with white arrow; bracket tag bottom-right "( 02 / 05 )" Onest .75rem letter-spacing .08em.
  - Native `overflow-x: auto; scroll-snap-type: x mandatory` (`scroll-snap-align: start` on cards, `scrollbar-width: none`); gap 16px. Under it, centred: Ø30 white buttons with 1px `rgba(0,0,0,.08)` border and ink arrow, between them a 340px line `rgba(0,0,0,.15)` with a `#1D2426` fill whose width = scrolled share. The arrows scroll the strip by one card with a tiny `click` handler calling `scrollBy` (no `scroll` listener anywhere). The fill is CSS only: a named `scroll-timeline: --strip x` on the strip drives `scaleX(.2→1)` inside `@supports (animation-timeline: scroll())`; static / unsupported = 20% fill.
  - Hover (`tok(g)`): photo `scale(1.04)` inside its frame, .32s `cubic-bezier(.215,.61,.355,1)`, `transition-delay: 0s`.
  - Mobile < 782px: cards 86vw wide, photo stacks **above** the text panel (photo 86vw × 0.78 ratio flipped to 4:3 crop), still scroll-snap; progress line 60vw.
- **Must not be diluted**: photo and text must touch (0px gap, same height, one card); neighbours must visibly peek at the right edge; bracket tag and black disc arrow must be present; the progress line + two round arrows must sit under the strip.

### T3. Blurred copy of the photo as the ground, sharp inset window, outline map with a ringed pin and a 3-line caption (takenaka BRAND STORY, `scroll-take-6100.png`)
- **Reference** (`tok(e)`, `tok(f)`): full-bleed band ≈840px tall; ground = the same landscape photograph heavily blurred and darkened; at columns 2–5 a sharp 3:2 inset (453×317, radius 4) of the same scene; at columns 7–11 white title 24px + 6 lines of body + white pill/disc; bottom-right a 1px white outline map of the region, a ringed pin (Ø14, 1.5px white ring + dot) and a caption: place name in caps 13px over two 10px lines of coordinates. Vertical "( … )" label in the left gutter.
- **Ours (home block 5 `front-quay`, "Where the desk sits")**: full-bleed band `min-height: 840px` (mobile auto, padding 96px 20px). Ground = **Q1** (morning quay, container stacks) as Cover background with `filter: blur(24px) brightness(.55) saturate(.6)` on the image layer (`scale(1.12)` to hide blurred edges), plus `sp-parallax` (`--sp-par: 8%`, mobile 5%). Inset at columns 2–5: the **same Q1 file**, sharp, `aspect-ratio: 3/2`, width 453px at 1440, radius 4px, wrapped in a `sp-reveal sp-reveal--mask` figure (clip on the child, not the observed element). Text columns 7–11, white: title "THE QUAY" Onest 500 1.5rem; ~70 words on the desk founded 2009 at North Quay; pill "About the desk" + white Ø32 disc with ink arrow. Bottom-right (right 8%, bottom 64px): inline SVG outline (1px `#F1F3F2`, no fill) of a **fictional** bay coastline drawn for the theme (≈240×300, not any real region), ringed pin (Ø14, 1.5px ring + Ø4 dot) at the quay, caption to the left of the pin: `PORT ARDALE / NORTH QUAY` Onest .8125rem caps 500 two lines, then `SHED 11 · DOOR 4` and `MON–FRI 08:00–18:00` Onest .625rem (ref coordinates lines replaced by real desk facts; no real coordinates).
  - The one file shown twice (blurred ground + sharp window) is the technique itself and counts as **one** image position; no other image may repeat on a page.
  - Mobile < 782px: inset full width (radius 4), text below, the map + caption in flow below the pill, scaled to 160px wide, left-aligned; nothing absolutely positioned over text.
- **Must not be diluted**: the ground must be the same photo as the inset (visibly blurred, not a flat colour), the inset must be sharp with the 4px radius, the outline map + ringed pin + caption must be present bottom-right at ≥782px.

### T4 (supporting). Notice panel: tinted panel, two columns split by a vertical hairline, large numerals, white form pill (takenaka CONTACT/SHOWROOM, `scroll-take-7600.png`)
- Panel `#E3E9E9` (ref ≈#F6F3E8 relation: a tint one step off the ground, shifted cool), radius 4px, columns 2–11, padding 64px 118px; centre 1px vertical hairline `rgba(0,0,0,.1)`. Left "DESK": small line, phone **`+1 (555) 014-2300`** Onest 500 2.5rem (ref ≈40px numerals), "(Mon–Fri 08:00–18:00)", e-mail line, then white pill 333×62 radius 4 "Open a file" + Ø32 ink disc arrow. Right "DROP-OFF COUNTER": two lines, `08:30–17:00` Onest 500 2.25rem, "Mon–Fri (closed public holidays)" 1.125rem, note .75rem "Originals by courier or at Door 4."
- Mobile: columns stack, hairline becomes horizontal, numerals 1.75rem, `white-space: nowrap` on the numerals.

### Bracket gutter labels (decoration, `tok(f)`)
Every paper section has a label like `( THE DESK )` in the left gutter (x 20px), Onest .75rem, letter-spacing .2em, `writing-mode: vertical-lr`, ink 70%. **Only at ≥1100px and never inside the first screen.** Below 1100px the label is horizontal, inline above the section title. The same bracket form is used for card tags and declaration numbers `( 01 )`.

### Continuation to inner pages (each technique on ≥ 4 inner pages)
Every inner page opens with a **T1 page head**: dark full-bleed photo band `min-height: 62vh` (mobile 56vh) with `sp-parallax` (`--sp-par: 6%`), overlay header, title bottom-left (Onest 400 `clamp(2.25rem, 4vw, 3.75rem)`), a 1-line lead, and the same 1px timeline line with five ticks along its bottom, where the tick for that page is lit (`#F1F3F2`, label 500) and the others `rgba(241,243,242,.6)`.

| Page | T1 head (lit tick) | T2 dossier cards | T3 blurred ground + inset + map | T4 notice panel |
|---|---|---|---|---|
| Services / Declarations | W3 → 03 DECLARATION | strip of 4 declaration dossiers (D1–D4) | — | yes (cut-off times) |
| Process | W1 crop → all five lit, labels clickable anchors | the five stage dossiers, one per stage section (static, not a strip) | stage 05 Release at the quay (Q1) | — |
| What you prepare | P1 → 01 DOCUMENTS | — | — | yes (where to send originals) |
| Fees | S4 → 04 DUTY | — | — | yes |
| Case files | S5 → 05 RELEASE | 4 case dossiers in a strip | — | — |
| The desk (team) | H2 → none lit | — | yes (A1 ground + inset, "Door 4") | — |
| About | A2 → none lit | — | yes (Q1, history) | — |
| Contact / Open a file | A1 → 01 DOCUMENTS | — | yes (Q1, map + directions) | yes (main block) |
| Notes (index/archive) | Q1 → none | post cards as dossier cards (2 columns, photo + panel) | — | — |
Count: T2 on 4 inner pages, T3 on 4, T4 on 4, T1 on all.

---

## 2. Key visual concept

### (1) Reference first screen
takenaka-foodware.jp opens on a dark, slowly moving still-life: rows of identical stacked bowls on timber shelves in a dim workshop, a gloved hand placing one piece, teal-grey and desaturated. No headline; a white overlay header and a tiny "Scroll Down" bar. As you scroll, the hero stays pinned (250vh) while a short three-line statement rises from the bottom over the image; then a pale grained paper sheet takes over. Story: *an ordinary everyday object, handled with care by a long-standing workshop*. Signature motion: pinned dark stage + copy riding up (scrub), slow movement in the image, hand-off to paper.

### (2) Our translation (customs broker, same composition, same motion idea, same image type)
*An ordinary shipment, handled with care at the desk.* A dark documentary photograph of a warehouse bay: rows of identical brown cartons stacked on steel racks receding in soft focus (= the shelves of bowls), and in the right third, in the foreground, a gloved hand holding a packing list against a carton label (= the gloved hand placing a piece). Graded teal-grey and dim. The statement "Your goods, cleared with every line checked." sits low and rides up over the slower photo; along the bottom a thin timeline line names the five stages a clearance passes through (the ref "Scroll Down" bar becomes our timeline). Then the cool paper sheet takes over. Same image type: photograph (IMAGERY photo).

### (3) KV checklist (all six implemented and visible in the first screen at 1440×900; #6 visible as the paper edge after the first scroll and at the bottom on mobile 390×844 when the stage is shorter)
| # | Reference element | Our counterpart | Position | Motion | Image used |
|---|---|---|---|---|---|
| 1 | Dark full-bleed shelves of identical stacked bowls | Dim warehouse bay, identical cartons on steel racks, teal-grey grade, ≥95% of the first screen | whole first screen | `sp-parallax` on the Cover background, `--sp-par: 10%` (mobile 6%) | **W1** |
| 2 | Gloved hand placing a piece, soft-focus foreground | Gloved hand holding a packing list against a carton label, sharp, in the same photo | right third, lower half (x 62–90%, y 45–85%) | moves with the photo (parallax) | **W1** (composed into the frame) |
| 3 | White overlay logo left + slim uppercase nav + outline pill + language links | Transparent header 88px: wordmark "SHIRUSHI" left; SERVICES · PROCESS · FEES · CASES · ABOUT; outline pill "Open a file ↗"; EN / ZH / JA / FR / DE | top | none (absolute header, not sticky) | — |
| 4 | Three-line copy low on the image, rides up on scroll | H1 statement 3 lines, top at 64vh, cols 2–7; intro paragraph cols 7–11 below | bottom-left → rises | in-flow content against a 10% slower photo (no reveal on hero) | W1 behind |
| 5 | "Scroll Down" label + 1px bar bottom-right | 1px timeline line 22–92% width with five ticks and labels DOCUMENTS … RELEASE, "Scroll" bar at far left | bottom, sticky `bottom: 32px` | fill `scaleX(.2→1)` by CSS view timeline where supported; static = full | — |
| 6 | Pale grained paper sheet takes over | Cool paper `#F1F3F2` + 3.5% grain, flat edge under the photo | below the stage | none | — |

Not allowed: replacing the bay with an office, a map, a ship at sea, a skyline, an abstract texture or an illustration; adding a centred headline; dropping the hand.

---

## 3. Colour (`tok(a)` + stage-a)

| Role | Hex | Ref value (`tok(a)`) | Use | Share |
|---|---|---|---|---|
| Paper (ground) | `#F1F3F2` | `#F4F2ED` | page ground, + grain | ~55% |
| Band 2 | `#E6EAE9` | `#EDEBE5` | handover band, fee table head row | ~10% |
| Card panel | `#F6F7F7` | card text panel (lighter than band) | dossier text panels | ~4% |
| Notice / tint panel | `#E3E9E9` | `≈#F6F3E8` / `rgba(42,49,64,.05)` OEM wash | T4 panel; prepare band uses `rgba(76,101,104,.06)` over paper | ~6% |
| Dark stage | `#101A1C` | near-black photo avg 23/22/17 | stage overlay `rgba(16,26,28,.35)`, footer, quay band fallback | ~20% |
| Text / ink | `#1D2426` (body at 85%, headings 100%) | `rgba(0,0,0,.8)` / `.9` | text, disc arrows, pill | — |
| Main (steel, row hex Oomeshi-cha) | `#4C6568` | (no ref colour; ref is all neutral) | link underline, active tab, table price column text, tick lit on paper, footer rules | ≤4% (never a section background) |
| Hairline | `rgba(0,0,0,.1)` | news rows | rows, table rules, panel divider | — |
| Accent (seal amber) | `#B07A3A` | none (ref has none) | a 6px square "seal" dot before "( 01 )" numbers on the fee table only | ≤1%, never in the first screen |

- **Why the ground differs from the reference**: `#F4F2ED` is a warm cream; the pipeline rule forbids defaulting to cream/beige and the customs desk reads better cool. Lightness is kept within 1% (L 95.0 vs 95.2); only the hue moves from warm to cool grey. Every other relation (paper → slightly darker band → lighter card → near-black photo bands, no saturated fill) is the reference's.
- Grain: `background-image` inline SVG `feTurbulence baseFrequency .9`, opacity .035, on `body` (paper areas only; never over photos).
- **First-screen saturation**: reference 0.4%. Cap for `check-first-screen.py` = **15%**, target ≤ 3%. W1 must be graded desaturated (cartons muted brown-grey, no orange tape, no yellow safety signs); header and statement are white; no coloured UI in the first screen.
- Contrast: ink on paper 14.6:1; white on the stage overlay ≥ 9:1; `#4C6568` on paper 5.8:1 (OK for small text).

## 4. Typography (font_direction **sans**)

- Latin headings: **Onest** (400, 500). Latin body: **Source Sans 3** (400, 600). Both sans; no serif anywhere.
- CJK: **Noto Sans TC** (zh-TW) and **Noto Sans JP** (ja), sans-serif (gothic) for headings **and** body. No serif (Mincho) faces.
- Stacks (theme.json `fontFamilies`):
  - heading: `"Onest", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`
  - body: `"Source Sans 3", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`
  - `:lang(zh-TW)` → `"Onest", "Noto Sans TC", sans-serif` / `"Source Sans 3", "Noto Sans TC", sans-serif`; `:lang(ja)` → same with Noto Sans JP first among CJK.
- Loading: all via theme.json `fontFace` (woff2 in `assets/fonts/`, Latin + Latin-ext; zh-TW and ja subsets built with the Hokuto/Hada replacement method). Editor and front end identical; because style.css uses `:lang(`, copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it.
- Sizes (theme.json presets): small .8125rem · base .9375rem · medium 1.25rem · large 1.5rem · x-large 2.5rem · **xx-large 4.25rem** (max, rule ≥4.25rem met; used by the hero H1).
- Body: Source Sans 3 .9375rem / line-height 1.8 / letter-spacing .02em (`tok(b)` 14px/180%/.04em; +1px because Source Sans 3 has a smaller x-height than the ref's JP gothic; tracking halved for Latin). Intro copy 1rem / 2.0 / .06em.
- Section titles: Onest 500 1.5rem, letter-spacing .04em, uppercase set in the text (`tok(b)` 24px 500 .96px). Card titles Onest 500 1.25rem. Labels/tags Onest .75rem, .16–.2em.
- zh-TW / ja: headings ≈ .75× the Latin size except the bracket labels; body line-height 1.85, letter-spacing .06em (intro .12em = ref). fr/de: `hyphens: auto`, `overflow-wrap: anywhere` on narrow card titles.
- Numerals (phone, hours, prices): Onest 500 with `font-variant-numeric: tabular-nums`.

## 5. Header, footer, buttons
- **Header** (ref `tok(f)`): `position: absolute` over the dark stage/page head on every template (no sticky, no scroll-driven colour change), height 88px, side padding 40px. Wordmark "SHIRUSHI" Onest 500 1.375rem letter-spacing .24em + a 22px outline square mark (1.5px stroke, a small notch at top-right = a seal stamp; drawn as inline SVG, not a copy of the ref hexagon). Nav Onest .875rem 400 uppercase, gap 24px, white. Pill "Open a file ↗" radius 14px, 1px `rgba(255,255,255,.35)` border, `rgba(255,255,255,.06)` fill, padding 4px 12px. Language links .75rem, current one 500, separated by thin bars. One top menu only.
- Templates without a dark head (404, search, cart if present): header in ink on paper.
- Mobile < 960px: wordmark + two-line menu icon (28×8, 1.5px lines) → full-screen `#101A1C` overlay menu, links Onest 1.5rem.
- **Buttons**: (a) text pill "VIEW MORE" Onest .875rem 500 + Ø32 disc (`#1D2426`, white arrow; on dark: white disc, ink arrow); hover: disc translates 3px right, .32s `cubic-bezier(.215,.61,.355,1)`. (b) white form pill (T4). No filled colour buttons.
- **Footer**: `#101A1C`, padding 96px 0 40px; wordmark, address, desk hours, a column of page links, language links; bottom line .75rem "© 2009–2026 Shirushi Customs". 1px `rgba(241,243,242,.12)` rules.

---

## 6. Home page

Grid: wide container 1400px, 12 columns, gutter 16px, side padding 20px (`tok(c)`); content usually starts at column 2. Section padding 160px top/bottom desktop, 96px mobile (`tok(c)`).

### First screen (1440×900)
W1 full-bleed under the absolute header; overlay `rgba(16,26,28,.35)`; H1 statement top at 64vh (first two lines visible: y≈576–840, the third line just at the fold), intro paragraph not yet visible; timeline line sticky at bottom 32px. Forbidden: table, form, search box, giant centred text, any coloured block, vertical labels.
Mobile 390×844: same photo (object-position 72% so the hand stays in frame), H1 `2.25rem` top at 58vh, timeline line becomes a **static row** in flow under the intro: five ticks with numerals `01…05` only above the line and one wrapping caption line ".75rem: Documents → Classification → Declaration → Duty → Release" below it. No vertical text, nothing absolutely positioned over text.

### Block order
| # | Pattern | Purpose | Layout and photos | Copy |
|---|---|---|---|---|
| 1 | `front-stage` | KV, T1 | as §1 T1 / §2; **W1** | H1 3 lines + 45 words |
| 2 | `front-desk` | who we are | Paper. Ref brand block geometry (`tok(c)`): gutter label `( THE DESK )`; heading + text at columns 2–6, **bottom-aligned** with the photo; tall photo **H2** at columns 8–13 flush to the right viewport edge, 588×718 (≈0.82), radius 0. Heading "CUSTOMS CLEARANCE FOR SMALL MANUFACTURERS" 1.5rem, 2 paragraphs, VIEW MORE → About. Block starts 160px under the stage. | 110 words in 2 paragraphs |
| 3 | `front-declarations` | which declarations the desk handles (asymmetric masonry) | Paper. Label `( DECLARATIONS )`; title + lead row like block 4's header. Two uneven columns: left columns 2–6, right columns 8–12 starting **180px lower**. Left: **D1** 4:5 then **D3** 3:2; right: **D2** 3:2 then **D4** 4:5. Under each photo: `( 01 )` Onest .75rem, title Onest 500 1.25rem, 40 words, text link "Details". Gap between items 96px. `sp-stagger` on each column, `sp-reveal sp-reveal--up` on each item. | 4 × 40 words |
| 4 | `front-handover` | how a shipment is handed across (process) | **T2** strip on band `#E6EAE9`; cards with **S1 S2 S3 S4 S5**; progress line + arrows; `sp-reveal sp-reveal--up` on the strip container only | header lead 30 words + 5 × 50 words |
| 5 | `front-quay` | where the desk sits / story | **T3** on **Q1** (blurred ground + sharp inset); outline map + pin bottom-right | 70 words |
| 6 | `front-prepare` | what the client prepares | Full-bleed tint band `rgba(76,101,104,.06)` over paper (ref OEM wash). Left columns 2–6: high-key photo **P1** 3:2 (453 wide); right columns 7–11: title "WHAT YOU PREPARE", 1 sentence, then **ruled list of six documents** (hairline rows `rgba(0,0,0,.1)`, 56px tall, name Onest 500 1rem left, one-line note .875rem right in ink 70%), then VIEW MORE → What you prepare. | 30 + 6 × 10 words |
| 7 | `front-fees` | fees, identical to the Fees page | Paper. Label `( FEES )`; title "FEES" + lead; **full-width fee table** columns 2–12 (7 rows from §8, amber seal dot + `( 01 )` number, service name + one-line note, price right `nowrap` in `#4C6568` Onest 500 1.125rem tabular). Note under the table: "Duties and import taxes are passed through at cost, without mark-up." VIEW MORE → Fees. No reveal on the table. | 7 rows + 20 words |
| 8 | `front-notes` | tariff notes / news (ref news rows) | Paper. Title "NOTES" left at column 2, Query Loop of 3 posts at columns 6–12 as hairline rows: date (Onest .8125rem, tabular) + category tag in brackets + title; whole row a link; "All notes" pill at the end. | Query Loop |
| 9 | `front-notice` | contact facts | **T4** panel, gutter label `( CONTACT )` | 40 words |
| — | footer | | §5 | |

Photo positions on home: W1, H2, D1, D2, D3, D4, S1, S2, S3, S4, S5, Q1 (ground+inset), P1 = **13 image positions, 13 distinct files**. English home ≥ 330 words; narrative paragraphs in blocks 2, 4 (lead + cards), 5 (≥3).

### Comparison with the recent themes (no shared order or signature)
| # | Nodoka | Yuragi | Saji | Tsuya | **Shirushi** |
|---|---|---|---|---|---|
| 1 | split hero, vertical tabs | full-bleed photo + contrast-word triplet + info bar | full-bleed photo with ink frame + stamps | framed photo + caption strip | **dark full-bleed stage, statement rides up, timeline line along the bottom** |
| 2 | ruled opener | intro narrative | giant word + seal + halftone portrait | offset pair | **heading bottom-aligned to a tall photo flush right** |
| 3 | difficulty index rows | looped name row | horizontal day rail | 3:4 tiles | **two-column masonry, right column 180px lower** |
| 4 | three hairline columns | sticky-media list | term cards | commissions strip | **fused photo+text dossier strip with progress line** |
| 5 | full-bleed parallax band | 3.75:1 letterbox band | parallax photo | drawing + prose | **blurred-same-photo band with sharp inset + outline map** |
| 6 | practitioner pair | booking rows | brigade rows | parallax band | **tint band: photo + ruled document list** |
| 7 | fees | — | notices | visit | **full-width fee table** |
| 8 | footer | | | | **notes rows → notice panel** |
Why not alike: none of the four has a dark low-key opening stage, a timeline line in the hero, cards where photo and text are one unit in a scrolling strip, or a blurred-ground band with an inset window and a map. Saji's day rail is a time row of small text items; ours is a carousel of 688px photo+text cards with progress line. No people grid, no step grid, no vertical timeline, no letterbox band, no stamps/frames. Also differs from used-refs entries: niuke-scan's pinned stage swaps three panels with a dotted rail (ours is one continuous photo with a five-tick line), kumoi-lodge's out-of-focus opener has no inset window or map, ito-hr's blurred ground carries cards (ours one sharp window + map).

---

## 7. Inner pages (9 + notes + 404)

Every page: T1 page head (§1) → body → T4 or "Open a file" close line with the disc arrow. No sidebar. Gutter bracket labels on each paper section.

1. **Services / Declarations** (`page-services`): head **W3**, lit 03. Intro 2 paragraphs at columns 2–7. **T2 strip** of four declaration dossiers (D1–D4; title, 70 words, "( 01 / 04 )"). Then "Also at the desk" ruled rows: tariff classification opinions, origin checks, export declarations for returns, licence checks. T4 panel with cut-off: "Documents received by 14:00 are lodged the same working day."
2. **Process** (`page-process`, page_structure process-timeline): head W1 (different crop, object-position 30%), all five ticks lit and each label an anchor link. Under the head a **horizontal** five-tick timeline line repeated in ink on paper (`position: sticky; top: 0` at ≥ 960px, background paper, 72px tall), then five stage sections, each a static dossier card (photo **S1…S5** 0.78 left + text panel on `#F6F7F7`, 120–150 words: what we do, what you do, typical time). Stage 05 ends with a T3 band (Q1 blurred ground + inset + map) "Handed to your carrier at North Quay". Not a vertical timeline: the line stays horizontal, sections are ordinary blocks.
3. **What you prepare** (`page-prepare`): head **P1**, lit 01. Six documents as ruled rows with a 2–3 sentence explanation each (commercial invoice, packing list, bill of lading / air waybill, certificate of origin, product specification sheets, import licences or permits where applicable); photo **D2** 3:2 between rows 3 and 4; T4 panel "Send originals to Door 4 / scans to desk@…".
4. **Fees** (`page-fees`): head **S4**, lit 04. Full fee table (§8, same 7 rows, same wording, plus a second line of detail each); notes list (duties at cost, billing monthly, payment terms 14 days); photo **A1** 3:2 at columns 2–6 beside the notes; T4 panel.
5. **Case files** (`page-cases`): head **S5**, lit 05. Intro; **T2 strip** of the four case dossiers (photos D4, D1, D2, D3 in that order; each 120 words: who, what came in, what the desk did, what the client prepared; no numbers claiming savings or guarantees).
6. **The desk / Team** (`page-team`): head **H2**. Intro; roster of the 7 people (§8) as ruled rows: name Onest 500 1.25rem, role, languages, one sentence; one photo **S3** (0.78) at the side (columns 9–12, sticky at ≥960px). T3 band on **A1** ground "Door 4, Shed 11" with inset + map.
7. **About** (`page-about`): head **A2**. History in 3 sections (2009 founding by Emiko Hart after twelve years at a freight forwarder; why small manufacturers; how the desk works) at columns 2–7; T3 band (Q1) between sections 2 and 3; closing quote line Onest 400 1.75rem.
8. **Contact / Open a file** (`page-contact`): head **A1**, lit 01. **T4 panel** as main block; address block and directions; T3 band (Q1) with map + pin; a plain mailto link "desk@shirushi-customs.example" and a list of what to include in the first e-mail. No form required (a simple form is allowed below the fold, without reveal).
9. **FAQ** (`page-faq`): head **S2** crop. 10 questions as ruled `<details>` rows (who is the importer of record, do you handle exports, what if goods are examined, how duties are paid, …), photo **D3** 3:2 at the end.
10. **Notes** (`home.html`, `archive.html`, `single.html`): head Q1. Index: post cards as dossier cards (featured image 0.78 + panel), 2 columns, Query Loop. Single: bracket category label, title 2.5rem, date, featured image 3:2, text column 680px. 6 demo posts (§8).
11. **404 / search**: header in ink, title + VIEW MORE home.

---

## 8. Fixed facts and numbers (identical in all languages and on every page)

- **Founded 2009** by Emiko Hart. Desk: **Shed 11, North Quay, Port Ardale** (fictional; local address order per language in brand.md). Originals and samples: **Door 4**.
- Desk hours **Mon–Fri 08:00–18:00**; drop-off counter **Mon–Fri 08:30–17:00**; closed on public holidays. Phone **+1 (555) 014-2300**; e-mail **desk@shirushi-customs.example**.
- Same-day cut-off: documents received by **14:00** are lodged the same working day (a working rule, not a guarantee of release time).
- **Process (5 stages)**: 01 Documents · 02 Classification · 03 Declaration · 04 Duty · 05 Release.
- **Declarations handled (4)**: Import entry (formal) · Low-value consignments · Temporary admission (samples, trade fairs, repairs) · Duty relief and inward processing (components for manufacturing).
- **Fees (USD, 7 rows)**:
  | # | Service | Price |
  |---|---|---|
  | 01 | Import entry, up to 5 tariff lines | $95 |
  | 02 | Each additional tariff line | $6 |
  | 03 | Low-value consignment entry | $38 |
  | 04 | Temporary admission (samples, trade fairs) | $140 |
  | 05 | Tariff classification opinion, per product | $120 |
  | 06 | Duty relief / inward processing application | $280 |
  | 07 | Monthly desk account, up to 12 entries | $890 / month |
  Duties and import taxes passed through at cost, no mark-up; invoices monthly, payment within 14 days.
- **People (7)**: Emiko Hart (founder, licensed customs broker) · Tomás Reyes (senior broker, tariff classification) · Aisha Mensah (declarations lead) · Lukas Brandt (duty relief and inward processing) · Mei Lin Zhou (client desk, documents) · Ravi Patel (dock liaison, examinations and release) · Sofia Moreau (accounts).
- **Case files (4, fictional clients)**: Lindgren Joinery (beech veneer panels, classification opinion before the first order) · Velo Arc Frames (bicycle frame tubing under inward processing) · Mirelle Skin Lab (first low-value consignments of jar samples) · Quillon Audio (prototype speakers to a trade fair under temporary admission).
- **Demo posts (6)**: "What goes on a packing list we can check in ten minutes" · "Classification before you order" · "Samples for a trade fair: temporary admission in plain words" · "When goods are selected for examination" · "Inward processing for small workshops" · "Reading a duty notice". Featured images: S1, S2, D3, S4, D4, P1.
- No guarantees of clearance times, no savings figures, no awards, no real media, people or brands.

---

## 9. Photos (16, Grok, one at a time, read each one)

STYLE (identical on every prompt):
`documentary photograph, 35mm lens, natural available light, quiet modern international logistics setting, muted desaturated palette of cool grey, steel teal, kraft brown and off-white, fine paper and cardboard texture, diverse adults, calm working moment, hands and faces natural, no text, no readable writing, no logos, no brand marks, no signage lettering, no Japanese elements`
- High-key list photos add: `, bright high-key daylight, pale walls`.
- Low-key frames (W1, W3, Q1, A2) add: `, low-key dim light, dark teal-grey shadows, cinematic underexposed`.
No cutouts (0 transparent PNG). Each ≤ 300 KB, ≤ 2000 px (webp), one readme.txt line each (AI-generated, CC0). Re-generate any frame with legible text on papers/labels, logos, broken hands or style drift. ★ = used on home.

| ID | Subject / composition | Ratio | Pages (each at most once per page) |
|---|---|---|---|
| W1 ★ | low-key warehouse bay, rows of identical cartons on steel racks receding in soft focus, right third foreground a gloved hand holding a blank packing list against a carton label, sharp | 16:9 (2000×1125) | Home stage; Process head (crop 30%) |
| H2 ★ | high-key, broker (woman, 40s) at a desk by a tall window comparing a packing list with a carton sample, cartons stacked behind | 0.82 portrait | Home desk; Team head |
| D1 ★ | high-key, shrink-wrapped pallets of cartons at an open dock door, hand pallet truck | 4:5 | Home declarations 01; Services strip; Case 2 |
| D2 ★ | high-key, small parcels and padded envelopes sorted on a long white table | 3:2 | Home declarations 02; Services strip; Prepare; Case 3 |
| D3 ★ | high-key, open aluminium flight cases with product samples being checked against a list | 3:2 | Home declarations 03; Services strip; Case 4; FAQ; post 3 |
| D4 ★ | high-key, wooden crates of machine components and bicycle tubing in a small workshop | 4:5 | Home declarations 04; Services strip; Case 1; post 5 |
| S1 ★ | hands laying a commercial invoice and packing list (blank, no readable text) side by side on a desk | 0.78 | Home strip 01; Process stage 01; post 1 |
| S2 ★ | product sample (a turned wooden part) beside calipers and a thick closed reference book | 0.78 | Home strip 02; Process 02; FAQ head; post 2 |
| S3 ★ | broker (man, 30s) at a laptop with documents, screen angled away, out of focus | 0.78 | Home strip 03; Process 03; Team side photo |
| S4 ★ | two people opening a carton for examination on a steel table, cutter, gloves, no uniforms or insignia | 0.78 | Home strip 04; Process 04; Fees head; post 4 |
| S5 ★ | loaded pallet being moved onto a small truck at a loading dock, morning light | 0.78 | Home strip 05; Process 05; Cases head |
| Q1 ★ | low-key morning quay, stacked containers and a gantry crane in haze, quiet water | 3:2 (2000×1333) | Home quay (ground + inset); Process T3; About T3; Contact T3; Notes head |
| P1 ★ | high-key flat lay on white: blank forms, pen, tape gun, a carton corner, a sample jar | 3:2 | Home prepare; Prepare head; post 6 |
| W3 | low-key, broker's desk lamp over stacked document trays at dusk, cartons in shadow | 16:9 | Services head |
| A1 | high-key, drop-off counter with a hatch window and a trolley of cartons, Door 4 area (no numerals visible) | 3:2 | Contact head; Fees side photo; Team T3 ground+inset |
| A2 | low-key, long aisle of high racks with cartons, one person walking far away | 16:9 | About head |

Per-page check: Home 13 files (W1 H2 D1 D2 D3 D4 S1 S2 S3 S4 S5 Q1 P1), no repeats except Q1 as T3 ground+inset (one position by design). Services: W3, D1–D4. Process: W1, S1–S5, Q1. Prepare: P1, D2. Fees: S4, A1. Cases: S5, D4, D1, D2, D3. Team: H2, S3, A1. About: A2, Q1. Contact: A1, Q1. FAQ: S2, D3. Notes: Q1 head + post images S1 S2 D3 S4 D4 P1.

---

## 10. Scroll effects (sp-scroll; source: takenaka-foodware.jp, stage-a table)

| Effect | sp class | Where | Ref trigger / time / easing | Our values |
|---|---|---|---|---|
| Hero copy rides up over a slower image | `sp-parallax` on the Cover (bg `.wp-block-cover__image-background`) | Home `front-stage` (W1); every inner T1 head | ScrollTrigger scrub, hero 250vh, copy y 170, ease none | `--sp-par: 10%` home desktop, 6% mobile (`@media (max-width:781px)`); inner heads 6% / 4%. Foreground text not in the moving layer. |
| Blurred ground drifting behind the story | `sp-parallax` | Home `front-quay` (Q1 ground) and T3 bands on inner pages | static blur in ref; motion added from the hero idea | `--sp-par: 8%`, mobile 5% |
| Block reveals y 20→0 + fade, staggered | `sp-reveal sp-reveal--up` + parent `sp-stagger` | declarations items (block 3), handover strip **container** (block 4), desk text column (block 2), prepare list, notes rows, inner-page body blocks | start "top center+=20%", .8s power2.out, large blocks 1.2s power4.out, stagger ≈.1s | `--sp-dist: 20px`, `--sp-dur: .8s`, `--sp-ease: cubic-bezier(.215,.61,.355,1)`; strip container `--sp-dur: 1.2s` `cubic-bezier(.23,1,.32,1)`; stagger default .12s |
| Inset window opens | `sp-reveal sp-reveal--mask` (figure wrapper; clip on the child) | T3 inset (home + inner T3 bands) | ref inset fades in .8s ease-out | default 1.2s ease-out |
Hero: no reveal. Fee table, forms, legal text: no reveal. Strip children: no reveal. Per page ≤ 3 effect types (parallax, reveal-up, mask). Hover photo scale .32s `cubic-bezier(.215,.61,.355,1)` (CSS only). Timeline-line fill and strip progress fill: CSS scroll-driven only, guarded as in §1, final state when static.

**Parallax (required)**: Home block 1, background **W1**, foreground = H1 statement + intro + pill + sticky timeline line, `--sp-par: 10%` (mobile 6%), mirroring the ref's pinned hero where the copy rides over a slow image. Second parallax: block 5 ground Q1 8% (mobile 5%). Both kept on mobile. `check-parallax.mjs` must report ≥ 6px delta desktop and mobile, 0 with reduced motion.

---

## 11. Responsive rules
- 390px first screen: no vertical text, no absolutely positioned labels over text; the timeline becomes a static row (§6). Gutter bracket labels vertical only at ≥1100px.
- Fee table (home and Fees page) at ≥782px: full content width (columns 2–12, never narrower than 720px), table-layout auto, price column `white-space: nowrap; text-align: right; padding-right: 0`, service column wraps; nothing clipped at 800 and 1280. < 782px: each row stacks (number + service on one line, note below, price on its own line right-aligned, nowrap). Any other table also stacks on mobile.
- Masonry: single column < 782px, right-column offset removed, photos full width.
- T2 strip: horizontal scroll inside its own container only; `html, body { overflow-x: clip }`; no page-level horizontal overflow at 390 / 1280.
- T3: inset, text, map stacked in flow < 782px.
- T4: stacked < 782px, numerals nowrap.
- Desk block: photo full width (not flush to edge) above the text < 782px.

---

## 12. Similarity table (target ≈80%)

| Dimension | Reference (token) | Shirushi |
|---|---|---|
| Ground / band / card | `#F4F2ED` / `#EDEBE5` / lighter card panel, grain (`tok(a)`) | `#F1F3F2` / `#E6EAE9` / `#F6F7F7`, grain .035 (hue cooled, L ±1%) |
| Dark stage | near-black photo 23/22/17, 100% of first screen | W1 graded, overlay `#101A1C` 35%, ≥95% of first screen |
| Text | rgba(0,0,0,.8/.9) | `#1D2426` 85% / 100% |
| Accent | none (black pill/disc) | black disc + pill; steel `#4C6568` ≤4%; amber ≤1% off first screen |
| First-screen saturation | 0.4% | target ≤3%, cap 15% |
| Body type | 14px / 180% / .04em gothic | .9375rem / 1.8 / .02em Source Sans 3 |
| Intro copy on photo | 16px / 200% / .12em white | 1rem / 2.0 / .06em (CJK .12em) white 92% |
| Block title | 24px 500 .96px caps | 1.5rem Onest 500 .04em caps |
| Vertical bracket label | 12px, 2.4px tracking, vertical-lr | .75rem, .2em, vertical-lr ≥1100px |
| Section padding | 160/160, mobile 96; band 212/157 | same |
| Grid | 16px gutters, 20px side padding, 1425 fluid | 16px, 20px, 1400 |
| Hero height / copy | 250vh, copy sticky, rides up y 170 | 150vh, copy in flow from 64vh over 10% parallax |
| Brand/desk block | heading cols 2–6, photo cols 8–13 flush right 588×718 | same geometry, H2 0.82 |
| Cards | photo 344×443 (0.78) fused to 340 panel, radius 0, peek | 344×443 + 344 panel, radius 0, peek |
| Story band | blurred same photo + inset 453×317 r4 + outline map, pin Ø14 | same, Q1, fictional map |
| Radius | 0 photos; 4px inset & panel; 14px header pill | same |
| Shadows | none | none |
| Hairlines | rgba(0,0,0,.1) | same |
| Buttons | VIEW MORE 14px + Ø32 disc; Ø30 strip arrows | same |
| Reveal | y 20, .8s power2.out / 1.2s power4.out, stagger .1s | y 20px, .8s cubic-bezier(.215,.61,.355,1) / 1.2s, stagger .12s |
| Hover | .32s cubic-bezier(.215,.61,.355,1), image scale | same, scale 1.04 |
| Deviations | — | max preset 4.25rem used by hero H1 (pipeline rule; ref has no large headline); loader + barba transitions skipped |

---

## 13. Home acceptance checklist
1. First screen 1440×900: W1 dark bay with cartons on racks and the gloved hand + packing list at right third; overlay header; H1 first lines bottom-left (top ≥ 60vh); timeline line with five labels at the bottom; no centred headline, table, form, search, coloured block. `check-first-screen.py` ≤ 15%.
2. Scrolling: the statement moves against the slower photo (parallax ≥ 6px, desktop and mobile), then the flat cool paper sheet starts.
3. Mobile 390: no vertical text, no overlapping labels; timeline as a static row with numerals; hand visible.
4. Block order exactly §6 (stage → desk → declarations masonry → handover strip → quay → prepare → fees → notes → notice).
5. T1, T2 (fused cards, peeking neighbour, bracket tags, disc arrows, progress line + round arrows), T3 (blurred same photo, sharp r4 inset, outline map + ringed pin + caption), T4 panel all visible on home.
6. Desk block: heading bottom-aligned, tall photo flush to the right edge.
7. Masonry: right column starts 180px lower; four declarations with photos.
8. Fee table: 7 rows exactly as §8, full width at ≥782px, prices right and unclipped at 800 and 1280, stacked on mobile; same as Fees page.
9. 13 image positions, no repeats (Q1 ground+inset by design), no text/logos in photos, one STYLE.
10. Colours §3 only; paper not cream; steel small; amber only on the fee table.
11. Fonts: Onest headings, Source Sans 3 body, Noto Sans TC/JP in zh-TW/ja, same in editor; max preset 4.25rem.
12. sp-scroll: no reveal in the hero; reveal-up + stagger, mask, parallax only; `?sp-static` shows everything; motion run leaves nothing transparent.
13. English home ≥ 330 words, ≥ 3 narrative paragraphs; numbers match §8.
