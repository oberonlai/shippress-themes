# Kango College: design spec (stage 1, binding for implementation)

Slug `kango-college`, nursing college, `type: education`, archetype `editorial-magazine`, hero `photo-left-text-right`, nav `split`, page structure `day-schedule`, first screen `timeline-line`.
Reference: J. F. Oberlin University, https://www.obirin.ac.jp/ (only source). Tokens: `brand/reference-tokens.md`, cited as `[tok a..g]`. Screens: `brand/ref/`. Photos, copy and logo are our own; no reference asset, text or logo is copied.
**Imagery: photo** (the reference is photographic; its only non-photo art is three flat glyphs, and ours are redrawn).
**Font direction: serif.** **Similarity target: 80%**, see section 13.

## 0. Deviations from stage-a (this spec wins)
1. **Accent is the reference's wine `#941E57`, not stage-a's plum `#6A3B63`.** Same rule Mikura Storage followed: the row's hex is reference-only and this step requires reference colours unless the industry clearly does not fit. Wine fits a college of nursing, and no recent theme uses it (recent mains: `#0066BB`, `#3E3A39`, `#5F6B4E`, black). Do not restore plum.
2. **Glow is the reference's pink `#F3E6EA`.** The row's lilac survives as one wash band (`#E6E5EF`) and as the photo grade.
3. **First-screen limit** = min(30, reference 26.7) = **26.7%**, target ≤ 12% (card 9.3% + photo). Stage-a's 15% is replaced.
4. **KV checklist: every item is on the first screen.** Stage-a's items 5 and 6 sat below the fold. The glow moves up behind the text column. The three-cell band leaves the checklist (it stays as T1, block 2). The sixth item is the day line, which the row's `first_screen: timeline-line` asks for.
5. **The notice card has no close button and is not fixed.** On the reference it follows the scroll; pinning it would repeat Mikura's dock and cover content. It stays in the hero, so there is nothing to dismiss.
6. **Quote strip gets a real next button** (reference has one, stage-a omitted it). `assets/kc-strip.js`, click only, see T2.
7. **Dated rows** (from `reference.md`) are not a counted signature; they are how block 4 meets `day-schedule`.

## 1. Fixed facts (home, inner pages, all five languages)
Currency USD everywhere, no conversion. College, town, hospitals and people are all fictional. 24-hour times everywhere.

| Item | Value |
|---|---|
| Name | Kango College |
| Founded | 1987, as a two-room teaching ward |
| Address | 120 Infirmary Road, Wrenfield |
| Phone | 555-0176 |
| Email | admissions@kangocollege.example |
| Office hours | Mon-Fri 08:30-17:00 |
| Open lab mornings | First Saturday of each month, 10:00-12:00, free, no booking needed |
| Teaching day | Mon-Fri 08:00-16:30 |
| Places | 48 Diploma places a year |
| Lab group | 6 students to 1 instructor in every lab hour |
| Next intake | Monday 6 September 2027 |
| Applications | Mon 15 February to Wed 31 March 2027 (card numerals `2.15 ▸ 3.31`; both are unambiguous in month-day and day-month locales) |
| Interviews | April 2027 |
| Offers | By Friday 14 May 2027 |
| Placements | 1,400 supervised hours across the 3 years |

**Programmes (3):**
| Programme | Length | Places | Start |
|---|---|---|---|
| Diploma of Nursing | 3 years, 6 terms | 48 a year | September |
| Foundation Term | 12 weeks | 24 | June |
| Return to Practice | 16 weeks | 12 | January |

**Fees (7 items, USD):**
| Item | Price |
|---|---|
| Application fee | $60 |
| Diploma tuition, per term | $4,200 |
| Lab and simulation fee, per term | $320 |
| Uniform and clinical kit, one time | $480 |
| Placement insurance, per year | $140 |
| Foundation Term, full course | $2,400 |
| Return to Practice, full course | $3,600 |

Hardship bursary: up to $1,200 a year, by application.

**The teaching day (6 stations, used on the hero line, home, Teaching Day page):**
| Time | Station | Image |
|---|---|---|
| 08:00 | Handover practice | D1 |
| 08:30 | Bioscience lecture | D2 |
| 10:30 | The lab hour | D3 |
| 12:30 | Lunch | D4 |
| 13:30 | Ward simulation | D5 |
| 15:30 | Debrief, until 16:30 | D6 |

**People (8):** Dr. Ingrid Solheim, Dean (Q6) · Tomás Arriaga RN, Head of the Skills Lab (Q3) · Yuna Seo RN, simulation ward instructor (Q4) · Nadia Rahimi RN, placements lead (Q5) · Dr. Kwame Boateng, bioscience lecturer · Marguerite Dubois, admissions officer · Leila Haddad, second-year student (Q1) · Noah Petrov, first-year student (Q2). Listed in rows, never a people grid.

