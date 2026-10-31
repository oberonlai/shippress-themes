# Suji Clinic: design spec (stage 1, binding for implementation)

Slug `suji-clinic`, sports medicine clinic for club athletes and amateur runners. Type `business`, category health-wellness, five languages (en, zh-TW, ja, fr, de). WooCommerce compatible but not needed. Row b21-2: page structure narrative-problem-method-proof, font direction **sans**, photographic.

Reference: Shinmi Dental Clinic, https://shinmi-shika.com/ (the only reference). Measurements: `reference-tokens.md`, cited below as `tok(a)`…`tok(g)`. Borrow technique, composition, proportion, colour relationships and the key visual concept. Do not reuse its photographs, copy or logo.

## 0. Decisions that override stage-a.md (read first)

1. **Hero structure was checked against the reference source.** The reference is a 3-slide full-width slider (`slidesToShow:1`, `fade:true`, `autoplaySpeed:5000`, `speed:1200`). Its slide 2 is a single 1920×930 image composed as two photos meeting at the exact centre; slide 1 is a lobby; slide 3 is a mosaic. `tok(e)` "two photos 720×900" describes slide 2. We build the twin composition as two real panels, because it is the concept we borrow. Timing is the reference's: **5000 ms interval, 1200 ms fade**, not the 6 s / 3 s in stage-a.md.
2. **The reference veils its hero.** All its slides carry a dark overlay, which is what makes white type work. Ours are high-key, so section 3 sets a veil; without it the headline fails.
3. **No scroll-up nav.** The reference's nav re-entry needs a scroll listener, which common.md forbids. The nav strip instead uses CSS `position: sticky; top: 0`, so it sits under the hero and then pins. KV item 5 reflects this. The pagetop tab is a plain anchor link, fixed and always shown from 960 px up, with no fade.
4. **Hero cross-fade is pure CSS** (`@keyframes` on opacity). No slider library. It is not an `sp-*` effect and not a reveal: H1 and H2 are visible on first paint.
5. **Colours are the reference's own values, not the stage-a.md mapping.** A pale, slate, clinical palette suits sports medicine, so no industry reason exists to swap. The row hex `#566870` is also close to Hazuki Instruments' main `#5C6A78`, which common.md says to avoid. It survives only as a photo tone (blue-grey light). Two adjustments, both for contrast, listed in section 5.
6. **T3 frame corrected.** `tok(d)` says a 3 px grey offset frame. The screenshot `ref/scroll-shinmi-2700.png` shows a thin dark line 8 px down and right of the photo, on those two sides only. We follow the screenshot.
7. **T2 text never crosses the diagonal.** The reference lets its heading run onto the inset photo. Ours stops before it, so five languages cannot collide with the photo.

## 1. Signature techniques (all three must be obvious at a glance)

Source of all three: Shinmi Dental Clinic, https://shinmi-shika.com/.

### T1. Twin full-height photo hero with hairline headline, seam notice card, divided nav strip
- **Reference (`ref/shinmi-first.png`, `tok(b)(e)(f)`):** two photos meet edge to edge with no gap, headline lower left above a 1 px white rule, a framed notice card lower right, and directly below the hero a white strip of 7 nav items split by 1 px × 36 px rules, each with a tiny Latin sub-label.
- **Ours:** block 1 (geometry in section 3).
- **Not to be diluted:** 50/50 split at exactly the viewport centre, no gap, no radius, full height. The rule must be 1 px white and 555 px wide. The card must have its inset 1 px frame and must cross the seam. The strip must have the vertical rules and the two-line labels. It is the site's only menu.

