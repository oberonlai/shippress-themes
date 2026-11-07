# Ibuki Cardiology: design spec (stage 1, binding for implementation)

Slug `ibuki-cardiology`, outpatient cardiology clinic, type `health` (WooCommerce-compatible but not required). Design row b24-1: archetype sticky-media, first screen full-bleed-photo-info-bar, page structure narrative-problem-method-proof, font direction **sans**, IMAGERY **photo**.
Reference: https://morethan-kobe.jp/ (S5-Style, health / welfare; only reference, no secondary). Measurements in `reference-tokens.md`, mapping in `reference.md`, screenshots in `brand/ref/`. We borrow structure, shapes, proportions, motion, colour relations and the hero concept. We do **not** copy its photos, copy, logo, the "MORETHAN" wordmark ticker words or its page-for-page layout.

Fixed brand facts (every page, all five languages): **Ibuki Cardiology**, founded **2011**, **14 Harbour Lane, Northbridge** (fictional, internationally neutral city). Founding cardiologist **Dr. Elena Varga**. Open **Mon–Fri 08:00–17:30**, **Sat 09:00–12:30 (follow-ups only)**, closed Sunday and public holidays. Follow-up desk **13:00–16:00** weekdays. Currency **USD** in every language (no conversions). All numbers in section 9.

---

## 0. Similarity target (≈80% to the reference) — tokens used directly

| Dimension | Reference value (token) | Ibuki value | Source token |
|---|---|---|---|
| Ground / ink / band / ghost | white 45% · ink `#131414` 35% · slate `#686E74` 15% · ghost `#E7E7E8` | white `#FFFFFF` 45% · ink `#131414` 30% · slate-green `#5F6F68` 15% · ghost `#E7E7E8` (statement start colour, hairlines on slate) · mist `#EEF0EF` 9% | (a) |
| Accent | none in UI | heart red `#B4574F` ≤1% (dots only) | (a) + industry |
| First-screen saturated share | 5.9% | target ≤8%, hard cap 15% (`check-first-screen.py`) | (a) |
| Display family | Bricolage Grotesque, tight tracking, mixed case | Inter Tight 600, tight tracking, mixed case, never uppercase | (b) |
| Statement | 48px / 600 / lh 1.7 / ls −0.08em | 3rem (48px) / 600 / lh 1.7 / ls −0.05em (Inter Tight is pre-tightened; −0.05em renders the same optical density as Bricolage −0.08em) | (b) |
| Section title | ~88px / 600 tight | 5.5rem (88px) / 600 / lh 1.0 / ls −0.04em | (b) |
| Section statement | 40px / 500 / lh 72px / ls −1.2px | 2.5rem / 500 / lh 1.8 / ls −0.03em | (b) |
| Sub-label | 22px / 600 | 1.375rem / 600 | (b) |
| Body | 15px / 500 / lh 27px | Manrope 0.9375rem / 500 / lh 1.8 | (b) |
| Nav | 16px / 400 | Manrope 1rem / 500 | (b) |
| Header | 90px, CTA block 180×90 flush top-right | 90px, ink block 180×90 flush top-right | (c) |
| Band above hero photo | 127px white | white band, ~200px (holds the H1; see 3.1) | (c),(e) |
| Columns | wide rows x 75, text column x 184 (≈1073px) | `--ib-gutter: clamp(20px, 5.2vw, 75px)`; text column inset `clamp(0px, 7.6vw, 109px)` from the wide edge, max 1073px | (c) |
| Section padding | 120–150px top (mobile 45–50), 180 bottom, 300 before interview | 136px top / 160px bottom (mobile 48 / 56); 240px before the slate band | (c) |
| Radius / shadow | 0 / none | 0 everywhere / none | (d) |
| Rules | 1px ink underline rows; 240px hairline leader | same: 1px `#131414` row underlines; 240px 1px leader (`#E7E7E8` on slate) | (d),(f) |
| Numerals | "(01)" 14px left of 22px underlined rows + diagonal arrow ↗ | same: "(01)" 0.875rem, row text 1.375rem/600, ↗ at row end | (f) |
| Hero photo | full-bleed 1440×~680, people toward camera, long shadows | full-bleed 1440 × clamp(420px, 100svh − 360px, 680px), P01 | (e) |
| Work photo | 4:5 portrait 638 wide at x 75 + same-width ink tile fused below | 4:5 P03 at 638px (5/12 + gutter) at x 75 + ink tile 638×168 fused below | (e) |
| Ticker | 3 lanes, giant light/bold words, 180×180 square photos inline, opposite directions | 3 lanes, 6rem Inter Tight 300/700, 180×180 squares P04–P06, lanes 2 reversed | (e),(g) |
| Slate band photos | 260×170 landscape top-right; 500px photo bleeding off left | same sizes: P08 260×170 top-right; P09 500×330 bleeding left | (e) |
| Reveal motion | 1s expo.out, y 30, stagger 0.04–0.08s, start "top 70%" | `--sp-dur: 1s`, `--sp-ease: cubic-bezier(.16,1,.3,1)`, `--sp-dist: 24px`, `sp-stagger` (0.12s steps, fixed in sp-scroll) | (g) |
| Statement fill | grey→ink per line, scrubbed | each line its own `sp-reveal sp-reveal--up`, start colour irrelevant (final = ink); lines staggered | (g) |
| Ticker loop | linear ~40s, opposite rows | `sp-marquee` 40s linear (theme CSS sets `animation-duration: 40s`; lane 2 `animation-direction: reverse`) | (g) |
| Smooth scroll | Lenis | **not used** (rule: no libraries) | (g) |

