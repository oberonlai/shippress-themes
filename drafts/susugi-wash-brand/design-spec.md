# Susugi Wash: design spec (stage 1, binding for implementation)

Slug `susugi-wash`. Type **landing** (preorder page for an undercounter dishwasher built for small, ten-seat kitchens). Design-plan row b15-5: archetype single-column-longform, nav split, imagery real photography (high-key), palette 御納戸 `#4A5C5E`, fonts Albert Sans + Manrope, font_direction **sans**.
Main reference: **Nikon Z5IIC special page** https://nij.nikon.com/cms/sp/z5_2c/ (S5-Style, product special). Secondary, structure only: **CELL CURE** https://belega-cellcure.com/ (one-screen product LP: one product, one action). Measurements: `reference-tokens.md` (token IDs below: `tok-a`…`tok-g` = sections (a) Colour, (b) Type, (c) Spacing, (d) Radius/border, (e) Imagery, (f) Decoration, (g) Motion of that file). Borrow structure, techniques, key-visual concept, colour relationships and motion values. Never copy Nikon's photos, copy, logo or the exact page.

Landing track: home = one long conversion page with anchor menu and **one repeated CTA (Preorder)**; Waitlist page = early-access signup (newsletter); plus Privacy, Terms, Thanks. No WooCommerce (business-style: declare compatible, not required).

Fixed brand facts (every page, all five languages; see §9): Susugi Wash B.V., founded **2023**, workshop in **Rotterdam, Netherlands** (fictional address). Currency **EUR** in every language.

---

## 1. Signature techniques (three, all obvious at a glance)

### T1. 50/50 split: one candid photo left, white panel right (Nikon hero)
- Reference (nikon-hero.png): the first screen is cut exactly in half at 1440 (720 | 720, `tok-c`). Left: one full-height candid portrait photo (4:5, radius 0, no mask, no overlay). Right: pure white, everything centred on the panel's own axis: a 2-line tagline (~36px, 700, wide tracking), the product wordmark large under it, and two product shots side by side lower down (~210px wide each, ~24px apart). A round 82px outline menu button floats top-right. Nothing crosses the centre line.
- Susugi home: block 1 (`front-hero`), see §3 and Key visual concept. Height `calc(100svh - 72px)`, min 640px, max 900px. Left column exactly 50%, image `object-fit: cover; object-position: 50% 40%`. Right panel `#FFFFFF`, content column 440px centred, vertical rhythm: tagline at 30% of panel height, wordmark 40px under it, product pair 72px under wordmark, info bar pinned to the panel bottom (padding 0 48px 32px).
- Inner pages: every inner page head is a smaller T1 (`page-head-split`): 50/50, height 560px desktop (min 480), photo left (no repeat on that page), right panel white with the side-number label `(02)` in italic, H1, one line of lede, and a mini info line. See continuation table.
- Must not be diluted: split stays exactly 50/50 (not 60/40, not a full-bleed photo with text on top); right panel stays pure white `#FFFFFF` (not grey, not tinted); photo radius 0; no gradient, no overlay, no text over the photo; product pair always two items side by side on desktop.

### T2. Corner-bracket CTA with round arrow (Nikon "interview" link)
- Reference (nikon-s2.png): a box ~620×96 drawn only by **four 22px L-shaped corners**, 1px black (`tok-d`), no fill, no full border. Inside, left: a small product image; centre: a short lead line (small, tracked) over a bold one-line label; right: a 40px circle (`#F4F2EB`-ish fill, 1px hairline) with a → arrow. Generous white space above and below (≈180px).
- Susugi: the **one repeated CTA "Preorder"**. Home appears 3 times (block 3, block 10 bottom, block 12) + the header mini version; on every inner page as the closing block.
  - Size: max-width 620px, min-height 96px, padding 20px 28px, centred in the content column. Corners: four pseudo-elements, 22×22px, `border-top/left` etc. `1px solid #000000`. No other border.
  - Inside (flex, gap 24px, align center): optional thumbnail 110×72 (D1, `object-fit: cover`, radius 0) → text block (lead 0.8125rem Manrope 400, letter-spacing 0.12em, `#30353D`; label 1.0625rem Albert Sans 600, letter-spacing 0.08em, `#000`) → 40px circle, `background #F4F2EB`, `1px solid #CFCAC2`, arrow 14px `#000`.
  - Hover/focus: circle fills main `#4A5C5E`, arrow turns white, corners extend from 22px to 28px (transition .3s ease-out). Whole box is one `<a>`; focus ring 2px `#4A5C5E` offset 4px.
  - Header mini version: 132×40, corners 10px, label "Preorder", no circle.
  - Section padding around it: 120px top / 90px bottom (`tok-c`).
- Must not be diluted: corners only (never a full rectangle border, never a filled button); corners 22px on desktop (≥18px on mobile); the round arrow circle stays; black 1px, not grey.

### T3. Bottom-bleed staggered photo row (Nikon creator gallery)
- Reference (nikon-s2.png bottom): five candid photos in one row from viewport edge to edge, 30px gaps (`tok-c`), mixed aspect (portrait 230×305, landscape 295×195 …, `tok-e`), **bottom-aligned with different vertical offsets** (30–60px), radius 0, no captions on the photos.
- Susugi home: block 6 (`front-row`). Full-bleed (alignfull), 5 figures, gap 30px, padding-inline 24px. Columns `grid-template-columns: 16fr 20.5fr 16fr 20.5fr 16fr`. Aspects: 3:4, 3:2, 3:4, 3:2, 3:4 (portrait-landscape alternating). Vertical offsets (margin-bottom from the shared baseline): fig1 0, fig2 50px, fig3 0, fig4 30px, fig5 60px — implement as `align-items: end` + per-item `translate`/margin so the bottom edges visibly differ by 30–60px. Under each photo, a 0.8125rem caption line (Manrope, `#30353D`), 12px below.
- Mobile (<782px): becomes a horizontal scroll strip (`overflow-x: auto; scroll-snap-type: x mandatory`), items 62vw, offsets halved (15–30px); **no sp-reveal on children** (put `sp-reveal--up` on the row container).
- Inner pages: Machine, Fitting day, Kitchens, About (see table).
- Must not be diluted: 5 photos (4 minimum on inner pages), true edge-to-edge bleed, offsets ≥30px visible, mixed aspects, radius 0. Never an even grid, never a carousel with arrows.

