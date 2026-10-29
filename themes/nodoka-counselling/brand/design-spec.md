# Nodoka Counselling: design spec (stage B, binding for implementation)

Row b19-1 · psychotherapy practice · type business · archetype split-screen · hero text-left-photo-right · nav centered · font_direction **sans** · IMAGERY **photo** (low-key).
Primary reference: https://yosugaclinic.com/okusawa/ (S5-Style #11638) · Secondary: https://mcares.co.jp/ (S5-Style #10898).
Tokens: `brand/reference-tokens.md` (cited below as [tok a]–[tok g]). Screenshots: `brand/ref/`.
Borrow structure, technique, colour relationships and the key-visual concept. Never copy their photos, copy, logo or a whole page layout. Photos and copy are our own.

---

## 1. Signature techniques (three; must be obvious at a glance; never soften them)

### T1. Quiet split first screen with a tall low-key photo window and three vertical pill tabs (yosuga first screen, `ref/yosuga-first.png`)
- **Reference:** cream column on the left (~33% of width) holds a small logo plus a 2-line caption top-left, a vertical one-line tagline at mid-height, and 2 lines of hours at the bottom. A near-square low-key interior photo (826×823 at 1440, x 469–1295) sits flush to the top, leaving a 145px empty ground strip at the right. Three dusty-peach vertical pill tabs (40×180, radius 20, 36px gaps, x 1187/1263/1339, y 660–838) straddle the photo's lower-right corner and the empty strip. A full-width 1px olive hairline at y 823, with a NEWS chip + date + one line under it.
- **Ours (home hero):** identical geometry at 1440×900 (header bar 72px included, see §5): left column x 60–469 on mist ground; photo window `img-hero-armchairs` x 469–1295, from y 72 (flush under the header bar, so it reads as flush top) to y 823, object-fit cover, radius 0; three clay pill tabs **Book a first talk / Ask by email / Online session** (40×180, radius 20px, 36px gaps, x 1187 / 1263 / 1339, y 660–840), vertical text (writing-mode vertical-rl, Latin rotated), 0.75rem, letter-spacing .12em, ink #2F3A40 on #DBC2B6; 1px hairline #5C6B73 x 60–1380 at y 823; under it a clay chip "NOTICE" (84×26, radius 0) + date "2026.10.30" + "Evening slots are open on Thursdays until 21:00."
- **Must not soften:** the photo is ≥57% of viewport width and ≥80% of viewport height; there is a visible empty mist strip to the right of the photo (≥120px); the tabs are vertical, overlap the photo edge, and stay clay (not steel, not white); the hairline runs full width; the left column remains mostly empty ground (no paragraph, no button there).
- **Mobile (<782):** no vertical text, no absolute positioning. Order: logo + caption → tagline as 2 horizontal lines (1.5rem) → photo full width (gutter 20px, 4:5) → three tabs become one horizontal row of 3 equal pills (height 44px, radius 22px, flex, wrap allowed) → hours 2 lines → hairline → notice (chip on its own line).

### T2. Offset square photo + loose column of short poem lines low on the right, with large empty ground between (yosuga About, `ref/yosuga-s1.png`)
- **Reference:** square-ish photo (531×567, 0.94:1, no radius) at x 146, y 267; text column starts x 820 and sits low (top at y ~440, bottom aligned to the photo bottom ±20px); 14px lines, 0.08em tracking, 40px line pitch, short lines (≤ 26 Japanese chars), stanzas split by one empty line; the gap between photo and text is ~140px of pure ground.
- **Ours (home block 2 "Why a quiet room"):** `img-plaster-leaf` at x 146–677 (0.94:1), text column x 820–1240, bottom-aligned with the photo. Copy written as short lines (max ~48 Latin chars per line, each line its own `<br>`-broken line inside a paragraph), 3 stanzas, 0.9375rem, line-height 40px fixed (2.67), letter-spacing .06em (Latin) / .08em (CJK). No heading larger than 0.8125rem label in this block.
- **Must not soften:** text column must start lower than the photo top by ≥160px; the empty gap stays ≥120px; lines stay short (do not let it reflow into a normal wide paragraph); no card, no background tint.
- **Mobile:** photo full width (gutter 20px, aspect 0.94:1 kept), text below with 48px gap; line breaks kept only where a line ≤ 34 chars (use `<br class="sp-br-desk">` hidden <782 for the long ones).

