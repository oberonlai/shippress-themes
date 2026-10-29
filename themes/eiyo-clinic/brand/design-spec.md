# Eiyo Clinic: design spec (stage 1, binding for implementation)

Slug `eiyo-clinic`, nutrition and dietetics clinic for adults, type **health** (WooCommerce-compatible, not required; must work with it off). Row b17-3: archetype single-column-longform, hero text-left-photo-right → realised as **top-bottom halves** (photo top, text bottom, per `first_screen`), nav split, page structure **narrative → problem → method → proof**.

Only reference: **Kobe Yakult** https://kobe-yakult.co.jp/ (S5-Style). Numbers come from `reference-tokens.md` (token IDs in brackets, e.g. [c-hero] = section (c) hero inset). Borrow structure, techniques, colour relationships, the key-visual concept and motion. Do **not** copy photos, copy, the product shot, the illustrations or the logo.

Fixed brand facts (every page, all five languages): **Eiyo Clinic**, founded **2016**, one floor of a small building at **418 Alder Row, Suite 2, Seattle, WA 98103** (fictional address). Three consult rooms and one teaching kitchen. Currency **USD** in every language (no conversions). Tone: plain, warm, never promising results.

Similarity target: **≈80 %** to Kobe Yakult on colour relationships, image presentation, scroll motion, decorative details and layout (see §13 table). Imagery = **photo** (documentary, high-key).

---

## 1. Signature techniques (three, all obvious at a glance)

### T1. Inset rounded hero photo, headline under it at left, paper strip at right (Kobe Yakult first screen, `ref/ky-fold.png`)
- Reference: under a 75 px white header, one high-key photo inset **32 px** from both sides, width 1376 at 1440 (ratio **1.90**), radius **10 px**, no overlay, no text on the photo [c-hero, d-radius]. Below the photo, on white: the H1 at the left edge of the photo (x = 32) in 32 px/600 ink; on the same baseline at the right edge a `#F4F3EF` strip 480×66, radius 5, padding 20, holding a date + one line [d-news].
- Eiyo (desktop 1440×900): header 75 px. `figure.ec-kv` margin `0 32px`, width `calc(100% - 64px)`, `aspect-ratio: 1.9`, but `max-height: calc(100svh - 75px - 128px)` so the H1 line is always inside the first screen at 900 px (at 1440×900 the photo is 1376×697). Radius 10 px, `overflow: clip`. Below: a two-column row with padding `28px 32px 0`: left H1 (see §5 type: 2.25rem/600/lh 1.6, ink), right a paper strip `#F1F3F0`, width 480 px, min-height 66 px, radius 5 px, padding 20 px, `display:flex; gap:24px; align-items:center`: muted 0.9375rem "Tue & Thu" + ink 0.9375rem "First consults have mornings open this month →" linking to /book/. Strip is static in normal flow (no absolute positioning).
- The photo is the **KV crossfade + parallax** (see §3, §10).
- Mobile 390: gutters 16 px, photo `aspect-ratio: 4/5`, max-height 62svh, radius 10 px; H1 below (1.625rem), strip below H1 full width. Everything in normal flow; no vertical text, no absolutely positioned labels.
- Must not be diluted: the photo must be inset (not full-bleed) with exactly 10 px corners and visible white gutters; the headline must sit **under** the photo, never on it; the strip must be a filled paper block, not a bordered box.

### T2. Four-line statement that lights up while scrolling (Kobe Yakult about block, `ref/scroll-textfill-mid.png` → `ref/scroll-textfill-done.png`)
- Reference: 270 px top padding, four lines at 37 px/600, line-height **2.0**, letter-spacing **0.06em**, ink; characters start at opacity 0.3 and fill to 1 as the block crosses the viewport (≈300 px scrub); under it a paper chip link (dot ● + label + 18 px white arrow chip); line-art vignettes float right [b-about, g-about].
- Eiyo home block 2: content container 1290 (x 75–1365) [c-container]; text column 7/12 left; four `p.ec-line` lines, 2.3125rem/600/lh 2.0, ls 0.02em Latin, 0.06em CJK:
  "Most of eating well is plain meals." / "Breakfast you will actually make," / "a lunch that survives the day," / "and a plan written with you, not for you."
