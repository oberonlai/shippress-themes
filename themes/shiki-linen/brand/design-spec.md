# Shiki Linen: design spec (stage 1, binding for implementation)

Slug `shiki-linen`, plan row b21-4, bed linen shop, type `store` (WooCommerce templates and sample products; still works without WooCommerce), row page structure `spec-catalogue`. Five languages: en, zh-TW, ja, fr, de.

- Reference: https://hadawa.jp/ (primary). Secondary: https://terada-knit.co.jp/ (thread line and two palette values only).
- Tokens: `brand/reference-tokens.md`, cited below as [tok a] to [tok g]. Screens: `brand/ref/`.
- IMAGERY: **photo**. All photos and copy are our own. No asset, text or logo from either reference.
- Font direction: **sans**.

## 0. Decisions that override stage-a.md or the tokens (read first)

| Topic | stage-a / tokens said | This spec | Why |
|---|---|---|---|
| Saturated share, first screen | Hadawa about 12%; ours 8–12% | **Limit 2.6%**: `check-first-screen.py <shot> --max 2.6` | Measured on `ref/hadawa-first.png` with the gate script: 2.6%. The quality gate takes the smaller of 30% and the reference value. Moss `#5F6B4E` (S 27%) and ink do not count as saturated; only photo pixels do, so the limit is met in the photo grade (section 7). The row's 30% and the older 15% are not the limit here. |
| Hero panel geometry | Hadawa panels equal width, 22 px gutter | Hadawa is really **794 + 568 px, 20 px gutter**, x 29 to 1411, y 68 to 680 (measured). Ours: **three equal panels, gutter 20 px** | Three equal keeps row `first_screen: three-equal-columns` and avoids the twin hero of Suji and Hibana. Margin and height are Hadawa's. |
| KV checklist | 7 items, 4 of them below the fold | 6 items, all on the first screen | Lower items are now T1, T2 and block rows. |
| Ink | `#1F231B` | `#0D0E0B` | Reference ink is `#000000`; the limit is ±5% lightness. `#1F231B` is 12%. |
| Band | `#F2F1EC` | `#F7F4EC` | A measured Terada value [tok a] instead of an invented one. |
| Accent share | Moss up to 8–10% | Moss at most **2%** of any screen | Hadawa's accent is under 1%. Button stays ink, moss on hover only. |
| Hero motion | Settle 1.02 to 1 | Removed; hero panels use `sp-parallax` | Parallax already drives `scale` and `translate` on those images; hero takes no reveal. |
| Hadawa cross-fade (1.2 s) | Replaced by parallax | Same | Not an sp-* effect, and it would need a fourth hero photo. |
| Block order | Catalogue, then strip | **Strip, then catalogue**; a product pair block added | See the six tones, then read their numbers. A store home has to show pieces. |
| Stitch line drawing | "Draws on scroll" | Short segments, each `sp-reveal--wipe` | Only sp-* is allowed, no scroll listener; Terada's behaviour is unverified. A wipe keeps the dashes intact, a dash-offset draw would not. |
| Photo entrance | Scale 1.2 to 1 | Scale **1.06** to 1, Hadawa's timing and easing | 1.06 is fixed inside `sp-scroll.css`; only variables may be tuned. |

## 1. Signature techniques (all three obvious at a glance)

### T1. Wash-gradation strip
- Source: Hadawa, https://hadawa.jp/ (skin gradation concept, Concept page; contiguous portrait strip, `ref/scroll-hadawa-strip.png`). There, 432×550 portrait tiles touch with 0 gap and form one row across the full viewport.
- Ours: home block 4. Six macro cloth photos G1–G6, **0 gap, edge to edge, full bleed**, in fixed order Raw Flax, Stonewash, Oat, Moss, Slate, Charcoal, light to dark and light to heavy.
- Desktop: six equal columns (`100vw / 6`, 240 px at 1440), height 550 px [tok e], radius 0. It is not a slider. Caption on white directly under each column, 12 px above the text: name in Manrope 400 0.8125rem, then `weave · g/m²` in Source Sans 3 0.6875rem, `#5C5F57`.
- Must not be diluted: no gap, no margin, no overlay text, no carousel. Tones must read as one continuous left-to-right gradient. Regenerate or grade any tile that breaks the order.

### T2. Opposite-edge staircase with spec tags
- Source: Hadawa Concept/Creators, `ref/scroll-hadawa-stair.png`, `ref/hadawa-s1.png`. Photos anchor to alternating viewport edges at different ratios, each beside a large empty white ground.
- Ours: home block 3, three steps. Sizes are vw at desktop, px given at 1440 [tok e, c]:

