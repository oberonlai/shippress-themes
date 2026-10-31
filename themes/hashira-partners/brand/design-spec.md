# Hashira Partners: design spec (binding for implementation)

Slug `hashira-partners`, small-warehouse leasing brokerage, viewing-request landing page. Row b20-6, type `landing`, `font_direction: sans`, five languages (en, zh-TW, ja, fr, de). Reference: ReeL, https://reel-re.co.jp/ (S5-Style, property reuse company). No secondary reference. IMAGERY: **photo**.

Home = one long conversion page, an anchor menu and one repeated CTA, **"Request a viewing"**. Borrow structure, technique, colour relation, numbers and the key-visual concept. Do not copy ReeL's photos, copy or logo. The row's hex, fonts and first-screen fields are reference only; this spec binds.

**Decisions that differ from stage-a.md (this spec wins):**
1. **Colour:** stage-a proposed brown ground `#2A221E` and tinted `#F3F0ED`. That is 15% lightness off the reference. The similarity brief allows ±5%, and nothing about warehouses rules out black, so the page uses ReeL's black and white. 焦茶 `#6A5348` survives only as the hover and focus colour.
2. **Headline text:** stage-a's "Small bays, shown properly." + "Find the right bay" does not fit one line at 118 px. The two lines are now "Small bays," / "shown properly." and together they are the H1.
3. **Hero motion:** stage-a lists sp-reveal on the hero, which the rules forbid. The hero uses a transform-only CSS load animation instead (section 3).
4. **Archive image:** token (e) says 4:3, but `ref/scroll-reel-5800.png` and `-6600.png` show a small 2:3 portrait at about 38% of the card, with "View More →" at bottom right. The screenshots win.

---

## 0. Fixed facts (home, inner pages and all five languages use exactly these)

| Item | Value |
|---|---|
| Name | Hashira Partners, small-warehouse leasing brokers |
| Founded | **2014** |
| Office | Unit 4, 18 Tanner Row, Port Merrin (fictional city; never add a real country) |
| Contact | viewings@hashirapartners.example · 555-0142 |
| Office hours | Mon–Fri 08:30–17:30 |
| Viewing hours | Tue–Sat 09:00–15:00 |
| Reply time | Within **1 business day** |
| Currency and units | **USD** and **m²** in every language; no conversions |
| Portfolio | **6 buildings, 50 bays, 90–420 m²** |

**People (7, full names unchanged in every language; never a four-person grid):**
| Name | Role |
|---|---|
| Mika Hashira | Founder, managing partner |
| Tomasz Wrona | Agent, Eastgate and Mill Cross |
| Adaeze Nwosu | Agent, Riverside and Ferry Road |
| Lucía Ferrer | Lease clerk |
| Daniel Cho | Building surveyor |
| Priya Raman | Viewing coordinator |
| Henrik Aas | Owner relations |

**Buildings (6; photos B1–B6):**
| # | Building | District | Bays | Size | Clear height | Rent from (per m², per month) |
|---|---|---|---|---|---|---|
| 1 | Tanner Row Sheds | Eastgate | 12 | 90–180 m² | 6 m | $12 |
| 2 | Quay Lane Units | Riverside | 8 | 120–240 m² | 5.5 m | $14 |
| 3 | Mill Cross Yard | Mill Cross | 10 | 150–300 m² | 6.5 m | $11 |
| 4 | Foundry Court | Eastgate | 6 | 200–420 m² | 8 m | $11 |
| 5 | Ferry Road Depot | Riverside | 9 | 100–220 m² | 5 m | $13 |
| 6 | Orchard Street Works | Mill Cross | 5 | 90–160 m² | 4.5 m | $15 |

Bays add up to 50. Sizes and rents must not vary between pages.

**Fees (6 rows; identical on Fees page and in all languages):**
| Item | Price |
|---|---|
| First viewing round, up to 3 bays | Free |
| Each extra viewing round | $120 |
| Floor and loading check report | $340 |
| Lease read-through with our clerk | $480 |
| Placement fee, lease up to 24 months | 1 month's rent |
| Placement fee, lease of 25 months or more | 1.5 months' rent |

