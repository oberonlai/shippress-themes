# Haru Allergy: design spec (stage 1, binding for implementation)

Slug `haru-allergy`, allergy and immunology clinic, type business/health (WooCommerce-compatible, not required). Reference: NUSET https://nuset.jp/ (see `reference.md`, `reference-tokens.md` = `tok(a)…tok(g)`, screenshots in `ref/`). Borrow composition, technique, motion and colour relationships; never copy NUSET photos, copy, wordmark or page layout. IMAGERY: **photo**. font_direction: **sans**.

---

## 0. Fixed brand facts (identical on every page, footer, posts and all five languages)
- **Haru Allergy**, allergy and immunology clinic, founded **2015**, **Linden Quay 14, 9000 Ghent, Belgium** (fictional address). Phone **+32 9 000 41 20**, email **hello@haru-allergy.example**. Currency **EUR** everywhere.
- Hours: **Mon–Fri 8:00–18:00** (Wednesday late clinic until **19:30**), **Sat 9:00–12:30** (testing only), Sun closed. New-patient first visits **Tuesday and Thursday mornings**. Children's clinic **Wednesday 13:00–17:00**.
- Process (one flow, same four words everywhere, never a step grid): **History** (60 min) → **Test** (skin-prick read after 15–20 minutes, same day or within one week) → **Plan** (a written one-page avoidance plan) → **Review** (booked at **12 weeks**; immunotherapy every 6 months).

### People (7; named the same everywhere; text rows, never a portrait grid)
| Name | Role |
|---|---|
| Dr Ines Marlow | Founder, allergist and clinical immunologist (adults) |
| Dr Tomasz Weber | Paediatric allergist, children's clinic |
| Dr Amara Okoye | Clinical immunologist, immunotherapy and drug allergy |
| Leah Fontaine | Nurse lead, skin-prick and patch testing |
| Samir Haddad | Respiratory physiologist, lung function and FeNO |
| Noor Aziz | Allergy dietitian, avoidance plans |
| Grace Mendes | Patient coordinator, bookings and reviews |

### Fees (7 rows; same amounts on Home chips, Fees page, Tests, First visit and all languages)
| Item | Time | EUR |
|---|---|---|
| First consultation with full history | 60 min | €145 |
| Skin-prick test panel (up to 20 allergens) | 40 min | €90 |
| Patch test series (3 visits in one week) | 3 visits | €210 |
| Lung function and FeNO | 30 min | €75 |
| Supervised oral food challenge | half day | €260 |
| Follow-up review | 30 min | €80 |
| Immunotherapy start visit (60 min observation) | 2 h | €120 |
Notes: itemised receipt for your insurer (reimbursement depends on the insurer, no promise); cancel at least **24 hours** ahead or a €40 fee applies. The written plan is included in the consultation.

### Posts (5; category + tags each)
| # | Title | Category | Tags | Image |
|---|---|---|---|---|
| 1 | The cat could stay (birch pollen, not the cat) | Case notes | hay-fever, skin-prick, adults | P10 |
| 2 | A rash after every run | Case notes | hives, food, adults | P11 |
| 3 | Peanut, at four, one spoon at a time | Case notes | food-allergy, children | P12 |
| 4 | The watch strap (nickel, patch test) | Case notes | eczema, patch-test | P13 |
| 5 | Lung function on Saturdays | Clinic notes | clinic | P17 |
Dates: posts 1–3 are the three newest Case notes (home query), post 4 older. Case notes are anonymised and say "written with permission; details changed". No cure, guarantee or statistics claims anywhere.

---

## 1. Signature techniques (three, from nuset.jp, obvious at a glance)

### T1. Pinned photo that softens and dims while a four-stanza poem rises (NUSET hero scroll; `ref/scroll-nuset-hero-before/-mid/-after.png`, tok(g))
- Reference: the full-bleed high-key portrait stays in place; on scroll it blurs 0→20 px (5 px mobile) and a warm gradient darkens it, while a four-stanza poem (two lines each, white, 18/43.2) lights up line by line in the right column, and a tiny Latin line "I live in my own skin." sits at the left middle.
- Ours (home blocks 1+2, one wrapper `.ha-kv`): `.ha-kv__stage` = core/cover 100svh with P01, **`position: sticky; top: 0`** (use `.ha-kv .ha-kv__stage.sp-parallax{position:sticky}` because sp-scroll sets `position:relative`); the parent must not have `overflow:hidden`. `.ha-kv__veil` = Group alignfull, min-height 120svh (mobile 110svh), z-index 1, transparent; its `::before` (content "", inset 0, z-index −1) carries `backdrop-filter: blur(20px)` (≤781 px: `blur(5px)`) and `background: linear-gradient(180deg, rgba(92,101,110,0) 0, rgba(92,101,110,.45) 20svh, rgba(92,101,110,.82) 45svh, rgba(92,101,110,.86) 100%)`, with `mask-image: linear-gradient(to bottom, transparent 0, #000 24svh)`. As the veil scrolls up over the pinned photo, the photo visibly defocuses and dims from the bottom up: NUSET's scrub, done in CSS only (no scroll listener).
- Veil content (desktop grid 12 cols, padding 0 48px): left cols 2–5 at 50% height the Latin line "I live around my triggers." Public Sans 0.75rem 500, tracking .04em, white 85%. Right cols 7–11 (x ≈ 56%): four stanzas (History, Test, Plan, Review; copy in §3), Public Sans 1.125rem / 2.4 (18/43.2 tok(b)), tracking .08em, white, stanza gap 1.4em, then text link "How a first visit runs →" to /first-visit/. Stanza wrapper `sp-stagger`, each stanza `sp-reveal sp-reveal--up` with `--sp-dist: 13px` (tok(g) y 13), 0.8s `cubic-bezier(.25,.46,.45,.94)` (power1.out). Glow: `html.sp-js:not(.sp-no-motion) .ha-poem .sp-reveal:not(.sp-in){text-shadow:0 0 14px #CBD0D2}`, `transition: text-shadow .8s` (tok(g) glow → none).
- Inner pages (T1 mini): same construction with stage **70svh** (mobile 64svh) and veil 80svh carrying the page title + 2–4 short lead lines (one stanza each).
- Must not be diluted: the photo must stay pinned while the veil passes (sticky, not a second copy of the photo), the blur must be visible (≥16 px desktop), the poem is white in the right half on the dimmed photo, lines rise one at a time. No dark solid band instead of the blur.

