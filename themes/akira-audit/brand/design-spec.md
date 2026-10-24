# Akira Audit: design spec (stage 1, binding for implementation)

Slug `akira-audit`, audit firm for owner-managed companies and grant-funded charities. Type **business** (WooCommerce compatible, not required). Archetype editorial-magazine, hero full-bleed-photo, first_screen **full-bleed-photo-info-bar**, page_structure **alternating-longform**, nav top-bar.
Sole reference: **Inoue Surveying** — https://inoue-surveying.co.jp/ (S5-Style #11535). Measurements: `brand/reference-tokens.md` (cited below as token (a)…(g)). Screens: `brand/ref/`. We borrow structure, techniques, colour relationships, the key-visual concept and motion values. We do **not** copy their photos, copy, logo, drawings or page as a whole.
Imagery: **photo** (stage-a IMAGERY = photo; the reference is photo-led, its one pencil drawing is a minority and is not reproduced).

Fixed brand facts (every page and all five languages use exactly these; see §8):
Akira Audit LLP, founded **2009**, office **Wapping Quay Studios, 3 Gaol Ferry Steps, Bristol BS1, United Kingdom** (fictional address in a real city). Currency **GBP (£)** in every language, prices ex VAT, never converted.

---

## 1. Signature techniques (three; obvious at a glance; never softened)