The placement fee is paid only once a lease is signed. Listing a bay is free for owners.

**Case notes (4; the tenants are fictional):**
| # | Project | Concept | Overview | Type | Photo |
|---|---|---|---|---|---|
| 1 | Bay 3, Tanner Row Sheds, 180 m² | A stockroom with a van door | A bicycle-parts seller outgrew a garage and needed one level floor with a roller door wide enough for two vans. | Parts storage | C1 |
| 2 | Bay 7, Mill Cross Yard, 240 m² | Early mornings, cold floors | A flower wholesaler wanted north light and a 05:00 loading slot, so we viewed the yard at that hour. | Cool dispatch | C2 |
| 3 | Bay 2, Foundry Court, 320 m² | Height for one big machine | A print finisher needed 8 m clear and a floor rated for its folder, which Daniel Cho checked before terms. | Print finishing | C3 |
| 4 | Bay 6, Ferry Road Depot, 160 m² | A workshop with a shared yard | A furniture restorer wanted a bench by the shutter and a neighbour who would not mind dust. | Workshop | C4 (Cases page only) |

No moved-in dates, savings, ratings or guarantees.

**How a viewing runs (5 prose rows, same order on Home and Viewings page):**
1. **Request.** Tell us the size, the district and when you need it. We reply within 1 business day.
2. **Call.** A 20-minute call with Priya Raman to narrow the list to 3 bays.
3. **Viewing round.** About 2 hours, up to 3 bays, with an agent and, where possible, the owner.
4. **Check.** Measure the shutter, walk the loading route, test the power.
5. **Terms.** If one bay fits, Lucía Ferrer reads the heads of terms through with you.

---

## 1. Signature techniques (three, all must be obvious at a glance)

### T1. Ruled two-line headline
- **Source:** ReeL first screen, https://reel-re.co.jp/, `ref/reel-re-first.png`.
- **Reference:** three full-width rules, one above, one between and one below two headline lines. The rule gap (88 px) is smaller than the type (118 and 130 px), so glyphs touch the rules and descenders cut through the bottom one. A bold line sits over a lighter, larger, tightly tracked line.
- **Ours:** Home hero, Home §7 close, and every inner page head.
- **Geometry (1440):** gutter 51 px [c]; rules 2 px `#FFFFFF`, full container width; gap **88 px**; first rule y = 112. Line 1 Schibsted Grotesk 700, 118 px [b]. Line 2 Schibsted Grotesk 500, 130 px, tracking -0.05em [b]. Both lines use `line-height: 88px` so the glyphs overrun their slots.
- **Must not be diluted:** glyphs must touch or cross the rules; the descenders of "shown properly." must cross the third rule. Do not increase the gap, do not clip the text, do not shrink line 1 below 7.375rem at 1440, no all-caps [b].
- **Inner heads:** same construction, 96 px / 104 px, rule gap 72 px.

### T2. Case panel with 4-column caption
- **Source:** ReeL case-study strip, `ref/reel-re-s3600.png`, `ref/scroll-reel-5800.png`.
- **Reference:** near-full-height photos, radius 0, 20 px gaps, a bottom dark gradient, and four caption columns (Project / Concept / Overview / Type) with a 12 px label over a 16–20 px white value [e].
- **Ours:** Home §4, three panels (C1, C2, C3) stacked vertically with a 20 px gap. A pinned horizontal strip is not possible with sp-scroll, so the stack keeps the size, gap and caption instead.
- **Geometry (1440):** panel width `calc(100vw - 40px)`, so 20 px from each edge; height `min(858px, 95vh)`; radius 0; `object-fit: cover`. Gradient: bottom 55%, `linear-gradient(to top, rgba(0,0,0,.78), rgba(0,0,0,0))`. Caption: grid `1.1fr 1.6fr 1.9fr .8fr`, column gap 40 px, padding 0 51 px 48 px. Label Outfit 500 12px white; value Outfit 500 20 px (Overview 16 px, lh 1.55), white.
- **Must not be diluted:** four real columns on desktop, photo full bleed to the panel edge, no card ground, no rounded corners, white text only.

