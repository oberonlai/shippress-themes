# Hikari Lighting: design spec (stage 1, binding for implementation)

Slug `hikari-lighting`, independent lighting showroom for homes and small dining rooms (row b17-1: type **store**, archetype editorial-magazine, hero full-bleed-photo, first_screen full-bleed-photo-info-bar, page_structure alternating-longform, photo_direction low-key, font_direction **sans**). WooCommerce **required** for the Lamps catalogue (checkout must work; delivery + click-and-collect); every template must still render without fatals when WooCommerce is off.

Main reference: **FIGARO, https://www.figaro-vis.jp/** (S5-Style, spatial/interior design studio). Measurements: `reference-tokens.md` (token letters (a)–(g) are cited below as `tok(a)` etc.). Screenshots: `ref/figaro-fold.png` (intro curtain), `ref/scroll-h0.png` (after intro, light ground), `ref/scroll-h1.png` (room box). We borrow structure, technique, colour relationships and the key-visual concept. We never copy FIGARO's photos, copy, logo, client logos or the exact stencil letterforms.

Imagery: **photo** (stage-a IMAGERY = photo; FIGARO uses black-and-white interior photography). Our STYLE = low-key real photography (section 9).

Fixed brand facts (identical on every page and in all five languages): **Hikari Lighting**, founded **2016**, showroom at **Steenkade 14, 3011 BH Rotterdam, Netherlands** (fictional address). Currency **EUR** in every language, no converted prices. See section 10 for every number.

---

## 1. Signature techniques (three, all obvious at a glance)

### T1. Dark curtain that lifts: "the lights come on" (FIGARO intro curtain, `ref/figaro-fold.png` → `ref/scroll-h0.png`)
- Reference: the very first frame is 100% black `#0F0F0F` with a 1000×165 stencil wordmark at x40 y260, a two-line mono caption under it and a caps studio line; then the whole stage flips to the light ground `#F2F2F2`, the wordmark inverts and the page continues on light grey. tok(a)(g).
- Hikari: the first screen is a **low-key photograph** (hl-01) covered by a warm-black curtain layer `#1A1512` at opacity 0.94 that lifts to 0 on load (1.2s, `cubic-bezier(.23,1,.32,1)`, 0.2s delay): the dark room is "switched on" and the lit floor lamp appears. Under the photo the **light ground `#F2F2F2` slides up** as the info bar (KV item 6) and the page continues light. The wordmark, caption and tagline sit exactly where FIGARO puts them (x40, y260 / 468 / 540 on 1440×900).
- Implementation: `.hl-kv__curtain` is an absolutely positioned `<span aria-hidden>` inside the Cover, `background:#1A1512`. Its **final state (opacity 0) is the default**; only `html.sp-js:not(.sp-no-motion) .hl-kv__curtain { animation: hl-lights-on 1.2s cubic-bezier(.23,1,.32,1) .2s both }` (keyframes `from{opacity:.94} to{opacity:0}`) inside `@media (prefers-reduced-motion:no-preference)`. Same pattern for the info bar (`from{transform:translateY(100%)} to{transform:none}`, 0.8s, same easing, 1.0s delay). No sp-reveal on the hero; no scroll listener. `?sp-static`, no-JS, reduced motion and the editor show the final state.
- Must not be diluted: the curtain must start near-black (≥0.9 opacity) and cover the whole viewport, not a soft vignette; the stencil wordmark must be ≥1000 px wide at 1440 (69% of the width); the light bar must be solid `#F2F2F2`, not translucent.
- Inner pages: every inner page opens with a **dark page head** (`hl-pagehead`): `#1A1512` full-bleed, min-height 62vh desktop / 420px mobile, the same curtain-lift animation over the plain dark ground (only Journal single posts add their featured image as a photo layer at opacity 0.35), with mono caption, bracket label and title, then the page flips to `#F2F2F2` with a hard horizontal edge (no gradient). See section 6.

### T2. Giant thin-caps statement running as a marquee under a mono caption (FIGARO "…LIGHT ON THE SURFACE. HEAVY…" line, `ref/scroll-h0.png`)
- Reference: under the small mono caption and caps studio line, one huge thin caps sentence (~80px, weight 200–300) runs sideways across the full width, cut at both viewport edges. tok(b)(g).
- Hikari: `sp-marquee` line "LIGHT IS THE QUIETEST FURNITURE IN THE ROOM —" in **Outfit 200, 5rem (80px), line-height 1, letter-spacing 0.02em, uppercase**, white 92% on the hero photo (ink `#0E0E0E` on light ground elsewhere). Bleeds off both edges (alignfull, no container padding). Speed: one loop 40s linear infinite (FIGARO speed not measured; estimate). In zh-TW/ja the line is translated, Noto Sans TC/JP 300, 3.75rem, no uppercase.
- Positions: Home KV (y 610–690 at 1440×900), every inner page head (page-specific line, ink → white on dark), and the footer (ink on `#F2F2F2`, "STEENKADE 14 · ROTTERDAM · WEDNESDAY TO SUNDAY —").
- Must not be diluted: weight stays 200 (not 400), size ≥5rem desktop / ≥2.75rem mobile, the line must be cut by both screen edges and must move (not a static heading). Only one marquee per screen.

