# Hatake Greens: design spec (stage 1, binding for implementation)

Slug `hatake-greens`, weekly vegetable-box membership, **landing** type (home = one long conversion page with anchor menu and one repeated CTA). Design-plan row b16-5. Main (only) reference: **yama-niwa** https://yama-niwa.jp/ (S5-Style). Measurements: `reference-tokens.md`; screenshots `ref/yn-*.png`. Borrow structure, technique, colour relationship, key-visual concept and motion. Never copy their photos, copy, logo or handwritten wordmark.

**IMAGERY = photo** (stage-a.md: reference imagery is all photography). Documentary, natural light, high-key, real-photo STYLE below.

Fixed brand facts (every page, all five languages; prices in USD everywhere, never converted):
- Hatake Greens, founded **2019**. Packing barn: **14 Orchard Lane, Wren Valley** (fictional). Delivers to **12 city neighbourhoods within 40 km** of the barn.
- Harvest **Tuesday and Thursday from 5:00**, crates packed **by 9:00**, delivered **the same day 14:00–19:00**. Changes, skips and pauses close **Sunday 20:00**. Member desk **Mon–Fri 9:00–17:00**.
- A standard crate holds **9 kinds** of vegetables and greens, about **4.5 kg**, from **6 partner farms**, all within **60 km**.

---

## 1. Signature techniques (three, all obvious at a glance)

