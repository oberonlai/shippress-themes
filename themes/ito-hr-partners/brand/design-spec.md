# Ito HR Partners: design spec (stage 1 spec, binding for implementation)

Slug `ito-hr-partners`, HR and employment-law consultancy for growing companies, type **business** (WooCommerce compatible, not required). Row b7-12: archetype editorial-magazine, first screen **top-bottom halves**, page structure **service-index**, nav **split**, photographic (documentary), palette Chitose green `#3F5E4A` as the one muted accent, fonts PT Serif + PT Sans.

Reference (only one, 80% similarity target): **R1 = TMG Law Office, https://tmg-law.jp/** (S5-Style, law / professional services). Measurements: `brand/reference-tokens.md` (cited below as `tok(a)`…`tok(g)`). Screens: `brand/ref/tmg-first.png`, `ref/scroll-tmg-*.png`. Borrow structure, technique, numbers and colour relationships only. **No R1 copy, photos, logo or emblem.** All photos are our own Grok images (section 9) and all copy is ours (`brand.md`).

Class prefix in the theme: `ih-`. Sizes below are at 1440×900 unless stated.

---

## 1. Signature techniques (three; all obvious at a glance; none softened)

### T1. One-line headline + tick-tag service index over a full-bleed loop row of tall rounded photo cards, one cropped to a circle (R1 hero, `ref/tmg-first.png`, `tok(b)` hero, `tok(e)` hero loop, `tok(f)` ticks)
- **R1:** white ground; at y≈215 a single-line 80 px bold headline flush left at x≈40; under it three tags (22 px / 700) each led by a 22 px round tick disc (tint fill, accent tick) and separated by 1 px dotted vertical rules; at y 414 a full-bleed row of tall 480×497 cards (radius 10, gap 40) runs edge to edge, auto-scrolling right-to-left; card 2 is a person cropped to a **circle** inside a pale card; a 1 px hairline sits above and below the row.
- **Ours (home block 1, the first screen):**
  - Top half (white, y 123–414): small label "HR & employment law · Dublin" (PT Sans 700 0.875rem, accent `#3F5E4A`, ls 0.08em) at y≈180; H1 **one line** "People matters, settled early." PT Serif 700 `clamp(2.5rem, 5.6vw, 5rem)` = **80 px** at 1440 (preset `display`), lh 1.2, ls 0.01em, ink, x = 40 px; at y≈330 the **service index** = four tick tags "Payroll compliance · Policies & handbooks · Workplace investigations · Retainer support", PT Sans 700 1.375rem (22 px), each led by a 22 px tick disc (fill `#E3EAE5`, tick stroke 2 px `#3F5E4A`), gap 32 px with a 1 px dotted `rgba(0,0,0,.25)` vertical rule 26 px tall between tags. Right side of the top half, bottom-aligned to the tag row, max-width 30rem: lead "Employment-law advice and HR operations for companies of 15 to 400 people, at a fixed fee agreed before we start." PT Sans 400 1rem lh 1.7 muted ink `#585B63`.
  - Bottom half (y 414–900+): `div.ih-loop.sp-marquee` full bleed, 1 px hairline `rgba(0,0,0,.15)` top and bottom, cards **480×497, radius 10, gap 40** (one set = 4 cards = 2080 px), order: P03 reception · **P01 circle** · P02 team meeting · P04 desk detail. The circle card = `#EFF2F4` panel 480×497 radius 10 with P01 cropped to a 480 px circle (`border-radius:50%`, aligned top so the circle is clipped by the bottom edge of the card exactly as in R1) and a 1 px dashed `rgba(0,0,0,.15)` card outline.
  - The row moves right-to-left at R1 speed (section 10). It must also look complete static (`?sp-static`, no-JS): `.ih-loop{display:flex;overflow:clip}` and `.ih-loop__set{display:flex;gap:40px;padding-right:40px;flex:none}` are theme base rules, not dependent on sp-marquee. Cards are `figure` with `img` (alt text), never CSS backgrounds.
- **Must not be diluted:** the headline stays one line at 1440 in en (≥ 4.25rem; if a translation wraps, two lines max); the tick discs stay visible accent green (not grey); the photo row is full bleed edge to edge (not inside the container), cards tall (≈0.97 ratio), radius exactly 10 px, gap 40 px; one card is a true circle crop.

### T2. Floating slate "fixed-fee" pill overlapping the bottom of the photo row (R1 Topics pill, `tok(d)`, `tok(f)` arrow discs)
- **R1:** a slate `#647582` bar 760×62, radius 10, floating over the lower right of the hero photo row (x 649–1410, y 790–852): bold label "Topics", a small white tag, a date, one ellipsised line and a round white disc with an arrow at the right.
- **Ours:** `a.ih-pill` (whole bar is one link) — slate `#647582`, radius 10, **width 760 px, height 62 px**, `position:absolute; right:30px; bottom:48px` of the hero (over the loop row), padding 0 16px 0 22px, flex row gap 18 px: label "Fixed fee" PT Serif 700 1.25rem white; chip "HR health check" (white fill, slate text, PT Sans 700 0.75rem, radius 4, padding 3px 8px); price "€1,450" PT Sans 700 1rem white `white-space:nowrap`; text "Policies, contracts and payroll reviewed, written report in 10 working days" PT Sans 400 0.875rem white, single line `text-overflow:ellipsis`; disc 28 px white with slate `→` at the far right. Hover: disc fills `#3F5E4A`, arrow white. Links to `/fees/#health-check`.
- **Continuation:** every inner page head carries the same pill over its photo row with that page's fixed fee (section 5 table).
- **< 782 px:** `position:static`, width 100%, height auto (min 56 px), margin 16px 20px 0, text line hidden (label + chip + price + disc only). Never absolutely positioned on mobile.
- **Must not be diluted:** slate fill (not accent green, not outline), radius 10, it overlaps the photo row on desktop (not placed below it), round white arrow disc at the right.

