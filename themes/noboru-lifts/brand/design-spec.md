# Noboru Lifts: design spec (stage 1, binding for implementation)

Slug `noboru-lifts`, type `landing`, office lift inspection and maintenance contractor, row b21-5, five languages (en, zh-TW, ja, fr, de). Goal of the home page: one booking of one inspection hour.

Reference (only one): Ando Hazama renewal landing page, https://www.ad-hzm.co.jp/lp/renewal/. Evidence: `ref/hzm-first.png`, `ref/hzm-about.png`, `ref/scroll-hzm-asset-before.png`, `ref/scroll-hzm-asset-after.png`. Tokens: `reference-tokens.md`, cited as `[tok a]` to `[tok g]`. We borrow structure, technique, values and the key-visual concept. We copy no photo, drawing, copy or logo.

**Decisions that change stage-a.md (this spec wins):**
1. **Colours are the reference's own values**, not stage-a's cooler mapping (ink `#2F3437`, paper `#F6F7F7`, band `#E1E5E7`). Nothing about lifts justifies changing them. The row's slate `#626E78` stays as a supporting role.
2. **The CTA cell keeps the reference gradient** `#1B7A74` to `#1A5F86` [tok a], not stage-a's flat teal. It is the single colour moment and it is about 3% of the first screen.
3. **Hero headline is 84 px [tok b], not 118 px.** At 118 px two lines need about 1170 px and run into the notice card, which starts at x = 934. At 84 px "Every lift, checked" is about 830 px and clears it.
4. **The photo-frame swap inside a card is dropped.** The next card sliding over the pinned one carries the same effect, and the sp-* set has no progress-linked swap. So `sp-reveal--zoom` is not used either.
5. **Header shrink is pure CSS** (`animation-timeline: scroll()`, section 8). stage-a's "sp-reveal" mapping does not fit a header, and a scroll listener is forbidden.
6. **Serif micro labels become Instrument Sans**: `font_direction` is sans [tok b, f]. Same size, same caps, same boxes.
7. **Row fields `hero: diagonal-split` and `first_screen: centered-narrow-column` give way to the reference key visual**, as the row note orders ("translate the reference hero concept"). The first screen does keep a diagonal reading line: nav top-right, card bottom-right, headline bottom-left.

---

## 0. Fixed facts (home, inner pages and all five languages use exactly these)

| Fact | Value |
|---|---|
| Name | Noboru Lifts |
| Founded | **2011** |
| Place | 14 Wharf Row, Easterhaven (fictional, not given a country) |
| Phone / email | +1 555 0142 / book@noboru-lifts.example |
| Audience | Facilities managers and owners of office buildings of **4–12 floors** |
| Office hours | Mon–Fri **07:00–17:00** |
| Inspection slots | Mon–Fri, starts **07:00** or **18:00**, one hour, outside the building's busy times |
| Fault call-outs | Mon–Fri **07:00–19:00** |
| Next free slot (notice card) | **Tuesday, 07:00** |
| The visit | **60 minutes** per lift, **2 technicians**, **5 stops** (landing, car, pit, machine, lobby), **32-point** paper checklist, written report in **2 working days** |
| Team | **7** people (below) |
| Currency | **USD** in every language; no converted prices |

**The hour (3 phases, same everywhere):**
1. **Arrive**, minutes 0–10: meet the building manager, sign in, stand the notice at the landing, take the lift out of service.
2. **Inspect**, minutes 10–50: the five stops, the 32-point checklist on paper.
3. **Report**, minutes 50–60: return the lift to service, go through the findings with the manager on paper. Written report follows in 2 working days.

**Fees (6 items, USD, excl. tax):**
| Item | Price |
|---|---|
| Inspection hour, first lift | $240 |
| Each further lift, same visit | $140 |
| Door adjustment visit | $320 |
| Monthly service agreement, per lift | $190 / month |
| Fault call-out, within call-out hours | $280 |
| Written second opinion on a quote | $180 |

The 32-point checklist and the written report are included in the inspection hour. An inspection hour is not a statutory examination, and this is stated in `/fees/` and `/terms/`.

**People (7):**
| Name | Role |
|---|---|
| Ines Varga | Founder, lead inspector |
| Kofi Mensah | Senior technician, doors |
| Naledi Dube | Senior technician, controllers |
| Arjun Menon | Technician, machine rooms |
| Marek Lindqvist | Technician, pits and rails |
| Samira Haddad | Report writer |
| Elena Castellano | Office and scheduling |

**Stories (3, fictional buildings, no percentages or savings figures):**
1. **Alder House**: 9 floors, 2 lifts, manager Priya Nair. A door that hesitated on floor 6 was traced to a worn sill guide.
2. **Foundry Court**: 6 floors, 1 lift, converted warehouse, manager Daniel Osei. An old lift with no paperwork gets its first written record.
3. **Meridian Yard**: 12 floors, 3 lifts, manager Lucia Ferrante. Three lifts inspected over one early morning, one at a time, so a lift stayed free for early staff. It takes three 60-minute slots across two mornings.

**A day (for brand.md, contract word "day"):** the daily routine starts at 06:30 at Wharf Row, vans out by 06:40, first lift out of service at 07:00, reports written in the afternoon, the second round at 18:00.

