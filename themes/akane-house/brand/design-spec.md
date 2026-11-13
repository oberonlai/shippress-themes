# Akane House — design spec (stage 1, design director)

Type: **hospitality** (category food-drink; WooCommerce-compatible but not required, the site works fully without it). Industry: a neighbourhood gastropub that keeps one room open from the lunchtime pie to last orders.
Primary reference: **https://coffee-shimeno.com/** (Coffee Shimeno, small roastery; dark documentary photography on a quiet grey paper ground). Tokens: `brand/reference-tokens.md`, cited as **T(a)…T(g)**. Screens: `ref/cs-first.png`, `ref/cs-s900.png`, `ref/cs-s1800.png`, `ref/cs-s2700.png`, `ref/cs-s3600.png`, `ref/scroll-cs-parallax-before/after.png`, `ref/scroll-cs-section-before/after.png`. Secondary: none.
**Imagery: photo** (stage-a IMAGERY = photo). One real-photography STYLE string, **dark low-key documentary** (§10), as in the reference. The reference photographs beans on plates, a roaster, a forest and a lit room in snow. We photograph the bar, the pass, plates, glasses and the long room. 0 cut-outs.
Font direction: **serif**. Latin display **Cormorant Garamond**, Latin body **Libre Baskerville**; zh-TW / ja headings **Noto Serif TC / Noto Serif JP** (Mincho), body system Mincho/Song stacks. No sans-serif anywhere except the browser's form-control defaults, and those are overridden too.
Similarity target: about **80%** to the reference in palette relationships, image treatment, motion, decoration and layout rhythm. Photographs, copy and logo are all ours.
Header: exactly one top menu (`core/navigation`), on the reference's **4-equal-column** header grid. Row page structure: **day-schedule**: the home page and The Day page are organised by the sittings of one day.
Class prefix: `ak-`. Pattern slugs `akane-house/<name>`.

---

## 1. Signature techniques (3, obvious at a glance, none may be softened)

Stage-a candidates C1–C5. **C1** (dark intro layer) is the **key visual** (§2) and is built in the hero. The three signatures counted are **C2, C3 and C4**. **C5** (grain) is supporting decoration. Why C1 is not counted as a signature: Enishi Catering and Nagisa Grill already used "full-bleed photo + info bar" heroes (used-refs.txt). Our hero has to be visibly different from both. It has no pill, no foot wordmark and no big title, and the slash numbering of C2 starts in its info bar. The signatures that make the site recognisable are the paper-side ones below.

### S1 (C2): Slash-numbered chapter heads, heading left, text pushed to 50%
- **Source**: coffee-shimeno.com "02/ Coffee Shimeno" and "03/ Four Seasons" (`ref/cs-s2700.png`, `ref/cs-s3600.png`, T(b), T(c), T(f)). On the grey paper, every section opens with a **small head line in the left column**: a 20px number, a slash, a 40px gap, then the label ("02/ Coffee Shimeno"). Under it is a **40px / 44px heading of 2 lines** at x 20, about 590 wide. The **body text starts exactly at the page's 50% line** (x 730, width 690). It is preceded by a small bracketed sub-title ("( … )", T(f) SVG bracket glyph). Below the heading sits an arrow text link ("About Coffee Shimeno →"). There are no rules, no boxes and no cards, and there are ~155px of empty paper above each head and ~300px below the section. In "Four Seasons" the same head turns into **three columns**: text at the left (x 20, w 335), a square photo in the centre (x 497, w 446) and the bracketed sub-title with text at the right (x 1085, w 335). The left text stays **sticky** while the photo passes.
- **Ours** (home §3, §5, §7, §8, §9; every inner page): the same head line, `ak-chapter__head`, a Group with 2 paragraphs in a row: number + slash **"02/"** in Cormorant Garamond 500 1.25rem (20px), with a 40px gap before the label "The sittings" (Cormorant 500 1.25rem). The heading below is h2, Cormorant Garamond 500 **2.75rem / 1.1** (44/48px), ls −.01em, `#1A1417`, max 590px, 2 lines. The right column starts at **50%** (x 730 at 1440). It opens with the bracketed sub-title "( a day in one room )": Cormorant italic 1.125rem, brackets drawn as **4×24px SVG glyphs** (inline `<svg>` in the markup, not CSS content), 12px from the words. Under it is the body ¶ (Libre Baskerville .9375rem / 1.75, `rgba(26,20,23,.78)`), with ¶ gaps of 1.25rem. The text link is "See the whole day →" (Cormorant 500 1.25rem, arrow 14px inline SVG, 1px underline only on hover). Sections are separated by paper only: **padding 155px top / 200px bottom** (T(c) 155 / 300, shortened because we have more sections). The "A day at the house" chapter (home §5) uses the **three-column sticky layout** (§3 table).
- **Must not soften**: the head line is **number + slash** ("02/"), never "02." or "No. 2" or a badge; the body column starts **exactly at 50%** at ≥1024 (not 60/40, not centred); headings stay **≤2.75rem, weight 500, sentence case** (no caps, no tracking); **no rules, boxes, cards or background tints** around chapters; the bracket glyphs are real thin brackets, not parentheses typed in a heavier weight.

### S2 (C3): Ragged 4-up tile row, mixed ratios, caption above each photo
- **Source**: coffee-shimeno.com product row (`ref/cs-s1800.png`, T(c), T(e)). There are **4 columns of 335px with 20px gaps** across the full width (20px outer gutter). Each tile is a two-line caption *above* the photo ("Number:03 / Price: 1,800 yen", 16.5px, ls +.03em, 14px above the photo) and then a photo with **no radius, no shadow, no border**. The photos have **different ratios** (0.67–1.5), are **top-aligned**, and their **bottoms are ragged**. Colour comes only from the photos.
- **Ours** (home §4 "The sittings", home §7 menu pair; The Day, Menu, The Bar, About): `ak-tiles`, a Columns block (4 equal columns, gap 20px, `align-items: flex-start`, full width minus the 20px gutters). Each column holds a caption (2 lines, Libre Baskerville .9375rem / 1.5, ls .03em, `#1A1417`: line 1 **"12:00–15:00 / Lunch"**, line 2 **"Pie of the day, £16"**) with a 14px gap, then `figure > img` with **radius 0**. Home §4 ratios, in order: **P02 0.75 (3:4) · P03 1.33 (4:3) · P04 0.67 (2:3) · P05 0.88**. Set them with `aspect-ratio` on the img and `object-fit: cover`. The bottom edges must differ by ≥120px between the highest and lowest. The 2-tile variant (home §7, Menu, The Bar) uses columns 1–2 with ratios 0.83 and 1.33, and text in columns 3–4.
- **Must not soften**: **4 tiles at ≥1024**, never 3; the ratios **differ** (never equalised to one crop); tiles are **top-aligned with ragged bottoms**, not a masonry or equal-height grid; the **caption sits above** the photo, not over it or below it; **radius 0**, no hover zoom, no card background.

