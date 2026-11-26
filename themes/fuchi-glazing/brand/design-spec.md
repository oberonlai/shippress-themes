# Design spec: Fuchi Glazing (fuchi-glazing)

Stage 1 design spec (design director). Implementers follow this literally. Where a value here conflicts with taste, this file wins. Row b40-6: landing type, landing-longform, archetype asymmetric-masonry, nav centered, sans (Onest / DM Sans), palette "nibi-iro" (dull grey) #6E7174, IMAGERY **photo**.

- Main reference: YKK AP, https://www.ykkap.co.jp/ (pages `/`, `/business/`, `/consumer/reform/window/`). Screens: `brand/ref/ykk-first-*.png`, `brand/ref/ykk-consumer-reform-window-*.png`, `brand/ref/ykk-business-*.png`, `brand/ref/scroll-ykk-*.png`.
- Secondary reference: AGC, https://www.agc.com/ (home hero only, plus the news ledger). Screens: `brand/ref/scroll-agc-before.png`, `brand/ref/scroll-agc-after-900.png`, `brand/ref/sec-agccom-*.png`.
- Measured values: `brand/reference-tokens.md`, cited below as `tok(a)` to `tok(g)`.
- We borrow structure, techniques, colour relations, the key-visual concept and the motion. We never copy YKK or AGC photos, renders, copy, product names, pictograms or logos.

---

## 1. Signature techniques (all three visible on the home page at full strength)

