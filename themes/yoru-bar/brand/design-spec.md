# Yoru Bar: design spec (stage 1, binding for implementation)

Slug `yoru-bar`, reservation-only cocktail bar, type **hospitality** (WooCommerce declared compatible, not required; the site works without it). Design row b16-4: archetype horizontal-strip, hero full-bleed-photo, nav overlay, first screen `full-bleed-photo-info-bar`, page structure **booking-led**, font_direction **serif**, five languages (en, zh-TW, ja, fr, de).

Reference (main, only): **Karuizawa Whisky** https://karuizawa-whisky.co.jp/ (S5-Style #11029). Measurements: `reference-tokens.md` (cited below as token (a)–(g)); screenshots `ref/kw-*.png`, `ref/scroll-*.png`. We borrow composition, techniques, colour relationships, type relationships and motion. We do **not** copy their photos, copy, logo/emblem or a whole page layout. Our photos are generated, our copy is our own, our mark is our own moon ring.

Fixed brand facts (every page, footer and all five languages use exactly these; full list in §8): Yoru Bar, opened **2017**, basement of **Maanstraat 7, 9000 Ghent, Belgium**. **12 counter seats**, reservation only, **three seatings 19:00 / 21:00 / 23:00**. Open **Wed–Sun 19:00–01:00** (last order 00:30). Currency **EUR** in every language.

theme-meta.json labels (App list only): type `hospitality`; colors.tags `dark`, `slate`, `gold`, `muted`; style `cinematic`, `documentary`, `dark`, `elegant`.

---

## 1. Signature techniques (three, obvious at a glance; not to be softened)

### T1. Framed full-bleed KV: two huge dark foreground objects on the left and right thirds frame a small, deep centre where the emblem fades in; photo slowly settles (Karuizawa first screen, `ref/kw-first.png`)
- Reference: 1440×900 low-key photo; two enormous polished copper pot stills fill roughly 0–33% and 62–95% of the width, cut by the frame edges top and bottom; between them, deeper in the room, the centre is darker and simpler, and a white circular emblem (Ø≈150 at 1100 wide) over a two-line serif wordmark sits dead centre. Emblem fades in 2s after 0.5s; photo settles from scale ≈1.1 to 1 over 10s (token (g)). Overlay header, a vertical "SCROLL" label + 1px line at the bottom (x≈735/1440, token (f)).
- Yoru: see the Key visual concept below (KV checklist is binding). Used on **home first screen**; continued on inner page heads (see table).
- Must not be diluted: the two framing objects must each cover **≥25% of the frame width** and bleed off the left/right edges; the centre must stay visibly darker/emptier so the emblem reads; the emblem is **centred** (not bottom-left as Kura Wine); the photo is low-key (dark ≥45% of the first screen), not a pale hazy photo.

### T2. Full-viewport 50/50 panel with a struck display word (Karuizawa "Proud to be / Authentic", `ref/kw-s1.png`, and "Beyond the / Legend", `ref/kw-s2.png`)
- Reference: a panel exactly 100vh tall (900 at 1440×900, token (c)); left half is one full-height photo flush to the viewport edge (720×900, 4:5); right half is `#0D0D0D` with faint paper grain. Centred in the right half: a tan sub-head (Playfair 300, 32px/56px, `#B1A28B`) above a huge thin display word (Italiana 60–70px, lh 1.0, ls 0.8px) with **a 1px hairline running horizontally through the middle of the word, wider than the word (550px)**; then centred body text, 540px column, 16px, lh 2.1, ls .05em (token (b)).
- Yoru geometry (desktop ≥1100): section `alignfull`, `min-height: 100vh` clamped `min(100vh, 900px)` and `min-height: 720px`. Left column 50% = one photo `object-fit: cover`, height 100%, flush to left viewport edge, radius 0. Right column 50% `#0D0D0D` + grain (§2), content block 540px max centred both ways:
  - Sub-head `p.yb-sub`: EB Garamond 400, 2rem / 1.75 (32/56px), `#B1A28B`, centred.
  - Display `h2.yb-struck`: EB Garamond 400, `var(--wp--preset--font-size--xx-large)` = `clamp(3rem, 4.9vw, 4.375rem)` (70px max) / 1.0, ls .01em, `#FFFFFF`, centred. Hairline: `::after` 1px `currentColor`, width `min(550px, 100% + 80px)`, centred, `top: 56%` of the line box, `pointer-events:none`; it must visibly cross the letters (not underline them).
  - Body: EB Garamond 400 1.0625rem / 2.1, ls .05em, `#FFFFFF`, centred, 540px column, top margin 56px.
  - Link: ghost-disc link (T3 detail) centred, margin-top 48px.
- Used on home blocks 2 (`yb-service`, photo **Y2**) and 3 (`yb-list`, three-strip variant, photos **Y3/Y4/Y5**). Three-strip variant (`ref/kw-s2.png`): instead of one photo, the left half carries three tall photo strips side by side, each 125/1100 ≈ **11.4% of the viewport width**, starting at 15.7% from the left, flush to the top of the panel, heights 70% / 93% / 58% of the panel (the middle one longest), no gaps between them, radius 0.
- Mobile (<782): photo on top full width at 4:5 (single) or three strips side by side full width, height 360/480/300px (strip variant); text below, centred, padding 72px 24px 88px; display word `clamp(2.75rem, 11vw, 3.25rem)`, hairline `width: calc(100% + 24px)` capped at the viewport (no overflow).
- Must not be diluted: the panel is a **full viewport** high on desktop (not a short band), photo touches the viewport edge, the hairline **strikes through** the display word, sub-head stays tan, body stays centred.

### T3. Circle-clipped photo with an offset tan gradient disc, ghost-disc link with a long arrow (Karuizawa "Since 1653 / The Edo era" + "HISTORY", `ref/kw-s3.png`)
- Reference: on a lifted, grained dark ground, a circular photo Ø≈485px (34% of 1440) at x175–660; behind it a second disc of the same diameter, tan gradient (`#B1A28B` at the bottom → transparent at the top), offset **≈110px down**, so the two circles form a stacked "figure 8" whose lower half fades. Text right: sub-head tan + struck display word + centred body; link "HISTORY" with a Ø50 tan/grey ghost disc at 60% under the end of the word and a 65px thin arrow line (token (e)(f)).
- Yoru geometry (desktop): section ground `#2A2C33` + grain, padding 160px 0. 12-col container 1320. Figure in cols 1–5: photo `border-radius: 50%` (not clip-path, so the reveal can work on a child; §9), `width: min(485px, 34vw)`, `aspect-ratio: 1`. Disc: `::before` on the figure wrapper, same diameter, `top: 110px`, `background: linear-gradient(to bottom, rgba(177,162,139,0) 0%, rgba(177,162,139,.55) 55%, rgba(177,162,139,.85) 100%)`, `border-radius: 50%`, `z-index: -1`. Text cols 7–12 as T2 typography (sub-head, struck word, centred body 540).
- **Ghost-disc link** (used everywhere a "more" link appears, all pages): label EB Garamond 500 1.125rem uppercase ls .04em white (ink on light sections); a Ø50 disc `#B1A28B` at 60% opacity centred under the last letter; then an arrow = 65px × 1px line + 7px chevron head, gap 6px. Hover/focus: disc `scale(1.2)` .3s ease, arrow translates 6px right .5s ease (token (g) links 0.3s/0.5s). Focus ring 1px dotted tan, offset 6px.
- Used on home block 4 (`yb-story`, photo **Y6**).
- Mobile: circle `width: min(320px, 82vw)` centred, disc offset 72px, text below centred.
- Must not be diluted: both circles the **same size**, the offset disc **visible below** the photo (≥ 20% of its diameter showing), tan not grey; link always has the disc and the long arrow, never a plain underline or a filled button.

