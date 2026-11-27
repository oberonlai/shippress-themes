# Design spec: Hakuji Laboratory (hakuji-laboratory)

Plan row b41-6 · type **landing** (category business-services) · archetype asymmetric-masonry · page_structure landing-longform · nav **split** · font_direction **serif** · IMAGERY **photo** (high-key documentary).
Main reference: **SHOFU INC.**, https://www.shofu.co.jp/ (S5-Style, medical / dental). Secondary: none (one strong reference; the plan row names it).
Token source: `brand/reference-tokens.md`, cited below as `tok(a)` … `tok(g)`. Screens: `brand/ref/shofu-first.png` (1440 × 900), `brand/ref/shofu-full.png` (top 3600 px), `brand/ref/scroll-shofu-1500.png`.
Photos, copy, wordmark and marks are all our own. We take SHOFU's structure, key-visual concept, colour relationships and measurements. We never take its pictures, words or logo.

Class prefix for theme CSS: `hk-`. Effects use only the sp-scroll classes, copied unchanged from `pipeline/assets/sp-scroll/`.
Landing track (`rules.landing_track`): home is one long conversion page. The header holds in-page anchors plus **one repeated CTA, "Open a lab account"** (→ `/contact/`). Inner pages are reached from the footer and from in-section links.

---

## 1. Signature techniques (all three at full strength on the home page)

### T1. Paired collage window with a tinted corner slab (SHOFU first screen; `ref/shofu-first.png`)
- **What SHOFU does.**
  - Two documentary photographs abut with a 16 px gap: bench work on a dental model (left) and a chairside smile (right).
  - The left photo is flush to the viewport's left edge with square corners, 42 % of the pair. The right photo is 58 % with **one large top-right radius of 52 px**. Both are 628 px tall, starting 38 px under the 88 px header. The pair ends 64 px before the right edge.
  - Under the lower right sits a cyan gradient **slab** with a **40 px bottom-left radius**. It begins about 84 px above the photos' bottom edge and shows 116 px below it. It bleeds to the right edge.
  - A four-line white tagline sits at the photo's lower right, its last line dropping onto the slab. A tiny vertical "SCROLL" label with a 1 px line sits at the slab's right edge.
  - The whole pair cross-fades to the next pair (Swiper fade, 1000 ms, 6000 ms delay) `tok(d)`, `tok(e)`, `tok(g)`.
- **Ours, home §1 (hero).** Composition collage / beside-photo / stats-row (see §3). The pair sits in the right ~60 % of the viewport. The headline column sits beside it on the left. The pair keeps:
  - its 42 / 58 split, 16 px gap, square left corners and the 0 52px 0 0 radius;
  - its 64 px right margin;
  - the grey-violet slab (radius 0 0 0 40px, bleeding right);
  - the white sub-tagline crossing the photo/slab seam;
  - the SCROLL micro label;
  - the pair cross-fade.
