# Tsuya Jewellers: design spec (stage 1, binding for implementation)

Slug `tsuya-jewellers`, independent jeweller, type **store** (WooCommerce required, checkout must work; commissions are booked through a contact form, ready pieces are sold through WooCommerce). Design-plan row b18-3: archetype asymmetric-masonry, hero framed-window, nav split, real photography, photo direction **low-key**, palette purple-black `#2A2433`, fonts Instrument Sans / Manrope, font_direction **sans**, page_structure **people-story**.

Main (and only) reference: **MAISON TAKUYA — https://maisontakuya.jp/** (S5-Style, fashion, leather goods store). Measurements in `reference-tokens.md`, cited below as `tok(a)`…`tok(g)`; screenshots in `brand/ref/`. We borrow structure, technique, key-visual concept, colour relations, sizes and motion. We do **not** take any photo, copy, logo, monogram letters or product name.

Fixed brand facts (every page, all five languages; see §8): Tsuya Jewellers, bench opened **2011** by **Ines Marlow**, shop and workshop at **22 Wexley Street, Port Ellery** (fictional). Currency **USD** in every language.

Similarity target: **80 %** of the reference in colour relations, image presentation, scroll motion, decoration and layout (§11 table). Everything we make (photos, words, marks) is our own.

---

## 1. Signature techniques (three, obvious at a glance; T4 supporting)

### T1. Framed low-key photograph at 82 % of the first screen + flat caption strip (accent headline left, 500 px paragraph right)
- Reference (`ref/maison-first.png`, `tok(c)`, `tok(e)`): one grey studio photo 1440×754 = **82 % of a 915 px first screen**, radius 0, subject right of centre; under it a flat strip on the page ground, **161 px** high, padding **43 px top / 34 px sides**; at the left a two-line slogan in a 14 px serif, at the right a **500 px-wide** paragraph (12 px), both in the single vermilion accent. Nothing else on the screen except an outlined 33×49 monogram top-right.
- Tsuya, home block 1: the photo **H1** (gold ring on a linen tray under one bench lamp) in a **framed window** (row hero = framed-window): the frame is the page ground showing around the photo — **34 px left/right**, **60 px top** (this is the slot of the hidden header, §1 T2), photo bottom at **82 svh**. Photo height `calc(82svh - 60px)`, `object-fit: cover`, `object-position: 62% 50%` (subject right of centre as in the reference), radius 0, no border, no shadow. Under it the caption strip on the page ground `#DFDDE2`, height `18svh` (min 150 px), padding `2.6875rem 2.125rem` (43 / 34 px): left the slogan **"Made to be worn / on an ordinary Tuesday."** Instrument Sans 400, `1.25rem/1.5`, accent `#785A28`, two lines forced by `<br>` in en; right a paragraph **max-width 500px**, Manrope 400 `0.8125rem/1.6`, same accent colour, aligned to the right edge (34 px from the viewport). ~60 words (see §3 block 1).
- Must not be diluted: photo ≥ 80 % of the first-screen height at 1440×900; the strip uses **only** the accent colour for its type (no ink, no button, no second colour); the slogan stays small (≤ 1.375rem) — hierarchy by position, not size (`tok(b)`); no overlay text on the photo.
- Mobile 390: header visible (56 px), frame 16 px sides / 0 top, photo `aspect-ratio: 4/5` (≈ 62 svh); strip in normal flow: slogan 1.125rem then paragraph 0.875rem, full width, 24 px gap. No monogram, no absolute labels, no vertical text.

### T2. Split header hidden on the first screen, sliding in after it
- Reference (`ref/scroll-maison-newarrivals-header.png`, `tok(f)`, `tok(g)`): 60 px header on the page ground; nav at the left (4 items, 60 px gaps, 12 px sans), the wordmark centred in wide-tracked caps in the accent colour, search icon + Login + Cart (0) at the right. On the first screen it is absent; after ≈ 1 screen it appears: opacity 0→1, translateY −20 px→0, ≈ 0.5 s, `cubic-bezier(.4,0,.22,1)`.
- Tsuya, every page: `header.ts-header`, `position: sticky; top: 0`, height **60 px**, ground `#DFDDE2` (no rule, no shadow). Left: **Pieces · Commissions · The Bench · Visit** (Manrope 500 0.75rem, letter-spacing 0.04em, gap 60 px). Centre: wordmark **TSUYA** Instrument Sans 500 0.9375rem, uppercase, letter-spacing **0.32em**, accent `#785A28` (text, not an image). Right: search icon (1 px outline, 16 px), "Account", "Cart (0)" (WooCommerce mini-cart count), gap 60 px.
- Hide/show (home only, ≥ 782 px only): pure CSS scroll-driven animation, **no scroll listener, no JS**:
  `@supports (animation-timeline: scroll()) { @media (min-width:782px) and (prefers-reduced-motion:no-preference) { html.sp-js:not(.sp-no-motion) body.home .ts-header { animation: ts-head-in linear both; animation-timeline: scroll(root); animation-range: 55vh 75vh; } } }` with `@keyframes ts-head-in { from { opacity:0; transform:translateY(-20px); visibility:hidden } to { opacity:1; transform:none; visibility:visible } }`. `.ts-header:focus-within { opacity:1 !important; transform:none !important; visibility:visible !important }`.
  Because the hidden state is only under `html.sp-js:not(.sp-no-motion)`: no-JS, `?sp-static`, reduced motion, Firefox and the editor show the header normally (it then sits in the 60 px top slot of the frame — the layout is identical either way).