### Supporting (required, not counted): white "wash" section with a 4-tile strip bleeding off both edges (Karuizawa "QUALITY" + gallery strip, `ref/scroll-quality-after.png`, `ref/kw-s7.png`)
White ground; a near-monochrome macro liquid photo washed to white towards the edges (radial mask); centred display word in ink with the hairline through it and a spaced small sub-line **below** it (EB Garamond 600 1.125rem, ls .3em, token (b)); narrow left text column (x≈150, 360px); ghost-disc link in ink. Under it a row of 4 photo tiles touching each other, wider than the viewport so the first and last tiles are cut by the edges. Home block 5 (`yb-build`).

### Continuation to inner pages (≥4 required; all listed)
| Page | T1 framed head (full-bleed photo, centred moon ring + title, parallax) | T2 100vh 50/50 panel with struck word | T3 circle + offset disc (+ ghost-disc links everywhere) |
|---|---|---|---|
| Reserve | **Y12** | "Three / Seatings" with **Y16** | — (ghost-disc links on the seating rows) |
| The List | **Y17** | "After dark / The Short List" with **Y10** | **Y9** "Zero proof" |
| The Build | **Y8** | "By hand / Forty Turns" with **Y13**; plus the white wash section (**Y7**) and 4-tile strip (**Y3, Y10, Y11, Y4**) | — |
| On Service | **Y1** (crop on the hands) | Margit **Y5** (photo left), Lucía **Y2** (mirrored, photo right) | **Y16** "At the door / Hana" |
| Our Story | **Y6** | "Since / 2017" with **Y14** | **Y5** "Margit" |
| Private Counter | **Y14** | "Mondays / Tuesdays" with **Y12** | **Y11** |
| Kitchen | **Y15** | "Samir's / Board" with **Y11** | **Y7** (grey ripple crop) |
| Visit | **Y6** | "Find / Maanstraat" with **Y16** | **Y12** "Contact" |
| Notes index / single | plain `#0D0D0D` 50vh head, centred moon ring + struck "Notes" | single: featured image as the T2 left half above the fold | — (news rows, ghost-disc "All Notes") |

T1 on 8 pages, T2 on 9, T3 on 7 (≥4 required for each technique).

(Binding image per page: §6 "Per-page image map".)

---

## Key visual concept

### (1) Reference first screen: concept, story, signature motion
Karuizawa Whisky opens **inside the still house**: two huge polished copper pot stills, close to the lens, fill the left and right thirds and bleed off the edges; behind them a steel roof truss and a teal-grey corrugated wall; between them, small and deep in the room, the space is darker and quieter, and a white round emblem with a two-line serif wordmark sits exactly in the centre. Story: *one place, one craft, made by hand, with a long lineage* — the equipment is the hero and the brand mark is set "inside" the workplace. Signature motion: the photo settles (scale 1.1 → 1, 10s, ease-out), the emblem fades in (2s, delay .5s), a vertical "SCROLL" label + 1px line waits at the bottom; below, panels rise with blur + 32px lift.

### (2) Our transfer (reservation-only cocktail bar; same composition, same motion idea, same image type = photo)
Inside **the bar after dark, at the end of the counter**: two big dark objects close to the lens fill the left and right thirds — left, the edge of the back-bar: a tall shelf of plain unlabelled bottles and a copper shaker catching one lamp; right, a stack of chilled coupes and a glass bell jar (cloche) on the walnut counter. Between them, deeper and much smaller, under one pool of warm lamplight against an ink-blue tiled wall, a bartender's hands stir a mixing glass with a long spoon. In the dark centre our own **moon-ring mark + "YORU BAR"** fades in. Story: *a short list after dark, built by hand at one counter* — the bar tools are the heroes (as the stills are), the brand sits inside the workplace. Motion: the photo settles (scale 1.08 → 1, 10s ease-out) **and** drifts with `sp-parallax`; the emblem fades in 2s after .5s; the vertical "Reserve" cue line grows; under the fold text rises with stagger.