### T2. Tinted photo band + white card with a diagonal-cut inset photo, tab label, ghost Latin word
- **Reference (`ref/scroll-shinmi-1800.png`, `-2700.png`, `tok(e)`):** a band 1413×486 (27 px short of one viewport edge) carries a photo washed about 70% with the band tint. A white card 747×378 sits inside it. The card's outer part is an inset photo cut on a diagonal. A coloured tab with a hard shadow rides the card's top-left. A thin white Latin word sits on the washed photo on the other side. Bands alternate left and right.
- **Ours:** block 4, three bands ASSESS / REBUILD / RETURN.
- **Band (1440):** `max-width: calc(100% - 27px)`, flush to the left viewport edge on bands 1 and 3 and to the right edge on band 2; height 486 px, padding 54 px on top, bottom and the card side. Ground = tint colour; photo as a full-size child at `opacity: .3` (a 70% wash), `object-fit: cover`.
- **Card:** 747×378, white, radius 0, shadow `0 4px 16px rgba(0,0,0,.18)`. On bands 1 and 3 it is at the right, on band 2 at the left.
- **Inset photo:** a child of the card, on the card's outer side. Clip on bands 1 and 3: `polygon(0 0,100% 0,100% 100%,27% 100%)` on a 46% wide box, so the cut runs from 54% of the card width at the top to 66% at the bottom. Band 2 mirrors it: `polygon(0 0,100% 0,73% 100%,0 100%)`. Slant ≈ 12% of the card width; do not reduce it.
- **Text column:** max 48% of the card, padding 36 px, stops 24 px before the diagonal's nearest point. Order: one-line kicker 1.125rem weight 400; heading 2.5rem weight 300 with the **first word in the band's tab colour** (Assess / Rebuild / Return); 3–4 lines of body at 0.9375rem.
- **Tab:** on the card's top-left, offset −18 px left and 18 px down, 268×54, flat colour, white text Figtree 300 **1.5rem**, ls .1em, `box-shadow: 2px 2px 0 #332F26`.
- **Ghost word:** ASSESS / REBUILD / RETURN, on the washed photo centred in the free side, Figtree 200, 5.5rem, uppercase, ls .08em, white. It stays uppercase Latin in all five languages, `aria-hidden`.
- **Arrow chip:** Ø45 in the tab colour, white chevron, 18 px from the inset's bottom-right corner.
- **Not to be diluted:** the diagonal cut, the hard 2 px shadow, the ghost word on the photo, the alternation, and the visible wash colour (the three tints must be tellable apart).
- `sp-reveal` goes on the card wrapper; the `clip-path` stays on the inset child (scroll-effects-spec §4).

### T3. 3×2 thumbnail grid with offset line, round arrow, Latin sub-label
- **Reference (`ref/scroll-shinmi-2700.png`, `-3600.png`):** on a pale paper ground, three columns of photos 389×240 with a thin dark line 8 px off the bottom and right edges; below, title + Ø45 dark circle arrow on one line, Latin sub-label, one-line caption.
- **Ours:** block 3, six injury groups.
- **Geometry:** container 1296, 3 columns, column gap 60 px, row gap 56 px. Photo aspect 389/240, radius 0. Offset line: `::after`, `inset: 8px -8px -8px 8px`, `border-right` and `border-bottom` 1px `#332F26`, nothing on the top and left. Title Figtree 300 1.5rem ls .06em; circle Ø45 `#565565`, white chevron, right-aligned on the title line; Latin sub-label 0.75rem uppercase ls .1em `#6B6B67`; caption 0.875rem.
- **Ground:** `#F3F5F5` plus a very faint paper grain from an inline SVG `feTurbulence` data URI at ≤4% opacity (no image file).
- **Hover:** `.3s` opacity on the photo [tok g], with `transition-delay: 0s`.
- **Not to be diluted:** the line must read as an offset line, not a border or a soft shadow. Circle stays filled and round.

### Supporting: vertical Latin portrait (block 6)
From `ref/scroll-shinmi-4500.png`: portrait flush to the right viewport edge, 642×597, with a vertical word THE ROOM in taupe running down its left edge and a white name plate over its lower left. Latin vertical word only; the JP tategaki is not borrowed. Desktop only (see section 9).

### Continuation to inner pages
Every inner page opens with the **mini T1**: a 50/50 twin head 420 px tall, two photos, page title and 1 px rule lower left, then the nav strip as on every page. Header and footer are the same site-wide.

| Page | T1 mini (L / R photo) | T2 band | T3 grid |
|---|---|---|---|
| Injuries | H1 / P1 | one band per body region (3) | six groups, in full |
| Method | H3 / H4 | three stage bands, long form | none |
| Team | D1 / I5 | lead clinician band | none (people as rows) |
| Stories | P1 / H4 | one band per story (3) | none |
| Fees | I6 / H2 | "What the first visit covers" band | none |
| Athletes & Clubs | H3 / M2 | "Club arrangements" band | three-card row in T3 style |
| Visit | H4 / I2 | "Finding us" band | none |
| About | D1 / P1 | "Why this clinic" band | none |
| Journal | I5 / M3 | none | posts in T3 cards |
| FAQ | M2 / I1 | none | none |
T1 mini on all 10, T2 on 8, T3 on 3.

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
The reference's hero cycles real work: a dentist at the microscope beside a surgeon at the chair, two photographs meeting at the centre, hands and instruments in focus, then the lobby and the staff. The story is its headline, "treatment you would want for yourself": skilled, calm people working close up. Its motion is a slow full-frame cross-fade (5 s hold, 1.2 s fade) under a fixed headline, so the text stays still while the work changes behind it.

