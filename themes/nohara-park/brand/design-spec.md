# Nohara Holiday Park: design spec (stage 1 spec, binding for implementation)

Slug `nohara-park`, holiday park and touring caravan site, type **hospitality** (WooCommerce compatible, not required; the site must work with WooCommerce off). Row b29-3: archetype **sticky-media**, hero **photo-left-text-right**, nav **split** (exactly one top menu), page structure **booking-led**, palette family olive (row hex `#5F6848`, "sea-pine" olive), fonts **Newsreader / Nunito Sans**, font_direction **serif**, CJK **Noto Serif TC / Noto Serif JP** (Mincho direction), five languages en, zh-TW, ja, fr, de.

Reference (S5-Style travel-stays category, not in `steps/used-refs.txt`): **Hoshino Resorts** https://www.hoshinoresorts.com/en/. One reference only. Measurements: `brand/reference-tokens.md`, quoted below as **RT(a)…RT(g)**. Screens: `brand/ref/hoshino-first.png`, `scroll-hoshino-900.png` (awards ledger), `scroll-hoshino-2700.png` (brands photo + inset card), `scroll-hoshino-4800.png` (news cards), `scroll-hoshino-6000.png`.

**Imagery: photo** (stage-a IMAGERY = photo: the reference uses real daylight documentary photographs). Ours are generated (Grok) documentary photographs with a unified film-grain finish (row `photo_direction: film-grain`), never the reference's pictures.

We borrow structure, techniques, colour relationships, measurements and the key-visual concept. We never copy the reference's photographs, copy, logo, brand badges or whole-page layout. All text in this file and in the theme repo is English.

---

## 0. Fixed brand facts (identical on every page, in every language; brand.md repeats them verbatim)