### T3. Stepped-bar archive
- **Source:** ReeL Works Archives, `ref/scroll-reel-5800.png`, `ref/scroll-reel-6600.png`.
- **Reference:** three touching columns, each 25 px lower than the one to its left, so 24 px solid black bars form a staircase. Under each bar: bold title, grey summary, small meta line, a small portrait photo at left, and "View More →" at bottom right.
- **Ours:** Home §5, 6 cards in 2 rows.
- **Geometry (1440):** the block starts at x = 247 and runs to the right viewport edge (ref). h2 94 px, two lines, lh 1.0, Schibsted Grotesk 500. Columns have **gap 0**, so the bars touch at their corners. Step with `margin-top: 25px` and `50px`, never `transform` (it collides with sp-reveal). Bar 24 px `#000000`, full column width, margin-bottom 18 px. Title Outfit 700 1.25rem; summary 1rem `#767676` max 3 lines; meta Outfit 500 .8125rem black, format "Tanner Row · 90–180 m²"; photo width 38% of the column, ratio 2:3, radius 0; "View More →" 1rem, right-aligned to the photo's bottom edge. Each card has 36 px right padding; the bar spans it. Row gap 88 px.
- **Must not be diluted:** bars must be solid black, 24 px thick, and visibly stepped, with no gap between columns.

### Continuation to inner pages
| Page | T1 | T2 | T3 |
|---|---|---|---|
| Buildings | head | — | full 6-card staircase with rent |
| Case notes | head | all 4 panels | — |
| How a viewing runs | head | one panel (W1) with 4 columns: Length / Bays / With / Cost | — |
| Fees | head | — | 3 "what's included" notes with stepped bars above the table |
| Team | head | — | 7 people as stepped bars, each with a photo-free text card |
| Owners | head | one panel (O1) | — |
| Bay guide | head | — | 3 size bands as stepped bars |
| Notes (journal) | head | — | post cards use the staircase |
| Contact | head | — | — |
| Newsletter, Thanks | head | — | — |
| Privacy, Terms | small head (rules, one line) | — | — |

---

## 2. Key visual concept

**(1) Reference.** ReeL's first screen is a black field and nothing else: a two-line headline ("想像する建築" over "Re-Imagination") locked between three white rules, an "Our Mission" label left, a bold paragraph right at 52%, an outline pill "Scroll to Discover ↓", and coordinates at the foot. The story is that land and buildings hold a potential waiting to be imagined. The signature motion: headline lines rise about 24 px into their rule slots, and the page flips black to white on scroll.

**(2) Ours.** The same ruled black field, with the story moved to a concrete place: an empty bay is a beginning, not a vacancy. ReeL's empty black lower half becomes a documentary photograph of an agent and an owner standing in an empty bay with the roller shutter half open and daylight falling in under it. The coordinates become the facts of that bay. On load the rules draw, the lines rise, and the photo opens upward like a shutter. On scroll the photograph moves slower than the page, then black hands over to white.

**(3) KV checklist.** All six are on the first screen at load, or visible at the first scroll for #6.
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Three full-width rules framing two headline lines | Same rules, H1 "Small bays," / "shown properly." | y 112–288, full container | Rules `scaleX(0→1)` from left, 1.1s; lines rise 24 px, .9s, .1s apart | — |
| 2 | "Our Mission" label left, paragraph right at 52% | "What we do" + 3-line paragraph | Row y 312–464; label x 51; paragraph x 747 | None | — |
| 3 | Outline pill "Scroll to Discover ↓" | Outline pill "Request a viewing ↓" → `#request` | Under paragraph, x 747 | None; hover fill | — |
| 4 | Empty black lower half | Agent and owner in an empty bay, shutter half open | y 476–860, full bleed | Opens upward on load; `sp-parallax` on scroll | **H1** |
| 5 | N/E coordinates and © at foot | "Tanner Row · Bay 3", "180 m² · Clear height 6 m", "© 2026 Hashira Partners" | Black strip y 860–900; x 51, x 747, right | None | — |
| 6 | Black to white page flip | Black hero meets the white §2 | After the hero | None (section grounds) | — |

