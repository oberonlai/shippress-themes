# Kyugo Training: design spec (stage 1, binding for implementation)

Slug `kyugo-training`, workplace first-aid training centre, type **business** (WooCommerce-compatible, not required). Five languages: en, zh-TW, ja, fr, de.
Reference (only one): **Toyota Industries Technical Training School** https://gakuen.toyota-shokki.co.jp/ (S5-Style https://www.s5-style.com/11519/). Measurements: `reference-tokens.md` (cited below as (a)–(g)); screenshots `ref/ref-first.png`, `ref/ref-full.png`. We borrow structure, frame, technique, colour relationships, motion timings and the key-visual concept. We do **not** copy its photos, text, logo, vertical Japanese copy or page as a whole.

Design-plan row b15-2: `hero`, `first_screen`, `archetype`, `nav` are reference only; binding are the note (sans, quiet palette, first-screen saturated share ≤ 30%, photo imagery, KV translated) and `page_structure: process-timeline` (we tell "a training day" and "booking a group" as timed stages, which is why a timeline is allowed here).

---

## 0. Fixed brand facts (identical on every page and in all five languages)

- **Kyugo Training**, workplace first-aid training centre. Founded **2011** by Ines Varga after twelve years as an ambulance paramedic.
- Centre: **Werfstraat 41, 3021 Rotterdam, Netherlands** (fictional address). Training hall 220 m² on the ground floor of a former ship-chandler's warehouse, with a mock warehouse aisle, a mock kitchen and a mock office for scenarios.
- Phone **+31 10 555 0142** · email **hello@kyugotraining.example**.
- Office hours **Mon–Fri 08:00–17:30**. Training days **08:30–16:30** (lunch 12:30–13:15). Closed weekends and Dutch public holidays.
- Group size **max 12 trainees** per course; scenarios run at **6 trainees per instructor**; a one-day course is **7 hours, 5 of them hands-on**; certificates are **valid 3 years**; we send a reminder **90 days** before expiry.
- Currency **EUR** in every language, fees **per person, excl. 21% VAT** unless stated. No converted prices.
- No claims of accreditation by real bodies, no "saves lives" guarantees, no statistics about outcomes, no awards, no real media or brands. The syllabus "follows current published resuscitation guidelines and is reviewed every January" (policy wording, allowed).

### Courses and fees (7 items; identical on Home, /courses/, /book-a-group/, /certificate/, FAQ, all languages)
| # | Course | Length | Fee | Open dates at the centre |
|---|---|---|---|---|
| 1 | Emergency First Aid at Work | 1 day (7 h) | €145 | every Tuesday |
| 2 | First Aid at Work | 3 days (21 h) | €395 | Mon–Wed, 1st and 3rd week of the month |
| 3 | First Aid at Work Requalification | 2 days (14 h) | €285 | Thu–Fri, 2nd week |
| 4 | CPR & AED Operator | half day (3.5 h) | €85 | 2nd and 4th Thursday, 13:00–16:30 |
| 5 | Annual Refresher | half day (3 h) | €75 | 2nd and 4th Thursday, 08:30–11:30 |
| 6 | Burns & Chemical Splash module | half day (3.5 h) | €95 | last Friday, 08:30–12:00 |
| 7 | On-site group day (up to 12 trainees, at your premises, kit included) | 1 day | €1,480 per group | by arrangement, booked ≥ 3 weeks ahead |

### A training day (process-timeline, 4 stages; Home T3 stack, /training-day/, /courses/)
| # | Time | Stage | What happens |
|---|---|---|---|
| 01 | 08:30–10:30 | Drill | compressions, rescue breaths and AED pads on adult, child and infant mannequins; two-minute rounds until the rhythm is automatic |
| 02 | 10:45–12:30 | Skills stations | bleeding control, burns, recovery position, choking; stations of six with one instructor |
| 03 | 13:15–15:00 | Scenario | a staged incident in the mock aisle, kitchen or office: find, call, act, hand over to the ambulance crew |
| 04 | 15:15–16:30 | Assessment & certificate | observed practical check, ten short written questions, debrief; certificate issued the same day, valid three years |

### Booking a group (4 steps; Home block 9, /book-a-group/)
1. **Enquire** — form, phone or email; we reply within **2 working days**.
2. **Planning call** — 30 minutes: site, shift patterns, typical risks, which course.
3. **Training day(s)** — at the centre or on site, dates fixed **≥ 3 weeks** ahead.
4. **Certificates** — issued the same day; the firm receives a training register; reminder **90 days** before expiry.

### People (7, fictional; names identical in all languages)
| Name | Role | Line | Photo |
|---|---|---|---|
| Ines Varga | Founder & lead instructor | ambulance paramedic for 12 years before founding Kyugo in 2011 | 14 |
| Tomas Reyes | Senior instructor, industrial sites | runs the on-site group days | 16 |
| Mirela Haddad | Instructor, CPR & AED | teaches the half-day CPR & AED Operator course | — |
| Daniel Mensah | Instructor, burns & chemical splash | former process-plant safety officer | — |
| Pieter Aalders | Scenario coordinator | builds the mock incidents and plays the casualty | — |
| Lucía Ferrer | Assessment & certificates | marks the practical checks, issues certificates and reminders | — |
| Hana Kowalczyk | Group bookings | answers enquiries, plans on-site days | — |

### Stories (4, fictional firms; facts only, no outcome claims)
| # | Firm (fictional) | Who trained | Course | Photo |
|---|---|---|---|---|
| 1 | Halvorsen Logistics, Waalhaven warehouse | 18 night-shift pickers and team leads | Emergency First Aid at Work, two on-site group days of 9 | 02 |
| 2 | De Vries Print & Pack | 10 press operators | First Aid at Work + Burns & Chemical Splash | 10 |
| 3 | Marlow House offices | 24 front-desk and security staff | CPR & AED Operator, two half-days of 12 | 12 |
| 4 | Hotel Meridiaan kitchen | 12 cooks and porters | Burns & Chemical Splash + Annual Refresher | 06 |

---

## 1. Signature techniques (three, all from gakuen.toyota-shokki.co.jp; obvious at a glance, no dilution)

