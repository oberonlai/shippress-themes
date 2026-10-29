# Kairo Supply: design spec (stage 1, r2 rebuild, binding for implementation)

> **Amendment (v1.0.2):** the flat yellow silhouette described for the home first screen (T1) was removed after review; the home hero keeps the photo, the diagonal daylight band, the vertical catch copy and the dot rail. Sections below that mention the home hero shadow are historical.


Slug `kairo-supply`, electrical wholesaler trade counter, **trade-account landing page** (type `landing`, archetype sticky-media, hero full-bleed-photo, nav top-bar, page_structure landing-longform). Five languages: en, zh-TW, ja, fr, de.
Reference (only one, token-complete): **otoden.co.jp** (Otofuke Densetsu 50th anniversary site, S5-Style, electrical construction). Measurements: `brand/reference-tokens.md`; screenshots: `brand/ref/`.
We borrow structure, techniques, the key-visual idea, colour relationships and measured tokens. We do **not** copy photos, copy, logo, the "TOKACHI LIGHT." wordmark, the 50th badge or the record-sleeve "SPOT LIGHT" disc.
This rebuild replaces v1.0.0. Must **not** look like v1 / kiban-structural / shirota-laundry: no photo window (capsule, stadium or oval) over a cropped giant wordmark, no hairline grid with ticks, no ghost wordmark.

Signature (row): *a documentary photograph of a coil of cable slid across the counter to a contractor, then who the counter is for, how an account is opened and a single way to apply.*

---

## 0. Fixed brand facts (identical on every page, footer and all five languages)

| Item | Value |
|---|---|
| Name | Kairo Supply (wordmark "KAIRO SUPPLY", tagline "Trade counter for electricians") |
| Founded | **1987** (family counter, now run by second generation) |
| Address (fictional, international-neutral) | Unit 4, Northgate Trade Park, 18 Mill Lane, Northbridge (local address order per language in brand.md) |
| Counter hours | **Mon–Fri 06:30–17:00 · Sat 07:30–12:00 · Sun & public holidays closed** |
| After-hours lockers | collection from **17:00 to 06:30**, PIN by text message |
| Stock | **4,200 lines** on the shelves; cable on **180 drums** cut to length |
| Same-day cut-off | order by **14:00** → on the counter the same day; by **17:00** → delivered next morning |
| Account process (3 stages) | **1 Apply** (10-minute form, online or at the counter; bring company registration + one trade reference) → **2 Check** (credit decision within **2 working days**) → **3 Trade** (account number by e-mail, opening limit **€2,500**, terms **30 days from end of month**) |
| Account card holders | up to **5** named people per account, each with their own PIN |
| Currency | **EUR** in every language (no conversions) |
| Phone / mail | +00 0000 4710 (placeholder format) · counter@kairo-supply.example |

### Counter rates (price list, 6 items — the same on Home, Rates, Delivery, Accounts and all languages)
| # | Item | Price |
|---|---|---|
| 1 | Opening a trade account | €0 |
| 2 | Cable cut to length (per cut, free from 10 m) | €4 |
| 3 | Van delivery within 25 km (free over €400 net) | €18 |
| 4 | Next-morning delivery before 08:00 | €28 |
| 5 | Cable drum deposit (refunded on return) | €45 |
| 6 | After-hours locker collection | €0 |

### Named people (7, counter team; diverse, fictional)
1. **Marta Kovač** — branch manager (joined 2004)
2. **Daniel Osei** — counter lead, early shift
3. **Priya Raman** — trade accounts & credit
4. **Tomás Herrera** — cable cutting & drums
5. **Lena Vogt** — fittings, distribution boards
6. **Samuel Adeyemi** — deliveries & lockers
7. **Ingrid Halvorsen** — solar & EV charging desk

### Customer stories (4, fictional firms)
1. **Brightwell Electrical** (2-person domestic firm) — rewiring a 1960s terrace: 14 coils over two early collections.
2. **Halden Solar** — next-morning delivery of roof cable and isolators for three installs a week.
3. **Northfield Facilities** (hospital maintenance team) — one account, five card holders, monthly statement.
4. **Meridian Panels** (panel builder) — cable cut to 37 exact lengths from a single drum.

---

## 1. Signature techniques (three, all must be obvious at a glance)

### T1. Diagonal daylight band + flat yellow cast shadow over a full-bleed worker photo, vertical catch copy at the right edge (otoden first screen, `ref/otoden-0.png`, https://otoden.co.jp/)
- Reference: a worker stands full-frame, slightly right of centre, against a pale grey wall. A broad band of white daylight crosses the whole frame **from lower-left to upper-right at ≈35°**; to the left of the figure a **flat, solid #FFD900 silhouette** of the worker (hard hat and shoulders) sits on the wall like a cast shadow. Two lines of vertical (tate) catch copy hang at the right edge, top-aligned ≈ 210 px from the top. A 5-dot vertical-label nav sits bottom-left.
- Ours (home hero, block 1): photo **K01** — contractor in hard hat at the trade counter, a coil of cable being slid across to him; plain pale grey wall left of him.
  - Light band: an overlay layer `linear-gradient(145deg, transparent 0 30%, rgba(255,255,255,.0) 30%, rgba(255,255,255,.46) 32% 50%, rgba(255,255,255,0) 52% 100%)`, spanning 100% × 100%; visually the band rises from lower-left (≈x 0, y 85%) to upper-right (≈x 70%, y 0). Check on the screenshot that it reads as a **wide** band (≈ 18% of the hero diagonal), not a thin line.
  - Yellow shadow: inline SVG silhouette (hard-hatted head + shoulders + coil on one shoulder, simple flat path, no detail), fill `#FFD900`, `mix-blend-mode: multiply`, box **210 × 520 px** at 1440×900 (14.6vw × 58% height), left edge at **x = 31%**, bottom at **y = 92%**, so it sits on the wall to the left of the contractor and does **not** overlap his body or the text. Area check: filled ≈ 65% of the box → ≈ 5.5% of the screen.
  - Vertical catch copy (≥ 1024 px): `writing-mode: vertical-rl`, two columns, right edge **right: 5.5vw**, top **210 px**, Albert Sans/Noto Sans 500, **1.5rem** (24 px, token "vertical-writing 20–24px"), letter-spacing .08em, ink `#111111`. en: "Cable on the counter / before the van is loaded." In en the vertical lines use `text-orientation: mixed` (Latin rotated); zh-TW/ , ja/ .
  - Left lockup (where otoden has the 50TH lockup): top **26%**, left **5.5vw**: small caps label "TRADE COUNTER · SINCE 1987" (0.75rem 600, ls .02em, `#5C6E7A`), then H1 "Trade / accounts / open here." Albert Sans 500 **4.5rem** (xx-large, max size) lh 1.02 ls -.01em ink, left-aligned, max 3 lines; then a 1-line sub (1rem, 32 words max): "Kairo Supply is the electricians' counter on Mill Lane: 4,200 lines on the shelves, cable cut to length while you wait." The lockup sits on the pale wall area; it must not overlap the yellow shadow by more than 20% of its width.