"Bay 3, Tanner Row Sheds" in #5 is the same bay as Case 1, so the facts must stay at 180 m² and 6 m.

---

## 3. Home page

### First screen (1440×900)
Black `#000000`, `min-height: 100svh`, flex column.
- **Header** overlay, y 0–96, section 5.
- **Headline** T1, y 112–288.
- **Mission row** two columns split at 52%. Label Outfit 500 1rem white. Paragraph Outfit 600 1.375rem lh 1.45 white, width 642 px, 3 lines: "We find small warehouse bays for local firms, and we show them properly: the shutter raised, the floor walked, the owner in the room." Pill 14 px under it.
- **Photo** H1, `flex: 1`, minimum 320 px, full bleed, radius 0, about 43% of the screen.
- **Foot strip** 40 px, black, Outfit 500 .8125rem white.
- Forbidden: table, form, search box, sp-reveal, centred heading.

**Hero load animation (transform and clip only, not sp-reveal):** written as `@keyframes` inside `html.sp-js:not(.sp-no-motion)` and `@media (prefers-reduced-motion: no-preference)`. The base state is the final state. No opacity is animated, so the headline is visible at first paint. Headline lines: `translateY(24px → 0)`, .9s, `cubic-bezier(.22,1,.36,1)`, line 2 delay .1s. Rules: `scaleX(0 → 1)`, origin left, 1.1s, same easing. Photo: `clip-path: inset(22% 0 0 0 → 0)` on an inner wrapper around the parallax layer, .9s. No `overflow: hidden` around the headline; descenders must show. `.sp-reveal` count inside the hero = 0.

**Mobile first screen (390×844):** everything in normal flow, nothing absolutely positioned over text, no vertical type. Header 64 px; rules 1.5 px, gap 44 px, gutter 24 px; both lines `11.5vw`; label above paragraph, 1rem lh 1.6; pill; photo fills the rest, minimum 240 px; strip wraps to 2 lines in flow, 12 px text.

**Headline length limit:** each line ≤ 16 Latin characters. fr: "Petites cellules," / "bien montrées." de: "Kleine Hallen," / "richtig gezeigt." zh-TW: 「小倉庫，」/「好好帶看。」 ja: 「小さな倉庫を、」/「きちんと案内。」 CJK sizes are 0.75× (88 / 98 px) in Noto Sans weights 700 / 500. Rewrite rather than wrap if a line overflows.

### Block order
| # | Pattern | Purpose | Layout | Photos | Copy |
|---|---|---|---|---|---|
| 1 | `front-hero` | promise + CTA | section above | H1 | 30 words |
| 2 | `front-vision` | why we exist | White. Bold statement 2.5rem lh 1.3, 3 lines, width 1000 px, at left; 1 px black rule full width; 86 px below: left "Our view" 1.25rem, body 1.0625rem lh 1.75, width 555 px, outline pill "How a viewing runs →"; right from x 747 photo 4:3, radius 0 | V1 | 110 words, narrative |
| 3 | `front-marquee` | the mood | White, single line "Small bays. Honest viewings." 235 px, tracking -0.05em, Schibsted Grotesk 500, looped; full bleed; pad 80 px | — | 4 words |
| 4 | `front-cases` | proof | `#cases`. T2 with 3 panels, then small right-aligned link "All case notes →" | C1, C2, C3 | 3 × 35 words |
| 5 | `front-buildings` | what we handle | `#buildings`. T3 with h2 "Buildings / we handle", 6 cards, then "All buildings →" | B1–B6 | 6 × 22 words |
| 6 | `front-viewing` | how it runs | `#viewing`. White. h2 94 px at x 51. 5 rows split at 52%: left number + name, 1.25rem 600; right paragraph 1.0625rem; 1 px black rule between rows. Then a line: "The first viewing round is free. A placement fee of 1 month's rent is due only once a lease is signed." Then W1 full bleed, `aspect-ratio: 21/9`, parallax | W1 | 5 × 30 words |
| 7 | `front-request` | the one CTA | `#request`. Black. T1 "Bring your list" / "we'll bring the keys."; left: label + R1 4:3, width 555; right from x 747: 40 words + form (name, email, size needed, district select) + submit pill | R1 | 60 words |
| 8 | Footer | info | Black, facts strip, office, hours, page links, language switch | — | — |

