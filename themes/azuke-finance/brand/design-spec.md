# Azuke Finance: design spec (stage 1, binding for implementation)

Slug `azuke-finance`, small-supplier invoice factoring, **type: landing** (one long conversion page with an anchor menu and one repeated CTA "Apply"; plus inner pages, early-access/newsletter, privacy, terms, thanks). Five languages: en, zh-TW, ja, fr, de.
References (measurements in `reference-tokens.md`, screenshots in `brand/ref/`):
- **Main: Coral Capital — https://coralcap.co/** (S5-Style #11295). Key visual, section system, type scale, palette relationship, motion.
- **Secondary: ALEX Accounting Office — https://alex-group.co.jp/** (S5-Style #12145). Only the flat overlay box on a full-bleed candid photo, and its slide-up timing.
Borrow structure, technique, numbers and colour relationships. Never their photos, copy, logo or full page layout.

Fixed brand facts (every page, all five languages; brand.md must use exactly these): **Azuke Finance B.V.** ("azuke" = to entrust/hand over for safekeeping), founded **2019**, office **Haringvliet 92, 3011 TG Rotterdam, Netherlands** (fictional office), hours **Mon–Fri 8:30–17:30 CET**, phone **+31 10 555 0192**, apply@azuke.example / hello@azuke.example. Currency **EUR** in every language; no converted amounts.

---

## 1. Signature techniques (three, all obvious at a glance)

### T1. Oversized tight headline over a bowed documentary mosaic (Coral first screen)
- **Reference (coralcap.co, coral-first.png):** pale `#F9F8F4` page, header only, a lot of empty space, then at y≈290 one 72px headline "We Are The *Ecosystem* VC" set very tight (ls −0.06em, lh .91, weight 400, Title Case) top-left with ONE word in coral `#FF6D48`. From y≈500 a wall of documentary photos in warm monochrome: large tile 603×431 at x=471, a second tile 341 wide beside it bleeding off the right edge; the left third under the headline is empty. The mosaic's top and bottom edges are **bowed** (the top edge falls ~55px from left to right like a cylinder seen at an angle). Radius 0, no shadows.
- **Azuke home `az-hero` (first screen):** same composition, scene translated (see Key visual concept). H1 Onest 400 `4.5rem`/0.91, ls −0.05em, `#333333`, max-width 900px, at x=34, top y≈290 at 1440×900; accent word in `#FF6D48`. Mosaic wrapper starts x = 32.7vw (471/1440), top = 55.5vh (≈500px), runs to and past the right edge.
  - Tile geometry (vw so it scales; values at 1440): row 1 — **H01 large** 41.9vw × (1.4:1) = 603×431; gap 0.7vw (10px); **H02 portrait** 23.7vw × 0.85 = 341×401, top offset +55px (follows the bow), bleeding off the right edge by ~0–15px. Row 2 (below the fold, y≈941) — **H03, H04, H05 small** 20.6vw × (1.4:1) = 297×212 each at x=471 / 778 / 1085, gap 10px, the third bleeding right.
  - Bow: CSS `mask-image` (SVG data URI, `preserveAspectRatio="none"`, `mask-size:100% 100%`) on the inner layer `.az-mosaic__bow`; path `M0,0 C35,3 70,8 100,9 L100,93 C70,92 35,95 0,100 Z` (viewBox 0 0 100 100) → top edge drops ≈9% (≈58px) left→right, bottom edge rises in the middle. The mask is NOT on the `.sp-parallax` container (observed element) — only on the layer.
  - Left-bottom empty third (x=34–420, y≈560–780) holds the only extra: lede 0.9375rem/1.6 Inter Tight (≈40 words, max 360px), the **Apply pill** (T3 language: `#333` fill, radius 9999px, 40px circle arrow chip attached right), and a 0.8125rem caption "Invoices €1,000–€150,000 · 90% paid the next working day". Nothing else: no table, no form, no badges.
- **Must not be diluted:** headline ≥4.25rem on desktop and tight (ls ≤ −0.04em, lh ≤ 0.95); exactly one accent word in `#FF6D48` (not sage, not grey); mosaic starts right of the left third and bleeds off the right edge; the bow is visible (≥40px drop on top edge at 1440); photos share the monochrome grade; radius 0.
- Inner pages (T1 small): every inner page head = page title Onest 400 `4.25rem`/0.95, ls −0.05em with one accent word, at x=34 under ≥120px space; below it a **bowed strip** of 2 tiles (1.4:1, 41.9vw + 20.6vw, starting x=32.7vw, bleeding right, same mask with half amplitude). Images per page in §6.

