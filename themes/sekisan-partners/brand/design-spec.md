# Sekisan Partners: design spec (stage 1, binding for implementation)

Slug `sekisan-partners`, independent building cost consultancy, **landing** theme (`type: landing`, page_structure `landing-longform`). Home = one long conversion page with an anchor menu and one repeated CTA: **"Request a proposal"**. Reference (only one): **Pacific Consultants, https://www.pacific.co.jp/** (S5-Style, construction consultancy). Measurements in `reference-tokens.md` (token letters (a)–(g) below refer to it), shots in `ref/`. Borrow structure, technique, colour relationships, motion and the key-visual concept. Never copy its photos, video, copy, wordmark or logo.

Design row b17-6: archetype split-screen, hero text-left-photo-right, nav split, first_screen top-bottom-halves, main `#2F3A34` (黒緑), fonts **Albert Sans / Onest**, `font_direction: sans`, CJK **Noto Sans TC / Noto Sans JP (黑體)**, photo_direction high-key, IMAGERY **photo**.

Fixed brand facts (every page, footer and all five languages use exactly these; full list in section 11): Sekisan Partners, founded **2011**, studio at **Maaskade 41, 3071 NB Rotterdam, Netherlands** (fictional address), fees in **EUR excl. VAT** in every language.

---

## 1. Signature techniques (three, obvious at a glance; do not soften)

### T1. The 84 px solid ink rail framing every page (Pacific Consultants left rail, `ref/pc-first.png`, `pc-s0.png`, token (c)(f))
- Reference: a flat black (`#131416`) stripe 84 px wide, fixed to the left edge for the whole page: a 43 px white circle at the top (search), the language codes stacked under it with a 1 px vertical line beside them, a "Menu" icon in the middle, and at the bottom a small white square with the wordmark set vertically. The content is shifted 84 px right; everything, including the full-bleed hero, lives to the right of the rail.
- Ours: `.sk-rail`, `position: fixed; inset: 0 auto 0 0; width: 84px; background: #2F3A34; z-index: 50`, in the header template part, on **every** template. `body` gets `padding-left: 84px` at ≥ 1024 px. Contents top to bottom:
  - y = 28: 43 px circle, 1 px white border, white `↑` (links `#top`; the only round element on the site, like the reference search circle).
  - y = 108: language switcher, codes stacked one per line (`EN`, `繁`, `日`, `FR`, `DE`), Onest 500 0.75rem white, horizontal text (not rotated), 1 px white 60%-opacity vertical line 30 px tall at the left of the active code; inactive codes at 60% opacity.
  - bottom 28 px: 27 px white square, under it "Sekisan Partners" in `writing-mode: vertical-rl`, Albert Sans 500 0.875rem white, letter-spacing 0.04em (desktop only; this is chrome, not body text).
  - No link list in the rail (one top menu only; the anchor menu lives in the header, see 3).
- < 1024 px: the rail turns into a **56 px solid `#2F3A34` top bar** (sticky, full width): white 20 px square + "Sekisan Partners" Albert Sans 600 1rem white at left, the WP Navigation overlay toggle (two 24 px white lines) at right; the language switcher moves into the overlay and the footer. No vertical text below 1024 px.
- It is a decorative frame, not a content sidebar: no widgets, no links besides `↑` and languages.
- Must not be diluted: solid, flat, full height, 84 px (not 48, not a hairline), the darkest colour on the page, never semi-transparent.

### T2. Index typography: coloured two-digit numerals + huge caps titles on hairline rows, and section headings with a coloured first letter (Pacific "01 ABOUT…/02 COMPANY…" rows and "News"/"Magazine" headings, `ref/pc-s1.png`, `pc-s0.png`, `pc-s4.png`, token (b)(c)(f))
- Reference: on `#F5F5F5`, full-width rows 197 px tall divided by 1 px hairlines; at left a two-digit numeral in a condensed face coloured blue (`01`) or teal (`02`), then a huge uppercase Poppins 700 title (57.6 px / 63.4 px, ls −1.44 px). Section headings ("News", "Magazine") are 90 px Poppins 700, ls −2.25 px, with **the first letter alone in accent colour**.
- Ours, two parts that always appear together on a page:
  - **Index rows** `.sk-index`: alignfull group, ground `#F3F5F3`, inner padding-left 85 px (token (c)); each row is a link, `min-height: 197px`, `border-top: 1px solid #DDE2DE` (plus a bottom border on the last row), content vertically centred. Numeral: Albert Sans 600, 3.6rem (57.6 px), `font-variant-numeric: tabular-nums`, width 92 px, colour alternates `#004896` (odd) / `#36939C` (even). Title: Albert Sans 800, 3.6rem / 1.1 (63.4 px), letter-spacing −0.025em (−1.44/57.6), uppercase in en/fr/de, ink `#2F3A34`, gap 36 px after the numeral. Right end: a 32 px `→` in ink that moves 8 px right on hover (0.3s ease-out). In zh-TW/ja the title is 2.6rem bold, no uppercase.
  - **First-letter heading** `.sk-head`: Albert Sans 700, preset `xx-large` = 5.625rem (90 px), line-height 1.0, letter-spacing −0.025em (−2.25/90), ink, the first letter wrapped in `<span class="sk-head__first">` coloured `#36939C` (home "Gap", "Fees") or `#004896` ("People") or `#F07A73` (only the "Request" heading on the dark block). Left-aligned, never centred. In zh-TW/ja the first character is coloured the same way, size 0.75×.
- Must not be diluted: numerals must be in the two accent colours (not grey), titles must stay ≥ 3.6rem and uppercase in Latin languages, rows must be ≥ 180 px tall with visible hairlines, the coloured first letter must be visible.

