# Hibiki Speech: design spec (stage 1 spec, binding for implementation)

Slug `hibiki-speech`, speech and language therapy clinic for children and adults, type **business** (WooCommerce compatible, not required; the site must work with WooCommerce off). Row b14-1: archetype split-screen, hero **photo-left-text-right** inside a **top-bottom-halves** first screen, **top-bar** nav, page structure **narrative-problem-method-proof**, font direction **sans**.

Reference (S5-Style entry, unused by any earlier theme): **petit lic nursery group** https://p-lic.jp/ (nursery / child care, the closest S5-Style category to a children's speech clinic). One reference only. Measurements: `brand/reference-tokens.md`, quoted below as **RT(a)…RT(g)**. Screens: `brand/ref/plic-first.png`, `plic-about.png`, `plic-life.png`, `plic-full.png`.

**Imagery: photo** (stage-a IMAGERY = photo: the reference is led by candid documentary colour photographs of children and carers at floor level; its crayon marks are small flat decoration, recreated by us as inline SVG, not counted as imagery).

We borrow structure, techniques, colour relationships, measurements and the key-visual concept. We never copy the reference's photographs, its handwritten headline SVG, copy, icons, logo or page layout as a whole.

---

## 0. Fixed brand facts (identical on every page, in every language)

- **Hibiki Speech**, speech and language therapy clinic, children (from age 2) and adults. Founded **2014**. Address **2F, 18 Linden Row, Westmere** (fictional, international-neutral; local address order per language in brand.md). Phone **+00 31 4072 5180** (fictional format). Email `hello@hibikispeech.example`.
- Hours: **Mon–Fri 08:30–18:30**, **Sat 09:00–13:00**, closed Sun and public holidays.
- Waiting time promise (badge): **new clients are seen within 2 weeks** of the first call. Session length **45 minutes**. One therapist per client for the whole block.
- Named people (**7**, all fictional; no "Dr", no real credentials beyond "speech and language therapist"):
  1. **Ines Halvorsen** — founder, speech and language therapist; late talkers and early language (ages 2–6). *The therapist in K1 and M1.*
  2. **Mateo Lindqvist** — therapist; adults after stroke (aphasia), word-finding. *K3, S1.*
  3. **Amara Osei** — therapist; stammering in teenagers and adults. *S2.*
  4. **Mina Castell** — therapist; voice (teachers, singers, people who talk all day). *M2, S3.*
  5. **Lukas Brandt** — therapist; autistic children, picture-based communication (AAC).
  6. **Noor Haddad** — therapist; speech sounds and school-age reading links. *K2, M3.*
  7. **Claire Dumont** — family coordinator; first calls, booking, receipts for insurers.
- Services (6): Late talkers & early language · Speech sounds · Stammering · Aphasia and word-finding after stroke · Voice care · Picture-based communication (AAC).
- **Fees (7 items, EUR in every language, no conversion, no "from")**:
  | Item | Time | Price |
  |---|---|---|
  | First call with the family coordinator | 15 min | Free |
  | First assessment with written report | 90 min | €180 |
  | Therapy session | 45 min | €85 |
  | Block of 8 sessions | 8 × 45 min | €640 |
  | Home practice review (clinic or video) | 30 min | €45 |
  | Voice care course | 6 × 45 min | €480 |
  | School or workplace visit | 60 min | €120 |
  Note line (everywhere the fees appear): "Itemised receipts for your insurer. Please give 24 hours' notice to cancel."
- **First visit (5 parts, written as prose rows, never a step grid or vertical timeline)**: **Call** (15 min, free) → **Assessment** (90 min, within 2 weeks) → **Written plan** (within 5 working days) → **Block of 8 sessions** (weekly, 45 min) → **Review** (after session 8: continue, pause or finish).
- **Method (3 parts)**: **Listen** (we watch how the person talks at ease, before testing) · **Practise** (short games and real tasks, 45 minutes, the same therapist) · **Carry it home** (a 10-minute daily practice card for the family or the client).
- **Figures used by `sp-count`** (home method + Method page): **45** minutes per session · **8** sessions per block · **10** minutes of home practice a day · **2** weeks to a first assessment.
- **Stories (4; first names only, "in his/her case" framing, no guaranteed-result wording)**:
  1. **Leo, 4 — late talker.** Assessment, a block of 8 with Ines, picture-card games at home; now asks for things in short sentences at nursery. (Home proof feature.)
  2. **Margaret, 68 — word-finding after a stroke.** Two blocks with Mateo, naming practice from her own photo album; reads the grandchildren a story on Sundays.
  3. **Sami, 15 — stammer.** Block of 8 with Amara, speaking practice for class presentations; chose to give his history talk.
  4. **Elena, 34 — teacher, hoarse by Friday.** Voice care course with Mina; changed how she projects in a noisy classroom.
- No claims of cure, guaranteed results, statistics, awards, real media, real institutions or brands. Year 2014 only.

---

## 1. Signature techniques (three, all obvious at a glance; not to be diluted)

### T1. Torn-edge photo pair (RT(e) hero)
- **Reference (p-lic.jp first screen):** a large documentary photo, 0–935 px wide × ≈580 px tall (≈1.6:1), bleeding off the left edge at y 170; its outline is an irregular polygon (top edge rising to the right, right edge slanting inward, bottom a shallow zigzag), baked into the shape, radius 0. A second photo 440 × 300 at x 1000–1440 (bleeds right), y 445–745, same torn edge, sitting ≈270 px lower than the big one; a lime torn-tape strip bridges the gap (RT(e): overlap ≈60 px incl. the tape).
- **Ours (home hero):** **K1/K2** big (cross-fading) + **K3** small, geometry identical (see §3 first screen). Clip paths (apply on a wrapper `figure.hs-torn`, never on the element observed by sp-scroll):
  - big `hs-torn--a`: `polygon(0% 6%, 24% 0%, 100% 4.5%, 97.5% 100%, 76% 92%, 54% 97%, 31% 90%, 0% 95%)`
  - small `hs-torn--b`: `polygon(2% 3%, 100% 0%, 100% 96%, 47% 100%, 0% 97%, 1.5% 42%)`
  - tape `hs-tape`: 110 × 140 px, `#EFC926` at 85% opacity (reference tape is lime; we use the accent yellow to keep the palette short), its own rough polygon `polygon(6% 0,100% 4%,94% 30%,100% 58%,92% 100%,0 96%,5% 64%,0 33%)`, overlapping the big photo's right edge by 20 px and the small photo's left edge by 20 px.
