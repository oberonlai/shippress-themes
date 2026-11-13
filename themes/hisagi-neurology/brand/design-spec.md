# Hisagi Neurology — design spec (stage 1, design director)

Type: **business** (health-wellness; WooCommerce-compatible but not required, the site works fully without it). Industry: an outpatient neurology clinic that explains a symptom before it orders a scan.
Primary reference: **https://solve-net.com/tuningelement/5minutereliefpatch/** (Tuning Element brand page for a relief patch, S5-Style health / medical-device). Tokens: `brand/reference-tokens.md`, cited as **T(a)…T(g)**. Screens: `ref/tuning-first.png`, `ref/scroll-tuning-{900,1800,2700,4500,7000,10000,14000}.png`. Secondary: none.
**Imagery: photo** (stage-a IMAGERY = photo). One real-photography STYLE string, high-key documentary (§10). The reference photographs a hand and a product pack; we photograph hands, a desk and an examination. 0 cut-outs.
Font direction: **sans**. Latin headings **Manrope**, Latin body **Figtree**; zh-TW / ja **Noto Sans TC / Noto Sans JP** (gothic). No serif or Mincho anywhere. The reference's futura-pt (geometric sans) becomes Manrope.
Similarity target: about **80%** to the reference in palette relationships, image treatment, motion, decoration and layout rhythm. Photographs, copy and logo are all ours.
Header: one sticky top bar with exactly one top menu (`core/navigation`), as in the reference (logo left, uppercase Latin links right). Row page structure: **narrative → problem → method → proof** (lead story → symptoms → three principles → one case before/after).
Class prefix: `hn-`. Pattern slugs `hisagi-neurology/<name>`.

---

## 1. Signature techniques (3, obvious at a glance, none may be softened)

### T1: Stadium window crossed by a capsule row (the "signal" row)
- **Source**: solve-net.com Tuning Element first screen (`ref/tuning-first.png`, T(c), T(d), T(f)). One huge **stadium-shaped window** (radius 10000px, 1312×785 at 1440, inset 64px left/right, top 83px) with a soft glow (`0 0 32px 8px rgba(0,0,0,.04)`) sits on a pale cream ground. A small subject (a hand with the patch) sits in the middle. Across the window's **lower third** a row of ~16 **vertical gradient capsules** (64px wide, 160–240px tall, tops staggered ±60px, full radius, aqua/mint/lemon to white) runs past both viewport edges. The same capsule row comes back later as the band that section titles (PRODUCT, HOW TO USE) sit on, with a 1px hairline through its middle (`ref/scroll-tuning-10000.png`, `-14000.png`).
- **Ours** (home §2 `hisagi-neurology/window`, plus §5 band and the footer edge): the same stadium window (1312×785 at 1440, inset 64, top 83, radius 9999px, glow `0 0 32px 8px rgba(58,70,84,.05)`, fill `linear-gradient(100deg, #FFFFFF 0%, #FFFFFF 45%, #EAF0F4 100%)`). Inside it is a split: **the left 50% is the documentary photograph H01** (neurologist and patient at a side-lit desk). The photo is clipped by the window's rounded left end and has a straight right edge, with a soft 120px white fade into the wash (`mask-image: linear-gradient(90deg, #000 78%, transparent 100%)` on the media layer). **The right 50% is the headline on the pale wash.** The capsule row crosses the window's lower third and bleeds off both viewport edges, so the capsules sit over the photo **and** the wash, exactly as the reference capsules run across the hand. We read the capsules as **response amplitudes**, like the bars of a nerve-conduction trace: the clinic's "signal".
- Capsule geometry at 1440 (page coordinates; row container `hn-signal`, `position:absolute; left:-24px; right:-24px; top: calc(83px + 66%)`; flex, gap 26px, `align-items:flex-start`, `overflow: clip` on the hero wrapper only horizontally via `overflow-x: clip`):
  | # | height | margin-top | gradient (top → bottom) |
  |---|---|---|---|
  | 1 | 200 | 16 | `#BFE8D6 → #FFFFFF` (mint) |
  | 2 | 170 | 32 | `#FFFFFF → #F1EDB5` (pale lemon) |
  | 3 | 205 | 14 | `#9EDFE8 → #E6F6F8` (aqua) |
  | 4 | 175 | 30 | `#D3EEF3 → #9EDFE8` |
  | 5 | 235 | 0 | `#E3F4EC → #FFFFFF` |
  | 6 | 170 | 32 | `#F1EDB5 → #FFFFFF` |
  | 7 | 205 | 14 | `#BFE8D6 → #E3F4EC` |
  | 8 | 235 | 0 | `#9EDFE8 → #FFFFFF` |
  | 9 | 205 | 14 | `#E3EEF0 → #BFE8D6` |
  | 10 | 190 | 30 | `#FFFFFF → #F1EDB5` |
  | 11 | 205 | 14 | `#A9BFD3 → #EAF0F4` (mist) |
  | 12 | 175 | 30 | `#9EDFE8 → #D3EEF3` |
  | 13 | 235 | 0 | `#E3F4EC → #BFE8D6` |
  | 14 | 190 | 30 | `#F1EDB5 → #FFFFFF` |
  | 15 | 215 | 14 | `#BFE8D6 → #9EDFE8` |
  | 16 | 235 | 0 | `#9EDFE8 → #E6F6F8` |
  Width 64px each, `border-radius: 9999px`, `opacity: .92`, 1px inner highlight `box-shadow: inset 0 0 0 1px rgba(255,255,255,.6)`. 16 capsules at a 90px pitch = 1440px + 48px of bleed. The capsules are empty `div`s in a Group (`aria-hidden="true"`); no text, no CSS `content:`.
- **Must not soften**: the window is a **true stadium** (both ends fully round, never a 24px-radius rectangle); the capsules are **vertical, full-radius, varied in height and staggered**; there are **16** at 1440 and they **run past both viewport edges**; they **cross the photo and the wash**; the ground around the window stays **pale and empty** (no second photo, cards or badges in the first screen except the booking card, T3).

### T2: Pinned symptom disc with hairline callouts, and a narrow text column passing beside it
- **Source**: Tuning Element FEATURE sections (`ref/scroll-tuning-1800.png`, `-4500.png`, `-10000.png`; T(e), T(f), T(g)). A **512px disc** (pale tint) at x 142–654 holds the subject. **1px hairline lead lines** with an elbow run from dots on the subject to small labels outside the disc. To the right, at x 800, a **narrow text column** (~355px) holds a dot plus an uppercase "FEATURE 01" label, a two-line h2, a short paragraph and a pale panel with dot bullets. The disc is **pinned** for 3–6 viewport heights while the features scroll past; under it a ghost Latin word drifts sideways (T3). A white product card also floats inside a disc (`ref/scroll-tuning-900.png`).
- **Ours** (home §4 `hisagi-neurology/symptoms`, "What brings people in"): left column 640px wide holds a **512px disc** at x 142 with `position: sticky; top: 140px` (≥1024). The disc is the photograph **S01** (hands drawing an Archimedes spiral, the standard tremor test) masked to a circle (`border-radius: 50%; overflow: clip`) with a 16px pale ring `#E3EBF1` (`box-shadow: 0 0 0 16px #E3EBF1`). **Three hairline callouts** (1px `#5E8C9A`, elbowed: a 48px diagonal at 60°, then horizontal 80–120px, 5px dot at the photo end) lead to labels outside the disc: **"Tremor at rest"** (top-right, x 600, y +40 from the disc top), **"Line steadiness"** (left, x 112, y +420), **"Pen pressure"** (right, x 660, y +300). Labels are Figtree 500 .875rem `#3A4654`, ls .02em. The right column starts at x 800, is 400px wide and holds **three symptom blocks**, each `min-height: 72vh` (desktop) so the disc stays pinned for about 2.5 viewport heights:
  - dot (6px circle `#9EDFE8` with a 1px `#5E8C9A` ring) + label "SYMPTOM 01 / 02 / 03" (Manrope 600 .8125rem, ls .2em, `#3A4654`)
  - h3 (Manrope 500 1.75rem / 1.4, `#3A4654`): "A hand that shakes" / "A headache that keeps returning" / "Fingers that go numb at night"
  - ¶ ≈45 words (Figtree 1rem / 1.9, `#5F6670`)
  - pale panel (`#FFFFFF` at 72% opacity, radius 8px, padding 20px 24px, as T(f)) with 2 dot bullets (4px `#5E8C9A` dots): "Book a first consultation if…" / "Call emergency services if…" (the emergency line appears on every symptom: sudden weakness, face droop, speech trouble, the worst headache of your life).
