# Hobi Journeys — design spec (stage 1, design director)

Type: **business** (WooCommerce-compatible but not required; the site works fully without it). Industry: a **corporate incentive travel agency** that turns a sales year into a reward trip or a sales-team retreat (20–120 guests). Theme buyers: incentive and MICE travel agencies selling reward trips to companies.
Primary reference: **https://theenglishbus.com/** (S5-Style travel / tourism / transport; small-group tour operator; full-bleed documentary photographs, heavy tight white headline, hairline three-cell tour cards, navy + one red). Secondary: **https://harborlinetour.com/** (same category; a white-framed centre panel between two full-height photograph columns).
Tokens: `brand/reference-tokens.md`, cited as **T(a)…T(g)**. Screens: `ref/eb-0.png` (1440×900 first screen), `ref/scroll-eb-900/1800/2700/3600.png`, `ref/hl-0.png`, `ref/scroll-hl-1400/2600/4200.png`.
**Imagery: photo** (stage-a IMAGERY = photo). One real-photography STYLE string: **high-key, desaturated documentary travel photography** (row `photo_direction: documentary`; T(e)). 0 cut-outs.
Font direction: **sans** (row `font_direction`). Latin display **Plus Jakarta Sans**, Latin body / UI **Public Sans** (row fonts). zh-TW / ja headings **Noto Sans TC / Noto Sans JP** (hei / gothic sans); never a Mincho / serif anywhere. Details §6.
Similarity target: about **80%** to The English Bus in palette relationship, image treatment, motion, decoration and layout rhythm. Photographs, copy, trip names, the route glyph and the wordmark are ours; no asset, text, map silhouette or logo of either reference is reused.
Header: exactly one top menu (`core/navigation`), **centred** (row `nav: centered`), on a deep-navy bar that stands in for the reference's navy brand rail (we do **not** copy the left rail: side columns are banned). Row page structure **results-first-case-wall** = the trips already delivered come straight after the hero, before any "about us". Row `first_screen: three-equal-columns` is answered by the three navy columns that wipe away at load and by the hairline column grid; row `hero: diagonal-split` is reference only and not used (it would fight T1).
Class prefix: `hj-`. Pattern slugs `hobi-journeys/<name>`.

---

## 1. Signature techniques (3, obvious at a glance; none may be softened)

### S1 (from candidates T1 + T2 hero): Heavy tight headline bottom-left on a scrimmed full-bleed documentary photograph, with a hairline three-cell "ticket" card floating right
- **Source**: English Bus hero, https://theenglishbus.com/ (`ref/eb-0.png`). Full-bleed photograph (1282×900, 1.42:1) under a ~35% navy scrim; at left a two-line headline "Small / Groups" 140px, weight 700, letter-spacing −0.05em (−7px), line-height .87 (121.8px), white, ~582px wide; under it a 350px lede 21px / 30.45px white and one flat red block button 192×52, radius 0. At right a **1px white outline box** 420×510 sitting on the photo: top row tiny labels (11–14px) left and right, a 40px / lh 1 / 700 title, then a footer row 115px split by 1px white rules into three cells: "Next available tour / date", "From £…", and a white map silhouette with two or three navy dots. Six faint 1px vertical hairlines run the full height; three 52×3px slide bars top-right, the active one red (T(b), T(c), T(d), T(e), T(f)).
- **Ours (home §1)**: full-bleed photograph **P01** (tour director handing boarding passes to colleagues at a hotel lobby desk), crossfading to **P02** and **P03**; deep-navy scrim; H1 **"Reward / trips."** in Plus Jakarta Sans **800, 8.75rem (140px), ls −0.05em, lh .87**, white, bottom-left; 350px lede; one red **"Brief us"** button; the **ticket card** at right announces the next programme: label row "Next departure" · "72 guests"; title "Seville and the Andalusian coast, three nights"; footer cells "Departs / Thu 13 May 2027" · "From €1,850 per guest" · our **route glyph** (three white dots joined by a 1.5px white line, the last dot red). Exact geometry in Key visual §3 and §3 First-screen composition.
- **Never soften**: the headline stays huge (≥8.75rem desktop), heavy (800), tightly tracked (−0.05em) and stacked to .87 line-height; it is white on the photo, not navy on white, and never sits in a box. The card stays a **transparent 1px white outline** on the photo (no fill, no blur, no shadow, no radius) with the 3-cell footer row. The button is flat red, radius 0. The photo is full-bleed (no inset, no rounded frame).

### S2 (T2): The case wall — hairline ticket cards on photographs in two staggered columns, right column dropped 120px
- **Source**: English Bus tour list (`ref/scroll-eb-1800.png`, `ref/scroll-eb-2700.png`, `ref/scroll-eb-3600.png`): a giant navy section word ("tours.", 140px) top-left with a 300px body paragraph in the right half; below, cards **418px wide**, photo block **420px** + footer row **115px** (≈0.78:1 overall), photo darkened with a navy scrim, white type: label row 11px ("Award winning tour" · "16 people max"), title 40px 700 lh 1, footer row of 3 cells with 1px white rules; two columns ~90px apart, the **right column starts ~120px lower**, ~94px vertical gap between cards; faint page hairlines continue behind (T(c), T(e), T(f)). Cards rise 120px into place with .15 / .27 / .36 / .45s delays (T(g)).
- **Ours (home §3, "Delivered.")**: the results-first case wall. Section word **"Delivered."** Plus Jakarta Sans 800 **8.75rem** navy `#192F60`, ls −0.05em, lh .87, at x120; intro paragraph (≈60 words) Public Sans 400 1.3125rem / 1.45 navy in a 300px column whose left edge is x≈840. Then **four case cards** **P04–P07** (418 × 535: photo block 420 + footer 115), left column x≈240, right column x≈748 (gap 90), **right column offset +120px**, vertical gap 94px. Each card: label row "Medical devices sales team · March 2026" (left) · "96 guests" (right), Public Sans 400 .75rem white; title Plus Jakarta Sans 700 **2.5rem / 1** white (e.g. "Lisbon, the river and Sintra"); footer row three cells: "Returned / 22 Mar 2026" · "4 days · €2,950 per guest" · route glyph. All four use the same scrim. Under the wall, right-aligned in the right column: text link **"All delivered trips →"** (Public Sans 700 1.25rem navy, underline 2px on hover).
- **Never soften**: cards are photographs with white type and hairline cells (not white cards with a thumbnail); the 120px drop of the right column stays (it is the rhythm of the wall); the giant section word stays 8.75rem; radius 0; no shadow.

### S3 (T3): The single way to brief — navy title bar over a light-grey panel of four underlined cells and one red button
- **Source**: English Bus "Book your tour" (`ref/scroll-eb-900.png`): a 912px-wide block; a full-width **mid-navy `#2C3E6F` bar 106px** with a centred 44px / 65.6px / −1.3px white title; under it a **`#F5F5F5` panel** (≈314px) holding a 2×2 grid of fields: 14px grey label above, white field 50px tall with **2px `#CACDD4` bottom border**, and one **red `#E22632` 325×52 button** (T(a), T(b), T(c), T(d)).
- **Ours (home §8, "Brief us on your team.")**: block 1000px wide centred (x220–1220); navy bar `#2C3E6F` **106px**, title Plus Jakarta Sans 700 **2.75rem (44px) / 1.49, ls −1.3px**, white, centred. Panel `#F5F5F5`, padding 48px 104px 56px; a 2×2 grid (gap 32px 52px) of **four information cells, not inputs**: label Public Sans 400 .875rem `#6D82AB` above; value Public Sans 600 1.0625rem navy on a white 56px cell with **2px `#CACDD4` bottom border**, padding 0 18px: "Team size — 20 to 120 guests" · "When — 6 to 12 months ahead" · "Budget — from €980 per guest" · "Reward rule — yours; we cost three destinations". Right of the grid's second row, one red button **"Start the brief"** 325×56 → `/brief/`. One line under the panel, centred, .875rem: "Office Mon–Fri 08:30–18:00 · +44 1632 960 418".
- **Never soften**: the bar is a solid navy rectangle the full width of the block with the title centred in it; the panel is flat `#F5F5F5`; the underlined white cells and the single red button are visible; radius 0. It is the only "brief" block on the page (one way to brief).