| Step | Photo | Ratio | Size | Anchor | Text position |
|---|---|---|---|---|---|
| Plain | ST1 | 1:1 | 32vw, 461 px | right, 14 px from edge | left void, x = 10vw, width 30em max, bottom-aligned to the photo |
| Hopsack | ST2 | 1.5:1 | 55vw, 792×528 px | left, 14 px from edge | right void, x = 61vw, width 26em max, top-aligned |
| Herringbone | ST3 | 0.70 | 35vw, 504×720 px | right, 14 px from edge | left void, x = 15vw, width 30em max, vertically centred |

- Gap between steps 140 px [tok c, range 90–200]. Radius 0, no border, no shadow [tok d].
- Spec tag on every photo: a real text block, editable in the editor, at bottom-left inside the photo, 12 px inset: ground moss `#5F6B4E`, white text, Source Sans 3 0.6875rem, letter-spacing .03em, padding 4px 8px, radius 2px. Example: `Plain weave · 170 g/m²`.
- Must not be diluted: photos touch their 14 px edge margin on opposite sides, the white void stays empty apart from the short text, the three ratios stay different. Do not centre, do not fall back to a two-column grid, do not add cards.

### T3. Running-stitch thread line into a needle-eye ring
- Source: Terada Knit, https://terada-knit.co.jp/ first screen, `ref/scroll-terada-first.png`: one thin thread sweeps in from the top and into a large circle.
- Ours: one 1.5 px moss dashed line, `stroke-dasharray: 9 7`, round caps, from the hero to the close block, always behind content (`z-index: 0`; photos and text above it). It ends in the ring of home block 10: two thin near-concentric circles (Ø 460 and 444 px, 1.5 px moss, centres offset 6 px), the hand-drawn feel of Terada's frame.
- Build: `assets/decor/stitch-a.svg` to `stitch-e.svg`, `preserveAspectRatio="none"`, `vector-effect: non-scaling-stroke`. Each is the CSS background of the child of `<div class="sl-stitch sp-reveal sp-reveal--wipe" aria-hidden="true"><div></div></div>`, absolutely positioned in the section. The hero segment has no reveal.

| Segment | Runs | x at 1440 |
|---|---|---|
| a (hero) | leaves from behind panel 3's bottom edge, curves down | 1150 to 1290 |
| b | block 2, right of the text, into block 3 | 1290 to 650 |
| c | block 3 voids, behind nothing but white | 650 to 120 |
| d | block 6 and 7 margins (strip and catalogue hide it) | 120 to 1320 |
| e | block 8 void, sweeps into the ring | 1320 to ring |

- Must not be diluted: line visible in every white void at 1440, moss not grey, dashed like a running stitch, reaches the ring.
- Under 782 px: no segments over content. Use only a centred 72 px vertical stitch between blocks 2–3, 5–6 and 7–8, plus the ring.

### Continuation to inner pages

| Page | T1 | T2 | T3 |
|---|---|---|---|
| Shop | Six-tone strip, height 240 px, under the page head; each tile links to its tag | — | Stitch from the head to the first product row |
| Single product | Tone row: six 48 px contiguous squares of G1–G6 under the price | Gallery image pinned to the left edge, 14 px margin, 0.70, spec tag on it | Stitch from summary to Care note |
| Cloths | Full strip, then one section per cloth | Each of six cloths is a staircase step, alternating edges | Runs through all six voids |
| Made to order | — | Four prose stages, each with a photo on alternating edges | Runs stage to stage, ends in a ring around the swatch line |
| Care | Strip, height 240 px, one wash note per tone in the captions | One photo pinned to the right, spec tag "40°C · no softener" | Stitch beside the four habits |
| Sizes & prices | — | One photo at the left edge beside the size table intro | Stitch from size table to price table |
| About | Thin strip, height 120 px, as a divider | Two photos on opposite edges | Stitch through the narrative |
| Journal, single post | — | Post image pinned to the left edge at 55vw | Short stitch under the title |
| Contact | — | C1 pinned right, address in the left void | Ends in a ring around the hours |

## Key visual concept

### (1) Reference first screen
Hadawa opens like a white gallery: a hairline-free 66 px header (nav left, wordmark centred, black Order button right) over two tall daylight photographs, cropped so hands, not faces, are the subject: two hands of different skin tones held on a street, then a man touching his ring. Below them, a centred two-line statement in small plain type and a lot of white. The story: your colour and everyone else's are connected by a gradation. Signature motion: photos ease from scale 1.2 to 1 in their frames as a vast white page scrolls past; the hero slot cross-fades.