Copy rules: no guarantees, no invented statistics, no awards, no real brands. All copy is a calm account, in the voice of a person who has done this for years.

---

## 1. Signature techniques (three, all obvious at a glance)

### T1. Sticky visit cards on a ruled grey band (reference ASSET cards, https://www.ad-hzm.co.jp/lp/renewal/, `ref/scroll-hzm-asset-before.png`, `-after.png`)
- **Reference:** a grey grid band inset from the page edges with 1 px side rules. A 1200×528 split card with a 1 px ink border: photo flush left, text right. A boxed "ASSET 01" tab hangs in the top-right corner, flush with the card edge. The card pins, and the next one covers it.
- **Used in:** home block 3 `#visit`, three cards Arrive / Inspect / Report.
- **Band (1440):** full height of the block, left and right inset 36 px from the frame [tok c], ground `#E4E4E4` with a 24 px grid: two `linear-gradient`s of `rgba(62,58,57,.05)` 1 px lines [tok a]. 1 px ink rule on both side edges. Padding 150 top, 150 bottom.
- **Card:** width 1200, height 528, centred, 1 px `#3E3A39` border, radius 0, no shadow, opaque `#E4E4E4` ground so the card below is fully covered. Grid `528px 1fr` [tok c, e].
- **Photo:** 528×528, 1:1, flush to the left, top and bottom, `border-right: 1px solid #3E3A39`.
- **Text column:** padding-left 72, padding-right 72, measure ≤ 520 [tok c], vertically centred. T2 headline, then body 1rem/2.0.
- **Tab:** 112×50, top-right, flush with the top and right card edges, 1 px borders on left and bottom. "STEP" 12 px caps + "01" 32 px Instrument Sans 600 [tok f]. A real paragraph in the block markup, never CSS `content`.
- **Sticky:** `position: sticky; top: clamp(72px, calc((100svh - 528px) * .56), 210px)` (210 at 900 tall [tok c]; the clamp protects short laptops). Cards are siblings in one wrapper, `margin-bottom: 200px`, last 0, ascending `z-index`. No ancestor may use `overflow: hidden`; use `clip`.
- **Must not be diluted:** the card stays exactly split at 528, the ink border stays, radius stays 0, no shadow, the grid is visible on the band, the side rules stay, the tab hangs in the corner, and the cards really pin at ≥ 960 px. Do not reduce the third card's pin by shortening the band.

### T2. Headlines on solid ink strips (reference asset titles, same URL, same screenshots)
- **Reference:** each headline line sits on its own solid ink strip, white type, strips stack with a small gap and vary in width with the text.
- **Used in:** every H2 on the home page and every inner H2. Hero H1 and inner page H1 stay plain ink, as in the reference.
- **Geometry:** H2 markup holds one `<span class="nl-strip">` per line, each `display: inline-block`, `background: #3E3A39; color: #FFF`, padding `.08em .22em`, `margin-bottom: 8px`, one `<br>` between. 2.125rem (34 px), Instrument Sans 700, line-height 1.25, letter-spacing .02em [tok b]. Block 2 uses the same strip at 3.5rem.
- **Languages:** the strips are block markup, so each language sets its own line breaks; 1–3 strips per H2. `box-decoration-break: clone` on the span covers unexpected wrapping.
- **Must not be diluted:** strips stay solid `#3E3A39` at 100% opacity, one per line, hugging the text (never a full-width bar), no radius. Never white strips with dark type: that is what `nagi-imaging` did.

### T3. Open paper first screen (reference first screen, same URL, `ref/hzm-first.png`)
- **Reference:** a hairline frame around the whole viewport; boxed ruled header cells with sideways micro tabs; open paper; wide-tracked Latin eyebrow and a huge bold headline cut by the fold at bottom-left; a notice card flush bottom-right with a vertical tab and arrow cell.
- **Used in:** home first screen (section 3). A compact version opens every inner page.
- **Must not be diluted:** paper stays open (no band or photo behind the row), the headline's descenders really are cut, the notice card sits flush against the frame at right and bottom, and all header cells are ruled.

### Global frame (part of T3, every page)
`body::before` with `content:""`: `position: fixed; inset: 12px; border: 1px solid #3E3A39; pointer-events: none; z-index: 90`. Corner ticks 9 px crosshairs via `body::after` gradients: top-right `#1A5F86`, bottom-left `#1B7A74` [tok d]. Same ticks at the top-right and bottom-left of the intro photo and T1 cards. Phone: inset 6 px, ticks hidden.

### Continuation to inner pages
| Page | T1 | T2 | T3 |
|---|---|---|---|
| The Visit | Three full cards, 800 extra words of detail, different photos | Yes | Compact head, card "60 minutes" |
| Buildings | Three story cards, tabs "CASE 01–03" | Yes | Compact head, card "4–12 floors" |
| Fees | One non-sticky card: what is included, tab "FEES" | Yes | Compact head, card "From $240" |
| About | Founder card, tab "2011" | Yes | Compact head, card "7 people" |
| Contact | Booking card, tab "BOOK" | Yes | Compact head, card "Next free slot" |
| Slot List | Sign-up card, tab "LIST" | Yes | Compact head, no card photo |
| News, post | none | H2 in post content | Compact head; post cards use the notice-card shape |