- **Inner pages:** every inner page head (§4) is a smaller torn pair: big `hs-torn--a` 58% width bleeding left (1.6:1), small `hs-torn--b` 34% width at the right, 160 px lower, page H1 overlapping the big photo's bottom-left (same as home H1). Inside long pages, single photos use `hs-torn--b` (no radius).
- **Not to be diluted:** the edge must read as torn paper (≥4 vertices off the rectangle, slants visible at 1440, not 1–2 px "almost straight"); the big photo must bleed off the left edge; the second photo must sit clearly lower (≥ 240 px at 1440) and to the right; radius 0 on torn photos.

### T2. Crayon mark set + round dashed badge (RT(f))
- **Reference:** small flat hand-drawn marks in pure colour over and around photos: yellow scribble loop 300 × 60 over the photo top, blue 4 × 5 dot grid 90 × 80, orange play-triangle 55 × 90, kite (green top / pink bottom) 100 × 140 hanging over the carousel, four blue vertical strokes, a round pink badge Ø160 with a white dashed ring bottom-left of the hero that floats ±10 px, a −8° tilted label on a card with a 2 px pale-yellow outline radius 26; small coloured icons above each nav label.
- **Ours:** one SVG sprite `assets/marks.svg` (inline-able symbols, crayon texture via an `feTurbulence` + `feDisplacementMap` filter, scale 2, plus a grainy stroke `stroke-linecap: round`): `scribble` (yellow `#EFC926`, 300 × 60), `dots` (blue `#1E7AC6`, 4 × 3 grid, dot Ø14, 90 × 80), `triangle` (orange `#F56300`, 55 × 90), `kite` (green `#62AF5E` top / pink `#E8478B` bottom, 100 × 140), `strokes` (4 blue vertical strokes 90 × 75), `scallop` (yellow, see T3), `arch` (pale grey `#ECECEC` scalloped circles, section background). Nav icons (24 px, above each label): speech bubble (pink), sprout (green), picture card (blue), mirror circle (yellow), house (orange), question star (light blue `#6FB7E0`).
- **Home:** hero uses scribble, dots, triangle, strokes, tape and the badge (6 marks); welcome uses triangle + dot grid; method uses kite over the carousel; problem band uses the `arch` row; close uses scribble under the H2. Total ≥ 9 marks on the home page.
- **Badge:** Ø160 circle `#E8478B`, 3 px white dashed ring inset 8 px (`border: 3px dashed #fff; outline-offset`), white text Public Sans 700 0.875rem / 1.4 centred: small smile icon 22 px, "New clients / seen within / 2 weeks", arrow →. Links to First visit. Shadow `3px 3px 0 rgba(162,162,162,.16)` (RT(d)). Float animation `translateY(0 → −10px → 0)`, 2s linear infinite (RT(g) "fuwafuwa"); reduced-motion: none.
- **Inner pages:** each inner page head carries 3 marks (scribble on the big photo top, dots or triangle near the small photo, strokes under it); each inner page has one kite or triangle in its body; the badge appears on First visit, Fees and Contact heads (same Ø160 pink, bottom-left of the big photo).
- **Not to be diluted:** marks are pure saturated colour (not pastel tints, not grey), flat (no gradient/shadow), hand-drawn looking (displacement filter on); badge stays pink, round, dashed, Ø ≥ 150 px on desktop.

### T3. Vertical heading between two scalloped bars, beside a rounded-40 two-up row (RT(f) + RT(d))
- **Reference:** a vertical (tategaki) heading 28–36 px in a 135 px-wide column, with a yellow scalloped bar (135 × 28, three bumps) above and below; to its right a carousel of rounded-40 photos 484 × 303 (1.6:1), two visible, gap 4%, right padding 7.5vw, a kite hanging over the second photo's top right, green dots under, then a yellow pill CTA.
- **Ours (home "Method", Children, Adults, Method, Stories pages):** column 135 px at x 120: scallop bar `#EFC926` 135 × 28 (three half-circles facing out: top bar bumps up, bottom bar bumps down), gap 24 px, heading, gap 24 px, bottom bar. Heading text:
  - zh-TW / ja: `writing-mode: vertical-rl`, Noto Sans TC/JP 700 2rem, letter-spacing 0.12em, 2 columns max (e.g. a short phrase such as "how sessions run").
  - en / fr / de: `writing-mode: vertical-rl; text-orientation: mixed` (rotated reading), Hanken Grotesk 700 2rem, letter-spacing 0.06em, **one or two short words only** (en "How we work", fr "Notre méthode", de "So arbeiten wir"), max height 360 px.
  - ≤ 781 px (all languages): horizontal, scallop bars 112 × 22 above and below a horizontal H2 (no vertical text on mobile).
  - Row: 4 slides, rounded **40 px**, aspect **1.6:1**, two visible at ≥ 782 px (each ≈ 484 px wide at 1440), gap 4%, right padding 7.5vw, the row bleeds to the right edge; CSS `scroll-snap-type: x mandatory`, `overflow-x: auto`, scrollbar hidden, 4 dots (Ø10, `#62AF5E`, current `#C8C8C8` like RT) as anchor links; no autoplay (no carousel library allowed). Each slide has a caption under it (Hanken 600 1rem + one line Public Sans 0.875rem). Mobile: 1.15 slides visible.
  - The pale wash `#F4F4F4` panel behind the row starts 120 px below the row top and runs from x 450 to the right edge with its left edge slanted (polygon `8% 0,100% 0,100% 100%,0 100%`), as in plic-life.png.
- **Not to be diluted:** both scallop bars present, yellow, three bumps each; vertical setting on desktop in every language; photos radius 40 (not 8, not 24) and 1.6:1; the row visibly bleeds off the right edge with the third slide peeking.