### T1. Hero: boxed verb with crop marks + outline watermark word at the fold + left ruler strip (Inoue first screen, `ref/inoue-first.png`)
- Reference: full-bleed daylight photo, white Mincho headline 3 lines bottom-left (x≈120, last line baseline ≈ 88 % of viewport), the verb "to measure" enclosed in a 1 px white frame whose top-left and bottom-right corners extend 12 px past the box like crop marks; huge outline Latin word (≈170 px, 1 px stroke) half-cropped at the bottom; a 24 px tick-mark ruler strip runs down the left edge of every screen (token f).
- Ours: home hero. Headline (en) **"We go and / count what is there, / then we sign."** — the word **count** is boxed: `span.aa-boxed` with `outline` replaced by a real 1 px border `rgba(255,255,255,.9)`, padding `0 .18em`, plus two pseudo-elements: `::before` 12 px horizontal + 12 px vertical lines at the top-left outside corner, `::after` same at bottom-right (both 1 px, same colour). In other languages box the equivalent verb (zh-TW and ja equivalents of "count", fr compter, de zählen).
- Outline watermark: `AKIRA AUDIT`, Instrument Sans 500, `font-size: 10.5rem` (168 px, token f ≈170), `color: transparent; -webkit-text-stroke: 1px rgba(255,255,255,.35)`, `white-space: nowrap`, `aria-hidden="true"`, letter-spacing .02em. It sits **in normal flow** as the last element of the hero content, with `margin-bottom: -0.42em`, so the white info bar (z-index above) crops its lower ~40 %. Hero wrapper `overflow: clip`.
- Ruler strip: global, `body::before` fixed, left 0, top 80 px (below header), width 24 px, height 100 %, `pointer-events:none`, z-index 5; ticks via `repeating-linear-gradient(to bottom, #9A949F 0 1px, transparent 1px 6px)` for 12 px ticks plus a second layer every 30 px for 24 px ticks (every 5th tick long). On the photo it draws in `rgba(255,255,255,.55)` (use `mix-blend-mode: normal`; acceptable to keep #9A949F — it must stay visible on both). Faint 24 px square grid on stone zones: `background-image: linear-gradient(rgba(37,34,43,.06) 1px, transparent 1px), linear-gradient(90deg, rgba(37,34,43,.06) 1px, transparent 1px); background-size: 24px 24px` (token f, 8 % → 6 % because our ink is darker).
- Not to be diluted: the box must be a real visible frame with both crop-mark corners; the watermark must be ≥ 9rem at 1440 and visibly cut by the info bar; the ruler strip must be on every page at ≥782 px.

### T2. Scope circle photo + three hairline link rows (Inoue "Strength", `ref/inoue-s2.png`)
- Reference: a white card 1384 wide inset 24 px from the right on the grey ground; left a 476 px circular photo with a 3 px ink ring and cross-hair lines through the centre (gap at the centre, small `+`); right a short lead (3 lines) and three link rows 106 px tall: olive 14 px Latin eyebrow, 28 px title, 46×46 boxed arrow, 1 px rule under each.
- Ours: home section 2 "What we look at". White card `#FFFFFF`, width `calc(100% - 48px)` max 1384, `margin-left: auto; margin-right: 24px` on stone ground with grid. Circle: diameter **476 px** desktop (`width: min(476px, 100%)`, aspect 1, `border-radius: 50%`, `border: 3px solid #25222B`), photo `h02` (stock-count close-up) `object-fit: cover`. Cross-hair: two 1 px `#25222B` lines (horizontal at 50 %, vertical at 50 %) across the whole circle with a 24 px gap at the centre and a 16 px `+` in the gap; plus a ring of **60 tick marks** inside the edge (every 5th 14 px long, others 7 px, `#25222B` 1 px) — the "sample ring", drawn as one inline SVG overlay `aria-hidden`. Small accent detail: the top tick is `#6E6272` 3 px.
- Right column (x from 50 % of container): lead 3 lines 1rem/1.9, then 3 link rows: **Owner-managed companies / Grant-funded charities / Funders and boards** (eyebrows: *Statutory audit*, *Audit & independent examination*, *Grant assurance*). Row 106 px, `border-bottom: 1px solid #D6D2D8`, eyebrow 0.875rem `#6E6272`, title 1.75rem Instrument Sans 400, arrow box 46×46 `border:1px solid #5F5A66`, radius 0, arrow → 18 px; hover: box fills `#25222B`, arrow white, 400 ms.
- Not to be diluted: circle ≥ 420 px at 1440 (≥ 300 px at 390), 3 px dark ring (not grey, not 1 px), cross-hair visible across the photo, rows with boxed square arrows (not circles, not text links).

### T3. Overlapping photo pair in hairline frames with crop-mark ticks (Inoue "Case", `ref/scroll-inoue-case-*.png`)
- Reference: text left (eyebrow, H2, 2 lines, dark button 260×64 with yellow dot); right two photos overlapped — A 270×180 top-left, B 466×308 offset +16 px right of A's right-third / +57 px down; each has a 1 px frame `#9E9989` whose lines run 8 px past every corner (crop marks). Frames are drawn immediately; photos fade in inside them over 2 s.
- Ours: home section 5 "Recent engagements". Right column 50 %: figure A `h10` 3:2 **270×180**, figure B `h11` 3:2 **466×308**, B positioned `left: 160px; top: 57px` relative to A's top-left (wrapper 626×365 at 1440; scale proportionally below 1280 via `aspect-ratio` and percentages: A 43 %, B 74.4 %, B left 25.6 %, top 15.6 %). Frame: wrapper `figure.aa-frame` has `position:relative`; `::before` = 1 px `#9A949F` box inset −0 with lines extended by 8 px using two background gradients (top/bottom lines from −8 px to +8 px horizontally; left/right lines likewise vertically). The `img` inside carries `sp-reveal` (fade 2 s); the frame stays static so the "before" state shows empty frames (token g).
- Not to be diluted: both frames visible with ticks past all four corners; the overlap (B over A's lower-right) must be obvious; photos 0 radius.

### Supporting (not counted as signatures, used to hold the reference's feel)
- S4 Dark ink band with three photo cards (`ref/inoue-s3.png`): `#2B2830` band, eyebrow + H2 left, statement 3 lines + paragraph right, then 3 cards 370×280, scrim, white title bottom-left, white 46×46 boxed arrow bottom-right.
- S5 Eyebrow mark: five vertical ticks heights 6/10/14/10/6 px, 1 px, 3 px gap, `#6E6272`, then a Latin word (token f). Used above **every** H2 on every page, in every language (word stays English: *Scope, Engagement, Services, Case, Fees, People, Contact*).

### Continuation to inner pages (≥4 required; we do all)
| Page | T1 | T2 | T3 | Other |
|---|---|---|---|---|
| About | page head: H1 with boxed word + crop marks, short outline watermark `2009` (6rem) cropped by page-head rule | — | founders photo pair `p13`+`h12` in crop frames | ruler strip, eyebrow ticks |
| Company audit | boxed word in H1 | scope circle `p14` + 3 rows (what we test) | — | ink band of fees excerpt |
| Charity audit & examination | boxed word in H1 | scope circle `h08` + 3 rows (income thresholds) | — | |
| How an audit runs | boxed word in H1 | — | each of the 5 stages has one framed photo (single crop frame) alternating | |
| Cases (4) | boxed word in H1 | — | every case: framed photo pair | |
| People | boxed word in H1 | — | partner photo in single crop frame | hairline name rows |
| Fees | boxed word in H1 | — | — | full-width hairline price table |
| Contact | boxed word in H1 | scope circle `p16` (office) | — | hours/address rows |
Page head pattern (all inner pages): stone ground with grid, eyebrow ticks, H1 3rem with one boxed word, lead ≤ 2 lines, 1 px `#9A949F` rule at the bottom; height ~360 px desktop.

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
- Draws: a surveyor in a pale work jacket, his face half hidden behind a yellow total-station on a tripod, looking through it toward us; right of centre, ≈ 40 % of the width; a daylight autumn hillside and sky behind; soft-focus leaves in the lower-left foreground. Header white 80 px with a yellow CTA box and a grey mail box.
- Story: "we are a company that *measures* communication" — the professional's careful looking is the product, the instrument is the sign of trust; the boxed verb is the survey mark.
- Motion: headline lines appear on load; ruler ticks and grid frame the page statically; further down, crop-mark frames are drawn first and photos fade in inside them (2 s); text rows rise 10 px (1 s).

### (2) Our transformation (same composition, same image type, audit industry)
- Scene (photo, documentary): an **auditor at a year-end stock count** in a bright warehouse aisle, standing beside a pallet racking bay, holding a clipboard with count sheets and a handheld tally counter, looking at the labelled cartons on the shelf (labels blank, no text); a warehouse staff member counting beside her, slightly behind; she is right of centre, ≈ 40 % of the frame width, head at ≈ 45 % height; soft-focus stretch-wrap on a pallet edge in the lower-left foreground (the "leaves"); daylight from high skylights, cool grey concrete, pale cartons.
- Story: **"We go and count what is there, then we sign."** — the auditor's observing is the product; the clipboard/counter is the instrument of trust; the boxed verb *count* is the audit mark (tick).
- Motion: same family — hero photo slow parallax (rule), the boxed verb and watermark static; ruler strip becomes a **tally-tick strip** (identical geometry); below the fold, frames first, photos fade in, rows rise 10 px.

### (3) KV checklist (all in the first screen; visible at 1440×900; rows 3, 5, 6, 7 also at 390×844)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Surveyor behind a yellow total-station on a tripod, daylight hillside (photo) | Auditor beside pallet racking with clipboard + tally counter at a stock count, colleague counting behind (photo) | full-bleed; subject right of centre (x 55–90 %), ≈40 % width, head ≈45 % height | `sp-parallax`, `--sp-par: 8%` (mobile 5%) | `h01-hero-stock-count.webp` |
| 2 | Soft-focus green leaves, lower-left foreground | Soft-focus stretch-wrap / carton edge, lower-left foreground (in the photo) + bottom-left scrim for headline legibility | lower-left 30 % × 35 % | moves with the photo | `h01` (same photo) |
| 3 | White Mincho headline 3 lines bottom-left, verb boxed with crop marks | White Instrument Sans 3-line headline, *count* boxed with 1 px frame + 12 px crop marks | bottom-left, x = container left (150 px at 1440), last baseline ≈ 76 % of hero height | none (no reveal in hero) | — |
| 4 | Outline Latin watermark ≈170 px cut at the fold | `AKIRA AUDIT` outline 10.5rem, 1 px stroke 35 % white, cropped by info bar | bottom of hero, starts x = 24 px | static | — |
| 5 | 24 px left ruler strip + faint grid | 24 px tally-tick strip (long tick every 5th) on all screens; 24 px grid on stone zones | left edge, full height (desktop); 10 px at 390 | static | — |
| 6 | White header 80 px, logo block with right rule, 4 nav items, yellow CTA 180×80, grey mail box 80×80 | Same geometry: logo block 316 px with 1 px right rule, 4 items (Services, How we audit, Cases, Fees), accent `#6E6272` CTA 180×80 "Book a planning call", stone `#ECEBEC` mail box 80×80 → Contact | top | none | — |
| 7 | (row first_screen: info bar) | White info bar 96 px across the photo bottom: `Est. 2009 · Bristol` / `Opinion signed within 12 weeks of year-end` / `Reply within 2 working days` + link "Fees →" | bottom of hero, full width, over the photo | static | — |

---

## 3. Colour (token a → ours)
Reference relationship kept: grey ground + white surfaces, one warm-dark ink band, one tiny loud accent. We keep every role and area; hue moves to the row's purple family.
| role | reference | ours | area | where |
|---|---|---|---|---|
| ground | #EDEDED | **#ECEBEC** (−0.4 % L, cool tint) | ~45 % | page ground, page heads, Case, contact band (+ grid) |
| white | #FFFFFF | **#FFFFFF** | ~25 % | header, scope card, fees, info bar |
| ink band | #33312A | **#2B2830** (−3 % L; hue to purple so it does not clash with purple-mouse grey) | ~12 % | Services band, footer, dark buttons |
| text | #26231D | **#25222B** | | headings/body on light |
| muted | #5E5749 | **#5F5A66** | | dates, captions, arrow-box border |
| eyebrow / accent | #7F7000 olive + #FFEA00 yellow | **#6E6272** (row palette hex) | ≤3 % | eyebrow ticks + word, header CTA, top tick of the scope ring, focus rings, price-table "from" label (the hero boxed word stays white on the photo) |
| rules | #D9D3C7 / #9E9989 | **#D6D2D8** list rules / **#9A949F** header bottom, frames, ruler | | |
| button dot | #FFEA00 5 px | **#C9BFCD** 5 px | tiny | right end of dark buttons |
Why the accent changes: the row requires the palette hex `#6E6272` as the single muted accent and forbids loud fields; the reference's yellow (and its full-yellow recruit band) is not used. The CTA box stays a solid block of accent (white text, contrast 5.7:1) so the header contrast of the reference survives.
First-screen saturated pixels **≤ 15 %** (target ≤ 6 %; reference ≈ 4 %): the photo is slightly desaturated cool; no saturated field. Checked with `scripts/check-first-screen.py`.

## 4. Type (font_direction **sans**)
- Latin headings: **Instrument Sans** (400, 500) — sans-serif. Latin body/UI: **Atkinson Hyperlegible** (400, 700) — sans-serif. Both OFL (verify licence files when building).
- CJK: **Noto Sans TC** (zh-TW) and **Noto Sans JP** (ja), sans-serif (gothic), headings and body; **no mincho/serif anywhere**.
- Stacks (theme.json fontFamilies, loaded with `fontFace` so editor and front end are identical; zh-TW/ja subset files as in Hokuto/Hada; style.css `:lang()` rules → copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and require it):
  - heading: `"Instrument Sans", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`; `:lang(ja)` → `"Instrument Sans", "Noto Sans JP", "Noto Sans TC", sans-serif`
  - body: `"Atkinson Hyperlegible", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`; `:lang(ja)` puts Noto Sans JP first after Atkinson.
- Sizes (token b ratio 56 : 40/48 : 32 : 28 : 16 : 14; scaled up so the max ≥ 4.25rem):
| preset | size | use | weight / lh |
|---|---|---|---|
| `xx-large` | **4.25rem** (68 px) `clamp(2.25rem, 4.7vw, 4.25rem)` | hero H1 | 400, lh 1.2 Latin / 1.5 CJK |
| `x-large` | 3rem (48) `clamp(2rem, 3.4vw, 3rem)` | H2, inner H1 | 400, lh 1.25 / 1.6 |
| `large` | 2rem (32) | H3, card titles on photos | 400, lh 1.3 |
| `medium-large` | 1.75rem (28) | link-row titles, statement on ink band | 400, lh 1.45 |
| `medium` | 1.125rem (18) | lead | 400, lh 1.9 |
| `base` | 1rem (16) | body | 400, lh 1.9 (CJK 1.85, CJK size ≈0.94rem) |
| `small` | 0.875rem (14) | eyebrow, captions, info bar | 400, lh 1.9 |
Line-height deviation: reference headings 1.7 are for Japanese Mincho; Latin sans at 1.7 falls apart, so Latin 1.2–1.3, CJK 1.5–1.6. No uppercase except the watermark; letter-spacing 0 (CJK 0.04em). de/fr `hyphens:auto`. CJK headings ≈0.75× the Latin size.

## 5. Home page

### First screen (1440×900)
- Header 80 px white, bottom border 1 px `#9A949F`; logo block 316 px (wordmark "Akira Audit" Instrument Sans 500 1.375rem + 3-tick mark in accent; small line "Auditors · Bristol" 0.6875rem muted), 1 px right rule; nav 4 items 0.9375rem centred-right; CTA 180×80 `#6E6272` white text "Book a planning call"; mail box 80×80 `#ECEBEC` envelope icon (1.5 px stroke) linking to /contact.
- Hero: `wp:cover` alignfull, `sp-parallax`, min-height `calc(100svh - 80px)` clamp 640–820 px, photo `h01`, focal point 70 % 45 %, overlay: no flat dim; add a gradient `linear-gradient(20deg, rgba(37,34,43,.55) 0%, rgba(37,34,43,.15) 45%, transparent 65%)` for the bottom-left headline.
- Content: container left 150 px (1140 wide); headline 3 lines, bottom at 96 + 40 px above the info bar; then the watermark row (cropped).
- Info bar: white, 96 px, full width, `position:relative; z-index:2`, 4 columns with 1 px `#D6D2D8` dividers: three facts (0.875rem muted label above 1rem ink value), last cell "See fees →" link. Bottom of the info bar = bottom of first viewport at 1440×900.
- Mobile 390×844: header 64 px (logo + menu button; CTA moves into menu); hero photo height 70svh with focal point 72 % so the auditor stays visible; headline 2.25rem, 3–4 lines, bottom-left in flow (no absolute labels, no vertical text); watermark 3.5rem in flow, cropped by `overflow:clip`; info bar **below the photo** in flow as 3 stacked rows (1 px rules) + link. Ruler strip 10 px; content padding-left 28 px.

### Block order (home, en word count ≥ 450; ≥ 3 narrative paragraphs)
| # | Block | Purpose | Layout | Image(s) | Copy |
|---|---|---|---|---|---|
| 1 | Hero + info bar (T1, KV) | promise | see above | h01 | H1 9 words + 3 facts |
| 2 | Scope card "What we look at" (T2) | who we serve | white card inset right; circle left 40 %, text right | h02 | eyebrow *Scope*, H2 2 lines, lead 45 words, 3 link rows |
| 3 | "One engagement, from appointment to signature" (alternating longform, page_structure) | how an audit really runs | stone ground; intro paragraph (60 words) then **4 chapters**, each a 12-col row: framed photo 6 cols / text 5 cols, alternating sides (photo L, R, L, R); chapter label "Chapter 1 — Appointment" eyebrow ticks, H3, 2 paragraphs (~70 words) | h03, h04, h05, h06 (single crop frames, 3:2) | ~330 words total |
| 4 | Ink band "Services" (S4) | three services | `#2B2830`, 120 px top/bottom; eyebrow + H2 left 5 cols, statement 28 px 3 lines + 50-word para right; 3 cards 370×280 gap 16, scrim `linear-gradient(to top, rgba(43,40,48,.85), rgba(43,40,48,0) 60%)`, title 2rem white bottom-left 24 px, 46×46 white arrow box bottom-right | h07, h08, h09 | 3 titles |
| 5 | Case (T3) | proof, one story | stone + grid; text left 5 cols (eyebrow *Case*, H2 "Fenwick Joinery's first statutory audit", 60 words, dark button 260×64 radius 4 with 5 px dot "All four cases"); photo pair right | h10, h11 | 60 words |
| 6 | Fees | prices (same as /fees) | white; eyebrow *Fees*, H2; full-width hairline table, 7 rows, 2 cols (service + note / price right nowrap); note line "ex VAT, fixed in the engagement letter" | — | 7 rows |
| 7 | People | partners | stone; left 5 cols framed photo (single crop frame, 4:5); right 7 cols: lead 40 words + 7 hairline rows (name 1.25rem / role 0.875rem muted right) | h12 | 7 names |
| 8 | Contact band | conversion | white; 2 cols: H2 "Book a planning call" + 40 words + dark button; right: address, hours, phone, email as hairline rows | — | ~60 words |
| — | Footer | | `#2B2830`, white 70 % text, 3 cols + legal row; ruler strip continues | — | |
Home image slots: **12** (h01–h12), no repeats.

### Comparison with recent themes (structure must not resemble)
| # | Hayate Cycles | Hozen Facilities | Hodoki Clinic | Enishi Catering | **Akira Audit** |
|---|---|---|---|---|---|
| 1 | 3 bleeding off-grid photos hero | photo hero + lockup heads | full-bleed hero + info bar | centred-title hero + info bar | full-bleed hero, bottom-left boxed-verb headline, outline watermark, info bar, ruler strip |
| 2 | hairline service index 01–06 | network | arch photo + narrow text | statement | **scope circle (cross-hair, tick ring) in inset white card + boxed-arrow rows** |
| 3 | capsule photo + dashed road about | blurred ghost photos statement | problem single column | 5-box zig-zag STEP | **alternating longform chapters with crop-mark framed photos** |
| 4 | tall capsule band | 2×2 sites ghost numerals | giant phrase + bleeding photos | vertical-caps course rows | **square-corner ink band with 3 scrim photo cards** |
| 5 | prices | parallax bands | method rounded white | tasting split | **overlapping framed photo pair (case)** |
| 6 | stories | call-outs → prices → stories | rounded dark band proof → fees → arch → stories | price list → night band | fees → people rows → contact |
Why it differs: no bleeding/off-grid hero, no capsule/arch masks, no ghost numerals, no STEP boxes, no vertical caps, no rounded bands; our shapes are circle-with-cross-hair, square crop-mark frames and a tick strip — all from the surveying reference, all square-cornered. The hero is the only full-bleed photo (Hodoki also had hero + info bar, but its next blocks are arches and rounded bands; ours is a white inset scope card).

## 6. Inner pages (10)
1. **About** (`/about`) — story since 2009 (Akira Bennett leaving a large firm to audit the companies and charities big firms decline), what "independent" means to us, our two rules (we attend every material stock count; a partner signs every opinion personally). Page head T1; photo pair `p13` + `h12` (T3); 3 values in hairline rows.
2. **Company audit** (`/company-audit`) — statutory audit for owner-managed companies and groups: when an audit is required, what we test, stock and revenue, group consolidation, what the management letter contains. Scope circle `p14` (T2) + rows; fees excerpt (rows 3, 4, 6 of §8).
3. **Charity audit & independent examination** (`/charity-audit`) — thresholds explained in plain words (examination vs audit), restricted funds, trustees' report review. Scope circle `h08`; fees rows 1, 2.
4. **Grant assurance** (`/grant-assurance`) — funder-specified reports, agreed-upon procedures, timing with grant claims. Framed photo `p15`; fee row 5.
5. **How an audit runs** (`/how-we-audit`) — alternating longform, 5 stages with dates relative to year-end (§8 process), each with one framed photo: h03, h04, h01, h05, h06 (allowed: different page from home). What we ask you to prepare (hairline checklist rows, not a grid).
6. **Cases** (`/cases`) — the 4 cases (§8), each an alternating row with a framed photo pair; challenge / what we did / outcome (no invented percentages; outcomes are qualitative + timings).
7. **Fees** (`/fees`) — full price table (7 rows), what is included, what changes a fee, payment terms (40 % on planning, 60 % on signing).
8. **People** (`/people`) — 7 named people as hairline rows with role, years with the firm, qualification (ACA/ACCA/CTA-free wording), one framed group photo `h12`; *no four-person grid*.
9. **Insights** (`/insights`, posts index) — 4 sample posts (e.g. "Preparing for your first stock count", "Restricted funds in one page", "Is your charity over the audit threshold?", "What the management letter is for"), list as hairline rows with date + title; single post template with framed featured image.
10. **Contact** (`/contact`) — scope circle `p16` (reception/office), address, hours, phone, email, how a planning call works (30 minutes, free), simple form (no table).
Plus 404, search, privacy. Every page: page head with eyebrow ticks + boxed word, ruler strip, footer.

## 7. Images (16, Grok, one at a time; read each one)
**STYLE** (one string for all, from stage-a):
`high-key documentary daylight photograph, natural soft light from skylights or windows, slightly desaturated cool tones, candid professionals at work in warehouses, workshops, offices and loading bays, 35 mm lens look, shallow depth of field, neutral international modern setting, diverse people, plain unbranded packaging and documents with no readable text, no text, no logos, no watermarks`
Rules: no Japanese elements, no cut-outs, ≤300 KB, ≤2000 px, webp; reject any image with letters, logos, broken hands/faces, or saturated colour casts.
| # | file | subject / composition | used on | home |
|---|---|---|---|---|
| h01 | h01-hero-stock-count.webp (2000×1200) | female auditor (40s, dark curly hair, grey blazer, lanyard) with clipboard and tally counter beside pallet racking, warehouse worker counting cartons behind; subject right of centre ≈40 % width, head 45 % height; soft-focus stretch-wrap lower-left foreground; long aisle, skylights | home hero; How we audit stage 3 | ★ |
| h02 | h02-scope-count-sheet.webp (1200×1200) | overhead-close: hand ticking a blank count sheet on a clipboard against carton stacks, centred for a circle crop | home scope circle | ★ |
| h03 | h03-appointment.webp (1500×1000) | partner and a family-business owner at a small table in a workshop office, engagement letter (blank) between them | home ch.1; How we audit stage 1 | ★ |
| h04 | h04-testing-invoices.webp (1500×1000) | auditor at a desk sampling paper invoices next to a laptop (screen not readable), window light | home ch.2; How we audit stage 2 | ★ |
| h05 | h05-findings-meeting.webp (1500×1000) | auditor and finance manager reviewing printed notes at a meeting table, both pointing at a page | home ch.3; How we audit stage 4 | ★ |
| h06 | h06-signing.webp (1500×1000) | close-up: partner's hand signing a document with a fountain pen, blurred colleague behind | home ch.4; How we audit stage 5 | ★ |
| h07 | h07-service-company.webp (1110×840) | owner-managed joinery workshop, timber racks, auditor walking with the owner | home Services card 1 | ★ |
| h08 | h08-service-charity.webp (1110×840) | community food-bank storeroom, volunteer and auditor checking shelves | home Services card 2; Charity audit scope circle | ★ |
| h09 | h09-service-grant.webp (1110×840) | small charity office, trustee and auditor at a laptop and folders | home Services card 3 | ★ |
| h10 | h10-case-a-timber.webp (810×540) | stacked timber boards with chalk-free ends, auditor's hand with measuring tape | home Case A; Cases | ★ |
| h11 | h11-case-b-workshop.webp (1398×924) | wide joinery workshop floor, two people counting finished doors on a trolley | home Case B; Cases | ★ |
| h12 | h12-partners.webp (1200×1500, 4:5) | three partners talking by a window in a bright office, standing, candid | home People; About pair; People | ★ |
| p13 | p13-about-early-office.webp (1500×1000) | small modern office with archive boxes (unlabelled) and two people at desks, morning light | About pair | |
| p14 | p14-company-loading-bay.webp (1200×1200) | loading bay, auditor checking a delivery note against a pallet, centred for circle | Company audit scope circle | |
| p15 | p15-grant-review.webp (1500×1000) | funder and charity manager with auditor reviewing a binder at a long table | Grant assurance | |
| p16 | p16-office-reception.webp (1200×1200) | the firm's calm reception / meeting room, plants, pale wood, empty chairs, centred | Contact scope circle | |
No image repeats within a page. Cases page additionally reuses h07/h08/h09 as pairs with h10/h11 (different page from home: allowed).

## 8. Fixed numbers (identical on home, inner pages and all five languages)
- Firm: Akira Audit LLP, founded **2009**, **26 people**, 3 partners; office Wapping Quay Studios, 3 Gaol Ferry Steps, Bristol BS1, UK; phone +44 117 000 0419; hello@akira-audit.example.
- Hours: **Mon–Fri 08:30–17:30**; Sat/Sun closed; stock counts attended any day by arrangement.
- Info-bar claims: opinion signed **within 12 weeks of year-end** when records arrive by week 4; reply **within 2 working days**; planning call **30 minutes, free**.
- Fees (GBP, ex VAT, "from"):
  1. Charity independent examination — **£1,450**
  2. Charity statutory audit — **£4,800**
  3. Company statutory audit (turnover up to £15m) — **£6,500**
  4. Group audit, parent + up to 3 subsidiaries — **£11,800**
  5. Grant assurance report (per funder) — **£1,900**
  6. Stock count attendance (per site, per day) — **£780**
  7. Pre-audit readiness review — **£950**
  Payment: 40 % on planning, 60 % on signing.
- People (7): **Akira Bennett** (founding partner, companies), **Helen Osei** (partner, charities), **Tomasz Wierzbicki** (partner, groups), **Priya Raman** (audit manager), **Lucas Ferreira** (senior auditor, stock & inventory), **Grace Mbeki** (senior auditor, grants), **Sam Ellery** (practice manager).
- Process (5 stages): 1 **Appointment** (engagement letter, 2 weeks before year-end) → 2 **Planning** (risk meeting, document list) → 3 **Observation** (stock count attendance at year-end) → 4 **Testing & findings** (fieldwork weeks 4–9, findings meeting) → 5 **Signed opinion** (partner signs, management letter, by week 12). Home shows 4 chapters (Appointment, Observation & testing, Findings, Signed opinion) that map onto these 5.
- Cases (4, fictional clients): **Fenwick Joinery Ltd** (family joiner, first statutory audit after crossing the threshold, timber stock count); **Riverside Food Larder** (grant-funded charity, restricted funds, examination → audit); **Calloway Freight Group** (3 subsidiaries, first consolidation); **Northgate Youth Music Trust** (two funder reports aligned to one year-end).
No guarantees of outcomes, no awards, no real media, no real brands.

## 9. Responsive rules
- 390 px first screen: no vertical text, no absolutely positioned labels over text; headline, watermark and info bar in normal flow; no horizontal overflow (hero `overflow:clip`, ruler strip inside viewport).
- Scope circle: 1 column on < 782 px, circle `min(340px, 86vw)` centred, rows below. Photo pair: wrapper keeps proportions at 100 % width (A 43 %, B 74.4 %); crop ticks stay inside the viewport (wrapper margin 8 px).
- Alternating chapters stack on < 782 px: photo first, text after, every chapter the same order.
- **Price table at ≥ 782 px: full container width (1140), service column fluid, price column `white-space: nowrap; text-align: right; width: 1%`, never clipped.** Below 782 px each row stacks (service + note, then price on its own line, right-aligned), implemented with CSS on the table (display:block rows) or a list — no horizontal scroll.
- Any other table (hours) stacks on mobile the same way.
- Ink band cards: 1 column on < 782 px (full width, 4:3), 2+1 at 782–1080.

## 10. Scroll effects (sp-scroll; from stage-a candidates; hero gets no reveal)
| effect | sp class | where | reference behaviour (token g) | our values |
|---|---|---|---|---|
| Photo fades in inside a pre-drawn frame | `sp-reveal` on the `img` / inner element inside `figure.aa-frame` (frame on the outer figure, static) | home ch.1–4 photos, Case pair, People photo; How we audit, Cases, About pairs | IO threshold 0, one-shot; fade 2000 ms, delay 2000 ms, ease-in-out | `--sp-dur: 2s`, delay 0.3 s (2 s delay is too long for a theme), `ease-in-out`, no translate |
| Rows rise 10 px | `sp-reveal sp-reveal--up` per row, parent `sp-stagger` | scope link rows, chapter text blocks, people rows, insights rows, ink-band card row (on the row container, not on cards if they scroll horizontally) | fade + 10 px up, 1000 ms, delay 500 ms, cubic-bezier(0.4,0.4,0,1) | `--sp-dist: 10px`, `--sp-dur: 1s`, easing `cubic-bezier(.4,.4,0,1)`, stagger 0.12 s (sp default) |
| Marker scales in | `sp-reveal sp-reveal--zoom` | scope circle (home, Company, Charity, Contact) | scale 0→1, 1000 ms, delay 1500 ms | sp default zoom 1.06→1, `--sp-dur: 1s`; tick ring is part of the element |
Not used: blur-backdrop (no sp equivalent), count/marquee (reference has none). Not on fees table, form, legal text. `.sp-reveal` count ≤ 60 % of home blocks, 0 inside the hero.

## 11. Parallax (required)
- Block: home hero `wp:cover` with class `sp-parallax`; moving layer = Cover background `h01`; foreground (headline, watermark, info bar) does not move (info bar is outside the moving layer).
- `--sp-par: 8%` desktop; `@media (max-width: 781px) { .aa-hero.sp-parallax { --sp-par: 5%; } }` — kept on mobile.
- Reference equivalent: Inoue has no parallax; its first-screen motion is the on-load headline appearance and slow photo fades. Parallax is the rule-mandated motion and is chosen to echo the "looking through the instrument" stillness: slow, small travel.
- Optional second: none (keep the rest quiet). reduced-motion / `?sp-static` / editor: no movement. Must pass `check-parallax.mjs` (≥ 6 px at 1280 and 390).

## 12. Similarity to reference (target 80 %)
| dimension | reference (token) | Akira Audit |
|---|---|---|
| ground / white / band ratio | #EDEDED 45 % / #FFF 25 % / #33312A 12 % (a) | #ECEBEC 45 % / #FFF 25 % / #2B2830 12 % |
| accent | #FFEA00 ≤2 %, olive #7F7000 eyebrow (a) | #6E6272 ≤3 % (CTA, eyebrow, ticks) — changed for row palette |
| text / muted / rules | #26231D / #5E5749 / #D9D3C7, #9E9989 (a) | #25222B / #5F5A66 / #D6D2D8, #9A949F |
| H1 / H2 / H3 / row / body / eyebrow | 56 / 40–48 / 32 / 28 / 16 / 14 px (b) | 68 / 48 / 32 / 28 / 16 / 14 px |
| line-height | head 1.7, body 1.9 (b) | head 1.2–1.3 Latin, 1.5–1.6 CJK; body 1.9 |
| weight | 400 everywhere (b) | 400 (500 only logo/watermark) |
| header | 80 px, logo 316, CTA 180×80, mail 80×80, border 1 px #9E9989 (c) | identical geometry, #9A949F |
| container | left 150, width ≈1140 (c) | 1140, left 150 at 1440 |
| section padding | 96–136 top / 80–168 bottom (c) | 120 top / 136 bottom (case 168) |
| link rows | 106 px, 14 + 28 px, arrow box 46×46 1 px (c, d) | same |
| radius | buttons 4, photos 0, circle 50 % (d) | same |
| shadows | none (d) | none |
| scope circle | 476 px, 3 px ink ring, cross-hair (e) | 476 px, 3 px ink ring, cross-hair + tick ring |
| service cards | 370×280, gap 16, scrim, white 46 px arrow (e) | same |
| photo pair | A 270×180, B 466×308 at +16/+57, ticks 8 px (e) | same |
| hero | full-bleed 1440×820, subject right 40 %, foreground blur (e) | same composition, + info bar (row) |
| decoration | ruler strip 24 px, grid 24 px 8 %, eyebrow ticks 6/10/14/10/6, boxed word with 12 px crop marks, outline watermark 170 px (f) | same; grid 6 %; watermark 168 px |
| motion | fade 500 / rise 10 px 1000 / photo fade 2000 ease-in-out / scale 1000; IO threshold 0 one-shot (g) | sp-reveal 2 s ease-in-out / --up 10 px 1 s / --zoom 1 s; + hero parallax 8 % |
| button | dark 260×64 radius 4, 5 px yellow dot (d, f) | dark #2B2830 260×64 radius 4, 5 px #C9BFCD dot |

## 13. Home acceptance checklist (stage 1 review)
- [ ] First screen at 1440×900 shows all 7 KV rows: auditor-at-stock-count photo right of centre with foreground blur, boxed **count** with both crop marks, outline `AKIRA AUDIT` cut by the info bar, ruler strip, header with 316/180/80 geometry, white info bar with 3 facts.
- [ ] 390×844: headline, boxed word, info bar readable, nothing overlapping, no vertical text, no horizontal scroll.
- [ ] Scope circle 476 px, 3 px dark ring, cross-hair and tick ring visible; three 106 px rows with square arrow boxes.
- [ ] Four alternating chapters with crop-mark framed photos (L/R/L/R), ≥ 330 words.
- [ ] Ink band #2B2830 with 3 square scrim cards and white boxed arrows.
- [ ] Case photo pair overlapped with ticks past all corners.
- [ ] Fees table full width at 800 and 1280, prices nowrap right, 7 rows identical to /fees and §8.
- [ ] 7 people rows, names as §8; contact band with hours Mon–Fri 08:30–17:30.
- [ ] 12 home images, no repeats, no text/logos in photos; total images 16.
- [ ] Saturated pixels first screen ≤ 15 %; accent only on small areas.
- [ ] Fonts: Instrument Sans / Atkinson Hyperlegible via theme.json fontFace; no serif anywhere; editor = front end.
- [ ] Max font size preset 4.25rem; eyebrow ticks above every H2.
- [ ] `sp-parallax` on hero passes check-parallax (desktop + mobile); 3 reveal effects present, none in hero; `?sp-static` shows final state.
- [ ] auto-gates en (`1 1`) pass.
