# Yukisaki Route: design spec (stage 1, binding for implementation)

Slug `yukisaki-route`, row b20-5 · type **landing** (one long conversion page, anchor menu, one repeated CTA "Start the 14-day trial"; plus inner pages) · category business-services · header required · `font_direction` **sans** · **Imagery: photo** (stage-a IMAGERY: photo; low-key documentary per row `photo_direction`).

Reference: Hacobu, https://hacobu.jp/ · Secondary (CTA shape only): Mujin, https://mujin-corp.com/. Screens in `brand/ref/`. Numbers cite `brand/reference-tokens.md` as **tok(a)…tok(g)**. Photos, copy and logo are ours; never reuse Hacobu or Mujin images, text, the MOVO mark or the HACOBU wordmark.

Decision that changes stage-a: **the accent stays the reference red `#E6172C`**, not stage-a's amber `#D9893B`, and the dark tones stay tok(a) `#313131` / `#262626`, not `#24313B`. The brief allows a colour swap only when the industry clearly does not fit; Hacobu is the same industry. Red also has a reason in the picture: it is the van's tail-light colour. The row's iron blue `#3E5160` stays as the colour of the photo grade and overlay (see §2).

---

## 0. The product in one paragraph (all copy grows from this)

Yukisaki Route is a software desk that lays out the morning delivery round for small regional courier firms. The dispatcher imports the day's addresses the evening before or at 05:30, the software puts each van's stops in road order, the dispatcher corrects what they know better (a gate code, a shop that opens late), and each driver gets **one printed round sheet**, also on the phone. The site sells one thing: a 14-day free trial.

---

## 1. Signature techniques (three, obvious at a glance)

### T1. White dossier card (Hacobu service cards, https://hacobu.jp/, `ref/scroll-hacobu-card-after.png`)
- **Reference:** a big white card, r10, soft wide shadow, a 470 px square photo left, right column: product lockup, pale grey sub-label, paragraph, then an outline pill beside a filled pill.
- **Ours:** home block 2 (two cards) and block 6 (third card).
- **Geometry (1440):** card width 1120, centred [tok c], padding 50 [tok c], white, `border-radius:10px`, `box-shadow:0 5px 30px rgba(0,0,0,.08)` [tok d]. CSS grid `470px 1fr`, column gap 80 [tok c]. Photo 1:1, 470×470, r5 [tok d, e]. Vertical stack in the right column, top-aligned with the photo: lockup (24 px red route-mark + word in Hanken Grotesk 600 1.75rem, tracking .04em) → sub-label 1rem `#808080` → 1.5rem gap → paragraph 1rem lh 1.8 → 2rem gap → paired buttons: outline pill (white, 1 px `#E6172C`, red text, r25, height 50) + T3 CTA. Cards stack with 80 px gap.
- **Hover:** photo inside `overflow:clip` r5 frame scales to 1.04 in 0.6s `cubic-bezier(.2,.12,.2,1)` [tok g].
- **Must not be diluted:** card stays pure white on `#FAFAFA` with the shadow visible, the photo stays 1:1 and 470 px at 1440 (not a thumbnail), the paired buttons stay side by side on desktop, and the grey sub-label stays. No coloured card ground.

### T2. Frosted statement panel on a blurred ground (Hacobu "the world we aim for", https://hacobu.jp/, `ref/hacobu-frost.png`)
- **Reference:** full-bleed pale blurred architectural photo; bold centred title and one line over the ground; below it a 1030 px translucent white panel, r8, 1 px light border, holding one wide Latin display line + a 3-line statement at left, red pill vertically centred at right.
- **Ours:** home block 3.
- **Geometry (1440):** full-bleed block, padding 120 top and bottom. Ground = P04 with CSS `filter:blur(18px)`, `scale:1.06` (hides the blur edge), plus a `rgba(250,250,250,.68)` wash so it reads pale though the photo itself is low-key. Title centred Hanken 600 1.875rem, one line below 1rem, gap 64. Panel 1030 wide [tok c], `background:rgba(255,255,255,.7)`, `backdrop-filter:blur(6px)`, `border:1px solid #E8E8E8`, r8 [tok d], padding 50/68. Two columns: left statement, right T3 CTA centred vertically.
- **Display line:** the reference uses a wide extended face (tok b PilatExtended 28 px). We keep to the row's fonts, so use Hanken Grotesk 600 1.75rem with `letter-spacing:.06em`, and do not fake width with `scaleX`. The line is **"Paper-first dispatch"**, stays in English in all five languages (as Hacobu's stays in English on a Japanese page), followed by a superscript ※1.
- **Must not be diluted:** the ground must be a recognisable blurred photograph (not a flat grey), the panel must be translucent with the ground visible through it, and the display line must sit above exactly three statement lines on desktop.