**Placement partners (3):** Wrenfield General Hospital · Northfield Community Health Centre · Ashgrove Hospice.

**Applicants' path (4 steps):** 1 Apply online · 2 Written statement · 3 Interview and lab morning · 4 Offer. Entry: secondary school completion with biology or a science course; health check and background check before the first placement.

**Posts (6). Stories (3):**
1. "The first reading I got wrong": Leila Haddad, first term. Image D3.
2. "Back after eleven years": Rosa Lindgren, Return to Practice. Image D6.
3. "Week nine on the ward": Noah Petrov, first placement. Image D5.

**Notes (3):**
4. "Applications open on 15 February". Image C1.
5. "New manikins in the simulation ward". Image L1.
6. "A reading list for the Foundation Term". Image N1.

Categories: `stories`, `notes`. Tags: `lab-hour`, `placements`, `admissions`, `return-to-practice`.

**Claims:** no pass rates, employment rates, rankings, awards, accreditation bodies or guaranteed outcomes. Fixed sentence for Programmes and Admissions: "Graduates may apply to the regional nursing register; registration is decided by the register, not by the college."

brand.md must carry these facts, plus audience, tone and a description of the daily routine (the word "day" must appear; repo gate).

---

## 2. Signature techniques (all three obvious at a glance)
Source for all: https://www.obirin.ac.jp/.

### T1. Three-cell glyph band (`ref/scroll-obirin-1800.png`)
- **Reference:** a full-width warm band with a one-line serif heading over a hairline; three equal cells split by 1px vertical rules, about 560px tall; a serif question top-left, one flat wine geometric glyph dead centre, an underlined "View details" with a small arrow at the foot.
- **Ours, home block 2:** the three ways to know the college: "How is a teaching day ordered?" (→ Teaching Day), "Who does the course admit?" (→ Admissions), "What does the lab hour ask of you?" (→ Skills Lab).
- **Geometry [tok c, d, f]:** band full bleed `#EFEAE6`; head row: `h2` 1.75rem, inset 40px, padding 40px 40px 20px, 1px rule below at `rgba(7,11,13,.16)`. Three columns of 33.33%, no gap, 1px vertical rules. Cell min-height 560px, padding 40px 64px. Flex column, `space-between`: question 1.5rem / 1.1 at top; glyph 96×96 centred; link row at the foot.
- **Link row:** "View details" 1.0625rem left, 12px wine arrow right, full-cell-width 1px **full ink** underline.
- **Glyphs:** flat `#941E57`, drawn from empty Group blocks and CSS (`.kc-glyph`, `.kc-g`, shapes by `border-radius`, `clip-path`; no icon font, no `content:` text; same CSS in the editor). Ours, not the reference's three:
  - G1 day: half disc 96×48 rising on two bars 96×16, 16px gaps.
  - G2 admit: two discs Ø40 side by side above two arches 44×48 with top radius 22.
  - G3 lab: plus 96×96, arms 32 wide, with a Ø16 disc cut in its centre (`#EFEAE6` dot).
- **Must not be diluted:** glyph stays 96px, solid wine; cells stay ≥ 560px on desktop with visible empty space round the glyph; no photos or body text in the cells; no card shadows or fills.

### T2. Glow lead with a sideways quote strip (`ref/scroll-obirin-2700.png`)
- **Reference:** on the pale page a soft pink radial glow; left, a 3-4 line lead of 22px serif at generous leading, then an underlined link pushed to the foot; right, rows of 88px square portraits with a two-line quote and a dash name, sliding sideways, fading out at the right, with a small round next button.
- **Ours, home block 3:** "Students and instructors, in their own words".
- **Geometry [tok c, d, e]:** padding 140px top and bottom, left inset 144px. Section head: `h2` 1.75rem over a 1px rule, ending at the right edge minus 144px. Lead column x 144-601, `font-size:1.375rem; line-height:1.64`. Strip starts at x 740, runs to the right edge minus 144px.
- **Strip:** CSS grid, `grid-auto-flow:column; grid-template-rows:repeat(3,auto); grid-auto-columns:397px; gap:32px 0; overflow-x:auto; scroll-snap-type:x mandatory; scrollbar-width:none`. 6 quotes, so 2 columns and the second is cut. Item: 88×88 image, radius 0, gap 24; quote 1.125rem / 1.25, two lines maximum; name row `—  Name` 0.875rem with letter-spacing .04em.
- **Fade:** a child overlay (`.kc-strip__fade`, 96px, transparent to `#F7F6F5`) at the right end of the wrapper.
- **Next button:** round Ø32 chip, `#EFEAE6`, ink chevron, below the strip's right end. `assets/kc-strip.js` (under 20 lines): on click `scrollBy({left:397,behavior:'smooth'})`, back to 0 at the end. No scroll listener, no library. Without JS the strip still swipes.
- **Glow:** `radial-gradient(ellipse 720px 520px at 62% 42%, #F3E6EA 0%, rgba(243,230,234,0) 70%)` on the section.
- **Must not be diluted:** portraits stay 88px square and radius 0; the second column must be visibly cut; the glow must be seen. No slider dots, no cards, no quotation-mark ornaments.