Form submit is an outline pill "Request a viewing" 42 px, white on black, the same component as the hero. Form mechanism: reuse Fumi Launch's static form pattern (no external service), landing on `/thanks/`. No sp-reveal on the form. Pills link to `#request` at the end of §4, §5 and in every inner page head: same text, same style. It is the only CTA.

English home ≥ 250 words with narrative paragraphs in §2, §4 and §6. CJK home ≥ 500 characters. Image positions: 1 + 1 + 3 + 6 + 1 + 1 = **13** (≥ 8), none repeated.

### Comparison with the last four themes
| # | Mimamori College | Mahora Foods | Asaoka Screening | Hazuki Instruments | **Hashira Partners** |
|---|---|---|---|---|---|
| 1 | gateway strip hero | tile-row hero | hero + wave | seam strip hero | **black ruled headline over a photo half** |
| 2 | notice rows | centred heading + script | mission line | info row | **statement + rule + two-column view** |
| 3 | five-course sheet | slideshow panel | scoop tiles | dated rows | **235 px type marquee** |
| 4 | figures + feather | menus | ruled results rows | big statement | **full-height case panels** |
| 5 | who | sites | proof band | 3+4 tiles | **stepped-bar archive** |
| 6 | day panel | case panel | twin story panels | parallax band | **ruled prose rows + wide photo** |
| 7 | placement band | rates | packages | care | **black ruled close + request form** |
| 8 | story, notices, footer | contact | dates, close pill | staff, visit | footer |

Why not alike: no tiles, no centred headings, no price table or people on Home, no rounded shapes. Black and white with photographs as the only colour is unlike all four. Hazuki and Asaoka's ruled or dated rows carry listing data; ours carry prose in a 52% split. The closest used technique elsewhere, Kazoe's top/bottom halves, has a dither gradient and label boxes; ours has rules and a documentary photo.

---

## 4. Inner pages (13 pages including Home)

Every content page = T1 black head (label left, 2-line paragraph right at 52%, "Request a viewing ↓" pill) → white body → small black close with the pill. No sidebar. Same photo never twice on one page.

1. **Buildings** `/buildings/`: T3 staircase of all 6, with bays, size, clear height and rent in the meta. A short paragraph on what we do not handle: bays over 420 m², cold stores, hazardous storage. Photos B1–B6.
2. **Case notes** `/cases/`: all 4 T2 panels, C1–C4. A short intro on why we write them.
3. **How a viewing runs** `/viewings/`: the 5 rows with 60-word bodies, "What to bring" list, "What we check" list, T2 panel W1.
4. **Fees** `/fees/`: three stepped notes (Free to view / Paid only on signing / Owners list free), then the 6-row table, then 3 plain questions. Photo G1 under the table.
5. **Team** `/team/`: Mika Hashira's 120-word founding story (2014) beside photo A1, V1 wide below it, then 7 people as stepped cards with name, role and one sentence. No portraits, no four-across grid.
6. **Owners** `/owners/`: for bay owners. T2 panel O1, what a listing includes, free listing, Henrik Aas contact.
7. **Bay guide** `/bay-guide/`: three size bands by stepped bar (90–160, 160–280, 280–420 m²), what fits in each, what shutter width and clear height mean. Photo G1.
8. **Notes** (posts index, single, archive): T3 cards, ≥ 3 posts with tags. Single: category label, title 3rem, 680 px text column, featured image 16:9 radius 0. Images G1, B3, O1.
9. **Contact** `/contact/`: office, hours, directions in text (no map), R1 4:3 at the right from x 747.
10. **Newsletter** `/newsletter/`: "New bay list" early-access signup; single email field and pill. Monthly list of newly free bays.
11. **Thanks** `/thanks/`: T1 "Thank you," / "we'll reply soon."; states 1 business day.
12. **Privacy** and 13. **Terms**: text only, 680 px column, no reveal.