### T3. Square wide button, 3 px ink border, arrow at the right; 2 px outline on photos (Pacific "MORE" / "View full movie", `ref/pc-s1.png`, `pc-s4.png`, token (d))
- Reference: radius 0, 3 px solid ink border, white fill, 71 px tall, wide (755 px in the news column), label centred in a condensed caps face, arrow `→` at the right edge 30 px in. On the hero photo the variant is a 2 px outline 259 × 41 px.
- Ours: core Button block style `is-style-sk-wide`: `border: 3px solid #2F3A34; border-radius: 0; background: #fff; color: #2F3A34; min-height: 71px; width: 100%; max-width: 755px;` label Albert Sans 600 1.125rem uppercase letter-spacing 0.04em centred; arrow `→` as `::after` absolutely at `right: 30px`. Hover: background `#2F3A34`, text white, 0.3s ease-out (token (g)). Variant `is-style-sk-outline`: 2 px border, 259 × 41 px, transparent with `rgba(255,255,255,.55)` fill, used on photos. Variant on the dark request block: white border 3 px, transparent, white text; hover white fill ink text.
- Every CTA on the site uses this button and the same label "Request a proposal" (link `/request-a-proposal/`); secondary buttons ("All fees", "Read the case") use the same shape.
- Teal category chip (supporting, token (f)): 115 × 26 px, `#36939C` ground, white Onest 500 0.8125rem, radius 0, above card titles.
- Must not be diluted: radius stays 0, border 3 px (2 px only on photos), height ≥ 64 px, arrow at the far right, not a pill, no shadow.

### Supporting (not counted, but required on home): panel sliding over a still photo + 6-dot pagination
- Reference `pc-s0.png`: the white news panel (1008 px incl. rail) scrolls over a fixed photo that stays visible to its right. Ours = home block 2 (see 3) with `sp-parallax` on the photo column.
- Six 8 px dots at the right edge (x ≈ 1404, y 394–494 at 1440 × 900, 12 px gaps), see KV item 6.

### Continuation to inner pages (each technique on ≥ 4 inner pages)
| Page | T1 rail | T2 index typography | T3 square button |
|---|---|---|---|
| About | ✔ | `.sk-head` "About"; index rows 01 Founded 2011 / 02 People / 03 The studio jump links | ✔ "Request a proposal" |
| How we estimate | ✔ | `.sk-head` "Method"; five index rows = the five stages, each opening a text section | ✔ |
| Fees & scope | ✔ | `.sk-head` "Fees"; numerals 01–07 on each fee row | ✔ + "Download scope sheet" (mailto) same shape |
| Cases | ✔ | `.sk-head` "Cases"; index rows 01–03 = the three cases | ✔ |
| Request a proposal (contact) | ✔ | `.sk-head` "Request"; index rows 01–04 = the four process steps | ✔ (mailto, 755 px) |
| Cost letter (newsletter / early access) | ✔ | `.sk-head` "Letter" | ✔ signup submit uses T3 |
| Notes (index, archive, category, tag) | ✔ | `.sk-head` "Notes"; posts listed as hairline rows like the reference news list (date left, title + excerpt right) | ✔ "More notes" |
| Single note | ✔ | category as teal chip, title 3.6rem | ✔ at end |
| Privacy / Terms / Thanks | ✔ | `.sk-head` at `x-large` 3.6rem | ✔ on Thanks |
(All pages carry T1; 9 carry T2; all carry T3.)

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
Pacific Consultants opens with one **full-bleed, backlit, desaturated steel-blue photograph** (a moving video still): a person in silhouette, arms raised, in glittering shallow sea, white light on the waves. The only UI is a white square mark with a two-line serif wordmark at top-left, the black 84 px rail on the left, a 2 px white outline button "View full movie" bottom-right, a "Scroll" label with a 1 px line bottom-centre and six small dots at the right edge. Story: **calm, human-scale expertise behind big infrastructure — "producing the future"** (one person, a vast quiet surface). Signature motion: the image is alive (slow video), then the page proceeds section by section (each about one viewport), panels sliding over a photo that stays put, the right-edge dots tracking where you are.

### (2) Our transfer scene (same composition, same motion idea, same image type)
A **building cost consultancy's site office on a bright morning**: one full-bleed, high-key documentary photograph seen slightly from above at table height — a **marked-up cost plan spread across a pale table, a hand holding a graphite pencil ticking a column of figures** (figures soft and illegible), a scale ruler laid across the sheets, a white hard hat at the right edge, daylight from a large window at the left, the left 40% of the frame an almost empty bright table and wall (our "open sea": the quiet surface the headline sits on). Same story transposed: **one person, calm and precise, behind a large building — the price is written before the work starts.** Same image type: photograph, single subject, shallow focus, cool desaturated tones (ours high-key instead of backlit). Same motion idea: the photo is "alive" through parallax (it drifts slower than the page) instead of video, and the page proceeds in long, near-viewport sections — the gap panel slides over a still construction photo (block 2), headings rise in (0.8s), dots mark the anchors.

