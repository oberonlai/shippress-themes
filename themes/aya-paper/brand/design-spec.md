# Aya Paper: design spec (stage 1, binding for implementation)

Slug `aya-paper`, plan row b22-1, stationery shop, type `store` (WooCommerce templates and sample products; still works without WooCommerce), row page structure `spec-catalogue`, nav `centered`, first screen `three-equal-columns`. Five languages: en, zh-TW, ja, fr, de.

- Reference: https://mud.co.jp/ (primary). Secondary: https://andmade.jp/ (three-column catalogue, meta type, reveal timing).
- Tokens: `brand/reference-tokens.md`, cited below as [tok a] to [tok g]. Screens: `brand/ref/`.
- Imagery: **photo** (IMAGERY = photo in stage-a). mud's Works content is photography; its line art is decoration, so we draw our own thin contour lines as SVG over and around our photos. All photos, SVG lines and copy are our own. No asset, text or logo from either reference.
- Font direction: **sans**.

## 0. Decisions that override stage-a.md or the tokens (read first)

| Topic | stage-a / tokens said | This spec | Why |
|---|---|---|---|
| First-screen saturation limit | Ours up to 5%, gate 15% | **Limit 0.0%**: `check-first-screen.py <shot> --max 0.0` | Measured on `ref/mud-first.png` and `ref/andmade-first.png` with the gate script: 0.0% for both. The gate takes the smaller of 30% and the reference value. Met deterministically by clamping H1–H3 (section 7). |
| Kraft point colour | `#A8865A`, one dot + hover | **Removed from the UI** | It has HSV saturation 46%, so it counts as saturated and breaks the 0.0% limit. It also has no counterpart in mud, whose dot is black [tok f]. Kraft appears only in photos, clamped on the first screen. |
| Ink | `#2B2D27` | `#0D0E0B` | Reference ink is `#000000`, the limit is ±5% lightness. `#2B2D27` is about 16%. |
| Band | `#E6E8E0` | `#FFFFFF` | mud's index band is white on a grey ground [tok a]. `#E6E8E0` was an invented value. |
| Small sage text contrast | `#5E6254`, 5.4:1 | `#5E6254`, **5.7:1** on ground, 6.3:1 on white | Recalculated. |
| Hero contour | One line + faint rings behind the wordmark | **Seven rings across all three panels + one heavier deckle line** | mud's ring field fills the frame and is its identity. One line alone would be a diluted version. |
| Wordmark position | Tokens: y 382–498. stage-a: y 700–820 | stage-a's position, y about 660–820 | Keeps the third photo readable. It stays low-right and inside the frame. |
| Works ratio | Tokens: "~2.5:1, 720×~400" | **1.8:1** (720×400) | 720×400 is 1.8:1, and `ref/scroll-mud-works-grid.png` confirms it. The "2.5" is an arithmetic slip. |
| T2 rows reveal | `sp-stagger` + up on T2 rows | **No reveal on T2** | T2 rows carry prices, and price lists take no reveal (common rules). |
| Hero contour motion | "Live ring field", mud's motion | Kept as our addition, theme CSS time loop | stage-a records that mud's drift is **not verified** (no scroll code in main.js). The ring screenshot is static. The loop is not scroll-driven, so it does not break the sp-* rule; Ushio Line set the precedent. |
| Header ground | mud: transparent, content passes behind it | Solid ground `#F4F4F1` | mud's own screenshots show nav colliding with page text. Legibility wins. |
| Nav size | 24 px [tok b] | 20 px | Five languages plus cart and language switcher must fit at 1280. |
| Body line-height | 18/36, tracking .04em [tok b] | Latin 18/30.6 (1.7), tracking .01em; CJK keeps .04em | 2.0 is a Japanese setting; it is too loose for English. |
| Rotated right-edge captions, sticky rail | andmade [tok f] | Not used as a rail; a short sticky label stays inside T3 only | Side rails are banned and rotated rails are on the used list. |

## 1. Signature techniques (all three obvious at a glance)

### T1. Hairline frame, three equal photo columns, contour lines running across the rules
- Source: mud, https://mud.co.jp/, `ref/mud-first.png`. A 1 px black rectangle inset 40 px, 1360×776 under an 84 px header, holds one field of contour rings [tok c, d, f].
- Ours: home block 1, repeated in smaller form in blocks 6 and 10. Frame: 1 px solid `#0D0E0B`, x 40–1400, y 84–860 at 1440×900, radius 0. Inside are three equal columns of 452.67 px, separated by 1 px ink rules at 0 gap. Photos fill each cell edge to edge. The contour SVG lies over all three, crossing the rules without a break.
- Must not be diluted: the frame is ink, not sage or grey. Gaps between photos are 0, only the 1 px rule. The contour line visibly crosses both rules. No rounded corners, no shadow. The frame is not full-bleed and never sits over another photo.