### (2) Our translation
A white shop-window first screen in the same structure: three tall film-grain photographs at Hadawa's height and margin, cropped so hands and cloth are the subject. The shopkeeper folds a washed sheet on a pale wood counter, a customer pinches the hem of a pillowcase, and the shelf holds the same cloth stacked light to dark. It is the same story, with the gradation running through linen instead of skin: one cloth, six tones, chosen by touch. Below sits a centred quiet statement, and one running stitch leaves the last photo and heads down the page. The motion concept stays: photos drift inside their fixed frames as the white page moves.

### (3) KV checklist (all on the first screen at 1440×900)

| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Left photo: two hands on a street, cropped to the hands | Shopkeeper's hands folding a washed sheet on a wood counter, torso cropped | Panel 1: x 29–476, y 66–678 | `sp-parallax`, `--sp-par: 6%`; no reveal | H1 |
| 2 | Right photo: man touching his ring | Customer pinching the hem of a pillowcase across the counter | Panel 2: x 496–943, y 66–678 | same | H2 |
| 3 | Gradation as the concept | Shelf of folded sheets stacked light to dark | Panel 3: x 963–1411, y 66–678 | same | H3 |
| 4 | Centred two-line statement in the white below | H1 "Cloth you can feel before you buy it." + one lead line | Centred, top about 722, ends by 800 | None | — |
| 5 | Header: nav left, wordmark centre, black Order button right | Same order; ink "Order swatches" button; gradient wordmark | Fixed top, 66 px | Button hover 0.3s ease-in-out | — |
| 6 | Terada thread line | Stitch segment a leaving panel 3 | x 1150–1290, y 678–900 | None on hero; continues as T3 | SVG |

## 2. Colour

| Role | Hex | Source | Use | Share |
|---|---|---|---|---|
| Ground | `#FFFFFF` | Hadawa ground [tok a] | page ground, 40%+ of every screen | about 80% of a page's non-photo area |
| Band | `#F7F4EC` | Terada ground [tok a] | catalogue block, cart totals only | at most 10% of a page |
| Ink | `#0D0E0B` | Hadawa `#000000`, lightness +4.9% | text, button, cart icon | under 3% |
| Muted | `#5C5F57` | derived from ink | captions, meta (6.5:1 on white) | — |
| Moss | `#5F6B4E` | Row palette, replaces Hadawa's peach-to-brown logo accent | stitch, spec tags, button hover, links on hover | at most 2% |
| Rule | `#E4E2DA` | derived | table rows only | — |

Reason for replacing the accent: Hadawa's peach-brown means skin tone, which has no meaning on linen. Moss comes from the cloth range (G4) and has the same small role and share. Everything else is the reference's value or within ±5%. White ground, no beige-led page, no colour block. First-screen limit: section 0.

## 3. Type

Direction **sans**: Latin headings and body sans-serif, CJK Noto Sans TC / JP. No serif or Ming-style face anywhere.

- Display: Manrope 200 and 400. Body: Source Sans 3 400 and 600. Hadawa's light humanist sans (Avenir) is the model [tok b].
- `--display` en, fr, de: `"Manrope", system-ui, sans-serif`. Body: `"Source Sans 3", system-ui, sans-serif`.
- zh-TW: display `"Manrope", "Noto Sans TC", sans-serif`; body `"Source Sans 3", "PingFang TC", "Microsoft JhengHei", sans-serif`.
- ja: display `"Manrope", "Noto Sans JP", sans-serif`; body `"Source Sans 3", "Hiragino Sans", "Yu Gothic", sans-serif`.
- Repo contract: body stacks never contain the bundled zh or ja fonts; the display stack carries them.
- Load all fonts with theme.json `fontFamilies` + `fontFace`, including the zh-TW and ja subsets, so editor and front end match. `style.css` will have `:lang(` rules, so copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and require it. Use the Hokuto/Hada subset workaround.
- zh-TW and ja: headings about 0.75× the English size, body line-height 1.85. fr and de: `hyphens: auto`.

| Preset | rem (px) | Use | Token |
|---|---|---|---|
| tiny | 0.6875 (11) | tags, captions, copyright | tok c |
| small | 0.8125 (13) | button, tracking .05em, padding 8px 20px | tok b |
| base | 0.9375 (15) | body, line-height 1.7 | tok b |
| medium | 1.125 (18) | statements, lead, weight 400 | tok b |
| large | 1.75 (28) | H1 on home, section H2, weight 200 | tok b |
| x-large | 2.5 (40) | H2 for cloth sections on inner pages, weight 200 | ours |
| xx-large | 4.25 (68) | Home block 4 head, inner page H1, weight 200, left aligned | gate |