### T3. Double-chevron tail CTA (Mujin "Begin your journey", https://mujin-corp.com/, `ref/mujin-first.png`)
- **Reference:** a flat button whose right end is an arrow point, followed by a separate chevron after a thin gap: 224×50 incl. tail [tok f].
- **Ours:** the single repeated CTA. Text in every position: **"Start the 14-day trial"**, links to `/trial/#start`. Positions: header, hero, block 2 (two), block 3, block 6, block 9, every inner page foot.
- **Geometry:** height 50, label 1rem/500 white, left padding 28, right padding 22. Left end rounded r25 (the Hacobu pill [tok d]), right end pointed.
  - Body: `::before` on the `<a>`, `#E6172C`, `clip-path: polygon(0 0, calc(100% - 14px) 0, 100% 50%, calc(100% - 14px) 100%, 0 100%)` with `border-radius:25px 0 0 25px` (put the radius on the shape via an inner element if the clip removes it; the left end must render round).
  - Tail: `::after`, width 24, same red, `clip-path: polygon(0 0, 10px 0, 100% 50%, 10px 100%, 0 100%, 14px 50%)`, starting 5 px after the body's point line [tok f "5px-notched"].
  - The `<a>` itself stays unclipped, so the keyboard focus ring (`outline:2px solid #3E5160; outline-offset:3px`) shows.
  - Implement as block style `is-style-yr-tail` on core/button so editor and front end match. Label length varies by language: the shape must grow with its text and never wrap (`white-space:nowrap`); on phones it may be full width.
- **Hover:** background `#C41325`, 0.3s `cubic-bezier(.2,.12,.2,1)` [tok g]; tail moves `translateX(3px)`.
- **Header size:** height 40, tail 18.
- **Must not be diluted:** two separate red pieces with a visible gap; never replaced by an arrow glyph, and never a plain pill.

### T4 (supporting). Grey Latin eyebrow + ※ notes (Hacobu section heads)
Eyebrow 15 px Hanken 400 `#808080` tracking -0.3px [tok b] directly above every H2, gap 12. It stays English in all five languages. Facts that need a footnote carry a superscript ※n, with the note in 0.8125rem `#808080` under the block. H2 is centred in blocks 2, 3 and left-aligned in blocks 7, 8, as in the reference.

### Continuation to inner pages
| Page | T1 dossier | T2 frost | T3 CTA | T4 |
|---|---|---|---|---|
| How it works | yes (3 cards) | yes | yes | yes |
| The Round Sheet | yes (1) | yes | yes | yes + ※ |
| Trial | — (form card uses the same shell) | yes (what happens after day 14) | yes (form submit) | yes |
| Pricing | yes (price table shell) | — | yes | yes + ※ |
| Stories | yes (4 cards) | — | yes | yes |
| About | yes (2, founders) | yes | yes | yes |
| FAQ | — | yes (foot) | yes | yes |
| Field Notes | — | — | yes | yes |
| Contact | yes (1) | — | yes | yes |
| Waitlist | — | yes (signup inside the panel) | — (submit is outline: it is not the trial) | yes |

T1 on 6 inner pages, T2 on 6, T3 on all but Waitlist and the legal pages, T4 on all. Privacy, Terms and Thanks are plain text with T4 only.

---

## Key visual concept

### (1) Reference first screen
- **Concept:** an aerial dusk photograph of a long two-lane bridge running to a city skyline, trucks driving away along it, dimmed, with a headline at left, three lines, one red pill and a transparent header.
- **Story:** data and AI make moving goods visible and calm.
- **Signature motion:** footage-like slow movement of the trucks, the hero image bleeding past the viewport (−93 px top, 1086 px tall) with parallax, and the header turning into a white floating bar after scroll [tok e, g].

### (2) Our translation
Same composition, same image type, same mood: **a dawn depot yard before the round.** A lane runs from the foreground to a fading city skyline. A plain white van is parked at the right with its rear doors open, and a dispatcher stands beside it holding a printed round sheet. Story: *the morning's round, laid out before the vans leave.* Motion: slow parallax on the photo, a thin red route line drawing itself from the van along the lane to three stops, and the same transparent-to-floating header.

### (3) KV checklist (all built in the first screen, all visible at 1440×900)
| # | Reference element | Ours | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Long bridge road converging on a city skyline | Yard lane converging on a dawn skyline, blue hour, lights fading | full-bleed; vanishing point at about 60% x, 38% y | `sp-parallax` `--sp-par:8%` | P01 |
| 2 | Trucks driving away along the road | Parked white van, rear doors open, red tail-lights lit, dispatcher with printed round sheet | van spans 66–92% x, lower half | still (the route line moves instead) | P01 |
| 3 | Dark overlay, wide-tracked white H1 at left, three-line sub copy | Left-to-right overlay, H1 two lines, tracking .08em, three-line sub copy | left 8%, vertical middle (block spans about 30–72% y) | none (no reveal in the hero) | overlay on P01 |
| 4 | Red pill CTA | T3 red chevron-tail CTA | directly under the sub copy, left 8% | hover 0.3s | — |
| 5 | Transparent header → white floating bar | Transparent over the hero, white floating card after 40 px | top | 0.3s | — |
| 6 | Slow vehicle movement along the road (the hero's visible motion) | Red 2 px route line van → lane → three stop discs with pale halos (halo echoes the discs on the reference's truck photo) | over the photo, right 60% | stroke draws 1.6s on load, stops fade in along it | SVG over P01 |

