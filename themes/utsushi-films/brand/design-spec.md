# Utsushi Films — design spec (stage 1, design director)

Type: **portfolio** (theme-meta `"type": "portfolio"`, page_structure **results-first-case-wall**, archetype asymmetric-masonry, hero framed-window, nav split). Industry: an independent documentary director's small studio (commissioned documentaries for broadcasters, NGOs and institutions, plus festival films). One action everywhere: **"Propose a film"** → `/propose/`.
Primary reference: **https://www.east64films.com/** (S5-Style, film production, dark). Tokens: `brand/reference-tokens.md`, cited **T(a)…T(g)**. Screens: `ref/e64-0.png`, `ref/scroll-e64-after.png`, `ref/e64-about.png`, `ref/scroll-e64-about-700/1500.png`, `ref/e64-works.png`, `ref/e64-single-0.png`. Secondary: none.
**Imagery: photo** (stage-a IMAGERY = photo) → one real-photography STYLE, **low-key** documentary (row photo_direction low-key) (§10). 0 cut-outs.
Font direction: **sans**. Latin display **Space Grotesk**, Latin body/UI **Inter Tight**; zh-TW / ja **Noto Sans TC / Noto Sans JP** (gothic). No serif, no Mincho (the reference's condensed serif becomes Space Grotesk).
Similarity target ≈ **80%** (palette, image treatment, motion, decoration, layout). Photos, copy and logo are ours.
Class prefix `uf-`; patterns `utsushi-films/<name>`. Radius **0 everywhere** (T(d)). No shadows.

---

## 1. Signature techniques (none may be softened)

### T1 — Film index crossing a centred framed window
- **Source**: east64films.com top (`e64-0.png`, `scroll-e64-after.png`; T(b)(c)(f)(g)). Charcoal ground; a 728×418 film window centred (x356–1084, y241–659); a full-width ten-row index (13px caps, 23px pitch; columns x48 no., x156 title, x941 client, x1205 category, x1349 year) runs **across** the window; active row bright with ▸, others ≈0.25 opacity; the active title as a big caption centred under the window.
- **Ours** (home §2 `utsushi-films/kv`): window **728×418** centred, top **241px** at 900 tall (`top: calc(50% - 209px)`), photo **P01**; **six rows** (01–06) as a `<ol>` list (NOT a table) centred vertically on the window (rows y≈381–519), columns at the ref x positions in %: no. 3.33% (x48), title 10.83% (x156), outlet 65.3% (x941), form 83.7% (x1205), year right-aligned to 96.7% (x1392). Inter Tight 500 .8125rem caps, line-height 23px, ls .02em, `#ECE9E2`. Row 01 active: opacity 1 + "▸" (.625rem) at x 3.5% left of the number; rows 02–06 opacity **.3**; rows sit **above** the window (z 2) and visibly pass over its left and right edges.
- **Must not soften**: window really centred and ≈50% of viewport width, no radius; rows really full width and **cross** the window (not stacked below it); dimmed inactive rows; caption big and centred under the window.

### T2 — Asymmetric case wall in index-row voice (results first)
- **Source**: works grid + related rows (`e64-works.png`; 16:9 stills, 15px/600 title + 12px meta "Ads / 2025" below, no radius, 20px gutters at x72).
- **Ours** (home §4 `case-wall`, Films page): container 1296 (x72 at 1440), **3 columns**, gap 20px, column offsets **0 / +120px / +48px** (masonry). Tiles: col1 F01 (4:5) then F04 (16:9); col2 F02 (16:9) then F05 (4:5); col3 F03 (3:4) then F06 (16:9). Under each, an index-row caption: line 1 Inter Tight 500 .8125rem caps "01  THE ROPE KEEPERS" (number `#A29F98`), line 2 .75rem caps `#A29F98` "Northsea Documentary Days · Feature, 72 min · 2025". Whole tile is a link to `/films/#film-0n`. Hover/focus: image opacity .85→1, caption to `#FFFFFF`, .45s cubic-bezier(.25,.1,.25,1).
- **Must not soften**: three columns with **visible vertical offsets**; mixed ratios; captions in index voice (number · title · outlet · form · year), not card titles; no cards, no radius, no shadow.

### T3 — Single white "▸ Propose a film" box + page-turn line heads
- **Source**: fixed white "▸ CONTACT" box bottom-right (13px, padding 4px 8px, radius 0, `#FFFFFF`/`#151515`; T(a)(f)); About hero 1px horizontal line with "▸ TOP … ABOUT" end labels across a full-bleed low-key photo (`e64-about.png`).
- **Ours**: (a) fixed box `uf-propose` right 20 / bottom 22, Inter Tight 600 .8125rem caps, padding 4px 8px, `#FFFFFF`/`#151515`, label "▸ Propose a film" (in markup), every page, ≥782px; <782 the same box appears **in flow** at the end of the hero / page head (never fixed over text). (b) Inner page head `uf-head`: full-bleed low-key photo 1440×**640** (mobile 300), a 1px `rgba(236,233,226,.35)` line at 50% height from x 85 to x 1360 with "▸ HOME" left (x20) and the page name right (x1420 right-aligned), Inter Tight .8125rem caps; centred title Space Grotesk 500 3.5rem below the line at ≈70% height + caps meta line 1.25rem. <782: line and labels removed, title in flow under the photo.

### Continuation on inner pages (T1 mini index on 5, T2 on 2, T3 on all)
| Page | T3 head photo | T1 mini index (rows crossing a smaller 560×315 window) | T2 wall |
|---|---|---|---|
| Films | H01 | — (full 6-row index as section menu) | full 6-tile wall + 4 case stories |
| Commissions | S04 | 5 process steps as rows crossing an **S03** window | — |
| Screenings | H03 | 12 screening/broadcast rows crossing **F05** window | — |
| About | S01 | 7 crew rows crossing **S02** window | — |
| Rates | H02 | 7 fee rows (price nowrap right) — rows **below** a 16:9 S04 window, not crossing (prices must stay legible) | — |
| Propose / Field letters / Journal / Privacy | H03 / H02 / H01 / H02 | — | Journal: posts as 2-col wall |

---

## Key visual concept

**(1) Reference first screen, story, motion.** East 64 Films opens on a near-black charcoal screen. In the middle sits **a small 16:9 window playing a film**, and a ten-row **index of works** runs across the whole width, passing over the window; the active row is bright with ▸, the rest are ghosts. Under the window the active title is set big. **Story:** *"the work speaks first — pick a film from the list."* **Signature motion:** wheel/touch steps through the rows; the row colour fades in 0.45s cubic-bezier(.25,.1,.25,1), the window media crossfades and pans inside its frame, the caption characters rise; a fixed white "Contact" box waits bottom-right.

**(2) Our translation — a documentary director's reel as a quiet index.** Same dark ground, same centred window, same index crossing it, same big caption. The window holds the frame that sums up the practice: **the director holding a camera in the open door of a fishing-boat wheelhouse at dawn while a deckhand coils rope on deck** — one work lamp the only light (low-key real photograph, same image type as the reference's film stills). The six rows are her finished films (invented titles, fictional festivals and broadcasters); row 01 *The Rope Keepers* is the film the frame comes from, and the caption names it. Story: *"months beside the people — here are the films that came out of it."* Motion: the photo pans slowly inside the window on scroll (sp-parallax, the ref's inner pan), the caption rises once on load, rows brighten on hover/focus in 0.45s and swap the caption.

**(3) KV checklist** (all built in the home first screen at 1440×900, visible without scrolling):
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Centred 16:9 film window on charcoal | Framed still: director with camera at boat door, deckhand coiling rope | x356–1084, y241–659 (728×418), centred | `sp-parallax` on the window, `--sp-par: 8%` (mobile 5%) — inner pan | **P01** |
| 2 | Ten-row works index crossing the window | Six film rows `01–06 · title · outlet · form · year` (§9 films) | full width, rows y≈381–519 across the window | row opacity .3→1, .45s cubic-bezier(.25,.1,.25,1) on hover/focus (CSS) | — |
| 3 | Big caption under the window | "The Rope Keepers" Space Grotesk 500 4.25rem + meta "NORTHSEA DOCUMENTARY DAYS / FEATURE" 1.25rem caps | centred, top y706 | load rise: translateY 24px→0 + opacity, .8s ease-out, .3s delay (theme CSS, motion-only; not sp-reveal) | — |
| 4 | Header: tagline left, logo centre, nav right | tagline "DOCUMENTARY DIRECTOR / @PORT ALDER" left, wordmark "UTSUSHI FILMS" centre, one nav right (Films · Commissions · Screenings · About) | y18, 33px tall | none | — |
| 5 | Fixed white "▸ CONTACT" box | "▸ Propose a film" box `#FFFFFF`/`#151515` | fixed right 20 / bottom 22 | none | — |
| 6 | Dim ground with per-film hue shift | `#222222` ground + indigo glow `radial-gradient(ellipse 60% 50% at 50% 45%, rgba(58,58,94,.32), transparent 70%)`; hovering a row changes the glow position/strength (6% per row) | whole first screen | glow transition .45s | — |

---

## 3. Home page block order

Grids: 1296 container (x72) for walls/lists; centred narrow column **680px** (ref About measure) for text; section spacing **160px** (T(c) 160–300). Mobile 88px. Home copy ≈ 600 English words; narrative ¶ ≥3 of ≥20 words in §3 (2), §5 (2), §6 (3 × 30 words).

| # | Block | Purpose | Layout | Photo | Copy | Motion |
|---|---|---|---|---|---|---|
| 1 | Header (part) | brand + the one menu | fixed-feel absolute over hero, transparent; tagline left x20 (2 lines, .75rem caps), wordmark centre (Space Grotesk 600 1.125rem ls .12em), one `core/navigation` right x1082–1275 (.75rem caps, gap 16) | — | 4 links | none |
| 2 | `kv` | **KV** T1 | §Key visual; height `max(760px, 100svh)` | P01 | 6 rows + caption | parallax + load rise |
| 3 | `intro` | narrative | centred 680 column, .9375rem/1.6: h2 "Months beside the people" Space Grotesk 400 2.5rem centred; 2 ¶ (≈60 + 50 words) | — | ≈115 words | `sp-reveal sp-reveal--up` |
| 4 | `case-wall` | **results first** T2 | label "FILMS 2021–2025" + 6-tile masonry + "▸ All films" link | F01–F06 | 6 captions | parent `sp-stagger`, tiles `sp-reveal sp-reveal--up` |
| 5 | `beside` | the method, ref About text panel over photo | full-bleed S01 1440×720, then a `#222222` text panel 680 wide centred that **overlaps the photo bottom by 160px** (2 ¶ ≈ 45 + 40 words) | S01 | ≈85 words | panel `sp-reveal sp-reveal--wipe` |
| 6 | `shaped` | how a commission is shaped (ref Our Strengths) | h2 centred "How a commission is shaped"; 3 centred columns 370px apart: numeral 11px caps, title Space Grotesk 2.5rem 2 lines, ¶ ≈30 words: **01 Listen** (steps 1–2), **02 Stay** (step 3), **03 Shape** (steps 4–5); "▸ The five steps" → `/commissions/` | — | ≈110 words | `sp-stagger` + `sp-reveal--up` |
| 7 | `band` | **parallax** pause | Cover full-bleed 1440×600 (mobile 420), R01, overlay `rgba(34,34,34,.35)`; line "We stay until the camera is forgotten." Space Grotesk 500 3rem centred | R01 | 8 words | `sp-parallax` 10% / 6% |
| 8 | `rates` | prices (§9 items 1–5) | label "COMMISSION RATES", rows in index voice: no. · item + note · price; full width 1296, 1px `#4A4946` rules, price nowrap right; note "Excl. VAT. Full rates ▸" | — | ≈60 words | **none** |
| 9 | `crew` | people (T1 mini on home) | 7 crew rows (name · role · since) crossing a 560×315 window with S02, centred | S02 | 7 rows + 1 ¶ 25 words | window `sp-parallax` 6% |
| 10 | `letters` | Field letters + the one way to propose | two columns in 1296: left (5/12) "Propose a film" text ≈40 words + white box button "▸ Propose a film"; right (7/12) **indigo panel** `#3A3A5E` with newsletter `shippress_form_slot` | — | ≈60 words | **none** (form) |
| 11 | Footer | address, hours, links | `#222222`, 1px top rule; 3 columns: address/email, hours, paragraph links; © | — | | none |

**Home photo positions: 10 unique** (P01, F01–F06, S01, R01, S02). ≥8 ✔.

### First-screen composition
- **1440×900**: ground `#222222` + indigo glow; header y18–51; window y241–659 (P01, object-position 45% 50%, director on the left third, deckhand right); rows across; caption block y706–800; bottom-left fixed "PORT ALDER — SINCE 2013" .75rem caps (≥1024 only); progress pill right edge (4px × 100px, track rgba(255,255,255,.18), thumb 20px; ≥1024; decorative `aria-hidden`); "▸ Propose a film" bottom-right. Nothing else (no form, table, card).
- **1024–1439**: window 50vw (16:9-ish 728:418 ratio), rows keep % columns; outlet column hidden <1180.
- **782–1023**: window 80vw centred; rows below the window **in flow** (no crossing), columns no./title/year only.
- **390×844**: header 56px: wordmark left, nav toggle right (tagline hidden). Window full width 390×224 (`--sp-par: 5%`); then in flow: rows (no. · title · year), 23px pitch; then caption 2.5rem centred, meta .875rem; then in-flow "▸ Propose a film" box. **No vertical writing, no absolute labels over text, no fixed box, nothing overlaps.**

### Comparison with recent home orders
| Theme | Home order | Utsushi difference |
|---|---|---|
| Yoake Patisserie | split hero + vertical H1 → wash story → hour ledger → film-still pause → mirrored wash → price squares → people → visit | no split hero / vertical type; dark index crossing a window; masonry wall; no wash blocks |
| Shiosai Resort | full-bleed hero + flag bar → centred welcome → sticky rooms → parallax packages → prices | hero is a small framed window, not full bleed; no sticky media |
| Koori Cold Stores | crossfade hero + ring pager → giant word → fused cards → dock parallax → steps → rate table → case cards | no pager, giant word or cards; cases are a masonry wall in index voice placed **second** (results first) |
| Katachi Ergonomics | full-bleed KV + docked card → intro → abutting columns → offset rows → band → fee table → notes | dark ground, centred window, no docked card or offset rows |
| **Utsushi** | header → index×window KV → intro → masonry wall → photo+wipe panel → 3 phases → parallax band → rate rows → crew index×window → propose + letters → footer | |

---

## 4. Inner pages (9 + 1 post)
| Page (slug) | Key content |
|---|---|
| Films (`films`) | head H01; the 6-row index as in-page menu (`#film-01…06`); T2 wall; **4 case stories** (films 01–04, ≈180 words each: who commissioned, months beside, what the film became, where it screened) as 16:9 still + centred 680 text |
| Commissions (`commissions`) | head S04; the **5 steps** (§9) as rows crossing an S03 window, then each step expanded (≈60 words); what a commission includes; what we won't do (advertising with scripted "real people", stories without consent) |
| Screenings (`screenings`) | head H03; 12 screenings/broadcasts as index rows crossing F05 window (year · film · outlet · city · form); stacked on mobile |
| Rates (`rates`) | head H02; full **7-item** table (§9), terms: deposit 30%, cancellation, rights, travel |
| About (`about`) | head S01; Ines Calder story (founded 2013), "**A day in the field**" (daily routine: 05:30 on the quay, film until the work stops, logs at night), 7 crew rows crossing S02 window; strengths 01/02/03 columns |
| Propose a film (`propose`, contact) | head H03; what to send (subject, people, timeframe, budget band); form slot on `paper` panel; reply time; address |
| Field letters (`letters`, newsletter) | head H02; what arrives (one letter a month: a still, a field note, open dates); form slot on indigo panel |
| Journal (`journal`) | posts page (role posts, empty); 2-col wall in index voice |
| Privacy (`privacy`) | legal, 680 column, no effects |
| Post 1 | "Fourteen months on the Marit: notes from The Rope Keepers" (featured F01; category Field notes `field-notes`; tags `fishing`, `access`) |
theme-meta screens: home `/`, about `/about/`, news `/journal/`, article post 1, category `/category/field-notes/`, tag `/tag/access/`, newsletter `/letters/`, contact `/propose/`. Menu: Films · Commissions · Screenings · About (exactly one). Footer: paragraph links to all pages.

---

## 5. Colour (T(a))
| Token | Hex | Share | Source |
|---|---|---|---|
| `ground` | **#222222** | ~70% | T(a) exact |
| `text` | **#ECE9E2** | ~8% | T(a) exact |
| `mute` | **#A29F98** | meta, captions | `text` at ≈.62 on ground; 6.0:1 |
| `dim` | **#5A5751** | inactive numerals, decorative only | T(a) exact |
| `line` | **#4A4946** | 1px rules | T(f) rgba(255,255,255,.18) on #222 |
| `indigo` | **#3A3A5E** | ~8% (letters panel, hero glow, footer hover) | design-plan hex; replaces ref per-film hue tint (data-hue 210 sat 24) |
| `box` / `box-text` | **#FFFFFF / #151515** | <1% | T(a) exact |
| `paper` | **#ECE9E2** | contact form panel only | = text inverted (the white box grown into a panel) |
| `amber` | **#C9A24B** | focus ring only, <1% | stage-a accent |
| `error` | #E59A8A dark / #A3402F paper | forms | |
| `success` | #9CCFB4 dark / #2F6B55 paper | forms | |
Ground kept at the reference value (documentary/film fits); indigo enters only as panel and glow. **First-screen saturated share: target ≤10%, hard cap 15%** (ref ≈23% from a colourful ad still; ours is a desaturated low-key P01). If over, regrade P01 darker/cooler.

## 6. Typography (sans)
Fonts via **theme.json `fontFamilies` + `fontFace`** only (woff2, OFL, listed in theme-meta `fonts[].files` with licence, named in readme.txt); editor = front end; copy `shared/inc/editor-lang.php` → `inc/editor-lang.php` and require it; `check-editor-fonts.mjs` en + zh-TW.
- `space-grotesk` 400–700 variable (display). `inter-tight` 400–600 variable (body/UI). `noto-sans-tc` 500/700 and `noto-sans-jp` 500/700 headings only, zh-TW / ja subsets (Hokuto/Hada method).
- Latin display: `"Space Grotesk", "Helvetica Neue", Arial, sans-serif`; body: `"Inter Tight", "Helvetica Neue", Arial, sans-serif`.
- zh-TW display: `"Space Grotesk", "Noto Sans TC", "PingFang TC", "Microsoft JhengHei", sans-serif`; body: `"Inter Tight", "PingFang TC", "Microsoft JhengHei", "Heiti TC", sans-serif`.
- ja display: `"Space Grotesk", "Noto Sans JP", "Hiragino Sans", "Yu Gothic", sans-serif`; body: `"Inter Tight", "Hiragino Sans", "Hiragino Kaku Gothic ProN", "Yu Gothic", Meiryo, sans-serif`.
- CJK sizes ×0.75, body lh **1.85**; fr/de `hyphens:auto` on body/h2/h3, caps labels `hyphens:none`.
| Role | Font | Size desktop → mobile | lh | ls | Source |
|---|---|---|---|---|---|
| KV caption | Space Grotesk 500 | **4.25rem** (`xx-large` clamp(2.5rem, 1rem + 3.6vw, 4.25rem)) → 2.5rem | 1.05 | -.01em | T(b) 44px caption, enlarged to the 4.25 gate |
| KV meta | Space Grotesk 400 caps | 1.25rem → .875rem | 1.3 | .02em | T(b) 20px caps |
| page title | Space Grotesk 500 | 3.5rem → 2.25rem | 1.1 | -.01em | |
| h2 / strengths title | Space Grotesk 400 | **2.5rem** → 1.75rem | 1.1 | 0 | T(b) ~40px |
| index row / UI | Inter Tight 500 caps | **.8125rem** | 23px | .02em | T(b) 13/500/23.97 |
| nav, tagline | Inter Tight 500 caps | .75rem | 1.4 | .02em | T(b) 12px caps |
| body | Inter Tight 400 | **.9375rem** | 1.6 | 0 | T(b) 15px (lh 1.3 → 1.6 for five locales) |
| numerals | Inter Tight 500 | .6875rem | 1 | .04em | T(b) 11px |
| price | Inter Tight 600 tabular-nums | .9375rem | 23px | 0 | |
theme.json sizes: x-small .6875, small .8125, medium .9375, large 1.25, x-large 2.5, xx-large clamp(…4.25rem).

## 7. Motion (sp-scroll)
Copy `pipeline/assets/sp-scroll/` unchanged; JS in head, not deferred; CSS as editor style. Effects (3): **parallax**, **reveal--up + stagger**, **reveal--wipe**. No scroll listeners, GSAP, Lenis, Swup.
| Effect | sp-* | Where | Ref trigger / time / easing (east64films.com) | Ours |
|---|---|---|---|---|
| Fade-up | `sp-reveal sp-reveal--up` + parent `sp-stagger` | home §3, §4 tiles, §6 columns; inner case stories, step rows, strengths | Strengths columns fade up on enter, ~0.8s ease-out (estimate) | `--sp-dist: 24px; --sp-dur: .8s` |
| Wipe | `sp-reveal sp-reveal--wipe` (clip on child) | home §5 text panel; About story panel | About: text panel slides over the full-bleed photo (clip-path inset, ScrollTrigger scrub) | built-in 1.1s cubic-bezier(.77,0,.175,1) |
| Parallax | `sp-parallax` | §7.2 | window media inner pan ("preview-para") | |
Hero: no reveal. Load-only caption rise and row hover (.45s cubic-bezier(.25,.1,.25,1), T(g)) are theme CSS under `html.sp-js:not(.sp-no-motion)` + `prefers-reduced-motion: no-preference`. Not on forms, rate rows, hours, footer, legal.

### 7.2 Parallax (required)
| Where | Structure | Moving layer | Foreground | `--sp-par` desk / mobile | Ref motion |
|---|---|---|---|---|---|
| **Hero window** | Group `uf-window sp-parallax` (728×418, overflow clip) | `figure > img` **P01** | rows + caption are siblings outside the window | **8% / 5%** | window media pans inside its clip |
| Band §7 | Cover `uf-band sp-parallax` | Cover background **R01** | line (Cover inner, static) | **10% / 6%** | |
| Crew window §9, page heads | Group `sp-parallax` | img S02 / head photo | rows, labels outside | 6% / 4% | |
Reduced motion, `?sp-static`, no-JS, editor: static. `check-parallax.mjs` desktop + mobile must pass.

## 8. Responsive (hard)
- 390 first screen: see §3; `scrollWidth == innerWidth`; fixed box hidden <782 (in-flow copy instead).
- Index rows crossing windows: only ≥1024; below, rows in flow under the window.
- **Rate table ≥782**: full width of 1296 container, `table-layout:auto`, price column `white-space:nowrap; text-align:right; width:1%`, never clipped at 800 / 1280; no overflow hidden.
- **Any table <782** (rates, screenings, hours): stacked rows, item line + note, price right on the first line (flex, nowrap).
- Masonry: 3 col ≥1024 (offsets), 2 col 600–1023 (offset 0/+80), 1 col <600 (no offsets).
- §5 panel: overlap only ≥1024; below, in flow under the photo.

## 9. Fixed facts (all pages, five locales; brand.md source)
- **Utsushi Films**, founded **2013** by **Ines Calder** (director; former local-radio producer). Studio 3, Ropewalk Yard, 12 Netmakers' Lane, Port Alder (fictional). Phone 010 482 7716. Email **propose@utsushi-films.example** (every mailto).
- **Hours**: studio Mon–Thu 10:00–18:00; Fri by appointment; proposals read every Monday; reply within **5 working days**. Field days: whenever the people in the film work.
- **Audience**: commissioning editors at broadcasters, NGO communications leads, foundations and institutions, festival programmers.
- **Films (6)**: 01 *The Rope Keepers* — Northsea Documentary Days — Feature, 72 min — 2025 · 02 *Salt Hours* — Halden Public Television — Broadcast hour, 52 min — 2024 · 03 *What the River Carries* — Riverwatch Alliance — Short, 18 min — 2024 · 04 *Night Shift at Ward Nine* — Larchmont Health Trust — Institutional, 24 min — 2023 · 05 *The Last Kiln* — Ostmere Short Film Forum — Short, 28 min — 2022 · 06 *Keepers of the Archive* — Meridian Arts Channel — Series, 3 × 26 min — 2021. All fictional; "screened at / broadcast by", never awards.
- **Case stories (4)**: films 01–04 (14 months with a trawler crew; a salt-pan family's season; a river NGO's volunteers sampling water; nurses on night shifts, consent-led).
- **Rates (7, excl. VAT)**: 1 First conversation (45 min, video or studio) **Free** · 2 Research & access (up to 6 weeks; treatment + access agreements) **€6,800** · 3 Short commission (up to 20 min; up to 12 shoot days) **from €38,000** · 4 NGO / institutional film (8–15 min) **from €24,000** · 5 Broadcast hour (52 min; shoot blocks over up to 6 months) **from €140,000** · 6 Director's day (prep or shoot) **€1,200** · 7 Festival deliverables (DCP, subtitles in 2 languages) **€4,500**. Deposit 30% on signing. Home shows 1–5.
- **Process (5 steps)**: 01 First conversation (free, 45 min) · 02 Research & access (up to 6 weeks) · 03 Living alongside (shoot blocks over 3–9 months) · 04 Edit (10–16 weeks, two viewing rounds) · 05 Delivery & screenings. Home groups: Listen (01–02), Stay (03), Shape (04–05).
- **Crew (7)**: Ines Calder — director · Tomasz Wren — producer · Adaeze Morrow — cinematographer · Luca Ferreira — sound recordist · Hana Sørlie — editor · Priya Natarajan — research & access · Owen Achterberg — colourist & post.
- **Field letters**: one letter on the first Monday of each month (a still, a field note, open months).

## 10. Images (16, one STYLE; home marked ✔)
**STYLE**: `IMAGE_STYLE="real low-key documentary photograph, available light only, deep shadows, muted desaturated colour, one practical light source per frame (work lamp, doorway, window, monitor glow), cinematic still, 35mm lens, fine natural grain, unposed moment, diverse adults in muted work clothes (navy, charcoal, olive, faded denim), natural skin tones, real hands, international neutral modern setting, no Japanese elements, no text, no letters, no numbers, no logos, no brand names, no signage, screens dark or abstract light"`
One at a time via `scripts/grok-image.sh`; Read-check each; ≤300 KB, ≤2000px webp.
| # | File | Subject | Ratio | Used on | Home |
|---|---|---|---|---|---|
| P01 | `kv-boat-door.webp` | director (woman, 40s, dark wool coat, knit cap) holding a small cinema camera at chest height in the open steel door of a fishing-boat wheelhouse at dawn, half in shadow, on the left third; on deck right a deckhand (man, 50s, oilskins) coils a thick rope; one work lamp above the door; dark blue-grey harbour | 16:9 2000×1148 | Home KV window | ✔ |
| F01 | `film-rope.webp` | deckhands hauling a net on a wet deck at first light, lamp glare | 4:5 | Home wall · Films wall · post 1 | ✔ |
| F02 | `film-salt.webp` | a woman raking salt in a pan at dusk, last light low | 16:9 | Home wall · Films wall | ✔ |
| F03 | `film-river.webp` | volunteer in a small boat lifting a water-sample bottle, grey morning river | 3:4 | Home wall · Films wall | ✔ |
| F04 | `film-ward.webp` | a nurse at a dim corridor desk at night, desk lamp | 16:9 | Home wall · Films wall | ✔ |
| F05 | `film-kiln.webp` | potter's hands at a glowing brick kiln mouth | 4:5 | Home wall · Films wall · Screenings window | ✔ |
| F06 | `film-archive.webp` | archivist lifting a film can under a single lamp between shelves | 16:9 | Home wall · Films wall | ✔ |
| S01 | `beside-kitchen.webp` | director listening to an elderly fisherman at a kitchen table, camera lowered on her lap, window light | 2:1 | Home §5 · About head | ✔ |
| R01 | `harbour-band.webp` | long view of a harbour at blue hour, a small crew with a tripod on the quay, boats' lights | 2.4:1 | Home §7 band | ✔ |
| S02 | `sound-rain.webp` | sound recordist with a boom under a hood in light rain on a pier | 16:9 | Home §9 crew window · About crew window | ✔ |
| S03 | `edit-night.webp` | editor and director at a dark edit desk, monitor glow (abstract) | 16:9 | Commissions step window | |
| S04 | `commission-table.webp` | director and a commissioner at a table with printed stills (no text), lamp | 16:9 | Commissions head · Rates window | |
| H01 | `crew-dark.webp` | crew silhouettes around a camera in a dark room, monitor glow | 2.25:1 | Films head · Journal head | |
| H02 | `notebooks.webp` | field notebooks, audio recorder and tapes on a desk under a lamp | 2.25:1 | Rates head · Letters head · Privacy head | |
| H03 | `quay-night.webp` | an empty open boat door and quay at night, one lamp | 2.25:1 | Propose head · Screenings head | |
Per-page uniqueness: no image appears twice on any page.

## 11. Forms (form contract v1)
Copy `pipeline/assets/forms/shippress-forms.php` → `inc/`, CSS/JS → `assets/`, require it. Literal block markup + small PHP island. **No form in the first screen; no sp-reveal on forms or their wrappers.**
- **Propose (`propose`, contact)**: on a `paper` panel (#ECE9E2, text #222222, padding 56px 64px; mobile 28px 20px, radius 0): `shippress_form_slot(kind: contact)`; fallback = buffered literal mailto button "Write to Utsushi Films" (`wp-element-button`, href `mailto:propose@utsushi-films.example?subject=<forms_contact_subject>`) + sentence "Opens your email app. Tell us who the film is about, when, and your budget band." Never links to `/propose/`. Suggested CF7 fields (readme): name*, email*, organisation, film subject (textarea*), timeframe (select: <3 months / 3–9 / 9+), budget band (select matching rates 3–5), consent*, submit "Send proposal".
- **Field letters (`letters`, newsletter)**: standalone page; slot on the **indigo** panel (#3A3A5E, text #ECE9E2, padding 56px 64px): `kind: newsletter, email: propose@utsushi-films.example, label: forms_email, submit: forms_subscribe, notice: forms_mail_notice, subject: forms_mail_subject`. Home §10 uses the same slot on indigo. Footer links to `/letters/` only.
- Plugins: newsletter MailPoet (explicit id) → MC4WP; CF7/WPForms only via explicit id. Contact CF7 → WPForms. Without plugins: required `type=email` + submit, native mailto POST + notice.
- **Tokens**: paper (light): `--sp-form-accent: #222222`, `--sp-form-on-accent: #ECE9E2`, `--sp-form-radius: 0`, `--sp-form-focus: #C9A24B` (2px outline, offset 2px), surface #FFFFFF, text #222222, border 1px #8E8B85, error #A3402F, success #2F6B55 on #E3EDE7. Dark (indigo/ground): accent `#FFFFFF`, on-accent `#151515` (the white box), surface #2E2E4C, text #ECE9E2, border rgba(236,233,226,.4), focus #C9A24B, error #E59A8A, success #9CCFB4. States: input, textarea, select, checkbox/radio (`accent-color`), label (Inter Tight 500 .8125rem caps), submit (hover #3A3A5E light / #ECE9E2 dark), focus-visible, disabled, error, success. Scoped classes only.
- **i18n keys** (inc/i18n/en.php, `L10N_SEMANTIC=1`, all 5 locales rewritten): `forms_email` "Email address", `forms_subscribe` "Send me the field letters", `forms_mail_notice` "This opens your email app. Send the message to join; you are not subscribed yet.", `forms_mail_subject` "Field letters — please add me", `forms_contact_subject` "Film proposal", `contact_email` "Write to Utsushi Films", `forms_contact_note` (fallback sentence). Verify in en, zh-TW, ja, fr, de.
- Validation: `form-check.py`, `form-runtime-check.php` ×5, `repo-gates.sh forms`; real CF7 on paper and indigo at 390 / desktop; never submit.

## 12. Similarity table (≈80%)
| Dimension | Reference (token) | Utsushi |
|---|---|---|
| Ground / text | #222222 / #ECE9E2 (T(a)) | exact |
| Dim | #5A5751, rows .2–.3 (T(a)) | #5A5751; rows .3 |
| Accent box | #FFFFFF/#151515, 13px, 4px 8px, radius 0 (T(a)(f)) | exact, "▸ Propose a film" |
| Hue tint | per-film hue 210 / sat 24 (T(a)) | indigo #3A3A5E glow .32 |
| Window | 728×418 centred x356–1084 y241 (T(c)) | same |
| Index | 10 rows, 23px pitch, 13/500 caps, cols x48/156/941/1205/1349 (T(b)(c)) | 6 rows, same pitch, type, columns |
| Caption | condensed serif 44/55 + 20px caps meta (T(b)) | Space Grotesk 4.25rem (gate) + 1.25rem caps |
| Header | 33px at y18, tagline/logo/nav split (T(c)) | same |
| Body | ~15px sans, measure 680, centred (T(b)) | .9375rem/1.6, 680 |
| Strengths | 3 cols 370 apart, 11px numerals, ~40px titles (T(b)(c)) | same values |
| Sections | 160–300px (T(c)) | 160px |
| Radius / shadow | 0 / none (T(d)) | same |
| Page-turn line | 1px line, "TOP … ABOUT" (T(d)) | 1px line "▸ HOME … page" |
| Progress pill | 4px, clamp(50,10vh,100), rgba(255,255,255,.18) (T(f)) | same (hero, ≥1024) |
| Imagery | low-key cinematic stills, 16:9, no radius (T(e)) | low-key documentary photos, 16:9 + mixed masonry |
| Row motion | .45s cubic-bezier(.25,.1,.25,1) (T(g)) | same (hover/focus) |
| Caption motion | chars rise (T(g)) | line rise .8s ease-out |
| Media motion | inner pan (T(e)) | sp-parallax 8% |

## 13. Home acceptance checklist
1. 1440×900: dark ground, centred 728×418 window with P01 (director at boat door, deckhand coiling rope), 6 rows crossing the window (01 bright with ▸, rest .3), caption "The Rope Keepers" 4.25rem + meta, split header, fixed white "▸ Propose a film". Nothing else.
2. 390×844: window, in-flow rows, caption, in-flow box; no vertical text, no absolute labels, no overlap, no horizontal scroll.
3. §4 masonry: 3 columns with visible offsets (0/120/48), 6 tiles mixed ratios, index-voice captions.
4. §5 wipe panel overlaps S01 by 160px (≥1024). §6 three centred columns. §7 R01 band parallax.
5. §8 rates: items 1–5 matching §9, full width, prices nowrap right, unclipped at 800/1280; stacked <782.
6. §9 crew rows cross the S02 window. §10 newsletter slot on indigo shows email + submit + notice without plugins.
7. 10 unique images; 0 cut-outs; ≥250 English words, ≥3 narrative ¶.
8. Effects only parallax, reveal--up(+stagger), reveal--wipe; no reveal in hero / forms / rates; `check-parallax.mjs` passes.
9. Saturated share ≤15% (target ≤10%); largest size 4.25rem; fonts via theme.json fontFace incl. zh-TW/ja subsets; editor matches.
10. Exactly one `core/navigation`; auto-gates `1 1` and `pattern_source.py` pass.