### (3) KV checklist (all six visible on the home first screen at 1440 × 900; at 390 × 844 items 1, 2, 4 and 5 visible, item 3 becomes the top bar, item 6 hidden)
| # | 參考站元素 | 我們的對應 | 位置 | 動態 | 用哪張圖 |
|---|---|---|---|---|---|
| 1 | Full-bleed backlit sea photo with one silhouetted person (video still) | Full-bleed high-key photo: marked-up cost plan on a site-office table, hand with pencil ticking a column, scale ruler, white hard hat at the right edge; empty bright table/wall in the left 40% | whole first screen right of the rail (x 84–1440, y 0–900); focal point at 68% / 55%; mobile: top half 390 × 380 under the 56 px bar | `sp-parallax` on the Cover background, `--sp-par: 8%` (mobile 6%) | **H01** |
| 2 | White square mark + two-line serif wordmark top-left (x ≈ 124, y ≈ 36, 86 px square, 56 px type) | 64 px `#2F3A34` square + two-line wordmark "Sekisan / Partners" Albert Sans 600 2.4rem/1.0 ink | top-left, x = 125 (rail + 41 px), y = 36 | none | — |
| 3 | 84 px black left rail (search circle, languages, menu, vertical wordmark) | 84 px `#2F3A34` rail: `↑` circle, stacked language codes, white square + vertical wordmark (T1) | left edge, full height, fixed (≥ 1024 px); 56 px top bar below 1024 | none (fixed while the page scrolls) | — |
| 4 | 2 px white outline button "View full movie", 259 × 41, bottom-right | 2 px ink outline button "Request a proposal →" 259 × 41 on `rgba(255,255,255,.55)` (T3 photo variant); this is the one CTA, repeated in header, blocks 5/9 and footer | bottom-right, x 1100–1359, y 795–836; mobile: full-width 3 px T3 button under the text half | hover fill ink, 0.3s ease-out | — |
| 5 | "Scroll" label + 1 px × 46 px line, bottom-centre | "Scroll" Onest 600 0.75rem ink + 1 px × 46 px `#2F3A34` line | bottom-centre of the content area (x ≈ 762), y 830–900; mobile: under the CTA, horizontal label | line draws top-to-bottom 1.6s `cubic-bezier(0,.4,.2,1)` loop (CSS `scaleY` with `transform-origin: top`), off under reduced motion / `?sp-static` | — |
| 6 | Six 8 px dots, right edge, active dot accent blue | Six 8 px dots = anchors Gap / Estimate / Handover / Fees / Cases / Request; inactive `#B8C9BE`, active `#004896` | right edge x = 1404, y 394–494 (12 px gaps), fixed, ≥ 1024 px only | active dot via pure CSS scroll-driven `view-timeline` on each section + `timeline-scope` on body (no JS, no scroll listener); fallback: first dot active; hover 0.3s | — |
Not allowed to become "inspired by": item 1 must be a single full-bleed photograph (not a split card, not a framed inset), item 3 must be the solid rail, item 6 must exist on desktop.

Headline (inside the empty left 40% of H01, not a giant centred word): Albert Sans 700 5.625rem / 1.0, ls −0.025em, ink, three lines left-aligned "Priced / before it's / built." at x = 125, y ≈ 290–560; under it Onest 400 1.125rem / 1.7, max 34ch: "Independent cost plans for buildings, written before the first contractor is asked — so the figure you approve is the figure you build to." then a facts line Onest 500 0.875rem `#5C6660`: "Rotterdam · since 2011 · fee proposal within 2 working days". Behind the text: a left-to-right overlay `linear-gradient(90deg, rgba(255,255,255,.78) 0 34%, rgba(255,255,255,0) 52%)` on the Cover (the photo itself is already bright there).

---

## 3. Home page

### Header (all pages)
- ≥ 1024 px: rail (T1) + a transparent top bar over the content area (absolute on home, static white with a 1 px `#DDE2DE` bottom rule on inner pages). **Split nav**: left = KV item 2 mark + wordmark; right = anchor links `Gap · Estimate · Handover · Fees · Cases · People` (Onest 500 0.875rem ink, 28 px gaps, underline 1 px on hover) then the T3 outline button (2 px, 41 px tall) "Request a proposal". On inner pages the anchor links point to `/#gap` etc.
- < 1024 px: the rail's 56 px top bar; the overlay lists the same anchors, the CTA and the languages.
- Footer (all pages): ground `#2F3A34`, white text; left: mark + wordmark, address, email, hours; middle: inner page links (About, How we estimate, Fees & scope, Cases, Notes, Cost letter, Privacy, Terms); right: T3 dark variant button "Request a proposal". Bottom line Onest 0.75rem 60% white "© Sekisan Partners, Rotterdam". The rail sits on top of the footer (continuous dark at the left).

### First screen composition
- 1440 × 900: see KV. Saturated share target ≤ 8%, gate 15% (`check-first-screen.py`), row cap 30%.
- 390 × 844 (top-bottom halves): 56 px top bar; H01 photo 390 × 380 (`object-position: 70% 50%`, parallax 6%); below on white, padding 24 px: headline 2.75rem / 1.04 three lines, subline 1rem / 1.7, facts line, full-width T3 button 64 px tall. Nothing absolutely positioned over the text, no vertical labels, no dots, no rotated text.
- Forbidden on the first screen: table, form, search box, filled coloured buttons, centred giant word, cutout objects.