Plus the row's info bar (ours, no reference element): three frosted cells at the hero foot, see §3.

---

## 2. Colour (tok a)

| Role | Hex | Source | Use | Share |
|---|---|---|---|---|
| Ground | `#FAFAFA` | tok a page ground | page ground | ≈ 55% |
| Panel | `#FFFFFF` | tok d card | dossier cards, floating header | ≈ 15% |
| Text | `#000000` | tok a headings | headings, body | ≈ 8% |
| Eyebrow grey | `#808080` | tok a `#8C8C8C`, −5% lightness for legibility on `#FAFAFA` | eyebrows, sub-labels, notes | ≈ 1% |
| Dark card | `#313131` | tok a, r15 | CTA card (block 9) | ≈ 6% |
| Footer | `#262626` | tok a | footer | ≈ 6% |
| Accent | `#E6172C` | tok a (no swap, see the top note) | T3 CTA, outline pill, route line, text links | ≤ 2% of any screen |
| Accent hover | `#C41325` | derived | CTA hover | — |
| Iron | `#3E5160` | row iron blue (no reference role; it replaces the neutral photo-dark `#6E686A`) | photo grade target, hero overlay base `#1E2A34`, focus ring | in photos |

- **Hero overlay:** `linear-gradient(90deg, rgba(30,42,52,.62) 0%, rgba(30,42,52,.46) 48%, rgba(30,42,52,.30) 100%)`. The reference is a flat ≈45% black [tok e]; ours keeps that mean and leans darker at the left because P01 carries the text there.
- **Contrast:** white on `#E6172C` ≈ 4.6:1. `#808080` on `#FAFAFA` ≈ 3.8:1, so it is only used for 15 px+ labels and notes that repeat information.
- **First-screen saturated share** (HSV S > 35%, V > 24%): Hacobu 1.7% [tok a]. **Target ≤ 4%, spec ceiling 6%;** pipeline limit per common.md 15%. Danger: a blue-hour photo can count as saturated. P01 must be graded grey-blue (the sky and yard at S ≤ 30%). If it measures above 6%, regenerate or desaturate the image rather than darkening the overlay. Only the CTA, route line and tail-lights should count.
- No cream, beige or large saturated field. Red never fills a section.

## 3. Type (font_direction **sans**, tok b)

- **Latin:** headings Hanken Grotesk 500/600, body Nunito Sans 400/600. No serif anywhere.
- **Stacks:**
  - heading: `"Hanken Grotesk", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`
  - body: `"Nunito Sans", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`
  - `:lang(zh)` display lists the bundled Noto Sans TC. Body stays Nunito Sans, then system Traditional Chinese faces (PingFang TC, Microsoft JhengHei), and does not use the bundled heading face.
  - `:lang(ja)` display and body list Noto Sans JP after the Latin face.
- **Loading:** all via theme.json `fontFamilies` + `fontFace`, including the zh-TW and ja subsets (subset script is broken; use the Hokuto/Hada method). Editor and front end must match; copy `shared/inc/editor-lang.php` to `inc/` and require it, since `:lang()` is used. `check-editor-fonts.mjs` must pass.

| Token | Size | Weight | Line-height | Tracking | Source |
|---|---|---|---|---|---|
| `xx-large` H1 hero | 4.25rem (68 px) at 1440; `clamp(2.5rem, 4.7vw, 4.25rem)` | 500 | 1.3 | .08em | tok b 44/500/57/.1em, raised to the ≥4.25rem rule; tracking reduced because Latin is wider than kana |
| `x-large` inner H1 | 2.75rem | 500 | 1.3 | .08em | same family of values |
| `large` CTA H2 | 2.25rem | 500 | 1.4 | .02em | tok b 36/500/.72px |
| H2 | 1.875rem | 600 | 1.4 Latin, 1.8 CJK | .04em | tok b 30/600/54/1.2px |
| H3, lockup | 1.75rem | 600 | 1.4 | .04em | tok b 26–28 |
| Hero sub | 1.0625rem | 500 | 2 | .04em | ref screenshot, three spaced lines |
| Body | 1rem | 400 | 1.8 | 0 | tok b |
| Button | 1rem | 500 | 1 | 0 | tok b |
| Eyebrow | .9375rem | 400 | 1.4 | -0.3px | tok b |
| Small | .8125rem | 400 | 1.6 | 0 | ※ notes |

zh-TW/ja: H1 3.2rem (.75×), H2 1.625rem, H3 1.375rem, body 1rem, line-height 1.85. fr/de: `hyphens:auto` on body text; check long H1s still fit two or three lines.

