# Mochi Pet Supply: design spec (stage 1, binding for implementation)

Slug `mochi-pet-supply`, row b7-9. A neighbourhood pet food and supplies shop in Leith, Edinburgh, that sells online across the UK. The site **starts with a three-question food finder** (species, age, one thing to watch), then shows a photographed product grid with **subscribe & save** at WooCommerce checkout. Type **store**: WooCommerce required for shop, product, cart, checkout, my-account and order-received. Every page must also render without WooCommerce (static pattern fallback, no fatal). Row: archetype card-mosaic, hero product-grid-hero, first screen three-equal-columns, page structure diagnostic-quiz, top-bar nav, high-key documentary photography, accent mustard `#B8973F` on small areas only. Fonts Alegreya + Alegreya Sans (both OFL; verify the licence files when building).

References (S5-Style food/subscription; neither used by any other theme):
- **Main: Tsuklio** https://www.tsuklio.com/ (S5-Style #11708, prepared-meal subscription). Measurements in `reference-tokens.md`, cited below as `tok(a)…tok(g)`. Screens: `ref/tsuklio-fold.png`, `ref/tsuklio-menu-band.png`, `ref/tsuklio-pickup.png`, `ref/scroll-tsuklio-*.png`.
- **Secondary: Sakata Nobuo Shoten ginger** https://ginger.sakatashop.jp/ (S5-Style #11995). Only its scrim interlude and the mustard buy-tab colour relationship. Its vertical type is **not** used.

Borrow structure, technique, numbers and colour relationships only. No copy, photos, logo, vector vegetable icons or mascot from either site.

Fixed brand facts (every page, all five languages): **Mochi Pet Supply**, founded **2017** by **Isla Morrow** and **Tomasz Kowal**. Shop and packing room at **18 Brunton Lane, Leith, Edinburgh EH6 6QT** (fictional address). Currency **GBP (£)** in every language, with no converted prices. Full list in §8.

---

## 1. Signature techniques (three; all must be obvious at a glance, none diluted)

### T1. Floating pill nav + floating "next dispatch" chip (Tsuklio header and hero chip, `tok(f)`, `tok(e)` hero)
- **Reference:** a white bar 780×54 floats centred 15px below the top edge, fixed while scrolling. It has 10px radius, a 1px `#e1e0e0` border and no shadow. The logo sits left, three text links in the middle and a **square orange menu button (36px, radius 8)** at the right. On the hero, a floating card 350×84 sits bottom-right: an 84px square thumbnail on the left, a small orange tag, two lines of text and a 44px orange arrow button (`ref/tsuklio-fold.png`).
- **Ours (header, every page):** `header.mo-pill`, `position: fixed; top: 15px; left: 50%; transform: translateX(-50%)`, width `min(780px, calc(100% - 24px))`, height 54px, background `#ffffff`, `border: 1px solid #e1e0e0`, `border-radius: 10px`, padding `0 9px 0 14px`, no shadow, z-index 50.
  - Left: wordmark "Mochi" in Alegreya Sans 700 1.375rem, ink `#222222`, followed by a 6px mustard dot. Use text only, with no logo image.
  - Centre: one navigation block with Shop · Food finder · Subscribe & save · Guides · Visit. Alegreya Sans 600 0.9375rem, ink, gap 22px.
  - Right: the **mustard square 36×36, radius 8, fill `#B8973F`**. It is the cart link: a 2px ink bag outline icon, with the count as a 16px ink circle and white numeral at its top-right. One top menu only.
  - Below 960px, the centre links collapse into the WP navigation overlay toggle. Style that toggle as a second 36px square: `#f7f5f2` fill with two ink lines 14×2px. It sits left of the mustard cart square, 6px apart.
  - The page body gets `padding-top: 0`. The hero headline starts at y = 112 so it clears the pill. Inner pages start their head at `padding-top: 132px`.
- **Ours (hero chip, home only, ≥1024px):** `a.mo-dispatch`, absolute inside the hero, `right: 30px; bottom: 30px` of the viewport-height hero frame (it overlaps the lower part of column 3). Size 350×84, white, radius 10, 1px `#e1e0e0`, no shadow.
  - Left block 84×84: `#F6F0E1` with "14:00" in Alegreya Sans 700 1.375rem ink, centred.
  - Middle: mustard tag "Next dispatch" (tag spec §1 T3), then one line in Alegreya Sans 600 0.9375rem: "Order by 14:00, packed today".
  - Right: a 44×44 mustard square, radius 8, with an ink → arrow. It links to /delivery-returns.
  - Hidden below 1024px. Never shown on the 390 first screen.
- **Must not be diluted:**
  - The pill must float: there must be a visible gap above it, it must not span full width at ≥960, and it needs both radius and border.
  - The right-hand square must be filled mustard, not outlined.
  - The chip must sit over the photo at the bottom-right, not below the hero.

### T2. Staggered two-column photo mosaic beside an eyebrow + two-line statement, photos drifting inside their frames (Tsuklio Brand Concept, `tok(c)`, `tok(e)` brand block, `tok(g)` photo layers, `ref/scroll-tsuklio-parallax-a.png`)
- **Reference:** the left ~46% of the container holds two columns of mixed-ratio photos (ratios 0.73 / 1.47 / 1.03 / 0.68, each column 267px wide, 20px gaps, 10px radius). The two columns are offset vertically. On the right (from x=715) sit a small green eyebrow, a bold two-line statement and two short paragraphs of large, airy body text. Inside each photo the image layer drifts vertically (yPercent −13→+13, scale 1.15, scrub).
- **Ours (home block 3 `concept`, container 1320 at x=60):**
  - Grid `614px 1fr`, column gap 101px. The text column starts at x = 60+614+101 = 775 (ref 715 in a 1440 frame with 60px gutters; we keep the 46/54 split).
  - Mosaic = two columns 297px each, gap 20px: (614−20)/2 = 297, scaled from 267 so the 614px mosaic fills the same 46%.
    - Column 1, top offset 64px: **S4** at ratio 0.73 (297×407), then 20px, then **S5** at 1.47 (297×202).
    - Column 2, no offset: **S6** at 1.03 (297×288), then 20px, then **S7** at 0.68 (297×437).
  - Every photo is a `figure.wp-block-image.sp-parallax` with `border-radius: 10px; overflow: clip; --sp-par: 10%`, and the `img` uses `object-fit: cover` (see §11).
  - Text column, top-aligned with the mosaic's column 2:
    - Eyebrow `p.mo-eyebrow` "Why Mochi": Alegreya Sans 700 1.4594rem (23.35px), line-height 1.6, `#509146`, no uppercase, no letter-spacing (`tok(b)`).
    - Statement `h2`: Alegreya Sans 700 3.25rem (52px), line-height 1.55, ink, exactly two lines in en ("Pet food, chosen / like family food.").
    - 40px gap, then two paragraphs in Alegreya 400 1.25rem, line-height 2, max 34em, 32px between paragraphs, 55–70 words each.
    - Then a text link "Meet the shop →" in Alegreya Sans 700 1rem, ink, with a 2px mustard underline offset 6px.
  - Mobile (<782): the mosaic stays two columns (each (366−12)/2 = 177px wide, gap 12, column-1 offset 40px) above the text. Ratios stay the same.
