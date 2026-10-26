# Sumika Residences: design spec (stage 1, binding for implementation)

Row b12-2 · archetype sticky-media · hero full-bleed-photo · nav centered · first screen full-bleed-photo-info-bar · page structure locations-network · IMAGERY **photo** (film-grain) · font_direction **serif**.
Main reference: **musu-sauna.com** (https://musu-sauna.com/, S5-Style hotels and inns / travel and sightseeing). All numbers marked `[tok x]` come from `brand/reference-tokens.md` section x. Photos, copy, logo are our own; nothing is copied from the reference.

Story in one line: *A quiet house inside the city — for people stationed somewhere for months. Settle in, belong to the street.*

---

## 1. Signature techniques (three, must be obvious at a glance)

### T1. Torn-edge hero photo with the dark pill nav sitting in its notch (musu-sauna.com, first view)
- **Reference**: the hero is a full-width documentary photo inset 32px left/right; its top edge is not straight but cut into a jagged, torn-brush zig-zag with two tall spikes that rise up around a wide notch. A dark rounded pill nav (574×54, radius 15, bg #251C19, two white buttons 90×34 radius 7) sits inside that notch at y≈140; after scrolling the pill stays fixed at the top while the photo slides up under it `[tok d, e, g]`.
- **Ours, home hero**: photo `01-hero-sofa-desk` inset 32px (≥1100px), 24px (782–1099), 12px (<782). Figure box 1376×800 at 1440. Top edge `clip-path: polygon(0% 25%, 14% 23%, 26.5% 24.5%, 31.5% 4%, 29.5% 22%, 66.5% 22%, 69% 0%, 69.5% 23%, 84% 25.5%, 100% 26.5%, 100% 100%, 0% 100%)` — two spikes (left 31.5%/4%, right 69%/0%) frame a flat notch 29.5–66.5% wide; the pill is centred horizontally on the notch, its bottom 18px above the notch floor. No radius on photos `[tok d]`.
- **Pill nav**: 600×54, radius 15px, bg ink #1F2420, inside: two white buttons 96×34 radius 7 ("Stays", "Enquire", Outfit 14/500 ink), then 3 text links (Houses · A day · Rates, Outfit 15/400 #FFFFFF, ls 0.06em) and the status chip (T1 detail, KV #4). Header `position: sticky; top: 16px; z-index: 50`, transparent background; hero has `margin-top: -72px` so the teeth rise behind the header. Pill stays at top 16px while photo scrolls under (CSS sticky only, no scroll listener).
- **Bottom-left torn tab (our extension of the same cut)**: a ground-coloured (#F2F3F0) block 600×236 sits in the bottom-left corner of the photo with a torn top-right edge (`clip-path: polygon(0 18%, 62% 12%, 70% 0, 74% 14%, 100% 20%, 100% 100%, 0 100%)`), holding the eyebrow and H1 in ink. ≥782px only; on mobile it becomes a normal block under the photo (no absolute positioning).
- **Do not soften**: teeth must be ≥40px tall at 1440 (spikes ≈150px), the pill must be dark ink (not pine, not translucent), photo must touch 32px insets (no rounded card, no shadow).
- **Inner pages**: every inner page hero = same torn top edge (simpler polygon `0 14%, 30% 12%, 34% 0, 36% 11%, 70% 12%, 100% 15%, 100% 100%, 0 100%`), photo 1376×520 (2.65:1), pill always in the same place. Torn-edge also used on the home parallax band (top and bottom) and on the Houses page dividers.

### T2. Offset photo pair + short text block, with grain/pencil marks crossing the edges (musu-sauna.com intro / point rows)
- **Reference**: small landscape 4:3 (~340×230) offset up-left at x≈100, large 3:4 portrait (~400×520) right of centre (28% width), short text block lower-left 352–395px wide; black brush-ink splashes 120–360px overlap the photo corners; rows 890px tall, staggered `[tok c, e, f]`.
- **Ours, home §2 Intro and §5 A day in residence**: 12-col grid at 1280 content width. Small 4:3 photo 360×270 at col 1–4, top 0. Large 3:4 photo 420×560 at col 7–10, top +120px. Text block 380px wide at col 1–4, starting 64px below the small photo; lead paragraph 22px/2.2, ls 0.08em `[tok b]`. In §5 the pair is mirrored (small photo right, large left).
- **Decoration**: our own SVG marks, not brush ink — charcoal #2B2F2A soft pencil scribble + grain smudge, 160–320px, opacity 0.85, overlapping one corner of each photo by 40–60px and partly cropped by the section edge. 3 different SVG shapes (`assets/marks/scribble-a|b|c.svg`), hand-made paths, no text.
- **Do not soften**: the two photos must be clearly different sizes (area ratio ≥2.2) and vertically offset ≥120px; the marks must actually overlap photo corners (not floating in empty space), and be ink-dark, not pale grey.
- **Inner pages**: The Houses (each house row), A Day in Residence (4 time slots), For Companies, Neighbourhoods each open with the same pair layout.

### T3. Per-glyph tilted headings, vertical heading in the side column (musu-sauna.com section titles)
- **Reference**: section headings are drawn per character, 70–82px tall, each glyph rotated −6°…+4°; the intro heading is vertical in a side column; glyphs wobble in as the heading enters (≈0.5s, steps) `[tok b, f, g]`.
- **Ours**: section H2 keywords (one word, ≤8 letters: "Settle", "Houses", "Inside", "A day", "Rates", "Arrive", "Voices") set in Fraunces 5rem/1, weight 600, opsz 144, each letter wrapped in `<span class="glyph sp-reveal sp-reveal--up">` inside a `sp-stagger` parent; fixed tilts by nth-child cycle: −5°, +3°, −2°, +4°, −4°, +2°, −3°, +5° (`transform: rotate()` on an inner span so sp-reveal's transform stays free). A regular-size accessible sentence H2 follows (or `aria-label` on the wrapper, glyph spans `aria-hidden`).
- **Vertical**: in §2 Intro the word "Settle" runs vertically in col 11–12 (`writing-mode: vertical-rl; text-orientation: upright` for Latin letters, letter-spacing 0.02em), height ≈ 520px, beside the large photo. ≥1100px only; <1100px it lies horizontal above the text (no vertical text on mobile).
- **Do not soften**: tilt must be visible (≥2° per glyph, alternating), size ≥4.25rem desktop / 3rem mobile.
- **Inner pages**: every inner page H1 uses the per-glyph tilt (page keyword, e.g. "Houses", "Rates", "Arrive", "People", "Voices", "Ask").

### T4 (supporting). Speech-bubble Q&A (musu-sauna.com FAQ)
1px ink #1F2420 border, radius 4px, tail 14px bottom-left (CSS triangle), "Q" in Fraunces 1.75rem pine #54694A, bubbles alternate left/right offset 80px; answer text below in Outfit. Used on FAQ page and the home Voices block (quotes as bubbles).

### Continuation to inner pages (≥4 required — we use all)
| Page | T1 torn hero + pill | T2 offset pair + marks | T3 tilted glyph H1 | T4 bubbles |
|---|---|---|---|---|
| The Houses | ✓ | ✓ each house | ✓ "Houses" | – |
| Apartments & Rates | ✓ | – | ✓ "Rates" | – |
| A Day in Residence | ✓ | ✓ | ✓ "A day" | – |
| How a Stay Is Arranged | ✓ | – | ✓ "Arrive" | – |
| For Companies | ✓ | ✓ | ✓ "Teams" | – |
| Neighbourhoods | ✓ | ✓ | ✓ "Streets" | – |
| Residents' Stories | ✓ | – | ✓ "Voices" | ✓ |
| People | ✓ | – | ✓ "People" | – |
| FAQ | ✓ | – | ✓ "Ask" | ✓ |
| Enquire | ✓ | – | ✓ "Enquire" | – |

---

## 2. Key visual concept

### (1) Reference first view — concept, story, signature motion
musu-sauna.com opens on one big documentary colour photo: an old timber village house under deep green bamboo, people in towels sitting on benches outside, steam, late-summer light. The photo's top edge is torn into spikes, and the dark pill nav (price list / reserve, weather "18°C, a sauna day even in the rain") sits in the notch, like a label pinned into the landscape. Story: *warm the region through the sauna — loosen up, fall asleep naturally, and become connected to the village.* Signature motion: the pill stays fixed while the photo slides up under it; headings wobble in glyph by glyph; ink splashes fade and rise; the gallery strip glides sideways.

### (2) Our translation (serviced apartments, same composition, same motion idea, same image type = photo)
One big film-grain colour photo of a lived-in apartment interior: a linen sofa, a timber desk with an open notebook and a mug, tall window with morning light and the street's trees outside, a resident (seen from behind/side, no face focus) setting down a bag — *the first morning that already feels like home*. Torn top edge, dark pill nav in the notch with a status chip instead of weather ("07:40 · morning light · Linden Court 4B free from 3 Nov"). Story: *a quiet house inside the city: settle in, belong to the street.* Motion: pill stays fixed while the photo slides up (plus gentle 6% parallax), headings tilt in glyph by glyph, pencil marks drift and fade, a strip of rooms/corridors glides sideways below.

### (3) KV checklist (all visible in the home first screen 1440×900 unless marked)
| # | Reference element | Our counterpart | Place | Motion | Photo |
|---|---|---|---|---|---|
| 1 | Jagged torn top edge on full-bleed documentary photo (2 tall spikes, notch) | Same clip-path cut (polygon in T1) on film-grain interior photo, inset 32px | hero, photo top y≈56→240 | photo scrolls under fixed pill + `sp-parallax` `--sp-par:6%` | 01-hero-sofa-desk |
| 2 | Dark pill nav 574×54 r15 in the notch, 2 white buttons | Ink pill 600×54 r15, white buttons "Stays"/"Enquire", 3 links | top-centre, y≈150 at load | sticky top 16px (CSS sticky, photo slides under) | – |
| 3 | Weather chip inside pill ("18°C / a sauna day even in the rain") | Status chip: small sun-line SVG icon + "07:40 · Linden Court 4B free from 3 Nov" Outfit 13/500 white | inside pill, right end | none | – |
| 4 | Brush-ink splashes overlapping the photo edges | Charcoal pencil scribble SVG (scribble-a, 300px) crossing the photo's bottom-left corner over the torn tab | hero lower-left, overlapping tab and photo by 50px | `sp-parallax` layer, `--sp-par:12%` (drifts up faster than photo) | – (SVG) |
| 5 | Big brand mark at top-left (100px tall logo) | Wordmark "Sumika" Fraunces 2.25rem/600 + "Residences" Outfit 11px ls 0.24em under it | header left, y≈40–96 | static | – |
| 6 | Village people living around the house (candid, from the side) | One resident from the side setting a tote on the desk, morning light, plant and window trees | inside hero photo, right third | – | 01-hero-sofa-desk |
The first-screen H1 lives in the bottom-left torn tab; the info bar (4 cells) is directly under the photo and its top ≥ y 820 must still be visible at 900.

---

## 3. Colour (reference roles, measured; ±5% lightness rule)
| Role | Reference `[tok a]` | Ours | Share (page / first screen) | Note |
|---|---|---|---|---|
| Ground | #F3F3F2 | **#F2F3F0** | ~55% / ~25% | −0.4% L, hue nudged 2° to green |
| Warm band | #EEEBE2 | **#ECEAE3** | 1–2 bands (rates, stories) | |
| Ink (text, pill, rules 1px, CTA band) | #211815 / pill #251C19 | **#1F2420** | text + pill + 1 dark band | same L; hue moved from brown-black to green-black to pair with pine |
| Accent | #22A57F (<1%) | **#54694A** pine (row hex) | <2%: links underline, "Q", eyebrow dots, small numerals | changed: row colour; the reference teal is too vivid for a quiet residence and would push saturated share; pine is the same green family, darker. Never a large fill. |
| Muted text | – | #5D625C | captions, meta | |
| Hairline | #211815 1px | #1F2420 at 1px, opacity 0.9; soft rules #D5D8D1 | | |
| White | #FFFFFF (~2%) | #FFFFFF | pill buttons, table rows | |
| Pencil marks | black ink | #2B2F2A | decoration | |
- First-screen saturated share (S>0.5, V>0.25) **≤15%**, target 5–9% (ref 7.7%). Photo prompts keep greens muted (plants, window trees, desaturated). Run `scripts/check-first-screen.py`.
- Contrast: ink on ground 15.5:1; white on pill ≥14:1; pine on ground 5.6:1 (OK for links ≥15px).

## 4. Type (serif direction)
- Headings: **Fraunces** (variable, opsz 9–144, wght 400–700), fallback `"Fraunces", "Noto Serif TC", "Noto Serif JP", Georgia, serif`.
- Body / UI: **Outfit** (wght 300–600) for Latin as specified by the row; fallback `"Outfit", "Noto Serif TC", "Noto Serif JP", system-ui, sans-serif`.
- zh-TW: headings `"Noto Serif TC", "Fraunces", serif`; body `"Outfit", "Noto Serif CJK TC", serif` (system Traditional Chinese serif, not the bundled heading face). ja: `"Noto Serif JP", "Fraunces", serif`. Never Noto Sans. CJK sizes about 0.75x Latin display sizes, body lh 1.85; fr/de `hyphens:auto`.
- All loaded via theme.json `fontFamilies` + `fontFace` (woff2 in assets/fonts, Noto Serif TC/JP subsets as in Hokuto/Hada); copy shared/inc/editor-lang.php → inc/editor-lang.php and require it (style.css uses `:lang()`). Editor and front must match (check-editor-fonts.mjs).
| Token | Size | Weight / lh / ls | Source |
|---|---|---|---|
| glyph-display (T3 words) | 5rem (80px) desktop, 3rem mobile | Fraunces 600, lh 1, ls 0 | ref headings 70–82px `[tok b]` |
| h1 hero (tab) | **4.5rem** clamp(2.6rem, 6vw, 4.5rem) | Fraunces 500, lh 1.04, ls −0.01em | max ≥4.25rem rule |
| h2 sentence | 2.25rem | Fraunces 400, lh 1.2 | |
| h3 | 1.5rem | Fraunces 500, lh 1.3 | |
| lead | 1.375rem (22px) | Outfit 300, lh 2.2, ls 0.08em, max 720px | `[tok b]` lead 22/48.4/1.76 |
| body | 1rem (16px) | Outfit 400, lh 1.75, ls 0.05em | `[tok b]` |
| nav / buttons | 15px / 14px | Outfit 500, lh 24px, ls 0.06em | `[tok b]` 16/24/0.96 |
| eyebrow / meta | 13px | Outfit 500, ls 0.14em, uppercase OK for Latin, pine dot 6px before | |
| price numerals | 1.5rem | Fraunces 500, `font-variant-numeric: tabular-nums` | |

## 5. Spacing, radius, motion tokens
- Wide 1376px (32px inset at 1440) for hero/strip/band; content 1280; text column 720 `[tok c]`. Section padding-top 216px desktop / 112px mobile (ref 216–231) `[tok c]`; price section 96px `[tok c]` 90.
- Radius: pill 15px, buttons 7px, bubbles 4px, photos **0** `[tok d]`. No box-shadow anywhere `[tok d]`. Borders 1px ink.
- Ink arrow button (ref hexagon-ish 70×52): ours a 64×48 ink pill radius 15 with white → arrow, next to text links "See the houses", "Rates in full" `[tok f]`.
- Overlap: section photo blocks overlap the next section heading by 40px `[tok e]` (negative margin on the following heading group, ≥782px only).
- Motion durations: reveal 0.8s cubic-bezier(.23,1,.32,1) (`--sp-dur`), glyph reveal `--sp-dist: 18px`; ref 0.5–1.3s sine.out/circ.out `[tok g]`.

---

## 6. Home page (en)

### First screen (1440×900)
- y 0–112 header row (sticky top 16px): wordmark left at x=48, pill centred, right: two text links "Journal" "JA/ZH…" language switcher (Outfit 15, underline = 2px pine hand-drawn SVG line 8px below on hover/current `[tok b]`). Logo and right links sit in 15px-radius ground chips so they stay legible over the photo once scrolled.
- y 56–800 hero photo 01 with torn top (T1), `sp-parallax --sp-par:6%`.
- Bottom-left torn tab 600×236 (x 32, y 564–800): eyebrow "Serviced apartments · Calder Harbour · since 2014"; H1 "Stay a season,<br>not a night." Fraunces 4.5rem.
- Pencil scribble-a crossing tab/photo corner (KV #4).
- y 820–900 info bar on ground, 1280 wide, 4 cells split by 1px ink rules: "3 houses · 54 apartments" | "Stays from 30 nights" | "From €2,150 a month, bills included" | "Front desk 08:00–20:00 · night line 24h". Outfit 15/500, numbers Fraunces 1.5rem. Mobile: 2×2 grid, static.
- Mobile 390: header = wordmark + pill-only (menu button + "Enquire" white button), photo 390−24 wide, aspect 4:5, simplified 3-tooth top `polygon(0 10%, 40% 8%, 46% 0, 48% 8%, 100% 11%, 100% 100%, 0 100%)`; H1 tab below the photo as normal flow; no vertical text; no absolute labels.

### Block order (with copy weight; home ≥250 words, ≥3 narrative paragraphs)
| # | Block | Purpose | Layout & photos | Copy | Motion |
|---|---|---|---|---|---|
| 0 | Header | nav | wordmark / centred ink pill / links | – | sticky |
| 1 | Hero + info bar | KV | T1, photo **01** | eyebrow, H1, 4 facts | parallax (no reveal) |
| 2 | Intro "Settle" | what Sumika is | T2 pair: small 4:3 **02-window-seat** up-left, large 3:4 **03-bedroom-linen** right +120px, vertical "Settle" (T3) col 11–12, scribble-b over photo 02 corner | lead 60 words + 1 para 70 words + link "See the houses" + ink arrow | T3 glyphs stagger, photos sp-reveal--up |
| 3 | The three houses (locations network, sticky-media) | the buildings | 3 rows of 890px min-height, alternating sides; photo 4:5 600×750 `position: sticky; top: 112px` within its row; text column 420px: house name H3, district, apartments count, walking times (3 lines), 50-word para, "View house" link. Photos **04-ashgrove-facade**, **05-canal-row-entrance**, **06-linden-court-courtyard** | 3×50 words | H2 "Houses" glyphs; text sp-reveal--up |
| 4 | Inside the houses — glide strip | atmosphere | full-bleed 1376 strip 570px tall, mixed widths 855/380/403/570 (3:2, 2:3, 2:3, 1:1), gap 16px `[tok e]`: **07-corridor-morning**, **08-shared-kitchen**, **09-laundry-room**, **10-roof-terrace** | caption row 1 line | `sp-marquee` (40s linear) |
| 5 | A day in residence | life rhythm | T2 mirrored: large 3:4 **11-kitchen-breakfast** left, small 4:3 **12-desk-evening** right +120px; under it a 4-column row of time-stamped short texts 07:40 / 12:30 / 18:10 / 22:00 (Fraunces numerals 2rem, 35 words each); scribble-c | 140 words | glyphs "A day", 4 texts sp-stagger + sp-reveal--up |
| 6 | Parallax band | breathing space / belonging to the street | full-bleed photo **13-street-dusk** 1376×640, torn top and bottom edges, `sp-parallax --sp-par:10%`; foreground: ground-coloured tab bottom-right (480 wide) with one resident quote (Priya, 26 words) — tab is not inside the moving layer | 26 words | parallax |
| 7 | Rates | money, consistent | warm band #ECEAE3; H2 "Rates" glyphs + sentence; full-width 1280 table, 6 rows (§9), columns: apartment / size / what's in / price (right, nowrap, tabular); note line "Bills, Wi-Fi, weekly linen included. Deposit one month." + link "Rates in full" | 6 rows + 30 words | none on table |
| 8 | How a stay is arranged | process | 2 columns: left sticky H2 "Arrive" glyphs + 40-word intro; right 5 numbered rows separated by 1px ink rules (number Fraunces 2.5rem pine, title, 30 words) — a list, not a 6-card grid | 5×30 words | rows sp-reveal--left |
| 9 | Voices | proof | 3 speech bubbles (T4) staggered left/right/left at 70% width, each 45 words + name, role, house, length of stay; no photos | 3×45 words | sp-stagger + sp-reveal--up |
| 10 | Enquire band + footer | conversion | ink #1F2420 band, white text: H2 "Tell us your dates." Fraunces 3rem, two white pill buttons "Enquire" "Call the front desk +00 20 7400 1814", hours; footer on ground: 3 house addresses, nav, legal | 40 words | none |
Home photo positions: 01–13 = **13 photos** (≥8), none repeated.

### Comparison with recent themes
| # | Kazoe Books App | Mado Air | Kaigi Centre | Shirota Laundry | **Sumika** |
|---|---|---|---|---|---|
| hero | halves gradient + pastel | crossfade | 68% photo + plum panel | oval photo over ghost wordmark | torn-edge full-bleed photo, pill in notch, torn tab H1 |
| 2 | lead | info bar | room strip | hairline grid | info bar + offset pair intro w/ vertical glyph word |
| 3 | 4 feature rows | Why | intro | service mosaic cards | sticky-photo house rows |
| 4 | card mosaic | How (SVG counters) | floorplan network | … | gliding strip |
| 5 | how-it-works 3 cols | parallax design band | three gatherings | | day in residence (mirrored pair + 4 time texts) |
| 6+ | stories, pricing, FAQ | night band, specs | parallax, booking | | torn parallax band → rates → process list → bubbles → ink band |
Why not similar: none of them uses a torn photo edge, a pill nav docked inside the hero, per-glyph tilted words, or sticky photos per location row; there is no split panel, card mosaic, floorplan, oval or counters here. Mado's parallax band is a straight-edged design band; ours is torn top and bottom with a quote tab.

---

## 7. Inner pages (≥8; locations-network core)
1. **The Houses** (`/houses`) — torn hero photo 14-house-stairwell; 3 house sections, each T2 pair (reuse 04/05/06 + 02/11/08 — no duplicates on this page), address, floors, apartment mix, walking times (tram 4 min, market 6 min, park 9 min — fixed per house §9), house manager name.
2. **Apartments & Rates** (`/rates`) — hero 03-bedroom-linen; full rate table (6 rows, same as home), "what's in every apartment" 2-col list (14 items), terms (deposit, notice 30 days, minimum 30 nights), floor-plan-free description. Table ≥782px full width, price col nowrap right.
3. **A Day in Residence** (`/a-day`) — hero 11-kitchen-breakfast; 4 time slots as T2 pairs (photos 12, 08, 09, 13), 500 words.
4. **How a Stay Is Arranged** (`/arrange`) — hero 07-corridor-morning; 5 steps as numbered rows with durations, documents needed, arrival walk-through (45 min), leaving checklist.
5. **For Companies** (`/companies`) — hero 15-meeting-lounge; relocation/project teams, invoicing monthly, block holds (3+ apartments), contact Ravi Menon; T2 pair 10+12.
6. **Neighbourhoods** (`/neighbourhoods`) — hero 13-street-dusk; per house: 5 nearby places (bakery, tram stop, pool, library, market — generic names), T2 pair 16-market-morning + 06.
7. **Residents' Stories** (`/stories`) — hero 16-market-morning; 3 stories (§9) 250 words each, bubble pull quotes (T4).
8. **People** (`/people`) — hero 08-shared-kitchen; 7 people as a 2-column hairline list (name, role, house, since, 25-word line), no portrait grid.
9. **FAQ** (`/faq`) — hero 09-laundry-room; 12 Q&A in T4 bubbles, alternating.
10. **Enquire** (`/enquire`) — hero 05-canal-row-entrance; form (name, email, company optional, house preference, arrival date, nights), front desk hours, 3 addresses; no reveal on form.
11. Privacy / Terms of stay (legal text, no motion).
Each inner page ≥200 words; numbers from §9 only.

## 8. Responsive
- 390px first screen: no vertical text, no absolutely positioned labels over text; torn tab and info bar in normal flow; pill = menu + Enquire only (≤366px wide).
- Rate tables: at ≥782px the table spans the full content width (1280 or 100%), `table-layout: fixed`, price column `white-space: nowrap; text-align: right; width: 9.5rem` never clipped (also at 800px). <782px every table becomes stacked cards (each row a block: apartment name, size + what's in, price on its own line right-aligned).
- Sticky house photos: sticky only ≥1024px; below, photo above text.
- Glyph words wrap whole (no breaking mid-word); vertical "Settle" only ≥1100px.
- No horizontal overflow at 390/1280 (marquee track inside `overflow: clip` wrapper).

## 9. Fixed numbers (site-wide, all languages)
- **Founded** 2014 by Inés Aldana. City: **Calder Harbour** (fictional). Front desk **08:00–20:00 daily**, night line **24h**. Phone +00 20 7400 1814. Minimum stay **30 nights**; notice 30 days; deposit one month's rent.
- **Houses (3, 54 apartments)**: Ashgrove House, 12 Ashgrove Lane, 1898 brick, 5 floors, **14** apartments, tram 4 / market 6 / park 9 min; Canal Row, 40 Canal Row, 1931 warehouse, 6 floors, **22** apartments, tram 3 / market 8 / park 12 min; Linden Court, 7 Linden Place, 1962 courtyard block, 4 floors, **18** apartments, tram 6 / market 5 / park 4 min.
- **Rates (6)**: Studio 28 m² — €2,150 / month; Desk studio 34 m² — €2,460; One-bedroom 42 m² — €2,780; Two-bedroom 64 m² — €3,640; Extra mid-week clean — €45 per visit; Parking (Canal Row only) — €160 / month. Included: bills, Wi-Fi, weekly linen & clean.
- **People (7)**: Inés Aldana (founder), Tomasz Wierzbicki (house manager, Ashgrove), Amara Okafor (house manager, Canal Row), Lena Hartmann (house manager, Linden Court), Ravi Menon (company stays), Sofia Brandt (housekeeping lead), Mateo Rossi (maintenance).
- **Stories (3)**: Priya N., structural engineer, Canal Row one-bedroom, 7 months; the Lund family (2 adults, 1 child), Linden Court two-bedroom, 5 months; Camille D., cellist for an orchestra season, Ashgrove desk studio, 4 months.
- **Process (5)**: 1 Enquire (reply within one working day) → 2 20-minute call & apartment choice → 3 Agreement + deposit → 4 Arrival: keys at the desk, 45-minute walk-through → 5 Monthly check-in, leaving check 2 days before departure.

## 10. Images (16, Grok, one at a time, read each; ≤300 KB, ≤2000px, no text/logos, diverse people, international neutral, no Japanese elements)
**STYLE** (same string for all): `film-grain documentary interior and street photography, shot on 35mm colour film (Portra 400 look), visible fine grain, high-key soft natural morning light, muted desaturated greens and warm linen whites, cool grey walls, honest lived-in details, candid people seen from the side or behind, no posed smiles, no text, no logos, no signage, international modern city, not Japanese`
| # | File | Subject / composition | Ratio | Used (home ★) |
|---|---|---|---|---|
| 01 | hero-sofa-desk | linen sofa, timber desk with notebook and mug, tall window with street trees, resident from the side setting down a tote, right third; quiet lower-left floor area | 16:9 (2000×1125) | ★ home hero |
| 02 | window-seat | deep window seat, folded blanket, book, plant, morning light | 4:3 | ★ home §2; Houses |
| 03 | bedroom-linen | made bed, linen throw, bedside lamp, half-open curtain | 3:4 | ★ home §2; Rates hero |
| 04 | ashgrove-facade | old brick five-storey house, tree, bicycle | 4:5 | ★ home §3; Houses |
| 05 | canal-row-entrance | converted warehouse entrance by a canal, resident with suitcase | 4:5 | ★ home §3; Houses, Enquire hero |
| 06 | linden-court-courtyard | 1960s courtyard with birch trees and benches | 4:5 | ★ home §3; Houses, Neighbourhoods |
| 07 | corridor-morning | quiet corridor, doors, light patch on floor | 3:2 | ★ home §4; Arrange hero |
| 08 | shared-kitchen | long shared kitchen table, two residents cooking | 2:3 | ★ home §4; A day, People hero |
| 09 | laundry-room | bright laundry room, folded towels, resident | 2:3 | ★ home §4; A day, FAQ hero |
| 10 | roof-terrace | roof terrace with planters, chairs, city roofs | 1:1 | ★ home §4; Companies |
| 11 | kitchen-breakfast | small apartment kitchen, coffee, bread, morning | 3:4 | ★ home §5; A day hero |
| 12 | desk-evening | desk by window at dusk, laptop closed, lamp on | 4:3 | ★ home §5; A day, Companies |
| 13 | street-dusk | tree-lined street at dusk, tram, people walking home | 2.15:1 (2000×930) | ★ home §6; A day, Neighbourhoods hero |
| 14 | house-stairwell | timber stairwell with skylight | 16:9 | Houses hero |
| 15 | meeting-lounge | small lounge with sofas, two colleagues talking | 16:9 | Companies hero |
| 16 | market-morning | neighbourhood market stall, fruit, resident with bag | 4:3 | Neighbourhoods, Stories hero |
Inner hero crops are 2.65:1 via `object-fit: cover`; check each page has no repeated photo.

## 11. Scroll effects (sp-scroll only; hero has no reveal)
| Effect | sp-* | Where | Reference source / trigger / timing / easing |
|---|---|---|---|
| Per-glyph tilted words entering | `sp-stagger` parent + `.sp-reveal.sp-reveal--up` per glyph (`--sp-dist:18px`) | all H2 keywords on home, H1 keyword on inner pages | musu-sauna GSAP ScrollTrigger, heading top 65%→25% viewport, ~0.5s per glyph, steps(2)/sine.out → ours 0.8s cubic-bezier(.23,1,.32,1), 0.12s step |
| Gliding photo strip | `sp-marquee` (`--sp-marquee-dur` 40s) | home §4 | musu-sauna gallery translateX ≈0.27× scroll + autoplay, linear → ours continuous linear; strip children never get sp-reveal |
| Parallax | `sp-parallax` | hero (01, `--sp-par:6%`), home §6 band (13, `--sp-par:10%`), hero pencil mark layer (`.sp-parallax__layer`, `--sp-par:12%`) | musu-sauna: photo slides under fixed pill; ink splashes rise 12px + fade, scrubbed |
Also: photos in §2/§5 `sp-reveal--up`; process rows `sp-reveal--left`. Nothing on tables, forms, legal text. Reduced motion → final state.

### Parallax (required)
- Hero: Cover/Group `.sp-parallax` style `--sp-par:6%` (mobile 4%), background = `01-hero-sofa-desk` as Cover background `.wp-block-cover__image-background`; foreground (torn tab H1, info bar) are siblings outside the moving layer. The torn clip-path is on the outer wrapper (not on the observed element — put it on a wrapper div around the Cover).
- Home §6 band: `.sp-parallax` `--sp-par:10%` (mobile 6%), background `13-street-dusk`, foreground quote tab outside the layer. Reference: hero photo slides up under fixed pill.
- Must pass `check-parallax.mjs` on desktop and mobile (≥6px difference; 0 under reduced motion).

## 12. Home acceptance checklist
- [ ] Torn top edge with 2 spikes and notch visible at 1440 and simplified on 390; photos radius 0, no shadows.
- [ ] Ink pill (600×54, r15, white buttons, status chip) sits in the notch at load and stays sticky at top 16px.
- [ ] Bottom-left torn tab with H1 Fraunces ≥4.25rem; info bar with 4 facts visible within 900px.
- [ ] Pencil marks overlap photo corners in hero, §2, §5.
- [ ] Per-glyph tilted words on every home H2 keyword; vertical "Settle" ≥1100px only.
- [ ] Offset pair in §2 and mirrored in §5 (size ratio ≥2.2, offset ≥120px).
- [ ] 3 sticky house rows with correct numbers; strip of 4 photos gliding (marquee).
- [ ] Torn-edge parallax band with quote tab; parallax passes check-parallax.
- [ ] Rate table 6 rows full width ≥782px, price nowrap right; stacked on mobile; prices = §9.
- [ ] 5-row process list, 3 bubbles, ink enquire band; ≥250 words, ≥3 narrative paragraphs; 13 distinct photos.
- [ ] First-screen saturated share ≤15%; fonts identical in editor/front; auto-gates pass.

## 13. Similarity target (about 80%) — similarity table
| Dimension | Reference | Sumika |
|---|---|---|
| Ground / ink / accent | #F3F3F2 / #211815 / #22A57F <1% | #F2F3F0 / #1F2420 / #54694A <2% |
| First-screen saturated | 7.7% | target 5–9%, cap 15% |
| Hero | 1376 wide, 32px inset, torn top, ~2.1:1 | 1376, 32px inset, torn top polygon, 1376×744 visible (~1.85:1) |
| Nav | dark pill 574×54 r15, buttons 90×34 r7, y140 → fixed | ink pill 600×54 r15, buttons 96×34 r7, notch → sticky 16px |
| Photo radius / shadow | 0 / none | 0 / none |
| Lead text | 22px / lh 2.2 / ls 0.08em / 720px | same |
| Body | 16px / lh 1.5–1.75 / ls 0.05–0.06em | 16px / 1.75 / 0.05em |
| Headings | per-glyph SVG 70–82px, ±4–6° | Fraunces per-glyph 80px, ±2–5° |
| Section padding | 216–231px | 216px |
| Photo pair | 4:3 ~340×230 + 3:4 ~400×520 | 4:3 360×270 + 3:4 420×560 |
| Rows | 890px staggered | 890px min, alternating, sticky photo |
| Gallery strip | 570px tall, gap 16, mixed widths | 570px, gap 16, 855/380/403/570 |
| Decoration | brush ink splashes 120–360px | pencil/grain SVG 160–320px, ink #2B2F2A |
| Q&A | 1px bubble, tail, green Q | 1px bubble r4, tail, pine Q |
| Motion | glyph wobble 0.5s steps; strip 0.27×; splashes fade/rise 12px; pill fixed | glyph stagger 0.8s; marquee 40s; parallax 6/10/12%; sticky pill |
| Imagery | documentary colour photo, deep greens | film-grain high-key interiors, muted greens |