### T2. Sticky chapter panel + scrolling chapter column (Coral "Capital / Talent / Insights")
- **Reference (coral-part1/2.png):** left panel 600px (41.6vw) sand `#DBD3C7` full height, `position:sticky; top:0`, with a 3-item chapter list bottom-left (13px, items 27px apart, 6px dark dot at the active one). Right column from x=741, width ≈656: tiny coral numeral "01" (12px Inter) with a 16px coral underline, centred above a **96px** title (ls −0.04em); a full-width 1px hairline; a 16px/600 label; a giant numeral (~64px, "60B+"); then a ~340px text column and, at the right end, a stack of touching photos 228×163. Each chapter is ≥110vh.
- **Azuke home `az-chapters` (#how), "How one invoice is funded":** panel 41.6vw, ground `#D6DBD6` (sage tint, §2), sticky top 0, height 100vh, flush left (no padding to the viewport edge). Chapter list bottom-left at left 24px / bottom 48px: "The invoice · The advance · The settle" Inter Tight 0.8125rem 500, 27px line pitch, active dot 6px `#333`; list items are anchor links to the chapters; the dot follows progress with CSS only: each chapter wrapper carries `sp-reveal` and the panel uses `:has()` (e.g. `.az-chapters:has(.az-ch-2.sp-in) .az-list li:nth-child(2)` gets the dot and earlier items lose it); without `:has()` support the dot stays on item 1. No custom scroll listener.
  - Right column from 51.5vw (741px), width 45.5vw (656px). Per chapter (min-height 110vh, padding 64px top / 120px bottom): numeral `01` Inter Tight 0.75rem 600 `#FF6D48` + 16×1px `#FF6D48` underline, centred over the title; title Onest 400 **6rem**/1.3, ls −0.04em, centred; 1px hairline `rgba(51,51,51,.2)` full column width 120px below; label Inter Tight 1rem 600; **giant figure** Onest 400 **4rem**/1 (64px); then a 2-col row: text 340px (2 paragraphs, 0.9375rem/1.6) | gap 70px | **thumb stack** 228px wide: two tiles 228×163 touching (2px gap). (Coral shows 3 tiles; we use 2 per chapter to stay inside the 18-image budget — the stack still reads as a stack.)
  - Chapters: 01 **The invoice** — figure "30 days"; thumbs H07, H08. 02 **The advance** — figure "90%"; thumbs H09, H10. 03 **The settle** — figure "1.4%"; thumbs H11, H12. (Texts in §5.)
- **Must not be diluted:** panel is a flat colour field with no photo and no text except the list; it must stay sticky while the three chapters scroll past (parent `overflow:clip`, never `hidden`); titles 6rem on desktop; numerals coral; thumbs touching, radius 0.
- Mobile (<782px): panel becomes a 12px-high `#D6DBD6` rule above each chapter (not sticky, list hidden); chapter column full width; title 3rem; text then thumbs side by side (2 × 50%).

### T3. Fixed dark vertical "Apply" tab = the single repeated CTA (Coral "FEATURED" tab)
- **Reference (coral-first.png):** fixed at the right edge, x=1353–1413 (60×330px, top ≈285px), fill `#312C29`, radius 8px, rotated label "FEATURED" 16px/600 ls .05em light `#EDE6DD`, a 32px circular "+" chip (1px rgba(237,230,221,.2)) at the top. Visible on every screen while scrolling.
- **Azuke:** `a.az-tab` fixed, right 27px, top 31.7vh, 60×330, fill `#2E322F`, radius 8px, label "Apply · 3 min" (writing-mode vertical-rl, Inter Tight 1rem 600, ls .05em, `#EDE6DD`), "+" chip 32px at top; hover: chip rotates 90° in .5s `cubic-bezier(.17,.19,.35,1)` (token g, modal items) and fills `#FF6D48`. Links to `/apply/`. Present on Home and every inner page **at ≥1024px**, hidden on /apply/ and /thanks/. Below 1024px it is **not shown** (no vertical label on phones); the header's "Apply" pill is the CTA instead.
- The same CTA wording "Apply · 3 min" / "Apply in 3 minutes" is the only CTA on the site (hero pill, end of each chapter as text link, pricing foot, `az-apply` band, header pill). No second CTA (no "Book a call").
- **Must not be diluted:** dark (not sage, not coral), vertical, radius 8, 60px wide, fixed (not sticky inside a section).

### Supporting (ALEX, not counted as a signature): flat overlay box on a full-bleed candid photo
- **Reference (alex-first.png):** full-bleed office photo from x=72; navy box 746×323 flush to the viewport's left edge overlapping the photo bottom-left, a script tagline ~56px and a 2-line statement; slide-up 40px .7s `cubic-bezier(.16,1,.3,1)`.
- **Azuke `az-gap`:** H06 full-bleed (inset left 5vw = 72/1440, 16:9, max-height 92vh), box `#2E322F` 51.8vw × 323px (746/1440) flush left, bottom 0 overlapping the photo; inside: tagline Onest 300 2.75rem `#EDE6DD` (no script font — sans direction) and a 2-line statement Inter Tight 1.25rem/1.9 `#EDE6DD`. Box: `sp-reveal sp-reveal--up`. Photo: `sp-parallax`.

### Continuation to inner pages (≥4 required — here 8)
| Page | T1 head + bowed strip | T2 sticky panel | T3 Apply tab | ALEX box |
|---|---|---|---|---|
| How it works | yes (H05 + H09) | yes — 4 chapters: Apply / Upload / We confirm / Paid | yes | — |
| Pricing | yes (H11 + H03) | — (full-width fee table, §4) | yes | box on H13 "No monthly fee. No minimum." |
| Who it's for | yes (H02 + H04) | yes — 3 chapters: Makers / Wholesalers / Service firms | yes | — |
| Stories (index + single posts) | yes (H12 + H04 strip on index) | single post: sticky panel with "Business · Terms · Invoice" facts list | yes | — |
| About | yes (A1 + H06) | yes — Founded 2019 / The team / How we decide | yes | — |
| FAQ | yes (H08 + H12) | yes — panel lists 4 categories, column holds the questions | yes | — |
| Apply | yes (H01 + H07) | — | hidden | — |
| Contact | yes (A2 + H03) | — | yes | box with address/hours on full-bleed H13 |
| Early access, Privacy, Terms, Thanks | headline only (no strip) | Privacy/Terms: sticky panel lists sections | yes (not on Thanks) | — |

---

## 2. Colour (reference = Coral; relationships kept, two hues moved to the row palette Fukagawa grey)

| Role | Coral (token a) | Azuke | Change / reason | Share |
|---|---|---|---|---|
| Base | `#F9F8F4` | **`#F9F8F4`** | exact | ~70% |
| Soft panel | `#DBD3C7` sand | **`#D6DBD6`** | same lightness (L≈84%), hue moved to the row palette Fukagawa grey `#5E6E68` family; keeping sand would make the page beige-led (common.md) and a Coral twin | ~10% |
| Ink | `#333333` | **`#333333`** | exact | text |
| Dark (tab, apply band, footer, overlay box) | `#312C29` | **`#2E322F`** | same lightness, warm brown neutralised toward sage | ~6% |
| Light on dark | `#EDE6DD` | **`#EDE6DD`** | exact | text on dark only |
| Accent | `#FF6D48` | **`#FF6D48`** | exact; H1 accent word, numerals 01/02/03 + underlines, story tag dot, tab chip hover | <2% |
| Main (row) | — | **`#5E6E68`** Fukagawa grey | brand colour: hairlines on dark, caption/label text, chapter-list text, link underline, pill hover fill | ≤4% |
| Hairline | rgba(51,51,51,.2) | same | exact | — |
| Muted text | — | `#5E6E68` | = main (contrast on base 5.3:1) | — |

- Buttons: `#333` fill + `#F9F8F4` text (Coral READ MORE); hover fill `#5E6E68` 2s `cubic-bezier(.19,1,.22,1)` (token g hover bg).
- Coral accent on base is 2.7:1 → used only for ≥0.75rem 600 numerals and the 4.5rem word, never body text.
- **First-screen saturation:** Coral measured 0% (its coral word is below the sample's rounding), ALEX 23%. Ours has only the accent word + monochrome photos ⇒ expected ≈1%. Gate for `check-first-screen.py`: **`--max 15`**, target ≤3%. Nothing saturated larger than the H1 word in the first screen.

## 3. Type (font_direction **sans**)

- Latin display: **Onest** (OFL, variable 300–600 used). Latin body/UI: **Inter Tight** (OFL, 400/500/600). No serif anywhere.
- CJK: **Noto Sans TC** (zh-TW) and **Noto Sans JP** (ja), sans-serif (gothic) for headings and body; never Noto Serif.
- Stacks (theme.json fontFamilies):
  - display: `"Onest", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`
  - body: `"Inter Tight", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`
  - `:lang(zh-TW)` → `"Onest"/"Inter Tight", "Noto Sans TC", sans-serif`; `:lang(ja)` → `…, "Noto Sans JP", sans-serif`.
- All faces loaded via **theme.json `fontFace`** (woff2 in `assets/fonts/`), including the zh-TW and ja subset files (use the Hokuto/Hada subset method — the repo subset script is broken). Because style.css uses `:lang(`, copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it. Editor = front end (check-editor-fonts.mjs).
- Sizes (theme.json fontSizes; token b):
| Preset | Size | Use | Coral token |
|---|---|---|---|
| small | 0.8125rem | captions, chapter list, meta | 12–13px |
| base | 0.9375rem / lh 1.6 | body | 14px/21px (+1px for sans legibility) |
| medium | 1.125rem | lede on dark, FAQ questions | — |
| large | 1.75rem / 1.35 | intro statements | — |
| x-large | 4rem / 1 | giant figures (chapters, pricing example) | ~64px numerals |
| xx-large | **4.5rem** / 0.91, ls −0.05em, 400 | H1; inner page titles 4.25rem/0.95 | H1 72px/.91, −0.06em |
| huge | **6rem** / 1.3, ls −0.04em, 400 | section/chapter titles | H2 96px/124.8, −0.04em |
Max = 6rem (≥4.25rem rule met). Letter-spacing on H1 is −0.05em instead of −0.06em: Onest's sans counters collide at −0.06em (±1% of em, same visual tightness).
- Responsive: H1 `clamp(2.75rem, 1.4rem + 4.3vw, 4.5rem)`; huge `clamp(3rem, 1.2rem + 5.6vw, 6rem)`; x-large `clamp(2.75rem, 2rem + 2.4vw, 4rem)`.
- CJK: headings ≈0.75× the English size (H1 3.4rem, huge 4.5rem), letter-spacing 0 (never negative on CJK), body 1rem lh 1.85. fr/de `hyphens:auto`; the de H1 may run 3 lines.
- Labels/nav: Inter Tight 0.875rem 500 (Coral nav 15px Inter).

## 4. Home page (landing-longform, anchors)

### Header (nav: centered, one top menu)
Height 88px, transparent on `#F9F8F4`, padding 30px sides (token c). Left: wordmark "Azuke" Onest 500 1.5rem + small accent square 8px `#FF6D48` before it (no logo copy). Centre: anchor menu "The gap · How it works · Fees · Stories · FAQ" (→ `#gap #how #pricing #stories #faq`; on inner pages `/#…`), Inter Tight 0.875rem 500, gap 48px. Right: language pill (radius 9999, 1px hairline, "EN" 0.8125rem — Coral EN pill) + "Apply" pill (`#333` fill). Under 960px: wordmark + Apply pill + two-line menu icon opening a full-screen `#F9F8F4` overlay with the anchors and inner pages (items .5s `cubic-bezier(.17,.19,.35,1)`).
Footer (dark `#2E322F`, light text): wordmark, address/hours/phone, a links row to all inner pages (How it works, Pricing, Who it's for, Stories, About, FAQ, Contact, Early access, Privacy, Terms), language switch, "© 2026 Azuke Finance B.V.". Not a second menu: plain text links in the footer.

### First screen (1440×900) — see T1 and Key visual concept
Header; H1 two lines top-left ("Paid *Today* For / Last Week's Invoice" — accent = Today, en; other languages localise, one accent word each); left-bottom lede + Apply pill + caption; mosaic H01 (large) and H02 (portrait) from x=471, y≈500, bowed, bleeding off the bottom and right; Apply tab fixed at right. Forbidden: table, form, search, centred giant word, coloured fields, badges/logos.
Mobile 390×844: header 64px; H1 2.75rem left, 3 lines max; lede + Apply pill; mosaic below at y≈470: H01 at 78vw width (1.4:1) from x=16, H02 at 40vw bleeding off the right (top +24px), bow amplitude 5%. No vertical text, no absolutely-positioned labels, no tab.

### Block order
| # | Block (anchor) | Purpose | Layout and photos | Copy |
|---|---|---|---|---|
| 1 | `az-hero` (#top) | promise + entry | **T1**: H1, lede, Apply pill; bowed mosaic H01, H02 (row 1) and H03, H04, H05 (row 2); `sp-parallax` on the mosaic | H1 6 words, lede 40 words |
| 2 | `az-gap` (#gap) | the problem, one calm account of a late payment | ALEX box on full-bleed **H06** (parallax). Tagline "The sale is done." / statement "The cash is thirty days away — and the next order needs materials today." Below the photo, 2 columns at 1440: left 34px label "The cash gap" (small, `#5E6E68`), right column from x=741 two narrative paragraphs (Maren's morning: delivery signed Monday, invoice €8,600 due in 45 days, rolls of board to pay for Friday) | 130 words |
| 3 | `az-chapters` (#how) | how one invoice is funded | **T2**: 3 chapters (01 The invoice "30 days", 02 The advance "90%", 03 The settle "1.4%") with thumbs H07+H08, H09+H10, H11+H12; each ends with text link "Apply in 3 minutes →" | 3 × 80 words |
| 4 | `az-pricing` (#pricing) | fees in one table | Left: section title huge "Fees" + 1 sentence (x=34); then **full-width fee table** (7 rows, §7) across the content width (34px to 34px, at 1440 = 1372px; must sit left of the tab: max right edge = viewport − 100px), hairline rows, item 1.125rem left, note 0.875rem `#5E6E68` middle, price Onest 1.75rem **right-aligned, `white-space:nowrap`**, price column min-width 14rem. Under it the worked example on `#D6DBD6` panel (full content width, padding 48px): four giant figures in a row "€12,400 invoice → €11,160 next day → €173.60 fee → €1,066.40 when paid" (x-large 4rem, wraps 2×2 under 1100px, stacked on phones) | 60 words + table |
| 5 | `az-stories` (#stories) | proof by example (3 suppliers) | Coral Portfolio layout: huge title "Stories" left, 2-line intro right column (x=741); 3 columns of cards (gap 24px): photo **P1, P2, P3** 1.4:1 radius 0, tag pill (radius 9999, 1px hairline, dot 6px `#FF6D48`) "Packaging · 45-day terms", name/business Onest 1.375rem, one-sentence outcome, link to the story post. Cards `sp-reveal--up` under `sp-stagger` | 3 × 40 words |
| 6 | `az-faq` (#faq) | objections | 2 columns: left 41.6vw label + huge "Questions" title; right column (x=741) 6 `details` rows with hairlines (question 1.125rem 500, answer 0.9375rem), "+" chip 32px rotates 45° open. No reveal on the answers. Link "All questions →" /faq/ | 6 × 45 words |
| 7 | `az-apply` (#apply) | the single CTA, repeated | Dark band `#2E322F` full bleed, padding 160px/120px (token c next-section 160): left half huge title light "Send one invoice. *See the offer.*" (accent on the second phrase's first word only), 3 short lines of what to prepare (company number, IBAN, one invoice with its delivery note), large Apply pill (light `#EDE6DD` fill, ink text) + phone + hours; right: **H13** at 1.4:1 (603×431), radius 0, bleeding to the right edge | 60 words |
Footer follows.

English home ≥ 250 words (target ~700) with narrative paragraphs in #2, #3 (×3) and #7. CJK home ≥ 500 characters.
Home image positions: H01–H05 (5) + H06 + H07–H12 (6) + P1–P3 (3) + H13 = **16** (≥8). No repeats.

### Comparison with recent themes
| # | Kama Cookware | Susugi Wash | Mame Coffee | Kyugo Training | **Azuke Finance** |
|---|---|---|---|---|---|
| 1 | diagonal staircase product slabs | 50/50 split photo/panel | framed window + giant wordmark | side-rail framed photo + colour wash | **pale page, tight headline top-left, bowed photo mosaic bleeding right** |
| 2 | sticky 50% picture + masked scene swap | bracket CTA + round arrow | rule-column lot cards | stacked-paper card stack | **full-bleed photo + flush-left dark overlay box** |
| 3 | black 3:4 gallery band | staggered bottom-bleed photo row | wide photo + rotated side label | course/fee rows | **sticky flat colour panel + scrolling chapter column with giant figures & touching thumbs** |
| 4 | info bar | spec rows | people/stories cards | stat band | **full-width fee table + 4-figure worked example panel** |
| 5 | wordmark marquee | repeated CTA ×3 | hairline info rows | group-booking steps | **story cards with pill tags** |
| 6 | — | — | — | — | **FAQ details** |
| 7 | — | — | — | — | **dark apply band with photo bleeding right** |
Why not alike: no framed hero, no split hero, no staircase, no card stack, no marquee, no rotated side label inside a section. Kama's sticky element is a *photo* that swaps scenes; ours is a flat colour panel holding only a chapter list while text chapters with giant figures scroll — different shape and content. The only fixed vertical element is the Coral-style Apply tab, which no recent theme has. Nothing reuses Kyugo's corner colour wash or Mame's giant wordmark.

---

## 5. Key visual concept

**(1) Reference first screen (Coral Capital, https://coralcap.co/).** A pale, almost empty page; one huge, tight headline "We Are The *Ecosystem* VC" with the single coral word; under it, a wall of documentary photographs — founders talking at tables, a speaker on stage — all in one warm monochrome, arranged as a mosaic that starts a third of the way in, bleeds off the right edge and bends like a curved wall. Story: *"we are a network of real people at work, not just a fund."* Signature motion: the photo wall scrolls at its own pace (Lenis/gsap smooth scroll), section titles rise letter by letter (140%→0, 1s, .04s stagger) and soft mask-wipe in; a dark "FEATURED" tab stays fixed on the right edge.

**(2) Our translation (same composition, same motion idea, same image type: documentary photos, one monochrome grade).** The same pale page and tight headline; the photo wall becomes *the supplier's side of a late payment*: an owner at a packing bench comparing an invoice with its delivery note, a courier taking parcels at the workshop door, a wall calendar with a date circled thirty days out, shelves of packed orders, hands ticking a delivery note. Story: *"the sale is done and delivered; the cash is thirty days away — one invoice closes the gap."* The headline promises the result ("Paid Today For Last Week's Invoice"); the wall shows the real work that earned it. Motion: the bowed wall drifts slower than the page (sp-parallax), section titles below mask-wipe in, content rises in stagger, and the dark "Apply · 3 min" tab is fixed on the right edge exactly where Coral's tab sits.

**(3) KV checklist (first screen 1440×900; all six visible without scrolling)**
| # | Reference element | Our version | Position | Motion | Image used |
|---|---|---|---|---|---|
| 1 | 72px tight H1, one coral word | Onest 400 4.5rem/0.91 ls −0.05em "Paid *Today* For / Last Week's Invoice", "Today" `#FF6D48` | top-left x=34, y≈290, max-w 900 | none (first screen visible immediately; letter-rise idea moves to the section titles as mask wipe) | — |
| 2 | Documentary photo mosaic, 1.4:1 large tile + portrait, bleeding right | H01 large 603×431 at x=471,y=500; H02 portrait 341×401 at x=1084, y=555 bleeding right; row 2 H03–H05 below the fold | right two-thirds, from y≈500 to the bottom edge | `sp-parallax` `--sp-par:8%` on the mosaic (layer moves slower than the text) | H01, H02 (+H03, H04, H05 in row 2) |
| 3 | Bowed edges of the photo wall | SVG mask on `.az-mosaic__bow`: top edge drops ≈58px left→right, bottom edge bowed | top edge of the mosaic, visible at y=500–558 | moves with the layer | H01, H02 |
| 4 | Warm monochrome photo grade baked in | one sage-grey monochrome grade baked into every file (STYLE §6), no CSS filter | all tiles | none | all |
| 5 | Fixed dark vertical "FEATURED" tab with "+" chip | fixed "Apply · 3 min" tab 60×330, `#2E322F`, radius 8, "+" chip | right 27px, top 31.7vh (≈285px), ≥1024px | chip rotates 90° + fills coral on hover, .5s | — |
| 6 | Quiet header: right-side nav + 9999px "EN" pill (hairline border) | centred anchor nav + "EN" language pill + dark "Apply" pill (same pill shape) | header, y=0–88 | none | — |
(stage-a #6 "01 numeral under the mosaic" is below the fold at 1440×900, so the in-view header pill replaces it here; the 01/02/03 numeral system stays in T2.)

---

## 6. Photos (18, Grok, one at a time, read each one)

**Imagery: photo** (stage-a IMAGERY: photo — Coral and ALEX are both photography-led). Documentary, people mid-task, tight real-room crops; Coral's baked-in monochrome becomes a sage-grey monochrome.

STYLE (exact string on every prompt, `IMAGE_STYLE="<STYLE>" scripts/grok-image.sh out.webp "<subject>"`):
`documentary photograph, 35mm lens, soft natural daylight, high-key and airy, real small workshop and office interiors in a modern international city, candid moment of people mid-task, tight unposed crop, fully monochrome image toned neutral grey with a faint sage-green cast (deep green-grey shadows, soft off-white highlights), fine film grain, no colour other than the grey-green tone, diverse adults, paper documents with blurred illegible lines only, no readable text, no numbers, no logos, no brand marks, no signage, no Japanese elements`

Reject and regenerate: any readable text/numbers on invoices or calendars, logos on boxes/clothes, colour leaking (not monochrome), broken hands, warped faces. ≤300 KB, ≤2000px, webp. No cut-outs. readme.txt one line per file (AI-generated, CC0).

| ID | Subject / composition | Ratio | Pages (each at most once per page) |
|---|---|---|---|
| **H01** ★ | owner (woman, 40s) at a wooden packing bench, holding an invoice in one hand and a delivery note in the other, comparing them; parcels and tape behind; medium-wide | 1.4:1 | Home hero large; Apply strip |
| **H02** ★ | courier (man) taking a stack of parcels from a worker at an open workshop door, side light | 0.85 | Home hero portrait; Who it's for strip |
| **H03** ★ | wall calendar beside a pinboard, one date circled with a pen, a hand pointing at it (no readable numbers) | 1.4:1 | Home hero row 2; Pricing strip; Contact strip |
| **H04** ★ | metal shelves of packed brown parcels ready to ship, a person scanning one in the aisle | 1.4:1 | Home hero row 2; Who it's for strip; Stories strip |
| **H05** ★ | close-up of hands ticking lines on a delivery note laid next to an invoice on the bench | 1.4:1 | Home hero row 2; How it works strip |
| **H06** ★ | small office corner after hours, owner seated at a desk with a laptop and a short stack of paper, looking out of the window, calm | 16:9 | Home gap (full-bleed, parallax); About strip |
| **H07** ★ | invoice being folded into a plain envelope at a desk, printer beside | 1.4:1 | Home ch.01; Apply strip |
| **H08** ★ | receiving dock of a customer: a warehouse clerk signing a delivery note on a clipboard while the supplier watches | 1.4:1 | Home ch.01; FAQ strip |
| **H09** ★ | Azuke underwriter (Priya, 30s) on a phone call at a bright desk with a notebook, mid-sentence | 1.4:1 | Home ch.02; How it works strip |
| **H10** ★ | owner at the bench glancing at a phone (screen not visible), relieved half-smile, parcels behind | 1.4:1 | Home ch.02; How it works body |
| **H11** ★ | delivery of raw materials: two people rolling big reels of cardboard into the workshop | 1.4:1 | Home ch.03; Pricing strip |
| **H12** ★ | worker handing a packed order across a counter to a customer, both smiling, everyday | 1.4:1 | Home ch.03; FAQ strip; Stories strip |
| **H13** ★ | end of day: workshop with lights low, a row of packed orders on the bench, owner switching off a lamp | 1.4:1 | Home apply band; Contact ALEX box; Pricing ALEX box |
| **P1** ★ | Maren Holt (woman, 50s) in her paper-goods workshop beside stacked board, arms folded, candid | 1.4:1 | Home story card; Stories card; story post 1 |
| **P2** ★ | Felipe Duarte (man, 30s) in a wholesale bakery loading trays onto a rack | 1.4:1 | Home story card; Stories card; story post 2 |
| **P3** ★ | Sun-hee Park (woman, 40s) at a textile print table pulling a screen, apron | 1.4:1 | Home story card; Stories card; story post 3; Who it's for body |
| **A1** | founders Ines Vercauteren and Tomás Aldana talking across a meeting table with paper files, mid-conversation | 1.4:1 | About strip; Early access |
| **A2** | Azuke office: Jonas Weber and Amara Okoye at neighbouring desks, one on headset, plants, window | 1.4:1 | Contact strip; About body |
★ = used on Home (16).

Per-page check (no repeats on a page):
- Home: H01 H02 H03 H04 H05 · H06 · H07 H08 · H09 H10 · H11 H12 · P1 P2 P3 · H13.
- How it works: H05 H09 (strip) · H10 (body). Pricing: H11 H03 (strip) · H13 (box). Who it's for: H02 H04 (strip) · P3 (body). Stories index: H12 H04 (strip) · cards P1 P2 P3; single posts: P1 / P2 / P3 featured (one each). About: A1 H06 (strip) · A2 (body). FAQ: H08 H12. Apply: H01 H07. Contact: A2 H03 (strip) · H13 (box). Early access: A1. Privacy/Terms/Thanks: none.

---

## 7. Fixed numbers (identical on Home, inner pages, footer, all five languages)

**Fees (pricing table, 7 rows; same order everywhere):**
| Item | Note | Price |
|---|---|---|
| Account and application | no setup, no monthly fee, no minimum volume | €0 |
| Advance | paid the next working day after approval | 90% of invoice |
| Funding fee, first 30 days | charged once, shown before you accept | 1.4% of invoice |
| Each further 15 days | if your customer pays later than 30 days | 0.7% of invoice |
| Fee cap | the most we charge on one invoice | 4.2% of invoice |
| Same-day payout | approved before 13:00 CET | €25 per invoice |
| Invoice size | per invoice, B2B customers in the EU | €1,000–€150,000 |
**Worked example:** invoice €12,400, 30-day terms → advance €11,160 (next working day) → fee €173.60 → remainder €1,066.40 paid to you when your customer pays.
**Process (4 stages; used in T2 and How it works — as chapters, never a step grid):** 1 Apply online, ~3 minutes (company number, IBAN, contact) → 2 Upload one invoice with its delivery note or signed proof → 3 We confirm the invoice with your customer by email within one working day → 4 90% paid; the remainder minus the fee when your customer pays.
**People (8):** Ines Vercauteren (co-founder, credit), Tomás Aldana (co-founder, operations), Priya Raman (underwriting lead), Jonas Weber (supplier relations), Amara Okoye (customer support) — staff; customers Maren Holt (Holt Paper Goods, packaging, Antwerp), Felipe Duarte (Duarte Bakehouse, wholesale bakery, Lyon), Sun-hee Park (Park Print Studio, textile printing, Cologne).
**Stories (3, posts):** 1 Maren — €8,600 invoice to a retail chain, 45-day terms, paid for board reels the same week. 2 Felipe — €3,200 invoice to a hotel group, 30-day terms, covered flour for the holiday run. 3 Sun-hee — €21,000 invoice to an event agency, 60-day terms, paid two freelancers on time. (Illustrative customers; no claims of approval rates, speed guarantees, awards or media.)
**Place/hours:** Haringvliet 92, 3011 TG Rotterdam · Mon–Fri 8:30–17:30 CET · +31 10 555 0192 · founded 2019.
Never write: "guaranteed approval", "no credit check", percentages of approval, customer counts, volume funded.

## 8. Inner pages (≥8; landing extras included)

Each = T1 small head (+bowed strip) → body → closing line "Apply in 3 minutes →". T3 tab on all except Apply/Thanks. No sidebar.
1. **How it works** `/how-it-works/` — T2 sticky panel with 4 chapters (the 4 process stages, numerals 01–04, giant figures "3 min", "1 invoice", "1 day", "90%"), H10 in chapter 4 body; a short "what your customer sees" paragraph (one confirmation email, payment details unchanged / notified assignment per brand.md).
2. **Pricing** `/pricing/` — fee table (§7, full width ≥782px, price column nowrap right, stacked on phones), worked example panel `#D6DBD6`, ALEX box on H13 "No monthly fee. No minimum." , 4 fee FAQs.
3. **Who it's for** `/who-its-for/` — T2 3 chapters: Makers / Wholesalers / Service firms with B2B invoices; eligibility list (EU-registered company, trading ≥6 months, B2B invoices €1,000–€150,000, no consumer invoices); P3 body photo.
4. **Stories** `/stories/` (posts index) + 3 single posts — index: T1 head + strip (H12, H04) + 3 cards; single: featured photo 1.4:1 full column, sticky panel facts (business, city, invoice, terms), 300–400 words each.
5. **About** `/about/` — T2 chapters: Founded 2019 in Rotterdam / The team (5 staff named, no portrait grid — names in text rows with roles, A2 photo) / How we decide (we look at the invoice and your customer, not only your balance sheet).
6. **FAQ** `/faq/` — T2 panel lists Applying · Fees · Your customer · After funding; 16 questions as `details`.
7. **Apply** `/apply/` — T1 head "Apply in *three* minutes"; what to prepare (3 lines); a simple HTML form (company name, company number, email, phone, invoice amount) `method="get" action="/thanks/"` (demo, not on the first screen of Home), phone and email alternatives; privacy line. No reveal on the form.
8. **Contact** `/contact/` — strip A2 + H03; ALEX box on full-bleed H13 with address, hours, phone, emails.
9. **Early access** `/early-access/` (newsletter/waitlist per landing track) — "Invoice funding for suppliers in the UK and Switzerland is coming" + email signup (Jetpack/plain form, demo) + A1.
10. **Privacy** `/privacy/`, 11. **Terms** `/terms/` — sticky panel lists sections; legal text, no reveal.
12. **Thanks** `/thanks/` — headline "Thank you. *We'll* reply within one working day." + back link.
≥9 reachable pages from the header anchors + footer links.

## 9. Scroll effects (sp-scroll; max 3 kinds per page; none on hero content)

| Effect | sp class | Where | Source (trigger / time / easing) | Our values |
|---|---|---|---|---|
| E1 Title mask wipe | `sp-reveal sp-reveal--mask` | the 6rem titles: chapter titles, "Fees", "Stories", "Questions", apply-band title; inner page section titles (not the page H1) | Coral soft mask-position wipe on big titles, IO is-inview, 1.5–2.2s `cubic-bezier(.23,.14,0,.98)` | `--sp-dur:1.6s`, easing `cubic-bezier(.23,.14,0,.98)` |
| E2 Rise + stagger | `sp-reveal sp-reveal--up`, parent `sp-stagger` | chapter label+figure+text+thumb stack (each a child), ALEX box, story cards, worked-example figures, FAQ title block | Coral fade-in stagger 55px→0; ALEX slide-up 40px .7s `cubic-bezier(.16,1,.3,1)`, IO threshold .15, once | `--sp-dist:24px` (≤30 rule), `--sp-dur:.9s`, easing `cubic-bezier(.16,1,.3,1)`, stagger .12s (sp default) |
| E3 Parallax | `sp-parallax` (+ `.sp-parallax__layer`) | (a) hero mosaic: container `.az-mosaic.sp-parallax`, layer `.az-mosaic__bow.sp-parallax__layer` (masked grid of H01–H05); foreground = H1/lede/pill, outside the layer. (b) `az-gap`: Cover with H06 background, foreground = ALEX box (not in the layer) | Coral photo wall scrolling at its own pace (Lenis/gsap) | (a) `--sp-par:8%` desktop, `6%` <782px; (b) `--sp-par:10%` desktop, `6%` phones |
Not used: sp-count, sp-marquee, wipe, zoom. Not on: hero H1/lede, pricing table, forms, legal text, FAQ answers. Sticky panel = plain CSS sticky. Parallax and reveal fall back to final state with reduced-motion, `?sp-static`, no JS, editor. Must pass `check-parallax.mjs` (≥6px desktop & phone; reduced-motion ≤1px; ≥3 reveals hidden before entry).

## 10. Responsive rules (binding)
- 390px first screen: no vertical text, no absolutely positioned labels over text, no tab; H1 ≤3 lines; nothing overlaps (auto-gates).
- No horizontal overflow at 390/1280: mosaic and strips bleed inside a section with `overflow:clip`; `html,body{overflow-x:clip}`.
- Pricing table at ≥782px (800 and 1280): full content width, price column `white-space:nowrap; text-align:right; min-width:14rem`, nothing cut, and the table never runs under the fixed tab (content max right = viewport − 100px when the tab shows). <782px: each row stacks (item / note / price on its own line, price left-aligned, bold), `display:block` rows with a hairline between.
- Every other table (stories facts, legal) stacks on phones the same way.
- T2 sticky panel only at ≥782px; below that it becomes a rule above each chapter.

## 11. Similarity targets (≈80%) — tokens from reference-tokens.md
| Dimension | Coral (token) | Azuke |
|---|---|---|
| Base / panel / ink / dark / accent | #F9F8F4 / #DBD3C7 / #333 / #312C29 / #FF6D48 (a) | #F9F8F4 / #D6DBD6 / #333 / #2E322F / #FF6D48 |
| Colour shares | 70 / 10 / 6 / <2% (a) | 70 / 10 / 6 / <2% (+ main ≤4%) |
| First-screen saturation | 0% (a) | ≈1%, gate 15% |
| H1 | 72px/.91, 400, −0.06em, one accent word (b) | 4.5rem/.91, 400, −0.05em, one accent word |
| Section title | 96px/124.8, −0.04em (b) | 6rem/1.3, −0.04em |
| Stat numeral | ~64px (b) | 4rem |
| Body / labels | 14/21, 16px 600 labels (b) | 15/24, 1rem 600 labels |
| Page padding | 30 header / 34 content (c) | 30 / 34 |
| Split | panel 600 (41.6%), column x=741 w≈656, gutter 140 (c) | 41.6vw / 51.5vw / 45.5vw / 140px |
| Section rhythm | min-h 110vh, 64 top/60–120 bottom, next 160 (c) | same |
| Hero placement | H1 y≈290, photos y≈500, mosaic from x=471 (c,e) | same |
| Radius | 0 photos/panels; 9999 pills; tab 8 (d) | same |
| Shadows | none (d) | none |
| Photo ratio | 1.40:1 tiles 297×212 / 603×431, portrait ≈0.85 (e) | same |
| Photo treatment | baked warm monochrome, no CSS filter (e) | baked sage-grey monochrome, no CSS filter |
| Mosaic edge | bowed, ~2–3° tilt (e) | SVG bow mask ≈58px drop |
| Thumb stack | 3 × 228×163 touching (e) | 2 × 228×163 touching |
| Numerals | 12px coral + 16px coral underline, centred over title (f) | 0.75rem coral + 16px underline |
| Chapter list | 13px, 27px pitch, 6px dot, bottom-left of panel (f) | 0.8125rem, 27px, 6px dot |
| Vertical tab | fixed right, 60×330, #312C29, r8, + chip 32px (f) | fixed right 27px, 60×330, #2E322F, r8, + chip 32px |
| Hairline | 1px rgba(51,51,51,.2) (a,f) | same |
| Title motion | char rise 1s `(.17,.84,.43,.99)`; mask wipe 1.5–2.2s `(.23,.14,0,.98)` (g) | mask wipe 1.6s `(.23,.14,0,.98)` |
| Block motion | fade-in stagger 55px (g); ALEX 40px .7s `(.16,1,.3,1)` | 24px .9s `(.16,1,.3,1)`, stagger .12s |
| Photo-wall motion | page-paced scroll (Lenis) (g) | sp-parallax 8% |
| Hover | bg 2s `(.19,1,.22,1)`; menu .5s `(.17,.19,.35,1)` (g) | same |
Photos and copy are our own; no Coral/ALEX images, text or logo.

## 12. Home acceptance checklist
1. First screen 1440×900 shows all six KV items: tight 4.5rem H1 with one coral word top-left; bowed documentary mosaic (H01 large + H02 portrait) from x≈471/y≈500 bleeding right and below; visible bowed top edge; monochrome sage-grey photos; fixed dark "Apply · 3 min" tab at right; header with pills. No table/form/search/giant centred word. `check-first-screen.py --max 15` passes (expect ≈1%).
2. Left-bottom of the hero holds only lede + Apply pill + one caption.
3. Block order equals §4 (hero → gap → chapters → pricing → stories → FAQ → apply band → footer); anchors in the header scroll to each.
4. T2: left `#D6DBD6` panel stays sticky through all three chapters at 1280/1440; each chapter shows coral numeral + underline, 6rem title, hairline, giant figure, text + 2 touching thumbs.
5. T3 tab visible at ≥1024 on Home and inner pages (not Apply/Thanks); hidden on phones; one CTA wording site-wide.
6. ALEX box flush left over H06, dark `#2E322F`, light type.
7. Pricing table full width at 800 and 1280, prices nowrap right, not cut, not under the tab; stacked at 390. Numbers equal §7 (also inner Pricing, FAQ, five languages).
8. 16 image positions on Home, none repeated; all photos monochrome, no text/logos.
9. Motion: hero has no reveal; parallax on mosaic and H06 passes check-parallax (desktop+phone); titles mask-wipe; reduced-motion/`?sp-static` show final state.
10. Fonts: Onest + Inter Tight; zh-TW/ja in Noto Sans TC/JP (no Mincho), loaded via theme.json fontFace, editor = front end; max size 6rem.
11. Home ≥250 English words, ≥3 narrative paragraphs; colours as §2, no beige panel, accent <2%.
12. 390px: no overflow, no overlapping text, no vertical labels in the first screen.
