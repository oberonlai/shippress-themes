# Kuruma Tabi — design spec (stage 1, design director)

Theme: Kuruma Tabi (`kuruma-tabi`), plan row b37-2. Type: landing (one long conversion home + anchor menu + one repeated CTA "Send an itinerary").
Industry: private chauffeured sightseeing tours for overseas visitors; one family per vehicle, driver-guide, day planned around the guests.
Reference: https://picchio.co.jp/ (only source; all numbers from `brand/reference-tokens.md`, screenshots in `brand/ref/`).
IMAGERY: **photo** (documentary, high-key). Font direction: **sans**. Similarity target: 80% (colour relation, image treatment, motion, decoration, layout) — own photos, own copy, own drawings, no Picchio asset/text/logo.

---

## 0. Hero composition (mandatory, first line verbatim)

hero_composition: split-photo-right · hero_text: beside-photo · hero_footer: timeline · hero_fingerprint: split-photo-right/beside-photo/timeline

- **split-photo-right**: the hero photo occupies the RIGHT half only: x 720–1440 at 1440 wide (50%), y 90 (below header) to 820, i.e. 720x730, `object-fit:cover`, focal point 60% 45%, radius 0 (token d). Left half is the white page. Never full-bleed, never a Cover with text on top.
- **beside-photo**: H1, lede, language line and CTA sit in the left column, x 120–660 (max 540 px), vertically centred in y 90–820 (H1 top ≈ y 230). No text touches or overlaps the photo. Ink #1B2622 on #FFFFFF.
- **timeline**: the hero foot (y 820–900, 80 px tall, token f "hero foot") is the T2 pair: white 240x80 tab flush bottom-left + evergreen #006E54 bar flush bottom-right x 720–1440 carrying the day timeline (5 stops). The bar is the hero's last row, inside the first screen at 1440x900.
- Mobile 390: photo first (390x300, 13:10 crop), then H1/lede/CTA stacked, then the timeline bar as a full-width block with stops in a 2-row wrap (no horizontal scroll, no absolute labels, no vertical type).

## 1. Signature techniques (3, from Picchio)

| # | Technique (source) | Picchio does | Ours: where on home | Shape / ratio / position / contrast | Must not be diluted |
|---|---|---|---|---|---|
| T1 | Tour rows with line-art on the seam — picchio.co.jp home "PICK UP NATURE TOUR & EVENT" (`ref/scroll-picchio-rows-a.png`, `-rows-b.png`) | 300 px text column + 880x440 (2:1) photo, 40 px gap, rows mirrored; hand-drawn blue 1.5 px line animal straddles the seam, overlapping photo ~60 px and title ~20 px | §3 block 4 "A day, stop by stop" — 3 route rows (viewpoint / harbour lunch / lakeside walk) | text col 300 px (25%), photo 880x440 2:1 (61%) radius 0, gap 40, row pitch 80; mirrored row 2; own SVG line drawing (binoculars 150x190 / folding-map 180x150 / camera-on-strap 160x220), stroke 1.5 px #006E54, fill none, absolutely placed on the seam: overlap photo 60 px, title 20 px, z above both (desktop ≥1024 only; mobile: drawing 90 px tall, static, above the title, no overlap) | 2:1 wide photo vs narrow text proportion; mirroring; drawing really crossing the seam; drawing in primary colour; radius 0 |
| T2 | Hero foot pair — picchio.co.jp first screen (`ref/picchio-first.png`) | white 240x80 "PLAY MOVIE" tab bottom-left, navy 720x80 "NEWS" bar bottom-right with label 22.4 px + one ticker line + arrow | Hero foot (block 1) | white tab 240x80 "Send an itinerary →" (ink, 15 px caps ls .05em, 18 px thin arrow); evergreen bar 720x80, label "A DAY" 22.4 px caps Hanken 300 ls .08em white, then 5 stops (time 13.6 px tabular + place 13.6 px) separated by 1 px white/40% bars, "now" stop ticked with 6 px #C9962B dot; arrow at right links #day | both pieces flush to the bottom edge of the hero; deep colour bar at full 80 px height; tab white on white page gets a 1 px #E4EEEA top/right border so it reads |
| T3 | Emblem heading + wash band — picchio.co.jp "ABOUT" (`ref/scroll-picchio-about-band.png`) | 30 px round emblem centred above a 32 px spaced-caps title + 16 px subtitle; 80 px section top padding; 2,390 px pale #E6F0F8 band | every home section title (blocks 2–9) + wash band behind blocks 5–7 (fare / guides / vehicle) | emblem = own SVG 30 px circle: wheel with 5 spokes + road line, stroke 1.5 #006E54; h2 32 px (2rem) Hanken 400 caps ls .05em lh 1.3 centred; subtitle 16 px Public Sans #4A5652 8 px below; section padding-top 80 px; wash #E4EEEA full width | emblem on every section; centred caps title; band clearly visible (one continuous band ≥1,600 px tall on desktop) |
| T4 (support) | Docked caption tab — `ref/scroll-picchio-about-photo.png` | white 260 px tab docked lower-left of portrait | block 6 guides: lead guide portrait with white 260 px tab (name, languages) | tab 260 px wide, padding 20/24, flush to photo bottom-left, overlaps photo inside its box | — |

