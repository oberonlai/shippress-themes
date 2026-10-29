# Shisei Clinic: design spec (stage 1, binding for implementation)

Slug `shisei-clinic`, chiropractic clinic for people who sit all week. Type **health** (business layout; WooCommerce declared compatible, not required). Design-plan row b18-1: archetype split-screen, hero photo-left-text-right, nav top-bar, real photography high-key, palette `#4A5962` (slate), fonts Figtree / Public Sans, font_direction **sans**, page_structure **narrative-problem-method-proof**.

Reference (only one): **Sakura no Megumi acupuncture & osteopathic clinic, https://sakurano-megumi.com/** (S5-Style, medical/beauty). Measurements: `brand/reference-tokens.md` (token ids **a–g** cited in [brackets] below). Screenshots: `brand/ref/sm-fold.png` (first screen), `sm-full.png` (whole page), `scroll-fade-before/mid/after.png` (motion). We borrow structure, shapes, motion, colour relationships and the key-visual concept. We do **not** copy their photos, video, watercolour blossoms, text, catch copy or logo.

Fixed brand facts (every page, all five languages; details in §7): **Shisei Clinic**, founded **2015**, Suite 204, 1180 Linden Row, Vancouver, BC V6E 2S2, Canada (fictional address), +1 604 555 0142, hello@shisei.example. Currency **CAD** in every language.

---

## 1. Signature techniques (three, obvious at a glance; never soften)

### T1. Tall arch photograph bleeding off one side, with a giant white Latin wordmark straddling its lower edge (sakurano-megumi first screen, `ref/sm-fold.png`)
- Reference: at 1440×900 a photo 700×809 (0.87:1) with `border-radius: 9999px 9999px 0 0` occupies the right half (x 700–1400, 49% of width), from just under the header (y 64) to the bottom of the fold [e]. A white caps wordmark "SOFTLY ALIGNED", Aboreto ~11vw (≈158 px), line-height 1, letter-spacing 0.04em, runs across the whole width at the bottom, its letters half over the photo, half over the pastel ground [b][f]. No frame, no shadow [d].
- Shisei (row says photo-left): **mirror** it. Arch photo **P01** at x 40–740 (width `48.6vw`, max 700 px), `aspect-ratio: 0.87` but height locked to `calc(100svh - 64px)` (min 640, max 836), `border-radius: 9999px 9999px 0 0`, `overflow: clip`, bottom edge flush with the bottom of the hero. Wordmark **"BACK AT EASE"** (our own words, posture pun, stays English in all locales, `aria-hidden="true"`; the real H1 is in the text half): Figtree **300**, uppercase, `font-size: var(--wp--preset--font-size--display)` = `clamp(4.25rem, 11vw, 9.875rem)`, line-height 1, letter-spacing 0.04em, colour `#FFFFFF`, `position:absolute; left: 32px; right: 32px; bottom: 28px; white-space: nowrap; z-index: 2`. "BACK AT" lands on the photo, "EASE" crosses the arch's right edge onto the ground. The fixed pill bar (T3) overlaps the wordmark's lower third at the centre, as in the reference.
- Contrast rule: the ground at the hero bottom must be the deeper gradient stops (§5 ground is `fixed` to the viewport, so 80–100% of viewport height = `#92A4B0`→`#798E9A`), and P01's lower third must be mid-grey (grey towel / slate top), so the white letters read on both halves. If white on ground reads under ~2:1, darken the last two stops by ≤5% lightness, never add a text shadow or outline.
- Mobile (390×844): arch `margin: 0 20px`, width 350, height 400 (radius 175 175 0 0). Wordmark **in normal flow** directly after the arch with `margin-top: -0.9em`, `font-size: 10vw` (≈39 px), one line, fully over the photo's bottom band; nothing absolutely positioned over text.
- Must not be diluted: arch must be a true semicircle top (9999 px), ≥ 48% of desktop width, touching the hero bottom; wordmark ≥ 9rem at 1440, pure white, light weight (300), one line, crossing photo and ground.

### T2. Oval sub-photo with two blurred ghost ovals stepping away (sakurano-megumi first screen top-left)
- Reference: oval photo 208×260 (0.8:1, radius 9999) at x 70 y 126 (hands at work), two blurred oval "echoes" 130×196 and 130×163 offset right and down, soft-focus [e].
- Shisei: mirrored to the **top-right** of the text half: oval **P02** 208×260 at `right: 70px; top: 126px` (hands on trapezius). Ghost ovals are `div` elements with CSS background **P03** (blurred out-of-focus scene), `filter: blur(14px)`, opacity 0.85: ghost A 130×196 at `right: 250px; top: 300px`, ghost B 130×163 at `right: 170px; top: 430px` (stepping down-left, mirror of the reference). Ghosts are decorative (`aria-hidden`), not `<img>`.
- Mobile: oval 92×115 overlaps the arch's top-right shoulder (`position:absolute; right: 12px; top: 72px`, image only, no text near it); one ghost 60×88 below-left of it; second ghost hidden.
- Must not be diluted: 0.8:1 oval (not circle), 208 px wide at 1440, ghosts visibly blurred photographs (not flat colour blobs), stepping diagonally.