## 4. Spacing, radius, motion tokens

- **Containers:** 1120 main, 1030 frosted panel, 346 × 3 with gap 41 for stories [tok c].
- **Section padding:** block 2 top 179 [tok c]; other blocks 120; phones 72.
- **Radius:** card r10, photo r5, buttons r25, dark card r15, frost r8, story thumbs r10 [tok d, e].
- **Easing:** `cubic-bezier(.2,.12,.2,1)` for everything [tok g]; 0.3s buttons and header, 0.6s images and cards.

---

## 5. Home page (en; ≥ 250 words required, target ≈ 480; ≥ 3 narrative paragraphs: blocks 3, 4, 5)

### Header (all pages, one top menu only)
- Wordmark "Yukisaki Route" Hanken 600 1.25rem, tracking .08em, preceded by the red route-mark (a 3-dot line, drawn in SVG, not a logo imitation).
- Anchor menu: Who it suits · First week · Trial · Prices · Stories (`#fit`, `#first-week`, `#trial`, `#prices`, `#stories`; on inner pages these go to `/#…`). Language switcher, then header-size T3 CTA at far right.
- **Over the hero:** transparent, white text, height 70, side padding 78 [screenshot].
- **After 40 px:** white floating card: `position:fixed; top:28px; left:48px; right:48px; height:70px`, r10, `box-shadow:0 5px 30px rgba(0,0,0,.08)`, black text [screenshot, tok g], 0.3s.
- **Implementation:** a 1 px sentinel at `top:40px` observed by IntersectionObserver in a small `assets/header.js`, toggling `.is-floating`. No scroll listener.
- **No-JS:** the header stays transparent at the top and scrolls away.
- **Inner pages:** the page head is also a dim photo, so the behaviour is the same.
- **Phones:** `top:12px; left:12px; right:12px; height:60px`, hamburger overlay; CTA is in the overlay and in the hero.

### First screen (1440×900)
- `.yr-hero` full-bleed Group, `min-height:100svh`, `sp-parallax`. Inside: `.sp-parallax__layer` (absolute, inset 0) holding `.yr-hero__plate`, which contains the P01 `<img>` and the route SVG. Then the overlay, then the foreground (not in the moving layer).
- **Plate:** aspect 1.6 (P01 is 2000×1250), `min-width:100%; min-height:100%`, `left:50%; top:50%; translate:calc(-1 * var(--fx)) -50%`. `--fx:50%` on desktop, `--fx:77%` under 782 px, which keeps the van and dispatcher in frame. SVG `viewBox="0 0 1600 1000"` fills the plate, so line and photo stay aligned at every width.
- **Route SVG:** path 2 px `#E6172C`, `pathLength="1"`, dashoffset 1→0, 1.6s, delay .4s, tok g easing. Tune coordinates to the final P01: start at the van's rear, follow the lane, end at the third stop near the vanishing point. Stops: `#fff` r 5 ring on `#E6172C` r 3, with a halo r 22 white at .18; each fades in 0.3s as the line reaches it. `aria-hidden`. No text labels on the line. Under `html.sp-no-motion`, reduced motion, no-JS and the editor: final state, no animation. These are CSS keyframes on load, not `sp-reveal`.
- **Foreground:** left 8%, max-width 860, vertically centred above the info bar.
  - H1 "The round is ready / before the van is." (forced two lines in en, white).
  - Sub, three lines, white: "Yukisaki Route lays out tomorrow's stops for small courier firms. / One printed sheet for each driver, in road order. / Your dispatcher checks it, changes what they know better, and prints."
  - 32 px gap, T3 CTA. Nothing else.