### T3. Flat notice card (`ref/obirin-first.png`)
- **Reference:** a flat wine card 300×400 over the hero, bottom right, ruled into parts: term title, a dated window in large serif numerals with an arrow, a closing line, a white pill link.
- **Ours, first screen:** "Next intake" card, content top to bottom:
  1. `September 2027 intake` 0.875rem, then `Diploma of Nursing` 1.5rem.
  2. 1px white rule at 45% opacity.
  3. White flat tag `Applications` (0.75rem, wine text, 4px 12px, radius 0) with `2027` beside it in white.
  4. `2.15 ▸ 3.31` Fraunces 2.75rem, tabular lining numerals, white; beside each number a superscript weekday (`Mon`, `Wed`) 0.6875rem.
  5. 1px rule, line `Closes at 17:00 on the last day` 0.75rem, centred, 1px rule.
  6. White pill link `How to apply` on the Admissions page: height 32px, radius 999px, wine text 0.8125rem.
- **Geometry [tok d, e]:** exactly 300×400 on desktop, radius 0, padding 20px 16px, no shadow. `position:absolute`. Bottom edge 32px above the photo's bottom edge. Right edge sits 48px past the photo/paper seam, so the card crosses the seam. All card text is block markup.
- **Must not be diluted:** solid wine, 300×400, flat, crossing the seam. It may not become a pale card, a text panel or a banner.

### Continuation to inner pages
Every page has a section head with a 1px rule. No page uses the hero's split.

| Page | T1 | T2 | T3 |
|---|---|---|---|
| About | | glow behind the founding lead, strip of Q6, Q3 | |
| Programmes | three cells, one per programme, glyphs G1-G3 | | card at the top right: same dates |
| Teaching Day | | | card beside the page head |
| Skills Lab | three cells: what you bring, what you practise, what you are asked | strip of Q3, Q4, Q1 | |
| Admissions | three cells: Apply, Interview, Offer (no step grid: fourth step is prose) | glow behind the entry lead | card, full size, beside the page head |
| Fees | | | card under the table |
| Faculty | | glow, 88px portrait rows (no sideways slide) | |
| Placements | three cells, one per partner, glyph G3 | strip of Q5, Q1, Q2 | |
| Contact | | glow behind the address lead | card: open lab morning, `First Sat 10:00` |

---

## 3. Key visual concept

### (1) Reference first screen
- **Scene:** one full-bleed architectural photograph of the campus building under a deep blue sky, transparent header on top, a two-line English tagline centred in thin white serif, a flat wine notice card at bottom right.
- **Story:** learning as something that opens, shown through a calm, real place, with the admission window always within reach.
- **Signature motion:** slow load fade of the tagline; header turns from transparent to a flat warm fill after the fold; notice card present from load; sections rise about 20px on entry; rows slide sideways.

### (2) Our translation
The same idea in nursing: **one calm, real place, and the date you can join it.** The place is a skills lab rather than a building: a film-grain photograph of two students taking a blood-pressure reading while an instructor stands at the foot of the bed. A college of nursing is its practice room, so the scene is the promise.

The photograph keeps the reference's weight (the largest thing on screen, uncropped into shapes, bleeding to the edges) but takes 62% of the width, as the row's `photo-left-text-right` requires. The tagline, the transparent header and the wine card stay, with the same type and proportions. A hairline day line at the foot replaces the reference's empty pavement and gives the row's `timeline-line`. The reference's building returns full bleed in block 7, with its centred tagline.

### (3) KV checklist (all built in the first screen, all visible at 1440×900)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Full-bleed building photo, 16:10 | Skills lab: two students, cuff, instructor at the foot of the bed | Left 62%, bleeds top and left, y 0-828 | `sp-parallax`, `--sp-par: 8%` | H1 |
| 2 | Two-line thin serif tagline | "For the ward, / and the person in the bed." 1.375rem, tracked .08em | Right column, above the H1 | Plain 0.8s load fade (theme CSS, no `sp-reveal`) | none |
| 3 | Transparent header, flat fill after fold | Split nav, logo centred, transparent then `#EFEAE6` | Top, 96px | CSS scroll-driven, 0.3s ease | none |
| 4 | Wine notice card | T3 "Next intake" card | Bottom right, crossing the seam | Static from load | none |
| 5 | Pink radial glow | `#F3E6EA` glow behind the text column | Right 38%, centre 72% 40% | None | none |
| 6 | Ghost 6px bullets and hairlines | Day line: hairline, 6 ghost dots, 6 times with stations | Foot of the screen, y 828-900, full width | None | none |