### T1. Solid panel with a slanted edge beside one framed photograph (AGC hero, with YKK's "pane into frame" story)
- **Reference** (`ref/scroll-agc-before.png`): the slide area is inset **15 px** from the viewport edges. A **solid navy panel (#001F6B)** fills the left about 45 %. Its right edge is **slanted about 15–19° from vertical**: x 650 at the top and x 500 at the bottom of a 434 px strip. The panel holds a small label, a bold one-line title and an arrow text link, all top-left. One full-colour photograph fills the rest. A square pager sits centred under it. `tok(e)`, `tok(f)`.
- **Ours**: the home hero (see §3) and a short version as the **page head of every inner page** (see the continuation table).
- **Shape / proportion (home)**: hero box inset 15 px left and right (width = 100vw − 30 px), height `clamp(440px, calc(100svh - 252px), 560px)`. Panel: slate **#3B4044**, `clip-path: polygon(0 0, 52% 0, 40% 100%, 0 100%)` on a layer that spans the full hero width. This puts the edge at 52 % of the hero width at the top and 40 % at the bottom (≈ 17° at 560 px tall, same as AGC). The photo layer spans from 34 % to 100 % of the hero width and sits under the panel, so the slant crops it. Radius 0.
- **Pane-into-frame details** (our version of YKK's lead story): a 2 px aluminium line (#C9CDD0) draws a rectangle inset 28 px inside the photo's visible area (inline SVG `rect`, `vector-effect: non-scaling-stroke`). A single glass sheen crosses the photo diagonally once (see §3, KV #3).
- **Not to be diluted**: the slant must be a real diagonal edge (not a curve, not a 90° split, not a gradient fade). The panel must be solid and dark (not translucent over the photo, not a card). The photo must touch the slanted edge with no gutter. The inset of 15 px from the viewport edges must stay. The frame line must be visible in the final state.

### T2. Two-tier header: current item as a solid accent block on the hairline + outlined CTA box with a circle arrow (YKK header)
- **Reference** (`ref/ykk-consumer-reform-window-0.png`): utility row (logo left, small links and pill search right), then a **44 px nav row**. The **current item is a solid #0084B9 block, 44 px tall**, with white text, sitting on the 1 px bottom hairline. At the far right is an **outlined button: 1 px #0084B9 border, 158 × 32 px, accent text 14 px, 16 px circle-arrow icon at the right**. `tok(c)`, `tok(d)`.
- **Ours**: global header on every page. Row 1 (88 px): wordmark left; right side: phone, "Survey visits Tue–Thu", language switcher as plain 0.8125rem links separated by a 1 px × 14 px #DBDBDB rule. **No search field** (none in the first screen). Row 2 (46 px): **centred** anchor menu (row `nav: centered`). The current item is a **solid #0078A8 block, 46 px tall, padding 0 20px, white text 1rem / 400**. The CTA box is at the far right of row 2: **"Book a survey"**, 1 px #0078A8 border, height 36 px, padding 0 14px, 0.875rem / 500 #0078A8, 16 px circle-arrow SVG (1.25 px stroke) 10 px after the label. Bottom hairline 1 px #DBDBDB across the full width. Row 2 is `position: sticky; top: 0` with a white ground. This is our CSS-only version of AGC's collapsing header: row 1 scrolls away and the nav row stays.
- **The one repeated CTA** reuses the same box everywhere it appears (header, hero panel, after prices, quote band, every inner-page foot). It always says "Book a survey" and links to `/contact/`. On the dark panel and the dark footer it inverts: 1 px #FFFFFF border, white label, white circle arrow. Hover on light: background #0078A8, white label, 0.2 s `cubic-bezier(0.215, 0.61, 0.355, 1)`. Hover on dark: background #FFFFFF, label #3B4044.
- **Current block mechanics**: WordPress `current-menu-item` / `current_page_item` on the Navigation block. On the front page the first item "Overview" (`/`) is current. On inner pages the header nav carries the same anchor links, and the current page is shown by the breadcrumb row (below). **No scroll-spy script** (sp-scroll only).
- **Not to be diluted**: a filled rectangular block (not an underline, not a pill, not text colour only) touching the hairline. Square corners. An outlined box CTA (not a filled button, not a text link) with the circle arrow. Exactly one top menu.

### T3. Light centred section heading with a 24 × 2 bar + 4 × 2 square photo catalogue on a pale band (YKK window-reform catalogue)
- **Reference** (`ref/ykk-consumer-reform-window-0.png` bottom, `ref/ykk-consumer-reform-window-900.png`): pale band #F9F9F9. A centred H2 in a **light weight (400), 24 px / 30 px**, with a **24 × 2 px black bar** 16 px under it. Then 4 columns of **272 × 272 px square photos, r0, 40 px gutters** (4 × 272 + 3 × 40 = 1208). A left-aligned 18 px caption sits 24 px below each photo. Two rows. `tok(b)`, `tok(c)`, `tok(e)`, `tok(f)`.
- **Ours**: home section 4 "What we replace" (8 squares). **Every** section heading on the site uses the same light centred H2 + bar (home and inner pages). The exceptions are the hero H1 and the inner-page H1 on the slanted panel.
- **Shape**: band #F6F7F7, padding 88 px 0. Grid 4 × 272 px, gap 40 px (column) and 48 px (row), container 1208 px. Photos `aspect-ratio: 1/1; object-fit: cover`, r0, no shadow, no border. Caption 1.125rem / 1.4 / 500 #1A1C1E, left, 20 px under the photo, plus one line 0.875rem / 1.6 #6E7174. Every square links to `/replace/#<anchor>`. On hover the caption underlines (1 px) and the photo dims 4 % (`filter: brightness(.96)`, 0.2 s ease-out-cubic).
- **Not to be diluted**: true squares, square corners, the caption *below* (never overlaid), 4 across on desktop, the pale band behind, the light (400) centred heading with the short black bar. Never upgrade the heading to bold. Never put the squares on white cards with shadows.

### Supporting devices
- **S1. Dated ledger rows** (AGC news, `ref/scroll-agc-after-900.png`): a left label column 130 px (AGC date column), a category chip, a title in accent colour, and 1 px #D8D8D8 rules. On home §3 these become the job sequence (day labels instead of dates). Plain ruled rows: no vertical line, no dots, no numbered circles.
- **S2. Edge-to-edge 4.67:1 photo strip with a centred white caption** (YKK window-reform head, `ref/ykk-consumer-reform-window-0.png`): home §6 as the parallax strip.

### Continuation to inner pages (each inner page carries T1 + T2; ≥4 pages carry T3 and/or S1)
| Page | T1 slanted page head | T2 current block / CTA box | T3 light H2 + bar / squares | S1 ledger rows |
|---|---|---|---|---|
| About `/about/` | yes (img-17) | CTA box at foot | H2s with bar; 4 squares "The workshop" (img-13, 06, 10, 18) | founding years ledger (2011, 2014, 2019, 2024) |
| The survey `/survey/` | yes (img-12) | CTA box under intro + foot | H2s with bar | "A survey visit, minute by minute" (6 rows) |
| What we replace `/replace/` | yes (img-11) | foot | **full 8-square catalogue** + one long paragraph per item | – |
| Prices `/prices/` | yes (img-18) | box after the table | H2s with bar | "What is never extra" (4 rows) |
| Projects `/projects/` | yes (img-01) | foot | H2s with bar; masonry as on home | each project has a 4-row ledger (survey, quote, order, fit) |
| Request a survey `/contact/` | yes (img-04) | the box is replaced by the form slot | H2s with bar | "What happens next" (3 rows) |
| Newsletter `/newsletter/` | yes (img-09) | – | H2 with bar | "What we send" (3 rows) |
| News `/news/`, archives | yes, no photo (panel full width with slant at right end) | – | – | **post list rendered as AGC ledger rows** (date 130 px, category chip, accent title) |

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
- **What is drawn**: YKK's project and reform pages open on an **edge-to-edge strip of daylight photographs of windows and frames**, with a plain centred title. YKK's home campaign slide frames one worker photograph against a bold coloured panel with a cut edge. AGC's home puts a **solid navy panel with a slanted edge beside one full-colour photograph**, with label, title and arrow link inside the panel and a small square pager below.
- **Story**: a clear pane meets its frame. There is one correct fit, and one plain route to ask (YKK's outlined "consult" button; AGC's single arrow link).
- **Signature motion**: a slide carousel (500 ms slide, ease-out-cubic, autoplay 4 s / 7 s on the lead slide) with a square pager; header colour transitions of 0.2 s in `cubic-bezier(0.215, 0.61, 0.355, 1)`; AGC's header collapsing on scroll. `tok(g)`.

### (2) Our transposed scene (same composition, same motion idea, same image type = high-key photo)
**Two fitters in plain grey workwear lift a large clear pane on suction lifters toward an open, empty aluminium shopfront frame on a bright city pavement.** The fascia above is blank and the interior behind is pale and empty. This is the "pane into the frame" moment of YKK's project pages, set on a commercial street. It sits on the right of AGC's slanted solid panel. The panel carries the story in words: *we measure twice, then the glass is ordered; one way to ask for a quote.* The motion is kept as one settling movement instead of a carousel:
- On load, the 2 px aluminium frame line draws around the photo (700 ms, YKK ease-out-cubic). This is the frame "receiving" the pane.
- One glass sheen crosses the photo diagonally (1200 ms, delay 300 ms, once).
- The photo then drifts slowly with `sp-parallax` as the page scrolls.
- The square pager is kept as a **static three-step key** (Survey · Order · Fit).
- The sticky nav row stands in for AGC's header collapse.

### (3) KV checklist (all six implemented and visible in the first screen at 1440 × 900, 1280 × 800 and 390 × 844)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | AGC solid navy panel with slanted right edge, label + title + arrow link inside | Slate #3B4044 panel, edge 52 % → 40 % of hero width; eyebrow, H1 4.5rem, 2-line lead, CTA box (inverted) | hero left, full hero height | none (no reveal in hero) | – |
| 2 | AGC single full photograph filling the rest of the slide / YKK pane-into-frame project photo | Two fitters lifting a large pane toward an open aluminium shopfront frame, city pavement, high-key | hero right, from 34 % to 100 %, cropped by the slant | `sp-parallax --sp-par: 8%` (mobile 5 %) | img-01 `hero-pane-lift.webp` |
| 3 | YKK strip caption / AGC slide title tied to the photo | 2 px #C9CDD0 frame line inset 28 px inside the visible photo + white caption plate "Shopfront · 2.4 m toughened pane" at the frame's bottom-right corner | on the photo | frame draws 700 ms + one sheen sweep 1200 ms on load; static under reduced motion / `?sp-static` | img-01 |
| 4 | YKK / AGC square pager under the slide | Three 10 × 10 squares, 20 px apart, labelled "Survey · Order · Fit"; the first square is #0078A8, the others #8A8E91 | panel foot, 40 px above the panel bottom, in flow | none | – |
| 5 | YKK header: current block on hairline + outlined circle-arrow button | Centred anchor nav with "Overview" as a solid #0078A8 block; "Book a survey" box at right | header row 2 | hover 0.2 s ease-out-cubic | – |
| 6 | YKK pale notice band right under the hero / AGC slide foot | **Info-bar** on #F6F7F7: three cells separated by 1 px #DBDBDB rules: "Survey visits Tue–Thu, 45 minutes" · "Written quote within 3 working days" · "Most shopfront panes: 1 day on site" | directly under the hero, same 15 px inset | none | – |
img-01 is listed in §13.

---

## 3. First-screen composition

**hero_composition: diagonal-split · hero_text: on-solid-panel · hero_footer: info-bar · hero_fingerprint: diagonal-split/on-solid-panel/info-bar**

Do not turn this into full-bleed text over a photo. Nothing sits on the photo except the frame line and the small caption plate (desktop only).

- **diagonal-split**: Group `.fg-hero` (alignfull) with `margin: 15px 15px 0` and `position: relative`, at the height given in T1. Children:
  1. `figure.fg-hero__photo.sp-parallax` (core/image, img-01). It is positioned `inset: 0 0 0 34%`, has `overflow: clip`, and the img uses `object-fit: cover; object-position: 62% 50%`. The pane and fitters must sit in the right 60 % of the image (the left of the image is calm pavement and ends up under the panel). `--sp-par: 8%`.
  2. `.fg-hero__frame`: an inline SVG absolutely placed over the visible photo (left = 52 % + 28 px at the top; use `inset: 28px 28px 28px calc(40% + 28px)` and draw the rectangle in that box). It is decorative (`aria-hidden="true"`). It holds the caption plate: white #FFFFFF at 92 % opacity, 0.8125rem / 500 #1A1C1E, padding 6px 12px, anchored to the frame's bottom-right. The caption plate is hidden ≤781 px and replaced by a static caption line under the photo.
  3. `.fg-hero__panel`: a layer at `inset: 0` with `background: #3B4044` and `clip-path: polygon(0 0, 52% 0, 40% 100%, 0 100%)`, z-index above the photo. Its content box is `padding: 56px 0 40px 101px` (101 + 15 inset = 116 px, the YKK gutter) and `max-width: 500px`. It is a flex column with space-between: text at the top, pager key at the bottom.
- **on-solid-panel**: content in order:
  - eyebrow "COMMERCIAL GLAZING · SURVEY AND QUOTE", 0.8125rem / 600 / .12em uppercase, #C9CDD0;
  - H1 **"Measured twice. Glazed once."**, Onest **4.5rem / 600 / lh 1.04 / −0.015em**, #FFFFFF (3 lines at 1440);
  - lead, 1.125rem / 1.6 / 400 DM Sans, #E4E6E8, max 440 px, ≈ 30 words: "We replace shopfront panes and office partitions for shops, clinics and offices across Lindenport. We survey the opening, check it again before ordering, and fit in a single morning.";
  - the inverted CTA box "Book a survey" (T2) 28 px below the lead;
  - pager key (KV #4) at the bottom.
  
  Contrast: white on #3B4044 is 10.6:1. The panel is low-chroma, so it does not count as saturated.
- **info-bar**: Group `.fg-infobar` directly under the hero (margin 0 15px), height 88 px, background #F6F7F7, bottom hairline #DBDBDB. Its content is aligned to the 1208 container: 3 equal cells with a 1 px #DBDBDB vertical rule between them. Each cell is a label 0.75rem / 600 / .08em uppercase #6E7174 ("SURVEY", "QUOTE", "ON SITE") over a value 1.0625rem / 500 #1A1C1E (the three facts in KV #6). It holds no button: the CTA lives in the panel and the header.
- **Heights at 1440 × 900**: header 134 + 15 + hero 560 (clamped: 900 − 252 = 648 → 560) + info-bar 88 = 797, so the info-bar is fully visible. At 1280 × 800: hero = 548, total 785.
- **Load motion** (the only hero animation, never sp-reveal):
  - Frame line: `stroke-dasharray` = perimeter, animating `stroke-dashoffset` from the perimeter to 0 over 700 ms in `cubic-bezier(0.215, 0.61, 0.355, 1)`, delay 200 ms.
  - Sheen: `.fg-hero__photo::after { content: ""; }`, a `linear-gradient(115deg, transparent 40%, rgba(255,255,255,.38) 50%, transparent 60%)`, `transform: translateX(-60%)` → `translateX(60%)`, 1200 ms, delay 300 ms, `forwards`, then opacity 0. It must stay inside the figure's `overflow: clip`.
  - Wrap both in `@media (prefers-reduced-motion: no-preference)` and also disable them under `html.sp-no-motion` (covers `?sp-static`). The final state (line fully drawn, no sheen) is the static state.
- **Mobile 390 px** (≤781 px):
  - The hero becomes a single column in DOM order with `margin: 0`.
  - The **panel** comes first: static flow, `clip-path: polygon(0 0, 100% 0, 100% 100%, 0 calc(100% - 40px))`, so the diagonal survives as the slanted bottom edge. Padding 40px 24px 72px. H1 **2.75rem / 1.06**. Lead 1rem. CTA box full width, 48 px tall. Pager key in flow.
  - The **photo** comes next: 4:3, full width, `margin-top: -40px` so it tucks under the slant, `--sp-par: 5%`, frame line inset 16 px.
  - Then a static caption line in 0.8125rem #6E7174, padding 8px 24px.
  - The **info-bar** stacks as 3 rows (label + value, hairline between rows, padding 14px 24px).
  - No vertical text, no absolutely positioned labels over text, no overlap, no horizontal scroll.
- **Saturation**: only the nav current block, the header CTA outline and one pager square use the accent. The photo is graded neutral-cool and low chroma (a pale sky is allowed). Target **6–10 %** saturated share of the first screen. The hard cap is 15 % (`scripts/check-first-screen.py`), under the row's 30 % ceiling.

---

## 4. Home sections (one long conversion page; anchor menu; one repeated CTA)

Anchor menu (the single top menu, centred): Overview `/` · The survey `#survey` · In order `#order` · What we replace `#replace` · Projects `#projects` · Prices `#prices`, plus the CTA box "Book a survey" → `/contact/`. Every home section is a Group with the matching `id` (anchor). Container 1208 px. Section padding 88 px top and bottom (mobile 56 px). Every section heading is the T3 light centred H2 + bar unless stated otherwise.

| # | Section (anchor) | Purpose | Layout | Images | Copy | Motion |
|---|---|---|---|---|---|---|
| 1 | Hero `#top` + info-bar | KV + the one CTA | §3 | img-01 | eyebrow + H1 + 30 w + 3 facts | load frame/sheen + parallax only |
| 2 | **The survey plate** `#survey` | what a survey measures | H2 "What the survey measures" + a centred 2-line lead (YKK window-reform lead: 1rem / 2.0, centred, max 640 px). Below that, an **asymmetric plate**: photo 4:5 left in 5 of 12 columns (img-02, 488 × 610). Right, 7 columns: a ruled measurement list of 6 rows. Each row has a 1 px #DBDBDB rule, a label 1rem / 500, and a "reading" in DM Sans tabular figures 0.9375rem #6E7174, right-aligned, nowrap. Rows: Width at three heights, e.g. 2,412 / 2,409 / 2,410 mm · Height at three points · Both diagonals, out-of-square tolerance 3 mm · Sill and threshold level · Frame and bead condition · Access and lifting route (kerb, door widths, stairs). Under the list, one narrative paragraph (≥40 w). | img-02 | lead 2 lines + 6 rows + 45 w paragraph | `sp-reveal--up` on the plate group |
| 3 | **In order** `#order` | how long a replacement takes | H2 "A replacement, in order". S1 ledger rows inside 1208 px: label column 130 px (0.9375rem / 500 #1A1C1E: "Day 0", "Day 1", "Day 3", "Day 4–14", "Fitting day", "Week 6"), then a chip (1 px #DBDBDB border, 0.75rem / 500 #6E7174, padding 2px 8px, r0: Request / Survey / Quote / Check & order / Fit / Aftercare), then title 1.125rem / 500 **#0078A8**, then a one-line description 0.9375rem #3F4448 under the title. Rule 1 px #D8D8D8 above each row and under the last. Row padding 22px 0. 6 rows. | – | 6 × (title + ≈18 w) | `sp-stagger` on the list + `sp-reveal--wipe` per row |
| 4 | **What we replace** `#replace` | catalogue (T3) | pale band #F6F7F7; H2 "What we replace"; 4 × 2 squares 272 px, gap 40/48; captions below: Shopfront panes · Entrance doors · Office partitions · Laminated safety glass · Frameless glass doors · Fanlights and transoms · Manifestation and privacy bands · Door hardware and closers; one line each. Under the grid, a centred text link "All eight, in detail →" to `/replace/` (0.9375rem #0078A8, underline 1 px). | img-03 … img-10 | 8 captions + 8 × ≈10 w | `sp-stagger` on the grid + `sp-reveal--up` per square |
| 5 | **Why twice** (no anchor) | narrative | Asymmetric 12-column layout. Text in columns 1–6: H2 left-aligned in this section only, still 400 weight with the 24 × 2 bar left-aligned, "Why we measure twice". Then **3 narrative paragraphs** (≥30 w each) on the first survey, the second check measure on the day you accept, and why glass ordered from one measurement goes wrong. Photos in columns 8–12: img-12 3:2 (488 × 325) at the top, then img-13 1:1 (232 × 232) offset 64 px to the left and 40 px below the first photo's bottom (no overlap; it sits in the space below). This is the asymmetric-masonry pair. | img-12, img-13 | ≈ 120 w | `sp-reveal--up` on the text group and on the photo group |
| 6 | **Strip** (no anchor) | breathing / statement | S2: alignfull edge-to-edge photo strip **4.67:1** (1440 × 308; min-height 240 px). It is a Cover block `.sp-parallax` with img-11 as the background and a 30 % #1A1C1E overlay (YKK scrim 35 % `tok(b)`). A centred white caption sits in the cover's inner container, which does not move: "Every pane is measured on two separate days." in Onest 2rem / 600 / 1.3, with a second line 1rem / 400 under it. | img-11 | 2 lines | **`sp-parallax --sp-par: 10%`** (mobile 6 %) |
| 7 | **Projects** `#projects` | proof | H2 "Recent projects". **Asymmetric masonry** of 3 columns (gap 40 px): col 1 img-14 **4:5**, col 2 img-15 **1:1** pushed down 72 px, col 3 img-16 **3:2** pushed down 24 px. Under each photo: project name H3 1.25rem / 500, a 2-line story (≈30 w), and a fact line 0.8125rem #6E7174 (e.g. "2 panes · 2.4 m and 1.1 m · 1 day on site"). A text link "Read the three projects →" goes to `/projects/`. | img-14, img-15, img-16 | 3 × 40 w | `sp-stagger` on the columns + `sp-reveal--up` per column |
| 8 | **Prices** `#prices` | prices | H2 "Prices". Full-width table (§11) of 6 rows. A note line 0.875rem #6E7174 ("Prices include VAT, survey credit and waste glass collection."). Then the CTA box, centred, 32 px below. | – | 6 rows + note | **no reveal** |
| 9 | **One way to ask** `#quote` | the single route to a quote | Band #F6F7F7. H2 "One way to ask for a quote". Centred 2-line lead. Then **3 columns** with a 1 px #DBDBDB rule between them, no cards, each with a numeral "1" / "2" / "3" in Onest 2.5rem / 300 #6E7174 and a title + 2 lines: "A photo of the opening", "Rough width and height", "Address and opening hours". Then the CTA box centred (larger here: height 48 px, label 1rem). Then one line with email and phone (0.9375rem). | – | ≈ 60 w | `sp-reveal--up` on the 3-column group only |
| 10 | **Survey waitlist** (newsletter slot) | early access to the next month's survey slots | White. Two columns 5 / 7: left H3 1.5rem / 500 "Next month's survey slots" + 2 lines; right `shippress_form_slot` kind newsletter (§12). | – | ≈ 30 w | **no reveal** |

- **Home image positions: 16** (img-01 … img-16), well above 8.
- **English words**: ≥ 320 (row minimum 250). **Narrative paragraphs ≥ 20 words**: §2 (1), §5 (3), §9 lead, so ≥ 4.
- **Reveal count**: sections 2, 3, 4, 5, 7, 9 (6 of 10, ≤ 60 %). None in the hero, the table or the form.

### Not the same as recent home pages
| Theme | Home order (from stage-a) | Fuchi Glazing differs because |
|---|---|---|
| Kodou Charging | split hero + outlined banner bar > centred statement + pictograms > tabs > wide photo band > 4 tiles > narrative + figures > pricing + banner > story rows > FAQ > newsletter | Diagonal slanted panel hero with an info-bar (not split + banner). No tabs, no pictogram statement, no FAQ, no count-up. A measurement plate and a ledger come before the catalogue. Prices come **after** projects. Projects are a staggered masonry, not stacked story rows. The CTA is a small boxed button, never a full-width banner. |
| Enban Records | hero card + keyword bar > who-comes ruled rows > how a listening works > crate cards > parallax counter band > story > stories rows > visit > letter on ink | Our ruled rows are a dated sequence (AGC ledger), not "who" gateways. No counter band; our strip carries a centred caption. Squares sit on a pale band with captions below, not cards with prices. |
| Kaoru Cocoa | hour-keyed half plate hero > hour rows with swapping plate > staggered outline card wall > dotted phrase strips > closed-days panel > accordion | No sticky swap, no outline cards, no accordion, no vertical phrase strips. |
| Kikan College | framed window hero + stats > 3 × 2 entrance tiles > numbered 01–08 sections > fees table > taster band | No numbered section heads (our heads are light centred H2s with a bar). No stats in the hero. The 4 × 2 squares are photos with captions below, not tinted tiles. |

---

## 5. Inner pages (landing track: ≥ 8 pages + 3 posts)
Every inner page starts with:
- the **breadcrumb row**: 48 px, 0.75rem #6E7174, chevrons, the current crumb in #0078A8 (YKK `tok(f)`);
- the **T1 page head**: inset 15 px, height 320 px (mobile auto). Slate panel with `clip-path: polygon(0 0, 50% 0, 42% 100%, 0 100%)` holding the H1 in Onest 3rem / 500 / 1.15 white plus a 1-line lead in #E4E6E8. The photo sits from 36 % to 100 % with `sp-parallax --sp-par: 6%`, plus the 2 px frame line, static (no draw animation on inner pages);
- the content, with section H2s in the T3 style;
- the **foot CTA box**, centred on #F6F7F7 with one line above it.

No image is repeated within a page.

1. **About** `/about/`: head img-17. Founding story (founded **2011** by Corin Abbott, a former shopfitter, after two orders of wrong-size glass in one month). S1 ledger of years: 2011 founded with one van · 2014 workshop at Calder Yard · 2019 partitions team · 2024 second survey van. Team: **7 named people** as a two-column text list (name 1.125rem / 500, role, one line), beside img-13 (4:5 crop). No portrait grid. Then T3 "The workshop" 4 squares (img-06, img-10, img-18, img-03). Hours and address.
2. **The survey** `/survey/`: head img-12. What we measure (the 6-row plate with img-02), what to have ready (3 columns: access, power, someone with keys), the S1 ledger "A survey visit, minute by minute" (0' arrive and sign in · 5' photos of every opening · 10' three widths, three heights · 25' diagonals and levels · 35' access and lifting route · 45' summary before we leave), and what the written quote contains.
3. **What we replace** `/replace/`: head img-11. The full T3 catalogue (img-03 … img-10). Below it, 8 anchored subsections (`#shopfront`, `#doors`, `#partitions`, `#laminated`, `#frameless`, `#fanlights`, `#manifestation`, `#hardware`), each with an H3 and 2 paragraphs, no new photos. Each subsection ends with a "Typical lead time" line.
4. **Prices** `/prices/`: head img-18. The full price table (the same 6 rows as home). S1 "What is never extra" (survey credit · waste glass collection · protective film until handover · aftercare visit at week 6). Two-column notes: left "Emergency boarding" (≈60 w) beside img-06 (1:1, right).
5. **Projects** `/projects/`: head img-01. The 3 projects in long form, each with a 2-photo masonry pair, a 4-row S1 ledger (Survey / Quote / Order / Fit with dates) and the same facts as home. Photos: Pell & Daughter (img-14, img-03), Northgate Dental (img-15, img-05), Larkin Hardware (img-16, img-18).
6. **Request a survey** `/contact/`: head img-04. Left 7 columns: H2 "Request a survey" + `shippress_form_slot` contact (§12). Right 5 columns: address, hours, phone, email, and the S1 "What happens next" (3 rows). No reveal on the form column.
7. **Newsletter** `/newsletter/`: head img-09. A standalone **survey waitlist / early-access** page. H2 "Get next month's survey slots first". S1 "What we send" (3 rows: open survey days, glass lead-time changes, one short project note). Then the newsletter slot (§12).
8. **News** `/news/`: posts page with empty content. Head without photo. The list is AGC ledger rows: date 130 px · category chip · title in #0078A8 · excerpt one line.
   - Posts (3), category "Site notes", tags "survey", "toughened glass", "partitions":
     - "Why we measure a shopfront on two different days" (featured img-12)
     - "Toughened or laminated: what we fit and where" (img-05)
     - "Boarding up the same day, glazing nine days later" (img-18)
   - single.html: T1 head without photo, then 720 px text column.
9. **Privacy** `/privacy/`, 10. **Terms** `/terms/`, 11. **Thanks** `/thanks/` (after a survey request: "We'll reply within one working day with two survey times", img-01, CTA box back to home). Legal pages have no reveal.

theme-meta `pages`: home, about, news, article, category, tag, newsletter (→ `/newsletter/`), contact (→ `/contact/`). Exactly one `posts` role page (`/news/`). Templates: front-page, page, single, archive, category (= archive), tag (copied from archive, label TAG), 404, search.

---

## 6. Colour (source `tok(a)`; reference values kept within ±5 % lightness where possible)
| Token | Hex | Share | Source / note |
|---|---|---|---|
| base | #FFFFFF | ~62 % | YKK ground #FFFFFF |
| band | #F6F7F7 | ~16 % | YKK pale band #F6F6F6 / #F9F9F9 (same lightness, 0.5 % cooler toward the plan grey) |
| slate (panel, footer) | #3B4044 | ~16 % | **replaces AGC navy #001F6B**. The row fixes the dull-grey palette #6E7174 as the palette. A navy panel covering ~30 % of the first screen would read as saturated (channel spread 107 > 90) and break the 15 % cap. Slate is #6E7174 deepened; it keeps AGC's dark-panel-on-white contrast (10.6:1 with white text). |
| grey (plan) | #6E7174 | text 2 / icons | plan hex; YKK secondary text #666666 (+4 % L) |
| ink | #1A1C1E | text | YKK #000000 (+5 % L, softened) |
| body | #3F4448 | long text | between ink and grey |
| meta | #828282 | dates, small | YKK #828282 |
| hairline | #DBDBDB | 1 px rules | YKK #DBDBDB; ledger rules #D8D8D8 (AGC) |
| aluminium | #C9CDD0 | frame line, eyebrow on slate | YKK #C4C4C4 (+3 % L, cool) |
| pager off | #8A8E91 | pager squares on slate | YKK pager grey, darkened for the dark panel |
| accent | **#0078A8** | ≤ 4 % | **YKK #0084B9, −5 % lightness** so that white text on it reaches 4.9:1 and accent text on white 4.9:1. Used only where YKK uses it: current nav block, CTA box, ledger titles, links, current crumb, current pager square, focus ring. |
| accent-hover | #006690 | hover | – |
| alert | #C0392B | form errors only | YKK alert #F64D4D, darkened for AA text |
| success | #2E6B4F | form success only | – |
- No beige or cream anywhere. The accent never fills a large area (no blue bands, no blue footer).
- **First-screen saturated share: target 6–10 %, cap 15 %**. Measure with `scripts/check-first-screen.py`.

## 7. Type (font_direction: **sans**)
- **Latin display / headings: Onest** (300, 400, 500, 600). **Latin body / UI: DM Sans** (400, 500, 600). Both sans; no serif anywhere.
- **zh-TW**:
  - headings `"Onest", "Noto Sans TC", "PingFang TC", "Microsoft JhengHei", sans-serif` (bundled Noto Sans TC subset, display only);
  - body `"DM Sans", "PingFang TC", "Microsoft JhengHei", "Noto Sans CJK TC", sans-serif` (system fonts, nothing bundled, no Japanese font).
- **ja**:
  - headings `"Onest", "Noto Sans JP", "Hiragino Sans", "Yu Gothic", sans-serif` (bundled Noto Sans JP subset, display only);
  - body `"DM Sans", "Hiragino Sans", "Yu Gothic", "Noto Sans CJK JP", sans-serif`.
- Gothic (sans) CJK only; never Mincho / Ming (serif) faces.
- Load every family through **theme.json `fontFamilies` + `fontFace`** (woff2 in `assets/fonts/`, listed in theme-meta `fonts[].files` with the OFL licence file; names in readme.txt). Copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it, because style.css uses `:lang()`. Editor and front end must show the same fonts (`check-editor-fonts.mjs`). Build the zh-TW and ja subsets with the Hokuto / Hada workaround (the subset script is broken).
- CJK display ≈ 0.75 × the Latin size. CJK body line height 1.85. fr / de use `hyphens: auto`.

| Role | Size (desktop / mobile) | Weight / line height / tracking | Source |
|---|---|---|---|
| Hero H1 (largest) | **4.5rem (72 px)** / 2.75rem | Onest 600 / 1.04 / −0.015em | YKK campaign display (heavy, huge) `tok(b)`; ≥ 4.25rem rule |
| Inner page H1 (on panel) | 3rem / 2.25rem | Onest 500 / 1.15 / −0.01em | YKK inner hero 32 / 700, scaled |
| Section H2 (T3) | 1.75rem / 1.5rem | Onest **400** / 1.3 / 0 + 24 × 2 bar | YKK H2 24 / 30 / 400 `tok(b)`, ×1.17 for the landing scale |
| Strip caption | 2rem / 1.5rem | Onest 600 / 1.3 | YKK inner hero 32 / 700 |
| H3 | 1.25rem | Onest 500 / 1.3 | YKK H3 20 / 25 / 400 |
| Nav | 1rem | DM Sans 400 / 46 px row | YKK nav 16 / 20 / 400 |
| CTA box label | 0.875rem (1rem in §9) | DM Sans 500 | YKK button 14 / 28 / 400 |
| Body | 1rem | DM Sans 400 / 1.75 | YKK body 14–16 |
| Lead (centred) | 1rem | DM Sans 400 / 2.0 | YKK window-reform lead (double-spaced lines) |
| Caption (squares) | 1.125rem | DM Sans 500 / 1.4 | YKK catalogue caption 18 px |
| Small / note | 0.875rem | DM Sans 400 / 1.6 | – |
| Eyebrow / labels | 0.75–0.8125rem uppercase | DM Sans 600 / .08–.12em | – |
| Breadcrumb | 0.75rem | DM Sans 400 | YKK 12 px |

## 8. Spacing, radius, borders, shadow (source `tok(c)`, `tok(d)`)
- Container **1208 px** (116 px gutter at 1440; `wideSize` 1288 px for the header). Text max width 720 px. Gutters 40 px.
- Section padding 88 px top and bottom (YKK 64–96); mobile 56 px. The H2 bar sits 16 px under the H2; content starts 48 px under the bar.
- Header: row 1 88 px + row 2 46 px = 134 px (YKK 90 + 44). Mobile header 64 px: wordmark + "Menu" button opening the core Navigation overlay. The CTA box sits inside the overlay and in the hero.
- **Radius 0** everywhere: photos, buttons, chips, table, inputs. Form inputs use 0 too (`--sp-form-radius: 0`).
- Borders 1 px #DBDBDB. Accent outlines 1 px #0078A8.
- **No shadows** (YKK has none). AGC's card shadow is not used.
- Footer: slate #3B4044, white and #C9CDD0 text. 4 columns: wordmark + address, hours, pages, newsletter slot (dark). A 40 × 40 #0078A8 "Top" square link sits at the footer's top-right. It is in the footer flow, not fixed, so it cannot overlap the mobile first screen.

## 9. Scroll effects (from stage-a "scroll-effect candidates"; sp-scroll copied unchanged)
Three effects only: **reveal--up**, **reveal--wipe**, **parallax** (no count, no marquee).
| Effect | sp-* class | Where | Reference (trigger / time / easing) | Our values |
|---|---|---|---|---|
| Up | `sp-reveal sp-reveal--up` (+ `sp-stagger` parents) | home §2 plate, §4 squares (stagger), §5 text + photos, §7 masonry columns (stagger), §9 columns; inner-page content groups, catalogue on `/replace/`, About squares | YKK slide timing **500 ms, ease-out-cubic `cubic-bezier(0.215, 0.61, 0.355, 1)`** (`tok(g)`); YKK has no reveals, so this is our addition in their timing | `--sp-dur: .5s; --sp-ease: cubic-bezier(.215,.61,.355,1); --sp-dist: 24px`; stagger step = the default 0.12 s |
| Wipe | `sp-reveal sp-reveal--wipe` inside an `sp-stagger` list | home §3 ledger rows; S1 ledgers on Survey, About, Projects | AGC news rows (static ledger) drawn open top-down, like a row being ruled in | `--sp-dur: .7s` with the spec's wipe easing `cubic-bezier(.77,0,.175,1)`; the clip-path is on the child, per spec §4 |
| Parallax | `sp-parallax` | §10 | AGC / YKK slide movement → slow drift | §10 |
Never on: the hero, the price table, forms and their sections, legal text, the footer, the header. No custom scroll listeners. No scroll-spy.

## 10. Parallax (required)
1. **Hero photo** (home §1): `figure.fg-hero__photo.sp-parallax` wrapping img-01. `--sp-par: 8%` desktop, **5 %** at ≤781 px. The foreground (panel text, CTA, pager) lives in the panel layer, never in the moving layer. The frame line SVG sits outside the moving `img`. Reference counterpart: AGC / YKK slide movement (500 ms slide) becomes a continuous slow drift of the single photo.
2. **Strip** (home §6): Cover block `.sp-parallax` with img-11 as the background (`.wp-block-cover__image-background` moves). `--sp-par: 10%` desktop, **6 %** mobile. The caption is in `.wp-block-cover__inner-container` and does not move. Reference: the YKK 4.67:1 strip.
3. **Inner page heads**: the photo in each T1 head, `sp-parallax --sp-par: 6%` (mobile 4 %).
- Static under prefers-reduced-motion, `?sp-static` and in the editor. `check-parallax.mjs` must measure ≥ 6 px on desktop and mobile.

## 11. Responsive
- **390 px first screen**: panel (slanted bottom) → photo → caption line → stacked info-bar. No vertical text, no absolute labels over text, no overlap, H1 2.75rem, no horizontal scroll (`html, body { overflow-x: clip }`).
- **Price table** (home §8 and `/prices/`): a core/table `.fg-prices`.
  - **At ≥ 782 px it is full container width (1208 px; 100 % at 800 px)** with 3 columns: Item 34 % / What's included 46 % / Price 20 %.
  - The **price column is `white-space: nowrap; text-align: right`** and never cut: no `overflow: hidden` on the table or its wrapper, `table-layout: auto`, and the description column wraps.
  - Header row 0.75rem uppercase #6E7174. Rows 1 px #DBDBDB. Item 1rem / 500. Price Onest 1.125rem / 500 tabular.
  - **≤ 781 px every table becomes stacked**: each row is a block with the item (bold), the description, and the price on its own line right-aligned, with hairlines between rows. The header row is hidden visually but kept for screen readers.
- T3 squares: 4 → **2 columns** at ≤ 781 px (gap 16 / 32), captions 1rem.
- Survey plate, Why-twice and the contact page stack (photo on top). The ledger stacks on mobile: label + chip on one line, title and text under them.
- Masonry → one column, offsets removed, photos keep their ratios.
- §9 columns stack, with rules turning horizontal. The info-bar stacks.
- Header row 2 hides below 1024 px; the menu goes into the overlay.

## 12. Forms (form contract v1: `steps/form-contract-v1` exists)
- Copy `pipeline/assets/forms/shippress-forms.php` → `inc/shippress-forms.php` and the forms CSS / editor JS → `assets/`, unchanged. `require` them from functions.php. Forms are never in the first screen and never get sp-reveal (and neither does their section).
- **Request a survey** `/contact/` (no separate booking page): the PHP pattern calls `shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) )`. `$fallback` is buffered literal markup of the mailto CTA box: "Email us to book a survey" → `mailto:survey@fuchi-glazing.example?subject=<contact_subject>`, with the same class and markup as the CTA box. Never link back to `/contact/`.
  - With CF7 or WPForms present, the first published form renders.
  - Recommended fields for site owners: Name*, Business name*, Email*, Phone, Site address*, Type of opening (select: Shopfront pane / Entrance door / Office partition / Other), Approximate width × height (text), Number of openings (select 1 / 2–4 / 5+), Preferred survey day (checkboxes Tue / Wed / Thu), Message / what happened (textarea), Consent* (checkbox linking `/privacy/`).
- **Newsletter** `/newsletter/` (standalone survey waitlist, not an alias of News): `shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'survey@fuchi-glazing.example', 'label' => _t('forms_email'), 'submit' => _t('forms_subscribe'), 'notice' => _t('forms_mail_notice'), 'subject' => _t('forms_mail_subject') ) )`.
  - Same slot on **home §10** (light) and in the **footer** (dark slate).
  - MailPoet (explicit ID) or MC4WP preferred. CF7 / WPForms only with an explicitly configured newsletter form ID, never the contact form.
  - **Without plugins**: a required `type=email` field + submit doing a native mailto POST with the entered address. Visible notice: "Opens your email app. Send the message to join the waitlist; you are not on it yet." Never claim success.
- **Tokens, light**:
  - `--sp-form-surface #FFFFFF`, `--sp-form-text #1A1C1E`, `--sp-form-border #B5B9BC`
  - `--sp-form-accent #0078A8`, `--sp-form-on-accent #FFFFFF`
  - `--sp-form-focus #0078A8` (2 px outline, 2 px offset), `--sp-form-radius 0`
  - labels 0.875rem / 500 #1A1C1E
  - error: #C0392B text + 1 px border + message under the field
  - success: #2E6B4F text with a 1 px left rule
- **Tokens, dark (footer on #3B4044)**: surface #FFFFFF, text #1A1C1E, border #8A8E91, accent #FFFFFF, on-accent #3B4044, focus #C9CDD0, labels and notice #FFFFFF / #C9CDD0. Error text #F2B8B0 on dark, success #B9DCC8.
- Style all plugin classes (CF7, WPForms, MailPoet, MC4WP, Jetpack) consistently: input, textarea, select, checkbox / radio, label, submit, focus, error, success. Scope to the plugin classes; no global selectors.
- **Five-language strings** (en, zh-TW, ja, fr, de) as semantic keys in `inc/i18n/en.php`: `forms_email`, `forms_subscribe` ("Join the waitlist"), `forms_mail_notice`, `forms_mail_subject` ("Survey waitlist"), `contact_email` ("Email us to book a survey"), `contact_subject` ("Survey request"), plus the field labels above. Extract with `L10N_SEMANTIC=1`.
- `form-runtime-check.php` must pass in all five languages. `repo-gates.sh forms` must pass.

## 13. Images (IMAGERY: **photo**, real high-key daylight photographs; 18 images, 0 cut-outs)
**STYLE** (one string for every image, passed as `IMAGE_STYLE`):
`High-key daylight architectural documentary photograph, bright overcast sky, white and pale grey surfaces, clear float glass with soft reflections, natural silver anodised aluminium frames, crisp straight verticals with a shift-lens look, low saturation cool neutral grade, generous clean space, diverse adult fitters in plain grey workwear with gloves and safety boots when people appear, unposed, 35mm lens, blank fascias and blank signs, no text, no letters, no logos, no brand names, no Japanese elements.`

| # | File | Subject / composition | Ratio | Used on (page · section) | Home |
|---|---|---|---|---|---|
| 01 | hero-pane-lift.webp | two fitters lift a large clear pane on suction lifters toward an open empty aluminium shopfront frame on a bright city pavement; pane and fitters in the right 60 %, calm pavement on the left 40 %, blank fascia | 3:2 landscape (2000 × 1333) | Home · hero (KV #2–3); Projects · head; Thanks | ★ |
| 02 | survey-laser.webp | surveyor holding a laser distance meter inside an empty shopfront opening, notebook on the sill | 4:5 | Home · survey plate; Survey · plate | ★ |
| 03 | sq-shopfront.webp | finished clean shopfront glazing, pale empty interior | 1:1 | Home · square 1; Replace · square; About · workshop squares; Projects · Pell pair | ★ |
| 04 | sq-entrance-door.webp | aluminium glazed entrance door with overhead closer, half open | 1:1 | Home · square 2; Replace · square; Contact · head (crop) | ★ |
| 05 | sq-partition.webp | glazed office partition with slim frames and a glass door, bright office | 1:1 | Home · square 3; Replace · square; Projects · Northgate pair; post 2 | ★ |
| 06 | sq-laminated.webp | close-up of a laminated pane edge showing the interlayer, gloved fingers | 1:1 | Home · square 4; Replace · square; About · squares; Prices · notes | ★ |
| 07 | sq-frameless.webp | frameless glass door with patch fittings in a pale lobby | 1:1 | Home · square 5; Replace · square | ★ |
| 08 | sq-fanlight.webp | glazed transom above a shop door, seen from the pavement | 1:1 | Home · square 6; Replace · square | ★ |
| 09 | sq-manifestation.webp | frosted manifestation band across a glass partition, plain geometric (no letters) | 1:1 | Home · square 7; Replace · square; Newsletter · head | ★ |
| 10 | sq-hardware.webp | gloved hand adjusting an overhead door closer with a hex key | 1:1 | Home · square 8; Replace · square; About · squares | ★ |
| 11 | strip-street.webp | wide quiet commercial street of glazed shopfronts in morning light, reflections, blank fascias | 4.67:1 (2000 × 428) | Home · parallax strip; Replace · head | ★ |
| 12 | check-measure.webp | two people with a tape across an opening's diagonal, second check measure | 3:2 | Home · why twice (large); Survey · head; post 1 | ★ |
| 13 | glass-rack.webp | clear panes standing on an A-frame rack in a bright workshop | 1:1 (also cropped 4:5 on About) | Home · why twice (small); About · team | ★ |
| 14 | project-bakery.webp | finished bakery shopfront, bread shelves softly visible through the new glass | 4:5 | Home · projects col 1; Projects · Pell | ★ |
| 15 | project-dental.webp | glazed partition corridor in a pale dental clinic office | 1:1 | Home · projects col 2; Projects · Northgate | ★ |
| 16 | project-hardware.webp | corner hardware shop with a newly fitted pane and fresh sealant line | 3:2 | Home · projects col 3; Projects · Larkin | ★ |
| 17 | team-van.webp | three fitters loading a glass rack on an unmarked white van, pavement | 3:2 | About · head (crop) | |
| 18 | boarding.webp | fitter fixing a plywood board over a broken shop opening at early morning | 3:2 | Prices · head; About · squares; Projects · Larkin pair; post 3 | |

- Rules: webp, ≤ 300 KB, ≤ 2000 px. Generate one at a time with `scripts/grok-image.sh`. Read every image and regenerate it if it has any text or letters, a logo, a broken face or hand, or style drift (warm / saturated / dusk).
- Neutral international modern setting; no image twice on one page.
- 16 on home, 18 in the theme.

## 14. Fixed facts (brand.md must match; identical in all five languages)
- **Name** Fuchi Glazing. **Founded 2011.** Workshop and office: **Unit 3, Calder Yard, 14 Weir Street, Lindenport** (fictional). Phone **+00 20 7946 0412** (fictional). Email **survey@fuchi-glazing.example**.
- **Hours**: office Mon–Fri 08:00–17:00. **Survey visits Tue–Thu 07:30–15:30.** Fitting Mon–Sat from 06:30, so most shops open on time.
- **Process** (6 ledger rows, same everywhere):
  - Day 0 Request (photo + rough size + address)
  - Day 1 First survey, **45 minutes** (Tue–Thu)
  - Day 3 Written quote within **3 working days**, valid **30 days**
  - Day 4–14 Second check measure on the day you accept; glass ordered the same day; lead time **8–12 working days**
  - Fitting day: most shopfront panes **1 day on site**
  - Week 6 Aftercare visit
- **Prices** (6):
  - Survey visit, up to 4 openings: **€120** (credited against the job)
  - Toughened shopfront pane up to 3 m², fitted: **from €890**
  - Laminated safety pane up to 3 m², fitted: **from €1,140**
  - Glazed office partition: **from €420 per metre**
  - Entrance door re-hang with new closer: **from €310**
  - Same-day emergency boarding: **€260**
  - Note: VAT, waste glass collection and the week-6 aftercare visit are included.
- **People** (7):
  - Corin Abbott (founder, lead surveyor)
  - Nadia Petrova (check-measure surveyor)
  - Joel Mensah (fitting lead)
  - Ruth Okonjo (glass ordering and scheduling)
  - Mateo Ibarra (fitter)
  - Lars Vinter (partitions fitter)
  - Asha Kapoor (client desk)
- **Projects** (3):
  - **Pell & Daughter Bakery**: 2 toughened panes (2.4 m and 1.1 m), 1 day on site.
  - **Northgate Dental**: 11 m of glazed partition with 2 doors, 3 days on site.
  - **Larkin Hardware**: corner pane broken overnight, boarded the same morning, laminated pane fitted 9 working days later, 1 day on site.
- **Info-bar facts**: "Survey visits Tue–Thu, 45 minutes" · "Written quote within 3 working days" · "Most shopfront panes: 1 day on site".
- No guarantees, no awards, no real brands or media, no claimed statistics.

## 15. Home acceptance checklist
- [ ] Hero matches `diagonal-split / on-solid-panel / info-bar`: the slate panel has a real slanted edge (52 % → 40 %), the photo touches the slant, the hero is inset 15 px, the info-bar is fully visible at 1440 × 900 and 1280 × 800. Not full-bleed text over a photo.
- [ ] KV #1–6 visible. img-01 shows two fitters, a large pane, an open aluminium frame and a pavement. The frame line is drawn in the final state. The caption plate is on the photo (desktop) or below it (mobile). The pager key is in the panel. The info-bar has 3 cells.
- [ ] T2: the current block is solid #0078A8, 46 px, on the hairline. The "Book a survey" box with circle arrow appears in the header, hero, after prices and in §9, always with the same label and `/contact/`.
- [ ] T3: 4 × 2 true squares, r0, captions below, on band #F6F7F7. Every section H2 is light (400) and centred with a 24 × 2 bar.
- [ ] S1 ledger rows (§3) and S2 4.67:1 strip with centred caption (§6) present.
- [ ] 16 home images, 18 in the theme, no repeat within a page, 0 cut-outs.
- [ ] H1 4.5rem (≥ 4.25rem). Onest / DM Sans in the editor and on the front end. zh-TW / ja Noto Sans TC / JP heading stacks; body stacks without bundled CJK.
- [ ] Price table full width at 800 and 1280, price column nowrap and right-aligned, not cut; stacked at 390.
- [ ] 390 px: no overlap, no vertical labels, no absolute labels over text, no horizontal scroll.
- [ ] Effects: only up / wipe / parallax. None in the hero, table or forms. Hero parallax 8 % and strip 10 % measured ≥ 6 px. Reduced motion and `?sp-static` are static (the frame line is drawn, no sheen).
- [ ] ≥ 320 English words, ≥ 3 narrative paragraphs ≥ 20 words. Numbers match §14.
- [ ] Newsletter slot in home §10 and the footer, not in the first screen. Exactly one top menu.
- [ ] First-screen saturated share 6–10 % (cap 15 %).

## 16. Similarity table (target ≈ 80 %, values from `reference-tokens.md`)
| Dimension | Reference value (token) | Fuchi Glazing |
|---|---|---|
| Ground / band / text | #FFFFFF / #F6F6F6–#F9F9F9 / #000000 `tok(a)` | #FFFFFF / #F6F7F7 / #1A1C1E |
| Accent and its uses | #0084B9: current nav block, links, outline buttons, pager `tok(a)` | #0078A8 (−5 % L), the same uses only |
| Dark hero panel | AGC navy #001F6B, ~45 % wide, slanted edge | slate #3B4044 (plan palette + saturation cap), 52 → 40 %, same slant angle ≈ 17° |
| First-screen saturation | YKK inner 1.4–4 %, campaign 22.8 %, AGC 34 % | 6–10 %, cap 15 % |
| Type | Noto Sans JP; H2 24/30/400; H3 20/25/400; nav 16; button 14 `tok(b)` | Onest / DM Sans + Noto Sans TC / JP; H2 28/1.3/400; H3 20/500; nav 16; button 14 |
| H2 decoration | centred, light, 24 × 2 black bar `tok(f)` | identical (bar #1A1C1E) |
| Container / grid | 1208 content, 116 gutter; 4 × 272 + 3 × 40 `tok(c)` | identical |
| Header | utility row + 44 px nav row, current block, 158 × 32 outline button `tok(c)(d)` | 88 + 46 px rows, current block 46 px, outline box 36 px tall with 16 px circle arrow |
| Section rhythm | 64–96 px | 88 px (mobile 56) |
| Radius / shadow | 0 everywhere (search pill only); no shadows `tok(d)` | 0 everywhere; no shadows; no search pill |
| Imagery | high-key daylight panes, frames, facades; 1:1 catalogue squares; 4.67:1 strips; no masks `tok(e)` | high-key daylight photos of panes, frames, shopfronts; 1:1 squares; 4.67:1 strip; no masks; 0 cut-outs |
| Hero photo placement | AGC: one photo beside the slanted panel, inset 15 px `tok(e)` | identical placement + frame line + caption plate |
| Decoration | square pager 10 × 10 / 20 px; breadcrumb chevrons; ledger rows with 130 px date column `tok(f)` | static 3-square pager key; breadcrumb row; S1 ledger with 130 px label column |
| Motion | slide 500 ms ease-out-cubic; hovers 0.2 s `cubic-bezier(0.215,0.61,0.355,1)`; header collapse `tok(g)` | frame draw 700 ms + sheen 1200 ms in the same easing; hovers 0.2 s same; sticky nav row; reveal--up 0.5 s / 24 px same easing; wipe 0.7 s; parallax 8 % / 10 % |
