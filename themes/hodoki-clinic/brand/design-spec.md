# Hodoki Clinic: design spec (stage B, binding for implementation)

Row b9-2 · slug `hodoki-clinic` · physiotherapy clinic for desk workers and people after surgery · type **health** (WooCommerce-compatible, not required) · archetype single-column-longform · hero full-bleed-photo · nav centred · first_screen **full-bleed-photo-info-bar** · page_structure **narrative-problem-method-proof** · font_direction **serif** · **IMAGERY: photo** · five languages en, zh-TW, ja, fr, de.

References (measurements in `reference-tokens.md`, screens in `ref/`):
- **R1 (main) Lux Clinic, https://lux-clinic.jp/**: header + hero, arch photo, giant two-line light serif phrase with bleeding photos, reason cards, colour relationships, motion timings.
- **R2 (secondary) T.S.NAKAMURA Bone & Joint Clinic, https://ts-nakamura.com/**: rounded dark photo band, 10px radius + soft shadow details, photo wipe-in.

Borrow structure, technique, colour relationships, motion and the key-visual concept. Do **not** copy photos, copy, logos, the LC monogram, or either site's whole page layout. All photos are self-generated (Grok, one STYLE string), all copy is ours (brand.md).

Similarity target **80 %** to R1 on palette relationships, image presentation (arch, bleeding pair, scrim cards), scroll motion, decoration (hairline labels, `/` separators, pills), layout rhythm. Do not "tone down" the three signatures: they must be obvious at a glance.

---

## 1. Signature techniques (3, all on the home page, all continued on ≥ 4 inner pages)