### Supporting (from the reference, not counted as signatures, all required)
- **Pill CTA** (RT(d)): height 70 px, radius 50 px, fill `#EFC926`, label `#000` Public Sans 700 1rem, left padding 44 px, a 34 px white circle with `#000` arrow at the right (16 px from the end), min-width 300 px, shadow `3px 3px 0 rgba(162,162,162,.16)`. Hover `translateY(-4px)` 0.4s cubic-bezier(.19,1,.22,1).
- **Fixed right-edge tabs** (RT(f)) ≥ 1024 px only: 82 × 176 px each, radius 6 px on the left side, gap 22 px, top at 27% of the viewport; tab 1 `#4F6465` "Book an assessment", tab 2 `#02B990` "Contact"; white icon 32 px over a vertical white label (Public Sans 700 0.875rem, `writing-mode: vertical-rl`). Hidden < 1024 px (the header button covers it). Never over first-screen text at 390.
- **Header** (RT(c)): 120 px white; logo wordmark "Hibiki Speech" Hanken Grotesk 700 1.5rem `#000` with a small yellow scribble under "Hibiki" at x 62; nav right with icons above labels (6 items: About · Children · Adults · First visit · Fees · FAQ, Public Sans 700 0.875rem, 0.06em); a yellow corner tab top-right 110 × 122 `#EFC926` radius 0 0 0 20 with "Book" + arrow (RT "recruitment" tab, re-purposed). The header is static, not sticky (no scroll listeners). < 1024 px: 72 px, logo + yellow round menu button 48 px.

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
- **Draws:** a full-height playroom: a toddler laughing with an open picture book on a bright floor mat, two other children reading beside him, warm wood walls; lower right a second, smaller photo of a little girl at a table, finger in her mouth, looking straight ahead. Around the photos, crayon marks: a yellow scribble loop over the photo top, a blue dot grid with an orange play-triangle top right, a lime tape strip, four blue strokes. A handwritten two-line headline ("nurturing each child's future") runs across the bottom left, partly over the big photo's lower edge; a pink round "vacancy" badge bottom-left; a tilted "OPEN 2027" card bottom-right; blue and green fixed tabs on the right edge.
- **Story:** every child grows at their own pace, in a warm, unhurried room, seen at the child's eye level; candid, specific moments instead of staged smiles.
- **Signature motion:** the hero photos cross-fade (slick fade, 2000 ms, every 4000 ms, 4 slides, dots bottom-centre); the badge floats up and down 10 px every 2 s; the marks stay still.

### (2) Our translation (same composition, same motion idea, same image type)
A speech therapy room where nobody is hurried: at a low oak table, a therapist and a four-year-old match picture cards, the child mid-word, the therapist leaning in, listening (K1); the slide fades to the same room a moment later, the child laughing and pointing at a picture book on the floor mat (K2). Lower right, smaller: an adult client with a second therapist at a window-side table with a picture-card deck (K3), telling the visitor in one glance that adults come here too. The same crayon marks sit around the photos. The headline is live text, bottom-left, overlapping the big photo's lower edge like the reference's handwritten line: **"Time to find / the word."** A pink round badge "New clients seen within 2 weeks" floats bottom-left; a tilted-label card bottom-right says where and for whom. Photos cross-fade with the same timing; the big photo also drifts slowly with the scroll (parallax).

### (3) KV checklist (all implemented on the home first screen at 1440 × 900 and visible)
| # | Reference element | Our counterpart | Position | Motion | Which image |
|---|---|---|---|---|---|
| 1 | Large torn-edge photo: toddler laughing with a picture book on a floor mat, other children beside | Torn-edge photo: therapist and child matching picture cards at a low table (K1), cross-fading to the child laughing at a picture book on the mat (K2) | left, x 0–935, y 170–750 (1.6:1), bleeds off the left edge; clip `hs-torn--a` | cross-fade K1 ⇄ K2: 2000 ms fade every 4000 ms (CSS keyframes, 8 s cycle), 2 dots bottom-centre; plus `sp-parallax --sp-par: 8%` on the photo layer | **K1**, **K2** |
| 2 | Smaller torn photo lower right: a girl at a table | Torn-edge photo: adult client and therapist at a window table with a card deck (K3); lime tape → yellow tape bridging the two photos | right, x 1000–1440 (bleeds right), y 445–745; tape 110 × 140 at x 925–1035, y 420–560 | static | **K3** |
| 3 | Crayon marks: yellow scribble loop, blue dot grid, orange triangle, four blue strokes | Same mark types, our own SVG drawing: scribble 300 × 60, dots 90 × 80, triangle 55 × 90, strokes 90 × 75 | scribble x 640–940, y 185 (over K1 top edge); dots x 1120, y 255; triangle x 1195, y 210; strokes x 960, y 750 | static | — (SVG) |
| 4 | Handwritten two-line headline across the bottom, overlapping the photo's lower edge | Live H1 "Time to find / the word." Hanken Grotesk 600, 4.5rem, second line indented 1.6em; lead line under it | x 170, top of line 1 at y 690 (overlaps K1 bottom by 60 px; a white `#FFFFFF` 0.92 text-backing strip 12 px padding behind line 1 only where it crosses the photo) | none (hero has no reveal) | — |
| 5 | Round pink badge with dashed ring, floating | Round pink badge `#E8478B` Ø160, dashed white ring: "New clients / seen within / 2 weeks →" (links First visit) | x 48–208, y 715–875 (overlaps K1 bottom-left) | translateY 0 → −10 px → 0, 2 s linear infinite; reduced-motion: static | — |
| 6 | Tilted "OPEN" label card bottom right + fixed right tabs | Card (white, 2 px `#F7E7A0` outline, radius 26, 300 × 160) with label "Since 2014" tilted −8° in `#4F6465` white text, body "Children from 2 · Adults · Westmere" + text link "First visit →"; fixed tabs slate "Book an assessment" / green "Contact" | card x 1095–1395, y 690–850 (overlaps K3 bottom by 55 px); tabs right edge, top 27% vh | card hover translateY −8 px 0.4s cubic-bezier(.19,1,.22,1); tabs none | — |

All three hero photos (K1, K2, K3) are in the image list (§6) and marked **home**.

---

## 3. Home page