### T1. Side-rail frame (ref: fixed 120px white rails left and right of the photo stage)
- Reference: two **fixed** 120px white rails frame a 1200px stage at 1440 (c). Left rail: logo mark top, organisation name written vertically, vertical copyright at the bottom (f). Right rail: two-line hamburger (50×2px lines in main colour), a hairline, a vertical "access" label with a pin, a main-colour tile 120×170 "download materials", a darker logo tile at the bottom (f). Every section of the page sits inside the stage; the rails stay while scrolling.
- Kyugo, ≥ 1100px (all pages, in `parts/header.html`):
  - `body` gets `padding-inline: 120px`; all sections are confined to the stage (full-bleed = stage width, never under the rails).
  - **Left rail** (`.kt-rail--left`, `position:fixed; inset:0 auto 0 0; width:120px; background:#FFFFFF; z-index:50`): at top 32px a 40×40 mark (olive `#5A6148` square, white plus 18×18 with 4px strokes, square corners), 24px under it the wordmark **"Kyugo Training"** `writing-mode: vertical-rl`, Hanken Grotesk 700 16px, ls .08em, `#000`; at bottom 40px "© Kyugo Training" vertical, 11px 400 `#838383`.
  - **Right rail** (`.kt-rail--right`, same fixed geometry on the right): top 40px a **Menu** link (two 50×2px olive lines 8px apart, label "Menu" 11px under them, `href="#kt-nav"` — it jumps to the single top nav; this is not a second menu); at 52% height a 1px `#F0F0F0` hairline then a vertical "Find us" label 13px 700 with a 12px olive pin icon above it → `/contact/`; below it the **olive tile** 120×170 `#5A6148`: a 28px white line icon (calendar) + "Book a / group" 14px/1.4 700 white centred → `/book-a-group/`; at the very bottom a tile 120×80 `#474D38` with "Call us" 11px + "+31 10 555 0142" 11px 700 white (tel: link).
  - Tile hover: background `#474D38` (bottom tile `#3F4532`), 0.3s `cubic-bezier(.165,.84,.44,1)` (g).
- 782–1099px and < 782px: rails hidden; a white top bar replaces them (height 72px / 60px): mark + horizontal "Kyugo Training" 16px 700 at left, nav hamburger and a 72×72 (60×60) olive square "Book" tile at right. **No vertical text below 1100px.**
- It is a frame, not a sidebar: rails never hold content columns, lists or widgets.
- Must not be diluted: rails must be white and exactly 120px, fixed, visible on every page at ≥ 1100px; the olive tile must be a solid square block (not a pill, not an outline); the wordmark must be vertical.

### T2. Corner colour wash with a huge three-line white statement (ref first screen)
- Reference: a 4:3 documentary photo fills the stage (1200×900), graded cool; a linear wash runs from transparent at the upper left to strong main colour at the lower right, covering about 55% × 60% of the photo (e); inside it, lower right, a small 18px kicker and a three-line English statement in Inter ~80px / lh 1.0 / 700 white (b).
- Kyugo Home hero (block 1, see §2 and §5.2): same geometry, olive wash, statement **"Steady / hands, / first."** in Hanken Grotesk 700 5rem / lh 1.0 / ls −0.01em white; kicker **"Before the ambulance arrives"** 1.125rem 500 white above it (12px gap). The statement stays in English in all five languages (as the reference keeps its English line); the kicker is translated.
- Wash: a `::after` over the whole stage, `background: linear-gradient(150deg, rgba(90,97,72,0) 38%, rgba(90,97,72,.72) 66%, rgba(138,145,112,.92) 100%)`; the visibly coloured area is the lower-right ≈ 55% × 60% (e). Top fade for the nav: second layer `linear-gradient(180deg, rgba(0,0,0,.45) 0, rgba(0,0,0,0) 140px)`.
- Text block position (desktop): `position:absolute; right:80px; bottom:72px;` left edge ≈ 71% of the stage (ref tagline x=970 of 1440 → (970−120)/1200). Text-shadow `0 1px 16px rgba(0,0,0,.18)` allowed, nothing else.
- Inner pages: every inner page head (`.kt-pagehead`) is the same technique at stage width × 560px: page photo, top fade, same wash, page title Hanken 700 4.25rem / 1.05 white lower right (`right:80px; bottom:64px; max-width:560px`), kicker 1rem 500 white above.
- Must not be diluted: the wash must clearly read as colour (olive) in the lower right, not a grey shadow; statement ≥ 5rem on desktop at 1440 and three lines; photo corners square (radius 0) (d).

### T3. Stacked-paper card stack (ref About block, Swiper "cards")
- Reference: on the main-colour band, a counter "01 | 05" top right, then a card: portrait photo 416×515 (0.81:1) bleeding off the top-left of a white paper card, the white text panel overlapping the photo's right edge by ~120px, two blank white sheets peeking behind on the right, each slightly offset and rotated; thin side arrows; ghost numeral "01" white on the photo; cards flip in 300ms (e)(f)(g).
- Kyugo Home block 3 "A training day": 4 cards = the 4 stages of §0, photos 04–07.
  - Wrapper `.kt-stack` max-width 876px, centred in the band, height 600px. Photo: `left:0; top:0; 416×515; object-fit:cover; radius 0`. Panel: `left:296px; top:40px; width:500px; min-height:480px; padding:56px 48px 48px; background:#FFF`. Sheets (2 empty `div.kt-stack__sheet`, same size as the panel, behind it): sheet 1 `translate(22px,10px) rotate(1.5deg)`, sheet 2 `translate(44px,20px) rotate(3deg)`; both `#FFF` with `box-shadow: 0 1px 0 rgba(0,0,0,.06), 0 6px 18px rgba(0,0,0,.08)`.
  - Panel content: kicker "08:30–10:30 · Drill" 0.875rem 700 `#5A6148`; title 1.75rem/1.4/700 `#000` (e.g. "Hands first, until the rhythm is automatic"); 1px `#F0F0F0` rule 24px margin; paragraph 0.9375rem/1.8 ≈ 45 words.
  - Ghost numeral "01"–"04" on the photo, top-left 24px, Hanken 600 3.75rem white opacity .85.
  - Counter above the stack, right-aligned with the stack: current "01" Hanken 600 2.5rem white, 1px × 24px white-40% divider, total "04" 1rem white .6 (ref "01 | 05").
  - Arrows: 36px chevrons (1.5px white lines), outside the stack left and right, vertically centred (ref 36px side arrows).
  - Behaviour: tiny vanilla `assets/kt-stack.js` (click/keyboard only — **no scroll listener, no library**): cycles `.is-front` across the cards; outgoing card `opacity 0; translateX(-24px) rotate(-2deg)`, incoming from the sheet-1 position to 0; **300ms ease** (g). Counter updates (`aria-live="polite"`). Without JS and in the editor the four cards render as a vertical list, each with its own photo, panel and sheets (all content readable). With JS, only the front card is visible; others `visibility:hidden` + `aria-hidden`.
- Must not be diluted: the photo must bleed out top-left of the panel and the panel must overlap the photo by ≥ 100px; both sheets must visibly peek with rotation; counter in "01 | 04" form; square corners everywhere.

### Supporting (not counted): stat band (ref Data block)
Stage-width dark photo band with veil, short hairline dash above each stat, giant numeral + small unit, 11px caption. Used Home block 6, /courses/, /book-a-group/.

