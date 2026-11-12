# Meguri Waste — design spec (stage 1, design director)

Type: **landing** (one long conversion home with anchor menu + one repeated CTA "Set your schedule"). Industry: commercial waste collection on a fixed weekly schedule.
Primary reference: **https://www.daiseki.co.jp/** (home, /business/, /business/recycle/waste_oil.html). Tokens: `reference-tokens.md` (cited below as T(a)…T(g)). Screens: `ref/daiseki-*.png`.
**Imagery: illustration** (from stage-a IMAGERY). Style reference daiseki.co.jp watercolour; **we generate our own illustrations — never copy, trace or edit the reference's pictures, characters, compositions or logo.** Process pictograms are our own flat SVGs.
Font direction: **sans** (Latin headings + body sans; zh-TW / ja Noto Sans TC / Noto Sans JP 黑體; no Mincho/serif anywhere).
Similarity target: ~80% to the reference in palette, image treatment, motion, decoration and layout rhythm; copy, pictures and logo 100% ours.

---

## 1. Signature techniques (3, all visible at a glance, none may be softened)

### S1 — Panorama pan-strip with a person looking in (hero)
- Source: daiseki.co.jp home first screen (`ref/daiseki-first.png`): a full-bleed watercolour panorama 1440×640 (~2.25:1) directly under the two-tier header; a person in the foreground left, seen from behind, looking into a bright tidy scene; the catch line set on the picture in mixed weights; Ken Burns slow zoom.
- Ours (home section 1): one watercolour panorama **P01** at **2.4:1**, rendered **190vw wide** inside a native horizontal scroll-snap strip (`overflow-x:auto; scroll-snap-type:x proximity; scrollbar-width:none`, `tabindex=0`, `aria-label="Panorama of the loading dock, scroll sideways"`, ← / → buttons 44×44 slate-outline squares bottom-right). Strip height **640px** desktop (min 560px), 1440 ref = T(c). Coordinator in orange hi-vis vest seen from behind at the left 8–30%, looking along the dock.
- Five **day tags** (Mon–Fri) hang from five labelled bins along the dock at strip x 35%, 47%, 59%, 71%, 83%: HTML elements (editable text), 72×96 white paper tags, 1px #314A57 border, radius 0, a 6px teal hole circle at top, label Hanken Grotesk 600 15px + stream name 12px. Hook line: 1px #314A57 24px tall above each tag.
- Must not soften: panorama full-bleed edge to edge (no container, no rounded corners, no card frame); person large (figure ≥45% of strip height); headline overlays the picture (desktop); hero height ≥560px.

### S2 — Ruled section heads + flat pictogram line
- Source: daiseki service pages (`ref/daiseki-pictogram.png`, `ref/daiseki-flow.png`): h2 28px/600 with a full-width 1px slate rule below (padding-bottom 25px, margin-bottom 50px); h3 24px/500 with a 24×3 teal dash at left; flat grey/slate pictograms with one teal accent joined by long 2px slate arrows, teal drops as labels between.
- Ours (home section 4 "A collection day"): five pictograms 96×96 (notice-by-text, bins out, truck lift, weigh-in, report) in one row, joined by **2px #314A57 arrows** (arrowhead 8px) spanning the gap (≥120px at 1280), teal #22B0A4 drop/dot markers above the arrows with a small time label (05:30, 06:10, 06:25, 07:40, 09:00). Pictogram colours: slate #314A57 bodies, grey #9AA3A6 secondary, exactly one teal part each. Labels 15px/500 under each. Every h2 on the site uses the ruled head; every h3 the teal dash.
- Must not soften: arrows are long and dark (not dotted grey); pictograms flat (no gradients/shadows); rule spans the full 1200 container.

### S3 — Dissolving wash band (lead of every inner page and the home intro)
- Source: daiseki /business/ (`ref/daiseki-business-first.png`): text left on white (x 120), watercolour picture bleeding off the right edge and dissolving into white leftwards; page title with a 3px gradient hairline.
- Ours: band height 520px desktop / auto mobile; illustration occupies right **58%**, bleeds to viewport edge, mask `linear-gradient(90deg, transparent 0%, #000 38%)` on the image (left 38% dissolves to white). Text column left, max 520px, starts at container x 0. Under each page h1 a **3px hairline 120px wide, gradient #A8D26B → #22B0A4** (T(d),(f)). Primary button: slate #314A57, 266×61, radius 0, white 15px/500, teal chevron "›" right (T(c),(d)).
- Must not soften: the image must actually touch the right viewport edge; mask fade visible (not a hard edge); hairline gradient present.

