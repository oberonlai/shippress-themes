# Mikura Storage: design spec (stage 1, binding for implementation)

Slug `mikura-storage`, household self-storage operator, `type: landing`, page structure `landing-longform`, archetype `sticky-media`, first screen `top-bottom-halves`, hero `text-left-photo-right`.
Reference: Quraz, https://www.quraz.com/ (only source). Tokens: `brand/reference-tokens.md`, cited as `[tok a..g]`. Screens: `brand/ref/`. Photos and copy are our own; no reference asset, text or logo is copied.
**Imagery: photo** (reference is photographic; its one line-drawing card is under 15% of slots).
**Similarity target: 80%** in colour, image handling, motion, ornament and layout. See section 13.

## 0. Deviations from stage-a (this spec wins)
1. **Colours are the reference's own values**, not stage-a's plum mapping. `rules.palette_from_reference` overrides a plan row's hex and its quiet note, and this step requires reference colours unless the industry clearly does not fit. Blue, orange and white fit a storage operator, and no shipped theme uses `#0066BB`. Recent mains are black, slate and grey-violet, so the blue is also the distinct choice. Do not restore `#6E6168`.
2. **First-screen limit** = min(30, reference 27.7) = **27.7%**, not stage-a's 15%; target ≤ 20%.
3. **Scroll set is exactly three** sp-* effects. `sp-count` is dropped (one page may carry at most 3 effects). The dock is theme CSS, not an sp-* effect.
4. **The hero strip is 360 px at 1440x900**, the low end of stage-a's range, so that the fact bar stays inside the first screen.
5. **Header** gains the landing rule's one CTA next to the phone pill.
6. **Prices come before the parallax band**, the reverse of stage-a, because stage-a's order put a sticky block third and a parallax band fifth, exactly as Noboru Lifts does.

## 1. Fixed facts (home, inner pages, all five languages)
Currency USD everywhere, no conversion. Operator and place are fictional.

| Item | Value |
|---|---|
| Name | Mikura Storage |
| Founded | 2014 |
| Address | 48 Alder Row, Lindenport |
| Building | one dedicated building, 6 floors, 412 units, 5 sizes |
| Phone | 555-0142 |
| Email | hello@mikurastorage.example |
| Desk hours | 09:00-19:00, 7 days |
| Building access | 06:00-23:00, 7 days, by key card |
| Visit | 20 minutes, free, no obligation, with an attendant |
| Same-day move-in | booked before 15:00, with photo ID and the first month paid |
| Term | 1 month minimum, 30 days' notice |
| Fees | $0 admin fee, $0 key card, $0 hand-truck loan, no deposit |
| Room conditions | 18-24 C, kept below 60% relative humidity |

**Prices (6 items, monthly):**

| Size name | Floor | Fits | Price |
|---|---|---|---|
| Shelf | 0.8 m² (9 sq ft) | 10 boxes, a suitcase | $38 |
| Closet | 1.5 m² (16 sq ft) | a wardrobe's worth, a folded bike | $62 |
| Box Room | 3 m² (32 sq ft) | a studio flat's contents | $98 |
| Spare Room | 5 m² (54 sq ft) | a one-bedroom flat | $148 |
| Garage Bay | 8 m² (86 sq ft) | a two-bedroom flat | $215 |
| Contents cover (optional) | all sizes, up to $5,000 | fire, water, theft | $6 |

**People (7):** Ines Varga, founder and building manager · Daniel Achebe, head attendant, mornings · Mei Lin Ho, size adviser · Rafael Souza, loading bay and hand trucks · Priya Nair, contracts and accounts · Jonas Weber, building care, climate and fire checks · Amara Diallo, weekend desk. Listed in text rows on About; no people grid.

**Household stories (3), plus 1 note. These are the 4 posts:**
1. "Between two leases": Owen and Lucia Marsh, Box Room, 5 months. Image P16.
2. "The books came back": Hana Yilmaz, Closet, 14 months. Image P17.
3. "Room for the cot": the Okoye family, Shelf, 8 months. Image P18.
4. "Fourth floor reopens": note on repainted corridors. Image P14 on the News page only.

Categories: `stories`, `notes`. Tags: `moving`, `small-flats`, `sizes`, `building`.

**Visit flow (4 steps):** 1 Book a slot · 2 Walk the corridor (20 minutes) · 3 Choose and sign (photo ID, first month) · 4 Move in (key card, hand truck).

Claims: no awards, no rankings, no safety guarantees, no real brands. "Staffed" means the desk hours above.

