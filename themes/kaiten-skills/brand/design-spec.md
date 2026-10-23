# Kaiten Skills: design spec (stage 1, binding for implementation)

Slug `kaiten-skills`, online career-skills school (business writing, presenting, spreadsheets). Row b7-11: archetype card-mosaic, hero full-bleed-photo, nav overlay, page structure process-timeline. Type education / online course: Tutor LMS (free) + WooCommerce checkout, really buyable and viewable on the site.

References (S5-Style, education, never used before): **Yanokuchi** https://yanokuchi.ed.jp/ (s5-style 12141, primary) and **ECC-iCAP** https://www.ecc.kyoto-unicap.co.jp/ (s5-style 12143, secondary). Measurements: `reference-tokens.md` (cited below as `tok(a)…tok(g)`). Borrow structure, shapes, colour relationships and motion timing only. No copy, photos, illustrations or logos.

Fixed brand facts (every page, all five languages): Kaiten Skills, founded **2017**, studio at **Kanaalstraat 21, 3531 Utrecht, Netherlands** (fictional unit number). Founders **Ines Carvalho** (writing) and **Jonah Ellery** (platform and learner support). Currency **EUR** in every language, same numbers, no conversion.

---

## 1. Signature techniques (three; all must be obvious in the first glance at the home page)

### T1. Hand-cut photo frame with a blob plate biting the corner (Yanokuchi hero, https://yanokuchi.ed.jp/)
- Reference: the hero photo is not full-bleed edge to edge; it sits inset ~36 px left/right, top ~92 px, with ~36 px corners and a slightly wobbly, hand-cut edge (`tok(c)`, `tok(d)`, `tok(e)`). A deep-green asymmetric blob carrying the logo hangs off the top-left of the viewport (394×103) and bites the photo's top-left corner. Nav sits on the cream ground to the right, above the photo.
- Ours (home hero, block 1): photo **P01** inside `.ks-cut` frame.
  - Geometry at 1440×900: frame left/right inset **36 px**, top **92 px**, height **calc(100svh − 92px − 36px)** (≈ 772 px, `tok(e)` ~770), aspect ≈1.76. Corner radius **36 px**. Wobbly edge = an SVG `mask-image` (one path, `preserveAspectRatio="none"`, edge deviation 3–6 px, 14–18 bumps per long side) on the **outer** `.ks-cut` wrapper. The inner element carries `sp-parallax` (see 7); the mask must not be on the observed/parallax element.
  - Blob plate `.ks-blob`: fill **#8A4B3A**, absolute top 0 / left 0 of the header, **394×103 px** desktop (`tok(f)`), shape = one SVG path: flat top flush with the viewport top, bottom edge a soft asymmetric wave, right end rounded with a 52 px radius bulge. Wordmark "Kaiten Skills" Crimson Pro 600 1.5rem `#F6F5F0` + tagline "Online career skills · since 2017" Inter 500 0.6875rem ls .08em, both left-aligned 40 px from the left, vertically centred. The plate overlaps the frame's top-left corner by **≥ 12 px** (frame top 92, plate bottom ~103 at its lowest point).
  - h1 bottom-left inside the frame: left 88 px, bottom 96 px, white, Crimson Pro **500**, `clamp(2.5rem, 4.7vw, 4.25rem)` (4.25rem = 68 px ≈ ref 67.1 px `tok(b)`), line-height 1.12 (ref 2.0 is for JP; Latin needs tighter), ls 0.01em, max-width 780 px (`tok(b)` box 779). Two lines in en: "Work skills you use / every single day." Under it, Inter 1rem white 0.9 opacity one line: "Short video courses in writing, presenting and spreadsheets." Readability: bottom gradient `linear-gradient(to top, rgba(42,37,37,.42), rgba(42,37,37,0) 45%)` on the frame (not a flat tint).
- Must not be diluted: the frame must be inset (stone ground visible on both sides and above), the edge must visibly wobble (not a plain rounded rectangle), radius ≥ 32 px, the blob must be accent-coloured and overlap the photo corner. Not a full-bleed rectangle, not a centred heading.
- Mobile 390: inset 12 px, top 76 px, radius 22 px, height 62svh; blob 220×64; h1 inside frame bottom-left 20 px, 2.4rem (flow content of the Cover, not absolutely positioned labels); subtitle moves below the frame on stone.

