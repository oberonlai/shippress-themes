# Hayate Cycles: design spec (stage 1 spec, binding for implementation)

Slug `hayate-cycles`, bicycle shop and workshop for city commuters and weekend riders. Row b10-4: type **store** (WooCommerce required, checkout must work), page_structure **service-index**, first_screen top-bottom halves, hero text-left-photo-right, split nav, **real low-key photography**, palette Yanagi-nezumi `#747864` as the one muted accent, **font_direction sans** (Schibsted Grotesk + Inter, CJK Noto Sans TC / Noto Sans JP , no  anywhere).

References (see `reference.md`; numbers from `reference-tokens.md`, quoted as "token a–g"): **R1 Nagano Anzen Jidosha** https://naganoanzen.jp/ (S5-Style vehicles, motorbikes and bicycles, primary, ~80% similarity target) and **R2 Setouchi Cycle Stays** https://setouchi-cycle-stays-hiroshima.jp/ (secondary: capsule masks, dashed road line). We borrow structure, techniques, colour relationships, measured numbers and the key-visual concept. We do **not** copy photos, copy, logos or whole-page layouts. All photos are generated for this theme; all text is our own.

## 0. Fixed brand facts (every page and all five languages; never vary)

- **Hayate Cycles**, founded **2012** by mechanic **Lena Vos** and electrician-turned-mechanic **Samir Haddad**. Shop + workshop at **Kanaalstraat 27, 9000 Ghent, Belgium** (fictional address; a former print shop with a tall street window and a long workbench at the back). Currency **EUR** in every language; no converted amounts.
- Hours: **Tue–Fri 09:00–18:30, Sat 09:00–17:00, Sun & Mon closed.** Phone **+32 9 555 01 27**, `hello@hayate-cycles.example`.
- Workshop rules: free **15-minute safety check** at drop-off; written quote before any work; nothing beyond the quote without a phone call; tune-ups ready within **2 working days**; punctures and small fixes done while you wait when under **30 minutes**; any adjustment redone free within **30 days**.
- New bikes include a free fit session (otherwise €160). New bikes: free local delivery within **10 km**. Parts and accessories ship to BE / NL / LU for a flat **€7.50**.
- Saturday shop ride: every **Saturday 07:30** from the shop, **45 km**, no-drop, free. Commuter clinic: **first Wednesday of the month, 19:00**, free, **12 places**.
- No guarantees of results, awards, ratings, real media, real people or real brands. Frames, components and products are unbranded or our own fictional house line ("Hayate").

### Price list (8 items; identical on Home, Prices, service pages, products and all five languages)
| # | Service | Includes | Time | Price |
|---|---|---|---|---|
| 1 | Safety check | brakes, tyres, chain, bolts, lights; written note | 15 min | Free |
| 2 | Puncture repair | labour, tube or tyre extra | while you wait | €15 |
| 3 | Wheel true | per wheel, spoke tension balanced | same day | €20 |
| 4 | Basic tune-up | gears, brakes, wheel true, chain clean, bolt check | 2 working days | €69 |
| 5 | E-bike service | basic tune-up + motor/battery diagnostic, firmware, connectors | 2 working days | €119 |
| 6 | Full service | strip, clean, regrease bearings, new cables, full tune-up | 2 working days | €149 |
| 7 | Bike fit | 90-minute session, saddle/reach/cleats, written fit sheet | by appointment | €160 |
| 8 | Wheel build | labour per wheel, hand-laced and tensioned | 5 working days | €90 |

### Named people (7; About, service pages, stories)
| Name | Role | Shown on |
|---|---|---|
| Lena Vos | co-founder, head mechanic, wheel builder | About, Wheels, story 2 |
| Samir Haddad | co-founder, e-bikes and electrics | About, Workshop (E-bike), story 4 |
| Tomás Ferreira | bike fitter | About, Bike fitting, story 3 |
| Grace Okonkwo | shop floor, new bikes | About, Shop |
| Jonas Becker | mechanic, repairs and tune-ups | About, Workshop, story 1 |
| Mei-Ling Chen | service desk and bookings | About, Visit |
| Elif Yıldız | apprentice mechanic, leads the Saturday ride | About, Rides |

### Stories (4 blog posts; customers are fictional)
1. **"Eight thousand kilometres to work"**: Ines, 16 km each way along the canal; Jonas renews chain, cassette and chainrings after two years of daily riding (featured image S8).
2. **"A rear wheel that finally runs true"**: Lena rebuilds a 1980s steel touring wheel onto a new rim, 36 spokes, hand-tensioned (S5).
3. **"Twenty millimetres shorter"**: Tomás fits Marco's gravel bike; reach shortened by 20 mm, saddle lowered 6 mm, longer weekend rides feel easier (no health claims) (S2).
4. **"Getting an e-cargo bike through winter"**: Samir's checklist for connectors, battery storage and brake pads (S6).

### Products (WooCommerce, 5, our fictional house line)
| # | Name | Category | Price | Image |
|---|---|---|---|---|
| 1 | Hayate City 8 | Bikes › City | €980 | P1 |
| 2 | Hayate Gravel 2×10 | Bikes › Gravel | €1,640 | P2 |
| 3 | Hayate E-City Step-Through | Bikes › E-bikes | €2,890 | P3 |
| 4 | Hand-built Wheelset 32h | Wheels & parts | €540 | P4 |
| 5 | Commuter Light Set | Accessories | €65 | P5 |
Featured on home: 1, 2, 3.

### Process (workshop flow; Home process block and Workshop page)
01 Book online or call → 02 Drop-off and free 15-minute safety check → 03 Written quote, nothing extra without a call → 04 Work and test ride → 05 Pick-up with a short note of what was done. Shown as five hairline lines, never as a step grid or a timeline.

---

## 1. Signature techniques (three; all must be obvious at a glance, never "softened")