### T3. Dark perspective room box with one lit photo window and a vertical stencil word at the left edge (FIGARO studio block, `ref/scroll-h1.png`)
- Reference: a dark 3-D "room": a lighter sloping ceiling plane at the top, a near-black front wall, a darker side wall at the right; a single lit B&W photograph is cut into the front wall like a window; a stencil word runs vertically at the left edge (x40–200), crossing ceiling and wall. The box and the vertical word move with scroll. tok(e)(f)(g).
- Hikari geometry (desktop 1440, section `hl-roombox`, min-height 960px, alignfull, background = front wall `#1A1512`):
  - Ceiling plane `::before`: `clip-path: polygon(0 0, 100% 0, 100% 25%, 76% 43%, 0 23%)`, `background: linear-gradient(180deg, #5A4C43 0%, #3F332C 100%)`, height 100% of the first 900px.
  - Side wall `::after`: `clip-path: polygon(76% 43%, 100% 25%, 100% 100%, 76% 100%)` over the first 900px, `background: linear-gradient(90deg, #2B231F 0%, #3F332C 100%)`.
  - Window: `figure.hl-window.sp-parallax` at x 23%–62% (left 328px, width 560px at 1440), top 51% (y 460), aspect 4:3 (560×420), `overflow:clip`, radius 0, no border, no shadow; the `img` inside is the parallax layer (`--sp-par: 10%`, mobile 6%). Photos are low-key colour but graded down (`filter:none`; the grade comes from the STYLE).
  - Vertical stencil word: the T1 wordmark SVG rotated 90° clockwise, 160px wide × 860px long, at x40, top 140px, `#F2F2F2` (it crosses the ceiling plane exactly as in the reference). Decorative: `aria-hidden="true"`.
  - Text sits **below the box** on the same `#1A1512` ground (the front wall continues down): 12-column grid in a 1360px container (x40 gutters): mono bracket label + H2 at columns 3–6, two paragraphs at columns 8–11, a `↗` text link under the paragraphs. Padding-bottom 180px.
  - Mirrored variant (`hl-roombox--mirror`, used for the second box on Home): all polygons mirrored on x (side wall at the left 0–24%, window x 38%–77%, vertical word at the right edge x 1240–1400).
- Mobile (<782px): ceiling `polygon(0 0, 100% 0, 100% 12%, 70% 20%, 0 10%)`, side wall `polygon(70% 20%, 100% 12%, 100% 100%, 70% 100%)` over the first 560px; the vertical word becomes **horizontal**, 40px tall, at the top-left (x24, y 24), never vertical; window full width minus 48px, 4:3, starting at y 180. Text stacks under it.
- Must not be diluted: the ceiling must visibly slope (two different angles meeting at a corner), the three planes must be three distinct tones, there is **one** window per box (no gallery), the vertical word must be ≥ 140px wide on desktop.

### Supporting details (not counted as signatures, all pages)
- Mono header nav with a bracketed current item and superscript counts (tok(f)): `[ Home ]`, `Lamps⁶`, `Rooms`, `Fitting`, `Projects⁴`, `Visit`, `Journal`; superscripts IBM Plex Mono 0.5rem (8px), raised 10px.
- FIGARO project rows (tok(c)(e)): a 14px mono title line, then a **2:1** image across the full content width (1360×680 at 1440), row pitch ~576px + text. Used for Rooms (Home block 5, Rooms page) and Projects.
- Link arrows `↗` 12px after mono link text (tok(d)).

### Continuation to inner pages (T1 and T2 on every inner page; T3 on ≥4)
| Page | T1 dark curtain head | T2 marquee | T3 room box |
|---|---|---|---|
| Lamps (shop archive, category, search) | yes, no photo layer | "SIX PIECES ON THE FLOOR THIS MONTH —" | yes, window **hl-02** ("on the floor this month"), text = how the floor changes monthly |
| Single product | short head (40vh) with product name, no photo layer | "SEEN ON THE FLOOR AT STEENKADE 14 —" | — |
| Rooms | yes, no photo layer | "EVERY ROOM HAS ITS OWN HOUR —" | — (uses FIGARO project rows) |
| Fitting & Specification | yes, no photo layer | "MEASURED IN THE ROOM, NOT IN A CATALOGUE —" | yes, window **hl-05** |
| Projects | yes, no photo layer | "FOUR ROOMS, LIT AFTER DARK —" | — (project rows) |
| Visit the showroom | yes, no photo layer | "STEENKADE 14 · WEDNESDAY TO SUNDAY —" | yes, window **hl-06** (the shop window at dusk) |
| About & People | yes, no photo layer | "INDEPENDENT SINCE 2016 —" | yes, window **hl-08** (shade maker) |
| Journal (index, archive, single) | yes (single: post title in the head, featured image as photo layer) | "NOTES FROM THE SHOWROOM FLOOR —" | — |
| Contact / Book a visit | yes, no photo layer | "WRITE, CALL OR WALK IN —" | yes, window **hl-05** mirrored variant |
| Cart / Checkout / Account | short head (34vh), no marquee | — | — |

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
FIGARO opens on a **black curtain**: an oversized stencil wordmark cut into strips, a two-line monospaced caption ("spatial design with a focus on retail and interior spaces"), and a caps studio line. Then the curtain flips to light grey, the wordmark turns dark, a giant thin-caps sentence about being "light on the surface, heavy underneath" starts running sideways, and a strip of client logos sits at the bottom. Scrolling further, the page drops into a **dark perspective room** with one lit photograph set in its wall like a window. Story: *restrained on the surface, everything underneath is strategy* — a quiet, almost empty frame in which only one small lit area matters. Signature motion: the **dark → light switch of the whole stage**, then sideways-running thin caps.

### (2) Our translation (same composition, same motion idea, same image type = photograph)
A buyer in a dim stone bay of the showroom reaches for the switch of a floor lamp. The page loads **dark** (the curtain), then the lamp "comes on": the curtain lifts and the low-key photograph appears, lit only by that lamp at the right. The stencil wordmark HIKARI sits where FIGARO's wordmark sits, the mono caption and caps line underneath, the thin-caps sentence "Light is the quietest furniture in the room" runs across, and the **light ground slides up** at the bottom as the info bar (today's hours, the address, how many pieces are on the floor this month). Further down the page drops into the dark room box, whose single lit window shows the showroom floor. Same story, our industry: *a quiet room in which one lit lamp is the point.*

