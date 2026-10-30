# Kouhi Service: design spec (stage 1, binding for implementation)

Row b19-6 · type **landing** (one long conversion page, anchor menu, one repeated CTA "Book a tasting visit") · archetype sticky-media · nav split · first screen full-bleed-photo-info-bar · font_direction **sans** · IMAGERY **photo** (documentary, high-key).
Reference: Key Coffee corporate top, https://www.keycoffee.co.jp/ (tokens: `brand/reference-tokens.md`, abbreviated **RT(a)…RT(g)** below). No secondary reference.
Browser capture failed in stage 1 (no screenshots, no computed styles): every value below is the reference's *declared* CSS value. Stage 2 must re-check against a live capture if a browser works; values may change ±5% only.
Photos and copy are ours. Never copy Key Coffee images, text, logo, the bean-mark shape or the curved background image file.

---

## 1. Signature techniques (three, all obvious at a glance)

### T1. Lifted centre card on a curved pale band, round emblem on the band edge (Key Coffee "know coffee" card rail, https://www.keycoffee.co.jp/ top-coffee block)
- **Reference:** a rail of photo cards on an organic curved pale background; the active card is 480×320 while neighbours are 360×240 (3:2), the active one sits 44px higher, each card has a white caption plate under the image (radius 0 0 8 8, caption 24px centred, 16px sub-line above). A round emblem breaks the background's top edge (top −87px). RT(e).
- **Ours, home block 4 "Which offices it suits":** three **static** cards (not a carousel), centred, gap 32px. Left/right card image 360×240, centre 480×320 (ratio 1.333 exactly), centre card `margin-top:-44px` relative to the neighbours' top line (cards bottom-aligned is wrong: the centre must poke up). Caption plate white, padding 20px 24px 24px, radius 0 0 8 8, image radius 8 8 0 0; small line 14px #736D6D above, caption 24px/700 #333. Band: full-bleed #F0EFE7, height ~70% of the cards, top edge a soft convex curve (SVG path or `border-radius:50% 50% 0 0 / 80px 80px 0 0`), cards overlap the band's top by ~120px. Ø72 white disc with a 1px #D3D0C8 ring and a 32px brown (#6A5648) line-drawn cup icon (our own SVG) centred on the band's top edge (top −36px).
- **Must not be diluted:** the 1.33× size difference, the 44px lift, the white caption plate, the curved band and the disc on its edge. Three equal cards = fail.
- **Mobile (<782px):** cards stack, all 100% width, order left/centre/right; the centre card loses the −44px lift and instead gets a 4px #6A5648 top rule to stay "the featured one"; band becomes a straight #F0EFE7 panel with 48px top radius; disc stays on its top edge.

### T2. Hanging utility tab header with underlined current item and one outline pill (Key Coffee header, header_footer.css)
- **Reference:** #F8F7F3 header 100px, shadow 0 6px 8px rgba(0,0,0,.2); a #F0EFE7 tab 40px high hangs from the top edge on the right with radius 0 0 8 8; current nav item has a 2px #005BAC underline; one outline pill (radius 100, 1px blue). RT(c)(d)(f).
- **Ours (every page):** sticky header 100px (72px <782px), background #F8F7F3, shadow 0 6px 8px rgba(0,0,0,.08) (lighter than reference: our page is mostly white, .2 looked heavy in Hibi tests). Left: wordmark "Kouhi Service" Plus Jakarta Sans 800 22px #5D2F0C. Right: anchor links Suits · Service · Visits · Plans · FAQ (14px/500, gap 32px), then outline pill "Book a tasting visit" (height 40, padding 0 22px, 1px #005BAC, text #005BAC 14px/600, radius 100; hover fill #005BAC text #fff). Hanging tab at `right:40px; top:0`, height 32px, #F0EFE7, radius 0 0 8 8, padding 0 16px, holds language switcher (EN / ZH / JA / FR / DE, 12px) and "Mon–Fri 8:00–18:00 · +00 20 7946 0144" (12px #736D6D); it sits above the nav row, header content row starts at 40px. Current item (scroll-spy not required; on inner pages the page's own link) gets a 2px #005BAC underline 6px below the text.
- **Mobile:** tab stays (language only, 28px high), menu becomes WP navigation overlay; pill stays visible at 36px height, text "Book".
- **Must not be diluted:** the tab really hangs (top corners square, bottom corners rounded, touching the viewport top), blue only on pill + underline.

