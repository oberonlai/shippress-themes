# Shikii Mats — design spec (stage 1, b39-5)

Entrance-mat hire for offices and shops. Landing theme (`type: landing`, `rules.landing_track`): the home page is one long conversion page with an anchor menu and one repeated CTA, **"Book a trial install"**. Five languages (en, zh-TW, ja, fr, de).

- Reference: https://biz.duskin.jp/ (business home) and its mat page https://biz.duskin.jp/item/mat/
- Secondary: https://www.duskin.jp/item/mat/
- Tokens: brand/reference-tokens.md (all numbers below cite it as `[tok a–g]`). Screens: brand/ref/*.png.
- Imagery: **photo** (from stage-a.md IMAGERY). Real-looking documentary photographs, low-key. No illustration, no cut-outs.
- Font direction: **sans**. Manrope (Latin display) + Public Sans (Latin body); CJK Noto Sans TC / Noto Sans JP (gothic). No serif or mincho anywhere.
- We copy no reference image, copy text or logo. We borrow structure, proportions, colour relations, decoration and the key-visual scene.

---

## 1. Signature techniques (three, all visible above the fold or in the first two scrolls)

### T1 — Threshold split collage (hero)
- **Source:** biz.duskin.jp first screen (brand/ref/biz-0.png). One flat teal band, full width, with three people photos of **different widths abutting with no gap**; one of them shows a person in uniform kneeling at a doorway adjusting a mat `[tok e]`. The mat page adds a 1 px yellow rule under the title `[tok f]`.
- **Ours (home block 1):** a full-bleed (0–1440 px) photo collage, 360 px high at 1440 (40 vh, min 300, max 420), **4 tiles, 0 gap, radius 0**:
  - Tile A `hero-wet-pavement` x 0–18 %, full height (outside).
  - Tile B `hero-fitter-door` x 18–58 %, full height — the widest tile, left of centre (the KV photo; door sill composed at 58 % of height).
  - Tile C `hero-glass-door-rain` x 58–100 %, top 58 % (outside).
  - Tile D `hero-mat-pile` x 58–100 %, bottom 42 % (inside).
  - **Threshold line:** one 4 px `#262B30` line across the full collage width at 58 % of the collage height (aligned with the C/D seam and the sill in tile B). On it one 40 px `#FFC000` segment at x = 58 % (the reference yellow rule, `[tok a, f]`). At ≥782 px two tick labels "Outside" (above the line, right-aligned at x 56 %) and "Inside" (below, left-aligned at x 60 %), Public Sans 12 px / 600 / letter-spacing .08em, on a 4 px-padded white chip. They are in-flow children of a grid row, not floating over text.
  - Tiles sit directly on the page ground (the reference teal goes to the anchor bar, §5); the reference's photo edge fade into the band is replaced by a 14 px ribbed edge (T3) under the collage.
- **Do not weaken:** tiles must abut (0 gap), widths must stay unequal (18/40/42 %), the line must be 4 px dark, full width, and exactly at the outside/inside seam. Not a full-bleed overlay: **no text on the photos** except the two tick chips.
- **Inner pages (≥4):** every inner page hero is a 2-tile mini collage (60/40 split, 0 gap, 240 px high at desktop) with the same 4 px threshold line + 40 px yellow segment at 58 % and the page title BELOW it: Sites, The round, Mats & sizes, Prices, About, Book a trial, Contact. (Legal/thanks pages: line only, no photos.)

### T2 — Four-week round track (reference: "swap every four weeks" badge)
- **Source:** biz.duskin.jp mat page and duskin.jp/item/mat (brand/ref/bizmat-0.png, duskinjp-mat-first.png): a round "exchange every four weeks" badge on a mat card; trial price shown next to standard price `[tok f]`.
- **Ours:** a horizontal 4-cell track. Cells equal width, 1 px `#D8D8D8` borders, height 40 px (large) / 22 px (mini), labels "Wk 1 · Wk 2 · Wk 3 · Wk 4 — swap" in Public Sans 13 px / 600. Cell 4 is filled `#262B30` with white text; a 12 px `#FFC000` square marker sits at the top-left of cell 4.
  - Home block 2: mini track at the foot of every site card.
  - Home block 4: large track full container width (1200 px), each cell with a 2-line note beneath (what the fitter does that week).
  - Home block 6: one mini track in the trial-month list header.
- **Do not weaken:** four cells, the swap cell dark, the yellow marker. Not a stepper with circles, not a vertical timeline.
- **Inner pages:** The round (large track, full explanation), Mats & sizes (mini track on each size card), Prices (mini track in the header of the price table), Book a trial (large track summarising the trial month), Sites (mini track per site card).

### T3 — Dashed link rows + ribbed mat edge (reference: dashed link list)
- **Source:** biz.duskin.jp/item/mat/ — rows separated by **1 px dashed** rules, each a link with a small chevron after it and one short line below; section H2 with 8 px padding and a 1 px yellow rule `[tok b, f]`.
- **Ours:**
  - Every H2 of a content section: 8 px padding-bottom + 1 px `#FFC000` rule, full column width (reference exact).
  - Home block 6 "What a trial month includes" and inner list pages: rows separated by `1px dashed #A6A6A6`, row padding 20 px 0, title Manrope 18 px / 700 in `#1B6F93` + 8 px chevron, one line Public Sans 15 px below.
  - Ribbed edge: a 14 px strip `repeating-linear-gradient(90deg, #262B30 0 1px, transparent 1px 5px)` on `#DCE1E5`, placed under the hero collage and along the top edge of every charcoal band (blocks 6, 10, footer). Pure CSS on a block class, no text, no `content:` text.
- **Do not weaken:** dashes must be dashed (not solid), the yellow rule must be present under every H2.
- **Inner pages:** Mats & sizes, Sites, The round, Prices (notes), Questions on Book page, About (timeline of the company as dashed rows — not a vertical timeline graphic).

---

## Key visual concept

### (1) Reference first screen — concept, story, motion
biz.duskin.jp opens with a white header, a mid-blue nav bar, then a single flat teal band carrying three photographs of different widths abutting: staff at work, most memorably a woman in uniform kneeling at a doorway adjusting an entrance mat. The story is service at the door: "the mat is indispensable at the entrance; we bring it, and we swap it every four weeks so you never maintain it." Below sits a "pick up" rail of four square cards with dark square arrows and a dot pager. Signature motion: the four-up rail auto-advances one card at a time (bxSlider, ~4 s pause, swing), the page-top control fades in after 100 px (400 ms), anchor scroll animates 500 ms swing `[tok g]`.

### (2) Our transposition (same industry scene, same composition idea, same image type: documentary photos)
A low-key photograph collage of the threshold of an office or shop just before opening: outside, the pavement is still wet with shoe-prints and rain beads on the glass; inside, a fitter in a plain charcoal work jacket kneels and unrolls a charcoal mat just inside the glass door; a close-up shows the dry pile. One dark threshold line ties the photographs together at the sill. Story: **"The mat goes down before your first customer. A fresh one replaces it every four weeks."** Motion concept: the reference's sideways rail movement becomes quiet vertical drift — `sp-parallax` on the fitter tile — and the four-up rail becomes the four site cards that stagger in on the first scroll; the swap-every-four-weeks badge becomes the round track whose row slides in on reveal. The hero itself never reveals.

### (3) KV checklist (all six items in the first screen, visible at 1440 × 900 and 390 × 844)
| # | Reference element | Our counterpart | Position (1440 × 900) | Motion | Image |
|---|---|---|---|---|---|
| 1 | Flat band with 3 abutting people photos of different widths | 4-tile collage, 0 gap, radius 0, widths 18/40/42 % | full width, y 115–475 | none (tiles static) | hero-wet-pavement, hero-fitter-door, hero-glass-door-rain, hero-mat-pile |
| 2 | Person kneeling at a door laying a mat | Tile B: fitter kneeling, unrolling a charcoal mat inside a glass door, wet pavement visible through the glass | x 259–835, full collage height | `sp-parallax`, `--sp-par: 6%` (mobile 4%) | hero-fitter-door |
| 3 | 1 px yellow rule under the page title | 4 px charcoal threshold line + 40 px #FFC000 segment, "Outside / Inside" chips | y ≈ 324 (58 % of collage), full width | none | — (CSS) |
| 4 | Short greeting label beside the photos | Eyebrow "Entrance mat hire · offices and shops" + H1 BELOW the collage, Manrope 4.5rem/800, two lines, 24-word lead | y 500–700, x 120–900 | none | — |
| 5 | Trial price next to standard price | Booking bar: 3 cells — "Next free install: Tuesday 06:30" · "Trial month €19 (then €24 / 4 weeks)" · button "Book a trial install" | y 730–850, container 1200 | hover only (button bg 160 ms) | — |
| 6 | Blue nav bar under a white header | Teal #1B6F93 anchor bar, 45 px, holding the single top menu (Sites · Round · Trial · Prices · Questions · Book) | y 70–115, full width | `scroll-behavior: smooth` on anchors | — |

All four hero photos are in the image list (§8). The KV scene is the hero; it may not be replaced by a single stock image or moved below the fold.

---

## 2. First screen composition

**hero_composition: collage · hero_text: below-photo · hero_footer: booking-bar · hero_fingerprint: collage/below-photo/booking-bar**

- **collage** — the 4-tile abutting collage of T1 (tiles A–D, 0 gap, unequal widths, threshold line). Built as a Group (class `sm-collage`, CSS grid `grid-template-columns: 18fr 40fr 42fr; grid-template-rows: 58fr 42fr`), tile A and B span both rows, C top, D bottom; each tile a core Image with `object-fit: cover`. Tile B is wrapped in a Group with `sp-parallax` (the image is the moving layer).
- **below-photo** — no text on photos. The eyebrow, H1 and lead sit in normal flow in the container under the ribbed edge. H1 (en): "The mat goes down / before you open." Lead (24 words): "We lay a clean entrance mat inside your door, then swap it for a fresh one every four weeks. Try one site for a month."
- **booking-bar** — closes the first screen: one row, container width, 1 px `#D8D8D8` border, `#F2F2F2` fill, three cells (1fr 1.4fr auto) separated by 1 px rules; cell 3 is a teal `#1B6F93` button (radius 0, 52 px high, white Public Sans 16/700). It links to `/book-a-trial/` — **no form fields in the first screen.**
- Vertical budget at 1440 × 900: header 0–70 (white; logo left, phone + "Book" text link right), anchor bar 70–115, collage 115–475, ribbed edge 475–489, eyebrow 505, H1 525–680, lead 690–735, booking bar 760–852. Must all fit above 900.
- **390 × 844:** header 60, anchor bar becomes a horizontally scrollable single row (no wrap, 44 px) — still the one menu; collage 2 × 2 grid (A|B over C|D, B 60 % width), 280 px high; threshold line stays at 58 %; the "Outside / Inside" chips are **hidden** below 782 px and replaced by an in-flow caption line under the collage ("Outside · Inside"). H1 2.6rem, lead, booking bar stacks (3 rows, button full width). No vertical text, no absolutely positioned labels over text.

---

## 3. Home blocks (order, anchors, content)

Container 1200 px `[tok c]`; section padding 88 px top/bottom on grey bands, 64 px on white `[tok c: 75–95 / 30]`. One CTA label everywhere: "Book a trial install".

| # | Block (anchor) | Purpose | Layout | Images | Copy |
|---|---|---|---|---|---|
| 1 | Header + anchor bar + hero | KV, promise, booking | §2 | hero-wet-pavement, hero-fitter-door, hero-glass-door-rain, hero-mat-pile | H1 + 24-word lead + bar |
| 2 | Which sites a round can take `#sites` | the four-up rail → site cards | white; H2 + 1-line intro, then 4 cards, 270 px wide, 40 px gap, photo 1:1 radius 0, title 18/700, 2 lines, mini T2 track, 40 × 40 dark square arrow tab bottom-right of the photo (`#262B30`, white chevron) | site-office, site-shop, site-clinic, site-showroom | 4 × ~25 words |
| 3 | Why a mat at the door | narrative | `#F2F2F2` band; 7/5 columns: text left (3 paragraphs ≥ 30 words each), photo right 4:5 | why-grit-step | ~110 words |
| 4 | How the round works `#round` | four-week round | white; H2, large T2 track full width, 4 notes under the cells; under it a 5/7 row: photo left 3:2 + two big figures right ("4 weeks" per swap, "20 min" per install) with `sp-count` | fitter-van-swap | ~80 words |
| 5 | Doorway band | breath, parallax | full-bleed 520 px photo band, `sp-parallax --sp-par: 10%`; a white docked caption panel (400 px, bottom-left inside the container, not over the moving layer: panel is a sibling in the front layer) with one sentence + CTA link | band-shop-dusk | 1 sentence |
| 6 | What a trial month includes `#trial` | offer detail | `#262B30` band with ribbed top edge; H2 white + yellow rule; mini T2 track; 6 dashed link rows (white text, `#A6A6A6` dashes): install & measure, one swap visit, wash & inspect, size change, no contract, stop any time | — | 6 × 1 line |
| 7 | Round and price table `#prices` | prices | white; full-width table (6 rows, §7), price column right, nowrap; trial price row highlighted with 4 px yellow left stub; no reveal | — | table + 1 note |
| 8 | Notes from the round | social proof | `#F2F2F2`; 3 story cards (2 columns text + 1 photo on first card 3:2): office, bakery, dental clinic, each with a named contact and site | story-bakery | 3 × ~40 words |
| 9 | Questions `#questions` | objections | white; 6 native `<details>` rows with 1 px dashed separators | — | 6 Q&A |
| 10 | Book the install `#book` | single CTA | `#262B30` band with ribbed top; 6/6: left H2 "Book a trial install" + 2 lines + teal button to /book-a-trial/; right photo 3:2 | book-fitter-reception | ~40 words |
| — | Footer | | charcoal continued: address, hours, legal links; "Round notes" subscribe slot (newsletter form, §10) | — | |

Home image slots: 4 (hero) + 4 (sites) + 1 + 1 + 1 + 1 + 1 = **13** (≥ 8), all distinct. Home English word count target ≥ 400 (≥ 250 required), ≥ 3 narrative paragraphs in block 3.

### Comparison with recent themes
| Theme | Home order | Shikii Mats differs because |
|---|---|---|
| Zaseki Panel | tilted 3-col hero → label rail → numbered rows → parallax docked band → tile directory → definition table → price band → news → questions | our hero is an abutting split collage with headline below and booking bar (not tilted); no numbered rows, no directory, no news |
| Yubi College | diagonal-ribbon hero → 2×2 → table → horizontal scroll week → band → graduates → fees → letters → CTA | no ribbons, no 2×2, no horizontal scroller; round is a 4-cell track |
| Otonoha Acoustics | diagonal split + timeline → marquee cards → two-column text → sticky-media → report → band → fees → booking | no marquee, no sticky media, no diagonal split |
| Soroe Clinic | thread-line hero → news → worries → staircase → band → numbers → notes → fees → team → hours → letters | no staircase, no team grid, no news rows at top |
Shared generic parts (a parallax band, a price table) are placed differently (band after the round, price table directly after the dark offer list) and carry the dashed/yellow-rule/ribbed vocabulary unique to this theme.

---

## 4. Inner pages (≥ 8 pages + 1 post)

All inner pages: 2-tile mini collage hero with threshold line (T1), title below, H2 yellow rules and dashed rows (T3), T2 track where noted. Footer subscribe slot on all.
1. **Sites we serve** `/sites/` — offices, shops, clinics, showrooms: one dashed-row section each with photo (site-* images), typical mat sizes, mini track. (T1, T2, T3)
2. **The round** `/the-round/` — four-week cycle week by week, what the fitter does, wash & inspection at the depot, wet-week extra swap. Large track. Images: fitter-van-swap, depot-wash. (T1, T2, T3)
3. **Mats & sizes** `/mats-and-sizes/` — 4 size cards (85×150, 115×180, 150×240, logo mat) on flat pale ground, mini track, care notes as dashed rows. Image: mat-rolls. (T1, T2, T3)
4. **Prices** `/prices/` — full price table (§7), what is included, extra swap visit, no-contract terms. Image: measure-doorway. (T1, T2)
5. **About** `/about/` — founded 2014, the depot, six named people (text cards, no 4-person grid photo), company history as dashed rows. Image: depot-wash, depot-front. (T1, T3)
6. **Book a trial** `/book-a-trial/` (booking) — what happens on install day, large track for the trial month, **form slot (contact kind) with mailto fallback**, short questions. Image: book-fitter-reception. (T1, T2, T3)
7. **Contact** `/contact/` — depot address, hours, phone, email, **form slot** with mailto fallback. Image: depot-front.
8. **Round notes (newsletter / waitlist)** `/round-notes/` — independent subscribe page: early-access to new districts on the round; email + submit slot.
9. **News** `/news/` (posts page, empty content) — role `posts`.
10. **Privacy** `/privacy/`, **Terms of hire** `/terms/`, **Thanks** `/thanks/` (line-only hero).
- Post: "What a wet week does to an entrance" (category Round notes, tags wet-weather, offices) featured image post-wet-round.

---

## 5. Colour (reference roles kept, `[tok a]`)

| Role | Hex | Source | First-screen share |
|---|---|---|---|
| Ground | #FFFFFF / #F2F2F2 | ref exact | ~55 % |
| Text | #333333 | ref exact | thin |
| Main dark (mat charcoal: threshold line, dark bands, arrow tabs) | #262B30 | replaces ref teal band role | ~4 % (photos carry the rest) |
| Secondary (anchor bar, primary button, link text) | #1B6F93 | ref main teal, exact | ~6 % |
| Mid neutral (dashes, chips text, muted) | #A6A6A6, borders #D8D8D8 | ref exact | ~3 % |
| Slate (row hex, small labels on dark, pale band `#DCE1E5` for ribbed strip) | #7D8B96 / #DCE1E5 | design-plan row blue-mouse slate | ~2 % |
| Accent (rules, marker, segment) | #FFC000 | ref exact | < 1 % |

- Reason for the one change: the reference's large teal photo band would put a saturated colour behind the hero; the plan row asks for a quiet slate family and low-key photos, so the band role goes to charcoal and the teal stays at its nav-bar size (≈ reference 4 % + button). Reference nav blue #3177C7 is not used (teal takes its place) to keep one saturated hue.
- **First-screen saturated share: target ≤ 10 %, hard cap 15 %** (check-first-screen.py), well under the row's 30 % note. Photos must be low-key, desaturated.
- Contrast: white on #1B6F93 = 5.6:1 OK; #333 on #F2F2F2 OK; #FFC000 is decoration only, never text.

## 6. Type (sans)

- Latin display: **Manrope** 700/800. Latin body: **Public Sans** 400/600/700. Both via theme.json `fontFamilies` + `fontFace` (woff2 in assets/fonts, listed in theme-meta.json with licence; OFL) so editor and front end match.
- Stacks:
  - display: `"Manrope", "Public Sans", system-ui, sans-serif`; zh-TW: `"Manrope", "Noto Sans TC", "PingFang TC", "Microsoft JhengHei", sans-serif`; ja: `"Manrope", "Noto Sans JP", "Hiragino Sans", "Yu Gothic", sans-serif`.
  - body: `"Public Sans", system-ui, sans-serif`; zh-TW body: `"Public Sans", "PingFang TC", "Microsoft JhengHei", sans-serif` (no bundled zh/ja font in body, per repo gate); ja body: `"Public Sans", "Hiragino Sans", "Yu Gothic", "Meiryo", sans-serif`.
  - Noto Sans TC / JP subsets (weights 700) loaded through theme.json fontFace; `:lang()` rules require inc/editor-lang.php. Use the Hokuto/Hada subset workaround.
- Scale (rem at 16 px): H1 **4.5rem** / 800 / lh 1.08 / -0.02em (mobile 2.6rem) — largest, ≥ 4.25 ✓; H2 2.25rem / 700 / lh 1.25 (ref 26 px bold → enlarged for landing) + 8 px pad + 1 px yellow rule `[tok b]`; H3 1.125rem / 700 / lh 1.4 `[tok b: 16/700/1.4]`; body 1rem / 400 / lh 1.7 (ref 1.4 is too tight for long copy); small 0.8125rem / lh 1.4 `[tok b: 13]`; eyebrow 0.8125rem / 600 / 0.08em uppercase (ref "PICK UP" uppercase label). zh/ja: ~0.75× headings, body lh 1.85; de/fr `hyphens: auto`.

## 7. Fixed facts (same on every page and language)

- Location: depot at **Unit 4, Canal Yard, Easton** (fictional, international neutral). Phone +00 20 7000 4410, email **round@shikiimats.example**.
- Founded **2014**. Rounds Mon–Sat; installs start **06:30**. Depot desk **Mon–Fri 07:00–17:00, Sat 07:00–12:00**, closed Sunday.
- Round: every **4 weeks**; install takes **about 20 minutes**; trial = **one site, one month (install + one swap visit)**.
- Process (4 steps): 1 Book a trial → 2 Measure & install → 3 Week-4 swap → 4 Keep, resize or stop (no fee).
- Prices (per mat, per 4-week round; table 6 rows):
  | Item | Price |
  |---|---|
  | Trial month — one 85 × 150 cm mat, install + one swap | €19 |
  | Standard 85 × 150 cm | €24 / 4 weeks |
  | Large 115 × 180 cm | €34 / 4 weeks |
  | Lobby 150 × 240 cm | €52 / 4 weeks |
  | Logo mat 85 × 150 cm | €39 / 4 weeks |
  | Extra swap visit (wet weeks) | €12 |
- People (6): Mara Okafor (founder), Tomas Lindqvist (round lead), Priya Raman (fitter), Jonah Weiss (fitter), Liesel Brandt (wash & inspection), Ana Ferreira (customer desk).
- Stories (3): Northgate Offices lobby (Daniel Mensah, facilities), Hearth & Crumb bakery (Sofia Marin, owner), Easton Dental (Dr. Lena Kowalski) — fictional, no outcome claims or numbers beyond the fixed ones.

## 8. Images (18; STYLE fixed; ★ = home)

STYLE: `Low-key documentary photograph, dim natural daylight, early morning, cool grey-blue tones with charcoal and slate, wet surfaces with soft reflections, shallow depth of field, 35mm lens, muted desaturated colour, quiet and orderly, plain unbranded workwear in charcoal, diverse adults, modern international city, no text, no logos, no signage lettering, no brand marks, no Japanese elements`

| # | File | Subject / composition | Ratio | Used on |
|---|---|---|---|---|
| 1 ★ | hero-fitter-door.webp | Fitter kneeling, unrolling a charcoal mat just inside a glass shop door; wet pavement visible through the glass; sill line at 58 % height | 4:3 (crop tall) | Home hero tile B |
| 2 ★ | hero-wet-pavement.webp | Wet pavement with faint shoe-prints, tall vertical crop, from above | 2:5 | Home hero tile A |
| 3 ★ | hero-glass-door-rain.webp | Glass entrance door from outside, rain beads, dim interior | 16:9 | Home hero tile C; Contact mini hero |
| 4 ★ | hero-mat-pile.webp | Close-up of dry charcoal mat pile on a floor edge, inside | 16:6 | Home hero tile D; Mats hero |
| 5 ★ | site-office.webp | Office lobby entrance, mat inside revolving/glass doors | 1:1 | Home #sites; Sites page |
| 6 ★ | site-shop.webp | Small boutique doorway with a slate mat | 1:1 | Home #sites; Sites |
| 7 ★ | site-clinic.webp | Clinic reception entrance with mat, calm | 1:1 | Home #sites; Sites |
| 8 ★ | site-showroom.webp | Showroom entrance, wide mat, polished floor | 1:1 | Home #sites; Sites |
| 9 ★ | why-grit-step.webp | Shoe stepping onto a mat, grit and water on the pile | 4:5 | Home block 3; post |
| 10 ★ | fitter-van-swap.webp | Fitter rolling a used mat into the back of a plain van at dawn | 3:2 | Home block 4; The round |
| 11 ★ | band-shop-dusk.webp | Wide street view of a shop doorway at dawn, wet street, lights inside | 21:9 | Home block 5 (parallax) |
| 12 ★ | story-bakery.webp | Bakery entrance at opening, owner arranging a mat | 3:2 | Home block 8 |
| 13 ★ | book-fitter-reception.webp | Fitter with clipboard at a reception desk, mat in foreground | 3:2 | Home block 10; Book a trial |
| 14 | depot-wash.webp | Depot wash & inspection room, mats hung on rails | 3:2 | The round; About |
| 15 | mat-rolls.webp | Four rolled mats charcoal/slate on a flat pale grey ground | 3:2 | Mats & sizes |
| 16 | measure-doorway.webp | Tape measure across a doorway floor | 3:2 | Prices; Book a trial mini hero |
| 17 | depot-front.webp | Depot loading door, morning, plain building | 3:2 | About; Contact |
| 18 | post-wet-round.webp | Fitter walking a wet street at dawn carrying a rolled mat | 3:2 | Post featured image; News list |

≤ 300 KB, ≤ 2000 px, webp, no cut-outs, no duplicates within one page. Hero tiles must read as one set (same light).

## 9. Scroll effects (sp-scroll) and parallax

| Block | Class | Reference source & behaviour | Our timing |
|---|---|---|---|
| Home 2 site cards (and Sites page cards) | parent `sp-stagger`, each card `sp-reveal sp-reveal--up` | biz.duskin.jp four-up rail, bxSlider auto-advance one card per move, ~4 s pause, swing `[tok g]` → cards enter one after another | 0.8 s `cubic-bezier(.23,1,.32,1)`, 0.12 s step, `--sp-dist: 24px` |
| Home 4 track + figures; Home 6 list | track row `sp-reveal sp-reveal--left` (20 px); figures `sp-reveal sp-count` | duskin "swap every four weeks" badge → the round moves along; page-top fadeIn 400 ms | 0.8 s; count 1.2 s easeOutCubic |
| Hero tile B; Home 5 band | `sp-parallax` | reference has no parallax; its horizontal rail motion is transposed to vertical drift | tile B `--sp-par: 6%` (mobile 4%); band `--sp-par: 10%` (mobile 6%) |

- **Parallax (required):** (a) Home block 5 — Group `sp-parallax` full-bleed 520 px (mobile 360 px), moving layer = band-shop-dusk image (direct `img`), foreground = docked white caption panel as a sibling outside the moving layer, `--sp-par: 10%`, mobile 6%. (b) Hero tile B — wrapper Group `sp-parallax`, layer = hero-fitter-door, `--sp-par: 6%`, mobile 4%; the threshold line and chips are NOT in the moving layer. Both off under reduced-motion, `?sp-static`, editor.
- Hero: no `sp-reveal`. Forms, price table, legal text: no reveal. `<details>` accordions: native, no motion class (ref slideToggle 400 ms dropped). Anchors: `html { scroll-behavior: smooth }` under `prefers-reduced-motion: no-preference` (ref 500 ms swing).
- `.sp-reveal` count ≤ 60 % of home blocks.

## 10. Forms (form contract v1 — steps/form-contract-v1 exists)

- Copy pipeline/assets/forms/shippress-forms.php → inc/, CSS + editor JS → assets/, require in functions.php. No fake forms, no backend.
- **Book a trial** (`/book-a-trial/`, booking) and **Contact** (`/contact/`): PHP pattern calls `shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) )`, where `$fallback` is the buffered literal mailto button `mailto:round@shikiimats.example?subject=…` (label `contact_email`). Never fall back to a link to /contact/. Placed below the "what happens on install day" text, in a `#F2F2F2` panel, 720 px max width.
  - Recommended CF7/WPForms fields (documented in readme, not created by the theme): name*, business name*, site type (select: office / shop / clinic / showroom / other), site address & postcode*, doorway width (cm), preferred install date, email*, phone, message.
- **Round notes** (`/round-notes/`, newsletter page, standalone) and the **footer subscribe strip** on every page (incl. home, below the fold): `shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'round@shikiimats.example', 'label' => _t('forms_email'), 'submit' => _t('forms_subscribe'), 'notice' => _t('forms_mail_notice'), 'subject' => _t('forms_mail_subject') ) )`. No plugin → required email input + submit, native mailto POST; notice: "Opens your email app. Send the request to join the round notes; you are not subscribed yet." MailPoet (explicit id) → MC4WP first form → CF7/WPForms only via explicit `shippress_form_id`.
- Tokens (style.css): `--sp-form-accent: #1B6F93`, `--sp-form-on-accent: #FFFFFF`, `--sp-form-radius: 0`, `--sp-form-focus: #FFC000` (2 px outline, 2 px offset), `--sp-form-surface: #FFFFFF`, `--sp-form-text: #333333`. Dark footer (#262B30): `--sp-form-surface: #2F353B`, `--sp-form-text: #FFFFFF`, border `#7D8B96`, accent stays teal with white text. Inputs 48 px high, 1 px `#A6A6A6` border, labels Public Sans 14/600 above fields. Error: 1 px `#B3261E` border + message text inherits; success: 4 px `#1B6F93` left stub, text inherits section colour.
- i18n: keys `forms_email`, `forms_subscribe`, `forms_mail_notice`, `forms_mail_subject`, `contact_email` in inc/i18n/en.php first, then zh-TW, ja, fr, de (localised, not literal); `L10N_SEMANTIC=1` at extraction.
- No form in the home first screen; no reveal on any form.

## 11. Responsive rules

- 390 px: no vertical text, no absolutely positioned labels over text (hero chips hidden <782 px). Collage 2 × 2. Anchor bar one scrolling row (no reveal inside it). Booking bar stacked. Cards 1 column (2 at ≥600 px). No horizontal overflow.
- Price table ≥ 782 px: table full container width (`width:100%`, `table-layout: auto`), price column `white-space: nowrap; text-align: right`, min-width 9rem — never clipped at 800 and 1280. < 782 px: every table stacks (each row a block: item on one line, price below, right-aligned, dashed separator).
- Dark bands keep ≥ 4.5:1 contrast.

## 12. Similarity target (≈ 80 %) — reference vs ours

| Dimension | Reference value `[tok]` | Shikii Mats value |
|---|---|---|
| Ground | #FFFFFF / #F2F2F2 ~53 % (a) | same hex, ~55 % |
| Main saturated | teal #1B6F93 band ~9 % (a) | #1B6F93 anchor bar + buttons ~6 % |
| Nav bar | 45 px blue bar under 70 px white header (c) | 45 px teal bar under 70 px white header |
| Accent | #FFC000 1 px rule < 1 % (a, f) | #FFC000 1 px H2 rule + 40 px segment + marker < 1 % |
| Borders | 1 px #D8D8D8, dashed rows (d, f) | same |
| Radius / shadow | 0 / none (d) | 0 / none everywhere (buttons, cards, photos, inputs) |
| Container / gap | 1200 / 40 px (c) | 1200 / 40 px |
| Card | 270 × 270 1:1, title below, 40 px dark square arrows (e) | 270 × 270 1:1, title below, 40 px #262B30 square arrow tab |
| Hero photos | 3 abutting, different widths, on one band (e) | 4 abutting, 18/40/42 %, 0 gap |
| H2 | 26 px / 700 / 1.4 + 8 px + 1 px yellow (b) | 36 px / 700 / 1.25 + 8 px + 1 px yellow |
| H3 / small | 16/700/1.4; 13 px (b) | 18/700/1.4; 13 px |
| Body | 16 px / 1.4 (b) | 16 px / 1.7 |
| Section padding | 75–95 / 30 px (c) | 88 / 64 px |
| Motion | rail 1-by-1 swing ~4 s; fade 400 ms; scroll 500 ms (g) | stagger 0.12 s, 0.8 s; parallax 6–10 %; smooth scroll |
| Imagery | documentary staff-at-door photos, product on flat ground (e) | same types, low-key |
Changed on purpose: H1 size (landing needs ≥ 4.25rem), body line-height (readability), teal band → charcoal (plan row quiet palette).

## 13. Home acceptance checklist

- [ ] First screen = collage / below-photo / booking-bar; no text over photos except the two ≥782 px chips; everything above 900 px at 1440.
- [ ] Tiles abut (0 gap), widths 18/40/42 %, 4 px threshold line at 58 % with yellow segment.
- [ ] KV items 1–6 visible; hero-fitter-door shows a kneeling fitter, a mat and wet pavement outside.
- [ ] Teal anchor bar is the only top menu; anchors #sites #round #trial #prices #questions #book work.
- [ ] CTA label "Book a trial install" identical everywhere; links to /book-a-trial/.
- [ ] T2 track on site cards, round block, trial list; T3 yellow H2 rules + dashed rows + ribbed edges.
- [ ] ≥ 8 (planned 13) distinct images on home; no cut-outs; low-key consistent STYLE.
- [ ] Home ≥ 250 English words, block 3 has 3 paragraphs ≥ 20 words.
- [ ] Prices identical to §7 on home, Prices page, Book page, five languages.
- [ ] Price table full width at 800/1280, price column nowrap right; stacks on 390.
- [ ] sp-parallax on hero tile B and block 5 passes check-parallax (≥ 6 px desktop and mobile, 0 under reduced motion); hero has no sp-reveal; forms/table not revealed.
- [ ] First-screen saturated share ≤ 15 % (target ≤ 10 %).
- [ ] Manrope / Public Sans load in editor and front end; zh-TW/ja use Noto Sans TC/JP headings.
- [ ] Footer newsletter slot renders email + submit without plugins; not in first screen.
- [ ] auto-gates en pass at 390 / 800 / 1280.
