# Ishizue Holdings: design spec (stage B, binding for implementation)

Slug `ishizue-holdings`, diversified holding company, type **business** (declares WooCommerce support, does not need it). Row b7-14: archetype single-column-longform, nav centred, real documentary photography, page_structure timeline-milestone, first_screen timeline-line.
References (see `reference.md`, `reference-tokens.md`, `ref/*.png`):
- **R1 Motoya United** https://motoya-united.co.jp/ (main, 80% similarity target): white ground, black ink, centred two-line wordmark, round black Menu button, rounded r10 hero photo bleeding off the right edge with a sliver photo at the left, "Topics" pill, bracket `( )` phrase highlights in marquee rows, sticky stack of tinted business cards with a 3:2 photo and round arrow, rotated index arc.
- **R2 TSG** https://www.tsg-jpn.co.jp/ (secondary): band rhythm white / black / white / blue-grey `#BEC8CE`, 97.6 px band padding, scrub parallax (ScrollTrigger scrub 1, `top bottom` → `bottom top`, linear). Its 3D cut-out objects, vertical text and saturated first screen are **not** borrowed.
Borrow structure, technique, geometry and colour relationships only. No copy, photos, logo or the R1 bracket wordmark (our logo has no brackets). `tok(x)` = the section of `reference-tokens.md` a value comes from.

Fixed brand facts (every page and all five languages): **Ishizue Holdings B.V.**, founded **1962** in **Rotterdam** by **Kenzo Ishizue** and **Anneke de Vries** as a stone and aggregates trader on the Maas ("ishizue" = foundation stone). Head office **Maaskade 41, 3071 NE Rotterdam, Netherlands** since **1987**. Privately held: majority owned by the Ishizue Foundation, employee share plan since 2003; reports are published voluntarily. Currency **EUR** in every language, no converted amounts.

---

## 1. Signature techniques (three, all obvious at a glance)

### T1. Rounded hero photo bleeding off the right edge, sliver photo at the left, Topics pill, and a curve-ended timeline line (R1 first screen + R1 1 px curve line)
- Reference (R1 `motoya-first.png`, `tok(e)`): header 127 px tall with a centred two-line wordmark and, at the right, "Menu" + a 55 px black circle. Below it a photo **915×700** at x 525–1440, y 127–827, left corners r10, the right edge running off the window. At the far left a second photo shows only a **30 px sliver** (x 0–30, same height, right corners r10). Tagline at the left (x 95, ~80 px bold, 3 lines, vertically centred on the photo). A white r10 "Topics" pill overlaps the photo's bottom-right edge (label grey, title ink, 14 px). Further down R1 draws a 1 px black line across the content width whose two ends curl upward (r ≈ 10 px), visible in `scroll-motoya-marquee.png`.
- Ishizue geometry (desktop 1440×900):
  - Header 0–120 px (see §3.3). Hero section height `calc(100vh - 120px)`, min 720, max 820.
  - Photo **P01** (headquarters on the quay) in `div.ih-hero__photo.sp-parallax` at x **525 → 1440** (width `63.5vw`, runs off the right edge, no right gutter), y 120 → 780 (**660 px**, aspect ≈ 1.39), `border-radius: 10px 0 0 10px`, `overflow: clip`, the `img` is a direct child (parallax layer). `object-fit: cover; object-position: 40% 50%`.
  - Sliver **P02** (atrium) at x 0 → 30, same top and height as P01, `border-radius: 0 10px 10px 0`, `object-position: 85% 50%`. Decorative (`alt=""`).
  - Tagline H1 at x **95** (left padding `6.6vw`), width ≤ 400 px, vertically centred on the photo: "Foundations / laid once, / built on / for decades." Noto Serif 600, preset `xx-large` = **5rem** (80 px, R1 tagline `tok(b)`), line-height 1.12, letter-spacing −0.01em, ink. Under it (24 px gap) a 1rem/1.75 Noto Sans 500 line, max 360 px: "A family of six companies in Northern Europe, owned for the long term since 1962." That is all the text on the photo side; nothing is laid over the photo except the pill.
  - Topics pill: white `#FFFFFF`, r10, height 44, padding 0 20, at right 30 px, bottom edge of the photo −22 px (straddling the photo bottom like R1). Content: "Notices" (0.8125rem, `#4E5A60`) + 20 px gap + "Interim report H1 2026 published · 28 Aug 2026" (0.8125rem ink 500), whole pill is one link to the Investors page.
  - **Timeline line** (row first_screen "timeline-line", R1 curve line): an inline SVG across x 30 → 1410 at y **836**, stroke 1 px ink, both ends curl up with r 10 px (exact R1 shape, mirrored left/right). On the line seven 7 px ink dots at positions proportional to time (x = 30 + (year − 1962) / 64 × 1380): **1962** (30), **1978** (375), **1994** (720), **2009** (1043), **2016** (1194), **2021** (1302), **2026** (1410, a hollow dot in accent `#7D8C94` = "now"). Year labels **below** the line (y 848), Noto Sans 500 0.75rem ls 0.12em ink; 1962 left-aligned on its dot, 2026 right-aligned, the others centred. Each year is a link to the matching company card anchor (`#c-1962` …) or the History page (2026). The line is static (no reveal, no motion).
- Mobile 390: header 72 px; H1 2.5rem (clamp below) in normal flow at 20 px gutter; the lead line; then P01 in flow, margin-left 20 px, bleeding off the right edge, aspect 4:3, left corners r10; **no sliver**; the Topics pill becomes a normal block under the photo (margin 12px 20px 0, not absolutely positioned, text wraps); the timeline line shows only **1962 · 1994 · 2026** on a 350 px line with labels below. No vertical text, no absolutely positioned labels over text.
- Must not be diluted: the photo must touch the right window edge with r10 only on the left; the sliver must be visible at the far left on desktop; the pill must straddle the photo's bottom edge; the line must have the curled ends and the proportional year dots. No overlay tint on the photo, no centred heading.