### Supporting decoration (from Nikon, not counted as signatures)
- **Vertical side label** (`tok-f`): rotated 90° clockwise, Albert Sans *italic* 300 13px, letter-spacing 0.06em, `#000`, at `left: 40px`, reading `Susugi Wash  /  Preorder (03)  /  Fitting day`. Nikon swaps the label with a scroll listener (not adopted): we place one **per section** (`position:absolute; left:40px; top:120px` inside each section, not fixed). Shown only ≥1100px; `display:none` below. Never in the mobile first screen.
- **Chapter numbers in parentheses** `(01)`…`(09)` in Albert Sans italic 400, 0.875rem, main `#4A5C5E`, above each section heading.
- **Round outline menu button** (`tok-d`): 52px circle, 1px `#000`, two 18px lines; mobile header only (opens the anchor overlay). Desktop uses the split nav.

### Continuation to inner pages (≥4 required; here 10)
| Page | T1 split head (photo) | T2 bracket CTA | T3 staggered row (photos) |
|---|---|---|---|
| The Machine `/machine` | D1 | end of page + after the specs table | P3, R1, G1, G2, G4 |
| Fitting day `/fitting` | F2 | end of page | G5, G3, P3, H1, R1 |
| Kitchens `/kitchens` | W1 | end of page | G1, G2, G3, G4, G5 |
| About `/about` | T1img | end of page | H1, F1, F2, D1, G2 |
| Preorder & prices `/preorder` | P2 | after the price list (label "Reserve with €200") | — |
| Waitlist `/waitlist` | P1 | — (the form is the action) + text link to Preorder | — |
| Support & FAQ `/support` | R1 | end of page | — |
| Contact `/contact` | G5 | end of page | — |
| Notes (posts index, single) | single: featured image left half, title right | end of single | — |
| Privacy / Terms / Thanks | text head only (no photo), side label + `(—)` | Thanks only | — |

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
Nikon Z5IIC: left half is a candid, high-key, natural-light photograph of a small everyday moment (a child biting a donut, eyes shut). Right half is white: a two-line tagline meaning "no time to wait, shoot now", the product wordmark, then the two camera bodies side by side. **Story:** the product exists for a small unplanned moment of daily life; the page opens on the moment, not the spec, then gives one reason and one route to buy. **Signature motion** (`tok-g`): tagline characters rise and de-blur one by one (opacity .6s ease-in, translateY 20px→0 and blur 20px→0 .6s ease-out, stagger .03s/char); images scale 1.2→1 over 1.5s ease-out; a diagonal mask wipe (150°) reveals blocks.

### (2) Our translation (same composition, same motion idea, same image type: photo)
Left half: a high-key documentary photograph of **a cook sliding a full rack of glasses into the Susugi undercounter machine at the end of a narrow pass**, late in service: body turned three-quarters, one hand on the rack, the open door at knee height, steam just visible, soft-focus pass and window light behind. It is the same kind of image as Nikon's: one person, one candid gesture, close, warm-bright daylight, no staging feel. Right half white: a two-line tagline about the closing rush getting shorter (our words: "The last rack, / sooner."), the wordmark **Susugi Wash**, and the two machines (45 cm and 60 cm) side by side as studio photos on pure white. **Story:** in a ten-seat kitchen the last hour is washing; the page opens on that moment, gives one reason (it fits under your counter and runs a rack in 90 seconds), shows how a fitter sets it in one morning, then asks for one preorder. Motion: tagline lines rise and de-blur, the photo settles from scale 1.2 to 1, product pair rises after (all on load, see KV #1–#4).

### (3) KV checklist (all implemented in the first screen, all visible at 1440×900)
| # | 参考站元素 (reference element) | 我們的對應 (ours) | 位置 (position) | 動態 (motion) | 用哪張圖 (image) |
|---|---|---|---|---|---|
| 1 | Left-half candid portrait photo, high-key, 4:5 | Cook sliding a rack of glasses into the undercounter machine at the narrow pass | left 50%, full hero height, radius 0 | on load: scale 1.2→1, 1.5s `cubic-bezier(.22,1,.36,1)` (ease-out), opacity 0→1 .8s ease-in (`tok-g .ani_img`) | **H1** |
| 2 | Two-line tagline above the wordmark | "The last rack, / sooner." Albert Sans 600 2.25rem, letter-spacing 0.12em | right panel, upper third, centred | on load: each line opacity 0→1 .6s ease-in + translateY 20px→0 + blur 20px→0 .6s ease-out, line stagger .12s, start .2s (`tok-g .ani_text`; per-char replaced by per-line) | — |
| 3 | Product wordmark, large | "Susugi Wash" Albert Sans 500 4.5rem (theme max), letter-spacing 0.02em, `#000` | right panel, centre, 40px under tagline | on load: fade-up 20px .6s ease-out, delay .5s | — |
| 4 | Two products side by side | Susugi Wash 45 and 60, front view on pure white, 210px wide each, gap 24px, captions "45 cm" / "60 cm" 0.75rem under | right panel, lower, centred, 72px under wordmark | on load: rise 20px .6s ease-out, delay .65s / .8s | **P1**, **P2** |
| 5 | Round outline menu button top-right | Desktop: split nav header (anchors + mini bracket "Preorder"); mobile: 52px outline round button | header, top-right | none | — |
| 6 | Vertical italic side label `Z5IIC / Features (04) / …` | `Susugi Wash / Preorder (01) / The last rack` rotated, Albert Sans italic 300 13px | left edge of the **right panel** (x = 50% + 40px), vertically centred; hidden <1100px | none | — |

