# Kataribe Partners: design spec (stage 1, binding for implementation)

Slug `kataribe-partners`, public-relations agency, **landing** theme (`type: landing`, page_structure `landing-longform`, archetype `horizontal-strip`, nav `centered`, design row b25-6). Home is one long conversion page with an in-page anchor menu and **one** repeated call to action. Five languages: en, zh-TW, ja, fr, de. WooCommerce not needed (declare compatibility only).

Reference: **VECTOR** — https://vectorinc.co.jp/ (Japanese public-relations group). Secondary: none. Measurements: `brand/reference-tokens.md` (cited below as `tok(a)` … `tok(g)`); screenshots `brand/ref/vec-first.png` (first screen), `brand/ref/scroll-vec-intro.png` (intro + Business Domain cells), `brand/ref/scroll-vec-kpi.png` (Corporate Performance band). We borrow structure, techniques, colour relationships and the key-visual concept. We do **not** copy VECTOR's photos, video, copy, slogan wording, logo or world-map texture.

One call-to-action wording everywhere (header pill, hero card, retainers, request band, footer, inner pages): **"Request a proposal"** → `/contact/` (on Home the header pill scrolls to `#request`, whose button goes to `/contact/`). Localised once in brand.md and reused verbatim.

---

## 0. Fixed brand facts (identical on every page and in all five languages)

| Fact | Value |
|---|---|
| Name | Kataribe Partners ("kataribe" = a storyteller who carries news from place to place) |
| Founded | **2014** by Mireille Dufort, formerly an editor at a trade weekly for the energy sector |
| Office | Westersingel 48, 3014 GT Rotterdam, Netherlands (fictional address; local address formats per language in brand.md) |
| Office hours | Mon–Fri **09:00–17:30** (CET) |
| Press desk in a coverage week | Mon–Fri **08:00–18:30** (CET) |
| Phone / mail | +31 10 000 0414 · hello@kataribe.example |
| Team | **12** people; 7 named below |
| Sectors | **5**: climate & energy · health & life sciences · food & consumer · mobility & cities · software & B2B |
| Reply | proposal call within **2 working days**; written proposal within **5 working days** |
| Retainer term | **3-month** terms; either side ends with **30 days'** notice before a term closes |
| Currency | **EUR, excluding VAT**, in every language (no converted prices) |

Named people (7) — text list, never a portrait grid:
1. **Mireille Dufort** — founder, managing partner; climate & energy desk.
2. **Tomasz Wierzbicki** — partner, health & life sciences.
3. **Adaeze Okonkwo** — account director, food & consumer.
4. **Lucas Brandão** — press lists and research lead; owns the 312-name sector lists.
5. **Hannah Lindqvist** — writer: releases, briefings and op-eds.
6. **Samir Haddad** — media-training lead; prepares spokespeople before Thursday.
7. **Jet van der Berg** — client desk; books proposal calls and keeps the coverage log.

The coverage week (fixed five days; Home `#week`, Week page, Retainers page, five languages):
- **Mon — List.** Agree the angle; Lucas builds the named press list for this story (about **25** reporters who cover the sector).
- **Tue — Release.** Hannah finalises the release and a one-page background note; embargo time set.
- **Wed — Pitch.** Personal emails and calls to each reporter on the list, never a blast.
- **Thu — Interviews.** Spokesperson interviews and follow-ups; Samir sits in.
- **Fri — Log.** The coverage log (who wrote, who will, who passed) and a **30-minute** debrief call.

Retainers (6 rows; Home `#retainers`, Retainers page, Terms; all languages identical):

| # | Retainer | What it includes | Price (EUR, excl. VAT) |
|---|---|---|---|
| 1 | Brief session | 60-minute call, written brief and proposal within 5 working days | Free |
| 2 | Quarterly retainer | one coverage week per quarter, coverage log, 3-month minimum | 2,400 / month |
| 3 | Monthly retainer | one coverage week every month, one sector-briefing pitch per quarter | 4,600 / month |
| 4 | Sector programme | two coverage weeks a month, spokesperson preparation, monthly reporter round-table | 7,900 / month |
| 5 | Launch week | one coverage week, no retainer | 6,200 one-off |
| 6 | Media training | half day, up to 3 spokespeople, recorded practice interviews | 1,800 per session |

Copy never promises coverage, placements or outlets. The promise is: a named list, personal pitches, prepared spokespeople, and an honest log. No real media outlets, people or brands are named.

Figures (KPI band; "in 2025"; identical everywhere): **312** reporters on our sector lists · **46** coverage weeks run · **12** people · **5** sectors · **18** retainer clients · **2** working days to a proposal call.

Stories (3, fictional; Home `#stories`, posts 2–4, About):
1. **Heat-pump maker, Ghent** — Launch week for a quieter outdoor unit: 24 reporters on the list, 9 interviews on Thursday. Photo H09.
2. **Clinical research lab, Leiden** — Monthly retainer; a trial-result announcement under embargo, with a one-page plain-language note. Photo H10.
3. **Bakery group, Antwerp** — Quarterly retainer around three neighbourhood openings; local and food press, one coverage week per opening. Photo H11.

Newsletter: **Coverage Notes** — one email a month, one page: what the five sector desks are watching and which coverage weeks are still open (waitlist for 2027 retainer places).

---

## 1. Signature techniques (three, all obvious at a glance)