Nav 0.97rem (15.5 px) weight 400. No uppercase transforms, no extra tracking on headings. The 68 px size is not Hadawa's; the gate requires it, and it stays left aligned, never a giant centred word.

## 4. Spacing, radius, motion tokens

- Header fixed, white, 66 px, no rule; gutter 50 px left and 42 px right [tok c].
- Vertical gap between blocks 140 px desktop, 72 px mobile [tok c].
- Photo radius 0, no border, no shadow. Button radius 2 px. Spec tag radius 2 px [tok d].
- Link "Learn more": text with 1 px underline [tok f]. No arrows, no pills, no icons on section heads.
- Hover: all 0.3s ease-in-out [tok g].

## 5. Home page (en at least 250 words, target about 430; narrative paragraphs at least 20 words in blocks 2, 3, 6, 7)

### Header
Left: Shop, Cloths, Made to order, Journal. Centre: wordmark "shiki linen" lowercase, Manrope 200, letter-spacing .18em, 1.25rem, 100×18 px box like Hadawa's, text gradient `#8C8672 → #5F6B4E → #2B2E28` (light to heavy cloth, an echo of Hadawa's gradient logo, not a copy). Right: ink button "Order swatches" (→ Swatch set product), cart icon with count, language switcher. Only one menu. Under 960 px: wordmark left, cart, menu button; nav, button and languages in the overlay.

Footer as Hadawa [tok c]: white; wordmark from x=144; two link columns at x=720 and 946, 32 px pitch (Shop, Cloths, Made to order, Care / Sizes & prices, About, Journal, Contact); address and hours under the wordmark; copyright 11 px centred.

### First screen (1440×900)
Header 66 px. Three framed panels, margin 29 px, gutter 20 px, height `min(68vh, 612px)`, each `sp-parallax > figure > img`, `object-fit: cover`. Keep subjects inside the central 70% because the parallax layer scales 1.18. Statement centred below, H1 `large` weight 200, lead `medium` weight 400, max-width 36em, 44 px under the panels. Stitch a at the right.

Lead line: "Six washed linens, chosen by hand, cut and made up to order in Galway."

Forbidden here: table, form, search box, text on the photos, tag on the photos, moss fills.

### Block order

| # | Pattern | Purpose | Layout and photos | Copy | Motion |
|---|---|---|---|---|---|
| 1 | `front-hero` | KV | Above; H1 H2 H3 | 22 words | parallax 6% |
| 2 | `front-intro` | How we choose cloth | Tone-on-tone photo T1P 0.70, 504×720 at x=72 [tok e]; text at x=705, width 475: statement `medium` 2 lines, narrative paragraph, "Learn more" → About | 70 words | zoom |
| 3 | `front-weaves` | Three weaves, who each suits | **T2**, H2 "Three weaves, three kinds of sleeper" in the first void | 3 × 50 words | zoom |
| 4 | `front-gradation` | The six tones | Head left, x=72: xx-large "Six cloths, light to heavy", one line under. **T1** G1–G6 | 25 words + captions | stagger + zoom |
| 5 | `front-catalogue` | Spec catalogue | Band `#F7F4EC`, full bleed, 1200 container. Table section 8: Cloth, Weave, g/m², Shrinkage, Feel, Suits. Link "See every cloth" → Cloths | table + 20 words | none (table) |
| 6 | `front-order` | How an order is made up | Photo C2 1.47, 792 wide, left 14 px; right void at x=880, width 26em: H2 + four prose stages, bold lead-in + sentence, no numbers, no icons | 90 words | zoom |
| 7 | `front-washroom` | Washing and care | Full-bleed `sp-parallax` Cover, 640 px, photo W1, `--sp-par: 10%`. Only a moss spec tag on the photo. Below on white, x=72, H2 + narrative paragraph, "Learn more" → Care | 60 words | parallax |
| 8 | `front-pieces` | The pieces in use | Left void: H2 "What we make up", short paragraph, links to Shop and Journal. Hadawa pair [tok e]: P1 and P2 403×630, 0.64, from x=576 and 1008, gap 29, P2 225 px lower | 45 words | zoom |
| 9 | `front-prices` | Prices | White. H2 left + price list section 8 (full width of a 1200 container), fixed lines under it | table + 30 words | none (table) |
| 10 | `front-close` | Swatches | Left: photo C1 0.70, 35vw, left 14 px. Right: T3 ring Ø460, text inside, centred: H2 "Six swatches, €6", one line, ink button. Stitch e enters the ring from above | 30 words | wipe |