### (2) Our translation
Same composition, same motion idea, same image type (real photographs). **Left: a clinician taping a runner's ankle on a treatment table, hands in focus. Right: that runner's race shoes on the floor beside the table.** The injury and the goal in one spread. The story is **"The shoes are waiting. We set the way back."** The photos change, the headline does not: taping fades to a gait check on a treadmill, the shoes fade to feet at a start line, so the spread moves from injured to returning.

### (3) KV checklist (each item is built and visible on the first screen)
| # | 參考站元素 | 我們的對應 | 位置 | 動態 | 用哪張圖 |
|---|---|---|---|---|---|
| 1 | Left photo: dentist at work, close | Clinician taping a runner's ankle, hands in focus, treatment table | Left 50%, full height | Fades to H3 at 5 s, 1.2 s fade | H1, then H3 |
| 2 | Right photo: second clinician, meeting at the centre | Race shoes on the floor beside the table, runner's heel at the frame edge | Right 50%, full height | Fades to H4 with the left panel | H2, then H4 |
| 3 | Thin headline + 1 px white rule | Figtree 300 two-line headline + 1 px white rule 555 px | Lower left over the left photo | None (hero has no reveal) | Over H1 / H3 |
| 4 | Lavender framed notice card | Slate card "Next assessment slots" with 6 px inset frame and icon disc | Lower right, crossing the seam | None | None |
| 5 | Nav strip with Latin sub-labels | 7 items, label over Latin micro-label, 1 px dividers | Directly under the hero; its top edge is at the fold at 900 px | Pins with CSS sticky (section 0.3) | None |
| 6 | Header info box + violet WEB tab | Address and hours box + slate "Book" tab with notch | Top right | None | None |

## 3. First screen (1440×900)