404 and search: T1 head + pill back to Home.

---

## 5. Header, footer

Header `position: absolute`, transparent, white on black heads (every page starts black). Left: wordmark "Hashira Partners" Schibsted Grotesk 500 1.25rem with a solid 10×24 px white bar before it (our own mark). Right: Outfit 500 .9rem (14.4 px [b]): Buildings, Cases, Viewings, Fees, Team, language switch. On Home the first four are anchors `#buildings`, `#cases`, `#viewing` and a Fees page link. No second menu. Under 960 px: "Menu" + three-line icon opening the core overlay.

Footer black: 1 px white rule, four text columns (Office / Hours / Pages / Language), then the T1 foot-strip format.

---

## 6. Colour, type, radius, motion tokens

| Role | Hex | Source | Use | Share |
|---|---|---|---|---|
| Ground dark | `#000000` | token (a) ground | hero, heads, §7, footer | first screen about 50% |
| Ground light | `#FFFFFF` | token (a) white sections | all body sections | rest of page |
| Ink | `#000000` | token (a) | text, bars, rules on white | — |
| Text on dark | `#FFFFFF` | token (a) | text, rules on black | first screen about 7% |
| Grey body | `#767676` | token (a) ≈ `#8A8A8A`, darkened | secondary text on white | — |
| 焦茶 secondary | `#6A5348` | design-plan row | pill hover fill, focus ring, link underline only | ≤ 1%; never at rest on the first screen |

`#8A8A8A` on white is 3.4:1, so `#767676` (4.5:1) is the one change beyond ±5%, made for contrast. Not beige: the light ground is pure white. Photographs supply the only colour.

**First-screen saturation:** the reference measures 0%, which a photo half cannot equal. `check-first-screen.py` limit: cap 15%; target ≤ 6%. H1 must be low-chroma: if it fails, reduce only that image's saturation (e.g. ImageMagick `-modulate 100,70`), keeping the people natural.

**Type (sans):**
- Latin headings: **Schibsted Grotesk** 500 / 700. Latin body, labels, nav: **Outfit** 400 / 500 / 600 / 700. Both OFL, nearest available to token (b)'s geometric grotesque.
- zh-TW stack: `"Schibsted Grotesk", "Noto Sans TC", "Noto Sans JP", sans-serif` and `Outfit, "Noto Sans TC", "Noto Sans JP", sans-serif`.
- ja stack: the same with `"Noto Sans JP"` before `"Noto Sans TC"`.
- en, fr, de stack: Latin face, then `"Noto Sans TC", "Noto Sans JP", sans-serif`.
- No 明體 anywhere. Load all through theme.json `fontFamilies` + `fontFace`, including zh-TW and ja subsets, so editor and front end match. `:lang()` rules require `inc/editor-lang.php`. CJK sizes 0.75×, body lh 1.85; fr and de `hyphens: auto`.

| Preset | Size | Use | Token |
|---|---|---|---|
| small | .8125rem | meta, strip | 12px labels (b) scaled |
| base | 1.0625rem | body, lh 1.75, weight 400 | 16.5px (b) |
| medium | 1.25rem | card titles | (b) |
| large | 2.5rem | statement | ref s1800 |
| x-large | 5.875rem | section h2, lh 1.0 | 94px (b) |
| xx-large | 7.375rem | hero line 1 | 118px (b) |
| huge | 8.125rem | hero line 2 | 130px (b) |
| colossal | 14.6875rem | marquee | 235px (b) |

Fluid sizes go in style.css: h2 `clamp(2.75rem, 6.5vw, 5.875rem)`, marquee `clamp(5rem, 16.3vw, 14.6875rem)`, hero lines per section 3. Sentence case. Radius 0 everywhere except pills. Pill: 1 px outline, height 42 px, padding 10×43 px, radius 999 px [d]. Section gaps 80–100 px [c]. Gutter 3.5% (51 px at 1440) [c].

---

## 7. Scroll effects and parallax