---

## 4. Colour [tok a]
| Role | Hex | Source | Use | Share |
|---|---|---|---|---|
| Base | `#F7F6F5` | reference base | Page | about 45% |
| Alt band | `#EFEAE6` | reference alt band | T1 band, day rows, header after fold, footer | about 35% |
| Ink | `#070B0D` | reference ink | All text, full underlines | text |
| Accent | `#941E57` | reference wine | Glyphs, T3 card, small arrows, link hover, map pin | about 6% |
| Glow | `#F3E6EA` | reference glow | T2, hero text column | one or two sections |
| Lilac wash | `#E6E5EF` | plan row, tint of `#A6A5C4` | Block 6 band only | under 10% |
| Muted | `#55524F` | derived from ink | Years, captions | small text |
| Rule | `rgba(7,11,13,.16)` | [tok d] | All hairlines except link underlines | - |

- Contrast: white on wine about 8:1; wine on `#EFEAE6` about 6.5:1; ink on all grounds above 15:1; muted on `#EFEAE6` above 4.5:1.
- **Saturation:** `check-first-screen.py --max 26.7`, target ≤ 12%. Wine fields: only the T3 card. No wine section backgrounds.
- `theme-meta.json` tags: type `education`; colors `rose`, `light`, `muted`; style `editorial`, `photographic`, `quiet`, `elegant`.

## 5. Type (font_direction **serif**) [tok b]
Serif everywhere, weight 400, no bold, like the reference. `strong` keeps weight 400 and takes the wine colour.

| Family | Use | Weights |
|---|---|---|
| Fraunces | Display: H1, section heads, questions, numerals | 400 (`"SOFT" 0, "WONK" 0`, optical size auto, `lining-nums`) |
| Source Serif 4 | Body, quotes, nav, labels | 400 |

Stacks:
- en, fr, de display: `Fraunces, "Source Serif 4", Georgia, serif`
- en, fr, de body: `"Source Serif 4", Georgia, serif`
- zh-TW display: `"Noto Serif TC", Fraunces, "Songti TC", "PMingLiU", serif`
- zh-TW body (system fonts, no bundled zh family and no Japanese family, repo gate): `"Source Serif 4", "Songti TC", "PMingLiU", serif`
- ja display: `"Noto Serif JP", Fraunces, "Hiragino Mincho ProN", "Yu Mincho", serif`
- ja body: `"Source Serif 4", "Noto Serif JP", "Hiragino Mincho ProN", "Yu Mincho", serif`

All faces load through `theme.json` `fontFamilies` + `fontFace`, with separate family entries for the zh-TW and ja subsets, so the editor matches the front. The theme uses `:lang()`, so copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and require it. Every font file is listed in `theme-meta.json` with a license, and every family in `readme.txt`. The zh subset script is known broken: use the Hokuto / Hada method.

| Preset | Size | Line height | Use | Token |
|---|---|---|---|---|
| small | 0.8125rem | 1.4 | Nav (13px), chips, labels | tok b |
| base | 1rem | 1.6 | Body | tok b (16/25.6) |
| medium | 1.375rem | 1.64 | Tagline, leads | tok b (22px); screen |
| large | 1.75rem | 1.3 | Section heads | tok b (24-28px) |
| x-large | 3.5rem | 1.0 | Time and date numerals | tok b (56px, tight) |
| xx-large | 4.25rem | 1.12 | H1 only, `clamp(2.75rem, 4.72vw, 4.25rem)` | theme rule, above the reference's 32px |

Tagline letter-spacing .08em. Headings -0.005em. Questions and quotes .02em (reference screen). CJK: display about 0.75× English, body line-height 1.85. fr and de: `hyphens:auto`.

## 6. Spacing, radius, ornament [tok c, d, f]
- Section padding 140px top and bottom; 200px bottom on block 4 only. Content inset 144px at 1440 (`clamp(24px, 10vw, 144px)`).
- Radius 0 everywhere, except pills and round chips.
- Hairlines 1px rule colour; link underlines 1px full ink. No shadows.
- Ghost bullet 6px ink disc. Round arrow Ø24, 1px wine outline, wine arrow. Chip: 1px rule, white fill, 12px text, radius 0. Location pill: radius 999px, 1px rule, wine map pin 10px.
- Arrows are inline SVG or background images; no words in CSS `content:`.

