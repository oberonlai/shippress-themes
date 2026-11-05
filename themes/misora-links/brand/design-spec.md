# Misora Links: design spec (stage B, binding for implementation)

Slug `misora-links`, members' golf club, type **hospitality** (WooCommerce compatible, not required; booking is a request form + mail, no checkout). Row b23-4: archetype split-screen, hero photo-left-text-right, nav overlay, real photography, photo_direction **low-key**, font_direction **serif**.
Main reference: https://misotone.m-hand.co.jp/lp/ (S5-Style). No secondary. Measurements in `reference-tokens.md`, mapping in `reference.md`. We borrow structure, shapes, motion, colour relations and the first-screen concept. We do not copy photos, copy, crests, mascot, logo or the page as a whole.

Fixed brand facts (every page, all five languages, never change):
- **Misora Links**, members' golf club, founded **1961**, **18 holes, par 70, 5,980 m**, laid along a dune line with old pines. Address: **1 Starter's Lane, Westerby Point** (fictional coastal town; no country named). Members: **640** (cap).
- Course: Tuesday–Sunday, **closed Mondays** for greens work. Morning sheet **06:40–09:00**, a time every **10 minutes** (15 times). Afternoon walk-up 11:30 until last tee **16:30** (April–October) / **14:00** (November–March). Clubhouse **06:00–20:00** Tue–Sun. Office **09:00–17:00** Tue–Fri.
- Weekend sheet opens **Thursday 18:00**; draw **Friday 12:00**, results by **13:00**. Weekday times bookable up to **7 days** ahead.
- Season: applications by **31 January**, Saturday course walks in February, committee meets the **first Tuesday of March**, season opens **1 April**.
- Currency **USD** in every language (no conversions).

---

## 1. Signature techniques (three, all obvious at a glance)

### T1. Ticket-notch photo frame (ref: tall notched photo frame, first screen)
- Reference (misotone-first.png): a tall 510×789 photo (0.65:1) at the right, inset 23px from top/right/bottom of the viewport, every corner bitten by a concave arc, thin sand line; it is the only bright, saturated thing on a brown ground.
- Ours: same tall frame, **mirrored to the left**, with the reference's concave corner bites **plus** one semicircle bite at the middle of each long edge (a tee-time ticket torn from a book). Not the scoop-corner tiles of earlier themes: the mid-edge bites are the identifier.
- Geometry (1440×900): frame x 23→700 (677 px wide), y 23→811 (stops above the 66 px bottom bar + 23 px gap; ratio ≈ 0.86:1 on desktop because we sit in a split screen, the tall 0.65:1 feeling is kept on mobile and inner heads). Corner bites: radius **28px** quarter circles centred on each corner. Mid-edge bites: radius **18px** semicircles centred on the left and right edges at 50% height. Implement as `mask-image` with radial-gradients on `.ml-ticket` (`mask-composite: intersect`), no SVG file needed:
  `radial-gradient(circle 28px at 0 0, #0000 98%, #000) , … (four corners) , radial-gradient(circle 18px at 0 50%, #0000 98%, #000), radial-gradient(circle 18px at 100% 50%, #0000 98%, #000)`.
- Inner line: `::after` inset **10px**, `border: 1px solid rgba(232,226,212,.55)` (ref sand hairline), masked by the same bites enlarged by 10px so the line breaks cleanly at every bite (reads as a perforated ticket edge). Never a shadow.
- Variants (same mask function, sizes scale): `.ml-ticket--lg` (hero/inner heads, 28/18), `.ml-ticket--md` (section photos, 20/14), `.ml-ticket--sm` (cards, journal thumbs, 12/9).
- Must not be diluted: bites must be visible at 100% zoom (corner ≥12px, mid ≥9px on the smallest variant); the hero frame must be tall and fill the full left half height; no rounded-rectangle fallback.

### T2. Giant cropped display word + narrow vertical serif column (ref: the hero display line cropped by the top edge + 5-line vertical copy)
- Reference: a ~170 px display line whose top is cut off by the viewport edge, in a textured sand colour, and a 5-line vertical text column beside the photo at x 730.
- Ours: **"Misora"** in Cormorant Garamond **300 italic**, `font-size: clamp(5.5rem, 13vw, 13rem)` (13rem = 208px at 1440), colour sand `#E8E2D4` at 92%, `line-height: .8`, `margin-top: -0.24em` so the top ~22% of the cap height is cut by the viewport top edge; right edge aligned to x 1417 (23 px inset). Not centred.
- Vertical column: `writing-mode: vertical-rl`, Cormorant 400 italic 1.0625rem / line-height 2, letter-spacing .06em, 4 lines, at x ≈ 724–820, y 210–470, sand 80%. Lines (en): "A course kept / for the people / who live beside it, / since 1961." zh-TW/ja: `text-orientation: mixed` (upright CJK), same 4 lines translated.
- Continuation: every inner page head repeats it with the page word ("Rounds", "Sheet", "Season", "Members", "Course", "1961", "People", "Visit", "Journal") at `clamp(4.5rem, 10vw, 10rem)`, cropped by the head band's top edge, plus a 3–4 line vertical column at ≥1024px.
- Must not be diluted: the word must be cut by the top edge on desktop (not floating with margin), ≥10rem on the home desktop, light italic (not bold), and the vertical column must be truly vertical at ≥1024px. Below 782px the column becomes horizontal (see section 7).

