# Shio Butchers — design spec (stage 1, design director)

Type: **store** (independent butcher shop; pickup orders; WooCommerce-compatible but not required — §13). Industry: an independent butcher that breaks carcasses for the week ahead.
Primary reference: **https://www.akomeya.jp/** (home first screen, product grids, "more" buttons). Tokens: `reference-tokens.md` (cited as T(a)…T(g)). Screens: `ref/akomeya-first.png`, `ref/akomeya-grid.png`, `ref/scroll-akomeya-*.png`. Secondary: none.
**Imagery: photo** (stage-a IMAGERY = photo). Real-photography STYLE, low-key (row `photo_direction: low-key`), §10. No illustration. 0 cut-outs.
Font direction: **sans** — Latin headings Schibsted Grotesk, Latin body Albert Sans; zh-TW / ja Noto Sans TC / Noto Sans JP (gothic / sans CJK). No serif / Mincho anywhere (the reference's Mincho titles become Schibsted Grotesk 600).
Similarity target: ~80% to the reference in palette, image treatment, motion, decoration and layout rhythm; photographs, copy and logo 100% ours.
Header: solid white (the reference's), not the row's "overlay" nav. Exactly one top menu.

---

## 1. Signature techniques (3, obvious at a glance, none may be softened)

### T1 — Ruled index rail beside a framed stage ("shop-front grid")
- Source: akomeya.jp first screen (`ref/akomeya-first.png`): inside a 1200 content width, a **200px rail at x 120** and a **960px main column at x 360, gap 40** (T(c)). The rail has a bold heading ("search by category") with a black rule under it, then rows of **57px pitch**: 30×30 photo thumbnail, 14px label, small chevron or plus at the right, 1px #EDEDED rule between rows (T(f)). Right of it, a framed 960×456 photo stage.
- Ours (home §2 hero): rail "This morning's cuts" — heading 17px/700 #0D0B0A with a **2px #0D0B0A rule** below (12px padding), then **6 rows × 57px**: 30×30 chip (CSS crop of the sprite photo **H05**, `object-fit:cover` + `object-position` per cut), label 14px/500 #444, right glyph 10px: chevron `›` (links to `/counter/#<cut>`), or `+` on "Rib" (opens a 2-line sub-list "on the bone / boned & rolled", `<details>`). 1px #EDEDED rules between rows, last row also ruled. Rows: Chuck · Rib · Sirloin · Shin · Sausages · Mince (exactly the §8 price names). Right: framed stage 960×440 (§2).
- The 200 | 40 | 960 grid recurs below the hero in §3 (left column = counter notes, right = cards) and in §8 (left = supply notes, right = farm cards), then ends — it is never a persistent sidebar.
- Must not soften: rail width 200 exactly; 57px row pitch with real photo chips (not icons, not dots); the black heading rule is bold and darker than the row rules; rail and stage top edges align.

### T2 — Brass corner tab on square cards, caption below
- Source: akomeya.jp product grids (`ref/akomeya-grid.png`): 4-up **1:1 cards 225px, 20px gap**, a **41×41 gold #B09D60 "NEW" tab** flush in the photo's top-left corner, caption (name, 14px) **under** the photo on white, no card border (T(c),(f)).
- Ours (home §3 "This morning's counter"): 4 square cards in the 960 column (225 + 20 gap): **H06 Chuck, H07 Rib on the bone, H08 Sausages, H09 Mince**; each has a **41×41 brass #B09D60 tab** top-left, text "TODAY" white Schibsted Grotesk 600 10px, letter-spacing .08em, centred. Caption under the photo: name 14px/500 #0D0B0A, line 2 "€18.40 / kg · braising" 13px #444, `font-variant-numeric: tabular-nums`. Low-key square photos on dark wood read like the reference's dark-lacquer product row.
- Also on home §8 farm cards (3 × 306px squares in the 960 column): the tab carries the distance "34 km" / "22 km" / "41 km" (same 41px square; text 10px; if a label is longer than 5 characters the tab grows in width only, height stays 41).
- Must not soften: tab is a solid brass square touching the corner (no radius, no inset, no transparency); caption below the photo, never overlaid; cards 1:1.

### T3 — Double-line wide button with a long arrow, under centred section titles
- Source: akomeya.jp "more" buttons and section heads (`ref/akomeya-grid.png`): centred section title (28px) with a small Latin sub-label; under each grid a **290×50 outline button with a doubled 1px black line**, centred label 13px, a **long thin arrow** at the right (T(c),(d)).
- Ours: every home section title is centred: h2 1.75rem/600 #0D0B0A, sub-label above it (written in the markup, kept in English in all five locales the way the reference keeps Latin labels): 12px/600, letter-spacing .16em, colour bark #6B5346 — e.g. `COUNTER`, `DAILY`, `WRAPPING`, `FARMS`, `ORDER`. Button `.sb-btn-double`: 290×50, background #FFF, `border:1px solid #0D0B0A; box-shadow: inset 0 0 0 2px #FFF, inset 0 0 0 3px #0D0B0A;` radius 0, label 13px/500 ls .06em centred, arrow = inline SVG 28×8 (1px line + 6px half-head) positioned 24px from the right edge; hover: arrow translates 6px right, 0.3s ease (T(g)). Used under §3 cards ("See the whole counter"), §8 farms ("Meet the three farms"), §9 ("Call the counter"), and on inner pages.
- Must not soften: both lines visible (not a single border, not a filled button); width 290 desktop (100% max 290 on mobile); arrow long and thin.

### Continuation on inner pages (all 7 content pages; ≥4 required)
Every inner page opens with a **page head in the T1 grid**: rail 200 (ruled sub-navigation of that page's sections, 57px rows, heading + 2px rule; chips only where a photo exists, otherwise a 6px brass square bullet) | stage 960×400: paper panel 520 (#EFEBDD, h1 3rem + 1–2 sentence lead) butted to one photo 440×400 at the right. No horizontal scroll on inner heads (static).
| Page | T1 | T2 | T3 |
|---|---|---|---|
| The Counter | head rail = 7 price rows as jump links; ruled cut index | 4 TODAY cards H06–H09 | "Order these for pickup" |
| The Day | head rail = Mon–Sat; 8 ruled hour rows | — | "See what's on the counter" |
| Orders & Wrapping | head rail = 4 steps; ruled step rows | brass number tabs "01–04" (same 41px square) on step rows | "Order for pickup" |
| Farms | head rail = 3 farms; ruled fact rows per farm | 3 farm squares with km tab | "Read the journal" |
| About | head rail = History / People / Shop; ruled people list | brass tab "2009" on H10 | "Visit 14 Market Row" (to contact) |
| Order for pickup (contact) | head rail = address, hours, cut-off, phone | — | mailto fallback uses the double button |
| The Saturday list (newsletter) | ruled "what's in it" rows | brass "FRI" tab on H03 | — |

---

## 2. Key visual concept

**(1) Reference first screen, story, signature motion.** Akomeya's first screen is a shop front seen as a page: a left category rail like shelves with small photo chips, and beside it a wide framed slider of lifestyle photographs — people wearing and using the goods in soft daylight — set as a triptych of butted photos at different heights on a pale grey stage, with beige paper rectangles behind and across the seams and a large catch line on a paper block. A 5-dot pager sits under the photos, thin chevrons at the stage edges, gold NEW tabs start on the goods just below, and a beige utility bar with a red note runs across the top. Story: *a shop that knows every item on its shelves and shows them being lived with.* Signature motion: slow crossfade of slides (0.5s opacity), very slow image scale on hover (8s cubic-bezier(.7,0,1,1)), header that tightens on scroll (T(g)).

**(2) Our transposition (butcher, same composition, same motion idea, same imagery type = photograph).** The same shop-front page, at a butcher's counter in the early morning: the left rail is **"This morning's cuts"** with chips of the six cuts broken that morning; the framed stage is a **horizontal-scroll strip of four butted low-key photographs at different heights**: **H01** the owner, Mateo, lowering a beef forequarter onto the end-grain block while a regular in a coat points at the (blank) slate board behind the counter; **H02** trays of the morning's cuts being set into the counter; **H03** a paper-wrapped, string-tied parcel passed across the counter; **H04** sides hanging on the cold-room rail. A beige paper panel at the stage's left carries the catch line, and **the photographs slide behind the paper panel** as the strip scrolls (our version of photos crossing the paper blocks). Story: *a shop that knows every cut on its counter because it broke them this morning, and shows them going home with people.* Motion: native sideways scroll-snap (replaces the crossfade, user-driven), 8s slow hover scale on every strip photo and card (identical token), sticky header compacting on scroll. h1 on the paper panel: "Cut for / the week, / at dawn." (3 lines, 700).

**(3) KV checklist** (all on the home first screen, all visible at 1280×800):
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Left category rail with 30px photo chips, bold heading rule, plus/chevron | "This morning's cuts" ruled index: heading + 2px rule, 6 rows × 57px, 30px chips, chevron / plus | Container x 0, width 200, top aligned with the stage (y 150 at 1280) | none in hero (no reveal); row hover background #F5F5F5 0.3s ease | H05 (sprite: six cuts flat-lay, cropped per row) |
| 2 | Framed slider of butted lifestyle photos at different heights on a pale grey stage | Horizontal-scroll strip: H01 440×440 full height · H02 300×360 top-aligned · H03 380×380 bottom-aligned · H04 420×440 full height, butted, stage ground #F5F5F5 | Stage x 240–1200 (960×440) | native `scroll-snap-type:x mandatory`, snap per photo at x 520 of the stage; hover scale 1.06 over 8s cubic-bezier(.7,0,1,1) | H01, H02, H03, H04 |
| 3 | Beige paper blocks behind/across photos + large catch line on paper | Paper panel #EFEBDD 520×440 over the stage's left edge holding h1 (4.5rem), 2-line lead, text link; two paper rectangles #EFEBDD inside the track (R1 340×80 under H02 crossing the H02/H03 seam; R2 260×60 at top of H03's column crossing back behind H02) | Panel: stage x 0–520 (desktop absolute over the scroller, opaque); rects in the track | photos pass behind the panel while scrolling | — (paper is CSS) |
| 4 | Dot pager under the slider + thin chevrons at stage edges | 4-dot pager (one per photo; active dot #0D0B0A 8px, others #DCDCDC 8px, 18px apart) centred under the photo window; chevrons 40×40 transparent, 1px #444 glyph, at stage x 520 (left) and x 960 (right), vertically centred | Under the stage, y +14px; chevrons on the stage | active dot / chevron opacity 0.3s ease; chevron click = `scrollBy` one photo | — |
| 5 | Gold NEW corner tab on goods just below the slider | Brass TODAY tabs on the 4 cut cards of §3 | Card row top ≈ y 732 at 1280×800 — tabs (41px) fully visible above the fold | none | H06, H07, H08, H09 |
| 6 | Beige top utility bar with a small red note | Utility bar #EFEBDD 30px: right-aligned red #ED4831 12px/600 "Orders close 18:00 for next-morning pickup" + bark #6B5346 link "The Saturday list" | Top of page, full width | none (it scrolls away; nav row stays sticky) | — |

---

## 3. Home (en) — block order (store, day-schedule)
Top menu (the only one): The Counter · The Day · Orders & Wrapping · Farms · About · Journal; right: phone "+00 0000 2009" 13px + **Order for pickup** (bark #6B5346 fill, white 13px/600, 168×40, radius 0).

| # | Section | Purpose | Layout | Image(s) | Copy |
|---|---|---|---|---|---|
| 1 | Utility bar + header | Cut-off notice, nav | Bar 30px #EFEBDD; header 80px white, logo left (wordmark "SHIO BUTCHERS" Schibsted 700 20px ls .04em + our own 24px brass diamond mark SVG), nav 13px/600 #0D0B0A gap 28px, current item 2px bark underline 6px below; sticky; compacts to 64px with shadow `0 2px 6px rgba(0,0,0,.08)` after 120px (CSS `animation-timeline: scroll(root)`, no JS; unsupported = stays 80) | — | — |
| 2 | Hero shop-front `#cuts` | KV, promise | §2: rail 200 \| stage 960×440; paper panel h1 + lead (1 sentence, 18 words) + text link "Order by 18:00 for tomorrow →"; 4-dot pager + chevrons | **H05** (chips), **H01–H04** | h1 + 18 words |
| 3 | This morning's counter `#counter` | Today's cuts with prices | T1 grid: left 200 = "Counter notes" (3 ruled rows: "Open 07:30", "Pickup shelf from 07:30", "Orders close 18:00"); right 960 = centred title (sub-label COUNTER, h2 "This morning's counter") + 4 T2 cards + T3 button | **H06, H07, H08, H09** | notes 3×6 words; captions |
| 4 | Intro `#shop` | Narrative | Centred title (SHOP / "Broken down for the week"); 2 columns in 1200: H10 4:5 at 460×575 left, text column 640 right, 3 paragraphs (≥40 words each), bark text link "About the shop →" | **H10** | 140 words |
| 5 | The day `#day` | Day schedule | Centred title (DAILY / "A day at the block"); 2 columns: left 700 = 6 ruled hour rows (72px pitch, 1px #EDEDED rules; time Schibsted 600 22px #0D0B0A tabular-nums width 96px · h3 16px/600 · one line 14px #444); right 460 = H11 4:5 photo, top aligned | **H11** | 6×18 words |
| 6 | The block (parallax) | Atmosphere + figures | Full-bleed Cover 560px (mobile 380px), H12 background, `sp-parallax`; paper caption panel #EFEBDD 460px wide at container left, bottom 56px: h3 "Scrubbed with salt every evening" + 30 words + 3 figures row (`21` days on the hook · `3` farms · `41` km furthest), figures Schibsted 600 2.25rem with `sp-count` | **H12** | 30 words + figures |
| 7 | Wrapping `#wrapping` | How an order is wrapped | Centred title (WRAPPING / "How an order is wrapped"); 2 columns: left 640 = 4 ruled step rows each with a brass 41px number tab "01–04" at left + h3 + 25 words; right 480 = H13 1:1 photo | **H13** | 4×25 words |
| 8 | Farms `#farms` | Which farms supply the rail | T1 grid: left 200 = "Supply rail" ruled rows (Mon beef · Wed pork · Tue lamb Mar–Nov); right 960 = centred title (FARMS / "Three farms on the rail") + 3 square cards 306px with km tabs; caption: farm name, farmer, animal, 1 line (20 words) + T3 button | **H14, H15, H16** | 3×25 words |
| 9 | Order band `#order` | Conversion | Full-bleed paper band #EFEBDD, padding 100: left 560 = sub-label ORDER, h2 "Order by 18:00, collect from 07:30", 40-word paragraph, the 4-step order line as one ruled inline list (01 Order · 02 Confirm by 19:00 · 03 Cut at 07:00 · 04 Pick up); right = Order for pickup (bark fill 290×50) + T3 double button "Call the counter" (tel:) stacked, 16px gap | — | 60 words |
| 10 | The Saturday list | Newsletter | White band, 1200 container: left 560 = h3 "The Saturday list" + 28 words ("Friday 17:00: what is on the counter for Saturday…"); right 560 = newsletter `shippress_form_slot` (§11) | — | 28 words |
| — | Footer | | Bark #6B5346 band, white text 14px: wordmark, address, hours table (stacked lines, not a table element), phone, email; links: Journal, The Saturday list, Privacy; brass diamond "TOP" link 56px (static in footer right, never fixed) | — | |

Home photos: **H01–H16 = 16 image positions** (≥8), no repeats on the page. Home English ≥ 450 words; narrative paragraphs: §4 ×3, §9, §10 (≥3 of ≥20 words).

### First-screen composition (1280×800)
Utility bar 0–30 → header 30–110 → hero padding-top 40 → rail + stage y 150–590 (rail heading at 150, 6 rows to ~545) → pager + chevrons y 604–618 → §3 padding-top 36: sub-label + h2 y 654–712 (title is centred over the 960 column) → card row top y 732, brass TODAY tabs 732–773 visible above the fold. Paper panel at stage x 0–520, h1 `clamp(2.75rem, 5.6vw, 4.5rem)` (72px at ≥1286, ~71px at 1280) /1.02, 700, ls −.015em, #0D0B0A, panel padding 40/44; lead 15px/1.75 #444 max 2 lines; link 13px/600 bark with 28px arrow. Photo H01 fully visible right of the panel at stage x 520–960 (owner + forequarter + regular all inside). No table, form or search box anywhere in the first screen (the reference's search boxes are dropped).
At 1440×900: same, container x 120; stage 960 at x 360 (identical to T(c)).

Mobile 390×844: utility bar 30 (single line, 12px) → header 56 (wordmark + "Order" text button + menu button) → paper panel **in normal flow** full width (padding 24): h1 2.75rem 3 lines, lead, link → strip 300px tall (photos scaled ×0.68: H01 300×300, H02 205×245, H03 260×260, H04 286×300; `scroll-padding-left:16px`, snap per photo) → 4-dot pager (chevrons hidden <782) → rail "This morning's cuts" as a full-width ruled list (6 × 57px). **No vertical text, no absolutely positioned text over images or text at 390**; paper rects inside the track are decorative (`aria-hidden`, no text).

### Home block order vs recent themes (must differ)
| # | Tsubasa College | Hisui Clinic | Homura Safety | Meguri Waste | **Shio Butchers** |
|---|---|---|---|---|---|
| 1 | header | rule-split window | header slab | panorama pan-strip | **utility bar + header with order button** |
| 2 | focus-pull hangar hero | intro | slanted-bar KV | ruled intro | **rail index + framed multi-height photo strip behind a paper panel** |
| 3 | intro | department band + 5 tabs | docked link strip | pictogram collection day | **notes column + 4 TODAY-tab square cards** |
| 4 | 8-tile isometric plane | plan accordion | intro | weekly cover | **photo 4:5 + 3-paragraph intro** |
| 5 | month ruler | team | notch pairs | people | **ruled hour rows + photo (day schedule)** |
| 6 | slate notice strip | fees | scrim tiles | sites | **salt-block parallax with paper caption + counts** |
| 7 | fees | news filter rows | parallax band | schedule CTA | **wrapping steps with brass number tabs** |
| 8 | journal | CTA | findings / fees / journal | — | **notes column + 3 farm squares with km tabs** |
| 9 | CTA | — | — | — | **paper order band + Saturday list slot** |
Reasons: the only one whose first screen is a two-column shop front (fixed rail + framed multi-height photo stage) rather than a single full-bleed image; product squares with corner tabs appear nowhere in the four; the 200|960 grid recurs as a rhythm; the day schedule is told as ruled hour rows (not pictograms, rulers or tabs); no slate/dark bands except the footer; no team grid on home.

---

## 4. Inner pages (≥8 pages + 3 posts)
All content pages open with the T1 page head (rail | paper panel h1 + photo 440×400). Legal pages: plain white head, h1 + 2px rule.
1. **The Counter** `/counter/` — head **H02**. Ruled cut index (7 rows anchor-linked), 4 TODAY cards H06–H09, **full price table (§8, 7 rows)**, "how we weigh" note (priced by actual weight to 10 g), T3 → Order for pickup.
2. **The Day** `/the-day/` — head **H11**. 8 ruled hour rows (05:30 rail · 06:00 block · 07:00 orders wrapped · 07:30 doors · 11:00 sausages & mince · 14:00 ageing room turned · 17:00 Saturday list sent (Fri) · 18:00 cut-off & salt scrub); full-bleed parallax band **H12** (`--sp-par:10%`); the week as 6 ruled rows Mon–Sat (§8); figures (sp-count).
3. **Orders & Wrapping** `/orders/` — head **H13**. 4 order steps as ruled rows with brass number tabs; wrapping (paper, string, hand label with cut / weight / price / date); pickup rules (held until close of the next opening day; paid at pickup); the Week box (contents §8). T3 → Order for pickup.
4. **Farms** `/farms/` — head **H04**. 3 farm stories as long rows: square photo 480 (H14 / H15 / H16) with km tab, farmer, animal, distance, delivery day, 120 words each; ruled fact rows per farm.
5. **About** `/about/` — head **H17**. History (2009 opening at 14 Market Row; 2014 cold room and ageing rail; 2019 sausage room; 2025 first apprentice), H10 with brass "2009" tab, people as ruled list rows (8 names, §8: name · role · one line), the shop address.
6. **Order for pickup** `/order-for-pickup/` (contact, standard `contact`) — head **H18**. T1 grid: left rail = Address · Hours · Cut-off 18:00 · Phone · Email (ruled rows); right 960 = intro 40 words + **contact form slot** (§11) with mailto fallback.
7. **The Saturday list** `/newsletter/` (standard `newsletter`) — head **H03**. What's in it (ruled rows: Friday 17:00 send · Saturday counter list with prices · Week box contents · one farm note), **newsletter slot** (§11).
8. **Journal** `/journal/` — posts page (role `posts`, empty content; standard `news`).
9. **Privacy** `/privacy/` — plain legal text (no reveal).
Posts (category "From the block", tags beef / pork / wrapping / ageing): "Why we scrub the block with salt every evening" (featured **H12**), "One forequarter, one week" (featured **H10**), "Stock from Tuesday's bones" (featured **H09**). Standard screens: article → post 1, category → From the block, tag → beef.
Templates: front-page, page, single, archive, category, tag (copy of archive, label TAG), index, 404, search; page-wide pattern heads as above.

## 5. Palette (T(a); reference hex kept unless noted)
| Role | Hex | Source | Share (first screen) |
|---|---|---|---|
| Ground | #FFFFFF | ref ground | ~62% |
| Paper (utility bar, hero panel, paper rects, order band, caption) | **#EFEBDD** | ref utility bar, exact | ~22% (low chroma) |
| Stage / panels grey | #F5F5F5 | ref panels | ~4% |
| Hairlines | #EDEDED (rows), #DCDCDC (pager dots, inputs) | ref | <1% |
| Heading ink / rail rule / double-button lines | **#0D0B0A** | ref #000000 warmed, L +4.5% (≤5%) | ~2% |
| Body text | #444444 | ref, exact | — |
| Bark (order button, active nav, sub-labels, links, footer) | **#6B5346** | plan row hex — replaces the ref's #333 dark search button as the one brand dark; low saturation | ~1% |
| Brass accent (tabs, diamond mark, TOP) | **#B09D60**; hover #AB9756 | ref gold, exact | ~2% |
| Alert red (utility note only) | **#ED4831** | ref red, exact | <0.5% |
| Dark ground (footer text areas, dark-form tokens) | #3B2F2A | stage-a secondary | — |
Kept: the reference's white ground + beige utility paper + one muted gold + one tiny red. The bark brown replaces near-black only where the reference uses a dark filled control (industry fit: bark/wood for a butcher's block; avoids recent themes' slate/teal). Brass text on white is decorative only — small text on brass is white 600 at ≥10px inside 41px tabs (label, not body copy).
**First-screen saturated share: target ≤10%, hard cap 15%** (`scripts/check-first-screen.py`; reference <8%). Photos are low-key and desaturated; raw meat in H01–H04 must read deep oxblood-brown, not bright red, and occupy <15% of each photo — regenerate if the check fails (do not tint with CSS filters).

## 6. Type (sans; T(b))
- Latin headings: **Schibsted Grotesk** (500, 600, 700). Latin body: **Albert Sans** (400, 500, 600).
- Stacks — display: `"Schibsted Grotesk", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`; body: `"Albert Sans", system-ui, -apple-system, "Segoe UI", sans-serif`.
- `:root:lang(zh-TW)` display `"Schibsted Grotesk", "Noto Sans TC", sans-serif`; body `"Albert Sans", "PingFang TC", "Microsoft JhengHei", sans-serif` (no bundled zh/ja family in body, repo contract). `:root:lang(ja)` display `"Schibsted Grotesk", "Noto Sans JP", sans-serif`; body `"Albert Sans", "Hiragino Sans", "Yu Gothic", sans-serif`. No serif / Mincho.
- Load everything through **theme.json `fontFamilies` + `fontFace`** (woff2 in assets/fonts; Noto Sans TC / JP subset to used glyphs with the Hokuto/Hada workaround, weights 500/700). style.css uses `:lang(` → copy `shared/inc/editor-lang.php` to `inc/` and require it. Editor iframe = front end (check-editor-fonts.mjs, en + zh-TW).
- Sizes (theme.json presets): **hero 4.5rem** (72px; `clamp(2.75rem, 5.6vw, 4.5rem)`; largest ≥4.25rem) 700 lh 1.02 ls −.015em; page h1 (inner paper panel) 3rem/1.08 700; h2 section title **1.75rem** (ref 28px) 600 lh 1.3, centred; sub-label .75rem 600 ls .16em bark; h3 1rem–1.25rem 600; rail heading 1.0625rem 700; rail row / caption / nav .875rem (14px, ref) 500 / .8125rem 600; body **.9375rem / 1.75** 400 (ref 14/500/1.5 → Latin +1px and taller leading); small .8125rem; tab 10px 600 ls .08em; prices `tabular-nums`. Sub-labels are typed in capitals in the markup (no `text-transform`, no CSS `content`).
- zh-TW / ja: headings ×0.75 of Latin (hero clamp min 2.25rem), body lh 1.85, letter-spacing .04em; fr / de `hyphens:auto` on body and h2/h3; the paper panel h1 must not overflow 432px inner width in fr/de (allow 4 lines; panel height grows, stage stays 440 → panel `min-height:440px`).

## 7. Spacing, radius, decoration (T(c),(d),(f))
- Container 1200 (= ref 200 + 40 + 960). Section padding **100px** top/bottom desktop (ref), 64 mobile. Card gap 20 (ref); farm cards gap 21 (3 × 306). Title block → content 40px.
- **Radius 0 everywhere** (ref). No shadows except the compact header `0 2px 6px rgba(0,0,0,.08)` (ref).
- Decorations: 2px #0D0B0A rule under rail headings; 1px #EDEDED row rules; brass 41px tabs; brass 6px square bullets in chip-less rails; paper #EFEBDD panels/rectangles; double-line buttons; brass diamond mark (logo) and diamond TOP link 56px in the footer (ref 64px back-to-top diamond, made static).
- Images: strip photos butted (0 gap), `object-fit:cover`; cards 1:1; no masks, no rounded corners, no frames other than the stage ground #F5F5F5.

## 8. Fixed facts (brand.md must match everywhere, all 5 languages)
- Name **Shio Butchers**. Opened **2009**. Address **14 Market Row, Saltgate** (fictional, international-neutral). Phone **+00 0000 2009**. Email **orders@shio-butchers.example**.
- Hours: **Tue–Fri 07:30–18:30**, **Sat 07:00–15:00**, **closed Sun–Mon** (Monday: beef sides arrive and are broken for the week). Orders close **18:00** for pickup from **07:30** the next opening day (Fri 18:00 → Sat 07:00). Orders are held until close of that day.
- Daily routine (home 6 rows): **05:30** delivery checked, weighed and hung on the rail · **06:00** breaking at the block · **07:00** yesterday's orders cut, weighed and wrapped · **07:30** doors open, counter filled (Sat 07:00) · **11:00** sausages and mince from the morning's trim · **18:00** orders close; block scrubbed with salt (Sat close 15:00). Inner page adds **14:00** ageing room turned and **17:00 Fri** Saturday list sent.
- Week: Mon beef sides (Harrow Lane) · Tue lamb (Oaken Ridge, Mar–Nov) · Wed pork halves (Millbrook) · Thu ageing room turn · Fri week boxes packed · Sat counter only.
- **Prices (7 rows, EUR, incl. VAT, by actual weight):** Chuck, braising **€18.40/kg** · Rib on the bone, dry-aged 21 days **€42.00/kg** · Sirloin steak, dry-aged 21 days **€46.00/kg** · Shin, bone-in **€14.20/kg** · House pork sausages, coarse with sage **€15.80/kg** · Mince, chuck and brisket **€13.60/kg** · **Week box** for two, 2.4 kg **€58.00/box** (600 g chuck, 500 g mince, 6 sausages ≈480 g, 2 sirloin steaks ≈420 g, 400 g shin). Home cards show Chuck, Rib, Sausages, Mince with these prices.
- Figures: **21** days dry-ageing · **3** farms · **41** km furthest farm · cut-off **18:00**.
- **People (8):** Mateo Varga — owner & head butcher; Hanna Sørlie — co-owner, counter & orders; Kwame Osei — butcher, sausages & mince; Lucía Ferraz — apprentice butcher (since 2025); Tom Achterberg — ageing room & stock; Agnes Holm — Harrow Lane Farm (beef); Daniel Okoro — Millbrook Pastures (pork); Sofia Brandt — Oaken Ridge (lamb).
- **Farm stories (3):** Harrow Lane Farm — grass-fed beef, **34 km**, sides every Monday; Millbrook Pastures — outdoor-reared pork, **22 km**, halves every Wednesday; Oaken Ridge — lamb **Mar–Nov**, **41 km**, Tuesdays. No certifications, awards or health claims.
- **Order process (4):** 01 Order by 18:00 (form, phone or email) · 02 Confirmation by 19:00 with estimated weight · 03 Cut, weighed and wrapped at 07:00 · 04 Pick up from 07:30, pay at the counter by actual weight (card or cash).
- **Wrapping (4):** 01 Cut and weighed to 10 g · 02 Wrapped in waxed butcher paper · 03 Tied with cotton string, hand label: cut, weight, price, date · 04 Kept at 2 °C on the pickup shelf.
- brand.md includes a "day" / daily routine paragraph (repo contract).

## 9. Tables & responsive musts
- Price table (Counter page; any `figure.wp-block-table` or price rows): ≥782px **full width of the 1200 container** (`width:100%`, `table-layout:auto`); columns cut (name + 1 line) · note (ageing / origin) · **price column `white-space:nowrap; text-align:right; min-width:10ch`**, never clipped at 800 or 1280 (auto-gates). Rows 1px #EDEDED, header row 2px #0D0B0A bottom rule; price Schibsted 600 1.125rem #0D0B0A tabular-nums. No reveal on the table.
- <782px: **every table stacks** (each row = block; label above value; price on its own line right-aligned); no horizontal scroll inside tables. Hours in the footer are lines, not a table.
- 390px first screen: no vertical text; no absolutely positioned text; paper panel in flow above the strip; utility note one line (shorten in de/fr to "Orders close 18:00" variants if it wraps — max 2 lines allowed, never overlaps).
- No horizontal page overflow at 390/1280: only the strip scrolls sideways (`overflow-x:auto` on the scroller; `html,body{overflow-x:clip}`).
- T1 grid <782px: rail and right column stack (rail first in §3/§8; in the hero the rail moves **below** the strip). Cards 2-up at <782 (gap 12), 1-up never. Two-column sections stack image-first. Buttons full width max 290.

## 10. Images (18 photographs, 0 cut-outs, webp ≤300 KB, ≤2000px)
**STYLE (single string, every image):**
`documentary photograph inside a small independent butcher shop, low-key lighting from a single warm practical source (a side window or one pendant lamp), deep soft shadows with lifted readable detail, end-grain wooden chopping block, white waxed butcher paper and cotton string, brushed steel rails, hooks and counter, white tiles softly out of focus, muted browns, warm greys and deep oxblood, desaturated natural colour, fine film grain, 35mm lens at eye level, shallow depth of field, calm working moments, diverse adults in plain dark aprons, hands and faces natural, raw meat shown cleanly with no blood pooling, modern international-neutral setting, no Japanese elements, no text, no letters, no numbers, no signage, no labels with writing, no logos, no brand marks`
Any board in frame is a **blank slate surface, out of focus**; hand labels on parcels are blank. Reject and regenerate any image with legible text, logos, bad hands/faces, bright red meat dominating, or style drift.

| # | Subject / composition | Native ratio | Page · block | Home |
|---|---|---|---|---|
| H01 | KEY: owner (50s, cropped grey beard, dark apron) lowers a beef forequarter onto the end-grain block, centre-right; a regular (older woman in a wool coat) at left points at a blank slate board behind the counter; side window light from left | 1:1 (1600²) | Home · hero strip photo 1 (440×440) | ✔ |
| H02 | Hands setting a steel tray of freshly cut steaks into the counter, paper underlay, glass edge | 5:6 (1200×1440) | Home · strip photo 2 (300×360); Counter · head | ✔ |
| H03 | A paper-wrapped, string-tied parcel passed across the counter between two pairs of hands | 1:1 | Home · strip photo 3 (380×380); Newsletter · head | ✔ |
| H04 | Cold room: sides of beef hanging on a steel rail, warm doorway light against cool room | 1:1 | Home · strip photo 4 (420×440); Farms · head | ✔ |
| H05 | Top-down flat-lay on butcher paper: six raw cuts in a 3×2 grid (chuck, rib on the bone, sirloin, shin, coiled sausages, mince), even spacing | 3:2 (1800×1200) | Home · rail chips sprite (6 × 30px crops) | ✔ |
| H06 | Chuck piece on paper on dark wood, 45° view | 1:1 | Home · card 1; Counter · card 1 | ✔ |
| H07 | Rib on the bone, dry-aged crust, on paper | 1:1 | Home · card 2; Counter · card 2 | ✔ |
| H08 | Coil of coarse pork sausages with sage leaves | 1:1 | Home · card 3; Counter · card 3 | ✔ |
| H09 | Mince in a steel bowl beside a tray of stock bones | 1:1 | Home · card 4; Counter · card 4; post 3 featured | ✔ |
| H10 | Owner guiding the apprentice's knife at the block, both in profile | 4:5 | Home · intro; About · history; post 2 featured | ✔ |
| H11 | 05:30 back door: delivery of a side of beef onto the rail, dawn blue outside, warm light inside | 4:5 | Home · day; The Day · head | ✔ |
| H12 | Wide: the empty block after closing, a hand scattering coarse salt, knives on a magnetic bar | 2.4:1 (2000×833) | Home · parallax band; The Day · parallax band; post 1 featured | ✔ |
| H13 | Hands folding waxed paper around a joint, string spool, blank label | 1:1 | Home · wrapping; Orders · head | ✔ |
| H14 | Harrow Lane: farmer (woman, 60s) at a field gate with grazing cattle, overcast evening | 1:1 | Home · farm card 1; Farms · story 1 | ✔ |
| H15 | Millbrook: farmer (man, 40s) among outdoor pigs under trees | 1:1 | Home · farm card 2; Farms · story 2 | ✔ |
| H16 | Oaken Ridge: farmer (woman, 30s) walking a lamb flock on a hill track | 1:1 | Home · farm card 3; Farms · story 3 | ✔ |
| H17 | Shop front at dusk from the street: warm window, counter visible, no sign text | 1:1 | About · head | |
| H18 | Counter from the customer side: wrapped parcels on the pickup shelf, a hand writing on a blank order pad | 1:1 | Order for pickup · head | |
No image repeats within a page. Inner heads crop to 440×400 from the native photo. Chip crops of H05 are one image (sprite), counted once.

## 11. Forms (contract v1 — `steps/form-contract-v1` exists)
- Copy `pipeline/assets/forms/shippress-forms.php` → `inc/`, its CSS + editor JS → `assets/` unchanged; require in functions.php. No fake form, no mail/subscribe backend, no plugin dependency, no import-time plugin check.
- **Order for pickup** (`/order-for-pickup/`, contact): in the right 960 column after the intro — PHP island `shippress_form_slot( kind=contact, fallback=<ob_start buffered literal mailto button> )`. Fallback = the T3 double button "Email your order" → `mailto:orders@shio-butchers.example` (unchanged class/href, never a link to /contact/). CF7 first, then WPForms. Recommended CF7 fields (readme, not required): name*, email*, phone, pickup day (select Tue–Sat)*, cuts and weights (textarea)*, notes. No other booking page exists.
- **The Saturday list** (`/newsletter/`): standalone page, slot `kind=newsletter`, email `orders@shio-butchers.example`, label `forms_email`, submit `forms_subscribe`, notice `forms_mail_notice`, subject `forms_mail_subject`. MailPoet (explicit ID) → MC4WP → optional dedicated CF7/WPForms ID via `shippress_form_id`. No plugin: required `type=email` field + submit, native mailto POST, visible notice "Opens your email app. Send the request to join the Saturday list; you are not on it yet."
- **Home §10** "The Saturday list": same newsletter slot on white. **Footer: link only, no form.** No form in the first screen; **no sp-reveal on any form or its parent group**.
- Tokens (style.css): `--sp-form-accent: var(--wp--preset--color--bark)` (#6B5346); `--sp-form-on-accent: #FFFFFF`; `--sp-form-radius: 0`; `--sp-form-focus: #B09D60` (2px outline, offset 2px); `--sp-form-surface: #FFFFFF`; `--sp-form-text: #444444`. Inputs 1px #DCDCDC border (hover #444), height 50px, 16px text; labels 14px/600 #0D0B0A above; textarea min-height 160. Error: #ED4831 → use **#C9371F** (ref red −5% L for AA) 1px border + 14px message; success: #4F6B3A text with 3px left bar (on white). Submit = bark fill 290×50. On paper #EFEBDD: surface #FFFFFF unchanged. **Dark ground** (if a form ever sits on bark/#3B2F2A): surface #4A3C35, text #FFFFFF, accent #B09D60, on-accent #0D0B0A, focus #EFEBDD, error #FF8A73, success #C7D9A8. Test light + paper + dark, 390px + desktop, with real CF7 (no submissions).
- i18n: semantic keys `forms_email`, `forms_subscribe`, `forms_mail_notice`, `forms_mail_subject`, plus `contact_email` (fallback label "Email your order"), localised rewrites in en / zh-TW / ja / fr / de; extract with `L10N_SEMANTIC=1`; check dynamic block attributes in every locale.

## 12. Scroll effects (sp-scroll; from stage-a candidates — max 3 per page)
| Effect | Class | Applied to | Source (trigger / time / easing) |
|---|---|---|---|
| Cards and rows rise in | `sp-reveal sp-reveal--up` (`--sp-dist:24px; --sp-dur:.7s`, default easing cubic-bezier(.23,1,.32,1)); parent `sp-stagger` (0.12s steps) | §3 card grid, §5 hour rows, §7 step rows, §8 farm cards (each card/row; parent stagger), §4 text column; inner pages: card grids and ruled rows after the head | Akomeya has no scroll reveals (T(g)); stage-a "Ours" candidate (IntersectionObserver, enter, 0.7s, ease-out, 24px) |
| Figures count | `sp-reveal sp-count` | §6 figures (21, 3, 41); The Day figures | stage-a candidate (IO, 1.2s easeOutCubic) |
| Parallax | `sp-parallax` | §6 band; The Day band | stage-a candidate (CSS scroll-driven); counterpart of Akomeya's 8s slow image scale |
CSS-only (not sp classes): hover scale 1.06 `transition: transform 8s cubic-bezier(.7,0,1,1)` on strip photos and cards (T(g); hover transition carries `transition-delay:0s`); links .3s ease; sticky compact header (CSS scroll timeline). **Hero (§1–§2) has no reveal; strip children never get reveal; no reveal on forms, price table, legal text, footer.** No GSAP / AOS / Lenis / jQuery; the only script besides sp-scroll.js is a click handler for the strip chevrons/dots (`scrollBy`/`scrollTo`) and an IntersectionObserver with `root` = the scroller (threshold .6) to mark the active dot — no scroll listeners; without JS the dots are anchors and the first is active.

### Parallax (required)
1. **Home §6 "The block"**: Cover `.sb-block-band.sp-parallax`, background **H12**, min-height 560px desktop / 380px mobile, `--sp-par: 10%` desktop, **`6%` at <782px** (kept on mobile). Foreground = paper caption panel (h3, 30 words, three sp-count figures) — static, not in the moving layer. Reference counterpart: Akomeya's very slow image scale (8s) — the same "picture drifts slower than you" calm, moved from hover to scroll.
2. **The Day page band**: same build with H12, `--sp-par: 8%` / 5% mobile, caption "18:00 — the block is scrubbed with salt".
Verification: `check-parallax.mjs` ≥6px shift desktop + mobile; ≤1px under reduced-motion; reveal checks pass with `?sp-motion`.

## 13. Store behaviour
- Declare `add_theme_support('woocommerce')`; style shop/product grids with T2 (1:1, caption below, brass `.onsale` tab 41px, radius 0), buttons with T3/bark tokens, prices tabular-nums nowrap. Not required: without WooCommerce every page works (cards are static blocks; ordering is form/phone/email for pickup). No cart icon in the header unless WooCommerce is active (then a 13px "Basket" text link before the order button).
- theme-meta labels: type `store`; colors `brown`, `warm`, `muted`, `light`; style `photographic`, `documentary`, `clean`, `product`.

## 14. Similarity table (target ~80%)
| Dimension | Reference (token) | Shio Butchers |
|---|---|---|
| Ground / paper / accent / alert | #FFFFFF / #EFEBDD / #B09D60 / #ED4831 (T(a)) | identical hex |
| Ink / body | #000 / #444 (T(a)) | #0D0B0A (L +4.5%) / #444 |
| Dark control | #333 search button (T(a)) | bark #6B5346 order button (plan row, industry) |
| First-screen saturated share | <8% (T(a)) | ≤10% target, cap 15% |
| Grid | 200 rail at x120 + 40 + 960 at x360 (T(c)) | identical at 1440; 1200 container |
| Rail rows | 57px pitch, 30px chips, 1px #EDEDED, black heading rule (T(f)) | identical; 2px heading rule |
| Stage | 960×456 (2.1:1), multi-height butted photos, paper blocks (T(e)) | 960×440 (2.18:1, −16px to keep tabs above the fold), same build, scrolls sideways |
| Pager | 5 dots under slider + side chevrons (T(f)) | 4 dots (one per photo) + chevrons |
| Cards | 225 square 4-up, gap 20, caption below (T(c),(e)) | identical |
| Corner tab | gold 41×41 NEW (T(f)) | brass 41×41 TODAY / km / numbers |
| Section title | centred 28px + Latin sub-label (T(b)) | centred 1.75rem 600 sans + Latin sub-label |
| Body type | 14px / 500 / lh 21 Gothic (T(b)) | 15px / 400 / 1.75 Albert Sans |
| Nav | 12px / 700 (T(b)) | 13px / 600 |
| Button | 290×50 double 1px line, long arrow, 13px (T(c),(d)) | identical |
| Radius / shadow | 0 / header only 0 2px 6px (T(d)) | identical |
| Section padding | ~100px (T(c)) | 100px |
| Back-to-top | gold diamond 64px fixed (T(f)) | brass diamond 56px, static in footer |
| Image hover | 8s cubic-bezier(.7,0,1,1) scale (T(g)) | identical, scale 1.06 |
| Slider motion | 0.5s crossfade (T(g)) | native scroll-snap + dot fade 0.3s |
| Header | compact + sticky on scroll (T(g)) | identical (80→64, CSS) |
| Links | 0.3s ease (T(g)) | identical |
| Scroll reveal | none (T(g)) | sp-reveal--up 0.7s 24px (rule: theme needs 2–3 effects) |
| Imagery | real photography, people with goods (T(e)) | real photography, people with cuts, low-key |

## 15. Home acceptance checklist
- [ ] First screen 1280×800 shows all 6 KV items: utility bar with red note; 200px rail with 6 chip rows; 960×440 stage with paper panel h1 and H01 fully visible; multi-height butted photos + paper rects; 4-dot pager + chevrons; brass TODAY tabs of §3 above the fold.
- [ ] Strip scrolls sideways (trackpad, keys with `tabindex=0`, chevrons, dots); photos pass behind the paper panel; `aria-label="Photographs from this morning, scroll sideways"`.
- [ ] h1 4.5rem (≥4.25rem in theme.json); Schibsted Grotesk / Albert Sans in editor and front end; zh-TW/ja Noto Sans (no Mincho).
- [ ] T1 grid recurs in §3 and §8; T2 tabs on 7 home squares; T3 double buttons under §3, §8, §9; centred titles with sub-labels.
- [ ] 16 home photos, all different; 0 cut-outs; 18 unique site images; no text/logos in any photo.
- [ ] `sp-parallax` §6 passes check-parallax desktop + mobile; reduced-motion 0.
- [ ] Reveal only on §3–§8 content (stagger), none in hero, forms, price table; ≤3 sp effects per page.
- [ ] Prices, hours, names, distances identical to §8 on home, inner pages and five languages.
- [ ] Price table full width ≥782, price nowrap right, unclipped; stacked <782.
- [ ] 390px: panel in flow, no overlap, no vertical labels, no page overflow; rail below the strip.
- [ ] First-screen saturated share ≤10% (cap 15%).
- [ ] ≥250 English words (plan ≥450), ≥3 narrative paragraphs ≥20 words.
- [ ] Newsletter slot in §10 (not first screen, no reveal); contact slot with mailto fallback on Order for pickup; footer has no form.
- [ ] Exactly one top menu; header search box absent.
