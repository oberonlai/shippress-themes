# Ayumi Podiatry: design spec (stage 1 spec, binding for implementation)

Slug `ayumi-podiatry`, podiatry (foot) clinic for people who stand all day, type **business** (WooCommerce compatible, not required; the site must work with WooCommerce off). Row b13-1: archetype split-screen, hero **photo-left-text-right** inside a **top-bottom-halves** first screen, **split** nav, real photography high-key, palette sea-pine `#5F6348` (olive family), font_direction **sans** (Inter Tight / Public Sans + Noto Sans TC / Noto Sans JP gothic sans), page_structure **narrative-problem-method-proof**.

Reference (S5-Style #11715, unused so far): **Hotaru Group** https://fukushi.gifu.jp/ (welfare and care group; same "people caring for people" field). One reference only (tential.jp timed out at research). Measurements: `brand/reference-tokens.md`, quoted below as **RT(a)…RT(g)**. Screens: `brand/ref/` (ref-fold, scroll-vision-a/b/c/d, scroll-service-a/b, ref-service-list, ref-recruit, ref-cta). Borrow structure, technique, colour relationships, measured numbers and the **key-visual concept**. Never copy their photos, copy, mascot, logo or the exact page.

**Imagery: photo** (stage-a IMAGERY = photo: the reference is led by candid colour photography of people, hands and work scenes; its flat grain shapes are decoration < 15%, recreated by us as CSS/SVG shapes).

---

## 0. Fixed brand facts (identical on every page, in every language)

- **Ayumi Podiatry**, foot clinic. Founded **2015**. Address **1F, 22 Mercer Yard, Eastgate** (fictional, international-neutral; local address order per language in brand.md). Phone **+00 20 5180 3360** (fictional format). Email `hello@ayumipodiatry.example`.
- Hours: **Mon–Fri 07:30–19:30**, **Sat 08:00–14:00**, closed Sun and public holidays. ("Before and after your shift" is the reason for the early/late hours.)
- Named people (**6**, all fictional):
  1. **Lena Marsh** — podiatrist, co-founder; heel and arch pain, nails, diabetic feet. *The clinician in the hero photo (A01), M1 and M3.*
  2. **Tomás Ribeiro** — podiatrist, co-founder; gait, sport and work-boot problems, orthotics prescription. *The clinician in M2.*
  3. **Priya Raman** — orthotics technician; runs the insole workshop (X1).
  4. **Grace Mensah** — foot-care nurse; nail and skin care, diabetic foot checks (X2).
  5. **Jonas Becker** — reception and bookings (R1).
  6. **Ana Kovač** — practice manager; receipts, insurance paperwork.
- Services (6): First visit & gait assessment · Heel and arch pain care · Nail & skin care · Diabetic foot checks · Custom orthotics · Shoe and work-boot advice.
- **Fees (6 items, USD in every language, no conversion, no "from")**:
  | Item | Time | Price |
  |---|---|---|
  | First visit & gait assessment | 60 min | $120 |
  | Follow-up treatment | 30 min | $70 |
  | Nail & skin care | 30 min | $60 |
  | Diabetic foot check | 30 min | $55 |
  | Custom orthotics, one pair (scan, making, fitting) | 2 visits | $380 |
  | Orthotic review & adjustment | 20 min | $40 |
  Notes line (everywhere the table appears): "Card or cash. Itemised receipts for your insurer. Please give 24 hours' notice to cancel."
- **First visit (5 parts, written as prose rows, never a step grid or vertical timeline)**: **Book** (online or phone) → **Talk** (15 min: your shifts, your shoes, where it hurts) → **Walk** (20 min: 10-metre walkway, barefoot and in your work shoes) → **Treat or plan** (20 min: first treatment or a written plan) → **Follow up** (plan by email within **2 working days**; review in **4–6 weeks**).
- **Method (3 parts, home cards 01–03)**: 01 **Listen** · 02 **Watch you walk** · 03 **Treat and adjust**.
- **Orthotics**: scan at visit 1 → made in our workshop in **7 working days** → fitting visit **20 min** → review at **week 6** ($40).
- **Stories (3; first names only, "in her/his case" framing, no guaranteed result wording)**:
  1. **Rosa, ward nurse, 12-hour shifts — heel pain.** 3 visits, custom orthotics, review at week 6; walks home from the late shift without limping. (Home "One outcome".)
  2. **Daniel, line cook — burning forefoot and calluses.** Nail & skin care every 8 weeks, new non-slip shoes with a wider toe box.
  3. **Amara, postal carrier — flat feet and shin pain.** Gait assessment, orthotics, a 10-minute calf routine; back to her full round.
- No claims of cure, guaranteed results, statistics, awards, real media, real brands. Year 2015 only (no base-theme years).

---

## 1. Signature techniques (three, obvious at a glance; never "softened")

### T1. Flying shape confetti around the headline (fukushi.gifu.jp first screen, RT(f)(g))
- **Reference:** on the pale `#FAF9F5` ground, 16 flat geometric pieces (rounded squares with ≈20% corners, quarter circles, half circles, triangles, a ring, a two-colour circle, tiny squares), 60–384 px, random rotations, fine grain texture; 6 yellow blurred glow circles. On load they fly in from outside the viewport while spinning and shrinking into place (1400 ms each, stagger ≈107 ms, `cubic-bezier(0.16,1,0.3,1)`), then drift forever (±30 px / ±25 px, rotate 3–4°, 10–17.5 s). A tiny mascot hides at the end of the headline.
- **Ayumi:** the same field of **14 foot-world pieces** (insole ovals, arch quarter-circles, heel half-circles, rounded squares, one triangle, one ring, one two-colour circle, two tiny squares) + **4 blurred glows** + a **toe-dot mark** (5 dots in an arc, our "mascot") sitting right after the H1. Exact list in §2 (3) and §6.
- Used on: **Home hero** (full set) and **every inner page head** (6-piece mini set, same motion).
- Must not be diluted: pieces are **solid flat colour with grain**, not outlines, not < 40% opacity; at least 3 pieces ≥ 200 px on desktop; at least 2 pieces overlap the hero photo's top edge (≤ 80 px); the fly-in motion and the endless drift are both required (static only under reduced-motion / `?sp-static` / editor).

### T2. Tilted photo wall with gold strips and white centred copy (fukushi "vision" wall, RT(e), screen scroll-vision-d-tiltwall)
- **Reference:** a full-bleed section whose photo wall is rotated ≈ −8°; 4:3 and 3:4 candid photos separated by ≈24 px gold strips (`#F9BC42` under a dark overlay ≈ reads `#C49A3E`); a 0.45 dark tint; white copy centred on top; on scroll the wall scales 1.5→1 and moves up.
- **Ayumi:** home block 4 "The usual complaints": 6 photos of everyday feet at work (W1–W6) in a 3-column masonry, whole layer rotated **−8°**, **24 px strips in pollen gold `#C9A04A`**, tint `rgba(37,39,30,.45)`, white H2 + paragraph + white outline pill centred. Layer = `sp-parallax__layer` (moves; text does not).
- Geometry (desktop 1440): section height **760 px** (mobile 560 px), `overflow: clip`, ground `#C9A04A` (so the strips are the section colour showing between tiles). Layer `width: 140%; left: -20%; top: -30%`, `transform: rotate(-8deg)` on an inner wrapper (parallax translate on the outer `.sp-parallax__layer`, rotation on its child, so the two transforms never fight). Grid: 3 columns, gap 24 px, tile width ≈ 640 px; column 1 = W1 (3:4) over W2 (4:3); column 2 offset −160 px = W3 (4:3) over W4 (3:4); column 3 = W5 (3:4) over W6 (4:3). Tiles radius 0 (RT(d): full photos 0).
- Must not be diluted: the rotation stays −8° (not −3°), the strips stay gold and ≥ 20 px, the tint stays ≥ 0.4 so white text is ≥ 4.5:1, copy is centred white over the photos (not in a box beside them).

### T3. Saturated large-radius card with a white panel, big "01" and a circle photo (fukushi SERVICE cards, RT(d)(e), screens scroll-service-b-after / ref-service-list)
- **Reference:** a card of one saturated colour with `border-radius: 4rem` (mobile 2rem), 43 px from the viewport edges; inside on the left a white 90% panel (radius 2.5rem, ≈ 48% width, inset 16 px) holding a small "SERVICE" label, a huge "01" (≈ 88 px, card colour), a pill tag in the card colour, a large heading, a subtitle, a paragraph and outline pills with a dark circle arrow; on the right a large circle photo (Ø ≈ 546 px, right-bottom) with a text arc and the mascot riding its edge.
- **Ayumi:** home block 6 "The method": three stacked cards **01 Listen** (`#5F6348`), **02 Watch you walk** (`#8E9877`), **03 Treat and adjust** (`#A8AF8B`). Panel `rgba(255,255,255,.9)`, radius 2.5rem, width 48%, inset 16 px. Label "STEP" Inter Tight 0.875rem 600 0.08em uppercase; number "01" Inter Tight 600 **5.5rem**, colour = card accent (`#5F6348` / `#6E7756` / `#7E8766` for contrast on white); pill tag (time: "15 minutes", "20 minutes", "20 minutes + review") 46 px high radius 9999, ground = card colour, text white on 01 and ink `#2D2D2D` on 02/03; H3 2rem; subtitle 1.125rem 500; paragraph; 1–2 outline pills (1 px `#2D2D2D`, 52 px high, label left, 32 px dark circle with white → right). Right column: circle photo Ø 480 px (desktop), centre at 62% x / 58% y of the card, a 2 px white dashed circle 24 px outside the photo, and the **toe-dot mark** (5 dots, clay + white) riding the arc at about 1 o'clock (our mascot position).
- Card: width = wide container (1264 px; on 1440 that is 88 px from each edge), min-height 620 px, radius **4rem**, gap 32 px between cards. Mobile: radius 2rem, 12 px from the edges, panel full width on top, circle Ø 78% of card width below it.
- Supporting (H6 in reference.md): one soft clay ring `#F0B48C`, outer Ø 700 px, thickness 90 px, enters from the top-right corner of the method section (centre at x = 100% − 120 px, y = −140 px), behind the cards.
- Must not be diluted: the card must be a **solid colour field** (not a tint < 60%), radius stays 4rem, the number stays ≥ 5rem, the photo stays a full circle ≥ 400 px on desktop.

### Continuation into inner pages (≥ 4 required; here every page)
| Page | T1 confetti | T2 tilted wall | T3 card + circle |
|---|---|---|---|
| About | page-head mini set | — | "What a visit feels like" card `#5F6348`, circle M1 |
| Conditions | page-head mini set | strip variant (3 tiles W1 W2 W3, 420 px high, −8°, gold strips) under the head | — |
| Treatments | page-head mini set | — | three cards 01–03 (same as home, longer copy), circles M1 M2 M3 |
| Custom orthotics | page-head mini set | — | one card `#8E9877` "How your insoles are made", circle X1 |
| Fees | page-head mini set | — | "Your first visit · $120" card `#A8AF8B`, circle A02 |
| First visit | page-head mini set | — | — (A03 parallax band instead) |
| Clinicians & team | page-head mini set | — | Lena (`#5F6348`, circle M1) and Tomás (`#8E9877`, circle M2) cards |
| Stories | page-head mini set | full wall (W1–W6) as the page's opening band | — |
| Visit | page-head mini set | — | "Call or book" card `#5F6348`, circle R1 |
| Journal / single / 404 | page-head mini set | — | — |

Page head (all inner pages): ground `#F7F8F2`, padding 200 px top (under the floating header) / 96 px bottom, label + H1 `clamp(2.6rem, 5vw, 4.25rem)` left in the 1264 container, lead 1.125rem max 640 px; **mini confetti**: 6 pieces (one insole oval 120×280 olive, one arch quarter 180 sage, one heel half 140×70 stone-green, one rounded square 120 mist, one tiny square 24 clay, one two-colour circle 90) placed in the right 40% of the head and one piece bleeding off the left edge, same fly-in/drift as home; plus one pollen glow. Mobile: 4 pieces in a 96 px strip under the lead (in flow, no overlap with text).

---

## 2. Key visual concept

### (1) Reference first screen (fukushi.gifu.jp)
- **What is drawn:** a pale, almost white ground; a loose ring of flat, grain-textured geometric pieces in six different colours and a few blurred yellow glow circles surrounds a wide-tracked, centred two-line headline ("each one of us becomes someone who shines"); a tiny English caption under it; a tiny bee mascot tucked into the headline; a white capsule header floating above; a vertical "SCROLL" hint at the bottom right.
- **Story:** everyone is a different shape and colour, and each has a place in the field. The first scroll then replaces the abstract shapes with real people: a small square photo of two hands joined grows to full screen, then a tilted wall of candid photos of daily life and work.
- **Signature motion:** pieces fly in from beyond the viewport, spinning and shrinking into place (1.4 s, ≈107 ms stagger, expo-out), then drift slowly forever; the hand photo scales up with scroll; the photo wall settles from 1.5× while scrolling.

### (2) Our translation (podiatry, same composition, same motion idea, same image type = photo)
- **Scene:** the same pale field, but the pieces are the shapes of feet and what we make for them — insole ovals, arch curves, heel half-circles, toe dots — in the olive family with one clay and one pollen accent. They fly in and settle around the headline **"On your feet / all day?"**, then drift. The abstract pieces lead the eye down to the real photograph in the lower-left half: **Lena Marsh (podiatrist) sitting on a low stool at the end of a pale treatment table, talking with a patient who sits on the table with one work shoe off** — the moment of listening.
- **Story:** "every foot has a different shape and a different working day — we start by listening." The first scroll continues exactly like the reference: a small square photo of Lena's hands cupping a heel (A02) zooms in, then the full-bleed treatment-room band (A03, parallax), then the tilted wall of feet at work (W1–W6).
- **Composition (row: top-bottom halves × photo-left-text-right):** the first screen is a 2×2: **top-left** = densest part of the confetti field; **top-right** = eyebrow + H1; **bottom-left** = the hero photo A01; **bottom-right** = lead, dark pill CTA, hours line. Pieces spill over the photo's top edge and the right viewport edge, like the reference's pieces bleed off every side.

### (3) KV checklist (all six on the home first screen, visible at 1440×900 and 390×844)
| # | Reference element | Our counterpart | Position | Motion | Which image |
|---|---|---|---|---|---|
| 1 | 16 flat grain-textured geometric pieces ringing the headline (RT(f)) | 14 olive/sage/mist/stone-green pieces + 1 clay + 1 pollen: insole ovals, arch quarter-circles, heel half-circles, rounded squares, triangle, ring, two-colour circle, tiny squares (list §6) | desktop: dense in top-left quadrant, 3 pieces at the right edge, 2 overlapping A01's top edge ≤ 80 px; mobile: 7 pieces in a 120 px in-flow strip between CTA and photo + 2 at the photo's top corners | fly-in 1400 ms, stagger 107 ms, `cubic-bezier(.16,1,.3,1)`, from 18–28 vmin outward + scale 1.6–2.4 + rotate ±180° → rest; then drift ±30 px / ±4°, 10 / 13.5 / 17.5 s ease-in-out alternate infinite | — (CSS/SVG shapes) |
| 2 | Wide-tracked 72 px two-line headline (RT(b) H1 72/101/700/0.26em) | H1 "On your feet / all day?" Inter Tight 600 `clamp(2.75rem, 5vw, 4.5rem)` (= 72 px at 1440), lh 1.12, ls 0.01em (Latin); zh-TW/ja Noto Sans 700 3.375rem, ls 0.2em, lh 1.41 | top-right quadrant, cols 7–12, top at y ≈ 190 px | visible at first paint (no reveal; LCP) | — |
| 3 | Tiny English caption under the headline | eyebrow above H1 ("PODIATRY CLINIC · EASTGATE · SINCE 2015", 0.875rem 600 0.08em uppercase) + lead (1.125rem, ~40 words) and dark pill CTA under it | eyebrow top-right; lead + CTA bottom-right quadrant | visible at first paint | — |
| 4 | Blurred yellow glow circles (RT(f): 6, 120–400 px, opacity .6) | 4 glows: pollen `#E8C766` 260 px, sage `#A8AF8B` 360 px, pollen 200 px, mist `#DDE3CF` 300 px; `filter: blur(60px)`, opacity .45 | behind H1 (2), behind the photo's top-left (1), bottom-right corner (1) | opacity pulse .35↔.55, 12 s ease-in-out infinite | — |
| 5 | Mascot hidden at the end of the headline (bee) | toe-dot mark: 5 dots (Ø 10/12/14/16/22 px) in a 70° arc, the big one clay `#C27A52`, others olive — inline after "day?" (in text flow, not absolute) | end of H1 line 2 | each dot pops in (scale 0→1, 300 ms, 60 ms stagger) after the last shape lands (2.8 s) | — |
| 6 | Real people take over from the shapes (joined-hands photo) | **A01** clinician + patient at the end of a pale treatment table, 3:2, radius 12 px | bottom-left quadrant (cols 1–6, top at 50% of hero) | static image; `sp-parallax` on its wrapper `--sp-par: 6%` (secondary parallax) | **A01** |

Not acceptable: dropping the flying pieces, replacing them with outline icons, moving the photo to full-bleed background, centring a giant headline over a photo.

---

## 3. Colour (reference hex where possible, ≤ ±5% lightness; source RT(a))

The reference ring uses six saturated hues (red/green/blue/purple/yellow/lemon, 15% of the first screen, measured 16.4% saturated). **Why we change the shape hues:** the design-plan row fixes sea-pine `#5F6348` and a "quiet palette", and the gate caps first-screen saturation at 15% (the reference already fails it at 16.4%). We keep the **relationship** — pale ground ≈ 80%, a ring of differently-coloured flat pieces ≈ 13%, one soft ring accent, a pale-yellow CTA band, a near-black pill button, near-black ink — and swap the six hues for six olive-family tones plus one pollen yellow (kept from the reference's yellow role) and one clay (the reference's orange ring role).

| Role | Hex | Source token | Use | Share (first screen / page) |
|---|---|---|---|---|
| Ground | `#F7F8F2` | RT(a) hero ground `#FAF9F5`, −1% L, hue nudged to olive (not cream) | page ground, hero, page heads | ≈ 78% / 55% |
| Ground 2 | `#F1F2E9` | RT(a) body `#F5F2E9`, −1% L, hue nudged to olive | alternate sections (outcome, marquee) | 0 / 15% |
| Ink | `#2D2D2D` | RT(a) text `#2D2D2D` (kept) | text, button ground, footer ground | ≈ 3% / 8% |
| Main olive (row hex sea-pine) | `#5F6348` | design-plan row | shapes, card 01, links, focus ring | ≈ 4% / ≤ 6% |
| Stone-green | `#8E9877` | olive family (replaces reference green `#5DC276` role) | shapes, card 02 | ≈ 3% |
| Sage | `#A8AF8B` | olive family (replaces blue `#5AC2DD` role) | shapes, card 03, CTA frame A | ≈ 3% |
| Mist | `#DDE3CF` | olive family (replaces lemon `#F4EE67` role) | big shapes, glows, marquee dots | ≈ 3% |
| Pollen | `#E8C766` | RT(a) yellow `#F9C250`, −5% L, −15% sat | glows, one triangle, one tiny square | ≈ 1.5% |
| Pollen gold (strips) | `#C9A04A` | RT(e) wall strips (`#F9BC42` under overlay ≈ `#C49A3E`) | T2 strips only | 0 / one section |
| Clay | `#C27A52` | replaces RT(a) red `#F2526A` role as the single warm accent | one tiny square, toe-dot big dot, active nav dot | ≤ 1% |
| Soft clay ring | `#F0B48C` | RT(a) ring `#F7B98A`, −3% L | T3 supporting ring only | 0 / one section |
| CTA band | `#F3EBC6` | RT(a) CTA band `#FFEAB7`, −4% L, less saturated | home block 9, Visit page band | 0 / one section |
| White | `#FFFFFF` | RT(d) header capsule | header capsule, cards in CTA, T3 panel 90% | — |
| Line | `#D6D9C8` | RT(d) marquee 1 px pale border | pill borders, table rules | — |
| Muted text | `#5C5E52` | derived from ink/olive | captions, meta (≥ 4.5:1 on ground) | — |

- **First-screen saturated area: target ≤ 8%, hard cap 15%** (`scripts/check-first-screen.py`; row note cap 30% is looser). Olive/sage/stone/mist are low-saturation and do not count; only pollen + clay + photo skin tones do. Photo A01 graded high-key, low saturation.
- Contrast: ink on ground 13:1; white on `#5F6348` 6.2:1 (pill tag on card 01 ok); on `#8E9877`/`#A8AF8B` use ink text.
- Never: a section background in clay or pollen, a full-bleed olive band in the first screen, beige-led pages.

---

## 4. Type (font_direction **sans**)

- Latin headings **Inter Tight** (500/600), Latin body **Public Sans** (400/500/600). CJK **Noto Sans TC** / **Noto Sans JP** (400/500/700, gothic sans only; no mincho serif anywhere). All via theme.json `settings.typography.fontFamilies` + `fontFace` (woff2 in `assets/fonts/`, zh-TW/ja subsets via the Hokuto/Hada workaround since the subset script is broken), so the editor iframe and the front end render the same faces.
- Stacks:
  - heading: `"Inter Tight", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`
  - body: `"Public Sans", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`
  - `:lang(zh-TW)` → `"Inter Tight"` / `"Public Sans"`, then `"Noto Sans TC", sans-serif`; `:lang(ja)` → … `"Noto Sans JP", sans-serif`. Because style.css uses `:lang(`, copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it in functions.php.
- Scale (source RT(b): H1 72/101/700/0.26em; H3 42/67/500/0.05em; body 18/32.4/500/0.05em; nav 16/28.8/500; label 14.2/700/0.08em uppercase; number 88 px Urbanist 600; caption 10.5 px Urbanist 500):
  | Preset (theme.json) | Size | lh | ls (Latin / CJK) | weight | Use |
  |---|---|---|---|---|---|
  | `number` | 5.5rem (88 px) | 1 | −0.01em | 600 Inter Tight | T3 "01" (RT(b) 88 px) |
  | `xx-large` | `clamp(2.75rem, 5vw, 4.5rem)` (72 px @1440) | 1.12 / 1.41 | 0.01em / 0.2em | 600 / CJK 700 | hero H1 (RT(b) 72 px) — theme max ≥ 4.25rem ✓ |
  | `x-large` | `clamp(2rem, 3vw, 2.625rem)` (42 px) | 1.25 / 1.6 | 0.01em / 0.05em | 600 / CJK 500 | section H2 (RT(b) H3 42/67/500) |
  | `large` | 2rem | 1.25 | 0 / 0.05em | 600 | T3 H3, page sub-heads |
  | `medium` | 1.375rem | 1.45 | 0 | 500 | pull lines, story quote |
  | `base` (body) | 1.125rem (18 px) | 1.8 / 1.85 | 0.02em / 0.05em | 400 / CJK 500 | body (RT(b) 18/32.4) |
  | `small` | 0.875rem (14 px) | 1.4 | 0.08em | 600 uppercase (Latin labels stay Latin uppercase in all languages) | labels, eyebrow, "STEP" (RT(b) 14.2/700/0.08em) |
  | `x-small` | 0.75rem | 1.5 | 0.04em | 500 | captions, "SCROLL" |
- Nav 1rem / 1.8 / 500 (RT(b) 16/28.8/500). CJK headings ≈ 0.75× the Latin size (H1 3.375rem, H2 2rem), body lh 1.85; fr/de `hyphens: auto` with `overflow-wrap: anywhere` on H1/H2.

---

## 5. Layout tokens (RT(c)(d))
- Wide container **1264 px** (RT(c) 1258–1264), text column 760 px; side padding 88 px at 1440 (from the centred 1264), min 20 px on mobile.
- Section padding **120 px** top/bottom desktop (RT(c) 90–121), 72 px mobile; hero top padding 200 px (RT(c) hero 232 px minus our shorter header offset).
- **Header capsule (split nav)**: `position: sticky; top: 16px`, inset 38 px from each side (RT(d) "38 px from the edge"), height **74 px**, radius **38 px**, white, no shadow (RT(d)); mobile inset 12 px, height 60 px, radius 30 px.
- Radii: T3 card 4rem (mobile 2rem), T3 panel 2.5rem, pills 9999 px, photos 12 px (team/outcome/hero, RT(d) team 12 px), full-bleed photos and wall tiles 0, shapes' rounded squares 20%, CTA cards 16 px, footer box 2rem top corners.
- No shadows, no thick borders (RT(d)). Pills: 1 px `#D6D9C8`.
- Photo aspects: hero A01 3:2; A02 1:1 (440 px, RT(e) 485×485 square); A03 full-bleed band 100vw × min(86vh, 760 px) ≈ 1.9:1 (RT(e) 1440×900 full); wall tiles 4:3 / 3:4 (RT(e)); method circles 1:1 Ø 480 (RT(e) Ø 546 scaled to our card height); outcome O1 4:5; team T1 16:9 (RT(e) team 16:9, 12 px); CTA card photos 7:5 (140×100).
- Grain: all shapes get `background-image: url(assets/img/grain.png)` (a 200×200 px monochrome noise PNG, ≤ 20 KB, generated by script, not copied) with `background-blend-mode: multiply; opacity` of the grain layer 0.18 (RT(d) "fine grain").

---

## 6. Home (en) — section order and first screen

| # | Section (pattern) | Purpose | Layout | Photo(s) | Copy |
|---|---|---|---|---|---|
| 0 | Header (`header`) | split nav | white capsule (§5): **left links** About · Conditions · Treatments · Orthotics; **centre** wordmark "Ayumi Podiatry" Inter Tight 600 1.375rem ink with the toe-dot mark (5 dots) before it; **right links** Fees · Clinicians · Visit + dark pill "Book a visit" (`#2D2D2D`, white, 46 px high, RT(d) 74×46 pill) + language switcher (globe + code). <1100 px: wordmark left, pill + menu button right; overlay menu. | — | — |
| 1 | Hero (`front-hero`) | KV §2 | 2×2 halves, see "First-screen composition" below | **A01** | ~55 words |
| 2 | Listening first (`front-listen`) | narrative 1 | ground `#F7F8F2`, padding 160/96. **A02** square 440×440, radius 0, centred, with 3 glows (pollen 220 px top-left of it, sage 320 px bottom-right, pollen 140 px right) — reference scroll-vision-a. Below, text column 760 px centred on the page but left-aligned: label "LISTENING FIRST", H2 "Every foot carries a different day.", 2 paragraphs | **A02** | ~120 words |
| 3 | Treatment room band (`front-room`) | the "photo grows to full screen" moment | full-bleed **A03**, height min(86vh, 760 px), radius 0, `sp-parallax --sp-par:10%`; caption pill (white, 44 px, 0.875rem) "Room 2 · our 10-metre walkway" bottom-left inside the band on desktop; on mobile the caption sits below the band in flow | **A03** | 6 words |
| 4 | The usual complaints (`front-complaints`) | problem | **T2** tilted wall, white copy centred: label "THE USUAL COMPLAINTS", H2 "Heels after a long shift. Toes in safety boots. Shins after the stairs.", paragraph, white outline pill "See the conditions we treat →" | **W1–W6** | ~70 words |
| 5 | Complaint marquee (`front-marquee`) | bridge | ground `#F1F2E9`, padding 48/48; `sp-marquee`, pills 44 px high, 1 px `#D6D9C8`, radius 9999, 12 px dot left (cycling olive/sage/stone/mist/pollen/clay), Public Sans 1rem 500; 12 items: Heel pain · Plantar fasciitis · Bunions · Ingrown toenails · Corns & calluses · Flat feet · Shin splints · Achilles pain · Diabetic foot checks · Work-boot rubbing · Numb toes · Cracked heels | — | 12 labels |
| 6 | The method (`front-method`) | method | intro left 760 px (label "THE METHOD", H2 "Listen, watch you walk, then treat.", 1 paragraph) + soft clay ring entering top-right; then **T3** cards 01 / 02 / 03 stacked | **M1, M2, M3** (circles) | 40 + 3 × 60 words |
| 7 | One outcome (`front-outcome`) | proof | ground `#F1F2E9`. Photo left cols 1–5, **O1** 4:5 radius 12 px, with one sage arch quarter-circle (160 px) tucked behind its top-right corner (T1 echo). Text right cols 7–12: label "ONE OUTCOME", H2 "Rosa's twelve-hour shifts, without the limp home.", 2 narrative paragraphs, pull line (medium, olive) "I didn't need new feet. I needed someone to watch me walk.", fact pills row (3 outline pills: "3 visits" · "Custom orthotics" · "Review at week 6"), outline pill "Read three stories →" | **O1** | ~130 words |
| 8 | The clinicians (`front-clinicians`) | trust | text left cols 1–5: label "CLINICIANS", H2 "Two podiatrists. One long conversation.", paragraph, two name rows (name Inter Tight 1.375rem 600 + role pill: "Lena Marsh — Podiatrist, co-founder" / "Tomás Ribeiro — Podiatrist, co-founder" + 1 line each), outline pill "Meet the team →". Right cols 6–12: **T1** 16:9 radius 12 px (RT(e) team photo), one mist rounded square (140 px) and one pollen tiny square peeking from its bottom-left corner | **T1** | ~90 words |
| 9 | Book a first visit (`front-visit`) | CTA (reference CTA/ENTRY) | full-bleed band `#F3EBC6`, bottom corners radius 2rem, padding 120/96. Top row: H2 left "Book a first visit" (x-large) + small caption "60 minutes · $120"; right a 3-line paragraph. Below: two frames side by side (radius 16 px, padding 12 px, 52 px label bar): **frame A** `#A8AF8B` "For patients" holding 2 white cards — "Call us" (phone in Inter Tight 2rem, hours lines, photo **R1** 140×100 radius 12 bottom-left, dark 24 px circle arrow bottom-right) and "Book online" (big text "BOOK ONLINE" Inter Tight 2rem uppercase, "First visit & gait assessment · 60 min · $120", circle arrow); **frame B** `#5F6348` (label white) "Find the clinic" holding 1 card — "1F, 22 Mercer Yard, Eastgate", hours, photo **R2**, circle arrow → Visit | **R1, R2** | ~50 words |
| 10 | Footer | — | box inset 24 px, ground `#2D2D2D`, radius 2rem top corners, text `#F7F8F2`; 3 columns (wordmark + address/hours, pages, languages) + small grain shapes (3 pieces, 30% opacity) top-right | — | — |

**Home photo positions: 16** (A01, A02, A03, W1–W6, M1–M3, O1, T1, R1, R2) — ≥ 8 ✓, no image twice. English home ≈ 650 words, narrative paragraphs in blocks 2, 6 and 7 (≥ 3). CJK home ≥ 500 characters.

### First-screen composition (1440×900)
- Hero = `min-height: 100svh` (900 at 1440×900), ground `#F7F8F2`, `overflow: clip`, `position: relative`. Header capsule floats at top 16 px (16–90).
- Grid: 1264 container, 12 cols, 24 px gutter.
- **Top-left (x 0–50%, y 0–50%)**: confetti field (absolute layer `.ap-field`, `aria-hidden`, `pointer-events:none`, z above photo).
- **Top-right (cols 7–12, y 160–440)**: eyebrow at y ≈ 170; H1 two lines "On your feet / all day?" + inline toe-dot mark, top at y ≈ 200, 72 px, ends ≈ y 370.
- **Bottom-left (cols 1–6, y 450–852)**: A01 3:2, width ≈ 604 px, top at 50% of hero, radius 12 px, bottom margin 48 px; `object-position: 40% 45%` (faces of Lena and the patient both inside the frame).
- **Bottom-right (cols 8–12, y 500–820)**: lead (1.125rem, 4 lines, max 460 px) → dark pill "Book a first visit" (54 px high) + text link "Fees →" → hours line (0.875rem muted: "Mon–Fri 07:30–19:30 · Sat 08:00–14:00").
- Scroll hint (≥1024 px only): vertical "SCROLL" 0.75rem 0.2em + 1 px × 80 px olive line, right 40 px, bottom 40 px (RT reference fold).
- **Shape positions (left/top in % of the hero box; size in px at 1440; rotation)**:
  | # | Piece | Size | Colour | left / top | rot |
  |---|---|---|---|---|---|
  | 1 | insole oval (radius 50%) | 150×340 | `#5F6348` | 9% / 13% | −28° |
  | 2 | arch quarter-circle | 230 | `#A8AF8B` | 25% / 11% | 15° |
  | 3 | heel half-circle | 190×95 | `#8E9877` | 33% / 33% | −10° |
  | 4 | rounded square (r 20%) | 210 | `#DDE3CF` | 2% / 41% (overlaps A01's top-left by ≈ 70 px) | 12° |
  | 5 | ring (stroke 34 px) | 220 | `#5F6348` | 91% / 46% (bleeds off right) | — |
  | 6 | triangle | 120 | `#E8C766` | 21% / 45% (overlaps A01's top edge ≈ 40 px) | 20° |
  | 7 | tiny square | 28 | `#C27A52` | 18% / 12% | 30° |
  | 8 | tiny square | 22 | `#E8C766` | 31% / 29% | −15° |
  | 9 | two-colour circle (half sage, half clay 30%) | 110 | `#A8AF8B` / `#C27A52` | 45% / 44% | 35° |
  | 10 | quarter-circle | 300 | `#DDE3CF` | 92% / 6% (bleeds off right) | 180° |
  | 11 | rounded square | 160 | `#A8AF8B` | 92% / 84% (bleeds off right/bottom) | −14° |
  | 12 | heel half-circle | 140×70 | `#5F6348` | 52% / 8% (left of H1 top, clear of text) | 160° |
  | 13 | small insole oval | 80×190 | `#8E9877` | 47% / 78% (gap between photo and lead) | 18° |
  | 14 | arch quarter-circle | 120 | `#8E9877` | 40% / 3% (partly under the capsule) | −60° |
  Exclusion boxes (no piece may intersect): H1/eyebrow box (cols 7–12, y 150–390) and lead/CTA box (cols 8–12, y 490–830). Glows may sit behind text.
- **390×844**: capsule 60 px; eyebrow; H1 `2.75rem` 3 lines max, toe-dot inline; lead; CTA pill full-width-ish (auto, ≥ 48 px); then `.ap-field` **in flow** as a 120 px strip holding pieces 1, 2, 3, 6, 7, 9, 10 at 45% scale; then A01 at 4:3 full width (radius 12) with pieces 4 and 11 overlapping its top corners ≤ 40 px. **No vertical text, no absolutely positioned label over text, no x-overflow** (field and hero `overflow: clip`). Scroll hint hidden.

### Comparison with recent themes (home block order)
| # | Hakari Course | Isso Relocation | Nuno Workwear | Naru Clinic | **Ayumi** |
|---|---|---|---|---|---|
| 1 | rounded-bottom full-bleed photo hero + hashtag band | split dark photo / gradient panel | band/photo seam two-line headline | top-half photo + three-wave seam + capsule | **2×2 halves: flying shape field + H1 top, photo bottom-left, lead bottom-right** |
| 2 | Course (white panel r88) | giant wordmark | catalogue mosaic on dashed guides | problem (blob photos right) | **centred small square photo + left-aligned narrative** |
| 3 | Why (tilted-photo rows + big number) | method | ink band "On the floor" | What we do (blue band card row) | **full-bleed room band (parallax)** |
| 4 | pricing/enrol | Saturday photo trio | fabrics/fit/repairs | Method (body diagram, 2×2 list) | **tilted photo wall (−8°, gold strips), white centred copy** |
| 5 | proof | One move | ink band "How to order" | One return (blobs left) | **complaint pill marquee** |
| 6 | CTA | figures → price table | crew orders | team (21:9 + 2 columns) | **three stacked 4rem colour cards with circle photos** |
| 7 | — | crew → quote | — | — | **one outcome: 4:5 photo left, story right, fact pills** |
| 8 | — | — | — | — | **clinicians: text left, 16:9 team photo right** |
| 9 | — | — | — | — | **CTA band with framed white cards** |

Why not alike: Naru shares the clinic narrative (problem → method → proof → people) required by the row, but none of its shapes: Ayumi has **no waves, no blobs, no blue card row, no body diagram, no home price table**; its problem is a rotated full-bleed photo wall (Naru: blob pair), its method is three stacked solid-colour cards with circle photos (Naru: pale panel 2×2 list), its people block puts the photo right (Naru: full-width photo then columns). Hakari's tilted photos are individual rotated rows with big numbers; ours is one continuous rotated wall with gold strips and no numbers. No seam headline (Nuno), no wordmark/( 0n ) labels (Isso), no dashed guides, no four-person grid, no step grid, no vertical timeline, no side rail, no collage.

---

## 7. Inner pages (10) — podiatry core
All pages: header, T1 page head (§1), body, a small closing line + dark pill "Book a first visit", footer. No sidebar.

1. **About** (`/about`) — head "A foot clinic for the people who stand." Head photo none (confetti only). Story since 2015: Lena and Tomás, why early and late hours, why we watch people walk in their own work shoes (3 narrative sections, 760 px column); **T1** team photo wide (16:9, 12 px); T3 card "What a visit feels like" (`#5F6348`, circle **M1**); values in 3 short paragraphs (listen first · explain plainly · fewer visits, not more).
2. **Conditions** (`/conditions`) — head "What brings people in." T2 **strip** (W1, W2, W3; 420 px, −8°, gold strips, no text over it; `sp-parallax --sp-par:8%`). Then 8 conditions as an editorial two-column list (H3 1.375rem + 2–3 sentences + "Usually treated with: …" line), each with a 28 px shape glyph from the confetti set: Heel pain & plantar fasciitis · Bunions & toe joints · Ingrown toenails · Corns, calluses & cracked heels · Flat feet & arch pain · Shin splints & Achilles pain · Diabetic & numb feet · Work-boot and shoe rubbing. Marquee row at the bottom. Photo **X2** (nail & skin care) 4:3 radius 12 beside "Ingrown toenails".
3. **Treatments** (`/treatments`) — head "Listen, watch you walk, then treat." Three T3 cards (M1, M2, M3) with longer copy; then the 6 services list (name, time, one line, price — prose rows linking to Fees, prices identical to §0).
4. **Custom orthotics** (`/orthotics`) — head "Insoles made for your shift." T3 card `#8E9877` "How your insoles are made", circle **X1**; 4 prose rows (Scan at your visit → Made in our workshop in 7 working days → Fitting, 20 min → Review at week 6, $40); price $380 per pair; care notes (swap between shoes, wipe, replace every 12–18 months — advice, not a claim); Priya Raman paragraph.
5. **Fees** (`/fees`) — head "Fees, plainly." Full **price table** (§0, 3 columns: item / time / price), notes line; T3 card `#A8AF8B` "Your first visit · $120" with circle **A02**; paragraph on receipts and insurers (Ana Kovač); cancellation 24 h.
6. **First visit** (`/first-visit`) — head "Your first sixty minutes." Full-bleed **A03** band with `sp-parallax --sp-par:10%`; the 5-part flow (§0) as prose rows with big olive numbers 1–5 (Inter Tight 2.625rem) in a left column, never a grid; "What to bring" (your work shoes, the socks you wear, a list of medicines, any old insoles); FAQ 5 `<details>` (Do I need a referral? No · Will it hurt? · Can I come straight from a night shift? · Do you see children? from age 12 · Is parking available?).
7. **Clinicians & team** (`/team`) — head "The people you'll meet." **T1** 16:9; two T3 cards: Lena (`#5F6348`, circle **M1**) and Tomás (`#8E9877`, circle **M2**) with 2 paragraphs each; then the other 4 people as an editorial list (name H3, role pill, 2 sentences; Priya with **X1** 4:3, Grace with **X2** 4:3, Jonas, Ana text-only). **No four-portrait grid.**
8. **Stories** (`/stories`) — head "Three working days, three pairs of feet." Full **T2 wall** (560 px, −8°, gold strips) as the opening band with the white centred line "First names only. Stories shared with permission."; the wall's 6 tiles on this page are **W1, W3, W5, W6, A03, M2** (not W2/W4, which the stories use). Then 3 stories alternating photo left/right (4:5 radius 12): Rosa **O1**, Daniel **W2**, Amara **W4**; each with fact pills and a 2–3 paragraph narrative (§0).
9. **Visit** (`/visit`) — head "Find the clinic." **R2** exterior 16:9 radius 12; address block, phone, email; **hours table** (stacks on mobile); getting here (bus, tram, bike racks, 6 parking spaces — fictional); step-free entrance, treatment chairs that lower to wheelchair height; T3 card `#5F6348` "Call or book" with circle **R1**; band `#F3EBC6` with the two framed cards from home block 9 (without photos to avoid repeats).
10. **Journal** (`home.html`, `archive.html`, `single.html`) — head "Notes from the clinic." 6 demo posts (featured images: X2, W5, A03, X1, W6, M3), 2-column cards, image 3:2 radius 12, date + title; single: label = category, H1 3.2rem, featured image 12 px, 760 px text.
Plus 404 ("This page took a wrong step.") and privacy (plain text). Reachable pages ≥ 9 ✓ (auto-gates).

---

## 8. Images (18 total, all photos, one STYLE string)

**Imagery: photo.** **STYLE** (exact, every prompt):
`photorealistic high-key documentary photograph, 35mm lens, soft diffused daylight from large windows, pale olive-white walls and pale sage-grey clinic furniture, muted palette of olive, sage, mist green, warm clay and off-white, slightly desaturated natural colour, gentle contrast, diverse adults, calm candid moment, clean modern international clinic or workplace, real photo, no text, no logos, no brand marks, no signage lettering, no Japanese elements`

| ID | Subject / composition | Where (each at most once per page) | Home |
|---|---|---|---|
| A01 | **Hero KV**: Lena (woman, 40s, mixed heritage, sage scrub top, hair tied back) sits on a low stool at the end of a pale treatment table, leaning in and listening; the patient (man, 50s, South Asian, grey work trousers, navy work polo) sits on the table end, one work boot off, sock foot resting on a small step; window light from the left; both faces visible, three-quarter; 3:2, people left-centre, pale wall right | Home hero | ✔ |
| A02 | Close-up: two gloveless clinician hands cupping a bare heel from below, pale sage towel, soft light, 1:1, centred | Home block 2; Fees T3 circle | ✔ |
| A03 | Wide treatment room: pale walls, long window, a 10-metre pale walkway on the floor (plain, no markings with text), patient walking barefoot away from camera, clinician watching from the side; very wide 2:1 | Home band; First visit band; Stories wall tile; Journal post 3 | ✔ |
| W1 | Nurse's lower legs and clogs in a bright hospital corridor mid-stride, 3:4 | Home wall; Conditions strip; Stories wall | ✔ |
| W2 | Line cook standing at a steel kitchen pass, side view, non-slip shoes and apron, 4:3 | Home wall; Conditions strip; Stories (Daniel) | ✔ |
| W3 | Shop-floor worker kneeling and standing to stack shelves of plain unlabelled boxes, 4:3 | Home wall; Conditions strip; Stories wall | ✔ |
| W4 | Postal carrier walking on a pale pavement with a plain shoulder bag, from behind/side, 3:4 | Home wall; Stories (Amara) | ✔ |
| W5 | Hairdresser standing at a salon chair, lower half and feet in trainers on a pale floor, 3:4 | Home wall; Stories wall; Journal post 2 | ✔ |
| W6 | Warehouse picker in safety boots walking an aisle of plain unlabelled boxes, 4:3 | Home wall; Stories wall; Journal post 5 | ✔ |
| M1 | Lena listening, taking handwritten notes on a clipboard, patient (woman, 30s, East Asian, nurse's scrubs) talking, 1:1 with the pair centred | Home card 01; About T3; Treatments card 01; Team (Lena) | ✔ |
| M2 | Tomás (man, 30s, Latino, olive polo) crouching beside the walkway watching a patient's bare feet as she walks, 1:1 | Home card 02; Treatments card 02; Team (Tomás); Stories wall tile | ✔ |
| M3 | Lena fitting a pale custom insole into a patient's work shoe, patient seated, hands and shoe centred, 1:1 | Home card 03; Treatments card 03; Journal post 6 | ✔ |
| O1 | Rosa (woman, 40s, Black, ward-nurse scrubs, cardigan over) walking out of the clinic's pale doorway in the evening light, small smile, 4:5 | Home outcome; Stories (Rosa) | ✔ |
| T1 | Lena and Tomás standing side by side in the clinic's pale entrance corridor, relaxed, mid-shot, 16:9 | Home clinicians; About; Team | ✔ |
| R1 | Reception: Jonas (man, 20s, white, mist-green shirt) at a light-wood desk greeting a patient, plants, 7:5 | Home CTA card; Visit T3 circle | ✔ |
| R2 | Clinic street entrance: ground-floor glass door in a pale plaster building, bench and planter, morning, no lettering anywhere, 16:9 (crop 7:5 on home) | Home CTA card; Visit head | ✔ |
| X1 | Orthotics workshop: Priya's hands shaping a pale insole at a light-wood bench, 4:3 | Orthotics T3 circle; Team (Priya); Journal post 4 | |
| X2 | Nail & skin care: gloved hands with clean instruments on a pale tray beside a patient's foot on a towel, 4:3 | Conditions; Team (Grace); Journal post 1 | |

Per-page no-repeat check: Home 16 (A01 A02 A03 W1–W6 M1 M2 M3 O1 T1 R1 R2). Conditions W1 W2 W3 X2. Treatments M1 M2 M3. Orthotics X1. Fees A02. First visit A03. Team T1 M1 M2 X1 X2. Stories wall W1 W3 W5 W6 A03 M2 + stories O1 W2 W4. Visit R2 R1. About T1 M1. Journal X2 W5 A03 X1 W6 M3.
Each image webp ≤ 300 KB, ≤ 2000 px; one per Grok call; read every image; regenerate any with text, logos, broken hands/feet/faces or off-style colour. Feet and toes must be anatomically correct (count toes). No cut-outs (0 transparent PNGs). readme.txt line per image (AI-generated, CC0).

---

## 9. Scroll effects (sp-scroll; 3 effects; hero has no reveal)

| Effect | sp class | Where | Reference (stage-a candidates) | Trigger / time / easing |
|---|---|---|---|---|
| Zoom reveal ("small photo grows") | `sp-reveal sp-reveal--zoom` on the **wrapper** of A02 (block 2); also on the O1 wrapper (block 7) and inner T3 circle wrappers | home 2, 7; inner T3 | fukushi small hand photo growing to full screen (rAF scrub, linear) | IO enter; scale 1.06→1 + fade, 1.6 s, `--sp-ease: cubic-bezier(.16,1,.3,1)` (RT(g) easing) |
| Parallax | `sp-parallax` | home 3 (A03 band, primary), home 4 (wall layer), hero A01 wrapper (secondary), First visit band, Conditions strip, Stories wall | fukushi photo wall scale 1.5→1 + moveY (scrub, linear) and photo growth | scroll-linked, linear; values §10 |
| Marquee | `sp-marquee` | home 5; Conditions bottom | fukushi pill marquee (CSS infinite, linear) | 40 s linear infinite (`--sp-marquee-dur: 40s`) |
| (base) Fade-up + stagger | `sp-reveal sp-reveal--up`; `sp-stagger` on fact pills, CTA cards, footer columns | home 2 text, 6 intro + each T3 card, 7 text, 8, 9 | fukushi service `is-inview` + ScrollTrigger once | IO enter, 0.8 s, `--sp-dist: 24px`, stagger 0.12 s |
- Hero: **no sp-reveal**. Its load animation (shape fly-in, drift, glow pulse, toe-dot pop) is theme CSS keyframes, all selectors starting `html.sp-js:not(.sp-no-motion)` inside `@media (prefers-reduced-motion: no-preference)`; outer `.ap-shape` = fly-in, inner `.ap-shape__body` = drift (separate elements so transforms don't conflict); hero `overflow: clip` so no x-overflow; no-JS / reduced-motion / `?sp-static` / editor = final resting state. No scroll listeners, no GSAP/AOS/Lenis.
- Fly-in variables per piece: `--fx/--fy` = unit vector from hero centre × 18–28 vmin, `--fs` 1.6–2.4, `--fr` ±120–180°, `animation: ap-fly 1400ms cubic-bezier(.16,1,.3,1) both; animation-delay: calc(var(--i) * 107ms)`; keyframe opacity 0 → .6 at 30% → 1 (RT(g)). Drift: `ap-drift-a` translateY(−30px) rotate(4deg) 10 s; `ap-drift-b` translateX(25px) rotate(−3deg) 13.5 s; `ap-drift-c` translate(20px,−25px) 17.5 s; ease-in-out alternate infinite, start after 2.8 s.
- Wall tiles and marquee pills: no sp-reveal (horizontal/clip rule). Price table, hours table, FAQ, forms, legal text: no effects.

## 10. Parallax (required)
- **Primary — home block 3 "Treatment room band"**: outer Group `.ap-room.alignfull.sp-parallax` (overflow clip, height min(86vh, 760 px)), moving layer = `figure > img` **A03**; `--sp-par: 10%` desktop, **6% at ≤ 781 px (kept on mobile)**. Foreground = caption pill only, positioned on the outer wrapper (not inside the moving figure). Reference motion: fukushi's small hand photo scrubbed up to a full-viewport photo — we reach the same "the photo fills the screen and keeps moving with you" feeling with a full-bleed band + parallax, preceded by the small square A02 zoom.
- **Home block 4 wall**: `.ap-wall.sp-parallax` with `.sp-parallax__layer` = the rotated grid's outer wrapper, `--sp-par: 8%` (mobile 6%); white copy is a sibling above the layer (z 2), never inside it. Reference: wall `--scale` 1.5→1 + `--moveY` scrub.
- **Hero A01 wrapper**: `sp-parallax`, `--sp-par: 6%` (mobile 4%) — subtle, secondary.
- Verify with `check-parallax.mjs` (≥ 6 px delta desktop and mobile; 0 under reduced-motion). If the hero's parallax ever disturbs the first-screen gates, drop the hero one, never the block 3 one.

## 11. Responsive musts
- **390 px first screen: no vertical text** (SCROLL hint hidden < 1024 px), **no absolutely positioned label over text** (confetti in an in-flow strip; toe-dot mark inline in the H1; A03 caption in flow), no x-overflow (hero, field, wall, method ring all `overflow: clip`).
- **Price table at ≥ 782 px**: full width of the wide container (1264 px), 3 columns (item / time / price), price column `white-space: nowrap; text-align: right; width: 1%; padding-right: 0`, time column nowrap; never cut at 800 or 1280 (Taiyo lesson). Rows 1 px `#D6D9C8`, row height ≥ 64 px, price Inter Tight 1.375rem 600.
- **Below 782 px every table stacks** (fees, hours): each row a block; item name on line 1, time and price on line 2 with the price right-aligned; labels via `data-label`.
- T3 cards: panel on top, circle below; wall: 2 columns, 560 px high; CTA frames stack; header collapses at < 1100 px.

## 12. Home acceptance checklist
- [ ] KV rows 1–6 all visible in the first screen at 1440×900 **and** 390×844; A01 shows a clinician and a patient talking at the end of a pale treatment table, one shoe off.
- [ ] Hero is a 2×2: confetti top-left, H1 top-right (72 px at 1440), A01 bottom-left, lead + dark pill bottom-right; ≥ 14 pieces desktop, ≥ 2 overlapping the photo edge; pieces fly in and drift with `?sp-motion`, are static with `?sp-static`.
- [ ] Split nav in a white 74 px capsule (links left and right of the centred wordmark), dark pill "Book a visit".
- [ ] Block 2 small square A02 zoom-reveals, block 3 A03 full-bleed band moves (parallax).
- [ ] T2 wall: rotated −8°, gold 24 px strips, ≥ 0.4 tint, white centred copy.
- [ ] T3: three stacked solid-colour cards (`#5F6348`, `#8E9877`, `#A8AF8B`), radius 4rem, white panel with "01/02/03" ≥ 5rem, pill tag, circle photos ≥ 400 px with dashed ring + toe-dot mark; soft clay ring top-right.
- [ ] Order equals §6 (10 rows incl. header/footer); no waves, blobs, body diagram, price table, step grid, timeline, four-person grid, side rail.
- [ ] 16 photo positions, no image twice; ≥ 250 English words (target ≈ 650), ≥ 3 narrative paragraphs.
- [ ] Numbers (hours, $120, 60 min, 2015, people) equal to §0.
- [ ] First-screen saturation ≤ 15% (target ≤ 8%); theme.json max ≥ 4.25rem (4.5rem + number 5.5rem); Inter Tight / Public Sans + Noto Sans TC/JP identical in editor and front (check-editor-fonts).
- [ ] `check-parallax.mjs` passes; ≥ 3 reveals hidden before entry; no reveal in hero; auto-gates pass (390/1280 no overflow, no text overlap on mobile first screen).

## 13. Similarity table (target ≈ 80%)
| Dimension | Reference value (token) | Ayumi value |
|---|---|---|
| Ground / body ground | `#FAF9F5` / `#F5F2E9` RT(a) | `#F7F8F2` / `#F1F2E9` (−1% L, olive hue) |
| Ink / button | `#2D2D2D` / `#2D2D2D` pill RT(a)(d) | `#2D2D2D` / `#2D2D2D` pill (kept) |
| Shape colours | 6 saturated hues, ≈ 15% of first screen RT(a) | 6 olive-family tones + pollen + clay, ≈ 13% area, ≤ 8% saturated (row palette; gate ≤ 15%) |
| Ring accent | `#F7B98A`, Ø 700, 90 thick, from top-right RT(f) | `#F0B48C`, Ø 700, 90 thick, from top-right of method |
| CTA band | `#FFEAB7` RT(a) | `#F3EBC6` |
| First-screen saturation | 16.4% RT(a) | target ≤ 8%, cap 15% |
| H1 | 72 / 101 / 700 / 0.26em RT(b) | 72 px (4.5rem) / 1.12 / 600 / 0.01em Latin; CJK 3.375rem / 1.41 / 700 / 0.2em |
| H2 | 42 / 67 / 500 / 0.05em RT(b) | 2.625rem / 1.25 (CJK 1.6) / 600 (CJK 500) / 0.01em (CJK 0.05em) |
| Body | 18 / 32.4 / 500 / 0.05em RT(b) | 1.125rem / 1.8 / 400 (CJK 500) / 0.02em (CJK 0.05em) |
| Label | 14.2 / 700 / 0.08em uppercase RT(b) | 0.875rem / 600 / 0.08em uppercase |
| Big number | 88 px Urbanist 600, card colour RT(b) | 5.5rem Inter Tight 600, card accent |
| Container / padding | 1258–1264 px; sections 90–121 px RT(c) | 1264 px; 120 px (mobile 72) |
| Header | white capsule 74 px, r ≈ 38, 38 px from edge, no shadow RT(d) | same |
| Service card | radius 4rem (m 2rem), panel 2.5rem, white 90%, 52/48 split, inset 16 RT(c)(d) | same |
| Pills | 9999 px; marquee 44 px, 1 px pale border, colour dot RT(d)(f) | same (`#D6D9C8`, 12 px dot) |
| Photos | full 0 radius; team 12 px 16:9; circle Ø 546; square 485 1:1 RT(d)(e) | full 0; team/hero/outcome 12 px; T1 16:9; circle Ø 480; square 440 1:1 |
| Photo wall | −8°, 24 px gold strips, 0.45 dark tint, white centred text RT(e) | −8°, 24 px `#C9A04A`, 0.45 olive-ink tint, white centred text |
| Shapes | 16 pieces 60–384 px, grain, 6 glows 120–400 px RT(f) | 14 pieces 22–340 px, grain .18, 4 glows 200–360 px |
| Hero motion | fly-in 1400 ms, stagger ≈ 107 ms, `cubic-bezier(.16,1,.3,1)`, opacity 0→.6@30%→1; drift ±30/±25 px, 3–4°, 10–17.5 s RT(g) | same values (fly distance capped at 28 vmin, clipped) |
| Scroll motion | photo grow scrub; wall scale/moveY scrub; service is-inview; marquee linear RT(g) | zoom-reveal 1.6 s same easing; parallax 10% / 8%; reveal-up 0.8 s; marquee 40 s linear |
| Imagery | high-key candid colour photos of people, hands, work RT(e) | high-key candid photos of clinicians, feet, people at work (own generation) |
