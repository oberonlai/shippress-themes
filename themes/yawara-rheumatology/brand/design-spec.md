# Yawara Rheumatology: design spec (stage 1, binding for implementation)

Row b27-1 · rheumatology clinic · type business · first_screen top-bottom-halves · page_structure narrative-problem-method-proof · font_direction **sans** (Figtree / Public Sans, CJK Noto Sans TC / Noto Sans JP).
Primary reference: **Island Hospital Otani — https://otani.or.jp/** (only reference). Measured values: `brand/reference-tokens.md` (cited below as `tok(a)`…`tok(g)`). Screens: `brand/ref/*.png`.
IMAGERY: **photo** (the reference uses bright high-key daylight photographs only) → real-photograph STYLE below, no illustration, no cut-outs.
Similarity target: ~80% to otani.or.jp in colour, image presentation, motion, decoration and layout. Photos, copy and logo are our own; nothing of the reference's images, text or bird mark is copied.

Prefix for all theme classes: `yw-`.

---

## 1. Signature techniques (three, all obvious at a glance)

### T1. Half-and-half first screen with a sideways photo strip (otani.or.jp first screen, `ref/otani-first.png`, `ref/scroll-otani-wheel-after.png`)
- **Reference:** the top 53% of the viewport (0–477px of 900) is a full-width photographic strip: one very wide landscape cell (1728×477, 3.62:1, 120% of the viewport) followed by abutting 477×477 square cells, gap 0, radius 0. The strip slides sideways; the page itself does not move. The lower 47% is pure white: logo at x=80 hanging over the seam, nav/notice/phone column starting exactly at x=50%.
- **Ours, home block 1:** header bar 72px (white), then the strip from y=72 to y=522 (height `clamp(300px, 50svh, 520px)` → 450px at 900), full viewport width, then the white half 522–900 (378px). Strip = wide cell P01 at **3.6:1** (1620×450 at 1440 wide, i.e. 112% of viewport, so its right edge is off-screen and the first square P02 peeks in at the far right ~0px→ revealed by drift), then squares P02, P03, P04 (450×450 each), gap 0, radius 0, no border, no shadow.
- In the white half everything to the right starts **exactly at 50% of the viewport** (x=720 at 1440), like the reference nav column; the left 50% holds only the wordmark lockup (x=80, top overlapping the seam by 20px) and white space. Do not fill the left white space.
- **Must not be diluted:** the hard horizontal seam at ~58% with pure white below; zero gaps between cells; square cells; the empty left white area; the 50% column line.