---

## 7. Home page (en ≥ 250 words required, target about 480; narrative paragraphs in blocks 3, 5, 6, 9)

### Header (one top menu only)
- Height 96px, overlays the hero. **One** `core/navigation` block with 6 items: Programmes, Teaching Day, Admissions | Fees, Notes, Contact. Nav spans the width; item 4 has `margin-left:auto`; the wordmark `Kango College` (Fraunces 1.375rem) is centred absolutely at 50%. Nav text 0.8125rem.
- Over the photo the ink nav needs support: `linear-gradient(to bottom, rgba(247,246,245,.72), transparent 140px)` on the photo. This replaces the token's 15% dark veil because our type over the photo is ink, not white. Contrast must be ≥ 4.5:1.
- After the fold: flat `#EFEAE6`, 0.3s ease, through `animation-timeline: scroll()` inside `@supports`. No support means a flat fill from load. No JS.
- Under 960px: wordmark left, two-line menu icon right (32×8), overlay with all 6 items.

### First screen (1440×900)
- Grid: photo and text row y 0-828, day line y 828-900. `min-height: max(680px, 100svh)`.
- **Photo:** H1 from x 0 to 893 (62%), full row height, `object-fit:cover`, no shape crop.
- **Text column:** starts 72px past the seam (x 965), ends at x 1400, on `#F7F6F5` with the glow. From y 150: tagline (2 lines) → 32px → H1 `Learning to<br>care, hour<br>by hour.` → 28px → lead 1rem, about 35 words → 24px → underlined link `View the teaching day`, arrow right, width 280px.
- **Card:** right edge at seam + 48px (x 941), so x 641-941, y 396-796. The text column is clear of it at every width ≥ 960.
- **Day line:** full width, inset 40px. 1px rule across at y 846. Six equal columns; each has a 6px ghost dot on the rule, then below it `08:00` Fraunces 0.8125rem and the station name 0.8125rem, in a line. Static list, not a table.
- **Forbidden:** table, form, search box, `.sp-reveal` in the hero, giant centred text, vertical labels.

### Block order
| # | Pattern | Purpose | Layout and images | Copy |
|---|---|---|---|---|
| 1 | `front-hero` | Place and date | As above, **T3**, H1 | about 70 words with card |
| 2 | `front-paths` | Three ways in | **T1**, band `#EFEAE6`, heading "Three questions before you apply.", glyphs G1-G3 | about 30 words |
| 3 | `front-voices` | Lead and quotes | **T2**, Q1-Q6, link to Faculty | 60-word lead + 6 × 12 words |
| 4 | `front-day` | The day, row by row | Band `#EFEAE6`. Heading "A teaching day". Six rows, see below. D1-D6 | 6 × 16 words |
| 5 | `front-admit` | Who the course admits | Base. Text x 144-700: heading, 2 paragraphs, three hairline chips (`48 places`, `6 terms`, `1,400 placement hours`), then two fee lines. A1 4:3 right, x 790-1296 | 100 words |
| 6 | `front-lab` | What the lab hour asks | Band `#E6E5EF`. L1 3:2 bleeding from the left edge to x 860. Right: heading, 2 paragraphs, closing line "6 students, 1 instructor, the same skill until it is steady." | 110 words |
| 7 | `front-band` | Pause, the college itself | Full-bleed `sp-parallax`, B1 21:9, min-height 560px, 15% dark veil, centred white two-line tagline (reference hero composition) | 12 words |
| 8 | `front-notes` | Latest notes | Base. Section head with rule. 3 text rows (Query Loop): date 1.5rem, chip = category, title 1.375rem, Ø24 arrow | Query Loop |
| 9 | `front-close` | Open lab and intake | Band `#EFEAE6`. Left: heading "Come to an open lab morning.", paragraph, location pill `120 Infirmary Road, Wrenfield`, 3 date lines (applications, interviews, offers). Right: C1 16:9, x 790-1296 | 80 words |

**Block 4 row [tok b, e, f]:** full-width, 1px rule between rows, padding 32px 0. Grid from the left: ghost dot at x 84 · time numeral `08:00` 3.5rem, line-height 1, x 144 · small `until 16:30` only on the last row · at x 442 a hairline chip (`Theory`, `Practice`, `Break`, `Reflection`), under it the station 1.375rem and one line of description · image 250×118 at x 1046 · Ø24 round arrow at x 1376, linking to the Teaching Day anchor. Not a vertical timeline: no connecting vertical line.

Home image positions: H1, Q1-Q6, D1-D6, A1, L1, B1, C1 = **17**, none repeated.