- Inner pages: same header, always visible (no hide).
- Under 782 px: header always visible, 56 px: wordmark left, "Menu" text button + "Cart (0)" right; the overlay menu is WP navigation overlay on `#DFDDE2`, items 1.25rem.
- Must not be diluted: the wordmark is centred and tracked in the accent colour; nav left / utilities right (split); no burger icon on desktop; no dark bar.

### T3. Offset horizontal strip: 16 % empty left gutter, wide 1.48 : 1 photos, the next one peeking at the right, slides in from the right
- Reference (`ref/scroll-maison-strip.png`, `tok(c)`, `tok(e)`, `tok(g)`): wrapper starts at **x 235 of 1440 (16.3 %)**; items **972×658 (1.48 : 1)**, gap 18 px; the second item is cut by the right edge; under each, a 14 px serif title and a two-line 12 px caption, 25 px padding; the whole strip enters from the right (`translate3d(calc(6rem + 50.8vw),0,0)` → 0, 1 s `cubic-bezier(0.65,0.05,0.36,1)`), draggable.
- Tsuya, home block 4 "Commissions we have drawn": 3 items **S1, S2, S3** (the three stories, §8). Wrapper `padding-left: 16.3vw`, items `width: 67.5vw; aspect-ratio: 1.48/1` (972/1440), gap 18 px, horizontal `overflow-x: auto; scroll-snap-type: x mandatory`, scrollbar hidden, item 2 peeks ≈ 16 vw at the right. Under each photo (padding 25 px 0): title Instrument Sans 500 1rem ink (e.g. "Two bands from one bracelet."), then Manrope 0.8125rem/1.6 two lines muted `#5E5866`, then "Read the story →" 0.75rem. Section label "Commissions" at x 34 px above the strip (1.25rem Instrument Sans 400). Motion: `sp-reveal sp-reveal--left` on the **wrapper only** (children never get sp-reveal), `--sp-dur:1s; --sp-ease:cubic-bezier(.65,.05,.36,1); --sp-dist:30px`.
- Mobile: gutter 16 px, items 84 vw (1.48 : 1), next peeks 12 vw, same captions.
- Must not be diluted: the empty left gutter (≥ 16 % on desktop), the 1.48 : 1 ratio and the peeking next photo are all visible on one screen; no arrows, no dots, no cards, no borders.

### T4 (supporting). Flat 3 : 4 tiles, 6 px gaps, one long thin arrow
- Reference (`ref/scroll-maison-newarrivals-header.png`, `tok(c)`, `tok(e)`, `tok(f)`): 4 tiles 288×384 (3 : 4), gap 6 px, starting x 35; the object centred and ≈ 40 % of the tile width; under each: name, material, price in 12 px; at the right a **48 px thin arrow** (1 px) as the only "next" control; label "New arrivals" 16 px serif 55 px above.
- Tsuya, home block 3 "Pieces for every day": 4 WooCommerce products (J1–J4 photos) at `width: calc((100% - 5*6px - 20vw)/4)`, gap **6 px**, aspect 3 : 4, radius 0; the 5th column (≈ 14 vw) holds only a 48 × 1 px ink arrow (SVG, 1 px stroke) linking to /pieces, vertically centred on the tiles. Under each tile (padding-top 22 px): name (Manrope 500 0.75rem ink), material (0.75rem ink), price (0.75rem muted `#5E5866`). Mobile: 2 × 2 grid, gap 6 px, arrow becomes a text link "All pieces →".

### Continuation to inner pages (≥ 4 required; here 8)
| Page | T1 framed photo + caption strip | T2 split header | T3 offset strip | T4 tiles |
|---|---|---|---|---|
| Pieces (shop) | head: frame 34 px, photo P2 at `56svh`, strip: title left in accent, 500 px intro right | yes | — | full catalogue, 4 per row, 6 px gaps, arrow at end |
| Commissions | head: C2 (wax carving) | yes | strip of S1–S3 "drawn here" | — |
| Prices | head: V1 | yes | — | 4 tiles (bands, signet, setting, repairs) linking to sections |
| Repairs & Care | head: P1 (filing a shank) | yes | — | 3 tiles of repair types (photos P2, J6, R2) |
| The Bench (people) | head: B1 | yes | strip of R1, R2, C2 with name captions; all 6 people as text rows below | — |
| Journal / Stories | head: H1 | yes | strip of the 3 stories (S1–S3) | — |
| About | head: B1 | yes | strip: H1, C1, P2 (the making in order) | — |
| Visit | head: V1 | yes | — | — |
Inner page head rule (T1 short): frame 34 px sides / 60 px top (header visible), photo `height: 56svh` (min 380 px, max 560 px), then caption strip: page title **left** in accent `#785A28`, Instrument Sans 400 **2.5rem/1.2** (x-large), the 500 px intro paragraph **right** in ink 0.9375rem. Mobile: photo 4 : 3, title 1.75rem, intro below.
§4 is binding for page content.

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
- What it shows (`ref/maison-first.png`): a quiet grey studio, a model cropped at the mouth and hip in a dark jacket, carrying a black leather bag at the right of centre; soft even light, no props; below, a flat grey strip with "Crafted to / Transcend Time" at the left and a short paragraph at the right, both in a single vermilion; a small outlined monogram top-right; no menu.
- Story: an object made to last, shown plainly so the material speaks; it "ages with you" in daily use.
- Signature motion: the header is not there on arrival; after the hero it fades and slides 20 px down into place (GSAP, ≈ 0.5 s); the next screens bring an offset photo pair and a photo strip that slides in from the right edge (1 s, `cubic-bezier(0.65,0.05,0.36,1)`). No parallax on the reference (`tok(g)`); our required parallax is added on the photo inside the frame — a slow drift that keeps the stillness.