Photo positions on home: 3 + 1 + 3 + 6 + 1 + 1 + 2 + 1 = **18**, each image once.

### Comparison with recent homes

| # | Suji Clinic | Yukisaki Route | Hibana College | Mimamori College | **Shiki Linen** |
|---|---|---|---|---|---|
| 1 | twin 50/50 hero, seam card | dimmed yard photo, route line | dark ground, headline, tall photo | inset stage, tiles | **three framed panels, statement below** |
| 2 | problem | two dossier cards | about | notice | **tone-on-tone photo + text** |
| 3 | 3×2 grid | frosted panel | months | white-sheet courses | **edge staircase** |
| 4 | three diagonal bands | three first-week rows | week, 3 photos | figures | **contiguous six-tone strip** |
| 5 | parallax + panel | parallax band | parallax floor | who | **spec catalogue table** |
| 6 | room rows | trial card | cohort | day | **photo + prose stages** |
| 7 | fee table | prices | people | placement | **parallax with tag only, text below** |
| 8 | close band | stories | stories | story | **staggered portrait pair** |
| 9 | — | start card | fees | notices | **price list** |
| 10 | — | — | close | — | **ring close** |

Why not alike: no twin hero, no inset photo + strip, no cards, no 3×2 grid, no white sheets, no panel over the parallax photo, no people block. White void plus edge-anchored bare photos is the whole page rhythm, which none of the four has. The signature set is also distinct from the used list: Kama's staircase is diagonal product slabs in a hero, Kasane's edge photos are blobs, Kesho's hero panels run edge to edge and drift, and Hayate's are off-grid. Ours are margined and fixed in the hero, rectangular at three ratios in the staircase, with spec tags.

Against Asa Linen (same trade): Asa uses a transparent header over one made-bed photo, a sticky chapter scroll, serif type and washi ground. Shiki shares none of these.

## 6. Inner pages (at least 10 + WooCommerce)

Every page: left-aligned H1 at xx-large weight 200, one `medium` lead line, then the continuation in section 1. No sidebar. Sections use the same white void; never a card grid except products.

1. **Shop** (`archive-product`, `taxonomy-product_cat`, `product-search-results`): strip head; result count + ordering; 3 columns (2 at tablet, 1 on phone), gap 29 px; card image 0.70, radius 0, name Manrope 400 1rem, price, line "Any weave, any tone". Add-to-cart is a 1 px underlined link.
2. **Single product** (`single-product`): gallery left edge; right column: title x-large, price, tone row, weave and size selects, quantity, ink button; line "Free delivery over €150 · 30-day returns". Below: spec table, Care note, related products.
3. **Cloths** (`page-cloths`): core catalogue. Full strip, six alternating sections, each with name, weave, g/m², width, shrinkage, feel, who it suits, 80 words; catalogue table at the end.
4. **Made to order** (`page-made-to-order`): the four stages in full, measuring instructions, made-to-size fee, lead times.
5. **Sizes & prices** (`page-sizes-prices`): size table (Single, Double, King, in cm and in), price list, delivery and returns.
6. **Care** (`page-care`): first wash, drying, ironing, softening over time, four habits as paragraphs, repairs.
7. **About** (`page-about`): founded 2014 in Galway, how the range was narrowed to six, the seven people as a prose list (name, job, one sentence); no people grid.
8. **Journal** (posts page, `home.html`, `archive.html`, `category`, `tag`): first post large, then two columns. **Single post** (`single.html`).
9. **Newsletter**: `screens.newsletter` points to the Journal page.
10. **Contact** (`page-contact`): address, email, hours, how to bring your own bed measurements; no form needed.
11. **Cart, Checkout, My account, Order received**: head at x-large, totals column on band `#F7F4EC`, ink buttons. Must not fatal with WooCommerce off; Shop then shows static pieces and a note.
12. **404, search**: head + link home.

Repo contract: `pages` in theme-meta: home, shop, product, cloths, made-to-order, sizes-prices, care, about, news, article, category, tag, newsletter, contact, search, each with a `screens.*` URL. Include `templates/tag.html`, a `store` block with `plugin`, `required: false`, `templates`, `sampleProducts`, `withoutPlugin`, and `quality_gate: 2`. Exactly one posts-role page. Posts need categories and tags. No words in CSS `content:`. All section labels stay in block markup. Theme files in English only, apart from demo-content zh-TW and ja files.