### T3. Pill tabs over ruled dated rows with tiny bordered chips (Key Coffee top-info news list)
- **Reference:** #F0EFE7 radius-8 pill tabs, active filled #005BAC with white text; under them 1px #D3D0C8 rows (padding-bottom 24, margin 24), date in Roboto Slab 12px ls 1px #736D6D, tiny chips 10px radius 4, two-line text. RT(a)(b)(c).
- **Ours, home block 7 "Tasting visit calendar":** inner 1200px. Row of 4 pill tabs: All · Up to 12 people · 13–60 people · Clinics (height 40, padding 0 20px, radius 8, #F0EFE7, text #333 14px/600; active #005BAC / #fff). Tabs are anchor links that scroll to group headings; **all rows always visible** (no hidden panels; no JS filtering). Below: 8 rows, each a 3-column grid `160px | 220px | 1fr`: date "TUE 10 NOV" Plus Jakarta Sans 800 12px ls 1px #736D6D caps; chips (10px/600, padding 2px 8px, radius 4, 1px #D3D0C8 border, #fff ground; one chip may be #6A5648 text for "Clinic"); description 16px/1.7 two lines max. Rows separated by 1px #D3D0C8, padding 24px 0. Right of the heading a 4:3 photo P09 is NOT used here (block 8 has it); this block is typography only, which is the reference's contrast.
- **Mobile:** grid collapses to date + chips on one line, description below; tabs scroll horizontally (`overflow-x:auto`, no reveal on children).
- **Must not be diluted:** filled blue active pill, slab-like caps dates, real chips, hairlines. Not a table.

### Supporting (part of the KV, not counted): notice strip + 2×2 slab-caps tiles (RT(f)), see §3.

### Continuation to inner pages (required)
| Page | T1 | T2 | T3 |
|---|---|---|---|
| All pages | — | header + hanging tab + pill, current item underlined | — |
| The Service | 3 cards "Machine / Beans / Visits", centre lifted: P12 centre, P13 left, P14 right | ✓ | — |
| Tasting Visit | — | ✓ | full calendar (12 rows, same tabs) |
| Plans & Pricing | lifted centre plan card (Studio plan) on curved band above the full price table | ✓ | — |
| Offices We Serve | 3 story cards, middle lifted (P15 centre) | ✓ | — |
| Journal / Notes (blog index) | — | ✓ | post list as ruled dated rows with category chips |
| FAQ | — | ✓ | pill tabs (Service / Visits / Billing / Machines) over ruled Q rows |
| About | — | ✓ | "Since 2014" milestones as ruled dated rows with chips (not a vertical timeline: no line, no dots) |
Notice strip appears on Tasting Visit, Plans and Contact pages (same component). That is 7 inner pages carrying T1 or T3.

---

## 2. Key visual concept

**(1) Reference first screen.** Key Coffee opens with a wide rounded-8 photographic banner under the header (margin-top 24px), a looping Swiper that auto-advances every 9s (300ms move), short dash pagination bars centred 24px under it, two round 40px #F0EFE7 arrows beside it, then a pale tinted notice strip and four slab-caps label tiles in a 2×2 grid. Story: one calm company with several quiet ways into coffee; nothing shouts, the photograph does the talking. Signature motion: slow, unhurried auto-advance; no scroll-linked effect.

**(2) Our translation (office coffee service).** Same stage and image type (documentary photograph in a wide rounded banner, inset 24px): **a technician in a plain apron sets a white cup under a countertop bean-to-cup machine in a small bright office kitchen while a facilities manager beside her tastes from a cup** (P01). Second frame (P02): the same counter a moment later, the manager and two colleagues tasting, the technician noting on a clipboard. Story: the machine and beans live in your workplace, and you taste it before anyone commits. Motion keeps the reference's slow auto-advance idea as a **two-frame crossfade, 9s cycle (4.2s hold, 0.6s fade)**, CSS keyframes only, plus `sp-parallax` on the photo layer (our added depth). We do not use peeking neighbour slides (Kensa used that); the stage, dash bars, round arrows, notice strip and tiles all stay.

**(3) KV checklist (all six on the first screen at 1440×900, visible; tiles may start ~60px below the fold at 900 but must be fully visible at 1440×1000 and the notice strip must be above the fold)**
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Wide rounded banner photo, margin-top 24 | Documentary scene: technician sets cup under countertop machine, manager tastes; inset 24px, radius 8, ratio 2.4:1, height `min(58vh,580px)` | top of main, under header | crossfade P01↔P02, 9s; `sp-parallax --sp-par:8%` on the layer | P01, P02 |
| 2 | Dash pagination bars | Two 10×14 bars (#D3D0C8; active #6A5648, width 24px), gap 20px | info bar, left column, above H1 | active bar follows crossfade (same keyframe timeline) | — |
| 3 | Round 40px grey arrows beside banner | Ø40 #F0EFE7 circles with 1.5px #333 chevrons, inside the photo 24px from its left/right edges, vertically centred | photo sides | hover opacity .8; click toggles frame (tiny JS optional, CSS-only fine if they are decorative `aria-hidden`) | — |
| 4 | Header with hanging grey tab + outline pill | T2 header | top | none | — |
| 5 | Pale tinted notice strip | "Tasting visits · next open mornings: 10, 12 and 17 November →" radius 8, background rgba(106,86,72,.06), text #5D2F0C 16px, height 56 | directly under the info bar, inner 1200 | none | — |
| 6 | 2×2 slab-caps label tiles | SUITS / SERVICE / VISITS / PLANS anchor tiles, 120px high, radius 8, #FCFBF9 + 1px #EBE9E2, label Plus Jakarta Sans 800 24px ls 3px caps #5D2F0C, 12px descriptor #736D6D, 32px line icon left at 24px, padding-left 72px | below the notice, gap 16px, inner padding 0 100px (RT(c)) | `sp-stagger` + `sp-reveal--up` (they are block 2, not the hero) | — (icons, our SVG) |

---

## 3. Home page (en; one long page, anchors, CTA "Book a tasting visit" repeated in header, hero, block 9, block 11)

### First screen (1440×900)
Header 100px (tab 32px inside). Main padding-top 24px. Photo 1392×580 (inset 24px, radius 8) with P01/P02 crossfade and parallax, arrows at its sides. **Info bar** (white, inner 1200, padding 32px 0 24px), two columns 5:7 — this is our "photo-left-text-right" read as image-first: **left column**: dash bars, then small line "Office coffee service · since 2014" 13px ls 1px caps #736D6D; **right column**: H1 "Good coffee that lives at work." Plus Jakarta Sans 800, `clamp(2.5rem,5.2vw,4.25rem)`, lh 1.05, ls −0.02em, #333, max 2 lines; under it lead 18px/1.6 #333 (max 60ch) and the outline pill + a text link "See plans →" #795134. Notice strip begins ~y 870.
No text on the photo. No overlay gradient. Saturated share target ≤5% (blue pill + underline only; photo is muted warm).

### Block order
| # | Block (anchor) | Purpose | Layout | Photo | Copy |
|---|---|---|---|---|---|
| 0 | Header | T2 | split + hanging tab | — | — |
| 1 | Hero (KV) | scene + promise | wide rounded photo, info bar | P01, P02 | H1 + 40 words |
| 2 | Notice + tiles | way-finding | strip, 2×2 tiles | — | 4×10 words |
| 3 | Intro `#about` | what we do | text 7 cols left (H2 + 2 paragraphs), photo 5 cols right 4:5 radius 8 | P03 (hands refilling the bean hopper) | 130 words |
| 4 | Who it suits `#suits` (T1) | three office types | lifted centre card on curved band | P04 (design studio, 14 people), P05 centre (small physio clinic front desk), P06 (accountancy office of 40) | heading + 3×(caption + 30 words) |
| 5 | The service `#service` (sticky-media) | what is included | left 5 cols sticky photo (`position:sticky; top:140px`, 4:5, radius 8), right 7 cols four ruled items: Machine · Beans · Monthly visit · Care and repair, each H3 22px + 70 words, 1px #D3D0C8 between, 64px vertical rhythm | P07 (technician descaling the machine's group, close) | 300 words |
| 6 | Story band `#stories` | proof without claims | full-width rounded photo band (inset 24px, radius 8, height 520), `sp-parallax --sp-par:10%`; a white card (radius 8, 480px wide, padding 40px) sits in normal flow overlapping the band's bottom by 80px, left-aligned at the inner edge, with one quote + name + office; 2 smaller text-only stories beside it in the band's bottom area below (white ground) | P08 (afternoon office kitchen, two colleagues talking by the machine, window light) | 3 stories × 45 words |
| 7 | Tasting visit calendar `#visits` (T3) | concrete dates | pill tabs + 8 ruled rows | — | 8 rows |
| 8 | How a visit runs | 45 minutes, plainly | photo 6 cols left 3:2 radius 8; right 4 timed lines "0:00 Arrive and set up / 0:10 Three roasts, side by side / 0:30 Fit the machine to the counter / 0:45 A written note and a price", each 18px/700 time + 15px text, hairlines | P09 (three small cups in a row, manager comparing) | 120 words |
| 9 | Plans `#plans` | price | full-width price table (inner 1200), 6 rows, then CTA pill | — | table + 30 words |
| 10 | FAQ `#faq` | objections | two columns: H2 + 40 words left (4 cols), 6 `<details>` right (8 cols), hairlines | — | 6 Q/A × 45 words |
| 11 | Book `#book` | single CTA | #F0EFE7 panel radius 8, inner 1200: left text (H2 "Book a tasting visit", 50 words, pill filled #005BAC / white this one time, phone + hours), right photo 1:1 radius 8 | P10 (technician carrying the machine case through an office door, friendly) | 60 words |
| 12 | Footer | addresses | #F8F7F3, 3 columns, legal links | — | — |
Home photo positions: P01, P02, P03, P04, P05, P06, P07, P08, P09, P10 = **10** (≥8). Home English copy ≥250 words, ≥3 narrative paragraphs (blocks 3, 5, 6).

### Comparison with recent home pages
| Theme | Order | Kouhi differs because |
|---|---|---|
| Shirushi Customs | dark pinned stage > desk intro > masonry > dossier strip > blurred quay > prepare band > fee table | ours is a light rounded banner with info bar; no dark stage, no masonry, no strip |
| Kensa Laboratory | peeking photo strip > 4×2 outline tiles > prose + photo > 8 test rows > parallax band > steps > dated log band | ours is a single crossfade photo (no peeking neighbours); 2×2 filled tiles vs 4×2 outline; dated rows sit under pill tabs on white, not on a band |
| Kikin Advisors | line-art street > notched slots > butter band > hour > mirrored band > fees > stories panel > grid-paper CTA | photo not line art; no butter/grid-paper; lifted-card band is unique |
| Kumoi Lodge | framed window + info bar > blurred opener > 3 room cards > full-bleed stage > facility box > squares > rates | closest risk (info bar, 3 cards). Ours: inset rounded banner with arrows+dash bars, cards are unequal (1.33× centre, lifted 44px) on a curved band with emblem; sticky-media service block; pill-tab calendar. Kumoi's cards are equal with split rows |

---

## 4. Inner pages (12, landing track)
1. **The Service** — what a placement is: the machine (one countertop bean-to-cup unit), beans (two house roasts + one rotating), monthly visit, repairs; T1 cards (P12 centre, P13, P14); sticky photo + text pattern repeated once.
2. **Tasting Visit** — what happens in 45 minutes, who should be there, what we need (a socket, 40×50cm counter, water); full T3 calendar 12 rows; notice strip; CTA.
3. **Plans & Pricing** — T1 lifted Studio card + full price table (6 rows), what is never charged (delivery, descaling, visit travel), notice period one month.
4. **Machines & Beans** — two machines (Compact, Counter) spec list (not table on mobile), roast notes; P16 + P11.
5. **Offices We Serve** — the 3 stories in full (300 words each), T1 cards: P15 centre, P04 left, P06 right (reuse across pages is allowed; never twice on one page).
6. **About** — since 2014, founders, team of 7 (named list with roles, two photos max, no four-person grid), milestones as T3 rows.
7. **FAQ** — 16 Q/A under T3 pill tabs.
8. **Journal** (blog index, `home.html`) — T3 ruled rows with chips; 3 demo posts.
9. **Contact / Book** — address, hours, phone, form (WP block or simple mailto CTA; no form on home first screen); notice strip.
10. **Waitlist** (newsletter template) — "New areas: join the list for Eastbank and Millhaven" signup.
11. **Privacy** · 12. **Terms** (plain text, no effects) · plus **Thanks** page after booking.

---

## 5. Colour (reference codes, RT(a))
| Role | Hex | Share | Source |
|---|---|---|---|
| Base | #FFFFFF (page) / #F8F7F3 (header, footer) | ~62% | RT(a) base |
| Warm grey panels, tabs, pills, tiles | #F0EFE7, #FCFBF9, border #EBE9E2 | ~8% | RT(a) |
| Hairline | #D3D0C8 | <1% | RT(a) |
| Text / meta | #333333 / #736D6D | ~4% | RT(a) |
| Main brown (kuritake, row hex) | #6A5648 (icons, active dash, chips, curve disc icon) | ~3% | row hex; sits between RT #795134 and #5D2F0C |
| Deep label brown | #5D2F0C (tile labels, wordmark, notice text) | ~1% | RT(a) |
| Link brown | #795134 | <1% | RT(a) |
| Accent blue | #005BAC (outline pill, active pill tab, current underline, one filled CTA in block 11) | ≤2% | RT(a) |
| Notice tint | rgba(106,86,72,.06) | ~1% | RT(a) alert tint pattern, recoloured to brown (red alert tone reads as a warning, wrong for a booking hint) |
| Photography | high-key documentary | ~20–25% | RT(e) |
First-screen saturated share ≤15% (gate), design target ≤5%. No cream/beige page ground: page stays #FFFFFF.
theme.json palette slugs: base #FFFFFF, base-2 #F8F7F3, panel #F0EFE7, panel-2 #FCFBF9, line #D3D0C8, line-2 #EBE9E2, contrast #333333, meta #736D6D, primary #6A5648, primary-deep #5D2F0C, link #795134, accent #005BAC.

## 6. Type (font_direction sans)
- **Latin headings:** Plus Jakarta Sans (600/700/800). **Latin body:** DM Sans (400/500/700). Both sans; no serif anywhere. The reference's Roboto Slab tile labels/dates are rendered with Plus Jakarta Sans 800 caps + ls 3px (keeps the heavy caps "slab" feel inside the sans direction).
- Stacks: headings `"Plus Jakarta Sans", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`; body `"DM Sans", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`. `:lang(zh-TW)` puts Noto Sans TC first, `:lang(ja)` Noto Sans JP first (gothic sans, never Noto Serif). Copy shared/inc/editor-lang.php → inc/editor-lang.php and require it.
- All faces via **theme.json fontFamilies + fontFace** (woff2 in assets/fonts, Latin + zh-TW/ja subsets made the Hokuto/Hada way), so editor and front end match (check-editor-fonts.mjs).
- Sizes (theme.json): small 0.875rem (14, nav RT(b)); base 1rem (16, RT(b) body), lh 1.7 (en), 1.85 (zh/ja); medium 1.375rem (22, H3); large 1.875rem (30, H2 = RT(b) main-title 30px) weight 700 ls −0.01em; x-large 2.75rem (H2 on band/CTA); **xx-large 4.25rem** (H1 hero, clamp as above). Tile label 1.5rem/800/ls 3px/lh 1 (RT(b) 24px 900). Date 0.75rem/800/ls 1px (RT(b)). Chip 0.625rem/600 (RT(b) 10px). Notice 1rem (RT 18px reduced: one line at 1200).
- CJK ≈0.75× Latin heading sizes; de/fr `hyphens:auto`.
- Section label above each H2: 13px caps ls 1px #736D6D (reference's small JP sub-line pattern, RT(b) 14px sub).

## 7. Spacing, radius, decoration (RT(c)(d)(f))
- Container 1400 max, inner 1200 (`contentSize 1200px`, `wideSize 1400px`), side padding 20px (≥1440 photo inset 24px).
- Block gap 100px between ordinary blocks; 150px before/after T1 band and story band (RT(c) 150–200).
- Radius **8px** everywhere (photos, panels, tiles, notice, tabs, cards); chips 4px; arrows/disc 50%; pills 100px. No other radii.
- Shadows: header only (see T2). Cards on T1 band: none (the lift and plate carry it).
- Hover: opacity .8, `transition: opacity .2s` (RT(g) declares none; we add .2s for smoothness).

## 8. Responsive
- 390px first screen: header 72, photo inset 12px, ratio 4:3 (height ~275), arrows Ø32 inside photo, no text on photo; info bar single column (dash bars, small line, H1 2.5rem max 3 lines, lead, pill). **No vertical text, no absolutely positioned labels over text.** Notice strip wraps to 2 lines max.
- Tiles: 2×2 stays to 600px, 1 column below; padding 0 (the 100px inner padding only ≥1200).
- Sticky photo in block 5: sticky only ≥1024px; below, photo first then text.
- **Price table ≥782px: full inner width (1200), plan column left, price column `white-space:nowrap; text-align:right` never clipped, `table-layout:auto`, no fixed widths that overflow.** <782px every table becomes stacked rows (each row a card: plan name, includes, price on its own line right-aligned).
- No horizontal overflow at 390/800/1280 (pill-tab row scrolls inside its own container with `overflow-x:auto`).

## 9. Photos (16, Grok, one at a time; Read every one; ≤300 KB, ≤2000px, webp)
**STYLE (identical for all):** `documentary photograph, high-key natural daylight, soft window light, bright white and warm light-grey surroundings, muted warm coffee-brown accents, realistic skin and hands, candid unposed moment, 35mm lens, shallow depth of field, clean modern small office in an international city, diverse adults, no text, no logos, no brand names, no signage, no Japanese elements`
| # | Subject & composition | Ratio | Used on | Home |
|---|---|---|---|---|
| P01 | Technician (apron, sleeves rolled) sets a white cup under a compact countertop bean-to-cup machine; facilities manager beside her tasting from a cup; kitchen counter, window right; wide, subjects in left-centre third | 2.4:1 (gen 2000×840) | Home hero frame 1 | ★ |
| P02 | Same counter moments later: manager and two colleagues tasting, technician writing on a clipboard; same framing | 2.4:1 | Home hero frame 2 | ★ |
| P03 | Close: hands pouring roasted beans into the machine's hopper | 4:5 | Home block 3 | ★ |
| P04 | Small design studio, people at desks, one holding a coffee cup at a pin-board | 3:2 | Home block 4 left; Offices We Serve | ★ |
| P05 | Small physio clinic front desk, receptionist with a cup, plant, bright | 3:2 | Home block 4 centre | ★ |
| P06 | Accountancy office of ~40, open desks, kitchen corner in background | 3:2 | Home block 4 right; Offices We Serve | ★ |
| P07 | Technician descaling / cleaning the machine, close, focused hands, tools on a cloth | 4:5 | Home block 5 sticky | ★ |
| P08 | Afternoon office kitchen, two colleagues talking by the machine, long window light | 21:9 (2000×860) | Home block 6 parallax band | ★ |
| P09 | Three small cups in a row on the counter, manager leaning in comparing, technician's hand gesturing | 3:2 | Home block 8; Tasting Visit | ★ |
| P10 | Technician carrying a padded machine case through an office door, smiling to a colleague | 1:1 | Home block 11; Contact | ★ |
| P11 | Paper bags of beans (blank, unlabelled) on a shelf in a supply room | 4:3 | Machines & Beans | |
| P12 | Machine installed on a small office counter, cups stacked, nobody | 3:2 | The Service T1 centre | |
| P13 | Technician and office manager reviewing a printed monthly checklist (no readable text) | 3:2 | The Service T1 left | |
| P14 | Milk jug and cup on a tidy counter, close | 3:2 | The Service T1 right; Plans | |
| P15 | Team stand-up in a meeting corner, everyone holding cups, morning | 3:2 | Offices We Serve T1 centre; About | |
| P16 | Close of the machine's control panel and drip tray, clean, no text on screen | 4:3 | Machines & Beans; Journal post | |
No photo repeats on the same page. No cutouts. Faces natural; regenerate any with text, logos, broken hands.

## 10. Scroll effects (sp-scroll, copied unchanged)
| Effect | Where | Source & reference behaviour | Ours |
|---|---|---|---|
| `sp-parallax` (**required**) | Home hero photo layer (P01/P02 stacked inside `.sp-parallax__layer`; dash bars, arrows and info-bar text are outside the moving layer) `--sp-par:8%`; mobile `--sp-par:6%`. Second: home block 6 band (P08 as Cover background) `--sp-par:10%`, mobile 7% | Key Coffee banner's slow autoplay advance (9000ms / 300ms) is the reference's only motion; we translate "the image moves slowly on its own" into a scroll-linked drift | CSS scroll-driven, linear; JS fallback built in; static under reduced-motion / `?sp-static` / editor |
| `sp-stagger` + `sp-reveal--up` | Home block 2 tiles; block 4 side cards; inner T1 cards; FAQ items not | stage-a candidate (reference has none; hover opacity only) | IntersectionObserver, `--sp-dur:.6s`, `--sp-dist:24px`, stagger 0.12s (sp-scroll default), `cubic-bezier(.2,.7,.2,1)` |
| `sp-reveal--up` | Wrapper of block 4 centre card (rises into its lifted place), block 5 four items, block 8 timed lines | stage-a candidate | `--sp-dur:.7s`, 24px |
Not on: hero (0 reveals), notice strip, price table, calendar rows (content), forms, legal text. Crossfade keyframes are separate CSS (opacity only), disabled under `prefers-reduced-motion` (show P01 static).

## 11. Fixed numbers (identical on home, inner pages, five languages)
- Founded **2014**; studio & workshop: **14 Harbour Row, Northgate** (fictional); service area: Northgate, Riverside, Old Mill, Eastbank (waitlist: Eastbank expansion, Millhaven).
- Hours: office **Mon–Fri 8:00–18:00**; tasting visits **Tue–Thu 9:30–15:30**, **45 minutes**; phone +00 20 7946 0144; hello@kouhi.example.
- Plans (monthly, USD, machine + beans + one visit included):
  1. Tasting visit — **free**, 45 min, no contract
  2. Desk plan — up to 12 people — **$149 / month**
  3. Studio plan — 13–30 people — **$289 / month**
  4. Office plan — 31–60 people — **$489 / month**
  5. Clinic plan — waiting rooms, up to 40 cups a day — **$259 / month**
  6. Extra beans — 1 kg house roast — **$28**
  Minimum term **3 months**, then one month's notice. Machine repair or swap within **2 working days**.
- People (7): Mara Lindqvist (founder, roaster), Tomas Okafor (co-founder, service lead), Ines Duarte (technician), Kenji Arnaud (technician), Priya Nair (bookings), Sam Whitfield (accounts & billing), Lea Brandt (customer care). Hero technician in photos is unnamed.
- Stories (3): Lantern Row Architects (14 people, Desk→Studio plan), Northgate Physio (clinic plan, 9 staff + waiting room), Fieldnote Accounting (42 people, Office plan). No figures claimed beyond headcount and plan.
- Visit run: arrive 0:00 · three roasts 0:10 · fit the machine 0:30 · written note & price 0:45.
- Calendar dates (demo): Tue 10, Thu 12, Tue 17, Wed 18, Thu 19, Tue 24, Wed 25, Thu 26 November (2026).

## 12. Similarity to reference (target ~80%)
| Dimension | Key Coffee (RT) | Kouhi Service |
|---|---|---|
| Base / panel / line | #FFFFFF, #F8F7F3 header, #F0EFE7, #D3D0C8 | same |
| Text / meta | #333333 / #736D6D | same |
| Brown | #5D2F0C labels, #795134 links | same + row #6A5648 for icons/active |
| Accent | #005BAC pill, active tab, 2px underline | same, same places |
| Alert strip | rgba(230,50,38,.05) + red text | rgba(106,86,72,.06) + #5D2F0C (reason §5) |
| Header | 100px, #F8F7F3, hanging #F0EFE7 tab 40px r 0 0 8 8 | 100px, same colours, tab 32px r 0 0 8 8 |
| Type | Barlow + Noto Sans JP, Roboto Slab caps labels | Plus Jakarta Sans + DM Sans (row), Noto Sans TC/JP; caps labels in PJS 800 |
| Sizes | body 16, nav 14, tile 24/900/ls3, h2 30, date 12 ls1, chip 10 | body 16, nav 14, tile 24/800/ls3, h2 30, date 12 ls1, chip 10; H1 68 (ours) |
| Radius | 8 all, chips 4, pill 100, round 50% | same |
| Banner | width 100%, r 8, ~2.2:1, mt 24 | inset 24, r 8, 2.4:1, mt 24 |
| Card rail | 360×240 / 480×320 lifted 44, plate r 0 0 8 8, curved band, emblem top −87 | 360×240 / 480×320 lifted 44, plate r 0 0 8 8, curved band, disc top −36 |
| Pagination | 10×14 bars gap 20, 24px below | 10×14 bars gap 20 in info bar |
| Arrows | Ø40 #F0EFE7, 60px outside banner | Ø40 #F0EFE7, 24px inside photo (no room outside at inset 24) |
| Tiles | 2×2, 120h, r 8, gap 16, padding 0 100, icon left 24 / text 66 | same (text at 72 for 32px icon) |
| Spacing | container 1400 / 1200, blocks 100 and 150–200 | same |
| Motion | autoplay 9000 / 300, hover .8 | crossfade 9s / .6s fade, hover .8 (.2s); + parallax 8/10%, reveal up .6–.7s 24px |
| Shadow | header 0 6px 8px rgba(0,0,0,.2) | header 0 6px 8px rgba(0,0,0,.08) |

## 13. Home acceptance checklist
- [ ] Header: hanging tab touches top, r 0 0 8 8, language + hours; anchor links; outline blue pill; one menu only.
- [ ] Hero: inset rounded 2.4:1 photo P01 crossfading to P02 (9s), parallax moves ≥6px (check-parallax), Ø40 arrows, dash bars, info bar with 4.25rem H1 at 1440, no text on the photo; 0 reveals in the hero.
- [ ] Notice strip under the info bar, above the fold at 1440×900.
- [ ] 2×2 slab-caps tiles, staggered reveal.
- [ ] T1: centre card 480×320 vs 360×240, lifted 44px, white plates, curved #F0EFE7 band, disc on its edge.
- [ ] Sticky photo P07 beside four ruled service items (≥1024px).
- [ ] Story band P08 with parallax and overlapping white quote card (text not in moving layer).
- [ ] T3 calendar: filled blue active pill, 8 dated rows with chips, all visible.
- [ ] Plans table full width at 800 and 1280, price column nowrap right, stacked at 390; numbers match §11.
- [ ] FAQ 6 items; final #F0EFE7 booking panel with the one filled blue CTA.
- [ ] 10 photo positions, none repeated; ≥250 words; first-screen saturated ≤15%.
- [ ] Fonts identical in editor and front end (PJS/DM Sans; Noto Sans TC/JP for zh/ja).
- [ ] auto-gates pass at 390/800/1280; reduced-motion shows final state and static P01.