### T2. Tall portraits flush to the left and right viewport edges at different heights, narrow heading between, centred text column with a veiled third photo (NUSET About; `ref/nuset-about-edge-photos.png`, tok(e))
- Reference: a 3:4 portrait flush to the left edge (463 px wide at 1440), a narrower tall portrait flush right (277×450) that starts lower, a narrow vertical heading between them, then a text column at x≈36% with a small photo (304×380) under a pale veil behind its lower-left.
- Ours (home block 3 "The problem"): section ground base, padding 160px 0 (tok(c)). Row 1 grid `32vw 1fr 220px 1fr 19vw`, no side padding: P02 flush left, width **32vw**, aspect 3:4, top 0; P03 flush right, width **19vw**, aspect 277:450, `margin-top: 200px`; heading in the 220 px column at x≈52%, Figtree 300 2.625rem/1.5 (42 px H3 tok(b)), three lines "A rash, / a wheeze, / a season." (ja/zh-TW at ≥960 px `writing-mode: vertical-rl`, 1.5rem/1.7, tracking .1em; en/fr/de horizontal). Row 2: text column starting x 36%, max-width 560px, three narrative paragraphs Public Sans 1.0625rem/2.2 tracking .04em; P04 at x 20%, width 21vw, aspect 4:5, overlapping the text column's lower-left by 8vw via grid overlap (not absolute), with a veil `rgba(247,246,243,.55)` over it; text z-index above. Radius 0 everywhere.
- Must not be diluted: both portraits touch the viewport edges (0 gap), different widths and different tops (≥160 px offset), heading narrow between them, P04 under a visible veil.

### T3. Rounded-40 paper card with ruled footer and dot pager beside a tall 2:3 photo that swaps with it (NUSET Voice; `ref/scroll-nuset-voice.png`, tok(d)(e))
- Reference: a 399×449 card radius ≈40 px on `#EAE3DC`, centred title, quote, 1 px rule, attribution footer centred; dot pager under it; to the right a 2:3 photo (434×650) starting higher than the card, swapping with the slide.
- Ours (home block 6 "In their words"): container 1063 px centred (tok(c)); track = `display:grid; grid-auto-flow:column; grid-auto-columns:100%; overflow-x:auto; scroll-snap-type:x mandatory; scrollbar-width:none`; each slide (`id="voice-1..3"`, scroll-snap-align start) = card 520×590 (radius **40px**, ground `#E9E8E4`, padding 40px 40px 32px) + photo 2:3 width 414 px, radius 0, `margin-top:-50px`, gap 128px. Card: title Figtree 400 1.375rem centred, quote Public Sans 0.9375rem/2.1, flex spacer, 1px rule `rgba(36,36,35,.2)`, footer 0.875rem centred. Dot pager under the card: 3 links to `#voice-n`, 5 px dots, gap 8 px, active ink, others ink 30%. Slides' children have **no** sp-reveal (horizontal container); `sp-reveal--up` on the whole section wrapper only.
- Inner pages: one slide (no pager); on Contact and Newsletter the same card holds the form slot.
- Must not be diluted: radius stays 40 px, card ground stays the paper tone (not white), photo is 2:3 and sits higher than the card, ruled footer and dots visible.

### Supporting (from NUSET, not counted)
- S4 "Line up" band: huge light Latin heading 5.125rem (82 px Lato 300, tracking 3.28 px → .04em, lh 1.5 tok(b)), two overlapping 1px white hairline circles (420 px, offset 80 px, tok(f); inline SVG aria-hidden; mobile 260 px), rows of 2:3 photo (413 px) + text with a highlighted chip + a vertical side note far right (desktop ≥960 `vertical-rl` in all languages; <960 horizontal in flow under the text with a 1px left rule).
- S5 Q&A slate band: translucent cards `rgba(255,255,255,.12)`, radius 0, no shadow, thumbnail 256×199, "Read the note" + paper-plane arrow (inline SVG, ours), progress line 420 px grey with 140 px white segment (tok(d)), slate gradient `#757E82→#939799` over a photo.
- Nav active dot: 4 px circle 6 px under the current item (`ref/scroll-nuset-hero-after.png`).

