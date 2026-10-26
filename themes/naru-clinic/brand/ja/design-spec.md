# Naru Clinic: design spec (stage 1 spec, binding for implementation)

Slug `naru-clinic`, occupational health clinic for factories and offices, type **business** (WooCommerce compatible, not required). Row b12-1: archetype split-screen, hero text-left-photo-right inside a **top-bottom-halves** first screen, top-bar nav, real photography high-key, font_direction **sans**, page_structure **narrative-problem-method-proof**.

References (S5-Style, unused so far): **Smart** https://www.smart-kobe.com/ (main: first-screen concept, wave bands, blob photos, card row on a blue band) and **八王子糖尿病内科クリニック** https://hachioji-dm.com/ (secondary: floating contact capsule, body diagram with thin connector lines, 8 px-corner clinic photos). Measurements: `brand/reference-tokens.md` (abbrev. **RT(a)…RT(g)**). Screens: `brand/ref/`. Borrow structure, technique, colour relationships and the key-visual concept. Never copy their photos, copy, logos or illustrations.

**IMAGERY: photo** (both references are photo-led; their illustrations are small diagrams only).

---

## 0. Fixed brand facts (all pages, all five languages, identical numbers)

- **Naru Clinic**, occupational health for workplaces. Founded **2012**. Address: **2F, 41 Foundry Lane, Westmere** (fictional, international-neutral). Phone **+00 20 4410 7720** (fictional format), email `hello@naruclinic.example`.
- Hours: **Mon–Fri 08:00–18:00**, **Sat 08:30–12:30**, closed Sun & public holidays. Workplace visits Tue & Thu.
- Named people (6):
  1. **Dr. Helena Varga** — medical director, occupational physician (founder)
  2. **Samuel Osei** — occupational health nurse, lead assessor (the clinician in the hero photo)
  3. **Ines Moreau** — physiotherapist, return-to-work programmes
  4. **Kenji Arai** — ergonomist, workplace and desk assessments
  5. **Priya Natarajan** — audiometry & health-check technician
  6. **Tomas Lindqvist** — employer liaison / coordinator
- Services (5): Workplace strain assessment · Return-to-work programme · Pre-employment & periodic health checks · Office & desk ergonomics · Hearing & vision screening.
- Price list (6 items, employer prices, **EUR in every language**, no conversion, "from" not used):
  | Item | Price |
  |---|---|
  | Individual strain assessment (60 min) | €140 |
  | Workplace walk-through (half day, up to 20 stations) | €680 |
  | Return-to-work programme (6 weeks, 6 sessions) | €960 |
  | Pre-employment health check | €95 |
  | Periodic health check (incl. hearing & vision) | €120 |
  | Annual employer plan (up to 50 employees) | €4,800 / year |
- Assessment process (4 steps, horizontal on desktop, never a 6-step grid or vertical timeline): **1 Talk** (20 min history) → **2 Look** (movement & posture check, shoulder / lower back / wrist) → **3 Visit** (station on site or by photo/video) → **4 Plan** (written plan to worker and, with consent, employer within **3 working days**).
- Cases (3, anonymised, no guaranteed outcomes wording; "in this case" framing):
  1. **Machinist, shoulder** — 6-week return-to-work programme, back on full shifts in week 7 after bench height change. (Home case.)
  2. **Warehouse picker, lower back** — lifting station redesigned with team; modified duties 4 weeks.
  3. **Accounts team, wrist & neck** — 14 desks assessed in one morning, two monitor arms and a break routine.
- Numbers used on home: since 2012, assessment 60 min, plan within 3 working days, 6-week programme. Same figures on inner pages and in all languages.
- No claims of guaranteed results, statistics, awards, real media, real brands.

---

## 1. Signature techniques (three, obvious at a glance)