### (3) KV checklist (all six visible in the first screen at 1440×900 and 390×844)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Black curtain `#0F0F0F` filling 100% of the first frame | Full-bleed low-key photo of a stone bay; warm-black curtain `#1A1512` over it that lifts ("lights on"); static left scrim `linear-gradient(90deg, rgba(26,21,18,.62) 0%, rgba(26,21,18,.38) 55%, rgba(26,21,18,0) 78%)` keeps type legible | Cover alignfull, `min-height:100svh` (min 640px, max 1000px); photo focal point at the right third (`object-position: 72% 50%`, mobile 78% 50%) | curtain .94 → 0, 1.2s `cubic-bezier(.23,1,.32,1)` .2s delay (CSS on load); Cover background `sp-parallax`, `--sp-par: 8%` (mobile 5%) | **hl-01** |
| 2 | Giant stencil wordmark 1000×165 at x40 y260 | Own SVG stencil wordmark "HIKARI" (built from straight polygons, 8px stencil gaps cut through every letter; H crossbar detached, K arms detached from the stem, A crossbar floating, R bowl and leg split), `#F2F2F2`, `role="img" aria-label="Hikari Lighting"` | x40, top 260px, width 1000px (viewBox 1000×165); ≤1199px: width `calc(100vw - 80px)`; mobile x24, width 342px (h 56px) in normal flow | none (stays light while the room lights up behind it) | — |
| 3 | Two-line mono caption under the wordmark (14/21px, grey) | "An independent lighting showroom / for homes and small dining rooms." IBM Plex Mono 400 0.875rem / 1.5, `rgba(242,242,242,.72)` | x40, 43px below wordmark (y 468) | none | — |
| 4 | Caps studio line (~20px caps) + Japanese one-liner + "Studio ↗" link at x1000 | **H1** "LAMPS, FITTINGS AND LIGHT PLANS. ROTTERDAM." Outfit 600 1.25rem caps `#F2F2F2`; under it Figtree 0.875rem line "Quiet on the surface. Every lamp is chosen for one room." ; "Showroom ↗" mono link at x1000 on the caption's baseline | x40 y540; link right-aligned to x1040 (end of wordmark) | none | — |
| 5 | Thin-caps statement running sideways | "LIGHT IS THE QUIETEST FURNITURE IN THE ROOM —" Outfit 200 5rem, white 92%, bleeding both edges | y 610–690 desktop; mobile 2.75rem below the H1 | `sp-marquee`, 40s linear infinite | — |
| 6 | Light ground revealed + "WE WORK WITH :" strip at the bottom of the fold | **Info bar** on solid `#F2F2F2`, height 72px, full width, mono 0.875rem ink: label "OPEN TODAY :" (12px Outfit 600 caps, tok(b)) · `● Wed–Sat 11:00–18:00, Sun 12:00–17:00` (dot 6px lamp-brass `#C9A063`) · `Steenkade 14, Rotterdam` · `On the floor: 6 pieces, November ↗` · `Book a visit ↗`; items spread `justify-content: space-between` within 40px gutters | bottom 0 of the hero (in flow, last child of the Cover's inner container stretched full width); mobile: 2 rows (hours + Book a visit ↗ / address), ~96px, in flow | slides up `translateY(100%) → 0`, 0.8s `cubic-bezier(.23,1,.32,1)`, 1.0s delay (CSS on load) | — |

KV images to add to the image list: **hl-01** (listed in section 9, home). No item may be dropped as "content"; the info bar is the row's `full-bleed-photo-info-bar` requirement and our version of the light ground.

---

## 3. Colour

From FIGARO (roles and proportions, tok(a)); the dark is moved from neutral black to 黒橡 warm blacks because the product is light and a neutral `#0F0F0F` would duplicate Yoru Bar's `#0D0D0D` ground.

| Role | Hex | Source | Use | Share of a page |
|---|---|---|---|---|
| Ground | `#F2F2F2` | FIGARO ground `#F2F2F2` (exact) | page ground, info bar, footer | ≈55–60% (ref ≈70%; room boxes take the rest) |
| Ink | `#0E0E0E` | FIGARO ink `#0E0E0E` (exact) | headings and body on light, marquee on light | ≈8% |
| Curtain / front wall | `#1A1512` | FIGARO dark `#0F0F0F`, hue moved to 黒橡, lightness +3% (within ±5%) | KV curtain, page heads, room-box front wall, header after scroll on dark pages | ≈20% |
| 黒橡 wall | `#3F332C` | design row hex 黒橡; plays FIGARO's lighter ceiling grey `≈#3A3A3A` | ceiling gradient end, side wall gradient end, product card ground | ≈6% |
| Ceiling light | `#5A4C43` | FIGARO ceiling top `≈#4A4A4A`, warmed | ceiling gradient start | ≈2% |
| Side wall | `#2B231F` | FIGARO side wall `≈#1A1A1A`, warmed | side wall gradient start | ≈3% |
| On-dark text | `#F2F2F2` | FIGARO white on dark | text on dark | — |
| Caption grey | `#9A928C` on dark / `#6B6560` on light | FIGARO grey caption `#AAAAAA` (on dark kept close; on light darkened for 4.5:1 contrast) | captions, meta | — |
| Accent: lamp brass | `#C9A063` | none in FIGARO (accent = none); added as the only industry colour: the colour of a 2700K glow | 6px "open" dot, active-nav bracket on hover, price-table rule under the header, focus ring | **≤1%** |

- No beige-led page: ground is FIGARO's cool light grey; warmth lives only in the dark planes and the photos.
- Contrast: ink on ground 18:1; `#F2F2F2` on `#1A1512` 16:1; `#6B6560` on `#F2F2F2` 5.0:1; brass is never used for text.
- **First-screen saturation cap: 15%** (`scripts/check-first-screen.py`; the row allows ≤30%, the reference measures 0%). **Target ≤6%**: the only saturated pixels are the lamp's amber pool in hl-01 (kept small by STYLE) and the 6px dot. No coloured UI on the hero.

---

## 4. Typography (font_direction **sans**)

- Latin headings & wordmark text: **Outfit** (variable, 200–600) — FIGARO uses Manrope 600 (tok(b)); Outfit is the row's font and the closest geometric sans.
- Latin body: **Figtree** 400/500/600 (row font).
- Labels, nav, captions, info bar: **IBM Plex Mono** 400/500, Latin only (FIGARO's exact label face, tok(b); this is the mono signature of the reference; limited to ≤0.875rem text).
- zh-TW: **Noto Sans TC** (黑體) 300/400/500/700 for headings and body; ja: **Noto Sans JP** (黑體) same weights. No Mincho/明體 anywhere.
- Stacks (theme.json `fontFamilies`, all loaded with `fontFace` from `assets/fonts/`, woff2, so editor iframe and front end are identical; zh-TW/ja subset files as Hokuto/Hada do — the subset script is broken, use their replacement method):
  - heading: `"Outfit", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`
  - body: `"Figtree", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`
  - mono: `"IBM Plex Mono", "Noto Sans TC", "Noto Sans JP", ui-monospace, monospace`
  - `:lang(zh-TW)` puts Noto Sans TC first, `:lang(ja)` puts Noto Sans JP first; because style.css uses `:lang(`, copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it.
- Size presets (theme.json):
  | slug | size | use | token |
  |---|---|---|---|
  | x-small | 0.75rem | caps label "OPEN TODAY :", "[ 01 ]" | tok(b) 12px caps label |
  | small | 0.875rem | mono caption, nav-like links, meta (lh 1.5) | tok(b) 14px/21px |
  | medium | 1rem | body (lh 1.5 en/fr/de; CJK 0.9375rem, lh 1.85) | tok(b) body 16/24 |
  | large | 1.25rem | caps tagline / H1 on KV (Outfit 600, caps, ls .01em) | tok(b) ≈20px caps |
  | x-large | 3.125rem | section H2 (Outfit 600, lh 1.0, ls -0.01em) | tok(b) hero 50px/50px |
  | xx-large | 4.25rem | inner page titles in the dark head (Outfit 600, lh 1.0) | — (≥4.25rem rule) |
  | huge | 5rem | marquee (Outfit 200, lh 1, caps) | tok(b) ≈80px weight 200–300 |
  Max preset = 5rem (≥4.25rem satisfied). Nav: IBM Plex Mono 400 1rem / 1 (tok(b) nav 16/16).
- CJK: headings ≈0.75× the English size (x-large → 2.375rem, xx-large → 3.25rem, huge → 3.75rem, weight 300 for the marquee, 500 for headings); never `text-transform`; body 0.9375rem lh 1.85. fr/de: `hyphens:auto`, `overflow-wrap:anywhere` on H2s.

---

## 5. Header and footer

- Header (tok(c) 93px, 6 links evenly spread, tok(f) brackets): height 93px desktop / 64px mobile; left x40 a small stencil wordmark SVG (120×20, same drawing as T1); then nav `[ Home ]  Lamps⁶  Rooms  Fitting  Projects⁴  Visit  Journal` + `Bag (0)` spread with `justify-content: space-between` from x220 to x1400; IBM Plex Mono 400 1rem. Current item gets `[ ]` brackets (pseudo-elements, 1px letter gap). Over the KV and dark page heads the header is transparent with `#F2F2F2` text; on scroll past 80px (CSS `position:sticky` + a class toggled by **IntersectionObserver on a sentinel**, no scroll listener) it becomes `#F2F2F2` with ink text, no border, no shadow (tok(d)). Mobile: wordmark left, `Bag (0)` and `Menu` (mono text) right; overlay menu `#1A1512` full screen with links in Outfit 300 2.25rem.
- One top menu only. No sidebar anywhere.
- Footer: `#F2F2F2`; marquee T2 ink line at the top; then the large stencil wordmark (ink `#0E0E0E`, 1000px at x40) echoing FIGARO's inverted wordmark; under it 4 mono columns: address + hours, phone/e-mail, pages, "Independent since 2016"; bottom mono line "© 2026 Hikari Lighting".

---

## 6. Home page

### First screen (1440×900)
Exactly the KV checklist: header (transparent, light text) → Cover hl-01 full-bleed with curtain lift and parallax → stencil wordmark x40 y260 → mono caption y468 + "Showroom ↗" at x1040 → H1 caps line y540 + one-liner → marquee y610–690 → info bar 828–900 on `#F2F2F2`. Lamp and buyer occupy the right 28% of the photo (x 1080–1400), right of the end of the wordmark (x1040), exactly where FIGARO leaves its frame empty.
Forbidden on the first screen: table, form, search box, buttons in colour, centred giant text, cutouts.

Mobile 390×844: header 64px → wordmark 342px wide at y≈220 → caption → H1 1rem → one-liner → marquee 2.75rem → info bar 2 rows. All type in **normal flow** (Cover inner container `display:flex; flex-direction:column; justify-content:flex-end`), no absolute or vertical labels, no overlaps.

### Block order (alternating-longform: dark / light / dark …)
| # | Pattern | Ground | Purpose | Layout and photos | Copy |
|---|---|---|---|---|---|
| 1 | `hl-kv` | dark photo | key visual | **T1 + T2**, KV checklist; hl-01; `sp-parallax` | ≈30 words |
| 2 | `hl-intro` | light `#F2F2F2` | who we are (FIGARO after-intro frame, continued) | padding-top 180px (tok(c)); 12-col grid: left cols 1–4 a mono caption "[ 01 ] The showroom" + caps line "AN INDEPENDENT SHOWROOM SINCE 2016."; right cols 6–11 two paragraphs (Figtree 1.125rem lh 1.6) about choosing lamps for one room at a time, then "Visit the showroom ↗". Under it, full width, the label "WE STOCK WORK FROM :" (Outfit 600 0.75rem caps) and a **static** single row of six fictional workshop names in Outfit 500 1.25rem caps ink at 70% (Atelier Vermeul, Norrland Spun Metal, Casa Trevi Ceramica, Lindgren Paper Shades, Oakhurst Turnery, Studio Pellan), evenly spread like the logo strip — text only, no logos. | 110 words, 2 paragraphs |
| 3 | `hl-floor` | dark room box | which pieces stand on the floor this month | **T3** standard: window **hl-02**, vertical stencil word left; below: label "[ 02 ] On the floor — November", H2 "Six pieces, / one room at a time." (two lines), paragraphs about the monthly floor (the floor is re-set on the first Wednesday of each month; pieces can be borrowed for 7 days); link "See the six pieces ↗" → Lamps | 90 words, 2 paragraphs |
| 4 | `hl-pieces` | light | three featured lamps | three **alternating rows** (alternating-longform): row A image left cols 1–6 (4:5, 560×700, radius 0, on `#3F332C` ground) + text right cols 8–12; row B mirrored; row C as A. Each text: mono "[ 01 ] Floor", name Outfit 600 2.25rem, room line ("For: living rooms, reading corners"), price Figtree 600 1.25rem, 40-word note, "View piece ↗". Products **P1 Bay Floor Lamp, P5 Cairn Table Lamp, P6 Low Pendant Trio**. With WooCommerce these are product links (static markup with product URLs is fine); without WooCommerce they link to /lamps/. "All six pieces ↗" under the last row. | 3 × 45 words |
| 5 | `hl-rooms` | light | which rooms the lamp is for | H2 "Which room / is it for?" + label "[ 03 ] Rooms"; then **FIGARO project rows**: row 1 mono title line "Dining rooms, small restaurants — pendants hung 65–75 cm above the table ↗" then **hl-03** 2:1 at 1360×680 (`sp-reveal sp-reveal--wipe`); row 2 "Reading corners, bedrooms — wall lights and low table lamps ↗" then **hl-04** 2:1 (wipe); then three mono text rows (no image) separated by 1px `#0E0E0E` 15% rules: "Living rooms ↗", "Halls & stairs ↗", "Kitchen tables ↗" — all link to the Rooms page anchors. | 2 × 25 words + 3 lines |
| 6 | `hl-specify` | dark room box (mirrored) | how a fitting is specified | **T3 mirrored**: window **hl-05**, vertical word right; below: label "[ 04 ] Fitting & specification", H2 "Specified in / your room.", three prose paragraphs (not a step grid): the 90-minute home consultation (€120), the written light plan with lamp positions, bulb (2700K) and dimmer for each fitting, and the 7-day home trial before you buy (€50 refundable deposit); link "Fitting & prices ↗" | 120 words, 3 paragraphs |
| 7 | `hl-visit` | light | visit the showroom | two columns: left cols 1–6 **hl-06** 3:2 (720×480, radius 0); right cols 8–12: label "[ 05 ] Visit", H2 "Steenkade 14, / Rotterdam.", a mono definition list (Wed–Sat 11:00–18:00 / Sun 12:00–17:00 / Mon–Tue by appointment / +31 10 555 0142), one 40-word paragraph (tram stop, step-free entrance, parking), "Book a visit ↗" | 60 words |
| 8 | `hl-journal` | light | notes from the floor | label "[ 06 ] Journal" + H2 "Notes from / the floor."; two posts side by side (cols 1–6, 7–12), 3:2 images **hl-07** (post 2) and **hl-08** (post 3), mono date + Outfit 500 1.5rem title; "All notes ↗" | Query Loop or static |
| 9 | footer | light | — | T2 marquee + inverted stencil wordmark (section 5) | — |

English home ≥ 250 words (target ≈ 420), narrative paragraphs in #2, #3, #6 (≥3). CJK home ≥ 500 characters.
Home photo positions (11): hl-01 · hl-02 · P1 · P5 · P6 · hl-03 · hl-04 · hl-05 · hl-06 · hl-07 · hl-08. No image twice.

### Comparison with the most recent themes
| # | Getsuji Payroll | Hatake Greens | Yoru Bar | Suzu Ballet | **Hikari Lighting** |
|---|---|---|---|---|---|
| 1 | framed daylight photo + navy logo panel + white message panel | full-bleed aerial-style photo, wide-tracked 2-line H1 bottom-left, triangle logo | two dark foreground objects framing, centred moon emblem, dark info bar | arch-clipped photo + thin caps headline over the shoulders | **dark curtain lifts on a low-key photo; stencil wordmark x40 y260; mono caption; marquee; light `#F2F2F2` info bar** |
| 2 | about: photo left + dot pattern | sage intro strip + portrait | 50/50 service panel | horizontal day strip | **light intro + text-only maker row** |
| 3 | three doors (thumbs) | reasons statement | three-strip 50/50 | about 2 columns | **dark room box with one lit window (T3)** |
| 4 | pick-up photo right | triangle + 5 cards | circle photo story | three reasons with hairlines | **three alternating product rows** |
| 5 | notes 3 columns | full-bleed packing photo | white-wash ripple | classes panel | **FIGARO project rows: 2:1 room images + mono titles** |
| 6 | people | packing cards | seats split | day hour-by-hour | **mirrored dark room box (specification)** |
| 7 | … | … | … | … | **visit: photo + mono hours list** |
| 8 | … | … | … | … | **two journal posts** |
Why not alike: none of the four uses a dark curtain intro, a stencil wordmark, a running thin-caps marquee or a perspective room box. Yoru Bar also has a bottom info bar but it is a translucent dark bar over a centred-emblem composition; ours is solid light grey and is the "flip" edge of a left-aligned FIGARO composition. Suzu's thin caps headline is static and sits on an arch photo; ours is a moving marquee on a full-bleed low-key photo. No people grid, no step grid, no timeline, no cards with icons.

---

## 7. Inner pages (≥ 8 + WooCommerce templates)

Each page: T1 dark head (bracket label `[ Page ]` mono, title xx-large Outfit 600, 2-line mono caption, T2 marquee at the bottom of the head) → light body (padding 180px top desktop / 96px mobile, container 1360 with 40px gutters, mobile 24px) → close line "Questions? Write to us ↗" (mono). Radius 0 everywhere.

1. **Lamps** (`archive-product.html`, `taxonomy-product_cat.html`, `product-search-results.html`): head "Lamps / Six pieces on the floor this month."; **T3** room box with hl-02 and 2 paragraphs about the monthly floor and the 7-day trial. Category links as mono brackets `[ All ]  Floor  Table  Pendant  Wall` (active bracketed). Grid 2 columns desktop (gap 40px), 1 mobile: image 4:5 on `#3F332C` ground, under it one mono line "Bay Floor Lamp ———— €690" (name left, price right, nowrap) and a Figtree line "For living rooms, reading corners". Add-to-bag = mono text link "Add to bag ↗". Result count/ordering mono, right.
2. **Single product** (`single-product.html`): short dark head (product name). Body: gallery left cols 1–7 (4:5, radius 0), summary right cols 9–12: mono category, title Outfit 600 3.125rem, price, short text, a mono spec list (dimensions, materials, bulb E27 2700K included, cable 2.5 m, dimmable yes/no), "For: <rooms>", quantity + "Add to bag" (filled ink `#0E0E0E`, `#F2F2F2` text, radius 0, height 52px), line "Free delivery in the Netherlands over €300 · 7-day home trial · 30-day returns". Below: tabs (Description, Specification, Delivery), related products (3, same cards). Footer marquee.
3. **Rooms** (`page-rooms`): head "Rooms / Which room is the lamp for?". Five **FIGARO project rows** with anchors: #living hl-10, #dining hl-03, #reading hl-04, #halls hl-09, #kitchen hl-11; each row: mono title line, 2:1 image (wipe), then 2 columns: left a 70-word note on height, glare and colour temperature for that room; right a mono list of the matching pieces with prices (links). Small restaurants are described inside #dining (up to 40 seats).
4. **Fitting & Specification** (`page-fitting`): head "Fitting / Specified in your room."; **T3** room box hl-05; four prose sections in alternating rows (text 5 cols / image 6 cols): Consultation (hl-12), Light plan (no image, text only full 7 cols), Home trial (no image), Installation & repair (hl-07); then the **price list** (section 10) as a full-width table; then a 4-question FAQ as plain H3 + paragraphs.
5. **Projects** (`page-projects`, or posts in category Projects shown with the same template): head "Projects / Four rooms, lit after dark."; four project rows: 01 A stone bay in Kralingen (hl-10), 02 Café Noor, 28 seats (hl-03), 03 A reading corner under the stairs (hl-04), 04 A kitchen table for six (hl-11). Each: mono title "01 — Kralingen · living room · 2025", 2:1 image (wipe), 90-word story, mono line of the pieces used.
6. **Visit the showroom** (`page-visit`): head "Visit / Steenkade 14, Rotterdam."; **T3** room box hl-06 (the window shows the shop window at dusk); under it hours, address, getting here (tram 7, stop Steenkade, 2 min; bicycle racks; step-free), appointments (Mon–Tue), what to bring (room photo, floor plan, ceiling height); second image hl-02 3:2 "what is on the floor".
7. **About & People** (`page-about`): head "About / Independent since 2016."; **T3** room box hl-08; 3 narrative sections (why one room at a time; how pieces are chosen; repairs and loans); **people as text rows** (not a grid, no portraits): six rows, mono name left cols 1–4, role cols 5–7, one sentence cols 8–12, 1px rules between; hl-07 2:1 after the second section.
8. **Journal** (`home.html`, `archive.html`, `single.html`): head "Journal / Notes from the showroom floor."; posts as FIGARO project rows (mono date + title line, 2:1 image, 30-word excerpt). Single: dark head with the title and the featured image at 0.35 as the photo layer, text column 680px, mono meta.
9. **Contact / Book a visit** (`page-contact`): head "Contact / Write, call or walk in."; **T3 mirrored** room box hl-05; address, phone, e-mail, hours as a mono list; a simple booking form (Contact Form block or plain form markup: name, e-mail, date, room type, message) below — not on the first screen.
10. **Cart / Checkout / My account / Order received**: short dark head; main column on ground, totals column on `#FFFFFF` panel with no border, radius 0; buttons filled ink; notices with a 3px `#C9A063` left rule. Graceful fallback without WooCommerce.
11. **404 / search**: dark head with the marquee "THIS ROOM IS STILL DARK —" + link home.

---

## 8. Scroll effects (three, from stage-a candidates; sp-scroll v1/v2 only)

| Effect | sp class | Where | Source on FIGARO | Trigger / time / easing |
|---|---|---|---|---|
| Parallax | `sp-parallax` | (a) **Hero Cover** `hl-kv`: background hl-01 moves, foreground (wordmark, caption, H1, marquee, info bar) is static. `--sp-par: 8%` desktop, **5% mobile** (keep it on mobile). (b) every room-box window `figure.hl-window.sp-parallax` (img inside), `--sp-par: 10%`, mobile 6%. | room box + vertical word move with scroll (tok(g)) | scroll-linked (CSS `animation-timeline: view()`, IO fallback in sp-scroll.js); none under reduced motion / `?sp-static` / editor |
| Marquee | `sp-marquee` | KV statement, every inner page head, footer | thin-caps statement moving horizontally (tok(g)) | continuous, one loop 40s linear (estimate; not measured) |
| Wipe reveal | `sp-reveal sp-reveal--wipe` | the 2:1 images of FIGARO project rows (Home block 5, Rooms, Projects, Journal index) — clip on the child img, never on the observed figure | dark → light stage swap (estimated 0.8–1.2s ease-out, tok(g)) | IO on entry, 1.1s `cubic-bezier(.77,0,.175,1)` (sp default), once |

- Hero: no sp-reveal. The hero curtain/info-bar load animations are theme CSS gated exactly like sp-scroll hidden states (section 1 T1).
- Not used: reveal on text, stagger, count (one page ≤3 effect types). Price table, forms and legal text: no effects.
- `check-parallax.mjs` must pass desktop and mobile (≥6px layer offset; 0 under reduced motion; ≥3 wipes hidden before entry on Rooms/Home and shown after).

---

## 9. Images (18, Grok, one at a time; read every one)

Imagery: **photo** (follows FIGARO, which is photographic). STYLE (exact string on every prompt):
`photorealistic low-key interior photograph, 35mm lens, dim room lit mainly by one or two warm lamps at 2700K, deep soft shadows, matte limestone, lime plaster, oak and linen surfaces, muted desaturated palette of charcoal, warm grey and umber with small pools of soft amber lamp glow, calm quiet documentary moment, diverse adults, contemporary international European setting, fine film grain, no text, no logos, no brand marks, no signage lettering, no Japanese elements`

18 images: 12 scenes (hl-01–hl-12) + 6 product shots (P1–P6). No cutouts. ≤300 KB, ≤2000px, webp; readme line per image (AI-generated). Lamp glow must stay small (first-screen saturation).

| ID | Subject / composition | Ratio | Pages (each at most once per page) |
|---|---|---|---|
| **hl-01** ★ | stone bay of a showroom at dusk, almost dark; at the right third a woman in her 40s (dark coat) reaches to switch on a linen-drum floor lamp on a travertine base; the lamp throws a small warm pool on the stone floor; left two thirds are a plain dark limestone wall and floor (room for type) | 16:9 (2000×1125) | **Home KV** only |
| **hl-02** ★ | showroom floor this month: six lamps (floor, table, pendant) lit on low stone plinths in a dim room, a staff member adjusting one shade | 4:3 | **Home room box A**; Lamps room box (Lamps head: no photo layer); Visit second image; Journal post 4 |
| **hl-03** ★ | small restaurant dining room in the evening, three low glass pendants over oak tables, empty chairs, warm pools on the tables | 2:1 | **Home rooms row 1**; Rooms #dining; Projects 02 |
| **hl-04** ★ | reading corner: armchair, swing-arm wall light lit, books on a low shelf, person reading, rest of room dark | 2:1 | **Home rooms row 2**; Rooms #reading; Projects 03 |
| **hl-05** ★ | lighting planner and a client at a stone table in the showroom, one holds a lamp head up to test the light, plan drawing and tape measure on the table | 4:3 | **Home room box B**; Fitting room box; Contact room box |
| **hl-06** ★ | showroom exterior at blue hour: tall shop window lit from inside showing lamps, plain limestone facade, a cyclist passing, no lettering | 3:2 / 4:3 | **Home visit**; Visit room box (Visit head: no photo layer) |
| **hl-07** ★ | repair bench: hands rewiring a vintage brass table lamp under a task light, tools laid out | 3:2 | **Home journal (post 2)**; Fitting installation & repair; About 2:1 crop |
| **hl-08** ★ | shade maker stretching natural linen over a drum frame at a workbench, one lamp lit | 3:2 | **Home journal (post 3)**; About room box (About head: no photo layer) |
| hl-09 | hall and stair at night, two plaster wall lights throwing up/down light on lime-washed walls | 2:1 | Rooms #halls |
| hl-10 | living room evening: couple reading on a low sofa, linen floor lamp and a stoneware table lamp lit | 2:1 | Rooms #living; Projects 01 |
| hl-11 | kitchen table for six under two spun-aluminium pendants, family plates being set | 2:1 | Rooms #kitchen; Projects 04 |
| hl-12 | top-down: light plan drawing, a lux meter, bulb samples and fabric swatches on an oak table under one lamp | 3:2 | Fitting consultation row; Journal post 1 |
| **P1** ★ | Bay Floor Lamp: linen drum shade, travertine base, lit, on a dark stone plinth against dark lime plaster, front view, centred | 4:5 | product; **Home pieces row 1** |
| P2 | Ledger Table Lamp: oak body, paper shade, lit, same set-up | 4:5 | product |
| P3 | Quay Pendant: spun aluminium dome 32 cm, hanging, lit, same wall | 4:5 | product |
| P4 | Lantern Wall Light: swing-arm brass with linen cone, lit, on the plaster wall | 4:5 | product |
| **P5** ★ | Cairn Table Lamp: stoneware base, pleated linen shade, lit | 4:5 | product; **Home pieces row 2** |
| **P6** ★ | Low Pendant Trio: three 18 cm smoked-glass pendants on a slim canopy, lit, low | 4:5 | product; **Home pieces row 3** |

★ = used on Home (11 positions). Per-page check: Home hl-01, hl-02, P1, P5, P6, hl-03, hl-04, hl-05, hl-06, hl-07, hl-08 · Lamps hl-02 + P1–P6 · Rooms hl-10, hl-03, hl-04, hl-09, hl-11 · Fitting hl-12, hl-05, hl-07 · Projects hl-10, hl-03, hl-04, hl-11 (head has no photo layer) · Visit hl-06, hl-02 · About hl-08, hl-07 · Journal posts 1–4 = hl-12, hl-07, hl-08, hl-02 · Contact hl-05. No image twice on one page (Rooms and Projects heads have no photo layer).

---

## 10. Fixed content and numbers (all pages, all five languages)

- Name: Hikari Lighting. Founded **2016**. Showroom: **Steenkade 14, 3011 BH Rotterdam, Netherlands**. Phone +31 10 555 0142. E-mail hello@hikari-lighting.example.
- Hours: **Wed–Sat 11:00–18:00 · Sun 12:00–17:00 · Mon–Tue by appointment**. The floor is re-set on the **first Wednesday of each month**; **6 pieces** on the floor.
- Process (prose, not a step grid): 1 visit or consultation → 2 written light plan → 3 7-day home trial → 4 installation by our partner electrician.

Price list (Fitting page table; Home quotes only €120, 7 days and €50):
| Service | Price |
|---|---|
| Showroom visit with a lighting planner (45 min, by appointment) | Free |
| Home consultation, one room (90 min, Rotterdam area) | €120 |
| Written light plan, whole home (up to 6 rooms) | €480 |
| Light plan for a small dining room or café (up to 40 seats) | €650 |
| 7-day home trial of up to 3 pieces (refundable deposit) | €50 |
| Rewiring and repair of a vintage lamp | from €65 |
| Installation by our partner electrician, per fitting | from €85 |

Products (6, WooCommerce simple products, categories Floor / Table / Pendant / Wall; tags living-room, dining, reading, hall, kitchen, restaurant; featured = 1, 5, 6):
| # | Name | Category | Price | For |
|---|---|---|---|---|
| 1 | Bay Floor Lamp | Floor | €690 | living rooms, reading corners |
| 2 | Ledger Table Lamp | Table | €340 | bedrooms, sideboards |
| 3 | Quay Pendant | Pendant | €280 | kitchen tables |
| 4 | Lantern Wall Light | Wall | €310 | reading corners, halls & stairs |
| 5 | Cairn Table Lamp | Table | €420 | living rooms |
| 6 | Low Pendant Trio | Pendant | €760 | dining rooms, small restaurants |
Delivery: free in the Netherlands over **€300**, otherwise **€15**; EU flat **€25**; click-and-collect free at Steenkade 14. Returns **30 days** unused. All pieces ship with a **2700K** bulb.

People (6, fictional; About as text rows, others mention them by name):
| Name | Role |
|---|---|
| Ines Varga | founder and buyer (opened the showroom in 2016) |
| Tomasz Rehn | lighting planner (consultations, light plans) |
| Adaeze Mensah | showroom manager (floor, visits, home trials) |
| Lucía Ferraz | shade maker (linen and paper shades) |
| Sam Okoro | repair bench (rewiring, vintage lamps) |
| Joris van Dalen | partner electrician (installation) |

Stories / projects (4): 01 A stone bay in Kralingen (living room; Bay Floor Lamp + 2 Cairn Table Lamps), 02 Café Noor, 28 seats (dining; 4 Low Pendant Trios), 03 A reading corner under the stairs (Lantern Wall Light), 04 A kitchen table for six (2 Quay Pendants). No claims of energy savings, awards, press or real brands.

Journal posts (4): 1 "Why every bulb we sell is 2700K" (hl-12), 2 "Rewiring a 1960s brass lamp" (hl-07), 3 "How a linen shade is made" (hl-08), 4 "November on the floor" (hl-02).

---

## 11. Responsive rules (hard)

- 390px first screen: no vertical text, no absolutely positioned labels over other text; KV type in normal flow; info bar wraps to two rows. The room box vertical word becomes horizontal below 782px.
- No horizontal overflow at 390 and 1280 (marquee track is inside an `overflow:clip` alignfull wrapper; `html, body {overflow-x:clip}`).
- Price list at ≥782px: table `width:100%` of the 1360 container (alignwide), columns `auto | 9rem`, price cell `white-space:nowrap; text-align:right`, nothing clipped at 800 and 1280. Below 782px every table becomes stacked (`display:block` rows, service on one line, price under it right-aligned). Same for the product spec list and Woo cart table.
- Mono list rows ("Bay Floor Lamp ———— €690") keep the price `nowrap` and right-aligned at every width.

---

## 12. Similarity to FIGARO (target ≈ 80%)

| Dimension | FIGARO (token) | Hikari |
|---|---|---|
| Ground | `#F2F2F2` ≈70% (a) | `#F2F2F2` ≈55–60% |
| Ink | `#0E0E0E` (a) | `#0E0E0E` |
| Dark | `#0F0F0F`, 100% of the first frame, ≈25% later (a) | `#1A1512` curtain (100% at frame 0) + `#3F332C` planes ≈ 30% later |
| Accent | none, saturation 0% (a) | brass `#C9A063` ≤1%; first-screen saturation ≤6% target, cap 15% |
| Heading face | Manrope 600, 50px/50px (b) | Outfit 600, 3.125rem/1.0 |
| Label face | IBM Plex Mono 14px/21px, nav 16/16 (b) | IBM Plex Mono 0.875rem/1.5, nav 1rem/1 |
| Body | 16px/24px (b) | Figtree 1rem/1.5 |
| Caps label | Manrope 600 12px caps (b) | Outfit 600 0.75rem caps |
| Statement | thin caps ≈80px, 200–300, marquee (b)(g) | Outfit 200 5rem caps, `sp-marquee` 40s |
| Wordmark | stencil 1000×165 at x40 y260 (b) | own stencil SVG 1000×165 at x40 y260 |
| Gutter / section top | 40px / 180px (c) | 40px / 180px (mobile 24 / 96) |
| Header | 93px, 6 links evenly spread (c) | 93px, 7 links + Bag evenly spread |
| Radius / borders / shadows | 0 / none / none (d) | 0 / none (1px 15% rules only in text lists) / none |
| Link arrow | "↗" 12px (d) | "↗" 12px |
| Images | B&W photos; 2:1 full-bleed project images; photo window in room box (e) | low-key colour photos; 2:1 project rows 1360×680; 4:3 window in room box |
| Decoration | "[ Home ]" brackets, 8px superscript count, vertical stencil word x40–200 (f) | same three, own wordmark |
| Motion | black → light intro swap (≈0.8–1.2s ease-out, est.), marquee, room box moves with scroll (g) | curtain lift 1.2s `cubic-bezier(.23,1,.32,1)`; marquee; `sp-parallax` hero 8% + windows 10%; wipe 1.1s |
| Layout | intro frame → statement → logos → room box → project rows (layout) | KV frame → intro + maker row → room box → product rows → project rows → room box → visit → journal |

Own material only: photos generated, copy written for Hikari, wordmark drawn from our own polygons, workshop names fictional and set as text (no logos).

---

## 13. Home acceptance checklist

1. First screen at 1440×900 shows all six KV items: low-key hl-01 full bleed (lamp and buyer right third), stencil HIKARI ≥1000px at x40 y≈260, mono caption, caps H1 line + "Showroom ↗", running thin-caps marquee (Outfit 200 ≥5rem), solid `#F2F2F2` info bar with hours, address, "6 pieces" and "Book a visit". With `?sp-motion` the curtain lifts from near-black and the info bar slides up; with `?sp-static` both are in their final state.
2. 390×844: same items in normal flow, no vertical/absolute overlapping text, info bar two rows, no horizontal scroll.
3. `check-first-screen.py` saturated share ≤15% (target ≤6%).
4. Two room boxes on Home (standard + mirrored): sloping ceiling, three tones, one window, vertical stencil word ≥140px wide; mobile horizontal word.
5. Block order equals section 6; dark/light alternation visible on the full-page screenshot.
6. FIGARO project rows on Home block 5 with 2:1 images and mono title lines; wipe on entry.
7. ≥8 image positions (11 listed), no repeat, no text/logos in photos, one STYLE.
8. Colours: `#F2F2F2` ground dominant, `#0E0E0E` ink, warm darks `#1A1512`/`#3F332C`/`#2B231F`/`#5A4C43`, brass ≤1%; no other colour.
9. Fonts: Outfit / Figtree / IBM Plex Mono + Noto Sans TC/JP via theme.json fontFace; editor and front end identical (check-editor-fonts.mjs); max preset 5rem.
10. Numbers (€120, €50, 7 days, 6 pieces, hours, 2016, Steenkade 14) identical on Home, inner pages and all five languages; ≥250 English words, ≥3 narrative paragraphs.
11. `check-parallax.mjs` passes desktop and mobile; `auto-gates.mjs` passes (first stage: home only).
12. theme-meta tags (App list only): type `store`; colors `dark`, `monochrome`, `warm`, `muted`; style `editorial`, `cinematic`, `minimal`, `typographic`.
