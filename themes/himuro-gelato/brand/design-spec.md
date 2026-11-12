# Himuro Gelato: design spec (stage 1, opus)

Row b28-3 · archetype single-column-longform · hero full-bleed-photo · nav split · first screen top-bottom-halves · page structure people-story · font_direction **serif** · type business / food-drink.
Reference: https://a-bite-coffee.com/ (screens in brand/ref/, values in brand/reference-tokens.md). No secondary reference.
**Imagery: photo** (real film-grain photography, per stage-a IMAGERY). No illustration, no cut-outs.

---

## 1. Signature techniques (borrowed from a-bite-coffee.com, must be obvious)

### T1 Photo-to-paper first screen (reference: A Bite Coffee top, ref/a-bite-coffee-first.png)
- Reference: full-bleed macro photo fills the top ~65% of 1440×900; the lower third dissolves through a vertical gradient into flat paper #ECE9E1; a pale full-width grotesque wordmark (1370 px wide, colour = paper) lies across the top of the photo; hamburger top-right; vertical "2 | 4" counter at the right edge (x 1398, y 280–410).
- Ours, home hero: Cover block, full-bleed, min-height 100svh desktop. Photo H01 as background, object-position 50% 35%. Overlay gradient (a real `::after` on the cover, not a text layer): `linear-gradient(180deg, rgba(236,232,232,0) 0%, rgba(236,232,232,0) 52%, rgba(236,232,232,.85) 72%, #ECE8E8 84%)`. Wordmark "Himuro Gelato" in Fraunces 300, colour #ECE8E8, one line spanning 1370 ±40 px at 1440 (tune letter-spacing −0.02em…0), top y 90–290. Tagline under it (Literata 1.0625rem, #ECE8E8 at 90%): "Churned small, for the walk home." Counter "01 — 03" right edge.
- Do not weaken: photo must reach both viewport edges and ≥ 60% of the height; the melt must end in solid paper (no visible seam); wordmark must be full width and pale, not a centred small title, not dark.
- Inner pages (continuation): About, Flavours, Batches, Visit, People page heads use the same cover at 62vh (mobile 52svh), same gradient, page title in Fraunces 300 `clamp(3rem, 7.5vw, 6.5rem)` pale across the photo top, left aligned at the 35 px gutter.

