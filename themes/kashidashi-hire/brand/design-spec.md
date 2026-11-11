# Kashidashi Hire: design spec (stage 1, opus)

Row b27-6 · landing (landing-longform, horizontal-strip archetype) · construction plant hire · five languages (en, zh-TW, ja, fr, de) · font_direction **sans** · IMAGERY **photo** (low-key documentary).
Reference: https://www.aktio.co.jp/ (only reference; tokens in `brand/reference-tokens.md`, screenshots in `brand/ref/`). Photos, copy and wordmark are our own. We copy no aktio assets, text or logo.

## 1. Signature techniques (borrowed, obvious at a glance)

### S1. Slant-cut logo tab + left-margin wedge (aktio first screen, `ref/aktio-first.png`)
- **What aktio does:** a red 430x110 logo block whose right edge is cut by `clip-path: polygon(0 0, 94% 0, 87% 100%, 0 100%)`. It joins a red column 105 px wide that runs down the left margin. That column widens with a long diagonal to ~220 px under the hero (y 675-900). The hero photo is inset from the column and bleeds off the right edge.
- **Ours (home, header + hero):** a pine `#465746` tab, 430x110 (mobile 230x64), with the same polygon. White wordmark "Kashidashi Hire" in Schibsted Grotesk 700 at 1.5rem, and under it "Plant hire yard" in 0.75rem/500, tracked 0.08em. The wedge is an absolutely positioned decorative `div.kh-wedge` behind the hero, pine, `clip-path: polygon(0 0, 105px 0, 220px 100%, 0 100%)`, from y 110 to y 900 at 1440 wide. The hero photo starts at x 105.
- **Do not weaken:** the wedge must be solid pine, not a tint, and its diagonal must be visibly long (≥ 115 px horizontal travel). The tab must touch the top edge and the wedge with no gap. Radius 0.
- **Down the page:** mist `#E7EBE8` wedges (aktio `#E8E8E8` margin wedges) sit on the left margin behind the Finder panel and on the right margin behind the FAQ: 180→60 px wide, 600 px tall.
- **Inner pages (all 8 content pages):** a page head with the pine wedge (105→160 px), an inset photo 2.36:1 → 3:1 bleeding right, and the H1 on the photo's right.