### (2) Our transformed scene (independent jeweller; same composition, same motion idea, same image type = real low-key studio photography)
- Inside the frame: **H1**, a single plain 18k gold band resting on a small undyed linen tray on a dark wooden bench, lit by **one** bench lamp from the upper left (the lamp head just visible at the top-left edge), the rest of the field a soft grey-violet dark; ring at 62 % from the left, small (≈ 8 % of the photo width) in a big quiet field — the same "one object, plain, right of centre" composition as the bag.
- Story: a ring made to be worn every day, on an ordinary Tuesday, shown under work light at the end of the day — the bench where it was made is the backdrop. The slogan carries it: "Made to be worn on an ordinary Tuesday."
- Motion: header absent on arrival, slides in after the hero (T2); photo drifts slowly inside the frame (`sp-parallax`); screen 2 brings the offset pair (hands filing a shank / a finished ring in a palm) fading up; screen 4 the commissions strip slides in from the right (T3).

### (3) KV checklist (every item implemented and visible on the first screen at 1440×900; item 4 visible after one scroll)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Full-width grey studio photo, model with a black bag right of centre, 82 % of the screen | Low-key photo: one gold band on a linen tray under a single bench lamp, dark bench, ring at 62 % from left, in a **framed window** (34 px sides, 60 px top) | y 60 px → 82 svh, x 34 px → 1406 px; mobile 16 px sides, 4 : 5 | `sp-parallax` on the frame, `--sp-par: 8%` (mobile 5 %) | **H1** |
| 2 | Flat caption strip: accent serif slogan left, 500 px accent paragraph right | Flat strip on `#DFDDE2`: brass slogan "Made to be worn / on an ordinary Tuesday." left (1.25rem), 500 px brass paragraph right (0.8125rem) | 82 svh → 100 svh, padding 43 / 34 px; mobile: in flow under the photo | none (hero: no reveal) | — |
| 3 | Outlined 33×49 monogram top-right in accent | Outlined 33×49 SVG monogram, 1 px brass `#C9A56B` rectangle with a small "T" drawn in 1 px lines (our own mark, no letters of theirs), linked to home | top-right inside the photo: 24 px from the frame's top and right edges; ≥ 782 px only | none | — (SVG) |
| 4 | Header absent on arrival, slides in after the hero | Split header (nav left, tracked TSUYA centred in brass, search/Account/Cart right) appears between 55–75 vh of scroll: opacity 0→1, −20 px → 0 | sticky top, 60 px | CSS scroll-driven (`animation-timeline: scroll(root)`), equivalent to 0.5 s `cubic-bezier(.4,0,.22,1)` | — |
| 5 | Grey, colourless field; the only chroma is the small accent type | Grey-violet low-key field; the only chroma is the brass type and the warm lamp glow / gold in H1 | whole first screen | — | H1 |
| 6 | Next screen begins with ground only (100 px empty above the pair) | 100 px of plain `#DFDDE2` under the strip before the offset pair (block 2) | below fold | `sp-reveal--up` on the pair (not in hero) | P1, P2 |

Do not "simplify" this into a generic jewellery hero: no centred headline, no button on the photo, no product carousel, no dark overlay.

---

## 3. Home page