### T2 Pinned flavour viewer (reference: A Bite Coffee "Products", ref/scroll-abc-2700.png, scroll-abc-4800.png)
- Reference: rosette label "Products" + 1 px full-width hairline at y 80; left index (active item has a 10 px filled dot); two stacked portrait thumbs 232×314 (x 235–467); tall main photo 495×767 (0.65:1, x 480–975); right column x 1015–1405: name 33.7 px/500, sub-line, price 16.9 px, 1 px bordered box (text cell on top, then two cells: dot meter + texture word), full-width filled button 44 px with tiny ▸; counter "2 — 7" with 54 px bar bottom-right. Radius 0, no shadows.
- Ours, home section 4 "Churned today": the same five-column geometry at 1440 (index 200 px | thumbs 232 | main 495 | text 390). Index lists the 6 flavours of the day, first one active (dot #6B5A5E). Thumbs V1, V2; main V3. Right column: name "Burnt Fig & Plum" Fraunces 500 2.1rem; sub-line "Fig roasted until it splits, folded through a plum sorbet ripple"; price "Cup from €4.20 · Tub 500 ml €12.00"; spec box 1 px #6B5A5E: text cell (2–3 lines), then cells "Sweetness Low ●●●○○ High" and "Texture · Dense"; button "Set a tub aside ▸" filled #6B5A5E, 44 px, full column width → /tubs/. Counter "1 — 6" + 54 px bar at bottom-right of section.
- Sticky: the text column (`position: sticky; top: 96px`) only ≥ 1024 px (CSS only). No scroll listener.
- Do not weaken: the bordered spec box with the 5-dot meter, the 0.65:1 tall main photo next to two stacked thumbs, the left index with dot, the counter. Not a card grid.
- Inner continuation: **Flavours** page = 6 viewer panels (one per flavour, alternating thumbs; index sticky); **Tubs & set-aside** page = 3 viewer panels for sizes (spec cells "Holds · 500 ml" / "Keeps · 3 h on the hold shelf").

### T3 Lit-row band on dark grain (reference: "Brand Philosophy", ref/scroll-abc-full-12500.png)
- Reference: deep ground #361C11 with fine grain; big photo left 637×753 (x 35–672); right x 719–1115: three statements separated by 1 px rules (label 14 px "Philosophy 01.", title 34 px, a short line); active row white, others ~40%; small photo 241×360 parked to the right of the active row (x 1133–1374).
- Ours, home section 5 "How a batch is paced": ground #2B1F24 + grain (SVG feTurbulence data-URI, opacity .14, CSS background, not an image file). Photo B1 left (0.85:1); rows "Pace 01. / The base rests overnight / 12 hours at 4 °C so the milk and fruit settle", "Pace 02. / Churned four litres at a time / Eleven minutes in the batch freezer, never more", "Pace 03. / Hardened, then set aside / Two hours at −22 °C, served at −12 °C". Row 02 is the lit row (#ECE8E8 100%), rows 01 and 03 title at 45% / line at 62%; small photo B2 (0.67:1, 241 px) parked beside row 02.
- Do not weaken: dark grain ground, three hairline-ruled rows, one lit row with the parked photo.
- Inner continuation: **Batches** page (5 rows, the full pacing), **About** (3 house rules), **People** (3 customer stories as lit rows, each with its parked photo).

### Supporting (from the same site)
- Rosette label: our own 6-petal "frost rosette" SVG 20 px (ice crystal, drawn by us, not the reference logo) + Fraunces 300 1.58rem label + 1 px full-width hairline #B8AAAE under it. Every section on every page.
- Grain wave footer: paper melts into deep #2B1F24 grain through a ~200 px soft wavy edge (SVG path + 40 px blur mask), then footer links. All pages (it is the footer part).

---

## 2. Key visual concept

### (1) Reference first screen
A Bite Coffee shows a full-bleed macro photograph of several hands holding bitten coffee sweets against a soft peach ground; the lower third melts into paper; a huge pale wordmark spans the width across the hands; a rosette logo and a two-line hamburger are the only chrome; a "2 | 4" counter sits at the right edge. Story: "don't drink coffee, take a bite of it": a single small bite is the whole experience. Signature motion: wordmark letters fade in left to right on load; hero slides swap with a top-down mask wipe every 5 s; on scroll the photo is pinned and scales to 1.1 while text travels up; the wordmark visually lands in the intro line.

### (2) Our translation (gelato cafe, film-grain photo)
Same composition, same image type (macro/hand-held real photo, film grain), same motion idea. The first screen is a film-grain photograph at the cold slab behind the glass: the maker levels a tin of gelato with a flat spatula, and on the near side of the glass a customer waits, coat still on, scarf, small paper bag over the wrist. Story: "a small cup, carried home": one batch, one walk. The bottom third melts into plum-grey paper; "Himuro Gelato" lies pale and full width across the top of the photo. Motion: wordmark letters fade in left to right on load (CSS only); three photos (H01 slab scene, H02 macro of the spatula ridge, H03 cup handed over the glass) cross-fade every 6 s with the counter stepping 01→03; the hero drifts with sp-parallax 8% as you scroll; the intro statement below wipes in.

### (3) KV checklist (home first screen 1440×900, `?sp-static`; every item visible)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Full-bleed macro photo, peach ground | Film-grain photo: maker levelling a tin at the cold slab, customer in a coat waiting at the glass; plum-grey grade | x 0–1440, y 0–~700 | `sp-parallax`, `--sp-par: 8%` (mobile 5%) | H01 (+H02, H03 in the cross-fade) |
| 2 | Lower third melts into paper | Cover `::after` gradient transparent → #ECE8E8, 52%→84% of hero height | y 470–760 | none | H01 |
| 3 | Huge pale wordmark across the top | "Himuro Gelato", Fraunces 300, `clamp(4.25rem, 11.4vw, 10rem)`, #ECE8E8, 1370 px wide | y 90–290 | letters fade in L→R, 1.0 s each, .07 s stagger, `cubic-bezier(.25,.46,.45,.94)` (≈power1.out); CSS keyframes under `html.sp-js:not(.sp-no-motion)` only | H01 |
| 4 | Rosette logo + hamburger chrome | Split header: nav (one menu) left, small "HG" frost-rosette mark + name centre, "Set a tub aside" text link + language switcher right; all #ECE8E8 on photo | y 0–72 | hover underline only | — |
| 5 | Right-edge slide counter "2 \| 4" with bar | "01 — 03" vertical counter with 1 px × 110 px bar, #ECE8E8; step follows the CSS cross-fade (18 s loop, 6 s per photo; mask-wipe top→down 2.5 s `cubic-bezier(.16,1,.3,1)`) | x 1398, y 280–410 | cross-fade; static/reduced = H01 and "01" | H01, H02, H03 |
| 6 | Intro line under the fold | "✿ Introduction" rosette label + hairline, Fraunces 300 4.28rem two-line statement "One batch at a time, / one cup for the walk home." at x 26% | y 740–900 | `sp-reveal--wipe` (section 3, not the hero) | — |

Mobile 390×844: items 1, 2, 3 (wordmark wraps to two lines "Himuro / Gelato" at 4.25rem, in flow), 4 (logo + burger), 6 label visible near y ~700; item 5 hidden < 782 px. No absolute-positioned labels over text on mobile.

---

## 3. Home page (en): blocks in order

| # | Block | Purpose | Layout / images | Copy |
|---|---|---|---|---|
| 0 | Header (split) | one top menu | transparent over hero, sticky solid #ECE8E8 after hero not required; 3-column grid: navigation block left (Flavours, Batches, Tubs, People, Visit, Journal), centred site logo/title, right text link + language switcher. Mobile: logo left, burger right | labels only |
| 1 | KV hero (T1) | scene + story | Cover 100svh (min 720 px), H01/H02/H03, wordmark, tagline, counter; `sp-parallax` | 6 words tagline |
| 2 | Introduction | the walk-home story | rosette label; text column x 26%–74%; statement 4.28rem; **3 narrative paragraphs (≥ 45 words each)**; photo P04 (0.74:1, 300 px wide) flush right, offset down 160 px | ~150 words |
| 3 | Churned today (T2) | flavours of the day | viewer: index (6 flavours), V1+V2 thumbs, V3 main, spec box, button; counter "1 — 6". `sp-stagger` on thumbs, `sp-reveal--mask` on V3 | ~60 words |
| 4 | How a batch is paced (T3) | process | dark grain band, B1 left, 3 ruled rows (row 02 lit), B2 parked | ~55 words |
| 5 | Cups, tubs and the hold shelf | prices + how a tub is set aside | rosette label; one paragraph (≥ 30 words) at x 26%; full-width price list (6 rows, price nowrap right); below it an inline 4-part sentence row "Reserve by 15:00 → we churn → hold shelf −18 °C → collect by name" (one line of text, not a step grid) | ~70 words + table |
| 6 | Who is at the slab | people | 3 ruled rows: portrait (0.74:1, 160 px) left at x 26%, name Fraunces 2.1rem, role, one sentence; R1, R2, R3; link "All the people →" | ~75 words |
| 7 | Visit (parallax band) | address + hours | full-bleed 80vh photo S1 with `sp-parallax` `--sp-par: 10%`; a paper panel (#ECE8E8, 440 px, radius 0) inside the container bottom-left holds address, hours, phone, button "Directions" | ~40 words |
| 8 | From the journal | posts | rosette label; 2 ruled rows (thumb 0.74:1 220 px left, date, title Fraunces 2.1rem, excerpt), J1, J2 (Query Loop, 2 posts) | auto |
| 9 | The flavour note (newsletter) | subscribe | paper, text left x 26%, `shippress_form_slot` kind newsletter right (≤ 440 px). No reveal on the form | ~35 words |
| 10 | Grain wave footer | nav + contact | paper → wave → deep #2B1F24 grain; frost rosette mark left, 2 link columns, address/hours, small © line | — |

English words on home ≥ 300 (target 330). Photo positions on home: H01, H02, H03, P04, V1, V2, V3, B1, B2, R1, R2, R3, S1, J1, J2 = **15** (≥ 8 required).

### Not the same as recent themes
| Theme | Their home order | Ours |
|---|---|---|
| Tochi Academy | stamp/ticker/disc slider KV → narrative 7/5 → T3 cards → ticker → horizontal timeline → parallax evening band → green band → instructor rows → journal 3 cards → fees + newsletter | photo-melts-to-paper KV; no ticker, no cards, no timeline; viewer with spec box is unique |
| Haru Allergy | pinned photo KV with wordmark → veil poem → edge portraits → method band circles → slate band horizontal cards → voice slider → visit | our wordmark sits on a melting photo (not pinned card); no circles, no sliders, no horizontal cards |
| Kakeru Run | ruled hexagon KV + monogram → specimen tiles → 2+1 info → ruled grid with coloured band → stories → prices | no tiles/grid; one-column long read with one dark band |
| Asagiri Hotel | pale band + inset dark photo KV → intro portrait + names → huge time opener + 3-photo strip + rates → inset photo card → portrait + time rows → count parallax band → rising panel → 3 posts → ink band | full-bleed (not inset) KV; no count-up, no photo strip, no 3-post grid |

---

## 4. Inner pages (≥ 8 + article/category/tag)
| Page (slug) | Key content | Technique |
|---|---|---|
| About (`about`) | founded 2019 by Ines Varga in a former cold-store on Quay Lane; why small batches; 3 house rules as lit rows; P04 and R1 in the body | T1 head (A1), T3 rows |
| Flavours (`flavours`) | 6 flavours of the standing list + "rotating" note, each a viewer panel with spec box (sweetness dots, texture); allergens line | T1 head (V3), T2 ×6 |
| Batches (`batches`) | full pacing: rest 12 h 4 °C → churn 4 L, 11 min → harden 2 h −22 °C → serve −12 °C → what is left goes to the hold shelf or is discarded at close | T1 head (B1), T3 5 rows |
| Tubs & set-aside (`tubs`) | price list (same 6 items), 3 tub panels, how to reserve (by 15:00, held 3 h), **reservation form slot** | T2 ×3, price table |
| People (`people`) | 6 named people as ruled rows; 3 customer stories as lit rows | T1 head (R1), T3 stories |
| Visit (`visit`) | address, hours, how to get there, seats (14 inside, 6 outside), accessibility, S1 | T1 head (S1), parallax |
| Journal (`journal`) | posts page (role posts, empty) | rosette label + ruled rows |
| Newsletter (`newsletter`) | standalone subscribe page: what the note contains (Tuesday, flavours of the week), form slot | rosette label |
| Contact (`contact`) | email, phone, catering/wholesale enquiries, **contact form slot** + mailto fallback | rosette label |
| Article (single), category, tag | post template with T1 small head (featured image melt, 46vh) | T1 |

Technique continuation on ≥ 4 inner pages: T1 on About, Flavours, Batches, People, Visit, single; T2 on Flavours, Tubs; T3 on About, Batches, People.

---

## 5. Fixed facts (identical on home, inner pages and all five languages)
- Name Himuro Gelato · founded **2019** · 14 Quay Lane, Harbour Quarter, Larkhaven (fictional) · phone +00 10 4820 1907 · hello@himurogelato.example.
- Hours: **Wed–Sun 12:00–21:00**; Mon–Tue closed (churning and cleaning days). Tub reservations by **15:00** same day; held **3 hours** on the −18 °C hold shelf.
- Batch: base rests **12 h at 4 °C**; churned **4 litres** per batch, **11 minutes**; hardened **2 h at −22 °C**; served at **−12 °C**; **6 flavours** churned each open day; seats 14 inside, 6 outside.
- Prices (6): Single cup, one flavour **€4.20** · Double cup, two flavours **€5.60** · Affogato **€6.20** · Walk-home tub 500 ml **€12.00** · Family tub 1 L **€21.00** · Insulated carry bag (reusable) **€3.00**.
- Flavours (6): Burnt Fig & Plum · Black Sesame Milk · Pear & Bay Leaf · Hazelnut Gianduja · Lemon Ricotta · Dark Cocoa Sorbet (vegan).
- People (6): Ines Varga (founder, maker at the slab) · Tomas Lind (morning batch maker) · Amara Okafor (flavours and fruit buying) · Mei Han (front of the glass, counter lead) · Rafael Moreno (evenings and the hold shelf) · Sofie Brandt (wafers and cones).
- Customer stories (3): the night-shift nurse who takes a double cup at 20:40 · the father who collects a 1 L tub every Sunday · the student who walks it home over the bridge.
- Set-aside process (4): reserve by 15:00 → we churn → hold shelf −18 °C → collect by name.

---

## 6. Colour (reference relationships, plum family)
Reference hexes are coffee browns; the row fixes palette 梅鼠 plum #6B5A5E, and brown would also repeat the reference's identity. So hue is moved to plum while **lightness and the share of each role are kept from the reference tokens (within ±5% L)**.
| Role | Reference (token a) | Ours | Share |
|---|---|---|---|
| Paper ground | #ECE9E1 (62%) | **#ECE8E8** | ~58% |
| Ink text | #5D3121 (8%) | **#3B2B31** | ~8% |
| Primary (buttons, dots, spec border, headings in viewer) | #5D3121 | **#6B5A5E** | ~12% |
| Deep band / footer | #361C11 (20%) | **#2B1F24** | ~18% |
| Muted type / hairlines | #B5B1A6, #938D7C | **#B8AAAE**, **#8E7F84** | rules |
| Pale panels | #D6D2C8 | **#DAD3D4** | small |
| Spot | #FFB000 (glyph only) | **#C98A9A** rose (dot in "rotating" tag, focus ring) | < 2% |
First-screen saturated share: target ≤ 12%, hard cap 15% (`scripts/check-first-screen.py`), row cap 30%. Photos are graded low-saturation so the hero passes.
Contrast: #3B2B31 on #ECE8E8 ≈ 11:1; #ECE8E8 on #6B5A5E ≈ 5.5:1; inactive lit-row lines ≥ 4.5:1 (use 62% for small lines).

## 7. Type (serif)
- Latin display **Fraunces** (variable, opsz on, weights 300/500); Latin text **Literata** (400/500, italic 400).
- zh-TW display stack: `"Fraunces", "Noto Serif TC", serif`; zh-TW body: `"Literata", "Songti TC", "PMingLiU", serif` (no bundled zh font, no JP font in body).
- ja display: `"Fraunces", "Noto Serif JP", serif`; ja body: `"Literata", "Hiragino Mincho ProN", "Yu Mincho", serif`.
- All via theme.json `fontFamilies` + `fontFace` (woff2 in assets/fonts, zh-TW and ja subsets for Noto Serif TC/JP, Hokuto/Hada subsetting workaround); same in editor and front end; copy shared/inc/editor-lang.php if any `:lang(` rule exists. CJK sizes ≈ 0.75× Latin display; CJK body line-height 1.85; fr/de `hyphens: auto`.
| Token | Value | Source token (b) |
|---|---|---|
| display (wordmark) | `clamp(4.25rem, 11.4vw, 10rem)`, 300, lh .9, ls −0.02em | wordmark 1370 px full width |
| xx-large (intro statement, page titles in body) | 4.28rem (68.5 px), 300, lh 1.15 | intro 68.5/78.8/400 |
| x-large (page head title) | `clamp(3rem, 7.5vw, 6.5rem)` 300 | derived |
| large (product/person names) | 2.1rem (33.7 px), 500, lh 1.1 | product 33.7/37/500 |
| medium (section label) | 1.58rem (25.3 px), 300 | label 25.3/300 |
| base | 1.0625rem (17 px), Literata, lh 1.8 (CJK 1.85) | body 16.9 |
| small (price, spec, meta) | 1.0625rem ls .01em / .875rem meta | price 16.9 ls .01em |
Largest size ≥ 4.25rem ✓.

## 8. Spacing, shape, decoration (reference-tokens c, d, f)
- Gutter 35 px (`2.1875rem`) both sides; wide size 1370 px; content text column starts at 26% (x 372) and is 640 px wide.
- Section padding: intro 208 px top / 272 px bottom; other sections 200–240 px top/bottom desktop, 96–120 px mobile.
- Radius **0** everywhere (photos, buttons, boxes, form fields). No shadows.
- Hairline 1 px #B8AAAE under every rosette label (y +80 px from section top) and between rows.
- Spec box: 1 px #6B5A5E border, inner 1 px divider; dots 10 px, filled #6B5A5E / outline 1 px.
- Button: filled #6B5A5E, 44 px high, Literata 500 1.0625rem, #ECE8E8 text, a 6 px ▸ triangle at right (SVG in markup); outline variant on dark.
- Counter: "1 — 6" Literata .875rem #8E7F84, 54 px × 1 px bar with the filled portion #6B5A5E.

## 9. Images (16 unique, all photos, ≤ 300 KB, ≤ 2000 px, no cut-outs)
STYLE (one string for the whole theme):
`35 mm film photograph, visible fine film grain, high-key bright soft daylight from a side window, slightly lifted blacks, muted plum-grey colour grade with pale grey-plum paper and brushed steel surfaces, shallow depth of field, calm documentary framing, modern international small gelato cafe, diverse people, no text, no letters, no logos, no signage, no brand marks`
| ID | Subject / composition | Ratio | Used on (home ★) |
|---|---|---|---|
| H01 ★ | maker levelling a steel tin of plum-coloured gelato with a flat spatula at the cold slab; behind the low glass, a customer in a wool coat and scarf waits, softly out of focus; space for the wordmark in the upper 35% (pale wall) | 16:10 | home hero only |
| H02 ★ | macro: spatula ridge across fig-plum gelato in a tin, frost on the steel rim | 16:10 | home hero cross-fade |
| H03 ★ | a gloved hand passes a small paper cup over the glass to an open hand in a coat sleeve | 16:10 | home hero cross-fade; Contact head |
| P04 ★ | customer walking away on an evening street, cup in hand, coat, back three-quarter | 0.74:1 | home intro; About body |
| V1 ★ | lidded 500 ml paper tub and a folded carry bag on pale paper ground, top-down | 0.74:1 | home viewer thumb; Tubs |
| V2 ★ | a hand holding a small cup, a wooden spoon resting in a scoop, seamless paper | 0.74:1 | home viewer thumb; Flavours |
| V3 ★ | close macro of burnt-fig gelato with plum ripple, scoop edge, soft light | 0.65:1 | home viewer main; Flavours head |
| B1 ★ | batch freezer: paddle turning thick gelato, steam of cold, dark surroundings | 0.85:1 | home batch band; Batches head |
| B2 ★ | a set-aside tub on a frosted steel shelf with a blank paper name tag | 0.67:1 | home lit-row parked; Tubs |
| R1 ★ | maker portrait (woman, 40s) in apron at the slab, three-quarter, calm | 0.74:1 | home people; People head; About |
| R2 ★ | counter lead (East Asian woman, 30s) behind the glass, smiling slightly | 0.74:1 | home people; People |
| R3 ★ | flavour developer (Black woman, 30s) sorting figs and pears at a steel bench | 0.74:1 | home people; People |
| S1 ★ | shopfront at blue hour: tall window glowing, two people inside at the counter, wet street | 16:9 | home visit parallax; Visit head |
| J1 ★ | figs and plums halved on parchment, knife, hands | 0.74:1 | home journal; post 1 featured |
| J2 ★ | hands rolling a wafer cone on a warm iron | 0.74:1 | home journal; post 2 featured |
| A1 | empty cafe interior in morning light, stools, chalk-free walls, glass counter | 16:10 | About head; Newsletter |
No image is repeated on the same page. Read every generated image; regenerate if text, logos, broken faces/hands or a style drift appear.

## 10. Scroll effects (sp-scroll, from stage-a candidates)
| Effect | Where | Reference trigger / time / easing | sp class + vars |
|---|---|---|---|
| Hero pinned + scale drift | home hero; Visit band; inner T1 heads | ScrollTrigger scrub 1, start top top, scale 1.1 | `sp-parallax` on the Cover; `--sp-par: 8%` hero, 10% visit band, 6% inner heads; mobile `--sp-par: 5%` (keep) |
| Diagonal mask text reveal | intro statement, every section heading block, lit rows | IO `.is-in`, mask 2 s `cubic-bezier(.25,1,.5,1)`, delay .3 s | `sp-reveal sp-reveal--wipe` (clip on children), `--sp-dur: 1.4s` |
| Product swap: blur + top-down mask | viewer main photo V3; flavour panels; thumbs | scrubbed, mask 47/53% | `sp-reveal sp-reveal--mask` on main photo; thumbs/index in a `sp-stagger` parent with `sp-reveal--up` (`--sp-dist: 24px`) |
Load-only (not scroll): wordmark letters (CSS keyframes, hero) and the hero cross-fade, both off under `sp-no-motion`, reduced motion and the editor. **Hero, forms, price tables and legal text get no reveal.** No marquee, no count-up (the reference has none). Lenis smooth scroll is not reproduced.

### Parallax (required)
- Home hero: Cover `.sp-parallax`, background H01 (the cross-fade images live in a `.sp-parallax__layer`), foreground wordmark/tagline/counter stay outside the moving layer. `--sp-par: 8%`, mobile 5%. Reference: hero pinned and scaled to 1.1 while text travels up.
- Home Visit band: Cover `.sp-parallax` with S1, `--sp-par: 10%` (mobile 6%); paper panel is foreground. Reference: footer inner layer yPercent −15 → 0 scrub.
- Verified by `check-parallax.mjs` (≥ 6 px difference, 0 under reduced motion).

## 11. Responsive
- 390 px first screen: wordmark in flow, two lines; no vertical text, no absolute labels over text; counter hidden < 782 px; tagline below wordmark.
- Viewer < 1024 px: index becomes a horizontal list (no reveal on its children), then main photo (full width, 0.8:1), thumbs as a 2-up row, text and spec box, button full width; not sticky.
- Lit-row band < 782 px: photo B1 on top, rows stacked, all at full opacity, B2 under row 02.
- Price list ≥ 782 px: full container width (1370 or content 1000 px min), item column left, price column `white-space: nowrap; text-align: right`, never cut. < 782 px every table becomes stacked (each row a block: name, note, price on its own line).
- No horizontal overflow at 390 and 1280.

## 12. Forms (form contract v1, `steps/form-contract-v1` exists)
- Copy `pipeline/assets/forms/shippress-forms.php` → `inc/`, CSS + editor JS → `assets/`, require in functions.php; no plugin dependency, no mail backend.
- **Contact** page: `shippress_form_slot( kind => contact, fallback => <buffered literal mailto button "Write to us" → mailto:hello@himurogelato.example> )` under the address block. CF7/WPForms form shown when available.
- **Tubs & set-aside** (reservation): same contact-kind slot with fallback mailto button "Reserve a tub by email" (subject "Tub reservation").
- **Newsletter** page (standalone, not the posts page) and **home section 9** and **footer** subscribe strip: `shippress_form_slot( kind => newsletter, email => hello@himurogelato.example, label => forms_email, submit => forms_subscribe, notice => forms_mail_notice, subject => forms_mail_subject )`. MailPoet / MC4WP first; CF7/WPForms only with an explicit newsletter form id. Without plugins: required email field + submit, native mailto POST, notice "Opens your email app. Send the request to subscribe; you are not subscribed yet."
- Fields: contact = name, email, message (+ optional date/tub size via the plugin form); newsletter = email only.
- Tokens: light (paper) `--sp-form-surface: #F6F3F3; --sp-form-text: #3B2B31; --sp-form-border: #8E7F84; --sp-form-accent: #6B5A5E; --sp-form-on-accent: #ECE8E8; --sp-form-focus: #C98A9A; --sp-form-radius: 0`. Dark (footer #2B1F24): surface #3A2D33, text #ECE8E8, border #B8AAAE, accent #ECE8E8, on-accent #2B1F24, focus #C98A9A. Focus = 2 px outline focus colour + 2 px offset; error text #9E3B4F on light / #E7A9B6 on dark with a 1 px left rule; success uses the accent colour, never claims subscription in fallback.
- Copy in five languages (en, zh-TW, ja, fr, de) through semantic keys `forms_email`, `forms_subscribe`, `forms_mail_notice`, `forms_mail_subject` plus contact labels and fallback buttons; extract with `L10N_SEMANTIC=1`.
- No `sp-reveal` on any form or its wrapper; no form in the first screen.

## 13. Similarity table (target ≈ 80%)
| Dimension | Reference | Ours |
|---|---|---|
| Ground / ink / deep | #ECE9E1 / #5D3121 / #361C11, 62/8/20% | #ECE8E8 / #3B2B31+#6B5A5E / #2B1F24, 58/20/18% |
| First-screen saturation | 11.0% | ≤ 12% |
| Hero | full-bleed photo top 65% melting to paper, full-width pale wordmark | same, H01, 1370 px wordmark |
| Wordmark motion | letters L→R 1.0 s, .07 s stagger, power1.out | same values, CSS |
| Hero scroll | pinned, scale 1.1 scrub | sp-parallax 8% |
| Viewer | index + 2 thumbs 232×314 + main 495×767 + spec box + 44 px button + "2 — 7" | identical geometry, "1 — 6" |
| Dark band | #361C11 grain, 3 ruled rows, lit row, parked 241×360 photo | #2B1F24 grain, same |
| Labels | rosette 20 px + 25.3 px label + hairline | frost rosette 20 px + 1.58rem + hairline |
| Type sizes | 68.5 / 33.7 / 25.3 / 16.9 px | 4.28 / 2.1 / 1.58 / 1.0625 rem |
| Radius / shadow | 0 / none | 0 / none |
| Text reveal | diagonal mask 2 s cubic-bezier(.25,1,.5,1) | sp-reveal--wipe 1.4 s |
| Footer | paper → blurred grain wave → deep footer, parallax | same + Visit band parallax |
| Typeface | Helvetica grotesque | Fraunces/Literata serif (row requires; the one intentional difference) |

## 14. Home acceptance checklist
- [ ] KV checklist items 1–6 visible at 1440×900 `?sp-static`; items 1–4 + 6 at 390.
- [ ] Wordmark ≥ 4.25rem at every width and spans ~95% width at 1440.
- [ ] Photo melts into solid #ECE8E8 with no seam.
- [ ] Viewer has spec box with 5-dot meter, two thumbs, tall main, counter; button links to /tubs/.
- [ ] Dark grain band has one lit row and a parked photo.
- [ ] Price list 6 rows, prices equal section 5, nowrap right at 800/1280, stacked at 390.
- [ ] ≥ 8 images (plan 15), no repeat on the page, 0 cut-outs.
- [ ] ≥ 250 English words, ≥ 3 narrative paragraphs ≥ 20 words.
- [ ] Exactly one top menu; footer subscribe and section 9 newsletter slots render email + submit without plugins; no reveal on forms.
- [ ] sp-parallax in hero and visit band pass check-parallax; no reveal on hero; reduced motion = final state.
- [ ] First-screen saturated share ≤ 15%; auto-gates pass (no overflow, no overlap, no broken images).
