# Sokuten Survey: design spec (stage 1 spec, binding for implementation)

Slug `sokuten-survey`, land surveying firm, **landing theme** (type `landing`, category business-services). Home is one long conversion page with an anchor menu and **one** repeated CTA, "Request a visit". Five languages (en, zh-TW, ja, fr, de).
Reference: **PASCO**, https://www.pasco.co.jp/ (one reference only, no secondary). Measured values: `reference-tokens.md` (cited below as `tok(a)…tok(g)`). Screenshots: `ref/pasco-first.png`, `ref/pasco-part2.png`, `ref/pasco-part3.png`, `ref/scroll-pasco-accordion-*.png`, `ref/scroll-pasco-band-*.png`.
Borrow structure, technique, motion, colour relationships and the key-visual concept. Never copy PASCO photos, CG, illustration, text or logo.

**Imagery: photo** (stage-a `IMAGERY: photo`). PASCO's strip is photographic / realistic CG and aerial imagery; its one illustration is a single lower band, well under half of the image positions. All 18 images here are high-key documentary photographs generated with the STYLE string in section 9.

Type direction: **sans**. Latin headings and body both sans-serif (Outfit / Source Sans 3); CJK in Noto Sans TC / Noto Sans JP (gothic / sans direction). No serif anywhere, no Mincho/Ming faces.

---

## 0. Fixed brand facts (every page, every language; brand.md must match)

- **Sokuten Survey**, independent land surveying firm, founded **2009**. Office and instrument room: **14 Ferrow Lane, Brookmere** (fictional, international-neutral town; localise only the address format, not the place).
- Serves house plots, garden boundaries, builders' setting-out and small land purchases within **40 km** of the office.
- Office hours **Mon–Fri 8:30–17:30**. Field visits **Mon–Sat, start times 7:30–15:00**. Closed Sundays and public holidays.
- Phone **+1 555 0142 090** (fictional), email **visits@sokuten.example**.
- People (7, named everywhere the same; never shown as a portrait grid):
  1. **Ines Calloway**: founder, licensed land surveyor, signs every boundary plan.
  2. **Tomasz Reyes**: field lead, total station and the hour on the ground.
  3. **Amara Okonjo**: plans and drafting; draws every measured plan.
  4. **Lukas Brandt**: GNSS and topographic surveys, slopes and larger plots.
  5. **Priya Nandakumar**: client desk; books every visit and answers the phone.
  6. **Felix Marlowe**: field assistant; stakes, string and pin caps.
  7. **Hana Sørli**: records and title research before each visit.
- The visit ("the hour on the ground"): **60 minutes, 5 stages, 1 plan**:
  1. **0–10 min** At the gate: read the deeds and any old plan together.
  2. **10–25 min** Walk the line with the owner; look for the pins already in the ground.
  3. **25–40 min** Set the tripod, shoot the pins and corners.
  4. **40–50 min** Mark what was found with stakes, string and caps you can see.
  5. **50–60 min** Fold out the field sketch, agree what (if anything) comes next.
  Measured plan follows within **10 working days** (PDF + one paper copy).
- Fees (USD in every language, no conversions; **6 items**):
  | # | Service | Covers | Price |
  |---|---|---|---|
  | 1 | Site visit, the hour on the ground | 60 min on site, field sketch, written note | **$180** |
  | 2 | Boundary survey, residential plot | up to 1,000 m², pins found or reset, signed plan | **$1,250** |
  | 3 | Pin reset | one missing pin with an existing record | **$160** per pin |
  | 4 | Setting-out for a builder | house footprint, one visit, stakes and offsets | **$720** |
  | 5 | Topographic survey | up to 2,000 m², levels every 5 m, plan with contours | **$1,650** |
  | 6 | Extra paper copy of a plan | folded A2, posted | **$25** |
  The **$180** visit fee is credited in full if a survey is booked within **60 days**. Travel beyond 40 km: quoted before booking (no fixed number elsewhere).
- Stories (4, published as posts in category **Stories**; plus 2 posts in **Field notes**, 6 posts total):
  1. "The fence that sat 40 cm inside the line": Corinne Abara, owner, and a neighbour's new fence; two old pins found under turf.
  2. "A footprint on a slope": Merrow & Daughters Build, setting-out on a 1-in-8 slope, offsets marked before the digger came.
  3. "One garden, two houses": the Adeyemi family dividing a long garden; topographic survey and a new boundary.
  4. "The pin under the driveway": a pin reset from a 1987 record, found 30 cm below new paving.
  Field notes: "What to have ready at the gate", "Why spring and autumn fill first".
  No outcome guarantees, no awards, no real media, no real people or brands.

---

## 1. Signature techniques (three plus the head line; all must read at a glance)