### T1. Hairline service index (R1 Service section; token b, c, d, f; `ref/nag-service-rows.png`, `ref/nag-photos-service.png`)
- **Reference**: section title "Service" in a wide Latin grotesk 40/48 700 with a tiny Japanese sub-label under it; then full-viewport-width rows separated by **1 px solid black rules running edge to edge**. Each row: a small "01" (20 px, top-aligned like a superscript) directly left of a huge bold name (60 px / 700 / line-height 1); a 3–4 line description in the third column with a **cobalt pill "more"** under it; a **3:2 photo** in the right column (25% of the width, radius 0). Row height ~313 px, padding 38 px top/bottom.
- **Ours (home block 2, `front-index`)**: title "Service" (Schibsted Grotesk 700 2.5rem / 1.2, letter-spacing 0.5px, colour text) + sub-label "Six things we do at the bench" (Inter 700 0.6875rem, margin-top 8 px). Then 6 rows: 01 New bikes · 02 Bike fitting · 03 Tune-ups · 04 Repairs · 05 Wheels · 06 E-bike care.
  - Row wrapper `.hc-index__row`: alignfull, `border-top: 1px solid #1D211B` (last row also border-bottom), padding `38px 6.12%` (token c), CSS grid `grid-template-columns: 50fr 526fr 352fr 384fr` (token c ratios), `column-gap: 0` except the photo column `margin-left: 64px` (token c). `align-items: start`.
  - Number `.hc-index__num`: Schibsted Grotesk 700 1.25rem, line-height 1, colour accent `#747864`, `padding-top: .35em`, `font-variant-numeric: tabular-nums`. Sits in column 1, i.e. directly left of the name (≈10 px gap).
  - Name `h3.hc-index__name`: Schibsted Grotesk 700 **3.75rem** (60 px, token b) line-height 1, letter-spacing -0.01em, colour text; ≤1100 px → 2.8125rem (45 px, token b).
  - Text column: Inter 500 1rem/2 (16/32, token b), letter-spacing 0.5px, colour text, 3–4 lines (~40 words). Under it a **price line** Inter 600 0.9375rem accent ("from €69"), then the pill.
  - Pill `.hc-pill`: Inter 700 0.875rem/1 (14/14), letter-spacing 0.5px, white on `#747864`, padding 10px 26px, radius 20px (≈103×36, token b), margin-top 20px; hover: background `#1D211B`. Label "more" in en (localised:  /  / Détails / Mehr).
  - Photo: figure 3:2, `object-fit: cover`, radius 0, no shadow (token d), in column 4. Figure has `background: #747864` and `sp-reveal sp-reveal--wipe` (see §8).
- **Must not be diluted**: rules are true 1 px ink (`#1D211B`, not grey, not inset to the container: edge to edge); names stay ≥ 3.75rem at 1440; numbers stay small (1.25rem) and top-aligned beside the name; the pill is filled accent (not outline, not text link); the photo stays on the right at ~25% width, 3:2, square corners. Mobile (<782): grid becomes one column: num+name on one line (name 2.25rem), text, price, pill, then photo full content width 3:2; rules stay edge to edge.

### T2. Three off-grid photos bleeding off both viewport edges (R1 first screen; token c, e; `ref/nag-first.png`, `ref/nag-photos-service.png`)
- **Reference**: white page; huge 2-line bold heading at x=294, y=195 and a 6-line bold lede under it; photo A tall (558×1072) starts at x=882 and **bleeds off the right edge**; photo B (705 wide, near square) starts at y=670 and **bleeds off the left edge** under the lede; photo C (496×331, 3:2) sits lower at x=617, 57 px below A's bottom, and **overlaps B's bottom-right corner** by ≈88×92 px. Nothing is centred; the three photos form a loose diagonal.
- **Ours (home block 1, `front-hero`, the whole top-bottom-halves first screen)**: exact geometry at 1440 in §3. Implement as one alignfull Group with a **CSS grid of 6 columns and overlapping grid areas** (not `position:absolute`): column edges at x = 0 | 294 | 617 | 705 | 882 | 1113 | 1440 → `grid-template-columns: 20.42fr 22.43fr 6.11fr 12.29fr 16.04fr 22.71fr`. A = columns 5–6 (x 882→1440), B = columns 1–3 (x 0→705), C = columns 3–5 (x 617→1113), `z-index: 2` on C so it sits over B's corner.
- **Inner pages (T2-lite page head, `.hc-pagehead`)**: same idea with two photos: heading (3.75rem 700, 2 lines) + 2–3 line lede at x = 20.42%; photo A' 4:5 at x 61.25% → bleeds right, width 38.75vw, top aligned with the heading; photo B' 16:9 at width 34vw bleeding left, starting 80 px below the lede. Section title "Service"-style label above the heading (e.g. "Wheels" + sub-label).
- **Must not be diluted**: at least one photo touches the right viewport edge and one touches the left viewport edge (no container margin on those sides); photos are misaligned (no common top or bottom line); square corners; heading left, never centred; no text on top of photos.

### T3. Capsule photo masks + road-centre dashed line (R2 about; token d, f; `ref/set-about.png`) with R1's colour-block photo wipe
- **Reference**: R2 sets photos in full stadium/capsule masks (475×250 in the text column, tall 297×492 on photo bands) and runs a dashed white vertical "road centre line" (12×120 px segments, 120 px gaps) down the page. R1 reveals each photo by sweeping a solid cobalt block across it (.65 s).
- **Ours**:
  - Wide capsule `.hc-capsule`: `border-radius: 9999px; overflow: clip; aspect-ratio: 475/250; width: min(475px, 100%)` (token d). Tall capsule `.hc-capsule--tall`: `aspect-ratio: 297/492; width: min(297px, 70vw)`.
  - Road line `.hc-road`: a 12 px wide vertical strip `background: repeating-linear-gradient(to bottom, #B9BDB0 0 120px, transparent 120px 240px)` (token f: 12×120, gap 120), full height of its section, placed in its own grid column (normal flow, not absolute); hidden below 782 px.
  - Colour-block wipe: photos with `sp-reveal--wipe` sit on a `#747864` figure background, so while the image clips open from top to bottom the accent block shows first, like R1's cover (see §8).
  - Used on home blocks 3 (wide capsule + road line), 5 (tall capsule) and on inner pages (§4).
- **Must not be diluted**: capsule ends are fully round (radius 9999, not 24 px); the road line is dashed in long segments (not dotted, not a hairline) and visible on desktop; the wipe shows the accent block briefly before the photo.