### Continuation to inner pages (all inner pages have T1 + T2; T3 on ≥ 4)
| Page | T1 rails | T2 wash page head (photo) | T3 card stack | Stat band |
|---|---|---|---|---|
| About | yes | 08 | founder card: 1 card + 2 sheets (photo 14, Ines Varga, 90 words) | — |
| Courses & fees | yes | 09 | — (course rows use the ref thumb row) | yes (13) |
| A training day | yes | 01 | **full 4-stage stack** (04–07) + timeline rows | — |
| The certificate | yes | 07 | 3 cards: "What it covers / How it's assessed / When it expires" (photos 05, 11, 18) | — |
| Book a group | yes | 03 | 4 cards = the 4 booking steps (photos 18, 12, 02, 17) | yes (13) |
| Instructors | yes | 15 | 2 cards: Ines Varga (14), Tomas Reyes (16); other five as hairline rows | — |
| Stories | yes | 17 | 4 cards = the 4 stories (02, 10, 12, 06) | — |
| FAQ | yes | 10 | — | — |
| Contact & access | yes | 18 | — | — |
| Notes (index, single) | yes | 13 (index); single = featured image | — | — |

---

## 2. Key visual concept

### (1) Reference first screen — concept, story, signature motion (gakuen.toyota-shokki.co.jp, `ref/ref-first.png`)
- **Draws:** a documentary, softly lit close photo of a young trainee in a work cap and light-blue work shirt, face in profile, lifting the cap's brim and looking up and ahead; the background is a blurred bright factory hall. The photo fills a 1200×900 stage between two white rails (vertical school name + mark on the left; menu lines, "access", blue "materials" tile on the right). A blue gradient floods the lower right; inside it a small Japanese kicker and a three-line white English statement. A bold white nav with hairline dividers runs across the top over a dark fade.
- **Story:** a young person at the start of a skilled working life, looking ahead to the future the school connects him to — "people on the shop floor are where the future starts".
- **Signature motion:** the hero crossfades through 5 documentary scenes of training (Swiper fade, **900ms**, autoplay **4000ms**); further down the stacked-paper cards flip (**300ms**); hover colour **0.3s easeOutQuart**.

### (2) Our translation — same composition, same motion idea, same image type (photo)
A documentary photograph in a bright training hall: **an instructor kneeling beside a resuscitation mannequin on a grey mat, hands guiding, while a trainee in an olive work jacket kneels opposite and leans in to watch the hands**. Soft window light, cool-neutral grade, shallow depth; the people sit in the left/upper part of the frame, the lower right is calm pale floor where the olive wash and statement sit. Story: **ordinary floor staff learning to be the steady pair of hands in the minutes before the ambulance arrives** — the same "people on the floor are where it starts" idea, moved from a skilled-trades school to first aid. Same frame (white rails with vertical name, olive tile), same lower-right wash with a three-line English statement and a small kicker, same nav over a dark top fade. Motion: the hero crossfades through **3** documentary training scenes (01 → 02 → 03) at the reference's **900ms fade / 4000ms hold**, CSS only; the card stack below flips in 300ms.

Crossfade (CSS only, `@keyframes`, no scroll listener; cycle 12s): slide 01 is the static base (always opacity 1); slide 02 `0%,33.33%{opacity:0} 40.83%{opacity:1} 74.17%{opacity:1} 74.18%,100%{opacity:0}`; slide 03 `0%,66.67%{opacity:0} 74.17%{opacity:1} 92.5%{opacity:1} 100%{opacity:0}`; `animation: kt-fade 12s linear infinite`. Under `prefers-reduced-motion: reduce`, `html.sp-no-motion` (`?sp-static`) and in the editor: slides 02–03 `animation:none; opacity:0` (so every screenshot shows 01). Slide 01 `fetchpriority="high"`, no lazy.

### (3) KV checklist (all six implemented and visible in the 1440×900 first screen; 390px notes in §8)
| # | 參考站元素 | 我們的對應 | 位置 | 動態 | 用哪張圖 |
|---|---|---|---|---|---|
| 1 | Two white 120px side rails: vertical school name + mark (left), menu lines + vertical "access" (right) | Same rails: olive plus mark + vertical "Kyugo Training" + vertical © (left); "Menu" lines, vertical "Find us" with pin (right) | full height x 0–120 and 1320–1440, fixed | none (fixed while scrolling) | — |
| 2 | 4:3 documentary photo of a trainee in a cap, profile, soft cool light, filling the stage | Instructor kneeling by a resuscitation mannequin, trainee in olive work jacket leaning in, bright training hall, soft window light | stage 1200×900 (x 120–1320), object-position 35% 40% | CSS crossfade 01→02→03, 900ms fade / 4000ms hold | **01** (base), **02**, **03** |
| 3 | Blue gradient wash lower right (transparent → main → light partner) | Olive wash `rgba(90,97,72,0)` 38% → `.72` 66% → `rgba(138,145,112,.92)` 100%, 150deg | lower-right ≈ 55% × 60% of the stage | none | over 01–03 |
| 4 | Small JP kicker + three-line white English statement ~80px | Kicker "Before the ambulance arrives" 1.125rem 500 + "Steady / hands, / first." Hanken 700 5rem/1.0 white | inside the wash, right 80px, bottom 72px | none (hero: no reveal) | on 01 |
| 5 | Bold white nav with 1px hairline dividers across the top over a dark top fade | Centred nav (single core/navigation, `id="kt-nav"`), Schibsted Grotesk 700 1rem white, 1px × 12px white-40% dividers, over `rgba(0,0,0,.45)→0` 140px fade | stage top, y 36px, centred | none | over 01 |
| 6 | Right-rail main-colour "materials" tile + darker logo tile | Olive tile 120×170 "Book a group" with calendar icon + `#474D38` tile "Call us" | right rail, y ≈ 650–820 and bottom 80px | hover bg 0.3s `cubic-bezier(.165,.84,.44,1)` | — |

Photo **01** must show all of: kneeling instructor, full-size resuscitation mannequin on a mat, trainee in olive work jacket leaning in, bright hall with windows, empty pale floor in the lower-right third. Regenerate until it does. Photos 02 and 03 must also keep the lower-right third calm (floor or wall) so the statement stays legible on every slide.

---

## 3. Colour (reference relationships and neutrals exact; main swapped to the row palette)

| Role | Hex | Share (page / first screen) | Source token |
|---|---|---|---|
| Base | `#FFFFFF` | ~45% / ~16% (rails) | (a) `--bg-clr-body` exact |
| Ground alt (notes rows hover, FAQ, table header) | `#F7F8F8` | ~5% | (a) `--bg-clr` exact |
| Text | `#000000` | text | (a) `--fc-base` exact |
| Text secondary (dates, captions, ©) | `#838383` | text | (a) exact |
| Hairline | `#F0F0F0` | — | (d) `--border-clr` exact |
| **Main** (tiles, circles, labels, bands) | `#5A6148` 柳煤竹 | ~15% / ~1% solid + wash | (a) main `#005EB8` → **swapped** |
| Main light (gradient partner) | `#8A9170` | in gradients only | (a) `#4299F0` → swapped, same "lighter same hue" relation |
| Main mid (gradient stop) | `#6C7357` | in gradients only | derived between main and partner |
| Main deep (hover, bottom tile, data veil) | `#474D38` / `#3F4532` | ~2% | derived (−20% / −28% lightness) |
| Footer | `#3E3E3E` | ~5% | (a) footer exact |
| Accent | none | 0 | (a) none on home |

