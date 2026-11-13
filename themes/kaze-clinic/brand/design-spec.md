# Kaze Clinic — design spec (stage 1, design director)

Type: **business** (health-wellness; WooCommerce-compatible but not required). Industry: an independent respiratory medicine clinic (breathlessness, cough, asthma, COPD follow-up, sleep-disordered breathing, lung-function testing).
Primary reference: **https://evidencecare.jp/** (home first screen, lead statement, care list, recruit card). Tokens: `reference-tokens.md`, cited as T(a)…T(g). Screens: `ref/iec-first.png` (1440×900 first screen). Secondary: none.
**Imagery: photo** (stage-a IMAGERY = photo). Real-photography STYLE, high-key (row `photo_direction: high-key`), §10. No illustration. 0 cut-outs.
Font direction: **sans** — Latin headings **Figtree**, Latin body **Manrope**; zh-TW / ja **Noto Sans TC / Noto Sans JP** (gothic). No serif / Mincho anywhere (the reference's serif headings become Figtree 500).
Similarity target: about **80%** to the reference in palette, image treatment, motion, decoration and layout rhythm; photographs, copy and logo are 100% ours.
Header: floating white slab (the reference's), exactly one top menu. Page structure (row): narrative → problem → method → proof.

---

## 1. Signature techniques (3, obvious at a glance, none may be softened)

### T1 — Washed full-bleed photo that settles, cross-fades, then insets into a frame on scroll
- Source: evidencecare.jp first screen (`ref/iec-first.png`, T(e), T(g)). A **100dvh full-bleed** high-key photograph of two care workers facing each other across a table, washed almost to the pale ground (#F5F8F1). On load the copy fades in (.8s, delay .3s, easeOutQuad), then the photo resolves **brightness 1.6 → 1 and opacity 0 → 1 over 1.6s easeOutQuad**; 4 slides cross-fade (1s, every 4s). As the page scrolls **0 → 400px**, the photo gains **padding 0 → 40px** all round: it shrinks into an inset window on the pale ground.
- Ours (home §2 hero): full-bleed **100svh** (min 680px) washed photo **H01** (physician watching a patient blow into a spirometer, nurse marking the curve; subjects in the right 60%, pale wall in the left 40%), cross-fading to **H02** and **H03** (3 slides, 1s fade, 4s hold, 12s loop). Copy sits on the washed left part at **x = 11%** (ref statement x≈160/1440). Photo frame **clip-path: inset(0) → inset(40px)** over the first **400px** of scroll (CSS scroll-driven, §7.3). A thin white **info bar** (hours, address, phone, booking link) is pinned in flow at the hero foot (row `first_screen: full-bleed-photo-info-bar`).
- Must not soften: the photo is full-bleed edge to edge at load (no side margins, no radius, no card); the wash is visible (photo reads pale, close to the ground, not a normal-contrast stock photo); the inset is a real 40px band of ground colour on all four sides after 400px; subjects are on the right, copy on the left.

### T2 — Lead statement that flips grey → white while a wide photo fades in behind it
- Source: evidencecare.jp `.top-lead` (T(b), T(c), T(g)): a centred **930px** block, **140px top padding**, a 35px statement with line-height **1.95** and letter-spacing **.09em**, first shown **grey on the pale ground**; as the block enters view a wide photo anchored at its bottom fades in behind it (**.8s easeOutSine**) and the text turns **white (.1s)**.
- Ours (home §3 "How a plan is agreed"): full-bleed band, min-height 760px desktop. Background figure **H04** (physician and patient side by side reading a paper plan by a window), 21:9, anchored bottom, with a static **#242424 at 42%** scrim above it. Foreground: label `OUR APPROACH`, a 3-sentence statement (≈55 words) in 2.1875rem/1.95, ls .05em, max-width 930, then one arrow-disc link "Read how a first visit works". Before reveal (JS + motion only) the text is **#787878 on #F5F8F1** with the photo at opacity 0; when the photo gets `.sp-in` the text turns **#FFFFFF** (color .1s linear) and the photo fades/zooms in (.8s cubic-bezier(.39,.575,.565,1)). Final/no-JS/static state: white text on the scrimmed photo.
- Must not soften: the flip must be a real colour change (grey → white), the photo must cover the whole band behind the text (not a side image), the statement stays large (≥2rem desktop) and wide-tracked.

### T3 — Plain-language title + small clinical subtitle on a 3-column photo list with round arrow discs
- Source: evidencecare.jp care list (T(b), T(c), T(f)): **1070px** container, **3 columns, 40px gap**, landscape ~4:3 photos (no mask, radius 0), **25px** from figure to title; title **18px bold** with a **16px second-language `em`** beside/under it; short text; a **circle disc + arrow** link (hover: arrow slides, .3–.4s).
- Ours (home §4 "What people arrive with"): 3 columns in 1070: **H05 Breathlessness / Dyspnoea**, **H06 Persistent cough / Chronic cough**, **H07 Wheeze / Asthma review**. Title Figtree 700 1.125rem #242424; subtitle on its own line Manrope 500 .8125rem, ls .06em, #787878 (in the markup as `<em>` styled non-italic). Text .9375rem/1.95, 2 sentences. Bottom row: "Read more" .875rem + **28px #00A561 disc with a white 10px arrow**, hover arrow translateX(4px) .35s cubic-bezier(.23,1,.32,1). Under the 3 columns, a ruled list of 4 more pairs (text only, 1px #CFD1CD rules, 64px rows, disc at right): Sleep breathing / Sleep apnoea screening · COPD follow-up / Chronic obstructive pulmonary disease · Cough after an infection / Post-viral cough · Allergy questions / Allergic airway disease.
- The same pair (plain title + clinical subtitle) is used for every service, test, fee item and person (name + role) across the site.
- Must not soften: the subtitle is visibly smaller and grey, always paired; the disc is a filled green circle, not an outline chevron; photos are landscape, square-cornered, unmasked.

### Supporting decoration (T4, from the reference, always on)
- **Floating white header slab**: inset from the viewport edges (desktop **72px left/right, 52px top**, ≥1280; 40px at 1024–1279; 12px at <782), height **68px**, radius **8px**, #FFFFFF, no border, no shadow (T(d), T(f)). Logo left; 6 text links; a **22×22 #00A561 rounded-square (radius 6) marker with a white ▾** after "Conditions" (opens its submenu); 2 icon links with tiny captions at the right (Visit = pin icon, Book = calendar icon; caption .6875rem ls .08em). The slab is `position: sticky` inside the header template (stays on scroll), fades in 1s after load.
- **Two faint vertical hairlines** 1px #E1E3DE at **x = 35% and x = 92%** of the hero, full hero height, above the photo layer and below the copy, ≥1024px only (T(f)).
- **White card with photo right** on a mist band (T(e), T(d)): home §6.

### Continuation on inner pages (all 10 content pages; ≥4 required)
Every inner page opens with a **page head** that repeats T1 at smaller scale: full-bleed washed photo, **60svh** (min 440px), copy at x 11% on the washed left part (h1 3.25rem, 1–2 sentence lead), same 400px clip-path inset 0 → 40px and the same `sp-parallax` (6%). No cross-fade on inner pages (one photo).
| Page | T1 (page head) | T2 (colour-flip lead) | T3 (pair + disc) |
|---|---|---|---|
| About | H13 | H04: "Why we measure first" | values as 3 pairs |
| Conditions | H06 | — | 3 photo columns (H05, H07, H15) + 4 ruled rows |
| Tests | H08 | — | 4 tests as 2×2 photo pairs (H11, H14, H03, H02) |
| Your first visit | H02 | H17: "What you leave with" | 4 step rows, each a pair |
| Clinicians | H16 | — | 7 people as ruled pair rows (name / role) |
| Fees | H10 | — | price rows: item / clinical name |
| Stories | H15 | H09: "Who stays with the case" | 3 story pairs |
| Visit | H12 | — | hours + directions as pairs |
| Book (contact) | H17 | — | contact methods as pairs |
| The Breathing Letter (newsletter) | H11 | — | "what is in it" as 3 pairs |
(Same assignment as §10; no photo repeats on one page.)

---

## 2. Key visual concept

**(1) Reference first screen, story, signature motion.** evidencecare.jp opens on a calm, over-exposed photograph of two nurses in dark scrubs talking face to face across a small round table, washed so pale it nearly merges with the green-grey page. A short vertical statement stands at the left; a white rounded header slab floats over the top; two faint vertical hairlines run down behind everything. Story: *care is a conversation at eye level, with evidence quietly behind it.* Signature motion: the picture resolves from bright to normal (brightness 1.6 → 1, 1.6s), slides cross-fade slowly (1s / 4s), and on scroll the photo shrinks into an inset frame (padding 0 → 40px over 400px).

**(2) Our transposition (respiratory clinic, same composition, same motion idea, same imagery type = photograph).** The same calm, washed, eye-level scene, in a consulting room: **H01** Dr. Ines Halvorsen sits across a pale wood desk from a patient who is blowing into a handheld spirometer, while nurse Lena Park stands at the side marking the printed curve. The two people face each other in the right 60% of the frame like the reference's two nurses; the left 40% is a pale wall that carries our copy. Slides cross-fade to **H02** (the same doctor and patient talking face to face across a round table, hands on the table) and **H03** (close view of the nurse's pencil following a flow-volume curve on paper). Story: *breath is something you can measure and steady; the plan is agreed at eye level and someone stays with it.* Motion: same bright-to-normal resolve on load, same 1s/4s cross-fade, same 400px inset to a 40px frame, plus `sp-parallax` on the photo layer. Copy: label `RESPIRATORY MEDICINE · NORTHMERE`, h1 **"Breath you can measure, and steady."** (2 lines at 1440), one sentence, one disc link "Book a first visit".

**(3) KV checklist** (all on the home first screen, all visible at 1280×800 desktop; items 1–5 also at 390px except 6's hairlines):
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Washed full-bleed photo of two clinicians facing each other | High-key photo: physician facing a patient who blows into a spirometer, nurse marking the curve | full-bleed 100svh; subjects in right 60% | brightness 1.6 → 1 and opacity 0 → 1, 1.6s cubic-bezier(.25,.46,.45,.94), starts after copy | H01 |
| 2 | Short statement at the left, fading in | Label + h1 4.5rem (2 lines) + 1 sentence + disc link; horizontal type (no vertical writing) | left, x 11%, top y≈210 at 1440 | fade + translateY 12px → 0, .8s delay .3s, same easing | — |
| 3 | Floating white header slab, radius 8, inset | White slab 68px, radius 8, inset 72/52px; logo, 6 links, green ▾ marker, 2 icon links with captions | top | opacity 0 → 1, 1s, after copy (delay .6s) | — |
| 4 | Slideshow cross-fade (4 slides, 1s, 4s autoplay) | 3 slides cross-fade, 1s fade, 4s hold, 12s loop (CSS keyframes only) | same frame as #1 | as stated; static (slide 1 only) under `sp-no-motion` | H01, H02, H03 |
| 5 | Photo shrinks into a padded frame over the first 400px of scroll | clip-path inset 0 → 40px over 0–400px scroll; ground #F5F8F1 shows as the frame | hero photo | scroll-driven CSS (§7.3), linear; plus `sp-parallax` `--sp-par: 8%` on the layer | H01–H03 |
| 6 | Two faint vertical hairlines behind the hero | Two 1px #E1E3DE hairlines at 35% / 92%, plus our info bar at the hero foot (hours · address · phone · link) | hairlines full height ≥1024; info bar bottom of hero | static | — |

---

## 3. Home page — block order

Width tokens: lead **930**, list **1070**, card **1120**, wide max **1600** (T(c)). Section gaps **7.5rem** (120px) desktop, **4.5rem** mobile (T(c) 120–140). Body copy totals ≥ 300 English words; narrative paragraphs marked ¶ (≥ 3 of ≥ 20 words).
| # | Block (pattern slug) | Purpose | Layout | Photo(s) | Copy | Motion |
|---|---|---|---|---|---|---|
| 1 | Header (template part) | brand + one menu | T4 floating slab | — | 6 links + 2 icon links | fade-in on load |
| 2 | `kaze/hero` | KV (§2) | full-bleed photo, copy left, info bar foot | H01, H02, H03 | label, h1 (6 words), 1 sentence (≈24 words ¶), link; bar: 4 items | T1 load + inset + `sp-parallax` 8% |
| 3 | `kaze/lead-flip` | narrative: how a plan is agreed | T2 full-bleed band, centred 930 statement | H04 | label, statement ≈55 words ¶, link | `sp-reveal--zoom` on figure (.8s easeOutSine) + text flip; `sp-parallax` 6% on the band |
| 4 | `kaze/arrive-with` | problem: symptoms people arrive with | T3 3 columns in 1070 + 4 ruled rows | H05, H06, H07 | label, h2, intro ≈35 words ¶, 3×(pair + 2 sentences), 4 ruled pairs | `sp-stagger` + `sp-reveal--up` on the 3 columns; ruled list one `sp-reveal--up` |
| 5 | `kaze/method` | method: four steps of a first plan | 5/12 photo left (4:5) + 7/12 four ruled rows right, in 1120 | H08 | label, h2, 4 rows: number + pair + 1–2 sentences (≈90 words total) | `sp-reveal--up` on photo; `sp-stagger` on rows |
| 6 | `kaze/stays-with` | proof: who stays with the case | mist band #E1E9D9 full width; white card 1120, text left 520, photo right 600 (row-reverse), radius 0 | H09 | label, h2, ¶ ≈60 words, names line, link "Meet the clinicians"; under the card: 3 short composite story pairs in 3 columns (≈30 words each) | `sp-reveal--up` on card; `sp-stagger` on stories |
| 7 | `kaze/fees-short` | fees snapshot | 930 centred, label + h2 + 4 price rows (full width ≥782, price right nowrap) + link to Fees | — | 4 of the 6 §9 items, same numbers | none (price list: no reveal) |
| 8 | `kaze/clinic-hours` | where and when | 1070: photo left 6/12 (3:2), right: address, hours table (stacks on mobile), phone, accessibility line | H10 | ≈40 words | `sp-reveal--up` on photo only |
| 9 | `kaze/journal` | latest 3 posts | 1070, 3 columns 3:2 thumbnails, date + title + disc | H11, H12, H13 (post featured images) | titles only | `sp-stagger` + `sp-reveal--up` |
| 10 | `kaze/letter` | newsletter | mist band #D9E9E2, 930: text left, form slot right (§12) | — | label, h2 "The Breathing Letter", 1 sentence, form | none (form) |
| 11 | Footer (template part) | address, hours, menus | deep patina #3F5654, white text, 3 columns + bottom rule | — | | none |

Home photo positions: **13 images, 13 unique** (H01–H13); 10 distinct positions excluding the 2 extra slides (≥8 required either way).

### First-screen composition
- **Desktop 1440×900**: slab at y 52–120. Photo full-bleed 0–900 (100svh), washed; a static left-to-right ground scrim `linear-gradient(90deg, rgba(245,248,241,.9) 0%, rgba(245,248,241,.72) 32%, rgba(245,248,241,0) 52%)` sits above the photo layer (not inside it). Copy column x 158 (11%), top y≈210, max-width 560: label (.8125rem 700 ls .14em #007A47) / 20px / h1 4.5rem 2 lines / 28px / sentence 1.0625rem/1.9 #242424, max 440px / 32px / disc link. Hairlines at x 504 and 1325. Info bar: a white row (opacity .94, radius 8, height 64, max-width 1120, centred), **in flow** at the bottom of the hero flex column, 40px above the hero's bottom edge (so it lines up with the finished 40px inset): `Mon–Fri 08:30–18:00 · Thu to 20:00 · Sat 09:00–12:30` | `18 Linden Walk, Northmere` | `020 5550 1420` | disc link `Book a first visit`. Items separated by 1px #CFD1CD verticals; .875rem.
- **Tablet 782–1023**: same, copy x 6%, h1 3.5rem, hairlines hidden, info bar wraps to 2 lines.
- **Mobile 390×844**: no text over the photo. Order: slab (12px inset, 56px, logo + menu button) → copy block on #F5F8F1 (padding 96px 20px 24px: label, h1 2.75rem 3 lines, sentence, link) → photo frame 4:5 full-bleed (`sp-parallax` 5%, cross-fade kept, inset effect off) → info bar as a static stacked list (4 rows, 1px rules) under the photo. No vertical writing, no absolutely positioned labels, nothing overlapping text.

### Comparison with recent themes' home orders (must not match)
| Theme | Home order | Kaze Clinic difference |
|---|---|---|
| Mise Studio | hero window + side panel / what a brief is / rooms / full-bleed service band / site-test grid | no side panel; hero is full-bleed that insets on scroll; no grid of tests |
| Kikai Fair | notice strip / diagonal hall photo + cards / audience bars / value rows / price list | no notice strip, no diagonal, price list is a short 4-row snapshot mid-page |
| Shio Butchers | utility bar + header / rail + stage hero / counter grid / intro / hourly day rows / parallax block / wrapping steps | no rail, no product grid, no hourly rows; parallax is on the hero and lead, not a stand-alone block |
| Nohara Holiday Park | full-bleed hero / ledger "three ways" / sticky narrative / stay cards / news | hero shares full-bleed but has a floating slab, cross-fade, inset frame and info bar; next is a colour-flip statement (not a ledger), no sticky narrative, the proof is a white photo card on a mist band |
| **Kaze Clinic** | slab + inset hero + info bar / colour-flip lead / 3-col pair list + ruled rows / split method rows / white card + stories / fees snapshot / clinic & hours / journal / letter | narrative → problem → method → proof (row structure) |

---

## 4. Inner pages (11 pages + posts)

Slugs are identical in all five locales. All pages: T1 page head (§1), body widths 930/1070/1120.
| Page (slug) | Role | Key content |
|---|---|---|
| About (`about`) | about | founding 2014 by Dr. Ines Halvorsen; why a clinic only for breathing; T2 lead (H04); values as 3 T3 pairs (Measure first / Spirometry before prescription; Agree it in writing / Shared care plan; Someone stays / Named nurse); "A day at Kaze" daily routine (08:00 huddle, 08:30 first tests, Thursday evening clinic, 17:30 follow-up calls) in 5 ruled rows |
| Conditions (`conditions`) | services | the 7 pairs from home §4 with 2–3 paragraphs each; 3 photo columns (H05, H07, H15) + 4 ruled rows; anchors `#breathlessness`, `#cough`, `#asthma`, `#sleep`, `#copd`, `#post-viral`, `#allergy` (submenu targets) |
| Tests (`tests`) | services | 4 tests as T3 pairs with photos (2×2, 1070): Spirometry / Lung function with reversibility (H11); FeNO / Airway inflammation (H03); Overnight oximetry / Oxygen saturation (H02); Home sleep study / Respiratory polygraphy (H14); what each feels like, how long, how to prepare |
| Your first visit (`first-visit`) | process | the 4 steps of §9 as large ruled rows; what to bring; T2 lead (H17) "What you leave with" |
| Clinicians (`clinicians`) | people | 7 people as ruled pair rows (name / role, 2 sentences each, no portrait grid); one white card with H09 (Lena Park) |
| Fees (`fees`) | prices | full-width price table (6 items, §9), self-pay and insurance note, cancellation (24h), payment |
| Stories (`stories`) | proof | 3 composite stories (§9), each a pair heading + 2 paragraphs; T2 lead (H09) |
| Visit (`visit`) | location | address, hours table, transport, step-free access, parking; H12 head |
| Book (`book`) | contact | form slot + mailto fallback (§12), phone, hours, "what happens next" 3 lines; H17 head |
| The Breathing Letter (`breathing-letter`) | newsletter | standalone subscribe page: what's in it (3 pairs), monthly on the first Tuesday, form slot (§12); H11 head |
| Journal (`journal`) | posts page (role `posts`, empty) | post list |
| Posts (3) | article | "Why we measure before we prescribe" (H11, category Tests, tags spirometry, plans) · "A short checklist for pollen season" (H12, category Seasons, tags asthma, allergy) · "What a home sleep study involves" (featured image **H13**, category Tests, tags sleep, tests) |

theme-meta `pages` / `screens`: home → `/`, about → `/about/`, news → `/journal/`, article → first post, category → `/category/tests/`, tag → `/tag/asthma/`, newsletter → `/breathing-letter/`, contact → `/book/`.
Top menu (one): About · Conditions ▾ (Breathlessness, Cough, Wheeze & asthma, Sleep breathing) · Tests · Your first visit · Clinicians · Fees, then icon links Visit · Book. Footer: Stories, Journal, The Breathing Letter, Visit, Book.

---

## 5. Colour (T(a): pale green-grey ground, white slabs/cards, mist bands, near-black text, a tiny green accent)

Reference hexes kept exactly (similarity), with two additions and one AA adjustment.
| Token (theme.json slug) | Hex | Share | Source / reason |
|---|---|---|---|
| `ground` | **#F5F8F1** | ~75% | T(a) ground, exact |
| `white` | **#FFFFFF** | ~6% | T(a) slab / card |
| `mist` | **#E1E9D9** | ~8% | T(a) band (proof band) |
| `mist-2` | **#E9F1E3** | ~3% | T(a) panel (success, table zebra) |
| `mist-3` | **#D9E9E2** | ~3% | T(a) band (letter band) |
| `ink` | **#242424** | text | T(a) |
| `ink-2` | **#787878** | secondary text, pair subtitles, pre-flip lead | T(a); on #F5F8F1 contrast 4.1 — used only ≥ .8125rem with 500 weight for subtitles and 2.1875rem for the pre-flip statement; body copy never uses it |
| `ink-3` | **#5E5E5E** | small meta (dates, captions) | addition for AA at small sizes (T(a) #919191 fails) |
| `line` | **#CFD1CD** | rules | T(a) hairline |
| `line-2` | **#E1E3DE** | hero hairlines | T(a) |
| `accent` | **#00A561** | ≤ 3% | T(a) accent, exact: discs, ▾ marker, logo mark, active-nav 2px underline, checkbox `accent-color` |
| `accent-text` | **#007A47** | labels, links, submit fill | reference green darkened for WCAG AA text (5.0:1 on #F5F8F1, 5.4:1 white on it); #00A561 itself is 3.1:1, so it never carries text |
| `patina` | **#3F5654** | footer only (~4% of a full page, 0% first screen) | row palette "patina" (#5C7A78 family) kept as the one deep surface for the footer, since the reference has no dark area and the form contract needs a dark ground |
| `patina-2` | **#5C7A78** | footer rules / dark-ground form surface edge | row hex |
Why the reference green stays: fresh green reads as clean air and clinical calm for a respiratory clinic, and no recent theme uses it (Mise plum, Nohara olive, Shio brass, Kikai ochre).
**First-screen saturated share: target ≤ 4%** (reference ≈ 2%; hard cap 15% per `check-first-screen.py`, row note 30%). Only the accent marks and the photographs' small colour accents count; photos are washed (saturate .85).

---

## 6. Typography (sans)

Fonts loaded **only via theme.json `fontFamilies` + `fontFace`** (woff2 in `assets/fonts/`, OFL, listed in theme-meta `fonts[].files` with `licenseFile`; family names in readme.txt), so the editor iframe and front end render the same faces. Because style.css has `:lang(` rules, copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and require it.
- `figtree`: Figtree variable 400–700 (Latin, Latin-ext).
- `manrope`: Manrope variable 400–700.
- `noto-sans-tc`: Noto Sans TC 500 (headings, zh-TW subset of all zh-TW demo strings + common punctuation; use the Hokuto/Hada substitute subsetting method).
- `noto-sans-jp`: Noto Sans JP 500 (headings, ja subset, same method).
Stacks:
- Latin headings: `"Figtree", "Helvetica Neue", Arial, sans-serif`
- Latin body: `"Manrope", "Helvetica Neue", Arial, sans-serif`
- `:root:lang(zh-TW)` headings: `"Figtree", "Noto Sans TC", "PingFang TC", "Microsoft JhengHei", sans-serif`; body: `"Manrope", "PingFang TC", "Microsoft JhengHei", "Heiti TC", sans-serif` (no bundled TC, no JP font in body — repo contract).
- `:root:lang(ja)` headings: `"Figtree", "Noto Sans JP", "Hiragino Sans", "Yu Gothic", sans-serif`; body: `"Manrope", "Hiragino Sans", "Hiragino Kaku Gothic ProN", "Yu Gothic", Meiryo, sans-serif` (the reference body is system gothic, T(b)).
- CJK: heading sizes × 0.75 (h1 3.375rem), letter-spacing .09em on the lead statement (T(b) exact), body line-height 1.85. fr/de: `hyphens: auto` on body and h2/h3.
| Role | Font / weight | Size (desktop → mobile) | Line-height | Tracking | Source |
|---|---|---|---|---|---|
| h1 hero | Figtree 500 | **4.5rem** (72px; theme.json largest `xx-large` = clamp(2.75rem, 1.6rem + 3.6vw, 4.5rem)) → 2.75rem | 1.15 | .01em | row rule ≥4.25rem; T(b) statement weight light → 500 |
| h1 inner head | Figtree 500 | 3.25rem → 2.25rem | 1.2 | .02em | |
| lead statement (T2) | Figtree 400 | **2.1875rem** (35px) → 1.375rem | **1.95** | .05em Latin / .09em CJK | T(b) 35px/1.95 .09em |
| h2 | Figtree 500 | 2.25rem → 1.75rem | 1.5 | .04em | T(b) |
| h3 (pair title) | Figtree 700 | **1.125rem** (18px) | 1.6 | .02em | T(b) 18px bold |
| pair subtitle `em` | Manrope 500, normal style | .8125rem → .8125rem | 1.6 | .06em | T(b) 16px english em, scaled |
| section label | Manrope 700 uppercase, `accent-text` | .8125rem | 1.4 | **.14em** | T(b) labels .14em accent |
| body | Manrope 400 | **1rem** (ref 14px raised for legibility) | **2.0** | **.04em** | T(b) .04em; ref 2.45 kept for the T2 statement only |
| small / meta | Manrope 500 | .875rem / .75rem | 1.8 | .04em | |
| nav | Manrope 500 | **.9375rem** (15px) | 1 | **.08em** | T(b) nav 15px .08em |
| price | Manrope 600 tabular-nums | 1.0625rem | 1.6 | .02em | |
Body text is left-aligned in Latin (the reference's justify is used only in ja/zh-TW body: `text-align: justify` under `:lang(ja), :lang(zh-TW)`).

---

## 7. Motion and scroll (sp-scroll + the hero load/inset)

Three sp-* effect kinds on home (max 3): **reveal--up (+stagger)**, **reveal--zoom**, **parallax**. Hero gets **no** `sp-reveal`. Forms, price list and legal text: none.

### 7.1 Chosen effects (from stage-a "Scroll effect candidates")
| # | Effect (source evidencecare.jp) | Ref trigger / time / easing | sp-* class + variables | Where |
|---|---|---|---|---|
| E1 | `.scroll-fadein` section fade-up 50px (20px mobile) | element enters view; 1000ms, delay 0–200ms; easeOutQuart cubic-bezier(.165,.84,.44,1) | `sp-reveal sp-reveal--up`, theme sets `--sp-dist: 30px` (cap; 20px <782), `--sp-dur: 1s`, `--sp-ease: cubic-bezier(.165,.84,.44,1)`; lists use parent `sp-stagger` (.12s steps ≈ ref 0–200ms) | home §4 columns, §4 ruled list, §5 photo + rows, §6 card + stories, §8 photo, §9 posts; inner page sections |
| E2 | lead text flip + photo fade-in | scroll position adds `.active`; text .1s, photo .8s easeOutSine | `sp-reveal sp-reveal--zoom` on `.kz-lead__photo` figure; override `html.sp-js:not(.sp-no-motion) .kz-lead .sp-reveal--zoom { --sp-dur: .8s; --sp-ease: cubic-bezier(.39,.575,.565,1) }`; text: `html.sp-js:not(.sp-no-motion) .kz-lead:not(:has(.kz-lead__photo.sp-in)) .kz-lead__text { color: #787878 }` + `.kz-lead__text { color:#fff; transition: color .1s linear }`; band background #F5F8F1 | home §3; About, First visit, Stories |
| E3 | hero frame inset (padding 0 → 40rem over 400px, JS var) | scroll 0–400px, continuous, linear | **`sp-parallax`** on the hero (`--sp-par: 8%`, mobile 5%) for the moving layer + the theme's CSS-only inset (§7.3) | home §2, all inner page heads (`--sp-par: 6%`) |
Hover (CSS, not scroll): disc arrow translateX(4px) .35s cubic-bezier(.23,1,.32,1) (T(g) .3–.4s easeOutQuint); photo links scale 1.03 over .6s. Hover transitions carry `transition-delay: 0s` (stagger pitfall).
Not used: Lenis smooth scroll, slick, barba, jQuery, Velocity (T(g) libraries). Anchor jumps use `scroll-behavior: smooth` only when `prefers-reduced-motion: no-preference`.

### 7.2 Parallax (required)
| Where | Moving layer | Foreground (static) | `--sp-par` | Reference motion it stands for |
|---|---|---|---|---|
| Home §2 hero `.kz-hero.sp-parallax` | `.kz-hero__frame > .sp-parallax__layer` containing the 3 slide `<img>` (H01, H02, H03) | copy column, info bar, hairlines, scrim (siblings outside the layer) | **8%** desktop, **5%** at <782 (mobile keeps it on the 4:5 photo frame) | the hero photo moving/shrinking under fixed copy as you scroll |
| Home §3 lead `.kz-lead.sp-parallax` | `figure.kz-lead__photo > img` (H04) via `.sp-parallax__layer` class on the figure's img wrapper | statement + link | **6%** (4% mobile) | the lead photo drifting in behind the statement |
| Inner page heads | single photo layer | h1 + lead | **6%** (4% mobile) | same as hero |
Structure (hero): `section.kz-hero.sp-parallax` (min-height 100svh, `overflow: clip`, position relative, display flex column) → `div.kz-hero__frame` (absolute inset 0, z 0; carries the clip-path of §7.3, **not** the observed element) → `div.sp-parallax__layer` (absolute inset 0) → three `figure.kz-slide > img` (absolute, object-fit cover, object-position 60% 50%). Then `div.kz-hero__scrim`, two `span.kz-hairline` (empty, aria-hidden), `div.kz-hero__copy`, `div.kz-infobar` (z 2). sp-scroll's JS fallback picks the first `.sp-parallax__layer`, so all 3 slides live in one layer. Verify with `check-parallax.mjs` (≥6px delta desktop and mobile, 0 under reduced motion).

### 7.3 Hero load motion, cross-fade and inset (theme CSS, no JS, no scroll listener)
All of it scoped `@media (prefers-reduced-motion: no-preference)` and `html.sp-js:not(.sp-no-motion)`; editor (`.editor-styles-wrapper`) and `?sp-static` show the final state (slide 1, brightness 1, no inset, copy visible).
- Load: `.kz-hero__copy` `animation: kz-rise .8s .3s cubic-bezier(.25,.46,.45,.94) both` (opacity 0 → 1, translateY 12px → 0); `.kz-hero__frame` `animation: kz-resolve 1.6s .9s cubic-bezier(.25,.46,.45,.94) both` (filter brightness(1.6) → brightness(1.04) saturate(.85); opacity .0 → 1); header slab `kz-fade 1s 1.1s both`. Final resting filter (all modes): `brightness(1.04) saturate(.85)`.
- Cross-fade: slides 2 and 3 `opacity: 0`; keyframes `kz-xfade` 12s infinite, each slide visible 4s with 1s fades, delays 0/4/8s, starting after the load (delay 2.5s). Under `sp-no-motion`/reduced/editor: slide 1 only.
- Inset: `@supports (animation-timeline: scroll())` → `.kz-hero__frame { animation: kz-inset linear both; animation-timeline: scroll(root block); animation-range: 0 400px; }` with `@keyframes kz-inset { from { clip-path: inset(0) } to { clip-path: inset(40px) } }`; on inner heads range 0 300px, inset 0 → 40px; **off below 782px**. Browsers without scroll timelines simply keep the full-bleed photo (no JS fallback; parallax still runs via sp-scroll.js). This is CSS animation, not a scroll listener; the gate's "no transparent leftovers" check is unaffected (opacity untouched).

---

## 8. Responsive rules (hard)
- 390px first screen: no vertical writing anywhere, no absolutely positioned labels or text over the photo; copy block sits above the photo (§3). Info bar is a static stacked list. Header slab 56px, menu button opens a full-screen white overlay menu.
- No horizontal scroll at 390 / 782 / 1280 (`html, body { overflow-x: clip }` from sp-scroll; hairlines hidden <1024).
- Price lists (home §7 and Fees) at ≥782px: the table is **100% of its 930/1070 container**, `table-layout: auto`, item column takes the rest, **price column `white-space: nowrap; text-align: right`**, min-width 8ch, never clipped or overflowing (checked at 800 and 1280). Item cell = pair (title + clinical subtitle).
- Every table (prices, hours, fees) below 782px stacks: each row becomes a block (`display: block`), label above value, price right-aligned on its own line, 1px #CFD1CD between rows; no horizontal scrolling tables.
- T3 columns: 3 → 2 (782–1023) → 1 (<782). Method: photo above rows <1024. White card: photo above text <1024, card padding 32px 20px.
- Breakpoints: 782, 1024, 1280.

---

## 9. Fixed facts (identical on every page and in all five locales; brand.md is the source)
- **Name**: Kaze Clinic — respiratory medicine. **Founded 2014** by Dr. Ines Halvorsen.
- **Address**: 18 Linden Walk, Northmere (fictional). Step-free entrance, 2 accessible parking bays, bus stop "Linden Walk" 80 m.
- **Phone**: 020 5550 1420. **Email**: hello@kazeclinic.example.
- **Hours**: Mon–Fri 08:30–18:00; Thu evening clinic to 20:00; Sat 09:00–12:30; Sun and public holidays closed. Follow-up calls 17:30–18:00 weekdays.
- **People (7)**: Dr. Ines Halvorsen — founder, respiratory physician · Dr. Kwame Asante — respiratory physician, sleep breathing · Lena Park — respiratory nurse specialist · Tomás Reyes — respiratory physiologist (lung function tests) · Priya Raman — respiratory physiotherapist (breathing rehabilitation) · Daniel Okoro — clinical pharmacist (inhaler and medicine reviews) · Sofia Lindqvist — practice manager.
- **Process (4 steps, a first plan)**: 01 Listen — 45-minute first consultation · 02 Measure — spirometry the same day, other tests if needed · 03 Agree — a written plan you take home, in plain language · 04 Stay with it — a named nurse, a call at 2 weeks, a review at 6 weeks.
- **Fees (6 items, self-pay; same on home §7 (first 4) and Fees)**:
  1. First consultation, 45 min, includes spirometry / *New patient assessment* — **€160**
  2. Follow-up consultation, 25 min / *Review appointment* — **€85**
  3. Full lung function test / *Spirometry with reversibility and FeNO* — **€140**
  4. Home sleep study, one night with report / *Respiratory polygraphy* — **€220**
  5. Inhaler technique review with a nurse, 20 min / *Device and adherence check* — **€45**
  6. Breathing rehabilitation, 6 weekly sessions / *Pulmonary rehabilitation course* — **€360**
  Cancellation: free up to 24 hours before. Many insurers reimburse; we give an itemised receipt (no claim of guaranteed cover).
- **Stories (3, composite, names changed, labelled "Composite stories")**: "The cough that outlasted a winter" (a teacher, 9-week cough, plan agreed at first visit) · "Stairs again" (a retired mechanic with COPD, 6-session rehabilitation) · "Nights without waking" (a night-shift worker, home sleep study, referral for treatment). No outcome guarantees or statistics.
- **Newsletter**: "The Breathing Letter", monthly, first Tuesday, ~4 minutes' read.
- **Posts**: 3 (§4). No awards, media, real brands, guarantees or invented statistics anywhere.

---

## 10. Images (17 photographs, all real-photography, one STYLE)

**STYLE** (identical for every image, `IMAGE_STYLE="<STYLE>" scripts/grok-image.sh out.webp "<subject>"`):
`High-key bright documentary photograph, soft diffuse daylight from large windows, pale green-grey and white palette, washed airy highlights, low contrast, gentle natural skin tones, calm unposed moment, modern minimal clinic interior with pale walls and light oak, eye-level 35mm lens, shallow depth of field, internationally diverse people, no text, no numbers, no logos, no signage, no readable screens or paper, no Japanese elements.`
Each image ≤ 300 KB webp, ≤ 2000px; read every image; regenerate on text, logos, broken faces/hands, or style drift. 0 cut-outs.
| ID | Subject / composition | Ratio (px) | Used on | Home |
|---|---|---|---|---|
| H01 | Physician (woman, 50s, silver bob, white coat) seated at a pale oak desk facing a patient (man, 60s, South Asian, grey cardigan) who blows into a handheld spirometer with a white mouthpiece; a nurse (woman, 30s, East Asian, teal-grey scrubs) stands beside marking a paper chart; people in the right 60%, empty pale wall in the left 40% | 16:9 (2000×1125) | home hero slide 1 (KV 1) | ✓ |
| H02 | Same physician and patient talking face to face across a small round white table, hands resting on it, profile view, right 60% of frame | 16:9 | home hero slide 2; Tests (oximetry) | ✓ |
| H03 | Close-medium: nurse's hand with a pencil following a printed flow-volume curve (lines only, no numbers), patient softly blurred behind at right | 16:9 | home hero slide 3; Tests (FeNO) | ✓ |
| H04 | Physician and patient side by side at a window desk reading a printed plan together, backlit, wide room | 21:9 (2000×857) | home §3 lead; About lead | ✓ |
| H05 | Woman, 40s, Black, pausing on a bright stairwell landing, hand on rail, catching breath, calm | 4:3 (1600×1200) | home §4 Breathlessness; Conditions | ✓ |
| H06 | Man, 30s, Latino, seated on an exam couch as the physician listens to his back with a stethoscope | 4:3 | home §4 Persistent cough; Conditions head | ✓ |
| H07 | Young woman, 20s, Middle Eastern, using an inhaler with a spacer while the nurse guides her hand | 4:3 | home §4 Wheeze; Conditions | ✓ |
| H08 | Respiratory physiologist (man, 40s, Latino) coaching a seated patient (woman, 70s, white) blowing into a desktop spirometer, side view, test room | 4:5 (1200×1500) | home §5 method; Tests head | ✓ |
| H09 | Nurse (H01's nurse) at a window desk on a phone call, notebook open, slight smile — the follow-up call | 4:3 (1600×1200) | home §6 card; Clinicians card; Stories lead | ✓ |
| H10 | Bright waiting area: pale oak bench, potted olive tree, tall windows, one person reading | 3:2 (1800×1200) | home §8 clinic; Fees head | ✓ |
| H11 | Close-up of a handheld spirometer and sealed mouthpieces on a white tray, pale green-grey cloth | 3:2 | home §9 post 1; Tests; Breathing Letter head | ✓ |
| H12 | Person (man, 50s, East African) walking in a spring park path among pale blossoms, relaxed breathing, bright | 3:2 | home §9 post 2; Visit head | ✓ |
| H13 | Clinic exterior: low two-storey modern building with large windows and a lime tree, morning light, no signage | 3:2 | home §9 post 3; About head | ✓ |
| H14 | Home sleep study kit on a bedside table: small recorder, finger sensor, nasal cannula coiled, bright bedroom | 3:2 | Tests (sleep study) | |
| H15 | Physiotherapist (woman, 30s, South Asian) leading three older adults in a breathing exercise in a bright studio | 3:2 | Conditions (COPD column); Stories head | |
| H16 | Morning huddle: five clinicians standing around a pale table with paper notes, candid, no faces to camera | 21:9 | Clinicians head | |
| H17 | Practice manager at a low reception counter handing a printed plan to a patient, both smiling slightly | 3:2 | Your first visit lead; Book head | |
Per-page final assignment (no repeats on a page): Home H01–H13 · About H13, H04 · Conditions H06, H05, H07, H15 · Tests H08, H11, H03, H02, H14 · First visit H02, H17 · Clinicians H16, H09 · Fees H10 · Stories H15, H09 · Visit H12 · Book H17 · Breathing Letter H11 · posts H11 / H12 / H13.


---

## 11. Similarity table (target ≈ 80%; values from reference-tokens.md)
| Dimension | Reference value (token) | Kaze Clinic value |
|---|---|---|
| Ground / bands | #F5F8F1 ~78%; #E1E9D9, #E9F1E3, #D9E9E2 ~10% (T(a)) | identical hexes; ground ~75%, bands ~14% |
| Text / hairlines | #242424, #787878, #919191; #CFD1CD, #E1E3DE (T(a)) | #242424, #787878, #5E5E5E (AA); #CFD1CD, #E1E3DE |
| Accent | #00A561 <3% (T(a)) | #00A561 ≤3% marks; #007A47 for text (AA) |
| First-screen saturation | ~2% (T(a)) | ≤4% |
| Headings | serif JP / Abhaya Libre, light; lead 35px/1.95 .09em (T(b)) | Figtree 500 (row: sans); lead 35px/1.95 .05em Latin, .09em CJK |
| Labels / pair titles | 16px .14em accent; h3 18px bold + 16px em (T(b)) | 13px 700 .14em #007A47; h3 18px 700 + 13px em #787878 |
| Body / nav | 14px, .04em; nav 15px .08em (T(b)) | 16px/2.0 .04em; nav 15px .08em |
| Containers | 930 / 1070 / 1120 / max 1600 (T(c)) | 930 / 1070 / 1120 / 1600 |
| Section gap | 120–140px (T(c)) | 120px desktop, 72px mobile |
| Lead padding | 140px top (T(c)) | 140px top, 120px bottom |
| Care list | 3 cols, 40px gap, figure → title 25px (T(c)) | 3 cols, 40px gap, 25px |
| Radius | slab ~8, cards 0, photos 0 (T(d)) | slab 8, info bar 8, cards 0, photos 0, inputs 4 |
| Shadow / borders | none; 1px hairlines (T(d)) | none; 1px #CFD1CD |
| Hero image | 100dvh full-bleed, washed, 4-slide cross-fade (T(e)) | 100svh full-bleed, washed (brightness 1.04 saturate .85 + left ground scrim), 3-slide cross-fade |
| Card photos | ~4:3, no mask (T(e)) | 4:3, no mask |
| Recruit card | white card on tint, 600px photo right (T(e)) | white card 1120 on #E1E9D9, 600px photo right |
| Header slab | white, inset 72px, radius 8, 6 links + 2 icon links + green marker (T(f)) | identical structure, our links/icons |
| Hairlines | 2 verticals at x≈505 / 1325 (T(f)) | 2 verticals at 35% / 92% |
| Link arrow | disc + arrow, hover slide .3–.4s (T(f), T(g)) | 28px #00A561 disc, 4px slide .35s |
| Hero load | copy .8s +.3s easeOutQuad; photo brightness 1.6 → 1, 1.6s (T(g)) | identical timings and easing |
| Cross-fade | 1s fade, 4s autoplay (T(g)) | 1s fade, 4s hold |
| Inset on scroll | padding 0 → 40rem over 400px (T(g)) | clip-path inset 0 → 40px over 400px |
| Section reveal | fade-up 50px (20 mobile), 1000ms easeOutQuart, delay 0–200 (T(g)) | fade-up 30px cap (20 mobile), 1s same easing, stagger .12s |
| Lead flip | text grey → white .1s, photo .8s easeOutSine (T(g)) | identical |
| Smooth scroll | Lenis (T(g)) | not used (rule) |
Ours only: photos, copy, logo (three-bar wind mark), the info bar, the patina footer.

---

## 12. Forms (form contract v1 — `steps/form-contract-v1` exists)
- Copy `pipeline/assets/forms/shippress-forms.php` unchanged to `inc/`, its CSS/JS unchanged to `assets/`, require from functions.php. Pattern files stay literal block markup; the slot is a small PHP island. No reveal on any form block. **No form on the home first screen** (home form is §10, near the bottom).
- **Book page (`book`, the contact page)**: `shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) )` in the right 7/12 of a 1070 split (left 5/12: phone, hours, address, "what happens next"). `$fallback` = `ob_start()`-buffered literal markup of the existing button: `<a class="wp-element-button kz-btn" href="mailto:hello@kazeclinic.example?subject=…">` with label `_t('contact_email')` = "Email the clinic to book" and subject `_t('forms_booking_subject')` = "Booking request — Kaze Clinic". Never link to /book/ itself.
  Expected plugin fields (styled, not built by the theme): name, email, phone (optional), reason (select: First consultation / Follow-up / Lung function test / Home sleep study / Inhaler review / Breathing rehabilitation), preferred days (checkboxes Mon–Sat), preferred time (radio: morning / afternoon / Thursday evening), message (textarea), consent checkbox.
- **Newsletter page (`breathing-letter`)** and **home §10**: `shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'hello@kazeclinic.example', 'label' => _t('forms_email'), 'submit' => _t('forms_subscribe'), 'notice' => _t('forms_mail_notice'), 'subject' => _t('forms_mail_subject') ) )`. Plugin order: MailPoet (explicit ID via `shippress_form_id`), then MC4WP; CF7/WPForms only by an explicit dedicated newsletter ID. No-plugin fallback: required email field + submit, native mailto POST, notice visible. Footer has no form.
- Semantic keys in `inc/i18n/en.php` first, extract with `L10N_SEMANTIC=1`, translate all five (local rewrite, not literal):
| Key | en | zh-TW / ja / fr / de |
|---|---|---|
| `forms_email` | Your email address | localise (e.g. fr "Votre adresse e-mail", de "Ihre E-Mail-Adresse") |
| `forms_subscribe` | Ask to subscribe | localise |
| `forms_mail_notice` | This opens your email app. Send the message to ask for the letter — you are not subscribed yet. | localise; must keep "not subscribed yet" |
| `forms_mail_subject` | Subscribe: The Breathing Letter | localise |
| `contact_email` | Email the clinic to book | localise |
| `forms_booking_subject` | Booking request — Kaze Clinic | localise |
- Tokens in style.css: `--sp-form-accent: var(--wp--preset--color--accent-text)` (#007A47), `--sp-form-on-accent: #FFFFFF`, `--sp-form-radius: 4px`, `--sp-form-focus: #007A47` (2px outline, 2px offset), `--sp-form-surface: #FFFFFF`, `--sp-form-text: #242424`. Fields: label Manrope .875rem 600 #242424 above; input/select 52px high, textarea min 160px, 1px #CFD1CD border (hover #787878), 16px text, placeholder #5E5E5E; checkbox/radio `accent-color: #00A561`; submit = #007A47 fill, white Manrope 600 .9375rem ls .06em, height 52, padding 0 32px, radius 4, white disc-arrow optional; hover #00663B. Error: #B3261E 1px border + .875rem message under the field; success: #242424 text on #E9F1E3 with a 3px #00A561 left bar. On mist #D9E9E2 (home §10): same, surface white. **Dark ground** (patina #3F5654, used if a form ever sits in the footer): surface #4C6461, text #FFFFFF, border #8FA7A4, accent #B9E6C9, on-accent #1F2B2A, focus #E1E9D9, error #FFB4A9, success #B9E6C9. Test light, mist and dark at 390px and desktop with real CF7 (no submissions); `form-check.py`, `form-runtime-check.php` (five locales), `repo-gates.sh forms` must pass.

---

## 13. Home acceptance checklist (stage 1)
1. Floating white slab (68px, radius 8, inset 72/52 at 1440) with 6 links, green ▾ marker, 2 icon links with captions; exactly one menu.
2. Hero: full-bleed 100svh washed photo H01, subjects right, copy left at x 11%; h1 "Breath you can measure, and steady." at 4.5rem; info bar at the foot; two hairlines at 35/92%.
3. With `?sp-motion`: copy fades in, photo resolves bright → normal (1.6s), slides H01 → H02 → H03 cross-fade (1s/4s), photo insets to a 40px frame by 400px scroll; hero parallax delta ≥6px (check-parallax.mjs desktop + mobile), 0 under reduced motion.
4. 390px first screen: copy above the photo, no vertical text, no overlapping or absolutely positioned labels, no horizontal scroll.
5. §3 lead: grey statement on pale ground flips to white as H04 fades in; final/static state readable (white on scrimmed photo, ≥4.5:1).
6. §4: 3 photo columns with pair titles (title + grey clinical subtitle) and green discs, plus 4 ruled pair rows.
7. §5 method 4 rows; §6 white card with photo right on #E1E9D9 + 3 composite stories; §7 4 fee rows full-width at ≥782 with nowrap right-aligned prices matching Fees; §8 clinic & hours (table stacks on mobile); §9 3 posts; §10 newsletter slot with email + submit (no reveal); patina footer.
8. ≥ 8 image positions (13 images, all unique); ≥ 250 English words, ≥ 3 narrative paragraphs of ≥ 20 words.
9. First-screen saturated share ≤ 4% (`check-first-screen.py`), largest type ≥ 4.25rem, theme.json fontFace fonts identical in editor and front end.
10. `auto-gates.mjs … en … 1 1` pass; `pattern_source.py` pass; at most 3 sp effect kinds; no reveal inside the hero.