- **Layout:** `.sj-hero` alignfull, height `calc(100svh - 108px)` (the strip's 108 px then ends exactly at the fold), min 620 px. Two panels `grid-template-columns: 1fr 1fr; gap: 0`. Each panel stacks two `img` (`object-fit: cover`): H1 + H3, H2 + H4. Faces and hands sit in the upper two thirds, away from the type.
- **Veil over both panels:** flat `rgba(51,47,38,.28)`, plus on the left panel `linear-gradient(to top, rgba(51,47,38,.5), transparent 62%)`. Implement as `::after`, above the images, below the text. White headline must reach ≥4.5:1.
- **Headline block:** left 90 px, bottom 72 px. Latin line "SUJI SPORTS MEDICINE" Figtree 300 1.5rem ls .12em. Headline **"The shoes are waiting. / We set the way back."**, two lines, Figtree 300 `clamp(2.75rem, 4.4vw, 4.5rem)`, line-height 1.25, ls .02em, white. Under it the 1 px white rule, 555 px. Lead 1.125rem lh 2, white, two lines: "Assessment, rehabilitation and return-to-run planning / for club athletes and amateur runners."
- **Notice card:** 470×120, placed so that it crosses the seam: `left: calc(50% - 120px)` (600 px at 1440), bottom 54 px. Ground `#565565` at 92%, 1 px white inner frame 6 px inset, icon disc Ø80 white at 20% with a calendar line icon, two centred white lines: "Next assessment slots" / "Tue and Thu, 7:30 before work". The whole card links to Visit. At widths under 1180 px the headline block narrows to 42vw so it does not touch the card.
- **Header:** absolute over the hero, transparent. Left: logo wordmark "Suji" Figtree 400 1.75rem + "Sports Medicine" 0.75rem ls .12em, white. Right: pin icon + 3-line address and hours, 0.8125rem white with a 1 px white rule on its left; a 245×72 box with 1 px white outline ("Mon–Sat" / "Same-week assessments"); the 162×90 Book tab, flush to the top and right, `#565565`, with a 12 px white notch triangle at its bottom-right, lines "Online" 0.75rem and "Book" 1.375rem.
- **Nav strip:** white, height 108 px, shadow `2.6px 3.1px 16px rgba(0,0,0,.3)`, sticky. Items: **Home, Injuries, Method, Team, Stories, Fees, Visit**. Label Public Sans 300 1rem ls .1em ink; sub-label 0.6875rem uppercase ls .1em `#6B6B67` under it (en: HOME, WHAT WE TREAT, HOW IT WORKS, WHO'S IN THE ROOM, RETURNS, PRICES, FIND US; other languages: translated label over the same Latin word). 1 px × 36 px `#CFCFCF` dividers. Lower menu items (About, Athletes & Clubs, Journal, FAQ) live in the footer. This is the only menu.
- **Cross-fade:** 20 s loop per panel, both panels in step: H1/H2 hold, then H3/H4, opacity keyframes giving 5 s hold + 1.2 s fade [tok g]. `prefers-reduced-motion`, `html.sp-no-motion` and the editor show H1/H2 only.
- **Saturation:** hard limit 15% (`scripts/check-first-screen.py`), target ≤5%; the reference measures ≈2% [tok a]. The row note's 30% ceiling does not apply: common.md's 15% is the stricter.
- **Forbidden:** table, form, search box, reveal, centred giant text.

## 4. Home page

### Block order
| # | Pattern | Purpose | Layout and photos | Copy (en) |
|---|---|---|---|---|
| 1 | `front-hero` | Key visual | T1, section 3; H1 H2 H3 H4 | 35 words |
| 2 | `front-problem` | The problem, narrative | White ground. Left column 3/12: Latin title "THE PROBLEM" Figtree 200 3.5rem + sub-label; 1 px ink vertical rule; right column 7/12: heading "Rest fixes the pain. It rarely fixes the reason." 2.5rem weight 300, two paragraphs. No photo. (Reference's NEWS row: title, rule, text.) | 95 words, 2 paragraphs |
| 3 | `front-injuries` | What we treat | T3, paper ground. Centred head as the reference's MEDICAL: giant "INJURIES" Figtree 200 7.5rem ls .08em in `#565565`, its first letter `#998E73`, straddling the white-to-paper boundary, sub-label under it. Grid I1–I6. Link "All injuries" | 6 × 14 words |
| 4 | `front-method` | The method | T2 × 3 on paper ground. Section head as block 3 at 5.5rem: "METHOD". M1+N1 ASSESS, M2+N2 REBUILD, M3+N3 RETURN | 3 × 45 words |
| 5 | `front-proof` | Proof, parallax | Full-bleed `sp-parallax`, 640 px tall, photo P1 (runner on an empty track at dawn). Over it a white 560 px panel at the left with 54 px margin: "What 'ready' means here", three checks as text lines with hairlines, each stating a test and its threshold (section 8), no claims of outcome | 80 words |
| 6 | `front-room` | Who works in the room | White ground; left part has a pale wedge `#EDEFEF`, `clip-path: polygon(0 0,100% 0,0 75%)`, 50% wide [ref 4500]. Left: heading + one paragraph; then **rows, not a grid**: 3 named people with role and one line, hairlines between. Right: D1 portrait flush to the viewport edge with THE ROOM and name plate | 110 words |
| 7 | `front-visit` | Fees and hours | Paper ground. Two columns 7/12 + 5/12: left a fee table with the 4 main rows (section 8) and a link to all fees; right hours, address, phone | 60 words |
| 8 | `front-close` | Close | Band `#CDD9E2`, height 280 px, left-aligned one line "Bring the shoes. We'll start from there." 2.5rem weight 300, Book button `#565565`, square, 1 px inset frame | 20 words |
Footer: `#565565`, white text, 3 columns, Latin ghost "SUJI" 5.5rem at 20% white. Pagetop tab 45×45 `#998E73` bottom-right, white chevron, fixed from 960 px up.

Home photos: 18 positions (H1 H2 H3 H4, I1–I6, M1–M3, N1–N3, P1, D1), none repeated. English ≥ 400 words, narrative paragraphs in #2, #5, #6 (≥ 3). CJK ≥ 600 characters.

### Comparison with recent themes
| # | Mimamori | Mahora | Asaoka | Hazuki | **Suji** |
|---|---|---|---|---|---|
| 1 | hero tiles | hero tiles | hero | seam strip | **twin 50/50 hero + seam card + nav strip** |
| 2 | notice | welcome | mission | info row | **problem: title, rule, text** |
| 3 | courses sheet | workplaces | 5 scoop tiles | notes rows | **3×2 offset-line grid** |
| 4 | figures | service-day slides | results rows | statement | **3 diagonal tinted bands** |
| 5 | who | floor parallax | proof band | floors 3+4 | **parallax proof with panel** |
| 6 | day | contract rows | 2 stories | trial band | **room: wedge, rows, edge portrait** |
| 7 | placement photo | rates | packages | care | **fee table + hours** |
| 8 | story | cases | dates | staff | **close band** |
| 9 | notices | close | close | visit | none |
**Why not alike:** Suji follows problem, then injuries, then method, then proof, and no recent theme has that sequence. Mahora's parallax and Asaoka's proof band sit at or near the same position, but ours is a white panel of test thresholds rather than a floor view or a results band, and it follows three diagonal bands no recent theme uses. Against Asaoka the shapes are square and hard-edged instead of r24–26 scoops and waves; against Hazuki the hero is two full-height panels instead of a four-panel strip. Hibana College (same batch) also uses twin panels, but with a dark caption card and rounded tab; Suji has no rounded tab, and its card crosses the seam.

## 5. Colour

Values from `tok(a)`, unchanged unless marked.
| Role | Hex | Source | Use | Share |
|---|---|---|---|---|
| Ground | `#F3F5F5` | tok a | Paper ground | 35% |
| White | `#FFFFFF` | tok a | Page, cards, strip | 40% |
| Ink | `#332F26` | tok a | Text | text |
| Main | `#565565` | tok a | Footer, Book tab, notice card, T3 arrow chips, RETURN tab | 6% |
| Steel | `#7A97AE` | tok a `#839FB6`, lightness −3% for 3:1 with white | Tab and chip on the REBUILD band | 5% |
| Taupe | `#998E73` | tok a | ASSESS tab, first-letter accent, THE ROOM, pagetop | 4% |
| Tint taupe | `#CCC6B9` | tok a | ASSESS band | 3% |
| Tint blue | `#CDD9E2` | tok a | REBUILD band, close band | 4% |
| Tint lavender | `#DED9E5` | tok a | RETURN band | 3% |
| Muted text | `#6B6B67` | derived from ink | Sub-labels, captions | text |

Band to tab: ASSESS = `#CCC6B9` + taupe tab; REBUILD = `#CDD9E2` + steel tab; RETURN = `#DED9E5` + main `#565565` tab.
Two contrast adjustments: steel darkened as above; notice card and RETURN tab use main instead of lavender `#AD9FBD`, because white on it is 2.48:1. All white tab text is ≥1.5rem (large text, ≥3:1).

## 6. Type

- **Direction: sans.** Latin headings Figtree, Latin body Public Sans, both sans-serif.
- **Stacks:** en, fr, de headings `Figtree, "Noto Sans TC", "Noto Sans JP", sans-serif`; body `"Public Sans", "Noto Sans TC", "Noto Sans JP", sans-serif`. zh-TW: `Figtree, "Noto Sans TC", sans-serif` and `"Public Sans", "Noto Sans TC", sans-serif`. ja: same with `"Noto Sans JP"`. No serif or mincho anywhere, including the Latin ghost words the reference sets in serif: thin Figtree carries that role.
- **Loading:** all through `theme.json` `fontFamilies` + `fontFace`, with zh-TW and ja subsets (Hokuto / Hada workaround, since the subset script is broken). Figtree weights 200, 300, 400, 500; Public Sans 300, 400, 500; Noto Sans TC and JP 300, 400. Copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` if `style.css` has any `:lang(` rule. Editor and front end must match.
- **Sizes (presets):** small 0.8125rem, base 1rem, medium 1.5rem, large 2.5rem, x-large 4.5rem, huge 7.5rem (max, ≥4.25rem rule satisfied).
- **Body:** Public Sans 300 1rem, lh 2, ls .02em in Latin [tok b 16.2 px / 2.0 / 300]. `tok(b)` ls .1em applies only to zh-TW and ja, with lh 1.85 per common.md. Weight 300 needs ink, never muted text, for paragraphs.
- **Headings:** Figtree 300, ls .02em, lh 1.25. zh-TW and ja about 0.75× the Latin size. fr and de `hyphens: auto`. Ghost words remain Latin.

## 7. Inner pages (10)

All: T1 mini, then the sections below. Radius 0 throughout. No sidebar.
1. **Injuries** (`/injuries/`): T3 six groups with anchors; three T2 bands for lower leg and foot, knee and hip, shoulder and back; a plain list of what we refer on (fractures, surgical cases).
2. **Method** (`/method/`): three T2 stages in long form; what happens in each and how long (section 8); a paragraph on what the plan looks like. No step grid or timeline.
3. **Team** (`/team/`): the 7 people as full-width rows (name, role, one paragraph, hairline); a T2 band on the lead clinician. No portrait grid.
4. **Stories** (`/stories/`): 3 stories as T2 bands, each with the injury, the plan and the checks passed. People are fictional and stated as anonymised composites.
5. **Fees** (`/fees/`): full table of all 6 items, T2 band on the first visit, insurance receipt and cancellation paragraphs.
6. **Athletes & Clubs** (`/clubs/`): club arrangements, screening morning, how coaches get reports with the athlete's consent.
7. **Visit** (`/visit/`): address, hours, directions, parking, what to bring (shoes, recent scans), booking by email and phone. No form required.
8. **About** (`/about/`): founded 2014, why the clinic exists, how the treatment rooms are arranged. Must state 2014 and Easthaven.
9. **Journal** (home.html, archive, single): 6 posts in T3 cards. Single post: small head, 680 px text column, featured image with offset line. Featured images as in the section 10 binding list.
10. **FAQ** (`/faq/`): 8 questions as hairline rows (`details` elements).
Plus 404 and search (mini head, no photos; arrow home).

## 8. Fixed facts (home, inner pages and all five languages identical)

- **Clinic:** Suji Sports Medicine Clinic, founded **2014**, 48 Millrace Road, Easthaven (fictional, no country). Phone +00 555 0148, hello@sujiclinic.example.
- **Hours:** Mon, Wed, Fri 9:00–19:00; Tue, Thu 7:30–19:00; Sat 9:00–13:00; closed Sunday. Early slots Tue and Thu at 7:30.
- **Fees (USD in every language, no conversions):**
| Item | Length | Price |
|---|---|---|
| First assessment | 60 min | $95 |
| Follow-up session | 40 min | $65 |
| Gait and running analysis | 50 min | $120 |
| Taping and strapping visit | 20 min | $35 |
| Return-to-run test | 45 min | $80 |
| Club screening morning, up to 12 athletes | 3 hours | $480 |
Home shows the first four. Cancellation free up to 24 hours before.
- **People (7):** Dr Ingrid Solheim, lead sports physician, founder. Dr Tomasz Wrona, sports physician. Amara Nwosu, lead physiotherapist. Rafael Montoya, physiotherapist, running gait. Leilani Kealoha, physiotherapist, shoulders and throwing athletes. Priya Raman, strength and conditioning coach. Hana Lindgren, clinic coordinator. Home rows: Solheim, Nwosu, Montoya. D1 = Solheim.
- **Method, 3 stages:** Assess (first 60-minute visit), Rebuild (weeks 1–6, typically weekly sessions, adjusted to the injury), Return (graded plan; ends with the return-to-run test).
- **Return checks (block 5):** single-leg calf raises: 25 on each side. Single-leg hop distance: within 10% side to side. 30 minutes' easy running: pain no higher than 2 out of 10. These are clinic criteria, not outcome claims.
- **Stories (3):** Marit, 41, club marathoner, Achilles tendon. Daniel, 29, five-a-side football, ankle sprain. Yuki, 34, trail runner, knee pain. Marked as anonymised composites.
- **Injury groups (6):** Ankle and foot; Knee; Shin and calf; Hip and groin; Shoulder and elbow; Back and neck.
- **Language rules:** no guarantees, no recovery rates, no awards, no real media, people, brands or federations.

## 9. Responsive

- **Under 782 px (390 px first screen):** nothing absolutely positioned over type, and no vertical text. Header in flow on white: logo in ink, Book tab, menu button that opens the overlay with the same 7 items plus the 4 footer items. H1 and H2 stack, full width, aspect 4/3 each (cross-fade stays). Headline block in flow below them, ink on white, `clamp(2.25rem, 9vw, 2.75rem)`, the rule 1 px ink at 100%. Notice card in flow, full width minus 24 px margins, with its inset frame, no icon disc. The veil is removed. The strip is replaced by the menu button.
- **782–1179 px:** twin panels stay; strip wraps to 4+3 if needed, stays sticky only from 960 px.
- **T2 under 782 px:** band full width, padding 24 px, ghost word in flow above the card at 2.75rem in `#565565`; card full width in one column, inset photo above the text at 16/9 and the diagonal kept on its lower edge (`polygon(0 0,100% 0,100% 88%,0 100%)`); tab in flow, no negative offset. Bands no longer alternate.
- **T3:** 2 columns from 600 px, 1 under; offset line stays 6 px. No horizontal scrollers.
- **Room:** portrait full width above the text, THE ROOM horizontal above it at 2rem, name plate in flow under it. Wedge hidden.
- **Giant heads:** `clamp(3rem, 13vw, 7.5rem)`, no overflow at 390 px in any language.
- **Tables:** at ≥782 px every fee table is full width of its column with `table-layout: auto`; the price column is `white-space: nowrap`, right-aligned, never clipped (test at 800 and 1280, block 7's 7/12 column included). If 7/12 clips at 800 px, block 7 stacks below 960 px. Under 782 px every table becomes stacked rows (`display: block`, label left, price right).
- `overflow-x: clip` on `html, body`. Hero and T2 keep radius 0 at all sizes.

## 10. Images (18, Grok, one at a time, read each one)

IMAGERY = **photo** (stage-a.md). Real photographs, as on the reference.

STYLE (exact string for every image):
`photorealistic documentary photograph, high-key bright daylight, pale white walls, blue-grey light, desaturated clinical palette of white, pale slate and soft grey, modern international sports clinic, diverse adults, clinicians in plain dark slate scrubs, hands-on close framing, shallow depth of field, calm candid moment, natural skin texture, no text, no logos, no brand marks, no lettering on shoes or clothing, no Japanese elements`

Shoes must be plain with no visible marks. 0 cutouts. Each ≤ 300 KB, ≤ 2000 px, one readme.txt line each (AI-generated, CC0).

| ID | Subject and composition | Ratio | Home |
|---|---|---|---|
| H1 ★ | Clinician's hands taping a runner's ankle on a treatment table, clinician's torso and face at upper left | 4:5 | Hero left |
| H2 ★ | Pair of worn plain race shoes on a pale floor beside the table leg, a bare heel just entering at the upper edge | 4:5 | Hero right |
| H3 ★ | Clinician watching a runner's stride on a treadmill, side view, hands near a knee | 4:5 | Hero left, second |
| H4 ★ | Runner's feet in the same plain shoes at a painted start line on a pale track, no people above the knee | 4:5 | Hero right, second |
| I1 ★ | Physician examining an ankle, both hands, foot on the table edge | 13:8 | Injuries card 1 |
| I2 ★ | Physiotherapist testing a knee, patient seated, knee bent | 13:8 | Injuries card 2 |
| I3 ★ | Calf palpated by a clinician's bare hands, patient lying on their side | 13:8 | Injuries card 3 |
| I4 ★ | Hip and groin stretch assisted on a low table | 13:8 | Injuries card 4 |
| I5 ★ | Shoulder assessment, overhead reach, clinician's hand on the shoulder | 13:8 | Injuries card 5 |
| I6 ★ | Lower back being assessed, patient prone, clinician's hands | 13:8 | Injuries card 6 |
| M1 ★ | Low angle: clinician measuring ankle range with a plain goniometer | 16:9 | ASSESS band |
| M2 ★ | Runner doing single-leg calf raises on a step, coach beside them | 16:9 | REBUILD band |
| M3 ★ | Runner jogging on an indoor track with clinician observing from the side | 16:9 | RETURN band |
| N1 ★ | Close-up of hands placing a measuring tape on a calf | 3:2 | ASSESS inset |
| N2 ★ | Close-up of a resistance band around ankles during a side step | 3:2 | REBUILD inset |
| N3 ★ | Close-up of feet landing a hop on a floor mark | 3:2 | RETURN inset |
| P1 ★ | Wide: lone runner on an empty running track at dawn, pale sky, runner small in the right third, open left two thirds | 2:1 | Proof parallax |
| D1 ★ | Portrait of Dr Solheim, a woman around 50, slate scrubs, relaxed smile, pale corridor | 16:15 | The Room |
★ = used on home (all 18). Generate P1 at 2000 px wide for the 1.18 parallax scale.

**Binding list for inner pages (head L / R; band wash + inset). No image twice on a page.**
- Injuries: H1 / P1; T3 I1–I6; bands M1+N1, M2+N2, M3+N3.
- Method: H3 / H4; bands M1+N1, M2+N2, M3+N3.
- Team: D1 / I5; band H3+I3.
- Stories: P1 / H4; bands I1+N1, I2+N2, I3+N3.
- Fees: I6 / H2; band M1+I1.
- Athletes & Clubs: H3 / M2; band M3+N2; T3 row I4, I5, P1.
- Visit: H4 / I2; band P1+I1.
- About: D1 / P1; band H1+I5.
- Journal: I5 / M3; posts H3, I2, I3, I4, M1, M2.
- FAQ: M2 / I1.

## 11. Scroll effects

The reference has no scroll reveal (`tok(g)`: AOS loaded, zero uses). So the set below is adapted, kept to its unhurried `.3s`–slow feel. Three effects on the home page, with **sp-scroll** files copied unchanged.

| Effect | sp-* | Where | Source and adaptation |
|---|---|---|---|
| Card slide-in | `sp-reveal sp-reveal--left` (bands 1, 3), `--right` (band 2) | Block 4 card wrappers | Shinmi has none; the direction follows the alternation of its bands. IntersectionObserver, 0.8s, `cubic-bezier(.23,1,.32,1)`, `--sp-dist: 24px` |
| Grid stagger | `sp-stagger` on the grid, `sp-reveal sp-reveal--up` on each card | Block 3 and the 3 room rows | Shinmi's fade-in pagetop (slow, opacity) carried to content. 0.12s step, default 0.8s |
| Parallax | `sp-parallax` | Block 5 | See below |

Hero: none. Table, forms, legal: none. Sticky strip and hero cross-fade are theme CSS, not sp-*. At least 3 reveals sit below the fold for `check-parallax.mjs`.

### Parallax (required)
- **Block:** `front-proof`, outer Cover or Group `.sj-proof.sp-parallax`.
- **Background:** P1, as the Cover background image (`.wp-block-cover__image-background`) or `.sp-parallax__layer`.
- **Foreground:** the white panel, static, not in the moving layer.
- **Speed:** `--sp-par: 10%` desktop, `--sp-par: 7%` under 782 px. Parallax stays on mobile; band height 520 px, panel in flow at the bottom with 24 px margins.
- **Reference's motion:** the Shinmi hero's slow movement behind still type (fixed headline over moving photography), moved to a scroll-linked form. Same idea: the text stays, the picture travels.
- **Check:** `check-parallax.mjs` ≥ 6 px on desktop and mobile; 0 in reduced motion.

## 12. Similarity to the reference (target 8/10)

| Dimension | Reference | Suji | Token |
|---|---|---|---|
| Ground | `#F3F5F5` + white ≈70% | Same, 75% | a |
| Ink | `#332F26` | Same | a |
| Main | `#565565` ≈6% | Same | a |
| Steel | `#839FB6` | `#7A97AE` (−3%) | a |
| Taupe | `#998E73` | Same | a |
| Tints | `#CCC6B9`, `#CDD9E2`, `#DED9E5` | Same | a |
| First-screen saturation | ≈2% | ≤5% | a |
| Body | 16.2 px, 300, lh 2.0 | 16 px, 300, lh 2.0 | b |
| Hero heading | ≈64 px, 400, ls .1em | up to 72 px, 300, ls .02em (Latin; ls .1em CJK) | b |
| Ghost / section words | 80–120 px, thin, ls .08em | 88–120 px, 200, ls .08em | b |
| Section padding | 90–120 top, 108–157 bottom | 96 top, 120 bottom | c |
| Container | 1296 | 1296 | c |
| Column gap | ≈54 px | 54–60 px | c |
| Radius | 0 | 0 | d |
| Hard shadow | `2px 2px 0 #332F26` | Same | d |
| Strip shadow | `rgba(0,0,0,.3) 2.6px 3.1px 16px` | Same | d |
| Hero panels | 50/50, cover, no radius | Same | e |
| Band | 1413×486, 54 padding | Same | e |
| Card / inset | 747×378, ≈12% slant | Same | e |
| Thumbnail | 389×240, offset line | Same, 8 px line | e, screenshot |
| Portrait | 642×597 | Same | e |
| Notice card | 470×120, 6 px inset frame, Ø80 disc | Same, main colour instead of lavender | f |
| Header box / tab | 245×72 / 162×90 | Same | f |
| Dividers | 1 px × 36 px | Same | f |
| Pagetop | 45×45 taupe | Same | f |
| Hero timing | 5000 ms, fade 1200 ms | Same, CSS | g |
| Hover | `.3s` | Same | g |
| Nav motion | Slides in on scroll-up `.3s` | Sticky (section 0.3) | g |
| Display face | Thin serif | Thin sans, required by row | b |
Own work throughout: photographs, copy, logo.

## 13. Home acceptance checklist

1. First screen: two photos meet at the exact centre, no gap; H1 and H2 subjects readable; headline and 1 px rule lower left; slate framed card crosses the seam; address box and Book tab top right; strip at the fold with dividers and sub-labels.
2. Cross-fade runs at 5 s / 1.2 s in `?sp-motion`; `?sp-static` shows H1/H2; no reveal in the hero.
3. White headline ≥4.5:1 over the veil. `check-first-screen.py` ≤15%, target ≤5%.
4. Block order equals section 4.
5. T3: six cards, thin line off the bottom and right only, filled Ø45 circles, Latin sub-labels.
6. T2: three alternating bands in three visibly different tints; diagonal slant ≈12%; hard-shadow tab; white ghost word on the washed photo; text clear of the diagonal in all five languages.
7. Block 5: P1 moves behind a static panel, ≥6 px on desktop and mobile; `check-parallax.mjs` passes; 0 in reduced motion.
8. Block 6: edge portrait, vertical THE ROOM in taupe, name plate; people are rows, not a grid.
9. Fee table at 800 and 1280: full width of its column, price nowrap and right-aligned; stacked at 390. Prices equal section 8.
10. 390 px: no absolute labels or vertical text on the first screen, no overflow.
11. 18 image positions on home, none repeated, no text, logos, or lettering on shoes; hands correct.
12. Only one menu. Square corners everywhere. No beige ground, no sidebar, no step grid, no timeline, no four-person grid.
13. English ≥ 250 words, ≥ 3 narrative paragraphs. Figtree + Public Sans, no serif, editor matches front end.
14. `auto-gates.mjs … en … 1 1` passes.
