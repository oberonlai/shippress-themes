# Kaban Luggage: design spec (stage 1, binding for implementation)

Slug `kaban-luggage`, luggage and travel-goods shop, type **store** (WooCommerce required, checkout must work; the site must not fatal with WooCommerce off). Row b25-4: archetype card-mosaic, hero product-grid-hero, nav split, first_screen horizontal-scroll-strip, page_structure spec-catalogue, photo_direction low-key, font_direction **sans** (Outfit / Albert Sans, CJK Noto Sans TC / Noto Sans JP).

Reference (only one, S5-Style entry): **jibie-varied.com** (https://jibie-varied.com/), a leather-goods brand. Measurements in `reference-tokens.md` (cited below as `tok(a)`…`tok(g)`), screenshots in `ref/`. We borrow structure, techniques, colour relationships, motion and the key-visual concept. We copy no photos, copy text, logos or code.

Similarity target: about **80%** in colour, image treatment, scroll motion, decoration and layout (table in §12).

Fixed brand facts (every page, all five languages): **Kaban Luggage**, founded **2009**, one shop with a back-room workshop at **Veerkaai 14, 2000 Antwerp, Belgium** (fictional address). Founder and head fitter **Ines Vandamme**. Currency **EUR** in every language; no converted prices.

---

## 1. Signature techniques (three, all obvious at a glance)

### T1. Dark macro first screen with a radial vignette and a blur-zoom resolve (jibie-varied.com first screen, `ref/first.png`)
- **Reference:** the whole first screen is one low-key macro of leather (a diagonal fold running from lower left to upper right) on a near-black ground `#0D0C0A`. The photo has a radial mask that fades into black at the edges. A tiny caps label sits over a small wordmark. The header shows only "Shop" (bag icon) on the left and "Menu" (two hairlines) on the right. One warm orange leather sliver lights the bottom-right corner, about 5% of the screen. On load the image goes from a large blurred zoom to sharp.
- **Kaban:** home block 1 `front-hero`. See §2 and §3 for the exact build.
- **Shape and proportion:** full bleed, `min-height: 100svh` (min 720 px). Image mask `radial-gradient(ellipse 56% 56% at 50% 50%, #000 40%, transparent 100%)` on the image layer (`tok(e)`: 56% radius), so the photo dissolves into `#0D0C0A`. The bright diagonal (shell seam and handle) runs lower-left to upper-right, the same direction as the reference fold. One warm bark highlight (`#6B5848` to `#8A6E55` range in the photo) sits bottom-right.
- **Must not be diluted:** the ground stays near-black `#0D0C0A` (no grey or brown wash, no lightened overlay). The vignette must be visible (the corners are black). The label and wordmark stay small (wordmark ≤ 4.5rem, label 0.8125rem). No headline sentence over the photo, no button in a colour.

### T2. Chapter row: abutting photo pair flush left + vertical title at the right edge (jibie-varied.com collections, `ref/scroll-9600.png`)
- **Reference:** two photos of different widths touch each other, with no gap. The left one is about 65% and the right one about 35%, and together they make about 2.14:1 (1103×515 at 1440, `tok(e)`). They run flush to the **left viewport edge** and have no radius. At the right edge a very large vertical title (`writing-mode: vertical-rl`, about 8–10rem, line-height 0.9) has a small "(01)" above it and a thin vertical oxblood Latin sub-label beside it on its left. The body text (wide tracking) sits under the photos at a 110 px inset. At the bottom right a 1 px olive hairline about 100 px tall carries "(02) next-name" as an index that peeks into the next chapter.
- **Kaban:** home block 4 `front-parts`, three chapters: **(01) Shell**, **(02) Handle**, **(03) Wheels**. These are the three parts a fitter checks against the trip. The same component opens 6 inner pages (§5).
- **Geometry at 1440:** a grid row with photo pair width `76.6vw` (1103/1440) flush left at x=0, then the title column `23.4vw`. Pair height = pair width / 2.14 (≈ 515 px). Left photo 65% and right photo 35% of the pair width, gap 0, radius 0. Title column: "(01)" Albert Sans 1.125rem, `#251B0F`, centred over the title, 24 px above it. Title Outfit 200, `clamp(4.5rem, 7.5vw, 7.5rem)`, `line-height: .9`, `writing-mode: vertical-rl`, `#251B0F`, top aligned with the photo top minus 40 px. Sub-label Outfit 300 1.5rem `#8D0000`, `writing-mode: vertical-rl`, 16 px left of the title, starting about 45% down the title. Text below: max-width 760 px, left inset 110 px, 64 px under the photos. Next-index: absolutely placed **inside the chapter's own bottom-right box** (desktop only), `border-left: 1px solid #8A8466` (olive hairline), height 100 px, label "(02) Handle" Albert Sans 0.875rem at its top right.
- **Section rhythm:** each chapter is about 1.2 viewports tall (`tok(c)`), with `padding-block: 120px` (`tok(c)` pt-30).
- **Must not be diluted:** the photos touch (0 px gap) and are flush to the left viewport edge (no container margin). The widths stay 65/35 (not 50/50). The title is vertical and ≥ 4.5rem on desktop and reads as the largest thing in the row. The oxblood sub-label and the "(0n)" numeral are both present. The next-index hairline peeks on every chapter except the last one on a page.
- **Not the same as akari-hotel T1 (used list):** our title never overlaps the photo. It sits in its own column beside an abutting **pair**, set vertically.

### T3. Dark-to-paper hand-off with grain, scratch lines and photos that dissolve in from the top (jibie-varied.com, `ref/scroll-4800.png`)
- **Reference:** after the dark scenes, the page turns to warm grey paper `#EBE7E1` with a fine grain and a few thin pale scratch lines. A tall photo (678×740, 0.92:1) runs flush to the left edge. The text column on the right has wide tracking. An oxblood Latin sub-label sits at the top right of the column. Photos fade in from the top through a linear mask (transparent 0% to opaque 30%).
- **Kaban:** home block 3 `front-counter` (first paper section), and the ground of every paper section on every page. The top-dissolve mask is used on the counter photo and on every T2 photo pair (§8).
- **Paper:** `background-color: #EBE7E1` plus two layers: (1) grain, an inline SVG `feTurbulence` (baseFrequency .9, 2 octaves) data URI at `opacity .07` multiplied; (2) scratch lines, one SVG file `assets/images/scratches.svg` (6–9 hand-drawn thin strokes, 0.6–1.2 px, colour `#D2CAB8`, random angles 20–70°) set as `background-size: 1440px auto`, repeat-y. Decorative only, no text.
- **Static photo mask (always on):** `mask-image: linear-gradient(to bottom, transparent 0%, #000 30%)` is **not** kept permanently, because that would wash out the photo top. It is used only as the reveal start state through `sp-reveal--mask` (§8). The final state is the full photo.
- **Must not be diluted:** the paper must read as warm grey with visible grain (not flat beige, not white). The scratches must be visible at 100% zoom. The first paper section must come **directly after** the dark band, so the dark-to-paper change is one sharp horizontal edge.

### Supporting (not counted): sticky footer reveal (jibie-varied.com, `tok(f)`)
`main` gets `position: relative; z-index: 1; background: <its last section ground>`. The footer is `position: sticky; bottom: 0; z-index: 0` on `#0D0C0A`, with a vertical "Next trip" word (Outfit 200, 6rem, vertical-rl, `#2A2622`, desktop only) at its right edge. If it breaks auto-gates (overflow, overlap) or the editor, drop the sticky behaviour and keep the dark footer. Do not drop the footer.

### Continuation to inner pages (T1 on all, T2 on 6, T3 on all)
| Page | T1 (dark vignette head) | T2 (chapter row) | T3 (paper + mask dissolve) |
|---|---|---|---|
| Parts guide `page-parts` | head band with H1 | 3 full chapters Shell / Handle / Wheels (K1+K2, K3+K4, K5+K6) | yes |
| Fitting `page-fitting` | head band with K3 | 1 chapter "(01) Fitting" F1+S1 | yes |
| Workshop & repairs `page-workshop` | head band with K6 | 1 chapter "(01) Repair" W1+K5 | yes, price list on paper deep |
| Ordering & delivery `page-ordering` | head band with V1 | 1 chapter "(01) Order" P2+K2 | yes |
| About `page-about` | head band with H2 | 1 chapter "(01) Since 2009" S1+K4 | yes |
| Visit / Contact `page-contact` | head band with V1 | 1 chapter "(01) Visit" H1+K3 | yes |
| Shop / product / stories / cart | head band (smaller, 36vh) | — | yes |

**Inner head band (T1 small):** `min-height: 52vh` (36vh on shop, product, stories and cart pages), `#0D0C0A`, the page image full bleed with the same radial vignette mask, a small caps label (Albert Sans 0.8125rem, letter-spacing .2em, `#A2998C`) and the page title in Outfit 300 `clamp(2.6rem, 5vw, 4.5rem)` `#EBE7E1`, bottom-left at the 110 px inset. A CSS-only resolve (blur 8px to 0, scale 1.15 to 1.05, 1.6 s) is allowed here under the same rules as §3.

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
- **What it draws:** an extreme close-up of the raw material (a fold of dark leather with visible grain) lit by one hard side light, filling the screen and vignetting into black. A tiny label and wordmark sit in the centre. An orange leather sliver catches the light in the bottom-right corner.
- **Story:** "we know this material from its source, so what you carry is honest." The material comes first and the products come later. Then a dark forest scene (`ref/scroll-1800.png`) shows where the material comes from, with vertical lines of text appearing one by one.
- **Signature motion:** after load, the image resolves from a big blurred zoom (scale 160% to 110%, blur 12 px to 0) over 2500 ms with a 1500 ms delay, `cubic-bezier(0,.55,.45,1)` (`tok(g)`). Then the vertical lines in the dark scene appear one after another (about 0.8 s each, 0.4 s apart).

### (2) Our transformation: same composition, same motion idea, same image type (low-key macro photograph)
- **Scene:** an extreme low-key close-up on the shop's fitting counter. A matte graphite case shell edge and its seam run diagonally from lower left to upper right. A fitter's hand presses the lid shut at the seam, and the customer's hand rests on the raised telescopic handle at the top right (checking the height). One hard side light comes from the right, and a warm bark glow from the wooden counter lights the bottom right. Near-black everywhere else.
- **Story:** "a case is fitted to the trip, not the other way round." The material and the fitting come first, and then the shells the shop stocks. Block 2 is the dark "trip" scene with three vertical lines (where, how long, how heavy), which is our counterpart of the forest lines.
- **Motion:** the same resolve on load (blur-zoom to sharp). The label and wordmark fade in after the image. On scroll, the hero image drifts (parallax) and the product strip at the bottom right scrolls sideways under the user's swipe and wheel. In block 2 the three vertical lines appear in sequence.
- **Row first_screen (horizontal-scroll-strip):** the reference has nothing but the material on screen. Our row asks for a product strip, so it becomes the **peeking strip of three stocked cases** at the bottom right of the hero, sitting where the reference has its orange sliver. It is the "what the shop stocks" hint without breaking the dark mood.

### (3) KV checklist (all six items built on the home first screen or, for #6, block 2 directly under it, and visible)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Dark macro of leather grain and fold filling the screen | Low-key macro of a graphite shell seam on the counter, the fitter's hand closing the lid, the customer's hand on the raised handle | full bleed, 100svh, diagonal lower-left to upper-right | `kl-resolve`: scale 1.5 to 1.1, blur 12px to 0, 2500 ms, delay 1500 ms, `cubic-bezier(0,.55,.45,1)`; plus `sp-parallax --sp-par: 8%` | **H1** |
| 2 | Radial vignette mask into black | Same radial mask on H1 (56% ellipse, black corners) | hero image layer | static | H1 |
| 3 | Tiny caps label + wordmark | "LUGGAGE FITTING · ANTWERP" label (Albert Sans 0.8125rem, .24em) over the wordmark "Kaban Luggage" (Outfit 300, `clamp(2.6rem, 5.2vw, 4.5rem)`), plus one 20-word line under it | vertically centred, left edge at the 110 px inset (8.33vw), max-width 560 px | fade in, opacity 0 to 1, 800 ms, delay 2400 ms (after the image) | — |
| 4 | Header: Shop left, logo centre, Menu right, transparent over dark | Split nav: bag icon + "Shop (0)" left, centred wordmark logo, 4 links + "Menu" (two hairlines) right; text `#EBE7E1` | top, 96 px tall, absolute over the hero | none | — |
| 5 | Orange leather sliver bottom-right | Warm bark highlight in H1 bottom-right **and** the peeking strip of three product tiles plus a fourth "All cases →" tile cut by the right edge | bottom-right, from 50% of the width to past the right edge, bottom 48 px | user scroll (scroll-snap); tiles brighten on hover 300 ms `cubic-bezier(.4,0,.2,1)` | **P1, P2, P3** |
| 6 | Dark forest scene with vertical text lines | Dark trip scene: a dim night platform, a case standing at the edge, three vertical lines "Where you are going, / how long you are away, / how much you carry." | block 2, directly under the hero, right half | `sp-stagger` + `sp-reveal--up` (lines one by one); background `sp-parallax --sp-par: 10%` | **H2** |

H1, H2, P1, P2 and P3 are in the image list (§9).

---

## 3. First screen (1440×900 and 390×844)

Structure (no absolute-positioned text, so the 390 px overlap gate passes):
```
section.kl-hero.sp-parallax  (alignfull, min-height:100svh, bg #0D0C0A, display:flex, flex-direction:column, justify-content:space-between, overflow:clip)
  figure.sp-parallax__layer > img.kl-hero__img  (H1, object-fit:cover, inset:0 via absolute layer = background layer only, mask radial)
  [header sits over it: template part, position:absolute top 0]
  div.kl-hero__copy  (flex item, margin-block:auto, padding-left:8.33vw, max-width:560px+inset)
     p.kl-label "LUGGAGE FITTING · ANTWERP"
     p.kl-wordmark "Kaban Luggage"
     p.kl-hero__line  (Albert Sans 1rem, #A2998C, 20 words: "Cases fitted to the trip you are actually taking: shells, handles and wheels, chosen at the counter.")
  div.kl-strip  (flex item, align-self:flex-end, width:50vw, margin-bottom:48px, overflow-x:auto, scroll-snap-type:x mandatory, scrollbar hidden, display:flex, gap:16px, padding-right:0)
     a.kl-tile ×3 (P1 Ridge Cabin 55 / P2 Lumen Cabin 55 / P3 Lumen Check 69)  + a.kl-tile--more "All cases →"
```
- The only absolute element is the image layer (decorative, no text). The header is absolute but is a separate row at the top and never covers the copy (the copy is vertically centred in the remaining space, and the hero has `padding-top: 96px`).
- **Tile:** width 248 px, image 3:2 on `#1A1A1A`, radius 0, caption under it: name Outfit 400 1rem `#EBE7E1`, line 2 "36 L · 2.4 kg · €260" Albert Sans 0.8125rem `#A2998C`. The fourth tile is a `#1A1A1A` box with "All cases →" in Outfit 300 1.375rem. Its right half is cut by the viewport edge (that is the peek). The strip shows 3.5 tiles at 1440.
- **Strip with WooCommerce:** a Product Collection block limited to the 3 products, with the same markup and class. Without WooCommerce: static images linking to `/shop/`.
- **Mobile 390:** `kl-hero__copy` padding-left 24 px, wordmark 2.6rem. The strip is full width with 24 px left padding and 1.4 tiles visible (tile width 220 px). The tile order stays the same. No vertical text in the first screen, no absolutely positioned labels. Parallax stays at `--sp-par: 5%`.
- **Forbidden on the first screen:** table, form, search box, large centred heading, coloured buttons, vertical text.
- **Saturated share** (`scripts/check-first-screen.py`): target ≤ 6%, gate **15%** (the row's 30% cap is looser, the pipeline's 15% applies). Keep P1–P3 product shells in graphite, bark and silver, and keep H1's warm highlight in bark, not orange.
- **Load motion (CSS keyframes, not sp-reveal, no JS):** wrap everything in `@media (prefers-reduced-motion: no-preference)` and prefix with `html.sp-js:not(.sp-no-motion)` so no-JS, `?sp-static`, reduced motion and the editor show the final state. `.kl-hero__img { animation: kl-resolve 2500ms cubic-bezier(0,.55,.45,1) 1500ms both }` with `from { transform: scale(1.5); filter: blur(12px) } to { transform: scale(1.1); filter: blur(0) }`. The final state is `transform: scale(1.1)` in every mode, so the static and animated end frames match. `.kl-hero__copy { animation: kl-fade 800ms ease-out 2400ms both }`. The parallax moves the **figure layer** and the resolve animates the **img inside it**, so the two transforms never fight.

---

## 4. Home page

### Block order
| # | Pattern | Purpose | Layout and photos | Copy (en) |
|---|---|---|---|---|
| 1 | `front-hero` | KV, entry, first look at stock | **T1**, §3. H1 + strip P1, P2, P3 | 20 words + tile captions |
| 2 | `front-trip` | the three questions a fitting starts with | Dark full bleed `#0D0C0A`, `min-height: 100vh`, `sp-parallax --sp-par:10%` on H2 (dim night platform, case at the edge, darkened to about 35% luminance). Right half: three vertical lines (`writing-mode: vertical-rl`, Outfit 300 1.375rem, letter-spacing .1em, `#EBE7E1`, column gap 56 px, staggered tops: line 1 at 34%, line 2 at 40%, line 3 at 46% of the height, the reference's stepped tops) inside `.sp-stagger`, each line `.sp-reveal.sp-reveal--up`. Bottom-left at x=23%: two lines of English sub-copy, Albert Sans 1rem `#867560`, line-height 1.9 | 3 lines + 35 words |
| 3 | `front-counter` | the story (fitting, not selling) | **T3** first paper section. S1 flush left, width 47vw, ratio 0.92:1, radius 0, `sp-reveal--mask`. Right column from 52.5vw to 90vw, vertically centred: oxblood sub-label "At the counter" (Outfit 300 1.5rem `#8D0000`, right-aligned at the column top), heading Outfit 400 1.375rem lh 1.4 ls .1em "A case is fitted to the trip, not the other way round.", 3 paragraphs Albert Sans 1.125rem lh 1.9, then a text link "How a fitting runs →" | 3 × 50 words (150) |
| 4 | `front-parts` | the three parts and the stocked shells (spec-catalogue) | Intro row on paper (not a giant word): oxblood "What a case is made of" + Outfit 300 2.6rem "Shell, handle, wheels." + 40-word paragraph, left at the 110 px inset. Then **T2 ×3**: (01) Shell K1+K2, (02) Handle K3+K4, (03) Wheels K5+K6. Under each pair: 2 paragraphs + a 3-row spec line list (e.g. Shell: "Aluminium 4.6–6.9 kg / Polycarbonate 2.4–3.6 kg / Waxed canvas 1.9 kg"), set as `<dl>` with 1 px `#D2CAB8` rules, not a table. The chapter ground alternates: Shell on `#EBE7E1`, Handle on `#DBD4C8`, Wheels on `#EBE7E1` | 40 + 3 × 70 words |
| 5 | `front-fitting` | how a fitting runs | Ink band `#1A1A1A`. F1 flush **right**, 47vw, 0.92:1, `sp-reveal--mask` (the mirror of block 3). Left column at the 110 px inset: oxblood-on-dark sub-label (`#B33A2E`, the oxblood +5% lightness for contrast on dark, see §6) "Forty minutes, free", heading 1.375rem `#EBE7E1`, then four ruled rows (1 px `#3A3530` rules), each "(1) The trip" + one sentence: (1) The trip, (2) The packing list, (3) The handle height, (4) The case. These are 4 text rows in one column, not a step grid and not a timeline. Then a link "Book a fitting →" | 4 × 25 + 30 words |
| 6 | `front-workshop` | repairs and price list | Paper deep `#D2CAB8`. Top: W1 21:9 full content width (1220 px), radius 0, `sp-reveal--mask`. Under it: left 4/12 heading "The workshop, behind the counter." + 50 words; right 8/12 the **price list** (7 rows, §10). Full width of its column at ≥782, price column `white-space: nowrap; text-align: right`. No reveal on the table | 50 words + table |
| 7 | `front-stories` | trips we fitted (card mosaic, row archetype) | Paper `#EBE7E1`. Heading row "Trips we fitted" + oxblood "Stories". Mosaic: a 12-column grid, 2 rows. Card 1 at columns 1–7 spanning both rows, image T1 4:5. Cards 2 and 3 at columns 8–12, one per row, images T2 and T3 at 3:2. Edges aligned, gap 24 px, radius 0. Caption under each image: category (Albert Sans 0.75rem caps `#6B5848`), title Outfit 400 1.25rem, date. Query Loop of posts 1–3 (sticky order) | titles + 20-word excerpt on card 1 |
| 8 | `front-visit` | visit the shop | Dark `#0D0C0A`. Left 6/12: V1 at 4:3 flush left, `sp-reveal--mask`. Right: "Visit the shop" heading, address, hours (§10), "Fittings take 40 minutes; walk in or book." + link to Contact. Then the sticky footer reveal | 60 words |

English home ≥ 250 words (planned ≈ 560) with narrative paragraphs in blocks 3, 4 and 5 (at least three). CJK home ≥ 500 characters.

**Home photo positions (18, all different):** H1 · P1 P2 P3 · H2 · S1 · K1 K2 K3 K4 K5 K6 · F1 · W1 · T1 T2 T3 · V1.

### Comparison with recent themes' home order
| # | Tabiji Clinic | Koe Interpreters | Hibari Flight | Ibuki Cardiology | **Kaban Luggage** |
|---|---|---|---|---|---|
| 1 | hero | hero | hero | hero | **dark macro hero + peeking product strip** |
| 2 | message | statement | approach | clinics | **dark trip scene, vertical lines** |
| 3 | journeys | briefs | circuit | first-visit | **counter story, photo flush left on paper** |
| 4 | hour | booth | licences | proof | **parts: three chapter rows (T2)** |
| 5 | record | day | lesson | problem | **fitting, ink band, photo flush right** |
| 6 | groups | rates | field | ticker | **workshop photo + price list** |
| 7 | fees | process | crew | fees | **stories card mosaic** |
| 8 | notes | notes | fees | follow-up | **visit (dark) + sticky footer** |
| 9 | visit | request | stories | people | — |
| 10 | — | — | trial | news / close | — |

Why not alike: none of the four starts with a near-black full-bleed macro and a product strip. None has a dark scene with vertical lines. None uses abutting different-width photo pairs flush to the viewport edge with vertical titles. The page runs dark → paper → paper-mid → ink → paper-deep → paper → dark, a ground rhythm none of them has. There is no people grid, no ticker and no step grid. The price list sits in a workshop context (6th), not as a stand-alone "fees" band.

---

## 5. Inner pages (spec-catalogue, ≥ 8 + WooCommerce)

Each page = T1 head band → T2 chapter row (where listed) → body on T3 paper → close line "Book a fitting →". No sidebar. One menu (header) only.

1. **Shop** (`archive-product.html`, `taxonomy-product_cat.html`, `product-search-results.html`): head band 36vh with K2. Category pills (Aluminium, Polycarbonate, Canvas & leather; 1 px `#251B0F` outline, radius 0, active = ink ground with paper text). Grid 3 / 2 / 1 columns, gap 32 px. Card: image 4:5 on `#DBD4C8`, radius 0. Spec line "36 L · 4.6 kg · 55×40×20 cm" in Albert Sans 0.8125rem `#6B5848`, name Outfit 400 1.25rem, price. Add to cart is a text link with an arrow.
2. **Single product** (`single-product.html`): gallery left 7/12 flush to the left viewport edge (the T2 flush), main image 4:5, summary right. Category label in oxblood Outfit 300 1.125rem, title Outfit 300 2.6rem, price, a **spec `<dl>`** (volume, weight, outer size, shell, wheels, handle heights, airline cabin fit), quantity + add to cart (ink `#251B0F` filled, paper text, radius 0), line "Free fitting in the shop · 30-day returns". The spec `<dl>` stacks to label-above-value under 782 px. Related products 3 across.
3. **Parts guide** (`page-parts`): head H1. Full T2 ×3 (Shell, Handle, Wheels, each 2 pairs of paragraphs). Shell chapter adds the **shell comparison table** (Aluminium / Polycarbonate / Waxed canvas × weight, dents, scratches, repair), full width at ≥782 and stacked cards under 782.
4. **Fitting** (`page-fitting`): head K3. T2 "(01) Fitting" F1+S1. The 4 fitting steps as ruled rows (same as home block 5, longer text), "What to bring" paragraph, the booking line (phone, email, hours). Fixed: 40 minutes, free, no purchase needed.
5. **Workshop & repairs** (`page-workshop`): head K6. T2 "(01) Repair" W1+K5. Full price list (7 rows, §10) on paper deep, turnaround 5 working days, "we repair cases bought elsewhere" paragraph, parts we keep in stock.
6. **Ordering & delivery** (`page-ordering`): head V1. T2 "(01) Order" P2+K2. Special orders (10–14 days, 20% deposit), delivery fees, collection in shop, returns 30 days, the fixed numbers in §10. Delivery table (Belgium / Netherlands & Luxembourg / rest of EU) full width ≥782 and stacked below.
7. **About** (`page-about`): head H2. T2 "(01) Since 2009" S1+K4. Story in 3 sections (2009 counter, the workshop, why we fit). **People** as a two-column ruled text list (name in Outfit 400 1.25rem, role, one sentence). There are 7 people and no portrait grid.
8. **Stories** (posts page `home.html`, `archive.html`, `category.html`, `tag.html`, `single.html`): head 36vh with F1. List = the T7 mosaic for the first 3 posts, then a ruled list. Single: oxblood category label, title Outfit 300 `clamp(2.4rem,4.4vw,4.25rem)`, featured image flush left 76.6vw with a 2.14:1 crop (a single-photo T2), text column 720 px.
9. **Visit / Contact** (`page-contact`): head V1. T2 "(01) Visit" H1+K3. Address, hours, phone, email, getting there (tram, parking), "walk-in fittings when the counter is free". No map embed, no form required.
10. **Cart / Checkout / My account / Order received**: head 36vh with K5. Summary column on `#DBD4C8`, buttons ink, notices with a 3 px `#6B5848` left rule.
11. **404 / search**: small head band (K4), one line and a link home.

Per-page image check (each image at most once per page):
- Parts = H1 (head) · K1 K2 · K3 K4 · K5 K6. Fitting = K3 · F1 S1. Workshop = K6 · W1 K5. Ordering = V1 · P2 K2. About = H2 · S1 K4. Contact = V1 · H1 K3. Shop = K2 (head) + product images P1 P2 P3 K1 K4. Stories index = F1 (head) + T1 T2 T3 W1. Cart = K5. 404 = K4.

---

## 6. Colour (reference codes, `tok(a)`; changes noted)

| Role | Hex | Source | Use | Share |
|---|---|---|---|---|
| Ground dark | `#0D0C0A` | `tok(a)` first-screen ground | hero, trip scene, visit, footer, inner head bands | ~70% of the first screen, ~28% of the page |
| Ink band | `#1A1A1A` | `tok(a)` | fitting band, strip tiles | ~8% |
| Paper | `#EBE7E1` | `tok(a)` | main light ground, grain + scratches | ~40% |
| Paper mid | `#DBD4C8` | `tok(a)` | Handle chapter, shop card ground, cart summary | ~10% |
| Paper deep | `#D2CAB8` | `tok(a)` | workshop / price list band, rules on paper | ~8% |
| Text | `#251B0F` | `tok(a)` | all copy on paper, vertical titles | — |
| Text on dark | `#EBE7E1` | paper colour reused | copy on dark | — |
| Muted | `#867560` / `#A2998C` | `tok(a)` | English sub-copy ≥ 1rem on dark (`#A2998C`) and paper (`#867560`, only ≥ 1.125rem) | — |
| Bark (row hex) | `#6B5848` | row b25-4 | captions and meta on paper (≥ 5:1), notice rules, the H1 warm highlight colour | ~3% |
| Oxblood | `#8D0000` | `tok(a)` | sub-labels on paper only | < 1% |
| Oxblood on dark | `#B33A2E` | `#8D0000` lightened for contrast on `#1A1A1A` (only change; 4.6:1) | sub-labels on dark bands | < 0.5% |
| Olive hairline | `#8A8466` | `tok(d)` "olive hairline" | next-chapter index rule | — |

- Not beige-led: the page alternates near-black and warm grey paper. Bark is a small accent, not a ground.
- First-screen saturated share: target ≤ 6% (the reference is about 5%), gate 15%.

---

## 7. Typography (font_direction **sans**)

- **Latin display:** Outfit (variable, wght 200–600), for the wordmark, headings, vertical titles and sub-labels. **Latin body:** Albert Sans (variable, wght 300–600, plus italic 300–400). Both are SIL OFL and ship in `assets/fonts/` with `theme.json` `fontFamilies` + `fontFace`, so the editor and the front end load the same faces. List every file in `theme-meta.json fonts[].files` with licenseFile, and name both families in readme.txt.
- **CJK (sans "hei" gothic direction, never serif "ming"):** zh-TW display = Noto Sans TC (subset woff2, 400 / 500), ja display = Noto Sans JP (subset woff2, 400 / 500), loaded through `theme.json fontFace`. Copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it, because style.css uses `:lang()`. Use the Hokuto/Hada subset workaround (the zh subset script is known broken).
- **Stacks:**
  - `--display`: `"Outfit", "Albert Sans", system-ui, sans-serif`
  - `--body`: `"Albert Sans", system-ui, -apple-system, "Segoe UI", sans-serif`
  - `:root:lang(zh-TW)` display: `"Outfit", "Noto Sans TC", "PingFang TC", "Microsoft JhengHei", sans-serif`; body: `"Albert Sans", "PingFang TC", "Microsoft JhengHei", "Heiti TC", sans-serif` (no Noto Sans TC or JP in the body, per the repo gate)
  - `:root:lang(ja)` display: `"Outfit", "Noto Sans JP", "Hiragino Sans", "Yu Gothic", sans-serif`; body: `"Albert Sans", "Hiragino Sans", "Yu Gothic", "Meiryo", sans-serif`
- **Size presets (theme.json):** small 0.8125rem · base 1.125rem (`tok(b)` body 18 px) · medium 1.375rem (`tok(b)` heading) · large 1.5rem (`tok(b)` sub-label) · x-large 2.6rem · xx-large 4.5rem · **colossal 7.5rem** (vertical titles; `tok(b)` 8–10rem reduced ~15% for 6-letter Latin words). Max 7.5rem ≥ 4.25rem ✓.
- **Weights and spacing:** vertical titles Outfit 200, lh .9 (`tok(b)` 90%). Wordmark Outfit 300, ls .02em. Section headings Outfit 400 1.375rem, lh 1.4, ls .1em (`tok(b)`). Sub-labels Outfit 300 1.5rem oxblood. Body Albert Sans 400 1.125rem, lh 1.9, ls .03em (`tok(b)` uses 0.1em tracking for Japanese; Latin is reduced to .03em for legibility). Small caps labels Albert Sans 500 0.8125rem, ls .2–.24em, uppercase.
- **CJK:** headings ≈ 0.75× the en size. Body lh 2.0 (`tok(b)` 2.1, and ≥ 1.85 per the pipeline rule), ls .08em. Vertical titles in zh-TW / ja use real CJK words, upright in `vertical-rl` (the local words for shell / handle / wheels, written in demo-content.zh-TW.json and demo-content.ja.json), Noto Sans TC / JP 500. fr / de use `hyphens: auto`, vertical titles Coque / Poignée / Roues and Schale / Griff / Rollen.

---

## 8. Scroll effects (sp-scroll; three effect types per page max)

| Effect | sp-* | Where | Source (jibie-varied.com) | Trigger / time / easing |
|---|---|---|---|---|
| Photos dissolve in from the top | `sp-reveal sp-reveal--mask` | wrapper Group around S1 (block 3), each T2 photo pair (block 4 and inner pages), F1 (block 5), W1 (block 6), V1 (block 8) | linear mask, transparent 0% to black 30%, on scroll | IntersectionObserver (sp-scroll.js); set `--sp-dur: 1000ms`, easing `cubic-bezier(.16,1,.3,1)` (`tok(g)` reveal easing). The mask goes on the observed wrapper's child per §4 of the sp-spec; the wrapper itself gets no clip-path |
| Vertical lines one after another | `sp-stagger` (parent) + `sp-reveal sp-reveal--up` (each line) | block 2 trip lines; also the 4 fitting rows in block 5 | GSAP pinned scene, ~0.8 s each, ~0.4 s apart (re-done with CSS, no pinning) | `--sp-dur: 800ms`, `--sp-dist: 24px`, step 0.12 s default (lengthen to 0.4 s with `--sp-step: .4s` if the CSS exposes it; otherwise keep the default) |
| Parallax | `sp-parallax` | block 1 hero (H1 layer, `--sp-par: 8%`, mobile 5%), block 2 trip (H2, `--sp-par: 10%`, mobile 6%) | Lenis smooth scroll + slow image drift (re-done with sp-parallax, no smooth-scroll library) | CSS scroll-driven / IO fallback |

- The hero gets **no sp-reveal**. Its load resolve is the CSS keyframe in §3.
- No reveal on the price list, the shell comparison table, the delivery table, forms or the WooCommerce templates. No reveal on strip tiles (horizontal scroll container).
- Hovers: 300 ms `cubic-bezier(.4,0,.2,1)` (`tok(g)`), with `transition-delay: 0s` on revealed cards.

### Parallax (required)
- **Block 1 hero:** outer `section.kl-hero.sp-parallax`, moving layer `figure.sp-parallax__layer` with H1, `--sp-par: 8%` (desktop), 5% (≤ 781 px). The foreground (label, wordmark, line, strip) is **not** in the moving layer. Reference counterpart: the hero image's slow zoom resolve, plus the Lenis-smoothed drift of the dark scenes.
- **Block 2 trip scene:** `section.kl-trip.sp-parallax`, layer = H2 Cover background, `--sp-par: 10%` (desktop), 6% (mobile). The foreground is the three vertical lines and the sub-copy. Reference counterpart: the pinned dark forest scene.
- Both must pass `check-parallax.mjs` (≥ 6 px difference on desktop and mobile, 0 under reduced motion).

---

## 9. Photos (18; IMAGERY = **photo**)

Imagery: real-photo style, **low-key macro documentary** (per stage-a IMAGERY and the row's photo_direction low-key; this overrides the generic "high-key" default on purpose because both the reference and the row are low-key). No illustration. Generate with `scripts/grok-image.sh`, one at a time, and read every result. Regenerate if any image has text, logos, a broken hand or face, or a drifting style. Each image ≤ 300 KB and ≤ 2000 px, webp, no cutouts. Add one readme.txt line per image (AI-generated, CC0).

**STYLE (exact string on every prompt):**
`low-key documentary photograph, macro to medium close-up, near-black warm background, single hard side light from the right, deep shadows, fine film grain, muted palette of graphite, charcoal, bark brown, brushed silver and warm grey, tactile surfaces (brushed aluminium, matte polycarbonate, waxed canvas, leather, worn wood), hands of diverse adults at work, modern international shop setting, calm and quiet, no text, no logos, no brand marks, no labels, no signage lettering, no Japanese elements`

| ID | Subject / composition | Ratio | Used on (★ = home) |
|---|---|---|---|
| H1 | ★ fitting counter macro: a matte graphite case shell edge and seam running diagonally lower-left to upper-right, a fitter's hand pressing the lid shut, the customer's hand resting on the raised telescopic handle at the top right, warm bark wood glow bottom-right, rest near-black | 16:9 (2000×1125) | ★Home hero (KV 1, 2); Parts head; Contact chapter |
| H2 | ★ a dim night train platform, one hard-shell case standing at the platform edge, blurred distant lamps, wet concrete, very dark | 16:9 | ★Home trip scene (KV 6); About head |
| S1 | ★ at the counter: the fitter's hands lifting a case lid while the customer's hand holds a folded packing list, wooden counter, tall frame | 0.92:1 (1380×1500) | ★Home counter; Fitting chapter; About chapter |
| K1 | ★ macro of ribbed brushed-aluminium shell with fine scuffs, hard side light | 1.3:1 (wide half of the pair) | ★Home chapter Shell (left); Parts Shell (left); product image of Ridge Check 76 |
| K2 | ★ a hand pressing a matte polycarbonate shell so it flexes slightly, close | 0.7:1 (narrow) | ★Home chapter Shell (right); Parts Shell (right); Shop head; Ordering chapter |
| K3 | ★ a fitter's hand raising a telescopic handle to a marked height while the customer's hand waits beside it | 1.3:1 | ★Home chapter Handle (left); Parts Handle; Fitting head; Contact chapter |
| K4 | ★ close-up of a stitched leather top handle on a waxed canvas duffel | 0.7:1 | ★Home chapter Handle (right); Parts Handle; About chapter; 404 head; product image of Field Duffel 50 |
| K5 | ★ macro of a spinner wheel housing on a worn wooden floor | 1.3:1 | ★Home chapter Wheels (left); Parts Wheels; Workshop chapter; Cart head |
| K6 | ★ a worn wheel and a new wheel side by side on a workbench, a small screwdriver | 0.7:1 | ★Home chapter Wheels (right); Parts Wheels; Workshop head |
| F1 | ★ fitting: a packed case on a low platform scale, a fitter reading the scale, the customer's hand on the case | 0.92:1 | ★Home fitting; Fitting chapter; Stories head |
| W1 | ★ the back-room workshop bench: hands replacing a wheel with a screwdriver under one lamp | 21:9 (2000×857) | ★Home workshop; Workshop chapter; post 4 |
| V1 | ★ the shop interior at dusk: dark shelves of cases, one lamp over the counter, empty | 4:3 | ★Home visit; Ordering head; Contact head |
| T1 | ★ story 1: a field researcher's case in a dim hostel corridor, rain jacket draped on it | 4:5 | ★Home stories card 1; post 1 |
| T2 | ★ story 2: a cello-shaped soft case and a cabin case on a train luggage rack, low light | 3:2 | ★Home stories card 2; post 2 |
| T3 | ★ story 3: a family's single checked case in an open car boot at night, a child's hand on the handle | 3:2 | ★Home stories card 3; post 3 |
| P1 | ★ product: Ridge Cabin 55, ribbed graphite aluminium cabin case, three-quarter front, on a dark wooden plinth, near-black ground | 4:5 | ★Home strip; product image |
| P2 | ★ product: Lumen Cabin 55, matte charcoal polycarbonate cabin case, same set-up | 4:5 | ★Home strip; product image; Ordering chapter |
| P3 | ★ product: Lumen Check 69, matte bark-brown polycarbonate checked case, same set-up | 4:5 | ★Home strip; product image |

**Per-page check:** Home 18 positions (§4), all different ✓. Parts: H1 · K1 K2 · K3 K4 · K5 K6 ✓. Fitting: K3 · F1 S1 ✓. Workshop: K6 · W1 K5 ✓. Ordering: V1 · P2 K2 ✓. About: H2 · S1 K4 ✓. Contact: V1 · H1 K3 ✓. Shop: K2 + P1 P2 P3 K1 K4 ✓. Stories: F1 + T1 T2 T3 W1 ✓.

---

## 10. Fixed numbers (identical on every page and in all five languages)

**Products (5, WooCommerce, EUR):**
| # | Name | Category | Size / volume / weight | Price | Image |
|---|---|---|---|---|---|
| 1 | Ridge Cabin 55 | Aluminium | 55×40×20 cm · 36 L · 4.6 kg | €590 | P1 |
| 2 | Ridge Check 76 | Aluminium | 76×52×28 cm · 92 L · 6.9 kg | €790 | K1 |
| 3 | Lumen Cabin 55 | Polycarbonate | 55×40×20 cm · 39 L · 2.4 kg | €260 | P2 |
| 4 | Lumen Check 69 | Polycarbonate | 69×47×27 cm · 78 L · 3.6 kg | €320 | P3 |
| 5 | Field Duffel 50 | Canvas & leather | 58×30×30 cm · 50 L · 1.9 kg | €240 | K4 |
Categories 3: Aluminium, Polycarbonate, Canvas & leather. Tags: cabin, checked, spinner, repairable, long-trip.

**Workshop price list (7 rows):**
| Service | Price |
|---|---|
| Fitting session at the counter (40 minutes) | Free |
| Spinner wheel pair replacement | €38 |
| Telescopic handle replacement | €64 |
| Leather top handle re-stitch | €34 |
| Zip slider repair | €24 |
| TSA lock reset or replacement | €29 |
| Aluminium dent and scuff treatment | €45 |

**Shop facts:**
- Veerkaai 14, 2000 Antwerp, Belgium. Phone +32 3 000 14 14 (fictional), email hello@kabanluggage.example.
- Hours: Tuesday–Friday 10:00–18:30, Saturday 10:00–17:00, closed Sunday and Monday. Walk-in fittings when the counter is free; booked fittings on the hour.
- Fitting: 40 minutes, free, no purchase needed. Four parts: the trip → the packing list → the handle height → the case.
- Workshop turnaround: 5 working days. We repair cases bought elsewhere.
- Special orders: 10–14 days, 20% deposit.
- Delivery: Belgium €9, Netherlands & Luxembourg €12, rest of EU €25. Free in the EU on orders over €300. Collection in the shop is free.
- Returns: 30 days, unused, with the fitting tag attached.
- Founded 2009.

**People (7, About list; fictional):**
1. Ines Vandamme, founder and head fitter (since 2009)
2. Tomasz Wierzbicki, workshop lead (wheels, handles, locks)
3. Amara Osei, fitter
4. Lucas Ferreira, fitter and special orders
5. Hana Lindgren, canvas and leather repairs
6. Priya Raman, stock buyer (shells and parts)
7. Jonas Becker, online orders and delivery

**Stories (4 posts; categories Trips, Workshop; tags as above):**
1. "Six weeks of fieldwork, one checked case" (Trips) T1
2. "A cellist's weekend tours, cabin only" (Trips) T2
3. "A family of four, one case in the boot" (Trips) T3
4. "Why we keep wheels in the back room" (Workshop) W1

---

## 11. Responsive requirements
- **390 px:** no horizontal overflow. In the first screen there is no vertical text and no absolutely positioned label over text (hero copy and strip are flex items). Block 2's vertical lines become horizontal (`writing-mode: horizontal-tb`), Outfit 300 1.25rem, stacked left-aligned at the bottom of the scene, still staggered. T2 at ≤ 781 px: the vertical title becomes horizontal Outfit 200 3.5rem **above** the photo pair, with "(01)" before it and the oxblood sub-label after it on one line. The photo pair stays side by side at 65/35, full viewport width, flush left (0 gap). The next-index hairline is hidden. Counter, fitting and visit photos go full width, above their text.
- **≥ 782 px price list and any table:** the table spans its full column (`width: 100%`), the price column has `white-space: nowrap; text-align: right; width: 1%` and is never clipped at 800 or 1280. No `overflow: hidden` on table wrappers.
- **< 782 px tables** (price list, shell comparison, delivery, product spec dl): stack each row as a block (label above value, or service then price on one line with the price right-aligned via flex). No horizontal scrolling tables.
- `html, body { overflow-x: clip }`. The product strip uses its own `overflow-x: auto`.

---

## 12. Similarity table (target ~80%)
| Dimension | Reference (jibie-varied.com) | Kaban Luggage |
|---|---|---|
| First-screen ground | `#0D0C0A`, ~70% | `#0D0C0A`, ~70% |
| Paper / mid / deep | `#EBE7E1` / `#DBD4C8` / `#D2CAB8` | same |
| Text | `#251B0F` | same |
| Accent | oxblood `#8D0000` <1% | same; + bark `#6B5848` ~3% (row hex) |
| First-screen saturation | ~5% orange sliver | ≤ 6% bark highlight + muted product tiles |
| Body type | DM Sans 18 px | Albert Sans 1.125rem (18 px), lh 1.9 |
| Heading | 1.375rem, lh 140%, ls .1em | Outfit 400 1.375rem, lh 1.4, ls .1em |
| Vertical titles | vertical-rl 8–10rem, lh 90% | vertical-rl Outfit 200 7.5rem, lh .9 |
| Sub-label | oxblood display serif ~1.5rem | oxblood Outfit 300 1.5rem (sans direction) |
| Section padding | 120 px+ | 120 px |
| Text inset | 110 px | 110 px (8.33vw at 1320+) |
| Radius / shadow | 0 / none | 0 / none |
| Hero mask | radial 56% to transparent | radial ellipse 56% to transparent |
| Chapter pair | 1103×515, 65/35, flush left, 0 gap | 76.6vw × /2.14, 65/35, flush left, 0 gap |
| Single tall photo | 678×740 (0.92:1) flush left | 47vw, 0.92:1 flush left (S1) / right (F1) |
| Photo reveal | linear mask 0→30%, `cubic-bezier(.16,1,.3,1)` | `sp-reveal--mask` 1000 ms same easing |
| Hero motion | scale 160→110%, blur 12→0, 2500 ms, delay 1500 ms, `cubic-bezier(0,.55,.45,1)` | scale 1.5→1.1, blur 12→0, same timing and easing |
| Lines scene | vertical lines appear one by one, GSAP pin | sp-stagger + reveal--up, no pin |
| Smooth scroll / drift | Lenis | sp-parallax 8% / 10% |
| Hover | 300 ms `cubic-bezier(.4,0,.2,1)` | same |
| Decoration | grain, scratches, (01), vertical oxblood label, olive hairline index | same set |
| Header | Shop left, logo centre, Menu right, transparent | same + 4 links on the right (split nav) |
| Footer | sticky reveal | sticky reveal (drop if gates fail) |

Own content: all photos generated, all copy written for the shop, own wordmark (Outfit text, no logo graphic copied).

---

## 13. Home acceptance checklist
1. First screen at 1440: near-black full-bleed H1 with visible radial vignette, diagonal seam and handle, bark highlight bottom-right. Small label and wordmark at the left inset, vertically centred. Strip of 3 product tiles plus a cut-off "All cases →" tile at the bottom right. Split header. No table, form, search or vertical text. Saturated share ≤ 15% (target ≤ 6%).
2. The hero resolve runs once with `?sp-motion` (blur-zoom to sharp). `?sp-static` shows the sharp final frame at scale 1.1 with the copy visible.
3. Block 2 shows three vertical lines over H2 on desktop, revealed in sequence. The H2 layer and the H1 layer both pass the parallax check (≥ 6 px desktop and mobile, 0 under reduced motion).
4. Block 3 is paper with visible grain and scratches, with a sharp edge against the dark band above. S1 is flush left at 0.92:1. Oxblood sub-label present.
5. Block 4 has three T2 chapter rows: abutting 65/35 pairs flush to the left viewport edge, 0 gap, radius 0, vertical titles ≥ 4.5rem, "(0n)" numerals, oxblood vertical sub-labels, and the "(0n) next" hairline on chapters 1 and 2.
6. The price list has 7 rows with the exact prices in §10, full width, price column nowrap and right-aligned at 800 and 1280, stacked at 390.
7. Stories mosaic: one tall card plus two stacked cards, aligned edges, posts 1–3.
8. 18 home photo positions, no repeat. All photos are low-key with the same STYLE, with no text, logos or broken hands.
9. Colours match §6. Fonts are Outfit and Albert Sans (zh-TW / ja Noto Sans TC / JP for headings), the same in the editor and on the front end.
10. 390 px: no overflow, no overlapping text in the first screen, vertical titles become horizontal, tables stack.
11. ≥ 250 English words with ≥ 3 narrative paragraphs. Numbers identical to §10.
12. Block order equals §4. No people grid, step grid, timeline, dashboard, sidebar, collage or cutouts.