### T2. Seam tab cards + caption tab (otani.or.jp tab cards, `ref/scroll-otani-900.png`)
- **Reference:** a white 163×163 square sits at the lower-left of each square cell, bottom flush with the photo/white seam, containing a centred Japanese title (16.1px, ls 0.175em) over a small-caps Latin sub-label (11.6px, ls 0.05em, #7F89A2). A white 234×32 caption tab sits at the bottom-right of the wide photo, straddling the seam (y 448–480), with "place / MONTH YEAR" at 10px ls 0.75px.
- **Ours, home block 1:** tab card 163×163 (`--yw-tab: 163px`; 112px under 782px) at the lower-left of each square cell, bottom flush with the seam, white #FFFFFF, no shadow, no radius. Content centred: title Figtree 500 1rem/1.4 ls .175em ink, sub-label Public Sans 0.725rem small caps (uppercase + ls .05em) #7A86A2. Tabs: P02 "Where it hurts" / WHERE TO START; P03 "How a plan is agreed" / FIRST VISIT; P04 "Who stays with you" / THE TEAM. Each tab is a link to the inner page.
- Caption tab: white 234×32 at the wide cell's bottom-right, 3px over the seam (top = seam−29px, bottom = seam+3px), text "Consulting room 2 / OCTOBER, 8:40" Public Sans 0.625rem ls .075em ink.
- Home continuation: block 4 (team strip of three squares with tabs), block 7 (journal squares with tabs), block 3 caption tab on the parallax band.
- **Must not be diluted:** white solid square (not translucent, not rounded), flush to the seam, exactly at the lower-left; small-caps sub-label in grey-blue under every tab title.

### T3. One-line dated notice reel + phone in italic numerals (otani.or.jp NEWS + phone row, `ref/otani-first.png`)
- **Reference:** under "NEWS", dated notices (YYYY.MM.DD) underlined, the important ones on a pale red rectangular chip, then a phone number in ~22px italic numerals and a small hours line.
- **Ours, home block 1, white half, column at 50%:** label "NOTICES" (Figtree 500 0.9375rem ls .10em ink) + "all notices" link 0.6875rem; then **one notice line visible at a time** (3 notices cycling every 4000ms via CSS keyframes `steps`, no JS): chip background #FDE8E8, text #C00000, underlined, Public Sans 0.8125rem, padding 4px 8px, radius 0, date format `2026.11.04`. Below it: phone `+1 555 0142 300` in Figtree italic 500 1.375rem ink with a 16px phone glyph, then hours line Public Sans 0.6875rem ink: "Mon–Fri 8:30–17:30 · Sat 8:30–12:30 · Closed Sun & public holidays".
- Continuation: news archive list (each post date on chip), contact page (phone row identical), fees page (notice chip "Fees reviewed 2026.04.01").
- **Must not be diluted:** chip is a flat pale rectangle (not a pill, not a badge with icon), one line, underlined dated text, italic phone numerals.

### Supporting (not counted): haze lift
P01 loads at `filter: brightness(1.4)` and settles to `brightness(1)` over 2000ms `cubic-bezier(0.445, 0.05, 0.55, 0.95)` (`tok(g)`). CSS `@starting-style` or a load class; reduced-motion → no filter.

### Continuation into inner pages (required, ≥4; we do 8)
Every inner page uses the **short half-and-half page head** `yw-pagehead`: strip height 320px (220px mobile) with one wide cell (3.6:1, cropped) + one square cell carrying a T2 tab card (page title + small-caps sub-label), then a white half (min 200px) where the H1 + 1-line lede sit in the column starting at 50%, left half empty except the breadcrumb at x=80.
| Page | T1 | T2 | T3 |
|---|---|---|---|
| About | pagehead (P14 + P10) | tab "Since 2014" / ABOUT | — |
| Conditions | pagehead (P05 + P03) | each condition section: square photo with tab | — |
| Your first visit | pagehead (P06 + P15) | caption tab on the ultrasound photo | notice chip "Diary sheet printable" |
| Team | pagehead (P07 + P08) | 3-square team strip with name tabs (7 people: 3 with photos, 4 as text rows) | — |
| Fees | pagehead (P02 + P04) | — | chip "Fees reviewed 2026.04.01" |
| Journal (posts) / category / tag | pagehead (P13 + P11) | post cards = squares with tabs | every date on a chip |
| Contact & access | pagehead (P14 + P09) | caption tab on the map-less entrance photo | phone italic row + hours, identical to home |
| Questions | pagehead (P16 + P12) | — | — |
| Notices sign-up (newsletter) | pagehead (P10 + P02) | — | chip example line |

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
otani.or.jp opens on a calm, haze-lifted daylight photograph of a bay with islands and mountains filling the top half edge to edge; a navy bird-and-wreath mark hangs over the seam; the slogan, set small and very widely tracked on the sky, says roughly "look at the sea and spend your own time" — a hospital that lets patients keep their own time and day. The lower half is a quiet white control panel: menu, dated notices on pale chips, phone and hours, one orange "online consultation" button at the right edge. Signature motion: the photo strip slides sideways (wheel/timer) to reveal square detail photos (building sign, entrance, a window-lit ward) each with a white title tab; the first photo lifts out of a bright haze (brightness 140%→100%, 2 s); the notice line cycles.

### (2) Our translation (rheumatology clinic, same composition, same motion idea, same image type)
"Treat swollen joints before they set the shape of a day." The top half is one wide, high-key, window-lit photograph **P01**: the rheumatologist (Dr. Miriam Achterberg) supporting a patient's wrist in both hands while the patient points with the other hand to the knuckle that stiffened overnight; a big window on the left, soft morning haze, white walls, a pale blue cardigan — the reference's sea-and-sky calm becomes window-and-morning calm. The strip then continues sideways through the clinic's day like the reference's detail squares: **P02** two hands resting flat on a pale table in morning light (where it hurts), **P03** a joint being examined with an ultrasound probe on the wrist (first visit), **P04** nurse and patient reading a one-page written plan together (who stays with you). The slogan line sits on the light part of the photo: "Keep the shape of your day." with a small-caps sub-line "RHEUMATOLOGY · HARROW QUAY". The white half is the clinic's control panel: notices, phone, hours, three "where to start" text links and one clay CTA "Book a first visit". Motion: P01 lifts from haze; the whole strip drifts slowly left (sp-marquee) so the squares and their tabs slide in, exactly the reference's sideways reveal; the notice line cycles every 4 s.

### (3) KV checklist (1440×900; every item implemented and visible in the first screen)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Wide sea-and-mountain photo filling the top half, 3.62:1 | Wide high-key photo: rheumatologist supporting the wrist, patient pointing at the stiff knuckle, window light | y 72–522, x 0 → 112% width | haze lift brightness 1.4→1, 2000ms, cubic-bezier(.445,.05,.55,.95); drifts left with the strip | P01 |
| 2 | Square 477×477 detail cells abutting the wide cell, revealed sideways | Squares 450×450: hands on table, ultrasound on wrist, plan read together; gap 0 | right of P01 inside the strip; first square partly visible at the right edge on load | `sp-marquee` drift (120s loop, linear), pause on hover/focus | P02, P03, P04 |
| 3 | White 163×163 title tab at each square's lower-left, flush with the seam | White tab: title + small-caps sub-label, links to Conditions / First visit / Team | lower-left of each square, bottom = seam | moves with its cell (no separate animation) | (on P02–P04) |
| 4 | White caption tab bottom-right of the wide photo, straddling the seam | "Consulting room 2 / OCTOBER, 8:40" | bottom-right of P01, 3px over the seam | moves with P01 | (on P01) |
| 5 | Logo over the seam + widely tracked small slogan on the sky | Wordmark lockup (a simple open-circle "joint" mark + "Yawara Rheumatology" + small-caps "HARROW QUAY · SINCE 2014") at x=80 overlapping the seam by 20px; slogan "Keep the shape of your day." (H1) Figtree 400 1.72rem ls .30em ink + sub-line 0.79rem caps ls .10em #7A86A2, at x=50%, y≈ strip top + 46% | logo left; slogan right half of the photo (fixed overlay, not in the moving layer) | slogan opacity 0→1, 800ms, cubic-bezier(.215,.61,.355,1), delay 500ms | — |
| 6 | White half: nav column at 50%, dated notices on pale chips, italic phone + hours, one orange CTA at the right edge | White half: column at 50% with 3 "where to start" links (Figtree 500 .9375rem ls .10em, 3 columns 146/174px pitch like the reference), notice reel on #FDE8E8 chip, italic phone, hours; clay CTA "Book a first visit" 156×44 flush to the right viewport edge over the photo at y≈ strip top + 216 | y 522–900; CTA right edge | notice cycles 4000ms; CTA fade 800ms delay 500ms; CTA hover clay→ink 0.3s | — |

Note: the single top menu lives in the 72px header (wordmark is NOT repeated there on desktop home — header shows a small text wordmark left, menu right). The 3 links in the white half are content links (not a `core/navigation` block).

---

## 3. Colour

Reference relationship kept: white ground + pale haze photographs + one deep ink + ONE warm accent only on the single CTA (`tok(a)`).
| Role | Hex | Source | Share (first screen) | Use |
|---|---|---|---|---|
| Ground | #FFFFFF | ref #FFFFFF | ~44% | page, white half, tabs |
| Ink | #001446 | ref #001446 (kept as is) | <3% | headings, nav, phone, wordmark, CTA hover |
| Body text | #1A1F2B | ref #111111 (+5% lightness, softer on long copy) | tiny | paragraphs |
| Label grey-blue | #7A86A2 | ref #7A86A2 | tiny | small-caps sub-labels, meta |
| Haze band | #E6F0F7 | ref #D0E0F0 (+5% lightness) | 0% (below fold only) | blocks 6 and 8 background bands |
| Tide (row hex) | #53727D | design row palette; replaces ref mid blue #3A75B8 (that blue only appears inside the reference's building photo) | <1% | links underline, figures numerals, focus ring |
| Accent (single CTA only) | #C86D00 | ref #C86D00 (kept) ; hover → #001446 | ~1% | "Book a first visit" button only (header + KV + close block — same wording) |
| Notice chip | #FDE8E8 bg / #C00000 text | ref pale red chip | ~1% | notice reel, post dates, fees chip |
| Hairline | #DDE3EA | derived from #D0E0F0 | — | table row lines, form fields |
- First-screen saturated share (HSV s>0.5): target ≤ 8% (ref 5.2%), hard cap 15% (`scripts/check-first-screen.py`). Photos must stay high-key and low-saturation.
- No cream/beige anywhere. No gradients, no shadows (`tok(d)`).

## 4. Type (sans direction)
- Latin headings: **Figtree** (400, 500, 400 italic for the phone numerals); Latin body: **Public Sans** (400, 600). Both bundled woff2 in `assets/fonts/`, loaded through **theme.json `fontFamilies` + `fontFace`** so the editor iframe and front end match.
- Stacks:
  - heading: `"Figtree", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif` (on `:root:lang(zh*)` the bundled zh subset family first; on `:lang(ja)` the ja subset first)
  - body: `"Public Sans", system-ui, -apple-system, "Segoe UI", sans-serif`; zh-TW body = system Chinese sans (`"PingFang TC", "Microsoft JhengHei", sans-serif`, no bundled CJK); ja body = `"Hiragino Sans", "Yu Gothic", "Meiryo", sans-serif`.
  - CJK headings: Noto Sans TC / Noto Sans JP (sans-serif Gothic style), subsetted woff2, weight 500; never a Mincho/serif. Use the Hokuto/Hada subsetting workaround; copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and require it.
- Scale (rem; ref values from `tok(b)` converted at 16px):
| Token | Size | Weight / lh / ls | Source |
|---|---|---|---|
| display (largest) | **4.5rem** (clamp(2.75rem, 6vw, 4.5rem)) | Figtree 400 / 1.08 / 0.02em, ink | ours (ref has no large type; required ≥4.25rem) — used once per page for the section-2 / page statement |
| h2 | 2.25rem | Figtree 400 / 1.3 / .12em | ref tracking family |
| slogan / H1 hero | 1.72rem | Figtree 400 / 1 / **.30em** | tok(b) 27.54px ls 8.26px |
| sub-line caps | .79rem | Public Sans 400 caps / 1.3 / .10em #7A86A2 | tok(b) 12.66px |
| tab title | 1rem | Figtree 500 / 1.4 / .175em | tok(b) 16.1px ls 2.8px |
| tab sub-label | .725rem | Public Sans caps / 1.3 / .05em #7A86A2 | tok(b) 11.6px |
| nav / white-half links | .9375rem | Figtree 500 / 1.2 / .10em | tok(b) 15px ls 1.5px |
| body | 1.0625rem | Public Sans 400 / 1.8 / 0 | ours (readability) |
| notice | .8125rem | Public Sans 400 / 1.4, underlined | tok(b) 11px raised for legibility |
| phone | 1.375rem | Figtree italic 500 | tok(b) ~22px italic |
| caption tab | .625rem | Public Sans / 1 / .075em | tok(b) 10px |
- zh-TW / ja: heading sizes ×0.75, body lh 1.85, letter-spacing on tracked styles reduced to .12em for CJK. de/fr: `hyphens:auto`.

## 5. Spacing, radius, decoration (from tok(c), tok(d), tok(f))
- Page side margin 80px desktop (ref logo x=80), 20px mobile. Column line at 50% for all right-hand text blocks site-wide.
- Section padding 128px top/bottom desktop, 72px mobile. White-half rows: notice label at seam+90px, rows 41px pitch, phone row at seam+316px (ref 688/838 at seam 477 → scaled).
- Radius **0** everywhere (images, buttons, chips, tabs, inputs); only the 24px white circle icon inside the CTA is round. No borders except table hairlines, no shadows, no gradients.
- CTA: 156×44 (min), #C86D00, white text Figtree 500 .875rem ls .08em, 24px white circle with a small calendar glyph at the left; hover bg #001446 0.3s.
- Decoration allowed: small-caps grey-blue sub-labels under every title (ref), white tabs, notice chips, the open-circle wordmark. Nothing else (no blobs, polygons, dots, outlines).

---

## 6. Home page

### First screen (1440×900) — composition
```
y0    ┌ header 72px white: "Yawara" small text wordmark (x80) ·········· menu (6 items) · [Book a first visit] ┐
y72   ├ STRIP (450px) ── P01 wide 1620×450 (haze lift) ────────────────┬ P02 □ ┬ P03 □ ┬ P04 □ → drifting left
      │      slogan H1 at x=720, y=72+207 (on window light)            │[tab]  │[tab]  │[tab]
      │                                       [CTA flush right y=288]  │       │       │
y522  ├─[logo lockup x80 overlaps seam 20px]────────── caption tab ┘───┴───────┴───────┘ (seam)
      │                                   │ x=720: Where it hurts · Your first visit · Fees   (3 links, 3 cols)
      │   (empty white)                   │ NOTICES — all notices
      │                                   │ [2026.11.04 Flare-day slots now open at 8:30 on Saturdays]  (cycles)
y900  └                                   │ ☏ +1 555 0142 300   Mon–Fri 8:30–17:30 · Sat 8:30–12:30 · Closed Sun
```
- Header 72px is white with ink text; it is the only `core/navigation` (exactly one top menu): Conditions, Your first visit, Team, Fees, Journal, Contact (+ CTA button). Not sticky over the strip; may become sticky white after scroll.
- 390px mobile: header 60px (wordmark + Menu button); strip 260px tall (wide cell 936×260 cropped to the hands, squares 260×260, tabs 112×112, caption tab hidden); slogan, logo lockup and sub-line move **into the white half as normal flow text** (no absolute positioning over the photo, no vertical text); then 3 links stacked, notice reel, phone, hours, CTA full-width 48px. Nothing absolutely positioned over text.

### Block order (narrative-problem-method-proof; ≥8 images; total ≥250 English words, 3 narrative paragraphs ≥20 words in blocks 2, 3, 4)
| # | Block | Purpose | Layout / images | Copy |
|---|---|---|---|---|
| 1 | **Half-and-half KV** (`yw-kv`) | who we are; T1+T2+T3 | as above; P01, P02, P03, P04 | slogan, 3 tab labels, 3 notices, phone, hours |
| 2 | **What people arrive with** (`yw-problem`, white) | problem | Left half: display heading 4.5rem "Mornings that start stiff." at x=80; under it the square photo P05 (480×480) with a T2 tab "Morning stiffness" / OVER 30 MINUTES at its lower-left flush to the photo bottom. Right half (from 50%): narrative paragraph 1 (~70 words) then 4 symptom lines (Figtree 500 1.125rem + small-caps sub-label each, 32px gap, no icons, no numerals): swollen knuckles or wrists / stiffness that lasts past breakfast / a joint that is warm to touch / tiredness that sleep does not fix. `sp-stagger` on the 4 lines. | ~110 words |
| 3 | **How a plan is agreed** (`yw-method`) | method | (a) full-bleed parallax band P06 (3.6:1, 400px tall desktop, 220px mobile) `sp-parallax --sp-par:10%`, with caption tab bottom-right straddling the band bottom "Plan meeting, room 1 / TUESDAY 10:15". (b) white below: left half h2 "How a plan is agreed" + small-caps "FOUR VISITS, ONE PAGE"; right half narrative paragraph 2 (~80 words) + 4 steps as short titled paragraphs (title tab typography, no big numbers, no cards): Call & diary → First visit (60 min) → Plan meeting (within 10 days) → Reviews (4 / 12 / 24 weeks). `sp-reveal--up` on the right column. | ~140 words |
| 4 | **Who stays with the case** (`yw-team`) | proof of people | full-width strip of **3 abutting squares** (each 33.333vw, 1:1, gap 0): P07 Dr. Miriam Achterberg with a patient, P08 nurse Ines Varga at the phone desk, P09 physio Tomasz Rehn guiding a hand exercise; each with a T2 tab: name / role in small caps (e.g. "Ines Varga" / NURSE SPECIALIST). Under the strip, white half pattern: right half narrative paragraph 3 (~70 words) + link "Meet all seven". Left empty. | ~80 words |
| 5 | **What the first year holds** (`yw-proof`, white) | proof (process, no outcomes) | left half h2 + 1 sentence; right half 2×2 figures with `sp-count`: "28 joints examined at every review" / "10 days from first visit to an agreed plan" / "4 · 12 · 24 weeks of early reviews" / "1 named nurse for every patient". Numerals Figtree 400 3rem #53727D, label .8125rem. Then one short patient note quote (Figtree 400 1.25rem, ls .02em) with name in small caps — from story 1. No photo. | ~70 words |
| 6 | **A day at the clinic** (`yw-day`, haze band #E6F0F7) | routine | left: square photo P10 (morning waiting room by a window, 480×480) with T2 tab "08:30" / FLARE SLOTS. right half: 5 time stops in ONE horizontal row on desktop (wraps to 2 columns on mobile; not a vertical timeline): 08:30 flare-day slots · 09:30 first visits · 12:30 ultrasound list · 14:00 physiotherapy studio · 16:30 nurse call-backs; time in Figtree 500 1rem ls .10em, text .875rem. The 08:30 item on a #FDE8E8 chip. `sp-stagger`. | ~60 words, uses "daily routine" |
| 7 | **Journal** (`yw-journal`, white) | latest notes | heading left "Patient notes" + "all notes" link at right; Query Loop 3 posts as **3 abutting squares** (gap 0) with featured images P11, P12, P13; each square has a T2 tab carrying the date chip + post title (tab grows to 163×auto min). | titles only |
| 8 | **Visit** (`yw-visit`) | close; T1 echo | half-and-half again: photo strip 360px with P14 (clinic entrance in daylight, wide 3.6:1) + caption tab "Harrow Quay entrance / NORTH SIDE"; white half: right column at 50% with address, hours, italic phone, CTA "Book a first visit" (same wording as header/KV). Left: small map-free directions line (bus 14, 3 min walk). | ~50 words |
| — | Footer | | white, logo lockup left, 3-col link list at 50% (ref white-half layout), © line .6875rem #7A86A2 | |
Home photo positions: P01–P14 = **14 unique images** (≥8). Marquee clone is `aria-hidden` (not counted).

### Comparison with recent themes (must not resemble)
| Theme | Their home order | Ours | Why different |
|---|---|---|---|
| Kuki Climate | framed KV window + year strip → concept card over pinned window → ledger rows → parallax plant band → covers band → survey → marquee log → prices → questions → request | half-and-half KV → problem → parallax method band → team squares → figures → day → journal squares → half-and-half visit | no framed window, no ledger rows, no pinned card; our marquee moves photos, not text |
| Toso Paints | 3-column photo KV with drawing → ruled statement → ranges strip → sticky chapters → catalogue → offset rows → order → journal → visit | — | no sticky chapters, no catalogue, no ruled statement band; first screen is 2 horizontal halves, not 3 columns |
| Kyukyu College | stacked giant name + polygons → split ABOUT → sticky term rows → polygon band → week rows → facts | — | no giant wordmark, no polygons; our largest type is a statement below the fold, hero type is small and tracked |
| Hiroba Food Hall | framed window strip on pale ground → hours strip with arc → lockup statement → card mosaic → schedule → parallax band → tables → notes → visit | — | their strip is inset in a frame on a pale ground with peeking cards; ours is edge-to-edge, top half exactly, squares abutting with seam tabs, pure white control half; no arcs, no mosaic |

---

## 7. Inner pages (10 + posts)
| Page (slug) | Template | Key content |
|---|---|---|
| About (`about`) | page | pagehead; display statement "A clinic built around the morning."; founding story 2014 (Dr. Achterberg, after 11 years in a hospital rheumatology unit), why 28-joint exams, why written plans; P14 + P10 (pagehead) and P16 in body; values as 3 tracked titles with small-caps sub-labels |
| Conditions (`conditions`) | page | 6 conditions, each a section: square photo (P05, P03, P15 rotate; no repeat on page → only 3 have photos) with T2 tab, text right at 50%: rheumatoid arthritis, psoriatic arthritis, gout, axial spondyloarthritis, polymyalgia rheumatica, lupus (SLE) – what it feels like, what we check, who refers |
| Your first visit (`first-visit`) | page | 4-step process in prose (same 4 steps/times as home), 7-day morning-stiffness diary (notice chip), what to bring, ultrasound on the day (P15 with caption tab) |
| Team (`team`) | page | 3-square strip (P07, P08, P09) with name tabs + 7 people as text rows (name, role small caps, 2-sentence bio) |
| Fees (`fees`) | page | price table (6 items, see §9) full width ≥782px; insurance/receipt notes; chip "Fees reviewed 2026.04.01" |
| Questions (`questions`) | page | 8 Q&A (details/summary), e.g. referral needed?, flare-day slot rules, injections, pregnancy planning (we refer), sick notes |
| Journal (`journal`, role posts) | home.html / index | pagehead; post list as abutting squares with tabs, date chips |
| Article | single.html | pagehead-lite (featured image wide 3.6:1 + caption tab), date chip, content 680px column at 50%−340px |
| Category / Tag | archive.html / tag.html | same as Journal with label CATEGORY / TAG |
| Notices sign-up (`notices`, newsletter) | page | short form (email + "which notices": clinic hours, flare slots, journal), P10 + P02 pagehead |
| Contact & access (`contact`) | page | address, phone italic row, hours, bus line, form (name, phone, email, preferred day, message — no medical details), P14 caption tab |
| Privacy (`privacy`) | page | plain legal text, no effects |
Posts: 3 (one per story, §9), categories "Patient notes", "Clinic notices"; tags e.g. morning-stiffness, plans, reviews.
`screens`: home, about, news→journal, article→first post, category→patient-notes, tag→morning-stiffness, newsletter→notices, contact→contact.

---

## 8. Responsive (hard requirements)
- 390px first screen: no vertical text; no absolutely positioned labels over text; slogan/logo in normal flow in the white half; tabs only over photos and ≤112px; caption tab hidden; no horizontal overflow (strip uses `overflow:clip` on its wrapper).
- Fees table at ≥782px: table width 100% of the content column (max 1280px), price column `white-space:nowrap; text-align:right; width:1%` (never cut); at 800 and 1280px nothing clipped.
- Any table at <782px: stacked rows (each row becomes a block: service name, then duration, then price right-aligned on its own line). Use `display:block` per cell with `data-label` text written in markup (not CSS `content`).
- 3-square strips (team, journal) become a horizontal scroll-snap row at <782px (squares 78vw) — children of this row get **no** sp-reveal.
- 2-column 50% layouts stack at <782px (left content first, right column below, both 20px margins).

## 9. Fixed facts (identical on every page and in all five languages)
- Name: Yawara Rheumatology. Founded **2014**. Location: **12 Linden Row, Harrow Quay** (fictional harbour town), 2nd floor, lift access. Bus 14, stop "Linden Row", 3 min walk.
- Phone **+1 555 0142 300**. Hours: **Mon–Fri 8:30–17:30, Sat 8:30–12:30, closed Sun & public holidays.** Flare-day slots: **weekdays 8:30–9:30 and Sat 8:30–9:00**, for registered patients, booked by phone the same morning.
- Process (4): 1 Call & 7-day morning-stiffness diary → 2 First visit, 60 min (history, 28-joint exam, ultrasound, bloods same morning) → 3 Plan meeting within 10 days (one-page written plan agreed and signed by both) → 4 Reviews at 4, 12 and 24 weeks, then every 3 months; one named nurse line.
- Fees (6, EUR): First consultation incl. joint ultrasound, 60 min — **€140**; Follow-up review, 30 min — **€75**; Joint ultrasound (standalone), 20 min — **€90**; Joint injection, per joint — **€110**; Physiotherapy session, 45 min — **€65**; Infusion monitoring visit (medicine billed separately) — **€55**. One-page written plan: included.
- People (7): Dr. Miriam Achterberg (founder, lead rheumatologist) · Dr. Kofi Mensah-Lund (rheumatologist, musculoskeletal ultrasound) · Ines Varga (rheumatology nurse specialist, named-nurse line) · Tomasz Rehn (physiotherapist) · Leila Osei (occupational therapist, hand splints and workplace) · Samir Haddad (pharmacist liaison, medicines reviews) · Ruth Calloway (reception and scheduling lead).
- Stories / posts (3, process only, no promised outcomes): (1) "The knuckle that stiffened overnight" — Ana, 38, a cellist, from diary to first visit; (2) "Planning around a flare week" — Peter, 61, a bus driver, how the flare-day slot and nurse line work; (3) "What the twelve-week review is for" — Hana, 45, a teacher, what is checked and why.
- Figures (sp-count): 28 joints · 10 days · 4/12/24 weeks · 1 named nurse.
- No claims of cure, success rates, awards, media or real brands.

## 10. Photos (16, real-photograph STYLE, one at a time, read every one)
**STYLE (identical for all):** `high-key documentary photograph, bright soft daylight from a large window, gentle haze lift, white walls and pale blue-grey tones, low saturation, natural skin tones, calm and unposed, shallow depth of field, modern international clinic interior, diverse adults, no text, no logos, no signage, no brands, no Japanese elements, 35mm lens, airy negative space`
| # | Subject / composition | Ratio | Used (page · block) | Home |
|---|---|---|---|---|
| P01 | Rheumatologist (woman, 50s, grey bob, white coat open over pale blue) supporting a patient's wrist in both hands; patient (man, 30s) points with his other index finger at a swollen knuckle; large window left, light floor, wide room, figures in right-centre third, sky-bright upper half for the slogan | 3.6:1 (2000×556) | Home KV wide cell | ★ |
| P02 | Two hands resting flat on a pale wooden table, slightly swollen knuckles, morning window light, coffee cup edge | 1:1 | Home KV square; Fees pagehead; Notices pagehead | ★ |
| P03 | Ultrasound probe held against a wrist, gel, doctor's hand, screen blurred off-frame | 1:1 | Home KV square; Conditions body | ★ |
| P04 | Nurse and patient (woman, 60s) reading a single printed sheet together at a table by the window | 1:1 | Home KV square; Fees pagehead | ★ |
| P05 | Woman (30s) at a kitchen window in the morning flexing her fingers slowly, side light | 1:1 | Home block 2; Conditions pagehead | ★ |
| P06 | Consulting table seen wide: doctor, patient and nurse around a plan sheet, window wall behind, lots of white space | 3.6:1 | Home block 3 parallax band; First-visit pagehead | ★ |
| P07 | Dr. Achterberg examining a patient's elbow, both smiling slightly, window light | 1:1 | Home block 4; Team | ★ |
| P08 | Nurse specialist (woman, 40s) at a bright desk with a headset, notebook | 1:1 | Home block 4; Team | ★ |
| P09 | Physiotherapist guiding a patient's hand through a finger exercise with soft putty | 1:1 | Home block 4; Team; Contact pagehead | ★ |
| P10 | Morning waiting area: two empty chairs, a plant, sunlight across a pale floor, one person reading | 1:1 | Home block 6; About pagehead; Notices pagehead | ★ |
| P11 | Close-up: a hand writing in a small diary on a table, morning light | 1:1 | Home journal (post 1 featured); Journal pagehead | ★ |
| P12 | Bus driver (man, 60s) stretching his wrists beside a window, uniform without logos | 1:1 | Home journal (post 2 featured); Questions pagehead | ★ |
| P13 | Teacher (woman, 40s) in a review appointment, hands on table, doctor out of focus | 1:1 | Home journal (post 3 featured); Journal pagehead | ★ |
| P14 | Clinic entrance from outside in daylight: glass door, pale facade, a bench, sky (no signage) | 3.6:1 | Home block 8; About pagehead; Contact | ★ |
| P15 | Ultrasound room: bed with white paper, machine with blank screen, window | 1:1 | First-visit (caption tab); Conditions | |
| P16 | Occupational therapist fitting a pale grey wrist splint | 1:1 | About body; Questions pagehead | |
- 14 home ★ (unique on home), 16 total. Same page never repeats an image (check pagehead + body pairs above). WebP ≤300 KB, long edge ≤2000px; wide images generated landscape and cropped to 3.6:1. Reject any image with text, logos, warped hands or off-style colour.

## 11. Motion (sp-scroll only; 3 effects + CSS load transitions)
| Effect | Where | Source (otani.or.jp) | Trigger / time / easing (ref) | Ours |
|---|---|---|---|---|
| `sp-marquee` | Home KV strip (`yw-strip` row: P01 P02 P03 P04 + aria-hidden clone) | sideways strip pan, topLoopSlider + wheel, ~313px per step, ~0.9s settle | timer/wheel; CSS translate | auto drift, `animation-duration:120s` linear infinite (override on `.yw-strip`), pause on hover/focus-within; reduced-motion & `?sp-static` → static at start position. Hero: no reveal. |
| `sp-parallax` (**required**) | Home block 3 band (Group `yw-method__band`, direct `figure>img` P06) | photo panning inside an oversized cell (bg 160% of cell) | continuous with movement, linear | `--sp-par:10%` desktop, `--sp-par:6%` under 782px (kept on mobile); foreground = caption tab only, which sits outside the moving layer. Second instance: Home block 8 P14 strip `--sp-par:8%` (mobile 6%). |
| `sp-reveal--up` + `sp-stagger` | blocks 2 (symptom lines), 3 (right column), 5 (figures), 6 (time stops), inner page body sections | CTA fade-in 800ms cubic-bezier(.215,.61,.355,1) | IntersectionObserver | `--sp-dur:.8s`, `--sp-dist:16px`, easing cubic-bezier(.215,.61,.355,1) |
| `sp-count` | block 5 figures | — | 1.2s easeOutCubic | as built |
| CSS load (not sp) | P01 haze lift; slogan + CTA fade | brightness 140→100% 2000ms cubic-bezier(.445,.05,.55,.95); CTA 800ms delay 500ms | load | as tok(g) |
| CSS keyframes (not sp) | notice reel | listReel 4000ms | timer | 3 items × 4s `steps`, paused under reduced-motion (show the first) |
No sp-reveal on: KV, fees table, forms, legal text, horizontal snap rows. No custom scroll listeners.

## 12. Similarity table (target ~80%)
| Dimension | Reference (otani.or.jp) | Ours |
|---|---|---|
| First-screen split | photo 0–477 (53%) / white 477–900 (47%) | header 72 + photo 450 (50%) / white 378 (42%) |
| Strip cells | wide 1728×477 (3.62:1, 120% vw) + 477² squares, gap 0, r 0 | wide 1620×450 (3.6:1, 112% vw) + 450² squares, gap 0, r 0 |
| Tab card | 163×163 white, lower-left, flush seam | 163×163 white, lower-left, flush seam (112 mobile) |
| Caption tab | 234×32 white, bottom-right, straddles seam | 234×32 white, bottom-right, 3px over seam |
| Right column origin | x=720 (50%) | x=50% site-wide |
| Logo | x=80, overlaps seam ~20px | x=80, overlaps seam 20px |
| Ground / ink / label / accent | #FFFFFF / #001446 / #7A86A2 / #C86D00 | #FFFFFF / #001446 / #7A86A2 / #C86D00 |
| Haze | #C0E0F0–#D0E0F0 in photos | high-key photos + band #E6F0F7 |
| Notice chip | pale red #FDE8E8, red underlined #C00000 | same |
| Saturated share | 5.2% | ≤8% |
| Slogan | 27.54px, w400, lh 1, ls .30em | 1.72rem, w400, lh 1, ls .30em |
| Sub-label | 11.6–12.7px caps, ls .05–.10em, #7A86A2 | .725–.79rem caps, ls .05–.10em, #7A86A2 |
| Nav | 15px ls .10em, 3 cols | .9375rem ls .10em, 3 cols (white-half links) |
| Phone | ~22px italic numerals | 1.375rem Figtree italic |
| Radius / border / shadow | 0 / none / none | 0 / none (table hairline only) / none |
| Load motion | brightness 140→100% 2s cubic-bezier(.445,.05,.55,.95) | same |
| CTA | 156×44 orange at right edge, fade 800ms delay 500ms, hover → navy 0.3s | same |
| Strip motion | sideways pan, ~0.9s steps | continuous sideways drift 120s (sp-marquee) |
| Notice reel | 1 at a time, 4000ms | same (CSS) |
| Largest type | ~28px | 4.5rem below the fold (required by gate) — deliberate deviation |
| Header | nav in the white half, no top bar | 72px white top bar (row requires one top menu) — deliberate deviation |

## 13. Home acceptance checklist
1. First screen at 1440×900 shows: header 72px white; edge-to-edge photo strip ~450px with P01 (wrist + pointing finger visible) and at least the start of a square; pure white lower part; the seam is one straight line.
2. White 163×163 tab with title + grey-blue small-caps sub-label flush to the seam on every square; caption tab bottom-right of P01 straddling the seam.
3. Wordmark lockup at x=80 overlaps the seam; right-hand white-half content starts exactly at 50%.
4. One notice line on a pale red chip, cycling every 4 s; italic phone numerals; hours line.
5. Exactly one clay #C86D00 element type (the "Book a first visit" CTA); no other warm colour.
6. P01 lifts from haze in 2 s; strip drifts left; static with `?sp-static` and reduced-motion.
7. Block order exactly 1–8 as §6; display heading 4.5rem in block 2; three narrative paragraphs ≥20 words; ≥250 English words.
8. ≥8 (planned 14) unique images on home, no repeats; no cut-outs; no text in photos.
9. `sp-parallax` on block 3 band moves ≥6px (check-parallax.mjs desktop + mobile); reduced-motion 0.
10. Reveals hidden before entry ≥3 and back to place; nothing transparent after scrolling to the bottom with `?sp-motion`.
11. 390px: no overflow, no vertical/overlapping labels, slogan in flow, tabs ≤112px.
12. First-screen saturated share ≤15% (target ≤8%).
13. Radius 0, no shadows, no gradients, no cream/beige.
14. Fees/figures/hours/phone on home identical to §9.
15. Editor and front end show the same Figtree / Public Sans (and Noto Sans TC/JP subsets on zh-TW/ja).