### Comparison with recent homes
| # | Mikura | Noboru | Shiki | Hashira | **Kango** |
|---|---|---|---|---|---|
| 1 | Hero strip | KV marquee band | Wash strip | Black hero | **Photo left, wine card on seam, day line** |
| 2 | Features grid | Statement, H2 strips | Spec-tagged staircase | White statement | **Three glyph cells** |
| 3 | Sticky sizes | Sticky visit cards | Catalogue | Ruled headline | **Glow lead + quote strip** |
| 4 | First-visit steps | Buildings 1:1 | Product pair | Case panel | **Six time rows** |
| 5 | Price table | Parallax band | Thread to needle ring | Stepped archive | **Who we admit, photo right** |
| 6 | Parallax band | Ruled rows | Close | CTA | **Lab hour on lilac** |
| 7 | Stories | - | - | - | **Full-bleed building** |
| 8 | FAQ | - | - | - | **Text notes rows** |
| 9 | - | - | - | - | **Open lab close** |

Why not alike: Kango is the only one with flat geometric glyphs, a seam-crossing notice card or a sideways portrait strip. Its one parallax band falls at block 7, after the schedule. Noboru's ruled rows are plain lists; ours lead with 56px numerals and a banner thumbnail. Shirushi Customs has a bottom timeline line, but on a dark pinned stage as its signature; ours is a 72px pale strip, not a signature.

---

## 8. Pages (home + 10 pages + post, category and tag views)
All reachable from the header or footer. Every page opens with the section head (Fraunces 1.75rem over a rule) and a lead. Inner page H1 `clamp(2.25rem, 3.6vw, 3.5rem)`.

1. **About** (`about`): founding in 1987 as a two-room teaching ward; why teaching is ordered by the hour; B1 wide; N1; T2 strip; the fixed claims sentence.
2. **Programmes** (`programmes`): T1 with the three programmes; length, places, start from section 1; L1; T3 card.
3. **Teaching Day** (`teaching-day`), the core page: T3 card; the six full rows with anchors `#t-0800` etc., each with a 90-word description and its image at 16:9; a note on term rhythm.
4. **Skills Lab** (`skills-lab`): T1; L1; D3; the rules of the lab hour; T2 strip.
5. **Admissions** (`admissions`): T3 card; T1 (Apply, Interview, Offer); entry requirements; A1; key dates; the claims sentence.
6. **Fees** (`fees`): full-width price table (section 9), all 7 items; bursary; payment by term; T3 card.
7. **Faculty** (`faculty`): 88px rows for Q6, Q3, Q4, Q5; text rows for Dr. Boateng and Dubois; students on Skills Lab, Home only.
8. **Placements** (`placements`): T1 with the 3 partners; 1,400 hours split by year (400, 450, 550); D5; T2 strip.
9. **Notes** (`notes`, the single `posts` role page, content empty, no template): dated rows with chip and 250×118 thumbnail, each post once.
10. **Contact** (`contact`): address, phone, email, office hours, open lab morning; card; C1; no form needed.
11. **Post** (`single.html`), **category / archive**, **tag** (`templates/tag.html`, label TAG), **404**, **search**: section head + rows.

`theme-meta.json` `pages`: home, about, news, article, category, tag, newsletter, contact. `screens`: news and newsletter → `/notes/`; article → post 1; category → `/category/stories/`; tag → `/tag/lab-hour/`; contact → `/contact/`. Footer: `#EFEAE6`, address, hours, all pages, repeated in block markup.

## 9. Responsive
- **Under 960px:** hero stacks in flow: photo 16:10 full width, tagline, H1, lead, link, card (static, full width minus 48px, auto height), day line. No absolute positioning on any text.
- **390px first screen:** no vertical text and no absolutely positioned labels over text. Header, photo and H1 must not overlap. Day line becomes 2 columns × 3 rows of dot-and-time in flow, below the first screen if needed.
- **T1:** one column, horizontal rules, cell min-height 360px. **T2:** one column; strip `grid-auto-columns:86vw`, 3 rows, still swipes inside its own box, with no page overflow.
- **Day rows on mobile:** stacked: time, chip, station, image full width 250:118, arrow removed.
- **Block 6:** L1 full bleed, text below. **Block 7:** height 420px.
- **Tables:** at ≥ 782px the fees table is full content width, price column `white-space:nowrap`, right-aligned, never cut. Under 782px every table stacks (`display:block`, item above price). Check at 800 and 1280.
- No horizontal overflow at 390 or 1280. Tap targets ≥ 44px.

## 10. Images (18, Grok, one at a time, read each one)
**IMAGERY: photo.** Real-photograph style, not illustration.