Plus first-screen info bar (row first_screen `full-bleed-photo-info-bar`): at the bottom of the right panel, 1px top hairline `#CFCAC2`, one line, Manrope 0.8125rem, `#30353D`, letter-spacing 0.06em, items separated by 28px: `● Preorder open` (dot 6px `#4A5C5E`) · `Ships from March 2027` · `From €1,890` · `Fitted in one morning`. Wraps to two lines below 1280px; on mobile it is a 2×2 text grid under the products (still text only, no table).

Load motion implementation (hero must not use sp-reveal): CSS keyframes `sw-in` / `sw-zoom` on `.sw-hero` children, written **only** inside `@media (prefers-reduced-motion: no-preference)` and under `html:not(.sp-no-motion)` (so `?sp-static`, reduced motion, screenshots and the editor show the final state). `animation-fill-mode: both`. No JS, no scroll listener. If no JS loads, the keyframes still end visible.

---

## 3. Home page (en)

### Header (split nav, `tok-d`)
White bar 72px, 1px bottom hairline `#CFCAC2` (appears after 8px scroll is not needed: always on). Three zones on a 1280 max width, padding-inline 40px:
- Left: anchors `The machine` `The last hour` `Fitting day` (Manrope 0.8125rem 500, letter-spacing 0.1em, `#000`; hover underline 1px offset 6px main).
- Centre: wordmark "Susugi Wash" Albert Sans 600 1.25rem, letter-spacing 0.04em.
- Right: anchors `Kitchens` `Specs` + mini bracket CTA "Preorder" (T2 mini) + language switcher (text `EN ▾`).
- Anchors: `#machine #last-hour #fitting #kitchens #specs` (on inner pages they point to `/#…`).
- <960px: wordmark left, 52px round outline button right (KV #5); overlay = white full screen, anchors 1.5rem stacked, the bracket CTA at the bottom, language links.
- One top menu only. Header is not sticky over the hero split (static); it may become sticky after the hero (optional, white).

### First screen composition (1440×900)
Header 72px. Below it T1 split 828px high: left H1 (720×828, cover, focal point on the hands and rack), right white panel per KV #2–#4 + info bar + side label. Nothing saturated except H1's small details; no table/form/search/large centred heading beyond the wordmark, no button fills. Mobile (390×844): header 64px → H1 full width at 390×420 (aspect ~0.93, `object-position: 55% 40%`) → white panel padding 32px 24px: tagline 1.625rem two lines, wordmark 2.75rem, product pair (each 44vw max 160px), info bar 2×2. No side label, nothing absolutely positioned over text.

### Block order
| # | id / pattern | Purpose | Layout and photos | Copy (en) |
|---|---|---|---|---|
| 1 | `front-hero` (T1, KV) | the moment + product | 50/50 split as §2; H1 left; P1 + P2 right | tagline 4 words, info bar 12 words |
| 2 | `front-reason` `#machine` | one reason to want it | White. Side label + `(01) Why it exists`. Single text column 600px starting at the 1/4 line (left 25% of 1200 content): H2 Albert Sans 500 2.25rem 2 lines "Made for kitchens / with ten seats." then 2 paragraphs Manrope 1rem/1.8. No photo (Nikon lede pause). | 2 paras, ~95 words |
| 3 | `front-cta-1` (T2) | first Preorder | bracket CTA with D1 thumbnail: lead "Preorder now, €200 refundable deposit" / label "Reserve a Susugi Wash →". 120/90 padding. | 10 words |
| 4 | `front-pass` `#last-hour` (**sp-parallax**) | the place it lives | Full-bleed Cover, height `clamp(420px, 62vh, 640px)`, background W1 (wide pass at closing time), `--sp-par: 10%`, no overlay, no text on the image. Below it (separate group, white, 64px top): 2 columns 5/12 + 6/12 offset 1: left `(02) The last hour` + H2 "Service ends. / Washing starts."; right 2 paragraphs. | ~110 words |
| 5 | `front-rush` | the closing rush it shortens | 12-col: left 6/12 four text rows separated by 1px `#CFCAC2` hairlines, each row = time stamp Albert Sans 500 1.25rem tabular-nums in main (`22:05`, `22:15`, `22:30`, `22:40`) + one 25-word sentence; right 5/12 offset 1: R1 4:5 radius 0 (`sp-reveal--zoom`). Rows are horizontal text rows, not a vertical timeline (no line, no dots). | 4 × 25 words |
| 6 | `front-row` (T3) | what goes through it | Heading row inside content width: `(03) One machine, ten seats` + H2 "Glasses, plates, / pans, cutlery." left; then full-bleed staggered row G1 G2 G3 G4 G5 with one caption each ("Twenty-five glasses a rack", "Plates up to 30 cm", "Lift, slide, close", "Gastronorm 1/1 fits the 60", "Last light off at 23:10") | 30 + 5 captions |
| 7 | `front-machine` | two sizes | Band `#EBEBED` full bleed, 120/90 padding. Left 5/12: P3 4:5 (machine fitted under a counter, door open). Right 6/12 offset 1: `(04) Two sizes` + H2 "45 or 60. / Both fit under 820 mm."; one paragraph; then a 2×2 figure set with hairlines: `90 s` standard cycle, `2.4 L` water per cycle, `82 °C` final rinse, `52 dB(A)` running. Figures Albert Sans 500 2.75rem `#000`, label 0.8125rem. | ~80 words |
| 8 | `front-fitting` `#fitting` | how a fitter sets it in one morning | White. Left 5/12 F1 4:5; right 6/12 offset 1: `(05) Fitting day` + H2 "One fitter. / One morning."; three chapters stacked, each: `(01)` italic main number, title 1.25rem 400 (h3, `tok-b` 20px/2.0), 40-word paragraph; 1px hairlines between. Ends with a text link "How fitting day works →" (/fitting). Not a step grid. | ~140 words |
| 9 | `front-kitchens` `#kitchens` | three kitchens (stories) | White. `(06) Kitchens` + H2 left. Three columns (gap 48px), each: K1/K2/K3 3:4 radius 0 (`sp-reveal--zoom`), then centred name Albert Sans 500 1.125rem, role 0.8125rem `#30353D`, then a 45-word paragraph left-aligned (Nikon creator voice: name, role, text). Link "Read the three kitchens →". | 3 × 45 words |
| 10 | `front-specs` `#specs` | specs + prices | Band `#EBEBED`. `(07) Specs and prices` + H2. Spec table (2 data columns: 45 / 60) full content width 1080, then the price list (6 rows) full content width; then bracket CTA (no thumbnail) "Prices include VAT · Reserve →". No sp-reveal on tables. | table text |
| 11 | `front-faq` | doubts before buying | White, 760px column centred on the 1/4 line like #2: `(08) Before you reserve` + 4 `<details>` with 1px hairlines (+/− 18px icon right): Does it need a hood? / What if my counter is lower? / Can I cancel? / Who services it? | 4 × 40 words |
| 12 | `front-cta-final` (T2) | the one preorder, last time | White, 160px top / 140 bottom. Small line `(09) Preorder` centred, H2 "Reserve the last rack, sooner." 2.25rem centred (not huge), then the large bracket CTA (no thumbnail): lead "First batch of 400 · ships from March 2027" / label "Preorder with a €200 deposit"; under it a plain text link "Not ready? Join the waitlist →" (/waitlist). | 25 words |

Footer: band `#EBEBED`, 90px padding (`tok-c`): wordmark, 3 short columns (Product: Machine, Fitting, Kitchens, Preorder; Company: About, Notes, Contact; Legal: Privacy, Terms), address line, support hours, language links, "© 2026 Susugi Wash B.V.". Text 0.8125rem `#30353D`.

English home total ≥ 600 words; narrative paragraphs in #2, #4, #8 (≥3 paragraphs of ≥20 words). CJK home ≥ 500 characters.

### Home photo positions (16, no repeats)
H1 · P1 · P2 (hero) · D1 (CTA 1 thumbnail) · W1 (parallax) · R1 (rush) · G1 G2 G3 G4 G5 (row) · P3 (machine) · F1 (fitting) · K1 K2 K3 (kitchens) = **16 positions**, 16 different images.

### Comparison with recent themes
| # | Mame Coffee | Kyugo Training | Nemuri Clinic | Satei Adjusters | **Susugi Wash** |
|---|---|---|---|---|---|
| 1 | framed-window hero | hero | hero + info bar | top/bottom halves hero | **50/50 split: photo left, white panel with wordmark + 2 products** |
| 2 | statement | desk | statement | process (colour-flooded sticky split) | **one reason, narrow text column, no photo** |
| 3 | lots (rule columns) | training day (4 cards) | symptom rows | photo strip | **corner-bracket CTA** |
| 4 | pour | … | method sticky | people | **full-bleed parallax photo + 2-col text** |
| 5 | people | … | parallax room | fees | **closing-rush time rows + 4:5 photo** |
| 6 | bar | … | people pair | FAQ band | **bottom-bleed staggered 5-photo row** |
| 7 | stories | dark stat band | stories (domes) | — | **two sizes on grey band, figures** |
| 8 | visit | … | strip | — | **fitting day: photo + 3 chapters** |
| 9 | — | group booking | — | — | **three kitchens (creator-voice columns)** |
| 10–12 | — | — | — | — | **specs + prices band → FAQ → final bracket CTA** |

Why not alike: Susugi is the only one with a 50/50 photo/white split hero carrying product photos; it repeats a single corner-bracket CTA three times (no other theme has a CTA device); its photo row is edge-to-edge and staggered (Satei/Nemuri strips are even and used as a tail); no sticky split (Nemuri/Satei), no domes, no rule columns (Mame), no dark stat band (Kyugo), no colour-flooded section. Nemuri's info bar spans under a full hero; ours sits only inside the white half. Ends on a CTA, not a strip.

---

## 4. Inner pages (10 + posts)
Each page: T1 split head → body → T2 bracket CTA (except where noted). Side labels and `(nn)` numbers on every section ≥1100px. No sidebar.

1. **The Machine** `/machine`: head D1, H1 "The machine, / up close." Sections: two models side by side (P1, P2 on white, 1:1, captions with width/depth/height); four feature chapters `(01)–(04)` as text rows (90-second cycle, built-in drain pump and softener, door at knee height with a soft hinge, quiet 52 dB(A)); full spec table (§9); T3 row (P3, R1, G1, G2, G4); bracket CTA.
2. **Fitting day** `/fitting`: head F2, H1 "One fitter, / one morning." The 5-step process (§9) as hairline text rows with `(01)–(05)` (not a grid), each 50 words; "What we check" list (counter height ≥ 830 mm, cold water ¾", drain within 1.5 m, 230 V 16 A socket); F1 4:5 beside the "Fitting morning" step; T3 row (G5, G3, P3, H1, R1); people: fitters Grace Mensah and Jun Park as text (name, role, 30 words each, no photo grid); CTA.
3. **Kitchens** `/kitchens`: head W1, H1 "Three kitchens, / last hour." Three stories (§9), each a T1-style 50/50 block (K1/K2/K3 left, text right: name, role, kitchen, 150 words, one pulled sentence 1.25rem); T3 row (G1–G5); CTA. Stories are preorder-trial descriptions, no claimed results or percentages.
4. **Preorder & prices** `/preorder`: head P2, H1 "Reserve yours." Price list full width (§9); deposit terms (refundable until shipping, balance due on delivery date confirmation); dates (preorder window to 31 January 2027, first batch 400, ships from March 2027); bracket CTA "Reserve with €200" → Waitlist form with "Preorder" pre-selected (or mailto fallback); link to Terms.
5. **Waitlist** `/waitlist` (newsletter / early access): head P1, H1 "Hear first." Form: name, email, kitchen name, seats (select 6–10 / 11–20 / 21+), model interest (45 / 60 / not sure), language; consent checkbox linking Privacy; submit = black outline button with the T2 corners (corners on the button). Theme-only implementation without a plugin dependency (pattern + graceful fallback; posts to the Thanks page or uses the core newsletter approach used in earlier landing themes). Under it 3 short lines: what you get (dates, fitting slots in your city, one email a month).
6. **About** `/about`: head T1img (workshop), H1 "Who builds it." Story: founded 2023 in Rotterdam by Ines Aalders and Tomás Reyes after running a ten-seat counter; why 45 cm; how racks were sized; people list (all 7 named people §9) as a hairline list (name · role · city), not a portrait grid; T3 row (H1, F1, F2, D1, G2); CTA.
7. **Support & FAQ** `/support`: head R1, H1 "Before and after." 10 FAQ `<details>` in two groups (Before you buy / After fitting); care plan; support hours; parts line. CTA.
8. **Contact** `/contact`: head G5, H1 "Talk to us." Address, email, phone, support hours, fitting slot hours, map-free directions text; CTA.
9. **Notes** (posts index `/notes`, `home.html`, `single.html`, `archive.html`): 3 posts (§9). Index: first post as a 50/50 split (image left, title right), the other two as 2 columns 3:2 images radius 0. Single: T1 head with the featured image, 680px text column, CTA at end.
10. **Privacy** `/privacy`, **Terms** `/terms` (preorder terms, deposit refund, 30-day return), **Thanks** `/thanks` (after waitlist/preorder: "You're on the list." + T2 CTA back to home specs). Text head only, no photo.
Plus 404 and search: side label + H1 + T2 CTA home.
Reachable pages ≥ 9 from the header/footer.

---

## 5. Colour
Taken from Nikon (`tok-a`); main from the design-plan row.
| Role | Hex | Source | Use | Share (page) |
|---|---|---|---|---|
| Base | `#FFFFFF` | Nikon right panel / page ground | ground, hero right panel | ~60% (first screen ~48%) |
| Ground band | `#EBEBED` | Nikon footer band (as is) | machine band, specs band, footer | ~25% |
| Ink | `#000000` | Nikon body ink | headings, corners, menu circle, wordmark | ~6% |
| Sub ink | `#30353D` | Nikon secondary ink (as is) | body text, captions, info bar | ~4% |
| Hairline | `#CFCAC2` | Nikon line | rules, table lines, arrow circle border | <1% |
| Arrow fill | `#F4F2EB` | Nikon arrow circle / warm ground | 40px CTA circle only | <0.5% |
| Main | `#4A5C5E` | design-plan 御納戸 (Nikon has no colour UI; this is the row palette) | `(nn)` numbers, rush time stamps, info-bar dot, CTA hover fill, link hover, focus ring, product door panel colour in photos | ≤4% |
Changed from Nikon: Nikon's feature ground `#ECE6E6` (taupe-pink) is **not** used: a pink-grey reads cosmetic for a stainless kitchen machine; we use Nikon's own neutral `#EBEBED` instead (same lightness ±1%). No beige ground.
Contrast: `#30353D` on `#FFFFFF` 12.6:1, on `#EBEBED` 10.6:1; white on `#4A5C5E` 6.9:1.
**First-screen saturation:** Nikon measured 2.0% (`tok-a`). Gate: `python3 scripts/check-first-screen.py screenshots/home-desktop.webp --max 15` (common.md); design target **≤ 3%**: H1 must be graded high-key and low-saturation (white tile, steel, pale wood, grey-teal; no tomatoes, herbs or coloured food in focus), UI has no saturated colour (main `#4A5C5E` has S≈21%, below the 35% threshold).

## 6. Type (font_direction **sans**)
- Latin: **Albert Sans** (headings, wordmark, labels, numbers; 300 italic, 400 italic, 400, 500, 600) + **Manrope** (body, UI; 400, 500, 700). Both sans. No serif anywhere (Nikon's italic serif side label becomes Albert Sans italic).
- CJK: **Noto Sans TC** (zh-TW) and **Noto Sans JP** (ja) 黑體 for headings and body (400, 700; subset woff2). Never Noto Serif.
- Stacks (theme.json `fontFamilies`, all loaded by `fontFace`, so editor and front are identical):
  - heading: `"Albert Sans", "Noto Sans TC", "Noto Sans JP", "Helvetica Neue", Arial, sans-serif`
  - body: `Manrope, "Noto Sans TC", "Noto Sans JP", "Helvetica Neue", Arial, sans-serif`
  - `:lang(ja)` puts `"Noto Sans JP"` before TC; `:lang(zh-TW)` puts TC first. Because style.css uses `:lang(`, copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it. zh-TW/ja subsets made with the Hokuto/Hada workaround (the zh subset script is known broken).
- Sizes (theme.json `fontSizes`; source `tok-b`): small 0.8125rem · base 1rem (body, `tok-b` 16px/1.8) · medium 1.25rem (h3, `tok-b` 20px/2.0, weight 400) · large 1.625rem · x-large 2.25rem (h2 + hero tagline, `tok-b` ~36px; weight 500 for h2, 600 for tagline) · xx-large **4.5rem** (hero wordmark; max ≥ 4.25rem ✓) · figures 2.75rem (custom).
- Line-height: body 1.8 (`tok-b`), h3 2.0, h2 1.35, wordmark 1.05; CJK body 1.85 and headings ~0.75× the English size.
- Tracking (`tok-b` 4px ≈ 0.25em on JP): Latin tagline 0.12em, labels/nav 0.1em, body 0.01em; **zh-TW/ja body 0.12em, headings 0.15em** (closest to Nikon's 4px rhythm). fr/de `hyphens: auto`.
- Lede (`tok-b` h2 lede 14px/2.5): the info bar and CTA lead lines use 0.8125–0.875rem with line-height 2.2.

## 7. Responsive (hard)
- 390px first screen: no vertical/rotated text, no absolutely positioned label over text or photo; side labels `display:none` <1100px; info bar is in normal flow.
- Header: split nav ≥960px; below, wordmark + round button.
- Spec table and price list: at ≥782px **full content width** (1080px, `width:100%`), price/value columns `white-space: nowrap; text-align: right`, never clipped (check at 800 and 1280). Table wrapper `overflow-x: visible`; no fixed column widths in px except the label column (`width: 46%`).
- <782px: every table becomes stacked rows (each `tr` is a block: label on top in 0.8125rem `#30353D`, value(s) below; for the 2-model spec table show "45: … / 60: …" lines). Price rows: name left, price right in the same line, nowrap, description wraps below.
- Split blocks (T1 hero, page heads, story blocks) stack photo-first <782px; the hero photo max 420px tall on mobile.
- T3 row becomes a horizontal snap strip <782px (container gets the reveal, not children). No horizontal page overflow at 390 or 1280 (`html, body {overflow-x: clip}`).
- Bracket CTA on mobile: width 100% − 48px, corners 18px, thumbnail hidden <480px.

## 8. Photos (18, Grok, one at a time, Read each one)
Imagery: **photo** (stage-a IMAGERY: photo; Nikon uses candid natural-light high-key photography). Real-photo STYLE, same string on every prompt:

`STYLE = "photorealistic documentary photograph, high-key bright natural daylight with soft diffused fill, white and pale grey palette with brushed stainless steel and muted grey-teal accents, small modern restaurant kitchen in a neutral international city, shallow depth of field with soft-focus background, calm candid moment, diverse adults in plain white or light grey cook jackets, low saturation, no vivid food colours, no text, no logos, no brand marks, no signage lettering, no Japanese elements"`

Product shots P1/P2 add: `studio product photograph on a seamless pure white background (#FFFFFF), soft floor shadow, centred, square 1:1` — rectangular images on white, **not** transparent (cut-outs 0). The machine everywhere: compact undercounter commercial dishwasher, brushed stainless body, **matte grey-teal front door panel** (≈ #4A5C5E), one small round dial, no display text.
Each file ≤300 KB, ≤2000px, webp, one readme line per image (AI-generated, CC0). Re-generate if text, logos, broken hands/faces or style drift.

| ID | Subject / composition | Ratio | Home? | Used on (never twice on one page) |
|---|---|---|---|---|
| H1 | cook sliding a full rack of glasses into the open undercounter machine at the end of a narrow pass, three-quarter body, hands and rack sharp, faint steam, window light behind | 4:5 | **yes (hero KV#1)** | Home hero; Fitting row; About row |
| P1 | Susugi Wash 45 front view on pure white | 1:1 | **yes (hero KV#4)** | Home hero; Machine models; Waitlist head |
| P2 | Susugi Wash 60 front view on pure white | 1:1 | **yes (hero KV#4)** | Home hero; Machine models; Preorder head |
| P3 | machine fitted under a pale counter, door open, rack half out, three-quarter view | 4:5 | **yes (machine)** | Home machine; Machine row; Fitting row |
| D1 | close-up of the grey-teal door and the round dial, hand closing the door | 3:2 | **yes (CTA 1 thumb)** | Home CTA 1; Machine head; About row |
| W1 | wide view along a narrow pass at closing time, chairs up, last plates stacked by the machine, soft evening-to-white light | 21:9 (2000×860) | **yes (parallax)** | Home pass; Kitchens head |
| R1 | open machine door with steam rising off a rack of clean glasses | 4:5 | **yes (rush)** | Home rush; Machine row; Fitting row; Support head |
| G1 | stack of clean white plates on steel, hand placing the last one | 3:4 | **yes (row)** | Home row; Machine row; Kitchens row |
| G2 | cutlery basket being lifted out, water droplets | 3:2 | **yes (row)** | Home row; Machine row; Kitchens row; About row; post 1 |
| G3 | two hands sliding a glass rack along the steel bench toward the machine | 3:4 | **yes (row)** | Home row; Fitting row; Kitchens row |
| G4 | gastronorm pan going into the 60 cm machine | 3:2 | **yes (row)** | Home row; Machine row; Kitchens row |
| G5 | empty clean kitchen at night, one light on, wiped counter, machine closed | 3:4 | **yes (row)** | Home row; Fitting row; Kitchens row; Contact head |
| F1 | fitter kneeling, levelling the machine under a counter with a spirit level | 4:5 | **yes (fitting)** | Home fitting; Fitting body; About row |
| F2 | close-up of fitter's hands connecting the water hose and drain behind the machine | 3:2 | no | Fitting head; About row; post 2 |
| K1 | chef-owner at a ten-seat counter bistro, wiping the counter, machine visible low in the background | 3:4 | **yes (kitchens)** | Home kitchens; Kitchens story 1 |
| K2 | cook at a small grill counter loading a plate rack | 3:4 | **yes (kitchens)** | Home kitchens; Kitchens story 2 |
| K3 | owner of a small bar polishing a glass beside the open machine | 3:4 | **yes (kitchens)** | Home kitchens; Kitchens story 3 |
| T1img | small bright workshop: two people checking a machine on a bench (founders) | 4:3 | no | About head; post 3 |
Total **18** unique images, 16 on home. Posts: post 1 = G2, post 2 = F2, post 3 = T1img. Notes index shows each once.

## 9. Fixed facts (identical on home, inner pages, footer and all five languages)
- **Company**: Susugi Wash B.V., founded 2023, workshop Werfstraat 12, 3011 Rotterdam, Netherlands (fictional address; local formats per language in brand.md). hello@susugiwash.example, +31 10 000 0000 (fictional).
- **Hours**: support Mon–Fri 08:00–18:00 CET; fitting slots Mon–Sat 06:30–11:00 (before lunch service).
- **Preorder**: €200 refundable deposit; window until 31 January 2027; first batch 400 machines; ships from March 2027; balance due when the delivery date is confirmed; 30-day return after fitting.
- **Prices** (EUR incl. VAT; 6 rows):
| Item | Price |
|---|---|
| Susugi Wash 45 (448 mm wide) | €1,890 |
| Susugi Wash 60 (598 mm wide) | €2,290 |
| Fitting day (one fitter, about 4 hours, water/drain/power check) | €240 |
| Rack set (glass rack, plate rack, cutlery basket) | €95 |
| Descaler cartridges, pack of 6 | €38 |
| Five-year care plan | €180 |
- **Specs** (45 / 60): width 448 / 598 mm; depth 560 / 600 mm; height 820 / 820 mm; rack 400×400 / 500×500 mm; standard cycle 90 s, heavy 3 min; water 2.4 L / 3.1 L per cycle; final rinse 82 °C; noise 52 dB(A); power 230 V 16 A / 230 V 16 A or 400 V 3-phase; drain pump and softener built in.
- **Process (5)**: (01) Preorder with the deposit → (02) 20-minute video site check within 7 days → (03) fitting date booked 4 weeks before delivery → (04) fitting morning: one fitter, about 4 hours, before lunch service → (05) first service with the fitter on call that evening.
- **People (7)**: Ines Aalders (co-founder, product design, Rotterdam); Tomás Reyes (co-founder, engineering, Rotterdam); Grace Mensah (head fitter); Jun Park (fitter); Lea Fournier (chef-owner, Comptoir Lea, 10 seats, Lyon); Samir Haddad (cook, Haddad Grill Counter, 12 seats, Leeds); Nora Lindgren (owner, Bar Ö, 9 seats, Malmö). All fictional.
- **Stories (3)**: Comptoir Lea (K1), Haddad Grill Counter (K2), Bar Ö (K3): early trial kitchens describing their last hour; no percentages, no "guaranteed".
- **Posts (3)**: "Why 45 centimetres" (G2), "What a fitter checks before the morning" (F2), "Sizing racks for ten seats" (T1img).
- No awards, no real media, no real brands, no claimed savings; numbers above are product specifications of a fictional machine.

## 10. Scroll motion (sp-scroll; max 3 effect types per page)
Copy `pipeline/assets/sp-scroll/` unchanged into `assets/`. Hero: no sp-reveal (load keyframes only, §2). Tables, forms, legal text: no effects.
| Effect | sp-* | Where | Source (Nikon, `tok-g`) | Our values |
|---|---|---|---|---|
| Text rise | `sp-reveal sp-reveal--up` on headings/paragraph groups; parent `sp-stagger` on chapter lists, rush rows, kitchens columns, FAQ items | blocks 2, 4 text, 5 rows, 6 heading, 7 text, 8 chapters, 9 text, 11, 12 heading; inner page bodies | `.ani_text`: IO rootMargin −20% 0, once; opacity .6s ease-in, translateY 20px→0 + blur 20px→0 .6s ease-out; GSAP per-char stagger .03s | `--sp-dist: 20px; --sp-dur: .6s;` easing default `cubic-bezier(.23,1,.32,1)`; stagger 0.12s steps (sp-stagger); blur not used (sp-scroll has no blur) |
| Image settle | `sp-reveal sp-reveal--zoom` on figures | R1 (5), P3 (7), F1 (8), K1–K3 (9), T3 row container (6), inner-page body photos | `.ani_img`: scale 1.2→1 1.5s ease-out, opacity .8s ease-in | sp default scale 1.06→1, duration 1.5s (`--sp-dur` on the element) |
| Parallax | `sp-parallax` | block 4 Cover (W1) | Nikon has no parallax; its image motion is the slow scale settle, so we give the one full-bleed photo continuous slow motion as the scroll counterpart | see §11 |
Not adopted: Nikon diagonal mask wipe (keeps us at 3 types), side-label swap (scroll listener). Bracket CTAs use `sp-reveal--up` only.

## 11. Parallax (required)
- Block: home #4 `front-pass` (full-bleed Cover, `alignfull`, class `sp-parallax`), height `clamp(420px, 62vh, 640px)`.
- Background layer: W1 as the Cover background image (`.wp-block-cover__image-background`), `object-position: 50% 55%`, no overlay (dim 0).
- Foreground: none on the image (text sits in the next group below), so nothing readable moves.
- Speed: `--sp-par: 10%` desktop; `@media (max-width: 781px) { --sp-par: 6%; }` (kept on mobile, Cover min-height 320px).
- Reference counterpart: Nikon's `.ani_img` slow 1.5s scale settle on large photos; we translate it into one continuous scroll-driven drift on the widest photo.
- Optional second parallax on Kitchens page head (W1, `--sp-par: 8%`).
- Verified by `check-parallax.mjs` (≥6px desktop and mobile, 0 under reduced motion).

## 12. Similarity target (80%) vs Nikon tokens
| Dimension | Nikon value (token) | Susugi value |
|---|---|---|
| Hero layout | 50/50 split 720/720, photo left 4:5, white right (`tok-c`,`tok-e`) | 50/50 split, H1 left 4:5 cover, white right |
| Hero right content | tagline ~36px 700 → wordmark → 2 products ~210px (`tok-b`,`tok-e`) | tagline 2.25rem 600 → wordmark 4.5rem → P1+P2 210px, gap 24px |
| Base / ground | `#FFFFFF` ~48% first screen; bands `#ECE6E6`, `#EBEBED`, `#F4F2EB` (`tok-a`) | `#FFFFFF` ~48% first screen; band `#EBEBED`; `#F4F2EB` arrow circle (pink-grey dropped, reason §5) |
| Ink | `#000000`, `#30353D` (`tok-a`) | same |
| Hairline | `#CFCAC2` (`tok-a`) | same |
| Saturated first screen | 2.0% (`tok-a`) | target ≤3%, gate 15% |
| Accent | none in UI | `#4A5C5E` ≤4% (row palette) |
| Font family | Noto Sans JP gothic, italic serif side label (`tok-b`) | Albert Sans / Manrope + Noto Sans TC/JP; side label Albert Sans italic |
| Body | 16px / 1.8 / 400 (`tok-b`) | 1rem / 1.8 / 400 |
| h3 | 20px / 2.0 / 400 (`tok-b`) | 1.25rem / 2.0 / 400 |
| Tracking | 4px (0.25em) everywhere on JP (`tok-b`) | CJK 0.12–0.15em; Latin labels 0.1em, tagline 0.12em |
| Section padding | 120 top / 90 bottom (`tok-c`) | 120 / 90 (bands and CTA sections) |
| Text column | ~350px at x=150 (`tok-c`) | 600px at the 1/4 line (wider for English length) |
| Radius | 0 on photos; 100% only on circles (`tok-d`) | 0 on all photos and blocks; circles only (52px menu, 40px arrow) |
| Corner-bracket CTA | 4 × 22px L, 1px black, ~420–620×96 (`tok-d`,`tok-f`) | 4 × 22px L, 1px `#000`, max 620×96 min |
| Arrow circle | 40px, `#F4F2EB` fill (`tok-d`) | 40px, `#F4F2EB`, 1px `#CFCAC2` |
| Menu button | 82px round outline 1px black (`tok-d`) | 52px round outline (mobile only; desktop split nav per row) |
| Side label | rotated 90°, italic serif 13px, x=40 (`tok-f`) | rotated 90°, Albert Sans italic 300 13px, x=40, per section, ≥1100px |
| Photo row | 5 mixed-aspect, bleed, 30px gaps, offsets 30–60px (`tok-c`,`tok-e`) | same: 5, bleed, 30px, offsets 0/50/0/30/60px |
| Shadow | only on a promo float (`tok-d`) | none |
| Text motion | .6s, 20px, ease-in/ease-out, IO −20% once (`tok-g`) | sp-reveal--up `--sp-dur:.6s; --sp-dist:20px`, once |
| Image motion | scale 1.2→1 1.5s ease-out (`tok-g`) | hero load 1.2→1 1.5s; sp-reveal--zoom 1.5s |
| Mask wipe | 150° mask 1.5s ease-in (`tok-g`) | not adopted (3-effect limit) |
| Parallax | none | sp-parallax W1 10% / 6% |

## 13. Home acceptance checklist (stage-1 review)
1. First screen at 1440×900: 72px white split-nav header; exact 50/50 split; H1 cook-with-rack photo left (radius 0, no overlay); right panel pure white with 2-line tagline, "Susugi Wash" wordmark at 4.5rem, P1 + P2 side by side, info bar with hairline at the bottom, italic side label; no table/form/search/filled button.
2. KV checklist §2 items 1–6 all visible; hero load motion runs with `?sp-motion` and is static with `?sp-static`.
3. Block order equals §3 (12 blocks), anchors `#machine #last-hour #fitting #kitchens #specs` work from the header.
4. T2 bracket CTA appears at blocks 3, 10, 12 and in the header (corners only, 22px, round arrow, all linking to the Preorder page); no filled CTA buttons anywhere.
5. T3 row: 5 photos edge to edge, mixed aspects, visibly different bottom offsets (≥30px), 30px gaps; mobile snap strip without page overflow.
6. 16 image positions, 16 different images, no repeat; all from the §8 list; no text/logos in photos; product shots on white, not transparent.
7. Colours: white dominant, `#EBEBED` bands, ink black, main `#4A5C5E` only small; `check-first-screen.py` ≤15% (target ≤3%).
8. Type: Albert Sans + Manrope loaded via theme.json fontFace; max size 4.5rem; no serif; editor matches front.
9. Spec table and price list full width at 800 and 1280, prices nowrap right; stacked at 390.
10. 390px first screen: no rotated/absolute labels, no overlap; auto-gates pass (`… en gates/en.json 1 1`).
11. Motion: only sp-reveal--up (+stagger), sp-reveal--zoom, sp-parallax; hero without sp-reveal; `check-parallax.mjs` passes (parallax ≥6px desktop and mobile).
12. Copy ≥600 English words, prices/specs/dates exactly as §9; no claims, awards or real brands.
13. Signatures continue on inner pages per §1 table (checked in stage 2).
