# Yukishiro Chalet — design spec (stage 1, design director)

Type: **hospitality** (WooCommerce compatible, not required). Industry: a **ski-in chalet hotel at the foot of a gondola** — 18 rooms, a heated boot and drying room, winter ski packages and summer hiking stays. Buyers: ski-resort chalets and small mountain hotels selling winter packages.
Primary reference: **https://ultimagstaad.com/en** (S5-Style hotel / ryokan; renders Fouquet's Gstaad: full-bleed chalet photo, concave white arc at the hero foot, a white 3-cell bar docked on the arc that sticks to the top, italic-lead caps chapter heads, wide peeking card strips with twin buttons). Secondary: **https://zabocon-yoichi-villa.jp/** (scroll behaviour only: hero photo + slow text fade, photo tiles rising in staggered).
Tokens: `brand/reference-tokens.md`, cited **T(a)…T(g)**. Screens: `ref/fq-0.png` (first screen), `fq-900` (bar docked + chapter head + tabs), `fq-1800` (cards + twin buttons + dots), `fq-3600`, `fq-5400` (grey contact panel + half-bleed photo); `zb-0/900/1800`.
**Imagery: photo** (stage-a IMAGERY = photo): real documentary photography, **high-key** (row `photo_direction`), one STYLE string (§10). 0 cut-outs.
Font direction: **serif** (row). Latin display **Cormorant Garamond**, Latin body / UI **Lato**; zh-TW / ja headings **Noto Serif TC / Noto Serif JP** , body system fonts (§6).
Similarity target ≈ **80%** to Fouquet's (colour relationship, photo presentation, arc + docked bar, chapter heads, card strip, motion, layout). Photos, copy, names and logo are ours; no reference asset, text or logo reused.
Row constraints: archetype **sticky-media**, hero **full-bleed-photo**, first_screen **full-bleed-photo-info-bar**, nav **split**, page_structure **plan-comparison**, exactly one top menu, first-screen saturated share ≤10% target (cap 15% common.md, row 30%).
Class prefix `yk-`. Patterns `yukishiro-chalet/<name>`.

---

## 1. Signature techniques (3, obvious at a glance; none may be softened)