### T3. Rounded stone sheet with a horizontal card rail, next card peeking, two-tone progress bar and "Scroll →" (ref NARRATIVE sheet, scroll-misotone-rail.png)
- Reference: a stone sheet (radius 10, padding 38) on a dark ground; a spaced Latin label with slash + sub-label; left a serif H2 and a narrative paragraph; then a 0.62:1 photo, a numbered card "01" with pale ochre numeral, and the next card peeking at the right edge; bottom-left "SCROLL →", under it a 4 px bar dark-filled for progress over a tan track.
- Ours: **"The morning sheet"**: how a tee time is called, as a rail of five cards interleaved with three photos.
  - Sheet: `#E3E5DD`, radius **10px**, margin 0 **23px**, padding **38px**, on the pine ground; section gap above/below **40px** (ref).
  - Label: `THE MORNING SHEET / How a tee time is called` (see type: label style).
  - Left fixed column (5/12, not scrolling): H2 "A name on the sheet, / a time on the tee." Cormorant 500 2rem / 1.6 (ref sheet H2 32/1.6), then a 110-word narrative.
  - Right rail (7/12, runs to the sheet's right padding edge and is clipped so the 4th item peeks ~90 px): `display:flex; gap:48px; overflow-x:auto; scroll-snap-type:x mandatory; scrollbar-width:none`. Items in order: photo P03 (280×452, 0.62:1, `.ml-ticket--sm`), card 01, card 02, photo P02, card 03, card 04, photo P04, card 05. Card width 340px, height = photo height, text bottom-aligned like the ref (numeral + title top, body bottom).
  - Card: numeral Cormorant 300 3rem brass `#B8956A` ("01"…"05"), under it the time in Cormorant 500 1.5rem ink ("Thursday 18:00"), title EB Garamond 500 1.125rem, body 0.9375rem/1.8 at bottom.
  - Progress: under the rail, full sheet width, 4px tall: track tan `#CDBE9F`, fill walnut-ink `#4D3C37`→ we use pine-ink `#2E3D33`; fill driven by CSS scroll timeline: scroller `scroll-timeline: --ml-rail x`, sheet `timeline-scope: --ml-rail`, bar fill `animation: ml-bar linear both; animation-timeline: --ml-rail` (scaleX .25→1, transform-origin left). `@supports not (animation-timeline: scroll())` → static fill 35%. No JS, no scroll listener. reduced-motion / `?sp-static`: static 35%.
  - "Scroll →": EB Garamond 500 1.5rem, letter-spacing .2em, uppercase, ink, left above the bar (ref 43px Syncopate → our serif caps at 1.5rem). It is a label, not a button; arrow nudges 4px right on hover of the sheet.
- Must not be diluted: the sheet must be visibly rounded (10px) on a dark ground with side insets; the next item must peek; the bar must be two-tone and full width; the rail is a real horizontal scroller (not wrapped into a grid at desktop).

### Supporting (not counted): ruled 01–04 rows with pale numerals on a dark ground (ref "3 reasons", scroll-misotone-rows.png) for the season booking; plan cards with dotted rules (ref campaign cards, scroll-misotone-cards.png) for the two memberships; small line crest stamp (own drawing).

### Continuation to inner pages (T1/T2/T3 on ≥4 inner pages; here on all main ones)
| Page | T1 ticket frame | T2 cropped word + vertical column | T3 sheet + rail |
|---|---|---|---|
| Rounds | head photo P06 `--lg` right; 3 round photos `--md` | "Rounds" | rail of the day: 06:40 → 16:30 (6 cards, P05 inside) |
| Morning sheet (booking) | head photo P04 `--lg` | "Sheet" | full 15-time rail 06:40–09:00 (cards = times, each "member four / guest allowed / caddie available" lines), progress bar; under it the request form (form not on any first screen) |
| Season booking | head photo P14 `--lg` | "Season" | — (ruled rows 01–04 as on home, larger, each with 80-word text) |
| Membership & fees | head P15 `--lg`; plan cards | "Members" | — (full fee table, see 6) |
| The Course | head P08 `--lg`; P13 `--md` | "Course" | 18-hole rail: 18 cards (hole number brass numeral, par, metres, one line), progress bar |
| About / History | head P16 `--lg` | "1961" | 4-card history rail (1961, 1978, 1994, 2019 greens rebuilt) |
| People | P09 `--lg`, ruled name list | "People" | — |
| Visit & contact | P10 `--lg` | "Visit" | — |
| Journal (index/archive/tag/single) | post thumbs `--sm`, single featured `--md` | "Journal" on index/archive/tag; single shows the category as label | — |

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
- Drawn: a warm brown full-frame ground with faint contour-line texture; at the right a tall photograph of sun-lit water under maple leaves inside a notched frame; a huge display line cut by the top-left edge; a slim vertical text column beside the photo; a lead paragraph and a large H1 at the bottom left; a line-drawn crest stamp; a bottom bar with logo, a one-line descriptor and a MENU button above a full-width hairline.
- Story: a tradition that stays quiet but opens its gate. The calm of the grounds is shown first (one still photograph of the precinct), the offer second (the H1 says "leave it to us").
- Signature motion: the photo frame wipes open with `clip-path: inset(0 100% 0 0) → inset(0)` 0.8s `cubic-bezier(.76,0,.25,1)`; the header slides in; text fades in on 0.5/0.7/1s delay steps; further down a pinned horizontal rail is scrubbed by scroll.

### (2) Our translation (members' golf club, same composition, same motion, same image type)
- Scene: **the first tee at dawn**. A low-key real photograph: the starter at his box with a clipboard, a member bent to tee the ball, a caddie shouldering a carry bag, mist on the first fairway beyond, a sky just lifting. It is the club's quiet "gate": local members, first light, one still moment before the round.
- Composition: mirrored split screen (photo left in the ticket frame, giant "Misora" cropped at the top right, vertical column beside the photo, lead + H1 bottom right, crest in the gutter, bottom overlay bar).
- Motion: frame wipe on load (same curve), bar slides up, text on the same delay steps; the scrubbed rail becomes the morning sheet rail (native horizontal scroll + scroll-timeline bar). Image type stays photography (IMAGERY = photo).

### (3) KV checklist (1440×900, all on the first screen, all visible in a `?sp-static` screenshot)
| # | Reference element | Our counterpart | Position (1440×900) | Motion | Image |
|---|---|---|---|---|---|
| 1 | Tall notched photo frame, the only saturated area | Dawn first-tee photo (starter, member teeing, caddie with bag) in the T1 ticket frame | x 23–700, y 23–811 | load wipe `inset(0 100% 0 0)→inset(0)` 0.8s cubic-bezier(.76,0,.25,1); `sp-parallax` `--sp-par:6%` on the photo | **P01** |
| 2 | Giant display line cut by the top edge | "Misora", Cormorant 300 italic 13rem, sand, cut by y 0 | x ≈ 840–1417, y −50–190 | fade-in 0.5s ease-out, delay 0.5s | — |
| 3 | 5-line vertical copy beside the photo | 4-line vertical serif column "A course kept / for the people / who live beside it, / since 1961." | x 724–820, y 210–470 | fade-in 0.5s, delay 0.7s | — |
| 4 | Lead paragraph + big H1 bottom-left | Lead (45 words) + H1 "Early rounds for the people who live beside the course." + brass outline button "Request a morning" + text link "See the morning sheet →" | x 880–1380, y 470–800 | fade-in 0.5s, delay 1s | — |
| 5 | Line-drawn crest stamp | Own SVG crest: flag pin + pine sprig in an oval, ring text "MEMBERS' ROUNDS SINCE 1961" (ring text is SVG `<textPath>` inside the pattern markup, not CSS content) 112px, sand 70% line | x 726–838, y 650–762 (gutter, does not touch the photo) | 40s linear rotation of the ring only; none under reduced-motion | own SVG |
| 6 | Bottom bar: logo, one-line text, MENU, hairline above | Overlay nav bar: wordmark "Misora Links" left, nav links centre-right (Rounds · Morning sheet · Season · Membership · Course · Visit), "Menu" button far right on <1100px | y 834–900, 1px `rgba(232,226,212,.35)` rule at y 834 | slides up 24px→0, 0.5s, delay 0.2s | — |

All hero motions are CSS keyframes in the theme stylesheet, scoped `@media (prefers-reduced-motion: no-preference) { html.sp-js:not(.sp-no-motion) … }` so `?sp-static`, no-JS and the editor show the final state. No `sp-reveal` in the hero.

---

## 3. Colour

Reference relationships kept: one dark, low-saturation ground filling the first screen; pale sand text; a stone sheet; tan secondary; a single ochre accent; near-black ink. The hue is moved from walnut to pine because this is a golf course (row palette "old pine" `#3E5346`); lightness and saturation stay at the reference's level (ref ground `#5E453D` HSL L 30% S 21% → pine L 29% S 15%). Neon label colours of the reference are rejected.

| Role | Hex | Source token | Use | Share (home) |
|---|---|---|---|---|
| Ground / pine | `#3E5346` | ref ground `#5E453D` (hue change, same L) | first screen ground, inner heads, fee section, close | ~40% |
| Pine deep | `#2E3D33` | ref walnut `#4D3C37` | progress fill, plan side panel, header on scroll | ~4% |
| Sand (text on dark) | `#E8E2D4` | ref sand `#E8E2D4` (exact) | display word, text on pine/ink, hairlines at 28–55% | text only |
| Sheet / stone | `#E3E5DD` | ref sheet stone (rail sheet ≈ `#E2DFD8`, cooled ≤5%) | T3 sheets, rounds band, journal, plan card A | ~30% |
| Tan | `#CDBE9F` | ref tan `#CDBE9F` (exact) | progress track, plan card B | ~3% |
| Accent / brass | `#B8956A` | ref ochre `#B8956A` (exact) | numerals, outline button, active nav underline, crest flag | ≤2% |
| Ink | `#201F1D` | ref ink `#201F1D` (exact) | body text on light, season rows band, footer | ~18% |
| Muted text | `#5C625C` | derived from ink on stone | captions, meta | — |

- Contrast: sand on pine 8.0:1; ink on stone 15:1; brass on pine 3.3:1 → brass only for ≥1.5rem numerals, rules and the button outline (button text is sand).
- **First-screen saturated share** (HSV S>35%, V>24%, `scripts/check-first-screen.py`): pine ground S≈25% is not counted. Reference measured ≈12% (photo only). Cap = min(30%, ref) → gate **`--max 15`**, target **6–12%**. Achieved by the low-key P01 grade (blue-grey dawn, greens desaturated) and brass limited to the button outline + crest flag.
- Not beige-led: the ground is pine and the sheet is a cool grey-green stone.

---

## 4. Typography (font_direction = serif)

- Display: **Cormorant Garamond** 300, 400, 500, italic 300, 400 (OFL).
- Body / UI: **EB Garamond** 400, 500, italic 400 (OFL).
- zh-TW headings: **Noto Serif TC** (Ming serif) 500/600 subset; ja headings: **Noto Serif JP** (Mincho serif) 500/600 subset. Body zh/ja: system serif.
- Stacks (theme.json `fontFamilies` with `fontFace`, so editor iframe and front end match; copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and require it because style.css uses `:lang()`):
  - display: `"Cormorant Garamond", "Noto Serif TC", "Noto Serif JP", Georgia, serif`
  - body: `"EB Garamond", Georgia, "Times New Roman", serif`
  - `:root:lang(zh-TW)` display: `"Cormorant Garamond", "Noto Serif TC", "PMingLiU", serif`; body: `"EB Garamond", "PingFang TC", "Noto Serif CJK TC", "PMingLiU", serif` (no bundled Noto Serif TC, no JP font).
  - `:root:lang(ja)` display: `"Cormorant Garamond", "Noto Serif JP", "Hiragino Mincho ProN", serif`; body: `"EB Garamond", "Hiragino Mincho ProN", "Yu Mincho", serif`.
  - zh/ja: heading sizes ×0.75, body line-height 1.85, the cropped display word stays Latin "Misora" (brand name). fr/de: `hyphens: auto`.
- Sizes (theme.json presets): small `0.8125rem`, base `1.0625rem` (EB Garamond small x-height; ref body 14px/1.8 scaled for Latin serif), medium `1.25rem`, large `2rem` (sheet H2, ref 32px), x-large `3rem` (hero H1 / section H2, ref H1 ≈ 50px), xx-large `4.5rem` (inner page H1 max, plan prices), display `clamp(5.5rem, 13vw, 13rem)` (cropped word). **Max ≥ 4.25rem satisfied.**
- Line-heights: body 1.8 (ref 25.2/14), H2 sheet 1.6 (ref), H1/H2 large 1.2, display .8. Letter-spacing body .02em (ref).
- Label style (ref "NARRATIVE / <local sub-label>"): EB Garamond 500 0.8125rem, uppercase, letter-spacing .22em, then " / " and the sub-label in Cormorant italic 1rem no caps. Written in block markup (never CSS `content`).
- Weights: headings Cormorant 500 (H2/H3) and 400 (H1); never bold 700 for display.

---

## 5. Home page (en)

### Header and first screen
- Header = one template part. On the front page at ≥1100px it is the KV bottom bar (absolute, top `calc(100svh - 66px)`, transparent over pine); after scrolling past the hero it is not repeated (no second menu). On inner pages it is a normal 72px bar on pine at the top. <1100px: 64px bar at the top (wordmark + "Menu" button) on every page, overlay nav panel on pine.
- First screen = KV checklist above. Ground pine with a very faint contour-line texture (own SVG, sand at 6% opacity, like ref's contour lines). Lead copy (en): "Misora Links is a members' club on the dune road at Westerby Point. Since 1961 the first tee has opened at 06:40 for the people who live here: a short sheet, a starter who knows your name, and caddies who walk every hole." Forbidden on the first screen: table, form, search box, any centred heading.

### Block order
| # | Pattern | Purpose | Layout, photos | Copy | Motion |
|---|---|---|---|---|---|
| 1 | `front-hero` | KV | split: P01 ticket frame left, "Misora" + vertical column + lead + H1 right, crest, bottom bar | ~70 words | hero CSS only; `sp-parallax` 6% on P01 |
| 2 | `front-sheet` | how a morning sheet is called (booking-led opener) | **T3** stone sheet on pine: label, H2 + narrative left, rail right: P03, 01, 02, P02, 03, 04, P04, 05; Scroll → + bar | 110-word narrative + 5 × 40 words | sheet `sp-reveal sp-reveal--up`; rail children none |
| 3 | `front-rounds` | which rounds it offers | stone band continues (second sheet, 40px gap): label "ROUNDS / Three ways onto the first tee"; 3 columns, each a `--md` ticket photo 3:4 (P06 Members' morning, P07 Guest round with a member, P05 Caddie round), under it name (Cormorant 500 1.75rem), time line, 50-word text, fee line "Included" / "$95 guest" / "$70 caddie" | 3 × 50 words | parent `sp-stagger`, columns `sp-reveal--up` |
| 4 | `front-course` | the course, full-bleed | Cover full width, min-height 80vh, **P08** background, overlay `rgba(32,31,29,.38)`, `sp-parallax --sp-par:10%`; foreground bottom-left in container: label "THE COURSE / Laid out in 1961", H2 "Eighteen holes along the dune line.", 60 words, a row of 4 figures (18 holes · par 70 · 5,980 m · 640 members) Cormorant 300 3rem sand with `sp-count` on the numbers | 60 words | figures `sp-reveal sp-count` |
| 5 | `front-season` | how a season is booked | ink `#201F1D` band, full width; H2 "How a season is booked." + 2-line intro left-top; 4 **ruled rows** between 1px sand-28% rules inset 23px, each ≈155px tall: numeral 01–04 (Cormorant 300 3rem, sand 22%) at x 60, title (Cormorant 500 1.5rem) at x 220, small text (0.9375rem) right column x 880–1360 | intro 35 words + 4 × 35 words | parent `sp-stagger`, rows `sp-reveal--up` |
| 6 | `front-people` | who meets you on the tee | pine ground; left 5/12 **P09** starter portrait `--lg` ticket frame 0.65:1; right 6/12 label "PEOPLE / On the first tee" + H2 + 70-word paragraph + ruled name list (7 people: name Cormorant 500 1.25rem, role small caps, one line), dotted 1px rules | 70 + 7 × 12 words | P09 `sp-reveal--wipe`; list `sp-stagger` |
| 7 | `front-fees` | membership in two plans | pine-deep side panel + 2 **plan cards** (ref campaign): card A stone "Full membership" **$3,600 / year**, card B tan "Season ticket" **$1,200 / April–October, weekday mornings**; each: label dot + name, 2-line text, dotted feature list (5 lines), big price Cormorant 400 4.5rem nowrap; right panel text: "Joining fee $1,500, once. Guests $95 with a member." + link "All fees →" | 80 words | cards `sp-stagger` + `sp-reveal--up` |
| 8 | `front-stories` | three member stories | stone sheet: left a **circular** photo crop **P11** (440px circle, ref circular crop near "works"); right 3 stories as ruled entries: italic pull line (Cormorant italic 1.5rem) + 30-word summary + "Read →" | 3 × 40 words | circle `sp-reveal--wipe` |
| 9 | `front-journal` | club notes | stone; label "JOURNAL / From the club office"; Query Loop 3 latest posts, 3 columns, featured images 3:2 `--sm` ticket mask (posts use P12, P13, P14), date + title | Query Loop | parent `sp-stagger` |
| 10 | `front-visit` | close: request a morning | pine; left: H2 "Come for a morning.", 50 words, address, hours (3 lines), brass outline button "Request a morning" → Morning sheet page; right **P10** clubhouse veranda in `--lg` ticket frame (mirror of the hero) | 50 words | text `sp-reveal--up`; P10 `sp-parallax --sp-par:6%` optional |
| — | footer | | ink ground, wordmark, address, hours, nav, small crest | | none |

English home ≥ 300 words, narrative paragraphs in #2, #4, #6 and #10 (≥3 required). CJK home ≥ 500 characters.
Home photo positions: P01, P03, P02, P04, P06, P07, P05, P08, P09, P11, P12, P13, P14, P10 = **14** (≥8), no repeats.

### Comparison with recent home pages
| # | Mugi Bakehouse | Kanjo College | Sokuten Survey | Tayori Nursing | **Misora Links** |
|---|---|---|---|---|---|
| 1 | hero scene | window hero | accordion photo strip | pebble hero | **split: ticket-notch photo left, cropped giant word right** |
| 2 | street | intro prose + portrait | sites | statement | **morning-sheet rail on rounded sheet** |
| 3 | 2 loaves | 4 paper cards | hour figures | problem | **3 rounds in ticket frames** |
| 4 | 4 loaves | 12-week row | parallax ground | sticky heading + cards | **full-bleed parallax course + count figures** |
| 5 | oven-day band | parallax study room | owners vs builders | morning round | **ruled 01–04 season rows on ink** |
| 6 | full-bleed counter | lecturers ledger | takeaway | care plan card | **starter portrait + ruled name list** |
| 7 | standing order | fee table | fee table | fee card | **two plan cards with dotted lists** |
| 8 | neighbours 3-col | 3 stories | notes list | stories | **circle photo + 3 ruled stories** |
| 9 | day book rows | taking a place | FAQ | people list | journal |
| 10 | visit close | news rows | request band | celadon call band | **visit close, mirrored ticket frame** |
Why not alike: no other recent home opens split-screen with a dark ground, none has a horizontal rail or a notched frame, none puts a cropped display word on the first screen. Fees are plan cards (not a table), people are a ruled text list beside one portrait (not a grid), and the booking content comes in block 2 (booking-led), not near the end.

---

## 6. Inner pages (≥8; all use the T2 page head: pine band 560px desktop, cropped page word top-left, vertical column, H1 xx-large bottom-left, ticket photo right as in the reference orientation)

1. **Rounds** (`/rounds/`): the day from 06:40 to 16:30 as a T3 rail (6 cards: Morning sheet 06:40–09:00, Members' second nine 09:30, Walk-up 11:30, Junior hour Saturday 15:00, Twilight nine 16:00, Last tee 16:30/14:00); three round types with `--md` frames (P06, P07, P05) and fees; rules of play (dress, pace 4 h 10 min, carry bags only on weekend mornings).
2. **Morning sheet** (`/morning-sheet/`, booking page): T3 rail of the 15 times; Thursday/Friday timeline in ruled rows (opens Thu 18:00, draw Fri 12:00, results 13:00); request form (name, member number or host member, date, preferred time, players 1–4, caddie yes/no) below the rail; cancellation: by 18:00 the day before.
3. **Season booking** (`/season/`): ruled rows 01–04 (31 Jan, Saturday walks in Feb, first Tuesday of March, 1 April) each 80 words; what to bring; P14 head, P12 in body.
4. **Membership & fees** (`/membership/`): two plan cards; **full fee table** (8 rows, section 9); what members do (sheet, work mornings, committee).
5. **The Course** (`/course/`): 18-hole T3 rail; greens and dunes care with P13 `--md` and `sp-reveal--wipe`; seasons; head uses P08, body uses P13 and P02 (no image twice on the page).
6. **About / History** (`/about/`): "1961" head with P16; history rail (4 cards); club values (no claims); the committee.
7. **People** (`/people/`): P09 portrait + all 7 people ruled with 40-word bios; caddie master's note on how caddies are assigned.
8. **Visit & contact** (`/contact/`): P10 head; address, hours, office hours, how to arrive (coast road, 12 bicycle stands, parking 40 cars), contact form, mail address `office@misoralinks.example`.
9. **Journal** (`/journal/`, posts page, empty content) + **article** (single), **category**, **tag** (`templates/tag.html`), **newsletter** (page-newsletter: monthly club letter signup, 60 words) — screens: news & newsletter → journal list, article → first post, category → "Course notes", tag → "greens".
Demo posts (6, with categories Course notes / Club life / Season and tags): "Greens hollow-tined this week" (P13), "The draw, explained" (P12), "First frost on the fairways" (P14), "Junior hour returns" (P15), "New starter's box" (P03), "Season 2027 applications open" (P16). Home shows the 3 latest = P12, P13, P14.

---

## 7. Responsive

- **390px first screen**: header bar 64px on top; then P01 ticket frame full width minus 16px gutters, ratio 0.78:1 (tall), bites 16/11; then "Misora" `5.25rem` **not cropped** (normal flow), then the vertical column rendered **horizontal** (normal paragraph, italic), lead, H1 2rem, button. No vertical text, no absolutely positioned labels or crest over text (crest hidden <782px, re-shown in footer). Bottom bar is not used on mobile.
- 782–1099px: split kept 50/50, display word `clamp` ~8rem, vertical column hidden (shown horizontal under the word), menu button.
- Rails: on mobile cards 78vw, snap, progress bar kept; sheet margin 12px, padding 22px.
- **Fee table** (Membership page): at ≥782px full content width (`alignwide` 1200px), price column `white-space: nowrap; text-align: right`, never cut; columns: Item / Note / Price. <782px every table stacks (each row a block: item, note, price right on its own line). auto-gates checks 800 and 1280.
- Ruled rows: <782px numeral above title, text under, full width.
- Plan cards stack <782px; prices `nowrap`, size 3.25rem.
- No horizontal overflow at 390 / 1280 (rails scroll inside their own box).

---

## 8. Scroll effects (sp-scroll) and parallax

Reference: GSAP ScrollTrigger + Lenis. We map to sp-* only (copy `pipeline/assets/sp-scroll/` unchanged; variables: `--sp-dur: .5s` (ref 0.5s fades), `--sp-dist: 20px`).
| Effect | sp-* | Where | Ref trigger / time / easing |
|---|---|---|---|
| Block fade + rise in delay steps | `sp-reveal sp-reveal--up` + parent `sp-stagger` (0.12s steps) | #2 sheet, #3 round columns, #5 rows, #6 list, #7 cards, #9 posts, #10 text; inner: ruled rows, plan cards | ScrollTrigger enter, 0.5s ease-out, delays 0.5/0.7/1s |
| Mask wipe on photos | `sp-reveal sp-reveal--wipe` (1.1s cubic-bezier(.77,0,.175,1), clip on child) | #6 P09, #8 P11 circle; inner: Course P13, People P09 | mask-position wipe 1.5s cubic-bezier(.3,0,0,1) |
| Photo drift inside frames (**parallax, required**) | `sp-parallax` | hero P01 (`--sp-par: 6%`, mobile 6%), **#4 course Cover P08 (`--sp-par: 10%`, mobile `8%`)**, #10 P10 6% | scroll-scrubbed photo drift, linear |
| Figures | `sp-count` | #4 figures (18, 70, 5,980, 640) | none in ref (added, small) |
Parallax detail (primary = #4): wrapper Cover `sp-parallax`, background `.wp-block-cover__image-background` = P08 moves; foreground (label, H2, text, figures) is in the Cover inner container, never in the moving layer. Hero: `.ml-ticket.sp-parallax > img` (P01) moves, frame mask stays still — matches the ref photo drifting inside its frame. Keep on mobile. Verified by `check-parallax.mjs` (≥6px desktop and mobile, 0 under reduced-motion).
Rules: no sp-reveal in the hero; none on rails' children, forms, the fee table or legal text; `.sp-reveal` count ≤60% of home blocks' elements as per spec.

---

## 9. Fixed numbers (identical on home, inner pages, five languages)

Fees (USD):
| # | Item | Price |
|---|---|---|
| 1 | Full membership, per year | $3,600 |
| 2 | Season ticket, April–October, weekday mornings | $1,200 |
| 3 | Country membership (living over 60 km away), per year | $1,800 |
| 4 | Joining fee, once | $1,500 |
| 5 | Guest round, 18 holes, with a member | $95 |
| 6 | Guest twilight nine, with a member | $55 |
| 7 | Caddie, 18 holes | $70 |
| 8 | Junior round (under 18) with a member | $25 |

People (7): **Tomas Reyes-Hale**, head starter (since 1998); **Ingrid Solberg**, club secretary (runs the sheet and the draw); **Amadou Diallo**, course manager; **Niamh Corrigan**, caddie master; **Priya Raman**, club professional; **Walter Okonjo**, club captain 2026; **Lucía Ferreira**, junior organiser.
Stories (3): "The 06:40 four" (four neighbours on the same Saturday time since 1987); "A first medal round at seventy-one" (a member who joined at 68); "Learning the dunes" (Niamh's first season carrying for her grandfather's four).
Season flow (4): 01 Write by 31 January · 02 Walk the course with a member, Saturdays in February · 03 Committee, first Tuesday of March · 04 Season opens 1 April, first sheet that Thursday 18:00.
Morning sheet flow (5 rail cards): 01 Thursday 18:00 the sheet opens · 02 Friday 12:00 the draw (results 13:00) · 03 06:20 the starter's box opens · 04 06:40 first call · 05 11:30 cards in, afternoon walk-up.
Location / hours: see header facts. Course facts: 18 holes, par 70, 5,980 m, founded 1961, 640 members.

---

## 10. Images (16, real photography, IMAGERY = photo, low-key)

**STYLE** (one string, every image):
`Low-key documentary photograph, real location, first light or dusk, soft directional low sun, deep but open shadows, muted desaturated greens and blue-grey sky, gentle mist, natural skin tones, 35mm lens, shallow depth of field, fine film grain, calm unposed moment, international modern setting, diverse people, no text, no lettering, no logos, no brand marks, no Japanese elements`

| # | Subject and composition | Ratio | Used on (home marked ★) |
|---|---|---|---|
| P01 | First tee at dawn: older starter at a wooden starter's box holding a clipboard (side), a member bending to tee a ball (centre), a caddie lifting a carry bag onto the shoulder (right), mist on the fairway behind; vertical composition, people in lower 60% | 4:5 (crop tall) | ★ hero; Morning sheet body |
| P02 | Dew on the first green at dawn, mower stripes, a greenkeeper with a walk-behind mower far back | 0.62:1 | ★ #2 rail; Course body |
| P03 | Starter's box window, a clipboard with an illegible pencilled sheet (blurred, no readable text), a thermos, low light | 0.62:1 | ★ #2 rail; journal "New starter's box" |
| P04 | A four-ball walking away down the first fairway into mist, caddie with bag | 0.62:1 | ★ #2 rail; Morning sheet head |
| P05 | Caddie from behind shouldering a carry bag on a dune path, morning | 3:4 | ★ #3; Rounds body |
| P06 | Two members on a fairway mid-distance, early light, pines | 3:4 | ★ #3; Rounds head |
| P07 | Member and guest shaking hands on the 18th green, low evening sun | 3:4 | ★ #3; Rounds body |
| P08 | Wide course landscape: fairway between dunes and old pines, low mist, dawn sky | 21:9 | ★ #4 parallax; Course head |
| P09 | Portrait of the head starter (older man, flat cap, waxed jacket) at the box, side-lit | 0.65:1 | ★ #6; People head |
| P10 | Clubhouse veranda at dawn, lamps on, wooden benches, bags on a rack | 0.65:1 | ★ #10; Visit head |
| P11 | Junior golfer with a grandparent on the practice green, late afternoon | 1:1 (circle) | ★ #8; People body |
| P12 | Bag room: carry bags in wooden racks, low window light | 3:2 | ★ #9 (post "The draw, explained"); Season body |
| P13 | Greenkeeper raking a bunker at sunrise | 3:2 | ★ #9 (post "Greens hollow-tined"); Course body |
| P14 | Frost on a fairway, a flag pin, winter morning | 3:2 | ★ #9 (post "First frost"); Season head |
| P15 | Blank scorecard and pencil on a wooden bench by the 1st tee (card blank, no print) | 3:2 | Membership head; post "Junior hour returns" |
| P16 | 18th green seen from the clubhouse window, members putting at dusk | 3:2 | About head; post "Season 2027 applications open" |

Each ≤300 KB WebP, ≤2000px. Generate with `IMAGE_STYLE="<STYLE>" scripts/grok-image.sh out.webp "<subject>"`, one at a time; read each one; regenerate any with text, logos, broken faces or hands, or off-grade colour (too saturated greens will fail the first-screen gate). No cut-outs. No page shows the same image twice (P01 on Morning sheet only in the body under a head of P04; P11 not used for a post).

---

## 11. Home acceptance checklist

1. 1440×900 `?sp-static`: all six KV items visible; ticket frame shows 4 corner bites + 2 mid-edge bites + broken inner line; "Misora" cut by the top edge; vertical column vertical; bottom bar with hairline.
2. `check-first-screen.py --max 15` passes (target 6–12%).
3. 390px: no vertical text, no overlapping labels, photo first, word uncropped; no horizontal overflow at 390/1280.
4. Morning-sheet rail: rounded sheet on pine, next item peeks, two-tone bar, "Scroll →", scrolls horizontally with trackpad and touch; rail children carry no sp-reveal.
5. Course Cover moves with `sp-parallax` (≥6px desktop and mobile), foreground static; hero photo drifts in its frame; `check-parallax.mjs` pass; reduced-motion 0.
6. Fees on home = $3,600 / $1,200 / $1,500 / $95 = Membership page table = all languages.
7. ≥8 photos on home (14 planned), none repeated; journal shows 3 posts with images.
8. One menu only; header bar is the hero bottom bar on desktop home.
9. Fonts: Cormorant Garamond + EB Garamond via theme.json fontFace; editor = front end (check-editor-fonts.mjs), Noto Serif TC/JP for zh-TW/ja headings.
10. auto-gates pass (`… en gates/en.json 1 1`), theme.json max size ≥4.25rem, no CSS `content:` text.

---

## 12. Similarity target (≈80%) — reference vs ours

| Dimension | Reference value (token) | Misora Links value |
|---|---|---|
| Ground colour | brown `#5E453D` ~58% of first screen (a) | pine `#3E5346` ~55% (hue changed for golf, same L/S band) |
| Text on dark | sand `#E8E2D4` (a) | `#E8E2D4` |
| Sheet / tan / accent / ink | stone ≈`#E2DFD8`, `#CDBE9F`, `#B8956A`, `#201F1D` (a) | `#E3E5DD`, `#CDBE9F`, `#B8956A`, `#201F1D` |
| Saturated share, first screen | ≈12%, photo only (a) | 6–12%, photo only (gate 15) |
| Frame inset | 23px (c) | 23px |
| Container | 1380 @1440 (c) | 1380 @1440 (wide 1200 for text) |
| Photo frame | 510×789, 0.65:1, concave notched corners, 1px inner line (d)(f) | 677×788 desktop / 0.65:1 inner heads + mobile 0.78:1, corner bites 28px + mid-edge 18px, 1px line inset 10 |
| Display line | ~170px, cropped top edge (b) | 13rem = 208px Cormorant 300 italic, cropped top edge |
| Vertical copy | 5 lines at x 730 (f) | 4 lines at x 724 |
| Body type | 14px / 1.8, ls .02em (b) | 1.0625rem / 1.8, ls .02em (serif Latin needs size) |
| Sheet H2 | ~32px / 1.6 serif (b) | 2rem / 1.6 Cormorant 500 |
| Section label | wide caps 18px + slash + sub-label (b) | EB Garamond caps 0.8125rem ls .22em + " / " + italic sub-label |
| Sheet radius / padding / gap | 10px / 38px / 40px (c)(d) | 10px / 38px / 40px |
| Buttons / small radius | 2–5px (d) | 4px |
| Rows | ~155px tall, 1px sand rules, pale 48px numerals at 20% (c)(f) | 155px, 1px sand 28%, 3rem (48px) numerals at 22% |
| Progress bar | 4px two-tone under rail (f) | 4px, `#2E3D33` on `#CDBE9F` |
| Shadows | none (d) | none |
| Load wipe | clip-path inset 0.8s cubic-bezier(.76,0,.25,1) (g) | identical (hero CSS) |
| Fades | 0.5s ease-out, delays .5/.7/1s (g) | hero same; sp-reveal `--sp-dur .5s` + 0.12s stagger |
| Photo wipes | 1.5s cubic-bezier(.3,0,0,1) (g) | sp-reveal--wipe 1.1s cubic-bezier(.77,0,.175,1) (fixed in sp-scroll) |
| Rail | pinned, scroll-scrubbed (g) | native horizontal scroller + scroll-timeline bar (no pin, no JS) |
| Photo drift | scrub inside frames (g) | sp-parallax 6% hero, 10% course |
| Imagery | calm garden photography, shallow depth (e) | low-key dawn golf photography, shallow depth |
| Decoration | crest stamps, contour texture (f) | own crest SVG, own contour SVG at 6% |
Own material only: photos generated, copy written, crest and contour lines drawn; no reference text, image or logo.