Copy `pipeline/assets/sp-scroll/` unchanged. Three effects on Home, none on the hero, forms, the fee table or legal text. Set `--sp-dist: 24px`, `--sp-dur: .9s`, easing `cubic-bezier(.22,1,.36,1)`.

| Effect | Class | Block | Source | Trigger, time, easing |
|---|---|---|---|---|
| Lines and columns rise | `sp-reveal sp-reveal--up` + parent `sp-stagger` | §5 cards; §2 statement; §6 rows | ReeL headline and archive | Intersection, once; .9s; `.22,1,.36,1`; 24 px; stagger .12s |
| Giant text loop | `sp-marquee` | §3 | ReeL "We Are ReeL" | Continuous, 30s, linear; duplicate child `aria-hidden` |
| Parallax | `sp-parallax` | see below | ReeL's scroll-linked case strip | Scroll-linked, linear |

**Parallax (required):**
| Block | Background | Foreground | `--sp-par` desktop / ≤ 781 px | Reference motion |
|---|---|---|---|---|
| **Hero photo half** | H1 | None; all text stays outside the moving layer | **8% / 6%** | Stands in for ReeL's scroll-linked movement |
| §4 case panels | C1, C2, C3 | Gradient and caption, not in the moving layer | 6% / 6% | ReeL's case strip translating with scroll |
| §6 wide photo | W1 | None | 8% / 6% | Same |

`check-parallax.mjs` needs ≥ 6 px displacement at 1280 and 390. If the mobile hero falls short, raise it to 8%. Section grounds alone do the black-to-white flip.

---

## 8. Responsive

- 390 px: no vertical type, no absolutely positioned label over text on the first screen. Hero per section 3.
- T2 under 782 px: panel height auto, min 560 px; caption stacks as 4 label + value rows on the gradient, gradient covers the bottom 75%; 12 px side margins.
- T3 under 782 px: one column, `margin-top` steps reset to 0, x = 24 px; photo 38% stays.
- Two-column splits collapse below 782 px, label first.
- **Fee table:** at ≥ 782 px it is the full container width, `Item | Price`, price column `white-space: nowrap; text-align: right; width: 12rem`, never clipped at 800 or 1280 and in any language. Under 782 px every table stacks, item above price.
- `overflow-x: clip` on html and body. The marquee must not widen the page.

---

## 9. Images (17, Grok, one at a time, read each one)

STYLE (exact string on every prompt):
`documentary photograph, 35mm lens, natural daylight through roller shutters and clerestory windows, high-key but true contrast, muted warm-grey concrete, steel and cardboard tones, candid unposed moment, handheld feel, slight fine grain, real modern international light-industrial district, diverse adults in plain workwear, no text, no logos, no signage lettering, no brand marks, no Japanese elements`

≤ 2000 px, ≤ 300 KB, webp, no cut-outs. Blank walls, doors and vans: no numbers or lettering.

| ID | Subject and composition | Ratio | Used on (`*` = Home) |
|---|---|---|---|
| H1 | Wide, empty bay seen from inside; roller shutter half open at the back, daylight on the concrete floor; agent with a folder and owner standing mid-distance, small in frame, talking; lots of empty floor | 21:9 | ***Home hero** only |
| V1 | Three people at a plain table reading a floor plan with no lettering, a tablet, in a bright small office | 4:3 | ***Home §2**; Team |
| C1 | Bay with steel racking of unmarked cardboard boxes and a van at a raised shutter | 4:3 wide | ***Home §4**; Cases |
| C2 | Early light, people moving buckets of pale flowers across a cold concrete floor | 4:3 wide | ***Home §4**; Cases |
| C3 | Tall bay, a large grey finishing machine, one operator, high windows | 4:3 wide | ***Home §4**; Cases |
| C4 | Furniture restorer's bench beside an open shutter, a chair frame, dust in the light | 4:3 wide | Cases |
| B1 | Low corrugated shed row, rolled shutters, overcast sky, parked plain van | 2:3 | ***Home §5**; Buildings |
| B2 | Brick waterside units with grey shutters | 2:3 | ***Home §5**; Buildings |
| B3 | Yard between two steel-clad sheds, puddles, painted ground lines | 2:3 | ***Home §5**; Buildings; Notes |
| B4 | Tall old foundry hall exterior with steel windows | 2:3 | ***Home §5**; Buildings |
| B5 | Depot with a canopy over a loading edge | 2:3 | ***Home §5**; Buildings |
| B6 | Narrow street of small workshops with roller doors | 2:3 | ***Home §5**; Buildings |
| W1 | Agent and client measuring a shutter opening with a tape, seen from behind, long floor beyond | 21:9 | ***Home §6**; Viewings |
| R1 | Hand passing a plain key ring to another hand at a half-open shutter | 4:3 | ***Home §7**; Contact |
| O1 | Owner sweeping an empty bay, sun across the floor | 4:3 wide | Owners; Notes |
| G1 | Pallet, tape measure and folded floor plan with no lettering on concrete | 3:2 | Fees; Bay guide; Notes |
| A1 | Founder reading papers on a stool in an empty bay, three-quarter length, 40s, seen in profile | 4:5 | Team |

