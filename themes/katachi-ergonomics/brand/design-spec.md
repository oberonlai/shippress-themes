# Katachi Ergonomics — design spec (stage 1, design director)

Type: **landing** (theme-meta `"type": "landing"`, page_structure **landing-longform**, category business-services; WooCommerce-compatible but not required). Industry: a workplace ergonomics consultancy that **watches a working desk before it recommends a change** and sells one thing: the **readiness review** (booked before an office move, a furniture purchase or a return to the office).
Primary reference: **https://www.okamura.co.jp/** (Okamura top page; workplace pages open on people at a desk, photograph first, one enquiry). Tokens: `brand/reference-tokens.md`, cited as **T(a)…T(g)**. Screens: `ref/okamura-first.png`, `ref/scroll-okamura-{900,1800,2700}.png`. Secondary: none.
**Imagery: photo** (stage-a IMAGERY = photo). One real-photography STYLE string, high-key documentary, pale cool light (§10). 0 cut-outs.
Font direction: **sans**. Latin headings **Hanken Grotesk**, Latin body **Public Sans**; zh-TW / ja **Noto Sans TC / Noto Sans JP** (gothic). No serif or Mincho anywhere. The reference's UD humanist grotesque becomes Hanken Grotesk (headings) and Public Sans (body).
Similarity target: about **80%** to the reference in palette relationships, image treatment, motion, decoration and layout rhythm. Photographs, copy and logo are all ours; nothing of Okamura's is reproduced.
Landing track: home is **one long conversion page**. Header = one `core/navigation` of **in-page anchors** + one CTA button "Book a review" (a `core/buttons` block, not a second menu). Inner pages are reached from the footer and from in-page links. The one repeated CTA everywhere is **"Book a readiness review"** → `/book/`.
Class prefix: `ke-`. Pattern slugs `katachi-ergonomics/<name>`. Radius **0 everywhere** (T(d)) except the docked hero card (10px top corners only).

---

## 1. Signature techniques (3 + 1 support, obvious at a glance, none may be softened)

### T1: White notice card docked flush-left at the lower left of a full-bleed pale photograph, with a wide-tracked one-line headline lying across the photo
- **Source**: okamura.co.jp first screen (`ref/okamura-first.png`; T(c), T(d), T(f)). The hero is a full-bleed pale blue-white photograph 1425×810 (90% of a 900 viewport); a heavy, wide-tracked (≈0.2em) one-line headline ≈4rem lies across the left two thirds at about 47% height; a **white card 478×186 at x 30**, padding 24, radius ≈10px on the top corners only, sits at the lower left (bottom 30px above the photo edge) holding a 20px title, two 13px lines and a **250×40 grey button with a thin arrow**. Header links float over the photo at the top right.
- **Ours** (home §2 `katachi-ergonomics/kv`, echoed in home §11 `book` and every inner page head): full-bleed photograph **P01**, height `clamp(640px, 90svh, 960px)`; one-line headline **"Watch the desk first."** Hanken Grotesk 700 **4.25rem**, tracking **.14em**, `#3E4C59`, `white-space: nowrap` (≥1024), left x **36px**, baseline at **≈45%** of the hero height; white card **478px wide** (min-height 186), `left: 30px; bottom: 30px`, padding **24px**, `border-radius: 10px 10px 0 0`, no shadow (T(d) no shadows), holding: title "Readiness review" (Hanken 600 1.25rem `#3E4C59`), two lines (Public Sans .8125rem/1.8 `#333333`, ≈28 words), and the CTA button **280×44** (ref 250×40, widened for the label and the 44px touch target), ground `#3E4C59`, text `#FFFFFF` Public Sans 600 .8125rem ls .04em, **radius 0**, label left, a thin 18px arrow (1px line + small head, inline SVG) at the right, padding 0 16px.
- **Must not soften**: the card is **really flush to x 30 at the lower left over the photo** (never centred, never floating mid-page, never with a drop shadow); the photo is **full-bleed edge to edge** and pale; the headline is **one line at ≥1024**, wide-tracked (≥.12em), heavy (700) and **lies on the photo** (no panel behind it); the button is a square dark bar with a thin arrow, not a pill.

### T2: Three equal abutting columns — photo flush on top, pale panel below with a centred title, one line and 2-up white arrow tiles
- **Source**: okamura.co.jp business columns right under the hero (`ref/scroll-okamura-900.png`; T(c), T(d), T(e)). Three columns 472px wide with **4px gaps**, edge to edge across the viewport; a **1.84:1** photograph flush on top (472×256, no radius); below it a tall **#F5F5F3 panel** with a centred 20px title, a centred one-line subtitle and a **2-column grid of white link tiles** (191×65, padding 15, gap 10, 12px label left, thin arrow right, no border, no shadow).
- **Ours** (home §4 `katachi-ergonomics/includes`, anchor `#includes`, "What a readiness review includes"): three columns `calc((100vw - 8px) / 3)` with **4px gaps** (the gaps show the white page), full-bleed; photo **1.84:1** flush on top (**I01 / I02 / I03**), `object-fit: cover`, radius 0; panel `#F5F5F3`, padding **72px 40px 80px**, all three panels the **same height** (flex stretch). Inside each panel, centred: number label "01 / 02 / 03" (Public Sans 600 .75rem ls .2em `#666666`), title (Hanken 500 **1.25rem** `#333333`): **"Workstation fit" / "Light, noise and layout" / "Movement through the day"**; subtitle one line (Public Sans 1rem `#333333`); then one ¶ (≈35 words, Public Sans .9375rem/1.8 `#333333`, left-aligned, max-width 360px, centred block); then the **white tile grid**: 2 columns, gap **10px**, tiles min-height **65px**, padding **15px**, `#FFFFFF`, label Public Sans 500 .8125rem `#333333` left, thin 14px arrow (1px) right, no border, no shadow, hover: ground `#3E4C59`, text and arrow `#FFFFFF` (transition .3s, `transition-delay: 0s`). Tiles link to anchors of the Review page: col 01 (4 tiles) "Chair and seat" `/review/#chair`, "Desk height" `/review/#desk`, "Screen and keyboard" `/review/#screen`, "Laptop set-ups" `/review/#laptop`; col 02 (2 tiles) "Light and glare" `/review/#light`, "Noise and layout" `/review/#layout`; col 03 (2 tiles) "Standing and sitting" `/review/#standing`, "Breaks and movement" `/review/#breaks`. The unequal tile counts (4 / 2 / 2) are deliberate, as in the reference (6 / 1 / 2).
- **Must not soften**: **exactly three equal columns, edge to edge, 4px gaps**, photo flush on top at 1.84:1, a pale panel under each, **white rectangular tiles with arrows** in a 2-up grid. No cards with shadows, no rounded corners, no icons instead of photos, not inside a 1200px container.