### T2. Sticky stack of tinted group-company cards (R1 Business cards, the milestone timeline of the group)
- Reference (R1 `scroll-motoya-cards-before/after.png`, `tok(c,d,e,g)`): left column (x 30) with the section label "Business" 34 px, a 40 px two-line statement, a 48 px black round ">" button + link, and lower a small "Company" link list with 22 px round arrows. Right: cards **993×370**, r10, one flat colour per business, gap 32 (first card margin-top 120). Inside: photo **412×275 (3:2)** r10 inset **48 px**; on the right a bracket phrase heading `(…)` in bold ~30 px, under it the business name 14 px ls 0.12em with a 2 px underline; a short paragraph bottom-right; a 48 px black circle with a white ">" at top-right. Cards stick and stack while scrolling, each entering from below tilted ~−0.9° (matrix .982/.015) and settling to 0°. An arc of rotated numbers 01–05 at the right window edge.
- Ishizue: the **six group companies in the order they joined** = the home page's milestone timeline. Pattern `front-companies`.
  - Left column x 30 → 370 (`position: sticky; top: 140px`): label "Group companies" (Noto Sans 400 **2.125rem** = 34 px, lh 1.5, ls 0.02em, R1 h2 `tok(b)`); 64 px below it H2 "Six companies, / one long view." (Noto Serif 600 **2.5rem** = 40 px, lh 1.5, R1 h3 `tok(b)`); 40 px below a 48 px ink circle with white chevron + "All group companies" (0.875rem 500 ls 0.06em) → /companies. 120 px below, label "Company" (1.25rem 400) and a list of four links each with a 22 px ink circle + chevron: History, Leadership, Governance, Investors (0.875rem 500, row gap 16).
  - Cards x 405 → 1398 (**993 px**), min-height **370**, `border-radius: 10px`, padding 48, no border, no shadow (R1 `tok(d)`), `margin-top: 32px` (first 120 px). `position: sticky; top: calc(140px + var(--i) * 14px)` with `--i` = 0…5 so the top 14 px of each earlier card stays visible behind the next (R1 peeking edge). Parent uses `overflow: clip`, never hidden.
  - Inside each card: photo **412×275**, 3:2, r10, `object-fit: cover`, at the left inset 48; text column from x 508 to the card's right padding (≈ 437 px):
    - tag line at top: `01 — 1962` (Noto Sans 500 0.8125rem ls 0.12em, `#4E5A60`);
    - bracket heading (T3 style, below): e.g. "(Stone and aggregates for the delta) since 1962." Noto Serif 600 **1.75rem**, lh 1.5, ink; the phrase inside the brackets sits on a highlight `rgba(255,255,255,.55)` (lighter than the card tint so it reads as R1's coloured fill one step lighter);
    - company name "Ishizue Materials" Noto Sans 700 **0.875rem** (14 px) lh 1.5 ls **0.12em**, 2 px ink underline offset 6 px (R1 card title `tok(b)`);
    - bottom-aligned paragraph (`margin-top: auto`) 0.875rem/1.7 Noto Sans 500, ≈ 40 words, then the facts line "Rotterdam · 640 people" 0.8125rem `#4E5A60`.
    - arrow: 48 px ink circle, white chevron 14 px, top 30 / right 30 inside the card (R1), link to `/companies#materials`; hover: circle background `#7D8C94`, `.25s cubic-bezier(.23,1,.32,1)` (R1 `tok(g)`).
  - Card tints (flat, one per company, §2): 1 `#E3DFD3`, 2 `#D5DEE5`, 3 `#E2D6D7`, 4 `#D6E0D5`, 5 `#D3E1E0`, 6 `#C9D1D5`.
  - Index arc (desktop ≥ 1100 only, decorative, `aria-hidden`): at the right edge of each card (x 1404–1430, vertically centred) the numbers of the neighbouring cards in a small arc, Noto Sans 500 0.75rem: current number upright, ±1 rotated 25° and offset 8 px left, ±2 rotated 50° and offset 22 px left (R1 arc). Static.
  - Each card has `id="c-1962"` etc. for the hero timeline links.
- Mobile < 782: no sticky, no tilt, no arc. Cards full width minus 20 px gutters, padding 20, photo full width 3:2 on top, tag line, heading 1.375rem, name, paragraph, then a row with facts at the left and the 44 px arrow at the right (in flow, not absolute). Left column becomes a normal intro above the cards (Company list hidden on mobile; those links are in the menu and footer).
- Must not be diluted: six different flat tints (not white cards with borders), r10, 3:2 photo inset 48 px, round ink arrow ≥ 48 px, sticky stacking with peeking edges on desktop, the left sticky column. Do not shrink the cards below 900 px wide at 1440.

### T3. Bracket `( )` phrases with a tinted highlight, in marquee rows and in headings (R1 marquee rows and card headings)
- Reference (R1 `scroll-motoya-marquee.png`, `tok(f,g)`): rows of ~30 px bold text, each phrase wrapped in black round brackets with a flat coloured fill behind the phrase (pill-shaped, radius ≈ 8 px), rows scrolling horizontally with CSS keyframes; the right half holds a centred narrative paragraph.
- Ishizue: **left 7/12** of `front-ethos`, four marquee rows (`sp-marquee`), each row = one inner group of four phrases duplicated `aria-hidden`; row height 62 px; item: "(" + phrase + ")" in Noto Sans 700 **1.875rem** (30 px) ink, the phrase on a highlight block (padding 0 .3em, `border-radius: 8px`, background = one of the six company tints, cycling). Items separated by 48 px. Phrases (fixed, translated per language): (patient ownership) (local management) (keep the name) (reinvest first) (one long view) (people before structure) (published fees) (independent chair) (sixty-four years) (six companies) (nine countries) (2,860 colleagues). Rows 2 and 4 run at 46 s instead of 30 s (theme CSS `animation-duration` on `.ih-marquee--slow > *`; class names and JS untouched).
- The same bracket + highlight style is used for: every T2 card heading; the three governance principles on home; the lead line under every inner page H1 (one phrase in brackets, e.g. "(Since 1962) one decision at a time."); the IR notice categories.
- With `?sp-static` or reduced motion the rows sit still and clip at the column edge (no horizontal scroll); the first four phrases of each row must be readable in the static state.
- Must not be diluted: real round brackets in ink, a visible tinted fill (never a grey underline), text ≥ 1.75rem in the marquee.

### Supporting (not counted as a signature): R2 band rhythm
Full-width bands alternate ground → photo → stone `#BEC8CE` → ground (with r30 panel) → ink `#0B0D0E` → ground, band padding **98 px** top/bottom (`tok(c)` R2 97.6). No vertical text.

### Continuation to inner pages (required)
Every inner page opens with a **page head = small T1**: H1 left (Noto Serif 600 `clamp(2.5rem, 4.6vw, 4.25rem)`), bracket lead line (T3), photo right r10 left corners bleeding off the right edge, width 58vw, height 520 (mobile 4:3 in flow), the 30 px sliver at the far left as a **flat block in the page's company tint** with r10 right corners (no second photo), and the curve-ended line under the head (no dots, or the page's own years where listed). Photo head is the page's `sp-parallax` (`--sp-par: 6%`).