**STYLE (exact string, every prompt):**
`film-grain photograph, 35mm film, 50mm lens at f/2, soft natural side light, visible fine grain, slightly faded, bright high-key pale walls, modern international nursing college, quiet palette of pale lilac grey, off-white and soft warm grey, scrubs in plain pale lilac grey, diverse adults, calm candid moment, no text, no letters, no numbers, no logos, no badges, no name tags, no signage lettering, no screens with readable content, no brand marks, no Japanese elements`

≤ 300 KB, ≤ 2000 px, webp, 0 cut-outs, one `readme.txt` line per image (AI-generated, CC0). Reject text, logos, broken faces or hands, wrong cuff placement. Manikins may appear; no blood, wounds or distress. `*` = used on home.

| ID | Subject and composition | Ratio | Used on |
|---|---|---|---|
| H1* | Two students take a blood-pressure reading on a seated patient-actor on a bed, instructor at the foot of the bed; pale wall and ceiling across the top quarter; subjects in the lower two thirds | 16:10 | Home hero |
| D1* | Students stand round an empty bed with blank clipboards, handover practice | 16:9 | Home day; Teaching Day |
| D2* | Lecture room, seen from the back, lecturer beside a plain anatomical model | 16:9 | Home day; Teaching Day |
| D3* | Close: hands wrapping a dressing on a manikin arm, instructor's hand pointing | 16:9 | Home day; Teaching Day; Skills Lab; post 1 |
| D4* | Students at a long table in a bright canteen, trays, talking | 16:9 | Home day; Teaching Day |
| D5* | Student checks a drip stand beside a manikin in a simulation ward bed | 16:9 | Home day; Teaching Day; Placements; post 3 |
| D6* | Instructor and four students seated in a low circle, debrief | 16:9 | Home day; Teaching Day; post 2 |
| Q1* | Portrait, woman, 20s, Middle Eastern, pale scrubs, plain wall | 1:1 | Home strip; Skills Lab; Placements |
| Q2* | Portrait, man, 20s, Eastern European, pale scrubs | 1:1 | Home strip; Placements |
| Q3* | Portrait, man, 40s, Latino, instructor | 1:1 | Home strip; About; Skills Lab; Faculty |
| Q4* | Portrait, woman, 30s, Korean, instructor | 1:1 | Home strip; Skills Lab; Faculty |
| Q5* | Portrait, woman, 40s, South Asian, plain cardigan | 1:1 | Home strip; Placements; Faculty |
| Q6* | Portrait, woman, 50s, Nordic, grey hair, dark jacket | 1:1 | Home strip; About; Faculty |
| A1* | Admissions officer and applicant at a plain table, seen side-on, window light | 4:3 | Home admit; Admissions |
| L1* | Empty skills lab, row of made beds with curtains drawn back, long perspective | 3:2 | Home lab; Programmes; Skills Lab; post 5 |
| B1* | College building, plain pale facade, vertical fins, young trees, pale morning sky, no signs | 21:9 | Home band; About |
| C1* | Visitors and a student at an open lab morning, looking at a bed | 16:9 | Home close; Contact; post 4 |
| N1 | Student reading in a quiet library, stacks behind, books without readable titles | 3:2 | About; post 6 |

Per-page check, no image twice: Home 17 distinct. Notes: D3, D6, D5, C1, L1, N1. About: B1, N1, Q6, Q3.

## 11. Scroll effects (three sp-* effects, plus two theme behaviours)
| Effect | Class | Where | Reference trigger, time, easing |
|---|---|---|---|
| Section rise | `sp-reveal sp-reveal--up` | Section heads, block 3 lead and the whole strip wrapper, block 4 rows, blocks 5 and 6 text, block 8 rows, block 9 | GSAP ScrollTrigger at about 85% viewport, about 0.8s, about 20px, power2.out |
| Stagger | `sp-stagger` on the T1 row, `.sp-reveal--up` on each cell | Block 2 | Stagger about 0.1s; sp-scroll's fixed 0.12s step |
| Parallax | `sp-parallax` | Hero, block 7 | See section 12 |

Variables: `--sp-dist:20px; --sp-dur:.8s; --sp-ease:cubic-bezier(.22,.61,.36,1)` [tok g]. Use whichever variable names `sp-scroll.css` actually defines; do not change class names or JS. Copy `pipeline/assets/sp-scroll/` to `assets/` as is.

Never on: the hero, children of the sideways strip, the fees table, legal text. Theme CSS only, not sp-*: header fill, tagline load fade, strip scroll-snap.

## 12. Parallax (required)
| | Hero | Block 7 |
|---|---|---|
| Container | `front-hero` photo wrapper, `sp-parallax` | `front-band` Cover, `sp-parallax` |
| Moving layer | H1 (`figure > img`) | B1 (Cover background) |
| Foreground | None inside: the card is a sibling of the wrapper, and the text is in another column | White tagline, stays still |
| `--sp-par` desktop | 8% | 10% |
| `--sp-par` mobile | 6% | 6% |
| Reference motion | Slow hero photo drift | Same drift, on the full-bleed building |

