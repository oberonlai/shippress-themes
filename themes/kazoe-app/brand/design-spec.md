# Kazoe Books App: design spec (stage 1, binding for implementation)

Slug `kazoe-app`, bookkeeping app for small shops (SaaS), **landing track**: home = one long conversion page with anchor menu and one repeated CTA. Reference: **recruit.smarthr.co.jp** (S5-Style GWD #12086). Measurements in `reference-tokens.md` (cited below as `tok(a)…tok(g)`). Screens in `ref/`. IMAGERY = **photo** (the reference uses photos + generated halftone gradients, no illustration; the row's "illustration" wording is overridden by the follow-the-reference rule). Font direction = **sans**.

We borrow structure, techniques, colour relations, motion and the key-visual concept. We never copy SmartHR's text, photos, logo, deck embed or full page layout.

## 0. Fixed brand facts (all pages, all five languages, never change)

- **Kazoe Books** (app name "Kazoe"), founded **2022**, small team in **Lisbon, Portugal** (Rua da Prata studio, fictional address "Rua da Prata 112, 1100-420 Lisboa"). Remote support.
- Support hours: **Mon–Fri 09:00–18:00 (Lisbon time)**, email replies within **one business day**. Email: hello@kazoe.example.
- Promise line: **"Close the day in one tap."** Setup takes **about 10 minutes**. Works on iOS, Android and the web. Data exports to CSV/PDF for your accountant.
- **Plans (6 rows, prices monthly, EUR, VAT excl.)**
  | Plan | Price | For |
  |---|---|---|
  | Starter | €0 | 1 register, 300 sales / month, daily close |
  | Shop | €9 | 1 register, unlimited sales, tax-period export |
  | Shop Plus | €19 | up to 3 registers, staff logins, stock counts |
  | Multi-store | €39 | up to 5 locations, combined reports |
  | Accountant seat (add-on) | €4 | read-only seat for your bookkeeper |
  | Receipt scanning (add-on) | €3 | 200 photographed receipts / month |
  Annual billing: 2 months free. Free trial of any paid plan: **30 days**, no card.
- **Three-step setup**: 1 Download & name your shop (2 min) → 2 Add your payment methods and tax rate (5 min) → 3 Close your first day with one tap (3 min).
- **People (7)**: team — **Inês Carvalho** (co-founder, product), **Tomás Weber** (co-founder, engineering), **Amara Okoye** (support lead), **Lena Fischer** (bookkeeping advisor, certified accountant). Shop owners in stories — **Rafael Moreno** (bike repair shop), **Mei-Ling Chou** (florist), **Yusuf Demir** (corner café).
- **Stories (3)**: Rafael "stopped counting coins at 9 pm"; Mei-Ling "tax quarter sent in one export"; Yusuf "two baristas, one closing report". No invented percentages, no awards, no real brands.
- **Waitlist** (newsletter page): early access to the "Multi-store" plan and the upcoming bank-feed feature; first 500 sign-ups get 3 months of Shop free. Repeated CTA everywhere: **"Start free"** (ink, primary) + **"Join the waitlist"** (outline, secondary).

---

## 1. Signature techniques (3, obvious at a glance)

### T1. Stepped white label-box headings (smarthr hero + issue rows)
- **Reference** (https://recruit.smarthr.co.jp/, `ref/smarthr-first.png`, `smarthr-s1.png`): every line of the hero H1 sits in its own white box with 1px ink border, flush left, the box hugs the text so the right edges step; sub-lines are smaller boxes stacked under it; issue headings repeat the same boxed lines. `tok(b)(d)(f)`.
- **Ours**: hero H1, hero sub-lines, every home section heading, every inner page head. Markup: heading with `<span class="kz-box">` per line (block, `display:table` or `width:fit-content`, white `#FFFFFF` ground, `border:1px solid #1F2A30`, padding `0.08em 0.22em`, adjacent boxes overlap their borders by `-1px` margin-top so the stair reads as one shape). Line breaks are authored (one span per line), never automatic.
- Sizes: hero H1 `clamp(2.5rem, 6.8vw, 6.25rem)` (ref 110px at 1440 → 100px, tok(b)), weight 700, line-height 1.0, letter-spacing -0.01em. Section heads in boxes `clamp(2rem, 3.6vw, 3rem)` / 700 / lh 1.25 (ref issue head ≈48px). Sub-line boxes 1rem / 700 / lh 1.9, padding 4px 20px.
- Must not be diluted: border stays **1px solid ink** (not grey, not 0.5 opacity), radius **0**, boxes sit **flush to the page edge (x = 0)** in the hero and on the 80px number column in rows, at least 2 lines so the step is visible. No shadow.

### T2. Top/bottom halves first screen with dot-dither gradient (smarthr first view)
- **Reference**: below an 80px white header, the first screen splits — top ≈45% a left→right cyan→deep-blue gradient whose right third dissolves into 3px square dither dots; bottom ≈55% a vertical peach→sky pastel gradient. `tok(a)(e)`.
- **Ours**: hero = two stacked full-bleed bands under an 80px header. Top band height `46vh` (min 380px desktop), gradient `linear-gradient(90deg, #7FA3B5 0%, #7FA3B5 45%, #4F7F99 75%, #2F4B5C 100%)` with a dither layer `.kz-dither` on the right 40%: `radial-gradient(#2F4B5C 1.2px, transparent 1.4px) 0 0/3px 3px` plus a second grid in `#F4F7F9` at 25% density, masked by `linear-gradient(90deg, transparent, #000 60%)` so dots appear progressively to the right (exactly like the reference). Bottom band `54vh` (min 420px), `linear-gradient(180deg, #F1CFC6 0%, #E3DCE0 40%, #CFE0E8 100%)` with a faint 3px dot texture in the bottom-left 30% (opacity .35). The hero photo sits in the bottom band (see §3).
- Must not be diluted: the split must be a **hard horizontal edge** (no blur between halves); dither dots must be visibly square/round **3px** and denser toward the right edge; the top band must stay steel-blue → deep blue (never lightened to pale grey-blue — Tsumugi lesson).

### T3. Numbered rows with 80px number column, full-width rules and ink "+" box (smarthr ISSUE)
- **Reference** (`smarthr-s1.png`): full-width 1px rules; a left column 80px wide with the row number in bold; heading lines boxed (T1); an ink-filled "+" square at the end of the last line; click opens the row (grid-template-rows 0.8s). `tok(d)(f)(g)`.
- **Ours**: home **Features** (4 rows) and **FAQ** (6 rows); inner pages Features, Setup, FAQ, Pricing notes. Row = `details.kz-row` full bleed: `border-top:1px solid #1F2A30` (last row also bottom), grid `80px 1fr`, number column with `border-right:1px solid #1F2A30`, number Plus Jakarta Sans 1.5rem / 800 centered top 24px. Summary = boxed heading lines + ink "+" box **80×50**, `#1F2A30` fill, white 1.25rem "+" (rotates 45° to "×" when open, 0.8s cubic-bezier(.65,0,.35,1)). Open body animates `grid-template-rows: 0fr→1fr` 0.8s same easing (CSS only, no JS listener). Feature rows: photo is **outside** the details content (always visible, right column, see §3) so home keeps ≥8 visible photos.
- Must not be diluted: number column exactly **80px** with its own vertical rule; rules run **edge to edge** (no container); "+" box is **ink-filled**, square-cornered, attached to the end of the last heading line.

### Supporting (not counted, but required): fixed bottom-right CTA pair
Desktop ≥782px: `position:fixed; right:0; bottom:0`, two buttons **300×80**, radius 0: "Join the waitlist" (white, 1px ink border, ink text) + "Start free" (ink `#1F2A30` fill, white text, white 40×40 square with ink arrow at right). Text 1.125rem/700, left padding 20px. Hover: arrow translateX(6px) 0.35s cubic-bezier(.5,1,.89,1). Mobile <782px: full-width bar of two 50% buttons, height 56px, fixed bottom; hero has `padding-bottom:72px` so no text is ever under it. Body gets `padding-bottom:80px` (56px mobile) so the footer is not covered.

### Continuation to inner pages (≥4 required; we do 9)
| Page | T1 label boxes | T2 halves / dither | T3 numbered rows |
|---|---|---|---|
| Features | page head 2 boxed lines | short halves head (top 220px dither band + bottom 120px pastel strip) | 8 feature rows |
| Pricing | yes | halves head | "What's included" 5 rows under the table |
| Setup guide | yes | halves head | 3 step rows (open by default) + photo |
| FAQ | yes | halves head | 12 rows in 3 groups |
| Stories | yes, each story title boxed | halves head | 3 story rows with portrait photo |
| About | yes | halves head | 4 "how we work" rows |
| Waitlist (newsletter) | yes | full halves first screen (form in bottom band, form not on home) | 3 rows "what early access gets you" |
| Contact | yes | halves head | 3 rows (support / accountants / press) |
| Privacy, Terms, Thanks | yes (small 2rem) | dither strip 120px | — (legal text plain) |

---

## 2. Key visual concept

### (1) Reference first-view concept, story, signature motion
SmartHR Recruit's first view is a **bold declarative promise** ("turn social change into work") set huge in stacked white label boxes, laid over a split screen: an energetic saturated gradient above that **dissolves into dither pixels** toward the right (digital, in progress), a calm pastel gradient below (the people / daily life side). Story: *a big change, made concrete and human*. Signature motion: lines fade in over 0.8s cubic-bezier(.33,1,.68,1) on load; as sections enter, a **halftone dot mask sweeps left→right** (0.8s, cubic-bezier(.65,0,.35,1)); the CTA pair is always there bottom right.

### (2) Our translation (same composition, same motion concept, same image type = photo + generated gradient)
"**Close the day / in one tap.**" — the end-of-day moment in a small shop. Top half: the steel-blue gradient field dissolving into dither dots = the day's sales turning into tidy numbers. Bottom half: the pastel band holds a **high-key documentary photo of a shop owner at the counter at closing time, closing the till with the phone showing the day's total** (screen content blurred/abstract, no readable text). Same story shape: a big promise in label boxes over the split, made human by a real person in the lower half. Same motion: lines fade in on load, dither layer drifts in parallax, sections reveal with the left→right wipe.

### (3) KV checklist (all visible in the first screen at 1280×900 and 1440×900)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Stepped white label-box H1 (2 lines, 110px) | "Close the day" / "in one tap." two boxes, 6.25rem, 1px ink border | top band, flush left x=0, top 0 (boxes start right under header like ref) | per-line fade-in 0.8s cubic-bezier(.33,1,.68,1), 120ms apart (CSS keyframes, not sp-reveal) | — |
| 2 | Cyan→deep-blue gradient with dither on the right | #7FA3B5→#4F7F99→#2F4B5C, 3px dither on right 40% | top band, full width | `.kz-dither` is the `sp-parallax__layer`, --sp-par 8% | CSS (generated) |
| 3 | Peach→sky pastel lower half | #F1CFC6→#CFE0E8 vertical | bottom band, full width | static | CSS |
| 4 | Three small sub-line boxes | "Every sale tallied as it happens." / "Tax-period exports, ready for your accountant." / "No training. Set up in about 10 minutes." | directly under H1, flush left, overlapping the band edge exactly as the ref (last box sits on the split line) | fade-in after H1 (0.8s, +360ms) | — |
| 5 | Human/daily side in lower half | photo **K01** owner closing till, phone in hand | bottom band, right, 56% width, 16:9, bottom aligned, radius 0 | `sp-parallax` on photo, --sp-par 6% | **K01** |
| 6 | Fixed bottom-right CTA pair + small boxed note above it | "Join the waitlist" + "Start free"; above it two right-flush boxes "From €0 a month." / "30-day trial, no card." | fixed bottom right | arrow hover 0.35s | — |

Mobile 390: header 64px; top band auto height (min 340px) with H1 at 2.5rem in boxes (both lines fit, no wrap inside a box: "Close the day" ≈ 300px), sub-line boxes 0.875rem in flow; bottom band shows K01 full width 4:3; the boxed note of #6 is hidden (only CTA bar). No vertical text, no absolutely positioned labels over text.

---

## 3. Home: block list and order (en ≥ 450 words, ≥ 3 narrative paragraphs)

Anchor menu (centered nav, row `nav: centered`): Features · How it works · Stories · Pricing · FAQ — logo left, nav centered, an **80×80 outlined menu box** at the far right (opens the same anchor list as overlay on mobile; desktop shows the nav inline and the box holds the language switcher). Header 80px, white, 1px ink bottom rule.

| # | Block (anchor) | Purpose | Layout | Photo | Copy |
|---|---|---|---|---|---|
| 1 | Hero (T2+T1) | promise | §2 halves | K01 | H1 2 lines + 3 sub-lines + note |
| 2 | Lead (`#why`) | problem/solution statement | ref two-column head: title in boxes left (≈520px wide at x=30) + 1.5rem/lh 1.7 lead from x≈587; below, a 3-col stat strip with `sp-count`: "10 min setup", "1 tap to close", "5 languages" (facts, not claims) | — | 2 paragraphs (~90 words) |
| 3 | Features (`#features`, T3) | 4 numbered rows | 80px number col; boxed heading lines + "+"; right column 40% photo 2:1 always visible; details body 2 sentences | K02, K03, K04, K05 (one per row) | 4 × (heading + 40 words) |
| 4 | Built for the counter (card mosaic) | who it's for | full-width 3-col card row, cards separated by 1px vertical rules (ref 413×202 cards, 2:1 photos, radius 0), caption box under each: shop type + one line | K06 café, K07 florist, K08 bike repair | 3 × 25 words |
| 5 | How it works (`#how`) | three-step setup | left: boxed head + 3 rows in **horizontal** 3 columns, each with a big boxed number (3rem) and time ("2 min"); right-bleed photo below 21:9 full width with sp-parallax | K09 (full-bleed band, parallax) | 3 × 30 words |
| 6 | Stories (`#stories`) | 3 owner stories | dither-gradient band (top-band gradient, 520px) with three white boxed quote cards on it, each with a square photo (1:1, 160px) top-left | K10, K11, K12 (portraits of Rafael, Mei-Ling, Yusuf) | 3 × 45 words |
| 7 | Pricing (`#pricing`) | plans table | full-width table (6 rows from §0), ink rules, price column right-aligned nowrap; annual/trial note under it; "Start free" button | — | table + 30 words |
| 8 | FAQ (`#faq`, T3) | 6 numbered rows | same row system, no photos | — | 6 Q + 40-word answers |
| 9 | Closing CTA | repeat CTA | mini halves (top steel band 200px with boxed "Tonight, close in one tap.", bottom pastel 160px with the two CTA buttons inline, left) | — | 1 line + 1 sentence |
| 10 | Footer | legal/contact | white, 1px top rule, 4 columns (product / company / legal / contact + hours), small dither strip 24px at very bottom | — | — |

Home photo positions: K01, K02–K05, K06–K08, K09, K10–K12 = **12** (≥8).

### Comparison with recent themes (no repeat)
| Theme | Home order | Why ours differs |
|---|---|---|
| Kaigi Centre | photo stage + plum panel → room strip → intro → network → gatherings → parallax band | ours opens with a CSS gradient split + label boxes, no panel over photo; numbered rows instead of strips |
| Mado Air | info bar → why → how (cutaway SVG) → dark cover → specs/pre-order | no SVG cutaway, no dark cover; pricing table + numbered FAQ |
| Shirota Laundry | oval window on hairline grid → statement → band → index → staggered mosaic → rates | no hairline grid, no oval; square-cornered label boxes and full-bleed 1px rules |
| Kiban Structural | stadium window → dark rounded band → sticky timeline → statement → tilted cards → grid | radius 0 everywhere, no sticky timeline, no tilted cards, horizontal 3-step not vertical |

---

## 4. Inner pages (10 + legal)
1. **Features** — 8 numbered rows (daily close, sales log, payment-method split, tax rates, expense photos, stock counts, staff logins, exports); K13 in the head bottom band.
2. **Pricing** — full table (same 6 rows, same prices), included-in-all list as 5 rows, billing FAQ (3 rows). No photo needed; head strip only.
3. **How it works / Setup guide** — 3 step rows open, each with time; K14 (phone on counter, setup screen abstract).
4. **Stories** — 3 story rows (Rafael, Mei-Ling, Yusuf) with K10–K12 at 4:5 here (different crop allowed, same file not used twice on one page).
5. **FAQ** — 12 questions in 3 groups (Getting started / Money & tax / Account & data).
6. **About** — founding 2022, Lisbon, team of 4 named (Inês, Tomás, Amara, Lena) as a 2×2 **text** list with roles (no portrait grid); K15 studio desk.
7. **Waitlist** (newsletter template) — halves first screen with form (email, shop type select, language) in the bottom band; 3 rows of benefits.
8. **Contact** — 3 rows; address, email, hours from §0; K16 support (Amara at a laptop).
9. **For accountants** — accountant seat (€4), export formats, Lena's note; K17 accountant reviewing printouts.
10. **Privacy**, **Terms**, **Thanks** (thanks repeats the 3 setup steps in small boxes).

---

## 5. Colour (source: reference tokens, hue shifted to row hex)
| Role | Hex | Ref (tok a) | Use | Share |
|---|---|---|---|---|
| Ink | `#1F2A30` | #23221F (≈ same L) | text, 1px borders, ink CTA, "+" box | text |
| Base | `#FFFFFF` | #FFFFFF | ground, label boxes | ~55% |
| Mist | `#F4F7F9` | — (ours, cards/footer) | alt section ground | ~8% |
| Primary steel | `#7FA3B5` | #00C4CC cyan | top band start, links hover underline | ≤12% |
| Steel mid | `#4F7F99` | gradient mid | gradient | ≤5% |
| Deep | `#2F4B5C` | #1A1A9A | gradient end, dither dots | ≤4% |
| Sky | `#CFE0E8` | #8CD2EE | bottom band end | ~15% |
| Blush | `#F1CFC6` | #F8B4AC | bottom band top, story card hover | ~5% |
Why swapped from cyan: row hex is steel blue and the first-screen saturation cap is 15% (ref measured 25.5%). Contrast is preserved by keeping the deep end `#2F4B5C` and ink 1px boxes — **do not lighten** the top band. First-screen saturated share target ≤ 12% (none of these exceed HSV s 0.5 at v>0.4; check with scripts/check-first-screen.py, limit 15%).

## 6. Type (font_direction = sans)
- Latin headings: **Plus Jakarta Sans** 700/800. Latin body: **Noto Sans** 400/700. CJK: **Noto Sans TC** (zh-TW), **Noto Sans JP** (ja), 黑體 only, never Serif.
- Stacks: heading `"Plus Jakarta Sans", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`; body `"Noto Sans", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`; `:lang(zh-TW)` puts Noto Sans TC first, `:lang(ja)` Noto Sans JP first.
- Load all via **theme.json fontFamilies + fontFace** (woff2 in assets/fonts, including zh-TW and ja subsets per Hokuto/Hada method); editor and front end identical; since style.css uses `:lang(`, copy shared/inc/editor-lang.php and require it.
- Scale (theme.json presets): small 0.875rem, medium 1rem (body, lh 1.9, ls 0.02em — tok b), large 1.5rem (lead, lh 1.7), x-large 2.25rem (H2 non-boxed, 400, lh 1.5 — tok b 36/54), xx-large 3rem (boxed section heads), **xxx-large 6.25rem** (hero; ≥4.25rem). Nav 0.875rem/400. CJK sizes ×0.75 for display, body lh 1.85. fr/de `hyphens:auto`.

## 7. Spacing, radius, decoration (tok c, d, f)
Header 80px; page gutter 30px (16px mobile); **no max-width container** for rows/table/cards (full width like ref); text measure inside rows max 680px. Section padding 140px desktop / 80px mobile. Radius **0** everywhere (buttons, cards, photos, inputs). Borders 1px `#1F2A30`. No shadows. Dither dot 3px. Photos: 2:1 cards, 16:9 hero, 21:9 band, 1:1 story thumbs, no masks.

## 8. Responsive (hard)
- 390px first screen: no vertical text, no absolutely positioned labels over text; boxes are in-flow; fixed CTA bar never covers text (hero padding-bottom 72px).
- Pricing table ≥782px: table `width:100%` of the viewport minus gutters, plan column left, price column `white-space:nowrap; text-align:right; min-width:9ch`, nothing clipped at 800 and 1280. <782px: every table (pricing, comparison) stacks into blocks (`display:block` rows, `td::before` labels, price right in the row header).
- Feature rows <782px: number column 56px, photo goes under the heading full width; "+" box 56×40.
- Card row → 1 column with horizontal rules.

## 9. Images (photo, Grok Build, one STYLE for all)
STYLE: `high-key bright documentary photograph, soft daylight, white and pale steel-blue tones with a hint of blush, clean modern small independent shop interiors, natural candid moments, shallow depth of field, 35mm lens, no text, no logos, no readable screens, diverse people, international neutral setting`
| ID | Subject / composition | Used | Home |
|---|---|---|---|
| K01 | Shop owner at a white counter at closing time closing the till drawer, phone in other hand showing an abstract total, warm evening window light; subject left-of-centre, 16:9 | Home hero bottom band | ✔ |
| K02 | Hand tapping a phone resting next to a card reader on a counter, close-up 2:1 | Home feature row 1 (daily close) | ✔ |
| K03 | Owner photographing a paper receipt with a phone, top-down on wooden counter 2:1 | Home row 2 (expenses) | ✔ |
| K04 | Tablet on a stand at a café counter with abstract chart, barista blurred behind 2:1 | Home row 3 (reports) | ✔ |
| K05 | Owner and accountant looking at a laptop together at a small table 2:1 | Home row 4 (exports) | ✔ |
| K06 | Bright corner café counter with pastries, barista smiling, 2:1 | Home card (café) | ✔ |
| K07 | Florist wrapping a bouquet at a white workbench 2:1 | Home card (florist) | ✔ |
| K08 | Bike repair shop, mechanic at a stand, daylight 2:1 | Home card (repair) | ✔ |
| K09 | Wide shop street at dusk-to-evening, small shopfronts with lights on, 21:9 | Home "How it works" parallax band | ✔ |
| K10 | Portrait of Rafael (bike shop owner, 40s) at his workbench 1:1 | Home story 1; Stories page | ✔ |
| K11 | Portrait of Mei-Ling (florist, 30s) among buckets of flowers 1:1 | Home story 2; Stories page | ✔ |
| K12 | Portrait of Yusuf (café owner, 50s) behind espresso machine 1:1 | Home story 3; Stories page | ✔ |
| K13 | Close-up of a till drawer being closed, coins neatly sorted, 16:9 | Features head | |
| K14 | Phone propped on a counter beside a notebook and pen, setup moment, 16:9 | Setup guide | |
| K15 | Small bright studio with two people at desks, plants, 16:9 | About | |
| K16 | Support person with headset smiling at a laptop, 16:9 | Contact | |
| K17 | Accountant reviewing printed reports and a laptop, 16:9 | For accountants | |
Total 17. Each ≤300 KB, ≤2000px, webp; regenerate any with text, logos, broken hands/faces.

## 10. Scroll effects (sp-scroll, from stage-a candidates)
| Effect | sp class | Where | Source / trigger / time / easing |
|---|---|---|---|
| Halftone dot wipe | `sp-reveal sp-reveal--wipe` | Lead head, card row (K06–K08 as group), Stories band, Pricing head | smarthr halftone mask sweep, IO threshold .2, 0.8s, set `--sp-dur:.8s`, easing cubic-bezier(.65,0,.35,1) |
| Stagger up | `sp-stagger` + `sp-reveal--up` | Features rows (4), How-it-works 3 columns | ours, IO, 0.6s, `--sp-dist:20px`, spec default easing |
| Count | `sp-count` | Lead stat strip (10, 1, 5) | ours, IO, spec default |
None on hero (CSS load fade only), pricing table, forms, legal text, FAQ rows.

### Parallax (required)
- **Hero**: the top band is `.kz-hero__top.sp-parallax`, its `.kz-dither` div is `.sp-parallax__layer`, `--sp-par: 8%` (mobile 5%); foreground H1/sub-line boxes are siblings, not inside the layer. Bottom band `.kz-hero__photo.sp-parallax` wrapping `figure>img` K01, `--sp-par: 6%` (mobile 4%). Reference counterpart: the dithered gradient field that "dissolves" behind fixed type + the left→right mask motion; we express its drift through parallax.
- **How it works band**: full-bleed Cover with K09 background, `sp-parallax`, `--sp-par: 10%` (mobile 6%); foreground: one boxed line "Ten minutes tonight. One tap every night after." on a white box.
- reduced-motion / `?sp-static` / editor: no movement. Must pass check-parallax.mjs (≥6px).

## 11. Similarity table (target 80%)
| Dimension | Reference | Kazoe |
|---|---|---|
| Hero composition | top/bottom halves 45/55, header 80 | 46/54, header 80 |
| Hero type | 110px/700/lh 1.0 in 1px boxes | 100px (6.25rem)/700/lh 1.0, 1px boxes |
| Sub-lines | 16px/700 boxed, 3 lines | 1rem/700 boxed, 3 lines |
| Gradient | cyan→#1A1A9A, 3px dither right | #7FA3B5→#2F4B5C, 3px dither right 40% |
| Lower gradient | #F8B4AC→#8CD2EE | #F1CFC6→#CFE0E8 |
| Body | 16/1.9/0.02em | 1rem/1.9/0.02em |
| H2 | 36/400/1.5 | 2.25rem/400/1.5 |
| Row heads | ≈48/700 boxed | 3rem/700 boxed |
| Number column | 80px + rules | 80px + rules |
| "+" box | 80×50 ink | 80×50 ink |
| CTA pair | 301×80, fixed BR, radius 0 | 300×80, fixed BR, radius 0 |
| Menu box | 80×80 outlined | 80×80 outlined |
| Radius / shadow | 0 / none | 0 / none |
| Layout width | full width, 30px gutter | full width, 30px gutter |
| Section padding | 120–160px | 140px |
| Photos | 2:1 cards, radius 0, 3-col | 2:1 cards, radius 0, 3-col |
| Load motion | fade 0.8s (.33,1,.68,1) | same |
| Section motion | mask L→R 0.8s (.65,0,.35,1) | sp-reveal--wipe 0.8s same easing |
| Hover | 0.35s (.5,1,.89,1), arrow 4–8px | 0.35s same, arrow 6px |
| Accordion | grid-rows 0.8s (.65,0,.35,1) | same |
| Saturated share | 25.5% | ≤12% (deliberate, gate ≤15%) |

## 12. Home acceptance checklist
- [ ] First screen shows all 6 KV items at 1280 and 1440; H1 in 2 stepped 1px boxes flush left; dither visible on the right; hard split line; K01 in the bottom band; CTA pair fixed bottom right.
- [ ] Section order exactly §3; anchor menu works for all 5 anchors; 80×80 menu box present.
- [ ] Features and FAQ use 80px number column, edge-to-edge rules, ink "+" 80×50; accordion animates 0.8s.
- [ ] ≥12 distinct photos on home, none repeated; card row 2:1 radius 0.
- [ ] Pricing table full width at 800/1280, price nowrap right, values = §0; stacks <782px.
- [ ] Parallax on hero (dither + K01) and K09 band passes check-parallax.mjs desktop + mobile.
- [ ] Wipe on ≥3 sections, stagger on features, count on stats; none on hero/table/forms.
- [ ] Fonts Plus Jakarta Sans / Noto Sans (+Noto Sans TC/JP) via theme.json, editor = front end.
- [ ] check-first-screen ≤15%; 390px: no overlap, no horizontal scroll, CTA bar not covering text.
- [ ] ≥450 English words, ≥3 narrative paragraphs; no claims of guaranteed results, awards or fake stats.