### T1. Accordion photo strip (PASCO first screen, https://www.pasco.co.jp/, `ref/pasco-first.png`, `ref/scroll-pasco-accordion-before/after.png`)
- **Reference:** six tall photographs edge to edge in one row under the tagline; one panel is open (square) and the others are narrow slivers. The open panel hands over to the next every 3.5s, its width easing over 0.8s. Mostly greys from the photos; the strip *is* the first screen.
- **Ours, home block 1 (`front-strip`)**, desktop 1440: row from x 40 to x 1400 (`margin-inline: 40px`, width 1360) `tok(c)`, height **505px** `tok(e)`, gap **8px** `tok(c)`, `border-radius: 4px` per panel, no border, no shadow `tok(d)`. `display:flex`; closed panels `flex: 163 1 0`, open panel `flex: 505 1 0` (163 × 5 + 505 + 8 × 5 = 1360 exactly) `tok(e)`. Images `object-fit: cover; width:100%; height:100%`. Closed panel: 56px black-to-transparent gradient on its left edge (`linear-gradient(90deg, rgba(0,0,0,.28), transparent 56px)`) `tok(e)`. Open panel: 90px bottom gradient `linear-gradient(to top, rgba(0,0,0,.5), transparent 90px)` `tok(e)`.
- Motion `tok(g)`: `transition: flex-grow .8s cubic-bezier(.4,0,.2,1)`; auto-advance every **3500ms**, wrapping 6 → 1; pauses on pointer hover over the strip, on `:focus-within`, and when `document.hidden`; `pointerenter` on a panel opens it at ≥ 768px; first tap opens, second tap follows the link.
- Static state (no JS, `?sp-static`, `html.sp-no-motion`, `prefers-reduced-motion: reduce`, editor): **panel 3 open**, no autoplay. Panel 3 carries `is-open` in the saved markup so this is the default without JS.
- Implementation: theme script `assets/js/ss-strip.js` (≤ 2 KB, enqueued in the footer, no scroll listener, no libraries) toggles `is-open` on `.ss-panel`; it does nothing if `html.sp-no-motion` is present or `matchMedia('(prefers-reduced-motion: reduce)')` matches or viewport < 768px. Markup is a pattern: `wp:group {className:"ss-strip"}` → six `wp:group {className:"ss-panel"}`, each holding `wp:image` (no link) + `wp:paragraph {className:"ss-panel__label"}` + `wp:paragraph {className:"ss-panel__caption"}` whose `<a>` gets a stretched `::after` (empty `content:""`) over the whole panel. Text stays editable in the editor.
- **Must not be diluted:** six panels (not four, not three), all visible at once on desktop; open panel exactly square (505 × 505) and ≈ 3.1× a closed one; 8px gaps; 4px radius (not 0, not 16+); height ≥ 505px at 1440; the open panel is a different photo from the others and is the key scene (section 2).

### T2. Vertical label → horizontal caption swap (PASCO strip captions, `ref/pasco-first.png`)
- **Reference:** each closed panel carries an upright vertical label at the bottom-left in white; the open one swaps it for a one-line horizontal caption bottom-left and a 34px white circle with a chevron at the bottom-right, over the dark bottom gradient.
- **Ours, inside T1:** `.ss-panel__label`: `writing-mode: vertical-rl; text-orientation: upright` for CJK, `text-orientation: mixed` (rotated Latin, reading top-to-bottom) for en/fr/de; Outfit 600 **20px**, letter-spacing 1px, white, `position:absolute; left: 16px; bottom: 20px` `tok(b)`; 16px between 768 and 1199px `tok(b)`. `.ss-panel__caption`: Outfit 600 1.375rem (22px) white, one line, `left: 20px; bottom: 22px; right: 70px`, ellipsis if needed; after it the circle arrow: **34px** white circle, umber chevron 8px, `right: 20px; bottom: 18px` `tok(f)`. Swap timing `tok(g)`: label `opacity` 1 → 0 in **0.15s**; caption and circle 0 → 1 in **0.6s after 0.1s delay**; panels that close switch with 0s (no ghosting).
- Labels are short nouns; captions are a short sentence and the panel's link (section 2 table).
- **Must not be diluted:** labels white, upright vertical (not rotated 90° horizontal text), 20px, bottom-left; caption + white circle bottom-right only on the open panel. **Desktop/tablet only:** under 768px there are no vertical or absolutely positioned labels (section 7).
- Inner pages: the same chip treatment is used as **mini strips** (four panels, 360px tall) on About, The visit and Thanks (section 5).

### T3. Pale rounded-top request band with one pill (PASCO owned-media band, `ref/pasco-part3.png`, `ref/scroll-pasco-band-*.png`)
- **Reference:** a full-width pale-blue band with **60px** top-left/top-right corners only, image 520px square at the left, text column from x 750: Latin eyebrow + 60px rule, heading, three short lines, one sky pill 260 × 50 r25; the deep-blue footer begins right under the band.
- **Ours, home block 10 (`front-request`)** and the closing block of **every** inner page: `alignfull`, ground **`#ECF6FF`** `tok(a)`, `border-radius: 60px 60px 0 0` `tok(d)`, min-height 619px at 1440 `tok(d)`, padding 100px 120px. Two columns: photo 15 at **520 × 520**, radius 4px, left at x 120; text column starting at x 750 (`grid-template-columns: 520px 1fr; column-gap: 110px`). Text: eyebrow "Request a visit" + 60 × 1px umber rule (T4 eyebrow below), H2 Outfit 600 2.25rem, three body lines (Source Sans 3 1rem, line-height 2), then the **pill CTA**: 260 × 50px, `border-radius: 25px`, ground **`#64B5EB`** `tok(a)`, label "Request a visit" Outfit 600 1rem **ink `#1F1A16`** (white on `#64B5EB` is 2.3:1, too low; ink gives 8.3:1), small outward arrow icon at the right (inline SVG). The umber footer starts flush under the band (no gap), exactly like the reference.
- **Must not be diluted:** only the two top corners are rounded and they stay 60px (40px under 782px); ground is the pale blue, not grey or beige; the band is the last block before the footer on every page; there is one pill, and it is the same CTA label everywhere.

### T4. Tagline and sub-line on one baseline (PASCO H1, `ref/pasco-first.png`), the head line of every page
- **Reference:** heavy tagline 50px + a smaller 32px sub-line, same baseline, 30px gap, left padding `clamp(40px, 11.32vw, 163px)`, line-height 1.3 `tok(b)`.
- **Ours:** `display:flex; align-items: baseline; flex-wrap: wrap; column-gap: 30px; padding-left: clamp(40px, 11.32vw, 163px)`. Main: Outfit 600 `clamp(2rem, 3.47vw, 3.125rem)` (50px at 1440, preset `x-large`), line-height 1.3, letter-spacing 0.04em in Latin (token 0.1em is for a CJK serif; kept for zh-TW/ja: `:lang(zh-TW),:lang(ja) {letter-spacing: .1em}`). Sub: Outfit 400 `clamp(1.25rem, 2.22vw, 2rem)` (32px at 1440), colour `#594E45`. Home: "Measured on the ground, marked where you can see it." + "One visit, one plan". Inner pages: page title + a short sub-line (section 5).
- Under 782px the sub-line wraps below the main line (no forced baseline).

