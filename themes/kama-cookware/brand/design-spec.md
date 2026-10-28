# Kama Cookware — design spec (stage 1, binding for implementation)
Row b15-3 · type `store` (WooCommerce required, checkout must work) · archetype asymmetric-masonry · hero text-left-photo-right · nav split · first_screen full-bleed-photo-info-bar · page_structure alternating-longform · font_direction **serif** · IMAGERY **photo** (high-key).
Main reference: **yokanka.com** (https://yokanka.com/, S5-Style, confectionery product brand). Tokens: `brand/reference-tokens.md` (cited as [tok a–g]). Screens: `brand/ref/*.png`.
Rule: borrow structure, techniques, colour relationship and key-visual concept; never copy their photos, copy, logo or full page layout.

## 1. Signature techniques (three; must be obvious at a glance)

### T1. Diagonal staircase of product slabs on a pale void (yokanka first screen) → home hero
- Reference: five wide yokan slabs (460×219, 2.10:1) photographed top-lit on seamless pale grey, placed in a rising diagonal (+440px x, −130px y per step), drifting slowly left; small title + wordmark; vertical caption badge at left edge; small info card lower right [tok e, f].
- Ours: five cookware photos (2.1:1, radius 0, no shadow CSS — contact shadow baked into the photo) in the same rising staircase, bottom-left → top-right, across the right ~62% of the hero. Step: x +22% of the stage width, y −8.5vw (desktop). Each slab width 30vw (max 460px). Pale stage `#E8ECEB`; the photos' ground is the same pale grey so slabs read as objects on one surface.
- Must not be diluted: five slabs (not three), the diagonal (not a grid), the 2.1:1 ratio, pale ground filling the whole viewport, and the slow left drift.
- Mobile 390: staircase becomes a 3-slab diagonal (slabs 1,3,5, width 64vw, step x +14vw, y −16vw) placed under the text; no absolute-positioned text over photos.

### T2. Sticky 50% picture column with masked picture swap (yokanka About) → home "Which pan for which hob" scenes
- Reference: left 50% of viewport, full 900px-tall sticky portrait; as the right column scrolls through short scenes, the picture swaps, each new one opening through an expanding radial-arch mask (`--arch-h` 175→1200%, scale 1.06→1) [tok c, e, g].
- Ours: left column sticky (top 0, height 100vh, width 50%), 0.79:1 photo, radius 0. Right column: four scenes (Gas / Induction / Ceramic-radiant / Open fire & oven), each `min-height: 90vh`, padding 230/100 [tok c], numeral "(01)" Inter-like Source Sans 3 14px ls .04em [tok f], title Fraunces 27px/39 [tok b], 2 short paragraphs. Each scene contains its own photo figure stacked in the sticky column via `sp-reveal sp-reveal--mask` (gradient mask opening ≈ the arch) + scale 1.06→1 so the new pan photo "opens" over the previous one.
- Must not be diluted: the full-height 50% picture (not a small thumbnail), dark-ish photo grounds against the pale page (the reference's saturated portraits → our photos on slate/graphite counters), one picture per scene.
- Mobile: not sticky; each scene = photo (4:5) then text.

### T3. Single black gallery band with scale-in frames (yokanka event gallery) → home "Service counter" band
- Reference: the only inverted band on the page (black, ~1170px, ~9% of page); two rows of 3:4 frames scale 1.3→1 as it enters [tok a, e, g].
- Ours: band `#141B1B`, padding 160/160, heading in `#E8ECEB`; two rows of three 3:4 photos (seasoning, re-riveting a handle, re-tinning copper, sharpening, cleaning carbon steel, packing a returned pan), gap 24px, frames `sp-reveal sp-reveal--zoom` inside `sp-stagger`. This is the only dark band on home.
- Must not be diluted: full-width true dark band, 3:4 portrait frames, ~9% of page height.

### Supporting (not counted): giant wordmark marquee before footer
Two-tone "Kama Cookware" in Fraunces 9rem (desktop) / 4.5rem (mobile), `sp-marquee`, with rounded pills (radius 50px, 1px `rgba(27,35,35,.15)`) holding tiny 1.91:1 pan thumbnails between words [tok d, f]. Placed once per site, in the footer pattern (all pages).

### Continuation to inner pages (≥4, required)
| Page | Technique carried |
|---|---|
| Shop (WooCommerce archive) | T1: header = single wide 2.1:1 slab #1 floating on pale void, offset right-up; product images on the same pale ground |
| Which Pan (guide) | T2: sticky 50% picture with mask swap, four materials scenes (carbon steel, cast iron, copper, enamel) |
| Seasoning & Care | T2 again: sticky picture with three steps (wash / heat / oil); T3 small dark band with 3 frames |
| Repair & Service | T3: dark band of 3:4 service frames with zoom-in; price table below on pale |
| About / Workshop | T1 slab row (3 slabs, static diagonal) + numerals "(01)" feature rows |
| Journal | 2.1:1 wide cards with "(01)" numerals, hairline rows |
Footer wordmark marquee appears on every page.

## Key visual concept

### (1) Reference first screen — concept, story, signature motion
yokanka.com opens on a pale grey void (`#ECECEA`) with five slabs of yokan in a rising diagonal, each top-lit with a soft contact shadow, like exhibits on an empty stage. Small centred title and wordmark above; a 20px vertical caption badge at the left edge scrolling a caption and dates (18s linear); a tiny info card lower right. Story: "Is this yokan?" — a familiar, everyday object re-seen; the product alone carries the message. Motion: slabs glide slowly left along the diagonal; title characters fade in one by one with a blur 7→0 (stagger .1s, .5s, power2.out).

### (2) Our transposition (same composition, motion, image type)
A high-key pale slate counter (`#E8ECEB` ground, photographed seamless) holding five everyday cookware pieces — carbon-steel frying pan, cast-iron skillet, copper saucepan, enamelled casserole, olive-wood spatula+pan lid — each photographed from 35° above with a soft contact shadow, cropped 2.1:1, set in the same rising diagonal and drifting left. Story: "Is this the pan you'll still cook with in twenty years?" — the everyday pan re-seen as something kept and serviced. Image type: real photography, rectangular crops on the same pale ground (no cut-outs). Text sits left (row hero: text-left-photo-right); info bar along the bottom (row first_screen).

### (3) KV checklist (all six implemented and visible on the first screen 1440×900)
| # | Reference element | Our version | Position | Motion | Which image |
|---|---|---|---|---|---|
| 1 | Five product slabs, rising diagonal, 2.1:1 | Five cookware slabs, 2.1:1, same staircase | right 62% of viewport, bottom-left→top-right, behind nothing (text not overlapping) | whole staircase wrapper translates −40px→0 left drift on load (CSS keyframes 2.4s `cubic-bezier(.22,1,.36,1)`), then idle drift ±12px x, 18s ease-in-out alternate; reduced-motion: static | #1 carbon-steel pan, #2 cast-iron skillet, #3 copper saucepan, #4 enamel casserole, #5 olive-wood spatula on lid |
| 2 | Small title + wordmark | Wordmark "Kama Cookware" (Fraunces 20px ls .1em) + H1 Fraunces 4.25rem/1.08 + lede 2 lines | upper-left, col 1–5 of 12, top 22vh | CSS intro: H1 words opacity 0→1 + blur 6px→0, stagger .1s, .5s each (CSS only, no sp-reveal) | — |
| 3 | Vertical caption badge, left edge, scrolling | 20px-wide vertical rail "Seasoned · Serviced · Since 2016 · Harbour Street" in slate `#5F6E6E` 11px ls .2em, `writing-mode: vertical-rl` | left edge, mid height, desktop ≥1024px only (hidden <782px — no vertical labels on mobile) | `sp-marquee` inside rail, 18s linear | — |
| 4 | Small info card lower right | Full-width info bar (row first_screen): hours · service counter · free seasoning with every iron pan · "Shop pans" pill | bottom of first screen, height 64px, top hairline 1px `rgba(27,35,35,.15)` | none | — |
| 5 | Soft contact shadow under each slab | Baked into photos #1–#5 (STYLE requires it) | under each slab | none | #1–#5 |
| 6 | Pale grey void, black type, colour only in photos | `#E8ECEB` full-bleed, ink `#1B2323`, rust accent only on "Shop pans" pill hover | whole screen | none | — |
Photos #1–#5 are listed in §7 (all marked ★ home).

## 3. Colour [tok a] — relationship kept, hue cooled to the row palette (cool slate)
| Role | Reference | Ours | Share |
|---|---|---|---|
| Ground | `#ECECEA` | `#E8ECEB` (same lightness, −2% warmth → cool, avoids cream) | ~78% |
| Ink | `#000000` | `#1B2323` | ~3% |
| Dark band | `#000000` | `#141B1B` | one band ~9% of home |
| Secondary | — | `#5F6E6E` (row hex) — labels, numerals, hairlines, pills | ~4% |
| Surface (cards) | — | `#F4F6F5` | ~5% |
| Hairline | `rgba(0,0,0,.15)` | `rgba(27,35,35,.15)` | — |
| Accent | none (photos only) | `#8A4B2E` seasoned-iron rust, <1% (only CTA pill hover + active nav underline) | <1% |
First-screen saturated share: target ≤10% (reference 9.6%), hard cap 15% (`check-first-screen.py`). Copper photo #3 is the most saturated; keep it the smallest/highest slab if over.
Contrast: ink on ground ≥13:1; `#5F6E6E` on `#E8ECEB` 4.6:1 (OK for ≥14px labels).

## 4. Type (serif direction) [tok b]
- Latin display: **Fraunces** (variable, opsz on, wght 380–400, SOFT 0) — stands in for Marcellus' quiet roman. Latin body: **Source Sans 3** 400/500.
- Stacks (theme.json fontFamilies + fontFace, woff2 in assets/fonts, editor = front end):
  - heading: `"Fraunces", "Noto Serif TC", "Noto Serif JP", Georgia, serif`
  - body: `"Source Sans 3", "Noto Serif TC", "Noto Serif JP", system-ui, sans-serif` for Latin; `:lang(zh-TW)` body+headings → `"Noto Serif TC"`, `:lang(ja)` → `"Noto Serif JP"` (a serif for both headings and body in CJK; no sans-serif mixing). Ship zh-TW/ja subsets via fontFace; copy shared/inc/editor-lang.php (style.css uses `:lang(`).
- Scale (desktop / mobile): wordmark marquee 9rem/4.5rem; section H2 **5.75rem** (ref 92px) lh 1.02 ls .01em / 3rem; hero H1 4.25rem lh 1.08 / 2.6rem; "question" display 4.5rem (ref 72px) lh 1.2 ls .04em; H3 1.7rem (ref 27px) lh 1.45 ls .05em; body 1rem lh 1.8 (ref 16/28.8); nav 13px ls .15em; buttons 14px ls .14em, small 11px ls .2em; numerals Source Sans 3 14px ls .04em. Weight 400 everywhere (500 only for prices). No text-transform; caps typed when wanted.
- CJK: sizes ×0.75 of English, line-height 1.85; fr/de `hyphens:auto`.

## 5. Spacing & shape [tok c, d]
Container 1280 (wide), 1190 (lists), content 720. Section padding desktop 160/120 default; T2 scenes 230/100; dark band 160/160; mobile ×0.45. Radius **0** on all photos and cards; pills radius 50px, 1px hairline, padding 8×20; round icon buttons 50%. No box-shadows, no filters. Image ratios: hero slabs 2.1:1; sticky 0.79:1; gallery 3:4; thumbs 1.91:1; product images 1:1 on pale.

## 6. Home page

### First screen (1440×900)
Full-bleed `#E8ECEB` stage, 100vh−64px + 64px info bar. Split nav (logo centre, Shop/Which pan/Care left, Repair/Journal/Visit + cart right), 13px, no background. Text block left (top 22vh, max 520px): small slate label "(Kitchenware & service, Harbour Street)", H1 "Pans for every day, kept for twenty years." (copy final in stage 2), lede 2 lines, two pills (Shop pans / Book a service). Staircase right as T1. Vertical rail left. Info bar bottom. No table, form, search.

### Block order (home)
| # | Block | Purpose | Layout & photo | Copy |
|---|---|---|---|---|
| 1 | Hero (T1, KV) | Concept | as above; photos #1–#5 | H1 + 30w lede |
| 2 | Question statement | Brand story | centred-left display "Is this a pan you'll still use in twenty years?" 4.5rem, char-stagger (sp-stagger on word spans, sp-reveal--up); right-aligned 2 paragraphs; no photo | ~90w |
| 3 | Which pan for which hob (T2) | Core guide | sticky 50% left: photos #6 gas, #7 induction, #8 radiant/ceramic, #9 oven/open fire; 4 scenes right | 4×50w |
| 4 | Featured pans (asymmetric masonry) | Shop | 2-col masonry, offset second column +120px; 3 product cards (#10, #12, #13, 1:1 on pale) + 1 text card "Bring a pan back"; name, price, "(01)" | 4×20w |
| 5 | Service counter (T3 dark band) | Service | `#141B1B`, 2 rows × 3 frames 3:4: #14, #15, #16 / #17, #18, #21 | 60w |
| 6 | Service prices (pale) | Fixed prices | full-width table ≥782px, price column right/nowrap; mobile stacked | 6 rows |
| 7 | Seasoning parallax band | Mood + care promise | full-bleed `sp-parallax` Cover, bg #20, overlay `rgba(20,27,27,.35)`, white text left on the overlay, max 520px, no card | 40w |
| 8 | People (alternating rows) | Shop staff | 3 text rows with hairlines (no 4-person grid, no photo): Ines, Tomasz, Amara, name + role + 2 lines | 3×40w |
| 9 | Journal (3 wide cards) | Content | text-led hairline rows with "(01)" numerals, no photo | 3×25w |
| 10 | Visit / hours | Conversion | text left, map-free info list right, pill CTA | 40w |
| 11 | Wordmark marquee (footer) | Brand sign-off | supporting technique | — |
Home photo positions: #1–#5 (5), #6–#9 (4), #10–#13 (4), #14–#19 (6), #20, #21 = **21 positions**, ≥8 ✔, no repeats on home. Home ≥250 English words, ≥3 narrative paragraphs.

### Comparison with recent homes (kept distinct)
| Theme | Order | Why Kama differs |
|---|---|---|
| Kyugo Training | (see its spec) — training programmes, schedule-led | Kama is product/object-led, staircase hero, no schedule rows |
| Nemuri | hero → statement → symptoms rows → sticky-media method → parallax room → people pair → stories → fees → marquee → visit | Nemuri's sticky media is a stacked right column; ours is left 50% full-height with mask swap; no symptom rows; dark gallery band is new; marquee is a giant wordmark in footer, not a strip |
| Satei | hero → why hairline → calls → sticky split visit → adjusters → cases → fees table → FAQ → CTA | no hairline opener, no FAQ band, no cases rows |
| Niuke | hero → message → sticky 3-stop → ellipse rows → spec band → pricing → parallax stories → FAQ → CTA | no ellipse crops (radius 0 everywhere), masonry products instead of alternating ellipse rows |
| Komugi | rail hero → statement → week rows → floor photo → tickers → fees → journal → visit | no week rows, no name tickers; hero is a diagonal staircase not a rail |

## 7. Photos (18, Grok, one at a time; Read each; no text/logo/brands; ≤300 KB, ≤2000px, webp)
STYLE (single string for whole theme):
`High-key documentary product and kitchen photography, bright soft daylight from above-left, seamless pale cool grey (#E8ECEB) counters and walls, soft natural contact shadows, matte surfaces, carbon steel, cast iron, copper and enamel cookware, muted slate and graphite tones with small warm metal highlights, 35mm lens, shallow but not extreme depth of field, calm and clean, internationally neutral modern shop interior, diverse adult hands and people, no text, no logos, no brand marks, no packaging print, no Japanese elements`
| # | Subject / composition | Ratio | Used where (home ★) |
|---|---|---|---|
| 1 | Carbon-steel frying pan, 35° top view, centred, contact shadow, empty pale ground | 2.1:1 | ★ hero slab 1; Shop header |
| 2 | Cast-iron skillet, same | 2.1:1 | ★ hero slab 2 |
| 3 | Copper saucepan with brass handle, same | 2.1:1 | ★ hero slab 3 |
| 4 | Slate-grey enamel casserole with lid, same | 2.1:1 | ★ hero slab 4 |
| 5 | Olive-wood spatula resting on a steel lid, same | 2.1:1 | ★ hero slab 5 |
| 6 | Hand setting carbon-steel pan on gas burner, flame low, graphite counter | 0.79:1 | ★ T2 scene 1; Which Pan |
| 7 | Pan on black induction hob, hand adjusting control (no digits) | 0.79:1 | ★ T2 scene 2 |
| 8 | Enamel casserole on ceramic radiant hob, steam | 0.79:1 | ★ T2 scene 3 |
| 9 | Cast-iron skillet going into an oven, cloth-gloved hand | 0.79:1 | ★ T2 scene 4; Seasoning & Care |
| 10 | Carbon-steel pan product shot, side angle on pale ground | 1:1 | ★ featured product; WooCommerce product |
| 12 | Copper sauté pan product shot | 1:1 | ★ featured; product |
| 13 | Enamel casserole set top view, three sizes | 1:1 | ★ featured; product; Journal 01 |
| 14 | Hands wiping oil into a hot iron pan, light smoke | 3:4 | ★ dark band; Seasoning & Care |
| 15 | Craftsperson riveting a new handle on a pan, workbench | 3:4 | ★ dark band; Repair & Service |
| 16 | Re-tinning copper pan interior with torch | 3:4 | ★ dark band; Repair |
| 17 | Scrubbing carbon-steel pan with salt and brush at sink | 3:4 | ★ dark band; Seasoning & Care |
| 18 | Pans wrapped in paper on service counter, tag (blank) | 3:4 | ★ dark band; Repair |
| 20 | Wide shop interior: pale counters, pans on open shelves, daylight | 16:9 (2000×1125) | ★ parallax band; Visit header |
| 21 | Shop staff (Ines) handing a skillet to a customer at counter | 3:4 | ★ dark band frame 6; About people |
**Binding set = 18 photos: #1–#10, #12–#18, #20, #21** (#11 and #19 are not generated; #21 generated at 3:4).
- Home use: hero #1–#5; T2 #6–#9; featured 3 products #10, #12, #13 + 1 text card "Bring a pan back"; dark band 6 frames #14–#18 + #21; parallax #20; people rows text-led (names, roles, 2 lines each, no photo). Home photo positions = 5+4+3+6+1 = **19** (≥8 ✔), no repeats.
- Inner pages reuse photos but never twice on the same page.

## 8. Inner pages (≥8 + WooCommerce)
| Page | Key points |
|---|---|
| Shop (WC archive) | header: wide slab #1 on pale void + H1; product grid 3-col 1:1 images; filters only by material (pills) |
| Product (WC single) | 1:1 gallery left, text right, "free first seasoning for iron/carbon steel" note, care link |
| Which Pan | T2 sticky: four materials scenes (carbon steel #6, cast iron #9, copper #3, enamel #8); hob compatibility table (stacks on mobile) |
| Seasoning & Care | T2 sticky 3 steps (#14, #17, #9); T3 small dark band, 2 frames #15, #16; FAQ list |
| Repair & Service | T3 dark band 3 frames #15, #16, #18; full service price table; how to bring a pan back (4 steps as text rows, not step grid) |
| About / Workshop | 3-slab static diagonal (#2, #4, #5); story since 2016; people rows (7 named staff, alternating text rows) with #21 |
| Journal (index + 3 posts) | wide 2.1:1 cards: #13, #10, #12; numerals |
| Visit & Hours | #20, hours, address, service-counter drop-off rules |
| Cart / Checkout / My account | WooCommerce, pale ground, pills, radius 0 |
| Shipping & Returns | text page, hairline rows |

## 9. Fixed numbers (site-wide, all five languages identical)
- Founded **2016**, Harbour Street 14, Northbay (fictional, neutral).
- Hours: Tue–Sat 10:00–18:00, Sun 11:00–16:00, Mon closed; service counter drop-off Tue–Fri 10:00–17:00.
- Service prices (6): First seasoning (iron/carbon steel) €0 with purchase / €18 otherwise · Re-seasoning €24 · Rust removal + re-season €38 · Handle replacement / re-riveting €32 · Copper re-tinning (per 20 cm) €65 · Enamel inspection & lid knob €12. Turnaround 7–10 days.
- Demo products (6): Carbon-steel frying pan 26 cm €68 · Cast-iron skillet 24 cm €84 · Copper sauté pan 20 cm €210 · Enamel casserole 22 cm €145 · Olive-wood spatula €19 · Carbon-steel wok 30 cm €74.
- People (7): Ines Valdés (founder, buyer), Tomasz Wren (repair bench), Amara Osei (copper & tinning), Lin Hao (seasoning), Freya Lund (shop floor), Samir Haddad (online orders), Noor Bakker (journal & classes).
- Stories (3): a 40-year-old skillet re-seasoned; a café's six carbon pans serviced yearly; a copper pan re-tinned for a wedding gift.
- Process "bring a pan back" (4): drop off or post → inspect & quote in 2 days → work 7–10 days → collect, with care card.

## 10. Scroll effects (sp-scroll only; hero has no sp-reveal)
| Effect | sp-* | Where | Source & timing |
|---|---|---|---|
| Fade-up | `sp-reveal sp-reveal--up` (24px) | block 2 paragraphs, block 4 products (in `sp-stagger`), block 8 rows, block 10 | yokanka generic reveal: start top 88%, once, 2.3s power1.out → set `--sp-dur:1.6s`, ease `cubic-bezier(.25,.46,.45,.94)` [tok g] |
| Mask picture swap | `sp-reveal sp-reveal--mask` on T2 figures | block 3 sticky photos; Which Pan, Seasoning & Care | yokanka arch mask scrub 1000px → mask 1.2s ease-out, scale 1.06→1 |
| Zoom gallery | `sp-reveal sp-reveal--zoom` inside `sp-stagger` | block 5 dark band frames; Repair band | yokanka gallery scale 1.3→1 → sp zoom 1.06→1, 1.6s |
| Marquee | `sp-marquee` | hero vertical rail; footer wordmark | yokanka badge 18s linear; wordmark marquee (30s) |
Not on: hero, price tables, forms, legal text.

## 11. Parallax (mandatory)
- Block 7 "Seasoning parallax band": Cover block, full-bleed, min-height 80vh, class `sp-parallax`, background photo **#20** (wide shop interior), `--sp-par: 10%` desktop, `--sp-par: 6%` at <782px (kept on mobile). Foreground: H2 + 40w paragraph + pill, in a non-moving inner group, left-aligned max 520px, white text over overlay `rgba(20,27,27,.35)`.
- Reference counterpart: yokanka's scrubbed scale/mask motion on its large about portraits (1.06→1 over 1000px) — we translate it to a slower background against fixed text.
- Also Visit page header: `sp-parallax` with #20, `--sp-par: 8%`.
- Must pass check-parallax.mjs (≥6px delta, 0 in reduced motion).

## 12. Responsive
- 390px first screen: text first, 3-slab diagonal below, no vertical rail, no absolute labels over text; info bar becomes 2-line stacked.
- Price table ≥782px: full container width, price column `white-space:nowrap; text-align:right`, never clipped (800 & 1280 checked). <782px every table → stacked rows (label/value).
- No horizontal overflow at 390/1280; staircase drift uses transform only within `overflow:clip` stage.

## 13. Similarity table (target 80%)
| Dimension | yokanka.com | Kama Cookware |
|---|---|---|
| Ground | `#ECECEA` ~78% | `#E8ECEB` ~78% |
| Ink | `#000` | `#1B2323` |
| Dark band | `#000`, 1 band ~9% | `#141B1B`, 1 band ~9% |
| Accent | photos only, 9.6% sat. | photos + rust <1%, ≤10% sat. |
| Display type | Marcellus 400, H2 92px lh ~1.0 ls .92px | Fraunces 400, H2 5.75rem lh 1.02 ls .01em |
| Body | 16px lh 28.8 | 16px lh 1.8 |
| Nav / buttons | 13px ls 2px / 14px ls 2px | 13px ls .15em / 14px ls .14em |
| Container | 1280 / 1190 | 1280 / 1190 |
| Section padding | 120–300 | 120–230 (T2 230/100) |
| Radius | 0 photos, 50px pills | 0 photos, 50px pills |
| Hero imagery | five 2.1:1 slabs, diagonal, drift | five 2.1:1 slabs, diagonal, drift |
| Sticky picture | 50% × 100vh, 0.79:1, arch mask | 50% × 100vh, 0.79:1, mask reveal |
| Gallery | 3:4 frames, black band, scale 1.3→1 | 3:4 frames, dark band, zoom 1.06→1 |
| Reveal | y 28px, 2.3s power1.out | y 24px, 1.6s ease-out |
| Decoration | vertical badge, (01) numerals, wordmark marquee with pills | same three |

## 14. Home acceptance checklist
- [ ] First screen shows all 6 KV items: five 2.1:1 slabs in a diagonal, wordmark+H1 left, vertical rail (desktop), info bar, baked shadows, pale void.
- [ ] Saturated share ≤10% target (≤15% hard).
- [ ] T2 sticky 50% picture swaps 4 times with mask reveal; T3 single dark band with 6 3:4 frames.
- [ ] Parallax block 7 passes check-parallax (desktop + mobile).
- [ ] 19 home photo positions, no repeats; ≥250 English words; ≥3 narrative paragraphs.
- [ ] Prices identical to §9; table full-width, nowrap prices at 800/1280; stacked at 390.
- [ ] Fraunces + Source Sans 3 load via theme.json fontFace in editor and front; H2 ≥4.25rem.
- [ ] No sidebar, no form/table/search in first screen, no 4-person grid, no step grid, radius 0 photos.
- [ ] auto-gates.mjs en pass (stage 1 home-only).