## 2. Signature techniques (all three obvious at a glance)
Source for all: Quraz, https://www.quraz.com/.

### T1. Numbered tile cards
- **Reference:** `ref/quraz-s2.png`. 3-column grid. Photo on top with no gap, pale blue panel below, 44 px solid blue numeral tile left of a two-line bold title, short text under it.
- **Used on home:** block 2, cards 1-5.
- **Geometry (1440) [tok c, d, e, f]:** inner width 1208, 3 columns of 376, gap 40 both ways. Card radius 8, `overflow: clip`, ground `#E5EEF8`, no border, no shadow. Photo 376×212 (16:9, `aspect-ratio: 16/9`, `object-fit: cover`). Panel padding 24. Tile 44×44, radius 6, `#0066BB`, white numeral 1.5rem 700, Plus Jakarta Sans. Title sits right of the tile, gap 8, 1.125rem 700, lh 1.5, `#212529`, forced to two lines in en. Text under the pair, 16 px gap, 1rem, lh 1.5.
- **Do not dilute:** the tile stays solid main blue and square-cornered at radius 6, never outline or tinted. The photo touches the panel. The panel stays tinted, never white. Three columns at ≥ 960.

### T2. Round-disc panel
- **Reference:** `ref/quraz-s2.png`, sixth cell. Warm panel, centred title with a 2 px orange rule, 2×3 solid orange discs with white line icons and tiny bold captions.
- **Used on home:** block 2, sixth grid cell, the same size as a T1 card.
- **Geometry [tok a, e, f]:** ground `#FDEFE3`, radius 8, padding 32 24. Title "Every unit includes", 1.125rem 700, centred, `border-bottom: 2px solid #E86F00`, inline width. Discs Ø84, `#E86F00`, white 40 px inline SVG icon (stroke 2, no text in SVG). Caption .75rem 700, centred, 8 px below the disc. Grid 2×3, row gap 20.
- **Six discs:** $0 admin fee · Climate-held rooms · Fire-rated walls · Key-card doors · 24 h video · Free loading bay. The first disc shows "$0" as live text at 1.75rem 700 white, not an icon.
- **Do not dilute:** discs stay solid orange and Ø84 (Ø72 only on phones). No pale tint or outline discs.

### T3. Slide-in dock card
- **Reference:** `ref/scroll-quraz-dock-before.png`, `-after.png`. No card at the top of the page. Past the hero, a white card slides in from the right edge, flush right, with a two-line caption and two stacked outline buttons.
- **Used on:** home and every page except Thanks. It is the one repeated CTA.
- **Geometry [tok d, g]:** `position: fixed; right: 0; bottom: 40px`, width 223 px, white, radius 4 on all corners as measured, `box-shadow: 0 0 8px rgba(0,0,0,.25)`, padding 16 8 8, z-index 50. Caption .8125rem, lh 1.5, centred: "Sizes, prices and visits, / ask us here". Two buttons stacked, 8 px gap, each 100% wide, 50 px tall, radius 4, 1 px solid `#212529`, white fill, .875rem 700: phone icon + "555-0142" (`tel:`), and "Book a visit" (`/#reserve`, or `#reserve` on home).
- **Motion:** `@supports (animation-timeline: scroll())`, inside `@media (prefers-reduced-motion: no-preference)`, under `html:not(.sp-no-motion)`: keyframes `transform: translate3d(110%,0,0)` to `none`, `animation-timeline: scroll(root)`, `animation-range: 70svh 90svh`, `animation-fill-mode: both`, timing function `ease` (reference .5 s default ease, toggled at the hero end). No scroll listener.
- **Fallback (reduced motion, `?sp-static`, no support, no JS):** ≥ 782 stays fixed and visible. Below 782 it is a normal in-flow bar directly above the footer, so nothing covers the first screen and the gate `heroOverlap390` stays clean.
- **Phones (< 782) with motion:** full-width fixed bar at `bottom: 0`, height 64, two buttons side by side, translateY(110%) to none on the same range, caption hidden, `body { padding-bottom: 72px }`.
- **Do not dilute:** no pill shape, no filled main colour, no close button, not a sticky header CTA. The card must enter from off-screen.
- Must not push the document wider: the off-screen translate lives on a fixed element, and `html, body { overflow-x: clip }`.

### Continuation to inner pages
| Page | T1 cards | T2 disc panel | T3 dock | Hero device |
|---|---|---|---|---|
| Sizes | one card per size (5), with photo | sixth cell | yes | 3-fact bar under head |
| Visit | one card per stage of the corridor (3) | "Bring with you" discs | yes | 3-fact bar under head |
| About | three cards: Founded, Building, Crew | "How we keep the building" discs | yes | — |
| News | every post in a T1 card, tile = running number | — | yes | — |
| Contact | — | "At the desk" discs beside the FAQ | yes | — |
| Waitlist, Privacy, Terms, single post | — | — | yes | — |
| Thanks | — | — | no | — |