- **Info bar:** max-width 1120, centred, bottom 32 px, height 88, `rgba(255,255,255,.7)`, `backdrop-filter:blur(6px)`, 1 px `#E8E8E8`, r8 (T2's material). Three equal cells split by 1 px `#D6D6D6`, each a bold Hanken 1.25rem value + .8125rem label: **14 days** free trial · **One morning** to your first round · **No card** to begin.
- **Forbidden on the first screen:** table, form, search box, giant centred type, signage text in the photo.

### Block order
| # | Block (`id`) | Purpose | Layout and photos | Copy | Motion |
|---|---|---|---|---|---|
| 1 | Hero | KV | above: P01 | H1 + 3 lines + info bar | parallax P01; route line |
| 2 | Who it suits `#fit` | which fleets the trial suits | Ground `#FAFAFA`, eyebrow "Who it suits" + centred H2 "Built for fleets you can name by driver". Two T1 cards. **Card 1** photo P02 left: lockup "Small rounds", sub-label "3 to 25 vans, 40 to 600 stops a day", 55-word paragraph, outline "See the stories" + T3. **Card 2** photo P03 left: lockup "Not yet", sub-label "When we are the wrong tool", 55-word paragraph (instant same-day dispatch, long-haul trunking, more than 25 vans), outline "Join the waitlist" + T3 | 130 words | `sp-reveal--zoom` tuned to the reference, see §9 |
| 3 | Statement `#why` | the idea | T2 on P04. Eyebrow "Why paper" + title "A round a driver can hold", one line below. Panel: "Paper-first dispatch※1" + three lines + T3 at right. Under the panel ※1: "The same sheet is on the driver's phone." | 70 words, 3 lines + a 40-word narrative paragraph above the panel, centred, max 680 | none |
| 4 | First week `#first-week` | how the first week is set up | Ground; left-aligned eyebrow "First week" + H2 "Three rows, seven days". 1120 container, **three ruled rows** (1 px `#E0E0E0` top, last also bottom), each `200px 1fr 240px`, gap 40, padding 40 0: grey label "Day 1" / "Days 2–3" / "Days 4–7"; H3 + 35-word paragraph; 240×160 3:2 r5 photo P06 / P07 / P08 | 130 words | `sp-stagger` on the row group, each `sp-reveal--up` |
| 5 | Round sheet band `#sheet` | the object | Full-bleed `sp-parallax`, min-height 640, P05 with overlay `rgba(30,42,52,.5)`. Foreground left 8% (same x as the hero), white: eyebrow "The round sheet" in `#D0D0D0`, H2 "One page, in road order", 60-word paragraph, then three short facts in a row (Road order · Time windows · Notes from the desk) | 75 words | parallax P05 |
| 6 | Trial `#trial` | what the trial includes | Eyebrow + centred H2 "What the 14 days include". One T1 card, photo P09: lockup "Fourteen-day trial", sub-label "Everything, with no card", five ruled lines (up to 25 vans · all sheets and the phone view · address import · early support 05:30–14:00※2 · ends by itself on day 14), outline "How it works" + T3. ※2 note: "CET, Monday to Saturday." | 80 words | `sp-reveal--zoom` |
| 7 | Prices `#prices` | the numbers | Left eyebrow "Prices" + H2 "What it costs after the trial". Full-width T1 shell (no photo) containing the 5-row price table from §7, name left, price right, nowrap | 60 words | none |
| 8 | Stories `#stories` | proof | Left eyebrow "Stories" + H2 "Four firms, four mornings"; three columns 346, gap 41 [tok c]: P10, P11, P12 3:2 r10, title 1rem/500 lh 1.8 below, then the firm and van count in grey. Link "All stories" below | 75 words | `sp-stagger` + `sp-reveal--up`; image hover 0.6s |
| 9 | Start `#start` | one CTA | Inset dark card 1120, r15, `#313131`, on ground. Left 55%: eyebrow "Start" `#BDBDBD`, CTA H2 white "Tomorrow's round could be on paper by lunch", one 30-word line, T3. Right 45%: P13 flush to the card's right, top and bottom, fading into `#313131` with a left-side gradient mask | 45 words | none |
| — | Footer | facts | `#262626`, white text: wordmark, address, support hours, email; links How it works · The Round Sheet · Pricing · Stories · About · FAQ · Field Notes · Contact · Waitlist · Privacy · Terms | — | none |

**Home photo positions: P01–P13 = 13** (≥ 8), none repeated.

### Comparison with recent homes
| # | Asaoka | Hazuki | Kouhi | Minori | **Yukisaki** |
|---|---|---|---|---|---|
| 1 | hero wave | seam strip hero | hero info bar | inset stage + notch | **dimmed yard photo, route line, frosted info bar** |
| 2 | mission + problem | info row | notice + 2×2 tiles | snap session strip | **two white dossier cards: suits / not yet** |
| 3 | five scoop tiles | dated rows | intro | giant word band | **frosted panel on blurred photo** |
| 4 | ruled results rows | statement | lifted cards on curve | day | **three first-week rows with photos** |
| 5 | parallax proof band | 3+4 tiles | sticky service | card row | **round-sheet parallax band** |
| 6 | two company panels | trial parallax band | story band | dated panel | **single trial dossier card** |
| 7 | price list | care longform | calendar tabs | people | **price table in a white shell** |
| 8 | dated rows | staff | how a visit runs | fee table | **3-up stories** |
| 9 | close | visit | plans table | banner | **dark inset CTA card with photo** |

Why not alike: Kouhi also has a first-screen info bar, but its photo carries no text and no route line, and its curved band and tabs are absent here. Asaoka also has a parallax band in position 5, but with a floating white card; ours has plain white text on the dim photo. No tiles, curves, notches, giant words, dated rows, tabs, people grid or FAQ block appear on this home. The dominant shapes (470 px square-photo white cards, frost panel, chevron-tail red CTA) belong to none of the four.

---

## 6. Inner pages (landing track, linked from the footer and in-page links)

Page head on every page except legal: dim photo band, 420 px, overlay as hero, eyebrow + inner H1 at left 8%, same header behaviour. Each ends with a T3 CTA line (Waitlist excepted).

1. **How it works** `/how-it-works/`: head P06. Import, order, check, print explained in 3 T1 cards (P06 is the head, so cards use P07, P08, P09); frost panel "The dispatcher has the last word"; 400 words.
2. **The Round Sheet** `/round-sheet/`: head P05. What is on the sheet: stop order, time window, parcel count, desk note. T1 card with P09; a labelled list, not a mock screenshot; frost panel on the phone view; 300 words.
3. **Trial** `/trial/`: head P13. `#start` form in a white T1 shell: name, firm, vans, email, single submit in T3 shape. Below: day-by-day in three ruled rows; frost panel "What happens after day 14" (nothing is charged; export your data). The form sits below the page head, so never on any first screen on desktop at 1440.
4. **Pricing** `/pricing/`: head P03. Full table, what is included, VAT note (※ excl. VAT), T1 shell.
5. **Stories** `/stories/`: head P02. All four stories (250 words each) as T1 cards: P10, P11, P12, P14. Stories describe how the firm works now; no percentages or savings figures.
6. **About** `/about/`: head P08. Founded 2019, why; founders as two T1 cards (P15, P16); team as a named list (name, role, one line), not a photo grid; frost panel.
7. **FAQ** `/faq/`: head P17. 14 questions in `<details>` in three groups (Trial, Software, Billing); frost foot.
8. **Field Notes** (blog index `home.html`, archive, single): head P04 (unblurred). 3-up cards as stories block; 3 demo posts: "Why we still print", "Gate codes and other things only drivers know", "Reading a round backwards"; featured P07, P08, P17. Dates only.
9. **Contact** `/contact/`: head P16. T1 card with P17: address, support hours, email; plain mail link.
10. **Waitlist** `/waitlist/` (newsletter template = early access): head P14. "Cargo-bike rounds are coming": signup (name, email, city) inside a frost panel on P04. Outline submit.
11. **Privacy** · 12. **Terms** · 13. **Thanks** (after the trial form): plain text, no effects, no photo.
14. **404** / search: eyebrow + H1 + T3.

≥ 9 reachable pages (auto-gates): satisfied by 1–10 plus legal. Anchors and inner pages both appear in footer; the header stays anchors only, with one top menu.

## 7. Fixed facts (identical on home, inner pages and all five languages; demo copy, fictional firms)

- **Company:** Yukisaki Route BV, founded **2019**, **Noorderhaven 18, 9000 Ghent, Belgium** (fictional address). hello@yukisakiroute.example. **Support Mon–Sat 05:30–14:00 CET.**
- **Trial:** **14 days**, no card, up to **25 vans**, ends by itself, data export on request.
- **Fit:** **3 to 25 vans**, **40 to 600 stops a day**.
- **Flow:** Day 1 import addresses and print the first round · Days 2–3 run the sheet beside your usual plan · Days 4–7 sheets alone at the yard · Days 8–14 decide.
- **Prices (EUR, excl. VAT, same figure in every language):**

| Item | Price |
|---|---|
| Trial, 14 days | €0 |
| Yard plan, 3–5 vans | €24 per van / month |
| Depot plan, 6–25 vans | €19 per van / month |
| Extra depot | €40 per depot / month |
| Guided set-up morning (optional) | €180 once |

- **People (7):** Ines Vermeulen, co-founder, eight years on a courier desk · Tomasz Zielinski, co-founder, engineering · Amara Nwosu, trial set-up lead · Kenji Arai, routing · Sofía Morales, early support · Lucas Bertrand, accounts · Priya Raman, data import.
- **Stories (4, all fictional firms):** Kade Couriers (Ghent, 6 vans, 210 stops, shop parcels) · Valmara Express (Porto, 11 vans, 380 stops, pharmacy runs) · Norrby Bud (Malmö, 4 vans, 90 stops, florists and bakeries before 09:00) · Lindenhof Kurier (Freiburg, 14 vans, 460 stops, rural and town rounds).
- **Waitlist subject:** cargo-bike rounds.
- **Never claim:** saved percentages, fuel or time guarantees, awards, certifications, ® marks, real customers, integrations with named brands.

## 8. Photos (17; Grok, one at a time, Read each one; ≤ 300 KB, ≤ 2000 px, webp, 0 cut-outs)

Imagery: **photo**. STYLE (exact string on every prompt):
`photorealistic low-key documentary photograph, dawn blue hour, dimmed cool grey-blue colour grade with low saturation, soft ambient light, grain-free, 35mm lens, quiet candid moment, modern international European-style town, plain white unmarked vans, diverse adults in dark neutral workwear, no text, no logos, no brand marks, no number plates, no signage lettering, no Japanese elements`

Printed sheets must show blank ruled rows and no legible characters; regenerate anything with text, marks, broken hands or warped faces. The row's low-key direction overrides the common high-key default.

| ID | Subject / composition | Ratio | Pages (never twice on one page) |
|---|---|---|---|
| **P01** ★ | Depot yard at dawn: lane converging to a fading city skyline at about 60% x, 38% y; white van right (66–92% x) rear doors open, tail-lights lit red; dispatcher beside it holding a printed sheet; left 55% calm and dark for text | 1.6, 2000×1250 | Home hero |
| **P02** ★ | Rear of a white van on a wet empty road at dawn, seen from behind (echoes the reference's composition, own subject) | 1:1 | Home card 1; Stories head |
| **P03** ★ | Very large articulated trucks lined up at a distant logistics park, seen from far away | 1:1 | Home card 2; Pricing head |
| **P04** ★ | Pale concrete loading canopy and steel columns, geometric, first light, no people | 16:9 | Home frost ground; Field Notes head; Waitlist ground |
| **P05** ★ | Close-up: printed sheet on a clipboard on a van dashboard, hand with pen, windscreen dawn beyond | 21:9, 2000×860 | Home band; Round Sheet head |
| **P06** ★ | Dispatcher at a small desk by a dark window, desk lamp, laptop angled away, printer beside | 3:2 | Home row 1; How it works head |
| **P07** ★ | Driver in the cab reading a printed sheet, cab light on | 3:2 | Home row 2; How it works card; Field Notes post |
| **P08** ★ | Two colleagues at an open tailgate going through a sheet | 3:2 | Home row 3; How it works card; About head; Field Notes post |
| **P09** ★ | Overhead: hands marking a printed sheet with a pen, phone beside, dark table | 1:1 | Home trial card; How it works card; Round Sheet card |
| **P10** ★ | White van in a narrow old-town street at first light, courier carrying a box | 3:2 | Home story 1; Stories |
| **P11** ★ | Courier handing a small sealed bag across a pharmacy counter, dim morning | 3:2 | Home story 2; Stories |
| **P12** ★ | Crates of flowers unloaded from a van at a shop door, early light | 3:2 | Home story 3; Stories |
| **P13** ★ | Van tail-lights leaving a yard onto an empty road, skyline ahead | 16:9 | Home CTA card; Trial head |
| P14 | White van on a rural road between dark fields at dawn | 3:2 | Stories; Waitlist head |
| P15 | Portrait: founder in dark jacket at the depot door, three-quarter, calm | 4:5 | About card |
| P16 | Support desk before sunrise: person with a headset, lamp, window | 4:5 | About card; Contact head |
| P17 | Parcel shelves in a dim sorting room, one person scanning | 3:2 | FAQ head; Contact card; Field Notes post |

★ = used on home. Per-page check: How it works P06, P07, P08, P09 · Round Sheet P05, P09 · Trial P13 · Pricing P03 · Stories P02, P10, P11, P12, P14 · About P08, P15, P16 · FAQ P17 · Field Notes P04, P07, P08, P17 · Contact P16, P17 · Waitlist P14, P04.

## 9. Scroll effects (sp-scroll unchanged; hover and header are plain CSS)

| Effect | Class | Where | Reference and values |
|---|---|---|---|
| Hero parallax | `sp-parallax` | block 1, layer P01 + route SVG; foreground outside the layer; `--sp-par:8%`, `5%` under 782 | Hacobu `js-wiv a--kv`, overscan −93 px [tok e, g], continuous, linear |
| Band parallax | `sp-parallax` | block 5, layer P05, text static; `--sp-par:10%`, `6%` under 782 | same; the required full-width photo parallax |
| Card scale-in | `sp-reveal sp-reveal--zoom` | T1 cards in blocks 2 and 6, and inner cards | Hacobu `a--scl js-tdi`: fade + scale .96→1, 0.6s `cubic-bezier(.2,.12,.2,1)` [tok g]. Tune in `style.css` without touching sp-scroll: inside `prefers-reduced-motion: no-preference`, `html.sp-js:not(.sp-no-motion) .yr-dossier.sp-reveal--zoom:not(.sp-in){transform:scale(.96)}` and `html.sp-js:not(.sp-no-motion) .yr-dossier.sp-reveal--zoom{--sp-dur:.6s;--sp-ease:cubic-bezier(.2,.12,.2,1)}` |
| Row stagger | `sp-stagger` + `sp-reveal sp-reveal--up` | block 4 rows, block 8 columns | ours (reference shows no reveal on topics); entry on view, `--sp-dist:20px`, 0.12s step, 0.6s, same easing |

Three effect types only. No reveal in the hero, on forms, on the price table, on legal text. Reduced motion, `?sp-static` and the editor: final state. `check-parallax.mjs` must pass on desktop and phone.

## 10. Responsive

- **390 px first screen:** one column, text in normal flow, no vertical or absolutely positioned labels over text. Order: H1 (2.5rem, up to four lines) → sub (lines flow naturally) → full-width T3 CTA → info bar in flow, three stacked rows, not absolute. Hero `min-height:100svh` and grows if needed. The route SVG stays, behind the text, with no labels.
- **Dossier cards:** under 960 px single column, photo first at full width 1:1, padding 24, buttons stacked full width. Between 960 and 1160, grid `1fr 1fr`, gap 40.
- **Frost panel:** under 782 single column, CTA below the text, padding 32 24; `backdrop-filter` optional with `rgba(255,255,255,.82)` fallback.
- **Rows (block 4):** under 782 single column: label, photo 3:2 full width, text.
- **Price table:** at ≥ 782 px full container width, `table-layout:auto`, price cell `white-space:nowrap; text-align:right`, never clipped at 800 or 1280 in any language. Under 782 px every row stacks: name above, price below in the same row block. Applies to every table.
- **Stories:** 3 → 2 → 1 columns, no horizontal scroll.
- **Block 9:** under 782 photo on top 16:9, text below, gradient mask removed.
- No horizontal overflow at 390 or 1280.

## 11. Similarity table (target ≈ 80%)

| Dimension | Reference | Yukisaki Route |
|---|---|---|
| Page ground | `#FAFAFA` [a] | `#FAFAFA` |
| Text | `#000000` [a] | `#000000` |
| Eyebrow | `#8C8C8C`, 15 px, -0.3px [a, b] | `#808080`, 15 px, -0.3px (legibility) |
| Accent | `#E6172C`, pills [a] | `#E6172C`, T3 + pills + route line |
| Dark card / footer | `#313131` r15 / `#262626` [a, d] | same |
| Photo-dark | avg `#6E686A`, ≈45% black overlay [a, e] | blue-iron grade, overlay .62→.30 on `#1E2A34` (row palette) |
| First-screen saturation | 1.7% [a] | ≤ 4% target, 6% ceiling |
| H1 | 44/500/57/.1em [b] | 68/500/88/.08em (≥4.25rem rule) |
| H2 | 30/600/54/1.2px [b] | 30/600/1.4 Latin, 1.8 CJK/.04em |
| CTA H2 | 36/500/.72px [b] | 36/500/.02em |
| Body | 16 px, lh ≈1.8 [b] | 16 px, 1.8 (CJK 1.85) |
| Faces | Noto family, Inter, PilatExtended [b] | Hanken Grotesk, Nunito Sans, Noto Sans TC/JP (row) |
| Container | 1120 / 1030 [c] | 1120 / 1030 |
| Card | r10, 0 5 30 .08, padding 50 [c, d] | same |
| Photo in card | 470 sq r5, gap 80 [c, d] | same |
| Topics | 3 × 346, gap 41, 3:2 r10 [c, e] | same |
| Section top | 179 [c] | 179 block 2, 120 others |
| Buttons | r25, 1 px, 50 high, 0.3s [d, g] | same; primary has Mujin tail |
| Frost panel | r8, 1 px light, ≈70% white [d] | same |
| Header | transparent → white floating [g] | same, 28 inset top, 48 sides |
| Hero parallax | overscan −93, image layer [e] | `--sp-par:8%` |
| Card entry | .96→1, 0.6s curve [g] | same |
| Image hover | 0.6s same curve [g] | scale 1.04, same |
| Decoration | grey eyebrow, ※ notes, lockup, disc pins on photo [f] | same types, own marks; disc pins on the route line |
| Imagery | dimmed cinematic documentary [e] | low-key documentary, own photos |

## 12. Home acceptance checklist

1. First screen: full-bleed dawn yard, van right, dispatcher with a sheet, skyline; no signage text; H1 at left in two lines ≥ 4.25rem at 1440; three sub lines; T3 CTA; frosted info bar at the foot.
2. Route line draws on load in `?sp-motion`, is complete in `?sp-static`, and stays aligned with the van at 1440, 1024 and 390.
3. Header is transparent at the top and becomes a white floating card after 40 px, inset 48 sides, 28 top, r10.
4. T1: two cards in block 2 and one in block 6, white r10 with shadow, 470 px square photos, grey sub-label, outline + T3 side by side.
5. T2: photo recognisably blurred, translucent 1030 panel visibly showing it, "Paper-first dispatch" line above three statement lines, CTA at right.
6. T3: same label everywhere, two separate red pieces with a 5 px gap, focus ring visible; never a plain pill.
7. T4 eyebrow above every H2; ※ notes present.
8. Colours as §2: accent is red `#E6172C`, used small; no amber, cream or large saturated field; saturated share ≤ 6%.
9. Fonts Hanken Grotesk and Nunito Sans; no serif; `check-editor-fonts.mjs` passes.
10. Block order as §5, 13 distinct photo positions; no people grid, step grid, timeline, dashboard, FAQ block or side rail.
11. Two parallax areas and three effect types; `check-parallax.mjs` passes on desktop and phone; none on hero text, forms, table.
12. Price table: full width at ≥ 782, right-aligned nowrap prices not clipped at 800 or 1280, stacked on phones; figures exactly as §7.
13. 390 px: no overlap, no overflow, info bar in flow, van visible.
14. ≥ 250 words, ≥ 3 narrative paragraphs; fixed facts as §7; no claims from the "Never claim" list.
15. `auto-gates.mjs … 1 1` passes.