### Continuation on inner pages (≥ 4 required; here 11)
| Page | T4 head line | T1/T2 mini strip | T3 band close | Eyebrow + rule |
|---|---|---|---|---|
| About | yes | yes (photos 16, 17, 18, 04) | yes (15) | yes |
| The visit | yes | yes (10, 03, 05, 02) | yes (15) | yes |
| Fees | yes | — | yes (15) | yes |
| FAQ | yes | — | yes (15) | yes |
| Request a visit (contact) | yes | — | yes (photo **01** here, pill = mailto) | yes |
| Spring list (newsletter) | yes | — | yes (15) | yes |
| Notes index / category / tag | yes | — | yes (15) | yes |
| Single note | yes (title + date sub-line) | — | yes (15) | yes |
| Thanks | yes | yes (01, 06, 14, 15 → band uses **12** here) | yes (12) | yes |
| Privacy, Terms | yes | — | yes (15) | — |

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
- **What it draws:** a calm one-line tagline over a row of six tall photographs of different subjects, edge to edge: a satellite in orbit, a white city model held over a hand, a blurred skyline, a white 3D city block (open, square), a data-globe, a river from above. Near-white page with a barely visible pink-to-cyan wash.
- **Story:** "measure the earth, build the future": many ways of measuring, all shown at once, one of them in focus at a time.
- **Signature motion:** the open panel hands over to the next every 3.5s; its width eases over 0.8s; the vertical label of the closing panel fades out and the opening panel's horizontal caption and circle arrow fade in.

### (2) Our translation (same composition, same motion, same image type)
A land surveying firm shows **one site visit as six moments on one staked lot**, all visible at once, one in focus. The open panel is the signature scene: **a surveyor at a tripod on a staked lot while the client holds a folded plan by the boundary pin**. The other five panels are the moments around it (the pin in the grass, stakes and string, the instrument, tape along a fence line, the lot from above). The strip hands over every 3.5s exactly like PASCO's, so the visitor watches the hour on the ground pass panel by panel. Story: "walk the plot, mark the line, leave with a plan you trust." Image type is the same as the reference: photographs (high-key, documentary), aerial included.

### (3) KV checklist (every item is on the 1440 × 900 first screen and visible)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Heavy tagline + smaller sub-line on one baseline | "Measured on the ground, marked where you can see it." (Outfit 600 50px) + "One visit, one plan" (Outfit 400 32px, umber) | y 140–205, x from 163 | none (plain load, no reveal) | — |
| 2 | Six 505px tall panels, 8px gaps, r4 | Six photo panels: pin · stakes · **key scene** · instrument · fence tape · aerial | y 245–750, x 40–1400 | accordion `flex-grow` 0.8s `cubic-bezier(.4,0,.2,1)` | 02, 03, 01, 04, 05, 06 |
| 3 | Open square panel with horizontal caption + 34px circle arrow | Panel 3 open: surveyor at the tripod + client with folded plan by the pin; caption "Which sites a visit suits" + white circle → `#sites` | panel 3, 505 × 505 at x 382 | auto-advance 3500ms, pauses on hover/focus/hidden tab; static = panel 3 | **01** |
| 4 | White upright vertical labels on closed panels | "Boundary pins", "Stakes", "The tripod", "Fence line", "From above" (vertical, 20px/600 white, bottom-left) | each closed panel | out 0.15s / caption in 0.6s after 0.1s | 02, 03, 04, 05, 06 |
| 5 | Transparent 100px header, logo left, utility row above nav right | Wordmark + small sub-line left; utility row (language switch + small sky pill "Request a visit"); anchor nav (Sites · The hour · Fees · Stories · FAQ) | y 0–100 | none | — |
| 6 | Faint pink-to-cyan wash behind everything, fading to white | Same wash (`#FDF3F6` → white → `#EAF7FC`), fading to white under the strip; block 2 eyebrow "Sites" peeks at y ≈ 860 | full first screen | none | — |

Panel content (DOM order = desktop order; panel 3 open by default):
| Panel | Image | Vertical label | Open caption (link) |
|---|---|---|---|
| 1 | 02 boundary pin | Boundary pins | Find the pins already in the ground → `#hour` |
| 2 | 03 stakes and string | Stakes | Mark the line where you can see it → `#hour` |
| 3 | **01 key scene** | The visit | Which sites a visit suits → `#sites` |
| 4 | 04 total station | The tripod | One hour, one tripod, five stages → `#hour` |
| 5 | 05 fence tape | Fence line | When a fence and a line disagree → `#notes` |
| 6 | 06 aerial lot | From above | The plan you take home → `#takeaway` |

---

## 3. Colour (PASCO codes kept; two swaps with reasons)

| Role | Hex | Source token | Use | Share of a page |
|---|---|---|---|---|
| Base | `#FFFFFF` | tok(a) base | page ground | ~60% |
| Wash | `#FDF3F6` → `#FFFFFF` → `#EAF7FC` at 115°, fading to white by 900px | tok(a) pink-to-cyan wash | behind header, tagline and strip only | (first screen ~62%) |
| Pale band | `#ECF6FF` | tok(a) owned-media band | T3 request band, FAQ ground strip, single-note meta box | ~12% |
| Main | **`#594E45`** umber (row hex, palette Utsubushi) | replaces tok(a) `#004295` | eyebrow text + 60px rule, outline buttons, chevrons, footer band | ~8% (footer) |
| Sky | `#64B5EB` | tok(a) pill | the single CTA pill only (header small + band large) | < 1% |
| Stake accent | **`#D9622B`** survey-tape orange | replaces tok(a) red "PDF" chip | outline chip "Story" on note rows, 6px dots in "takeaway", hover underline | < 0.5% |
| Heading ink | `#1F1A16` | tok(a) `#000000` (warm, within 5% lightness) | headings, pill label | text |
| Body | `#333333` | tok(a) `#333333` | body text | text |
| Muted | `#6B625A` | derived from main | dates, captions | text |
| Rules | `#DCDCDC` | tok(d) | 1px rules, table lines, row lines | 1px |