### T3. Ruled section opener: full-width 1px rule, big light Latin title + small sub-label at left, short lead at right (yosuga Medical Menu, `ref/yosuga-s2.png`)
- **Reference:** 1px olive hairline across the container (x 61–1379); ~270px of ground below it; title "Medical Menu" ~48px light grotesque at x 146, sub-label 14px under it; lead text (2 lines, 14px, 40px pitch) starts at x 538, top-aligned with the title. Above that, the current section name sits underlined in the top bar.
- **Ours:** every home section from block 3 onward opens with: 1px hairline #5C6B73 across the 1320 container → padding-top 160px → grid `minmax(0,392px) 1fr`: title (Instrument Sans 400, font-size xx-large = clamp(2.75rem, 4.4vw, 4.25rem), line-height 1.15, letter-spacing -.01em, colour steel #5C6B73) with a sub-label under it (0.8125rem, letter-spacing .12em, ink) → lead on the right column (max 560px, 0.9375rem, line-height 40px). Header "section label": the header shows the **current page name** underlined (1px, 6px offset) in the centered nav as `aria-current` style. No scroll listener (scroll-swap not built; sp-reveal on opener heads instead).
- **Must not soften:** the rule is full container width and visible (1px #5C6B73, not a pale grey); the title is clearly bigger than anything else in the block; title at left / lead at right split stays at ≥782.
- **Mobile:** rule → title → sub-label → lead stacked, title clamp min 2.25rem, padding-top 88px.

### Supporting (not counted; secondary site)
- **T4 (mcares About, `ref/mcares-s1.png`):** rounded 20px photo pair, the smaller photo overlapping the lower-left corner of the larger one by ~110px horizontally / ~175px vertically. Used once on home for the practitioners (block 6) and on the Practitioners and About pages. Radius 20px only on these pairs (everywhere else radius 0, [tok d]).

### Continuation to inner pages (each technique on ≥4 inner pages)
| Page | T1 split window | T2 offset square + poem lines | T3 ruled opener | T4 rounded pair |
|---|---|---|---|---|
| About the practice | page hero (compact) | ✓ founder note | ✓ | ✓ |
| Our approach | page hero | ✓ "what we believe" | ✓ | — |
| What we help with | page hero | — | ✓ (per difficulty group) | — |
| Your first conversation | page hero | ✓ "what the room is like" | ✓ | — |
| Practitioners | page hero | — | ✓ | ✓ (founder + lead) |
| Fees & hours | page hero | — | ✓ | — |
| Online sessions | page hero | ✓ | ✓ | — |
| Stories | page hero | ✓ (one per story) | ✓ | — |
| Questions (FAQ) | page hero (no tabs) | — | ✓ | — |
| Contact & booking | page hero | — | ✓ | — |

Inner-page hero = "compact T1": same left column / photo window / empty right strip, but height 560px at 1440 (photo x 469–1295, y 72–560), page title (Instrument Sans 400, 3rem) in the left column lower third, small breadcrumb-like sub-label above it, the three clay vertical tabs straddling the photo's lower-right as on home, hairline at the bottom of the photo. Mobile: same stacked order as home hero. Each inner hero uses a different photo (see §7).

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
yosugaclinic.com/okusawa opens on a hushed clinic reception in low-key light: two opal pendant lamps glowing against a warm brown wall, a white counter, blurred pale flowers in the foreground, set as a tall photo window beside a cream column whose only words are a vertical tagline ("a place to lean on, for mind and body"), a small logo and the hours. The story is "this is not a hospital you rush into but a place to consult; a quiet light that is always there". Signature motion: a slow ~2s intro where the photo settles, then gentle fade + small rise on everything else as you scroll (GSAP ScrollTrigger, .5–.6s, power1.out), with three peach tabs always available at the lower right.

### (2) Our translation (psychotherapy practice; same composition, same motion idea, same image type: low-key real photography)
The same hushed room, now a therapy room: **two armchairs angled toward each other, a small side table with a closed notebook and a glass of water, afternoon window light falling across a plaster wall, one warm lamp glowing** — the equivalent of the pendant lamps. Story: "a room held quiet for you to talk something through; nobody is in a hurry". The tall photo window settles slowly (CSS scale 1.06→1 over 2s on load, then `sp-parallax` drift on scroll); the vertical tagline "A room to talk it through." stands alone in the mist column; three clay tabs give the three ways in (book, email, online).

### (3) KV checklist (every row built on the first screen, visible at 1440×900; mobile per T1 mobile rules)
| # | Reference element | Our counterpart | Position (1440×900) | Motion | Photo |
|---|---|---|---|---|---|
| 1 | Tall low-key reception photo window (826×823, pendant lamps glowing) | Two armchairs facing each other, closed notebook on side table, lamp glow, afternoon window light | x 469–1295, y 72–823 | Load: scale 1.06→1, 2s, cubic-bezier(.25,.46,.45,.94) (CSS animation, not reveal); scroll: `sp-parallax` `--sp-par:8%` (mobile 5%) | `img-hero-armchairs` |
| 2 | Vertical one-line tagline in the cream column | h1 "A room to talk it through." vertical-rl, Latin rotated, 2rem, letter-spacing .14em, steel #5C6B73 | left column, x ≈ 220, y 290–600 | static | — |
| 3 | Three peach vertical pill tabs lower-right (WEB booking / LINE / online) | Three clay vertical pill tabs: Book a first talk / Ask by email / Online session | x 1187 / 1263 / 1339, y 660–840, straddling photo edge | hover: translateY(-4px), .3s ease-out; no scroll motion | — |
| 4 | Small logo + 2-line caption top-left | Wordmark "Nodoka Counselling" (Instrument Sans 500, 1.125rem) + 2-line caption "Psychotherapy & counselling / by appointment, Alder Row" (0.75rem, .1em) | in header bar, x 60, y 18–64 | static | — |
| 5 | Hours text, full-width hairline, NEWS chip + one line | "Monday–Friday 9:00–20:00 (Thu to 21:00) / Saturday 9:00–15:00" + hairline + clay NOTICE chip + date + one line | hours x 60, y 735–790; hairline y 823; notice y 848–874 | none | — |
| 6 | Three-line menu icon top-right | Centered nav in the thin header bar (row: nav centered) + three 1px×38px vertical lines as the mobile menu icon | header bar y 0–72; mobile icon top-right | none | — |

Visible check at 1440×900: photo, vertical tagline, 3 tabs, wordmark+caption, hours+hairline+notice, nav — all six in the first viewport.

---

## 3. Colour (reference relationships; steel family per row)

Reference [tok a]: ground #EDE8DE 70% · olive heading #58633E · dark ink #3B3720 · peach tab #DBC2B6 ~2% · low-key photo ~33% width; saturated share 10.2%.
**Change and reason:** the row fixes palette 青鈍 / steel #5C6B73 and common.md forbids defaulting to beige; Yuragi Spa (last shipped) was warm. So the beige ground moves to a cool mist with the *same lightness* (#EDE8DE L≈90% → #E9ECEC L≈92%, +2%), olive heading → steel (same role, same mid-dark value), dark ink → steel ink. The peach tab is kept at the **reference hex** — it is the warm note against the cool ground exactly as on yosuga.

| Role | Hex | Share (first screen) | Source |
|---|---|---|---|
| Ground (mist) | #E9ECEC | ~62% | ref ground #EDE8DE, cooled, L +2% |
| Ground alt (deeper mist, used for 2 home bands: fees, footer) | #DDE2E3 | 0% fs | derived −5% L |
| Heading / rules / links (steel) | #5C6B73 | ~4% (text+hairline) | row hex; ref olive heading role |
| Body ink | #2F3A40 | ~6% | ref dark ink #3B3720 role |
| Muted text (captions, dates) | #6E7B82 | ~1% | steel +8% L |
| Tab / chip accent (clay-peach) | #DBC2B6 | ~2% | ref tab hex, unchanged |
| Button fill (primary, rare) | #5C6B73 with text #F4F6F6 | 0% fs (CTA block only) | ref button role |
| Photo low-key tones | #3A322D / #8A6F5B / lamp #E8B48C | ~25% of screen (photo area) | our photo |
| White (field backgrounds only) | #F4F6F6 | — | — |

- **First-screen saturated share ≤ 15% hard cap** (scripts/check-first-screen.py); target ≈ 6% (lamp glow is the only saturated area; keep the lamp small, ≤ 4% of the photo). Ref measured 10.2%.
- No dark full-width sections; footer is #DDE2E3 with ink text (reference has no dark blocks). The only dark area is the block 5 photo band.
- Contrast: ink on mist 10.6:1; steel on mist 4.9:1 (OK for text ≥ 14px); ink on clay 7.1:1.

## 4. Type (font_direction **sans**)

- Latin headings: **Instrument Sans** (variable 400–700). Latin body: **Public Sans** (variable 300–700). Both sans; no serif anywhere.
- CJK: **Noto Sans TC** (zh-TW), **Noto Sans JP** (ja), 400 + 500 — 黑體 for headings and body; never Noto Serif.
- Stacks (theme.json fontFamilies):
  - `heading`: "Instrument Sans", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif
  - `body`: "Public Sans", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif
  - `:lang(ja)` reorders to "Noto Sans JP" before TC; `:lang(zh-TW)` TC first. Because style.css uses `:lang(`, copy `shared/inc/editor-lang.php` verbatim to `inc/editor-lang.php` and `require_once` it in functions.php.
- Loading: all four families via **theme.json fontFace** (woff2 in assets/fonts), so the editor iframe and front end render the same; zh-TW and ja subset files (Hokuto/Hada replacement method, not the broken subset script). check-editor-fonts.mjs must pass in en and zh-TW.

| Token (theme.json) | Size | Weight | Line-height | Tracking | Use | Source |
|---|---|---|---|---|---|---|
| xx-large | clamp(2.75rem, 4.4vw, **4.25rem**) | 400 | 1.15 | -.01em | T3 section titles | ref "Medical Menu" 48px light; scaled up to meet ≥4.25rem rule |
| x-large | clamp(2rem, 3vw, 3rem) | 400 | 1.2 | 0 | inner page titles | — |
| large | 1.5rem | 400 | 1.67 (40px) | .02em | H3, difficulty list items | ref H3 24px/40px |
| hero tagline | 2rem | 400 | 1.6 | .14em | vertical h1 | ref vertical tagline |
| medium | 1.125rem | 500 | 1.6 | .02em | wordmark, card heads | — |
| body | 0.9375rem (15px) | 400 | 1.87 (28px); poem lines 40px | .04em Latin / .08em CJK | body | ref 14px/28px/.08em, +1px for Latin legibility |
| small | 0.8125rem | 400 | 1.6 | .12em | sub-labels, tabs text 0.75rem | ref sub-label |
- CJK sizes ≈ 0.75× of Latin display sizes (xx-large CJK clamp(2rem,3.3vw,3.2rem)); CJK body line-height 1.85; fr/de `hyphens:auto`.

## 5. Header, footer, global
- **Header bar** (single top menu): 72px, mist ground, bottom 0 border (the photo window starts right under it). Wordmark+caption left (x 60), centered nav (5 links: About · What we help with · First conversation · Practitioners · Fees & hours; 0.8125rem, .12em; current page underlined 1px, offset 6px = T3 header label), right: language switcher (small) + text link "Book" (steel, underlined). Not sticky. <960: nav collapses to the three-vertical-line icon (3 × 1px × 38px, 8px gaps, [tok f]).
- Page gutter 60px (≥1280), 40px (782–1279), 20px (<782) [tok c]. Container 1320px [tok c]. Section padding-top 160px / bottom 120px at desktop (ref 160–266 [tok c]); 88/72 mobile.
- Radius: photos 0, tabs 20px pill, buttons 10px, T4 pair 20px [tok d]. Borders 1px #5C6B73. **No shadows anywhere.**
- Buttons: outline 1px steel, radius 10px, 14px/.1em text, padding 14px 28px; primary fill only in the final CTA.
- Footer: #DDE2E3, 3 columns (address+hours / pages / contact), wordmark, hairline above copyright, the three clay tabs repeated horizontally as small pills.

## 6. Scroll techniques (sp-scroll copied verbatim from pipeline/assets/sp-scroll; only CSS vars tuned)
| # | Effect (sp class) | Applied to | Source site · trigger · time · easing | Our vars |
|---|---|---|---|---|
| 1 | `sp-reveal--up` + `sp-stagger` | T2 poem-line paragraphs (each stanza), T3 opener head (title+sub-label) and lead, the difficulty index rows (block 3), the 3 hairline columns (block 4), story rows | yosuga · GSAP ScrollTrigger at ~80% viewport · .5–.6s, stagger by line · power1.out | `--sp-dur:.6s; --sp-dist:20px`; stagger step 90ms; easing cubic-bezier(.25,.46,.45,.94) |
| 2 | `sp-reveal--up` on the rounded pair (figures wrapper only) | block 6 practitioner pair, About & Practitioners T4 pairs | mcares · enter viewport · ~.8s · ease-out | `--sp-dur:.8s; --sp-dist:28px` |
| 3 | `sp-parallax` | hero photo window (home + inner heroes) and the full-bleed band (block 5) | yosuga hero 2s settle; mcares pinned hero shrinking into ground (ScrollTrigger pin, scrub) → substituted by parallax | see below |
- Hero: **no reveal** (only the CSS load-settle on the image, disabled under prefers-reduced-motion and in the editor). No reveal on the fee table, form, legal text, or the notice strip.
- Reveal distance ≤30px, transform only; hidden state only under `html.sp-js` selectors; reduced-motion = final state; `?sp-static` for screenshots.

### Parallax (required)
1. **Home hero (block 1):** outer group `sp-parallax` with the photo as `figure>img` (`img-hero-armchairs`), image height 112% of the window, `--sp-par:8%` desktop / `5%` mobile. Foreground (tagline, tabs, hours) is outside the moving layer. Reference counterpart: yosuga 2s hero settle + mcares pinned hero drifting into the ground.
2. **Home block 5 full-bleed band:** Cover block 100vw × 560px (mobile 420px), background `img-corridor-door`, `sp-parallax` `--sp-par:10%` (mobile 6%); foreground: no card — one line of text in mist #E9ECEC on the dark photo, bottom-left at gutter, 1.5rem: "Nothing you say here needs to be finished." (static, not in the moving layer).
3. Inner heroes reuse rule 1 with `--sp-par:6%`.
- check-parallax.mjs must show ≥6px offset on desktop and mobile, 0 under reduced-motion.

---

## 7. Photos (16; real photography; Grok one at a time; read every image)
**STYLE (one string for every photo):**
`Low-key documentary interior photograph, warm-neutral palette of umber, taupe and soft grey, single soft window light from the side in late afternoon, deep gentle shadows, fine film grain, shallow depth of field, matte plaster walls, linen and oak textures, calm and unhurried, modern international setting, no Japanese elements, no text, no logos, no brands, no visible faces unless stated, 35mm lens, natural colour, slightly muted`

People appear only from behind / in profile turned away / as hands; diverse when visible. No text on notebooks or books. ≤300 KB, ≤2000px, webp. 0 cut-outs.

| # | File | Subject & composition | Ratio | Used on (page · block) | Home |
|---|---|---|---|---|---|
| 1 | img-hero-armchairs | Two upholstered armchairs angled toward each other, small oak side table between with a closed plain notebook and a glass of water, a warm table lamp glowing at the left, window light across the plaster wall; chairs in lower half, wall space above | 1.1:1 | Home · hero (KV 1) | ★ |
| 2 | img-plaster-leaf | Close plaster wall with diagonal sunlight and soft leaf shadows of a potted olive tree, a few leaves at the right edge | 0.94:1 | Home · block 2 (T2) | ★ |
| 3 | img-window-rain | Tall window with a sheer curtain, grey rain light outside, a chair arm in the foreground out of focus | 4:5 | Home · block 3 (difficulties) | ★ |
| 4 | img-notebook-tea | Side table top: closed notebook, pencil, ceramic cup of tea, a box of tissues (plain, no print), top-down at 30° | 4:3 | Home · block 4 (first conversation) | ★ |
| 5 | img-corridor-door | Quiet corridor, a door left ajar with warm lamp light spilling onto an oak floor; dark, wide | 16:7 | Home · block 5 full-bleed parallax | ★ |
| 6 | img-practitioner-mira | Woman therapist in her 50s seated in an armchair, seen in profile turned toward a window, grey hair tied back, knit cardigan, hands holding a notebook | 4:5 | Home · block 6 (large of pair); Practitioners | ★ |
| 7 | img-practitioner-tomas | Man in his 40s, seen from behind at three-quarter, sitting on a bench by a bookshelf (book spines blurred, no titles), dark skin, linen shirt | 1:1 | Home · block 6 (small of pair); Practitioners | ★ |
| 8 | img-lamp-desk | Small writing desk by a window at dusk, lamp on, an empty chair pulled back | 4:5 | Home · block 7 (stories) | ★ |
| 9 | img-entrance | Building entrance: plain wooden door with brass handle, potted plant, soft morning light, no signage | 4:5 | Home · block 9 (CTA) | ★ |
| 10 | img-waiting-bench | Small waiting area: oak bench, folded wool blanket, water carafe and glasses | 1.1:1 | About · hero | |
| 11 | img-hands-cup | Two hands around a ceramic mug resting on a knee, linen trousers, side light | 1:1 | Our approach · hero; About · T4 small | |
| 12 | img-couch-cushion | Two-seat sofa with a cushion and a folded throw, wall lamp, space for two | 1.1:1 | What we help with · hero | |
| 13 | img-room-wide | Wider view of the therapy room: two chairs, rug, plant, window — establishing shot | 1.1:1 | First conversation · hero; About · T4 large | |
| 14 | img-laptop-online | Laptop open on a wooden table at home (screen dark/blurred, nothing readable), headphones, a plant, evening light | 1.1:1 | Online sessions · hero | |
| 15 | img-stair-light | Stairwell with a long rectangle of sunlight on a plaster wall, handrail | 0.94:1 | Practitioners · hero | |
| 16 | img-clock-shelf | Shelf with a simple wall clock (no brand, plain face, no numerals), a vase with a single branch | 1.1:1 | Fees & hours · hero; Our approach · T2 | |

Same photo never twice on one page. Home uses 9 photos (#1–#9) in 9 positions (≥8 required).

---

## 8. Home page (en first; ≥ 350 English words, ≥ 3 narrative paragraphs; narrative-problem-method-proof)

### First screen (1440×900)
Header bar 72px → left mist column (x 60–469): vertical tagline h1 at x≈220, y 290–600; hours at y 735–790 → photo window x 469–1295, y 72–823 → empty mist strip 1295–1440 → 3 clay vertical tabs straddling photo lower-right → hairline y 823 → notice strip y 848–874. Nothing else. No body paragraph, no buttons besides the tabs.

### Block order
| # | Block | Purpose | Layout | Photo | Copy |
|---|---|---|---|---|---|
| 1 | Hero (T1) | KV: the quiet room | split window, tabs, hairline, notice | #1 armchairs | tagline 6 words, hours 2 lines, notice 1 line |
| 2 | Why a quiet room (T2) | the problem, said softly | square photo left, poem lines low right | #2 plaster-leaf | 3 stanzas, ~95 words; small label "About the practice" + text link "Read about us" |
| 3 | What the room is for (T3) | the difficulties | ruled opener (title "What the room is for", lead right) → below: grid 7fr/5fr: left = **index list** of 7 difficulties as rows (number "01" small steel + name at large 1.5rem + one-line description at body size, 1px hairline between rows, row height ~96px); right = tall photo, sticky-free, top-aligned with row 1 | #3 window-rain | 7 × ~14 words + lead 40 words |
| 4 | How a first conversation is arranged (T3) | the method | ruled opener → 3 columns separated by 1px vertical hairlines labelled **Before / During / After** (small label .12em, heading large, 50–60 words each) → below them a 4:3 photo at right 5/12 with a 2-line note at left ("The first conversation is €70 and carries no obligation to continue.") | #4 notebook-tea | ~190 words |
| 5 | Full-bleed band | pause / breath | Cover 560px, parallax 10% | #5 corridor-door | one line |
| 6 | Who sits with you (T3 + T4) | the people | ruled opener → left: rounded 20px pair (large 4:5 at 520px wide, small 1:1 at 300px overlapping its lower-left by 110/175px); right: 2 short bios (Mira, Tomas: name medium, role small, 40 words) + a plain list of the other 4 names with roles + link "Meet all six" | #6 mira, #7 tomas | ~150 words |
| 7 | Stories (proof) (T3) | proof without claims | ruled opener (lead: "Composite stories, shared with permission and with details changed.") → left 4:5 photo 37% wide; right: 3 story rows (title large, 2 sentences, sessions count small, hairline between) | #8 lamp-desk | ~150 words |
| 8 | Fees & hours | practical | #DDE2E3 band; ruled opener → **full-width fee table** (7 rows; name left, duration middle, price right nowrap) → hours as 3 short lines + address at right of a 2-col row under the table | — | table + 40 words |
| 9 | Questions & first step | close | left: 3 FAQ items as `<details>` (no reveal on them) + link "All questions"; right: 4:5 photo with, under it, the CTA text "When you are ready, write a line or two. We reply within one working day." + primary button "Book a first talk" + outline button "Ask by email" | #9 entrance | ~120 words |

Narrative paragraphs: block 2 (stanzas count as 1 narrative), block 4 intro lead, block 7 stories, block 9 CTA text. Total ≥ 350 words.

### Comparison with recent themes (block order must not repeat)
| Theme | Home order | Ours differs because |
|---|---|---|
| Yuragi Spa | full-bleed photo with contrast-word triplet → bracket labels → letterbox band … | ours is split (not full-bleed) hero, no counters, no bracket labels; our band is 560px parallax pause not a 3.75:1 letterbox with card |
| Saji Culinary | framed hero w/ timeline → intro → day rail → ruled cards → visit band | no timeline, no rail, no cards; index list rows instead |
| Tsuya Jewellers | framed photo + caption strip → offset pair → tiles → commissions → visit | our hero is a split window with vertical tabs, not framed+strip; no tile grid |
| Kairo Supply | hero w/ shadow → pinned stage → door cards → who → rows → photos → cover → stories | no pinned stage, no cards, no shadow |
| Hibi Wear (writing reference) | dot label + 2-line heading, rounded portrait on band, before/after split | we use full ruled openers with big light Latin title; no before/after, no band portraits |
Ours: split window → poem lines → index list → 3 hairline columns → parallax band → rounded pair people → stories rows → fee table → FAQ+CTA.

## 9. Inner pages (10 + 404 + blog index/single using the same opener)
1. **About the practice** — compact hero #10; T2 founder note with #2; T4 pair #13 (large) + #11 (small); story of founding 2014 by Mira Halden; values (3 short rows); the room (where, accessibility: step-free entrance, lift).
2. **Our approach** — hero #11; T2 "what we believe" poem lines with #16; modalities explained plainly: integrative psychotherapy, CBT-informed work, person-centred counselling, couples work (rows, no cards); confidentiality and its limits (plain text, no reveal).
3. **What we help with** — hero #12; 7 difficulties, each a T3 mini-opener (rule + title + lead) with 3 bullet signs "you might notice" and "how we usually work"; note on urgent help: "We are not an emergency service. If you are in danger, call your local emergency number."
4. **Your first conversation** — hero #13; Before / During / After expanded (same 3-column hairline layout), what to bring, cost €70, how to cancel (24h), T2 "what the room is like" with #4 notebook-tea.
5. **Practitioners** — hero #15; T4 pair (#6, #7); 6 people as **rows** (name, role, languages, focus, 50 words), not a grid.
6. **Fees & hours** — hero #16; full-width fee table (7 rows), payment & receipts, sliding-scale places (4 per week), cancellation, hours table (stacked on mobile), holidays.
7. **Online sessions** — hero #14; T2 block (#3); how video sessions work, privacy, what you need, same fees.
8. **Stories** — hero #8; 3 composite stories each as T2 (photos #2, #9, #12), each ~200 words.
9. **Questions** — hero #2; 12 FAQ `<details>` grouped under 3 T3 openers (Before / Sessions / Fees & privacy).
10. **Contact & booking** — hero #9; form (name, email, preferred contact, preferred times, short message; no reveal), address, hours, map placeholder as plain text directions (no iframe), the three ways (tabs) as rows.
Each page ≥ 1 T3 opener; pages 1, 2, 4, 7, 8 carry T2; all carry compact T1. Cross-page reuse is allowed; same photo twice on one page is not (assignment above already satisfies this).

## 10. Fixed facts (identical on every page and in all five languages)
- Name: Nodoka Counselling. Founded **2014** by Mira Halden. Address: **2F, 18 Alder Row, Riverside District** (fictional). Step-free entrance, lift.
- Hours: **Mon–Fri 9:00–20:00 (Thursday until 21:00), Sat 9:00–15:00, Sun & public holidays closed.** Reply to messages within one working day.
- Fees (EUR, 7 items):
  | Item | Duration | Price |
  |---|---|---|
  | Check-in call | 20 min | Free |
  | First conversation | 50 min | €70 |
  | Individual session | 50 min | €95 |
  | Extended session | 80 min | €140 |
  | Couples session | 80 min | €160 |
  | Online session | 50 min | €90 |
  | Series of five individual sessions | 5 × 50 min | €450 |
  Cancellation: free up to 24 h before. Sliding-scale places: 4 per week.
- People (6): **Mira Halden** — founder, clinical psychologist (anxiety, low mood) · **Tomas Reyes** — psychotherapist (couples, relationships) · **Anika Voss** — counsellor (grief and loss) · **Lin Qiao** — psychotherapist (anxiety, life changes; Mandarin & English) · **Samuel Okafor** — counsellor (work stress, burnout) · **Hana Lindqvist** — intake coordinator (first contact, scheduling).
- Difficulties (7): Anxiety & worry · Low mood · Grief & loss · Work stress & burnout · Relationships & couples · Life changes · Sleep & restlessness.
- Process (shown as Before / During / After): Before = write or call → free 20-min check-in call; During = first conversation, 50 min, €70; After = decide together whether and how to continue; no obligation.
- Stories (3, composite, details changed): "The Sunday dread" (work, 12 sessions) · "After the move" (life change/loneliness, 8 sessions) · "Two people, one kitchen table" (couple, 10 sessions).
- Notice: "Evening slots are open on Thursdays until 21:00."
- Forbidden: guarantees, cure claims, success rates, awards, real media, real people/brands. Always include the not-an-emergency-service note on What we help with, FAQ and Contact.

## 11. Responsive rules
- **390px first screen:** no vertical text, no absolutely positioned labels/tabs, nothing overlapping (auto-gates text-overlap check). Tabs become a horizontal row in normal flow. Vertical writing (`writing-mode`) applies only ≥782px.
- **Fee table ≥782px:** full container width (100% of 1320 / gutter), `table-layout:auto`, price column `white-space:nowrap; text-align:right`, duration column nowrap, no overflow or clipping at 800 and 1280.
- **All tables <782px:** stacked (each row becomes a block: name on its own line, duration + price on one line, price right-aligned).
- No horizontal overflow at 390 and 1280; parallax image layer clipped by the wrapper (overflow hidden on the wrapper, not clip-path on the observed element).
- T3 opener grid collapses <782; T4 pair keeps overlap on mobile but scaled (large 88vw, small 52vw, overlap 40px).

## 12. Home acceptance checklist
- [ ] Header 72px, centered nav, single menu; current-page underline.
- [ ] KV checklist rows 1–6 all visible at 1440×900; photo ≥57% width, empty right strip ≥120px; tabs vertical clay #DBC2B6 straddling photo; hairline full width; notice strip.
- [ ] Hero photo settles (2s) and has `sp-parallax` 8% (mobile 5%); no reveal on hero.
- [ ] T2 block: photo 0.94:1 left at ~37% width, text low right, short lines at 40px pitch, gap ≥120px.
- [ ] T3 openers on blocks 3, 4, 6, 7, 8 with full 1px steel rule and xx-large (4.25rem at ≥1440) title left / lead right.
- [ ] Block 5 parallax band 560px, `--sp-par:10%`, check-parallax.mjs passes desktop + mobile.
- [ ] Practitioner rounded pair (radius 20, overlap) — only place with rounded photos on home.
- [ ] 9 photos in 9 positions, no repeats, no faces except profile/turned-away, no text/logos.
- [ ] Fee table full width at 800/1280, prices nowrap right; stacked at 390.
- [ ] First-screen saturated share ≤15% (target ≈6%).
- [ ] Fonts: Instrument Sans headings / Public Sans body, Noto Sans TC/JP fallback, loaded via theme.json fontFace; editor = front end.
- [ ] ≥350 English words, ≥3 narrative paragraphs; numbers match §10.
- [ ] auto-gates.mjs en pass (`1 1`), no reveal leftovers under ?sp-motion.

## 13. Similarity table (target 80%)
| Dimension | Reference value [tok] | Nodoka value |
|---|---|---|
| Ground colour | #EDE8DE, ~70% [a] | #E9ECEC (+2% L, cooled for steel row), ~62% |
| Heading colour | olive #58633E [a] | steel #5C6B73 (same role/value) |
| Ink | #3B3720 [a] | #2F3A40 |
| Accent tabs | #DBC2B6, ~2% [a] | #DBC2B6, ~2% (unchanged) |
| Saturated share fs | 10.2% [a] | ≤15%, target ≈6% |
| Body type | 14px / 28px / .08em, 400 [b] | 15px / 28px / .04em Latin, .08em CJK, 400 |
| Section title | ~48px light grotesque [b] | Instrument Sans 400, up to 68px (4.25rem rule) |
| H3 | 24px / 40px [b] | 1.5rem / 40px |
| Poem line pitch | 40px [b] | 40px |
| Gutter / container | 60px / ~1320 [c] | 60px / 1320 |
| Section padding-top | 160–266px [c] | 160px (opener) |
| Hero photo | x469–1295, 826 wide, ≈1:1, flush top [c][e] | x469–1295, 826 × 751 (1.1:1), flush under 72px bar |
| About photo | 531×567 (0.94:1), x146 [e] | 531 × 565 (0.94:1), x146 |
| Photo radius / masks | 0, none [d][e] | 0, none (except T4 pair 20px from secondary) |
| Tabs | 40×180 pill r20, 36px gaps, x1187/1263/1339 [f] | identical |
| Hairline | 1px olive full width [d][f] | 1px steel full container width |
| News chip | peach 84×26 [f] | clay 84×26 "NOTICE" |
| Menu icon | 3 × 1px × 38px lines [f] | same (mobile) |
| Buttons | radius 10px [d] | radius 10px |
| Shadows | none [d] | none |
| Motion | fade+rise .5–.6s power1.out; hero 2s [g] | sp-reveal--up .6s cubic-bezier(.25,.46,.45,.94), 20px, stagger 90ms; hero 2s settle + parallax 8% |
| Imagery | low-key warm interiors, grain, plaster + leaf shadow [e] | same type: low-key warm interiors, grain, plaster + leaf shadow (our photos) |