- **Must not soften**: the disc is a **true circle of at least 440px** on desktop and **really sticky** (it stays while three symptom blocks pass); the **hairline elbow callouts with dots** are drawn (inline SVG in the pattern, not CSS `content`); the text column stays **narrow (≤420px)** with plenty of space around it; the dot + uppercase numbered label is on every block. Below 1024 the disc is not sticky (§8).

### T3: Ghost Latin word drifting behind, white label strips, and the floating booking card
- **Source**: Tuning Element (`ref/scroll-tuning-1800.png`, `-4500.png`, `ref/tuning-first.png`; T(b), T(f), T(g)). A giant thin Latin phrase ("5 Minute Relief Patch", ~14vw, light weight, very low contrast) drifts horizontally behind the feature discs in a 30–70s linear loop. Catch lines and labels sit on **white strips** (radius 4–8px, padding 0 16px, wide tracking 0.3–0.4em). A **white floating "Buy Now" card** (260×80, thumbnail left, soft shadow) stays fixed at the bottom-right on every screen.
- **Ours**:
  - **Ghost word** `hn-ghost` (home §4, also About, Symptoms, Examination and Cases): the phrase **"Listen · Examine · Explain ·"** set twice in a `sp-marquee` row (the second copy is `aria-hidden`; the whole row is decorative, so the first copy is also `aria-hidden="true"`). Manrope 200, `font-size: 12vw` (≈173px at 1440; T(f) ~14vw scaled for the longer phrase), ls .12em, colour `#3A4654` at **opacity .06**, one line, `white-space: nowrap`. On desktop it is `position: absolute; top: calc(140px + 220px)` inside the section, at the disc's middle, z-index 0, **behind** the disc and the text. Loop **60s linear** (theme CSS overrides only the duration: `.hn-ghost.sp-marquee > * { animation-duration: 60s }`; T(g) 30–70s). Mobile: in flow above the disc, `font-size: 22vw`, same opacity.
  - **White label strips** `hn-strip`: every section label (e.g. "WHY WE TALK FIRST") and the home §3 h2 lines sit on `#FFFFFF` strips, radius 4px (labels) / 8px (h2 lines), padding 2px 14px (labels) / 4px 16px (h2), `box-decoration-break: clone` so each line of a wrapped h2 gets its own strip, as in the reference. Labels: Manrope 600 .875rem uppercase, ls **.4em** (T(b) 14px / 5.6px), `#3A4654`. Strips go on the `ground` (#F3F5F7) or on photos only, never on the white window.
  - **Floating booking card** `hn-bookcard` (template part `bookcard`, included from the footer part): `position: fixed; right: 24px; bottom: 24px; z-index: 50`, **260×80**, `#FFFFFF`, radius 10px, shadow `0 6px 24px rgba(58,70,84,.12)`. Left: thumbnail **B01** 96×80 (radius 10px 0 0 10px, object-fit cover). Right: "Book a consultation" (Manrope 600 1rem `#3A4654`) over "First visit · 60 min · €180" (Figtree .75rem `#5F6670`). The whole card is one link to `/book/`. Shown at **≥1024px only**, on every template **except** the Book page (`body.page-template-page-book` or the page slug class). No close button, no JS. The footer bottom padding is ≥120px at ≥1024 so the card never covers the last footer line.
- **Must not soften**: the ghost word is **giant (≥10vw), one line, really drifting**, behind content; labels really sit on **white strips with 0.4em tracking**; the booking card is **really fixed** with a photo thumbnail. It is the only fixed CTA.

### Supporting decoration (always on, T(d), T(f))
- **Fact bubbles** `hn-bubble` (ref FEATURE 02 gradient circles, `ref/scroll-tuning-2700.png`): 140px circles, `radial-gradient(circle at 35% 30%, #FFFFFF 0%, <tint> 70%)` with tints `#9EDFE8`, `#BFE8D6`, `#F1EDB5`, two short centred lines inside (Manrope 500 .875rem / 1.5, `#3A4654`). Used for fixed facts (home §5, Tests, Fees).
- **Hairline** 1px `#C9D3DC` for rules and table rows; **dot labels** (6px circle) before every numbered label.
- **Glow**, not borders: cards and windows use the soft glow shadow; no hard 1px frames around boxes.
- Not used: arch frames, oval windows over a wordmark, inverse notches, vertical text, sidebars, card grids of four people.

### Continuation on inner pages (all 10 content pages; at least 4 required)
Every inner page opens with a **small stadium window** (T1 mini, `hisagi-neurology/page-head`): 1312×440 at 1440 (inset 64, top 83 under the header, radius 9999px, same glow and wash). The page's head photo fills the left 46% (rounded left end, white fade). The right side holds a label strip, the h1 (3.25rem), and a ≤30-word lead. A **half-height capsule row** (16 capsules, heights 100–150px, the same gradients and order as T1) crosses the window's lower edge, half inside and half outside the window, and bleeds off both viewport edges. The head photo has `sp-parallax` with `--sp-par: 6%`. The booking card (T3) is on every page except Book.
| Page | T1 page head (head photo) | T2 pinned disc + callouts | T3 ghost word / strips | Notes |
|---|---|---|---|---|
| About | A01 | **H02** still life disc, callouts "Reflex hammer", "Tuning fork", "Pen and paper" beside 3 dated rows (2012, 2016, 2021) | ghost "Listen · Examine · Explain ·" | daily routine ¶ |
| Symptoms | S02 | **S01** disc sticky, 6 symptom blocks pass | ghost | emergency box |
| The Examination | E01 | **E02** disc (reflex hammer at the knee), callouts "Reflexes", "Strength", "Sensation", "Gait"; 4 visit steps pass beside it | ghost | principles expanded |
| Tests | X02 | **X01** disc (nerve conduction), callouts "Recording electrode", "Stimulator", "Ground" | strips + fact bubbles | when we refer for MRI |
| Cases | E03 | each of 3 cases gets a disc (C01, S03, S04); case 1 adds the before/after pair (C01 → C02) | ghost | names changed |
| Clinicians | R01 | — | strips | 7 people as ruled rows |
| Fees | F01 | — | strips + bubbles | price table (no reveal) |
| Visit | V01 | — | strips | hours table |
| Book (contact) | B01 | — | strips; **no booking card** | form slot |
| The Case Letter (newsletter) | H02 | — | strips | form slot on the Iron ground |
| Journal / single / archive / category / tag | template: window head without photo, wash only; single uses the featured image | — | strips | posts as dot-label rows |
(T1 on 10/10 pages, T2 on 5 pages, T3 on 10 pages. Same photo never twice on one page; see §10.)

---

## 2. Key visual concept

**(1) Reference first screen, story, signature motion.** Tuning Element opens on a pale cream page holding one enormous **stadium window**, glowing softly as if lit from inside. In the middle of the window a bare hand rises, wearing a thin skin-coloured patch on the back of the wrist. The catch line sits on white strips at the left: *"Close to the body, close to daily life."* Across the window's lower third a row of **pastel vertical capsules** (aqua, mint, lemon, fading to white) marches straight through the hand and out past both edges of the screen, like an equaliser or a signal. A small white "Buy Now" card floats at the bottom-right. **Story:** *a quiet, almost invisible device that fits into an ordinary day and eases it.* **Signature motion:** on load the window and the capsule row settle in (y 1% → 0, ~0.4s). When you scroll, the subject drops into a pinned pale disc, hairline callouts explain it, and features pass beside the disc while a giant ghost Latin word drifts behind. The capsule row returns as the band that section titles sit on.

**(2) Our translation: a neurology clinic.** The same stadium window glows on a cool pale page. Inside it, on the left, is a **documentary photograph of a neurologist seated with a patient at a side-lit desk**: a pen on an open notebook, a reflex hammer lying beside the blotter, the patient's hand resting on the desk mid-sentence. This is the clinic's "device": **a conversation and a pair of hands, before any machine.** On the right of the window the headline sits on the wash: *"Listen first. Scan later."* The capsule row crosses the window's lower third, over the desk and the wash, and out past both edges. It is now the **nervous-system signal**: vertical bars of different heights, like the response amplitudes on a nerve-conduction trace, in aqua, mint, mist and pale lemon fading to white. The same image type (one calm, high-key real photograph of hands and a subject, small within a big window) and the same motion concept (the capsules settle in on load, the photo layer drifts slower than the page, then the symptom disc pins while symptoms pass and a ghost word drifts) carry the story *"we explain the symptom before we order a scan."* The floating card becomes **"Book a consultation"**.

**(3) KV checklist** (all six are built in the home first screen at 1440×900 and visible without scrolling, except where noted):
| # | Reference element | Our version | Position (1440×900) | Motion | Image |
|---|---|---|---|---|---|
| 1 | Huge stadium window with soft glow on a pale single-colour ground | Stadium window 1312×785, radius 9999px, glow `0 0 32px 8px rgba(58,70,84,.05)`, wash `#FFFFFF → #EAF0F4` on ground `#F3F5F7` | x 64–1376, y 83–868 | none (hero gets no reveal) | — |
| 2 | Small calm subject in the window: a hand wearing the patch | Documentary photo: neurologist and patient at a side-lit desk, pen on an open notebook, reflex hammer beside the blotter, the patient's hand on the desk | left 50% of the window (x 64–720), clipped by the round left end, white fade at its right edge | `sp-parallax` on the media layer, `--sp-par: 8%` (mobile 5%) | **H01** |
| 3 | Catch lines + sub-label at the side of the subject | Label strip "NEUROLOGY CLINIC · WESTMERE" (white strip, .4em), h1 "Listen first. / Scan later." Manrope 400 4.25rem, lead ≈30 words, text link "How a first visit works →" | right half of the window, x 784–1296, y 230–575 | none | — |
| 4 | Row of 16 pastel vertical capsules crossing the window's lower third, past both screen edges | 16 capsules 64px wide, 170–235px tall, staggered 0–32px, aqua/mint/mist/lemon to white (table §1 T1) | y ≈601–836, x −24 → 1464 | load settle-in: `translateY(24px) → 0`, .8s `cubic-bezier(.23,1,.32,1)`, 60ms step per capsule, transform only (opacity stays 1); off for reduced motion, `?sp-static`, editor | — |
| 5 | Floating white "Buy Now" card with product thumbnail, bottom-right | Booking card 260×80: thumbnail + "Book a consultation / First visit · 60 min · €180" | fixed, right 24, bottom 24 (x 1156–1416, y 796–876), ≥1024 only | none (static fixed) | **B01** |
| 6 | Top bar: logo left, 7 uppercase Latin links right, line icon | Sticky top bar 82px: wordmark "HISAGI / NEUROLOGY" left, 6 uppercase links right (one `core/navigation`); the two-line icon only appears as the mobile menu toggle | y 0–82 | none | — |

---

## 3. Home page: block order

Grid (T(c)): window inset **64px**; content wide column **920px** centred; narrow text column **400px** (T(c) 355px, widened for Latin line length); left disc column starts at x **142** (T(c) disc x). Section padding **13.5rem** top (216px, T(c) 216–252px), **8rem** bottom; mobile **5rem / 4rem**. Body copy ≈ 560 English words; narrative paragraphs ¶ (≥3 of ≥20 words) in §2, §3 (3), §4 (3), §5, §7.

| # | Block (pattern slug) | Purpose | Layout | Photo(s) | Copy | Motion |
|---|---|---|---|---|---|---|
| 1 | Header (template part `header`) | brand + the one menu | sticky, 82px, `rgba(243,245,247,.92)` + `backdrop-filter: blur(8px)`; wordmark left at x 32 (Manrope 600 1.125rem caps ls .3em "HISAGI" over Manrope 500 .5625rem caps ls .6em "NEUROLOGY"), small tagline "Neurology clinic, Westmere" Figtree .75rem `#5F6670` at x 160; `core/navigation` right: SYMPTOMS · EXAMINATION · TESTS · CASES · CLINICIANS · VISIT, Manrope 500 .9375rem caps ls .04em `#5F6670`, gap 32px, right 48px; hover/current: 1px `#5E8C9A` underline 6px below | — | 6 links | none |
| 2 | `window` | **KV** (§2), T1 | stadium window, H01 left, text right, capsule row lower third | H01 | label 4 words; h1 4 words; lead ¶ ≈30 words; link | capsules settle-in on load; H01 `sp-parallax` 8% |
| 3 | `lead` | **narrative**: why we talk first | ref `scroll-tuning-900.png`: disc 512px `#E3EBF1` at x 142; inside it **H02** as a 300×400 (3:4) photo, radius 10px, glow shadow, centred, floating like the reference pack shot; a second capsule row (same order, `opacity .55`) runs behind the disc's lower third, full bleed. Right: x 800, column 400: label strip "WHY WE TALK FIRST", h2 on **white strips** "Most of neurology / begins with a conversation." (Manrope 400 2rem / 1.75, ls .06em), then 3 ¶ (≈45 + 40 + 45 words) Figtree 1.0625rem / 2 with 28px between, and link "About the clinic →" | H02 | label, h2, 3 ¶ ≈130 words | text column `sp-reveal sp-reveal--up` |
| 4 | `symptoms` | **problem**: the symptoms that bring people in (T2 + ghost word T3) | label strip "WHAT BRINGS PEOPLE IN" + h2 "Three symptoms we see every week" + intro ¶ ≈30 words at x 800 (column 400); below, sticky disc S01 with 3 callouts left, 3 symptom blocks right (§1 T2); ghost marquee behind; ends with link "All six symptoms →" | S01 | intro 30 + 3 × (h3 + ¶ 45 + 2 bullets) ≈ 200 words | each symptom block `sp-reveal--up`; ghost `sp-marquee` |
| 5 | `principles` | **method**: the three principles of the examination | **capsule band head** (T1 carry, ref `-10000`/`-14000`): full-bleed band 236px, 16 capsules (same table, 64px, heights 170–235), 1px `#C9D3DC` hairline through its middle; capsules 3–6 are **omitted** to leave a gap where the title lockup sits at x 190: label "HOW WE EXAMINE" (Manrope 500 .875rem ls .4em) over h2 "THREE PRINCIPLES" (Manrope 500 2.75rem caps ls .08em `#3A4654`, ref "PRODUCT" title). Below it: left column x 190, 400px: ¶ ≈50 words. Right: **disc 670px** `#E3EBF1` at x 640–1310 (ref how-to-use disc) holding **3 white cards** 190×330 (radius 8, glow, gap 20, centred, cards may overflow the disc's left/right by up to 20px as in the reference): each card = round photo 150px (E01 / E02 / E03) + "01 / 02 / 03" dot label + h3 (Manrope 600 1.0625rem) + 1 sentence (≤18 words). Under the disc, 3 **fact bubbles** (140px) in a row at x 700–1200: "60 min / first visit", "Plan in writing / in 5 working days", "Scan only if / it changes the plan" | E01, E02, E03 | ¶ 50 + 3 × 18 + bubbles | cards `sp-stagger` + `sp-reveal--up`; bubbles `sp-stagger` + `sp-reveal--up` |
| 6 | `room` | narrative pause: one room, one hour (**parallax** §7.2) | full-bleed Cover 1440×720 (mobile 420), **R01** background, `sp-parallax` `--sp-par: 10%` (mobile 6%), no dim overlay (high-key photo); white card bottom-left (x 64, bottom 64; 460 wide; radius 10; padding 36 40; glow): label strip "THE CONSULTING ROOM", h2 "One room, one hour, one doctor." (Manrope 500 2rem), 1 sentence ≈22 words | R01 | ≈30 words | Cover background parallax; card no reveal |
| 7 | `case` | **proof**: one case, before and after | label strip "ONE CASE" + h2 "A cup that shook" centred over the 920 column; two discs **440px** side by side (x 240–680 and 760–1200): **C01** (before: hands around a teacup, slight motion blur) and **C02** (after: the same woman writing a letter at her kitchen table). Between them a mist capsule 80×24 (horizontal pill `#EAF0F4`, Manrope 600 .75rem "10 weeks") on a 1px hairline joining the discs at mid-height. Under each disc a white strip "BEFORE" / "AFTER" + 2 sentences (≈30 words each, column 360). Then one ¶ ≈60 words in the 400 column, centred, and link "Three cases, in full →". Footnote .8125rem: "Name and details changed. Every case is different; this is one person's account." | C01, C02 | ≈130 words | discs + text `sp-stagger` + `sp-reveal--up` |
| 8 | `fees` | fees + hours (consistent with §9) | label strip "FEES" + h2 "What a visit costs"; **price table 920 wide**, 2 columns (item + one-line note in `#5F6670` / price `nowrap` right, tabular-nums), 5 items: §9 items 1–5; note line "Receipts are itemised for insurers. We do not bill insurers directly."; then a 2-column ruled hours list (Mon, Tue, Thu, Fri / Wed / Sat / Sun & public holidays) + address on the right, and link "All fees →" | — | ≈40 words | **none** (price list and hours: no reveal) |
| 9 | `visit` | where we are (T1 mini) | a **horizontal stadium pill** 920×300 (radius 9999px, glow) holding **V01** (clinic entrance, crop `object-position: 50% 60%`); a white card overlaps the pill's lower right by 60px (x 760–1180, radius 10, padding 28 32): address, tram line, step-free note, link "Plan your visit →" | V01 | ≈40 words | card `sp-reveal--up` |
| 10 | `journal` | latest 3 posts | rows in the 920 column, 1px hairlines: date (Figtree 500 .8125rem tabular-nums `#5F6670`) · category dot label (Manrope 600 .75rem caps ls .2em `#5E8C9A`) · title (Manrope 500 1.125rem `#3A4654`) · "→"; no thumbnails | — | titles | list `sp-reveal--up` |
| 11 | `letter` | newsletter (§11) | white panel 920 wide, radius 24px, glow, padding 56px 64px, on `ground`; left 400: label strip "THE CASE LETTER" + h2 "One symptom explained, once a month" (Manrope 500 1.75rem) + 1 sentence ≈25 words; right 380: newsletter `shippress_form_slot` | — | ≈30 words | **none** (form) |
| 12 | Footer (template part `footer`) | address, hours, links | top edge: **half-height capsule row** (16 capsules, 64px wide, heights 80–120, half above the footer's top edge on the ground, half inside the footer) as the last T1 echo; footer ground `#E7EDF2`; 3 columns at 920: wordmark + address + phone + email / hours ruled list / link list (About · Fees · Book · The Case Letter · Journal · Privacy, plain paragraph links, **not** a second navigation); © line .75rem; bottom padding 120px ≥1024 (booking card) | — | | none |
| — | Booking card (part `bookcard`) | the one repeated CTA (T3) | fixed bottom-right | B01 | | none |

**Home photo positions: 11 images, all different** (H01, H02, S01, E01, E02, E03, R01, C01, C02, V01, B01); 8 or more are required.

### First-screen composition
- **Desktop 1440×900**: header 0–82 (sticky). Window x 64–1376, y 83–868 (`height: min(785px, calc(100svh - 115px))`, min 600).
  - Media layer (`hn-window__media`, Group with `sp-parallax`, `--sp-par: 8%`, containing `figure > img` H01): x 64–720, full window height, `border-radius: 9999px 0 0 9999px`, `overflow: clip`, fade mask on the right 22%. H01 is cropped `object-fit: cover; object-position: 38% 50%` so the desk, notebook and hammer sit in the upper-middle and the hands are above the capsule row.
  - Text block (`hn-window__text`) x 784, `top: 18%` of the window (y ≈ 224), max-width 512px: label strip "NEUROLOGY CLINIC · WESTMERE"; 24px; h1 **"Listen first. / Scan later."** Manrope 400 **4.25rem** (68px) / 1.1, ls −.01em, `#3A4654`, two lines (forced break, `text-wrap: balance`); 24px; lead (Figtree 1.0625rem / 1.8 `#5F6670`, max 440px): "Hisagi is a small neurology clinic in Westmere. We take an hour to hear your symptom, examine you by hand, and explain what we found before any scan is ordered."; 20px; link "How a first visit works →" (Manrope 600 .9375rem `#3A4654`, 1px `#5E8C9A` underline offset 6px). Text block bottom ≈ y 575.
  - Capsule row tops between y 601 and 633 (`top: calc(83px + 66%)`), bottoms ≈ 836. **No capsule may overlap any text box** at 1024, 1280, 1440 or 1920 widths with 720–1080 heights: capsule tops must stay ≥ 24px under the link bottom. If they would not, capsule heights scale down (`height: clamp(110px, 24svh, 235px)` × the table ratio), and the text never moves onto the capsules.
  - Booking card x 1156–1416, y 796–876 (over capsules 14–16 only, as in the reference).
- **1024–1279**: same composition; window inset 32; h1 `clamp(3.25rem, 1.6rem + 2.6vw, 4.25rem)`; text x 52%; 14 capsules (hide 15–16).
- **782–1023**: window becomes **radius 200px 200px 32px 32px** (arch-ended box); photo on top (100% width, 360px tall, its top corners follow the arch), text below inside the window (padding 32), capsule row **below the window** in flow (12 capsules 44px wide, heights 110–160, staggered via margin-top, row `overflow-x: clip`). No absolute positioning of text.
- **Mobile 390×844**: header 64px: wordmark left, the navigation's overlay toggle (two-line icon, 44×44) right; overlay `#FFFFFF`, links Manrope 500 1.5rem caps ls .06em, 56px pitch. Window: x 16–374, radius **180px 180px 24px 24px**, glow; H01 in the top 280px (`object-position: 40% 45%`, parallax `--sp-par: 5%`); below it, inside the window, padding 24px 20px 28px: label strip (.75rem ls .3em), h1 **2.75rem** / 1.1 (2–3 lines), lead 1rem / 1.8, link. Then, **after** the window, in normal flow: the capsule row (9 capsules 32px wide, gap 12, heights 90–130, tops 0–20px, row 150px tall, bleeding 16px past both edges, clipped). **No vertical writing, no absolutely positioned label, nothing overlaps text**; the booking card is hidden. The first screen at 390×844 shows the photo, the label, the h1, the lead and the link; the capsules may start just below the fold.

### Comparison with recent themes' home orders (must not match)
| Theme | Home order | Hisagi difference |
|---|---|---|
| Shoko Archives | looping 3-scene window with outlined headline boxes / info bar / anchor-linked longform (covers, indexing, retrieval) / prices / people / cases | single still stadium window (no loop, no outlined boxes) crossed by a capsule signal row; no info bar; longform is a pinned disc with callouts, not anchored chapters; people are not on the home page |
| Hojo Brokers | slate wedge page-head band / photo-first split hero / three stepped columns / case panels with caption / tab index / archive | no wedge or slate band; the split lives **inside** a stadium; principles sit in a big disc as three cards, not stepped columns; one case as two discs with before/after, not panels; no tabs |
| Kohaku Brasserie | full-bleed 3-slide plate hero / night band / plate-rim ellipse statement / pinned letterbox day rows / afternoon 2-col / price ledger / notes ledger | no full-bleed hero or slides; no dark band; our pinned element is a **disc with hairline callouts** beside a narrow column, not a letterbox; the only full-bleed photo is a mid-page high-key room |
| Kaimon Fishmongers | hanging-fish strips stage / dark dock photo with hanging tab / ruled landings with flush thumbs / cut-to-order portrait + steps / horizontal day strip / kitchens / board | no strips, no dark photos, no flush-right thumbnails, no horizontal scroller; everything is round (stadium, discs, capsules, bubbles) on a pale cool page |
| **Hisagi Neurology** | stadium window + capsule row / disc lead with white-strip h2 / pinned symptom disc + ghost word / capsule-band title + principle cards in a disc + fact bubbles / parallax room / before-after discs / fees / stadium-pill visit / journal / letter panel / capsule-edged footer + floating booking card | the only one built from stadium, disc, capsule and bubble shapes, with a fixed booking card |

---

## 4. Inner pages (10 pages + Journal + 3 posts)

Slugs are identical in all five locales. Every page has the T1 mini page head (§1 continuation), the body on the 920 / 400 grid, and white label strips.
| Page (slug) | Role | Key content |
|---|---|---|
| About (`about`) | about | founded **2012** by Dr Ines Halloran at 14 Linden Row; why "explain first" (≈120 words); T2 disc H02 with 3 callouts beside 3 dated rows (2012 opened with two consulting rooms · 2016 neurophysiology room added (EEG, nerve conduction) · 2021 headache programme and The Case Letter began); "A day at the clinic" ¶ describing the daily routine (08:00 case meeting, first patients 08:30, Wednesday evening clinic, letters written the same afternoon); ghost word |
| Symptoms (`symptoms`) | services / problem | S01 sticky disc; **6 symptom blocks**: tremor · recurring headache · dizziness and vertigo · numbness and tingling · changes in memory · blackouts and seizures. Each block: dot label, h3, ¶ ≈60 words, panel "Book a first consultation if…" / "Call emergency services if…"; a **stroke warning box** on top (white, radius 10, 3px `#B4483C` left rule): "Sudden face droop, arm weakness or speech trouble: call emergency services now. Do not book." |
| The Examination (`examination`) | method / process | the **3 principles** expanded (≈80 words each) with E02 sticky disc + callouts "Reflexes", "Strength", "Sensation", "Gait"; the **first visit in 4 steps** (§9) as hairline rows (number, h3, 2 sentences; not a card grid); what to bring (GP letter, medication list, any previous scans on disc or link, someone who knows you well, if you like) |
| Tests (`tests`) | services | X01 sticky disc + callouts; tests done here: nerve conduction study, routine EEG (each: what it is, how long, how it feels, preparation, fee from §9); "When we order a scan": we refer to an imaging partner only when the result would change the plan, and we explain why in writing; blood tests via your GP; 3 fact bubbles ("45 min / nerve conduction", "40 min / EEG recording", "Report / in 5 working days") |
| Cases (`cases`) | proof | the **3 cases** (§9), each: disc photo + problem ¶ + "What we found" ¶ + "What changed" ¶ (≈180 words); case 1 adds the before/after disc pair (C01 → C02); footnote on changed names and no promised results |
| Clinicians (`clinicians`) | people | **7 people** (§9) as ruled rows: name (h3 Manrope 500 1.375rem), role (dot label), 2 sentences; no portrait grid; one sentence on the 08:00 case meeting |
| Fees (`fees`) | prices | full **price table, 7 items** (§9), 920 wide; cancellation (free up to 48 hours before; later €40); receipts for insurers; paying (card or bank transfer, on the day); bubbles "€180 / first visit", "60 min", "Letter / to your GP" |
| Visit (`visit`) | location | address, hours **table** (stacks on mobile), tram line 4 to "Linden Row" (2 minutes' walk), lift to the 2nd floor, step-free, 2 accessible parking bays in the courtyard, quiet waiting room; V01 |
| Book a consultation (`book`) | contact | contact form slot + mailto fallback (§11); phone line hours (Mon–Fri 08:30–12:30); what to send (symptom in your own words, how long, GP name, medications); "first appointments are usually offered within 3 weeks"; the 4 steps in brief; **no booking card** |
| The Case Letter (`letter`) | newsletter | standalone subscribe page: what is in it (3 ruled pairs: one symptom explained · one question from a patient · clinic notes such as holiday hours), first **Tuesday** of each month, about 4 minutes' read, no advertising; form slot (§11) on the **Iron** ground panel |
| Journal (`journal`) | posts page (role `posts`, empty) | post list (archive template: dot-label rows with a 160px round featured image at the left) |
| Posts (3) | article | "What a spiral drawing tells us" (featured S01; category Symptoms `symptoms`; tags `tremor`, `examination`) · "Why we rarely order a scan at the first visit" (featured E03; category Examination `examination`; tags `imaging`, `first-visit`) · "Keeping a headache diary that helps" (featured S03; category Symptoms `symptoms`; tags `headache`, `diary`) |

theme-meta `pages` / demo `screens`: home → `/`, about → `/about/`, news → `/journal/`, article → first post, category → `/category/symptoms/`, tag → `/tag/tremor/`, newsletter → `/letter/`, contact → `/book/`.
Top menu (the one `core/navigation`): Symptoms · Examination · Tests · Cases · Clinicians · Visit. Footer links (paragraph links): About · Fees · Book · The Case Letter · Journal · Privacy.
Templates: `front-page`, `page`, `page-book`, `page-letter` (or page), `single` (page head with the featured image), `archive`, `category`, `tag` (copy of archive with the label "TAG"), `home` (posts page), `404`, `search`.

---

## 5. Colour (T(a): pale single-colour ground, white window, soft grey ink, pastel capsule accents ~8%)

The reference's **warm cream** ground is changed to a **cool paper** of the same lightness. Reason: the row palette is the indigo blue-iron #3A4654, the house rule forbids defaulting to cream/beige, and a cool ground suits a clinic. The relationship stays exactly the same: a ≥95%-lightness single-colour ground, a white window glowing on it, mid-grey text, and pastel gradient capsules carrying the only colour. Every other value is the reference value within ±5% lightness or a hue shift of it.
| Token (theme.json slug) | Hex | Share (first screen) | Source / reason |
|---|---|---|---|
| `ground` | **#F3F5F7** | ~45% | T(a) #FEF9F1 (L ≈97.5%) → cool, L 96.5% (−1%) |
| `window` | **#FFFFFF** → `wash` **#EAF0F4** | ~25% | T(a) #FFFFFF → #FEF3E4, cool shift |
| `ink` | **#3A4654** | headings, buttons, ≤3% | row hex; replaces T(a) #616161 as the heading colour (darker, for the indigo identity); 9.2:1 on `ground` |
| `text` | **#5F6670** | body | T(a) #616161, cool hue, L within 2%; 5.4:1 on `ground`, 5.9:1 on white |
| `mist` | **#A9BFD3** | capsules, disc ring hover | stage-a mist, capsule tint |
| `disc` | **#E3EBF1** | discs, page-head wash, ~5% | T(a) disc #FDEFD9 / #F4D1C5 → cool pale |
| `aqua` | **#9EDFE8** | capsule tint, dots | T(a) #97EFF6, −6% saturation for the quiet row (L same) |
| `mint` | **#BFE8D6** | capsule tint, bubbles | T(a) #B3FCCB, quietened |
| `lemon` | **#F1EDB5** | capsule tint (4 of 16), bubbles | T(a) #FFF45C, made pale; kept so the capsule row still reads as the reference's three-family pastel row |
| `point` | **#5E8C9A** | dots, callout lines, link underline, focus ring; <1% | stage-a point; stands in for T(f)'s orange lead lines; 3.6:1 (not used for body text) |
| `line` | **#C9D3DC** | hairlines, table rules | T(d) 1px grey hairline, cool |
| `footer` | **#E7EDF2** | footer ground | ground −3% L |
| `iron` | **#3A4654** ground | Letter page form panel only (dark form test) | row hex as ground; text on it `#F3F5F7` 9.2:1 |
| `error` | **#B4483C** | form errors, stroke warning rule | 5.2:1 on white |
| `success` | **#3F7A66** | form success | 5.1:1 on white |
**Ratio across the site**: ground 55% · white 25% · disc/wash 8% · capsule tints 6% · ink/text 5% · point <1%.
**First-screen saturated share (check-first-screen.py, s>0.35 & v>0.5): target ≤ 8%, hard cap 15%** (reference 7.7%; row note cap 30%). The capsule tints all have saturation ≤0.32, so they count only where gradients overlap the photo; H01 is high-key with a cool grade, so its saturated pixels stay low. If the check exceeds 8%, lower the capsule `opacity` to .8. Do not change the hues.

---

## 6. Typography (sans)

Fonts load **only via theme.json `fontFamilies` + `fontFace`** (woff2 in `assets/fonts/`, OFL, listed in theme-meta `fonts[].files` with `licenseFile`; family names in readme.txt), so the editor iframe and the front end render the same faces. style.css has `:lang(` rules, so copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it in functions.php.
- `manrope`: Manrope variable 200–700 (Latin, Latin-ext). Headings, labels, nav, ghost word (200).
- `figtree`: Figtree variable 400–600 (Latin, Latin-ext). Body.
- `noto-sans-tc`: Noto Sans TC 500 (headings only; zh-TW subset of every zh-TW demo string + punctuation; use the Hokuto/Hada substitute subsetting method, because the repo subset script is known broken).
- `noto-sans-jp`: Noto Sans JP 500 (headings only; ja subset, same method).
Stacks:
- Latin headings: `"Manrope", "Helvetica Neue", Arial, sans-serif`
- Latin body: `"Figtree", "Helvetica Neue", Arial, sans-serif`
- `:root:lang(zh-TW)` headings: `"Manrope", "Noto Sans TC", "PingFang TC", "Microsoft JhengHei", sans-serif`; body: `"Figtree", "PingFang TC", "Microsoft JhengHei", "Heiti TC", sans-serif` (no bundled TC and no JP font in body: repo contract).
- `:root:lang(ja)` headings: `"Manrope", "Noto Sans JP", "Hiragino Sans", "Yu Gothic", sans-serif`; body: `"Figtree", "Hiragino Sans", "Hiragino Kaku Gothic ProN", "Yu Gothic", Meiryo, sans-serif`.
- CJK: heading sizes × 0.75 (h1 3.1875rem), body line-height 1.85, ls .04em (the reference's JP catch uses ~.3em on strips; our CJK label strips use .2em). fr/de: `hyphens: auto` on body, h2, h3; uppercase labels keep `hyphens: none`.
| Role | Font / weight | Size (desktop → mobile) | Line-height | Tracking | Source |
|---|---|---|---|---|---|
| h1 home | Manrope 400 | **4.25rem** (68px; theme.json largest `xx-large` = `clamp(2.75rem, 1.6rem + 2.6vw, 4.25rem)`) → 2.75rem | 1.1 | −.01em | row ≥4.25rem; T(b) H1 weight 400 |
| h1 inner | Manrope 400 | 3.25rem → 2.25rem | 1.15 | −.005em | |
| h2 strip (home §3) | Manrope 400 | 2rem → 1.5rem | 1.75 (strips need air) | .06em | T(b) catch on white strips, wide tracking |
| h2 | Manrope 500 | 2.25rem → 1.625rem | 1.3 | .01em | |
| section title on capsule band | Manrope 500 caps | 2.75rem → 1.875rem | 1.1 | .08em | ref "PRODUCT" / "HOW TO USE" |
| h3 | Manrope 500 | 1.75rem (symptom) / 1.0625rem 600 (card) → 1.375rem | 1.4 | .02em | T(b) H3 16px ls .08em → card h3 |
| label strip | Manrope 600 caps | .875rem → .75rem | 1.6 (22.4px) | **.4em** (5.6px) | T(b) H2 label exactly |
| dot label "SYMPTOM 01" | Manrope 600 caps | .8125rem | 1.6 | .2em | ref "FEATURE 01" |
| body | Figtree 400 | 1.0625rem (17px) → 1rem | 1.9 | .01em | ref JP body lh ~2 |
| small / meta | Figtree 500 | .8125rem | 1.6 | .02em | T(b) small |
| nav | Manrope 500 caps | .9375rem | 1 | .04em | ref nav caps |
| ghost word | Manrope 200 | 12vw (mobile 22vw) | 1 | .12em | T(f) ~14vw, light |
| price | Figtree 600 tabular-nums | 1.0625rem | 1.6 | 0 | |
theme.json fontSizes: `small` .8125rem, `medium` 1.0625rem, `large` 1.75rem, `x-large` 2.25rem, `xx-large` clamp(2.75rem → **4.25rem**).

---

## 7. Motion and scroll (sp-scroll)

Copy `pipeline/assets/sp-scroll/` unchanged to `assets/`; enqueue the JS in the head (not deferred) and add the CSS as an editor style. Only `sp-*` classes; no scroll listeners, GSAP, Lenis or AOS (the reference uses GSAP + ScrollTrigger + Lenis; we do not). **Three effects** on any page, plus the load settle-in of the hero capsules:

### 7.1 Chosen effects (from stage-a "Scroll effect candidates", source solve-net.com Tuning Element)
| Effect | sp-* | Where | Reference trigger / time / easing | Ours |
|---|---|---|---|---|
| Section in-view toggle | `sp-reveal sp-reveal--up` (+ `sp-stagger` on groups) | home §3 text column, §4 each symptom block, §5 cards + bubbles, §7 discs + text, §9 card, §10 list; inner: symptom / step / case blocks | ScrollTrigger onEnter adds `-inview`, start "top bottom"; tween 0.3–0.4s, y 1% → 0, ease none | `--sp-dist: 16px`, `--sp-dur: .6s`, `--sp-ease: cubic-bezier(.23,1,.32,1)`; stagger default .12s steps. **Not** on the hero, forms, price table, hours, the stroke warning box or legal text |
| Ghost word drift | `sp-marquee` | home §4 `hn-ghost`; About, Symptoms, Examination, Cases | GSAP loop 30–70s, linear | 60s linear, infinite (theme CSS overrides `animation-duration` only) |
| Parallax | `sp-parallax` | hero media layer (H01), home §6 room Cover (R01), every page head photo | ScrollTrigger scrub on the hero container (image slower than the window) | §7.2 |
Pinning: the reference's ScrollTrigger pin and scrub of the feature disc (scale .85 → 2.9 over 3–6 viewport heights) becomes **pure CSS `position: sticky`** on the disc column (no class; parent `overflow: clip`, never `hidden`); the disc does not scale.
Hero capsule settle-in (not a scroll effect): theme CSS `@keyframes hn-settle { from { transform: translateY(24px) } }` on `.hn-signal > *`, `.8s cubic-bezier(.23,1,.32,1) both`, `animation-delay: calc(var(--i) * 60ms)` (inline `--i` 0–15). It only runs inside `@media (prefers-reduced-motion: no-preference)` and under `html.sp-js:not(.sp-no-motion)`. Opacity is never animated, so the capsules are visible without JS, in `?sp-static`, in the editor and in print.

### 7.2 Parallax (required)
| Where | Block / structure | Background layer | Foreground (static) | `--sp-par` desktop / mobile | Reference motion |
|---|---|---|---|---|---|
| **Hero** (primary) | Group `hn-window__media sp-parallax` inside the stadium window, `overflow: clip` | `figure > img` **H01** (scale 1.18 from sp-scroll) | the h1/lead are in the sibling `hn-window__text`, **not** in the moving layer; capsules are a sibling above (z 2) | **8% / 5%** | hero image drifts slower than the window (ScrollTrigger scrub on the container) |
| **Room band** (home §6) | Cover `hn-room sp-parallax`, 720px (mobile 420px) | `.wp-block-cover__image-background` **R01** | white card (inside the Cover's inner container, not moving) | **10% / 6%** | same scrub idea on a full-width photo |
| **Page heads** (all inner pages) | Group `hn-head__media sp-parallax` | head photo | h1 column sibling | **6% / 4%** | |
Mobile keeps parallax at the smaller speeds. Reduced motion, `?sp-static`, no JS and the editor: no movement and no scale (sp-scroll built-in). Acceptance: `check-parallax.mjs` desktop + mobile, displacement difference ≥6px, 0 under reduced motion; ≥3 reveals hidden before entering and final after; nothing transparent after scrolling to the bottom.

---

## 8. Responsive rules (hard)

- **390px first screen**: no vertical writing, no absolutely positioned label or callout, nothing overlapping text (auto-gates). Stadium → arch-topped box with the photo on top and text below inside it; capsule row in flow **after** the window; booking card hidden; header 64px.
- **T2 disc < 1024px**: not sticky; the disc (min(320px, 82vw)) sits above the symptom blocks, centred. Callouts become a **list under the disc** (dot + label, in flow); the SVG lead lines are hidden (`display:none` <1024). The ghost row is in flow above the disc.
- **Discs and cards inside the big disc (§5) < 1024px**: the 670 disc becomes a rounded panel (`#E3EBF1`, radius 32px, padding 24px); cards stack in one column (photo 120px left, text right) from 600px down; bubbles wrap 3 → 2+1, 120px.
- **Before/after discs < 782px**: stacked, 280px each, with the "10 weeks" pill between them on a vertical 40px hairline.
- **Price table ≥782px**: the table spans the **full width of its 920 container** (`width: 100%`, `table-layout: auto`); the price column is `white-space: nowrap; text-align: right; padding-right: 0`, has width `1%` (shrink to content) and is **never clipped** at 800 and 1280. No `overflow: hidden` on the table wrapper.
- **Any table < 782px** (fees, hours, visit hours): stacked. Each row becomes a block: item/day on its own line (Manrope 600), the note below, the price/time on the right of the first line (flex, `nowrap`), 1px hairline between rows. No horizontal scrolling.
- **Capsule rows**: always `overflow-x: clip` on their own wrapper; `html, body { overflow-x: clip }`; at 390 the `scrollWidth` equals `innerWidth`.
- **Ghost marquee**: wrapper `overflow: clip`; never adds width.
- Touch targets ≥44px; the nav overlay toggle is the core navigation's own button.
- CJK at every width: horizontal only.

---

## 9. Fixed facts (identical on every page and in all five locales; brand.md is the source)

- **Name**: Hisagi Neurology. **Founded** 2012 by Dr Ines Halloran. **Address**: 2nd floor, 14 Linden Row, Westmere (fictional). Tram line 4, stop "Linden Row", 2 minutes' walk. **Phone** 010 482 0116. **Email** hello@hisagi-neurology.example (all mailto links use this).
- **Hours**: Mon, Tue, Thu, Fri 08:30–17:30 · Wed 11:00–19:30 (evening clinic) · Sat 09:00–13:00 (follow-ups and tests only) · Sun and public holidays closed. Phone line Mon–Fri 08:30–12:30. Case meeting daily 08:00.
- **Audience**: adults referred by a GP or booking directly with a new or unexplained neurological symptom; families of older patients.
- **Tone**: calm, plain, explanatory; never alarming, never promising results.
- **Fees (7 items)**:
  1. First consultation (60 min: 40 min history, 20 min examination, written plan) **€180**
  2. Follow-up consultation (30 min) **€95**
  3. Nerve conduction study (arms or legs, about 45 min, with report) **€240**
  4. Routine EEG (40 min recording, with report) **€210**
  5. Headache programme (first visit + 2 follow-ups + diary review over 12 weeks) **€360**
  6. Second-opinion review of existing scans and letters (written reply in 10 working days, no visit) **€140**
  7. Telephone follow-up (15 min) **€45**
  Late cancellation (less than 48 hours) €40. Receipts itemised for insurers; no direct billing. Home shows items 1–5; the booking card says "First visit · 60 min · €180".
- **First visit, 4 steps**: 1 Book by phone or the form; a short questionnaire arrives 3 working days before · 2 History, 40 minutes, in your own words · 3 Examination, 20 minutes, by hand (reflexes, strength, sensation, coordination, gait) · 4 Written plan within 5 working days, with a copy to your GP. First appointments usually within 3 weeks.
- **Three principles**: 01 Listen before we look (the history comes first and takes the longest) · 02 Examine by hand (a reflex hammer, a tuning fork, a pen and paper) · 03 Scan only when the answer would change the plan (and say why in writing).
- **People (7)**: Dr Ines Halloran, founder, consultant neurologist (movement disorders, tremor) · Dr Kofi Mensah-Hart, consultant neurologist (headache, epilepsy) · Dr Saskia Lindqvist, clinical neurophysiologist (EEG, nerve conduction) · Tomás Reyes, neurophysiology technologist · Priya Natarajan, nurse specialist (headache programme) · Leila Haddad, practice manager · Marta Kowalczyk, patient coordinator (phone line, bookings).
- **Cases (3, names changed)**: 1 **"A cup that shook"**: Ruth, 64, retired teacher, afraid of Parkinson's; the tremor appeared on action, not at rest, and the spiral drawing and family history pointed to essential tremor; no scan; a plan with her GP; after 10 weeks, in her words, she "writes letters again" (home shows this one) · 2 **"Headaches every morning"**: Daniel, 38; a 6-week diary showed painkiller overuse; the headache programme, with a gradual reduction · 3 **"Numb fingers at night"**: Amara, 51; the nerve conduction study confirmed carpal tunnel syndrome; referred to a hand surgeon, with no brain scan needed.
- **Newsletter**: The Case Letter, first Tuesday of each month, one symptom explained, about 4 minutes' read.
- **Milestones**: 2012 opened (two consulting rooms) · 2016 neurophysiology room · 2021 headache programme + The Case Letter.

---

## 10. Images (18 photographs, all real photography, one STYLE; 11 on home)

**STYLE** (identical for every image):
`IMAGE_STYLE="high-key documentary photograph, soft natural side light from a window, cool grey-blue colour grading, pale walls in off-white and light grey-blue, calm and unhurried, natural skin tones, diverse adults, modern international outpatient clinic, shallow depth of field, 35mm lens, clean uncluttered composition with generous negative space, no text, no letters, no numbers, no logos, no brand names, no signage, no screens showing text"`
Generate one at a time with `scripts/grok-image.sh out.webp "<subject>"`, check every image with Read, and regenerate any with text, legible writing, logos, broken faces or hands, or a different look. ≤300 KB, ≤2000px, webp. No cut-outs. Notebooks and paper show **blank pages or abstract lines only** (no legible handwriting).
| # | File | Subject (prompt core) | Ratio / size | Used on (page · block) | Home |
|---|---|---|---|---|---|
| H01 | `hero-desk.webp` | a neurologist (woman, 50s, cardigan over a blouse, no white coat) seated at a side-lit wooden desk facing a male patient in his 60s; a pen resting on an open notebook with blank pages; a chrome reflex hammer lying beside a green-grey blotter; the patient's hand on the desk mid-sentence; window light from the left; the subjects occupy the centre-left, with calm empty space above | 4:5, 1600×2000 | Home §2 window | ✔ |
| H02 | `desk-still.webp` | still life from slightly above: open notebook with blank ruled pages, a pen, a reflex hammer and a tuning fork laid parallel on a blotter, soft side light, pale desk | 3:4, 1200×1600 | Home §3 disc · About T2 disc · Letter head | ✔ |
| S01 | `spiral-test.webp` | close-up of an older person's hand drawing a spiral with a pen on a blank white sheet, the clinician's hand steadying the paper edge | 1:1, 1400 | Home §4 disc · Symptoms T2 disc · post 1 | ✔ |
| S02 | `dizzy-couch.webp` | a woman in her 40s seated on the edge of a pale examination couch, eyes closed, fingertips at her temple, window light | 3:2, 1800×1200 | Symptoms head | |
| S03 | `diary-water.webp` | a closed notebook, a pencil and a glass of water on a kitchen table in early morning light, a man's forearm resting nearby | 1:1, 1400 | Cases case 2 disc · post 3 | |
| S04 | `hand-rest.webp` | a woman's hand resting palm up on a folded pale towel, fingers slightly curled, bedside lamp light at dusk, cool tones | 1:1, 1400 | Cases case 3 disc | |
| E01 | `listening.webp` | over-the-shoulder view of a neurologist (man, 40s, Black, open-collar shirt) listening and writing in a notebook while a woman speaks | 1:1, 1400 | Home §5 card 01 · Examination head | ✔ |
| E02 | `reflex-knee.webp` | a reflex hammer tapping just below a seated patient's knee, the clinician's hand and the patient's trouser leg, side light | 1:1, 1400 | Home §5 card 02 · Examination T2 disc | ✔ |
| E03 | `lightbox.webp` | a neurologist and a patient looking together at a greyscale MRI film on a wall lightbox, seen from behind and to the side, no text on the film | 1:1, 1400 | Home §5 card 03 · Cases head · post 2 | ✔ |
| X01 | `nerve-conduction.webp` | small surface electrodes on a forearm resting on a pale pillow, a technologist's gloved hand holding a handheld stimulator near the wrist | 1:1, 1400 | Tests T2 disc | |
| X02 | `eeg-chair.webp` | a calm young man seated in a reclining chair wearing a soft EEG cap with electrode leads, eyes closed, technologist adjusting a lead, pale room | 3:2, 1800×1200 | Tests head | |
| R01 | `room.webp` | empty consulting room: a wooden desk, two upholstered chairs facing each other at an angle, an examination couch to the side, a large window with sheer curtain, morning side light, plants | 2:1, 2000×1000 | Home §6 parallax · Clinicians head | ✔ |
| C01 | `cup-before.webp` | an older woman's hands (60s, silver ring) around a white teacup on a saucer, slight motion blur showing the tremor, a kitchen table | 1:1, 1400 | Home §7 before disc · Cases case 1 disc | ✔ |
| C02 | `letter-after.webp` | the same older woman (short grey hair, linen shirt) writing a letter with a fountain pen at her kitchen table, relaxed, blank paper with abstract lines, window light | 1:1, 1400 | Home §7 after disc · Cases case 1 after disc | ✔ |
| V01 | `entrance.webp` | the entrance of a small clinic on a quiet tree-lined street: a pale stone facade, a glass door, two potted olive trees, a bicycle rack, with no sign and no lettering | 3:2, 1800×1200 (shown 920×300 crop) | Home §9 pill · Visit head | ✔ |
| B01 | `reception.webp` | a reception desk with a closed appointment book, a pen and a small vase of white flowers, a coordinator's hands resting on the book, soft light | 1:1, 800 | booking card (all pages except Book) · Book head | ✔ (card) |
| A01 | `case-meeting.webp` | three clinicians (diverse, 30s–60s) around a round table at 8 in the morning with coffee cups and paper notes, one speaking, others listening | 3:2, 1800×1200 | About head | |
| F01 | `phone-call.webp` | a nurse specialist (woman, South Asian, 40s) on a desk telephone, writing a note on a blank pad, window light | 3:2, 1800×1200 | Fees head | |
Per-page check (no repeats on one page): Home H01 H02 S01 E01 E02 E03 R01 C01 C02 V01 B01 · About A01 H02 B01 · Symptoms S02 S01 B01 · Examination E01 E02 B01 · Tests X02 X01 B01 · Cases E03 C01 C02 S03 S04 B01 · Clinicians R01 B01 · Fees F01 B01 · Visit V01 B01 · Book B01 · Letter H02 B01 · posts: their featured image + B01 (post 1 S01, post 2 E03, post 3 S03).

---

## 11. Forms (form contract v1: `steps/form-contract-v1` exists)

Copy `pipeline/assets/forms/shippress-forms.php` unchanged to `inc/`, and the CSS and editor JS unchanged to `assets/`; `require` it in functions.php. Patterns stay literal block markup with a small PHP island for `shippress_form_slot`. **No form in the home first screen; no `sp-reveal` on any form or its wrapper.**
- **Book a consultation (`book`, contact)**: in the body after "What to send", inside a white panel (920, radius 24, glow, padding 48/56): `shippress_form_slot( kind: contact )`. The fallback is the buffered literal mailto button **"Write to the clinic"** (`wp-element-button`, href `mailto:hello@hisagi-neurology.example?subject=<forms_contact_subject>`), with the sentence "Opens your email app. Tell us the symptom in your own words, how long it has lasted and your GP's name." The fallback never links to `/book/`. Recommended CF7 fields (documented in readme, not created by the theme): name*, email*, phone, preferred day (select: Mon–Sat), "What is happening?" (textarea*), GP name, consent checkbox* ("I agree that the clinic may contact me about this request"), submit "Send request".
- **The Case Letter (`letter`, newsletter)**: standalone page. The form panel sits on the **Iron** ground (`#3A4654`, radius 24, padding 56/64, text `#F3F5F7`): `shippress_form_slot( kind: newsletter, email: hello@hisagi-neurology.example, label: forms_email, submit: forms_subscribe, notice: forms_mail_notice, subject: forms_mail_subject )`.
- **Home §11 `letter`**: the same newsletter slot on the white panel (light ground). The footer has a link only (no second slot).
- Plugin order (shared helper): newsletter MailPoet (explicit id) → MC4WP; CF7/WPForms only through an explicit dedicated id. Contact CF7 → WPForms. Without plugins, the newsletter still shows a required `type=email` field + submit, using a native mailto POST with the notice text.
- **Tokens** (style.css, mapped to theme.json presets):
  - light (default): `--sp-form-accent: var(--wp--preset--color--ink)` #3A4654; `--sp-form-on-accent: #FFFFFF`; `--sp-form-radius: 8px` (inputs; the submit gets `border-radius: 9999px` through the shared button style, as in the reference's pill buttons); `--sp-form-focus: var(--wp--preset--color--point)` #5E8C9A (2px outline, offset 2px); `--sp-form-surface: #FFFFFF`; `--sp-form-text: #3A4654`; borders 1px `line` #C9D3DC; error text and border `error` #B4483C; success panel `#E8F1EC` with text `success` #3F7A66.
  - dark (`.hn-iron` group style): `--sp-form-surface: #2F3946`; `--sp-form-text: #F3F5F7`; `--sp-form-accent: #BFE8D6` (mint); `--sp-form-on-accent: #23303C`; `--sp-form-focus: #9EDFE8`; borders `rgba(243,245,247,.35)`; error `#F2B8AE`; success `#BFE8D6`. Labels inherit `#F3F5F7`.
  - Styled states: input, textarea, select, checkbox/radio (accent-color), label, submit (hover `#2C3743` light / `#D3EEF3` dark), focus-visible, disabled, error, success. Scoped to CF7, WPForms, MailPoet, MC4WP (+ Jetpack, `.wp-block-form`) classes and `.sp-newsletter-fallback` only; no global input selectors.
- **i18n semantic keys** in `inc/i18n/en.php` (extract with `L10N_SEMANTIC=1`; all five locales rewritten locally, not literally translated): `forms_email` "Email address", `forms_subscribe` "Send me the letter", `forms_mail_notice` "This opens your email app. Send the message to subscribe; you are not subscribed yet.", `forms_mail_subject` "Subscribe to The Case Letter", `forms_contact_subject` "Consultation request", `contact_email` "Write to the clinic", `forms_contact_note` (the fallback sentence above). Check the rendered label, button, notice and subject in en, zh-TW, ja, fr and de.
- Validation: `form-check.py`, five-locale `form-runtime-check.php`, `repo-gates.sh forms`; a real CF7 check at 390px and desktop on the light (Book) and dark (Letter) grounds; never submit a form.

---

## 12. Similarity table (target ≈ 80%; values from reference-tokens.md)

| Dimension | Reference value (token) | Hisagi value |
|---|---|---|
| Ground | #FEF9F1 warm cream, ~34% + window (T(a)) | #F3F5F7 cool paper ~45% + window (cool shift, same L, reason §5) |
| Window | white → #FEF3E4, radius 10000px, 1312×785, inset 64, top 83 (T(a), T(c), T(d)) | white → #EAF0F4, radius 9999px, 1312×785, inset 64, top 83 |
| Window glow | rgba(0,0,0,.04) 0 0 32px 8px (T(d)) | rgba(58,70,84,.05) 0 0 32px 8px |
| Text | #616161 body, #797979 small (T(a)) | #5F6670 body; #3A4654 headings (row hex) |
| Accent | aqua/mint/lemon capsule gradients, saturated share 7.7% (T(a)) | aqua #9EDFE8 / mint #BFE8D6 / lemon #F1EDB5 / mist #A9BFD3 gradients; target ≤8% |
| Capsules | ~16, 64 wide, 160–240 tall, ±60 stagger, full radius, lower third, bleed both edges (T(f)) | 16, 64 wide, 170–235 tall, 0–32 stagger, full radius, lower third, bleed both edges |
| Disc | ~440–512px pale tinted circle, subject inside, hairline callouts (T(e), T(f)) | 512px photo disc with 16px #E3EBF1 ring, 3 hairline elbow callouts in #5E8C9A |
| Labels | futura 14px caps, ls 5.6px (.4em), white bg radius 4, padding 0 16 (T(b)) | Manrope 600 .875rem caps, ls .4em, white strip radius 4, padding 2 14 |
| Catch strips | white strips radius 8, wide tracking (T(d), T(f)) | h2 lines on white strips radius 8, ls .06em, `box-decoration-break: clone` |
| Headline weight | 400, wide tracking (T(b)) | Manrope 400, h1 4.25rem (row minimum), ls −.01em (Latin) |
| Text column | ~355px (T(c)) | 400px (Latin line length) |
| Section padding | 200–252px top (T(c)) | 216px top, 128px bottom |
| Ghost word | ~14vw light Latin, 8% opacity, drift 30–70s linear (T(f), T(g)) | 12vw Manrope 200, `#3A4654` at 6%, 60s linear `sp-marquee` |
| Floating card | 260×80 white, thumbnail left, bottom-right (T(f)) | 260×80 white, B01 thumbnail left, fixed right 24 / bottom 24 |
| Bubbles | gradient circles ~140px with 2 short lines (ref FEATURE 02) | 140px radial gradient circles, 2 lines |
| Pinned feature | GSAP pin + scrub 3–6 vh, disc scale .85 → 2.9 (T(g)) | CSS sticky ≈2.5 vh, no scale |
| Reveal | 0.3–0.4s, y 1% → 0 (T(g)) | .6s, 16px, cubic-bezier(.23,1,.32,1) |
| Hero motion | capsules/window settle in on load (T(g)) | capsules translateY 24 → 0, .8s, 60ms stagger; H01 parallax 8% |
| Imagery | high-key hand / product photography, small subject in a big window (T(e)) | high-key documentary hands-and-desk photography, subject in the window's left half |
| Nav | top bar, caps Latin links, line icon (ref) | sticky top bar, 6 caps links; line icon on mobile only |

---

## 13. Home acceptance checklist (stage 1)

1. 1440×900 first screen shows: the stadium window (both ends round, glow), H01 in the left half, the label strip + h1 "Listen first. / Scan later." (4.25rem) + lead + link on the right, the **16-capsule row crossing the lower third and past both edges**, and the floating booking card with B01, under one sticky top bar with 6 caps links.
2. No capsule overlaps any text at 1024 / 1280 / 1440 / 1920.
3. 390×844: arch window with photo, then label, h1 2.75rem, lead, link; capsule row after the window; no vertical text, no absolute labels, no overlap, no booking card; `scrollWidth == innerWidth`.
4. §3 h2 lines on white strips; labels everywhere on white strips with .4em tracking.
5. §4 S01 disc ≥440px is sticky while the 3 symptom blocks pass; 3 hairline elbow callouts with dots; the ghost word drifts behind (in `?sp-motion`); each block has dot + "SYMPTOM 0n" and the emergency line.
6. §5 capsule band with a hairline and the "THREE PRINCIPLES" title in the gap; the 670 disc holding 3 white cards (E01–E03); 3 fact bubbles.
7. §6 R01 full-bleed parallax band with a white card; §7 before/after discs C01 → C02 with the "10 weeks" pill.
8. §8 price table: 5 items, full width of 920 at ≥782, prices nowrap right, not clipped at 800 / 1280; stacked below 782. Prices match §9 (€180 / €95 / €240 / €210 / €360).
9. 11 unique images on home (≥8); 0 cut-outs; every image Read-checked for text and logos.
10. ≥250 English words (target ≈560) and ≥3 narrative paragraphs of ≥20 words.
11. Effects: reveal--up (+stagger), marquee, parallax only; no reveal in the hero or on forms, prices or hours; `check-parallax.mjs` passes on desktop and mobile; reduced motion shows the final state.
12. First-screen saturated share ≤8% (cap 15%); largest theme.json size ≥4.25rem; fonts via theme.json fontFace; the editor matches the front end.
13. Home §11 newsletter slot shows email + submit + notice without plugins; not in the first screen.
14. auto-gates `1 1` pass for en; `pattern_source.py` passes.