### First screen composition (1440 × 900, header 120 included)
- **Top half (y 120–560):** white ground; K1/K2 torn photo starts at y 170 (50 px below the header), x 0–935; crayon scribble over its top edge; dots + triangle in the white at the top right (x 1120–1250, y 210–330); K3 starts at y 445. Fixed tabs at the right edge.
- **Bottom half (y 560–900):** K1 continues to y 750; H1 block `max-width: 760px` at x 170, two lines from y 690 to ≈ y 860. Lead "Speech and language therapy for children and adults. Unhurried 45-minute sessions, one therapist from start to finish." Public Sans 1.0625rem / 2.0 (RT lead 17/34), max-width 560 px, directly under the H1 at x 170 (it may start at the fold line; that is fine). The first-screen CTA is the "First visit →" link in the tilted card (KV #6) plus the yellow "Book" header tab; the yellow pill "Book an assessment" follows the lead. Badge bottom-left, card bottom-right, 2 cross-fade dots `#62AF5E` / `#C8C8C8` Ø10 centred at y 880.
- Hero section height `max(780px, calc(100vh - 120px))`; content max at 1440, at > 1440 the photos keep 65% / 30.5% of the viewport width.
- **Forbidden:** table, form, search box, giant centred text, any reveal animation, vertical text at < 1024.
- **Tablet 782–1023:** same composition scaled (K1 65% width, K3 34%), card hidden, tabs hidden, lead + pill CTA under the H1.
- **Mobile 390:** header 72 px. K1/K2 full width (bleeds both sides, clip `hs-torn--a`), aspect 4:3; K3 width 60%, aligned right, margin-top −36 px (photos overlap photos, never text); scribble over K1 top, dots in the K1's top-right corner inside the figure wrapper; tape hidden; triangle and strokes hidden. Then in normal flow: H1 2.5rem / 1.2 (two lines), lead, pill CTA (full width −32 px), badge Ø112 placed **in flow** after the CTA (right-aligned, float animation allowed, `position: static`), card hidden. No absolute-positioned text, no vertical text anywhere in the first 844 px.

### Block order (narrative → problem → method → proof)
| # | Pattern | Purpose | Layout and photos | Copy |
|---|---|---|---|---|
| 1 | `hs-hero` | KV, promise | §2 / first screen above. **K1, K2, K3** | H1 + 25-word lead |
| 2 | `hs-welcome` | narrative: who we are (reference "about" block, plic-about.png) | White, padding 177 / 95 (RT(c)). Left 55%: **overlapping 3-photo cluster**, all `hs-torn--b`: **W1** 360 × 270 at x 330, y 0; **W2** 280 × 200 at x 180, y 230 (overlaps W1 bottom-left by 40 px); **W3** 200 × 150 at x 520, y 300; triangle mark (yellow 120 px) at x 250, y −20; dot grid at x 120, y 190. Right column x 1155–1290: **T3 vertical heading** en "Take your time" (fr "Prenez le temps", de "Ganz in Ruhe", ja "a place to speak unhurried", zh-TW "a place to speak slowly") between scallop bars. Below, row 2 (container 1200): left 480 px bold statement Hanken 700 1.375rem / 1.8 "Every voice finds its words at its own pace."; right 709 px two paragraphs Public Sans 1rem / 1.75; then centred pill CTA "About the clinic". `sp-stagger` on the cluster, each photo `sp-reveal sp-reveal--up`. | 2 paragraphs, 110 words |
| 3 | `hs-difficulty` | problem: what families and adults notice | White ground with a row of pale `#ECECEC` scalloped arches (Ø240 circles, 50% hidden) across the top and bottom edge (reference pagelink background, plic-full). Container 1200: left 5/12 label "WHEN WORDS GET STUCK" (Public Sans 700 0.8125rem, 0.12em, `#4F6465`), H2 "It is hard to watch someone search for a word." Hanken 700 2rem / 1.5, one paragraph; under it **D1** `hs-torn--b` 4:3 width 440. Right 6/12: five short lines, each led by a 28 px crayon tick (alternating yellow / blue / green / orange / pink): "Your two-year-old points instead of naming." · "Your child is understood at home but not at nursery." · "Words that came easily before a stroke now hide." · "A stammer is making class presentations dreadful." · "Your voice is gone by Friday." Each line Public Sans 1.0625rem / 1.8, 1 px `#E4E4E4` rule between. `sp-reveal--up` on the right list (one element). | 1 paragraph 60 words + 5 lines |
| 4 | `hs-method` | method: how a session works | **T3** layout (§1): vertical heading "How we work" between scallop bars at x 120; two-up rounded-40 row with **M1** (Listen: assessment at the low table), **M2** (Practise: adult voice work at a mirror), **M3** (Practise: floor game with animal cards), **M4** (Carry it home: parent and child with a card deck on a sofa); kite hanging over slide 2's top right (x ≈ 1150, y −90 relative to row top); pale `#F4F4F4` slanted panel behind. Under the row (container 1200): three short text columns Listen / Practise / Carry it home (Hanken 700 1.25rem + 2 sentences each), then a figures line with `sp-count`: **45** min per session · **8** sessions per block · **10** min a day at home (Hanken 700 3.5rem `#000` numbers, Public Sans 0.875rem labels), then pill CTA "How sessions work". | 3 × 35 words |
| 5 | `hs-people` | who sits in the room | White. Left 6/12: **P1** torn `hs-torn--a` (two therapists discussing notes at a table), bleeding off the left edge, 1.6:1, with strokes mark at its bottom right. Right 5/12: label "WHO SITS IN THE ROOM", H2 "Seven people, one room at a time.", one paragraph, then a **text list** of the 7 people in two columns (name Hanken 700 1rem + focus Public Sans 0.875rem `#4F4F4F`), each name preceded by a 10 px dot in one of the five mark colours. Text link "Meet the team →". No portrait grid. | 1 paragraph 60 words + 7 names |
| 6 | `hs-proof` | proof: one story, three more | `#F4F4F4` full-bleed band, padding 123 / 123. Left 7/12: **S1** clip `hs-torn--b` (no mirroring transforms), 3:2, width 640 (Margaret reading aloud with Mateo). Right 5/12: label "IN THEIR CASE", H3 "Margaret, 68 — word-finding after a stroke", 2 paragraphs (her story, in her case framing), pill "Read the stories". Under, full width: three text-only story lines in a row (Leo, 4 · Sami, 15 · Elena, 34), each a white card radius 26, 2 px `#F7E7A0` outline (RT(f) card), 1 sentence + link. `sp-stagger` + `sp-reveal--up` on the three cards. | 2 paragraphs 90 words + 3 × 20 |
| 7 | `hs-fees` | fees preview, booking-led | White, container 1200. Left: label "FEES", H2 "Clear prices, receipts for your insurer." Right/below: **fee list full width** (table `hs-fees`, 7 rows from §0, three columns item / time / price; price nowrap, right-aligned), note line, pill CTA "First visit and fees". No reveal on the table. | 7 rows + 1 note |
| 8 | `hs-notes` | notes from the clinic (reference notices list) | White. Left column 240 px: H2 "Notes" Hanken 700 2rem. Right 900 px: 3 latest posts as rows (date Public Sans 0.8125rem `#666`, title Public Sans 700 1rem `#0062AB` (RT link blue), 1-line excerpt), 1 px `#E4E4E4` dotted rules. No images (as in reference). Query Loop. | Query Loop |
| 9 | `hs-close` | close: visit / call | White, padding 120 / 0. Container 1200: left 6/12 **R1** `hs-torn--b` 1.6:1 (the empty therapy room in morning light) with dot grid at its top-left; right: H2 "Come and see the room." with scribble mark under it, address, hours, phone, two pills: yellow "Book an assessment", white-outline "Call +00 31 4072 5180". | 50 words |
| — | footer | access | `#F4F4F4`, padding 80 / 40: wordmark, address, hours, nav columns (as RT footer), then a **yellow `#EFC926` band 80 px** at the very bottom with © and small links in `#000` (reference footer yellow strip). |  |

Home photo positions: K1, K2, K3, W1, W2, W3, D1, M1, M2, M3, M4, P1, S1, R1 = **14** (≥ 8), no image twice.
English home ≥ 250 words with narrative paragraphs in #2, #3, #6 (and #4). CJK home ≥ 500 characters.

### Comparison with the most recent themes
| # | Kasane Venue | Kaname Watches | Ayumi Podiatry | Isso Relocation | **Hibiki Speech** |
|---|---|---|---|---|---|
| 1 | blob window hero | two-pane cross-fading window | confetti geometric 2×2 hero | dark half photo + giant wordmark | **torn-edge photo pair, crayon marks, floating badge** |
| 2 | full-bleed hall | pick-up strip + vertical tabs | listening square photo | anchor menu | **overlapping 3-photo cluster + vertical scallop heading** |
| 3 | concept row | chapters | full-bleed parallax room | full-bleed 16:9 trio | **problem lines on arches** |
| 4 | 4 rooms on pastel washes | tray parallax band | tilted photo wall −8° | steps | **two-up rounded-40 row beside vertical heading** |
| 5 | day timeline | stories | stacked method cards 01–03 | one move | **people as a text list beside one torn photo** |
| 6 | stories | bench service list | outcome | prices | **one story on grey band + 3 outlined cards** |
| 7 | people | visit | CTA | quote | **fee list** |
| 8 | fees | — | — | — | **notes list (no images)** |
| 9 | viewing close | — | — | — | **close with room photo** |
Why not alike: no blob/window/tilted wall/confetti/giant wordmark; no full-bleed photo bands at all (the only parallax is the hero's torn photo); no stacked circle-photo cards, no timeline, no 2×2 hero. The shapes (torn polygons, scallop bars, crayon marks, pink badge) appear in none of them.

---

## 4. Inner pages (11 pages; each continues T1 + T2, and T3 where noted)

Every inner page: **T1 head** (torn pair + H1 overlapping the big photo + 3 crayon marks) → body → close line with pill CTA "Book an assessment". No sidebar. T3 on Children, Adults, How we work, Stories (≥ 4).

| # | Page (slug) | Head pair (big / small) | Body points | T3 / T2 extras |
|---|---|---|---|---|
| 1 | About the clinic (`about`) | K1 / W1 | Founded 2014 by Ines Halvorsen; why 45 minutes and one therapist; the rooms (low tables, a mirror wall, a sofa corner); who we see; R1 wide 1.6:1 torn between sections 2 and 3 | triangle + kite in body |
| 2 | Children (`children`) | K2 / W3 | late talkers, speech sounds, stammering in young children, AAC; "signs worth a call" list; what parents do in the room (photos only via the T3 row) | **T3** row: M3, D1, M4, M1 |
| 3 | Adults (`adults`) | K3 / M2 | aphasia after stroke, word-finding, voice care, stammering in adults; sessions at the clinic or by video (photos only via the T3 row) | **T3** row: S1, S3, S2, R1 |
| 4 | How we work (`method`) | W2 / R1 | Listen / Practise / Carry it home in depth; the home practice card; `sp-count` figures 45 / 8 / 10 / 2 | **T3** row M1, M2, M3, M4 |
| 5 | First visit (`first-visit`) | M1 / F1 + **badge** | the 5 parts of §0 as prose rows (bold part name left 240 px, text right; no step grid, no timeline line); what to bring; for adults vs for children | dots + strokes |
| 6 | Team (`team`) | P1 / F1 | the 7 people: name, focus, languages spoken, one sentence; text list in two columns with coloured dots (no portrait grid) | scribble under H2 |
| 7 | Fees (`fees`) | R1 / M4 + **badge** | full fee table (§0) full width; cancellation; receipts for insurers; school/workplace visits | kite |
| 8 | Stories (`stories`) | W1 / D1 | 4 stories, alternating torn photo left/right: Leo (M3), Margaret (S1), Sami (S2), Elena (S3) | **T3** heading only (vertical "In their case") beside the first story |
| 9 | Notes (`home.html` index, `archive.html`, `single.html`) | index: W3 / W2 | 4 posts as the reference list (date, blue title, excerpt) plus featured image on single: post 1 "What a first assessment looks like" M1 · post 2 "Ten minutes of practice at home" M4 · post 3 "Stammering and class presentations" S2 · post 4 "Voice care for people who talk all day" S3 | single: featured image `hs-torn--b`, scribble mark |
| 10 | FAQ (`faq`) | K3 / W2 | 10 questions in `<details>` (Do I need a referral? Video sessions? Which languages? Insurance? Bilingual children?) | triangle |
| 11 | Contact & visit (`contact`) | F1 / R1 + **badge** | address, hours, phone, email, getting there (tram line, step-free access, lift), contact text and a link `mailto:`; no form required | dots |
| — | 404 / search | scribble + pill home | | |

Each image at most once per page (checked: head pair and body lists above never repeat within a page).

---

## 5. Colour, type

### Colour (reference RT(a) codes used as is; one swap with reason)
| Role | Hex | Source token | Use | Share of a page |
|---|---|---|---|---|
| Base | `#FFFFFF` | RT(a) base | page ground, header | ≈ 55% |
| Wash | `#F4F4F4` | RT(a) light grey sections | proof band, method slanted panel, footer | ≈ 12% |
| Arch | `#ECECEC` | RT(f) pale scalloped circles | arch rows | ≈ 3% |
| Text | `#000000` | RT(a) text | headings, body, pill labels | ≈ 8% |
| Muted text | `#4F4F4F` | derived | captions, focus lines | — |
| Accent yellow | `#EFC926` | RT(a) accent A | pill CTAs, scribbles, scallop bars, header tab, tape, footer strip | ≤ 3% |
| Blue | `#1E7AC6` | RT(a) accent B | dot grids, strokes, nav icon | ≤ 1% |
| Link blue | `#0062AB` | RT(a) hover/links | note titles, text links | < 1% |
| Green | `#02B990` | RT(a) accent C (teal) | Contact tab | < 1% |
| Leaf green | `#62AF5E` | RT(a) accent C | kite top, dots, tick | < 1% |
| Orange | `#F56300` | RT(a) accent D | triangle, tick | < 1% |
| Pink | `#E8478B` | RT(a) accent D | badge, kite bottom, tick | ≤ 2% |
| **Slate (theme main)** | `#4F6465` | design-plan row hex (aonibi, blue-grey) | **replaces the reference's blue `#1E7AC6` side tab** and the tilted "Since 2014" label, section labels (eyebrows) | ≤ 2% |
| Card outline | `#F7E7A0` | RT(f) 2 px light-yellow outline | story cards, hero card | — |

- Swap reason: the reference blue tab is the most "nursery" colour block on its first screen; Hibiki also serves adults (stroke, voice, stammering), so the one larger UI colour block becomes the row's quiet slate. Everything else keeps the reference codes (no ±5% shift needed).
- First-screen saturated share: reference **12.1%**; ours target **9–13%**, hard cap **15%** (`check-first-screen.py`), row cap 30%. Sources of colour: badge (≈20k px), tabs (one slate = not saturated), marks, tape, card label; photos graded bright with mostly wood and white, only a few primary-colour toys.
- Not beige-led; no section is a saturated colour field; slate never a section background.
- Contrast: white on `#E8478B` 3.6:1 → badge text 700 at 0.875rem, plus the badge is a link with an accessible name; black on `#EFC926` 13:1; white on `#4F6465` 6.3:1; white on `#02B990` 2.6:1 → Contact tab label 700 0.875rem with `text-shadow: 0 1px 0 rgba(0,0,0,.25)` **and** a 1 px darker inner border `#019A78`; acceptable as a large-icon tab duplicating the header link.

### Type (font_direction **sans**)
- Latin headings: **Hanken Grotesk** (400, 600, 700). Latin body: **Public Sans** (400, 500, 700). Both sans (reference uses one gothic family everywhere, RT(b)).
- Stacks (theme.json `fontFamilies`):
  - heading: `"Hanken Grotesk", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`
  - body: `"Public Sans", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`
  - `:lang(ja)` puts `"Noto Sans JP"` before `"Noto Sans TC"` (style.css rule → copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it).
- CJK headings: **Noto Sans TC** / **Noto Sans JP** (gothic sans). zh body text uses the system Traditional Chinese faces, not the bundled heading face. No mincho anywhere. Subsets for zh-TW and ja via the Hokuto/Hada workaround (the subset script is known broken).
- All faces loaded through **theme.json `fontFace`** (woff2 in `assets/fonts/`), so editor iframe and front end show the same fonts (`check-editor-fonts.mjs` en + zh-TW).
- Sizes (theme.json presets; px at 1440):
  | Preset | Value | Use | Source |
  |---|---|---|---|
  | small | 0.8125rem | labels, dates, captions | RT nav 14 px |
  | base | 1rem / 1.75, ls 0.02em (CJK 0.06em, lh 1.85) | body | RT body 15/24, ls 0.06em (+1 px for Latin legibility) |
  | medium | 1.0625rem / 2.0 | lead | RT lead 17/34 |
  | large | 1.375rem / 1.8, 700 | statements, H3 | RT H2 28/50.4 scaled |
  | x-large | 2rem / 1.5, 700, ls 0.04em | H2, vertical headings | RT H2 28 px, vertical 28–36 px |
  | xx-large | clamp(2.75rem, 5vw, **4.5rem**) / 1.25, 600, ls 0.02em | hero H1, inner H1 clamp(2.4rem, 4.2vw, 4.25rem) | RT headline ≈ 64–70 px |
  Max preset 4.5rem (≥ 4.25rem rule). zh-TW/ja headings ≈ 0.75× Latin, body line-height 1.85; fr/de `hyphens: auto`.

---

## 6. Photos (17, Grok, one at a time, read every one)

**Imagery: photo.** STYLE (exact string on every prompt):
`candid documentary photograph, bright natural window light, high-key, soft shadows, 35mm lens held low at child or table height, warm light oak wood and white walls, a few small red, yellow and blue toys or picture cards as accents, faces large and natural, people absorbed in the moment and not looking at the camera, diverse children and adults, modern international clinic setting, picture cards show simple drawn objects only, no text, no letters, no numbers, no logos, no brand marks, no signage, no Japanese elements`

No cutouts (0 transparent PNG). Each ≤ 300 KB, ≤ 2000 px, webp; one `readme.txt` line per image (AI-generated, CC0). Picture cards and books must have pictures only; regenerate any frame with letters.

| ID | Subject / composition | Ratio | Used on (page → block) | Home |
|---|---|---|---|---|
| K1 | therapist (woman, 40s) and a 4-year-old boy at a low oak table matching picture cards (apple, ball, cat), the boy mid-word, therapist leaning in, window light from left, camera at table height | 1.6:1 | Home hero; About head (big) | **home** |
| K2 | the same room: the boy laughing, pointing at an open picture book on a blue and yellow floor mat, therapist sitting cross-legged beside | 1.6:1 | Home hero (cross-fade); Children head (big) | **home** |
| K3 | man in his 60s and a therapist (man, 30s) at a window-side table with a fan of picture cards, the client choosing one, calm | 3:2 (440×300 crop) | Home hero small; Adults head (big); FAQ head (big) | **home** |
| W1 | waiting corner: low shelf of picture books, a parent and a 3-year-old girl reading on a bench | 4:3 | Home welcome cluster; About head (small); Stories head (big) | **home** |
| W2 | close-up of small hands and adult hands placing picture cards in a row on oak | 7:5 | Home welcome cluster; Method head (big); Notes index head (small); FAQ head (small) | **home** |
| W3 | girl of 5 blowing a feather across the table, therapist watching, playful | 4:3 | Home welcome cluster; Children head (small); Notes index head (big) | **home** |
| D1 | kitchen table at home, a boy of 3 pointing at a cup instead of saying it, mother waiting patiently | 4:3 | Home difficulty; Children T3 row; Stories head (small) | **home** |
| M1 | assessment: therapist with a toy set and a notebook on the floor mat, toddler stacking blocks | 1.6:1 | Home method row; First visit head (big); Children T3 row; Method T3 row; Notes post 1 | **home** |
| M2 | adult woman and therapist side by side at a wall mirror, practising mouth shapes | 1.6:1 | Home method row; Adults head (small); Method T3 row | **home** |
| M3 | floor game: girl of 6 and therapist with animal picture cards on a mat | 1.6:1 | Home method row; Children T3 row; Method T3 row; Stories (Leo) | **home** |
| M4 | at home on a sofa: father and son with a small deck of picture cards, evening lamp light | 1.6:1 | Home method row; Children T3 row; Fees head (small); Method T3 row; Notes post 2 | **home** |
| P1 | two therapists talking over notes at a table, coffee cups, plants | 1.6:1 | Home people; Team head (big) | **home** |
| S1 | woman of 68 reading a picture book aloud, therapist listening, window light | 3:2 | Home proof; Adults T3 row; Stories (Margaret) | **home** |
| R1 | the empty therapy room in morning light: low table, two small chairs and one adult chair, mirror wall, floor mat | 1.6:1 | Home close; About body; Method head (small); Fees head (big); Adults T3 row; Contact head (small) | **home** |
| F1 | reception: light oak counter, plants, a coordinator greeting a parent with a pram, step-free entrance | 4:3 | First visit head (small); Team head (small); Contact head (big) | — |
| S2 | teenage boy at a table practising a short talk to a therapist, notes in hand (blank paper) | 3:2 | Stories (Sami); Adults T3 row; Notes post 3 | — |
| S3 | woman of 34, teacher, doing a humming exercise with a hand on her chest, therapist beside | 3:2 | Stories (Elena); Adults T3 row; Notes post 4 | — |

Per-page check (no repeats): Home 14 (K1 K2 K3 W1 W2 W3 D1 M1 M2 M3 M4 P1 S1 R1). About K1 W1 R1. Children K2 W3 + M3 D1 M4 M1. Adults K3 M2 + S1 S3 S2 R1. Method W2 R1 + M1 M2 M3 M4. First visit M1 F1. Team P1 F1. Fees R1 M4. Stories W1 D1 + M3 S1 S2 S3. Notes index W3 W2. FAQ K3 W2. Contact F1 R1.

---

## 7. Motion and scroll effects

Reference p-lic.jp has **no scroll-driven effects** (RT(g); scroll-plic-before/after identical). Its motion is non-scroll; we keep that as CSS, and add three calm sp-scroll effects from the stage-a candidates.

| Effect | Where | Source and timing | Class / implementation |
|---|---|---|---|
| Hero cross-fade | K1 ⇄ K2 | p-lic.jp slick fade 2000 ms every 4000 ms | CSS keyframes on K2 opacity, 8 s cycle (0–25% 0, 25–50% fade in over 2 s, 50–75% 1, 75–100% fade out), ease; reduced-motion / `?sp-static`: K1 only |
| Badge float | hero badge, inner badges | p-lic.jp "fuwafuwa" 2 s linear infinite, −10 px | CSS keyframes; off under reduced-motion |
| Hover | pills, card, nav icons | p-lic.jp rotate 5° / translateY −8 px, 0.4 s cubic-bezier(.19,1,.22,1) | CSS :hover |
| **1. Parallax (required)** | **home hero big photo K1/K2**; inner page head big photos | ours (reference has none; it is the slow life of the hero slider translated to scroll) | `figure.hs-torn--a` (clip-path) **>** `div.sp-parallax` (observed, no clip-path, `overflow: clip`, 100% × 100%) **>** two direct `img` (K1, K2). `--sp-par: 8%` desktop, `6%` ≤ 781 px (mobile kept); inner heads `--sp-par: 6%`. Foreground (H1, badge, marks) are siblings outside the moving layer. |
| **2. Rise + stagger** | home welcome cluster (3 photos), home proof cards (3), Stories page story rows, Team list columns | ours, calm, `sp-reveal--up` 24 px, `--sp-dur: .8s`, ease `cubic-bezier(.23,1,.32,1)` (spec default), stagger 0.12 s | parent `sp-stagger`, children `sp-reveal sp-reveal--up`; difficulty list one `sp-reveal--up`. Not on the hero, fee table, FAQ, forms, legal text, or the horizontal row's slides (put on the row container if anything). |
| **3. Count-up** | home method figures 45 / 8 / 10; Method page figures 45 / 8 / 10 / 2 | ours, 1.2 s easeOutCubic (spec) | `sp-reveal sp-count` on each figure paragraph |

Copy `pipeline/assets/sp-scroll/` unchanged into `assets/`; JS in head, not deferred; `add_editor_style('assets/sp-scroll.css')`. ≤ 3 sp effects per page. Validate with `check-parallax.mjs` (desktop + mobile, ≥ 6 px, reduced-motion 0).

---

## 8. Responsive rules (hard)

- 390 px first screen: no vertical text, no absolutely positioned label over text (badge in flow, card hidden, tabs hidden, tape hidden); H1, lead, CTA in normal flow below the photos. `auto-gates` text-overlap must pass.
- T3 vertical headings switch to horizontal ≤ 781 px; scallop bars stay.
- **Fee table** `table.hs-fees`: ≥ 782 px `width: 100%` of the 1200 container (alignwide), columns item (auto) / time (14ch) / price (`white-space: nowrap; text-align: right; width: 1%; padding-left: 2rem`), Hanken 700 1.125rem price; never clipped at 800 and 1280. ≤ 781 px: every row `display: grid` stacked (item bold on line 1, time and price on line 2 with price right-aligned), `thead` visually hidden. Any other table (FAQ none; Contact hours) stacks the same way.
- No horizontal overflow at 390 / 1280 (`html, body { overflow-x: clip }`; bleeding photos are clipped by their section with `overflow-x: clip`).
- The two-up row: 2 slides at ≥ 782, 1.15 at < 782; scroll-snap; no autoplay.

---

## 9. Similarity to the reference (target 80%)

| Dimension | Reference (token) | Hibiki Speech |
|---|---|---|
| Ground / text | white `#FFFFFF`, text `#000000` (RT(a)) | same |
| Accent | yellow `#EFC926` pills, scribbles (RT(a)) | same code, same uses + scallops, footer strip |
| Mark colours | blue `#1E7AC6`, green `#62AF5E`/`#02B990`, orange `#F56300`, pink `#E8478B` (RT(a)) | same codes |
| Side tabs | blue `#1E7AC6` + green `#02B990`, 82×176, r 6 left (RT(f)) | slate `#4F6465` (swap, see §5) + green `#02B990`, 82×176, r 6 left |
| First-screen saturated share | 12.1% (RT(a)) | target 9–13%, cap 15% |
| Type family | one gothic sans everywhere (RT(b)) | Hanken Grotesk + Public Sans, Noto Sans TC/JP |
| Body | 15/24 (1.6), ls 0.06em (RT(b)) | 16 / 1.75, ls 0.02em Latin, 0.06em CJK |
| Lead | 17/34 (2.0) (RT(b)) | 1.0625rem / 2.0 |
| H2 | 28/50.4, 700 (RT(b)) | 2rem / 1.5, 700 |
| Hero headline | handwritten SVG ≈ 64–70 px, 2 lines, line 2 indented, overlapping photo bottom | live H1 4.5rem, 2 lines, line 2 indented 1.6em, overlaps K1 bottom by 60 px |
| Header | 120 px white, icons above nav, yellow corner tab 110×122 (RT(c)) | same metrics, own icons, yellow "Book" tab 110×122 |
| Container | ≈1200 (x 120–1320); about text 480 + 709 (RT(c)) | 1200; welcome statement 480 + 709 |
| Section spacing | about 177/95, list 123 (RT(c)) | welcome 177/95, proof 123/123, others 120/120 |
| Hero big photo | 0–935 × ≈580, y 170, bleeds left, torn polygon, r 0 (RT(e)) | same: K1/K2 0–935 × 580, y 170, `hs-torn--a` |
| Hero small photo | 440 × 300, x 1000–1440, 270 px lower, torn (RT(e)) | same: K3 440 × 300, x 1000–1440, y 445 |
| About cluster | 3 overlapping torn photos ≈280×200, 360×270, 200×150, ±40 px (RT(e)) | W1 360×270, W2 280×200, W3 200×150, 40 px overlaps |
| Carousel | rounded 40, 484×303 (1.6:1), 2 visible, gap 4%, right pad 7.5vw (RT(d)) | same metrics, scroll-snap instead of autoplay |
| Vertical heading | 135 px column, yellow scallop bars 135×28 (RT(f)) | same |
| Marks | scribble 300×60, dots 90×80, triangle 55×90, kite 100×140, badge Ø160 dashed, −8° label card r 26 2 px outline (RT(f)) | same sizes, own drawing |
| Buttons | pill 70 h, r 50, yellow, black 700, white arrow circle, shadow 3px 3px 0 rgba(162,162,162,.16) (RT(d)) | same |
| Shadows / borders | none blurred; no borders (RT(d)) | same |
| Hero motion | fade 2000 / 4000 ms (RT(g)) | same timing, 2 slides |
| Badge motion | translateY −10 px, 2 s linear infinite (RT(g)) | same |
| Hover | rotate 5° / −8 px, 0.4 s cubic-bezier(.19,1,.22,1) (RT(g)) | same |
| Carousel motion | Splide 1500 / 3000 ms autoplay (RT(g)) | none (no library allowed) — deliberate gap |
| Scroll effects | none (RT(g)) | parallax hero 8%, rise + stagger, count-up (calm additions required by pipeline) |
| Footer | grey ground + yellow bottom band | `#F4F4F4` + `#EFC926` 80 px band |
Photos and copy are our own; no reference asset, text or logo.

---

## 10. Home acceptance checklist

1. First screen at 1440: torn K1 bleeding left (x 0–935, y 170) cross-fading to K2; torn K3 lower right (x 1000–1440, y 445); yellow tape between; scribble, dots, triangle, strokes visible; H1 "Time to find / the word." overlapping K1's bottom; pink dashed badge bottom-left floating; tilted "Since 2014" card bottom-right; slate + green right tabs; header 120 px with icons and yellow "Book" tab. All 6 KV items present.
2. 390: photos on top, H1/lead/CTA/badge in flow, no vertical text, no overlap; auto-gates pass.
3. `check-first-screen.py` saturated ≤ 15%; no table/form/search on the first screen.
4. T1 torn polygons recognisable (≥ 4 off-rectangle vertices); T2 ≥ 9 crayon marks on the home page in pure reference colours; T3 vertical heading between two yellow scallop bars beside a rounded-40 1.6:1 two-up row bleeding right with a kite over it.
5. Block order exactly §3 (hero, welcome, difficulty, method, people, proof, fees, notes, close); differs from the four recent themes per the table.
6. 14 home photo positions, all from §6, none repeated; no text/letters/logos in photos; same STYLE.
7. Fee table full width at ≥ 782 px with price column nowrap right, not cut at 800 and 1280; stacked on mobile. Fees and every number identical to §0 on Home, Fees, First visit, FAQ and all languages.
8. `sp-parallax` on the hero photo layer (`--sp-par` 8% / 6%), `check-parallax.mjs` passes desktop + mobile; rise+stagger and count-up only where §7 says; no reveal in the hero.
9. Fonts: Hanken Grotesk / Public Sans / Noto Sans TC / Noto Sans JP via theme.json fontFace, identical in editor and front end; max size 4.5rem.
10. English home ≥ 250 words, ≥ 3 narrative paragraphs; no cure/guarantee claims; founded 2014, Westmere, hours as §0.