| Page | T1 (head) | T2 (cards) | T3 (brackets) |
|---|---|---|---|
| History | head P10; the curve line carries **all nine** milestone years as anchors to the rows below | each milestone row ends with a small tinted card (r10, 3:2 photo 300×200, company tint) for the six acquisitions | lead "(Since 1962) one decision at a time."; each row title has a bracket phrase |
| Group companies | head P02 | **full T2**: six sticky cards, larger (min-height 420) with a facts table under the paragraph (joined, base, people, sector) | card headings; lead "(Six companies) one owner." |
| Leadership | head P15 | — | each person's row starts with a bracket phrase of their remit, e.g. "(Treasury and reporting)" |
| Governance | head P03 | committees as three tinted r10 cards (no photo, text only) in a row | principles list in bracket + highlight style, 1.875rem, static (no marquee) |
| Investors | head P12 | — | notice categories as bracket tags "(Report)" "(Notice)" "(Meeting)" |
| Sustainability | head P09 | 2030 targets as three tinted cards with the R1 inset photo layout (P07, P16, P04 at 3:2 300×200) | lead and target headings |
| For owners | head P13 | one large T2 card (Lindholm story, P06) | the five stages each titled with a bracket phrase |
| Shared services | head P14 | — | lead "(Fixed fees) published here." and the service names in the price table use bracket style at 1rem |
| News | head P11 (index) | story cards use r10, 3:2 photos and company tints as card grounds | category tag in brackets |
| Contact | head P01 | address card = one tinted r10 card with P02 inset 3:2 | lead "(Maaskade 41) since 1987." |

---

## 2. Colour

Taken from R1 (ground/ink/photo shares, per-company flat card colour mechanic) and R2 (blue-grey band, black band). Row hex `#7D8C94` is the one muted accent.

| Role | Hex | Source | Use | Share of a page |
|---|---|---|---|---|
| Ground | `#FAFBFB` | R1 `#FFFFFF` (−1.6% lightness, row note asks for an off-white ground) | page ground, header | ≈ 60% |
| White | `#FFFFFF` | R1 ground | Topics pill, IR panel, menu overlay | ≈ 4% |
| Ink | `#0B0D0E` | R1 `#000000` (+4.9% lightness) | text, 1 px lines, round buttons, owners band, footer | ≈ 14% (bands included) |
| Stone band | `#BEC8CE` | R2 band, exact | governance band, table header rule | ≈ 7% |
| Panel | `#EDF0F1` | R2 `#BEC8CE` lightened (derived) | price-table zebra, details ground on inner pages | ≈ 2% |
| Accent | `#7D8C94` | row hex; same hue (≈ 200°) as R2 band | "now" dot, hover on arrows, active menu item, focus ring, small rules | ≤ 3%, never a section ground |
| Muted text | `#4E5A60` | accent darkened for 7:1 on ground | captions, meta, tag lines | — |
| Hairline | `#D9DCDD` | ink at 15% on ground | list rules | — |
| Card tints 1–6 | `#E3DFD3` `#D5DEE5` `#E2D6D7` `#D6E0D5` `#D3E1E0` `#C9D1D5` | R1 card hues yellow / blue `#4694D1` / pink `#DD7687` / green `#6BBC6E` / teal `#61C1BE` + R2 band, chroma reduced to HSL S 12–25% | T2 cards, bracket highlights, inner-page slivers | ≈ 10% on home, below the fold only |

- **Changed from R1, with reason:** R1's per-card pastels (S 50–70%) are replaced by low-chroma tints of the same hues. The row note requires a quiet palette with the hex as the only muted accent and no saturated fields; a holding company's card stack in candy colours would read as a consumer brand. The mechanic (one flat colour per company, 10% of the page) is kept exactly.
- Contrast: ink on every tint ≥ 13:1; white chevron on ink 19:1; `#4E5A60` on ground 7.1:1; ink text on `#BEC8CE` 11:1; on the ink band text `#FAFBFB` and muted `#AEB8BD`.
- **First-screen saturated area:** R1 1.0%, R2 22.5% (rejected). Hard cap 15% (row note); target **≤ 5%**. Achieve with P01 graded cool and muted (stone, glass, pale sky, blue-grey) and no coloured UI on the first screen (pill white, line ink, only the accent dot).

## 3. Type, header, footer