### T3. Approach cards with a vertical accent label over a blurred full-bleed photograph (R1 "Features" section, `tok(e)` reason feature, `tok(f)` vertical label, `tok(g)` fixed background)
- **R1:** a full-bleed blurred, darkish office photograph (fixed background) with the white section title on it; below the title, large white cards (radius 10) overlap the photograph one after another; each card has a vertical rotated accent label "Feature 01" at the left edge, a small accent kicker, a two-line h2, a paragraph, and a **540×540 square photo** on the right.
- **Ours (home block 4 "How we work"):** `section.ih-approach.sp-parallax` alignfull, `--sp-par:12%`. Moving layer `img.sp-parallax__layer` = **P08** (open-plan office) `object-fit:cover`, `filter: blur(6px) brightness(.78)`, absolutely filling the section. Over it (not in the layer): label "How we work" (PT Sans 700 0.875rem, white 80%) + H2 "Fixed scope, plain language, one adviser." PT Serif 700 2.75rem white, top padding 250 px (`tok(c)` reason header 250). Then three cards stacked, gap 40 px, container 1280: white, radius 10, no shadow, padding 56px 56px 56px 96px, grid `1fr 540px`, gap 64, align center. Left edge: vertical label "Approach 01" (`writing-mode: vertical-rl`, PT Sans 700 0.8125rem, ls 0.16em, accent `#3F5E4A`) absolutely at left 32 px, top 56 px — this is inside the card, not over text. Card text: kicker (PT Sans 700 0.875rem accent, e.g. "Agreed before we start"), H3 two lines PT Serif 700 2.2rem lh 1.4, paragraph 1rem lh 1.8 (≈60 words). Right: **540×540 photo**, radius 10. Cards: 01 "Agreed before we start" (P09 payroll review), 02 "One adviser who knows your file" (P11 video check-in), 03 "A written handover you can reuse" (P10 quiet interview room). Section bottom padding 110 px; the photograph shows above and between/around cards.
- **< 782 px:** card single column, photo 1:1 full width on top, vertical label becomes a normal horizontal label above the kicker (`writing-mode: horizontal-tb`), padding 28 px; H2 2rem.
- **Continuation:** Services, Payroll compliance, Workplace investigations, Retainer support, About (section 5).
- **Must not be diluted:** the photo is full bleed, blurred and visibly moving (parallax); the cards are white and overlap it; the vertical label is accent green and vertical on desktop; the square photo stays ≥ 480 px at 1440 and square.

### Supporting moves (required, not counted as signatures)
- **S-a, round arrow discs** (`tok(f)`): 28 px accent disc with a white arrow at the bottom-right of every card and at the end of every list row; 56 px outline circle arrows (1 px ink 40%) on sliders/pagination.
- **S-b, staggered intro pair** (`tok(e)` intro pair): home block 3 only (and About): 420×315 photo at the left of the photo area and 630×473 photo to its right dropped **75 px**, both radius 10.
- **S-c, inset pale band** (R1 seminar band): `#EFF2F4` rounded 10 px band inset 28 px from the viewport edges (not full bleed) holding the service index (home block 2) and the FAQ.
- **S-d, count tags** (`tok(f)` "500+"): accent PT Serif 700 3.5rem numerals with a 1rem PT Sans unit, used as fixed facts (not claims): "2014 founded", "7 advisers", "10 working days".

### Continuation to inner pages (T1 on all, T2 on all heads, T3 on ≥ 4)
Inner page head (`pattern: page-head`) = same top/bottom structure as the home hero, smaller: label + H1 one line PT Serif 700 `clamp(2.4rem, 4.4vw, 4.25rem)` + 3–4 tick tags of that page's sub-topics; bottom half a **static** full-bleed row of two cards (no marquee): card A = 480×497 pale panel with a circle-cropped person, card B = rounded 10 px photo filling the rest of the row (height 497, `flex:1`), hairlines top/bottom; the T2 pill overlaps card B at right 30 / bottom 48.

| Page | T1 (head tags; A circle / B photo) | T2 pill (fee shown) | T3 (cards over blurred P08, parallax) |
|---|---|---|---|
| Services | Payroll · Policies · Investigations · Retainer; A P01, B P02 | HR health check €1,450 | "How fixed fees work" 3 cards: P06, P07, P04 |
| Payroll compliance | Holiday pay · Working time · Payslips · Year-end; A P14, B P09 | Payroll compliance review €1,900 | 2 cards "What we check / What you receive": P17, P04 |
| Policies & handbooks | Contracts · Handbook · Leave · Remote work; A P12, B P06 | Handbook & policies €2,400 | — (body uses the service-index cards) |
| Workplace investigations | Grievance · Disciplinary · Bullying · Findings; A P13, B P10 | Workplace investigation from €3,800 | 3 cards "Scope / Interviews / Findings": P18, P07, P05 |
| Retainer support | 6 h · 14 h · 1 working day reply; A P01, B P07 | Retainer Essentials €890 / month | 2 cards "Essentials / Growth": P11, P05 |
| Fees | Fixed · Excl. VAT · Agreed in writing; A P15, B P04 | HR health check €1,450 | — |
| About | 2014 · Dublin · 7 advisers; A P15, B P03 | Free 30-minute scoping call €0 | "What we hold to" 3 cards: P06, P01, P04 |
| Team | Employment law · HR policy · Payroll; no card A (portraits follow below), single full-width card B P02 | Free 30-minute scoping call €0 | — |
| Client stories (index / single) | Story category tags; index head A P13, B P03; single: featured image as card B | HR health check €1,450 | — |
| Contact | Phone · Email · Hours; A P01, B P03 | Free 30-minute scoping call €0 | — |

---

## 2. Colour (`tok(a)`; R1 values kept; two roles swapped with reasons)