Allowed deviations (with reason): band hue `#686E74` → `#5F6F68` (design row "aonibi" slate-green; Kanjo College, a recent theme, already used a blue slate `#5C6A72`, so we tilt to green; lightness within 2%). Heart-red accent added because a cardiology site needs one marker for "today/open" and the active nav dot; capped at 1%.

---

## 1. Signature techniques (three, obvious at a glance; do not dilute)

### T1. White head band + full-bleed documentary photo + ink corner block + ink info bar
- Source: morethan-kobe.jp first screen (`ref/morethan-first.png`). Header 90px white; logo left, text nav centre-right, a flat **ink 180×90 "Entry ↗" block flush to the top-right corner** of the viewport; then an empty white band; then a full-bleed photograph of a team moving toward the camera.
- Home: block 1 (`front-hero`). Header 90px: wordmark "Ibuki Cardiology" left at x 20 (Inter Tight 600 1.25rem, preceded by a 8px heart-red dot); nav (Manrope 1rem/500, ink) right-aligned ending 40px before the block; **ink block 180×90, `#131414`, text "Book a visit" Manrope 1rem/500 white at left 48px, ↗ 16px at right 36px**, flush top and right (no margin, radius 0). Then white band (padding 40px top, 48px bottom) with H1 at the text column (x 184). Then the full-bleed P01 photo (`sp-parallax`). Then an ink info bar 56px high fused to the photo's foot (zero gap), full bleed.
- Info bar content (Manrope 0.875rem/500, white on `#131414`, items separated by 1px `#5F6F68` 16px-high rules, left-aligned at x 75): "● Open today 08:00–17:30" (dot heart red) · "First-visit echo slots from 08:30" · "Follow-up desk 13:00–16:00" · right end "Clinics by day ↗" link.
- Must not be diluted: the ink block must be a solid 180×90 rectangle touching the top and right viewport edges (not a pill, not a button inside padding, not slate); the photo must be edge-to-edge (no container, no radius); the info bar must be ink, full bleed and touching the photo. Keep the header white with ink text; it becomes sticky (white, 1px `#E7E7E8` bottom rule) after scroll, the ink block always visible.

### T2. Tall portrait photo with a same-width ink tile fused below + very large title + underlined "(01) / (02)" rows
- Source: morethan-kobe Work block (`ref/scroll-morethan-textfill-after.png`, `ref/scroll-morethan-ticker.png` top). A 4:5 portrait (638 wide) at x 75, an ink tile of the **same width** directly under it (no gap) carrying a logo; at x 836 a giant "Work" title, a small sub-label, a paragraph, then two rows: "(01)" small numeral, 22px label, ↗ at the right end, 1px ink underline across 440px.
- Home: block 3 `front-clinics` (photo left) and block 5 `front-first-visit` (mirrored: photo right).
  - Photo column: 638px wide at x 75 (desktop 1440; = 44.3% of viewport, scale with `width: min(638px, 44.3vw)`), aspect 4:5, radius 0.
  - Ink tile: same width, **168px** tall, `#131414`, zero gap to the photo; contents: a white line in Inter Tight 600 2.5rem ("Mon – Fri" on clinics; "90 min" on first visit) left at 40px, a small Manrope 0.875rem `#E7E7E8` caption under it ("Five clinics, one each weekday" / "From check-in to booked follow-up").
  - Text column starts at x 836 (photo right edge + 123px), max 529px: title Inter Tight 5.5rem/600 ("Clinics" / "First visit"), sub-label 1.375rem/600 1.2rem under it, paragraph 0.9375rem lh 1.8 at 64px below, then rows.
  - Rows: each 72px tall, "(0n)" 0.875rem at the left (56px column), label 1.375rem/600, ↗ 20px right-aligned, 1px `#131414` underline spanning the label+arrow width (440–529px), 8px gap between rows.
- Must not be diluted: the ink tile must be exactly the photo width and touch it (it is one shape); the title must be ≥5.5rem on desktop 1440 (≥3rem mobile); rows must keep the parenthesised numerals and real underlines, not cards or buttons.

### T3. Slate band: three-line statement stepped to the right, 240px hairline leader, small landscape photo top-right, second photo bleeding off the left
- Source: morethan-kobe Staff Interview band (`ref/scroll-morethan-slate-band.png`). Full-bleed slate `#686E74`; white "Staff Interview" title at x 75 (~88px); 260×170 photo at top-right (right edge x 1365); then a 3-line statement in white ~64px, line 1 preceded by a 240px hairline, lines 2 and 3 each stepped further right; a 500px photo bleeding off the left edge lower down; a body paragraph at x 916.
- Home: block 6 `front-proof`. Full-bleed `#5F6F68`, padding 150px top / 180px bottom; title "In their words" Inter Tight 5.5rem/600 white at x 75; P08 260×170 top-right (right edge at viewport − 75); statement white Inter Tight 3.5rem/500 lh 1.6 ls −0.03em:
  - line 1 at x 335 with a 240px 1px `#E7E7E8` leader from x 75 ending 20px before the text, vertically centred on the line: "We see you on the day"
  - line 2 indented to x 620: "we said we would,"
  - line 3 indented to x 680: "and we call when results are in."
  - Lower half: P09 500×330 flush to the left viewport edge (bleed, no margin); at x 916 (max 450px) three short patient stories (section 9) as white underlined rows: name + age + one line, ↗ → Stories page.
- Must not be diluted: the band colour must be the slate-green (not mist, not white), the steps must be visible (three distinct left edges, ≥280px total shift), the leader must be 240px, the left photo must touch the viewport edge.