### T1. Lux header + full-bleed photo hero with bottom-left headline, hairline + Latin sub-line (R1 first screen, https://lux-clinic.jp/; tokens (b)(d)(e)(f))
- **Lux**: logo top-left; at top-right a two-line phone/hours block and two pill CTAs (180×46, radius 100px, filled `#AC8655` / `#BCA866` with a → arrow inside); under them a **single centred nav row** with `/` separators. The header floats over a full-bleed 1440×900 interior photograph. Headline in white serif, two lines, at the **bottom-left** (x ≈ 52px at 1000 wide, baseline ≈ 78 % of the height), then a **60px × 1px hairline + small English sub-line** on one row, then a two-line lead. No box behind the text.
- **Ours (home block H1)**:
  - Header (absolute over the photo, height 112px desktop): row 1 (height 64px): wordmark `HODOKI CLINIC` Source Serif 4 400 1.125rem ls 0.18em left at 40px; right: phone/hours block (Nunito Sans 1.125rem 600 "+1 555 0142 300" / 0.6875rem "Mon–Fri 08:00–20:00 · Sat 09:00–14:00") then pills **"Book online →"** (filled `#4F6159`, white, 180×46, radius 100px) and **"First visit →"** (filled `#8FA398`, ink text `#1F2A25` 600, 180×46) gap 8px, right edge 24px. Row 2 (48px): centred nav, Nunito Sans 0.875rem 600 ls 0.08em, items separated by a `/` in `#6E847C` with 18px side margins: About / Conditions / After surgery / Desk workers / First visit / Fees / Therapists / Stories / Visit. Over the hero the header text is ink `#33403A` on a top white gradient `linear-gradient(#ffffffcc, #ffffff00)` 160px tall (the photo's upper area is a pale wall/ceiling, so ink reads). No scroll-driven header change (no scroll listeners): on the home page the header is absolute over the hero and scrolls away; on inner pages it is static solid `#F7F8F5` with a 1px `#DDE3DE` bottom rule.
  - Hero: Cover block, alignfull, `min-height: calc(100svh - 88px)` clamped to 640–812px desktop (so the info bar is inside 900px), **600px at 390px**. Background `hero-shoulder-guide.webp`, focal point 55 % / 45 %. Overlay: no flat dim; a bottom-left gradient `radial-gradient(120% 90% at 0% 100%, rgba(31,40,36,.58) 0%, rgba(31,40,36,0) 60%)` so white text ≥ 4.5:1.
  - Text group at bottom-left: left 72px (desktop) / 24px (mobile), bottom 96px (desktop) / 48px (mobile), max-width 720px. H1 Source Serif 4 **300**, `clamp(2.5rem, 5vw, 4.25rem)`, lh 1.35, ls 0.06em, white, two lines: **"Loosen what is held, / move like yourself again."** Then a row: 60px × 1px white hairline + 16px gap + Source Serif 4 italic 0.875rem ls 0.12em white "Physiotherapy for desk workers and after surgery". Then the lead, Nunito Sans 0.9375rem lh 1.9 white .92, two lines: "A small clinic in Fernhill since 2015. Sixty minutes for your first visit: we listen, test how you move, and start treatment the same day."
  - **Info bar** (row first_screen): directly under the photo, alignfull white `#FFFFFF`, height 88px desktop, content 1200px: three facts in Nunito Sans 0.875rem ink separated by `/` in `#6E847C` (Lux separator): "Mon–Fri 08:00–20:00 · Sat 09:00–14:00" / "2F, 41 Alder Street, Fernhill" / "First visit 60 min · $95"; right-aligned outline pill "Book a first visit →" (1px `#8FA398`, ink text, 200×44, radius 100px). At < 782px the three facts stack (one per line, `/` hidden), pill full width below; no table markup.
- **Mobile 390px**: header row 1 = wordmark left + 44px round menu button right (1px `#8FA398`); pills move into the overlay menu; nav row hidden (overlay). H1 `2.25rem` (minimum), lh 1.4; hairline row and lead kept; **no vertical text, no absolutely positioned labels over the text** (everything in normal flow inside the Cover's inner container, aligned to bottom via `justify-content: flex-end`).
- **Must not be diluted**: full-bleed edge-to-edge photo (no inset frame, no radius); headline bottom-left in white light serif (not centred, not in a side column, not ink on a white box); the 60px hairline + italic Latin sub-line; two pills top-right and the centred nav row with `/` separators below the logo row (only one top menu, no second nav).

### T2. Arch-topped photo beside a narrow text column, gradient Latin two-line label with hairline sub-label, and a small photo straddling the label off the left edge (R1 "OUR MISSION", tokens (b)(e)(f))
- **Lux**: text column 710px + gap 75 + photo 450×580 with `border-radius: 225px 225px 0 0` (a full semicircle top) on the right. Above the text: a two-line Latin label "OUR / MISSION" in Frank Ruhl Libre 300 ≈ 80px, gold gradient, the second line indented; beside line 1 a 60–70px hairline + small JP sub-label in gold. A small 281×177 photo straddles the label's top-left and bleeds 20px past the viewport's left edge, with in-image parallax (scale 1.2).
- **Ours (home block H2 "About Hodoki")**: container 1200px (outer margin 120px at 1440). Grid `710px 75px 450px` (≥ 1100px), proportional below (7fr / 0.75fr / 4.5fr).
  - Label: two lines Source Serif 4 **300** `clamp(3rem, 5.6vw, 5rem)` lh 1.0 ls 0.05em uppercase, text filled with `linear-gradient(100deg, #5E7569 0%, #B9C9C0 50%, #6E847C 100%)` (`background-clip: text`; fallback colour `#6E847C`): line 1 "ABOUT", line 2 "HODOKI" indented 1.2em. Beside line 1 (vertically centred to it, 24px after the word): 64px × 1px `#6E847C` hairline + Source Serif 4 italic 1rem ls 0.1em `#6E847C` "about the clinic".
  - Small photo `intro-band-hands.webp` 281×177 (1.59:1), radius 0, positioned so its left edge is at −20px from the viewport edge (alignfull row with negative margin, overflow clipped by `html{overflow-x:clip}`), top at the label's top −24px, overlapping the label's first letter by about 60px. It is a `sp-parallax` wrapper (`--sp-par: 6%`) with the img inside.
  - Text column: H2 Source Serif 4 400 2.25rem lh 1.5 ls 0.08em ink "We untie the knot first, then build strength." + three paragraphs Nunito Sans 1rem lh 2.0 (≈ 120 words) + outline pill "About the clinic →" (200×44, 1px `#8FA398`, radius 100px).
  - Arch: `intro-arch-room.webp` 450×580 (0.78:1), `border-radius: 225px 225px 0 0` (use `border-radius: 50% 50% 0 0 / 38.8% 38.8% 0 0` so it stays a semicircle when it shrinks), `sp-reveal sp-reveal--wipe`.
- **Mobile**: label first (3rem), small photo 60 % width bleeding off the left edge (−20px) above the label overlapping it by 24px, then text, then the arch at 86 % width centred (top stays a full semicircle).
- **Must not be diluted**: full semicircle top (radius = half width, not 24px corners, not a circle); the arch sits right of the text at ≈ 31 % of the width; the gradient two-line Latin label with the indented second line and the hairline sub-label; the small photo really bleeds off the left edge and overlaps the label.

### T3. Giant two-line light serif phrase with two photos bleeding off the left and right edges and overlapping the letters (R1 "LOVING WHO I AM NOW." band, tokens (b)(e))
- **Lux**: on the cream ground, line 1 "LOVING" (right of centre) and line 2 "WHO I AM NOW." (wider, full width) in Frank Ruhl Libre 300 ≈ 170px cap, gold gradient; a 517×280 photo bleeds off the **top-left** edge and overlaps line 1's left side; a 394×243 photo bleeds off the **right** edge about 120px lower and overlaps line 1's right end. Section top padding 160px.
- **Ours (home block H4, the hinge between problem and method)**: alignfull, ground `#ECEFEA`, padding 160px top / 120px bottom. Phrase in Source Serif 4 **300**, `clamp(4.25rem, 11.8vw, 10.625rem)` (170px at 1440 — the theme's largest size, preset `display` = 10.625rem; theme.json max ≥ 4.25rem satisfied), lh 1.0, ls 0.04em, uppercase, same green gradient as T2. Line 1 **"UNWIND"** starts at 32 % of the width; line 2 **"AND MOVE AGAIN."** spans 4 %–96 %. Photos (radius 0, both `sp-parallax`, `--sp-par: 6%`):
  - left `band-left-stretch.webp` 517×280 (1.85:1) at left −40px (bleeds), top 40px; it overlaps the "U" of line 1 by ≈ 80px; z-index above the text.
  - right `band-right-window.webp` 394×243 (1.62:1) at right −40px (bleeds), top 160px (120px lower than the left photo), overlapping the last letter of line 1.
  - Under the phrase: one centred Nunito Sans 1rem lh 2 paragraph, max-width 640px (≈ 50 words) introducing the method, and the hairline label "our method" (64px hairline + italic). The phrase is decorative text (`aria-hidden="false"`, it is real text, not an image).
- **Mobile 390**: line 1 "UNWIND" 3.75rem, line 2 breaks into "AND MOVE / AGAIN." 3.5rem; left photo 70 % width bleeding left, above line 1 overlapping it by 24px; right photo 56 % width bleeding right, between line 2's two rows overlapping by 16px. Photos are in normal flow with negative margins (no absolute positioning on mobile → no text-overlap failure in auto-gates; the overlap is image-over-text, which is intended, but keep the overlap ≤ 24px so letters stay legible).
- **Must not be diluted**: the phrase is huge (≥ 10rem at 1440), light weight (300), gradient, line 2 wider than line 1; both photos really bleed off the viewport edges, at different heights, and overlap the letters.

### Supporting (counted for similarity, not as a signature)
- **S-a Lux reason cards** (R1 REASON, token (e)): 3 tall photo cards 380×560 (0.68:1), radius 0, bottom scrim, "#01 ——" number + white title + text on the photo. Used for the method (home H5).
- **S-b Nakamura rounded dark photo band** (R2, token (d)): the section before ends with `border-radius: 0 0 50px 50px` on white; then a photo band with 50px radius corners, 45 % dark scrim, centred white text. Used for the proof case (home H6) with parallax.
- **S-c Lux icon quick-nav tiles** (token (f)): 138×112 tiles, 1px accent frame, line icon + 15px label, gap 20px. Used once, on Conditions and First visit pages (not on home, to keep home calm).
- Lux round "PAGE TOP" button 78px circle 1px `#8FA398`, bottom-right fixed (pure CSS/anchor link to `#top`, no scroll listener; always visible on pages longer than 2 screens).

### Continuation to inner pages (required)
Every inner page opens with the **T1 page head**: full-bleed photo 440px desktop / 320px mobile, same bottom-left white light serif title (`clamp(2.5rem, 5vw, 4.25rem)`) + 60px hairline + italic Latin sub-line, same radial scrim, header solid above it. Then:

| Page | T1 (page head photo) | T2 (arch + gradient label + straddling small photo) | T3 (giant bleeding phrase, inner size `clamp(4.25rem, 9vw, 8rem)`) | Supporting |
|---|---|---|---|---|
| About (`/about/`) | #13 `inner-reception` | "OUR / STORY", arch #3, small photo #2 | "LISTEN / BEFORE WE TREAT." left #5, right #6 | — |
| Conditions (`/conditions/`) | #4 `problem-desk-neck` | "WHERE / IT HURTS", arch #8, no small photo | — | S-c tiles: Neck & shoulder / Lower back / Wrist & elbow / Hip & knee / After surgery / Posture headaches |
| After surgery (`/after-surgery/`) | #18 `surgery-stairs` | "AFTER / SURGERY", arch #14 | "BACK / TO YOUR STAIRS." left #5, right #6 | S-a cards Protect / Restore / Return = #7, #9, #3 |
| Desk workers (`/desk-workers/`) | #17 `desk-workstation` | "AT THE / DESK", arch #15 | "REACH / WITHOUT BRACING." left #5, right #4 | — |
| First visit (`/first-visit/`) | #16 `team-session` | "YOUR / FIRST VISIT", arch #3 | — | S-c tiles Book / Assess / Plan / Treat / Review |
| Fees (`/fees/`) | #6 `band-right-window` | — | — | full-width price list (§6) |
| Therapists (`/therapists/`) | #13 `inner-reception` | "WHO / YOU WILL SEE", arch #11 | — | shared 3:2 photo #16 |
| Stories (`/stories/`) | #10 `proof-walk` | — | "ONE STEP / AT A TIME." left #14, right #2 | S-b rounded bands: Lena #4, Marcus #18, Noor #15 |
| Visit (`/visit/`) | #12 `visit-entrance` | "FIND / US HERE", arch #13 | — | — |
T1 on 9/9 inner pages, T2 on 7, T3 on 4 → each signature on ≥ 4 inner pages. Image numbers refer to §9. Within each page no image repeats.

---

## 2. Key visual concept

### (1) Reference first screen — concept, story, signature motion (Lux Clinic, `ref/lux-clinic-first.png`)
Lux opens on a full-bleed photograph of **its own clinic interior**: a warm, light-filled lounge with tall windows on the left, a pale upholstered sofa and a stone side table in the middle, a **white lily arrangement in the lower-left foreground**, and on the right a **long corridor of numbered consultation rooms receding** into the distance under a glowing cove ceiling. Over the lower-left, the two-line white serif headline "Adding beauty to who I am" with a 60px hairline and the English sub-line "Adding beauty to my true self.", then a two-line lead. The header floats above: logo left, phone/hours and two pills right, a centred `/`-separated nav row. **Story**: *you come into a calm, beautiful place and become more yourself* — the space itself is the promise; no person is the hero, the room is. **Signature motion**: a 3-slide crossfade of interior photos, 6s each, each with a slow **scale 1.06 drift (±1.5 %)**, `ease-in-out`; the text stays still.

### (2) Our transformation (physiotherapy; same composition, same motion idea, same image type = photo)
Same composition, our industry: a **bright, high-key treatment room** of the clinic seen from the same three-quarter angle. Left: tall windows with sheer white curtains and soft daylight. Middle: a **pale wood treatment table** where a physiotherapist (sage scrub top) guides a seated desk-worker patient (light shirt) through a shoulder raise, one hand on the shoulder blade, one supporting the elbow — this is the row's signature scene and replaces Lux's sofa group. Lower-left foreground: a **tall potted olive tree** (our lily arrangement). Right: a **row of treatment bays with pale linen curtains receding** along a corridor with numbered doors (small plain numbers 1–4, no text otherwise) — our corridor. Story: *you come into a calm, light room and start moving like yourself again* — the room and the guided movement are the promise. Headline "Loosen what is held, / move like yourself again." with hairline + "Physiotherapy for desk workers and after surgery". Motion: the crossfade + slow drift becomes a **single photo with `sp-parallax` drift** (`--sp-par: 8%`, layer scale 1.18 → reads as Lux's slow scale drift), text still. Colour grade is cool-neutral high-key (whites, pale stone, pale wood, sage) — not Lux's amber — so the first screen stays ≤ 15 % saturated.

### (3) KV checklist (implement every row in the first screen; all visible at 1440×900 and at 390×844 where noted)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Full-bleed photo of the clinic's own bright interior, edge to edge, no frame | Full-bleed high-key treatment room, therapist guiding a shoulder raise at a pale wood table | H1 Cover, 100vw × 640–812px (600px mobile) | `sp-parallax`, `--sp-par: 8%` desktop / 5% mobile (Lux scale drift) | `hero-shoulder-guide.webp` |
| 2 | White lily arrangement in the lower-left foreground | Tall potted olive tree in the lower-left foreground, partly cropped by the frame | lower-left fifth of the hero photo (inside the image; headline sits over/right of it) | drifts with the parallax layer | `hero-shoulder-guide.webp` |
| 3 | Corridor of numbered rooms receding at the right | Row of curtained treatment bays with small numbered doors receding at the right third | right third of the hero photo | drifts with the parallax layer | `hero-shoulder-guide.webp` |
| 4 | Two-line white serif headline bottom-left + 60px hairline + English sub-line + two-line lead | "Loosen what is held, / move like yourself again." Source Serif 4 300 4.25rem white + 60px hairline + italic sub-line + 2-line lead | bottom-left, left 72px, bottom 96px (mobile 24 / 48px) | none (hero: no reveal) | (on hero) |
| 5 | Header: logo left, phone/hours + two pills right, centred nav row with `/` separators | "HODOKI CLINIC" left; phone/hours + "Book online →" `#4F6159` and "First visit →" `#8FA398` pills right; centred nav with `/` in `#6E847C` | top 112px over the photo (mobile: wordmark + round menu button) | pill hover: background lightens 8 %, arrow moves 4px, .3s `cubic-bezier(.19,1,.22,1)` (R2 hover) | (over hero) |
| 6 | Practical info always at hand (Lux fixed corner banner "consultation", phone/hours) | White **info bar** under the photo: hours / address / "First visit 60 min · $95" with `/` separators + outline pill "Book a first visit →" | full width directly under the hero, 88px, inside the 900px first screen | none | none |
All KV images are in §9 (marked HOME). The olive tree and the bay corridor are in the hero subject prompt, not separate images.

---

## 3. Colour
Relationship = Lux (one pale ground ≈ 65 %, white bands, a dark warm ink, one metallic accent on labels/wordmarks ≤ 8 %, two pill colours). Changes from Lux, with reasons: (a) the **cream `#F2EBDC` ground is replaced by a pale sage-stone `#ECEFEA`** at the same lightness (Lux L 90.6 % → ours 92.7 %, +2.1 %) because the row requires a quiet low-chroma ground with no cream (common rules: no default cream/beige) and a cool high-key clinic; (b) **gold `#B99533` → Seiji-nezu (celadon grey) `#6E847C`** (row hex, same role and area); (c) brown ink → green-ink at the same lightness. Everything else (roles, areas, gradient structure, pill pair) is Lux.

| Token | Hex | Share (page) | Source token | Use |
|---|---|---|---|---|
| ground | `#ECEFEA` | ≈ 60 % | R1(a) `#F2EBDC` cream ≈ 65 %, hue changed, L +2.1 % | default page ground, T3 band, about, therapists, visit |
| white | `#FFFFFF` | ≈ 18 % | R1(a) `#FFFFFF` Reason band; R2 ground | info bar, method band (with 50px rounded bottom), fees band, cards |
| pale | `#F7F8F5` | ≈ 8 % | R1(a) `#F8F8F8` / footer `#FAF7EE` | footer, inner header, stories list ground |
| ink | `#33403A` | ≈ 8 % (text) | R1(a) `#473C2B` (L 22 % → ours 22.5 %) | headings, body, nav, prices |
| muted | `#5F6B65` | text | derived from ink | meta, captions, hours small line |
| accent | `#6E847C` | ≤ 5 % | R1(a) gold `#B99533` (≤ 8 %) → row hex | gradient labels, hairlines, `/` separators, link underline, price group numbers |
| accent-dark | `#4F6159` | ≤ 2 % | R1 LINE pill `#AC8655` | filled primary pill, active nav underline |
| accent-soft | `#8FA398` | ≤ 2 % | R1 Web pill / outline `#BCA866` | second filled pill, outline pill borders, page-top circle |
| line | `#DDE3DE` | — | R1 hairlines | price list rules, header rule |
| scrim | `rgba(31,40,36,.58)` | on photos | R1 white-on-photo; R2 40–50 % scrim | hero radial scrim, card scrims, proof band |
Gradient (T2/T3 labels): `#5E7569 → #B9C9C0 → #6E847C` (from R1 wordmark `#B79451 → #F2E3A7 → #C8A63C`, same three-stop light-middle structure). Static (R1's rAF shimmer is not reproduced).

- **First-screen saturation cap: ≤ 15 %** (`scripts/check-first-screen.py`, row note), target 4–10 %. R1 measures 61.6 % because of its amber photo; ours gets its similarity from composition, not from saturation: hero photo high-key cool-neutral, the only coloured UI on the first screen are the two small sage pills (< 1 %).
- Contrast: ink on ground ≈ 10:1; white on `#4F6159` ≈ 6.6:1; white on `#8FA398` would be only ≈ 2.6:1, so that pill always uses ink text `#1F2A25` (≈ 6:1). Accent `#6E847C` on ground is 3.6:1 → only for ≥ 1rem italic labels and decoration, never body text.
- No full-bleed accent field anywhere; dark is only the scrim over photos.

---

## 4. Typography (font_direction **serif**)
- **Latin display**: Source Serif 4 (OFL; weights 300, 400, italic 400) — Lux uses Frank Ruhl Libre 300 for its giant Latin and a serif for headings; Source Serif 4 300 gives the same light, high-contrast look. **Latin body / UI**: Nunito Sans (OFL; 400, 600) — row font; Lux body is a serif, we keep the row's humanist sans for body readability (labels, nav, prices).
- **CJK (serif direction = Mincho / serif)**: zh-TW headings **and body** Noto Serif TC; ja headings and body Noto Serif JP (Lux body is Noto Serif JP). Do not mix in Noto Sans.
- Stacks (theme.json `fontFamilies`, all loaded through `fontFace`, woff2 in `assets/fonts/`, so the editor iframe and the front end show the same faces; zh-TW/ja subset files included the Hokuto/Hada way, not the broken subset script):
  - `display`: `"Source Serif 4", "Noto Serif TC", "Noto Serif JP", Georgia, serif`
  - `body`: `"Nunito Sans", "Noto Serif TC", "Noto Serif JP", system-ui, sans-serif`
  - `:lang(zh-TW)` → display/body `"Source Serif 4", "Noto Serif TC", serif`; `:lang(ja)` → `"Source Serif 4", "Noto Serif JP", serif` (Latin glyphs stay Source Serif 4 in CJK pages). Because style.css uses `:lang(`, copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it.
- Sizes (theme.json presets; source token in brackets):

| Preset | Value | Use | Token |
|---|---|---|---|
| small | 0.8125rem | meta, info bar small line | R1 buttons 15px |
| base | 1rem (body 1rem lh 2.0) | body | R1 intro paragraph 16/2.0 |
| medium | 1.25rem | card h3, price names | R1 h3 24px scaled |
| large | 2.25rem (lh 1.5, ls 0.08em, 400) | H2 statements | R1 h2 36/54, ls .15em (we use .08em for Latin) |
| x-large | `clamp(2.5rem, 5vw, 4.25rem)` (300, lh 1.35) | hero H1, inner page titles | R1 hero headline |
| xx-large | `clamp(3rem, 5.6vw, 5rem)` (300, lh 1.0, ls .05em) | T2 gradient labels | R1 "OUR MISSION" 80px/1.0/.05em |
| display | `clamp(4.25rem, 11.8vw, 10.625rem)` (300, lh 1.0, ls .04em) | T3 phrase | R1 giant band ≈ 170px |
Max size 10.625rem ≥ 4.25rem. Section sub-labels: Source Serif 4 italic 1rem ls 0.1em accent, after a 64px × 1px hairline (R1 18–20px, 60–70px hairline). Nav 0.875rem 600 ls 0.08em. Buttons 0.9375rem 600 ls 0.06em.
- CJK: headings ≈ 0.75× the English size (H1 `clamp(1.9rem, 3.8vw, 3.2rem)`, in zh-TW/ja the T2 labels and the T3 phrase stay in English uppercase as decoration (Source Serif 4), with the translated H2/paragraph next to them carrying the meaning), body 1rem lh **1.85**, ls 0.04em. fr/de: `hyphens: auto`, `overflow-wrap: anywhere` on headings; the T3 phrase in fr/de is translated (e.g. fr "DÉNOUER / ET BOUGER À NOUVEAU.", de "LÖSEN / UND WIEDER BEWEGEN.") and must not overflow at 1280px → `font-size: min(var(display), 9.4vw)` for fr/de.

---

## 5. Home page

### First screen (1440×900)
Header 112px over the hero (T1) → hero photo to y ≈ 812 → info bar 88px visible to y = 900. Nothing else. Forbidden: table, form, search box, giant centred text, cut-outs, vertical text. Saturated ≤ 15 %.

### Block order (single-column-longform; narrative problem → method → proof)
| # | Block (pattern) | Purpose | Layout and photo position | Photo(s) | Copy |
|---|---|---|---|---|---|
| 1 | `hd-hero` + `hd-infobar` | promise, practical info | T1 as §1 / §2 | **hero-shoulder-guide** | H1 9 words + 30-word lead + 3 facts |
| 2 | `hd-about` | who we are (narrative 1) | **T2**: label "ABOUT / HODOKI", small photo bleeding left over the label, text 710 + arch 450 right; ground `#ECEFEA`, padding 113px top / 100px bottom (R1 intro) | **intro-band-hands** (small), **intro-arch-room** (arch) | H2 + 3 paragraphs ≈ 120 words |
| 3 | `hd-problem` | the problem (narrative 2) | single column 680px, left at the 1200 container's col 2 (x ≈ 220): sub-label hairline "the problem", H2 "Most of it starts at a desk, or after an operation." then 3 short paragraphs each opening with a small-caps run-in (Desk neck and shoulders · Sitting back · After surgery); after paragraph 1 a full-container-width 16:9 photo (1200×675, radius 0, `sp-reveal--wipe`) | **problem-desk-neck** | ≈ 150 words |
| 4 | `hd-unwind` | hinge to the method | **T3** phrase "UNWIND / AND MOVE AGAIN." with the two bleeding photos; centred 50-word paragraph under it | **band-left-stretch**, **band-right-window** | ≈ 50 words |
| 5 | `hd-method` | the method | white band `#FFFFFF`, padding 100/120, **bottom corners 50px radius** (R2) sitting on the ground of block 6; sub-label "our method"; H2 "Assess, loosen, strengthen."; then **S-a**: 3 cards 380×560 (gap 30, `sp-stagger`, each `sp-reveal sp-reveal--up`), radius 0, bottom scrim `linear-gradient(to top, rgba(51,64,58,.88) 0, rgba(51,64,58,.6) 42%, rgba(51,64,58,0) 70%)`; on the photo bottom: "#01 ——" (Source Serif 4 italic 1.5rem white + 40px hairline), title Source Serif 4 400 1.5rem white, 3-line text Nunito Sans 0.875rem lh 1.9 white .92. Under the row: outline pill "Your first visit →". Mobile: cards stack, 0.8:1, scrim kept. | **method-assess**, **method-loosen**, **method-strengthen** | 3 × 40 words |
| 6 | `hd-proof` | proof: one recovered case | **S-b + parallax**: alignfull band with 24px side margins (desktop) and **50px radius on all corners**, height 640px desktop / 560px mobile, Group `sp-parallax` (`--sp-par: 10%` desktop, `6%` mobile) with `proof-walk.webp` as `.sp-parallax__layer` img, scrim `rgba(31,40,36,.5)` on a separate static layer; foreground centred white: sub-label "one recovered case" (white hairline), H2 Source Serif 4 300 2.75rem "Lena went back to full days at her desk.", 2 paragraphs Nunito Sans 1rem lh 2 (max 620px), quote line in italic, outline white pill "Read more stories →". Foreground text is NOT inside the moving layer. | **proof-walk** | ≈ 120 words |
| 7 | `hd-fees` | fees | ground; sub-label "fees"; H2 "Clear prices, per visit."; **full-width price list** (§6, all 7 items) in the 1200 container; note "We give you a receipt with treatment codes for your insurer. No packages are required." + pill "All fees →" | none | 7 rows + note |
| 8 | `hd-therapists` | trust: who you will see | **T2 mirrored**: arch 450×580 **left** (`team-arch-lead.webp`, wipe), text right: label "OUR / TEAM" (gradient) + hairline "who you will see", paragraph about Clara Mendes (lead, since 2015) ≈ 60 words, then a single typographic line of the other six names and roles separated by `/` (Nunito Sans 0.9375rem lh 2) — no portrait grid; pill "Meet the therapists →" | **team-arch-lead** | ≈ 100 words |
| 9 | `hd-visit` | action | white band, padding 100/100: two columns 6/6: left `visit-entrance.webp` 3:2 radius 0 with `sp-reveal--wipe`; right: sub-label "visit", H2 "2F, 41 Alder Street, Fernhill", hours as a definition list (not a table), phone, email, transport line, two pills (Book online / First visit) | **visit-entrance** | ≈ 60 words |
| 10 | footer | — | ground `#F7F8F5`, top 1px `#DDE3DE`; wordmark, centred `/` nav repeated, 3 columns (Visit · Hours · Pages), © line; page-top circle 78px fixed bottom-right | none | — |
English home ≥ 250 words (target ≈ 650) with narrative paragraphs in #2, #3, #6 (≥ 3). CJK home ≥ 500 characters.

**Home photo positions: 12** — hero, intro small, intro arch, problem 16:9, band left, band right, method ×3, proof band, team arch, visit. No image repeats on the home page.

### Comparison with recent themes (home block order)
| # | Enishi Catering | Madoka Childcare | Hitomi Vision | Seisui Environmental | **Hodoki Clinic** |
|---|---|---|---|---|---|
| 1 | full-bleed photo, **centred** title, pill, dark info bar ON the photo | torn-frame photo, title on pale right | top/bottom halves + framed window | headline bottom-right over offset photo | **full-bleed photo, headline bottom-LEFT + hairline sub-line, header pills + `/` nav, white info bar BELOW the photo** |
| 2 | centred statement | welcome text + offset photos over blobs | problem (dome + portrait row) | site strip marquee | **arch photo + gradient Latin label + bleeding small photo** |
| 3 | zig-zag STEP timeline | approach photo + stripe heading | problem mirrored | intro 7/5 | **single-column problem text + one 16:9 photo** |
| 4 | vertical-caps course rows 2.31:1 | day schedule blobs | full-bleed interlude | photo band + 3×2 cards | **giant gradient phrase with two edge-bleeding photos** |
| 5 | tasting split | three room cards | method text column | ledger figures | **three tall scrim cards (#01 ——)** |
| 6 | price list | torn-edge garden parallax | polaroid pair case | sticky-media process | **rounded-corner parallax proof band** |
| 7 | night photo band | fees | price list | fees | price list |
| 8 | 6 circular portraits | visit band | director row | field notes | **mirrored arch + names line** |
| 9 | 3 stories | notes | visit | people ledger | visit (photo + definition list) |
| 10 | enquire | — | — | contact | footer |
Why not alike: Hitomi shares the narrative order (problem → method → proof) because both rows ask for it, but none of Hitomi's shapes (dome bands, polaroid pair, alternating 2:3 portraits) appear; Hodoki's shapes are the semicircle arch, the giant bleeding gradient phrase, tall scrim cards and the 50px-rounded parallax band. Enishi also has a full-bleed hero with an info bar, but its title is centred with a translucent pill and its bar sits on the photo in dark glass; ours is Lux's bottom-left composition with a white bar below the photo. No timeline, no step grid, no portrait grid, no blobs/torn edges, no ghost words, no marquee, no circles (also avoiding Kotoba/Oto/Ito/Kaiten: no split hero, cropped wordmark, circle photos, ink tables, 3:4 trios, loop row, blurred parallax cards, wave band).

---

## 6. Fixed facts and numbers (identical on home, inner pages, footer and all five languages)
- **Hodoki Clinic**, physiotherapy, founded **2015** by **Clara Mendes**. Address **2F, 41 Alder Street, Fernhill** (fictional town; local address formats per language in brand.md, same numbers). Phone **+1 555 0142 300** (fictional 555 range). Email **hello@hodoki-clinic.example**. Five treatment bays, one small exercise studio.
- **Hours**: Mon–Fri **08:00–20:00**, Sat **09:00–14:00**, Sun and public holidays closed. Last appointment one hour before closing.
- **Fees (USD in every language; no converted currencies)** — price list, 7 items:

| # | Item | Length | Price |
|---|---|---|---|
| 1 | First visit: assessment and treatment | 60 min | $95 |
| 2 | Follow-up treatment | 45 min | $75 |
| 3 | Short follow-up | 30 min | $55 |
| 4 | Post-surgery rehabilitation session | 60 min | $90 |
| 5 | Desk Reset small-group class (max 6 people) | 50 min | $28 |
| 6 | Workstation review (at your office or by video) | 45 min | $80 |
| 7 | Five follow-ups (45 min), used within 4 months | 5 × 45 min | $340 |
Notes: no referral needed; receipts with treatment codes for insurers; cancel up to 24 hours before at no charge.
- **Price list rendering (binding)**: list markup (or a table only if styled as below), container full width 1200px (≥ 782px the list is 100 % of the container, never a narrow column); each row: name (Nunito Sans 600 1rem) + length (muted 0.875rem) on the left, price Source Serif 4 400 1.375rem **`white-space: nowrap`, right-aligned**, in its own column `grid-template-columns: 1fr auto auto` with 32px gap; 1px `#DDE3DE` rules; at ≥ 782px no price is clipped or wrapped (auto-gates checks 800 and 1280). At < 782px each row stacks: name / length + price on one line (price right). Any other table on the site (Conditions, First visit) also stacks on mobile (`display:block` rows with labels).
- **People (7)**: Clara Mendes — founder, clinical lead, physiotherapist (neck & shoulder) · Tomasz Wolski — physiotherapist, post-surgery rehabilitation (knee & hip) · Amara Osei — physiotherapist, back pain and desk-related pain · Jonah Reed — physiotherapist, hand, wrist and elbow · Sofia Lindgren — exercise physiologist, leads Desk Reset classes · Priya Nair — physiotherapist, post-surgery shoulder · Elena Duarte — clinic coordinator (bookings, insurers).
- **Stories (3, first names only, consented composites, no guaranteed outcomes, no numbers about pain scores)**: (1) **Lena**, 34, software tester — shoulder and neck ache after long desk days; 6 sessions over 8 weeks plus a workstation review; "back to full days at her desk" (home proof). (2) **Marcus**, 58 — knee replacement; 12 rehab sessions over 14 weeks with Tomasz; walks to work again and takes the stairs at the station. (3) **Noor**, 41 — lower-back stiffness from sitting; Desk Reset class for 8 weeks plus 3 follow-ups with Amara.
- **First-visit flow (written as paragraphs or S-c tiles, never a step grid/timeline)**: Book online or by phone → First visit 60 min (history, movement tests, first hands-on treatment) → Written plan sent the same day → Follow-ups every 1–2 weeks with a home programme → Review at week 6.

---

## 7. Inner pages (9 + journal; each opens with the T1 page head, no sidebar)
1. **About** `/about/`: T2 "OUR / STORY" (founded 2015, why "hodoki" — untying; one clinic, five bays); T3 "LISTEN / BEFORE WE TREAT."; values in 3 narrative paragraphs; small photo of the reception.
2. **Conditions** `/conditions/`: S-c icon tiles (6) linking to anchors; for each condition: H3, 2 paragraphs (what it often is, what we do), who treats it; T2 arch for wrist/elbow section. Conditions table (condition / usual visits / who) stacks on mobile.
3. **After surgery** `/after-surgery/`: T2 "AFTER / SURGERY" (knee/hip/shoulder replacements, ligament repair); S-a cards for 3 phases (Protect, Restore, Return); T3 "BACK / TO YOUR STAIRS."; we work with the surgeon's protocol; price $90/60 min.
4. **Desk workers** `/desk-workers/`: T2 "AT THE / DESK"; Desk Reset class ($28, max 6, Tue & Thu 18:15, Sat 10:00); workstation review ($80); T3 "REACH / WITHOUT BRACING."; three desk habits as paragraphs.
5. **First visit** `/first-visit/`: T2 "YOUR / FIRST VISIT"; S-c tiles Book / Assess / Plan / Treat / Review with the flow paragraphs; what to wear, what to bring, how long, $95.
6. **Fees** `/fees/`: full price list (§6), notes, insurer receipts, cancellation; no T2/T3 (keep tables clean).
7. **Therapists** `/therapists/`: T2 "WHO / YOU WILL SEE" (Clara); then 6 people as text rows (name, role, focus, languages spoken: e.g. Tomasz — English, Polish; Amara — English, French), 1px rules; one shared photo `team-session.webp` 3:2 — no portrait grid.
8. **Stories** `/stories/`: T3 "ONE STEP / AT A TIME."; three stories, each headed by an S-b rounded 50px photo band (480px, parallax 8 %) with the first name and the line; 200 words each.
9. **Visit** `/visit/`: T2 "FIND / US HERE"; address, hours (definition list), transport (tram line 4, Alder Street stop, 3 min; bike racks; step-free lift), parking note, booking pills.
10. **Journal** (`home.html`, `archive.html`, `single.html`): 6 posts (desk stretches, after knee replacement weeks 1–6, why we test before treating, a better chair setup, walking after surgery, Desk Reset class notes); featured images from §9; single post title `x-large`, text column 680px.
Also: 404 and search with T1 small head (photo 280px).

---

## 8. Responsive requirements
- 390px first screen: header row + hero + headline + hairline row + lead; no vertical text, no absolutely positioned labels/tags over text, no overlap (auto-gates "mobile first-screen text overlap" must pass). Info bar stacked below.
- No horizontal overflow at 390 and 1280: bleeding photos use negative margins inside an alignfull wrapper with `overflow: clip`; `html, body { overflow-x: clip }`.
- T2 at < 900px: single column (label → small photo → text → arch). T3 at < 782px: rules in §1. S-a cards stack. S-b band: side margin 12px, radius 32px, height 560px.
- Price list ≥ 782px full container width, price column nowrap right-aligned, never cut; < 782px stacked. Every table stacks on mobile.

---

## 9. Images (18, IMAGERY = photo; Grok, one at a time, read every one)
Imagery follows the S5-Style reference: both references are photographic → **real photography STYLE** (self-generated, not the references' photos).

STYLE (exact, every prompt):
`photorealistic documentary photograph, high-key bright daylight, 35mm lens, airy modern physiotherapy clinic with white walls, pale oak wood, pale stone floors and soft sage-grey details, cool neutral colour grade with low saturation, gentle shadows, calm unposed moment, diverse adults, natural skin and correct hands, international modern setting, no text, no logos, no brand marks, no signage lettering, no Japanese elements`

No cut-outs (0 transparent images), no repeated image within a page, each ≤ 300 KB and ≤ 2000px, webp. One readme line per image (AI-generated, CC0). Generate at the ratio listed; landscape page heads crop with object-fit.

| # | File | Subject / composition | Ratio | Used on (page · block) | Home |
|---|---|---|---|---|---|
| 1 | `hero-shoulder-guide.webp` | wide three-quarter view of a bright treatment room: tall windows with sheer curtains on the left; in the middle a physiotherapist in a sage scrub top guiding a seated adult patient in a light shirt through a shoulder raise at a pale oak treatment table (one hand on the shoulder blade, the other under the elbow); a tall potted olive tree in the lower-left foreground, partly cropped; on the right a row of treatment bays with pale linen curtains and small plain numbered doors receding down a corridor; upper third pale wall and ceiling, lower-left floor slightly darker for text | 16:10 | Home H1 hero (KV 1–3) | ✅ |
| 2 | `intro-band-hands.webp` | close-up: therapist's hands adjusting a pale sage resistance band around a patient's wrist on an oak table edge | 1.59:1 | Home H2 small; About T2 small; Stories T3 right | ✅ |
| 3 | `intro-arch-room.webp` | quiet empty treatment bay: oak table with a folded white towel, window light, small plant; vertical | 0.78:1 | Home H2 arch; About arch; After surgery card 3; First visit arch | ✅ |
| 4 | `problem-desk-neck.webp` | office worker at a laptop by a window rubbing the back of the neck, shoulders lifted, open-plan office softly blurred | 16:9 | Home H3; Conditions head; Desk workers T3 right; Stories Lena band | ✅ |
| 5 | `band-left-stretch.webp` | adult doing a doorway chest stretch in the clinic exercise studio, side view, light floor | 1.85:1 | Home H4 left; About / After surgery / Desk workers T3 left | ✅ |
| 6 | `band-right-window.webp` | exercise studio corner by a tall window: foam roller, sage mat, light dumbbells, no person | 1.62:1 | Home H4 right; About / After surgery T3 right; Fees head | ✅ |
| 7 | `method-assess.webp` | therapist measuring a seated patient's shoulder range with a goniometer, blank clipboard on the table | 0.68:1 | Home H5 card 1; After surgery card 1 | ✅ |
| 8 | `method-loosen.webp` | hands-on soft-tissue work on the upper back of a patient lying face-down, towel | 0.68:1 | Home H5 card 2; Conditions arch; Journal post 3 | ✅ |
| 9 | `method-strengthen.webp` | patient doing a supported squat holding a wall bar beside a therapist in the studio | 0.68:1 | Home H5 card 3; After surgery card 2 | ✅ |
| 10 | `proof-walk.webp` | a woman in her thirties walking out of a bright modern office building with a laptop bag, relaxed shoulders, morning, lots of pale sky and stone | 16:9 | Home H6 parallax band; Stories head | ✅ |
| 11 | `team-arch-lead.webp` | physiotherapist (woman, 40s) standing in a treatment bay, arms relaxed, looking toward the window; vertical | 0.78:1 | Home H8 arch; Therapists arch | ✅ |
| 12 | `visit-entrance.webp` | ground-floor entrance of a light stone building: glass door, bicycle rack, olive tree in a planter, no signage | 3:2 | Home H9; Visit head | ✅ |
| 13 | `inner-reception.webp` | bright reception: pale oak desk, two chairs, plant, window | 16:9 | About head; Therapists head; Visit arch (0.78 crop) | — |
| 14 | `surgery-arch-knee.webp` | older man on the table doing a heel slide after knee surgery, therapist supporting the heel; vertical | 0.78:1 | After surgery arch; Stories T3 left; Journal post 2 | — |
| 15 | `desk-arch-class.webp` | four diverse adults doing seated shoulder rolls on chairs in the studio, instructor in a sage top; vertical | 0.78:1 | Desk workers arch; Stories Noor band; Journal post 6 | — |
| 16 | `team-session.webp` | two physiotherapists discussing a plan at a standing desk with a spine model, window light | 3:2 | First visit head; Therapists shared photo; Journal post 1 | — |
| 17 | `desk-workstation.webp` | well set-up desk by a window: monitor arm, laptop stand, footrest, chair, no person | 16:9 | Desk workers head; Journal post 4 | — |
| 18 | `surgery-stairs.webp` | man in his late fifties climbing a bright station staircase, light grip on the handrail, side view | 16:9 | After surgery head; Stories Marcus band; Journal post 5 | — |

Binding per-page check (no repeats inside any page):
- **Home**: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12 (12 photo positions).
- About 13 · 2 · 3 · 5 · 6 — Conditions 4 · 8 — After surgery 18 · 14 · 7 · 9 · 3 · 5 · 6 — Desk workers 17 · 15 · 5 · 4 — First visit 16 · 3 — Fees 6 — Therapists 13 · 11 · 16 — Stories 10 · 14 · 2 · 4 · 18 · 15 — Visit 12 · 13 — Journal index posts 1–6 = 16 · 14 · 8 · 17 · 18 · 15.

---

## 10. Scroll motion (sp-scroll; 3 effects; hero has no reveal)
| Effect (sp-*) | Where | Source and its values | Our values |
|---|---|---|---|
| `sp-reveal sp-reveal--up` (fade, tiny rise) | every text group below the hero: H2 + paragraphs in H2, H3, H4 paragraph, H5 heading, H7 heading, H8 text, H9 text; inner-page section text | R1 fade-in: IntersectionObserver, rootMargin `0 0 -100px 0`, opacity 0→1, **1.2s `ease`**, no translate, once (token g) | `--sp-dur: 1.2s; --sp-ease: ease; --sp-dist: 12px` (a small rise so the motion check can measure it; ≤ 30px) |
| `sp-reveal sp-reveal--wipe` | photos: H2 arch, H3 16:9, H8 arch, H9 visit photo, T2 arches on inner pages | R2 image load wipe: clip `inset(0 100% 0 0)` → open + translate −50px → 0, **1.3s `cubic-bezier(.19,1,.22,1)`**, delay .5s | built-in wipe (clip on the child), theme override (allowed, selector starts with `html.sp-js`) to wipe **left → right**: `html.sp-js:not(.sp-no-motion) .hd-wipe-x.sp-reveal--wipe:not(.sp-in) > * { clip-path: inset(0 100% 0 0) }`, transition `clip-path 1.3s cubic-bezier(.19,1,.22,1) .2s`; no translate on the arch (border-radius stays on the child img) |
| `sp-stagger` + `sp-reveal--up` | H5 method cards (parent `sp-stagger`, each card `sp-reveal sp-reveal--up`); S-a cards on After surgery | R1 per-block fade, R1 slider cards | 0.12s steps (built-in) |
| `sp-parallax` | see §11 | R1 in-image parallax + hero drift | see §11 |
Not used: sp-count (no figures), sp-marquee (the row is single-column; marquee belongs to recent themes), pinning (R1 pinned expanding box is not reproducible without pinning; not copied). Price list, info bar, forms and legal text have no reveal. No scroll listeners, no GSAP/Lenis.

---

## 11. Parallax (required)
| Where | Wrapper | Moving layer | Foreground (static) | `--sp-par` | Reference motion |
|---|---|---|---|---|---|
| **Home H1 hero** (primary) | Cover block `hd-hero sp-parallax` | Cover background `hero-shoulder-guide.webp` (`.wp-block-cover__image-background`) | header, H1, hairline row, lead (Cover inner container, not moving) | **8 %** desktop / **5 %** mobile (`@media (max-width:781px){ .hd-hero{--sp-par:5%} }`) | R1 hero slow drift (scale 1.06, ±1.5 %, 6s ease-in-out) |
| **Home H6 proof band** | Group `hd-proof sp-parallax` (50px radius, `overflow: clip`) | `img.sp-parallax__layer` `proof-walk.webp` | scrim layer + centred text (siblings, not inside the layer) | **10 %** desktop / **6 %** mobile | R1 in-image parallax (scale 1.2, centre offset × 0.06; 0.03 mobile) + R2 rounded band |
| Home H2 small photo, H4 two bleeding photos | figure wrapper `sp-parallax` | the img | — | 6 % (4 % mobile) | R1 tiny photo with in-image parallax |
| Inner page heads and Stories bands | Cover `sp-parallax` | background | title group | 8 % / 5 % | same as hero |
All parallax off under prefers-reduced-motion, `?sp-static` and in the editor (built-in). `check-parallax.mjs` must report ≥ 6px layer shift on desktop and mobile, 0 under reduced motion, ≥ 3 reveals hidden before entry, nothing transparent at the bottom.

---

## 12. Home acceptance checklist
1. First screen 1440×900: full-bleed high-key treatment-room photo (therapist guiding a shoulder raise, olive tree lower-left, bay corridor right), headline bottom-left white light serif + 60px hairline + italic sub-line + lead; header with wordmark left, phone/hours + two sage pills right, centred `/` nav row; white info bar with 3 facts visible at the bottom. All 6 KV rows visible. No table/form/search/centred giant text. `check-first-screen.py` ≤ 15 %.
2. 390×844: same composition, no vertical or absolutely positioned overlapping labels, info bar stacked, no horizontal scroll.
3. T2 on home twice (H2 arch right with gradient "ABOUT / HODOKI" + bleeding small photo; H8 mirrored arch left): full semicircle tops.
4. T3 on home: "UNWIND / AND MOVE AGAIN." ≥ 10rem at 1440, gradient, two photos bleeding off left and right at different heights overlapping letters.
5. H5 three tall scrim cards with "#01 ——" numbers; H6 rounded 50px parallax band with centred white text; H5 has a 50px rounded bottom.
6. Price list: 7 items, exact prices in §6, full width at ≥ 782px, prices nowrap right, not cut at 800 and 1280; stacked on mobile.
7. Home has 12 photo positions, no repeats, all from the STYLE, no text/logos/odd hands.
8. Colours: ground `#ECEFEA` dominant, white bands, ink `#33403A`, accent `#6E847C` only in labels/hairlines/`/`, pills `#4F6159`/`#8FA398`; no cream, no saturated field.
9. Fonts: Source Serif 4 (300/400/italic) + Nunito Sans via theme.json fontFace; editor = front end; zh-TW/ja Noto Serif TC/JP.
10. Motion: hero and H6 parallax measured ≥ 6px; text fades (1.2s ease), photo wipes left→right; reduced motion = final state; `?sp-static` = final state.
11. Home order equals §5; English ≥ 250 words with ≥ 3 narrative paragraphs; numbers equal §6.

---

## 13. Similarity table (target 80 % to R1, values from `reference-tokens.md`)
| Dimension | Reference value (token) | Hodoki value |
|---|---|---|
| Ground / area | R1 `#F2EBDC` ≈ 65 % (a) | `#ECEFEA` ≈ 60 % (hue changed for row/no-cream; L +2.1 %) |
| White band | R1 `#FFFFFF` Reason band (a) | `#FFFFFF` method, fees, visit, info bar |
| Footer ground | R1 `#FAF7EE` (a) | `#F7F8F5` |
| Ink | R1 `#473C2B` L 22 % (a) | `#33403A` L 22.5 % |
| Accent / area | R1 gold `#B99533` ≤ 8 % (a) | `#6E847C` ≤ 5 % (row hex) |
| Wordmark gradient | `#B79451 → #F2E3A7 → #C8A63C` (a) | `#5E7569 → #B9C9C0 → #6E847C` |
| Pills | `#AC8655`, `#BCA866`, 180×46, radius 100, → inside (d) | `#4F6159`, `#8FA398`, 180×46, radius 100, → inside |
| Hero | 1440×900 full-bleed, headline bottom-left, 60px hairline + EN sub-line (e)(f) | full-bleed 640–812px + 88px info bar, bottom-left, 60px hairline + italic sub-line |
| Nav | single centred row under logo row, `/` separators (b) | same, `/` in accent |
| Giant phrase | Frank Ruhl Libre 300, ≈ 170px, lh 1.0, line 2 wider (b) | Source Serif 4 300, 10.625rem (170px), lh 1.0, line 2 wider |
| Section label | 80px 300 lh 1.0 ls .05em gradient + 60–70px hairline + small sub-label (b)(f) | 5rem 300 lh 1.0 ls .05em gradient + 64px hairline + italic 1rem |
| h2 | 36/54, 500, ls .15em (b) | 2.25rem/1.5, 400, ls .08em |
| Body | 16 / 2.0 (intro) (b) | 1rem / 2.0 (CJK 1.85) |
| Container / gutters | 1200, outer 120, text 710 + 75 + photo 450 (c) | identical |
| Section padding | 100/100, intro 113 top, message 160 top (c) | 100/100, H2 113 top, H4 160 top |
| Arch | 450×580, radius 225 225 0 0 (d)(e) | 450×580, semicircle top |
| Bleeding pair | 517×280 top-left, 394×243 right 120px lower (e) | 517×280 left −40px, 394×243 right −40px, 120px lower |
| Cards | 380×560 (0.68), radius 0, bottom scrim, "#06 ——" (e) | 380×560, radius 0, sage-ink scrim, "#01 ——" |
| Rounded band | R2 50px radius, white section with 50px rounded bottom before it (d) | identical |
| Small radius / shadow | R2 cards 10px, `0 0 24px rgba(0,0,0,.1)` (d) | S-c tiles 0 radius 1px accent frame (R1 f); journal cards 10px + same shadow |
| Fade-in | 1.2s ease, opacity only, once (g) | 1.2s ease, 12px rise, once |
| Image wipe | R2 1.3s `cubic-bezier(.19,1,.22,1)` left→right (g) | same timing and direction (clip only) |
| Parallax | R1 in-image ×0.06 desktop, ×0.03 mobile (g) | `--sp-par` 8–10 % desktop, 5–6 % mobile |
| Page-top | 78px circle 1px gold (f) | 78px circle 1px `#8FA398` |
| Imagery | R1 warm amber interior photos, people secondary | high-key cool-neutral clinic photos (own, Grok) |
| First-screen saturation | R1 61.6 %, R2 6.5 % | ≤ 15 % (row) |