### T1. Full-bleed photo with a three-layer wave band, tagline under the wave (Smart first screen)
- Reference (smart-kobe.com, `ref/smart-first.png`): a full-width 1440×820 photo with no corners directly under an 80 px top bar; across the bottom ~120 px three SVG waves overlap: a pale blue `#D4E7ED` layer rising to the right, a saturated `#64A0D3` ribbon running from low-left to bottom-right, and the page ground `#F8F7F3` in front, which then becomes the ground for a one-line tagline set in blue at x≈75 px. Sections later change colour through 200 px wave bands (RT(f)).
- Naru: home hero (top half photo + wave, bottom half text). Same layer order, same colours (see §3), same "ribbon crossing low-left → bottom-right" shape. Wave height **120 px desktop / 64 px mobile** in the hero; **200 px desktop / 96 px mobile** for section-to-section bands (into and out of the services band, into the enquiry block, into the footer).
- SVG (viewBox `0 0 1440 120`, `preserveAspectRatio="none"`, width 100%, absolutely placed at the bottom of the photo wrapper, `aria-hidden`), back to front:
  - L1 `#D4E7ED`: `M0,52 C320,20 640,46 900,30 C1140,14 1320,0 1440,6 V120 H0 Z`
  - L2 `#64A0D3`: `M0,40 C300,22 620,30 880,62 C1080,88 1280,104 1440,98 V120 H0 Z`
  - L3 `#F8F7F3`: `M0,58 C360,34 700,52 960,90 C1160,116 1330,112 1440,84 V120 H0 Z`
  Implementer may tune control points against `ref/smart-first.png`, but the blue ribbon must stay visible as a crossing band 10–28 px thick (not a hairline, not a flat block).
- Must not be diluted: three layers, the blue ribbon in `#64A0D3` (not grey), photo truly full-bleed with 0 radius, tagline/H1 sitting on the ground colour directly under the wave (≤ 48 px gap).

### T2. Blob-masked photo pair with a hand-drawn wavy-line label (Smart about/facility)
- Reference: organic blob photo ~484×368 (≈0.46 of content width) in the right column, a small blob 217×192 overlapping its upper-right corner offset outward; English mini label 13.87 px / 0.08em with a 60×8 px 1 px wavy line beside it; links have a wavy underline (RT(d)(e)(f)).
- Naru: home "The problem" section (blob pair right), home "One return" case (blob pair **left**, mirrored), and every inner page's first content block.
- Geometry (desktop ≥1024): large blob 484×368 (aspect 1.315), small blob 217×192, small one placed `top:-48px; right:-56px` relative to the large one (inside the column, never causing x-overflow: the column has 64 px right padding). Mask: `border-radius: 58% 42% 46% 54% / 52% 48% 52% 48%` (large) and `47% 53% 41% 59% / 55% 45% 55% 45%` (small); 3 px ground-colour ring on the small blob (`outline: 3px solid #F8F7F3` via box-shadow `0 0 0 3px #F8F7F3`). Mobile: large blob 100% width (max 360), small blob 44% width, `top:-24px; right:0`.
- Label: `p.nc-label` — Schibsted Grotesk 0.875rem, letter-spacing 0.08em, uppercase, colour main `#3D7FB8`, followed by inline SVG wave 60×8 (`M0,4 Q7.5,0 15,4 T30,4 T45,4 T60,4`, stroke 1 px `#3D7FB8`, no fill), gap 12 px. Text links: wavy underline via `text-decoration: underline wavy #64A0D3 1px; text-underline-offset: 6px`.
- Must not be diluted: masks must be visibly organic (not circles, not rounded rectangles), the small blob must overlap the large one, the label wave must be visible.

### T3. Whole section on the saturated blue band with a horizontal row of 20 px-radius cards and circle arrows (Smart services)
- Reference (`ref/smart-s1.png`): section ground `#64A0D3` that enters and leaves through 200 px wave bands; on it a horizontal row of `#F8F7F3` cards 600 px wide, 30 px gap, radius 20 px, padding 30 px, card title blue with a 40 px outline circle arrow at top right; a progress line and two round prev/next buttons below.
- Naru: home "What we do" (5 service cards). Cards 560 px wide on desktop (two and a bit visible = signals scroll), gap 30 px, radius 20 px, padding 0 0 30 px; each card has a 16:10 photo at top (radius 20 px 20 px 0 0) then title + 2 lines + circle arrow 40 px (1 px `#D4E7ED` border, arrow `#3D7FB8`; hover fills `#3D7FB8` with white arrow .25s ease). Row = `overflow-x:auto; scroll-snap-type:x mandatory`, start aligned with container left (75 px at 1440). Below: 2 px track `rgba(248,247,243,.45)` with a 1/3 white thumb (CSS only, decorative) and two 40 px round buttons (prev `#D4E7ED`, next `#F8F7F3`) that scroll by one card (small inline JS allowed for button click only, no scroll listener). Mobile: cards 82vw, same snap.
- Band is **off the first screen** (keeps first-screen saturation low). Must not be diluted: the band is the real `#64A0D3` (not a pale tint), wave in and wave out, cards stay 20 px radius on the band.