### Supporting (not a signature): three-lane ticker with inline square photos (block 4)
Three lanes, words in Inter Tight 6rem, mixing weight 300 and 700 on one lane ("Monday **Rhythm**" · "Tuesday **Pressure**" · "Wednesday **Heart failure**" · "Thursday **Imaging**" · "Friday **Prevention**"), one 180×180 square photo per lane inline between phrases (P04, P05, P06), lane gap 0, lanes 2 reversed. Words are our own (weekday clinic names), never the reference's wordmark.

### Continuation to inner pages (≥4 required; here all main pages)
| Page | T1 (head variant) | T2 | T3 |
|---|---|---|---|
| Clinics | white band with page title + full-bleed P05 strip (16:5, `sp-parallax` 6%) + ink info bar "Mon Rhythm · Tue Pressure · Wed Heart failure · Thu Imaging · Fri Prevention" | five T2 blocks alternating left/right, one per weekday clinic, tile = weekday name | — |
| First visit | white band + full-bleed P07 strip + info bar "90 minutes · bring 3 things · results within 14 days" | T2 with P14, tile "90 min", rows = what to bring | slate band "What happens / in those ninety / minutes." with timing bar on slate |
| Follow-up | white band + P10 strip + info bar "Desk 13:00–16:00 · Phone 08:00–17:30 · Online any time" | T2 with P16, tile "3 ways", rows (01) Online (02) Phone (03) Desk | slate band "We keep / the next date / for you." + intervals |
| Tests & fees | white band + P14 strip | T2 with P16 per test group | — (price table page; table has no motion) |
| About | white band + P11 strip + info bar "Founded 2011 · 14 Harbour Lane · 7 people" | T2 with P15, tile "Since 2011", rows = 3 principles | slate band with founder statement, P12 small top-right, P13 bleeding left |
| Stories | white band (no strip) | four T2 blocks, one per story (P09, P02, P15, P06; see 4.6) | — |
| News (index/archive/category/tag) | white band with title "News" | — | slate band head strip with stepped 2-line intro "Notes from / the clinic week." |
| Contact & access | white band + P13 strip + info bar with hours | T2 with P12, tile = address, rows (01) Phone (02) Email (03) Map ↗ | slate band "Harbour Lane, / second floor, / lift from the lobby." with P13 small |

The ink 180×90 block is in the header on every page (template part), so T1's corner block is site-wide.

---

## 2. Key visual concept

### (1) Reference first screen — concept, story, signature motion
- Picture: a candid daylight documentary photograph of a care team (five people in plain tees) **walking/jogging toward the camera** along a park path, a hospital building behind them, long shadows; above it an almost empty white band under a minimal white header with the ink "Entry" corner block.
- Story: care work is ordinary, daily and upright — people, not machines; the institution is in the background, the people in front.
- Motion: headline characters rise in on load (split text, 1s power4.out), slow smooth scroll, the photo holds while the statement below fills from ghost grey to ink line by line as you scroll.

### (2) Our scene (cardiology clinic; same composition, same motion idea, same image type = photo)
- Picture P01: a **high-key documentary photograph in a bright clinic exam room**: in the foreground a patient lies on the couch (shoulder and profile only, calm), a sonographer rests an echo probe on the left side of the chest; at the middle depth a cardiologist leans toward the ultrasound screen (screen shows soft grey shapes, no readable text); large window behind with soft daylight casting **long window-frame shadows across the couch and floor** (our long shadows). People in front, the clinic room behind — same "people forward, institution behind" depth.
- Story: "A clinic that follows the heart through the working week" — the heart is checked the way a working week runs: one clinic a day, a timed first visit, a booked follow-up.
- Motion: H1 lines rise once on load (CSS only, not sp-reveal); the hero photo moves slower than the page (`sp-parallax`); info bar fades in 0.6s after the H1; directly below, the problem statement lines rise one by one on scroll (the fill idea).

### (3) KV checklist (all five rows implemented and visible on the first screen at 1440×900 and 390×844)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | White band above the photo | White band with H1 two lines "A clinic that follows the heart / through the working week." Inter Tight 3.5rem/600 lh 1.12 ls −0.04em, ink | y 90–~303, text column x 184 | each line rises 24px + fades, 0.9s `cubic-bezier(.16,1,.3,1)`, line 2 +0.08s (CSS `@keyframes`, on load) | — |
| 2 | Full-bleed documentary photo, people toward camera | P01 sonographer + cardiologist at the echo screen, patient foreground, high-key | full width, y ~303 to 843, height clamp(420px, 100svh − 360px, 680px), object-position 50% 40% | `sp-parallax`, `--sp-par: 8%` (mobile 5%) | P01 |
| 3 | 180×90 ink "Entry" corner block | ink "Book a visit ↗" block 180×90 | header top-right, flush | none on load; hover background → `#5F6F68` 0.3s | — |
| 4 | Long shadows on the ground | Window-frame shadows across couch and floor (in P01 prompt) | inside P01, lower third | moves with the parallax layer | P01 |
| 5 | Slim strip under the photo (news strip) | Ink info bar 56px: "● Open today 08:00–17:30 · First-visit echo slots from 08:30 · Follow-up desk 13:00–16:00 · Clinics by day ↗" | full bleed, fused to photo foot, y 843–899 | opacity 0→1, 0.6s ease-out, delay 0.5s (CSS on load) | — |

Continuation below the fold (not a checklist row): the reference's grey→ink statement fill becomes home block 2, three lines rising one by one (`sp-stagger` > `sp-reveal--up`).

Mobile 390×844: header 64px (wordmark + menu button + ink block 120×64 "Book ↗"), white band with H1 2.25rem (3–4 lines, horizontal), P01 4:5 crop (object-position 58% 40%) 390×420, info bar in normal flow below the photo (3 stacked lines, 0.8125rem, 12px padding). No vertical text, no absolutely positioned labels over the photo.