### T1. Three-line left statement on a full-bleed photograph, with a docked white card overlapping the hero foot (VECTOR first screen, `ref/vec-first.png`, `tok(b)(c)(d)(e)`)
- **Reference**: below a white 77 px header, a full-bleed moving image fills the window. A three-line slogan in very large bold type (≈ 96 px, weight 700) is set flush left at x ≈ 65 px (4.5% of 1440), lines spanning y ≈ 300–600. At the bottom edge two white cards (radius 10 px, soft shadow) sit side by side: a narrow left card (x 80–383) with a pill tab toggle "NEWS / IR" (active navy, inactive grey) and a wide right card (x 399–1360) with a thumbnail, date, a navy label rectangle, a headline and a round outline arrow. The cards start at y ≈ 797, overlapping the image foot by about 100 px.
- **Home, block 1 (`#top`)**: exactly this composition. Geometry at 1440×900: header 77 px; Cover height `calc(100svh - 77px)`, min 640 px; slogan left 4.5% (`padding-left: max(24px, 4.5vw)`), vertically centred in the part of the Cover above the card (`padding-bottom: 120px`). Card row: container 1280, left card 300 px wide, gap 16 px, right card fills the rest; both height 200 px, `margin-top: -100px` (flow, not absolute), `border-radius: 10px`, `background: #fff`, `box-shadow: 0 8px 32px rgba(34,34,34,.10)` (tok(d) "soft shadow on the docked card").
- **Must not be diluted**: slogan stays three lines, left-aligned, ≥ 5.5rem at 1440 (never centred, never moved into a box); the card row must visibly straddle the photo foot (≈ 100 px over the photo, ≈ 100 px below it); the tab toggle keeps the pill with a filled navy active half.
- **Inner pages**: every inner page head (About, The Week, Retainers, News index/archive/category/tag, Newsletter, Contact) = a 1440×440 full-bleed photo band with a two- or three-line left statement (Hanken Grotesk 700, `clamp(2.4rem, 4.6vw, 4.25rem)`, charcoal on the bright left part of the photo) and a **docked card** overlapping its foot by 60 px: left part the same pill toggle (two page-local anchors, e.g. About: "Studio / People"; Retainers: "Fit / Prices"; News: "Notes / Stories" = category links), right part one summary line + the CTA pill. Thanks, Privacy, Terms: no photo; pale `#F4F4F4` band 280 px with the statement and the card overlapping its foot.