- **Swap reason:** the design-plan row fixes palette 柳煤竹 (olive `#5A6148`) and the note asks for a quiet palette; the reference's saturated blue would also repeat the most recent blue main (Niuke Scan's spec band) and read as hospital/ambulance livery. Every relationship is kept: one main hue + a lighter partner in diagonal gradients, white rails and ground, black text, `#3E3E3E` footer, no accent.
- Band gradients: About band `linear-gradient(160deg, #5A6148 0%, #6C7357 55%, #8A9170 100%)` (ref About: deep → light lower right); Instructors band `linear-gradient(180deg, #8A9170 0, #6C7357 240px, #5A6148 640px, #5A6148 100%)` flowing into the Stories band `linear-gradient(180deg, #5A6148 0%, #555B43 100%)` (ref Interview → Talk). Body text (≤ 1rem) only where the ground is `#6C7357` or darker (white on `#6C7357` ≈ 4.9:1, on `#5A6148` ≈ 6.4:1); white on `#8A9170` (3.3:1) only for text ≥ 1.5rem bold.
- **First-screen saturated share ≤ 15%** (`scripts/check-first-screen.py`, HSV s > 0.5); the row cap is 30%, reference 19.6%. Olive has s ≈ 0.26, so the expected value is ≈ 1–3%. Photos keep wardrobe in olive/grey/navy; no red, orange or high-vis yellow larger than a vest stripe (02 may show a muted high-vis vest; keep it desaturated in the grade).
- No beige/cream grounds anywhere.

---

## 4. Type (font_direction **sans**)