### Supporting T4 (Harbor Line): framed centre panel between two full-height photograph columns
- **Source**: https://harborlinetour.com/ (`ref/hl-0.png`, `ref/scroll-hl-1400.png`): three columns ≈495 / 450 / 495; side columns are full-height photographs; the centre is a white panel with a **2px white frame, radius ≈14px**; side photos crossfade per section (T(c), T(e)).
- **Ours (home §7, destinations)**: a full-bleed band 760px tall: left column **P10** (34.4%), right column **P11** (34.4%), centre panel 31.2% (450px at 1440) white, **2px `#FFFFFF` frame, radius 14px**, inset 24px top/bottom so the photos show above and below it; inside: label "Where teams have gone", six ruled rows (destination · nights · largest group), link "See destinations →". The only radius on the page (radius belongs to T4).

### Supporting T5 (English Bus): page-wide hairline column grid
- 1px vertical lines at each sixth of the viewport (x = 240, 480, 720, 960, 1200 at 1440), `#000` at opacity **.11** on white / `#F5F5F5` sections and `#FFF` at opacity **.18** on photographs, drawn by a fixed decorative layer `.hj-grid` (pointer-events none, `aria-hidden`) behind content; 3 columns (thirds) <782px (T(f)). Card and column edges are aligned to these lines (cards start at 240 and at 748 ≈ the 720 line + 28).

### Continuation on inner pages (≥4 required; here 7)
| Page | S1 headline + ticket card | S2 case wall | S3 navy bar + grey panel | T4 / T5 |
|---|---|---|---|---|
| Delivered trips | page head: P15 + H1 "Delivered." 7rem + card "41 programmes · 3,860 guests · since 2012" | full wall of the 4 cases (same staggered geometry) + one long section per case | bottom: brief band | T5 grid |
| Programmes | page head: P03 + H1 "Programmes." + card "From €980 per guest · 20–120 guests" | the 4 programme types as ticket cards (P10, P06, P05, P11), 2 staggered columns | bottom: brief band | T5 grid |
| How we plan | page head: P02 + H1 "Five stages." + card "Budget → return flight · 6–12 months" | — | bottom: brief band | T5 grid |
| Destinations | page head: P10 + H1 "Six places." + card "6 destinations · 23 visited" | six destination cards (P04 P05 P06 P07 P18 P09) in the staggered wall | bottom: brief band | T4 framed panel at the top (P11 / P08 side columns) |
| About | page head: P12 + H1 "Since 2012." + card "Founded 2012 · 9 Wharf Lane" | — | bottom: brief band | T5 grid |
| Brief us | — (white head) | — | **the whole page is S3**: navy bar "Brief us on your team." over the `#F5F5F5` panel that holds the form slot (§11) | T5 grid |
| People | page head: P13 + H1 "Seven people." (no card) | — | — | T5 grid |
Page head = the S1 pattern at **560px** desktop height (440px <782): full-bleed photo with the same scrim, `sp-parallax --sp-par: 6%` (mobile 4%); H1 Plus Jakarta Sans 800 **7rem** desktop / 3.25rem mobile, ls −0.05em, lh .87, white, bottom-left x120; 350px lede; ticket card (same 1px white outline, 420px wide, footer row 3 cells, no image) at right ≥1024px, in flow under the photo on deep navy <1024px. One H1 per page.

---

## Key visual concept

### (1) Reference first screen: concept, story, signature motion
- **What it draws**: a full-bleed documentary photograph of a famous old place (gothic cathedral stonework / standing stones) under a soft navy scrim; a huge heavy white two-line headline "Small / Groups" at the left; a short lede and one red "View tours" block button under it; at the right, a hairline-outlined tour card ("16 people max", tour title, next available date, price from, a white map silhouette with dots); six faint vertical hairlines over everything; three slide bars top-right with the active one red; a navy brand rail at the far left.
- **Story**: a small, family-run team takes a handful of guests to a place everyone has heard of, with an expert guide — and the next departure and price are visible immediately, so the visitor can act from the first screen.
- **Signature motion**: at load, six navy columns wipe away (scaleY 1→0, origin top, .6s `cubic-bezier(.4,0,0,1)`), then the headline rises in from below (translateY 100vh→0, .6s same easing); the hero photo changes every few seconds with the three progress bars; scrolling on, the tour cards rise into place with staggered delays .15 / .27 / .36 / .45s (T(g)).

### (2) Our scene (same composition, same motion idea, same image type: documentary photographs)
A documentary, high-key photograph of **a tour director in a hotel lobby handing printed boarding passes to a line of colleagues at the front desk** (the moment the sales year becomes a trip). The heavy white headline says what we do — **"Reward / trips."** — with a 40-word lede about turning a sales year into four days a team remembers, and one red **"Brief us"** button. The hairline ticket card at right shows the **next programme**: "Next departure · 72 guests — Seville and the Andalusian coast, three nights — Departs Thu 13 May 2027 — From €1,850 per guest — route glyph". The hero photo crossfades through **P01 lobby → P02 coach door at dawn → P03 airport gate** (the trip in three moments) with three bars top-right; at load **three navy columns wipe away**, the headline rises; scrolling on, the case-wall cards rise in staggered. Same composition (photo + left headline + right card + hairlines + bars), same motion idea, same image type.

### (3) KV checklist (all built in the home first screen and visible at 1440×900)
| # | Reference element | Our equivalent | Position (1440×900) | Motion | Image |
|---|---|---|---|---|---|
| 1 | Full-bleed photograph of a famous place under a navy scrim | Tour director handing boarding passes to a line of colleagues at a hotel lobby desk; scrim `linear-gradient(90deg, rgba(19,32,59,.55) 0%, rgba(19,32,59,.25) 55%, rgba(19,32,59,.35) 100%)` | full hero x0–1440, y72–900 under the 72px header | `sp-parallax` `--sp-par: 8%` (mobile 5%) | **P01** |
| 2 | Giant tight white headline "Small Groups" 140px | H1 "Reward / trips." Plus Jakarta Sans 800, 8.75rem, ls −0.05em, lh .87, white | x120, top y≈300, two lines ≈244px tall, ≈520px wide | rises from 40px below + fades in .6s `cubic-bezier(.4,0,0,1)` after the wipe (CSS keyframes, **not** sp-reveal) | on P01 |
| 3 | 350px lede + red "View tours" button | 40-word lede (Public Sans 400 1.3125rem / 1.45, white, 350px) + red "Brief us" 192×52, radius 0 → `/brief/` | x120, lede y≈580–702, button y≈730 | none | on P01 |
| 4 | Hairline tour card: labels, 40px title, 3-cell footer (date / price / map with dots) | Ticket card for the next programme (Seville, 72 guests, Thu 13 May 2027, from €1,850 per guest) with our own **route glyph** (3 dots + line, last dot red) | x960–1380 (420w), y≈200–735 (420 + 115) | fades in .6s, delay .3s after the headline (CSS) | on P01 |
| 5 | Six faint vertical hairlines + three slide bars top-right, active red | T5 grid lines at x240/480/720/960/1200 (`#FFF` .18) + three 52×3px bars (white .6, active `#E22632`), synced with the crossfade | lines full hero height; bars x1236–1400, y104 | bars fill over 6s each; photos crossfade 1.2s every 6s (CSS keyframes, 18s loop) | **P02**, **P03** (slides 2, 3) |
| 6 | Navy columns wipe at load | **Three** navy `#192F60` columns (thirds, = row first_screen three-equal-columns) scaleY 1→0, origin top, .6s `cubic-bezier(.4,0,0,1)`, delays 0 / .08 / .16s | full viewport over the hero, load only | load only; skipped under reduced motion / `?sp-static` / no JS / editor (columns never rendered there) | — |
All load / slide animations live in theme CSS under `@media (prefers-reduced-motion: no-preference)` and selectors starting `html.sp-js:not(.sp-no-motion)`; the final state (P01 visible, headline in place, columns gone, first bar red) is the default without JS, in `?sp-static`, under reduced motion and in the editor. The hero has **no** `sp-reveal`.

---