## 7. Photos (18, one at a time, read each one)

Imagery: photo. All generated with `scripts/grok-image.sh`, no cut-outs, each at most 300 KB and 2000 px. No Japanese elements, no text, no logos.

STYLE (exact, every prompt):
`documentary photograph on fine-grain 35mm film, visible soft grain, high-key plain daylight, soft highlights, slightly desaturated low-saturation grade, pale ash wood, white walls, washed linen in oat, flax, moss, slate and charcoal, calm candid moment, international neutral modern setting, diverse adults, hands and cloth as the subject, faces cropped out or turned away, no text, no logos, no labels, no signage`

Grade rule: the first screen must pass `--max 2.6`. Skin and wood are what will fail. Regenerate with paler wood or, as the final step, lower saturation on H1–H3 only, keeping them natural.

| ID | Subject and composition | Ratio | Used on (once per page) |
|---|---|---|---|
| H1 **home** | Shopkeeper's hands folding a washed oat sheet on a pale wood counter, torso cropped | 0.73 | Home hero; Made to order stage 2 |
| H2 **home** | Customer's fingers pinching the hem of a flax pillowcase across the counter | 0.73 | Home hero; Journal post 2 |
| H3 **home** | Wall shelf of folded sheets stacked light to dark, no people | 0.73 | Home hero; About (left edge) |
| T1P **home** | Folded moss sheet on a surface of its exact own tone, tone on tone | 0.70 | Home intro; product Flat sheet |
| ST1 **home** | Bed with plain raw-flax sheets, rumpled, morning window light | 1:1 | Home step; Cloths; product Fitted sheet |
| ST2 **home** | Two hands of different skin tones spreading oat hopsack over a table | 1.5 | Home step; Cloths; About (right edge); Journal post 1 |
| ST3 **home** | Hand smoothing a charcoal herringbone duvet cover on a bed | 0.70 | Home step; Cloths; product Bed set |
| G1–G6 **home** | Flat macro of linen weave, even light, fills the frame: raw flax, stonewash, oat, moss, slate, charcoal | 0.44 | Home strip; Shop; Cloths; Care; About; Single product tone row |
| C2 **home** | Cutter's hands with shears on linen on a long table, chalk line, no lettering | 1.47 | Home order; Made to order stage 3; Journal post 3 |
| W1 **home** | Bright washing room, wet linen on lines and a steel sink, one person at far left | 16:9 | Home washroom; Care; Made to order stage 4 |
| P1 **home** | Made bed, slate duvet cover, oat pillowcases, seen from the side | 0.64 | Home pair; Sizes & prices; product Duvet cover |
| P2 **home** | Stack of four folded pillowcases in tones, on a stool | 0.64 | Home pair; product Pillowcase pair |
| C1 **home** | Hands tying a small swatch parcel with plain cotton tape, no paper labels | 0.70 | Home close; Made to order stage 1; Contact; product Swatch set; Journal post 4 |

G1–G6 must share one exposure, weave scale and angle, or the strip fails. Crop tile to 0.44 from a larger square so the weave stays the same size.

Per page, no repeats: Home 18 unique. Cloths: G1–G6, ST1 ST2 ST3 plus the catalogue. Shop: G1–G6 + product images (T1P, ST1, ST3, P1, P2, C1). Journal index: ST2, H2, C2, C1. Contact: C1. Sizes & prices: P1. Care: G1–G6, W1. About: H3, ST2, G1–G6. Made to order: C1, H1, C2, W1.

## 8. Fixed facts (home, inner pages, all five languages; no others)

**Brand**: Shiki Linen, founded **2014**, shop and workroom at **14 Ropewalk Lane, Galway, Ireland** (fictional address). hello@shikilinen.example. Open **Tuesday to Saturday, 10:00–17:30**. Currency **EUR** in every language, no conversions.

**Audience and tone**: people buying bedding slowly, hot sleepers, small guest houses. Plain, exact, unhurried, no claims of health, cure or better sleep. **A day**: 09:00 Tuesday wash load; 10:00 shop opens; cutting from 11:00; parcels at 16:00; brand.md must describe this daily routine.

**People (7)**:
| Name | Role |
|---|---|
| Aoife Brennan | owner, the counter, founded the shop |
| Tomasz Wrona | cutting and making up |
| Ngozi Adeyemi | washroom |
| Lucía Ferreira | swatches and orders |
| Henrik Aalto | dispatch |
| Priya Raman | care advice and repairs |
| Samir Haddad | buys cloth from the mills |

