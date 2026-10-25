# Kiban Structural: design spec (stage 1, binding for implementation)

Row b11-4 · archetype sticky-media · hero photo-left-text-right (re-read as: photo window over wordmark, text below) · nav overlay · first screen full-bleed-photo-info-bar · page_structure process-timeline · IMAGERY **photo** (low-key) · font_direction **sans**.
Main reference: **union-tec.jp** (https://www.union-tec.jp/, S5-Style, space design / engineering). Tokens: `brand/reference-tokens.md` (cited below as `tok(a)…tok(g)`). Screens: `brand/ref/`.
Rule of thumb for the implementer: if a value here looks "too strong" (giant black wordmark, pure white page, very dark band), keep it. Weakening the contrast is the Tsumugi failure.

---

## 1. Signature techniques (three, all obvious at a glance)

### T1. Stadium photo window over a giant, edge-cropped wordmark (union-tec first screen)
- Reference: pure white page; a horizontal stadium (pill) window ≈948×407 (66% of 1440 viewport, aspect 2.33:1, radius = half height) holding a close photo of a hand marking a drawing; behind it the wordmark in Black-weight sans ≈250px, black, running past both screen edges so only fragments show left and right of the window. `tok(b)`, `tok(d)`, `tok(e)`.
- Ours (home block 1): window `width: min(66vw, 46vh*2.33)`, `aspect-ratio: 2.33/1`, `border-radius: 999px`, horizontally centred, top edge at 27% of the first screen (bottom ≈73%). Photo `kb-hero-drawing.webp` (engineer's hand marking a reinforcement drawing next to a concrete core wall), object-fit cover, object-position 50% 55%.
- Wordmark: text `KIBAN · KIBAN · KIBAN ·` repeated in an `sp-marquee` track, Albert Sans 900, `font-size: clamp(6rem, 17.4vw, 15.625rem)` (250px at 1440), line-height 0.8, letter-spacing -0.02em, uppercase, colour ink #0D0D0D, vertically centred on the window, z-index below the window. The track is wider than the viewport; the parent has `overflow: clip` so it is cropped at both edges (no horizontal scroll).
- Must not be weakened: wordmark stays pure ink (not grey, not outline, not 10% opacity); it must be cut by the window and by both screen edges; window stays a flat horizontal stadium (2.33:1), never an oval/blob (Umi used blobs).

### T2. Letter-spread tagline + hairline 8-column grid with ticks (union-tec first screen + whole site)
- Reference: 25px DeBold catchphrase whose glyph groups are justified across the full container at y≈808/900; 13px descriptor below-left; "Scroll" bottom-right; fixed 1px grid at rgba(0,0,0,.1), 8 columns ≈176px, 5px ticks at intersections. `tok(b)`, `tok(f)`.
- Ours: tagline **"Checked on the drawing. Signed on the wall."** split into word `<span>`s inside a flex row (`justify-content: space-between`), 1.5625rem / 700 / Albert Sans, at y≈88% of the first screen, spanning the full container (24px gutters). Below: info bar (§3 hero). Grid: a fixed, `pointer-events:none`, `aria-hidden` layer behind content (`body::before`), 8 equal columns across the 24px-gutter container, 1px rgba(13,13,13,.10) verticals + horizontals every 176px with 5px "+" ticks at intersections (CSS gradients, no image). Over the dark band (T3) the band draws its own grid in rgba(255,255,255,.14).
- Must not be weakened: spread must reach both container edges at ≥1080px; grid visible (10%, not 4%) on white; ground stays white, never stone (Akira used stone + grid).

### T3. Window opens into a full-bleed dark photo band, white three-line headline bottom-left (union-tec scroll band) → our sticky-media process hand-off
- Reference: on scroll the pill widens to full width with very large rounded top corners (≈1/6 band height), photo darkened ≈65%, 56px bold white lines bottom-left starting with a "•". `tok(e)`, `tok(g)`.
- Ours (home block 2): full-width Cover `kb-band-corewall.webp`, min-height 100vh, `border-radius: clamp(2.5rem, 10vw, 9.5rem) clamp(2.5rem, 10vw, 9.5rem) 0 0`, overlay rgba(22,24,26,.64), `sp-parallax` with `--sp-par: 10%` (mobile 6%). Headline bottom-left, 3 lines, Albert Sans 700, 3.5rem / 1.5, white: "• Survey and load take-down / Model and independent check / Signed calculations". Then block 3 is the **sticky-media process timeline** (§3) — the same idea continuing: the media stays, the stages move.
- Must not be weakened: overlay ≥.60 (band must read dark), corners ≥ 2.5rem even on mobile, text white #FFFFFF.

### Supporting (not counted, but required): tilted flat cards with thin line diagrams (union-tec capability cards)
Services cards (home block 5) are square, radius 0, gradient #F7F6F6→#EFEDED, no shadow, rotated statically (-3deg / 2deg / -1.5deg; mobile 0deg), each with an inline SVG line diagram 1.5px #0D0D0D stroke: simply-supported beam with load arrows / core wall in plan with rebar dots / flat slab with column grid. Drawn by us, not copied.

### Continuation to inner pages (required on ≥4; spec applies to all)
- **Page header pattern (all inner pages, T1+T2)**: white header 70vh desktop / auto mobile; cropped page word (e.g. `PROCESS`, `FEES`) Albert Sans 900 `clamp(4.5rem, 13vw, 11rem)` ink, overflowing both edges (static, no marquee), with a smaller stadium window (`width: min(48vw, 40vh*2.33)`, aspect 2.33:1) of that page's own photo centred over it; under it a letter-spread one-line subtitle (same flex-spread rule) + 13px breadcrumb at left. Mobile: word in flow above window, no overlap.
- **Process** page: T3 dark rounded band (`kb-survey-laser.webp`, `sp-parallax` 8%) + full stepped timeline (§4).
- **Projects** page: 4 cases each opened by a full-width rounded-top dark band (T3) with the project name bottom-left in white 3rem.
- **Services** page: three tilted cards enlarged (T4) + one T3 band.
- **Fees** page: grid (T2) visible behind the fee table; spread tagline as section opener.
- **About / Team / Contact / FAQ / Journal / Privacy**: page header pattern + grid; Contact repeats the hero composition at 60% scale with `kb-studio-entrance.webp`.

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
union-tec's first screen is a near-empty white sheet with a faint construction grid. In the middle, a horizontal stadium window frames a close, daylight photo of a craftsperson's hand marking lines with a pencil on a floor drawing (cool grey-white, a single green pencil). Behind the window the black wordmark runs edge to edge, cut off by the window and both screen edges, as if the company name were the ground under the work. Along the bottom a single catchphrase is spread glyph-by-glyph across the whole width, with a small descriptor line and a "Scroll" label. Story: *the space begins with a hand drawing on site — precision, done in person*. Signature motion: scrolling scrubs the stadium window open into a full-bleed darkened photo band with large rounded corners and white headlines; then cards tilt into place; texts fade up softly (0.5–0.8s, expo-like ease).

### (2) Our translation (structural engineering, same composition, same motion idea, same image type: photograph)
Same white grid sheet. The stadium window holds a low-key photograph of a structural engineer's gloved hand with a marker checking a reinforcement drawing (lines, bar marks — illegible, no text) taped beside a raw concrete core wall with starter bars. Behind it, **KIBAN** (Japanese "foundation") passes slowly as a cropped black wordmark — the firm literally being the ground under the check. Bottom: "Checked on the drawing. Signed on the wall." spread across the width, plus an info bar (Est. 2009 · Calder Quay studio · Structural design, independent checking, site review) and "Scroll". Story: *every calculation is checked by a hand against the real wall before it is signed*. Motion idea: the hero wordmark drifts (marquee, 90s loop), then the window "opens" into the full-bleed dark core-wall band (parallax, rounded corners) and the process stages from survey to signed calculations move past a pinned photo.

### (3) KV checklist (all six implemented and visible in the 1440×900 and the first scroll; mobile simplified as noted)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Stadium window, close hand-and-pencil photo | Stadium 2.33:1 window, engineer's hand marking rebar drawing beside concrete core wall | centre, y 27–73%, 66vw | none in hero (no reveal); CSS load fade 0.8s cubic-bezier(.18,.06,.23,1) allowed | `kb-hero-drawing.webp` |
| 2 | Giant black wordmark cropped by both edges, behind window | `KIBAN ·` track, Albert Sans 900 250px, #0D0D0D | vertical centre of window, full bleed | `sp-marquee` (duration overridden to 90s, linear); static under reduced-motion | — (type) |
| 3 | Letter-spread catchphrase across bottom | "Checked on the drawing. Signed on the wall." word-spread, 25px/700 | y≈88%, full container | none | — |
| 4 | 13px descriptor + "Scroll" label | info bar: 3 facts 13px/1.6 + "Scroll ↓" right, 1px top hairline | bottom 24px | none | — |
| 5 | Hairline 8-col grid with ticks; transparent fixed header with black Contact pill | fixed 8-col grid 10%; overlay header, Contact pill #0D0D0D + 6px green dot | whole screen / top 78px | grid fixed (scrolls under content) | — |
| 6 | Window → full-bleed dark band, white 3-line headline | Rounded-top dark Cover of core wall with rebar cage, 3 white lines bottom-left | home block 2 (first scroll) | `sp-parallax` `--sp-par:10%`; headline `sp-reveal sp-reveal--mask` | `kb-band-corewall.webp` |

---

## 3. Home page

### First screen (1440×900) — composition
- Header (overlay, transparent, `position: absolute` over hero, height 78px, 24px gutters): left logo "KIBAN STRUCTURAL" Albert Sans 900 1.5rem/1 ink; under it lang switch `EN  ZH  JA  FR  DE` 13px (current ink, others #6A6A68). Centre-right: nav links 13px/1.5 in two columns of three (About, Services, Process / Projects, Fees, Contact). Far right: Contact pill (#0D0D0D, white text, 16px radius, 24px height, padding 0 14px, 6px green dot before). Mobile: logo + Menu pill (1px #0D0D0D outline) that opens the core navigation overlay — still only one menu.
- Body: grid layer; wordmark track (T1) centred at y≈50%; stadium window over it; tagline at y≈88%; info bar at the bottom: `Est. 2009` · `14 Harbour Row, Calder Quay` · `Structural design · Independent checking · Site review` left (13px #0D0D0D, separated by 2.5rem), `Scroll ↓` right.
- Saturated share target ≤3% (ceiling 15% by script, row ceiling 30%). Only saturated pixels: green dot(s) and the photo's small marker cap.
- Mobile 390×844: header 64px; wordmark track in flow at top (6rem, cropped, no overlap with any text); window 88vw wide, aspect 1.9:1, radius 999px; tagline as normal paragraph 1.375rem/1.3, left aligned, letter-spacing .01em (no spread); info bar stacked 3 lines; no vertical text, no absolutely positioned labels over text.

### Block order
| # | Block | Purpose | Layout / image | Copy |
|---|---|---|---|---|
| 1 | Hero (T1+T2) | KV | as above · `kb-hero-drawing` | tagline + 3 facts |
| 2 | Dark rounded band (T3, `sp-parallax`) | the window opens; what we do in 3 lines | full-bleed Cover, rounded top corners, overlay .64 · `kb-band-corewall` | 3 headline lines + 13px label "• What we do" |
| 3 | **Process timeline beside sticky media** (page_structure) | survey → signed calculations | Columns 40/60: left `position: sticky; top: 96px` photo, radius 0, aspect 4:5, `sp-parallax --sp-par:6%` · `kb-site-survey`; right 6 stepped rows (each row indented +3.5rem from the previous at ≥1080px, 1px top hairline with 5px tick at its left end, number 3rem Albert Sans 300 #6A6A68, stage name h3 1.5rem/700, duration 13px, 1 sentence deliverable). Rows `sp-stagger` + `sp-reveal--up`. | H2 "From the survey to the signed calculations" + 6×(name, weeks, 1–2 sentences) |
| 4 | Practice statement + counts | narrative, ≥3 paragraphs | text 5 cols left (H2 2.5rem + 3 paragraphs 1rem/1.5) / landscape photo 3:2 right 3 cols offset down 6rem · `kb-studio-model`; under text 3 counts `sp-count`: `2009` founded · `7` people · `6` stages | ~170 words |
| 5 | Services: tilted cards (supporting T4) | 3 services | 3 square cards 340px, rotated, gradient, SVG line diagram centred, title h3 + 2 sentences + "• Read more" ; `sp-stagger` + `sp-reveal--up` | 3×40 words |
| 6 | Selected projects | proof | 2×2 grid: photo 3:2 radius 0 + hairline row below (year · type · span/storeys) + title h3. · `kb-case-library`, `kb-case-housing`, `kb-case-footbridge`, `kb-case-retrofit` | 4×25 words |
| 7 | Fees (excerpt, full table width) | transparency | white, grid behind, `<table>` 100% width, 6 rows: service left, scope middle (13px #6A6A68), price right `white-space: nowrap; text-align:right`; mobile: stacked rows. No reveal. | 6 rows + note "Fixed quotes after the scheme note." |
| 8 | Team | named people | one wide group photo 21:9, full container · `kb-team-studio`; under it 7 names in a 2-column hairline list (name 1rem/700 + role 13px) — not a person grid | 7 lines |
| 9 | Codes strip | working standards | single line `sp-marquee` 13px uppercase letter-spaced .12em: "Eurocode 0 · Eurocode 1 · Eurocode 2 · Eurocode 3 · Eurocode 5 · Eurocode 7 · Eurocode 8 · ISO 19650" ; 1px hairlines top/bottom | — |
| 10 | Contact (T1 echo) | CTA | cropped word "SIGN" 900 clamp(4.5rem,13vw,11rem) behind a small stadium window (40vw, 2.33:1) · `kb-signed-calcs`; below: address, hours, email, black pill "• Send drawings" | ~50 words |
| 11 | Footer | — | white, 1px top hairline, logo 900, 3 link columns 13px, © line | — |

Home photo positions: 1 hero, 2 band, 3 sticky, 4 statement, 6 ×4 cases, 8 team, 10 contact = **10** (≥8). English body copy ≥300 words (blocks 3, 4, 5, 6).

### Comparison with recent themes (no resemblance)
| # | Umi Swim | Tsubaki Flowers | Shiori Books | Akira Audit | **Kiban Structural** |
|---|---|---|---|---|---|
| 1 | blob-masked hero | full-bleed Cover, text bottom-left | two equal halves | boxed word on stone grid | white sheet, stadium window over cropped black wordmark marquee, spread tagline |
| 2 | concept band | asymmetric about | new titles | white card with crosshair | full-bleed dark band with rounded top corners (parallax) |
| 3 | programme tabs | 3 hairline columns | counter price list | link rows | sticky photo + stepped 6-stage timeline |
| 4 | oval photo day strip | — | reading index | overlapping figures | statement + counts |
| 5 | — | — | journal | tick strip | tilted cards with line diagrams → projects 2×2 → fees → team photo + list → codes marquee → "SIGN" CTA |
Reasons: no blob/oval (window is a flat 2.33:1 stadium); grid on white not stone and with 8 cols + ticks, not boxed words; only theme whose second block is a rounded-top dark band; only theme with sticky media + staircase timeline; cards are tilted, not hairline columns.

---

## 4. Inner pages (10 + 4 case details)
All use the inner page header (§1 continuation) with their own photo; no photo repeats within a page.
1. **About** (`kb-meeting-architects`): founding 2009 by Mara Lindqvist after 12 years in contractor design teams; why "kiban"; how we work with architects and developers (early scheme notes, one named engineer per job); T3 band with `kb-band-corewall` is NOT reused — use count row + statement.
2. **Services** (`kb-steel-connection`): 3 services, enlarged tilted cards (T4) each followed by deliverables list, typical duration, which fee row applies; T3 band (`kb-desk-model`).
3. **Process** (`kb-survey-laser` in header + band): full 6 stages with sticky media; each stage: what we need from you, what you get, typical weeks; FAQ snippet on checking categories.
4. **Projects** (header `kb-case-footbridge`): 4 cases, each a rounded-top dark band + facts table (stacked on mobile) + 120-word story.
5. **Project detail ×4** (posts / pages): Calder Quay Library, Northfield Row Housing, Weir Lane Footbridge, Mill Street Warehouse Retrofit — hero band of own photo, facts, challenge / approach / result (no guaranteed outcomes).
6. **Fees** (`kb-signed-calcs` header, grid visible): full 6-row fee table full width, price nowrap right; what is included; payment stages (30% on scheme note, 50% on calculations, 20% on sign-off).
7. **Team** (`kb-team-studio`): 7 people, each a hairline row: name, role, qualification in neutral wording ("chartered structural engineer"), focus, one sentence. No portrait grid.
8. **Journal** (`kb-crack-inspection`): 3 notes (e.g. "Reading a crack before repairing it", "Why we check flat slabs twice", "What a load take-down is").
9. **FAQ** (`kb-desk-model`): 8 questions.
10. **Contact** (`kb-studio-entrance`): hero composition at 60%, address, hours, email, phone, form (outside first screen).
11. **Privacy**.

---

## 5. Colour (from union-tec, `tok(a)`)
| role | reference | ours | share (first screen) | use |
|---|---|---|---|---|
| ground | #FFFFFF | **#FFFFFF** (same) | ≈65% | page, header |
| ink | #000000 | **#0D0D0D** (+5% L) | ≈7% | wordmark, headings, body, Contact pill |
| mid (row dull grey) | photo greys #8C8F8D | **#6A6A68** (row hex; -10% L of photo grey, chosen for 5.5:1 text contrast) | <2% UI | meta text, stage numbers, inactive lang |
| light | #C9D0D2 | **#C9D0D2** (same) | — | borders on dark, disabled |
| card tint | #F7F6F6→#EFEDED | **same** | — | tilted cards, table header row |
| hairline | rgba(0,0,0,.10) | **rgba(13,13,13,.10)** | — | grid, rules |
| band overlay | rgba(40,32,26,.65) warm | **rgba(22,24,26,.64)** — changed to cool because concrete/rebar is cool grey; warm brown overlay would read as interior design | — | T3 bands |
| accent | pencil green ≈#4FD24A (photo only) | **#47C94A** (-3% L), UI only as 6px dots (Contact pill, active nav, current stage) | ≤0.5% | — |
Photos ≈20–25% of first screen, low-key cool greys. First-screen saturated share: target ≤3%, hard cap 15%.

## 6. Type (`tok(b)`; font_direction sans)
- Latin display: **Albert Sans** (700, 900; 300 for big numbers). Latin body/UI: **Instrument Sans** (400, 500, 600).
- Stacks: heading `"Albert Sans", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`; body `"Instrument Sans", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`; `:lang(ja)` puts Noto Sans JP before TC. CJK = Noto Sans TC / JP (gothic / sans) for headings and body, **no Mincho / serif anywhere**.
- Load all through theme.json `fontFamilies` + `fontFace` (woff2 in assets/fonts, incl. zh-TW and ja subsets via the Hokuto/Hada workaround); copy shared/inc/editor-lang.php to inc/ and require it if style.css has `:lang(`. Editor and front end must render the same faces.
- Sizes (theme.json slugs): `kv` clamp(6rem,17.4vw,15.625rem) (250px, wordmark) · `display` clamp(4.5rem,13vw,11rem) (inner word) · `xx-large` 3.5rem (band lines, 56px) · `x-large` 2.5rem (H2, 40px) · `large` 1.5625rem (tagline 25px) · `medium` 1.5rem (H3 24px, lh 1.33) · `base` 1rem (16/24, lh 1.5) · `small` 0.8125rem (13px/1.6, ls .02em). Max ≥4.25rem ✓.
- Weights: wordmark 900; H1–H3 700; body 400; labels 600. Mixed case headings (only wordmark/inner word uppercase).
- zh-TW/ja: sizes ×0.75 for kv/display/xx-large, body line-height 1.85, tagline not spread: letter-spacing .12em, wraps naturally. fr/de: `hyphens:auto` on body and H2/H3.

## 7. Spacing, radius, decoration, motion (with token sources)
- Container: full width, 24px gutters (`tok(c)`), 8-col grid; text max 46rem.
- Section padding: 10.875rem top desktop (174px) / 6.5rem mobile (104px); between blocks margin 0 (blocks carry their own padding); block 4 photo offset 6rem.
- Header 78px (`tok(c)`).
- Radius: pills 16px; stadium 999px; band top corners clamp(2.5rem,10vw,9.5rem); photos and cards 0 (`tok(d)`). No shadows anywhere.
- Dots: 6px circle before labels/buttons, ink or white; green only on Contact pill / active (`tok(f)`).
- Motion (`tok(g)`): sp-scroll defaults overridden on :root: `--sp-dur: .8s`, `--sp-ease: cubic-bezier(.18,.06,.23,1)`, `--sp-dist: 24px`; stagger 0.12s (sp-scroll default; reference .05s is too fast to read in rows).

## 8. Scroll effects (from stage-a candidates → sp-*)
| effect | class | where | reference trigger / time / ease |
|---|---|---|---|
| Wordmark passing behind window | `sp-marquee` (override `--sp-marquee-dur` or animation-duration to 90s) | hero wordmark track (+ codes strip block 9, 40s) | union-tec marquee loop, linear, continuous |
| Window → full-bleed band, image moves slower than content | `sp-parallax` (`--sp-par:10%` desktop, `6%` ≤600px) and `sp-reveal sp-reveal--mask` on band headline group | home block 2; also sticky photo block 3 (`6%`); Process & Projects bands (`8%`) | union-tec ScrollTrigger scrub, clip-path morph, power3/4 inOut, 0.8–1s |
| Tilted cards / stages / cases enter | parent `sp-stagger`, children `sp-reveal sp-reveal--up` | blocks 3 (stage rows), 5 (cards — reveal on card wrapper, rotation on inner), 6 (cases) | IntersectionObserver threshold 0, opacity .5/.8s, cubic-bezier(.18,.06,.23,1) |
No reveal in hero, fee table, form, privacy text. Total `.sp-reveal` ≤60% of home blocks.

### Parallax (required)
- Block 2 Cover `kb-band-corewall.webp` is the moving layer (`.wp-block-cover__image-background`); foreground = overlay + white headline (not in the moving layer). `--sp-par: 10%` desktop, 6% mobile (kept on mobile). Reference counterpart: the scrubbed pill→band morph where the photo drifts inside the widening mask.
- Second: block 3 sticky photo `figure>img`, `--sp-par: 6%`.
- check-parallax.mjs must show ≥6px delta desktop and mobile, 0 with reduced motion.

## 9. Responsive
- 390px first screen: no vertical text, no absolutely positioned label overlapping text; wordmark track in flow; tagline left aligned; info bar stacked.
- Fee table at ≥782px: 100% of container width, price column `white-space: nowrap; text-align: right; min-width: 9rem`, never clipped (check at 800 and 1280). Below 782px every table becomes stacked rows (`display:block`, label above value).
- Tilted cards rotation 0 below 782px; stepped indent of timeline 0 below 1080px (rows full width, hairline + tick kept).
- No horizontal overflow at 390/1280 (wordmark and marquees inside `overflow: clip`).

## 10. Images (16, Grok, one at a time, read each; ≤300 KB, ≤2000px, webp, no cutouts)
**STYLE** (identical for all):
`Low-key documentary photograph, cool desaturated greys of raw concrete, graphite and steel, soft single-side daylight with deep but open shadows, shallow depth of field, natural 35–50mm perspective, matte fine grain, muted colour with only tiny natural accents, modern international construction sites and engineering studios, diverse adults in plain dark workwear, drawings show only lines and grid marks, no readable text, no numbers, no logos, no brands, no Japanese elements`

| # | file | subject / composition | used on | home |
|---|---|---|---|---|
| 1 | kb-hero-drawing | close crop: gloved hand with a small green-capped marker tracing a reinforcement drawing taped beside a raw concrete core wall with starter bars, 16:10, subject centre-left so the 2.33:1 stadium keeps the hand | Home hero | ✓ |
| 2 | kb-band-corewall | tall concrete core wall with rebar cage and formwork ties, low angle, wide, plenty of dark area bottom-left for text, 16:9 | Home band | ✓ |
| 3 | kb-site-survey | engineer measuring an existing column with a tape and tablet in a stripped building, 4:5 | Home sticky | ✓ |
| 4 | kb-studio-model | studio desk, physical white structural model of a frame, printed drawings without text, 3:2 | Home statement | ✓ |
| 5 | kb-case-library | interior of a timber-and-concrete library under construction, CLT panels, 3:2 | Home cases; Project detail | ✓ |
| 6 | kb-case-housing | six-storey flat-slab residential frame with props, overcast, 3:2 | Home cases; Project detail | ✓ |
| 7 | kb-case-footbridge | slender steel footbridge over a small river at dusk, 3:2 | Home cases; Projects header; detail | ✓ |
| 8 | kb-case-retrofit | old brick warehouse interior with new steel strengthening frames, 3:2 | Home cases; detail | ✓ |
| 9 | kb-team-studio | seven people reviewing drawings at a long table in a grey studio, wide 21:9 | Home team; Team | ✓ |
| 10 | kb-signed-calcs | hand signing a bound calculation package on a concrete-grey desk (no readable text), 16:10 | Home contact; Fees header | ✓ |
| 11 | kb-survey-laser | laser scanner on tripod in a bare concrete floor plate, 16:9 | Process header + band | |
| 12 | kb-desk-model | monitor glow with abstract wireframe frame model, engineer's hands, no UI text, 16:10 | Services band; FAQ | |
| 13 | kb-steel-connection | close detail of a bolted steel beam-column connection, 16:10 | Services header | |
| 14 | kb-crack-inspection | hand with crack gauge on a concrete beam soffit, torch light, 16:10 | Journal | |
| 15 | kb-meeting-architects | engineer and two architects at a site hut table with drawings, 16:10 | About | |
| 16 | kb-studio-entrance | quiet studio entrance, concrete and glass, morning, 16:10 | Contact page | |
Rule: no photo twice on one page. Projects page: header #7 (footbridge); case bands #5, #6, #8; the Footbridge case on that page is facts + text only (its band appears on its own detail page).

## 11. Fixed facts (all pages, all 5 languages identical numbers)
- Name: Kiban Structural (Kiban Structural Engineers). Founded **2009**. Studio: **3F, 14 Harbour Row, Calder Quay** (fictional). Hours: **Mon–Fri 08:30–17:30**, site visits by arrangement, closed weekends & public holidays. Email studio@kiban-structural.example, phone +00 20 7000 2009.
- People (7): Mara Lindqvist — founding director; Tomas Okafor — associate director, concrete; Aiko Brennan — senior engineer, timber & steel; Rafael Duarte — checking engineer; Priya Raman — engineer, retrofit & assessment; Jonah Weiss — drawings & BIM lead; Noor Haddad — studio manager.
- Process (6): 01 Survey (1–2 weeks) · 02 Load take-down (1 week) · 03 Model (2–4 weeks) · 04 Independent check (1–2 weeks) · 05 Drawings (2–3 weeks) · 06 Signed calculations (3 working days).
- Fees (6, EUR, "from" prices, VAT excluded):
  | service | price |
  |---|---|
  | Feasibility & structural scheme note | from €1,800 |
  | Site survey & condition report | €950 per site day |
  | Structural design, residential up to 4 storeys | from €9,500 |
  | Independent design check | from €3,200 |
  | Retrofit assessment & strengthening design | from €4,800 |
  | Site inspection visit with written report | €640 per visit |
- Cases (4): Calder Quay Library (2022, CLT floors on concrete core, 3 storeys) · Northfield Row Housing (2023, 6-storey flat slab, 48 homes) · Weir Lane Footbridge (2021, steel, 28 m span) · Mill Street Warehouse Retrofit (2024, brick + new steel frames, 4 storeys).
- Counts on home: 2009 · 7 people · 6 stages. No awards, no guaranteed outcomes, no real clients/brands.

## 12. Similarity to reference (target ≈80%)
| dimension | union-tec | Kiban Structural |
|---|---|---|
| ground / ink | #FFFFFF / #000000 | #FFFFFF / #0D0D0D |
| photo tone | cool greys #C9D0D2–#8C8F8D, daylight | same greys, low-key (row) |
| accent | green in photo only, <0.5% | #47C94A dots + marker cap in photo, ≤0.5% |
| first-screen saturated | 2.3% | target ≤3% |
| hero mask | stadium ≈948×407, 2.33:1, 66% width | same ratio, 66vw, radius 999px |
| wordmark | ≈250px Black, cropped both edges, behind window | 250px Albert Sans 900, cropped, behind, marquee 90s |
| tagline | 25px, justified spread, y≈808/900 | 25px/700, word spread, y≈88% |
| sub line | 13px/20.8 ls .26px | 13px/1.6 ls .02em |
| grid | 1px 10%, 8 col ≈176px, 5px ticks | same |
| header | 78px transparent, 13px links in 2×3, black Contact pill 16px radius | same structure |
| band | full-bleed, rounded corners ≈1/6 h, overlay ≈.65, 56px white bold 3 lines bottom-left | clamp(2.5rem,10vw,9.5rem) corners, overlay .64 cool, 3.5rem 3 lines |
| H2 / H3 / body | 40px bold / 24px/32 bold / 16/24 | 2.5rem 700 / 1.5rem/1.33 700 / 1rem/1.5 |
| section padding | 174 / 104px | 10.875rem / 6.5rem |
| cards | square, #F7F6F6→#EFEDED, 3D tilt, line art | square, same gradient, 2D tilt ±3deg, SVG line diagrams |
| radius / shadow | 0 except masks & pills; no shadows | same |
| motion | ScrollTrigger scrub, IO fade .5/.8s cubic-bezier(.18,.06,.23,1), marquee | sp-parallax, sp-reveal--mask/up .8s same curve, sp-marquee |
Differences on purpose: content, photos, copy and logo are our own; tilt is 2D (no 3D libraries); timeline is sticky-media (row archetype).

## 13. Home acceptance checklist
- [ ] 1440×900: white sheet with visible 10% 8-col grid + ticks; stadium window 2.33:1 at ≈66% width; black 900 wordmark cropped at both screen edges and by the window; tagline spread edge to edge at y≈88%; info bar with 3 facts + Scroll; overlay header with black Contact pill.
- [ ] Hero photo = hand + marker + reinforcement drawing + concrete core wall, low-key, no readable text.
- [ ] Block 2 dark rounded-top band, parallax moving (check-parallax ≥6px desktop & mobile), white 3 lines bottom-left.
- [ ] Block 3 sticky photo + 6 stepped stage rows (not vertical line list, not 6-box grid), timings match §11.
- [ ] Tilted cards with our SVG line diagrams; 4 cases; fee table full width with nowrap right prices at 800/1280, stacked on 390; 7 named people; codes marquee; SIGN contact echo.
- [ ] ≥8 image positions (10), no photo twice on the page; ≥250 English words, ≥3 narrative paragraphs.
- [ ] First-screen saturation ≤15% (target ≤3%); fonts Albert Sans / Instrument Sans in editor and front end; max font size ≥4.25rem.
- [ ] No reveal in hero; reduced-motion & `?sp-static` show final state; auto-gates en pass (`1 1`).
- [ ] 390px: no overlapping text, no vertical text, no horizontal scroll.