- **Must not be diluted.**
  - Exactly two photos side by side at 42 / 58 with a 16 px gap. There is no third photo and no grid.
  - The one large radius sits only on the right photo's top-right corner.
  - The slab is solid grey-violet (#6E5E68 → #7D6B77 gradient), not a pale tint, and is clearly visible below the photos (≥ 110 px).
  - The sub-tagline overlaps the seam between photo and slab.
  - The cross-fade swaps both photos together.

### T2. Rounded sheets lying over photo bands (SHOFU news sheet over the message band, showroom sheet; `ref/shofu-full.png` y 860–1480)
- **What SHOFU does.**
  - The white news sheet has radius **0 0 25px 25px**. It lies over a full-bleed photo band (z-index overlap of about 40 px), so the photo shows past its rounded bottom corners.
  - Below the band, the next sheet (the showroom card, a pale grey ground) has a **40 px top radius**. It overlaps the bottom of the photo band. The seams therefore show photo in the corners, top and bottom.
  - There are no shadows and no borders on the sheets `tok(d)`.
- **Ours, home §2 → §3 → §4.**
  - The white **Notices sheet** (§2) has radius 0 0 25px 25px and overlaps the **From the bench** photo band (§3) by 48 px.
  - The band is full-bleed and 560 px tall, with parallax.
  - The **Shade room sheet** (§4) has a pale wash `#F3EFF2`, radius 40px 40px 0 0, and overlaps the band's bottom by 48 px.
  - The same sheet logic is used again at §8 → §9 → §10 (team sheet over the pick-up band, account sheet).
- **Must not be diluted.**
  - The radii are real: 25 px bottom and 40 px top.
  - The overlap is real: the photo visibly fills the four corner gaps.
  - No drop shadows. No inset cards instead of full-width sheets.

### T3. Title-over-photo cards with a dot link on a tinted band (SHOFU "dental professionals" band; `ref/shofu-full.png` y 2700–3330)
- **What SHOFU does.**
  - The band is in accent colour. A giant light Latin word (about 72 px, low-contrast ghost) sits over a small label line.
  - Below it are 3-up cards, each a **1.45 : 1** photo with radius 10. The card title is set **at the top of the photo** (dark text on a pale photo area).
  - At the bottom of each card is an underlined "details" link ending in an **8 px accent dot**.
  - An outline pill button sits under the row.
- **Ours, home §5 "Case types".**
  - The band uses `#E9E3E7` (the second tint, so the band reads as SHOFU's coloured band while staying quiet).
  - The ghost word is **"case types"**: Libre Baskerville 400, `clamp(3.5rem, 2rem + 4.6vw, 5.5rem)`, colour #6E5E68 at 28 % opacity, centred.
  - Below it are a small label and one line of lead text.
  - Then 3 cards follow (1.45 : 1, radius 10). Each card has its title at the top of the photo: Libre Baskerville 1.25rem, #3B373A on a 0 → 72 % white top gradient for legibility. At the bottom of each card is "Accepted work" underlined with an 8 px #6E5E68 dot.
  - Under the row: an outline pill button "All accepted cases" → `/cases/`.
- **Must not be diluted.**
  - The title is on the photo's top edge, not below the card.
  - The dot is a real 8 px disc at the link's end.
  - The ghost word is large (≥ 3.5rem) and clearly lighter than the ink.
  - Exactly 3 cards in a row on desktop.

### Supporting (not counted)
- **Title lockup.** Latin accent word in Libre Baskerville 1.75rem #6E5E68, then a 1 px × 56 px #6E5E68 rule, then a small label in Literata 0.8125rem #6E5E68 (SHOFU "News —— label" `tok(f)`). Used for every section head on home and inner pages.
- **Outline pill with a line arrow.** 1 px #3B373A outline, radius 999, height 44 px, min-width 200 px. A thin 1 px arrow line starts inside the pill and runs **16 px past its right edge** (SHOFU "view list" button style, `tok(f)`).

### Continuation on inner pages (≥ 4; here 7)
| Page | T1 pair + slab | T2 sheets over photo band | T3 title-over-photo cards + dot |
|---|---|---|---|
| `/about/` | page head pair (img-15 / img-11), slab with page sub-tagline | Story sheet (bottom radius 25) over img-05 band with parallax; people sheet (top radius 40) | – |
| `/cases/` | page head pair (img-15 / img-10) | – | **6 cards**, 3 + 3, one per case type (img-07, 08, 09, 14, 17, 03) |
| `/upload-guide/` | page head pair (img-10 / img-17) | Formats sheet over img-14 band with parallax | 3 cards at the foot: Cases / Fees / Open an account |
| `/fees/` | slab only (no photos; the table is the content) | Fee table on a white sheet with radius 0 0 25px 25px over the img-13 band | – |
| `/contact/` | page head pair (img-15 / img-12) | Form sheet with top radius 40 on #F3EFF2 | – |
| `/newsletter/` | slab only | Sign-up sheet with top radius 40 over the img-16 band | – |
| News archive / category / tag | – | – | post cards in the same T3 style (title on photo top, dot link) |

Inner page head (shared): the H1 sits beside a reduced pair, height 360 px, at 42 / 58 with a 16 px gap and radius 0 52px 0 0. The slab is 72 px visible, radius 0 0 0 40px. There is no cross-fade on inner pages (static pair).

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
SHOFU's first screen is two documentary photographs side by side.
- On the left is a close-up of hands working on a dental model at the bench.
- On the right is a chairside scene: a clinician, a patient and a smiling older man.

They stand over a cyan slab, with a four-line tagline that roughly reads "chew, laugh, live — we support it".
**Story:** the precise craft at the bench exists for the smile in the chair.
**Signature motion:** the whole pair dissolves into another pair (fade 1000 ms, 6000 ms delay, loop). A small vertical SCROLL label with a 1 px line invites the scroll.

### (2) Our transposed scene (same composition idea, same motion, same image type: high-key documentary photo)
- **Industry:** a dental laboratory making crowns and bridges for local practices.
- **Pair A.**
  - Left: a technician seating a ceramic crown on a stone model, beside a fan of shade tabs under a bench lamp (img-01).
  - Right: the finished crown at the practice. A dentist holds a hand mirror for a smiling patient who is checking the new crown (img-02).
- **Pair B.**
  - Left: a three-unit bridge on an articulator at the bench (img-03).
  - Right: a dentist holds a shade tab beside a smiling patient's teeth (img-04).
- **Story:** "Made at the bench. Ready for the chair." Every case leaves the bench to meet a person in a chair.
- **Motion:** CSS-only cross-fade of the whole pair A ↔ B. Fade 1000 ms `ease` (Swiper default). Hold 6000 ms. Cycle 14 s, infinite. Under `prefers-reduced-motion`, `?sp-static` and in the editor, pair A shows statically.

### (3) KV checklist (every item implemented and visible in the first screen at 1440 × 900 and 1280 × 800)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Left bench-work photo, square corners | Technician seating a ceramic crown beside shade tabs under a bench lamp | Left photo of the pair, 42 % of pair width, square corners, 560 px tall | Cross-fades with its partner to img-03 | img-01 (pair B: img-03) |
| 2 | Right chairside photo with one large top-right radius | Practice hand-over: dentist and smiling patient checking the new crown in a hand mirror | Right photo, 58 %, `border-radius: 0 52px 0 0` | Cross-fades with partner to img-04 | img-02 (pair B: img-04) |
| 3 | Cyan gradient slab, rounded bottom-left, under the lower right | Grey-violet slab `linear-gradient(100deg, #6E5E68, #7D6B77)`, radius 0 0 0 40px, bleeding to the right viewport edge | From x = right photo's left edge + 22 % to the viewport right edge; top = photo bottom − 84 px; height 200 px (116 px visible below) | Static | – |
| 4 | Four-line white tagline at the photo's lower right, falling onto the slab | (a) H1 "Made at the bench. / Ready for the chair." as 4 lines in the left column (beside-photo); (b) 3-line white sub-tagline "Scanned in. / Shade matched. / Back in five days." Libre Baskerville italic 1.75rem, white, lh 1.55, crossing the photo/slab seam | (a) left column; (b) right photo's lower right, last line on the slab | Fade-in on load only (opacity 0 → 1, 1000 ms, 300 ms delay; CSS; not sp-reveal) | – |
| 5 | Vertical "SCROLL" label with a 1 px line | "Scroll" micro label (Literata 0.6875rem, .16em, white, vertical-rl) + 1 px × 56 px white line, written in block markup | Inside the slab, 24 px from the viewport right edge; desktop only (≥ 1024 px) | Line height grows 0 → 56 px, 1600 ms, loop (CSS) | – |
| 6 | Hero foot: the news sheet begins under the hero | **Stats row**: 4 figures on white below the headline column, ending at the slab | Below the pair's bottom edge, left of the slab | None (static numbers) | – |

All four hero images are in the image list (§13).

---

## 3. First-screen composition

**hero_composition: collage · hero_text: beside-photo · hero_footer: stats-row · hero_fingerprint: collage/beside-photo/stats-row**

- **collage** = T1's two-photo window (42 / 58, 16 px gap, one 52 px corner, slab). It is a collage of exactly two photos plus the slab, not a masonry grid and not full-bleed.
- **beside-photo** = the H1, lead and buttons sit in their own left column, on white, **beside** the pair. No headline is overlaid on a photo. Only the short sub-tagline sits on the photo seam, like SHOFU's tagline.
- **stats-row** = a row of four figures under the headline column and beneath the pair, on white, left of the slab.

Never full-bleed with overlaid text. Never a different composition.

### Desktop 1440 × 900 (measurements at 1440; scale fluidly 1024–1440)
1. **Header (88 px, white, `tok(c)`), nav = split.**
   - Left group of anchors: "Cases", "Upload", "Fees".
   - Centre: the wordmark "Hakuji Laboratory". Libre Baskerville 400 1.375rem, .02em, #3B373A, with a small 10 px #6E5E68 disc before it (our mark: a porcelain dot).
   - Right group: anchors "Lab", "Notices", then the **CTA "Open a lab account"**: filled #6E5E68, white, Literata 500 0.9375rem, height 48, padding 0 28px, radius 999. It sits 16 px from the right viewport edge (SHOFU's contact button).
   - Nav links: Literata 500 0.9375rem #3B373A, gap 32 px, hover underline #6E5E68.
   - This is the single top menu.
2. **Collage (top = header + 38 px = y 126).**
   - Pair box from x 600 to x 1376 (64 px right margin). Left photo 318 px wide (42 % of 776 − 8). Right photo 442 px wide. Both 560 px tall (≈ 62 % of 900, SHOFU 628 / 900 trimmed for the stats row).
   - `object-fit: cover`. img-01 focal point at the hands. img-02 focal point at the smile and mirror.
3. **Slab.**
   - x 760 → 1440, y 602 → 802. Radius 0 0 0 40px. z-index below the photos.
4. **Sub-tagline.**
   - Right edge 40 px inside the right photo. Baseline of the last line 24 px below the photo bottom, so it lies on the slab.
   - A soft scrim behind the photo part: `radial-gradient(at 85% 90%, rgba(59,55,58,.38), transparent 60%)` on the right photo only.
5. **Headline column** (x 64 → 552, top y 150).
   - Eyebrow: "Dental laboratory · crowns, bridges, implant work". Literata 600 0.8125rem, .14em uppercase, #6E5E68.
   - **H1**: Libre Baskerville 400, **4.5rem**, lh 1.12, −.01em, #3B373A. Four lines: "Made at the / bench. Ready / for the / chair." (natural wrap; max-width 488 px).
   - Lead: Literata 400 1.0625rem, lh 1.9, #3B373A, max 440 px, 2–3 lines. "We make crowns, bridges and implant restorations for practices within courier reach. Upload a scan in the morning and we will confirm the design before anything is milled."
   - Buttons, gap 16: primary "Open a lab account" (same as the header CTA; this is the one repeated CTA) + outline pill "How upload works" → `#upload` (with the line arrow).
6. **Stats row** (y 718 → 818, x 64 → 736).
   - 4 columns separated by 1 px #C9C1C6 vertical rules.
   - Figure: Libre Baskerville 400 2.25rem #3B373A. Caption: Literata 0.8125rem #6E5E68, lh 1.5.
   - The four figures:
     - **5** working days · single crown, scan to dispatch
     - **6** case types accepted
     - **2** courier pick-ups each weekday
     - **4** scan file formats
7. **Scroll label** inside the slab at x 1400, y 640 → 760.

First-screen saturated share: the slab (680 × 200 ≈ 10.5 % of 1440 × 900) plus the CTA (≈ 0.4 %). Its saturation is very low (#6E5E68 is S ≈ 8 %), so `check-first-screen.py` measures well under the **15 %** limit. The plan row ceiling is 30 %. Target ≈ 10 %.

### 1280 × 800
Same layout, scaled:
- pair from x 520, height 500;
- H1 4.25rem;
- stats row at y 660;
- the slab still visible ≥ 110 px below the photos.

### Tablet 782–1023
- Header: wordmark left, CTA right, anchors in the overlay menu.
- Pair full width (64 px side margins), height 440.
- The headline column moves **above** the pair. The stats row goes below the slab, 4 columns.

### Mobile 390 × 844
1. Header 64 px: wordmark left (1.125rem), CTA pill "Open an account" (0.8125rem, height 36) and a menu button right.
2. Headline block, 20 px side padding: eyebrow, H1 **2.75rem** (lh 1.12), lead 1rem, primary button full width, outline pill below.
3. Pair: full width minus 20 px left (still 42 / 58, gap 8 px), height 300, right radius 0 32px 0 0, cross-fade kept.
4. Slab: full width from x 40 %, 120 px tall under the pair (radius 0 0 0 28px). The sub-tagline is in **normal flow inside the slab** (not absolutely positioned, not over the photo), Libre Baskerville italic 1.25rem white.
5. Stats row: 2 × 2 grid with hairlines.

No vertical text (the Scroll label is `display: none` < 1024 px). No absolutely positioned labels over text. No horizontal scroll.

---

## 4. Home sections (landing long-form; anchors in brackets)

| § | Section (anchor) | Purpose | Layout | Image(s) | Copy |
|---|---|---|---|---|---|
| 1 | Hero `#top` | Key visual, promise, CTA | §3 | img-01, img-02, img-03, img-04 | H1 + 30-word lead + 4 stats |
| 2 | Notices `#notices` (T2 sheet, bottom radius 25) | Shows the lab is live; links to posts | White sheet. 2-column head: title lockup "Notices — From the lab" + outline pill "All notices" (25 % column); 4 ruled rows (75 %) of date / tag chip (1 px #C9C1C6, radius 999, 0.75rem) / title / thin arrow; 1 px #C9C1C6 rules (SHOFU news list). Padding 92 px top, 120 px bottom. | – | Short intro sentence + 4 row titles (3 are the posts, 1 is the holiday pick-up note linking to `/fees/`) |
| 3 | From the bench `#lab` (full-bleed band) | Narrative 1: who we are | Full-bleed 100vw × 560 photo, `sp-parallax`. Overlaid by #3B373A at 30 % plus a gradient to the right. Left: ghost Latin title "From the bench" (Libre Baskerville 400 3.5rem white, 85 % opacity) + small label. Right column (x 58 % → 92 %): narrative paragraph (≈ 70 words, white, Literata 1.0625rem lh 2.0) + white outline pill "Our lab" → `/about/`. | img-05 | P1 narrative |
| 4 | Shade room `#shade` (T2 sheet, top radius 40, #F3EFF2) | Narrative 2: shade appointments (SHOFU showroom) | Sheet. Text left 40 %: title lockup "Shade room — Visits by appointment", H2 1.75rem, paragraph ≈ 60 words, note line "For practices and their patients · €35 per visit", outline pill "Book a shade visit" → `/contact/`. Photo right 56 %, 3 : 2, radius **40px 0 0 0** (SHOFU rounded top-left showroom photo). | img-06 | P2 narrative |
| 5 | Case types `#cases` (T3 band, #E9E3E7) | Which cases we accept | Ghost word "case types" + label + 1-line lead; 3 title-over-photo cards (1.45 : 1, r 10, gap 24); below them a one-line ruled list "Also accepted: veneers · inlays and onlays · bridges up to six units"; outline pill "All accepted cases" → `/cases/`. | img-07, img-08, img-09 | 3 card titles + 2-line card notes |
| 6 | How a case is uploaded `#upload` (white) | Process | 12-column grid. Photo columns 1–5, 4 : 5, radius 0 52px 0 0 (echo of T1). Columns 7–12: title lockup "Upload — Four steps", intro paragraph ≈ 45 words, then **4 ruled steps** (index "01" in Libre Baskerville 1.5rem #6E5E68, title in Literata 600 1.125rem, 2-line text; 1 px rules, no boxes); then a formats line with chips "STL · PLY · OBJ · DCM" and outline pill "Upload guide" → `/upload-guide/`. | img-10 | P3 narrative + steps |
| 7 | Fees `#fees` (pale wash #F3EFF2) | Prices | Title lockup "Fees — Per unit, before tax"; short paragraph; **full-width price table** (8 rows, §11 rules); a note line on remakes and courier; outline pill "Full fee notes" → `/fees/`. | – | 8 fee rows |
| 8 | The people at the bench `#team` (T2 white sheet, bottom radius 25, over §9's band) | Named team | Left 45 %: group photo 4 : 3, radius 10. Right: title lockup "Lab — The people at the bench", intro ≈ 40 words, then a **2-column ruled list** of the 7 people (name in Libre Baskerville 1.125rem; role in Literata 0.875rem #6E5E68). Not a portrait grid. | img-11 | 7 names + roles |
| 9 | Pick-up and hours `#visit` (full-bleed band 480 px) | Logistics | Full-bleed photo band (no parallax; the §3 band holds parallax). Over it on the right, a white panel (radius 0 0 0 40px, echo of the slab) with: address, pick-up times, hours table (3 rows), phone, email. | img-12 | facts |
| 10 | Open an account `#account` (T2 sheet, top radius 40, white) | The single CTA, repeated | Left: photo 3 : 2, radius 0 52px 0 0. Right: H2 "Send us your first case." (Libre Baskerville 2.75rem), paragraph ≈ 40 words, primary button "Open a lab account" + text link "or email cases@hakuji-lab.example". Below the pair, a slab strip #6E5E68 (height 72, radius 0 0 0 40px, bleeding right) carrying "Accounts confirmed within one working day" in white Literata 0.9375rem. | img-13 | closing paragraph |
| – | Footer (#54474F) | Inner page links, newsletter slot | See §12 / §8. | – | – |

- **Home images:** 13 unique photo positions (img-01…img-13), no repeats (≥ 8 ✔).
- **Word count:** target ≥ 320 English words, with narrative paragraphs P1, P2, P3 plus the §8 and §10 paragraphs (≥ 3 paragraphs of ≥ 20 words ✔).

### Not the same as recent home pages
| Theme | Home order | Why ours differs |
|---|---|---|
| Sazanami Hotel | hero strip / stay pair / rooms / water parallax band / breakfast / around rows (dark) / booking steps / journal / letter | Our hero is a 2-photo collage with a slab and stats beside the headline, not a strip. Our band is framed by rounded sheets (T2), not a plain band. There is no dark rows section. |
| Yukiki Shoes | notice bar / split hero + timeline / tabs / … / shelf cards / parallax band / notes / fees / visit / letter | No notice bar, no timeline hero, no tabs. Our notices are a sheet *after* the hero overlapping a photo band. Our cards put titles on the photo top. |
| Shirogane College | audience row / hero + booking bar / notices / who for / sticky day / honeycomb / parallax band / tutors / … | No booking bar, no sticky chapters, no honeycomb. |
| Seimyaku Clinic | hero + veil / message / sticky stack / … / team / fees / visit / notes / letter | No veil, no sticky stack, no medallion nav. Our sheets overlap photo bands rather than stacking. Our nav is split with a filled CTA. |

---

## 5. Inner pages (10 pages + 3 posts)

| Page | Slug / template | Key content | Images (no repeats within a page) |
|---|---|---|---|
| Home | `/` (front page) | §4 | img-01…13 |
| About the lab | `/about/` | T1 head pair; story sheet over band (founded 2009 in Westmere by Ilse Marchetti; why a small lab; how a day runs: 07:30 bench opens, 10:30 pick-up, 13:00 design approvals, 16:00 pick-up, 18:00 close); people sheet with all 7 (name, role, years at the bench, one-sentence note); materials we work with (zirconia, lithium disilicate, layering porcelain, PMMA, hard/soft splint material) | img-15, img-11, img-05 (band), img-14 |
| Accepted cases | `/cases/` | T1 head pair; 6 T3 cards, one per case type (material options, turnaround, what to send): Single crowns img-07, Bridges img-03, Veneers img-14, Inlays and onlays img-17, Implant crowns img-08, Night guards img-09; "Not accepted" ruled list (full-arch implant bars, orthodontic appliances, full dentures); 3 case stories (§14) as ruled entries | head img-15 / img-10; cards img-07, 03, 14, 17, 08, 09 |
| Upload guide | `/upload-guide/` | T1 head pair; 4 steps in detail; formats sheet over band (STL / PLY / OBJ / DCM, export settings in plain words, what to name files, prescription fields); physical impressions: courier pick-up; design preview and approval within 2 working days; T3 foot cards | img-10, img-17 (head), img-14 (band), cards: img-07, img-13, img-12 |
| Fees | `/fees/` | Slab head; full fee table on a sheet over the img-13 band; notes (remakes within 30 days for fit at no charge, shade-visit fee, courier included within the pick-up area, invoicing monthly) | img-13 (band) |
| Notices (posts page) | `/notices/` (role `posts`, empty) | T3 post cards | featured images |
| Case portal early access (newsletter) | `/newsletter/` | Landing "waitlist": early access to the upload portal + monthly bench letter; newsletter slot on a sheet with top radius 40 over the band | img-16 (band) |
| Open an account (contact) | `/contact/` | T1 head pair; what we need to open an account (practice name, registration number, delivery address); form slot (§12); address, pick-up times, hours, phone | img-15, img-12 (head) |
| Thanks | `/thanks/` | After sign-up / enquiry: what happens next (3 lines), back-to-home pill | img-16 |
| Privacy | `/privacy/` | Plain legal text (patient data in scans; no sp-reveal) | – |
| Terms | `/terms/` | Case terms: accounts, prescriptions, remakes, liability, payment (no sp-reveal) | – |

**Posts (3, category "Notices", tags e.g. "scanning", "materials", "schedule"):**
1. "Five habits of a clean scan" (launch note: the upload guide in short), featured img-17.
2. "A new layered zirconia shade set at the bench", featured img-14.
3. "Holiday pick-up schedule", featured img-12.

Page codes:
- home → `/`, about → `/about/`, news → `/notices/`, article → post 1, category → Notices, tag → scanning, newsletter → `/newsletter/`, contact → `/contact/`.
- Footer menu: About, Accepted cases, Upload guide, Fees, Notices, Early access, Open an account, Privacy, Terms.

---

## 6. Colour (source `tok(a)`; SHOFU relationship kept: white ground, one pale wash, one accent used on the slab, the band and links)

| Role | Hex | Share | Source |
|---|---|---|---|
| Ground | #FFFFFF | ≈ 55 % | SHOFU #FFFFFF 55 % |
| Pale wash (sheets, fees band) | #F3EFF2 | ≈ 18 % | SHOFU #E5F5FB 12 % (hue moved to violet) |
| Second tint (case-types band, chips) | #E9E3E7 | ≈ 6 % | SHOFU cool grey #EDF0F3 5 % |
| Ink | #3B373A | text | SHOFU #434749 (−5 % lightness, violet cast) |
| Muted text / captions | #6B6268 | text | SHOFU mid grey |
| Hairlines | #C9C1C6 | lines | SHOFU #C8C8C8 |
| Accent (slab, labels, dots, CTA) | **#6E5E68** | ≈ 10 % | replaces SHOFU cyan #00B2ED |
| Accent gradient end | #7D6B77 | slab only | SHOFU cyan → teal gradient |
| Accent deep (hover, footer) | #54474F | footer | – |
| Highlight dot | #A8879B | < 2 % | – |

- **Why the accent changes:** the plan row fixes the palette (hatoba-nezumi grey-violet #6E5E68, purple family) and asks for a quiet palette. A saturated cyan would also exceed the first-screen budget and repeat the clinical-blue look of recent health themes.
- **Kept from SHOFU:** the ratios, the gradient slab, the tinted card band and the single-accent discipline.
- **First-screen saturated share** ≤ 15 % (target ≈ 10 %).
- **Contrast:** #3B373A on white is 11.2 : 1. White on #6E5E68 is 6.2 : 1. #6E5E68 on #F3EFF2 is 5.4 : 1.

---

## 7. Type (font_direction: **serif**)
- **Latin display / headings: Libre Baskerville** (400, 400 italic, 700). **Latin body / UI: Literata** (variable, 400–600, plus italic 400). Both serif.
- **zh-TW**:
  - headings `"Libre Baskerville", "Noto Serif TC", "PMingLiU", "MingLiU", serif` (bundled Noto Serif TC subset, 400/600, display only);
  - body `"Literata", "PingFang TC", "Microsoft JhengHei", serif` (no bundled CJK, no Japanese font, per the repo contract).
- **ja**:
  - headings `"Libre Baskerville", "Noto Serif JP", "Hiragino Mincho ProN", "Yu Mincho", serif` (bundled Noto Serif JP subset);
  - body `"Literata", "Hiragino Mincho ProN", "Yu Mincho", serif`.
- Ming / Mincho direction for CJK headings. Never mix in Gothic headings.
- Load every family via **theme.json `fontFamilies` + `fontFace`** (woff2 in `assets/fonts/`). List them in theme-meta `fonts[].files` with OFL licence files, and put the names in readme.txt.
- Copy `shared/inc/editor-lang.php` → `inc/editor-lang.php` and require it (style.css uses `:lang()`). Editor and front end must match (`check-editor-fonts.mjs`, en + zh-TW). Build the zh-TW / ja subsets with the Hokuto / Hada workaround.
- CJK display ≈ 0.75 × the Latin size. CJK body lh 1.85. fr / de `hyphens: auto`.

| Role | Desktop / mobile | Weight / lh / tracking | Source token |
|---|---|---|---|
| Ghost word "case types" (largest decorative) | `clamp(3.5rem, 2rem + 4.6vw, 5.5rem)` / 3.25rem | Libre Baskerville 400 / 1 / 0, #6E5E68 at 28 % | SHOFU band word ~72 px light, low contrast `tok(b)` |
| **Hero H1 (largest text)** | **4.5rem** (1280: 4.25rem) / 2.75rem | Libre Baskerville 400 / 1.12 / −.01em | SHOFU tagline 4 lines ~48 px, enlarged to the ≥ 4.25rem rule |
| Band ghost title (§3) / inner H1 | 3.5rem / 2.25rem | Libre Baskerville 400 / 1.1 | SHOFU "Corporate Message" ~64 px `tok(b)` |
| Section H2 | 1.75rem (CTA H2 2.75rem) / 1.5rem | Libre Baskerville 400 / 1.35 | SHOFU h2 ~24–28 px |
| Lockup accent word | 1.75rem | Libre Baskerville 400 #6E5E68 | SHOFU accent title 28 px `tok(b)` |
| Hero sub-tagline | 1.75rem / 1.25rem | Libre Baskerville italic 400 / 1.55, white | SHOFU tagline lh 1.55 `tok(b)` |
| Stats figure | 2.25rem / 1.875rem | Libre Baskerville 400 / 1.1 | – |
| Card title | 1.25rem | Libre Baskerville 400 / 1.35 | SHOFU card title ~18 px |
| Body | 1rem (narratives 1.0625rem) | Literata 400 / 1.9 (narratives 2.0) / .01em | SHOFU 14–15 px / 2.0 / .04em `tok(b)` |
| Small label / chips | 0.8125rem / 0.75rem | Literata 500–600 | SHOFU 14 px label |
| Eyebrow | 0.8125rem | Literata 600 / .14em uppercase | – |
| Nav | 0.9375rem | Literata 500 / .02em | SHOFU nav 13–14 px |

theme.json font sizes: small .8125, base 1, medium 1.25, large 1.75, x-large 2.75, xx-large 3.5, **huge 4.5rem** (≥ 4.25 ✔).

---

## 8. Spacing, radius, borders, buttons (source `tok(c)`, `tok(d)`)
- **Layout.**
  - Header 88 px. Container 1200 px (SHOFU), side padding 64 px desktop, 20 px mobile.
  - 2-column section heads: title 25 % / content 75 % (SHOFU).
  - Section padding 92 px top / 84 px bottom (SHOFU news 84 / 92), mobile 64 / 56. Sheet overlap 48 px.
- **Radius.**
  - Hero right photo 0 52px 0 0 (mobile 0 32px 0 0). Slab 0 0 0 40px.
  - Sheets: bottom 0 0 25px 25px, top 40px 40px 0 0.
  - Shade photo 40px 0 0 0. Cards 10. Chips / buttons 999. Inputs 6.
- **Borders / shadows.** Hairlines 1 px #C9C1C6. **No shadows anywhere** (SHOFU none).
- **Primary button.**
  - #6E5E68 fill, white, Literata 500 0.9375rem, height 48, padding 0 28px, radius 999.
  - Hover #54474F, 300 ms ease (SHOFU hover 300 ms ease `tok(g)`).
- **Outline pill.**
  - 1 px currentColor, radius 999, height 44, min-width 200, text left-aligned with 24 px padding.
  - A 1 px arrow line (40 px, with a 6 px angled tip) is positioned so it extends 16 px beyond the right edge.
  - Hover: background #F3EFF2, arrow moves 4 px right, 300 ms ease. The white variant is used on photo bands.
- **Dot link.** Underline 1 px offset 6 px, followed by an 8 px #6E5E68 disc with 10 px gap. Hover: the disc changes to #A8879B.
- **Footer.**
  - Band #54474F with radius 40px 40px 0 0 (a final T2 sheet), text #FFFFFF / #E3DCE0.
  - Row 1: wordmark + disc left; footer link row (9 links) right.
  - Row 2: 3 columns:
    - address + phone + email;
    - pick-up times + hours;
    - newsletter slot (dark tokens, §12).
  - Row 3: copyright 0.75rem.

---

## 9. Scroll effects (from stage-a "Scroll effect candidates"; sp-scroll copied unchanged)
Three effects: **parallax**, **reveal--up**, **stagger**. No count (the stats sit in the hero, which takes no scroll effects), no marquee, no wipe.
Variables on `.hk-*` wrappers: `--sp-dur: .8s; --sp-ease: cubic-bezier(.25,.1,.25,1)` (CSS `ease`, matching Swiper's default easing for SHOFU's fade, `tok(g)`); `--sp-dist: 24px`.

| Effect | sp-* class | Where | Reference (trigger / time / easing) | Our values |
|---|---|---|---|---|
| Parallax | `sp-parallax` | home §3 band; inner photo bands (`/about/`, `/upload-guide/`, `/fees/`, `/newsletter/`) | SHOFU message band is static; the parallax is the required addition, matching SHOFU's slow photo cross-fade calm | see §10 |
| Up | `sp-reveal sp-reveal--up` | the contents of the T2 sheets: §2 rows, §4 text column, §6 steps, §8 list, §10 text (the sheets themselves do not move); inner sheet contents | SHOFU: sheets overlap via z-index only, no reveal observed. Our addition, in SHOFU's fade timing (Swiper fade, ease) | 0.8 s, 24 px |
| Stagger | `sp-stagger` on parents | §2 notice rows (4), §5 cards (3), §6 steps (4), §8 people list; `/cases/` cards (per row container) | SHOFU card hover 300 ms ease; stagger is our addition | step 0.12 s (default) |

- **Hero cross-fade:** CSS keyframes in theme CSS. It is not an sp-* class and is not a scroll effect.
- **Never** on: the hero (§1), the header, the footer, the price table and §7, forms and their sections (`/contact/` form sheet, `/newsletter/` sheet, footer), legal pages, horizontal scrollers.
- No custom scroll listeners. `.sp-reveal` count ≤ 60 % of home blocks and 0 in the hero.

## 10. Parallax (required)
1. **Home §3 "From the bench"** (full-bleed band):
   - Outer Group / Cover `.hk-band.sp-parallax`. Background img-05 (Cover `.wp-block-cover__image-background`).
   - `--sp-par: 10%` desktop, **6 %** ≤ 781 px (kept on mobile).
   - Foreground: the ghost title, paragraph and pill in the inner container, which never moves. The overlapping sheets above and below (§2, §4) are siblings, outside the moving layer, so the photo slides behind the rounded corners. This makes T2's seams visibly alive.
   - Reference motion: SHOFU's photo pair dissolve (1000 ms, a slow calm photo change). The band carries that "photo slowly changes under the frame" feeling into the scroll.
2. **Inner photo bands** (`/about/` img-05, `/upload-guide/` img-14, `/fees/` img-13, `/newsletter/` img-16): `--sp-par: 8%`, mobile 5 %.
- Static under prefers-reduced-motion, `?sp-static` and in the editor. `check-parallax.mjs` must measure ≥ 6 px on desktop and mobile, and ≤ 1 px with reduced motion.

## 11. Responsive
- **390 px first screen**: as §3 mobile.
  - No vertical text (Scroll label hidden).
  - No absolutely positioned label over text: the sub-tagline is in flow inside the slab.
  - No overlap. `html, body { overflow-x: clip }`.
  - The cross-fade layers are stacked with `position: absolute` inside a fixed-ratio media box that contains no text.
- **Header < 1024 px**: anchors move to an overlay menu (the same single menu). The CTA stays visible.
- **T2 sheets < 782 px**: overlap 32 px, radii 0 0 20px 20px / 28px 28px 0 0. §3 band 480 px tall; text in one column; overlay 45 %.
- **§4, §6, §8, §10**: stack with the photo first. The §8 list goes to 1 column. §5 cards: 1 column < 700 px, 2 columns 700–1023 px.
- **Price table** (`.hk-fees`, home §7 and `/fees/`):
  - **At ≥ 782 px it spans the full content width** (100 % of the 1200 px container; 100 % at 800 px). Columns: Item 34 % / What's included 48 % / Fee 18 %.
  - The **fee column is `white-space: nowrap; text-align: right`**, Libre Baskerville 1.25rem tabular figures, never cut: no `overflow: hidden` on the table or wrapper, `table-layout: auto`, the description wraps.
  - Header row 0.75rem uppercase #6B6268. 1 px #C9C1C6 row rules.
  - **≤ 781 px every table (fees, hours, `/about/` day) is stacked**: each row becomes a block (item, description, fee on its own line right-aligned). The header row is visually hidden but kept for screen readers.
- Run `auto-gates.mjs` at 390 / 800 / 1280.

## 12. Forms (form contract v1: `steps/form-contract-v1` exists)
- Copy `pipeline/assets/forms/shippress-forms.php` → `inc/` and the forms CSS / editor JS → `assets/`, unchanged. Require them from functions.php.
- Forms are **never in the first screen** and never get sp-reveal (nor does their section).
- **Open an account** `/contact/` (the only enquiry / booking page; shade visits are booked here too):
  - The pattern calls `shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) )`, placed in the form sheet (top radius 40, #F3EFF2) below the account requirements.
  - `$fallback` is the `ob_start()`-buffered literal markup of the primary button "Email us to open an account" → `mailto:cases@hakuji-lab.example?subject=<contact_subject>`, same class / markup as the theme button. It never links to `/contact/`.
  - With CF7 or WPForms present, the first published form renders.
  - **Recommended fields** (documented in readme and a page note):
    - Practice name*, Contact name*, Email*, Phone*
    - Practice address* (textarea)
    - Registration number
    - Request type (select: Open an account / Book a shade visit / Arrange impression pick-up / Question about a case)
    - Expected cases per month (select: 1–5 / 6–20 / 21+)
    - Scanner used (text)
    - Message (textarea)
    - Consent* (checkbox, links `/privacy/`; "Please do not attach patient scans to this form.")
- **Newsletter** `/newsletter/` (standalone "Case portal early access" page, not an alias of Notices):
  - `shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'cases@hakuji-lab.example', 'label' => _t('forms_email'), 'submit' => _t('forms_subscribe'), 'notice' => _t('forms_mail_notice'), 'subject' => _t('forms_mail_subject') ) )`.
  - The same slot goes in the **footer** (dark #54474F). The home page has no separate subscribe section (the footer carries it).
  - MailPoet (explicit ID) or MC4WP preferred. CF7 / WPForms only via an explicitly configured newsletter form ID, never the contact form.
  - **Without plugins**: a required `type=email` field + submit performing a native mailto POST with the entered address.
  - Visible notice: "Opens your email app. Send the message to join early access; you are not signed up yet." Never claim success.
- **Light tokens** (`/contact/`, `/newsletter/` on #F3EFF2 / white):
  - `--sp-form-surface #FFFFFF`, `--sp-form-text #3B373A`, `--sp-form-border #C9C1C6`
  - `--sp-form-accent #6E5E68`, `--sp-form-on-accent #FFFFFF`
  - `--sp-form-focus #54474F` (2 px outline, 2 px offset), `--sp-form-radius 6px`
  - labels Literata 0.875rem / 600 #3B373A
  - error #9E3B3B (text + 1 px border + message under the field)
  - success #3F6B55 (text + 1 px left rule)
- **Dark tokens (footer #54474F)**: surface #FFFFFF, text #3B373A, border #E3DCE0, accent #FFFFFF, on-accent #54474F, focus #FFFFFF, labels and notice #FFFFFF / #E3DCE0, error text #FFD6D6, success #D2EBDD.
- Style every plugin class consistently (CF7, WPForms, MailPoet, MC4WP, Jetpack, `.wp-block-form`): input, textarea, select, checkbox / radio, label, submit, focus, error, success. Scope to plugin classes and `.sp-newsletter-fallback`; no global selectors.
- **Five-language strings** (en, zh-TW, ja, fr, de) as semantic keys in `inc/i18n/en.php`:
  - `forms_email` ("Practice email"), `forms_subscribe` ("Join early access"), `forms_mail_notice`, `forms_mail_subject` ("Case portal early access");
  - `contact_email` ("Email us to open an account"), `contact_subject` ("New lab account");
  - all field labels above.

  Extract with `L10N_SEMANTIC=1`. `form-runtime-check.php` must pass in all five languages, and `repo-gates.sh forms` must pass. Check on light and dark grounds at 390 px and desktop with a real CF7 (no submission).

## 13. Images (IMAGERY: **photo**; 17 images, 0 cut-outs)
**STYLE** (one string for every image, passed as `IMAGE_STYLE`):
`High-key documentary photograph, bright soft daylight from large north windows plus a small warm-neutral bench lamp, white and pale grey-violet surroundings with light ash wood, gently desaturated cool grade with clean whites, shallow depth of field, unposed calm working moments, diverse adult dental technicians and dentists in plain white or pale grey-violet clothing, modern neutral international laboratory or practice, 35mm or 50mm lens, screens show only grey 3D tooth shapes, no text, no letters, no numbers, no logos, no brand names, no Japanese elements.`

| # | Subject / framing | Ratio (generate) | Used on (page · block) | Home |
|---|---|---|---|---|
| img-01 | Technician's hands seating a white ceramic crown on a pale stone model, a fan of shade tabs beside it, bench lamp glow, close, vertical | 4:5 | Home · hero pair A left | ★ |
| img-02 | Dental practice: a dentist holds a hand mirror while a smiling middle-aged patient checks a new front crown, window light | 4:5 | Home · hero pair A right | ★ |
| img-03 | Three-unit ceramic bridge on a stone model mounted in a metal articulator on the bench, close, vertical | 4:5 | Home · hero pair B left; Cases · card "Bridges" | ★ |
| img-04 | Dentist holding a shade tab next to a smiling older patient's teeth, assistant softly out of focus | 4:5 | Home · hero pair B right | ★ |
| img-05 | Wide: technician at a window bench layering porcelain with a fine brush, rows of models and a microscope, airy lab | 16:9 | Home · §3 band (parallax); About · story band | ★ |
| img-06 | Small bright shade room: technician compares a shade tab beside a seated patient by a north window, calm | 3:2 | Home · §4 Shade room | ★ |
| img-07 | Row of finished monolithic and layered zirconia crowns on a white tray, soft top light | 3:2 | Home · §5 card "Crowns"; Cases · card "Single crowns"; Upload guide · foot card | ★ |
| img-08 | Screw-retained implant crown on a metal base beside an implant model and a small driver | 3:2 | Home · §5 card "Implant work"; Cases · card "Implant crowns" | ★ |
| img-09 | Clear hard night guard on a model next to its open case on the bench | 3:2 | Home · §5 card "Guards"; Cases · card "Night guards" | ★ |
| img-10 | Dentist moving an intraoral scanner wand while a screen shows a grey 3D tooth arch, patient reclined | 4:5 | Home · §6 upload; Upload guide · head pair left; Cases · head pair right | ★ |
| img-11 | Two technicians at a shared bench, one explaining a crown under a stereo microscope | 4:3 | Home · §8 team; About · head pair right | ★ |
| img-12 | Lab doorway: a courier receives a sealed case box from a technician, morning light | 3:2 | Home · §9 band; Contact · head pair right; Upload guide · foot card; post 3 | ★ |
| img-13 | Top-down bench: tweezers, shade guide, stone models, crowns on a tray, pale ash surface | 3:2 | Home · §10 account; Fees · band; Upload guide · foot card | ★ |
| img-14 | Milling unit with a white zirconia disc, a technician's hand loading it, clean | 3:2 | About · materials; Cases · card "Veneers"; Upload guide · band; post 2 | – |
| img-15 | Wide calm lab room, long white benches by tall windows, two people working in the distance | 4:5 | About · head pair left; Cases · head pair left; Contact · head pair left | – |
| img-16 | Packed case box on the bench: sealed bags, a blank prescription card, a model, soft light | 3:2 | Newsletter · band; Thanks | – |
| img-17 | CAD designer adjusting a grey 3D crown on a large monitor, hand on a mouse, lab behind | 3:2 | Upload guide · head pair right; Cases · card "Inlays and onlays"; post 1 | – |

- Home: img-01 … img-13 = **13 unique**.
- Pages are checked for no repeats within a page:
  - `/cases/` uses 15, 10, 07, 08, 09, 14, 17, 03;
  - `/upload-guide/` uses 10, 17, 14, 07, 13, 12;
  - `/about/` uses 15, 11, 05, 14;
  - `/contact/` uses 15, 12.
- Each ≤ 300 KB webp, ≤ 2000 px. Check every image with Read; regenerate if it shows text, logos, face or hand errors, or a style drift.
- img-01 to img-04 must read as two matching pairs (same light and grade).

## 14. Fixed facts (brand.md must match; identical in all five languages)
- **Name:** Hakuji Laboratory. Dental laboratory for practices. Founded **2009**.
- **Address:** Unit 3, 18 Alder Yard, Westmere (fictional). Phone (010) 555 0142. Email cases@hakuji-lab.example.
- **Hours:** Mon–Fri 07:30–18:00 · Sat 09:00–13:00 (shade visits by appointment only) · Sun closed.
- **Courier pick-ups:** weekdays **10:30 and 16:00**, within the pick-up area (included in fees).
- **Six case types:** single crowns · bridges up to six units · veneers · inlays and onlays · implant crowns (screw-retained / cemented) · night guards. Not accepted: full-arch implant bars, orthodontic appliances, full dentures.
- **Scan formats (4):** STL, PLY, OBJ, DCM. Physical impressions are accepted via courier pick-up.
- **Turnaround** (working days from scan received / design approved):
  - single crown 5;
  - bridge 7;
  - veneers 6;
  - implant crown 8;
  - night guard 4.
  - Design preview is sent within 2 working days.
- **Process (4 steps):** 01 Open an account (confirmed within one working day) → 02 Export the scan and fill the prescription → 03 Upload via your case link or email, or book a pick-up → 04 Approve the design preview; we mill, finish and send it back by courier.
- **Fees** (per unit, before tax, € everywhere):

| Item | Fee |
|---|---|
| Monolithic zirconia crown | €95 |
| Layered zirconia crown (custom shade) | €145 |
| Lithium disilicate crown or veneer | €125 |
| Zirconia bridge, per unit | €90 |
| Inlay or onlay (ceramic) | €110 |
| Implant crown, metal base included | €210 |
| Night guard, hard or dual-layer | €70 |
| Shade visit at the lab | €35 |

  (8 items.) Remakes for fit within 30 days at no charge (a policy, not a guarantee). Monthly invoicing.
- **People (7):**
  - Ilse Marchetti, founder and ceramist (layering)
  - Daniel Okafor, CAD design lead
  - Mei-Lin Hsu, implant restorations
  - Tomas Varga, milling and sintering
  - Amara Nwosu, shade visits and client care
  - Sophie Laurent, case intake and courier
  - Rafael Ortiz, guards and veneers
- **Case stories (3, on `/cases/`):**
  - "A four-unit anterior bridge from a scan alone";
  - "Matching one central incisor after a shade visit";
  - "An implant crown in a tight space between arches".

  Written as process notes, with no outcome claims.
- **Daily routine** (brand.md "a day at the lab"): 07:30 open · 10:30 pick-up · 13:00 design previews sent · 16:00 pick-up · 18:00 close.
- **Stats row:** 5 working days · 6 case types · 2 pick-ups each weekday · 4 file formats.
- **Tone:** quiet, precise, practice-to-lab. No claims of guaranteed results, awards, media or real brands.

## 15. Home acceptance checklist
- [ ] First line of the first-screen spec obeyed: collage / beside-photo / stats-row. The H1 is beside the pair, not over a photo. A 4-figure stats row is under it.
- [ ] T1: two photos at 42 / 58, 16 px gap, right photo radius 0 52px 0 0, square left corners, 64 px right margin; #6E5E68 gradient slab with 0 0 0 40px radius bleeding right and ≥ 110 px visible; the sub-tagline crosses the seam; Scroll label (desktop); the pair cross-fades A ↔ B (1000 ms / 6000 ms), static under reduced motion and sp-static.
- [ ] All 6 KV checklist items visible at 1440 × 900 and 1280 × 800.
- [ ] T2: Notices sheet (0 0 25 25) overlaps the §3 band; the Shade sheet (40 40 0 0) overlaps it from below; the photo is visible in all 4 corners. The same logic is used at §8 → §9 → §10. No shadows.
- [ ] T3: ghost word "case types" ≥ 3.5rem; 3 cards at 1.45 : 1 with the title on the photo top; dot links with 8 px discs.
- [ ] Split header with the single menu; the CTA "Open a lab account" appears in the header, hero and §10 (one CTA, repeated). Anchors scroll to §5, §6, §7, §8, §2.
- [ ] ≥ 8 images on home (13 planned), no repeats, 0 cut-outs.
- [ ] ≥ 250 English words; ≥ 3 narrative paragraphs of ≥ 20 words.
- [ ] H1 4.5rem (≥ 4.25rem). Libre Baskerville + Literata loaded via theme.json fontFace; the editor matches.
- [ ] First-screen saturated share ≤ 15 %.
- [ ] `sp-parallax` on the §3 band: ≥ 6 px shift on desktop and mobile, 0 under reduced motion. Reveals: ≥ 3 hidden before entry, none left after scrolling to the bottom. No reveal in the hero, the fees section or forms.
- [ ] Fees table full width at 800 / 1280; fee column nowrap and right-aligned, not cut; stacked at 390.
- [ ] 390 px: no vertical text, no absolutely positioned labels over text, no overlap, no horizontal scroll.
- [ ] Fees, times, counts and names match §14 exactly.
- [ ] No form in the first screen. The footer newsletter slot renders the email + submit + notice.

## 16. Similarity table (target ≈ 80 %, values from `reference-tokens.md`)
| Dimension | SHOFU value | Hakuji value |
|---|---|---|
| Ground / wash / tint share | white 55 % / cyan wash 12 % / grey 5 % `tok(a)` | white 55 % / #F3EFF2 18 % / #E9E3E7 6 % |
| Accent | cyan #00B2ED + teal gradient, ≈ 12 % of first screen | #6E5E68 → #7D6B77 gradient, ≈ 10 % (palette fixed by the plan row) |
| Ink / hairline | #434749 / #C8C8C8 | #3B373A / #C9C1C6 |
| Hero photos | 2 photos, 42 / 58, gap 16, 628 px tall, left square, right r 0 52 0 0 `tok(d)` | same split, gap and radii; 560 px tall (the stats row needs room) |
| Hero slab | 116 px visible, r 0 0 0 40, bleeds right | 116 px visible (200 total), r 0 0 0 40, bleeds right |
| Hero text | 4-line white tagline lower right, ~48 px thin, lh 1.55 | H1 4 lines beside the photos (4.5rem); 3-line white italic sub-tagline at the lower right, lh 1.55 |
| Hero motion | Swiper fade 1000 ms, delay 6000 ms, loop, pair together `tok(g)` | CSS cross-fade 1000 ms ease, hold 6000 ms, loop, pair together |
| Scroll cue | vertical "SCROLL" + 1 px line at the slab edge | same, inside the slab, desktop only |
| Header | 88 px, logo left, nav right, filled contact button at the far right | 88 px, split nav (plan row), filled CTA at the far right |
| Sheets | news r 0 0 25 25 over the photo band; showroom r 40 top; no shadow | the same radii and overlap (48 px); no shadow |
| Message band | 100vw × 420, white text on the right | 100vw × 560, white text on the right, + parallax 10 % |
| Showroom | 3 : 2 photo, rounded top-left, inside a r 40 sheet | Shade room 3 : 2, r 40 0 0 0, inside a r 40 sheet |
| Cards | 3-up 1.45 : 1, r 10, title on photo top, "details" + 8 px dot, on an accent band, ghost word ~72 px | identical geometry on #E9E3E7, ghost word up to 5.5rem at 28 % |
| Title lockup | Latin word 28 px accent + rule + small label | Libre Baskerville 1.75rem #6E5E68 + 56 px rule + label |
| Buttons | outline pill 1 px r 999 with a line arrow extending right | identical |
| Section rhythm | padding 84 / 92, container 1200, head 25 % / body 75 % `tok(c)` | identical |
| Body type | 14–15 px / lh 2.0 / .04em sans | 16–17 px / lh 1.9–2.0 / .01em serif (font direction by plan row) |
| Scroll motion | none besides the hero | reveal-up 0.8 s ease 24 px + stagger on sheet contents, parallax on bands (required additions) |