### Continuation to inner pages
| Page | T1 mini (head photo) | T2 edge portraits | T3 card | Supporting |
|---|---|---|---|---|
| About | P16 | P01 left, P05 right, veil P04 | — | people text rows |
| First visit | P05 | — | slide quote 1, photo P09 | S4 rows P06, P07 |
| Tests | P17 | — | quote 3, photo P15 | S4 rows P06, P13, P12 + 2 text rows |
| Conditions | P08 | P02 left, P10 right, veil P04 | — | S5 band of 7 text cards (no parallax) |
| Immunotherapy | P18 | P10 left, P02 right, veil P04 | quote 1, photo P09 | — |
| Children | P03 | P12 left, P14 right, veil P04 | quote 2, photo P07 | — |
| Fees | P07 | — | — | fee table (no reveal) |
| Contact | P16 | P18 left, P01 right | card holds contact form slot, photo P14 | — |
| Newsletter | P04 | — | card holds newsletter slot, photo P10 | — |
| Case notes (posts page, category, tag) | P11 | — | — | S5 cards grid on slate band |
T1 on 10 inner pages, T2 on 5, T3 on 6.

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
NUSET draws a full-bleed, light-flooded photograph: a woman holds a pale bottle to her face in front of a sheer curtain, subject right of centre, curtain light at the left. A huge thin wordmark sits bottom-left, a three-line vertical tagline right of centre on her shoulder, a two-line English descriptor top-left, small white nav top-right. Story: "I like my own skin" — a calm relationship with one's own body. Signature motion: on scroll the photo blurs and darkens under a gradient while a four-stanza poem lights up line by line.

### (2) Our translation (allergy clinic, same composition, same motion idea, same image type = real high-key photograph)
A bright consulting room by a sheer-curtained window: a clinician (sage scrubs, the one muted sage garment) tilts a skin-prick tray toward a seated patient whose sleeve is rolled to the elbow; subject right of centre, curtain light at the left. Story: *a rash or a wheeze has a trigger you can live around.* The wordmark "HARU" lies bottom-left like NUSET's, the three-line tagline sits right of centre, the descriptor top-left. Motion: the photo stays pinned and softens and dims while four stanzas (history, test, plan, review) rise in the right column.

