# Niuke Scan: design spec (stage 1, binding for implementation)

Slug `niuke-scan`, landing-page theme (`type: landing`, category business-services) for a fictional handheld goods-in scanner + app built for small warehouse docks. Plan row b14-5: single-column-longform, full-bleed photo hero with info bar, split nav, real documentary photography, sans type (Inter Tight / Albert Sans, CJK Noto Sans TC / JP). Five languages: en, zh-TW, ja, fr, de.

Main reference: **207-inc.com** (https://207-inc.com/, S5-Style category IT / Computers / Technology, a Japanese logistics-tech company). Measurements in `reference-tokens.md`, screenshots in `brand/ref/`. We borrow its structure, signature techniques, key-visual concept, colour relationships and measured tokens. We do **not** copy its illustration, photos, copy or logo. Row note's SmartHR mention is a content model only (product in a real workplace, the reason to switch, one start CTA); no SmartHR visuals are used.

Landing track: the home page is one long conversion page with an anchor menu and **one repeated CTA** ("Start a dock trial" → `/waitlist/`). Extra pages: waitlist (newsletter = early-access signup), privacy, terms, thanks.

---

## 0. Fixed brand facts (identical on every page and in all five languages)

| Fact | Value |
|---|---|
| Company | Niuke Scan B.V. (fictional) |
| Founded | **2021**, Rotterdam, Netherlands |
| Address | Dock Lane 12, 3089 Rotterdam, Netherlands (fictional) |
| Email | hello@niukescan.example · support@niukescan.example |
| Support hours | **Mon–Fri 06:00–18:00 CET** (dock hours); closed weekends and Dutch public holidays |
| Product | **N1 scanner** + **Count Sheet** app (phone, tablet, browser) |
| Trial | **30-day dock trial**; scanner ships within **5 working days**; free return postage |
| Setup | one afternoon, about **2 hours** |
| Currency | **EUR**, prices excl. VAT, in every language (no conversions) |

### People (7 named, all fictional)
| Name | Role | Appears on |
|---|---|---|
| Ilse Verhoeven | co-founder, CEO; spent nine years as a dock supervisor at a parts distributor | Home close quote, About |
| Tomás Reyes | co-founder, hardware lead (N1 scanner) | About, The scanner |
| Amara Nwosu | software lead (Count Sheet app) | About, How it works |
| Lukas Brandt | onboarding & support lead | About, Setup, Contact |
| Hana Kowalski | dock lead, Velo Parts Depot (bicycle parts distributor, Ghent) | Story 01 (home + Stories) |
| Daniel Mensah | owner, Mensah Leaf & Spice (tea and spice importer, Hamburg) | Story 02 |
| Marie Laurent | operations manager, Lumen Atelier (lighting wholesaler, Lyon) | Story 03 |

### Stories (3, fixed facts only; no outcome percentages, no "guaranteed" claims)
| # | Customer | Doors | Deliveries / week | Plan |
|---|---|---|---|---|
| 01 | Velo Parts Depot, Ghent — Hana Kowalski | 2 | about 35 | Shift |
| 02 | Mensah Leaf & Spice, Hamburg — Daniel Mensah | 1 | about 12 | Single Door |
| 03 | Lumen Atelier, Lyon — Marie Laurent | 3 | about 60 | Shift |
Quotes are qualitative ("We stopped arguing with suppliers about what arrived."), never numeric results.

### Price list (6 items, EUR excl. VAT; identical on Home, Pricing, Setup, FAQ, all languages)
| Item | Includes | Price |
|---|---|---|
| Single Door | 1 dock door, 1 N1 scanner, 3 users, unlimited deliveries | **€39 / month** |
| Shift | up to 3 doors, 3 N1 scanners, 10 users, supplier claim reports | **€89 / month** |
| Yard | up to 8 doors, 8 N1 scanners, unlimited users, CSV + webhook export, priority support line | **€169 / month** |
| Extra scanner | one more N1 on any plan | **€12 / month** |
| Spare battery | swappable 12-hour pack | **€45 one-off** |
| Charging cradle | 4 bays, wall or bench mount | **€95 one-off** |
No setup fee. Cancel monthly. The trial is the Single Door or Shift plan free for 30 days.

### N1 scanner specs (spec band)
Weight **280 g** · battery **12-hour shift**, **2.5 h** to full · reading range **5 cm – 1.2 m** · reads 1D / 2D barcodes, QR and GS1 carton labels · offline queue **2,000 scans** · drop **1.5 m** onto concrete · sealing **IP54** · Wi-Fi 6 + Bluetooth 5.3 · photo note camera for damages.

### How a delivery is counted (process, 4 parts — written as paragraphs/rows, never a step grid)
1. Forward the purchase order (email or CSV) → it becomes the expected list in Count Sheet.
2. Scan every carton at the door → the count fills in, carton by carton.
3. Short, extra or damaged cartons are flagged with a photo before the driver leaves.
4. The receiving report goes to the supplier and to your stock list at the end of the shift.

### The shift (home stage + How it works): **06:00 Truck in · 11:00 The short delivery · 16:00 Close the day**.

---

## 1. Signature techniques (three, obviously visible; all from 207-inc.com)

### T1. Pinned full-bleed photo stage with dotted rail (207-inc.com "Vision" ×3)
- **Reference** (https://207-inc.com/, `ref/scroll-vision-1.png`, `scroll-vision-3.png`): after the KV, the page pins a 100vh full-bleed photo dimmed ~55% black. Upper-left a white label ("short-term vision", 21px/700, ls .12em) at x=188 y≈103 with the time span below it ("3-5 years"); a **1px dotted white vertical rail** at x=366 runs from y≈103 to the bottom with a **10px hollow circle node** at label height. The text column starts at x≈404 (just right of the rail) and sits in the lower half: H3 56px/700 ls .08em white, 2 lines, then a 16px paragraph. A white 2px progress hairline grows along the bottom-left. Three stops crossfade (0.6s power2.inOut, bg scale 1.15→1).
- **Niuke, home block B3 `#shift` "A shift in three stops"**: three Cover blocks inside one wrapper, each `min-height:100vh; position:sticky; top:0` so each stop slides up over the previous one (CSS-only approximation of the pin; no JS pin, no scroll listener). Background photos 03 / 04 / 05; overlay `rgba(0,0,0,.55)` (token a: photo veil ~55%).
  - Label column: left 13% (x≈188 at 1440 → `padding-left: 13vw`), label "Truck in" 1.3125rem/700 ls .06em (CJK .12em) white; below it, 40px gap, the time "06:00" same style. Node: 10px hollow circle, 1px white, at the label baseline on the rail.
  - Rail: absolute `left: 25.4vw` (x=366/1440), 1px **dotted** `rgba(255,255,255,.9)`, from top 103px to bottom 0. Pseudo-element on the cover's inner group (not on an `.sp-reveal` element).
  - Text column: from `left: 28vw` (x≈404) to right 13vw, bottom-aligned with `padding-bottom: 140px`: H3 3.5rem/700 lh 1.4 ls .03em (CJK 2.625rem ls .08em) white, max 2 lines; paragraph 1rem lh 2.0 white, max 3 lines (~45 words).
  - Progress hairline: 2px white bar on the bottom edge, from x=0, width 33% / 66% / 100% on stops 1/2/3 (static per stop — reads as the reference's growing bar without JS).
  - Motion: text group `sp-stagger`, H3 lines and paragraph `sp-reveal sp-reveal--up` (reference SplitType per-char → per-line here). Background static (no parallax in the sticky stack).
- **Must not be diluted**: each stop is the full viewport (100vh, edge to edge, no margins, no radius); the veil stays dark (≥ .5); the rail is dotted and visible full height with a hollow node; text sits to the right of the rail in the lower half; three stops, not two.
- Mobile (≤781): `min-height:100svh`, rail `left:20px`, label + time stacked at top-left `padding-left:40px` (one line: "06:00 · Truck in"), H3 2rem, paragraph 0.9375rem, text from `left:40px` to `right:20px`. Sticky stays.

### T2. Oversized tracked bold headline on pale ground + tiny light English line (207-inc.com KV headline)
- **Reference**: `ref/first-screen.png`: "Freedom of action / accelerated" 72px/700, lh 1.4, ls .12em, #222, upper-left at x=80 y≈230, two lines; under it a 13px/300 English line "Accelerating freedom of action." at 40px gap. Section heads repeat the pattern: tiny bold English tag ("BUSINESS", 16px/900, purple) above a 40px/700 ls .16em H2.
- **Niuke**: hero H1 (B1), closing CTA (B9), and every inner page head.
  - Hero/closing H1: Inter Tight 700, **4.5rem** (72px), lh 1.2 (Latin; CJK lh 1.4), ls **.05em** Latin / **.12em** CJK (CJK = token; Latin reduced because 0.12em on Latin bold breaks word shapes — see similarity table), colour `#222222`, forced 2 lines (`<br>` in en; fr/de may wrap to 3 at ≤1100px). Kicker below: Albert Sans 300 0.8125rem (13px) ls .04em `#222222`, 40px gap.
  - Section heads (B2, B4, B6, B7, B8): tag `p.nk-tag` Inter Tight 800 (token tag 16px/900; we load 700 and 800 only) 0.875rem ls .08em uppercase-as-written (we type "WHY", "SCANNER"; no `text-transform`), colour label purple `#7B5EA7`; 24px gap; H2 Inter Tight 700 **2.5rem** (40px) lh 1.4 ls .04em Latin / .16em CJK, `#222222`.
  - Inner page heads: tag + H1 `clamp(3rem, 5.4vw, 4.25rem)` 700, 2 lines, ls .05em / .12em CJK, + 13px light English kicker (in all languages the kicker stays English, as on the reference).
- **Must not be diluted**: left-aligned, never centred; ≥4.25rem on desktop for hero, closing and inner page H1; letter-spacing visibly open (≥ .05em Latin); the kicker is genuinely small (13px, weight 300), not a subtitle paragraph.

### T3. Ellipse photo bleeding off the page edge + navy pill with trailing dot (207-inc.com "Business")
- **Reference** `ref/detail-business.png`: photo ≈ 765×495 at 1440 (53% width) cropped by a huge ellipse whose left edge is cut by the viewport (flat left side, convex right side); text column at x≈846–1320: product name between **two dotted 1px hairlines** with a right-aligned bold sub-line, a 16px paragraph lh 2.0, then a navy `#24274A` pill (radius 20, height 40, 281px wide) right-aligned with white text and a trailing white dot ●. Next product mirrors: ellipse bleeding off the right edge.
- **Niuke, home block B4 `#scanner`** — three rows, alternating: N1 scanner (photo 06, bleed left) → Count Sheet app (photo 07, bleed right) → Supplier report (photo 08, bleed left). Row gap 96px.
  - Geometry (1440): image box width **53vw**, aspect 765:495 (≈1.55:1); `clip-path: ellipse(100% 100% at 0% 50%)` for bleed-left (the ellipse centre on the viewport edge so only the convex right half shows; mirror `at 100% 50%` for bleed-right). Apply the clip-path to the `img` inside the figure; the figure carries `sp-reveal sp-reveal--mask` (rule: the observed element never has its own clip-path).
  - Text column: 33vw wide starting at 58.75vw (x≈846) for bleed-left rows; mirrored for bleed-right rows (starting at 8.3vw = x≈120). Product name Inter Tight 700 1.75rem; above and below it 1px dotted `#222222` hairlines 16px apart from the text; sub-line right-aligned 0.875rem 700 ls .08em. Paragraph Albert Sans 1rem lh 2.0 ls .02em (CJK .12em), 60–80 words.
  - Pill: `#24274A`, white Albert Sans 500 0.875rem ls .06em, height 40px, radius 20px, padding 0 28px 0 40px, min-width 280px, right-aligned, trailing 6px white dot 24px from the right edge. Links: "How the N1 is built" → /scanner/, "See a shift in Count Sheet" → /how-it-works/, "Read the stories" → /stories/.
- **Must not be diluted**: the ellipse must visibly touch and be cut by the viewport edge (not a floating oval, not a rounded rectangle), ≥ 50% of viewport width on desktop; alternate sides; dotted hairlines around the name; pill navy with dot.
- Mobile (≤781): image full width 100vw bleeding both sides, `clip-path: ellipse(85% 100% at 50% 0%)` (flat top, convex bottom), aspect 4:3; text below; pill full width.

### T4 (supporting, required band). Full-bleed flat blue spec band with dotted hairline rows (207-inc.com "Company")
- **Reference** `ref/detail-company.png`: full-bleed `#307ADD` band; left x=120 tag "COMPANY" white 16px/900 + H2 "Company overview" white 40px; right x=480–1320 a table of rows with **1px dotted white hairlines** (top and between rows), label column ≈230px, value white 16px ls .1em, row height ≈75px; very low-contrast chevron/parallelogram shapes in slightly lighter/darker blues across the band.
- **Niuke, home block B5 `#spec`** "The N1, in plain numbers": same geometry with the N1 spec rows (§0). Watermark: 3 large parallelograms in `#3A86E6` and `#2C72D6` (±4% of base), drawn as `linear-gradient(135deg, …)` layers on the band background, decorative only.
- Must not be diluted: band is truly full-bleed `#307ADD` (not a tint, not a card), text white, hairlines dotted.

### Continuation to inner pages (≥4 required; listed per page)
| Page | T1 pinned dotted-rail stage | T2 tracked headline | T3 ellipse + pill | T4 blue spec band |
|---|---|---|---|---|
| How it works | full 3-stop stage (photos 03/04/05) after the head | page head | photo 16 bleed-left with the 4-part process text, pill → Pricing | — |
| The scanner | one stop (photo 13, "06:00 · Off the cradle") | page head | photos 06 (bleed-left) + 07 (bleed-right) | full spec band (all N1 rows + box contents) |
| Pricing | — | page head | photo 15 bleed-right beside the trial terms, pill = CTA | "In every plan" band (5 rows: no setup fee, monthly cancel, 5-day shipping, 2-hour setup, support hours) |
| Stories | each story opens with one 100vh stop (photos 10/11/12, label "Story 01 · Ghent") | page head | — | facts band per story (doors, deliveries/week, plan) — one band at the end summarising all three |
| About | one stop (photo 14, "2021 · Rotterdam") | page head | team photo 17 bleed-left, pill → Contact | company band (name, founded, address, team, support hours) — direct analogue of the company-overview band |
| Setup & help | — | page head | photo 15 bleed-left beside "what's in the box" | "Before your first shift" band (5 rows) |
| Contact | — | page head | photo 17 bleed-right, pill = mailto | company band (address, email, hours) |
| Waitlist | — | page head | photo 01 crop bleed-left beside the form intro | — |
| Privacy / Terms / Thanks | — | page head (Thanks: H1 + pill back home) | — | — |

---

## 2. Key visual concept

### (1) Reference first screen — concept, story, signature motion (207-inc.com)
- **Picture**: on a pale `#F8F8F8` ground, an isometric illustrated *city of logistics* fills the right ~60%: warehouses, stairs and road ribbons climbing diagonally, trucks, a ship, drones, delivery robots, location pins, a tablet with charts. Upper-left, a giant tracked two-line headline "Freedom of action, accelerated" and a tiny English line "Accelerating freedom of action." Split header: logo left, five light links right.
- **Story**: technology makes goods move freely — the whole supply chain drawn as one connected, legible machine where every parcel has a place.
- **Signature motion**: drones float ±10px (3.6s ease-in-out, infinite); robots walk back and forth (6s linear); a "Scroll Down" pill top-right and a "Page Top" vertical line on the right edge; scrolling leads straight into the pinned, dimmed full-bleed photo stage (T1).

### (2) Our translation — same composition, same motion idea, same image type for our industry
IMAGERY = **photo** (stage-a): the reference's other image positions are photos and the row is documentary photography; the hero concept is translated into one documentary photograph, not drawn.
- **Scene**: the goods-in dock as one legible machine. A high-key documentary photograph (photo **01** `hero-door`) of a hand holding the slate-grey N1 scanner over an open carton at a loading door; the dock leveller and a floor line run diagonally from bottom-left toward the carton (= the reference's stair/road ribbon); a pallet jack with stacked plain cartons in the mid-ground right (= the trucks/robots); the left ~40% of the frame is a pale off-white dock wall (= the pale ground) where the headline sits.
- **Story**: "Every carton counted at the door, before it is shelved" — the scan at the door is the moment the supply chain becomes legible.
- **Motion**: a small white **count chip** ("12 / 12 counted" with a mini barcode) floats ±8px, 3.6s ease-in-out infinite (= floating drone); a 2px cyan **scan-line** sweeps once across the chip's barcode (1.2s ease-out, 0.6s delay, one pass; = the reference's moving robots, reduced to one honest product gesture); the photo layer has `sp-parallax`; "Scroll" pill top-right and "Top" line at the right edge; scrolling leads into the T1 shift stage. All ambient motion off under `prefers-reduced-motion` and `?sp-static`.

### (3) KV checklist (all visible in the 1440×900 first screen)
| # | Reference element | Our counterpart | Position | Motion | Which image |
|---|---|---|---|---|---|
| 1 | Giant tracked 2-line headline + tiny English line, upper-left on pale ground | H1 "Count every carton / at the door." Inter Tight 700 4.5rem ls .05em (CJK .12em) `#222`; kicker "Goods-in scanning for small warehouse docks." 13px/300 | x=80, H1 top y≈200, on the pale wall area (+ white veil gradient) | none (hero has no reveal) | 01 `hero-door` (pale wall area) |
| 2 | Isometric logistics city filling the right 60% | Full-bleed documentary photo: N1 scanner held over an open carton at a loading door; subject at x 58–80% | full-bleed; subject right 60% | `sp-parallax`, `--sp-par: 8%` (mobile 5%) | 01 `hero-door` |
| 3 | Diagonal stairs / road ribbon leading the eye | Dock leveller edge + grey floor line running bottom-left → carton | lower half, diagonal | static (in photo; parallax moves it with the layer) | 01 `hero-door` |
| 4 | Floating drone ±10px | White count chip "12 / 12 counted" (radius 12, shadow 5px 5px 15px rgba(0,0,0,.25), cyan dot) | desktop: `left:52%; top:30%` of hero (adjust ±5% to sit just above-left of the scanner, never over the hand or a face) | CSS bob translateY ±8px, 3.6s ease-in-out infinite | — (UI over 01) |
| 5 | Walking robots / moving vehicles | Pallet jack with cartons in the mid-ground + one cyan scan-line pass over the chip's barcode | jack: mid-ground right in photo; line: inside chip | scan-line translateX 0→100% 1.2s ease-out once, delay .6s | 01 `hero-door` |
| 6 | Split header + "Scroll Down" pill + "Page Top" line | Split header (wordmark left, 6 anchors + CTA pill right); "Scroll" pill top-right under the header; 1px×64px "Top" line + 8px dot at right edge, bottom 100px | header top; pill x=1316 y≈110; Top line right 52px | pill inner dot 2s ease-in-out pulse (opacity .4↔1) | — |
Plus row requirement **info bar** (`first_screen: full-bleed-photo-info-bar`): white `#FFFFFF` bar 88px tall across the hero bottom (inside the first screen), 1px `#E4E5E8` top rule, 4 facts in light 0.875rem with 700 values: "N1 · 280 g" / "12-hour battery" / "Works offline" / "30-day dock trial", then the CTA pill right-aligned.

---

## 3. Colour (207-inc.com relationships kept; hexes = reference)

| Token | Hex | Source (reference-tokens a) | Use | Share of page |
|---|---|---|---|---|
| `base` | `#F8F8F8` | ref page ground #F8F8F8 (42%) | page ground, hero wall veil | ~55% |
| `white` | `#FFFFFF` | ref #FFFFFF | info bar, count chip, form fields | ~8% |
| `ink` | `#222222` | ref ink #222222 | headings, body, dotted hairlines | ~6% |
| `navy` | `#24274A` | ref button navy #24274A | CTA pill, header CTA, active anchor underline | ≤2% |
| `band` | `#307ADD` | ref company band #307ADD | T4 spec band only (one per page) | ~10% (below the fold only) |
| `band-light` / `band-dark` | `#3A86E6` / `#2C72D6` | ref band watermark (±4%) | band parallelograms | inside band |
| `label` | `#7B5EA7` | ref logo / section tag purple | `nk-tag` section tags only | <0.5% |
| `scan` | `#31BAFF` | ref accent cyan #31BAFF | scan-line, chip dot, focus ring | <0.5% |
| `iron` | `#3A4150` | plan-row hex blue-iron | footer ground, muted text derives from it | ~6% (footer) |
| `muted` | `#5C6170` | iron +14% lightness | captions, meta, table descriptions | — |
| `rule` | `#E4E5E8` | derived from base | solid hairlines (info bar top, header after scroll) | — |
| `veil` | `rgba(0,0,0,.55)` | ref photo veil ~55% | T1 stage overlay | — |
- No beige anywhere; lavender `#D9B3FF` (reference illustration fill) is dropped because we have no illustration.
- Contrast: ink on base 15.2:1; white on navy 14.6:1; white on band `#307ADD` 4.3:1 → band body text ≥ 1rem, labels 700; label purple on base 5.0:1.
- **First-screen saturated share**: reference ≈14% → gate `python3 scripts/check-first-screen.py <home-desktop> --max 14`; target ≤ 8% (photo graded cool/neutral, the only saturated pixels are the navy pill, chip dot and scan-line). No `band` blue in the first screen.

## 4. Type (font_direction **sans**)

- Latin headings: **Inter Tight** (OFL) 700, 800. Latin body/UI: **Albert Sans** (OFL) 300, 400, 500, 700. CJK: **Noto Sans TC** (zh-TW headings) and **Noto Sans JP** (ja) 400 / 700, sans only — no Noto Serif anywhere. zh-TW body text uses the system Traditional Chinese sans, not the bundled heading face.
- Stacks (theme.json `fontFamilies`, all loaded with `fontFace` woff2 from `assets/fonts/`, so the editor iframe and front end are identical; zh-TW / ja subset files as in Hokuto/Hada):
  - heading: `"Inter Tight", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`
  - body: `"Albert Sans", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`
  - `:lang(zh-TW)` display keeps `"Noto Sans TC"`; body is `"Albert Sans", "PingFang TC", "Noto Sans CJK TC", "Microsoft JhengHei", sans-serif` (bundled heading face stays off body text). `:lang(ja)` keeps `"Noto Sans JP"` on both stacks. Because style.css uses `:lang(`, copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it.
- Scale (theme.json presets; max **4.5rem ≥ 4.25rem**):

| Preset | Size | Use | Weight / lh / tracking (Latin · CJK) | Token source |
|---|---|---|---|---|
| `caption` | 0.8125rem (13px) | kicker, chip, Scroll/Top labels | 300 / 1.5 / .04em | caption 13px/300 ls .04em |
| `small` | 0.875rem | tags, info bar, table descriptions | 500–800 / 1.5 / .08em | product H3 14px, tag 16/900 |
| `base` | 1rem | body | 400 / 2.0 · 1.85 / .02em · .1em | body 16px lh 2.0 ls .12em |
| `lead` | 1.125rem | message paragraphs (B2) | 300 / 2.2 · 2.2 / .02em · .12em | lead 18px/300 lh 2.5 |
| `label` | 1.3125rem | stage label + time | 700 / 1.4 / .06em · .12em | vision label 21px ls .12em |
| `large` | 1.75rem | product names, FAQ question | 700 / 1.4 / .02em | timeline H3 28px |
| `x-large` | 2.5rem | section H2 | 700 / 1.4 / .04em · .16em | section H2 40px ls .16em |
| `xx-large` | 3.5rem | stage H3, price display | 700 / 1.4 / .03em · .08em | vision H3 56px ls .08em |
| `xxx-large` | 4.5rem | hero / closing / page H1 | 700 / 1.2 · 1.4 / .05em · .12em | H1 72px lh 1.4 ls .12em |
- CJK headings render at ~0.75× (`:lang(zh-TW|ja) h1 {font-size: 3.375rem}`, H2 1.875rem, stage H3 2.625rem); body lh 1.85; fr/de `hyphens:auto` on body and H2.
- Nav: Albert Sans 300 1rem ls .06em `#222` (token nav 16px/300 ls 1.92px); no uppercase transforms anywhere (token: text-transform none).

---

## 5. Home page (landing longform, one column of full-width bands, anchor menu)

### 5.1 Header (split nav)
Height 96px desktop / 64px mobile, transparent over the hero's pale wall, sticky; after the hero it gets `#F8F8F8` + 1px `#E4E5E8` bottom rule (CSS `position:sticky` only; no scroll JS). Left at x=48: wordmark "Niuke Scan" Inter Tight 800 1.375rem ls .02em, preceded by a 3×22px `#31BAFF` bar (our own mark, not the reference logo). Right: anchors **Why · A shift · Scanner · Pricing · Stories · FAQ** (gap 40px, token c) and the CTA pill "Start a dock trial" (navy, 36px tall, radius 20, trailing dot). ≤1023px: anchors collapse into one menu button (two 24px lines) opening a full-screen `#F8F8F8` overlay; CTA pill stays visible. One top menu only.

### 5.2 First screen composition (1440×900)
- Hero = Cover, `min-height:100vh` (min 760px), photo 01 as Cover background with `sp-parallax` (`--sp-par: 8%`), focal point `object-position: 70% 55%`. Over the left: `linear-gradient(90deg, rgba(248,248,248,.94) 0, rgba(248,248,248,.86) 30%, rgba(248,248,248,0) 56%)` as a non-moving overlay (front text never in the moving layer).
- Text group at x=80 (`padding-left: 5.55vw`), H1 top ≈ 200px: tag none; H1 2 lines (T2), kicker 40px below. Nothing else in the text group — no paragraph, no button (the CTA sits in the info bar).
- Count chip (KV #4), Scroll pill (x≈1316, y≈110: 28px tall, 1px `#222` outline radius 14, inner 4px dot, label "Scroll" 13px; the photo is light here so ink outline), Top line (right 52px, bottom 100px, fixed on ≥1024 only).
- Info bar bottom (88px, white, 4 facts + CTA pill). The four facts are not a table; use a row of 4 paragraphs separated by 1px `#E4E5E8` vertical rules.
- Forbidden in the first screen: tables, forms, search, centred giant type, any `#307ADD`.
- **Mobile 390**: no overlay text on the photo. Stack: header 64 → text block on `#F8F8F8` (padding 32px 20px; H1 2.375rem / CJK 2rem, 3 lines max; kicker) → photo 01 at 4:5 full width (parallax kept, `--sp-par: 5%`) → info bar 2×2 facts + full-width CTA. Count chip moves **into the flow** under the kicker as a static inline chip (no absolute positioning, no float animation ≤781px); Scroll pill and Top line hidden. No vertical text anywhere.

### 5.3 Block order
Section padding 136px top / 184px bottom (token c, business) unless noted; mobile 80 / 96. Content width 1200, text measure 680px.

| # | Block (anchor) | Purpose | Layout / photos | Copy (en) |
|---|---|---|---|---|
| B0 | Header | split nav, CTA | §5.1 | — |
| B1 | Hero KV `#top` | key visual + facts | §5.2, photo **01** | ~25 words |
| B2 | Message `#why` | the missed count it stops | Tag "WHY" + H2 "A carton missed at the door / is a week of phone calls." left at x=120; below, two-column 12-grid: left 7 cols three lead paragraphs (18px/300 lh 2.2, ~170 words: the driver waiting, the paper note, the claim a week later); right 5 cols photo **02** at 4:5, radius 0, top aligned with the first paragraph. Text `sp-reveal--up` per paragraph inside `sp-stagger`. | ~190 words |
| B3 | Shift stage `#shift` | how a shift uses it | **T1**, three 100vh stops: 06:00 Truck in (photo **03**) · 11:00 The short delivery (photo **04**) · 16:00 Close the day (photo **05**). Each stop H3 2 lines + ~40-word paragraph. Intro line above the stack on base: tag "A SHIFT" + H2 "A shift in three stops." (padding 136/64). | 30 + 3×45 words |
| B4 | Product `#scanner` | what you get | **T3** three alternating ellipse rows: N1 scanner (photo **06**, bleed-left), Count Sheet (photo **07**, bleed-right), Supplier report (photo **08**, bleed-left). Tag "SCANNER" + H2 "One scanner, one sheet, / one report." above. | 3×70 words |
| B5 | Spec band `#spec` | proof by plain numbers | **T4** `#307ADD` full-bleed, padding 136/64: left tag "SPEC" + H2 "The N1, in / plain numbers." white; right 8 dotted rows (§0 specs). | ~70 words |
| B6 | Pricing `#pricing` | price list | base ground. Tag "PRICING" + H2 "Pay per door. / Cancel any month." Then the 6-item price table (§0) full content width 1200 at ≥782: columns Item (25%) · Includes (auto) · Price (`white-space:nowrap; text-align:right`, min 180px), rows separated by 1px dotted `#222` hairlines, row padding 24px 8px, price Inter Tight 700 1.5rem. Under it one line "No setup fee · 30-day dock trial · scanner ships within 5 working days" + CTA pill right. No sp-reveal on the table. | ~60 words + table |
| B7 | Dock photo + stories `#stories` | social proof | **Parallax band**: full-bleed photo **09** (21:9, max-height 72vh) with `sp-parallax --sp-par: 10%` (mobile 6%), no text on it except a 13px white caption bottom-left "Three docks, three cities." on a small `rgba(0,0,0,.35)` strip. Then tag "STORIES" + H2 "Docks that count / at the door." and **3 columns** (gap 40px): photo **10/11/12** at 4:3 with radius 24px (token d: device card radius 24) + quote (1.125rem 400 lh 1.9) + name / company / city 0.875rem muted + facts line "2 doors · Shift plan". Columns `sp-stagger` + `sp-reveal--up`. Link "Read the stories" → /stories/. | 3×55 words |
| B8 | FAQ `#faq` | remove last doubts | Two-column: left 4 cols tag "FAQ" + H2 "Before you / start a trial." (sticky top 120px); right 8 cols 6 `details` items with dotted hairlines, question 1.25rem 700, answer 1rem. Qs: Wi-Fi at the dock? (offline queue 2,000) · Which labels does it read? · Do I need a warehouse system? (no: email or CSV) · What happens after 30 days? · How long does a battery last? (12-hour shift, 2.5 h charge) · Which languages? (en, zh-TW, ja, fr, de). | ~260 words |
| B9 | Closing CTA `#start` | the one CTA, repeated | base ground, **T2** again: H1-size "Count it at the door. / Starting Monday." 4.5rem left, kicker "30-day dock trial · no setup fee.", then quote from Ilse Verhoeven (1.125rem, 2 lines) and the CTA pill (larger: height 48, radius 24). Right side: photo **13** (charging cradle by the door) as **T3 ellipse bleeding off the right edge**, 45vw. | ~60 words |
| B10 | Footer | facts, legal | `#3A4150` iron ground, white text 0.875rem: wordmark, address, support hours, email; links Privacy · Terms · Contact · Setup & help; "© 2026 Niuke Scan B.V." | — |
English home ≥ 250 words (planned ≈ 900) with narrative paragraphs in B2 (3), B3 (3), B4 (3). CJK ≥ 500 characters.

### 5.4 Home image positions (13, ≥8; none repeats on the page)
01 hero · 02 message · 03, 04, 05 stage · 06, 07, 08 ellipse rows · 09 parallax band · 10, 11, 12 stories · 13 closing ellipse.

### 5.5 Comparison with the most recent themes
| Pos | Kogu Hardware | Budou Academy | Hibiki Speech | Renkei Forum | **Niuke Scan** |
|---|---|---|---|---|---|
| 1 | hero + info bar | rounded tile collage | torn-edge hero | accent band + marquee | **full-bleed documentary photo, pale-wall headline, floating chip, info bar** |
| 2 | gateway 3-photo ruled grid | about | welcome photo cluster | meta strip | **message: 3 lead paragraphs + portrait photo** |
| 3 | counter portrait | day rail | difficulty arches | brief | **pinned 100vh dimmed 3-stop stage with dotted rail** |
| 4 | services sticky panels | features ×3 | method vertical heading | 4 steps | **alternating viewport-bleeding ellipse rows + navy pills** |
| 5 | prices list | programme cards | people | speakers ellipse | **full-bleed flat blue spec band, dotted rows** |
| 6 | drawers grid | fees table | proof | programme sticky rail | **price table** |
| 7 | floor parallax photo | faculty | fees | venue parallax | **dock parallax band + 3 stories** |
| 8 | stories ruled rows | alumni band | notes list | stories | **FAQ (sticky heading)** |
| 9 | how-to-ask | visit band | close | tickets + FAQ + closing | **closing T2 headline + ellipse + CTA** |
Why not alike: Kogu also has a hero info bar, but Kogu's hero is a shop counter with ruled photo grids following; ours is a pale-wall/photo split KV with a floating chip and is followed by a 100vh dark pinned stage, which none of the four have. Renkei's ellipse is a 315px outline container on a black page; ours is a photo crop cut by the viewport edge on near-white. No collage, no torn edges, no arches, no people grid, no marquee, no step grid, no timeline. Our colour story (near-white + one navy + one flat blue band) differs from Kogu ink, Budou green, Hibiki yellow/pink, Renkei black/blue.

---

## 6. Inner pages (11 + 1 post)

Every page: T2 head (tag + 2-line H1 ≥4.25rem desktop + 13px English kicker) on base → body → closing strip "Start a dock trial" pill (the same one CTA). No sidebar. Section padding 120/136.

1. **How it works** (`/how-it-works/`): head "HOW IT WORKS / From the truck door / to the stock list."; full T1 stage (03/04/05, longer paragraphs ~70 words each); T3 row with photo **16** (put-away after count) bleed-left carrying the 4-part process as four ruled rows (number "01" 0.875rem label purple + 1-line title + 2 lines) — rows, not a grid; Amara Nwosu note on how Count Sheet matches the purchase order; pill → Pricing.
2. **The scanner** (`/scanner/`): head "SCANNER / Built for a / cold dock floor."; T1 single stop photo **13** "06:00 · Off the cradle"; T3 rows photo **06** (grip, buttons, screen) and **07** (Count Sheet pairing); **T4 full spec band** (all §0 specs + "In the box: N1, battery, USB-C cable, wall clip"); Tomás Reyes paragraph on drop testing (no certification claims beyond the listed IP54/drop height).
3. **Pricing** (`/pricing/`): head "PRICING / Pay per door. / Cancel any month."; full price table (identical to home); T3 photo **15** bleed-right with trial terms (30 days, 5 working days shipping, free return postage) + CTA pill; T4 band "In every plan" (5 rows); 4 pricing FAQs.
4. **Stories** (`/stories/`): head "STORIES / Three docks, / three cities."; for each story: a 100vh T1 stop (photos **10**, **11**, **12**; label "Story 01" + city in the time slot; H3 = the quote), then ~200 words narrative (before / first week / now — qualitative only); closing T4 band with the three facts rows (doors, deliveries/week, plan).
5. **About** (`/about/`): head "ABOUT / Made by people / who worked the dock."; T1 stop photo **14** "2021 · Rotterdam"; founding story (Ilse's nine years at the dock, Tomás's first prototype); T3 photo **17** bleed-left with the four team members as a ruled name list (name 1.25rem 700 + role) — not a portrait grid; T4 company band (Company, Founded 2021, Address, Team, Support hours).
6. **Setup & help** (`/setup/`): head "SETUP / Ready in / one afternoon."; T3 photo **15** bleed-left "What's in the box"; the 2-hour setup as 5 ruled rows; T4 band "Before your first shift" (Wi-Fi or offline, label types, users, charging spot, first purchase order); 8 help FAQs; Lukas Brandt signs off with support hours.
7. **Contact** (`/contact/`): head "CONTACT / Talk to someone / who knows docks."; T3 photo **17** bleed-right with email lines and pill (mailto:hello@…); T4 company band (address, emails, Mon–Fri 06:00–18:00 CET). No form needed.
8. **Waitlist / early access** (`/waitlist/`, newsletter page): head "START / Start a / dock trial."; T3 photo **01** (4:3 crop on the scanner) bleed-left beside the form intro; form card white radius 24, fields: name, work email, company, doors (select 1 / 2–3 / 4–8), language; submit = navy pill. Note: "We reply within one working day (Mon–Fri 06:00–18:00 CET)."
9. **Thanks** (`/thanks/`): T2 head "THANKS / We'll call / before your truck does." + 2 lines (scanner ships within 5 working days) + pill home.
10. **Privacy** (`/privacy/`) and 11. **Terms** (`/terms/`): T2 head; text column 680px; headings 1.25rem; no motion.
- Post (≥1, Notes): "What a goods-in count is actually for" (featured photo **16**), ~400 words, single template with T2 title (3rem) + 680px column.
- 404/search: T2 head + pill home.

---

## 7. Scroll effects (3 kinds per page max; hero none except parallax)
| Effect (sp-*) | Where | Reference (207-inc.com) trigger / time / easing | Ours |
|---|---|---|---|
| `sp-parallax` (required) | **B1 hero** Cover background photo 01, `--sp-par: 8%` desktop / **5%** mobile (kept on mobile); **B7** full-bleed photo 09, `--sp-par: 10%` / 6%; inner pages: T1 single stops are sticky → no parallax there; Pricing/Setup none | ref: KV floats + vision bg scale 1.15→1 (2.4s power3.out) while pinned with ScrollTrigger scrub 0.5 | CSS scroll-driven (`animation-timeline: view()`), IO + translate3d fallback from sp-scroll.js; foreground text in the hero sits in the Cover inner container (not moving) |
| `sp-stagger` + `sp-reveal--up` | B2 paragraphs; B3 each stop's H3 + paragraph; B7 story columns; inner-page T1 stops and ruled rows | ref: SplitType per-char, stagger .02 (p) / .05 (h3), power2.out ≈ 0.8s on enter | per line/block, 0.8s `cubic-bezier(.23,1,.32,1)`, 24px, 0.12s steps (sp defaults) |
| `sp-reveal--mask` | B4 ellipse figures (3), B9 ellipse, inner-page T3 figures | ref: ellipse photo + block fade-in on enter ≈0.8s power2.out | 1.2s ease-out gradient-mask wipe on the `figure`; ellipse clip-path on the inner `img` only |
Not animated: hero text, info bar, spec band rows, price tables, FAQ, forms, legal text. Ambient CSS (chip bob, scan-line, Scroll-pill dot) is not sp-*; it lives in `style.css`, is disabled by `@media (prefers-reduced-motion: reduce)`, `html.sp-no-motion` and inside `.editor-styles-wrapper`, and uses transform only.

---

## 8. Responsive rules (hard)
- **390px first screen**: no vertical text, no absolutely positioned labels/chips over text; chip is in flow; Scroll pill and Top line hidden (`display:none` ≤1023 for the Top line, ≤781 for the pill); H1 never overlaps the photo. No horizontal overflow at 390 or 1280 (`overflow-x: clip` on html/body; ellipse figures use `overflow:clip`, never widen the page).
- **Price table at ≥782px**: full content width (1200, or 100% − 2×40px gutters), Price column `white-space: nowrap; text-align: right; min-width: 180px`, never clipped or scrolled; test at 800 and 1280.
- **Every table on mobile (≤781)** stacks: each row becomes a block — item name + price on one line (price nowrap right), the description below at 0.875rem; `thead` visually hidden; T4 spec band rows stack label above value.
- T1 stage on mobile: see §1 T1; text never overlaps the rail.
- T3 on mobile: image full width with flat-top ellipse; text below.
- FAQ heading not sticky ≤1023.

---

## 9. Images (17, Grok, one at a time, Read each one; regenerate any with text, logos, broken hands or style drift)

IMAGERY: **photo** (stage-a). STYLE — use this exact string for every image:
`photorealistic documentary photograph, high-key bright natural daylight, 35mm lens, clean modern small warehouse in an international port city, white and pale grey walls, polished concrete floor, plain unbranded brown cartons with blank white labels, cool neutral palette of navy, slate grey, off-white and steel blue, diverse adults in plain navy or charcoal work polos, candid working moment, natural skin texture, realistic hands, no text, no logos, no brand marks, no readable labels or signage, no Japanese elements`

The scanner, whenever it appears, is described as: `a compact handheld barcode scanner the size of a phone, matte slate-grey body, soft rubber grip, small dark screen, no logo`.

| # | File | Subject / composition | Ratio | Used on (once per page) | Home |
|---|---|---|---|---|---|
| 01 | `hero-door.webp` | hand holding the scanner over an open carton on a pallet at an open loading door; left 40% of the frame a plain pale off-white wall; dock leveller edge running diagonally from bottom-left to the carton; pallet jack with stacked cartons mid-ground right; worker's face out of frame or turned away | 16:9 (2000×1125) | Home B1 (KV #1–3,5); Waitlist T3 | ✔ |
| 02 | `paper-note.webp` | dock lead holding a creased paper delivery note with pencil tick marks (no legible writing) beside a stack of cartons, slightly puzzled | 4:5 | Home B2 | ✔ |
| 03 | `stage-truck.webp` | early-morning open dock door with a truck backed in, worker lifting the first carton off, cool dawn light mixed with warm interior light | 16:9 | Home B3 stop 1; How it works stop 1 | ✔ |
| 04 | `stage-short.webp` | worker kneeling beside a pallet with one visible gap where a carton is missing, scanner raised | 16:9 | Home B3 stop 2; How it works stop 2 | ✔ |
| 05 | `stage-close.webp` | late afternoon, supervisor at a standing desk by the dock with a tablet, stretch-wrapped pallets behind | 16:9 | Home B3 stop 3; How it works stop 3 | ✔ |
| 06 | `scanner-grip.webp` | close-up of a hand gripping the scanner, thumb on the trigger, carton edge blurred behind | 1.55:1 | Home B4 row 1; Scanner T3 | ✔ |
| 07 | `count-sheet.webp` | tablet on a wall bracket by the dock, screen showing abstract rows of grey and blue bars only (no text), scanner resting below | 1.55:1 | Home B4 row 2; Scanner T3 | ✔ |
| 08 | `supplier-report.webp` | small office corner next to the warehouse window, person on a phone call with a laptop (screen not readable) and one open carton on the desk | 1.55:1 | Home B4 row 3 | ✔ |
| 09 | `dock-wide.webp` | wide view of a small warehouse with three dock doors open, pallets lined up, two people working, bright afternoon | 21:9 (2000×857) | Home B7 parallax | ✔ |
| 10 | `story-bikes.webp` | bicycle-parts warehouse: person scanning a carton of wheel rims, racking with boxed parts | 4:3 | Home B7 story 1; Stories stop 1 | ✔ |
| 11 | `story-tea.webp` | tea and spice importer: person scanning a carton next to jute sacks (unprinted) and tins | 4:3 | Home B7 story 2; Stories stop 2 | ✔ |
| 12 | `story-lamps.webp` | lighting wholesaler: person scanning a long flat carton, lamp shades in clear wrap on shelves | 4:3 | Home B7 story 3; Stories stop 3 | ✔ |
| 13 | `cradle.webp` | four scanners standing in a grey charging cradle on a workbench by a dock door, morning light | 4:3 | Home B9 ellipse; Scanner T1 stop | ✔ |
| 14 | `workbench.webp` | two engineers testing scanner prototypes at a bright workbench with a carton and a drop-test mat | 16:9 | About T1 stop | |
| 15 | `unboxing.webp` | person unboxing the scanner kit (scanner, battery, cable) on a dock office table | 4:3 | Pricing T3; Setup T3 | |
| 16 | `putaway.webp` | counted cartons being lifted onto pallet racking, scanner clipped on a belt | 4:3 | How it works T3; Notes post | |
| 17 | `support-desk.webp` | support person with a light headset at a bright office desk, warehouse visible through an interior window | 4:3 | About T3; Contact T3 | |
- 17 images (within 12–18), 13 used on Home, 0 cut-outs, each ≤300 KB and ≤2000px webp, readme line per image (AI-generated, CC0). No image appears twice on one page (Waitlist uses 01 only; Scanner uses 06, 07, 13; Pricing 15; Setup 15; Contact 17; About 14, 17; How it works 03, 04, 05, 16; Stories 10, 11, 12).

---

## 10. Home acceptance checklist
1. First screen (1440×900): full-bleed photo 01 with the pale wall left, H1 "Count every carton / at the door." ≥4.5rem tracked at x≈80, 13px kicker, floating count chip with scan-line, Scroll pill top-right, Top line right edge, white info bar with 4 facts + navy CTA pill — all visible; no table/form/search, no centred giant type; `check-first-screen.py --max 14` passes (target ≤8%).
2. KV checklist §2(3) items 1–6 each visible; parallax on the hero passes `check-parallax.mjs` (≥6px desktop and mobile, 0 under reduced motion).
3. B3 T1 stage: three 100vh dimmed stops, dotted rail at ≈25% with hollow node, label+time left, H3 + paragraph lower-right of the rail, bottom progress hairline 33/66/100%.
4. B4 T3: three ellipse photos ≥50vw, cut by the viewport edge, alternating sides, dotted hairlines around names, navy pills with dot.
5. B5 T4: full-bleed `#307ADD` band, white text, dotted rows, faint parallelograms.
6. Price table: 6 items, prices exactly as §0, full width at 800 and 1280 with nowrap right-aligned prices; stacked on 390.
7. Block order equals §5.3; anchors in the header scroll to B2, B3, B4, B6, B7, B8; one CTA label everywhere ("Start a dock trial" → /waitlist/).
8. ≥8 image positions (13), none repeated, all from §9, no text/logos in photos.
9. Fonts: Inter Tight + Albert Sans in editor and front end, Noto Sans TC/JP for zh-TW/ja; max preset 4.5rem.
10. Motion: only sp-parallax, sp-stagger/up, sp-reveal--mask; hero text has no reveal; `?sp-static` shows everything; 390 first screen has no absolute or vertical labels; `auto-gates.mjs … en … 1 1` pass=true.
11. Fixed facts (§0) identical to inner pages and later all five languages.

---

## 11. Similarity target (~80%) — reference vs Niuke
| Dimension | 207-inc.com value (token) | Niuke value |
|---|---|---|
| Ground / ink | #F8F8F8 (42%) / #222222 (a) | #F8F8F8 / #222222 (same) |
| Button colour | navy #24274A pill (a, d) | #24274A (same) |
| Big band | flat #307ADD full-bleed (a) | #307ADD (same), spec band |
| Accent | cyan #31BAFF, lavender #D9B3FF in illustration ≈8% (a) | cyan #31BAFF <0.5% (scan-line, chip dot); lavender dropped (no illustration); label purple #7B5EA7 from logo/tag |
| First-screen saturated | ≈14% (a) | gate 14%, target ≤8% |
| Hero H1 | 72px/700 lh 1.4 ls .12em, 2 lines, x=80 (b, c) | 4.5rem/700, lh 1.2 Latin / 1.4 CJK, ls .05em Latin / .12em CJK, 2 lines, x=80 — Latin tracking reduced for legibility |
| Kicker / caption | 13px/300 ls .04em (b) | 13px/300 ls .04em (same) |
| Section H2 | 40px/700 lh 1.4 ls .16em (b) | 2.5rem/700 lh 1.4, ls .04em Latin / .16em CJK |
| Stage H3 / label | 56px/700 ls .08em; label 21px/700 ls .12em (b) | 3.5rem/700 ls .03em Latin / .08em CJK; label 1.3125rem/700 .06/.12em |
| Body / lead | 16px lh 2.0 ls .12em; lead 18/300 lh 2.5 (b) | 1rem lh 2.0 (CJK 1.85 per pipeline rule) ls .02/.1em; lead 1.125rem/300 lh 2.2 |
| Nav | 16px/300 ls 1.92px, gaps ~40px (b, c) | 1rem/300 ls .06em, gap 40px |
| Section spacing | 136 top / 184 bottom; 120 news (c) | 136 / 184; inner 120/136 |
| Hero text position | x=80, y≈230 (c) | x=80, H1 top ≈200 |
| Stage geometry | 100vh pinned, label x=188, rail x=366 dotted 1px, node 10px hollow, text from x≈404 (c, d) | 100vh sticky stack, label 13vw (188), rail 25.4vw (366) dotted 1px, node 10px, text from 28vw (404) |
| Photo veil | black ~55% (a, e) | rgba(0,0,0,.55) |
| Ellipse crop | ≈53% width, viewport-cut ellipse, text column x≈846–1320 (e) | 53vw, ellipse at viewport edge, text 58.75vw–91.7vw |
| Pill | radius 20, h40, trailing dot (d) | radius 20, h40, trailing 6px dot |
| Cards | radius 24, shadow 5px 5px 15px rgba(0,0,0,.25) (d) | story photos radius 24; chip shadow same values |
| Hairlines | 1px dotted (white on band, ink on product names) (d, f) | same on band, product names, price table, FAQ |
| Decoration | Scroll Down pill, Page Top line + dot, bottom progress hairline, band chevrons (f) | Scroll pill, Top line + 8px dot, stop progress hairline, band parallelograms |
| Imagery | documentary photos 16:10 dimmed, ellipse crops, illustrated KV (e) | documentary photos (one STYLE), dimmed stage, ellipse crops; KV translated to a photo |
| Motion | float ±10px 3.6s ease-in-out; pin crossfade 0.6s power2.inOut; scale 1.15→1 2.4s power3.out; per-char text stagger .02–.05 (g) | chip ±8px 3.6s ease-in-out; sticky stacked stops; parallax 8–10%; per-line stagger 0.12s, 0.8s cubic-bezier(.23,1,.32,1); mask 1.2s ease-out |
| Layout | KV → message → pinned vision ×3 → business ellipse rows → blue company band → news (structure) | KV → message → pinned shift ×3 → ellipse rows → blue spec band → pricing → stories → FAQ → closing CTA |
Our own: all photos (generated), all copy, wordmark; no reference illustration, photo, text or logo is reused.
