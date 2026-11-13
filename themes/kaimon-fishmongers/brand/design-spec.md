# Kaimon Fishmongers — design spec (stage 1, design director)

Type: **store** (independent fishmonger; counter sales, cut to order, phone/email orders for pickup; WooCommerce-compatible but not required — §12). Industry: a fishmonger's counter that buys with the morning day boats and sells through by evening.
Primary reference: **https://abemamoru-shouten.com/** (S5-Style, food and drink maker/shop). Tokens: `brand/reference-tokens.md`, cited as T(a)…T(g). Screens: `ref/abemamoru-first.png`, `ref/scroll-abemamoru-{0,900,1800,2700,3600,5400,7200}.png`, `ref/abemamoru-mobile.png`. Secondary: none.
**Imagery: photo** (stage-a IMAGERY = photo). Real-photography STYLE, film grain, low-key (row `photo_direction: film-grain`), §10. The reference's black brush-ink fish are *translated into photographs* (dark narrow fish photographs hanging on the pale page), not drawn. 0 cut-outs.
Font direction: **sans** — Latin headings **Onest**, Latin body **Albert Sans**; zh-TW / ja **Noto Sans TC / Noto Sans JP** (gothic). No serif / Mincho anywhere (the reference's Shippori Mincho becomes Onest 500).
Similarity target: about **80%** to the reference in palette, image treatment, motion, decoration and layout rhythm; photographs, copy and logo are 100% ours.
Header: no bar on desktop — the reference's furniture (fixed stamp top-left, mini address + stacked menu in the first screen, fixed text stack bottom-left); exactly one top menu (one `core/navigation`). Row page structure: day-schedule.

---

## 1. Signature techniques (3, obvious at a glance, none may be softened)

### T1 — The hanging catch: tall dark fish photographs hanging into an empty pale page at different heights and scroll speeds, a dark full-bleed photo rising under them
- Source: abemamoru-shouten.com first screen (`ref/abemamoru-first.png`, `ref/scroll-abemamoru-900.png`, T(f), T(g)). An almost empty speckled pale page (#F2F2F2, ~70%). Five tall black brush fish (~230×480, head up, tail down) hang at different heights, three cut by the viewport edges (top, left, right); the bottom ~12% of the screen already shows the top of a full-bleed dark table photograph. On scroll the fish layers move faster than the page (mackerel −336px by 700px, clamped) while the dark photo moves slower (~0.14×), so the fish appear to drop away onto the dark table.
- Ours (home §2 `kf-catch` + §3 `kf-dock`): five **narrow, hard-edged, dark film-grain photographs of whole fish** (P01–P05, ratios 0.26–0.36:1, radius 0, no frame, no shadow) hang from the top half of a pale grain page at five different heights, **P01 cut by the left edge, P03 cut by the top edge, P04 cut by the right edge** (same three cuts as the reference). Each strip is its own `sp-parallax__layer` with its own `--sp-par` (6 / 8 / 10 / 12%), so they visibly drift at different speeds. The dark full-bleed film-grain photograph **H01** (owner lifting a whole bream off the ice, a cook pointing at the board) starts **115px above the fold** at 1440×900 and continues for one full screen with `sp-parallax` 8%.
- Positions at 1440×900 (stage height 785 = `calc(100svh - 115px)`, min 680; x in % of viewport so it scales, y in px; rendered size before motion):
  | Strip | Fish | left | width | top | height | cut | `--sp-par` |
  |---|---|---|---|---|---|---|---|
  | P01 | gilt-head bream, head up | **−3.3%** (−48) | 13.9% (200) | 300 | 560 | left edge | **12%** |
  | P03 | sea bass, head up | 43% (620) | 10.4% (150) | **−40** | 440 | top edge | 6% |
  | P02 | mackerel, head up | 61% (880) | 9% (130) | 40 | 460 | — | 10% |
  | P05 | shrimp on crushed ice in a narrow steel tray | 68% (980) | 9% (130) | 520 | 380 | — | 8% |
  | P04 | squid, tentacles down | 89.6% (1290) | 13.2% (190) | 430 | 560 | right edge | 10% |
  The dark strips read as the reference's black ink marks on paper (dark slate background inside each photo, silver fish). Strips are siblings above the dock photo (z 2): P01, P05 and P04 overhang the seam into H01 by 75–115px exactly like the reference fish overlap the table (`.kf-catch { overflow: clip; overflow-clip-margin: 120px }`; where unsupported they are cut at the seam — acceptable).
- Must not soften: the page around the strips stays **empty pale grain** (no cards, no panels, no second photo); strips are **tall and narrow** (never wider than 0.36:1), **dark**, at **five different heights**, **three cut by the viewport edges**; they move at **different speeds**; the dark photo really starts inside the first screen (115px visible at 1440×900); no rounding, no shadow, no hover.

### T2 — Landing index: ruled rows whose thumbnails stack flush against the right viewport edge
- Source: abemamoru-shouten.com recipe section (`ref/scroll-abemamoru-3600.png`, T(c), T(e), T(g)). A vertical section title at the left (x 260); rows from x 432: title (20.6px, 600, ls .04em) left, a two-line description at x 780, an underlined small link; 1px hairline between rows; **202×141 thumbnails flush to the right viewport edge with zero gap**, stacked at 141px pitch so the right edge becomes a continuous photo column; thumbs nudge on hover (`transform .4s ease-in-out`).
- Ours (home §4 `kf-landings`, "Which boat lands which day"): 5 rows, **Tue → Sat**, one boat each (§9): left cell = day (Onest 600 .8125rem caps ls .14em, `tide`) over boat name (h3 Onest 600 1.3125rem); middle cell (x 54%) = one sentence on what she brings (≤ 18 words, .9375rem/1.9) + meta line "Lands 04:40 · Quay 2" (.8125rem `ink-2`) + link "What she brings" with the 28px outline circle arrow (T4). Row height **141px**, rows ruled by 1px `line` that run from x 30% **to the thumbnail edge**; thumbnails **L1–L5, 202×141 (1.43:1), `object-fit: cover`, flush to the right viewport edge, 0 gap between them**, so the five form one unbroken 202×705 column at the right edge. Hover/focus on a row: thumb `transform: translateX(-12px)` `.4s ease-in-out` (`transition-delay: 0s`). Vertical section title "Landings" at x 18% (desktop ≥1024, `writing-mode: vertical-rl`, Onest 500 2.125rem ls .04em), horizontal above the rows below 1024.
- Must not soften: thumbnails **touch the viewport's right edge and each other** (no gap, no margin, no radius); rows are **ruled** with hairlines; the column of five thumbs is continuous. Below 782px: each row becomes a 2-column grid (text left, 112×78 thumb flush right edge of the viewport, still 0 gap between rows' thumbs).

### T3 — Corner furniture: fixed stamp top-left, fixed text stack bottom-left, boxed vertical plate top-right, vertical section titles
- Source: abemamoru-shouten.com all screens (T(c), T(f)): red seal logo fixed in a 60px left gutter (92×156); a grey three-line text stack "Cart (0) / My page / Contact" fixed bottom-left (14px, 600); a boxed vertical title plate (173×346, 1px ink frame) touching the top edge at the top-right of the first screen; vertical section titles at the right edge (34px, ls .04em) for product sections, at the left for recipes.
- Ours (site-wide, header/footer template parts):
  - **Stamp**: our own mark — a 64×64 `accent` (#AA0813) square with a white single-line hook-and-fish glyph (SVG, drawn by us), over "KAIMON / FISHMONGERS" in Onest 600 .625rem caps ls .16em `ink`; total 92×150. `position: fixed; left: 60px; top: 56px; z-index: 40` at ≥1024. Links home.
  - **Corner stack** (plain paragraph links, **not** a second `core/navigation`): "Menu ↑" (anchor `#kf-nav`) / "Order" / "Visit" / "The Landing List", and "Basket (n)" first only when WooCommerce is active (PHP in the footer pattern). Albert Sans 600 .9rem (14.4px) ls .04em, `ink-2`, line pitch 33px, `position: fixed; left: 60px; bottom: 60px` at ≥1024. Each link has a `ground` chip at 88% opacity (padding 2px 6px) so it stays readable over the dark photos.
  - **Plate**: on the home first screen and on every inner page head: 1px `ink` frame, **173×346**, top border off (touches the top edge), at `right: 4%` (x 1208 at 1440); inside, two vertical-rl columns Onest 500 1.75rem ls .06em: "Day boats," / "Quay Row." (home) — inner pages put the page's 2–3-word kicker in it. Below 1024 the plate is horizontal: a 1px-framed inline box under the h1 (§3 mobile).
  - **Vertical section titles** at ≥1024: right edge (`right: 4%`) for §5 Cut to order, §7 On the board; left (x 18%) for §4 Landings and §6 Kitchens — exactly as the reference alternates them.
- Must not soften: stamp and stack are **really fixed** (stay while scrolling) at ≥1024; the plate keeps the 1px frame and vertical text on desktop; the accent is used **only** on the stamp, the circle arrows and the active-link underline.

### Supporting decoration (T4, from the reference, always on)
- **Speckled grain ground**: `assets/grain.svg` tile 240×240, 26 dots r .6–1.0px, fill #0A0F0F at opacity .16–.30, on `body` over `ground` (T(a)); no text.
- **White tab hanging from the dark photo** (T(f), `ref/scroll-abemamoru-900.png`): a `paper` (#FFFFFF) block hanging off the lower edge of H01 (§3).
- **Hairline with a + tick**: 1px `line` rules with a 7×7 "+" (1px `ink-3`) at the left end under every text link and between footer rows (T(d)).
- **28px outline circle arrow**: 1px `accent` circle, 7px chevron inside, after links (T(d)); hover: chevron translateX(3px) .4s ease-in-out.
- Not used (already taken by other themes or avoided): three-hairline wave divider, torn-paper edge, flush-both-edges portrait pair, sticky picture swap, sidebars.

### Continuation on inner pages (all 10 content pages; ≥4 required)
Every inner page opens with a **small catch head** (T1 at smaller scale): pale grain stage **460px** (mobile: text first, rail below, as home) with **three** hanging strips from P01–P05 at three heights (one cut by an edge), each `sp-parallax__layer` (6 / 9 / 12%, mobile 4 / 6 / 8%), the T3 plate with the page kicker, h1 3.25rem at x 20%, then the page's **dark head photo** (full bleed, 560px, `sp-parallax` 6%) with the white tab carrying the page lead. T3 furniture is on every page. T2 flush-right index rows appear as listed.
| Page | T1 small catch (strips) + dark head photo | T2 flush-right index rows | T3 plate kicker |
|---|---|---|---|
| About | P01 P03 P04 + A1 | 3 "years" rows (2009 / 2014 / 2021) with H01, V1, K1 thumbs | "Since / 2009." |
| The Boats | P02 P04 P05 + A1 | the 5 boats (L1–L5), full rows with a second paragraph each | "Five / boats." |
| The Counter | P01 P02 P05 + D1 | — (price table §8) | "On the / board." |
| Cut to Order | P03 P01 P02 + C1 | 4 cuts (whole cleaned · fillets · butterflied · steaks) with H01, D1, L2, L4 thumbs | "While / you wait." |
| The Day | P04 P05 P03 + F1 | — (day strip, §4) | "04:40 – / 18:00" |
| Kitchens | P02 P03 P05 + R1 | 3 kitchens (§9) with K1 (Linnet), D1 (school), F1 (Oxbow) thumbs; no footer photo band on this page | "Nothing / wasted." |
| People | P01 P04 P02 + H01 | 7 people as rows (no portrait grid; thumbs only on 3: A1 Maren, C1 Idris, D1 Lucía) | "Seven / of us." |
| Visit | P05 P01 P03 + V1 | — | "Quay Row / 4." |
| Order (contact) | P03 P05 P04 + D1 | — | "Call / or write." |
| The Landing List | P04 P02 P01 + L1 | — | "Mondays, / 17:00." |
| Journal (archive / posts page / category / tag templates) | (template) P02 P03 P05 + no dark photo | posts as T2 rows, featured image 202×141 flush right | "Journal." |
(Same assignment as §10; no photo repeats on one page — a strip and a thumbnail of the same image never share a page; checked per page in §10.)

---

## 2. Key visual concept

**(1) Reference first screen, story, signature motion.** abemamoru-shouten.com opens on an empty, speckled pale page — like paper on a fishmonger's table — through which five big black brush-ink fish hang head-up, tail-down at different heights, three of them cut by the screen edges. A small vertical tagline ("the goodness of fish, nothing left over"), a boxed vertical title plate touching the top-right edge, a red seal at the left and a stacked menu are the only other marks. At the bottom edge the top of a dark full-bleed photograph (cooked fish on a plum plate on a walnut table) is already visible. Story: *the catch comes in from the sea and arrives on your table, with nothing wasted.* Signature motion: as you scroll, the fish layers move faster than the page and the dark photo moves slower, so the fish seem to drop away while the table rises; a white tab with the headline hangs from the photo's lower edge.

**(2) Our transposition (fishmonger, same composition, same motion idea; imagery type = photograph).** A fishmonger's counter at dawn. The pale grain page is the **empty ice board before the boats come in**; five **narrow dark film-grain photographs of whole fish** — bream, sea bass, mackerel, shrimp on ice, squid — hang into it like fish on the hook rail at five different heights, three cut by the screen edges. At the bottom edge the dark full-bleed photograph **H01** is already visible: Maren Holt lifts a whole gilt-head bream off the crushed ice with both hands while a cook in whites points at the day's board behind the counter. As you scroll, each fish strip drifts at its own speed and the counter photo rises more slowly under them — the catch dropping onto the counter. A white tab hanging from H01's lower edge carries the day's line. Story: *bought with the morning boats, cut while you wait, sold through by evening, and what is left goes to the kitchens.* Copy: mini address (4 lines), stacked menu, vertical tagline "Nothing from the boat is wasted.", h1 **"Bought at dawn. Sold by evening."**, one sentence, one circle-arrow link.

**(3) KV checklist** (all on the home first screen, all visible at 1440×900 and 1280×800; at 390×844 items 1, 2, 4, 5 visible, 3 as a horizontal box, 6 is just below the fold):
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Speckled pale paper ground, almost empty | `ground` #F0F2F1 + grain.svg dot speckle; nothing but strips, type and plate on it | whole stage (0–785 at 1440×900) | static | — |
| 2 | Five black brush fish hanging at different heights, three cut by the edges | Five narrow dark film-grain whole-fish photographs as hard-edged strips (table §1 T1): P01 cut left, P03 cut top, P04 cut right | upper 60% / right half, P01 left | drop-in on load (translateY −30px → 0, 1s, `cubic-bezier(.22,.61,.36,1)`, stagger .12s, transform only); scroll: `sp-parallax` each strip its own `--sp-par` 12 / 10 / 6 / 8 / 10% | P01, P02, P03, P04, P05 |
| 3 | Boxed vertical title plate touching the top-right edge | 1px ink plate 173×346 "Day boats, / Quay Row." vertical-rl Onest 1.75rem | top-right, x 1208, y 0 | static | — |
| 4 | Dark full-bleed table photograph already visible at the screen bottom, slower parallax | Film-grain H01 (owner lifting a bream off the ice, cook pointing at the board), full bleed, 115px visible at 1440×900, image 1440×1120 in a 900 band | bottom 115px, continues as §3 | `sp-parallax` `--sp-par: 8%` (mobile 5%) | H01 |
| 5 | Red seal fixed in the left gutter + mini Latin address + stacked menu + small vertical tagline | Our brick-red stamp (fixed 60/56), 4-line caps address at x 16%, stacked menu (6 links, 1.3125rem, 52px pitch), vertical tagline "Nothing from the boat is wasted." at x 36% | left column | static | — |
| 6 | White tab with the headline hanging from the photo | `paper` tab, 420 wide, right 4%, top edge 120px above H01's bottom, h2 "Whole fish on ice, cut while you wait." | at the H01 / pale seam (§3, second screen at 1440; the tab's top is in view by 200px scroll) | none | H01 |
Plus our row-required h1 (largest type 4.5rem) on the empty pale area at x 16%, y 470.

---

## 3. Home page — block order

Grid tokens (T(c)): left gutter **60px** (fixed stamp), content starts at **20%** (`--kf-x: max(20vw, 232px)` ≥1280; 180px at 1024–1279; 20px <1024), right gutter **200px** (vertical titles; 4% + 120). Narrow text column **520**, wide column **948** (292→1240 at 1440). Section gaps **9.5rem** (152px) default, **14rem** (224px) before §5 and §9 (T(c) 150–230px); mobile 5rem. Body copy ≥ 400 English words; narrative paragraphs ¶ (≥ 3 of ≥ 20 words).

| # | Block (pattern slug) | Purpose | Layout | Photo(s) | Copy | Motion |
|---|---|---|---|---|---|---|
| 1 | Header (template part `header`) | brand + the one menu | T3: fixed stamp; absolute (not sticky) over the stage: mini address + stacked `core/navigation` (`#kf-nav`) at x 16%; mobile: static 64px bar | — | 6 links | none |
| 2 | `kaimon/catch` | KV (§2) — T1 stage | pale grain stage, 5 strips, plate, tagline, h1 + sentence + link at x 16% y 470 | P01–P05 | tagline 6 words; h1 6 words; sentence ¶ ≈24 words; link "See what landed today" | strips drop-in + `sp-parallax` per strip |
| 3 | `kaimon/dock` | narrative: the counter at dawn | full-bleed Cover 900px (mobile 520px) H01 (`sp-parallax` 8%, overlay `deep` at 10%); white tab hanging off its lower edge at right 4% (420×≈320, padding 40/36): label "THE COUNTER" + h2 2.125rem; then on the pale ground, 152px below the photo, narrow column 520 at x 20%: two ¶ (≈60 + ≈55 words) and link "About the shop" | H01 | label, h2, 2 ¶ ≈115 words | text column `sp-reveal--up` |
| 4 | `kaimon/landings` | which boats land which day (T2) | vertical title "Landings" at x 18%; label + h2 "Which boat lands which day" + intro ¶ ≈35 words in 520 at x 30%; 5 ruled rows 141px pitch from x 30% to the thumbs; thumbs L1–L5 202×141 flush right edge, 0 gap | L1–L5 | 5 × (day, boat, ≤18-word line, meta, link) | `sp-stagger` on the row list + `sp-reveal--up` on each row (text only; the thumbs ride with their row) |
| 5 | `kaimon/cut` | how a fillet is cut to order | ref product row (T(c), T(e)): left column 520 at x 20%: label, h2 "Cut while you wait", ¶ ≈45 words, then 4 numbered ruled steps (Onest 600 .8125rem "01–04" `tide` + h3 + 1 sentence); right: **C1 portrait 630×979 (0.64:1)** at x 46%→90% top-aligned with the h2; vertical title "Cut to order" at right 4% | C1 | ¶ 45 + 4 × 20 words | C1 `sp-reveal--zoom` (1.6s, stands in for the reference cross-fade); steps `sp-stagger` + `sp-reveal--up` |
| 6 | `kaimon/day` | the day schedule (row page_structure) | label + h2 "A day at the counter" + ¶ ≈30 words at x 20%; then a **horizontal scroll strip** from x 20% **to the right viewport edge** (last card cut by the edge as a scroll hint): 8 time stops (§9) as 280px columns, each: 1px `line` top rule with + tick, time Onest 500 2.5rem tabular-nums, h3 1.0625rem 600, 1–2 sentences .9375rem; `scroll-snap-type: x mandatory`, thin 2px scrollbar `line`; region `tabindex="0"` `aria-label="A day at the counter, 04:40 to 18:00"` | — | 8 × ≈16 words | `sp-reveal--up` on the **strip container only** (never on its children) |
| 7 | `kaimon/kitchens` | which kitchens take the trim (proof) | vertical title "Kitchens" at x 18%; K1 landscape **562×376 (1.5:1)** at x 30% (ref wide pair size, single, not flush); right of it at x 72%: label + h2 "Where the trim goes" + ¶ ≈50 words; below, 3 kitchens in 3 text columns across 30%→96% each with + tick hairline: name (h3), which day, what they cook (≈22 words) | K1 | ¶ 50 + 3 × 22 words | K1 `sp-reveal--zoom`; columns `sp-stagger` + `sp-reveal--up` |
| 8 | `kaimon/board` | prices + hours | vertical title "On the board" at right 4%; label + h2 "On the board this week" at x 20%; **price table 948 wide** (5 of the 8 §9 items: 1, 2, 3, 4, 7), 2 columns: item (pair: name + short cut note `ink-2`) / price nowrap right; note line; then hours as a 2-column ruled list (Tue–Fri / Sat / Sun–Mon / phone orders) + address; link "The full board" | — | ≈40 words | none (price list and hours: no reveal) |
| 9 | `kaimon/journal` | latest 3 posts | ref news list: ruled rows at x 20%→1240: date (Albert Sans 500 .8125rem tabular-nums) · category (`tide` caps .75rem ls .14em) · title (Onest 500 1.125rem) · circle arrow; no thumbnails on home | — | titles | `sp-reveal--up` on the list |
| 10 | `kaimon/letter` | newsletter (form slot, §11) | pale `ground`, 948: left 420 = label "THE LANDING LIST" + h2 "Which boats, every Monday" + 1 sentence (≈25 words); right 480 = newsletter `shippress_form_slot` | — | ≈30 words | none (form) |
| 11 | `kaimon/footer-photo` (in footer template part) | the closing dark moment | full-bleed F1 **1440×756** band (`sp-parallax` 8%, ref footer photo −113px) — no text on it | F1 | — | parallax |
| 12 | Footer (template part) | address, hours, menus | `sea-glass` #B9CDD0 ground + grain; ref footer ruled rows (T(f)): two groups "Shopping here" (Ordering · Cut to order · Paying · Wrapping) and "The shop" (Address · Telephone · Write to us · Hours) as label | item | detail | circle arrow rows (1px `ink` rules, 58px pitch); 3-column link list; © line .75rem | — | | none |

**Home photo positions: 14 images, all unique** (P01–P05, H01, L1–L5, C1, K1, F1) ≥ 8 required. Words: ≈410 English body words; ¶ in §2, §3 (2), §4, §5, §6, §7.

### First-screen composition
- **Desktop 1440×900** (`kf-catch` stage 0–785, H01 785–1685):
  - Fixed stamp x 60–152, y 56–206.
  - Mini address at x 231 (16%), y 32–98: "HARROWMOUTH / 4 QUAY ROW / KAIMON / FISHMONGERS" Onest 500 .6875rem caps ls .16em lh 1.5 `ink`.
  - Stacked menu x 231, y 190–450: 6 links Onest 500 1.3125rem `ink`, 52px pitch (The Boats / The Counter / Cut to Order / The Day / Kitchens / About); hover/current = 1px `accent` underline 6px below.
  - Vertical tagline x 520 (36%), y 190–430: "Nothing from the boat is wasted." vertical-rl Albert Sans 500 .875rem ls .12em `ink` (desktop only; below 1024 it becomes the horizontal label above the h1).
  - h1 x 231, top y 470: "Bought at dawn. / Sold by evening." Onest 500 **4.5rem** lh 1.06 ls −.005em `ink`, 2 lines (≈600px wide); 24px; sentence max 420px Albert Sans 1.0625rem/1.9 `ink`: "Kaimon buys from five day boats on Harrowmouth quay every morning and cuts each fish to order until the ice is bare."; 20px; link "See what landed today" + 28px circle arrow (→ `#landings`).
  - Strips P01–P05 per §1 T1 table; plate x 1208–1381, y 0–346.
  - **No strip may intersect any text box** (address, menu, tagline, h1, sentence, link, plate) at 1024, 1280, 1440 or 1920, including ±`--sp-par` travel; if one does, shorten that strip's height (heights are `clamp()`ed by viewport height: `min(560px, 62svh)` etc.), never move the text onto a strip.
  - Corner stack fixed bottom-left (x 60, bottom 60) over the stage, then over H01.
  - H01 visible 785–900 (115px).
- **Tablet 1024–1279**: same composition with `--kf-x` 180px, h1 clamp → ≈3.75rem, strips scale in vw, P05 hidden < 1180px.
- **782–1023 and mobile 390×844**: no absolute positioning of text, no vertical writing. Header bar 64px (`ground`): stamp reduced to the 44×44 square + "KAIMON" Onest 600 .875rem caps ls .16em left; boxed "Menu" button (1px `ink`, 104×40, ref mobile) right; menu overlay `deep` #26373A full screen, links Onest 500 1.75rem `ground`. Then in flow: padding 28px 20px: tagline as label (.75rem caps ls .14em `tide`) / h1 **2.75rem** lh 1.08 (3 lines allowed) / sentence 1rem/1.85 / plate as a horizontal 1px-framed inline box "Day boats, Quay Row." .875rem padding 8px 12px / link. Then the **catch rail**: 300px tall flex row, `overflow: clip`, strips P01, P03, P02, P04 (widths 92 / 70 / 64 / 92px, heights 260 / 220 / 240 / 280, tops 40 / 0 / 24 / 60 via margin-top; P01 starts at −24px (cut left), P04 ends 24px past the right edge (cut right)); parallax `--sp-par` 6 / 4 / 5 / 6%. Then H01 (Cover 520px, 4:5 crop `object-position: 40% 50%`, `sp-parallax` 5%); its top is visible at 844. Nothing overlaps text; the rail sits below all text.

### Comparison with recent themes' home orders (must not match)
| Theme | Home order | Kaimon difference |
|---|---|---|
| Kaze Clinic | floating slab / full-bleed washed hero + info bar / colour-flip lead / 3-col pair list / method rows / mist card / fees / hours / journal / newsletter / patina footer | no header slab, no bar at all; first screen is an empty pale page with hanging photo strips (not a full-bleed photo); no info bar, no colour flip, no 3-column photo list |
| Akiha College | serif question + framed window hero with docked nav / case wall rail + index / step-through / rail rows / curtain / employer rows / fee table / journal rows | no framed window, no docked nav (menu is a stacked list on the page), no rail+index; our index rows end in a flush-right photo column |
| Kikai Fair | notice strip / diagonal hero + twin bars / poster cards / value bands / parallax access band / pass band | no notice strip, no diagonals, no poster cards, no coloured value bands; parallax is on the hero strips and two photographs |
| Mise Studio | split hero (photo + grey panel) / brief ring / rooms / service band / masonry / dated process sheet / fees sheet / flush cells | no split hero, no ring headings, no masonry; the only "sheet" is one price table |
| Shio Butchers (same food-retail family) | utility bar / rail + framed multi-height photo stage / 4 square cards / intro / ruled hour rows / salt-block parallax with counts / wrapping steps / farm squares / order band | no utility bar, no product cards or squares, no counts; the day is a horizontal scroll strip (not hour rows); boats are flush-right index rows; the hero is a pale page with hanging strips |
| **Kaimon Fishmongers** | stamp + stacked menu over the hanging catch / dark dock photo with hanging white tab + narrative / flush-right landing index / tall portrait + cut steps / horizontal day strip / kitchens / board + hours / text news list / letter / footer photo / sea-glass ruled footer | the only one whose first screen is mostly empty pale ground with dark vertical photo strips; vertical titles alternate left/right; two dark full-bleed photo moments |

---

## 4. Inner pages (10 pages + Journal + 3 posts)

Slugs identical in all five locales. Every page: small catch head + dark head photo + white tab (§1 continuation), body on the 20% / 520 / 948 grid, vertical section titles ≥1024.
| Page (slug) | Role | Key content |
|---|---|---|
| About (`about`) | about | founded **2009** by Maren Holt in a former net store at 4 Quay Row; named after the old sea gate at the end of the row; why only day boats; "nothing wasted" (trim to kitchens since 2014); three dated T2 rows (2009 opened · 2014 first kitchen trim run · 2021 the Saturday scallop boat joined); a ¶ on a daily routine pointing to The Day |
| The Boats (`boats`) | services/source | head photo A1; the 5 boats as full T2 rows (L1–L5): day, boat, skipper, gear (line, small trawl, pots, nets, hand-dived), what she brings by season, ≈60 words each; "Weather days" ¶ (no boat = smaller board, we say so on the Landing List); how buying on the quay works |
| The Counter (`counter`) | prices | full **price table, 8 items** (§9), note that prices move with the boats; how to choose a whole fish (eyes, gills, smell) in 4 ruled pairs; paying (card, cash); wrapping (waxed paper, bring your own box welcome) |
| Cut to Order (`cut-to-order`) | process | the 4 steps (§9) large; C1 portrait 630×979; 4 cuts as T2 rows (whole cleaned H01 · fillets skin on/off D1 · butterflied L2 · steaks L4) with "about 6 minutes a fish"; frames and heads bagged for stock on request (free) |
| The Day (`the-day`) | day schedule | the 8 time stops (§9) as the horizontal strip (larger: 360px columns), then each stop expanded as a 2-column ruled block (time left, 2–3 sentences right); Saturday variant (closes 14:00); Sunday–Monday: no boats, shop closed |
| Kitchens (`kitchens`) | proof / cases | head photo R1; the **3 kitchens** (§9) as T2 rows with thumbs (K1, D1, F1) and 2 ¶ each; the kitchen trim box (€18.00 / 5 kg weekly, kitchens only); how a kitchen joins (write by Friday for the next Tuesday) |
| People (`people`) | people | **7 people** (§9) as ruled rows: name (h3) / role / 2 sentences; T2 thumbs on 3 rows only (A1, C1, D1); no portrait grid |
| Visit (`visit`) | location | address, hours table (stacks on mobile), on foot from the harbour bus stop (3 min), bike rack, 2 loading bays for kitchens 11:30–12:30, step-free counter; V1 |
| Order (`order`) | contact | form slot + mailto fallback (§11); phone orders 07:30–10:00 for same-day cuts, pickup from 12:00; what to tell us (fish, weight or people, how you'll cook it, pickup day); D1 |
| The Landing List (`landing-list`) | newsletter | standalone subscribe page: what is in it (3 ruled pairs: expected boats · likely fish · one way to cook it), every **Monday 17:00**, ≈3 minutes' read; form slot (§11) |
| Journal (`journal`) | posts page (role `posts`, empty) | post list (archive template with T2 rows, featured image flush right) |
| Posts (3) | article | "How to tell a fish came in this morning" (featured P01; category Counter notes `counter-notes`; tags bream, freshness) · "What the Thursday boat brings in October" (featured L3; category Boats `boats`; tags crab, seasons) · "A stock from frames: what the kitchens make with our trim" (featured K1; category Kitchens `kitchens`; tags stock, trim) |

theme-meta `pages` / demo `screens`: home → `/`, about → `/about/`, news → `/journal/`, article → first post, category → `/category/boats/`, tag → `/tag/bream/`, newsletter → `/landing-list/`, contact → `/order/`.
Top menu (one `core/navigation`): The Boats · The Counter · Cut to Order · The Day · Kitchens · About. Corner stack: Menu ↑ · Order · Visit · The Landing List (+ Basket when WooCommerce is active). Footer link list: People · Journal · Visit · Order · The Landing List · Privacy.
Templates: `front-page`, `page`, `page-landing-list` (or page), `single` (catch head with the post's featured image as dark head photo), `archive`, `category` (= archive), `tag` (copy of archive, TAG label), `home` (posts page), `404`, `search`. WooCommerce templates only styled, not required.

---

## 5. Colour (T(a): speckled pale ground, near-black ink, dark photo moments, one tiny red accent; tide family for the row)

Reference hexes kept (±5% lightness max) for similarity; the row's tide colours take the reference's link/dark-photo roles.
| Token (theme.json slug) | Hex | Share | Source / reason |
|---|---|---|---|
| `ground` | **#F0F2F1** | ~70% | T(a) #F2F2F2, −0.4% L with a faint tide tint |
| `paper` | **#FFFFFF** | ~2% | T(f) white tab |
| `ink` | **#0A0F0F** | text, plate frame, rules in footer | T(a) #000, +4.9% L toward tide (within ±5%) |
| `ink-2` | **#696A6B** | secondary text, meta, corner stack | T(a) exact; 5.0:1 on `ground` |
| `ink-3` | **#818283** | grain dots, + ticks, disabled only (never text) | T(a) exact; 3.6:1, so no text |
| `line` | **#BDBDBD** | hairlines | T(d) exact |
| `accent` | **#AA0813** | ≤ 1% | T(a) exact: stamp, circle arrows, active underline, error. Kept from the reference instead of stage-a's brick #B4492B: it is the seal colour of the reference and stays ≤1%, which serves the 80% similarity target better; 6.7:1 on `ground` |
| `tide` | **#3E5556** | ≤ 3% first screen, ~4% page | row hex (Tetsu-onando, iron navy); labels, links, step numbers, submit fill (7.0:1 on `ground`, 7.5:1 white on it) |
| `deep` | **#26373A** | photo overlay tint 10%, mobile menu overlay, dark-ground form token | tide darkened; stands in for the reference's dark walnut band ~#2B1D17 (T(a)) — the dark *photographs* carry the reference's ~20% dark share |
| `sea-glass` | **#B9CDD0** | footer only | T(a) "pale aqua footer wash", sampled from `ref/scroll-abemamoru-7200.png` |
| `ice` | **#E3E9E7** | success panel, table hover row | ground darkened 5% |
Why: the reference is almost colourless and its life comes from dark food photographs; a fishmonger fits that exactly. The row's tide (#3E5556) replaces nothing in the reference except its role as link colour and dark-moment tint, and no recent theme uses this red + slate pair (Kaze green, Akiha, Kikai ochre, Mise plum, Shio brass/bark).
**First-screen saturated share: target ≤ 5%** (reference ≈ 1%; house cap 15% `check-first-screen.py`; row note 30%). Only the stamp, circle arrow and photo colour accents count; the strips are dark and near-monochrome (STYLE says muted, desaturated).

---

## 6. Typography (sans)

Fonts loaded **only via theme.json `fontFamilies` + `fontFace`** (woff2 in `assets/fonts/`, OFL, listed in theme-meta `fonts[].files` with `licenseFile`; family names in readme.txt), so the editor iframe and front end render identical faces. style.css has `:lang(` rules → copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it.
- `onest`: Onest variable 400–700 (Latin, Latin-ext, Cyrillic not needed).
- `albert-sans`: Albert Sans variable 400–700 (Latin, Latin-ext).
- `noto-sans-tc`: Noto Sans TC 500 (headings; zh-TW subset of every zh-TW demo string + punctuation; Hokuto/Hada substitute subsetting method — the repo subset script is known broken).
- `noto-sans-jp`: Noto Sans JP 500 (headings; ja subset, same method).
Stacks:
- Latin headings: `"Onest", "Helvetica Neue", Arial, sans-serif`
- Latin body: `"Albert Sans", "Helvetica Neue", Arial, sans-serif`
- `:root:lang(zh-TW)` headings: `"Onest", "Noto Sans TC", "PingFang TC", "Microsoft JhengHei", sans-serif`; body: `"Albert Sans", "PingFang TC", "Microsoft JhengHei", "Heiti TC", sans-serif` (no bundled TC and no JP font in body — repo contract).
- `:root:lang(ja)` headings: `"Onest", "Noto Sans JP", "Hiragino Sans", "Yu Gothic", sans-serif`; body: `"Albert Sans", "Hiragino Sans", "Hiragino Kaku Gothic ProN", "Yu Gothic", Meiryo, sans-serif`.
- CJK: heading sizes × 0.75 (h1 3.375rem), body line-height 1.85, ls .04em. fr/de: `hyphens: auto` on body, h2, h3. CJK pages also stay horizontal at <1024 (no vertical writing on mobile in any locale); at ≥1024 vertical titles/plate in ja / zh-TW use `text-orientation: upright` for CJK glyphs.
| Role | Font / weight | Size (desktop → mobile) | Line-height | Tracking | Source |
|---|---|---|---|---|---|
| h1 home | Onest 500 | **4.5rem** (72px; theme.json largest `xx-large` = `clamp(2.75rem, 1.4rem + 3.8vw, 4.5rem)`) → 2.75rem | 1.06 | −.005em | row ≥4.25rem; ref has no display size |
| h1 inner | Onest 500 | 3.25rem → 2.25rem | 1.12 | 0 | |
| h2 | Onest 500 | **2.125rem** (34px) → 1.625rem | 1.25 (ref 1.05 is for vertical CJK; Latin 2-line h2 needs 1.25) | **.04em** | T(b) H2 33.9px ls .04em |
| vertical title / plate | Onest 500 | 2.125rem / plate 1.75rem | 1.2 | .04em / .06em | T(b) vertical titles 34px |
| h3 | Onest 600 | **1.3125rem** (21px) → 1.1875rem | 1.5 | **.04em** | T(b) recipe H3 20.6 / 600 / 1.5 / .04em |
| body | Albert Sans 400 | **1.03125rem** (16.5px) → 1rem | **2.0** → 1.85 | .02em | T(b) body 16.5 / 2.0 |
| stacked menu | Onest 500 | 1.3125rem | 1 (52px pitch) | .02em | ref first screen menu |
| corner stack / small nav | Albert Sans 600 | **.9rem** (14.4px) | 2.3 (33px pitch) | .04em | T(b) nav 14.4 / 600 / .04em |
| caption / meta | Albert Sans 500 | **.8375rem** (13.4px) | 1.75 | .03em | T(b) caption 13.4 / 1.75 |
| label | Onest 600 caps, `tide` | .75rem | 1.4 | .14em | ref mini Latin caps, tracked |
| mini address | Onest 500 caps | .6875rem (ref 9–10px raised to 11px) | 1.5 | .16em | T(b) |
| time (day strip) | Onest 500 tabular-nums | 2.5rem → 2rem | 1 | 0 | |
| price | Albert Sans 600 tabular-nums | 1.0625rem | 1.6 | .02em | |

---

## 7. Motion and scroll (sp-scroll)

Three sp-* effect kinds on home (max 3): **parallax**, **reveal--up (+stagger)**, **reveal--zoom**. Hero (`kaimon/catch`) gets **no** `sp-reveal`. Forms, price table, hours and legal text: none. Theme sets `--sp-dist: 24px; --sp-dur: .6s; --sp-ease: cubic-bezier(.22,.61,.36,1)` on `:root` (zoom keeps its 1.6s).

### 7.1 Chosen effects (from stage-a "Scroll effect candidates", source abemamoru-shouten.com)
| # | Reference effect | Ref trigger / time / easing | sp-* class + values | Where |
|---|---|---|---|---|
| E1 | Fish layers faster than the page (mackerel −336px by 700px, clamped) + hero photo slower (−112 → +56px over ~1200px, ~0.14×) + footer photo ~0.15× | JS scroll handler writing translateY; linear, scroll-linked | `sp-parallax` (CSS `animation-timeline: view()`, JS IO fallback): catch stage container with 5 `.sp-parallax__layer` strips `--sp-par` 12/10/6/8/10% (mobile 6/5/4/6%); dock H01 Cover `--sp-par: 8%` (5% mobile); footer F1 8% (5%); inner heads strips 6/9/12%, head photo 6% | home §2, §3, §11; every inner page head |
| E2 | Section titles reveal (scaleY .92 → 1) | on enter; ~.6s; ease-out | `sp-reveal sp-reveal--up` (24px, .6s, `cubic-bezier(.22,.61,.36,1)`); lists `sp-stagger` (.12s steps) | §3 text column, §4 rows, §5 steps, §6 strip container, §7 columns, §9 list; inner page sections |
| E3 | Secret-recipe photos cross-fade (slideshow timer, ~1s) | timer; opacity | **not reproduced** (no JS timers); `sp-reveal sp-reveal--zoom` (scale 1.06 → 1, 1.6s) on the single large photos as the "image arrives" moment | §5 C1, §7 K1; Cut to Order C1 |
Hover (theme CSS, not scroll; ref `transform .4s ease-in-out`): T2 thumbs translateX(−12px), circle-arrow chevron translateX(3px), both `.4s ease-in-out`, `transition-delay: 0s` (stagger pitfall).
Load (theme CSS, hero only, not a reveal): strips `kf-drop` `transform: translateY(-30px) → none`, 1s `cubic-bezier(.22,.61,.36,1)`, delays 0 / .12 / .24 / .36 / .48s, **transform only** (opacity untouched, uses `transform` so it composes with sp-parallax's `translate`); scoped `@media (prefers-reduced-motion: no-preference)` + `html.sp-js:not(.sp-no-motion)`; editor and `?sp-static` show the final state.
Not used: Nuxt scroll handler, any scroll listener, GSAP/ScrollTrigger/Lenis/AOS, timers.

### 7.2 Parallax (required)
| Where | Moving layer(s) | Foreground (static, outside layers) | `--sp-par` | Reference motion it stands for |
|---|---|---|---|---|
| Home §2 `section.kf-catch.sp-parallax` | 5 × `figure.kf-fish.sp-parallax__layer` (each `style="--sp-par:12%"` etc.) with `img` P01–P05 | address, menu, tagline, h1, sentence, link, plate | 12 / 10 / 6 / 8 / 10% desktop; mobile rail 6 / 4 / 5 / 6% | fish layers drifting faster than the page |
| Home §3 `kf-dock` (Cover `.sp-parallax`) | `.wp-block-cover__image-background` H01 | white tab, overlay | **8%** desktop, **5%** <782 | the dark table photo rising slower under the fish |
| Footer F1 band `.sp-parallax` | `figure > img` F1 | none (no text on it) | 8% / 5% | ref footer photo parallax (−113px) |
| Inner heads | 3 strip layers + head Cover | h1, plate, tab | strips 6/9/12% (mobile 4/6/8%), Cover 6% (4%) | same as home |
Structure (home §2): `section.kf-catch.sp-parallax` (position relative, height `calc(100svh - 115px)` min 680 at ≥1024, `overflow: clip; overflow-clip-margin: 120px`, z 2, background transparent over a `ground` + grain fill that ends at the stage's bottom) → `div.kf-catch__text` (z 3) + `div.kf-plate` + five `figure.kf-fish.kf-fish--p01…p05.sp-parallax__layer` (absolute, z 2, `img` `object-fit: cover`, `object-position: 50% 30%`). Theme CSS sets `scale: 1` on `.kf-fish.sp-parallax__layer` (selector `html.sp-js:not(.sp-no-motion) .kf-catch .kf-fish.sp-parallax__layer`, inside the same reduced-motion media query) because whole strips, not edge-filled frames, move; do not edit sp-scroll files. `kf-dock` follows with `margin-top: 0` (stage height already leaves 115px). The JS fallback moves the first layer (P01) — still ≥6px. Verify with `check-parallax.mjs` (desktop + mobile ≥6px, reduced motion ≤1px).

---

## 8. Responsive rules (hard)
- **390px first screen**: no vertical writing anywhere, no absolutely positioned labels or text over images; text block first, catch rail below it, photo after (§3). Header bar 64px, overlay menu. Fixed stamp and corner stack are **off below 1024** (stamp moves into the bar; stack links live in the menu and footer).
- No vertical writing below 1024 in any locale (plate, tagline, section titles become horizontal).
- No horizontal page scroll at 390 / 782 / 1024 / 1280 (`html, body { overflow-x: clip }` from sp-scroll; strips cut by edges are clipped by `.kf-catch`; the day strip scrolls **inside** its own `overflow-x: auto` container; T2 thumbs end exactly at the viewport edge — use `margin-right: calc(50% - 50vw)` with `width` computed so `scrollWidth == innerWidth`).
- **Price tables (home §8 and The Counter) at ≥782px**: table **100% of its 948 container** (Counter page: 948 too), `table-layout: auto`, item column takes the rest, **price column `white-space: nowrap; text-align: right`**, min-width 10ch, never clipped or overflowing at 800 and 1280. Item cell = pair (name + cut note).
- **Every table below 782px stacks** (prices, hours, Visit, The Day details): rows `display: block`, label above value, price right-aligned on its own line, 1px `line` between rows; no horizontally scrolling tables.
- T2 rows: <782 → 2-column grid, thumb 112×78 flush to the viewport right edge, text left (20px left padding), meta and link under the line. §5: C1 above the steps <1024 (full width, 4:5 crop). §7: K1 full width above text <1024; kitchens 3 → 1 column. Day strip cards 240px at <782.
- Breakpoints: 782, 1024, 1280.

---

## 9. Fixed facts (identical on every page and in all five locales; brand.md is the source)
- **Name**: Kaimon Fishmongers — independent fishmonger. **Founded 2009** by **Maren Holt**, in a former net store; named after the old sea gate at the end of Quay Row.
- **Address**: 4 Quay Row, Harrowmouth (fictional harbour town). Harbour bus stop 3 minutes on foot; bike rack; 2 loading bays for kitchens 11:30–12:30; step-free counter.
- **Phone**: 0100 555 0409. **Email**: counter@kaimonfish.example.
- **Hours**: Tue–Fri 07:30–18:00 · Sat 07:00–14:00 · Sun and Mon closed (no boats land). Phone orders 07:30–10:00 for same-day cuts; pickup from 12:00. Last cut 17:30 (Sat 13:30). "We close early if the ice is bare."
- **Boats (5, one per opening day, fictional)**: Tue **Morwen** — line-caught mackerel and sea bass (skipper Ewan Price) · Wed **Ellie Rose** — small trawl: plaice, sole, gurnard · Thu **Saoirse** — pots: brown crab and lobster · Fri **Two Sisters** — nets: gilt-head bream, squid, cuttlefish · Sat **Kestrel** — hand-dived scallops and rope mussels. All land at Quay 2 from 04:40.
- **The day (8 stops)**: 04:40 First boat ties up at Quay 2 · 05:15 Buying on the quay · 06:30 Ice board laid, the day's board written · 07:30 Doors open · 10:00 Phone orders close for same-day cuts · 12:00 Trim run to three kitchens · 15:00 Cut-to-order pickups · 18:00 Sold through, ice washed down (Sat 14:00).
- **People (7)**: Maren Holt — founder, buys on the quay · Idris Okafor — head cutter · Lucía Ferreira — counter and orders · Tomasz Wiśniewski — smoking and curing (Fridays) · Anjali Rao — kitchens' accounts and the trim run · Hugo Lindqvist — apprentice cutter · Ama Mensah — Saturday counter and The Landing List.
- **Cut to order (4 steps)**: 01 Choose a whole fish on the ice · 02 Tell us how you will cook it · 03 We cut while you wait — about 6 minutes a fish · 04 Wrapped in waxed paper; heads and frames bagged for stock if you want them (free).
- **Prices (8 items; home §8 shows 1, 2, 3, 4, 7 with the same numbers; The Counter shows all)**:
  1. Gilt-head bream, whole, scaled and gutted — **€24.00 / kg**
  2. Line-caught mackerel, whole — **€14.00 / kg**
  3. Sea bass fillets, pin-boned, skin on — **€42.00 / kg**
  4. Squid, cleaned, tubes and tentacles — **€22.00 / kg**
  5. Brown crab, cooked and dressed — **€9.50 each**
  6. Stock bag: heads and frames, about 1.5 kg — **€4.00**
  7. Filleting, scaling and gutting on any whole fish — **free**
  8. Kitchen trim box, 5 kg weekly (kitchens only) — **€18.00**
  Note (everywhere prices appear): "Prices for this week's board. They move with the boats; the board in the shop is always current." Payment: card or cash.
- **Kitchens (3 stories)**: **Linnet** (neighbourhood bistro, 6 Ropewalk) — frames on Tue and Fri for stock and a fish pie · **Harrowmouth Primary School kitchen** — mackerel trim on Thu for fishcakes · **The Oxbow Community Kitchen** — heads on Sat for a broth served Sunday. No claims of figures saved, awards or partners' real names.
- **Newsletter**: "The Landing List", every **Monday 17:00**, which boats are expected and what they will likely bring, ≈3 minutes' read.
- **Posts**: 3 (§4). No awards, media, real brands, sustainability certifications, guarantees or invented statistics anywhere.

---

## 10. Images (18 photographs, all real-photography, one STYLE; 14 on home)
Image IDs (P, H, L, C, K, F, A, V, R, D) are not the technique names T1–T3.

**STYLE** (identical for every image; `IMAGE_STYLE="<STYLE>" scripts/grok-image.sh out.webp "<subject>"`):
`Film-grain documentary photograph, low-key natural light from one side window or the dawn sky, deep slate, sea-grey and wet-stone palette with cold silver highlights, visible fine 35mm film grain, muted desaturated colour, soft deep blacks, honest unposed working moment, a modern independent fishmonger's shop and a small working quay, eye-level 35mm or 50mm lens, shallow depth of field, internationally diverse people, no text, no numbers, no logos, no signage, no readable boards, labels or paper, no Japanese elements.`
Each image ≤ 300 KB webp, ≤ 2000px; read every image; regenerate on text, logos, broken faces/hands, extra fins/tentacles, or style drift. 0 cut-outs (strips are rectangular crops).
| ID | Subject / composition | Ratio (gen px) | Used on | Home |
|---|---|---|---|---|
| P01 | Whole gilt-head bream hanging head up, tail down (as the reference fish), photographed vertically against near-black wet slate, fish fills the frame height, scales catching cold light | strip 0.36 (720×2000) | home §2 strip; inner heads About, Counter, Cut, People, Visit, Landing List, Journal; post 1 featured | ✓ |
| P02 | Whole mackerel hanging head up, tail down, vertical, dark slate ground, blue-black stripes muted | strip 0.28 (560×2000) | home §2; heads Boats, Counter, Cut, Kitchens, People, Landing List | ✓ |
| P03 | Whole sea bass hanging head up, tail down, vertical, dark slate ground | strip 0.34 (680×2000) | home §2; heads About, Cut, Day, Kitchens, Visit, Order, Journal | ✓ |
| P04 | Squid hanging, mantle up, tentacles falling down, vertical, dark wet ground, translucent sheen | strip 0.34 | home §2; heads About, Boats, Day, People, Order, Landing List | ✓ |
| P05 | Pink-grey shrimps on crushed ice in a long narrow steel tray, top-down, vertical framing | strip 0.34 | home §2; heads Boats, Counter, Day, Kitchens, Visit, Order, Journal | ✓ |
| H01 | Maren Holt (woman, 50s, white, grey-streaked hair tied back, dark rubber apron over a navy knit) lifting a whole bream off crushed ice with both hands at a steel counter; a cook (man, 30s, Black, chef whites under a dark jacket) beside her points at a blank dark board on the tiled wall (nothing written legibly); subjects centre-right, dark | 1.29 (2000×1556) | home §3 dock; People head; About thumb; Cut row | ✓ |
| L1 | A small day boat tied up at a stone quay before sunrise, two crew handing a fish crate up to the quay, deck lamp on | 1.43 (1430×1000) | home §4 (Tue); Boats row; Landing List head | ✓ |
| L2 | Plaice and sole laid flat in grey plastic crates on a wet boat deck, overhead | 1.43 | home §4 (Wed); Boats row; Cut row | ✓ |
| L3 | Crab pots stacked on the quay, brown crabs in a wicker basket in front, rope coils | 1.43 | home §4 (Thu); Boats row; post 2 featured | ✓ |
| L4 | Bream and gurnard in crushed ice in a boat's fish hold, gloved hands lifting one | 1.43 | home §4 (Fri); Boats row; Cut row | ✓ |
| L5 | Scallops in their shells and mussels on wet dark wood, a mesh bag beside them | 1.43 | home §4 (Sat); Boats row | ✓ |
| C1 | Idris Okafor (man, 40s, West African, dark apron, rolled sleeves) filleting a sea bass on a white board, knife mid-stroke along the spine, customer's hands on the counter edge in the foreground | 0.64 (1280×2000) | home §5; Cut head; People thumb | ✓ |
| K1 | A cook (woman, 30s, South Asian) in a small bistro kitchen ladling clear fish stock from a large pot, fish frames in a colander beside it, steam in side light | 1.5 (1800×1200) | home §7; Kitchens row; About thumb; post 3 featured | ✓ |
| F1 | The counter at evening: empty steel ice board being hosed down, water and the last ice catching low light, no people or one blurred figure | 1.9 (2000×1050, shown 1440×756) | home §11 footer photo (all pages' footer); The Day head; Kitchens row | ✓ |
| A1 | Maren on the quay at dawn bending over crates of fish, a skipper beside her, harbour lights blurred behind | 3:2 (1800×1200) | About head; Boats head; People thumb | |
| V1 | Narrow shopfront at early morning, open door, a tiled step, steel counter and ice visible inside, wet cobbles, no signage | 3:2 | Visit head; About thumb | |
| R1 | Heads and frames packed on ice in a steel tub, a kitchen porter (man, 20s, Latino) lifting it at the shop's back door (the trim run) | 3:2 | Kitchens head | |
| D1 | Hands wrapping a fillet in waxed paper and tying it with string on the counter | 3:2 | Counter head; Order head; Cut row; Kitchens row; People thumb | |
Per-page final assignment (checked: no image twice on one page; F1 is the footer band on every page except The Day and Kitchens, which use F1 in the body and drop the footer band):
| Page | Strips | Dark head photo | Other images | Footer F1 |
|---|---|---|---|---|
| Home | P01 P02 P03 P04 P05 | H01 (dock) | L1 L2 L3 L4 L5, C1, K1 | ✓ (14 total) |
| About | P01 P03 P04 | A1 | H01, V1, K1 (T2 thumbs) | ✓ |
| The Boats | P02 P04 P05 | A1 | L1 L2 L3 L4 L5 (T2 rows) | ✓ |
| The Counter | P01 P02 P05 | D1 | — | ✓ |
| Cut to Order | P03 P01 P02 | C1 | H01, D1, L2, L4 (T2 rows) | ✓ |
| The Day | P04 P05 P03 | F1 | — | — |
| Kitchens | P02 P03 P05 | R1 | K1, D1, F1 (T2 rows) | — |
| People | P01 P04 P02 | H01 | A1, C1, D1 (T2 thumbs) | ✓ |
| Visit | P05 P01 P03 | V1 | — | ✓ |
| Order | P03 P05 P04 | D1 | — | ✓ |
| The Landing List | P04 P02 P01 | L1 | — | ✓ |
| Journal / archive / category / tag | P02 P03 P05 | — | post thumbs P01, L3, K1 | ✓ |
| Posts | the 3 strips not equal to the featured image (post 1: P02 P03 P05; post 2: P01 P03 P05; post 3: P01 P02 P04) | featured (P01 / L3 / K1) | — | ✓ |
The "Used on" column above is indicative; this table is binding.

---

## 11. Forms (form contract v1 — `steps/form-contract-v1` exists)
- Copy `pipeline/assets/forms/shippress-forms.php` unchanged to `inc/`, its CSS/JS unchanged to `assets/`, require from functions.php. Patterns stay literal block markup; the slot is a small PHP island. **No reveal on any form block. No form on the home first screen** (home form is §10, near the bottom).
- **Order page (`order`, the contact page)**: 948 split — left 420: phone (large, Onest 500 1.75rem tabular-nums), phone-order hours, pickup times, "what to tell us" 4 ruled lines; right 480: `shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) )`. `$fallback` = `ob_start()`-buffered literal markup of the existing button `<a class="wp-element-button kf-btn" href="mailto:counter@kaimonfish.example?subject=…">` labelled `_t('contact_email')` "Email your order" with subject `_t('forms_order_subject')`. Never link to /order/ itself.
  Expected plugin fields (styled, not built by the theme): name, email, phone, pickup day (select: Tue / Wed / Thu / Fri / Sat), what you'd like (textarea: fish, weight or number of people, how you'll cook it), cut (radio: whole cleaned / fillets / butterflied / steaks / not sure — ask us), consent checkbox.
- **Newsletter page (`landing-list`)** and **home §10**: `shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'counter@kaimonfish.example', 'label' => _t('forms_email'), 'submit' => _t('forms_subscribe'), 'notice' => _t('forms_mail_notice'), 'subject' => _t('forms_mail_subject') ) )`. Plugin order: MailPoet (explicit ID via `shippress_form_id`), then MC4WP; CF7/WPForms only by an explicit dedicated newsletter ID (never the contact form). No-plugin fallback: required email field + submit, native mailto POST (`text/plain`, entered email in the body), notice always visible. Footer has no form (its link goes to The Landing List).
- Semantic keys in `inc/i18n/en.php` first, extract with `L10N_SEMANTIC=1`, translate all five (local rewrite, not literal):
| Key | en | zh-TW / ja / fr / de |
|---|---|---|
| `forms_email` | Your email address | localise (fr "Votre adresse e-mail", de "Ihre E-Mail-Adresse") |
| `forms_subscribe` | Ask for the list | localise |
| `forms_mail_notice` | This opens your email app. Send the message to ask for The Landing List — you are not subscribed yet. | localise; must keep "not subscribed yet" |
| `forms_mail_subject` | Subscribe: The Landing List | localise |
| `contact_email` | Email your order | localise |
| `forms_order_subject` | Order for pickup — Kaimon Fishmongers | localise |
- Tokens in style.css: `--sp-form-accent: var(--wp--preset--color--tide)` (#3E5556), `--sp-form-on-accent: #FFFFFF`, `--sp-form-radius: 0` (T(d) radius 0), `--sp-form-focus: var(--wp--preset--color--ink)` (2px outline, 2px offset), `--sp-form-surface: #FFFFFF`, `--sp-form-text: #0A0F0F`.
  Fields: label Albert Sans 600 .875rem `ink` above the field; input/select 52px, textarea min 160px, 1px `line` border (hover `ink-2`), 16px text, placeholder `ink-2`; checkbox/radio `accent-color: #3E5556`; submit = `tide` fill, white Onest 600 .9375rem ls .06em, height 52, padding 0 32px, radius 0, followed by a white 28px circle arrow; hover `deep` #26373A. **Error**: 1px `accent` #AA0813 border + .875rem `accent` message under the field. **Success**: `ink` text on `ice` #E3E9E7 with a 3px `tide` left bar. Light grounds: `ground`, `paper`. **Dark ground** (`deep` #26373A — mobile menu overlay or any future dark section): surface #33464A, text #F0F2F1, border #7D9497, accent #B9CDD0, on-accent #0A0F0F, focus #F0F2F1, error #FFB4A9, success text #F0F2F1 on #33464A with a 3px #B9CDD0 bar. Test light and dark at 390px and desktop with real CF7 (never submit); `form-check.py`, `form-runtime-check.php` (five locales) and `repo-gates.sh forms` must pass.

## 12. Store / WooCommerce
`add_theme_support('woocommerce')`; style shop/product grids as T2 rows where possible (product image 1.43:1, radius 0), buttons with `tide`, prices tabular-nums nowrap. Not required: without WooCommerce every page works (ordering is phone / email / form for pickup). "Basket (n)" appears in the corner stack only when WooCommerce is active.

---

## 13. Similarity table (target ≈ 80%; values from reference-tokens.md)
| Dimension | Reference value (token) | Kaimon value |
|---|---|---|
| Ground | #F2F2F2 speckled SVG dot grain ~70% (T(a)) | #F0F2F1 + grain.svg dots ~70% |
| Ink / greys / hairline | #000; #818283, #696A6B; #BDBDBD (T(a), T(d)) | #0A0F0F; #696A6B (text), #818283 (dots, ticks); #BDBDBD |
| Accent | #AA0813 ~1%: seal, circle arrows, underline (T(a)) | #AA0813 ≤1%: stamp, circle arrows, active underline |
| Dark moment | dark walnut photo ~20% of 2nd screen (T(a)) | dark film-grain H01 ~100% of 2nd screen, F1 footer; tint `deep` #26373A |
| Footer wash | pale aqua (T(a)) | `sea-glass` #B9CDD0 |
| First-screen saturation | ~1% (T(a)) | ≤5% |
| Headings | Shippori Mincho 600, H2 33.9px lh 1.05 ls .04em (T(b)) | Onest 500 (row: sans), h2 34px lh 1.25 ls .04em |
| h3 / body / nav / caption | 20.6/600/1.5/.04em; 16.5/2.0; 14.4/600/.04em; 13.4/1.75 (T(b)) | 21/600/1.5/.04em; 16.5/2.0; 14.4/600/.04em; 13.4/1.75 |
| Vertical type | long copy + section titles vertical-rl 34px (T(b)) | section titles + plate + tagline vertical-rl ≥1024 (Latin rotated, CJK upright); long copy horizontal |
| Gutters | left 60px fixed logo; content from 20% (x 292); right ~200px (T(c)) | identical: 60 / 20% / 200 |
| Section rhythm | 150–230px gaps, sparse (T(c)) | 152px / 224px before dark moments |
| Radius / shadow | 0 / none (T(d)) | 0 / none (inputs too) |
| Hero photo | 1440×1120 in 900 window, dark, full bleed (T(e)) | H01 1440×1120 in a 900 band, dark, full bleed |
| Fish motif | 5 brush fish ~230×480 hanging, 3 cut by edges (T(f)) | 5 dark photo strips 130–200 × 380–560, 3 cut by edges |
| Plate | 173×346, 1px ink frame, top-right (T(f)) | 173×346, 1px ink, top-right |
| Corner furniture | seal 92×156 fixed; Cart/My page/Contact stack fixed bottom-left (T(f)) | stamp 92×150 fixed; Menu/Order/Visit/Landing List stack fixed bottom-left |
| Index rows | thumbs 202×141 flush right, 0 gap, 141 pitch (T(e)) | identical sizes, rows 141px |
| Product feature photo | 630×979 (0.64:1) (T(e)) | C1 630×979 |
| Wide photo | 562×376 (1.5:1) pair cross-fading (T(e)) | K1 562×376 single, zoom reveal |
| Footer photo | 1440×756 parallax (T(e)) | F1 1440×756 parallax |
| Link mark | 28px outline circle, 1px red, ">" (T(d)) | 28px outline circle, 1px #AA0813, chevron |
| Hairline tick | 1px #BDBDBD with + at left end (T(d)) | identical |
| White tab off the photo | white tab with heading hanging off the dark photo (T(f)) | `paper` tab 420 wide hanging off H01 |
| Parallax | hero ~0.14×, fish faster clamped, footer ~0.15× (T(g)) | H01 8%, strips 6–12%, F1 8% |
| Reveal | titles scaleY .92 → 1, ~.6s ease-out (T(g)) | fade-up 24px, .6s `cubic-bezier(.22,.61,.36,1)` |
| Hover | thumbs `transform .4s ease-in-out` (T(g)) | translateX(−12px) .4s ease-in-out |
| Load | fish drop-in (T(g)) | strips drop 30px, 1s, stagger .12s |
Ours only: all photographs, copy, logo/stamp mark, the day strip, the tide/deep colours, sans type.

---

## 14. Home acceptance checklist (stage 1)
1. Desktop 1440×900: pale speckled stage with **five dark narrow fish strips** at five heights, P01 cut left, P03 cut top, P04 cut right; plate 173×346 touching the top-right edge; mini address, stacked 6-link menu, vertical tagline; h1 "Bought at dawn. Sold by evening." at 4.5rem; **H01 visible in the bottom 115px**. No strip touches any text.
2. Fixed stamp (top-left) and corner stack (bottom-left) stay in place while scrolling at ≥1024; exactly one `core/navigation`.
3. With `?sp-motion`: strips drop in (30px, transform only) and drift at different speeds; H01 and F1 parallax; `check-parallax.mjs` ≥6px desktop + mobile, ≤1px reduced motion; reveals hidden before entry, final after, no transparent leftovers.
4. 390px first screen: header bar + text block (no vertical text, nothing absolutely positioned over text) + catch rail of 4 strips (2 cut by edges) + top of H01; no horizontal scroll.
5. §3 white tab hanging off H01's lower edge; narrative column with 2 ¶ on pale ground.
6. §4 five ruled boat rows Tue–Sat, **thumbnails flush to the right viewport edge with 0 gap** forming one column; hover nudge.
7. §5 C1 portrait 630×979 + 4 steps; §6 horizontal day strip with 8 stops, last card cut by the right edge, scrolls inside itself; §7 K1 562×376 + 3 kitchens.
8. §8 price table: 5 rows, 100% of 948 at ≥782, prices nowrap right-aligned, numbers identical to §9 / The Counter; hours list; both stack <782.
9. §9 text news list; §10 Landing List form slot (email + submit + notice without plugins, no reveal); §11 F1 footer photo; sea-glass ruled footer.
10. 14 home images, all unique (≥8); ≥250 English words, ≥3 narrative paragraphs ≥20 words; first-screen saturated share ≤5% (`check-first-screen.py`); largest type ≥4.25rem; Onest / Albert Sans via theme.json fontFace, identical in editor and front end.
11. ≤3 sp effect kinds (parallax, reveal--up+stagger, reveal--zoom); none in the hero; `auto-gates.mjs … en … 1 1` pass; `pattern_source.py` pass.