17 images in total, 13 of them on Home.

---

## 10. Similarity table (target 80%)

| Dimension | Reference | This theme |
|---|---|---|
| Colour | `#000` ground, `#FFF` text, photo only | Same; `#6A5348` hover only |
| Grey body | ≈ `#8A8A8A` | `#767676` for 4.5:1 |
| First-screen black share | ≈ 88% | ≈ 50% black + 43% photo (row requires a photo half) |
| Saturated share | 0% | target ≤ 6% |
| h1 | 118 px bold, lh 1 | 118 px 700; line slot 88 px as measured |
| Latin line | 130 px, -0.05em | Same |
| Section h2 | 94 px, lh 1 | Same |
| Marquee | 235 px, -0.05em | Same |
| Body | 16.5 px, 500 | 17 px, 400 (long copy) |
| Gutter | 51 px | Same |
| Split | 52% (x 747) | Same |
| Rules | 3 full-width, 1–2 px | 3 full-width, 2 px |
| Rule gap | 88 px | Same |
| Radius | 0; pills 999 | Same |
| Pill | 42 px, 10×43, 1 px | Same |
| Case panels | Near full height, 20 px gaps, gradient, 4 columns | Same, stacked not pinned |
| Archive | 3 columns, 25 px step, 24 px black bar, 2:3 thumb | Same |
| Vision photo | 4:3, x 747, width 642 | Same |
| Reveal | 24 px, .9s, expo-out | Same |
| Marquee motion | Horizontal loop | 30s linear |
| Case motion | Pinned horizontal | Parallax 6% (sp-scroll limit) |
| Page flip | Black → white on scroll | Section change |

Photos, copy and logo are all our own.

---

## 11. Home acceptance checklist

1. First screen shows all six KV items; no table, form, search or `.sp-reveal` in the hero.
2. Headline glyphs touch the rules and descenders cross the third rule at 1440.
3. H1 shows the half-open shutter, two people and open floor; no text.
4. `check-first-screen.py` passes on the limit in section 6.
5. §2 statement, rule and 52% split; V1 starts at x 747.
6. §3 marquee renders at 235 px at 1440 with no horizontal overflow.
7. §4 three panels, 20 px from the edges, four caption columns on desktop.
8. §5 staircase: 24 px black bars, 25 px step, columns touching, 2:3 photos.
9. §6 five rows, rule between each, W1 21:9.
10. §7 ruled black close with form; the pill reads "Request a viewing" everywhere; only one CTA style.
11. Home ≥ 13 image positions, none repeated; ≥ 250 words; ≥ 3 narrative paragraphs.
12. Colours are black, white and `#767676`; `#6A5348` only on hover and focus.
13. Motion: `check-parallax.mjs` passes on desktop and mobile; reduced-motion shows the final state.
14. `auto-gates.mjs … 1 1` passes; mobile first screen has no overlap.
15. Facts on Home match section 0 exactly.
16. Fonts: Schibsted Grotesk and Outfit, no serif anywhere, largest theme.json size ≥ 4.25rem.
17. Block order equals section 3; no tiles, centred headings or people grid.