Supporting (not counted): header utility row with outline boxes (teal-outline "Licence no. WC-2011-0418" box, red-outline #C62828 "Missed-pickup line +00 0000 0418" box, 4px radius), current nav item = filled slate tab (T(d), `ref/daiseki-first.png`).

### Continuation on inner pages (≥4; actually all 8 core pages)
| Page | S1 | S2 | S3 |
|---|---|---|---|
| Streams | mini pan-strip of 5 bins (P11 also wide 2.4:1, 360px tall) | ruled h2 + per-stream pictogram row | lead band P11 |
| A collection day | — | full 7-step pictogram line (two rows on desktop, vertical stack on mobile with down arrows) | lead band P12 |
| Weekly cover (pricing) | day-tag chips reused as plan markers | ruled h2 | lead band P13 |
| Sites (case notes) | — | ruled h2, mini 3-pictogram strip per case | lead band P14 |
| About | person-from-behind composition in P10 | ruled h2, timeline as horizontal pictogram line (2011/2015/2019/2024) | lead band P10 |
| Set your schedule (contact) | — | 4-step pictogram line "call → visit → schedule → first lift" | lead band P15 |
| Newsletter | — | ruled h2 | lead band P16 |

---

## 2. Key visual concept

**(1) Reference first screen.** A full-bleed watercolour panorama of a bright, green city on a bay with wind turbines; a woman in a straw hat seen from behind in the left foreground looks over it; the catch line ("treat things with care, and that wish builds the future") sits on the sky in mixed weights. Story: waste handled carefully becomes a clean working city. Signature motion: Vegas Ken Burns slow zoom (20 000 ms, ≈1→1.15) with a 3 000 ms blur cross-fade; header shrinks after 200px.

**(2) Our transposition.** Same composition, same motion idea, same imagery type (watercolour illustration): a watercolour panorama of a **commercial loading dock just after dawn**. A coordinator in an orange hi-vis vest, seen from behind at the left foreground, walks a facilities manager (side view, clipboard) along a row of five labelled bins toward a collection truck backing in on the right; pale office blocks with window dots and a far second truck in wet wash behind; pale cyan sky dissolving to white at the foot. Story: **"the collection that comes on the day you can plan around."** Motion: slow Ken Burns (CSS keyframe on the inner img, 20s ease-in-out alternate, scale 1→1.06) + `sp-parallax` on the strip + sideways pan of the strip itself. h1 on the sky: "A collection day / **you can plan around.**" — line 1 weight 400, line 2 weight 700 (mixed weights like the reference).

**(3) KV checklist** (all on the home first screen, all visible at 1280×800):
| # | 參考站元素 | 我們的對應 | 位置 | 動態 | 用哪張圖 |
|---|---|---|---|---|---|
| 1 | Full-bleed watercolour panorama, pale sky fading to white | Dock-at-dawn panorama, pale cyan sky → white at foot | Full width, 640px under header | `sp-parallax` `--sp-par:8%` (mobile 5%); Ken Burns 20s 1→1.06 | P01 |
| 2 | Person seen from behind in foreground, looking into scene | Coordinator in orange vest from behind + manager beside her | Strip x 8–30%, bottom-aligned, ≥45% strip height | static in picture; pans with strip | P01 |
| 3 | Catch line on the picture, mixed weights | h1 "A collection day / you can plan around." 400/700, on a translucent wash panel `rgba(255,255,255,.72)`, no border | Desktop: left, container x 0, top 120px of hero; Mobile: above the strip, in flow | none (no reveal in hero) | — (over P01) |
| 4 | Distant towers / turbines in pale wash | Pale office blocks + far truck in wet wash | Right 60% of panorama | pans with strip | P01 |
| 5 | Outline utility boxes + slate current tab | Teal-outline licence box, red-outline missed-pickup box, slate current tab | Header utility row, right | header shrinks >200px (sticky CSS; utility row hides) | — |
| 6 | Foreground greenery/flag accents along the shore | Five bins with hanging paper day tags Mon–Fri | Strip x 35–83% | strip scroll-snap sideways; ←/→ buttons | P01 (bins) + HTML tags |

---

## 3. Home (en) — block order (landing longform, anchor menu)
Anchor menu (the one top menu): Streams · A collection day · Weekly cover · People · Sites · **Set your schedule** (slate tab button). Repeated CTA "Set your schedule" → `#schedule` in sections 1, 3, 6, 9 (same label, same slate button).

| # | Section (anchor) | Purpose | Layout | Image | Copy |
|---|---|---|---|---|---|
| 1 | Hero pan-strip | KV, promise, CTA | S1 (see §2); below the h1: 1 sentence (22 words) + slate CTA + text link "See the week ↓" | **P01** | h1 + 22 words |
| 2 | Intro `#about` | Narrative | S3 dissolving wash band, text left (3 paragraphs, ≥25 words each, ~110 words total), image right bleeding | **P02** (bins with day tags close-up, morning) | 110 words |
| 3 | Streams `#streams` | Which streams a week can cover | Ruled h2; 5 ruled rows (1px #D5DCDD between), each: 64px pictogram left · stream name h3 (teal dash) · 1-line description · day tag chip right ("Mon"); right aside: P03 illustration 4:5 sticky-free, 360px wide | **P03** (driver lifting a 660L bin) | 5×20 words |
| 4 | A collection day `#day` | How a day runs | S2 pictogram line, 5 steps with times; under it 2-column paragraph (60 words) | SVG pictograms (not counted) | 60 words |
| 5 | Dock band | Atmosphere + parallax | Full-bleed `sp-parallax` band 560px (mobile 380px), caption box bottom-left: white panel 420px, 1 h3 + 30 words | **P04** (truck at the dock, wide 2.4:1) | 30 words |
| 6 | Weekly cover `#cover` | Prices | Ruled h2; full-width price rows (§8); small P05 illustration 1:1 360px at right of intro paragraph | **P05** (bin store with sorted containers) | intro 35 words + rows |
| 7 | People `#people` | Trust | Two horizontal rows (not a grid): image 3:2 520px left / text right, then mirrored; name, role, 45-word quote each; line "and five more on the about page" | **P06** (Mara at a site walk), **P07** (Tomás at the truck cab) | 2×45 words |
| 8 | Sites `#sites` | Proof | Ruled h2; 2 case-note rows: image 1.45:1 360×248 left (T(e) card ratio), date + outline tag chips, title, 25 words, teal circle-arrow Ø24 corner | **P08**, **P09** (case posts' featured images) | 2×25 words |
| 9 | Set your schedule `#schedule` | Conversion | S3 band (pale wash right) : left = h2, 3 short facts (hours, response time, first lift within 10 working days), slate CTA to /set-your-schedule/, phone; below a separate white sub-band "Collection notes by email" with newsletter slot (§11) | **P10** (coordinator on phone at a desk window, morning) | 60 words |
| — | Footer | | Slate #314A57 band, white text: logo, address, hours, licence box (teal outline on dark), links (privacy, terms, newsletter), no form | — | |

Home illustrations: P01–P10 = **10 image positions** (≥8). Home English total ≥ 400 words; narrative paragraphs: section 2 ×3, section 4, section 9 (≥3 of ≥20 words).

### First-screen composition (1280×800)
Header 106px (utility row 55 + nav 51, T(c)) → hero strip 640px fills to ~746px; h1 at container left, top ~180px from page top; 72px (4.5rem) mixed weights #314A57; panel `rgba(255,255,255,.72)` padding 32/40, max-width 640; CTA under it. Day tags visible right half. ←/→ buttons bottom-right at container edge. No table, no form, no search box in the first screen.
Mobile 390×844: header 56px (logo + menu button; utility boxes move into the menu drawer) → h1 block in normal flow on white (2.75rem, 2 lines each max 3 lines) + sentence + CTA → strip 320px tall (P01 at 2.4:1 → 768px wide scroller) → day tags as a **static chip row under the strip** (5 chips 56px, horizontal flex wrap) — **no absolute tags, no vertical text, nothing overlaps text at 390px**.

### Home block order vs recent themes (must differ)
| # | Gaku Frames | Himuro Gelato | Tochi Academy | Haru Allergy | **Meguri Waste** |
|---|---|---|---|---|---|
| 1 | framed-window hero | KV hero | KV + slider | pinned photo + poem veil | **horizontal pan-strip panorama with day tags** |
| 2 | intro | intro | college narrative | edge portraits | **dissolving wash band intro** |
| 3 | mouldings masonry | pinned flavour viewer | cohort cards | method band | **ruled stream rows w/ pictograms** |
| 4 | framed parallax band | dark grain process band | ticker | slate parallax case band | **pictogram arrow line (timed)** |
| 5 | alternating mount rows | price list | horizontal term timeline | voice slider | **full-bleed dock parallax band** |
| 6 | price table | people rows | parallax evening band | visit | **weekly cover price rows** |
| 7 | … | parallax visit band | date-stamp band | — | **two mirrored people rows** |
| 8 | | journal | instructors list | | **case-note rows** |
| 9 | | newsletter | journal / fees | | **schedule CTA wash + newsletter slot** |
Reasons: the only theme with a horizontally scrollable first screen; process told by flat pictograms + arrows (none of the four uses pictograms); lead sections dissolve into white instead of framed/pinned photos; dark bands are avoided entirely except the footer (Himuro/Haru used dark process/case bands).

---

## 4. Inner pages (≥8 + 1 post)
All open with an S3 wash band (h1 + hairline + 1–2 sentence lead) except legal/thanks pages (plain white head with hairline).
1. **About** `/about/` — **P11** lead. History 2011 founding at Port Alder harbour, 4-point pictogram timeline (2011 first truck, 2015 food-waste route, 2019 weighbridge reports, 2024 fifth stream), 7 people as ruled list rows (name · role · 1 line), the licence, depot address.
2. **Streams** `/streams/` — **P12** lead (wide 2.4:1 mini pan-strip 360px). One section per stream (5): pictogram, what goes in / stays out (two short lists), container sizes, collection day.
3. **A collection day** `/collection-day/` — **P13** lead. 7-step pictogram line with times (05:30 text notice → 05:45 depot leave → 06:10 bins out check → 06:25 lift → 06:40 contamination photo if needed → 07:40 weigh-in → 09:00 report email). Missed-pickup rule: re-collection same or next working day.
4. **Weekly cover** `/weekly-cover/` — **P14** lead. Full price table (§8), what is included, contract terms (monthly rolling, 30 days notice).
5. **Sites** `/sites/` — **P15** lead; 3 case notes (§8) as long rows with mini 3-pictogram strip each.
6. **Set your schedule** `/set-your-schedule/` (contact) — **P16** lead; 4-step pictogram line; address, hours, missed-pickup line, **contact form slot** (§11).
7. **Collection notes** `/newsletter/` — **P17** lead (inbox + calendar on a desk, watercolour); waitlist/early-access for the route-day alerts; **newsletter slot**.
8. **Site notes** `/site-notes/` — posts page (role `posts`, empty content).
9. **Privacy** `/privacy/`, 10. **Terms** `/terms/`, 11. **Thanks** `/thanks/` — plain text pages (no reveal).
Posts: 2 case-note posts (featured P08, P09) + 1 note post "Why your bins get a day tag" (featured **P18**), each with category "Site notes" and tags (food-waste, recycling, offices).
Templates: front-page, page, single, archive, category, tag (copy of archive, label TAG), index, 404, search.

## 5. Palette (T(a); reference hex kept, ±0)
| Role | Hex | Source | Share first screen |
|---|---|---|---|
| Base | #FFFFFF | ref ground | ~60% |
| Paper band | #F4F7F6 (ref #F5F5F5 shifted cool, ≤2% L) | ref rows | ~6% |
| Wash | #DCEBEB → #FFFFFF (picture sky) | ref sky ~#BFE8F2, lightened +5% & toward patina for the plan hex | ~18% |
| Main ink / slate | **#314A57** | ref primary slate (nav tab, rules, arrows, buttons, footer) | ~6% |
| Patina | #4E6562 | plan row hex (secondary headings, tag text, footer sub-band) | ~3% |
| Accent teal | **#22B0A4**, light #5EC5BD | ref accent | ~3% |
| Hairline gradient | #A8D26B → #22B0A4 | ref yellow-green→teal hairline | <0.5% |
| Alert red (outline only) | #C62828 (ref #DB0A0A −5% L for AA on white) | ref helpline box | <0.5% |
| Text | #2B3335 (ref #333 tinted cool) | | — |
| Rule grey | #D5DCDD | ref #ccc/#e2e2e2 | — |
Kept: reference slate/teal relationship. Plan row #4E6562 used as secondary, not dominant. No cream/beige.
**First-screen saturated share: target ≤12%, hard cap 15%** (`scripts/check-first-screen.py`); the orange vest and red lid tag in P01 are small (<2%).

## 6. Type (sans; T(b))
- Latin headings: **Hanken Grotesk** (400, 500, 600, 700). Latin body: **Instrument Sans** (400, 500, 600).
- Stacks — display: `"Hanken Grotesk", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`; body: `"Instrument Sans", system-ui, -apple-system, "Segoe UI", sans-serif`.
- `:root:lang(zh-TW)` display: `"Hanken Grotesk", "Noto Sans TC", sans-serif`; body: `"Instrument Sans", "PingFang TC", "Microsoft JhengHei", sans-serif` (no bundled zh/ja in body, per repo contract). `:root:lang(ja)` display: `"Hanken Grotesk", "Noto Sans JP", sans-serif`; body: `"Instrument Sans", "Hiragino Sans", "Yu Gothic", sans-serif`. No serif/Mincho.
- Load all via **theme.json fontFamilies + fontFace** (woff2 in assets/fonts, subset Noto Sans TC/JP to used glyphs with the Hokuto/Hada workaround); copy shared/inc/editor-lang.php and require it (style.css uses `:lang(`). Editor = front end.
- Sizes (theme.json): hero `4.5rem` (72px; clamp(2.75rem, 6vw, 4.5rem)) — largest ≥4.25rem; page h1 `2.5rem` w300 (ref 32px w300 scaled for Latin); h2 `1.75rem` (28px) w600, padding-bottom 25px, margin-bottom 50px, 1px #314A57 rule; lead h2 `1.5rem` w300 lh1.8; h3 `1.5rem` w500 ls .075em(1.2px) padding-left 40px with 24×3 teal dash; card title 1.125rem w500; body 1rem/1.8 w400; small .8125rem; tag chip 11px. No uppercase transforms. zh/ja sizes ×0.75 of Latin hero (mobile clamp min 2.25rem), body lh 1.85; fr/de `hyphens:auto`.

## 7. Spacing, radius, decoration (T(c),(d),(f))
Container 1200px (wide 1320 for strip controls). Section padding 100px top/bottom desktop, 64px mobile. 3-up gap 60px. Buttons 266×61 radius 0. Radius 0 everywhere; exceptions: utility outline boxes 4px, pictogram badges circle. No shadows; cards 1px #E2E2E2 border. Decorations: 3px gradient hairline under page h1, 1px slate h2 rule, 24×3 teal h3 dash, teal circle-arrow Ø24 at card corners, dotted teal connectors in pictogram lines, outline tag chips (1px #314A57, 11px, padding 2/8) in dated rows, link boxes 1px #CCC with teal "›" right.

## 8. Fixed facts (brand.md must match everywhere, all 5 languages)
- Name Meguri Waste. Founded **2011**. Depot: **Unit 4, Quay Road Yard, Port Alder** (fictional, international-neutral). Licence no. **WC-2011-0418**.
- Hours: collection window **Mon–Fri 05:30–18:00**, **Sat 06:00–12:00**; customer desk **Mon–Fri 08:00–17:30**; missed-pickup line answered **Mon–Sat 06:00–18:00**, re-collection same or next working day. First lift within **10 working days** of a site visit.
- Streams (5) & default days: General waste — Mon/Thu; Mixed recycling (paper, card, cans, plastics) — Tue; Glass — Wed; Food & organics — Mon/Wed/Fri; Confidential paper — Fri (fortnightly).
- Weekly cover (6 rows, EUR, ex VAT): Starter — 1 stream, one 660 L bin weekly **€48/week**; Core — 3 streams **€96/week**; Full week — 5 streams **€158/week**; Food daily add-on (3 lifts/week) **€34/week**; Extra lift (any stream) **€22/lift**; Confidential console (240 L, fortnightly shred) **€14/month**. Monthly rolling, 30 days' notice, no setup fee for sites under 8 bins.
- People (7): **Mara Okafor** — founder & site coordinator; **Tomás Ferreira** — route lead, north round; **Ines Lindqvist** — customer desk; **Rafael Duarte** — driver; **Priya Nair** — weighbridge & reports; **Jonas Becker** — fleet & maintenance; **Amina Yusuf** — contamination checks & training.
- Case notes (3): Alder Quay office tower (14 floors, moved to 4 streams, Tue/Thu); Linden Street food hall (22 stalls, daily food lift 06:10); Northgate medical practice (confidential paper + glass, fortnightly). No percentages or guaranteed savings claimed.
- Collection day (5 steps on home / 7 on inner page; times as in §4 item 3).
- A day / daily routine paragraph in brand.md (repo contract).

## 9. Price table responsive rules
- ≥782px: table/price rows **full width of the 1200 container**; columns: plan (h3 + 1 line) · included streams (chips) · **price column `white-space:nowrap; text-align:right; min-width:9ch`**, never clipped (auto-gates 800 and 1280). Rows separated by 1px #D5DCDD, price Hanken 600 1.5rem #314A57.
- <782px: every table becomes stacked cards (each row = block, label above value, price right-aligned on its own line). No horizontal scroll inside tables.
- Any other table (streams “in / out”, hours) also stacks on mobile.

## 10. Images (18 illustrations, 0 cut-outs, ≤300 KB, ≤2000px, webp)
**STYLE (single string, every image):**
`soft watercolour and gouache illustration on lightly textured paper, wet-edge washes, pale cyan-to-white sky, muted patina greens and slate blues, small warm accents only (one hi-vis orange vest, a red lid tag), simplified flat buildings with window dots, faint pencil under-drawing, thin soft grey outlines, small simple faceless people seen from behind or side, high-key and bright, generous empty white paper, calm documentary scene of commercial waste collection, international-neutral modern city, no Japanese elements, no text, no letters, no numbers, no logos, no brand marks` — style reference daiseki.co.jp, generated by us, never copying the reference's illustrations.

| # | Subject / composition | Ratio | Page · block | Home |
|---|---|---|---|---|
| P01 | Dawn loading dock panorama: coordinator in orange vest from behind at left foreground, manager beside her with clipboard, five lidded bins in a row centre, truck reversing in at right, pale office blocks behind, sky → white at foot | 2.4:1 (2000×833) | Home · hero strip | ✔ |
| P02 | Close row of 4 bins with blank hanging paper tags, morning light, empty paper left | 16:10, subject right | Home · intro wash | ✔ |
| P03 | Driver lifting a 660 L bin onto a truck lift, side view | 4:5 | Home · streams aside | ✔ |
| P04 | Collection truck at dock, wide, workers small, long shadows | 2.4:1 | Home · parallax band | ✔ |
| P05 | Tidy bin store with colour-lidded containers, door open | 1:1 | Home · weekly cover | ✔ |
| P06 | Coordinator walking a site with manager, clipboard, side view | 3:2 | Home · people row 1 | ✔ |
| P07 | Route lead standing by truck cab door, morning | 3:2 | Home · people row 2 | ✔ |
| P08 | Office tower service yard with recycling cages | 1.45:1 | Home · site case 1 / post 1 featured | ✔ |
| P09 | Food hall back door, organics caddies being collected | 1.45:1 | Home · site case 2 / post 2 featured | ✔ |
| P10 | Coordinator at a desk by a window with phone and wall calendar, from behind | 16:10, subject right | Home · schedule CTA band | ✔ |
| P11 | Depot yard with two trucks and a small office, early morning, person from behind | 16:10, subject right | About · lead | |
| P12 | Five sorted streams’ containers in a row on a pavement (wide) | 2.4:1 | Streams · lead mini strip | |
| P13 | Truck route through quiet streets at dawn, small truck far | 16:10 | Collection day · lead | |
| P14 | Facilities manager reading a weekly sheet beside bins | 16:10 | Weekly cover · lead | |
| P15 | Medical practice side entrance with confidential console being wheeled | 16:10 | Sites · lead + case 3 | |
| P16 | Site visit: two people looking at a bin room plan on a clipboard | 16:10 | Set your schedule · lead | |
| P17 | Desk with open laptop (blank screen), calendar and coffee, window light | 16:10 | Newsletter · lead | |
| P18 | Hand clipping a blank paper tag onto a bin handle | 4:3 | Post 3 featured | |
No image repeats within one page. Pictograms (≈20 SVG) are separate, not counted, drawn in #314A57/#9AA3A6/#22B0A4.

## 11. Forms (contract v1 — `steps/form-contract-v1` exists)
- Copy `pipeline/assets/forms/shippress-forms.php` → `inc/`, CSS + editor JS → `assets/` unchanged; require in functions.php. No fake form, no mail backend, no plugin dependency, no import-time plugin check.
- **Contact** (`/set-your-schedule/`): after the 4-step pictogram line, a white section "Ask for a site visit" — PHP island `shippress_form_slot( kind=contact, fallback=<buffered literal mailto button "Email the customer desk" → mailto:desk@meguri-waste.example> )`. CF7 first, then WPForms; fallback keeps the mailto button (slate 266×61). Recommended CF7 fields (documented in readme, not required): name*, company / site name*, email*, phone, site address, streams (checkboxes), bins per week (select), message (textarea).
- **Newsletter page** (`/newsletter/` "Collection notes"): standalone waitlist/early-access page; slot `kind=newsletter`, email `desk@meguri-waste.example`, label `forms_email`, submit `forms_subscribe`, notice `forms_mail_notice`, subject `forms_mail_subject`. MailPoet (explicit ID) → MC4WP → optional dedicated CF7/WPForms ID via `shippress_form_id`. No plugin: required `type=email` field + submit, native mailto POST, notice visible: "Opens your email app. Send the request to join; you are not on the list yet."
- **Home** section 9 sub-band "Collection notes by email": same newsletter slot on white (#F4F7F6 band). **Footer: no form** (link only). Forms never in the first screen and **never carry sp-reveal** (neither the slot nor its parent group).
- Tokens (style.css): `--sp-form-accent: var(--wp--preset--color--slate)` (#314A57); `--sp-form-on-accent: #FFFFFF`; `--sp-form-radius: 0`; `--sp-form-focus: #22B0A4` (2px outline, offset 2px); `--sp-form-surface: #FFFFFF`; `--sp-form-text: #2B3335`. Inputs: 1px #9AA3A6 border, height 52px, 16px text; labels 14px/500 above. Error: #C62828 1px border + message 14px; success: teal #1E8F86 text with 3px left teal bar. Dark ground (footer slate, if ever used): surface `#26404C`, text #FFFFFF, accent #22B0A4, on-accent #0F1F26, focus #A8D26B. Test light + dark, 390px + desktop.
- i18n: semantic keys `forms_email`, `forms_subscribe`, `forms_mail_notice`, `forms_mail_subject`, plus `contact_email` (fallback button label), localised in en / zh-TW / ja / fr / de (localised rewrite, not literal); extract with `L10N_SEMANTIC=1`.

## 12. Scroll effects (sp-scroll; from stage-a candidates)
| Effect | Ours (class) | Applied to | Reference source (trigger / time / easing) |
|---|---|---|---|
| fadeInDown on blocks | `sp-reveal sp-reveal--down` (`--sp-dist:20px`, `--sp-dur:.9s`, cubic-bezier(.22,1,.36,1)) | home §2 text column, §3 each stream row, §5 caption box, §7 people text, §8 case rows; inner page sections after the lead band | daiseki: jQuery scroll listener, element 200px inside viewport (+100 mobile), `fadeInDown` 3s fill both, default ease |
| Flow steps | `sp-stagger` parent + `sp-reveal sp-reveal--down` on each pictogram step (0.12s step) | home §4 pictogram line; collection-day 7 steps; contact 4 steps | daiseki: static flow diagram; stagger is our motion for it |
| Ken Burns → parallax | `sp-parallax` | home §1 hero, §5 dock band; inner lead bands use none | daiseki Vegas: transition blur 3000ms, delay 10000ms, kenburns 20000ms linear zoom |
Header shrink >200px: CSS sticky (utility row collapses via `position:sticky` + scroll-state-free design: utility row simply scrolls away above a sticky nav row) — no JS listener. Smooth anchor: `html{scroll-behavior:smooth}` (ref 500ms swing). **Hero has no reveal.** No reveal on forms, price table rows, legal text. Hero strip children never get reveal (horizontal scroller).

### Parallax (required)
1. **Home §1 hero**: outer Group `.mw-hero.sp-parallax` (`overflow:clip`) → strip scroller → `figure.sp-parallax__layer > img` P01. `--sp-par: 8%` desktop, **5% mobile** (`@media (max-width:781px){--sp-par:5%}`). Foreground = h1 panel, CTA, day tags, ←/→ buttons — **not inside the moving layer** (tags are siblings positioned over the scroller on desktop; static row on mobile). Inner img additionally has the Ken Burns keyframe (20s ease-in-out infinite alternate, scale 1→1.06) disabled by reduced-motion and `?sp-static`. Reference counterpart: Vegas Ken Burns 20000ms zoom.
2. **Home §5 dock band**: Cover block `.sp-parallax` with background P04, `--sp-par: 10%` desktop / 6% mobile, min-height 560/380px; foreground caption panel (white, 420px, bottom-left 48px inset) static.
Verification: `check-parallax.mjs` ≥6px shift desktop + mobile, 0 with reduced-motion.

## 13. Responsive musts
- 390px first screen: no vertical text, no absolutely positioned labels over text; h1 in normal flow; day tags as a static chip row; utility boxes inside the menu drawer.
- No horizontal page overflow at 390/1280 (the hero strip scrolls inside itself; `overflow-x:auto` on the strip only, body never wider).
- Price table ≥782px full width, price column nowrap right-aligned, unclipped; tables stack <782px.
- Pictogram lines: desktop row with arrows; <782px vertical stack, arrows rotated 90° (down), 48px gap.
- People rows stack image-first on mobile; S3 lead band: image on top (16:10, mask switched to bottom fade `linear-gradient(180deg,#000 60%,transparent)`), text below.

## 14. Similarity table (target ~80%)
| Dimension | Reference (token) | Meguri Waste |
|---|---|---|
| Ground / ink / accent | #FFFFFF / #314A57 / #22B0A4 (T(a)) | #FFFFFF / #314A57 / #22B0A4 (same) |
| Alert outline | #DB0A0A (T(a)) | #C62828 (−5% L for contrast) |
| Hero | full-bleed watercolour 1440×640 ~2.25:1 (T(c),(e)) | full-bleed watercolour 640px, 2.4:1, pannable |
| Hero catch | on picture, mixed weights, ~4.5–5rem (T(b)) | on picture, 400/700, 4.5rem |
| Header | 106px two-tier, outline utility boxes, slate current tab; shrink >200px (T(c),(g)) | same structure 106px; utility row scrolls away, sticky 51px nav |
| Body type | 16/1.8 w400 #333 (T(b)) | 16/1.8 w400 #2B3335 |
| h2 | 28/600, 1px slate rule, pb25 mb50 (T(b)) | identical |
| h3 | 24/500 ls1.2 teal 24×3 dash pl40 (T(b),(f)) | identical |
| Container / section pad | 1200 / ~100px (T(c)) | 1200 / 100px |
| Buttons | slate 266×61, radius 0, chevron (T(c),(d)) | identical, teal chevron |
| Radius / shadow | 0 / none (T(d)) | 0 / none |
| Card image | 360×248 1.45:1 (T(e)) | 360×248 1.45:1 case rows |
| Mask | left white-fade on band art (T(e)) | identical, 0→38% |
| Pictograms | flat slate/grey + teal, 2px slate arrows, teal drops (T(e),(f)) | identical palette and stroke |
| Hairline | 3px yellow-green→teal (T(d)) | 3px #A8D26B→#22B0A4, 120px |
| Motion reveal | fadeInDown 3s at 200px in (T(g)) | sp-reveal--down 0.9s, 20px |
| Hero motion | Ken Burns 20000ms, blur 3000ms (T(g)) | Ken Burns 20s 1→1.06 + sp-parallax 8% |
| Anchor scroll | 500ms swing (T(g)) | CSS smooth |
| Imagery | watercolour, pale sky, faceless small people (T(e)) | same style, our own scenes |

## 15. Home acceptance checklist
- [ ] Hero is a full-bleed watercolour panorama (P01) ≥560px, scrolls sideways (drag/keys/buttons), person from behind at left, 5 day tags visible on desktop, h1 4.5rem mixed weights on picture.
- [ ] All 6 KV checklist items visible in the first screen at 1280×800.
- [ ] Header: two tiers, teal licence box + red-outline missed-pickup box, slate tab for current anchor/CTA; one top menu only.
- [ ] Ruled h2s (1px slate full width) and teal-dash h3s throughout; 3px gradient hairline under inner page h1s.
- [ ] Pictogram line with long slate arrows + teal markers + times.
- [ ] ≥2 S3 dissolving wash bands on home (intro, schedule CTA) touching right edge with left fade.
- [ ] `sp-parallax` on hero and dock band pass check-parallax desktop + mobile; reduced-motion 0.
- [ ] sp-reveal--down + sp-stagger only; none in hero, forms, price rows.
- [ ] ≥8 home images (10 planned), all different; 0 cut-outs; ≥12 unique site images (18).
- [ ] Prices/hours/names identical to §8 on home, inner pages and five languages.
- [ ] Price rows full width ≥782px, price nowrap right, unclipped; stacked on mobile.
- [ ] 390px: no overlap, no vertical labels, no horizontal page overflow.
- [ ] First-screen saturated share ≤12% (cap 15%).
- [ ] ≥250 English words, ≥3 narrative paragraphs ≥20 words; CTA "Set your schedule" repeated in 4 places, same label.
- [ ] Newsletter slot in home §9 (not first screen, no reveal); contact slot with mailto fallback on Set your schedule page.
- [ ] Fonts via theme.json fontFace, identical in editor and front end (en + zh-TW).