## 2. Home copy target
≈ **720 English words**; ≥3 narrative paragraphs ≥20 words (§4 ×3, §3 intro, §5 rows, §6 band, §8). No guarantees, no awards, no real client names (clients are described by industry only), no "best".

## 3. Home page: block order

Container: hero, band, T4 strip, footer are full-bleed. Content column **1000px** (T(c)) centred; wide 1200px (x120–1320). Section padding desktop **140px / 140px**, mobile 72 / 72. Ground white `#FFFFFF` unless stated. The T5 hairline grid shows on every white / grey section.

| # | Block (pattern) | Purpose | Layout | Photo(s) | Copy |
|---|---|---|---|---|---|
| 0 | `header` | one top menu | deep-navy `#13203B` bar 72px, full width: wordmark left x40 ("Hobi Journeys", Plus Jakarta Sans 800 1.375rem ls −0.03em white, + route glyph 28px); **centred** `core/navigation`: Delivered trips · Programmes · How we plan · Destinations · About · Journal (Public Sans 700 1.0625rem white, gap 36px; hover underline 2px red); right edge x1400: text link "Brief us →" white 700 (a button block, not a second menu). <1024: wordmark + "Menu" button opening the overlay (`#13203B`, items Plus Jakarta Sans 700 2.75rem white). Header is `position: sticky; top: 0` ≥1024, in flow <1024 | — | labels |
| 1 | `hero` (S1, KV) | key visual | Key visual §3; nothing else in the first screen | P01 P02 P03 | H1 + 40-word lede + button + card |
| 2 | `figures` | results first: totals | white; 4 equal cells in the 1200 column, each starts on a T5 line; number Plus Jakarta Sans 800 **4.25rem / 1** ls −0.04em navy (`sp-count`), unit/label Public Sans 400 1rem `#6D82AB` below; 1px `#E3E3E3` top rule over each cell; cells: **41** programmes delivered since 2012 · **3,860** guests travelled · **23** destinations · **20–120** guests per programme (last cell no count: static) | — | 4 × ~8 words |
| 3 | `case-wall` (S2) | trips already delivered | §1 S2 | P04 P05 P06 P07 | section word + 60-word intro + 4 cards + link |
| 4 | `narrative` | who we are (3 ¶) | white; 1000 column; left 380px: H2 Plus Jakarta Sans 700 **2.5rem / 1.02 ls −0.04em** navy, max 260px wide (T(b) medium heading) "A sales year, turned into four days."; right 560px: **¶1** Public Sans 400 **1.3125rem / 1.45** navy (≈55 words: what an incentive trip is and who it is for), **¶2** & **¶3** 1.0625rem / 1.7 (≈60 words each: one planner from brief to debrief; a tour director on every day, one per 30 guests) ; link "About Hobi Journeys →" | — | 3 ¶ ≈ 175 words |
| 5 | `planning` | how a programme is planned (budget → return flight) | `#F5F5F5`; left 40%: **P08** 0.82:1 (418×510) `position: sticky; top: 112px`, caption .8125rem `#6D82AB`; right 55%: H2 "From budget to return flight." 2.5rem; five **ruled rows** (1px `#CACDD4` top border, padding 28px 0): left "01" Public Sans 600 .875rem red, title Plus Jakarta Sans 700 1.75rem / 1.1 navy, one sentence 1rem / 1.6, right column timing Public Sans 600 .875rem `#6D82AB` nowrap ("Week 1", "Weeks 2–3", "Weeks 4–8", "From 6 months out", "On the trip + 10 days"); link "How we plan →". Not a vertical timeline, not a step grid | P08 | ≈130 words |
| 6 | `band` | full-bleed parallax photograph | full-bleed 1440×640 (`sp-parallax --sp-par: 10%`), scrim as hero; bottom-left x120: Plus Jakarta Sans 800 **4.25rem / .95 ls −0.04em** white "The coach is waiting." + one sentence Public Sans 1.125rem white max 420px ("Every transfer timed, every seat counted, one tour director per 30 guests.") | P09 | ≈25 words |
| 7 | `destinations` (T4) | where teams have gone | §1 T4; centre panel rows: Lisbon & Sintra · 3 nights · 96 · Dolomites · 3 nights · 38 · Cape Town & winelands · 5 nights · 120 · Copenhagen harbour · 3 nights · 64 · Seville & Andalusian coast · 3 nights · 72 · Iceland south coast · 4 nights · 54 (Public Sans 400 1rem navy; numbers 600, right, nowrap; 1px `#E3E3E3` rules) | P10 P11 | label + 6 rows + link |
| 8 | `brief-band` (S3) | the single way to brief | §1 S3 | — | title + 4 cells + button + line |
| 9 | `journal` | three stories | white; H2 "Journal" 2.5rem + link "All stories →" right; three rows (1px `#E3E3E3` rules): thumbnail 200×244 (0.82) left, date Public Sans .875rem `#6D82AB`, title Plus Jakarta Sans 700 1.75rem navy, 1-line excerpt | P14 P15 P16 | 3 × ~25 words |
| 10 | `itinerary` (newsletter) | monthly letter | `#F5F5F5` (light form case); 1000 column; left: H2 "The Itinerary" 2.5rem + 2 lines ("First Tuesday of the month: one delivered trip, one planning note, next season's dates."); right: newsletter slot §11; **no reveal** | — | ≈30 words |
| 11 | `footer` | facts + site index | deep navy `#13203B`, padding 96 / 48; wordmark + route glyph; 4 columns: Office (address, hours), Contact (phone, two emails), Pages (site index list `#site-index`), On a programme ("Duty line 24 h during every programme"); bottom row `#8BA5D7` .8125rem "© 2026 Hobi Journeys · Privacy" | — | facts |

Home images: **P01 P02 P03 P04 P05 P06 P07 P08 P09 P10 P11 P14 P15 P16 = 14 unique** (≥8 ✔). P02 / P03 are real `<img>` elements in the hero stack (not CSS backgrounds) so they count and load lazily.

### First-screen composition (1440×900)
- y0–72: header bar `#13203B` (V < 24% ⇒ not counted as saturated). Wordmark x40; centred nav; "Brief us →" right.
- y72–900: hero. P01 full-bleed `object-fit: cover; object-position: 60% 45%` (director and desk right of centre, the queue of colleagues receding left, so the headline sits over the queue / wall, the card over the lobby back wall). Scrim per KV #1. T5 lines at x240/480/720/960/1200.
- H1 x120, top y≈300, ≈520×244. Lede x120 y≈580, 350px. Button x120 y≈730, 192×52, `#E22632`, label Public Sans 600 1rem white.
- Ticket card x960–1380, y≈200–735: 1px `#FFF` outline; padding 30px 43.75px (T(b)); label row Public Sans 400 .75rem white (left "Next departure", right "72 guests"); 72px below, title Plus Jakarta Sans 700 2.5rem / 1 white, max 3 lines; footer row 115px, `border-top: 1px #FFF`, grid `62% 38%`: left cell split horizontally (1px rule) "Departs / **Thu 13 May 2027**" (Public Sans 400 1.125rem + 700) and "From €1,850 per guest"; right cell the route glyph 96×96 centred.
- Bars x1236–1400 y104; "See the trips ↓" Public Sans 400 .875rem white centred at y≈846 (anchor `#delivered`).
- Saturated share target **≤ 8%** (red button ≈0.8%, active bar, red glyph dot, red hover none; navy columns are gone in the final state). Cap **15%** (common.md); never above 30% (row).