### T3. Fixed bottom pill bar + floating booking pill (sakurano-megumi, every page)
- Reference: fixed bottom-centre bar 560×58, radius 9999, accent fill, three items with 18 px line icons: hours / access / menu; the menu item is a darker inner pill. A white floating pill (h 50) bottom-right for contact [f].
- Shisei: template part `pill-bar` in every template. `position: fixed; bottom: 24px; left: 50%; transform: translateX(-50%); width: 560px; height: 58px; border-radius: 9999px; background: #4A5962;` items white Public Sans 500 0.875rem, letter-spacing 0.08em, each with a 18 px 1.5 px-stroke line icon (clock / pin / three lines): **Hours** → `/contact/#hours`, **Find us** → `/contact/#access`, **Menu** = `core/navigation` overlay trigger (overlayMenu "always") styled as an inner pill 180×50 `#3B474E` at the right end. Floating pill bottom-right: `right: 24px; bottom: 24px; height: 50px; padding: 0 22px; background: #FFFFFF; color: #4A5962; border-radius: 9999px`, 22 px slate circle icon + "Book a first visit" → `/contact/#book`. Hover 0.3 s ease [g].
- Mobile ≤781: bar `left: 12px; right: 12px; width: auto; transform: none; height: 52px; bottom: 12px`; floating pill hidden (the bar's Menu overlay contains "Book a first visit" as first item). `body { padding-bottom: 96px }` so the bar never covers the footer.
- Must not be diluted: fixed, pill-shaped, centred, filled main slate, three icon items, visible on the first screen and on every page.

### Supporting (not counted, also from the reference)
- Concept block: tall arch portrait (≈480 wide, 0.7:1) with a round photo overlapping its bottom-right corner beside a 560 px text column [e].
- Label rows: Latin caps word + 1 px hairline running to the right edge + small local label at the far right ("FEATURE ———— features of the clinic") [f].
- Full-bleed treatment panels with white title at right and "View details" pill bottom-right [e].
- Bottom-to-top gradient mask fade on every block below the fold [g] (§8).

### Continuation to inner pages (all 10 pages)
Every inner page opens with the **arch page head** = T1 + T2 in small: left arch photo 5/12 (`aspect-ratio: 0.87`, max height 560, radius 9999 9999 0 0, flush to the left edge of the viewport like the hero, with `sp-parallax --sp-par:6%`); white page wordmark (Figtree 300 caps `clamp(3.5rem, 8vw, 7.5rem)`, ls 0.04em, `aria-hidden`) crossing the arch's lower edge; right column: oval + 2 ghosts (T2, at 160×200 / 100×150 / 100×125) above the localized H1 (`x-large` 2rem lh 1.75) and a 40–60-word intro. T3 pill bar on every template.

| Page | T1 arch head (photo + wordmark) | T2 oval + ghosts (oval photo / ghost bg) | Page-specific echo |
|---|---|---|---|
| About | P04 · ABOUT | P17 / P03 | concept-style round overlap (P13 round, 190 px) beside "Since 2015" |
| Conditions | P06 · CONDITIONS | P08 / P03 | 3 oval rows (P07, P14) with vertical caps labels |
| Treatments | P09 · TREATMENTS | P02 / P03 | two full-bleed panels P10 + P16 with sp-parallax |
| First visit | P11 · FIRST VISIT | P14 / P03 | 4 stages + tall arch photo with faded vertical caps (desktop) |
| Fees | P13 · FEES | P05 / P03 | full-width price list |
| Clinicians | P12 · CLINICIANS | P17 / P03 | 7 people as arch portrait + name rows |
| Stories | P16 · STORIES | P07 / P03 | 3 stories with round photos |
| Notes (blog index, archive) | P17 · NOTES | P05 / P03 | post cards with 0.8:1 oval thumbnails |
| Questions (FAQ) | P14 · QUESTIONS | P15 / P03 | details/summary list |
| Contact & access | P01 · CONTACT | P02 / P03 | hours card with P13 (same as home block 9) |

(Within one page an image appears once; full per-page list in §9.)

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
`ref/sm-fold.png`. A pale blush field with no visible section edges; at right a huge arch-topped photograph of a client lying back with eyes closed while a practitioner places fine needles at the hairline; at top-left a small oval photo of hands at work on a client's back, followed by two blurred oval echoes; a two-line, widely spaced mincho catch copy in the left half ("a time in which body and mind loosen"); across the bottom the white caps wordmark "SOFTLY ALIGNED", half on the photo, half on the field; a fixed pill bar and a white contact pill floating over it. **Story**: treatment as a quiet, soft hour in which the body unclenches. **Signature motion**: on load, layers appear in sequence with a bottom-to-top gradient mask fade — photo/video at 0 s, catch copy at +0.8 s, wordmark at +1.5 s, each 1.2 s ease-out [g]; the whole ground gradient drifts slowly (10 s linear alternate) [a][g].

### (2) Our transfer scene (chiropractic for desk workers; same composition, same motion idea, same image type = real photography)
High-key photograph in an arch on the **left**: a plain white treatment table by a window; a patient in a grey knit top sits upright on it with eyes closed, the clinician stands just behind, one hand steadying the patient's shoulder, the other resting at the base of the neck — the moment before a small, exact correction. Top-right, the oval close-up of the clinician's hands on the shoulder blade, with two blurred echoes stepping down. In the right half a two-line H1 ("A small, exact correction / after a week at a desk."), one sentence and a text link. Across the bottom the white wordmark "BACK AT EASE", half on the photo, half on the slate field. **Story**: shisei (posture) — the week of sitting is undone in one quiet, precise hour. **Motion**: same sequence and same mask fade (photo 0 s, oval 0.4 s, H1 0.8 s, wordmark 1.5 s; 1.2 s ease-out each); the slate field drifts slowly; the arch photo moves with `sp-parallax` while scrolling.

### (3) KV checklist (all six visible on the home first screen at 1440×900; mobile 390×844 notes in §6)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Right arch photo: client lying back, practitioner's hands at the head | Left arch photo: clinician steadying a seated desk worker's shoulder and neck on a white table | x 40–740, header bottom → hero bottom (mobile: full width −40 px, 400 tall, top) | load mask fade 0 s, 1.2 s ease-out; scroll `sp-parallax --sp-par:8%` (mobile 5%) | **P01** |
| 2 | White caps wordmark "SOFTLY ALIGNED" straddling arch bottom | White caps wordmark "BACK AT EASE", Figtree 300, `clamp(4.25rem,11vw,9.875rem)` crossing photo + ground | bottom of hero, left/right 32 px, bottom 28 px (mobile: in flow over arch bottom) | mask fade +1.5 s | — (type) |
| 3 | Oval sub-photo of hands at work + 2 blurred ghost ovals | Oval 208×260 of hands on the shoulder blade + 2 blurred ghosts stepping down-left | top-right: right 70 / top 126; ghosts right 250 top 300, right 170 top 430 (mobile: 92×115 on arch shoulder) | mask fade +0.4 s; ghosts static | **P02** (oval), **P03** (ghost bg) |
| 4 | Two-line spaced mincho catch copy | Two-line H1 Figtree 400 2.25rem lh 1.75 ls 0.06em + one sentence + text link with 10 px circle arrow | right half, x 820–1320, top of H1 at ≈ 54% height (mobile: under wordmark) | mask fade +0.8 s | — |
| 5 | Fixed bottom pill bar (hours / access / menu) + white contact pill | Slate pill bar Hours / Find us / Menu + white "Book a first visit" pill | fixed bottom-centre 560×58; pill bottom-right | static; hover 0.3 s | — |
| 6 | Pastel hue gradient field drifting | Cool slate gradient field drifting (4 stops, §5) | page ground, fixed | 10 s linear alternate (@property); still under reduced-motion / `?sp-static` | — |

Hero motion implementation (theme CSS, **not** sp-reveal; hero has zero `.sp-reveal`): `@keyframes ss-kv-in { from { opacity:0; mask-position: 0 100%; } to { opacity:1; mask-position: 0 0; } }` with `mask-image: linear-gradient(to bottom,#fff,#fff 33%,transparent 66%); mask-size: 100% 300%` (same values as `sp-reveal--mask`), `animation: ss-kv-in 1.2s ease-out var(--ss-d) both`, `--ss-d` = 0s / .4s / .8s / 1.5s. All of it inside `@media (prefers-reduced-motion: no-preference)` and selectors starting with `html.sp-js:not(.sp-no-motion)`. The mask animation goes on the outer `.ss-kv__photo` wrapper; `sp-parallax` goes on the inner figure so they do not fight.

---

## 3. Home page

### Header (all pages; reference header [f])
In flow, transparent over the gradient, height 64 (mobile 60), container `calc(100% - 80px)`. Left: logo text "Shisei Clinic" Figtree 500 1.375rem `#4A5962` with a second line "CHIROPRACTIC · VANCOUVER" Figtree 400 0.625rem ls 0.3em (echo of the reference's spaced romaji logo line). Then nav (Public Sans 500 0.875rem `#434C51`, gap 32): First visit · Treatments · Fees · Questions. Right end: language switcher as a white pill (h 40, radius 9999, slate text, "EN ▾"), in the spot of the reference's branch badge. One menu only; ≤959 px the nav collapses into the pill bar's Menu overlay (header shows logo + language pill only).

### First screen composition (1440×900)
- Ground: §5 gradient, no white veil in the hero.
- Left: T1 arch P01 (x 40–740, y 64–900). Right half (x 760–1400): T2 oval P02 + ghosts at top-right; H1 at x 820, top ≈ 486, max-width 520: "A small, exact correction / after a week at a desk." (Figtree 400, `2.25rem`, lh 1.75, ls 0.06em, `#4A5962`); under it (gap 20) one sentence Public Sans 1rem lh 1.75 `#434C51`: "Chiropractic care for people who sit all week, in a quiet room in Vancouver." and a text link "How a first visit runs" + 10 px circle arrow `#B8615E` → /first-visit/. H1 bottom must stay ≤ 650 so it never touches the wordmark.
- Bottom: T1 wordmark across; T3 pill bar + floating pill.
- Forbidden on first screen: table, form, search box, big centred heading, any saturated block. Saturated share target ≤ 5% (hard cap 15%).

### Block order
| # | Pattern | Purpose (page_structure) | Layout and photo position | Copy |
|---|---|---|---|---|
| 1 | `front-kv` | key visual | §2 / first screen. `sp-parallax` on the arch figure | H1 + 1 sentence + link (≈25 words) |
| 2 | `front-concept` | **narrative**: why a clinic for sitters | white veil 0.6 section, padding-top 160, padding-bottom 240 [c]; container 1280; left: arch photo **P04** 480 wide, `aspect-ratio: 0.7`, radius 9999 9999 0 0, starting at x 160; round photo **P05** 190×190 radius 9999 overlapping the arch's bottom-right corner (`right: -95px; bottom: -40px`, 4 px white ring); right text column 560 starting at x 760: H2 lead 2rem lh 1.75 ls 0.08em "Most of us sit for forty hours / before anyone asks how." then 2 paragraphs | 2 × 65 words |
| 3 | `front-concerns` | **problem**: what people arrive with | label row "CONCERNS" (Figtree 300 2.5rem caps ls 0.04em) + 1 px hairline `rgba(74,89,98,.2)` to the right edge + small label right "What people arrive with" 0.8125rem; 3 columns gap 40: oval photos 280×350 (0.8:1, radius 9999) **P06** neck & shoulders, **P07** lower back, **P08** headaches & jaw; at each oval's right a vertical caps label (`writing-mode: vertical-rl`, Figtree 400 0.6875rem ls 0.3em, `#5B6C76`, ≥960 px only); under it title Figtree 500 1.5rem lh 1.5 two lines + 55-word text Public Sans 0.9375rem lh 1.75 | 3 × 55 words |
| 4 | `front-care` | **method** (what we do) | two full-bleed panels, each `min-height: 800px` (mobile 560), Cover with `sp-parallax --sp-par:10%` (mobile 6%): panel A **P09** "Adjustment", panel B **P10** "Movement plan". Overlay: whole image `rgba(43,52,58,.28)` + bottom-left `linear-gradient(to top, rgba(43,52,58,.72), rgba(43,52,58,0) 55%)`. Title top-right (right 8%, top 14%) Figtree 300 `xx-large` 4rem white, with caps sub-label 0.75rem ls 0.3em above it; body bottom-left (left 8%, bottom 80, max 520) white 0.9375rem lh 1.85; outline white pill "View details" 168×44 bottom-right → /treatments/#adjustment, #movement | 2 × 70 words |
| 5 | `front-first-visit` | **method** (how a first visit runs) | no veil; left text column x 160–700: H2 lead 2rem "Not sure where to start? / Start with one hour."; then 4 stages as a single-column list with 1 px hairlines (number Figtree 300 1.5rem `#5B6C76`, title 1.125rem/500, one sentence, minutes right-aligned nowrap): 01 Talk 15 min · 02 Look 15 min · 03 First adjustment 20 min · 04 Plan 10 min; slate pill button "Book a first visit" (h 48, radius 9999, `#4A5962` white text). Right: **P11** flush to the right viewport edge, width 45vw, `aspect-ratio: 0.75`, radius 9999 9999 0 0, faded vertical caps "FIRST VISIT" Figtree 300 9rem white opacity 0.5 `writing-mode: vertical-rl` at the photo's left edge, ≥1024 px only, `aria-hidden` | 4 × 20 words + 30 |
| 6 | `front-stories` | **proof** (stories) | white veil 0.6; label row "STORIES" + hairline + "Three ordinary weeks"; 3 columns, each with a 1 px top hairline, quote Public Sans 1.125rem lh 1.85 `#434C51`, name / age / work 0.8125rem caps ls 0.1em, "Read the story" link with circle arrow. Text only (no photos) | 3 × 45 words |
| 7 | `front-clinicians` | **proof** (who treats you) | left arch portrait **P12** 420 wide, 0.8:1, radius 9999 9999 0 0 at x 160; right column 600: H2 lead "Three chiropractors, / one movement coach, one massage therapist." + 50 words + 7 name rows in 2 columns (name 1rem/500 `#4A5962`, role 0.8125rem), hairline between rows; pill link → /clinicians/ | 50 words + names |
| 8 | `front-fees` | proof / decision | label row "FEES" + hairline + "Prices in CAD"; price list **full container width** (1280; §6), 6 rows (§7); under it a row: left "All fees and plans" text link; right FAQ link pair in the reference's FEES/FAQ style — round photo **P15** 120×120 + "Questions people ask before a first visit" → /questions/ | list + 25 words |
| 9 | `front-visit` | visit | container 1280, radius 16 (estimated from `sm-full.png`), overflow clip, 2 columns 1:2: left **P13** cover image with bottom gradient and white address lines; right panel `#4A5962` padding 56: hours grid (days Mon–Sun × 2 time rows, ● open / – closed, white text, hairlines `rgba(255,255,255,.3)`), phone Figtree 400 2rem white, notes 0.8125rem `rgba(255,255,255,.8)` | 30 words |
| 10 | footer | info | white veil 0.6, padding 80 / 120 (pill bar room): logo + address + phone left; 2 nav columns; language list; © line 0.75rem | — |

English home ≥ 320 words; narrative paragraphs in #2 (×2), #3, #4, #7 (≥ 3). CJK home ≥ 600 characters.

**Home photo positions (13 `<img>`, none repeated):** P01, P02, P04, P05, P06, P07, P08, P09, P10, P11, P12, P15, P13 (+ P03 as CSS ghost background). ≥ 8 ✓.

### Comparison with recent home block orders
| # | Kairo Supply | Awa Taproom | Kesho College | Eiyo Clinic | **Shisei Clinic** |
|---|---|---|---|---|---|
| 1 | stadium photo over cropped wordmark on hairline grid | framed photo window over full-bleed room + wordmark | 3–4 tall panels drifting left + giant clipped word | inset rounded photo, H1 under it, paper strip | **left arch photo + oval/ghosts + white wordmark across, fixed pill bar** |
| 2 | egg photo + story | full-bleed room wipe + underlined lead | centred concept | 4-line scrub-fill statement | **arch portrait with round overlap + text column** |
| 3 | dark sticky stage | 4 rule-topped tap cards | wide parallax photo + overlapping caption | coverflow problem row | **3 ovals with vertical caps labels (problem)** |
| 4 | range | seats / price | hour-by-hour rows | pine block with hairline arches | **two full-bleed treatment panels, title right** |
| 5 | … | visit | courses tiles | 3 story cards 4:3 | **4 stages + bleeding arch photo** |
| 6 | | | instructors split | paper room + names | **text-only stories** |
| 7 | | | tuition table | price list + visit | **arch portrait + 7 names** |
| 8 | | | quotes, photo CTA | paper strip CTA | **full-width fees + FAQ round link** |
| 9 | | | | | **slate hours card with photo** |

Why not alike: no hairline grid, no framed window, no drifting panel strip, no inset rectangle hero, no dark/pine lead block, no scrub-fill text, no coverflow. Eiyo also used arches, but as 1 px white outlines inside a saturated pine block; here arches are **photo masks** on a drifting slate field and the hero is a split arch + white wordmark, which no recent theme has. The fixed bottom pill bar is new to the run.

---

## 4. Inner pages (10 + notes templates; no sidebar)

All start with the arch page head (§1 continuation table), then body, then a one-line close with the slate pill "Book a first visit". Body copy column max 680 px; label rows (caps word + hairline) open each section.

1. **About** (`page-about`): "Since 2015" narrative (why a clinic for desk workers, why 60-minute first visits, what we won't do: no long prepaid plans, no X-rays unless referred); round photo P13 (190 px) overlapping the corner of the head arch area beside the "Since 2015" section; values in 3 short paragraphs. 350 words.
2. **Conditions** (`page-conditions`): the three concerns in depth (neck & shoulders, lower back, headaches & jaw) plus "also seen": mid-back stiffness, wrist/forearm strain, sciatica-type leg pain (with "we refer when it is not for us"). oval rows with P07 (lower back) and P14 (posture check), vertical caps labels ≥960. Red-flag note: when to see a physician first.
3. **Treatments** (`page-treatments`): anchors #adjustment, #soft-tissue, #movement, #desk-review. Two full-bleed panels (P10 movement, P16 home stretch) with `sp-parallax`; text sections for soft-tissue and desk review. Each section ends with duration + price from §7.
4. **First visit** (`page-first-visit`): the 4 stages in detail (60 min), what to wear, forms, what happens next (weekly 30-min follow-ups for 3–4 weeks, then spaced); bleeding arch P11 with faded "FIRST VISIT" vertical caps (≥1024).
5. **Fees** (`page-fees`): full-width price list (6 items, §7), receipts for extended health plans, cancellation (24 h), payment methods. Table rules §6.
6. **Clinicians** (`page-clinicians`): 7 people as hairline name rows with 50-word bios (no portrait grid); the head arch P12 is Dr. Hartley, the oval P17 shows the team.
7. **Stories** (`page-stories`): the 3 stories (§7) at 200 words each, each with a round 160 px photo (Ana P05, Marcus P04, Ingrid P15); no outcome claims beyond "she reports".
8. **Notes** (`home.html` index, `archive.html`, `single.html`): 6 posts (§7), cards with 0.8:1 oval thumbnails, date + title; single: label row with category, featured image in an arch (max 560 wide), text 680.
9. **Questions** (`page-questions`): 10 Q&A as `details/summary` with hairline rows and a 10 px circle arrow that rotates 90° (0.3 s).
10. **Contact & access** (`page-contact`): anchors #hours, #access, #book; hours card (same as home block 9, photo P13); access text (transit, bike parking, elevator, step-free); booking: phone, email and "online booking opens in 2027" text — no form required.
11. 404 / search: arch head small (P04, wordmark "LOST" / "SEARCH"), link home.

---

## 5. Colour and type

### Colour (reference relationships kept: one drifting hue field ~75%, white veil sections, dark warm-neutral text, one small accent, white type on photos)
The reference hue (sakura pink) is replaced by slate because (a) the design-plan row fixes palette family slate `#4A5962` for this slot, (b) the pink is tied to the reference's cherry-blossom brand name, not to chiropractic, and (c) recent themes avoid repeating hues. We keep **every lightness/saturation step** and rotate hue only, so the relationships match 1:1.

| Role | Ref [a] | Shisei | Rule | Share (first screen) |
|---|---|---|---|---|
| Ground stop 1 | hsl(21,53%,93%) | `#E9EEF1` hsl(203,22%,93%) | same L | gradient total ≈ 72% |
| Ground stop 2 | hsl(18,53%,74%) | `#B1BFC9` hsl(203,18%,74%) | same L | ″ |
| Ground stop 3 | hsl(12,65%,63%) | `#92A4B0` hsl(203,16%,63%) | same L | ″ |
| Ground stop 4 | hsl(1,38%,54%) | `#798E9A` hsl(203,14%,54%) | same L | ″ |
| White veil | #FFF at 0.6 | `rgba(255,255,255,.6)` on sections 2, 6, footer | same | — |
| Text | `#504742` (L29 S10) | `#434C51` (L29 S10, hue 203) | same L/S | body |
| Heading | `#75645A` (L41 S13) | `#5B6C76` (L41 S13) for H3/labels; **main `#4A5962`** for H1/H2 lead (row hex) | same L / row | ≈ 4% |
| Main (accent fill in ref) | `#B8615E` pill bar, hours card | `#4A5962` pill bar, hours panel, buttons | role swap: ref's red fill → our row main | ≈ 6% |
| Accent | `#B8615E` | `#B8615E` **kept** (circle arrows 10 px, active nav dot, label-row small dot) | ref code as is | ≤ 1% |
| White | `#FFFFFF` wordmark, type on photo | `#FFFFFF` | same | ≈ 8% |
| Hairline | rgba(117,100,90,.2) | `rgba(74,89,98,.2)` | same alpha | — |

Ground CSS: `body::before { position: fixed; inset: 0; z-index: -1; background: linear-gradient(180deg, var(--ss-g1) 0%, var(--ss-g2) 55%, var(--ss-g3) 85%, var(--ss-g4) 100%); }` with `@property --ss-g1..4` (syntax `<color>`) animated `ss-drift 10s linear infinite alternate` between the stops above and the same stops shifted +6° hue and −2% lightness (a slow cool/steel breathing). Under reduced-motion, `?sp-static` (`html.sp-no-motion`) and in the editor: no animation (editor uses a static gradient on `.editor-styles-wrapper`).
First-screen saturated share: target ≤ 5% (reference ≈ 1.2% [a]); `scripts/check-first-screen.py` limit **15%** (row note cap 30%, common.md cap 15%). Nothing on the first screen besides the photo exceeds S 0.25.
Contrast: `#434C51` on `#E9EEF1` 7.9:1; white on `#4A5962` 7.2:1; body text never on stops 3–4 (sections with body text carry the 0.6 white veil).

### Type (font_direction **sans**)
- Latin headings and display: **Figtree** (300, 400, 500, 600). Latin body: **Public Sans** (400, 500, 600). Both self-hosted woff2 via theme.json `fontFamilies` + `fontFace` (front end and block editor load the same files).
- Stacks: heading `"Figtree", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`; body `"Public Sans", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`. `:lang(zh-TW)` puts Noto Sans TC first, `:lang(ja)` Noto Sans JP first (gothic sans, **no serif anywhere**). Noto Sans TC / JP 400 + 500 subset woff2 declared as `fontFace` in theme.json; subsets made with the Hokuto/Hada workaround (the CJK subset script is known broken). Because style.css uses `:lang(`, copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and require it.
- Font size presets (theme.json): small 0.8125rem · base 1rem · medium 1.25rem (section label H2 20 px [b]) · large 1.5rem (H3 24 px [b]) · x-large 2rem (lead H2 32 px [b]) · xx-large 4rem (panel titles 64 px [b]) · **display `clamp(4.25rem, 11vw, 9.875rem)`** (wordmark ≈158 px at 1440 [b]; max ≥ 4.25rem ✓).
- Weights / line-height / tracking: body 400, 1rem, lh 1.75 (28/16 [b]), mobile 0.9375rem; lead H2 Figtree 400 lh 1.75 (56/32 [b]) ls 0.08em Latin / 0.16em CJK [b]; H3 Figtree 500 1.5rem lh 1.5 ls 0.04em (CJK 0.08em [b]); wordmark 300 lh 1 ls 0.04em [b]; label rows Figtree 300 2.5rem caps ls 0.04em.
- CJK: headings ≈ 0.75× the English size (lead H2 1.5rem, H1 1.75rem), body lh 1.85, wordmarks stay Latin. fr/de: `hyphens: auto` on body and H1–H3.

### Links and buttons
Text links `#4A5962`, underline offset 0.3em on hover; 10 px circle arrow `#B8615E`. Pill buttons radius 9999 [d], h 48, padding 0 28, filled `#4A5962` white, hover `#3B474E` 0.3 s [g]. Outline pills on photos: 1 px white. No shadows [d].

---

## 6. Responsive rules
- 390 px first screen: order = header (logo + language pill) → arch P01 (350×400) with oval on its shoulder → wordmark in flow (−0.9em) → H1 1.5rem lh 1.6 → sentence → link; pill bar fixed bottom. **No vertical text and no absolutely positioned text labels on the mobile first screen**; the only absolute elements are images (oval, ghost). Content of the first screen ends above y = 844 − 76.
- Vertical caps labels (concerns) and the faded "FIRST VISIT" are hidden < 960 / < 1024 px.
- Price list (home block 8 and Fees page): `table.ss-fees` (or list with the same rules) **width 100% of the container at ≥782 px**, columns `name | duration | price`, duration and price `white-space: nowrap`, price `text-align: right`, never cut, no horizontal scroll at 800 and 1280. <782 px: each row becomes a stacked block (name + description, then a flex line with duration left and price right).
- Hours grid: ≥782 px a 8-column grid; <782 px stacked lines ("Mon–Fri 8:00–13:00 · 14:00–19:30" / "Sat 9:00–13:00" / "Sun & holidays closed"). Any other table stacks on mobile.
- Concept / clinicians / first-visit splits stack under 782: photo first (arch width 80vw centred, round overlap shrinks to 120 px), text after. Full-bleed panels: title top-left on mobile, body at bottom, pill below body.
- No horizontal overflow at 390 / 1280 (wordmark `white-space: nowrap` is inside `overflow: clip` on the hero).

---

## 7. Fixed numbers (identical on home, inner pages, footer and in all five languages)
- **Clinic**: Shisei Clinic, founded **2015**, Suite 204, 1180 Linden Row, Vancouver, BC V6E 2S2, Canada (fictional). 3 treatment rooms + 1 movement room. Phone +1 604 555 0142, hello@shisei.example. Five minutes on foot from the Linden Row SkyTrain stop (fictional).
- **Hours**: Mon–Fri 8:00–13:00 and 14:00–19:30; Sat 9:00–13:00; closed Sundays and statutory holidays. Last booking 30 minutes before closing.
- **First visit flow (60 min)**: 01 Talk 15 min → 02 Look (posture & movement check) 15 min → 03 First adjustment 20 min (only if appropriate) → 04 Plan 10 min. Then weekly 30-min follow-ups for 3–4 weeks, then spaced out.
- **Fees (CAD, tax incl.)** — 6 items:
  | Item | Duration | Price |
  |---|---|---|
  | First visit (talk, posture check, first adjustment, plan) | 60 min | $120 |
  | Follow-up adjustment | 30 min | $75 |
  | Adjustment + soft-tissue work | 45 min | $95 |
  | Movement plan session | 45 min | $85 |
  | Desk & posture review (bring photos of your set-up) | 30 min | $60 |
  | Five follow-up adjustments (valid 4 months) | 5 × 30 min | $340 |
  Receipts for extended health plans on request; 24-hour cancellation.
- **People (7)**: Dr. Naomi Hartley, DC — founder, clinic director; Dr. Tomás Reyes, DC — chiropractor; Dr. Priya Raman, DC — chiropractor; Samuel Osei — kinesiologist, movement plans; Lena Vogel — registered massage therapist; Mei-Lin Chou — front desk and bookings; Claire Dubois — clinic manager.
- **Stories (3)**: Ana Costa, 34, product designer — neck and headaches after nine-hour screen days; Marcus Bell, 51, accountant — lower back every tax season; Ingrid Halvorsen, 42, translator — shoulder and jaw tension. Wording "reports", "found", never "cured" or guaranteed results.
- **Notes (6 posts)**: "A desk set-up you can check in five minutes" (P15) · "Why your first visit takes an hour" (P14) · "Three stretches between meetings" (P16) · "Sitting is not the enemy; staying still is" (P04) · "What a follow-up actually does" (P09) · "When we send you to a physician instead" (P13).
- **Counts used in copy**: "forty hours a week" sitting (home #2), 60-minute first visit, 30-minute follow-ups, 7 people, since 2015. No statistics, no awards, no media.

---

## 8. Scroll effects (sp-scroll; from stage-a candidates)
Copy `pipeline/assets/sp-scroll/` unchanged to `assets/`. Two effects, both from the reference:

| Effect | sp class | Where | Source and timing |
|---|---|---|---|
| Bottom-to-top gradient mask fade | `sp-reveal sp-reveal--mask` with `--sp-dur: 1.2s; --sp-ease: ease-out` (theme CSS on `.sp-reveal--mask`) | **5 elements only** (≤ 60% of 9 blocks): #2 concept photo group (arch + round), #3 concerns row container (whole row, not each oval), #5 P11 photo wrapper, #7 P12 portrait, #9 hours card. Inner pages: first body photo + label rows of the first two sections | sakurano-megumi `.js-show → .is-active`: IntersectionObserver rootMargin −20% 0, threshold 0, once; opacity 0→1 + mask-position 0 100% → 0 0, mask-size 100% 300%, `transition: 1.2s ease-out`, no translate [g]. sp-reveal--mask uses the identical mask and 1.2 s ease-out. `ref/scroll-fade-before.png → mid → after` |
| Parallax | `sp-parallax` | (a) **hero arch figure (P01)**, `--sp-par: 8%`, mobile `5%`; (b) **#4 panels P09, P10** (Cover), `--sp-par: 10%`, mobile `6%`; (c) inner arch heads `6%` | Reference has no parallax; its moving hero video + drifting ground are the motion we translate into a scroll-driven photo drift. Built-in CSS `animation-timeline: view()`, JS fallback; reduced-motion / `?sp-static` / editor = still |

- Hero: **no** `.sp-reveal`; its load sequence is theme CSS (§2).
- Not on forms, price list, FAQ, hours grid text, legal text. No other effects (no count, marquee, stagger).
- Parallax foreground: hero H1/wordmark/oval are **outside** the moving figure (wordmark is a sibling positioned over it); panel titles are Cover inner content (not the moving background).
- Acceptance: `check-parallax.mjs` desktop + mobile: hero and panels drift ≥ 6 px, 0 under reduced-motion; ≥ 3 reveals hidden before entry and visible after; nothing transparent after scrolling to the bottom.

---

## 9. Photos (17, IMAGERY = photo, Grok, one at a time, read every one)

Imagery: **photo** (stage-a IMAGERY = photo; reference uses real, pale, soft-daylight treatment photography [e]). No illustration, no cutouts (0 transparent PNG), no blossoms.

STYLE (exact string for every prompt):
`photorealistic documentary photograph, high-key, bright soft window daylight, cool-neutral white balance, plain white and pale grey-slate treatment room, white treatment table with pale grey towel, clinicians in plain slate-grey tops, patients in everyday office clothes in muted grey, navy, oatmeal and white, diverse adults, calm attentive moment, shallow depth of field, 50mm lens, low contrast, clean modern international setting, no text, no logos, no signage, no posters or anatomy charts, no needles, no Japanese elements`

Each ≤ 300 KB, ≤ 2000 px, webp; readme line per image (AI-generated). Re-generate any with text, logos, broken faces/hands, or style drift.

| ID | Subject / composition | Ratio | Used on (once per page) | Home |
|---|---|---|---|---|
| P01 | clinician standing behind a patient seated upright on a white treatment table by a window, one hand steadying the patient's shoulder, other at the base of the neck; patient (woman, 30s, grey knit) eyes closed; lower third mid-grey (towel, slate top) for the white wordmark; subject centred for an arch crop | 7:8 | Home KV; Contact head | ★ |
| P02 | close-up of a clinician's hands resting on a patient's shoulder blade over a grey T-shirt | 4:5 | Home KV oval; Treatments head oval; Contact head oval | ★ |
| P03 | out-of-focus pale scene: a patient's profile seated by a window (used blurred) | 4:5 | ghost background on all pages (CSS) | ★ (bg) |
| P04 | office worker (man, 40s, navy shirt) standing at a bright window, rolling one shoulder, bag on a chair | 0.7 | Home concept; About head; Stories (Marcus); Notes post 4; 404 | ★ |
| P05 | laptop, notebook and a mug on a pale desk, empty chair pushed back, from a slight high angle | 1:1 | Home concept round; Fees head oval; Stories (Ana); Notes head oval | ★ |
| P06 | person at a laptop pressing the side of the neck, shoulders raised | 4:5 | Home concerns; Conditions head | ★ |
| P07 | person rising from an office chair with a hand at the lower back | 4:5 | Home concerns; Conditions body; Stories head oval | ★ |
| P08 | person at a desk, eyes closed, fingertips at the temples and jaw | 4:5 | Home concerns; Conditions head oval | ★ |
| P09 | wide room: patient lying on side on a white table, clinician's hands at the hip and lower back (adjustment set-up), lots of white space at upper right | 16:9 | Home panel A; Treatments head; Notes post 5 | ★ |
| P10 | bright movement room: kinesiologist guiding a patient through a hip hinge with a wooden dowel along the spine | 16:9 | Home panel B; Treatments panel | ★ |
| P11 | first-visit talk: clinician and patient seated at a small white table, notes, a tablet with a blank screen | 3:4 | Home first visit; First visit head | ★ |
| P12 | Dr. Naomi Hartley (woman, 50s, slate top) standing in the treatment room, hands loosely clasped | 4:5 | Home clinicians; Clinicians head | ★ |
| P13 | small bright reception with a bench, plants, coat hooks, window; no signage | 3:4 | Home visit card; Fees head; Contact hours card; About round; Notes post 6 | ★ |
| P14 | posture check: patient standing sideways against a plain wall, clinician observing with a tablet | 4:5 | First visit oval; Conditions body; Questions head; Notes post 2 | |
| P15 | adjusting a desk set-up: person raising a monitor on a riser, chair height lever | 4:5 | Home FAQ round; Questions oval; Stories (Ingrid); Notes post 1 | ★ |
| P16 | at a home office, person doing a doorway chest stretch with a resistance band nearby | 4:5 | Treatments panel; Stories head; Notes post 3 | |
| P17 | three clinicians talking briefly in a bright corridor, candid, mid-distance | 3:2 | About oval; Clinicians oval; Notes head | |

Per-page check (no repeats): Home P01 P02 P04 P05 P06 P07 P08 P09 P10 P11 P12 P15 P13 (+P03 bg) · About P04 P17 P13 · Conditions P06 P08 P07 P14 · Treatments P09 P02 P10 P16 · First visit P11 P14 · Fees P13 P05 · Clinicians P12 P17 · Stories P16 P07 P05 P04 P15 · Notes index P17 P05 + cards P15 P14 P16 P04 P09 P13 · Questions P14 P15 · Contact P01 P02 P13 · 404 P04. P03 is a CSS ghost background everywhere.

---

## 10. Home acceptance checklist
- [ ] First screen 1440×900: left arch P01 (≥ 48% width, semicircle top, touches hero bottom), white "BACK AT EASE" ≥ 9rem crossing photo and ground, oval P02 + 2 blurred ghosts top-right, two-line H1 right half, slate pill bar + white booking pill — all six KV items visible.
- [ ] Load sequence (`?sp-motion`): photo 0 s, oval 0.4 s, H1 0.8 s, wordmark 1.5 s, mask fade 1.2 s ease-out; `?sp-static` shows the final state.
- [ ] Ground gradient drifts (10 s alternate); still with reduced-motion.
- [ ] 390×844: no vertical text, no absolute text over text, wordmark one line over the arch bottom, H1 readable, pill bar not covering the H1.
- [ ] 13 home `<img>`, none repeated; all from §9; no text in photos.
- [ ] Block order exactly §3 (10 blocks incl. footer); concerns = 3 ovals; two full-bleed panels; first-visit 4 stages; text-only stories; 7 names; 6-row fees; hours card.
- [ ] Fees full width at 800 and 1280, price column nowrap right, stacked at 390; numbers equal to §7 and the Fees page.
- [ ] `sp-parallax` on hero arch and both panels (≥ 6 px drift desktop + mobile); exactly 5 `.sp-reveal--mask`, none in the hero.
- [ ] Figtree / Public Sans in editor and front end; zh-TW and ja show Noto Sans TC / JP (no serif); display preset ≥ 4.25rem.
- [ ] Saturated share ≤ 15% (target ≤ 5%); no beige; hairlines `rgba(74,89,98,.2)`; no shadows.
- [ ] English ≥ 320 words, ≥ 3 narrative paragraphs; no claims of cure, guarantees, awards, real media.
- [ ] `auto-gates.mjs … en …/gates/en.json 1 1` pass; `check-parallax.mjs` pass.

---

## 11. theme-meta labels
type `health`; colors.tags `slate`, `cool`, `light`, `muted`; style `airy`, `rounded`, `photographic`, `calm`.

---

## 12. Similarity to the reference (target ≈ 80%)
| Dimension | Reference (token) | Shisei |
|---|---|---|
| Ground | 4-stop hue gradient L 93/74/63/54%, fixed, 10 s alternate drift [a][g] | same L steps, hue 203 slate `#E9EEF1 → #B1BFC9 → #92A4B0 → #798E9A`, fixed, 10 s alternate |
| Veil | white 0.6 sections [a] | white 0.6 on sections 2, 6, footer |
| Text / heading | `#504742` / `#75645A` [a] | `#434C51` / `#5B6C76` (same L, S) + row main `#4A5962` |
| Accent | `#B8615E` pill bar, hours card [a] | `#B8615E` kept for arrows/dots; fills moved to main `#4A5962` |
| Saturated share | ≈ 1.2% [a] | target ≤ 5% |
| Hero photo | arch 700×809 (0.87), radius 9999 9999 0 0, right 49%, y 64 → bottom [e] | same size/ratio/radius, mirrored left (row: photo-left) |
| Wordmark | Aboreto caps ~11vw, lh 1, ls .04em, white, across arch bottom [b][f] | Figtree 300 caps clamp(4.25rem, 11vw, 9.875rem), lh 1, ls .04em, white, across arch bottom |
| Sub-photo | oval 208×260 + ghosts 130×196, 130×163 [e] | same sizes, mirrored top-right |
| Catch copy | mincho 2 lines, wide tracking [b] | Figtree 400 2.25rem lh 1.75 ls .06em, 2 lines |
| Bottom bar | fixed pill 560×58 radius full, 3 items + white contact pill h 50 [f] | same dimensions, slate fill, Hours / Find us / Menu + white booking pill |
| Body type | 16 px / 400 / lh 1.75 [b] | Public Sans 1rem / 400 / lh 1.75 |
| Headings | H2 lead 32/56 ls .16em; section 20 px; H3 24/36 [b] | x-large 2rem lh 1.75 ls .08em (CJK .16em); medium 1.25rem; large 1.5rem lh 1.5 |
| Container | 1280, calc(100% − 160px), mobile 89.6% [c] | 1280, calc(100% − 160px), mobile calc(100% − 40px) |
| Section spacing | padding-bottom 240–380 [c] | 240 desktop (concept, concerns, first visit, clinicians), 120 mobile |
| Radius / border / shadow | pill & arch 9999; hairline rgba(117,100,90,.2); no shadows [d] | pill & arch 9999; hairline rgba(74,89,98,.2); no shadows; hours card 16 |
| Concept block | arch 480 (0.7) + round overlap, text 560 [e] | arch 480 (0.7) P04 + round 190 P05, text 560 |
| Feature block | caps label + hairline, 3 ovals, vertical caps, 24 px titles [e][f] | "CONCERNS" + hairline, 3 ovals 280×350, vertical caps ≥960, 1.5rem titles |
| Menu panels | 2 full-bleed 1440×800, 64 px white title right, view-details pill [e] | 2 full-bleed min-height 800, 4rem white title right, outline pill |
| Beginners block | tall arch photo right 45%, faded giant vertical caps [e] | P11 right 45vw arch, faded "FIRST VISIT" vertical caps 9rem |
| Hours card | rounded card, photo left, accent panel with hours grid + phone [e] | same layout, slate panel |
| Reveal motion | mask fade 1.2 s ease-out, mask 100% 300%, rootMargin −20%, once [g] | `sp-reveal--mask` same mask, 1.2 s ease-out |
| Hero sequence | 0 / 0.8 / 1.5 s, 1.2 s each [g] | 0 / 0.4 / 0.8 / 1.5 s, 1.2 s each |
| Hover | 0.3 s [g] | 0.3 s |
| Parallax | none (video + drift) [g] | `sp-parallax` hero 8%, panels 10% (required by pipeline) |
| Imagery | real, pale, soft daylight, warm skin, plain walls [e] | real, high-key, cool-neutral daylight, plain white/slate room |
| Not copied | watercolour blossoms, photos/video, catch copy, logo, LINE branding | — |