### T2. Leaf-shaped CTA pinned to the photo's bottom-right corner (Yanokuchi "入園案内")
- Reference: a lime leaf ~130×118 with one sharp corner, sitting inside the photo's bottom-right corner, overhanging toward the edge; small book icon, label with a dotted underline, small arrow below; soft offset shadow; it stays visible as a fixed element while scrolling (scroll-yk-2/3).
- Ours `.ks-leaf`: **132×120 px**, fill **#E3C6B6** (light clay, the accent's tint; mirrors the ref's light-on-photo lime, S 0.20 so not counted as saturated), text/icon **#372828**. Shape `border-radius: 60px 6px 60px 24px` (top-right sharp). Shadow `4px 5px 0 rgba(55,40,40,.16)`. Content centred, stacked: 20 px line icon (open book, stroke 1.6) → label "Browse courses" Inter 600 0.875rem with `border-bottom: 2px dotted #372828` (padding-bottom 2 px) → 14 px arrow →. Hover: fill `#D9B6A3`, transform translateY(-2px) 0.2s ease (`tok(g)` header 0.2s).
- Home position: `position: fixed; right: 68px; bottom: 68px` on desktop (≈ ref 1242–1372 × 715–832 at 1440×900) so on first paint it sits inside the hero frame's bottom-right corner and then follows the page (ref behaviour). z-index above content, below the header menu. Link → Courses page.
- Mobile 390: **not fixed and not absolute** in the first screen; render it in flow right-aligned directly under the hero frame (margin-top −40 px is NOT allowed; plain margin-top 12 px), size 112×102. No overlap with text.
- Must not be diluted: leaf shape with one sharp corner (not a pill, not a circle, not a rectangle button), dotted underline on the label, offset shadow, sits on the photo corner on desktop.