### Comparison with recent themes' home orders (must not match)
| Theme | Home order | Hero |
|---|---|---|
| Butai Playhouse | header → twin-pane stage → statement → season board (marquee + poster cards) → season rail → ticket tiles → rehearsal parallax band → prices → company → journal rows → newsletter → visit → footer | two abutting photos, giant caps ticker under them |
| Hako Capsule | header → stage (parallax + tonight card) → narrative → pod wall (5 cells) → comparison table → parallax band → station minute cards → house rules + strip → stories rows → letter → book band → footer | photo stage + filled "tonight" card |
| Komorebi Cabins | header → gutter-tagline hero → intro → cabin mosaic → compare table → inside row → weekend steps → woodland band → hosts → getting here → journal rows → letter → footer | photo with tagline in a gutter |
| Hinata Market | masthead + nav → front (3 ruled columns) → ticker → front-more → stalls strip → season band → apply → fees table → foot trio → colophon | newspaper front page |
| **Hobi Journeys** | header (navy bar) → **heavy-headline hero + hairline ticket card + 3 slides** → **figures (count)** → **staggered photo case wall** → narrative → **sticky photo + 5 ruled stages** → parallax band → **framed centre panel between two photo columns** → **navy bar + grey brief panel** → journal → newsletter → footer | full-bleed photo, 140px heavy headline bottom-left, transparent outline card right |
Why not similar: results (figures + case wall) come **before** any narrative (none of the four does that); no marquee, no ticker, no colour tiles, no comparison table on home, no mosaic, no newspaper columns; the hero headline is a 140px heavy white block over the photo (Butai has no headline on photos, Hako uses a filled card, Komorebi a gutter tagline); the staggered two-column photo-card wall and the Harbor-Line framed panel appear in no recent theme; the only band shared with Hako / Butai (a parallax photo band) is mandatory and sits in a different place (after the planning stages, before destinations). Price table is on Programmes, not home.

---

## 4. Inner pages (11 pages + Journal + 3 posts)
| Page (slug) | Core content | Blocks |
|---|---|---|
| **Delivered trips** (`delivered-trips`) | results first: the 4 cases | S1 head (P15) → figures row (same 4 cells, `sp-count`) → S2 wall of the 4 cases → one section per case (anchor `#lisbon` etc.): left 418px photo (same as its card), text only (the photo is already on the card above): brief ("what the client asked"), the rule (who qualified), the programme day by day (3–5 ruled rows), headcount / nights / per-guest price in a 3-cell hairline row (navy lines on white), in the 1000 column → S3 brief band |
| **Programmes** (`programmes`) | the four programme types + prices | S1 head (P03) → intro ¶ → four programme ticket cards in the staggered wall (Short-haul reward trip P10 · Long-haul reward trip P06 · Sales-team retreat P05 · Kick-off summit P11; footer cells "Nights · Group · From €…") → **price table** (6 rows, §9) on white, no reveal → "Always included" list (tour director per 30 guests, 24 h duty line, debrief) → S3 brief band |
| **How we plan** (`how-we-plan`) | budget → return flight | S1 head (P02) → five stages as large ruled sections (number, title 2.5rem, 2 ¶, "What we need from you", timing) with P08 beside stage 3 and P16 beside stage 5 → "Lead times" ruled rows (6–12 months ideal, 10 weeks minimum) → S3 brief band |
| **Destinations** (`destinations`) | six places teams have gone | S1 head (P10) → T4 framed panel band (P11 left / P08 right; panel: how we choose a destination, 3 ruled criteria) → six destination cards in the S2 wall (P04 Lisbon, P05 Dolomites, P06 Cape Town, P07 Copenhagen, P18 Seville, P09 Iceland; footer: "Nights · Flight time from Port Arden · Largest group") → S3 brief band |
| **About** (`about`) | story since 2012 | S1 head (P12) → 3 ¶ story → milestones as ruled rows (2012 first programme, 38 guests to Lisbon · 2016 tour-director team · 2019 first long-haul programme, Cape Town · 2023 retreats line · 2026 41st programme) → P13 + quote-free paragraph on tour directors → link to People → S3 brief band |
| **People** (`people`) | seven named people | S1 head (P13, no card) → seven ruled rows (name Plus Jakarta Sans 700 1.75rem, role, two lines; no portraits, no 4-person grid) |
| **Brief us** (`brief`, booking/enquiry) | the single way to brief | white head (H1 "Brief us." 7rem navy) → S3: navy bar + `#F5F5F5` panel with the **form slot** (§11) beside the four cells → "What happens next" 3 ruled rows (reply within 2 working days; call with a planner; costed proposal of three destinations in 3 weeks) → P17 |
| **Contact** (`contact`) | office, phone, form | white head (H1 "Contact." 7rem navy) → two columns: facts (address, hours, phone, emails, duty line) / form slot (§11) on `#F5F5F5` → getting here (rail 6 min from Port Arden Central; no parking; P17 not repeated — no photo) |
| **The Itinerary** (`the-itinerary`, newsletter) | standalone subscribe page | deep-navy `#13203B` full page section (dark form case): H1 "The Itinerary." 7rem white, 2 ¶ (what is in it, first Tuesday monthly, unsubscribe any time), newsletter slot (§11), three past issue titles as ruled rows (text only) |
| **Journal** (`journal`, posts page, role `posts`) | stories archive | white head H1 "Journal." 7rem navy; post rows like home §9 (featured images 0.82) |
| **Privacy** (`privacy`) | legal | plain text, 760 column, no reveal |
| Posts (3) | stories | single: S1-style head (featured photo 560px, H1 4.25rem white), 760 column body, category + tags |
Standard pages mapping (`theme-meta.json` / `screens`): home → `/`; about → `/about/`; news → `/journal/`; article → first post; category → `/category/on-the-road/`; tag → `/tag/tour-directors/`; newsletter → `/the-itinerary/`; contact → `/contact/`. Templates: front-page, page, page-wide (heads), single, archive, category (from archive), **tag.html** (from archive, label "TAG"), index, 404, search. Categories: On the road, Planning notes. Tags: tour directors, reward rules, return flights.

---

## 5. Colour (reference relationship kept; T(a))
| Token (slug) | Hex | Source | Use | Share of page |
|---|---|---|---|---|
| `navy` | **#192F60** | row hex; = reference body text `#172F60` (Δ < 1%) and close to ink `#1C2D4F` (+2% lightness) | headings on white, body text, section words, wipe columns | text + ~4% |
| `navy-deep` | **#13203B** | T(a) deep navy, exact | header bar, footer, newsletter page, mobile hero card ground | ~10% |
| `navy-mid` | **#2C3E6F** | T(a) mid navy, exact | S3 title bar only | band |
| `red` | **#E22632** | T(a) accent, exact | one filled CTA per view, active slide bar, glyph end dot, step numbers | ≤ 2% |
| `grey` | **#F5F5F5** | T(a) exact | S3 panel, planning section, newsletter section, form panels | ~15% |
| `white` | **#FFFFFF** | T(a) | ground | ~55% |
| `rule` | **#E3E3E3** | T(a) hairline | rules, card cells on white | lines |
| `field` | **#CACDD4** | T(a) | 2px underline of S3 cells and form fields, ruled rows on grey | lines |
| `tint` | **#8BA5D7** | T(a) | secondary text on navy | trace |
| `muted` | **#6D82AB** | T(a) | labels, dates, timings on white (4.06:1 on white → use only ≥ .875rem 600 or ≥ 1rem; on `#F5F5F5` use for ≥1rem only) | trace |
Photographs desaturated, high-key; scrims are deep navy rgba(19,32,59,…). No beige, no cream. Not the main colour of the four recent themes (plum ink, capsule grey, forest green, newspaper ink) ✔. First screen saturated share ≤ 8% target, **15% cap**.

## 6. Typography (sans direction)

### 6.1 Families (theme.json `fontFamilies` + `fontFace`; same in editor and front end)
- `display`: **Plus Jakarta Sans** (variable woff2, wght 200–800, OFL) — stack `"Plus Jakarta Sans", "Public Sans", system-ui, sans-serif`.
- `body`: **Public Sans** (variable woff2, wght 100–900, OFL) — stack `"Public Sans", system-ui, -apple-system, "Segoe UI", sans-serif`.
- zh-TW: headings `:root:lang(zh-TW)` → `"Plus Jakarta Sans", "Noto Sans TC", "PingFang TC", "Microsoft JhengHei", sans-serif` with **Noto Sans TC** subset woff2 (700) loaded via fontFace; body → `"Public Sans", "PingFang TC", "Heiti TC", "Microsoft JhengHei", sans-serif` (system hei sans; repo gate: no built-in zh family and no Japanese family in the zh body stack).
- ja: headings → `"Plus Jakarta Sans", "Noto Sans JP", "Hiragino Sans", "Yu Gothic", sans-serif` with **Noto Sans JP** subset woff2 (700); body → `"Public Sans", "Hiragino Sans", "Hiragino Kaku Gothic ProN", "Yu Gothic", "Meiryo", sans-serif`.
- No serif or Mincho anywhere. Subsets built with the Hokuto / Hada workaround (not the broken subset script); every file in `assets/fonts` listed in theme-meta `fonts[].files` with licence; family names in readme.txt. `style.css` has `:lang(` rules ⇒ copy `shared/inc/editor-lang.php` to `inc/` and require it.