**Compact head:** paper, height 360, eyebrow + H1 at bottom-left (`clamp(2.75rem, 5vw, 4.25rem)`, descenders cut by the head's bottom hairline), notice card 494×132 flush bottom-right. Legal and Thanks: eyebrow and H1 only, no card, no photo, no descender cut.

---

## Key visual concept

### (1) Reference first screen
- **Concept:** a row of isometric colour-pencil buildings drifts left across open paper, each one a building being renewed. It sits between a boxed header and a huge headline cut by the fold.
- **Story:** "making the building's next chapter". Every building is a case; the renewal is quiet, patient and specific.
- **Signature motion:** the row drifts left continuously and slowly, linear, and the first screen never stops moving. Then cards pin and swap on scroll, and the header shrinks after the hero [tok g].

### (2) Our translation
Same composition, same motion, same open paper: **one inspection hour told as a row of lift stops drifting left**. Where the reference shows building after building, we show stop after stop of a single visit, in visit order: the landing, the car, the pit, the machine, the lobby. The largest is the row's signature picture: a technician kneeling at an open landing door in a quiet lobby, a paper checklist beside one knee.

Image type: `IMAGERY: photo`, per stage-a.md. The reference's hero drawings are its only drawn element; every content block there is a documentary photo [tok e]. Our row is low-key documentary photographs with square corners, placed with the same uneven sizes, wide gaps and frame-cropped ends as the drawings, so it still reads as objects floating on paper and not as a gallery strip.

### (3) KV checklist (all built in the first screen, all visible at 1440×900)
| # | Reference element | Our equivalent | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Drifting row of building drawings | Five low-key stops of different sizes, wide gaps, cropped at both frame edges | Centre band, y 150–740 | Drift left, 72 s linear loop (`sp-marquee`), `sp-parallax` on the band | P01–P05 |
| 2 | Huge bold headline cut by the fold | "Every lift, checked / on a quiet hour." two lines, 84 px bold | Bottom-left, flush with the frame, descenders cut | Static | none |
| 3 | Wide-tracked Latin eyebrow | "LIFT INSPECTION & SERVICE", 22 px, .6em tracking | Directly above the headline | Static | none |
| 4 | Notice card with vertical tab | Card "Next free slot / Tuesday, 07:00", vertical tab "NOTE 01", arrow cell | Bottom-right, flush with the frame | Arrow nudges on hover only | P06 |
| 5 | Hairline frame, ticks, boxed nav cells, sideways tabs | 1 px frame inset 12 px, crosshair ticks, three stacked anchor cells, tabs "COMPANY" and "NAVIGATION" | Whole viewport; header top | Header 132 to 48 after the hero | none |
| 6 | Single gradient CTA cell | "Book an inspection" cell | Header far right | Static | none |

Every image here is on the list in section 9.

---

## 2. Colour [tok a]

| Role | Hex | Source | Use | Page share |
|---|---|---|---|---|
| Paper | `#F9F9F9` | ref paper | ground, with faint grain (inline SVG `feTurbulence` ≤ 4% opacity) | 62% |
| Band | `#E4E4E4` | ref grey band | T1 band, block 9, 24 px grid | 15% |
| Ink | `#3E3A39` | ref ink | text, rules, strips, footer | 10% |
| Slate | `#626E78` | row hex | secondary text on paper (4.96:1), filled tabs in block 7 note, form focus | ≤ 5% |
| Accent gradient | `#1B7A74` to `#1A5F86`, 45deg | ref CTA | header CTA cell, form submit, nothing else | ≤ 3% |
| White | `#FFFFFF` | ref strip type | type on ink and gradient | — |

- Contrast: ink on paper 10.67:1, ink on band 8.84:1, white on ink 11.24:1, white on the gradient ≥ 5.14:1. **Slate on band is only 4.11:1: never set small slate text on the band; use ink.**
- Theme.json palette slugs: `paper`, `band`, `ink`, `slate`, `accent-a` (`#1B7A74`), `accent-b` (`#1A5F86`), `white`. Gradient preset `cta`.
- First-screen saturated cap: reference under 5% [tok a], row maximum 30%, common rule 15%. **Target under 5%, hard limit 15%** via `scripts/check-first-screen.py`. The photos must stay desaturated grey-blue for this to hold.
- No beige. No colour fields. No gradient outside the two uses above.

## 3. Type (font_direction **sans**) [tok b]

Fonts load through `theme.json` `fontFamilies` + `fontFace` only, so editor and front end match. Include the zh-TW and ja display subsets (Noto Sans TC / JP 700) as fontFace too. Use the Hokuto/Hada subsetting workaround; the Chinese subset script is known to be broken. `style.css` has `:lang(` rules, so copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and require it. `check-editor-fonts.mjs` must pass.

| Use | en / fr / de stack | zh-TW stack | ja stack |
|---|---|---|---|
| Display | `"Instrument Sans", sans-serif` | `"Instrument Sans", "Noto Sans TC", sans-serif` | `"Instrument Sans", "Noto Sans JP", sans-serif` |
| Body | `"Albert Sans", sans-serif` | `"Albert Sans", "PingFang TC", "Microsoft JhengHei", sans-serif` | `"Albert Sans", "Hiragino Sans", "Yu Gothic", sans-serif` |

The zh-TW and ja body stacks use system fonts: the repo gate forbids bundled CJK families in the body stack. No serif or mincho anywhere.

| Element | Size | Weight | Line-height / tracking | Source |
|---|---|---|---|---|
| Hero H1 | `clamp(2.75rem, 5.84vw, 5.25rem)` (84 px at 1440; theme max) | 700 | 1.08 / -.01em | tok b ~84 bold |
| Inner H1 | `clamp(2.75rem, 5vw, 4.25rem)` | 700 | 1.1 | tok b |
| Eyebrow | `clamp(.75rem, 1.53vw, 1.375rem)` (22 px) | 500 | 1.2 / .6em (.3em under 782), uppercase | tok b |
| H2 strip | 2.125rem (34 px); block 2 3.5rem | 700 | 1.25 / .02em | tok b |
| H3 | 1.375rem | 700 | 1.5 | scale |
| Body | 1.125rem (18 px); in cards 1rem | 500 | 2.0 | tok b |
| Nav | .9375rem (15 px) | 700 | 1 | tok b |
| Micro tabs | .6875rem (11 px) caps, sideways | 600 | 1 / .06em | tok f |
| Card tab numeral | 2rem + .75rem label | 600 | 1 | tok b |

Theme.json sizes: small .9375, base 1.125, medium 1.375, large 2.125, x-large 3.5, xx-large 5.25rem. zh-TW and ja: headings about 0.75× (H1 ≈ 3.95rem, inner ≈ 3.2rem), body line-height 1.85. fr and de: `hyphens: auto`; check that the German H1 fits two lines left of the notice card at 1280.

## 4. Spacing, border, ornament [tok c, d, f]

- Radius 0 everywhere, including buttons and inputs. No shadows. Borders 1 px ink.
- Container 1200. Section padding 150 top and bottom (96 under 782). Text measure ≤ 520 in columns.
- **Sideways tab:** 14×(text length + 16) box, 1 px ink border, `writing-mode: vertical-rl`, hanging from a card or frame edge. Markup text, never `content`. **Desktop (≥ 960) only**; under 960 it becomes a normal inline label or is removed.
- **Button:** outline box, 1 px ink, height 60, label left (padding 0 20), split arrow cell 60 wide with a 1 px left rule [tok f]. Hover: arrow cell fills ink, arrow turns white, 200 ms ease. The header CTA and form submit use the gradient cell instead. No other button style.
- **Focus:** `outline: 2px solid #1A5F86; outline-offset: 2px` everywhere.

---

## 5. Home page (en; ≥ 250 words required, target ≈ 520; ≥ 3 narrative paragraphs: blocks 2, 3, 5, 6)

### Header (one top menu only; anchors + one CTA, landing rule)
Grid inside the frame, 1 px ink bottom rule.
- **Tall state (first screen, 132 px):** tab "COMPANY" (sideways) on the far left; wordmark "Noboru Lifts" Instrument Sans 700 1.75rem with a one-line descriptor "Lift inspection & service" .8125rem; to the right a sideways tab "NAVIGATION", then nav column 408 wide with **three stacked ruled rows** each 44 px: "The visit" `#visit`, "Buildings" `#buildings`, "Fees" `#fees`; then CTA cell 132 wide, full height, gradient, white "Book an inspection" 15 px 700, `#book`.
- **Compact state (48 px, sticky):** same element; the three cells go inline with 1 px rules, wordmark 1.125rem, no descriptor, no sideways tabs.
- **Mechanism:** section 8. On inner pages, links become `/#visit` etc. and the header starts compact, no tall state.
- **Under 960:** 56 px bar, wordmark left, ruled CTA cell, native Navigation overlay button right.

### First screen (1440×900)
Paper, `min-height: 100svh`, `overflow: clip`, no reveal.

Vertical: header 132; KV band; bottom strip 132 with a 1 px top rule on the card only.
1. **KV band** `sp-parallax`, `--sp-par: 10%`. Inner `.sp-parallax__layer` holds `.sp-marquee.nl-drift`, with two identical groups (second `aria-hidden="true"`, its images `alt=""`).
   - Sizes in order, `align-items: center`, gap 120, offsets by `margin-top`: P02 1:1 300×300 (+40), **P01 3:4 390×520 (0)**, P03 2:3 280×420 (-30), P04 4:3 400×300 (+50), P05 1:1 340×340 (-20).
   - Row starts at `margin-left: -80px`, so P02 is cropped by the left frame and P04 is cropped on the right, as in `ref/hzm-first.png`. P01 lands about x 480–870.
   - Motion: `html:not(.sp-no-motion) .sp-marquee.nl-drift > * { animation-duration: 72s }`. Always `.nl-drift { display: flex; overflow: clip } .nl-drift > * { flex: none; min-width: 100%; display: flex; gap: 120px; padding-right: 120px }`. Without this the two groups stack in `?sp-static`.
   - P01 `loading="eager" fetchpriority="high"`.
2. **Bottom-left:** eyebrow "LIFT INSPECTION & SERVICE", then H1 "Every lift, checked<br>on a quiet hour.", left edge flush with the frame (x = 12, no padding). Cut: wrapper `margin-bottom: -.14em`, hero clips, so only the descenders of "q" and "y" are cut.
3. **Bottom-right:** notice card 494×132, flush with the frame on right and bottom, 1 px border on top and left. Tab "NOTE 01" sideways, hanging from its top-left. Photo P06 198×132. Text: "NEXT FREE SLOT" 12 px caps, "Tuesday, 07:00" 1.375rem 700. Arrow cell 36×36 in the bottom-right corner. The whole card links `#book`.

The H1 is the page H1; no paragraph or second CTA here. Forbidden on the first screen: table, form, search box, centred text, any colour other than the CTA cell.

### Block order
| # | Pattern / anchor | Purpose | Layout and photos | Copy |
|---|---|---|---|---|
| 1 | `front-hero` | Promise, one hour | Above | ~20 words |
| 2 | `front-intro` `#about` | Why the lift, why quiet | Three columns on paper at 1440, as `ref/hzm-about.png`: H2 two strips 3.5rem "Nobody notices / a lift that works." + outline button "How a visit runs" → `/the-visit/`; centre portrait P07 384×576 (2:3) with sideways tab "ABOUT" at its left edge and ticks; right text column 380 wide in short paragraphs | 90 words |
| 3 | `front-visit` `#visit` | How the hour is spent | **T1** band, head line "One hour, three parts" as strips at the band's top-left of the container, then cards: STEP 01 Arrive P08, STEP 02 Inspect P09, STEP 03 Report P10 | 3 × 55 words |
| 4 | `front-buildings` `#buildings` | Which buildings it suits | Hairline checkerboard, full frame width, 3 columns × 2 rows of squares (about 472 px): row 1 photo P11, text, photo P12; row 2 text, photo P13, text. Text cells: "Offices of 4 to 12 floors", "Older lifts with thin paperwork", "Buildings that cannot stop by day". 1 px rules between all cells; text padding 48 | H2 + 3 × 40 words |
| 5 | `front-quiet` | Mood break, why 07:00 | Full-bleed `sp-parallax` band, 680 px, P14 as Cover background, `--sp-par: 10%`. Static white paper card 494 wide flush bottom-right of the band, sideways tab "NOTE 02", T2 headline "Why 07:00" and a paragraph. Text never on the moving layer | 70 words |
| 6 | `front-sheet` | What the 32 points are | Two columns: left P15 2:3 480×720; right H2 + narrative paragraph + 8 ruled rows, each one group name + point count (Landing doors 6, Car 5, Car doors 4, Pit 4, Rails and guides 3, Machine 4, Controller 4, Lobby and signs 2; total 32). Rows plain text, ruled 1 px | 110 words |
| 7 | `front-fees` `#fees` | Prices | Full container width table, the 6 fees exactly, 2 columns. Line under it: "32-point checklist and written report included." + outline button → `/fees/` | 30 words |
| 8 | `front-crew` | Who comes | P16 21:9 at full container width; H2 strips; 7 names as a ruled three-column **text list** (name + role), no portraits, no cards | 60 words |
| 9 | `front-stories` | Proof without numbers | Band `#E4E4E4` with grid, H2, 3 ruled text rows: left column building name + floors and lifts line, right column 45-word story and manager's name; arrow link → `/buildings/`. No photos | 3 × 45 words |
| 10 | `front-book` `#book` | The one conversion | A T1-shaped card, non-sticky, tab "BOOK": P17 left 528×528, form right: name, building, floors, email; single gradient submit "Book an inspection" → `/thanks/`. One line: "Or call +1 555 0142, Mon–Fri 07:00–17:00." | 25 words |
| 11 | Footer | Address, inner links | Ink ground, padding 96/48/110 [tok c]; wordmark, address, hours; anchors column; inner page column (The Visit, Buildings, Fees, About, News, Slot List, Contact, Privacy, Terms); sideways tab "COMPANY" | — |

Image positions on home: **17** (P01–P17, each once, plus the hidden marquee copy). ≥ 8 satisfied. The `aria-hidden` duplicate group is the marquee's mechanism and is not counted as a repeat.

Form mechanism: same as the Yukisaki Route `/trial/` page. No plugin required, and no sp-reveal on it.

### Comparison with recent homes
| # | Hashira | Ushio | Suji | Yukisaki | **Noboru** |
|---|---|---|---|---|---|
| 1 | Hero | Triple-panel hero | Twin-photo hero | Hero | **Drifting photo row on open paper, cut headline** |
| 2 | Vision statement | Split about | Problem | Who it suits cards | **Strip heading, portrait, short lines** |
| 3 | Giant marquee line | Route / piers | Thumbnail grid | Frosted statement | **Sticky split visit cards** |
| 4 | Case panels | Day band | Method bands | First week | **Hairline checkerboard of building types** |
| 5 | Stepped-bar buildings | Wide inset photo | Parallax proof | Parallax sheet band | **Parallax band with flush notice card** |
| 6 | Viewing rows | Crew split | Room | Trial card | **Checklist rows beside a tall photo** |
| 7 | Request | Fares | Visit table | Price table | **Fee table** |
| 8 | Footer | Story | Close band | Stories | **Crew as text list** |
| 9 | — | Access | — | Start card | **Stories on band, text rows** |
| 10 | — | Notices | — | — | **Booking card** |

Why not alike:
- No other recent home runs a drifting photo row on open paper, or pins cards.
- Hashira's marquee is giant type; ours is photos at normal speed, on the first screen only.
- Yukisaki's parallax band and "who it suits" cards are the nearest neighbours. Our suits block is a ruled checkerboard with no cards, and comes after the process, not before it.
- Ink strips, a viewport hairline frame and a corner-tab card appear in none of the four.
- `shizuka-hearing` had a sticky stack with a sticky title column on blue-grey, and `nagi-imaging` used white highlight strips: ours has no title column, inverted ink strips, and a split card with a hanging tab.

---

## 6. Inner pages (landing track, linked from the footer and in-page links)

Every page: T3 compact head, T2 H2s, closes with the outline button to `/#book`, except where noted. No sidebar.

| # | Page | Slug | Theme code | Head card | Content |
|---|---|---|---|---|---|
| 1 | The Visit | `/the-visit/` | extra | P09 | Three T1 cards, photos P01, P02, P03: the five stops in depth, what we ask of the building, what happens if a fault appears. 8 checklist groups as ruled rows. 500 words |
| 2 | Buildings | `/buildings/` | extra | P11 | The 3 stories in full as T1 cards with tabs CASE 01–03, photos P12, P13, P14. 200 words each. Then who a visit does not suit |
| 3 | Fees | `/fees/` | extra | P15 | Full fee table, T1 card "What is included" with P10, statutory note, how to read an invoice. 250 words |
| 4 | About | `/about/` | `about` | P07 | Founded 2011; T1 founder card P18 (tab "2011"); why paper; the 7 people as text list; a day at Wharf Row; P16 wide. 400 words |
| 5 | News | `/news/` | `news` (role `posts`, empty) | P02 | Post list in notice-card shape, 2 columns |
| 6 | Post | single | `article`, `category`, `tag` | post image | 3 demo posts: "What a paper checklist catches" (P15), "Why we start at seven" (P14), "Reading an old lift's logbook" (P05). Categories: Field notes, Notices. Tags: doors, paperwork, scheduling |
| 7 | Slot List | `/slot-list/` | `newsletter` | P17 | Early-slot waiting list: T1 card, P06 photo, name, building, email. Sign up to hear when a 07:00 slot opens. 120 words. Closes without a booking button |
| 8 | Contact | `/contact/` | `contact` | P17 | T1 card "Book or ask" P08, the same booking form, address, phone, email, hours, call-outs. 120 words |
| 9 | Privacy | `/privacy/` | extra | none | Plain text, no effects, no photo |
| 10 | Terms | `/terms/` | extra | none | Plain text, including the statutory note |
| 11 | Thanks | `/thanks/` | extra | none | Plain text; what happens next: reply within 1 working day |
| 12 | 404 / search | templates | — | none | Eyebrow, H1, outline button home |

- Reachable pages: 11 + posts; ≥ 9 satisfied. Also add `templates/tag.html`, `screens.*` for all 8 codes, and exactly one `posts` page.
- Reply time: **1 working day**. Add it to the fixed facts wherever a reply is mentioned.

---

## 7. Responsive

- **390 px first screen:** one column, normal flow, **no sideways or absolutely positioned label anywhere over text**. Order: header 56 → KV band 240 tall with P01 at 180×240 and the others scaled 0.46 → eyebrow (.75rem, .3em, wraps allowed) → H1 2.75rem, up to 4 lines, **not cut** → notice card in flow, full width, photo 120×120, "NOTE 01" as an inline label above the text. Hero `min-height: 100svh`, grows if needed.
- **Sideways tabs:** hidden under 960, or inline if they carry a meaning (card notes).
- **T1 cards under 960:** single column, photo first 1:1 full width, tab stays top-right of the text panel in flow, padding 32 24, **sticky off**, gap 24. Band inset 8 px.
- **Block 2:** under 1100 two columns (heading and text left, photo right); under 782 single column.
- **Block 4:** under 782 single column of photo then text, order P11, text, P12, text, P13, text.
- **Block 5:** under 782 band 420 tall, card in flow below the photo, full width; parallax stays, `--sp-par: 6%`.
- **Block 6:** under 782 photo 3:2, rows full width. **Block 8:** list 3 → 2 → 1 columns.
- **Tables:** at ≥ 782 px the fee table is full container width, `table-layout: auto`, price cell `white-space: nowrap; text-align: right`, never clipped at 800 or 1280 in any language. **Under 782 every table stacks:** name above, price below, in one row block.
- **KV parallax:** kept on phone, `--sp-par: 6%`.
- No horizontal overflow at 390 or 1280. `html, body { overflow-x: clip }`. The frame, marquee and parallax must not widen the page.

## 8. Scroll effects and parallax

| Effect | Class | Where | Reference and values |
|---|---|---|---|
| Row drift | `sp-marquee` + `.nl-drift` | Block 1 KV band only | Hero row drifts left, continuous, linear [tok g]; `animation-duration: 72s` tuned in theme CSS, no change to sp-scroll |
| Hero parallax | `sp-parallax` | Block 1 band; layer = `.sp-parallax__layer` around the marquee; foreground (H1, card) outside; `--sp-par: 10%`, 6% under 782 | Our addition to the reference row, so the row separates from the headline as the page leaves |
| Band parallax (primary, required) | `sp-parallax` | Block 5, Cover background P14; card static outside the layer; `--sp-par: 10%`, 6% under 782 | Same family as the reference's scroll-linked progress [tok g], linear |
| Text entry | `sp-reveal sp-reveal--up`, `sp-stagger` on rows | T1 card text blocks, block 4 text cells, block 6 rows, block 9 rows. `--sp-dist: 20px`, 0.8s `cubic-bezier(.23,1,.32,1)` (sp default) | Reference card text enters as cards arrive; ScrollTrigger on view [tok g] |
| Sticky pin | none, CSS `position: sticky` | Block 3 | `top: 210` at 900 tall, linear, scroll-linked [tok c, g] |

- **Three sp effect types only** (marquee, parallax, reveal) plus CSS sticky. Hero has no reveal. Nothing on forms, fee table or legal text.
- Sizing note: the parallax layer scales 1.18 while moving, so the row band's 590 px height keeps 520 px P01 inside. `check-parallax.mjs` must pass on desktop and phone; motion checks must see ≥ 6 px on P14's band at both widths.
- **Header shrink, no JS and no scroll listener:** base CSS is the compact state, so Firefox and reduced motion stay compact and the tall state never traps anyone. Inside `@supports (animation-timeline: scroll())` and `@media (prefers-reduced-motion: no-preference)` on home only: `animation: nl-head linear both; animation-timeline: scroll(root); animation-range: 0 220px`, keyframes from tall to compact: `height` 132 to 48, and the nav's `flex-direction` from `column` to `row` (it flips at the midpoint). 300 ms feel comes from the 220 px range. Tall state at scroll 0 in `?sp-static` screenshots.

## 9. Images (18; Grok, one at a time, read each one; ≤ 300 KB, ≤ 2000 px, webp; 0 cut-outs)

`Imagery: photo`. Reference is photo-led [tok e]; row `photo_direction: low-key`, so this theme is low-key instead of the default high-key. One script line per image in `readme.txt`.

STYLE (exact string, every prompt):
`low-key documentary photograph, 35mm lens, single soft practical light source, deep calm shadows, muted grey-blue and graphite palette with neutral skin tones, brushed stainless steel and terrazzo, quiet modern international office building before opening hours, diverse adult technicians in plain unbranded slate-grey workwear, candid unposed moment, fine natural grain, no text, no numbers, no logos, no brand marks, no signage, floor indicators and lift buttons blank and unmarked, no Japanese elements`

| ID | Subject / composition | Ratio | Used |
|---|---|---|---|
| P01 | Technician kneeling at an open lift landing door in a quiet lobby, paper checklist on the floor beside one knee, light from inside the shaft | 3:4 | **Home hero**; The Visit card 1 |
| P02 | Closed stainless lift doors at the end of a dim office corridor | 1:1 | **Home hero**; The Visit card 2; News head |
| P03 | Empty lift car interior, doors open, soft ceiling light, blank panel | 2:3 | **Home hero**; The Visit card 3 |
| P04 | Lift pit lit by a work torch: buffers, guide rails, a gloved hand | 4:3 | **Home hero** |
| P05 | Machine room, traction machine and plain controller cabinet, door ajar | 1:1 | **Home hero**; post 3 |
| P06 | Close-up of a landing door sill and gap, a feeler gauge held in the gap | 3:2 | **Home notice card**; Slot List |
| P07 | Lone technician with a tool bag walking toward lifts across a dark lobby, seen from behind, portrait | 2:3 | **Home block 2**; About head |
| P08 | Technician and building manager shaking hands or signing in at a dim reception desk | 1:1 | **Home card 1**; Contact card |
| P09 | Two technicians at the open car door, one measuring, one holding a clipboard | 1:1 | **Home card 2**; The Visit head |
| P10 | Technician and manager reading a printed report together across a desk, pages blank-looking | 1:1 | **Home card 3**; Fees card |
| P11 | Six-floor office building exterior at dusk, a few lit windows, no signs | 1:1 | **Home block 4**; Buildings head |
| P12 | Older office lobby with terrazzo floor and two lift doors, early light | 1:1 | **Home block 4**; Buildings case 1 |
| P13 | Converted brick warehouse office, a lift shaft in steel and glass | 1:1 | **Home block 4**; Buildings case 2 |
| P14 | Wide empty lobby at dawn, lift doors at right third, long floor reflection, nobody, dark lower right | 16:9, 2000 px | **Home block 5**; Buildings case 3; post 2 |
| P15 | Paper checklist on a clipboard with a pencil, ruled lines only, unreadable, on a stainless sill | 2:3 | **Home block 6**; Fees head; post 1 |
| P16 | Three technicians with tool bags pausing in a corridor, talking, 21:9 wide | 21:9 | **Home block 8**; About wide |
| P17 | Quiet reception desk at early morning, a desk phone and notebook, lifts softly lit behind | 1:1 | **Home block 10**; Slot List head; Contact head |
| P18 | A woman in her fifties, a senior technician, standing in a machine room, calm portrait | 2:3 | About founder card |

Per-page repeats: none. Slot List uses P17 (head) and P06 (card). Contact uses P17 (head) and P08 (card). Fees uses P15 and P10. Buildings uses P11, P12, P13, P14. The Visit uses P09, P01, P02, P03. About uses P07, P18, P16.

Read every image. Regenerate if any digit, letter or logo appears, or if a hand or face fails. Keep skin tones natural; the grade must not go blue on faces. Check that P01's shaft light is not saturated.

## 10. Similarity table (target ≈ 80%)

| Dimension | Reference | Noboru Lifts | Same? |
|---|---|---|---|
| Ink | `#3E3A39` | `#3E3A39` | Same |
| Paper | ~`#F9F9F9` + grain | `#F9F9F9` + grain ≤ 4% | Same |
| Band | ~`#E4E4E4` + 24 px grid | Same | Same |
| CTA | Gradient teal–blue, ~3% | `#1B7A74` to `#1A5F86`, ≤ 3% | Same |
| Secondary | none | Slate `#626E78` ≤ 5% | Added (row hex) |
| Area split | 62 / 25 / 10 / 3 | 62% paper, 25% photo, 10% ink, 3% accent on first screen | Same |
| Hero H1 | ~84 px bold, cut at fold | 84 px, 700, cut | Same |
| Eyebrow | ~22 px, .6em | Same | Same |
| Body | 18 / 36 / 500 | Same | Same |
| Nav | 15 / 700 | Same | Same |
| Strip title | ~34 px 700 white on ink | Same | Same |
| Font family | Zen Kaku Gothic New, serif micro labels | Instrument Sans + Albert Sans, sans micro labels | Changed: row fonts |
| Frame | 1 px inset 12 | Same | Same |
| Header | 132 → 48 | Same | Same |
| Band inset | 36 each side | Same | Same |
| Cards | 1200×528, sticky 210 | Same, with short-viewport clamp | Same |
| Text column | Left 72, ~520 measure | Same | Same |
| Footer padding | 96/48/110 | Same | Same |
| Radius, shadow | 0, none | Same | Same |
| Crosshair ticks | 9 px | Same, blue top-right, green bottom-left | Same |
| Card photo | 528×528 | Same | Same |
| Intro portrait | 384×576, sideways tab | Same | Same |
| Tile | 1:1 600×600 | 1:1 about 472 (checkerboard) | Ratio same |
| Hero images | Colour-pencil drawings | Low-key photos in the same placement | Changed: stage-a IMAGERY photo |
| Photo grade | Bright daylight | Low-key grey-blue | Changed: row `photo_direction` |
| Corner tab | 112×50, "ASSET 01" | 112×50, "STEP 01" | Same |
| Button | Outline + split arrow cell | Same | Same |
| Hero motion | Row drifts left, linear | Same, 72 s | Same |
| Card motion | Pin, frame swap | Pin, next covers; no swap | Close |
| Header motion | Shrinks after hero | Same, CSS only | Same |
| Library | GSAP ScrollTrigger | sp-scroll + CSS | Changed: pipeline rule |

## 11. Home acceptance checklist

1. First screen at 1440×900: open paper, drifting row of five photos of different sizes cropped by both frame edges, 84 px H1 flush bottom-left with descenders cut, tracked eyebrow, notice card flush bottom-right with sideways tab; `check-first-screen.py` under 15%, target under 5%.
2. All 6 KV checklist items are built and visible; the row visibly moves in `?sp-motion`, and is complete and un-stacked in `?sp-static`.
3. Viewport hairline frame with ticks on all pages; header cells ruled; one gradient CTA; header shrinks from 132 to 48 with no scroll listener.
4. T1: three cards at 1200×528, band grid visible, side rules, hanging tabs, cards really pin and cover at ≥ 960 px.
5. T2: every H2 on solid ink strips, one per line, hugging the text.
6. Colours exactly as section 2; ink is `#3E3A39`; no beige; no gradient beyond CTA cell and submit; no slate small text on band.
7. Block order equals section 5; no people grid, no step grid, no timeline, no dashboard, no side rail.
8. Fee table has the 6 items exactly, full width at ≥ 782, price cell nowrap and right-aligned; stacks under 782.
9. 17 image positions, no repeats (marquee copy excepted); no text in any photo; one STYLE.
10. Parallax on blocks 1 and 5; `check-parallax.mjs` passes on desktop and phone; hero has no sp-reveal; only marquee, parallax and reveal types used.
11. 390 px: nothing sideways or absolute over text; H1 not cut; notice card in flow; no horizontal overflow at 390 or 1280.
12. Fonts load from theme.json, including zh-TW and ja subsets; max size 5.25rem; `check-editor-fonts.mjs` passes.
13. Numbers match section 0 everywhere: 2011, 60 minutes, 5 stops, 32 points, 2 technicians, 2 working days, 7 people, Tuesday 07:00, the six prices.
14. ≥ 250 English words, ≥ 3 narrative paragraphs; no guarantees, invented statistics, awards or real brands.
15. `auto-gates.mjs` passes with `1 1` for en.