### T3. Wave-edged ink band carrying the horizontal process timeline with giant numerals (Yanokuchi wavy colour bands + ECC 112 px numerals, https://www.ecc.kyoto-unicap.co.jp/)
- Reference: Yanokuchi alternates full-width green bands with cream; the band's top and bottom edges are a soft hand-drawn wave (amplitude ~8–12 px, scroll-yk-2), band padding 77.8 px (`tok(c)`); inside, a cream panel with a slightly slanted, irregular top edge. ECC sets stat numerals at 112.5 px / line-height 1 in white on dark ink `#2A2525` (`tok(a)`, `tok(b)`).
- Ours `.ks-band`: full-bleed **#2A2525** band (ink, not the accent: the row note forbids an accent field). Top and bottom edges = SVG wave, amplitude **10 px**, wavelength ~220 px, irregular (not a sine repeat), drawn as pseudo-elements in the band colour. Padding **78 px** top/bottom desktop (`tok(c)`), 56 px mobile.
  - Home block 4: label + h2 in `#F6F5F0`, then the **five-step horizontal timeline** (5 equal columns, 1200 px content). A 1 px hairline `rgba(246,245,240,.28)` runs horizontally through the numeral midline across all five columns (ecc hairline). Each step: numeral "01"–"05" Crimson Pro 400 **7rem (112 px)**, line-height 1, `#F6F5F0` (step 05 numeral in **#C99A86**, the only colour), step title Inter 600 1.0625rem, body Inter 0.9375rem/1.7 `rgba(246,245,240,.78)`, 35–45 words each.
  - Below the steps, inside the band: a stone panel `#EFEDE6` inset 72 px left/right (ref panel inset ~70 px), top edge an irregular polygon (`clip-path: polygon(0 4%, 22% 0, 68% 1.5%, 100% 5%, 100% 100%, 0 100%)` on a **non-observed** wrapper), radius 8 px at the bottom corners; it holds the price table (block 5) so the band visually "carries" the panel like the ref.
- Must not be diluted: the band edge must wave (not straight), numerals ≥ 6.5rem on desktop, timeline horizontal (never vertical on desktop), panel top edge visibly slanted.
- Mobile: steps become a horizontal scroll-snap row (each step 78vw), numerals 4.5rem, hairline kept; panel inset 12 px, slant kept.

### Continuation to inner pages (required)
| Page | T1 hand-cut frame + blob | T2 leaf | T3 wave ink band |
|---|---|---|---|
| Courses (Tutor archive) | page head: 21:9 photo P15 in `.ks-cut` (radius 28, inset 36) with title bottom-left | fixed leaf "Try lesson 1 free" | course grid ends on a wave band with the 5 steps (short, 15 words each) |
| Single course (price + buy) | course hero image in `.ks-cut` 16:9 | leaf in the purchase box corner: "Enrol · €129" (price nowrap) | curriculum section on the wave band: topics as numbered rows with 4.5rem numerals |
| Lesson / player | video frame uses the hand-cut mask (radius 20) | leaf "Next lesson →" bottom-right of the player | — (player page stays calm) |
| How it works | head photo P09 in `.ks-cut` | leaf "Browse courses" | full timeline (5 steps, 80–100 words each) on the band + stone panel with the refund/access rules |
| Pricing & certificates | — | leaf "Browse courses" | wave band with the 3 key numbers (14 days, 24 months, 5 working days) at 7rem + stone panel holding the full price table |
| Tutors / About | P14 in `.ks-cut`; founders' story | leaf "Meet a tutor's course" | wave band "How we build a course" (4 numbered stages, horizontal) |
| Stories | each story's featured image in `.ks-cut` (radius 24) | — | — |
| My courses (Tutor dashboard) | — | — | progress strip on a wave band at top: "In progress / Completed / Certificates" numerals 4.5rem |
| Contact | P16 in `.ks-cut` | leaf = mailto | hours on the band |

The blob plate (T1) is in the header on every page (header template part).

---

## 2. Colour (reference colours, role mapping, reasons for each change)
| Role | Reference (token) | Ours | Proportion (home) | Note |
|---|---|---|---|---|
| Text ink | `#372828` Yanokuchi `tok(a)` | **#372828** (same) | body text | exact |
| Ground | cream `#F8F6EC` `tok(a)` | **#F6F5F0** stone off-white | ~55% | −1% lightness, chroma lowered: common rules forbid defaulting to cream; row note asks off-white/stone |
| Panel | `#F5F5DB` `tok(a)` | **#EFEDE6** stone panel | ~8% | same lightness, de-yellowed for the same reason |
| Main / title colour | green `#228C5B` (h2, bands) | **#8A4B3A** 弁柄 for h2 text, labels, blob, links only | ≤5% | row note: #8A4B3A is the one muted accent; green does not fit and would be a second accent |
| Band | green full-width band | **#2A2525** ECC ink `tok(a)` | ~15% | accent may not be a full-bleed field; ECC ink keeps the strong band contrast |
| Light pop (CTA) | lime `#DDEB5A` | **#E3C6B6** clay tint | <1% | light-on-photo role kept, hue moved to the accent family |
| Highlight numeral | — | **#C99A86** | <0.5% | one numeral, step 05 |
| Hairlines | dotted rule `#C9C2B8`-ish (scroll-yk-2 top) | **#CFC9BF** 1 px dotted | — | section separators are dotted like the ref |
| White | white h1 on photo | #FFFFFF | — | |

First screen saturated pixels (S>0.35, V>0.25) **≤ 15%** (`scripts/check-first-screen.py`): blob ≈ 3.2%, photo must stay ≤ 10% → P01 is shot in high-key neutral tones (STYLE string forbids saturated props). The leaf is not saturated.

## 3. Type
- Display **Crimson Pro** (OFL) 400/500/600; body/UI **Inter** (OFL) 400/500/600. CJK headings Noto Serif TC / JP at 0.75× and line-height 1.85 for body (Hokuto mechanism).
- Body: Inter **1rem** (ref 15.57 px `tok(b)`, rounded up for Latin), weight 400, line-height **1.9** (ref 2.0; 1.9 for Latin), letter-spacing **0.02em** (ref 0.05em is for JP; Latin 0.02em). Colour #372828.
- theme.json font sizes: small 0.875rem, medium 1rem, large 1.5rem, x-large `clamp(1.9rem, 3vw, 2.25rem)` (ref h2 35 px), xx-large `clamp(2.4rem, 4vw, 3rem)` (ecc h2 48 px), **huge `clamp(2.5rem, 4.7vw, 4.25rem)` (h1, ≥4.25rem rule)**, numeral `7rem` (ecc 112.5 px) used only via the `.ks-num` class.
- h2 sections: Crimson Pro 500, x-large, line-height 1.3 (ref 63/35 = 1.8 JP → Latin 1.3), ls 0.01em, colour **#8A4B3A** (ref h2 = main colour). h3: Inter 600 1.125rem.
- Section label above every h2: Inter 600 0.75rem uppercase ls 0.16em #372828 with a 7 px #8A4B3A dot before it.
- Nav links: Inter 500 0.9375rem, gap 26 px (`tok(c)`), ink, each with a small 6 px caret ▾ in accent where a submenu exists (ref green triangles).

## 4. Home page

### First screen (1440×900)
Stone ground. Header (overlay, absolute, height 100 px `tok(c)`): blob plate top-left (T1), nav right (Courses ▾, How it works, Pricing, Tutors, Stories, Contact | My courses, cart icon), one menu only. Below/under it the hand-cut frame P01 (T1) with h1 bottom-left and the leaf (T2) bottom-right. Nothing else: no table, form, search box, buttons in accent, or centred heading. Scroll cue: none (ref has none).

### Block order
| # | Pattern | Purpose | Layout and photos | Copy (en) |
|---|---|---|---|---|
| 1 | `front-hero` | mood + entry | T1 + T2, P01 (learner at a kitchen table with laptop and notebook), `sp-parallax` | h1 + 12-word sub |
| 2 | `front-intro` | what the school is | pt 124 / pb 120 (`tok(c)` lead 124.5). 12 cols: text cols 2–7 (label "ABOUT", h2 "Learn at your own table, keep it at work.", 2 paragraphs), photo P02 cols 8–11, 4:5, radius 16 px, tilted **−2deg at rest** (echo of the ref's rotate-in, final state slight tilt), `sp-reveal--zoom` | 110 words, 2 paragraphs |
| 3 | `front-courses` | **course strip** (row's horizontal-scroll-strip + card-mosaic): six course cards with price and buy | Label "COURSES", h2 "Six courses, one skill each." + "All courses →" link. Strip: overflow-x auto, scroll-snap x, left edge aligned to the content column, cards bleed off the right viewport edge (ref scroll-yk-2). Card width **449 px**, gap **47 px** (ref strip), photo 3:2 radius **16 px**, **even cards offset down 38 px** (ref 157 vs 195 px tops). Photos P03–P08. Under photo: category chip (stone panel, 0.75rem), title Crimson 1.5rem, meta "24 lessons · 5 weeks", row with price Inter 600 1.125rem nowrap left + "Buy course" text button right (Woo add-to-cart → checkout). `sp-reveal--up` on the strip container only | 6 × 20 words |
| 4 | `front-steps` | **process timeline** (row page_structure) | T3 wave ink band, label "HOW IT WORKS", h2 "From choosing a course to your certificate.", five steps horizontal (see 6), `sp-stagger` on the row, each step `sp-reveal--up` | 5 × 40 words |
| 5 | `front-prices` | prices on the stone panel inside the band | T3 panel; price table (6 rows) full width, columns: Course · Lessons · Suggested length · Price (nowrap, right, tabular-nums) · "Buy" link. Note line under: refund 14 days, access 24 months. **No motion classes** | table + 30 words |
| 6 | `front-stories` | 3 learner stories, card mosaic | Label "STORIES", h2. Mosaic 12 cols: story 1 large cols 1–7 (P11 4:3 radius 16), stories 2–3 stacked cols 8–12 (P12, P13 3:2 radius 16), bottoms aligned. Each: name, role, course, 45-word quote paraphrase, link. `sp-stagger` + `sp-reveal--zoom` on figures | 3 × 50 words |
| 7 | `front-interlude` | breathing photo (ref scroll-yk-3) | full-bleed P10 (morning desk by a window, wide), height 70vh, bottom edge = same wave as T3 cutting into the stone ground, `sp-parallax` `--sp-par:10%`; foreground: small stone card bottom-left (not in the moving layer) with one Crimson italic 1.75rem line "Twelve minutes a day is enough to start." | 10 words |
| 8 | `front-tutors` | the people | 12 cols: P14 (two tutors recording at a desk) cols 1–6 in `.ks-cut` radius 24; cols 7–12 a dotted-hairline list of 5 tutors: name Crimson 1.25rem, subject Inter 0.875rem, years teaching; link "All tutors →". No 4-person grid | 60 words + list |
| 9 | `front-close` | FAQ + contact | stone panel #EFEDE6 full width: left 3 FAQ (details/summary, 25 words each), right address, support hours, email; leaf (T2 small static) "Try lesson 1 free" | 110 words |

Home photo positions: P01, P02, P03, P04, P05, P06, P07, P08, P10, P11, P12, P13, P14 = **13** (≥ 8). P09 is not on home (How it works head).
English home ≥ 250 words with narrative paragraphs in #2, #4 and #6. CJK home ≥ 500 characters.

### Comparison with recent themes (must not match)
| # | Mochi | Denki | Shikaku | Kanade | **Kaiten** |
|---|---|---|---|---|---|
| 1 | hero | hero + figures | hero paper strips | hero curved bite + card | **inset hand-cut frame + blob + leaf** |
| 2 | food finder quiz | intro | course-name marquee | intro | intro with tilted photo |
| 3 | concept mosaic | product ledger rows | about panel | programme mosaic | **horizontal course-card strip, staggered, with price + buy** |
| 4 | ink band cards | metrics ledger sticky | course ladder tab cards | calendar cards | **wave ink band, 5-step horizontal timeline, 112 px numerals** |
| 5 | subscribe | staggered photos | lesson player + steps | day photo strip | **price table on slanted stone panel inside the band** |
| 6 | interlude | cases | plans table | fees band | stories 7/5 mosaic |
| 7 | people | close | faculty split | — | full-bleed wave-edged parallax interlude |
| 8 | stories | — | stories rows | — | tutors photo + list |
| 9 | visit | — | — | — | FAQ + contact panel |
Why different: no recent theme uses an inset wobbly frame, a blob plate or a leaf CTA; Kanade's strip is a photo day-strip at position 5, ours is a product strip of buyable cards right after the intro with a staggered offset; Shikaku's steps are tab cards and its plans a plain table, ours is a wave-edged dark band with giant numerals that physically carries the price panel. Mochi's ink band holds cards, ours holds a timeline + slanted panel with wave edges.

## 5. Inner pages (≥ 8 + Tutor/Woo templates)
1. **Courses** (Tutor course archive `/courses/`): T1 head P15; filter chips Writing / Presenting / Spreadsheets / Bundle; 3-col cards (same card as home strip, no offset, 16 px radius, price nowrap + buy); T3 band with 5 short steps.
2. **Single course** (Tutor single): T1 hero image (course photo), title, tutor, lessons, length; purchase box on right (desktop) with price, "Enrol" via WooCommerce, 14-day refund note, leaf; curriculum on T3 band; "Who it's for" 3 bullets; tutor card; 2 FAQ.
3. **Lesson / player** (Tutor lesson): player 16:9 in hand-cut mask, lesson list left in stone panel (collapsible on mobile), notes area, leaf "Next lesson".
4. **My courses** (Tutor dashboard): wave band progress strip, enrolled course cards with progress bar (#8A4B3A 4 px), certificates list.
5. **How it works**: T1 P09, full timeline on the band (5 steps, 80–100 words), stone panel with access/refund/feedback rules.
6. **Pricing & certificates**: wave band with 14 / 24 / 5 at 7rem, full price table on the slanted panel (all 6 items), certificate explanation (completion, not accreditation), team licences note (contact).
7. **Tutors / About**: story since 2017, founders, 7 people as a dotted-hairline list with 3 photos max (P14, P16, P15 not reused on the same page twice), course-building stages on the band.
8. **Stories** (posts archive + single): 3 stories (see 6) + 3 journal posts about study habits; featured images in `.ks-cut`.
9. **FAQ**: 10 Q&A details/summary, grouped Buying / Learning / Certificates.
10. **Contact**: P16 in `.ks-cut`, address, hours, email, contact form (not on any first screen of home).
11. Cart / Checkout / My account / Order received: stone panel behind totals, header blob, h1 ≥ 2.4rem.

## 6. Fixed numbers (identical on every page and all five languages)
**Courses and prices (EUR, 6 items):**
| Course | Tutor | Lessons | Suggested length | Price |
|---|---|---|---|---|
| Clear Business Writing | Ines Carvalho | 24 | 5 weeks | €129 |
| Reports People Actually Read | Sofia Marín | 20 | 4 weeks | €139 |
| Presenting with Confidence | Tomasz Wierzba | 22 | 5 weeks | €149 |
| Spreadsheets from Zero | Amara Osei | 28 | 6 weeks | €119 |
| Spreadsheet Models for Decisions | Rahul Menon | 26 | 6 weeks | €169 |
| Career Starter Bundle (Writing + Presenting + Spreadsheets from Zero) | — | 74 | 16 weeks | €329 |
Lessons are 8–14 minutes. Lesson 1 of every course is free to watch. Access **24 months** from purchase. Refund within **14 days** if fewer than 3 lessons were watched. Assignment feedback within **5 working days**. Certificate of completion (not an accredited qualification).

**People (7):** Ines Carvalho (co-founder, writing), Jonah Ellery (co-founder, platform & support), Tomasz Wierzba (presenting), Amara Osei (spreadsheets), Rahul Menon (spreadsheet modelling), Sofia Marín (reports), Lena Hoffmann (learner support lead).
**Stories (3, fictional learners, no outcome claims):** Priya Raman, operations assistant, Spreadsheets from Zero — rebuilt her team's weekly stock sheet; Marco Bellini, team lead, Presenting with Confidence — ran his first quarterly review without reading slides; Hanna Lund, returning to work after parental leave, Clear Business Writing — studied at the kitchen table after bedtime.
**Process (5):** 01 Choose a course (watch lesson 1 free) · 02 Buy and enrol (WooCommerce checkout, instant access) · 03 Learn at your table (8–14 minute lessons) · 04 Practise with feedback (within 5 working days) · 05 Finish with a certificate.
**Location / hours:** Kanaalstraat 21, 3531 Utrecht, Netherlands (studio, no walk-in classes). Learner support Mon–Fri 09:00–18:00 CET, Sat 10:00–14:00 CET; lessons available 24/7. Email hello@kaiten-skills.example.

## 7. Motion (sp-scroll only)
| Effect (ours) | Where | Source and its timing | sp-* setting |
|---|---|---|---|
| **Parallax (required)** | Block 1 hero: inner Cover background image P01 moves, foreground h1 static; wrapper `.ks-cut` (mask) > Cover `.sp-parallax` | Yanokuchi hero `p-top-kv-zoom` 7s linear slow zoom (`tok(g)`) + ECC scrub-driven mv transition | `--sp-par: 8%` desktop, **5%** at ≤781px (kept on mobile) |
| Parallax 2 | Block 7 interlude P10 (Cover background), stone card foreground | Yanokuchi full-bleed photo band (scroll-yk-3) | `--sp-par: 10%` desktop, 6% mobile |
| Zoom-in (rotate-scale-in) | Block 2 photo P02, block 6 story figures, inner-page story/tutor figures | Yanokuchi `.js-rotate-scale-in`: rotate −25/−6deg, scale .6, opacity 0→1, 0.9s, back.out(1.4), trigger top 80%, once | `sp-reveal sp-reveal--zoom`, `--sp-dur: .9s`, `--sp-ease: cubic-bezier(.34,1.4,.64,1)` (≈ back.out(1.4)); no rotation in motion (static −2deg tilt only on P02) |
| Rise-in titles | label + h2 of blocks 2, 3, 6, 8 | Yanokuchi SplitText chars 0.5s back.out(3), stagger .03 | `sp-reveal sp-reveal--up`, `--sp-dist: 24px`, `--sp-dur: .6s`, `--sp-ease: cubic-bezier(.34,1.56,.64,1)` (per-char split is not allowed; whole heading) |
| Stagger | timeline steps (block 4), story cards (block 6) | ECC stagger 0.15, power3.out, top 80%, play once | parent `sp-stagger` (fixed 0.12s steps), children `sp-reveal--up`, `--sp-ease: cubic-bezier(.22,1,.36,1)` |
Not used: header hide-on-scroll (not in sp-scroll), sticky, sp-count, marquee. No reveal on block 1, block 3 children, block 5 price table, forms, legal text. Count of `.sp-reveal` ≤ 60% of home blocks' elements rule from scroll spec §6.3.

## 8. Responsive (hard requirements)
- 390 px first screen: **no vertical text, no absolutely positioned labels/badges over text**; h1 inside the Cover flows normally; the leaf is in flow under the frame; header nav collapses to one menu button inside the blob row (right).
- Price table ≥ 782 px: `width: 100%` of the panel, columns auto, **price column `white-space: nowrap; text-align: right`**, never clipped; check at 800 and 1280. Table must not sit inside a narrower fixed-width column.
- **Every table on mobile (<782 px) stacks**: each row becomes a block, cells `display:block` with `data-label` pseudo-labels; price stays on one line.
- No horizontal page overflow at 390 / 1280 (strip scrolls inside its own container with `overflow-x:auto`; wave pseudo-elements use `left:0; right:0`, not 100vw).
- Course strip on mobile: cards 82vw, offset reduced to 20 px.

## 9. Photos (16, Grok, one at a time, read each; no text, logos, brands, Japanese elements, cut-outs)
STYLE (identical on every prompt):
`high-key documentary photograph, soft natural daylight from a window, muted neutral palette of off-white, warm grey, stone and faded terracotta, low saturation, gentle film grain, 35mm lens, shallow depth of field, modern international home or small office interior, diverse adults, candid unposed moment, no text, no logos, no brand names, no screens showing readable text, no Japanese elements`
| ID | Subject / composition | Used on | Home |
|---|---|---|---|
| P01 | woman (30s) at a wooden kitchen table, laptop + notebook, mug, seen from 3/4 side, subject in right third, large calm left/bottom-left area for h1, 16:9 | home hero | ★ |
| P02 | close-up hands writing outline notes beside laptop, 4:5 | home intro | ★ |
| P03 | man editing a printed document with a pencil at a desk, 3:2 | course card Writing; single course | ★ |
| P04 | woman marking up a report printout, highlighter, 3:2 | course card Reports | ★ |
| P05 | man rehearsing a talk standing in a living room, 3:2 | course card Presenting | ★ |
| P06 | woman at laptop with a spreadsheet grid blurred (no readable text), 3:2 | course card Spreadsheets from Zero | ★ |
| P07 | two colleagues at a small table discussing numbers on a laptop, 3:2 | course card Models | ★ |
| P08 | flat lay of notebook, pens, headphones, laptop on table, 3:2 | course card Bundle | ★ |
| P09 | learner closing a laptop at dusk, lamp on, contented, 21:9 | How it works head | |
| P10 | empty morning desk by a tall window, plants, chair, wide 21:9 | home interlude | ★ |
| P11 | young woman in a warehouse office with a laptop, 4:3 (Priya) | home story 1; Stories | ★ |
| P12 | man in a meeting room standing beside a table, 3:2 (Marco) | home story 2; Stories | ★ |
| P13 | woman studying at a kitchen table at night with tea, 3:2 (Hanna) | home story 3; Stories | ★ |
| P14 | two tutors recording a lesson at a desk with a camera and mic, 3:2 | home tutors; About | ★ |
| P15 | bright co-working studio, shelves, long table, 21:9 | Courses head; About | |
| P16 | support lead with headset answering at a laptop, 4:3 | Contact; About | |
Each ≤ 300 KB, ≤ 2000 px, WebP or JPEG. No photo twice on the same page.

## 10. Similarity to the reference (target 80%)
| Dimension | Reference value (token) | Kaiten value |
|---|---|---|
| Ink | #372828 `tok(a)` | #372828 |
| Ground | #F8F6EC `tok(a)` | #F6F5F0 (−1% L, de-yellowed) |
| Title colour | #228C5B h2 `tok(a)` | #8A4B3A h2 (row note) |
| Band | green full-width, wave edges | #2A2525 (ECC ink) full-width, wave 10 px |
| CTA colour | lime #DDEB5A on photo | clay tint #E3C6B6 on photo |
| Body type | 15.57px / 2.0 / ls .05em `tok(b)` | 16px / 1.9 / ls .02em |
| h1 | 67.1px w500 white over photo `tok(b)` | 68px (4.25rem) w500 white over photo |
| h2 | 35px w500 main colour `tok(b)` | clamp(1.9rem,3vw,2.25rem)=36px w500 accent |
| Numerals | 112.5px/1 (ecc) | 7rem = 112px / 1 |
| Header | ~100px, nav 15px gap 26px `tok(c)` | 100px, 15px, gap 26px |
| Hero frame | inset 36, top 92, radius ~36, wobbly `tok(c)(d)(e)` | inset 36, top 92, radius 36, SVG wobble 3–6px |
| Logo blob | 394×103 deep green, top-left bleed `tok(f)` | 394×103 #8A4B3A, top-left bleed |
| Leaf CTA | ~130×118 bottom-right, dotted label `tok(f)` | 132×120 bottom-right fixed, dotted label |
| Strip cards | 449px, gap 47, offset 38, radius ~16 (scroll-yk-2) | 449px, gap 47, offset 38, radius 16 |
| Section padding | lead 124.5/201, bands 77.8 `tok(c)` | intro 124/120, band 78 |
| Image reveal | rotate-scale-in 0.9s back.out(1.4) `tok(g)` | sp-reveal--zoom .9s cubic-bezier(.34,1.4,.64,1) |
| Title reveal | chars 0.5s back.out(3) `tok(g)` | h2 rise .6s cubic-bezier(.34,1.56,.64,1) |
| Hero motion | 7s linear zoom `tok(g)` | sp-parallax 8% (5% mobile) |
| Stagger | ecc 0.15 `tok(g)` | sp-stagger 0.12 |
Photos and copy are our own.

## 11. Home acceptance checklist (stage-1 review and stage 2)
- [ ] Hero photo inset 36 px with visibly wobbly 36 px-corner frame; accent blob plate top-left overlaps the frame corner; no centred heading.
- [ ] Leaf CTA (one sharp corner, dotted label, offset shadow) on the photo's bottom-right at 1440; in flow at 390 with no overlap.
- [ ] h1 ≥ 4.25rem at 1440 (theme.json max preset 4.25rem).
- [ ] Course strip: 6 cards, 449 px, even cards offset 38 px, bleeds right, price nowrap + working "Buy course" → WooCommerce checkout.
- [ ] Wave-edged #2A2525 band with horizontal 5-step timeline, numerals 112 px, hairline, step 05 numeral #C99A86.
- [ ] Price table on the slanted stone panel, full width ≥782 px, price column nowrap right, stacked on mobile; numbers match section 6.
- [ ] Stories 7/5 mosaic with P11–P13; tutors P14 + list; interlude P10 with wave bottom edge.
- [ ] ≥ 8 photo positions (13 planned), no repeats on the page; 0 cut-outs.
- [ ] `sp-parallax` on hero and interlude; check-parallax.mjs desktop + mobile shift ≥ 6 px, reduced-motion 0; no reveal in the hero.
- [ ] First-screen saturated ≤ 15%; no horizontal overflow at 390/1280; auto-gates pass.
- [ ] ≥ 250 English words, 3 narrative paragraphs; no guarantees, awards, real brands or media.