### Continuation on inner pages (≥4)
| Page | T1 | T2 | T3 | T4 |
|---|---|---|---|---|
| Itineraries (`/itineraries/`) | 4 route rows (one per sample day), mirrored, each with own seam drawing | page-head foot: evergreen bar 80 px with that day's 5-stop timeline | emblem headings | — |
| Fares (`/fares/`) | 1 row (vehicle + what's included) | — | emblem headings + wash band behind fare table | — |
| Guides (`/guides/`) | — | — | emblem headings, wash band | every guide portrait 4:5 with docked 260 px tab (name + languages) |
| How it works (`/how-it-works/`) | 3 rows for request → draft → day | page-head foot timeline bar (Request · Draft · Adjust · Confirm · Day) | emblem headings | — |
| About (`/about/`) | 2 rows (founding / the vehicles) | — | emblem + wash band | founder portrait tab |
| Contact / Request (`/request/`) | — | white tab + evergreen bar pair at the page-head foot (tab "Write to us", bar: reply hours) | emblem heading | — |
| Journal single / archive | — | — | emblem above archive title | — |

Inner page head (all pages): split, title left x 120–660 (h1 3.25rem), 2:1 photo right 600x300, evergreen 80 px foot bar where listed.

## 2. Key visual concept

**(1) Reference first screen.** Picchio shows an aerial photograph over a forest to a volcano under a clear sky; a vertical column of white headline glyphs in the middle says "welcome to the forest" with a two-line sub-line ("Picchio's wildlife watching"); a white nav sits on the photo; bottom-left a white "PLAY MOVIE" tab, bottom-right a deep-navy "NEWS" bar with one live line. Story: *you are welcomed into a place by the people who look after it — the place first, the guide second.* Signature motion: on load the headline group zooms 1.4 → 1 over 3 s (Power1.easeOut) while each glyph fades from opacity 0 / y 10 px with a random skew, 2 s, random delay 0–1 s; loader fades. No scroll reveals.

**(2) Our translation scene.** Same story — "welcome to the view you came for, a person takes you there" — in our industry, same image type (documentary photograph of a landscape with people small-to-mid in frame), same motion concept (headline settles from larger to normal with staggered fade on load), composition converted to split-photo-right. Photo: a driver-guide in a plain navy jacket holds the sliding door of a white minivan open at a mountain viewpoint pull-off; a family of four (mixed ages, diverse) steps out, the child with a camera; a wide valley and soft blue ridge behind, morning light, high-key. Left column H1 "One family, one driver, the whole day." Hero foot: white "Send an itinerary" tab (Picchio's "PLAY MOVIE" position) + evergreen timeline bar (Picchio's NEWS bar) whose "live line" is the day: 08:30 Hotel pickup · 10:15 Ridge viewpoint · 12:30 Harbour lunch · 15:00 Lakeside walk · 18:00 Drop-off, with the 10:15 stop ticked "now" — the bar shows the day in progress the way the NEWS bar shows the latest item.

**(3) KV checklist** (all visible in the first screen at 1440x900 and implemented):

| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Aerial forest + volcano, full-bleed | Documentary photo: guide holding van door, family stepping out at a mountain viewpoint, valley behind | right half x 720–1440, y 90–820 (720x730), radius 0 | `sp-parallax` `--sp-par: 8%` (mobile 5%) | `hero-viewpoint.webp` |
| 2 | Vertical white headline "welcome to the forest" | H1 "One family, one driver, the whole day." 4.5rem (72 px) Hanken Grotesk 300, lh 1.1, ls -.01em, ink #1B2622, 3 lines max | left column x 120–660, top y≈230 | on-load CSS keyframes: each word span scale 1.08 → 1, opacity 0 → 1, y 10 px → 0, 0.9 s cubic-bezier(.25,.46,.45,.94), 80 ms stagger per word (CSS only, `prefers-reduced-motion` = none) | — |
| 3 | Two-line sub-line under headline | Lede (≤28 words) 18 px + language line "Guides speak English · Mandarin · Japanese · French · German" 13.6 px caps-free #4A5652 with 1 px vertical bars (token b tags) | under H1, 32 px gap | fade in after H1, 0.6 s, delay 0.5 s | — |
| 4 | White "PLAY MOVIE" tab bottom-left | White 240x80 tab "Send an itinerary →" (= the single CTA, anchors #request) | x 0–240, y 820–900 | none | — |
| 5 | Navy "NEWS" bar + one ticker line | Evergreen #006E54 720x80 bar: "A DAY" + 5 timed stops, 10:15 ticked with #C9962B dot | x 720–1440, y 820–900 | stops fade in 60 ms stagger on load (CSS keyframes, not sp-reveal) | — |
| 6 | Header: logo disc left, nav centre, utility right | Wordmark "Kuruma Tabi" + 30 px wheel emblem left; anchor menu centred (The day · Fares · Guides · Questions · Request); language switch right; exactly one top menu | y 0–90, white ground | none | — |

Rejected shortcut: not "adapt, don't copy" — the scene (welcome to a place, guide + people at a view), the foot pair and the settle-in headline motion are all kept.

## 3. Home blocks (order, purpose, layout, photos, copy)

Container 1,220 px, side gutters 110 px (token c). Section padding-top 80 px, row gap 80 px.

| # | Block (anchor) | Purpose | Layout | Photo(s) | Copy |
|---|---|---|---|---|---|
| 1 | Hero (top) | KV, promise, CTA | §0 split + T2 foot | P1 `hero-viewpoint` | H1 + lede 28 w + language line |
| 2 | Welcome (`#welcome`) | narrative: who we are, one family at a time | T3 emblem heading "WELCOME ABOARD"; 2 columns: left 540 px narrative (2 paragraphs, 90 words), right 3:2 photo 600x400 | P2 `driver-mirror-check` | 90 words |
| 3 | The day is drawn around you (`#day`) | how planning works, as one horizontal timeline | heading; one horizontal line (1 px #006E54) across 1,220 px with 5 nodes (time, stop, 1 sentence each) — NOT vertical, NOT step cards; under it a 2.6:1 wide photo 1220x467 with right-aligned 3-line white headline (token e About photo) | P3 `map-on-dashboard` (wide) | 5×18 words + 60-word paragraph |
| 4 | A day, stop by stop (`#stops`) | T1 route rows | 3 rows: text 300 / photo 880x440, mirrored row 2, seam drawings; row 3 photo 880x587 (3:2, token e) | P4 `viewpoint-binoculars`, P5 `harbour-lunch`, P6 `lakeside-walk` | each row: h3 2 lines, tags (Family · Couples · Small groups) with 1 px bars, 55 words, "→ MORE" link to Itineraries |
| 5 | Fares (`#fares`) — wash band starts | price list | T3 heading; full-width price table on wash (6 rows, price column nowrap right); right of table nothing; under table "what the fare covers" 2×3 list | — (no photo; table) | 6 rows + 6 includes |
| 6 | Guides (`#guides`) — wash continues | people | left: 540x620 portrait with T4 docked tab (lead guide); right list x 740–1280 of 5 more guides, each 120 px square thumb + name + languages, row pitch 155 px (token c About list) | P7 `guide-portrait-amara`; list thumbs P8 `guide-noor`, P9 `guide-tomas`; the other 3 guides use a 120 px #E4EEEA square with the wheel emblem (no photo) | 6 named people |
| 7 | The vehicle (`#vehicle`) — wash ends | comfort, seats, child seats | three 312 px circle photos (token e facility trio), 386 px pitch, centred captions | P10 `van-interior`, P11 `child-seat-fit`, P12 `luggage-load` | 3×25 words |
| 8 | Guest stories (`#stories`) | 3 stories | `sp-parallax` full-bleed band 1440x560 photo (P13) with white panel 480 px left (story quote) — NOT text on photo: the panel is a solid white box; then 2 more stories as 2-column text under it | P13 `family-sunset-road` | 3 stories × 45 w |
| 9 | Questions (`#faq`) | 6 FAQs | details/summary list, 760 px centred | — | 6 Q/A |
| 10 | Request (`#request`) | single CTA + newsletter | split: left text + contact form slot with mailto fallback (600 px); right 3:2 photo 560x373; below, a full-width newsletter strip (email + submit slot) | P14 `guide-waving-van` | 60 words |
| — | Footer | address, hours, subscribe slot, legal | white, 390 px | — | — |

Home photo positions: P1–P7, P8, P9, P10–P12, P13, P14 = **14 positions** (≥8). Home narrative ≥250 English words: welcome 90 + day 60 + rows 165 + stories 135 → ~450.

### Comparison with recent home orders
| Theme | Order (first 5) |
|---|---|
| Nagare Workation | 3-pane photo hero → photo strip → label-cell price board → seam portrait → coworking blocks |
| Yunagi Jazz | 3-photo ink mat hero + overlaid H1 → drifting card row → hour schedules → rising sheets → journal |
| Tsukuri Design | tonal title strip + straddling photo → caption row → method rows → full-bleed band → proof pairs |
| Yuzuriha Retreat | frosted full-bleed film hero → what a retreat is → calendar cards → one day → lodge → prices |
| **Kuruma Tabi** | **split photo-right hero with timeline foot → welcome 2-col → horizontal day line + wide headline photo → mirrored 2:1 route rows with seam drawings → wash band (fare table / docked-tab guide + thumb list / circle trio)** |

Why not alike: none of the four uses a split hero with a foot bar; the only "one day" (Yuzuriha) is a vertical schedule — ours is a horizontal line; route rows with line art on the seam, the circle trio and the docked portrait tab appear in none of them; Nagare's price board precedes everything, ours sits inside a wash band after the rows.

## 4. Inner pages (≥8)
1. **Itineraries** — 4 sample days (Ridge & Harbour, Lakes & Cedar Shrine path, Coast & Market, Snow Valley winter), each T1 row + 5-stop timeline; note "every day is redrawn for you".
2. **Fares** — full price table (same 6 rows), what's included / not included, cancellation (48 h free), payment.
3. **Guides** — 6 guides, portraits with T4 tabs, languages, years, favourite stop.
4. **How it works** — Request · Draft (within 24 h) · Adjust · Confirm (30% deposit) · Day; 3 T1 rows; timeline foot.
5. **The vehicles** (`/vehicles/`) — 2 vehicle types, seats, child seats, luggage, accessibility; circle trio.
6. **About** — founded 2014 in Alderwick Harbour by Mika Sato-Lund and Daniel Ferreira; 2 rows; values.
7. **Request** (contact, `/request/`) — form slot (contact) + mailto fallback, office hours, response time; T2 pair.
8. **Questions** (`/questions/`) — 12 FAQs.
9. **Newsletter** (`/newsletter/`) — "Season notes" early-access list (landing track: waitlist), newsletter slot.
10. **Journal** (posts page, empty) + 1 post "What a 10-hour day really looks like" (category Days, tags family, viewpoints).
11. Privacy, Terms, Thanks.

## 5. Fixed facts (whole site, all languages)
- Place: Alderwick Harbour (fictional coastal town), base at 12 Quay Road; region "the Alder Hills and Lake Morrow".
- Founded 2014. Hours: office Mon–Sat 09:00–18:00; tours daily 07:00–21:00; reply within 24 h.
- One family/group per vehicle, max 6 guests (minivan) or 9 (long van).
- Fares (6 rows, per vehicle, not per person; driver-guide, fuel, tolls, parking included):

| Item | Price |
|---|---|
| Half day (5 h), up to 6 guests | ¥48,000 |
| Full day (10 h), up to 6 guests | ¥82,000 |
| Full day (10 h), 7–9 guests, long van | ¥98,000 |
| Airport or station transfer | ¥22,000 |
| Extra hour | ¥8,500 |
| Two-day itinerary (guide lodging included) | ¥172,000 |

- People (6): Mika Sato-Lund (founder, planner), Daniel Ferreira (co-founder, head driver-guide, PT/EN/FR), Amara Okafor (lead guide, EN/FR), Noor Haddad (guide, EN/DE), Tomás Reyes (guide, EN/ES/JA), Lin Wei-Ting (guide, ZH/EN/JA).
- Stories (3): the Brandt family (4, from Hamburg, rain-day re-route to the cedar path), the Chens (3 generations, wheelchair-friendly viewpoint), Claire & Jules Martin (honeymoon, sunrise ridge).
- Process: Request → Draft within 24 h → Adjust → Confirm with 30% deposit → Day; 48 h free cancellation.
- Hero timeline: 08:30 Hotel pickup · 10:15 Ridge viewpoint · 12:30 Harbour lunch · 15:00 Lakeside walk · 18:00 Drop-off.

## 6. Colour (reference token a; ±5% only)
| Role | Hex | Share page / first screen | Source |
|---|---|---|---|
| Base | #FFFFFF | 55% / 60% | token a Base #FFFFFF |
| Wash | #E4EEEA | 25–30% / 0% | role of #E6F0F8 (hue moved to evergreen family to match primary; lightness 93% ≈ ref 94%) |
| Primary | #006E54 | ≤5% / ≤8% | plan hex; plays navy #094A81 role (bars, line art, emblems, buttons). Navy not used: plan palette is moegi evergreen and blue clashes with industry green-road theme |
| Ink | #1B2622 | text | ref #101010 tinted 3% green |
| Muted text | #4A5652 | subtitles, tags | — |
| Accent | #C9962B | <1% ("now" tick, small numerals) | role of logo yellow #FFE300 (lowered saturation, quiet) |
| Lines | #CFDCD7 | table rules | ref #AFAFAF role |
First-screen saturated share ≤15% (hard cap 30%): photo is high-key with desaturated greens (-15% sat in STYLE), only the 720x80 bar is solid primary (4.4% of the screen).

## 7. Type (sans)
- Latin headings: **Hanken Grotesk** (300, 400, 600); body/UI: **Public Sans** (400, 600). Both via theme.json `fontFamilies` + `fontFace` (woff2 in assets/fonts, OFL), same in editor and front.
- zh-TW stack headings: `"Hanken Grotesk", "Noto Sans TC", "PingFang TC", "Microsoft JhengHei", sans-serif`; body: `"Public Sans", "PingFang TC", "Microsoft JhengHei", "Noto Sans CJK TC", sans-serif` (body must NOT include bundled Noto Sans TC or JP).
- ja headings: `"Hanken Grotesk", "Noto Sans JP", "Hiragino Sans", "Yu Gothic", sans-serif`; body `"Public Sans", "Hiragino Sans", "Yu Gothic", "Meiryo", sans-serif`.
- Bundled subset Noto Sans TC + Noto Sans JP (400/500) for display, loaded in theme.json fontFace; copy inc/editor-lang.php from shared/ (style.css uses `:lang(`). No serif/Mincho serif anywhere.
- Scale: display H1 4.5rem (72 px, ≥4.25rem) weight 300 lh 1.1; page H1 3.25rem; h2 2rem (32 px) 400 caps ls .05em lh 1.3 (token b); h3 1.6rem (25.6 px) 400 lh 1.7 ls .05em (token b); body 0.9375rem (15 px) lh 1.8 (token b 14.94/1.8) — raise to 1rem on home lede/narrative; nav 1.1rem (17.6 px) ls .05em; tags 0.85rem; button 0.9375rem caps ls .08em. CJK ×0.75 of Latin heading size, body lh 1.85. de/fr `hyphens:auto`.

## 8. Similarity table (target 80%)
| Dimension | Picchio value (token) | Kuruma Tabi |
|---|---|---|
| Base / wash / primary relation | #FFF 55% / #E6F0F8 30% / #094A81 3% (a) | #FFF 55% / #E4EEEA 25–30% / #006E54 ≤5% |
| Accent | yellow logo only <1% (a) | #C9962B tick only <1% |
| h2 | 32 px, lh 1.3, ls .05em, centred, + 16 px subtitle (b) | identical numbers, Hanken caps |
| h3 | 25.6 px lh 1.7 ls .05em (b) | identical |
| Body | 14.94 px lh 1.8, 300 px measure (b) | 15 px lh 1.8, 300 px measure in rows |
| Header | 110 px, padding 10/40 (c) | 90 px (photo starts below), padding 10/40 |
| Container / gutters | 1,220 / 110 px (c) | identical |
| Section padding / row gap | 80 / 80 (c) | identical |
| Row columns | text 300, gap 40, photo 880 (c) | identical |
| Photo ratio / radius | 2:1 880x440, 3:2 row 3, 2.6:1 wide, radius 0 (e) | identical (rows 2:1 + 3:2, day photo 2.6:1) |
| Circles | three 312 px circles, 386 pitch (e,d) | identical (vehicle trio) |
| Portrait + tab | 540x620, white 260 px tab lower-left (e) | identical |
| Thumb list | 120 px squares, 155 pitch (c) | identical (2 thumbs + 3 emblem discs) |
| Line art | 1.5 px stroke, 130–270 px, on seam, overlap 60/20 (f) | identical numbers, own drawings, #006E54 |
| Emblem | 30 px round above titles (f) | 30 px wheel emblem |
| Hero foot | white 240x80 + navy 720x80 (f) | white 240x80 + evergreen 720x80 |
| Shadows / borders | none; 1 px bars between tags (d) | none; 1 px bars |
| Hero motion | zoom 1.4→1 3 s + glyph fade 2 s Power1.easeOut (g) | word settle 1.08→1, 0.9 s, cubic-bezier(.25,.46,.45,.94), 80 ms stagger (shorter: LCP) |
| Row motion | text x 20 px / photo y 20 px, 1 s Power2.easeOut (g, commented out) | sp-reveal--left / --up, 20 px, 1 s, cubic-bezier(.25,.46,.45,.94) |
| Hero layout | full-bleed (deviates: plan requires split) | split-photo-right |

## 9. Scroll effects (3 kinds + parallax)
| Effect | sp class | Where | Source / trigger / timing / easing |
|---|---|---|---|
| Row slide-in | `sp-reveal sp-reveal--left` on T1 text column, `sp-reveal sp-reveal--up` on T1 photo figure | home block 4, Itineraries, How it works, About rows | picchio function.js ScrollMagic (triggerHook onEnter) x 20 / y -20 px, 1 s, Power2.easeOut → `--sp-dist:20px; --sp-dur:1s; --sp-ease:cubic-bezier(.25,.46,.45,.94)` |
| Staggered groups | `sp-stagger` parent + `sp-reveal sp-reveal--up` children | block 3 timeline nodes (5), block 7 circle trio, block 6 thumb list | ours (stage-a), 0.12 s step, 12 px |
| Count | `sp-reveal sp-count` | block 3 small figures "1 family · 10 hours · 5 languages" under the day line | ours, 1.2 s |
| Parallax | `sp-parallax` | see §10 | — |
Not on: hero (CSS keyframes only), fare table, forms, FAQ, legal pages. ≤3 effect kinds per page.

## 10. Parallax (mandatory)
1. **Hero photo**: the right-half photo figure wrapper gets `sp-parallax` (figure>img is the layer), `--sp-par: 8%` desktop, `5%` at <782px; foreground text is in the left column, never in the moving layer. Mirrors Picchio's hero-in-motion (zoom film) as a slower photo drift.
2. **Stories band** (block 8): full-bleed group 1440x560 with `sp-parallax`, `img.sp-parallax__layer` = P13 `family-sunset-road`, `--sp-par: 10%` (mobile 6%); foreground white panel 480 px at x 110, y centred, solid #FFFFFF, holds the story quote (not on the moving layer).
Both stay active on mobile; reduced-motion / `?sp-static` / editor = static.

## 11. Responsive
- 390 px first screen: no vertical type, no absolutely positioned labels over text or photo; seam drawings static above titles; timeline bar becomes stacked block (stops in 2 rows, wrap), CTA tab full width.
- Price table ≥782 px: full container width (1,220 / 100%), price column `white-space:nowrap; text-align:right`, min-width 9rem, never clipped (check at 800 and 1280).
- Every table on <782 px: stacked rows (item above price, `display:block`), no horizontal scroll.
- T1 rows <782: photo first (2:1), text below; mirrored order ignored.
- Circles: 240 px on mobile, 1 per row.

## 12. Images (17 unique, all photo; 14 on home)
STYLE (one string, all images): `Documentary travel photograph, high-key bright natural daylight, soft overcast-to-morning light, gently desaturated greens and blues, airy whites, true-to-life skin tones, 35mm lens, candid unposed moments, plain modern travel clothing, internationally neutral contemporary landscape with no Japanese signage or landmarks, diverse guests, no text, no logos, no brand marks, no license plates readable, clean uncluttered composition, editorial magazine quality`

| # | File | Subject / composition | Ratio | Used (page · block) | Home |
|---|---|---|---|---|---|
| P1 | hero-viewpoint.webp | guide holding white minivan door open at mountain viewpoint, family of 4 stepping out, child with camera, valley behind, people in right 2/3 | 1:1 crop source 1600x1600 | Home hero | ✓ |
| P2 | driver-mirror-check.webp | driver-guide adjusting mirror, morning, hands on wheel, warm smile | 3:2 | Home welcome | ✓ |
| P3 | map-on-dashboard.webp | wide: van on an empty curving hill road, open sky upper right for headline | 2.6:1 | Home day | ✓ |
| P4 | viewpoint-binoculars.webp | couple and guide at railing with binoculars, ridges | 2:1 | Home row 1 | ✓ |
| P5 | harbour-lunch.webp | family at outdoor harbour table, boats soft background | 2:1 | Home row 2 | ✓ |
| P6 | lakeside-walk.webp | three generations walking a lakeside path, guide ahead | 3:2 | Home row 3 | ✓ |
| P7 | guide-portrait-amara.webp | lead guide by the van, half body, portrait | 4:5 | Home guides | ✓ |
| P8 | guide-noor.webp | guide portrait outdoors, head and shoulders | 1:1 | Home guide thumb; Guides page | ✓ |
| P9 | guide-tomas.webp | guide portrait with folding map | 1:1 | Home guide thumb; Guides page | ✓ |
| P10 | van-interior.webp | clean 6-seat van interior, light through windows | 1:1 | Home vehicle circle | ✓ |
| P11 | child-seat-fit.webp | guide fitting a child seat, parent watching | 1:1 | Home vehicle circle | ✓ |
| P12 | luggage-load.webp | guide loading suitcases into rear, station forecourt | 1:1 | Home vehicle circle | ✓ |
| P13 | family-sunset-road.webp | wide: family on roadside overlook at golden hour, van small at left | 16:9 (1440x560 crop) | Home stories parallax | ✓ |
| P14 | guide-waving-van.webp | guide waving goodbye at a hotel drive | 3:2 | Home request | ✓ |
| P15 | cedar-path-rain.webp | family with umbrellas on a forest path, guide leading | 2:1 | Itineraries row; Journal post | |
| P16 | coast-market.webp | guests tasting fruit at an outdoor coastal market | 2:1 | Itineraries row; How it works head | |
| P17 | snow-valley.webp | van parked by a snowy valley road, guests in coats | 2:1 | Itineraries row; Fares head | |
Total 17 (≤18). Inner pages reuse home images across pages but never twice on one page. 0 cut-outs (seam drawings are inline SVG strokes). ≤300 KB, ≤2000 px.

## 13. Form contract v1 (steps/form-contract-v1 exists)
- Copy `pipeline/assets/forms/shippress-forms.php` → `inc/`, CSS/JS → `assets/`, require in functions.php.
- **Request page** (`/request/`, the contact standard page) and home block 10: `shippress_form_slot(['kind'=>'contact','fallback'=>$fallback])` where `$fallback` = buffered literal mailto button "Send an itinerary" → `mailto:plan@kurumatabi.example` with subject from `_t()`. CF7 first, WPForms second; otherwise fallback stays. No form in the first screen.
- **Newsletter page** `/newsletter/` ("Season notes" early access) and footer subscribe strip (home block 10 bottom + footer): `kind=newsletter`, email = same recipient; required email input + submit always visible; MailPoet (explicit id) → MC4WP; CF7/WPForms only by explicit newsletter id. Fallback notice: "Opens your email app. Send the request to subscribe; you are not subscribed yet."
- Fields: contact via plugin (name, email, travel dates, guests, languages, message) — the fallback mailto only; newsletter: email + submit.
- Tokens: `--sp-form-accent:#006E54`, `--sp-form-on-accent:#FFFFFF`, `--sp-form-radius:0`, `--sp-form-focus:#C9962B` (2 px outline, 2 px offset), `--sp-form-surface:#FFFFFF`, `--sp-form-text:#1B2622`, borders #CFDCD7; error #A33A2B text + 1 px border, success #006E54 text. Dark ground (evergreen bar / footer if dark): surface #FFFFFF, text #1B2622 in field, labels #FFFFFF, focus #E4EEEA.
- Five-language keys (en, zh-TW, ja, fr, de): `forms_email`, `forms_subscribe`, `forms_mail_notice`, `forms_mail_subject`, plus contact fallback label/subject; `L10N_SEMANTIC=1`.
- No sp-reveal on any form or its wrapper.

## 14. Home acceptance checklist
- [ ] First screen 1440x900: photo right half only, H1 left ≥4.25rem, white tab + evergreen timeline bar flush bottom, all 6 KV items visible.
- [ ] Saturated share ≤15% (check-first-screen.py).
- [ ] T1: 3 mirrored rows, 300/40/880, 2:1 (+3:2), SVG drawing crosses the seam (60 px into photo).
- [ ] T3: 30 px emblem above every h2; wash #E4EEEA band visible behind fares/guides/vehicle.
- [ ] T4 docked tab on lead guide portrait; circle trio 312 px.
- [ ] 14 photo positions, no repeat; ≥250 words, ≥3 narrative paragraphs.
- [ ] Fare table full-width, price column nowrap right at 800 and 1280; stacked at 390.
- [ ] 390 px: no overlaps, no vertical text, no horizontal overflow.
- [ ] Parallax on hero photo and stories band (check-parallax ≥6 px; reduced motion 0); reveals only on rows/groups; none in hero/table/forms.
- [ ] One top menu (anchors) + one repeated CTA "Send an itinerary"; fares/people match §5.
- [ ] Fonts identical in editor and front (en, zh-TW).