## 3. Key visual concept

### (1) Reference first screen
- **Draws:** a deep-blue header band over a full-width strip of 540 px square photographs that touch each other: a tall storage building, a staff member with a clipboard serving a customer at a front desk, a customer tapping a key card on a door reader. Two round seals sit top right. A solid blue three-fact bar straddles the strip's lower edge, centred.
- **Story:** a staffed, secure building where someone shows you the right size, and you can start today.
- **Motion:** the strip drifts left without stopping at about 54 px/s, with a round pause button bottom right. After the first screen the dock slides in from the right.

### (2) Our translation
Same story, same image type, same motion: a city household is met by an attendant holding a labelled box while the customer looks into an open unit along a clean corridor. Top half: text left, main documentary photograph right. Bottom half: a strip of touching square photographs that walks the same visit in order (corridor, desk, key card, boxes on a hand truck, building front, unit shelves), drifting left at 54 px/s, with the blue three-fact bar straddling its lower edge. The strip is the reference's concept in our own photographs. It is not to be swapped for a static row.

### (3) KV checklist (all built in the first screen, all visible at 1440×900)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Blue header band, logo, 3 nav items, white phone pill | Solid `#0066BB` bar 84 px: wordmark, 4 anchors, outline "Book a visit", white phone pill | Top | Static | none |
| 2 | Touching 540 px square photos, bleeding | 6 touching 360 px squares, gap 0, edge to edge | y 492-852 | `sp-marquee` drift left, 54 px/s | P2-P7 |
| 3 | Title and lead over the strip | H1, lead and CTA on white at left; main photo at right, 496×372, 4:3, radius 8 | y 84-492 | None (no reveal) | P1 |
| 4 | Blue three-fact bar straddling the strip | 590×78 `#0066BB`, radius 8, three cells: "Same-day move-in", "Staffed building", "Free hand-truck loan" | Centred on the strip's lower edge, y 813-891 | Static | none |
| 5 | Two round seals top right | One Ø120 white disc with hairline, ring text "Visits 7 days" (no award claim) | Top right of the strip, 24 px inset | Ring turns once in 60 s; off for reduced motion | none |
| 6 | Round pause button bottom right of the slider | Ø28 white round toggle with pause/play icon | Strip bottom right, 12 px inset | Click toggles `animation-play-state` | none |

## 4. Colour [tok a]
| Role | Hex | Source | Use | Share of page |
|---|---|---|---|---|
| Ground | `#FFFFFF` | reference ground | page | about 60% |
| Main | `#0066BB` | reference main | header, fact bar, H2, tiles, reserve panel, CTA | about 10-15% |
| Tint band | `#E5F0F8` | reference tint | visit band, stories band, footer | about 20% |
| Card tint | `#E5EEF8` | reference card | T1 panels | about 5% |
| Warm panel | `#FDEFE3` | reference warm panel | T2 only | under 3% |
| Accent | `#E86F00` | reference accent | discs, step badges, 2 px rule under T2 title | under 2% |
| Text | `#212529` | reference text | body | n/a |
| Hairline | `#DDDDDD` | reference FAQ rows | table and FAQ rows | n/a |

- Not used: reference green `#60BB33`, red discount pill. One CTA colour only.
- Contrast: white on main 5.8:1. White on accent about 3:1, so white on orange is only for icons and text ≥ 1.1875rem 700. Main on tint ≥ 5:1.
- **First screen:** limit 27.7% (`python3 scripts/check-first-screen.py screenshots/home-desktop.webp --max 27.7`); reference value 27.7%; target ≤ 20%. Header plus fact bar plus CTA are about 13.6% of the frame, so hero and strip photographs must stay high-key with mostly white, pale grey and pale blue areas. The check counts photo pixels too. If it fails, regrade or regenerate the warmest strip photo. Do not shrink the blue bars.

