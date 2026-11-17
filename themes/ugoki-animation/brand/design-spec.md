# Ugoki Animation — design spec (stage 1, design director)

Type: **portfolio** (WooCommerce-compatible not needed; no shop). Industry: an **eight-person independent 2D animation studio** that draws by hand on paper and finishes on screens; it makes **commercials, title sequences and short films**, and there is **one way to work with it: Request a quote**.
Primary reference: **https://baqemono.jp/** (S5-Style; small digital creative atelier). Secondary: **https://kaitamaki.com/** (S5-Style; film-look photography archive). Tokens: `brand/reference-tokens.md`, cited as **T(a)…T(g)**. Screens: `ref/bq-first.png` (baqemono first screen), `ref/scroll-bq-creation-{before,after,credits}.png` (baqemono /creation/ ledger), `ref/kt-first.png` (kaitamaki film frame + HUD), `ref/scroll-kt-zoom-{before,after}.png` (kaitamaki pull-back to the contact sheet).
**Imagery: photo** (stage-a IMAGERY = photo; both references show photographs / screen captures, no illustration). One real-photography STYLE string, **documentary film grain** (row `photo_direction: film-grain`, T(e)). 0 cut-outs.
Font direction: **sans** (row `font_direction`). Latin display **Syne**, Latin body / UI **Manrope** (row fonts). zh-TW / ja headings and body **Noto Sans TC / Noto Sans JP** (CJK gothic). No serif / Mincho anywhere. Details §6.
Similarity target: about **80%** to the references in palette, image treatment, motion, decoration and layout. Photographs, copy, client names and the logo are ours; no asset, text or logo of either reference is reused.
Row: archetype **asymmetric-masonry**, hero **text-left-photo-right**, nav **overlay**, first screen **horizontal-scroll-strip**, page structure **results-first-case-wall**. How they meet: the first screen is the baqemono dark window split into a text cell left and a photograph right (text-left-photo-right), the transparent header lies over the pale page (overlay), and directly under the window runs a sideways strip of key-drawing frames (horizontal-scroll-strip). The first block after the hero is the **case wall** (results first). Asymmetric masonry: the home contact sheet (§3 block 4) and the Work page sheet are columns of plates at staggered offsets.
Class prefix: `ug-`. Pattern slugs `ugoki-animation/<name>`. Header: exactly one top menu (`core/navigation`).
theme-meta suggestions: `type: portfolio`; `colors.tags: light, cool, muted, slate`; `style: cinematic, editorial, minimal, kinetic`.

---

## 1. Signature techniques (3 + 1 supporting; obvious at a glance; none may be softened)

Stage-a candidates are used as **S1 = T2 (dark window + frame strip + mono HUD hero)**, **S2 = T1 (credit-ledger case wall)**, **S3 = T3 (contact-sheet pull-back)**; **T4** (crumb header + red recording dot) is the supporting device.