- **Why the main colour changes:** PASCO's `#004295` deep blue is within a few degrees of Tomari Marina's navy `#003C88` (recent theme; common rule: avoid recent main colours) and the plan row fixes `#594E45`. Umber takes **exactly** the blue's roles and share (labels, outline buttons, footer); nothing else changes. Sky pill and pale band stay PASCO's exact codes: in a survey firm they read as "sky over the lot".
- **Why the chip colour changes:** the reference red "PDF" chip becomes survey-tape orange, same size and outline style, still < 0.5%.
- No beige: white dominates; the only tinted ground is the pale blue band. No section has a saturated background.
- **First-screen saturation:** reference measured **2.7%** `tok(a)`. Design target **≤ 6%**; hard gate `python3 scripts/check-first-screen.py screenshots/home-desktop.webp --max 15`. Colour comes from the photographs; their grade is muted (pale grass, white sky, umber/graphite clothing; the only saturated items are the small orange pin cap in photo 02 and the sky pill).
- Contrast: body `#333` on white 12.6:1; umber `#594E45` on white 8.0:1 and on `#ECF6FF` 7.4:1; ink on sky pill 8.3:1; white on umber footer 8.0:1.

---

## 4. Type

- **Direction: sans.** Latin display **Outfit** (variable, 400–600), Latin body **Source Sans 3** (variable, 400–600). Both OFL, bundled woff2 in `assets/fonts/`, listed in theme-meta.json `fonts[].files` with license files, named in readme.txt.
- CJK: **Noto Sans TC** (zh-TW) and **Noto Sans JP** (ja), weights 500 and 700, **subset** woff2 to the characters used in the zh-TW / ja demo content and patterns (use the Hokuto/Hada replacement subset workflow; the old zh subset script is broken).
- All faces declared in **theme.json `settings.typography.fontFamilies[].fontFace`** (not only `wp_enqueue`), so editor iframe and front end load the same files. Because style.css uses `:lang(` rules, copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` unchanged and `require_once` it in functions.php. Must pass `check-editor-fonts.mjs` in en and zh-TW.
- Stacks:
  - en / fr / de display: `"Outfit", "Helvetica Neue", Arial, sans-serif`; body: `"Source Sans 3", "Helvetica Neue", Arial, sans-serif`.
  - zh-TW display: `"Outfit", "Noto Sans TC", "PingFang TC", "Microsoft JhengHei", sans-serif`; zh-TW body: `"Source Sans 3", "PingFang TC", "Microsoft JhengHei", sans-serif` (no bundled zh face, no JP face in body: repo contract).
  - ja display: `"Outfit", "Noto Sans JP", "Hiragino Sans", "Yu Gothic", sans-serif`; ja body: `"Source Sans 3", "Hiragino Sans", "Yu Gothic", "Meiryo", sans-serif`.
  - CJK sizes ≈ 0.75 × English for headings ≥ 2rem; CJK body line-height **1.85**; fr/de `hyphens: auto` on body and headings.
- theme.json fontSizes (max ≥ 4.25rem):
  | slug | size | use | token |
  |---|---|---|---|
  | small | 0.8125rem | dates, captions, footer links (tok 13.6px root) | tok(b) |
  | base | 1rem | body, rows (16px, tok rows) | tok(b) |
  | medium | 1.375rem | open-panel caption, quotes | — |
  | large | 2.25rem | H2 (36px) | tok(b) H2 |
  | x-large | 3.125rem | T4 tagline (50px) | tok(b) H1 |
  | xx-large | **4.5rem** | the three hour figures, 404 figure | — (theme max) |
- Weights / line-heights: H1 600 / 1.3; H2 600 / 1.3, letter-spacing 0.04em Latin, 0.1em CJK (tok 3.6px = 0.1em); H3 600 1.25rem / 1.4; body 400 1rem / **1.8** (tok rows are 16px/500/1.3, too tight for paragraphs; rows in note lists keep 16px/500/1.3 exactly); figures Outfit 300 4.5rem / 1.
- Eyebrow (T4 labels everywhere): Outfit 500 **1rem**, letter-spacing **0.1em** (tok 1.6px), colour `#594E45`, then a **60 × 1px** rule in the same colour, 24px gap, inline-flex `align-items:center` `tok(b)(f)`. Eyebrow words stay Latin in every language (Sites, The hour, On the ground, Owners & builders, Take away, Fees, Notes, FAQ, Request a visit); headings are translated.
- Buttons: outline 0.875rem (14px) Source Sans 3 600, height 38px, padding 0 44px 0 24px, 1px `#594E45` border, radius 4px, white ground, chevron 6px at right 16px `tok(b)(d)`. Pill: see T3.

Header (`tok(c)`): 100px, transparent over the wash, `position:absolute` on home only (static elsewhere). Left: wordmark "Sokuten Survey" Outfit 600 1.625rem ink, under it "Land survey · since 2009" Source Sans 3 0.6875rem muted with a 1px umber underline 100% wide (echo of PASCO's logo sub-line; our own text). Right, two rows: utility row (language switch `EN | ZH | JA | FR | DE` (each language's own name in its demo content) 0.8125rem, active in umber with 1px underline; then small sky pill "Request a visit" 180 × 40 r20) and the anchor nav (Sites · The hour · Fees · Stories · FAQ, Source Sans 3 600 0.875rem, 32px gaps). One top menu only. Under 960px: wordmark + "Menu" button (CSS `content:"Menu"` allowed) opening the core navigation overlay; the sky pill moves into the overlay.

Footer: umber `#594E45` band, centred wordmark (white, 1.375rem), link row (Privacy · Terms · Spring list · Notes · Request a visit, 0.8125rem white, chevrons), address + hours line, © line 0.75rem. Copies PASCO's centred footer structure, not its text.

---

## 5. Home page