## 5. Type (font_direction **sans**) [tok b]
- Latin: display **Plus Jakarta Sans** (600, 700), body **DM Sans** (400, 500, 700). No serif anywhere.
- CJK: **Noto Sans TC** and **Noto Sans JP** (black-style sans) only, no Mincho. Zh and ja subset files are bundled for headings.
- Display stack en/fr/de: `"Plus Jakarta Sans", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`. Body stack: `"DM Sans", system-ui, sans-serif`.
- `:root:lang(zh*)` display: `"Plus Jakarta Sans", "Noto Sans TC", "PingFang TC", "Microsoft JhengHei", sans-serif`; body: `"DM Sans", "PingFang TC", "Microsoft JhengHei", sans-serif` (the repo gate forbids the bundled zh family and any Japanese font in the zh body stack).
- `:root:lang(ja)` display: `"Plus Jakarta Sans", "Noto Sans JP", "Hiragino Sans", sans-serif`; body: `"DM Sans", "Hiragino Sans", "Yu Gothic", sans-serif`.
- Load through theme.json `fontFamilies` + `fontFace`, not front-end only, so the editor and front end match. Copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and require it, because the `:lang()` rules need it. List every font file in theme-meta `fonts[].files` with license, and every family in readme.txt.

| Use | Size | Weight | Line-height / tracking | Source |
|---|---|---|---|---|
| Hero H1 | `clamp(2.5rem, 5.2vw, 4.5rem)` (72 px at 1440; theme max) | 700 | 1.1 / -.01em | ours, tok b notes the bigger title |
| Corridor band word | `clamp(2.5rem, 5vw, 4.25rem)` | 700 | 1.15 | ours, tok b |
| Inner H1 | `clamp(2.25rem, 3.6vw, 3rem)` | 700 | 1.3 | tok b scale |
| H2 section | 2.5rem (40 px), mobile 1.75rem | 700 | 1.5 / .02em en, .06em CJK | tok b, 40/700/lh 60 |
| H3 band card | 1.25rem | 700 | 1.5 | tok b guide 20/700 |
| Card title | 1.125rem | 700 | 1.5 | tok b 16/700, +2 px for Latin |
| Body | 1rem | 400 | 1.5 / .02em en, .05em CJK | tok b 16/400/24 |
| Lead | 1.125rem | 400 | 1.6 | scale |
| Nav | .875rem | 700 | 1 / .05em | tok b 14/700 |
| Button | .875rem | 700 | 1 | tok b |
| Phone | 1.25rem | 700 | 1 | tok b 20/700 |
| Caption | .75rem | 700 | 1.4 | tok f |

Theme.json sizes: small .875, medium 1, large 1.25, x-large 2.5, xx-large 4.5 (rem). The largest satisfies ≥ 4.25rem.
Zh and ja: headings about .75× the English size, body lh 1.85. fr and de: `hyphens: auto`.

## 6. Spacing, radius, shadow [tok c, d]
- Container 1248, inner 1208, side margin 96 at 1440. Under 1440 use `min(1208px, 100% - 48px)`.
- Section padding 72 top, 72 bottom on white; 56/56 on tint bands [tok c].
- Radius 8 on cards, photos, buttons, fact bar. 9999 on header pills. 6 on tiles. 4 on dock and step badges. 8 with `0 1px 4px rgba(0,0,0,.12)` on story cards.
- Section head: centred H2 in main blue, under it a 2 px main rule, 480 px wide (mobile 80%) [tok f].
- Icons: inline SVG, stroke 2.

## 7. Home page (en ≥ 250 words required, target about 520; ≥ 3 narrative paragraphs: blocks 2, 4, 5, 7)

### Header (one top menu only)
`#0066BB`, 84 px, `position: sticky; top: 0`. Left: wordmark "Mikura Storage" in white, Plus Jakarta Sans 1.375rem 700, no icon mark copied from the reference. Then anchors in white nav type: Sizes, Visit, Prices, FAQ. Right: outline pill "Book a visit" (1 px white, radius 9999, 44 px) and white pill with phone icon and "555-0142" (`#0066BB`, 1.25rem 700, radius 9999, 44 px). Below 960: wordmark and burger; overlay holds anchors, CTA and phone. Inner pages use the same bar; anchors point to `/#sizes` etc.

### First screen (1440×900)
- Forbidden: table, form, search box, sp-reveal, vertical text, huge centred headline.
- **Top half, y 84-492 on white:** container 1208, grid `1fr 496px`, gap 64, `align-items: center`.
  - Left: eyebrow "Household storage · Lindenport" .875rem 700 main. H1 in main blue: "Keep it close," / "out of the way." Lead: "A staffed building for the things a city flat can't hold. Walk the corridor with an attendant, choose a size, and move in today." CTA `#0066BB` solid, white text, radius 8, 52 px tall, "Book a visit" → `#reserve`.
  - Right: P1 496×372, radius 8.