### 6.2 Scale (theme.json presets; T(b))
| Preset | Size | Weight / lh / ls | Use | Token |
|---|---|---|---|---|
| `hero` | **8.75rem** (140px), fluid min 4.25rem | 800 / .87 / −0.05em | home H1, section word "Delivered." | T(b) 140 / 121.8 / −7px |
| `page` | 7rem | 800 / .87 / −0.05em | inner H1 | scaled T(b) |
| `xx-large` | **4.25rem** | 800 / .95 / −0.04em | figures, band line, post H1 | — |
| `x-large` | 2.75rem (44px) | 700 / 1.49 / −1.3px | S3 bar title | T(b) 43.75 / 65.6 / −1.3 |
| `large` | 2.5rem (40px) | 700 / 1.02 / −0.04em | H2, card titles (card titles lh 1) | T(b) 40.25 / 1 and 40 / 1.02 / −0.04em |
| `medium` | 1.75rem | 700 / 1.1 / −0.02em | row titles | — |
| `lede` | 1.3125rem (21px) | Public Sans 400 / 1.45 | hero lede, ¶1, case-wall intro | T(b) 21 / 30.45 |
| `body` | 1.0625rem (17px) | Public Sans 400 / 1.7 | text | — |
| `nav` | 1.0625rem | Public Sans 700 / 1.5 | menu | T(b) nav 20.1 700 (reduced: horizontal centred menu) |
| `small` | .875rem (14px) | Public Sans 400 / 1.5 | labels, dates | T(b) 14 / 21 |
| `tiny` | .75rem | Public Sans 400 | card corner labels | T(f) 11px |
Sentence case everywhere; no uppercase labels (T(b)). CJK: sizes ×0.75 for `hero`/`page`/`xx-large`, ls 0, lh 1.15 for display, body lh 1.85; de / fr `hyphens: auto` on headings and body; long German words must not overflow at 390 (`overflow-wrap: anywhere` on H1 / section words).

---

## 7. Motion and scroll (sp-scroll)
Copy `pipeline/assets/sp-scroll/` unchanged to `assets/`; enqueue css + js in head (js not deferred); `add_editor_style`. Theme overrides in style.css: `:root { --sp-dur: .6s; --sp-ease: cubic-bezier(.4,0,0,1); --sp-dist: 30px; }` (T(g): .6s, `cubic-bezier(.4,0,0,1)`; reference distance 120px capped to the 30px maximum).