**Six cloths** (all width 280 cm):
| Cloth | Weave | g/m² | Shrinkage | Feel | Suits |
|---|---|---|---|---|---|
| Raw Flax | Plain | 165 | 5% | dry, crisp | hot sleepers |
| Stonewash | Plain | 170 | 3% | soft from day one | first-time linen buyers |
| Oat | Hopsack | 190 | 3% | open, textured | year-round beds |
| Moss | Hopsack | 195 | 3% | even, matte | guest rooms |
| Slate | Herringbone | 215 | 3% | dense, smooth | cool rooms |
| Charcoal | Herringbone | 225 | 3% | heavy, draped | cold sleepers |

**Price list** (any weave, any tone, any standard size: Single, Double, King):
| Piece | Price |
|---|---|
| Pillowcase pair | €48 |
| Flat sheet | €96 |
| Fitted sheet | €104 |
| Duvet cover | €168 |
| Bed set (duvet cover, fitted sheet, pillowcase pair) | €298 |
| Swatch set (six cloths; deducted from your first order) | €6 |
| Made to size, per piece | + €24 |

**Sample products (6)**: the first six rows above. Images in section 7. Categories: Sheets, Covers, Pillowcases, Sets, Swatches. Tags: plain, hopsack, herringbone, light, heavy.

**Delivery and returns**: free over **€150**; otherwise flat **€9** in the EU, **€18** elsewhere. Standard sizes dispatched in **3 working days**, made to size in **9**. EU delivery **3–5 working days**, elsewhere **6–10**. Returns **30 days** unused; made-to-size pieces cannot be returned.

**Order process (4 stages)**: Swatch (feel the six at home) · Measure (standard, or send your mattress size) · Cut and wash (cut, sewn, washed once at 40°C) · Post (folded, tied, sent).

**Stories (4 Journal posts)**: "The hot sleeper" (Inés, Porto; Raw Flax) · "Twelve beds, one guest house" (Marit, Bergen; Oat) · "A bed that was never standard" (Daniel, Leeds; made to size) · "How a sheet softens" (care note by Priya Raman, no measured claims).

Sample size table (cm, in): Single 90×200 (35×79), Double 140×200 (55×79), King 180×200 (71×79).

## 9. Scroll effects

Three effects on one page (the limit), and stagger only sets timing. Hero has no reveal. Tables, forms and legal text have none.

| Effect | Where | Source and values | Implementation |
|---|---|---|---|
| Photo zoom | Home blocks 2, 3, 6, 8, 10 and the same photos inside inner pages | hadawa.jp: on entering the viewport, 0.5s `cubic-bezier(0.6,-0.05,0.01,0.9)`, wrapper clipped [tok g] | Frame Group `.sl-frame { overflow: clip }`, child `figure.sp-reveal.sp-reveal--zoom`. The tag sits outside the figure, in the frame. Timing: `html.sp-js:not(.sp-no-motion) .sl-frame > .sp-reveal--zoom { --sp-dur: .5s; --sp-ease: cubic-bezier(.6,-.05,.01,.9); }` |
| Strip entrance | Block 4 | hadawa.jp strip, about 0.5s, same easing | Structure: `.sl-strip` (grid, `overflow: clip`) holds `.sl-strip__tiles.sp-stagger` and a separate `.sl-strip__captions` row. Each tile is a `figure.sp-reveal.sp-reveal--zoom` and a direct child of the stagger group, because `.sp-stagger > .sp-reveal` sets the delay. Captions have no reveal. Extend the timing selector with `.sl-strip__tiles > .sp-reveal--zoom`. Zoom replaces stage-a's `--up`: tiles overlap slightly while entering, so no gap ever shows |
| Stitch wipe | T3 segments b–e | terada-knit.co.jp thread line, continuous, unverified; approximated | `sp-reveal--wipe`, 1.1s `cubic-bezier(.77,0,.175,1)`, clip on the child |

## 10. Parallax (required)

| Where | Background | Foreground | `--sp-par` desktop | Phone | Reference motion |
|---|---|---|---|---|---|
| **Block 7, main** | W1 in Cover (`.wp-block-cover.sp-parallax`), full bleed, 640 px, 420 px on phone | Moss tag only, "Washed once at 40°C" | **10%** | 6% | Hadawa's photos moving within their frames (scale 1.2 to 1 while scrolling a white page) |
| Hero panels | H1, H2, H3, `figure > img` | None; statement is outside the panels | **6%** | 6% | Same; replaces the 1.2 s cross-fade |