- Motion: parent `ec-statement sp-stagger`, each line `sp-reveal sp-reveal--up` with `--sp-dist: 8px; --sp-dur: 1.2s; --sp-ease: linear`; theme CSS sets the pre-entry state to **opacity 0.3** (not 0): `html.sp-js:not(.sp-no-motion) .ec-statement .sp-reveal:not(.sp-in){opacity:.3}` (selector starts with `html.sp-js`, allowed). Stagger 0.12 s steps → the lines fill top-to-bottom like the reference.
- Under the lines (gap 72 px): the **dot-arrow chip** (T-link, see §6) "About the clinic" → /about/.
- Right column 4/12, offset down 120 px: one photo **P04** 4:5, radius 7 px (in place of the reference's line-art vignette; photo-led imagery).
- Must not be diluted: 4 lines, ≥ 2.25rem, line-height 2.0, start opacity 0.3 (visible as "grey text that turns ink"), 270 px top padding desktop (160 px mobile).

### T3. Pine rounded block with two hairline arches (Kobe Yakult item block, `ref/ky-s3.png`, `ref/scroll-arches-in.png`)
- Reference: one huge saturated section (≈781 px tall) with ≈90 px rounded bottom-left and top-right corners; inside, two tall pill/arch outlines 484×576, radius 240, **1 px white**, vertically offset (left one high, right one ≈300 px lower), title/3 lines/dot-arrow link centred inside; a centre object; a huge low-contrast Latin phrase bottom-left; arches rise in (opacity 0→1, y 46→0, Power4.easeOut) [d-radius, f-arch, g-arch].
- Eiyo home block 4 "How one consult runs": `alignfull` group, background pine `#2C4038`, `border-radius: 0 90px 0 90px`, padding 140 px 75 px [c-item]. Grid 12 columns:
  - Arch A at columns 1–4, top 0: 484×576 (`width: min(484px, 100%)`, `aspect-ratio: 484/576`), `border: 1px solid #fff; border-radius: 240px`, content centred: H3 1.6875rem/600 white "Before you come", 3 lines white 0.9375rem/lh 2 ("Book a first consult. We send a three-day food note. Write what you ate, not what you should have."), white dot-arrow link "Booking →".
  - Centre columns 5–8: photo **P08** 4:5, radius 10 px, top offset 120 px (the reference's centre object; a photo, not a cut-out).
  - Section head at columns 9–12 top: H2 2.3125rem/600 white ls 0.06em "How one consult runs" + one line 0.9375rem.
  - Arch B at columns 9–12, top offset 300 px: "In the room, 60 minutes" — "We read your note together, pick two changes, and write the plan by hand. A typed copy reaches you within 2 working days. Follow-ups at weeks 2, 6 and 12." link "The approach →".
  - Bottom-left big phrase: "Plainer meals, planned together." Instrument Sans **4.25rem**/600 (`xx-large`, the theme max), colour `#3A5247` (pine +8 % lightness, low contrast, decorative, `aria-hidden` duplicate of nothing important).
  - Motion: parent `sp-stagger`, arches A and B `sp-reveal sp-reveal--up` (`--sp-dist: 30px` [g-arch 46 px capped at 30], `--sp-dur: .9s`, `--sp-ease: cubic-bezier(.165,.84,.44,1)` = Power4.easeOut-like). The photo does not reveal.
  - Mobile: corners 0 48px 0 48px, padding 80 px 16 px; order = head, Arch A, photo, Arch B, phrase (2.25rem); arches width 100%, `aspect-ratio: auto`, min-height 420 px, radius 200 px, padding 72 px 32px.
- Must not be diluted: deep pine field (not a tint), corners ≈90 px on exactly two opposite corners, arches 1 px white hairlines with ≥200 px radius and vertical offset, white type inside; this is the **only** saturated block on the home page.

### Supporting (not counted): coverflow photo row with an overlapping paper caption card (`ref/ky-s2.png`)
Used for the home "problem" block (§4 block 3) and the Services page. Static (no slider JS).

### Continuation to inner pages (required; ≥4 per technique where marked)
| Page | T1 inset photo head | T2 statement fill | T3 pine arches | Other |
|---|---|---|---|---|
| About | P03, strip "Founded 2016 · Seattle" | yes, 4 lines about why the clinic exists | — | dot-arrow chips |
| Approach | P08, strip "60 min first consult" | yes | **full T3 block** (Arch A Before / Arch B In the room) + a third arch row (After: plan in 2 days, follow-ups) | — |
| Services | P14, strip "7 ways to see us" | — | **four arches, 2 per row** on pine (one per main service) | coverflow problem row |
| Dietitians | P12, strip "7 people, 3 rooms" | yes | — | name list on paper |
| Stories | P02, strip "3 stories, shared with consent" | — | — | 4:3 cards radius 7 |
| Fees & insurance | P13, strip "Itemised receipts for your insurer" | — | small T3: one arch on pine holding the Three-month plan | price list (§7) |
| Visit & contact | P01, strip "Mon–Fri 8:30–18:00" | — | one arch on pine with hours | — |
| FAQ | P17, strip "Book by phone or online" | — | — | details list |
| Journal (index/single) | index: P03; single: featured image as inset 10 px photo with title under it | — | — | cards |
→ T1 on all 9, T2 on 4 (About, Approach, Dietitians, + Home), T3 on 4 (Approach, Services, Fees, Contact).

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
Kobe Yakult opens on a bright, white, curtain-lit room: a family laughing at a wooden table set with simple everyday food, framed as one large inset rounded photograph; underneath it a calm headline ("delivering healthy everyday days") and a small paper news strip. The story is that health is made of ordinary shared meals at home, and the company is shown as part of that table rather than as a product. Signature motion: three such table photos crossfade slowly (Splide fade, ≈1 s fade / ≈5 s hold); scrolling down, the statement below fills in from grey to ink; later, arches rise into a red block.

### (2) Our translation (same composition, same motion idea, same image type)
Same inset rounded high-key photograph of people at a plain wooden table by a sheer-curtained window, now in **a bright consult room**: a dietitian and a client sit across the table; between them **one simple plate** (wholegrain toast, eggs, greens, a bowl of fruit) and **a handwritten one-page plan** with a pencil. Story: "plainer everyday meals, planned together" — the clinic is shown at the table, not as a medical office. The crossfade then moves from clinic to home: slide 2 the client at their own kitchen table with a simple packed lunch and the same handwritten plan; slide 3 two adults sharing a plain dinner at home. The headline beneath and the next-consult strip mirror the reference. Motion: same slow crossfade + our required parallax drift; below, the statement fills in exactly like the reference.

### (3) KV checklist (all six on the first screen, visible at 1440×900 and 390×844 unless noted)
| # | Reference element | Our counterpart | Position | Motion | Photo used |
|---|---|---|---|---|---|
| 1 | Inset rounded photo 1376×725, 32 px gutters, radius 10, under 75 px header | Same inset rounded photo: dietitian + client at a plain wood table by a sheer-curtained window, simple plate + handwritten plan | first screen top: x 32, y 75, w calc(100%−64px), ratio 1.9, max-height 100svh−203px; mobile w 358, 4:5 | `sp-parallax` drift `--sp-par: 6%` (mobile 4%) | P01 |
| 2 | 3-photo slow crossfade of family-table scenes | 3-slide crossfade: clinic table → client's kitchen table with packed lunch → shared plain dinner at home | inside the same frame | CSS keyframes, 18 s cycle, 1 s fade, 5 s hold; static P01 under reduced-motion / `?sp-static` / editor | P01, P02, P03 |
| 3 | 32 px/600 headline under photo, left | H1 "Plainer everyday meals, planned with you." 2.25rem/600 ink, one line at 1440 | first screen bottom-left, x 32, 28 px under the photo | none (hero: no reveal) | — |
| 4 | `#F4F3EF` news strip 480×66, radius 5, right | Paper strip `#F1F3F0` 480×66 radius 5: "Tue & Thu · First consults have mornings open this month →" | bottom-right, same row as H1; mobile under H1 | none | — |
| 5 | Sheer white curtain + white wall, high-key, soft daylight, wood table | Same: sheer curtain at the left third, white wall, light oak table, daylight from the left | in the photo | parallax | P01 (P02/P03 same light) |
| 6 | Red contact button top-right (the only saturated mark on the fold) | Pine "Book a consult" button in the header, 15px/500, padding 10/20, radius 4 | header right | hover darkens to `#22332C` | — |
Not allowed: replacing the scene with a product, a food flat-lay or an empty room; text on the photo; full-bleed hero.

---

## 3. First screen composition (1440×900)
- Header 75 px white: left wordmark "Eiyo Clinic" (Instrument Sans 1.375rem/600, ink, plus a 6 px pine dot before it); **split nav**: centre-right text links 16px/600 ls 0.05em [b-nav] — About, Approach, Services, Dietitians, Fees, Journal, Contact — then a 32 px gap and the pine "Book a consult" button. Under 960 px: wordmark + button + a two-line menu icon; overlay menu on white with links 2.5rem/lh 1.6 [b-drawer].
- KV per §2 checklist. H1 + paper strip under it. Nothing else.
- Forbidden on the first screen: table, form, search box, text on the photo, giant centred word, vertical text, extra badges.
- Saturated share: target ≤ 3 % (button + small greens in the photo), gate `check-first-screen.py` **15 %** (common rule; row ceiling 30 %).

---

## 4. Home page

### Block order
| # | Pattern | Purpose | Layout / photo position | Copy |
|---|---|---|---|---|
| 1 | `front-kv` | key visual | T1 + crossfade P01/P02/P03, `sp-parallax` | H1 + strip ≈ 20 words |
| 2 | `front-statement` | narrative | **T2**: four lines left 7/12, photo P04 (hands writing a three-day food note beside tea) right 4/12 offset 120 px, dot-arrow chip → About; under the chip one 70-word paragraph (0.9375rem, lh 2, max 560 px) | 4 lines + 70 words |
| 3 | `front-stalls` | problem: "Where everyday eating stalls" | centred eyebrow "The problem" 17px/500 [b-eyebrow]; static coverflow: centre photo P06 (689×427, ratio 1.61, radius 7) at full opacity; side photos P05 (left) and P07 (right) 452×280, `opacity:.45; filter: blur(2px)`, vertically centred, partly behind the centre; paper caption card `#F1F3F0` 413×244, radius 5, padding 36, overlapping the centre photo's lower-right by −90 px x / −120 px y [e-overlap], holding H3 "Late dinners" + 2 lines + chip; under it a tab row of three labels separated by 1 px vertical rules `#D5DBD7`: "Skipped breakfast" (grey), **"Late dinners"** (ink), "All-or-nothing weeks" (grey) — each label links to /approach/#stalls. Then a 2-column text: 3 short paragraphs (one per stall, 45 words each) | ≈ 150 words |
| 4 | `front-method` | method | **T3** pine block, arches + photo P08 + big phrase (see §1) | ≈ 90 words |
| 5 | `front-stories` | proof | eyebrow "Stories" + H2 2.3125rem "Three people, three ordinary weeks"; 3 cards 380 wide, gap 75 [c-cards]: image 4:3 radius 7 (P09, P10, P11), title 1.25rem/600 lh 1.5 ls 1px, text 0.9375rem lh 1.5, dot-arrow link; parent `sp-stagger`, cards `sp-reveal sp-reveal--up` | 3 × 40 words |
| 6 | `front-room` | proof: who is in the room | alignfull paper `#F1F3F0`, padding 140/140 [c-recruit]; left 7/12 photo P12 ratio 1.61 radius 10; right 5/12: H2 "Who is in the room", 60-word paragraph, then a plain two-column text list of the 7 names with role (name 1rem/600, role 0.875rem muted) — no portraits, no grid of faces; chip → Dietitians | ≈ 110 words |
| 7 | `front-fees` | fees + visit | white; H2 "Fees" left; price list full container width (§7) with 7 rows; under it a 2-column row: left address + hours lines, right photo P13 (clinic reception) 4:3 radius 7; chip → Fees & insurance | list + 50 words |
| 8 | `front-close` | CTA | paper strip full container width, radius 5, padding 48 px 56 px: left "Start with one 60-minute consult." 1.6875rem/600, right white chip "Book a consult" with pine arrow chip | 15 words |

English home ≥ 300 words; narrative paragraphs in #2, #3 and #6 (≥ 3). CJK home ≥ 600 characters.

Photo positions on home: P01, P02, P03 (crossfade), P04, P05, P06, P07, P08, P09, P10, P11, P12, P13 = **13 images, none repeated** (≥ 8; with the crossfade disabled under `?sp-static`, P02/P03 still exist in the DOM as stacked imgs, so the gate's ≥ 8 count holds even without them: 11).

### Comparison with recent themes
| # | Getsuji Payroll | Kesho College | Hikari Lighting | Hatake Greens | **Eiyo Clinic** |
|---|---|---|---|---|---|
| 1 | KV frame + logo panel | 4-panel marquee hero | dark KV | full-bleed hero | **inset rounded photo, H1 under it, paper strip** |
| 2 | about photo + dots | centred intro | intro grid | sage intro + portrait | **4-line statement fill + side photo** |
| 3 | 3 thumbs | big parallax photo | dark window block | statement + reasons + 21:9 band | **coverflow problem with overlap card + tab rules** |
| 4 | pickup | hourly schedule | 3 alternating rows | triangle + 5 cards | **pine block, two hairline arches** |
| 5 | notes 3 columns | 3 square tiles | room project rows | packing photo | **3 story cards 4:3** |
| 6 | people portrait | instructors split | dark specify block | 3 cards | **paper room: wide photo + name list** |
| 7 | fees table | tuition table | visit 2-col | plan card + table | **price list + visit** |
| 8 | cover CTA | 3 quotes, photo CTA | journal | stories, FAQ, CTA | **paper strip CTA** |
Why not alike: no full-bleed or panel hero (inset photo with text below is new to the run); no marquee, triangle, dark blocks, schedule or table on first two screens; the one saturated element is a rounded pine block with arches, unlike Getsuji's navy panel, Hatake's triangle, Hikari's dark blocks. Fees come late (block 7) as a quiet list, not a card/table section. Hatake's main `#4E5A48` is olive and only on a triangle; ours is a deeper blue-pine `#2C4038` on one rounded block.

---

## 5. Colour, type

### Colour (Kobe Yakult relationships: white ground + paper + grey ink + ONE saturated colour in one big rounded block and one CTA)
| Role | Hex | Source | Use | Share |
|---|---|---|---|---|
| Base | `#FFFFFF` | KY ground [a-base] | page ground | 55–65 % |
| Paper | `#F1F3F0` | KY `#F4F3EF` [a-paper], −1 % lightness, hue nudged from warm to neutral-cool to sit with pine and avoid cream | KV strip, chips, caption card, room section, close strip | 8–10 % |
| Ink | `#303030` | KY ink [a-ink], unchanged | all text | text |
| Main (pine) | `#2C4038` | row "blue-sea pine tea"; replaces KY red `#E50111` [a-main] in the same role | T3 block, header button, active tab rule | ≈ 12 % page, ≤ 3 % first screen |
| Pine deep | `#22332C` | main −5 % | button hover | tiny |
| Pine phrase | `#3A5247` | main +8 % | big phrase on pine only | — |
| Sage | `#6E8A7B` | derived from main | eyebrows' dot, small meta | < 2 % |
| Muted | `#7A7F7C` | KY 50 % ink [a-ink] | dates, roles, grey tab labels | — |
| Rule | `#D5DBD7` | KY 1 px grey rule [f-rule] | section rules, price list rows, tab separators | — |
| Accent | `#D26A45` persimmon | KY tiny line-art colours [a-accent] | the 6 px dot in the dot-arrow chip only | < 1 % |
Why not the reference red: a saturated red field reads as warning/urgency in a dietetics clinic and the row fixes "blue-sea pine tea"; the role, area and shape of the red are kept exactly. Contrast: white on pine 10.9:1; ink on paper 12:1.

### Type (font_direction **sans**)
- Latin: headings **Instrument Sans** (500/600), body **Public Sans** (400/500/600). CJK: **Noto Sans TC** (zh-TW) and **Noto Sans JP** (ja), gothic sans, headings and body; no Mincho/Mincho anywhere.
- Stacks: headings `"Instrument Sans", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`; body `"Public Sans", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`; `:lang(zh-TW)` puts Noto Sans TC first, `:lang(ja)` Noto Sans JP first. Copy `shared/inc/editor-lang.php` → `inc/editor-lang.php` and require it.
- All faces loaded via **theme.json fontFamilies + fontFace** (woff2 in `assets/fonts/`, zh-TW and ja subsets via the Hokuto/Hada method), so editor iframe and front end match (`check-editor-fonts.mjs`).
- Presets (from tokens [b-*]): small 0.875rem; base 1rem (body 16/1.6, card text 0.9375rem/1.5 ls 0.06em CJK) ; medium 1.25rem (card title 20/600/1.5 ls 1px); large 1.6875rem (H3 27/600 ls 0.06em CJK, 0.01em Latin); x-large 2.3125rem (H2 + statement 37/600, lh 1.6 headings / 2.0 statement); hero H1 2.25rem/600/lh 1.6 (KY 32 px, +4 px for Latin x-height); **xx-large 4.25rem** (max; T3 phrase and inner page "number" lines). Eyebrow "The problem" etc. 1.0625rem/500 sentence case, no uppercase (KY "Service" label).
- CJK: sizes ≈0.75× for xx-large/x-large (statement 1.75rem zh/ja, lh 2.0), body lh 1.85; fr/de `hyphens: auto`.

### Links and buttons
- **Dot-arrow chip** (KY primary link [d-button]): paper `#F1F3F0` ground, radius 5, padding 12px 12px 12px 20px; 6 px persimmon dot, label 0.9375rem/500 ink, then a 32×32 white square chip radius 4 with an 18 px arrow. On pine (KY on red): no ground, white label, white dot, arrow chip with a 1 px white outline. Hover: arrow chip fills pine, arrow white, 0.25 s.
- Button "Book a consult": pine fill, white 15px/500, padding 10px 20px, radius 4 [d-button].

---

## 6. Responsive rules
- 390 px first screen: photo 4:5, H1 and strip in normal flow under it; **no vertical text, no absolute labels over text**, no horizontal overflow (`html, body {overflow-x: clip}`).
- Coverflow at < 782 px: side photos hidden; centre photo full width radius 7; caption card below it with `margin-top: -48px; margin-inline: 16px` (still overlaps, in flow); tab rules become a wrap row.
- T3 on mobile per §1.
- Price list (§7) at ≥ 782 px: **full container width (1290 max)**, 3 columns `name | detail | price`, price column `white-space: nowrap; text-align: right`, min-width 7ch, never clipped at 800 and 1280. < 782 px: each row stacks (name, detail, price on its own line, left aligned). Any other table (FAQ none, Fees insurance table) also stacks on mobile.
- Header < 960 px: overlay menu; button stays visible.

---

## 7. Fixed numbers (identical on Home, inner pages, footer and in all five languages)
**Fees (USD, 7 items):**
| Item | Detail | Price |
|---|---|---|
| First consult | 60 min, three-day food note reviewed, handwritten plan + typed copy within 2 working days | $120 |
| Follow-up | 30 min, in person | $65 |
| Video follow-up | 30 min | $60 |
| Three-month plan | first consult + 3 follow-ups (weeks 2, 6, 12) + written plan | $295 |
| Family meals consult | 75 min, up to 4 household members | $150 |
| Grocery walk | 45 min, at a store near the clinic | $80 |
| Kitchen class | 2 hours, small group of up to 6, per person | $45 |
Payment by card; itemised receipt (superbill) for your insurer on request; we do not bill insurers directly. Cancellation free up to 24 hours before.

**Consult flow (4 stages, written as text/arches, never a step grid):** 1 Book online or by phone and receive the three-day food note → 2 First consult, 60 min → 3 Written plan within **2 working days** → 4 Follow-ups at **weeks 2, 6 and 12**.

**Hours:** Mon–Fri 8:30–18:00 (Thu until 20:00); Sat 9:00–13:00; closed Sun and public holidays. Phone (206) 555-0143 (fictional 555), hello@eiyoclinic.example.

**People (7, fictional):** Ingrid Solberg — founder, registered dietitian (founded 2016) · Tomás Ávila — dietitian, blood sugar and cholesterol · Amara Nwosu — dietitian, family meals · Leila Haddad — dietitian, shift work and eating out · Daniel Brennan — dietitian, plant-forward eating · Priya Raman — cook, leads the kitchen classes · Sofia Marchetti — front desk and bookings.

**Stories (3, anonymised, shared with consent, no numeric outcomes):** "Mark, 54 — breakfast back on the table" (Tomás; P09) · "Rosa, 38, night-shift nurse — a lunch that lasts a 12-hour shift" (Leila; P10) · "The Okafor-Lindh household — one dinner, four plates" (Amara; P11).

No guarantees, weight-loss figures, medical cure claims, awards, press, real people or brands. Copy says "dietitian", not "doctor"; medical conditions → "we work alongside your doctor".

---

## 8. Inner pages (9 + journal templates, no sidebar)
Every page: T1 head (inset photo 10 px, height 420 desktop / 4:3 mobile, `sp-parallax --sp-par: 5%`, H1 under it at left 2.5rem/600, paper strip right), then body in the 1290 container, close = paper CTA strip as home #8.
1. **About** (`page-about`): T2 statement ("We started in 2016 with one table…"); 3 narrative sections in a 7/12 column (Why plain meals; How we work with doctors; The building on Alder Row); P16 wide 1.61 radius 10 between sections 2 and 3.
2. **Approach** (`page-approach`): T2 statement; `#stalls` = the static coverflow again (P05/P06/P07; reuse across pages is allowed) with one paragraph per stall; full **T3** block with three arches (Before / In the room / After) and P17 as the centre photo; the 4-stage flow as text.
3. **Services** (`page-services`): pine T3 block with **four arches 2×2**: Everyday eating, Blood sugar & cholesterol (with your doctor), Family meals, Shift work & eating out — each 3 lines + link to Fees; then Grocery walk (P15) and Kitchen class (P16) as two 1.61 photo + text rows.
4. **Dietitians** (`page-dietitians`): T2 statement; 7 people as a text list with 50-word bios each, in a 7/12 column, 1 px rules between (no portrait grid).
5. **Stories** (`page-stories`): the 3 stories, each a long section: 4:3 photo radius 7 left 5/12 + 250-word text right; dietitian named; "shared with consent, details changed".
6. **Fees & insurance** (`page-fees`): price list (§7) full width; small T3 pine block with one arch "Three-month plan $295"; insurance/receipt/cancellation paragraphs.
7. **Visit & contact** (`page-contact`): address, hours, phone, email in a paper block; one pine arch with hours; P13 4:3 radius 7; directions paragraph (bus, bike racks, step-free entrance). No form required.
8. **FAQ** (`page-faq`): 8 questions as `details` with 1 px rules (Do I need a referral? Can you prescribe? Video? Children? etc.).
9. **Journal** (`home.html`, `archive.html`, `single.html`): 6 posts, cards 4:3 radius 7, 3 columns; single: featured image as T1 inset photo, title under it, text column 680 px.
10. 404 / search: T1 without photo (paper strip only) + chip home.

---

## 9. Photos (18, IMAGERY = photo, Grok, one at a time, read every one)
STYLE (exact string, every prompt):
`photorealistic documentary photograph, 35mm lens, high-key bright soft daylight from a large window with sheer white curtains, white walls, light oak wood, plain off-white ceramics, muted palette of white, pale grey, soft sage and natural food colours, calm candid unposed moment, diverse adults, modern international city setting, gentle shallow depth of field, no text, no logos, no brand marks, no readable writing, no Japanese elements`
(Handwritten plan sheets: "pencil scribbles, not legible".) ≤ 300 KB, ≤ 2000 px, webp, 0 cut-outs; one readme line each (AI-generated, CC0).

| ID | Subject / composition | Ratio | Used on (once per page) | Home |
|---|---|---|---|---|
| P01 | dietitian (woman, 40s, sage cardigan) and client (man, 50s) across a light oak table by a sheer-curtained window, one simple plate (toast, eggs, greens), a bowl of fruit, a handwritten one-page plan with pencil; people in right half, curtain left third | 1.9 wide | Home KV slide 1; Contact head | ✔ |
| P02 | the client alone at his own kitchen table at noon with a simple packed lunch and the same handwritten plan beside it, window light | 1.9 wide | Home KV slide 2; Stories head | ✔ |
| P03 | two adults sharing a plain dinner at home (soup, bread, salad) at a wood table, white wall, early evening daylight | 1.9 wide | Home KV slide 3; About head; Journal index head | ✔ |
| P04 | hands writing a three-day food note in a notebook beside a cup of tea, illegible writing | 4:5 | Home statement | ✔ |
| P05 | person by an apartment door in the morning holding only a coffee, coat on, bright hallway | 1.61 | Home stalls left; Approach stalls | ✔ |
| P06 | person eating a late simple meal at a kitchen counter, warm lamp plus white kitchen, still bright | 1.61 | Home stalls centre; Approach stalls | ✔ |
| P07 | open fridge with identical meal-prep boxes and a person looking at them, bright kitchen | 1.61 | Home stalls right; Approach stalls | ✔ |
| P08 | overhead: simple plate + handwritten plan sheet + pencil on light oak | 4:5 | Home method centre; Approach head | ✔ |
| P09 | man, 50s, making porridge with fruit in a small bright kitchen | 4:3 | Home story 1; Stories 1 | ✔ |
| P10 | woman, 30s, in plain scrubs packing a lunch box at a kitchen counter at dawn | 4:3 | Home story 2; Stories 2 | ✔ |
| P11 | parent and teenager setting a family dinner table with four plain plates | 4:3 | Home story 3; Stories 3 | ✔ |
| P12 | three dietitians at the consult-room table reviewing printed notes, window light | 1.61 | Home room; Dietitians head | ✔ |
| P13 | clinic reception: plants, light wood bench, white walls, a desk, no signage | 4:3 | Home fees/visit; Fees head; Contact body | ✔ |
| P14 | dietitian showing portion sizes with real bowls and a hand, on a table | 4:3 | Services head; Journal post 1 | |
| P15 | dietitian and client choosing vegetables at a greengrocer's stall, no signs | 1.61 | Services grocery walk; Journal post 2 | |
| P16 | small group kitchen class, four diverse adults chopping vegetables, bright teaching kitchen | 1.61 | Services kitchen class; About wide; Journal post 3 | |
| P17 | dietitian on a video follow-up at a laptop by the window (screen not readable) | 4:3 | Approach T3 centre; FAQ head; Journal post 4 | |
| P18 | simple pantry shelf: oats, beans, lentils in plain unlabelled jars | 4:3 | Journal post 5 (index head = P03, post 6 = P04; no repeats on the index) | |
Dietitians page: head P12, body photo none (text list) — keep the page photo-light by design. Approach: head P08, stalls P05/P06/P07, T3 centre P17 — no repeats. Contact: head P01, body P13. Fees: head P13 only.

---

## 10. Scroll effects (sp-scroll, from stage-a candidates; hero has no reveal)
| Effect | sp-* | Where | Source (Kobe Yakult) trigger / time / easing | Our values |
|---|---|---|---|---|
| Statement fill | `sp-stagger` + `sp-reveal sp-reveal--up` per line | Home #2, About, Approach, Dietitians statements | GSAP ScrollTrigger scrub, starts block top at 41 % viewport, done at 8 %, ≈300 px, linear, opacity .3→1 per char | per line, pre-state opacity .3, `--sp-dist: 8px`, `--sp-dur: 1.2s`, `--sp-ease: linear`, stagger .12 s |
| Arches rise | `sp-stagger` + `sp-reveal sp-reveal--up` | Home #4 arches, Approach/Services/Fees/Contact arches, Home #5 story cards | ScrollTrigger `start: top center`, ≈0.6–1.0 s, Power4.easeOut, y 46→0, opacity 0→1 | `--sp-dist: 30px` (cap), `--sp-dur: .9s`, `--sp-ease: cubic-bezier(.165,.84,.44,1)` |
| Parallax (required) | `sp-parallax` | **Home KV figure** (`.sp-parallax__layer` wraps the three crossfade imgs); inner-page T1 heads | KY's moving hero = Splide crossfade (no parallax); we add a slow drift to carry that "living photo" feel | `--sp-par: 6%` desktop, 4 % at < 782 px (kept on mobile); layer scale per sp-scroll (1.18); radius/clip on the figure; H1/strip are outside the moving layer |
| KV crossfade | none (CSS keyframes, not scroll) | Home KV | Splide fade ≈1 s / ≈5 s hold | 18 s cycle, 3 slides, opacity only; disabled under `html.sp-no-motion`, reduced-motion, editor (shows P01) |
Not used: Lenis smooth scroll, marquee, count, wipe. No reveal on forms, price list, legal text, or the coverflow row's children (the row container may not reveal either — keep it static).
Verification: `check-parallax.mjs` desktop + mobile ≥ 6 px; ≥ 3 reveals hidden before entry (arches + cards); none left transparent at the bottom.

---

## 11. Home acceptance checklist
1. First screen 1440×900: inset photo with 32 px white gutters, 10 px corners, ratio ≈1.9 (or capped by height), H1 under the photo at left, paper strip at right on the same row, pine button in header; no text on the photo; saturated ≤ 15 % (target ≤ 3 %).
2. KV shows the consult-table scene (dietitian, client, simple plate, handwritten plan, sheer curtain) — P01; crossfade runs with motion and stays on P01 under `?sp-static`.
3. 390×844: photo 4:5, H1 and strip in flow under it, nothing overlapping, no horizontal scroll.
4. Statement: four lines ≥ 2.25rem, lh 2.0, grey (.3) → ink on scroll; dot-arrow chip below; side photo P04.
5. Problem coverflow: centre 1.61 photo, two dimmed side photos, paper card overlapping lower-right, three tab labels with 1 px rules.
6. Pine block: two-corner 90 px radius, two 1 px white arches offset vertically, centre photo, big 4.25rem low-contrast phrase; arches rise in.
7. Stories 3 cards 4:3 r7; room section on paper with wide photo + 7 names list; price list full width, prices right & nowrap at 800 and 1280, stacked on mobile.
8. 13 image positions on home, no repeats; ≥ 300 English words; ≥ 3 narrative paragraphs.
9. Parallax measurable (≥ 6 px) on desktop and mobile; reduced-motion 0.
10. Fonts: Instrument Sans / Public Sans, Noto Sans TC / JP in zh-TW / ja, same in editor; theme.json max 4.25rem.
11. Fixed numbers exactly as §7.
12. No sidebar, cut-outs, collage, step grid, timeline, portrait grid, dashboard, marquee.

---

## 12. theme-meta labels
type `health`; colors.tags `green`, `calm`, `light`, `muted`; style `documentary`, `clean`, `rounded`, `photographic`.

---

## 13. Similarity table (target ≈80 %, values from `reference-tokens.md`)
| Dimension | Kobe Yakult | Eiyo Clinic |
|---|---|---|
| Ground / paper / ink | #FFFFFF / #F4F3EF / #303030 | #FFFFFF / #F1F3F0 / #303030 |
| Saturated colour role | #E50111, one rounded block (≈12 % page) + CTA, 1.8 % fold | #2C4038, one rounded block (≈12 %) + CTA, ≤3 % fold |
| Header | 75 px, nav 16/600 ls .05em, red button 15/500 pad 10/20 r4 | same values, pine button |
| Hero photo | inset 32 px, 1376×725 (1.9), r10, high-key table scene | inset 32 px, ratio 1.9 (height-capped), r10, high-key table scene |
| Hero H1 | 32/600/lh1.6, under photo left | 36/600/lh1.6, under photo left |
| News strip | #F4F3EF 480×66 r5 pad 20 | #F1F3F0 480×66 r5 pad 20 |
| Statement | 37/600 lh2.0 ls.06em, 4 lines, opacity .3→1 scrub ≈300 px | 37/600 lh2.0, 4 lines, .3→1 per line stagger .12 s, 1.2 s linear |
| Section padding | about 270/170, recruit 140/140, item inner 140 | statement 270/170, room 140/140, pine inner 140 |
| Container | 1290 (x75–1365) | 1290 |
| Big block corners | ≈90 px on two opposite corners | 0 90 0 90 |
| Arches | 484×576, r240, 1 px white, offset ≈300 px | same |
| Arch motion | y46→0, opacity 0→1, Power4.easeOut, ≈0.8 s, start top-center | y30→0 (cap), .9 s, cubic-bezier(.165,.84,.44,1) |
| Hero motion | Splide fade ≈1 s / 5 s | CSS fade 1 s / 5 s + parallax 6 % |
| Coverflow | centre 689×427 r?, sides 452×280 dimmed, card 413×244 overlap −90/−120 | same sizes, r7, static |
| Cards | 3×380, gap 75, 4:3, r7, title 20/600 | same |
| Links | ● + label + arrow chip on #F4F3EF r5 pad 12/12/12/20 | same on #F1F3F0, persimmon dot |
| Rules | 1 px grey, tab separators | 1 px #D5DBD7 |
| Type family | Roboto + Zen Kaku Gothic New (sans) | Instrument Sans / Public Sans + Noto Sans TC/JP (sans) |
| Imagery | high-key documentary photos, small line-art decor | high-key documentary photos only |
Differences on purpose: pine instead of red (industry + row), no product cut-out (rule), no line-art (photo-led; IMAGERY photo), slight H1 enlargement for Latin.