### S1 (T2): Dark inset window on a pale page — tracked caps statement in its left cell, film-grain photograph in its right cell — with a cyan light-table strip of key drawings and a mono HUD line underneath
- **Source**: baqemono.jp home (`ref/bq-first.png`; T(c), T(b)): on the pale paper page a **dark window 1258×567, 87% of the width (x91–1349)**, 76px below a transparent header; the window is a dimmed screen capture of finished work; the statement **"A / DIGITAL / CREATIVE / ATELIER, / baqemono."** sits in its left third (x204), **one word per line, 700 caps, letter-spacing .3em, light warm grey on dark**. kaitamaki.com (`ref/kt-first.png`; T(f)): a **mono HUD line along the bottom** — caption + date at the left, "scroll — pull back" in the centre, a **tick scale** and readouts ("1920 px", "×86") and a frame counter "15/15" at the right, 11–12px mono, ls .1em.
- **Ours (home first screen)**: block `ugoki-animation/hero`, three stacked parts inside a centred container `ug-hero` (`width: min(87.4%, 1258px); margin-inline: auto`):
  1. **Window** `ug-window` (Group, `display: grid; grid-template-columns: 38% 62%; height: 464px; background: #232A2B; border-radius: 4px; overflow: clip`; top at **y104** = 8px below the 96px overlay header). 
     - Left cell `ug-window__text` (dark ground, `padding: 0 40px 0 113px`, content vertically centred; 113px = the reference's statement inset x204−91): **H1** "Drawn / by hand. / Finished / on screen." — four lines, each its own `<br>`-separated line in the heading (editable), **Syne 700, 3rem, uppercase, letter-spacing .2em, line-height 1.25, colour `#D6DCDB`**. Under it, 24px gap, one mono line `ug-window__meta` "Commercials · Title sequences · Shorts — since 2014" (Manrope 600 .75rem ls .1em tabular-nums, `#8E9A9B`).
     - Right cell `ug-window__photo` (Group `sp-parallax`, `--sp-par: 8%`, `position: relative; overflow: clip`) wrapping `figure > img` **P01** (`object-fit: cover; object-position: 40% 50%`), plus an overlay div `ug-window__shade` (sibling, above the image, `aria-hidden`): `linear-gradient(90deg, #232A2B 0, rgba(35,42,43,0) 22%), rgba(20,26,27,.18)` so the photo melts into the dark cell and reads as **one dark window** (T(e): the reference window is a darkened image).
  2. **Strip** `ug-strip` (y**592–744**, 152px tall, full container width, **ground cyan `#A2D7DD`** = the light table, radius 4px, `overflow: clip`): a `sp-marquee` row of **4 key-drawing frames P02–P05** (4:3, **171×128**, radius 2px, gap 12px, vertical padding 12px) + the marquee's duplicated `aria-hidden` group (same 4 images; a clone, not a second use). Direction right → left, **40s linear infinite** (frames sliding past like film through a gate). Under reduced motion / `?sp-static` / editor: static, first frame at x+12.
  3. **HUD line** `ug-hud` (y**768–800**, flex, `justify-content: space-between; align-items: center`, Manrope 600 **.75rem** ls .1em tabular-nums, colour `#5C6B6E`, all real text blocks, no CSS `content`):
     - left: **red 5px dot** `ug-dot` (`#A93432`, a 5×5 span, `aria-hidden`) + "Line test — take 07 · 24 fps";
     - centre: "scroll — the work is below";
     - right: **tick scale** `ug-ticks` (24 ticks, each 1×8px `#5C6B6E`, gap 4px; every 6th tick 1×12px; inline SVG 120×12, `aria-hidden`) + counter **"07 / 24"** (the "07" is a span `ug-hud__frame`).
- **Never soften**: the window is **dark (`#232A2B`) on the pale page**, **87% wide**, with visible pale margins on both sides; the statement is **tracked caps one phrase per line** inside the dark cell (not on the pale page, not sentence case, not centred); the strip is **cyan** and **full window width directly under the window** with frames visibly moving sideways (motion mode); the HUD line is **mono-style, small, grey, spread across the full width** with dot, ticks and counter all visible. No button, card, form or second heading in the first screen.
- **Differs from** used framed-window heroes (Akiha "serif question over a framed photo window", Awa "framed window with caps wordmark crossing its edge", Hatoba "framed window with docked caption bar, pager notch and week-tick line", Hisui "rule-split window"): ours is a **dark split window with the tracked statement inside it**, a **cyan light-table film strip** of real frames scrolling sideways beneath, and a **24-fps HUD** (24 ticks + frame counter) — the shape of an animation line test, not a caption bar.

### S2 (T1): Credit-ledger case wall — date rail left, 16:9 still + caps title + round dark arrow + body centre, stacked credits and a delivery line right
- **Source**: baqemono.jp /creation/ (`ref/scroll-bq-creation-before.png`, `-after.png`, `-credits.png`; T(c), T(d), T(b)): every case is one row of **three columns**: left rail at x80 (date "2025.11.14" 11px caps, and the section crumb), centre **x364–1076 (712px)**: a 16:9 still (712×400, corners ~4px), then the **title row** (20px 700 caps ls 1px) with a **round 44px dark arrow button** `#3D3935` at the right end, then body text (712px measure, lh ~2.6); right column **x1120–1360 (240px)**: a credit stack of caps labels (11px ls .3em: CLIENT / MANAGEMENT / CREATIVE DIRECTION / DEVELOPMENT) each with a name below (13–14px), then a **24px hairline** and an **underlined last line with a small ↗**. Row pitch ≈ one viewport including a 160px gap. Rows enter with `is-in` class toggles (IO, 0.2–0.4s).
- **Ours**: pattern `ugoki-animation/case-wall` → `ug-ledger` (container 1280px, x80–1360), each case a Group `ug-case` with `display: grid; grid-template-columns: 240px 712px 240px; column-gap: 44px` (= x80 / x364–1076 / x1120–1360, T(c) exact):
  - **Rail** `ug-case__rail`: date "2025.03.14" (Manrope 700 .6875rem ls .3em, ink) and below it, 8px, the format "COMMERCIAL · 30 S" (same style, `#5C6B6E`). `position: sticky; top: 104px` inside the row (stays beside the still while the row scrolls; CSS only).
  - **Centre** `ug-case__main`: `figure > img` 16:9 (**712×400**, radius **4px**, T(d)); then the title row (flex, `justify-content: space-between; align-items: center; margin-top: 44px`): h3 **Syne 700 1.25rem uppercase ls .05em** (T(b) 20px ls 1px) and the **round arrow** `ug-arrow` (a link, **44×44, radius 50%, background `#383D3E`, white 14px ↗ arrow inline SVG**, hover background `#A93432` 0.05s linear, T(g)); then body ¶ (Manrope 400 1rem lh 1.85, 712px measure, 2 ¶ max on home, 40–70 words each).
  - **Credits** `ug-case__credits` (a list of Groups): per credit a label (Manrope 700 .6875rem ls .3em uppercase ink) and a value (Manrope 500 .875rem ls .04em, 10px below), 28px between credits; order **CLIENT / AGENCY / DIRECTION / ANIMATION**; then a **24×1px hairline `#5C6B6E`** with 28px above / 20px below; then the **delivery line** (Manrope 500 .875rem) "On air — spring 2025" with the date part **underlined** (1px, offset 4px) and a 10px ↗ at the far right (`justify-content: space-between`). No awards anywhere (brand rule): the reference's award line becomes the **delivery line** in the same place and shape.
  - Rows separated by **120px** on home and **160px** on Work (T(c) 160px); a 1px `#CDD3D3` hairline across the full 1280px at the top of each row (24px above the date).
- **Never soften**: **three columns at these exact widths at ≥1280px**; the still is 16:9 with a 4px corner; the round arrow is **solid dark and round** on the title row's right end (not an outline, not a text link); credits are stacked caps labels with names — **at least 4 credits per case** and the 24px hairline + delivery line; rows are long (one row ≈ one screen), not cards in a grid.

### S3 (T3): Contact-sheet pull-back — narrow columns of small 4:3 plates at staggered heights under lower-case mono labels, revealed by zooming out, with a mono summary line
- **Source**: kaitamaki.com (`ref/scroll-kt-zoom-before.png` → `-after.png`; T(f), T(g)): the wheel pulls back from one full-bleed frame to a contact sheet: **narrow columns (~111px) of tiny plates, ~10px gutters**, lower-case mono section labels above some columns ("serial", "client work", "exhibition", "personal work"), columns of different lengths (an uneven bottom edge), on near-white; a mono summary at the bottom left ("2,354 plates · 117 works · 2014–2026" + hints) and the tick scale with "×0.9" at the right. The zoom runs ~2s with a 0.5s delay.
- **Ours, home (block 4)**: pattern `ugoki-animation/desk-sheet` → `ug-sheet` container 1280px; heading row on the ledger grid (rail label + H2, §3). The sheet = **6 columns** `ug-sheet__col`, each **168px wide, gap 24px** (6×168+5×24 = 1128px, placed in x232–1360 = right-aligned in the container, leaving the rail free), every column = mono lower-case label (Manrope 600 .6875rem ls .2em, ink, 10px above) + one 4:3 plate **168×126**, radius 2px; columns start at staggered offsets **0 / 56 / 16 / 88 / 32 / 8 px** (`margin-top`, asymmetric masonry). Labels: "boards", "keys", "line test", "colour", "comp", "sound". Plates **P13–P18**. Under the sheet (48px below the lowest plate) the mono summary line `ug-hud` (same component as the hero HUD): left "6 plates · 4 jobs on the desk · 2014–2026", right the 24-tick scale + "×0.9". The whole sheet Group has **`sp-reveal sp-reveal--zoom`** with `--sp-dur: 2s; transition-delay: .5s` (T(g) scale 2s, 0.5s delay): it settles from 1.06 to 1 = the pull-back.
- **Ours, Work page**: the full sheet — **7 plates P10, P11, P13, P14, P15, P16, P17** (the page's strip and case photos are not repeated) in **6 columns of 1–2 plates** (plates 168×126, gap 10px vertical, tops staggered 0 / 40 / 12 / 64 / 24 / 6px) with labels "boards" / "keys" / "line test" / "colour" / "comp" / "studio", same zoom reveal, summary "7 plates · 4 jobs · 3 formats · 2014–2026".
- **Never soften**: plates stay **small** (≤168px wide) and **many in a row** (6 columns), labels are **lower-case mono** above the columns, column tops are **staggered** (uneven), the ground is the pale page (no card, no frame); never turn it into an even gallery grid of large photos.

### Supporting (T4): crumb header and the red recording dot
- **Source**: baqemono header (`ref/bq-first.png`, `ref/scroll-bq-creation-credits.png`; T(f)): a **5px red dot** `#A93432` above-right of one nav word; on inner screens the header is a crumb **logo │ CREATION** with a **1px vertical divider** (x178, 20px tall).
- **Ours**: home header (§3 block 0) shows the full nav with the **red 5px dot** at the top-right of "Work" (`position: absolute; top: -4px; right: -10px` on the nav item label's span — a decorative span in the navigation link label markup, `aria-hidden`). Every inner page's header adds, between wordmark and nav, the **crumb**: 1px × 20px vertical divider `#383D3E` 40px right of the wordmark, then the page name in Manrope 700 .6875rem ls .3em uppercase (a paragraph block in the header template part per page template, or the core `post-title` block at that size — editable, no CSS `content`). The dot is also the HUD dot (S1) — the only red on the site besides the arrow hover.

### Continuation on inner pages (≥4 required; here 9)
Every inner page starts with the **page window** `ugoki-animation/page-window` (S1 at page scale): same 87%-wide dark window, `height: 400px`, grid **45% / 55%**: left cell kicker in mono (.75rem ls .1em `#8E9A9B`) + **H1 Syne 700 4.25rem, sentence case, ls −.01em, lh 1.0, `#D6DCDB`** (largest size; left padding 64px); right cell one photo (`sp-parallax` 6% / 4%) with the same shade gradient; under the window a **HUD line** (page-specific caption, ticks, counter = page number "03 / 12"). No cyan strip on inner pages except Work and Process (below).
| Page | S1 window + HUD | S2 credit ledger | S3 contact sheet | T4 crumb + dot |
|---|---|---|---|---|
| Work | ✔ P12 · HUD "4 jobs · 3 formats" + cyan strip (P02–P05 marquee) | ✔ all 4 cases, 160px pitch | ✔ full sheet (§10) | ✔ WORK |
| Commercials | ✔ P05 | ✔ 2 cases (Slow Train, Morning Pour) | — | ✔ |
| Title sequences | ✔ P17 | ✔ 1 case (Glasshouse Nights) + "what a title job includes" ledger row (no still: P14 instead) | — | ✔ |
| Shorts | ✔ P13 | ✔ 1 case (Paper Moths) + development ledger row (P18) | — | ✔ |
| Process | ✔ P16 + cyan strip (P02, P03, P04, P15 marquee) | ✔ 5 step rows in ledger form (rail = step + weeks; credits = "You send / We send / Length") | — | ✔ |
| Studio | ✔ P11 | ✔ people as credit stacks (8 people, 4 columns × 2 on the ledger centre + right) | ✔ small sheet of 4 (P01, P16, P15, P14) "a day at the desk" | ✔ |
| Rates | ✔ P04 | ✔ each rate as a ledger row without still (rail = format; centre = name + what's included; right = price + "from") ≥782 table rules §8 | — | ✔ |
| Request a quote | ✔ P03 | ✔ the 4-step "how a quote happens" in ledger rows | — | ✔ |
| The Line Test (newsletter) | ✔ P16 | ✔ last 3 issues as ledger rows (date rail / title / "in this issue" credits) | — | ✔ |
| Journal (posts page, template) and posts | ✔ (template window, P12 on the archive; the post's featured image on single) | ✔ posts listed as compact ledger rows (date rail / title + excerpt / category + tags stack) | — | ✔ |

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
- **baqemono.jp**: a calm pale page with **one dark window** that holds the studio's finished work (screens of sites they built, darkened), and over it **the studio's name as a slowly stepping, tracked, one-word-per-line statement**. Story: *"we are what we have made"* — the hero is not a picture of the studio, it is a window onto the work. Motion: the statement lines change in **stepped, linear** jumps; hover swaps are 0.05s linear; list rows below switch on (`is-in`) as they enter.
- **kaitamaki.com**: one **film frame** fills the screen; a **mono HUD** along the bottom counts frames and shows a tick scale; scrolling **pulls back** from the single frame into a **contact sheet of every plate**. Story: *"every frame is one of thousands — pull back and see the archive"*. Motion: continuous scrub/zoom (2s, 0.5s delay), counter and ticks updating.
- Combined concept (stage-a): **"Everything we made is one scroll away — the hero is a frame, the work is the page."**

### (2) Our scene (same composition, same motion idea, same image type: documentary film-grain photograph)
In the same dark window, instead of screens of finished sites, we look into **the moment animation is made**: an **animator at a glowing light table flipping a stack of key drawings between her fingers while a monitor behind her plays the line test of those drawings** (P01, film grain, cool grey-green cast). The tracked statement in the window's left cell says what the studio is: **"Drawn by hand. Finished on screen."** Under the window, the **light table becomes a cyan strip**, and the **key drawings slide past as frames** (the film moving through the gate = baqemono's stepping window + kaitamaki's frame sequence), while the **HUD counts the take at 24 fps** ("take 07 · 24 fps", 24 ticks, "07 / 24") with a red recording dot. Scrolling down leads straight into the **case wall** (the work is the page), and a little further into the **contact sheet that pulls back** (kaitamaki's archive) — the same story in our industry: *every second is 24 drawings; scroll and you see the work they became.*

### (3) KV checklist (all six built in the home first screen and visible at 1440×900)
| # | Reference element | Our counterpart | Position (1440×900) | Motion | Image |
|---|---|---|---|---|---|
| 1 | baqemono dark inset window, 87% wide, darkened image of the work (T(c), T(e)) | Dark window `#232A2B`, 1258×464, right cell = film-grain photo of the animator flipping key drawings at the light table, monitor with line test behind, shaded into the dark cell | x91–1349, y104–568; photo x569–1349 | `sp-parallax` on the photo cell, `--sp-par` 8% (mobile 5%) | **P01** |
| 2 | One-word-per-line tracked caps statement in the window's left third (T(b)) | H1 "DRAWN / BY HAND. / FINISHED / ON SCREEN." Syne 700 3rem ls .2em caps, `#D6DCDB`, one phrase per line + mono meta line | x204–560, vertically centred in the window (y≈206–466) | no reveal; on load the 4 lines appear one after another in **steps** (0 / .12 / .24 / .36s, `steps(1)`, opacity 0→1, CSS, gated by `html.sp-js:not(.sp-no-motion)` + no-preference; static = all visible) | — |
| 3 | Transparent header over the pale page, small logo left, centred tracked caps nav, red 5px dot on one item (T(c), T(f)) | Overlay header 96px: "ugoki" wordmark left x80, centred nav Work • Process · Studio · Rates · Journal · Request a quote, red dot on "Work" | y0–96 | hover colour `#A93432` 0.05s linear (T(g)) | — |
| 4 | kaitamaki film frames / contact-sheet plates (T(e), T(f)) | Cyan light-table strip with 4 key-drawing frames (4:3, 171×128) sliding sideways | x91–1349, y592–744 | `sp-marquee`, right→left, 40s linear infinite; static under reduced motion | **P02, P03, P04, P05** |
| 5 | kaitamaki mono HUD: caption + date left, "scroll — pull back" centre, tick scale + counter right (T(f)) | HUD "● Line test — take 07 · 24 fps" · "scroll — the work is below" · 24 ticks + "07 / 24" | x91–1349, y768–800 | counter "07" steps 01→24 once on load over 1s (`steps(24)` CSS counter animation on `ug-hud__frame` via `@property`; static "07") | — |
| 6 | baqemono red status dot (T(f)) | 5px `#A93432` "recording" dot at the start of the HUD caption | x91, y784 | opacity blink 1.2s `steps(2)` infinite; static (opacity 1) under reduced motion / `?sp-static` / editor | — |
Every KV image is in §10 (P01–P05). The checklist is a design guide for build and review; nothing here may be replaced by a generic "studio" hero.

---

## 3. Home page: block order

Container 1280px (x80–1360) for all ledger blocks; the hero, the band and the quote window use the 87% window width (x91–1349). Page ground `#F6F8F7`. Section gap **160px** between blocks (T(c)), 120px between case rows. Every block except 0, 1, 6 and 11 opens with the **ledger head** `ug-head`: the same 3-column grid as S2 — rail = mono section number + label ("02 — Selected work", Manrope 700 .6875rem ls .3em uppercase `#5C6B6E`), centre = **H2 Syne 700 1.75rem uppercase ls .3em lh 1.4 ink** (T(b) hero statement 28.35px ls .3em reused as the section voice), right = optional link "All work ↗" (Manrope 500 .875rem, underlined).

| # | Block (pattern) | Purpose | Layout (image / text) | Photos | Copy weight |
|---|---|---|---|---|---|
| 0 | Header (part `header`) | overlay nav, one menu | transparent, `position: absolute` over the pale page; wordmark x80; nav centred; red dot on Work; at ≥1280 "Request a quote" is the last nav item rendered as text with a 1px underline (not a button) | — | 7 words |
| 1 | **Hero** `hero` (S1) | KV: window + strip + HUD | §1 S1, §2 KV | **P01**, **P02–P05** (strip) | H1 6 words + meta 7 + HUD 14 |
| 2 | **Studio note** `note` | who we are, narrative ¶1–¶2 | ledger grid: rail "01 — The studio"; centre H2 "EIGHT PEOPLE, ONE LIGHT TABLE EACH" + **2 narrative ¶** (lead Manrope 400 1.1875rem lh 1.85, ≈60 + 55 words); right column: 3 short facts as credit stack (FOUNDED 2014 / PEOPLE 8 / IN PORT ARDEN, Canal Yard) | — | ≈130 words |
| 3 | **Selected work** `case-wall` (S2) | results first: 4 cases | 4 ledger rows; each 16:9 still, caps title, round arrow → the case's page anchor (`/commercials/#slow-train` etc.), 1 ¶ (≈45 words), 4 credits + delivery line; link "All work ↗" in the head | **P06, P07, P08, P09** | ≈200 words |
| 4 | **On the desk** `desk-sheet` (S3) | process proof, kaitamaki pull-back | rail "03 — On the desk"; H2 "THIS WEEK, IN PLATES"; one ¶ (≈35 words) in the centre column; then the 6-column staggered sheet (right-aligned x232–1360) + mono summary HUD | **P13, P14, P15, P16, P17, P18** | ≈50 words |
| 5 | **How a job moves** `process` | storyboard to delivery, 5 steps | head: rail "04 — Process", H2 "FROM BRIEF TO MASTER IN EIGHT WEEKS", right link "The whole process ↗"; then a **16:9 still P10** in the centre column (712×400) with one narrative ¶ (≈50 words, ¶3) under it; then **5 compact ledger rows** (no stills): rail "STEP 01 · DAYS 1–2", centre step name (Syne 700 1.25rem caps) + one sentence, right "YOU SEND / WE SEND" credit pair; 1px rules between rows, row padding 28px 0 | **P10** | ≈170 words |
| 6 | **Band** `band` (parallax) | pause; the craft in one line | full-bleed Cover, min-height 680px, P12 background `sp-parallax` 10% / 6%; statement bottom-left in the 1280 container: "Twenty-four drawings for every second." **Syne 700 4.25rem lh 1.05 ls −.01em `#F6F8F7`**, max 11ch; mono caption under it "light tables, 18:40" | **P12** | 8 words |
| 7 | **The eight** `people` | named people (8) | head: rail "05 — Studio", H2 "THE CREDITS, BEFORE THE CREDITS"; centre: **P11** 16:9 712×400 + ¶ (≈45 words, mentions the daily routine "every day at 14:00 the line test runs on the big screen"); right column: the 8 people as a **credit stack** (role label / name, 8 pairs, 20px gaps) — no portrait grid | **P11** | ≈90 words |
| 8 | **Rates, from** `rates` | the 6 prices, identical to Rates | head: rail "06 — Rates", H2 "WHAT A JOB USUALLY COSTS", right link "All rates ↗"; a full-width (1280) price table: name · what's included · price (nowrap right) | — | ≈80 words |
| 9 | **Journal** `journal` | 3 posts | head: rail "07 — Journal"; 3 compact ledger rows (rail = date; centre = title Syne 700 1.25rem caps + 1-line excerpt; right = category / reading time) | — (text only) | ≈60 words |
| 10 | **Request a quote** `quote-window` | the single way to work with us | the 87% dark window again (height 360px, no photo): left H2 "ONE WAY IN: REQUEST A QUOTE" (Syne 700 1.75rem caps ls .3em `#D6DCDB`), 1 ¶ (≈40 words: send the brief, length, deadline; reply within 2 working days); right: button "Request a quote" (→ `/quote/`, background `#A2D7DD`, text `#232A2B`, Manrope 700 .875rem ls .2em uppercase, 56px tall, radius 28px) + mono line "hello@ugoki-animation.example · Mon–Fri 09:30–18:00"; HUD line below the window: "● Booking from March 2027 · 2 slots" … | — | ≈60 words |
| 11 | **The Line Test** `letter` | newsletter slot (forms contract) | pale ground, ledger grid: rail "08 — Letter"; centre H2 "THE LINE TEST, MONTHLY" + ¶ (≈30 words) + `shippress_form_slot` newsletter (email + submit + notice); no reveal | — | ≈40 words |
| 12 | Footer (part `footer`) | address, hours, page index, © | pale ground, 1px top rule; 3 columns on the ledger grid: rail © line "© 2014–2026 Ugoki Animation" (Manrope 700 .6875rem ls .3em, T(c) copyright line); centre: address + hours + email + phone; right: page index (Work, Commercials, Title sequences, Shorts, Process, Studio, Rates, Request a quote, The Line Test, Journal, Privacy) | — | ≈60 words |

Home English copy: **≥250 words (target ≈ 800)**, narrative ¶: block 2 ¶1, ¶2, block 5 ¶3, block 7 ¶4 (each ≥40 words). Home image positions: **18** (P01, P02–P05, P06–P09, P10, P11, P12, P13–P18 = 18 unique files; ≥8 visible under `?sp-static`; marquee clones not counted). 

### First-screen composition (1440×900)
- y0–96 overlay header (transparent on `#F6F8F7`): wordmark "ugoki" Syne 700 1.375rem lowercase ls .02em ink at x80, y≈40; nav centred x≈470–970 (Manrope 700 .6875rem ls .3em uppercase ink, gap 38px, T(c)); red dot on WORK.
- y104–568 dark window x91–1349: H1 x204, P01 x569–1349.
- y592–744 cyan strip with 4(+clone) frames.
- y768–800 HUD line.
- y800–900 empty pale page (the next block starts at y≈960).
- Saturated share (S>0.5, V>0.3): ≈0.1% (red dot only; cyan S≈.27 is not saturated; P01 is muted grey-green). Target ≤8%, cap 15%.

### 390×844 first screen
- Header 64px in flow on pale (`position: relative` <782px): wordmark left 16px, core overlay toggle (44×44) right; the red dot sits on "Work" inside the overlay menu.
- Window full width minus 16px margins (358px), **stacked inside the same dark window**: text cell first (padding 28px 24px 24px; H1 **2.25rem ls .12em lh 1.2**, 4 lines; meta line), then the photo cell **358×220** (P01, `object-position: 35% 50%`, shade gradient turned to 180° at the top 18%).
- Strip 358×108: frames **112×84**, gap 8, padding 12, marquee 30s.
- HUD: one line, left caption "● take 07 · 24 fps", right "07 / 24"; centre text and ticks **hidden** (`display: none` <782px).
- **No vertical writing, no absolutely positioned label over text, nothing overlapping** (the only absolute element is the red dot, 5px, beside text not over it; the shade overlay is over the photo only).
- Heights: 64 + 8 + ≈236 + 220 + 16 + 108 + 16 + 24 ≈ 692px → everything visible in 844.

### Comparison with recent themes' home orders (must not match)
| Theme | Home order | First screen | Ugoki differs because |
|---|---|---|---|
| Kosame Hot Pot | sticky split photo stage + paper column → seal H1 → booking frame → story → broths → courses → rooms → day → people → notices → visit → booking → parallax band | 50/50 sticky photo half + paper half | no sticky half stage; a dark inset window with text inside + film strip + HUD; case wall comes immediately; no booking frame |
| Butai Playhouse | twin face photos + marquee strip → statement → season board → rail (7 dates) → ticket tiles → parallax band → prices table → company → journal rows → newsletter → visit | two face photos with a marquee **text** strip | our strip is **images on a cyan light table under a dark window**, not a text marquee under twin photos; no dated season rail, no ticket tiles |
| Hako Capsule | wordmark band + framed nav → full-bleed stage photo + hours card → narrative → pod wall → compare table → parallax band → cards → rules → story rows → letter → book band | wordmark band + full-bleed photo with card | no full-bleed hero, no card on the hero, no compare table, no pod wall; results-first ledger |
| Komorebi Cabins | 86% photo + vertical tagline → intro → cabin mosaic → compare table → inside row → weekend flow → woodland band → hosts → getting here → journal rows → letter | 86% photo with vertical tagline | no vertical type anywhere on home; the window is dark and split with tracked caps; no mosaic/compare table; case wall + contact sheet instead |
Ugoki order: **window+strip+HUD → studio note → 4-case credit ledger → contact sheet → process ledger → band → credits people → rates → journal → quote window → letter**. The repeated 3-column ledger grid (rail / 712 centre / 240 credits) carries the whole page; none of the four recent themes uses a credit-ledger page grid or a contact sheet.

---

## 4. Inner pages (10 pages + Journal posts page + 3 posts)

All pages: header with crumb (T4), page window + HUD (S1), body on the ledger grid (S2), ledger head per section, footer. Each page ≥120 English words.
| # | Page (slug) | Content (key points) | Photos (no repeats on a page) |
|---|---|---|---|
| 1 | **Work** (`work`) | H1 "The work". Cyan strip under the HUD (P02–P05 marquee). All **4 cases** as full ledger rows (160px pitch): 2 ¶ each (≈90 words), 4 credits + delivery line, "Watch the case ↗" round arrow → its category page anchor. Then the **full contact sheet** (S3, 6 labelled columns, 7 plates P10, P11, P13, P14, P15, P16, P17) + summary HUD. Then quote window (short). | P12 (window), P02–P05 (strip), P06–P09 (cases), P10, P11, P13–P17 (sheet) |
| 2 | **Commercials** (`commercials`) | H1 "Commercials". What we make (15 s, 20 s, 30 s spots + 6 s cut-downs; hand-drawn 2D, finished digitally); 2 ledger cases (#slow-train, #morning-pour); a ledger row "What agencies send us" (brief, script, length, media, deadline) with credits "Length / Formats / Rounds"; rates excerpt (3 commercial rows, same values as Rates); quote window | P05 (window), P06, P07, P10 |
| 3 | **Title sequences** (`title-sequences`) | H1 "Title sequences". How a title job differs (type and credits timed to music; 60–90 s; credit list delivered as text by the production); ledger case #glasshouse-nights; ledger row "What's included" with P14; rate row (title sequence); quote window | P17 (window), P08, P14 |
| 4 | **Shorts** (`shorts`) | H1 "Short films". Our own short (Paper Moths) + development service for directors (script → animatic, up to 8 min); ledger case #paper-moths; ledger row "Development, step by step" with P18; rate row; quote window | P13 (window), P09, P18 |
| 5 | **Process** (`process`) | H1 "How a job moves". Cyan strip (P02, P03, P04, P15). 5 step ledger rows with a 16:9 still on 3 of them (step 2 P10, step 3 P01, step 5 P18): rail "STEP 0n · weeks", centre name + 2 ¶, right "You send / We send / Length"; ruled notes: rounds of changes, deposit, delivery formats | P16 (window), P02, P03, P04, P15 (strip), P10, P01, P18 (steps) |
| 6 | **Studio** (`studio`) — about | H1 "The studio". Story since 2014 (3 milestones as ledger rows: 2014 / 2018 / 2023), the **daily routine** (a day at the studio, 6 times, as a compact ledger list), the 8 people as credit stacks (name, role, one line each), small contact sheet "a day at the desk" (P01, P16, P15, P14), band P12 with parallax | P11 (window), P01, P16, P15, P14, P12 (band) |
| 7 | **Rates** (`rates`) | H1 "Rates". The 6 rates as a full-width table (§8), notes (what "from" means, 2 rounds, 40% deposit, usage licence included for 2 years, broadcast + online), "what changes a price" ledger rows (length, style, deadline), quote window | P04 (window), P08 (16:9 in "what changes a price") |
| 8 | **Request a quote** (`quote`) — contact | H1 "Request a quote". 4 ledger rows "how a quote happens" (send brief → we reply in 2 working days → call → fixed quote + schedule); the **form section** (§11, `shippress_form_slot` contact + mailto fallback); studio address, hours, phone; other enquiries (press, jobs) by the same email | P03 (window), P07 (beside "send the brief") |
| 9 | **The Line Test** (`newsletter`) | H1 "The Line Test". What the monthly letter contains (one line test from the desk, one open slot, one note on craft), first Thursday of each month; standalone newsletter slot (§11) on a dark panel; last 3 issues as ledger rows | P16 (window), P13 (issue row) |
| 10 | **Privacy** (`privacy`) | H1 "Privacy". Short legal text (emails only used to reply / send the letter; no tracking cookies by the theme). No reveal. | — (window without photo, text only) |
| — | **Journal** (posts page `journal`, content empty) | archive template: page window (P12) + compact ledger rows of posts; category/tag templates the same with crumb "JOURNAL · TAG" | P12 + featured images |
| — | Posts (3) | 1 "What a line test tells a client" (cat Process, tags line test, pitching) · 2 "Why we still draw on paper" (cat Studio, tags paper, light table) · 3 "Pitching with an animatic in ten days" (cat Commercials, tags animatic, agencies) — each ≈350 words, single template = window with the featured image + 712px text column + credit stack right (date, category, tags, reading time) | P14, P10, P07 |

---

## 5. Colour

**Reference relationship (T(a))**: a quiet near-white page ~55–70%, one **dark window** (~#1F241F–#2F352E) ~30%, dark warm-grey text, a **5px red status dot** as the only saturated mark (baqemono 0.0% saturated share; kaitamaki 1.9%). We keep the relationship and values; the page and ink are cooled to sit with the row's cyan and the grey-green film photos (same lightness).

| Token (theme.json slug) | Hex | Role | Share (home first screen) | Source |
|---|---|---|---|---|
| `paper` | `#F6F8F7` | page ground, footer | ≈52% | T(a) `#F9F7F4` (L 97.2) → cool neutral, L 97.4 (±0.2%); reason below |
| `window` | `#232A2B` | dark window, quote window, newsletter panel | ≈18% (+ photo ≈16%) | T(a) window `#1F241F`–`#2F352E` mid, cooled; L within ±2% |
| `ink` | `#383D3E` | text, rules, round arrow | ≈2% | T(a) text `#3D3935` (L 24.6) → `#383D3E` (L 25.0) |
| `window-text` | `#D6DCDB` | statement and text on the window | <1% | T(b) `#D6D1CA` on dark, cooled, same L |
| `window-muted` | `#8E9A9B` | mono meta on the window | <1% | between window-text and window, 4.9:1 on `#232A2B` |
| `muted` | `#5C6B6E` | HUD, rail labels, captions | <1% | stage-a / kaitamaki mono grey; 5.3:1 on paper |
| `light-table` | `#A2D7DD` | strip ground, quote button, focus ring on dark | ≈12% | **row hex "kamenozoki" (pale jar-water cyan)**; HSV S .27 — not saturated |
| `rule` | `#CDD3D3` | hairlines between rows, table rules, input borders | <1% | T(d) hairlines, cool grey |
| `signal` | `#A93432` | 5px dots, arrow hover, error text | <0.1% | **T(a) exact** (baqemono status dot) |
| `white` | `#FFFFFF` | inputs, arrow glyph | — | — |
| `success` | `#2F5D58` on `#E3F1F2` | form success | — | light-table darkened −55% L / lightened |
- **Why the page is cool `#F6F8F7` and not `#F9F7F4`**: the row's colour is a pale cyan ("kamenozoki", the colour of water glimpsed in a jar) and the photographs have a grey-green film cast; a warm paper next to cyan reads as a dull beige and the brief says not to default to cream. Lightness is unchanged (≈97%), so the value relationship (pale page / dark window) is exactly the reference's.
- **Cyan `#A2D7DD` role**: the light-table glow — the strip under the window (home, Work, Process), the quote button on the dark quote window, focus rings on dark. It never becomes a large section background beyond the 152px strip; no cyan text on paper (contrast 1.6:1).
- Contrast: ink on paper 10.6:1; window-text on window 11.3:1; muted on paper 5.3:1; window on light-table 8.9:1 (button text); signal on paper 6.3:1; paper on window 13.5:1.
- **First-screen saturated share: target ≤8% (measured estimate ≈0.1%), gate cap 15%, row cap 30%.** Avoided dominant colours of recent themes: Kosame azuki/near-black, Butai ink-black, Hako, Komorebi greige/terracotta.

---

## 6. Typography (sans direction)

Loaded only through **theme.json `fontFamilies` + `fontFace`** (woff2 in `assets/fonts/`, OFL licence files, every file listed in theme-meta.json `fonts[].files` with `licenseFile`, family names in readme.txt) so the block-editor iframe and the front end show the same faces. style.css has `:lang()` rules → copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it. `check-editor-fonts.mjs` must pass in en and zh-TW.

| Family (slug) | Files | Stack |
|---|---|---|
| `display` **Syne** (variable wght 400–800) | `syne-variable.woff2` | `"Syne", "Helvetica Neue", Arial, sans-serif` |
| `body` **Manrope** (variable wght 200–800) | `manrope-variable.woff2` | `"Manrope", "Helvetica Neue", Arial, sans-serif` |
| `display-zh` **Noto Sans TC** (subset, 700) | `noto-sans-tc-700-subset.woff2` | zh-TW headings: `"Syne", "Noto Sans TC", "PingFang TC", "Microsoft JhengHei", sans-serif` |
| `display-ja` **Noto Sans JP** (subset, 700) | `noto-sans-jp-700-subset.woff2` | ja headings: `"Syne", "Noto Sans JP", "Hiragino Sans", "Yu Gothic", sans-serif` |
CJK body (system fonts only; must **not** contain the bundled zh / ja families): zh-TW `"Manrope", "PingFang TC", "Microsoft JhengHei", "Noto Sans CJK TC", sans-serif`; ja `"Manrope", "Hiragino Sans", "Yu Gothic", "Noto Sans CJK JP", sans-serif`. Subsets via the Hokuto / Hada replacement method (the shared zh subset script is broken), covering every heading, statement, crumb, HUD caption and wordmark glyph in demo-content.zh-TW.json / ja.json and the i18n dictionaries. No serif or Mincho face anywhere. Mono look (kaitamaki's Source Code Pro, T(b)) = **Manrope 600 with `font-variant-numeric: tabular-nums` and ls .1em** — no extra mono family.

Sizes (theme.json `fontSizes`):
| Slug | Size | Use | Token |
|---|---|---|---|
| `x-small` | .6875rem | rail labels, credit labels, nav, crumb, © | **T(b) nav/label 11px ls .3em** |
| `small` | .75rem | HUD, mono meta, captions | **T(b) kaitamaki mono 11–12px** |
| `medium` | 1rem | body | T(b) body 14px (JP) → 16px Latin |
| `credit` | .875rem | credit values, delivery line, table description | T(b) credit names ≈13–14px |
| `large` | 1.1875rem | lead (block 2) | — |
| `title` | 1.25rem | case / step / post titles (caps) | **T(b) case title 20px ls 1px** |
| `x-large` | 1.75rem | section H2 (caps, ls .3em) | **T(b) hero statement 28.35px ls .3em** |
| `xx-large` | 3rem | home hero H1 (caps, ls .2em) | statement scaled ×1.7 (row: big KV type) |
| `display` | **4.25rem** | inner H1, band statement | largest (rule) |
- **Body**: Manrope 400 1rem **lh 1.85**, ls .01em, ink; ¶ gap 1.4em; measure 712px.
- **Hero H1**: Syne 700 3rem uppercase **ls .2em** lh 1.25 (T(b) .3em at 28px; .2em at 48px keeps the same visual tracking); mobile 2.25rem ls .12em.
- **Section H2**: Syne 700 1.75rem uppercase ls .3em lh 1.4 (T(b) exact tracking); mobile 1.25rem ls .2em.
- **Titles**: Syne 700 1.25rem uppercase ls .05em lh 1.3 (T(b) 20px ls 1px).
- **Inner H1 / band**: Syne 700 4.25rem lh 1.0 ls −.01em, sentence case; mobile 2.5rem.
- **Labels**: Manrope 700 .6875rem uppercase ls .3em (T(b)). **HUD**: Manrope 600 .75rem ls .1em tabular-nums.
- Weights on screen: 400 / 500 / 600 / 700 (Manrope), 700 only (Syne).
- **zh-TW / ja**: headings ×0.75 of the Latin size (hero H1 2.25rem, ls .16em; section H2 1.3125rem ls .2em; inner H1 3.1875rem; band 3.1875rem), no uppercase transform effect needed, body lh **1.85**, body ls .04em; hero statement 4 short lines ≤7 characters each (rewrite locally). **de / fr**: `hyphens: auto`; caps H2 may wrap; never below 1.25rem; hero H1 at 2.75rem for de if a line exceeds the cell (`:lang(de) .ug-window__text h1`).

---

## 7. Motion and scroll (sp-scroll)

Copy `pipeline/assets/sp-scroll/` unchanged to `assets/`; enqueue css + js in the head (js not deferred); `add_editor_style('assets/sp-scroll.css')`. Theme variables (style.css): `:root { --sp-dist: 16px; --sp-dur: .4s; --sp-ease: cubic-bezier(.25,.46,.45,.94); }` (T(g) baqemono rows `is-in` 0.2–0.4s ease, short travel). Max 3 effects per page + parallax.

### 7.1 Chosen effects (3 from stage-a "Scroll effect candidates" + parallax)
| # | Effect | sp-* | Where | Reference trigger / time / easing | Ours |
|---|---|---|---|---|---|
| E1 | Case rows switch on as they enter, credits follow one by one | each `ug-case` row: `sp-reveal sp-reveal--up`; the credit stack `ug-case__credits` = `sp-stagger`, each credit Group `sp-reveal sp-reveal--up` | home blocks 3, 5 (rows), 7 (credit stack), 9; Work, Commercials, Title sequences, Shorts, Process, Studio, Journal rows | baqemono: IntersectionObserver threshold 0, class `is-in`, 0.2–0.4s, linear/ease (T(g)) | .4s `cubic-bezier(.25,.46,.45,.94)`, 16px, stagger .12s (sp-stagger) |
| E2 | Contact sheet pull-back | the sheet Group `sp-reveal sp-reveal--zoom` with inline `--sp-dur: 2s` and `transition-delay: .5s` (style.css on `.ug-sheet.sp-reveal`) | home block 4; Work sheet; Studio small sheet | kaitamaki: wheel scrubs a zoom from one frame to the contact sheet, scale ease 2s, 0.5s delay (T(g)) | scale 1.06 → 1 + fade, 2s, .5s delay, `cubic-bezier(.23,1,.32,1)` |
| E3 | Film strip sliding through the gate | `ug-strip` = `sp-marquee` (pattern contains the 4 frames + an `aria-hidden` duplicate group) | home hero; Work and Process under the page window | kaitamaki HUD frames + baqemono stepping window (T(g)): continuous, linear | 40s linear infinite right → left (mobile 30s); pauses on hover; static when reduced |
| (P) | Parallax | `sp-parallax` | §7.2 | — | — |
Also, theme CSS only (not sp-*, all inside `@media (prefers-reduced-motion: no-preference)` and `html.sp-js:not(.sp-no-motion)`): hero H1 lines stepping in on load (§2 KV #2), HUD frame counter 01→24 `steps(24)` 1s once, red dot blink 1.2s `steps(2)`, hover swaps 0.05s linear (nav, arrow, links, T(g)). Header crumb is static (no scroll morph; we do not write scroll listeners).
- **No reveal** in the first screen (header, window, strip, HUD), on any form or its wrapper, on the rates table or any table, the footer hours, or the Privacy page. Children of the marquee strip never get `sp-reveal`. Reveals ≤60% of home blocks (blocks 3, 4, 5, 7, 9 = 5 of 13). Not used: `sp-count`, `--wipe`, `--mask`, `--left/--right`, `--down`.

### 7.2 Parallax (required; desktop and mobile)
| Where | Block | Moving layer | Foreground (static) | `--sp-par` desktop / mobile | Reference motion |
|---|---|---|---|---|---|
| **Hero window photo** (home block 1, primary) | Group `ug-window__photo sp-parallax` (`overflow: clip`) inside the dark window | **P01** `figure > img` | the H1 is in the other cell; the shade overlay is a sibling (not in the layer) | **8% / 5%** | baqemono's darkened work drifting inside the fixed window; kaitamaki's frame you move through |
| **Band** (home block 6, Studio) | Cover `ug-band sp-parallax`, full width, min-height 680px (mobile 480px) | **P12** cover background | statement + caption (not in the layer) | **10% / 6%** | kaitamaki's pull-back: the room of light tables slides behind the line |
| Page windows (all inner pages) | `ug-window__photo sp-parallax` | the page's window photo | H1 in the text cell | 6% / 4% | same as hero |
Reduced motion, `?sp-static`, no JS and the editor: no movement. Acceptance: `check-parallax.mjs` desktop 1280×900 + mobile 390×844: hero photo and band displacement difference ≥6px, ≤1px under reduced motion; ≥3 reveals hidden before entering and final after; nothing transparent after scrolling to the bottom.

---

## 8. Responsive rules (hard)

- **≥1280px**: ledger grid `240px 712px 240px`, gap 44px (x80 / 364–1076 / 1120–1360). Window 87% (max 1258px).
- **1024–1279px**: ledger `180px minmax(0,1fr) 200px`, gap 32px, container 100% − 2×48px. Hero H1 2.5rem.
- **782–1023px**: ledger 2 columns `minmax(0,1fr) 200px`; the rail becomes a row above the centre (date and format inline, separated by " · "); sticky rail off. Window 92% wide, grid 42/58, height 400px. Sheet: 3 columns × 2 rows, offsets halved.
- **<782px**: single column, 16px side padding. Case: rail line → 16:9 still full width → title row (arrow stays right, 44px) → body → credits as a **2-column definition list** (label above value, 16px gap) → hairline → delivery line. Window stacked (text cell then photo cell). Sheet: 3 columns of 2 plates (plates `calc((100% - 2×12px)/3)`), stagger offsets 0 / 24 / 8. Band min-height 480px, statement 2.5rem. Quote window stacked, button full width. Nav in the core overlay menu.
- **390px first screen**: as §3 "390×844". No `writing-mode`, no absolutely positioned label over text, no overlap; HUD centre and ticks hidden.
- **Rates table ≥782px** (home block 8 and Rates): `width: 100%` of the **1280 container** (full width, not inside the 712 column); `table-layout: auto`; columns: name (Syne 700 1rem caps ls .05em, left, wraps) · what's included (Manrope 400 .875rem `#5C6B6E`, left) · **price `white-space: nowrap; text-align: right; width: 1%; padding-left: 32px`** (Manrope 700 1.125rem tabular-nums, ink, "from €9,800"); 1px `#CDD3D3` rules, row padding 24px 0; no `overflow: hidden` on any wrapper; not clipped at 800 and 1280.
- **Any table <782px**: stacked — each row is a block: name left + price right on one line (flex `space-between`, price nowrap), description below; 1px rules between rows; no horizontal scrolling. Info lists (hours, address) are not tables.
- Touch targets ≥44px (arrow 44px, nav toggle 44px, button 56px). `html, body { overflow-x: clip }`; the marquee track lives inside `ug-strip { overflow: clip }`. `scrollWidth == innerWidth` at 390 and 1280.

---

## 9. Fixed facts (identical on every page and in all five locales; brand.md must copy these)

- **Name**: Ugoki Animation ("ugoki" = movement). **Founded 2014** by **Ines Marlow** and **Tomasz Reyes**. **Address**: Unit 4, 27 Canal Yard, Port Arden (fictional). **Phone** +44 1632 960 418. **Email** hello@ugoki-animation.example (every mailto). **Hours** Mon–Fri **09:30–18:00**; closed weekends and public holidays. **Quote reply**: within **2 working days**.
- **Studio**: **8 people**, 8 light tables, one line-test screen; hand-drawn 2D on paper, scanned, cleaned up, coloured and composited on screens.
- **People (8)**: Ines Marlow — director, co-founder · Tomasz Reyes — animation director, co-founder · Wen Li — producer (quotes and schedules) · Sofia Aranda — storyboard artist · Adaeze Nwosu — key animator · Lukas Brandt — key animator and line tests · Priya Raman — clean-up and colour · Jonah Feld — compositing and finishing.
- **Cases (4; all clients fictional)**:
  1. **The Slow Train** — commercial, 30 s + 15 s + 6 s, client **Northfold Rail**, agency **Copperline & Ward**, direction Ines Marlow, animation Adaeze Nwosu / Lukas Brandt; date 2025.03.14; delivery line "On air — spring 2025"; ≈1,100 drawings. Anchor `/commercials/#slow-train`. Image P06.
  2. **Morning Pour** — commercial, 20 s + 6 s, client **Pellow Oat Drink**, agency **in-house (Pellow studio)**, direction Tomasz Reyes, animation Lukas Brandt / Priya Raman; date 2024.10.02; "Online — autumn 2024". `/commercials/#morning-pour`. P07.
  3. **Glasshouse Nights** — title sequence, 75 s, client **Tidewater Pictures** (drama series), direction Ines Marlow, animation Adaeze Nwosu / Jonah Feld; date 2024.06.21; "Series premiere — June 2024". `/title-sequences/#glasshouse-nights`. P08.
  4. **Paper Moths** — short film, 6 min, studio production, direction Tomasz Reyes, animation the whole studio; date 2025.11.08; "Screened — Port Arden Cinema Club, November 2025". `/shorts/#paper-moths`. P09.
  No awards, no real brands, no real broadcasters.
- **Rates (6; home block 8 and Rates identical; prices exclude VAT)**:
  | Item | What's included | Price |
  |---|---|---|
  | Pitch animatic | up to 30 s: boards, timing, scratch sound | **€2,400** |
  | Line test pass | 10 s of key animation as a pencil test, for agency pitches | **€1,200** |
  | 15-second commercial | hand-drawn 2D, colour, compositing, 2 rounds of changes | **from €9,800** |
  | 30-second commercial | as above, with 15 s and 6 s cut-downs | **from €16,500** |
  | Title sequence | up to 90 s, type and credits timed to the music | **from €22,000** |
  | Short film development | script to animatic, up to 8 minutes | **€6,500** |
  Notes: 40% deposit on the signed quote; 2 rounds of changes at storyboard and at line test; usage licence for broadcast and online for 2 years included.
- **Process (5 steps; a 30 s spot takes 8 weeks)**: 01 Brief and quote — days 1–2 (you send script, length, deadline; we send a fixed quote and schedule) · 02 Storyboard and animatic — weeks 1–2 · 03 Key drawings and line test — weeks 3–4 · 04 Clean-up, colour and compositing — weeks 5–7 · 05 Sound, grade and delivery — week 8 (masters ProRes 4444 + H.264 in 16:9, 9:16 and 1:1).
- **Request a quote (the single way, 4 steps)**: 1 send the brief (form on Request a quote or the email it opens) · 2 reply within 2 working days · 3 a 30-minute call · 4 a fixed quote and a schedule. Booking now from **March 2027**, 2 slots.
- **A day at the studio (daily routine)**: 09:30 stand-up at the light tables · 10:00 drawing · 13:00 lunch · 14:00 line-test review on the big screen · 16:30 producer call with clients · 18:00 close.
- **Milestones (3)**: 2014 two founders, two light tables · 2018 the studio moves to Canal Yard and grows to 6 · 2023 eight people and the first title sequence.
- **Posts (3)**: "What a line test tells a client" · "Why we still draw on paper" · "Pitching with an animatic in ten days".
- **The Line Test** (newsletter): first Thursday of every month — one line test from the desk, one open slot, one note on craft.
- **Getting here**: Canal Yard tram stop, 4 minutes on foot; step-free entrance; visits by appointment.
- **Audience**: agency producers, broadcasters' promo teams and directors; theme buyers are small 2D and stop-motion animation studios pitching to agencies and broadcasters. **Tone**: plain, precise, warm, short sentences, studio vocabulary explained once; no awards, no "best", no guarantees.

---

## 10. Images (18 photographs, one STYLE; all 18 on home)

**STYLE** (identical for every image):
`IMAGE_STYLE="documentary film-grain photograph of a small hand-drawn animation studio, cool grey-green colour cast, soft daylight from a large window, visible 35mm film grain, shallow depth of field, muted cyan shadows, pale walls, paper, pencils and glowing light tables, quiet and unposed, modern international studio, diverse adults, natural skin tones, no text, no letters, no numbers, no logos, no brand names, no readable screens or interface, no Japanese elements"`
Generate one at a time with `scripts/grok-image.sh out.webp "<subject>"`; Read every image; regenerate any with text, readable UI, logos, broken hands / faces / pencils, saturated colour, or a warm/orange look. ≤300 KB, ≤2000px, webp. No cut-outs.

| # | File | Subject (prompt core) | Ratio / size | Used on (page · block) | Home |
|---|---|---|---|---|---|
| P01 | `kv-light-table.webp` | **KV**: an animator (woman, 30s, Black, sleeves pushed up) at a glowing light table, flipping a stack of paper key drawings between her fingers, pencil behind her ear; behind her a monitor shows a loose grey pencil line test of a walking figure (soft, no UI); window light from the left | 1.68, 2000×1190 | Home hero window · Process step 3 · Studio sheet | ✔ |
| P02 | `strip-walk-sheet.webp` | close-up: one paper sheet on a light table with a soft pencil drawing of a walking figure, peg bar at the top edge, light glowing through | 4:3, 1200×900 | Home strip · Work strip · Process strip | ✔ |
| P03 | `strip-peg-bar.webp` | two hands aligning a stack of sheets on a metal peg bar on a light table | 4:3, 1200×900 | Home strip · Work strip · Process strip · Quote window | ✔ |
| P04 | `strip-flip.webp` | hands rolling the corners of five sheets to flip between drawings, pencil lines of a bouncing ball visible through the paper | 4:3, 1200×900 | Home strip · Work strip · Process strip · Rates window | ✔ |
| P05 | `strip-line-test.webp` | a hand on a jog wheel in front of a softly blurred monitor playing a grey pencil animation | 4:3, 1200×900 | Home strip · Work strip · Commercials window | ✔ |
| P06 | `case-slow-train.webp` | colour keys painted in gouache of a small train crossing soft green hills, six sheets pinned on a cork board beside a desk lamp | 16:9, 2000×1125 | Home case 1 · Work · Commercials | ✔ |
| P07 | `case-morning-pour.webp` | a row of pencil drawings of a pour of oat milk into a bowl laid out across a light table, a hand pointing at one | 16:9, 2000×1125 | Home case 2 · Work · Commercials · Quote · post 3 | ✔ |
| P08 | `case-glasshouse.webp` | a compositor (man, 40s, South Asian) at a pen tablet in a dim room, a large monitor showing a dark painted glasshouse at night glowing teal (no UI, no text) | 16:9, 2000×1125 | Home case 3 · Work · Title sequences · Rates | ✔ |
| P09 | `case-paper-moths.webp` | pencil and watercolour drawings of moths fanned across a table by a window in the evening, one drawing lifted by a hand | 16:9, 2000×1125 | Home case 4 · Work · Shorts | ✔ |
| P10 | `process-board-wall.webp` | a storyboard wall: rows of small rough pencil panels pinned on a pale wall, two people discussing (woman 20s Latina, man 50s white), blank paper notes | 16:9, 2000×1125 | Home process · Work sheet · Commercials · Process step 2 · post 2 | ✔ |
| P11 | `studio-desks.webp` | wide view of the studio: eight desks with light tables, plants, a large window, four people working quietly | 16:9, 2000×1125 | Home people · Work sheet · Studio window | ✔ |
| P12 | `band-light-tables.webp` | dusk in the empty studio: a row of light tables glowing cyan-white, chairs pushed in, blue window | 2.4, 2000×834 | Home band · Studio band · Work window · Journal archive window | ✔ |
| P13 | `sheet-thumbnails.webp` | an open sketchbook of tiny thumbnail sketches in pencil, a hand with a pencil at the edge | 4:3, 1200×900 | Home sheet · Work sheet · Shorts window · Line Test issue row | ✔ |
| P14 | `sheet-colour-chips.webp` | gouache colour swatches painted on paper in muted teal, grey and ochre, a wet brush beside | 4:3, 1200×900 | Home sheet · Work sheet · Title sequences · Studio sheet · post 1 | ✔ |
| P15 | `sheet-scanner.webp` | a hand laying a drawing face down on a flatbed scanner glass, light bar glowing | 4:3, 1200×900 | Home sheet · Work sheet · Process strip · Studio sheet | ✔ |
| P16 | `sheet-mirror.webp` | an animator (man, 20s, East Asian) acting out a gesture in front of a small desk mirror, pencil in hand | 4:3, 1200×900 | Home sheet · Work sheet · Process window · Studio sheet · Line Test window | ✔ |
| P17 | `sheet-tablet.webp` | close-up of a pen on a drawing tablet, cleaned-up line work softly out of focus on the screen behind | 4:3, 1200×900 | Home sheet · Work sheet · Title sequences window | ✔ |
| P18 | `sheet-sound.webp` | a person (woman, 40s, white, grey hair) listening on headphones with eyes closed at a desk with a small microphone, soft window light | 4:3, 1200×900 | Home sheet · Shorts · Process step 5 | ✔ |

Per-page check (no repeats on one page; marquee clones excluded): **Home** P01–P18 · **Work** P12 (window), P02–P05 (strip), P06–P09 (cases), P10, P11, P13, P14, P15, P16, P17 (sheet) · **Commercials** P05, P06, P07, P10 · **Title sequences** P17, P08, P14 · **Shorts** P13, P09, P18 · **Process** P16 (window), P02, P03, P04, P15 (strip), P10, P01, P18 (steps) · **Studio** P11 (window), P01, P16, P15, P14 (sheet), P12 (band) · **Rates** P04, P08 · **Request a quote** P03, P07 · **The Line Test** P16, P13 · **Privacy** none · **Journal** P12 · posts: 1 P14, 2 P10, 3 P07.
Window photos are `object-fit: cover`; 4:3 photos in a window cell are cropped `object-position: center 45%`.

---

## 11. Forms (form contract v1: `steps/form-contract-v1` exists)

Copy `pipeline/assets/forms/shippress-forms.php` unchanged to `inc/`, its CSS and editor JS unchanged to `assets/`; `require` it in functions.php. Patterns stay literal block markup with a small PHP island for `shippress_form_slot` (README pattern), imported with `wp_slash()`. **No form in the home first screen; no `sp-reveal` on any form or its wrapper.**
- **Request a quote (`quote`; the contact screen; anchor `#brief`)**: section on the ledger grid: rail "03 — Your brief", centre H2 "SEND THE BRIEF" + one ¶, then `shippress_form_slot( kind: contact, fallback )` in the 712px centre column; right column: credit stack "REPLY / within 2 working days", "HOURS / Mon–Fri 09:30–18:00", "PHONE / +44 1632 960 418". **Fallback** = buffered literal mailto button **"Email your brief"** (`wp-element-button`, background `#232A2B`, text `#F6F8F7`, Manrope 700 .875rem ls .2em uppercase, 56px tall, radius 28px, href `mailto:hello@ugoki-animation.example?subject=<forms_quote_subject>`) + hint "Opens your email app. Tell us the format, length, deadline, budget range and a link to the script or deck." Never links to `/quote/` or `/contact/`. Recommended CF7 fields (readme, not created by the theme): name*, company / agency, email*, phone, format* (select: Commercial / Title sequence / Short film / Pitch animatic / Line test), length* (text, e.g. "30 s + 15 s"), deadline* (date), budget range (select: under €5,000 / €5,000–15,000 / €15,000–30,000 / over €30,000), brief* (textarea), link to script or deck (url), consent* (checkbox), submit **"Send the brief"**.
- No other booking / enquiry page exists (single way in).
- **The Line Test (`newsletter`)**: standalone page (not an alias of the posts page): dark panel `ug-panel--dark` (`#232A2B`, 87% window width, padding 56px, radius 4px) holding H2 "GET THE LINE TEST" + ¶ + `shippress_form_slot( kind: newsletter, email: hello@ugoki-animation.example, label: forms_email, submit: forms_subscribe, notice: forms_mail_notice, subject: forms_mail_subject )`.
- **Home block 11**: the same newsletter slot on the pale page (light case). **Footer**: link to The Line Test only (no second slot).
- Plugin order (shared helper): newsletter MailPoet (explicit id) → MC4WP; CF7 / WPForms only via an explicit dedicated newsletter id. Contact kind CF7 → WPForms. Without plugins the newsletter shows a required `type=email` field + submit, native mailto POST, notice visible.
- **Tokens** (style.css, mapped to theme.json presets):
  - light (default, paper): `--sp-form-accent: var(--wp--preset--color--window)` #232A2B; `--sp-form-on-accent: var(--wp--preset--color--paper)`; `--sp-form-radius: 4px` (T(d) image corners 4px; submit 28px pill like the quote button via plugin-scoped CSS); `--sp-form-focus: var(--wp--preset--color--ink)` (2px outline, offset 2px); `--sp-form-surface: var(--wp--preset--color--white)`; `--sp-form-text: var(--wp--preset--color--ink)`. Inputs 52px tall, 1px border `#CDD3D3`, hover border `#5C6B6E`, Manrope 400 1rem, padding 14px 16px; textarea min 180px; select with a 1px chevron; labels Manrope 700 .6875rem uppercase ls .3em ink (credit-label style), 8px above; checkbox / radio 18px, `accent-color: #232A2B`; submit 56px, Manrope 700 .875rem ls .2em uppercase; hover background `#A93432` 0.05s linear (T(g)); disabled `#CDD3D3`. Error: text + 1px border `#A93432`, message .8125rem under the field; success panel `#E3F1F2` text `#2F5D58`, 1px `#A2D7DD` border.
  - dark (`.ug-panel--dark`, window ground): `--sp-form-surface: #2D3536`; `--sp-form-text: #F6F8F7`; `--sp-form-accent: #A2D7DD`; `--sp-form-on-accent: #232A2B`; `--sp-form-focus: #A2D7DD` (2px); field border `rgba(246,248,247,.3)`; placeholder `rgba(246,248,247,.55)`; error `#F0A8A3`; success `#A2D7DD`; labels and notice inherit `#D6DCDB`.
  - States styled: input, textarea, select, checkbox / radio, label, submit, hover, focus-visible, disabled, error, success; scoped to CF7, WPForms, MailPoet, MC4WP (+ Jetpack, `.wp-block-form`) classes and `.sp-newsletter-fallback`; **no global input / form selectors**.
- **i18n semantic keys** (`inc/i18n/en.php` first, extract with `L10N_SEMANTIC=1`; rewritten locally in **en, zh-TW, ja, fr, de**; dynamic block attributes included): `forms_email` "Email address", `forms_subscribe` "Send me The Line Test", `forms_mail_notice` "This opens your email app. Send the message to subscribe; you are not subscribed yet.", `forms_mail_subject` "Subscribe to The Line Test", `forms_quote_subject` "Quote request", `forms_quote_button` "Email your brief", `forms_quote_hint`, `contact_email` "Email us". Check rendered labels, fallback button, subject and notice in all five locales.
- Validation: `form-check.py`, five-locale `form-runtime-check.php`, `repo-gates.sh forms`; a real CF7 check at 390px and desktop on light (Request a quote) and dark (The Line Test panel); never submit.

---

## 12. Similarity table (target ≈ 80%; values from reference-tokens.md)

| Dimension | Reference value (token) | Ugoki value |
|---|---|---|
| Ground | `#F9F7F4` paper 55–70% (T(a)) | `#F6F8F7` (same L, cooled) ≈52% |
| Window | dark ~`#1F241F`–`#2F352E`, 1258×567, 87% width, 76px under header (T(a), T(c)) | `#232A2B`, 1258×464, 87%, 8px under the 96px overlay header (strip + HUD need the height) |
| Text | `#3D3935` (T(a)) | `#383D3E` (same L) |
| Accent | red dot `#A93432` 5px, <1% (T(a), T(f)) | exact, 5px, nav + HUD; arrow hover |
| Added colour | — (kaitamaki photos cool-green) | row cyan `#A2D7DD` ≈12% (strip, quote button) |
| Saturated share | 0.0% / 1.9% (T(a)) | ≈0.1% (cap 15%) |
| Hero statement | Maax 700 caps 28.35px ls .3em lh 1.67, one word per line, `#D6D1CA` on dark (T(b)) | Syne 700 caps 3rem ls .2em lh 1.25, one phrase per line, `#D6DCDB` on dark |
| Labels / nav | 11px 700 caps ls .3em (T(b)) | .6875rem 700 caps ls .3em |
| Case title | 20px 700 caps ls 1px (T(b)) | 1.25rem 700 caps ls .05em |
| Mono HUD | Source Code Pro 11–12px ls .1em (T(b), T(f)) | Manrope 600 tabular .75rem ls .1em |
| Header | logo x80, centred nav gap ~38px, red dot; crumb "logo │ SECTION" 1px divider (T(c), T(f)) | identical geometry; crumb on inner pages (static) |
| Case ledger | rail x80 / centre x364–1076 (712) / credits x1120–1360 (240); pitch ≈ viewport, 160px gap (T(c)) | identical grid; 160px on Work, 120px on home |
| Still | 16:9 712×400, corners ~4px (T(d), T(e)) | identical |
| Round arrow | 44px, `#3D3935`, white arrow (T(d)) | 44px, `#383D3E`, white ↗; hover `#A93432` |
| Credit stack | caps labels + names, 24px hairline, underlined last line with ↗ (T(d), T(f)) | identical; award line → delivery line |
| Contact sheet | ~111px columns, ~10px gutters, lower-case mono labels, uneven columns, summary line + ticks "×0.9" (T(f)) | 168px columns, 24px gutters (home) / 10px (Work), staggered tops, mono labels, summary + ticks "×0.9" |
| HUD | caption + date left, "scroll — pull back" centre, tick scale + readouts + "15/15" right (T(f)) | caption + dot left, "scroll — the work is below", 24 ticks + "07 / 24" |
| Radius / shadow | ~4px images, round arrow, no shadows, no card borders (T(d)) | 4px, round arrow + pill buttons, no shadows, no cards |
| Imagery | darkened finished work; film-look cool-green photos, grain (T(e)) | film-grain, cool grey-green, muted cyan shadows (STYLE §10) |
| Row motion | IO `is-in`, 0.2–0.4s ease/linear (T(g)) | sp-reveal--up .4s, 16px, stagger .12s |
| Zoom | scale 2s, 0.5s delay (T(g)) | sp-reveal--zoom 2s, .5s delay |
| Hover | 0.05s linear swaps (T(g)) | 0.05s linear |
| Hero motion | stepping statement lines (T(g)) | stepped line appearance on load + 24-step counter + marquee strip |
| Additions (not in ref) | — | parallax hero photo + P12 band (rule); quote window; newsletter (forms contract) |

---

## 13. Home acceptance checklist (stage 1)

1. 1440×900 first screen: pale `#F6F8F7` page; overlay header (wordmark x80, centred caps nav, red 5px dot on WORK); **dark window 87% wide** at y≈104 with H1 "DRAWN / BY HAND. / FINISHED / ON SCREEN." (tracked caps, one phrase per line) in the left cell and **P01** (animator flipping key drawings at a light table, line test on the monitor) in the right cell shaded into the dark; **cyan strip** of 4 key-drawing frames directly under the window; **HUD line** with red dot + caption, centre text, 24 ticks and "07 / 24". Nothing else (no form, table, search, card, second heading).
2. `?sp-motion`: strip slides right → left (40s loop), H1 lines step in, counter steps to 24, dot blinks, P01 parallax ≥6px; `?sp-static` / reduced motion: all static and visible.
3. 390×844: header 64px; window stacked (H1 2.25rem then P01), strip 3 frames, HUD caption + counter only; **no vertical writing, no absolute labels over text, no overlap**, no horizontal overflow.
4. Block 3 directly after the studio note: **4 credit-ledger rows** at 240 / 712 / 240 with 16:9 stills (P06–P09), caps titles, **round dark 44px arrows**, ≥4 credits each + hairline + underlined delivery line; rows reveal up, credits stagger.
5. Block 4 contact sheet: 6 lower-case labelled columns of small plates (P13–P18) at staggered heights + summary HUD with ticks "×0.9"; zoom reveal 2s.
6. Block 5 process: P10 still + ¶ + 5 ledger step rows (days 1–2, weeks 1–2, 3–4, 5–7, 8) matching §9.
7. Block 6 full-bleed P12 band with the 4.25rem statement and visible parallax (desktop + mobile).
8. Block 7: P11 + 8 named people as a credit stack (no portrait grid).
9. Block 8 rates: 6 rows exactly as §9 (€2,400 / €1,200 / from €9,800 / from €16,500 / from €22,000 / €6,500); full 1280 width ≥782, price column nowrap right, not clipped at 800 and 1280; stacked <782.
10. Block 9 journal 3 rows; block 10 dark quote window with the cyan "Request a quote" button (→ /quote/) and hours line; block 11 newsletter slot (email + submit + notice without plugins; no reveal); footer with © line, address, hours, page index.
11. 18 unique photos on home (≥8 visible statically); 0 cut-outs; every image Read-checked (no text, UI, logos).
12. ≥250 English words (target ≈800), ≥3 narrative ¶ of ≥20 words; "day"/"daily" appears with the 14:00 line-test routine.
13. Effects: sp-reveal--up + sp-stagger, sp-reveal--zoom, sp-marquee, sp-parallax only (+ theme CSS load steps, counter, blink, hover); no reveal in the first screen, forms, tables, hours; `check-parallax.mjs` passes desktop + mobile.
14. First-screen saturated share ≤8% (cap 15%); largest theme.json size 4.25rem; fonts via theme.json fontFace (Syne, Manrope, Noto Sans TC / JP subsets); editor matches the front end; no serif face.
15. Exactly one top menu; "Request a quote" is the only call to action wording; no awards, no real brands.
16. auto-gates `1 1` pass for en; `pattern_source.py` passes.