- Not diluted: the band must be visible across the **whole** frame; the shadow must be **solid #FFD900** (not outlined, not 50% opacity, not grey); the catch copy must be **vertical** at ≥ 1024 px.
- Motion: on load the shadow slides `translate3d(-24px,0,0) → 0` + opacity 0→1, the band opacity 0→1, **1.2s cubic-bezier(.87,0,.13,1)** (token easeInOutExpo), delay 0.2s; pure CSS keyframes on non-observed elements; under reduced-motion / `?sp-static` / editor: final state immediately. No sp-reveal in the hero.

### T2. Giant rounded-top photo stage pinned while statement lines pass, lower part dissolving into pale fog with a blurred yellow light cone (otoden INTRODUCTION, `ref/otoden-1.png → -2 → -3`)
- Reference: a dot + caps label "INTRODUCTION", then a 1440-wide photo stage with **top corners r≈200 px** (bottom square). The photo is pinned; short Japanese lines in wide tracking scroll past on the right half; the bottom 40% turns into white fog and a blurred, grainy yellow cone of light rises from the lower right.
- Ours (home block 2): stage photo **K02** (long warehouse aisle with cable drums, roof daylight, pale upper half).
  - Section: full-bleed, background white. Label row (T-marker, see §1 supporting) at container left.
  - Stage: `.kai-stage` height **230vh** (≥ 782 px); child `figure.kai-stage__media` `position: sticky; top: 0; height: 100vh; border-radius: 200px 200px 0 0; overflow: clip` (never `hidden`), image `object-fit: cover`, `object-position: 30% 50%` (subject left third, open sky right).
  - Fog: `::after` on the figure, `linear-gradient(to bottom, rgba(255,255,255,0) 55%, rgba(244,244,243,.85) 82%, #F4F4F3 100%)`.
  - Light cone: `::before`, a skewed ellipse 46vw × 70vh at right 4%, bottom −10%, `background: radial-gradient(closest-side, rgba(255,217,0,.85), rgba(255,217,0,0))`, `filter: blur(24px)`, `transform: rotate(-32deg)`, opacity .9. Second small cone 14vw at left 22%, bottom 14% (otoden's left small cone). Optional grain: a 2% opacity noise SVG. Saturation: off the first screen, fine.
  - Lines: `.kai-stage__lines` absolutely in the right column (x 57%–92%), 3 blocks spaced **70vh** apart, each 2–4 lines, Albert Sans 500 **1.25rem** lh **2.6** (46 px rhythm like the ref's 46 px line pitch) **letter-spacing .18em** (ref wide tracking), ink `#111` (on the pale sky; text-shadow 0 0 18px rgba(255,255,255,.7) for safety). Each block `sp-reveal sp-reveal--up`.
    - Block 1: "Most jobs stall for one small thing. / A gland, a breaker, / the last ten metres of cable."
    - Block 2: "We keep it on the shelf. / 4,200 lines, 180 drums, / one counter that opens at 06:30."
    - Block 3: "Open an account once, / and the counter knows your firm / every morning after."
  - < 782 px: no sticky; figure becomes `aspect-ratio: 4/5`, radius **120px 120px 0 0**, the three blocks stack under it on `#F4F4F3`, horizontal text, letter-spacing .08em.
- Not diluted: radius stays ≥ 200 px at desktop (not 24, not full pill); the fog and the yellow cone must both be visible at the bottom of the stage; text must be in wide tracking (≥ .15em) and pass the pinned photo.

### T3. Two-up white cards r60 with big soft shadow, vertical title at top-right, inset r15 photo at the bottom, on #F4F4F3 ground (otoden company / work pages, `ref/otoden-late-1.png`)
- Reference: on a `#F4F4F3` ground, two white cards 506 px wide, gap 88 px, radius ≈ 60 px, shadow `0 20px 60px rgba(0,0,0,.12)`; upper 40% of the card is empty white except a **vertical title at the top-right**; at the bottom an inset photo 420 × 300 (1.4:1) radius 15 px, 43 px side padding.
- Ours (home block 3 "two doors"): card A **"Who the counter is for"** (photo **K03**), card B **"How an account opens"** (photo **K04**). Container 1100; cards each **506 px**, gap **88 px**, height ≈ 580; padding 43 px; vertical title `writing-mode: vertical-rl` top 48 px right 43 px, **1.375rem** 500 ls .12em ink (en uses mixed orientation: "WHO IT'S FOR" in caps; zh-TW, ja/); bottom-left of the empty area: one line 0.9375rem + "→" link text; photo 420×300 r15 at the bottom. Whole card is a link (to `#who` and `#account` on home; on inner pages to the page). Hover: shadow `0 28px 70px rgba(0,0,0,.16)`, translateY(−4px), `transition-delay: 0s`.
  - < 1024 px vertical title becomes horizontal 1.25rem above the photo; cards stack, width 100%, radius 40.
- Not diluted: radius ≥ 56 px on the card and 15 px on the photo (two different radii); the card must float on `#F4F4F3` with the shadow visible; empty white space above the photo stays ≥ 35% of the card height (do not fill it with paragraphs).

### Supporting (not counted, required)
- **Section marker** (otoden "● INTRODUCTION"): yellow dot Ø **36 px** `#FFD900` + caps label Albert Sans 600 **0.875rem** ls .08em ink, gap 18 px, plus a tiny 1 px dotted corner line (14×14 px, `border-top/right: 1px dotted #111`) touching the dot's top-right. Opens **every** home section after the hero and every inner page section.
- **Tilted portrait band** (otoden WE ARE TEAM OTOFUKE, `ref/otoden-late-2.png`): white slab headline boxes rotated −4° and tilted portrait cards with scalloped numeral badges, used for "Who the counter is for" (home block 4). Ground changed from full yellow to pale steel `#DCE3E8` (reason in §5).

### Continuation to inner pages (required on ≥ 4; here 9)
| Page | T1 (light band + yellow shadow + vertical title) | T2 (r200 rounded-top stage + fog) | T3 (r60 cards, vertical title, r15 photo) |
|---|---|---|---|
| Trade Accounts `/accounts/` | page head: K04 short hero (60vh, min 480), band overlay, small yellow shadow chip (silhouette of a hard hat only, 120×160) bottom-left, vertical page title right (≥1024) | K08 stage (non-sticky, 80vh, fog) carrying the 3 stage lines | two cards "What to bring" / "What you get" (K12, K17) |
| Who We Serve `/who-we-serve/` | head with K03 | — | 4 cards (2×2) one per trade: domestic, maintenance, solar & EV, panel builders (K05, K06, K07, K16) |
| The Counter `/counter/` | head with K09 | K10 stage with the stock numbers (sp-count) in the fog | cards "After-hours lockers" / "Drum yard" (K17, K15) |
| Ranges `/ranges/` | head with K16 | K02 sticky stage with 5 range lines (cable, containment, distribution, lighting, solar & EV) | — |
| Delivery & Collection `/delivery/` | head with K13 | — | cards "Next-morning van" / "Locker collection" (K15, K17) |
| Rates `/rates/` | head with K10 (band only, no shadow) | — | rate table (full width, §6) + one card "Account holders pay the same rates" (K08) |
| Team `/team/` | head with K14 | K11 stage (fog) with the 1987 story lines | — (people are a ruled name list, not a face grid) |
| About `/about/` | head with K15 | K11 stage (fog) with 3 history lines | — |
| Stories `/stories/` (blog index + single) | head with K11 | single: featured image in r200-top frame with fog | index: 4 story cards in T3 style (vertical category title, r15 photo) |
| Apply `/apply/` | head with K12, full T1 (band + shadow + vertical title) | — | one wide T3 card holding the application steps and the apply button |
| Visit `/visit/` | head with K11 | — | card with hours + address; second card lockers |

Note on About: About uses K15 in the head and K11 in the stage (Team uses K14 head and K11 stage — different pages, so no same-page repeat).

---

## Key visual concept

### (1) Reference first screen: concept, story, signature motion
- **What is drawn**: one electrician in blue overalls, harness and pale-blue hard hat, standing frontal, full height to the knees, on a pale grey wall. A diagonal beam of daylight cuts the wall; his shadow on the wall is not grey but **flat yellow** — the brand colour as light. Huge wordmark across the top (we do not borrow), 50th lockup left, two vertical lines of catch copy on the right ("Light up Tokachi, be that person"), vertical 5-dot nav bottom-left, round disc badge bottom-right.
- **Story**: electricity is invisible; the people who carry it are what deserves the spotlight. The yellow shadow says "this person *is* the light".
- **Signature motion**: on load the light band and yellow shadow slide in (≈1.2s, easeInOutExpo); scrolling leads into the pinned INTRODUCTION photo stage that dissolves into fog while lines of copy pass; yellow light cones rise from the fog.

### (2) Our transfer scene (same composition, same motion idea, same image type: documentary photo)
- **Industry**: an electrical wholesaler's trade counter at 06:40. A contractor in a pale hard hat and steel-grey work jacket stands at the counter, centre-right; a coil of cable is being slid across the counter to him by the counter clerk's hands entering from the right. Daylight from the shopfront window falls across the wall in one slanted band; his shadow is flat yellow. Story: **"The right cable is on the counter before the van is loaded"** — the counter is where an electrician's day starts, and the account is what makes it quick.
- Same composition: figure slightly right of centre, frontal, cropped at the knees by the counter; plain wall on the left for the shadow and lockup; vertical copy right; dot nav bottom-left; one round yellow disc top-right (our "Apply" button, in place of otoden's yellow menu disc).
- Same motion: band + shadow slide on load (CSS, 1.2s cubic-bezier(.87,0,.13,1)); hero photo `sp-parallax` (scroll); then the pinned rounded-top stage (K02 warehouse aisle) with lines passing and fog + yellow cone (block 2).

### (3) KV checklist (all visible in the first screen at 1440×900; mobile notes in §8)
| # | Reference element | Ours | Where | Motion | Photo |
|---|---|---|---|---|---|
| 1 | Worker portrait, full-bleed, frontal | Contractor at the counter receiving a coil of cable, documentary photo | full-bleed 100vw × 100svh (min 640), subject x 50–74%, counter edge at y 82% | `sp-parallax` on the photo layer, `--sp-par: 8%` (mobile 5%) | **K01** |
| 2 | Diagonal daylight band | Translucent white band overlay at ≈35°, lower-left → upper-right | full frame, inside the parallax layer | fade-in 1.2s on load (CSS), then moves with the layer | overlay on K01 |
| 3 | Flat yellow cast shadow of the figure | Solid `#FFD900` silhouette (hard hat + shoulders + coil), multiply | wall, x 31–45.6%, bottom 92%, 210×520 | slide-in 24 px + fade 1.2s on load | overlay on K01 |
| 4 | Two-line vertical catch copy, right edge | "Cable on the counter / before the van is loaded." vertical-rl 1.5rem | right 5.5vw, top 210 px (≥1024); mobile: horizontal strip under the photo | none | — |
| 5 | Vertical 5-dot nav with vertical labels, bottom-left | 5 dots Ø16 `#E5E5E3` (active `#FFD900`) on a 1 px dotted vertical line, vertical labels "Who · Accounts · Counter · Rates · Apply" 0.8125rem, anchor links to home sections | left 5.5vw, bottom 60 px (≥1024 only) | none | — |
| 6 | Round yellow disc at top-right | Ø58 `#FFD900` disc "Apply" (0.75rem 600 ink, two short lines ≡ above the word) linking to `/apply/` | header, far right, y 31 | hover: scale 1.06 0.3s | — |

All six must be implemented and visible on the en home first screen at 1440×900. K01 is in the image list (§9).

---

## 2. Home page

### First screen (1440×900)
- Header (top bar, height 120 incl. padding; on the front page `position: absolute` and transparent over the hero with ink text; on inner pages a sticky bar `rgba(255,255,255,.72)` + `backdrop-filter: blur(12px)`; no scroll listener): logo wordmark "KAIRO SUPPLY" Albert Sans 600 1.125rem ls .14em at left 32 px; text nav (Who we serve, Accounts, Counter, Rates, Stories, Visit) 0.875rem ls .08em, gap 28 px, right-aligned, ending 110 px from the right; language switcher (EN ▾) 0.8125rem; yellow disc Ø58 at right 32 px. Under 1024 px: nav collapses to the core navigation overlay button (2 horizontal lines, 28 px), disc stays.
- Hero block: §1 T1 + KV checklist. Nothing else: no table, form, search box, no buttons in yellow except the disc.
- First-screen saturated area target **≤ 10%** (shadow ≈ 5.5%, disc ≈ 0.3%, photo graded desaturated with no hi-vis), hard cap **15%** (`check-first-screen.py`).

### Block order
| # | Pattern | Purpose | Layout and photo | Copy |
|---|---|---|---|---|
| 1 | `front-hero` | KV: contractor at the counter | §1 T1, K01, `sp-parallax` | H1 + 1 sub (≈ 40 words incl. vertical copy) |
| 2 | `front-stage` | introduction (narrative) | marker "INTRODUCTION"; §1 T2 pinned stage K02 with 3 line blocks; under the stage (on `#F4F4F3`) a 2-column intro: left lead 1.75rem 500 "A counter, not a catalogue." right 2 paragraphs | 3 line blocks + 110 words |
| 3 | `front-doors` | the two doors | §1 T3 on `#F4F4F3`: card A "Who the counter is for" K03, card B "How an account opens" K04 | 2 × 18 words |
| 4 | `front-who` `#who` | who the counter is for | full-bleed band `#DCE3E8`, padding 140/0; left: white slab headline "WE SERVE / THE TRADE." Albert Sans 500 **4.5rem** in 2 white boxes (padding .05em .2em), boxes rotated −4° and −2°, with a scalloped badge Ø130 `#244A62` "4 TRADES" white overlapping the right end of line 1; right column (x 760–1270): H3 1.5rem "Four kinds of firm stand at this counter." + 70-word paragraph; bottom: **3 tilted portrait cards** 380×470 (r 28 px top, square bottom, white 10 px frame) rotated −6°, 0°, +5°, overlapping the band's bottom edge by 120 px, each with a numeral badge (scalloped Ø80 `#244A62`, "01/02/03") at the top-left, a dashed caps name line (0.75rem, ls .1em: "DOMESTIC ELECTRICIANS", "MAINTENANCE TEAMS", "SOLAR & EV INSTALLERS") and a white vertical tape caption (vertical-rl 1rem) at the right edge ("Rewires and fuse boards", "Hospitals, schools, plants", "Roof cable, isolators, chargers"); photos K05, K06, K07; 4th trade (panel builders) named in the paragraph. < 1024: cards become a horizontal scroll row (scroll-snap), not rotated more than ±3°, tapes horizontal under the photo | 90 words |
| 5 | `front-account` `#account` | how an account opens (3 stages, prose rows, **not** a step grid) | white; marker "ACCOUNTS"; H2 2.25rem "Ten minutes to apply. / Two working days to decide."; 2 columns: left 6/12 three rows separated by 1 px `#E5E5E3` rules, each row: scalloped badge Ø56 `#5C6E7A` white "1/2/3", title 1.25rem 500 (Apply / Check / Trade), one 30-word sentence, fact right-aligned nowrap 0.875rem `#5C6E7A` ("10 min", "2 working days", "€2,500 · 30 days EOM"); right 5/12 photo **K08** 4:5 r15 with a white T3-style card (r40, shadow) overlapping its bottom-left by 64 px containing "Up to 5 card holders per account" | 3 × 30 + 40 words |
| 6 | `front-counter` | what's on the counter | `#F4F4F3`; marker "THE COUNTER"; asymmetric pair: **K09** 4:3 r15 at columns 1–7, **K10** 4:3 r15 at columns 8–12 shifted down 120 px; under them a row of 4 numbers with `sp-count`: "4,200 lines", "180 drums", "06:30 opens", "14:00 same-day cut-off" — number Albert Sans 500 3.5rem (x-large) ink, label 0.875rem `#5C6E7A`; then 2 paragraphs | 100 words |
| 7 | `front-rates` | counter rates | white; marker "RATES"; H2 2.25rem "What the counter charges."; 6-row rate table (§0) full container width 1100 (§6), price column right, nowrap; note under it 0.8125rem: "Prices in EUR excl. VAT. Cable and fittings at your account price list." + link → Rates | table + 30 words |
| 8 | `front-morning` | the counter at 06:30 (proof + person) | full-bleed **K11** Cover, min-height 720 (mobile 520), `sp-parallax --sp-par: 10%` (mobile 6%); overlay `linear-gradient(to top, rgba(17,17,17,.55), rgba(17,17,17,0) 60%)`; bottom-left (left 5.5vw, bottom 80, max 560) white quote 1.5rem lh 1.6 "By ten to seven the first vans are loaded. Most of what they take was picked the evening before." — **Daniel Osei, counter lead since 2011**; link "Meet the counter team →" | 45 words |
| 9 | `front-stories` | 3 short customer stories (proof) | white; marker "STORIES"; 3 T3 cards (width 340, r60, shadow, vertical category title top-right, photo 1.4:1 r15 at bottom): stories 1–3 with their featured images K13, K15, K16; title 1.125rem + one line | Query Loop, 3 × 20 words |
| 10 | `front-apply` | the single way to apply | `#F4F4F3`; one wide T3 card (1100 × ≈ 520, r60, shadow): left half text — marker "APPLY", H2 **3.5rem** "Open a trade account.", 50 words, primary button `#111` text white r1000 h56 "Apply in 10 minutes" → `/apply/` + secondary text link "or ask at the counter"; under it hours + address lines 0.875rem; right half photo **K12** 1.4:1 r15 with a small yellow dot Ø36 on its top-left corner; vertical title "APPLY" top-right of the card (≥1024) | 70 words |
| 11 | footer | info | `#244A62` ground, white 0.875rem; logo, address, hours, phone/mail; 2 nav columns; language list; small yellow dot before "Counter open now" text (static, no live status); © line | — |

Home photo positions: K01, K02, K03, K04, K05, K06, K07, K08, K09, K10, K11, K12, K13, K15, K16 = **15** (≥ 8), no repeats.
English home ≥ 320 words; narrative paragraphs in #2 (×2), #4, #6 (×2) ≥ 3. CJK home ≥ 600 characters. Story cards K13/K15/K16 are the featured images of stories 1–3 (§9).

### Comparison with recent home block orders
| # | Shisei Clinic | Awa Taproom | Kesho College | Eiyo Clinic | old Kairo v1 / Kiban / Shirota | **Kairo Supply r2** |
|---|---|---|---|---|---|---|
| 1 | arch photo + white wordmark | framed window over room + wordmark | drifting 3-panel + clipped word | inset rounded photo + paper strip | photo window (capsule/stadium/oval) over cropped wordmark, hairline grid | **full-bleed worker photo, diagonal light band, flat yellow shadow, vertical copy right, dot rail left** |
| 2 | arch concept | underlined lead | centred concept + wide photo | scrub-fill statement | story / grid | **pinned r200-top stage fading to fog, wide-tracked lines** |
| 3 | 3 ovals + vertical labels | full-bleed room wipe | course tiles | coverflow | dark band headline | **two floating r60 cards, vertical titles, r15 photos** |
| 4 | full-bleed treatment panels | 4 tap cards | hour rows | pine arches | cards in grid cells | **tilted portrait cards + rotated slab headline on steel band** |
| 5 | 4 stages + arch | seats card | instructors | stories | … | **3 ruled account rows + photo with overlapping card** |
| 6 | text stories | visit | tuition table | price list | | **asymmetric photo pair + counting numbers** |
| 7 | arch + names | | quotes | paper CTA | | **full-width rate table** |
| 8 | fees + FAQ | | | | | **full-bleed parallax morning photo + quote** |
| 9 | slate hours card | | | | | **story cards (T3 small)** |
| 10 | | | | | | **one wide apply card** |
Why not alike: no arch/oval/capsule masks, no wordmark of any kind in the hero, no hairline grid, no framed window, no drifting panels, no coverflow, no scrub-fill. The diagonal light band + flat yellow shadow, the r200-top sticky stage with fog and light cones, and the floating r60 cards with vertical titles appear in no shipped theme (checked against used-refs.txt techniques).

---

## 3. Inner pages (11 + blog + 404)

Each inner page: page head (T1 short) → marker sections → close with a small T3 apply card ("Open a trade account → /apply/", 1100 × 220, r60) except on Apply itself. No sidebar.

1. **Trade Accounts** `/accounts/` — who can apply (registered electrical firms, sole traders with a trade reference), the 3 stages (T2 stage K08 with the 3 lines), what to bring / what you get (T3 cards K12, K17), terms (30 days EOM, €2,500 opening limit, reviewed after 3 months), card holders (up to 5, PIN), statements monthly by e-mail, FAQ 6 Q&A as a ruled list.
2. **Who We Serve** `/who-we-serve/` — 4 trades as T3 cards 2×2 (K05, K06, K07, K16) each 80 words; then a paragraph on what we don't do (no retail counter for the public — homeowners welcome to buy with an electrician present).
3. **The Counter** `/counter/` — hours, how picking works (phone/e-mail order before 17:00 picked for 06:30), cut to length (free from 10 m, €4 per cut below), drum deposit €45, stage K10 with sp-count numbers, T3 cards K17 (lockers) and K15 (drum yard).
4. **Ranges** `/ranges/` — 5 ranges (cable; containment & fixings; distribution boards & protection; lighting & controls; solar & EV charging) on a K02 sticky stage, then each range as a ruled row with 40 words. Unbranded; no real manufacturers.
5. **Delivery & Collection** `/delivery/` — same-day counter (by 14:00), next-morning van before 08:00 (€28), van within 25 km (€18, free over €400 net), lockers 17:00–06:30 (€0); T3 cards K15, K17; K13 in the head.
6. **Rates** `/rates/` — the 6-row table (§0) full width, notes on VAT and account price lists, drum deposit return rules.
7. **Team** `/team/` — K14 head, story stage K11 (1987: founder's counter, son and daughter took over 2015), the 7 named people as a **ruled 2-column name list** (name 1.125rem 500, role 0.875rem, one 20-word line each), no face grid.
8. **About** `/about/` — history 1987 → today in 3 paragraphs (no timeline graphic), K15 head, K11 stage, values: "Stock, not promises".
9. **Stories** `/stories/` (home.html, archive.html, single.html) — the 4 customer stories as posts (§0), cards T3 small; single: featured image in r200-top frame with fog bottom, text column 680.
10. **Apply** `/apply/` — full T1 head (K12, band + shadow + vertical title "APPLY"), the application as a wide T3 card: 3 stages, document checklist, mailto/phone button "Apply by e-mail" (`counter@kairo-supply.example?subject=Trade account`); the mailto button is the single action; no form.
11. **Visit** `/visit/` — address, hours, lockers, parking for vans (8 bays), directions as text; T3 cards (hours, lockers); K11 head.
12. **404 / search** — marker + H1 + T3 apply card.

---

## 4. Colour (reference codes kept; one swap justified)

| Role | Hex | Source token | Use | Share |
|---|---|---|---|---|
| Base | `#FFFFFF` | ref ground #FFFFFF | page ground, cards | ≈ 50% |
| Soft ground | `#F4F4F3` | ref #F4F4F3 | card sections (doors, counter, apply), fog end | ≈ 22% |
| Rule grey | `#E5E5E3` | ref #E5E5E3 | 1 px rules, inactive dots | < 1% |
| Ink | `#111111` | ref ink #111111 | headings, body, primary button | ≈ 8% |
| Steel (row main) | `#5C6E7A` | row hex blue-grey (≈ ref #366083 desaturated) | labels, account badges, secondary text, links hover | ≈ 4% |
| Sky steel | `#88A5BE` | ref #88A5BE | photo grade target, hover rings, focus outline | ≈ 1% |
| Pale steel band | `#DCE3E8` | ref #88A5BE at 30% on white | "who" band ground | ≈ 8% |
| Deep slate | `#244A62` | ref #244A62 | footer, scalloped badges, dark disc | ≈ 6% |
| Signal yellow | `#FFD900` | ref --color-main #FFD900 (unchanged) | hero shadow, section dots, disc button, light cones, active dot | ≈ 3–5% |
| Muted text | `#6B7177` | ref label grey #9A9A9A darkened for 4.5:1 | captions, meta | — |

- Yellow is kept exactly (electrical trade = fits perfectly). Swap: otoden's **full yellow people band (≈25% of the page)** becomes pale steel `#DCE3E8`, because ShipPress rules forbid large high-saturation fields and the row's palette is steel; the yellow survives in the dots, shadow, disc and cones so the relationship (white + pale grey + yellow signal + slate blue) stays.
- Contrast: ink on `#FFD900` 14:1 (disc text ink, never white); white on `#244A62` 9.6:1; `#5C6E7A` on white 5.2:1.
- First screen saturated: target ≤ 10%, gate ≤ 15%; ref measured 16.8%.

## 5. Typography (font_direction **sans**)

- Latin display: **Albert Sans** 500/600 (ref token, display 500 ls .013em). Latin body: **Hanken Grotesk** 400/500 (row font). Both sans; no serif anywhere.
- Stacks:
  - headings `"Albert Sans", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`
  - body `"Hanken Grotesk", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`
  - `:lang(zh-TW)` headings and body `"Albert Sans"/"Hanken Grotesk", "Noto Sans TC", sans-serif`; `:lang(ja)` with `"Noto Sans JP"` first after the Latin face. sans-serif only, never serif.
- Load all via **theme.json `fontFamilies` + `fontFace`** (woff2 in `assets/fonts/`: Albert Sans 500, 600; Hanken Grotesk 400, 500; Noto Sans TC 400/500 subset and Noto Sans JP 400/500 subset made with the Hokuto/Hada method, not the broken subset script). Editor and front end identical; because style.css uses `:lang(`, copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it.
- Sizes (theme.json presets): small **0.8125rem**, base **1rem** (body, lh 1.75, ls .02em; ref 14/26 ls .04em scaled to 16 px), medium **1.25rem** (stage lines, ls .18em), large **1.75rem**, x-large **3.5rem** (ref section words 57 px), xx-large **4.5rem** (hero H1, who slab) — max ≥ 4.25rem ✔. Nav 0.875rem ls .08em; labels 0.75rem 600 ls .02em; vertical copy 1.5rem ls .08em.
- Line heights: headings 1.08 (H1 1.02), body 1.75; CJK body 1.85, CJK headings ≈ 0.75 × en size; fr/de `hyphens: auto`.
- Weights: 500 for headings (ref), 600 for labels/logo, 400 body.

## 6. Responsive (hard)

- **390 px first screen**: no vertical text, no absolutely positioned labels over text. Hero = photo 100% × 72svh (`object-position: 64% 40%` keeps the contractor and coil), yellow shadow scaled to 120×300 at left 6%, bottom 10% of the photo (behind nothing), light band kept; lockup (label + H1 `clamp(2.75rem, 11vw, 4.5rem)`) is placed **below** the photo in normal flow on white, followed by the catch copy as a horizontal 2-line paragraph 1.125rem. Dot rail hidden < 1024. Header: logo + menu button + disc Ø48.
- **Rate table** (home #7 and /rates/): at ≥ 782 px the table is **full container width (1100, `width:100%`)**, 3 columns (No. 64 px · item auto · price 140 px), price column `text-align: right; white-space: nowrap; font-variant-numeric: tabular-nums`, no `overflow` clipping, no fixed table width; check at 800 and 1280. < 782 px every table becomes stacked rows (`display:block` per row: item on line 1, price right-aligned on line 2), no horizontal scroll.
- Any other table (hours, FAQ, account terms) also stacks on mobile.
- Sticky stage only ≥ 782 px; tilted cards → scroll-snap row < 1024 (children of the scroll row get no sp-reveal; reveal goes on the row container).
- No horizontal overflow at 390 and 1280 (`html, body { overflow-x: clip }`), rotated slab boxes contained by `overflow: clip` on the band.

## 7. Scroll effects (sp-scroll, 3 effects + CSS sticky)

| Effect | sp class | Where | Source (otoden) | Trigger / time / easing |
|---|---|---|---|---|
| Fade-up with stagger | `sp-reveal sp-reveal--up` (+ parent `sp-stagger`) | stage line blocks (#2), doors cards row (#3, on each card; parent stagger), who headline + paragraph (#4, not on scroll-row children), account rows (#5, stagger), counter photos (#6), story cards (#9, stagger), inner-page cards | `js-fadeup`: opacity 0→1, translate 1rem→0, delay 200 ms, inline stagger | IntersectionObserver (sp-scroll.js), `--sp-dist: 16px` (ref 1rem), `--sp-dur: .8s`, easing `cubic-bezier(.23,1,.32,1)` (easeOut), stagger 0.12s steps |
| Count-up | `sp-reveal sp-count` | the 4 numbers in #6 and on /counter/ | otoden scalloped numerals (40 PEOPLE) | 1.2s easeOutCubic (sp default), once |
| Parallax | `sp-parallax` | **#1 hero** (layer = K01 + band + shadow) and **#8 morning** (Cover K11) | otoden pinned stage / slow photo drift | CSS scroll-driven `animation-timeline: view()`, linear; JS fallback IO + translate3d |
| Pinned stage (no class) | CSS `position: sticky` | #2 stage, /ranges/ stage | otoden INTRODUCTION stage | scroll-linked, ≥ 782 px only; parent `overflow: clip` |
Hero: no reveal. Rate table, apply button area, forms and legal text: no reveal. Total sp effect types on home: 3.

### Parallax (required)
- **Hero (#1)**: `.kai-hero.sp-parallax` (Group, alignfull, min-height 100svh); moving layer `.sp-parallax__layer` = wrapper holding the K01 `img` + light-band overlay + yellow SVG shadow (they move together so the shadow stays on the wall); foreground (lockup, vertical copy, dot rail) **not** in the layer. `--sp-par: 8%` desktop, `--sp-par: 5%` < 782 px (keep on mobile). Reference motion: otoden's photo stays pinned while content passes; we render the same "photo slower than the page" feeling.
- **Morning (#8)**: Cover `sp-parallax`, background K11, `--sp-par: 10%` (mobile 6%); foreground quote stays static.
- reduced-motion / `?sp-static` / editor: no movement. Verified by `check-parallax.mjs` (≥ 6 px desktop and mobile).

## 8. Similarity target ≈ 80% (values from reference-tokens.md)

| Dimension | Reference value (token) | Kairo Supply value |
|---|---|---|
| Main signal colour | #FFD900, ≈6% first screen (a) | #FFD900 (same), ≈5.5% first screen |
| Blues | #88A5BE / #244A62 / #366083 (a) | #88A5BE, #244A62 same; #5C6E7A row steel replaces #366083 |
| Ink / grounds | #111 / #FFF / #F4F4F3 / #E5E5E3 (a) | same four |
| Display face | Albert Sans 500, ls .013em (b) | Albert Sans 500, ls .01em; CJK Noto Sans TC/JP 500 |
| Body | 14/26 px, ls .04em (b) | 16/28 px (1rem/1.75), ls .02em (scaled for Latin readability) |
| Section word size | 57 px (b) | 3.5rem = 56 px (x-large) |
| Vertical copy | 20–24 px tate (b) | 1.5rem = 24 px vertical-rl |
| Nav | 14 px ls .08em (b) | 0.875rem ls .08em |
| Labels | 12 px 600 ls .02em #9A9A9A (b) | 0.75rem 600 ls .02em #6B7177 |
| Container | 1100 (c) | 1100 (`contentSize` 1100, `wideSize` 1280) |
| Card width / gap | 506 / 88 (c) | 506 / 88 |
| Section padding | 306 top / 220 bottom (c) | `clamp(8rem, 21vw, 19.125rem)` / `clamp(6rem, 15vw, 13.75rem)` = 306 / 220 at 1456 |
| Stage height | 2305 px sticky scene (c) | 230vh ≈ 2070 px at 900 tall |
| Card radius | ≈60 (d) | 60 (mobile 40) |
| Card shadow | 0 20px 60px rgba(0,0,0,.12) (d) | same |
| Inner photo radius | 15 (d) | 15 |
| Stage top radius | ≈200 (d) | 200 (mobile 120) |
| Discs / dots | Ø58 disc, Ø36 marker dot, Ø16 nav dots (f) | Ø58 Apply disc, Ø36 marker, Ø16 rail dots |
| Dotted rules | 1 px dotted (d, f) | 1 px dotted rail + marker corner |
| Photo ratio | cards 420×300 (1.4:1) (e) | 420×300 (1.4:1) |
| Imagery | documentary photo, daylight, desaturated sky blue (e) | same STYLE (§9) |
| Hero composition | frontal worker, light band, yellow shadow (e) | same, contractor at counter |
| Fog / cones | bottom 40% fog, blurred yellow cones (f) | fog from 55%→100%, two blurred #FFD900 cones |
| Badges | blue scalloped numerals (f) | #244A62 / #5C6E7A scalloped numerals |
| Fade-up | 1rem, .8s-ish, delay 200 ms, easeOut (g) | 16 px, .8s, stagger .12s, cubic-bezier(.23,1,.32,1) |
| Hero load | band/shadow slide, easeInOutExpo (g) | 1.2s cubic-bezier(.87,0,.13,1) |
| Smooth scroll | Lenis (g) | not used (policy) |
| Header nav | pill r1000, rgba(255,255,255,.5)+blur (d) | **not used** (stage-a: no pill nav); plain text nav + yellow disc |
Photos, copy, logo are our own.

## 9. Images (17, Grok, one at a time, read each)

STYLE (exact string for every image):
`documentary real photograph, natural daylight, high-key and airy, slightly desaturated cool sky-blue colour grade, pale grey and white surroundings, real tradespeople in plain steel-grey and navy work jackets and pale or white hard hats, no hi-vis vests, candid working moment, modern international light-industrial setting, 35mm lens, fine film grain, diverse adults, no text, no logos, no brand marks, no readable labels or signage, no Japanese elements`

| ID | Subject / composition | Ratio / size | Used on (once per page) | Home? |
|---|---|---|---|---|
| K01 | contractor in pale hard hat and steel-grey jacket standing frontal at a trade counter, centre-right of frame, cropped at the knees by the counter; a coil of grey cable being slid across the counter towards him by a clerk's hands entering from the right edge; left 45% of the frame a plain pale grey wall lit by a slanted band of window light | 16:9, 2000×1125 | Home hero | ✔ |
| K02 | long warehouse aisle of tall racks holding cable drums, one worker small at the left third reaching up, roof skylight daylight, upper half pale and empty | 16:10, 2000×1250 | Home stage; Ranges stage | ✔ |
| K03 | two electricians talking with a counter clerk across the counter, rolls of cable and boxes behind, side view | 1.4:1, 1400×1000 | Home doors A; Who We Serve head | ✔ |
| K04 | hands of a contractor filling a paper form on the counter beside a coil of cable and a pen, clerk's hand pointing, shallow depth | 1.4:1 | Home doors B; Accounts head | ✔ |
| K05 | portrait of a domestic electrician (woman, 30s) with a coil of cable over her shoulder, pale wall | 3:4, 1200×1600 | Home who 01; Who We Serve card | ✔ |
| K06 | portrait of a maintenance engineer (man, 50s) holding a tool bag, corridor of a plant room behind | 3:4 | Home who 02; Who We Serve card | ✔ |
| K07 | portrait of a solar installer (man, 20s) holding a reel of roof cable, sky behind | 3:4 | Home who 03; Who We Serve card | ✔ |
| K08 | counter clerk and contractor checking a printed order docket together at the counter (paper blank or unreadable) | 4:5, 1200×1500 | Home account; Accounts stage; Rates card | ✔ |
| K09 | hands measuring grey cable off a drum through a cable measuring wheel on a workbench | 4:3, 1600×1200 | Home counter; Counter head | ✔ |
| K10 | tidy shelves of small grey bins with conduit fittings and cable glands, slight angle | 4:3 | Home counter; Counter stage; Rates head | ✔ |
| K11 | trade counter building at dawn from the yard: roller door half up with warm light inside, two plain white vans, cool sky | 21:9, 2000×860 | Home morning (parallax); Team stage; About stage; Stories head; Visit head | ✔ |
| K12 | handshake across the counter with a coil of cable resting between them | 4:3 (cropped 1.4:1) | Home apply; Apply head; Accounts card | ✔ |
| K13 | worker loading cable drums into a plain van with a tail-lift, morning | 4:3 | Home story 1 (Brightwell); Delivery head | ✔ |
| K14 | three counter staff behind the long counter preparing orders, seen from the customer side, natural poses | 16:9 | Team head | |
| K15 | outdoor drum yard with stacked cable drums under a pale sky, one worker walking | 16:9 | Home story 2 (Halden Solar); About head; Counter card; Delivery card | ✔ |
| K16 | display shelf with unbranded distribution boards and circuit breakers, plain grey | 4:3 | Home story 3 (Northfield); Ranges head; Who We Serve card | ✔ |
| K17 | row of grey steel collection lockers along a wall, one door open with a boxed order | 4:3 | Accounts card; Counter card; Delivery card; story 4 (Meridian Panels) | |

- 17 images (12–18 ✔), 0 cutouts, each ≤ 300 KB, ≤ 2000 px, webp, `readme.txt` line per image (AI-generated, CC0). Faces natural, hands correct; regenerate any with text, logos, hi-vis or warped hands.
- Per-page no-repeat check: Home K01–K13, K15, K16 (15 positions, unique). Accounts K04, K08, K12, K17. Who K03, K05, K06, K07, K16. Counter K09, K10, K17, K15. Ranges K16, K02. Delivery K13, K15, K17. Rates K10, K08. Team K14, K11. About K15, K11. Apply K12. Visit K11. Stories index: posts' featured K13, K15, K16, K17 (+ head K11).

## 10. Home acceptance checklist

1. First screen 1440×900: K01 full-bleed, diagonal white band visible across the frame, solid #FFD900 shadow silhouette on the wall left of the contractor, two vertical lines of catch copy at the right, 5-dot vertical rail bottom-left, yellow Ø58 Apply disc top-right; H1 4.5rem left lockup; no wordmark across the top, no photo window, no table/form/search. Saturation ≤ 15% (target ≤ 10%).
2. KV checklist items 1–6 all visible.
3. Block 2: dot marker + r200-top stage, pinned at ≥ 782 px, fog and yellow cone visible, three wide-tracked line blocks pass on the right.
4. Block 3: two r60 white cards with visible soft shadow on #F4F4F3, vertical titles top-right, r15 1.4:1 photos at the bottom.
5. Block 4: rotated white slab headline at 4.5rem, three tilted portrait cards with scalloped numerals and tapes on the #DCE3E8 band.
6. Blocks 5–10 per the table; rate table full width at 800 and 1280, price column right and not clipped; stacked at 390.
7. ≥ 8 photo positions (15), no repeated image on the page, all photos same STYLE.
8. Numbers identical to §0 everywhere (06:30, 14:00, 4,200, 180, 2 working days, €2,500, 30 days EOM, 5 card holders, 6 rates).
9. Motion: hero and morning parallax pass `check-parallax.mjs` (≥ 6 px desktop + mobile, 0 under reduced-motion); ≥ 3 reveal elements hidden before entry; nothing transparent at the bottom; no reveal in the hero.
10. 390 px: no vertical text or overlapping absolute labels in the first screen, no horizontal overflow; fonts Albert Sans / Hanken Grotesk / Noto Sans TC/JP identical in editor and front end.
11. Section marker (yellow Ø36 dot + caps label + dotted corner) opens every home section after the hero.