- Latin headings / display / statement / numerals: **Hanken Grotesk** (OFL) 500, 600, 700. Latin body and UI (nav, buttons, tables): **Schibsted Grotesk** (OFL) 400, 500, 700. CJK: **Noto Sans TC** (zh-TW) and **Noto Sans JP** (ja) 400 / 700 — 黑體 only, no Noto Serif anywhere.
- Stacks (theme.json `settings.typography.fontFamilies` with `fontFace` woff2 in `assets/fonts/`, so the editor iframe and the front end load the same files; zh-TW / ja subset files made the Hokuto / Hada way, since the subset script is broken):
  - `heading`: `"Hanken Grotesk", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`
  - `body`: `"Schibsted Grotesk", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`
  - `:lang(zh-TW)` → `"Hanken Grotesk"/"Schibsted Grotesk", "Noto Sans TC", sans-serif`; `:lang(ja)` → `…, "Noto Sans JP", sans-serif`. Because style.css uses `:lang(`, copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` unchanged and `require_once` it in functions.php. `check-editor-fonts.mjs` must pass in en and zh-TW.
- Scale (theme.json presets; **max 6.25rem** stat numeral, hero statement **5rem**, inner page title **4.25rem** ≥ 4.25rem rule):

| Preset | Size | Use | Weight / lh / tracking | Token source |
|---|---|---|---|---|
| `caption` | 0.6875rem (11px) | "More detail :", stat captions, © | 500 / 1.4 | (f) 11px label, 12px caption |
| `small` | 0.8125rem (13px) | section English label, dates, categories | 600 / 1.4 | (b) small labels |
| `base` | 1rem (16px) | body, nav | body 400 / 1.8; nav 700 / 1.4 | (b) body 16/28.8/400, nav 16/700 |
| `medium` | 1.25rem | stat titles, thumb titles, FAQ questions | 700 / 1.5 | (b) |
| `large` | 1.75rem | lead statement on white (Centre), card title | 700 / 1.4 | (b) lead 28/39.2/700 |
| `x-large` | 2.125rem | statement on bands | 700 / 1.4 / 0.02em | (b) 34/47.6/700/ls .68px |
| `section` | 3rem | H2 on white sections (Notes, Centre, Courses, Book) | 700 / 1.25 | ref-full.png visible heading ≈ 48px (the (b) value 24px is the measured inner `h2`; we follow the rendered size) |
| `display` | 4rem | English display titles on bands ("About us", "Instructors", "Stories") | 700 / 1.05 / −0.01em | ref "About Us"/"Interview" Inter ≈ 64px |
| `page` | 4.25rem | inner page title in T2 head | 700 / 1.05 / −0.01em | theme max rule |
| `hero` | 5rem | hero statement | 700 / 1.0 / −0.01em | (b) Inter ~80px/80px/700 |
| `stat` | 6.25rem | stat numerals | 700 / 1.0 | (b) ~100px + 24px unit |
- Units next to numerals 1.5rem 700. No uppercase transforms (b).
- CJK: headings ≈ 0.75× (section 2.25rem, display 3rem, page 3.25rem, statements 1.625rem), body 1rem lh 1.85; hero statement stays English. fr/de: `hyphens:auto` on body, H2, card titles. Display titles on bands stay English in all languages (like the ref's "About Us"), with a translated kicker above.

---

## 5. Home page

### 5.1 Header
- ≥ 1100px: T1 rails + the single `core/navigation` (`id="kt-nav"`, overlayMenu `mobile`) placed absolutely at the top of the stage over the hero (on inner pages over the page head): centred, y 36px, items About · Courses & fees · Training day · Certificate · Instructors · Stories · Contact; Schibsted Grotesk 700 1rem white, gap 40px with 1px × 12px `rgba(255,255,255,.4)` dividers. Not sticky (the right rail's Menu link returns to it). At 1100–1279px nav 0.875rem, gap 28px.
- < 1100px: white top bar (§1 T1), nav collapses to the overlay hamburger (two 28×2px olive lines). One menu only.

### 5.2 First screen composition (1440×900)
- x 0–120 left rail, x 120–1320 hero stage, x 1320–1440 right rail.
- Stage height `clamp(640px, 100svh, 900px)`; three stacked `img` (01, 02, 03) `object-fit:cover`, radius 0; top fade; olive wash; nav at top; kicker + statement lower right (KV #1–#6).
- Nothing else in the first screen: no button, table, form, search, badge, scroll cue or giant centred word.

### 5.3 Block order
| # | Pattern | Purpose | Layout and photos (ref block) | Copy |
|---|---|---|---|---|
| 1 | `kt-hero` | key visual | §5.2; photos **01, 02, 03** (crossfade) | 8 words |
| 2 | `kt-notes` | open dates & notes (ref News) | white, padding 120/110 (c), container 1080. Left 3/10: label "Notes" 13px 600 olive, H2 "Dates & notes" 3rem, then "All notes" 13px 700 underlined link + 28px `#F7F8F8` circle with "…". Right 7/10: Query Loop, 3 latest posts as rows (height ~104px, 1px `#F0F0F0` top/bottom): date 12px `#838383` with category 11px under it (col 120px), title 15px 700 `#000`, 24px circle olive arrow right. No images. Static fallback = the three newest demo posts. | 3 titles |
| 3 | `kt-about` | who we are + **T3 "A training day"** (ref About) | stage-width About band gradient, padding 120/160 (c), inner padding 90px. Top row: left kicker "About Kyugo Training" 14px 500 white .85 + display "About us" 4rem white; right col starting at 45%: statement 2.125rem white (3 lines: "We train the people who are already there when something happens at work.") + paragraph 0.9375rem/1.9 white ≈ 70 words (2011, Ines Varga, hall on Werfstraat). 80px gap, counter, **T3 stack** of 4 cards (photos **04, 05, 06, 07**). Under the stack centred: 88px outline circle (1px white .6, white arrow) + "More detail :" 11px + "How a training day runs" 16px 700 underlined → /training-day/. | 70 + 4×45 words |
| 4 | `kt-centre` | the hall (ref School) | white, padding 150/120 (c), container 1080, 2 cols. Left (5/12, vertical centre): label "Training centre" 13px olive, H2 "Our centre" 3rem, lead 1.75rem "A hall built for kneeling, lifting and practising until it feels calm.", paragraph ≈ 60 words (220 m², mock aisle/kitchen/office, mannequins for adult/child/infant, AED trainers), 60px gap, **filled** 88px olive circle (white arrow) + "More detail :" + "Visit the centre" → /contact/. Right (6/12): photo **08** 524×600 (0.87:1) radius 0. | 80 words |
| 5 | `kt-courses` | courses & fees (ref Curriculum) | white, padding 0/155 (c), container 1080. Wide photo **09** 1080×556 radius 0 inside `sp-parallax` (`--sp-par:6%`), veil on the right half `linear-gradient(90deg, rgba(0,0,0,0) 35%, rgba(30,33,24,.55) 70%)` (static, not in the moving layer); text over the right 45% (left at 55%, vertical centre): label "Courses" 13px white, H2 "Courses & fees" 3rem white, lead 1.5rem/1.4/700 white 2 lines, paragraph ≈ 50 words white. Under the photo, 3 thumb links in one row, 1px `#F0F0F0` bottom rule, gap 24px: thumb 152×80 (1.91:1) photos **10, 11, 12**, then label 11px 700 olive ("1 day · €145", "3 days · €395", "Half day · €85"), title 1.125rem 700 (Emergency First Aid at Work / First Aid at Work / CPR & AED Operator), 10px olive arrow top-right. Then right-aligned filled circle + "See all courses & fees" → /courses/. | 80 words |
| 6 | `kt-data` | why train with us (ref Data) | stage-width band, `sp-parallax` (`--sp-par:10%`) with photo **13** as the moving layer, veil `linear-gradient(160deg, rgba(46,49,40,.86), rgba(63,69,50,.78))` as a separate static layer. Padding 120/120, side 60 (c), container 1080. Label "Why train with us" 13px white .8; H2 2.25rem/1.35/700 white 2 lines "Built around / the people on your floor". 2×2 stats (col gap 80, row gap 72): each a 24×1px white .4 dash, stat title 1.25rem 700 white, sub-label 1rem 700 white .85, numeral right-aligned 6.25rem + unit 1.5rem (`sp-reveal sp-count`), caption 11px white .7 right. Stats: **12** people (max per group) · **6** trainees (per instructor in scenarios) · **5** hours (hands-on in a 7-hour day) · **3** years (certificate validity). | 60 words |
| 7 | `kt-instructors` | instructors (ref Interview) | Instructors band gradient, padding 100/108 (c). Portrait **14** 306×526 flush with the stage's left edge (x=0 of stage), top 100px. Centre column x 400–820 (stage coords): kicker "Who teaches" 14px white .85, display "Instructors" 4rem white, statement 2.125rem 4 lines ("Paramedics, safety officers, a scenario builder. People who have done it for real."), paragraph ≈ 60 words naming Ines Varga and Tomas Reyes, outline circle + "Meet the instructors" → /instructors/. Right: tall photo **15** 246×420 flush with the stage's right edge, top 200px; small photo **16** 246×250 at right 30px, overlapping 15's bottom by 40px. | 80 words |
| 8 | `kt-stories` | stories (ref Cross×Talk) | Stories band, padding 0/120, container 1080. Left: photo **17** 524×578 (0.9:1); under it 3 caption columns, each with a 1px white .4 left rule, 12px/1.6 white: firm + who trained, course, name line (stories 1–3 of §0). Right (from 55%, top aligned to the photo + 40px): kicker "From our groups" 14px, display "Stories" 4rem white, statement 2.125rem 3 lines, paragraph ≈ 60 words, outline circle + "Read the stories" → /stories/. | 90 words |
| 9 | `kt-book` | how a firm books a group (row signature; process-timeline) | white, padding 120/120, container 1080. Left 4/12: label "Book a group" 13px olive, H2 "From enquiry to certificate" 3rem, paragraph ≈ 40 words, price line 1.25rem 700 "On-site group day, up to 12 trainees: €1,480" + caption "excl. VAT, kit included". Right 8/12: the 4 booking steps of §0 as a **horizontal** timeline: 4 columns, a 1px `#000` line across the top with a 9px olive square on it at each column start, step number 0.8125rem 700 olive ("01"…"04"), title 1.25rem 700, 2-line text 0.9375rem. Under the steps: filled circle + "Request a date" → /book-a-group/. No photo. | 110 words |
| 10 | footer | — | stage-width `#3E3E3E`, padding 56/60/48: nav row (same items + FAQ) 15px 700 white with 1px white .3 dividers; 1px white .2 rule; mark + "Kyugo Training" 22px 700 white; address, office hours, training-day hours, phone, email 13px/1.8 white .85; right: two outline pills (radius 999, 1px white .6, 13px 700, height 40, padding 0 20) "Course guide" → /courses/ and "Book a group" → /book-a-group/; © line 11px white .5. | — |

Home English ≥ 600 words with narrative paragraphs in blocks 3, 4, 7, 8 and 9 (≥ 3). CJK ≥ 900 characters.

**Home photo positions: 17** — 01, 02, 03 (hero), 04–07 (stack), 08, 09, 10, 11, 12, 13, 14, 15, 16, 17. No image twice.

