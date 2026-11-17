# Kosame Hot Pot — design spec (stage 1, design director)

Type: **food-drink** (WooCommerce-compatible but not required; the site works fully without it). Industry: a hot pot restaurant where **every table has its own pot on its own burner** and the four broths are finished at dawn; tables and three private rooms are booked through **one** booking request.
Primary reference: **https://ginza.o-ki.co.jp/** (S5-Style restaurant category; a beef sukiyaki / shabu-shabu restaurant with private rooms). Secondary: none. Tokens: `brand/reference-tokens.md`, cited as **T(a)…T(g)**. Screens: `ref/ok-first.png` (1440×900 first screen), `ref/scroll-ok-{0,900,1800,3600,5400,9000}.png`.
**Imagery: photo** (stage-a IMAGERY = photo). One real-photography STYLE string, **low-key** (row `photo_direction: low-key`, T(e)): near-black ground, one warm light, steam. 0 cut-outs. No illustration.
Font direction: **sans** (row `font_direction`). Latin display **Bricolage Grotesque**, Latin body / UI **DM Sans** (row fonts). zh-TW / ja headings **Noto Sans TC / Noto Sans JP** (CJK gothic / sans). No serif / Mincho anywhere. Details §6.
Similarity target: about **80%** to the reference in palette, image treatment, motion, decoration and layout. Photographs, copy and the logo mark are ours; no asset, text or logo of the reference is reused.
Row: archetype **sticky-media**, hero **photo-left-text-right**, nav **split**, first screen **top-bottom-halves**, page structure **booking-led**. How they meet: at ≥960px the screen is two halves side by side (sticky photo stage left, paper column right = photo-left-text-right, sticky-media); at <960px the same two halves stack (photo top half, paper bottom half = top-bottom-halves). The header menu is split across the seam (§1 S0). Booking-led: the booking frame is the first block after the seal and closes the column again (§3).
Class prefix: `ks-`. Pattern slugs `kosame-hotpot/<name>`. Header: exactly one top menu (`core/navigation`).
theme-meta suggestions: `type: food-drink`; `colors.tags: red, dark, muted, warm`; `style: cinematic, minimal, vertical-type, quiet`.

---

## 1. Signature techniques (3 + 1 supporting; obvious at a glance; none may be softened)

Stage-a candidates T1–T3 are all used: **S1 = T1 (sticky half-screen photo stage)**, **S2 = T2 (four-line draw-in booking frame)**, **S3 = T3 (vertical section header)**. **T4** (sage-bordered link box with long arrow) is the supporting device; the reference's corner-bracket "more" button (T(d)) is used for secondary links.