### First screen (1440 × 900)
- 0–100: transparent header (section 4).
- 140–205: T4 tagline row (KV #1).
- 245–750: T1/T2 strip (KV #2–#4), panel 3 open with photo 01.
- 750–900: wash fades to white; block 2 starts at y 850 with its eyebrow "Sites ———" visible at x 163.
- Forbidden on the first screen: table, form, search box, large centred heading, saturated fills, cutouts.

### Block order (landing-longform, one CTA "Request a visit")
| # | Pattern / anchor | Purpose | Layout and photos | Copy (en) |
|---|---|---|---|---|
| 1 | `front-strip` | key visual | T4 tagline + T1/T2 strip, photos **02, 03, 01, 04, 05, 06** | 20 words + 12 captions |
| 2 | `front-sites` `#sites` | which sites a visit suits | Content 1200 (`padding-inline:120px` tok(c)). Eyebrow "Sites", H2 "Which sites a visit suits", 60-word intro in a 7/12 column. Then **three photo cards** in 3 columns, gap 24px: photo 4:3, r4, with a centred white caption (Outfit 600 1.375rem) over a veil `rgba(0,0,0,.32)` (PASCO exhibition cards, tok(e)); under each card a 45-word paragraph. Cards: "A plot before you build" **07**; "A boundary read two ways" **08**; "Land you are about to buy" **09**. Under the row: one line with a 6px orange dot, "Not for us: court disputes and estates over 2 ha; we will name someone who does them." | 60 + 3 × 45 + 25 |
| 3 | `front-hour` `#hour` | how the hour is spent | Two columns 5/12 + 7/12. Left: eyebrow "The hour", H2 "How the hour on the ground is spent", then three figures stacked with sp-count, each Outfit 300 4.5rem ink + 0.875rem label: **60** min on site · **5** stages · **1** plan; under them photo **10** at 3:2, r4. Right: five prose paragraphs (not a timeline graphic, no numbers in circles, no connecting line), each opening with the time in umber Outfit 500 ("0–10 min") on its own line, 40–50 words each, 40px apart; last line: plan follows within 10 working days. | 230 |
| 4 | `front-ground` | parallax pause | `alignfull` cover, **photo 11** (wide staked lot, figure at a tripod in the far distance, white sky), min-height 640px desktop / 56vh mobile, **`sp-parallax`, `--sp-par: 10%`** (mobile 6%), dim 0. Foreground (static, not in the moving layer): white panel r4, 440px wide, padding 32px, bottom-left at x 120 / 64px from the bottom: eyebrow "On the ground" + one sentence 1.375rem "Most of the hour is walking. The instrument only comes out once we have seen the line." | 30 |
| 5 | `front-voices` | owners vs builders | Eyebrow "Owners & builders", H2 "Two kinds of client, one visit". Two columns 6/12 each, gap 24: photo 4:5 r4 (**12** owner at kitchen table with the plan; **13** builder checking a string line), then H3 + 60-word paragraph + a quoted line in medium 1.375rem with the speaker (Corinne Abara, owner / Rhea Merrow, Merrow & Daughters Build). Columns are **top-aligned**, no stagger. | 2 × 90 |
| 6 | `front-takeaway` `#takeaway` | what you leave with | Photo **14** flat lay at 16:9, r4, in 7/12 left; right 5/12: eyebrow "Take away", H2 "What you leave with", three short entries each led by a 6px orange dot: the field sketch (that day), the marked line (stakes and caps that stay), the measured plan (within 10 working days, PDF + paper copy). | 110 |
| 7 | `front-fees` `#fees` | fees and hours | Eyebrow "Fees", H2 "Fees, hours and area". **Fee table** full content width (1200), 6 rows from section 0, columns Service / What it covers / Price; price column right, `white-space:nowrap`. Under it two lines: credit rule ($180 credited within 60 days) and hours/area (Mon–Fri 8:30–17:30 office; visits Mon–Sat from 7:30; within 40 km). Outline button "All fees →" to /fees. No photo, no reveal on the table. | 60 + table |
| 8 | `front-notes` `#notes` | stories | PASCO news list (tok(b)(d)): eyebrow "Notes", H2 "Stories from the field" left, outline button "All notes" right on the same row. Query Loop, 4 posts, **text rows only**: date column 140px (0.875rem muted), title 16px/500/1.3, orange outline chip "Story" or "Field note" after the title (0.75rem, 1px `#D9622B`, r10, padding 0 8px), 1px `#DCDCDC` rule under each row, row padding 30px 0. | Query Loop |
| 9 | `front-faq` `#faq` | objections | Eyebrow "FAQ", H2 "Before you book". Five `core/details`, 1px rules, summary Outfit 500 1.125rem with umber chevron; 40–60 words each (Do I need to be there? What if it rains? Will you talk to my neighbour? Is the visit fee credited? How far do you travel?). | 250 |
| 10 | `front-request` | the single CTA | **T3 band**, photo **15**, eyebrow "Request a visit", H2 "Book an hour on your plot", three lines (what to send: address, deeds or old plan if you have one, two dates that suit), sky pill → /request-a-visit/. Footer follows flush. | 50 |

English home ≈ 900 words; ≥ 3 narrative paragraphs ≥ 20 words (blocks 2, 3, 5). CJK home ≥ 500 characters.
**Home image positions: 15** (02, 03, 01, 04, 05, 06, 07, 08, 09, 10, 11, 12, 13, 14, 15), all different. ≥ 8 rule satisfied.

### Comparison with recent themes
| # | Kango College | Tomari Marina | Nodo Clinic | Aya Paper | **Sokuten Survey** |
|---|---|---|---|---|---|
| 1 | hero photo + notice card | hero | hero, white vertical strips on photo | framed 3-cell hero | **tagline + 6-panel accordion strip** |
| 2 | three-cell glyph band | statement | opening | shop | **three veiled photo cards** |
| 3 | quote strip | pinned 3-step berths | complaint ruled rows | papers rows | **figures + prose hour** |
| 4 | teaching-day rows | dawn parallax | three walk photos | counter parallax | **parallax lot with white panel** |
| 5 | admits | harbour board table | pace sentence | weights list | **two voices, 4:5 pair** |
| 6 | lab | crew | corridor parallax | wrap cells | **flat-lay takeaway** |
| 7 | parallax band | logbook | roster | pair | **fee table** |
| 8 | notes | booking close | stories | visit | **dated note rows with chips** |
| 9 | open-lab close | — | notes | journal | **FAQ details** |
| 10 | — | — | visit | ring close | **rounded-top pale band** |
Why not alike: no ruled-row index right under the hero (Aya, Nodo); no pinned steps (Tomari); no vertical strips laid over one photo (Nodo; ours are six separate photographs in an accordion); no framed cells (Aya, Kango). Our hero is an animated six-photo accordion, which none of them has; the close is a rounded-top pale band with a pill, not a ring, a board or a card. The parallax sits at position 4 between prose blocks, with a white panel foreground, unlike Kango's band (7) or Nodo's corridor (6).

---

## 6. Inner pages (12 + archives)

Every page: header → T4 head line (title + sub-line, padding-left `clamp(40px, 11.32vw, 163px)`, 40px below header) → body (content 1200, 120px side padding) → T3 band → umber footer. No sidebar.

1. **About** `/about/` (`page-about`): T4 "A small firm that walks the line" / "Brookmere, since 2009". **Mini strip** 4 panels (16 office, 17 GNSS slope, 18 drafting hands, 04 instrument; open = 16), 360px tall, same motion. Three narrative sections (Ines Calloway founds the firm in 2009 after twelve years with a county survey office; why one visit before any quote; how plans are drawn and signed). People: the 7 names as a two-column definition list (name Outfit 600, role + one sentence), **no portraits, no grid of faces**. Photo 17 at 3:2 between sections two and three. Band photo 15.
2. **The visit** `/the-visit/` (`page-visit`): T4 "The hour on the ground" / "60 minutes, 5 stages, 1 plan". Mini strip (10, 03, 05, 02; open = 10). The five stages as prose sections with time eyebrows (same as home block 3, 80 words each); "What to have ready" list; "After the visit" (sketch, note, plan in 10 working days); "If it rains" paragraph. sp-count figures (60 / 5 / 1). Band 15.
3. **Fees** `/fees/` (`page-fees`): T4 "Fees" / "Six prices, written down". Full fee table (same 6 rows, same numbers), then what each includes in prose, credit rule, travel note, payment (invoice after the plan, 14 days). Photo 14 at 16:9 above the notes. Band 15.
4. **FAQ** `/faq/` (`page-faq`): T4 "Questions before a visit" / "Ask us anything else by phone". Ten `core/details` on a `#ECF6FF` strip (r4, padding 48px). Photo 09 3:2 beside the intro. Band 15.
5. **Request a visit** `/request-a-visit/` (contact, `page-contact`): T4 "Request a visit" / "Two dates and an address are enough". Two columns: left the request steps as prose (send address, deeds or an old plan if you have one, two dates; Priya Nandakumar replies within one working day); right the office card (address, phone, email, hours lines, area 40 km). Photo 08 4:3 in the body. The T3 band here uses **photo 01** cropped 1:1 and the pill is `mailto:visits@sokuten.example?subject=Visit%20request`. No form plugin required.
6. **Spring list** `/spring-list/` (newsletter = early-booking waitlist, `page-newsletter`): T4 "The spring list" / "Early dates before the calendar opens". Why spring and autumn fill first (prose 120 words), what joining means (one email in February and one in August, no other mail), sky pill "Join the spring list" (mailto with subject "Spring list"). Photo 17 3:2. Band 15.
7. **Notes** `/notes/` (posts page, role `posts`, content empty): `home.html` template: T4 "Notes" / "Stories and field notes", then PASCO-style dated rows (as home block 8) with chips, 10 per page, pagination numbers + outline buttons. Band 15.
8. **Single note** (`single.html`): T4 = title + date as sub-line; category chip above; featured image 16:9 r4 at 1200; text column 720px, body 1.0625rem/1.8; prev/next as two outline buttons; band 15.
9. **Category / Tag archive** (`archive.html`, `category.html`, `tag.html`): T4 "Stories" (category name) / "Category" (or "TAG"), dated rows; band 15.
10. **Thanks** `/thanks/`: T4 "Thank you" / "Priya will reply within one working day". Mini strip (01, 06, 14, 15; open = 01). Two lines on what happens next; band with **photo 12**.
11. **Privacy** `/privacy/`, 12. **Terms** `/terms/`: T4 head, legal text in a 720px column, h2 1.375rem, no reveal; band 15.
13. **404**: T4 "Off the line" / "This page is not on our plan", xx-large "404" figure, outline button home.

Demo content: theme-meta `pages` home, about, news (→ /notes/), article (→ story 1), category (→ Stories), tag (→ boundary), newsletter (→ /spring-list/), contact (→ /request-a-visit/). Categories: Stories, Field notes. Tags: boundary, pins, setting-out, topographic, subdivision, buying. Each post has one category and 2 tags. Featured images: story 1 = 05, story 2 = 13, story 3 = 07, story 4 = 02, field note 1 = 10, field note 2 = 17.

---

## 7. Responsive

- **≥ 1200px:** as specified.
- **768–1199px:** strip height 440px, margin 24px, labels 16px tok(b), caption 1.125rem; content padding 48px; T3 band columns `minmax(280px, 40%) 1fr`, gap 56px.
- **< 768px (390 first screen):** the strip becomes a **horizontal scroll-snap row** (matches the row's `first_screen: horizontal-scroll-strip`): `display:flex; overflow-x:auto; scroll-snap-type:x mandatory; gap:8px; padding-inline:20px`; each panel `flex: 0 0 78vw; aspect-ratio: 4/5; scroll-snap-align:start`; the key panel (photo 01) gets `order:-1` so it is first. **No vertical labels and no absolutely positioned text** (`.ss-panel__label {display:none}`); the caption moves **below** each image in normal flow: Outfit 600 1rem ink with an inline 24px umber outline circle arrow. No autoplay, no width animation, no sp-reveal inside the row. Header 64px; tagline main line 2rem/1.3, sub-line wraps below at 1.25rem. Expected first screen: header, two-line tagline, sub-line, panel 01 with the next panel peeking ~12%.
- **Tables:** the fee table at ≥ 782px is `width:100%` of the 1200 content (full width of the column), `table-layout:auto`, price column `white-space:nowrap; text-align:right; width: 1%`, padding-right 0; nothing clipped at 800 and 1280. Under 782px every table stacks: each row becomes a block, cells `display:block`, the service name as a heading line, "What it covers" under it, price right-aligned on its own line; the header row hidden (`thead` visually hidden, data via a visible first line).
- Three-column cards → one column (gap 32px); two-voice pair → one column; hour columns → one column (figures in a row of three at 3rem); T3 band → one column, photo first at 100% width (1:1), radius 40px top corners, padding 56px 20px; parallax min-height 56vh, `--sp-par: 6%`.
- No horizontal overflow at 390 and 1280 (`html, body {overflow-x: clip}`); the scroll-snap row scrolls inside itself only.

---

## 8. Scroll techniques (sp-scroll; ≤ 3 kinds per page; hero has no reveal)

PASCO has no scroll-triggered effects (stage-a, tok(g)); its only motion is the strip. So the reveals reuse the strip's own timing: `--sp-dur: .8s`, easing `cubic-bezier(.4,0,.2,1)` (tok(g)), distance `--sp-dist: 20px`.
| Effect | Class | Where | Source | Trigger / time / easing |
|---|---|---|---|---|
| Parallax | `sp-parallax` on the cover | home block 4 (photo 11); also the About photo 17 figure (`--sp-par: 8%`) | PASCO strip (photo drives the motion; the slow 0.8s widening becomes a slow drift) | CSS scroll-driven `view()`, fallback IO + translate3d; continuous, linear; `--sp-par: 10%` desktop, `6%` < 768px |
| Rise | `sp-reveal sp-reveal--up` + parent `sp-stagger` | block 2 (three cards), block 5 (two columns), block 6 (text column), block 10 text column only (not the photo) | tok(g) timing | IO, 0.8s, `cubic-bezier(.4,0,.2,1)`, 20px, stagger 0.12s |
| Count | `sp-reveal sp-count` | block 3 figures 60 / 5 / 1; The visit page figures | — | IO, 1.2s easeOutCubic |
Not on: block 1 (hero), the fee table, the FAQ, legal pages, note rows, the mobile scroll row. Copy `pipeline/assets/sp-scroll/` unchanged; tune only CSS variables. Must pass `check-parallax.mjs` (≥ 6px parallax delta on desktop and mobile, 0 under reduced motion; ≥ 3 reveals hidden before entry).

**Parallax (required) detail:** block 4 `wp:cover {className:"sp-parallax ss-ground", minHeight:640}` with background photo 11 (`.wp-block-cover__image-background` is the moving layer); foreground = the white panel (static inner container). Style `--sp-par:10%`; `@media (max-width:767px){.ss-ground{--sp-par:6%; min-height:56vh}}`. Reference counterpart: PASCO's open panel slowly enlarging its photograph (0.8s ease); here the wide lot photograph drifts slower than the page.

---

## 9. Images (18, Grok, one at a time, read each one)

**STYLE** (exact, every prompt):
`high-key documentary photograph, soft overcast daylight, white sky, pale dry grass and light bare soil, muted natural colours, umber, sand and graphite workwear, small accents of survey-tape orange only on pin caps, clean modern international suburban setting, diverse adults, calm candid moment, 35mm lens, gentle contrast, no text, no letters or numbers on any object, no logos, no brand marks, no signage, no Japanese elements`

No cutouts. Each ≤ 300 KB, ≤ 2000px, webp; one readme line each (AI-generated, CC0). Square images are composed with the subject in the central vertical third so 163 × 505 slivers still read.
| ID | File | Subject / composition | Ratio | Home | Other pages (never twice on one page) |
|---|---|---|---|---|---|
| 01 | `kv-visit.webp` | **KEY:** surveyor in umber jacket at a total station on a tripod on a staked lot; the client beside a white boundary pin holds a folded plan, looking along the line; string lines on pale soil; both in the central third | 1:1 | **yes** strip 3 (open) | Thanks strip; Request band |
| 02 | `pin.webp` | boundary pin with orange cap in pale grass, low angle, a boot at the edge | 1:1 | **yes** strip 1 | The visit strip; story 4 |
| 03 | `stakes.webp` | wooden stakes and taut white string across light soil, receding diagonal | 1:1 | **yes** strip 2 | The visit strip |
| 04 | `instrument.webp` | total station close, a hand on the focus knob, white sky behind | 1:1 | **yes** strip 4 | About strip |
| 05 | `fence-tape.webp` | measuring tape stretched along a timber fence base, gloved hand | 1:1 | **yes** strip 5 | The visit strip; story 1 |
| 06 | `aerial-lot.webp` | top-down view of a pale lot with a staked string rectangle and a tiny figure | 1:1 | **yes** strip 6 | Thanks strip |
| 07 | `site-plot.webp` | empty suburban plot before building, stakes, soft houses behind | 4:3 | **yes** sites card 1 | story 3 |
| 08 | `site-boundary.webp` | two gardens divided by a low hedge, a survey rod at the corner | 4:3 | **yes** sites card 2 | Request a visit body |
| 09 | `site-buy.webp` | person walking a gently sloping field with a folded paper map | 4:3 | **yes** sites card 3 | FAQ |
| 10 | `gate.webp` | surveyor and owner reading papers together at a garden gate, morning | 3:2 | **yes** hour | The visit strip (open); field note 1 |
| 11 | `wide-lot.webp` | very wide staked lot, string lines, a small figure at a tripod far away, 60% white sky | 21:9 (2000 × 857) | **yes** parallax | — |
| 12 | `owner.webp` | homeowner at a kitchen table unfolding a large plan (lines only) | 4:5 | **yes** voices | Thanks band |
| 13 | `builder.webp` | builder checking a string line against a stake with a spirit level | 4:5 | **yes** voices | story 2 |
| 14 | `takeaway.webp` | flat lay on pale wood: folded plan, three orange pin caps, field notebook, pencil, tape | 16:9 | **yes** takeaway | Fees; Thanks strip |
| 15 | `handover.webp` | surveyor handing a folded plan to a client at the edge of a lot, both smiling | 1:1 | **yes** request band | band on all inner pages except Request and Thanks; Thanks strip |
| 16 | `office.webp` | small bright drafting office, two people at a large table with plans, blank screen | 3:2 | — | About strip (open) |
| 17 | `gnss.webp` | GNSS rover pole on a grassy slope, surveyor walking, wide sky | 3:2 | — | About body (parallax figure); Spring list; field note 2 |
| 18 | `drafting.webp` | hands drawing a plan with a scale ruler, lines only | 4:3 | — | About strip |

Per-page check: Home 15 distinct (01–15). About 16, 17, 18, 04, 15. The visit 10, 03, 05, 02, 15. Fees 14, 15. FAQ 09, 15. Request 08, 01. Spring list 17, 15. Thanks 01, 06, 14, 15 (strip) + 12 (band). Notes rows have no images; single note = featured image + band 15 (story featured images are never 15).

---

## 10. Similarity to the reference (target 80%)

| Dimension | PASCO (token) | Sokuten Survey |
|---|---|---|
| Ground | `#FFFFFF` + faint pink-to-cyan wash, ~62% (a) | `#FFFFFF` + same wash `#FDF3F6`→`#EAF7FC`, ~62% |
| Main colour | `#004295` labels, outline buttons, footer, <1% first screen (a) | `#594E45` same roles and share (reason §3) |
| Pill / band | `#64B5EB` pill r25 260×50, `#ECF6FF` band (a)(d) | identical codes and sizes; pill text ink |
| Text / rules | `#000` / `#333` / `#DCDCDC` (a)(d) | `#1F1A16` / `#333333` / `#DCDCDC` |
| Saturated first screen | 2.7% (a) | target ≤ 6%, gate 15% |
| H1 | 50px + 32px sub, same baseline, lh 1.3, gap 30px, pad clamp(40px,11.32vw,163px) (b) | identical sizes/geometry; Outfit 600/400 (sans direction) |
| H2 | 36px 700 lh 1.3 ls 0.1em (b) | 2.25rem 600 lh 1.3 ls 0.04em Latin / 0.1em CJK |
| Eyebrow | Poppins 500 16px ls 1.6px + 60×1 rule (b)(f) | Outfit 500 1rem ls 0.1em + 60×1 umber rule |
| Header | 100px transparent, utility row above nav (c) | identical structure; pill instead of search |
| Strip | 6 panels, 1360 wide, 505 tall, gap 8, r4, 163/505 flex (c)(d)(e) | identical |
| Strip gradients | 56px left edge, 90px bottom 50% black (e) | identical |
| Captions | vertical 20px/700 white, horizontal caption + 34px circle (b)(f) | vertical 20px/600 white, caption + 34px circle |
| Motion | 0.8s cubic-bezier(.4,0,.2,1), 3500ms, caption 0.15s / 0.6s+0.1s (g) | identical |
| Photo cards | 596×250, r4, white centred caption over veil (e) | 3 × 4:3, r4, same caption and veil |
| News rows | date col, 16px/500/1.3, 1px `#DCDCDC`, red outline chip (b)(d) | identical; orange chip |
| Buttons | outline 14px, 38px, 1px, r4, chevron (b)(d) | identical in umber |
| Band | full width, r60 top only, 619px, image 520 left, text at x 750 (d)(e) | identical; photo instead of illustration |
| Footer | deep-blue band, centred wordmark + link row (structure) | umber band, centred wordmark + link row |
| Spacing | content 1200 at 120px padding, block gaps 100px (c) | identical |
| Shadows | none (d) | none |
| Scroll effects | none besides the strip (g) | parallax + rise + count using the strip's timing (required by pipeline) |

Photos and copy are our own; nothing from PASCO's assets, text or logo is used.

---

## 11. Home acceptance checklist

1. First screen 1440: header 100px with utility row + anchor nav; T4 tagline 50px + 32px sub on one baseline; **six** photo panels 505px tall, 8px gaps, r4; panel 3 open (photo 01, key scene readable: tripod, surveyor, client with folded plan, boundary pin); white vertical labels on the five closed panels; caption + 34px white circle on the open one; pink-to-cyan wash; "Sites" eyebrow visible near the bottom.
2. With `?sp-motion` the strip advances every 3.5s with a 0.8s ease, pauses on hover/focus; static (`?sp-static`, reduced motion, no JS, editor) shows panel 3 open and still.
3. 390px: header, tagline, sub-line, then the scroll-snap row starting with photo 01; captions below images; **no vertical or absolutely positioned text**, nothing overlapping (auto-gates).
4. Blocks in the order of §5, anchors `#sites`, `#hour`, `#fees`, `#notes`, `#faq`, `#takeaway` work from the header menu.
5. Block 4 parallax passes `check-parallax.mjs` on desktop and mobile; reduced motion = 0px.
6. Fee table full width at 800 and 1280, prices nowrap right-aligned, not clipped; stacked under 782px. Six rows with the exact prices of §0.
7. T3 band last before the footer: `#ECF6FF`, 60px top corners only, photo 15 520 × 520, one sky pill "Request a visit" with ink text; footer umber, flush.
8. Colours per §3; saturated first screen ≤ 15% (target ≤ 6%); no navy, no beige ground.
9. Fonts: Outfit / Source Sans 3; zh-TW Noto Sans TC, ja Noto Sans JP in headings; same in editor and front end; xx-large 4.5rem present (hour figures).
10. 15 distinct images on home, none repeated; no text/logos in photos; all from the STYLE string.
11. ≥ 250 English words, ≥ 3 narrative paragraphs; numbers (60 min, 5 stages, $180, $1,250, $160, $720, $1,650, $25, 60 days, 10 working days, 40 km, hours) identical with §0.
12. One CTA label only ("Request a visit") in header pill and T3 band; no other filled buttons.
