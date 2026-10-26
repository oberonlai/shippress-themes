# Kaname Watches: design spec (stage 1 spec, binding for implementation)

Slug `kaname-watches`, a small mechanical-watch shop (type **store**, WooCommerce required, checkout must work; theme must not fatal without WooCommerce). Design-plan row b13-2: archetype horizontal-strip, hero framed-window, nav centred, first screen centred-narrow-column, page structure alternating-longform, real photography, **low-key** photo direction, palette kuro-cha `#4A4036` (brown family), fonts Hanken Grotesk + Onest, **font_direction sans** (CJK Noto Sans TC / Noto Sans JP gothic).

References (S5-Style, Fashion): main **BREDA — https://breda.jp/** (S5 https://www.s5-style.com/6865/); sub **VERMILLION — https://vermillion-jewelry.com/** (S5 /8489/, mood only: warm low-key light on a hand wearing jewellery). Measurements: `brand/reference-tokens.md` (cited below as **RT(a)…RT(g)**). Screenshots `brand/ref/`. Borrow structure, techniques, colour relationships, motion and the key-visual idea. Never copy BREDA's photos, copy, product designs, logo or the BREDA wordmark.

**Imagery: photo** (stage-a IMAGERY: photo → real-photography STYLE in section 8; low-key per the row).

---

## 0. Fixed brand facts (identical on every page and in all five languages)

| Fact | Value |
|---|---|
| Name | Kaname Watches (wordmark `KANAME`, sub-line `WATCHES`) |
| Founded | **2012** |
| Place | Klokstraat 12, 9000 Ghent, Belgium (fictional address; local address formats per language in brand.md) |
| What it is | one room with one glass counter; a short list of mechanical watches — **never more than twelve** on the list; currently **5** listed in the shop |
| Hours | Tue–Fri **11:00–18:00** (Thu until **20:00**), Sat **10:00–17:00**, Sun–Mon closed |
| Visit | by appointment, **45 minutes**, book up to **2 weeks** ahead; **three** watches set out on the felt tray; a chosen watch is held for **7 days** |
| Contact | hello@kaname-watches.example · +32 9 555 01 12 (fictional) |
| Currency | **EUR** in every language (no converted prices) |
| Delivery | insured EU delivery **€18**, free over **€1,000**; dispatched within **2 working days** |
| Returns | **14 days**, unworn, protective film still on |
| Warranty | **2 years** on new watches; **12 months** on pre-owned watches and on every full service |
| Service turnaround | timing check same day; full service **4–6 weeks** |

### People (6, named, fictional)
| Name | Role | Appears on |
|---|---|---|
| **Ilse Verhoeven** | founder (2012), chooses every watch on the list | Home choose, How we choose, People |
| **Tomasz Wrona** | watchmaker, the service bench | Home bench, The bench, People |
| **Amara Diallo** | counter and visits, fitting | Home visit, Visit, People |
| **Rafael Ortega** | leather strap maker (own workshop in Porto, partner) | Straps & sizing, People, Story 3 |
| **Mei-Lin Hsu** | pre-owned sourcing, papers and movement checks | Pre-owned, People |
| **Jonas Albrecht** | Saturday counter, bracelet sizing, dispatch | Delivery & returns, People |

### Watches = WooCommerce products (5; fictional makers, no real brands)
| # | Product | Maker (fictional) | Category | Case / movement | Price | Image | Vertical tab |
|---|---|---|---|---|---|---|---|
| 1 | **Aldren Square 28** | Aldren (Biel workshop) | Hand-wound | 28 mm square steel, cream dial, hand-wound, 42 h | **€1,420** | P1 | HAND-WOUND |
| 2 | **Nordhaven Tide 39** | Nordhaven (Aarhus) | Automatic | 39 mm round steel, slate dial, automatic, 100 m | **€1,640** | P2 | AUTOMATIC |
| 3 | **Vell Field 36** | Atelier Vell (Lyon) | Hand-wound | 36 mm steel, matt black dial, hand-wound | **€1,280** | P3 | HAND-WOUND |
| 4 | **Corvo Dress 34** | Corvo Uhren (Pforzheim) | Automatic | 34 mm steel, silver dial, brown calf strap | **€1,150** | P4 | AUTOMATIC |
| 5 | **Calendar 35, 1968** | pre-owned, unbranded on site | Pre-owned | 35 mm steel, date, serviced by Tomasz | **€980** | P5 | PRE-OWNED |
Categories: Hand-wound, Automatic, Pre-owned. Tags: steel, leather-strap, bracelet, under-36mm, serviced. Featured (home strip): all five, order 1–5. Every product description names the case size, movement and price exactly as above.

### Service price list (8 items, The bench; home shows items 4–7)
| # | Service | Note | Price |
|---|---|---|---|
| 1 | Visit and fitting at the counter | 45 minutes, by appointment | **Free** |
| 2 | Bracelet or strap sizing | free with any watch from the list | **€15** |
| 3 | Strap change | fitting only | **€20** |
| 4 | Leather strap by Rafael Ortega | calf or suede, made to your wrist | **€85** |
| 5 | Timing check and demagnetising | same day | **€45** |
| 6 | Full service, hand-wound | 4–6 weeks, 12-month warranty | **€290** |
| 7 | Full service, automatic | 4–6 weeks, 12-month warranty | **€340** |
| 8 | Crystal replacement | mineral or sapphire | **from €60** |

### Stories (4 journal posts = the "cases"; no claims, no real people)
1. **A square watch for a left wrist** — Aldren Square 28, crown on the "wrong" side, chosen after three visits (K10).
2. **Tide 39, one winter of rain** — a cyclist's daily watch, timing check after six months (K11).
3. **Re-strapping a 1968 calendar** — the pre-owned Calendar 35 on Rafael's brown suede strap (K4).
4. **Three on the tray: how a visit goes** — Amara's 45 minutes, step by step (K2).

### Visit process (4 steps, written as numbered paragraphs, never a step grid)
1. Book a 45-minute slot online or by phone. 2. Tell us what you wear now and your wrist size. 3. We set three watches out on the felt tray. 4. Try, size and take a week — we hold your choice for 7 days.

---

## 1. Signature techniques (three, obvious at a glance; from BREDA)