### Continuation to inner pages (each technique on ≥ 4 inner pages)
| Page | T1 hairline index | T2 bleeding photos | T3 capsule / road line / wipe |
|---|---|---|---|
| Services | full 6-row index (longer text, "for whom" line) | page head H1 right + H3 left | wipe on all row photos |
| Shop (archive-product, taxonomy, search) | category index rows (City · Gravel · E-bikes · Wheels & parts · Accessories) with counts, 1 px rules | page head S1 right + H2 left | product images wipe |
| Single product | spec rows (frame, gears, brakes, weight, fit included) as hairline rows | — (gallery left 7/12, summary right) | wide capsule P-image detail crop in "Fit included" note |
| Bike fitting | 5 fit stages as hairline rows (no grid) | page head S2 right + S10 left | wide capsule S9, road line beside the text |
| Workshop (Repairs & tune-ups) | tune-up levels + 5 process lines as hairline rows | page head S3 right + S4 left | tall capsule S6 (E-bike care) |
| Wheels | true / build / wheelset rows | page head S5 right + H3 left | wide capsule P4, road line |
| Prices | the price table uses the same 1 px ink rules and 01–08 numbers | page head H2 right + S5 left | — |
| Rides | ride / clinic rows | page head S8 right + S7 left | parallax band S9, road line full height |
| About | 7 people as hairline rows (name 2.25rem / role / one line), **no portrait grid** | page head S10 right + H1 left | wide capsule S7 |
| Visit | hours rows (stack on mobile) | page head S7 right + H3 left | ink contact band |
| Stories (index/single) | post list as hairline rows (date · title 2.25rem · 3:2 image right) | single: featured image bleeds right | wipe on images |

---

## Key visual concept

### (1) Reference first-screen concept (R1 naganoanzen.jp)
- **What is drawn**: a white page. Left: a two-line ultra-bold slogan (≈100 px glyphs, black) and a six-line bold lede. Right: a very tall reportage photograph of a mechanic reaching up inside the cab of a yellow work truck, bleeding off the right edge. Lower left: a wide/near-square photograph of a mechanic leaning into a white car's window, bleeding off the left edge. A third photograph (gear levers) follows lower, offset between them. Then a thin Latin "Service" title and the hairline service rows.
- **Story**: "Send vehicles back onto the road safely, soundly" — real people with their hands on real machines; the workshop as the quiet place behind everyday mobility.
- **Signature motion**: on load the heading lines rise out of a masked baseline (.5–.8 s, .3/.4 s per line, cubic-bezier(.36,.14,0,1)); each photo is revealed by a solid colour block sweeping over it (.65 s, delay .3 s / +.45 s, cubic-bezier(.73,0,.83,1)); rows fade up 20 px (1.5 s, cubic-bezier(.19,1,.22,1)); photos drift with slight parallax (scale 1.1). (token g)

### (2) Our transformation scene (bicycle shop for city commuters and weekend riders)
Same composition, same image type (documentary photographs of hands at work), same motion concept, translated to a bicycle workshop and set **low-key** per the row: a stone page; left a two-line ultra-bold heading **"Ride true. / Ride on."** and a five-line bold lede; right a very tall photograph of **a mechanic truing a bicycle wheel in a truing stand under a single warm task lamp**, hands in frame, bleeding off the right edge; lower left a near-square photograph of **hands fitting a chain onto a rear derailleur**, bleeding off the left edge; a third 3:2 photograph of **the bench: spoke key, spokes and a hub laid out under the lamp** drops lower and overlaps the second photo's corner. Story: *we send every bike back onto the street running true* — the shop as the quiet place behind a city's daily commute and its weekend rides. Motion: heading lines rise, accent block wipes off each photo, the tall photo drifts in parallax, then the service rows fade up.