### T2. Spec-sheet index rows
- Source: mud Service, https://mud.co.jp/, `ref/scroll-mud-index-rows.png`: ruled rows on white, numeral at x=40, huge mixed-case title at x=151, text column at x=848 [tok c]. Merged with andmade's mono meta (https://andmade.jp/, `ref/andmade-first.png`).
- Ours: home block 3, six rows, one per paper, on a full-bleed white band. Rules are `#CFCFCB` 1 px, edge to edge [tok a]. Row height 192 px (mud's 353 px holds two-line titles; ours are one line).

| Cell | x at 1440 | Content | Type |
|---|---|---|---|
| Figure | 40 | `120` + small `gsm` | Figtree 600, 5rem/1, ink; unit 0.8125rem 600 `#5E6254` |
| Name | 320 | "Soft Wove" + one short line under it | Figtree 600, 2.25rem/1.3 mixed case; line 0.8125rem `#5E6254` |
| Spec strip | 848–1400 | Four cells: Size / Suits / Sheets / Price, each a small label over a value | Label 0.75rem mono `#5E6254`; value 0.875rem mono ink; Price cell right-aligned, `white-space: nowrap` |

- Rows link to the matching section of Papers. Hover: row ground stays white, the name's colour goes to `#5E6254`, 0.15s `cubic-bezier(.25,.46,.45,.94)` [tok g].
- Between 782 and 1279 px the row is a grid `2fr 3fr 5fr` with the same cells; figures drop to 3.5rem at 782–1099 px.
- Must not be diluted: at ≥ 1100 px figures stay 5rem and in ink; rules run edge to edge; no thumbnails, no arrows, no cards, no zebra. This is not Hayate's index (small accent numbers and caps names): the figure is the data itself, and the strip is the reason the row exists.

### T3. Three-column underlined-title catalogue
- Source: andmade, https://andmade.jp/, `ref/andmade-first.png`, `ref/scroll-andmade-870.png`. Columns at x=198 / 546 / 894 (pitch 348), row pitch 140–154 px, left label at x=24, underlined bold titles, 2–3 grey lines, a mono date [tok c, f].
- Ours: home block 5, nine entries, 3×3, on ground. Exact x positions as andmade. Left label x=24, 0.75rem, sticky at `top: 108px` inside this block at ≥ 1100 px. Title: Figtree 600, 0.9375rem, 1 px underline at 3 px offset. Meta: Public Sans 500, 0.8125rem, `#5E6254`, two lines. Mono line: 0.75rem `#5E6254`, weight and paper name.
- No images. No boxes.
- Must not be diluted: text only, three columns exact, underlines visible, large open space at right as andmade (x > 1120 stays empty on desktop).

### Supporting details
- Dot link [tok f]: text, then an 8 px filled ink circle flush right on one 1 px `#CFCFCB` underline, width 322 px. Every "view all" link uses it. The header's Contact has the same dot.
- Tag chip [tok d]: padding 4px 6px, fill `#DFE0DA`, mono 0.75rem ink, radius 0.
- Section head: uppercase Figtree 600 2.25rem at x=40, as mud's "ABOUT".

### Continuation to inner pages

| Page | T1 | T2 | T3 |
|---|---|---|---|
| Shop | Small frame, height 280 px, three cells H3 W1 V1, contour across | — | Category links as a 3-column underlined list above the grid |
| Single product | Gallery image inside a 1 px frame, contour line over it | One spec row (figure + strip) under the title | — |
| Papers | — | All six rows in full, each followed by its section | — |
| Weights | — | Six compact rows, height 120 px | Full catalogue, 18 entries |
| The counter | Three-cell frame, full size, W1 W2 W3 with long prose | — | — |
| Prices & delivery | — | Delivery facts as ruled rows with figures (`€60`, `30`) | — |
| About | Frame with A1 and the people list below | — | People as three-column underlined names + role meta (prose list, no portraits) |
| Journal, single post | Featured image in a 1 px frame | — | Post index as underlined titles + mono dates |
| Contact | Frame with V1 beside the address | Hours as ruled rows | — |

Inner pages carrying each technique: T1 on 6, T2 on 5, T3 on 4. All meet the rule of at least 4.

## Key visual concept

### (1) Reference first screen, story, motion
mud opens on a quiet pale-grey page under a slim header. A thin black rectangle holds one field of hand-drawn concentric rings spreading from a single centre, like tree rings or a contour map. A soft hand-lettered wordmark and a one-line tagline sit on the right, inside the frame, over the rings. The story is mixing things and giving them form, and good things growing from good soil. Below it the page turns into ruled numbered rows. Motion: the ring field reads as alive, although a drift could not be verified in the code.

### (2) Our translation
The same quiet frame becomes a paper shop's window, and paper is the soil. Three real high-key photographs of the counter stand in the three equal columns: the shopkeeper tears a cotton sheet on a cutting mat, a customer holds two envelopes up to the window to compare them, and notebooks wait with their spines out. Our own rings cross all three like a watermark seen when a sheet is held to the light, with one heavier deckle line, the edge of a torn sheet, running through them. The story is that paper is chosen by touch and wrapped at the counter. The motion concept stays: each photo drifts in its cell at its own speed, and the rings shift slowly over them.

### (3) KV checklist (all on the first screen at 1440×900)

| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | 1 px black frame inset 40 px under slim header | 1 px ink frame, three equal columns, 1 px rules | x 40–1400, y 84–860 | Static | — |
| 2 | Concentric contour rings filling the frame | `hero-contour.svg`: seven irregular rings centred at x 720, y 472, plus one 1.25 px deckle line at about 55% height; stroke `#5E6254` 1 px | Over all three cells | `translate` ≤ 24 px, 40 s, ease-in-out, alternate; off in reduced motion and `?sp-static` | SVG (own) |
| 3 | Wordmark low right, inside the frame | H1 "Aya Paper", Figtree 600, 4.5rem, on a `#F4F4F1` plate, padding 24 px | Right edge x 1360, bottom y 820, inside cell 3 | None | — |
| 4 | One-line tagline under the wordmark | "Paper for everyday desks", 0.875rem 600, right-aligned, same plate | Under item 3 | None | — |
| 5 | Slim header: logo left, centred caps nav, Contact + 8 px dot right | Same; dot in ink | y 0–84 | Hover 0.15s | — |
| 6 | The living field as emotional centre | Three photographs drift at different speeds | Cells 1, 2, 3 | `sp-parallax`, `--sp-par` 6% / 9% / 12% | H1, H2, H3 |

## 2. Colour

| Role | Hex | Source | Use | Share |
|---|---|---|---|---|
| Ground | `#F4F4F1` | mud `#F2F2F2`, andmade `#F6F6F4` [tok a], between them | page ground | about 78% |
| Band | `#FFFFFF` | mud index band [tok a] | T2 band, Works captions | about 12% |
| Ink | `#0D0E0B` | mud `#000000`, lightness +4.9% | text, frame, rules in T1, dot, buttons | about 6% |
| Rule | `#CFCFCB` | mud about `#CFCFCF` [tok a] | row rules, dot-link underline | under 1% |
| Chip | `#DFE0DA` | mud `#DDD` [tok d] | tag chips | under 1% |
| Muted sage | `#5E6254` | darkened row colour; replaces andmade grey `#8A8A86` | meta, captions, contour lines (5.7:1 on ground, 6.3:1 on white) | under 2% |
| Sage | `#888C7B` | row colour rikyu-nezumi; nearly identical in lightness to andmade grey `#8A8A86` | large figures' hover, button hover, focus ring; never body text (3.1:1) | under 1% |

Why sage is added: the reference has no accent at all. The row asks for rikyu-nezumi, and it takes the role and lightness of andmade's grey, so the page stays monochrome at a glance. Everything else is a reference value or within ±5%. No beige-led page, no colour block. Saturated colour comes only from photos below the first screen, as in mud's Works.

First-screen limit: **0.0%**, section 0. No UI colour here has saturation above 35%.

## 3. Type

Direction **sans**: Latin headings and body sans-serif, CJK Noto Sans TC / JP. No serif or Ming-style face anywhere.

- Display: Figtree 500, 600. Body: Public Sans 400, 500, 600 (mud's own Latin face [tok b]). Mono: system stack only, no font file: `ui-monospace, "SFMono-Regular", Menlo, Consolas, monospace` [tok b].
- `--display` en, fr, de: `"Figtree", system-ui, sans-serif`. Body: `"Public Sans", system-ui, sans-serif`.
- zh-TW: display `"Figtree", "Noto Sans TC", sans-serif`; body `"Public Sans", "PingFang TC", "Microsoft JhengHei", sans-serif`.
- ja: display `"Figtree", "Noto Sans JP", sans-serif`; body `"Public Sans", "Hiragino Sans", "Yu Gothic", sans-serif`.
- Repo contract: body stacks never contain the bundled zh or ja fonts; the display stack carries them.
- Load all fonts through theme.json `fontFamilies` + `fontFace`, including zh-TW and ja subsets, so editor and front end match. `style.css` will have `:lang(` rules, so copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and require it. Use the Hokuto/Hada subset workaround. List every file in theme-meta `fonts[].files` with license, and name each family in readme.txt.
- zh-TW and ja: headings about 0.75× the English size, body line-height 1.85, tracking .04em. fr and de: `hyphens: auto`.

| Preset | rem (px) | Use | Token |
|---|---|---|---|
| tiny | 0.75 (12) | mono, left label, chips | tok b |
| small | 0.8125 (13) | meta, weight 500–600 | tok b |
| base | 1.125 (18) | body, line-height 1.7 | tok b |
| medium | 1.75 (28) | lead, weight 500, line-height 1.1, tracking -.01em | tok b, andmade |
| large | 2.25 (36) | H2, weight 600, line-height 1.3; section heads uppercase | tok b |
| x-large | 4.5 (72) | hero wordmark only, weight 600, line-height 1 | gate, KV |
| xx-large | 5 (80) | T2 figures, inner page H1, weight 600, line-height 1, mixed case, left aligned, two lines in en | tok b |

Nav: Figtree 600, 1.25rem (section 0), uppercase. Inner H1 on phone: `clamp(2.75rem, 10vw, 5rem)`.

## 4. Spacing, radius, motion tokens

- Header sticky, `#F4F4F1`, 84 px, no rule; gutter 40 px [tok c].
- Vertical gap between blocks 160 px desktop, 80 px phone; page gutter 40 px desktop, 20 px phone [tok c].
- Radius 0 everywhere, no shadow [tok d]. Button: ink fill, ground text, 0.8125rem 600, padding 12px 20px, radius 0; hover sage fill with ink text.
- Hover: colour 0.15s `cubic-bezier(.25,.46,.45,.94)` [tok g].

## 5. Home page (en at least 250 words, target about 430; narrative paragraphs at least 20 words in blocks 2, 5, 6, 8)

### Header
Left: wordmark "Aya Paper" Figtree 600 1.75rem. Centre: Shop, Papers, Weights, The Counter, Journal, About (row nav `centered`). Right: Contact + 8 px dot, cart with count, language switcher. One menu only. Under 1100 px: wordmark left, cart, menu button; nav and languages in the overlay.

Footer: ground, 1 px ink rule on top, gutter 40 px. Left: wordmark, address, hours. Right: two link columns. Copyright 0.75rem mono.

### First screen (1440×900)
Frame as T1 with height `clamp(560px, calc(100svh - 124px), 860px)`. Each cell is a Group `sp-parallax` holding `figure > img` with `object-fit: cover`; keep subjects inside the central 70% because the layer scales 1.18. `hero-contour.svg` is a decorative `aria-hidden` sibling above the cells, never inside a moving layer, `pointer-events: none`. Plate and text are also siblings of the cells and do not move.

Forbidden here: table, form, search box, button, any colour fill, reveal, a centred statement.

### Block order

| # | Pattern | Purpose | Layout and photos | Copy | Motion |
|---|---|---|---|---|---|
| 1 | `front-hero` | KV | T1, H1 H2 H3 | 8 words | parallax 6/9/12% |
| 2 | `front-shop` | What the shop is | Ground. "ABOUT" head x=40. Photo A1 4:5, 560 wide at x=151. Text at x=848, width 552: lead `medium` two lines, narrative paragraph, dot link → About [tok c] | 80 words | zoom on A1 |
| 3 | `front-papers` | Which papers it keeps | White band. Head "PAPERS WE KEEP" + one line, then **T2** six rows; dot link "All papers" → Papers | 30 words + rows | none (prices) |
| 4 | `front-counter` | Pause, the shop in one look | Full-bleed `sp-parallax` Cover, C1, 640 px; nothing on the photo. One chip + one line below, x=40 | 15 words | parallax 10% |
| 5 | `front-weights` | Who each weight suits | Ground. Label "Who each weight suits" x=24. Lead `medium` at x=198, width 860, three lines, narrative. **T3** nine entries | 110 words | stagger + up |
| 6 | `front-wrap` | How a counter order is wrapped | Head "AT THE COUNTER" x=40. T1 small: frame x 40–1400, three equal cells, each photo 3:2 (W1 W2 W3) at the top and prose below, 40 px padding, cell rules running full height. Three prose paragraphs: Feel, Cut, Wrap, no numerals, no icons | 3 × 35 words | none |
| 7 | `front-pair` | Envelopes and notebooks | mud Works: E1 and N1, 2-up, edge to edge, 720×400 (1.8:1), 0 gap. White captions 190 px [tok c]: small label, title 1.25rem, chip, grey mono list. Price in the mono list | 40 words | zoom |
| 8 | `front-visit` | Visit and hours | Ground. Left x=40, width 560: head "VISIT", narrative paragraph, address, hours as two ruled rows. Right: V1 3:2, x 760–1400 | 70 words | zoom on V1 |
| 9 | `front-journal` | Stories | Query Loop, three posts in T3 column x positions, 3:2 image above an underlined title and mono date. Dot link → Journal | Query Loop | none |
| 10 | `front-close` | Invitation | T1 small: frame x 40–1400, height 420 px, only rings, no photo. H2 and dot link low right, inside, as mud's wordmark | 18 words | none |

Photo positions on home: 3 + 1 + 1 + 3 + 2 + 1 + 3 = **14**, each image once.

### Comparison with recent homes

| # | Noboru Lifts | Shiki Linen | Hashira Partners | Ushio Line | **Aya Paper** |
|---|---|---|---|---|---|
| 1 | drifting drawings, open paper | three bare panels, centred statement | ruled two-line headline | triple panels in a huge-radius frame | **1 px frame, three cells, rings across, wordmark plate** |
| 2 | intro | tone-on-tone photo + text | vision | split About | **About split, photo + right column** |
| 3 | sticky visit cards | edge staircase | marquee | piers route | **spec rows on white** |
| 4 | buildings | six-tone strip | case panel | sailing day band | **full-bleed parallax** |
| 5 | mood break | spec table | buildings | water parallax | **three-column text catalogue** |
| 6 | sheet | photo + prose stages | viewing | crew split | **three-cell frame, prose** |
| 7 | fees | washroom parallax | request | fares | **2-up edge-to-edge pair** |
| 8 | crew | portrait pair | — | story | **visit** |
| 9 | stories | price list | — | access | **text-led journal** |
| 10 | book | ring close | — | notices | **rings-only frame** |

Why not alike: Shiki Linen is the nearest, with three panels and a spec catalogue. Ours has no separate margined panels, no statement under them, no table on the home, no gradation, no staircase, and its photos are locked into one ink-ruled frame with lines crossing them. Shiki's ring close holds a circle with centred text; ours is a full frame with low-right text. Ushio's frame is huge-radius and white; ours is hairline and square. Used-list checks: not a framed window over a full-bleed ground (Awa, Mame), not a giant title crossing a frame (Fumi), not coloured small numerals with caps titles (Hayate), not a ruled grid with mixed-ratio photos (Kogu), not a hover-thumbnail list (Shiori).

## 6. Inner pages (at least 10 + WooCommerce)

Every page: left-aligned H1 at xx-large, two lines in en, one `medium` lead, then the continuation in section 1. No sidebar.

1. **Shop** (`archive-product`, `taxonomy-product_cat`, `taxonomy-product_tag`, `product-search-results`): small frame head; result count + ordering; 3 columns (2 at tablet, 1 on phone), gap 1 px rule grid; card image 4:5, radius 0, name Figtree 600 1.125rem, mono gsm line, price. Add-to-cart is a dot link.
2. **Single product** (`single-product`): framed gallery left; right column: chip, title large, price, spec row, quantity, ink button; line "Free delivery over €60 · Counter wrap free". Below: when to use it, related products.
3. **Papers** (`page-papers`): core catalogue. Six T2 rows, each followed by 80 words: surface, how ink behaves, who it suits, cutting notes. Photo PA1–PA6 at 3:2 by each.
4. **Weights** (`page-weights`): plain explanation of gsm with no measured claims; six compact rows; T3 with 18 entries by use.
5. **The Counter** (`page-counter`): the three steps at full length, cutting to size, how to bring in a sample, Thursday paper clinic.
6. **Envelopes & Notebooks** (`page-envelopes-notebooks`): E1, N1, sizes, which paper fits which envelope; stitched notebook made in the shop.
7. **Prices & Delivery** (`page-prices`): price table section 8, delivery, returns, cut-to-size terms.
8. **About** (`page-about`): founded 2011 in Ghent, why the range stopped at six papers, the seven people as a T3 list.
9. **Journal** (posts page, `home.html`, `archive.html`, `category`, `tag`): first post large in a frame, then underlined list. **Single post** (`single.html`).
10. **Newsletter**: `screens.newsletter` points to Journal.
11. **Contact** (`page-contact`): framed V1, address, email, hours as rows, how to bring a sample; no form needed.
12. **Cart, Checkout, My account, Order received**: head at large, totals column on white with 1 px ink frame, ink buttons. Must not fatal with WooCommerce off; Shop then shows the T2 rows as plain text and a note.
13. **404, search**: head + dot link home.

Repo contract: `pages` in theme-meta: home, shop, product, papers, weights, counter, envelopes-notebooks, prices, about, news, article, category, tag, newsletter, contact, search, each with a `screens.*` URL. Include `templates/tag.html`, a `store` block with `plugin`, `required: false`, `templates`, `sampleProducts: 8`, `withoutPlugin`, and `quality_gate: 2`. Exactly one posts-role page. Posts need categories and tags. No words in CSS `content:`; every label stays in block markup. Theme files in English only, apart from demo-content zh-TW and ja files.

## 7. Photos (17, one at a time, read each one)

Imagery: photo. All generated with `scripts/grok-image.sh`, no cut-outs, each at most 300 KB and 2000 px. No Japanese elements. Paper in every image is blank: no writing, no printing, no labels.

STYLE (exact, every prompt):
`high-key documentary photograph, 50mm lens, bright soft window daylight, white walls, pale grey and white surfaces, blank uncoated paper, pale sage and grey tones, low-saturation grade, fine paper fibre texture visible, calm candid moment in a modern international neighbourhood shop, diverse adults, hands and paper as the subject, faces cropped out or turned away, no text, no logos, no labels, no signage, no printing, no writing on paper`

First-screen grade (deterministic): after generation, clamp HSV saturation of H1, H2, H3 to at most 0.30 and write those files as the versions used. Then `--max 0.0` passes whatever the skin tone. Check the hands still look natural. Other images keep the STYLE grade. Do not use a saturated object on H1–H3.

| ID | Subject and composition | Ratio | Used on (once per page) |
|---|---|---|---|
| H1 **home** | Shopkeeper's hands tearing a thick white cotton sheet along a steel rule on a pale grey cutting mat, deckle edge visible, torso cropped | 0.58 | Home hero; Counter |
| H2 **home** | Customer's raised hands holding two pale envelopes against a bright window, light through the paper, one white, one pale kraft | 0.58 | Home hero; Envelopes & Notebooks |
| H3 **home** | Stack of plain notebooks on a white shelf, spines out, thread stitching visible, no marks | 0.58 | Home hero; About |
| A1 **home** | Shop interior: wall of pale shallow paper drawers and one long table, one person seen from behind | 4:5 | Home shop; About (frame) |
| C1 **home** | Wide view of the long counter from the side: cutting mat, sheets, rolls of cotton tape, window light, one person at far left | 16:7 | Home counter; Prices |
| W1 **home** | Fingers flexing the corner of a sheet between thumb and forefinger, close | 3:2 | Home wrap; Counter; Weights |
| W2 **home** | Hands drawing a craft knife along a metal rule through a stack of sheets, close | 3:2 | Home wrap; Counter |
| W3 **home** | Hands tying pale cotton tape around a flat parcel of plain kraft paper, close | 3:2 | Home wrap; Counter; Prices |
| E1 **home** | Fan of plain envelopes on a white table, top view | 1.8:1 | Home pair; Envelopes & Notebooks; product Envelopes |
| N1 **home** | Open blank stitched notebook beside two closed ones, top view | 1.8:1 | Home pair; Envelopes & Notebooks; product Notebook |
| V1 **home** | From inside the shop looking to the glazed door and street light, plain unlettered glass, customer entering | 3:2 | Home visit; Contact |
| PA1 | Macro stack of airmail bank sheets, translucent, edges fanned | 3:2 | Papers; Shop; product; Journal post 4 |
| PA2 **home** | Macro stack of bright white bond sheets, square-cut edges | 3:2 | Papers; Shop; product; Home journal post 2 |
| PA3 | Macro of laid paper held to light, chain lines visible | 3:2 | Papers; Shop; product |
| PA4 **home** | Macro stack of soft wove sheets, faintly warm white | 3:2 | Papers; Shop; product; Home journal post 1 |
| PA5 | Macro stack of grey card, thick square edges | 3:2 | Papers; Shop; product |
| PA6 **home** | Macro stack of cotton rag sheets with deckle edges | 3:2 | Papers; Shop; product; Home journal post 3 |

Per page, no repeats: Home 14 unique (H1–3, A1, C1, W1–3, E1, N1, V1, PA4, PA2, PA6). Papers: PA1–PA6. Shop: frame H3 W1 V1, cards PA1–PA6 E1 N1. Journal index: PA4, PA2, PA6, PA1. Counter: H1, W1, W2, W3. Prices: C1, W3. About: A1, H3. Contact: V1. Envelopes & Notebooks: E1, N1, H2. Weights: W1.

## 8. Fixed facts (home, inner pages, all five languages; no others)

**Brand**: Aya Paper, founded **2011**, shop at **17 Papierstraat, 9000 Ghent, Belgium** (fictional address). hello@ayapaper.example. Open **Tuesday to Saturday, 10:00–18:00**. Thursday paper clinic **16:00–18:00**. Currency **EUR** in every language, no conversions.

**Audience and tone**: people who write, draw or print at a desk every day, students, small studios, anyone sending a letter. Plain, exact, a little dry, no claims of best or finest. **A day**: 09:00 deliveries unpacked; 10:00 door opens; samples cut through the morning; 14:00 notebooks stitched; 16:30 parcels leave; brand.md must describe this daily routine.

**People (7)**:
| Name | Role |
|---|---|
| Aya Mensah | founder, the counter |
| Joris Van Acker | cutting and sample sets |
| Leila Benali | buys paper from the mills |
| Hanna Kowalczyk | stitches the notebooks |
| Tomás Rivera | wrapping and parcels |
| Ravi Nair | web orders |
| Greta Lindholm | Thursday paper clinic |

**Price list and sample products (8)**:
| Item | gsm | Size | Sheets / pack | Suits | Price |
|---|---|---|---|---|---|
| Airmail Bank | 45 | A4 | 100 | long letters abroad | €9 |
| Everyday Bond | 80 | A4 | 250 | daily writing and printing | €12 |
| Laid Writing | 100 | A4 | 100 | letters by hand | €14 |
| Soft Wove | 120 | A4 | 50 | fountain pens | €13 |
| Grey Card | 250 | A5 | 25 | cards and backing | €11 |
| Cotton Rag | 300 | A3 | 10 | watercolour and invitations | €24 |
| Plain Envelopes | 120 | C6 | 25 | one A4 folded twice | €8 |
| Stitched Notebook | 100 | A5 | 96 pages | everyday notes | €16 |

Cutting to size at the counter and the kraft wrap are **free**. Categories: Paper, Card, Envelopes, Notebooks. Tags: light, medium, heavy, cotton, laid.

**Home T2 rows**: the first six items, Suits as shown.

**Home T3 nine entries** (title; paper): Letters abroad (Airmail Bank) · Thesis drafts (Everyday Bond) · Household printing (Everyday Bond) · Letters by hand (Laid Writing) · Fountain pen notes (Soft Wove) · Thank-you cards (Grey Card) · Mounting and backing (Grey Card) · Invitations (Cotton Rag) · Watercolour studies (Cotton Rag).

**Delivery and returns**: free over **€60**; otherwise flat **€7** in the EU, **€16** elsewhere. Dispatched in **2 working days**. EU delivery **3–5 working days**, elsewhere **6–10**. Returns **30 days** unopened; paper cut to size cannot be returned.

**Counter process (3 steps)**: Feel (hold the sheets to the window) · Cut (cut to size at the mat) · Wrap (kraft paper, tied with cotton tape).

**Stories (4 Journal posts)**: "Two envelopes at the window" (Noor, Ghent; Soft Wove and Plain Envelopes) · "A thesis on Everyday Bond" (Bram, Leuven) · "Forty invitations, one sheet at a time" (Sofia and Dan, Antwerp; Cotton Rag) · "Weight is not thickness" (note by Leila Benali, no measured claims). Dates put posts 1–3 newest, so Home shows them.

## 9. Scroll effects

Three effects (the limit). Hero has no reveal. T2, price tables, forms and legal text have none.

| Effect | Where | Source trigger, time, easing | Implementation |
|---|---|---|---|
| Staggered rise | Home block 5, nine T3 entries; left label; T3 lists on inner pages | andmade.jp: class toggled in view, 0.9s `cubic-bezier(.22,1,.36,1)`, delays .12/.23/.34s, about 24 px [tok g] | Grid `.sp-stagger`, each entry a direct child `sp-reveal sp-reveal--up`. Label also `sp-reveal--up`. On the grid: `--sp-dur: .9s; --sp-ease: cubic-bezier(.22,1,.36,1); --sp-dist: 24px`. The built-in stagger of 0.12s stays (andmade 0.11s) |
| Photo zoom | Home blocks 2, 7, 8 and same photos on Counter, Contact | Our addition, mud has none; small and quiet | Frame Group `overflow: clip`, child `figure.sp-reveal.sp-reveal--zoom`, default 1.6s |
| Parallax | Section 10 | Section 10 | Built-in only |

Cap check: reveal count stays at or under 60% of home blocks' elements; first section has 0. Delay is on `transition-delay`, so any hover on T3 titles sets `transition-delay: 0s`.

## 10. Parallax (required)

| Where | Background | Foreground | `--sp-par` desktop | Phone | Reference motion |
|---|---|---|---|---|---|
| **Block 4, main** | C1 in Cover (`.wp-block-cover.sp-parallax`), full bleed, 640 px, 360 px on phone | None | **10%** | 7% | mud's sticky header and the page sliding beneath it, plus its living field; the speed difference is ours |
| Hero cells | H1, H2, H3, `figure > img` | None inside; contour and plate are siblings outside the moving layer | **6% / 9% / 12%** | 6% / 7% / 8% | mud ring field (drift unverified, section 0) |

Each hero cell has its own `sp-parallax`, so speeds differ. Use only sp-scroll's built-in parallax. `check-parallax.mjs` must pass on desktop and phone (at least 6 px difference, 0 in reduced motion).

## 11. Responsive

- **390 px first screen**: header 64 px; frame inset 20 px. Inside the frame, H1 cell full width, ratio 7:6; H2 and H3 below as two equal cells, ratio 0.8, all separated by 1 px rules; rings stay inside the frame. Wordmark and tagline leave the plate and sit **below the frame, in normal flow**, left aligned, wordmark 3rem. No vertical text, no absolutely positioned label over text.
- T2 under 782 px: stacked. Figure line, then name, then a two-by-two spec grid, each value with its visible label from the markup. Price `nowrap`.
- T3 under 782 px: one column at 20 px gutter, label in flow above; under 1100 px two columns. Not sticky under 1100 px.
- Block 6: cells stack with horizontal 1 px rules. Pair: stacked, 1.8:1. Blocks 2 and 8: photo first, then text.
- **Tables**: the price table at ≥782 px is the full container width, never cut. Price column `white-space: nowrap`, right aligned. Under 782 px every table becomes stacked rows (`display: block`; labels are written in the markup, never in CSS `content:`).
- No horizontal scroll at 390, 800, 1280; `html, body { overflow-x: clip }`.

## 12. Similarity table (target 80%)

| Dimension | mud / andmade | Aya Paper |
|---|---|---|
| Ground | `#F2F2F2` / `#F6F6F4` | `#F4F4F1` |
| Band | `#FFFFFF` | `#FFFFFF` |
| Ink | `#000000` | `#0D0E0B` |
| Row rule | about `#CFCFCF` | `#CFCFCB` |
| Accent | none | sage, under 1%, grey-like |
| First-screen saturation | 0.0% | 0.0% |
| Body | 18/36, .04em, 400, Public Sans | 18/30.6, .01em, 400, Public Sans; CJK .04em |
| H2 | 36/46.8, 600, uppercase | same |
| Index title | 80/80, 600, mixed case | same, on figures and inner H1 |
| Lead | 28/1.0, 500, -.01em | same, line-height 1.1 |
| Meta, mono | 13 px 600; 12 px mono | same |
| Nav | 24 px 600 uppercase | 20 px 600 uppercase |
| Header | 84 px, logo left, nav centre, Contact + dot | same, plus cart, languages |
| Hero frame | 1 px black, inset 40, 1360×776 | same, ink |
| Hero art | rings across the frame | own rings + deckle line across three photos |
| Wordmark | low right inside the frame | same, on a plate |
| Row columns | x 40 / 151 / 848, height 353 | x 40 / 320 / 848, height 192 |
| Catalogue columns | x 198 / 546 / 894, label x 24 | same |
| Works | 2-up, 1.8:1, edge to edge, 190 px caption | same |
| Radius, shadow | 0, none | same |
| Chip | 4 px padding, `#DDD`, mono | `#DFE0DA`, same |
| Dot link | 8 px dot, 1 px rule | same |
| Reveal | 0.9s `cubic-bezier(.22,1,.36,1)`, 0.11s stagger | same, 0.12s stagger |
| Hover | 0.15s `cubic-bezier(.25,.46,.45,.94)` | same |

## 13. Home acceptance checklist

1. First screen matches the KV checklist at 1440×900: 1 px ink frame at x 40–1400, y 84–860; three equal cells at 0 gap with 1 px rules; rings and deckle line cross both rules; all six items visible.
2. `check-first-screen.py --max 0.0` passes on the 1440×900 shot.
3. Plate with H1 and tagline low right, inside cell 3; no table, form, search, button, or giant centred text on the first screen.
4. Header: wordmark left, centred uppercase nav, Contact + ink dot, cart, languages right; one menu.
5. T2: six rows, edge-to-edge rules, 5rem ink figures, four-cell spec strip on a white band.
6. T3: nine underlined entries at x 198 / 546 / 894, text only, left label, staggered rise.
7. Block 6 and block 10 repeat the frame; block 10 has rings, no photo.
8. Pair is edge to edge at 1.8:1, with chips and mono captions.
9. Block order equals section 5; 14 image positions, none repeated; no card grid, step grid, people grid, timeline, side rail, cut-outs.
10. Numbers equal section 8 exactly.
11. Colours and sizes equal sections 2–4; radius 0 everywhere; no kraft in the UI.
12. Photos pass the read check: no text, no logos, no broken hands, one grade; H1–H3 clamped and still natural.
13. Motion: stagger + up, zoom, parallax; none in hero or T2. `check-parallax.mjs` passes with block 4 at 10% and hero at 6/9/12%. `auto-gates.mjs` passes. Rings stop in reduced motion and `?sp-static`.
14. Responsive: 390 px first screen has the wordmark in normal flow below the frame, no overlap; no horizontal scroll at 390, 800, 1280.
15. Editor and front end show the same fonts (`check-editor-fonts.mjs`). Home has at least 250 English words and 3 narrative paragraphs.