### Supporting (not counted): hachioji floating contact capsule + body diagram
- Capsule: home hero, centred on the photo/wave junction (desktop only absolutely placed; mobile in flow below the H1 block). 540×72 at desktop, radius 44, white `#FFFFFF`, 1 px `#D9DEE3` border, no shadow; three items separated by 1 px rules: clock icon + "Mon–Fri 08:00–18:00 · Sat 08:30–12:30", pin + "41 Foundry Lane, Westmere", phone + number. 22 px square grey icon tiles (`#EEF1F4`, radius 4) as on hachioji.
- Body diagram: home "Method" photo with three numbered points (shoulder, lower back, wrist) joined to side labels by 1 px `#C8CDD3` lines (hachioji uses `#C8C8C8`). Desktop: labels absolutely placed in the panel margin **outside the photo**; ≤781px: dots stay on the photo (12 px numbered circles only, no text), labels become an ordered list under the photo.

### Continuation into inner pages (≥4 required; here all)
| Page | T1 wave page head | T2 blob pair + wavy label | T3 blue band cards |
|---|---|---|---|
| About | photo I11 + 120 px wave | I14 large + H3 small | — |
| Services | photo I12 | wavy labels | 5 service cards on `#64A0D3` band (2-up wrap, photos H5 H6 H7 I13 I16) |
| Workplace assessments | photo I13 | H5 large + H4 small | — (4 steps on `#EAF4F8`) |
| Return-to-work programme | photo I16 | H6 large + H9 small | 6 week cards (text only) on blue band |
| Health checks | photo H7 | wavy labels | — |
| For employers | `#D4E7ED` head, no photo | wavy labels | 3 plan cards (text) on blue band |
| Team | photo I14 | wavy labels | — |
| Case stories | `#D4E7ED` head | 3 alternating pairs (see §8) | — |
| Clinic & access | photo I15 | — | — |
| Contact | `#D4E7ED` head | wavy label | — |
(Images per page are listed again in §8.)

---

## 2. Key visual concept

### (1) Reference first screen (smart-kobe.com)
- **What is drawn**: a bright, high-key outdoor photograph, eye-level close-up: a young carer in a navy polo kneels and smiles while holding both hands of an older person seen from behind/shoulder (cropped at frame right), pale beach and sky behind, soft haze. Full bleed, no corners, under an 80 px warm-white top bar with a round blue phone button and a green CTA pill.
- **Story**: 「こころの歩幅、広げて」 — care starts with a close, kind, physical contact; the professional comes down to the person's level. Calm, assured, companionship.
- **Signature motion**: hero photos crossfade every few seconds with a slow 5 s linear scale-up; the wave band is static and cuts the photo; content then reveals with `cubic-bezier(.165,.84,.44,1)` fade-up; smooth scroll (Lenis — not adopted). hachioji adds a scrubbed parallax on its hero image (≈127 px per 500 px scroll).