### 5.4 Comparison with the most recent themes
| # | Satei (shipped) | Nemuri (approved) | Niuke (shipped) | Komugi (shipped) | **Kyugo** |
|---|---|---|---|---|---|
| frame | none | none | none | left rail (chip bar) | **fixed white rails both sides + olive tile** |
| 1 | hero photo + wordmark, top/bottom halves | offset rounded hero + info bar | big tracked headline + photo | bench photo + chips | **4:3 stage photo crossfade + olive corner wash + 3-line statement** |
| 2 | Why (hairline opener) | statement | why | intro statement | **notes list (date rows)** |
| 3 | calls strip | dome | pinned 3-stop photo stage | day-schedule hairline rows | **gradient band + stacked-paper card stack** |
| 4 | sticky split visit | sticky-media method | ellipse photo rows | full-bleed photo | **text left / 0.87 photo right** |
| 5 | adjusters | photo rows | blue spec band | two tickers | **wide photo with veil + 3 thumb links** |
| 6 | cases rows | people | stories | leave | **dark photo stat band (parallax)** |
| 7 | FAQ | stories (domes) | — | — | **instructors band, edge-bleeding portraits** |
| 8 | — | — | — | — | **stories band, square photo + caption columns** |
| 9 | — | — | — | — | **horizontal 4-step booking line** |

Why not alike: no other recent theme uses a framed stage (two fixed rails), a colour wash corner statement, a stacked-paper card, or edge-bleeding portraits on gradient bands. Komugi's day-schedule is hairline rows on white; ours is a flip card stack on an olive band. Niuke's spec band is a flat blue stat strip; ours is a parallax photo band with a dark veil. No sticky split (Satei/Nemuri), no domes/ellipses, no tickers, no wordmark across the hero. The structure follows gakuen.toyota-shokki, which none of them used.

---

## 6. Inner pages (10 + single post; each = T1 rails + T2 page head + body + closing circle link)

1. **About** (`/about/`): head 08 "About us" / kicker "Since 2011". Founder T3 card (14, Ines Varga, 90 words: why she left the ambulance service to teach). Three narrative sections in a 7/12 column (Founded 2011 on Werfstraat; Why we teach in small groups; How the syllabus is reviewed every January). Wide photo 13 (1080×420) between sections 2 and 3. Close: circle → /instructors/.
2. **Courses & fees** (`/courses/`): head 09. Intro 60 words. **Fee table** (7 rows of §0, columns Course / Length / Open dates / Fee; rules in §8). Thumb rows (ref Curriculum) for the 3 main courses with photos 10, 11, 12. Stat band (13, parallax). Close: circle → /book-a-group/.
3. **A training day** (`/training-day/`): head 01 "A training day". Full T3 stack (04–07). Below it the process-timeline: 4 rows, each with time 1.25rem 700 olive left (col 200px), a 1px `#000` vertical rule only between the time column and text inside the row (not a page-long line), title 1.75rem, 80-word paragraph; lunch 12:30–13:15 as a one-line row on `#F7F8F8`. Wide photo 03 (parallax 8%) "What to wear and bring". Close → /courses/.
4. **The certificate** (`/certificate/`): head 07. T3 stack of 3 cards (05, 11, 18): what it covers (topic list), how it's assessed (practical + 10 questions), when it expires (3 years, reminder 90 days, Requalification €285 / Annual Refresher €75). Close → /courses/.
5. **Book a group** (`/book-a-group/`): head 03. T3 stack = 4 booking steps (18, 12, 02, 17). Stat band (13). On-site requirements list (clear floor 6×8 m, tables for 12, power socket, parking for one van). Enquiry form (name, firm, email, phone, number of trainees, preferred course, message; mailto fallback) — off the first screen. €1,480 line. Close → /contact/.
6. **Instructors** (`/instructors/`): head 15. T3 stack of 2 cards (14 Ines Varga, 16 Tomas Reyes, 70 words each). The other five people as hairline rows (name 1.25rem 700, role 13px olive, one line). No people grid.
7. **Stories** (`/stories/`): head 17. T3 stack of 4 stories (02, 10, 12, 06), each ≈ 90 words: who, what course, how the day was set up. Close → /book-a-group/.
8. **FAQ** (`/faq/`): head 10. 10 questions in `core/details` with 1px `#F0F0F0` rules, question 1.25rem 700, plus/minus 16px olive; answers repeat the fixed numbers (validity, group size, fees, cancellations: free up to 10 working days before, 50% after). Open/close 200ms ease-out (ref accordion (g)), CSS only.
9. **Contact & access** (`/contact/`): head 18 "Find us". Address, phone, email, office hours, training-day hours, directions (tram 8 to Werfstraat stop, 4-minute walk; parking for 6 cars), "Find us" anchor from the rail. No map embed required.
10. **Notes** (`home.html`, `archive.html`): head 13 "Notes"; rows like Home block 2 with a 152×80 thumb. **Single** (`single.html`): T2 head with the featured image, title 3rem, date, text column 720px.
11. **404 / search**: small T2 head (photo 01, 360px tall) + circle → home.

Demo posts (6): "Open course dates for November" (03) · "What's new in this year's Annual Refresher" (05) · "Planning first-aid cover for night shifts" (09) · "Where to put an AED on a warehouse floor" (12) · "Our new scenario room: the mock kitchen" (13) · "How to prepare staff for their first course day" (18).

---

## 7. Scroll effects (sp-scroll; max 3 kinds per page; hero has no reveal)

| Effect | sp-* class | Where | Reference trigger / time / ease | Our values |
|---|---|---|---|---|
| **Parallax (required)** | `sp-parallax` on the band Group, photo as direct `img` / `figure>img` (moving layer); veil and text are separate static layers | Home **block 6** (photo **13**, foreground: label, H2, 4 stats) — primary; Home block 5 (photo **09**); every inner page head (T2) and the /training-day/ band (03) | ref Data band is a still photo under a dark wash; ref hero motion is the 900ms crossfade → we keep the crossfade on the hero and make the photo bands move under their text | block 6 `--sp-par:10%` (≤781px `8%`); block 5 `--sp-par:6%` (≤781px `6%`); page heads `8%` (≤781px `6%`). Kept on mobile. 0 under reduced motion / `?sp-static` / editor. |
| Fade-up (+ stagger) | `sp-reveal sp-reveal--up`; parent `sp-stagger` | Home: block 2 rows (parent stagger), block 3 top row and the whole `.kt-stack` wrapper (not its cards), block 4 text column + photo, block 5 thumb row (parent stagger), blocks 7–9 text columns, block 9 step columns (parent stagger). Inner pages: section bodies. | ref `.js-fadeIn-up`: IO rootMargin `0 0 -15%`, opacity 0 + translate 20px → 1, **2s**, default `ease` | `--sp-dist:20px; --sp-dur:2s; --sp-ease:ease` |
| Count | `sp-reveal sp-count` | block 6 numerals (12, 6, 5, 3); /courses/ and /book-a-group/ stat bands | ref numerals static → added, facts only | built-in 1.2s easeOutCubic |

Not used: wipe, mask, zoom, marquee. Never on the hero, the fee table, the form, FAQ answers or legal text. The card-stack flip (300ms) and hero crossfade (900ms/4000ms) are separate non-scroll motions (CSS / click), and hover uses 0.3s `cubic-bezier(.165,.84,.44,1)` (g).