Forbidden on the first screen: tables, forms, search box, centred giant word, cut-out objects, coloured overlays on the photo.

---

## 3. Home page

### 3.1 First-screen composition (1440×900)
- y 0–90 header (T1). y 90–~303 white band (H1, text column x 184, padding 40 / 48). y ~303–843 P01 full bleed (`sp-parallax`). y 843–899 ink info bar.
- Saturated share target ≤8% (P01 grade: white walls, pale grey-green scrubs, mist sheets, skin tones; no blue sky, no coloured equipment). Accent red appears only as the 8px dots.

### 3.2 Block order (11 blocks)
| # | Pattern | Purpose | Layout / photos | Copy | Motion |
|---|---|---|---|---|---|
| 1 | `front-hero` | KV, entry | T1 as above; P01 | H1 13 words + info bar | parallax (P01) + CSS load rise |
| 2 | `front-problem` | **narrative – problem** | white; padding 120/150; text column x 184: 3-line statement 3rem/600 lh 1.7 ink; 64px below, two paragraphs in two columns (each 440px, gap 64) Manrope 0.9375; right-aligned underlined link "How a first visit runs ↗" | 3 lines + 2×60 words | lines: `sp-stagger` > `sp-reveal--up` |
| 3 | `front-clinics` | **method 1** – clinics by weekday | **T2** photo left: P03 4:5 + ink tile "Mon – Fri"; right: "Clinics" 5.5rem + sub "One clinic for each working day" + 70-word paragraph + 5 rows (01) Monday — Rhythm Clinic ↗ … (05) Friday — Prevention Clinic ↗ | 70 words + 5 rows | text group `sp-reveal--up` |
| 4 | `front-ticker` | rhythm break, supporting | full bleed, 3 lanes (see 1), P04 / P05 / P06 squares 180×180 | phrases only | `sp-marquee` (no reveal on children) |
| 5 | `front-first-visit` | **method 2** – first visit timed | **T2 mirrored** photo right: P07 4:5 + ink tile "90 min"; left (x 75 to 604): "First visit" 5.5rem + sub "Ninety minutes, timed to the quarter hour" + 60 words + **timing bar** (see below) + link "What to bring ↗" | 60 words + bar labels | text group `sp-reveal--up` |
| 6 | `front-proof` | **proof** | **T3** slate band; P08 260×170 top-right; P09 500×330 bleed left; three stories as white underlined rows at x 916 | statement 3 lines + 3×25 words | statement lines `sp-stagger` > `sp-reveal--up`; P09 is inside `sp-parallax` (`--sp-par: 6%`) |
| 7 | `front-fees` | tests and fees | white; title "Tests and fees" 2.5rem/500 at x 75; under it the price list spans the **full** content width (x 75–1365): 7 rows, name (1.375rem/600) · duration (0.875rem, `#5F6F68`) · price (Inter Tight 1.75rem/600, right, `white-space: nowrap`); 1px ink rule under each row; note under list "Itemised receipts for insurance claims on request." + link "All tests ↗" | 7 rows + 15 words | none |
| 8 | `front-follow-up` | how a follow-up is booked | full-bleed photo strip P10 21:9 (max-height 560px) in `sp-parallax` `--sp-par: 10%` (no text on the photo); under it on white, two columns: left "Follow-up" 5.5rem + 70-word paragraph (intervals 2 weeks / 3 / 6 / 12 months); right three underlined rows (01) Online request — any time ↗ (02) Phone 08:00–17:30 ↗ (03) Follow-up desk 13:00–16:00 ↗ | 70 words + 3 rows | text `sp-reveal--up` |
| 9 | `front-people` | the people (no 4-person grid) | mist `#EEF0EF` band; left 7/12 P11 3:2 (four staff walking toward camera down a bright corridor — the reference hero echoed); right 5/12 title "Seven people" 2.5rem/500 + list of 7 names as hairline rows: name 1.125rem/600 + role 0.875rem right; link "About the clinic ↗" | 7 rows + 40 words | rows `sp-stagger` > `sp-reveal--up` |
| 10 | `front-news` | news strip | white; title "News" 2.5rem at x 75; 3 latest posts as rows (date 0.875rem · category · title 1.125rem/600 · ↗), 1px ink underline; "All news ↗" in a 160×56 ink block at the row end (mini T1 block) | query loop 3 | none |
| 11 | `front-close` | book / visit | ink `#131414` full bleed, padding 136/160; left: "Book a first visit." Inter Tight 5.5rem/600 white, 2 lines; under it address + hours lines (Manrope 0.9375 `#E7E7E8`); right: P12 4:3 (520px wide, clinic entrance from the street, morning) ; under the photo a white 180×90 block "Book a visit ↗" (inverted T1 block) | 45 words | text `sp-reveal--up` |

Timing bar (block 5, also First visit page): one horizontal bar, 100% of the text column, 12px tall, five segments proportional to minutes, each separated by 2px white: Check-in 10 (`#E7E7E8`), Nurse + ECG 15 (`#C9D0CC`), Echo 30 (`#5F6F68`), Cardiologist 25 (`#3D4843`), Plan + booking 10 (`#131414`). Labels under each segment: name 0.8125rem/600 + minutes 0.8125rem. Times above at segment starts: 08:30 · 08:40 · 08:55 · 09:25 · 09:50 · end 10:00. This is a proportional bar, not a step grid or timeline. Mobile: the bar stays horizontal (100% width), labels become a 5-row list under it (colour square 10px + name + minutes).