- **Must not be diluted:**
  - It must be two columns with different ratios and a visible vertical offset. Never four equal squares, never one row.
  - The 10px radius stays: not 0, not 24+.
  - The statement stays ≥3.25rem bold at 1440 and the eyebrow stays green.
  - The photos must visibly move inside fixed frames on scroll (check-parallax ≥6px).

### T3. Rounded-top ink band holding a centred 1040 card and a strip of square tag cards (Tsuklio Our Menu + Pick Up band, `tok(c)`, `tok(d)`, `tok(e)` menu band + pick-up cards, `tok(f)` tags, `ref/tsuklio-menu-band.png`, `ref/tsuklio-pickup.png`)
- **Reference:** a full-bleed orange band with ~16px rounded top corners, padding 100/100.
  - Inside it, a 1040px block: on the left a `#f7f5f2` card (1px `#e1e0e0` border, padding 20/20/50, radius 10) holding a photo collage (one big photo plus two stacked small ones), a small tag, a big date line and a 44px arrow button; on the right a centred light title (48.65px/600), a 16px sub-label, bold copy and a white pill button.
  - Below the block: a centred "Pick Up" title, then a carousel of **317×317 square photo cards (radius 10, pitch 347)**. Each card has a coloured category tag at the top-left (offset 12px, 53×28, radius 4, 15.6px/700) and a rounded white "+" at the bottom-right. Product names (16px/500) sit under the cards, followed by a white "more" pill.