### (3) KV checklist (every item implemented and visible on the first screen at 1440×900 unless noted)
| # | Reference element | Our counterpart | Position | Motion | Photo used |
|---|---|---|---|---|---|
| 1 | Two-line ultra-bold slogan, black on white (≈100 px glyphs) | "Ride true. / Ride on." Schibsted Grotesk 800, 6.5rem / 1.05, ink `#1D211B` on stone `#F5F6F3` | left, x = 294 (20.42%), top y = 195 | lines rise from a masked baseline: `translateY(105%)→0`, .8 s, line 2 delay +.1 s, cubic-bezier(.36,.14,0,1), starts 300 ms after load (CSS keyframes, gated, not sp-reveal) | — |
| 2 | Tall mechanic photo in truck cab, bleeding off the right edge | Tall low-key photo: mechanic truing a wheel under a task lamp, bleeding off the right edge | x 882→1440 (38.75vw), y 195→1267 (558×1072), first screen shows its top 705 px | accent block wipe on load (.65 s, delay .3 s, cubic-bezier(.73,0,.83,1)), then `sp-parallax` `--sp-par: 8%` | **H1** |
| 3 | Wide/near-square mechanic photo at car window, bleeding off the left edge | Hands fitting a chain onto a rear derailleur, bleeding off the left edge | x 0→705 (48.96vw), top y = 670, aspect 20:21; first screen shows its top 230 px | accent block wipe on load, delay .75 s (= .3 + .45, token g) | **H2** |
| 4 | Third photo (gear levers) offset between, lower | Bench close-up: spoke key, spokes, hub under the lamp; overlaps H2's bottom-right corner by ~88×92 px | x 617→1113 (34.44vw), 3:2, top = H1 bottom + 57 px (below the fold at 1440×900; visible on first scroll and in the 1440 full-page shot) | `sp-reveal--wipe` (first element below the fold; allowed because it is outside the first viewport) | **H3** |
| 5 | Six-line bold lede under the slogan, 16/32 | Five-line lede, Inter 700 1rem / 2 (16/32), letter-spacing 0.5px, ~45 words: Ghent workshop, hand-built wheels, fitting, commuters and weekend riders | x = 294, 60 px under the heading, max-width 26em | rises with line 2 (+.2 s), same easing | — |
| 6 | Header: logo left, bold nav + filled pill CTA right | Wordmark "Hayate Cycles" + "GHENT · SINCE 2012" micro-line left; Services · Shop · Prices · Rides · About (Inter 700 1rem) + Cart + filled accent pill "Book a service" 136×40 radius 44 right | header band y 0→135 (token c), side margin 6.12% | none (static header; R1's hide-on-scroll needs a scroll listener, which is forbidden) | — |

The hairline "Service" index (R1 item after the hero) follows directly below as home block 2 (T1); it is the second screen, not part of the KV checklist.

---

## 2. Colour (R1 roles and shares, token a; accent replaced per row)

| Role | Hex | Source | Use | Share |
|---|---|---|---|---|
| Ground | `#F5F6F3` | R1 ground `#FFFFFF` −3.5% L, cool stone tint (row: low-chroma ground, not cream) | page ground | ~70% |
| Surface | `#FFFFFF` | R1 ground exact | product image ground, form fields, cart totals column | ~5% |
| Text | `#30332D` | R1 text `#333333` (same L, +green tint) | headings, body | ~6% |
| Ink / rules | `#1D211B` | R1 hairline `#000000` +11% L (softened black) | 1 px rules, contact band, footer bottom bar, pill hover | ~12% (contact band full-bleed 400 px) |
| Accent Yanagi-nezumi | `#747864` | row hex; replaces R1 cobalt `#0B318F` | pills, index numbers, price lines, wipe block, circle hover, active nav underline | ~5% (never a section background) |
| Pale sage | `#B9BDB0` | R2 sky `#9CD9E9` role (light secondary), desaturated to the palette | road line, tag chips, form borders | ~2% |
| Spot | `#C39C6D` | R2 tan CTA exact | "Open now" 8 px dot in header/footer, link underline on hover | <1% |
| Muted text | `#5C6056` | derived from text | captions, meta, sub-labels on ink band at 70% | — |

- Why the accent changes: the row requires Yanagi-nezumi `#747864` as the one muted accent and forbids a full-bleed accent field; R1's cobalt is saturated. The **relationship** is kept: light ground, near-black type and 1 px black rules, one dark accent on pills/wipes, one full-bleed dark contact band (R1 cobalt band → our ink band `#1D211B`).
- Not the Seisui look (its accent `#6A7A58` is a close green): Seisui is white with a pale-green band and ghost words; Hayate is stone with ink rules, ink contact band and accent pills only.
- Contrast: text on ground 12.5:1; white on accent 4.6:1 (pill text 14 px 700 OK); ground on ink 15.6:1.
- **First-screen saturated pixels ≤ 15%** (row hard cap; `scripts/check-first-screen.py`), target ≤ 6%: low-key photos are mostly charcoal; the amber lamp glow is the only saturated colour and stays small (STYLE asks for a small warm highlight). No coloured UI over photos.

## 3. Type (font_direction **sans**; roles from token b)

Families, loaded with **theme.json `fontFamilies` + `fontFace`** (woff2 in `assets/fonts/`, OFL licences checked and copied to `assets/fonts/LICENSES/`), so the editor iframe and the front end show the same faces:
- `heading`: **Schibsted Grotesk** (variable 400–900, OFL), stack `"Schibsted Grotesk", "Helvetica Neue", Arial, sans-serif`.
- `body`: **Inter** (variable 400–700, OFL), stack `"Inter", "Helvetica Neue", Arial, sans-serif`.
- `:lang(zh-TW)` headings `"Schibsted Grotesk", "Noto Sans TC", sans-serif`, body `"Inter", "Noto Sans TC", sans-serif`; `:lang(ja)` the same with `"Noto Sans JP"`. Noto Sans TC / JP 500 and 700, zh-TW and ja subsets (subset script is known broken: use the Hokuto / Hada replacement method), registered as fontFace in theme.json too. Because style.css uses `:lang(`, copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it. **No serif and no  anywhere.**
- CJK: headings ≈ 0.75× the Latin size, body line-height 1.85; fr/de `hyphens: auto`.

| Preset | Size | Use | Source |
|---|---|---|---|
| small | 0.8125rem | meta, captions | — |
| base | 1rem (16 px), body 500, lh 2, ls 0.5px | body | token b (16/32 500) |
| medium | 1.25rem | index numbers 700, lede on inner pages | token b (20 px num) |
| large | 1.75rem | sub-headings, people names on mobile | — |
| x-large | 2.5rem (40 px) 700 lh 1.2 | section titles "Service", "Contact" | token b (40/48) |
| xx-large | 3.75rem (60 px) 700 lh 1 | service names, inner page heads | token b (60 px) |
| huge | `clamp(3rem, 7.2vw, 6.5rem)` 800 lh 1.05 ls -0.02em | hero heading only | token b (≈100 px glyph) |
Max preset 6.5rem (≥ 4.25rem rule satisfied). Sub-labels: Inter 700 0.6875rem (11 px, token b). Phone number on contact band: Schibsted Grotesk 700 2.25rem, ls 1px.

## 4. Header, footer, layout tokens
- **Header (split nav, R1)**: height 135 px desktop (token c), static (not sticky), ground colour, no border. Left at 6.12%: wordmark "Hayate Cycles" Schibsted Grotesk 800 1.375rem + micro-line "GHENT · SINCE 2012" Inter 700 0.5625rem ls 0.12em. Right: nav Inter 700 1rem, gap 42 px (Services, Shop, Prices, Rides, About), "Cart (n)" text link, pill "Book a service" (accent, white text, 136×40, radius 44, token b) → /visit/#book. Spot dot 8 px before "Open now" text is optional in the footer only. Below 960 px: wordmark + Cart + "Menu" button (WP navigation overlay, ground background, links 1.75rem 700). One top menu only.
- **Footer (R1)**: ground colour, padding 120px 6.12% 48px. Left: wordmark, address, phone, email (Inter 1rem/1.75). Centre: hours as three lines + "Open now" spot dot. Right: nav list right-aligned Inter 700 1.125rem, line gap 30 px (token: R1 footer nav). Bottom bar 1 px ink rule, © 2012–2026 Hayate Cycles, small.
- **Spacing**: side margin 6.12% (88 px at 1440, token c); content width 1264 px; section top gap 120 px desktop / 72 px mobile (token c 100–140); photos radius 0 except capsules (token d); no shadows anywhere.
- **Contact band** (R1 cobalt band → ink): alignfull `#1D211B`, min-height 400 px (token c), padding 88 px 6.12%; 3 columns 30/36/34: "Contact" 2.5rem 700 + sub-label; three lines Inter 500 1.125rem/2.2 in ground colour; right: "Book a service" link 1.125rem + 62 px circle (1 px ground-colour border, arrow; hover fill accent) (token d), then "Call the workshop" small + phone 2.25rem 700 + hours line 0.8125rem.

---

## 5. Home page

### First screen (1440×900; top-bottom halves)
- **Top half (y 0→600)**: header (0→135); heading "Ride true. / Ride on." at x 294, y 195 (two lines ≈ 220 px); lede 60 px under it (5 lines × 32 = 160 px) ending ≈ y 635. Right: H1 from y 195, x 882→1440, 558×1072 (aspect 0.52), only its top 705 px in view.
- **Bottom half (y 670→900)**: H2 starts at y 670, x 0→705, bleeding left; at 1440×900 its top 230 px are visible next to H1's lower part. H3 is below the fold.
- Nothing else on the first screen: no table, form, search, badge, button other than the header pill, no centred text.
- **Mobile 390×844**: header 64 px; heading `3rem` 2 lines, then lede (1rem/1.9, 4–6 lines), then H1 at 4:5 with `margin-left: 24px` and bleeding right (width calc(100% − 24px)); H2 (4:3) at 82% width bleeding left; H3 3:2 at 64% width, `margin: -40px 24px 0 auto; position: relative; z-index: 2` (normal flow). **No vertical text, no absolutely positioned labels, no text over photos.** The first 844 px contain heading, lede and the top of H1 only.
- Load motion (KV #1–#3) is CSS keyframes gated by `@media (prefers-reduced-motion: no-preference)` **and** `html.sp-js:not(.sp-no-motion)`; without JS, with `?sp-static`, reduced motion and in the editor everything is in its final state. The wipe is a `::after` on the figure (`background:#747864; transform-origin: bottom; scaleY 1→0`), not a clip on the img (the img carries the parallax).

### Block order
| # | Pattern | Purpose | Layout and photos | Copy |
|---|---|---|---|---|
| 1 | `front-hero` | KV, brand story | **T2** as above: heading + lede left, H1 right (bleeds right, parallax), H2 bottom-left (bleeds left), H3 offset overlapping H2's corner | heading 4 words + lede ~45 words |
| 2 | `front-index` | the page spine (service-index) | **T1**: "Service / Six things we do at the bench", 6 rows 01–06 with S1–S6 photos right, "from €" price line and pill to each inner page (New bikes→Shop, Bike fitting, Tune-ups→Workshop, Repairs→Workshop#repairs, Wheels, E-bike care→Workshop#e-bike) | 6 × ~40 words |
| 3 | `front-shop-story` | who we are (narrative) | 3-col grid 7/1/4 on 1264: left label "The shop" (x-large) + two paragraphs; centre the **road line** (12 px dashed, full block height); right **wide capsule** S7 (shopfront at dusk) top-aligned with the label, caption under it "Kanaalstraat 27, since 2012" | 2 paragraphs, ~120 words |
| 4 | `front-ride-band` | weekend + commuter community | **full-bleed parallax band** S9 (min-height 720 px desktop / 520 mobile, `sp-parallax --sp-par:10%`), in normal flow over its lower-left a **stone card** 480×540 (R1 recruit card, token e) at x 176 (12.2%), offset 120 px from the band bottom so the card pokes 120 px below the band onto the ground (negative margin-bottom, not absolute). Card: label "Rides" 2.5rem + sub-label, 3 lines on the Saturday ride (Sat 07:30, 45 km, no-drop, free) and the commuter clinic (first Wed 19:00, 12 places), pill "more" → Rides | ~70 words |
| 5 | `front-process` | how a workshop visit works | 2 cols 7/5: left title "Workshop" + one lead paragraph + the 5 process lines as hairline rows (01–05 accent numbers 1.25rem, line text 1.125rem 600, 1 px ink rules, no icons, no boxes); right **tall capsule** S10 (mechanic portrait) vertically centred | lead ~60 words + 5 lines |
| 6 | `front-prices` | price list (functional component, mid-page only) | full-width `table.hc-prices` (see §7) with all 8 rows, 1 px ink rules, number column, price column right + nowrap; note under it "Written quote before any work. Adjustments redone free within 30 days." + pill → Prices | table + 20 words |
| 7 | `front-stories` | proof by stories | title "Stories"; post 1 large: S8 3:2 at 7/12 left with `sp-reveal--wipe`, text right (date, title 2.25rem 700, 40-word excerpt); posts 2–4 as three hairline text rows below (date · title 1.5rem 700 · arrow), no images | Query Loop |
| 8 | `front-floor` | from the shop floor (WooCommerce) | title "On the floor"; 3 featured products (P1, P2, P3) in 3 columns; image 4:5 on `#FFFFFF`, contain, radius 0; name 1.25rem 700, category small, price 1rem 600; under the row a text link "All bikes and parts →". Without WooCommerce: same markup as static images linking to /shop/ | 3 × name/price + 25 words |
| 9 | `front-contact` | visit / book | **ink contact band** (§4) | ~35 words |

**Home photo positions: 16** — H1, H2, H3 · S1, S2, S3, S4, S5, S6 · S7 · S9 · S10 · S8 · P1, P2, P3. No image appears twice on the home page. English home ≥ 300 words with narrative paragraphs in blocks 3 (two), 4 and 5 (≥ 3 narrative paragraphs); CJK home ≥ 500 characters.

### Comparison with recent themes' home order
| # | Akari Hotel | Madoka Childcare | Hitomi Vision | Seisui Environmental | **Hayate Cycles** |
|---|---|---|---|---|---|
| 1 | ink wordmark screen + small photo | torn-frame photo hero | top-bottom halves, framed window | split hero, right-aligned headline | **three off-grid photos bleeding both edges, heading left** |
| 2 | dusk room parallax | welcome + offset photos on blobs | dome portrait rows | site strip marquee | **hairline service index 01–06 (T1)** |
| 3 | 01 Arrival giant word over portrait | approach | dome portrait rows (children) | intro 7/5 | **shop story: road line + wide capsule** |
| 4 | 02 Rooms sticky stack on ink | care day zig-zag rows | full-bleed interlude | services on parallax + 6 cards | **parallax ride band with one card poking out** |
| 5 | 03–05 evening/night/breakfast | room cards | method column | metrics ledger | **process lines + tall capsule** |
| 6 | rates | garden parallax | polaroid case | sticky-media process | **price table** |
| 7 | guest notes | fees | fees | fees | **stories (1 large + 3 rows)** |
| 8 | enquire | visit | director row | field notes 3 cols | **products (WooCommerce)** |
| 9 | — | notes | visit | people ledger + contact band | **ink contact band** |
Why not alike: the spine is a hairline index of services with photos at the right (none of the four has it); the hero is the only one with photos bleeding off **both** edges and no full-bleed hero photo; no ghost words, domes, blobs, torn edges, giant chapter words, sticky stacks, polaroids, ledgers, marquees or card grids; the only card is one single R1-style card on the ride band. Seisui's parallax carries a 6-card grid; ours carries one text card. Also not Hibi / Michi: no band cutting a rounded photo, no dealer grid.

---

## 6. Inner pages (≥ 8 + WooCommerce templates)

Each page = T2-lite page head → body with T1 rows / T3 capsule → ink contact band (except cart/checkout). No sidebar. Price/table rules in §7.
1. **Services** `/services/`: head "Service / Everything the workshop does" (H1 right, H3 left); the full 6-row T1 index, each row with an extra "For whom" line (commuters / weekend riders / e-bike owners) and a link; then a short paragraph about the free safety check + pill → Prices.
2. **Shop** (`archive-product.html`, `taxonomy-product_cat.html`, `taxonomy-product_tag.html`, `product-search-results.html`): head "Shop / Bikes we build up and stand behind" (S1 right, H2 left); category index as T1 rows (name 2.25rem, count, arrow); result count + ordering; grid 3 cols desktop / 2 tablet / 1 mobile, gap 32; card: image 4:5 white ground contain, category small, name 1.25rem 700, price 1rem 600, "Add to cart" as accent pill. Note line "New bikes include a free fit session · Free delivery within 10 km". Grace Okonkwo named in the intro.
3. **Single product** (`single-product.html`): gallery left 7/12 (white ground), summary right: category sub-label, title 2.5rem 700, price, short description, quantity + add-to-cart pill (larger: 16 px, padding 14/32), the note line above, then spec rows (hairline, label | value) and a wide capsule detail crop of the same product image; tabs Description / Specs; related products 3 across.
4. **Bike fitting** `/bike-fitting/`: head (S2 right, S10 left); intro by Tomás Ferreira; 5 fit stages as hairline rows (Interview · Flexibility check · Saddle height & setback · Reach & bars · Cleats & test ride); 3-col grid with road line + wide capsule S9; price €160 / 90 min, free with a new bike; pill → Visit#book.
5. **Workshop** `/workshop/` (Repairs, tune-ups, e-bike care; anchors #repairs, #tune-ups, #e-bike): head (S3 right, S4 left); tune-up levels as T1 rows (Basic €69, Full €149, E-bike €119 — numbers from §0); the 5 process lines; E-bike care block: tall capsule S6 + Samir's text; turnaround rules (2 working days, while-you-wait under 30 min, 30-day re-adjust).
6. **Wheels** `/wheels/`: head (S5 right, H3 left); Lena Vos narrative (2 paragraphs); rows: Wheel true €20 · Wheel build €90 per wheel · Hand-built Wheelset 32h €540 (links to product); road line + wide capsule P4.
7. **Prices** `/prices/`: head (H2 right, S5 left); the full price table (§0, 8 rows); notes paragraph (quotes, parts extra, 30-day re-adjust, fit free with new bike, parts shipping €7.50 BE/NL/LU).
8. **Rides** `/rides/`: head (S8 right, S7 left); full-bleed parallax band S9 (`--sp-par:10%`) with the stone card (same as home block 4 but with longer text); two rows: Saturday shop ride (07:30, 45 km, no-drop, free, led by Elif Yıldız) and Commuter clinic (first Wednesday 19:00, 12 places, free); road line full height beside the text.
9. **About** `/about/`: head "About / A workshop on the Kanaalstraat since 2012" (S10 right, H1 left); 3 narrative sections (2012 start in a former print shop; why we true every wheel; what we will not sell you); 7 people as hairline rows (name 2.25rem 700 | role sub-label | one line) — no portraits grid; wide capsule S7 beside the first section.
10. **Visit** `/visit/` (anchor #book): head (S7 right, H3 left); address, phone, email; hours as a 3-row table (stacks on mobile); how to book (call, email or drop in; Mei-Ling Chen at the desk); getting here (canal path, bike parking for 12 bikes in front); ink contact band.
11. **Stories** (`home.html`, `archive.html`, `category.html`, `tag.html`, `single.html`): head "Stories / From the bench and the road"; posts as hairline rows (date | title 2.25rem 700 + excerpt | 3:2 image right 25%) — T1 shape; single: title 3.75rem left, featured image bleeding right (T2), text column 680 px.
12. **Cart / Checkout / My account / Order confirmation**: page head small (2.5rem, no photos), white surface for the totals column with 1 px ink rules, buttons accent pills; works with block checkout. With WooCommerce off, shop links fall back to a static page with the 5 products and nothing fatals.
13. **404 / search**: heading + pill home.

## 7. Responsive and table rules (auto-gates)
- 390 px: no horizontal overflow (bleeding photos use `width` inside an `overflow-x: clip` alignfull wrapper; never `100vw` + margin); no vertical text; no absolutely positioned labels; no text over photos on the first screen.
- **Price table** `table.hc-prices` at ≥ 782 px: `width: 100%` of the 1264 content width (alignwide, not a narrow column); columns `#` 4rem | Service 26% | Includes auto | Time 14% | Price `width: 1%; white-space: nowrap; text-align: right` (never truncated, never clipped, no overflow hidden); rows 1 px ink rules; header row Inter 700 0.75rem uppercase ls 0.1em muted. Price cell Schibsted Grotesk 700 1.25rem.
- **Every table on mobile (<782) stacks**: `display:block` rows, each row a card-less block between 1 px rules: line 1 = number + service (700) left and price right (nowrap), line 2 = includes, line 3 = time (muted). Applies to the price table, hours table, spec rows and cart tables (Woo's own responsive table is fine for cart).
- 1280 and 800 widths: no table overflow (gates check).

## 8. Scroll motion (sp-scroll; 3 effect types per page max; hero has no sp-reveal)
Copy `pipeline/assets/sp-scroll/` unchanged into `assets/`; only CSS variables tuned in style.css.
| Effect | sp-* | Where | Source (trigger / time / easing) | Our values |
|---|---|---|---|---|
| Rows fade up | `sp-stagger` on `.hc-index`, `sp-reveal sp-reveal--up` on each row; also on process lines, people rows, story rows | home 2, 5, 7; Services, Workshop, Wheels, About, Stories | R1 `js-scroll-fade`: element top < viewport − 10%, 1.5 s, cubic-bezier(.19,1,.22,1), 20 px (token g) | on `.hc-index`: `--sp-dur: 1.5s; --sp-ease: cubic-bezier(.19,1,.22,1); --sp-dist: 20px` |
| Photo wipe | `sp-reveal sp-reveal--wipe` on the figure (clip runs on the child img, per sp-scroll) with figure `background:#747864` | index row photos S1–S6, H3, S7 capsule, S8 story, inner index photos | R1 `_slidein` colour-block wipe .65 s, delay .3 s, cubic-bezier(.73,0,.83,1); R2 clip-path `inset(0 0 100% 0)→inset(0)` | sp-scroll fixed 1.1 s cubic-bezier(.77,0,.175,1), top→bottom; accent block visible behind the clip = R1 colour block |
| Parallax (**required**) | `sp-parallax` | (a) home hero figure H1: `--sp-par: 8%` desktop, `6%` < 782; (b) home ride band S9 and Rides band: `--sp-par: 10%` desktop, `7%` mobile | R1 simpleParallax.js, scale 1.1, scroll-linked, linear | (a) figure H1 is the `sp-parallax` wrapper (`overflow: clip`), the direct img moves; heading/lede are not inside it. (b) the alignfull band Group/Cover with S9 as Cover background; the stone card is foreground and does not move |
- Not used: marquee, count, zoom. Price table, forms, cart, checkout and legal text: no reveal.
- Hero load animation is separate theme CSS (KV #1–#3), gated as in §5; it is not sp-reveal and not a scroll listener.
- Must pass `check-parallax.mjs` (desktop + mobile shift ≥ 6 px, 0 with reduced motion; ≥ 3 reveals hidden before entry, final after, nothing transparent at the end). Screens and gates use `?sp-static`.

## 9. Photos (18; Grok, one at a time; read every image)

**Imagery: photo** (stage-a IMAGERY = photo; R1 and R2 are documentary photographs). Low-key per row `photo_direction`.

STYLE (exact string on every prompt):
`photorealistic documentary photograph, low-key lighting, quiet modern bicycle workshop in a European city, single warm task lamp as the main light, deep charcoal shadows, muted olive-grey, stone and graphite tones with one small warm amber highlight, 50mm lens, shallow depth of field, fine film grain, calm hands-at-work moment, diverse adults in plain dark workwear, unbranded matte bicycle frames and components, no text, no logos, no brand marks, no lettering on frames, tyres or walls, no Japanese elements`

Rules: no cutouts (0 transparent PNGs); each ≤ 300 KB and ≤ 2000 px (webp); one `readme.txt` line per image (AI-generated, CC0); regenerate if text, logos, broken hands/spokes, warped wheels or a bright/high-key result appear.

| ID | Subject / composition | Ratio | Home? | Used on (never twice per page) |
|---|---|---|---|---|
| H1 | mechanic truing a bicycle wheel in a truing stand under a single task lamp, hands on the spoke key, face partly in shadow, tall vertical frame | 1:1.92 (1000×1920) | **Home hero A** | Home 1; Services head; About head (left) |
| H2 | close-up of hands fitting a chain onto a rear derailleur, bike in a work stand, lamp from the left | 20:21 (1400×1470) | **Home hero B** | Home 1; Shop head (left); Prices head |
| H3 | the bench under the lamp: spoke key, a bundle of spokes, a hub and nipples laid out on dark wood | 3:2 | **Home hero C** | Home 1; Services head (left); Wheels head (left); Visit head (left) |
| S1 | row of unbranded city bikes along a dark shop wall, one pool of lamp light on the nearest frame | 3:2 | **Home index 01** | Home 2; Services row; Shop head |
| S2 | fitter measuring a rider's knee angle with a goniometer, rider on a bike on an indoor trainer | 3:2 | **Home index 02** | Home 2; Services row; Bike fitting head; story 3 |
| S3 | gloved hands brushing degreaser through a cassette, drips catching the lamp | 3:2 | **Home index 03** | Home 2; Services row; Workshop head |
| S4 | hands with tyre levers and an inner tube on the bench, a pump beside them | 3:2 | **Home index 04** | Home 2; Services row; Workshop head (left) |
| S5 | hands lacing spokes into a hub, rim on the lap, close | 3:2 | **Home index 05** | Home 2; Services row; Wheels head; Prices head (left); story 2 |
| S6 | mechanic with a laptop cable plugged into an e-bike's mid-drive motor, screen glow and lamp | 3:2 | **Home index 06** | Home 2; Services row; Workshop E-bike tall capsule; story 4 |
| S7 | the shopfront at dusk from across a quiet street: tall lit window, bikes inside, cyclist passing blurred | 16:9 | **Home shop story (capsule)** | Home 3; Rides head (left); About capsule; Visit head |
| S8 | commuter riding along a canal path at dusk, street lamps, rear light glowing, side view | 3:2 | **Home story 1** | Home 7; Rides head; Stories |
| S9 | two weekend riders on a gravel road at first light, low sun behind trees, wide landscape | 16:9 (2000×1125) | **Home ride band (parallax)** | Home 4; Rides band; Bike fitting capsule |
| S10 | portrait of a mechanic in a dark apron at the workbench, arms folded, lamp behind | 4:5 | **Home process (tall capsule)** | Home 5; About head; Bike fitting head (left) |
| P1 | Hayate City 8: unbranded olive-grey city bike with mudguards and rack, side view, against a dark wall, lamp from above | 4:5 | **Home floor** | product, Shop grid, Home 8 |
| P2 | Hayate Gravel: graphite gravel bike with wide tyres, side view, same setting | 4:5 | **Home floor** | product, Shop grid, Home 8 |
| P3 | Hayate E-City step-through e-bike, stone colour, integrated battery, side view, same setting | 4:5 | **Home floor** | product, Shop grid, Home 8 |
| P4 | a pair of hand-built 32-spoke wheels leaning on the bench | 4:5 | no | product, Shop grid, Wheels capsule |
| P5 | a front and rear commuter light set on dark wood, lights glowing softly | 4:5 | no | product, Shop grid |
Per-page check (unique per page): Home H1 H2 H3 S1–S6 S7 S9 S10 S8 P1 P2 P3 (16). Services H1 H3 S1–S6. Shop S1 H2 P1–P5. Bike fitting S2 S10 S9. Workshop S3 S4 S6. Wheels S5 H3 P4. Prices H2 S5. Rides S8 S7 S9. About S10 H1 S7. Visit S7 H3. Stories S8 S5 S2 S6.

## 10. Home acceptance checklist
1. First screen 1440×900 matches the KV checklist: heading at x≈294 y≈195 in two lines ≥ 6rem, five-line bold lede, H1 touching the right edge from y 195, H2 touching the left edge from y≈670; nothing centred; no table/form/search.
2. Mobile 390: no vertical text, no absolute labels, no overlap of text; H1 bleeds right, H2 bleeds left; no horizontal scroll.
3. T1 index directly under the hero: 6 rows, edge-to-edge 1 px ink rules, 01–06 small accent numbers, names 3.75rem, accent pills "more", 3:2 photos right at ~25% width.
4. T3 visible: wide capsule (S7) with the dashed road line in block 3, tall capsule (S10) in block 5; photo wipe shows the accent block (`?sp-motion`).
5. Parallax on H1 and on the S9 ride band; `check-parallax.mjs` passes desktop + mobile; reduced motion = static.
6. Colours: stone ground `#F5F6F3`, text `#30332D`, ink `#1D211B` rules and contact band, accent `#747864` only on small elements; first-screen saturated pixels ≤ 15%.
7. Fonts: Schibsted Grotesk headings + Inter body; zh-TW/ja Noto Sans TC/JP; no serif; editor = front end (`check-editor-fonts.mjs`); theme.json max size 6.5rem.
8. Price table full width at 800 and 1280, price column nowrap right-aligned and fully visible; stacked on mobile.
9. 16 home photo positions, all different, all from the STYLE string, low-key, no text/logos; 18 images total.
10. Home order equals §5 block order; ≥ 300 English words, ≥ 3 narrative paragraphs; numbers equal §0 everywhere (prices, hours, 07:30 / 45 km, 2 working days, 30 days, 10 km, €7.50); WooCommerce products P1–P3 shown and checkout works.

## 11. Similarity table (target ~80%; values from reference-tokens.md)
| Dimension | Reference value (token) | Hayate value |
|---|---|---|
| Ground | R1 `#FFFFFF` ~88% (a) | `#F5F6F3` ~70% + white surface 5% |
| Text | R1 `#333333` (a) | `#30332D` |
| Rules | R1 1 px `#000` (a, d) | 1 px `#1D211B` edge to edge |
| Accent role | R1 cobalt `#0B318F` ~5% on pills, contact band, wipe (a) | `#747864` ~5% on pills, numbers, wipe; band → ink |
| Contact band | R1 full-bleed cobalt 400 px (c) | full-bleed ink 400 px, same 3-column layout, 62 px circle |
| Saturated first screen | R1 18.8% (a) | ≤ 15% (target ≤ 6%) |
| Hero heading | R1 2 lines, ultra-bold, ≈100 px glyphs, x 294 y 195 (b, c) | 2 lines, 800, 6.5rem, x 294 y 195 |
| Lede | R1 16/32 700 (b) | 16/32 700 |
| Body | R1 16/32 500 ls .5px (b) | Inter 16/32 500 ls .5px |
| Section title | R1 40/48 700 + 10–11 px sub-label (b) | 2.5rem/1.2 700 + 0.6875rem 700 |
| Index name / number | R1 60 px 700 lh 1 / 20 px (b) | 3.75rem 700 lh 1 / 1.25rem |
| Pill | R1 14/14 700, 10/26, radius 20, ~103×36 (b) | same |
| Header | R1 135 px, 4 links 16 px bold + pill 136×40 r44 (b, c) | 135 px, 5 links 16 px 700 + Cart + pill 136×40 r44 |
| Side margin / width | R1 6.12% / 1264 (c) | 6.12% / 1264 |
| Service row grid | R1 50/526/352/384, padding 38, photo ml 64 (c) | same |
| Hero photos | A 558×1072 x882 bleed right; B 705 wide y670 bleed left; C 496×331 x617 (c, e) | same coordinates |
| Photo radius / shadow | R1 0 / none (d) | 0 / none (capsules 9999) |
| Capsule masks | R2 475×250, 297×492 (d, e) | same |
| Decoration | R2 dashed line 12×120 gap 120 (f); R1 01–04 numbers (f) | road line 12×120 gap 120 `#B9BDB0`; 01–06 numbers |
| Card on photo band | R1 recruit card 480×540 at x 176 (e) | stone card 480×540 at x 176 |
| Row fade | R1 1.5 s cubic-bezier(.19,1,.22,1) 20 px (g) | `--sp-dur 1.5s`, same easing, `--sp-dist 20px` |
| Photo wipe | R1 colour block .65 s cubic-bezier(.73,0,.83,1) (g) | sp wipe 1.1 s over accent block; hero load wipe .65 s same easing |
| Hero intro | R1 line rise .8 s, cubic-bezier(.36,.14,0,1) (g) | same |
| Parallax | R1 simpleParallax scale 1.1 (g) | sp-parallax 8% (hero), 10% (band) |
| Imagery | R1 documentary photos, hands and tools (e) | documentary photos, hands and tools, low-key (row) |