### 3.1 Fonts (theme.json `fontFamilies` + `fontFace`, identical in editor and front end)
- Display/headings: **Noto Serif** (OFL) variable wght 400–700, latin + latin-ext woff2 (covers fr/de). Row fonts; note requires a readable Latin serif display. (R1 uses a bold sans for headings; typography is not one of the five similarity dimensions, the weights and sizes below are R1's.)
- Body/UI/labels: **Noto Sans** (OFL) variable wght 400–700, latin + latin-ext woff2 (closest humanist match to R1 Inter + Noto Sans JP, `tok(b)`).
- zh-TW: **Noto Serif TC** 600 (headings) and **Noto Sans TC** 400/500 (body), subset woff2 built from the zh-TW demo text. ja: **Noto Serif JP** 600 and **Noto Sans JP** 400/500, subset from the ja demo text. The repo subset script is known broken: use the Hokuto 1.1.0 / Hada approach (`themes/hada-dermatology/assets/fonts/noto-serif-*-*.woff2`, generated in /tmp, never inside the repo). Each CJK file ≤ 400 KB.
- All faces declared as `fontFace` entries in theme.json (not only enqueued CSS). Language stacks via `:lang(zh-TW)` / `:lang(ja)` rules in style.css, so **copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it in functions.php** (editor iframe has no `lang`). `check-editor-fonts.mjs` must pass for en and zh-TW. OFL texts in `assets/fonts/`.

### 3.2 Sizes (theme.json presets; fluid where noted)
| Preset / use | Value | Source |
|---|---|---|
| `xx-large` — home H1 | **5rem** (80 px) desktop, `clamp(2.5rem, 5.6vw, 5rem)`, lh 1.12, Noto Serif 600 | R1 tagline ~80 px bold `tok(b)` |
| inner H1 | `clamp(2.5rem, 4.6vw, 4.25rem)`, lh 1.15 | ≥ 4.25rem rule |
| `x-large` — H2 statement | **2.5rem** (40 px), lh 1.5, ls 0.02em, Noto Serif 600 | R1 h3 40/60 `tok(b)` |
| `large` — section label | **2.125rem** (34 px), lh 1.5, ls 0.02em, Noto Sans 400 | R1 h2 "Business" 34/51 `tok(b)` |
| marquee / principles | 1.875rem (30 px) Noto Sans 700 | R1 marquee rows |
| card heading | 1.75rem, lh 1.5, Noto Serif 600 | R1 card phrase ~30 px |
| `medium` | 1.25rem | — |
| body | **1rem**, lh 1.75, Noto Sans 400 (zh/ja 500, lh 1.85) | R1 16 px 500; R2 16/28 `tok(b)` |
| `small` — card name, tags | **0.875rem**, lh 1.5, ls **0.12em**, 700 | R1 card title 14/21 ls 1.68 px `tok(b)` |
| `x-small` — meta, years | 0.75–0.8125rem, ls 0.12em, 500 | — |
- zh-TW / ja headings ≈ 0.75× the English size (home H1 3.75rem, H2 1.875rem), letter-spacing 0.06em (R1 JP h3 ls 2.4 px). fr/de: `hyphens: auto` on headings and body. Case: normal everywhere (no uppercase labels).

### 3.3 Header and footer
- Header (R1, row nav centred): height **120 px** desktop / 72 mobile, `position: sticky; top: 0`, background `rgba(250,251,251,.92)`, no rule. Centre: wordmark text "ISHIZUE" Noto Sans 600 1.75rem ls 0.08em with "HOLDINGS" 0.75rem 700 ls 0.22em centred under it (two lines like R1, **no brackets**), link home. Right (30 px gutter): "Menu" 1rem 400 + **55 px** ink circle with a white 3-line icon (16×12) — this is the WP Navigation block with `overlayMenu: "always"` (the only menu). Overlay: white full screen, items Noto Serif 600 2.5rem left-aligned at x 95, each preceded by its number 01–10 (0.75rem ls 0.12em), close button = same 55 px circle with ×. Links: History, Group companies, Leadership, Governance, Investors, Sustainability, For owners, Shared services, News, Contact. Mobile circle 44 px.
- Footer: ink `#0B0D0E` band, padding 98/48, text `#FAFBFB`, muted `#AEB8BD`. Row 1: wordmark (white) left + the curve-ended line in `#AEB8BD` running to the right edge of the content. Row 2, four columns: Group (History, Group companies, Leadership, Governance); Investors (Investors, Sustainability, News); Work with us (For owners, Shared services, Contact); Head office (address, reception hours, phone, emails). Bottom: "© 2026 Ishizue Holdings B.V. · Chamber of Commerce no. on request" + language switcher.

## 4. Home page (en; same structure in every language)

### 4.1 First screen (1440×900)
Header (120) → T1 hero as specified in §1 T1: tagline + lead left on ground, P01 rounded and bleeding right (parallax), P02 sliver at x 0–30, white Topics pill straddling the photo bottom-right, curve-ended timeline line with seven proportional year dots at y 836. Saturated ≤ 5%. Forbidden on the first screen: table, form, search, any heading centred over the photo, coloured buttons, vertical text.

### 4.2 Block order
| # | Pattern | Band | Purpose | Layout and photos | Copy |
|---|---|---|---|---|---|
| 1 | `front-hero` | ground | identity + latest IR notice + the 64-year line | **T1**. Photos **P01** (`sp-parallax`, `--sp-par: 8%`, 5% < 782), **P02** sliver. No reveal. | H1 8 words + 17-word lead + pill |
| 2 | `front-ethos` | ground, padding 98/98 | what holds the group together | 12 cols in content 1380 (30 px gutters, `tok(c)`): **T3** marquee rows cols 1–7 (4 rows, `sp-marquee`); cols 8–12 text column max 480: label "How we own" (2.125rem Noto Sans), H2 "We buy companies / to keep them." (2.5rem), two paragraphs 1rem/1.75 (`sp-reveal sp-reveal--up` on the text group). Above the block, the full-width curve-ended 1 px line (R1 marquee section top line). No photo. | ≈ 130 words |
| 3 | `front-companies` | ground, pt 80 pb 98 | the six group companies in the order they joined = milestone timeline | **T2** sticky stack. Photos **P04 P05 P06 P07 P08 P09** (one per card). Cards in `div.sp-stagger`, each card `sp-reveal sp-reveal--up` + tilt (§7). | left column 25 words; 6 × (heading 8 words + 40 words) |
| 4 | `front-quay` | full-bleed photo | breathing photo of the head office and harbour (**main parallax**) | Alignfull `div.ih-quay.sp-parallax` (`--sp-par: 12%`, 8% < 782), height **560 px** (mobile 340), direct child `img` **P11**, no radius, no overlay. Foreground (not in the moving layer, sibling after the img, `position:absolute; left:30px; bottom:30px`): white r10 pill like the Topics pill, 44 px high: "Head office" (muted) + "Maaskade 41, Rotterdam · since 1987". Mobile: pill moves below the photo in flow. | 8 words |
| 5 | `front-governance` | stone `#BEC8CE`, 98/98 | how the group is governed | 12 cols: photo **P03** cols 1–6, 3:2, r10 (`figure.sp-reveal.sp-reveal--up`); cols 8–12: label "Governance", H2 "Owned for the / long term.", one 70-word paragraph, then three principles in T3 bracket style (1.375rem Noto Sans 700, highlight `#FAFBFB` on the stone band): "(Independent chair)", "(Seven board members, four independent)", "(Annual report published every March)"; 48 px ink round arrow + "Governance" → /governance. | ≈ 100 words |
| 6 | `front-investors` | ground; white panel | reports and notices (row signature: IR notices) | White panel **r30**, padding **66 / 100** (R1 topics panel `tok(c,d)`), margin 0 30px. Inside, 12 cols: left cols 1–4: label "Investors", H2 "Reports / and notices.", **P12** 4:3 r10 below (340 wide); right cols 6–12: notices list, 5 rows, each row: date (0.8125rem muted, nowrap, 120 px column) · bracket tag "(Report)" · title (1rem 500) · 32 px ink circle arrow at right; 1 px hairline `#D9DCDD` between rows (light, not a dark ruled band). Under it one line: "Next: Q3 trading update · 12 Nov 2026" and a text link "Financial calendar →". The list is in `sp-stagger`, rows `sp-reveal--up`. | 5 notice titles + 30 words |
| 7 | `front-owners` | ink `#0B0D0E`, 98/98 | for owners of family businesses + shared services | 12 cols: cols 1–6 text on ink: label "For owners" (`#AEB8BD`), H2 white "When you are ready / to pass it on.", one 80-word paragraph, a five-item ordered list in 2 columns (number 0.75rem + stage name 1rem 500: First conversation, Business review, Offer and terms, Signing and closing, First 100 days), then one line "We also share our back office with independent companies — fixed fees from €38 per employee per month." with link → /shared-services; 48 px white round arrow (ink chevron) + "For owners" → /owners. Cols 8–12 photo **P13**, 4:5, r10 (`sp-reveal--up`). | ≈ 140 words |
| 8 | `front-close` | ground, 98/98 | people + visit | 12 cols: photo **P15** cols 1–7, 3:2, r10, caption under (0.8125rem muted): "The executive team in the atrium at Maaskade 41."; cols 9–12: label "Visit", H2 "Maaskade 41, / Rotterdam.", address lines, reception hours, phone, two emails, 48 px ink round arrow + "Contact" → /contact. Text group `sp-reveal--up`. | ≈ 60 words |
| — | footer | ink | — | §3.3 | — |

Home photo positions (**13**, no repeats): P01, P02, P04, P05, P06, P07, P08, P09, P11, P03, P12, P13, P15.
Home copy ≥ 250 English words in ≥ 3 narrative paragraphs (ethos ×2, governance, owners, plus card texts) — target ≈ 650 words.

### 4.3 Comparison with the most recent themes
| # | Oto Audio | Ito HR Partners | Kaiten Skills | Hoshi Wealth | **Ishizue** |
|---|---|---|---|---|---|
| 1 | photo-left bleed 75.5%, H1 straddling the edge, ink product strip | one-line H1 + rounded photo loop with circle | inset hand-cut frame + blob | mixed serif/sans H1 over landscape + square | **tagline on ground left, r10 photo bleeding right with left sliver, Topics pill, curve-ended year line** |
| 2 | intro text + near-square photo | inset pale service band | intro with tilted photo | ruled letters list | **bracket-phrase marquee rows + narrative column** |
| 3 | four line icons with numerals | intro + staggered photo pair | horizontal course strip | olive tile + 2:1 photo | **sticky stack of six tinted company cards, left sticky column** |
| 4 | ink comparison table in crosshair frame | white cards over blurred parallax | wave ink band, 5-step horizontal timeline | dark band partner rows, sticky chapter card | **full-bleed HQ photo band, parallax, white caption pill** |
| 5 | room-system trio cards | published fee list | price table on stone panel | full-bleed parallax strip + counter chip | **stone `#BEC8CE` band: photo + bracket principles** |
| 6 | parallax band | slate people band | story mosaic | framed family portrait, vertical word | **white r30 IR panel: photo + light notice list** |
| 7 | ink listening room | client story cards | parallax interlude | meeting panel on cover | **ink band: owners text + 2-col stage list + portrait photo** |
| 8 | service prices | FAQ close | tutors list | footer | **close: team photo + visit details** |
Why not alike: no price table, comparison table, people grid, icon row, step grid, FAQ or story mosaic on the home page. Oto's hero bleeds to the left with the H1 crossing the photo; Ishizue's photo bleeds right, the H1 never touches it, a sliver photo sits at the far left and a dated line runs under it. Kaiten's 5-step horizontal band and Hoshi's dark ruled rows are avoided (our milestones are the stacked tinted cards; the IR list is a light r30 panel). The parallax band (all four have one) sits at position 4 here, carries no text block and no counter, only a caption pill. Signature shapes (bracket highlights, card stack with tints and round arrows, curve-ended line) appear in none of the four.

## 5. Inner pages (10 + 404, no sidebar)

Each page: small-T1 head (§1 continuation) → body → close line with 48 px round arrow to the next logical page. Bands follow the R2 rhythm.

1. **History** (`page-history`, row page_structure timeline-milestone; the vertical milestone list is allowed here because the row requires it): head P10 "Sixty-four years, / one decision at a time."; the curve line in the head carries nine year anchors. Body: nine milestone rows (1962, 1978, 1987, 1994, 2003, 2009, 2016, 2021, 2026), each row 12 cols: year Noto Serif 600 3.5rem cols 1–3 (`position: sticky; top: 140px` inside its row), text cols 4–8 (bracket title + 60–90 words), small tinted T2 card cols 9–12 for the six company rows (P04 1962, P05 1978, P06 1994, P07 2009, P08 2016, P09 2021); 1987 row has **P11** wide 16:9 r10 cols 4–12; 2003 and 2026 rows text only. Between 2003 and 2009 a full-bleed `sp-parallax` band **P01** (`--sp-par: 10%`), 480 px. Rows `sp-reveal--up`.
2. **Group companies** (`page-companies`): head P02 "Six companies, / one owner."; 120-word intro; full T2 stack (six cards, P04–P09, min-height 420) each followed inside the card by a facts table (Joined · Base · People · Sector; table stacks on mobile); closing paragraph on how companies keep their name and management.
3. **Leadership** (`page-leadership`): head P15 "The people who / answer for the group."; six people as rows (not a grid): name Noto Serif 600 1.75rem, role 0.875rem ls 0.12em, bracket remit phrase, 50-word bio; hairline between rows; P03 (board in session) 21:9 r10 after the third person; founders paragraph (Kenzo Ishizue, Anneke de Vries) at the end.
4. **Governance** (`page-governance`): head P03 "Owned for the / long term."; ownership paragraph (Foundation majority, employee share plan since 2003); principles in bracket style (static); stone band with three committee cards (Audit, Remuneration & Nomination, Sustainability) in tints; board composition table (role · independent · since; stacks on mobile); code of conduct and speak-up line (independent channel, reply within 5 business days); P11 parallax band 400 px (`--sp-par: 8%`).
5. **Investors** (`page-investors`): head P12 "Reports, notices / and dates."; key figures line (6 companies · 2,860 colleagues · 9 countries · founded 1962), plain text, no dashboard; notices list (same component as home); financial calendar table (date nowrap · event); reports table (document · published · format · download arrow); IR contact block (Sofia Marchetti, CFO; ir@ mailbox; reply within 2 business days). No share price.
6. **Sustainability** (`page-sustainability`): head P09 "Building on / what lasts."; three 2030 targets as tinted cards with inset 3:2 photos (P07 energy, P16 training, P04 materials reuse); text on Ishizue Renewables (40 rooftop sites, 38 MW); apprenticeship numbers (Verda trains 40 technicians a year); reporting note (statement published every March).
7. **For owners** (`page-owners`): head P13 "When you are ready / to pass it on."; criteria list (profitable ≥ 5 years, revenue €10–80 million, 50–600 employees, Northern or Western Europe, owner wants continuity); the five stages as a numbered text list with bracket titles and durations (no grid, no horizontal timeline); one large T2 card: the Lindholm story with P06; contact line to Arjun Mehta, Head of Investments.
8. **Shared services** (`page-shared-services`): head P14 "Our back office, / at fixed fees."; 100-word intro (who it is for: independent companies 20–300 people); **price table** (§6.1) full content width; "What is not included" paragraph; how to start (first call free, 30-day notice, no minimum term beyond 3 months); contact Tomasz Wrona.
9. **News** (`home.html` index, `archive.html`, `single.html`): head P11 "Notices and / stories."; category tags in brackets; stories (4 posts) as 2-column cards (3:2 r10 photo, card ground = company tint, padding 24); notices (5 posts) as the light list below. Single: bracket category above the title (Noto Serif 3rem), date, featured image r10 bleeding right (small T1), text column 680 px.
10. **Contact** (`page-contact`): head P01 "Maaskade 41, / Rotterdam."; tinted address card with P02 inset 3:2 (R1 card layout): address, reception hours, phone, contact@ / ir@ / press@ emails, visits by appointment Tue and Thu; directions paragraph (tram 23 and 25, Wilhelminaplein; parking at Kop van Zuid); no form required.
11. **404 / search**: small head without photo, curve line, round arrow home.
Inner-page `sp-*`: only sp-reveal--up (+ stagger) and sp-parallax (heads and bands). Tables, price list, legal text: no reveal.

## 6. Fixed numbers (identical on every page and in all five languages)

### 6.1 Shared services price list (EUR, ex VAT 21%, 6 items)
| Service | What is included | Fee |
|---|---|---|
| Payroll and HR administration | payslips, filings, leave records, one named contact | €38 per employee / month |
| Bookkeeping and monthly close | ledger, VAT returns, monthly report by day 8 | from €1,450 / month |
| Treasury and insurance review | cash, banking, cover and renewal plan | €4,200 one-off |
| Compliance and ethics training | annual online course + live session, per seat | €240 per seat / year |
| Sustainability reporting support | data collection, statement draft, auditor liaison | €9,800 / year |
| Owner succession review | ownership options, timetable, written summary (first meeting free) | €3,500 one-off |
- Desktop ≥ 782: table spans the full content width (`width: 100%`, 1380 max), columns 28% / auto / 22%; Fee column `white-space: nowrap; text-align: right; font-variant-numeric: tabular-nums`, never truncated (header rule 2 px `#BEC8CE`, rows zebra `#EDF0F1`, padding 18/20). Home shows only "from €38 per employee per month" (block 7). Mobile < 782: each row becomes a stacked block (service bold, included below, fee on its own line right-aligned); same for every other table on the site.

### 6.2 People (8 named)
| Name | Role |
|---|---|
| Grace Abernethy | Chair of the Board (independent) |
| Daniel Okoro | Group CEO |
| Sofia Marchetti | CFO (also IR contact) |
| Arjun Mehta | Head of Investments |
| Elin Halvorsen | General Counsel and Company Secretary |
| Tomasz Wrona | Head of Shared Services |
| Kenzo Ishizue | Co-founder, 1962 (history only) |
| Anneke de Vries | Co-founder, 1962 (history only) |

### 6.3 Group companies and milestones
| # | Year | Company | Base | People | Sector | Tint | Photo |
|---|---|---|---|---|---|---|---|
| 1 | 1962 | Ishizue Materials | Rotterdam, NL | 640 | stone, aggregates, recycled building materials | `#E3DFD3` | P04 |
| 2 | 1978 | Northquay Logistics | Antwerp, BE | 920 | warehousing and regional freight | `#D5DEE5` | P05 |
| 3 | 1994 | Lindholm Precision | Gothenburg, SE | 310 | machined components | `#E2D6D7` | P06 |
| 4 | 2009 | Verda Facilities | Utrecht, NL | 552 | building services and maintenance | `#D6E0D5` | P07 |
| 5 | 2016 | Calder Food Partners | Hamburg, DE | 260 | food ingredient distribution | `#D3E1E0` | P08 |
| 6 | 2021 | Ishizue Renewables | Aarhus, DK | 120 | rooftop solar and storage for industrial sites | `#C9D1D5` | P09 |
Holding office Maaskade 41: 58 people. **Total 2,860 colleagues**, **9 countries** (NL, BE, DE, DK, SE, PL, FR, ES, IE), **6 companies**.
Other milestones: 1987 head office moves to Maaskade 41; 2003 Ishizue Holdings B.V. formed, Ishizue Foundation majority owner, employee share plan; 2026 interim report H1 published 28 Aug 2026.

### 6.4 Stories (4 posts, category Stories)
1. "Two trucks and a depot: Northquay, 1978 to today" — P05.
2. "Keeping the name on the door: Lindholm's succession" — P06.
3. "Apprentices first: how Verda trains 40 technicians a year" — P16.
4. "Forty rooftops: Ishizue Renewables at five" (40 sites, 38 MW) — P09.

### 6.5 Notices (5 posts, category Notices) and calendar
- 28 Aug 2026 (Report) Interim report H1 2026 published
- 1 Jul 2026 (Notice) Ishizue Renewables completes its 40th rooftop site
- 21 May 2026 (Meeting) Annual general meeting: all resolutions adopted
- 27 Mar 2026 (Report) Annual report 2025 and sustainability statement published
- 15 Jan 2026 (Notice) Revised corporate governance code adopted
- Calendar: 12 Nov 2026 Q3 trading update · 26 Mar 2027 Annual report 2026 · 20 May 2027 Annual general meeting.

### 6.6 Contact, hours, process
- Ishizue Holdings B.V., Maaskade 41, 3071 NE Rotterdam, Netherlands · +31 10 555 0141 · contact@ishizue-holdings.example · ir@ishizue-holdings.example · press@ishizue-holdings.example (local address formats per language as in brand.md, numbers unchanged).
- Reception Mon–Fri **08:30–17:30** CET; visits by appointment Tue and Thu; IR and press mailboxes reply within **2 business days**; speak-up channel replies within **5 business days**.
- Owner process: First conversation (free, confidential) → Business review (about 6 weeks) → Offer and terms (one written offer) → Signing and closing (typically 10–14 weeks from the first conversation) → First 100 days (name, management and sites kept).

## 7. Scroll motion (sp-scroll, three effects)

| Effect | sp class | Where | Reference (site, trigger, time, easing) | Values |
|---|---|---|---|---|
| Parallax (required) | `sp-parallax` | **Home hero P01** (`div.ih-hero__photo`, img direct child) `--sp-par: 8%` (≥ 782) / **5%** (< 782); **home `front-quay` P11** `--sp-par: 12%` / **8%** mobile (the strongest one); inner heads 6%; History P01 band 10%; Governance P11 band 8% | R1 hero: photo held in a 600vh sticky stage and moved by rAF scroll scrub (linear, smoothed); R2: GSAP ScrollTrigger `scrub: 1`, start `top bottom`, end `bottom top`, linear `tok(g)` | sp-scroll v2 CSS `animation-timeline: view()`, linear, layer scale 1.18; JS fallback IO + translate3d. Foreground text and pills are never inside the moving layer. Mobile keeps it at the smaller speed. |
| Reveal up + stagger | `sp-stagger` > `sp-reveal sp-reveal--up` | T2 cards (6), IR notice rows, text groups of blocks 2, 5, 7, 8 and their photos (not the hero, not tables) | R1 cards enter from below while stacking, IO threshold 0; R1 easing `cubic-bezier(.23,1,.32,1)`; R2 fromTo power3.out `tok(g)` | `--sp-dist: 24px`, `--sp-dur: .8s`, `--sp-ease: cubic-bezier(.23,1,.32,1)` (= R1), stagger 0.12 s steps. Cards add the R1 tilt (below). |
| Marquee | `sp-marquee` | home `front-ethos` four bracket rows | R1 `data-marquee` rows, CSS keyframes, linear, infinite `tok(g)` | 30 s linear (rows 1, 3), 46 s (rows 2, 4 via theme CSS `animation-duration`); inner group duplicated with `aria-hidden="true"`; children of the marquee get no reveal. |

- **Card tilt (R1 matrix .982/.015 ≈ −0.9°)**, theme CSS only, class names and JS untouched:
  `@media (prefers-reduced-motion: no-preference){ html.sp-js:not(.sp-no-motion) .ih-card.sp-reveal:not(.sp-in){ rotate:-0.9deg; } html.sp-js:not(.sp-no-motion) .ih-card.sp-reveal{ transition: opacity var(--sp-dur) var(--sp-ease) var(--sp-delay,0s), transform var(--sp-dur) var(--sp-ease) var(--sp-delay,0s), rotate 1.1s var(--sp-ease) var(--sp-delay,0s); } }` plus `html.sp-no-motion .ih-card, .editor-styles-wrapper .ih-card{ rotate:none !important; }`. Below 782 no tilt. Hover on the arrow keeps `transition-delay: 0s`.
- Hero has no reveal. Max three effect types per page. Static checks use `?sp-static`; `check-parallax.mjs` must show ≥ 6 px layer shift on desktop and mobile for the hero and `front-quay`, 0 with reduced motion, ≥ 3 reveals hidden before entry (the cards satisfy this), nothing transparent at the bottom.

## 8. Photos (16, Grok, one at a time, read each one)

STYLE (exact string on every prompt):
`photorealistic documentary photograph, 35mm lens, high-key soft overcast daylight, bright clean modern Northern European setting, muted palette of blue-grey, pale stone, off-white, glass and charcoal, diverse adults in candid working moments, natural skin texture, calm and unposed, no text, no logos, no brand marks, no readable signage, no Japanese elements`

No cut-outs (0 transparent PNG). Each ≤ 300 KB, ≤ 2000 px, readme line per image (AI-generated, CC0). Regenerate any image with letters, logos, broken faces or hands.

| ID | Subject / composition | Ratio | Used on (once per page) |
|---|---|---|---|
| **P01** ★ | modern low-rise headquarters of pale stone and glass on a harbour quay, two people walking towards the entrance at the left third, pale sky | 3:2 | Home hero; History band; Contact head |
| **P02** ★ | bright double-height atrium with reception desk and people crossing, pale oak and stone | 3:2 | Home hero sliver; Group companies head; Contact address card |
| **P03** ★ | board meeting: seven people around a pale oak table by tall windows, papers and laptops, diverse ages | 3:2 | Home governance; Governance head; Leadership 21:9 |
| **P04** ★ | stone and aggregates yard, stacked pale slabs, worker in a hi-vis vest checking a tablet | 3:2 | Home card 1; History 1962; Sustainability target 3 |
| **P05** ★ | tall warehouse aisle with racking, forklift driver talking with a colleague | 3:2 | Home card 2; History 1978; Story 1; Companies card 2 |
| **P06** ★ | technician measuring a machined metal part with calipers beside a CNC machine | 3:2 | Home card 3; History 1994; Owners card; Story 2; Companies card 3 |
| **P07** ★ | technician servicing a ventilation unit in a bright plant room, colleague holding a tablet | 3:2 | Home card 4; History 2009; Sustainability target 1; Companies card 4 |
| **P08** ★ | quality lab: two people in white coats sampling grains and seeds in glass jars | 3:2 | Home card 5; History 2016; Companies card 5 |
| **P09** ★ | rows of solar panels on a flat warehouse roof, two engineers walking, overcast sky | 3:2 | Home card 6; History 2021; Sustainability head; Story 4; Companies card 6 |
| P10 | two colleagues in an archive room looking at old photographs and ledgers on a table (no readable text) | 3:2 | History head |
| **P11** ★ | wide panorama of the harbour quay with the headquarters, trees and a tram, morning | 21:9 | Home quay band; History 1987; Governance band; News head |
| **P12** ★ | CFO presenting to a small seated audience, screen blank and out of focus | 4:3 | Home IR panel; Investors head |
| **P13** ★ | older workshop owner and a younger person walking through a bright workshop, talking | 4:5 | Home owners; For owners head |
| P14 | bright open-plan office, small team reviewing documents at shared desks | 3:2 | Shared services head |
| **P15** ★ | six executives standing informally in the atrium, talking, diverse | 3:2 | Home close; Leadership head |
| P16 | instructor with two apprentices at a workbench wiring a control panel | 3:2 | Sustainability target 2; Story 3 |
★ = used on the home page (13 positions). Per-page check: Home P01 P02 P04–P09 P11 P03 P12 P13 P15; History P10 P04 P05 P11 P06 P01 P07 P08 P09; Companies P02 P04–P09; Leadership P15 P03; Governance P03 P11; Investors P12; Sustainability P09 P07 P16 P04; Owners P13 P06; Shared services P14; News P11 + story images P05 P06 P16 P09; Contact P01 P02. No page repeats an image.

## 9. Responsive rules (hard)
- 390 px: no horizontal overflow; first screen has no vertical text and no absolutely positioned label over text (pill and timeline in flow); H1 2.5rem; gutters 20 px.
- ≥ 782 px (800 and 1280 tested): price table and all tables full content width, Fee / date columns `nowrap`, right-aligned, never cut or overflowing.
- < 782 px: every table stacks into blocks (`display:block` rows with labels), T2 cards unstuck and untilted, sticky year columns on History become normal flow.
- Sticky only with `overflow: clip` parents. Round buttons keep 44 px minimum on touch.

## 10. Home acceptance checklist (stage 1 review compares against this)
1. First screen at 1440×900: centred two-line wordmark, "Menu" + 55 px ink circle; H1 Noto Serif 5rem on the ground at left; P01 r10 left corners touching the right window edge; P02 sliver at x 0–30; white Topics pill straddling the photo bottom; curve-ended 1 px line with seven proportional year dots (2026 hollow accent). No table/form/search/centred heading. `check-first-screen.py` saturated ≤ 15% (target ≤ 5%).
2. Block order equals §4.2; bands follow ground → photo → stone → white panel → ink → ground.
3. T2: six flat tinted cards 993 px wide, r10, 3:2 photo inset 48 px, bracket heading, 14 px name with 2 px underline, 48 px round arrow, sticky stack with peeking edges, left sticky column with Company links, index arc ≥ 1100.
4. T3: four marquee rows of bracket phrases with tinted highlights ≥ 1.75rem; bracket style also on card headings and governance principles.
5. Parallax: hero P01 and front-quay P11 move ≥ 6 px against their frames on desktop and mobile (`check-parallax.mjs`), 0 with reduced motion; the caption pill does not move.
6. Reveals: cards tilt −0.9° → 0 and rise 24 px with `cubic-bezier(.23,1,.32,1)` .8 s; nothing left transparent at the end; hero has no reveal.
7. Colours per §2 (ground `#FAFBFB`, ink `#0B0D0E`, band `#BEC8CE`, accent `#7D8C94` small only, six low-chroma tints); no saturated field.
8. ≥ 8 photos (13 planned), all from the STYLE string, no text/logos, none repeated.
9. ≥ 250 English words in ≥ 3 paragraphs; numbers match §6 (6 companies, 2,860 colleagues, 9 countries, 1962, Maaskade 41, €38, 28 Aug 2026, 12 Nov 2026).
10. Fonts from theme.json fontFace; editor and front end show the same faces (`check-editor-fonts.mjs` en + zh-TW pass); `auto-gates.mjs … 1 1` pass.

## 11. Similarity table (target 80% to R1, motion and bands from R2)
| Dimension | Reference value (`tok`) | Ishizue value |
|---|---|---|
| Ground | R1 `#FFFFFF` ≈ 80% (a) | `#FAFBFB` ≈ 60% + white panels 4% |
| Ink | R1 `#000000` ≈ 10% (a) | `#0B0D0E` ≈ 14% incl. ink band/footer |
| Band colour | R2 `#BEC8CE` (a) | `#BEC8CE` exact |
| Photo share | R1 ≈ 10% (a) | ≈ 12% |
| Accent mechanic | R1 one flat colour per business card (a) | one flat low-chroma tint per company (hue kept, chroma lowered — reason §2) |
| First-screen saturated | R1 1.0% (a) | ≤ 5% target |
| Hero photo | R1 915×700 at x 525, right edge bleeds, r10 (e) | 915×660 at x 525, right edge bleeds, r10 left |
| Hero sliver | R1 30 px neighbour photo at left, r10 (e) | 30 px P02 at left, r10 right corners |
| Tagline | R1 ~80 px bold, x ≈ 95, 3 lines (b) | 5rem Noto Serif 600, x 95, 4 lines |
| Topics pill | R1 white r10 pill on photo bottom-right (e) | same, "Notices" + latest IR notice |
| Curve line | R1 1 px black, curled ends (d) | 1 px ink, curled ends r10, + year dots |
| Header | R1 centred 2-line wordmark, Menu + 55 px black circle (d) | same geometry, own wordmark, 55 px ink circle |
| Cards | R1 993×370, r10, gap 32, first mt 120 (c,d) | 993×370, r10, gap 32, first mt 120 |
| Card photo | R1 412×275 3:2 inset 48, r10 (e) | 412×275 3:2 inset 48, r10 |
| Card tilt | R1 ≈ −0.9° → 0 (e,g) | −0.9° → 0, 1.1 s R1 easing |
| Card name | R1 14/21 ls 0.12em, underline (b) | 0.875rem/1.5 ls 0.12em, 2 px underline |
| Round arrows | R1 48 px black ">" (f) | 48 px ink chevron (22 px in lists) |
| Index | R1 rotated 01–05 arc (f) | rotated 01–06 arc ≥ 1100 |
| Bracket highlight | R1 `( )` + colour fill, ~30 px rows (f) | `( )` + tint fill, 30 px rows, r8 |
| Section label / H2 | R1 34/51 ls .02em; 40/60 (b) | 2.125rem/1.5 ls .02em; 2.5rem/1.5 |
| Body | R1 16 px 500; R2 16/28 (b) | 1rem/1.75 400 (CJK 500, 1.85) |
| Panel radius / padding | R1 topics panel r30, pt 66 pb 100 (c,d) | IR panel r30, 66/100 |
| Gutters | R1 30 px (c) | 30 px desktop, 20 mobile |
| Band padding | R2 97.6 px (c) | 98 px |
| Shadow | none (d) | none |
| Reveal easing / time | R1 cubic-bezier(.23,1,.32,1) .25 s hover; IO threshold 0 (g) | same curve; reveal .8 s, hover .25 s |
| Parallax | R2 scrub 1 linear, top bottom → bottom top; R1 hero scrub (g) | sp-parallax view() linear, 8% hero / 12% band |
| Marquee | R1 CSS keyframes linear (g) | sp-marquee 30 s / 46 s linear |
Not borrowed: R1 giant-wordmark zoom (no sp equivalent), R1 bracket logo, R2 3D cut-outs, R2 vertical text, R2 saturated first screen.