### T1. Two-pane crossfading window — "the watch | the wrist" (BREDA hero slider)
- **Reference** (https://breda.jp/, first screen, `ref/breda-first.png`): two photographs side by side, **50% / 50%**, full pane height **724 px** at 1440 (RT(c)), **square corners, no gap, no border** (RT(d)); left a macro of one watch, right a wearer with watches on the wrist. The pair crossfades **1000 ms every 6400 ms** (RT(g)); mid-fade both layers overlap → a double-exposure moment.
- **Kaname, home hero** (`front-window`): a **framed window** (row hero = framed-window): the two-pane block is inset **32 px** from the left/right page edges (desktop), sits **15 px** under the 65 px header (hero top at y 80, exactly as BREDA), height `clamp(420px, 50.3vw, 724px)` (= 724 at 1440). Left pane = K1 (one watch on felt), right pane = K2 (wrist on the tray, second watch slid in). Second pair: K3 | K4. Square corners, panes touch at the centre (0 gap). Frame detail: a 1 px `rgba(255,255,255,.35)` rule inset **14 px** inside the window (the edge of a glass counter); no outer border, no shadow.
- **Motion**: CSS keyframes only (no slider JS). Pair A visible 0–6.4 s, 1 s crossfade to pair B (both panes in sync, both layers at ≈50% mid-fade = the double exposure), pair B 6.4 s, 1 s back. Cycle **14.8 s**, `animation-timing-function: linear` for opacity. `html.sp-no-motion`, `prefers-reduced-motion: reduce`, `?sp-static` and the editor → pair A only, opacity 1, no animation. Pair B images are `loading="lazy"` but present in the DOM (they count as image positions).
- **Must not be diluted**: both panes photographic and full height; exactly 50/50; corners 0; no text other than the T2 caption bar on the window; no dark overlay above 10%; the crossfade must be visible in `?sp-motion`.

### T2. Translucent taupe caption bar across the bottom of the window (BREDA hero h3)
- **Reference**: a strip across the bottom **89 px** of the hero, background `rgba(160,146,129,.6)`, white type centred: name **30px/42px**, weight 400, ls 1.6 px; one line **18px/27px** weight 300 (RT(b)). Enters with opacity + translate up ≈30 px in **.4 s** (RT(g)).
- **Kaname**: bar inside the window, `position:absolute; left:0; right:0; bottom:0; min-height:89px`, bg `rgba(160,146,129,.6)` (`#A09281` @ 60%), `backdrop-filter: none`. Content is a **centred narrow column** (max-width 640 px; row first_screen = centred-narrow-column): h1 `THE SHORT LIST` Hanken Grotesk 400 **1.875rem / 1.4**, ls **0.13em**, uppercase, white; line under it Onest 300 **1.125rem / 1.5**, white: "Twelve watches at most, chosen one at a time. Three on the tray today." One static caption only (no per-slide captions — avoids stacked hidden text).
- **Motion**: on load `kw-rise` 400 ms `ease`, translateY(24px)→0 + opacity 0→1, delay 200 ms; disabled under `sp-no-motion`/reduced motion/editor.
- **Re-used** (the bar is the Kaname device everywhere a photo needs a name): parallax tray band (home), the two chapter photos (home), every inner-page window, single-product gallery main image, single post featured image. Inside a photo the bar is always full photo width, bottom aligned, the same taupe, white type.
- **Must not be diluted**: taupe must stay `rgba(160,146,129,.6)` (not grey, not black scrim, not opaque), height ≥ 72 px desktop, white type centred, name uppercase with 0.13em tracking.

### T3. Four square photo tiles directly under the window, labels bottom-left (BREDA ABOUT / TOPICS / LOOK BOOK / COLLECTION)
- **Reference**: 4 square photos **359 × 359** directly under the hero, **1 px white gaps**, label h2 **20px/28px**, ls 2 px, white, bottom-left (x +36 px), thin dark scrim only for legibility (RT(b)(c)(e)). Images fade in 1000 ms on view (RT(g)).
- **Kaname** (`front-tiles`): same inset as the window (32 px sides), 1 px below the window, 4 columns with **1 px** gaps → each ≈ **343 × 343** at 1440, `aspect-ratio:1/1`, `object-fit:cover`, radius 0. Bottom-left label: Hanken Grotesk 400 **1.25rem/1.4**, ls **0.1em**, uppercase, white, `left:36px; bottom:28px`; a bottom gradient scrim `linear-gradient(to top, rgba(0,0,0,.35), transparent 45%)`. Tiles (image → link): K5 **HOW WE CHOOSE** → /how-we-choose · K6 **TWO IN FULL** → /stories · K7 **VISIT THE COUNTER** → /visit · K8 **THE SHORT LIST** → /shop. Hover: image opacity .7, .3 s ease (RT(g)).
- **Must not be diluted**: squares (not 4:5, not cards with text below), 1 px gaps (not 16/24 px), labels on the photo bottom-left, row starts within the first screen (visible at 1440×900: top of tiles at y ≈ 805).

### Supporting (not counted as signatures, but implement)
- **S-a Pick-up strip with vertical tabs and square pager** (BREDA PICK UP, RT(c)(f)): see home #5 — 5 product cards in one row, a white **28 × 92** tab top-left of each card with the category set vertically (`writing-mode: vertical-rl`, 0.625rem, ls 0.2em), 12×12 square pager below.
- **S-b Caps grotesk UI**: all nav, labels, section titles uppercase Hanken Grotesk with 0.13em tracking, zero radius, zero shadow, hairlines only (RT(b)(d)).
- **Vermillion (mood only)**: the warm low light falling on a hand in K2/K4/K10 — no gradient sky, no red type, nothing else taken.

### Continuation into inner pages (all pages; ≥ 4 required)
Every inner page = **T1 small window** (two panes, height `clamp(300px, 32vw, 460px)`, same 32 px inset, static pair — no crossfade except Shop, which crossfades two pairs) **+ T2 caption bar** carrying the page name (h1, 1.875rem caps) and one line → page body (alternating longform) → **T3 tile row** (4 squares linking to four other pages, 1 px gaps, same labels style) above the footer.

Tile image per page (fixed, used whenever a tile links to that page): Shop K8 · How we choose K5 · Stories K6 (home only) / Journal K11 (inner pages) · Visit K7 · The bench K12 · People K13 · Straps & sizing K4 · Pre-owned P5 · Delivery & returns K9.

| Page | T1 window (left \| right) | T2 caption (name / line) | Body photos | T3 tiles (4) | No repeat on page |
|---|---|---|---|---|---|
| Shop `/shop` (archive-product, taxonomy, search) | K8 \| K6, crossfade to K9 \| K1 | THE SHORT LIST / Five on the list today. Never more than twelve. | product cards P1–P5 | How we choose K5 · The bench K12 · Visit K7 · Journal K11 | ✓ |
| Single product | gallery: packshot P# \| wrist (P1→K10, P2→K11, P3→K4, P4→K2, P5→K3) | product name / case · movement | — | How we choose K5 · The bench K12 · Visit K7 · Delivery K9 | ✓ |
| How we choose | K5 \| K1 | HOW WE CHOOSE / Four questions before a watch joins the list. | K3, K6 | Shop K8 · The bench K12 · Pre-owned P5 · Visit K7 | ✓ |
| The bench (service & prices) | K12 \| K3 | THE BENCH / Service, straps and prices. | K5 | Shop K8 · Visit K7 · Straps K4 · Delivery K9 | ✓ |
| Visit (contact) | K7 \| K13 | VISIT THE COUNTER / Forty-five minutes, three watches, no hurry. | K2; parallax band K9 | Shop K8 · How we choose K5 · The bench K12 · Journal K11 | ✓ |
| People | K13 \| K2 | PEOPLE / Six of us, one counter. | — | How we choose K5 · The bench K12 · Visit K7 · Straps K4 | ✓ |
| Straps & sizing | K4 \| K2 | STRAPS & SIZING / Made to your wrist in Porto. | K10 | Shop K8 · The bench K12 · Visit K7 · Delivery K9 | ✓ |
| Pre-owned | P5 \| K8 | PRE-OWNED / Papers checked, movement opened. | K3 | How we choose K5 · The bench K12 · Visit K7 · Delivery K9 | ✓ |
| Delivery & returns | K9 \| K6 | DELIVERY & RETURNS / Insured, 14 days to decide. | — | Shop K8 · Pre-owned P5 · Visit K7 · The bench K12 | ✓ |
| Journal / Stories (index, archive) | K1 \| K6 | STORIES / Watches told in full. | posts K10, K11, K4, K2 | Shop K8 · Visit K7 · The bench K12 · How we choose K5 | ✓ |
| Single post | one-pane window = featured image (full window width, 16:9) + T2 bar with the title | post title / date | — | same as Journal | ✓ |
| Cart / Checkout / My account / Order confirmation | no window; page title in a **T2 bar on a solid `#4A4036` strip** (89 px, inset 32 px) | CART / … | — | none | ✓ |
| 404 / search | K9 \| K7 | NOT ON THE LIST / … | — | Shop K8 · Visit K7 · The bench K12 · How we choose K5 | ✓ |

---

## 2. Key visual concept

### (1) Reference first screen (breda.jp)
- **What is drawn**: under a slim white 65 px bar (spaced-capital wordmark left, mono caps nav right), a 50/50 split of two large photographs: **left** a pale studio macro of one square steel watch on its bracelet lying on a cream surface; **right** a woman resting her face on her wrist, watches on both arms, warm soft light. The two photos dissolve into each other (double exposure mid-fade). A translucent taupe band across the bottom carries the model name and one line. Four square photo tiles start right below the hero.
- **Story**: "this watch lives on a real wrist, not just in a case" — object and wearer shown together, calm, no price shouting.
- **Signature motion**: pair crossfade 1000 ms every 6400 ms; caption rises .4 s; tiles and section images fade in 1000 ms on view; header hides on scroll down.

### (2) Our translation (watch shop, same composition, same motion idea, same image type: photo)
- **Scene**: the shop's glass counter at low light. **Left pane** = low-key macro of one mechanical watch (Aldren Square 28, square steel case — the same "one square watch, close" as BREDA) lying on dark charcoal-brown wool felt inside the counter, warm tungsten edge light, a soft reflection of the counter glass along the top. **Right pane** = a visitor's wrist (sleeve of an oatmeal knit, no face) resting on the felt tray on top of the counter while Ilse's hand slides a second watch toward it. Pair B: the Nordhaven Tide 39 beside a brass loupe | a wrist wearing it, the other hand closing the buckle.
- **Story**: "The watch, then the wrist" — every watch on the short list is shown to you on the tray and tried on your own wrist; that is the whole shop.
- **Motion**: the same crossfade (1000 ms / 6400 ms, double exposure mid-fade), caption bar rises 400 ms, tiles fade in 1000 ms (staggered 0.12 s). Header: sticky, no hide (hide-on-scroll needs a scroll listener, forbidden).
- "Adapted, not copied" applies only to pixels, copy and logo: the two-pane watch/wrist scene, the taupe bar and the tile row are all built.

### (3) KV checklist (all on the home first screen, visible at 1440×900; at 390×844 rows 1–4 visible)
| # | Reference element | Our counterpart | Position | Motion | Which image |
|---|---|---|---|---|---|
| 1 | Left pane: a light studio close-up of one square watch | One square mechanical watch (Aldren Square 28) lying on deep charcoal-brown felt inside the glass counter, low-key tungsten side light, glass reflection along the top edge | Left 50% of the framed window, full height 724px (phone 50% x 440px) | 1000ms / 6400ms crossfade, double exposure in the middle | **K1** (second set **K3**) |
| 2 | Right pane: the wearer's wrist and watch | A visitor's wrist (oatmeal knit sleeve, no face) resting on the felt tray on the counter, the owner's hand sliding a second watch across | Right 50% of the framed window, full height | Crossfade in sync with the left pane | **K2** (second set **K4**) |
| 3 | Translucent grey-brown caption bar at the bottom: model name plus one line | Same-colour `rgba(160,146,129,.6)` bar, h1 "THE SHORT LIST" plus one line "Twelve watches at most… Three on the tray today." centred in a 640px narrow column | Bottom 89px of the framed window, full width (phone 72px) | On load, rise 24px and fade in 400ms ease | — |
| 4 | Four square photographs along the bottom edge of the first screen, white label at the lower left, 1px gap | Four low-key photographs: loupe (HOW WE CHOOSE), two watches (TWO IN FULL), evening counter (VISIT THE COUNTER), twelve-slot felt tray (THE SHORT LIST) | 1px under the framed window, 343x343 (at 1440), about 95px of the top edge shows on the first screen; phone 2x2 | Fade in 1000ms on enter, sp-stagger 0.12s steps | **K5 K6 K7 K8** |
| 5 | Slim white top bar, even-width uppercase navigation | White 65px centred top bar: `KANAME` wordmark in the centre, three uppercase items left and three right (letter-spacing .13em) | Top 0-65px | sticky, never hides (no scroll listener) | — |
| 6 | Product focus row plus a vertical "NEW ARRIVAL" white label | "IN THE COUNTER" five product cards plus vertical category white labels plus 12x12 square pager dots (first product band below the first screen) | Home #5 (below the fold, immediately after the intro) | The card row fades in as a whole, 1000ms | **P1-P5** |

Rows 1–5 are built in the first screen and must be visible; row 6 is the first product section below. All images are listed in section 8.

---

## 3. Colour (BREDA hex, RT(a); ≤ ±5% lightness; one row colour added)

| Role | Hex | Source token | Use | Share |
|---|---|---|---|---|
| Ground | `#FFFFFF` | RT(a) base | page ground, header, gaps between tiles/panes' frame margins | ≈ 9% of first screen, ≈ 55% of a page |
| Ink | `#000000` | RT(a) text | nav, titles, body, hairlines, pager active, TOP box border | type only |
| Caption taupe | `rgba(160,146,129,.6)` (= `#A09281` @ 60%) | RT(a) caption bar | T2 bars only | ≈ 10% of first screen |
| Footer cream | `#F9F5EE` | RT(a) footer | footer, visit panel, cart summary column | ≈ 8% |
| Card grey | `#F4F4F4` | RT(a) pick-up card | product card info area, quantity fields, table header row | ≤ 4% |
| Meta grey | `#666666` | RT(b) meta lines | dates, categories, notes column of tables | type only |
| Pager / rule grey | `#EEEEEE` | RT(c) pager dots | inactive pager squares, table rules (`#E0E0E0` for rules) | tiny |
| **Kuro-cha (row)** | `#4A4036` | design-plan row kuro-cha | filled buttons (Add to cart, Book a visit) with white text, cart/checkout title strip, link hover colour, focus ring | ≤ 3% of any page; never a section background except the cart title strip |

- BREDA has no accent colour; the only colour lives in the photographs. Kaname keeps that: the kuro-cha mass comes from the **low-key photos** (felt, counter, shadow), not from UI fields. Reason for the one added UI colour: the row palette kuro-cha and a buy button that is not pure black on a store; contrast white on `#4A4036` = 10.4:1.
- Deviation from BREDA (written reason): BREDA photos are pale/high-key; the row demands **low-key** photography, so the photo tone is dark warm umber. All UI hex values are BREDA's exactly.
- **First-screen saturation cap**: reference 0.1% → `check-first-screen.py` gate **15%** (row note cap 30%, pipeline cap 15% — take the lower), target **≤ 6%**. Achieve it with the STYLE grade (low saturation; felt is charcoal-brown, not orange; tungsten light warm but desaturated). Regenerate any hero/tile photo that pushes the share over 6%.

## 4. Type (font_direction **sans**)

- Latin display / UI: **Hanken Grotesk** (300, 400, 500) — the wide-tracked caps grotesk standing in for BREDA's ballinger-mono (RT(b)). Latin body: **Onest** (300, 400, 500).
- CJK: **Noto Sans TC** (zh-TW) and **Noto Sans JP** (ja), 400/500, gothic for both headings and body. No serif anywhere, no mincho.
- Stacks (theme.json fontFamilies):
  - `display`: `"Hanken Grotesk", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`
  - `body`: `"Onest", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`
  - `:lang(ja)` reorders to `"Hanken Grotesk"/"Onest", "Noto Sans JP", "Noto Sans TC", …`; `:lang(zh-TW)` keeps TC first → copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it in functions.php.
- Loading: **theme.json `fontFace` only** (woff2 in `assets/fonts/`), so the block editor iframe and the front end use the same fonts; zh-TW / ja subsets made the Hokuto / Hada way (the subset script is broken). `check-editor-fonts.mjs` must pass in en and zh-TW.

| Preset | Size | Line-height | Weight / tracking | Use | Source |
|---|---|---|---|---|---|
| small | 0.8125rem (13 px) | 1.6 | 400, ls 0.13em, caps | meta lines, vertical tabs (0.625rem), table notes | RT(b) meta 16→13 for density |
| base | 1rem (16 px) | 1.5 (UI) / **1.75 (paragraphs)** | 400; UI ls 0.13em, paragraphs ls 0.04em | nav (0.875rem, ls 0.11em = 1.6 px), body | RT(b) body 16/24, nav 14/45 |
| medium | 1.125rem (18 px) | 1.5 | Onest 300 | T2 caption line, lead paragraphs | RT(b) caption sub 18/27 |
| large | 1.25rem (20 px) | 1.4 | 400, ls 0.1em caps | T3 tile labels, card names | RT(b) tile h2 20/28 |
| x-large | 1.875rem (30 px) | 1.4 | 400, ls 0.13em caps, centred | T2 caption name (h1 on home/inner), home section titles | RT(b) caption h3 30/42, section titles 28–30 |
| xx-large | 2.75rem (44 px) | 1.15 | 300, ls 0.06em caps | inner long-form chapter headings, people names on People | scale step |
| huge | **4.25rem (68 px)** | 1.05 | 300, ls 0.04em caps, **left-aligned** | the two watch names in home "Two in full" (SQUARE 28 / TIDE 39) and the price numbers on Delivery & returns (€18 / 14) | theme max (rule ≥ 4.25rem) |

- Paragraph tracking deviates from RT(b) 0.13em → 0.04em: BREDA's long text is short meta; Kaname has 250+ words of long-form and needs readable paragraphs. All caps UI keeps 0.13em.
- CJK: sizes ≈ 0.75× of the English display sizes (huge → 3.2rem, xx-large → 2.1rem, x-large → 1.5rem), body 1rem, line-height **1.85**, tracking 0.04em, no uppercase transform. fr/de: `hyphens:auto` on paragraphs and headings.
- Mobile: huge → `clamp(2.75rem, 9vw, 4.25rem)`; x-large → 1.375rem in the hero bar.

## 5. Layout tokens

| Token | Value | Source |
|---|---|---|
| Header | 65 px, white, **sticky** (`position:sticky; top:0`), 1 px `#EEEEEE` bottom rule after the hero only (always on is fine) | RT(c) |
| Header layout (row nav = centred) | wordmark `KANAME` centred (Hanken Grotesk 500, 1.375rem, ls 0.32em; under it `WATCHES` 0.5625rem ls 0.4em); nav left: SHORT LIST · HOW WE CHOOSE · THE BENCH; nav right: STORIES · VISIT · CART (n). 0.875rem, ls 0.11em, padding 0 24 px | RT(b) nav |
| Hero top | y 80 (15 px under header) | RT(c) |
| Window inset | 32 px left/right ≥ 1024; 20 px 600–1023; 12 px < 600 | row framed-window |
| Window height | home `clamp(420px, 50.3vw, 724px)`; inner `clamp(300px, 32vw, 460px)` | RT(c) 724 |
| Gaps | 1 px between tiles, between window and tiles, between product cards (BREDA 2 px for pick-up → use 2 px there) | RT(c) |
| Section rhythm | 96 px desktop / 64 px mobile between sections; section title → content 30 px | RT(c) 75–110 / 30 |
| Text column (centred narrow) | max 640 px | row first_screen |
| Long-form columns | 12-col grid inside the 32 px inset; photo 7/12, text 5/12, gap 64 px | row alternating-longform |
| Radius | **0** everywhere (buttons, cards, inputs, images) | RT(d) |
| Borders | none on blocks; 1 px `#E0E0E0` table rules; TOP box 70×48, 1 px `#000` | RT(d) |
| Shadow | none | RT(d) |
| Buttons | `#4A4036` fill, white Hanken Grotesk 0.8125rem caps ls 0.13em, padding 16 × 32, radius 0; hover `#000` .3 s | row hex |
| Text links | ink, caps 0.8125rem ls 0.13em, preceded by a 16 px circle-arrow icon (outline 1 px) | RT(f) news link icon |
| Image hover | opacity .7, .3 s ease | RT(g) |
| Footer | `#F9F5EE`, margin-top 50 px, padding 30 px 30 px 0 → inner 64 px top on desktop | RT(c) |

---

## 6. Home (en) — section order

Page structure = **alternating-longform**: after the window and tiles, prose sections alternate photo-left / photo-right; no grids of cards except the product strip.

| # | Pattern slug | Purpose | Layout and photos | Copy (en) |
|---|---|---|---|---|
| 0 | header | nav | centred wordmark, 3 + 3 caps links, sticky | — |
| 1 | `front-window` | **KV** | T1 framed two-pane window K1 \| K2 (→ K3 \| K4), T2 bar with h1 THE SHORT LIST + one line | 20 words |
| 2 | `front-tiles` | entries | T3 four squares K5 K6 K7 K8 directly under the window | 4 labels |
| 3 | `front-list` | why a short list (centred narrow column) | centred x-large caps title **WHY A SHORT LIST**, then a 640 px centred column: 2 paragraphs (founded 2012 in Ghent; never more than twelve; every watch hand-checked by Tomasz) + text link → How we choose. No photo. | 110 words, 2 paragraphs |
| 4 | `front-tray` | **parallax** — the row signature photo | full-width framed band (32 px inset), height `clamp(320px, 39vw, 560px)`, K9 three watches on the felt tray in the counter, `sp-parallax`; T2 bar: name **ON THE TRAY TODAY**, line "Aldren Square 28 · Nordhaven Tide 39 · Vell Field 36" | 12 words |
| 5 | `front-counter` | products (BREDA PICK UP) | centred title **IN THE COUNTER**; 5 product cards in one row, 2 px gaps, full inset width (≈ 273 px wide at 1440); card = 1:1 packshot P1–P5 (low-key felt ground fills the card) + under it on `#F4F4F4`: name (large, caps), case line (small, meta grey), price (base, ink, `€1,420`); white 28×92 tab top-left with the category vertical. 5 square pager squares 12×12, 11 px gap, centred 35 px below (active `#000`, others `#EEEEEE`; each is an anchor to its card). Link "ALL WATCHES ON THE LIST" → /shop. WooCommerce on: Product Collection (featured, 5) with the same markup; off: static images linking to /shop. Mobile: horizontal scroll-snap row, 78% card width. | 25 words + product data |
| 6 | `front-choose` | how the shop chooses (alt row: photo left) | photo K12 (watchmaker's hands at the bench) 5/12 left, 4:5; text 6/12 right: x-large caps title **HOW WE CHOOSE**, a 50-word paragraph by Ilse, then four numbered lines (01–04, each one sentence: *Does it keep good time after a week on Tomasz's bench? / Can it be serviced in ten years? / Does it sit flat on a 15 cm wrist? / Would we wear it ourselves?*), `sp-stagger`. Text link → How we choose. | 120 words |
| 7 | `front-full` | **two watches told in full** (alt rows) | centred title **TWO IN FULL**. Chapter I: text 5/12 left — label `I · HAND-WOUND · 28 MM` (small caps), name **SQUARE 28** in huge (4.25rem, left), 2 paragraphs, spec lines (case 28 mm steel · hand-wound, 42 h · calf strap · €1,420), link → product; photo K10 7/12 right, 4:5, with a T2 bar "ALDREN SQUARE 28 / On a left wrist". Chapter II mirrored: photo K11 left with T2 bar "NORDHAVEN TIDE 39 / One winter of rain", text right — label `II · AUTOMATIC · 39 MM`, name **TIDE 39** huge, 2 paragraphs, specs (39 mm steel · automatic · 100 m · €1,640). | 2 × 100 words |
| 8 | `front-bench` | service + prices (centred narrow) | centred title **THE BENCH**; 640 px paragraph by Tomasz (40 words); then a price list of items 4–7 from section 0 at **full content width** (inset 32 px; ≥ 782: three columns service / note / price, price `white-space:nowrap; text-align:right; width:1%`); link → The bench (full list, 8 items). | 50 words + 4 rows |
| 9 | `front-visit` | arrange a visit (BREDA SERIES split) | two halves, full inset width, no gap: left K13 (counter, Amara with a visitor) 50%, ≈ 16:10, label **VISIT** top-left at 54 px (white, x-large caps) with one line under it; right half `#F9F5EE` panel, padding 64 px: the 4 visit steps as numbered paragraphs, hours (Tue–Fri 11–18, Thu until 20, Sat 10–17), address, button **BOOK A VISIT** (`#4A4036`). | 90 words |
| 10 | footer | facts | `#F9F5EE`; wordmark; address, hours, email, phone; nav columns (Shop · How we choose · The bench · Stories / Visit · People · Straps & sizing · Pre-owned · Delivery & returns); "© 2012–2026 Kaname Watches"; TOP box 70×48 (1 px black, `▲ TOP`, anchor `#top`) bottom-right of the footer (static, not fixed). | — |

English home ≥ 250 words (≈ 520 planned) with narrative paragraphs in #3, #6, #7 and #9 (≥ 3). CJK home ≥ 500 characters.

### First-screen composition (1440 × 900)
- y 0–65: white header, centred wordmark, 3 + 3 caps nav.
- y 80–804: framed window (x 32–1408), K1 | K2, T2 bar y 715–804 with h1 + line, centred 640 px column.
- y 805–900: top 95 px of the four K5–K8 tiles (labels sit at the bottom of each tile, just below the fold — like BREDA's labels at y 844, set `bottom:28px` so the labels land around y 1120; acceptable).
- Forbidden in the first screen: table, form, search box, coloured buttons, giant centred word, any vertical text, cut-outs.

### Mobile first screen (390 × 844)
- Header 56 px: `MENU` text button left, wordmark centred, `CART` right. Overlay menu (full screen white, caps list, 1.25rem).
- Window: inset 12 px (366 px), height 440 px, panes 183 × 440 each (focal points: K1 the watch dial, K2 the two hands), T2 bar 72 px: h1 1.375rem + line 0.875rem, both inside the bar, ≤ 2 lines each, no absolutely positioned labels outside the bar, **no vertical text**.
- Tiles below as 2 × 2 squares (182 px each, 1 px gaps), labels 0.9375rem bottom-left 16 px.

### Comparison with recent home pages (no similarity)
| # | Isso Relocation | Hakari Course | Nuno Workwear | Naru Clinic | **Kaname Watches** |
|---|---|---|---|---|---|
| 1 | dark photo / grey gradient halves, vertical lines, giant seam wordmark | full-bleed photo, 88 px bottom corners, hashtag strip | full-bleed workshop + giant two-line headline | photo + 3-layer wave + capsule | **inset window of two photos crossfading, taupe caption bar, no headline over photo** |
| 2 | concept ( 01 ) | white rounded panel | shop statement | problem (blob pair) | **four square tiles, 1 px gaps** |
| 3 | Saturday parallax trio | tilted photo rows | trades card mosaic | method panel | **centred narrow text (why a short list)** |
| 4 | method | syllabus panel | ink band mask reveal | services blue band | **parallax tray band with caption bar** |
| 5 | weekend rail | instructor | fit rows | case | **product strip, vertical tabs, square pager** |
| 6 | one move story | parallax practice | price list | clinic & people | **photo-left long-form + 4 numbered questions** |
| 7 | price table | … | crew orders | … | **two chapters alternating, names at 4.25rem** |
| 8 | … | … | … | … | **bench prices (4 rows), then visit split panel** |
Why not alike: Isso's halves are one photo + one gradient panel with a seam-crossing wordmark and vertical lines; Kaname's window is two photographs that crossfade, framed with white margins, with only a translucent bar — no wordmark, no lines. Nobody in the set uses square tiles under the hero, a product strip with vertical tabs, or name-led long-form chapters. No wave, blob, tilted rows, rounded panels, card mosaic, hashtag strip or giant headline. No people grid, step grid, timeline or dashboard.

---

## 7. Inner pages (10 + WooCommerce templates) — industry core

All: T1 small window + T2 bar (h1) → body → T3 tiles (section 1 table). Body text column 640 px for prose, long-form rows 7/12 + 5/12 alternating. No sidebar.

1. **Shop** (`archive-product.html`, `taxonomy-product_cat.html`, `product-search-results.html`): window crossfades K8 | K6 → K9 | K1. Intro line (centred narrow, 40 words: never more than twelve, each one checked). Category row as caps text links (ALL · HAND-WOUND · AUTOMATIC · PRE-OWNED, active underlined 1 px). Result count left, ordering right (caps small). Grid 3 columns ≥ 1024 / 2 tablet / 1 mobile, **2 px gaps**, cards identical to home #5 (1:1 packshot, vertical white tab, info on `#F4F4F4`). Add to cart = caps text link with circle arrow. Pagination = 12×12 squares + numbers. Fallback without WooCommerce: static 5 cards + "The shop opens when WooCommerce is active".
2. **Single product** (`single-product.html`): left 7/12 gallery: main image in a framed window (1:1) with T2 bar (product name / case · movement), thumbnails 2 below (packshot, wrist image), 2 px gaps; right 5/12: category caps small, title xx-large caps, price medium, short description, spec list (case, movement, power reserve, water resistance, strap, warranty 2 years / 12 months pre-owned), quantity + **ADD TO CART** (`#4A4036`), line "Insured EU delivery €18, free over €1,000 · 14-day returns" + text link **BOOK A VISIT TO TRY IT** → /visit. Below: tabs (Description · On the wrist · Service) and related products (3, same cards).
3. **How we choose** (`page-how-we-choose`): long-form: Ilse's intro (founded 2012, why twelve), then the four questions as four alternating rows (question as xx-large caps heading + 2 paragraphs; rows 1 and 3 with photos K3 and K6, rows 2 and 4 text-only in the 640 column); closing paragraph on what gets taken off the list. ≈ 600 words.
4. **The bench** (`page-the-bench`): Tomasz's paragraphs (timing check, full service, parts), photo K5 7/12 with text 5/12, then the **full price table (8 items)** at full content width (rules in section 9), turnaround and warranty lines, then "How to send a watch for service" (4 numbered paragraphs).
5. **Visit** (`page-visit`, the contact page): the 4 visit steps as long-form numbered paragraphs with K2 beside steps 3–4; parallax band K9 (`sp-parallax`) with T2 bar "THREE ON THE TRAY"; hours table (stacks on mobile), address, phone, email, "How to find us" (tram line / bike racks, fictional), button BOOK A VISIT (mailto or WooCommerce-free booking via email). No map embed, no form required.
6. **People** (`page-people`): six people as **alternating long-form rows of text** (name xx-large caps, role small caps, 60-word paragraph each), separated by 1 px rules; no portrait grid, no 4-person cards. (Photos: none of faces; head window K13 | K2 carries the people.)
7. **Straps & sizing** (`page-straps-sizing`): Rafael's strap workshop in Porto (calf / suede, €85), how to measure a wrist (4 numbered paragraphs), lug-width and wrist-size table (sizes 14–19 cm → strap length S/M/L; stacks on mobile), photo K10 alternating with text.
8. **Pre-owned** (`page-pre-owned`): Mei-Lin's checks (papers, movement opened, timing after service), warranty 12 months, current pre-owned piece (Calendar 35, 1968, €980) with link; photo K3.
9. **Delivery & returns** (`page-delivery-returns`): two huge numbers **€18** and **14** (4.25rem, left-aligned) each with a caps label and two sentences; paragraphs on insured EU delivery (free over €1,000, dispatched within 2 working days), returns (14 days, unworn, film on), warranty (2 years / 12 months), service shipping. Jonas named.
10. **Stories** (`home.html` index, `archive.html`, `single.html`): index = alternating rows (featured image 7/12 with T2 bar = title, excerpt 5/12, date meta grey caps) for the 4 posts; single = one-pane window (featured image, T2 bar with title), 640 px text, prev/next as caps links.
11. **Cart / Checkout / My account / Order confirmation**: title in a T2 bar on a `#4A4036` strip; main column white; summary column `#F9F5EE`; tables stack on mobile; buttons `#4A4036`; notices with a 2 px `#4A4036` left rule.
12. **404 / search results**: window K9 | K7, T2 "NOT ON THE LIST", text link back to the short list.

Menu (one top menu only): Short list (/shop) · How we choose · The bench · Stories · Visit · Cart. Footer adds People, Straps & sizing, Pre-owned, Delivery & returns.

---

## 8. Images (18, all photos, one STYLE)

**Imagery: photo to documentary photograph STYLE** (stage-a IMAGERY: photo; row photo_direction low-key). Grok via `IMAGE_STYLE="<STYLE>" scripts/grok-image.sh out.webp "<subject>"`, one at a time, Read every image; regenerate any with text, numerals or logos on dials, readable letters, broken hands or fingers, warped cases, or style drift. ≤ 300 KB, ≤ 2000 px, webp, **0 cut-outs**; one readme line each (AI-generated, CC0).

STYLE (exact, every prompt):
`low-key documentary photograph shot on 35mm film, soft fine grain, warm desaturated tungsten side light with deep soft shadows, dark charcoal-brown wool felt and a smoked glass shop counter with soft reflections, muted palette of umber, dark brown, warm grey, brushed steel and cream, low colour saturation, quiet modern international watch shop, diverse adults shown as hands and wrists or from behind unless stated, calm unhurried moment, watch dials plain with simple baton indices only, no numerals, no text, no readable letters or numbers, no logos, no brand marks, no signage, no Japanese elements`

| ID | Subject / composition | Ratio | Used on (once per page) | Home |
|---|---|---|---|---|
| **K1** | macro of one square steel mechanical watch (cream dial, calf strap) lying diagonally on dark felt inside a glass counter, reflection band along the top edge, watch centred | 1:1 | Home hero L (pair A); How we choose window R; Journal window L; Shop window (pair B) R | ✔ |
| **K2** | a visitor's wrist in an oatmeal knit sleeve resting on a felt tray on a glass counter, another person's hand sliding a second watch toward it, no faces | 1:1 | Home hero R (pair A); Visit body; People window R; Straps window R; Single product 4 gallery; Story 4 | ✔ |
| **K3** | macro of a round steel watch with a slate dial on felt beside a small brass loupe | 1:1 | Home hero L (pair B); The bench window R; How we choose body; Pre-owned body; Single product 5 gallery | ✔ |
| **K4** | a wrist wearing a round watch on a dark brown leather strap, the other hand closing the buckle, counter glass edge reflection | 1:1 | Home hero R (pair B); Straps window L; Single product 3 gallery; Story 3 | ✔ |
| **K5** | watchmaker's loupe held over an open mechanical movement on a bench mat, close | 1:1 | Home tile HOW WE CHOOSE; How we choose window L; The bench body; tiles on other pages | ✔ |
| **K6** | two watches lying side by side on felt, overhead, generous dark space | 1:1 | Home tile TWO IN FULL; Shop window R; How we choose body; Delivery window R; Journal window R | ✔ |
| **K7** | the empty glass counter from the visitor's side at evening, one warm lamp, felt trays inside | 1:1 | Home tile VISIT; Visit window L; 404 window R; tiles elsewhere | ✔ |
| **K8** | overhead felt tray with twelve slots, five filled with watches, seven empty | 1:1 | Home tile THE SHORT LIST; Shop window L; Pre-owned window R; tiles elsewhere | ✔ |
| **K9** | wide: three watches on a felt tray inside a glass counter, low-key, reflections, space above for parallax travel | 21:9 (2000×860) | Home tray band (parallax); Visit parallax band; Shop window (pair B) L; Delivery window L; 404 window L | ✔ |
| **K10** | slim left wrist wearing a small square watch, crown on the left side, white shirt cuff, side window light | 4:5 | Home chapter I; Straps body; Single product 1 gallery; Story 1 | ✔ |
| **K11** | wrist wearing a round slate-dial watch resting on a dark wooden table by a rain-streaked window | 4:5 | Home chapter II; Single product 2 gallery; Story 2; Journal tile | ✔ |
| **K12** | watchmaker's hands opening a caseback at a bench, bench lamp, tools laid out, face out of frame | 4:5 | Home choose; The bench window L; tiles elsewhere | ✔ |
| **K13** | the counter: a staff member (three-quarter back view) and a visitor on the other side, a felt tray between them, faces soft/turned away | 16:10 | Home visit; Visit window R; People window L | ✔ |
| **P1** | packshot: square steel watch, cream dial, tan calf strap, centred on dark felt, front view | 1:1 | Home strip; Shop; Single product 1 | ✔ |
| **P2** | packshot: round 39 mm steel watch, slate dial, steel bracelet, on dark felt | 1:1 | Home strip; Shop; Single product 2 | ✔ |
| **P3** | packshot: round 36 mm steel watch, matt black dial, olive canvas strap, on dark felt | 1:1 | Home strip; Shop; Single product 3 | ✔ |
| **P4** | packshot: round 34 mm steel dress watch, silver dial, brown calf strap, on dark felt | 1:1 | Home strip; Shop; Single product 4 | ✔ |
| **P5** | packshot: vintage 35 mm steel watch with a date window, slightly worn case, brown suede strap, on dark felt | 1:1 | Home strip; Shop; Single product 5; Pre-owned window L; tiles | ✔ |

**Home photo positions: 18** (hero 4 incl. pair B · tiles 4 · tray 1 · strip 5 · choose 1 · chapters 2 · visit 1); no image appears twice on the home page. Every per-page list in section 1 has been checked for no repeats.

---

## 9. Responsive musts

- 390 px first screen: no vertical text, no absolutely positioned labels except the T2 bar *inside* the window and tile labels *inside* tiles; text never overlaps other text; nav collapses to MENU / wordmark / CART.
- No horizontal overflow at 390 and 1280 (product strip scrolls inside its own `overflow-x:auto` container; parallax parent `overflow:clip`).
- **Price tables** (home #8, The bench, Straps size table, Visit hours, Woo cart/totals): at **≥ 782 px** the table is **100% of the content width** (inset 32 px), 3 columns, price column `white-space:nowrap; text-align:right; width:1%; padding-left:24px`, never cut or clipped at 800 and 1280. Below 782 px **every table stacks**: each row becomes a block (service name medium, note small meta grey, price base ink left-aligned), 1 px `#E0E0E0` rule between rows; `thead` hidden visually.
- Window: two panes stay side by side at every width (50/50); T2 bar 72 px under 600 px.
- Long-form rows stack photo-first under 782 px; chapter names `clamp(2.75rem, 9vw, 4.25rem)`.
- Tiles: 4 across ≥ 782, 2 × 2 below.
- Vertical tabs on product cards stay vertical (they are never in the first screen); under 390 their text is 0.5625rem.

## 10. Scroll effects (sp-scroll; 3 effects; hero has no reveal)

Copy `pipeline/assets/sp-scroll/` unchanged to `assets/`; enqueue CSS + JS in head (JS not deferred); `add_editor_style`. Theme CSS variables: `--sp-dur: 1s; --sp-ease: cubic-bezier(.45,.05,.55,.95)` (≈ jQuery swing, RT(g)).

| Effect (sp-*) | Where | Source on BREDA | Trigger / time / easing |
|---|---|---|---|
| **`sp-reveal`** (fade only, no shift; if the base class needs a modifier use `sp-reveal--up` with `--sp-dist:12px`) | home #5 strip **container** (not its cards), #6 photo K12, #7 both chapter photos and both text columns, #9 visit split; inner pages: long-form photos, people rows, story rows | `.fade` images via jQuery `inview` | enters viewport → opacity 0→1, **1000 ms**, swing ≈ `cubic-bezier(.45,.05,.55,.95)`; one-shot (no fade-out, not in sp-scroll) |
| **`sp-stagger`** + `sp-reveal` children | home #2 tiles (each tile `sp-reveal`), home #6 four numbered questions (`sp-reveal--up`, 24 px), inner T3 tile rows | BREDA tiles fade separately on view | 0.12 s steps, 1000 ms each, same easing |
| **`sp-parallax`** | home #4 tray band (K9), Visit parallax band (K9) | BREDA has none — the moving-layer idea comes from its crossfading hero; required by pipeline | see section 11 |

Not used: reveal in the hero (#1), on price tables, forms, Woo templates, or legal text; no `sp-count`, no `sp-marquee`. Hero crossfade and caption rise are theme CSS keyframes, disabled under `html.sp-no-motion`, reduced motion and the editor. No scroll listeners, no GSAP/AOS/Lenis/jQuery.

## 11. Parallax (required)

- **Block**: home #4 `front-tray` — outer Group `alignfull` with the 32 px inset wrapper carrying class `sp-parallax`, `overflow:clip`, height `clamp(320px, 39vw, 560px)`.
- **Background layer**: K9 (21:9) as a direct `figure > img` (or Cover background) — the moving layer, scale 1.18 per sp-scroll.
- **Foreground**: the T2 caption bar (ON THE TRAY TODAY / three names) — **not** inside the moving layer; it sits on the static wrapper at the bottom.
- **Speed**: `--sp-par: 10%` desktop; `@media (max-width:781px) { --sp-par: 7% }` (mobile keeps parallax).
- Same block on **Visit** (`--sp-par: 8%`).
- **Reference motion**: BREDA's hero moves image layers over each other (crossfade double exposure); Kaname turns that "image layer moving under a fixed caption bar" into a scroll-linked layer. reduced-motion / `?sp-static` / editor → no movement, no scale.
- Must pass `check-parallax.mjs` on desktop 1280 and mobile 390 (≥ 6 px layer shift, 0 under reduced motion, ≥ 3 reveals hidden before entry and visible after, nothing transparent at the bottom).

---

## 12. Home acceptance checklist

1. First screen 1440×900: white 65 px header with centred `KANAME` wordmark and 3 + 3 caps nav; framed two-pane window (32 px inset, y 80–804, 50/50, corners 0) with K1 | K2; taupe `rgba(160,146,129,.6)` bar across the window bottom with h1 THE SHORT LIST + one line in a centred 640 px column; tops of four square tiles visible below with 1 px gaps.
2. `?sp-motion`: panes crossfade to K3 | K4 after 6.4 s over 1 s (double exposure visible mid-fade); caption rises once on load. `?sp-static` and reduced motion: pair A, no animation.
3. KV checklist rows 1–6 all present (section 2).
4. Saturated share ≤ 15% (target ≤ 6%) via `check-first-screen.py`.
5. Section order exactly as section 6 (#0–#10); alternating long-form in #6 and #7 (photo left, then text left/photo right, then photo left).
6. T2 bar appears on the hero, the tray band and both chapter photos; T3 tiles under the hero.
7. Product strip: 5 cards, 1:1 packshots P1–P5, white vertical category tabs, prices €1,420 / €1,640 / €1,280 / €1,150 / €980, square pager; links to products work with WooCommerce on.
8. Chapter names SQUARE 28 and TIDE 39 at 4.25rem, left-aligned (theme.json max preset 4.25rem).
9. Bench price list: 4 rows (€85, €45, €290, €340) full content width at ≥ 782 with nowrap right-aligned prices; stacked on mobile.
10. ≥ 18 image positions, no repeat; all images in the STYLE, no dial text or logos.
11. Fonts: Hanken Grotesk + Onest via theme.json fontFace, same in editor; no serif.
12. sp-scroll: tiles stagger, section fades 1000 ms, tray parallax `--sp-par:10%` (mobile 7%); `check-parallax.mjs` passes; auto-gates pass for en (390 / 1280 no overflow, tables not cut, no first-screen overlap, ≥ 8 images).
13. Copy ≥ 250 words, facts identical to section 0 (2012, Ghent, twelve, 45 minutes, 7-day hold, hours, prices).

## 13. Similarity table (target ≈ 80% to BREDA)

| Dimension | BREDA (RT) | Kaname |
|---|---|---|
| Ground / ink | `#FFFFFF` / `#000000` (a) | same |
| Caption bar | `rgba(160,146,129,.6)`, 89 px, 30/42 + 18/27 white centred (a)(b) | same values; content in a 640 px centred column |
| Footer | `#F9F5EE`, mt 50, padding 30 (a)(c) | same |
| Card ground / pager | `#F4F4F4`, 12×12 squares, gap 11, active black (a)(c) | same |
| Accent | none, colour only in photos (a) | `#4A4036` on buttons only (≤ 3%); colour mass in photos |
| Saturated share | 0.1% | gate 15%, target ≤ 6% |
| Photo tone | pale warm high-key | **low-key** warm umber (row requirement) — the one deliberate deviation |
| Type family | ballinger-mono caps, ls 0.13em (b) | Hanken Grotesk caps, ls 0.13em; Onest body; Noto Sans TC/JP |
| Sizes | nav 14, body 16/24, caption 30/42 + 18/27, tile 20/28, section 28–30 (b) | 14, 16/24 UI (paragraphs 16/28), 30/42 + 18/27, 20/28, 30; + 4.25rem chapter names |
| Header | 65 px white, logo left, nav right (c) | 65 px white, logo centred, nav 3 + 3 (row: centred nav) |
| Hero | full-bleed 2 × 50% × 724, corners 0, at y 80 (c)(e) | 2 × 50% × 724 at y 80, **inset 32 px** (row: framed window), corners 0 |
| Tiles | 4 × 359 squares, 1 px gaps, label bottom-left +36 (c) | 4 × ≈343 squares, 1 px gaps, label bottom-left +36 |
| Pick-up | 5 × 288×286, 2 px gap, vertical white tab 28×92 (c)(f) | 5 × ≈273 square + info, 2 px gap, tab 28×92 |
| Series split | 2 × 718, label top-left at 54 px (c) | visit split 50/50, label top-left at 54 px |
| Radius / shadow / borders | 0 / none / 1 px white gaps (d) | same |
| Motion | crossfade 1000/6400; caption .4 s up; fade-in 1000 ms swing; hover .7/.3 s (g) | same values; + sp-parallax 10% on the tray band |
| Decoration | pager squares, vertical tabs, caption bar, circle-arrow link icon, TOP box (f) | all five kept; + 1 px inner glass rule in the window |

Photos and copy are Kaname's own; nothing from BREDA's images, text, product designs or logo.