### (3) KV checklist (each built on the first screen; visible at 1440×900, and at 390×844 except where noted)
| # |  |  |  |  |  |
|---|---|---|---|---|---|
| 1 | Two giant copper stills framing the frame, cut by the edges (e) | Two big dark foreground objects: left the back-bar bottle shelf + copper shaker in lamplight; right the coupe stack + glass cloche; each ≥25% width, bleeding off edges, top and bottom cut | left 0–33%, right 64–100% of the frame (mobile: `object-position: 50% 50%`, both objects still cut at the edges, ≥15% each) | settle: wrapper `transform: scale(1.08)→scale(1)` 10s `cubic-bezier(.25,.46,.45,.94)` once (`forwards`); plus `sp-parallax` `--sp-par: 8%` (mobile 5%) | **Y1** |
| 2 | Deep, darker centre with the craftsman's equipment small in the room (e) | Bartender's hands stirring a mixing glass with a barspoon, small, in one pool of warm light, ink-blue tiled back wall; centre zone dark enough for a white emblem (luminance under the emblem ≤ 25%) | centre x 40–60%, y 35–75% | inside Y1 (moves with #1) | **Y1** |
| 3 | White round emblem + two-line serif wordmark, dead centre, fades in (f)(g) | Own **moon-ring mark** (inline SVG Ø140: 2px white outer ring, 1px inner ring at 8px inset, a crescent formed by a filled white circle Ø56 masked by an offset circle) + wordmark H1 "YORU BAR" two lines EB Garamond 500 2.75rem/1.0, ls .12em, white; under it Work Sans 0.8125rem ls .2em `#FFFFFF` 80%: "Cocktail bar · Ghent · since 2017". No ref logo shapes (no monogram, no laurels) | centre: block centred both ways (flex), emblem centre at 47% height | fade `opacity 0→1` 2s ease-out, delay .5s (CSS keyframe, gated `html.sp-js:not(.sp-no-motion)` inside `prefers-reduced-motion: no-preference`; otherwise visible at once) | overlay on **Y1** |
| 4 | Overlay header: logo left, "JP / EN", vertical "menu" between two 1px hairlines (c)(f) | Transparent header over Y1: moon ring 40px + "YORU / BAR" two-line EB Garamond 500 1.125rem ls .08em at x25 y20 (height 51px); right cluster at y30: "Reserve" (EB Garamond 500 1rem, tan), language "EN / FR / DE /  / " (Work Sans 0.8125rem, current white, others white 55%), then vertical "Menu" (`writing-mode: vertical-rl`, EB Garamond 0.875rem) between two 1px×60px white lines 8px apart. <782: horizontal "Menu" + two 28×1px lines 8px apart; language moves into the overlay | top | none (header turns `#0D0D0D` at 95% after the KV via sp-scroll's IO sentinel class if available, else stays transparent on home) | — |
| 5 | "SCROLL" vertical label + 1px×90px line, bottom (f) | Vertical "Reserve below" label (Work Sans 0.6875rem ls .2em, white 70%) + 1px×90px line under it; **desktop only (≥782)** | x = 51% (≈735/1440), bottom = info-bar top − 16px | line `scaleY 0→1` from top, 2s ease-in-out, repeat every 3s (static under no-motion) | — |
| 6 | (row first_screen: info bar) — no equivalent in ref; added per design row | Bottom info bar on the photo: background `rgba(13,13,13,.72)`, top 1px `rgba(255,255,255,.2)`, height 64px, container 1320. Three items Work Sans 0.8125rem ls .1em: left "Tonight · Wed–Sun 19:00–01:00"; centre "12 counter seats · seatings 19:00 / 21:00 / 23:00"; right ghost-disc link "Reserve a seat" (small: disc Ø36, arrow 40px) → /reserve/. <782: in normal flow under the emblem (not absolute), 3 stacked lines, padding 16px 24px | bottom edge | none | over **Y1** |

Image **Y1** is listed in §6 (★ home). First-screen saturated share must be ≤15% (target 8–12%): Y1 is graded to blue-ink; the warm amber is limited to the lamp glints, the shaker and the liquid (small areas). No coloured UI over the KV (tan appears only in the "Reserve" header link and the info-bar disc).

---

## 2. Colour (reference values kept; one hue shift on the lifted ground, with reason)

| Role | Hex | Source (token (a)) | Use | Share of home |
|---|---|---|---|---|
| Base dark | `#0D0D0D` | ref base `#0D0D0D` ≈55% | page ground, T2 panels, Seats lower half, Journal rows, header after scroll, overlay menu | ≈52% |
| Lifted dark | `#2A2C33` | ref lifted grained panels (History, footer, ≈`#2B2B2B`), shifted toward the row's  `#3A3E48` hue at the same lightness (±2%) — reason: the row asks for an ink-blue family; the bar's back wall is ink-blue | T3 story section, footer, inner circle sections | ≈15% |
| Ink-blue | `#3A3E48` | design row hex | form field ground, seat-diagram outlines, hairline rows on lifted ground, photo grade of walls | ≤3% |
| Text on dark | `#FFFFFF` | ref text | headings, display words, hairlines on dark, body | — |
| Muted on dark | `#9A968E` | ref footer/address grey | dates, captions, meta | — |
| Accent tan | `#B1A28B` | ref accent | sub-heads, ghost discs (60%), T3 gradient disc, header "Reserve", seat "held" fill, focus ring | ≤4% |
| Light | `#FFFFFF` | ref light section ≈12% | Build wash section, Seats top half | ≈14% |
| Ink on light | `#0D0D0D` | ref | text, hairline, ghost-disc arrow on white | — |
| Photo amber / copper | `#B8651F` (in photos only) | ref hero copper | lamp glints, shaker, liquid; never a UI colour | ≤8% of first screen |

- Grain: dark panels (`#0D0D0D`, `#2A2C33`) carry a faint paper grain like the ref: CSS `background-image` of an inline SVG `feTurbulence` (baseFrequency .9, 2 octaves) at 5% opacity; no image file. Never on white.
- Not beige, not cream: ground is near-black and pure white.
- Contrast: white on `#0D0D0D` 19:1; tan `#B1A28B` on `#0D0D0D` 7.9:1 (sub-heads OK at any size); `#9A968E` on `#0D0D0D` 6.9:1; ink on white 19:1.
- First-screen saturated share (S>0.5, V>0.35, `scripts/check-first-screen.py`): reference measured 17%; hard cap **15%**, target **8–12%** (row note allows ≤30%, the pipeline cap 15% is stricter and wins).
- Differs from recent themes: Kura Wine `#282B33`/`#33363E` slate with umber/wine; Azuke, Nagi, Susugi are light-ground. Yoru is near-black + pure white + tan.

---

## 3. Type (font_direction **serif**)

- Latin headings **and** body: **EB Garamond** (400, 500, 600, italic 400). Reference is serif everywhere (Italiana display, Playfair sub, Shippori Mincho body); EB Garamond takes all three roles.
- Latin utility only (info bar, labels, language switch, meta, form fields, small caps lines): **Work Sans** 400/500.
- zh-TW: **Noto Serif TC** () headings and body; ja: **Noto Serif JP** () headings and body. No Noto Sans /  anywhere (utility lines in CJK also use the serif stack).
- Load with theme.json `fontFamilies` + `fontFace` (local woff2 in `assets/fonts/`, including zh-TW and ja subsets made with the Hokuto/Hada method; the CJK subset script is known broken). Editor and front end load the same faces; `check-editor-fonts.mjs` must pass in en and zh-TW. style.css uses `:lang()` → copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it in functions.php.
  - `serif` (headings + body): `"EB Garamond", "Noto Serif TC", "Noto Serif JP", Georgia, "Times New Roman", serif`
  - `utility`: `"Work Sans", "Noto Serif TC", "Noto Serif JP", system-ui, sans-serif`
  - `:lang(zh-TW)` all text: `"Noto Serif TC", "EB Garamond", serif`; `:lang(ja)`: `"Noto Serif JP", "EB Garamond", serif`. CJK headings ≈0.75× the English size; CJK body line-height **1.85**, ls .05em; fr/de `hyphens: auto`.
  - CJK display word in T2/T3: translated word (e.g. , ), ≈0.75× size, the hairline still strikes through it.

| Preset | Size / lh / ls / weight | Use | Ref token (b) |
|---|---|---|---|
| small | 0.8125rem (13px) / 1.6 / .1em / 400 Work Sans | info bar, labels, dates, footer address | dates 14px ls .05em |
| base | 1.0625rem (17px) / 2.1 / .05em / 400 EB Garamond | body (centred in panels), rows | body 16px / 33.6 (2.1) ls .05em (+1px: EB Garamond small x-height) |
| medium | 1.125rem (18px) / 1.6 / .04em / 500–600 | ghost-disc link labels (caps), white-section sub-line (600, ls .3em) | link 18px; light sub 18px/600 ls .3em |
| large | 2rem (32px) / 1.75 / 0 / 400 | tan sub-heads | Playfair 300 32px/56px |
| x-large | 2.75rem (44px) / 1.0 / .12em / 500 | KV wordmark, inner section heads | — |
| xx-large | `clamp(3rem, 4.9vw, 4.375rem)` (70px max) / 1.0 / .01em / 400 | struck display words (T2/T3/white section), inner page titles | Italiana 60–70px lh 1.0 ls .8px; theme max 4.375rem ≥ 4.25rem ✓ |

- Prices: EB Garamond 500 `font-variant-numeric: lining-nums tabular-nums`, `white-space: nowrap`.
- No giant centred headline anywhere: the only centred large type is the struck display word (≤70px) and the KV wordmark (44px) — as the reference.

Header (one menu only): see KV checklist #4. The "Menu" button opens a full-screen `#0D0D0D` + grain overlay: nav items EB Garamond 2rem, centred, 1px `rgba(255,255,255,.15)` rules between; language list and address at the foot. Nav order: Reserve · The List · The Build · On Service · Our Story · Private Counter · Kitchen · Visit · Notes.
Footer (ref `kw-s9.png`): `#2A2C33` + grain, padding 120px 0 48px. Centred moon ring Ø80 + "YORU BAR" two lines, both tan `#B1A28B`; 48px below, one row of nav links EB Garamond 500 0.9375rem uppercase ls .04em, gaps 36px, with a 1px `rgba(255,255,255,.2)` rule under the row spanning 890px; then centred Work Sans 0.8125rem `#9A968E`: "Maanstraat 7 (basement), 9000 Ghent · Wed–Sun 19:00–01:00 · reserve@yorubar.example"; last line "© 2026 Yoru Bar · We serve alcohol to guests 18 and over only." Mobile: nav wraps in 2 columns, rule full width.

Grid & spacing (token (c)): container 1320 max, side padding 60px (≥1100), 40px (782–1099), 24px (<782). T2 panels 100vh (720–900). Other sections padding 160px top/bottom desktop, 96px mobile. Text column 540px. Radius **0** on all rectangles; circles only via `border-radius: 50%`; no shadows. Hairlines 1px.

---

## 4. Home page

### First screen (1440×900)
Exactly the KV checklist: Y1 edge to edge (100svh, min 640), transparent overlay header, centred moon ring + "YORU BAR" + one Work Sans line, vertical "Reserve below" cue at x 51%, bottom info bar. Nothing else. Forbidden: table, form, search, filled buttons, cross-fade slideshow, text bottom-left. At 390×844: header 64px, Y1 cover, emblem Ø96 + wordmark 2rem centred, info bar stacked in flow; no vertical text, no absolutely positioned labels.

### Block order (booking-led: who is on service → what is poured → where → how it is built → which seats → notes)
| # | Pattern | Purpose | Layout and photos | Copy (en) |
|---|---|---|---|---|
| 1 | `yb-kv` | KV (T1) | as above, **Y1**, `sp-parallax` | wordmark + 6-word line + bar 18 words |
| 2 | `yb-service` | who is on service tonight (T2) | 100vh 50/50: **Y2** (Lucía at the counter) flush left; right panel sub "On service" / struck **"Tonight"**; 2 centred paragraphs; then a centred 5-line rota (Work Sans 0.8125rem ls .1em, each "Wed · Kofi & Theo" …, 1px `rgba(255,255,255,.15)` rule between lines, 300px wide); ghost link "On Service" → /on-service/ | 110 words + rota |
| 3 | `yb-list` | the short list (T2 three-strip variant, mirrored: strips **right**, text left) | 100vh: text panel left (sub "After dark" / struck **"The List"**, 2 paragraphs in prose naming the six drinks, the €9–€16 range and the Short List at €42 — **no table on home**); strips right at 56–90% of the width: **Y3** (back-bar shelf), **Y4** (the pour, longest), **Y5** (Margit nosing a glass); ghost link "The List" | 100 words |
| 4 | `yb-story` | the place since 2017 (T3) | `#2A2C33` + grain; circle **Y6** (stone steps down to the basement door) cols 1–5 with the tan disc 110px below; text cols 7–12: sub "Since 2017" / struck **"Maanstraat"**; 1 paragraph; ghost link "Our Story" | 90 words |
| 5 | `yb-build` | how a drink is built (white wash) | white; background **Y7** (pale silver macro ripple) centred, `mask-image: radial-gradient(ellipse 60% 55% at 60% 50%, #000 40%, transparent 75%)`; centred struck **"The Build"** in ink + sub-line below "FORTY TURNS, ONE GLASS" (EB Garamond 600 1.125rem ls .3em); left text column x≈150 (cols 1–4, 360px max) one paragraph with the five steps in prose (ice, measure, stir 40 turns, strain into a −18 °C coupe, express the peel); ghost link in ink "The Build". Then the 4-tile strip, full bleed: tiles **Y8** (ice block), **Y9** (peel over a coupe), **Y10** (mixing glass + spoon), **Y11** (Samir's board), each `width: 27vw`, `aspect-ratio: 16/10`, no gaps, row `margin-left: -4vw` so the first and last tiles are cut by the viewport edges; container `overflow: clip`. Mobile: 2×2 grid, no bleed | 95 words |
| 6 | `yb-seats` | which seats are held tonight (booking) | top part white, bottom part `#0D0D0D` (split at 40% of the photo): centred struck **"The Counter"** in ink + sub-line "TWELVE SEATS, THREE SEATINGS"; **Y12** (whole counter) centred 1030/1440 = 72% wide, 16:10 (ref gallery 1030×640, token (e)), straddling the white/dark boundary, `sp-parallax` `--sp-par: 6%` (mobile 4%); on dark below: a counter diagram — 12 circles Ø18 in a gentle arc, 1px white 40% outline on `#0D0D0D` (seat numbers 1–12 Work Sans 0.6875rem `#9A968E` beneath), seats 1–8 labelled "facing the bartender", 9–12 "window end" (static illustration of the room, not live availability); then 3 hairline rows (ref news rows: 826px wide, 74px tall, padding 24px 30px, 1px `rgba(255,255,255,.2)` bottom rule): "19:00 – 21:00 · first seating · 12 seats" / "21:00 – 23:00 · second seating · 12 seats" / "23:00 – 01:00 · late seating · 12 seats", each ending with the Ø20 white round chevron → /reserve/#seating-…; under them one line "Bookings open 14 days ahead at 12:00 · €10 deposit per guest, taken off the bill"; ghost link "Reserve" | 60 words + rows |
| 7 | `yb-notes` | journal (ref news rows) | `#0D0D0D`; centred struck **"Notes"**; 3 latest posts as rows (Query Loop): date Work Sans 0.875rem `#9A968E` ls .05em at left (column 130px), title EB Garamond 1.0625rem white, single line with ellipsis, Ø20 white round chevron right; same row geometry as block 6; ghost link "All Notes" centred | Query Loop |

Then footer (ref footer), which carries address and hours.

- English home ≥300 words; narrative paragraphs in #2, #3, #4, #5 (≥3 required). CJK home ≥500 characters.
- Photo positions on home: Y1, Y2, Y3, Y4, Y5, Y6, Y7, Y8, Y9, Y10, Y11, Y12 = **12** (≥8 ✓), no image twice.
- Fixed numbers on home must equal §8.

### Comparison with recent themes (home block order)
| # | Kura Wine | Nagi Imaging | Susugi Wash | Azuke Finance | **Yoru Bar** |
|---|---|---|---|---|---|
| 1 | full-bleed 3-slide cross-fade, H1 bottom-left, info bar | scattered rounded photo field + strips headline + ticker | 50/50 photo/white split hero | tight H1 over bowed photo mosaic | **framed KV: two foreground objects, centred emblem fade, vertical cue, info bar** |
| 2 | scattered About (2:3 + 3:2) | studies | single reason | gap box on photo | **100vh 50/50 panel, struck word "Tonight", rota** |
| 3 | alternating shipment rows + vertical titles | pinned statement | bracket CTA | sticky chapters | **100vh panel with three tall photo strips (mirrored)** |
| 4 | big 3:4 + 2×2 bottles | reporting | parallax pass | fee table + figures | **circle photo + offset tan disc (T3)** |
| 5 | 50/50 split with hairline link cells | fee table | rush rows | stories | **white wash section + 4 tiles bleeding off both edges** |
| 6 | Friday text + 21:9 | parallax room | bottom-bleed photo row | FAQ | **centred 72% photo straddling white/dark + seat arc + seating rows** |
| 7 | visit band parallax | referrer cards → people → visit | sizes → fitting → specs → FAQ → CTA | dark apply band | **news rows "Notes" → footer** |
Why not alike: Kura (nearest, also dark and photo-led) has a bottom-left H1 over a cross-fade slideshow, scattered off-grid photos, vertical titles and a hairline-link 50/50 split; Yoru has a single framed photo with a **centred** emblem, full-viewport panels with a **struck** display word, a circle+disc figure, a white wash section and a seat arc — none of Kura's shapes. No price table, FAQ, people grid, step grid, sticky or timeline on home. Nagi/Susugi/Azuke are light-ground layouts with mosaics, sticky chapters and tables, none of which Yoru uses.

---

## 5. Inner pages (9 + Journal templates; all reachable from the menu or footer)

Each page = framed head (T1 small) → page body with ≥1 T2 panel → T3 circle where listed → ghost link to the next page → footer. No sidebar.

**Framed page head** (`yb-pagehead`): full-bleed photo 70vh (min 480, mobile 56vh), dark grade overlay `rgba(13,13,13,.35)`, centred moon ring Ø72 + page title in struck style (xx-large capped 4.25rem, white) + Work Sans 0.8125rem sub-line; `sp-parallax` `--sp-par: 8%` (mobile 5%). Overlay header transparent on it.

1. **Reserve** (`/reserve/`, page-reserve): head **Y12**. T2 panel "Three / Seatings" with **Y16** (Hana at the door): the three seatings, what each is good for (19:00 early and quiet; 21:00 the busiest; 23:00 the late list until 01:00). Seat arc (as home) + seating rows with anchors `#seating-1900`, `#seating-2100`, `#seating-2300`. **Booking request form** (HTML in the pattern, no plugin; `action="mailto:reserve@yorubar.example"` `method="post"` `enctype="text/plain"`): name, email, date, seating (select 19:00/21:00/23:00), guests (1–4), note; submit = outline button white 1px, EB Garamond 500 caps. House rules list as prose: deposit €10 per guest taken off the bill; free cancellation up to 24 h before (deposit refunded); seats held 15 minutes; max 4 per booking (5–12 → Private Counter); 18+. No reveal on the form.
2. **The List** (`/the-list/`): head **Y17** (a Night Martini on the walnut counter). Intro paragraph. **Price table** (all 8 items of §8, full container width) — rules in §10. T2 panel "After dark / The Short List" with **Y10**. T3 circle **Y9** "Zero proof / Not an afterthought" (Garden Tonic, Kofi). Note line: "The list changes four times a year; prices hold for the season."
3. **The Build** (`/the-build/`): head **Y8**. White wash section (as home #5) with **Y7** and the five steps written as five short paragraphs with small Work Sans numerals "01–05" inline (not a step grid). Strip of 4 tiles **Y3, Y10, Y11, Y4**. T2 panel "By hand / Forty Turns" with **Y13** (Kofi & Theo at afternoon prep). Ice facts: 25 kg block every Tuesday, cut into 5 cm cubes.
4. **On Service** (`/on-service/`): head **Y1** (crop `object-position: 50% 55%`). Rota table (Wed–Sun × bartenders + host; stacks on mobile). T2 panel "Founder / Margit Vos" with **Y5**; T2 panel mirrored (photo right) "Seasonal list / Lucía Ferrer" with **Y2**. T3 circle **Y16** "At the door / Hana Dvořák". Then the other three people (Kofi, Theo, Samir) as three centred text blocks with struck names at x-large (no photo grid).
5. **Our Story** (`/our-story/`): head **Y6**. T2 panel "Since / 2017" with **Y14**. 3 narrative sections in the 540px centred column (the former print-shop basement; why 12 seats and three seatings; why reservation only). T3 circle **Y5** "Margit" quote paragraph.
6. **Private Counter** (`/private-counter/`): head **Y14**. T2 panel "Mondays / Tuesdays" with **Y12**. Facts as hairline rows (ref news rows): whole counter, up to 12 guests, Mon or Tue 19:00–23:00, minimum spend €900, menu planned with Lucía. T3 circle **Y11**. Ghost link → mailto.
7. **Kitchen** (`/kitchen/`): head **Y15** (Samir slicing rye). T2 panel "Samir's / Board" with **Y11**. Text: bread, Comté, smoked trout, pickles; €12; served at every seating until 00:00. T3 circle **Y7** (grey ripple, crop) "Why food at a bar".
8. **Visit** (`/visit/`): head **Y6**. T2 panel "Find / Maanstraat" with **Y16**: address, the stone steps down, 6 minutes on foot from Korenmarkt tram stop, step-free access not available (stated honestly; staff help on the stairs). Hours rows (hairline): Wed–Sun 19:00–01:00, last order 00:30, Mon–Tue private hire only. T3 circle **Y12** "Contact" (email, phone `+32 9 000 17 07`). A static map is **not** used (no third-party embeds).
9. **Notes** (Journal: `home.html` / `archive.html` / `single.html`): index head = plain `#0D0D0D` 50vh with centred moon ring + struck "Notes"; posts as ref news rows (date | title | chevron), pagination as numbers + ghost link. Single: T2 panel above the fold with the featured image left and title (struck, x-large) + date + author right; body 680px left-aligned (long text is not centred), EB Garamond 1.0625rem/1.9.
10. **404 / search**: `#0D0D0D`, struck "Not here" / "Search", ghost link home.

---

## 6. Photos (17, IMAGERY: **photo**)

Reference imagery is documentary **photography** (low-key, high contrast, copper and teal-grey on near-black), so ours is generated documentary photography. Generate exactly these 17, one at a time: `IMAGE_STYLE="<STYLE>" scripts/grok-image.sh out.webp "<subject>"`. Read every image; regenerate on any text, logo, label lettering, broken face, odd hands or style drift. ≤300 KB, ≤2000px, webp. No cut-outs. ★ = used on home.

Note: the pipeline default is "high-key bright documentary"; this theme follows the reference's **low-key** look (stage-a STYLE), and keeps faces/hands clearly lit.

STYLE (exact, every prompt):
`documentary photograph, low-key, high contrast, deep near-black shadows, ink-blue and slate-grey tones with small warm amber lamp highlights and copper glints, a small modern basement cocktail bar after dark in a European city, dark walnut counter, ink-blue tiled back wall, light only from small brass lamps, 35mm lens, shallow depth of field, fine film grain, diverse adults, candid unposed moment, plain unlabelled bottles, no text, no logos, no bottle labels, no signage lettering, no brand marks, no Japanese elements`

| ID | Subject / composition | Ratio (px) | Home | Pages (max once per page) |
|---|---|---|---|---|
| Y1 ★ | **KV**. End of the counter, camera low at counter height. LEFT third, very close to the lens and cut by the frame: tall back-bar shelf of plain dark unlabelled bottles and a polished copper shaker catching lamp light. RIGHT third, close to the lens and cut by the frame: a stack of chilled coupes and a glass bell jar (cloche) on the walnut counter. CENTRE, small and deeper: a bartender's hands stirring a tall mixing glass with a long barspoon under one pool of warm light, ink-blue tiled wall behind; centre otherwise dark and quiet | 16:10 (2000×1250) | KV | Home; On Service head |
| Y2 ★ | Lucía (woman, 30s, Southern European, dark hair tied back, black shirt) at the counter polishing a coupe, three-quarter view, eyes on the glass, lamp light from the left, dark around | 4:5 (1600×2000) | service panel | Home; On Service (Lucía panel) |
| Y3 ★ | Back-bar shelf detail: rows of plain unlabelled bottles in amber and smoky glass, one lamp, vertical composition | 2:3 (1334×2000) | list strip 1 | Home; The Build strip |
| Y4 ★ | Macro of a thin stream of amber spirit poured from a steel jigger into a mixing glass with ice, black background, droplets lit | 2:3 | list strip 2 | Home; The Build strip |
| Y5 ★ | Margit (woman, 50s, Northern European, short grey hair, dark apron) in profile nosing a small tasting glass, eyes down, half her face in shadow | 2:3 | list strip 3 | Home; On Service (Margit panel); Our Story circle |
| Y6 ★ | Street-level view at blue hour: worn stone steps leading down to a dark green basement door with a small brass lamp above, old brick wall, wet cobbles, no lettering | 1:1 (1600×1600) | story circle | Home; Our Story head; Visit head |
| Y7 ★ | High-key exception inside the same style: macro of the surface of a clear stirred drink in a glass, soft silver-grey ripples, almost monochrome, bright pale background | 16:10 | build wash | Home; The Build wash; Kitchen circle |
| Y8 ★ | Theo (man, 20s, West African heritage, rolled sleeves) cutting a clear 25 kg ice block with a serrated knife on a steel bench, chips flying, side light | 16:10 | build tile 1 | Home; The Build head |
| Y9 ★ | A strip of lemon peel being twisted over a coupe, fingers only, mist of oil in the lamp light | 16:10 | build tile 2 | Home; The List circle |
| Y10 ★ | Mixing glass with ice and a long barspoon mid-stir, close, from the side, walnut counter | 16:10 | build tile 3 | Home; The List panel; The Build strip |
| Y11 ★ | Samir's counter board from above: rye bread, a wedge of hard cheese, smoked trout, small pickles on a dark wooden board | 16:10 | build tile 4 | Home; The Build strip; Private Counter circle; Kitchen panel |
| Y12 ★ | The whole counter seen from the window end: 12 dark stools in a gentle curve, guests at about half of them, two bartenders working, lamps in a row, ink-blue tiles | 16:10 | seats (parallax) | Home; Reserve head; Private Counter panel; Visit circle |
| Y13 | Kofi (man, 30s, Ghanaian heritage, black shirt) and Theo setting up in the afternoon: Kofi lining up plain unlabelled bottles, Theo carrying a tray of ice, one window of grey daylight | 4:5 | — | The Build panel |
| Y14 | The counter set for a private evening: candles, twelve coupes in a row, folded napkins, empty stools, before guests | 4:5 | — | Our Story panel; Private Counter head |
| Y15 | Samir (man, 40s, Lebanese heritage, grey beard, white apron) slicing dark rye in the small kitchen behind the bar, steel shelves, warm light | 16:10 | — | Kitchen head |
| Y16 | Hana (woman, 30s, Central European, black jacket) at the host stand inside the basement door holding a closed leather reservation book, the stone steps behind her | 4:5 | — | Reserve panel; On Service circle; Visit panel |
| Y17 | Still life: a Night Martini in a coupe on the walnut counter, a single lemon twist, the barspoon resting beside it, lamp light from the side | 16:10 | — | The List head |

### Per-page image map (binding; no image twice on one page)
| Page | Images |
|---|---|
| Home | Y1, Y2, Y3, Y4, Y5, Y6, Y7, Y8, Y9, Y10, Y11, Y12 |
| Reserve | Y12 (head), Y16 (panel) |
| The List | Y17 (head), Y10 (panel), Y9 (circle) |
| The Build | Y8 (head), Y7 (wash), Y3, Y10, Y11, Y4 (strip), Y13 (panel) |
| On Service | Y1 (head), Y5 (Margit), Y2 (Lucía), Y16 (circle) |
| Our Story | Y6 (head), Y14 (panel), Y5 (circle) |
| Private Counter | Y14 (head), Y12 (panel), Y11 (circle) |
| Kitchen | Y15 (head), Y11 (panel), Y7 (circle) |
| Visit | Y6 (head), Y16 (panel), Y12 (circle) |
| Notes posts | post 1 Y8, post 2 Y17, post 3 Y5, post 4 Y9 (featured images) |

---

## 7. Copy direction (brand.md must follow)
Quiet, exact, first person plural, no superlatives; describe what happens at the counter. No claims of awards, press, "best", health effects or real brands (spirits are generic: "a Belgian genever", "a rye whiskey"). Age line in the footer. Every language rewrites locally (no literal translation); the struck display words are translated (fr "Ce soir", de "Heute Abend", zh-TW , ja ).

## 8. Fixed numbers (identical on home, inner pages, footer and all five languages)
- **Name / place / year**: Yoru Bar · Maanstraat 7 (basement), 9000 Ghent, Belgium · opened 2017 in a former print shop's basement.
- **Hours**: Wed–Sun 19:00–01:00, last order 00:30. Mon–Tue closed (private hire only).
- **Seats & seatings**: 12 counter seats (1–8 facing the bartender, 9–12 window end); seatings 19:00–21:00, 21:00–23:00, 23:00–01:00; max 4 guests per booking.
- **Booking**: opens 14 days ahead at 12:00; €10 deposit per guest, taken off the bill; free cancellation up to 24 hours before; seat held 15 minutes; confirmation by email within 2 hours; guests 18+.
- **Process (how a drink is built, 5)**: 1 ice cut every Tuesday from a 25 kg block into 5 cm cubes · 2 measure by jigger · 3 stir 40 turns (about 30 seconds) · 4 strain into a coupe kept at −18 °C · 5 express the peel and discard it.
- **Price list (8 items)**:
| # | Item | Detail | Price |
|---|---|---|---|
| 1 | Night Martini | gin, dry vermouth, a drop of olive brine | €14 |
| 2 | Counter Old Fashioned | rye whiskey, demerara, two bitters | €15 |
| 3 | Cask Negroni | gin, bitter, sweet vermouth rested six weeks in a small cask | €15 |
| 4 | Smoke & Pear | mezcal, pear, lime, sea salt | €14 |
| 5 | Milk Punch No. 3 | rum, black tea, citrus, clarified over two days | €16 |
| 6 | Garden Tonic (zero-proof) | verjus, tonic, rosemary | €9 |
| 7 | The Short List | four half-size drinks chosen by the bartender | €42 |
| 8 | Counter Board | rye, Comté, smoked trout, pickles (Samir) | €12 |
- **Private Counter**: Mon or Tue, 19:00–23:00, up to 12 guests, minimum spend €900.
- **People (6)**: Margit Vos — founder, head bartender · Kofi Mensah — bartender, zero-proof list · Lucía Ferrer — bartender, seasonal list · Theo Lambrecht — ice & prep, bar back · Hana Dvořák — host & reservations · Samir Haddad — counter kitchen.
- **Rota**: Wed Kofi & Theo · Thu Kofi & Lucía · Fri Margit & Lucía · Sat Margit & Kofi · Sun Lucía & Theo. Hana hosts Wed–Sat; Theo hosts Sunday. Samir's board every night.
- **Notes (4 posts)**: 1 "Tuesday is ice day" (Theo, 2026-09-08, Y8) · 2 "The autumn list" (Lucía, 2026-10-01, Y17) · 3 "Seat seven" (Margit, 2026-10-15, Y5) · 4 "Zero proof, full attention" (Kofi, 2026-08-20, Y9).
- **Contact**: reserve@yorubar.example · +32 9 000 17 07.
- **Walking**: 6 minutes from the Korenmarkt tram stop.

---

## 9. Scroll effects (sp-scroll; 3 effects; hero has no reveal)
Copy `pipeline/assets/sp-scroll/` unchanged into `assets/`. Theme `:root` overrides variables only: `--sp-dur: .6s; --sp-ease: cubic-bezier(.47,0,.745,.715); --sp-dist: 30px;` (ref `appearedIn`: 0.6s, same curve, 32px rise → capped at 30px; token (g)). Stagger steps stay sp-scroll's .12s (ref queue 200ms; the step is fixed in sp-scroll.css and must not be edited).

| Effect (class) | Where | Source (Karuizawa) | Trigger / time / easing |
|---|---|---|---|
| `sp-reveal sp-reveal--up` in a parent `sp-stagger` | T2/T3 text blocks (sub-head, struck word, body, link as 4 staggered children) on home #2 #3 #4, white section text #5, seats heading + rows #6, Notes rows #7; same on inner pages | headings/text `js_appeared` blur + rise 32px, IO rootMargin 0 0 −10% 0, queue 200ms | sp-scroll IO (threshold .01), .6s `cubic-bezier(.47,0,.745,.715)`, 30px, steps .12s |
| `sp-reveal sp-reveal--wipe` | T2 panel photo (Y2) and each of the three strips Y3/Y4/Y5 (on the figure wrapper; clip is applied by sp-scroll to the child), Y12 figure in #6; inner T2 photos | photo wipe U→D 0.6s, delay 0–0.3s | sp-scroll wipe (top→bottom 1.1s `cubic-bezier(.77,0,.175,1)`, fixed in sp-scroll.css) |
| `sp-parallax` | **KV** `yb-kv` (layer `.sp-parallax__layer` = Y1 `img` inside the settle wrapper; `--sp-par: 8%`, mobile 5%), **Seats photo** Y12 (`figure.sp-parallax > img`, `--sp-par: 6%`, mobile 4%), inner page heads (`--sp-par: 8%`, mobile 5%) | hero `scaleDown` slow settle 10–16s (image drifts against the fixed emblem) | CSS `animation-timeline: view()`; IO + translate3d fallback in sp-scroll.js; static under reduced motion / `?sp-static` / editor |

- KV settle + emblem fade + cue line: CSS keyframes only (not sp-*), all gated `html.sp-js:not(.sp-no-motion)` inside `@media (prefers-reduced-motion: no-preference)`; the settle runs on a wrapper `.yb-kv__media` with `transform`, the parallax on the `img` (sp-scroll uses `scale`/`translate` properties — they compose, do not put both on the same element).
- T3 circles: plain `sp-reveal--up` on the figure wrapper (not wipe/mask: the circle is `border-radius` on the img and the disc is a pseudo-element).
- No reveal on: KV, info bar, price table, booking form, rota table, legal text, the 4-tile strip children (the strip container gets `sp-reveal--up` as one unit).
- Not used: blur (not in sp-scroll), scrollify panel snap (custom scroll not allowed), header blend-mode switch, marquee.
- Home count: ≤20 `.sp-reveal` elements; KV has 0.
- Validation: `check-parallax.mjs` desktop + mobile: KV layer shift ≥6px and Seats photo ≥6px; 0 under reduced motion; ≥3 reveals hidden before entry, none left transparent at the bottom.

## 10. Responsive rules
- **390px first screen**: no vertical text and no absolutely positioned labels/text. Vertical "Reserve below" cue and the vertical "Menu" are hidden <782 (header uses the horizontal "Menu" button). Emblem, wordmark, sub-line and info bar are in normal flow (flex column, `justify-content: center` then the bar at the end); info bar = 3 stacked lines; nothing overlaps.
- T2 panels <782: photo on top (4:5 single, or 3 strips side by side at 360/480/300px), text below; mirrored panels also put the photo first. 782–1099: panels keep 50/50, `min-height: 720px`, text column 440px.
- T3 <782: circle centred (min(320px, 82vw)), disc 72px below, text below centred.
- Strip of 4 tiles <782: 2×2 grid, no bleed, no horizontal scroll.
- Seat arc <782: two rows of 6 (seats 1–6, 7–12), no absolute positioning outside the container.
- No horizontal overflow at 390 and 1280 (`html, body { overflow-x: clip }`, bleeding rows use `overflow: clip` on their `alignfull` wrapper).
- **Price table (The List)**: at ≥782px **full container width** (`alignwide`, 1320 max, `width: 100%`, `table-layout: auto`), 3 columns: item (EB Garamond 500 1.125rem) | detail (EB Garamond 1rem, `#9A968E`) | price (right-aligned, `white-space: nowrap`, `min-width: 6ch`, tabular nums). Rows 1px `rgba(255,255,255,.2)` bottom rule, padding 22px 0. At 800 and 1280 the price column is fully visible, never clipped. **<782px every table stacks** (price list, rota, hours): each row becomes a block (item, detail, price on their own lines, price left-aligned), no horizontal scroll.
- Images: `sizes` set; Y1 `fetchpriority="high"`, others lazy.

## 11. Home acceptance checklist
1. First screen = Y1 edge to edge under a transparent overlay header; two foreground objects frame the left and right thirds (each ≥25% width, cut by the edges); centred moon ring + "YORU BAR" + one line; vertical cue at x≈51% (desktop); bottom info bar with hours, 12 seats + three seatings, and a ghost-disc "Reserve a seat". Nothing else. `?sp-motion`: emblem fades in after .5s, photo settles, parallax moves; `?sp-static`: final state.
2. First-screen saturated share ≤15% (target 8–12%); ground colours `#0D0D0D` / `#2A2C33` / `#FFFFFF`, tan `#B1A28B` ≤4%.
3. Blocks 2 and 3 are full-viewport 50/50 panels; the display words "Tonight" and "The List" are struck by a 1px hairline wider than the word; tan sub-heads above; body centred 540px.
4. Block 3 shows three tall strips of different heights with no gaps, on the right side (mirrored from block 2).
5. Block 4: circle photo + same-size tan gradient disc 110px lower, both visible; ghost-disc link with a long arrow.
6. Block 5 is white with a washed macro background, centred struck "The Build" in ink with the spaced sub-line below, and 4 tiles bleeding off both edges.
7. Block 6: Y12 straddles the white/dark boundary at 72% width; seat arc of 12; three seating rows with round chevrons.
8. Block 7: news-row Notes (date | title | chevron), then the ref-style centred footer with the tan moon ring.
9. Block order equals §4 and differs from Kura, Nagi, Susugi, Azuke per the table; no price table, FAQ, people grid, step grid, sticky section, timeline, marquee or slideshow on home.
10. 12 photo positions, no image twice; no text/logo/label lettering in any photo; all photos from §6.
11. Fonts: EB Garamond + Work Sans Latin, Noto Serif TC/JP for zh-TW/ja, theme.json fontFace, editor = front end (check-editor-fonts.mjs passes); theme max font size 4.375rem.
12. `auto-gates.mjs … en … 1 1` passes; `check-parallax.mjs` passes (KV + Seats photo).
13. English home ≥300 words, ≥3 narrative paragraphs; every number equals §8.

## 12. Similarity target (≈80%) — 
|  |  (token) |  |
|---|---|---|
| Page ground | `#0D0D0D` ≈55% (a) | `#0D0D0D` ≈52% |
| Lifted ground | grained ≈`#2B2B2B` (History, footer) (a)(screens) | `#2A2C33` (same L, ink-blue hue from the row) + grain 5% |
| Text on dark | `#FFFFFF` (a) | `#FFFFFF` |
| Accent | tan `#B1A28B` headings, buttons, disc (a) | `#B1A28B` identical, ≤4% |
| Light section | `#FFFFFF` + grey photo wash ≈12% (a) | `#FFFFFF` + Y7 wash ≈14% |
| First-screen saturation | 17% copper (a) | ≤15%, target 8–12% (pipeline cap) |
| Hero composition | two stills framing, centred emblem, 1440×900 full bleed (e) | two bar objects framing, centred moon ring, 100svh full bleed |
| Hero motion | emblem fade 2s / .5s; scale 1.1→1 10s ease-out (g) | emblem fade 2s / .5s; scale 1.08→1 10s ease-out + parallax 8% |
| Scroll cue | vertical "SCROLL" + 1px×90px, x≈735 (f) | vertical "Reserve below" + 1px×90px, x 51% (desktop) |
| Header | logo x25 y20 196×51; "JP / EN"; vertical "menu" between 1px×60px lines 8px apart (c)(f) | logo x25 y20 height 51; 5-language switch; vertical "Menu" between 1px×60px lines 8px apart |
| Display word | Italiana 60–70px, lh 1.0, ls .8px, 1px hairline through, 550px (b)(f) | EB Garamond 400 clamp(3rem, 4.9vw, 4.375rem), lh 1.0, ls .01em, 1px hairline through, min(550px, 100%+80px) |
| Sub-head | Playfair 300 32px/56px tan (b) | EB Garamond 400 2rem/1.75 tan |
| Light-section sub | Mincho 600 18px ls .3em below the word (b) | EB Garamond 600 1.125rem ls .3em below the word |
| Body | 16px lh 2.1 ls .05em, centred, 540px (b)(c) | 17px lh 2.1 ls .05em, centred, 540px (CJK lh 1.85) |
| Panel | 100vh (900), 50/50 at 720 (c) | min(100vh, 900px), min 720, 50/50 |
| Panel photo | 720×900 (4:5) flush left (e) | Y2 4:5 flush left; strips variant 11.4% wide each |
| Circle photo | Ø≈485 (34%), clip circle, tan disc offset ≈110px (e) | min(485px, 34vw), border-radius 50%, tan gradient disc offset 110px |
| Ghost-disc link | Ø50 tan/grey 60%, 65px arrow (f) | Ø50 `#B1A28B` 60%, 65px × 1px arrow |
| Gallery photo | 1030×640 centred, straddling white/dark (e)(screens) | Y12 72% (1030/1440) 16:10, straddling white/dark |
| Tile strip | 4 tiles ≈373 wide, bleeding both edges (e) | 4 tiles 27vw, 16:10, bleeding both edges |
| News rows | 826×74, padding 24px 30px, 1px rule, Ø20 white chevron (c)(f) | 826×74, padding 24px 30px, 1px rgba(255,255,255,.2), Ø20 white chevron |
| Radius / shadow | 0 / none; circles only (d) | 0 / none; circles only |
| Text reveal | blur+rise 32px, .6s, cubic-bezier(.47,0,.745,.715), 200ms queue (g) | rise 30px, .6s, same curve, .12s steps (no blur: not in sp-scroll) |
| Photo reveal | clip wipe U→D .6s (g) | sp-reveal--wipe top→bottom 1.1s |
| Imagery | documentary low-key photo, copper/teal on near-black (e) | documentary low-key photo, amber/ink-blue on near-black (§6 STYLE) |
| Footer | centred tan emblem + wordmark, nav row with rule, address centred (screens) | centred tan moon ring + wordmark, nav row with 890px rule, address centred |