- **Bottom half, y 492-852:** `.mk-strip` full-bleed, `sp-marquee`, height `clamp(260px, 40svh, 480px)`; each square `aspect-ratio: 1`, gap 0. Inner group of P2-P7 duplicated once with `aria-hidden="true"` and empty `alt`.
  - Theme CSS: `animation-duration: 40s` (6 × 360 = 2160 px at 54 px/s); 29 s on phones (6 × 260). `.mk-strip:has(.is-paused) > *` or the paused class on the strip sets `animation-play-state: paused`.
  - In `sp-no-motion` the base CSS has no flex, so theme CSS must set `.mk-strip { display: flex; overflow: clip }` and hide the clone; the frame then shows a still row of squares.
  - Pause toggle: a real `<button aria-pressed>` and a small `assets/mk-strip.js` of a few lines. No scroll listener. Hide the button in `sp-no-motion`.
- **Fact bar:** 590×78, centred, `margin-top: -39px`, `position: relative; z-index: 2`, three cells split by 1 px `rgba(255,255,255,.4)`: 28 px white icon (clock, building, hand truck) + two-line white label .875rem 700. Reference's orange "?" dots are not used.
- **Ring tag:** Ø120 at strip top right, inline SVG with `textPath`, text stays in the block markup for translation. Hidden below 782.

### Block order
| # | Pattern | Purpose | Layout and images | Copy |
|---|---|---|---|---|
| 1 | `front-hero` | Promise, one CTA | As above. P1, P2-P7 | ~35 words |
| 2 | `front-features` | What a visit shows | White. Section head "Five things a visit shows", narrative paragraph centred 720 px wide, then **T1** ×5 (P8-P12) + **T2** in the sixth cell | 40-word paragraph + 5 × 30 words |
| 3 | `front-sizes` `#sizes` | Which size | **Sticky-media.** White. Section head centred, then grid 5/12 + 7/12, gap 64. Left: P13 4:5, radius 8, `position: sticky; top: 108px`. Right: 5 ruled rows, each min-height 160: size name 1.25rem 700 main, floor area, one sentence of what fits, and the price right-aligned as "$38 / month". 1 px `#DDD` rules. No `overflow: hidden` on parents | 5 × 25 words |
| 4 | `front-visit` `#visit` | How the first visit runs | `#E5F0F8` band. Section head "How a first visit runs", paragraph, then 4 equal columns on one baseline: 32 px `#E86F00` radius-4 badge with white numeral 1.1875rem 700 [tok f], 2 px dotted orange line running horizontally from badge to next column, H3, 2 lines. No vertical timeline. No photos | 60-word paragraph + 4 × 20 words |
| 5 | `front-prices` `#prices` | The numbers | White. Section head "Plain monthly prices", full-width table (section 9), then a line "$0 admin fee · $0 key card · no deposit · 1 month minimum · 30 days' notice". No images, no reveal | Table + 15 words |
| 6 | `front-corridor` | Mood, trust | **`sp-parallax`** full-bleed Cover, 640 px, P14; overlay `rgba(33,37,41,.30)`. Foreground left aligned in the container, bottom 72: band word in white "Walk it / before you sign." + 40-word white paragraph, max 560 px | 45 words |
| 7 | `front-stories` | Who uses it | `#E5F0F8` band. Section head "Three households", 3 story rows as white cards radius 8, soft shadow [tok d], 1 column of 3 rows: square thumb 160×160 radius 8 left (P16, P17, P18) [tok e], name line, 45-word excerpt, link to the post | 3 × 50 words |
| 8 | `front-faq` `#faq` | Objections | White. Section head "Before you book", 720 px column, 6 native `<details>` rows, 1 px `#DDD`, chevron, `height .3s ease-in-out` via `interpolate-size` where supported [tok g] | 6 × 30 words |
| 9 | `front-reserve` `#reserve` | The single way to reserve | Panel 1208 wide, radius 8, `#0066BB`, centred on white, min-height 520. Left 7/12: white H2 "Book a visit", 30 words, static form (name, email, day, size select) with white-fill submit "Book a visit". Right 5/12: P15 fills the panel's right side to its corners. No reveal on the form. Form mechanism: reuse Fumi Launch's static form pattern, landing on `/thanks/`. No external service | 35 words |
| 10 | Footer | Links, facts | `#E5F0F8`. Wordmark, address, phone, desk and access hours, links: About, Sizes, Visit, News, Waitlist, Contact, Privacy, Terms | ~30 words |

**Image positions on home: 18** (P1, P2-P7, P8-P12, P13, P14, P15, P16-P18). None repeat. The aria-hidden clone is not a second use.