English home ≥ 320 words; narrative paragraphs in #2 (two), #3, #5, #8 (≥3). CJK home ≥ 600 characters.

Photo positions on home (12, no repeats): P01 · P03 · P04 · P05 · P06 · P07 · P08 · P09 · P10 · P11 · P12 · (news rows have no images). ≥8 satisfied.

### 3.3 Comparison with the last four themes
| # | Misora Links | Waku Exhibits | Kanjo College | Mugi Bakehouse | **Ibuki Cardiology** |
|---|---|---|---|---|---|
| 1 | split hero | full-bleed hero | framed window hero | still-life + tabs | **white band + full-bleed photo + ink corner block + info bar** |
| 2 | sheet | photo-fill statement | intro | street | **3-line problem statement (text only)** |
| 3 | rounds | hall rows | four paper cards | loaves pair | **T2 portrait + fused ink tile + weekday rows** |
| 4 | full-bleed course | planning hour band | 12-week row | loaves four | **three-lane ticker with square photos** |
| 5 | season rows | hall band | parallax room | oven-day band | **T2 mirrored + proportional timing bar** |
| 6 | people | prices table | lecturers ledger | counter break | **T3 slate band, stepped statement, bleed photo** |
| 7 | fee plan cards | stories | fees table | standing order | full-width price list |
| 8 | stories | request cards | stories | neighbours | parallax photo strip + follow-up rows |
| 9 | journal | — | close | day book | people: corridor photo + name rows on mist |
| 10 | visit | — | news | visit | news rows + ink mini block |
| 11 | — | — | — | — | ink close + inverted white block |
Why not alike: Waku's "photo-fill statement" is text clipped over a photo — ours is plain ink text on white with no image; no cards (Misora, Kanjo, Waku), no ledger (Kanjo), no tabs (Mugi), no framed window or split hero. Our three shapes — the corner ink block, the photo-plus-fused-tile, the stepped slate statement with a leader — appear in none of them. Prices come after the proof, not as a centre-piece.

---

## 4. Inner pages (8 + post templates)