### S1 (stage-a T1): The seam desk — concave white arc cutting the photo foot + a white 3-cell info bar straddling it, docking to the viewport top
- **Source**: Fouquet's hero, https://ultimagstaad.com/en (`fq-0.png`, `fq-900.png`). Full-bleed photo; its foot is cut by a **shallow concave white curve** (edges at y≈760, centre sags to y≈850 at 1440 = ≈85px sag, curve rising toward both sides). A **white r8 bar 866×76** (x287–1153, y698–774) straddles the curve: 3 cells split by 1px `#D9D9D9` vertical rules (label 14px `#696969` over value 16px `#1B1B1A`), a **solid black block button 140×40** at the right; soft shadow `0 6px 24px rgba(0,0,0,.18)`. On scroll the bar **docks to y=0** and stays (T(d), T(f), T(g)).
- **Ours (home §1 hero)**: identical geometry on P01. Arc = inline SVG `yk-seam` (`viewBox 0 0 1440 120`, `preserveAspectRatio="none"`, path `M0,40 C360,120 1080,120 1440,40 L1440,120 L0,120 Z`, fill `#FFFFFF`, height 120px at 1440 → sag ≈ 85px), absolutely placed at the hero's bottom edge, `aria-hidden`. Bar `yk-desk` 866×76 (`width: min(866px, calc(100% - 48px))`), centred, bottom edge at 46px above hero foot (so ≈ half its height overlaps the arc): **not a form** — three info cells + a button:
  | Cell | Label (Lato 400 .8125rem `#6A6C80`) | Value (Lato 400 1rem `#2A2D4A`) |
  |---|---|---|
  | 1 | Winter season | 5 Dec – 12 Apr |
  | 2 | Lift pass | Included from 3 nights |
  | 3 | Rooms | 18 rooms · drying room |
  Button **"Check dates"** 140×40, `#2A2D4A` fill, `#FFFFFF` Lato 400 .9375rem, radius 4px → `/check-dates/`. Cell rules 1px `#D9DAE8` 40px tall, cell padding 0 24px.
  Docking: the bar is a child of a `yk-desk-wrap` that is `position: sticky; top: 0; z-index: 40` (≥782px) placed as the last child of the hero and pulled up with `margin-top: -122px`; once the hero leaves, it docks at y0 and keeps r8 (as Fouquet's). Header is **not** sticky (no clash). Pure CSS; no JS, no scroll listener.
- **Never soften**: the arc stays concave (sagging into the photo, centre lower than edges) and white, ≥70px sag at 1440; the bar stays white on the photo, 3 cells with vertical rules, dark solid button at the right; it docks to the very top on desktop. Not a wave band, not a rounded bottom corner, not a translucent bar.
- **Repeats**: every inner page head (`yukishiro-chalet/page-head`) uses the same full-bleed photo + arc (480px tall, arc sag 60px); Packages, Lift pass and Check dates pages carry a smaller `yk-desk` (3 page-specific cells) docked the same way.

### S2 (stage-a T2): The plan strip — outline pill tabs over wide 1.28:1 r8 photo cards, next card peeking, twin buttons, dot pager
- **Source**: Fouquet's rooms (`fq-900.png`, `fq-1800.png`): tabs "All rooms / Suites / Apartments / Chalet" at x64 (active = 1px `#111` outline r4 106×40, others text only, 16px); cards **869×680 (1.28:1) r8** starting x64, gap 16, the next card peeking from the right edge; under each: title 18px, 2-line text 16px `#545454`, **twin buttons**: outline "Discover" (1px `#111`, 307×48) + solid `#1B1B1A` "Book" (307×48), gap 12; **8px dot pager** (active black, rest `#D9D9D9`) at x72; round 40px white chevron buttons over the card edge.
- **Ours (home §3 "Packages")**: tabs **All · Winter · Summer** (`yk-tabs`, buttons; active 1px `#2A2D4A` outline r4, 44px tall, Lato 1rem; the filter just toggles `[data-season]` with ~15 lines of theme JS — no-JS: all cards visible, tabs hidden by `html.sp-js` gate). Strip `yk-strip`: horizontal `overflow-x: auto; scroll-snap-type: x mandatory`, cards `flex: 0 0 min(869px, 60vw)`, aspect 1.28 photos r8, gap 16, padding-left = container left (x64 at 1440), the 2nd card peeking ≈ 440px. 6 cards (one per package, §9): photo, title Cormorant 500 1.5rem, 2-line text Lato .9375rem `#55576B`, price line "from €1,180 · 4 nights" Lato 700 `#2A2D4A`, twin buttons **"Discover"** (outline 1px `#2A2D4A`, → `/packages/#<slug>`) + **"Check dates"** (solid `#2A2D4A`, → `/check-dates/`), each 48px, `flex: 1`, max 300. Dot pager (6 × 8px, active `#2A2D4A`, rest `#D9DAE8`, gap 10) + two 40px white round chevron buttons (1px `#D9DAE8`, `#2A2D4A` chevron) top-right of the strip; both scroll by one card (`scrollBy`, theme JS ≤20 lines; no-JS: native swipe/scrollbar).
- **Never soften**: card photos stay wide (1.28:1), large (≥60vw desktop) and r8; the next card must peek at the right edge; the twin buttons stay outline + solid side by side, full-width under the text; dots stay. Not a 3-column grid.

### S3 (stage-a T3): The chapter head — tiny italic serif lead-in word above a wide-tracked caps title, centred, lede clamped with an underlined "See more"
- **Source**: Fouquet's section heads (`fq-900.png`, `fq-3600.png`): italic serif "The" ~32px `#555` centred; below it a wide geometric caps title 40px / 48px, ls ≈.06em, two lines, `#1B1B1A`; 24px under, a centred lede 16px / 24px `#545454` max 860, clamped to 3 lines and ending "… **See more**" (underlined, `#1B1B1A`).
- **Ours** (`yukishiro-chalet/chapter-head`, used on every home section except hero/band/letter): lead-in Cormorant Garamond **italic 400 2rem** `#55576B` (e.g. "The", "Our", "What", "A"); title Cormorant Garamond **500 3rem / 1.15, uppercase, ls .08em**, `#2A2D4A`, centred, max 900 (row serif replaces the geometric caps; tracking kept wide); a **1px × 48px `#8D93C8` rule** 20px under the title (our lilac tint); lede Lato 400 1rem / 1.75 `#55576B` max 860 centred, `-webkit-line-clamp: 3` with an inline underlined link "See more" → the related inner page (no expanding JS; the link goes to the page).
- **Never soften**: italic word sits *above* and is smaller than the caps title; caps title stays tracked wide and centred; the lede stays clamped with the underlined link.

### Supporting (not counted): T4 Fouquet's contact band (`fq-5400.png`) — 50/50: grey panel `#F4F4F9` left (address rows with 32px outline icon circles, 1px `#8D93C8`), photo half-bleed to the right viewport edge (home §9, Contact page, Getting here).

### Continuation on inner pages (≥4 required; here 9)
| Page | S1 seam desk | S2 plan strip | S3 chapter head | T4 |
|---|---|---|---|---|
| Packages | page head P13 + arc + desk (Winter 5 Dec–12 Apr · Summer 20 Jun–20 Sep · From 3 nights) | full 6-card strip with tabs | ✔ per season group | — |
| Compare packages | page head P04 + arc | — | ✔ | — |
| Lift pass | page head P05 + arc + desk (Pass area 64 km · Gondola 90 m · Included 3+ nights) | — | ✔ | — |
| Rooms | page head P16 + arc | room strip: 4 room types, tabs All · Twin · Double · Family | ✔ | — |
| Winter (ski) | page head P02 + arc | winter cards only (3) | ✔ | — |
| Summer (hiking) | page head P10 + arc | summer cards only (3) | ✔ | — |
| About (The chalet) | page head P14 + arc | — | ✔ | — |
| Check dates | page head P06 + arc + desk (Reply within 1 day · Deposit 30% · Free change to 30 days) | — | ✔ | T4 band |
| Contact / Getting here | head without photo (white, arc omitted) | — | ✔ | T4 band P11 |

---

## Key visual concept

### (1) Reference first screen: concept, story, signature motion
- **Draws**: a full-bleed dusk photograph of a snow-covered timber chalet among firs, darkened by a near-black scrim; header: hamburger left, centred script logo, outline "Book a stay" right, a nav row of 5 links under the logo (white on a dark band); a centred wide-tracked white caps title with **five white stars** under it; at the foot a **white concave arc** biting into the photo and a **white 3-cell booking bar** (Destination · Guests · Dates + black "Book") sitting across the arc.
- **Story**: an alpine hotel opening in the heart of a ski destination — arrive in the snow, see the warm chalet, book in one step.
- **Signature motion**: the booking bar rides the hero foot and **docks to the top of the viewport** while you scroll; Swiper card strips below. (Secondary Zabocon: the hero photo dims slowly with scroll while the first line fades in.)

### (2) Our scene (same composition, same motion idea, same image type: one full-bleed photograph)
A ski-in chalet: **the moment you click into your skis at the chalet door**. Full-bleed **high-key photo P01**: on fresh snow outside a pale-timber chalet door, a ski instructor (crouching) clicks a guest's boot into the binding; the chalet's timber wall and a ski rack at the left, the gondola's pylon and cabin faintly visible in pale overcast light upper right. Light scrim (top 0→ 28%, `linear-gradient(180deg, rgba(42,45,74,.28) 0%, rgba(42,45,74,.10) 45%, rgba(42,45,74,.18) 100%)`) so white type reads on snow. Centred white caps-serif headline **"SKIS AT THE DOOR."**, under it a row of **five small brass snowflake glyphs** (our five stars) and the line "Eighteen rooms at the foot of the gondola". White **arc** at the foot, white **seam desk** across it with the three facts and "Check dates" — the single way in. Motion: P01 drifts slower than the page (sp-parallax = Zabocon's scrubbed hero, kept bright); the desk docks to the top (Fouquet's).

### (3) KV checklist (all in the home first screen, visible at 1440×900)
| # | Reference element | Our equivalent | Position (1440×900) | Motion | Image |
|---|---|---|---|---|---|
| 1 | Full-bleed dusk chalet photo, dark scrim | Full-bleed high-key **P01** (instructor clicking a guest's boot into a binding at the chalet door, fresh snow, gondola faint behind), light lilac-ink scrim ≤28% | x0–1440, y0–900 (hero height `min(100svh, 900px)`, min 640) | `sp-parallax`, `--sp-par: 8%` (mobile 6%) | **P01** |
| 2 | Wide-tracked white caps title centred | H1 **"SKIS AT THE DOOR."** Cormorant Garamond 500 **5.25rem / 1.05**, uppercase, ls .06em, `#FFFFFF`, `text-shadow: 0 1px 24px rgba(42,45,74,.35)` | centred, y≈330–420 | none (no reveal in hero) | — |
| 3 | Five white stars under the title | **Five brass snowflake glyphs** (own inline SVG, 14px, `#C9A25F`, gap 12) + line "Eighteen rooms at the foot of the gondola" Lato 400 1.0625rem `#FFFFFF` ls .02em | centred, glyphs y≈448, line y≈480 | none | — |
| 4 | Centred logo + nav row, left menu icon, right outline Book | **Split nav** (one `core/navigation`): Packages · Lift pass · Rooms ‖ centred logo (our snow-roof line mark 32px + "YUKISHIRO / CHALET" Cormorant 600 1.125rem ls .2em) ‖ Summer · Journal · Contact + outline button **"Check dates"** (1px `#FFFFFF`, 44px) at right; transparent over P01 with a `rgba(42,45,74,.30)` 120px top band (Fouquet's dark header band, lightened) | y0–120; logo centred y24–72; links y≈96 under the logo row on ≥1280 (Fouquet's two-row header), single row 1024–1279 | link hover underline `scaleX 0→1` .3s ease | — |
| 5 | Concave white arc at the photo foot | `yk-seam` SVG arc `#FFFFFF`, sag ≈85px | y780–900, full width | none | on P01 |
| 6 | White 3-cell booking bar on the arc, docking to the top | `yk-desk` info bar 866×76 r8 white, shadow `0 6px 24px rgba(42,45,74,.18)`: Winter season 5 Dec – 12 Apr · Lift pass Included from 3 nights · Rooms 18 rooms · drying room + dark **Check dates** button | x287–1153, y≈738–814 (straddling the arc) | CSS `position: sticky; top: 0` after the hero (≥782px); mobile in flow under the hero | — |
Saturated share target ≤10%: snow, timber and sky are low-S; only lilac rules and brass glyphs. Nothing else in the hero (no form, table, search, extra button row).

---

## 2. Home copy target
≈ **700 English words**; ≥3 narrative ¶ ≥20 words (§2 ×3, §5, §6, §8). Tone: calm, practical, hospitable; numbers not adjectives; no "best", no awards, no snow guarantees, no real resorts, lift companies or brands.

## 3. Home page: block order
Container 1312px (x64–1376, T(c)); centred text 860; section padding **96px top / 64px bottom** (T(c)), mobile 64 / 48. Ground white `#FFFFFF`; quiet panels `#F4F4F9`.

| # | Block (pattern) | Ground | Purpose | Layout | Photo(s) | Copy |
|---|---|---|---|---|---|---|
| 0 | `header` | over P01 | one split menu | §KV #4; not sticky. <1024: logo left, "Menu" button right → white overlay, links Cormorant 2rem `#2A2D4A` | — | labels |
| 1 | `hero` (KV) | P01 | key visual + seam desk | KV table | **P01** | H1 + 1 line + 3 facts |
| 2 | `intro` | white | who we are | chapter head S3 ("The" / "CHALET AT THE GONDOLA FOOT"), then **3 ¶** centred 860, Lato 1.0625rem / 1.85 `#55576B` (≈60 words each: the family chalet since 2009 / skis at the door, 90 m to the gondola / summer the same door leads to the trails); under it a 2-photo row: **P02** (8 cols, 1.5:1, r8) + **P03** (4 cols, 0.75, r8), gap 16 | P02 P03 | ≈190 |
| 3 | `packages` (S2) `id="packages"` | white | winter & summer packages | chapter head ("Our" / "WINTER AND SUMMER PACKAGES", lede clamped + See more → /packages/), tabs, 6-card strip, dots + chevrons | P04 P10 P08 P12 P15 P06 (cards: Ski week, Ski weekend, First tracks, Hiking week, Hut-to-hut, Long summer weekend) | 6 × ≈30 |
| 4 | `compare` (plan-comparison) | `#F4F4F9` | how packages compare | chapter head ("How" / "THE PACKAGES SIDE BY SIDE"); **table** full container width ≤1100: columns Package · Nights · Lift pass · Breakfast & dinner · Guide · From (price, nowrap right); 6 rows (§9); 1px `#D9DAE8` row rules, header Lato 700 .8125rem uppercase ls .08em; **no reveal**; link "Compare in detail →" `/compare/` | — | table + 1 line |
| 5 | `lift-pass` (sticky-media) | white | what the lift pass covers | 2 columns 6/6: left **sticky photo P05** (`position: sticky; top: 100px` = under the docked desk; 4:5, r8, height `min(76vh, 640px)`); right scrolling text: chapter head left-aligned variant + ¶ ≈70 words + 5 ruled rows (1px `#D9DAE8`, padding 20px 0): Area 64 km of pistes · Lifts 14, gondola 90 m from the door · Included with 3+ nights · Ski school meeting point at the door 08:45 · Summer: gondola + 2 chairlifts for hikers, included every stay; numerals `sp-count` | P05 | ≈140 |
| 6 | `boot-room` band | P09 | parallax full-bleed band | Cover 600px (mobile 420), **P09** (drying room: boots on warm racks), `sp-parallax --sp-par: 10%` (mobile 6%), scrim `rgba(42,45,74,.30)`; centred white: italic "The" 2rem + caps "BOOTS DRY BY MORNING" Cormorant 500 3rem ls .08em + ¶ ≈35 words Lato 1.0625rem | P09 | ≈45 |
| 7 | `rooms` | white | eighteen rooms | chapter head ("The" / "EIGHTEEN ROOMS"); Fouquet's spa mosaic (T(e)): **1 large P07** (644×560, r8) left + **2×2 P11 P13 P14 + a "See all rooms (4 types)" white chip** bottom-right of the last tile (Fouquet's "See all pictures"); under: 4 room types as 4 ruled rows (name · size · sleeps · from) | P07 P11 P13 P14 | ≈80 |
| 8 | `a-chalet-day` | `#F4F4F9` | the daily routine | chapter head ("A" / "CHALET DAY, WINTER"); 2 columns: left ¶ ≈60 words; right **6 time rows** (not a vertical timeline: plain ruled rows, time Cormorant 500 1.5rem `#2A2D4A` left 96px, text right): 07:00 breakfast · 08:45 ski school at the door · 12:30 soup in the boot room · 16:00 cake by the fire · 19:30 dinner · 22:00 boots on the dryers | — | ≈110 |
| 9 | `find-us` (T4) | `#F4F4F9` + photo | contact facts | 50/50: panel left (padding 64 left aligned to x176 like Fouquet's), H3 caps Cormorant 500 1.75rem ls .08em "YUKISHIRO CHALET", 3 icon rows (32px outline circle 1px `#8D93C8`, icon `#2A2D4A`): address / phone / email; outline button "How to get here" 48px; right **P16** half-bleed to the right viewport edge, 1.9:1 | P16 | facts |
| 10 | `journal` | white | 3 stories | chapter head ("From" / "THE JOURNAL"); 3 cards in 3 cols: cards 1–2 image 3:2 r8 (P17, P18); card 3 (post 3, whose image P03 is already in §2) is a `#F4F4F9` text card with the snowflake glyph; date, title Cormorant 500 1.375rem, outline "Read" | P17 P18 | 3 × ≈20 |
| 11 | `letter` (newsletter) | `#F4F4F9` | snow letter | 2 cols 5/7: left italic "The" + caps "SNOW LETTER" 2.25rem + 2 lines (first snow report, opening dates, summer trail notes; monthly Oct–Apr); right newsletter slot (§11, light); **no reveal** | — | ≈35 |
| 12 | `footer` | `#2A2D4A` | facts + index | logo white centred, 4 cols: Chalet (address, reception 07:00–22:00) · Write (email, phone) · Pages (`#site-index`) · Letter ("Snow letter →" link); bottom `#B9BCD9` .75rem "© 2026 Yukishiro Chalet · Privacy" | — | facts |

Home images: **P01 P02 P03 P04 P05 P06 P07 P08 P09 P10 P11 P12 P13 P14 P15 P16 P17 P18 = 18 positions, 18 unique** (≥8 ✔).

### First-screen composition (1440×900)
- y0–120 header band over P01 (logo centred, links row under it, "Check dates" outline at x1235–1376).
- y330–420 H1, y448 glyphs, y480 line; instructor and boot at the lower-left third (`object-position: 40% 60%`), gondola cabin upper right — the H1 sits over sky/snow, not over faces.
- y780–900 arc; desk y738–814 centred.
- ≤10% saturated (brass glyphs, any skin tones, the lilac 1px rules).

### Comparison with recent themes' home orders (must not match)
| Theme | Home order | Hero |
|---|---|---|
| Kodama Sound | split header → framed window + trace line → intro from 42.6% + flush photos → credit sheets → band → sliver row → flush photos → name rows → send-a-cut → journal → letter → footer | framed photo in deep ground |
| Ugoki Animation | header → hero → studio note → case wall → desk sheet → process → parallax band → people (8) → rates → journal → quote → letter → footer | — |
| Makiba Farmstay | header → hero → farm intro → farm day row → canopy statement → rooms → pasture band → help → stay (one way to book) → journal → letter → footer | full-bleed farm photo |
| Hobi Journeys | header → hero → figures → case wall → narrative → planning → band → destinations → brief band → journal → letter → footer | full-bleed photo, heavy bottom-left headline |
| **Yukishiro Chalet** | split two-row header → **full-bleed photo + concave arc + docked 3-cell desk** → centred chapter-head intro + 2 photos → **tabbed peeking card strip with twin buttons** → **comparison table** → **sticky photo + lift-pass rows** → parallax boot-room band → 1+2×2 room mosaic → chalet day rows → grey panel + half-bleed photo → journal → letter → footer | **centred caps serif title + glyph row, white arc + docked bar** |
Why not similar: no recent theme has the arc / docked bar, tabbed horizontal strip, side-by-side package table or sticky lift-pass split; no case wall, no figures row, no farm-day row; Makiba (also a stay) puts rooms before a "one way to book" block — ours has the booking path in the hero desk from the first second and rooms come after plans/comparison/lift pass. Headlines are centred caps serif, not heavy bottom-left.

---

## 4. Inner pages (11 pages + Journal + 3 posts)
`page-head` = full-bleed photo 480px (mobile 360) + scrim + italic lead-in + caps H1 white **4.25rem** + arc (sag 60px); `sp-parallax --sp-par: 6%` (mobile 4%).
| Page (slug) | Core content | Blocks |
|---|---|---|
| **Packages** (`packages`) | all 6 packages | head P13 + desk → S2 strip (tabs; cards P04 P12 P08 P10 P15 P06) → per package section: chapter head + ¶ ≈70 words + "What's included" 5 ruled rows + price line + twin buttons |
| **Compare packages** (`compare`) | full comparison | head P04 → full table (6 packages × 9 rows: nights, season, lift pass, ski school, guide, breakfast, dinner, drying room, from) → "Not included" list → notes on children's rates |
| **Lift pass** (`lift-pass`) | what the pass covers | head P05 + desk → sticky-media split (P09 sticky; text: area, lifts, hours 08:30–16:30 winter / 09:00–17:00 summer, collection at reception, lost pass €20) → FAQ ruled rows (6) |
| **Rooms** (`rooms`) | 18 rooms, 4 types | head P16 → room strip (S2, 4 cards P07 P11 P13 P14) → table of types (stacked on mobile) → "Every room" list |
| **Winter** (`winter`) | skiing from the door | head P02 → S2 winter cards (3: P04 P12 P08) → ski school times → drying room band (P09 parallax 8%) |
| **Summer** (`summer`) | hiking stays | head P10 → S2 summer cards (3: P15 P06 + P03 for Hiking week, since P10 is the head) → 5 trails as ruled rows (name · distance · climb · time) → hut-to-hut note |
| **The chalet** (`about`) | story since 2009, a day, people | head P14 → 3 ¶ story → chalet day rows (winter + summer, 6 each) → **7 people** as ruled rows (name Cormorant 1.25rem, role right) — no portrait grid → milestones 5 rows |
| **Check dates** (`check-dates`, booking) | the single way to check dates | head P06 + desk → 3 ruled steps (send dates → reply within 1 working day with a held room → 30% deposit) → **form slot** (contact kind, §11) on `#F4F4F9` panel → policies (deposit, changes, cancellation) |
| **Contact** (`contact`) | reception, getting here | head without photo (white, caps H1 dark) → T4 band (panel + P16 half-bleed) → form slot (§11) → getting here: train to Valmont station + shuttle 12 min, car park 20 spaces €15/night |
| **Snow letter** (`snow-letter`, newsletter) | standalone subscribe | page on `#2A2D4A` (dark case): italic "The" + caps H1 "SNOW LETTER", 2 ¶, newsletter slot, 3 past issues as ruled rows |
| **Journal** (`journal`, posts page, role `posts`, empty) | stories | head without photo; 3-col cards like home §10 |
| **Privacy** (`privacy`) | legal | text 720 column, no reveal |
| Posts (3) | stories | single: caps H1 3rem centred + featured 3:2 r8 + 720 body + category/tags |
Mapping: home `/`; about `/about/`; news `/journal/`; article post 1; category `/category/mountain-notes/`; tag `/tag/ski-in/`; newsletter `/snow-letter/`; contact `/contact/`. Templates: front-page, page, page-head, single, archive, category, **tag.html**, index, 404, search. Categories: Mountain notes, Chalet notes. Tags: ski-in, hiking, drying room, gondola.

---

## 5. Colour (Fouquet's relationship: white + near-black ink, photos carry colour; one quiet tint)
Fouquet's has no accent (T(a)); we keep its ink/white/grey-panel relationship within ±5% lightness and add the row hue **#8D93C8** as a single tint (rules, icon circles, dots inactive alt) — the row requires the lilac family.
| Token | Hex | Source | Use | Share |
|---|---|---|---|---|
| `base` | **#FFFFFF** | T(a) page base #FFFFFF | page, arc, desk | ~55% |
| `panel` | **#F4F4F9** | T(a) quiet panel #F0EEEC (L +1.5%, hue → lilac-grey; no beige) | §4, §8, §9, §11 | ~15% |
| `ink` | **#2A2D4A** | T(a) ink #1B1B1A (L +5%, lilac-black) | headings, buttons, footer | ~10% |
| `body` | **#55576B** | T(a) body #545454 | text | text |
| `muted` | **#6A6C80** | T(a) small #696969 | labels, captions | text |
| `lilac` | **#8D93C8** | row hex | 48px title rules, icon circles, tab hover, footer rule | ≤5% |
| `line` | **#D9DAE8** | T(f) rules #D9D9D9 | cell rules, table rules, inactive dots | trace |
| `brass` | **#C9A25F** | stage-a accent | 5 hero glyphs, one footer hairline | ≤1% |
| `mist` | **#B9BCD9** | — | small text on ink | text |
First-screen saturated share ≤10% (Fouquet's 3.6%). No cream/beige. Not the main colour of recent themes (Kodama mauve-black, Makiba, Hobi navy) — lilac-ink differs.

## 6. Typography (serif direction)
- `display`: **Cormorant Garamond** (woff2 400, 400 italic, 500, 600; OFL) — `"Cormorant Garamond", "Noto Serif TC", "Noto Serif JP", Georgia, serif` (CJK only via :lang below).
- `body`: **Lato** (woff2 400, 400 italic, 700; OFL) — `"Lato", -apple-system, "Segoe UI", Helvetica, Arial, sans-serif`.
- zh-TW headings `:root:lang(zh-TW)` → `"Cormorant Garamond", "Noto Serif TC", "PMingLiU", serif` (Noto Serif TC subset woff2 500 via fontFace); body → `"Lato", "PingFang TC", "Microsoft JhengHei", sans-serif` (no built-in zh / ja family in body — repo gate).
- ja headings → `"Cormorant Garamond", "Noto Serif JP", "Hiragino Mincho ProN", "Yu Mincho", serif` (Noto Serif JP subset 500); body → `"Lato", "Hiragino Sans", "Yu Gothic", "Meiryo", sans-serif`.
- All via theme.json `fontFamilies` + `fontFace` (editor = front end); subsets via the Hokuto / Hada workaround; `inc/editor-lang.php` copied and required (style.css has `:lang(`); files listed in theme-meta `fonts[].files` with licence; family names in readme.txt.
| Preset | Size | Weight / lh / ls | Use | Token |
|---|---|---|---|---|
| `hero` | **5.25rem** (84px), fluid min 2.75rem | Cormorant 500 / 1.05 / .06em uppercase | home H1 (largest ≥4.25rem ✔) | T(b) 40/48 caps wide, enlarged for gate |
| `xx-large` | **4.25rem** | 500 / 1.08 / .06em uppercase | inner H1 | — |
| `x-large` | 3rem | 500 / 1.15 / .08em uppercase | chapter titles | T(b) 40px caps |
| `lead-in` | 2rem | Cormorant italic 400 / 1 | italic lead word | T(b) ~32px italic |
| `large` | 2.25rem | 500 / 1.2 / .06em uppercase | letter, band | — |
| `medium` | 1.5rem | Cormorant 500 / 1.25 / 0 | card titles, times | T(b) 18px title enlarged |
| `body` | 1.0625rem | Lato 400 / 1.85 | text | T(b) 16/24 |
| `small` | .9375rem | Lato 400 / 1.6 | card text, table | T(b) 14/20 |
| `label` | .8125rem | Lato 400 / 1.4 (`#6A6C80`) | desk labels, table heads (700 uppercase .08em) | T(b) 12–14 |
Buttons Lato 400 .9375rem, 48px (desk 40px), radius **4px** (T(d) r4). CJK: display ×0.75, uppercase/tracking 0.02em, lh 1.35; body lh 1.85; de/fr `hyphens: auto`; H1 `overflow-wrap: anywhere` <782.

---

## 7. Motion and scroll (sp-scroll)
Copy `pipeline/assets/sp-scroll/` unchanged; enqueue in head; `add_editor_style`. Overrides: `:root { --sp-dur: 1s; --sp-ease: cubic-bezier(.625,.01,.355,1); --sp-dist: 24px; }` (T(g) Zabocon easing ~1.0s; 60px capped to 24). UI hover .3s ease (T(g) Fouquet's Swiper .3s ease).
### 7.1 Chosen effects (3)
| Effect | sp-* | Where | Source trigger / time / easing |
|---|---|---|---|
| Parallax (required) | `sp-parallax` | §7.2 | Zabocon hero scrub over ~900px, cubic-bezier(.625,.01,.355,1) (we keep it bright, no dimming) |
| Rise in, staggered | `sp-reveal sp-reveal--up` + parent `sp-stagger` | home §2 paragraphs + 2 photos, §5 five rows, §7 mosaic tiles, §8 time rows, §10 cards; inner: package sections, trails, people rows | Zabocon tiles rise in on view, ~1.0s, stagger ~.15s → ours 24px, 1s, stagger .12 |
| Count | `sp-count` | §5 figures "64 km", "14 lifts", "90 m"; Lift pass page | stage-a choice; 1.2s easeOutCubic built-in |
Not used: wipe (stage-a listed it, dropped to keep ≤3 kinds), zoom, marquee. **Strip (§3) children no reveal** (horizontal scroller) — reveal on the strip wrapper only. **No reveal**: hero, desk, §4 table, §9 facts, §11 form, footer, prices, privacy.
### 7.2 Parallax (required)
| Where | Block | Moving layer | Foreground (static) | `--sp-par` desktop / mobile | Reference motion |
|---|---|---|---|---|---|
| **Hero** | Cover `yk-hero sp-parallax` | P01 Cover background | H1, glyphs, line, arc SVG, desk (siblings outside the layer) | **8% / 6%** | Zabocon hero scrub; Fouquet's static |
| **Boot-room band** §6 | Cover `yk-band sp-parallax` | P09 | caps statement, ¶ | **10% / 6%** | Zabocon second photo moving under text |
| Inner page heads | `yk-head sp-parallax` | head photo | H1, arc | 6% / 4% | as hero |
Reduced motion / `?sp-static` / no JS / editor: no movement. `check-parallax.mjs` desktop + mobile must pass.

## 8. Responsive rules (hard)
- **390px first screen**: header in flow 64px white: logo mark + "YUKISHIRO CHALET" Cormorant 600 .9375rem ls .16em `#2A2D4A` left, "Menu" right. Hero 560px, P01 `object-position: 38% 60%`; H1 **2.75rem / 1.08**, ls .04em, centred in flow, 2–3 lines; glyphs + line in flow below; arc height 48px. **Desk in flow below the hero** (not overlapping, not sticky): 3 cells stacked as rows (label left, value right, 1px rules), full-width "Check dates" 48px. **No vertical text, no absolutely positioned labels over text, no overlap**; `scrollWidth == innerWidth`.
- 782–1279: header single row (links shrink to `.8125rem`) — if de/fr labels overflow, switch to overlay menu below 1180px for `html:lang(de), html:lang(fr)`. Desk 866 max, sticky.
- **Strip <782**: cards `flex-basis: 86vw`, peeking 10vw; twin buttons side by side, 44px each; chevrons hidden, dots kept.
- **Sticky media §5 <782**: photo not sticky, in flow 4:5 above the rows.
- **Comparison table ≥782px**: `width: 100%` of its container (≤1100), `table-layout: auto`; package column Cormorant 500 1.125rem; **"From" price column `white-space: nowrap; text-align: right; width: 1%`**, Lato 700; never clipped at 800 / 1280; no `overflow: hidden` wrapper.
- **Every table <782px** (compare, rooms, trails): stacked cards — package name + price on one flex line (price right, nowrap), the other columns as label/value rows, 1px rule between; no horizontal scroll.
- Mosaic <782: large tile full width 4:3, 2×2 grid stays 2 cols; T4 band stacks (panel then photo 3:2). Targets ≥44px.

## 9. Fixed facts (brand.md is the source; identical everywhere, 5 locales)
- **Yukishiro Chalet** ("yukishiro" — snow-white). **Valmont-Haut**, a fictional alpine village, 1,480 m. Address: 3 Chemin de la Télécabine, Valmont-Haut. Phone +41 00 555 01 18 (fictional). Email `stay@yukishiro-chalet.example`. **Founded 2009** by **Anna Brenner** and **Luc Morel** in her grandparents' guesthouse.
- **18 rooms** (4 types) · heated **boot and drying room** · **gondola 90 m** from the door · ski area **64 km**, **14 lifts**.
- **Seasons**: winter **5 Dec – 12 Apr**; summer **20 Jun – 20 Sep**. Reception **07:00–22:00**. Check-in 15:00, check-out 10:00. Lifts winter 08:30–16:30, summer 09:00–17:00. Lift pass **included with stays of 3+ nights** (winter); summer gondola + 2 chairlifts included every stay.
- **Packages (6, price per person, half board, double room)**: Ski week, 7 nights, 6-day pass — **from €1,640** · Ski weekend, 3 nights, 2-day pass — **from €690** · First tracks (beginner), 5 nights, pass + 4 ski-school mornings — **from €1,280** · Hiking week, 7 nights, guide 3 days — **from €1,120** · Hut-to-hut, 4 nights (2 chalet + 2 huts) — **from €860** · Long summer weekend, 3 nights — **from €480**.
- **Rooms (4 types)**: Twin 22 m², sleeps 2, 6 rooms · Double balcony 26 m², sleeps 2, 7 rooms · Family 34 m², sleeps 4, 4 rooms · Loft suite 48 m², sleeps 4, 1 room (6+7+4+1=18).
- **Booking (single way)**: Check dates page / email → reply within **1 working day** with a held room (48 h) → **30% deposit** → free date change up to **30 days**.
- **People (7)**: Anna Brenner (owner, hosting) · Luc Morel (owner, kitchen) · Ingrid Solheim (head ski instructor) · Tomas Novak (summer mountain guide) · Mei Lin Tan (reception) · Samuel Okafor (boot room & ski hire) · Clara Duval (housekeeping lead).
- **A chalet day (daily routine)**: winter 07:00 breakfast · 08:45 ski school at the door · 12:30 soup in the boot room · 16:00 cake by the fire · 19:30 dinner · 22:00 boots on the dryers. Summer: 07:00 breakfast · 08:30 trail briefing · 09:00 gondola up · 13:00 hut lunch · 17:00 sauna · 19:30 dinner.
- **Trails (5)**: Lake Lauris loop 9 km +420 m 3h · Ridge of Four Huts 14 km +780 m 5h · Larch path 6 km +210 m 2h · Col Blanc 16 km +1,050 m 6.5h · Waterfall valley 8 km +300 m 2.5h.
- **Milestones**: 2009 opened, 11 rooms · 2013 drying room · 2016 summer season · 2020 18 rooms · 2025 hut-to-hut package.
- **Stories (3)**: "How the drying room works overnight" (P17, Chalet notes) · "Your first day on skis, from the door" (P18, Mountain notes) · "Hut-to-hut in four days" (P03, Mountain notes).
- **Getting here**: train to Valmont station, shuttle 12 min (free for guests); car park 20 spaces €15/night. **Snow letter**: monthly, Oct–Apr.

## 10. Images (18 photographs, one STYLE; all 18 on home)
`IMAGE_STYLE="real documentary photograph, high-key and bright, fresh white snow or pale summer meadows, pale natural timber, soft overcast daylight, gentle cool lilac-grey colour grade, airy whites, low contrast, natural skin tones, 35mm lens, candid, modern international alpine chalet hotel, adults and families of diverse ages and ethnicities, no text, no letters, no numbers, no logos, no brand names, no Japanese elements"`
One at a time via `scripts/grok-image.sh`; Read each; regenerate any with text, logos, broken faces/hands, low-key or saturated look. webp ≤300 KB ≤2000px, no cut-outs.
| # | File | Subject | Ratio | Used on | Home |
|---|---|---|---|---|---|
| P01 | `kv-bindings-door.webp` | **KV**: outside a pale-timber chalet door on fresh snow, a ski instructor (woman, 40s, pale grey jacket) crouches and clicks a guest's boot (man, 30s, Black) into a ski binding; ski rack left, gondola pylon and cabin faint upper right, overcast sky; subjects lower left | 16:9, 2000×1125 | Home §1 | ✔ |
| P02 | `skis-at-door.webp` | wide: guests stepping out of the chalet door straight onto a groomed piste, gondola station 90 m away | 3:2 | Home §2 · Winter head | ✔ |
| P03 | `hut-trail.webp` | two hikers on a summer ridge trail approaching a small mountain hut | 3:4 | Home §2 · post 3 | ✔ |
| P04 | `card-ski-week.webp` | family skiing a wide gentle piste under pale sky | 1.28 | Home §3 card 1 · Compare head · Packages | ✔ |
| P05 | `lift-pass-gondola.webp` | gondola cabins rising over snowy firs, a guest holding a ski pass card (blank) | 4:5 | Home §5 · Lift pass head | ✔ |
| P06 | `card-summer-weekend.webp` | chalet balcony in summer, two people with coffee, green slopes | 1.28 | Home §3 card 6 · Check dates head | ✔ |
| P07 | `room-double.webp` | bright double room, pale timber, balcony door to snow | 1.15 | Home §7 large · Rooms head · Rooms strip | ✔ |
| P08 | `card-first-tracks.webp` | beginner with instructor on a gentle slope | 1.28 | Home §3 card 3 · Packages | ✔ |
| P09 | `drying-room.webp` | heated boot room: rows of ski boots on warm racks, gloves, skis in racks | 2.4 | Home §6 band · Winter band · Lift pass sticky | ✔ |
| P10 | `card-hiking-week.webp` | group with guide on a meadow trail, summer peaks | 1.28 | Home §3 card 4 · Summer head | ✔ |
| P11 | `room-family.webp` | family room with bunk alcove, morning light | 4:3 | Home §7 tile · Rooms strip · Contact T4 | ✔ |
| P12 | `card-ski-weekend.webp` | couple at the top of a run, skis on, wide view | 1.28 | Home §3 card 2 · Packages | ✔ |
| P13 | `room-loft.webp` | loft suite under a pale timber roof, snowy window | 4:3 | Home §7 tile · Packages head · Rooms strip | ✔ |
| P14 | `lounge-fire.webp` | chalet lounge, fireplace, guests with cake in ski socks | 4:3 | Home §7 tile · About head · Rooms strip | ✔ |
| P15 | `card-hut-to-hut.webp` | hikers with packs crossing a high col, summer | 1.28 | Home §3 card 5 · Packages | ✔ |
| P16 | `chalet-exterior.webp` | the chalet exterior on a bright snowy day with the gondola station beside | 1.9 | Home §9 · Contact T4 | ✔ |
| P17 | `post-drying.webp` | close: hands placing boots onto a boot dryer at night, warm-white light | 3:2 | Home §10 card 1 · post 1 · Journal | ✔ |
| P18 | `post-first-day.webp` | instructor and child at the chalet door, skis on | 3:2 | Home §10 card 2 · post 2 · Journal | ✔ |
Home §10 card 3 (post 3, P03 already on home) is a text card — no repeat on home. **Rooms page**: head uses **P16** (exterior), strip uses P07 P11 P13 P14. **Per page**: Home all 18 once · Packages P13 + P04 P12 P08 P10 P15 P06 · Compare P04 · Lift pass P05 + P09 · Rooms P16 + P07 P11 P13 P14 · Winter P02 + P04 P12 P08 + P09 · Summer P10 + P15 P06 + P03 · About P14 · Check dates P06 · Contact P11 · Journal P17 P18 P03 · posts P17 / P18 / P03. No image twice on one page.

## 11. Forms (form contract v1: `steps/form-contract-v1` exists)
Copy `pipeline/assets/forms/shippress-forms.php` unchanged to `inc/`, CSS + editor JS unchanged to `assets/`, require in functions.php. Literal markup + small PHP island. **No form in the first screen (the hero desk is info + link only); no `sp-reveal` on any form or its wrapper.**
- **Check dates** (`check-dates`, booking): on `#F4F4F9` panel: `shippress_form_slot( kind: contact, fallback )`; fallback = buffered literal mailto button **"Email your dates"** (`wp-element-button`, `#2A2D4A`, white, r4, 52px) → `mailto:stay@yukishiro-chalet.example?subject=<forms_dates_subject>` + hint "Opens your email app. Tell us your dates, the number of guests and the package." Recommended CF7 fields (readme): name*, email*, phone, package* (select: the 6 packages / Not sure), arrival* (date), nights* (number 1–14), adults* (number), children (number), room type (select 4 types), ski hire (checkbox), message, consent*, submit "Check my dates". Never links to /contact/.
- **Contact**: slot kind contact; fallback "Email reception" → same address (subject `forms_contact_subject`); fields name*, email*, topic (select: A stay / Groups / Ski school / Getting here / Other), message*, consent*.
- **Snow letter** (`snow-letter`): dark `#2A2D4A`, panel `#353858` padding 56 r8: `shippress_form_slot( kind: newsletter, email: stay@yukishiro-chalet.example, label: forms_email, submit: forms_subscribe, notice: forms_mail_notice, subject: forms_mail_subject )`.
- **Home §11** same newsletter slot (light). Footer: link only.
- Plugin order: newsletter MailPoet (explicit id) → MC4WP; CF7/WPForms only with a dedicated id. Contact: CF7 → WPForms. No plugin: required email + submit, native mailto POST, notice visible.
- **Tokens** light: `--sp-form-accent: var(--wp--preset--color--ink)` #2A2D4A; `--sp-form-on-accent: #FFFFFF`; `--sp-form-radius: 4px` (T(d)); `--sp-form-focus: #8D93C8` (2px outline, offset 2px); `--sp-form-surface: #FFFFFF`; `--sp-form-text: #2A2D4A`; fields 52px, 1px `#D9DAE8` border r4, focus border `#2A2D4A`; labels Lato .8125rem `#6A6C80` (desk labels); submit 52px Lato .9375rem, hover `#3A3E63` .3s ease; error `#A23B4A` text + border; success `#EEF0FA` panel, 3px left rule `#8D93C8`; checkbox/radio `accent-color: #2A2D4A`.
  Dark (`.yk-dark`): surface `#353858`, text `#FFFFFF`, accent `#FFFFFF`, on-accent `#2A2D4A`, focus `#C9CCEA`, border `rgba(255,255,255,.35)`, labels `#B9BCD9`, error `#F2A7B5`, success text `#E6E7F3` rule `#8D93C8`.
  Styled: input, textarea, select, checkbox/radio, label, submit, hover, focus-visible, disabled, error, success; scoped to CF7, WPForms, MailPoet, MC4WP (+ Jetpack, `.wp-block-form`), `.sp-newsletter-fallback`; no global selectors.
- **i18n keys** (en.php, `L10N_SEMANTIC=1`, local rewrites in en, zh-TW, ja, fr, de): `forms_email` "Email address", `forms_subscribe` "Send me the snow letter", `forms_mail_notice` "This opens your email app. Send the message to subscribe; you are not subscribed yet.", `forms_mail_subject` "Subscribe to the snow letter", `forms_contact_subject` "Hello from the website", `forms_dates_subject` "Dates for Yukishiro Chalet", `contact_email` "Email reception", `forms_dates_button` "Email your dates", `forms_dates_hint`, `forms_contact_hint`. Dynamic block attributes translated in all five locales.
- Validation: `form-check.py`, five-locale `form-runtime-check.php`, `repo-gates.sh forms`; real CF7 check 390px + desktop on light (Check dates, Contact) and dark (Snow letter); never submit.

## 12. Similarity table (target ≈ 80%; reference-tokens.md)
| Dimension | Reference (token) | Yukishiro Chalet |
|---|---|---|
| Base / panel | #FFFFFF ~55%; #F0EEEC ~6% (T(a)) | #FFFFFF ~55%; #F4F4F9 ~15% |
| Ink / body / small | #1B1B1A / #545454 / #696969 (T(a)) | #2A2D4A / #55576B / #6A6C80 |
| Accent | none; 1 dark button (T(a)) | lilac #8D93C8 rules ≤5%; dark #2A2D4A buttons |
| First-screen saturation | 3.6% (T(a)) | ≤10% |
| Display | wide caps 40/48, 400, centred (T(b)) | Cormorant 500 caps, ls .06–.08em, 48px chapter / 84px H1, centred |
| Italic lead-in | serif italic ~32px #555 (T(b)) | Cormorant italic 32px #55576B |
| Body | Jost 16/24; 14/20 (T(b)) | Lato 17/31; 15/24 |
| Container / text | 1312 (x64–1376); 860 centred (T(c)) | identical |
| Section padding | 96 / 64 (T(c)) | 96 / 64 |
| Info bar | 866×76 white r8, 3 cells, 1px #D9D9D9, black button, shadow 0 6 24 .18 (T(c),(d),(f)) | 866×76 white r8, 3 cells, 1px #D9DAE8, #2A2D4A button, shadow 0 6 24 rgba(42,45,74,.18) |
| Arc | concave white, sag ≈85px (T(f)) | concave white, sag ≈85px |
| Bar motion | absolute at y748 → docks y0 after ~750px (T(g)) | sticky top 0 after hero (≥782) |
| Cards | 869×680 1.28:1 r8, gap 16, peeking (T(e)) | min(869px,60vw) 1.28:1 r8, gap 16, peeking |
| Twin buttons | outline 1px #111 + solid #1B1B1A, 48px, r4 (T(d)) | outline 1px #2A2D4A + solid #2A2D4A, 48px, r4 |
| Tabs / dots / chevrons | outline pill r4; 8px dots; 40px round white (T(d),(f)) | identical sizes |
| Mosaic | 644×560 + 2×2 310×245 + "See all" chip (T(e)) | same grid, chip "See all rooms" |
| Contact band | 50/50, grey panel, 32px icon circles, half-bleed photo right (T(e),(f)) | 50/50, #F4F4F9, 32px circles 1px lilac, P16 half-bleed right |
| Radius / shadow | r4–8; shadow only on bar (T(d)) | r4 buttons, r8 photos/cards/bar; shadow only on desk |
| Photo treatment | warm low-key (T(e)) | high-key cool overcast (row photo_direction) |
| Motion | no reveals; Swiper .3s ease; Zabocon 1.0s cubic-bezier(.625,.01,.355,1), stagger .15 (T(g)) | reveal--up 1s same easing, stagger .12; strip scroll-snap; parallax 8/10% |

## 13. Home acceptance checklist (stage 1)
1. 1440×900: full-bleed **P01** (instructor clicking the guest's boot into a binding at the chalet door) with light scrim; split two-row header (logo centred, links row, outline "Check dates" right); H1 "SKIS AT THE DOOR." Cormorant caps 84px centred; 5 brass glyphs + line; **white concave arc** at the foot; **white 3-cell desk** 866×76 straddling it with the dark "Check dates" button. Nothing else.
2. Scrolling (≥782): desk docks to y0 and stays; P01 parallax visible (`?sp-motion`); `?sp-static` final state.
3. 390×844: header 64px in flow; H1 2.75rem in flow; desk stacked in flow below the hero; no vertical text, no absolute labels over text, no overlap, no horizontal overflow.
4. §2 chapter head (italic "The" above tracked caps, 48px lilac rule, clamped lede + "See more") + 3 ¶ + P02/P03.
5. §3 tabs + 6 wide peeking 1.28 cards with outline + solid twin buttons, dots, chevrons; prices match §9.
6. §4 comparison table full width, "From" nowrap right, not clipped at 800/1280; stacked at 390.
7. §5 sticky P05 + five lift-pass rows with sp-count; §6 P09 parallax band; §7 1+2×2 mosaic with chip; §8 six time rows; §9 grey panel + P16 half-bleed; §10 journal; §11 newsletter slot (email + submit + notice without plugins, no reveal); footer facts.
8. 18 unique images on home (≥8), none repeated; 0 cut-outs; every image Read-checked high-key, no text/logos.
9. ≥250 English words (target ≈700), ≥3 narrative ¶ ≥20 words; numbers equal §9.
10. Effects only sp-parallax, sp-reveal--up + sp-stagger, sp-count; hero/desk/table/form no reveal; `check-parallax.mjs` passes desktop + mobile.
11. Saturated first-screen ≤10%; largest size 5.25rem; fonts via theme.json fontFace (Cormorant Garamond, Lato, Noto Serif TC/JP subsets), editor = front end; serif direction.
12. One top menu; no `content:` text in CSS (glyphs, arc are inline SVG); auto-gates `1 1` pass for en; `pattern_source.py` passes.