---

## 8. Responsive rules (hard)

- **390px first screen:** top bar 60px (mark + horizontal "Kyugo Training", hamburger, olive "Book" square) — no rails, **no vertical text, no absolutely positioned labels over text**. Hero photo full width 4:5 (390×488) with the same wash (crossfade kept); the kicker (0.8125rem) and statement (3rem / 1.0, three lines) sit **in flow below the photo** in an olive block `linear-gradient(160deg, #5A6148, #6C7357)` padding 28px 20px, white text. Nav overlay only through the hamburger.
- No horizontal overflow at 390, 800 and 1280 (stack sheets' rotation must stay inside a `overflow:clip` wrapper with 48px right padding on desktop and 20px on mobile).
- **Fee table at ≥ 782px:** `width:100%` of its container (1080, full width), `table-layout:auto`; columns Course (40%) / Length (18%) / Open dates (auto) / Fee; **Fee column `white-space:nowrap; text-align:right; padding-right:0`**, never clipped at 800 and 1280. Header row 13px 700 `#838383` on `#F7F8F8`; rows 1px `#F0F0F0`, height 64px, course 1.0625rem 700. The on-site row's "€1,480 per group" also nowrap.
- **Every table < 782px becomes stacked:** each row a block; course 700, then length · open dates on one line 0.875rem `#838383`, then the fee on its own line right-aligned 1.125rem 700.
- T3 stack < 782px: photo full width 4:5, panel `margin:-64px 0 0 24px; width:calc(100% - 24px)`, sheets peek 10px/20px; arrows and counter in a row under the card (counter centred, arrows 44px tap targets).
- Home block 4: stacks text → photo (photo 100%, 0.87:1). Block 5: photo 16:10 then text in flow in ink on white (veil removed); thumbs stack in 1 column (thumb 120×63 left, text right). Block 6: stats 1 column, numerals 4rem. Block 7: portrait 14 full width 4:5, then text, then 15 and 16 side by side 1:1. Block 8: photo then captions (1 column) then text. Block 9: steps become 4 rows with the line on the left of each row (short per-row rule, no page-long vertical line).
- Inner page heads < 782px: photo 4:3, title 2.75rem in flow below in the olive block (same as hero).
- Rails appear only ≥ 1100px; between 782 and 1099 the top bar is 72px.

---

## 9. Images (18 photos, Grok, one at a time, Read each; regenerate any with text, logos, emblems, broken hands, distorted faces or style drift)

**Imagery: photo** (stage-a IMAGERY: photo; documentary, real people at work, high-key, cool-neutral).

STYLE (identical for all 18):
`documentary photograph, real people at work in an unposed candid moment, soft natural window light, high-key bright and airy, cool-neutral colour grade with muted olive, charcoal and pale grey tones, white and light grey walls, pale grey floors, shallow depth of field, 35mm lens, modern international workplace training hall and industrial interiors, diverse adults in plain olive, grey and navy work wear, CPR training mannequins and equipment without any markings, photorealistic, no text, no lettering, no logos, no brand marks, no red cross or medical emblems, no signage, no Japanese elements`

| # | Subject / composition | Ratio (px) | Used (page · block) | Home |
|---|---|---|---|---|
| 01 | **KV**: instructor (woman, 40s, grey polo) kneeling at the left third beside a full-size resuscitation mannequin on a grey mat, hands guiding; trainee in an olive work jacket kneeling opposite, leaning in to watch; bright hall with tall windows; camera at kneeling height; lower-right third calm pale floor | 4:3 (2000×1500) | Home hero base · Training day head · 404 | ★ |
| 02 | trainee in a muted high-vis vest placing AED training pads on a mannequin's chest, instructor's hand pointing; warehouse racking soft out of focus; subjects upper-left, lower right floor | 4:3 (2000×1500) | Home hero slide 2 · Book a group stack · Stories stack (1) | ★ |
| 03 | five floor staff in work wear in a half circle listening to an instructor holding a mannequin torso, factory hall; people upper-left, lower right clear floor | 4:3 (2000×1500) | Home hero slide 3 · Book a group head · Training day band · post 1 | ★ |
| 04 | close-up of interlocked hands doing chest compressions on a mannequin, straight arms, trainee's face out of focus | 0.81:1 (1200×1480) | Home stack 01 · Training day stack | ★ |
| 05 | trainee bandaging a colleague's forearm at a table, instructor watching over her shoulder | 0.81:1 | Home stack 02 · Training day stack · Certificate stack · post 2 | ★ |
| 06 | staged incident in a mock workshop: an actor lying beside a step ladder, two trainees kneeling, one on a phone, instructor watching in the background | 0.81:1 | Home stack 03 · Training day stack · Stories stack (4) | ★ |
| 07 | instructor and trainee at a table reviewing a blank assessment sheet, pen in hand, calm smile, window light | 0.81:1 | Home stack 04 · Training day stack · Certificate head | ★ |
| 08 | the empty training hall: mannequins lined up on grey mats, tall windows, white walls, a mock kitchen counter at the back | 0.87:1 (1310×1500) | Home centre · About head | ★ |
| 09 | row of six trainees kneeling side by side doing compressions on mannequins, side view, long depth | 1.94:1 (2000×1030) | Home courses (parallax) · Courses head · post 3 | ★ |
| 10 | open plain grey first-aid pouch on a steel bench, dressings and gloves laid out, no symbols | 1.91:1 (1600×840) | Home thumb · Courses rows · FAQ head · Stories stack (2) | ★ |
| 11 | trainee placing a colleague in the recovery position on a mat, instructor kneeling | 1.91:1 | Home thumb · Courses rows · Certificate stack | ★ |
| 12 | overhead detail: hands pressing AED trainer pads, unmarked grey AED trainer beside the mannequin | 1.91:1 | Home thumb · Courses rows · Book a group stack · Stories stack (3) · post 4 | ★ |
| 13 | wide high-ceiling industrial training hall with steel trusses and skylights, almost empty, a few mats far away | 16:9 (2000×1125) | Home data band (parallax) · About wide · Courses / Book stat bands · Notes head · post 5 | ★ |
| 14 | lead instructor portrait (woman, 40s, olive polo), half body, soft smile, white wall, looking slightly off camera | 0.58:1 (1000×1720) | Home instructors portrait · About founder card · Instructors stack | ★ |
| 15 | instructor walking down open steel stairs carrying a mannequin torso under one arm, concrete wall, tall view | 0.59:1 (1000×1700) | Home instructors tall · Instructors head | ★ |
| 16 | second instructor (man, 30s, navy work shirt), chest-up, relaxed, workshop softly behind | 1:1.02 (1200×1220) | Home instructors small · Instructors stack | ★ |
| 17 | debrief: four staff in work wear at a round table in a glazed canteen, instructor talking, coffee cups | 0.9:1 (1350×1500) | Home stories · Stories head · Book a group stack | ★ |
| 18 | entrance of the centre: glass door, timber bench, plants, pale wall, morning light, no signage | 4:3 (2000×1500) | Contact head · Certificate stack · Book a group stack · post 6 | |

WebP ≤ 300 KB, ≤ 2000px, no cut-outs (0 transparent images). readme.txt line per image (AI-generated, CC0). Per-page check: Home 01–17 once each; Book a group = 03 (head) + 18, 12, 02, 17 (stack) + 13 (band) — no repeats; Certificate = 07 + 05, 11, 18; Stories = 17 + 02, 10, 12, 06; Instructors = 15 + 14, 16; Training day = 01 + 04–07 + 03; About = 08 + 14 + 13; Courses = 09 + 10, 11, 12 + 13.

---

## 10. Similarity (target 80%; values from reference-tokens.md)

| Dimension | gakuen.toyota-shokki (token) | Kyugo |
|---|---|---|
| Frame | fixed 120px white rails, 1200 stage at 1440 (c) | same |
| Inner containers | 1080 (pad 90) / 1020 (c) | 1080 (pad 90 in bands) |
| Base / alt / text / secondary | `#FFFFFF` / `#F7F8F8` / `#000` / `#838383` (a) | same |
| Hairline | `#F0F0F0`, white 40% on bands (d) | same |
| Footer | `#3E3E3E` (a) | same |
| Main / partner | `#005EB8` / `#4299F0`→`#2BA8F0` (a) | `#5A6148` / `#8A9170` (row palette; reason §3) |
| Band share | ~30% of page (a) | ≈ 30% (blocks 3, 6, 7, 8) |
| First-screen saturated | 19.6% (a) | ≤ 15%, expected ≈ 2% |
| Body | 16px / 1.8 / 400 (b) | 1rem / 1.8 / 400 |
| Nav | 16px / 700, hairline dividers, white over dark top fade (b)(c) | 1rem / 700, same dividers and fade |
| Lead / band statement | 28px/1.4/700 · 34px/1.4/700/ls .68px (b) | 1.75rem · 2.125rem / 0.02em |
| Hero statement | Inter ~80px / lh 1.0 / 700 white, 3 lines + 18px kicker (b) | Hanken 5rem / 1.0 / 700, 3 lines + 1.125rem kicker |
| Display titles | Inter ≈ 64px (screenshot) | Hanken 4rem |
| Stat numerals | ~100px + 24px unit, 12px caption (b)(f) | 6.25rem + 1.5rem, 11px caption |
| Section padding | News 120/110, About 120/160, School 150/120, Curriculum 0/155, Data 120/120 side 60, Interview 0/108 (c) | identical per mapped block |
| Radius | 0 on photos and cards; circle buttons only (d) | same |
| Circle button | 88px, 1px white 60% on bands / filled main on white (d)(f) | same, olive |
| "More detail :" | 11px label over 16px underlined link (f) | same |
| Hero photo | 1200×900 4:3, cover, between rails (e) | same |
| Hero wash | lower-right 55%×60%, transparent → main/partner (e) | same geometry, olive |
| Card stack | photo 416×515 (0.81), panel overlap ~120px, 2 sheets rotated ~1–2° (e)(d) | 416×515, overlap 120px, sheets 1.5° / 3° |
| School photo | 524×600 (0.87:1) right (e) | 524×600 right (08) |
| Curriculum | wide photo + 3 thumbs 152×80 (1.91:1) (e) | 1080×556 + 3 thumbs 152×80 |
| Interview / Talk | portraits flush to stage edges on gradient band; square photo + caption columns (e) | same (14/15/16; 17) |
| Ghost numerals | white "01" ~60px on card photos (f) | Hanken 3.75rem white .85 |
| Hero motion | Swiper fade 900ms / 4000ms (g) | CSS crossfade 900ms / 4000ms, 3 slides |
| Card motion | Swiper cards 300ms (g) | click flip 300ms ease |
| Hover | 0.3s `cubic-bezier(.165,.84,.44,1)` (g) | same |
| Reveal | `.js-fadeIn` 2s, 20px, rootMargin −15% (g) | `sp-reveal--up` 2s, 20px, ease |
| Accordion | 200ms ease-out (g) | 200ms ease-out (FAQ) |
| Parallax | none (still photo under wash) | `sp-parallax` 10% / 6% / 8% (required addition) |

Own material only: photos generated, copy written for Kyugo, mark drawn as a plain olive square with a plus; nothing from the reference's images, text or logo.

---

## 11. Home acceptance checklist
- [ ] 1440×900: white 120px rails both sides with vertical "Kyugo Training", olive "Book a group" tile and `#474D38` call tile; 4:3 stage photo 01; olive lower-right wash; kicker + "Steady / hands, / first." at 5rem lower right; centred white nav with hairline dividers over a dark top fade. KV #1–#6 all visible. No button, table, form or search in the first screen.
- [ ] Photo 01 shows the kneeling instructor, mannequin, trainee in olive leaning in, bright hall, calm lower-right floor. Crossfade 01→02→03 runs at 900ms/4s with motion on; `?sp-static` and reduced motion show 01 only.
- [ ] 390px: top bar, photo 4:5, statement in flow below in the olive block; no vertical text, no overlapping absolute labels; no horizontal overflow at 390/1280.
- [ ] Block order equals §5.3 (10 blocks incl. footer); differs from Satei/Nemuri/Niuke/Komugi per §5.4.
- [ ] T3 stack: photo bleeds top-left, panel overlaps ≥ 100px, two rotated sheets, ghost numeral, "01 | 04" counter, arrows flip in 300ms; no-JS shows all four cards.
- [ ] `sp-parallax` on block 6 (photo 13) and block 5 (photo 09) moves ≥ 6px on desktop and mobile (`check-parallax.mjs`), 0 under reduced motion; ≥ 3 `sp-reveal--up` elements hidden before entering, none left transparent at the bottom; no reveal in the hero.
- [ ] Stats 12 / 6 / 5 / 3 with `sp-count`; prices on Home (€145, €395, €85, €1,480) match §0 exactly.
- [ ] 17 home images, none repeated, no text/emblems/logos, same STYLE; square corners everywhere except circle buttons.
- [ ] Colours: `#FFFFFF`/`#F7F8F8`/`#000`/`#838383`/`#F0F0F0`/`#3E3E3E` + olive `#5A6148`/`#8A9170` gradients only; `check-first-screen.py` saturated ≤ 15%.
- [ ] Hanken Grotesk + Schibsted Grotesk via theme.json fontFace, identical in the editor; CJK Noto Sans TC/JP; max preset ≥ 4.25rem.
- [ ] English home ≥ 600 words, ≥ 3 narrative paragraphs; no guarantees, accreditation claims, outcome statistics, awards, real brands or media.
- [ ] `auto-gates.mjs … en … 1 1` pass=true.
