# Design spec: Seimyaku Clinic (seimyaku-clinic)

Plan row b41-1 · type **business** (category health-wellness) · archetype single-column-longform · page_structure narrative-problem-method-proof · font_direction **sans** · IMAGERY **photo**.
Main reference: **Takeda Hospital Group**, https://www.takedahp.or.jp/ (S5-Style, education-healthcare). Secondary: **Naganonaika clinic**, https://www.naganonaika.com/ (same category).
Token source: `brand/reference-tokens.md`, cited below as `tok(a)` … `tok(g)`. Screens: `brand/ref/takedahp.or.jp-first.png`, `scroll-td-{700,1500,2600,3800,5200}.png`, `naganonaika-first.png`, `scroll-ng-*.png`.
Photos, copy, logo and marks are all our own. We take the references' structure, motion ideas, colour relationships and measurements, never their pictures, words or logos.

Class prefix for theme CSS: `sz-`. Effects use only the sp-scroll classes (copied unchanged from `pipeline/assets/sp-scroll/`).

---

## 1. Signature techniques (all three appear on the home page at full strength)

### T1. Rising veil + docked headline (Takeda hero → message; `ref/takedahp.or.jp-first.png`, `ref/scroll-td-700.png`, `ref/scroll-td-1500.png`)
- **What Takeda does.** The full-screen photo of a physician is covered, as you scroll, by a pale blue veil (#B5CAE9) with a soft wave-shaped edge. The veil rises from the bottom (scaleY 0 → .75). The large light two-line English headline shrinks to .75 and docks top-left. The message column then runs in the right half (x 720 of 1440) over the veil, and the city photo shows through the lower part of the veil.
- **Ours, home hero (§3).** The full-bleed photo carries a **wave-edged veil layer** (`.sz-veil`, #BFD0D6, 92 % opacity, SVG wave mask top edge, amplitude 28 px, wavelength 720 px). It is a `.sp-parallax__layer` with its own `--sp-par: -14%`, so it **moves upward over the photo as the page scrolls** while the photo itself drifts down at 6 %. At rest (and in `?sp-static`) the veil shows as a pale wave band over the bottom **18 %** of the photo. That keeps it visible in every screenshot.
- **Ours, home §2 "Message".** This is the veil's continuation: a full-bleed Cover whose overlay is the same veil colour, with the same wave on its top edge, so the veil seems to have risen over a second photo (the neighbourhood). The **docked headline** sits at **0.75 × the H1 size** (3.375rem, Outfit 300) in the left column with `position: sticky; top: 120px`. It stays docked top-left while three narrative paragraphs scroll in the right half, starting at 50 % of the container (Takeda x 720 / 1440).
- **Must not be diluted.** The wave edge must be a real curve (not a straight gradient line). The veil colour must be clearly blue-grey (not white). The docked headline must be light-weight (300) and large, and must start in the left column. The message must sit in the right half.

### T2. Scale-back stack of three chapters (Takeda philosophy page logic `tok(g)`; `ref/scroll-td-2600.png` for the sheet look)
- **What Takeda does.** Each media item is pinned. As the next chapter slides over it, the previous one scales back to ≥ 0.8 and dims under a dark overlay. The inner image drifts 10 % (parallax).
- **Ours, home §3 "How care is paced".** Three chapter **sheets** are stacked with pure CSS `position: sticky`: `top: 96px`, `160px`, `224px`. The 64 px step is exactly each sheet's header row, so the earlier sheets' header rows stay visible above the incoming sheet.
  - **Scale-back is built into the widths:** sheet 1 is `max-width: 1180px`, sheet 2 `1260px`, sheet 3 `1340px`, all centred. When stacked, the earlier sheets read as receding (≈ .88 and .94 of the front sheet).
  - **Dim is built into the tone:** sheet 1 #D5E0E2, sheet 2 #E2EAEB, sheet 3 #EEF3F3 (darker = further back).
  - Each sheet's photo is `figure.sp-parallax` with `--sp-par: 10%` (Takeda inner image 10 %). No custom scroll code.
- **Sheet anatomy.**
  - Header row, 64 px: index "01" in Outfit 300 1.5rem #51686B, a 1 px #51686B rule 32 px long, and the chapter title in Outfit 400 1.25rem #1F2D30.
  - Below it, a 12-column body: photo **16:9** in columns 1–7 (r 4), then text in columns 8–12: H3 1.75rem / 400, 2 paragraphs, and a 3-line fact list with slash separators (T3 style).
  - Padding 40px 48px 48px. Sheet radius **8px 8px 0 0** (top corners only; reads as stacked sheets).
- **Must not be diluted.** There are three sheets, not two. They must actually stack (sticky) on desktop, with visible width and tone steps. The photos are large (≥ 56 % of the sheet width).

### T3. Medallion-split slashed link row (Naganonaika header; `ref/naganonaika-first.png`)
- **What Naganonaika does.** A round 96 px medallion docks on the lower edge of the photo and splits the nav: three links left and three right, separated by thin diagonal slashes (about 1 px, 24 px tall, 30°).
- **Ours.** The single top menu is a centred link row: **3 links | medallion | 3 links**, with a 1 px #9FB2B4 diagonal slash (an SVG line 14 × 24 px, rotated 30°) between neighbours.
  - The **72 px medallion** (#51686B fill, 2 px #F3F6F6 ring, our own abstract mark: two nested arcs like a slow pulse, white) is centred in the row. It hangs **28 px below the header's bottom edge, docking onto the top edge of the hero photo**. This is Naganonaika's photo-edge dock moved to the top edge, because our headline lives below the photo.
  - The same slash divider is reused in: card meta in the hero card row, the T2 fact lists, the team list (name / role), the footer link row, and breadcrumbs on inner pages.
- **Must not be diluted.** The medallion must be round and filled main colour, must overlap the photo edge, and must sit at the exact centre. Slashes, not dots or pipes.

### T4 (support, not counted). Dot + chip + giant light word (Takeda `.t-home-heading`, `ref/scroll-td-2600.png` "FACILITIES")
Used for section heads from §4 on:
- an 8 px #51686B dot offset up-left of a chip (#51686B fill, white text, 0.875rem / 600, padding .5rem .9rem, r 8);
- then a giant tracked uppercase word in **Outfit 300**, `clamp(3.5rem, 1.9rem + 6.2vw, 8.5rem)`, lh 1, ls .08em, #51686B, left-aligned at the content edge (never centred).

### Continuation on inner pages (≥ 4)
| Page | T1 | T2 | T3 | T4 |
|---|---|---|---|---|
| every page | page head (§5) | – | header + breadcrumb slashes + footer | – |
| First consultation `/first-visit/` | ✓ | 3-sheet stack (before / on the day / after) | ✓ | "THE FIRST VISIT" |
| Monitoring `/monitoring/` | ✓ | 4-sheet stack by stage | ✓ | "PACING" |
| About `/about/` | ✓ | 3-sheet stack (2013 / 2018 / now) | ✓ | "THE CLINIC" |
| Conditions `/conditions/` | ✓ | – | ✓ | "WHO WE SEE" |
| Team `/team/` | ✓ | – | slashed name / role list | "THE TEAM" |
| Fees `/fees/` | ✓ | – | ✓ | "FEES" |
| Visit `/visit/` | ✓ (Message-style sticky docked title + right column) | – | ✓ | "VISIT" |

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
- **Picture** (`ref/takedahp.or.jp-first.png`): a full-bleed documentary photograph in even, cool clinical light. A physician in profile concentrates on a screen on the right. A large out-of-focus pale object fills the left third (a focus-pull blur). A thin curved white hairline arcs across the lower-left. The large, light, two-line English headline ("Bridge / The Gaps") fades in at lower-left. A small outline "scroll" pill sits bottom-left.
- **Story**: "bridging the gaps between hospital, patient and community". Care as continuity, carried by a person you can see working.
- **Signature motion**: the copy fades in after 1 s (0.8 s, cubic-bezier(.25,.46,.45,.94)). On scroll, a pale-blue wave-edged veil rises over the photo, the headline shrinks to .75 and docks top-left, a message column passes on the right, and then a second photograph (the city) appears through the veil's lower part (`scroll-td-700`, `scroll-td-1500`).

### (2) Our transposed scene (same composition, same motion idea, same image type: high-key documentary photo)
- **Scene, img-01**: a nephrology consulting room in daylight. A physician and a patient (late 50s) sit **side by side, both turned toward a desk monitor** showing a greyscale renal ultrasound (kidney outline only, no text). Printed results lie between them. The physician points with a pen. The figures sit in the **right 55 %**.
  - **Focus-pull**: across the **left 30 %**, an out-of-focus pale ceramic cup of tea and the corner of a folded results envelope on the desk edge. The "tea untouched" of the plan signature is literally the blurred foreground.
- **Story**: "A year, not a visit": kidney disease and high blood pressure are followed over years. The bridge in Takeda becomes the line of continuity between visits, drawn by the hairline arc and carried by the rising veil (the veil = time passing over the same scene).
- **Motion**:
  - headline fade-in on load (CSS, not sp-reveal);
  - the arc draws once;
  - the photo drifts (parallax 6 %) while the veil layer rises (parallax −14 %);
  - §2 Message continues the veil over a second photo (the neighbourhood street, Takeda's city), with the docked headline (T1).
- **Composition change, required by the plan**: the headline is **below the photo**, not on it (hero_text below-photo). The card row sits at the hero foot (hero_footer card-row).

### (3) KV checklist (every item implemented and visible in the first screen at 1440 × 900 and 1280 × 800; mobile notes in §3)
| # | Reference element | Our equivalent | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Full-bleed documentary photo of a physician at a screen | Physician + patient side by side looking at a renal scan on a desk monitor, results between them | full-bleed 100vw under the header, height `clamp(300px, 46vh, 520px)`; figures in the right 55 % (`object-position: 62% 45%`) | `sp-parallax` `--sp-par: 6%` (mobile 4 %) | **img-01** hero-scan-consult.webp |
| 2 | Out-of-focus object across the left third (focus-pull) | Blurred tea cup + folded results envelope across the left 30 % of the same photo | inside img-01, left 30 % | moves with the photo | img-01 (in the prompt) |
| 3 | Thin curved white hairline across the photo | 1 px white (60 % opacity) SVG arc, from x 12 % to x 64 % of the photo width, sagging 36 px, at 70 % of the photo height | on the photo, above the veil, outside the moving layer | draws once: `stroke-dashoffset` 1.2 s cubic-bezier(.25,.46,.45,.94), delay .3 s; final state = drawn | – (SVG) |
| 4 | Large light two-line English headline, lower-left | H1 "A year, / not a visit." Outfit **300, 4.5rem**, lh 1.02, ls −.01em, #1F2D30, left edge at the 90 px content line (Takeda copy x 90) | **below the photo**, in the headline band | load fade-in 0.8 s cubic-bezier(.25,.46,.45,.94), delay .4 s (Takeda 1 s, shortened for LCP); never sp-reveal | – |
| 5 | Pale blue wave-edged veil rising over the photo | `.sz-veil` #BFD0D6 at 92 %, SVG wave top edge, covering the bottom 18 % at rest | over the photo foot, full width | `.sp-parallax__layer` with `--sp-par: -14%`, rising as you scroll | – (CSS/SVG) |
| 6 | Outline "scroll" pill bottom-left | 32 × 76 outline pill (1 px white 70 %, r 16, down-arrow 12 px), links to `#message` | on the photo, left 40 px, bottom 24 px (sits on the veil band) | static (Takeda hides it on scroll; we keep it static, no listener) | – |
| 7 | News cards row under the first screen (white r4, 24 × 2 dash, chip, arrow square) | **Card row** of 4 white r4 cards: First visit · Monitoring · Who we see · Hours | hero foot, the 1108 px column offset right (Takeda x 280 → 1388) | none (first screen, no reveal) | – |
| 8 | Medallion splitting a slashed nav, docked on the photo edge (Naganonaika) | 72 px #51686B medallion centred in the 3 + 3 slashed link row, overlapping the photo top edge by 28 px | header / photo seam | none | – (SVG mark) |

All of img-01 and the second-screen img-02 are in the image list (§13).

---

## 3. First-screen composition

**hero_composition: full-bleed · hero_text: below-photo · hero_footer: card-row · hero_fingerprint: full-bleed/below-photo/card-row**

Not full-bleed text over a photo: no headline, lead or info strip is laid over the photo. Only the decorative arc, the veil band and the scroll pill sit on the photo.

- **full-bleed**: Group `.sz-hero` (alignfull, margin 0) directly under the 88 px header.
  - Child 1: `div.sz-hero__media.sp-parallax` (`--sp-par: 6%`), width 100vw, height `clamp(300px, 46vh, 520px)` (414 px at 900 high, 368 px at 800). It contains:
    1. `figure.wp-block-image` > img-01, `object-fit: cover; object-position: 62% 45%`;
    2. `div.sz-veil.sp-parallax__layer` (`aria-hidden`, `--sp-par: -14%`, inset `auto 0 -10% 0`, height 30 %, background #BFD0D6 / .92, `mask-image` = SVG wave on its top edge);
    3. `svg.sz-arc` (absolute, not inside a moving layer; `aria-hidden`);
    4. `a.sz-pill`.
  - The medallion from the header overlaps the media top edge by 28 px (z-index above the media).
- **below-photo**: Group `.sz-hero__text` on ground **#F3F6F6**, padding `36px 52px 28px 90px` (Takeda: 52 side padding, copy x 90). Two columns, 7 / 5:
  - left: eyebrow "NEPHROLOGY · BLOOD PRESSURE · SINCE 2013" (0.75rem / 600 / .14em uppercase, #51686B, preceded by the 8 px dot), then the H1 on **one line at ≥ 1280 px** ("A year, not a visit.", 4.5rem Outfit 300); it may break after the comma below 1280 px;
  - right column, aligned to the H1 baseline:
    - lead, 1rem / 1.8 Figtree, #4A5A5D, max 420 px, ≈ 32 words: "We follow kidney disease and high blood pressure over years. Your first consultation takes ninety minutes; after that, we set the pace of your monitoring with you, and the same doctor reads every result.";
    - **primary button** "Book a first consultation" (§8).
- **card-row**: Group `.sz-hero__cards` on ground **#E6EDEE** (mist panel), padding `24px 52px 28px clamp(24px, 19.4vw, 280px)`, so the 4-card grid takes Takeda's offset 1108 px column (x 280 → 1388 at 1440). It holds 4 equal white cards (#FFFFFF, r 4, no border, no shadow, padding 20px 24px, min-height 112 px, gap 16). Each card has:
  - a 24 × 2 #51686B dash sitting on the top edge, 24 px from the left (Takeda news dash);
  - a chip (#EEF3F3 fill, 1 px #C8D5D6, r 999, 0.75rem / 500 #51686B, padding 2px 10px);
  - a title, Figtree 1.0625rem / 500 #1F2D30;
  - a meta line, 0.8125rem #6B7B7E, with T3 slashes;
  - a 40 × 40 arrow square (r 12, 1 px dashed #B8C8CA, arrow #8A4940) at the bottom-right.

  The whole card is the link.

  | Chip | Title | Meta | Link |
  |---|---|---|---|
  | First visit | Ninety minutes, with your past results | Mon–Sat / bring letters & lab sheets | `/first-visit/` |
  | Monitoring | Paced by your numbers, not the calendar | every 6–8 weeks to once a year | `/monitoring/` |
  | Who we see | Kidney disease, blood pressure, after a stone | adults 18+ / referral not needed | `/conditions/` |
  | Hours | Mon–Fri 08:30–17:30, Wed to 19:30 | Sat 09:00–12:30 / Sun closed | `/visit/` |

- **Heights at 1440 × 900**: header 88 + media 414 + text band 164 + card row 164 = **830** ≤ 900, so the card row is fully visible. At **1280 × 800**: 88 + 368 + 164 (H1 still one line, 4.5rem ≈ 690 px wide) + 164 = **784** ✓.
- **Load motion**: H1 + lead fade (opacity 0 → 1, translateY 12 px → 0) and the arc draw, both inside `@media (prefers-reduced-motion: no-preference)`, and disabled under `html.sp-no-motion` (covers `?sp-static`). The final state is the static state. No sp-reveal anywhere in §3.
- **Mobile 390 px (≤ 781 px)**:
  - Header 64 px: 40 px medallion inline at the left (no overhang), wordmark "Seimyaku Clinic", "Menu" button (core Navigation overlay holding the 6 links and the button).
  - Media: **4:3** full width (293 px), `object-position: 66% 45%`, `--sp-par: 4%`, veil band 18 %, arc kept, pill hidden.
  - Text band: padding 28px 20px; eyebrow; H1 **2.75rem / 1.04** (two lines); lead; full-width button 48 px.
  - Card row: **2 × 2 grid** (gap 12, padding 16px 20px), card padding 16, meta hidden below 420 px, arrow square 32. Not a horizontal scroller.
  - **No vertical text, no absolutely positioned labels over text, no overlap, no horizontal scroll.**
- **Saturation**: the photo is high-key, pale cool white and grey-blue. The physician wears a pale blue-grey shirt (no saturated scrubs). Saturated pixels come only from the arrow glyphs (#8A4940) and one dot. Target **≤ 10 %**, hard cap 15 % (`scripts/check-first-screen.py`), under the plan's 30 % ceiling. Takeda measures 27.5 % because of its surgical blue (`tok(a)`); we stay deliberately quieter.

---

## 4. Home sections (single-column long-form: problem → method → proof)

Container rules:
- content edge left **90 px** and right **52 px** at 1440 (`padding-inline: clamp(20px, 6.25vw, 90px) clamp(20px, 3.6vw, 52px)`);
- the "offset column" (cards, news) starts at `clamp(24px, 19.4vw, 280px)`;
- section gaps **140 px** (Takeda 120–160, `tok(c)`), mobile 72 px.

The single top menu (T3) holds: About · First visit · Monitoring | medallion | Team · Fees · Visit. To its right is the outline button "Book" (Takeda's 260 × 32 outline link → ours 200 × 36, 1 px #51686B, r 999, 0.875rem / 500).

| # | Section (anchor) | Purpose (narrative) | Layout | Images | Copy | Motion |
|---|---|---|---|---|---|---|
| 1 | **Hero** `#top` | KV + one CTA | §3 | img-01 | eyebrow + H1 + 32 w + 4 cards | load fade + arc + parallax only |
| 2 | **Message** `#message` (T1) | **problem**: kidney disease is quiet, numbers drift slowly, single visits miss trends | alignfull Cover `.sp-parallax` (`--sp-par: 10%`), min-height 880 px, background img-02. Overlay = `linear-gradient(to bottom, rgba(191,208,214,.95) 0%, rgba(191,208,214,.88) 55%, rgba(191,208,214,.25) 100%)`; wave top edge (same SVG as the hero veil). Inner 2 columns: left 5/12, sticky top 120 px: chip "Why we follow" + docked H2 "Years, / not visits." Outfit 300 **3.375rem** (= .75 × H1) #1F2D30 + 2-line sub (0.875rem #3B4B4E). Right column starts at 50 %: **3 narrative paragraphs** (each 45–60 w, Figtree 1.0625rem / 2.0 #1F2D30, max 520 px, 40 px apart) + text link with arrow square "About the clinic" → `/about/`. The lower 30 % shows the street through the thinning veil. | img-02 | ≈ 160 w | parallax on the cover; `sp-reveal--up` on each paragraph |
| 3 | **How care is paced** `#care` (T2) | **method** | Intro line above the stack: chip "Method" + H2 1.75rem / 400 "Three things that happen, in order". Then the 3 sticky sheets (T2): **01 The first consultation** (img-03; 90 min, what we review, the samples taken that morning) · **02 Monitoring, paced** (img-04; the stage-based rhythm from §14, the home BP diary) · **03 The yearly review** (img-05; ultrasound, medicine review, the dietitian; what changes next year). Each sheet: H3 + 2 paragraphs (≈ 70 w) + 3 slash facts + link. A spacer of 40vh after sheet 3 lets the stack settle. | img-03, img-04, img-05 | 3 × 75 w | `sp-parallax --sp-par: 10%` on each sheet photo; sheets themselves no reveal |
| 4 | **What we watch** `#watch` (T4 + Takeda facilities rows) | method, detail | T4 head: chip "What we watch" + giant word "**FOLLOW-UP**". Below it, Takeda facilities layout (`ref/scroll-td-3800.png`): **left 61 %** holds 4 ruled rows (1 px #C8D5D6 top rule with a 32 × 2 #51686B dash at its left, row height ≥ 220 px, index "#01" Outfit 400 0.8125rem #6B7B7E, small kicker, title Outfit 400 1.75rem #51686B, chips row on the right half of the row, 40 × 28 arrow tab bottom-right #E2EBEC). **Right 39 % bleeds to the viewport edge** with 3 photos stacked flush (no gap, no radius): img-06 3:2, img-07 4:5, img-08 3:2. Rows: #01 Kidney function (chips eGFR · creatinine · potassium) · #02 Protein in urine (urine ACR · dipstick) · #03 Blood pressure (home diary · 24-hour monitor · clinic reading) · #04 Medicines & food (medicine review · dietitian · salt and potassium). | img-06, img-07, img-08 | 4 × 30 w | rows: `sp-stagger` + `sp-reveal--up`; photos: `sp-reveal--wipe` (clip on the inner img wrapper) |
| 5 | **Three people, followed** `#stories` | **proof** (no outcome claims; describes pace and process) | T4 head: chip "Stories" + giant word "**FOLLOWED**". Feature story (Takeda recruit card, `tok(e)`): left 5/12 text (name + age + condition kicker, pull quote Outfit 300 1.75rem, 2 paragraphs ≈ 80 w, slash fact line "Stage 3a / every 6 months / 8 years with us"); right 7/12 = img-09 3:2 inset (r 4) with img-10 1:1 at 34 % of its width offset **top-right** (`top: -48px; right: -24px`, 6 px #F3F6F6 ring). Below it, 2 white r4 cards side by side in the offset column: img-11 3:2 / img-12 3:2 at top, kicker, title, 50 w, slash facts. | img-09, img-10, img-11, img-12 | ≈ 200 w | `sp-reveal--up` on the feature text and the 2-card group (`sp-stagger`) |
| 6 | **Who you will see** `#team` | proof / trust | Mist band #E6EDEE. Two columns: left img-13 4:5 (r 4, 40 %); right: H2 "Seven people, the same faces" + 1 paragraph (40 w) + a **two-column text list of 7 people**: name Figtree 1.0625rem / 500 #1F2D30, slash, role 0.875rem #6B7B7E; 1 px #C8D5D6 rule under each. No portrait grid. Link "Meet the team" → `/team/`. | img-13 | ≈ 90 w | `sp-reveal--up` on the list group |
| 7 | **Fees** `#fees` | clarity | T4 head: chip "Fees" + giant word "**FEES**". Full-width price table (6 rows, §11) + note 0.875rem #6B7B7E. Then the primary button. | – | 6 rows + note | **no reveal** |
| 8 | **Visit** `#visit` | route into care | Two columns 6/6: left img-14 3:2 (entrance) r 4; right: H2 "Second floor, above the pharmacy" + address, hours table (2 columns, stacked on mobile), phone, email, "What to bring" (3 slash items), primary button + outline button "Ask a question" → `/contact/`. | img-14 | ≈ 70 w | `sp-reveal--up` on the text column |
| 9 | **Notes** `#notes` | news | Offset column. Chip + dot heading "From the clinic". 3 white r4 cards in Takeda news style (date 0.8125rem #6B7B7E, title Figtree 1.0625rem / 500, chip, 40 px dashed arrow square), **no images**. Right-aligned text link "All notes" with arrow square → `/news/`. | – | 3 titles | `sp-stagger` + `sp-reveal--up` on the cards |
| 10 | **The clinic letter** (newsletter slot) | quarterly letter | Ground #F3F6F6, 1 px #C8D5D6 rule above. Two columns 5/7: left H3 1.5rem / 400 "A letter, four times a year" + 2 lines (what is in it: opening changes, a note from the dietitian, flu-season dates). Right: `shippress_form_slot` kind newsletter (§12). | – | ≈ 35 w | **no reveal** |

- **Home image positions: 14** (img-01 … img-14), well above 8.
- **English words**: ≥ 600 (minimum 250).
- **Narrative paragraphs ≥ 20 words**: §2 (3), §3 (6), §5 (2+2), so ≥ 10.
- **Reveal use**: §2, §4, §5, §6, §8, §9. None in §1, §3 sheets, §7 (table) or §10 (form).

### Not the same as recent home pages
| Theme | Their home order (stage-a) | Seimyaku differs because |
|---|---|---|
| Enban Records | black keyword bar → slide strip → crate cards → centred heads → appointment → valuation | Our hero is a full-bleed photo with the headline below and a card row. No carousel, no product cards, no centred heads (ours are left giant words). |
| Kodou Charging | split hero + booking banner → statement + pictograms → tabs → photo band → 4 tiles → narrative → pricing → stories → FAQ → newsletter | No split hero, no banner, no tabs, no pictograms, no FAQ, no tiles. Our narrative opens straight after the hero inside a veil cover. Method is a sticky stack, not tabs. |
| Kaoru Cocoa | framed hero window + vertical phrases → 50/50 plates → outline menu cards → accordion → closed-days panel | No framed window, no vertical text, no 50/50 alternating plates, no accordion. Photos bleed to the right edge in a stacked column (Takeda) instead. |
| Kikan College | announcement strip + framed hero + stats row → 3 × 2 tiles → numbered sections → framed parallax band → fees table | No stats row, no tiles, no framed band. Our parallax is a full-bleed veiled cover with a sticky docked title. Fees come after proof, not before. |

---

## 5. Inner pages (≥ 8 pages + 3 posts)

**Every inner page head (T1 small)**:
1. Full-bleed photo band 320 px (mobile 200 px, 16:9 crop) `.sp-parallax --sp-par: 6%` (mobile 4 %), with the static veil wave over its bottom 22 % (no rising layer on inner pages);
2. the medallion docks on its top edge (header);
3. **below the photo**, on #F3F6F6: the breadcrumb with slash dividers (0.75rem #6B7B7E, current #51686B), the docked-size H1 **3.375rem Outfit 300** (mobile 2.25rem), and a 1-line lead.

Then the content with T4 heads, then the foot CTA band (#E6EDEE: one line + primary button). Never the same image twice on a page.

1. **About** `/about/`, head img-15.
   - Founding story: founded **2013** by Dr **Ilse Marchetti** after years in a hospital renal unit seeing people only when things had gone wrong.
   - **T2 stack of 3 sheets**: 2013 opening, one room (img-05) · 2018 home BP diary programme (img-04) · now, a team of seven (img-13).
   - Values in 3 slash lines. Address.
2. **First consultation** `/first-visit/`, head img-03.
   - T4 "THE FIRST VISIT".
   - **T2 stack**: Before (what to send: letters, past lab sheets, medicine list; img-16) · On the day (08:30 samples, 90 min with the nephrologist; img-01) · After (results call within 5 working days, your pace agreed; img-17).
   - Then "What it costs" (2 rows from §14) and the button.
3. **Monitoring** `/monitoring/`, head img-04.
   - T4 "PACING".
   - **T2 stack of 4 sheets**, one per pace (§14 table), photos img-06, img-07, img-18, img-08.
   - Then a "Between visits" paragraph block (home diary, when to call).
4. **Conditions** `/conditions/`, head img-07.
   - T4 "WHO WE SEE".
   - Takeda facilities rows (left rows, right stacked photos img-09, img-16, img-14) for 5 conditions: chronic kidney disease stages 1–4 · high blood pressure, including resistant · protein or blood in the urine · after a kidney stone · kidney care in pregnancy planning.
   - Each row: 2 paragraphs and a "Usually seen" chip.
   - We do not run dialysis; stage 5 is shared with the hospital unit.
5. **Team** `/team/`, head img-13.
   - T4 "THE TEAM".
   - 7 people as long slashed rows: name / role / 2 lines / languages spoken, beside img-10 and img-12 placed in the right column.
6. **Stories** `/stories/`, head img-09.
   - The 3 stories in long form (≈ 200 w each), each with its two photos (Ruth: img-10 + img-17 · Daniel: img-11 + img-18 · Amara: img-12 + img-16), plus a slash fact line.
7. **Fees** `/fees/`, head img-17.
   - T4 "FEES".
   - The full table (same 6 rows as home) and the "What is included" list.
   - Two notes columns: insurance and receipts, cancellations (24 h, no fee).
8. **Visit** `/visit/`, head img-14.
   - Message-style layout: sticky docked title "Second floor, above the pharmacy" left, right column with address, the hours table, how to get there (tram, bus, parking), step-free access, what to bring.
   - img-15 (reception) inline.
9. **Book or ask** `/contact/`, head img-16.
   - Left 7 columns: H2 "Book a first consultation" + `shippress_form_slot` contact (§12).
   - Right 5 columns: phone, email, hours, what happens next (3 slash rows).
   - No reveal on the form column.
10. **Newsletter** `/newsletter/`, head img-02.
    - Standalone "The clinic letter": H2, what is in it (3 rows), how often (4 a year), then the newsletter slot.
11. **News** `/news/`: the posts page (empty content).
    - The list is Takeda news cards (date + chip + title + arrow square), 3-up in the offset column.
    - **Posts (3)**, category "Clinic notes", tags "blood pressure", "kidney function", "visits":
      - "How we read an eGFR trend across a year" (featured img-06)
      - "Keeping a home blood pressure diary that helps" (img-18)
      - "What changes on a Saturday morning visit" (img-15)
    - single.html: T1 head with the featured image, 720 px text column.
12. **Privacy** `/privacy/` and **Thanks** `/thanks/` (no reveal).

theme-meta `pages`: home, about, news, article, category, tag, newsletter (→ `/newsletter/`), contact (→ `/contact/`). Exactly one `posts` role page (`/news/`). Templates: front-page, page, single, archive, category, tag (copied from archive, label TAG), 404, search.

---

## 6. Colour (source `tok(a)`; reference relationship kept: pale quiet ground + one deep colour on labels/discs/giant words + photo as the only large colour field)
| Token | Hex | Share (home) | Source / note |
|---|---|---|---|
| ground | **#F3F6F6** | ~45 % | Takeda ground is cream #FFF7EE. **Replaced**: the plan fixes the blue-family palette aonibi and the rules forbid defaulting to cream/beige. Same lightness (−3 % L), hue moved to cool. Naganonaika ground #F1F8F8 (`tok(a)`) is almost identical. |
| white (cards, sheets front) | #FFFFFF | ~6 % | Takeda cards #FFFFFF on ground |
| mist panel | #E6EDEE | ~14 % | Takeda #F7ECE1 secondary ground, same step down, cool |
| veil | **#BFD0D6** (92 %) | ~8 % | Takeda veil **#B5CAE9**: same lightness (±3 %), hue shifted 20° toward aonibi so it stays in palette |
| sheet tones | #D5E0E2 / #E2EAEB / #EEF3F3 | in §3 | T2 dim steps |
| main (aonibi) | **#51686B** | ~8 % | plan hex. Takes the role of Takeda brand-700 #8A4940: chips, giant words, dots, dashes, medallion, footer band, links |
| main-deep | #3E5255 | hover / footer text | – |
| ink | #1F2D30 | headings, H1 | Takeda #3A2110 (darkest text) → cool |
| body | #4A5A5D | body text | Takeda #6D5D52 (−8 % L for AA on #F3F6F6: 6.6:1) |
| meta | #6B7B7E | dates, captions | Takeda #6D5D52 lightness |
| line | #C8D5D6 | hairlines | Takeda rules "1 px at 20 % brand" |
| accent | **#8A4940** | ≤ 2 % | **Takeda brand-700 exactly**: arrow glyphs, the active nav underline, card arrows, focus dot. Never a fill larger than 40 × 40. |
| error / success | #A8362B / #2F6B55 | forms only | – |

- First-screen saturated share: **target ≤ 10 %, cap 15 %**. The plan note caps it at 30 %; the reference measures 27.5 %. Naganonaika measures 1.4 %; ours sits between.
- No cream, no beige, no large accent fields. No blue scrubs in photos.

## 7. Type (font_direction: **sans**)
- **Latin display / headings: Outfit** (300, 400, 500). **Latin body / UI: Figtree** (400, 500, 600). Both sans; no serif anywhere (Takeda's Marcellus serif is not used, by plan direction; we keep its *light, large, airy* character with Outfit 300).
- **zh-TW**:
  - headings `"Outfit", "Noto Sans TC", "PingFang TC", "Microsoft JhengHei", sans-serif` (bundled Noto Sans TC subset, 300/400, display only);
  - body `"Figtree", "PingFang TC", "Microsoft JhengHei", "Noto Sans CJK TC", sans-serif` (no bundled CJK, no Japanese font).
- **ja**:
  - headings `"Outfit", "Noto Sans JP", "Hiragino Sans", "Yu Gothic", sans-serif` (bundled Noto Sans JP subset);
  - body `"Figtree", "Hiragino Sans", "Yu Gothic", "Noto Sans CJK JP", sans-serif`.
- Gothic (hei, gothic) only; never Ming/Mincho.
- Load every family via **theme.json `fontFamilies` + `fontFace`** (woff2 in `assets/fonts/`, listed in theme-meta `fonts[].files` with OFL licence files; names in readme.txt). Copy `shared/inc/editor-lang.php` → `inc/editor-lang.php` and require it (style.css uses `:lang()`). Editor and front end must match (`check-editor-fonts.mjs`, en + zh-TW). Build the zh-TW / ja subsets with the Hokuto / Hada workaround.
- CJK display ≈ 0.75 × the Latin size. CJK body line height 1.85. fr / de `hyphens: auto`.

| Role | Desktop / mobile | Weight / lh / tracking | Source token |
|---|---|---|---|
| Giant T4 word (largest) | `clamp(3.5rem, 1.9rem + 6.2vw, 8.5rem)` / 3.5rem | Outfit 300 / 1 / .08em uppercase | Takeda `.t-home-heading__en` clamp(5rem…11rem) 400 / 1 / .08em `tok(b)`, scaled ×.77 |
| Hero H1 | **4.5rem** / 2.75rem | Outfit 300 / 1.02 / −.01em | Takeda hero headline ~72 px light `tok(b)`; ≥ 4.25rem rule |
| Docked H2 (§2) / inner H1 | 3.375rem / 2.25rem | Outfit 300 / 1.08 | Takeda dock scale .75 `tok(g)` |
| Section H2 | 1.75rem / 1.5rem | Outfit 400 / 1.3 | – |
| T2 sheet H3 / story quote | 1.75rem / 1.375rem | Outfit 300–400 / 1.35 | Takeda h3 22 / 26.4 / 500, scaled |
| Row title (§4) | 1.75rem | Outfit 400 / 1.25 #51686B | Takeda facility names (accent colour) |
| Card title | 1.0625rem | Figtree 500 / 1.5 | Takeda news title ~18 px |
| Body | 1rem (message 1.0625rem) | Figtree 400 / 1.8 (message 2.0) | Takeda p 14–16 / ~1.9 `tok(b)` |
| Chip | 0.875rem (cards .75rem) | Figtree 600 | Takeda sub chip clamp(1rem…1.6rem) 600 |
| Eyebrow / index | 0.75–0.8125rem | Figtree 600 / .14em uppercase; index Outfit 400 | Takeda "#01" index |
| Nav | 0.9375rem | Figtree 500 / .04em | Naganonaika nav |

## 8. Spacing, radius, borders, buttons (source `tok(c)`, `tok(d)`)
- Header **88 px** (Takeda 98, trimmed so the card row fits), side padding 52 px. Content line 90 px. Offset column from `clamp(24px, 19.4vw, 280px)`, max 1108 px. Text measure 520–720 px.
- Section gaps 140 px (mobile 72). Row height in §4 ≥ 220 px (Takeda ~225).
- **Radius**: cards / photos 4 px (Takeda r 4); chips 8 px and pill chips 999; arrow squares 12 px; T2 sheets 8 px on the top corners; buttons 999 (pill). Inputs 6 px.
- **Borders / shadows**: hairlines 1 px #C8D5D6; arrow squares 1 px dashed #B8C8CA (Takeda dashed arrow squares, `ref/scroll-td-2600.png`). **No shadows** (Takeda none).
- **Primary button**: #51686B fill, white, Figtree 0.9375rem / 600, height 48, padding 0 28px, r 999, with a 28 px white circle holding a #8A4940 arrow at the right. Hover #3E5255, 0.4 s cubic-bezier(.25,.46,.45,.94). **Outline button**: 1 px #51686B, #51686B text, same size.
- **Footer**: band #51686B, white / #DCE5E6 text.
  - Row 1: medallion + wordmark left, slashed link row (6 links) right.
  - Row 2: 3 columns (address + phone; hours; newsletter slot, dark tokens).
  - Row 3: 0.75rem copyright + Privacy.

## 9. Scroll effects (from stage-a "scroll-effect candidates"; sp-scroll copied unchanged)
Three effects: **parallax**, **reveal--up** (with `sp-stagger`), **reveal--wipe**. No count, no marquee. CSS variables are set on `.sz-*` wrappers: `--sp-dur: .8s; --sp-ease: cubic-bezier(.25,.46,.45,.94); --sp-dist: 24px` (Takeda `mvLook` 0.8 s and easing, `tok(g)`).

| Effect | sp-* class | Where | Reference (trigger / time / easing) | Our values |
|---|---|---|---|---|
| Parallax | `sp-parallax` (+ `.sp-parallax__layer`) | hero media (+ veil layer), §2 cover, §3 sheet photos, inner heads | Takeda veil rise (scroll-linked, linear) + inner image 10 % drift (scroll-linked, linear) | see §10 |
| Up | `sp-reveal sp-reveal--up`, parents `sp-stagger` | §2 paragraphs, §4 rows (stagger), §5 feature text + cards, §6 list, §8 text, §9 cards; inner content groups | Takeda hero copy fade `mvLook` 0.8 s after load, cubic-bezier(.25,.46,.45,.94); Takeda lists are static, so reveal on them is our addition in Takeda timing | 0.8 s, 24 px, stagger step 0.12 s (default) |
| Wipe | `sp-reveal sp-reveal--wipe` | §4 right-edge stacked photos; the same photo column on `/conditions/` | Takeda veil = soft top-down cover; the wipe opens each stacked photo top-down like the veil lifting | spec default 1.1 s cubic-bezier(.77,0,.175,1); clip on the child |

Never on: the hero (§1), the T2 sheets themselves, the price table, forms and their sections, legal text, the header, the footer. No custom scroll listeners. Sticky is plain CSS (parents use `overflow: clip`, never `hidden`). Not in horizontal scrollers.

## 10. Parallax (required)
1. **Hero** (home §1): `div.sz-hero__media.sp-parallax`.
   - Photo img-01 (`figure > img`): `--sp-par: 6%` desktop, **4 %** ≤ 781 px.
   - Veil `.sz-veil.sp-parallax__layer`: `--sp-par: -14%` desktop, −8 % mobile, so it rises against the photo.
   - The foreground (H1, lead, button, cards) is **below** the media and never moves. The arc SVG and the pill sit outside the moving layers.
   - Reference: Takeda's scroll-driven veil `scaleY(0 → .75)` + photo, linear with scroll.
2. **Message** (home §2): Cover `.sp-parallax` with img-02 as background (`.wp-block-cover__image-background` moves) at `--sp-par: 10%` (mobile 6 %). Text stays in the inner container. Reference: the city photo appearing under the veil (`scroll-td-1500`).
3. **T2 sheet photos** (home §3; `/first-visit/`, `/monitoring/`, `/about/`): `figure.sp-parallax` `--sp-par: 10%` (mobile 6 %). Reference: philosophy-page inner image `translateY(distance * .1)`.
4. **Inner page heads**: `--sp-par: 6%` (mobile 4 %).
- All are static under prefers-reduced-motion, `?sp-static` and in the editor (the veil then rests at its 18 % band). `check-parallax.mjs` must measure ≥ 6 px on desktop and mobile.

## 11. Responsive
- **390 px first screen**: header 64 (inline medallion) → 4:3 photo with the veil band → text band (H1 2.75rem) → 2 × 2 cards. No vertical text, no absolutely positioned labels over text, no overlap, no horizontal scroll (`html, body { overflow-x: clip }`).
- **T2 stack ≤ 1023 px**: sticky off, sheets full width, tone steps kept, photo above text.
- **§2 Message ≤ 781 px**: sticky off, title above the paragraphs, cover min-height auto, overlay 92 % throughout.
- **§4 rows ≤ 1023 px**: the photo column moves under the rows as a 3-photo strip (3 columns, then 1 column at ≤ 600 px); chips wrap.
- **Price table** (`.sz-fees`, home §7 and `/fees/`):
  - **At ≥ 782 px it spans the full content width** (90 → 52 px edges; 100 % at 800 px), 3 columns: Item 34 % / What's included 48 % / Fee 18 %.
  - The **fee column is `white-space: nowrap; text-align: right`**, Outfit 400 1.25rem tabular, never cut: no `overflow: hidden` on the table or its wrapper, `table-layout: auto`, the description wraps.
  - Header row 0.75rem uppercase #6B7B7E. 1 px #C8D5D6 row rules.
  - **≤ 781 px every table (fees and hours) is stacked**: each row becomes a block (item bold, description, fee on its own line right-aligned), with the header row visually hidden but kept for screen readers.
- Feature story and Visit stack (photo first). The offset column becomes the normal column ≤ 1023 px. The team list goes to 1 column.
- Header links collapse into the overlay below 1024 px.

## 12. Forms (form contract v1: `steps/form-contract-v1` exists)
- Copy `pipeline/assets/forms/shippress-forms.php` → `inc/` and the forms CSS / editor JS → `assets/`, unchanged. Require them from functions.php. Forms are never in the first screen and never get sp-reveal (nor does their section).
- **Book or ask** `/contact/` (the booking page): the pattern calls `shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) )`.
  - `$fallback` is the `ob_start()`-buffered literal markup of the primary button "Email us to book" → `mailto:care@seimyaku-clinic.example?subject=<contact_subject>`, with the same class and markup as the theme button. It never links to `/contact/`.
  - With CF7 or WPForms present, the first published form renders.
  - **Recommended fields** (documented for site owners in readme and the page note):
    - Full name*, Email*, Phone*
    - Date of birth
    - Reason for visit (select: Kidney function results / High blood pressure / Protein or blood in urine / After a kidney stone / Other)
    - Referred by a doctor? (radio yes / no)
    - Preferred days (checkboxes Mon–Sat)
    - Message (textarea)
    - Consent* (checkbox linking `/privacy/`; "Please do not send results by email; bring them to the visit.")
- **Newsletter** `/newsletter/` (standalone page, not an alias of News): `shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'care@seimyaku-clinic.example', 'label' => _t('forms_email'), 'submit' => _t('forms_subscribe'), 'notice' => _t('forms_mail_notice'), 'subject' => _t('forms_mail_subject') ) )`.
  - Same slot on **home §10** (light ground) and in the **footer** (dark #51686B band).
  - MailPoet (explicit ID) or MC4WP preferred. CF7 / WPForms only via an explicitly configured newsletter form ID, never the contact form.
  - **Without plugins**: a required `type=email` field + submit performing a native mailto POST carrying the entered address. Visible notice: "Opens your email app. Send the message to receive the clinic letter; you are not subscribed yet." Never claim success.
- **Light tokens**:
  - `--sp-form-surface #FFFFFF`, `--sp-form-text #1F2D30`, `--sp-form-border #9FB2B4`
  - `--sp-form-accent #51686B`, `--sp-form-on-accent #FFFFFF`
  - `--sp-form-focus #8A4940` (2 px outline, 2 px offset), `--sp-form-radius 6px`
  - labels 0.875rem / 600 #1F2D30
  - error #A8362B (text + 1 px border + message under the field)
  - success #2F6B55 (text + 1 px left rule)
- **Dark tokens (footer #51686B)**: surface #FFFFFF, text #1F2D30, border #DCE5E6, accent #FFFFFF, on-accent #3E5255, focus #FFFFFF, labels and notice #FFFFFF / #DCE5E6, error text #FFD2CB, success #CDEBDD.
- Style every plugin class consistently (CF7, WPForms, MailPoet, MC4WP, Jetpack): input, textarea, select, checkbox / radio, label, submit, focus, error, success. Scope to the plugin classes; no global selectors.
- **Five-language strings** (en, zh-TW, ja, fr, de) as semantic keys in `inc/i18n/en.php`:
  - `forms_email`, `forms_subscribe` ("Send me the letter"), `forms_mail_notice`, `forms_mail_subject` ("Clinic letter");
  - `contact_email` ("Email us to book"), `contact_subject` ("First consultation request");
  - the field labels above.

  Extract with `L10N_SEMANTIC=1`. `form-runtime-check.php` must pass in all five languages, and `repo-gates.sh forms` must pass.

## 13. Images (IMAGERY: **photo**; 18 images, 0 cut-outs)
**STYLE** (one string for every image, passed as `IMAGE_STYLE`):
`High-key documentary clinical photograph, even soft daylight from large windows, cool pale rooms in white, pale grey and soft blue-grey, light wood accents, shallow depth of field with a soft out-of-focus foreground on one side, low saturation cool grade, unposed calm moments, diverse adult patients and clinicians in plain pale blue-grey or white clothing (no surgical scrubs), modern neutral international setting, 35mm lens, screens show only greyscale ultrasound shapes or blank charts, no text, no letters, no numbers, no logos, no brand names, no Japanese elements.`

| # | File | Subject / composition | Ratio | Used on (page · section) | Home |
|---|---|---|---|---|---|
| 01 | hero-scan-consult.webp | physician (40s) and patient (late 50s) side by side turned to a desk monitor with a greyscale kidney ultrasound, printed results between them, pen pointing; **blurred tea cup + folded envelope across the left 30 %**; figures in the right 55 % | 16:9 (2000 × 1125) | Home · hero; First visit · T2 "On the day" | ★ |
| 02 | street-morning.webp | quiet tree-lined residential street with low apartment buildings and a tram line in pale morning haze, from a slight height (Takeda city view) | 16:9 | Home · Message cover; Newsletter · head | ★ |
| 03 | first-consult-desk.webp | nephrologist listening, patient talking, papers and a water glass, window light | 16:9 | Home · T2 sheet 01; First visit · head | ★ |
| 04 | bp-diary.webp | patient at a kitchen table with an upper-arm blood pressure cuff and a paper diary | 16:9 | Home · T2 sheet 02; Monitoring · head; About · T2 2018 | ★ |
| 05 | ultrasound-room.webp | sonographer scanning a patient's flank in a pale room, monitor shape only | 16:9 | Home · T2 sheet 03; About · T2 2013 | ★ |
| 06 | lab-tubes.webp | gloved nurse labelling blood tubes in a rack, soft focus | 3:2 | Home · watch photo 1; Monitoring · sheet; post 1 | ★ |
| 07 | urine-sample.webp | sample cups and a dipstick strip on a pale tray, nurse's hand | 4:5 | Home · watch photo 2; Monitoring · sheet; Conditions · head | ★ |
| 08 | dietitian-plate.webp | dietitian showing a plate model and food cards to a patient | 3:2 | Home · watch photo 3; Monitoring · sheet | ★ |
| 09 | story-ruth-walk.webp | woman in her 60s walking in a park path in morning light, seen from the side | 3:2 | Home · feature story; Stories · head; Conditions · rows | ★ |
| 10 | story-ruth-tea.webp | the same woman at home, cup in hand, reading a results letter | 1:1 | Home · feature offset; Stories · Ruth; Team · inline | ★ |
| 11 | story-daniel-desk.webp | man in his 40s at an office desk checking a wrist reminder, BP cuff in his bag | 3:2 | Home · story card 1; Stories · Daniel | ★ |
| 12 | story-amara-bike.webp | woman in her late 30s locking a bicycle outside a clinic entrance, water bottle | 3:2 | Home · story card 2; Stories · Amara; Team · inline | ★ |
| 13 | team-corridor.webp | three clinicians talking in a bright corridor, one holding a tablet | 4:5 | Home · team; Team · head; About · T2 now | ★ |
| 14 | entrance-stairs.webp | clinic entrance on the second floor reached by a bright stair and lift door, plain glass door, blank sign | 3:2 | Home · visit; Visit · head; Conditions · rows | ★ |
| 15 | reception.webp | calm reception desk with a coordinator greeting a patient, plants | 16:9 | About · head; Visit · inline; post 3 | |
| 16 | results-folder.webp | hands sorting past lab sheets and letters into a folder on a table | 3:2 | First visit · T2 "Before"; Contact · head; Conditions · rows; Stories · Amara | |
| 17 | results-call.webp | nurse on a headset call at a desk by a window, notebook open | 3:2 | First visit · T2 "After"; Fees · head; Stories · Ruth | |
| 18 | home-cuff-close.webp | close-up of an upper-arm cuff on a forearm resting on a table, soft morning light | 3:2 | Monitoring · sheet; Stories · Daniel; post 2 | |

- webp, ≤ 300 KB, ≤ 2000 px. Generate one at a time with `scripts/grok-image.sh`. Read every image and regenerate it on any text, letters, digits on screens, a logo, a broken face or hand, saturated surgical blue, or style drift (warm / dusk).
- No image twice on one page. **14 on home**, 18 in the theme.

## 14. Fixed facts (brand.md must match; identical in all five languages)
- **Name** Seimyaku Clinic, nephrology and blood pressure. **Founded 2013** by Dr Ilse Marchetti.
- **Address** (fictional): 2nd floor, 41 Alder Row, Wrenfield (above the Alder Row pharmacy; step-free lift).
- **Phone** +00 31 555 0148 (fictional). **Email** care@seimyaku-clinic.example.
- **Hours**:
  - Mon–Fri 08:30–17:30, **Wednesday until 19:30**
  - Sat 09:00–12:30
  - Sun and public holidays closed
  - Fasting blood samples from 08:30.
- **First consultation**: **90 minutes**.
  1. Send letters, past lab sheets and a medicine list beforehand.
  2. Samples at 08:30 that morning.
  3. 90 minutes with the nephrologist.
  4. Results call within **5 working days**.
  5. Your monitoring pace agreed.
- **Monitoring pace** (set with you, reviewed each year):
  - kidney function stable, stages 1–2: **once a year**
  - stage 3a: **every 6 months**
  - stage 3b: **every 3 months**
  - stage 4: **every 6–8 weeks**, shared with the hospital renal unit

  Everyone has a yearly review in their month of joining.
- **Fees** (6, self-paying; insured patients are billed under their plan):
  | Item | Fee |
  |---|---|
  | First consultation, 90 min (incl. blood and urine panel) | €180 |
  | Follow-up visit, 30 min | €75 |
  | Blood and urine panel (eGFR, electrolytes, urine ACR) | €48 |
  | Kidney ultrasound | €120 |
  | 24-hour blood pressure monitor | €95 |
  | Dietitian session, 45 min | €70 |

  Note: results calls and the home BP diary are included. Cancellations up to 24 h before are free.
- **People** (7):
  - Dr Ilse Marchetti (founder, nephrologist)
  - Dr Kwame Asante (nephrologist)
  - Dr Hana Reyes (hypertension physician)
  - Tomas Lindqvist (lead nurse)
  - Priya Nair (renal dietitian)
  - Elena Varga (sonographer)
  - Samuel Obi (patient coordinator)
- **Stories** (3; process, not outcomes):
  - **Ruth, 64**: stage 3a, seen every 6 months for 8 years, yearly ultrasound.
  - **Daniel, 47**: high blood pressure found at a work check, 24-hour monitor, home diary, follow-up every 3 months in year one, then every 6.
  - **Amara, 38**: after a kidney stone, dietitian session and a yearly review.
- **Hero cards**: as in §3. **Footer**: address, hours, phone, email.
- No guarantees, no awards, no statistics, no real brands or media, no real people. We do not provide dialysis or emergency care (say so on Conditions and Visit: "In an emergency, call your local emergency number.").

## 15. Home acceptance checklist
- [ ] First screen matches `full-bleed / below-photo / card-row`: full-width photo, headline **below** it on #F3F6F6, the 4-card row fully visible at 1440 × 900 and 1280 × 800. No text over the photo except the arc, veil and pill.
- [ ] KV #1–8 visible:
  - img-01 shows two people side by side at a scan monitor, with the blurred tea / envelope foreground at the left;
  - the arc is drawn;
  - the wave veil band is at the photo foot;
  - the pill is at bottom-left;
  - the medallion docks on the photo top edge.
- [ ] T1: the veil layer rises in `?sp-motion` (check-parallax ≥ 6 px). The §2 cover shares the same wave and veil colour. The docked title (3.375rem / 300) stays sticky left while the 3 paragraphs scroll on the right half.
- [ ] T2: 3 sticky sheets with width steps 1180 / 1260 / 1340 and tone steps, header rows staying visible, 16:9 photos with 10 % parallax.
- [ ] T3: medallion-split, slash-separated single top menu; slashes reused in cards, team list, footer and breadcrumbs.
- [ ] T4 giant light words left-aligned (FOLLOW-UP, FOLLOWED, FEES); §4 photos bleed to the right edge, stacked flush.
- [ ] 14 home images, 18 total, no repeats within a page, 0 cut-outs.
- [ ] H1 4.5rem; giant word up to 8.5rem. Outfit / Figtree in the editor and on the front end; zh-TW / ja Noto Sans TC / JP heading stacks.
- [ ] Price table full width at 800 and 1280, fee column nowrap and right-aligned, not cut; stacked at 390.
- [ ] 390 px: no overlap, no vertical labels, no absolute labels over text, no horizontal scroll; the card row is 2 × 2.
- [ ] Effects only parallax / up / wipe. None in the hero, sheets, table or forms. `?sp-static` and reduced motion are static (arc drawn, veil at rest).
- [ ] ≥ 600 English words, ≥ 3 narrative paragraphs ≥ 20 words. All numbers match §14.
- [ ] Newsletter slot in §10 and the footer, not in the first screen. Exactly one top menu. First-screen saturation ≤ 10 % (cap 15 %).

## 16. Similarity table (target ≈ 80 %, values from `reference-tokens.md`)
| Dimension | Reference value (token) | Seimyaku Clinic |
|---|---|---|
| Ground / cards / text | #FFF7EE cream / #FFFFFF r4 / #6D5D52 `tok(a)` | #F3F6F6 cool (plan palette, no cream) / #FFFFFF r4 / #4A5A5D |
| Deep colour and its uses | brand-700 #8A4940: chips, h2, giant word, arrow discs `tok(a)` | #51686B on chips, giant words, dots, medallion; **#8A4940 kept** for arrows |
| Veil | #B5CAE9, wave mask, 0 → ~70 % at scroll 700 `tok(a)(f)` | #BFD0D6 / .92, same wave mask, 18 % at rest, rises with parallax −14 % |
| First-screen saturation | 27.5 % (Takeda) / 1.4 % (Naganonaika) | ≤ 10 % (cap 15 %) |
| Hero photo | full-bleed 100vw × 100vh, focus-pull left third, physician at a screen `tok(e)` | full-bleed 100vw × 46vh, focus-pull left 30 %, physician + patient at a scan; headline below (plan) |
| Headline | ~72 px light, 2 lines, lower-left; docks at .75 `tok(b)(g)` | 4.5rem Outfit 300 below the photo; docked at .75 = 3.375rem in §2 |
| Giant section word | clamp(5rem, 2.89rem + 9.01vw, 11rem) / 400 / lh 1 / .08em `tok(b)` | clamp(3.5rem, 1.9rem + 6.2vw, 8.5rem) / 300 / 1 / .08em |
| Label chip | padding .8rem 1.2rem, r .6–1rem, 600 `tok(b)` | padding .5rem .9rem, r 8, 600 + 8 px dot |
| Layout grid | header 98 / 52 side; copy x 90; message x 720; news column 1108 from x 280 `tok(c)` | header 88 / 52; content x 90; message from 50 %; card / news column 1108 from x 280 |
| Section rhythm | 120–160 px; facility rows ~225 px with 1 px rule + index `tok(c)` | 140 px; rows ≥ 220 px, 1 px rule + 32 × 2 dash + "#01" |
| Radius / shadow | cards r4, chips r6–10, no shadow `tok(d)` | cards r4, chips r8, no shadow |
| Decoration | curved 1 px white hairline; 32 × 76 scroll pill; dashed arrow squares; diagonal nav slashes + 96 px medallion (Naganonaika) `tok(f)` | identical shapes: arc 1 px white 60 %, 32 × 76 pill, dashed 40 px arrow squares, slashes + 72 px medallion |
| Imagery | high-key clinical documentary, right-edge stacked 3:2 photos, recruit card with offset small photo `tok(e)` | same: high-key clinical documentary, right-edge stacked photos (§4), feature story with offset 1:1 |
| Motion | copy fade 0.8 s cubic-bezier(.25,.46,.45,.94) after 1 s; veil scroll-linked; dock .75; scale-back stack; inner image 10 % `tok(g)` | H1 fade 0.8 s same easing (delay .4 s); veil layer parallax −14 %; sticky docked title; sticky stack with width / tone steps; sheet photos 10 %; reveals 0.8 s same easing |