Use only sp-scroll's built-in parallax. Foreground text is never in a moving layer. `check-parallax.mjs` must pass on desktop and phone (at least 6 px difference, 0 in reduced motion).

## 11. Responsive

- **390 px first screen**: header 56 px, H1 full width minus 28 px, ratio 1:1, H2 and H3 below as two columns, gutter 6 px, ratio 0.73, statement below on white, centred, H1 1.5rem. No vertical text, no absolutely positioned label over text, no tags on the first screen, stitch hidden.
- T2 under 782 px: photo at 92vw, anchored to its side, opposite side empty; text below at 14 px gutters; ratios unchanged.
- T1 under 782 px: six rows, 0 gap, each a 40% wide 104 px tall tile on the left forming a vertical gradient, caption on the right. Set both inner groups to `display: contents` so tiles and captions share the `.sl-strip` grid.
- Pair: P1 and P2 at 46vw, P2 80 px lower.
- Block 6 and 10: photo first, then text; ring Ø 300.
- **Tables**: catalogue and price tables at ≥782 px full width of the 1200 container, never cut. Price column `white-space: nowrap`, right aligned. Under 782 px every table becomes stacked rows (`display: block`; each value keeps a visible label written in the markup, never in CSS `content:`).
- No horizontal scroll at 390, 800, 1280; `html, body { overflow-x: clip }`.
- Text sizes on phone: xx-large becomes `clamp(2.25rem, 9vw, 4.25rem)`.

## 12. Similarity table (target 80%)

| Dimension | Hadawa / Terada | Shiki Linen |
|---|---|---|
| Ground | `#FFFFFF` | `#FFFFFF` |
| Ink | `#000000` | `#0D0E0B` |
| Button | black, white text, r2, 13.3 px, .7 px tracking, 8×20 | same, ink |
| Accent | peach-brown, under 1% | moss, up to 2% (changed, section 2) |
| First-screen saturation | 2.6% | at most 2.6% |
| Body | 15 px, line-height about 1.7 | same |
| H2 | 28 px, weight 200 | same; 68 px exception at gate headings |
| Statement | 18–20 px, weight 400 | 18 px, weight 400 |
| Nav | 15.5 px, 400 | same |
| Header | 66 px, nav left, logo centre, button right | same |
| Hero | margin 29, gutter 20, height 612, two panels | same, three panels |
| Stair ratios | 0.70, 1:1, 1.5:1 | same |
| Pair | 403×630, right one 225 px lower | same |
| Strip | 0 gap, 550 tall, 432 wide | 0 gap, 550 tall, 240 wide (six tones must fit) |
| Radius, border, shadow | 0, none, none | same |
| Decoration | underlined link; Terada thin thread + circle | same + spec tag |
| Photo entrance | scale 1.2→1, 0.5s, `cubic-bezier(.6,-.05,.01,.9)` | 1.06→1, same time and curve |
| Hover | 0.3s ease-in-out | same |
| Vertical gap | 90–200 | 140 |
| Footer | 3 columns from x=144, pitch 32, 11 px copyright | same |

## 13. Home acceptance checklist

1. First screen matches the KV checklist: three equal panels, margin 29, gutter 20, height up to 612, statement in white below; all six items visible.
2. `check-first-screen.py --max 2.6` passes on the 1440×900 shot.
3. Nothing on the photos in the hero; no table, form, search, or giant centred text.
4. Header: nav left, gradient wordmark centre, ink button, cart and languages right; one menu.
5. T1: six tones, zero gap, edge to edge, light to dark, caption under each.
6. T2: three steps on opposite edges at 0.70, 1:1 and 1.5:1, 14 px margin, white void, moss tag on each photo.
7. T3: dashed moss line visible in every void at 1440 and ending in the ring at block 10.
8. Block order equals section 5; 18 image positions, none repeated; no card grid, step grid, people grid or timeline.
9. Catalogue and price numbers equal section 8 exactly. Tables full width at ≥782 px, price column not cut; stacked on 390 px.
10. Photos pass the read check: no text, no logos, no broken hands, same grain and grade; G1–G6 read as one gradient.
11. Colours and sizes equal sections 2–4; button radius 2 px, photo radius 0.
12. Motion: zoom, stagger + zoom, wipe; none in hero. `check-parallax.mjs` passes with block 7 at 10% and hero at 6%. `auto-gates.mjs` passes.
13. Editor and front end show the same fonts (`check-editor-fonts.mjs`). Home has at least 250 English words and 3 narrative paragraphs.