### Comparison with recent home pages
| # | Noboru Lifts | Hashira Partners | Ushio Line | Suji Clinic | **Mikura Storage** |
|---|---|---|---|---|---|
| 1 | hero: spaced drawings row + notice card | hero | 3-panel frame | twin photo hero | **text + photo above, touching square strip + straddling fact bar below** |
| 2 | intro 3 cols | vision + rule | split about | problem + rule | **numbered photo cards + disc panel** |
| 3 | sticky visit cards band | marquee phrase | piers sine route | injuries 3×2 | **sticky photo + size rows** |
| 4 | buildings checkerboard | case panels | sailing band | method ×3 bands | **four horizontal steps on tint** |
| 5 | parallax quiet band | building cards | water parallax | parallax proof | **price table** |
| 6 | sheet 2-col | viewing rows | crew split | room wedge | **parallax corridor** |
| 7 | fees table | request on black | fares | fee table | **story rows** |
| 8 | crew list | footer | story | close band | **FAQ** |
| 9 | stories band | — | access | footer | **blue reserve panel** |
| 10 | book card | — | notices | — | footer + dock |

**Why not alike:** the shared parts are generic slots (parallax band, price table), and the prices-then-parallax order breaks the sticky, parallax, table run of Noboru. The signature shapes are new here: solid numeral tiles on tinted photo cards, solid Ø84 orange discs, the right-edge dock, and the blue fact bar. Noboru's drifting row is low-key drawings with wide gaps on paper. Ours is touching full-colour square photographs under a split hero with a straddling bar. Kesho's strip is tall 2:3 portraits as the whole hero. No checkerboard, black block, wedge or sine route.

## 8. Pages (home + 9 demo pages + post, category and tag views; all reachable from the footer)
Each page: blue-bar header, inner H1 in main centred with the 2 px rule, body, dock (except Thanks).

| # | Page | Code | Points |
|---|---|---|---|
| 1 | Home `/` | home | Section 7 |
| 2 | Sizes `/sizes/` | extra | Three-fact bar under the head. T1 ×5, one per size, in size order with P10, P9, P5, P13, P7; T2 sixth cell; price table repeated exactly; how to measure in 3 paragraphs (no step grid) |
| 3 | Visit `/visit/` | extra | Three-fact bar under the head. Story of the 20 minutes in 3 narrative paragraphs; T1 ×3 (Desk P3, Corridor P2, Bay P11); T2 "Bring with you" (photo ID, phone, measurements, list, car plate, card); same four horizontal steps; P15 |
| 4 | About `/about/` | about | Founded 2014; why one building; T1 ×3 (Founded P15, Building P6, Crew P9); 7 people as text rows (name, role, one line); T2 "How we keep the building"; a "typical day" paragraph |
| 5 | News `/news/` | news | role `posts`. Each post in a T1 card; tile = running number; 3 columns |
| 6 | Single post | article | 720 px column, category, title, date, featured image radius 8, 300+ words |
| 7 | Category and tag | category, tag | Same T1 cards. `templates/tag.html` from `archive.html`, with the word changed to TAG |
| 8 | Waitlist `/newsletter/` | newsletter | When a size is full: one email field and size select, static form to `/thanks/`; one P4 photo |
| 9 | Contact `/contact/` | contact | Address, phone, hours, map-free directions text; 6-row FAQ; T2 "At the desk"; P3 |
| 10 | Privacy `/privacy/` | extra | Text, 720 px |
| 11 | Terms `/terms/` | extra | Text with term, notice and cover numbers from section 1 |
| 12 | Thanks `/thanks/` | extra | One line, what happens next, link home. No dock |

`theme-meta.json` `pages` lists home, about, news, article, category, tag, newsletter, contact plus sizes, visit, privacy, terms, thanks. `screens.*` exists for all. Exactly one role `posts` page. All nav subtitles and labels live in markup; CSS `content:` carries no words.

## 9. Responsive rules
- **390 px first screen:** one column order: eyebrow, H1, lead, CTA, P1 (4:3, full width minus 48), strip, fact bar. No vertical text. No absolute labels over text or photos. Ring tag hidden.
- **Fact bar on phones:** in flow, width minus 32, three stacked rows, each 52 px, with horizontal dividers, `margin-top: -24px` over the strip's lower edge.
- **Strip on phones:** squares 260 px; pause button stays and carries no text.
- **Tables (≥ 782):** `width: 100%`, full 1208 column, `table-layout: auto`. Price column `white-space: nowrap; text-align: right; min-width: 140px`, never clipped at 800 or 1280.
- **Tables (< 782):** each row a stacked block; thead visually hidden; each cell carries a `<span class="mk-cell-label">` in markup (hidden ≥ 782), never CSS `content:`.
- **T1 and T2:** 3 columns ≥ 960, 2 columns 600-959, 1 under 600. Discs Ø72 on phones.
- **Sticky:** off under 960; P13 sits above the rows at 4:3.
- **Steps:** 4 columns ≥ 960, 2×2 at 600-959 with no dotted line wrap, 1 column under 600 with the dotted line removed.
- **Reserve panel:** photo on top, 16:9; form below.
- `overflow: clip`, never `hidden`, on parents of sticky.