- **Why ink, not mustard:** the row forbids a full-bleed accent field, so the band ground is **ink `#222222`** (Tsuklio's text colour). This keeps the reference's hard band-versus-page contrast (Tsumugi lesson: do not swap a strong band for a faint stone). The mustard moves onto the tags, the "+" and the buttons, which are the same small elements that carry it in the reference.
- **Ours (home block 4 `box`):**
  - Band: `alignfull`, background `#222222`, `border-radius: 16px 16px 0 0`, padding 100px top / 100px bottom (`tok(c)`).
  - Inner 1040 block: grid `532px 1fr`, gap 60px.
    - Left card: `#f7f5f2`, 1px `#e1e0e0`, radius 10, padding 20/20/50.
      - Collage 492×326: **P1** big (left 66%, full height) plus **P4** and **P6** stacked (right 34%, 2px gap, each 162px tall). Outer radius 10 on the collage only.
      - Then the mustard tag "This month's box", 24px under the collage.
      - Then the date line in Alegreya Sans 700 2.75rem ink, line-height 1.2: "Packed 3–7 Nov".
      - Then "See what's in it" in Alegreya Sans 700 1.375rem `#7A6326` (mustard −35% lightness for text contrast).
      - Arrow button 44×44 mustard radius 8 with an ink →, at the bottom-right of the card (absolute `right: 20px; bottom: 20px` inside the card; it covers no text).
    - Right column, centred text, colour `#f7f5f2`:
      - Title "The monthly box": Alegreya Sans 600 3.0406rem (48.65px), line-height 1.2.
      - Sub-label in Alegreya Sans 400 1rem at 80% opacity.
      - 32px gap, then a bold line in Alegreya Sans 700 1.75rem, line-height 1.6 (2 lines).
      - Then 50–60 words in Alegreya 400 1.125rem, line-height 2.
      - Then a white pill button: `#ffffff`, ink text, radius 10, padding 12/24, Alegreya Sans 700 0.9375rem.
  - 120px below: centred title "Picked this week" (Alegreya Sans 600 3.0406rem `#f7f5f2`) with the sub-label "Five things our customers reorder most".
  - Then a horizontal **scroll-snap strip**: `display: flex; gap: 30px; overflow-x: auto; scroll-snap-type: x mandatory`. Padding-left aligns the first card to the 1320 container (60px at 1440). The strip runs off the right edge (cards cut at the viewport like the reference). Scrollbar is hidden visually but still keyboard-scrollable (`tabindex="0"`, `aria-label`).
  - Cards: 317px wide, image 317×317 radius 10 (**P2, P3, P5, P7, P8**).
    - Tag top-left at offset 12px.
    - "+" at the bottom-right: a 32×32 white square, radius 8, ink "+" 1.125rem, offset 12px. This follows the screenshot; the link is the add-to-cart or product URL.
    - Below the image: name in Alegreya Sans 500 1rem `#f7f5f2`, 14px gap, then the price line in Alegreya Sans 700 0.9375rem `#f7f5f2`: "£22.00 · £19.80 on subscribe".
  - Under the strip: a centred white pill "See all food" → /shop.
  - With WooCommerce active, the strip is a Product Collection (5 handpicked products, same markup). Without WooCommerce it is static images linking to /shop.
- **Tags (site-wide component `.mo-tag`):** height 28px, padding 0 10px, radius 4, Alegreya Sans 700 0.975rem (15.6px).
  - Food tags: fill `#B8973F`, text ink `#222222` (contrast 7:1; white on mustard fails).
  - Supplies and small-pet tags: fill `#509146`, text `#ffffff` (large bold text, 4.1:1).
  - Tag words: Dog food, Cat food, Small pets, Supplies, plus the box tag above.
- **Must not be diluted:**
  - The band must be dark, full-bleed, with visibly rounded top corners.
  - The cards must be **square** with the tag inside the photo at the top-left and the "+" inside at the bottom-right.
  - The strip must bleed off the right edge at ≥1280.
  - The 1040 card must be a light card on the dark band with a collage of three photos.

### Not used
Tsuklio's flat vector icon clusters (`tok(f)`) are not used: the row requires photographic imagery only. The secondary site's vertical text and pinned vertical tab are not used either, because vertical labels are forbidden on mobile. Its mustard relationship lives on in T1's square button. Sakata's scrim interlude is used once as a supporting block (home 6), not as a signature.

### Continuation to inner pages (required: T2 and T3 on ≥4 inner pages each; T1 is global)
| Page | T1 | T2 (staggered mosaic + parallax) | T3 (ink band, 1040 card, square tag cards) |
|---|---|---|---|
| Shop (`archive-product`, `taxonomy-product_cat`, `product-search-results`) | pill + mustard cart square | — | page head on white; then the **ink band** holds the 1040 card ("Not sure? Take the food finder", collage S1 big + S3, S2 small) and the **product grid as square tag cards** in 4 columns (P1–P8), "+" = add to cart |
| Single product | yes | — | gallery image square radius 10 with the category tag top-left; "Often bought with" = ink band with 4 square tag cards |
| Food finder (core) | yes | head: two-photo T2 (S2 at 0.73 in column 1 with 64px offset, S3 at 0.68 in column 2) beside the eyebrow + statement | results on the ink band: per species a row of square tag cards (product + "Why this one" line) |
| Subscribe & save | yes | — | ink band 1040 card (collage S6 big + S5, S10 small; "Change, skip or pause up to 48 hours before dispatch"); price table on white below (§5) |
| About / The shop | yes | full four-photo mosaic (S4 0.73, S9 1.47, S6 1.03, S7 0.68) + statement "A small shop / with a long memory." | — (interlude S8 parallax instead) |
| Nutrition desk | yes | two-photo T2 (S9 0.73, S2 1.03) | 1040 card on ink band: "Thursdays 15:00–19:00 · free 20 minutes", collage S5 big + P1, P4 small |
| Feeding guides | yes | two-photo T2 (S5 1.47, S7 0.68) | — |
| Delivery & returns | yes | two-photo T2 (S10 0.73, S6 1.03) | — |
| Stories (blog index/archive) | yes | — | post cards as **square tag cards** (category tag top-left, white "+" = read) on an ink band, 3 columns |
| Visit | yes | two-photo T2 (S4 0.73, S10 0.68) + address/hours as the text column | — |
| Cart / Checkout / My account / Order received | yes | — | totals/summary column = `#f7f5f2` card with 1px `#e1e0e0` radius 10 (the 1040 card material) on white; buttons mustard square-radius 10 with ink text |

Count: T2 on 6 inner pages, T3 on 5 inner pages.

---

## 2. Home page (en first; order binding)

### First screen (1440×900) — three equal photo columns under a headline row (row: product-grid-hero, three-equal-columns)
- Ground `#ffffff`. The T1 pill floats over the top, centred at y=15–69.
- **Headline row** (container 1320 at x=60, y=112–332), two columns 7/12 and 5/12, aligned to the bottom:
  - Left: eyebrow "Pet food & supplies · Leith, since 2017" (Alegreya Sans 700 1.125rem `#509146`). Under it, the **H1** "Good food for every / bowl in the house." in Alegreya Sans 700 **4.5rem** (72px, the theme maximum), line-height 1.12, ink, two lines, left-aligned (never centred).
  - Right: a 32–40 word lead in Alegreya 400 1.125rem, line-height 1.8, max 30em. Then a row with the button "Take the 3-question finder" (fill `#B8973F`, ink text, Alegreya Sans 700 1rem, height 48, radius 10, padding 0 22px) and the text link "Shop all food →" (ink, mustard underline).
- **Three equal columns** start at y=372: width (1320−40)/3 = 426.67, gap 20, image ratio 3:4 (426×568). They end around y=940, so the fold cuts them by ~40px as a scroll cue (as the reference's video runs past the fold).
  - Each column is a `figure.sp-parallax` with radius 10, `--sp-par: 10%`. Images **S1** (dog), **S2** (cat), **S3** (small pet).
  - Tag top-left (offset 12): "Dogs" mustard, "Cats" mustard, "Small pets" green. White "+" square at the bottom-right (offset 12), which sits below the fold.
  - Each whole column is a link to /food-finder/#dog, #cat, #small-pets.
  - Hover: the image scales 1.03 over 0.4s `cubic-bezier(.34,1.56,.64,1)`.
- **T1 dispatch chip** bottom-right over column 3 (≥1024).
- Saturation: only the mustard square, three tags, the button and the chip carry the accent. Photos are high-key and low-chroma. Target ≤ 8%, gate **≤ 15%** (`scripts/check-first-screen.py`).
- Forbidden on the first screen: table, form, search field, giant centred word, vertical text, cut-outs.

### First screen at 390×844
- The pill is 366×54 at top 12: wordmark, menu square and mustard cart square.
- From y=88: eyebrow, then H1 `clamp(2.5rem, 9vw, 4.5rem)` (40px at 390, left, ≤4 lines), lead (1rem/1.75), then the button full width 48px.
- Then the columns **stack vertically**, each full width (366) at 4:3 (366×275), gap 12.
- Tags are **static** on mobile: at <782 the `.mo-tag` inside the photo becomes `position: static` in a caption row directly under each photo, together with the column name link. Nothing is absolutely positioned over text, and nothing is vertical.
- The dispatch chip is hidden.
- auto-gates must report no text overlap at 390.

### Block order
| # | id / block | Purpose | Layout | Photos | Copy (en) |
|---|---|---|---|---|---|
| 1 | `hero` | identity + entry by species | as above | S1, S2, S3 | eyebrow + H1 + 32–40 word lead + button + link |
| 2 | `finder` Food finder (diagnostic-quiz) | the row's page structure: three questions up front | White, padding 120/80. Grid 5/12 + 7/12. Left: eyebrow "Food finder", h2 "Three questions, / one good bowl." (Alegreya Sans 700 3.0406rem/1.2), 45-word paragraph. Right: **three question rows**, each separated by 1px `#e1e0e0`, padding 28px 0. Each row has a question number "01" (Alegreya Sans 700 1rem `#B8973F`), the question in Alegreya Sans 700 1.375rem, then a row of **choice pills** (height 44, radius 10, 1px `#e1e0e0`, `#f7f5f2` fill, Alegreya Sans 600 0.9375rem ink; hover = mustard fill). Q1 Who are we feeding? Dog · Cat · Rabbit or guinea pig. Q2 How old? Under 1 · 1–7 years · 8 and over. Q3 Anything to watch? Sensitive tummy · Weight · Nothing in particular. Every pill is a link to /food-finder/ with an anchor (#dog, #cat, #small-pets, #young, #adult, #senior, #tummy, #weight, #everyday). Under the rows: the mustard button "See my suggestions →" → /food-finder/. Not a form, not a step grid. | none | 45 + 9 short questions/choices |
| 3 | `concept` (**T2**) | why the shop exists | as T2 | S4, S5, S6, S7 | eyebrow + 2-line statement + 2 × 55–70 words |
| 4 | `box` (**T3**) | the monthly box + most reordered items | as T3; ink band | P1, P4, P6 (card) · P2, P3, P5, P7, P8 (strip) | 70 words + 5 names/prices |
| 5 | `subscribe` Subscribe & save | how the subscription works | White, padding 160/100 (`tok(c)` menu section). Left 6/12: eyebrow "Subscribe & save", h2 "10% off every / repeat delivery." (3.0406rem), then **four numbered sentences** as a plain ordered list (Alegreya 1.125rem/2, number in Alegreya Sans 700 mustard; not cards, not a step grid): 1 Answer the finder or pick items. 2 Choose every 2, 4, 6 or 8 weeks. 3 We pack in Leith and dispatch by 14:00. 4 Skip, change or cancel up to 48 hours before dispatch. Right 5/12 (offset 1): three fact rows separated by 1px `#e1e0e0`, each a big figure in Alegreya Sans 700 3.25rem ink + a 1-line note: "10%" off repeat deliveries · "2–8 weeks" you choose · "£40" free UK delivery over. Link "Full price list →" to /subscribe-and-save. **No price table on home.** | none | 90 words |
| 6 | `interlude` (Sakata scrim, supporting) | breathing room, home life | Cover `alignfull`, min-height 560px (desktop) / 420px (mobile), background **S8**, overlay `#222222` at 38% (dims the photo like the Sakata scrim), class `sp-parallax`, `--sp-par: 12%`. Foreground, centred in a 760px column: two lines in Alegreya italic 400 2rem/1.5 `#ffffff` ("Most of what we sell ends up in a bowl, / and the rest ends up slept on.") + a 1rem Alegreya Sans line "— Isla Morrow, co-founder". Text is not inside the moving layer. | S8 | 30 words |
| 7 | `desk` Nutrition desk & people | trust: named people | Padding 120/80, grid 7/12 + 5/12. Left: eyebrow "The people", h2 "Ask at the counter, / or on a Thursday." (3.0406rem), a 70-word paragraph about the Thursday nutrition desk with Dr Amara Osei (15:00–19:00, free 20 minutes, no diagnosis), then a **name list** of the 7 people as text rows (name in Alegreya Sans 700 1.125rem + role in Alegreya 1rem muted `#5f5c55`, 1px `#e1e0e0` rules). Not a portrait grid. Right: **S9** 4:5 radius 10, top-aligned. | S9 | 70 + 7 names |
| 8 | `stories` | proof without claims | Ground `#f7f5f2` `alignfull`, padding 120/80. Centred title "Regulars" (Alegreya Sans 600 3.0406rem) + sub-label. 3 cards in a row (gap 30): `#ffffff`, 1px `#e1e0e0`, radius 10, padding 32. Each card has a tag (Dog food / Cat food / Small pets), the pet's name as the title (Alegreya Sans 700 1.9438rem / 31.1px, line-height 1.4, `tok(b)` card title), a 50–60 word story in Alegreya 1.0625rem/1.9, and the owner's name in Alegreya Sans 600 0.9375rem. Parent `sp-stagger`, each card `sp-reveal sp-reveal--up`. No photos (photos are all used above; no repeats). | none | 3 × 55 words |
| 9 | `visit` | close + location | White, padding 120/100. Grid 6/12 + 6/12. Left: eyebrow "Visit", h2 "18 Brunton Lane, / Leith." (3.0406rem), then address, opening hours (two lines), the van-round line, and links "Directions →" and "Delivery & returns →". Right: **S10** 4:3 radius 10, with a **dispatch card** in the T1 chip style (350×84, white, 1px `#e1e0e0`, radius 10) overlapping its bottom-left by 40px at ≥1024 (`margin-top: -40px; margin-left: 30px`, in flow, not absolute); below 1024 it sits under the photo. | S10 | 55 words |
| 10 | footer | — | Ink `#222222`, padding 100/60, text `#f7f5f2`. Four columns: wordmark + one line + address; Shop (Dog food, Cat food, Small pets, Supplies); Help (Food finder, Subscribe & save, Delivery & returns, Nutrition desk); Visit (hours). Bottom row: © 2026 Mochi Pet Supply, legal links, at 60% opacity. | none | — |

Home photo positions: S1 S2 S3 · S4 S5 S6 S7 · P1 P4 P6 · P2 P3 P5 P7 P8 · S8 · S9 · S10 = **18 positions, no image repeated** (≥8 ✔). English home ≥ 400 words with narrative paragraphs in blocks 3 (two), 4, 7 and 8 (≥3 ✔). CJK ≥ 600 characters.

### Comparison with recent homes (must differ)
| # | Shikaku | Kanade | Yamabiko | Sora | **Mochi** |
|---|---|---|---|---|---|
| 1 | paper-strip hero, photo on fold | hero + gateway | full-bleed photo + info bar | full-bleed photo + info bar | **headline row over three equal photo columns, floating pill nav + dispatch chip** |
| 2 | course marquee | intro split | catalogue masonry | FAQ arch | **3-question food finder with choice pills** |
| 3 | about panel | programmes mosaic | veil band, 3 shelves | letter on tilted sheet | **staggered two-column mosaic + statement (T2)** |
| 4 | course ladder, giant title | calendar | spec sheet | three paths | **rounded-top ink band: 1040 box card + square-card strip (T3)** |
| 5 | lesson player | day strip | how we test spread | interlude | **subscribe & save: numbered sentences + 3 fact rows** |
| 6 | plans table | fees | rental price list | 90-day row | **scrim interlude (parallax)** |
| 7 | faculty split | people | stories staggered | fees | **nutrition desk + name list** |
| 8 | stories rows | stories | visit split | people | **regulars: 3 tag cards on stone** |
| 9 | support band | visit | — | stories / visit | **visit + overlapping dispatch card** |

Why not alike:
- **Yamabiko (also a store)** opened with a full-bleed photo + info bar and showed products as an asymmetric masonry with a veil band and a bottom-left dash index. Mochi opens with a white headline row over three equal columns. Products sit only in square tag cards on a dark rounded band, and the floating pill nav replaces Yamabiko's fixed index and dark capsule.
- **Kanade's** mosaic was tinted equal tiles with centred chips. T2 here is a two-column, mixed-ratio, vertically offset mosaic beside text, with moving photo layers.
- **No other recent home** has a quiz block, a rounded-top dark band or a pill nav.
- There is no giant title (Shikaku), tilted sheet or arch (Sora), and no price table on the Mochi home.

---

## 3. Inner pages (11 + WooCommerce templates; each opens with the same page head)

Page head (all inner pages):
- White ground, padding 132/60, container 1320.
- Eyebrow (Alegreya Sans 700 1.4594rem `#509146`), then h1 in Alegreya Sans 700 `clamp(2.6rem, 5vw, 4.25rem)`, line-height 1.15, two lines in en, then a 30–45 word lead in Alegreya 1.25rem/2 at max 36em.
- Then the page's T2 or T3 as listed in §1.

1. **Shop** (`archive-product.html`, `taxonomy-product_cat.html`, `product-search-results.html`)
   - Head "Shop / Food and things / for every bowl."
   - Category pills row: All, Dog food, Cat food, Small pets, Supplies. Same pill as the finder; active = ink fill with white text.
   - Result count + ordering on the right.
   - Ink band (T3) with the 1040 card linking to the finder, then the product grid of square tag cards (4 columns ≥1100, 3 at 782–1099, 2 below), gap 30.
     - Card: image 1:1 radius 10, tag top-left, white "+" bottom-right = add to cart (AJAX if WooCommerce; the link otherwise).
     - Name in Alegreya Sans 500 1rem `#f7f5f2`, price line "£34.00 · £30.60 on subscribe".
   - Pagination as numbers in 36px squares (radius 8, the active one mustard).
2. **Single product** (`single-product.html`)
   - Two columns 6/12 + 5/12 (offset 1).
   - Left: square image radius 10 with the category tag.
   - Right: the category as eyebrow, title Alegreya Sans 700 2.75rem, price, short description (Alegreya 1.125rem/1.9), and a **purchase choice**: two radio-like rows "One-off £34.00" / "Subscribe & save £30.60 every [2/4/6/8] weeks". These are WooCommerce variations or a "Purchase type" attribute; subscription is represented as a variation with its 10%-lower price, and no paid plugin is required. Then quantity, an add-to-cart button (mustard, ink text, radius 10, height 52), and the line "Order by 14:00 Mon–Fri, packed today · Free UK delivery over £40".
   - Tabs: Description, Feeding guide (portion table: stacked on mobile), Ingredients.
   - Then "Often bought with": ink band (T3) with 4 square tag cards.
3. **Food finder** (`page-food-finder`, the core)
   - Head "Food finder / Three questions, one bowl." + T2 two-photo.
   - The three question rows as on home (anchors work on this page).
   - Then the ink band with three species sections (`#dog`, `#cat`, `#small-pets`):
     - Each has an h2 in `#f7f5f2` and square tag cards by age:
       - Dog (3 cards): Under 1 → P2 Puppy Growth; 1–7 → P1 Everyday Adult; 8+ → P3 Senior Gentle.
       - Cat (2 cards): Under 1 → P5 Kitten & Senior trays; 1 and over → P4 Adult Cat Dry, with the line "8 and over: mix in the wet trays" (no third card, so no repeat).
       - Small pets (3 cards): P6 Timothy Hay; then P7 bed and P8 bowls (Supplies) as add-ons.
       - Each card has a "Why this one" 20-word line.
     - Q3 notes as three short paragraphs (`#tummy`, `#weight`, `#everyday`). Each says to switch over 10 days, and points to the Thursday nutrition desk for anything medical. No health claims.
   - **Image use:** every product image is used at most once per page. The species sections together use P1, P2, P3, P4, P5, P6, P7 and P8 once each.
4. **Subscribe & save** (`page-subscribe-and-save`)
   - Head, then the T3 card on the ink band.
   - Then the **price table** (§5, 8 rows), then the rules as paragraphs: 10% off, every 2/4/6/8 weeks, change/skip/cancel up to 48 hours before dispatch, free UK delivery over £40.
   - Then a short FAQ (4 questions as `<details>`).
5. **About / The shop** (`page-about`)
   - Head "About / A small shop / with a long memory."
   - T2 full mosaic, then three narrative sections in an 8/12 column: 2017 in Leith; how we choose foods (short ingredient lists, named suppliers); the van round.
   - Interlude S8 (parallax).
   - Then the **people list**: 7 names + roles + one line each, as rows, not a grid.
6. **Nutrition desk** (`page-nutrition-desk`)
   - Head, T2 (S9, S2), then the T3 card ("Thursdays 15:00–19:00 · free 20 minutes").
   - What a chat covers (paragraphs).
   - What it is not: no diagnosis; see your vet for illness.
   - How to book: in the shop or by email.
7. **Feeding guides** (`page-feeding-guides`)
   - Head, T2 (S5, S7).
   - **10-day switch table** (Days 1–3: 25% new food · Days 4–6: 50% · Days 7–9: 75% · Day 10: 100%). It is full width ≥782 and stacks on mobile.
   - Then portion notes per species as paragraphs, with "always check the pack and your vet" wording.
8. **Delivery & returns** (`page-delivery-returns`)
   - Head, T2 (S10, S6), then three fact rows as on home block 5:
     - "14:00" dispatch cut-off
     - "£40" free delivery over
     - "30 days" unopened returns
   - Then paragraphs covering:
     - UK delivery: 1–2 working days, £3.95 under £40
     - local van round: Tue & Fri, free in Leith, Portobello and Stockbridge
     - returns and damaged parcels
9. **Stories** (`home.html` index, `archive.html`, `single.html`)
   - Head "Stories / Notes from / the counter."
   - Ink band with 6 post cards (square tag cards, 3 columns).
   - Single post: category tag above the title (Alegreya Sans 700 3.25rem), date only, featured image 3:2 radius 10, text column 700px in Alegreya 1.125rem/1.9.
10. **Visit** (`page-visit`)
    - Head "Visit / Come and / smell the hay."
    - T2 two-photo (S4, S10) with the text column holding: address, hours, nutrition desk hours, van rounds, email hello@mochipets.example, phone +44 131 555 0174 (fictional).
    - A plain-text "How to find us" paragraph. No map embed and no form required.
11. **Cart / Checkout / My account / Order received**
    - Page head small: h1 2.6rem, still two lines in en.
    - Main column white; summary column is a `#f7f5f2` card (1px `#e1e0e0`, radius 10, padding 20/20/30).
    - Buttons mustard with ink text, radius 10.
    - Notices: 3px mustard left rule on `#F6F0E1`.
    - Subscription items show "Every 4 weeks · 10% off" under the name.
    - Without WooCommerce, the shop page shows the static grid + a note, and templates must not fatal.
12. **Legal / 404 / search**: page head + paragraphs; 404 links to the finder and the shop.

Reachable pages for auto-gates ≥9: home, shop, a product, food finder, subscribe & save, about, nutrition desk, feeding guides, delivery & returns, stories, visit, cart.

---

## 4. Colour (`tok(a)`; Tsuklio relationships kept, main hue swapped by row rule)

| Role | Hex | Source | Use | Share of a page |
|---|---|---|---|---|
| Ground | `#ffffff` | Tsuklio ground | page ground | ~55% |
| Warm white | `#f7f5f2` | Tsuklio `#f7f5f2` (exact) | 1040 cards, stories band, pills, summary column | ~12% |
| Ink | `#222222` | Tsuklio text `#222222` (exact) | text, **T3 band**, footer | text + ~22% as bands |
| Accent mustard | `#B8973F` | row hex. It replaces Tsuklio `#f58220` because the row requires a muted accent on small areas only and forbids a full-bleed accent field. It is close to Sakata's tab `#b2911a`. | cart square, food tags, buttons, arrow squares, list numerals, underline | ≤ 4% (never a section ground) |
| Mustard text | `#7A6326` | `#B8973F` darkened for text contrast (5.6:1 on `#f7f5f2`) | small mustard text on light grounds | < 1% |
| Sub green | `#509146` | Tsuklio sub `#509146` (exact) | eyebrows, small-pet / supplies tags | < 2% |
| Mustard tint | `#F6F0E1` | Tsuklio tint `#fff3e5` re-hued to mustard (same ~95% lightness) | chip time block, notices | < 2% |
| Green tint | `#e8eee5` | Tsuklio `#e8eee5` (exact) | "in stock" pill ground, hover on supplies pills | < 1% |
| Rule | `#e1e0e0` | Tsuklio nav/card border (exact) | 1px borders and rules | — |
| Muted text | `#5f5c55` | derived from ink | roles, captions, meta | — |

- Not beige-led: white is dominant, and `#f7f5f2` appears only as cards and one band. The darkest field is the ink band (low chroma).
- Avoid recent main colours: Yamabiko brown `#8F5E3F`, Kanade celadon, Shikaku blue-grey `#4E7A93`. Mustard plus ink is not used by any of them.
- First screen saturated pixels: Tsuklio hero ~0.9% (`tok(a)`). Our cap is **15%** (row note), target ≤ 8%.

## 5. Tables and responsive rules (hard)
- **Price table** (Subscribe & save; the same 8 rows as a compact list in the single-product "Purchase type"):
  - At ≥782px the table is `width: 100%` of the 1320 container (full width, never shrink-wrapped), `table-layout: fixed`.
  - Columns: Item 46% left · Size 18% left · One-off 18% · Subscribe & save 18%. The two price columns are `text-align: right; white-space: nowrap` and are never cut or clipped (check at 800 and 1280).
  - Rows 64px tall with 1px `#e1e0e0` rules. Header in Alegreya Sans 700 0.875rem muted, no uppercase. Prices in Alegreya Sans 700 1.0625rem.
  - The subscribe column cell has a `#F6F0E1` ground. Items without subscription show "—".
  - No `overflow` wrapper that hides columns.
- **Every table stacks on mobile (<782px)** (price table, 10-day switch, feeding portions, WooCommerce cart table):
  - `thead` is visually hidden; each `tr` becomes a block card (`#f7f5f2`, radius 10, padding 16, gap 12).
  - Each `td` is a flex row with the label from `::before`. Labels come from per-language CSS variables (`html[lang|="fr"] { --mo-col3: "Ponctuel"; }`…), so no markup attributes need translating.
  - The price stays nowrap and right-aligned in its row.
- 390px first screen: no vertical text, no absolutely positioned label over text, the dispatch chip hidden, hero tags static (§2).
- No horizontal overflow at 390/1280: the scroll-snap strip uses its own `overflow-x: auto` and `html, body { overflow-x: clip }`; the pill uses `calc(100% - 24px)`.
- Breakpoints: 1100 (grid 4→3), 960 (pill links collapse), 782 (tables stack, tags static, T2/T3 grids to one column), 1024 (dispatch chip on/off).

## 6. Type (`tok(b)`; root 16px)
- Families:
  - **Alegreya Sans** (400, 500, 600, 700) for headings, UI, tags, prices and tables. It is a humanist sans close to Tsuklio's Figtree.
  - **Alegreya** (400, 400 italic) for body paragraphs, stories and the interlude.
  - zh-TW **Noto Serif TC**, ja **Noto Serif JP** for headings at ~0.75× the English size; body line-height 1.85. fr/de get `hyphens: auto`.
- theme.json presets:

| Preset | Size | Use | Source |
|---|---|---|---|
| small | 0.875rem | meta, table head | `tok(b)` base family |
| base | 1rem | UI, product names | `tok(b)` base 16px/25.6px |
| medium | 1.125rem | body | — |
| large | 1.25rem | statement body (line-height 2) | `tok(b)` 24px/2em, scaled for Latin |
| x-large | 1.9438rem | card titles (31.1px, 700, line-height 1.4) | `tok(b)` |
| xx-large | 3.0406rem | section titles (48.65px, 600, line-height 1.2) | `tok(b)` |
| statement | 3.25rem | T2 statement (52px, 700, line-height 1.55) | `tok(b)` |
| display | **4.5rem** | hero H1 (max, ≥4.25rem ✔) | — |

  - Eyebrow: 1.4594rem (23.35px), 700, line-height 1.6, green (`tok(b)`).
  - Tag: 0.975rem (15.6px), 700 (`tok(b)`).
  - Letter-spacing 0 everywhere and no uppercase (`tok(b)`).

## 7. Spacing, radius, shadow (`tok(c)`, `tok(d)`)
- Containers: 1320 (60px gutters at 1440) for content; 1040 for T3 inner blocks; full bleed for bands.
- Section padding:
  - 160/100 for the subscribe block and the Subscribe page main section
  - 100/100 for the ink band
  - 120/80 for white blocks
  - 60–80 for small blocks
  - 24px side gutters on mobile; section padding halved on mobile.
- Gaps: mosaic 20, strip and grid 30, finder rows 28 vertical.
- Radius:
  - 10px: photos, cards, the pill, buttons, choice pills
  - 4px: tags
  - 8px: squares (36/44)
  - 16px: band top corners
  - Circles are not used, except the cart count.
- Borders: 1px `#e1e0e0`. **No shadows anywhere** (flat, `tok(d)`).

## 8. Fixed facts (single source; identical on home, inner pages, products and all five languages)
- **Business:** Mochi Pet Supply, founded **2017**, 18 Brunton Lane, Leith, Edinburgh EH6 6QT (fictional). hello@mochipets.example, +44 131 555 0174 (fictional).
- **Shop hours:** Mon–Sat 9:00–19:00, Sun 10:00–16:00.
- **Nutrition desk:** Thursdays 15:00–19:00, free 20-minute chats with Dr Amara Osei. General guidance only, no diagnosis.
- **Dispatch and delivery:**
  - Order by **14:00** Mon–Fri for same-day dispatch.
  - UK delivery 1–2 working days.
  - **Free UK delivery over £40**, otherwise **£3.95**.
  - Local van round **Tue & Fri**, free, covering Leith, Portobello and Stockbridge.
- **Subscribe & save:** **10% off** every repeat delivery, every **2, 4, 6 or 8 weeks**. Skip, change or cancel up to **48 hours** before dispatch.
- **Returns:** unopened food, unused beds and bowls within **30 days**.
- **Process (4):** answer the finder or pick items → choose an interval → we pack in Leith and dispatch by 14:00 → skip/change any time up to 48 h before.
- **Food switch:** over **10 days** (25/50/75/100%).
- **Price list (8; GBP; subscribe = exactly 90%):**

| # | Product | Size | One-off | Subscribe & save | Tag | Image |
|---|---|---|---|---|---|---|
| 1 | Everyday Adult Dog Food, chicken & brown rice | 6 kg | £34.00 | £30.60 | Dog food | P1 |
| 2 | Puppy Growth Food, salmon & oat | 3 kg | £22.00 | £19.80 | Dog food | P2 |
| 3 | Senior Gentle Dog Food, turkey & pumpkin | 6 kg | £36.00 | £32.40 | Dog food | P3 |
| 4 | Adult Cat Dry Food, white fish | 2 kg | £18.00 | £16.20 | Cat food | P4 |
| 5 | Kitten & Senior Wet Food trays | 12 × 85 g | £12.00 | £10.80 | Cat food | P5 |
| 6 | Timothy Hay, meadow cut | 2.5 kg | £11.00 | £9.90 | Small pets | P6 |
| 7 | Washable Cotton Bed | Medium | £48.00 | — | Supplies | P7 |
| 8 | Ceramic Bowl Pair | 2 × 0.6 L | £24.00 | — | Supplies | P8 |

  WooCommerce categories: Dog food, Cat food, Small pets, Supplies. Home strip featured: 2, 3, 5, 7, 8. Monthly box card: 1, 4, 6.

- **People (7):**

| Name | Role |
|---|---|
| Isla Morrow | co-founder, former veterinary nurse, shop floor |
| Tomasz Kowal | co-founder, buying and suppliers |
| Dr Amara Osei | visiting veterinary nutritionist, Thursday desk |
| Priya Nair | shop lead, runs the food finder at the counter |
| Lucas Ferreira | packing room and dispatch |
| Hannah Lindgren | small-pets specialist |
| Kofi Mensah | Tuesday and Friday van round |

- **Stories (3; observations only, no outcome claims):**
  1. **Biscuit**, 9-year-old beagle (owner Fiona Grant): moved to Senior Gentle over 10 days and is now on a 4-week subscription.
  2. **Pepper & Salt**, two adopted cats (owner Mateo Ruiz): mix wet trays and dry food. Their box arrives every 6 weeks on the van round.
  3. **Clover**, a rabbit (owners Ngozi Achebe and her son Tobi): hay every 4 weeks, plus a washable bed for the hutch room.
- **Posts (6):** the 3 stories + "How to switch food over 10 days", "Inside the Thursday nutrition desk", "What goes into the monthly box".
- zh-TW/ja/fr/de keep £ and every number above; local address formats are allowed, numbers are not.

## 9. Photos (18, Grok, one at a time; Read every image; regenerate any with text, logos, labels on bags, broken faces/hands/paws)

STYLE (exact string, appended to every prompt):
`photorealistic documentary photograph, high-key bright natural daylight, white and pale oak interiors, clean modern international neighbourhood setting, soft muted palette of off-white, warm grey, oatmeal and a touch of mustard yellow, diverse people, calm candid moment, healthy well-groomed pets, shallow depth of field, no text, no logos, no labels or printing on packaging, no signage lettering, no Japanese elements`

All are real photographs: 0 cut-outs, each ≤ 300 KB and ≤ 2000 px, `readme.txt` line per image (AI-generated, CC0).

| ID | Subject / composition | Ratio | Used on (once per page) | Home |
|---|---|---|---|---|
| S1 | medium mixed-breed dog sitting on a pale oak kitchen floor looking up; an adult's hands lowering an off-white ceramic bowl at the top of the frame | 3:4 | Home hero col 1; Shop T3 card (big) | ✔ |
| S2 | tabby cat eating from a white ceramic bowl by a bright window, low angle | 3:4 | Home hero col 2; Food finder T2; Nutrition desk T2; Shop T3 card (small); post "Pepper & Salt" | ✔ |
| S3 | a child's hands offering a handful of hay to a brown-and-white rabbit on a pale rug | 3:4 | Home hero col 3; Food finder T2; Shop T3 card (small); post "Clover" | ✔ |
| S4 | bright small shop: pale wood shelves of plain unprinted kraft bags, a shop assistant (Black woman, apron) talking with a customer holding a dog on a lead | 0.73 | Home T2; About T2; Visit T2 | ✔ |
| S5 | close-up: steel scoop lifting kibble from an open plain kraft sack, hands visible | 1.47 | Home T2; Feeding guides T2; Subscribe card (small); Nutrition card (big); post "10-day switch" | ✔ |
| S6 | person in apron packing a plain cardboard box with paper food bags and a bowl on a white table | 1.03 | Home T2; About T2; Subscribe card (big); Delivery T2; post "Monthly box" | ✔ |
| S7 | older man walking a grey-muzzled beagle-type dog on a quiet tree-lined street, autumn morning | 0.68 | Home T2; About T2; Feeding guides T2; post "Biscuit" | ✔ |
| S8 | bright living room, two adults on a sofa reading, a dog asleep on an oatmeal cotton bed in the foreground, wide | 21:9 (2400 crop→2000) | Home interlude; About interlude | ✔ |
| S9 | South-Asian or West-African woman (nutritionist) at a shop counter with a notebook, talking to a young man holding a puppy | 4:5 | Home desk; About T2; Nutrition T2; post "Thursday desk" | ✔ |
| S10 | courier handing a plain cardboard box to a person at a bright doorstep with a cat watching from the hallway | 4:3 | Home visit; Subscribe card (small); Delivery T2; Visit T2 | ✔ |
| P1 | plain kraft paper bag (no print) beside an off-white bowl of brown kibble on a pale stone surface, top light | 1:1 | product 1; Home box card (big); Shop grid; Nutrition card | ✔ |
| P2 | small plain kraft bag and a small bowl of small kibble, puppy paw entering frame | 1:1 | product 2; Home strip; Shop grid | ✔ |
| P3 | kibble in a steel scoop and a pumpkin slice on linen | 1:1 | product 3; Home strip; Shop grid | ✔ |
| P4 | clear glass jar of small fish-shaped dry cat food, white saucer | 1:1 | product 4; Home box card (small); Shop grid; Nutrition card | ✔ |
| P5 | four plain foil-lidded trays, one open on a white saucer, pale stone | 1:1 | product 5; Home strip; Shop grid | ✔ |
| P6 | bundle of green timothy hay in an unprinted linen bag | 1:1 | product 6; Home box card (small); Shop grid | ✔ |
| P7 | oatmeal washable cotton pet bed on a pale oak floor | 1:1 | product 7; Home strip; Shop grid | ✔ |
| P8 | two ceramic bowls, one mustard-glazed and one off-white, on a pale oak floor | 1:1 | product 8; Home strip; Shop grid | ✔ |

Per-page check:
- **Home:** 18 distinct.
- **Shop:** S1, S2, S3 + P1–P8.
- **Food finder:** S2, S3 + P1–P8, each once.
- **About:** S4, S9, S6, S7, S8.
- **Nutrition desk:** S9, S2, S5, P1, P4.
- **Subscribe:** S6, S5, S10.
- **Feeding guides:** S5, S7.
- **Delivery:** S10, S6.
- **Visit:** S4, S10.
- **Stories:** S7, S2, S3, S5, S9, S6.

No page repeats an image.

## 10. Hover and small motion (CSS only, not sp-*)
- Square cards and hero columns: image `scale: 1.03` and "+" square `translateY(-2px)`, 0.4s `cubic-bezier(.34,1.56,.64,1)`. This is an overshoot approximating Tsuklio's linear() spring with ~1.12 peak (`tok(g)`). Set `transition-delay: 0s` on hover so stagger delays don't apply.
- Buttons: background darkens to `#a8873a` over 0.2s.
- No `transition: all`.

## 11. Scroll effects (sp-scroll v2; copy `pipeline/assets/sp-scroll/` unchanged; three effects only)
Global CSS variables: `--sp-dur: .8s; --sp-ease: cubic-bezier(.215,.61,.355,1); --sp-dist: 15px`. These are Tsuklio fade-block values (`tok(g)`): 0.8s, GSAP power2.out, y 15px, once.

| Effect | Class | Where | Source (trigger / time / easing) |
|---|---|---|---|
| Fade-up text blocks | `sp-reveal sp-reveal--up` | Home: finder left column and the question-rows wrapper; concept text column; box right column and the "Picked this week" title (strip container gets `sp-reveal--up` as a whole, never its cards); subscribe left and right columns; desk text column; visit text column. Inner pages: T2 text columns and section titles. | Tsuklio `fade-block`: ScrollTrigger start "top 85%", once, 0.8s, power2.out (cubic-bezier(.215,.61,.355,1)), y 15px → our IO one-shot, same duration/ease/distance |
| Parallax (required) | `sp-parallax` | **(1) Hero:** each of the three column figures, `--sp-par: 10%` (desktop) / 6% (<782). **(2) Concept T2:** each of the four mosaic figures, `--sp-par: 10%` / 6%. **(3) Interlude:** Cover with S8 background, `--sp-par: 12%` / 8%, foreground lines outside the moving layer. Inner: every T2 photo and the About interlude. | Tsuklio brand photo layers: yPercent −13→+13 with scale 1.15, scrub, start "top bottom" → end "bottom top" (`tok(g)`, `ref/scroll-tsuklio-parallax-a/b.png`). Our sp-scroll uses CSS `animation-timeline: view()` with scale 1.18 and ±`--sp-par`, which is the same scrub-linked, linear motion inside a clipped frame. |
| Stagger | `sp-stagger` parent + `sp-reveal sp-reveal--up` children | Home stories (3 cards); finder choice-pill rows (3 rows, as the stagger children); Shop/Stories grids on wide screens (children of a non-scrolling grid only) | Stage-a proposal from Tsuklio's sequential card entrance: 0.8s, 0.12s step (sp default) |

- **Hero:** no reveal; only parallax. Price table, forms, checkout and legal text: none.
- **Strip:** the horizontal strip's cards get no reveal.
- **Reduced motion and static modes:** `?sp-static`, reduced-motion and the editor show the final state.
- **Verification:** `check-parallax.mjs` on home must show ≥6px parallax delta at 1280 and 390, ≥3 hidden-then-revealed reveals, and nothing transparent at the bottom.
- Not used: SplitText per-character titles (replaced by fade-up), the 3.5s photo swaps (no carousel), sp-count, sp-marquee.

## 12. Similarity table (target ~80%; reference values from `reference-tokens.md`)
| Dimension | Tsuklio value (token) | Mochi value |
|---|---|---|
| Ground | `#ffffff` / `#f7f5f2` ~70% (a) | `#ffffff` / `#f7f5f2` ~67% |
| Text | `#222222` (a) | `#222222` |
| Main | `#f58220` ~23% as bands (a) | `#B8973F` ≤4% small areas; band role taken by ink `#222222` ~22% (row rule: no full-bleed accent) |
| Sub | `#509146` <2% eyebrows/tags (a) | `#509146` <2% eyebrows/tags |
| Tints | `#fff3e5`, `#e8eee5` (a) | `#F6F0E1`, `#e8eee5` |
| First-screen saturation | ~0.9% (a) | target ≤8%, cap 15% |
| Eyebrow | 23.35px/37.4px/700 green (b) | 1.4594rem/1.6/700 `#509146` |
| Section title | 48.65px/58.4px/600 light on band, centred, 16px sub-label (b) | 3.0406rem/1.2/600 `#f7f5f2` on ink, centred, 1rem sub-label |
| Statement | 52px bold, line-height ~1.55, 2 lines (b) | 3.25rem/1.55/700, 2 lines |
| Body | 24px / 2em (b) | 1.25rem / 2 (Latin scaling) |
| Card title | 31.1px/700/43.6px (b) | 1.9438rem/700/1.4 |
| Container | 1320 / 60 gutters; 1040 card (c) | 1320 / 60; 1040 |
| Section padding | 160/100, 100/100, 120/80 (c) | same three values |
| Mosaic | 614px, 2 cols 267 + 20 gap, ratios .73/1.47/1.03/.68, text at x=715 (c)(e) | 614px, 2 cols 297 + 20 gap, same ratios, text at x=775 |
| Product card | 317×317, pitch 347, radius 10 (c)(e) | 317×317, pitch 347, radius 10 |
| Tag | 53×28, radius 4, 15.6px/700, top-left offset 12 (e)(f) | h28, radius 4, 0.975rem/700, top-left 12 |
| "+" on card | white rounded square bottom-right (pickup screenshot) | 32px white square r8, bottom-right 12 |
| Band | full-bleed, top corners ~16px, 100/100 (c)(d) | full-bleed ink, 16px top corners, 100/100 |
| 1040 card | `#f7f5f2`, 1px `#e1e0e0`, padding 20/20/50, collage big + 2 small (d)(e) | identical material and padding; P1 + P4/P6 |
| Nav | fixed pill 780×54, 10px radius, 1px `#e1e0e0`, square 36px r8 accent button (f) | identical geometry, mustard square = cart |
| Hero chip | 350×84, 84 thumb, tag, 44px arrow, bottom-right (e) | 350×84, 84 time block, tag, 44px mustard arrow, bottom-right 30/30 |
| Radius / shadow | 10 / 4 / 16, no shadow (d) | 10 / 4 / 8 / 16, no shadow |
| Fade-up | 0.8s, y15, power2.out, top 85%, once (g) | 0.8s, 15px, cubic-bezier(.215,.61,.355,1), once |
| Photo parallax | yPercent ±13, scale 1.15, scrub (g) | ±10% (mobile 6%), scale 1.18, scroll-linked |
| Hover | 0.35–0.4s overshoot spring (g) | 0.4s cubic-bezier(.34,1.56,.64,1) |
| Decoration | flat vector veg clusters (f) | not used (photographic-only row) — the one deliberate gap |

## 13. Home acceptance checklist
1. **First screen at 1440:**
   - The floating pill nav (780×54, gap above, radius 10, border, mustard square cart).
   - A left-aligned two-line H1 at 4.5rem.
   - Three equal 3:4 photos (S1/S2/S3), radius 10, with tags, cut by the fold.
   - The dispatch chip over column 3, bottom-right.
   - No table, form, search or centred giant word.
   - `check-first-screen.py` ≤ 15%.
2. **First screen at 390:**
   - Pill 366 wide.
   - H1 ≤4 lines.
   - Stacked columns with static tags under the photos.
   - No vertical text, no absolute labels over text, no chip.
   - No horizontal overflow.
3. **Block order:** equals §2 (hero, finder, concept, box, subscribe, interlude, desk, stories, visit, footer).
4. **T2:** two columns with ratios .73/1.47 and 1.03/.68, column 1 offset 64px, gaps 20, radius 10. A green eyebrow and a 52px two-line statement on the right. The photos drift on scroll.
5. **T3:**
   - Full-bleed ink band with 16px rounded top corners.
   - A 1040 light card with a 3-photo collage, mustard tag and mustard arrow square.
   - The "Picked this week" strip of five 317px square cards bleeding off the right edge, each with a top-left tag and a bottom-right white "+".
6. **Finder:** three question rows with choice pills linking to /food-finder anchors. It is not a form and not a step grid.
7. **Colours:**
   - White dominant; ink only as text, band and footer.
   - Mustard only on small elements; green only on eyebrows and tags.
   - No orange, no beige-led page.
8. **Photos and numbers:**
   - 18 distinct photo positions on home, all from one STYLE, no text/logos/printed bags, no cut-outs.
   - Every number matches §8: £40, £3.95, 10%, 2/4/6/8 weeks, 48 hours, 14:00, Thursday 15:00–19:00, hours, 2017, Leith, prices.
9. **Motion:**
   - Parallax on the hero columns, the concept mosaic and the S8 interlude.
   - check-parallax ≥6px desktop and mobile; 0 with reduced motion.
   - Fade-up on text blocks only (none in the hero).
   - Stagger on stories and finder rows.
   - No residual hidden elements with `?sp-motion`.
10. **Gates:** auto-gates home pass at 390/1280: no overflow, no overlap, ≥8 images, lang correct. English home ≥400 words with ≥3 narrative paragraphs.
11. **Inner pages:**
    - T2 on About, Food finder, Nutrition desk, Feeding guides, Delivery, Visit.
    - T3 on Shop, Single product, Food finder, Subscribe, Stories, Nutrition desk.
    - The price table is full width ≥782 with nowrap right-aligned prices.
    - All tables stack <782.
