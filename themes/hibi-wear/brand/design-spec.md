# Hibi Wear: design spec (stage B, binding for implementation)

Slug `hibi-wear`, everyday apparel online store, WooCommerce. References: ReWEAR (main) and Kaneko Optical "Sabae to the World" (first-screen mood only). See `reference.md` for the measurements. Borrow structure, technique and colour relationships only. No copy, photos or logos.

Fixed brand facts (every page and all five languages use these): Hibi Wear, founded **2018**, studio and packing room in **Portland, Oregon**. Founders **Mara Lindqvist** (design) and **Daniel Okafor** (fabric and making). Currency **USD** in every language; no converted prices.

---

## 1. Signature techniques (three, all must be obvious at a glance)

### T1. Dot label + big two-line heading (ReWEAR "• CONCEPT / LINE UP")
- Reference: a tiny gold dot, a spaced uppercase label in small sans, and under it a large heading set over two lines, left-aligned to the content column. Every section opens this way.
- Hibi: **every** home section and **every** inner page head. Markup: `p.hw-label` (dot 6 px circle `#C9A24A`, gap 10 px, Karla 0.75rem, letter-spacing 0.18em, uppercase, ink) then the heading (Playfair Display 400).
- Sizes: home section headings `clamp(2.6rem, 5vw, 4.5rem)` (the theme's max size, preset `xx-large` = 4.5rem); inner page heads `clamp(2.4rem, 4.4vw, 4.25rem)`. Line-height 1.12, forced two lines with `<br>` in en (the CJK lines stay one or two lines naturally).
- Left-aligned, never centred. Labels stay uppercase Latin in en/fr/de; in zh-TW/ja the label is the English word (LINE UP, CARE…) and the heading is translated.
- Must not be diluted: the dot must be gold and visible (not grey), the label must sit directly above the heading (≤ 16 px gap), and the heading must stay at or above 4.25rem on desktop at 1440.

### T2. Rounded portrait straddling a warm band, statements bottom-aligned on the right, outline circle arrow (ReWEAR concept block, B + C together)
- Reference: a portrait photo with about 8 px corners sits left-centre; a warm band `#EDEAE2` starts about 55% down the photo and runs full width below it, so the photo is half on white and half on the band. To the right, five short stacked lines bottom-aligned with the photo, then a 110 px outline circle with an arrow and a text link beside it.
- Hibi geometry (desktop 1440): content width 1200. Photo column 5/12 starting at column 2 (offset one column from the left), aspect 4:5, `border-radius: 8px`. Band: full-bleed `#EDEAE2` block that begins at 55% of the photo height (implement as a `linear-gradient(to bottom, #fff 0 55%, #EDEAE2 55% 100%)` on the alignfull section wrapper, with the photo's top padding fixed so the split lands on the photo; or an absolutely positioned band `top: 55%` behind the columns). The band continues 120 px below the photo. Text column 5/12 on the right, `align-self: end`, lines 1rem, line-height 2.2, then the circle: 110 px, 1 px ink border, centred `→`, link text Karla 0.8rem uppercase to its right; hover fills the circle with main `#2F8C93` and turns the arrow white.
- Mobile: photo full width minus 24 px, band starts at 55% of the photo, text below on the band.
- Must not be diluted: the band must visibly cut through the photo (not start below it), the corners stay 8 px (not 0, not 24+), the circle stays an outline circle ≥ 96 px.

### T3. BEFORE / AFTER split photo with flat tabs and a big serif number (ReWEAR TECHNOLOGY)
- Reference: one image divided by a vertical line at the centre; a flat full-width tab bar at the top of each half (BEFORE on a stone tab, AFTER on a green tab, labels left/right); a big serif number overlaid bottom-right ("20") with small words either side.
- Hibi: "New / After 20 washes": photo S3 (two identical tees side by side, the left crisp, the right softened) in a 4:3 frame, `border-radius: 8px`, overflow hidden. Centre line 1 px white at 70% opacity. Tab bar height 32 px across the top: left half `#E4E0D6` with "NEW" in ink, right half main `#2F8C93` with "AFTER 20 WASHES" in white, Karla 0.75rem, letter-spacing 0.16em, label left-aligned in the left tab and right-aligned in the right tab. Number overlay bottom-right inside the image: Playfair Display 5.5rem white "20" with "washes" 0.9rem before it (text-shadow 0 1px 12px rgba(0,0,0,.25)).
- Layout on home: text left (5/12, T1 head + 2 paragraphs + circle arrow to Makers & Fabrics), split photo right (6/12). This mirrors T2 (photo left there, right here).
- Must not be diluted: the two tabs must be flat, full width of each half, and two different colours (stone vs teal); the number must be ≥ 5rem and overlap the photo, not sit under it.

### First-screen mood (Kaneko G, supporting, not counted as a signature)
Hazy full-bleed photograph, tiny serif captions on one baseline at the left third and right third, a thin vertical rule at the bottom centre as a scroll cue. See section 3.

### Continuation to inner pages (required, all pages)
| Page | T1 | T2 | T3 |
|---|---|---|---|
| Shop (archive-product, product-search, taxonomy) | page head "• SHOP / Clothes for / every day." | S9 rounded photo straddling the band, intro lines + circle arrow to Sizing on the right | — (product cards use the 8 px radius and the gold-dot category pill, see 5) |
| Single product | product title block opens with the dot label = category | gallery main image 8 px radius, the band `#EDEAE2` starts at 55% of the gallery height and runs under the summary and tabs | "Care" panel below the summary: a small T3 split (S3) with "NEW / AFTER 20 WASHES" and the fabric's wash note |
| About / Story | yes | S9 straddling band, founder statements right, circle arrow to Makers | — |
| Makers & Fabrics | yes | S6 straddling band | full-size T3 split as the page centre, followed by three fabric notes |
| Sizing | yes | S2 straddling band, "how it should fit" lines right | the measurement table sits on the band (tables are fine off the first screen) |
| Shipping & Returns | yes | S8 packing photo straddling band | the two fixed numbers use the T3 number style: Playfair 5.5rem "$120" and "30" with small words, ink on the band |
| Journal (index, archive, single) | yes on index and archive; single post shows the category as the dot label above the title | single post: featured image 8 px radius straddling the band; archive cards 8 px radius | — |
| Contact | yes | S1 (4:5 crop) straddling band; on the right the address, email and hours lines; circle arrow = mailto link | — |
| Cart / Checkout / My account / Order confirmation | yes (small: 2.4rem minimum, still two lines in en) | band `#EDEAE2` behind the totals / order summary column | — |

---

## 2. Colour

Taken from ReWEAR (relationships and roles), hue slightly muted for clothing; Kaneko only for the photo grade of the cover.

| Role | Hex | Source | Use | Share of a page |
|---|---|---|---|---|
| Base | `#FFFFFF` | ReWEAR page ground | page ground | about 60% |
| Band | `#EDEAE2` | ReWEAR concept band | T2 band, shop cards ground, totals column, footer | about 25% |
| Ink | `#181818` | ReWEAR heading/nav ink | headings, body, rules, circle outline | about 8% |
| Main | `#2F8C93` | ReWEAR teal `#0090A0`, desaturated about 25% | AFTER tab, buttons, link hover, sale badge, circle hover fill | ≤ 4% (never a section background) |
| Sub | `#9DBFA5` | ReWEAR AFTER green `#8FBF9A` | "In stock" text dot, journal category pill ground at 30% tint, selected size chip border | ≤ 2% |
| Accent | `#C9A24A` | ReWEAR gold dot | T1 dots only, plus the active nav underline | < 1% |
| Stone | `#E4E0D6` | ReWEAR BEFORE tab | NEW tab, pill tag ground | ≤ 2% |
| Muted text | `#5E5E5A` | derived from ink | captions, meta | — |

- Not beige-led: white is the ground; `#EDEAE2` only appears as bands.
- Text contrast: ink on band ≥ 14:1; white on `#2F8C93` = 4.1:1, so button text is 0.9rem bold minimum or use ink on `#9DBFA5` for small chips.
- First-screen saturated area: palette from ReWEAR hero (86%) and composition from Kaneko (0.9%); hard cap = min(30%, 86%) = 30%, and this spec sets the gate for `scripts/check-first-screen.py` to **20%**, target **8–15%**. Achieve this with a muted photo grade (S1 in soft daylight with the clothing in sage, oatmeal and pale teal) and no coloured UI over the cover.

Typography: Playfair Display (display, 400/italic) + Karla (body 400/500/700). zh-TW Noto Serif TC, ja Noto Serif JP for headings at about 0.75× the English size, body line-height 1.85; fr/de `hyphens: auto`. Font sizes: small 0.8125rem, base 1rem (body 1.0625rem), medium 1.25rem, large 1.75rem, x-large 2.6rem, xx-large 4.5rem (max, ≥ 4.25rem rule satisfied). One top menu only.

Header (ReWEAR F + Kaneko H): logo wordmark "Hibi Wear" Playfair 1.4rem left, uppercase Karla 0.75rem text nav (Shop, Fabrics, Sizing, Journal, About, Contact), a cart link with count, and a two-line (double rule, 28×8 px) menu icon at the far right that opens the mobile overlay under 960 px. Over the cover the header is transparent with ink type (the photo is light); after scroll it is white with a 1 px `#EDEAE2` bottom rule. Above the header a 32 px white announcement line in muted text: "Free shipping over $120 · 30-day returns".

---

## 3. Home page

### First screen (1440×900)
- S1 full-bleed photo, hazy early city morning (soft fog or haze, pale sky), two people walking away/side-on at the left third wearing Hibi sage and oatmeal layers, the right two thirds mostly pale street and sky. Overlay `rgba(255,255,255,.12)` only if needed for type.
- Type (Kaneko composition, no giant centred word): at the left third, baseline at 52% height, Playfair 1.1rem ink two lines: "Autumn–Winter 2026" / "New layers, out now". At the right third on the same baseline: wordmark "Hibi Wear" Playfair 2.6rem plus "Everyday clothes · Portland, est. 2018" Karla 0.75rem under it, with a plain text link "Shop the collection →". Bottom centre: 1 px × 64 px ink vertical rule, the word "Scroll" 0.7rem above it.
- Forbidden on the first screen: table, form, search box, buttons in main colour, any large centred heading.

### Block order
| # | Pattern | Purpose | Layout and photos | Copy |
|---|---|---|---|---|
| 1 | `front-cover` | mood + entry | full-bleed S1 as above | ~20 words |
| 2 | `front-lineup` | lead with the clothes | T1 head "• LINE UP / Four pieces / for every morning." then a 4-column row; above each column a stone pill tag with the category (Tops, Shirts, Bottoms, Knitwear), then a 4:5 product image P1, P4, P7, P8 (8 px radius), then centred two-line name + price. "View all clothes →" text link right under the row. With WooCommerce the row is the 4 featured products (Product Collection, same markup); without WooCommerce static images link to /shop. | 40 words |
| 3 | `front-idea` | brand idea | **T2**: S2 portrait straddling the band, five stacked statements right ("The tee you reach for first. / The shirt that looks better at 5 pm. / …"), circle arrow → About. | 70 words + one 60-word paragraph under the lines |
| 4 | `front-wash` | durability proof | **T3**: text left (T1 head "• CARE / Softer, / not shabbier."), split S3 right | 90 words in 2 paragraphs |
| 5 | `front-fabrics` | the three fabrics (asymmetric masonry) | White ground. Grid 12 columns: S4 jersey close-up tall 3:4 at columns 1–6; S5 linen 4:3 and S6 merino 4:3 stacked at columns 7–12, edges aligned top and bottom (not staggered). Caption under each: fabric name (Playfair 1.25rem), mill and weight line (Karla 0.8rem). T1 head above the grid. | 3 × 35 words |
| 6 | `front-city` | the clothes in use | wide 21:9 S7 (commute, morning tram stop) full content width 8 px radius; under it a two-column text: left a Playfair italic 1.75rem pull line, right two paragraphs | 110 words |
| 7 | `front-promise` | store facts | band `#EDEAE2` full bleed; T1 head "• SHIPPING / Easy to try, / easy to return."; three text columns with T3-style big numbers: "$120" free shipping over, "30" days to return, "1" year of free repairs for seams (policy, not a claim); each with one sentence and a link (Shipping & Returns, Sizing) | 70 words |
| 8 | `front-journal` | stories | T1 head; 3 posts in a row, featured images P3, P9, P2 (posts 2, 3, 6; see section 5), 8 px radius, date-only + title | Query Loop |
| 9 | `front-close` | visit / contact | **T2 mirrored small**: S8 packing studio photo right half straddling the band (band from 55%), left: "Questions about fit? Write to us." + circle arrow → Contact | 45 words |

English home ≥ 250 words with narrative paragraphs in #3, #4 and #6 (at least three). CJK home ≥ 500 characters.

### Comparison with the last three themes
| # | Nami (#252) | Hatsumei (#250) | Kagi (#248) | **Hibi** |
|---|---|---|---|---|
| 1 | cover: two photos beside centre title column | cover: prototype photo + deep blue bottom band | cover: night room + chevron | **fog photo, captions at thirds, rule cue** |
| 2 | intro | practice | watch (service) | **product line-up with pill tags** |
| 3 | paths (doors) | chapters (stages) | chapters (four stages) | **idea: photo straddling band (T2)** |
| 4 | staggered placement photos | story | figures | **before/after split (T3)** |
| 5 | consultants (people) | attorneys (people) | analysts (people) | **fabric masonry (aligned)** |
| 6 | fees | fee table | plans | **city photo + narrative** |
| 7 | quote | ways | notes | **store promise numbers on band** |
| 8 | journal | notes | close | journal |
| 9 | close | close | — | close (mirrored T2) |
Why not alike: Hibi has no chapters/stages, no people grid and no price table; it leads with products in block 2; its signature shapes (gold dot labels, band cutting through a rounded photo, two-tab split photo) share nothing with Nami's centre column / thin centre line / arcs, Hatsumei's polygons / (001) numbers / bottom blue band, or Kagi's chevrons / chips / rotated watermark. Also not Tsumugi/Hagane: no side-by-side half-screen hero and no numbered process rows.

---

## 4. Inner pages (at least 8 pages + WooCommerce templates)

Each page = T1 head → T2 block → page body → small close line with circle arrow. No sidebar.

1. **Shop** (`archive-product.html`, `taxonomy-product_cat.html`, `product-search-results.html`): T1 "• SHOP"; T2 with S9 (rack of the collection on a white wall) and four lines about fit and fabrics, circle → Sizing. Then a row of category pills (stone ground, ink, active = ink ground white text) linking to the six categories; result count + ordering right. Grid 3 columns desktop / 2 tablet / 1 mobile, gap 32 px; card: image 4:5 8 px radius on `#EDEAE2`, category in Karla 0.7rem uppercase with gold dot, name Playfair 1.25rem, price Karla 1rem, fabric line in muted text. Add-to-cart = text link with arrow, not a filled button. Pagination as numbers + circle arrow.
2. **Single product** (`single-product.html`): two columns; left gallery (main 4:5 8 px radius, thumbnails 4 across below), band starting at 55% of the gallery height under both columns; right: dot label = category, title Playfair 2.6rem, price, short description, size chips (outline, selected = ink border 2 px + `#9DBFA5` underline), quantity + add-to-cart (filled ink, white text, 8 px radius), a line "Free shipping over $120 · 30-day returns". Below: Care panel (small T3 split S3, fabric + wash temperature text), then tabs (Description, Fabric & care, Sizing), then related products 4 across with the same cards.
3. **About / Story** (`page-about`): T1 "• ABOUT / Clothes we / wear ourselves."; T2 with S9 (the collection rail); 3 narrative sections (Founded 2018 in Portland; why a small range; how we choose mills) set in a 7/12 text column; then S7 wide 21:9 between sections two and three.
4. **Makers & Fabrics** (`page-makers`): T1 "• FABRICS / Three cloths, / made to last."; T2 with S6 (merino rib close-up); full-size T3 split S3; three fabric notes alternating with S4, S5 and P8 at 3:4. Makers named as fictional mills: Ribeira Knit Mill (Porto, jersey and loopback), Flandre Linen Works (Kortrijk, linen), Ashby Worsted (Yorkshire, merino).
5. **Sizing** (`page-sizing`): T1; T2 with S2; fit notes (Relaxed / Regular); measurement table on the band (XS–XL chest, length, sleeve in cm and in); "How to measure" 4 short steps as paragraphs (not a step grid).
6. **Shipping & Returns** (`page-shipping`): T1; T2 with S8 (packing studio); band with the big numbers $120 / 30 / $8; paragraphs: delivery times (US 2–5 business days; international 7–14), returns process, exchanges, repairs.
7. **Journal** (`home.html` index, `archive.html`, `single.html`): T1 "• JOURNAL / Notes on / everyday clothes."; first post large (image 8 px radius left 7/12, text right), then 2-column cards. Single: category dot label, title 3.2rem, date only, featured image straddling the band, text column 680 px.
8. **Contact** (`page-contact`): T1 "• CONTACT / Write to / the studio."; T2 with S1 (4:5 crop on the two walkers); right column lines: Hibi Wear Studio, 1120 SE Division St, Portland, OR 97202 (fictional; local formats per language as in brand.md), hello@hibiwear.example, Mon–Fri 9:00–17:00 PT; circle arrow = mailto. No form required.
9. **Cart / Checkout / My account / Order confirmation**: T1 head (smaller, still with dot); main column white, totals/summary column on `#EDEAE2` with 8 px radius; buttons filled ink; notices with a 3 px main-colour left rule. Graceful fallback when WooCommerce is off: the shop page shows the static line-up and a note, templates must not fatal.
10. **404 / search**: T1 head + circle arrow home.

---

## 5. Photos (18, Grok, one at a time, read each one)

STYLE (use this exact string on every prompt):
`photorealistic editorial photograph, 50mm lens, soft natural daylight, high-key white walls, clean modern international city setting, muted palette of sage green, oatmeal, pale teal, off-white and charcoal clothing, diverse adults, calm candid moment, fine fabric texture visible, no text, no logos, no brand marks, no signage lettering, no Japanese elements`

18 images = 9 scenes (S1–S9) + 9 product images (P1–P9, one per product in section 6). No cutouts (0 transparent PNGs). Each image ≤ 300 KB and ≤ 2000 px, with one readme.txt line per image (AI-generated, CC0).

| ID | Subject / composition | Pages (each image at most once per page) |
|---|---|---|
| S1 | hazy early morning city street, two people walking at the left third in layered sage/oatmeal outfits, the right two thirds open pale street and sky, wide 16:9 | Home cover; Contact T2 (4:5 crop on the people) |
| S2 | portrait 4:5, person in a sage loopback sweatshirt, arms crossed softly, against a white wall, face turned aside | Home idea; Sizing T2 |
| S3 | overhead flat lay, two identical oatmeal crew tees side by side touching at the exact centre, the left crisp, the right visibly softer and slightly faded, 4:3 | Home wash; Makers T3; Single-product care panel |
| S4 | macro of cotton jersey knit loops, oatmeal, 3:4 | Home fabrics (tall); Makers note 1 |
| S5 | close-up of washed linen weave in pale teal, 4:3 | Home fabrics; Makers note 2; Journal post 5 |
| S6 | close-up of merino rib knit in charcoal, 4:3 | Home fabrics; Makers T2 |
| S7 | wide 21:9, person in a light blue oxford shirt and chinos waiting at a tram stop in morning light | Home city; About wide; Journal post 1 |
| S8 | packing studio: hands folding a tee into a plain unprinted paper mailer on a white table, 4:5 | Home close; Shipping & Returns T2; Journal post 4 |
| S9 | clothing rail with the collection on a white wall, 4:5 | Shop T2; About T2 |
| P1–P9 | product shots: `<product> in <colour>, on a plain wooden hanger against a white wall, front view, centred, 4:5` + STYLE (P6, P7 and P8 may be folded on a white plinth) | product images; Home line-up P1, P4, P7, P8; Makers note 3 = P8; Journal post 2 = P3, post 3 = P9, post 6 = P2 |

Per-page check:
- Home (15 photo positions): S1 · P1 P4 P7 P8 · S2 · S3 · S4 S5 S6 · S7 · journal cards = posts 2, 3, 6 (P3, P9, P2) · S8. No image repeats.
- Shop: S9 + product images. Single product: its own P image + S3.
- About: S9, S7. Makers & Fabrics: S6, S3, S4, S5, P8. Sizing: S2. Shipping & Returns: S8. Contact: S1.
- Journal index and archive: posts 1–6 = S7, P3, P9, S8, S5, P2, each once.

## 6. Demo products (9) and fixed numbers

| # | Name | Category | Price (USD) | Fabric | Image |
|---|---|---|---|---|---|
| 1 | Daily Crew Tee | Tops | $38 | 180 g organic cotton jersey (Ribeira Knit Mill) | P1 oatmeal |
| 2 | Weekend Pocket Tee | Tops | $42 | slub cotton jersey | P2 sage |
| 3 | Loopback Sweatshirt | Tops | $86 | 330 g loopback cotton | P3 sage |
| 4 | Easy Oxford Shirt | Shirts | $78 | washed cotton oxford | P4 pale blue |
| 5 | Linen Camp Shirt | Shirts | $84 | washed European linen (Flandre Linen Works) | P5 pale teal |
| 6 | Straight Chino | Bottoms | $92 | 9 oz cotton twill | P6 stone |
| 7 | Drawstring Wide Trouser | Bottoms | $88 | linen-cotton blend | P7 charcoal |
| 8 | Merino Rib Cardigan | Knitwear | $128 | extra-fine merino (Ashby Worsted) | P8 charcoal |
| 9 | Chore Jacket | Outerwear | $148 | 10 oz cotton canvas | P9 sage |

Categories: Tops, Shirts, Bottoms, Knitwear, Outerwear (5). Tags: organic-cotton, linen, merino, relaxed-fit, regular-fit, new. Featured (home line-up): 1, 4, 7, 8. Sizes XS–XL as a variation attribute or a simple "Size" attribute; simple products are fine for the importer.

Fixed numbers (identical on Home, Shop, Single product, Shipping & Returns, Sizing, footer, announcement line and all five languages; no extra amounts in any language):
- Free shipping on orders over **$120**; otherwise flat **$8** (US). International flat **$24**.
- Returns and exchanges within **30 days** of delivery, unworn with tags; return label free in the US.
- Free seam repairs for **1 year**.
- US delivery 2–5 business days; international 7–14 business days.
- Founded 2018, Portland, Oregon.
zh-TW may describe the 30-day return as longer than the local 7-day statutory trial period but must keep the figure 30; ja uses free shipping (over $120) and returns within 30 days wording.

---

## 7. Acceptance checklist (stage D compares against this)

1. First screen: full-bleed hazy photo, two small serif captions at left and right thirds on one baseline, vertical rule cue at bottom centre; no giant centred text, no table/form/search; `check-first-screen.py` saturated area ≤ 20%.
2. T1 visible in every home section and on every inner page head listed in section 4 (gold dot + uppercase label + two-line heading ≥ 4.25rem on home at 1440).
3. T2 visible on Home (idea and close), Shop, About, Makers, Sizing, Shipping & Returns, Contact, single post: the `#EDEAE2` band visibly cuts through an 8 px-radius photo at about 55%, outline circle arrow present.
4. T3 visible on Home, Makers & Fabrics and Single product: two flat tabs in stone and teal, centre line, big serif "20" overlapping the photo.
5. Colours match section 2: white ground dominant, band `#EDEAE2`, ink `#181818`, teal `#2F8C93` only small, gold dot; no beige-led page, no large saturated field, no indigo/navy/deep green main.
6. Home block order equals section 3 and differs from Nami, Hatsumei, Kagi per the table; no people grid, step grid, timeline, dashboard, price table, staggered photos, side rail, collage, cutouts.
7. Photos: 18 images, no text/logos/broken hands, same STYLE, no image twice on one page (check the binding list).
8. Products: 9 items with images, categories, tags and the exact prices above; fixed numbers identical everywhere and in all five languages.
9. WooCommerce templates styled as in section 4; site works with WooCommerce off.
10. About states 2018 and Portland (no base-theme years). Five languages pass the word/character gates.