### Block order (anchors in brackets)
| # | Pattern | Purpose | Layout and photo | Copy |
|---|---|---|---|---|
| 1 | `sk-hero` (#top) | KV, promise, CTA | Full-bleed Cover H01 (min-height 100vh, max 960 px), parallax, headline left, outline CTA bottom-right, scroll cue, dots | 40 words |
| 2 | `sk-gap` (#gap) | the gap a cost plan closes | Reference news-panel-over-photo: two columns full-bleed; **left white panel** 1008 px incl. rail (content 924 px, padding-left 85 px) with `.sk-head` "The gap" (G in `#36939C`), a 1 px hairline, then **three hairline rows** like the reference news list: left 146 px condensed label in Albert Sans 600 1.6rem ink ("At sketch", "At tender", "On site"), right a 19.6 px bold title + 60-word paragraph; **right column** (x 1008–1440) H02 portrait photo filling the full block height, `sp-parallax --sp-par: 10%`, radius 0. Mobile: H02 4:3 on top, rows below. | 3 × 60 words (narrative 1–3) |
| 3 | `sk-index` | the page's table of contents | **T2 index rows** on `#F3F5F3`: `01 HOW ONE ESTIMATE IS WRITTEN` → #estimate, `02 WHAT YOU ARE HANDED` → #handover, `03 FEES` → #fees, `04 THREE CASES` → #cases, `05 THE PEOPLE` → #people. `sp-stagger` + `sp-reveal--up` on rows. No photo. | titles only |
| 4 | `sk-estimate` (#estimate) | how one estimate is written | `.sk-head` "Estimate" (E `#004896`) left, 2-sentence lead right (7/12); then **full content-width 16:9 photo H03** (1355 × 762 at 1440 incl. no rail overlap: width = viewport − 84 px), radius 0, `sp-reveal--wipe`; under it the five stages as a 2-column text list with small numerals (Albert Sans 600 1.25rem `#36939C` "01"–"05" + bold 1.125rem stage name + 30-word sentence), hairlines between, not cards: Read the drawings / Measure the quantities / Price at current rates / Write down the risks / Hand over and explain | lead 50 + 5 × 30 words (narrative 4) |
| 5 | `sk-handover` (#handover) | what the client receives | `.sk-head` "Handover"; three 376 px cards, 3 columns, gap 32 px, radius 0 (reference project grid): card 1 = H04 4:3 + teal chip "Cost plan" + title + 35 words; card 2 = H05 4:3 + chip "Cash-flow" + title + 35 words; card 3 = **solid `#F07A73` coral tile** same size as photo+text (reference coral project tile), ink text: chip (white ground, ink text) "Risk register", title "Every line we could not price yet, written down.", 35 words. Under the cards a T3 wide button "Request a proposal". Mobile: stacked. | 3 × 35 words + CTA |
| 6 | `sk-fees` (#fees) | prices | White ground. `.sk-head` "Fees" (F `#36939C`) + one sentence "All fees in EUR excl. VAT; fixed before work starts."; **fee table full content width** (7 rows, see 11): columns `No.` (Albert Sans 600 `#004896` / `#36939C` alternating, 64 px) · `Service` (bold 1.125rem + 1-line description in `#5C6660`) · `Fee` (Albert Sans 600 1.375rem, `white-space: nowrap; text-align: right; min-width: 11ch`), 1 px hairline rows, row height ≥ 88 px. No reveal on the table. Link "Fees & scope →" + T3 button under it. | 7 rows + 25 words |
| 7 | `sk-cases` (#cases) | three cases, proof | Full-bleed **H09 band** (21:9, height 56vh, max 640 px) with `sp-parallax --sp-par: 12%`; one quiet line in white Onest 600 1.5rem bottom-left on a `linear-gradient(0deg, rgba(47,58,52,.55), transparent 60%)`: "Three buildings, priced before the first spade." Directly below (overlapping the band by 120 px, the reference panel-over-photo stacking) a white panel 1272 px wide containing three columns: photo 4:3 (H06, H07, H08) + teal chip with building type + title + facts line (`3,200 m² · estimate €7.9 m · tender €8.1 m`) + 45 words. `sp-stagger` + `sp-reveal--up` on the three columns. | 3 × 45 words |
| 8 | `sk-people` (#people) | the named people | `#F3F5F3` ground. Left 6/12: `.sk-head` "People" (P `#004896`), 50-word paragraph, then a **hairline list of 7 names** (name Albert Sans 600 1.25rem, role Onest 0.875rem `#5C6660`, one row each, 64 px tall) — not a portrait grid. Right 6/12: H10 group photo 3:2, radius 0, aligned to the top of the list. | 50 + 7 × 8 words |
| 9 | `sk-request` (#request) | the single request | Full-bleed `#2F3A34` block (reference dark magazine block), padding 160 px top/bottom. Left 6/12: `.sk-head` white "Request a proposal" with **R in `#F07A73`** (reference coral "M"), 40-word paragraph, then three short lines with white numerals: "01 Send drawings and the site address" / "02 We reply with a fixed fee within 2 working days" / "03 Concept cost plan in 10 working days". Right 6/12, bottom-aligned: T3 dark variant wide button "Request a proposal →" (to `/request-a-proposal/`) and a plain email link `proposals@sekisan.example`. No form on home. | 40 + 3 × 10 words |
Footer follows.

English home ≥ 300 words with narrative paragraphs in blocks 2 (three) and 4 (at least four in total). CJK home ≥ 600 characters. Home photo positions: H01, H02, H03, H04, H05, H06, H07, H08, H09, H10 = **10**, none repeated.

### Comparison with recent home block orders
| # | Awa Taproom | Kairo Supply | Kesho College | Eiyo Clinic | **Sekisan Partners** |
|---|---|---|---|---|---|
| 1 | framed photo hero over parallax ground | stadium-pill KV over cropped wordmark | 4-panel sliding strip | inset photo hero crossfade | **full-bleed photo beside a fixed 84 px ink rail, dots, outline CTA** |
| 2 | full-bleed room wipe | egg + story | centred concept | 4-line scroll-fill statement | **white panel of hairline rows over a parallax portrait photo** |
| 3 | lead + 3-photo strip | dark sticky stage | wide photo, overlapping caption | coverflow | **numbered caps index rows (TOC)** |
| 4 | 4 tap cards | how-it-opens grid | hour-by-hour rows | pine block with arches | **16:9 wipe photo + 5 stages in 2 text columns** |
| 5 | price list w/ parallax photo | stadium + egg range | 3 square tiles | 3 story cards | **3 square-cornered cards incl. one coral tile** |
| 6 | seat-hold wide cards | price table | split teachers | paper room block | **full-width fee table** |
| 7 | tanks band | 3 stories | intake table | fees list | **21:9 parallax band + overlapping 3-case panel** |
| 8 | visit band | sticky egg team | 3 quotes | paper strip CTA | **people hairline list + group photo** |
| 9 | — | apply | photo + box CTA | — | **dark request block, coral first letter** |
Why not alike: no framed/inset/pill/egg/arch photo shapes (ours are radius 0 full-bleed or square), no sliding strip, coverflow or sticky stage, no centred statement. The structure is driven by the reference's rail + index rows + news-panel stacking, which none of the four use. Fees sit mid-page as a plain full-width table (Kairo and Awa place prices with egg/parallax photos); people are a name list, not cards or a sticky portrait.

---

## 4. Inner pages (12 + 3 posts; all reachable from the header CTA, footer or home links; ≥ 9 for auto-gates)
Each page: white top bar header (rail + split nav) → `.sk-head` page head at 5.625rem with coloured first letter + 1-sentence lead → body → T3 "Request a proposal" → footer. No sidebar.
1. **About** (`page-about`, page code about): head "About"; index rows 01 Founded 2011 / 02 People / 03 The studio (jump links). Founding story (Ilse van Damme left a contractor's estimating desk in 2011 to price for clients instead), H09 band 21:9 with parallax, the 7 people as a hairline list with 40-word bios, H10 group photo, H11 site visit 4:5 beside "How we work with architects". ≥ 350 words.
2. **How we estimate** (`page-method`): head "Method"; H02 portrait right of the lead; five index rows (T2) = the five stages; each opens a 90-word section; H03 16:9 wipe; H12 3:2 beside stage 5 "Hand over and explain". Measurement standard named generically ("international measurement standards"), no real standard bodies claimed as accreditation.
3. **Fees & scope** (`page-fees`): head "Fees"; full fee table (same 7 rows, same numbers) with a "What is included" line per row; H04 bound cost plan 4:3 beside "What you receive"; H14 materials 4:3 beside "What changes the fee" (floor area bands, refurbishment vs new build, number of design options). Payment terms. T3 buttons.
4. **Cases** (`page-cases`): head "Cases"; index rows 01–03; each case a section: photo 4:3 (H06, H07, H08), facts list (type, floor area, stage we joined, estimate, tender/outturn), 150 words "What we priced / what moved / what the client did". Coral tile repeated once as the case 3 "lesson" aside.
5. **Request a proposal** (contact code; `page-request`): head "Request"; index rows 01–04 = process (section 11); "What to send" list; H13 studio 3:2; H11 not used here (used on About); address, email, hours, phone-free; T3 wide mailto button 755 px. Optional simple form only if the theme ships one (no plugin requirement).
6. **Cost letter** (newsletter code; `page-cost-letter`): early-access waitlist for the quarterly "Cost letter" (what moved in material and labour rates, written by Hana Sato); H16 site-office window 3:2; email signup (core/shortcode-free HTML form posting to mailto or a placeholder handler) with a T3 submit; "First issue: January 2027" (fixed).
7. **Notes** (`home.html` index, news code): head "Notes"; posts as reference news rows: date in Albert Sans 600 2rem ("Oct. 21, 2026" style, year smaller), teal chip category under the date, title 1.225rem bold + excerpt at right, 1 px hairlines, then a T3 "More notes" wide button.
8. **Single note** (`single.html`, article code): chip + title 3.6rem + date; featured image 16:9 radius 0 full content width; text column 720 px; T3 at end.
9. **Category / tag archives** (`archive.html`): same rows as Notes with `.sk-head` = term name.
10. **Privacy** (`page-privacy`), 11. **Terms** (`page-terms`, engagement terms: fee fixed in proposal, 30-day payment, liability limited to fee), 12. **Thanks** (`page-thanks`, after signup/request: "We reply within 2 working days", H13, T3 back to home).
Posts (3): "Why the risk register comes first" (H12, category Method), "Reading a tender comparison" (H15, category Tender), "Autumn cost letter: what moved this quarter" (H14, category Cost letter).

---

## 5. Colour (token (a); reference roles kept)
| Role | Reference (token) | Ours | Change and reason | Share |
|---|---|---|---|---|
| Ink (rail, text, borders, dark block) | `#131416` | **`#2F3A34`** | design row main 黒緑 (required by plan); same role, still the darkest | ≈ 20% |
| Ground | `#FFFFFF` | `#FFFFFF` | kept | ≈ 50% |
| Ground alt (index rows, people) | `#F5F5F5` | `#F3F5F3` | ±1% L, green-tinted to sit with the ink | ≈ 12% |
| Primary accent (odd numerals, links, active dot, first letter of "Estimate"/"People") | `#004896` | `#004896` | kept (blue pencil of a cost plan) | ≈ 3% |
| Secondary accent (even numerals, chips, first letters "Gap"/"Fees") | `#36939C` | `#36939C` | kept | ≈ 2% |
| Spot (one coral tile, "R" on request block) | `#F07A73` | `#F07A73` | kept (red-pen markup); never on the first screen | ≈ 2% |
| Hairline | `#E7E7E7` | `#DDE2DE` | −3% L, green-tinted | — |
| Muted text | (derived) | `#5C6660` | from ink | — |
| Pale sage (inactive dots, focus ring) | — | `#B8C9BE` | from stage-a chip proposal; tiny | < 1% |
- First screen: H01 high-key, cool white/pale grey with ink-green and slate accents; no coloured UI except the ink rail (S ≈ 11%, not saturated). Saturated (S > 45%) target ≤ 8%, gate 15% (reference ≈ 0%; row cap 30%).
- Contrast: ink on white 11.4:1; `#004896` on `#F3F5F3` 8.7:1; `#36939C` numerals are display size (≥ 3:1 OK); white on `#36939C` chip 3.4:1 → chip text 0.8125rem **500** only for labels, never body; ink on `#F07A73` 5.0:1 (use ink, not white, on the coral tile).
- Not beige-led; no gradients except the hero text overlay and the band caption shade.

## 6. Type (font_direction **sans**; token (b))
- Latin display: **Albert Sans** (600, 700, 800); Latin body/UI: **Onest** (400, 500, 600). Both loaded with theme.json `fontFamilies` + `fontFace` (woff2, latin + latin-ext subsets for fr/de), no wp_enqueue / external @font-face only.
- CJK (黑體, no 明體 anywhere): zh-TW **Noto Sans TC** (400, 700), ja **Noto Sans JP** (400, 700), also via theme.json fontFace, subset with the Hokuto/Hada replacement method (the zh subset script is broken).
- Stacks (theme.json presets): `heading` = `"Albert Sans", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`; `body` = `"Onest", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`; `:lang(ja)` rules put Noto Sans JP before TC. style.css uses `:lang(` → copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it so the editor iframe shows the same fonts (check-editor-fonts.mjs, en + zh-TW).
- Size presets: small 0.8125rem · base 1rem (body 1rem/1.7 = 16/27.2 token) · medium 1.225rem (19.6 px titles) · large 1.333rem (21.3 px card titles) · x-large 3.6rem (57.6 px index titles) · **xx-large 5.625rem (90 px) = max**, `clamp(2.75rem, 6.25vw, 5.625rem)` for the hero and `.sk-head` (≥ 4.25rem at 1440 ✓).
- Weights / line-height / tracking: `.sk-head` 700 / 1.0 / −0.025em; index titles 800 / 1.1 / −0.025em uppercase; numerals 600 tabular; buttons 600 1.125rem uppercase +0.04em (the reference uses condensed Oswald; Albert Sans uppercase replaces it — no third family); body 400 / 1.7; Notes dates 600 2rem.
- Wordmark: Albert Sans 600 2.4rem / 1.0 mixed case on two lines (the reference uses a Didone serif; sans direction forbids a serif, so the two-line stacked form and size are kept, the face changes).
- zh-TW / ja: headings 0.75× (hero 4.2rem max → clamp(2.1rem, 4.7vw, 4.2rem)), weight 700, letter-spacing 0.02em, no uppercase; body line-height 1.85; fr/de `hyphens: auto` on body and `.sk-index` titles (`overflow-wrap: anywhere` as backstop for long German compounds).

## 7. Spacing, radius, decoration (tokens (c)(d)(f))
- Rail 84 px; content left padding 85 px from the rail edge on panels and index rows (token: padding-left 85 px); wide content 1272 px; panel 1008 px incl. rail; cards 376 px × 3, gap 32 px; full-bleed photos width = viewport − 84 px.
- Section padding: 140 px top/bottom desktop (sections ≥ 1 viewport where content allows, like the reference snap sections, but **no snapping**), 72 px mobile.
- Radius **0** everywhere except the 43 px rail circle and the 8 px dots. Borders: buttons 3 px / 2 px, hairlines 1 px `#DDE2DE`. **No shadows.**
- Decoration only from the reference: rail, dots, scroll line, coloured numerals, coloured first letters, teal chips, 1 px vertical line by the active language. Nothing else (no blobs, no grain, no rotated stamps).

## 8. Scroll effects (sp-scroll; from stage-a candidates)
Copy `pipeline/assets/sp-scroll/` unchanged into `assets/`, enqueue in head (non-defer), `add_editor_style('assets/sp-scroll.css')`. Theme CSS variables: `--sp-dur: 0.8s; --sp-ease: cubic-bezier(0,.4,.2,1); --sp-dist: 24px` (token (g): `transform 0.8s cubic-bezier(0,.4,.2,1)`, children transition after the section lands). Three effect kinds only:
| Effect | Where | Source on pacific.co.jp | Trigger / time / easing |
|---|---|---|---|
| `sp-parallax` | hero H01 (8%, mobile 6%), gap photo H02 (10%), cases band H09 (12%, mobile 8%); About H09 band | fixed photo behind sliding panels | CSS scroll-driven, continuous, linear |
| `sp-reveal sp-reveal--up` + `sp-stagger` | `.sk-head` of blocks 2, 4, 5, 6, 7, 8, 9; index rows in block 3 (stagger 0.12s); the three cards in 5; three case columns in 7 | `.is-current` child transitions `all 0.8s 0.4s`, `transform 0.8s cubic-bezier(0,.4,.2,1)` | IntersectionObserver (sp-scroll), 0.8s, `cubic-bezier(0,.4,.2,1)`, 24 px |
| `sp-reveal sp-reveal--wipe` | H03 in block 4 (clip on the child figure img); Method page H03 | Swiper fade 1000 ms on the hero slider (moved off the hero) | 1.1s `cubic-bezier(.77,0,.175,1)` top→bottom |
Never on: hero (block 1), the fee table, forms, legal pages. Section snapping (scrollify) is **not** reproduced (not allowed); its feel comes from the 140 px padding and the reveals.

### Parallax (required)
- Primary: **block 1 hero**, Cover with class `sp-parallax`, background image **H01**, `style="--sp-par: 8%"` (≤ 781 px: 6%). Foreground (wordmark, headline, subline, CTA, scroll cue) is Cover inner content and does not move. Reference: the "living" hero video + a photo that stays while panels pass.
- Second: **block 2** right column Group `sp-parallax` with `figure > img` **H02**, `--sp-par: 10%` (the reference fixed night photo beside the news panel). Third: **block 7** band **H09** `--sp-par: 12%` (mobile 8%).
- Kept on mobile at the smaller value; off under reduced motion, `?sp-static`, no-JS and in the editor. Verified by `check-parallax.mjs` (≥ 6 px desktop and mobile, ≤ 1 px reduced motion).

## 9. Responsive rules
- 390 px first screen: no vertical text, no absolutely positioned label over text, no dots, no rail (top bar instead); `scrollWidth == innerWidth` at 390 and 1280.
- Fee table ≥ 782 px: `width: 100%` of the content column (not a narrow centred table), `table-layout: auto`, fee column `white-space: nowrap; text-align: right`, never clipped or overflowing at 800 and 1280. < 782 px: **stacked** (each row `display: grid`: numeral + service on line 1, description line 2, fee line 3 left-aligned bold), header row hidden visually.
- Any other table (case facts, privacy) also stacks below 782 px.
- Index rows < 782 px: min-height 120 px, numeral 2rem, title 1.75rem (zh/ja 1.5rem), arrow hidden.
- Cards and case columns stack below 900 px; the people list goes under the photo below 900 px.
- Header anchors collapse into the overlay below 1024 px.

## 10. Photos (16, Grok, one at a time, read each one)
IMAGERY = **photo** (the reference's main imagery is photography/film; high-key per the design row).
STYLE (exact string for every image):
`photorealistic documentary photograph, high-key bright daylight from large windows, soft overcast light, cool white and pale grey tones with muted ink-green and slate accents, low saturation, 50mm lens shallow depth of field, clean modern international architecture and offices, diverse adults, calm precise mood, paper, pencil and concrete textures visible, all figures and writing soft and illegible, no readable text, no numbers legible, no logos, no brand marks, no signage, no Japanese elements`
Rules: no text/logos, no broken hands (H01, H03 hands: check fingers), no cutouts, ≤ 300 KB, ≤ 2000 px, readme line per image (AI-generated, CC0). ★ = used on home.
| ID | Subject / composition | Ratio | Used on (once per page) |
|---|---|---|---|
| H01 ★ | site-office table seen slightly from above: marked-up cost plan sheets, a hand with a graphite pencil ticking a column, scale ruler across the sheets, white hard hat at the right edge, window light from the left; subject in the right 60%, left 40% almost empty bright table and white wall | 16:9 (2000×1125) | Home hero |
| H02 ★ | concrete frame of a five-storey building under construction, scaffold, bright overcast sky, seen from the street | 3:4 | Home gap; Method head |
| H03 ★ | overhead: two people's hands measuring a large floor-plan drawing with a scale ruler and pencil, sheets overlapping | 16:9 | Home estimate (wipe); Method |
| H04 ★ | bound printed cost plan with plain tab dividers on a light oak table, closed laptop beside | 4:3 | Home handover 1; Fees |
| H05 ★ | printed cash-flow sheets fanned out with pencil ticks, a coffee cup, morning light | 4:3 | Home handover 2 |
| H06 ★ | renovated public library reading room, tall windows, pale timber, empty | 4:3 | Home case 1; Cases |
| H07 ★ | low-rise timber-clad housing terrace, bright overcast, young trees | 4:3 | Home case 2; Cases |
| H08 ★ | bright new school extension corridor with large windows, empty | 4:3 | Home case 3; Cases |
| H09 ★ | wide view over a city construction site with a tower crane against a pale sky, high-key | 21:9 | Home cases band; About band |
| H10 ★ | five diverse colleagues around a long table with drawings in a bright studio, side view, mid-distance | 3:2 | Home people; About |
| H11 | two estimators in hard hats measuring with a tape in a stripped-out bright interior | 4:5 | About |
| H12 | consultant and client walking a fresh ground-floor slab holding rolled drawings | 3:2 | Method; post 1 (Notes) |
| H13 | bright studio office, drawings pinned on a white wall, long table, plants | 3:2 | Request; Thanks |
| H14 | material samples (concrete, brick, timber, steel) on a white table | 4:3 | Fees; post 3 (Notes) |
| H15 | three thick bound tender submissions side by side with plain sticky tabs | 4:3 | post 2 (Notes) |
| H16 | site-office window at morning: rolled drawings and a white hard hat on the sill, crane soft outside | 3:2 | Cost letter |
Per-page check: Home H01–H10 (10, no repeat); About H09 H10 H11; Method H02 H03 H12; Fees H04 H14; Cases H06 H07 H08; Request H13; Cost letter H16; Notes H12 H15 H14; Thanks H13.

## 11. Fixed facts (identical on home, inner pages, footer, posts and all five languages)
- Founded **2011**, Rotterdam; studio **Maaskade 41, 3071 NB Rotterdam, Netherlands** (fictional). Email **proposals@sekisan.example**. Hours **Mon–Fri 08:30–17:30 CET**. No phone number.
- Fees (EUR, excl. VAT; same 7 rows everywhere):
  | No. | Service | Fee |
  |---|---|---|
  | 01 | Feasibility cost check (one site, one massing option) | €2,400 |
  | 02 | Second-opinion review of an existing estimate | €1,900 |
  | 03 | Concept cost plan | €6,800 |
  | 04 | Detailed cost plan (developed design) | €12,500 |
  | 05 | Bill of quantities for tender | from €18,000 |
  | 06 | Tender review and contractor comparison | €4,200 |
  | 07 | Cost monitoring during construction | €1,150 / month |
- Process (Request page rows 01–04, home block 9 lines 01–03): 01 send drawings, brief and site address → 02 fixed-fee proposal within **2 working days** → 03 30-minute call with the partner who will price it → 04 concept cost plan in **10 working days** (detailed cost plan in **20 working days**). Payment 30 days from invoice.
- People (7): **Ilse van Damme** (founding partner, chartered quantity surveyor) · **Tomás Ferreira** (partner, concept and feasibility cost plans) · **Amara Okonjo** (senior estimator, measurement and bills of quantities) · **Lukas Brandt** (tender and procurement lead) · **Mei-Lin Chou** (cost monitoring on site) · **Hana Sato** (cost data, editor of the Cost letter) · **Noor Haddad** (client desk and proposals).
- Cases (3, fictional demo projects; no guarantee wording, say "came in at"):
  1. Harbourside library refurbishment — 3,200 m² — joined at sketch design — concept estimate €7.9 m — tender €8.1 m.
  2. 48-home timber housing terrace — 5,600 m² — detailed cost plan €13.4 m — contract €13.2 m.
  3. Primary school extension — 1,450 m² — second-opinion review — estimate €4.6 m — outturn €4.75 m (lesson: ground conditions priced as a risk, half of it used).
- Cost letter: quarterly, first issue **January 2027**, free.
- Languages keep EUR and these numbers; zh-TW/ja write "€6,800（未稅）" style, de "6.800 € zzgl. MwSt.", fr "6 800 € HT" (same values).

## 12. Home acceptance checklist
1. First screen 1440 × 900 shows all six KV items: full-bleed H01 right of the 84 px ink rail, square mark + two-line wordmark top-left, outline "Request a proposal" bottom-right, "Scroll" + line bottom-centre, six dots at the right edge; headline left in the empty part of the photo; no table/form/search/giant centred word; saturated share ≤ 15% (target ≤ 8%).
2. 390 × 844: top bar, photo top half, text bottom half, full-width T3 button; no vertical text, no overlapping labels; no horizontal overflow at 390 and 1280.
3. Block order exactly 1–9 of section 3 with the anchors `#gap #estimate #handover #fees #cases #people #request`; header anchor links and dots scroll to them.
4. T1 rail visible full height on desktop; T2 index rows (5 rows, coloured numerals, caps ≥ 3.6rem, hairlines, `#F3F5F3`) in block 3 and coloured first letters on block heads; T3 square 3 px buttons in blocks 5, 6, 9 and footer, 2 px outline on the hero.
5. Coral tile present once in block 5; coral "R" on the dark block; no other coral.
6. Fee table: 7 rows with the exact fees, full content width at ≥ 782 px, fee column nowrap right-aligned and not clipped at 800 and 1280; stacked on mobile; no reveal on it.
7. ≥ 8 photo positions (10: H01–H10), none repeated, all same STYLE, no text/logos/bad hands.
8. Parallax on hero (8%), gap photo (10%) and cases band (12%) passes `check-parallax.mjs` desktop and mobile; reveals (up + stagger, wipe on H03) pass; none on the hero; reduced-motion and `?sp-static` show the final state.
9. ≥ 300 English words, ≥ 4 narrative paragraphs; numbers identical with section 11 and the inner pages.
10. Fonts: Albert Sans headings, Onest body, Noto Sans TC/JP in zh-TW/ja (no serif anywhere), same in editor and front end; max size 5.625rem.

## 13. Similarity to reference (target 80%)
Same: rail, palette roles and three of five hex values, index typography, square 3 px buttons, chips, dots, scroll cue, full-bleed hero composition, panel-over-photo stacking, 16:9 full-width photo, 3 × 376 px card grid with one coral tile, dark closing block with coloured first letter, motion timing. Own: photos, copy, wordmark/mark, ink hue (row requirement), high-key grade, sans wordmark, no section snap.
| Dimension | Reference (token) | Sekisan Partners |
|---|---|---|
| Ink / rail colour | `#131416` (a) | `#2F3A34` (row main; same role) |
| Ground / alt | `#FFFFFF` / `#F5F5F5` (a) | `#FFFFFF` / `#F3F5F3` |
| Accents | `#004896`, `#36939C`, spot `#F07A73` (a) | same three hex |
| Hairline | `#E7E7E7` (a) | `#DDE2DE` |
| First-screen saturation | ≈ 0% (a) | ≤ 8% (gate 15%) |
| Section heading | Poppins 700 90/90 px, ls −2.25 px, accent first letter (b) | Albert Sans 700 5.625rem/1.0, −0.025em, accent first letter |
| Index title | 57.6/63.4 px caps, ls −1.44 px, coloured 2-digit numeral (b) | Albert Sans 800 3.6rem/1.1 caps, −0.025em, numeral 3.6rem in `#004896`/`#36939C` |
| Body | Noto Sans JP 16/27.2 (1.7) (b) | Onest 1rem/1.7; CJK Noto Sans TC/JP 1.85 |
| Titles | 19.6/29.3 bold; card 21.3/29.9 bold (b) | 1.225rem bold; 1.333rem bold |
| Button label | Oswald 500 16 px caps (b) | Albert Sans 600 1.125rem caps +0.04em |
| Rail | 84 px fixed black, circle, langs, vertical wordmark (c)(f) | 84 px fixed `#2F3A34`, circle, langs, vertical wordmark |
| Content column / padding | 1008 px panel, padding-left 85 px (c) | 1008 px panel, padding-left 85 px |
| Cards | 376 px × 3 (c) | 376 px × 3, gap 32 px |
| Full-width photo | 1355 × 762, 16:9, radius 0 (c)(e) | viewport − 84 px, 16:9, radius 0 |
| Index row height | 197 px, 1 px hairline (c) | min 197 px, 1 px hairline |
| Radius / shadow | 0 / none (d) | 0 / none |
| Buttons | 3 px ink border, 71 px tall, arrow right; hero 2 px white 259 × 41 (d) | same geometry; hero 2 px ink on 55% white (high-key photo) |
| Chip | teal 115 × 26, 14 px text (f) | `#36939C` 115 × 26, 0.8125rem |
| Dots | 6 × 8 px, x ≈ 1404, y 394–494, active blue (f) | same, active `#004896`, inactive `#B8C9BE` |
| Scroll cue | "Scroll" + 1 px × 46 px line (f) | same, ink, line draw loop |
| Imagery | full-bleed photo/film, 16:9 aerials, photos ≥ 70% (e) | full-bleed photo, 16:9 / 21:9 site photos, 100% photos (16) |
| Stacking | panels slide over a fixed photo (e) | white panel over parallax H02; case panel overlaps H09 by 120 px |
| Motion: section children | 0.8s (delay 0.4s), cubic-bezier(0,.4,.2,1) (g) | sp-reveal--up 0.8s cubic-bezier(0,.4,.2,1), 24 px, stagger 0.12s |
| Motion: hero | slow video + Swiper fade 1000 ms (g) | parallax 8% (no reveal on hero) |
| Motion: hover | 0.3s ease-out (g) | 0.3s ease-out |
| Section snap | scrollify 800 ms (g) | not reproduced (rule); 140 px padding |
