# Hinata Market — design spec (stage 1, design director)

Type: **events** (theme-meta `"type": "events"`, category events-community; WooCommerce-compatible, not required). Industry: a weekend farmers' market that fills **Linden Station Square** with **40 growers every Saturday**; the site is the market's weekly front page for visitors, plus how a grower applies for a pitch and the single weekly-list sign-up. page_structure **notice-feed**, archetype **horizontal-strip**, hero **diagonal-split**, nav **top-bar**.
Primary reference: **https://nosson.jp/** (S5-Style community / local business; a village organisation's home page set as a printed newspaper). Secondary: **https://hitomachi.iwamiginzan.jp/** (ground, badge and motion language only). Tokens: `brand/reference-tokens.md`, cited as **T(a)…T(g)**. Screens: `ref/nosson-first.png`, `ref/nosson-full.png`, `ref/scroll-nosson-*.png`, `ref/hitomachi-first.png`.
**Imagery: photo** (stage-a IMAGERY = photo; the reference's primary images are candid documentary photographs). One real-photography STYLE string, high-key documentary (§10). 0 cut-outs.
Font direction: **sans**. Latin display/headings **Hanken Grotesk**, Latin body **Albert Sans**; zh-TW / ja **Noto Sans TC / Noto Sans JP** (gothic). No serif or Mincho anywhere.
Similarity target: about **80%** to nosson.jp in palette relationship, image treatment (stadium/diagonal lead photo with corner diamonds, small right-hand thumbnails), decoration (page frame, ruled columns, dotted scissor rules, stadium pills, hatch stamp) and layout (masthead + three ruled columns + feed rows + service rows + three-box foot). Photographs, copy, glyphs and logo are ours; nothing is copied from nosson or hitomachi.
Header: one header with **exactly one top menu** (`core/navigation`). Class prefix `hm-`. Pattern slugs `hinata-market/<name>`.

---

## 1. Signature techniques (3 + 1 supporting; obvious at a glance; none may be softened)

### T1: The gazette frame — a 2px page frame, a masthead strip, and three columns split by 1px rules
- **Source**: nosson.jp first screen (`ref/nosson-first.png`; T(c), T(d), T(f)). The whole page sits inside a **2px ink frame inset 16px** from the viewport on all sides. At the top inside the frame, a **46px masthead strip** (issue number small at the left, the full date centred, a stadium toggle pill at the right) with a 1px rule under it. Below, **three columns split by 1px vertical rules**: left x26–456 (**430**), centre x456–1106 (**650**), right x1106–1424 (**318**). One colour (electric blue) draws all type, the frame and every rule on a near-white paper ground; nothing has a shadow or radius.
- **Ours** (template wrapper + header part + home §1/§3/§8):
  - **Frame** `hm-frame`: a Group wrapping header, main and footer in every template; `margin: 16px` (mobile 8px), `border: 2px solid var(--wp--preset--color--russet)` (#A86F4C), background `paper` #FBFAF8. The frame scrolls with the page (it is the page's border, not `position: fixed`).
  - **Masthead strip** `hm-masthead` (header part, row 1): height **46px**, padding 0 20px, 1px russet rule under it. Grid `1fr auto 1fr`: left "No. 212" (Albert Sans 700 .75rem ink, ls .04em); centre "Saturday 21 November 2026" (Albert Sans 600 .8125rem ink); right the **hours pill**: a stadium 2px russet outline 36×20 "toggle" with a 12px leaf-green knob on its right end, followed by "Open today 08:00–14:00" (Albert Sans 600 .8125rem russet-deep). (Reference toggle "colour / mono" → our open/closed pill; it is decoration, not a control.)
  - **Nav row** `hm-navrow` (header part, row 2): height 64px, 1px russet rule under it; left the wordmark (inline SVG awning glyph 28px russet + "Hinata Market" Hanken Grotesk 800 1.5rem ink, ls −.01em); right `core/navigation` (Albert Sans 600 .9375rem ink, gap 28px; links underline-draw on hover, §7) and a **stadium outline pill** 150×40 "Weekly list ☞" (2px russet, russet-deep text, pointing-hand SVG 18px).
  - **Ruled columns** `hm-cols`: CSS grid `grid-template-columns: 30.7fr 46.4fr 22.9fr` (= 430 / 650 / 318 at 1440, T(c)), `max-width: 1680px` centred inside the frame; the centre and right cells get `border-left: 1px solid russet`; column padding 24px (T(c) 10–24px). Used by home §1 (front page), §3 (front page continued) and §8 (foot trio uses the same column widths so the rules line up).
- **Must not soften**: the frame is a **visible 2px russet line around the entire page** on every template; the masthead has **issue number / date / pill** on one 46px line; the columns are **three, unequal, split by 1px rules** with no gaps, cards, shadows or radius. Do not turn the columns into floating cards on a tinted ground.

### T2: The date stamp card — a giant date numeral with weekday and month, an arrowed rule and two stadium-outline cells
- **Source**: nosson.jp right column (T(b), T(f)): a **270×260 stamp** (2px outline square, inner 1px hatch lines around a logo glyph), then the **date block**: weekday and month set beside a **~150px numeral** in ink, a small year pill above it, a **1px rule with arrowheads at both ends**, then **two stadium-outline label cells** ("WEATHER" / "TEMPERATURE", 10.5px 600) over a weather glyph and a 40px temperature.
- **Ours** (home §1 right column `hinata-market/date-card`; reused on ≥6 inner pages):
  - **Stamp** `hm-stamp` 270×260 (fills the 318 column minus 24px padding): 2px russet square; inside it a 10px inset band filled with **vertical hatch** `repeating-linear-gradient(90deg, var(--russet) 0 1px, transparent 1px 7px)`; centre panel paper 190×170 with the awning glyph (inline SVG, 72px, russet) and "Hinata / Market" (Hanken Grotesk 800 1.75rem ink, two lines, lh 1), under it "STATION SQUARE · SATURDAYS" (Albert Sans 700 .625rem russet-deep, ls .12em). All text is block markup (editable).
  - **Date block** `hm-date`: row 1 a stadium pill "2026" (1px russet, Albert Sans 700 .75rem, 64×20) centred over the numeral; row 2 a grid `40px 1fr 40px`: left **"SAT"** stacked one letter per line (Hanken Grotesk 800 1.25rem ink, lh 1.05; three block-level letters in one paragraph separated by `<br>` — **not** `writing-mode`), centre the numeral **"21"** (Hanken Grotesk 800, `giant` **9.5rem**, lh .9, ls −.04em, russet #A86F4C, `font-variant-numeric: tabular-nums`), right **"NOV"** stacked the same way plus a 24px russet disc with white "11" (Albert Sans 700 .75rem) on top; row 3 the **arrowed rule**: 1px russet line with a 7px open arrowhead at each end (inline SVG, width 100%, height 10px, `preserveAspectRatio="none"` on the line only); row 4 two **stadium-outline cells** side by side (each 1px russet, radius 999, height 22px, label Albert Sans 700 .6875rem uppercase ls .08em ink): "FORECAST" and "STALLS TODAY"; row 5 under them a line glyph (sun-behind-cloud, 40px, ink stroke 1.8px, our own drawing) + "Dry" (Albert Sans 600 .875rem), and **"40"** (Hanken Grotesk 800 2.5rem ink) + "stalls" (.875rem). Under that "11° / 4°" small (Albert Sans 600 .8125rem).
  - **Today box**: an outlined label box 270×46 (2px russet, inner second 1px line 3px inside = the reference's double box) reading "Today at the square" (Hanken Grotesk 800 1.25rem russet-deep), then photo **H03** 270×180 (1.5:1), no radius, caption "07:40, Row B" (Albert Sans 600 .75rem ink) centred in a small paper tab overlapping the photo's bottom edge by 10px (normal flow negative margin, not absolute).
- **Must not soften**: the numeral is **≥9rem desktop, russet, heavy**, flanked by weekday and month; the **arrowed rule** and the **two stadium cells** are present; the stamp has the **hatch band**. Do not replace this with a plain "Open Saturdays" text block.

### T3: Scissor-cut dotted feed rows — notices with a small thumbnail at the right, dotted dividers ending in a scissor glyph
- **Source**: nosson.jp centre column and section dividers (T(c), T(e), T(f)): each news row = title (bold ~20px, two lines max) + date line, with a **121×74 thumbnail right-aligned**; rows separated by **dotted rules (2px dots, 6px pitch)**; between sections a dotted rule with a **small scissor glyph at the right end**.
- **Ours** (home §1 centre under the lead + §3 centre; the Notices archive; every inner page's lists):
  - Row `hm-row`: grid `1fr 121px`, gap 24px, padding 26px 0; title Hanken Grotesk 700 1.25rem / 1.6 ink (max 2 lines), date line Albert Sans 600 .875rem ls .06em ink-soft ("Posted Thursday 12 November 2026"); a **leaf** text tag before the title when relevant ("New", Albert Sans 700 .6875rem white on leaf #3F5B45, 2px radius 0, padding 2px 6px). Thumbnail 121×74 (1.64:1, no radius, `object-fit: cover`).
  - Divider `hm-dots`: `height: 2px; background: radial-gradient(circle, var(--russet) 1px, transparent 1.2px) 0 0 / 6px 2px repeat-x` (2px dots, 6px pitch, T(c)). Section divider `hm-dots--cut` = the same dotted line with a 16px **scissor glyph** (inline SVG, russet stroke 1.5px, our drawing) sitting on the right end, the line stopping 24px before it.
  - Lists that are not notices (people, stalls, season months, visit facts, steps) use the same row grid and dotted dividers.
- **Must not soften**: dots must read as **dots** (not a dashed or solid hairline); the thumbnail sits **at the right**, small (121×74); the scissor glyph appears **on every section divider**.

### T4 (supporting): The lead photo — stadium end + diagonal cut, 2px outline and four corner diamond badges
- **Source**: nosson.jp lead photo 606×314 (1.93:1), **stadium mask** (radius 999) with a **2px ink outline** and **four 28px rotated-square badges** (magenta, one white glyph each) at its four corners; a small vertical hatch tag ("EXTRA") at the top-right of the lead headline (T(e), T(f)).
- **Ours** (home §1 centre, `hinata-market/lead`; also inner lead photos): the hero is **diagonal-split**, so the stadium keeps its **round left end** and its **right edge is cut diagonally** (top-right corner at x 100%, bottom edge ends at x 84%) — the diagonal leans toward the date card. Implementation: wrapper `div.hm-lead.sp-parallax` (aspect-ratio 606/314, no clip-path on the wrapper) > `figure.hm-lead__shape` with `clip-path: url(#hm-lead-clip)` where `#hm-lead-clip` is an inline SVG `<clipPath clipPathUnits="objectBoundingBox"><path d="M0.259,0 L1,0 L0.84,1 L0.259,1 A0.259,0.5 0 0 1 0.259,0 Z"/></clipPath>` > `img.sp-parallax__layer` (H01). Outline = an inline SVG overlay (viewBox 0 0 606 314, `preserveAspectRatio="none"`, path `M157,1 L605,1 L509,313 L157,313 A156,156 0 0 1 157,1 Z`, stroke russet 2px `vector-effect: non-scaling-stroke`, fill none, `pointer-events: none`). The aspect ratio is fixed, so the arc never distorts.
  - **Diamonds** `hm-diamond`: four 28px squares rotated 45°, fill point #D9553A, one white glyph each (Hanken Grotesk 800 .8125rem, counter-rotated): **N** top-left, **E** top-right, **W** bottom-left, **S** bottom-right (reads "NEWS" row-wise, like the reference's four-glyph word). Placed at the four bbox corners, inset 18px; the bottom-right one sits in the empty triangle left by the diagonal. They are in block markup inside the wrapper grid (`display:grid` overlay, `place-self`), not absolute text over text; `aria-hidden="true"`. Per locale the four glyphs form a four-character word read row-wise: zh-TW four Han characters meaning "this week's market news", ja four characters meaning "this week's news" (written in demo-content.zh-TW.json / demo-content.ja.json and the zh-TW / ja i18n files only), fr I / N / F / O, de N / E / U / ! (i18n keys `kv_diamond_1`..`kv_diamond_4`).
  - **Tag** `hm-tag` at the top-right of the lead headline: 104×200 box, 2px russet, hatch inside (horizontal 1px lines every 6px), text stacked "THIS" / "WEEK" (Hanken Grotesk 800 1.75rem russet, lh 1, on a paper patch) with a small stadium pill "ISSUE 212" between them. Desktop only beside the headline (grid `1fr 104px`); < 782px it becomes a single horizontal pill row "This week · Issue 212" above the headline.
- **Must not soften**: round left end + diagonal right edge + 2px outline + four point-coloured diamonds. Not a plain rectangle, not a soft rounded rectangle.

### Continuation on inner pages (each signature on ≥4 inner pages)
| Page | T1 frame + masthead + ruled columns | T2 date stamp card | T3 dotted scissor rows | T4 lead shape + diamonds |
|---|---|---|---|---|
| About the market | 2 ruled columns (650 / 1fr) head | "2011" numeral, "SPRING" / "YEAR"; cells "FOUNDING GROWERS 9" / "GROWERS TODAY 40" | people (7 rows with thumbs), 3 grower stories | H02 lead with diamonds |
| Notices (posts archive) | 3 ruled columns: rows (centre), date card (right), categories + weekly-list box (left) | current issue "21", SAT / NOV | all notices as rows | — |
| Single notice | masthead + 2 ruled columns (article / date card) | post date as the numeral | "More notices" 3 rows | featured image in lead shape |
| Stalls & growers | 2 ruled columns head | "40" numeral, "PITCHES" / "ROWS A–D" | 12 regular stalls grouped by row A–D | B1 lead |
| In season | 2 ruled columns head | "11" numeral, "NOV" / "MONTH" | 12 months as rows (month · what is in · thumb on 4 rows) | H03 lead |
| Visit | 3 ruled columns | "08" numeral, "OPEN" / "AT"; cells "CLOSES 14:00" / "WINTER 09–13" | getting here, payment, dogs, bags, access as rows | — |
| Apply for a pitch | 2 ruled columns (430 left intro + 1fr steps) | "1" numeral, "EACH" / "MONTH" (applications read on the 1st) | 4 step rows (service-row variant) + grower rules | H01 lead |
| Pitch fees | 1 column inside frame | "38" numeral, "EUR" / "FULL PITCH" | fees table (dotted rows) | — |
| Weekly list | 2 ruled columns | "18" numeral, "THU" / "18:00" | what each issue contains as rows | — |
| Contact | 2 ruled columns (office rows / form) | office hours numeral "10", "TUE" / "THU" | office facts as rows | — |
Counts: T1 on all 10 inner pages, T2 on 10, T3 on 10, T4 on 5.

---

## 2. Key visual concept

**(1) Reference first screen, story and signature motion.** nosson.jp opens on **a village's morning newspaper**. A 2px blue frame holds a masthead (issue number, today's full date, a colour/mono toggle). The **left column** introduces the organisation with a candid photo of its people standing in a river and a bold greeting headline ("Hello, we are nosson."). The **centre column** carries the lead story under a large headline, a **stadium-shaped photo** with a blue outline and **four magenta diamond badges** at its corners, then dotted news rows with small thumbnails. The **right column** shows the organisation's stamp-like logo in a hatched square, a **giant date numeral** with weekday and month, an arrowed rule, live **weather and temperature**, and a "today in the village" photo. **Story**: *the village's news, delivered like a morning paper — who we are, what happened, what today looks like.* **Signature motion**: a small **fish glyph swims across** the page (keyframes 65% → 40% with a Y-flip, and a linear loop running left 0 → −200%); the date and weather are filled live; the page is otherwise static and printed-feeling.

**(2) Our translation (same composition, same motion concept, same image type).** *"This Saturday's Gazette"* — the market's front page, printed every week. Same frame, masthead and three ruled columns. **Left**: "Good morning, this is Hinata Market." over a candid photo of growers and the manager raising an awning frame at dawn (H02). **Centre**: lead headline *"Forty growers, one station square, every Saturday"* over the lead photo **H01** — a grower stacking crates of greens under an awning while a shopper weighs a bag on a hanging scale — in the stadium-with-diagonal-cut shape with the four "N E W S" diamonds, then the first notice row (N1). **Right**: the hatched stamp, giant **"21"** with SAT / NOV, the arrowed rule, **forecast** and **stalls today: 40**, and "Today at the square" with crates at 07:40 (H03). **Motion**: the reference's swimming fish becomes a **stall ticker** across the bottom of the first screen: a line-drawn cargo bike carrying a crate (our own SVG) leads a strip of pitch codes and stall names that drifts left in a linear loop (`sp-marquee`) — the produce arriving at the square, the way the fish travels the river. Image type stays **documentary photography**.

**(3) KV checklist** (every item built in the home first screen at 1440×900 and visible):
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Masthead strip: issue no. / full date / toggle pill, 1px rule | "No. 212" / "Saturday 21 November 2026" / hours pill with leaf knob "Open today 08:00–14:00" | top inside the frame, 46px, full width | static | — |
| 2 | Left profile column: label bar, candid team photo, bold greeting, intro | stadium label bar "◆ ABOUT THE MARKET ◆", photo 382×350, "Good morning, this is Hinata Market." (point colour), intro paragraph | left column (430) | static | **H02** |
| 3 | Lead headline + stadium photo with 2px outline and 4 diamond badges; hatch "EXTRA" tag | headline (2 lines) + date line + **H01** in stadium/diagonal shape with N·E·W·S diamonds; hatch "THIS WEEK" tag | centre column (650), top | lead photo parallax `--sp-par` 6% (§7.2); no reveal | **H01** |
| 4 | Stamp + giant date numeral + weekday/month + arrowed rule + weather/temperature cells | hatched market stamp, "21" (9.5rem russet), SAT / NOV, arrowed rule, FORECAST "Dry 11°/4°" + STALLS TODAY "40" | right column (318), top | static | — |
| 5 | "Today in the village" double-line box + photo | "Today at the square" box + crates at 07:40 | right column, under the date block (photo top edge visible at 900px) | static | **H03** |
| 6 | Dotted feed row with right thumbnail | first notice row: "A honey stall joins Row C from 28 November" + 121×74 thumb, dotted rule above | centre column, under the lead photo | static | **N1** |
| 7 | Swimming fish glyph (horizontal traveller) | stall ticker with the cargo-bike glyph leading pitch codes + stall names | full width at the first-screen fold (top ≈ 816px at 900 tall) | `sp-marquee`, 40s linear loop; static under reduced motion / `?sp-static` | — |

---

## 3. Home page: block order

Every section sits inside the frame (T1). Column widths refer to `hm-cols` (430 / 650 / 318 at 1440).

| § | Pattern | Purpose | Layout and images | Copy |
|---|---|---|---|---|
| 0 | header part | masthead + nav | T1: 46px masthead, 64px nav row, 1px russet rules | issue, date, hours, 6 nav items, pill |
| 1 | `front` (hero) | this week's front page | 3 ruled columns. **Left**: label bar (stadium 2px russet outline 382×32 with two filled russet 24px circles carrying "H" and "M" and the text "ABOUT THE MARKET" Albert Sans 800 .8125rem ls .14em russet-deep), 12px, **H02** 382×350 (1.09), 18px, h2-style greeting "Good morning, this is Hinata Market." (Hanken Grotesk 800 1.625rem lh 1.35 **point #D9553A**), ¶1. **Centre**: h1 lead headline + `hm-tag`, date line "Saturday 21 November 2026 · Issue 212", 24px, **H01** lead shape 602×312 with diamonds, 28px, `hm-dots`, notice row 1 (**N1**). **Right**: T2 stamp, date block, today box + **H03**. | ¶1 (narrative 1, ~70 words): who runs the market and why it is on the square; headline 7 words; row 1 title + date |
| 2 | `ticker` | first-screen motion (KV 7) | full-width strip 64px between 1px russet rules: cargo-bike SVG (48×28, russet line) then items "A3 Fernhill Greens", "A8 Brookside Eggs", "B2 Old Mill Bakery", "B6 Hollow Lane Orchard", "C4 Marsh End Cheese", "C7 Linden Honey — new", "D1 Ridgeway Roots", "D9 Knife sharpening — first Saturday", separated by 10px leaf diamonds; pitch code in a 1px russet stadium pill (Albert Sans 700 .75rem), stall name Hanken Grotesk 700 1.125rem ink. Pattern contains the group twice, second `aria-hidden="true"`. | names only |
| 3 | `front-more` | the front page continued (feed + values + editor's note) | same 3 ruled columns. **Left**: label bar "WHAT WE STAND BY"; six numbered rules (Albert Sans 600 .9375rem, "1." russet) = the grower rules (§9); then two **boxed notices** (2px russet outline, 382 wide, padding 20px, the small "NOTICE" tag bottom-left like the reference's "AD"): box A "Pitches for spring 2027 are open. Applications are read on the 1st of each month." + pill "Apply ☞"; box B hatch-ground header "Bring a bag" + "Card and cash at every stall. Dogs on short leads." **Centre**: notice rows 2–4 (**N2**, **N3**, **N4**) with dotted dividers, then a centred stadium pill 200×48 "All notices ☞". **Right**: label "MARKET NOTES" in a double-line box, ¶2 (editor's note signed "— Ines Valdés, market manager"), then a hours mini box (rows: Saturdays 08:00–14:00 / Dec–Feb 09:00–13:00 / Growers in from 05:30). | ¶2 (narrative 2, ~80 words); rules 6 lines; notices 3 titles |
| 4 | `stalls-strip` | this Saturday's stalls (archetype horizontal-strip) | `hm-dots--cut` divider; heading row: h2 "This Saturday's stalls" (Hanken Grotesk 700 2.125rem) left, "40 stalls in four rows · scroll the row →" right (Albert Sans 600 .875rem ink-soft). Strip `hm-strip`: `display:flex; gap: 24px; overflow-x: auto; scroll-snap-type: x mandatory; padding: 0 24px 20px`, thin russet scrollbar (`scrollbar-color: var(--russet) transparent`). 6 cards 300 wide + an end card: photo 3:4 300×400 (**S1–S6**, no radius, 1px russet outline), pitch pill, stall name (Hanken Grotesk 700 1.25rem), one line of what they bring (Albert Sans .9375rem), leaf tag "In season: chard". End card 220 wide: paper, 2px russet outline, "See all 40 stalls ☞". The strip **container** gets `sp-reveal sp-reveal--up`; the cards never do. | 6 × ~15 words |
| 5 | `season-band` | the season in one wide photograph (parallax, §7.2) | `hm-dots--cut`; full-width band inside the frame 1404×480 (2.9:1), Group `hm-band sp-parallax` with **B1** as `figure>img`, `--sp-par: 10%`. Foreground (static, not inside the moving layer) a paper card 420 wide at left 48px, vertically centred: 2px russet outline; header strip with hatch "IN SEASON · NOVEMBER"; 6 dotted rows "Squash · Rows B, D", "Leeks", "Apples and pears", "Walnuts", "Kale and chard", "Goat cheese (until mid-December)". | ~40 words |
| 6 | `apply` | how a grower applies for a pitch (reference "business" rows) | `hm-dots--cut`; 2 ruled columns (430 / 1fr). **Left** (static, not sticky): circle label row — five 40px discs alternating russet / point, white letters "A P P L Y" (Hanken Grotesk 800 1.125rem), horizontal; h2 "Selling at Hinata Market"; ¶3; a 4-line step summary; stadium pill "Read the grower rules ☞". **Right**: 4 rows (container `sp-stagger`, each row `sp-reveal sp-reveal--up`), separated by `hm-dots--cut`, alternating text-left/photo-right and photo-left/text-right: number "01" (Hanken Grotesk 800 3rem russet, lh 1), h3 title (Hanken Grotesk 700 1.75rem), subtitle (Albert Sans 700 1rem russet-deep), text (~40 words), stadium outline pill 150×40 with ☞. Photo 353×244 (1.45:1, no radius) **A1–A4**. | ¶3 (narrative 3, ~70 words) + 4 × ~45 words |
| 7 | `fees` | pitch fees (fixed numbers) | inside frame, padding 48px; h2 "Pitch fees, per Saturday"; the 7-row fees table (§8 rules): columns Item · What is included · Price; rows separated by `hm-dots`; header row Albert Sans 700 .75rem uppercase ls .08em on `wash` #F2ECE6; price Hanken Grotesk 700 1.25rem, `nowrap`, right; note under it (minimums, payment). No reveal. | 7 rows + 2 notes |
| 8 | `foot-trio` | office + weekly list + notice board (reference foot row: company box / ad / contact box) | 3 ruled columns at the same widths. **Left** "Market office" box: a framed title tab (2px russet box 220×44 with a 1px inner line, Hanken Grotesk 700 1.25rem) then key/value rows (Address, Saturdays, Winter, Office, Email) Albert Sans .9375rem, keys 700; a small filled russet stadium "Map ☞". **Centre** "The weekly list": 2px russet outline box, header bar filled **russet** with white text "The weekly list, every Thursday at 18:00" (Hanken Grotesk 700 1.25rem), body: 2 lines + **newsletter slot** (§11) — no reveal. **Right** hatch notice board: "Next Saturday, 28 November: the honey stall opens at C7, and the square's east gate opens at 07:30 for cargo bikes." | ~70 words |
| 9 | footer part | colophon | inside frame, 1px russet rule above; grid: wordmark + address line; links paragraph (About · Notices · Stalls · Visit · Apply · Pitch fees · Weekly list · Contact · Privacy) — plain paragraph links, not a navigation block; "© 2026 Hinata Market · Linden Station Square, Easthaven". | — |

**First-screen composition (1440×900)**: frame 16+2px → masthead 0–64 → nav row 64–129 → front columns 129–≈800 (left: label, H02, greeting; centre: headline, H01 lead, top of N1 row; right: stamp, numeral, cells, today box, top of H03) → ticker ≈816–880. Saturated share target ≤8% (cap 15%). No table, form or search in the first screen.
**Home photo positions: 18** (H01, H02, H03, N1–N4, S1–S6, B1, A1–A4) — every theme image appears once on the home page.

### Comparison with recent themes' home orders (must not match)
| Theme | Home order |
|---|---|
| Utsushi Films | kv (6 index rows over a window) > intro > case-wall masonry > beside text panel > shaped 3 cols > parallax band > rates > crew rows > letters > footer |
| Shiosai Resort | hero + flag bar > welcome > rooms sticky > week 2×2 > packages parallax > prices table > beach > families > check-dates band > letter > journal > footer |
| Yoake Patisserie | hero split wash > wash story > hour ledger 3 cells > film still > wash cakes > price trio + table > wash tea > people > visit band > journal > morning sheet > footer |
| Koori Cold Stores | crossfade full-bleed hero > log strip > rooms fused cards > dock band > booking steps > day horizontal strip > rates table > cases > enquiry > alerts > footer |
| **Hinata Market** | **framed masthead > 3 ruled columns front page (profile / lead + feed / date card) > stall ticker > front page continued (rules / notices / editor's note) > horizontal stall strip > parallax season band > apply rows (left label column + alternating rows) > fees table > 3-box foot (office / weekly list / notice board) > colophon** |
Why not similar: none of the four opens with a framed newspaper of three ruled columns; there is no full-bleed hero, no window/overlap composition, no wash panels, no sticky rail and no fused cards. Koori's horizontal strip comes after its booking steps and is a timeline of a day; ours is a stall catalogue directly after the front page. The fees table is preceded by service rows, not by a 2×2 or price trio.

---

## 4. Inner pages (10 pages + Notices posts page + 4 posts)

Every inner page: frame + header (T1), page head = **mini gazette**: 2 ruled columns (left 1fr: kicker label bar, h1 Hanken Grotesk 700 **3.25rem** / 1.2, intro ¶; right 318: the T2 date card variant from §1 table) with a 1px rule under; then the page body; then the foot trio (§8) on About, Stalls, In season, Visit, Apply, Fees (the weekly-list box only once per page; on Weekly list and Contact the trio is replaced by the office box alone).
1. **About the market** (`about`): history (2011: nine growers and the station's community council; 2015 rows C–D added; 2022 the weekly list, first issue 5 November 2022) as dotted rows by year; H02 in the T4 lead shape with the same four diamonds as home (locale glyph sets as §1 T4); people (7 rows: name, role, since, thumb from a portrait-capable photo: A1 Amara, A3 Ines, A4 Tomas, N2 Lena; growers S1/S4/S5); three grower stories (§9) as service rows with S1, S4, S5 photos 353×244.
2. **Notices** (posts page, role `posts`, content empty): archive template = 3 ruled columns: left categories (Notices, Season, Growers) + tags + small weekly-list link box; centre all posts as T3 rows (featured image as the 121×74 thumb); right T2 date card with the current issue.
3. **Single notice** (single.html): masthead line repeats the post date; title Hanken Grotesk 700 2.5rem; featured image in the T4 lead shape with diamonds; body 1.0625rem / 1.8 max 680px; right ruled column: date card with the post's day numeral; "More notices" 3 rows.
4. **Stalls & growers** (`stalls`): B1 lead; a row map line "Row A greens and eggs · Row B bread and fruit · Row C dairy, honey, preserves · Row D roots and the sharpener"; 12 regular stalls as rows grouped under four `hm-dots--cut` row headings (pitch pill · stall · grower · what they bring · thumb on S1–S6, N1, N4).
5. **In season** (`in-season`): H03 lead; 12 months as rows (month name Hanken Grotesk 700 1.5rem · what is in · thumb on Nov S6, Oct S4, Jun S1, Dec N3).
6. **Visit** (`visit`): head photo B1 is used on Stalls, so Visit uses **N2** as a 650-wide figure (1.64:1); rows: Hours, Winter hours, Getting here (Linden Station, platform exit East; trams 3 and 7), Cargo bikes and bicycles (east arcade), Payment (card and cash at all 40 stalls), Bags and cups (bring your own; deposit cups €1), Dogs, Step-free access (ramps at north and east gates), Lost property (visitor desk at pitch A1).
7. **Apply for a pitch** (`apply`, enquiry page → contact form slot): H01 lead shape; left 430 column: who can apply + grower rules (6); right: 4 steps as service rows A1–A4 (same as home but full text); form section (§11). Link to Pitch fees.
8. **Pitch fees** (`fees`): fees table (7 rows) full width; terms rows (season pass refund, cancellations, power, awning loan); photo S6 as a 650 figure.
9. **Weekly list** (`weekly-list`, newsletter standard page, standalone): what each Thursday issue contains (4 rows: next Saturday's stalls, what is in season, notices, one grower's note); form on the **ink** dark panel (§11); privacy line.
10. **Contact** (`contact`): office rows (address, office hours Tue–Thu 10:00–16:00, phone, email, Saturday visitor desk at A1); contact form slot (§11); A3 photo 650 figure.
11. **Privacy** (`privacy`): text only, no photo, no reveal.
Posts (4, category Notices / Season, tags): 1 "A honey stall joins Row C from 28 November" (N1; tags new-stall, row-c) · 2 "Bicycle parking moves to the east arcade" (N2; tags visiting) · 3 "Soup Saturday on 5 December: bring a bowl" (N3; category Season) · 4 "The knife sharpener is back on the first Saturday of each month" (N4; tags row-d).
theme-meta `pages`: home, about, news (→ /notices/), article (→ post 1), category (→ notices category), tag (→ new-stall), newsletter (→ /weekly-list/), contact (→ /contact/). Templates: index, home/front-page, page, single, archive, category, tag (copy of archive with "TAG"), search, 404, page-weekly-list (or page), page-contact (or page).

---

## 5. Colour

Source: nosson T(a) relationship = **near-white paper + one ink colour for all type, frame and rules + one hot accent on tiny badges** (saturated share 9.5%). The plan row fixes the family **russet (walnut-dye) #A86F4C**, and nosson's electric blue + magenta would read as a tech or youth brand for a produce market, so the hues change while the **relationship and shares stay**: paper ≈70%, line colour on frame/rules/numeral, ink for type, one hot point on four diamonds. Paper keeps the reference hex exactly.
| Token (theme.json slug) | Hex | Role | Share (first screen) | Source |
|---|---|---|---|---|
| `paper` | #FBFAF8 | ground everywhere | ~70% | T(a) ground, unchanged |
| `ink` | #2E2119 | all text (walnut ink) | ~12% | T(a) main ink role |
| `ink-soft` | #5E4A3D | dates, secondary lines (7.9:1 on paper) | ~2% | — |
| `russet` | #A86F4C | frame, rules, dots, numeral, pill outlines, hatch | ~4% | row hex; T(a) "main = frame and rules" |
| `russet-deep` | #8A5638 | russet small text, button fill, hover (5.8:1) | <1% | russet −18% L |
| `leaf` | #3F5B45 | "New" / "In season" tags, ticker diamonds, hours knob | ~1% | hitomachi ink #005D48 relation (green ink) |
| `point` | #D9553A | four diamonds, greeting headline, 2 APPLY discs | <1% | T(a) magenta accent role |
| `wash` | #F2ECE6 | table header, form panel on light pages | 0% in first screen | russet 8% on paper |
| `white` | #FFFFFF | text on russet / point / leaf | — | — |
Photos ≈ 11% of the first screen (T(a) photo area). **First-screen saturated share (HSV s>0.5, v>0.3): target ≤8%, hard cap 15%** (`scripts/check-first-screen.py`); the row cap of 30% is never approached. No large saturated fills: the only filled russet area is the weekly-list header bar (§8, below the fold). Contrast: russet text only at ≥24px or bold ≥18.66px; body russet text uses `russet-deep`. Dark panel (weekly list page, footer is light): `ink` ground with `paper` text.

---

## 6. Typography (sans)

Direction **sans**: Latin headings **Hanken Grotesk** (variable 400–800), Latin body **Albert Sans** (variable 400–800); CJK **Noto Sans TC** (zh-TW) and **Noto Sans JP** (ja), gothic only, weights 700 (display) bundled as subsets. Loaded only through **theme.json `fontFamilies` + `fontFace`** (woff2 in `assets/fonts/`, latin + latin-ext for fr/de; zh-TW / ja subset files built with the Hokuto/Hada workaround), so the editor iframe and the front end show the same faces. `style.css` uses `:lang()` rules → copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it. Every font file listed in theme-meta `fonts[].files` with OFL licence files; family names in readme.txt.
Stacks:
- en/fr/de display: `"Hanken Grotesk", "Helvetica Neue", Arial, sans-serif`; body: `"Albert Sans", "Helvetica Neue", Arial, sans-serif`.
- zh-TW display: `"Hanken Grotesk", "Noto Sans TC", "PingFang TC", "Microsoft JhengHei", sans-serif`; zh-TW body: `"Albert Sans", "PingFang TC", "Microsoft JhengHei", sans-serif` (no bundled zh or ja face in body).
- ja display: `"Hanken Grotesk", "Noto Sans JP", "Hiragino Sans", "Yu Gothic", sans-serif`; ja body: `"Albert Sans", "Hiragino Sans", "Yu Gothic", "Meiryo", sans-serif`.
Scale (theme.json `fontSizes`; source T(b)):
| Slug | Size | Use | Weight / lh / ls | Token |
|---|---|---|---|---|
| `giant` | clamp(5.5rem, 12vw, **9.5rem**) | date numerals (largest type, ≥4.25rem ✓) | Hanken 800 / .9 / −.04em | T(b) ~150px numeral |
| `xxl` | clamp(2.5rem, 5vw, 3.25rem) | inner h1 | Hanken 700 / 1.2 / −.01em | — |
| `xl` | 2.125rem | home lead h1, section h2 | Hanken 600 / 1.5 (lead), 700 / 1.3 (h2) | T(b) lead 33.7px / 600 / 1.5 |
| `lg` | 1.75rem | h3, step titles | Hanken 700 / 1.35 | — |
| `md` | 1.25rem | feed row titles, stall names | Hanken 700 / 1.6 | T(b) row ~20px |
| `base` | 1.0625rem | inner body | Albert 500 / 1.8 | T(b) lh 1.8 |
| `sm` | .9375rem | front-page column body, lists | Albert 500 / 1.8 | T(b) 12px/600/1.8 raised to 15px for legibility |
| `xs` | .75rem | labels, pills, masthead | Albert 700 / 1.4 / .08em uppercase | T(b) 10.5px 600 labels |
CJK: headings ×0.75 of the Latin size (giant numerals unchanged), body lh 1.85, letter-spacing .02em; fr/de `hyphens: auto` on body and h2/h3. Sentence case for headlines (T(b)); uppercase only for xs labels.

---

## 7. Motion and scroll (sp-scroll)

Copy `pipeline/assets/sp-scroll/` unchanged to `assets/` (JS in head, not deferred; CSS also as editor style). Only `sp-*` classes; no scroll listeners, no GSAP/AOS/Lenis/jQuery. The reference is static apart from decorative keyframes (T(g)); hitomachi supplies the text rise. **Three effects** on the home page:

### 7.1 Chosen effects (from stage-a "Scroll effect candidates")
| Effect | sp-* | Where | Source trigger / time / easing | Ours |
|---|---|---|---|---|
| Travelling strip | `sp-marquee` | home §2 ticker (first screen) | nosson fish `ayu`: CSS keyframes, load, left 0 → −200%, linear infinite | 40s linear loop (override `animation-duration: 40s` on `.hm-ticker > *`); duplicate group `aria-hidden`; theme CSS hides the duplicate when not animating: `.hm-ticker > [aria-hidden] {display:none}` and `@media (prefers-reduced-motion:no-preference){ html:not(.sp-no-motion) .hm-ticker > [aria-hidden]{display:flex} }`; hover pauses (`animation-play-state: paused`) |
| Rows rise | `sp-reveal sp-reveal--up` + `sp-stagger` | home §4 strip **container**, §6 apply rows (4), §5 none; inner: people rows, stall groups, season months, story rows | hitomachi `fadeInText`: load/ScrollTrigger, translateY 8px → 0, ~0.8s ease-out | `--sp-dist: 12px`, `--sp-dur: .8s`, `--sp-ease: cubic-bezier(.23,1,.32,1)` (default), stagger .12s |
| Parallax | `sp-parallax` | §7.2 | hitomachi fixed side slideshow (photo stays while the column scrolls) | §7.2 |
**Never**: reveal anywhere in §1 front, §2 ticker or §3 front-more (the first section and its continuation stay printed and static, like the reference); fees table; forms and their wrappers; legal text; children of the horizontal strip.
Non-scroll: nav and inline links draw a 1px russet underline from the left on hover/focus (`background-size: 0 1px → 100% 1px`, `background-position: 0 100%`, 1s `cubic-bezier(.23,1,.32,1)`; hitomachi underline scaleX 1s); pills fill russet-deep with white text on hover (.2s ease).

### 7.2 Parallax (required)
| Where | Block / structure | Moving layer | Foreground (static) | `--sp-par` desktop / mobile | Reference motion |
|---|---|---|---|---|---|
| **Season band** (home §5, primary, acceptance target) | Group `hm-band sp-parallax`, 480px (mobile 360px), `overflow: clip` | `figure > img` **B1** (scale 1.18 built in) | "In season · November" card (sibling of the figure, grid-stacked) | **10% / 6%** | hitomachi's fixed side slideshow: the photo holds still while the paper column scrolls past — expressed as a slow drift |
| **Lead photo** (home §1) | `div.hm-lead.sp-parallax` | `img.sp-parallax__layer` H01 inside the clipped figure | outline SVG + diamonds stay put | **6% / 4%** | — |
| **Inner lead photos** (About, Stalls, In season, Apply, single) | same structure | `img.sp-parallax__layer` | outline + diamonds | 6% / 4% | — |
Mobile keeps parallax at the smaller speed (set `--sp-par` in a `@media (max-width: 781px)` rule). Reduced motion, `?sp-static`, no JS and the editor: no movement, no scale. Acceptance: `check-parallax.mjs` desktop + mobile ≥6px difference on the band, ≤1px under reduced motion; ≥3 reveals hidden before entry (§4 strip, §6 rows) and final after; nothing transparent after scrolling to the bottom.

---

## 8. Responsive rules (hard)

- **390px first screen**: frame margin 8px; masthead 40px with "No. 212 · Sat 21 Nov" left and pill "08:00–14:00" right; nav row 56px wordmark + one overlay menu button. Then the **centre column first** (CSS `order`): tag pill row "This week · Issue 212", headline (xl at 1.625rem), date line, lead shape full width with diamonds 22px. **No vertical text, no `writing-mode`, no absolutely positioned labels over text** anywhere; SAT / NOV stacked letters become one horizontal line "SAT · 21 NOV 2026" beside a 5.5rem numeral; `scrollWidth == innerWidth`.
- **Columns < 782px**: one column, order centre → right (date card) → left; 1px russet rules become horizontal between blocks. 782–1099px: left + centre in two columns, right column drops under as a full-width row (stamp + date block side by side).
- **Ticker**: same height 56px on mobile; never wraps; reduced motion shows the first group static and clipped.
- **Stall strip**: mobile cards 72vw (max 280), photo 3:4; the strip scrolls, the page never does.
- **Apply rows < 900px**: photo above text (100%, 1.45:1), alternation off; circle label row stays horizontal, discs 32px.
- **Fees table ≥782px**: spans the full width of its container (`width: 100%; table-layout: auto`); the price column `white-space: nowrap; text-align: right; width: 1%; padding-right: 24px`, never clipped at 800 and 1280; no `overflow: hidden` on any table wrapper.
- **Any table < 782px** (fees): stacked; each row a block: item (Albert Sans 700) left and price right on line 1 (flex, price `nowrap`), what is included below, dotted divider between rows. No horizontal table scroll.
- **Foot trio**: 3 → 1 column below 782 (office, weekly list, notice board).
- Touch targets ≥44px; CJK horizontal only; images `height:auto`, lead shape keeps aspect-ratio.

---

## 9. Fixed facts (identical on every page and in all five locales; brand.md is the source)

- **Name**: Hinata Market. **Where**: Linden Station Square, Easthaven (fictional), between the station's east exit and the tram stop. **Founded**: spring **2011** by nine growers with the station's community council. Rows C–D added 2015. **Weekly list** started with issue No. 1 on **Saturday 5 November 2022**; the home front page shows **Issue No. 212, Saturday 21 November 2026**.
- **Market**: **40 pitches** in four rows A–D (10 each); every grower sells only what they grow, rear or make within **60 km** of the square.
- **Hours**: every Saturday **08:00–14:00**; December–February **09:00–13:00**; growers arrive from **05:30**, bell at **07:55**. Closed on the Saturday after 25 December. Market office (phone, applications) **Tue–Thu 10:00–16:00**, tel. 020 448 6130, **hello@hinata-market.example** (every mailto). Saturday visitor desk at pitch **A1**.
- **Pitch fees (7 items, per Saturday unless stated)**:
  1. Full pitch, 3 × 3 m, own awning — **€38**
  2. Half pitch, 1.5 × 3 m — **€22**
  3. Corner pitch, two open sides — **€46**
  4. Season pass, full pitch, 12 Saturdays — **€396**
  5. Trial Saturday (first two, full pitch) — **€19**
  6. Power hook-up — **€6**
  7. Market awning loan — **€8**
  Paid by card at the visitor desk or by invoice for season passes; cancellation free up to Wednesday 18:00.
- **How a grower applies (4 steps)**: 01 **Apply** — form or email; applications are read on the **1st of each month**; reply within **10 working days** · 02 **Farm visit** — Amara visits within **3 weeks** · 03 **Two trial Saturdays** at **€19** each · 04 **Your pitch** — a pitch number and a season pass offer.
- **Grower rules (6)**: grow, rear or make it yourself · within 60 km · someone from the farm at the stall all morning · a price on everything · no resale · paper or own bags only.
- **People (7)**: Ines Valdés, market manager (since 2019) · Tomas Brandt, site and pitches (marks the pitches at 05:30) · Amara Osei, grower liaison (farm visits) · Lena Hoffmann, visitor desk and the weekly list · growers Joseph Mensah (Fernhill Greens, A3, one of the founding nine), Elif Demir (Hollow Lane Orchard, B6), Sofia Lindqvist (Marsh End Cheese, C4, since 2024).
- **Stories (3)**: "Fifteen years at A3" (Joseph, from a trestle table to a corner pitch) · "The orchard that came for two Saturdays" (Elif's trial Saturdays in 2017) · "Cheese from a borrowed awning" (Sofia, awning loan in her first season).
- **Stalls on the home strip (6)**: A3 Fernhill Greens (salad leaves, chard, kale) · A8 Brookside Eggs (eggs from 400 free-range hens) · B2 Old Mill Bakery (sourdough and rye) · B6 Hollow Lane Orchard (apples, pears, juice) · C4 Marsh End Cheese (goat cheese) · D1 Ridgeway Roots (squash, leeks, potatoes). Plus C7 Linden Honey (new, from 28 Nov) and D9 knife sharpening (first Saturday of each month).
- **Weekly list**: every **Thursday at 18:00**; next Saturday's stalls, what is in season, notices, one grower's note; one email a week.
- **A day / Saturday routine (brand.md "a day", word "routine")**: 05:30 Tomas chalks the pitches · 06:00 vans in through the east gate · 07:40 crates out · 07:55 bell · 08:00 open · 11:00 soup or coffee round · 14:00 close · 14:30 square swept.
- Demo forecast in the date card: "Dry, 11° / 4°" (illustrative, editable text). **Tone**: neighbourly, plain, specific; numbers instead of adjectives; no promises about prices, organic certification or produce availability.

---

## 10. Images (18 photographs, high-key documentary, one STYLE; all 18 on home)

**STYLE** (identical for every image):
`IMAGE_STYLE="high-key documentary photograph, natural soft morning light, slightly cool neutral colour grading, muted greens and warm wood tones, candid people mid-action, diverse adults in practical outdoor work clothes, modern international town station square with simple canvas awnings and trestle tables, plain wooden crates, 35mm lens, natural grain, unposed, no text, no letters, no numbers, no logos, no brand names, no signage, no labels, no price tags with writing"`
Generate one at a time with `IMAGE_STYLE="<STYLE>" scripts/grok-image.sh out.webp "<subject>"`; Read-check every image; regenerate any with text, numbers, logos, broken faces/hands or a different look. ≤300 KB, ≤2000px, webp. No cut-outs, no Japanese elements.
| # | File | Subject (prompt core) | Ratio / size | Used on (page · block) | Home |
|---|---|---|---|---|---|
| H01 | `lead-crates.webp` | under a canvas awning a grower (Black man, 50s) stacks wooden crates of leafy greens while a shopper (woman, 30s, East Asian) weighs a paper bag on a hanging scale; station square behind, morning light; awning edge across the top; subjects centre-right | 1.93:1, 2000×1036 | Home §1 lead (KV 3) · Apply lead | ✔ |
| H02 | `profile-awning.webp` | five people (market manager woman 40s Latina, two growers, a young volunteer, a site coordinator) raising a canvas awning frame together at dawn on paving, candid laughter | 1.09:1, 1600×1468 | Home §1 left (KV 2) · About lead | ✔ |
| H03 | `today-crates.webp` | stacked crates of squash and apples beside a trestle table at low early sun, long shadows, an apron hanging on a crate | 1.5:1, 1500×1000 | Home §1 right today box (KV 5) · In season lead | ✔ |
| N1 | `notice-honey.webp` | a beekeeper (woman, 50s) arranging plain glass jars of honey on a trestle table | 1.64:1, 1200×732 | Home notice row 1 (KV 6) · post 1 · Stalls (C7) | ✔ |
| N2 | `notice-bikes.webp` | cargo bikes and bicycles parked in a covered stone arcade beside a market square, a man unloading a crate from a cargo bike | 1.64:1, 1200×732 | Home row 2 · post 2 · Visit figure · About (Lena row thumb) | ✔ |
| N3 | `notice-soup.webp` | a large steaming soup pot on a stall, a volunteer ladling into a bowl a customer brought | 1.64:1, 1200×732 | Home row 3 · post 3 · In season (Dec) | ✔ |
| N4 | `notice-knives.webp` | a knife sharpener at a small stall drawing a blade across a whetstone, a customer waiting with a wrapped knife | 1.64:1, 1200×732 | Home row 4 · post 4 · Stalls (D9) | ✔ |
| S1 | `stall-greens.webp` | a grower (Black man, 50s) holding a crate of salad leaves and rainbow chard at his stall | 3:4, 1200×1600 | Home strip 1 · About Joseph · Stalls · In season (Jun) | ✔ |
| S2 | `stall-eggs.webp` | eggs in grey pulp trays on a table, a grower's hands counting a dozen into a box | 3:4, 1200×1600 | Home strip 2 · Stalls | ✔ |
| S3 | `stall-bread.webp` | sourdough and rye loaves on wooden boards, a baker (man, 30s, South Asian) slicing a sample | 3:4, 1200×1600 | Home strip 3 · Stalls | ✔ |
| S4 | `stall-orchard.webp` | a grower (woman, 40s, Turkish) polishing apples beside crates of apples and pears | 3:4, 1200×1600 | Home strip 4 · About Elif · In season (Oct) | ✔ |
| S5 | `stall-cheese.webp` | a cheesemaker (woman, 30s, Nordic) wrapping a small round of goat cheese in paper on a slate board | 3:4, 1200×1600 | Home strip 5 · About Sofia · Stalls | ✔ |
| S6 | `stall-roots.webp` | heaped crates of squash, leeks and potatoes, a grower's gloved hand lifting a squash | 3:4, 1200×1600 | Home strip 6 · In season (Nov) · Fees figure · Stalls | ✔ |
| B1 | `band-square.webp` | wide view from a raised walkway over four rows of canvas awnings filling a station square, shoppers between them, morning haze, station building edge at one side | 2.9:1, 2000×690 | Home §5 parallax band · Stalls lead | ✔ |
| A1 | `apply-notebook.webp` | a grower (man, 60s) writing in a notebook on the tailgate of a small pickup loaded with crates, farm lane behind | 1.45:1, 1600×1103 | Home apply row 1 · Apply step 1 · Weekly list figure | ✔ |
| A2 | `apply-visit.webp` | grower liaison (woman, 30s, West African, notebook) walking a vegetable field with a grower, both looking at leeks | 1.45:1, 1600×1103 | Home apply row 2 · Apply step 2 · About (Amara row) | ✔ |
| A3 | `apply-trial.webp` | a new grower's first small stall, half-width table, the market manager (woman, 40s, Latina) chatting with her at opening time | 1.45:1, 1600×1103 | Home apply row 3 · Apply step 3 · Contact figure · About (Ines row) | ✔ |
| A4 | `apply-pitch.webp` | a site coordinator (man, 40s) measuring a pitch on the paving with a tape measure at dawn, chalk marks without numbers | 1.45:1, 1600×1103 | Home apply row 4 · Apply step 4 · About (Tomas row) | ✔ |
**18 files, all 18 on the home page**, each once. Per inner page no repeats: About H02, S1, S4, S5, A2, A3, A4, N2 · Notices/posts N1–N4 · Stalls B1, S1, S2, S3, S5, S6, N1, N4 · In season H03, S6, S4, S1, N3 · Visit N2 · Apply H01, A1–A4 · Fees S6 · Weekly list A1 · Contact A3 · Privacy none.

---

## 11. Forms (form contract v1: `steps/form-contract-v1` exists)

Copy `pipeline/assets/forms/shippress-forms.php` unchanged to `inc/`, its CSS and editor JS unchanged to `assets/`; `require` in functions.php. Patterns stay literal block markup with a small PHP island for `shippress_form_slot`. **No form in the home first screen; no `sp-reveal` on any form or its wrapper.**
- **Apply for a pitch** (`apply`, enquiry page) and **Contact** (`contact`): a 2px russet box on `wash` (padding 40px 48px, max 760): intro ¶ then `shippress_form_slot( kind: contact )`. Fallback = buffered literal mailto button (`wp-element-button`, russet-deep fill, white text, radius 999 stadium) — Apply: **"Email your application"** `mailto:hello@hinata-market.example?subject=<forms_apply_subject>`; Contact: **"Email the market office"** `?subject=<forms_contact_subject>` — plus a note line. Never links back to its own page. Recommended CF7 fields (documented in readme, not created by the theme): Apply — farm or business name*, your name*, email*, phone, distance from the square in km*, what you grow or make*, pitch wanted (select: full / half / corner)*, Saturdays wanted (select: season pass / occasional), message, consent checkbox*, submit "Send application". Contact — name*, email*, subject (select: visiting / press / volunteering / other), message*, consent*, submit "Send".
- **Weekly list** (`weekly-list`, newsletter standard page, standalone): the form card sits on the **ink** dark panel (#2E2119, padding 56px 64px, text paper): `shippress_form_slot( kind: newsletter, email: hello@hinata-market.example, label: forms_email, submit: forms_subscribe, notice: forms_mail_notice, subject: forms_mail_subject )`.
- **Home §8 centre box**: the same newsletter slot on paper (light). The footer only links to Weekly list (no second slot).
- Plugin order (shared helper): newsletter MailPoet (explicit id) → MC4WP; CF7/WPForms only via an explicit dedicated newsletter id. Contact CF7 → WPForms. Without plugins the newsletter still shows a required `type=email` field + submit using native mailto POST, with the notice visible.
- **Tokens** (style.css, mapped to theme.json presets):
  - light (default): `--sp-form-accent: var(--wp--preset--color--russet-deep)`; `--sp-form-on-accent: var(--wp--preset--color--white)`; `--sp-form-radius: 0` for fields (T(d) radius 0) with the submit as a stadium (`border-radius: 999px`, T(d) pill buttons); `--sp-form-focus: var(--wp--preset--color--ink)` (2px outline, offset 2px); `--sp-form-surface: var(--wp--preset--color--white)`; `--sp-form-text: var(--wp--preset--color--ink)`; field borders 1px russet, 46px tall; error text/border #B23A26; success panel `wash` with leaf text #3F5B45; submit hover `ink`.
  - dark (`.hm-dark` group style): `--sp-form-surface: #3A2B22`; `--sp-form-text: #FBFAF8`; `--sp-form-accent: #E3B999` (russet pale); `--sp-form-on-accent: #2E2119`; `--sp-form-focus: #FBFAF8` (2px); borders `rgba(251,250,248,.4)`; error #F2A898; success #B9D2BE. Labels inherit paper.
  - Styled states: input, textarea, select, email, checkbox/radio (`accent-color`), label, submit, hover, focus-visible, disabled, error, success; scoped to CF7, WPForms, MailPoet, MC4WP (+ Jetpack, `.wp-block-form`) classes and `.sp-newsletter-fallback`; no global input selectors.
- **i18n semantic keys** in `inc/i18n/en.php` (extract with `L10N_SEMANTIC=1`; five locales rewritten locally, not literal): `forms_email` "Your email", `forms_subscribe` "Join the weekly list", `forms_mail_notice` "This opens your email app. Send the message to join the list; you are not on it yet.", `forms_mail_subject` "Weekly list: please add me", `forms_contact_subject` "Message for the market office", `forms_apply_subject` "Pitch application", `contact_email` "Email the market office", `apply_email` "Email your application", `forms_contact_note` "Opens your email app. Tell us your farm, how far it is from the square and what you would bring." Check rendered labels, buttons, notice and subjects in en, zh-TW, ja, fr, de.
- Validation: `form-check.py`, five-locale `form-runtime-check.php`, `repo-gates.sh forms`; real CF7 at 390px and desktop on light (Apply/Contact) and dark (Weekly list) grounds; never submit.

---

## 12. Similarity table (target ≈80%; values from reference-tokens.md)

| Dimension | Reference value (token) | Hinata value |
|---|---|---|
| Ground | #FBFAF8 paper ~72% (T(a)) | #FBFAF8 paper ~70% |
| Line / ink colour | one colour #1A3AEB for type, frame, rules ~14% (T(a)) | russet #A86F4C frame/rules/numeral ~4% + walnut ink #2E2119 type ~12% (hue change: row family russet) |
| Accent | magenta #E83CF0 ~3%, stickers + diamonds (T(a)) | point #D9553A <1% (diamonds, greeting, APPLY discs) |
| Saturated share | 9.5% (T(a)) | ≤8% target, cap 15% |
| Page frame | 2px, inset 16px (T(c)) | 2px russet, inset 16px (mobile 8px) |
| Masthead | 46px, issue / date / toggle pill, 1px rule (T(c), T(f)) | 46px, issue / date / hours pill with knob, 1px rule |
| Columns | 430 / 650 / 318, 1px rules, padding 10–24 (T(c)) | 30.7 / 46.4 / 22.9 fr (= 430/650/318 at 1440), 1px rules, padding 24 |
| Lead headline | 33.7px / 600 / lh 1.5 (T(b)) | 2.125rem (34px) / 600 / 1.5 Hanken Grotesk |
| Body | 12px / 600 / lh 1.8 (T(b)) | 15px / 500 / 1.8 front columns, 17px inner (legibility) |
| Labels | 10.5px / 600 / uppercase (T(b)) | 12px / 700 / uppercase .08em |
| Date numeral | ~150px heavy, ink (T(b)) | 9.5rem (152px) Hanken 800, russet |
| Lead photo | 606×314 (1.93), stadium, 2px outline, 4 × 28px diamonds (T(d), T(e)) | 602×312 (1.93), stadium left end + diagonal right cut (row hero), 2px outline, 4 × 28px diamonds |
| Profile photo | 400×367 (1.09), radius 0 (T(e)) | 382×350 (1.09), radius 0 |
| Feed thumbnails | 121×74 (1.64), right of row (T(e)) | 121×74 (1.64), right of row |
| Service rows | photo 353×244 (1.45), alternating, ~35% width (T(e)) | 353×244 (1.45), alternating, apply rows |
| Dotted rules | 2px dots, 6px pitch; scissor glyph on section rules (T(c), T(f)) | identical geometry, russet; our scissor SVG |
| Radius / shadow | 0 except stadium photo & pills; no shadows (T(d)) | 0 except lead shape, pills, submit; no shadows |
| Buttons | stadium outline 2px 130×40 + pointing hand (T(f)) | stadium outline 2px 150×40 + our pointing-hand SVG |
| Stamp | 270×260 outline with 1px hatch (T(f)) | 270×260 2px russet with hatch band |
| Arrowed rule + 2 stadium cells | yes (T(f)) | yes (FORECAST / STALLS TODAY) |
| Foot row | company box / ad / contact box (`nosson-full.png`) | office box / weekly-list box / notice board |
| Motion | fish glyph linear loop; static page; no scroll reveals (T(g)) | cargo-bike ticker `sp-marquee` 40s linear; front static; rows rise 12px .8s below the front (hitomachi); parallax band 10% |
| Imagery | candid documentary photos, high-key, slightly cool (T(e)) | same STYLE family, 18 own photographs |

---

## 13. Home acceptance checklist (stage 1)

- [ ] 2px russet frame inset 16px around the whole page; 46px masthead with issue No. 212 / Saturday 21 November 2026 / hours pill; exactly one `core/navigation`.
- [ ] Three ruled columns 430/650/318 at 1440 with 1px rules; no cards, shadows or tinted panels.
- [ ] KV 1–7 all visible in the 1440×900 first screen (lead H01 in stadium + diagonal shape with 2px outline and four point diamonds; "21" numeral ≥9rem with SAT/NOV, arrowed rule, two stadium cells; H02 profile + point greeting; H03 top visible; N1 row top visible; ticker moving under `?sp-motion`).
- [ ] Dotted rules are 2px dots / 6px pitch; every section divider ends with the scissor glyph.
- [ ] Horizontal stall strip with 6 cards + end card scrolls inside itself; page has no horizontal overflow at 390 and 1280.
- [ ] Parallax band B1 with `--sp-par: 10%` (mobile 6%) passes `check-parallax.mjs`; reveals only in §4 container and §6 rows; none in §1–§3, fees or forms.
- [ ] Fees table: 7 items exactly as §9, full width ≥782px, price column nowrap right and unclipped at 800/1280; stacked on mobile.
- [ ] Weekly-list newsletter slot in §8 (email + submit + notice without plugins); not in the first screen.
- [ ] 18 unique images on home, 0 cut-outs, no text/logos in photos; ≥250 English words, 3 narrative paragraphs (¶1 left column, ¶2 market notes, ¶3 apply) each ≥20 words.
- [ ] Fonts: Hanken Grotesk / Albert Sans via theme.json fontFace, same in editor; largest size `giant` 9.5rem.
- [ ] First-screen saturated share ≤15% (target ≤8%); 390px first screen has no vertical text and no overlapping absolute labels.
- [ ] Numbers match §9 everywhere (40 stalls, 08:00–14:00, €38 … €8, issue 212, 1st of each month, Thursday 18:00).