### T1. Full-bleed documentary photo hero, wide-tracked white headline bottom-left, tiny Latin sub-line (yama-niwa first screen, `ref/yn-fold.png`)
- Reference: aerial photo fills 100% × 100vh, no mask, no card; 2-line H1 white, bold, letter-spacing 0.2em, line-height 1.5, at x 60 / baseline ≈ 800 of 900; under it one small English line (Libre Franklin 11–13px, ls .055em, green).
- Ours (home hero): Cover block `alignfull`, min-height `max(88vh, 640px)` (bottom 12vh reveals the next section's top edge = the design-plan "top-bottom-halves" hint: photo is the top, the sage intro strip the bottom). Image **hk-01** object-fit cover, focal point 55% 45%. H1 at left 60px (desktop) / 24px (mobile), bottom 96px. H1 Hanken Grotesk 700, `clamp(2rem, 3.4vw, 3rem)`, line-height 1.5, **letter-spacing 0.16em** (token b: .2em, reduced only because Latin is wider), white, max 2 lines (`<br>`). Sub-line under H1 (gap 14px): Schibsted Grotesk 0.8125rem / 500, ls .08em, colour `#CFE0C4` (light leaf, readable on dark photo).
- Bottom-left scrim for legibility: `linear-gradient(to top right, rgba(20,26,18,.55) 0, rgba(20,26,18,0) 55%)`.
- Must not be diluted: photo truly full-bleed edge to edge (no container, no radius, no inset frame); headline stays bottom-left (never centred, never in a box); tracking ≥0.12em.

### T2. Sage triangle: logo mark top-left + huge clip-path triangle section label (yama-niwa logo + "Five functions", `ref/yn-s2.png`)
- Reference: logo = solid green triangle 216×148 pointing down-right from the top-left corner; later a ≈540×440 solid green triangle (`clip-path: polygon`) starts at the section's top-left, holding "▶ Five functions" label + white H2 inside its upper-left, and the first photo card sits immediately to its right.
- Ours:
  - **Logo**: CSS triangle `clip-path: polygon(0 0, 100% 30%, 52% 100%)`, 168×116 desktop / 104×72 mobile, fill `#4E5A48`, absolutely at top-left 0,0 of the header (bleeds to the corner like the reference). Wordmark "Hatake / Greens" in white Hanken Grotesk 600 0.875rem stacked, at 28px,22px inside it. Own design; no handwriting imitation.
  - **Section triangle** at the start of home §4 "What's in the crate" (`#crate`): a Group `.hg-tri` `clip-path: polygon(0 0, 100% 18%, 44% 100%)`, **560×460 desktop**, 300×240 tablet, mobile becomes a 100%-wide × 200px triangle `polygon(0 0,100% 0,0 100%)` above the cards (text stays inside the coloured area, never overlaps photos). Fill `#4E5A48`. Inside at padding 56px 0 0 72px: label "▶ In the crate" (Schibsted 0.875rem, ls .06em, `#CFE0C4`) then H2 white "Nine kinds, / picked this morning" Hanken 700 `clamp(1.75rem,2.6vw,2.25rem)`.
  - Desktop layout: the triangle is the first cell of a 3-col grid (col 1); cards 1–2 occupy cols 2–3 of row 1, cards 3–5 row 2 (same as reference: triangle top-left, cards flowing right/below).
- Must not be diluted: solid sage (not a tint, not an outline), ≥520px wide at 1440, real sharp triangle (no radius), white type inside.

### T3. 3-up 3:2 photo cards: coloured title + `[ Tag ]` + 2-line text + ● link (yama-niwa cards, `ref/yn-s2.png`)
- Reference: 380px cards, gap 50px, photo 3:2 radius 0; title 28px/700 green, bracket tag 13px green after the title on the same baseline; 2 lines body 16/29; "● Stay" link with an 18px round play-dot, 24px label.
- Ours: grid 3 cols, column gap **50px**, row gap **96px**, card width ≈ 380 in a 1240 container. Photo 3:2, radius 0. Title Hanken 700 1.625rem `#4E5A48`; tag `[ Roots ]` Schibsted 0.8125rem `#6E8A5B` ls .04em, inline after title (gap 12px). Body Schibsted 1rem / 1.8, exactly 2–3 lines. Link: 18px circle `#6E8A5B` with white ▶ (CSS triangle) + text Hanken 500 1.25rem ink.
- Used twice on home (§4 crate contents ×5 cards with triangle; §6 packing morning ×3 cards with tags `[ 5:00 ]` `[ 7:30 ]` `[ 9:00 ]`) and on inner pages.
- Must not be diluted: 3:2 sharp photos, coloured titles with bracket tags on the same line, the round dot link.

### Continuation to inner pages (≥4 required; all listed here)
| Inner page | T1 | T2 | T3 |
|---|---|---|---|
| The crate (`/the-crate`) | short full-bleed photo head (50vh, hk-05) with bottom-left tracked H1 | triangle label opening the "This season" list | 6 cards (seasonal produce) |
| Packing morning (`/packing`) | page head hk-08 bottom-left H1 | triangle opens "Four hours" section | 3 cards for 5:00/7:30/9:00 + 1 row |
| Growers (`/growers`) | page head hk-10 | triangle opens "Six farms" | 6 grower cards `[ Farm ]` tag |
| Plans & prices (`/plans`) | page head hk-12 | small triangle (360×290) beside the price table title | 3 cards for add-ons |
| Delivery (`/delivery`) | page head hk-13 | triangle label "Twelve neighbourhoods" | — |
| Member stories (`/stories`) | page head hk-14 | — | 3 story cards `[ Household of 2 ]` |
| Waitlist (`/waitlist`, newsletter) | page head hk-15 | triangle with the form beside it | — |
The logo triangle appears on every page via the header part.

---

## 2. Key visual concept

### (1) Reference first screen
yama-niwa: an aerial, full-bleed documentary photo/video of a former school building, renovated as a hostel, sitting in a green Kiso valley. Story: "Deepen the Kiso road journey — an answer from the past, a modern post town": an old place quietly reused for today's traveller. Signature motion: the hero video plays while visible and pauses after; a dark scrim fades in with scroll (0 → 50% black by the lead section); nav items fade up in a 0.15s stagger on load.

### (2) Our translation
Same composition (one full-bleed documentary photo, wide, the subject in the lower-middle, open space top-left for logo and top-right for nav, headline bottom-left), same image type (real photo, natural light, greens dominant), same quiet "old practice, today's household" story: **a member sets this morning's wooden crate of greens on a bright city-apartment kitchen counter, window light, leaves still wet** — the farm's harvest arriving in a modern home the same day, the way the post town receives today's walker. Motion: the photo moves slower than the page (sp-parallax), the scrim deepens with scroll, menu items stagger in.
H1 (en): "Picked at five. / On your counter by six." Sub-line: "Weekly vegetable membership · Wren Valley".

### (3) KV checklist (all implemented and visible on the first screen at 1440×900 and 390×844)
| # | 參考站元素 | 我們的對應 | 位置 | 動態 | 用哪張圖 |
|---|---|---|---|---|---|
| 1 | Full-bleed aerial valley photo (photo) | Full-bleed documentary photo: member lowering a wooden crate of greens onto a kitchen counter, window light, wide framing | whole first screen, 100vw × max(88vh,640px) | `sp-parallax`, `--sp-par: 8%` desktop / 5% mobile | hk-01 |
| 2 | Wide-tracked white 2-line H1 bottom-left | "Picked at five. / On your counter by six." white, ls .16em | left 60 / bottom 96 (mobile 24 / 72) | none (hero: no reveal) | hk-01 |
| 3 | Tiny English sub-line under H1 | "Weekly vegetable membership · Wren Valley" | 14px under H1 | none | — |
| 4 | Green triangle logo top-left corner | sage `#4E5A48` triangle with white wordmark | header top-left 0,0, 168×116 | none | — |
| 5 | 3-col text nav grid + green pill CTA top-right | anchor menu 3 cols × 2 rows (Why short / In the crate / Packing / The plan / Stories / Questions) + "Join" pill `#6E8A5B` | nav x≈640/820/1000, y 36; pill top-right 40px from edge | `sp-stagger` + `sp-reveal--up` on menu items (0.7s, delays per §9) | — |
| 6 | Dark scrim fading in with scroll | sage-black scrim `rgba(20,26,18,…)` 0 → .45 tied to scroll via CSS `animation-timeline: scroll()` inside `@supports`; static bottom-left gradient always present | hero overlay | CSS scroll-driven opacity; none under reduced-motion / `?sp-static` / editor | hk-01 |
Mobile (390): nav collapses to a "Menu" button + pill; no vertical or absolutely positioned labels over the photo except the H1 block (which is in normal flow at the Cover's bottom, `justify-content:flex-end`).

---

## 3. Colour (reference relation kept: one muted brand green on white + warm-cool off-white, photos carry colour)
| Role | Ours | Reference token (a) | Area | Note |
|---|---|---|---|---|
| Main / brand | `#4E5A48` 松葉色 | `#5BB543` | first screen ≤4% (logo); triangle section ≈9% | Replaced: the row fixes 松葉色; reference saturated green would exceed the quiet brief and clash with produce photos. Same usage slots kept (logo, big triangle, card titles). |
| Accent | `#6E8A5B` | `#5BB543` reused for pill + dots | ≤3% | CTA pill, play-dots, tags |
| Sub ground | `#EEF0EA` | `#F7F4EF` | ≈10% | cool sage-white instead of warm (avoid beige); cards/FAQ/intro strip, radius 4px |
| Base | `#FFFFFF` | `#FFFFFF` | ≈45–50% | |
| Text | `#1F251C`, muted `#5F665A` | `#000/#111827`, `#6B7280` | | |
| Light leaf on photo | `#CFE0C4` | green sub-line | tiny | |
| Line | `#D9DDD3` | — | hairlines in tables only | |
First-screen saturated (S>0.5) share: target ≤10%, hard cap 15% (check-first-screen.py); the photo must be a quiet green/wood/white palette, no red tomatoes filling the frame.

## 4. Type (font_direction = sans)
- Latin headings: **Hanken Grotesk** (500/600/700). Latin body + labels: **Schibsted Grotesk** (400/500).
- Stacks: heading `"Hanken Grotesk", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`; body `"Schibsted Grotesk", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`. `:lang(zh-TW)` puts Noto Sans TC first, `:lang(ja)` Noto Sans JP first (黑體 only, no 明體 anywhere). Copy shared/inc/editor-lang.php → inc/editor-lang.php and require it.
- All faces via theme.json `fontFamilies` + `fontFace` (woff2 in assets/fonts, including zh-TW / ja subset files via the Hokuto/Hada workaround), so editor and front end match.
- Sizes (theme.json presets): small .8125rem, base 1rem (body lh 1.8 = token b card body 29/16), medium 1.25rem, large 1.625rem, x-large 2.25rem (H2, token 32px rounded up), xx-large 3rem (hero H1 cap), **xxx-large 4.5rem** (used: "Why short" statement §3 and closing join heading §10, `clamp(2.75rem,5.6vw,4.5rem)`, ls .02em, lh 1.15). CJK headings ×0.75, body lh 1.85; fr/de `hyphens:auto`.
- Labels: "▶ Label" Schibsted .875rem ls .06em (token f/b). Headings weight 700 like token (H1/H2 700).

## 5. Home page (anchor sections, single column longform, container 1240, section gap 160–200px = token c)
| § | id | Purpose | Layout | Photos | Copy |
|---|---|---|---|---|---|
| 1 | hero | KV | T1 full-bleed, `sp-parallax` | hk-01 | H1 + sub-line + "Join" pill (the one CTA) |
| 2 | intro | Who it's for | `#EEF0EA` strip full-width, single centred-left column 720px, 2 paragraphs; to its right a 4:5 portrait (430×538, token portrait 0.77≈) | hk-02 | ~90 words |
| 3 | why | Why the crate is kept short | huge 4.5rem statement "A short crate is a full week." left, below it 3 numbered-free reasons as plain paragraphs in 2 cols (text) + full-width 21:9 photo band after (parallax secondary not used; static) | hk-03 (band) | ~110 words |
| 4 | crate | What's inside | **T2 triangle** + **T3** 5 cards (3:2) | hk-04, hk-05, hk-06, hk-07, hk-17 | 5 × 2 lines |
| 5 | packing-photo | Morning in the barn | full-bleed 16:9 photo with a single white caption bottom-left (echo of T1), `sp-reveal--wipe` on the figure's inner img | hk-08 | 1 line |
| 6 | packing | How a box is packed that morning | **T3** 3 cards `[ 5:00 ] [ 7:30 ] [ 9:00 ]` | hk-09, hk-10, hk-11 | 3 × 2–3 lines |
| 7 | plan | The single way to join | `#EEF0EA` card radius 4px, left: "Standard crate $32 / week, delivery included" + 4 facts list; right: 3:2 photo; full-width price table below (4 rows, see §8) | hk-12 | ~60 words |
| 8 | stories | Members | 3 quotes in plain columns, each with a 1:1 small photo (120px, radius 0) — not cards | hk-14 (1 used here; others text-only with initials) | 3 × 40 words |
| 9 | faq | Questions | `details` list, 6 items, hairline separators | — | 6 Q/A |
| 10 | join | Repeat CTA | full-bleed photo band hk-16 (dim scrim) + 4.5rem white heading bottom-left "Your first crate, next Tuesday." + "Join" pill | hk-16 | 1 line |
Home photo positions: hk-01,02,03,04,05,06,07,17,08,09,10,11,12,14,16 = **15** (≥8). No photo repeats on the page.
Home copy ≥ 320 English words, ≥3 narrative paragraphs (§2, §3).

### Comparison with recent themes (no block order or signature reused)
| Theme | Order | Hatake difference |
|---|---|---|
| Suzu Ballet | arch-photo hero → day strip → intro → reasons 3 cols → panel+lattice → sticky day → parallax band → stories → trial | no arch mask, no lattice/sticky; triangle label + tagged 3:2 cards are new |
| Yoru Bar | dark KV → 50/50 → 3-strip → circle story → wash → seats → rows | light page, no circles, no 50/50 rows |
| Kura Wine | slider KV → 2:3+3:2 → alt rows → bottles → case 50/50 → table → parallax rows | single photo (no slides), single column, no alternating rows |
| Nagi Imaging | scattered 7-frame hero → pinned → fees → parallax → people → halves | one full-bleed photo hero, no scatter, no pinned section, no people grid |

## 6. Inner pages (9 + legal)
1. **The crate** — 9 kinds explained, seasonal calendar as a simple 4-season list (no table on mobile), T2 + 6 T3 cards, storage tips.
2. **Packing morning** — the four hours from 5:00 to 9:00, T3 3 cards + full-bleed photo, packaging (returned wooden crate, paper wrap).
3. **Growers** — 6 partner farms + named people (§8), T3 cards with `[ Farm ]`.
4. **Plans & prices** — full price table (≥782px full-width, price column `white-space:nowrap; text-align:right`), add-on cards, what "included" means.
5. **Delivery** — 12 neighbourhoods list (2 cols desktop, 1 col mobile), days/times, crate return, pause/skip rules.
6. **Member stories** — 3 households (§8), long quotes with photos.
7. **Questions** — full FAQ (12 items).
8. **Waitlist** (newsletter page) — early-access signup for neighbourhoods not yet covered; short form, no reveal on form.
9. **About** — founded 2019, why "short", founders.
10. Thanks, Privacy, Terms (legal text, no motion).

## 7. Images (17, Grok, one at a time, Read each; ≤300 KB, ≤2000px, webp)
STYLE (identical for every image):
`Documentary real photograph, high-key natural window or morning daylight, soft shadows, quiet muted greens, raw wood, white walls and linen, shallow depth of field, 35mm lens, candid unposed people of diverse backgrounds, contemporary international city or countryside setting, no Japanese elements, no text, no logos, no brands, no labels, photorealistic, gentle film grain`
| id | Subject / composition | Ratio | Where (home = H) |
|---|---|---|---|
| hk-01 | Member (hands + torso, face partly turned) lowering a wooden crate of leafy greens onto a pale kitchen counter, big window left, wide framing, subject lower-middle, calm empty wall top-left | 16:10 | **H §1 hero** |
| hk-02 | Person at a city apartment table rinsing lettuce in a colander, portrait | 4:5 | **H §2** |
| hk-03 | Wide misty vegetable rows at dawn, low horizon, lots of sky | 21:9 | **H §3**, About head |
| hk-04 | Bunch of carrots with tops on a wooden board, top view | 3:2 | **H §4 card** |
| hk-05 | Kale and chard leaves in a crate corner, close | 3:2 | **H §4 card**, The crate page head |
| hk-06 | New potatoes and onions in a paper wrap | 3:2 | **H §4 card** |
| hk-07 | Herbs bundle (dill, parsley) tied with twine on linen | 3:2 | **H §4 card** |
| hk-17 | Radishes and spring onions washed, water drops, in a ceramic bowl | 3:2 | **H §4 card** |
| hk-08 | Inside a wooden packing barn, morning light through open door, people packing crates on a long table | 16:9 | **H §5**, Packing head |
| hk-09 | Grower cutting lettuce at 5am with a knife, headlamp off, blue dawn | 3:2 | **H §6 [5:00]** |
| hk-10 | Hands washing greens in a steel trough | 3:2 | **H §6 [7:30]**, Growers head |
| hk-11 | Stacked closed wooden crates by a van door | 3:2 | **H §6 [9:00]** |
| hk-12 | Open crate on a white table, all 9 kinds visible, top view | 3:2 | **H §7 plan**, Plans head |
| hk-13 | Delivery person carrying a crate up apartment stairs | 16:9 | Delivery head |
| hk-14 | Couple cooking together with the crate on the counter | 1:1 | **H §8**, Stories head |
| hk-15 | Empty crate returned at a doorstep with a folded paper bag | 16:9 | Waitlist head |
| hk-16 | Late-afternoon long table outdoors with a shared vegetable meal, wide | 21:9 | **H §10 join** |
17 images total (hk-01…hk-17). No cutouts, no text in images. Inner pages reuse at most one home image each and never twice on the same page.

## 8. Fixed numbers (same on home, inner pages, all 5 languages)
**Price list (6 items, USD):**
| Item | Price |
|---|---|
| Small crate (1–2 people, 6 kinds) | $24 / week |
| Standard crate (2–4 people, 9 kinds) | $32 / week |
| Large crate (4–6 people, 12 kinds) | $44 / week |
| Every-other-week standard crate | $34 / delivery |
| Add-on: a dozen free-range eggs | $7 |
| Add-on: herb bundle | $4 |
Delivery included within the 12 neighbourhoods; crate deposit $0 (crate returned next delivery). Home §7 shows rows 1–4.
**People (7):** Ines Calder (co-founder, grower relations); Tomas Achebe (co-founder, packing lead); Hana Moreau (Moreau Field, leaves); Rafael Ortiz (Ortiz Roots, carrots and beets); Priya Nair (Nair Herb Garden); Kwame Mensah (Mensah Hill, potatoes and onions); Lena Sorensen (delivery lead).
**Member stories (3):** the Park–Silva household (2 adults, Standard, since 2021); Amara Diallo (living alone, Small, every-other-week); the Weiss family (2 adults, 3 children, Large).
**Process (4 steps):** choose a crate → choose Tuesday or Thursday → crate arrives 14:00–19:00 → skip, swap or pause by Sunday 20:00.
**12 neighbourhoods:** Riverside, Old Mill, Canal Quarter, Northgate, Linden Park, Harbour Row, Elm Hill, Station Square, Westbrook, Fairfield, Southbank, Kestrel Heights.

## 9. Motion (sp-scroll only; hero no reveal)
| Effect | sp-* | Where | Source (yama-niwa) | Trigger / time / easing |
|---|---|---|---|---|
| Parallax | `sp-parallax` on the hero Cover (background image moves) | §1 hero, hk-01; also §10 join (hk-16) `--sp-par: 6%` | hero video/scrim scroll-linked | CSS scroll-driven `view()`; **`--sp-par: 8%` desktop, 5% at ≤600px (kept on mobile)**; text in Cover inner container, never in the moving layer |
| Staggered fade-up | `sp-stagger` + `sp-reveal sp-reveal--up` | §4 cards, §6 cards, §8 stories, header menu items | menu stagger 0.7s, delays .45/.6/.75, `cubic-bezier(.22,1,.36,1)` | IntersectionObserver once; set `--sp-dur:.7s; --sp-ease:cubic-bezier(.22,1,.36,1); --sp-dist:13px` (token .8rem); stagger 0.15s if variable available, else default 0.12s |
| Prose fade-up | `sp-reveal sp-reveal--up` | §2, §3 paragraphs, §7 heading (not the price table) | prose lines translateY .8rem | same values |
| Wipe | `sp-reveal--wipe` | §5 full-bleed barn photo, §4 triangle group | (complements triangle cut) | 1.1s `cubic-bezier(.77,0,.175,1)` |
Scrim (KV #6): CSS-only `@supports (animation-timeline: scroll())` on `.hg-hero::after`; disabled under `prefers-reduced-motion`, `html.sp-static`/`?sp-static`, and in the editor. Not a JS listener.
No reveal on hero, form, price table, legal text, FAQ.

## 10. Responsive
- 390px first screen: hero photo + H1 + sub-line + pill only; nav collapses; **no vertical text, no absolutely positioned labels over text**, H1 ≤ 2.1rem, max 3 lines.
- Triangle on mobile: 100% × 200px above cards, text inside never touches the hypotenuse (padding-right 40%).
- Price table: ≥782px full container width (`width:100%`), price column `white-space:nowrap; text-align:right`, min-width 9ch; <782px rows stack (item over price), every table stacks on mobile.
- Cards: 3 → 2 (≤1024) → 1 (≤600). No horizontal overflow at 390 or 1280.

## 11. Similarity targets (8/10, values from reference-tokens.md)
| Dimension | Reference | Hatake |
|---|---|---|
| Hero | full-bleed 16:10 photo, no mask (e) | full-bleed, max(88vh,640) photo, no mask |
| H1 | 40px/700/lh 1.5/ls .2em white bottom-left x60 (b) | clamp(2–3rem)/700/lh 1.5/ls .16em white, left 60 bottom 96 |
| Logo | green triangle 216×148 top-left (f) | sage triangle 168×116 top-left 0,0 |
| Nav | 3-col text grid x 640/820/1000 + pill 168×31 (b,c) | 3×2 anchor grid same x, pill 150×36 radius 9999 |
| Big triangle | ≈540×440 solid, clip-path (e) | 560×460 solid `#4E5A48` |
| Cards | 380, gap 50, 3:2, r0 (e,c) | ≈380, gap 50, 3:2, r0 |
| Card title | 28/700 green + [ tag ] 13px (b) | 26/700 sage + [ tag ] 13px |
| Body | 16 / 1.8 (b) | 16 / 1.8 |
| Sub cards | #F7F4EF r4 no shadow (a,d) | #EEF0EA r4 no shadow |
| Pills | 9999, outline 1px 150×46 (d) | 9999, filled + outline 1px 150×46 |
| Section gap | 186–224px (c) | 160–200px |
| Colour ratio | main 3–9%, white 45%, sub 10% (a) | main ≤4% / 9%, white 45–50%, sub 10% |
| Motion | .7s cubic-bezier(.22,1,.36,1), .15s stagger, translateY .8rem (g) | same values via sp-* vars |
| Scrim | black 0→.5 with scroll (g) | sage-black 0→.45, CSS scroll-driven |
| Decoration | ▶ label, ● play-dot, [ tag ] (f) | same three, own drawing |

## 12. Home acceptance checklist
- [ ] First screen 1440: full-bleed hk-01, tracked white H1 bottom-left, sub-line, triangle logo top-left, 3×2 anchor nav + "Join" pill; nothing else.
- [ ] All 6 KV checklist rows visible on desktop; 390px shows rows 1–4 + pill, no overlap.
- [ ] Sage triangle ≥520px wide at §4 with white label + H2 inside; 5 tagged 3:2 cards beside/below.
- [ ] §6 three cards with `[ 5:00 ] [ 7:30 ] [ 9:00 ]`.
- [ ] One CTA ("Join" → `/waitlist` or plan anchor) repeated in hero, §7, §10; same price $32 everywhere.
- [ ] ≥8 photos (spec: 15), none repeated, no text/logo in images.
- [ ] `sp-parallax` on hero passes check-parallax (≥6px desktop & mobile, 0 reduced-motion); ≥3 reveals.
- [ ] theme.json max size 4.5rem used on §3 and §10; fonts identical in editor and front end.
- [ ] Price table full-width ≥782, price column nowrap right; stacks on mobile.
- [ ] Saturated share first screen ≤15% (target ≤10%); auto-gates pass.