### (2) Our translation (occupational health, same composition, same motion idea, same image type)
- **Scene**: a quiet, bright exam room with daylight. Occupational health nurse **Samuel Osei** (navy scrub top, eye-level, three-quarter view, smiling, left-centre of frame) gently checks the shoulder of a **machinist** (back/shoulder to camera, frame right, cropped like Smart's elder: grey work shirt, sleeve rolled), one hand on the shoulder blade, the other guiding the elbow. Pale blue-grey wall and a window as soft background. High-key, real photograph — the same "professional at the person's level, hands-on contact, person cropped at right" composition.
- **Story**: "See the strain before it becomes sick leave." — care starts with a hands-on check, not paperwork.
- **Motion**: hero photo layer with `sp-parallax` (`--sp-par: 8%`, hachioji's scrub feel) plus a one-shot 5 s linear scale 1 → 1.05 (Smart's slow zoom) on an inner wrapper; wave static; no reveal in the hero. One photo only (no carousel).

### (3) KV checklist (all on the home first screen, visible at 1440×900 and 390×844)
| # | 参考站元素 | 我們的對應 | 位置 | 動態 | 用哪張圖 |
|---|---|---|---|---|---|
| 1 | 全幅近景人物照：看護跪低握住長者雙手，長者在右側裁切 | 職業護理師 Samuel 查看機械技師肩膀，技師背對鏡頭、在畫面右側裁切，high-key 診察室 | 首屏上半，全寬 0 圓角，頂欄下方，高 `clamp(420px, 64vh, 600px)`（手機 340px） | `sp-parallax`（--sp-par 8%／手機 6%）＋內層 5s linear 一次縮放 1→1.05 | **H1** |
| 2 | 照片下緣三層波浪帶（淡藍／藍／底色） | 同三層同色序 SVG：#D4E7ED／#64A0D3／#F8F7F3，藍帶由左低到右下穿越 | 照片底部 120px（手機 64px） | 靜態 | SVG（非圖片） |
| 3 | 波浪下底色區的單行藍色標語 | H1「See the strain before it becomes sick leave.」左 7/12，藍 #3D7FB8；右 5/12 為 2 句說明＋綠膠囊 CTA「Book an assessment」＋波浪底線文字連結「For employers」 | 首屏下半（text-left，右側短文） | 無（hero 不 reveal） | — |
| 4 | 頂欄右側 40px 藍色圓形電話鈕＋綠色膠囊 CTA | 同：40px 圓鈕 #64A0D3 白色電話圖示＋膠囊 #86C55C「Book」 | 頂欄右 | hover .25s ease | — |
| 5 | 懸浮聯絡膠囊（hachioji：時間／交通／電話） | 白膠囊 540×72：時間／地址／電話三格 | 桌機：照片與波浪交界置中；手機：H1 區塊下方 in-flow | 靜態 | — |
| 6 | 看護制服＋淡色海邊背景的 high-key 色調 | 護理師深藍 scrub＋淡藍灰牆、窗光；全站同 STYLE | 首屏照片 | — | **H1** |

Every row is built in the first screen and must be visible; "adapted, not copied" applies only to pixels/copy/logo, not to this scene.

---

## 3. Colour (reference hex, ≤ ±5% lightness; source RT(a))

| Role | Hex | Source token | Use | Share |
|---|---|---|---|---|
| Ground | `#F8F7F3` | smart page ground `#F8F7F3` (kept; L≈97%, near-neutral, not cream) | page ground, wave front layer | ≈45% |
| Card | `#FBFAF7` | smart card `#FBFAF7` | cards on band, table rows alt | ≈8% |
| Pale blue | `#D4E7ED` / `#EAF4F8` | smart facility/wave | wave L1, method panel, enquiry block, inner page heads without photo | ≈15% |
| Main (headings, links) | `#3D7FB8` | smart `#3D83C0`, −3% lightness for AA on `#F8F7F3` (4.4:1 large text; body links use ink) | H1/H2, labels, circle arrows | text, <5% area |
| Band | `#64A0D3` | smart band `#64A0D3` (kept) | T3 section ground, wave L2 ribbon, phone button | one section, never > 15% of first screen |
| Ink | `#3D5062` | smart body `#3D5062` | body text, nav | ≈9% |
| Mist (row hex 藍鼠) | `#6C7A89` | design-plan row hex | captions, table rules text, footer secondary | <3% |
| Accent CTA | `#86C55C` | smart `#8ECE64`, −4% lightness; text `#FFFFFF` bold 600 (ok at 1rem bold+ on pill; if contrast tool fails, use ink `#24331F` text) | CTA pills only | <1% |
| Line | `#D9DEE3` | hachioji capsule border (grey) | capsule border, table rules | — |
| Footer | `#3D5062` ground, `#F8F7F3` text | smart footer ink | footer | — |

- Industry fit: Smart's calm blue + green is a natural fit for a clinic; kept. Different from recent themes (Kazoe steel `#7FA3B5`, Kaigi purple, etc.).
- **First-screen saturated share ≤ 15%** (target ≈ 8%; smart 0.072): only the wave ribbon, phone button and CTA pill are saturated; the photo is high-key with low chroma.

## 4. Type (font_direction **sans**)

- Latin headings: **Schibsted Grotesk** (500/600/700). Latin body: **Figtree** (400/500/600). Both via theme.json `fontFamilies` + `fontFace` (woff2 in `assets/fonts/`), so the editor iframe and the front end match.
- Stacks:
  - heading: `"Schibsted Grotesk", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`
  - body: `Figtree, "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`
  - `:lang(zh-TW)` → `"Schibsted Grotesk"/Figtree, "Noto Sans TC", sans-serif`; `:lang(ja)` → `…, "Noto Sans JP", sans-serif` (黑體 only, no 明體 anywhere). Copy `shared/inc/editor-lang.php` and require it. zh-TW/ja subsets loaded via fontFace using the Hokuto/Hada workaround.
- Scale (RT(b) smart: body 16/1.6/0.02em/w500; H2 36.67/1.6/0.06em/w600; H3 23.2; label 13.87/0.08em):
  | Preset | Size | lh | ls | weight |
  |---|---|---|---|---|
  | xx-large (hero H1) | `clamp(2.6rem, 5.2vw, 4.25rem)` | 1.18 | 0.02em | 600 |
  | x-large (H2) | `clamp(1.9rem, 2.8vw, 2.3rem)` (≈36.7px) | 1.6 | 0.06em | 600 |
  | large (H3) | 1.45rem (23.2px) | 1.35 | 0.02em | 600 |
  | medium (lead) | 1.125rem | 1.8 | 0.02em | 500 |
  | base | 1rem | 1.6 | 0.02em | 500 (Figtree 500 per smart w500) |
  | small (label) | 0.875rem | 1.4 | 0.08em | 500 uppercase |
- Max size 4.25rem (theme.json). CJK: ≈0.75× Latin heading sizes, body line-height 1.85; de/fr `hyphens:auto`.

## 5. Layout tokens (RT(c)(d))
- Content width 1290 (wide) / 760 (text); side padding 75 px desktop (smart x=75), 20 px mobile.
- Section padding: 100 / 150 px (smart 100/150/200); band section bottom padding 200 px before the wave out.
- Top bar 80 px, ground `#F8F7F3`, bottom 1 px `#ECEAE4` line; sticky.
- Radii: cards 20 px; CTA pill 900 px; clinic/room photos (hachioji) 8 px; hero 0; blobs organic.
- No shadows, no borders on cards.
- Photo aspects: hero 1440×(64vh) ≈ 2.2:1 (mobile 390×340 ≈ 1.15:1, focal point: hands on shoulder, `object-position: 45% 40%`); blob large 1.315; card 16:10; method 4:5; clinic wide 21:9 with 8 px radius.

---

## 6. Home (en) — section order

| # | Section | Purpose | Layout | Photo | Copy |
|---|---|---|---|---|---|
| 0 | Header | nav | logo left (wordmark "Naru Clinic" Schibsted 600 1.25rem `#3D7FB8` + small wave mark SVG), nav (About, Services, Return to work, Employers, Team, Access), 40 px phone circle, green "Book" pill | — | — |
| 1 | Hero (top-bottom halves) | KV §2 | top: full-bleed photo + T1 wave + capsule on junction; bottom: H1 7/12 left, right 5/12 lead (2 sentences, ~40 words) + CTA pill + wavy link | H1 | ~50 words |
| 2 | The problem — "Strain shows up long before the sick note." | narrative/problem | text left 6/12 (label PROBLEM + wavy line, H2, 2 paragraphs ~110 words), T2 blob pair right | H2 (large), H3 (small) | ~120 |
| 3 | The method — "Talk, look, visit, plan." | method | `#EAF4F8` panel full width, radius 0; left 5/12 method photo with body diagram (3 points + lines to labels outside photo), right 7/12 the 4 steps as a horizontal 2×2 list with numbers in `#3D7FB8` Schibsted 2.25rem, each 2 lines; one sentence "Plan in your hands within 3 working days." | H4 | ~110 |
| 4 | What we do (T3) | services | 200 px wave in → `#64A0D3` band; white label + H2 `#F8F7F3`; horizontal card row (5 cards) + track + prev/next; 200 px wave out to ground | H5, H6, H7 on 3 cards (cards 4–5 text-only with a pale-blue 16:10 panel showing a line icon — no photo repetition) | 5×~30 |
| 5 | One return — case 1 (proof) | proof | T2 blob pair **left** (mirrored), text right: label CASE, H2 "Back on full shifts in week seven.", 2 paragraphs, three small facts row (Shoulder · 6 sessions · bench height +6 cm) in Schibsted 1.45rem `#3D7FB8`; wavy link "Read all cases" | H8 (large), H9 (small) | ~120 |
| 6 | For employers — prices | proof/offer | 760 px intro left aligned + full-width price table (6 rows, §0) inside wide container; note line "Prices in EUR, excl. VAT." | — | ~50 |
| 7 | The clinic & people | trust | wide 21:9 photo radius 8 (hachioji) of the clinic, below it 2 columns: left Dr. Helena Varga + Samuel Osei short bios (2 sentences each, names in H3), right hours & address list | H10 | ~90 |
| 8 | Single enquiry | one CTA | 200 px wave ground → `#D4E7ED`; centred-left H2 "Tell us about one job that hurts." + 1 sentence + green pill "Book an assessment" + phone link; no form | — | ~30 |
| 9 | Footer | — | 120 px wave `#D4E7ED` → `#3D5062`; 3 columns (address/hours, pages, languages) | — | — |

Home photo positions: H1–H10 = **10** (≥8). Home English ≥ 300 words, ≥ 3 narrative paragraphs (sections 2, 3, 5).

### Comparison with recent themes (no similarity)
| Theme | Home order | Naru difference |
|---|---|---|
| Kazoe Books App | split colour band + framed H1 → features → FAQ → fixed CTA | Naru: full-bleed photo + wave, narrative problem→method→proof, no FAQ, no fixed CTA |
| Mado Air | dark top bar + sticky sub-nav long product page | Naru: light bar, no sub-nav, clinic narrative |
| Kaigi Centre | stage photo + right purple room list → horizontal strip → intro → 3 cases → foyer → team → location | Naru's horizontal row is cards on a waved blue band in section 4 (not under hero), one case only, no room list |
| Shirota Laundry | oval photo window + ghost wordmark + grid lines → staggered mosaic → process | Naru: organic blobs (not ovals), no ghost word, no mosaic; process is a 2×2 list in a pale panel with a body diagram |

### First-screen composition (1440×900)
- 0–80: top bar. 80–656 (≈64vh): photo; waves occupy 536–656. Capsule centred, top at 620 (straddles the wave; z above SVG). 656–900: ground; H1 baseline row starts at y≈700, x=75, max-width 760; right column x≈900–1365: lead + CTA. Fold shows H1 fully.
- 390×844: bar 64; photo 340 (64 px wave); H1 `2.6rem`, lead, CTA; capsule in flow below CTA (stacked 3 rows). **No vertical text, no absolutely placed labels over text** on mobile.

---

## 7. Inner pages (10) — industry core

All open with the T1 wave page head (photo 46vh desktop / 240 px mobile + 120/64 px wave + H1 on ground below, label with wavy line). Pages marked "no photo" use a `#D4E7ED` 220 px head with the same three-layer wave in reverse colours.

1. **About** — story since 2012, why a clinic for workplaces, values (3 short paragraphs), T2 blob pair, director's note (Dr. Varga). Head I11.
2. **Services** — overview of 5 services on the T3 blue band (cards wrap 2-up), each linking to its page or anchor. Head I12.
3. **Workplace assessments** — what a walk-through is, the 4-step process on `#EAF4F8`, body diagram reused as SVG-only line art (no photo repeat), what employers receive. Head I13, blob pair H5 + H4.
4. **Return-to-work programme** — 6 weeks, 6 sessions, week-by-week cards on blue band (T3, text cards), who's involved (Ines Moreau), case 1 summary. 
5. **Health checks** — pre-employment and periodic checks, hearing & vision screening, what to bring, how long (45 min).
6. **For employers** — annual plan, price table (full table, identical to home), FAQ list (5 Q&A as `<details>`), plan card row on blue band.
7. **Team** — 6 people as an editorial list (name H3, role, 2 sentences), one group/room photo; **no four-portrait grid**.
8. **Case stories** — 3 cases, alternating T2 blob pairs, facts row per case.
9. **Clinic & access** — address, hours table (stacks on mobile), how to arrive (bus/rail/parking text), accessible entrance; wide 8 px photo of reception.
10. **Contact** — enquiry form (name, company, email, phone, topic select, message), phone, hours; no photo head.
Plus Journal (index + single) for posts, privacy page (plain text).

---

## 8. Images (15 total, all photos, one STYLE string)

**STYLE**: `High-key documentary photograph, bright natural daylight, soft diffused window light, pale blue-grey and warm white palette, low saturation, gentle contrast, clean modern occupational health clinic or workplace, international neutral setting, diverse adults, natural candid expressions, 35mm lens, shallow depth of field, real photo, no text, no logos, no brand marks, no signage`

| ID | Subject / composition | Where | Home |
|---|---|---|---|
| H1 | Exam room: male nurse in navy scrubs (Black, 40s, smiling, eye level, left-centre) checks the shoulder of a machinist in a grey work shirt seen from behind at frame right, hand on shoulder blade, window light; wide 2.2:1 with space top | Home hero | ✔ |
| H2 | Machinist at a lathe/bench rubbing his shoulder, mid shot, side light, factory clean and bright | Home problem (blob large) | ✔ |
| H3 | Close-up of hands on a keyboard and wrist support, office desk | Home problem (blob small) | ✔ |
| H4 | Standing worker in neutral posture, side view, clinician measuring shoulder range with a goniometer, plain pale wall, 4:5 | Home method (body diagram) | ✔ |
| H5 | Ergonomist and warehouse worker reviewing a lifting station, mid shot | Home card "Workplace assessment" | ✔ |
| H6 | Physiotherapist guiding a woman through a band exercise in a bright rehab room | Home card "Return to work" | ✔ |
| H7 | Audiometry booth: technician fitting headphones on a worker | Home card "Health checks" | ✔ |
| H8 | The machinist back at work, smiling slightly, adjusting a raised bench, 4:3 | Home case (blob large) | ✔ |
| H9 | Detail: hands adjusting a bench height crank / clamp | Home case (blob small) | ✔ |
| H10 | Clinic interior: calm waiting area with light wood and pale blue chairs, empty, wide 21:9 | Home clinic | ✔ |
| I11 | Dr. Varga (woman, 50s, Central European) talking with a factory manager on a bright shop floor | About head | |
| I12 | Two clinicians in a consult room reviewing notes at a table | Services head; Team wide photo | |
| I13 | Office team member at a sit-stand desk, ergonomist adjusting monitor arm | Workplace assessments head; Case 3 blob | |
| I14 | Clinic team of four in the corridor, informal, mid shot | Team head; About blob large | |
| I15 | Reception desk with receptionist greeting a worker in hi-vis jacket, 8 px wide photo | Clinic & access head | |
| I16 | Warehouse picker lifting a box with correct technique, coach beside | Case 2 blob; Return-to-work head | |

Page→image (no repeats within a page; home uses H1–H10):
| Page | Head | Blob/other |
|---|---|---|
| About | I11 | I14 (large) + H3 (small) |
| Services | I12 | cards H5, H6, H7 + I13, I16 |
| Workplace assessments | I13 | H5 (large) + H4 (small) |
| Return to work | I16 | H6 (large) + H9 (small) |
| Health checks | H7 | I15 (wide 8 px) |
| For employers | no photo | — |
| Team | I14 | I12 (wide) |
| Case stories | no photo | case1 H8+H9, case2 I16+H2, case3 I13+H3 |
| Clinic & access | I15 | H10 (wide) |
| Contact | no photo | — |
Total 16 images (H1–H10, I11–I16). Each ≤300 KB, ≤2000 px, webp; regenerate any with text, logos, broken hands/faces or off-style colour. No cut-outs.

---

## 9. Scroll effects (sp-scroll; 3 effects; hero has no reveal)

| Effect | sp class | Where | Source | Trigger / time / easing |
|---|---|---|---|---|
| Fade-up reveal + stagger | `sp-reveal sp-reveal--up` on section text groups; `sp-stagger` on the 4 method steps, the case facts row and footer columns | home §2, §3, §5, §7, §8; inner page sections | smart (IO + transition) | IO enter; 0.8 s; set `--sp-ease: cubic-bezier(.165,.84,.44,1)`, `--sp-dist: 24px`; stagger 0.12 s |
| Zoom reveal for blobs | `sp-reveal sp-reveal--zoom` on the **wrapper** of each blob pair (mask on the child img, not on the observed element) | home §2, §5; inner T2 blocks | smart blob opacity 1.8 s ease | IO; 1.6 s; ease |
| Parallax | `sp-parallax` | home hero photo wrapper (§10) and the home §7 clinic wide photo | hachioji ScrollTrigger scrub | scroll-linked, linear |
- Card row: reveal on the **row container** only (`sp-reveal--up`), never the cards (horizontal scroller rule). Price table, form, legal text: no effects.
- Respect reduced-motion, `?sp-static`, editor = final state (built into sp-scroll).

## 10. Parallax (required)
- **Home hero**: outer Group `.nc-hero__media.sp-parallax` (overflow clip), background = `img` H1 (direct child figure>img), `--sp-par: 8%` desktop, `--sp-par: 6%` at ≤781px (keep on mobile). Foreground (wave SVG, capsule, H1) is **outside** the moving layer: wave and capsule are siblings positioned over the wrapper; H1 in the lower half. Reference motion: hachioji's scrubbed hero image (yPercent ≈25, start "top bottom", ease none) + smart's 5 s linear zoom (inner `div.nc-zoom` around the img: `@keyframes nc-zoom {from{transform:scale(1)} to{transform:scale(1.05)}}` 5 s linear forwards; disabled under `html.sp-no-motion` and reduced-motion; if it interferes with `check-parallax.mjs`, drop the zoom, never the parallax).
- **Home §7** clinic photo H10: `sp-parallax`, `--sp-par: 6%`, radius 8 on the wrapper, text below not moving.
- Verify with `check-parallax.mjs` (≥6 px delta desktop and mobile; 0 under reduced-motion).

## 11. Responsive musts
- 390 px: no vertical text, no absolutely positioned labels over text (capsule in flow, body-diagram labels become a list, blob small `right:0`), no x-overflow (blob offsets inside padding).
- Price table at ≥782 px: full width of the wide container (1290), two columns, price column `white-space:nowrap; text-align:right; width:1%` + `padding-right:0`; never cut at 800 or 1280. Below 782 px every table (prices, hours) stacks: each row a block, label above, price right-aligned on its own line.
- Card row: snap scroll on all widths; buttons ≥40 px.

## 12. Home acceptance checklist
- [ ] KV rows 1–6 all visible in first screen (1440 and 390); H1 photo matches the scene (nurse + machinist shoulder, machinist cropped right).
- [ ] Three-layer wave with a visible `#64A0D3` ribbon under the hero; H1 on ground directly below.
- [ ] Capsule straddles the junction (desktop); in flow on mobile.
- [ ] Blob pairs in §2 (right) and §5 (left), organic masks, small overlapping large; wavy-line labels on every section.
- [ ] Blue band `#64A0D3` services section with 200 px waves in/out, 20 px cards, circle arrows, prev/next.
- [ ] ≥8 photos (10), no repeat on page; ≥300 English words; 3 narrative paragraphs.
- [ ] Prices/hours/numbers equal to §0; table full width ≥782 and nowrap prices.
- [ ] First-screen saturation ≤15%; theme.json max 4.25rem; Schibsted/Figtree + Noto Sans TC/JP in editor and front.
- [ ] sp-parallax passes check-parallax; reveal hidden ≥3 before entry; no reveal in hero; auto-gates pass.

## 13. Similarity table (target ≈80%)
| Dimension | Reference (token) | Naru |
|---|---|---|
| Ground / pale / band / main / ink / CTA | `#F8F7F3` / `#D4E7ED`,`#EAF4F8` / `#64A0D3` / `#3D83C0` / `#3D5062` / `#8ECE64` RT(a) | `#F8F7F3` / same / `#64A0D3` / `#3D7FB8` (−3%) / `#3D5062` / `#86C55C` (−4%) |
| First-screen saturation | 0.072 | target ≈0.08, cap 0.15 |
| Body type | 16 px / 1.6 / 0.02em / 500 RT(b) | 1rem / 1.6 / 0.02em / 500 Figtree |
| H2 | 36.67 px / 0.06em / 600 | 2.3rem / 0.06em / 600 Schibsted |
| Label | 13.87 px / 0.08em | 0.875rem / 0.08em + 60×8 wave |
| Section padding | 100/150/200 px RT(c) | 100/150 px, band bottom 200 |
| Side padding / card | x=75; card 600 w, gap 30, pad 20/30 | x=75; card 560 w, gap 30, pad 30 |
| Top bar | 80 px | 80 px |
| Radius | card 20, pill 900, blob organic, circle 40 RT(d) | same; clinic photo 8 (hachioji) |
| Hero image | full-bleed 1440×900, 0 radius, 3-layer wave 120 px RT(e)(f) | full-bleed 64vh, 0 radius, 3-layer wave 120 px |
| Blob sizes | 484×368 + 217×192 offset top-right | same |
| Wave bands | 200 px, `#64A0D3`→`#D4E7ED`→`#F8F7F3` | 200 px, same colours |
| Motion | reveal 0.8 s `cubic-bezier(.165,.84,.44,1)`; blob 1.8 s ease; hero zoom 5 s linear; hover .25 s RT(g) | same easing 0.8 s; zoom-reveal 1.6 s; hero zoom 5 s linear; hover .25 s |
| Parallax | hachioji scrub ≈25% | `--sp-par` 8% (mobile 6%) |
| Capsule | 540×88 r44, white, grey border | 540×72 r44, white, `#D9DEE3` |
| Imagery | high-key real photos | high-key real photos, own generation |
