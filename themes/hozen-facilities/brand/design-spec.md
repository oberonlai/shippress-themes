# Hozen Facilities: design spec (stage 1 spec, binding for implementation)

Slug `hozen-facilities`, facilities management company for office campuses and civic buildings. Row b9-1: type **business** (WooCommerce compatible, not required), archetype split-screen, hero **text-left-photo-right**, first screen **top-bottom halves**, nav top-bar, page_structure **locations-network** (the contracted sites as a network + how a call-out is taken), **real documentary photography, high-key**, palette 藍鼠 `#5E6E78`.

Reference (single, ~80% similarity target): **R1 Nippon Kucho Service recruiting site** https://www.careers.nikku.co.jp/ (S5-Style, building air-conditioning / facility services). Measurements are quoted as "token a–g" = sections (a)–(g) of `reference-tokens.md`; screenshots in `ref/`. We borrow structure, techniques, the key-visual concept, colour relationships, measurements and motion. We do **not** copy R1's photos, hand-lettered tagline, Japanese copy, logo or full page layout; all photos are generated, all copy is ours.

**IMAGERY: photo** (R1's imagery is documentary photography: buildings against pale sky, engineers in navy workwear and white helmets). STYLE in §9.

**font_direction: sans** (row has no font_direction; decision explained in §3).

---

## 0. Fixed brand facts (every page and all five languages; never vary)

- **Hozen Facilities B.V.**, founded **1998** in Rotterdam by mechanical engineer **Ingrid Maas** and electrical engineer **Kwame Mensah**. We look after the plant rooms, roofs, risers and switchrooms of office campuses and civic buildings across the Rotterdam – The Hague – Dordrecht region.
- Head office and 24/7 desk: **Maashaven Oostzijde 21, 3072 HK Rotterdam, Netherlands** (fictional number). Phone (desk, 24/7) **+31 10 555 0198**. `desk@hozen-facilities.example`. Currency **EUR**, prices **excl. VAT**, in every language; no converted amounts.
- Hours: **24/7 help desk, every day of the year**. Office **Mon–Fri 08:00–17:30**. Hubs staffed **Mon–Fri 07:00–19:00**; an out-of-hours engineer rota covers evenings, nights, weekends and public holidays.
- Network: **4 hubs, 23 contracted sites, 41 engineers**. Every contracted site is within **25 minutes' drive** of a hub (how the network is designed; not a promise of arrival).
- No guarantees of results, no awards, ratings, certifications we cannot show, real media, real people, real clients or real brands. All sites, clients and people are fictional. Attendance times are **contract targets**, always worded "target".

### Hubs (the network; Home "Network", Sites, Contact, footer)
| Hub | Address (fictional) | Sites | Engineers |
|---|---|---|---|
| Rotterdam (head office + 24/7 desk) | Maashaven Oostzijde 21, 3072 HK Rotterdam | 9 | 17 |
| Delft | Rotterdamseweg 183, 2629 HD Delft | 5 | 8 |
| The Hague | Binckhorstlaan 300, 2516 BL The Hague | 6 | 10 |
| Dordrecht | Merwedestraat 48, 3313 CS Dordrecht | 3 | 6 |
| **Total** | | **23** | **41** |

### Featured sites (#01–#04; Home "Sites", Sites page, stories)
| # | Site (fictional client) | Type | Size | Since | Hub | Photo |
|---|---|---|---|---|---|---|
| 01 | Maasoever Office Campus | 6 office buildings, shared energy centre | 58,000 m² | 2009 | Rotterdam | S1 |
| 02 | Delft Public Library & Archive | civic, climate-controlled archive | 12,400 m² | 2014 | Delft | S2 |
| 03 | Haaglanden Civic Centre | council offices, public hall | 31,000 m² | 2011 | The Hague | S3 |
| 04 | Merwede Sports Centre | 25 m pool, two halls | 9,800 m² | 2018 | Dordrecht | S4 |

### Price list (7 items; identical on Home, Prices, Services, Call-outs and all five languages; EUR excl. VAT)
| # | Service | Includes | Price |
|---|---|---|---|
| 1 | Building survey & asset register | one site up to 10,000 m², every plant item tagged, written report within 10 working days | €1,850 |
| 2 | Planned maintenance contract | per site per month, from; scheduled visits, filters, belts, readings, quarterly report | from €2,400 / month |
| 3 | 24/7 help desk | per site per month; phone and portal logging, priority triage, closing notes | €310 / month |
| 4 | Reactive call-out, weekdays 07:00–19:00 | first hour on site, travel included | €95 |
| 5 | Out-of-hours call-out | evenings, nights, weekends, public holidays; first hour, travel included | €145 |
| 6 | Additional engineer hour | after the first hour, any time | €78 |
| 7 | Statutory compliance programme | per site per year: fire alarm and emergency lighting tests, water hygiene, lift and gas inspection coordination, logbook | €3,200 / year |

### Call-out priorities (contract targets; Home "Call-outs", Call-outs page)
| Priority | Meaning | Target attendance |
|---|---|---|
| P1 Emergency | risk to people, flooding, total loss of power, heating or cooling | on site within 2 hours, 24/7 |
| P2 Urgent | a system degraded, a floor uncomfortable | within 6 hours |
| P3 Routine | a fault with a workaround | within 3 working days |
| P4 Planned | improvements, small works | at the next scheduled visit |

### How a call-out is taken (5 steps; written as prose on Home, as hairline rows on the Call-outs page; never a step grid or timeline)
01 Call the desk on +31 10 555 0198 or log it in the client portal → 02 the desk agrees the priority (P1–P4) with you and texts a reference number within **10 minutes** → 03 the nearest hub sends an engineer within the target time → 04 the engineer fixes or makes safe, and logs readings and photos to the site's asset record → 05 your facilities contact gets a closing note the **same day**; if parts are needed the return visit is booked before the engineer leaves.

### Named people (7; About, Services, Call-outs, Compliance, stories)
| Name | Role | Shown on |
|---|---|---|
| Ingrid Maas | co-founder, managing director | About, story 4 |
| Kwame Mensah | co-founder, head of engineering | About, Services |
| Lucía Ortega | help desk lead | About, Call-outs, Contact |
| Pieter de Graaf | senior HVAC engineer, plant rooms | About, Services, story 1 |
| Yusuf Demir | electrical engineer, leads the out-of-hours rota | About, Call-outs, story 2 |
| Sanne Visser | compliance manager (fire, water hygiene) | About, Compliance, story 3 |
| Hanna Lind | account manager, civic buildings | About, Sites, story 4 |

### Stories ("Field notes", 4 posts; clients fictional)
1. **"A chiller swapped over one weekend"**: Maasoever Office Campus; Pieter's team lifts a new chiller onto the energy-centre roof on a Saturday morning, cooling back on Sunday 16:00 (photo P1).
2. **"Night call: a split valve under the library"**: Delft Public Library & Archive; P1 call at 02:10, Yusuf on site 03:05, archive floor kept dry, riser valve replaced the next day (photo N1).
3. **"Water hygiene, one tap at a time"**: Sanne's monthly sampling round at Merwede Sports Centre; temperatures, flushing, the logbook (photo W1).
4. **"Taking over a civic building after refurbishment"**: Haaglanden Civic Centre; Hanna and Ingrid walk the new public hall with the contractor, 412 plant items tagged before handover (photo R1).

---

## 1. Signature techniques (three; obvious at a glance, never "softened")

### T1. Staggered two-column photo pair with caption rows and ghost numerals (R1 "Our Field" + R1 interview numerals; token c, e, f; `ref/scroll-nikku-3-field-stagger.png`, `ref/nikku-project-story.png`, `ref/scroll-nikku-4-interview-ghost-numerals.png`)
- **R1**: two photo columns 636 px wide, gap 40 px, side margin 64 px; the right column starts **100 px lower** than the left. Under each photo a caption: small Latin label (meta size), a 22 px title, a round dark arrow chip at the right, and a 1 px bottom rule across the column. In the interview grid, 100 px ghost numerals `#01`–`#04` (opacity .05, letter-spacing −4 px) sit behind the captions.
- **Ours**: Home block 4 "Sites": the four featured sites #01–#04 as a 2 × 2 staggered pair. Left column x 64→700 (S1, S3), right column x 740→1376 (S2, S4) with `margin-top: 100px` on the right column (the whole column, so both right photos stay 100 px lower). Photos 636 × 477 (4:3), radius 0, no border, no shadow. Caption block under each photo, padding-top 24 px: label line Figtree 500 0.9375rem `#5E6E78` "Rotterdam · since 2009"; title row: site name Figtree 500 1.375rem/1.5 ink, arrow chip (40 × 24 px capsule, radius 12, ink `#2E303C`, white "→" 12 px) right-aligned on the same row; one meta line ink 50% "6 buildings · 58,000 m²"; 1 px ink rule under the caption (rule = full column width, rgba(46,48,60,.9)); padding-bottom 16 px. Ghost numeral `#01`… Proza Libre 500 **6.25rem (100 px)**, letter-spacing −4px, line-height 1, colour `rgba(88,95,139,.06)` (token .05, +.01 so it survives screenshot compression), `position:absolute` inside the caption block (relative), right: 0, top: −40 px, `z-index:0`, `pointer-events:none`, `aria-hidden`; caption text above it (`z-index:1`). Row gap between the two photo rows: 120 px.
- **Mobile (<782 px)**: one column, no 100 px offset, photos full width minus 2 × 20 px, ghost numeral 4rem at top −24 px right 0 (still behind the caption, inside it, no overlap with text glyphs because it sits right of a 60%-wide title; if a long title reaches it, the numeral is behind at .06 opacity, which is allowed decoration, not a label).
- **Must not be diluted**: the 100 px drop of the right column, the 1 px rule plus dark arrow chip on every caption, and the ghost numerals ≥ 6rem on desktop. Not converted to a card grid; no card backgrounds, no shadows, no radius.

### T2. Brand statement with photo focus-in and blurred ghost photos at the margins (R1 brand message; token e "ghost photos", g "photo focus-in"; `ref/nikku-brand-message.png`, `ref/scroll-nikku-2-ghost-photos-blur.png`)
- **R1**: a quiet statement set in short lines, right of centre; a sharp documentary photo on the left; around them small photos (245–302 px wide) scattered at the page margins, **blurred 5–10 px**, as if out of focus; main photos come in from blur 10 px to sharp (1 s, delay .3 s, cubic-bezier(.4,.4,0,1)); a text link with a 1 px rule and dark arrow chip under the statement.
- **Ours**: Home block 3 "Statement". Section padding 160/160 (token c). Grid on 1312 px: **H3** (hands reading a pressure gauge, 3:4) at x 64, width 520, height 693, `sp-reveal sp-reveal--zoom hz-focus`. Statement column x 688→1128 (440 px), starting 180 px below the top of H3: two short stanzas set as lines (Figtree 400 1.0625rem, line-height 2.2 = token, letter-spacing 0.02em), 4 lines each, 40 px between stanzas, then the link row "About Hozen" (Figtree 500 1rem, arrow chip right, 1 px rule, width 280 px, margin-top 56 px). **Ghost photos** (decor, `aria-hidden`, empty alt): **G1** 302 × 268 at top right (x 1074, top −60 px above the section's content start, i.e. overlapping into the section padding), **G2** 259 × 227 at x −40 (bleeding 40 px off the left edge), its top 80 px below H3's bottom edge. Both `filter: blur(6px)` permanently (token 5–10 px), opacity 0.85, radius 0, `position:absolute` inside the section (relative, `overflow:clip`), `z-index:0`; H3 and text `z-index:1`. They never overlap the statement text box (G1 stays above it with ≥ 40 px clear; G2 stays left of x 300).
- **hz-focus** (theme CSS, allowed because it only keys off sp-scroll's `.sp-in` state; no scroll listener): inside `@media (prefers-reduced-motion: no-preference)`: `html.sp-js:not(.sp-no-motion) .hz-focus.sp-reveal:not(.sp-in) img { filter: blur(10px); }` and `.hz-focus img { transition: filter 1s cubic-bezier(.4,.4,0,1) .3s; }`. Editor and `?sp-static`: no blur. The sp-reveal--zoom itself: `--sp-dur: 1s`, easing `cubic-bezier(.4,.4,0,1)` (token g) set via CSS variables on `.hz-focus`.
- **Mobile**: H3 full width minus 40 px (3:4 cropped to 4:5), statement below it, ghost photos hidden (`display:none` < 782 px; they are decor).
- **Must not be diluted**: the ghost photos must be visibly blurred (≥ 5 px) and at the margins; the statement stays short lines with line-height 2.2, not a paragraph block; H3 must come in from blur, not just fade.

### T3. Section heading lockup: Latin title + local label + 1 px vertical rule + description on one row (R1 section heads; token b, d; `ref/scroll-nikku-4-interview-ghost-numerals.png` bottom, `ref/scroll-nikku-5-recruit-cluster.png`)
- **R1**: "Interview" in a humanist sans 44 px/500, a 16 px local label right beside it on the same baseline, a 1 px vertical hairline about 50 px tall, then a two-line 15 px description, all on one row, left-aligned at the 64 px margin.
- **Ours**: **every** home section after the hero and **every** inner page head. Markup: `div.hz-lockup` (flex row, `align-items:center`, gap 0): `h2.hz-lockup__title` Proza Libre 500 **2.75rem / 1.0** ink (token b 44/44); `p.hz-lockup__label` Figtree 500 1rem/1.5 ink, margin-left 16 px; `span.hz-lockup__rule` 1 × 50 px `rgba(46,48,60,.3)` margin 0 40 px; `p.hz-lockup__desc` Figtree 400 0.9375rem/1.8 ink, max-width 26em (max 2 lines). Titles stay English in all languages (Sites, Network, Call-outs, Services, Prices, Field notes, Contact); the label and description are translated (as R1 keeps "Interview" Latin with Japanese label). Inner page heads use the same lockup with the title at **3rem** (token b "Large EN" 48 px).
- **Mobile (<782 px)**: title + label stay on one row (wrap allowed), the vertical rule becomes a horizontal 40 × 1 px rule (margin 16 px 0), description below. No absolute positioning.
- **Must not be diluted**: the vertical rule must be present and ~50 px tall; label sits beside the title (not above it); never centred.

### Supporting details (counted for similarity, not as signatures)
- **Floating white header card** with capsule pills (KV #1, §4).
- **Full-bleed photo bands** 1440 × 800 and 1440 × 446 between sections, radius 0, with `sp-parallax` (§8).
- **Contact cluster**: a small set of photos, outer one blurred, over a giant ghost word (R1 recruit cluster; Home block 11).
- Not borrowed: R1's thin curved arcs (Kotoba used arcs), hamburger-only navigation, hand-lettered tagline image.

### Continuation to inner pages (each technique on ≥ 4 inner pages)
| Page | T1 staggered pair + ghost numerals | T2 focus-in + ghost photos | T3 lockup |
|---|---|---|---|
| Sites | all four featured sites (S1–S4) staggered #01–#04, then the full site list by hub | — | page head "Sites" + each hub sub-head |
| Services | four service lines as two staggered pairs: H1, G2 / S2, B2 with #01–#04 | intro statement with **SV** focus-in; ghost photo **G1** at top right | page head + sub-heads |
| Call-outs | staggered pair C1 (left) / N1 (right, +100 px), ghost numerals `#01` `#02`, captions "Daytime desk · 07:00–19:00" / "Out-of-hours rota · 19:00–07:00" | — | page head + "Priorities" + "Steps" sub-heads |
| Compliance | — | statement with **W1** focus-in, ghost photo **G2** at the left margin | page head + sub-heads |
| About | people pair: R1 left, K1 right +100 px, captions "Since 1998" / "Our engineers" with #01 #02 | statement (Ingrid's founding note) with **G1** focus-in and ghost **K2** at right margin | page head + "People" + "History" |
| Field notes (index) | posts as staggered pairs (post 1 left, post 2 right +100 px, posts 3 / 4 likewise), ghost numerals #01–#04 | — | page head |
| Contact | hub pair: C1 left (desk), K2 right +100 px (Rotterdam hub at dawn), captions = hub address rows | — | page head |
| Prices | — | contract-terms statement with **H1** focus-in, ghost photo **G2** at the right margin | page head + "What every contract includes" sub-head |
T1 appears on 6 inner pages, T2 on 4 inner pages (Services, Compliance, Prices, About), T3 on every page: each technique is on ≥ 4 inner pages.

---

## Key visual concept

### (1) R1 first-screen concept, story and signature motion
- **What is drawn** (`ref/nikku-first.png`, `ref/scroll-nikku-1-hero-to-band.png`): a full-screen high-key photograph looking **up at a large white building** (a stadium dome and louvred plant wall) against a pale blue sky with soft clouds; a white floating header card inset 16 px with the logo left and two capsule pills (dark "募集要項", blue "Entry") plus a menu chip right; a hand-lettered white tagline "いい風になろう。" ("let's be a good wind") over the centre of the photo; a tiny vertical "Scroll Down" at the right edge. Scrolling, the next full-bleed band shows **two small engineers in navy workwear and white helmets on the roof**, then the brand statement with blurred ghost photos.
- **Story**: comfort in big buildings is invisible ("目立たない。気づかれない。快適さは、いつもそこにある。"); the people who keep the air moving behind the "ordinary" are the subject. The building first, then the people inside its machinery.
- **Signature motion**: photos come into focus (blur 10 px → 0 with fade, 1 s, delay .3 s, cubic-bezier(.4,.4,0,1)); the tagline fades after 3–4 s; edge ghost photos stay soft and drift; bands move slightly as you scroll (token g).

### (2) Our transformation scene (facilities management for office campuses and civic buildings)
Same concept, same image type (high-key documentary photographs under pale sky, navy workwear, white helmets), same motion idea, set into the row's **top-bottom halves, text-left-photo-right** composition:
- **Top half**: the white floating header card; left, our heading **"Buildings that / quietly work."** with a short lede; right, the row's documentary photograph **H1: an engineer in navy workwear and a white helmet inspecting a row of grey-blue pumps in a bright plant room**, coming into focus on load (R1 focus-in).
- **Bottom half**: a full-bleed band **H2: looking up at the roof edge of a white office building with louvred plant screens and a small figure of an engineer on the roof walkway, pale hazy sky** (R1's look-up-at-the-building hero + roof-workers band, merged), with our white tagline **"Comfort nobody notices."** over it (R1's tagline idea, typeset, not hand-lettered), the vertical "Scroll" micro-label at the right edge (desktop only), and parallax as the page scrolls.
- The story: the building everyone sees (bottom band) and the room nobody sees (top-right photo); Hozen is the quiet work between them. Then the statement (T2) says it in words.

### (3) KV checklist (every item implemented and visible on the 1440 × 900 first screen)
| # | 參考站元素 | 我們的對應 | 位置 | 動態 | 用哪張圖 |
|---|---|---|---|---|---|
| 1 | White floating header card inset 16 px, logo left, dark capsule pill + blue capsule pill + menu chip right (token c, d) | White card 1408 × 64, radius 4, no shadow; wordmark "Hozen Facilities" + 1 px rule + "Facilities management · Rotterdam"; nav links; dark pill "Prices" `#2E303C` and blue pill "Report a fault" `#0067B6`, 120–150 × 32, radius 24, white capsule arrow / plus icon | y 16→80, x 16→1424 (sticky) | pills hover .3 s cubic-bezier(.4,.4,0,1) (token g); card itself static | — |
| 2 | Look-up photograph of a big white building against pale sky, full bleed (R1 hero) + engineers on the roof (R1 band 1) | **H2** full-bleed band: low-angle white office roof edge, louvred plant screen, one small engineer on the walkway, pale hazy sky | bottom half: y 616→1416 (800 tall), visible y 616→900 (284 px) | `sp-parallax` `--sp-par: 10%` (6% < 782 px) | **H2** |
| 3 | Hand-lettered white tagline over the photo | "Comfort nobody notices." Proza Libre italic 400 2.5rem/1.2 white, text-shadow 0 1px 16px rgba(46,48,60,.25), inside the Cover content (normal flow, not on the moving layer) | horizontally centred in the band, top of text 120 px below band top (y ≈ 736) | CSS keyframe fade-in, 2 s, delay .6 s, cubic-bezier(.4,.4,0,1), gated by `@media (prefers-reduced-motion: no-preference)` + `html.sp-js:not(.sp-no-motion)`; no sp-reveal (hero rule) | on H2 |
| 4 | Documentary photo of engineers in navy and white helmets at the machinery | **H1** engineer inspecting pumps in a bright plant room (row signature), 3:2, radius 0 | top half right: x 740→1376 (636 × 424, token c column), y 128→552 | load focus-in: blur 10 px → 0 + opacity 0 → 1, 1 s, delay .3 s, cubic-bezier(.4,.4,0,1) (token g), CSS keyframes with the same gating as #3 | **H1** |
| 5 | Quiet statement voice (R1 text after the hero) placed in the first view | Heading "Buildings that / quietly work." Proza Libre 500 4.75rem/1.12 ink + label line "Facilities management since 1998" (Figtree 500 1rem `#5E6E78`) + lede (Figtree 1.0625rem/2.0, ~45 words) | top half left: x 64→640, label y 150, heading y 186→356, lede y 388→558 | none (immediately visible, LCP) | — |
| 6 | Vertical "Scroll Down" micro-label at the right edge | "Scroll" Figtree 500 0.75rem white, letter-spacing .12em, `writing-mode: vertical-rl`, with a 1 × 48 px white line under it | right edge of the band, x ≈ 1376, top = band top + 48 px; **hidden below 960 px** | none | on H2 |

The tagline and Scroll label belong to the band (block 2) which starts inside the first screen; both are visible at 1440 × 900 (band top at y 616). At 390 × 844 the first screen shows header, label, heading, lede and the top of H1 only (no vertical label, no overlaid labels); the band follows below the fold with the tagline in normal flow.

---

## 2. Colour (R1 values, token a; one accent kept, row hex added as the muted second accent)

| Role | Hex | Source (token a) | Use | Share |
|---|---|---|---|---|
| Ground | `#F5F7F9` | R1 ground exact | page ground, hero top half | ~78% |
| White | `#FFFFFF` | R1 white exact | floating header card, arrow chips on photos, mobile menu panel | ~8% |
| Ink | `#2E303C` | R1 ink exact | headings, body, dark pill, arrow chips, 1 px rules | ~7% text + rules |
| Pale band | `#EDEFF3` | R1 pale band exact | Contact cluster section (Home block 11) + footer | ~6% (bottom of page only) |
| Muted accent 藍鼠 | `#5E6E78` | row hex (row note: "one muted accent on small areas") | label lines above titles, caption labels, the lockup rule on hover, price "per month" notes | ~1% |
| Accent blue | `#0067B6` | R1 accent exact | "Report a fault" pill only, focus ring, link hover underline | < 1% (R1 < 1%) |
| Muted text | `rgba(46,48,60,.6)` (≈ `#82848C` on ground) | R1 muted text .5–.65 | meta, captions, dates | — |
| Ghost | `rgba(88,95,139,.06)` | R1 ghost `rgba(88,95,139,.05)` +.01 | ghost numerals and ghost word | — |
| Hairline | `rgba(46,48,60,.3)` | R1 vertical hairline | lockup rule, table rules | — |

- **Why both accents**: rules.palette_from_reference keeps R1's colour relationship (pale cool ground, near-black blue-grey ink, a white card, one tiny saturated blue); the row asks for 藍鼠 `#5E6E78` as the muted accent. `#5E6E78` is in R1's blue-grey family (R1 ghost `#585F8B`, ink `#2E303C`), so it takes the "small labels" role; R1's blue `#0067B6` stays on the one action pill exactly as R1 uses its Entry pill. No section is ever filled with either accent.
- Not beige: ground is cool `#F5F7F9`. Not the recent themes: Hayate stone + sage `#747864`, Enishi greige, Akari ink, Madoka sand.
- Contrast: ink on ground 12.0:1; `#5E6E78` on ground 4.9:1 (label 15–16 px 500 OK); white on `#0067B6` 5.6:1; ink on pale band 11.2:1.
- **First-screen saturated pixels**: cap = min(30%, R1 measured 12.3%) = **12.3%** (row note says ≤ 15%; the stricter value wins). Target ≤ 8%. Achieved by the STYLE (pale hazy sky, grey-blue pumps, navy workwear in small areas) and no coloured UI except the small blue pill. Measure with `python3 scripts/check-first-screen.py screenshots/home-desktop.webp --max 12.3`; write both numbers in gate.md and reference.md.

## 3. Type (font_direction **sans**; roles from token b)

**Decision**: the row lists Newsreader + Figtree but no font_direction. We set **sans** because (1) R1's display face is the humanist sans **Proza Libre** 500 with Noto Sans JP, and 80% similarity applies to type; (2) the row note allows "Latin serif / humanist display"; (3) Hitomi Vision (b10-1) already shipped Newsreader + Figtree; (4) rules.type_direction wants at least half of each batch sans and batch 9 has none recorded. Figtree from the row stays as the body face.

Families, loaded with **theme.json `fontFamilies` + `fontFace`** (woff2 in `assets/fonts/`, OFL licences verified on Google Fonts and copied to `assets/fonts/LICENSES/`), identical in editor and front end:
- `heading`: **Proza Libre** 400, 500, 400 italic (OFL). Stack `"Proza Libre", "Figtree", "Helvetica Neue", Arial, sans-serif`.
- `body`: **Figtree** variable 400–600 (OFL). Stack `"Figtree", "Helvetica Neue", Arial, sans-serif`.
- `:lang(zh-TW)` heading `"Proza Libre", "Noto Sans TC", sans-serif`, body `"Figtree", "Noto Sans TC", sans-serif`; `:lang(ja)` the same with `"Noto Sans JP"` (黑體 only; **no Noto Serif, no 明體 anywhere**). Noto Sans TC / JP 400 and 500, zh-TW and ja subsets, registered as fontFace in theme.json (the subset script is broken: use the Hokuto / Hada replacement method). style.css uses `:lang(`, so copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it in functions.php.
- CJK: headings ≈ 0.75× the Latin size, letter-spacing 0.08em (token b JP 0.08em), body line-height 1.85; fr/de `hyphens: auto`. No uppercase transforms (token b).

| Preset | Size | Weight / lh / ls | Use | Source |
|---|---|---|---|---|
| small | 0.875rem (14 px) | 400 / 1 / 0.05em | pill text | token b pill 14 |
| meta | 0.9375rem (15 px) | 400 / 1.8 | descriptions, meta, captions | token b description 15/27 |
| base | 1.0625rem (17 px) | 400 / 2.0 (statement lines 2.2) / 0.02em | body | token b body 17/37.4 (Latin lh 2.0 for paragraphs, 2.2 kept on T2 lines) |
| label | 1rem (16 px) | 500 / 1.5 | lockup label, link rows | token b label 16/24 |
| medium | 1.375rem (22 px) | 500 / 1.5 | caption titles, link titles, hub names | token b link title 22/33 |
| large | 1.625rem (26 px) | 500 / 1.6 | sub-heads on inner pages, people names | token b card heading 26/41.6 |
| x-large | 2.75rem (44 px) | Proza 500 / 1.0 | section lockup titles | token b section title 44/44 |
| xx-large | 3rem (48 px) | Proza 500 / 1.0 | inner page head titles, contact word | token b large EN 48 |
| huge | `clamp(2.6rem, 5.3vw, 4.75rem)` | Proza 500 / 1.12 / −0.005em | hero heading only | scaled from R1 (R1 hero is an image tagline) |
Max preset **4.75rem** (≥ 4.25rem rule satisfied). Ghost numerals 6.25rem and ghost word 16rem are CSS sizes on decorative elements, not presets.

## 4. Header, footer, layout tokens
- **Header (KV #1, token c, d)**: template part `header`, wrapper `position: sticky; top: 0; z-index: 50; padding: 16px 16px 0` (transparent). Card: white `#FFFFFF`, height 64 px, radius 4 px, no shadow, padding 0 24 px, flex row. Left: wordmark "Hozen Facilities" Proza Libre 500 1.375rem ink; 1 px × 16 px rule `rgba(46,48,60,.3)` margin 0 16 px; "Facilities management · Rotterdam" Figtree 400 0.75rem ink. Right (≥ 1100 px): nav links Figtree 500 0.9375rem gap 28 px — Sites, Services, Call-outs, Compliance, About, Field notes, Contact; then pill **"Prices"** (ink `#2E303C`, white text 0.875rem, 120 × 32, radius 24, white 22 × 14 capsule with ink arrow at the right inside the pill) and pill **"Report a fault"** (`#0067B6`, white text, 150 × 32, radius 24, white capsule with "+") → /call-outs/#report. 960–1099 px: nav collapses into the WP navigation overlay behind a 44 × 28 white menu chip with a 1 px `rgba(46,48,60,.15)` border and two 18 px lines (R1 menu chip); pills stay. < 960 px: card inset 8 px, height 56; wordmark + "Report a fault" pill (short label "Fault", 88 × 32) + menu chip. One navigation only (the overlay is the same menu).
- **Footer (token c)**: pale band `#EDEFF3` continuing from Home block 11 (on inner pages the footer starts with its own `#EDEFF3`), padding 120 px 64 px 154 px. Row 1: wordmark + one sentence; Row 2, four columns: 24/7 desk (phone in Proza Libre 500 1.75rem), head office address + office hours, the four hubs (one line each), nav list. Bottom: 1 px hairline, "© 1998–2026 Hozen Facilities B.V." small, language switcher.
- **Spacing (token c)**: side margin **64 px** (`4.444vw` capped, 20 px on mobile); content width **1312 px**; two-column grid 636 + 40 + 636; section padding **160 / 160 px** desktop, 96 / 96 tablet, 72 / 72 mobile; first block after the hero band 148 top / 220 bottom (token). Bands 1440 × 800 and 1440 × 446 full bleed, radius 0.
- **Radius / border / shadow (token d)**: photos 0; header card 4 px; pills 24 px; arrow chips 12 px; no shadows anywhere; rules 1 px.
- **Link row** (token d): text Figtree 500 1rem (or 1.375rem in captions), 40 × 24 ink arrow chip at the right, 1 px ink rule under, padding-bottom 16 px; hover: chip `#0067B6`, transition .3 s cubic-bezier(.4,.4,0,1), `transition-delay: 0s`.

---

## 5. Home page (en)

### First screen (1440 × 900; top-bottom halves) — see KV table
- **Top half (y 96→600)**: left column x 64→640: label, heading (2 lines), lede (≈ 45 words: who we are, what we look after, the 24/7 desk, the four hubs), and one link row "How a call-out is taken" (280 px, margin-top 32 px; may fall just below 600 at 1440 × 900, which is fine). Right column x 740→1376: H1 636 × 424 at y 128.
- **Bottom half (y 616→)**: block 2 band H2 with tagline and Scroll label.
- Nothing else: no table, form, search box, badge, centred giant type, extra buttons.
- **Mobile 390 × 844**: sticky card 64 px; label; heading 2.6rem (2–3 lines); lede 1rem/1.9; link row; H1 full width minus 40 px at 3:2. No vertical text, no absolutely positioned labels, no text over photos in the first 844 px. Band H2 520 px tall below, tagline in the Cover content flow (centred, 1.75rem).
- Load motion is CSS keyframes only, gated by `@media (prefers-reduced-motion: no-preference)` and `html.sp-js:not(.sp-no-motion)`; editor, `?sp-static`, no-JS and reduced motion show the final state.

### Block order
| # | Pattern | Purpose | Layout and photos | Copy |
|---|---|---|---|---|
| 1 | `hz-hero` | KV top half: who, what | as above; **H1** right with load focus-in | label + heading 5 words + lede ~45 words + link row |
| 2 | `hz-band` | KV bottom half: the building everyone sees | full-bleed Cover **H2**, min-height 800 px desktop / 520 mobile, `sp-parallax` `--sp-par:10%` (mobile 6%), dim overlay 0 (photo is high-key; tagline shadow only); tagline centred, Scroll label right (desktop) | 3 words |
| 3 | `hz-statement` | brand message (narrative) | **T2**: **H3** left with focus-in, two stanzas right, ghost photos **G1** (top right), **G2** (left margin); link row "About Hozen" | 2 stanzas × 4 lines ≈ 70 words + one 45-word paragraph under the stanzas |
| 4 | `hz-sites` | the network, shown as places | **T3** lockup "Sites / Where we work / Twenty-three buildings, four of them here." then **T1** staggered pair **S1, S2, S3, S4** with #01–#04, captions (hub · since, name, size) | lockup + 4 × ~20 words |
| 5 | `hz-network` | how the network is organised | T3 lockup "Network / Four hubs / Every site within 25 minutes of a hub." Two columns 636/636: left one paragraph (~80 words: why hubs, the out-of-hours rota, spare parts kept at each hub) and a figure line Proza Libre 500 2.75rem "4 · 23 · 41" with labels "hubs · sites · engineers" (Figtree 0.9375rem) under each number; right: 4 hub rows (link-row style: hub name 1.375rem, address line meta, "9 sites · 17 engineers" meta, arrow chip → /sites/#rotterdam etc., 1 px rule), `sp-stagger` with each row `sp-reveal sp-reveal--up` | ~80 words + 4 rows |
| 6 | `hz-roof` | breathing band | full-bleed **B2** (rooftop cooling towers and a steel walkway under pale sky), 1440 × 446 (aspect 3.23, R1 1567 × 446 band, cropped to the viewport), `sp-parallax` `--sp-par:8%` (mobile 6%, height 260 px); no text | — |
| 7 | `hz-callout` | how a call-out is taken (row page_structure) | T3 lockup "Call-outs / How a call is taken / One number, day and night." Row: text 636 left, **C1** (help desk, 1:1) 500 × 500 right at x 876 (R1 story row 500 × 500, token e), `sp-reveal--zoom hz-focus`. Text: one narrative paragraph (~110 words) that walks through the 5 steps in prose (no numbered grid); then the desk number Proza Libre 500 2.75rem "+31 10 555 0198" with "24/7, every day" meta; then 4 priority rows P1–P4: label "P1" Figtree 500 1rem `#5E6E78`, name 1.375rem, target right-aligned nowrap Figtree 500 1rem, 1 px rule (rows are a `<dl>`, not a table) | ~150 words + 4 rows |
| 8 | `hz-services` | what we look after | T3 lockup "Services / What we look after / Four contracts, one desk." Row mirrored: **SV** 801 × 645 left at x 64 (R1 story row, token e) `sp-reveal--zoom hz-focus`; right column x 905→1376: a 50-word paragraph then 4 link rows (title 1.375rem + arrow chip + rule): Planned maintenance → /services/#planned, Reactive repairs → /services/#reactive, Compliance → /compliance/, Help desk & reporting → /services/#desk; each with one 12-word meta line | ~100 words |
| 9 | `hz-prices` | prices (functional, mid-page only) | T3 lockup "Prices / Fees / Excluding VAT. Same in every language." Full-width `table.hz-prices` (§7) with all 7 rows; note "Every contract starts with a building survey. No minimum term on the help desk." + link row "All prices" → /prices/ | table + 20 words |
| 10 | `hz-notes` | proof (stories) | T3 lockup "Field notes / From the sites / What a week of call-outs looks like." Two columns 636/636 (aligned, **not** staggered, to keep T1 for sites): posts 1 and 2 with featured images **P1**, **N1** (16:10), `sp-reveal--zoom hz-focus`; caption: "Maasoever Office Campus · 12 Sep 2026" meta, title 1.375rem + arrow chip, rule. Link row "All field notes" right-aligned 280 px. Query Loop (2 latest) | 2 × title + meta |
| 11 | `hz-contact` | conversion | pale band `#EDEFF3`, padding 160/120. Ghost word **"HOZEN"** Proza Libre 500 16rem, `rgba(88,95,139,.06)`, centred vertically behind the cluster, `aria-hidden`, clipped by `overflow:clip`. Top row: T3 lockup "Contact / Talk to the desk / Day or night, a person answers." left; link row "Write to us" right (280 px). Cluster (R1 recruit cluster, token e): **K1** sharp 3:4 336 × 448 at x 290; **K2** 4:3 360 × 270 at x 1180, bleeding 100 px off the right edge, `filter: blur(6px)`, opacity .85 (decor, empty alt). Under the cluster: three columns: desk phone (Proza 2.25rem) + "24/7"; head office address + office hours; email + "Reply within one working day" | ~40 words |

**Home photo positions: 16** — H1 · H2 · H3 · G1 · G2 · S1 · S2 · S3 · S4 · B2 · C1 · SV · P1 · N1 · K1 · K2. No image appears twice on the home page. English home ≥ 400 words, narrative paragraphs in blocks 1 (lede), 3, 5 and 7 (≥ 3 narrative paragraphs of ≥ 20 words). CJK home ≥ 600 characters.

### Comparison with recent themes' home order
| # | Hayate Cycles | Enishi Catering | Akari Hotel | Madoka Childcare | **Hozen Facilities** |
|---|---|---|---|---|---|
| 1 | heading left + 3 off-grid photos bleeding both edges | full-bleed photo, centred title, info bar | ink wordmark screen + small photo | torn-frame photo hero | **floating white card; heading left, contained 3:2 photo right (focus-in)** |
| 2 | hairline service index 01–06 | centred statement | dusk room parallax | welcome + offset blobs | **full-bleed look-up band with tagline + vertical Scroll (parallax)** |
| 3 | shop story: road line + capsule | horizontal STEP boxes | 01 Arrival giant word | approach | **statement with blurred ghost photos (T2)** |
| 4 | ride band + poking card | vertical-caps course rows | 02 Rooms sticky stack | care day zig-zag | **sites: 2 × 2 staggered pair, ghost numerals (T1)** |
| 5 | process hairline lines + capsule | tasting split | 03 Evening | room cards | **network: figure line + 4 hub rows** |
| 6 | price table | price list | 04 Night | garden parallax | **roof band 1440 × 446 (parallax)** |
| 7 | stories 1 large + 3 rows | night photo band | 05 Breakfast | fees | **call-outs: prose + priorities + 1:1 desk photo** |
| 8 | products | circular portraits | rates | visit band | **services: 801 × 645 photo + link rows** |
| 9 | ink contact band | alternating stories | guest notes | notes | **prices (full-width table)** |
| 10 | — | enquire | enquire | — | **field notes, 2 aligned columns** |
| 11 | — | — | — | — | **pale contact cluster over ghost word** |
Why not alike: Hozen's spine is **places** (staggered site pairs with ghost numerals, then hub rows), which none of the four has; the only full-bleed photos are two bands without cards on them (Hayate's band carries a poking card, Enishi's night band a caption, Madoka's a story card); headings are the **title + label + vertical rule lockup**, unlike Hayate's large labels, Enishi's caps titles, Akari's giant chapter words and Madoka's stripe headings; no torn edges, blobs, capsules, giant words over photos, sticky stacks, circular portraits, STEP boxes, info bars or ink bands. Hayate shares the row-required "heading left, photo right" first view, but Hozen's photo is contained in the 636 px column (no bleeding, no third photo) and the bottom half is a full-bleed band, not a bleeding-left photo. Also avoided from Kotoba / Oto / Ito / Kaiten (stage-a list): marquee rows, comparison tables on ink, arcs, wave bands, circular portraits, timeline bands.

---

## 6. Inner pages (9 + posts + 404/search)

Every page: header card → **T3 page-head lockup** (title 3rem) at padding-top 120 px → page body → contact strip (pale band `#EDEFF3`, lockup "Contact / Talk to the desk" + phone + link row) → footer. No sidebar. Each image at most once per page.

1. **Sites** (`/sites/`, page_structure core): lockup "Sites / Where we work / 23 buildings, 4 hubs." → full-bleed band **H2** 1440 × 560 `sp-parallax --sp-par:8%` → **T1** staggered pair S1–S4 #01–#04 (each caption links to the anchor of its site story) → "Network" sub-lockup → four hub sections (`#rotterdam`, `#delft`, `#the-hague`, `#dordrecht`): hub sub-head (1.625rem) with address, engineers and a list of its sites as hairline rows (site name · type · m² · since); totals 23 sites / 41 engineers. Site lists are `<dl>`/rows, stack naturally on mobile. Copy: ~350 words (Hanna on onboarding a site in 90 days).
2. **Services** (`/services/`): lockup "Services / What we look after / Four contracts, one desk." → **T2** statement with **SV** focus-in, ghost **G1** → **T1** two staggered pairs: **H1** "Planned maintenance" (#01, `#planned`), **G2** "Reactive repairs" (#02, `#reactive`), **S2** "Compliance" (#03 → Compliance page), **B2** "Help desk & reporting" (#04, `#desk`); each caption followed by a 60–80 word paragraph and the related prices (items 2, 4–6, 3) as small lines. Kwame and Pieter quoted once each.
3. **Call-outs** (`/call-outs/`): lockup "Call-outs / How a call is taken / One number, day and night." → desk number block (phone Proza 3rem, "24/7, every day of the year", `#report` anchor with the steps for logging online) → **T1** pair **C1** (#01 "Daytime desk · 07:00–19:00") / **N1** (#02 "Out-of-hours rota · 19:00–07:00", +100 px) → "Priorities" table P1–P4 (`table.hz-table`, stacks on mobile) → "Steps" the 5 steps as hairline rows 01–05 (number `#5E6E78` 1rem, text 1.0625rem; no boxes, no icons, no vertical line) → prices 4, 5, 6 as lines. Lucía and Yusuf quoted.
4. **Compliance** (`/compliance/`): lockup "Compliance / The statutory year / Tests, samples and logbooks, on schedule." → **T2** statement with **W1** focus-in, ghost **G2** left → annual programme as a `table.hz-table` (task · frequency · who): fire alarm test weekly, emergency lighting monthly flick test / annual 3-hour test, water temperatures monthly, legionella risk review every 2 years, lift inspection coordination twice a year, gas safety annual, F-gas leak checks per system → band **B2** 1440 × 446 `sp-parallax` → **H3** with Sanne's note (photo 636 left, text right) → price 7. 
5. **Prices** (`/prices/`): lockup "Prices / Fees / Excluding VAT." → full-width `table.hz-prices` 7 rows → "What every contract includes" sub-lockup: 4 hairline rows (survey first, named engineer per site, quarterly report, portal access) → **T2** contract-terms statement: **H1** (3:4 crop, 520 wide) left with `hz-focus`, short lines right (12-month planned maintenance, 3-month notice; help desk no minimum term; survey credited against the first year), ghost **G2** blurred at the right margin. Same numbers as §0.
6. **About** (`/about/`): lockup "About / Since 1998 / Two engineers, one rented van, a plant room in Rotterdam." → **T2** statement (Ingrid's founding note) with **G1** focus-in, ghost **K2** right → **T1** pair **R1** (#01 "Since 1998") / **K1** (#02 "Our engineers", +100 px) → "People" sub-lockup: the 7 people as hairline rows (name 1.625rem, role meta, one sentence) — **no portrait grid** → "History" as 4 short paragraphs (1998 founded; 2009 Maasoever, first campus; 2014 Delft hub; 2018 Dordrecht hub) — prose, **no timeline graphic**.
7. **Field notes** (`/field-notes/`, `home.html` / `archive.html`): lockup "Field notes / From the sites" → posts as **T1** staggered pairs (post 1 left, post 2 right +100 px; posts 3 / 4 likewise), images **P1, N1, W1, R1**, ghost numerals #01–#04, caption = site · date, title, arrow chip. Single post (`single.html`): label (site · date) `#5E6E78`, title Proza 3rem, featured image full content width 16:9, text column 720 px, 1 px rule, "Next note" link row.
8. **Contact** (`/contact/`): lockup "Contact / Talk to the desk / Day or night, a person answers." → **T1** pair **C1** (#01 "24/7 desk", phone, email) / **K2** (#02 "Rotterdam head office", +100 px, address, office hours) → "Hubs" four hub rows with addresses and hours (07:00–19:00) → note: "For an emergency, call. Do not use e-mail for P1." No form required (optional WP form; never on the first screen).
9. **Privacy & terms** (`/privacy/`): lockup + plain text column 720 px (no effects).
10. **404 / search**: lockup "Not found / This page has moved" + link row home; search results as hairline rows.

Inner-page image check (each image once per page): Sites H2, S1–S4 · Services SV, G1, H1, G2, S2, B2 · Call-outs C1, N1 · Compliance W1, G2, B2, H3 · Prices H1, G2 · About G1, K2, R1, K1 · Field notes P1, N1, W1, R1 · Contact C1, K2.

## 7. Responsive and table rules (hard; auto-gates)
- **390 px first screen**: no vertical text (`writing-mode` elements hidden < 960 px), no absolutely positioned labels or text over photos, no overlap; scrollWidth == innerWidth at 390 and 1280.
- **Price table `table.hz-prices`** (Home 9, Prices): at **≥ 782 px** `width:100%` of the 1312 content (alignwide, never a narrow column), `table-layout: auto`; columns: # (3rem, `#5E6E78`), Service (Figtree 500 1.0625rem), Includes (meta, muted), Price (Figtree 500 1.0625rem, `white-space: nowrap; text-align: right; padding-right: 0`, min-width 11ch). 1 px ink rule top and bottom of the table, 1 px `rgba(46,48,60,.15)` between rows, row padding 20 px 0. Must not be cut or overflow at 800 and 1280 px.
- **< 782 px every table** (`hz-prices`, `hz-table` priorities and compliance) becomes stacked: `thead` visually hidden, each `tr` a block with 1 px rule, each `td` a block line with `data-label` shown as a small muted label; price line right-aligned, nowrap.
- Staggered pairs: single column, offset removed; ghost photos hidden; story rows stack photo first; lockup rule turns horizontal.
- Header: no overlap with content at any width (sticky in flow).

## 8. Scroll motion (sp-scroll; copy `pipeline/assets/sp-scroll/` unchanged into `assets/`; max 3 kinds per page; hero has no sp-reveal)
| Effect (sp class) | Where | R1 source and timing | Values |
|---|---|---|---|
| **E1 Photo focus-in**: `sp-reveal sp-reveal--zoom` + theme `hz-focus` (blur 10 px → 0) | Home H3 (block 3), S1–S4 (block 4, each photo figure), C1, SV, P1, N1; inner pages: the T2 photo and every T1 photo | R1 `.sd.appear` photo focus-in: trigger = viewport entry (class toggle), 1 s, delay .3 s, cubic-bezier(.4,.4,0,1), distance 0 (token g) | `--sp-dur:1s`, ease `cubic-bezier(.4,.4,0,1)`, blur transition 1 s delay .3 s; zoom scale 1.06 → 1 (sp default) |
| **E2 Text / row fade-up in sequence**: `sp-stagger` parent + `sp-reveal sp-reveal--up` children | Home block 4 caption blocks (the two columns stagger: left caption, right caption), block 5 hub rows, block 8 service link rows; inner pages: hub rows, people rows | R1 text/link fade 1–2 s delay .3 s same easing; staggered columns come in one after the other ≈ .3 s | `--sp-dist:20px` (≤ 30), `--sp-dur:1s`, stagger step: sp default .12 s (CSS variable may be raised to .3 s to match R1) |
| **E3 Parallax**: `sp-parallax` | Home block 2 (H2) and block 6 (B2); Sites head band (H2); Compliance band (B2) | R1 full-bleed bands and edge ghost photos drift with scroll (continuous, linear) | see below |
Not on: hero block 1, price tables, forms, legal text, the Contact strip. Horizontal lists: none.

### Parallax (required)
- **Home block 2 `hz-band`** (first screen bottom half): Cover block with class `sp-parallax`, background image **H2** (`.wp-block-cover__image-background` is the moving layer); foreground = the tagline paragraph and the Scroll label inside `.wp-block-cover__inner-container` (not moving). `--sp-par: 10%` desktop, `--sp-par: 6%` below 782 px (kept on mobile). Min-height 800 px / 520 px. R1 counterpart: the 1440 × 800 band and the hero building that slide under the fixed header as the page moves.
- **Home block 6 `hz-roof`**: Cover `sp-parallax`, **B2**, `--sp-par: 8%` (mobile 6%), 446 px / 260 px, no foreground text (R1's 1567 × 446 bleed band).
- reduced-motion / `?sp-static` / no JS / editor: no movement, no scale. Verified by `check-parallax.mjs` (≥ 6 px desktop and mobile; ≤ 1 px reduced motion; ≥ 3 reveals hidden before entry and visible after; nothing transparent after scrolling to the end).

## 9. Photos (18; Grok, one at a time; read every image)

STYLE (exact string on every prompt; `IMAGE_STYLE="<STYLE>" scripts/grok-image.sh out.webp "<subject>"`):
`high-key documentary photograph, bright soft overcast daylight, pale hazy sky, clean modern international office and civic buildings, white and pale grey-blue architecture and machinery, engineers in plain unbranded navy workwear and white safety helmets, diverse adults, calm candid working moment, 35mm lens, natural colours with low saturation, generous empty space, no text, no logos, no brand marks, no readable labels or signage, no Japanese elements`

18 images, webp, ≤ 300 KB, ≤ 2000 px, 0 cut-outs, one `readme.txt` line each (AI-generated, CC0). Regenerate any image with text, logos, warped hands or faces, saturated colour fields, or a style drift. ★ = used on Home.

| ID | Subject / composition | Aspect | Pages (once per page) |
|---|---|---|---|
| H1 ★ | engineer in navy workwear and white helmet crouching beside a row of grey-blue pumps with insulated pipes in a bright white plant room, torch in hand, side view, room light from high windows | 3:2 | Home 1 (hero right); Services pair; Prices |
| H2 ★ | looking up at the white roof edge of a modern office building with louvred plant screens, one small engineer walking on the roof walkway at the right third, pale hazy sky filling the upper half | 16:9 (crop 1.8) | Home 2 (band); Sites head band |
| H3 ★ | close-up of a gloved hand holding a small torch to a round pressure gauge on a pale pipe, navy sleeve, shallow depth of field | 3:4 | Home 3 (statement); Compliance |
| G1 ★ | glass and white-fin facade detail reflecting pale sky, abstract | 4:3 | Home 3 ghost (blurred); Services ghost; About statement |
| G2 ★ | long plant-room corridor with insulated silver pipes in perspective, soft light | 4:3 | Home 3 ghost (blurred); Services pair; Compliance ghost; Prices ghost |
| S1 ★ | Maasoever Office Campus: courtyard between white office buildings with young trees, two engineers crossing with a toolbag, low angle | 4:3 | Home 4 (#01); Sites |
| S2 ★ | Delft library atrium: engineer on a scissor lift checking a ceiling air diffuser above empty reading tables, bright skylight | 4:3 | Home 4 (#02); Sites; Services pair |
| S3 ★ | Haaglanden Civic Centre: pale stone and glass civic building with a wide public plaza, overcast, people small | 4:3 | Home 4 (#03); Sites |
| S4 ★ | Merwede Sports Centre pool plant room: engineer checking a water sample beside filtration tanks, blue-grey pipes | 4:3 | Home 4 (#04); Sites |
| B2 ★ | rooftop cooling towers and a steel walkway with railings under a pale hazy sky, wide | 3.2:1 | Home 6 (band); Services pair; Compliance band |
| C1 ★ | help desk: operator with a headset at a tidy desk with two monitors (screens blurred, no text) in a bright office, notebook, plant on the sill | 1:1 | Home 7; Call-outs pair; Contact pair |
| SV ★ | electrical engineer with a tablet in front of an open grey switchboard (no labels), white helmet under arm | 5:4 | Home 8; Services statement |
| P1 ★ | early morning: a mobile crane lifting a new grey chiller unit onto a white rooftop, two engineers guiding it with tag lines | 16:10 | Home 10 (post 1); Field notes index; single post 1 |
| N1 ★ | evening in a building basement under bright work lights: engineer with a headlamp tightening a valve on a vertical riser pipe, archive shelving softly out of focus | 16:10 | Home 10 (post 2); Call-outs pair; Field notes |
| K1 ★ | engineer on a stepladder adjusting ductwork in an open bright ceiling void, looking up, tall framing | 3:4 | Home 11 (cluster, sharp); About pair |
| K2 ★ | office campus buildings across calm water at dawn, pale sky, wide and quiet | 4:3 | Home 11 (cluster, blurred); About ghost; Contact pair |
| W1 | compliance manager in a pale grey jacket taking a water sample from a stainless tap into a clear bottle, clipboard, bright washroom plant area | 4:3 | Compliance statement; Field notes (post 3) |
| R1 | two people with a tablet walking through a newly refurbished bright civic hall with a timber ceiling, handover walk | 16:10 | About pair; Field notes (post 4) |

(P1 is used on Home, Field notes index and single post 1 only.) Home uses 16 of the 18 (W1, R1 inner-only).

## 10. Home acceptance checklist
1. First screen 1440 × 900 = top-bottom halves: white floating header card (inset 16 px, radius 4, dark "Prices" pill + blue "Report a fault" pill); heading "Buildings that / quietly work." ≥ 4.25rem left; H1 3:2 right in the 636 px column; band H2 starting at y ≈ 616 with the white tagline and the vertical "Scroll" label visible. All six KV rows visible.
2. Saturated pixels ≤ 12.3% (`check-first-screen.py --max 12.3`); no coloured field other than the small blue pill.
3. H1 comes into focus on load (blur → sharp) in `?sp-motion`; final state in `?sp-static`; no sp-reveal in block 1.
4. T1: four site photos in two columns, right column 100 px lower, caption rows with dark arrow chips and 1 px rules, ghost numerals #01–#04 ≥ 6rem visible.
5. T2: H3 left with blur-in, short statement lines right (lh 2.2), two blurred ghost photos at the margins.
6. T3 lockup (title + label + 50 px vertical rule + description) opens blocks 4, 5, 7, 8, 9, 10, 11.
7. Two parallax bands (H2, B2) pass `check-parallax.mjs` desktop + mobile.
8. Price table full width at ≥ 782 px, price column right + nowrap and uncut at 800 / 1280; stacked at 390.
9. 16 photo positions, no image twice; no text/logos in photos; same STYLE.
10. Numbers match §0 everywhere (7 prices, P1–P4 targets, 4 hubs / 23 sites / 41 engineers, 24/7, 1998, phone); ≥ 400 English words, ≥ 3 narrative paragraphs.
11. Colours: ground `#F5F7F9` dominant, ink `#2E303C`, white header card, `#EDEFF3` only at the bottom (contact cluster + footer), `#5E6E78` labels, `#0067B6` only on the fault pill.
12. 390 px: no horizontal overflow, no vertical/absolute labels, no overlap; header card does not cover content.
13. Fonts: Proza Libre headings, Figtree body, Noto Sans TC/JP for zh-TW/ja, identical in editor and front end (`check-editor-fonts.mjs`).

## 11. Similarity table (target ~80%; values from reference-tokens.md)
| Dimension | R1 value (token) | Hozen value |
|---|---|---|
| Ground | `#F5F7F9` ~85% (a) | `#F5F7F9` ~78% |
| Ink | `#2E303C` (a) | `#2E303C` |
| White card | `#FFFFFF` ~12% header card (a) | `#FFFFFF` header card + chips ~8% |
| Pale band | `#EDEFF3` footer (a) | `#EDEFF3` contact cluster + footer |
| Accent | `#0067B6` < 1%, Entry pill (a) | `#0067B6` < 1%, "Report a fault" pill; + row `#5E6E78` labels ~1% |
| Ghost | `rgba(88,95,139,.05)` (a) | `rgba(88,95,139,.06)` |
| First-screen saturation | 12.3% (a) | ≤ 12.3%, target ≤ 8% |
| Section title | Proza Libre 44/44 500 (b) | Proza Libre 2.75rem/1.0 500 |
| Large EN | Proza Libre 48 500 (b) | Proza Libre 3rem 500 (inner heads) |
| Body | 17 / 37.4 (2.2), ls .08em, Noto Sans JP (b) | Figtree 1.0625rem / 2.0 (T2 lines 2.2), ls .02em; CJK Noto Sans 1.85, ls .08em |
| Label / description / meta | 16/24 500 · 15/27 · 15 ink .5 (b) | 1rem/1.5 500 · 0.9375rem/1.8 · 0.9375rem ink .6 |
| Link title | 22/33 500 (b) | 1.375rem/1.5 500 |
| Pill text | 14 (b) | 0.875rem |
| Side margin / content | 64 px / 1312 (c) | 64 px / 1312 |
| Photo columns | 636 + 40 gap, right +100 px (c, e) | 636 + 40, right column +100 px |
| Section padding | 160/160; first 148/220 (c) | 160/160; block 3 148/220 |
| Bands | 1440 × 800; 1567 × 446 (c, e) | 1440 × 800 (H2); 1440 × 446 (B2) |
| Footer | pt 120 / pb 154 (c) | pt 120 / pb 154 |
| Header card | 1408 × 64 at 16 px inset, radius ≈ 4 (c, d) | 1408 × 64, inset 16, radius 4 |
| Pills | 120 × 32 r24, dark `#2E303C` + blue (d) | 120 × 32 r24 dark + 150 × 32 blue |
| Photo radius / border / shadow | 0 / none / none (d) | 0 / none / none |
| Vertical hairline | 1 px ~50 px between title and description (d) | 1 × 50 px rgba(46,48,60,.3) |
| Link rows | 1 px bottom rule + 24 px dark round arrow chip (d) | 1 px rule + 40 × 24 ink capsule chip |
| Ghost numerals | 100 px, opacity .05, ls −4 px (f) | 6.25rem, .06, ls −4px |
| Ghost photos | 245–302 px, blur 5–10 px at margins (e) | 302 × 268, 259 × 227, blur 6 px |
| Story rows | 801 × 645 / 500 × 500 alternating (e) | SV 801 × 645 left; C1 500 × 500 right |
| Recruit cluster | 3–4 photos, outer blurred, ghost word (e, f) | K1 sharp + K2 blurred, ghost "HOZEN" |
| Photo motion | blur 10→0 + fade, 1 s, delay .3 s, cubic-bezier(.4,.4,0,1) (g) | identical (`hz-focus` + sp-reveal--zoom) |
| Text motion | fade 1–2 s, delay .3 s (g) | sp-reveal--up 20 px, 1 s, stagger |
| Hover | .3 s same easing (g) | .3 s cubic-bezier(.4,.4,0,1) |
| Imagery | high-key documentary, pale sky, navy workwear, white helmets (e) | same (STYLE §9), our own generated photos |
| Not copied | — | R1 photos, hand-lettered tagline, copy, logo, arcs, full page layout |
