# Hako Capsule: design spec (stage 1 spec, binding for implementation)

Row b33-1 · type **hospitality** · archetype single-column-longform · hero full-bleed photo · nav top-bar · page_structure **comparison-table** · font_direction **sans** · IMAGERY **photo** (stage-a.md).
Main reference: **tokyonode.jp** (https://tokyonode.jp/) · Secondary: **ise-seaparadise.com** (https://ise-seaparadise.com/). Tokens: `brand/reference-tokens.md` = T(a)…T(g) below. Screenshots: `brand/ref/`.
Rule of thumb for the implementer: the site must read as "Tokyonode's white, 1px-ruled, tracked-caps venue site, turned into a station-front capsule hotel", with three Sea Paradise devices (speech-bubble Tonight card, hanging slab, notched numeral cards) in ink and silver instead of stickers. Photos and copy are our own; nothing is copied from either site (no images, text, logos, wordmark lettering).

---

## 0. Fixed brand facts (identical on every page, every locale; brand.md is written from this list)

- **Name**: Hako Capsule. Wordmark "HAKO CAPSULE" (Latin in every locale). Founded **2019**.
- **Place**: 3 Platform Lane, **Easthaven**; **East Exit of Easthaven Central Station, 80 m / 1 minute on foot** (fictional, neutral city).
- **Capacity**: **84 places** = 48 Standard Pods, 16 Wide Pods, 12 Quiet-Floor Pods, 8 Single Cabins. **10 private shower rooms**. 84 lockers + a staffed luggage room.
- **Hours**: front desk **24 hours**; check-in **15:00–02:00**; check-out **10:00**; day-use pods **10:00–18:00**; showers (day use) **06:00–23:00**; quiet hours **22:00–07:00**.
- **Prices (6 items, EUR, per person, towel set included)** — same on home table, Compare & Prices, Pods, Showers, Book, all locales:
  | Item | Price |
  |---|---|
  | Standard Pod, one night | €42 |
  | Wide Pod, one night | €54 |
  | Quiet-Floor Pod, one night | €48 |
  | Single Cabin (lockable door), one night | €72 |
  | Day-use Pod, 4 hours (10:00–18:00) | €24 |
  | Shower only, 45 minutes | €9 |
- **People (7, fictional)**: Mara Okafor (founder, manager), Lucas Ferreira (night-desk lead), Jonah Weiss (night clerk — the clerk in the hero), Priya Raman (housekeeping lead), Sofia Martel (linen and showers), Daniel Osei (maintenance), Lin Hart (reservations and the letter).
- **Stories (3)**: "The 00:52 last train" (a commuter who missed the last connection, Standard Pod), "A shower between flights" (day-use shower on a 9-hour layover), "Four quiet nights" (a conference visitor on the Quiet Floor). Fictional, first names only, no claims of results.
- **Booking flow (4 steps, written as a ruled list, never a step grid)**: 1 choose a pod or cabin → 2 book by email/form or walk in at the desk → 3 check in, receive key + locker → 4 shoes off at the step, towel set, sleep; out by 10:00.
- **House rules (8)**: shoes off at the step; quiet hours 22:00–07:00; calls in the lounge only; no food in pod rooms; one guest per pod; luggage in lockers or the luggage room; check-out 10:00; ID at check-in.
- Recipient: `stay@hako-capsule.example`. No awards, no media, no "guaranteed", no ratings.

---

## 1. Signature techniques (three, obvious at a glance; do not soften)

### T1 — Pod-bay wall (from Tokyonode's news cell wall, https://tokyonode.jp/ top page "NEWS" + event foot strip; T(c), T(f))
- **Reference**: a full-bleed wall of 5 equal cells (288px each at 1440), separated and framed by 1px #1E1E1E lines, flush to both viewport edges; each cell = square photo, small label row, title, and a 48px foot row ending in a 48px square outline box with a diagonal arrow.
- **Ours (home §3)**: `hk-wall` — 5 cells across 100vw, 1px #1E1E1E outer + inner lines, zero gap, zero radius. Cell: photo **1:1** flush (no padding) → label row (outline pill 999px, 1px #1E1E1E, .6875rem caps: NIGHT / NIGHT / QUIET FLOOR / CABIN; the Shower cell uses a **filled ink chip** "DAY USE" = Tokyonode's dark "In session" chip) → name (Geist 400 1.375rem) + one-line spec (.875rem #9D9D9D) → foot row 48px: price left ("from €42 / night", Inter Tight 500 tabular-nums), **48×48 1px-bordered arrow box** flush right (diagonal ↗ SVG, 1px stroke). Cell total height ≈ 513px at 1440 (T(c)).
- Cells: Standard Pod P02, Wide Pod P03, Quiet-Floor Pod P04, Single Cabin P05, Shower only P06.
- **Do not dilute**: full-bleed (no container), 1px ink lines (not #E6E6E6), square arrow box, 5 across at ≥1280. 1024–1279: 5 across still (cells ≥204px); 782–1023: 3 + 2 (second row 2 cells + one empty ruled cell); <782: horizontal scroll row of 78vw cells (no sp-reveal on children; reveal on the row wrapper).
- **Inner continuation**: Pods & Cabins (4-cell wall, one per pod type), Day-use Showers (2-cell wall: Day-use Pod / Shower only + 2 ruled info cells), Journal (posts as 3-across cell wall with arrow boxes), Night Desk (7 people as cells: 1:1 portrait, role pill, name, arrow box → none for people: arrow box replaced by an empty 48px box to keep rhythm), About (4 cells of the building: lobby, pods, showers, lounge).

### T2 — Notched numeral cards (from Sea Paradise date-tab cards, https://ise-seaparadise.com/ top "topics"/event cards; T(e), T(f) secondary)
- **Reference**: photo cards with an 8px white inner frame; a white notched tab (≈148×70) cut into the lower-left corner carrying a big date numeral and a 36px round weekday badge; the middle card of a row sits lower.
- **Ours (home §6 "THE STATION MINUTE")**: three cards on white, 3 columns in a 1200px container, gap 40px, **middle card translated down 60px** (margin-top: 60px on the middle column at ≥782; 0 on mobile). Card: photo **4:3**, 8px white inner frame achieved by `padding: 8px; background: #FFFFFF; outline: 1px solid #E6E6E6` around the image; **white notch tab 148×70** absolutely placed at the image's lower-left (inside the frame, `left: 8px; bottom: 8px`), square corners except top-right radius 16px; tab holds a **numeral Geist 300 3rem (48px) #1E1E1E** + a **36px circle**, 1px #1E1E1E border, silver #AFAFB0 fill, unit in .625rem caps ink.
  - Card 1: **1** + "MIN" — "From the East Exit gates to our door." P07.
  - Card 2: **84** + "BEDS" — "48 standard, 16 wide, 12 quiet-floor pods and 8 cabins." P08.
  - Card 3: **24** + "HRS" — "Someone is at the desk at every hour." P09.
  - Below each: title Geist 400 1.375rem + 2-line text .9375rem.
- **Do not dilute**: notch must be a solid white cut breaking the photo edge (not a floating label), numeral ≥3rem, middle card lowered, 36px circle present.
- **Inner continuation**: About (founding facts: 2019 / 84 / 10 showers), Day-use Showers (45 MIN / 06 OPEN / 10 ROOMS), Access (1 MIN / 80 M / 24 HRS), Compare & Prices (head row of 3 cards: €24 / €42 / €72 "from" figures), House Rules (22 QUIET / 10 OUT / 8 RULES).

### T3 — Tonight speech card + hanging slab (from Sea Paradise's "today's hours" speech-bubble card and hanging ticket slab; T(f) secondary)
- **Reference**: a rounded speech-bubble card docked at the hero's lower right with today's date, hours and two pill buttons (outline + filled); a slab hanging from the header's right end with a rounded bottom-left corner carrying the ticket CTA.
- **Ours, card** `hk-tonight`: white `#FFFFFF`, **radius 40px**, with a **speech tail** (CSS triangle 28×22, bottom-left at 64px, pointing down-left), width 440px, padding 28px 32px, 1px #1E1E1E border (Tokyonode line language, replaces the sticker colours), no shadow. Docked at the hero photo's lower right: `right: 48px; bottom: -48px` (overhangs the photo foot by 48px onto white). Contents: eyebrow "TONIGHT" (.6875rem caps ls .14em #9D9D9D) + amber dot 8px #E8A33D (only accent on the page) · row 1 "Check-in" **15:00–02:00** (Geist 400 1.75rem tabular) · divider 1px #E6E6E6 vertical · row 2 "Showers" 06:00–23:00 · "Desk open 24 hours" .8125rem · two pills: outline "See the pods" (→ /pods/) + filled ink "Book tonight" (→ /book/), both radius 999px, 44px high. A small SVG luggage-tag line icon (24px, 1px stroke ink) sits at the card's top-right corner and floats ±6px (KV #5).
- **Ours, slab** `hk-slab`: ink `#1E1E1E` slab at the header's right end, width 168px, hanging from the top of the page down past the nav bar's bottom edge by **20px** (total height 138 + 20 = 158px at desktop), **bottom-left radius 24px**, other corners 0; content stacked centred: a 28px line-icon bed/pod SVG (1px white), "BOOK TONIGHT" Inter Tight 500 .75rem caps ls .14em white, and a 1px white outline pill "€42 from". The nav's 1px frame stops at the slab's left edge.
- **Do not dilute**: tail on the card; card overhangs the photo; slab hangs below the nav line; only one CTA on the slab.
- **Inner continuation**: the slab is in the header on every page. A compact Tonight card (no tail-off, same shape, 360px) docks on the lower right of the page-head photo on Pods & Cabins, Day-use Showers, Access and Book (4 inner pages).

### Supporting (Tokyonode, always on)
- Header 138px = wordmark band 62px + **1px-framed nav bar 76px**; nav bar sticky; the wordmark band scrolls away and a small left mark fades in on the nav (KV #1).
- **Section title band**: full-width 1px #1E1E1E rule above and below, height 45px (padding 12px 0), centred title Geist 300 caps ls .14em 1.75rem→ (desktop 2.625rem = T(b) 42px), `sp-reveal--wipe`. Used on every section of every page.
- Square 48px arrow boxes on every link row; outline pills for tags; radius 0 everywhere except pills (999px) and the T3 card (40px) / slab (24px corner).

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
- **Tokyonode**: a white stage. A thin, widely tracked wordmark on a white band, a 1px-framed nav bar under it, then one huge full-bleed photograph of a live moment (a performer mid-song, dark stage) — story: "a hub where things happen, right now". Text comes only below the photo (headline left, short paragraph right). Signature motion: the wordmark band gives way as the boxed nav docks sticky with a small mark; section titles reveal with a wipe.
- **Sea Paradise**: a candid, close family photograph fills the screen — the story is "you are welcome here today"; a speech-bubble card at lower right says today's date and opening hours with two buttons; a ticket slab hangs from the header's right end; creatures drift and shake gently.

### (2) Our translation (same composition, same motion idea, same image type: real photography)
The station-front lobby is the stage. One high-key, full-bleed photograph of a live moment at our desk: **the night clerk (Jonah) hands a locker key across a pale counter while a traveller sets a backpack down** — "you got off the last train, and someone is here". Composition stays Tokyonode's: white wordmark band, framed nav, photo with no text on it, headline under the photo left with a short paragraph right. Sea Paradise's welcome devices are translated into the hotel's own facts: the speech-bubble card becomes the **Tonight card** (check-in hours, showers, two buttons), the ticket slab becomes the ink **Book tonight** slab, the drifting creature becomes a small luggage-tag icon. Motion stays: wordmark band collapses into the sticky nav, the photo drifts with parallax, titles below wipe in.

### (3) KV checklist (all on the home first screen at 1440×900 and visible)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Thin tracked wordmark band over 1px-framed nav (Tokyonode) | "HAKO CAPSULE" Geist 300 caps 3.25rem ls .32em on a 62px white band + 76px nav bar with 1px #1E1E1E frame | top, full width, y 0–138 | nav `position: sticky; top: 0`; band scrolls away; small left mark "HAKO" fades in on the nav via CSS `animation-timeline: scroll()` range 0–120px inside `@supports`; without support / reduced motion the small mark is simply visible | — |
| 2 | Full-bleed stage photograph of a live moment (Tokyonode) | P01: clerk hands locker key across pale counter, traveller sets down backpack | y 138 → 138 + min(64vh, 590px) (576 at 900), 100vw, ratio ≈2.5:1 | `sp-parallax`, `--sp-par: 8%` (mobile 6%) | **P01** |
| 3 | Speech-bubble "today's hours" card, lower right (Sea Paradise) | Tonight card (T3), radius 40, tail, 1px ink border, check-in 15:00–02:00, showers 06:00–23:00, 2 pills | right 48px, overhanging the photo foot by 48px | static (no reveal on hero) | — |
| 4 | Ticket slab hanging from header right (Sea Paradise) | Ink slab 168px, bottom-left radius 24px, "BOOK TONIGHT", hangs 20px below the nav line | header right end | none | — |
| 5 | Drifting creatures (Sea Paradise) | 24px luggage-tag line SVG on the Tonight card corner | card top-right | `hk-float` 8s ease-in-out infinite, translateY ±6px; off under reduced motion / `?sp-static` / editor | — |
| 6 | Headline left + short paragraph right under the stage (Tokyonode) | h1 "One minute from the platform." (4.5rem) left 7/12; right 5/12 a 40-word paragraph + outline pill "ABOUT US" | directly under the photo, starts at y ≈ 762 at 1440×900 (first line fully visible) | static | — |
All images in this table are in §6 (P01).

---

## 3. Home page

### First-screen composition (1440×900)
- y 0–62: wordmark band, centred "HAKO CAPSULE". Language switch (EN / ZH / JA / FR / DE, .75rem #9D9D9D) at right inside the band's right side, left of the slab.
- y 62–138: nav bar, 1px frame (left, top, bottom; right side meets the slab). Centred links, Inter Tight 300 1rem caps ls .1em: PODS · COMPARE · SHOWERS · HOUSE RULES · ACCESS · ABOUT. Slab at x 1272–1440, y 0–158.
- y 138–714: P01 full-bleed (object-position 40% 50%: the key handover sits in the left-centre; the Tonight card covers only the right-lower empty counter area).
- Tonight card: x 952–1392, y ≈ 520–762.
- y 762+: h1 at left (container 1280, padding-left 80px). Only white, ink, P01 and a ≤1% amber dot → saturated share ≈ 3–5% (cap 15% by `check-first-screen.py`; target ≤5%).
- No form, no table, no search, no centred giant text on the first screen.
- **Mobile 390**: band 48px (wordmark 1.5rem ls .24em), nav bar collapses to a 1px-framed bar with "Menu" button and the slab shrinks to 88px wide (icon + "BOOK", hangs 12px). Photo 390×300 (object-position 35% 50%). Tonight card leaves the photo: becomes a full-width (calc(100% − 32px)) block **under** the photo with margin-top −32px (normal flow, not absolute), tail kept. h1 2.75rem below it. **No vertical text, no absolutely positioned labels over text.**

### Block order (stage → rooms → compare → the minute → rules → stories → letter → book)
| § | Block | Purpose | Layout & images | Copy |
|---|---|---|---|---|
| 0 | Header | wordmark band + framed sticky nav + slab (KV1, KV4) | — | links |
| 1 | Stage | KV2/3/5/6 | P01 full-bleed parallax, Tonight card, h1 + lede 2-col | h1 6 words, lede ~40 words |
| 2 | Narrative "WHY A CAPSULE" | narrow centred column max 620px (Tokyonode intro), 3 paragraphs + outline pill "OUR STORY" | no image; section title band above | **3 paragraphs × 45–60 words** (last train, clean pod + hot shower, the night desk) |
| 3 | "PODS" — T1 wall | five offers at a glance | P02–P06 in 5 cells, full-bleed | names + 1-line specs + prices |
| 4 | "COMPARE" — comparison table | page_structure: pod / wide / quiet / cabin / day use, rows = size, door, locker, power & light, towel set, price/night | 1200px container, 1px ink outer frame, #E6E6E6 row lines, header row #F7F7F7; price row bold; under it a ruled link row "Full prices →" with arrow box | ~90 words of cells |
| 5 | Parallax band | breathing room, the showers | P10 full-bleed 1440×590 (2.4:1), `sp-parallax --sp-par: 10%`, no text; 1px ink rule top and bottom | caption .75rem caps under it: "TEN PRIVATE SHOWER ROOMS, OPEN 06:00–23:00" |
| 6 | "THE STATION MINUTE" — T2 cards | 1 MIN / 84 BEDS / 24 HRS | P07, P08, P09, middle lowered 60px | 3 × 25 words |
| 7 | "HOUSE RULES" — Tokyonode event row | 50/50: photo left P11 (720×382, 1.88:1) flush to the viewport's left edge; right: 8 rules as a ruled numbered list (01–08, 1px #E6E6E6 lines, padding 40px); foot strip 84px in 3 cells: "Quiet hours 22:00–07:00" · "Check-out 10:00" · 48px arrow box → /house-rules/ | P11 | 8 short lines |
| 8 | "FROM THE NIGHT DESK" | 3 stories as full-width ruled rows (Tokyonode list rows): date pill, title Geist 400 1.5rem, 25-word excerpt, arrow box right | no images (text rows) | 3 × 25 words |
| 9 | "THE LAST TRAIN LETTER" | newsletter slot (§10) on #F7F7F7 band, 2-col: left heading + 30 words, right the form | no image | ~30 words |
| 10 | "BOOK TONIGHT" band | the single way to book: ink #1E1E1E band, white text, 3 ruled cells: "Email or form → /book/" · "Walk in, desk open 24 h" · "€42 from" + white outline pill "Book tonight" | no image | ~30 words |
| 11 | Footer | white, 1px top rule; wordmark small, address, hours, nav repeat, `stay@hako-capsule.example`, link "The Last Train Letter" (no second form) | — | — |
Home photos: **P01–P11 = 11 positions** (≥8 ✔). Word count: §1 lede 40 + §2 160 + §3 60 + §6 75 + §7 50 + §8 75 + §9 30 + §10 30 ≈ **520 words** (≥250, ≥3 narrative paragraphs ≥20 words ✔ in §2).

### Comparison with the most recent themes (must not match)
| Theme | Home order |
|---|---|
| Hinata Market | masthead → 3-column front → ticker → feed → stalls strip → season band → apply → fees → foot trio |
| Futari Journeys | hero + 3-question foot → pair → Q budget → Q timing cards → map band → Q documents → how → planners → book → letter |
| Utsushi Films | film-index window → intro → case wall → beside → shaped → band → rates → crew → letters |
| Shiosai Resort | hero + flag bar → welcome → rooms (sticky) → week 2×2 → packages → prices → beach → families → check-dates band → letter → journal |
| **Hako Capsule** | **framed header + slab → stage photo + speech card → narrow narrative → 5-cell bay wall → comparison table → parallax band → notched numeral trio → 50/50 rules row + foot strip → ruled story rows → letter → ink book band** |
Why it differs: no other recent home has a full-bleed 1px-ruled 5-cell wall right after a narrow text column, nor a comparison table as the 4th block; the hero has no text on the photo and no bar across its foot (Shiosai's flag bar), no index window (Utsushi), no Q-chapters (Futari), no 3-column newspaper front (Hinata). Signatures (bay wall, notched numeral cards, speech card + slab) do not appear in used-refs.

---

## 4. Inner pages (11 + Journal + 1 post)
Every page: header with slab, page head = section title band + page-head photo (2.4:1 full-bleed, `sp-parallax` 8%/6%) unless noted, footer. Each lists its signature continuation.
| Page (slug) | Core content | Images | Signatures |
|---|---|---|---|
| About (`about`) | 2019 story, Mara's founding note (3 paragraphs), the building in 4 ruled text cells (lobby, pods, showers, lounge) | head P12 | T1 (4 text cells), T2 (2019 / 84 / 10) |
| Pods & Cabins (`pods`) | 4 pod types, each a 50/50 Tokyonode row (photo left 1.88:1, spec list right, 84px foot strip with price + arrow box) | head P08 (2.4:1 crop), rows P02, P03, P04, P05 | T1 (4-cell wall at top), T3 compact card |
| Compare & Prices (`prices`) | full comparison table (5 options × 8 rows), 6-item price list, what is included, payment and cancellation (free until 18:00 on arrival day) | head P16 | T2 (€24 / €42 / €72 "from"), title bands |
| Day-use Showers (`showers`) | Shower only €9 / Day-use Pod €24, hours, towel set, how it works (ruled 4-line list) | head P10, cells P06, P15 | T1 (2 photo + 2 info cells), T2 (45 MIN / 06 OPEN / 10 ROOMS), T3 compact card |
| House Rules (`house-rules`) | 8 rules, each a ruled row with number + explanation; luggage, lockers, quiet floor | head P11 | T2 (22 QUIET / 10 OUT / 8 RULES) |
| Access (`access`) | East Exit walk in 4 ruled lines, address, hours, simple 1px ink SVG line map, luggage room | head P14 | T2 (1 MIN / 80 M / 24 HRS), T3 compact card |
| Night Desk (`night-desk`, people) | 7 people as T1 cells: P13 and P17 as photo cells (hands/at work, no portraits needed), the others as ruled text cells (initials, role pill, 20-word note) | P13, P17 | T1 people cells |
| FAQ (`faq`) | 10 Q&As as ruled `details` rows with 48px +/× box | none | ruled rows, square boxes |
| Book (`book`, contact) | how to book (4 steps, ruled list), contact form slot (§10), walk-in note, mailto fallback | head P09 | T3 compact card, foot strip |
| The Last Train Letter (`letter`, newsletter) | standalone subscribe page (§10); what is in it (monthly: late-arrival tips, shower-hour changes) | none | title bands |
| Journal (`journal`, posts, empty content) | posts as a 3-across T1 cell wall | post featured image | T1 |
| Post "The 00:52 last train" | category "Night desk", tags "last-train", "standard-pod" | featured P18 | — |
Signature coverage on inner pages: T1 on Pods, Showers, Night Desk, Journal, About (5); T2 on About, Prices, Showers, House Rules, Access (5); T3 on Pods, Showers, Access, Book (4) ✔.

---

## 5. Colour and type

### Colour (T(a) codes used as is; silver from the row)
| Token (theme.json slug) | Hex | Area share | Source |
|---|---|---|---|
| `base` white | #FFFFFF | ≈70% | T(a) base |
| `ink` | #1E1E1E | text, 1px frames/rules, slab, book band ≈ 12% area | T(a) ink |
| `pale` | #F7F7F7 | ≈10% (table head, letter band) | T(a) pale band |
| `hairline` | #E6E6E6 | lines | T(a) hairline |
| `grey` | #9D9D9D | labels, eyebrows (≥ .8125rem only on white; for body-size grey text use `#6E6E6E` `grey-dark` for 4.5:1) | T(a) label |
| `silver` (row "silver mouse") | #AFAFB0 | ≈5–8%: T2 badge fill, table "selected" column tint `#AFAFB0` at 20% (#EFEFEF), disabled | row hex |
| `amber` point | #E8A33D | <1%: the Tonight dot only | stage-a |
No other colours; all other colour comes from photographs. **First-screen saturated share ≤ 5% (hard cap 15%)**. Not beige, not cream.

### Type (font_direction **sans**)
Fonts load only through theme.json `fontFamilies` + `fontFace` (woff2 in `assets/fonts/`, OFL, listed in theme-meta `fonts[].files` with `licenseFile`, names in readme.txt) so editor and front end match; style.css uses `:lang(` → copy `shared/inc/editor-lang.php` to `inc/editor-lang.php`, `require_once` in functions.php.
- `geist`: Geist 300, 400, 500 (Latin, Latin-ext) — wordmark, display, headings, numerals. (T(b) thin condensed grotesque → Geist 300 caps with wide tracking.)
- `inter-tight`: Inter Tight 300, 400, 500 (Latin, Latin-ext) — body, nav, table, labels, buttons, forms. (T(b) trade-gothic-next 300.)
- `noto-sans-tc`: Noto Sans TC 400, 500 (zh-TW subset of every zh-TW demo string, Hokuto/Hada substitute subsetting method). `noto-sans-jp`: Noto Sans JP 400, 500 (ja subset, same).
Stacks:
- Latin display `Geist, "Helvetica Neue", Arial, sans-serif`; Latin body `"Inter Tight", "Helvetica Neue", Arial, sans-serif`.
- `:root:lang(zh-TW)` display `Geist, "Noto Sans TC", "PingFang TC", "Microsoft JhengHei", sans-serif`; body `"Inter Tight", "PingFang TC", "Microsoft JhengHei", sans-serif` (no bundled TC/JP in body — repo contract).
- `:root:lang(ja)` display `Geist, "Noto Sans JP", "Hiragino Sans", "Hiragino Kaku Gothic ProN", "Yu Gothic", sans-serif`; body `"Inter Tight", "Hiragino Sans", "Hiragino Kaku Gothic ProN", "Yu Gothic", Meiryo, sans-serif`.
- CJK: headings weight 400 (no 300), sizes ×0.75, body line-height **1.85**, ls .04em, no uppercase/letter-spacing >.06em on CJK titles. fr/de: `hyphens: auto` on body, h2, h3 (h1 `manual`). Wordmark stays Latin.
| Role | Font / weight | Desktop → mobile | Line-height | Tracking | Source |
|---|---|---|---|---|---|
| wordmark band | Geist 300 caps | 3.25rem → 1.5rem | 1 | .32em | T(b) wordmark, tracked |
| hero h1 | Geist 300 | **4.5rem (72px)** → 2.75rem | 1.08 | −.01em | largest ≥4.25rem; Tokyonode intro headline (light) |
| inner page h1 | Geist 300 | **4.25rem** → 2.5rem | 1.1 | −.01em | |
| section title band | Geist 300 caps | 2.625rem (42px) → 1.75rem | 1 | .14em | T(b) 42px titles ls .12em |
| h3 / cell name | Geist 400 | 1.4375rem (23px) → 1.25rem | 1.3 | 0 | T(b) h3 23px |
| T2 numeral | Geist 300 tabular | 3rem → 2.5rem | 1 | −.02em | secondary date numerals |
| nav | Inter Tight 300 caps | 1rem → 1rem | 1 | .1em | T(b) nav 16px |
| body | Inter Tight 300 (≥1.0625rem) / 400 (≤1rem) | **1.03125rem (16.5px)** → 1rem | **1.87** | .01em | T(b) 16.5 / 30.8 |
| label / pill | Inter Tight 500 caps | .75rem | 1 | .12em | T(b) 12–13px pills |
| table cell | Inter Tight 400 | .9375rem | 1.6 | 0 | |
| price | Inter Tight 500 tabular-nums | 1.0625rem | 1.4 | 0 | |
| button | Inter Tight 500 caps | .8125rem | 1 | .12em | |
theme.json fontSizes: `small` .8125rem, `medium` 1.03125rem, `large` 1.4375rem, `x-large` clamp(1.75rem, 1rem + 2vw, 2.625rem), `xx-large` clamp(2.5rem, 1.2rem + 3.6vw, **4.25rem**), `huge` clamp(2.75rem, 1.1rem + 4.4vw, **4.5rem**).

---

## 6. Photos (18, Grok, one at a time; read every one; redo any with text, logos, signage, bad hands/faces)
**STYLE** (one string for the whole theme, `IMAGE_STYLE`):
`High-key documentary photograph, bright soft daylight mixed with cool white LED, pale grey and white surfaces, brushed steel and light oak, quiet silver-grey palette with natural skin tones, modern capsule hotel next to a city railway station, 35mm lens, eye level, calm candid moment, clean and uncluttered, international diverse people, no Japanese elements, no text, no letters, no numbers, no logos, no signage, no screens with content, photorealistic, subtle film grain`
| # | Subject / composition | Ratio / size | Used on (page § block) |
|---|---|---|---|
| P01 ★ | Night clerk in a light grey shirt hands a single brass locker key across a pale oak counter to a traveller who is lowering a backpack; lobby behind is white, soft lamps; subjects left-centre, empty counter right | 2.5:1, 2000×800 | Home §1 hero (parallax) |
| P02 ★ | Standard pod interior, white moulded shell, folded white towel set on a grey duvet, warm reading light, curtain half open | 1:1, 1200 | Home §3 cell 1; Pods row 1 |
| P03 ★ | Wide pod, traveller sitting cross-legged reading, curtain open, shelf with water bottle | 1:1 | Home §3 cell 2; Pods row 2 |
| P04 ★ | Quiet-floor corridor, two tiers of pods with pale curtains closed, soft floor lights | 1:1 | Home §3 cell 3; Pods row 3 |
| P05 ★ | Single cabin with a light door ajar, narrow bed, coat hook, small desk | 1:1 | Home §3 cell 4; Pods row 4 |
| P06 ★ | Private shower room, grey tiles, glass screen, rolled towel on a steel bench | 1:1 | Home §3 cell 5; Showers cell |
| P07 ★ | Station-front street at dawn, a traveller with a roller case crossing toward a white low building, covered walkway, no signs | 4:3, 1200×900 | Home §6 card 1 |
| P08 ★ | Long view down a pod hall, two tiers of pods receding | 4:3 | Home §6 card 2; Pods head (same file, 2.4:1 object-fit crop; different page) |
| P09 ★ | The front desk at night from the side: lamp, key board with rows of brass keys (no numbers), clerk writing | 4:3 | Home §6 card 3; Book head |
| P10 ★ | Washroom row: white basins, mirrors without reflections of text, steel taps, soft light, wide | 2.4:1, 2000×833 | Home §5 parallax band; Showers head |
| P11 ★ | Wall of pale grey lockers, a hand turning a key, a backpack on the bench | 1.88:1, 1440×766 | Home §7 rules row; House Rules head |
| P12 | Lounge: long oak table, a traveller with tea and a book, big window onto a blurred station canopy | 2.4:1 | About head |
| P13 | Housekeeper folding white towels on a steel cart | 1:1 | Night Desk cell |
| P14 | Covered walkway from a station exit, glass roof, a traveller walking away, early light | 2.4:1 | Access head |
| P15 | Towel set flat-lay: towel, slippers, toothbrush, earplugs on pale grey | 1:1 | Showers cell |
| P16 | Pod curtain closed, a warm reading light glowing through, shoes paired on the step below | 2.4:1 | Compare & Prices head |
| P17 | Night clerk's hands sorting brass keys at the counter, close | 1:1 | Night Desk cell |
| P18 | Traveller asleep-to-waking, sitting up in a standard pod with coffee, morning light | 3:2 | Post "The 00:52 last train" featured |
★ = home (11). Total 18 unique; 0 cut-outs; each ≤300 KB webp, ≤2000px. No photo repeats within one page.

---

## 7. Motion and scroll (sp-scroll; three effects from stage-a candidates)
Copy `pipeline/assets/sp-scroll/` unchanged to `assets/`; JS in head, not deferred; CSS also as editor style. Only `sp-*` classes; no scroll listeners, GSAP, Webflow IX, Swiper.
| Effect | sp-* | Where | Reference trigger / time / easing | Ours |
|---|---|---|---|---|
| Title wipe | `sp-reveal sp-reveal--wipe` | every section title band (home §2–§10, all inner pages) — on the band's inner Group, the clip is applied to its child heading | Tokyonode `title-animation`, Webflow IX2 in-view, ≈0.6–0.8s, ease | built-in wipe; set `--sp-dur: .7s` on `.hk-band .sp-reveal--wipe`; easing left as sp-scroll's `cubic-bezier(.77,0,.175,1)` |
| Rise + stagger | `sp-reveal sp-reveal--up` (+ `sp-stagger` parent) | §2 paragraphs, §3 wall **wrapper** (desktop; on mobile scroll row the wrapper only), §6 cards (stagger), §7 rule list, §8 rows (stagger); inner: rows, cells, people | Sea Paradise `.js-fadeup`: translateY(150px) → 0, `transition: all .3s`, fires at element top + 200 < viewport | `--sp-dist: 24px` (≤30px rule), `--sp-dur: .5s`, ease `cubic-bezier(.23,1,.32,1)`; stagger .12s. **Not** on hero, Tonight card, slab, comparison table, price list, forms, FAQ details, legal text |
| Parallax | `sp-parallax` | see 7.1 | — | — |
Not used: sp-count, sp-marquee, zoom, mask. Wordmark collapse (KV1) and luggage-tag float (KV5) are theme CSS, both disabled under reduced motion, `?sp-static`, no-JS-safe (nothing hidden), and in the editor.

### 7.1 Parallax (required)
| Where | Structure | Background layer | Foreground | `--sp-par` desktop / mobile | Reference motion |
|---|---|---|---|---|---|
| **Hero** (primary) | Cover `hk-stage sp-parallax`, min(64vh, 590px) | Cover image **P01** | none inside the moving layer; the Tonight card is a sibling outside the Cover (positioned relative to an outer wrapper), h1 is below | **8% / 6%** | Tokyonode stage photo held while the page moves under the docking nav |
| **Shower band** (home §5) | Group `hk-band-photo sp-parallax` with `figure > img` P10, 2.4:1 | P10 | none | **10% / 6%** | Sea Paradise layered drift (estimated), sp-scroll CSS scroll-driven |
| Inner page heads | same as hero structure | each page head photo (§4/§6) | none | 8% / 6% | same |
Mobile keeps parallax. Reduced motion, `?sp-static`, editor: no movement. Acceptance: `check-parallax.mjs` desktop + mobile (Δ ≥6px, 0 under reduced motion; ≥3 reveals hidden before, final after; nothing transparent at the bottom).

---

## 8. Responsive rules (hard)
- 390px first screen: no vertical text, no absolute labels over text; Tonight card in normal flow under the photo; slab compact (88px); no horizontal overflow (wall scroll row is `overflow-x: auto` inside a clipped wrapper).
- **Comparison table and price list at ≥782px: full container width (1200px max, `width: 100%`, `table-layout: fixed`), price column `white-space: nowrap; text-align: right; width: 9rem`, never clipped** (check at 800 and 1280; `figure.wp-block-table { overflow: visible }` at ≥782).
- **<782px every table stacks**: each row becomes a card (1px #E6E6E6 border, `display: block`), cells as `label: value` lines using `data-label` (the label printed by a visible `<span class="hk-cell-label">` in markup, not CSS `content:`); the comparison table becomes 5 stacked cards (one per option).
- T1 wall: 5 across ≥1024; 3+2 at 782–1023; scroll row <782. T2 cards: 3 across ≥782 (middle −60px), 1 column <782 (no offset). Tokyonode 50/50 rows: stack photo above text <782.
- Nav <1024: "Menu" button (CSS `content` not used for the label), one top menu only.

---

## 9. Similarity to the reference (target ≈80%; numbers from reference-tokens.md)
| Dimension | Reference value | Hako Capsule value |
|---|---|---|
| Base / ink | #FFFFFF ≈80% / #1E1E1E (T(a)) | #FFFFFF ≈70% / #1E1E1E |
| Pale / hairline / label | #F7F7F7 / #E6E6E6 / #9D9D9D | same |
| Accent | none (photo colour) | silver #AFAFB0 ≤8% (row), amber dot <1% |
| First-screen saturation | ≈2% | ≤5% |
| Display type | thin condensed grotesque caps, 42px titles, ls .12em, w400 | Geist 300 caps, 42px titles, ls .14em |
| Body | 16.5px / 1.87, w300 | 16.5px / 1.87, Inter Tight 300–400 |
| h3 | 23px w200 / 1.3 | 23px Geist 400 / 1.3 |
| Nav | 16px caps ls .1em w300 | 16px Inter Tight 300 caps ls .1em |
| Header | 138 = 62 band + 76 framed nav, sticky | 138 = 62 + 76, sticky nav, band collapses |
| Section separation | full-width 1px rules, 45px title band | same |
| Radius | 0; pills 999px | 0; pills 999px; T3 card 40px, slab corner 24px (secondary) |
| Borders / shadow | 1px #1E1E1E / #E6E6E6; none | same; none |
| Stage photo | 1440×590 ≈2.4:1, full-bleed, no text on it | 1440×576–590, full-bleed, no text on it |
| Cell wall | 5 × 288px, cells 513 tall, photo 1:1, 48px arrow box | same (T1) |
| Event row | 50/50, photo 720×382, 40px padding, foot strip 84px in 3 cells | same (home §7, Pods rows) |
| Secondary card | 4:3, 8px white frame, notch ≈148×70, 36px badge, middle lowered | same (T2) |
| Secondary today card | speech bubble lower right, 2 buttons | Tonight card radius 40 + tail, 2 pills |
| Motion | title wipe ≈0.7s ease; fade-up .3s 150px | wipe .7s; up .5s 24px (rule cap 30px) |
| Imagery | editorial real photos, no masks | high-key real photos, no masks |

---

## 10. Forms (form contract v1 — `steps/form-contract-v1` exists)
Read `pipeline/assets/forms/README.md`. Copy `shippress-forms.php` unchanged to `inc/`, CSS + editor JS unchanged to `assets/`, `require` in functions.php. Patterns stay literal block markup with a small PHP island for `shippress_form_slot`. **No form on the home first screen; no `sp-reveal` on any form or its wrapper.**
- **Book (`book`, contact; the only booking page)**: section "SEND A REQUEST", 640px column on white: `shippress_form_slot( kind: contact, fallback: … )`. Fallback = buffered literal mailto button **"Email the night desk"** (`wp-element-button`, `mailto:stay@hako-capsule.example?subject=<forms_contact_subject>`) + sentence "Opens your email app. Tell us the night, the pod type and your arrival time." Never links to `/book/`. Recommended CF7 fields (readme only; the theme does not create them): name*, email*, arrival date*, nights (1–14)*, option (select: Standard Pod / Wide Pod / Quiet-Floor Pod / Single Cabin / Day-use Pod / Shower only)*, guests (1–4), arrival time (select 15:00–02:00 hourly), notes (textarea), consent checkbox* ("Hako Capsule may contact me about this request"), submit "Send request". Home §10 and the slab only **link** to /book/.
- **The Last Train Letter (`letter`, newsletter)**: standalone page; form panel on **ink** #1E1E1E, radius 0, padding 64px, text #FFFFFF: `shippress_form_slot( kind: newsletter, email: stay@hako-capsule.example, label: forms_email, submit: forms_subscribe, notice: forms_mail_notice, subject: forms_mail_subject )`.
- **Home §9**: same newsletter slot on the **pale** #F7F7F7 band (light). Footer: link only.
- Plugin order (shared helper): newsletter MailPoet → MC4WP; CF7/WPForms only with an explicit dedicated newsletter id; contact CF7 → WPForms. Without plugins: required `type=email` field + submit (native mailto POST) + visible notice; never claim success.
- **Tokens** (style.css → theme.json presets):
  - Light (white / pale): `--sp-form-accent: var(--wp--preset--color--ink)` #1E1E1E; `--sp-form-on-accent: var(--wp--preset--color--base)` #FFFFFF; `--sp-form-radius: 0` (T(d)); `--sp-form-focus: #1E1E1E` (2px outline, offset 2px); `--sp-form-surface: #FFFFFF` (on pale) / `#F7F7F7` (on white); `--sp-form-text: #1E1E1E`. Inputs 1px #1E1E1E border, 48px high, Inter Tight 400 1rem; labels Inter Tight 500 .75rem caps ls .12em #6E6E6E (no caps in zh-TW/ja); submit filled ink, Inter Tight 500 .8125rem caps ls .12em, hover #3A3A3A; error text + border #A63A2E; success panel #EEF3EF with text #2F5D46.
  - Dark (`.hk-dark`: letter panel, book band, any ink ground): surface #2A2A2A; text #FFFFFF; accent #FFFFFF; on-accent #1E1E1E; focus #AFAFB0; borders rgba(255,255,255,.5); labels #D6D6D6; error #F2B8B0; success #B9D8C2.
  - States styled: input, textarea, select, checkbox/radio (`accent-color`), label, submit, focus-visible, disabled, error, success — scoped to CF7, WPForms, MailPoet, MC4WP (+ Jetpack / `.wp-block-form`) classes and `.sp-newsletter-fallback`; no global input selectors.
- **i18n semantic keys** in `inc/i18n/en.php` (extract with `L10N_SEMANTIC=1`; five locales, local rewrites): `forms_email` "Email address", `forms_subscribe` "Send me the letter", `forms_mail_notice` "This opens your email app. Send the message to subscribe; you are not subscribed yet.", `forms_mail_subject` "Subscribe to The Last Train Letter", `forms_contact_subject` "Night request", `contact_email` "Email the night desk", `forms_contact_note` (fallback sentence). Verify rendered label, button, notice, subject in en, zh-TW, ja, fr, de.
- Validation: `form-runtime-check.php` (five locales, no plugins), `repo-gates.sh forms`; real CF7 check at 390px + desktop on light (Book, home §9) and dark (Letter) grounds; never submit.

---

## 11. Home acceptance checklist (stage 1, en, `?sp-static` for shots)
- [ ] Header 138 = 62 wordmark band + 76 nav with 1px ink frame; nav sticky; small mark appears after scroll; ink slab hangs 20px below the nav with a 24px bottom-left radius and one CTA.
- [ ] P01 full-bleed, no text on the photo, `sp-parallax` 8% (6% mobile); Tonight card radius 40 + tail + 1px ink border overhangs the photo foot by 48px; luggage-tag icon floats (static in sp-static).
- [ ] h1 ≥4.25rem (4.5rem) visible at 1440×900 under the photo; first-screen saturation ≤5% (`check-first-screen.py` ≤15%).
- [ ] §2 narrow 620px column with 3 paragraphs ≥45 words each; home ≥250 words.
- [ ] T1 wall: 5 cells flush to both viewport edges, 1px ink lines, 1:1 photos, pills/ink chip, 48px arrow boxes.
- [ ] Comparison table full width at 800 and 1280, price column nowrap right, not clipped; stacks to cards at 390.
- [ ] Parallax band P10 2.4:1; `check-parallax.mjs` passes desktop + mobile.
- [ ] T2: 3 cards, 8px white frame, white notch 148×70 with 3rem numeral + 36px silver circle, middle lowered 60px.
- [ ] §7 50/50 rules row with 84px 3-cell foot strip; §8 ruled story rows with arrow boxes.
- [ ] §9 newsletter slot (email + submit + notice) on pale; no reveal on forms; §10 ink book band.
- [ ] Section title bands with full-width 1px rules and wipe on every section; no reveal in the hero.
- [ ] ≥8 home images (11), no repeats on the page, none with text/logos; 0 cut-outs.
- [ ] Prices/hours/capacity exactly as §0; 390px: no overflow, no vertical/absolute labels over text.
- [ ] Fonts from theme.json fontFace (Geist, Inter Tight, Noto Sans TC/JP subsets); editor = front end.
- [ ] `auto-gates.mjs … en … 1 1` pass=true.