Parent `overflow:clip`. Check `check-parallax.mjs`: difference ≥ 6px on desktop and mobile, 0 with reduced motion. No foreground text in a moving layer.

## 13. Similarity table (target 80%)
| Dimension | Reference | This theme | Token |
|---|---|---|---|
| Base / band | `#F7F6F5` / `#EFEAE6`, 45 / 35% | Same | a |
| Ink | `#070B0D` | Same | a |
| Accent | `#941E57`, ~6% | Same | a |
| Glow | `#F3E6EA` radial | Same | a |
| Extra tint | None | `#E6E5EF`, one band (plan row) | - |
| First-screen saturation | 26.7% | ≤ 12% (paler photo), limit 26.7% | a |
| Family | Noto Serif JP, serif everywhere | Fraunces + Source Serif 4, serif everywhere | b |
| Weight | 400, no bold | Same | b |
| Body | 16 / 25.6 px | Same | b |
| Section titles | 24-28 px, light | 28 px, 400 | b |
| Date numerals | 56 px, tight | Same (times) | b |
| h1 | 32 px | 68 px (theme rule ≥ 4.25rem) | b |
| Tagline | 22 px, .08em | Same, ink in hero, white in block 7 | b |
| Nav | 13 px | Same | b |
| Section padding | 140 px, up to 200 | Same | c |
| Left inset | ~144 px | Same | c |
| Three-cell band | 3 columns, 1 px rules, 560 px, 40 px padding | Same; horizontal cell padding 64 px from the screen | c |
| Header | 96 px, transparent then flat | Same; split nav (plan row) | c |
| Radius | 0; pills 999 | Same | d |
| Hairlines | 1 px, low opacity; full-ink link underline | Same | d |
| Shadows | Card only, flat | None | d |
| Notice card | 300×400 wine, bottom right, fixed | Same size and colour, in hero, crossing the seam | d, e |
| Hero image | Full bleed, 16:10, 15% veil | 62% width, 16:10; full-bleed form with 15% veil in block 7 | e |
| Portraits | 88 px square, radius 0 | Same | e |
| Thumbnails | 250×118 | Same | e |
| Glyphs | 3 flat wine, ~96 px | Same style, our own drawings | e, f |
| Ornament | 6 px bullet, Ø24 arrow, hairline chips, pin pill | Same | f |
| Reveal | ~20 px, ~0.8s, ease-out | Same | g |
| Carousel | Splide, sideways, round next | Scroll-snap, sideways, round next | g |
| Header motion | Transparent to flat | Same, ~0.3s | g |
| Parallax | Slow hero drift | `sp-parallax` 8% and 10% | g |

Photos, copy and logo are all our own.

## 14. Home acceptance checklist
1. First screen shows all six KV items at 1440×900; no table, form, search or `.sp-reveal` in the hero.
2. H1 shows two students, the cuff and the instructor at the foot of the bed; photo takes 62%, bleeds top and left; no text in the image.
3. T3 card is solid `#941E57`, 300×400, flat, crosses the seam, shows `2.15 ▸ 3.31`, and overlaps no text.
4. Day line shows 6 times and dots; it is a list, not a table.
5. `check-first-screen.py --max 26.7` passes; target ≤ 12%.
6. T1: three cells ≥ 560px, 1px rules, 96px wine glyphs of our own drawing, full-ink underlined links.
7. T2: glow visible, 88px square portraits, second column cut, next button works, strip swipes without JS.
8. Block 4: six rows, 56px times, ghost dots, chips, 250×118 images, Ø24 arrows; no vertical connecting line.
9. Block order equals section 7; no people grid, step grid, side rail, collage or cut-outs.
10. Home has 17 image positions, none repeated; ≥ 250 words; ≥ 3 narrative paragraphs.
11. Colours match section 4; wine only as listed; no wine section; no plum.
12. Type: Fraunces and Source Serif 4, weight 400, no sans anywhere; largest theme.json size ≥ 4.25rem; editor matches the front.
13. Header: one menu, centred wordmark, transparent then flat `#EFEAE6`; nav contrast ≥ 4.5:1 over the photo.
14. Motion: `check-parallax.mjs` passes on desktop and mobile; hero and block 7 both move; reduced motion shows the final state; hero has no reveal.
15. `auto-gates.mjs … en … 1 1` passes; mobile first screen has no overlap.
16. Facts on Home match section 1 exactly: dates, 48 places, 6 terms, 1,400 hours, 6 to 1, address.
17. No outcome claims. No reference photo, text, logo or glyph appears.