### S2. Two-cell dock on the hero's lower edge (aktio search dock)
- **What aktio does:** a pale translucent frame (white 55%, 10 px padding) straddles the hero foot. It holds two red cells, 420x78 and 675x78, each with a slanted notch top-left.
- **Ours:** the frame is `rgba(255,255,255,.55)` with 10 px padding, at x 158-1284 and y 520-616 (it overlaps the photo bottom by 60 px and sits on the white below by ~0). Cell A, 420x78, pine `#465746`: grid glyph + "Browse the fleet" (anchor #fleet). Cell B, 676x78, deep pine `#2E3A2F`: "Next free week · Mon 24 Nov" on the left, plus a white 0-radius link button "Request dates →" at 220x50 on the right. **No input fields.** Notch: a 14x14 corner cut `clip-path: polygon(14px 0,100% 0,100% 100%,0 100%,0 14px)`.
- **Do not weaken:** two cells of different width, solid colours, a visible pale frame, overlapping the photo edge.
- **Inner pages:** a single-cell dock (pine, 520x78, notch) on the lower edge of every inner page head photo. Each carries one page-specific action: Fleet "Check a week", Hire week "Request dates", Rates "Ask for a site quote", Yard "Visit the yard", Stories "Read the Foundry Row hire", FAQ "Ask the yard", Request "Call 06:00-18:00", Newsletter "Join the yard board".

### S3. Grey finder panel with three flat tabs (aktio product guide, `ref/aktio-s900.png`, `ref/scroll-aktio-tab-*.png`)
- **What aktio does:** a `#EAEAEA` panel, 1170 wide with 50 px padding. Three equal tabs 64 px tall with 3 px gaps: idle tabs are `#CCC`, the active tab is white with a 7 px red top bar and merges into a white tile area. Content fades in over 400 ms.
- **Ours (home #fleet):** a mist `#E7EBE8` panel, 1170 wide, padding 50. Tabs read "By machine / By job / By site". Idle tabs `#C9D0CA` with ink text; the active tab is white with a 7 px `#465746` top bar. The tile area is white with 40 px padding. Use CSS-only radio tabs; the panel fades 400 ms ease (`:checked` + opacity) and shows final state with no JS and in the editor (first tab open).
  - By machine: 6 photo tiles (P08-P13) in a 3x2 grid, **4:3 photos**, r0, caption under each (machine name 1rem/600 + "from €xxx / week" 0.875rem). Each tile has a 1px `#C9D0CA` outline and a pine 14 px slanted corner notch top-left (aktio catalogue tiles).
  - By job: 6 text tiles 254x100 (outline + notch): Trenching, Footings, Landscaping, Demolition clear-out, Road edge, Muck-away.
  - By site: 4 ruled rows: Terraced street, School extension, Riverside path, Yard-to-yard relocation.
- **Do not weaken:** the 7 px bar, flat grey idle tabs, and an active tab fused to the white area. Never use pills or rounded tabs.
- **Inner pages:** Fleet uses the full finder (all 3 tabs, 12 tiles by machine). Stories uses the finder with tabs "By machine / By job / By street" filtering 4 story rows.

Supporting (not counted): the **diagonal two-tone contact band** (aktio `ref/aktio-s4500.png`) closes the home page and repeats on Fleet, Rates, Yard and FAQ. **Black micro-tags** (11-12px/700 white on `#151A16`) sit over hairline-ruled rows on the notice bar, the rates glance, the journal and FAQ.

## 2. Key visual concept

### (1) Reference first screen (aktio)
- **Draws:** a real dusk photograph of the company's own depot (louvred facade, big lettering, sky) inset from a red slanted tab-and-wedge frame. Two black strips carry the headline at the right. A pale-framed two-cell dock (find a branch / find a product) sits on the photo's foot, a vertical "SCROLL" label at the bottom-left, and a notice bar under the photo.
- **Story:** "a rental company that proposes, not just lends." We own the yard and the machines, so start by finding a machine or a branch.
- **Signature motion:** four hero photos crossfade (28 s CSS loop, 1.3 s linear fade); the header compresses from 110 to 80 px after 350 px of scroll; tab content fades in at 400 ms.

### (2) Our conversion scene (construction plant hire, same composition, same motion idea, photographs)
Our own yard at first light, low-key. A yard coordinator hands a machine key and a clipped hire sheet to a site supervisor beside a compact excavator. Two more yard photographs crossfade behind it: the dawn line of machines, and a machine strapped on a low-loader leaving the gate. The pine tab and wedge frame the inset photo exactly as aktio's red frame does. The headline sits at the right on dark strips. The dock offers the visitor's two first moves: browse the fleet, or see the next free week and request dates. The notice bar is the "yard board", and below it a peeking strip shows what is out this week. Story: *the yard sends plant out for the weeks a site needs it. Pick the machine, see the hire week, request dates once.*

### (3) KV checklist (home first screen, 1440x900, `?sp-static`; every item implemented and visible)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Slanted red logo tab | Pine tab 430x110, polygon(0 0,94% 0,87% 100%,0 100%), white wordmark + "Plant hire yard" | x 0-430, y 0-110 | header 110→80 px via CSS `animation-timeline: scroll()` over 0-350 px; static where unsupported (no JS listener) | none |
| 2 | White nav bar + square search button | White bar, 6 anchor links (Fleet, Hire week, Rates, Yard, FAQ, Request) at 0.875rem/500 `#333`, plus a square 110x110 (80 when compact) pine "Request dates" button with a calendar glyph: the one repeated CTA | x 430-1440, y 0-110 | hover colour 0.3 s | none |
| 3 | Left wedge + vertical "SCROLL" label | Pine wedge 105→220 px; vertical "Scroll" (0.75rem, 0.2em tracking, white) with 1px × 80 px line + diagonal tick | x 0-220, y 110-900; label x 70-90, y 530-675 | line scales 0→1 (transform scaleY) 1.2 s `cubic-bezier(.22,1,.36,1)` on load | none |
| 4 | Inset dusk depot photo, 4-photo crossfade | Inset 2.36:1 photo stack, r0, bleeding right; overlay `#0F140F` 30% | x 105-1440, y 110-675 | 3-slide CSS crossfade, 24 s loop, 1.2 s linear fade, delays 0/8/16 s; `sp-parallax` `--sp-par: 8%` on the stack | **P01** (default visible / reduced-motion), P02, P03 |
| 5 | Headline lines on black strips, right-aligned | Two lines, each on an ink `#151A16` strip, padding 10px 22px, white Schibsted Grotesk 300 at `clamp(2.5rem, 5vw, 4.5rem)` (4.5rem = 72px at 1440): "Plant for the weeks" / "a site needs it." Kicker above in 0.75rem/600, 0.16em tracking, mist: "PLANT HIRE · BY THE WEEK" | right-aligned to x 1284, y 170-380 | load: opacity 0→1 + translateY 24→0, 0.9 s `cubic-bezier(.22,1,.36,1)`; no sp-reveal | none |
| 6 | Two-cell finder dock | Pale frame + pine "Browse the fleet" + deep pine "Next free week · Mon 24 Nov / Request dates →" (see S2) | x 158-1284, y 520-616 | fade + rise 16 px, 0.7 s, delay 0.8 s | none |
| 7 | Notice bar under the photo | Mist `#F3F5F3` bar 1170x80, padding 0 30: rust info dot, "Yard board", date "10 Nov 2026", black tag "Fleet", "Two 3-tonne excavators back Friday, free from Monday.", "See the board ›" | x 135-1305, y 695-775 | none | none |
| 8 | Peeking banner strip | "Out this week" strip: cards 297x186 (1.6:1), r0, 12 px gap, neighbours peeking; native scroll-snap; top of strip visible at y ~830 | y 830+ | native scroll only, no reveal on children | P04, P05, P06, P07 |

Notes: mobile at 390 px puts the tab at 230x64 and the wedge at 24→56 px (a still-visible pine diagonal strip). The hero becomes 4:3 inset 24 px. The headline strips go below the photo on white (stacked, normal flow, no absolute labels over text). The "Scroll" label is hidden. The dock becomes two full-width stacked cells (78 px each) with the frame kept. No form, table or search box on the first screen.

## 3. Home blocks (order, anchors, photos, copy weight)
| # | Block (anchor) | Purpose | Layout | Photos | Copy |
|---|---|---|---|---|---|
| 1 | Header | brand + anchor menu + repeated CTA | S1 tab + white bar + square CTA | none | 6 links |
| 2 | Hero KV | scene + first moves | KV checklist 3-6 | P01-P03 | headline 7 words + kicker |
| 3 | Yard board bar | live-feeling notice | KV #7 | none | 1 sentence |
| 4 | Out this week (`#out`) | proof the yard is busy | peeking strip 4 photo cards + 1 pine text card "12 machines out · 31 on the yard" (`sp-count`) | P04-P07 | each card: machine + site type + "back Fri" tag |
| 5 | The yard (`#yard`) | narrative: who we are | 5/7 split: left text column (H2 + 3 paragraphs ≥ 40 words each), right photo 4:5 r0 with mist wedge behind its left edge; three figures under the text: "2004", "43 machines", "1 yard" (`sp-count`) | P14 | ~150 words |
| 6 | Finder (`#fleet`) | which machines a schedule can cover | S3 grey finder panel, mist wedge on the left margin | P08-P13 | H2 + 1 line + captions |
| 7 | Hire week (`#week`) | how a hire week runs | **horizontal strip** of 5 day panels Mon-Fri (290x340, 1px rule, pine 7px top bar on Monday only), scroll-snap on mobile, numbers 01-05 in Schibsted 300 at 3rem; `sp-stagger` + `sp-reveal--up` (desktop grid row, not a scroller, so reveal allowed; on mobile the scroller children get no reveal: apply reveal via the ≥782px media query only) | none | ~25 words per day |
| 8 | Parallax band | breath + promise | full-bleed Cover 520 px (mobile 360), P15 night return, overlay 40%; quote left-aligned in white Schibsted 300 2.5rem, plus attribution "Imani Okafor, yard coordinator" | P15 | 1 sentence |
| 9 | Rates at a glance (`#rates`) | price anchor without a table | 2-column hairline-ruled rows (aktio news style), black micro-tag per row (DIG, CARRY, LIFT, POWER), machine left, "€520 / week" right `nowrap`; 4 rows + link "All 7 rates and what's included ›" | none | 4 rows + 1 line "Weekly hire, Mon to Fri, delivery inside 25 km included." |
| 10 | Stories (`#stories`) | proof | 3 rows: thumbnail 3:2 225x150 left, tag + title + 1 line right, hairline rules | P16, P17, P18 | 3 x 25 words |
| 11 | FAQ (`#faq`) | objections | 6 `details` rows, ruled, mist wedge on right margin | none | 6 Q/A, 30-50 words each |
| 12 | Request band (`#request`) | the single conversion | S4 diagonal band: `linear-gradient(115deg, #465746 0 58%, #2E3A2F 58%)` 300 px; white card 950x165 with H2 "Tell us the site and the week." + one sentence + pine button 300x70 "Request dates" → /request/ | none | 25 words |
| 13 | Footer | info + yard board signup | deep pine `#2E3A2F` band: address, hours, phone; **newsletter slot** (email + submit) titled "Yard board by email"; menu; legal links | none | — |

Home images: P01, P02, P03, P04, P05, P06, P07, P08, P09, P10, P11, P12, P13, P14, P15, P16, P17, P18 → 18 slots (≥ 8 met; P02/P03 only show in the crossfade, so count statically visible ones: P01, P04-P18 = 16).
English word count: yard narrative 150 + week 125 + FAQ 240 + stories 75 + band 25 ≈ 600 (≥ 250, ≥ 3 narrative paragraphs in #yard).

### Order vs recent themes (and why it differs)
| Theme | First screen | Blocks 2-6 |
|---|---|---|
| Tana Furniture | three-pane stage | idea, make cards, parallax showroom, marquee, alternating ways |
| Nagisa Grill | foot wordmark | concept scene, day rows, kitchen duo dark, tables |
| Kamotsu Academy | giant word + docked card | since strip, tall cards, sticky photo rows, road timeline, fees table |
| Yawara Rheumatology | half-and-half + photo strip | problem, method parallax, team strip, proof |
| **Kashidashi Hire** | **slant tab + wedge + inset photo + two-cell dock** | **notice bar, peeking strip, yard narrative, tabbed finder panel, horizontal hire-week strip** |
Why not similar: no giant word, half split, three-pane, foot wordmark, sticky photo, vertical timeline, tall rounded cards or price table on home. The finder tabs and slanted geometry belong to no recent theme. The hire week is a horizontal day strip, not a road or vertical timeline. Kamotsu's docked card is a single card on a giant word; ours is a two-cell dock on an inset photo.

## 4. Inner pages (≥ 8 content pages + legal)
Every content page head: pine wedge + inset photo + H1 at `clamp(2.25rem,4vw,3.5rem)` Schibsted 300 + single-cell dock (S1+S2 continuation). Photo heads must not repeat inside one page.
1. **Fleet** `/fleet/` (head P08): full S3 finder (12 machine tiles: P08-P13 reused + text tiles for 6 more), a spec row per machine (weight, dig depth, transport), contact band. Signature: S1, S2, S3, S4.
2. **Hire week** `/hire-week/` (head P02): the Mon-Fri strip, expanded with a sub-row per day (who, what time); "Before Monday" checklist (site access, ground, fuel policy); P05 inline.
3. **Rates** `/rates/` (head P03): the **rates table** (7 rows, see §8), full container width ≥ 782px, price column `white-space:nowrap; text-align:right`, stacked cards on mobile; included / not included lists; delivery zones; contact band. No reveal on the table.
4. **The yard** `/yard/` (head P14): history (2004 → today), 6 named people as ruled rows (name, role, one line; no 4-person grid), a P16 image, hours and how to visit; contact band.
5. **Stories** `/stories/` (head P17): S3 finder variant (By machine / By job / By street) with 4 story rows (§8); each story is a post (1 required post = the Foundry Row story).
6. **FAQ** `/faq/` (head P18): 12 questions in 3 grouped ruled lists with black micro-tags (BOOKING, ON SITE, RETURN); mist wedge on the right margin; contact band.
7. **Request dates** `/request/` (contact; head P01 cropped 3:1): left column = what to send (site postcode, machine, week, access) + hours + phone; right column = `shippress_form_slot` kind contact with mailto fallback. No reveal.
8. **Yard board** `/newsletter/` (head P15): waitlist / early-access: "Get first call on returning machines." Newsletter slot (email + submit), 3 bullets on what arrives (Friday returns list, once a week, no offers).
9. **Journal** `/journal/` (posts page, role posts, empty content): ruled rows with black tags.
10. Privacy `/privacy/`, Terms `/terms-of-hire/`, Thanks `/thanks/` (plain head with wedge only, no photo, no motion).
Pages with all of S1+S2 signature: Fleet, Hire week, Rates, Yard, Stories, FAQ, Request, Newsletter (8 ≥ 4). S3 on Fleet + Stories; S4 on Fleet, Rates, Yard, FAQ.

## 5. Colour (source: aktio role relationships; hue changed to pine)
| Role | aktio | Ours | Share (first screen) |
|---|---|---|---|
| Main (tab, wedge, dock A, CTA) | #CC0000 | **#465746** | ~14% |
| Deep main (dock B, footer, band) | #B00000 | **#2E3A2F** | ~4% |
| Base | #FFFFFF | #FFFFFF | ~38% |
| Pale panel | #EAEAEA / #F5F5F5 | **#E7EBE8 / #F3F5F3** | ~8% |
| Idle tab / borders | #CCCCCC | **#C9D0CA** | — |
| Ink (strips, tags, footer text) | #000000 | **#151A16** | ~3% |
| Text | #333333 | **#2F3530** | — |
| Accent | teal #00B5A0 (~2%) | **rust #B2552F** (≤ 2%: info dot, link underline on hover, "back Fri" tags) | ≤ 2% |
| Photo | dusk depot photo | low-key photo, overlay #0F140F 30% | ~33% |
Why the hue changes: the row requires a quiet palette (pine ) and a first-screen saturated share ≤ 15% (aktio's red measures 21%). The *relationship* stays the same: one strong solid brand colour on the tab, wedge and dock, plus a deeper shade, white, pale grey panels and black strips. Pine HSV S≈0.20, so the measured saturated share is < 5%. **Saturation cap on the first screen: 15%** (`scripts/check-first-screen.py`).

## 6. Type (font_direction: sans)
- Latin display/headings: **Schibsted Grotesk** 300/500/700. Latin body: **Source Sans 3** 400/600. Both are self-hosted woff2 loaded via theme.json `fontFamilies` + `fontFace`, so the editor and front end match.
- Stacks: heading `"Schibsted Grotesk", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`; body `"Source Sans 3", system-ui, -apple-system, "Segoe UI", sans-serif`.
- zh-TW: `:root:lang(zh-TW)` heading stack `"Schibsted Grotesk", "Noto Sans TC", sans-serif` (bundled Noto Sans TC subset, ); body `"Source Sans 3", "PingFang TC", "Microsoft JhengHei", sans-serif` (system, no bundled CJK). ja: heading `"Schibsted Grotesk", "Noto Sans JP", sans-serif` (bundled subset); body `"Source Sans 3", "Hiragino Sans", "Yu Gothic", sans-serif`. No Mincho/ anywhere. CJK sizes = 0.75 × Latin, body line-height 1.85. fr/de `hyphens:auto`. Copy `shared/inc/editor-lang.php` → `inc/editor-lang.php` (style.css uses `:lang(`).
- Scale (theme.json): xs 0.75rem · s 0.875rem · base 1rem (body 16px / lh 1.7, token 1.7) · m 1.25rem · l 1.75rem · xl 2.25rem (H2, weight 300, token "H2 ~34px light") · xxl 3rem · display `clamp(2.5rem, 5vw, 4.5rem)` (max **4.5rem** ≥ 4.25rem). Tags 0.75rem/700 uppercase 0.06em. Buttons 0.9375rem/600 (token 15px bold).

## 7. Spacing, radius, decoration, motion (tokens)
- Header 110 → 80 px (token c). Container 1170 (`contentSize` 1170px, wide 1335px), inner panel padding 50. Section gap 100 px (mobile 64). Notice bar 80 px tall.
- Radius **0** everywhere (token d); borders 1px `#C9D0CA`; no shadows; outline button 1px `#2F3530` 360x50.
- Decorations: tab polygon, wedge polygon, 14px corner notches, vertical Scroll label, mist margin wedges, black micro-tags, 7px tab bar, 115° diagonal band.
- Motion: crossfade 24 s / 1.2 s linear (token g: 28 s / 1.3 s; shortened to 3 slides); tab fade 400 ms ease (token 400 ms swing); header 0.4 s ease; hover 0.3 s.

## 8. Fixed facts (same on home, inner pages, five languages)
- **Name / place:** Kashidashi Hire, Gate 3, Ferris Road Works Yard, Eastmere (fictional, neutral). Founded **2004**. Delivery included inside **25 km**.
- **Hours:** yard Mon-Fri **06:00-18:00**, Sat **07:00-12:00**, Sun closed. Phone +00 20 7946 0388 (fictional), email hire@kashidashi-hire.example.
- **Fleet:** 43 machines; "12 out · 31 on the yard" on the home strip.
- **Rates (per hire week Mon-Fri, ex VAT, delivery inside 25 km included):** 1.5 t micro excavator €410 · 3 t compact excavator €520 · 6 t midi excavator €780 · 1 t tracked dumper €260 · 6 t forward-tipping dumper €340 · 1.5 t ride-on roller €300 · 20 kVA site generator €150 (7 items; home shows the first 3 + dumper 1 t).
- **People (6):** Imani Okafor (yard coordinator), Tomasz Wierzbicki (founder, 2004), Lucía Ferrer (hire desk), Kenji Arai (fitter, workshop lead), Grace Mensah (delivery driver, low-loader), Ruth Halvorsen (accounts, terms).
- **Stories (4):** Foundry Row terrace drains (3 t excavator, 2 weeks); Brookside School extension footings (6 t + dumper, 3 weeks); Riverside path resurfacing (roller + 1 t dumper, 1 week); Ashgrove allotments clear-out (1.5 t micro, 1 week). Home shows the first 3.
- **Hire week (5):** Mon 06:30 delivery and handover with the hire sheet · Tue first check call · Wed fitter visit if needed · Thu extend or call off by 15:00 · Fri collection from 14:00, sheet signed off.
- **Next free week shown:** Mon 24 Nov.

## 9. Images (16 + 2 = 18 unique, all photographs, 0 cut-outs; ≤ 300 KB, ≤ 2000 px)
STYLE (identical for every image): `Low-key documentary photograph, first light or dusk, cool overcast sky, deep greens and charcoal with muted steel grey, soft directional light, fine film grain, natural colour, 35mm lens, eye level, real working construction plant-hire yard, international neutral setting, diverse adults in plain workwear and hi-vis without logos, no text, no lettering, no logos, no brand marks, no signage, no Japanese elements.`
| # | Subject / composition | Ratio | Used (page · block) | Home |
|---|---|---|---|---|
| P01 | coordinator hands key + clipped hire sheet to site supervisor beside a compact excavator, yard at first light, subjects right third | 2.36:1 | Home hero (default slide); Request head | ✔ |
| P02 | dawn line of compact excavators and dumpers on a wet yard, long perspective | 2.36:1 | Home hero slide 2; Hire week head | ✔ |
| P03 | compact excavator strapped on a low-loader leaving the yard gate, dusk lights | 2.36:1 | Home hero slide 3; Rates head | ✔ |
| P04 | micro excavator in a narrow terraced back-street trench | 1.6:1 | Home strip | ✔ |
| P05 | tracked dumper on a muddy school site, morning | 1.6:1 | Home strip; Hire week inline | ✔ |
| P06 | ride-on roller on a fresh path by a river, overcast | 1.6:1 | Home strip | ✔ |
| P07 | site generator and lighting at dusk on a building plot | 1.6:1 | Home strip | ✔ |
| P08 | 3 t compact excavator three-quarter view on gravel | 4:3 | Home finder; Fleet head + tile | ✔ |
| P09 | 1.5 t micro excavator, tracks retracted, yard | 4:3 | Home finder; Fleet tile | ✔ |
| P10 | 6 t midi excavator bucket close, wet steel | 4:3 | Home finder; Fleet tile | ✔ |
| P11 | 1 t tracked dumper side view | 4:3 | Home finder; Fleet tile | ✔ |
| P12 | 6 t forward-tipping dumper, front | 4:3 | Home finder; Fleet tile | ✔ |
| P13 | ride-on roller drum detail | 4:3 | Home finder; Fleet tile | ✔ |
| P14 | the yard office window at first light, coordinator with clipboard, machines behind | 4:5 | Home #yard; Yard head | ✔ |
| P15 | machines returning through the gate at night, headlights in drizzle | 21:9 | Home parallax band; Newsletter head | ✔ |
| P16 | fitter servicing an excavator in the open workshop | 3:2 | Home story thumb; Yard inline | ✔ |
| P17 | supervisor and driver checking a hire sheet on a tailgate | 3:2 | Home story thumb; Stories head | ✔ |
| P18 | empty muddy tracks on a cleared plot after collection | 3:2 | Home story thumb; FAQ head | ✔ |

## 10. Scroll effects (sp-scroll; hero has no reveal)
| Effect | Class | Where | Source / timing |
|---|---|---|---|
| Parallax (required) | `sp-parallax` | (a) **hero photo stack** (layer = the crossfade stack `.sp-parallax__layer`), `--sp-par: 8%` desktop, 5% at <782px; foreground headline and dock are NOT inside the layer. (b) Home parallax band Cover with P15, `--sp-par: 10%` (mobile 6%) | aktio has no parallax; it is our translation of its moving hero (28 s crossfade). CSS scroll-driven, IO fallback |
| Stagger rise | `sp-stagger` + `sp-reveal sp-reveal--up` | Finder tiles (By machine), hire-week day panels (≥782px only), story rows, FAQ list | our addition (aktio has none), 0.7 s, 0.12 s steps, `cubic-bezier(.22,1,.36,1)`, ≤ 24 px |
| Count | `sp-reveal sp-count` | "12 out · 31 on the yard", "2004", "43 machines" | 1.2 s easeOutCubic |
| (optional) wipe | `sp-reveal sp-reveal--wipe` | mist margin wedges (wrapper only, clip-path stays on the inner div) | 0.9 s |
Not animated: hero (CSS load animation only), notice bar, peeking strip children, rates rows and table, forms, legal pages. Reduced motion: crossfade stops on P01, scroll label line static, all sp-* in their final state.

## 11. Responsive
- 390 px first screen: no vertical text, no absolute labels over text (Scroll label hidden, headline strips in normal flow below the photo, dock cells stacked). No horizontal overflow (wedge clipped inside `overflow-x:clip` on the hero wrapper).
- Rates table ≥ 782px: full container width (1170), price column `white-space:nowrap; text-align:right; min-width: 9ch`, never clipped. <782px: every table becomes stacked cards (label/value pairs via `display:block` rows with `data-label`, not CSS `content` text: put the labels in markup).
- Finder tabs at <600px: the tabs stay three flat equal tabs at 0.8125rem, and the tiles go to 2 columns. Hire-week strip: horizontal scroll-snap with peeking (no reveal on its children).
- Header at <782px: tab 230x64 + square CTA 64x64 + one menu toggle (exactly one top menu).

## 12. Forms (contract v1)
- Copy `pipeline/assets/forms/shippress-forms.php` → `inc/`, plus CSS/JS → `assets/`, and require it in functions.php.
- **Request dates (/request/)**: `shippress_form_slot( kind=contact, fallback = buffered literal mailto button "Email the hire desk" → mailto:hire@kashidashi-hire.example?subject=<forms_mail_subject_contact> )`. The fallback keeps its class/href and never links to /request/ itself. Suggested CF7/WPForms fields (shown in the copy above the slot): name, company, phone, email, site postcode, machine (select of the 7), hire week start (date), weeks (1-8), access notes (textarea), consent checkbox.
- **Newsletter (/newsletter/)** and the **footer** "Yard board by email": `shippress_form_slot( kind=newsletter, email=hire@kashidashi-hire.example, label=forms_email, submit=forms_subscribe, notice=forms_mail_notice, subject=forms_mail_subject )`. MailPoet / MC4WP are preferred, and CF7/WPForms work only with a dedicated newsletter form id. Without plugins, show a required email field + submit (native mailto POST) and the notice "This opens your mail app to send the request; you are not subscribed yet."
- Tokens → `--sp-form-*`: bg #FFFFFF, border #C9D0CA, text #2F3530, label 0.875rem/600, focus outline 2px #465746 offset 2px, error #B2552F text + 1px border, success #465746 on #F3F5F3, submit pine #465746 / hover #2E3A2F, radius 0, height 50. Dark (footer #2E3A2F): field bg #FFFFFF, label #E7EBE8, submit #FFFFFF with ink text, focus outline #E7EBE8.
- Copy keys for all five languages in inc/i18n (`L10N_SEMANTIC=1`): forms_email, forms_subscribe, forms_mail_notice, forms_mail_subject, contact_email, forms_success, forms_error_email.
- **No reveal on forms; no form on the home first screen** (the footer slot sits far below).

## 13. Similarity table (target 80%)
| Dimension | aktio | Kashidashi Hire |
|---|---|---|
| Main colour role | #CC0000 tab/wedge/dock, 13% | #465746 tab/wedge/dock, ~14% |
| Neutrals | #FFF / #F5F5F5 / #EAEAEA / #CCC / #000 / #333 | #FFF / #F3F5F3 / #E7EBE8 / #C9D0CA / #151A16 / #2F3530 |
| Logo tab | 430x110, polygon 94%/87% | same |
| Wedge | 105 → ~220 px | same |
| Hero | 1335x565 inset, 2.36:1, r0, bleeds right | same |
| Headline | lines on black strips, pad 10/20, right | lines on ink strips, pad 10/22, right |
| Dock | white 55% frame, 10 px, cells 420 + 675 x 78, notch | same (420 + 676) |
| Notice bar | 1170x80 #F5F5F5 | 1170x80 #F3F5F3 |
| Strip cards | 297x186, 12 px gap, peeking | same |
| Finder | #EAEAEA, 3 tabs 64 px, 7 px bar, 3 px gap | #E7EBE8, same geometry |
| Container / gap | 1170 / ~100 | 1170 / 100 |
| Radius / shadow | 0 / none | 0 / none |
| Body / H2 | 14 px lh 1.7 / ~34 px 300 | 16 px lh 1.7 / 36 px 300 (legibility for Latin) |
| Header motion | 110→80 at 350, 0.4 s | same (CSS scroll timeline) |
| Hero motion | 4-slide crossfade 28 s / 1.3 s | 3-slide 24 s / 1.2 s + parallax 8% |
| Tab motion | fade 400 ms | fade 400 ms |
| Contact band | red→maroon diagonal, white card 950x165, button 300x70 | pine→deep pine 115°, same card and button |
| Imagery | real photos, r0 | low-key real photos, r0 |

## 14. Home acceptance checklist
- [ ] Pine slant tab 430x110 touches the top-left and joins the pine wedge; the wedge diagonal is visible at 1440 and 390.
- [ ] Inset hero photo starts at x 105, bleeds right, 2.36:1, and shows P01 in `?sp-static`; headline on ink strips, ≥ 4.25rem at 1440.
- [ ] Two-cell dock (pine + deep pine, notches, pale frame) overlaps the photo foot; no inputs.
- [ ] Notice bar, "Out this week" peeking strip visible or starting within the first screen.
- [ ] Finder panel: 3 flat tabs, active tab white with 7 px pine bar, 6 photo tiles with notches; works without JS.
- [ ] Hire-week horizontal strip of 5 days; parallax band with P15; rates rows with nowrap prices matching §8; stories, FAQ, diagonal request band, footer newsletter slot.
- [ ] ≥ 8 images (16 visible), none repeated on the page, 0 cut-outs; ≥ 250 words, ≥ 3 narrative paragraphs.
- [ ] Exactly one top menu; the "Request dates" CTA repeats (header square, dock, band) and always points to /request/.
- [ ] First-screen saturated share ≤ 15%; `check-parallax.mjs` passes (hero + band); no reveal in the hero.
- [ ] 390 px: no overlap, no vertical labels, no horizontal overflow; auto-gates pass.
