# Enishi Catering — design spec (stage 1, binding for implementation)
Row b10-3 · archetype editorial-magazine · hero full-bleed-photo · nav centred · first_screen full-bleed-photo-info-bar · page_structure **process-timeline** · font_direction **serif** · IMAGERY **photo** · type hospitality (business: WooCommerce-compatible, not required).
Main reference: DEAN & DELUCA catering — https://www.deandeluca.co.jp/catering/ (D&D). Second: Kitao private chef — https://kitao-chef.com/ (Kitao). Tokens: `brand/reference-tokens.md` (cited below as `D&D(b)`, `Kitao(d)` etc.). We borrow structure, techniques, colour relationships and the key-visual concept; all photographs and copy are our own; no D&D/Kitao assets, text, or logo.

Similarity target: **80 %** on palette, image presentation, scroll motion, decoration, layout. Do not "tone down" the three signatures below — they must be obvious at a glance.

---

## 1. Signature techniques (3, all on the home page, all continued on ≥4 inner pages)

### T1. Full-bleed photo hero with centred serif title, outlined translucent pill and a bottom info bar (D&D hero, https://www.deandeluca.co.jp/catering/)
- **D&D**: hero photo/video 1440×640, full-bleed, radius 0 (`D&D(c)`); centred white serif title 70px/1.0, weight 400, JP sub-line under it (`D&D(b)`); outlined pill at lower centre: 1px rgba(255,255,255,.9), bg rgba(255,255,255,.16), radius 999px, 16px caps ls 0.08em (`D&D(d)`); the page's only motion is the ambient footage (`D&D(g)`).
- **Ours (home block H1)**: Cover block, full-bleed 100vw, **min-height 720px desktop / 600px at 390px** (first screen incl. header ≈ 900px). Background `hero-banquet-hall.webp`. Title centred horizontally, vertical centre at ~45 % of the photo; pill button 64px below the sub-line; **info bar** pinned to the photo's bottom edge (inside the cover, full width, 76px tall, bg rgba(31,27,27,.55), white text, three facts separated by 1px rgba(255,255,255,.35) vertical rules + right-aligned text link "Start an enquiry →").
- Overlay scrim: Cover dim 30 % #1F1B1B plus a bottom gradient (transparent → rgba(31,27,27,.45) over the lower 35 %) so white text reaches ≥4.5:1.
- **Must not be diluted**: full-bleed (no container, no radius, no inset frame); title centred and white on the photo (not in a side column); the pill is outlined + translucent, 999px radius — not a filled block button; info bar sits ON the photo, not below it.