- **Nohara Holiday Park** — touring pitches and timber lodges for families, kept between oak and ash trees. Founded **2004** by **Ingrid Halloran** on a former tree nursery. Address **Ash Hollow Lane 1, Wenlow Vale** (fictional, international-neutral; local address order per language in brand.md). Phone **+00 31 6120 0841** (fictional format). Email `hello@nohara-park.example` (every mailto and form fallback uses it). Hero sub-line everywhere: **"Since 2004 · Wenlow Vale"**.
- **The park**: 11 hectares; **52 pitches** = **36 gravel touring pitches** (hard-standing, 10A hook-up, water point within 30 m) + **16 grass tent pitches** (meadow edge, no hook-up); **14 timber lodges** = **10 two-bed lodges** (sleep 4) + **4 three-bed lodges** (sleep 6). One wash house (heated), one small shop at reception (bread, milk, gas), a pond, the oak wood walk (2.4 km loop).
- **Seasons**: pitches open **15 March – 2 November**; lodges open **all year**. **Out of season = November to mid-March** (lodges by the week or weekend; wardens' work months).
- **Reception hours**: in season **daily 08:30–18:00**; out of season **daily 09:00–16:00**; closed **25–26 December**. Phone answered in reception hours; email answered within **1 working day**.
- **Arrival / departure**: pitches arrive from **13:00**, leave by **11:00**; lodges arrive from **15:00**, leave by **10:00**. Pitch weeks and lodge weeks run **Saturday to Saturday**. Quiet hours **22:00–07:00**. Speed on the park roads **8 km/h**.
- **Prices (8 items, EUR in every language, no conversion; no "from" except in the stay cards where noted)**:
  | Item | Unit | Price |
  |---|---|---|
  | Gravel touring pitch with 10A hook-up (2 adults, car, caravan or motorhome) | per night | €34 |
  | Grass tent pitch (2 adults, car) | per night | €24 |
  | Pitch week, gravel, Saturday to Saturday | 7 nights | €210 |
  | Two-bed lodge, sleeps 4 | week | €690 |
  | Three-bed lodge, sleeps 6 | week | €860 |
  | Two-bed lodge short break (Fri–Mon or Mon–Fri) | 3 or 4 nights | €380 |
  | Additional guest aged 5 and over | per night | €6 |
  | Winter caravan storage (November to mid-March) | season | €320 |
  Note line (everywhere prices appear): "Children under 5 stay free. A 25% deposit holds your booking; the balance is due 4 weeks before arrival. Free cancellation up to 14 days before arrival. Bed linen and towels are included in lodges."
- **How a week is reserved (4 parts, written as ruled rows, never a step grid or vertical timeline)**: **Ask** (choose dates by phone, email or the booking page; Saturday changeover) → **Hold** (reception holds the pitch or lodge for **48 hours**, free) → **Confirm** (pay the **25%** deposit; confirmation with your pitch or lodge number and a park map within **1 working day**) → **Arrive** (a warden meets you at the gate and walks you to your pitch; pitches from **13:00**, lodges from **15:00**).
- **Named people (7, fictional; titles only "founder", "head warden", "warden", "reception"; no qualifications, awards)**:
  1. **Ingrid Halloran** — founder (2004); still walks the oak wood every morning. *Photo A1.*
  2. **Tobias Weller** — head warden; arrivals and the pitch walk. *The warden in hero photo H1 and in N1.*
  3. **Amara Osei** — warden, lodges and housekeeping.
  4. **Luca Ferreira** — warden, pitches, hook-ups and winter storage. *Photo P1, W2.*
  5. **Samir Haddad** — warden, trees and hedges; out-of-season grounds work. *Photo W1.*
  6. **Hana Kovač** — reception and bookings. *Photo B1.*
  7. **Élodie Brun** — warden, Saturday walks and pond mornings for children. *Photo J3.*
- **Out of season (what the wardens look after, November to mid-March)**: hedge laying along the lane (November–December), drain and wash-house maintenance (January), tree survey and coppicing in the oak wood (February), re-gravelling the touring pitches (early March), and **winter caravan storage** (up to **30 caravans**, checked every week, aired monthly).
- **Guest stories (4; first names, plain facts, no superlatives)**:
  1. **The Abara family — first caravan week.** Tobias walked them to gravel pitch 14 and backed the caravan on with them; the children did the Saturday pond morning with Élodie. (Home block 3 narrative mentions it; Stories page card, photo S1.)
  2. **Greta and Paul — every September since 2011.** Bring their tourer for a pitch week, then leave it in winter storage with Luca until March. (Stories card, photo W2.)
  3. **The Lindqvist–Moreau family — three generations, three-bed lodge.** A half-term lodge week in October, a long table on the veranda. (Stories card, photo L1; Stories head F1.)
  4. **Nadia and Kofi — two bikes, grass pitch, midweek in May.** Arrived by cycle path, stayed four nights at the meadow edge. (Photo S3.)
- **Journal posts (≥1; build 3)**: "Pitch weeks for next season open on 1 December" (category *Park news*, tags *booking*, *pitches*; image J2), "What the wardens do between November and March" (category *Out of season*, tags *wardens*, *lodges*; image J1), "Saturday pond mornings, from April" (category *Park news*, tags *families*; image J3).
- No claims of awards, ratings, "best", guaranteed weather or availability, real brands, real places. Year 2004 only.

---

## 1. Signature techniques (three, obvious at a glance; not to be diluted)

### T1. Stay ledger with a straddling title (Hoshino "With 89 Awards", `ref/scroll-hoshino-900.png`, RT(c)(d)(f)(g))
- **Reference**: a pale grey band `#E9EAEC` **230px** tall (top of the section), the section title **centred and sitting on the band's lower edge** (half on grey, half on white, futura 56px); below it **three equal columns** (432px each, container 1294, side margin 73px, 216px tall), each column has a **1px `#1F1F1F` vertical hairline at its left** (and the last at its right), **centred serif year** (Noto Serif 27.5px), a **32×2px `#1F1F1F` dash** 40px below, and a **serif title** (24px / 28px lh) 40px below the dash; the **third column is faded** (a neighbour peeking from a carousel). Items stagger in (fade, 2000ms, +250ms each, cubic-bezier(.19,1,.22,1)).
- **Ours, home block 2 "Three ways to stay"**: band `#E7E9E4` **230px** full width; H2 "Three ways to stay" Newsreader 400 **3.5rem / 1.1**, centred, its baseline box positioned so the text's vertical centre sits exactly on the band's bottom edge (implement: band Group `min-height:230px`, H2 with `margin-top:-0.55em` in the next Group, or a single Group with a linear-gradient background `#E7E9E4 0 230px, #FFFFFF 230px` and the H2 padded to sit at 230px — use the gradient; no absolute positioning). Container **1294px** (`--np-ledger: 1294px`), three equal columns, **216px** min-height, 1px `#1F1F1F` hairline at the left of every column and at the right of the last; inside each column centred: figure Newsreader 400 **1.75rem** (`52` / `14` / `Nov–Mar`), dash **32×2px `#1F1F1F`** 40px below, title Newsreader 400 **1.5rem / 1.17**, max 2 lines, then a quiet text link Nunito Sans .875rem 600 olive `#5F6848` ("Pitches →", "Lodges →", "Out of season →") 24px below.
  - Column 1: **52** — "Touring and tent pitches on gravel and grass".
  - Column 2: **14** — "Timber lodges between the oaks, open all year".
  - Column 3 (faded, `opacity:.55` on the content, hairline still `#1F1F1F` at 55%): **Nov–Mar** — "The wardens' months: hedges, drains and stored caravans".
- **Must not dilute**: three columns exactly equal width, hairlines 1px **dark ink** (not grey #ddd), centred serif figure + 32×2 dash + serif title, the title straddling the band edge, the third column visibly faded. No cards, no backgrounds on columns, no icons.
- **Inner pages**: **Stays** (head ledger: 36 / 16 / 14 → gravel / grass / lodges), **Touring pitches** (36 gravel / 16 grass / 10A hook-up), **Lodges** (10 two-bed / 4 three-bed / all year), **The wardens** (the 7 people as ledger columns in rows of 3: name as the "figure", dash, role as title; last row column 2–3 empty hairlines kept, third column of the first row faded only on desktop), **Prices & dates** (ledger of the three seasons: 15 Mar / 2 Nov / 25–26 Dec). Every one of these pages also uses the straddling-title band for its first H2.

### T2. Caption-panel cards (Hoshino "Latest News", `ref/scroll-hoshino-4800.png`, RT(c)(e)(f))
- **Reference**: cards **418×456** (photo **418×255**, 1.64:1, radius 0, flush on top of a **`#F4F4F4` caption panel 418×201**), gap **49px**, container 45–1395. In the panel: a **48px square brand badge** flush at the left edge (y +36), a **1px vertical rule ≈123px** at x +75, then small date (13px 600) and title (20px / 1.3) at x +116. Photo settles from `scale(1.1)` + fade on entry.
- **Ours, home block 4 "Stays this season"**: three cards in a **1350px** container (x 45–1395 at 1440), gap **48px**, each card **418px** wide: photo **3:2 cropped to 1.64:1** (418×255) flush, radius 0; panel `#F2F3EF` **201px** min-height, padding 36px 32px 36px 0. **Badge 48×48 `#5F6848`** flush at the panel's left edge, a white Newsreader 500 1.25rem letter centred in it (**P** gravel pitch / **T** tent pitch / **L** lodge); **1px `#1F1F1F` vertical rule, 120px tall**, 27px right of the badge; text block starts 40px right of the rule: small line Nunito Sans **.8125rem 700** `#1F1F1F` ("From €34 a night · 2 adults") and title Newsreader 500 **1.25rem / 1.3** ("Gravel touring pitch with hook-up").
  - Card 1 **S1** — P — "From €34 a night · 2 adults" — "Gravel touring pitch with hook-up".
  - Card 2 **S2** — L — "€690 a week · sleeps 4" — "Two-bed lodge between the oaks".
  - Card 3 **S3** — T — "From €24 a night · 2 adults" — "Grass tent pitch at the meadow edge".
  Whole card is one link (to Pitches / Lodges / Pitches#grass); hover: title underline 1px offset 4px, photo `scale(1.03)` .6s cubic-bezier(.19,1,.22,1) inside `overflow:clip`.
- **Must not dilute**: the photo sits **flush** on the panel with no gap and no radius; the badge is a **square** touching the panel's left edge; the 1px vertical rule is present and tall; panel is a pale grey-green, not white, not beige.
- **Inner pages**: **Stays** (four cards: gravel pitch / grass pitch / two-bed lodge / three-bed lodge), **Guest stories** (4 cards, badge letters A / G / L / N = family initial, small line = stay type + month), **Journal** posts page, category and tag archives (badge = category initial: N Park news / O Out of season; small line = date), **Out of season** (3 cards: hedges / storage / lodge weekends). Home block 9 (journal) uses the same card on the `#E7E9E4` band with **white** panels (the reversal is deliberate; everything else identical).

### T3. Booking pill with a "book direct" disc (Hoshino header "Check Availability", `ref/hoshino-first.png`, RT(d))
- **Reference**: a long near-black pill **301×50**, radius 25px, white sans label, and at its right end an inset **white round disc ≈40px** with two tiny uppercase lines ("BEST / RATE"); beside it a round 48px black menu button. It is the one booking action, repeated nowhere else in another style.
- **Ours**: pill **300×50**, radius **25px**, fill **`#5F6848`** (olive, the row hex), label Nunito Sans **1rem 600** `#FFFFFF` "Book a pitch" (left-aligned at 32px padding); at the right end, 5px inset, a **white disc 40px** with two lines Nunito Sans **.5rem 800, letter-spacing .06em, uppercase, `#5F6848`, lh 1.1: "BOOK / DIRECT"**. Hover: fill `#4F5739` (−8% L), .3s ease; disc stays. Focus: 2px `#1F1F1F` outline, 3px offset.
  - **It is the single booking action of the site**, the same component in: header (right end), hero (under the lead), home block 5 (after the four rows), home block 8 (under prices), home block 10 (book band), every inner page's closing "Book" row, and the Booking page head. Label is "Book a pitch" in header/hero; "Book a lodge" on the Lodges page; "Ask for dates" on the Booking page head (all from i18n keys). No other filled button style exists (secondary actions are text links in olive with an arrow).
  - Mobile (< 782px): header shows a **44px round `#1F1F1F` menu button** (the reference round button; three 16px white lines) and a compact pill 160×44 "Book" with a 34px disc; the pill keeps its disc at every width.
- **Must not dilute**: a filled long pill (not an outline button), the white disc with two text lines inside the pill's right end, identical everywhere.

### Supporting (not counted as signatures)
- **Inset white card on a full-bleed photo** (Hoshino "Our Brands", `ref/scroll-hoshino-2700.png`, RT(e)): home block 6 parallax band (§2) and the About page band.
- **Chapter counter + vertical cue line** (Hoshino hero "01/03" + 1px white line): hero only, KV #4.

---

## Key visual concept

### (1) Reference first screen: concept, story, signature motion
hoshinoresorts.com opens on a **full-bleed daylight photograph of a property's grounds** — a stone bath of water under maples, a lantern, a timber wall — under a fixed white 76px header, with the wordmark and "SINCE 1914" centred on the picture; a thin **1px white vertical line** drops from the photo's bottom centre as a scroll cue, a **01 / 03 counter** tells you the picture is one of three, and the next slide already **peeks in at the right edge** (a timber room with a lantern). **Story**: *a place that opens itself to you outdoors, kept for more than a hundred years — booking is one quiet action.* **Signature motion**: slides advance sideways (slick, autoplay 5s) with the counter stepping; on scroll, titles drop in from above with a long ease-out (1000ms, cubic-bezier(.19,1,.22,1)), the awards ledger staggers in, card photos settle from 1.1 to 1.

### (2) Our translation (same composition idea, same story, same image type)
The same idea in a holiday park: **a film-grain documentary photograph of the grounds with people small inside them** — head warden **Tobias Weller** (man, 50s, olive work jacket) **walking a guest (woman, 30s) and her child along a gravel pitch road past a cream touring caravan with its awning out**, oaks and ash trees behind, low morning sun through leaves, the people occupying the lower-middle third. The row's hero is **photo-left-text-right**, so the photograph takes the left **62%** and bleeds to the left edge (the reference's full bleed, kept on the side that matters), and the large serif headline sits beside it on white, with "Since 2004 · Wenlow Vale" (our "SINCE 1914"), the **01 / 03 counter + 1px vertical cue line** at the photo's foot ("01 / 03 — Pitches · Lodges · Out of season", the three ways to stay the ledger then shows), and **booking as one quiet olive pill** (T3) under the lead and in the header. **Motion**: the photograph drifts slowly with scroll (`sp-parallax`, the scroll-driven translation of the reference's slow slide drift) while the text column stays still; the cue line is drawn static (no reveal on the hero). The peeking neighbour slide becomes the **faded third ledger column** directly below the fold, and the reference's drop-in titles become `sp-reveal--down` on every H2 from block 2 onward.

### (3) KV checklist (all implemented on the home first screen at 1440×900 and visible)
| # | Reference element | Our counterpart | Position | Motion | Image used |
|---|---|---|---|---|---|
| 1 | Full-bleed daylight photo of the grounds, people small inside | Film-grain photo: head warden walking a guest and child past a touring caravan on a gravel pitch, trees behind | x 0–893 (62%), y 88–820, bleeds to the left edge, radius 0; 390px: full width 390×292 under the header | `sp-parallax`, `--sp-par: 8%` (mobile 5%); no reveal | **H1** (`hero-warden-walk.webp`) |
| 2 | Centred wordmark + "SINCE 1914" | Sub-line "Since 2004 · Wenlow Vale" (Nunito Sans 600 1.125rem, .14em, uppercase, `#1F1F1F`) above the H1 "Pitches and lodges, kept between the trees." (Newsreader 400 **4.5rem / 1.05**) | right column x 957–1360, vertically centred in y 88–820 | none | — |
| 3 | Dark "Check Availability" pill with white "BEST RATE" disc | T3 olive pill "Book a pitch" + white disc "BOOK / DIRECT", 300×50 | under the 2-line lead in the right column, and header right (x 1100–1400) | hover fill .3s ease only | — |
| 4 | 1px white vertical cue line + 01/03 counter | 1px `#FFFFFF` line 120px tall rising from the photo foot at x 64, and beside it the counter "01 / 03" (Newsreader 400 1.125rem white) + "Pitches · Lodges · Out of season" (Nunito Sans .8125rem 600 .1em uppercase white) on a 64px-tall bottom scrim `linear-gradient(transparent, rgba(0,0,0,.28))` | bottom-left of the photo, x 64–420, y 740–800 (desktop only; on < 782px the counter line moves under the photo in normal flow, no line, ink text) | none | on H1 |
| 5 | Fixed white 76px header: wordmark, three nav words, language, pill, round menu | Split nav, white **80px** header (sticky): left 3 links · centred wordmark · right 2 links + T3 pill; < 782px: wordmark left, round 44px menu button + compact pill | y 0–80 | none (no slide-in) | — |
| 6 | Next slide peeking at the right edge / ledger last item faded | The **faded third ledger column** + the top of the `#E7E9E4` ledger band visible at the fold | y 820–900: the band's top 80px is inside the first screen | `sp-stagger` + `sp-reveal--down` on the ledger columns (below the fold, not hero) | — |

The header wordmark "Nohara Holiday Park" is text (Newsreader 500 1.5rem, `#1F1F1F`) with a 20px olive mark drawn in inline SVG (two overlapping tree crowns as simple circles over a 1px ground line) — our own drawing, not the reference logo.

---

## 2. Home page

### First screen composition (1440×900)
- **y 0–80 header** (white, 1px `#E7E9E4` bottom rule, `position: sticky; top: 0`). Split nav: menu links from x 48 (Nunito Sans 1rem 500 `#1F1F1F`, gap 32px — RT nav 16px/500); centred wordmark (x centre 720); T3 pill at x 1100–1400 (40px right margin). Below 1180px the menu collapses into the round menu button. Implementation (final): header is a 3-column grid `1fr auto 1fr`; **one** `core/navigation` block with **all five links** (Stays · Booking · Out of season · The park · Journal) in the left cell; wordmark centred in the middle cell; T3 pill right-aligned in the right cell. The split look comes from the centred wordmark between the menu and the pill. Never two navigation blocks (one-top-menu rule).
- **y 80–820 hero**: grid `62fr 38fr`, no gap. Left: H1 photo `object-fit: cover; object-position: 42% 55%`, full cell, bleeds to x 0, radius 0, KV #4 at its foot. Right cell: padding 0 80px 0 64px, content vertically centred: sub-line (KV #2), 24px, **H1** (3 lines max at 4.5rem: "Pitches and lodges, / kept between / the trees."), 32px, lead Newsreader 400 **1.375rem / 1.45** (RT card serif 22px/1.45) `#1F1F1F` max 2–3 lines: "Fifty-two pitches and fourteen timber lodges on eleven hectares of oak and ash. A warden walks you to your pitch; the rest of the week is yours.", 40px, T3 pill, 20px, text link "See this year's dates →" (olive, Nunito Sans .9375rem 600).
- **y 820–900**: top of the T1 ledger band `#E7E9E4` (KV #6).
- First-screen saturated share target **≤ 8%** (RT measured 5.7%; check-first-screen.py hard limit 15%; row note 30%): only the photo's foliage (film-grain, S ≈ .2–.45) and the olive pill (S ≈ .31, not counted as saturated).
- **390×844**: header 64px (wordmark Newsreader 1.25rem left; round 44px `#1F1F1F` menu button and compact pill "Book" right). Photo 390×292 full width (no counter on the photo, no cue line). Below in normal flow, padding 24px: counter line "01 / 03 · Pitches · Lodges · Out of season" (ink, .75rem), sub-line, H1 **clamp(2.75rem, 1.5rem + 5vw, 4.5rem)**, lead 1.125rem, pill full width (max 360). **No vertical text, no absolutely positioned label over text.**

### Block order (booking-led; sticky-media archetype in block 3)
| # | Block | Purpose | Layout, photos | Copy weight | Effects |
|---|---|---|---|---|---|
| 1 | Hero (KV) | who / what / one booking action | see above; **H1** | H1 + 30-word lead | `sp-parallax` 8% (no reveal) |
| 2 | **T1 "Three ways to stay"** | the offer at a glance | T1 band + straddling H2 + 3 ledger columns (52 / 14 / Nov–Mar), third faded; under the ledger a centred 1-line intro (Nunito Sans 1.0625rem, 640px): "Choose a pitch for your own caravan or tent, a lodge with beds made, or a quiet week out of season." | ~45 words | H2 `sp-reveal--down`; columns `sp-stagger` + `sp-reveal--down` (delays .75s/1.0s/1.25s, RT g) |
| 3 | **Sticky narrative "A park that is walked every morning"** (archetype sticky-media) | story / trust | container 1294, grid `5fr 7fr`, gap 96px. Left: photo **N1** 4:5 (520×650) `position: sticky; top: 120px` (parent `overflow: clip`, never hidden). Right column (scrolls past the photo): H2 Newsreader 3.5rem; **3 narrative paragraphs** (≥ 40 words each, ~170 words: Ingrid's tree nursery in 2004 and why the trees stayed; Tobias's morning round — water points, hook-ups, the pond, the gate at 08:30; the arrival walk to the pitch, the Abara family's first caravan week); then a **1px `#1F1F1F` full-width rule** (RT 100% heading rule) and a two-column text list of the **7 people** (name Newsreader 500 1.125rem + role Nunito Sans .875rem `#5C5C5C`), then an inset photo **A1** 3:2 (100% of the column, 600×400) with a one-line caption ("Ingrid Halloran on the oak wood walk, 07:10"); link "Meet the wardens →" | ~230 words | H2 `sp-reveal--down`; paragraphs group `sp-reveal--down` |
| 4 | **T2 "Stays this season"** | what to book | H2 left-aligned in the 1350 container with a 1px ink rule 100% width under it (40px gap), 3 T2 cards (**S1**, **S2**, **S3**), link "All stays and prices →" right-aligned under the cards | 3 × 12 words | H2 `sp-reveal--down`; cards `sp-stagger` + `sp-reveal--zoom` |
| 5 | **"How a week is reserved"** | booking-led method | container 1294; head grid `7fr 5fr`: left H2 + 1 paragraph (45 words, Saturday changeover, 48-hour hold); right photo **B1** 3:2 (520×347). Below, **four ruled rows** full container width, 1px `#1F1F1F` rule above each and below the last, row min-height 120px, grid `120px 1fr 2fr 200px`: numeral Newsreader 300 **3rem** `#1F1F1F` with a 32×2 dash under it (T1 echo) · title Newsreader 500 1.5rem (Ask / Hold / Confirm / Arrive) · 2-line text Nunito Sans 1rem · fact right-aligned Newsreader 400 1.375rem nowrap ("Sat–Sat", "48 hours", "25% deposit", "from 13:00"). Then T3 pill "Book a pitch" left-aligned, 48px top. | ~140 words | H2 `sp-reveal--down`; rows `sp-stagger` + `sp-reveal--down` |
| 6 | **Full-bleed parallax band "The grounds"** (supporting inset card) | breath + place | full width, **1440×560** (RT 405 band scaled to our taller grounds photo), photo **G1** as the moving layer; white card **720×300** inset right (x 628–1348 at 1440, RT), vertically centred, padding 48px: H2 "Eleven hectares, mostly trees" Newsreader 3rem, **1px `#1F1F1F` rule 100%** 24px under it (RT), paragraph Newsreader 1.25rem/1.45 (45 words: the 2.4 km oak wood loop, the pond, 8 km/h roads, the heated wash house) | ~55 words | `sp-parallax`, `--sp-par: 10%` (mobile 6%); card static |
| 7 | **"What the wardens look after out of season"** | the off-season promise from the row signature | H2 centred on a straddling `#E7E9E4` band (T1 band variant, 160px); then **two alternating rows** in the 1294 container, grid `6fr 6fr` gap 80px: row 1 photo **W1** left (4:3, 600×450), text right: month line Nunito Sans .8125rem 700 .1em uppercase olive ("November – February"), H3 Newsreader 2rem "Hedges, drains and the oak wood", 2 paragraphs (~70 words); row 2 mirrored, photo **W2** right: "March", H3 "Fresh gravel and thirty stored caravans", 2 paragraphs (~70 words, €320 storage season, weekly checks); link "Out of season →" | ~150 words | H2 `sp-reveal--down`; each row's text column `sp-reveal--down` (photos not revealed) |
| 8 | **Prices** | booking-led practical | container 1294 (full width, see §8 hard rules): H2 left + 1px ink rule; **8 price rows** grid `1fr 180px 140px`: item Nunito Sans 1.0625rem 600 · unit `#5C5C5C` · price Newsreader 500 1.5rem **nowrap, right-aligned**; 1px `#D5D8D0` rule under each row, 20px vertical padding; note line under; T3 pill + text link "Season dates →" | table + 45-word note | **none** (no reveal on prices) |
| 9 | **T2 journal "From the park"** | alive | `#E7E9E4` band, padding 120px 0; H2 centred (RT "Latest News" centred title); 3 T2 cards with **white** panels (latest 3 posts via Query Loop, featured images **J1**, **J2**, **J3**), badge = category initial, small line = date; link "All journal notes →" | 3 titles | H2 `sp-reveal--down`; card grid `sp-stagger` + `sp-reveal--zoom` |
| 10 | **Book band + newsletter** | conversion | grid `62fr 38fr` (echoes the hero split): left photo **E1** (4:3 crop to the cell, 893×560, bleeds left); right cell padding 64px: H2 "Book a week" Newsreader 3rem, address, reception hours (in season / out of season), phone, email link, T3 pill. Under the band, a white strip (1294 container, 1px ink rule on top, padding 48px 0): left "Letters from the park" Newsreader 1.75rem + 1 line ("One letter a season: opening dates, pitch weeks and what the wardens are doing."), right the **newsletter form slot** (§11) | ~70 words | H2 `sp-reveal--down` only; **no reveal on the form** |
| 11 | Footer | | white footer with 1px ink top rule (reference footer is light); 4 columns in 1294: wordmark + sub-line + address; Stay (Stays, Touring pitches, Lodges, Prices & dates); The park (About, The wardens, Out of season, Guest stories, Journal); Reception hours + phone + email; compact newsletter slot row; © 2004–2026 Nohara Holiday Park. Text links only (not a second navigation bar). | | none |

Home English word count target **≥ 650** (≥ 250 required); narrative paragraphs: block 3 alone has 3 of ≥ 40 words.

**Home photo positions (14, all distinct): H1, N1, A1, S1, S2, S3, B1, G1, W1, W2, J1, J2, J3, E1** (≥ 8 ✓). No photo repeats on the home page.

### Comparison with the most recent themes (no repeated skeleton)
| Slot | Hisui Clinic | Tsubasa College | Homura Safety | Meguri Waste | **Nohara Holiday Park** |
|---|---|---|---|---|---|
| Hero | rule-split window, frosted index column, white lower half | focus-pull hero | dark KV | pan-strip hero | **photo-left 62% bleed + serif H1 right, counter + cue line, olive pill with disc** |
| 2 | single-column narrative | intro | docked strip | wash intro | **3-column hairline ledger with straddling title, faded third column** |
| 3 | department band + tabs | isometric modules | intro | stream rows | **sticky photo + scrolling narrative + people text list** |
| 4 | parallax interlude | month ruler | notch pairs | day pictograms | **caption-panel cards (badge + vertical rule)** |
| 5 | accordion ledger | certification ledger | scrim tiles | dock band | **four ruled booking rows with right-aligned facts** |
| 6 | count-up figures | parallax band | parallax visit band | prices | **full-bleed parallax photo with inset white card right** |
| 7 | between-visits 58/42 | instructors | findings | people rows | **two alternating out-of-season rows** |
| 8 | 2×2 stories | fees table | fees | site notes | **price rows** |
| 9 | fees rows | journal | team / cases / journal | schedule | **caption-panel journal on a grey band** |
| 10 | filter column news + visit/newsletter | newsletter | book / waitlist | — | **hero-echo book band + newsletter strip** |
Why not alike: no window/frosted column, no tabs, no accordion, no count-up, no isometric or pictogram module, no dark band; the parallax band carries an inset white card (none of the four did); the people appear as a text list inside a sticky narrative, not as rows or a grid; the ledger with a title straddling a band edge appears in none of them; the booking action is a single repeated pill with a disc.

---

## 3. Inner pages (11 pages + posts; each continues T1, T2 and T3)

Page head (all inner pages, "split head"): grid `58fr 42fr`, height **480px** desktop under the header: left photo bleeding to x 0 (radius 0, `sp-parallax` `--sp-par: 6%`), right: small line (breadcrumb "Nohara Holiday Park / Stays", Nunito Sans .8125rem 600 uppercase .1em), H1 Newsreader 400 **3.5rem / 1.08**, one 2-line lead Newsreader 1.25rem, and (where noted) the T3 pill. Mobile: photo 390×240 above, text below in flow. Every page ends with a **closing book row**: 1px ink rule, "Book a week at Nohara" Newsreader 2rem left, T3 pill right (stacked on mobile).

| Page (slug) | Head photo | Key content | Body images (no repeats on the page) | Techniques |
|---|---|---|---|---|
| Stays (`stays`) | S1 | **T1** ledger (36 gravel / 16 grass / 14 lodges) with straddling title "Every way to stay"; **T2** 4 cards (gravel pitch P1, grass pitch S3, two-bed lodge S2, three-bed lodge L1); arrival times; what is included; closing row | P1, S3, S2, L1 | T1, T2, T3 |
| Touring pitches (`pitches`) | P1 | **T1** ledger (36 / 16 / 10A); gravel pitches (size 10×12 m, hook-up, water within 30 m, awning space), grass pitches (meadow edge, no hook-up, tents and small campervans), the arrival walk, park rules (8 km/h, quiet 22:00–07:00), dogs on a lead; prices for pitches (rows, §8 rules); pill "Book a pitch" | S1, S3, G1 | T1, T3 |
| Lodges (`lodges`) | S2 | **T1** ledger (10 two-bed / 4 three-bed / all year); inside a lodge (bed linen, wood stove, kitchen, veranda), short breaks Fri–Mon / Mon–Fri, lodge prices (rows); pill "Book a lodge" | L1, F1 | T1, T3 |
| Booking (`booking`) | B1 | the 4 reserve rows (as home block 5), Saturday changeover, deposit and balance, cancellation, **contact form slot** (§11) under "Ask for dates", mailto fallback, phone and hours | E1 | rows, T3 (pill in head "Ask for dates") |
| Prices & dates (`prices`) | G1 | **T1** ledger of the season (15 Mar pitches open / 2 Nov pitches close / 25–26 Dec reception closed); full 8-row price list (§8); note line; arrival/departure times table (rows) | B1 | T1, T3 |
| Out of season (`out-of-season`) | W1 | months as two alternating rows (as home block 7) + **T2** 3 cards (Hedges & trees TM, Winter storage W2, Lodge weekends L1); storage terms (€320, up to 30 caravans, weekly check, collection by appointment in March) | TM, W2, L1 | T2, T3 |
| The wardens (`wardens`) | TM | **T1** ledger of the 7 people (rows of 3; name = figure, dash, role = title, 1 line each); a paragraph per person below in two columns; Ingrid's note | A1, N1 | T1, T3 |
| About / The park (`about`) | A1 | founding 2004 (≥ 200 words: the tree nursery, why pitches sit between trees, the first 12 pitches, lodges from 2012), **inset white card on full-bleed photo G1** band (`sp-parallax`), the grounds map described in prose (no image map), how to arrive (by road, cycle path) | G1, N1 | supporting card, T3 |
| Guest stories (`stories`) | F1 | **T2** 4 cards: Abara S1, Greta & Paul W2, Lindqvist–Moreau L1, Nadia & Kofi S3; each followed by its 120–160-word story | S1, W2, L1, S3 | T2, T3 |
| Contact & directions (`contact`) | E1 | **contact form slot** (§11), mailto fallback, address, reception hours, phone, directions in prose, FAQ as 6 ruled rows (`core/details`, no JS) | B1 | rows, T3 |
| Newsletter (`newsletter`) | J1 | standalone subscribe page: 2 paragraphs (what we send: one letter a season — opening dates, pitch weeks opening 1 December, what the wardens are doing), newsletter slot, privacy line | — | T3 closing row |
| Journal (posts page `journal`) | — (a 240px `#E7E9E4` band with the straddling H1 "Journal") | **T2** cards of all posts, 3-up | featured images | T1 band, T2 |
| Single post / category / tag | single: featured image 3:2 at 1294 width under a straddling title band; archives reuse the Journal layout | | J1, J2, J3 | T1 band, T2 |

Image assignment per page (authoritative):
- Stays: head S1; body P1, S3, S2, L1.
- Touring pitches: head P1; body S1, S3, G1.
- Lodges: head S2; body L1, F1.
- Booking: head B1; body E1.
- Prices & dates: head G1; body B1.
- Out of season: head W1; body TM, W2, L1.
- The wardens: head TM; body A1, N1.
- About: head A1; body G1 (parallax band), N1.
- Guest stories: head F1; body S1, W2, L1, S3.
- Contact: head E1; body B1.
- Newsletter: head J1.

Standard pages for theme-meta / demo-content `screens`: home, about (`about`), news → posts page `journal`, article (post 1), category (*Park news*), tag (*booking*), newsletter (`newsletter`, standalone, not an alias), contact (`contact`). Exactly one page with role `posts` (`journal`, empty content). Signatures continue on ≥ 4 inner pages: T1 on Stays, Pitches, Lodges, Prices, Wardens (+ band on Journal/archives); T2 on Stays, Out of season, Stories, Journal, archives; T3 on all.

---

## 4. Colour (reference RT(a) relationship: monochrome page, colour only from photographs; one small olive accent from the row)

| Role | Reference (RT a) | **Nohara** | Share | Use |
|---|---|---|---|---|
| Base | `#FFFFFF` | **`#FFFFFF`** | ~55% | page ground, header, footer, inset card |
| Band | `#E9EAEC` (cool grey) | **`#E7E9E4`** (same lightness −0.5%, hue moved to grey-green to sit with olive; reason: the cool blue-grey fights film-grain greens) | ~15–18% | T1 band, journal band, book band text side |
| Panel | `#F4F4F4` | **`#F2F3EF`** (−1% L, same green shift) | ~7% | T2 caption panels |
| Ink | `#000000` text, `#1F1F1F` rules/buttons | **`#1F1F1F`** text and headings, **`#1F1F1F`** hairlines | text | body, H1–H3, ledger hairlines, dashes, card rules |
| Muted | — | **`#5C5C5C`** | | units, roles, dates on white |
| Hairline light | — | **`#D5D8D0`** | | price row rules, header bottom rule uses band `#E7E9E4` |
| Accent (sea-pine olive) | none (≈ `#8C9F68` tiny brand badges only) | **`#5F6848`** (row hex) | **≤ 6%** | T3 pill, T2 badge, text links, month lines, form accent |
| Accent hover | — | **`#4F5739`** | | pill hover |
| Error / success (forms) | — | **`#9A3A2C`** / **`#5F6848`** | | form states only |
No cream or beige grounds; olive differs from recent mains (Hisui deep green `#165C48`, Tsubasa, Homura, Meguri). Photography carries the colour (film-grain greens, S ≈ .2–.45). **First-screen saturated share ≤ 8% target, 15% hard ceiling** (check-first-screen.py); reference 5.7%.

theme.json palette slugs: `base` #FFFFFF, `band` #E7E9E4, `panel` #F2F3EF, `ink` #1F1F1F, `muted` #5C5C5C, `line` #D5D8D0, `olive` #5F6848, `olive-deep` #4F5739, `error` #9A3A2C.

## 5. Type (font_direction **serif**)

- **Latin display / headings**: **Newsreader** (variable, opsz 6–72, wght 300–700; latin + latin-ext for fr/de), serif. **Latin body / UI**: **Nunito Sans** (variable wght 300–800, latin + latin-ext). (Reference: futura sans headings + Noto Serif ledger; the row asks for serif headings, so Newsreader takes both the reference's title and ledger roles.)
- **CJK** (Mincho direction, no gothic in headings): zh-TW headings `"Newsreader", "Noto Serif TC", serif` (bundled Noto Serif TC subset, weights 500/700); ja headings `"Newsreader", "Noto Serif JP", serif` (bundled subset). CJK body (repo contract: body stacks must not contain the bundled zh / ja families): zh-TW `"Nunito Sans", "Noto Serif CJK TC", "Songti TC", "PMingLiU", serif`; ja `"Nunito Sans", "Noto Serif CJK JP", "Hiragino Mincho ProN", "Yu Mincho", serif` (system Mincho; Latin glyphs stay Nunito Sans).
- **Loading**: theme.json `fontFamilies` + `fontFace` for Newsreader, Nunito Sans, Noto Serif TC (subset), Noto Serif JP (subset); woff2 in `assets/fonts`, every file listed in theme-meta `fonts[].files` with OFL licenseFile; family names in readme.txt. Editor and front end load the same faces. style.css has `:lang(` rules → copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it. zh subset: Hokuto / Hada replacement method. check-editor-fonts.mjs must pass on en and zh-TW.
- **Scale** (RT(b) source in brackets):
  | Token | Size | Family / weight / lh / tracking | Use |
  |---|---|---|---|
  | `xx-large` | **4.5rem** (72px); mobile clamp(2.75rem, 1.5rem + 5vw, 4.5rem) | Newsreader 400 / 1.05 / −0.01em | home H1 (max ≥ 4.25rem ✓) |
  | `x-large` | **3.5rem** (56px) [RT H2 56/56 500] | Newsreader 400 / 1.1 (CJK 1.5) | H2, straddling titles, inner H1 |
  | `large` | 3rem | Newsreader 400 / 1.15 | parallax-card H2, book band H2, booking numerals |
  | `medium-large` | 2rem | Newsreader 500 / 1.2 | H3, closing row |
  | ledger figure | **1.75rem** [RT 27.52px Noto Serif 400] | Newsreader 400 / 1.2 | T1 figures |
  | ledger title | **1.5rem / 1.17** [RT 24.08/28.17] | Newsreader 400 | T1 titles, row titles |
  | lead | **1.375rem / 1.45** [RT card serif ~22/1.45] | Newsreader 400 | hero lead, card paragraphs |
  | card title | **1.25rem / 1.3** [RT 20/1.3] | Newsreader 500 | T2 titles |
  | sub-line | 1.125rem / .14em uppercase [RT "SINCE 1914" 28.38px 500 — reduced because it sits beside the H1, not alone] | Nunito Sans 600 | hero sub-line |
  | `base` | **1rem** [RT 16px; nav 16/500] | Nunito Sans 400 / 1.75 (CJK 1.85) | body, nav (500) |
  | `small` | **.8125rem** [RT date 13px 600] | Nunito Sans 700 / 1.5 | card small line, month lines (.1em uppercase) |
  | disc | .5rem / .06em uppercase | Nunito Sans 800 | T3 disc |
- zh-TW / ja: headings ≈ 0.75× English (H1 3.375rem, H2 2.625rem), letter-spacing .04em, body lh 1.85. fr / de: `hyphens: auto` on body and on headings ≤ 3.5rem; de H1 may drop to 4.25rem (never below).

## 6. Spacing, radius, decoration (RT c, d, f)
- Containers: **1294** (`--np-wide`, RT ledger container 73px side margins at 1440), **1350** (T2 card row, RT 45–1395), 760 reading column (posts, story text). Section padding **120px** top/bottom desktop (RT 100–130), 72px mobile. Header **80px** (RT 76px, +4 to fit the 50px pill with 15px air).
- Radius **0** on photos, cards, panels, bands, inset card (RT d). Round only: T3 pill radius 25px, disc 50%, mobile menu button 50%, form submit uses the pill radius 25px.
- Rules: **1px `#1F1F1F`** for ledger columns, card vertical rules (120px), section-title rules (100%), booking rows, inset-card rule (RT d). Light rules 1px `#D5D8D0` only between price rows and FAQ rows. Dash **32×2px `#1F1F1F`** under every ledger figure and under the booking numerals.
- Shadow: **none** anywhere (RT d).
- Film-grain is in the photographs themselves (STYLE); **no CSS grain overlay**, no filters on images.
- Not copied: the centred wordmark over the hero, the brand logo row, the cookie bar, the slick slider itself (we use one photo, not a carousel).

---

## 7. Photos (18, Grok, one at a time, read every one)

**Imagery: photo** (stage-a IMAGERY = photo). STYLE (exact string on every prompt, `IMAGE_STYLE="<STYLE>" scripts/grok-image.sh out.webp "<subject>"`):

`candid documentary photograph on 35mm colour film, fine visible film grain, soft natural daylight, slightly lifted shadows, muted greens and warm greys, gentle low contrast, people small inside the landscape and not looking at the camera, diverse adults and children in plain outdoor clothing, a quiet holiday park among oak and ash trees with gravel roads, timber lodges and touring caravans, international neutral countryside, uncluttered, no text, no letters, no numbers, no signs, no logos, no brands, no Japanese elements`

No cutouts (0). Each ≤ 300 KB, ≤ 2000 px, webp; one readme.txt line each (AI-generated, CC0). Caravans and vehicles must show no badges, number plates or lettering (regenerate otherwise); pitch posts are plain timber without numbers. Regenerate any frame with text, logos, broken faces, extra fingers or a style drift (too clean / too saturated / no grain).

| ID | Subject / composition | Ratio (px) | Used on (page → block) | Home |
|---|---|---|---|---|
| **H1** | head warden (man, 50s, olive work jacket) walking beside a woman (30s) and her child (7) along a gravel pitch road, passing a cream touring caravan with its awning out on a gravel pitch; oaks and ash behind; low morning sun through leaves; the three people in the lower-middle third, centre-left; upper half mostly trees and soft light | 4:3 (1600×1200; displayed ~1.1:1 crop, `object-position 42% 55%`) | Home hero (KV) only | **home** |
| **N1** | the same warden alone at dawn on his morning round, crouching to check a grey hook-up post at the edge of a gravel pitch, mist between the trees, a flask on the ground | 4:5 (1200×1500) | Home block 3 sticky; Wardens body; About body | **home** |
| **A1** | founder (woman, 60s, grey hair, wax jacket) walking the oak wood path at 07:00 with a small dog on a lead, light through trunks | 3:2 (1500×1000) | Home block 3 inset; About head; Wardens body | **home** |
| **S1** | a family (father 40s, two children) setting up the awning of a touring caravan on a gravel pitch, mother unfolding chairs, trees around | 3:2 | Home T2 card 1; Stays head; Pitches body; Stories card | **home** |
| **S2** | a timber lodge veranda among oaks in late afternoon, a couple (60s) with tea, a teenager reading on the step | 3:2 | Home T2 card 2; Lodges head; Stays body | **home** |
| **S3** | a small green tent at a meadow edge, two touring bicycles leaning on a tree, a couple (30s, Black woman and man) cooking on a camp stove | 3:2 | Home T2 card 3; Stays body; Pitches body; Stories card | **home** |
| **B1** | reception in a small timber building: receptionist (woman, 30s, Central European) handing a folded blank paper map to a couple across a wooden counter, window onto trees | 3:2 | Home block 5 head; Booking head; Prices body; Contact body | **home** |
| **G1** | high wide view from a low hill over the park: gravel loop road, scattered caravans and lodges between oak and ash crowns, a pond, soft haze; people tiny | 2.57:1 (2000×780) | Home parallax band; Prices head; About band; Pitches body | **home** |
| **W1** | November mist: two wardens (one man 40s Middle Eastern, one woman 30s) laying a hedge along a lane with billhooks, cut branches, frost on grass | 4:3 (1600×1200) | Home block 7 row 1; Out of season head | **home** |
| **W2** | winter storage yard among bare trees: a warden (man, 30s, Southern European) walking between rows of covered caravans with a clipboard, light snow | 4:3 | Home block 7 row 2; Out of season body; Stories card | **home** |
| **J1** | frosty morning, a timber lodge with smoke from the stove chimney, bare oaks, one person carrying logs | 3:2 | Journal post 2 featured (home block 9); Newsletter head | **home** |
| **J2** | a couple (50s) pulling a touring caravan slowly into the park lane in spring, blossom on the hedgerow, warden raising a hand in greeting | 3:2 | Journal post 1 featured (home block 9) | **home** |
| **J3** | a warden (woman, 30s) crouching with three children at the pond edge with nets and a white tray, morning | 3:2 | Journal post 3 featured (home block 9) | **home** |
| **E1** | the park gate: an open timber five-bar gate at the end of a gravel lane between trees, a small timber reception roof beyond, evening light, no sign text | 4:3 | Home book band; Contact head; Booking body | **home** |
| P1 | a warden (man, 30s) showing a guest (woman, 40s, South Asian) how to connect the hook-up cable at a grey post beside a motorhome on gravel | 3:2 | Pitches head; Stays body | |
| L1 | inside a two-bed lodge: timber walls, small wood stove, kitchen table set for four, window onto oaks, bright | 3:2 | Lodges body; Stays body; Out of season body; Stories card | |
| F1 | three generations at a long table on a lodge veranda in October dusk, string lights off, plates, blankets | 3:2 | Lodges body; Stories head | |
| TM | the seven-person team (mixed ages and backgrounds) standing loosely at the open doors of a timber workshop, tools and wheelbarrows, morning | 2.57:1 | Wardens head; Out of season body | |

**18 photos total** (12–18 ✓; **14 on home** ✓). No photo repeats on any page (check against §3 "Image assignment per page"). If one must be cut, cut F1 (Stories head then uses S2; Lodges body keeps L1) — never H1, N1, S1–S3, B1, G1, W1, W2, E1.

---

## 8. Responsive rules (hard)
- **390px first screen**: no vertical writing, no absolutely positioned labels over text. Hero counter and cue line hidden (`display:none` < 782px) and the counter moves into the text flow under the photo; header 64px; H1 clamp ≥ 2.75rem; no overlap. auto-gates "mobile first-screen text overlap" must pass.
- **Price rows (home block 8, Prices & dates page, Pitches and Lodges price subsets)**: at **≥ 782px the list spans the full container width (1294)**: grid `1fr 180px 140px` (or `core/table` with `width:100%; table-layout:auto`), **price column `white-space: nowrap; text-align: right`**, min-width 120px, never clipped or overflowing at 800 and 1280 (at 800 the container is 100% − 48px). No fixed narrow width, no `max-width` on the list.
- **Every table on mobile (< 782px) stacks**: each row becomes a block — item on line 1, unit left + price right on line 2; no horizontal scroll. Same for the arrival/departure table and any `core/table` in posts.
- T1 ledger: 3 columns ≥ 782px; < 782px **one column**, each item separated by a 1px top hairline instead of vertical rules, centred content kept, third item not faded on mobile. Straddling title stays centred on the band edge (band height 140px on mobile).
- Sticky narrative (block 3): sticky only ≥ 1024px; below, the photo sits above the text in flow (4:5 → 4:3 crop).
- T2 cards: 3-up ≥ 1100px; 2-up 782–1099; 1-up < 782 (card full width, panel min-height auto). Badge, rule and text keep their order.
- Booking rows: < 782px grid becomes `56px 1fr` with the fact under the text (left-aligned, nowrap).
- Parallax band: < 782px the inset card leaves the photo and sits under it full width (photo 390×260 still parallax at 6%); no text on the moving layer.
- Book band: stacks photo first. Footer 4 → 2 → 1 columns.
- No horizontal overflow at 390 and 1280 in any language (de: hyphens auto).

## 9. Motion and scroll effects (sp-scroll only; files copied unchanged into assets/)
Three effects (+ parallax), chosen from stage-a "Scroll effect candidates" (Hoshino `.ons` system):
| Effect (sp-*) | Where | Reference source and behaviour | Trigger / time / easing (our values) |
|---|---|---|---|
| **`sp-parallax`** (required) | **Home hero**: Group `np-hero sp-parallax`, the left cell's `figure>img` (H1) is the moving layer; counter, cue line and the whole text column are outside the layer | Hoshino hero: slick slide drift, autoplay 5s — translated to a scroll-driven slow drift | CSS scroll-driven (`animation-timeline: view()`), IO + translate3d fallback; **`--sp-par: 8%`** desktop, **5%** < 782px; linear |
| `sp-parallax` (second) | Home block 6 grounds band (G1 layer; white inset card is a sibling, static); About page G1 band; inner page heads (6%) | Hoshino "Our Brands" full-bleed photo under a white card | **`--sp-par: 10%`** desktop, **6%** mobile |
| `sp-reveal sp-reveal--down` | every H2 from block 2 on; paragraph group in block 3; out-of-season text columns; booking rows (with `sp-stagger`); ledger columns (with `sp-stagger`) | Hoshino `.ons_u`: opacity 0→1, translateY(−70px→0), **1000ms**, delay 500ms, cubic-bezier(.19,1,.22,1) | IO; `--sp-dist: 28px` (≤ 30 cap; reference 70), **`--sp-dur: 1s`**, **`--sp-ease: cubic-bezier(.19,1,.22,1)`**; ledger stagger overridden in theme CSS to the reference rhythm: `.np-ledger > .sp-reveal:nth-child(1..3) { --sp-delay: .75s / 1s / 1.25s }` (RT g 750ms + 250ms steps), duration 1.2s for the ledger |
| `sp-reveal sp-reveal--zoom` + `sp-stagger` | T2 card rows (home blocks 4 and 9; Stays, Out of season, Stories, Journal) — reveal on each card (direct children of the `sp-stagger` grid) | Hoshino news cards: photo `scale(1.1)` + opacity 0 → 1 | IO; built-in zoom 1.06→1 over 1.6s, `--sp-ease: cubic-bezier(.19,1,.22,1)`, stagger .12s steps (built-in) |
- **Hero gets no reveal** (parallax only). No reveal on: header, T3 pills, prices, forms, footer, the T1 band itself, the inset card on the parallax band, legal text. Max 3 reveal types per page (down, zoom + parallax) ✓.
- Hover: links underline 1px offset 4px; T3 pill fill .3s ease; card photo `scale(1.03)` .6s cubic-bezier(.19,1,.22,1) with `transition-delay: 0s` (spec §4.3). Mobile menu panel: transform + visibility .3s ease (not an sp-* class). No header slide-in (RT `topload` intentionally not used).
- Reduced motion / `?sp-static` / editor: final state, parallax still. **check-parallax.mjs** must pass (hero layer displacement ≥ 6px desktop and mobile; 0 under reduced motion; ≥ 3 reveals hidden before entry and restored; nothing transparent at the bottom).

## 10. Similarity to the reference (target 80%)
| Dimension | Reference value (token) | Nohara value |
|---|---|---|
| Colour relationship | white `#FFFFFF` / grey band `#E9EAEC` / panel `#F4F4F4` / ink `#000` + `#1F1F1F`, no accent, colour only in photos (RT a) | white `#FFFFFF` / band `#E7E9E4` / panel `#F2F3EF` (≤ 1% L, green-shifted) / ink `#1F1F1F`; olive `#5F6848` ≤ 6% (row hex) |
| First-screen saturated share | 5.7% (RT a) | ≤ 8% (ceiling 15%) |
| Hero | full-bleed photo 1440×824 under a 76px header (RT c) | photo 62% × 740 (y 80–820) bleeding left under an 80px header; text right (row: photo-left-text-right) |
| Hero decoration | wordmark + "SINCE 1914" 28px, 1px white cue line, 01/03 counter (RT f) | "Since 2004 · Wenlow Vale" 1.125rem, 1px white cue line 120px, "01 / 03" counter |
| Booking action | near-black pill 301×50 r25 + white 40px disc "BEST RATE" (RT d) | olive pill 300×50 r25 + white 40px disc "BOOK / DIRECT" |
| Section title | futura 56px/56px 500 centred (RT b) | Newsreader 3.5rem / 1.1 400 centred (serif per row) |
| Ledger | band 230px, title straddling, 3 cols 432px, 216px tall, 1px `#1F1F1F` dividers, serif year 27.5px, 32×2 dash, serif title 24/28, third faded (RT b c f) | same: band 230px, straddling title, 3 equal cols in 1294, 216px, 1px `#1F1F1F`, Newsreader 1.75rem, 32×2 dash, 1.5rem/1.17, third at 55% |
| Cards | 418×456, photo 418×255 flush, panel `#F4F4F4` 201px, 48px badge, 1px rule ≈123px, date 13/600, title 20/1.3, gap 49 (RT c e f) | 418 wide, photo 418×255 flush, panel `#F2F3EF` 201px, 48px olive badge, 1px rule 120px, small line 13/700, title 1.25rem/1.3, gap 48 |
| Photo + inset card | full-bleed 1440×405 photo, white card 720×285 at x 628–1348, 1px rule 100% (RT e) | 1440×560 photo, white card 720×300 at x 628–1348, 1px rule 100% |
| Body | 16px, nav 16/500 (RT b) | 1rem / 1.75, nav 1rem 500 |
| Containers | 1294 (73px margins), 1350 cards (RT c) | 1294 / 1350 / 760 |
| Radius / shadow | 0 photos and cards; pills r25–30; no shadows (RT d) | same |
| Images | daylight documentary photos, 1.6:1 full bleed, people small in the place, no masks (RT e) | film-grain documentary photos, 3:2 / 4:3 / 2.57:1, people small in the grounds, no masks |
| Motion | `.ons_u` drop-in −70px 1000ms cubic-bezier(.19,1,.22,1); ledger stagger 250ms from 750ms; card photo 1.1→1; hero slide drift (RT g) | `sp-reveal--down` 28px 1s same easing; ledger delays .75/1/1.25s; `sp-reveal--zoom` 1.06→1; hero `sp-parallax` 8% |
| Decoration | peeking next slide; 100% heading rules; dash under year (RT f) | faded third ledger column; 100% 1px ink rules under section titles; dashes under figures and booking numerals |

## 11. Forms (form contract v1 — `steps/form-contract-v1` exists)
- Copy `pipeline/assets/forms/shippress-forms.php` → `inc/`, its CSS and editor JS → `assets/` unchanged; `require_once` in functions.php. No fake forms, no mail/subscribe backend, no import-time plugin detection.
- **Contact & directions** (`contact`) **and Booking** (`booking`, a booking page): each calls `shippress_form_slot( kind: contact )` — Contact: directly under the H2 "Write to reception" (first section after the head), container 760; Booking: under the H2 "Ask for dates", after the four reserve rows. First published CF7, then WPForms. **Fallback** (buffered literal markup, unchanged button): the **T3 pill** as an `<a>` to `mailto:hello@nohara-park.example?subject=…` — label "Email reception" (Contact) / "Ask for dates by email" (Booking), subject "Dates request — Nohara Holiday Park" — plus phone and reception hours line. Never link back to /contact/.
- **Newsletter page** (`newsletter`, standalone, not an alias of the journal): newsletter slot (email `type=email` required + submit) under the two intro paragraphs, container 760. **Home block 10 strip** and the **footer** (compact row) also carry the newsletter slot. Order: MailPoet (explicit ID via `shippress_form_id`), then MC4WP; CF7 / WPForms only by an explicit dedicated newsletter ID (never auto-reuse the contact form). No plugin: native mailto POST with the entered address and the visible notice "Opens your email app. Send the request to subscribe; you are not subscribed yet."
- **Fields** (CF7, WPForms, MailPoet, MC4WP, Jetpack, `.wp-block-form` scoped classes and `.sp-newsletter-fallback` only; no global selectors): contact fields expected = name, email, phone (optional), stay type (select: gravel pitch / grass pitch / two-bed lodge / three-bed lodge / winter storage), arrival date, nights, guests, message (textarea), consent checkbox; newsletter = email (+ consent checkbox if the plugin provides it). Label Nunito Sans .875rem 700 `#1F1F1F`; input / select / textarea **50px** high (textarea 160px), 1px `#1F1F1F` border, **radius 0** (RT d), background `#FFFFFF`, text `#1F1F1F`, placeholder `#5C5C5C`; checkbox / radio `accent-color: #5F6848`; submit = T3 pill look (olive `#5F6848`, white text, radius 25px, 50px; the disc is decorative and optional on plugin submits); **focus** 2px `#1F1F1F` outline, 3px offset (on the olive submit too); **error** `#9A3A2C` text + 1px `#9A3A2C` border + message under the field; **success** `#1F1F1F` text on `#F2F3EF` with a 4px olive left edge.
- **Tokens**: `--sp-form-accent: var(--wp--preset--color--olive)`, `--sp-form-on-accent: var(--wp--preset--color--base)`, `--sp-form-radius: 0` (submit keeps 25px via its own rule), `--sp-form-focus: var(--wp--preset--color--ink)`, `--sp-form-surface: #FFFFFF`, `--sp-form-text: var(--wp--preset--color--ink)`. Light grounds: white, `#E7E9E4` band, `#F2F3EF` panel → light tokens. **Dark-ground variant** (only if a form sits on a dark section; none planned — keep it working): surface `#FFFFFF`, text `#1F1F1F` inside fields, labels/notice `#FFFFFF`, accent `#FFFFFF`, on-accent `#1F1F1F`, focus `#FFFFFF`.
- **i18n semantic keys** in `inc/i18n/en.php` (then `L10N_SEMANTIC=1` extract; localised in zh-TW, ja, fr, de, not literal): `forms_email` ("Your email address"), `forms_subscribe` ("Send me the letters"), `forms_mail_notice` ("Opens your email app. Send the request to subscribe; you are not subscribed yet."), `forms_mail_subject` ("Newsletter request — Nohara Holiday Park"), `contact_email` ("Email reception"), `booking_email` ("Ask for dates by email"), `contact_subject` ("Dates request — Nohara Holiday Park"), plus newsletter intro and privacy line ("One letter a season. Unsubscribe any time; we never share your address."). Check rendered labels, fallback buttons, subject and notice in all five locales (and dynamic block attributes, not only visible pattern text).
- Forms: **no `sp-reveal`**, **never in the home first screen** (home's only slot is in block 10). `form-runtime-check.php` (five languages, no plugins) and `repo-gates.sh forms` must pass; check real CF7 at 390 / desktop on white and `#E7E9E4` grounds without submitting.

## 12. Home acceptance checklist
- [ ] 1440×900 first screen shows KV 1–6: H1 film-grain photo in the left 62% bleeding to the left edge under an 80px white sticky header; serif H1 4.5rem + "Since 2004 · Wenlow Vale" + lead in the right column; olive T3 pill with white "BOOK / DIRECT" disc under the lead **and** in the header; 1px white cue line + "01 / 03 — Pitches · Lodges · Out of season" at the photo foot; top 80px of the `#E7E9E4` ledger band visible at the fold.
- [ ] Hero is `sp-parallax` (`--sp-par: 8%`, 5% mobile), no reveal; check-parallax.mjs passes desktop + mobile.
- [ ] 390px: no vertical text, no absolute label over text, counter in flow under the photo; no horizontal overflow.
- [ ] First-screen saturated share ≤ 8% (check-first-screen.py ≤ 15%).
- [ ] Block order exactly §2 (11 blocks incl. footer).
- [ ] T1 ledger: band 230px, centred title straddling its lower edge, 3 equal columns with 1px `#1F1F1F` hairlines, serif figures 52 / 14 / Nov–Mar, 32×2 dashes, third column faded.
- [ ] Block 3 photo N1 is sticky (≥ 1024px) while 3 narrative paragraphs + the 7-name list scroll beside it.
- [ ] T2 cards (block 4 and block 9): photo flush on the panel, 48px olive square badge at the left edge, 1px vertical rule, small line + serif title; block 9 on the grey band with white panels.
- [ ] Block 6: G1 parallax (`--sp-par: 10%`) with a static white 720px inset card at the right carrying H2 + 1px rule + paragraph.
- [ ] 14 distinct photos on home (≥ 8), no repeats; 0 cutouts; images ≤ 300 KB, film grain visible, no text/logos/plates.
- [ ] ≥ 250 English words (target 650) and ≥ 3 narrative paragraphs ≥ 20 words.
- [ ] Price rows: 8 items, full 1294 width at ≥ 782px, price column nowrap right, not clipped at 800 / 1280; stacked on mobile; numbers equal §0 (€34, €24, €210, €690, €860, €380, €6, €320) and the note line.
- [ ] Booking rows Ask / Hold / Confirm / Arrive with facts Sat–Sat / 48 hours / 25% deposit / from 13:00, same as the Booking page.
- [ ] Exactly one top menu (one `core/navigation`, five links); footer links are text columns, not a second nav bar.
- [ ] Newsletter slot in the block 10 strip and the footer shows email + submit without plugins and the mailto notice; no reveal on forms.
- [ ] Fonts Newsreader / Nunito Sans (+ Noto Serif TC / JP subsets) via theme.json fontFace; editor = front end; max size 4.5rem ≥ 4.25rem.
- [ ] Reveals: H2s `sp-reveal--down` (1s, cubic-bezier(.19,1,.22,1)), ledger stagger .75/1/1.25s, cards `sp-reveal--zoom`; nothing transparent after scrolling to the bottom.
- [ ] auto-gates.mjs `en … 1 1` pass=true; pattern_source.py passes.