### First screen (1440×900)
- y 0–60: empty `#DFDDE2` (the hidden header's slot; in static/fallback mode the header shows here).
- y 60–738: H1 in the frame, x 34–1406. Monogram at x 1349–1382, y 84–133.
- y 738–900: caption strip (slogan left x 34, paragraph right x 906–1406).
- Saturated share target ≤ 3 % (brass type + gold ring + lamp glow); hard gate ≤ 15 % (`check-first-screen.py`). Forbidden: table, form, search box, buttons, any heading over 1.375rem, overlay text on the photo.

### Block order
| # | Pattern | Purpose | Layout and photos | Copy |
|---|---|---|---|---|
| 1 | `front-hero` | KV, story | T1 as above, `sp-parallax` on the frame group | slogan 9 words + paragraph ≈ 55 words: "A small bench on Wexley Street, open since 2011. We make rings, chains and studs in recycled gold for the hand that wears them every day — at the sink, on the bike, at the desk. Nothing is polished for a shop window. Each piece is filed, set and finished by the six people who sit at this bench, and it is made to wear in, not wear out." |
| 2 | `front-who` | who the bench is for (people-story opening) | 100 px ground above; **offset pair** (`tok(c)` pair): P1 (hands filing a ring shank on a bench peg) at x 16.3 % width 40 vw, P2 (finished band in an open palm) at x 57.6 % width 40 vw, gap 20 px, both 0.79 : 1, radius 0. Under the left photo (aligned to its left edge, max-width 500 px, padding-top 40 px): label "Who the bench is for" 1.25rem Instrument Sans 400 ink, then two paragraphs Manrope 0.9375rem/1.75. `sp-stagger` on the pair row, each figure `sp-reveal sp-reveal--up`. Mobile: P1 full width (16 px gutters), P2 indented 20 % from the left, text under. | 2 paragraphs ≈ 110 words: people who want one ring for twenty years; couples who want two bands that do not match exactly; people bringing a family piece to be made into something they will actually wear. |
| 3 | `front-pieces` | ready pieces (WooCommerce) | **T4**: label "Pieces for every day" at x 34, 55 px above; 4 product tiles J1–J4 + 48 px arrow. With WooCommerce: Product Collection (4 featured, same markup); without: static images linking to /pieces. `sp-stagger` + tiles `sp-reveal--up`. Section padding 128 / 125 px. | names, materials, prices (§8) + one 30-word line under the row: "Every piece is made at the bench in small runs and can be sized for you at no cost within 30 days." |
| 4 | `front-commissions` | three stories (people-story) | **T3** strip with S1, S2, S3; label "Commissions" x 34; wrapper `sp-reveal--left`. Section padding 128 / 125 px. | 3 × (title + 22 words) |
| 5 | `front-drawn` | how a commission is drawn | 12-col grid, 34 px sides: C1 (pencil ring drawing beside a carved wax, 4 : 5) at columns 1–5; columns 7–11: label "How a commission is drawn" 1.25rem, then **4 prose paragraphs** with a 1rem Instrument Sans 500 lead-in in ink inside the paragraph (run-in, not a heading grid, no numbers, no icons): Bench talk → Drawing and quote → Wax and fitting → Making and finishing (§8 times), then text link "Book a bench talk →" in accent. | ≈ 150 words |
| 6 | `front-bench-band` | full-bleed mood + the one big line | Full-bleed Cover (no frame) height 78 svh, B1 (the bench at dusk: peg, files, a lamp, empty stool), `sp-parallax` `--sp-par: 10%` (mobile 6 %); overlay `rgba(42,36,51,.25)`; bottom-left at x 34, bottom 60 px: **"Worn in, not worn out."** Instrument Sans 400 **4.25rem/1.05** (xx-large, the theme's max), `#ECE8EE`; under it one line 0.9375rem `#ECE8EE`. Text is in the Cover's inner container (never inside the moving layer). Mobile: 64 svh, line 2.5rem. | 5 + 18 words |
| 7 | `front-people` | the people who finish the work | **Mirrored offset pair**: R1 (goldsmith at the bench, upper body crop, face turned away into shadow) and R2 (setter's hand with a loupe and a claw setting) at x 2.4 % and x 43.6 %, 40 vw each, 0.79 : 1, gap 20 px — the empty 16 % gutter is now on the **right**. Under the pair: a two-column list of the **6 named people** (name Instrument Sans 500 1rem ink + role 0.8125rem muted, one per line, 3 + 3), and one paragraph left. `sp-stagger` + `sp-reveal--up` on the figures. Link "Meet the bench →". | ≈ 70 words + 6 names |
| 8 | `front-prices` | prices (no motion) | Pale band `#E9E7EB` full width, padding 96 px; label "Prices" left; table of **7 rows** (§8): service left (Manrope 0.9375rem), note middle (0.8125rem muted), price right **nowrap, text-align right, min-width 9rem, tabular-nums**; rows separated by 1 px `#CFCBD3` (the only rules on the site). Table `width:100%` of the content (1372 px at 1440). Under it: "Stones are quoted separately at the drawing stage. A 40 % deposit starts the work." | 7 rows + 22 words |
| 9 | `front-visit` | visit / hours | V1 (the shop's front room: a narrow counter, one lamp, a linen tray, low-key) 1.48 : 1 at columns 6–12 (right, flush to the 34 px margin); left columns 1–4: label "Visit", address, hours (§8), "Bench talks by appointment, 45 minutes, free.", link "Book a bench talk →". `sp-reveal--up` on the photo only. | ≈ 60 words |
| 10 | footer | — | Ink `#2A2433` ground, 34 px sides, padding 96 / 48: left the TSUYA wordmark tracked in brass light `#C9A56B`, the address and hours in `#ECE8EE` 0.8125rem; middle and right two link lists (Pieces, Commissions, Prices, Repairs & Care, Sizing / The Bench, Journal, About, Visit, Contact); bottom row small print 0.75rem `#A8A1AF`: © Tsuya Jewellers 2011–2026, Shipping & Returns, Privacy, Terms; language switcher. | — |

English home ≥ 250 words (≈ 560 planned) with narrative paragraphs in blocks 1, 2, 5 and 7 (≥ 3). CJK home ≥ 500 characters.
Home image slots: H1, P1, P2, J1, J2, J3, J4, S1, S2, S3, C1, B1, R1, R2, V1 = **15** (≥ 8). No photo repeats on the home page.

### Comparison with recent themes (block order must not repeat)
| # | Kairo Supply | Sekisan Partners | Shisei Clinic | Awa Taproom | **Tsuya** |
|---|---|---|---|---|---|
| 1 | hero worker, parallax | full-bleed hero | arch KV | framed window, wordmark crossing frame | **framed photo + flat accent caption strip, hidden header** |
| 2 | pinned statement | news panel over photo | concept | room full-bleed | **offset photo pair with 16 % gutter** |
| 3 | two doors cards | index rows 01–0N | concerns | made-here lead + 3-photo strip | **3 : 4 flat product tiles + long arrow** |
| 4 | who it is for band | estimate | care panels | pouring cards | **offset 1.48 : 1 strip sliding from the right** |
| 5 | account prose rows | handover 3 cards | first visit | pours & prices | **drawing photo + 4 run-in prose paragraphs** |
| 6 | counter pair | fees | stories | hold a seat | **full-bleed parallax band with the one 4.25rem line** |
| 7 | rates list | cases band | clinicians | tanks strip | **mirrored pair + 6 named people list** |
| 8 | full-bleed | people | fees | visit band | **prices on a pale band** |
| 9 | 3 stories | request block | visit | footer | **visit: photo right, facts left** |
| 10 | apply card | footer | footer | — | footer (ink) |
Why not alike: no cards anywhere (Kairo/Sekisan/Awa all use cards); the only strip is the off-axis 16 %-gutter strip with a peeking item, not Awa's 3-photo strip on a dark ground; Awa's frame sits on a photo ground with a wordmark crossing it — ours sits on a flat pale ground with the type entirely **below** the photo in a strip and the header hidden; no arches (Shisei), no numbered index rows (Sekisan), no pinned stage (Kairo). The page ground is a pale grey-violet, not white/umber/navy.

---

## 4. Inner pages (10 + WooCommerce templates)
Every inner page: T2 header (visible), T1 short head (§1), section padding 128 / 125 px desktop, 72 px mobile, 34 px side margins (16 px mobile), radius 0.
| Page | Slug | Head photo | Content (binding) |
|---|---|---|---|
| Pieces | `/pieces` (WooCommerce shop) | P2 | T4 tile grid, all **6** products, 4 per row desktop / 2 mobile, 6 px gaps; filter by type as plain text links (Rings · Chains · Studs · Pendants); "Free sizing within 30 days" line. |
| Product (single) | WooCommerce | product photo | photo left 7 cols on a flat tile, right: name 1.75rem, material, price, size select, add to cart (ink button `#2A2433`, `#ECE8EE` text, radius 0); below: "Made at the bench" 60 words, care notes; related = 4 T4 tiles. |
| Commissions | `/commissions` | C2 | 4 stages as long prose (≈ 320 words) beside C1 (sticky, desktop); times and deposit (§8); T3 strip of S1–S3 "drawn here"; CTA "Book a bench talk →". |
| Prices | `/prices` | V1 | full price table (7 rows, same as home), then T4-style 4 tiles linking to Bands / Signets / Setting / Repairs sections; each section 50 words. |
| Repairs & Care | `/repairs-care` | P1 | 3 T4 tiles (P2 resizing, J6 re-polish, R2 claw re-tipping) with times and prices from §8; care advice 180 words; "We repair pieces we did not make, gold and silver only." |
| The Bench | `/the-bench` | B1 | intro 120 words; **T3 strip** of the people: R1, R2, C2 photos with name captions (Ines Marlow, Kwame Asante, Ravi Menon); then all **6** people as text rows (name, role, since, 40-word bio) on the pale band — no portrait grid. |
| Journal | `/journal` (posts) | H1 | T3 strip of the 3 stories (S1–S3) at the top, then a plain list of all posts (date, title, 25-word excerpt). Posts: the 3 stories (§8), each with its S photo as featured image and ≈ 300 words. |
| About | `/about` | B1 | since 2011, recycled gold and silver, why small runs, 280 words; T3 strip H1, C1, P2 ("the bench, the drawing, the hand"). |
| Sizing | `/sizing` | J6 | how to measure (3 paragraphs), ring size table US / EU / inner diameter mm (8 rows) — stacked cards on mobile; free sizing within 30 days. |
| Visit & Contact | `/visit` | V1 | address, hours, "Bench talks by appointment, 45 min, free", directions text (no live map), contact form (name, email, preferred day, what you have in mind) — no reveal on the form. |
| Shipping & Returns, Privacy, Terms | legal | none (text head only) | plain text, 720 px column, no motion. |
| Cart / Checkout / Account | WooCommerce | none | theme colours, ink buttons, 0 radius; checkout must complete in local test. |

Page count reachable from the menus ≥ 9 (auto-gates).

---

## 5. Colour (reference relationships kept; values from `tok(a)`)
| Role | Reference | **Tsuya** | Change and why | Share (page / first screen) |
|---|---|---|---|---|
| Ground | `#DEDEDE` | **`#DFDDE2`** | same lightness (L* ≈ 88.5 → 88.6, within ±5 %), hue moved 2 % toward violet so the ground belongs to the row's purple-black family | ≈ 75 % / ≈ 18 % (strip + frame) |
| Photo field | `#C9C9C9`–`#D0D0D0` greys | low-key grey-violet `#3A3442`–`#5A5263` inside photos | row photo_direction = low-key; the photo is darker than the reference but still colourless | ≈ 15 % / ≈ 75 % |
| Tile ground | `#D0D0D0` | product photos on `#4A4352` seamless (photo backdrop), page ground around | low-key product shots; tiles stay flat, 6 px gaps | ≈ 4 % |
| Text | `#2E2E2E` | **`#2A2433`** (row hex) | same lightness as the reference text (11.1 : 1 on ground), purple-black instead of neutral | — |
| Muted text | — | `#5E5866` | captions, prices in tiles (5.1 : 1) | — |
| Accent (type only) | `#DA4803` vermilion | **`#785A28`** brass (on light), **`#C9A56B`** brass light (on ink/photo) | vermilion reads as a sale tag on jewellery; brass ties the only colour to the gold in every photo. Kept: one warm accent, type and the monogram only, < 1 % of the area. `#785A28` on `#DFDDE2` ≥ 4.5 : 1 | < 1 % / ≈ 0.5 % |
| Pale band | — (ground only) | `#E9E7EB` | ground +4 % lightness, prices band only | ≈ 5 % |
| Footer / band | — | `#2A2433` ink | row hex, footer and the B1 overlay tint | ≈ 6 % |
| Rule | none | `#CFCBD3` 1 px | prices table rows only | — |
- Not beige, not white: the ground is the reference pale grey with a violet cast.
- First-screen saturated share: reference ≈ 0.5 % (`tok(a)`); ours target ≤ 3 %, gate 15 %.
- No gradients, no shadows, radius 0 everywhere (`tok(d)`).

## 6. Type (font_direction **sans**)
- Latin headings: **Instrument Sans** (400 / 500, variable), Latin body: **Manrope** (400 / 500 / 600). No serif anywhere (the reference's serif titles become Instrument Sans 400 at the same small sizes).
- CJK: zh-TW **Noto Sans TC**, ja **Noto Sans JP** (gothic sans, no ming serif). Stacks in theme.json:
  - heading: `"Instrument Sans", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`
  - body: `"Manrope", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`
  - `:lang(zh-TW)` puts Noto Sans TC first, `:lang(ja)` Noto Sans JP first → copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it.
- All faces loaded through theme.json `fontFamilies` + `fontFace` (woff2 in `assets/fonts/`, zh-TW and ja subsets, using the Hokuto/Hada subset method), so the editor and the front show the same fonts (`check-editor-fonts.mjs`).
- Sizes (theme.json presets; reference is a 10 px root, converted, `tok(b)`): small **0.8125rem**, base **0.9375rem** (body), medium **1.25rem** (section labels, hero slogan; ref 14–16 px), large **1.75rem**, x-large **2.5rem** (inner page titles), xx-large **4.25rem** (max; only the B1 band line on home and the 404 line). Nav and captions 0.75rem, letter-spacing 0.04em (`tok(b)` 0.4 px), weight 400–500. Body line-height 1.75 (Latin), 1.85 (CJK); headings 1.2; CJK sizes ≈ 0.75× the Latin display sizes, never under 0.8125rem; fr/de `hyphens: auto`.
- Hierarchy by position, not size (reference rule): nothing above 1.375rem on the first screen.

## 7. Responsive (binding)
- 390 px first screen: header (56 px) → photo 4 : 5 → slogan → paragraph, all in normal flow. **No vertical text, no absolutely positioned labels over text**, no monogram.
- Prices table at ≥ 782 px: full content width (100 %), price column `white-space: nowrap; text-align: right; min-width: 9rem`, never cut at 800 or 1280. Below 782 px every table (prices, sizing) becomes stacked rows: service on the first line, note under it, price right-aligned on the same line as the service, nowrap.
- Strip and tiles never cause page-level horizontal overflow: the strip scrolls inside its own `overflow-x:auto` container; `html, body { overflow-x: clip }`.
- Offset pair and mirrored pair: below 782 px stacked, second photo indented 20 %.

## 8. Fixed numbers (identical on home, inner pages and in all five languages)
- **Place**: 22 Wexley Street, Port Ellery. Bench opened **2011** by Ines Marlow.
- **Hours**: Tue–Sat 11:00–19:00, Thu until 20:00; Sun and Mon closed (bench days). Bench talks by appointment, **45 min, free**.
- **Commission process (4 stages)**: 1 Bench talk (45 min, free) → 2 Drawing and quote within **10 days** → 3 Wax and fitting (one fitting, in the shop) → 4 Making and finishing, **6–8 weeks** from the approved drawing. **40 %** deposit on approval of the drawing.
- **Prices (7 rows)**: Bench talk — free · Plain band, recycled 18k gold, commission — from **$980** · Hand-engraved signet ring — from **$1,450** · Set-stone ring commission (setting; stone priced separately) — from **$1,900** · Resizing, gold, up to two sizes — **$85**, 7 days · Re-polish and re-tip claws — **$120**, 10–14 days · Engraving inside a band, up to 20 characters — **$60**.
- **Products (6, WooCommerce)**: Tuesday Band 2 mm, 18k recycled yellow gold **$640** (J1) · Linen Signet, 9k gold, oval **$720** (J2) · Lamp Studs, 18k gold, pair **$380** (J3) · Bench Chain, 9k gold, 45 cm **$560** (J4) · Pebble Pendant, 18k gold, 42 cm chain **$690** (J5) · Shank Ring, silver with 18k cap **$290** (J6). Free sizing within **30 days**.
- **People (6)**: Ines Marlow — founder, goldsmith (since 2011) · Kwame Asante — stone setter (since 2014) · Ravi Menon — drawings and commissions (since 2016) · Lea Brandt — engraver (since 2017) · Sofia Duarte — polishing and repairs (since 2019) · Hana Okada — the shop and fittings (since 2021).
- **Stories (3)**: S1 "Two bands from one bracelet" (a grandmother's bracelet melted into two wedding bands, drawn by Ravi, made by Ines) · S2 "A signet for a left-handed baker" (flat-faced signet, engraved by Lea, worn on the right hand) · S3 "The pendant that came back" (a worn heirloom pendant re-made with its original stone, re-set by Kwame).
- No guarantees, awards, media, statistics or real brands.

## 9. Photos (18, Grok, one at a time, Read each one)
**Imagery: photo** (stage-a IMAGERY = photo; the reference is photographic). Low-key follows the row's photo_direction (this replaces the default high-key line in common.md for this theme).
STYLE (identical for every image):
`Low-key studio photograph, soft grey-violet seamless backdrop, a single warm lamp from the upper left, deep soft shadows, matte brushed 18k gold and recycled silver, natural undyed linen, dark oiled wood and matte grey stone, a small subject in a large quiet empty field, muted colour, fine film grain, shallow depth of field, calm and still; at most one hand or one cropped figure, faces turned away or out of frame; modern international setting; no text, no logo, no brand marks, no hallmarks, no watermark`
Hands across the set vary in skin tone (light, medium, deep). Every file ≤ 300 KB, ≤ 2000 px, webp. No cutouts.
| ID | Subject / composition | Ratio | Used on | Home |
|---|---|---|---|---|
| H1 | one plain gold band on a small linen tray on a dark wooden bench, the bench lamp head at the top-left edge, ring at 62 % from the left, very large dark field | 16 : 9 (2000×1125) | Home 1 hero (KV #1, #5) · About strip · Journal head | ✔ |
| P1 | a hand filing the inside of a ring shank on a wooden bench peg, file and gold dust, close crop | 4 : 5 | Home 2 pair left · Repairs & Care head | ✔ |
| P2 | a finished gold band lying in an open palm, palm up, wrist only | 4 : 5 | Home 2 pair right · About strip · Repairs tile · Pieces head | ✔ |
| J1 | Tuesday Band standing on its edge on a small matte grey stone block, centred, object ≈ 40 % of width | 3 : 4 | Home 3 tile · product | ✔ |
| J2 | oval gold signet lying on folded linen, centred | 3 : 4 | Home 3 tile · product | ✔ |
| J3 | pair of small gold studs on a dark slate, centred | 3 : 4 | Home 3 tile · product | ✔ |
| J4 | fine gold chain in a loose loop on linen, centred | 3 : 4 | Home 3 tile · product | ✔ |
| J5 | pebble-shaped gold pendant hanging from a thin chain against the backdrop | 3 : 4 | product (Pieces grid) | |
| J6 | silver ring with a small gold cap, on a stone block | 3 : 4 | product · Repairs tile · Sizing head | |
| S1 | two slightly different gold wedding bands side by side on a grey stone plinth, small in a wide field | 1.48 : 1 | Home 4 strip · Commissions strip · Journal strip | ✔ |
| S2 | flat-faced signet ring on a dark stone block, a little flour dust on the stone | 1.48 : 1 | Home 4 strip · Journal strip · Commissions strip | ✔ |
| S3 | a gold pendant with one pale stone resting on a linen square, an old worn chain coiled beside it | 1.48 : 1 | Home 4 strip · Journal strip · Commissions strip | ✔ |
| C1 | pencil drawing of a ring on paper beside a carved green wax model and calipers, top-down at 30° | 4 : 5 | Home 5 · Commissions body · About strip | ✔ |
| C2 | hands carving a ring wax with a small blade under the lamp | 4 : 3 | Commissions head · The Bench strip | |
| B1 | the bench at dusk: wooden bench peg, rows of files, lamp on, empty stool, wide | 21 : 9 (2000×857) | Home 6 parallax band · About head · The Bench head | ✔ |
| R1 | goldsmith at the bench seen from behind the shoulder, upper body crop, face turned away into shadow, lamp light on the hands | 4 : 5 | Home 7 pair · The Bench strip | ✔ |
| R2 | a setter's hand with a loupe pushing a claw over a small stone, extreme close-up | 4 : 5 | Home 7 pair · The Bench strip · Repairs tile | ✔ |
| V1 | the shop's front room: a narrow dark counter, one lamp, a linen tray with two rings, an empty chair, wide | 1.48 : 1 | Home 9 · Visit head · Prices head | ✔ |
Home uses 15 (✔). No image appears twice on one page (each inner page's head photo is never repeated in its own strip/tiles).

## 10. Scroll motion (sp-scroll; max 3 kinds per page; hero no reveal)
| Effect | sp-* class | Block | Source and timing | Values |
|---|---|---|---|---|
| Strip slides in from the right | `sp-reveal sp-reveal--left` on the strip **wrapper** | Home 4, Commissions, The Bench, Journal, About strips | maisontakuya journal strip: ScrollTrigger enter, 1 s, `cubic-bezier(0.65,0.05,0.36,1)`, ~50 vw (`tok(g)`) — distance capped to 30 px by the spec | `--sp-dur:1s; --sp-ease:cubic-bezier(.65,.05,.36,1); --sp-dist:30px` |
| Pair / tiles fade up in sequence | `sp-stagger` parent + `sp-reveal sp-reveal--up` on each figure | Home 2, 3, 7, 9; Pieces grid; Repairs tiles | reference pair/tiles appear with the page; ease from Lenis/GSAP `cubic-bezier(.4,0,.22,1)` (`tok(g)`) | `--sp-dur:.8s; --sp-ease:cubic-bezier(.4,0,.22,1); --sp-dist:24px` |
| Parallax (required) | `sp-parallax` | **Home 1 hero frame** (H1 = `figure>img` inside the frame group, overflow clip); **Home 6 B1** Cover background; inner page heads (head photo) | not on the reference (no parallax, `tok(g)`); it carries the reference's slow, still feeling into the "drift" of the lamp-lit photo | hero `--sp-par:8%` (mobile 5 %); B1 `--sp-par:10%` (mobile 6 %); inner heads 6 % |
- Header slide-in (T2) is theme CSS (scroll-driven), not sp-scroll; it does not count toward the three.
- Hover: images and links `opacity .6s ease` to 0.75 (`tok(g)`).
- No reveal on: hero, prices table, forms, legal text, strip children.
- Foreground text never inside a moving layer; `?sp-static`, reduced motion and the editor show the final state; check-parallax: shift ≥ 6 px on hero and B1, 0 in reduced motion.

## 11. Similarity table (target 80 %)
| Dimension | Reference (token) | Tsuya |
|---|---|---|
| Ground / text / accent | `#DEDEDE` / `#2E2E2E` / `#DA4803` (a) | `#DFDDE2` / `#2A2433` / `#785A28` (light-on-ink `#C9A56B`) |
| Accent share | < 1 %, type + logo only (a) | < 1 %, type + monogram + wordmark only |
| First-screen saturated share | ≈ 0.5 % (a) | ≤ 3 % (gate 15 %) |
| Body / nav size, tracking | 10–12 px, 0.04em, lh 150 % (b) | 0.75–0.9375rem, 0.04em on nav, lh 1.6–1.75 |
| Title size | 14–16 px serif, w 370 (b) | 1.25rem Instrument Sans 400 (labels, slogan) |
| Max size | 1.6rem (16 px) (b) | 4.25rem, used once on home (B1 band) — required by the theme rules |
| Side margin / header | 35 px / 60 px fixed (c) | 34 px (2.125rem) / 60 px sticky |
| Section padding | 100–139 px (c) | 128 / 125 px (mobile 72) |
| Hero photo share | 754 / 915 = 82 % (c) | 82 svh photo bottom, framed 34 / 60 px |
| Caption strip | 161 px, padding 43 / 34, 500 px paragraph right (c) | 18 svh (min 150), padding 43 / 34, 500 px paragraph right |
| Strip | gutter x 235 (16.3 %), 972×658 (1.48 : 1), gap 18 (c) | gutter 16.3 vw, 67.5 vw × 1.48 : 1, gap 18 px |
| Pair | 2 × 575 at x 234 / 829, gap 20, 0.79 : 1, 100 px ground above (c, e) | 2 × 40 vw at 16.3 % / 57.6 %, gap 20 px, 0.79 : 1, 100 px above |
| Tiles | 288×384 (3 : 4), gap 6, 48 px arrow (c, f) | 3 : 4, gap 6 px, 48 px 1 px arrow |
| Radius / borders / shadow | 0 / none / none (d) | 0 / 1 px rule in prices table only / none |
| Image type | low-key/grey studio photos, single object or model crop (e) | low-key studio photos, single object or one hand/crop |
| Header | split, hidden on arrival, −20 px fade in ~0.5 s (f, g) | split, hidden on arrival (≥ 782 px), −20 px fade in over 55–75 vh |
| Strip motion | from right, 1 s `cubic-bezier(.65,.05,.36,1)` (g) | `sp-reveal--left` 1 s same curve (30 px cap) |
| Hover | opacity .6s ease (g) | opacity .6s ease |
| Parallax | none (g) | hero + B1 band (required by the theme rules) |

## 12. theme-meta suggestion
type `store`; colors.tags `grey`, `muted`, `gold`, `light`; style `minimal`, `photographic`, `quiet`, `gallery`.

## 13. Home acceptance checklist (stage-1 review compares against this)
1. First screen 1440×900: framed H1 photo from y 60 to ≈ 82 % height, 34 px side frame; caption strip below with brass slogan left (≤ 1.375rem) and a 500 px brass paragraph right; outlined monogram top-right; no header visible at scroll 0 in `?sp-motion` (visible in `?sp-static` is fine).
2. After one screen of scroll the split header is visible: nav left, tracked TSUYA brass centred, search / Account / Cart (0) right.
3. Block 2 offset pair starts at 16 % with an empty left gutter, 100 px ground above.
4. Block 3: 4 flat 3 : 4 tiles, 6 px gaps, a thin 48 px arrow, prices under tiles match §8.
5. Block 4: strip with 16 % left gutter, 1.48 : 1 photos, the second photo cut by the right edge; slides from the right in `?sp-motion`.
6. Block 5: four run-in prose paragraphs (no numbered grid), times match §8.
7. Block 6: full-bleed B1 with parallax and the 4.25rem line bottom-left.
8. Block 7: mirrored pair + 6 named people (names match §8).
9. Block 8: prices table 7 rows, full width at ≥ 782 px, prices nowrap right; stacked at 390.
10. Block 9: V1 right, address + hours left, matching §8; ink footer.
11. 15 home image slots, no repeats, all low-key with one STYLE, no text/logos in photos.
12. Colours as §5; first-screen saturated share ≤ 15 % (target ≤ 3 %); radius 0; no shadows.
13. Fonts: Instrument Sans / Manrope + Noto Sans TC/JP via theme.json fontFace; editor = front.
14. 390 px: no horizontal overflow, no overlapping text, no vertical or absolute labels on the first screen.
15. `check-parallax.mjs`: hero and B1 shift ≥ 6 px; ≥ 3 reveals hidden before entry; nothing transparent at the bottom; reduced motion static.
16. English home ≥ 250 words with ≥ 3 narrative paragraphs; no claims, awards or real brands.