### S3 (C4): Letterbox parallax band, then the near-black reservation band
- **Source**: coffee-shimeno.com full-bleed band (`ref/cs-s3600.png`, `ref/scroll-cs-parallax-before/after.png`, T(e), T(g)). Between paper chapters there is **one full-bleed photo band, ~1440×380 (≈3.8:1)**. The image drifts **+70px** (GSAP scrub, start "top 80%", end "bottom 20%"; mobile 30px). It has no text and no overlay. Near the bottom of the page a **solid near-black band (#191919)** holds a white heading and a white text link to the reservation page.
- **Ours** (home §6 band + home §10 reservation band; every inner page except Book): `ak-band`, a Cover block, full width, **height 380px at 1440** (`min-height: 26.4vw`, min 220px), `sp-parallax` with `--sp-par: 10%` (mobile 6%). Its background is a low-key photo: **P06** (the long room) on the home page; each inner page's own band photo is listed in §4. Dim overlay 0 (the photo is already low-key), **no text**, `aria-hidden` on the decorative image (alt = ""). The **reservation band** `ak-reserve` (template part, used on every page except Book) is a Group with ground **#211A1E** and padding 120px 20px. On the left, at 50%: head line "08/ Reservation" in `#E8E3E6`, then h2 "One table, one way to book it." (Cormorant 500 2.75rem `#F4F1F3`). On the right, starting at 50%: one ¶ (≈35 words, `rgba(244,241,243,.75)`) and a white text link "Book a table →" (Cormorant 500 1.5rem, 1px underline offset 6px). The C5 grain is on this band too.
- **Must not soften**: the band is **full-bleed, edge to edge, no inset, radius 0**, ratio ≈3.8:1 at 1440 (never a 16:9 hero-like block); **no text on the band**; the parallax is **visible** (≥6px measured); the reservation band is **near-black**, not plum, not grey, with **white** type, and holds **one** link.

### Supporting decoration (always on)
- **C5 grain** (T(f), T(g)): a static SVG `feTurbulence` noise (baseFrequency .9, numOctaves 2, 200×200 tile) as a **data-URI background-image** on `.ak-grain::after { content: ""; position: absolute; inset: 0; pointer-events: none; opacity: .07; mix-blend-mode: overlay; }` (empty `content` only, no text). It is used on the hero, the reservation band and the footer. Static, so reduced motion is unaffected. The reference animates 10 random frames; we do not, because we write no scroll/rAF code.
- **Arrow text links** "… →" everywhere instead of buttons. The only filled button is the form submit.
- **No lines** as decoration (T(f) "No lines"). Hairlines appear only in the price/hours tables and in the footer.

### Continuation on inner pages (all 9 content pages + Journal; at least 4 required)
Every inner page uses **the inner page head** `akane-house/page-head`. On paper: the header in ink, then 155px, then the S1 head line "NN/ Page name", an h1 (Cormorant 500 3.25rem, ≤2 lines, left column) and the lead (≤40 words) in the right column at 50% with the bracket sub-title. Directly under that comes **the S3 letterbox band** (the page's head photo, 1440×380, `sp-parallax --sp-par: 6%`). Then the page body is S1 chapters. Every page ends with the S3 reservation band (except Book) and the footer.
| Page | S1 slash chapters | S2 ragged tiles | S3 band (head photo) + reservation band | Notes |
|---|---|---|---|---|
| The Day (`the-day`) | 01/ At a glance + 02/–06/, one per sitting | 4 tiles (P02 P03 P04 P05) in 01/ | P13 band · reserve | Sunday chapter is three-column sticky (P14) |
| Menu (`menu`) | 01/ Lunch … 04/ Sunday | 2 tiles (P09, P14) | P04 band · reserve | full price table (no reveal) |
| The Bar (`bar`) | 01/ Cask · 02/ Taps · 03/ Wine and soft | 2 tiles (P10, P07) | P05 band · reserve | 6 lines listed |
| About (`about`) | 01/ The building · 02/ 2014 · 03/ The day | 4 tiles (P15, P13, P16, P11) | P06 band · reserve | daily-routine ¶ |
| People (`people`) | 01/ Front · 02/ Kitchen · 03/ Bar | — | P16 band · reserve | 7 people as ruled rows |
| Private Room (`private-room`) | 01/ The room · 02/ Menus · 03/ How to ask | — | P12 band · reserve | links to Book |
| Visit (`visit`) | 01/ Finding us · 02/ Hours · 03/ Access | — | P11 band · reserve | hours table |
| Book a table (`book`) | 01/ How booking works · 02/ The form · 03/ Same day | — | P08 band · **no reserve band** | contact form slot |
| The House Letter (`letter`) | 01/ What's in it · 02/ Subscribe | — | P17 band · reserve | newsletter slot on ink |
| Journal / single / archive / category / tag | template head: S1 head line + h1, no band; single uses its featured image as the band | — | reserve | posts as S1-style rows |
(S1 on 10/10, S2 on 4 pages, S3 on 9 pages. The same photo never appears twice on one page; see §10.)

---

## Key visual concept

**(1) Reference first screen, story and signature motion.** Coffee Shimeno opens on a **full-viewport, near-black field** (`ref/cs-first.png`). A **blurred monochrome still** fills it: a swirl of light, like crema or steam caught in motion, bright at the upper left and falling into black at the right. **Dead centre** sits a small, thin, high-contrast serif wordmark, "Coffee Shimeno", ~30px, white. Nothing else is there: no menu text over the image at first, no button. A **film-grain canvas** flickers over everything. **Story:** *a quiet, almost dark room before you step in. Coffee is a slow, personal moment, and nothing is being sold yet.* **Signature motion:** the dark layer holds while you begin to scroll, the wordmark dims (`ref/cs-s900.png`), and the whole layer **fades out (opacity .5s)**. The **grey paper page with numbered chapters** takes over, and the fixed header shows four columns in ink. The grain stays.

**(2) Our translation: a neighbourhood gastropub.** The same near-black, full-viewport field shows a **dark low-key photograph of the bar at the hour between lunch and evening**. Mid-frame, a **bartender pulls a pint at the brass tap**, the beer half-poured and catching the only light. **Behind, through the hatch, the cook sets a plate on the pass** under one warm lamp, slightly out of focus. Window light from the left grazes the brass. Everything else falls into **aubergine-black shadow**, so the frame is dark the way the reference swirl is dark: one bright zone at the upper left, black at the right. **Dead centre**, over the darkest part, sits the **small thin serif wordmark "Akane House"** in white. Under it is one quiet line, "Open from the lunchtime pie to last orders". At the very bottom, **the day itself is written as four slash-numbered sittings** (the first appearance of S1): "01/ Lunch 12:00–15:00 · 02/ Afternoon 15:00–18:00 · 03/ Dinner 18:00–21:30 · 04/ Bar until 23:00". Same image type: one low-key documentary photograph, shallow focus, single practical light, grain. Same position: full viewport, wordmark at centre. Same story: *a quiet room that stays open all day; you are let in before anything is sold.* Same motion concept: the dark photo layer **drifts slower than the page** (parallax 8%) as the grey paper page rises over it, and the paper chapters slide in. The fade becomes a hand-over from dark to paper. The 900px hero ends on a hard edge, so the paper chapter "01/ The house" begins right where the dark layer is leaving.

**(3) KV checklist** (all six are built in the home first screen at 1440×900 and visible without scrolling):
| # | Reference element | Our version | Position (1440×900) | Motion | Image |
|---|---|---|---|---|---|
| 1 | Full-viewport near-black field holding one blurred low-key still, bright upper-left, black right | Cover `ak-hero`, 100svh (min 640, max 1000), background **P01** (bartender pulling a pint at the tap, cook at the pass behind, low-key, bright zone upper-left), overlay `#1A1417` at **35%** opacity, `object-position: 40% 45%` | x 0–1440, y 0–900 | `sp-parallax` on the Cover, `--sp-par: 8%` (mobile 5%); no reveal | **P01** |
| 2 | Small thin serif wordmark, white, dead centre | h1 "Akane House", Cormorant Garamond **300** 2.5rem (40px), ls .01em, `#F4F1F3`; under it (16px) a ¶ "Open from the lunchtime pie to last orders" Cormorant italic 400 1.125rem `rgba(244,241,243,.72)` | centred, wordmark baseline at y ≈ 450 | none (hero gets no reveal) | — |
| 3 | Fixed 95px header, 4 equal columns, no background (wordmark / About / Record · Products / Store + Cart) | Home header `ak-header--over`: absolute over the hero, 95px, transparent, 4 equal columns (20px gutter, 20px gaps): col 1 small wordmark "Akane House" (Cormorant 500 1.375rem), cols 2–4 one `core/navigation` spread over the three columns: "The Day · Menu · The Bar" in cols 2–3, "Book a table" in col 4, right-aligned; all `#F4F1F3`, Libre Baskerville .875rem | y 0–95 | none (scrolls away with the hero; inner pages have the same header in ink on paper) | — |
| 4 | Fade-through from the dark layer to the grey paper page, whose first numbered chapter appears | **Info bar** `ak-hero__bar` on the hero's foot: 4 equal columns aligned to the header grid, 1px top rule `rgba(244,241,243,.28)`, padding 22px 0 28px; each column holds a slash head "01/ Lunch" (Cormorant 500 1.125rem) over "12:00–15:00" (Libre Baskerville .8125rem, ls .03em, `rgba(244,241,243,.72)`). Directly after the hero, on `#DDD9DC`, comes chapter **"01/ The house"** | bar y ≈ 810–900; chapter starts at y 900 | bar: none; the chapter text below slides in (`sp-reveal--up`) | — |
| 5 | Film-grain canvas over everything | C5 static grain `.ak-grain` on the hero (opacity .07, overlay) | whole hero | static | — |
| 6 | Header link to Online Store / Reservation | "Book a table" as the last nav item in header col 4 (1px underline offset 6px) → `/book/`; repeated in the reservation band | header col 4, x ≈ 1300–1420, y 47 | none | — |
"Adapted, not copied" here means we do not copy the reference's photograph, wording or logo. The scene (one dark still, a small centred wordmark, a dark layer handing over to paper chapters) is kept.

---

## 3. Home page: block order

Grid (T(c)): **20px outer gutter**, 4 columns, 20px gaps (col ≈335px at 1440), body column at **50%**. Paper sections: padding **155px top / 200px bottom** (mobile 88 / 112). Body copy ≈ 640 English words; narrative paragraphs ¶ (≥3 of ≥20 words) are in §3 (2), §5 (2), §7 (1), §8 (1) and §10 (1).

| # | Block (pattern slug) | Purpose | Layout | Photo(s) | Copy | Motion |
|---|---|---|---|---|---|---|
| 1 | Header (template part `header-over` on home; `header` elsewhere) | brand + the one menu | 95px, 4 equal columns (KV #3); transparent over the hero on home; inner: ground `#DDD9DC`, ink text, `position: relative` (not sticky: the reference is fixed, but a transparent fixed bar over dark photos and paper alternately needs a scroll listener, which we may not write) | — | wordmark + 4 links | none |
| 2 | `hero` | **KV** (§2) | full-bleed Cover 100svh, wordmark centred, info bar at the foot | P01 | wordmark, 1 line, 4 × (slash head + time) | parallax 8% |
| 3 | `house` (S1) | **narrative**: one room, all day | head "01/ The house"; left: h2 **xx-large 4.25rem** Cormorant 500 / 1.05 "One room on Tanner's Row, open from noon to eleven." (3 lines in the 590 column; **the only xx-large on the site**); right at 50%: bracket "( since 2014 )", 2 ¶ (≈55 + 50 words), link "About the house →" | — (pure text, as ref 02/) | ≈120 words | right column `sp-reveal sp-reveal--up` |
| 4 | `sittings` (S2) | **day-schedule**: the four sittings | head "02/ The sittings" + h2 "Four sittings, one kitchen, one bar." (left) + 1 ¶ ≈35 words at 50%; then **4 ragged tiles** across the full width (S2): captions "12:00–15:00 / Lunch" + "Pie of the day, £16" · "15:00–18:00 / Afternoon" + "Cheese on toast and a half, £12" · "18:00–21:30 / Dinner" + "Two courses, £32" · "21:30–23:00 / Bar" + "Last orders 22:45"; link "See the whole day →" under tile 4 | P02 (3:4), P03 (4:3), P04 (2:3), P05 (0.88) | ≈80 words | tile row `sp-stagger`, each tile `sp-reveal sp-reveal--up` |
| 5 | `day` (S1 three-column sticky, ref "Four Seasons") | **narrative**: how the day runs, the daily routine | head "03/ A day at the house"; **3 columns** at 1440: left x 20 w 335, **sticky** (`position: sticky; top: 48px`): h2 "Before the doors open, and after." + ¶ ≈45 words; centre x 497 w 446: **2 photos stacked**, 120px apart, **P13** 1:1 (08:30 bread and pastry, the cook's floured hands) then **P08** 3:4 (17:30 the cook at the pass); right x 1085 w 335: two entries, each aligned to its photo's top: bracket "( 08:30 )" + ¶ ≈40 words on stock, pastry and the pie of the day; bracket "( 17:30 )" + ¶ ≈40 words on the staff meal and the switch from afternoon to dinner. Parent `overflow: clip` (never `hidden`, or sticky breaks) | P13, P08 | ≈130 words | right entries `sp-reveal--up` |
| 6 | `band` (S3) | pause: the long room (**parallax** §7.2) | full-bleed Cover 1440×380, **P06**, no text | P06 | — | parallax 10% |
| 7 | `menu` (S1 + S2 pair) | the food and the prices | head "04/ The menu" + h2 "Plain cooking, written up twice a day." (left) / bracket "( lunch and dinner )" + ¶ ≈45 words + link "The full menu →" (right at 50%); then a 2-tile row in columns 1–2 (**P09** pie macro 0.83; **P10** pint macro 1.33; captions "From the kitchen / Pie of the day" and "From the cellar / House bitter, £5.40"), with the note ¶ "Prices include service. A 12.5% charge is added only for tables of eight or more." in columns 3–4, top-aligned; then the **price table** (6 items, §9 items 1–6) **at the full container width** (1400 at 1440) | P09, P10 | ≈90 words + table | tiles `sp-stagger` + `sp-reveal--up`; **table: none** |
| 8 | `people` (S1) | who runs the room | head "05/ Who's in" + h2 "Seven people, most of them here every day." (left); right at 50%: ¶ ≈40 words + a **ruled 2-column name list** (7 rows: name, Cormorant 500 1.25rem · role, Libre Baskerville .8125rem `rgba(26,20,23,.6)`; 1px `rgba(26,20,23,.16)` rules), link "Meet everyone →". **No portraits, no team grid** | — | ≈60 words | list `sp-reveal--up` |
| 9 | `visit` (S1 + photo) | where and when | head "06/ Finding us"; left columns 1–2: **P11** 3:2 (front door at dusk, warm window) radius 0; right at 50%: h2 "3 Tanner's Row, Eastbridge." + ¶ ≈30 words (tram stop, bike racks, step-free) + **hours list** (ruled 2-column: day / hours, 5 rows §9, times `nowrap`, tabular-nums) + link "Plan your visit →" | P11 | ≈50 words | photo `sp-reveal--up`; **hours: none** |
| 10 | Reservation band (part `reserve`, S3) | the single way to book | §1 S3: `#211A1E`, "07/ Reservation" head line, h2 "One table, one way to book it.", ¶ ≈35 words "Send us the day, the sitting and how many of you. We answer every request within a few hours, and we keep a table for fifteen minutes. The bar is always walk-in.", link "Book a table →" | — | ≈45 words | none |
| 11 | `letter` (S1, on paper) | newsletter (§11) | head "08/ The House Letter"; left h2 "The month's pies and guest casks, once a month." (2rem); right at 50%: ¶ ≈25 words + newsletter `shippress_form_slot` (max-width 520px) | — | ≈30 words | **none** (form) |
| 12 | `journal` (S1 rows) | latest 3 posts | head "09/ From the house"; 3 rows across the full width, each a 4-column row: date (col 1, Libre Baskerville .8125rem tabular-nums) · category (col 2, Cormorant italic 1rem) · title (cols 3–4, Cormorant 500 1.5rem) + "→"; 1px rules; no thumbnails | — | titles | list `sp-reveal--up` |
| 13 | Footer (template part `footer`) | address, hours, links | ground **#1A1417** + grain, padding 96px 20px 40px; 4 columns: wordmark (Cormorant 300 2rem) + address · hours list · contact (phone, email) · link list (About · People · Private Room · Visit · The House Letter · Journal · Privacy, plain paragraph links, **not** a second navigation); © line .75rem `rgba(244,241,243,.5)`; text `#E8E3E6` | — | | none |

**Home photo positions: 11 images, all different** (P01, P02, P03, P04, P05, P13, P08, P06, P09, P10, P11); 8 or more are required.

### First-screen composition
- **Desktop 1440×900**: Cover `ak-hero ak-grain sp-parallax` x 0–1440, y 0–900 (`min-height: 100svh`, min 640, max 1000). Background P01 (`object-position: 40% 45%`); the tap and the pint sit left of centre (x ≈ 420–620), the pass and the cook upper right (x ≈ 880–1100, y ≈ 160–420), and the centre is the darkest zone. Overlay `#1A1417` 35%.
  - Header (absolute, z 3) y 0–95: 4 columns at x 20 / 375 / 730 / 1085 (T(c) header columns). Wordmark col 1 baseline y 52; nav items "The Day" at col 2, "Menu · The Bar" at col 3, "Book a table" right-aligned in col 4.
  - Wordmark h1 centred (inner container `justify-content: center`, flex column), y ≈ 425–475; tagline 16px under it. Nothing else in the centre.
  - Info bar at the inner container's bottom (Cover inner container is a flex column with `justify-content: space-between`; the header is a separate part above): x 20–1420, y ≈ 812–900, 4 columns aligned with the header columns.
  - Grain on top (z 2, pointer-events none).
- **1024–1279**: same; info bar columns 4-up stay; nav gap shrinks; the wordmark stays 2.5rem.
- **600–1023**: the header keeps the wordmark left and the 4 links in one row at .8125rem (core navigation `overlayMenu: "mobile"`, so the toggle appears only below 600). Info bar becomes 2×2.
- **Mobile 390×844**: header 64px in flow on `#1A1417` (wordmark left, menu toggle 44×44 right; overlay `#1A1417`, links Cormorant 500 1.75rem `#F4F1F3`, 56px pitch). Hero Cover **min-height 72svh** (≈ 600px) with only the centred wordmark (2rem) + tagline (1rem) inside, centred by flex, **not absolutely positioned**. The **info bar sits after the Cover, in normal flow**, on `#1A1417` (2×2 grid, padding 20px, 1px rules), so nothing overlaps the photo text. P01 `object-position: 38% 50%` so the tap and the pint stay in frame. **No vertical writing, no absolutely positioned label, nothing overlapping text.** The first screen at 390×844 shows the header, the photo with the wordmark and the first row of the info bar.

### Comparison with recent themes' home orders (must not match)
| Theme | Home order | Akane House difference |
|---|---|---|
| Hisagi Neurology | stadium window + capsule row / disc lead / pinned symptom disc + ghost word / capsule band + cards in a disc / parallax room / before-after discs / fees / stadium-pill visit / journal / letter panel | no window or rounded shapes at all (radius 0 everywhere); dark full-bleed photo with a centred wordmark; paper chapters headed "NN/"; ragged tile row; no cards, discs, bubbles or floating card |
| Hatoba College | framed slider window + caption bar + week ticks / editorial 7/5 intro / five stage bars / instructors / stories / admissions | no slider, frame or caption bar; the intro is a 50/50 split at exactly 50%; no stacked bars; people as a ruled name list, not instructor blocks |
| Shoko Archives | looping window with diagonal edge + outlined H1 boxes / info bar / anchor-linked long form / prices / people / cases | no loop, no diagonal, no outlined boxes; our info bar is the hero's own foot row of slash sittings (not a separate strip); the long form is a three-column sticky day, not anchored chapters |
| Hojo Brokers | hatched title band + slate wedges + photo / 5/7 "what a review reads" / two-tab index / parallax yard band / fees / contact | no hatch or wedges; no tabs; our parallax band is a **text-free 3.8:1 letterbox**, not a captioned yard band; reservation is a near-black text band, not a contact block |
| Enishi Catering (food peer) | full-bleed photo + centred big serif title + outlined pill + info bar / vertical-caps course labels / boxed STEP frames | wordmark small (2.5rem, light), **no pill**; no vertical labels; no boxed steps or diagonals; grain; slash-numbered sittings |
| Nagisa Grill (food peer) | foot wordmark + info bar on dimmed film photo / wavy tide hairlines / offset photo duo + slate band | wordmark dead centre, not at the foot; no wavy lines; tiles are 4-up ragged with captions above, not an offset duo |
| Kohaku Brasserie (food peer) | three-moment cross-fade hero + timeline hairline / pinned letterbox window / plate-rim ellipse | one still (no cross-fade, no timeline hairline); our letterbox is a **full-bleed parallax band**, not a pinned window; no ellipse |
| Himuro Gelato | photo-to-paper first screen / pinned flavour viewer / lit-row band on dark grain | no pinned viewer; the dark-to-paper hand-over is plain parallax + a hard edge; S2 ragged tiles and S1 50% split are absent there |
| **Akane House** | dark centred-wordmark photo + slash sittings bar / 01 house 50% split (4.25rem) / 02 ragged sitting tiles / 03 three-column sticky day / letterbox parallax band / 04 menu pair + full-width price table / 05 ruled names / 06 visit photo + hours / near-black reservation band / letter / journal rows / ink footer | the only one built from slash heads at 50%, ragged caption-above tiles and a text-free letterbox band, at radius 0 on plum-grey paper |

---

## 4. Inner pages (9 pages + Journal + 3 posts)

Slugs are identical in all five locales. Every page has the inner page head (§1 continuation) and S1 chapters on the 4-column / 50% grid.
| Page (slug) | Role | Key content |
|---|---|---|
| The Day (`the-day`) | services / **day-schedule** core | band P13. **01/ At a glance**: the S2 4-tile row (P02 P03 P04 P05, same captions as home §4). Then one S1 50% chapter per sitting, text only (as ref "02/"): **02/ Lunch 12:00–15:00 · 03/ Afternoon 15:00–18:00 · 04/ Dinner 18:00–21:30 · 05/ Bar 21:30–23:00**. Each has h2 + bracket time + "what this sitting is for" ¶ ≈50 words + ¶ ≈40 words on what is cooked and whether you book it. **06/ Sunday 12:00–18:00** uses the three-column sticky layout with **P14** in the centre. The page ends with a ruled 2-column list "Can I book?" (Lunch yes · Afternoon walk-in · Dinner yes · Bar walk-in · Sunday yes, two seatings 12:30 and 15:00). |
| Menu (`menu`) | prices | band P04. 01/ Lunch · 02/ Afternoon · 03/ Dinner · 04/ Sunday, each with 3–5 dishes as ruled rows (dish + one-line note; price right, `nowrap`); S2 pair P09 (pie macro) + P14 (Sunday roast carving); then the **full price table, 7 items** (§9) full width; allergens note ("Tell us when you book; the kitchen keeps a written list of every dish's allergens."); service-charge note |
| The Bar (`bar`) | services | band P05. 01/ Cask (2 house casks + 1 guest, kept by Callum Reid; the cellar at 12°C); 02/ Taps (3 keg lines: lager, stout, cider); 03/ Wine and soft (12 wines by the glass from £6, 4 alcohol-free beers, house ginger beer); S2 pair P10 + P07; "Walk-in at the bar, always" ¶ |
| About (`about`) | about | band P06. 01/ The building (the 1890s lodge of the old madder dye works on Tanner's Row: the red brick that gives the house its name; "akane" is madder red) · 02/ 2014 (Ruth Okafor and Tomas Brandt reopened it as a pub with one kitchen) · 03/ The day (the **daily routine** ¶: 08:30 bread and stock, 11:00 the pie of the day goes in, 12:00 doors, 17:30 staff meal, 22:45 last orders, 23:30 the cellar is checked); S2 4 tiles P15, P13, P16, P11 with captions ("The bar, 2014", "08:30", "17:30", "The door") |
| People (`people`) | people | band P16. **7 people** (§9) in three S1 chapters (Front · Kitchen · Bar) as ruled rows: name (Cormorant 500 1.5rem), role, 2 sentences; no portrait grid; one ¶ on the 17:30 staff meal |
| Private Room (`private-room`) | services | band P12. The back room seats **8–14**; set menus £45 / £55 per person; no hire fee Tuesday–Thursday, £150 minimum spend Friday–Saturday; how to ask: through the Book page with "private room" in the note; we reply within one working day |
| Visit (`visit`) | location | band P11. Address, tram line 2 to "Dye Works" (3 minutes' walk), 6 bike stands, step-free entrance and toilet; **hours table** (stacks on mobile); dogs welcome in the bar; children until 20:00 |
| Book a table (`book`) | contact | band P08. 01/ How booking works (one way: this form or the email; phone for same-day only, 15:00–17:00); 02/ The form (contact form slot + mailto fallback, §11); 03/ Same day and walk-ins (the bar is always walk-in; tables held 15 minutes; groups over 8 → Private Room). **No reservation band on this page.** |
| The House Letter (`letter`) | newsletter | band P17. 01/ What's in it (3 ruled pairs: the month's pies · guest casks · Sunday dates and closures), first **Thursday** of each month, about 3 minutes' read, no offers or advertising; 02/ Subscribe: form slot on the ink panel (§11) |
| Journal (`journal`) | posts page (role `posts`, empty) | post list (archive template: S1-style 4-column rows with a 3:2 featured image in col 1) |
| Posts (3 stories) | article | "The Tuesday table" (a knitting group at the window table every Tuesday afternoon since 2016; featured P03; category Stories `stories`; tags `afternoon`, `regulars`) · "The pie that stayed" (the beef and ale pie on every lunch menu since the first day; featured P09; category Kitchen `kitchen`; tags `lunch`, `pies`) · "Last orders at 22:45" (why the bar stops then and what happens in the half hour after; featured **P05**, allowed because the post is its own page; category Stories `stories`; tags `bar`, `evening`) |

theme-meta `pages` / demo `screens`: home → `/`, about → `/about/`, news → `/journal/`, article → first post, category → `/category/stories/`, tag → `/tag/regulars/`, newsletter → `/letter/`, contact → `/book/`.
Top menu (the one `core/navigation`): **The Day · Menu · The Bar · Book a table** (4 items, matching the reference's 4 header slots). Footer links (paragraph links): About · People · Private Room · Visit · The House Letter · Journal · Privacy.
Templates: `front-page` (header-over), `page`, `page-book`, `page-letter` (or page), `single` (band = featured image), `archive`, `category`, `tag` (copy of archive with the label "Tag"), `home` (posts page), `404`, `search`.

---

## 5. Colour (T(a): grey paper 55%, ink hero/footer, near-black band, no accent)

Stage-a mapping, kept: the reference's neutral grey paper gets a **faint plum cast** of the same lightness (row palette "grape-tea" #6B5460, plum family). Ink moves toward aubergine-black. The reference has no accent; we allow plum only on numerals and hover rules (≤5%). All values are within ±5% lightness of the reference.
| Token (theme.json slug) | Hex | Share | Source / reason |
|---|---|---|---|
| `paper` | **#DDD9DC** | ~55% of page | T(a) #DFDFDF, −1% L, plum cast |
| `ink` | **#1A1417** | ~25% (hero overlay, footer, mobile header) | T(a) #121212 / #000, aubergine |
| `band` | **#211A1E** | ~10% (reservation band, letter panel) | T(a) #191919 |
| `text` | **#1A1417** headings; body `rgba(26,20,23,.78)` ≈ **#423A3E** on paper | – | T(a) #000 / rgba(0,0,0,.75) |
| `muted` | **#6A6166** | captions, meta (5.0:1 on paper) | T(a) small text |
| `on-dark` | **#F4F1F3** headings, **#E8E3E6** body on ink | – | T(a) #E5E5E5 on dark |
| `plum` | **#6B5460** | **≤5%**: slash numbers in the reservation band and footer, link hover underline, focus ring on paper | row hex |
| `plum-light` | **#B9A3AF** | focus ring / numerals on ink | plum at ~68% L |
| `rule` | `rgba(26,20,23,.16)` | table and list hairlines | – |
| `error` | **#8E2F3A** | form errors (6.1:1 on paper) | – |
| `success` | **#3F5E4A** | form success | – |
Ratio across the site: paper 55% · ink 25% · band 10% · photographs (colour) ≈ 8% of non-photo area · plum ≤ 2%.
**First-screen saturated share (check-first-screen.py, s>0.35 & v>0.5): target ≤ 5%, hard cap 15%** (reference ≈ 0%; row note cap 30%). P01 is low-key with only the beer, the brass and the pass lamp warm; if the check exceeds 5%, raise the overlay to 45%. Do not desaturate the photo grade globally.

---

## 6. Typography (serif)

Fonts load **only via theme.json `fontFamilies` + `fontFace`** (woff2 in `assets/fonts/`, OFL, listed in theme-meta `fonts[].files` with `licenseFile`; family names in readme.txt), so the editor iframe and the front end render the same faces. style.css has `:lang(` rules, so copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it in functions.php.
- `cormorant-garamond`: Cormorant Garamond 300, 400 italic, 500 (Latin, Latin-ext). Wordmark, headings, slash heads, captions in italic, nav on the footer.
- `libre-baskerville`: Libre Baskerville 400, 400 italic, 700 (Latin, Latin-ext). Body, nav, tables, forms.
- `noto-serif-tc`: Noto Serif TC 500 (headings only; zh-TW subset of every zh-TW demo string + punctuation; use the Hokuto/Hada substitute subsetting method, because the repo subset script is known broken).
- `noto-serif-jp`: Noto Serif JP 500 (headings only; ja subset, same method).
Stacks:
- Latin display: `"Cormorant Garamond", "Cormorant", Garamond, "Times New Roman", serif`
- Latin body: `"Libre Baskerville", Baskerville, Georgia, serif`
- `:root:lang(zh-TW)` display: `"Cormorant Garamond", "Noto Serif TC", "Songti TC", "PMingLiU", serif`; body: `"Libre Baskerville", "Songti TC", "PMingLiU", "MingLiU", serif` (no bundled TC and no JP font in body: repo contract).
- `:root:lang(ja)` display: `"Cormorant Garamond", "Noto Serif JP", "Hiragino Mincho ProN", "Yu Mincho", serif`; body: `"Libre Baskerville", "Hiragino Mincho ProN", "Yu Mincho", "YuMincho", serif`.
- CJK: heading sizes × 0.75 (xx-large 3.1875rem, h2 2.0625rem), body .9375rem with line-height **1.85**, ls .04em; the wordmark "Akane House" stays Latin in every locale. fr/de: `hyphens: auto` on body, h2, h3.
| Role | Font / weight | Size (desktop → mobile) | Line-height | Tracking | Source |
|---|---|---|---|---|---|
| hero wordmark (h1) | Cormorant 300 | 2.5rem → 2rem | 1.1 | .01em | T(b) wordmark ~30px, thin serif (Cormorant runs small: 40px ≈ ref 30px optically) |
| home §3 statement (h2) | Cormorant 500 | **4.25rem** (68px; theme.json `xx-large` = `clamp(2.75rem, 1.4rem + 3vw, 4.25rem)`) → 2.75rem | 1.05 | −.015em | row ≥4.25rem; the one big line |
| inner h1 | Cormorant 500 | 3.25rem → 2.375rem | 1.08 | −.01em | |
| h2 chapter | Cormorant 500 | **2.75rem** (44px) → 2rem | 1.1 | −.01em | T(b) 40/44, w400 grotesque → Cormorant 500 |
| slash head "02/ Label" | Cormorant 500 | 1.25rem (20px) | 1.8 (36px) | 0 | T(b) 20px / 36px exactly |
| bracket sub-title | Cormorant italic 400 | 1.125rem | 1.6 | .01em | T(f) bracketed sub-title |
| h3 | Cormorant 500 | 1.5rem → 1.375rem | 1.25 | 0 | |
| tile caption | Libre Baskerville 400 | .9375rem (15px) | 1.5 | .03em | T(b) caption 16.5px ls .03em |
| body | Libre Baskerville 400 | **.9375rem (15px)** → .9375rem | **1.75** | −.005em | T(b) 15px / 1.69, ls −.15px (Baskerville needs +.06 lh) |
| small / meta | Libre Baskerville 400 | .8125rem | 1.6 | .02em | T(b) micro 11–13px |
| nav | Libre Baskerville 400 | .875rem (14px) | 1 | .01em | T(b) nav 16px (Baskerville is wider) |
| text link | Cormorant 500 | 1.25rem | 1.4 | 0 | ref "About … →" |
| price | Libre Baskerville 400 tabular-nums | .9375rem | 1.6 | 0 | |
Sentence case everywhere; **no uppercase tracking** (T(b)). theme.json fontSizes: `small` .8125rem, `medium` .9375rem, `large` 1.5rem, `x-large` 2.75rem, `xx-large` clamp(2.75rem → **4.25rem**).

---

## 7. Motion and scroll (sp-scroll)

Copy `pipeline/assets/sp-scroll/` unchanged to `assets/`; enqueue the JS in the head (not deferred) and add the CSS as an editor style. Only `sp-*` classes; no scroll listeners, GSAP, Lenis or AOS (the reference uses GSAP + ScrollTrigger + Lenis; we do not). **Three effects**, from stage-a "Scroll effect candidates" (source coffee-shimeno.com):

### 7.1 Chosen effects
| Effect | sp-* | Where | Reference trigger / time / easing | Ours |
|---|---|---|---|---|
| Slide-in | `sp-reveal sp-reveal--up` | home §3 right column, §5 right entries, §8 list, §9 photo, §12 rows; inner: chapter bodies, dish lists (not prices), people rows | `.animate--slide-in` when the `scroll-trigger` element enters the viewport (IntersectionObserver); translateY(2rem) + opacity .01 → 1, ≈.6s, ease-in-out | `--sp-dist: 28px` (2rem capped at the 30px rule), `--sp-dur: .6s`, `--sp-ease: cubic-bezier(.42,0,.58,1)` (ease-in-out). **Not** on the hero, forms, the price table, the hours list or legal text |
| Tile stagger | `sp-stagger` (parent) + `sp-reveal--up` per tile | home §4 4-tile row, §7 tile pair; The Day recap, Menu, Bar, About tiles | same slide-in, tiles entering one after another | default .12s steps |
| Parallax | `sp-parallax` | hero Cover (P01), home §6 band (P06), every inner page head band | `.js-parallax3` GSAP `y: +70px` (mobile 30), start "top 80%", end "bottom 20%" (mobile "top 95%" / "bottom 5%"), scrub 1, linear | §7.2 |
Count-up, marquee, pin, mask/wipe: **none** (none on the reference). The "Four Seasons" sticky column is plain CSS `position: sticky` (no class). Reveal count on home: ≤ 60% of blocks, 0 in the hero.

### 7.2 Parallax (required)
| Where | Block / structure | Background layer | Foreground (static) | `--sp-par` desktop / mobile | Reference motion |
|---|---|---|---|---|---|
| **Hero** (primary) | Cover `ak-hero ak-grain sp-parallax`, 100svh | `.wp-block-cover__image-background` **P01** (scale 1.18 from sp-scroll) | wordmark + tagline + info bar inside the Cover's inner container (does not move); the header is a separate part above | **8% / 5%** | the reference's dark intro layer stays while the page moves on (fixed + .5s fade); here the photo drifts slower than the page |
| **Long-room band** (home §6) | Cover `ak-band sp-parallax`, 1440×380 (mobile 390×220) | **P06** | none (no text) | **10% / 6%** | `.js-parallax3` +70px scrub 1 (mobile 30px) |
| **Inner head bands** | Cover `ak-band sp-parallax` | each page's band photo (§4) | none | **6% / 4%** | same |
Mobile keeps parallax at the smaller speeds. Reduced motion, `?sp-static`, no JS and the editor: no movement and no scale (sp-scroll built-in). Acceptance: `check-parallax.mjs` desktop + mobile, displacement difference ≥6px (on a 380px band 10% ≈ 38px), 0 under reduced motion; ≥3 reveals hidden before entering and final after; nothing transparent after scrolling to the bottom.

---

## 8. Responsive rules (hard)

- **390px first screen**: no vertical writing, no absolutely positioned label, nothing overlapping text (auto-gates). The header is in flow (64px, ink). The wordmark and tagline are centred by flex inside the Cover. The **info bar is after the Cover in normal flow** (2×2).
- **S1 50% split < 1024px**: one column. Head line, then heading, then bracket, then body; the 4.25rem statement becomes 2.75rem. The three-column sticky layout becomes: heading + ¶ (not sticky), photo full width (minus 20px gutters), then the right entries; sticky is off below 1024.
- **S2 tiles**: 1024+ 4 columns; 600–1023 **2 columns** (still top-aligned and ragged, ratios kept); < 600 **2 columns at 390** with 12px gap (caption .8125rem). Ratios are never equalised. The 2-tile pair stays 2-up at 390.
- **S3 band**: full-bleed at every width, 390×220 on mobile; the reservation band stacks (heading, ¶, link) with padding 72px 20px.
- **Price table ≥782px**: the table spans the **full width of its container** (`width: 100%`, `table-layout: auto`); the price column is `white-space: nowrap; text-align: right; padding-right: 0`, has width `1%` (shrink to content) and is **never clipped** at 800 and 1280. No `overflow: hidden` on the table wrapper.
- **Any table < 782px** (prices, hours, menu lists): stacked. Each row becomes a block: item/day on its own line (Cormorant 500 1.125rem), the note below, the price/time on the right of the first line (flex, `nowrap`), 1px rule between rows. No horizontal scrolling.
- `html, body { overflow-x: clip }`; parallax layers are clipped by their Cover; at 390 the `scrollWidth` equals `innerWidth`.
- Touch targets ≥44px; the nav overlay toggle is the core navigation's own button.
- CJK at every width: horizontal only.

---

## 9. Fixed facts (identical on every page and in all five locales; brand.md is the source)

- **Name**: Akane House. **Founded** 2014 by Ruth Okafor and Tomas Brandt, in the 1890s lodge of the old madder dye works ("akane" = madder red, the colour of its brick). **Address**: 3 Tanner's Row, Eastbridge (fictional). Tram line 2, stop "Dye Works", 3 minutes' walk. **Phone** 020 7946 0318 (same-day only, 15:00–17:00). **Email** tables@akane-house.example (all mailto links use this).
- **Hours**: Tue–Sat 12:00–23:00 · Sun 12:00–18:00 · Mon closed. **Sittings**: 01 Lunch 12:00–15:00 · 02 Afternoon 15:00–18:00 · 03 Dinner 18:00–21:30 (kitchen) · 04 Bar 21:30–23:00, last orders 22:45 · Sunday: roast 12:00–17:00, two booked seatings 12:30 and 15:00, bar until 18:00.
- **Booking (the single way)**: the Book page form (or the email). Lunch, Dinner and Sunday are bookable; Afternoon and the Bar are walk-in. Tables are held 15 minutes. Groups over 8 → Private Room. Replies within a few hours (same day during opening hours).
- **Audience**: neighbours, people working nearby at lunch, small groups and families at the weekend.
- **Tone**: plain, warm, unhurried; never boastful; no claims of awards or "best".
- **Prices (7 items)**:
  1. Pie of the day with mash, greens and gravy (lunch) **£16**
  2. Soup, bread and butter (lunch) **£9**
  3. Cheese on toast with pickles and a half pint (afternoon) **£12**
  4. Dinner, two courses **£32** · three courses **£38** (one row; the price cell reads "£32 / £38")
  5. Sunday roast: beef, or squash and chestnut, with all the trimmings **£24**
  6. House cask bitter, pint **£5.40**
  7. Private room set menu, per person (8–14 guests) **£45 / £55**
  A 12.5% service charge only for tables of 8 or more. Home shows items 1–6.
- **People (7)**: Ruth Okafor, co-founder, licensee, front of house · Tomas Brandt, co-founder, head cook · Ines Varga, sous chef, the pies · Priya Sen, afternoons and pastry · Callum Reid, cellar and bar manager · Jonah Whitfield, bar, evenings · Ana Ferreira, bookings and the private room.
- **The day (routine)**: 08:30 bread and stock · 11:00 the pie of the day goes in · 12:00 doors open · 15:00 lunch ends, afternoon begins · 17:30 staff meal · 18:00 dinner · 21:30 kitchen closes · 22:45 last orders · 23:00 doors close · 23:30 cellar checked.
- **Stories (3, the posts)**: "The Tuesday table" (since 2016) · "The pie that stayed" (beef and ale, since 2014) · "Last orders at 22:45".
- **Private room**: seats 8–14; no hire fee Tue–Thu; £150 minimum spend Fri–Sat.
- **The House Letter**: first Thursday of each month; the month's pies, guest casks, Sunday dates and closures; about 3 minutes' read.
- **Milestones**: 1890s dye-works lodge built · 2014 opened as Akane House · 2016 the back room became the Private Room.

---

## 10. Images (17 photographs, all real photography, one STYLE; 11 on home)

**STYLE** (identical for every image):
`IMAGE_STYLE="low-key documentary photograph, dark moody interior, single warm practical light or window rim light, deep aubergine and charcoal shadows, muted warm highlights on brass, glass and food, shallow depth of field, visible fine film grain, 35mm lens, quiet and unhurried, natural skin tones, diverse adults, modern international neighbourhood pub with dark wood and red brick, uncluttered composition with large dark negative space, no text, no letters, no numbers, no logos, no brand names, no signage, no labels on bottles or taps, no chalkboards"`
Generate one at a time with `scripts/grok-image.sh out.webp "<subject>"`, check every image with Read, and regenerate any with text, logos, tap badges with lettering, broken faces or hands, or a brighter look. ≤300 KB, ≤2000px, webp. No cut-outs.
| # | File | Subject (prompt core) | Ratio / size | Used on (page · block) | Home |
|---|---|---|---|---|---|
| P01 | `hero-tap.webp` | **KV**: a bartender (woman, 30s, dark apron, sleeves rolled) pulling a pint at a plain brass beer tap, the glass half-filled with amber beer catching the light; behind her through an open hatch, slightly out of focus, a cook in whites setting a plate on the pass under one warm lamp; window light from the upper left on the brass; right half of the frame falls into deep shadow; centre of frame dark and calm | 16:10, 2000×1250 | Home §2 hero | ✔ |
| P02 | `lunch-pie.webp` | a pie with a golden crust, mash and greens on a plain plate at a window table at midday, a glass of water, a hand reaching for the fork, low-key with window light | 3:4, 1200×1600 | Home §4 tile 1 · The Day 01/ tiles | ✔ |
| P03 | `afternoon.webp` | an older man reading a paperback at a corner table with a half pint and a cup of coffee, late-afternoon light in a long beam across the wood | 4:3, 1600×1200 | Home §4 tile 2 · The Day 01/ tiles · post 1 | ✔ |
| P04 | `dinner-pass.webp` | two plated dinners (fish with greens, braised meat) on a steel pass under a warm heat lamp, a cook's hands wiping a plate rim | 2:3, 1200×1800 | Home §4 tile 3 · The Day 01/ tiles · Menu band | ✔ |
| P05 | `last-orders.webp` | late evening: a bartender (man, 40s, Black) polishing a glass behind the bar, a few empty glasses and one full pint on the counter, low pendant light, dark room | 0.88, 1400×1600 | Home §4 tile 4 · The Day 01/ tiles · The Bar band · post 3 | ✔ |
| P06 | `long-room.webp` | the long room from one end: dark wooden tables and chairs, red brick wall, small table lamps lit, a few guests as soft shapes, windows at the far end | 2.4:1, 2000×830 (shown 3.8:1) | Home §6 band · About band | ✔ |
| P07 | `cellar.webp` | a cool brick cellar: three wooden and steel casks on a stillage, beer lines, a hand checking a cask with a torch beam | 4:3, 1600×1200 | The Bar tile | |
| P08 | `cook-pass.webp` | the head cook (man, 50s, grey beard, whites) leaning on the pass, looking at a ticket rail with blank paper slips, warm lamp | 3:4, 1200×1600 | Home §5 photo 2 · Book band | ✔ |
| P09 | `pie-macro.webp` | macro from above: a pie's crimped golden crust split open, steam, on a dark stoneware plate on a scorched wood board (like a still life) | 0.83, 1300×1560 | Home §7 tile 1 · Menu tile · post 2 | ✔ |
| P10 | `pint-macro.webp` | macro: a pint of amber bitter with a tight white head on a dark wooden table, a drop running down the glass, rim light | 4:3, 1600×1200 | Home §7 tile 2 · The Bar tile | ✔ |
| P11 | `front-door.webp` | the pub's front at dusk on a quiet street: a red-brick facade, a dark green door ajar, warm light in two small-paned windows, a bicycle against the wall, no sign | 3:2, 1800×1200 | Home §9 · Visit band · About tile 4 | ✔ |
| P12 | `back-room.webp` | a private back room with one long table set for twelve, candles lit, dark panelled walls, empty chairs | 3:2, 1800×1200 | Private Room band | |
| P13 | `morning-prep.webp` | 08:30 in the kitchen: floured hands crimping pastry over a pie dish on a steel bench, a stockpot steaming behind, cool morning light | 1:1, 1500×1500 | Home §5 photo 1 · The Day band · About tile 2 | ✔ |
| P14 | `sunday-roast.webp` | a roast being carved at a table for a family (diverse, three generations), only hands and plates in focus, Sunday afternoon window light | 3:2, 1800×1200 | The Day 06/ Sunday · Menu tile | |
| P15 | `bar-talk.webp` | the bar seen from the room: a regular (woman, 60s) talking with the licensee (woman, 40s) across the counter, both laughing softly, brass and glasses glinting | 3:4, 1200×1600 | About tile 1 | |
| P16 | `staff-meal.webp` | 17:30 staff meal: seven staff (diverse ages) around one table in the empty room, bowls and bread, before service, warm low light | 3:2, 1800×1200 | People band · About tile 3 | |
| P17 | `produce-door.webp` | a wooden crate of leeks, apples and squash just delivered at the kitchen back door, early light, a hand lifting the crate | 3:2, 1800×1200 | The House Letter band | |
Per-page check (no repeats on one page): Home P01 P02 P03 P04 P05 P13 P08 P06 P09 P10 P11 · The Day P13 P02 P03 P04 P05 P14 · Menu P04 P09 P14 · The Bar P05 P10 P07 · About P06 P15 P13 P16 P11 · People P16 · Private Room P12 · Visit P11 · Book P08 · Letter P17 · posts: post 1 P03, post 2 P09, post 3 P05.

---

## 11. Forms (form contract v1: `steps/form-contract-v1` exists)

Copy `pipeline/assets/forms/shippress-forms.php` unchanged to `inc/`, and the CSS and editor JS unchanged to `assets/`; `require` it in functions.php. Patterns stay literal block markup with a small PHP island for `shippress_form_slot`. **No form in the home first screen; no `sp-reveal` on any form or its wrapper.**
- **Book a table (`book`, contact; the only booking/reservation page)**: chapter "02/ The form", in the right column at 50% (max 600px), on paper: `shippress_form_slot( kind: contact )`. The fallback is the buffered literal mailto button **"Email us to book"** (`wp-element-button`, href `mailto:tables@akane-house.example?subject=<forms_contact_subject>`), with the sentence "Opens your email app. Tell us the day, the sitting, how many of you and a phone number." The fallback never links to `/book/`. Recommended CF7 fields (documented in readme, not created by the theme): name*, email*, phone*, date*, sitting (select: Lunch / Dinner / Sunday 12:30 / Sunday 15:00)*, party size (select 1–8)*, notes (textarea: allergies, high chair, private room), consent checkbox* ("I agree that Akane House may contact me about this booking"), submit "Send booking request". Private Room has **no own form**: it links to `/book/`.
- **The House Letter (`letter`, newsletter)**: standalone page. The form panel is on the **band** ground (`#211A1E`, radius 0, padding 64px, grain, text `#F4F1F3`): `shippress_form_slot( kind: newsletter, email: tables@akane-house.example, label: forms_email, submit: forms_subscribe, notice: forms_mail_notice, subject: forms_mail_subject )`.
- **Home §11 `letter`**: the same newsletter slot on paper (light ground). The footer has a link only (no second slot).
- Plugin order (shared helper): newsletter MailPoet (explicit id) → MC4WP; CF7/WPForms only through an explicit dedicated id. Contact CF7 → WPForms. Without plugins, the newsletter still shows a required `type=email` field + submit, using a native mailto POST with the notice text.
- **Tokens** (style.css, mapped to theme.json presets):
  - light (paper): `--sp-form-accent: var(--wp--preset--color--ink)` #1A1417; `--sp-form-on-accent: var(--wp--preset--color--on-dark)` #F4F1F3; `--sp-form-radius: 0` (T(d) radius 0 everywhere; button 47px high, T(d)); `--sp-form-focus: var(--wp--preset--color--plum)` #6B5460 (2px outline, offset 2px); `--sp-form-surface: #E8E5E7` (paper +4% L); `--sp-form-text: #1A1417`; inputs: no box, a **1px bottom rule** `rgba(26,20,23,.4)`, 48px high, Libre Baskerville .9375rem; error text + rule `error` #8E2F3A; success panel `#D3DCD5` with text `success` #3F5E4A.
  - dark (`.ak-dark` group style, ink/band grounds): `--sp-form-surface: #2A2227`; `--sp-form-text: #F4F1F3`; `--sp-form-accent: #F4F1F3`; `--sp-form-on-accent: #1A1417`; `--sp-form-focus: #B9A3AF`; rules `rgba(244,241,243,.4)`; error `#E7A7AF`; success `#B7CDBD`. Labels inherit `#F4F1F3`.
  - Styled states: input, textarea, select, checkbox/radio (`accent-color`), label (Cormorant 500 1.125rem), submit (filled, hover `#3A2F35` light / `#DDD9DC` dark), focus-visible, disabled, error, success. Scoped to CF7, WPForms, MailPoet, MC4WP (+ Jetpack, `.wp-block-form`) classes and `.sp-newsletter-fallback` only; no global input selectors.
- **i18n semantic keys** in `inc/i18n/en.php` (extract with `L10N_SEMANTIC=1`; all five locales rewritten locally, not literally translated): `forms_email` "Email address", `forms_subscribe` "Send me the letter", `forms_mail_notice` "This opens your email app. Send the message to subscribe; you are not subscribed yet.", `forms_mail_subject` "Subscribe to The House Letter", `forms_contact_subject` "Table request", `contact_email` "Email us to book", `forms_contact_note` (the fallback sentence above). Check the rendered label, button, notice and subject in en, zh-TW, ja, fr and de.
- Validation: `form-check.py`, five-locale `form-runtime-check.php`, `repo-gates.sh forms`; a real CF7 check at 390px and desktop on the light (Book) and dark (Letter) grounds; never submit a form.

---

## 12. Similarity table (target ≈ 80%; values from reference-tokens.md)

| Dimension | Reference value (token) | Akane House value |
|---|---|---|
| Paper ground | #DFDFDF, ~55% (T(a)) | #DDD9DC, ~55% (−1% L, plum cast) |
| Ink / hero / footer | #000 → #121212, ~20% (T(a)) | #1A1417, ~25% |
| Dark band | #191919, ~12% (T(a)) | #211A1E, ~10% |
| Text | rgba(0,0,0,.75) body, #000 headings, #E5E5E5 on dark (T(a)) | rgba(26,20,23,.78), #1A1417, #E8E3E6 |
| Accent | none; colour only from photos (T(a)) | plum #6B5460 ≤2% (numerals, hover, focus); colour from photos |
| First-screen saturated share | ≈0% (T(a)) | target ≤5% (cap 15%) |
| Hero | fixed black 900px layer, blurred still, centred thin serif wordmark ~30px (T(e), T(b)) | 100svh low-key photo P01, 35% ink overlay, centred Cormorant 300 2.5rem wordmark |
| Header | fixed 95px, 4 equal columns, no background (T(c)) | 95px, 4 equal columns, transparent over the hero (not fixed) |
| Grid | 20px gutter, 4 cols × 335, gap 20 (T(c)) | identical |
| Chapter head | "NN/ Label" 20px / 36px (T(b), T(f)) | "NN/ Label" Cormorant 1.25rem / 36px |
| Heading | 40px / 44px, weight 400, ls −.01em (T(b)) | Cormorant 500 2.75rem (44px) / 1.1, ls −.01em; one statement at 4.25rem (row) |
| Body | 15px w300, lh 1.69, ls −.15px (T(b)) | Libre Baskerville 15px w400, lh 1.75, ls −.005em |
| Two-column split | heading x 20 w 590; text x 730 w 690 (T(c)) | identical (50%) |
| Section padding | 155px top / 120–300px bottom (T(c)) | 155px top / 200px bottom |
| Radius / borders / shadows | 0 / none / none (T(d)) | 0 / none (only table rules) / none |
| Button | solid #121212, 47px, white 15px (T(d)) | form submit solid #1A1417, 48px, #F4F1F3 15px; elsewhere text links |
| Tiles | 4-up, ratios 0.67–1.5, top-aligned, ragged, caption above (T(e)) | 4-up, 0.75 / 1.33 / 0.67 / 0.88, top-aligned, ragged, caption above |
| Caption | 16.5px ls +.03em, 2 lines (T(b)) | 15px Libre Baskerville ls .03em, 2 lines |
| Full-bleed band | 1440×~380 (3.8:1), parallax +70px (mobile 30), scrub 1 (T(e), T(g)) | 1440×380, `sp-parallax` 10% (mobile 6%) |
| Sticky photo section | text left 335, square photo centre 446, text right 335 (T(e)) | identical columns, left sticky, P13 1:1 + P08 3:4 |
| Grain | fixed canvas, 10 random frames (T(f), T(g)) | static SVG noise, opacity .07, on hero / band / footer |
| Reveal | translateY(2rem) + opacity .01 → 1, ease-in-out (T(g)) | `sp-reveal--up` 28px, .6s, cubic-bezier(.42,0,.58,1) |
| Intro motion | fixed layer fades, opacity .5s (T(g)) | hero photo parallax 8%, hard edge to paper (no scroll listener allowed) |
| Imagery | dark low-key documentary, one rim light, grain, macro plates, portrait, room (T(e)) | same STYLE: low-key pub documentary, macro pie and pint, cook portrait, long room |
| Nav | 4 slots: About / Record·Products / Online Store / Cart (T(c)) | 4 links: The Day / Menu / The Bar / Book a table |

---

## 13. Home acceptance checklist (stage 1)

1. 1440×900 first screen shows: full-bleed dark P01 (tap + pint left of centre, cook at the pass behind), the centred thin serif wordmark "Akane House" + tagline, the 4-column transparent header with one menu ("Book a table" in col 4), the 4-column slash-numbered info bar at the foot (01/ Lunch … 04/ Bar) and grain. No pill, no button, no second headline.
2. 390×844: header in flow (ink), wordmark centred by flex in a 72svh Cover, info bar after the Cover (2×2); no vertical text, no absolute labels, no overlap; `scrollWidth == innerWidth`.
3. §3 head "01/ The house": the 4.25rem statement in the left column, body starting exactly at 50% with the bracket sub-title.
4. §4 4 ragged tiles (P02 P03 P04 P05) with captions above, ratios 0.75 / 1.33 / 0.67 / 0.88, radius 0, bottoms differ ≥120px.
5. §5 three columns: left sticky text, centre P13 then P08, right bracketed "( 08:30 )" / "( 17:30 )" entries.
6. §6 P06 letterbox band, full-bleed, ≈3.8:1, no text, visible parallax.
7. §7 tile pair P09 + P10 and a price table of 6 items spanning the full container at ≥782, prices `nowrap` right, not clipped at 800 / 1280; stacked below 782. Prices match §9 (£16 / £9 / £12 / £32 / £38 / £24 / £5.40).
8. §8 ruled list of 7 names (no portraits); §9 P11 + hours list matching §9; §10 near-black reservation band with one white link; §12 journal rows; ink footer with grain.
9. 11 unique images on home (≥8); 0 cut-outs; every image Read-checked for text, tap badges and logos.
10. ≥250 English words (target ≈640) and ≥3 narrative paragraphs of ≥20 words; the daily routine appears in §5.
11. Effects: reveal--up (+stagger) and parallax only; no reveal in the hero or on forms, prices or hours; `check-parallax.mjs` passes on desktop and mobile; reduced motion shows the final state.
12. First-screen saturated share ≤5% (cap 15%); largest theme.json size ≥4.25rem; fonts via theme.json fontFace (Cormorant Garamond, Libre Baskerville, Noto Serif TC/JP); the editor matches the front end.
13. Home §11 newsletter slot shows email + submit + notice without plugins; not in the first screen; radius 0, bottom-rule inputs.
14. Every chapter head is "NN/ Label"; radius 0 and no shadows anywhere; exactly one top menu.
15. auto-gates `1 1` pass for en; `pattern_source.py` passes.