Common: page head = T1 head variant (white band 64/48 padding, sub-label "(Clinics)" style 0.875rem above the page title Inter Tight 4.25rem/600 at x 184; optional full-bleed strip 16:5 with `sp-parallax` 6% and ink info bar). Close of every page = ink close band (home #11, smaller title 3rem). No sidebar.

1. **Clinics** (`page-clinics`, slug `clinics`): T1 head with P05 strip + weekday info bar; intro 80 words; five T2 blocks alternating (Monday Rhythm Clinic — P04; Tuesday Blood Pressure Clinic — P16; Wednesday Heart Failure Clinic — P15; Thursday Imaging Day — P03; Friday Prevention Clinic — P06), tile = weekday + hours, rows = who it is for (3 rows each), each ~90 words. Desktop alternating sides, mobile stacked photo → tile → text.
2. **First visit** (`page-first-visit`): T1 head with P07 strip; T2 with P14 tile "90 min"; slate T3 band with stepped statement + the timing bar on slate (segment colours lightened: `#FFFFFF` 30%/50%/70%/90%/100% opacity) + P08 small; "What to bring" rows (01) Photo ID (02) Medication list (03) Previous ECGs or letters; "Referral" paragraph; fee line linking to Tests & fees.
3. **Follow-up** (`page-follow-up`): T1 head with P10 strip; T2 with P16 tile "3 ways", rows Online / Phone / Desk; slate T3 band "We keep / the next date / for you." with P11 bleed left and the interval text (results review within 14 days; then 3, 6 or 12 months, chosen with your cardiologist); Saturday follow-up note.
4. **Tests & fees** (`page-fees`): T1 head with P14 strip; full price list (same 7 rows as home, plus a 2-line description under each name); three test explanations (Echo, Holter, Stress test) as T2 with P03, P04, P16 — tiles "40 min", "24 h", "45 min"; receipts note. Price list has no motion.
5. **About** (`page-about`): T1 head with P11 strip, info bar "Founded 2011 · 14 Harbour Lane · Seven people"; T2 with P15 tile "Since 2011", rows = three principles (one clinic a day / the time is the time / we call you); 3 narrative sections (founding by Dr. Varga in 2011; why weekday clinics; how results are called back); people list (7 name rows with 40-word bios); slate T3 band with founder statement "A heart keeps / working hours. / So do we." + P12 small + P13 bleed left.
6. **Stories** (`page-stories`): T1 head (no strip); four stories as T2 blocks alternating: Walter (P09), Hana (P02), Joseph (P15), Lucía (P16); tiles = clinic + day; ~130 words each; disclaimer line "Stories shared with permission; names changed; every heart is different."
7. **News** (posts page, slug `news`; also `archive.html`, `category.html`, `tag.html` with "TAG" label, `search.html`): T1 head; slate T3 strip "Notes from / the clinic week." (2 stepped lines, leader, no photos); post rows like home #10 with a 4:3 thumbnail 240px at the left on ≥782px (mobile thumbnail on top). Six demo posts (section 6).
8. **Contact & access** (`page-contact`): T1 head with P13 strip + hours info bar; T2 with P12 tile "14 Harbour Lane", rows (01) Phone +1 555 0142 (02) Email desk@ibuki-cardiology.example (03) Map ↗; hours table (Mon–Fri 08:00–17:30 / Sat 09:00–12:30 follow-ups / Sun closed); slate T3 band "Harbour Lane, / second floor, / lift from the lobby." with P08 small (no repeat of P13 on this page: use P08). No form required.
9. **Article** (`single.html`): category as "(Category)" sub-label, title 3rem, date, featured image full content width 16:9 radius 0, text column 680px, prev/next as underlined rows with ↗.
10. **Newsletter** → screens point to the News page; **404**: T1 head + "Back to home ↗" ink block.

Nav (one top menu): Clinics · First visit · Follow-up · Tests & fees · Stories · About · Contact + ink block "Book a visit" (→ Contact). News in the footer and home. Footer: ink, wordmark, address, hours, two link columns, small "© Ibuki Cardiology".

---

## 5. Colour

| Role | Hex | Source | Use | Share |
|---|---|---|---|---|
| Ground | `#FFFFFF` | ref white | page ground | ~45% |
| Ink | `#131414` | ref ink `#131414` (exact) | text, header block, T2 tiles, info bar, close band, footer, rules | ~30% |
| Slate-green (main) | `#5F6F68` | ref slate `#686E74`, hue tilted to green, lightness −2% (design row "aonibi" slate-green) | T3 band, timing bar segment, block hover | ~15% |
| Mist | `#EEF0EF` | ref ghost `#E7E7E8` +2% lightness, green tint | people band, mobile menu ground | ~9% |
| Ghost | `#E7E7E8` | ref ghost (exact) | hairlines on slate, captions on ink, sticky header rule | <1% |
| Deep slate | `#3D4843` | derived from main −20% L | timing segment, hover on ink rows | <1% |
| Heart red (accent) | `#B4574F` | industry marker | 8px dots only (logo, "Open today", active nav) | ≤1% |
| Muted text | `#5A605D` | ink + slate | meta, dates | — |
Contrast: white on `#5F6F68` = 5.4:1 (OK for body); ink on mist ≥ 16:1. No beige, no gradients, no saturated fields. First-screen saturated share target ≤8% (reference 5.9%), hard limit 15%.

## 6. Typography (font_direction = sans)

- Latin display: **Inter Tight** (500, 600; plus 300 and 700 for the ticker). Latin body/nav: **Manrope** (400, 500, 600). Both bundled as woff2 in `assets/fonts`, OFL, loaded via **theme.json `fontFamilies` + `fontFace`** so the editor iframe and the front end match.
- CJK: **Noto Sans TC** (zh-TW, gothic / sans) and **Noto Sans JP** (ja, gothic / sans), bundled subset woff2 for headings, also via theme.json fontFace. No Mincho / Noto Serif anywhere.
- Stacks:
  - display en/fr/de: `"Inter Tight", "Helvetica Neue", Arial, sans-serif`
  - body en/fr/de: `"Manrope", system-ui, -apple-system, "Segoe UI", sans-serif`
  - display zh-TW: `"Inter Tight", "Noto Sans TC", "PingFang TC", "Microsoft JhengHei", sans-serif`
  - body zh-TW: `"Manrope", "PingFang TC", "Microsoft JhengHei", sans-serif` (no bundled zh family, no JP font — repo gate)
  - display ja: `"Inter Tight", "Noto Sans JP", "Hiragino Sans", "Yu Gothic", sans-serif`
  - body ja: `"Manrope", "Hiragino Sans", "Yu Gothic", "Meiryo", sans-serif`
  - `:lang()` rules exist → copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and require it.
- Size presets (theme.json): small 0.8125rem · base 0.9375rem · medium 1.375rem · large 2.5rem · x-large 3.5rem · xx-large **5.5rem** (max ≥ 4.25rem). Statement 3rem custom.
- CJK: headings ≈0.75× (5.5rem → 4.125rem; statement 3rem → 2.25rem), letter-spacing 0 (no negative tracking on CJK), body lh 1.85. fr/de `hyphens: auto`; long German words in rows may wrap.
- Mobile: xx-large clamp(3rem, 12vw, 5.5rem); H1 2.25rem; statement 1.75rem lh 1.6.

## 7. Responsive requirements
- 390px first screen: no vertical text, no absolutely positioned labels over text/photo; info bar in flow below the photo; ink block 120×64 stays in the header beside the menu button.
- T2 on mobile: photo full width (minus gutter 20), tile below (height 120), text below the tile; rows full width.
- T3 on mobile: title 3rem; statement lines lose the step (all at gutter) but keep the leader as a 120px rule **above** line 1; P08 under the title at 100% width 3:2; P09 bleeds left at 85% width.
- Price list ≥782px: spans the full content width (x 75–1365 at 1440; at 800 the full 760), grid `1fr auto auto`, price column `white-space: nowrap; text-align: right`, never cut or overflowed. <782px: stacked rows — name on line 1, duration left + price right on line 2.
- Hours table (contact) and any other table: stacked on <782px (each row = label line + value line). No horizontal overflow at 390 or 1280.
- Ticker lanes on mobile: 3rem words, 96×96 squares.

## 8. Scroll effects (sp-scroll only; ≤3 kinds per page)
| Effect | sp-* | Where | Source (morethan-kobe) | Trigger / time / easing |
|---|---|---|---|---|
| Statement lines rise (stand-in for the grey→ink fill) | `sp-stagger` parent, each line `sp-reveal sp-reveal--up` | home #2, #6 statement; T3 statements on inner pages | statement fill, ScrollTrigger start "top 70%", scrub 1 | IO enter; `--sp-dur: 1s`; `--sp-ease: cubic-bezier(.16,1,.3,1)`; `--sp-dist: 24px`; stagger 0.12s |
| Block reveal rise | `sp-reveal sp-reveal--up` on text groups (never on the hero, price list, forms, ticker children) | home #3, #5, #8, #9, #11; T2 text on inner pages | block reveal, 1s expo.out, y≈30, stagger 0.04–0.08 | same variables |
| Parallax | `sp-parallax` | hero P01 (`--sp-par: 8%`; ≤781px `5%`), home #8 P10 (`10%`; mobile `6%`), home #6 P09 wrapper (`6%`), inner-page strips (`6%`) | photos hold while content scrolls (Lenis smooth scroll) | CSS scroll-driven, linear; JS fallback built in |
| Ticker | `sp-marquee` | home #4 only | ticker rows, linear ~40s, opposite | theme CSS: `.ib-ticker .sp-marquee > * { animation-duration: 40s }`, lane 2 `animation-direction: reverse` |
Hero: no reveal; its H1 rise and info-bar fade are CSS keyframes on load that are disabled under `prefers-reduced-motion` and `?sp-static`.

### Parallax (required)
- Primary: `front-hero` = core/cover full bleed with class `sp-parallax`, style `--sp-par: 8%`, background image P01 (`.wp-block-cover__image-background` moves). Foreground: nothing inside the cover except an empty inner container (the H1 sits in the white band above; the info bar is a sibling group below), so no text is in a moving layer. Reference counterpart: the hero photo staying put under Lenis smooth scroll while the statement scrolls over the fold.
- Secondary: `front-follow-up` P10 strip, `--sp-par: 10%` (mobile 6%). Mobile keeps both (smaller speed). `check-parallax.mjs` must measure ≥6px on desktop and mobile.

---

## 9. Fixed facts (identical on home, inner pages and all five languages)

**Clinics by weekday** (all 08:30–17:00 consult hours inside opening hours):
- Monday — Rhythm Clinic (palpitations, atrial fibrillation, Holter fitting)
- Tuesday — Blood Pressure Clinic (home readings, 24-hour monitor)
- Wednesday — Heart Failure Clinic (breathlessness, swelling, medication review)
- Thursday — Imaging Day (echocardiogram, stress echo)
- Friday — Prevention Clinic (family history, cholesterol, return to sport or work)

**Fees (USD, 7 items)**
| Item | Duration | Price |
|---|---|---|
| First consultation with ECG | 60 min | $180 |
| Echocardiogram (transthoracic) | 40 min | $240 |
| Exercise stress test | 45 min | $220 |
| 24-hour Holter monitor (fit + report) | 24 h | $160 |
| 24-hour blood pressure monitor | 24 h | $120 |
| Follow-up consultation | 20 min | $95 |
| Heart check (consultation, ECG, echo, bloods) | 90 min | $420 |
Note: itemised receipts for insurance on request. No claims of coverage.

**First visit, 90 minutes** (example start 08:30): check-in 10 · nurse, blood pressure and ECG 15 · echocardiogram 30 · cardiologist 25 · plan and booking 10. Bring: photo ID, medication list, previous ECGs or letters. Results review within **14 days**; follow-ups every **3, 6 or 12 months** as agreed.

**Follow-up booking, 3 ways:** online request (any time, answered within one working day) · phone +1 555 0142 (08:00–17:30) · follow-up desk 13:00–16:00 weekdays. Saturday 09:00–12:30 follow-ups only.

**People (7):** Dr. Elena Varga — founding cardiologist, Rhythm Clinic · Dr. Samuel Osei — cardiologist, Heart Failure Clinic · Dr. Mei-Lin Ho — cardiologist, imaging lead · Dr. Tomás Ribeiro — cardiologist, Blood Pressure and Prevention · Priya Natarajan — chief cardiac sonographer · Jonas Berg — cardiac nurse, follow-up desk · Amara Diallo — patient coordinator.

**Stories (4; fictional, no outcome claims):** Walter, 58, bus driver — palpitations on early shifts; Holter fitted on a Monday, reviewed the next week. Hana, 41, teacher — high readings at school; 24-hour monitor on a Tuesday, a plan with Dr. Ribeiro. Joseph, 72, retired joiner — Heart Failure Clinic every three months; Jonas calls between visits. Lucía, 34, runner — stress test on a Thursday before a first marathon. (Home #6 shows Walter, Hana, Joseph.)

**Address:** Ibuki Cardiology, 14 Harbour Lane, 2nd floor, Northbridge. Phone +1 555 0142. desk@ibuki-cardiology.example. Founded 2011.

**News posts (6):** 1 "Thursday imaging slots now start at 08:30" (Clinic news; P03) · 2 "What a Holter monitor feels like for 24 hours" (Tests; P04) · 3 "Bringing home blood pressure readings that help" (Guides; P16) · 4 "Saturday follow-ups: how the morning runs" (Clinic news; P10) · 5 "Returning to sport after a heart check" (Guides; P06) · 6 "Meet the follow-up desk" (People; P11). Tags: rhythm, blood-pressure, echo, follow-up, prevention.

---

## 10. Images (16 files; Grok, one at a time; read each and regenerate on text, logos, broken hands or style drift)

STYLE (exact, every image):
`high-key documentary colour photograph, bright soft daylight from large windows, flat clean light, white and pale grey-green walls, modern international outpatient cardiology clinic, candid unposed moment, natural skin tones, diverse adults, muted palette of white, mist grey, slate green and charcoal with no strong colours, 35mm lens, gentle film grain, no text, no numbers, no logos, no brand marks, no readable screens, no signage lettering, no Japanese elements`

| ID | Subject / composition | Ratio | Used on (once per page) | Home? |
|---|---|---|---|---|
| P01 | exam room: patient lying on couch in foreground (shoulder/profile), sonographer resting an echo probe on the chest, cardiologist leaning toward the ultrasound screen (soft grey shapes only), long window-frame shadows across couch and floor | 16:9 wide (1920) | Home hero | ✔ |
| P02 | woman in her 40s at a school staff-room table writing blood pressure readings in a notebook, cuff on the table | 4:5 | Stories (Hana) | |
| P03 | sonographer's hands and probe over gel on a chest, screen soft-focused behind, close and calm | 4:5 | Home T2 clinics; Clinics (Thursday); Tests & fees (Echo); post 1 | ✔ |
| P04 | nurse fitting a small Holter monitor with electrode leads on a man's chest, morning light | 1:1 | Home ticker lane 1; Clinics (Monday); Tests & fees (Holter); post 2 | ✔ |
| P05 | bright waiting area with a few patients seated, large windows, plants, wide | 3:2 file; 1:1 and 16:5 shown via object-fit crop | Home ticker lane 2; Clinics head strip | ✔ |
| P06 | woman in running clothes stepping onto a treadmill with ECG leads, technician beside her | 1:1 / 4:5 | Home ticker lane 3; Clinics (Friday); Tests & fees (Stress test); Stories (Lucía); post 5 | ✔ |
| P07 | nurse attaching ECG electrodes to a seated patient's wrist and ankle, eye-level | 4:5 | Home T2 first visit; First visit head strip (16:5 crop) | ✔ |
| P08 | cardiologist and patient talking at a desk by a window, seen from across the room | 3:2 small (260×170 display) | Home T3 band; First visit T3; Contact T3 | ✔ |
| P09 | man in his late 50s in a plain navy-grey work jacket (no logos) walking out of the clinic entrance into daylight | 3:2 | Home T3 bleed; Stories (Walter) | ✔ |
| P10 | follow-up desk: nurse handing a plain appointment card across a counter to a patient, wide | 21:9 | Home follow-up strip; Follow-up head strip; post 4 | ✔ |
| P11 | four clinic staff in scrubs and white coats walking toward the camera down a bright corridor, window shadows on the floor | 3:2 | Home people; About head strip; Follow-up T3 bleed; post 6 | ✔ |
| P12 | clinic street entrance on a quiet morning, glass door, trees, plain facade with no lettering | 4:3 | Home close; About T3 small; Contact T2 | ✔ |
| P13 | lift lobby and stairwell of the clinic building, bright, empty | 16:5 | Contact head strip; About T3 bleed | |
| P14 | patient sitting on the exam couch edge while a cardiologist explains an ECG printout (no readable marks) | 4:5 / 16:5 | First visit T2; Tests & fees head strip | |
| P15 | older man and his daughter with a cardiologist in a consultation room, listening | 4:5 | About T2; Clinics (Wednesday); Stories (Joseph) | |
| P16 | woman checking her own blood pressure with a home cuff at a kitchen table, morning | 4:5 | Clinics (Tuesday); Follow-up T2; post 3 | |
Final per-page lists (binding; no image twice on one page):
- Home (11 images, 11 positions + none in news): P01 P03 P04 P05 P06 P07 P08 P09 P10 P11 P12.
- Clinics: P05(strip) P04 P16 P15 P03 P06.
- First visit: P07(strip) P14 P08.
- Follow-up: P10(strip) P16 P11.
- Tests & fees: P14(strip) P03 P04 P06.
- About: P11(strip) P15 P12 P13.
- Stories: P09 P02 P15 P06.
- Contact: P13(strip) P12 P08.
- News index: post thumbnails P03 P04 P16 P10 P06 P11 (each once).
Counts: 16 files (strips and squares are CSS `object-fit: cover` crops of the same file, not new files), each ≤300 KB and ≤2000px, readme.txt line each (AI-generated, CC0). 0 cut-outs. Home uses 11 (P01, P03–P12).

---

## 11. Home acceptance checklist (stage-1 review compares against this)
1. First screen 1440×900: white header with a solid ink 180×90 "Book a visit ↗" block touching top-right; white band with the two-line H1 at x 184; full-bleed P01 (people forward, clinic behind, window shadows); ink 56px info bar fused to the photo foot, visible above the fold. No table/form/search, no centred giant word.
2. KV checklist rows 1–5 all present on the first screen; H1 load rise and info-bar fade are CSS only and off under reduced motion.
3. T2 visible twice (photo left on Clinics, photo right on First visit): ink tile exactly the photo width and touching it; title ≥5.5rem; "(01)…" underlined rows with ↗.
4. T3 visible: full-bleed `#5F6F68` band, 240px leader, three visibly stepped white lines, P08 small top-right, P09 bleeding off the left edge.
5. Ticker: three lanes, 300/700 mixed words, square photos, lane 2 reversed, no reveal on children.
6. Price list: 7 rows, full content width at ≥782px, prices nowrap right-aligned and not cut at 800 and 1280; stacked on mobile.
7. Colours: white dominant, ink `#131414`, band `#5F6F68`, mist `#EEF0EF`, red only as dots; first-screen saturated share ≤8% target (≤15% gate). Radius 0 everywhere; no shadows.
8. Fonts: Inter Tight / Manrope via theme.json fontFace; editor = front end; max preset 5.5rem.
9. Motion: `sp-parallax` on hero (8%) and P10 strip (10%) moves ≥6px desktop and mobile; statement and block reveals with 1s expo-out; reduced-motion shows final state; `?sp-static` clean; ≤3 effect kinds per page apart from the ticker on home (home: reveal, parallax, marquee).
10. ≥11 image positions, no repeats, no text/logos in images, one STYLE.
11. Home English ≥320 words, ≥3 narrative paragraphs; all numbers equal section 9.
12. 390px: no horizontal overflow, no vertical/absolute labels on the first screen, info bar below the photo, tables stacked.
13. Block order equals 3.2 and differs from Misora / Waku / Kanjo / Mugi per 3.3; no card grids, ledger rows, step grids, vertical timelines, people grids, sidebars or cut-outs.