### 7.1 Chosen effects (3 incl. parallax)
| Effect | sp-* | Where | Reference trigger / time / easing | Ours |
|---|---|---|---|---|
| Cards rise into place | `sp-reveal sp-reveal--up`, parent `sp-stagger` | home §3 the 4 case cards (each card; the wall is not a horizontal scroller); §5 the 5 stage rows; §9 the 3 journal rows; §2 the four figure cells; inner: case / programme / destination walls, How-we-plan stages, About milestones, People rows | English Bus: wrapper gets `.is-show` on entering view; `translateY(7.5rem→0)` .6s `cubic-bezier(.4,0,0,1)`, delays .15 / .27 / .36 / .45s (T(g)) | 30px, .6s, same bezier, sp-stagger .12s steps (≈ reference spacing) |
| Headcounts run | `sp-count` (with `sp-reveal sp-reveal--up`) | home §2 figures (41, 3,860, 23); Delivered trips figures row | stage-a: Harbor Line card strip replaced by counting figures (no counter on the reference; kept from stage-a "Chosen for build") | 1.2s easeOutCubic, keeps "3,860" thousands separator |
| Parallax (required) | `sp-parallax` | §7.2 | English Bus hero slides / Harbor Line full-height photo columns | §7.2 |
Not used: wipe / mask / zoom / left / right, marquee. **No reveal in the hero** (KV) and none on: forms, the price table, hours / contact facts, privacy text, the S3 brief band (it is a call to action, must be visible immediately). Reveals ≤60% of home blocks (used on §2, §3, §5, §9 = 4 of 11).
**Hero load motion (KV #2, #4, #5, #6)** — theme CSS only, inside `@media (prefers-reduced-motion: no-preference)`, selectors start `html.sp-js:not(.sp-no-motion)`:
- `.hj-wipe > span` (three absolutely positioned navy thirds inside the hero, `aria-hidden`): `animation: hj-wipe .6s cubic-bezier(.4,0,0,1) both; transform-origin: top;` scaleY 1→0, delays 0 / .08 / .16s; final state `transform: scaleY(0)` and `visibility: hidden` (without JS / static they are not rendered at all: `display: none` by default, shown only under the motion selector).
- `.hj-hero__title`: `hj-rise .6s cubic-bezier(.4,0,0,1) .45s both` from `translateY(40px); opacity: 0` (the reference rises from 100vh; 40px keeps the first screen stable — this is load motion, not sp-reveal, and only transform/opacity).
- `.hj-ticket--hero`: `hj-fade .6s .75s both`.
- Slides: `.hj-hero__slides img` stacked; P01 opacity 1 by default; under the motion selector an 18s infinite keyframe: each slide visible 6s, crossfade 1.2s; bars `.hj-bars i::after` scaleX 0→1 over 6s linear in sequence, red fill. Hover transitions on buttons and cards: `.3s cubic-bezier(.4,0,0,1)` (T(g)); card photo `scale(1.04)` on hover inside an `overflow: clip` frame, with `transition-delay: 0s`.
- `?sp-static`, reduced motion, no JS, editor: P01 shown, title / card in place, first bar red, no wipe.

### 7.2 Parallax (required)
| Where | Block | Moving layer | Foreground (static) | `--sp-par` desktop / mobile | Reference motion |
|---|---|---|---|---|---|
| **Hero** (primary) | Group `hj-hero sp-parallax` wrapping `.hj-hero__slides.sp-parallax__layer` (the stack of P01–P03) | **P01** (+ P02, P03 in the same layer) | H1, lede, button, ticket card, bars and grid lines are siblings of the layer, **outside** it | **8% / 5%** | English Bus hero: the background slides change under a fixed headline and card |
| **Band** (home §6) | Cover / Group `hj-band sp-parallax`, `figure > img` | **P09** | statement + sentence on the wrapper | **10% / 6%** | Harbor Line: full-height photograph columns drift as the centre panel scrolls |
| **Inner page heads** | `hj-head sp-parallax` | each page's head photo | H1, lede, card | **6% / 4%** | as hero |
Mobile keeps parallax at the smaller speeds. Reduced motion, `?sp-static`, no JS and the editor: no movement. Acceptance: `check-parallax.mjs` desktop + mobile, displacement difference ≥6px, ≤1px under reduced motion; ≥3 reveals hidden before entering and final after; nothing transparent after scrolling to the bottom.

---

## 8. Responsive rules (hard)
- **390px first screen**: header **in flow**, 60px, `#13203B`: wordmark left, "Menu" button right (white, 44px target). Hero = Cover, min-height **560px**, P01 `object-position: 62% 45%`, scrim stronger at the bottom (`linear-gradient(180deg, rgba(19,32,59,.2), rgba(19,32,59,.7))`); content **in flow** at the bottom, padding 24: H1 4.25rem (68px) / .87 / −0.05em, two lines; lede 1.0625rem / 1.5 max 330px; button full width 52px. Bars: 3 × 40×3px in flow at the top of the Cover content (decoration, no text). The **ticket card follows the Cover in flow** on `#13203B`, full width minus 24px margins, same outline and 3-cell footer (footer `62% 38%`, glyph 72px). Grid lines: thirds. **No vertical writing, no absolutely positioned labels or text over the photo, no overlap**; `scrollWidth == innerWidth`.
- 782–1023: header 64px with overlay menu; hero headline 6rem; card below the hero in flow (as mobile, max 520px, left x40).
- **Case walls <782**: one column, cards full width (0.82 photo + 115 footer), **no 120px offset**, gap 40; 782–1023: two columns, offset 80px.
- **Planning <782**: P08 full width 4:5 above the rows, not sticky; timing goes under the title.
- **T4 framed panel <782**: P10 full width 300px tall, then the panel (frame 2px `#E3E3E3` on white, radius 14, margin −40px 16px 0 to overlap the photo bottom slightly — in-flow negative margin, no absolute text), P11 not shown on home mobile (still on the page for desktop; use `display:none` <782 on the second photo only).
- **S3 brief band <782**: bar 80px, title 1.75rem; cells one column; button full width.
- **Price table ≥782px** (Programmes): spans the **full width of its column** (`width: 100%`, `table-layout: auto`); item column left (Plus Jakarta Sans 700 1.125rem), included column left, may wrap; **price column `white-space: nowrap; text-align: right; width: 1%`**, Plus Jakarta Sans 700; never clipped at 800 and 1280; no `overflow: hidden` on the wrapper.
- **Any table <782px** (prices, lead times, destinations rows): stacked — each row a block: item + price on one flex line (price right, nowrap), note below `muted` .9375rem, 1px `rule` between rows; no horizontal scrolling.
- Touch targets ≥44px; `html, body { overflow-x: clip }`; parallax layers clipped by their wrapper.

---

## 9. Fixed facts (identical on every page and in all five locales; brand.md is the source)
- **Name**: Hobi Journeys ("hobi" — the everyday made into a day out). **Founded** 2012 by Maren Holt and Daniel Okoro after planning the sales trip of a former employer. **Office**: Harbour House, 9 Wharf Lane, Port Arden (fictional). **Phone** +44 1632 960 418. **Email**: briefs `brief@hobi-journeys.example` (Brief us page, contact fallback on Brief); general `hello@hobi-journeys.example` (Contact, newsletter).
- **Office hours**: Mon–Fri 08:30–18:00; closed weekends and public holidays. **Duty line**: 24 h for every programme while a group is travelling.
- **Programmes**: 20–120 guests; one tour director per 30 guests included; ideal lead time 6–12 months, minimum 10 weeks.
- **Price list (6 items)**: Short-haul reward trip, 3 nights — **from €1,850 per guest** · Long-haul reward trip, 5 nights — **from €3,900 per guest** · Sales-team retreat, 2 nights — **from €980 per guest** · Kick-off summit, 3 nights — **from €1,450 per guest** · Costed proposal (three destinations, one site visit) — **€1,200 flat, credited when you book** · Extra tour director — **€420 per day**. Included in every programme: flights or rail, 4-star hotel, transfers, two group dinners, one signature day, tour director(s), 24 h duty line, debrief within 10 working days.
- **Planning (5 stages, budget → return flight)**: 01 Budget and rule (week 1) · 02 Three destinations, costed (weeks 2–3) · 03 Site visit and final programme (weeks 4–8) · 04 Announce to the team and register guests (from 6 months out) · 05 Travel, return flight and debrief (on the trip + 10 working days).
- **Figures**: 41 programmes delivered since 2012 · 3,860 guests · 23 destinations · groups of 20–120.
- **Delivered cases (4)**:
  | # | Trip | Client (industry only) | Guests | Length | Returned | Per guest |
  |---|---|---|---|---|---|---|
  | 1 | Lisbon, the river and Sintra | medical devices sales team | 96 | 4 days / 3 nights | 22 Mar 2026 | €2,950 |
  | 2 | Dolomites, hut to hut | software sales leaders | 38 | 3 nights | 21 Sept 2025 | €2,180 |
  | 3 | Cape Town and the winelands | insurance top sellers | 120 | 5 nights | 16 Feb 2025 | €4,100 |
  | 4 | Copenhagen harbour kick-off | logistics sales team | 64 | 3 nights | 25 Jan 2026 | €1,620 |
- **Next departure (hero card)**: Seville and the Andalusian coast, three nights · 72 guests · departs Thu 13 May 2027 · from €1,850 per guest.
- **Destinations (6)**: Lisbon & Sintra (3 nights, 96) · Dolomites (3, 38) · Cape Town & winelands (5, 120) · Copenhagen harbour (3, 64) · Seville & Andalusian coast (3, 72) · Iceland south coast (4, 54).
- **A day on a programme (daily routine)**: 07:30 tour director at the breakfast desk with the day sheet · 09:00 coaches leave · 13:00 long lunch · 16:00 free time · 19:30 group dinner · 23:00 last check-in with the duty line.
- **People (7)**: Maren Holt, founder and managing director · Daniel Okoro, co-founder, head of operations · Lucía Ferrer, senior programme planner · Arjun Mehta, costing and finance · Sofie Lindqvist, lead tour director · Kwame Asante, tour director · Hana Novak, client briefs.
- **Milestones**: 2012 first programme (38 guests, Lisbon) · 2016 own tour-director team · 2019 first long-haul programme (Cape Town) · 2023 retreats line · 2026 41st programme.
- **Stories (3 posts)**: "Why we still hand out boarding passes" (P14, On the road) · "Writing a reward rule your team believes" (P15, Planning notes) · "The day after the return flight" (P16, Planning notes).
- **The Itinerary**: first Tuesday of each month.
- **Getting here**: Port Arden Central station, 6 minutes' walk; no visitor parking; bicycle racks in the courtyard.
- **Audience**: sales directors, HR and people teams, founders of 50–2,000-person companies. **Tone**: calm, exact, a little warm; numbers instead of adjectives; no guarantees, no awards, no "best", no named real clients.

---

## 10. Images (18 photographs, one STYLE; 14 on home)
**STYLE** (identical for every image):
`IMAGE_STYLE="real documentary travel photograph, high-key and bright, soft natural daylight, desaturated muted colours with cool grey-blue undertones, gentle contrast, candid unposed moment, 35mm lens, eye-level, modern international hotels, coaches, airports and landscapes, small groups of adult colleagues in smart-casual clothes, diverse ages and ethnicities, natural skin tones, no text, no letters, no numbers, no logos, no brand names, no signage, no readable screens, no Japanese elements"`
Generate one at a time with `scripts/grok-image.sh out.webp "<subject>"`; Read every image; regenerate any with text, readable boarding passes / signs, logos, broken faces / hands, saturated colour or a dark look. ≤300 KB, ≤2000px, webp. No cut-outs.
| # | File | Subject (prompt core) | Ratio / size | Used on (page · block) | Home |
|---|---|---|---|---|---|
| P01 | `hero-lobby.webp` | **KV**: in a bright modern hotel lobby, a tour director (woman, 40s, Southern European, navy blazer) at the front desk hands a printed boarding pass (blank, no text) to the first of a line of six colleagues with small suitcases, line receding to the left; wide, people right of centre | 1.6, 2000×1250 | Home §1 slide 1 | ✔ |
| P02 | `hero-coach.webp` | **KV slide 2**: early morning, colleagues stepping up into a plain white coach (no markings) at a hotel forecourt, a driver loading suitcases, pale dawn light | 1.6, 2000×1250 | Home §1 slide 2 · How we plan head | ✔ |
| P03 | `hero-gate.webp` | **KV slide 3**: at a bright airport gate by a tall window, a group of colleagues gathered around a tour director (man, 30s, West African) who counts heads, aircraft blurred outside | 1.6, 2000×1250 | Home §1 slide 3 · Programmes head | ✔ |
| P04 | `case-lisbon.webp` | a long dinner table on a rooftop terrace at dusk over pale city roofs and a river, 20 colleagues mid-laugh | 0.82, 1312×1600 | Home §3 card 1 · Delivered card + section · Destinations card | ✔ |
| P05 | `case-dolomites.webp` | a group of colleagues hiking on a high meadow path below pale limestone peaks, light jackets | 0.82, 1312×1600 | Home §3 card 2 · Delivered · Destinations · Programmes (retreat card) | ✔ |
| P06 | `case-capetown.webp` | colleagues on the deck of a white catamaran, a flat-topped mountain hazy behind, bright overcast | 0.82, 1312×1600 | Home §3 card 3 · Delivered · Destinations · Programmes (long-haul card) | ✔ |
| P07 | `case-copenhagen.webp` | colleagues cycling along a harbour quay of pastel facades (desaturated) on a cold bright winter morning | 0.82, 1312×1600 | Home §3 card 4 · Delivered · Destinations | ✔ |
| P08 | `planning-site-visit.webp` | a planner (woman, 30s, South Asian) and a hotel venue manager walking through an empty bright ballroom, she holds a tablet face down and points to the ceiling | 0.82, 1312×1600 | Home §5 · How we plan stage 3 · Destinations T4 right | ✔ |
| P09 | `band-coast-road.webp` | aerial: two white coaches (no markings) on an empty coastal road between a black-sand shore and green cliffs, soft overcast | 2.25, 2000×890 | Home §6 band · Destinations card (Iceland) | ✔ |
| P10 | `venue-courtyard.webp` | a quiet hotel courtyard in the morning, white walls, olive trees, breakfast tables laid, two colleagues talking with coffee | 0.65, 1040×1600 | Home §7 left · Destinations head · Programmes (short-haul card) | ✔ |
| P11 | `venue-terrace.webp` | a welcome reception on a hotel terrace at sunset (muted), colleagues with glasses of sparkling water, a tour director greeting them | 0.65, 1040×1600 | Home §7 right · Programmes (kick-off card) · Destinations T4 left | ✔ |
| P12 | `office-planning.webp` | the agency office: three planners around a big table with paper maps (no text) and printed schedules turned away, tall windows on a harbour | 1.5, 1800×1200 | About head | |
| P13 | `tour-director.webp` | portrait: a tour director (man, 50s, Nordic) with a clipboard turned away, standing by a coach door, calm smile | 0.82, 1312×1600 | People head · About (beside tour-director ¶) | |
| P14 | `welcome-desk.webp` | close-up: a welcome desk with blank name badges, lanyards and folded blank day sheets in neat rows, a hand placing one | 1.5, 1800×1200 | Home §9 row 1 · post 1 · Journal archive | ✔ |
| P15 | `farewell-dinner.webp` | a farewell dinner in a whitewashed restaurant, a sales director (woman, 50s, East Asian) standing to make a toast, colleagues turned towards her | 1.5, 1800×1200 | Home §9 row 2 · post 2 · Journal archive · Delivered head | ✔ |
| P16 | `return-arrivals.webp` | an airport arrivals hall, the group walking out with suitcases, one colleague waving to the tour director behind, relaxed and tired | 1.5, 1800×1200 | Home §9 row 3 · post 3 · Journal archive · How we plan stage 5 | ✔ |
| P17 | `brief-meeting.webp` | a planner (man, 40s, Latin American) and a client sales director (woman, 30s, Black British) at a small meeting table with a notebook and a coffee, bright office, mid-conversation | 1.5, 1800×1200 | Brief us (after "What happens next") | |
| P18 | `dest-seville.webp` | a group of colleagues in a white courtyard with orange trees and a tiled fountain (plain tiles, no pattern text), late-morning light | 0.82, 1312×1600 | Destinations card (Seville) | |
**Per-page check (no repeats on one page)**: **Home** P01–P11, P14, P15, P16 (14) · **Delivered** P15 (head) + P04 P05 P06 P07 (cards; the per-case sections are text + 3-cell row only) · **Programmes** P03 + P10 P06 P05 P11 · **How we plan** P02 + P08 + P16 · **Destinations** P10 (head) + P11 P08 (T4) + P04 P05 P06 P07 P18 P09 · **About** P12 + P13 · **People** P13 · **Brief us** P17 · **Contact**, **The Itinerary**, **Privacy** no photo · **Journal** P14 P15 P16 · posts 1 P14, 2 P15, 3 P16. All 18 used; 12–18 ✔.

---

## 11. Forms (form contract v1: `steps/form-contract-v1` exists)
Copy `pipeline/assets/forms/shippress-forms.php` unchanged to `inc/`, the CSS and editor JS unchanged to `assets/`; `require` it in functions.php. Patterns stay literal block markup with a small PHP island for `shippress_form_slot` (contact fallback = `ob_start()`-buffered literal mailto button). **No form in the home first screen; no `sp-reveal` on any form or its wrapper.** The home S3 band is information cells + a link, not a form.
- **Brief us (`brief`, booking / enquiry)**: inside the S3 `#F5F5F5` panel, below the four cells: `shippress_form_slot( kind: contact, fallback )`. Fallback = buffered literal mailto button **"Email your brief"** (`wp-element-button`, red `#E22632` fill, white text, radius 0, 56px, href `mailto:brief@hobi-journeys.example?subject=<forms_brief_subject>`) + hint "Opens your email app. Tell us the team size, the month you would like to travel, a budget per guest and who qualifies." Recommended CF7 fields (readme; the theme does not create forms): name*, company*, work email*, phone, team size* (number 20–120), travel month* (month), programme type (select: Short-haul reward trip / Long-haul reward trip / Sales-team retreat / Kick-off summit / Not sure yet), budget per guest (select: under €1,500 / €1,500–2,500 / €2,500–4,000 / above €4,000), reward rule (textarea), consent*, submit "Send the brief". Never links to `/contact/`.
- **Contact (`contact`)**: `#F5F5F5` panel right of the facts; slot kind contact; fallback mailto **"Email us"** → `hello@hobi-journeys.example` (subject `forms_contact_subject`). Fields: name*, email*, topic (select: A new programme / A programme in progress / Press / Working with us / Other), message*, consent*.
- **The Itinerary (`the-itinerary`)**: standalone page on **deep navy `#13203B`** (dark case), panel padding 56px, radius 0: `shippress_form_slot( kind: newsletter, email: hello@hobi-journeys.example, label: forms_email, submit: forms_subscribe, notice: forms_mail_notice, subject: forms_mail_subject )`.
- **Home §10**: the same newsletter slot on `#F5F5F5` (light case). **Footer**: text link "The Itinerary →" only (no second slot).
- Plugin order (shared helper): newsletter MailPoet (explicit id) → MC4WP; CF7 / WPForms only with an explicit dedicated newsletter id. Contact kinds CF7 → WPForms. Without plugins the newsletter shows a required `type=email` field + submit, native mailto POST, notice visible ("not subscribed yet").
- **Tokens** (style.css, mapped to theme.json presets):
  - light: `--sp-form-accent: var(--wp--preset--color--red)` #E22632 (submit fill; reference red block button); `--sp-form-on-accent: var(--wp--preset--color--white)`; `--sp-form-radius: 0` (T(d)); `--sp-form-focus: var(--wp--preset--color--navy)` #192F60 (2px outline, offset 2px); `--sp-form-surface: #FFFFFF`; `--sp-form-text: #192F60`; fields 56px, no side borders, **2px `#CACDD4` bottom border** (T(d)), Public Sans 400 1.0625rem, padding 0 18px; labels Public Sans 400 .875rem `#6D82AB` above (T(b) 14px label); submit 56px, Public Sans 600 1rem, padding 0 40px, hover `#C51F2A` `.3s cubic-bezier(.4,0,0,1)`; error text + bottom border `#B3202B`; success panel `#E7EEF8` text `#192F60` with 3px left rule `#192F60`; checkbox / radio `accent-color: #192F60`.
  - dark (`.hj-dark`, `#13203B`): `--sp-form-surface: #1C2D4F`; `--sp-form-text: #FFFFFF`; `--sp-form-accent: #E22632`; `--sp-form-on-accent: #FFFFFF`; `--sp-form-focus: #8BA5D7`; bottom border `rgba(255,255,255,.4)`; labels `#8BA5D7`; error `#FF9AA2`; success text `#BFD2F2`.
  - States styled: input, textarea, select, checkbox / radio, label, submit, hover, focus-visible, disabled, error, success; scoped to CF7, WPForms, MailPoet, MC4WP (+ Jetpack, `.wp-block-form`) classes and `.sp-newsletter-fallback`; no global input selectors.
- **i18n semantic keys** (`inc/i18n/en.php`, extract with `L10N_SEMANTIC=1`, rewritten locally in en, zh-TW, ja, fr, de): `forms_email` "Work email", `forms_subscribe` "Send me The Itinerary", `forms_mail_notice` "This opens your email app. Send the message to subscribe; you are not subscribed yet.", `forms_mail_subject` "Subscribe to The Itinerary", `forms_contact_subject` "Hello from the website", `forms_brief_subject` "A new programme brief", `contact_email` "Email us", `forms_brief_button` "Email your brief", `forms_brief_hint`, `forms_contact_hint`. Dynamic block attributes (label, submit, notice, subject, fallback) must be translated, not only visible pattern text.
- Validation: `form-check.py`, five-locale `form-runtime-check.php`, `repo-gates.sh forms`; a real CF7 check at 390px and desktop on light (Brief us, Contact) and dark (The Itinerary); never submit.

---

## 12. Similarity table (target ≈ 80%; values from reference-tokens.md)
| Dimension | Reference value (token) | Hobi Journeys value |
|---|---|---|
| Ink navy | `#1C2D4F` rail / loader, body text `#172F60` (T(a)) | `#192F60` text / headings / wipe (Δ <2% L) |
| Deep navy | `#13203B` (T(a)) | `#13203B` exact: header bar, footer, dark pages |
| Mid navy bar | `#2C3E6F` 106px (T(a), T(c)) | `#2C3E6F` 106px exact |
| Accent | `#E22632`, one filled CTA, active bar (T(a)) | identical use, one per view |
| Light panel | `#F5F5F5` (T(a)) | `#F5F5F5` exact |
| Lines / fields | `#E3E3E3` 1px, `#CACDD4` 2px underline (T(a), T(d)) | identical |
| Tints | `#8BA5D7` / `#6D82AB` / `#CACDD4` (T(a)) | identical (labels, secondary text) |
| First-screen saturation | 9.7% (T(a)) | ≤ 8% (cap 15%) — deliberately a little quieter (row note) |
| Photo share of first screen | ~75% (T(a)) | ~88% (photo under the hero) − header 8% |
| Navy brand area | left rail 158px (~11%) | top bar 72px (8%) — rail not copied (no side column) |
| Hero headline | Graphik 700, 140 / 121.8 / −7px, white, 2 lines, ~582px, bottom-left (T(b)) | Plus Jakarta Sans 800, 140 / 121.8 / −0.05em, white, 2 lines, ~520px, bottom-left |
| Lede | 21 / 30.45, 350px, white (T(b)) | 21 / 30.45, 350px, white |
| CTA | red block 192×52, r0 | red block 192×52, r0 |
| Hero card | 1px white outline 420×~510, 40px title lh 1, padding 0 43.75, 3-cell footer 115px with map + dots (T(b), T(e)) | 1px white outline 420×535, 40px lh 1, padding 30 43.75, 3-cell footer 115px with own route glyph + dots |
| Card corner labels | 11px, two ends of the top row (T(f)) | 12px, two ends |
| Slide bars | 3 × 52×3px, active red, top-right (T(f)) | identical, x1236–1400 y104 |
| Hairline grid | 6 cols × 214px, 1px #000 .11, 3 on phones (T(f)) | 6 cols × 240px, 1px #000 .11 (white .18 on photos), 3 on phones |
| Section word | "tours." 140px navy on white with 300px paragraph right (T(b)) | "Delivered." 140px navy with 300px paragraph right |
| Case wall | cards 418 wide, 420 + 115, 2 cols ~90 apart, right col −120px, gaps 94 (T(c), T(e)) | identical geometry |
| Photo treatment | navy scrim ~35%, desaturated, r0, no clip-path (T(e)) | deep-navy scrim 25–55%, desaturated, r0, no clip-path |
| Card ratio | ≈0.82 photo block (T(e)) | 0.82 (photo files), block 418×420 crop |
| Brief block | 912 wide, bar 106, 44/65.6/−1.3 title, `#F5F5F5` panel, 2×2 fields 2px underline, red 325×52 (T(b), T(c), T(d)) | 1000 wide, bar 106, 44/65.6/−1.3, `#F5F5F5`, 2×2 cells 2px underline, red 325×56 |
| Radius / shadow | 0 everywhere; 50% round arrows (T(d)) | 0 everywhere except the T4 framed panel 14px; no shadows |
| Medium heading | 40 / −0.04em / 1.02 / max 260px (T(b)) | 2.5rem / −0.04em / 1.02 / max 260px (narrative H2) |
| Load motion | 6 navy columns scaleY 1→0 .6s `(.4,0,0,1)`, headline from 100vh .6s (T(g)) | 3 navy columns scaleY 1→0 .6s `(.4,0,0,1)` + 80ms steps, headline from 40px .6s |
| Scroll motion | cards translateY 120px→0, delays .15/.27/.36/.45 (T(g)) | `sp-reveal--up` 30px .6s `(.4,0,0,1)`, sp-stagger .12s steps |
| Hover | transform / colour .3s `(.4,0,0,1)` (T(g)) | identical |
| Hero slides | 3 slides with progress bars (T(g)) | 3 photos, 6s each, 1.2s crossfade |
| Secondary (Harbor Line) | 495 / 450 / 495 columns, white-framed r≈14 panel, full-height photos (T(c), T(e)) | 34.4% / 31.2% / 34.4%, 2px white frame r14, P10 / P11 |
| Imagery | documentary tour photographs, monuments + groups, desaturated (T(e)) | same type: groups at lobbies, coaches, airports, destinations; high-key, desaturated |

---

## 13. Home acceptance checklist (stage 1)
1. 1440×900 first screen: deep-navy 72px header with left wordmark, **centred** single menu, "Brief us →" right; full-bleed P01 (tour director handing boarding passes in a hotel lobby) under the scrim; H1 "Reward / trips." 140px 800 ls −0.05em lh .87 white at x120 y≈300; 350px lede; red "Brief us" 192×52; hairline ticket card x960–1380 with "Next departure · 72 guests", Seville title, "Thu 13 May 2027", "From €1,850 per guest", route glyph; six faint grid lines; three bars top-right, first red. Nothing else (no form, table, search).
2. With `?sp-motion`: three navy columns wipe at load, headline rises, card fades in, P01→P02→P03 crossfade every 6s with the bars; with `?sp-static` / reduced motion: final state at once.
3. 390×844: header in flow; Cover 560px with in-flow H1 4.25rem, lede, full-width button; ticket card in flow below on deep navy; no vertical text, no absolutely positioned labels, no overlap, no horizontal overflow.
4. §2 four figure cells (41 / 3,860 / 23 / 20–120) counting; §3 "Delivered." 140px navy + four photo ticket cards P04–P07, right column 120px lower, rising in staggered; numbers match §9.
5. §4 three paragraphs (≥20 words each); §5 sticky P08 + five ruled stages with timings; §6 P09 band with visible parallax; §7 framed centre panel between P10 and P11 with six destination rows; §8 navy bar 106px + `#F5F5F5` panel, four underlined cells, red "Start the brief".
6. §9 three journal rows (P14 P15 P16); §10 newsletter slot on `#F5F5F5` (email + submit + notice without plugins; no reveal); footer deep navy with address, hours Mon–Fri 08:30–18:00, phone, emails, `#site-index`.
7. 14 unique images on home (≥8); 0 cut-outs; every image Read-checked (no text, logos; high-key, desaturated).
8. ≥250 English words (target ≈720), ≥3 narrative ¶ ≥20 words; all facts match §9.
9. Effects: `sp-reveal--up` + `sp-stagger`, `sp-count`, `sp-parallax` only; hero has no reveal (CSS load motion only); no reveal on forms, S3 band, facts; `check-parallax.mjs` passes desktop + mobile.
10. First-screen saturated share ≤ 8% (cap 15%); largest theme.json size 8.75rem (≥4.25rem); fonts via theme.json fontFace (Plus Jakarta Sans, Public Sans, Noto Sans TC / JP subsets), editor = front end; sans only.
11. Radius 0 except the T4 panel; no shadows; exactly one top menu; no `content:` text in CSS (glyph is inline SVG, bars and grid lines are empty spans).
12. auto-gates `1 1` pass for en; `pattern_source.py` passes.