| Role | R1 | Ours | Share (page / first screen) | Use |
|---|---|---|---|---|
| Ground | `#FFFFFF` | **`#FFFFFF`** (kept) | ~60% / ~50% | page, header, hero top half, cards |
| Pale band | `#F6EFE0` warm band (and `#EFF2F4` seminar band) | **`#EFF2F4`** (R1's own seminar band colour, sampled from `ref/scroll-tmg-fadeup-after.png`) | ~18% / ≤ 8% (circle card panel) | service-index band, FAQ band, circle card panel, footer |
| Slate | `#647582` | **`#647582`** (kept) | ~7% / ~3.5% (pill) | T2 pill, people band, slider arrows hover |
| Ink | `#2A2C33` | **`#2A2C33`** (kept) | ~6% | headings, body |
| Muted ink | — | `#585B63` (ink lightened) | — | lead, captions, meta |
| Accent | `#DC5310` (0.7%) | **`#3F5E4A`** Chitose green (row hex) | ≤ 3% / < 1% | CTA button, tick strokes, arrow discs, vertical labels, index numbers, prices, active nav underline |
| Accent hover | `#E97F14` | `#557A62` (accent +12% lightness) | < 1% | hover fills |
| Accent tint | orange tint behind ticks | `#E3EAE5` | < 1% | tick disc fill, chip ground |
| Hairline | `rgba(0,0,0,.15)` | **`rgba(0,0,0,.15)`** (kept) | — | card borders, row rules, header rule |

Why the two swaps: (1) accent orange → `#3F5E4A` because the row fixes the palette to Chitose green and asks for a quiet, low-chroma system; an orange CTA would be the only saturated colour and clashes with a green family. It keeps R1's role and share exactly (≤ 1% of the first screen, small areas only). (2) R1's cream `#F6EFE0` → R1's cool `#EFF2F4` because common rules forbid cream/beige-led grounds and the row asks for off-white/stone; `#EFF2F4` is already R1's second band colour so the relationship (white + one pale band + slate + dark ink + one accent) is unchanged.
- Contrast: ink on white 14.2:1; white on `#3F5E4A` 7.4:1; white on slate `#647582` 4.7:1 (pill text ≥ 0.875rem; 0.75rem chip text is slate on white).
- **First-screen saturated pixels (`scripts/check-first-screen.py`): cap 15%, target ≤ 6%** (R1 3.44%). UI colours are all below S 0.5; the only chroma is photography, held down by the STYLE string. If an image pushes it over 6%, regenerate rather than desaturate in CSS.
- Never a full-bleed accent field; no dark footer.

---

## 3. Type (`tok(b)`; root 16 px)

Fonts: **PT Serif** 400/700 (display, headings) and **PT Sans** 400/700 (body, labels, nav, tags) — row fonts, OFL (ParaType, Google Fonts OFL; put OFL-PTSerif.txt / OFL-PTSans.txt in `assets/fonts/`, verify licence text when building). Latin subset woff2.
- **Loading (hard):** both families via `theme.json` `settings.typography.fontFamilies[].fontFace` (no `wp_enqueue_style` / front-only `@font-face`), so the block editor iframe and the front end use the same faces. zh-TW **Noto Serif TC** and ja **Noto Serif JP** (700 for headings, 400 optional) also as `fontFace` entries with `src` = subset woff2 built from the theme's own zh-TW/ja text (Hokuto/Hada method; the shared subset script is broken — use the Hada replacement). CJK body: Noto Sans TC/JP subset woff2 via fontFace if size allows (≤ 400 KB each), otherwise stack `"PT Sans", "Noto Sans TC", "PingFang TC", "Microsoft JhengHei", sans-serif` (identical in editor and front). Any `:lang()` rule in style.css ⇒ copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` unchanged and `require_once` it in functions.php. `check-editor-fonts.mjs` must pass in en and zh-TW.

| Role | Family | Size (1440) | Weight | Line-height | Tracking | Source token |
|---|---|---|---|---|---|---|
| Hero H1 | PT Serif | `clamp(2.5rem, 5.6vw, 5rem)` = 80 px (preset `display`, theme max **5rem ≥ 4.25rem**) | 700 | 1.2 | 0.01em | R1 hero ≈ 80 / 700, ls .05em (reduced for Latin serif) |
| Hero tags | PT Sans | 1.375rem (22 px) | 700 | 1.4 | 0.02em | R1 tags 22 / 700 |
| Intro H2 | PT Serif | `clamp(2.25rem, 3.8vw, 3.375rem)` = 54 px (preset `xx-large`) | 700 | 1.4 | 0.02em | R1 intro h2 53.44 / lh 1.4 |
| Section H2 | PT Serif | `clamp(2rem, 3.1vw, 2.75rem)` = 44 px (preset `x-large`) | 700 | 1.4 | 0.02em | R1 h2 43.92 / 700 / 1.4 |
| Inner H1 | PT Serif | `clamp(2.4rem, 4.4vw, 4.25rem)` (preset `display-s`) | 700 | 1.2 | 0.01em | R1 hero stepped down |
| T3 card H3 | PT Serif | 2.2rem (35 px) | 700 | 1.4 | 0.02em | R1 feature h2 35.28 / 1.4 |
| Card / sub H3 | PT Serif | 1.6875rem (27 px) (preset `large`) | 700 | 1.4 | 0.01em | R1 h3 26.64 / 700 |
| Section label | PT Sans | 0.875rem | 700 | 1.4 | 0.08em, no uppercase | R1 small EN label ~14 px accent |
| Body | PT Sans | 1rem (preset `base`) | 400 | 1.75 | 0.01em | R1 body 16 / 400 / 1.4 / .04em (Latin needs more leading) |
| Lead | PT Sans | 1.125rem (preset `medium`) | 400 | 1.7 | 0.01em | — |
| Nav | PT Sans | 0.9375rem (15 px) | 700 | 1 | 0.04em | R1 nav 15 / 700 / .08em |
| CTA | PT Sans | 0.9375rem | 700 | 1 | 0.06em | R1 CTA 15 / 700 / .08em |
| Count numerals / prices | PT Serif / PT Sans | 3.5rem / 1.125rem | 700 | 1 / 1.4 | tabular-nums on prices | R1 count tags |
| Small | PT Sans | 0.8125rem (preset `small`) | 400 | 1.6 | 0.02em | — |

Presets in theme.json: small 0.8125, base 1, medium 1.125, tag 1.375, large 1.6875, x-large 2.75, xx-large 3.375, display-s 4.25, display 5 (rem). CJK: headings Noto Serif TC/JP at ~0.75× the English size (H1 3.75rem), body lh 1.85, tags 1.125rem; fr/de `hyphens:auto` on body and headings may wrap to two lines.

**Header (R1 "split" bar, `tok(c)`):** 96 px (R1 123 reduced for Latin), white, 1 px `rgba(0,0,0,.15)` bottom rule inset 10 px each side (R1 rule stops short of the edges), side padding 40 px, sticky. Left: wordmark "Ito HR Partners" PT Serif 700 1.375rem ink with a 30 px accent outline circle containing "I" before it (our own mark, not R1's). Centre-right: nav Services · Fees · Team · About · Stories · Contact (15 / 700). Then a 1 px dotted vertical divider 56 px tall, then the contact group: phone "+353 1 555 0142" PT Sans 700 1.25rem and "Mon–Fri 9:00–17:30" 0.75rem muted under it; then CTA button "Enquire" accent fill, white text, radius 4, 60 px tall, padding 0 18px, with a 30 px darker (`#2F4A39`) mail disc at its right. Language links EN · Chinese · Japanese · FR · DE as a 0.75rem row above the phone (active accent). < 1100 px: phone block hidden; < 960 px: wordmark + "Enquire" + two-line menu icon opening a white overlay (nav, phone, languages). One top menu only.

**Footer (R1 footer on band):** full-bleed `#EFF2F4`; left 140 px emblem = accent 1 px outline circle with "I" PT Serif 3rem + "Ito HR Partners" under it; then 4 link columns with 6 px accent disc bullets (Services · Company · Fees & stories · Contact with address/hours); bottom line 0.75rem muted "© 2026 Ito HR Partners (sample content)". Before the footer, the contact close (home block 8) sits on the same band.

---

## 4. Home page (en ≥ 250 words with ≥ 3 narrative paragraphs; actual plan ≈ 520 words)

### First screen (1440×900) — top-bottom halves
- 0–96 header; 96–414 white top half (label, one-line H1, four tick tags left; lead bottom-right); 414–911 the full-bleed loop row of four 480×497 rounded cards (P03 · **P01 circle** · P02 · P04, about 2.8 cards visible); the slate T2 pill floats at right 30 / bottom 48 over the row. Nothing else.
- Forbidden on the first screen: table, form, search box, large centred text, vertical text, accent-coloured fields.
- **390×844:** header 64 px; label, H1 `2.5rem` two lines lh 1.2; tags as a 2×2 grid (horizontal text, tick discs 18 px, 1rem, no dotted rules); lead hidden below 480 px (shown after the row); loop row cards **260×270**, gap 10 (R1 mobile gap), radius 10; the pill static under the row. No `writing-mode`, no absolute labels over text.

### Block order (binding)
| # | Pattern | Purpose | Layout and photos | Copy |
|---|---|---|---|---|
| 1 | `front-hero` | promise + service index | **T1 + T2** as above; photos P03, P01 (circle), P02, P04 | label, H1, 4 tags, 26-word lead, pill line |
| 2 | `front-services` | the row's signature: inset photo beside an indexed service list + fixed-fee enquiry | **S-c** inset band `#EFF2F4` radius 10, margin 0 28px, padding 110px 80px. Label "Services" + H2 "Four things we do, each at a fixed fee." Grid 12: **inset photo P05** (consultant with a client team) at cols 1–5, 4:5, radius 10, sticky-free; cols 6–12 a 2×2 grid of white cards (radius 10, 1 px hairline, padding 32, gap 24): index "01" PT Serif 700 1rem accent + tick disc, H3 1.6875rem, 2-line text (≈30 words), "Fixed fee from €1,900" PT Sans 700 accent nowrap, 28 px arrow disc bottom-right. Under the grid, right-aligned: text link "All services and fees" + arrow disc. | 20 + 4×35 words |
| 3 | `front-intro` | who we are (narrative) | white, container 1280. Row 1 (R1 intro): **S-b** pair full container width — P06 **420×315** at the left (margin-left 50 px) and P07 **630×473** at the right (right edge flush), P07's top **75 px lower** than P06's, both radius 10. Row 2, 80 px below: cols 1–5 label "About" + H2 (intro size 54 px) "HR advice that reads like a plan, not a warning."; cols 7–12 two paragraphs (≈110 words), count tags row (S-d) "2014 founded · 7 advisers · 10 working days for a health check", accent button "About the practice" with arrow disc. < 782 px: photos stacked (P06 width 70% left, P07 width 85% right, offset 40 px), text below. | ≈140 words |
| 4 | `front-approach` | how we work | **T3** with **sp-parallax** (P08 blurred) and three white cards with vertical labels and 540 squares: 01 "Agreed before we start" P09; 02 "One adviser who knows your file" P11; 03 "A written handover you can reuse" P10 | 3 × 60 words |
| 5 | `front-fees` | fixed fees (price list, section 7) | white; label "Fees" + H2 "Fixed fees, published." left, short note right ("All fees exclude VAT at 23%. Scope agreed in writing before work starts."). Price list alignwide 1280 (component in section 7), 7 rows. Below: pill-style link "Book the free 30-minute scoping call" (static slate pill, same shape as T2). No photo. | 30 words + list |
| 6 | `front-people` | the advisers | full-bleed slate `#647582` band, padding 110px 0; left col (4/12): label white 80% "Team", H2 white "The people who answer your email.", 2-line paragraph white 85%, outline-white button "Meet the team". Right (8/12): three cards 360 wide (white 8% fill, radius 10, padding 20): **circle portraits** P12 Amara Okoye, P13 Daniel Byrne, P14 Lucía Ferrer, 320 px circle, then role (0.8125rem white 80%) and name PT Serif 700 1.375rem white, arrow disc white. Static row (no slider needed); 2 outline circle arrows 56 px are decorative links to /team. | 45 words |
| 7 | `front-stories` | client stories (3 posts) | white; label "Client stories" + H2; 3 cards (R1 service card: white, 1 px hairline, radius 10, image top **2:1, 415×208, radius 4**) P16, P17, P18 (story posts 1–3), category chip, title PT Serif 1.375rem, 2-line excerpt, arrow disc. Query Loop of category "Client stories", 3 posts. | 3 × 30 words |
| 8 | `front-close` | FAQ + contact close | inset band `#EFF2F4` (S-c). Left: label "FAQ" + H2 "Questions we hear first." + 4 `details` items (white, radius 10, hairline): fees/VAT, how fast, remote clients outside Dublin, what the free call covers (≈4×35 words). Then on the same band a 2-column close (R1 contact block): left big accent PT Serif 700 2.75rem "Tell us what is going on. We reply within one working day."; right white card radius 10: phone (PT Sans 700 1.75rem), hours, email, accent CTA "Enquire" with mail disc. | ≈190 words |

Footer follows (section 3). Home ≈ 520 words en; narrative paragraphs in blocks 3 (×2), 4 (×3), 8 (FAQ answers). CJK home ≥ 500 characters.

### Home photo positions (17 distinct, none repeated on the page; marquee clones are `aria-hidden` copies of the same 4 and do not count)
P03 · P01 · P02 · P04 (hero) · P05 (services) · P06 · P07 (intro) · P08 (approach background) · P09 · P11 · P10 (approach squares) · P12 · P13 · P14 (people) · P16 · P17 · P18 (stories). P15 is not on home.

### Comparison with recent homes (must differ)
| # | Hoshi | Mochi | Denki | Shikaku | **Ito** |
|---|---|---|---|---|---|
| 1 | headline over 2 framed photos | 3 equal photo columns | top-bottom hero + figure band | paper-strip hero + photo on fold | **one-line H1 + tick tags; full-bleed rounded photo loop with circle card + floating slate pill** |
| 2 | letters list | food finder | intro | course marquee (text) | **inset pale band: inset photo + 2×2 indexed service cards** |
| 3 | prologue | concept mosaic | ruled product ledger rows | about panel | **intro + staggered photo pair + count tags** |
| 4 | dark partners band, sticky chapter card | rounded ink band box | metrics ledger (sticky photo) | numbered course ladder | **white cards with vertical labels over blurred parallax photo** |
| 5 | parallax strip | subscribe list | staggered plant photos | rotated photo fan | **published fee list** |
| 6 | client stories + framed portrait | interlude cover | cases | plan table | **slate band, circle portraits** |
| 7 | meeting panel | nutrition desk | kits price band | faculty | **story cards (2:1 photo tops)** |
| 8 | footer | stories / visit | close | stories / support band | **FAQ + contact close on pale band** |
Why not alike: no dark band, no sticky card, no ledger/ruled rows (services are cards on a pale band), no fan, no text marquee (ours is a photo loop), no finder, no mosaic. Ito's shapes — 10 px rounded tall cards with a circle crop, the slate floating pill, vertical green labels on white cards over a blurred photo, tick-disc tags — appear in none of the four. Denki also used top-bottom halves, but with a framed window photo and a figure band; Ito's lower half is a moving full-bleed card row with no figures.

---

## 5. Inner pages (11; each = page head (T1 + T2) → body → contact close line)

Every page head as in section 1 "Continuation". Bodies use white ground, container 1280, section padding 110 px, inset pale bands for secondary content. No sidebar.

1. **Services** (`page-services`, service-index): head; intro paragraph (80 words); **service index**: 4 large rows-as-cards (2×2, same card as home block 2 but with 5 bullet lines each and the fee) linking to the 4 service pages; T3 "How fixed fees work" (scope call → written fixed quote within 2 working days → work with weekly check-ins → written handover + 30 days of follow-up questions) as 3 cards (call+quote, work, handover); close line.
2. **Payroll compliance** (`page-payroll`): head; what we review (holiday pay, working-time records, payslip content, statutory sick pay, PRSI/USC set-up checks with your payroll provider — advisory, we do not run payroll); deliverable; fee rows "Payroll compliance review €1,900" and "HR health check €1,450" (price list component); T3 2 cards; story link (story 2).
3. **Policies & handbooks** (`page-policies`): head; list of the 12 policies in the handbook package as a 2-column ticked list; contract set; fee rows €2,400 and €980; 2-column text "How we write" with P16 at 3:2 radius 10 on the right; story link (story 1).
4. **Workplace investigations** (`page-investigations`): head; when an independent investigation helps; T3 3 cards Scope / Interviews / Findings; what the report contains; timing "report typically within 18 working days of the last interview" (typical, not guaranteed); fee row "from €3,800"; story 3.
5. **Retainer support** (`page-retainer`): head; T3 2 cards = two plans (Essentials €890/month, up to 6 h; Growth €1,850/month, up to 14 h + quarterly review); what counts as an hour; reply within 1 working day; 3-month minimum then monthly; table of included items (stacks on mobile).
6. **Fees** (`page-fees`): head; full price list (7 items, section 7) with anchors (`#health-check`, …); "What every fixed fee includes"; VAT note; fees FAQ (5 `details`).
7. **Team** (`page-team`): head; slate band with 4 circle portraits (P15 Erika Ito, P12 Amara Okoye, P13 Daniel Byrne, P14 Lucía Ferrer) 2×2 desktop, each with role + 50-word bio; below on white, 3 advisers without photos as hairline-ruled text rows (name PT Serif 1.375rem, role, 30-word bio): Tomasz Wójcik, Sophie Laurent, Kwame Mensah. (No four-person square grid of thumbnails; the portraits are large circles in rounded cards as on home.)
8. **About** (`page-about`): head; story (founded 2014 in Dublin by Erika Ito after twelve years in employment law; why fixed fees; who we work with) in a 7/12 column; S-b staggered pair P07 / P06 is not repeated — use P02 (420×315) and P16 (630×473) dropped 75 px; count tags with `sp-count` (2014, 7, 4 service areas); T3 "What we hold to" 3 cards.
9. **Client stories** (`home.html` / `archive.html` index of posts, `single.html`): head; 3 story posts (+1 note post) as cards (2:1 tops radius 4); single: label = category, H1 PT Serif 3.375rem, featured image as the head's card B (radius 10, 497 tall), text column 720 px, "The situation / What we did / Where it left them" H2s, pill at the end.
10. **Contact** (`page-contact`): head; two columns: left the address, phone, email, hours, "How it starts" as 4 short numbered paragraphs (not a step grid: plain paragraphs with the accent index number inline); right white card on pale band with CTA "Email us" (mailto) and phone; a static map is not used (no third-party embeds).
11. **404 / search**: small head (no photo row), tick tags as links to the 4 services.

---

## 6. Responsive rules (hard; auto-gates must pass)
- `html, body { overflow-x: clip }`; full-bleed rows use `width:100vw` only inside an `overflow:clip` wrapper — no horizontal scroll at 390 and 1280.
- **390 px first screen:** no vertical (`writing-mode`) text, no absolutely positioned labels/pill over text; tags in a 2×2 grid; pill static; H1 ≤ 3 lines.
- **T3 < 782 px:** vertical label horizontal, single column, photo first.
- **Service cards / people / story cards:** 2×2 → 1 column < 782 px; people cards 1 column with 240 px circles.
- **Price list (section 7) ≥ 782 px:** alignwide **full 1280 container width** (never inside a narrow column or a 2-column layout), price column `white-space:nowrap; text-align:right`, no `overflow:hidden` on the list; fully visible at 800 and 1280. < 782 px: rows stack.
- **Every table** (retainer inclusions, policies list if tabular): ≥ 782 px `width:100%`, numeric/price cells nowrap; < 782 px stacked blocks with `td::before{content:attr(data-label)}` labels; no horizontal scroll container.
- Header < 960: overlay menu; languages inside the overlay.
- Count tags wrap to 2 columns < 480.

## 7. Price list component (home block 5, Fees page, service pages subsets)
- `div.ih-fees` alignwide (1280), white; each row `border-top:1px solid rgba(0,0,0,.15)`, padding 24px 0, grid `4rem 1fr auto`, column gap 32: index "01" PT Serif 700 1rem accent; name PT Sans 700 1.125rem + one-line scope 0.9375rem muted; price PT Sans 700 1.25rem accent, tabular-nums, `white-space:nowrap`, right-aligned, with "fixed" / "per month" / "from" 0.8125rem muted on the same line before it. Last row bottom hairline. Right of each row a 28 px arrow disc linking to the anchor/page (inside the price cell, after the price, gap 16). No sp-reveal on the list.
- < 782 px: index + name on one line, scope below, price on its own line left-aligned bold.

## 8. Fixed facts (single source; identical on home, inner pages, posts and all five languages)
- **Ito HR Partners**, founded **2014**, Dublin, Ireland. Address (sample): 24 Harcourt Lane, Dublin 2, D02 X940 (fictional; localise only the format). Phone +353 1 555 0142 (sample). Email hello@itohr.example. Hours **Mon–Fri 9:00–17:30** (Irish time); free scoping calls also by video.
- Clients: companies of **15 to 400 people**; work under Irish and EU employment law; remote clients across the EU (advice limited to Irish law; other jurisdictions with partner firms — no names).
- **Fees (EUR, excl. VAT 23%; same numbers in every language, no conversion):**
  | # | Item | Fee |
  |---|---|---|
  | 01 | Scoping call (30 minutes, video or office) | €0 |
  | 02 | HR health check (contracts, policies, payroll set-up; written report in 10 working days) | €1,450 fixed |
  | 03 | Contract set (templates for 3 role types) | €980 fixed |
  | 04 | Payroll compliance review (one payroll cycle, up to 150 staff) | €1,900 fixed |
  | 05 | Employee handbook & policies (up to 12 policies) | €2,400 fixed |
  | 06 | Workplace investigation (one complaint, up to 6 interviews, findings report) | from €3,800 |
  | 07 | Retainer Essentials (up to 6 h/month, reply within 1 working day) | €890 / month |
  | 08 | Retainer Growth (up to 14 h/month + quarterly review) | €1,850 / month |
  (8 rows; home block 5 shows rows 02–08 = 7 rows plus the scoping call in the pill below the list.) Retainer minimum term 3 months, then monthly.
- **People (7):** Erika Ito (founder, employment solicitor), Daniel Byrne (senior employment lawyer, investigations lead), Amara Okoye (HR policy lead), Lucía Ferrer (payroll compliance specialist), Tomasz Wójcik (workplace investigator), Sophie Laurent (client manager, retainers), Kwame Mensah (HR adviser, onboarding and contracts). Portraits: Erika P15, Amara P12, Daniel P13, Lucía P14.
- **Client stories (3, fictional, anonymised, no outcome guarantees):** 1 "A handbook before the funding round" — 60-person software company in Cork, handbook and contracts rebuilt in 5 weeks (P16). 2 "Holiday pay across four sites" — 140-person hospitality group, payroll review, corrections documented and paid (P17). 3 "An independent look at a grievance" — 35-person design studio, investigation report 18 working days after the last interview (P18). Plus one note post "What a fixed fee covers" (featured P04).
- **Process (Contact, Services, How it starts):** 1 free 30-minute scoping call → 2 written fixed quote within 2 working days → 3 the work, with a weekly check-in → 4 written handover, plus 30 days of follow-up questions included.
- Response: reply to enquiries within **1 working day**.
- zh-TW / ja keep EUR with the same digits (€1,450); fr/de use local formats (1 450 € / 1.450 €) with the same amounts.

## 9. Photos (18, Grok, one at a time; Read every image; regenerate any with text, logos, broken faces/hands)

STYLE (exact string appended to every prompt):
`High-key bright documentary photograph, natural window daylight, soft shadows, modern international office with light oak, white walls and pale grey-green details, people in navy, white, grey and muted sage clothing, diverse adults aged 25 to 60, candid unposed working moment, eye-level 35mm lens, gentle depth of field, low saturation, clean uncluttered background, no text, no logos, no brand marks, papers and screens show only soft blurred shapes, no Japanese elements.`

Each ≤ 300 KB, ≤ 2000 px, no cut-outs (0 transparent PNGs), readme line per image (AI-generated, CC0).

| ID | Subject / composition (ratio) | Used on (once per page) | Home |
|---|---|---|---|
| P01 | Erika Ito-like founder: woman in her forties, East Asian, shoulder-length dark hair, navy blazer, seated at an oak table mid-conversation, hands relaxed, head and shoulders centred with space above (1:1, for circle crop) | Home hero circle; Services A; Retainer A; Contact A; About T3 | ✔ |
| P02 | small team meeting: a consultant and three client staff around a table with laptops and loose papers (0.97 tall) | Home hero; Services B; About pair; Team B | ✔ |
| P03 | bright meeting room / reception, glass wall, oak door, plants, no people (0.97 tall) | Home hero; About B; Contact B; Stories index B | ✔ |
| P04 | desk detail: hands annotating a printed page with a pen beside a closed laptop and two plain binders (0.97 tall) | Home hero; Fees B; Services T3; Payroll T3; About T3; note post | ✔ |
| P05 | **row signature**: consultant standing with a client team of three at a high table, pointing to a printed chart with blurred shapes (4:5) | Home services inset; Investigations T3; Retainer T3 | ✔ |
| P06 | workshop: adviser at a whiteboard with blank sticky notes, five managers seated (4:3) | Home intro small; Policies B; Services T3; About T3 | ✔ |
| P07 | two people talking by a large window with coffee cups (4:3) | Home intro large; Retainer B; Services T3; Investigations T3 | ✔ |
| P08 | wide bright open-plan office, few distant people, lots of window light (16:9, 2000 px) — parallax background, blurred by CSS | Home approach bg; all T3 backgrounds | ✔ |
| P09 | payroll review: hands on a laptop with a blurred spreadsheet, calculator, mug (1:1) | Home approach 01; Payroll B | ✔ |
| P10 | quiet interview room: two people across a small table, one taking notes, calm (1:1) | Home approach 03; Investigations B | ✔ |
| P11 | adviser on a video call at a laptop in a bright room, smiling slightly (1:1) | Home approach 02; Retainer T3 | ✔ |
| P12 | portrait Amara Okoye: Black woman, 30s, light grey blazer, waist-up, plain pale wall (1:1) | Home people; Team; Policies A | ✔ |
| P13 | portrait Daniel Byrne: white man, 50s, grey hair, navy jumper over shirt (1:1) | Home people; Team; Investigations A; Stories A | ✔ |
| P14 | portrait Lucía Ferrer: Latina woman, 30s, white shirt (1:1) | Home people; Team; Payroll A | ✔ |
| P15 | portrait Erika Ito (same look as P01), waist-up, plain pale wall (1:1) | Team; Fees A; About A | — |
| P16 | onboarding: manager welcoming a new employee at a desk, handing over a laptop (3:2) | Home story 1; Policies body; About pair | ✔ |
| P17 | hospitality team briefing in a bright restaurant before opening, plain aprons (3:2) | Home story 2; Payroll T3 | ✔ |
| P18 | design studio: small team at a large table with paper and fabric samples (3:2) | Home story 3; Investigations T3 | ✔ |

Binding per-page check (each image at most once per page): Home 17 (P01–P14, P16–P18). Services P01 P02 · T3 P08 P06 P07 P04. Payroll P14 P09 · T3 P08 P17 P04. Policies P12 P06 · body P16. Investigations P13 P10 · T3 P08 P18 P07 P05. Retainer P01 P07 · T3 P08 P11 P05. Fees P15 P04. About P15 P03 · pair P02 P16 · T3 P08 P06 P01 P04. Team P02 · portraits P15 P12 P13 P14. Stories index P13 P03 · cards P16 P17 P18 P04. Single story: its featured image only (+ P13 not repeated). Contact P01 P03.

## 10. Scroll motion (sp-scroll; copy `pipeline/assets/sp-scroll/` unchanged; theme-scoped variable overrides only)

Three effects on home (≤ 3 types): reveal--up (+stagger), marquee, parallax. Hero gets no reveal; price list, forms, FAQ details and legal text get none.

| Effect | Where | R1 source (trigger / time / easing) | Ours |
|---|---|---|---|
| `sp-reveal sp-reveal--up` + parent `sp-stagger` | section label + H2 groups of blocks 2–8; the 4 service cards (parent `sp-stagger`); intro text column; each T3 card; the 3 people cards (`sp-stagger`); story cards (`sp-stagger`); inner page bodies (not heads) | R1 `fadein-up`: IO rootMargin `0 0 -100px 0`, threshold 0, once; opacity 0→1 + translateY 30→0, **0.6 s `ease`**, delay 0.1–0.3 s (`tok(g)`) | `:root{--sp-dur:.6s; --sp-ease:ease; --sp-dist:30px}` (30 px = R1, at the ≤ 30 px cap). Stagger built-in 0.12 s steps (R1 0.1–0.3 s). |
| `sp-marquee` | hero loop row `div.ih-loop.sp-marquee` > `div.ih-loop__set` + an `aria-hidden="true"` copy | R1 Splide AutoScroll: loads moving, loop, linear, gap 40, **≈63 px/s**, no pause, mobile half speed (`tok(g)`) | one set = 2080 px ⇒ `.ih-loop.sp-marquee > *{animation-duration:33s}` (2080/63); < 782 px set = 4×270 = 1080 px at ~32 px/s ⇒ 34s. Children get no sp-reveal. Static/reduced-motion: row stands still (base flex layout). |
| `sp-parallax` | see below | R1 Features section `background-attachment:fixed` blurred photo | CSS scroll-driven built-in, JS IO fallback |
| `sp-count` (About page only, not home) | About count tags 2014 / 7 / 4 | R1 count tags are static; stage-a suggests count | built-in 1.2 s easeOutCubic |

### Parallax (required)
1. **Home block 4 `front-approach`** (primary): outer `section.ih-approach.sp-parallax` alignfull, `style="--sp-par:12%"`; `@media (max-width:781px){.ih-approach{--sp-par:8%}}` (kept on mobile). Moving layer `img.sp-parallax__layer` = P08 (absolute inset 0, cover, CSS blur 6px + brightness .78; built-in scale 1.18 covers the travel and the blur edge). Foreground (white label/H2 and the three white cards) is outside the layer and does not move. Reference motion: R1's fixed blurred background under the scrolling white feature cards — ours gives the same "cards slide over a slower photo" effect with transform instead of `background-attachment:fixed`.
2. **Inner T3 sections** (Services, Payroll, Investigations, Retainer, About): same markup, `--sp-par:10%`, mobile 6%.
- Verified by `check-parallax.mjs` (1280×900 and 390×844, displacement ≥ 6 px; ≤ 1 px under reduced motion). `?sp-static`, editor and no-JS: no movement, layer scale 1.
- Hover (CSS only, not sp-*): card images `scale:1.04` over 0.6 s ease inside `overflow:clip` (R1 `u-zoom`); text links underline slides in from left 0.6 s ease (R1 `u-anim-underline`); arrow discs fill on hover. Hover transitions carry `transition-delay:0s`.

## 11. Similarity table (target ≈ 80% of R1)

| Dimension | R1 value (token) | Ito value |
|---|---|---|
| Ground / band / slate / ink | `#FFFFFF` / `#F6EFE0` (+`#EFF2F4`) / `#647582` / `#2A2C33` (a) | `#FFFFFF` / `#EFF2F4` / `#647582` / `#2A2C33` |
| Accent role and share | `#DC5310`, 0.7% first screen, CTA/ticks/arrows/labels (a) | `#3F5E4A`, < 1%, same roles |
| Hairline | 1 px `rgba(0,0,0,.15)` (a, d) | same |
| First-screen saturation | 3.44% (a) | ≤ 6% target, 15% cap |
| Hero headline | ≈80 px / 700, one line, left (b) | 80 px PT Serif 700, one line, left |
| Hero tags | 3 × 22 px / 700, tick discs, dotted separators (b, f) | 4 × 22 px PT Sans 700, tick discs, dotted separators |
| H2 / intro H2 / feature H2 / h3 | 43.92 / 53.44 / 35.28 / 26.64 px, lh 1.4 (b) | 44 / 54 / 35 / 27 px, lh 1.4 |
| Body | 16 px / 400 / lh 1.4 (b) | 16 px / 400 / lh 1.75 (Latin readability) |
| Nav / CTA | 15 px / 700 (b) | 15 px / 700 |
| Header | 123 px, 1 px rule inset, phone block + CTA with mail disc (c, f) | 96 px, same structure |
| Section padding | ≈110 px; reason header 250 px (c) | 110 px; approach header 250 px |
| Container / gaps | 1304–1360 / card gap 43 (c) | 1280 (hero full width, side 40) / 40 |
| Radius | 10 photos/cards, 4 buttons/tags, circle portraits (d) | 10 / 4 / circle |
| Shadow | none (d) | none |
| Hero row | full bleed 480×497, gap 40, one circle crop, auto-scroll ≈63 px/s (e, g) | identical numbers, 33 s per 2080 px set |
| Topics pill | slate 760×62 r10, overlapping hero bottom-right, white arrow disc (d) | slate 760×62 r10, right 30 / bottom 48, white arrow disc |
| Intro pair | 420×315 + 630×473 dropped 75 px, r10 (e) | identical |
| Service cards | 415×208 2:1 top image r4, hairline white card (e) | story cards identical; service cards text-only with tick + index |
| Feature cards | white r10 over fixed blurred photo, vertical "Feature 01" label, 540×540 photo (e, f) | identical geometry, "Approach 01", sp-parallax 12% |
| Portraits | 398×411 circle on slate band, white title (e) | 320 px circles in 360 cards on slate band, white title |
| Arrow discs | 28 px accent, white arrow; 56 px outline slider arrows (f) | identical |
| Footer | warm band, circular emblem, 5 link columns with accent bullets (f) | pale band, circular emblem (our mark), 4 columns with accent bullets |
| Reveal | fade-up 30 px, 0.6 s ease, delay 0.1–0.3 s (g) | sp-reveal--up 30 px, 0.6 s ease, stagger 0.12 s |
| Marquee | linear loop, no pause (g) | sp-marquee linear, no pause |

Deliberate differences: serif display (row font) instead of R1's all-sans; body leading 1.75; four service tags instead of three; accent green and cool band (section 2).

## 12. Home acceptance checklist (stage-1 review / stage-2 verdict)
1. First screen = top-bottom halves: white top with one-line 80 px PT Serif H1 + four tick-disc tags with dotted separators; full-bleed row of 480×497 r10 cards with one true circle crop; slate 760×62 pill overlapping the row bottom-right with a white arrow disc. No table/form/search/centred giant text. `check-first-screen.py` ≤ 15% (target ≤ 6%).
2. 390×844: no vertical text, no absolute labels over text, tags 2×2, pill static under the row, no horizontal overflow.
3. Block order equals section 4 (8 blocks + footer); differs from Hoshi/Mochi/Denki/Shikaku per the table.
4. T1, T2, T3 all visible on home; T1+T2 on every inner head; T3 on Services, Payroll, Investigations, Retainer, About.
5. Colours exactly section 2; accent only on small areas; no cream ground; no dark footer.
6. Fonts: PT Serif/PT Sans (+ Noto Serif TC/JP subsets) via theme.json fontFace; editor = front (`check-editor-fonts.mjs` passes en and zh-TW); max preset 5rem.
7. 17 photo positions on home, none repeated (clones aside), all from the STYLE; no text/logos/broken hands; no cut-outs.
8. Price list alignwide 1280, prices nowrap right-aligned and fully visible at 800 and 1280; stacked < 782; no reveal on it. Fees identical to section 8 on home, Fees, service pages and all five languages.
9. Motion: hero no reveal; marquee runs at ≈63 px/s and stands still in `?sp-static`; parallax on block 4 passes `check-parallax.mjs` desktop and mobile; ≥ 3 reveals hidden before entry and visible after; nothing transparent after scrolling to the end; reduced motion shows everything.
10. en home ≥ 250 words (≈520 planned) with ≥ 3 narrative paragraphs; facts (2014, Dublin, 7 people, fees, 1 working day) match section 8.
11. `auto-gates.mjs` pass (stage 1: home only, `1 1`).