## 10. Images (18, Grok, one at a time, read each one)
**STYLE (exact string, every prompt):**
`documentary commercial photograph, 35mm lens, bright high-key natural light, white walls and pale grey floors, clean modern international city storage building, soft blue and white palette with one small warm orange accent, diverse adults, calm candid moment, attendants in plain pale blue shirts, plain white cartons with blank white labels, no text, no letters, no numbers, no logos, no signage lettering, no brand marks, no Japanese elements`

Square images at 1200 px, others ≤ 2000 px, each ≤ 300 KB, 0 cut-outs. Doors carry no numbers. `*` = used on home (all 18).

| ID | Subject and composition | Ratio | Used on |
|---|---|---|---|
| P1* | Attendant holding a labelled carton, customer looking into an open unit, long clean corridor receding at right | 4:3 | Home hero |
| P2* | Long corridor of closed white unit doors, vanishing point centred | 1:1 | Home strip; Visit T1 |
| P3* | Attendant at a white desk with a clipboard, serving a customer, seen over the shoulder | 1:1 | Home strip; Visit T1; Contact |
| P4* | Hand tapping a blank key card on a door reader, close | 1:1 | Home strip; Waitlist |
| P5* | Stack of white cartons on a hand truck in a bright corridor | 1:1 | Home strip; Sizes (Box Room) |
| P6* | Building front, six storeys, plain pale facade, blue sky, no signs | 1:1 | Home strip; About T1 |
| P7* | Open unit with wire shelves, cartons, a bike, a suitcase | 1:1 | Home strip; Sizes (Garage Bay) |
| P8* | Bright lift lobby with a person pushing a trolley toward the doors | 16:9 | Home T1-1 |
| P9* | Attendant pointing into a corridor, walking beside a customer | 16:9 | Home T1-2; About T1; Sizes (Closet) |
| P10* | Three small units side by side, doors open, different fill | 16:9 | Home T1-3; Sizes (Shelf) |
| P11* | Couple unloading a hatchback in a covered loading bay with a hand truck | 16:9 | Home T1-4; Visit T1 |
| P12* | Attendant reading a plain wall thermometer gauge with no digits in a bright corridor | 16:9 | Home T1-5 |
| P13* | Attendant and customer holding a tape measure at an open unit door, tall framing | 4:5 | Home sizes; Sizes (Spare Room) |
| P14* | Wide corridor at low angle, one person far off pushing a hand truck, strong perspective, soft light | 21:9, 2000 px | Home band; News note 4 |
| P15* | Two attendants opening the desk in the morning, wide | 4:3 | Home reserve; Visit; About T1 |
| P16* | Couple sitting on cartons in an emptied flat, daylight | 1:1 | Home story 1; post 1 |
| P17* | Person shelving books from a carton at home | 1:1 | Home story 2; post 2 |
| P18* | Parents folding a cot in a small bright room | 1:1 | Home story 3; post 3 |

Hero strip (P2-P7) carries most of the first-screen colour test. Keep warm accents small.

## 11. Scroll techniques (three, plus theme dock)
| Effect | Class | Where | Reference trigger / time / easing | Ours |
|---|---|---|---|---|
| Strip drift | `sp-marquee` | Hero strip only | Swiper autoplay from load, continuous, linear, 54 px/s | Linear, 40 s for 2160 px, 54 px/s |
| Card entry | `sp-reveal sp-reveal--up` in `sp-stagger` | Block 2 six cells; block 4 columns; block 7 cards | None on the reference; added as house motion | 24 px, .8 s, `cubic-bezier(.23,1,.32,1)`, .12 s steps |
| Parallax | `sp-parallax` | Block 6 | None on the reference | Section below |
| Dock (not sp-*) | Theme CSS | All pages but Thanks | Class toggled past the hero; transform .5 s from `translate(110%,0)`, default ease | `animation-timeline: scroll(root)`, section 2 T3 |