### S1 (T1): Sticky half-screen photo stage — left 50vw × 100vh low-key photo that stays while the pale paper column scrolls; timer cross-fade; five dots; two vertical white phrases
- **Source**: ginza.o-ki.co.jp, every screen (`ref/ok-first.png`, `scroll-ok-*.png`; T(c), T(e), T(f), T(g)). The left half **x0–720 × y0–900** is a near-black food photograph (glossy raw beef on a pale crackle-glaze plate, an iron pot, steam), `object-fit: cover`, radius 0, no overlay. It is **sticky for the whole page**; the right half (paper `#FAFAFA` with faint grain) scrolls past it. Five photos (plate, pot, pour, chopsticks lift, room) **cross-fade on a timer** (~3.5s per photo, ~1s opacity fade, loops) — not scroll-driven. **Five 6px white dots** stacked vertically at the lower left (x≈44, y726–852, 40% opacity, active 100%). **Two vertical white phrases** run down the photo's right edge (x≈648), one from the top, one from y≈590 to the bottom.
- **Ours (home, the whole split section, and every inner page)**: `ks-split` = CSS grid `grid-template-columns: 50% 50%` (full width, no container). Left cell `ks-stage`: `position: sticky; top: 0; height: 100vh; height: 100svh; align-self: start; overflow: clip;` background `#0B0908` (T(a) photo ground). Inside, **five slides** `ks-stage__slide` (each a `figure > img`, `position: absolute; inset: 0; object-fit: cover; object-position: center 60%`), home order **P01 → P02 → P03 → P04 → P05** (§10). A top scrim `linear-gradient(180deg, rgba(11,9,8,.55) 0, rgba(11,9,8,0) 140px)` (for the white nav, §S0) is a sibling div above the slides. **Dots** `ks-stage__dots`: 5 × 6px circles, white, opacity .4, active 1, `position: absolute; left: 44px; bottom: 44px; display: flex; flex-direction: column; gap: 26px` (T(f) x32 bottom 32 measured at 1440 as x47 / y726–852: we use 44/44). **Phrases** `ks-stage__phrase` (two paragraphs in markup, editable): white, `writing-mode: vertical-rl; text-orientation: mixed`, uppercase, Bricolage Grotesque 400 **1.25rem** ls .35em (en/fr/de); zh-TW / ja **1.75rem** upright, ls .3em (T(f) 28px). Phrase A **"Broth at dawn"** `top: 120px; right: 40px`; phrase B **"One pot, one table"** `bottom: 96px; right: 40px` (same column, the reference's staggered pair).
  - **Timer cross-fade (CSS only, no JS, no scroll listener)**: one keyframe, period **17.5s** (5 × 3.5s): `@keyframes ks-stage { 0% {opacity:0} 5.71% {opacity:1} 20% {opacity:1} 25.71% {opacity:0} 100% {opacity:0} }` (1s fade in, 2.5s hold, 1s fade out overlapping the next slide's fade in). `animation: ks-stage 17.5s linear infinite both;` delays: slide 1 **−1s** (already visible at first paint, no LCP delay), slide 2 2.5s, slide 3 6s, slide 4 9.5s, slide 5 13s. Dots use a matching keyframe on `opacity` (.4 → 1) with the same period and delays. The animation rules sit inside `@media (prefers-reduced-motion: no-preference)` and start with `html.sp-js:not(.sp-no-motion)`. **Default state** (no JS, reduced motion, `?sp-static`, editor, print): slide 1 opacity 1, slides 2–5 opacity 0, dot 1 active. Slides are decorative duplicates of the stage, so only slide 1 needs to be visible in the static state.
  - Phrases fade in once on load (CSS `animation: ks-fade 1s ease .3s both`, same media query and `html.sp-js` gate). This is a load fade, not a scroll reveal.
- **Never soften**: the stage is **exactly half** the viewport width and the full viewport height at ≥960px, touches the left, top and bottom edges, and **stays fixed while the whole paper column scrolls** (from the seal to the closing booking frame); photos are low-key (near-black ground, one warm light) — never high-key, never tinted azuki; the five dots and both vertical phrases must be visible in the first screen; the stage carries **no headline, no button, no card**.
- **Contrast**: near-black photo half against a near-white paper half with black text: the reference's hard dark/pale split. Do not lighten the photos or grey the paper.
- **Differs from** used sticky devices (Kama "sticky 50% picture column with masked picture swap", Kyukyu "sticky photo column beside numbered chapters", Kohaku "pinned letterbox window"): our stage is the **page-long left half from the very top**, swaps by **timer cross-fade** (no mask, no scroll trigger), carries dots + vertical phrases, and is the frame of every page, not one section.

### S0 (header, nav split): menu on the photo half, wordmark and the booking button on the paper half
- Reference: a transparent header with only a 3-line menu button at the top right of the paper half (x1340–1373, y40–67). Row requires a visible header with a split nav, so: `ks-header`, `position: absolute; top: 0; left: 0; right: 0; height: 96px; z-index: 20`, transparent, two cells matching the halves (`grid-template-columns: 50% 50%`). It scrolls away with the page (no sticky header; T(g) the reference header hides on scroll).
  - **Left cell (on the photo)**: `core/navigation` — the only menu — at `padding-left: 40px`, items **Broths · Courses · Private rooms · Visit · About**, DM Sans 500 .8125rem uppercase ls .14em, **white**, gap 28px; current item 1px white underline 6px below. 960–1199px: .75rem, gap 20px.
  - **Right cell (on the paper)**: wordmark "KOSAME" (`core/site-title`, Bricolage Grotesque 600 1rem ls .32em, ink) at `padding-left: 40px`; at the right `padding-right: 40px` the **"Book a table"** button 168×48, azuki `#96514D`, white DM Sans 500 .875rem ls .12em, radius 0 → `/book/`. Hover: ink wipe (§7, T(g) clip-path wipe 0.4s).
- <960px: header in flow, height 64px, paper ground, ink text: wordmark left 20px; Book button 132×44 + the core overlay toggle (44×44, three 1px lines like the reference menu button) right. 600–959px: two rows (row 1 wordmark + button; row 2 the nav centred, ink, .75rem). The overlay is the same `core/navigation`.

### S2 (T2): Four-line draw-in booking frame — centred heading with a 1px underline, one solid azuki button, four 3px lines drawing around the box one after another
- **Source**: `ref/scroll-ok-900.png` (T(b), T(d), T(g)): in the paper column right after the logo screen, a heading (≈21px, ls .2em) centred with a **1px black underline ≈216px wide**; a **solid red button 530×95** (x815–1345) with white 21px text ls .15em; two small centred note lines (13px). Four **3px red hairlines** draw around the box one after another when it enters.
- **Ours (home §2 and home §11; inner pages, §1 continuation)**: `ks-frame`, width = column (590px), `position: relative`, padding **56px 30px 48px**, background transparent on paper. Heading **"Reservations"** (Bricolage Grotesque 400 1.3125rem, ls .2em, uppercase, ink, centred) with a centred **1px ink underline 216×1px** 14px below (a separate `<span class="ks-frame__rule">` block, not `text-decoration`). Then **"Book a table"** button `wp-block-button` full inner width **530×88**, azuki `#96514D`, white DM Sans 500 1.3125rem ls .15em, radius 0, → `/book/`. Then two notes centred DM Sans 400 .8125rem lh 1.9 `#727272`: "Tables for 1–6 and private rooms for up to 14, all through one request." / "We confirm by email within 3 hours, Tue–Sun 14:00–22:00." Four lines `ks-frame__line--top|right|bottom|left` (empty spans, decorative, `aria-hidden`): **3px azuki `#96514D`**, absolutely positioned on the box edges.
  - **Draw-in** (theme CSS keyed on the sp-scroll `.sp-in` class; the frame itself has `sp-reveal sp-reveal--up`): initial `transform: scaleX(0)` (top, bottom) / `scaleY(0)` (left, right) with origins top-left → top-right → bottom-right → bottom-left; on `.ks-frame.sp-in` each goes to 1 with `transition: transform .4s cubic-bezier(.33,1,.68,1)` and delays **.2s / .6s / 1.0s / 1.4s** (top, right, bottom, left). Hidden state only under `html.sp-js:not(.sp-no-motion)` inside `prefers-reduced-motion: no-preference`; editor / static / no-JS: lines fully drawn.
- **Never soften**: the four lines are **3px and azuki** (not 1px, not grey) and visibly frame the whole box; the button is **solid azuki, full frame width** (not outline, not a small pill); the heading underline is present; nothing else inside the frame (no form, no image). "Book a table" is the only booking wording on the site.

### S3 (T3): Vertical section header — vertical heading + vertical Latin label with a 1px full-height rule between them, centred in the paper column
- **Source**: `ref/scroll-ok-5400.png` (T(b), T(c), T(f)): centred in the column, a vertical heading (25.3px, 700, ls .66em) to the right of a **1px black vertical rule** (x1075, ≈160px tall), and a tiny rotated Latin label (15.8px, ls .4em) to the left; heading block padding 185 top / 70 bottom.
- **Ours (every home section from §3 and every inner-page section)**: `ks-vhead` = flex row centred in the column, `gap: 20px`, `min-height: 280px`, `margin: 0 auto 72px` (T(c) 70px bottom). Order left → right: **label** `ks-vhead__label` (DM Sans 400 .875rem ls .4em, ink, `writing-mode: vertical-rl`, sideways Latin, e.g. "02 · Four broths"), **rule** `ks-vhead__rule` (1px ink, `align-self: stretch`, full block height), **heading** `ks-vhead__title` (h2; Bricolage Grotesque 500 **1.5625rem** (25px, T(b) 25.3px) uppercase ls .3em, `writing-mode: vertical-rl; text-orientation: mixed`; zh-TW / ja upright, Noto Sans 500, ls .5em). All three are real blocks in the pattern (no CSS `content`).
- Home heading / label pairs: THE POT / 01 · Story — BROTHS / 02 · Four broths — COURSES / 03 · Prices — ROOMS / 04 · Private — THE DAY / 05 · Routine — PEOPLE / 06 · Kitchen and floor — NOTICES / 07 · Journal — VISIT / 08 · Access. In zh-TW / ja the heading is in the local language (upright); the label stays Latin as in the reference.
- **Never soften**: vertical at ≥782px; the rule is visible and as tall as the block; centred in the column (not left-aligned, not inline with body text); generous empty paper above it (§3 spacing).
- <782px: horizontal (no vertical writing): label (.75rem ls .3em) above, then a **40×1px** horizontal rule, then the heading 1.375rem ls .2em, all centred.

### Supporting (T4): sage-bordered link box with a long thin arrow + corner-bracket "more" button
- **Link box** (`ref/scroll-ok-1800.png`, T(d)): `ks-linkbox` = a full-box link, background `#FFFFFF`, **2px `#DBDABE` border**, **527×126** (`width: min(527px, 100%)`), centred; text centred DM Sans 400 1.125rem lh 1.6 ls .06em ink, two lines max; a **long thin arrow** at bottom-right (right 20px, bottom 22px): 28×1px ink line with a 7px 1px tick at its right end rising at 45° (inline SVG, `aria-hidden`). Boxes stack with 48px gaps. Hover: border colour `#96514D`, arrow moves 6px right, `.4s cubic-bezier(.5,1,.89,1)`.
- **More button** (`ref/scroll-ok-3600.png`, T(d)): `ks-more` 313×63, no fill; **1px corner brackets** 16px long at the four corners, and the top and bottom edges drawn as two segments each with a **gap 16px wide in the middle** (the reference's broken edge); stroke `#8C8582`; label DM Sans 400 .9375rem ls .4em ink centred. Used for "All broths", "All courses", "Our story", "All notices".

### Continuation on inner pages (≥4 required; here 10)
Every inner page uses the **same `ks-split` frame** (S1 stage left with its own 1–3 photos and the same dots / phrases rules; paper column right) and S0 header. Page head in the column: first block `ks-pagehead` (`min-height: 72vh`, content vertically centred): small kicker DM Sans 400 .8125rem ls .3em `#727272`, H1 **Bricolage Grotesque 500 4.25rem** lh 1.0 ls −.01em ink (largest size), lead ¶ 1.1875rem lh 2.0 (≤60 words).
| Page | S1 stage (photos, cross-fade if >1) | S2 booking frame | S3 vertical headers | T4 link boxes / more button |
|---|---|---|---|---|
| Broths | ✔ P07 P03 P06 | ✔ at end | ✔ ×4 (one per broth) | more → Courses |
| Courses | ✔ P08 P02 P04 | ✔ at end | ✔ ×3 | 2 link boxes (Private rooms, Visit) |
| Private rooms | ✔ P09 P05 P13 | ✔ at end | ✔ ×4 | 3 link boxes (Room One / Two / Three anchors) |
| Book a table | ✔ P16 P01 P09 | (the form replaces the button: same frame + four lines around the form section, §11) | ✔ ×3 | 2 link boxes (Private rooms, Visit) |
| Visit | ✔ P12 P13 | ✔ at end | ✔ ×3 | — |
| About | ✔ P11 P18 P06 | ✔ at end | ✔ ×4 | more → Journal |
| Contact | ✔ P16 (single) | — | ✔ ×2 | link box → Book a table |
| The Pot Letter (newsletter) | ✔ P03 (single) | — | ✔ ×2 | — |
| Journal (posts page) + single posts | ✔ archive P13 (single); post = featured image | — | ✔ on the archive | more → next page |
| Privacy | ✔ P05 (single) | — | — | — |

---

## Key visual concept

### (1) Reference first screen: concept, story, signature motion
- **What it draws**: the left half is a near-black low-key photograph — glossy marbled raw beef fanned on a pale crackle-glaze plate, a dish of vegetables and an iron pot behind it, steam — that slowly cross-fades to a pour of broth, chopsticks lifting one slice over a steel pot, and a dim amber private room. Five small dots at the lower left show which photo is on; two vertical white phrases run down the photo's right edge. The right half is pale grained paper with nothing but a tall vertical logo: a red seal above vertical lettering and the branch name. A thin menu button at the top right. Scrolling on, the paper column brings a booking frame with one red button, then vertical section headings, small room photos and white link boxes.
- **Story**: a quiet, formal meal: the meat is shown before it is cooked, the table is private, and there is one way to book.
- **Signature motion**: the photo stage **cross-fades on a timer** (~3.5s / ~1s fade) while the paper column scrolls past it; section headings write in with a growing 1px line; the booking frame's four lines draw around it.

### (2) Our scene (same composition, same motion idea, same image type: low-key real photograph)
**Five o'clock, the first table of the evening.** In a dark dining room lit by one warm pendant, a server's hands (sleeve rolled, dark apron) lower a **split steel pot** — one half clear golden broth, the other deep brick-red with chilli — onto a **table burner**; steam rises into the light; around it a pale crackle-glaze plate of marbled beef, a dish of greens, two small sauce bowls. The ground is near-black, the steam and the broth catch the light. The stage then cross-fades through the evening's other moments: the beef fanned on its plate, a ladle pouring clear broth, the vegetable platter, a dim private room set for four with the burner waiting. The paper half carries only our vertical wordmark **KOSAME** under an azuki seal (our own drawn mark: a circle split by one vertical line = a split pot seen from above). The story is the business in one frame: **the broth was made at dawn, your pot arrives on your own burner, and you book one way.** The phrases "Broth at dawn" / "One pot, one table" say it in words. Motion: the same timer cross-fade (3.5s / 1s), dots following the slide, phrases fading in once.

### (3) KV checklist (all six built in the home first screen and visible at 1440×900)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Sticky near-black photo stage 50vw × 100vh, slide 1 = beef plate + pot + steam | **P01** server lowering a split clear / red broth pot onto a table burner, steam rising, beef plate and greens around | left half x0–720, y0–900, sticky through the page | timer cross-fade 3.5s per slide, 1s opacity fade, slide 1 visible at first paint (delay −1s) | P01 |
| 2 | Four more photos in the cross-fade (plate, pour, lift, room) | **P02** marbled beef fanned on a pale crackle plate · **P03** ladle pouring clear broth · **P04** vegetable and mushroom platter · **P05** private room for four set with the burner | same stage, stacked slides | same cross-fade, loop 17.5s | P02 P03 P04 P05 |
| 3 | Five vertical dots, lower left of the stage | 5 white 6px dots, .4 opacity, active 1 | stage left 44px, bottom 44px, gap 26px | active dot follows the slide (same keyframe period) | — |
| 4 | Two vertical white phrases at the photo's right edge | "Broth at dawn" (top 120px) and "One pot, one table" (bottom 96px), white, vertical | stage right 40px | one-time load fade 1s ease, .3s delay | on P01–P05 |
| 5 | Tall vertical logo with a red seal on pale paper | azuki seal (88px, our split-pot circle) above the vertical stacked H1 **KOSAME** + small vertical "HOT POT" | right half, centred x≈1080, y232–810 | none (static) | — |
| 6 | Pale grained paper column with the header menu and the booking frame next | paper `#FAFAFA` + grain; header: white nav on the photo half, wordmark + azuki "Book a table" on the paper half; booking frame (S2) is the next block below the fold | right half; header y0–96 | header button hover wipe .4s; frame draws in on entry | — |

---

## 3. Home page: block order

Structure: `ks-split` (stage + column, sections §1–§11) → full-bleed band §12 → newsletter §13 → footer. Column content width **590px** centred in the 720px half (T(c)); at 960–1439 `width: min(590px, 100% − 64px)`. Body text blocks inside the column `max-width: 470px` centred, text left-aligned (reference body at x853–1306 ≈ 454px). Section spacing: **420px** from the end of one section to the top of the next vertical header at ≥1280 (T(c) 422px margin; we fold the reference's extra 185px heading padding into it), **320px** at 960–1279, **160px** <960. Copy target ≈ **620 English words**, narrative ¶ ≥20 words in §3, §6, §7, §8.

| # | Block (pattern) | Purpose | Layout | Photo(s) | Copy |
|---|---|---|---|---|---|
| 0 | `header` (S0) | one top menu, split across the seam | §1 S0 | — | labels |
| — | `stage` (S1, KV) | left half for the whole split section | §1 S1; slides P01–P05; dots; 2 phrases | **P01 P02 P03 P04 P05** | 2 phrases |
| 1 | `seal` (KV #5) | first screen of the column | `min-height: 100vh`; centred: azuki seal SVG 88px, 32px gap, H1 `KOSAME` stacked upright Bricolage Grotesque 500 3rem lh 1.08 ls 0 ink, 28px gap, sub "HOT POT" vertical sideways DM Sans 400 .75rem ls .4em `#727272` | — | H1 + sub |
| 2 | `book-frame` (S2) | booking first (booking-led) | §1 S2, 64px below the seal block | — | heading + button + 2 notes |
| 3 | `story` | what Kosame is | S3 "THE POT / 01 · Story"; lead ¶ DM Sans 400 1.1875rem lh 2.0 (≈45 words); 2 ¶ body (≈120 words); 48px gap; **P06** 590×394 (1.5) full column width, `sp-parallax` (§7.2); more button "Our story" → /about/ | **P06** | ≈165 words |
| 4 | `broths` | the four broths | S3 "BROTHS / 02 · Four broths"; **P07** 590×394; then 4 ruled rows (data-table style, T(c): 1px ink rules, row padding 27px 0): name Bricolage 500 1.125rem ls .08em left + hours "6 h" DM Sans .8125rem `#727272` right; under it one line DM Sans 400 .9375rem (≈15 words each); top rule of the group wipes in (§7); line "Any two in one split pot, at no extra cost." ; more button "All broths" | **P07** | ≈80 words |
| 5 | `courses` | price list | S3 "COURSES / 03 · Prices"; **P08** 590×394; 1 short ¶ ("Every set: your split pot, a vegetable platter and the sauce bar. Two hours at the table at dinner."); **price table** (§8, 7 rows, full column width, price right nowrap); link box (T4) "Every course, / plate by plate" → /courses/ | **P08** | table + ≈30 words |
| 6 | `rooms` | private rooms | S3 "ROOMS / 04 · Private"; **P09** 590×394; ¶ ≈70 words (narrative); **3 link boxes** (T4, the reference's "for a dinner / for a celebration" boxes): "Room One · 2–4 guests / for a quiet dinner" → /private-rooms/#room-one, "Room Two · 6–8 guests / for family and friends" → #room-two, "Room Three · 10–14 guests / for a long table" → #room-three | **P09** | ≈90 words |
| 7 | `the-day` | the daily routine (brand "day") | S3 "THE DAY / 05 · Routine"; ¶ ≈60 words narrative; ruled time list (8 rows: time DM Sans 500 .9375rem tabular-nums left 72px, task right; 1px `#DBDABE` rules); **P10** 590×394 below | **P10** | ≈60 words + 8 rows |
| 8 | `people` | kitchen and floor | S3 "PEOPLE / 06 · Kitchen and floor"; **P11** portrait 3:4 at **394×525** centred; ¶ ≈50 words; ruled list of **7 names** (name Bricolage 500 1rem left, role DM Sans 400 .875rem `#727272` right, 1px ink rules, padding 18px 0) | **P11** | ≈50 words + 7 rows |
| 9 | `notices` | latest journal posts | S3 "NOTICES / 07 · Journal"; Query Loop 3 posts as text rows (reference "Topic": date DM Sans .8125rem ls .1em `#727272` above, title DM Sans 400 1rem ink; 1px `#DBDABE` rules); more button "All notices" → /journal/. **No thumbnails** (keeps home images unique) | — | titles |
| 10 | `visit` | where and when | **wash**: the column section background `linear-gradient(180deg, #E8D8D8 0, #FFFFFF 100%)` (T(a) access band), padding 120px 0; S3 "VISIT / 08 · Access"; **P12** 590×200 (2.9:1, T(e)); name line "Kosame Hot Pot · Harbour Row" Bricolage 400 1.3125rem ls .2em centred with a 1px ink rule 498px below; **info table 498px wide** centred (T(c)): Address · Dinner · Lunch · Closed · Booking desk · Phone, 1px ink rules, row padding 27px 18px, label DM Sans 500 .875rem, value DM Sans 400 .9375rem; table top rule wipes in (§7) | **P12** | ≈40 words + table |
| 11 | `book-frame` (S2, closing) | the single way to book, again | identical to §2, 120px after §10 inside the wash; then 160px paper; **end of `ks-split`** | — | as §2 |
| 12 | `band` | full-bleed pause (parallax) | full-width Cover **P13** across both halves, `min-height: 720px` (1440×720, 2:1 crop of a 2.4 photo), overlay `rgba(11,9,8,.35)`; bottom-left at left 8.33% / bottom 96px: statement **"Broth on at 05:30. Doors at 17:00."** Bricolage Grotesque 500 **4.25rem** lh 1.05 ls −.01em white, max-width 760px, left-aligned (not centred); `sp-parallax` (§7.2) | **P13** | 1 line |
| 13 | `letter` | newsletter (The Pot Letter) | full-width dark ground **`#0F0B0A`**, padding 120px 0; content 1080px: left 50% heading "The Pot Letter" Bricolage 400 1.75rem ls .1em paper + ¶ ≈30 words (first Tuesday monthly: the month's broth, open private-room dates, one recipe to cook at home); right 50% **newsletter slot** (§11, dark tokens). Not in the first screen, no reveal | — | ≈35 words |
| 14 | `footer` | close | `#E7E7E7` (T(a)), padding 96px 40px 40px: left seal 56px + "KOSAME" + address, hours, phone, email; middle page index (all 10 pages as a list, DM Sans .875rem); right link "The Pot Letter →" (no second form slot); © line `#727272` .75rem | — | — |

**Home photo positions: 13** (P01–P05 in the stage, P06–P12 in the column, P13 band), all unique on the page (≥8 ✔). In the static state the stage shows P01 only, so **9 photos are visible in static screenshots** (P01, P06–P13) — still ≥8.

### First-screen composition (1440×900)
- **Left half x0–720, y0–900**: P01 cover; top scrim 0–140px; nav (white, uppercase .8125rem) at y36–60 from x40; phrase A x≈660–680, from y120 down; phrase B same x, ending y804; dots x44, y726–852 (bottom 44).
- **Right half x720–1440**: paper `#FAFAFA` + grain; header row y0–96: wordmark "KOSAME" x760, "Book a table" azuki 168×48 at x1232–1400, y24–72. Seal 88px centred x1036–1124 at y232–320; H1 KOSAME stacked y352–≈680; vertical "HOT POT" y≈708–810. Nothing else.
- **No form, no table, no search, no second heading** in the first screen; the booking frame starts at y≥900.
- Saturated share (S>0.5, V>0.35): azuki is S≈0.49 in HSV (below the counter's S threshold), red broth in P01 ≈4–8% → **target ≤10%**, gate cap 15%, row cap 30%. If `check-first-screen.py` reports >12%, regenerate P01 with a deeper, darker brick-red broth (do not change the layout or tint the photo).

### 390×844 first screen (top-bottom halves)
Header 64px in flow (paper) → stage **in flow, `height: 52svh` (≈439px)**, same five slides cross-fading, dots **horizontal** row at left 20 / bottom 20 (decorative, no text), **phrases hidden <960px** → paper: seal 56px centred (margin 32px top), H1 "KOSAME" **horizontal** Bricolage 500 2.5rem ls .3em centred, sub "Hot pot · Harbour Row" DM Sans .8125rem ls .2em `#727272`, one line "Broth on at 05:30. Doors at 17:00." .9375rem. The booking frame starts below the fold. **No vertical writing, no absolutely positioned label over text, no overlap**; `scrollWidth == innerWidth`.

### Comparison with recent themes' home orders (must not match)
| Theme | Home order | Why Kosame differs |
|---|---|---|
| Butai Playhouse | ink-black theatre hero with season ticker / season board of five poster cards / horizontal date rail / dark newsletter / marquee footer | no ticker, no poster board, no date rail, no marquee; one page-long sticky photo half beside a single narrow paper column |
| Hako Capsule | stage hero / why a capsule narrative / rooms / compare / the minute / rules / stories / letter / book (hairline-banded sections) | no full-width banded sections or comparison table; sections live in one 590px column under vertical headers; booking comes **first** (frame right after the seal) and again at the end |
| Komorebi Cabins | two abutting full-bleed panes + ticker / greige intro / blurred-canopy mosaic / comparison table / Inside row / weekend flow / woodland band / hosts / getting here / journal / dark letter | no flush-left 86% hero with gutter, no mosaic, no edge-peek row; the halves are a sticky stage + scrolling column, not panes; headings are vertical with a rule |
| Hinata Market | gazette frame with three ruled columns / date stamp / dotted feed rows / lead photo with diamonds / pitch application | no page frame, no three ruled columns, no date stamp; one column, link boxes with long arrows, a drawn booking frame |

---

## 4. Inner pages (10 pages + Journal posts page + 3 posts)

All inner pages: S0 header; `ks-split` (S1 stage with the listed photos; column with `ks-pagehead`, S3 headers, content); footer as home. Pages with one stage photo show no dots and no cross-fade (phrases stay). No band, no letter section on inner pages except The Pot Letter page itself.

| Page (slug) | Stage photos | Column content points |
|---|---|---|
| **Broths** (`broths`) | P07 P03 P06 | head: H1 "Broths", lead (all four finished by dawn); 4 sections, each S3 header (CLEAR / RED / WHITE / FOREST) + ¶ ≈60 words (what goes in, hours, how it changes as it simmers at the table) + a ruled 3-row spec (Base · Simmered · Best with); section "The split pot" ¶; **P18** 590×394 (how the bones and vegetables arrive at 07:30); S2 frame; more → Courses |
| **Courses** (`courses`) | P08 P02 P04 | head: H1 "Courses"; S3 "SETS": the **price table** (7 rows, §8) + note "Prices per person. Every set: split pot, vegetable platter, sauce bar."; S3 "PLATES": what each set brings, plate by plate (5 ruled blocks: set name + 3–4 items); **P14** sauce bar 590×394 with ¶ about the sauce bar; S3 "TO FINISH": **P15** 590×394 + ¶ (porridge or noodles cooked in what is left of your broth); 2 link boxes (Private rooms, Visit); S2 frame |
| **Private rooms** (`private-rooms`) | P09 P05 P13 | head: H1 "Private rooms"; intro ¶; 3 sections `#room-one` `#room-two` `#room-three`, each S3 header + ruled spec (Guests · Pots · Room fee · Notice) + ¶ ≈50 words; **P17** 590×394 (a long-table celebration); S3 "HOW TO BOOK A ROOM": the room rules (request ≥3 days ahead, every guest takes a set, fee per booking, cancellation 72 h); **P10** 590×394; 3 link boxes (anchors); S2 frame |
| **Book a table** (`book`) | P16 P01 P09 | head: H1 "Book a table", lead; S3 "ONE WAY TO BOOK": **4 steps** as ruled sentences (numerals 01–04 Bricolage 500 1.25rem azuki); S3 "REQUEST": the **booking form slot** inside the S2 frame (§11; anchor `#request`); S3 "GOOD TO KNOW": table held 15 min, cancellation 24 h / rooms 72 h, 7+ guests → a private room, dietary notes; 2 link boxes (Private rooms, Visit) |
| **Visit** (`visit`) | P12 P13 | head: H1 "Visit"; wash section as home §10 (info table 498px); S3 "GETTING HERE": tram, car park, step-free entrance, lift to the rooms; **P10** 590×394 (the room before doors, `sp-parallax`); S3 "HOURS": dinner / lunch / closed / desk; S2 frame |
| **About** (`about`) | P11 P18 P06 | head: H1 "About"; S3 "SINCE 2016": founding story 3 ¶ (light rain on opening night → the name); S3 "MILESTONES": 3 ruled rows (2016 / 2019 / 2023); S3 "PEOPLE": 7 people as ruled rows with a one-line note each (not a portrait grid) + **P16** 3:4 394×525; **P17** 590×394 (`sp-parallax`); S3 "THE DAY": the daily routine list; more → Journal; S2 frame |
| **Contact** (`contact`) | P16 | head: H1 "Contact"; email, phone + desk hours, reply within one working day; S3 "WRITE TO US": **contact form slot** (§11); link box → Book a table ("For a table, use the booking request") |
| **The Pot Letter** (`newsletter`) | P03 | head: H1 "The Pot Letter"; ¶ (first Tuesday monthly); 3 example items as ruled rows (this month's broth · open room dates · one recipe at home); **newsletter slot** on a dark `#0F0B0A` panel inside the column (padding 48px) (§11) |
| **Journal** (`journal`, role posts, empty content) | P13 (archive template) | archive/home template: `ks-pagehead` "Journal"; Query Loop rows: date, title Bricolage 500 1.375rem, 160×107 thumbnail right; pagination as more button |
| **Privacy** (`privacy`) | P05 | plain text, 470px, no motion, no headers beyond h2 |

Posts (3; category **"From the kitchen"**; tags **broth**, **rooms**, **booking**; single template = `ks-split` with the featured image as the one-photo stage): "Why the broth goes on at half past five" (featured **P18**, tag broth) · "Clear or red: how to split your pot" (**P14**, tags broth) · "Booking a room for twelve" (**P17**, tags rooms, booking).

---

## 5. Colour

**Reference relationship (T(a))**: pale grained paper ~48%, near-black low-key photographs ~38%, meat red only inside the photos, one saturated accent ~2% on the seal and booking button, black text; a pink-grey wash at the access block, a sage line colour on link boxes, a light grey footer. We keep the reference hexes; the only replacement is the accent (below).

| Token (theme.json slug) | Hex | Role | Share (home) | Source |
|---|---|---|---|---|
| `paper` | `#FAFAFA` | column ground (with grain) | ~48% first screen | **T(a) exact** |
| `paper-grain` | `#F4F4F4` | grain tone (SVG noise at 5% opacity) | — | **T(a) exact** |
| `stage` | `#0B0908` | stage ground behind photos, letter section is `ink` | photos ~38% | T(a) `#000`/`#3B2D2A` photo ground, L+4% |
| `ink` | `#0F0B0A` | all text, rules, the letter section | text | T(a) `#000`, +4.9% L, warmed to sit with azuki |
| `azuki` | `#96514D` | seal, "Book a table" buttons, frame lines, step numerals | ~2% | **row hex azuki** replaces T(a) `#D61423` (reason below) |
| `azuki-deep` | `#7E423F` | button hover base, error text on light | <1% | azuki −5% L |
| `wash` | `#E8D8D8` | Visit gradient top | ~6% (below fold) | **T(a) exact** |
| `white` | `#FFFFFF` | link boxes, wash gradient end, inputs | ~3% | **T(a) exact** |
| `sage-line` | `#DBDABE` | link box border, light rules | <1% | **T(a) exact** |
| `stone` | `#C4C3B5` | footer top gradient stop, disabled | <1% | **T(a) exact** (body gradient end) |
| `footer` | `#E7E7E7` | footer ground | ~5% | **T(a) exact** |
| `muted` | `#727272` | notes, dates, sub-lines | <1% | **T(a) exact** (notice text) |
| `bracket` | `#8C8582` | more-button strokes | <1% | measured on `ref/scroll-ok-3600.png` bracket |
| `success` | `#3E5B44` (bg `#E6EADF`) | form success | — | sage-line darkened −55% L |

- **Why azuki instead of `#D61423`**: the row assigns azuki (adzuki-bean red) `#96514D` (same red family as the reference accent) and asks for a quiet palette; a vivid `#D61423` button repeated on every page would read as fast-food red against low-key photos. Azuki keeps the reference's role and placement (seal, button, frame lines) at the same ~2% share.
- Contrast: ink on paper 19.4:1; white on azuki 5.9:1; muted on paper 4.6:1; paper on ink 19.4:1; ink on wash 15.1:1.
- **First-screen saturated share: target ≤10%, gate cap 15%, row cap 30%.** No beige or cream substitution: the ground is the reference's cool near-white `#FAFAFA`. Recent main colours (Butai ink-black, Hako, Komorebi greige / terracotta, Hinata russet) are avoided as dominant colours.
- **Grain**: `ks-paper` background = `#FAFAFA` + inline SVG `feTurbulence` (baseFrequency .9, 2 octaves, opacity .05) data URI tile 200×200 in style.css; no image file.

---

## 6. Typography (sans direction)

Loaded only through **theme.json `fontFamilies` + `fontFace`** (woff2 in `assets/fonts/`, OFL licence files, every file listed in theme-meta.json `fonts[].files` with `licenseFile`, family names in readme.txt) so the editor iframe and the front end show the same faces. style.css has `:lang()` rules → copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it. `check-editor-fonts.mjs` must pass in en and zh-TW.

| Family (slug) | Files | Stack |
|---|---|---|
| `display` Bricolage Grotesque (variable wght 400–700, opsz) | `bricolage-grotesque-variable.woff2` | `"Bricolage Grotesque", "Helvetica Neue", Arial, sans-serif` |
| `body` DM Sans (variable wght 300–600, + italic 400) | `dm-sans-variable.woff2`, `dm-sans-italic-variable.woff2` | `"DM Sans", "Helvetica Neue", Arial, sans-serif` |
| `display-zh` Noto Sans TC (subset, 500) | `noto-sans-tc-500-subset.woff2` | zh-TW headings: `"Bricolage Grotesque", "Noto Sans TC", "PingFang TC", "Microsoft JhengHei", sans-serif` |
| `display-ja` Noto Sans JP (subset, 500) | `noto-sans-jp-500-subset.woff2` | ja headings: `"Bricolage Grotesque", "Noto Sans JP", "Hiragino Sans", "Yu Gothic", sans-serif` |

CJK body (system fonts only; must **not** contain the bundled zh / ja families): zh-TW `"DM Sans", "PingFang TC", "Microsoft JhengHei", "Noto Sans CJK TC", sans-serif`; ja `"DM Sans", "Hiragino Sans", "Yu Gothic", "Noto Sans CJK JP", sans-serif`. Subsets via the Hokuto / Hada replacement method (the shared zh subset script is broken), covering every heading, vertical header, phrase and wordmark glyph in demo-content.zh-TW.json / ja.json and the i18n dictionaries. No serif or Mincho face anywhere (the reference is Mincho; the row's sans direction overrides it, and we keep the reference's light weights and wide tracking instead).

Sizes (theme.json `fontSizes`; reference T(b): root 10.54px at 1440, body 16.9 / 15.8px lh 2.0, lead 19px, headings 21–25px, wide tracking):
| Slug | Size | Use | Token |
|---|---|---|---|
| `x-small` | .75rem | sub-lines, legal, © | T(b) notice 12.9px |
| `small` | .8125rem | notes, dates, nav, kicker | T(b) notice |
| `medium` | 1rem | body | T(b) body 15.8–16.9px |
| `large` | 1.1875rem | lead | **T(b) lead 19px** |
| `x-large` | 1.3125rem | frame heading, button, Visit name line | **T(b) reservation 21px** |
| `xx-large` | 1.5625rem | S3 vertical heading | **T(b) vertical heading 25.3px** |
| `huge` | 3rem | KOSAME wordmark (stacked) | (ref logo glyphs ≈48px) |
| `display` | **4.25rem** | inner H1, home band statement | largest (rule) |

- **Body**: DM Sans 400, 1rem, **lh 2.0** (T(b) 31.6/15.8), ls .04em (T(b) .2em is CJK tracking; Latin at .2em is unreadable), ink. Paragraph gap 1.6em.
- **Lead**: DM Sans 400 1.1875rem lh 2.0 ls .06em (T(b) 19/38).
- **S3 heading**: Bricolage Grotesque 500 1.5625rem uppercase ls .3em (T(b) .66em CJK → .3em Latin), vertical-rl mixed. Label DM Sans 400 .875rem ls .4em (T(b) 15.8px / .4em).
- **Frame heading** Bricolage 400 1.3125rem ls .2em uppercase; **button** DM Sans 500 1.3125rem ls .15em (T(b)).
- **Nav** DM Sans 500 .8125rem uppercase ls .14em. **Wordmark** Bricolage 600 1rem ls .32em.
- **Inner H1** Bricolage 500 4.25rem lh 1.0 ls −.01em; **band statement** same face 4.25rem lh 1.05; mobile both 2.75rem.
- Weights: 400 / 500 only on screen (T(b) 400 / 500), 600 only for the wordmark.
- **zh-TW / ja**: headings ×0.75 of the Latin size except vertical ones (S3 heading 1.5625rem upright, ls .5em; stage phrases 1.75rem upright), body lh **1.85**, body ls .08em; each vertical heading ≤8 characters, each phrase ≤10 characters (rewrite locally, don't translate literally). **de / fr**: `hyphens: auto`; the S3 Latin heading may wrap to a second vertical column (`max-height` none) — never shrink below 1.25rem.

---

## 7. Motion and scroll (sp-scroll)

Copy `pipeline/assets/sp-scroll/` unchanged to `assets/`; enqueue css + js in the head (js not deferred); `add_editor_style('assets/sp-scroll.css')`. Theme variables (style.css): `:root { --sp-dist: 30px; --sp-dur: 1.5s; --sp-ease: cubic-bezier(.5,1,.89,1); }` (T(g) body fade-up 3rem ≈32px capped to 30px, 1.5s power2.out); `.ks-vhead { --sp-dur: .75s; --sp-ease: cubic-bezier(.83,0,.17,1); --sp-dist: 16px; }` (T(g) headings 0.75s power4.inOut).

### 7.1 Chosen effects (3 from stage-a "Scroll effect candidates" + parallax)
| # | Effect | sp-* | Where | Reference (ginza.o-ki.co.jp) trigger / time / easing | Ours |
|---|---|---|---|---|---|
| E1 | Vertical heading write-in + growing 1px line | `ks-vhead` gets `sp-stagger`; label and title `sp-reveal sp-reveal--up`; the rule wrapper `sp-reveal sp-reveal--wipe` (clip on its child span, top → bottom = the line growing down) | every S3 header, home §3–§10 and inner pages | GSAP ScrollTrigger once at "top 75%": characters rise / fade, stagger .05s; 1px line scaleY 0→1; 0.75s power4.inOut (T(g)) | per element (not per character), .12s steps, .75s `cubic-bezier(.83,0,.17,1)`, 16px; wipe uses the sp built-in 1.1s `cubic-bezier(.77,0,.175,1)` |
| E2 | Body block fade-up with stagger | parent group `sp-stagger`; ¶, photos (figure wrapper), link boxes, ruled lists `sp-reveal sp-reveal--up` | home §3–§9 text and photos, §10 name line; inner page sections | `data-fadeup`: translateY 3rem → 0 + opacity, 1.5s power2.out, stagger .15s (T(g)) | 30px, 1.5s `cubic-bezier(.5,1,.89,1)`, .12s steps (sp-stagger) |
| E3 | Booking frame four lines draw in | frame `sp-reveal sp-reveal--up`; lines are theme CSS keyed on `.ks-frame.sp-in` (§1 S2) | home §2, §11; inner S2 frames; Book page form frame | reservation frame lines draw in sequence on ScrollTrigger (T(d), T(g)) | 4 × .4s `cubic-bezier(.33,1,.68,1)`, delays .2 / .6 / 1.0 / 1.4s |
| (P) | Parallax | `sp-parallax` | §7.2 | — | — |

Also from T(g), theme CSS only (not sp-*): stage timer cross-fade (§1 S1), the table / ruled-list **top rule** `scaleX(0 → 1)` .8s `cubic-bezier(.25,1,.5,1)` keyed on the parent `.sp-in` (same gating as E3), button hover clip-path wipe (azuki → ink, `clip-path: inset(0 100% 0 0) → inset(0)` on an empty `::before`, .4s `cubic-bezier(.5,1,.89,1)`; hover transitions carry `transition-delay: 0s`).
- **No reveal** in the first screen (stage, header, seal), on forms or their wrappers, on the price table / info table rows, hours, or the Privacy page. Reveals ≤60% of home blocks. Not used: `sp-count`, `sp-marquee`, `--zoom`, `--mask`, `--left/--right`.

### 7.2 Parallax (required)
The desktop stage is `position: sticky` (it never moves relative to the viewport), so the stage itself carries **no** `sp-parallax`; parallax lives on in-flow photos, which also keeps it on mobile.
| Where | Block | Moving layer | Foreground (static) | `--sp-par` desktop / mobile | Reference motion |
|---|---|---|---|---|---|
| **Band** (home §12, primary) | Cover `ks-band sp-parallax`, full width, min-height 720px | **P13** cover background (`.wp-block-cover__image-background`) | statement "Broth on at 05:30. Doors at 17:00." (not in the layer) | **10% / 6%** | the reference's large low-key photo drifting behind the paper (stage slides seen through the scroll); here a full-width pause between the column and the letter |
| **Column photos** (home §3 P06, §6 P09; inner pages: the first column photo of each page) | Group `ks-photo sp-parallax` (590×394, `overflow: clip`) wrapping `figure > img` | P06, P09 (home); P18 Broths, P14 Courses, P17 Private rooms, P10 Visit, P17 About | none (caption below the frame, outside) | **8% / 5%** | T(e) section images 590×394 in the column, slowed against the scrolling paper |
Reduced motion, `?sp-static`, no JS and the editor: no movement. Acceptance: `check-parallax.mjs` desktop 1280×900 + mobile 390×844: band displacement difference ≥6px, ≤1px under reduced motion; ≥3 reveals hidden before entering and final after; nothing transparent after scrolling to the bottom (stage slides 2–5 are opacity 0 by design under `?sp-static`; they are not `.sp-reveal` elements).

---

## 8. Responsive rules (hard)

- **≥960px**: `ks-split` 50/50; stage sticky 100vh; header absolute over both halves.
- **<960px**: one column. Header in flow 64px (paper). Stage in flow, `height: 52svh; min-height: 360px`, slides cross-fade, dots horizontal (left 20 / bottom 20, `flex-direction: row`), phrases **hidden**. The stage appears **only once at the top of each page** (it is not repeated between sections). Column full width with 24px side padding.
- **390px first screen**: as §3 "390×844 first screen". No `writing-mode` in the first screen, no absolutely positioned label over text, no overlap.
- **S3 headers <782px**: horizontal (§1 S3). Seal H1 horizontal <960px.
- **Price table ≥782px** (home §5 and Courses): `width: 100%` of the column (**full column width**, 590px; inside Courses also 590px); `table-layout: auto`; columns: course name (left, wraps) · what's in it (left, `#727272` .875rem, hidden <960 in the home column to keep the row short) · **price `white-space: nowrap; text-align: right; width: 1%; padding-left: 24px`**; 1px ink rules, row padding 22px 0; no `overflow: hidden` on any wrapper; not clipped at 800 and 1280 (at 800 the layout is one column 752px wide).
- **Info table** (Visit): 498px centred ≥782px; label column 34%, value left.
- **Any table <782px**: stacked — each row becomes a block: name (Bricolage 500 1rem) with the price on the right of the same line (flex, `justify-content: space-between`, price nowrap), description below; info table rows become `label` above `value`. 1px rules between rows. No horizontal scrolling.
- Link boxes `width: 100%` <600px, height auto (min 112px); more button 100% <430px.
- Band <782px: min-height 520px, statement 2.75rem at left 24px bottom 48px.
- Letter <782px: stacked (heading, ¶, slot). Footer <782px: stacked.
- Touch targets ≥44px. `html, body { overflow-x: clip }`; `ks-split` and its parents never `overflow: hidden` (sticky). `scrollWidth == innerWidth` at 390 and 1280.

---

## 9. Fixed facts (identical on every page and in all five locales; brand.md must copy these)

- **Name**: Kosame Hot Pot ("kosame" = light rain; it rained on the opening night). **Founded** 2016 by **Mara Lindqvist** and **Daniel Cho**. **Address**: 14 Harbour Row, Wellmouth (fictional). **Phone** +44 1632 960 527 (booking desk, Tue–Sun 14:00–22:00). **Email** table@kosame-hotpot.example (every mailto).
- **Room**: 18 tables for 1–6 guests (64 seats) in the dining room, each with its own induction burner and pot; **3 private rooms** upstairs.
- **Broths (4, all finished by dawn)**: **Clear** — chicken and kelp, 6 hours · **Red** — beef fat, dried chilli and Sichuan pepper, 4 hours · **White** — pork bone, 12 hours (started the evening before) · **Forest** — mushroom and kelp, vegetarian, 3 hours. Any two in one split pot at no extra cost.
- **Price list (7 items, per person; home §5 and Courses identical)**:
  | Item | What's in it | Price |
  |---|---|---|
  | Garden set | seasonal vegetables, tofu, mushrooms, hand-cut noodles (vegetarian with Forest broth) | **€32** |
  | Pork set | shoulder and belly slices, vegetable platter | **€38** |
  | Beef set | brisket and chuck slices, vegetable platter | **€46** |
  | Seafood set | prawns, mussels, white fish, squid, vegetable platter | **€52** |
  | Marbled beef set | marbled sirloin and rib slices, vegetable platter | **€64** |
  | Extra plate of marbled beef | 150 g | **€18** |
  | The finish | rice porridge with egg, or noodles, cooked in your broth | **€6** |
  Every set: split pot, vegetable platter, sauce bar. Dinner: two hours at the table.
- **Private rooms (3)**: **Room One** 2–4 guests, 1 pot, room fee **€30** · **Room Two** 6–8 guests, 2 pots, **€50** · **Room Three** 10–14 guests, 3 pots on one long table, **€80**. Fee per booking; every guest takes a set; request ≥3 days ahead; free cancellation until **72 hours** before.
- **Hours**: dinner **Tue–Sun 17:00–22:30** (last order 21:30) · lunch **Sat–Sun 12:00–15:00** (last order 14:00) · **closed Monday** · booking desk Tue–Sun 14:00–22:00.
- **Book a table (the single way, 4 steps)**: 1 choose the date, time, number of guests and the dining room or a private room · 2 send the booking request (form on Book a table, or the email it opens) · 3 we confirm by email **within 3 hours** during desk hours (requests after 22:00 are answered from 14:00 the next opening day) · 4 arrive; the table is held **15 minutes** and your pot is on the burner as you sit. Free cancellation until **24 hours** before (private rooms 72 hours). 7 or more guests → a private room.
- **A day at Kosame (daily routine)**: 05:30 broths on · 07:30 market delivery at the back door · 10:00 meat cut and plated cold · 12:00 lunch (Sat–Sun) · 14:00 booking desk opens · 16:30 burners tested, pots set · 17:00 doors · 22:30 close; broths strained, the white broth started for tomorrow. (Home §7 shows 8 rows: 05:30, 07:30, 10:00, 14:00, 16:30, 17:00, 21:30 last order, 22:30.)
- **People (7)**: Mara Lindqvist — co-founder, front of house · Daniel Cho — co-founder, head of broth · Inés Valero — meat and the cold kitchen · Kwame Mensah — vegetables and the market run · Lena Petrova — private rooms host · Tomás Ferreira — floor lead, burners and pots · Aisha Rahman — booking desk.
- **Milestones (3)**: 2016 opens with 9 tables · 2019 the dining room doubles to 18 tables · 2023 three private rooms open upstairs.
- **Stories (3 posts)**: "Why the broth goes on at half past five" · "Clear or red: how to split your pot" · "Booking a room for twelve".
- **Getting here**: Harbour Row tram stop, 3 minutes on foot; Harbour car park 200 m; step-free entrance; lift to the private rooms.
- **The Pot Letter**: first Tuesday of each month: the month's broth, open private-room dates, one recipe to cook at home.
- **Audience**: couples, families, friends and work groups booking a table or a private room; theme buyers are hot pot, shabu-shabu and sukiyaki restaurants taking table and private-room bookings. **Tone**: calm, precise, warm, short sentences; no awards, no "best", no health claims, no guarantees.

---

## 10. Images (18 photographs, one STYLE; 13 on home)

**STYLE** (identical for every image):
`IMAGE_STYLE="low-key restaurant food photograph, near-black background, one warm tungsten light from the side, rising steam catching the light, deep soft shadows, glossy textures, muted brick red and amber tones, pale crackle-glaze ceramics and brushed steel pots, 50mm lens, shallow depth of field, quiet and unposed, modern international hot pot restaurant, diverse adults, natural skin tones, no text, no letters, no numbers, no logos, no brand names, no signage, no menus, no Japanese elements"`
Generate one at a time with `scripts/grok-image.sh out.webp "<subject>"`; Read every image; regenerate any with text, logos, broken hands / faces, a bright high-key look, or a saturated red over ~15% of the frame (P01 especially). ≤300 KB, ≤2000px, webp. No cut-outs.

| # | File | Subject (prompt core) | Ratio / size | Used on (page · block) | Home |
|---|---|---|---|---|---|
| P01 | `kv-split-pot.webp` | **KV**: a server's hands (rolled sleeve, dark apron) lowering a split steel hot pot — one half clear golden broth, the other deep brick-red chilli broth — onto a table burner; steam rising into one warm pendant light; a pale crackle-glaze plate of marbled beef, a dish of greens and two small sauce bowls around; dark wood table | 0.8, 1600×2000 | Home stage slide 1 · Book stage | ✔ |
| P02 | `beef-plate.webp` | marbled raw beef slices fanned on a large pale crackle-glaze plate, one sprig of green, near-black ground, side light | 0.8, 1600×2000 | Home stage 2 · Courses stage | ✔ |
| P03 | `ladle-pour.webp` | a ladle pouring clear golden broth into a small bowl over a simmering pot, steam | 0.8, 1600×2000 | Home stage 3 · Broths stage · Pot Letter stage | ✔ |
| P04 | `vegetable-platter.webp` | a platter of napa cabbage, enoki and shiitake mushrooms, tofu, leafy greens and noodles on dark stone | 0.8, 1600×2000 | Home stage 4 · Courses stage | ✔ |
| P05 | `room-four.webp` | a dim amber private room for four: dark timber walls, a table with a built-in burner and an empty pot, four chairs, one pendant | 0.8, 1600×2000 | Home stage 5 · Private rooms stage · Privacy stage | ✔ |
| P06 | `dawn-stockpots.webp` | before dawn in the kitchen: two large steel stockpots steaming on low flames, a cook (man, 40s, East Asian) skimming with a fine ladle, blue window light and one warm work lamp | 1.5, 2000×1333 | Home §3 · Broths stage · About stage | ✔ |
| P07 | `four-broths.webp` | top-down: four small bowls of broth in a row on dark wood — clear golden, brick-red chilli, milky white, dark mushroom | 1.5, 2000×1333 (stage crop 0.8 centre) | Home §4 · Broths stage | ✔ |
| P08 | `set-course.webp` | top-down set course on a dark table: split pot in the centre, plates of sliced meat, vegetables, sauce bowls and chopsticks around | 1.5, 2000×1333 | Home §5 · Courses stage | ✔ |
| P09 | `room-long-table.webp` | a larger private room, long dark table with three burners and pots, twelve chairs, warm low light, a timber screen half open | 1.5, 2000×1333 | Home §6 · Private rooms stage · Book stage | ✔ |
| P10 | `before-doors.webp` | the empty dining room at 16:30: a server (woman, 30s, Latina) setting a pot on a burner, tables laid, warm pendants, dark | 1.5, 2000×1333 | Home §7 · Private rooms column · Visit column | ✔ |
| P11 | `head-of-broth.webp` | portrait: the head of broth (man, 50s, Korean) in a dark apron beside the stockpots, steam behind, calm | 3:4, 1500×2000 | Home §8 · About stage | ✔ |
| P12 | `storefront-rain.webp` | night street in light rain: a narrow restaurant front with a warm-lit window misted by steam, wet pavement reflections, no sign, no text | 2.9, 2000×690 | Home §10 · Visit stage | ✔ |
| P13 | `dining-room-service.webp` | wide: the dining room in full service, many small pots steaming on tables, guests softly blurred, warm low light | 2.4, 2000×834 | Home §12 band · Private rooms stage · Visit stage · Journal archive stage | ✔ |
| P14 | `sauce-bar.webp` | a sauce bar: small bowls of sesame paste, chilli oil, soy and citrus, chopped herbs, garlic, on dark stone, a hand with a small spoon | 1.5, 2000×1333 | Courses column · post 2 | |
| P15 | `the-finish.webp` | the finish: rice porridge with a soft egg being stirred in the last of the broth in the pot, steam | 1.5, 2000×1333 | Courses column | |
| P16 | `booking-desk.webp` | the entrance desk in the evening: a host (woman, 30s, South Asian) writing in a booking book beside a phone, coats on hooks, warm lamp | 3:4, 1500×2000 | Book stage · Contact stage · About column | |
| P17 | `room-celebration.webp` | a celebration in a private room: diverse guests around steaming pots raising glasses, faces partly turned or soft, low warm light | 1.5, 2000×1333 | Private rooms column · About column · post 3 | |
| P18 | `market-delivery.webp` | 07:30 at the back door: crates of vegetables and a box of bones carried in by a cook (man, 30s, West African), cool morning light and one warm doorway | 1.5, 2000×1333 | Broths column · About stage · post 1 | |

Per-page check (no repeats on one page): **Home** P01–P13 · **Broths** P07 P03 P06 P18 · **Courses** P08 P02 P04 P14 P15 · **Private rooms** P09 P05 P13 P17 P10 · **Book** P16 P01 P09 · **Visit** P12 P13 P10 · **About** P11 P18 P06 P16 P17 · **Contact** P16 · **Pot Letter** P03 · **Privacy** P05 · **Journal** P13 · posts: 1 P18, 2 P14, 3 P17.
Stage photos are `object-fit: cover` in a portrait half (0.8 at 1440×900); 1.5 photos used on stages are cropped to their centre (`object-position: center 55%`).

---

## 11. Forms (form contract v1: `steps/form-contract-v1` exists)

Copy `pipeline/assets/forms/shippress-forms.php` unchanged to `inc/`, its CSS and editor JS unchanged to `assets/`; `require` it in functions.php. Patterns stay literal block markup with a small PHP island for `shippress_form_slot` (README pattern), imported with `wp_slash()`. **No form in the home first screen; no `sp-reveal` on any form or its wrapper** (the frame lines around the Book form are drawn statically: the Book form frame has no `sp-reveal`).
- **Book a table (`book`, booking; anchor `#request`)**: section "REQUEST" inside an S2 frame (four 3px azuki lines, static) on paper: frame heading "Reservations" + 1px underline, then `shippress_form_slot( kind: contact, fallback )`. **Fallback** = buffered literal mailto button **"Email your booking request"** (`wp-element-button`, azuki, full frame width 530px, href `mailto:table@kosame-hotpot.example?subject=<forms_book_subject>`) + hint "Opens your email app. Tell us the date, time, number of guests, dining room or private room, and a phone number." Never links to `/book/` or `/contact/`. Recommended CF7 fields (readme, not created by the theme): name*, email*, phone*, date* (date), time* (select 12:00–13:30 Sat–Sun / 17:00–21:00 every 30 min), guests* (select 1–14), where* (select: Dining room / Room One / Room Two / Room Three), broth pair (select: any two of Clear / Red / White / Forest, or "decide at the table"), dietary notes (textarea), consent* (checkbox), submit **"Send booking request"**.
- **Contact (`contact`)**: slot kind contact; fallback mailto **"Email us"** (subject `forms_contact_subject`) + hint. Fields: name*, email*, topic (select: A booking I made / Private rooms / Allergies / Other), message*, consent*. Link box under it → Book a table.
- **The Pot Letter (`newsletter`)**: standalone page (not an alias of the posts page); dark panel `#0F0B0A` in the column, padding 48px, radius 0, text paper: `shippress_form_slot( kind: newsletter, email: table@kosame-hotpot.example, label: forms_email, submit: forms_subscribe, notice: forms_mail_notice, subject: forms_mail_subject )`.
- **Home §13**: the same newsletter slot on the dark letter section. **Footer**: link to the page only (no second slot). Light case = Book / Contact on paper; dark case = letter / Pot Letter panel.
- Plugin order (shared helper): newsletter MailPoet (explicit id) → MC4WP; CF7 / WPForms only via an explicit dedicated newsletter id. Contact / booking kinds CF7 → WPForms. Without plugins the newsletter shows a required `type=email` field + submit, native mailto POST, notice visible ("Opens your email app… you are not subscribed yet").
- **Tokens** (style.css, mapped to theme.json presets):
  - light (default, paper): `--sp-form-accent: var(--wp--preset--color--azuki)` #96514D; `--sp-form-on-accent: var(--wp--preset--color--white)`; `--sp-form-radius: 0` (T(d) radius 0 everywhere); `--sp-form-focus: var(--wp--preset--color--ink)` (2px outline, offset 2px); `--sp-form-surface: var(--wp--preset--color--white)`; `--sp-form-text: var(--wp--preset--color--ink)`. Inputs 52px tall, 1px border `#DBDABE` (sage-line, T(d)), hover border `#8C8582`, DM Sans 400 1rem, padding 14px 16px; textarea min 160px; select with a 1px chevron; labels DM Sans 500 .8125rem uppercase ls .14em ink, 8px above the field; checkbox / radio 18px, `accent-color: #96514D`; submit 64px tall full width, DM Sans 500 1.125rem ls .15em, hover ink wipe .4s (T(g)); disabled `#C4C3B5`. Error: text + 1px border `#7E423F` (azuki-deep), message .8125rem under the field; success panel `#E6EADF` text `#3E5B44`, 1px `#DBDABE` border.
  - dark (`.ks-dark`, ink ground): `--sp-form-surface: #1E1816`; `--sp-form-text: #FAFAFA`; `--sp-form-accent: #FAFAFA`; `--sp-form-on-accent: #0F0B0A`; `--sp-form-focus: #E8D8D8` (2px); field border `rgba(250,250,250,.32)`; placeholder `rgba(250,250,250,.55)`; error `#E7A3A0`; success `#B9CDB8`; labels and notice inherit paper.
  - States styled: input, textarea, select, checkbox / radio, label, submit, hover, focus-visible, disabled, error, success; scoped to CF7, WPForms, MailPoet, MC4WP (+ Jetpack, `.wp-block-form`) classes and `.sp-newsletter-fallback`; **no global input / form selectors**.
- **i18n semantic keys** (`inc/i18n/en.php` first, extract with `L10N_SEMANTIC=1`; rewritten locally in en, zh-TW, ja, fr, de; dynamic block attributes included): `forms_email` "Email address", `forms_subscribe` "Send me The Pot Letter", `forms_mail_notice` "This opens your email app. Send the message to subscribe; you are not subscribed yet.", `forms_mail_subject` "Subscribe to The Pot Letter", `forms_contact_subject` "Hello from the website", `forms_book_subject` "Booking request", `contact_email` "Email us", `forms_book_button` "Email your booking request", `forms_book_hint`, `forms_contact_hint`.
- Validation: `form-check.py`, five-locale `form-runtime-check.php`, `repo-gates.sh forms`; a real CF7 check at 390px and desktop on light (Book) and dark (Pot Letter); never submit.

---

## 12. Similarity table (target ≈ 80%; values from reference-tokens.md)

| Dimension | Reference value (token) | Kosame value |
|---|---|---|
| Ground | paper `#FAFAFA` + grain ~48% (T(a)) | `#FAFAFA` exact + SVG grain 5% ~48% |
| Photo ground | `#000` / `#3B2D2A` ~38% (T(a)) | `#0B0908` stage + low-key photos ~38% |
| Text | `#000` (T(a)) | `#0F0B0A` (+4.9% L) |
| Accent | `#D61423` seal + button ~2% (T(a)) | azuki `#96514D` seal + button + frame lines ~2% (row hex; §5 reason) |
| Wash / line / footer | `#E8D8D8`→`#FFF`, `#DBDABE`, `#E7E7E7` (T(a)) | exact |
| Saturated share | 11.5% (T(a)) | target ≤10% (cap 15%) |
| Layout | sticky photo stage 50vw × 100vh + 720px paper column, content 590px (T(c)) | identical; <960 stacked top / bottom halves |
| Stage decoration | 5 dots 6px white 40% / 100% at lower left; two vertical white phrases at right edge (T(f)) | identical: left 44 / bottom 44, gap 26; phrases right 40, top 120 / bottom 96 |
| Logo screen | 100vh, vertical logo with red seal centred (T(c), T(f)) | 100vh, azuki seal 88px + stacked KOSAME 3rem + vertical "HOT POT" |
| Section spacing | margin 422px; heading padding 185 / 70; heading min-height 373 (T(c)) | 420px gap (≥1280); vhead margin-bottom 72px; min-height 280px |
| Vertical header | vertical heading 25.3px 700 ls .66em + 1px rule + rotated Latin label 15.8px ls .4em (T(b), T(f)) | 1.5625rem (25px) 500 ls .3em uppercase + 1px rule + label .875rem ls .4em |
| Type | Mincho 400/500, body 15.8px lh 2.0, lead 19/38, reservation 21px ls .2em (T(b)) | sans (row): DM Sans 400/500 body 1rem lh 2.0, lead 1.1875rem lh 2.0, frame heading 1.3125rem ls .2em |
| Booking frame | heading + 1px underline 216px; red button 530×95, 21px ls .15em; 4 × 3px red lines draw in (T(d)) | identical geometry; button 530×88; lines 3px azuki, .4s each sequential |
| Link box | white, 2px `#DBDABE`, 527×126, long thin arrow bottom-right 28px (T(d)) | identical |
| More button | 313×63 corner brackets, broken top / bottom edges (T(d)) | identical, stroke `#8C8582` |
| Data table | 498px, rows 27px padding, 1px rules; top rule scaleX .8s cubic-bezier(.25,1,.5,1) (T(c), T(g)) | info table 498px identical; price table 590px (full column, rule) |
| Radius / shadow | 0 / none (T(d)) | 0 / none |
| Section images | 590×394 (1.5), radius 0, no mask, no overlap; building photo 590×≈200 (T(e)) | P06–P10 590×394; P12 590×200; P11 portrait 394×525 |
| Imagery | low-key: dark ground, one warm light, glossy raw meat on pale crackle plates, steam, amber rooms (T(e)) | same (STYLE §10) |
| Stage motion | timer cross-fade ~3.5s / ~1s, loop (T(g)) | 3.5s / 1s, 17.5s loop, CSS only |
| Heading motion | chars rise stagger .05s + line scaleY, .75s power4.inOut (T(g)) | per element stagger .12s, .75s cubic-bezier(.83,0,.17,1) + rule wipe |
| Body motion | fade-up 3rem, 1.5s power2.out, stagger .15s (T(g)) | 30px, 1.5s cubic-bezier(.5,1,.89,1), .12s |
| Button hover | clip-path wipe .4s power2.out (T(g)) | identical (azuki → ink) |
| Header | transparent, hamburger only, hides on scroll (T(g)) | transparent, scrolls away; visible split nav (row) + Book button |
| Additions (not in ref) | — | full-bleed P13 band with parallax; dark letter section (forms contract) |

---

## 13. Home acceptance checklist (stage 1)

1. 1440×900 first screen: left half P01 (server lowering a split clear / red pot onto a burner, steam), sticky; white nav on the photo; 5 dots lower left; two vertical white phrases at the right edge; right half paper with grain, wordmark + azuki "Book a table" in the header row, azuki seal + stacked H1 **KOSAME** + vertical "HOT POT" centred. Nothing else (no form, table, search, second heading).
2. With `?sp-motion` the stage cross-fades P01→P05 every 3.5s with a 1s fade and the active dot follows; with `?sp-static` / reduced motion only P01 shows, dot 1 active.
3. Scrolling at 1440: the stage stays fixed through §1–§11 while the column scrolls; it scrolls away only at the §12 band.
4. 390×844: header 64px; stage in flow ≈52svh with horizontal dots and no phrases; then seal + horizontal H1; **no vertical writing, no absolute labels, no overlap**, no horizontal overflow.
5. §2 booking frame right after the seal: "Reservations" + 1px underline, full-width azuki "Book a table" button 530×88, two notes, four 3px azuki lines (drawn in with motion; fully drawn static).
6. §3–§10 each open with a centred vertical header (label · 1px rule · heading) at ≥782; horizontal <782.
7. §5 price table: 7 rows matching §9 (€32 / €38 / €46 / €52 / €64 / €18 / €6), full column width, price column nowrap right, not clipped at 800 and 1280; stacked <782.
8. §6 three white link boxes with 2px `#DBDABE` border and long arrows; more buttons with corner brackets in §3, §4, §9.
9. §7 daily routine (8 rows, 05:30 … 22:30) and narrative ¶; §8 P11 + 7 named people; §9 3 notice rows (text only); §10 wash gradient `#E8D8D8`→`#FFF`, P12 590×200, info table 498px (Tue–Sun 17:00–22:30, Sat–Sun 12:00–15:00, closed Monday, desk 14:00–22:00, phone, address).
10. §11 closing booking frame; §12 full-width P13 band with the 4.25rem statement bottom-left and visible parallax; §13 dark letter with the newsletter slot (email + submit + notice without plugins; no reveal); footer `#E7E7E7` with page index.
11. 13 unique photo positions on home (9 visible statically, ≥8); 0 cut-outs; every image Read-checked (no text, logos, signage).
12. ≥250 English words (target ≈620), ≥3 narrative ¶ of ≥20 words; the word "daily" or "day" appears with the routine.
13. Effects: sp-stagger + sp-reveal--up, sp-reveal--wipe (vhead rule), sp-parallax only (+ theme CSS frame lines, table rules, hover wipe, stage timer); no reveal in the first screen, forms, tables, hours; `check-parallax.mjs` passes desktop + mobile; reduced motion shows the final state.
14. First-screen saturated share ≤10% (cap 15%); largest theme.json size 4.25rem; fonts via theme.json fontFace (Bricolage Grotesque, DM Sans, Noto Sans TC / JP subsets); editor matches the front end; no serif face anywhere.
15. Radius 0 everywhere; no shadows; exactly one top menu; "Book a table" is the only booking wording.
16. auto-gates `1 1` pass for en; `pattern_source.py` passes.