### (3) KV checklist (home first screen, 1440×900 and 390×844, `?sp-static`; every row built and visible)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Full-bleed high-key portrait, curtain light | Full-bleed P01: clinician tilts a skin-prick tray toward a patient with one sleeve rolled; focal point 62% 45%; legibility gradient `linear-gradient(180deg, rgba(36,36,35,.18) 0, rgba(36,36,35,0) 22%, rgba(36,36,35,0) 62%, rgba(36,36,35,.30) 100%)` | whole first screen 100vw×100svh, subject x 45–85% | pinned (sticky) + `sp-parallax --sp-par:8%` (mobile 6%); no reveal | P01 |
| 2 | Huge thin wordmark bottom-left | "HARU" Figtree 300 `clamp(4.5rem, 10vw, 9rem)` (144 px at 1440), tracking .08em, white; under it "ALLERGY & IMMUNOLOGY · GHENT" Public Sans 0.75rem tracking .2em | bottom-left, x 48 px, baseline ≈ 88% height | static | — |
| 3 | Three-line vertical tagline right of centre | "Find the trigger. / Keep the life / around it." Public Sans 1.125rem/2.2 tracking .1em white; ja/zh-TW ≥960 px `vertical-rl` 1.5rem/1.7 | middle row, column from x 68% (on the patient's shoulder/curtain) | static | — |
| 4 | Two-line English descriptor top-left | "An allergy and immunology clinic in Ghent. / We trace a rash or a wheeze to a trigger you can live around." Public Sans 0.75rem/1.6 white | top-left, x 48 px, y 112 px (below the header) | static | — |
| 5 | Small white nav top-right, active dot | one top menu, Public Sans 15px 500 tracking .04em white, 4 px active dot below; logo "HARU" Figtree 300 1.75rem top-left | header row, right | static | — |
| 6 | Blur + dim + poem lit line by line | the pinned stage + rising veil (T1); at load: "Scroll" 0.6875rem + 1×48 px white tick bottom-centre as the cue | whole first screen; poem in the right column right after | veil blur 20 px/5 px + slate dim; stanzas `sp-stagger` + `sp-reveal--up` 0.8s power1.out | P01 (same photo, pinned) |
| + | Row requirement: info bar | translucent bar `rgba(255,255,255,.12)` + `backdrop-filter: blur(6px)`, 1px `rgba(255,255,255,.35)` top hairline, padding 18px 24px, width 560 px: "New patients: Tue & Thu mornings · Mon–Fri 8:00–18:00 · Sat 9:00–12:30 · +32 9 000 41 20" + outlined button "Book a first visit →" (1px white, radius 0, 44 px) → /contact/ | bottom row, right, aligned with the wordmark baseline | static | — |
The scene (clinician, tray, rolled sleeve, curtain light) and the pinned-blur poem motion are mandatory; "adapted" never means dropping them. Stage layout is a CSS grid (`grid-template-rows: auto 1fr auto`, padding 112px 48px 32px), no absolutely positioned text.

---

## 3. Home page

### First screen
See KV checklist. Forbidden on it: table, form, search box, giant centred text, any reveal. Saturated share gate 12% (target ≤ 8%; NUSET 6.8%, tok(a)).

### Block order
| # | Pattern | Purpose | Layout and photos | Copy |
|---|---|---|---|---|
| 1 | `front-kv` (stage) | KV | sticky stage, P01, see §2 | 45 words |
| 2 | `front-kv` (veil) | the method as a poem | T1 veil over the pinned P01. Stanzas: "First, we listen: the season, / the room, the meal, the hour it began." · "Then a few drops on the forearm / and twenty quiet minutes." · "We write down what to keep away, / and everything you can keep." · "And we book the day we look again, / so the plan can change with you." | 70 words |
| 3 | `front-problem` | problem | T2: P02 left edge, P03 right edge, P04 veiled; heading "A rash, / a wheeze, / a season."; three paragraphs (when symptoms follow a pattern; why guessing leads to avoiding too much; what a history can show) | 130 words (3 × ≥35) |
| 4 | `front-method` | method | S4 band `#CBD0D2`, padding 130px 0 208px (tok(c)); heading "How we look" 5.125rem at x 80; hairline circles; three rows: The history (P05, chip "First consultation · 60 min · €145", side note "Bring your medicines / and photos of the rash."), The test (P06, chip "Skin-prick panel · up to 20 allergens · €90", side note "Skin read after / fifteen to twenty minutes."), The plan (P07, chip "Written plan · included", side note "One page, / for the fridge door."); "All fees →" link | 3 × 55 words |
| 5 | `front-cases` | proof | S5 slate band, padding 210px 0, P08 background with `sp-parallax --sp-par:10%` (mobile 7%), overlay `linear-gradient(100deg, rgba(117,126,130,.88), rgba(147,151,153,.78))`; label "Case notes" + heading "Four people, / four triggers." white; Query Loop (category case-notes, 3 newest) as translucent cards in a horizontal track (2.2 cards visible at 1440): thumbnails P10, P11, P12; progress line; "All case notes →" | 3 × 25 words + 30 |
| 6 | `front-voice` | proof (voices) | T3, heading "In their words" Figtree 300 2.625rem above the card; slides: (1) "Skin-prick panel and plan" — "I came in sure it was the cat. It was birch pollen, and the cat could stay. The plan fits on one page and lives on our fridge." — Adult patient, 34 · P09; (2) "Oral food challenge" — "They let my son build towers between each tiny dose. By lunch we knew what we were dealing with, and what we were not." — Parent of a four-year-old · P14; (3) "Patch test series" — "Three visits in one week and an answer about the watch strap. The list lives in my wallet now." — Adult patient, 52 · P15 | 3 × 30 words |
| 7 | `front-visit` | review + visit | base; left 5/12: "Come in with the story, / leave with a plan." 2.625rem; 55-word paragraph about booking the review at 12 weeks; hours, address, phone; filled slate button "Book a first visit" (52 px, radius 0) + "Fees →"; right: P16 4:5 flush to the right viewport edge (T2 echo) | 80 words |
Footer (all pages): ground `#5C656E`, white text; "The pollen letter" + one sentence + newsletter slot; nav columns; address, hours; © 2015–2026 Haru Allergy.

English home ≥ 250 words with narrative paragraphs in #3 (three) and #7. Home photo positions (15, none repeated): P01 · P02 P03 P04 · P05 P06 P07 · P08 P10 P11 P12 · P09 P14 P15 · P16.

### Comparison with recent themes
| # | Senbatsu | Kashidashi | Tana | Nagisa | **Haru** |
|---|---|---|---|---|---|
| 1 | diagonal seam hero | hero KV wedge | three-pane stage | foot wordmark + info bar | **pinned photo, wordmark bottom-left, info panel right** |
| 2 | brief icon columns | yard board bar | idea | concept scene | **veil poem over the same pinned photo** |
| 3 | mandates 4×2 tiles | out-this-week strip | make cards + tile index | day schedule | **edge portraits + veiled photo (problem)** |
| 4 | shortlist paragraphs | yard 5/7 split | showroom parallax | kitchen scene duo | **Line-up band: 2:3 rows, chips, vertical notes** |
| 5 | parallax band | finder | materials marquee | tables | **slate case-note band, translucent cards** |
| 6 | fees table | hire-week strip | ways | plates slate band | **rounded-40 voice card + 2:3 photo** |
| 7 | partner / letters / FAQ / CTA | parallax / rates / stories / FAQ / request | people / rooms / notes / visit | journal / visit parallax | **visit (edge photo)** |
Why not alike: no table, no tile index, no strip of day panels, no FAQ list, no marquee. Versus Nagisa (closest: slate, foot wordmark): Haru's wordmark is a 4-letter word at the left only (not justified edge to edge), the photo is high-key and pinned with a blur veil (Nagisa: dark film still with a load-time window), and the slate band carries translucent cards on a light page (Nagisa: near-black scenes). Versus Hodoki T3 (edge photos + giant phrase): Haru has no giant phrase; a narrow heading and a veiled third photo.

---

## 4. Inner pages (11 + post templates; standard pages home, about, news, article, category, tag, newsletter, contact)
Each content page = T1 mini head → body → small close line ("Book a first visit →"). Header white over the photo head; pages without photo head use the solid header (ink on base). No sidebar.
1. **About** (`/about/`): head P16 "A clinic that / starts with listening."; T2 (P01, P05, veil P04); founded 2015 on Linden Quay; why the history comes first; the seven people as text rows (name Figtree 500 1.125rem, role, one sentence; 1px rules); 350 words.
2. **Your first visit** (`/first-visit/`): head P05, veil carries the four stanzas; before you come (which medicines we will ask you to pause; photos of the rash; a symptom diary), on the day (60 min, Tue/Thu mornings), after (written plan, review at 12 weeks); S4 rows P06, P07; T3 quote 1 with P09.
3. **Tests** (`/tests/`): head P17; S4 rows: skin-prick (P06, €90), patch series (P13, €210), oral food challenge (P12, €260), lung function and FeNO (text row, €75), blood tests for specific IgE (text row, lab fee billed by the lab); T3 quote 3 with P15.
4. **Conditions** (`/conditions/`): head P08; T2 (P02, P10, veil P04); S5 band with 7 text cards (hay fever, asthma, eczema, food allergy, hives, drug allergy, insect venom), each 40 words + link.
5. **Immunotherapy** (`/immunotherapy/`): head P18; T2 (P10, P02, veil P04); sublingual tablets/drops and injections, a course of about three years, 60-minute observation at the start (€120), reviews every 6 months; "it can reduce symptoms for some people; it is not right for everyone"; T3 quote 1 with P09.
6. **Children** (`/children/`): head P03; T2 (P12, P14, veil P04); Wednesday 13:00–17:00 with Dr Tomasz Weber; food challenges; school plans; T3 quote 2 with P07.
7. **Fees** (`/fees/`): head P07; fee table (§0), insurer note, 24-hour cancellation; no reveal on the table.
8. **Case notes** (posts page `/case-notes/` = news; `home.html`, `archive.html`, `category.html`, `tag.html`): head P11; slate band with translucent cards grid (2 columns desktop, thumbnails left); pagination.
9. **Single post** (`single.html`): solid header; category label, title Figtree 300 3.25rem, date; featured image 16:10 content width, radius 0; text column 680 px; closing "What we did" box in a T3 card (radius 40, `#E9E8E4`).
10. **Contact / Book** (`/contact/`): head P16; T2 (P18 left, P01 right); details column + T3 card with contact form slot, photo P14 (§8).
11. **Newsletter** (`/newsletter/`): head P04; "The pollen letter", T3 card with the newsletter slot, photo P10 (§8).
12. **Privacy** (`/privacy/`): solid header, text only.
Header menu (exactly one): First visit, Tests, Conditions, Children, Fees, Case notes, About, Contact. Immunotherapy, Newsletter, Privacy in the footer.

---

## 5. Colour
NUSET relationship (tok(a)): pale ground ~45%, one soft mid band ~20%, cool slate band ~8%, paper card, near-black ink, sage under 2%. **Hue change, with reason:** NUSET's ground `#F7F4EE` and band `#CDBDB2` are cream/taupe (cosmetics); the plan row fixes palette blue-grey (slate) slate `#5C656E`, common rules forbid a cream default, and a clinic should read clean. So ground and band keep NUSET's lightness but are neutralised; the slate band, ink and sage stay at NUSET values.

| Role | Hex | Source (tok(a)) | Use | Share |
|---|---|---|---|---|
| Base | `#F7F6F3` | `#F7F4EE`, same lightness, chroma reduced | page ground | ~45% |
| Ink | `#242423` | `#242423` exact | text, headings on light | ~8% |
| Band | `#CBD0D2` | `#CDBDB2` role, same lightness, cool | S4 method band | ~20% |
| Slate band | `#757E82 → #939799` | exact | S5 overlay gradient | ~8% |
| Main slate | `#5C656E` | plan hex (≈ `#757E82` −10% lightness so white text is 5.9:1) | buttons, footer, veil dim, links hover | ~10% |
| Paper card | `#E9E8E4` | `#EAE3DC`, neutralised | T3 cards, chips | ~3% |
| Accent sage | `#A5B09A` | exact (garment in photos) | photo garments, focus ring on dark | < 2% |
| Muted text | `#5E6266` | derived | captions, dates | — |
Contrast: ink on base 15:1; white on `#5C656E` 5.9:1; ink on `#CBD0D2` 11:1. First-screen saturated share: plan cap 30%, NUSET 6.8% → **gate 12%, target ≤ 8%** (`check-first-screen.py`), achieved by the high-key grade and white UI only. Differs from Nagisa (`#F4F6F7` / `#4A5963` + near-black): warmer ground, no dark ground.

## 6. Type (font_direction = sans; Latin and CJK all sans)
- Latin display **Figtree** (300/400/500), body **Public Sans** (400/500/600); both via theme.json `fontFamilies` + `fontFace` (woff2 in assets/fonts), so editor and front end are identical. CJK: **Noto Sans TC** and **Noto Sans JP** subsets (400/500) as theme.json fontFace (display use), subset via the Hokuto/Hada workaround.
- Stacks: en/fr/de display `"Figtree", "Public Sans", system-ui, sans-serif`; body `"Public Sans", system-ui, -apple-system, "Segoe UI", sans-serif`. zh-TW display `"Figtree", "Noto Sans TC", "PingFang TC", "Microsoft JhengHei", sans-serif`; body `"Public Sans", "PingFang TC", "Heiti TC", "Microsoft JhengHei", sans-serif` (no bundled zh, no JP font). ja display `"Figtree", "Noto Sans JP", "Hiragino Sans", "Yu Gothic", sans-serif`; body `"Public Sans", "Hiragino Sans", "Hiragino Kaku Gothic ProN", "Yu Gothic", "Meiryo", sans-serif`. Copy `shared/inc/editor-lang.php` (`:lang(` rules exist).
- Sizes (theme.json): small 0.8125rem, base 1.0625rem, medium 1.375rem, large 2.625rem (42 px H3 tok(b)), x-large 5.125rem (82 px "Line up" tok(b)), xx-large `clamp(4.5rem,10vw,9rem)` (wordmark; max ≥ 4.25rem ✓). Display weight 300, line-height 1.5, tracking .04em (3.28/82). Body lh 2.2 en (tok(b) 43.2/18 = 2.4 for poem lines only), CJK body lh 1.85, CJK headings ≈ 0.75× en; fr/de `hyphens:auto`. Nav 15 px 500 tracking .04em.

## 7. Responsive
- 390 px first screen: no vertical text, nothing absolutely positioned over text; stage grid stacks: descriptor, tagline (horizontal, left), cue hidden, wordmark 4.5rem, info bar full width in flow (items on 2 lines, button full width). Vertical text (tagline, T2 heading, S4 side notes) only ≥ 960 px.
- T2 < 782: P02 80vw flush left, heading, P03 56vw flush right, text, P04 70vw with veil; offsets 40 px. T3 < 782: card full width (radius 32), photo above it 2:3 at 72vw. S4 rows < 782: photo 2:3 full width, then text. S5 cards: 86vw slides.
- Fee table ≥ 782 px: full content width (`width:100%`), price column `white-space:nowrap; text-align:right`, never cut (tested at 800 and 1280). < 782 any table stacks into label/value rows (`display:block` rows, `data-label`-free: label visible in the first cell).
- `html, body { overflow-x: clip }`; no horizontal scroll at 390 and 1280.

## 8. Forms (contract v1 — `steps/form-contract-v1` exists)
Copy `pipeline/assets/forms/shippress-forms.php` → `inc/`, CSS + editor JS → `assets/`, require in functions.php. Forms never in the home first screen, never `sp-reveal`, never inside a parallax layer.
- **Contact** (`/contact/`, `page-contact` PHP pattern): two columns ≥ 960: left 5/12 details (address, phone, email, hours, "Grace replies within one working day", what to include: symptoms, when they happen, medicines, child or adult); right 7/12 a T3 card (`#E9E8E4`, radius 40, padding 40) holding `shippress_form_slot( kind: contact )`. Fallback (no CF7/WPForms) = the literal mailto button via `ob_start()`: filled slate button "Email the clinic" → `mailto:hello@haru-allergy.example?subject=…` (`contact_subject`) + one line. Never links to /contact/ itself. Expected plugin fields (styled only): Name*, Email*, Phone, Who is the visit for (select: Adult / Child), Reason (select: Hay fever / Asthma / Eczema / Food / Hives / Drug / Insect / Other), Preferred morning (radio Tue / Thu), Message* (textarea), consent checkbox. No separate booking page (all "Book" links go to /contact/).
- **Newsletter** (`/newsletter/`, standalone page, not the posts list): "The pollen letter" — four letters a year at the start of each pollen season; 3 short lines; T3 card (max 560 px) with `shippress_form_slot( kind: newsletter )`: email (required, type=email) + submit + notice; privacy link. Footer (dark `#5C656E`): heading + sentence + same slot, inline ≥ 782, stacked below. Order: MailPoet (explicit ID) → MC4WP first form → CF7/WPForms only with an explicit dedicated ID. No plugin: native mailto POST with the entered address and the visible notice; never claims subscription.
- Tokens (style.css; map to theme.json presets):
| Token | Light ground | Dark ground (footer `#5C656E`) |
|---|---|---|
| `--sp-form-accent` | `#5C656E` | `#F7F6F3` |
| `--sp-form-on-accent` | `#FFFFFF` | `#242423` |
| `--sp-form-radius` | `0px` (fields), card radius 40 stays on the card | `0px` |
| `--sp-form-focus` | `#242423`, 2 px outline offset 2 | `#A5B09A` |
| `--sp-form-surface` | `#FFFFFF`, 1px `#CBD0D2` border, hover `#5C656E` | `#FFFFFF` |
| `--sp-form-text` | `#242423` | `#242423` in fields; labels/notices inherit white |
| error / success | `#9B3B2E` / `#3F6B4E` text + 1 px border | `#F2C2B8` / `#C9DCC0` |
Inputs 48 px, textarea min 160 px, labels Public Sans 500 0.875rem above fields, checkbox/radio `accent-color: var(--sp-form-accent)`, submit 48 px Public Sans 600. Check light + dark, 390 + desktop, with real CF7 (no submission).
- Five-language semantic keys (inc/i18n/en.php first, `L10N_SEMANTIC=1`; zh-TW, ja, fr, de rewritten, not literal): `forms_email` "Your email address"; `forms_subscribe` "Send me the pollen letter"; `forms_mail_notice` "Opens your email app. Send the message to subscribe; you are not subscribed yet."; `forms_mail_subject` "The pollen letter: please add me"; `contact_email` "Email the clinic"; `contact_subject` "First visit enquiry"; `forms_contact_note` "Grace replies within one working day."

## 9. Motion (sp-scroll only; copy `pipeline/assets/sp-scroll/` unchanged)
Three effect kinds per page max: parallax, reveal-up (+stagger), reveal-mask. Hero stage: no reveal.
| Effect | Where | Source (NUSET, tok(g)) | Values |
|---|---|---|---|
| sticky + veil blur (CSS) + `sp-parallax` | home KV stage P01 `--sp-par:8%` (≤781: 6%); inner T1 heads same | hero ScrollTrigger scrub 1.4, blur 0→20 px (5 mobile), gradient 0→1, start 0% top → end 90% top | veil 120svh ≈ the 90% scrub distance; blur 20/5 px |
| `sp-parallax` (required second instance) | home #5 slate band, P08, `--sp-par:10%` (≤781: 7%); guarantees `check-parallax.mjs` ≥ 6 px even if the sticky stage measures low | same scrub feel | cover background layer, foreground cards not in the layer |
| `sp-stagger` + `sp-reveal--up` | poem stanzas (#2, inner veils), #3 paragraphs, #4 row text, #7 text, voice section wrapper | poem per char: opacity, y 13→0, 0.8s power1.out, stagger 0.03 | `--sp-dist:13px`, 0.8s `cubic-bezier(.25,.46,.45,.94)`, stagger 0.12s (sp default) |
| `sp-reveal--mask` | section titles: "How we look", "Four people, four triggers", "In their words", inner T2 headings | title mask sweep 210%, blur 5→0, once at top 100%, 1.0–1.5s power2.out | sp default 1.2s ease-out |
Not used: Lenis smooth scroll, Splide (replaced by scroll-snap), page loader. No reveal on forms, fee table, legal text, horizontal tracks' children.

## 10. Imagery and image list (18; Grok, one at a time, read each; 0 cut-outs; ≤ 300 KB, ≤ 2000 px)
Imagery: **photo** (from stage-a IMAGERY: photo). STYLE (exact string on every prompt):
`high-key documentary photograph, soft window light through a sheer white curtain, pale neutral walls and floor, natural skin tones, one muted sage green garment, calm unposed moment, modern international clinic or home setting, diverse adults and children, 35mm lens, gentle film grain, no text, no logos, no brand marks, no readable labels, no Japanese elements`
| ID | Subject / composition | Ratio | Used on (once per page) | Home |
|---|---|---|---|---|
| P01 | clinician (woman 40s, sage scrubs) tilts a small skin-prick tray toward a seated patient (man 30s) with one sleeve rolled to the elbow, sheer curtain light at left, subjects right of centre | 16:10 | Home KV; About T2; Contact T2 | ✓ |
| P02 | woman 30s at a window, holding her forearm with faint redness, spring blossom blurred outside | 3:4 | Home T2; Conditions T2; Immunotherapy T2 | ✓ |
| P03 | child 6 using an inhaler spacer, parent's hand on the shoulder, window light | 277:450 | Home T2; Children head | ✓ |
| P04 | still life: sheer curtain with birch catkins and drifting pollen in the light, empty chair | 4:5 | Home T2 veil; About/Conditions/Immunotherapy/Children veil; Newsletter head | ✓ |
| P05 | clinician listening and writing on a blank page across a small table, patient talking | 2:3 | Home S4; First visit head; About T2 | ✓ |
| P06 | close-up forearm with a neat grid of tiny dots (no numbers), gloved hand with lancet | 2:3 | Home S4; First visit S4; Tests S4 | ✓ |
| P07 | dietitian and parent at a table with fresh foods and a blank folded sheet | 2:3 | Home S4; First visit S4; Fees head; Children T3 | ✓ |
| P08 | soft-focus waiting area, sheer curtains, pale chairs, cool light | 16:9 | Home S5 band; Conditions head | ✓ |
| P09 | adult's hands resting on a window sill, spring blossom outside | 2:3 | Home T3 slide 1; First visit T3; Immunotherapy T3 | ✓ |
| P10 | person on a balcony under birch trees in spring, neighbour's cat on the rail | 4:3 | Home S5 card; Post 1; Conditions/Immunotherapy T2; Newsletter T3 | ✓ |
| P11 | running shoes and a water bottle on a park bench, morning | 4:3 | Home S5 card; Post 2; Case notes head | ✓ |
| P12 | child at a clinic table with a small plate and toy blocks, parent beside, nurse behind | 4:3 | Home S5 card; Post 3; Tests S4; Children T2 | ✓ |
| P13 | wrist without a watch, metal buckle strap on a white table, patch-test squares on the upper back seen softly | 4:3 | Post 4; Tests S4 | — |
| P14 | parent and child walking hand in hand in a park, from behind | 2:3 | Home T3 slide 2; Children T2; Contact T3 | ✓ |
| P15 | man 50s watering plants on a bright balcony | 2:3 | Home T3 slide 3; Tests T3 | ✓ |
| P16 | clinic reception by a tall window, pale wood desk, plants, no signage | 4:5 | Home visit; About head; Contact head | ✓ |
| P17 | patient blowing into a spirometer, physiologist beside, window light | 16:10 | Post 5; Tests head | — |
| P18 | patient in a pale observation chair reading, nurse checking the forearm, small clock (no numerals readable) | 16:10 | Immunotherapy head; Contact T2 | — |
Home: 15 positions, none repeated. Per page no duplicates (check against the §1 continuation table).

## 11. Similarity table (target 80%)
| Dimension | NUSET | Haru Allergy | Token |
|---|---|---|---|
| Ground / band / ink | `#F7F4EE` 45% / `#CDBDB2` 20% / `#242423` | `#F7F6F3` 45% / `#CBD0D2` 20% / `#242423` | a |
| Slate band | `#757E82→#939799` ~8% | identical | a |
| Card / accent | `#EAE3DC` / sage `#A5B09A` | `#E9E8E4` / `#A5B09A` | a |
| First-screen saturation | 6.8% | ≤ 8% (gate 12%) | a |
| Display | Lato 300 82/123, ls 3.28 | Figtree 300 82/123, ls .04em | b |
| H3 | 42 px 300 | 42 px 300 | b |
| Body / poem | 18/43.2, ls 1.44 | poem 18/43.2 ls .08em; body 17/37.4 | b |
| Nav | 15 px 500 ls .6, active dot | 15 px 500 ls .04em, 4 px dot | b |
| Vertical text | vertical-rl 24/40.8 | ja/zh ≥960: 24/40.8; side notes all langs ≥960 | b |
| Band padding | 130/208, 160, 210 | 130/208 (method), 160 (problem, voice, visit), 210 (cases) | c |
| Containers | 1063–1280, text 927, photo col 413 | 1063 voice, 1280 max, photo 413 | c |
| Photo radius | 0 | 0 | d |
| Voice card | r 40, `#EAE3DC`, 1px ruled footer | r 40, `#E9E8E4`, 1px ruled footer | d |
| Q&A cards | white 12%, r 0, no shadow, progress 140/420 | identical | d |
| Hero image | full-bleed 16:10, subject right, curtain left | identical composition | e |
| Edge portraits | 3:4 463 left, 277×450 right, 304×380 veiled | 32vw 3:4 left, 19vw 277:450 right, 21vw 4:5 veiled | e |
| Product / voice photo | 413×619 2:3, 434×650 2:3 | 413 2:3 rows, 414 2:3 voice | e |
| Thumbnails | 256×199 | 256×199 | e |
| Decoration | two 420 px hairline circles, vertical side note, chip, dot pager, paper-plane arrow | all five, redrawn | f |
| Hero motion | blur 0→20 (5) + gradient, scrub 1.4 | sticky veil blur 20 (5) + slate gradient over 120svh | g |
| Poem | per-char y13, 0.8s power1.out | per-stanza y13, 0.8s power1.out, glow | g |
| Title | mask sweep + blur, 1–1.5s | sp-reveal--mask 1.2s | g |
| Smooth scroll / slider | Lenis / Splide | none / scroll-snap | g |
Not copied: photos, Japanese copy, NUSET wordmark, product shots, page structure beyond the borrowed blocks.

## 12. Home acceptance checklist
1. First screen 1440×900 (`?sp-static`): P01 full-bleed with the clinician, tray and rolled sleeve; "HARU" ≥ 9rem bottom-left; three-line tagline right of centre; two-line descriptor top-left; white nav with active dot; info bar with hours + outlined "Book a first visit"; Scroll cue. No form/table/search/giant centred text; no sp-reveal in block 1; saturation ≤ 12%.
2. 390×844: everything in flow, no vertical text, no overlap, no horizontal scroll; info bar visible.
3. With `?sp-motion`: the stage stays pinned while the veil passes; blur and slate dim visible; stanzas rise one by one; `check-parallax.mjs` passes (stage and/or slate band ≥ 6 px, 0 with reduced motion).
4. T2 block: portraits touch both viewport edges, different widths and tops, narrow heading between, veiled P04.
5. Method band `#CBD0D2` with 5.125rem light heading, two hairline circles, three 2:3 rows with chips (€145, €90, included) and vertical side notes at ≥ 960.
6. Slate band with translucent cards, 256×199 thumbnails, paper-plane arrows, progress line.
7. Voice card radius 40 on `#E9E8E4`, ruled footer, 3 dots, 2:3 photo higher than the card; swipe/dots swap slides.
8. 15 photo positions, none repeated; ≥ 250 English words, ≥ 3 narrative paragraphs ≥ 20 words.
9. Numbers match §0 (fees, hours, 12-week review, 2015, Ghent) here, on inner pages and in all five languages.
10. Footer newsletter slot works without plugins (email + submit + notice); exactly one top menu; `pattern_source.py` passes.

## 13. theme-meta hints
type `health`; colors.tags `slate`, `light`, `calm`, `muted`; style `photographic`, `serene`, `airy`, `minimal`.