Not on: hero text and photo, prices, forms, FAQ, legal text, marquee children. Hover transitions on revealed cards carry their own `transition-delay: 0s`.

### Parallax (required)
- **Block:** `front-corridor`, full-bleed Cover with class `sp-parallax`.
- **Layer:** P14 as Cover background.
- **Foreground:** band word and paragraph, in the Cover's inner container, not in the moving layer.
- **Speed:** `--sp-par: 9%` desktop, `6%` under 782 (kept on phones).
- **Reference motion:** the reference has none. It answers the strip's steady sideways drift with a slow vertical one, so the corridor reads as being walked.
- Verified by `check-parallax.mjs`: delta ≥ 6 px at desktop and phone, 0 in reduced motion. Reduced motion, `?sp-static` and the editor stay still.

## 12. Home acceptance checklist
1. Header is solid `#0066BB`, 84 px, with 4 anchors, outline CTA and white phone pill.
2. Top half shows H1 at left and P1 at right on white; bottom half shows touching squares edge to edge.
3. The strip drifts left at about 54 px/s; pause button works; clone is aria-hidden.
4. Fact bar is 590×78, centred, straddles the strip edge by about 39 px, and is fully inside 1440×900.
5. Ring tag is at the strip's top right; no award claim anywhere.
6. Block 2 has five T1 cards with solid 44 px tiles and a sixth T2 cell with six Ø84 orange discs.
7. The dock is absent at the top of the page, slides in from the right past the hero, and stays radius 4 with two stacked outline buttons.
8. Sizes block: P13 stays pinned while the rows scroll at ≥ 960.
9. Four horizontal steps, dotted orange link, no vertical timeline.
10. Parallax passes `check-parallax.mjs` at both sizes.
11. Price table is full width at ≥ 782, price column nowrap and right aligned, stacked on phones. Numbers match section 1.
12. 18 image positions, no repeats, no text or logos in any image.
13. First-screen saturation ≤ 27.7%, both numbers in gate.md, reference.md and the PR.
14. No table, form, search box or reveal in the first screen; 390 px hero has no overlap.
15. "Book a visit" is the same label everywhere, and every instance leads to `#reserve`.
16. en ≥ 250 words, ≥ 3 narrative paragraphs. Largest theme.json size ≥ 4.25rem.
17. Fonts match in editor and front end (`check-editor-fonts.mjs`).

## 13. Similarity table
| Dimension | Reference | This theme |
|---|---|---|
| Main / tint / card / warm / accent | `#0066BB` / `#E5F0F8` / `#E5EEF8` / `#FDEFE3` / `#E86F00` | Same |
| Text / ground | `#212529` / `#FFFFFF` | Same |
| Colour share | about 30 / 10 / 60 | Same, 15 / 25 / 60 by area with bands |
| First-screen saturated | 27.7% | ≤ 27.7%, target ≤ 20% |
| Body | 16 / 400 / lh 1.5 / .8 px | 16 / 400 / 1.5 / .02em en, .05em CJK |
| H2 | 40 / 700 / lh 60 / centred blue | Same, tracking .02em in Latin |
| Header | 96 px | 84 px, to keep the fact bar in frame |
| Container / grid | 1248 / 3 × 376, gap 40 | Same |
| Section padding | 56 tint, 72 services | Same |
| Radius | 8 cards, 9999 pills, 4 dock | Same, 6 on tiles as reference |
| Hero strip | 540 square, gap 0 | 360 square, gap 0 |
| Card photo | 376×212, 16:9 | Same |
| News thumb | 160 square, radius 8 | Same on story rows |
| Numeral tile | 44, radius 6, solid main | Same |
| Discs | Ø84 solid orange, 12 px captions | Same |
| Fact bar | 590×78, overlap about 40 | 590×78, overlap 39 |
| Dock | 223+, radius 4, shadow `0 0 8px rgba(0,0,0,.25)`, bottom 40 | Same |
| Strip motion | 54 px/s, linear | Same |
| Dock motion | .5 s ease, from 110% | Scroll-linked over 20svh, ease, from 110% |
| FAQ motion | .3 s ease-in-out | Same |
| Scroll reveal, parallax | None | Added: reveal up and parallax, required by house rules |
| Type family | Noto Sans JP + Outfit | Plus Jakarta Sans + DM Sans per plan row, Noto Sans TC/JP for CJK |
| H1 | 40 px maximum | 72 px, required by the 4.25rem rule |
| Seals | Two award seals, Ø134 | One non-award ring, Ø120 |

Copy and photographs are ours. No reference text, image or logo appears in the theme.