### T2. 3×3 brief-fit cells split by 1 px vertical ticks, one cell filled navy (VECTOR "Business Domain", `ref/scroll-vec-intro.png` lower half, `tok(c)(d)(f)`)
- **Reference**: heading left ("Business Domain", condensed 49 px 700), two lines of text and an outline pill "MORE →" under it in the left 5/12; on the right 7/12 a 3-column grid of plain labels (≈ 24 px regular), each label framed only by a 1 px vertical tick at its left and right edge (no top/bottom borders), row pitch ≈ 80 px; the first cell is filled solid navy with white text.
- **Home, block 3 (`#fit`) "Which brief suits us"**: left 5/12: section heading, 70-word paragraph, MORE pill (→ `#retainers`), then photo H03 (4:3, radius 0, width 100% of the column) under it. Right 7/12: 9 cells, 3 columns: **Product launch** (active, filled `#0C416F`, white) · Funding round · Research report · New site or opening · Founder profile · Expert commentary · Trade-show week · Partnership · Quiet period. Each cell: height 40 px, label Hanken Grotesk 400 1.5rem (24 px, tok(b) label size) centred, `#222`; ticks = `border-left/right: 1px solid #222` on a 32 px-tall inner span (ticks shorter than the row pitch, as on VECTOR); row pitch 80 px (`row-gap: 40px`); column gap 8 px. Under the grid one line in Hanken 1rem: "Product launch → usually the Launch week or the Monthly retainer." Each cell links to `#retainers`. Hover: background `#F4F4F4`, .3s ease (tok(g)).
- **Must not be diluted**: ticks are visible 1 px ink lines on both sides of every label; exactly one cell filled navy; no boxes, no icons, no card shadows.
- **Inner pages**: About (the 9 cells become the 5 sectors + 4 studio facts; active = "Climate & energy", the founding desk) · Retainers (the full 3×3 chooser at the top: each cell has a 1-line answer under the grid via `<details>`; active = Product launch) · News archive/category/tag (category and tag filter row as one row of tick cells, active = current) · Contact ("What is your news?" — 9 cells as `mailto:` subject links, active = Product launch) · Newsletter (one row of 5 tick cells = the 5 sector desks you can pick in the signup form's checkboxes, presentation only).

### T3. Full-bleed blue gradient figures band: five-step ascending bar glyph beside big condensed numerals that count up (VECTOR "Corporate Performance", `ref/scroll-vec-kpi.png`, `tok(a)(b)(f)(g)`)
- **Reference**: a full-bleed bright-blue gradient band (≈ 900 px tall at 1440), white condensed two-line heading top-left with a small subline; two large figures side by side, each with a five-bar ascending glyph (34 px bars, navy tints, tallest ≈ 220 px) and to its right a bold label above a huge condensed numeral with a small unit; under them a row of four smaller figures; faint world-map texture at ≈ 8%.
- **Home, block 5 (`#numbers`)**: band `linear-gradient(105deg, #4A97DB 0%, #278CF5 45%, #0080FF 100%)` (tok(a) #278CF5 → #0080FF; the lighter left stop matches the screenshot). Texture: **our own**, not a map — vertical newspaper-column rules, 1 px white at 8% opacity every 96 px, drawn with `repeating-linear-gradient(90deg, rgba(255,255,255,.08) 0 1px, transparent 1px 96px)`. Padding 120 px top / 110 px bottom. Heading "The year, / in numbers" Inter Tight 700 3.0625rem/1.2 white, subline Hanken 1.25rem white "What 2025 looked like at the studio". Two big figures centred in two halves (grid 2 × 6/12): bars 34 px wide, gap 12 px, heights 40 / 72 / 100 / 140 / 220 px, colours `rgba(12,65,111,.45)`, `.6`, `.72`, `.85`, `1` (navy tints, tok(f)), bottoms aligned to the numeral baseline; label Hanken 700 1.375rem white; numeral Inter Tight 600 **5.5rem** white, letter-spacing −0.03em, `class="sp-reveal sp-count"`; unit Hanken 700 1.375rem. Big figures: **312** reporters on our sector lists · **46** coverage weeks run. Row of four (4 × 3/12, margin-top 96 px): label Hanken 700 1.125rem, numeral Inter Tight 600 3.25rem, unit 0.9375rem: **12** people · **5** sectors · **18** retainer clients · **2** working days to a proposal call.
- **Must not be diluted**: this band is the one saturated area on the page and stays bright blue (not slate, not grey, not navy-only); numerals ≥ 5rem; bars are solid rectangles with radius 0.
- **Inner pages**: About (4-figure row on a shorter band, 420 px: 12 / 5 / 18 / 2014) · The Week (five day-figures on the band: 1 angle · ≈ 25 reporters · 1 release · Thursday interviews · 30-minute debrief — numerals only where numeric) · Retainers (2 / 5 / 3 / 30: working days to call, working days to proposal, months per term, days' notice) · Newsletter (1 email a month · 1 page · 5 desks). Bars glyph appears on each band; on Retainers/Newsletter the four small figures only, still on the gradient.

### Supporting details (not counted, but required)
- Outline pill "MORE" + thin long arrow: 1 px `#222`, radius 999 px, height 36 px, padding 0 22 px 0 32 px, Inter Tight 500 0.875rem uppercase, arrow = 40 px line + 6 px head (inline SVG, `currentColor`). Hover: fill `#222`, text white, .3s ease.
- 16:9 media with a white round button (VECTOR intro): white circle 110 px, navy `#0C416F` right-pointing triangle 34 px, no shadow; it is a link, not a video.
- Logo mark (ours): five ascending bars (the T3 glyph at 20 px tall, navy) before the wordmark.

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
- **What it shows**: a full-bleed moving image (company film) under a white header; three huge left-set lines of slogan in light grey-white; the news/IR tab card docked over the bottom edge with the latest dated release.
- **Story**: "spread good things through the world and make people happy" — a PR company carries its clients' news outward, and the docked card proves it is live (today's release sits on top of the film).
- **Signature motion**: the film moves behind still type; lines of the slogan appear in sequence on load; the card tabs swap by opacity (.3 s); further down, numerals count up once when their band enters.

### (2) Our transformation (PR agency, same composition, same motion idea, same image type: documentary photograph)
The film becomes **one high-key documentary photograph (H01) that moves by parallax**: a long white table by a tall window; on the right 55% of the frame **a consultant (woman, 40s, charcoal knit) marks names on a printed press list with a pen while the client (man, 50s, white shirt, sleeves rolled) reads a draft release at the same table**; papers, two cups, a closed laptop; every sheet blank or blurred. The left 45% is bright window light on a white wall — the calm field for the slogan. Story: "your news, carried by hand to the people who cover your field". The slogan sits left exactly like VECTOR's; the docked card carries **our** live item (the newest post, "Coverage weeks for 2027 are open") plus the brief/week toggle, as VECTOR's carries its latest release. Motion: photo parallax (instead of film), no reveal on the hero, tab swap by opacity .3 s.
Because the photo is high-key, the slogan is **charcoal `#3C4046` on light** (VECTOR is light on dark film); a left white scrim `linear-gradient(90deg, rgba(255,255,255,.55) 0 36%, rgba(255,255,255,0) 60%)` keeps contrast ≥ 7:1. This is the one deliberate inversion (design row requires high-key photography).

### (3) KV checklist (all implemented and visible on the Home first screen at 1440×900; mobile notes in §9)

| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Full-bleed moving image under the header | Full-bleed high-key photo: consultant marking a press list, client reading a draft release at the same table | Cover, full width, `calc(100svh - 77px)` (min 640) | `sp-parallax`, `--sp-par: 8%` (5% on < 782 px) | **H01** |
| 2 | Three-line left slogan, huge bold | "Your news, / placed where / it is read." Hanken Grotesk 700, 6rem/1.08 (96 px, tok(b)), charcoal | x 4.5%, vertical centre of the photo above the card | none (hero gets no reveal) | — |
| 3 | Docked left card with NEWS / IR pill toggle | Left card: pill toggle **BRIEF / WEEK** (navy active), below it the CTA pill "Request a proposal" | x 80–380 at 1440, overlapping the photo foot by 100 px | tab panels swap by opacity .3 s ease (CSS) | — |
| 4 | Docked wide card with dated release: thumbnail, date, navy label, headline, round arrow | BRIEF panel: newest post — thumbnail 210×130 (radius 8), date, navy label "Launch note", title "Coverage weeks for 2027 are open", 36 px outline circle arrow. WEEK panel: the five days in one line "Mon List · Tue Release · Wed Pitch · Thu Interviews · Fri Log" + link "How the week runs" → `#week` | x 396–1360, same row as #3 | same opacity swap | **H15** (post 1 thumbnail) |
| 5 | White header: logo left, nav, language pill, outline contact pill right | White 77 px header: bars mark + wordmark left, **centred** anchor menu (Brief · Fit · Week · Numbers · Stories · Retainers · People), outline pill "Request a proposal" right | top | none; header stays white (not transparent) | — |

Concrete scene, not "adapted, not copied": the implementer must generate H01 with the scene above. If Grok keeps putting the people in the centre after 4 tries, crop a wider render so the people sit in the right 55% (generate at 16:9 with "people on the right side of the frame, empty bright white wall on the left").

---

## 3. Colour (VECTOR relations; target similarity 8/10)

| Role | Hex | Source | Use | Share of Home |
|---|---|---|---|---|
| Base | `#FFFFFF` | tok(a) white | page ground, cards, header | ≈ 55% |
| Pale ground | `#F4F4F4` | tok(a) pale #F4F4F4 (intro ground) | intro block, pill inactive half, hover, Thanks/Privacy/Terms head | ≈ 12% |
| Card ground | `#F7F9FA` | tok(a) pale | story cards, table zebra | ≈ 4% |
| Ink | `#222222` | tok(a) ink | body text, section headings, ticks, outline pills | ≈ 6% (type) |
| Charcoal | `#3C4046` | design row charcoal family (plan palette "keshizumi") | hero/inner-head statements, footer ground, request card button hover, table head row | ≈ 8% |
| Navy | `#0C416F` | tok(a) navy (most-used value) | active pill, active cell, label rectangles, links, play triangle, logo bars, bar glyphs | ≈ 3% |
| Navy deep | `#0A4E83` | tok(a) deeper navy | link hover | < 1% |
| Blue band | `#4A97DB → #278CF5 → #0080FF` | tok(a) gradient band | T3 band only | ≈ 12% of page height |
| Focus | `#278CF5` | tok(a) | focus ring 2 px | — |

- Why charcoal is added: the design row fixes a charcoal family; VECTOR has no charcoal, so charcoal takes the role VECTOR gives to its black film field (the heavy dark mass): statements, footer, table head. Everything else is VECTOR's own codes, unchanged.
- Not beige: white and cool pale grey only.
- **First screen saturated share**: photo high-key neutral (whites, greys, charcoal clothing, one muted steel-blue shirt allowed) + navy active pill and label ≈ 1–3%. Gate `check-first-screen.py` ≤ **15%** (row limit 30%; VECTOR ≈ 0–3%). No blue band, no blue buttons in the first screen.
- Contrast: charcoal on white 10.6:1; white on navy 10.4:1; white numerals on `#278CF5` 3.4:1 — acceptable only for ≥ 1.375rem bold text (all band text is ≥ 1.125rem 700 or ≥ 3rem); body text never sits on the band.

---

## 4. Type (font_direction **sans**)

Latin: **Hanken Grotesk** (400, 700; slogan, statements, body, labels) and **Inter Tight** (500, 600, 700; section headings, nav, numerals, pills) — Inter Tight plays VECTOR's Roboto Condensed role, Hanken Grotesk its Roboto role (tok(b)). CJK: **Noto Sans TC** / **Noto Sans JP** (gothic sans, never Serif). Load all with theme.json `fontFamilies` + `fontFace` (woff2 in `assets/fonts/`), so the editor iframe and the front end show the same fonts; style.css `:lang()` rules → copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it. zh-TW/ja subsets: use the Hokuto/Hada replacement method (the zh subset script is known broken).

Stacks:
- en/fr/de display: `"Hanken Grotesk", "Helvetica Neue", Arial, sans-serif`; headings `"Inter Tight", "Hanken Grotesk", Arial, sans-serif`; body `"Hanken Grotesk", "Helvetica Neue", Arial, sans-serif`.
- zh-TW display/headings: `"Hanken Grotesk", "Noto Sans TC", "PingFang TC", "Microsoft JhengHei", sans-serif`; body: `"Hanken Grotesk", "PingFang TC", "Microsoft JhengHei", sans-serif` (no bundled Noto Sans TC, no Japanese font in the body stack — check-themes rule).
- ja display/headings: `"Hanken Grotesk", "Noto Sans JP", "Hiragino Sans", "Yu Gothic", sans-serif`; body: `"Hanken Grotesk", "Hiragino Sans", "Yu Gothic", "Meiryo", sans-serif`.
- CJK sizes ≈ 0.75× English for display/headings; body line-height 1.85; fr/de `hyphens: auto` on body and headings.

theme.json font sizes (tok(b) sources):
| Slug | Size | Use | Source |
|---|---|---|---|
| small | 0.875rem (14) / lh 1.75 | labels, nav, dates, captions | tok(b) small 14/24.5, nav 14 |
| base | 1rem (16) / lh 1.75 | body | tok(b) body 16/28 |
| medium | 1.375rem (22) / lh 1.6 | intro lead, card titles, big figure labels | tok(b) intro lead (scroll-vec-intro) |
| large | 2rem (32) / lh 1.75 | H1 on posts | tok(b) H1 32/56 |
| x-large | 3.0625rem (49) / lh 1.2 | section headings (Inter Tight 700) | tok(b) H2 49/58.8 |
| xx-large | 4.25rem (68) | inner page statements max | — |
| huge | 6rem (96) / lh 1.08 | hero slogan | tok(b) hero ≈ 96 px |
Max size 6rem ≥ 4.25rem ✓. Letter-spacing 0 everywhere except numerals (−0.03em). Section heading = Inter Tight 700 x-large + one subline Hanken 400 1.125rem `#222` directly under it (VECTOR "Corporate Performance / subline" pattern), left-aligned.

---

## 5. Home page

### Header (tok(c) 77 px, tok(f))
White, 77 px, 1 px `#E6E9EC` bottom rule, sticky at top (`position: sticky; top: 0`). Container full width with 35 px side padding (VECTOR logo at x 35). Left: logo mark + "Kataribe Partners" Hanken 700 1.25rem `#222`. Centre: anchor menu Inter Tight 500 0.875rem `#222`, gap 48 px (Brief `#brief`, Fit `#fit`, Week `#week`, Numbers `#numbers`, Stories `#stories`, Retainers `#retainers`, People `#people`) — one menu only. Right: outline pill "Request a proposal" (1 px `#222`, radius 999, 40 px tall, padding 0 22 px, Hanken 500 0.9375rem) → `#request` on Home, `/contact/` elsewhere. Language switcher (if present) as the VECTOR pill: 64×24, active half navy white text, inactive `#B9C7D3`. < 1024 px: menu button "Menu" + overlay with the anchors and the CTA.

### First screen composition (1440×900)
Header 0–77 · Cover (H01, parallax) 77–900 · slogan lines at y ≈ 300–600 · card row top at y ≈ 797 (100 px over the photo foot). Nothing else: no table, form, search, badge or centred heading.

### Block order (anchors in brackets)
| # | Block | Purpose | Layout and photos | Copy (en) |
|---|---|---|---|---|
| 1 | `front-hero` [#top] | KV, T1 | full-bleed H01 + slogan + docked card row (H15 thumb) | slogan 9 words + card 25 words |
| 2 | `front-brief` [#brief] | who we are | `#F4F4F4` band, padding 100 px (top 160 px to clear the card). Left 5/12: lead Hanken 700 1.375rem two lines "A PR studio for sector news. / One brief, one week, one honest log." + paragraph (90 words) + footnote 0.75rem "Figures on this page describe 2025." Right 7/12: H02 16:9, radius 0, white 110 px round button with navy triangle → `#week` | 100 words |
| 3 | `front-fit` [#fit] | which brief suits us, T2 | white; left 5/12 heading "Briefs we take" + subline + 70 words + MORE pill + H03 4:3; right 7/12 the 3×3 tick cells | 90 words |
| 4 | `front-week` [#week] | how a coverage week runs (horizontal strip) | white; heading "One coverage week" + subline + 50-word paragraph left 7/12. Then a **horizontal strip** across the 1280 container: a 1 px `#222` hairline across the full width at the top, five equal columns (gap 24 px), each: day pill (VECTOR tab pill, 88×32, inactive `#F4F4F4`, Wednesday — the pitch day — active navy) sitting on the hairline, photo 4:3 radius 0 (H04 Mon, H05 Tue, H06 Wed, H07 Thu, H08 Fri), title Hanken 700 1.125rem ("List", "Release", "Pitch", "Interviews", "Log"), 30-word text | 50 + 5 × 30 words |
| 5 | `front-numbers` [#numbers] | T3 figures band | full-bleed blue gradient, see T3 | 30 words |
| 6 | `front-stories` [#stories] | three stories | white; heading "Three recent weeks" + subline; 3 cards in a row (gap 24 px) on `#F7F9FA`, radius 10 px, padding 20 px: photo 3:2 radius 8 (H09, H10, H11), navy label rectangle (sector, white Inter Tight 0.8125rem, padding 2 px 12 px, radius 0), title Hanken 700 1.25rem, 50 words, 36 px outline circle arrow → post | 3 × 55 words |
| 7 | `front-retainers` [#retainers] | prices | white; heading "Retainers" + subline; 40-word paragraph; the 6-row table at **full container width**; under it the note on terms (3-month terms, 30 days' notice, no promised coverage) + MORE pill → Retainers page | 70 words + table |
| 8 | `front-people` [#people] | the people | `#F4F4F4` band; heading "Who you will talk to"; H12 21:9 full container width radius 0; under it 7 names in two text columns, each row: 1 px `#222` top rule, name Hanken 700 1.125rem, role Hanken 400 0.9375rem (no portraits, no grid of faces) + 50-word paragraph left | 50 words + 7 rows |
| 9 | `front-request` [#request] | the one CTA | full-bleed H13 photo band 560 px (`sp-parallax`, `--sp-par: 6%`); a white docked card (T1 echo, radius 10, shadow as hero, width 760 px, left-aligned at the container edge) overlapping the band's **top** edge by 100 px: heading "Request a proposal" Inter Tight 700 2.5rem, three lines (call within 2 working days · written proposal within 5 · no fee for the brief session), solid navy pill button "Request a proposal" → `/contact/` (hover charcoal) | 45 words |
| 10 | footer | links, address | charcoal `#3C4046`, white text; logo + 30-word line; links About, The Week, Retainers, News, Coverage Notes, Contact, Privacy, Terms; address, office hours, mail; small bars mark | — |

English Home ≥ 250 words (target ≈ 650) with narrative paragraphs in #2, #3, #4, #6 and #8. CJK Home ≥ 500 characters.

Home photo positions (14 ≥ 8): H01 · H15 (card thumb) · H02 · H03 · H04 · H05 · H06 · H07 · H08 · H09 · H10 · H11 · H12 · H13. No image twice.

### Comparison with the latest home pages
| # | Yanagi Hygiene | Kogarashi Inn | Okami College | Tabiji Clinic | **Kataribe Partners** |
|---|---|---|---|---|---|
| 1 | cover with skyline foot + month rail | cover split + clock | inset window hero + tagline box | inset rounded frame + notch card | **full-bleed photo, 3-line left slogan, docked two-card row** |
| 2 | sites | dark intro band | results | statement with photo pairs | **pale intro with 16:9 media + round button** |
| 3 | journeys band | news on mist | pacing (photo + column) | method | **3×3 tick-cell fit grid** |
| 4 | building section with pills | day-schedule lines | desks 2×2 cards + banner | proof | **five-day horizontal strip** |
| 5 | briefs gradient | rooms | fees table | fees | **blue figures band with bar glyphs** |
| 6 | request band | rates/booking close | faculty panel | news | **three story cards** |
| 7 | — | — | news | visit | **retainer table** |
| 8 | — | — | close | — | **people: wide photo + name rows** |
| 9 | — | — | — | — | **request card docked on a parallax photo** |
Why not alike: none of the four has a docked card row straddling the hero foot, a tick-cell grid or a bar-glyph figures band; Yanagi's shapes are a skyline silhouette, pentagon tab and cross-section; Kogarashi's are a clock and schedule lines; Okami's an inset window and 2×2 desks; Tabiji's a rounded inset frame with a notch. Our hero is full bleed (no inset frame, no split), and our middle is a horizontal five-day strip, not lines, pills or a timeline. Daichi's ring meters (used list) are circles; ours are VECTOR's ascending bars.

---

## 6. Inner pages (9 pages + post templates; landing rules: reachable from the footer, header keeps the CTA)

Every inner page: T1 head (photo band + left statement + docked card) → body → T3 band where listed → request card (Home #9 pattern, small: no photo, on `#F4F4F4`) except Thanks/Privacy/Terms.

1. **About** (`page-about`, code `about`): head H14 "Twelve people, / five desks, / one log." Body: founding story (2014, Mireille Dufort, trade-weekly editor; why named lists instead of distribution blasts) 3 paragraphs in a 7/12 column; T2 cells (5 sectors + 4 facts, active "Climate & energy"); T3 short band (12 / 5 / 18 / 2014); H12 (team, wide) after the cells with the 7 names and their one-line roles as rule rows; stories 1–3 as one-line links to posts 2–4.
2. **The Week** (`page-week`): head H02 "Five days, / one story, / every reporter by name." Body: the five days as the Home strip but expanded (each day 80 words, photos H04–H08 at 4:3 in the same horizontal strip, Wednesday active); T3 band with the day figures; FAQ (`<details>`, 5 questions: embargoes, what if nobody writes, interviews, the log, languages).
3. **Retainers** (`page-retainers`): head H16 "Pick the brief, / then the rhythm." Body: T2 full 3×3 chooser with `<details>` answers; the 6-row table full width; terms paragraph; T3 small band (2 / 5 / 3 / 30); media-training paragraph.
4. **News** (posts page, code `news`; `home.html`, `archive.html`, `category.html`, `tag.html`): head H01 "Notes from / the studio." (H01 is fine here; not on the same page as Home). Category/tag filter = one row of T2 tick cells (All, Notes, Stories; active navy). Posts as VECTOR news rows: thumbnail 210×130 radius 8, date, navy label rectangle = category, title, outline circle arrow, 1 px `#E6E9EC` rule between rows.
5. **Article** (`single.html`, code `article`): category label rectangle + date above the title (large 2rem Inter Tight 700), featured image 16:9 radius 0 full content width (1080), text column 720, footer of post = docked card (CTA). No sidebar.
6. **Coverage Notes** (`page-newsletter`, code `newsletter`, the waitlist): head H15 "One page / a month." Body: what an issue contains (5 desks, open weeks); T2 row of 5 sector cells; signup form (name, email, sector checkboxes; the form is plain HTML posting to the theme's mailto/thanks fallback, not in a first screen); T3 small band (1 / 1 / 5); privacy line.
7. **Contact / Request a proposal** (`page-contact`, code `contact`): head H13 "Tell us / the news." Body: T2 "What is your news?" cells (mailto subjects); address, office hours, press-desk hours, phone, mail in 2 columns; what happens next (2 working days → call; 5 working days → written proposal) as three short rule rows.
8. **Thanks** (`page-thanks`): pale head, "Thank you. / Jet will write back / within 2 working days." + office hours; MORE pill → The Week.
9. **Privacy** (`page-privacy`) and **Terms** (`page-terms`, includes the 6 retainers with prices, 3-month terms, 30 days' notice, "no promised coverage"): pale head + docked card, text column 720, no photo.

Posts (5; categories **Notes**, **Stories**; tags climate, health, food, coverage-week, media-training):
1. "Coverage weeks for 2027 are open" (Notes; coverage-week) — H15.
2. "A launch week for a quieter heat pump" (Stories; climate, coverage-week) — H09.
3. "Trial results, under embargo, in plain words" (Stories; health) — H10.
4. "Three openings, three weeks of local press" (Stories; food) — H11.
5. "What a half day of media training covers" (Notes; media-training) — H16.

---

## 7. Images (16 photos, Grok, one at a time; read each one)

Imagery: **photo** (stage-a IMAGERY: photo; VECTOR uses film and photographs, no illustration).

STYLE (exact string on every prompt):
`photorealistic high-key documentary photograph, bright soft daylight from tall windows, white walls and pale grey modern studio or meeting room, neutral palette of white, pale grey, charcoal and muted steel blue clothing, diverse adults, calm candid working moment, 35mm lens, natural skin texture, gentle shallow depth of field, uncluttered composition, all papers and screens blank or out of focus so nothing is readable, no text, no logos, no brand marks, no signage lettering, no Japanese elements`

| ID | Subject / composition | Ratio | Pages (each image at most once per page) | Home |
|---|---|---|---|---|
| H01 | KV: long white table by a tall window; consultant (woman, 40s, charcoal knit) marks names on a printed list with a pen; client (man, 50s, white shirt) reads a draft release beside her; two cups, closed laptop; people in the right 55%, left 45% empty bright wall | 16:9 | Home hero; News head | ✓ |
| H02 | consultant pointing at a white wall board with five columns of pinned blank cards and printouts, colleague watching | 16:9 | Home brief media; The Week head | ✓ |
| H03 | two people sorting blank index cards into rows on a pale table, 45° from above | 4:3 | Home fit; Retainers body (cells) | ✓ |
| H04 | Monday: hands with a pen ticking lines on a long printed list (unreadable), laptop edge | 4:3 | Home week; The Week strip | ✓ |
| H05 | Tuesday: two people editing a draft on a laptop side by side, over the shoulder, screen blurred | 4:3 | Home week; The Week strip | ✓ |
| H06 | Wednesday: consultant on a phone call standing at a bright window with a notebook | 4:3 | Home week; The Week strip | ✓ |
| H07 | Thursday: spokesperson answering a reporter who holds a small recorder, quiet bright room | 4:3 | Home week; The Week strip | ✓ |
| H08 | Friday: team of three at a table with a stack of printed clippings (unreadable) and a laptop, relaxed debrief | 4:3 | Home week; The Week strip | ✓ |
| H09 | story 1: engineer showing a heat-pump component to a visiting reporter in a bright small workshop | 3:2 | Home story 1; post 2 | ✓ |
| H10 | story 2: researcher in a lab coat talking with a consultant in a bright lab corridor | 3:2 | Home story 2; post 3 | ✓ |
| H11 | story 3: bakery owner at a counter with bread while a photographer sets a softbox, consultant beside | 3:2 | Home story 3; post 4 | ✓ |
| H12 | the team of seven around a long table in a bright studio, mid-conversation, wide | 21:9 | Home people; About body | ✓ |
| H13 | empty meeting room: long white table, two chairs pulled out, two cups, blank notebook, window light | 16:9 | Home request (parallax); Contact head | ✓ |
| H14 | the studio: open bright room with long desks, plants, bookshelves, two people far in the back | 16:9 | About head | |
| H15 | person reading a printed one-page briefing (blank) with coffee at a window seat | 4:3 | Home hero card thumbnail; Newsletter head; post 1 | ✓ |
| H16 | media training: spokesperson practising in front of a camera on a tripod while a coach gestures | 16:9 | Retainers head; post 5 | |

16 images, 0 cutouts, each ≤ 300 KB and ≤ 2000 px (webp), one readme line each (AI-generated, CC0). Every head band crops by `object-position` so the left 45% stays calm (regenerate H02, H13, H14, H16 with "subjects on the right side, empty bright wall on the left" if needed).
Per-page check: Home 14 (list in §5) · About H14, H12 · The Week H02, H04–H08 · Retainers H16, H03 · News H01 + post thumbnails (H15, H09, H10, H11, H16, each once) · Newsletter H15 · Contact H13 · posts one image each.

---

## 8. Scroll effects (sp-scroll; 3 kinds per page max)

| Effect | sp class | Where | Source and its motion | Values |
|---|---|---|---|---|
| Parallax (required) | `sp-parallax` on the Cover | Home #1 hero: background H01, foreground slogan (not in the moving layer) and the card row (outside the Cover); Home #9 request band: background H13, card outside the moving layer; inner heads H-bands `--sp-par: 6%` | VECTOR: the hero film moves behind still type (no parallax on the site; film motion → photo parallax) | Home hero `--sp-par: 8%` (≥ 782 px) / `5%` (< 782 px, kept on phones); request band `6%` / `4%` |
| Count-up | `sp-reveal sp-count` on each numeral | Home #5 (6 numerals), T3 bands on About / Week / Retainers / Newsletter | VECTOR: jQuery countup once when the band enters, ≈ 1.5–2 s, ease-out (tok(g)) | sp-count fixed 1.2 s easeOutCubic (closest built-in) |
| Rise in sequence | `sp-reveal sp-reveal--up`, parents `sp-stagger` | Home #2 media, #3 cell grid (parent stagger, each cell), #4 the five day columns (parent stagger), #6 story cards (parent stagger) | ours (VECTOR uses hover .3 s ease and opacity tab swaps; we keep that rhythm) | `--sp-dist: 24px`, `--sp-dur: .6s`, `cubic-bezier(.2,.7,.2,1)`, stagger step 0.08 s |
- Not on: hero (#1), the retainer table, forms, legal text, the request card's button.
- Tab swap in the hero card: CSS only (two radio inputs + labels, `:has()`), panels `opacity` .3 s ease, inactive panel `visibility: hidden` after the transition; no JS needed; no-JS shows BRIEF.
- Hover: cards and pills `.3s ease` (tok(g)); hover transitions carry `transition-delay: 0s`.

---

## 9. Responsive requirements

- **390 px first screen**: header 64 px (logo + "Menu" button; CTA pill moves into the overlay). Cover min-height 520 px, H01 `object-position: 70% center` so both people stay visible; slogan 2.6rem/1.1, left 24 px, three or four natural lines, in normal flow (no absolute positioning, no vertical text, no labels over the slogan). Card row becomes one column in flow with `margin-top: -48px`: left card (toggle + CTA, full width) then the panel card; nothing overlaps any text.
- **Figures band < 782 px**: big figures stack (bars 24 px wide, max 150 px tall, numeral 3.5rem); four small figures in 2 × 2.
- **Fit cells < 782 px**: 2 columns, label 1.125rem, ticks kept; ≥ 782 px 3 columns.
- **Week strip**: ≥ 1024 px five columns; 782–1023 px three + two; < 782 px one column, photo 16:9, hairline replaced by a 1 px rule above each day. No horizontal-scroll container (so no hidden reveals).
- **Retainer table**: at ≥ 782 px the table spans the **full container width** (1280 at 1440, container − 48 px at 800); `table-layout: auto`; the price column `white-space: nowrap; text-align: right; width: 1%; padding-left: 24px` — never clipped or wrapped; head row charcoal `#3C4046` white Inter Tight 600; rows 1 px `#E6E9EC` rules, zebra `#F7F9FA`. < 782 px: every table (retainers, Terms) stacks — each row a block, cells as `label: value` lines (labels via a visible `<span>` in markup, not CSS `content:`), price on its own line right-aligned.
- Stories cards: 3 → 1 column below 782 px. People names: 2 → 1 column.
- `html, body { overflow-x: clip }`; no horizontal scroll at 390, 800 or 1280.

---

## 10. Similarity table (target 8/10 vs VECTOR; values from `reference-tokens.md`)

| Dimension | VECTOR | Kataribe Partners |
|---|---|---|
| Ground / ink | white ≈ 55%, ink `#222` (tok a) | white ≈ 55%, ink `#222` |
| Main accent | navy `#0C416F` tab, active cell, links (tok a) | navy `#0C416F`, same roles |
| Hover navy | `#0A4E83` (tok a) | `#0A4E83` |
| Pale ground | `#F4F4F4` / `#F7F9FA` (tok a) | same two values |
| Saturated band | `#278CF5 → #0080FF`, ≈ 20% of height, KPI only (tok a) | `#4A97DB → #278CF5 → #0080FF`, ≈ 12%, figures only |
| Dark mass | black film field in hero | charcoal `#3C4046` statements + footer (high-key photo replaces dark film) |
| First-screen saturation | ≈ 0–3% | ≈ 1–3%, gate ≤ 15% |
| Body type | Roboto 16/28 400 (tok b) | Hanken Grotesk 16/28 400 |
| Section heading | Roboto Condensed 49/58.8 700 (tok b) | Inter Tight 49/58.8 700 |
| Hero slogan | ≈ 96 px, 700, three lines, left (tok b) | 6rem (96 px), 700, three lines, left |
| Nav | Roboto Condensed 14 (tok b) | Inter Tight 500 14 |
| Header | 77 px white (tok c) | 77 px white, sticky |
| Section padding | ≈ 100 px (tok c) | 100 px (figures band 120/110) |
| Container | ≈ 1280, 80–85 px inset (tok c) | 1280, 80 px inset |
| Intro split | 5/12 text + 7/12 media (tok c) | 5/12 + 7/12 |
| Cell grid | 3 columns, ≈ 80 px row pitch, 1 px ticks, active navy (tok c, f) | 3 columns, 80 px pitch, 1 px ticks, active navy |
| Radius | 0 cells/buttons-rect, 10 px cards, 999 px pills (tok d) | 0 cells/photos/labels, 10 px cards, 999 px pills, 8 px thumbnails |
| Shadow | only the docked card (tok d) | only docked cards `0 8px 32px rgba(34,34,34,.10)` |
| Hero overlap | card overlaps hero foot ≈ 100 px (tok e) | 100 px (inner heads 60 px, request card 100 px over the band top) |
| Media | 16:9 at 7/12 with white round play button (tok e) | H02 16:9 at 7/12, 110 px white button, navy triangle |
| Thumbnails | 2:1 white tile in news card | 210×130 (≈ 1.6:1), radius 8 |
| Decoration | pill tab toggle, MORE pill + long arrow, label rectangles, bar glyph, map texture 8% (tok f) | same toggle, MORE pill, navy label rectangles, bar glyph; texture = our column rules at 8% |
| Motion | tab opacity .3 s ease; count-up once ≈ 1.5–2 s; hover .3 s; no parallax (tok g) | tab opacity .3 s ease; sp-count 1.2 s easeOutCubic; hover .3 s; reveal-up .6 s 24 px; parallax 8% (required by rules) |
| Imagery | film + photographs (tok e) | 16 high-key documentary photos |

---

## 11. Home acceptance checklist

1. First screen 1440×900: white 77 px header with centred anchor menu and outline CTA pill; full-bleed H01 (consultant marking a press list, client reading a draft release); three-line charcoal slogan left at x ≈ 4.5%, ≥ 5.5rem; docked two-card row overlapping the photo foot by ≈ 100 px with the BRIEF/WEEK pill toggle (navy active) and the newest-post item (H15 thumb, date, navy label, title, circle arrow). No table/form/search/centred heading. `check-first-screen.py` ≤ 15%.
2. 390×844 first screen: no vertical or absolutely positioned labels over text; card row in flow below the slogan; auto-gates text-overlap passes.
3. T2: 3×3 tick cells with 1 px ink ticks on both sides of every label, exactly one navy cell, 80 px pitch, right 7/12 beside text + H03.
4. Week: five-day horizontal strip with a hairline, day pills (Wednesday navy), H04–H08, five titles List/Release/Pitch/Interviews/Log.
5. T3: bright blue gradient band, two five-bar glyphs with 5.5rem numerals 312 and 46, four small figures 12 / 5 / 18 / 2; numerals count up under `?sp-motion`.
6. Retainer table: 6 rows with the exact prices in §0, full container width at 800 and 1280, price column nowrap and right-aligned, stacked on phones.
7. People: H12 21:9 + 7 named rule rows (no portrait grid). Stories: 3 cards H09–H11 with navy sector labels.
8. Request: H13 parallax band with the docked white card and the navy "Request a proposal" button; the same CTA wording in the header and hero card.
9. ≥ 14 photo positions, none repeated; all photos same STYLE, no readable text/logos/broken hands.
10. `check-parallax.mjs`: hero and request band move ≥ 6 px on desktop and mobile, 0 with reduced motion; ≥ 3 reveals hidden before entry and at rest after; no transparent leftovers at the bottom.
11. Fonts: Hanken Grotesk + Inter Tight (+ Noto Sans TC/JP for zh-TW/ja headings) identical in editor and front end; max size 6rem.
12. Colours: white/pale grey ground, ink `#222`, navy `#0C416F` small, charcoal footer and statements, blue gradient only in the figures band; no beige.
13. Copy: ≥ 250 English words, narrative paragraphs in #2, #3, #4, #6, #8; facts and numbers match §0 exactly; no promised coverage, no real outlets or brands.