### T3: Offset photo flush to one viewport edge with a white card overlapping its inner lower corner; mirrored row with the photo flush to the other edge and a white notch cut into its inner edge beside a title and a long thin arrow
- **Source**: okamura.co.jp mission / company rows (`ref/scroll-okamura-1800.png`, `-2700.png`; T(e), T(f)). Row A: a wide photo (≈1131×730, ~79% of the width) **flush to the left viewport edge**; a white card (≈350×255) overlaps its **lower inner (right) corner** and continues onto the white page, holding a title, three lines and a **60px long thin arrow**. Row B (mirrored): the photo flush to the **right** edge (starts x 294); a **white notch** (252×190) is cut into its left edge; the title and the long arrow sit at x 122, beside the notch.
- **Ours** (home §5 `katachi-ergonomics/visit`, anchor `#visit`, "How the visit is run": rows for steps 02, 03, 04; home §9 `people` uses one row B):
  - **Row A** (`ke-offset ke-offset--a`): photo `width: 79vw` (1138 at 1440), aspect **1.56:1** (1131×730 ratio), flush left (x 0), radius 0. Card `ke-offset__card`: white, **380×280** (min), padding **40px**, `position: absolute; left: calc(79vw - 252px); top: 52%` of the photo (overlap 252px into the photo, the rest on the white page), z 2. Card content: step label "STEP 02" (Public Sans 600 .75rem ls .2em `#666666`), title (Hanken 500 1.5rem `#333333`), ¶ ≈35 words (Public Sans .9375rem/1.8), long arrow link (a **60px** 1px line with a 7px head, `#333333`, followed by nothing; the link's accessible name is the step title + " — details", in markup as visually hidden text).
  - **Row B** (`ke-offset ke-offset--b`): photo `width: 75vw` (1080), aspect 1.56:1, **flush right** (starts x 360). The **notch** is a white block **320×260** at the photo's left edge, `top: 30%` of the photo (`.ke-offset__notch`, an empty `div aria-hidden` absolutely placed over the photo, ground `#FFFFFF`). The text block (`ke-offset__text`, x **96**, width **424**, vertically centred on the notch, z 2) sits on white: step label, title, ¶ ≈35 words, long arrow. It reaches into the notch area, never onto the photo.
  - Row spacing: **160px** between rows; section top padding **120px** (T(c)).
- **Must not soften**: photos are **really flush to a viewport edge** (no margin on that side), large (≥75vw), with **no radius**; the card **really overlaps** the photo corner (≥200px overlap) and is pure white without shadow; row B has a **real white notch** in the photo edge; the link marker is the **long thin arrow**, not a button.

### T4 (support): Vertical "Top" micro label with a 1px line, fixed bottom-right
- **Source**: the fixed vertical "PAGE TOP" with a 1px 40px line (`ref/scroll-okamura-1800.png`, T(f)).
- **Ours**: in the footer template part, a link `#top` (`ke-pagetop`): `position: fixed; right: 28px; bottom: 32px`, a 1px × 40px vertical line `#333333` above the word **"Top"** (in markup, not CSS `content`), `writing-mode: vertical-rl`, Public Sans 600 .6875rem ls .2em `#333333`. **Shown at ≥1024px only** (no vertical text on mobile). Every page.

### Continuation on inner pages (T1 on all, T2 on 3, T3 on 6; at least 4 required)
Every inner page opens with the **T1 page head** (`katachi-ergonomics/page-head`): white header above; full-bleed photo **1440×480** (mobile 300), `sp-parallax` `--sp-par: 6%` (mobile 4%); a white card **≥560px wide**, flush **x 30**, `bottom: 0` (its lower edge on the photo's lower edge, so it reads as docked), radius 10px top corners, padding 32px 32px 28px, holding a label ("THE VISIT"), the h1 (Hanken 700 3.25rem ls .06em `#3E4C59`) and a ≤30-word lead. The T4 "Top" label is on every page.
| Page | T1 page head photo | T2 abutting columns | T3 offset rows | Notes |
|---|---|---|---|---|
| About | A01 | **3 columns** "Watch first / Change the least / Write it down" (photos V02, V03, V04) | row A: the founding story (T01) | daily routine ¶; team ruled list |
| The Review | K01 | **3 columns** = the three parts, expanded, each with its tiles as in-page anchors (I01, I02, I03) | — | 8 anchored check sections (`#chair` … `#breaks`) as ruled rows |
| The Visit | R01 | — | **4 rows A/B/A/B** = the 4 steps (F01, V02, V03, V04) | day timetable table; what we need from you |
| Fees | F01 | — | row B: "What the plan looks like" (V04) | full 7-item price table |
| Field notes | I03 | — | **3 rows A/B/A** = the 3 cases (C01, C02, C03) | names of companies withheld |
| Book (contact) | B01 | — | row B: "Before you write" (P01) | form slot + mailto fallback |
| Next openings (newsletter) | W01 | **3 columns** without photos (panel + tiles only): "What you get / When it arrives / How to leave" | — | form slot on the ink panel |
| Journal / single / archive / category / tag | K01 (archive) / featured image (single) | — | — | posts as ruled rows with 1.84:1 thumbs |
| Privacy / Terms / Thanks | W01 / K01 / W01 (head 360px) | — | — | text pages, 760 column |

---

## Key visual concept

**(1) Reference first screen, story, signature motion.** Okamura opens on a pale, almost white **blue-grey space**. Five people in white clothes stand **with their backs to us**, looking up at a drifting cloud of translucent cubes, each cube holding a small photograph of a real workplace (offices, schools, shops). A heavy, **wide-tracked one-line headline** crosses the middle of the picture; a **white card is docked at the lower left** with a short title, two lines and a grey arrow button; header links float at the top right over the photo. **Story:** *"people first, then the places built for them"* — the company looks at people before it builds the space. **Signature motion:** a slow **fade slider** (2s cross-fades every 5s) where each slide **zooms gently** as it enters; the headline **rises letter by letter** (700ms delay, 80ms per letter); further down, blocks **fade up 30px in 1.2s**, columns arrive in a .3s / .6s stagger, and images settle from **scale 1.05 with a 1px blur** to rest.

**(2) Our translation: an ergonomics consultancy.** The same pale blue-white, full-bleed, people-first picture — but instead of people looking at many places, it is **one person looking closely at one place**: a documentary photograph of a **consultant crouched beside an employee at a sit-stand desk, one hand raised flat to mark the top of the screen against the employee's eye line**, while the office carries on behind them (colleagues soft and out of focus, window light, pale grey-blue walls). The reference's floating cube-photos (many workplaces observed) become **three hairline observation markers** pinned to the photo — *Screen height*, *Elbow angle*, *Foot support* — the things the consultant is looking at. The wide-tracked headline **"Watch the desk first."** lies across the upper middle; the docked white card offers the one action, **"Book a readiness review"**. Story: *"We watch the desk before we recommend a change."* Same image type (one high-key real photograph of people at work in a pale cool space), same composition (full bleed, people right of centre, headline across, card docked lower left, links top right) and the same motion idea (a slow zoom on entry, the headline rising, the markers appearing one by one like the cubes, the photo drifting slower than the page on scroll).

**(3) KV checklist** (all six are built in the home first screen at 1440×900 and visible without scrolling; images listed in §10):
| # | Reference element | Our counterpart | Position (1440×900) | Motion | Image |
|---|---|---|---|---|---|
| 1 | Pale blue-white full-bleed ground, people photographed in a calm bright space | Full-bleed high-key photo: consultant crouched beside an employee at a sit-stand desk, hand marking screen height; office behind, window light; left-to-right wash `rgba(242,247,251,.6) → transparent` over the left 60% | whole hero, x 0–1440, y 0–810 (`clamp(640px, 90svh, 960px)`) | `sp-parallax` `--sp-par: 8%` (mobile 5%) on the photo layer; load zoom of the img 1.05 → 1, 2s ease | **P01** |
| 2 | Floating cloud of cube-framed workplace photos | Three **observation markers**: white square tags "Screen height", "Elbow angle", "Foot support" (Public Sans 500 .75rem ls .08em `#3E4C59`, padding 6px 12px), each joined by a 1px `#3E4C59` line (48–96px) to a 7px tea dot `#A8743A` on the marked spot of the photo | over the people, right half: tag 1 ≈ x 74% y 20%; tag 2 ≈ x 80% y 50%; tag 3 ≈ x 70% y 76% (final x/y set on the actual P01 so each dot touches screen top, elbow, foot; ≥24px clear of headline and card at 1280/1440/1920) | fade-in .6s ease, .3s stagger, after a .9s delay (load, transform 8px + opacity; motion-only) | (P01) |
| 3 | Heavy wide-tracked one-line headline across the photo | "Watch the desk first." Hanken Grotesk 700 4.25rem, ls .14em, `#3E4C59`, one line | x 36, baseline ≈ y 405 (45%) | rises: translateY 20px → 0 + opacity, .9s ease, .7s delay (ref textillate 700ms start) | — |
| 4 | White card docked bottom-left: title, two lines, grey arrow button | White card 478 × ≥186, radius 10px top corners: "Readiness review" / two lines / ink button "Book a readiness review →" 280×44 | x 30–508, bottom 30 (y ≈ 594–780) | none | — |
| 5 | Header links floating top-right over the photo, logo left | One top bar 80px, transparent over the photo (top gradient `rgba(255,255,255,.55) → 0`, 140px): wordmark left x 30; anchor menu right (Includes · The visit · Fees · Field notes · People) + button "Book a review" | y 0–80 | none | — |
| 6 | Fixed vertical "PAGE TOP" with 1px line | Fixed vertical "Top" with a 1px 40px line | bottom-right, right 28, bottom 32 (≥1024 only) | none | — |

---

## 3. Home page: block order

Grid: full bleed for the hero, T2 columns, T3 photos and the band; content column **1080px** centred for text sections (fees, cases, people list); narrow centred column **720px** for statements. Section top padding **120px** (T(c)), title → statement **60px** (T(c)), section bottom **120px**; mobile **72px / 72px**. Body copy ≈ 620 English words; narrative ¶ (≥3 of ≥20 words): §3 (2), §4 (3), §5 (3), §8 (3), §9 (1).
Anchors: `#includes` §4, `#visit` §5, `#fees` §7, `#cases` §8, `#people` §9, `#book` §10. `html { scroll-behavior: smooth }` under `prefers-reduced-motion: no-preference` (ref 700ms anchor scroll); `scroll-margin-top: 24px` on anchored sections.

| # | Block (pattern slug) | Purpose | Layout | Photo(s) | Copy | Motion |
|---|---|---|---|---|---|---|
| 1 | Header (part `header-overlay` on home, `header` elsewhere) | brand + the one anchor menu + CTA | home: `position: absolute; inset: 0 0 auto; z 10`, transparent (top white gradient), 80px; inner pages: static white 80px, 1px `#E6E7E8` bottom line. Wordmark left x 30: "KATACHI" Hanken 700 1.125rem ls .24em `#3E4C59` + "ERGONOMICS" Public Sans 500 .625rem ls .4em below; `core/navigation` right (Public Sans 500 .875rem ls .06em `#333333`, gap 32): **Includes · The visit · Fees · Field notes · People** (`/#includes` … so they work from inner pages); then `core/buttons` "Book a review" (ink ground, white, radius 0, 40px tall, padding 0 18px) → `#book` on home / `/book/` elsewhere | — | 5 links + 1 button | none |
| 2 | `kv` | **KV** (§Key visual), T1 | full-bleed photo + wash + headline + markers + docked card | P01 | headline 4 words; card title 2 + ≈28 words | photo layer `sp-parallax` 8%; load zoom; headline rise; marker fade (no reveal) |
| 3 | `intro` | **narrative**: why we watch first (ref one-line statement under the hero) | white, centred 720 column: section title "We watch before we recommend" (Hanken 500 1.875rem / 1.4, ls .04em, `#333333`, centred); 60px; 2 ¶ (≈55 + 45 words, Public Sans 1rem/1.8, centred text) | — | ≈100 words | `sp-reveal sp-reveal--up` on the column |
| 4 | `includes` (`#includes`) | **what a readiness review includes** (T2) | title "What a readiness review includes" + one statement line centred (60px gap), then the three abutting columns (§1 T2) | I01, I02, I03 | 3 × (title, subtitle, ¶ 35, tiles) ≈ 130 words | columns: parent `sp-stagger`, each column `sp-reveal sp-reveal--up` (delays .3 / .6s, theme override); each column figure `sp-reveal sp-reveal--zoom` |
| 5 | `visit` (`#visit`) | **how the visit is run** (T3) | title "How the visit is run" + statement "One call, one day on your floor, one written plan." + a single line in the 720 column: "Step 01 is a free 30-minute scoping call; the rest happens at your desks." with long arrow to `/visit/`; then **Row A** step 02 "Walk the floor" (V02), **Row B** step 03 "Sit with each desk" (V03), **Row A** step 04 "Write it down, then check" (V04) | V02, V03, V04 | intro 20 + 3 × (title + ¶ 35) ≈ 130 words | photo figures `sp-reveal sp-reveal--zoom`; cards/text `sp-reveal sp-reveal--up` |
| 6 | `band` | **parallax** pause: the floor as a whole (§7.2) | full-bleed Cover 1440×640 (mobile 420), **R01** background, `sp-parallax` `--sp-par: 10%` (mobile 6%), wash `linear-gradient(90deg, rgba(242,247,251,.65) 0%, rgba(242,247,251,0) 60%)`; foreground: one wide-tracked line **"One desk at a time."** Hanken 700 3rem ls .14em `#3E4C59`, x 36, vertically centred, plus one sentence below (Public Sans 1rem `#333333`, max 420px, ≈22 words) | R01 | ≈26 words | Cover background parallax only |
| 7 | `fees` (`#fees`) | prices (§9 items 1–5) | white; title "What a review costs" + statement line, centred; **price table 1080 wide**: col 1 item (Hanken 500 1.0625rem `#333333`) + note under it (Public Sans .875rem `#666666`), col 2 price (Public Sans 600 1.0625rem, tabular-nums, `nowrap`, right), 1px `#E6E7E8` row rules, row padding 22px 0; under the table: note (.875rem `#666666`) "Prices exclude VAT. Travel within 40 km of Northvale is included." and long arrow "All fees and terms" → `/fees/` | — | ≈60 words | **none** (price table) |
| 8 | `cases` (`#cases`) | **proof**: three field notes | panel ground `#F5F5F3` full-bleed; title "Field notes" + statement; 1080 column: **3 ruled rows** (1px `#DADCD8` top rules): left a **1.84:1** photo 368×200 radius 0; right (gap 48): meta "NOTE 01 · 24 desks · call centre" (Public Sans 600 .75rem ls .2em `#666666`), title (Hanken 500 1.375rem), ¶ ≈30 words, long arrow → `/cases/#note-0n`. Footnote .8125rem: "Company names withheld. What changed is what the people at those desks told us." | C01, C02, C03 | 3 × (title + ¶ 30) ≈ 120 words | rows: parent `sp-stagger`, rows `sp-reveal sp-reveal--up` |
| 9 | `people` (`#people`) | the seven people (no portrait grid) | **T3 Row B**: T01 flush right 75vw, white notch, text at x 96: label "THE PEOPLE", title "Seven people, one way of looking", ¶ ≈40 words, long arrow → `/about/`; then in the 1080 column a **two-column ruled list** of the 7 names (name Hanken 500 1.125rem `#333333` · role Public Sans .875rem `#666666`, 1px rules, row 64px) | T01 | ≈60 words + 7 names | figure `sp-reveal--zoom`; text `sp-reveal--up`; list no effect |
| 10 | `book` (`#book`) | **the one booking band** (T1 echo) | full-bleed photo **B01** 1440×640 (mobile 360 + card below in flow); white card docked flush **x 30, bottom 30**, 478 wide, radius 10px top: title "Book a readiness review" (Hanken 600 1.25rem), 2 lines (.8125rem/1.8) "The scoping call is free. Reviews from €1,450 for up to 10 desks; visit days are usually about 3 weeks out.", the same ink button **"Book a readiness review →"** → `/book/` | B01 | ≈35 words | none (static; no parallax here) |
| 11 | `openings` | waitlist (newsletter slot, §11) | panel `#F5F5F3`, 1080 column, two columns 5/7: left label "NEXT OPENINGS", title "No dates that suit you yet?" (Hanken 500 1.5rem), one sentence ≈25 words; right the **newsletter `shippress_form_slot`** (email + submit + notice) | — | ≈30 words | **none** (form) |
| 12 | Footer (part `footer`) | address, hours, links, T4 | ground `#3E4C59`, text `#FFFFFF` / `#C9D0D6`; 1080 column, 3 columns: wordmark (white) + address + phone + email / hours ruled list / link list as paragraph links (About · The Review · The Visit · Fees · Field notes · Journal · Next openings · Book · Privacy · Terms — **not** a second navigation); © line .75rem; T4 "Top" fixed label lives here | — | | none |

**Home photo positions: 13 images, all different** (P01, I01, I02, I03, V02, V03, V04, R01, C01, C02, C03, T01, B01); ≥8 required.

### First-screen composition
- **Desktop 1440×900**: header overlay y 0–80. Hero `ke-kv` (Group, `sp-parallax`, `--sp-par: 8%`) height `clamp(640px, 90svh, 960px)` = 810. Children in this order:
  1. `.sp-parallax__layer` (Group, absolute inset 0) containing `figure > img` **P01**, `object-fit: cover; object-position: 62% 45%` (people in the right half; their heads below y 200 so the top gradient never touches a face). Load zoom on the **img** (not on the layer): `@keyframes ke-kvzoom { from { transform: scale(1.05) } }` 2s ease, only under `html.sp-js:not(.sp-no-motion)` in `prefers-reduced-motion: no-preference`.
  2. Wash `ke-kv__wash` (absolute, decorative): `linear-gradient(90deg, rgba(242,247,251,.6) 0%, rgba(242,247,251,.15) 55%, rgba(242,247,251,0) 75%)` + top `linear-gradient(180deg, rgba(255,255,255,.55), rgba(255,255,255,0) 140px)`.
  3. Markers `ke-kv__marks` (`aria-hidden="true"` group; tag text is real markup, no CSS `content`).
  4. Headline `h1.ke-kv__title` x 36, baseline ≈ 45% (y ≈ 365–420), one line, max right edge ≈ x 1020.
  5. Card `ke-kv__card` x 30–508, bottom 30.
  Nothing else in the first screen (no columns, no form, no table, no badge). The white page begins at y 810; the §3 title is not required above the fold.
- **1024–1439**: same composition; headline `clamp(3rem, 1rem + 4.2vw, 4.25rem)`, still one line; markers shift to x ≥ 66%; card unchanged.
- **782–1023**: header becomes white in flow (not overlaid); hero 560px with the photo only + markers hidden; headline and card move **below the photo, in flow**: headline 3rem wraps to 2 lines, card becomes a white block with a 1px `#E6E7E8` frame, full width minus 30px each side; the three marker labels become an in-flow ruled list of three items under the card (tea dot + label).
- **Mobile 390×844**: header 64px white: wordmark left, the navigation's own overlay toggle (44×44) right; the "Book a review" header button is hidden <600px (the card carries the CTA). Photo 390×360 (`object-position: 66% 45%`, parallax `--sp-par: 5%`); below it in flow: headline **2.5rem** / 1.15, ls .06em, 2–3 lines; then the card as a full-width `#F5F5F3` panel (padding 24px 20px): title, 2 lines, button full width 44px. **No vertical writing, no absolutely positioned label or marker over text, nothing overlaps**; markers are hidden on the photo and listed after the card. The T4 "Top" label is hidden.

### Comparison with recent themes' home orders (must not match)
| Theme | Home order | Katachi difference |
|---|---|---|
| Akane House | transparent header + full-bleed Cover wordmark/info bar > narrative > 4 ragged tiles > 3-col sticky day > letterbox parallax band > menu + price table > ruled names > visit photo + hours > dark reservation band > letter > journal rows | no wordmark-on-Cover or info bar: a one-line headline + a **docked card** on the photo; three columns are **edge-to-edge abutting with tiles**, not sticky day columns; offset rows flush to the viewport edge; no letterbox (our band is 640px tall, full photo); no journal on home |
| Noka Cheese | split header > hero blur-to-focus > sticky statement > 2×3 card mosaic > parallax counter band > 3-step choose > quote > reserve board + price list > journal thumbs > letter band > arch band | no split header, no mosaic, no counters, no 3-step choose cards, no quote, no arch; steps are **offset photo rows with overlapping card / notch** |
| Hatoba College | centred header > framed window hero > editorial intro > five stage bars > berth-date block > quay parallax band > photo trio > fees ledger > story > journal rows > navy letter | no framed window (hero is edge to edge); no bars; our three photos are **abutting columns with panels**, not a trio; fees are a plain ruled table on white; no journal |
| Hisagi Neurology | sticky bar > stadium window + capsule row > disc lead > sticky symptom disc + callouts > capsule band + principle cards in a disc > parallax room with card > before/after discs > fee table > visit pill > journal rows > letter panel > fixed booking card | **no rounded shapes at all** (radius 0, no stadium, discs, capsules, bubbles, pills); our markers are square tags on the photo itself, not callouts around a disc; no floating booking card; the parallax band carries a wide-tracked line, **not a card** |
| **Katachi Ergonomics** | overlay header > full-bleed KV with markers + docked card > centred intro > three abutting columns with tiles > offset rows A/B/A > parallax band with one wide-tracked line > fee table > field-note rows on panel > notch row + ruled names > photo band with docked card > openings form panel > ink footer + fixed vertical "Top" | the only one built from edge-flush rectangles: docked card, abutting columns, offset rows with overlap and notch |

---

## 4. Inner pages (11 pages + 3 posts)

Slugs identical in all five locales. Every page: T1 page head (§1), body on the 1080 / 720 grids, T4 "Top".
| Page (slug) | Role | Key content |
|---|---|---|
| About (`about`) | about | founded **2014** in Northvale by **Ilse Varga** (physiotherapist, 12 years in hospital rehab first); T3 row A founding story (T01): "she kept seeing the same shoulders in clinic; the cause was a desk"; **T2 three columns** of principles (V02 / V03 / V04): 01 Watch first (≈40 words) · 02 Change the least (adjust what you have before buying) · 03 Write it down (every change in a plan the team can keep); "**A day on a review**" ¶ describing the daily routine (08:30 arrive and walk the floor, 20-minute desk sessions, 16:30 findings conversation, the report written the next two days); milestones as ruled rows (2014 founded · 2017 remote desk reviews added · 2020 hybrid / home-desk reviews · 2023 Next openings list started); the **7 people** as a ruled list (name, role, 2 sentences; no portrait grid) |
| The Review (`review`) | service | lead ¶ "what readiness means" (before a move, a furniture purchase, a return to the office); **T2 three columns** (I01, I02, I03) with tiles as in-page anchors; then the **8 checks** as anchored ruled rows, each: h3 + what we look at + what we usually change (≈50 words): `#chair` Chair and seat · `#desk` Desk height · `#screen` Screen and keyboard · `#laptop` Laptop set-ups · `#light` Light and glare · `#layout` Noise and layout · `#standing` Standing and sitting · `#breaks` Breaks and movement; "What you receive" (the written plan: one page per desk + a floor summary; a purchase list only if needed); "What we will not do" (sell furniture, take commission, diagnose medical conditions — we refer to a physiotherapist or doctor); closing CTA: a plain ink bar (full width, 160px) with the same "Book a readiness review →" button |
| The Visit (`visit`) | process | **4 steps as T3 rows A/B/A/B** (F01, V02, V03, V04) with the §9 step texts expanded (≈60 words each); **day timetable** (table: time / what happens; stacks on mobile); "What we need from you" ruled list (a floor plan or a phone photo of it, a list of desks and names, one quiet room for 20 minutes, a contact on the day); "What your team does" (keeps working; each person gives us 20 minutes at their own desk); "After the visit" (plan in 5 working days; 6-week check) |
| Fees (`fees`) | prices | **full price table, 7 items** (§9), 1080 wide; what every review includes (scoping call, visit day, written plan, 6-week check); travel (within 40 km included; beyond, €0.45/km); cancellation (free up to 5 working days before the visit day; later 25% of the fee); invoicing (invoice after the plan is delivered, 30 days); VAT note; T3 row B "What the plan looks like" (V04) |
| Field notes (`cases`) | proof | the **3 field notes** (§9) as T3 rows A/B/A (C01, C02, C03), each with anchors `#note-01…03`: the floor, what we saw, what we changed, what people said at the 6-week check (≈180 words); footnote: company names withheld; no promised outcomes |
| Book (`book`) | contact | lead: "Tell us about the floor"; T3 row B "Before you write" (P01): how many desks, where, why now (move, purchase, return), and preferred weeks; contact form slot + mailto fallback (§11) in a white block with a 1px `#E6E7E8` frame; phone line hours; address; "We reply within 2 working days and offer a scoping call." |
| Next openings (`waitlist`) | newsletter (waitlist / early access) | standalone signup page: "Visit days fill about 3 weeks ahead. Join the list and hear first when a month opens."; **T2 columns without photos** (panel + white tiles): What you get (dates as they open, one desk tip) · When it arrives (first Monday of each month, about 3 minutes' read) · How to leave (one link in every email); newsletter form slot (§11) on the **ink panel** |
| Journal (`journal`) | posts page (role `posts`, empty content) | archive: ruled rows with a 1.84:1 thumb (240×130) left, date + category, title |
| Privacy (`privacy`) | legal | what we collect through the form and the list, why, how long, rights; plain text, 720 column, no effects |
| Terms (`terms`) | legal | booking, cancellation (matches Fees), liability (advice, not medical treatment), payment; no effects |
| Thanks (`thanks`) | post-signup | "Thank you — check your email app": explains that the fallback opens an email that must be sent; link back to the home page and to Field notes |
| Posts (3) | article | 1 "What we look at in the first ten minutes at a desk" (featured V03; category Desk notes `desk-notes`; tags `chairs`, `screens`) · 2 "Standing desks: when standing helps, and when it does not" (featured I03; category Desk notes; tags `sit-stand`, `breaks`) · 3 "Launch note: the Next openings list" (featured W01; category News `news`; tags `openings`) |

theme-meta `pages` / demo `screens`: home → `/`, about → `/about/`, news → `/journal/`, article → post 1, category → `/category/desk-notes/`, tag → `/tag/chairs/`, newsletter → `/waitlist/`, contact → `/book/`.
Top menu (the only `core/navigation`): Includes · The visit · Fees · Field notes · People (anchors `/#…`) + button "Book a review". Footer: paragraph links (see §3 #12).
Templates: `front-page` (header-overlay), `page`, `page-book`, `page-waitlist` (or page), `page-legal` (privacy/terms/thanks, short head), `single`, `archive`, `category`, `tag` (copy of archive, label "TAG"), `home` (posts page), `404`, `search`.

---

## 5. Colour (T(a): white base, pale neutral panel, dark grey ink, a pale blue-white photo ground, one tiny accent)

Reference values are kept: base `#FFFFFF`, panel `#F5F5F3`, text `#333333`, secondary `#666666` (T(a)). Two changes, with reasons: (1) the reference uses `#666666` grey for the card button and has no brand ink; ours uses the row hex **`#3E4C59` (blue ink)** for headings, the CTA button and the footer, so the theme has an identity — it is greyer and lighter than Hatoba's navy `#3F5260`; (2) the reference's saturated **red** brand accent is replaced by a **tea** `#A8743A` of the same tiny share — red markers on a desk photo would read as an alarm or a fault, and the row palette is ink-blue / tea.
| Token (theme.json slug) | Hex | Share (first screen) | Source / reason |
|---|---|---|---|
| `base` | **#FFFFFF** | ~45% of the page; card | T(a) #FFFFFF exact |
| `panel` | **#F5F5F3** | ~25% of the page (columns, field notes, openings) | T(a) #F5F5F3 exact |
| `sky` | **#F2F7FB** | hero wash, mobile hero panel under the photo, page-head fallback | T(a) hero ground #CDE0EE → #F2F7FB (light end) |
| `mist` | **#DCE6EE** | photo grade target, hover on tiles in the dark footer | T(a) hero ground mid (#CDE0EE +4% L) |
| `text` | **#333333** | body, titles in sections | T(a) #333333 exact; 12.6:1 on white |
| `sub` | **#666666** | labels, notes, meta | T(a) secondary grey #666666 exact; 5.7:1 on white, 5.4:1 on panel |
| `ink` | **#3E4C59** | headline, CTA button, wordmark, footer ground; ≤8% of the first screen | row hex; replaces the grey button; 9.0:1 on white |
| `line` | **#E6E7E8** | hairlines, table rules, header bottom line | ref has no borders; a near-white rule for tables only |
| `line-panel` | **#DADCD8** | rules on the panel | panel −5% L |
| `tea` | **#A8743A** | marker dots, focus ring, 2px "marker" underline on the active anchor; ≤1% | replaces the ref red accent (<3%); 3.9:1 on white (never body text) |
| `footer-sub` | **#C9D0D6** | secondary text on ink | 7.2:1 on `ink` |
| `error` | **#B3412F** | form errors | 5.3:1 on white |
| `success` | **#2F6B55** | form success | 6.1:1 on white |
**Ratio across the site**: white 50% · panel 25% · photos (pale cool) 15% · ink 6% · text 3% · tea <1%.
**First-screen saturated share** (`scripts/check-first-screen.py`): target **≤ 5%**, hard cap **15%** (reference <5%; row note cap 30%). P01 must be graded pale and cool (no saturated clothing: employee in light grey or pale blue, consultant in an off-white shirt and grey trousers; no red or orange objects on the desk). If the check exceeds 5%, regenerate P01 with paler clothing rather than changing tokens.

---

## 6. Typography (sans)

Fonts load **only via theme.json `fontFamilies` + `fontFace`** (woff2 in `assets/fonts/`, OFL, every file listed in theme-meta `fonts[].files` with `licenseFile`; every family name in readme.txt), so the editor iframe and the front end render the same faces. style.css has `:lang(` rules → copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it in functions.php; `check-editor-fonts.mjs` must pass in en and zh-TW.
- `hanken-grotesk`: Hanken Grotesk variable 400–700 (Latin, Latin-ext). Headings, wordmark, numbers in titles.
- `public-sans`: Public Sans variable 400–600 (Latin, Latin-ext). Body, labels, nav, buttons, tags, prices.
- `noto-sans-tc`: Noto Sans TC 500 + 700 (headings only; zh-TW subset of every zh-TW demo string + punctuation; use the Hokuto/Hada substitute subsetting method, the repo subset script is known broken).
- `noto-sans-jp`: Noto Sans JP 500 + 700 (headings only; ja subset, same method).
Stacks:
- Latin headings: `"Hanken Grotesk", "Helvetica Neue", Arial, sans-serif`
- Latin body: `"Public Sans", "Helvetica Neue", Arial, sans-serif`
- `:root:lang(zh-TW)` headings: `"Hanken Grotesk", "Noto Sans TC", "PingFang TC", "Microsoft JhengHei", sans-serif`; body: `"Public Sans", "PingFang TC", "Microsoft JhengHei", "Heiti TC", sans-serif` (no bundled TC and no JP font in body: repo contract).
- `:root:lang(ja)` headings: `"Hanken Grotesk", "Noto Sans JP", "Hiragino Sans", "Yu Gothic", sans-serif`; body: `"Public Sans", "Hiragino Sans", "Hiragino Kaku Gothic ProN", "Yu Gothic", Meiryo, sans-serif`.
- CJK: heading sizes × 0.75 (home h1 3.1875rem, ls .2em — the reference's own CJK tracking), body line-height **1.85**, ls .04em; the hero headline may wrap to 2 lines in CJK below 1280. fr / de: `hyphens: auto` on body, h2, h3; the hero headline in fr/de uses `white-space: normal` below 1280 (longer phrase) but stays ≤2 lines; uppercase labels `hyphens: none`.
| Role | Font / weight | Size (desktop → mobile) | Line-height | Tracking | Source |
|---|---|---|---|---|---|
| h1 home (KV) | Hanken 700 | **4.25rem** (theme.json `xx-large` = `clamp(2.5rem, 1rem + 4.2vw, 4.25rem)`) → 2.5rem | 1.1 | **.14em** (mobile .06em) | T(b) ≈4rem heavy, ls ≈.2em (reduced for longer Latin line) |
| band line | Hanken 700 | 3rem → 2rem | 1.15 | .14em | T1 echo |
| h1 inner | Hanken 700 | 3.25rem → 2.25rem | 1.15 | .06em | |
| section title (h2) | Hanken 500 | **1.875rem** (30px) → 1.5rem | 1.4 | .04em | T(b) section title 30px |
| column / card title | Hanken 500–600 | **1.25rem** (20px) | 1.5 | .02em | T(b) column title 20px, card title ~20px |
| row title (T3) | Hanken 500 | 1.5rem → 1.25rem | 1.4 | .02em | |
| body | Public Sans 400 | **1rem** (16px) | **1.8** | 0 | T(b) 16px / 28.8px exactly |
| card body | Public Sans 400 | **.8125rem** (13px) | 1.8 | 0 | T(b) card body 13px/1.8 |
| tile label | Public Sans 500 | .8125rem (ref 12px, +1px for Latin legibility) | 1.4 | .02em | T(b) tile 12px |
| small label "STEP 02" | Public Sans 600 caps | .75rem | 1.4 | .2em | |
| nav | Public Sans 500 | .875rem | 1 | .06em | ref header links |
| marker tag | Public Sans 500 | .75rem | 1 | .08em | |
| price | Public Sans 600 tabular-nums | 1.0625rem | 1.6 | 0 | |
theme.json fontSizes: `small` .8125rem, `medium` 1rem, `large` 1.25rem, `x-large` 1.875rem, `xx-large` clamp(2.5rem → **4.25rem**) — the largest size is **4.25rem**.

---

## 7. Motion and scroll (sp-scroll)

Copy `pipeline/assets/sp-scroll/` unchanged to `assets/`; enqueue the JS in the head (not deferred) and add the CSS as an editor style. Only `sp-*` classes; no scroll listeners, GSAP, AOS, Lenis or jQuery (the reference uses jquery.inview + slick + textillate; we do not). **Three effects** on any page: reveal--up (+stagger), reveal--zoom, parallax.

### 7.1 Chosen effects (from stage-a "scroll candidates", source okamura.co.jp)
| Effect | sp-* | Where | Reference trigger / time / easing | Ours |
|---|---|---|---|---|
| Block fade-up | `sp-reveal sp-reveal--up` | home §3 column, §4 columns, §5 cards / row-B text, §8 rows, §9 text; inner: T3 cards, check rows, step rows | jquery.inview adds a class on entering → CSS `fadeUpAction` **1.2s ease**, translateY **30px** → 0 + opacity | theme CSS: `.ke-site { --sp-dist: 30px; --sp-dur: 1.2s; --sp-ease: ease; }` (30px is the sp limit) |
| Column / row stagger | `sp-stagger` (parent) | home §4 three columns, §8 three rows; Review / About T2 columns | order classes, animation-delay **.3s / .6s** | override in theme CSS: `.ke-stagger3.sp-stagger > .sp-reveal:nth-child(2) { --sp-delay: .3s } … :nth-child(3) { --sp-delay: .6s }` (class `ke-stagger3` added beside `sp-stagger`) |
| Image settle | `sp-reveal sp-reveal--zoom` on `figure` | T2 column photos, T3 row photos (home + inner), §9 T01 | inview, `zoomOutAction` **1.2s ease**, scale 1.05 + 1px blur + 10px rise → rest, delayed .3/.6/.9s | `--sp-dur: 1.2s` on `.sp-reveal--zoom` (theme override of the 1.6s default; scale 1.06 built-in); no blur (not in sp-scroll) |
| Parallax | `sp-parallax` | hero, home §6 band, every page head | (ref: hero slider slow zoom / fade) | §7.2 |
**Not** on the hero, forms, the price table, the timetable, hours, footer or legal text. Hero load motions (not scroll effects, theme CSS, all inside `@media (prefers-reduced-motion: no-preference)` and `html.sp-js:not(.sp-no-motion)`, so they never run in `?sp-static`, the editor, print or no-JS): P01 img zoom 1.05 → 1 (2s ease; ref slick 2000ms + zoom class); headline rise (translateY 20px → 0 and opacity 0 → 1, .9s ease, .7s delay; ref textillate 700ms start — one rise for the whole line instead of per letter, so the text stays one text node); markers fade (opacity + translateY 8px, .6s ease, delays .9 / 1.2 / 1.5s; ref .3s order stagger).
Tile hover (T2): ground → `ink`, .3s ease, `transition-delay: 0s` (§4.3 of the sp spec). Anchor scroll: CSS `scroll-behavior: smooth` (ref 700ms easeOutQuart).

### 7.2 Parallax (required)
| Where | Block / structure | Background layer | Foreground (static) | `--sp-par` desktop / mobile | Reference motion |
|---|---|---|---|---|---|
| **Hero** (primary) | Group `ke-kv sp-parallax`, `overflow: clip` | `.sp-parallax__layer` (Group, absolute inset 0) containing `figure > img` **P01** | wash, markers, h1, card are **siblings** of the layer (never inside it) | **8% / 5%** | slick fade slider with a slow zoom on each slide: the photo moves on its own, slower than the page |
| **Band** (home §6) | Cover `ke-band sp-parallax`, 640px (mobile 420) | `.wp-block-cover__image-background` **R01** | wash + "One desk at a time." + sentence (Cover inner container, not moving) | **10% / 6%** | same idea on a full-bleed photo (ref mission photo band) |
| **Page heads** (all inner pages) | Group `ke-head sp-parallax` | `.sp-parallax__layer` > head photo | the docked card (sibling) | **6% / 4%** | |
Mobile keeps parallax at the smaller speeds. Reduced motion, `?sp-static`, no JS and the editor: no movement and no scale (sp-scroll built-in). Acceptance: `check-parallax.mjs` desktop + mobile, displacement difference ≥6px, 0 under reduced motion; ≥3 reveals hidden before entering and final after; nothing transparent after scrolling to the bottom.

---

## 8. Responsive rules (hard)

- **390px first screen**: header 64px white in flow; photo, then headline, then the card panel — all in flow. **No vertical writing** (T4 hidden <1024), **no absolutely positioned label or marker over text** (markers hidden on the photo <1024 and listed in flow after the card), nothing overlaps (auto-gates). `scrollWidth == innerWidth`.
- **T2 columns**: ≥1024 three across with 4px gaps; 600–1023 **one column per row, photo left 45% / panel right** (still flush, 4px gaps between rows); <600 stacked: photo full width 1.84:1, panel below (padding 40px 20px 48px), tiles 2-up stay (min-height 56px), ≥44px touch height.
- **T3 rows**: ≥1024 as §1. 782–1023: photo 88vw flush to its edge, card / text below the photo, overlapping its bottom edge by 48px on the flush-opposite side (still white, no shadow); notch hidden. <782: photo full width (flush both edges), card in flow under it with a negative top margin of 32px and 20px side inset; the long arrow stays; **no absolute positioning**.
- **Price table ≥782px**: the table spans the **full width of its 1080 container** (`width: 100%`, `table-layout: auto`); the price column is `white-space: nowrap; text-align: right; padding-right: 0; width: 1%` (shrink to content) and is **never clipped** at 800 and 1280. No `overflow: hidden` on the table wrapper; no fixed column widths in px.
- **Any table <782px** (fees, timetable, hours): stacked. Each row becomes a block: item / time on its own line (Hanken 500), the note below, the price on the right of the first line (flex, `nowrap`), 1px `#E6E7E8` between rows. No horizontal scrolling.
- **Field-note rows <782**: photo full width 1.84:1 above the text.
- **People list**: 2 columns ≥782, 1 column below.
- Touch targets ≥44px; the nav overlay toggle is the core navigation's own button. CJK at every width: horizontal only. `html, body { overflow-x: clip }`.

---

## 9. Fixed facts (identical on every page and in all five locales; brand.md is the source)

- **Name**: Katachi Ergonomics. **Founded** 2014 by Ilse Varga. **Address**: Unit 4, 18 Foundry Row, Northvale (fictional). **Phone** 010 736 2240. **Email** hello@katachi-ergonomics.example (every mailto uses this). Service area: on-site within 40 km of Northvale; remote desk reviews anywhere.
- **Hours**: office and phone Mon–Fri 08:30–17:30 (phone line 09:00–16:00) · visit days Tue, Wed, Thu (08:30–17:00 at your site) · Fri reports only · Sat, Sun and public holidays closed.
- **Audience**: office and operations managers, HR and facilities leads at teams of 5–60 people, before an office move, a furniture purchase or a return to the office.
- **Tone**: calm, observant, practical; no medical claims, no promised results, no sales talk.
- **Fees (7 items, excl. VAT)**:
  1. Scoping call (30 min, phone or video) **Free**
  2. Readiness review — small team (up to 10 desks; one visit day, written plan, 6-week check) **€1,450**
  3. Readiness review — floor (11–30 desks; one visit day with two consultants, written plan, 6-week check) **€2,900**
  4. Single-desk assessment (one person, 60 min on site, written note) **€220**
  5. Adjustment session (half day on site after a review: fitting chairs, screens and keyboards) **€480**
  6. Remote desk review (one person, 40 min by video, written note) **€140**
  7. Additional desks beyond 30 (per desk, same day) **€85**
  Travel within 40 km included, beyond €0.45/km. Cancellation free up to 5 working days before; later 25% of the fee. Home shows items 1–5; the booking band says "Reviews from €1,450 for up to 10 desks".
- **Process, 4 steps**: 01 **Scoping call** (30 min, free; we agree the desks, the date and what readiness means for you) · 02 **Walk the floor** (visit day 08:30–10:00: light, noise, routes, how the room is used) · 03 **Sit with each desk** (20 minutes per person at their own desk, up to 15 desks per consultant per day; small fixes made on the spot) · 04 **Write it down, then check** (written plan within 5 working days: one page per desk + a floor summary; 6-week check on site, 90 minutes). Findings conversation with the manager at 16:30 on the visit day.
- **Three parts of a review**: 01 Workstation fit (chair, desk height, screen, keyboard, laptop) · 02 Light, noise and layout · 03 Movement through the day (standing and sitting, breaks, routes).
- **People (7)**: Ilse Varga, founder and lead consultant (physiotherapist) · Daniel Osei, senior consultant (workstation fit) · Mei Lindqvist, consultant (light and layout) · Rafael Moreno, consultant (occupational therapist; movement and breaks) · Noor Haddad, consultant (accessibility and adjustable equipment) · Tom Brennan, visit coordinator (dates, floor plans, questionnaires) · Sofia Brandt, report editor (written plans).
- **Field notes (3, company names withheld)**: 01 **"Standing all day"** — a 24-desk customer-service floor; new sit-stand desks used standing for whole shifts; plan: alternate every 30–45 minutes, anti-fatigue mats at six desks, two headsets with longer cables; at the 6-week check most people said end-of-day sore feet were rarer (home shows this first) · 02 **"Good chairs, set wrong"** — a 12-desk architecture studio; the chairs were fine but set for someone else; one adjustment session, no purchases · 03 **"Laptops on the kitchen table"** — a hybrid team of 8; remote desk reviews, laptop stands and separate keyboards lent, one rule: the laptop screen at eye height.
- **Next openings list**: first Monday of each month, about 3 minutes' read: the month's open visit days and one desk tip.
- **Milestones**: 2014 founded · 2017 remote desk reviews · 2020 hybrid / home-desk reviews · 2023 Next openings list.

---

## 10. Images (17 photographs, all real photography, one STYLE; 13 on home)

**STYLE** (identical for every image):
`IMAGE_STYLE="high-key documentary photograph, bright soft daylight from large windows, pale cool colour grading in blue-white and light grey, calm modern international office or workspace, natural unposed moment, diverse adults in light neutral clothing (off-white, pale grey, pale blue), natural skin tones, real hands, shallow depth of field, 35mm lens, clean uncluttered composition with generous negative space, no text, no letters, no numbers, no logos, no brand names, no signage, no screens showing text or interfaces (screens dark or showing soft abstract colour)"`
Generate one at a time with `IMAGE_STYLE="<STYLE>" scripts/grok-image.sh out.webp "<subject>"`; check every image with Read and regenerate any with text, legible writing, logos, broken faces or hands, saturated colours or a different look. ≤300 KB, ≤2000px, webp. No cut-outs. Papers and plans show **abstract lines only**.
| # | File | Subject (prompt core) | Ratio / size | Used on (page · block) | Home |
|---|---|---|---|---|---|
| P01 | `kv-desk.webp` | a consultant (woman, 40s, off-white shirt, grey trousers) **crouched** beside a seated employee (man, 30s, pale blue shirt) at a white sit-stand desk, her **left hand raised flat at the top edge of the monitor** level with his eyes, looking at him; behind them an open office carries on, colleagues soft and out of focus, large windows; **the two people occupy the right 45% of the frame**, the left half is calm pale office and window light | 16:9, 2000×1125 | Home §2 KV · Book T3 row | ✔ |
| I01 | `fit-measure.webp` | a consultant's hands holding a tape measure from the floor to the underside of a desk while an employee sits, knees and chair visible | 1.84:1, 1840×1000 | Home §4 col 01 · Review col 01 | ✔ |
| I02 | `light-window.webp` | a consultant holding a small handheld light meter beside a monitor near a bright window, a row of desks receding, soft glare on the desk surface | 1.84:1, 1840×1000 | Home §4 col 02 · Review col 02 | ✔ |
| I03 | `standing-talk.webp` | two colleagues talking at a raised sit-stand desk in the afternoon, one standing with a mug, the other seated, relaxed | 1.84:1, 1840×1000 | Home §4 col 03 · Review col 03 · Field notes head · post 2 | ✔ |
| V02 | `walk-floor.webp` | a consultant with a clipboard walking slowly down the aisle of an open-plan office in morning light, people at work on both sides, seen from behind and slightly to the side | 1.56:1, 1872×1200 | Home §5 row 02 · Visit row 02 · About col 01 | ✔ |
| V03 | `sit-desk.webp` | a consultant kneeling at a desk chair adjusting the seat-height lever while the employee sits and watches, both smiling slightly, close medium shot | 1.56:1, 1872×1200 | Home §5 row 03 · Visit row 03 · About col 02 · post 1 | ✔ |
| V04 | `plan-table.webp` | a consultant and an office manager at a pale meeting table looking at a printed plan with abstract desk diagrams (no text), a closed laptop and two cups | 1.56:1, 1872×1200 | Home §5 row 04 · Visit row 04 · About col 03 · Fees T3 row | ✔ |
| R01 | `floor-wide.webp` | wide view of a bright open office floor with sit-stand desks set at different heights, a few people working, large windows, morning, lots of pale ceiling and floor | 2.25:1, 2000×890 | Home §6 parallax band · Visit head | ✔ |
| C01 | `note-callcentre.webp` | a customer-service floor: people with headsets at standing desks, one sitting on a high perch stool, soft grey anti-fatigue mats, pale light | 1.84:1, 1840×1000 | Home §8 note 01 · Field notes row 01 | ✔ |
| C02 | `note-studio.webp` | an architecture studio: large desks with rolled drawings (abstract lines), task chairs, a designer leaning back as a consultant adjusts the armrest | 1.84:1, 1840×1000 | Home §8 note 02 · Field notes row 02 | ✔ |
| C03 | `note-kitchen.webp` | a laptop raised on a simple stand with a separate keyboard on a pale kitchen table at home, a person typing, window light, a plant | 1.84:1, 1840×1000 | Home §8 note 03 · Field notes row 03 | ✔ |
| T01 | `team-bench.webp` | four consultants (diverse, 30s–50s) around a workbench in a bright small studio sorting tools: tape measures, a goniometer, a light meter, chair parts; candid, mid-conversation | 1.56:1, 1872×1200 | Home §9 row B · About T3 row | ✔ |
| B01 | `kit-bag.webp` | at the end of a visit day, a consultant's hands packing a canvas bag on an empty desk: a tape measure, a light meter, a notebook with blank pages; window light, empty chairs behind | 2.25:1, 2000×890 | Home §10 book band · Book head | ✔ |
| A01 | `studio.webp` | the consultancy's small studio in the morning: shelves with sample chairs and monitor arms, a long table, big window, nobody yet or one person arriving | 3:1, 2000×667 | About head | |
| K01 | `arm-adjust.webp` | close-up of a hand turning the tension knob of a monitor arm above a keyboard, pale desk, shallow focus | 3:1, 2000×667 | Review head · Journal / archive head · Terms head | |
| F01 | `floorplan.webp` | hands with a pencil over a printed office floor plan (abstract lines only), a tape measure and a phone face down beside it, top-down | 3:1, 2000×667 (shown also 1.56:1 crop) | Fees head · Visit row 01 | |
| W01 | `empty-desk.webp` | an empty sit-stand desk at dawn by a tall window, chair tucked in, a plant, the city soft outside | 3:1, 2000×667 | Next openings head · Privacy head · Thanks head · post 3 | |
Per-page check (no repeats on one page): Home P01 I01 I02 I03 V02 V03 V04 R01 C01 C02 C03 T01 B01 · About A01 T01 V02 V03 V04 · Review K01 I01 I02 I03 · Visit R01 F01 V02 V03 V04 · Fees F01 V04 · Field notes I03 C01 C02 C03 · Book B01 P01 · Next openings W01 · Journal K01 + thumbs · posts: their featured image only · Privacy W01 · Terms K01 · Thanks W01.

---

## 11. Forms (form contract v1: `steps/form-contract-v1` exists)

Copy `pipeline/assets/forms/shippress-forms.php` unchanged to `inc/`, and the CSS and editor JS unchanged to `assets/`; `require` it in functions.php. Patterns stay literal block markup with a small PHP island for `shippress_form_slot`. **No form in the home first screen; no `sp-reveal` on any form or its wrapper.**
- **Book (`book`, contact)**: after "Before you write", inside a white block (1080 column, 1px `#E6E7E8` frame, radius 0, padding 48px 56px; mobile 28px 20px): `shippress_form_slot( kind: contact )`. The fallback is the buffered literal mailto button **"Write to Katachi"** (`wp-element-button`, ink, radius 0, href `mailto:hello@katachi-ergonomics.example?subject=<forms_contact_subject>`), with the sentence "Opens your email app. Tell us how many desks, where, and why now." It never links to `/book/` itself. Recommended CF7 fields (readme only, not created by the theme): name*, email*, company, number of desks (select: 1–10 / 11–30 / 31+), reason (select: office move / furniture purchase / return to the office / other), preferred weeks, message (textarea*), consent checkbox* ("Katachi may contact me about this request"), submit "Send request".
- **Next openings (`waitlist`, newsletter)**: standalone page. The form panel sits on the **ink** ground (`#3E4C59`, radius 0, padding 56px 64px, text `#FFFFFF`): `shippress_form_slot( kind: newsletter, email: hello@katachi-ergonomics.example, label: forms_email, submit: forms_subscribe, notice: forms_mail_notice, subject: forms_mail_subject )`.
- **Home §11 `openings`**: the same newsletter slot on the `#F5F5F3` panel (light ground). The footer has a link to `/waitlist/` only (no second slot).
- Plugin order (shared helper): newsletter MailPoet (explicit id) → MC4WP; CF7 / WPForms only through an explicit dedicated id. Contact CF7 → WPForms. Without plugins the newsletter still shows a required `type=email` field + submit, as a native mailto POST with the notice text; the contact page shows the mailto button.
- **Tokens** (style.css, mapped to theme.json presets):
  - light (default): `--sp-form-accent: var(--wp--preset--color--ink)` #3E4C59; `--sp-form-on-accent: #FFFFFF`; `--sp-form-radius: 0`; `--sp-form-focus: var(--wp--preset--color--tea)` #A8743A (2px outline, offset 2px); `--sp-form-surface: #FFFFFF`; `--sp-form-text: #333333`; field border 1px `#B9C0C6`; labels Public Sans 500 .875rem; error text + border `error` #B3412F; success panel `#EAF2EE` with text `success` #2F6B55.
  - dark (`.ke-ink` group style): `--sp-form-surface: #34414D`; `--sp-form-text: #FFFFFF`; `--sp-form-accent: #FFFFFF`; `--sp-form-on-accent: #3E4C59`; `--sp-form-focus: #E2C08A`; borders `rgba(255,255,255,.4)`; error `#F4B6A8`; success `#BFE3D2`. Labels inherit `#FFFFFF`.
  - Styled states: input, textarea, select, checkbox / radio (`accent-color`), label, submit (hover `#2F3A45` light / `#DCE6EE` dark), focus-visible, disabled, error, success. Scoped to CF7, WPForms, MailPoet, MC4WP (+ Jetpack, `.wp-block-form`) classes and `.sp-newsletter-fallback` only; no global input selectors.
- **i18n semantic keys** in `inc/i18n/en.php` (extract with `L10N_SEMANTIC=1`; all five locales rewritten locally): `forms_email` "Email address", `forms_subscribe` "Tell me when dates open", `forms_mail_notice` "This opens your email app. Send the message to join the list; you are not on it yet.", `forms_mail_subject` "Join the Next openings list", `forms_contact_subject` "Readiness review enquiry", `contact_email` "Write to Katachi", `forms_contact_note` (the fallback sentence above). Check the rendered label, button, notice and subject in en, zh-TW, ja, fr and de.
- Validation: `form-check.py`, five-locale `form-runtime-check.php`, `repo-gates.sh forms`; a real CF7 check at 390px and desktop on the light (Book, home panel) and dark (Next openings) grounds; never submit a form.

---

## 12. Similarity table (target ≈ 80%; values from reference-tokens.md)

| Dimension | Reference value (token) | Katachi value |
|---|---|---|
| Base / panel | #FFFFFF ~45% / #F5F5F3 ~25% (T(a)) | #FFFFFF ~50% / #F5F5F3 ~25% (exact) |
| Text / secondary | #333333 / #666666 (T(a)) | #333333 / #666666 (exact) |
| Brand ink / button | grey button #666666, no ink (T(a)) | ink #3E4C59 button, headline, footer (row hex) |
| Accent | saturated red, logo + one band, <3% (T(a)) | tea #A8743A, marker dots + focus, ≤1% (reason §5) |
| Hero ground | pale cool photo #CDE0EE → #F2F7FB, saturated <5% (T(a)) | P01 graded pale cool + wash #F2F7FB; target ≤5% |
| Hero size | full bleed 1425×810 (90% of 900) (T(c)) | full bleed, `clamp(640px, 90svh, 960px)` = 810 at 900 |
| Hero headline | heavy wide-tracked sans ≈4rem, ls ≈.2em, one line, mid-height (T(b)) | Hanken 700 4.25rem, ls .14em, one line, ≈45% height |
| Hero card | x 30, 478×186, padding 24, radius ≈10 top only, no shadow (T(c), T(d)) | x 30, 478×≥186, padding 24, radius 10px 10px 0 0, no shadow |
| Card type | title ~20px, body 13px/1.8 (T(b)) | Hanken 600 1.25rem; Public Sans .8125rem/1.8 |
| Card button | 250×40 grey, thin arrow (T(f)) | 280×44 ink, thin 18px arrow, radius 0 |
| Columns | 3 × 472, 4px gaps, photo 1.84:1 (472×256), #F5F5F3 panel (T(c)) | 3 × (100vw−8)/3, 4px gaps, photo 1.84:1, #F5F5F3 panel |
| Tiles | 191×65, padding 15, gap 10, 2-up, 12px label, arrow, no border (T(c), T(d)) | min-height 65, padding 15, gap 10, 2-up, 13px label, 14px arrow, no border |
| Column / section titles | 20px / 30px (T(b)) | 1.25rem / 1.875rem |
| Offset rows | photo ≈1131×730 flush left + white card ≈350×255 over the inner corner; mirrored photo from x 294 + notch 252×190 (T(e)) | photo 79vw (1138) at 1.56:1 flush left + card 380×280 overlapping 252px; mirrored 75vw from x 360 + notch 320×260 |
| Link marker | 60px long thin arrow (T(f)) | 60px 1px line with a 7px head |
| Radius / borders / shadows | 0 everywhere except hero card; no borders, no shadows (T(d)) | same; hairlines only in tables |
| Body type | 16px / 1.8, 400 (T(b)) | Public Sans 1rem / 1.8, 400 |
| Section spacing | ~120px top; title → statement ~60px (T(c)) | 120px top / 120px bottom; 60px |
| Page top | vertical "PAGE TOP" + 1px 40px line, fixed bottom-right (T(f)) | vertical "Top" + 1px 40px line, fixed right 28 / bottom 32 (≥1024) |
| Header | logo left, small links right, transparent over the hero (T(f)) | wordmark left, 5 anchor links + button right, transparent over the hero |
| Block motion | fade-up 30px, 1.2s ease, on inview (T(g)) | `sp-reveal--up`, 30px, 1.2s, ease |
| Stagger | .3s / .6s by order (T(g)) | `sp-stagger` overridden to .3s / .6s |
| Image motion | scale 1.05 + 1px blur + 10px → rest, 1.2s ease (T(g)) | `sp-reveal--zoom` scale 1.06 → 1, 1.2s (no blur) |
| Hero motion | fade slider 2s / 5s with slow zoom; letters rise 700ms + 80ms each (T(g)) | single photo: load zoom 1.05 → 1 2s ease + parallax 8%; headline rise .9s after .7s; markers fade .3s stagger |
| Anchor scroll | 700ms easeOutQuart (T(g)) | CSS smooth scroll |
| Imagery | documentary corporate photos, people at work, pale space, 1.84:1 and wide crops, no radius (T(e)) | documentary high-key photos of people at desks, 1.84:1 / 1.56:1 / 16:9, no radius |

---

## 13. Home acceptance checklist (stage 1)

1. 1440×900 first screen shows: the full-bleed pale P01 (consultant crouched beside the employee, hand at screen height, people in the right half), the one-line **"Watch the desk first."** (4.25rem, ls .14em) on the photo, three observation markers with tea dots on screen / elbow / foot, the white card **flush at x 30, bottom 30** with the ink "Book a readiness review" button, the transparent header with 5 anchor links + "Book a review", and the fixed vertical "Top". Nothing else (no form, table, columns).
2. Markers never overlap the headline or the card at 1024 / 1280 / 1440 / 1920.
3. 390×844: white header, photo, headline 2.5rem, card panel with a full-width button, marker list in flow; no vertical text, no absolute labels, no overlap; `scrollWidth == innerWidth`.
4. §4: **three equal abutting columns, edge to edge, 4px gaps**, 1.84:1 photos flush on top, #F5F5F3 panels of equal height, centred titles, **white 2-up arrow tiles** (4 / 2 / 2), radius 0.
5. §5: rows A / B / A with photos **flush to the viewport edge** (≥75vw), the white card overlapping row A's lower inner corner by ≥200px, a real white **notch** in row B, 60px long arrows.
6. §6: R01 full-bleed band with real parallax and the wide-tracked line; §10: B01 band with the docked card (T1 echo) and the same CTA.
7. §7 price table: 5 items, full width of 1080 at ≥782, prices nowrap right, not clipped at 800 / 1280; stacked below 782. Prices match §9 (Free / €1,450 / €2,900 / €220 / €480).
8. 13 unique images on home (≥8); 0 cut-outs; every image Read-checked for text, logos and saturated colour.
9. ≥250 English words (target ≈620) and ≥3 narrative paragraphs of ≥20 words.
10. Effects: reveal--up (+stagger .3/.6s), reveal--zoom, parallax only; no reveal in the hero or on forms, prices, hours or footer; `check-parallax.mjs` passes on desktop and mobile; reduced motion shows the final state.
11. First-screen saturated share ≤5% (cap 15%); largest theme.json size 4.25rem; fonts via theme.json fontFace (Hanken Grotesk, Public Sans, Noto Sans TC/JP subsets); the editor matches the front end.
12. Exactly one `core/navigation` (anchors) + one CTA button in the header; footer links are paragraphs.
13. §11 newsletter slot shows email + submit + notice without plugins; not in the first screen; no reveal.
14. auto-gates `1 1` pass for en; `pattern_source.py` passes.