### T2. Vertical-caps course label in the left gutter + wide 2.31:1 photo (D&D course blocks)
- **D&D**: per course, `writing-mode: vertical-rl` EN caps label serif 44px / lh 30.8px / ls 1.76px plus JP 20px line, at x≈163 in the left gutter, ~346px tall, with a 1px vertical rule continuing below it; to the right a 1000×432 (2.31:1) photo, radius 0; below the photo title (serif 600 32px/48px ls 0.18em) + description + black outline/filled "view details →" button + #F2F2F2 tag chips (66×29, 12px) + hairline price lines (`D&D(b)(c)(e)(f)`).
- **Ours (home block H4 "Three ways we cater")**: three course rows on a white (#FFFFFF) band. Grid at ≥1024px: label column 120px (left edge at 9 % of viewport ≈ 130px at 1440) | photo 1000px max (≈70 % viewport) aspect **2.31:1** (`aspect-ratio: 1000/432`, object-fit cover, radius 0). Label: EB Garamond 44px (2.75rem) caps, lh 0.7, ls 0.04em, `writing-mode: vertical-rl`, colour #1F1B1B, + a second vertical line Karla 13px ls 0.2em #7A5E5E (e.g. "FOR THE OFFICE"), then 1px #1F1B1B vertical rule 120px long below. Under the photo, two columns (text 560px | price/action 400px): H3 EB Garamond 600 2rem/1.5 ls 0.18em, 2-sentence description, chips row (#ECE9E3, 12px Karla, padding 4px 14px, radius 0), right column hairline price list (1px #DDDDDD top/bottom, 2 lines, price right-aligned nowrap) + filled ink button "See the menu →" (#1F1B1B, white, 48px tall, radius 0, arrow right-aligned, like D&D's view-details control).
- Gap between course rows 120px (`D&D(c)`).
- **< 1024px**: label becomes horizontal (writing-mode horizontal-tb, 1.75rem caps) above the photo with a 48px horizontal 1px rule — **no vertical text on mobile**.
- **Must not be diluted**: vertical caps label at 44px with its rule, the very wide 2.31:1 photo (not 16:9, not 3:2), radius 0, chips.

### T3. Hairline-boxed STEP frames joined by diagonal hairlines, staggered (Kitao FLOW, https://kitao-chef.com/)
- **Kitao**: big serif caps section title "FLOW" (Cinzel ≈ 88px) + small spaced JP sub-line; then STEP boxes 450×208, 1px #999 border, transparent fill; the "STEP n" label (thin sans 56px) overlaps the box's top-left corner on a ground-coloured patch; boxes alternate left/right and are joined corner-to-corner by a 1px diagonal hairline (`Kitao(d)(f)`, ref/ref-kt-flow.png).
- **Ours (home block H3 "The engagement" — this is the row's process-timeline, horizontal)**: on greige ground, title "The Engagement" EB Garamond caps 5.5rem (88px) centred + sub-line Karla 13px ls 0.3em "— FROM THE FIRST TASTING TO THE NIGHT OF SERVICE —". Below, **five boxes in one horizontal row** across a 1200px container, **zig-zagging vertically**: boxes 1/3/5 top at y=0, boxes 2/4 top at y=96px; each box 208px wide × 200px, 1px #999999 border, transparent; adjacent boxes joined by an SVG 1px #999999 diagonal line from the lower-right corner of the upper box to the upper-left corner of the lower box (and vice versa) — the line is an inline SVG absolutely positioned **inside the timeline group only** (decorative, aria-hidden). "STEP 0n" label: Karla 300 2.5rem ls 0.02em #1F1B1B, overlapping the box top-left by −24px / −20px, with a #F5F3EE background patch (exactly Kitao's trick). Inside each box: stage name EB Garamond 1.375rem centred, time marker Karla 13px #7A5E5E ("3 weeks before"), one-line description 14px.
- Under the row: a single centred outline button (1px #1F1B1B, radius 0, padding 12px 40px) "How an engagement runs →" to /the-engagement/.
- **< 900px**: boxes stack in one column, alternating left-indent 0 / 18 % (Kitao alternate left/right), diagonal hairlines kept between them (SVG redrawn per breakpoint via two SVGs, `display` swap); this vertical form is allowed because page_structure = process-timeline.
- **Must not be diluted**: the overlapping "STEP" label, the hairline boxes (no fill, no shadow, no radius), the diagonal joins, the zig-zag. Not a card grid; not icons.

### Continuation to inner pages (required)
| Page | T1 | T2 | T3 |
|---|---|---|---|
| The Engagement (/the-engagement/) | page hero full-bleed photo 480px + pill + info bar (lead times) | each stage detail row uses a vertical caps label "TASTING", "SERVICE"… beside a 2.31:1 photo | full five-box timeline at top, larger (boxes 220×220) |
| Office Catering (/office/) | 480px full-bleed hero + pill "Order a lunch" | 3 vertical-caps menu rows (BREAKFAST / LUNCH / AFTERNOON) | 3-box mini timeline (order → delivery → collection) |
| Celebrations (/celebrations/) | 480px hero + pill | vertical-caps rows BIRTHDAYS / ENGAGEMENTS / FAMILY GATHERINGS | 5-box timeline (same five stages, celebration copy) |
| Banquets & Halls (/banquets/) | 480px hero + info bar (hall partners) | vertical-caps rows SEATED / BUFFET / CANAPÉ | — |
| Menus & Prices (/menus/) | — | vertical-caps label per price group in the left gutter of each table | — |
| Kitchen & Team (/team/) | 480px hero of the kitchen | — | 4-box "a service day" timeline (06:00 prep → 14:00 load → 17:00 set → 19:00 service) |
| Stories (/stories/) | — | each story opens with a vertical-caps label (place name) + 2.31:1 photo | — |
Inner-page titles also use Kitao's very large light serif caps (technique E, §5): page title EB Garamond 400 caps clamp(4.25rem, 8vw, 8.75rem), lh 0.9, on greige, left at 9 %.

---

## 2. Key visual concept

### (1) Reference first screen — concept, story, signature motion
D&D catering opens with a full-bleed autoplay video of a laid buffet: a wide stone platter of beef and grain salad, a terracotta dish of roasted vegetables, rows of small glasses of dessert on a dark slate surface, warm low light. Over it, the centred white serif "CATERING SERVICE" (70px) and a JP sub-line; at the lower centre an outlined translucent pill "▶ PLAY FULL VIDEO". Below, on white, a centred serif statement: "a moment that exists only at this time and in this place". **Story**: the table is set *for you*; the food arrives as a finished scene in your own room. **Motion**: slow, ambient footage behind a perfectly still centred title — nothing else on the page moves.

### (2) Our transformation (catering, same composition, same motion idea, same image type = photo)
The moment **just before the guests arrive**: a film-grain, high-key photograph looking down the length of a long banquet table in an empty hired hall — two staff in aprons laying linen and setting glassware, chairs still pushed in, afternoon window light, a platter being placed at the near end. Same composition as D&D: food/table filling the frame edge to edge, eye line low, centred title floating over the middle. Title "Set before they arrive." with sub-line "Catering for offices and family celebrations, from the first tasting to the night of service." Outlined translucent pill "See how an engagement runs" (D&D's "play full video" → ours "play the whole engagement", linking to the timeline H3). The ambient motion becomes a **slow parallax drift** of the hall photo (`sp-parallax`, `--sp-par: 8%`) under the still title. The D&D statement-under-hero becomes our H2 statement. The info bar carries the practical facts a catering client looks for first.

### (3) KV checklist (all six visible in the first screen or immediately at the fold; implement every row)
| # | Reference element | Our counterpart | Place | Motion | Which image |
|---|---|---|---|---|---|
| 1 | Full-bleed hero video of a laid buffet, edge to edge | Film-grain photo down a long banquet table in an empty hall, staff setting it | H1, 100vw × 720px (600px mobile) | `sp-parallax`, `--sp-par: 8%` (mobile 6%) | `hero-banquet-hall.webp` |
| 2 | Centred white serif title 70px + JP sub-line | "Set before they arrive." EB Garamond 400 4.5rem white, centred; sub-line Karla 1.0625rem white .9 | centre, title middle at 45 % of photo height | none (hero: no reveal) | (on hero) |
| 3 | Outlined translucent pill "PLAY FULL VIDEO" | Pill "See how an engagement runs" → #engagement; 1px rgba(255,255,255,.9), bg rgba(255,255,255,.16), 999px, 300×50 | lower centre, 64px under sub-line | hover: bg rgba(255,255,255,.32), .3s ease | (on hero) |
| 4 | Food platters as the subject (platter + glasses in foreground) | A staff hand placing a platter of roasted vegetables at the near end of the table, glass rows in focus | lower-left third of the hero photo (part of the image) | drifts with the parallax layer | `hero-banquet-hall.webp` |
| 5 | D&D fixed contact box (practical info always at hand) | Info bar on the photo bottom: "Lead time · 3 weeks for events, 48 h for office lunches" / "Guests · 12 to 180" / "Kitchen · Harbourside, within 40 km" + "Start an enquiry →" | bottom edge of hero, full width, 76px | none | (on hero) |
| 6 | White centred serif statement below hero | Centred EB Garamond 2rem/1.6 statement, 3 lines, on greige #F5F3EE | H2, directly below hero (visible at fold at 1440×900 top edge) | `sp-reveal--down` (24px, 1s, ease) | none |
All KV images are in §8 (marked HOME).

---

## 3. Colour
Relationship = D&D (photo supplies colour; ground + ink only) + Kitao (greige ground, one small warm accent). Accent swapped from Kitao gold #D0A050 to the row hex **#7A5E5E (muted red-grey)** in the same role and area (row note: "the palette hex as the one muted accent"); no gold, one accent only.

| Token | Hex | Share (page) | Source token | Use |
|---|---|---|---|---|
| ground | #F5F3EE | ≈ 55 % | Kitao(a) #F5F3EE (exact) | default page ground, timeline, statement, team, contact |
| surface | #FFFFFF | ≈ 20 % | D&D(a) #FFFFFF | course band (T2), price section, stories |
| ink | #1F1B1B | ≈ 10 % | D&D(a) #000/#111 (+warm, L+11 %) | headings, filled buttons, info-bar base |
| body | #333333 | ≈ 6 % | Kitao(a) #333333 (exact) | body text |
| accent | #7A5E5E | ≤ 3 % | row hex (replaces Kitao gold, same role/area) | time markers, small caps sub-lines, link hover, 1px underline under nav current item, price group numerals |
| chip | #ECE9E3 | ≤ 1 % | D&D(a) #F2F2F2 (−3 % L so it shows on greige) | chips |
| hairline | #DDDDDD | — | D&D(a)(d) #DDDDDD 1px | price rules, dividers |
| step line | #999999 | — | Kitao(d) 1px #999 | T3 boxes and diagonals |
| footer | #1F1B1B bg / #F5F3EE text | — | D&D fixed box #111 | footer only |
- Accent is **never** a background field larger than a chip; no full-bleed accent band.
- **First screen saturated pixels ≤ 12 %** (hard limit 15 %, `scripts/check-first-screen.py`): hero photo must be desaturated film-grain; if it measures >12 %, regenerate rather than overlaying colour.

## 4. Type (font_direction = serif)
- theme.json `fontFamilies` + `fontFace` (woff2 in `assets/fonts/`, OFL; verify licence): EB Garamond 400/500/600 (+400 italic), Karla 300/400/600, Noto Serif TC 400/600 (zh-TW subset), Noto Serif JP 400/600 (ja subset). Editor and front end load the same faces; style.css uses `:lang()` → copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it.
- Stacks:
  - heading: `"EB Garamond", "Noto Serif TC", "Noto Serif JP", Georgia, serif`; `:lang(zh-TW)` → `"EB Garamond", "Noto Serif TC", serif`; `:lang(ja)` → `"EB Garamond", "Noto Serif JP", serif`.
  - body: `Karla, "Helvetica Neue", Arial, sans-serif`; `:lang(zh-TW)` body → `Karla, "Songti TC", "PMingLiU", serif` (system faces, not the bundled heading font); `:lang(ja)` → `Karla, "Noto Serif JP", serif` (serif theme: CJK headings and CJK body stay a serif face; never mix in Noto Sans).
- Scale (theme.json fontSizes; max ≥ 4.25rem):
| Slug | Size | Weight / lh / ls | Source |
|---|---|---|---|
| display (inner page title) | clamp(4.25rem, 8vw, 8.75rem) | 400 / 0.9 / 0.02em caps | Kitao(b) 140px/126px |
| hero | clamp(2.75rem, 5vw, 4.5rem) — 4.5rem at 1440 | 400 / 1.0 / 0 | D&D(b) 70px/70px |
| section (caps titles) | clamp(2.5rem, 5vw, 5.5rem) | 400 / 1.0 / 0.04em caps | Kitao FLOW ≈88px |
| vertical label | 2.75rem (44px) | 400 / 0.7 / 0.04em caps | D&D(b) 44px/30.8px ls 1.76px |
| h3 course | 2rem | 600 / 1.5 / 0.18em | D&D(b) 32px/48px ls 5.76px |
| statement | 2rem | 400 / 1.6 / 0.02em | D&D statement serif |
| lead | 1.0625rem | 400 / 1.8 | D&D(b) sub-lead 16px |
| body | 1rem (16px) | 400 / 1.75 / 0.04em | D&D(b) 14px/24.5px ls .04em (lh ratio kept, +2px for Karla x-height) |
| small/chip | 0.75rem | 400 / 1.75 / 0.08em | D&D(b) chip 12px/21px |
| step label | 2.5rem Karla 300 | 300 / 1 / 0.02em | Kitao STEP thin sans |
- zh-TW/ja: heading sizes ×0.75, body lh 1.85; fr/de `hyphens: auto`.

## 5. Header, footer, layout tokens
- Header (nav "centered", D&D two-row): row 1 utility strip 38px #FFFFFF text 12px ("Office lunches need 48 hours' notice" left; language switcher + "Enquire" right); row 2 76px, logo wordmark "ENISHI" EB Garamond 1.75rem ls 0.2em **centred**, nav split: left (The Engagement, Office, Celebrations, Banquets), right (Menus & Prices, Team, Stories, Contact). Bottom 1px #DDDDDD. ≤ 1023px: logo left, hamburger right (one menu only).
- Content width 1200px; text column 760px centred (D&D(c)); outer padding clamp(20px, 5vw, 70px) (Kitao(c) 70px).
- Section vertical padding: 120px desktop / 72px mobile (D&D gap 120px, Kitao 100–160px).
- Radius 0 everywhere except the hero pill (999px) and team circles (50 %) (D&D(d), Kitao(d)). No shadows.
- Buttons: filled ink (#1F1B1B, white, 48px, radius 0, padding 12px 32px, arrow →) and outline (1px #1F1B1B, padding 12px 40px 11px — D&D(d)); hover .3s ease.
- Footer: #1F1B1B, 4 columns (wordmark + one line / Visit / Hours / Pages), 80px padding.

---

## 6. Home page — block order
Copy budget: ≥ 320 English words, ≥ 4 narrative paragraphs. Photo slots marked 📷 (total **10**).

| # | Block | Purpose / layout | Photo (file) | Copy |
|---|---|---|---|---|
| H1 | Hero (T1, KV) | full-bleed cover 720px, centred title, pill, info bar | 📷1 `hero-banquet-hall.webp` (sp-parallax) | title 4 words, sub 15 words, 3 facts |
| H2 | Statement | greige, centred EB Garamond 2rem, 3 lines, then Karla lead 2 sentences, 760px column | — | ~60 words |
| H3 | The Engagement (T3) | big caps title, 5 zig-zag hairline STEP boxes horizontal, outline button | — | 5 × (name + time + 12 words) |
| H4 | Three ways we cater (T2) | white band, 3 vertical-caps course rows: OFFICE / CELEBRATIONS / BANQUETS; each 2.31:1 photo + text + chips + 2 price lines + filled button | 📷2 `office-lunch-spread.webp`, 📷3 `family-celebration-table.webp`, 📷4 `canape-reception.webp` | 3 × 40 words |
| H5 | The tasting (wide editorial split) | greige; 7/12 photo left (3:2) bleeding to the left viewport edge, 5/12 text right: H2 caps "The Tasting", 2 paragraphs, small accent caption "Thursdays and Fridays, 14:00–17:00" | 📷5 `tasting-session.webp` | ~90 words |
| H6 | Menus & prices (excerpt) | white; centred caps title "Menus & Prices"; full-width (1200px) price list of all 7 items: name + note left, price right nowrap, 1px #DDDDDD rules; outline button to /menus/ | — | 7 rows |
| H7 | Night of service (full-bleed photo band) | 100vw × 560px photo (2.57:1), a quiet caption line bottom-left (white Karla 13px caps "Night of service · 19:00") — no card over the photo | 📷6 `night-of-service.webp` (`sp-parallax`, `--sp-par: 6%`) | 1 line |
| H8 | The kitchen (Kitao circles) | greige; title caps "The Kitchen"; 3 × 2 circular portraits 176px (Kitao(d) ≈160px circles), name EB Garamond 1.25rem + role 13px under each; one paragraph above | 📷7 `team-mireille.webp`, 📷8 `team-tomasz.webp`, 📷9 `team-lena.webp` + 3 more portraits (`team-ayo`, `team-rafael`, `team-priya`) — **6 circles** | 50 words + 6 captions |
| H9 | Stories (3 engagements) | white; three rows alternating photo left/right (photo 4:3, 520px; text 480px) with a small vertical-caps place label (T2 echo, 2rem) in the gutter ≥1024px | 📷10 `story-rowing-club.webp` (row 1 only on home; rows 2–3 text with thumbnail `story-greenhouse.webp` / `story-studio-lunch.webp` 4:3 small 240px) | 3 × 45 words |
| H10 | Enquire | greige; two columns: left caps title "Start an Enquiry" + 2 sentences + filled button; right hairline list: address, hours, phone, email | — | ~50 words |
Home photo positions: H1, H4×3, H5, H7, H8×6, H9×3 = **15 image positions, 13 distinct files ≥ 8** (no file repeats on the page).

### First screen (1440×900)
Utility strip 38px + logo row 76px (=114px) → hero 720px (y 114→834) with centred title, sub-line, pill, and info bar at y 758→834 → the top of the H2 statement greige (66px) is visible. At 390×844: header 64px; hero 600px; title 2.75rem max 3 lines, sub-line 4 lines max, pill 260px wide; at <782px the info bar stacks as 3 lines of 13px text + the enquiry link, height auto, still inside the cover bottom, no overlap with the pill (min 32px gap — cover uses flex column, not absolute offsets). No vertical text, no absolutely-positioned labels over text.

### Compared with the last four themes
| # | Madoka | Hitomi | Seisui | Shokutaku | **Enishi** |
|---|---|---|---|---|---|
| 1 | hero | hero halves + window | hero | split hero | **full-bleed photo + info bar (on photo)** |
| 2 | welcome | dome sections ×5 | site strip | table (arches) | **centred statement** |
| 3 | approach | interlude | intro | sittings | **horizontal zig-zag STEP timeline** |
| 4 | day schedule (blobs) | fees | services on band + cards | room | **vertical-caps course rows, 2.31:1** |
| 5 | rooms | people | metrics ledger | menu | **tasting split, photo bleeds left** |
| 6 | garden parallax | visit | sticky-media process | plates (pills) | **full-width price list** |
| 7 | fees | – | fees | people | **full-bleed night photo band** |
| 8 | visit | – | field notes | visit | **6 circular portraits** |
| 9 | notes | – | people | notes | **3 alternating stories** |
| 10 | – | – | contact | close | **enquire** |
Why not similar: Enishi's opening is the only one with an info bar on a full-bleed photo; the process comes **second** and runs horizontally with diagonal hairlines (Seisui's was a sticky-media vertical process lower down); no arches, domes, blobs, pills-on-plates or card-over-band; vertical-caps labels and 2.31:1 slides appear in none of them; circular portraits replace the people grids of Shokutaku/Seisui.

---

## 7. Inner pages (10)
| Page | Slug | Key content |
|---|---|---|
| The Engagement | /the-engagement/ | T1 480px hero; full T3 timeline (5 stages); then five T2 rows, one per stage, with what the client does / what we do / what it costs (tasting $60 credited) and a 2.31:1 photo each (`tasting-session`, `menu-planning`, `kitchen-prep`, `van-loading`, `night-of-service` — no repeats on this page) |
| Office Catering | /office/ | hero `office-lunch-spread`; T2 rows BREAKFAST $14 / LUNCH BOX $18 / AFTERNOON (canapé) ; 48 h notice, minimum 12; 3-box mini timeline; FAQ excerpt |
| Celebrations | /celebrations/ | hero `family-celebration-table`; T2 rows BIRTHDAYS / ENGAGEMENTS / FAMILY GATHERINGS; buffet $46; 5-box timeline; story link (rowing club) |
| Banquets & Halls | /banquets/ | hero `canape-reception`; T2 rows SEATED $72 / BUFFET $46 / CANAPÉ $34; partner halls list (3 fictional halls), staffing $38/h |
| Menus & Prices | /menus/ | all 7 items in 3 groups (Office · Celebrations · Banquets & extras), each group with vertical-caps label in gutter ≥1024px; full-width tables; dietary notes; seasonal menu sample (3 courses × 3 seasons, text) |
| About | /about/ | founding story 2014, Mireille Duval; "Enishi" = the ties made at a shared table; values (3 short paragraphs, not a grid); `founder-market.webp` |
| Kitchen & Team | /team/ | hero `kitchen-prep`; 6 people, circles (176px) + 60-word bios; 4-box service-day timeline |
| Stories | /stories/ | 3 stories, each vertical-caps place label + 2.31:1 photo + 200 words + figures (guests, menu, staff) |
| FAQ | /faq/ | 10 Q&A (details blocks): dietary, lead time, deposits 30 %, cancellations, equipment, waste, area, alcohol (we don't sell it; we serve the client's) |
| Contact / Enquire | /contact/ | enquiry form (name, email, date, guests, occasion, message), hours, address, map placeholder text (no embedded map), tasting slots |
Also: news/journal posts index (3 posts), 404, privacy.

## 8. Images (16, Grok, one at a time, read each; ≤300 KB, ≤2000px, webp)
**STYLE** (all 16, verbatim):
`Film-grain 35mm photograph, high-key natural daylight, soft diffused window light, muted desaturated palette of stone grey, linen white, warm greige and faded dusty rose-brown, fine visible grain, slightly lifted blacks, candid documentary framing, shallow depth of field, international modern setting, diverse people, no text, no lettering, no logos, no signage, no Japanese elements, no cut-out objects`

| # | File | Subject / composition | Ratio | Used on | HOME |
|---|---|---|---|---|---|
| 1 | hero-banquet-hall.webp | looking down a very long banquet table in an empty hired hall with tall windows, two staff in linen aprons laying napkins and glasses, one hand placing a platter of roasted vegetables at the near end; low eye line, table fills the frame | 2:1, 2000×1000 | Home H1 | ✅ |
| 2 | office-lunch-spread.webp | top-down-ish wide view of lunch boxes, grain salads and bread laid on a pale meeting-room table | 2.31:1 | Home H4; Office hero | ✅ |
| 3 | family-celebration-table.webp | family table mid-afternoon, cake stand, shared platters, hands passing a bowl, faces partly out of frame | 2.31:1 | Home H4; Celebrations hero | ✅ |
| 4 | canape-reception.webp | rows of small canapés on a long slate board, server's hand lifting one tray | 2.31:1 | Home H4; Banquets T2 row | ✅ |
| 5 | tasting-session.webp | couple and chef at a small table tasting six small plates, notebooks | 3:2 | Home H5; Engagement row 1 | ✅ |
| 6 | night-of-service.webp | the same kind of hall at dusk, guests seated, staff carrying plates, warm pendant light (still high-key, desaturated) | 2.57:1 | Home H7; Engagement row 5 | ✅ |
| 7 | team-mireille.webp | founder/head chef, woman ~50, apron, kitchen window | 1:1 | Home H8; Team | ✅ |
| 8 | team-tomasz.webp | sous chef, man ~35 | 1:1 | Home H8; Team | ✅ |
| 9 | team-lena.webp | event manager, woman ~40, clipboard | 1:1 | Home H8; Team | ✅ |
| 10 | team-ayo.webp | pastry chef, man ~30 | 1:1 | Home H8; Team | ✅ |
| 11 | team-rafael.webp | service lead, man ~45, waistcoat | 1:1 | Home H8; Team | ✅ |
| 12 | team-priya.webp | office catering coordinator, woman ~30 | 1:1 | Home H8; Team | ✅ |
| 13 | story-rowing-club.webp | 60th birthday buffet in a timber rowing-club hall, oars on the wall, no text | 4:3 | Home H9; Stories 1 | ✅ |
| 14 | story-greenhouse.webp | engagement dinner at one long table inside a rented glasshouse | 4:3 | Home H9 thumb; Stories 2 | ✅ |
| 15 | story-studio-lunch.webp | all-hands lunch buffet in a bright architecture studio | 4:3 | Home H9 thumb; Stories 3 | ✅ |
| 16 | kitchen-prep.webp | kitchen at 06:00, three cooks prepping trays, steel benches | 2.31:1 | Team hero; Engagement row 3 | |
| 17 | van-loading.webp | crates and covered trays being loaded into a plain white van, no lettering | 2.31:1 | Engagement row 4 | |
| 18 | menu-planning.webp | hands with fabric swatches, a hand-drawn table plan (no legible text), menu cards blank | 2.31:1 | Engagement row 2; About | |
Inner-page assignments without repeats: Banquets hero = `canape-reception`, its T2 rows = `night-of-service`, `family-celebration-table`, `office-lunch-spread`; About = `menu-planning` + `team-mireille`. Total files = **18**.
No faces broken, no text/logos; regenerate any frame with lettering.

## 9. Fixed numbers (identical on home, inner pages and in all five languages)
- **Enishi Catering**, founded **2014** by **Mireille Duval**; kitchen: **14 Wharf Lane, Harbourside** (fictional); service area within **40 km**.
- Office hours **Tue–Sat 09:00–18:00**; tastings **Thu & Fri 14:00–17:00**; events any day until **23:30**. Phone +1 555 0142 (fictional), hello@enishi-catering.example.
- Guests **12–180**; lead time **3 weeks** (events), **48 hours** (office lunches); deposit **30 %**; final numbers **5 days** before; crew arrives **3 hours** before guests.
- Prices (USD, per guest unless stated; same digits in every language):
  1. Working breakfast table — $14 (min 12)
  2. Office lunch box set — $18 (min 12)
  3. Canapé reception, 8 pieces — $34 (min 20)
  4. Family celebration buffet — $46 (min 20)
  5. Seated banquet, three courses — $72 (min 30)
  6. Tasting for two (credited on booking) — $60 per tasting
  7. Service staff — $38 per staff hour
- Engagement (5 stages): 01 Enquiry (day 0, reply within 1 working day) → 02 Tasting (about 3 weeks before) → 03 Menu & floor plan (2 weeks before) → 04 Final numbers (5 days before) → 05 Night of service (crew in 3 hours before).
- People (6): Mireille Duval — founder & head chef; Tomasz Wren — sous chef; Ayo Okafor — pastry; Lena Hartmann — event manager; Rafael Costa — service lead; Priya Raman — office catering coordinator.
- Stories (3): A 60th birthday in a rowing-club hall (84 guests, buffet); An engagement dinner in a rented glasshouse (36 guests, seated); A quarterly all-hands lunch for an architecture studio (140 guests, lunch boxes + buffet).
- No claims of awards, guarantees, media or real brands.

## 10. Scroll motion (sp-scroll; copy pipeline/assets/sp-scroll/ unchanged)
| Effect | Where | Source & original | Our values |
|---|---|---|---|
| `sp-parallax` | H1 hero Cover (bg = hero-banquet-hall) and H7 night band; inner page heroes (T1) | D&D ambient autoplay video behind a still title (`D&D(g)`) | H1 `--sp-par: 8%` (≤781px: 6%), H7 `--sp-par: 6%` (mobile 5%); foreground title/pill/info bar NOT in the moving layer |
| `sp-reveal--down` | H2 statement, section caps titles (H3, H5, H6, H8, H9, H10), inner page caps titles below hero | Kitao animate.css fadeInDown/slideInDown, waypoint "almost visible" ≈ 85 % viewport, ≈1s, delay 0, `ease` (`Kitao(g)`) | `--sp-dist: 24px` (≤30px cap), `--sp-dur: 1s`, ease; threshold default |
| `sp-stagger` | H3 timeline boxes (5), H8 circles (6), H4 course rows (children = rows) | Kitao STEP boxes (static on Kitao; stagger added to read the order), D&D hover .3s | stagger step 120ms, child `sp-reveal--up` 24px, 0.8s ease |
- Hero: no reveal. Price list, forms, legal text: no reveal. Diagonal SVG lines are not observed elements (no clip-path on observed elements).
- reduced-motion / `?sp-static` / editor: final state. Validate with `check-parallax.mjs` desktop + mobile.

## 11. Responsive rules (hard)
- 390px first screen: no vertical text, no absolutely positioned labels over text; T2 labels horizontal below 1024px; T3 STEP label overlap reduced to −12px and must not cover box text.
- Price tables ≥ 782px: full container width (1200px), price column `white-space: nowrap; text-align: right`, never clipped at 800 or 1280. < 782px: every table stacks (row → block: name, note, price on its own line right-aligned).
- No horizontal overflow at 390 / 1280; full-bleed blocks use `alignfull`, not 100vw + margins.

## 12. Home acceptance checklist
1. Hero: full-bleed 720px photo, centred white EB Garamond title, outlined translucent 999px pill, info bar with 3 facts on the photo bottom; parallax moves (≥6px), title doesn't.
2. KV checklist rows 1–6 all visible.
3. Statement centred on greige directly under the hero.
4. Horizontal 5-box zig-zag timeline with overlapping STEP labels and diagonal hairlines.
5. Three vertical-caps 44px course rows with 2.31:1 photos, chips, prices, filled ink buttons.
6. Tasting split photo bleeding left; full-width price list (7 items) with nowrap right-aligned prices matching §9.
7. Full-bleed night band with parallax; 6 circular portraits; 3 stories; enquire block.
8. ≥ 8 image positions (15), no repeated file on the page, no text in images, first-screen saturation ≤ 12 %.
9. ≥ 320 English words; numbers match §9; fonts EB Garamond/Karla identical in editor and front end.
10. Max font size ≥ 4.25rem in theme.json; radius 0 except pill and circles; accent only on small areas.
11. auto-gates pass (390/1280 overflow, 800/1280 tables, mobile overlap), check-parallax pass.

## 13. Similarity table (target 80 %)
| Dimension | Reference value | Enishi value |
|---|---|---|
| Ground | Kitao #F5F3EE ≈85 % / D&D #FFFFFF ≈70 % | #F5F3EE ≈55 % + #FFFFFF ≈20 % |
| Ink | D&D #000/#111, Kitao #333 | #1F1B1B headings, #333333 body |
| Accent | Kitao gold #D0A050 ≈3 % | #7A5E5E ≤3 % (row hex, same role) |
| Hairline / chip | D&D #DDD 1px, chip #F2F2F2 | #DDDDDD 1px, chip #ECE9E3 |
| Hero | D&D 1440×640 full-bleed, serif 70px centred white, pill 999px 1px white .9 / bg .16 | 100vw×720, EB Garamond 72px centred white, same pill values |
| Vertical label | D&D 44px caps serif ls 1.76px, vertical-rl, rule below | 44px EB Garamond caps ls .04em, vertical-rl, 1px rule 120px |
| Wide photo | D&D 1000×432 (2.31:1), radius 0, ≈70 % viewport | 1000 max, 2.31:1, radius 0, ≈70 % |
| Course title | D&D serif 600 32/48 ls .18em | EB Garamond 600 2rem/1.5 ls .18em |
| Body | D&D 14/24.5 ls .04em | Karla 16/28 ls .04em |
| Flow | Kitao 1px #999 boxes, overlapping STEP label, diagonal joins | same, horizontal zig-zag (row process-timeline) |
| Big title | Kitao Cinzel 140/126 caps | EB Garamond caps clamp(4.25–8.75rem)/0.9 |
| Circles | Kitao ≈160px circles 3×2 | 176px circles 3×2 |
| Radius / shadow | 0 / none (pill 999px) | 0 / none (pill 999px, circles 50 %) |
| Spacing | section gap ≈120px, text col 760, margin 70 | 120px, 760, clamp(20,5vw,70) |
| Motion | D&D ambient video, .3s hover; Kitao fadeInDown 1s ease | parallax 8 %, hover .3s, reveal--down 24px 1s ease, stagger 120ms |
| Imagery | real photography, platters/tables, radius 0 | real film-grain photography, tables/halls/staff, radius 0 |
