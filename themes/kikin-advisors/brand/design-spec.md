# Kikin Advisors: design spec (stage 1, binding for implementation)

Slug `kikin-advisors`, design-plan row b18-6. Workplace pension adviser that briefs employers for one hour **before** they choose a scheme. Type **landing** (`rules.landing_track`): the home page is one long conversion page with an anchor menu and **one repeated CTA, "Request a briefing"**; plus Newsletter (waitlist), Privacy, Terms and Thanks, and the inner pages in §5 (linked from the footer, not from the header). Five languages: en, zh-TW, ja, fr, de.

Reference: **ohara-sr.com** (S5-Style finance-insurance; a social-insurance consultancy for start-ups). Measurements in `reference-tokens.md`, shots in `brand/ref/`. We borrow structure, techniques, colour relationships, motion and the key-visual concept. We do not copy its illustrations, copy, logo or full page layout. **IMAGERY: illustration** (the reference's art is hand-drawn line illustration). We draw our own in the same style. No photographs anywhere.

Values tagged `[tok a–g]` come from `reference-tokens.md` sections (a)–(g). Values tagged `[shot]` were measured on `ref/ohara-first.png`, `ohara-service.png` and `ohara-flow.png` at 1440 px wide.

---

## 0. Fixed facts (every page, all five languages, never change)

- **Kikin Advisors**, founded **2014** by **Ruth Halloran**. Office: **3rd floor, 27 Wharf Lane, Bristol BS1 6QX, United Kingdom** (fictional address). Email `briefings@kikin-advisors.example`, phone `+44 117 496 0738` (fictional, from Ofcom's drama range).
- What we do: a **60-minute employer briefing** before you choose (or re-tender) a workplace pension scheme. The hour has **three 20-minute parts**: (1) how your plan is assembled, (2) what your staff will be told, (3) your one next conversation. Independent and paid by fee only. We take **no commission** from any provider. We never promise returns or outcomes. The contribution curves are illustrations, not projections.
- Who it's for: employers with **5–500 staff**, in three groups: **5–49** (setting up a first scheme), **50–249** (re-tendering an existing scheme), **250–500** (several sites or languages).
- Hours: office **Mon–Fri 09:00–17:30 (UK time)**. Briefing slots run **Tue–Thu at 09:30, 11:30 and 14:30**. Online, or at your office if it is within **40 km** of Bristol.
- Process (write it as prose or a 5-line ruled list, never a step grid): (1) you request a briefing → (2) we reply within **2 working days** with three slots → (3) a **10-question** pre-briefing form, sent **3 days** before → (4) the hour → (5) a written summary within **5 working days**.
- **Fees (GBP in every language, ex VAT, never converted). 7 items:**

| # | Item | Detail | Price |
|---|---|---|---|
| 1 | Employer briefing | 60 min, online or at your office, up to 4 of your people | £390 |
| 2 | Written summary + contribution-curve sheet | with every briefing, within 5 working days | Included |
| 3 | Board follow-up briefing | 45 min, same adviser, within 30 days | £260 |
| 4 | Provider comparison note | up to 3 schemes, 10 working days | £950 |
| 5 | Member Q&A session | 45 min, up to 60 staff, online or on site | £480 |
| 6 | Member letter in a second language | en / zh-TW / ja / fr / de | £180 per language |
| 7 | Annual scheme check-in | 60 min + one-page note | £420 |

  Note line: "Prices exclude VAT. Travel beyond 40 km is charged at cost, agreed in advance."
- **People (7).** Show them as a ruled name list, never a face grid:
  1. Ruth Halloran, founder and principal adviser (has given briefings since 2014)
  2. Kwame Asante, senior adviser, contribution design
  3. Inès Moreau, adviser for French-speaking employers
  4. Jonas Weber, adviser for German-speaking employers
  5. Mei-Lin Chou, member communications (English and Mandarin)
  6. Daniel Ortega, scheme analyst, author of the provider comparison notes
  7. Priya Raman, scheduling and client care
- **Stories (3).** These are fictional employers. Describe outcomes in qualitative terms only (no percentages, no "saved £"):
  1. **Halden Bakery**: 6 shops, 48 staff, first scheme, briefing with Ruth Halloran.
  2. **Venn & Ashworth Architects**: 31 staff, re-tender after 6 years, with Kwame Asante and Daniel Ortega.
  3. **Northway Logistics, Avonmouth depot**: 220 staff on three shifts, member sessions in English and Mandarin with Mei-Lin Chou.
- Open slot cards on home (evergreen, no dates): **"Tuesday · 09:30 · Online"**, **"Wednesday · 11:30 · At your office"**, **"Thursday · 14:30 · Online, with board pack"**.

---

## 1. Signature techniques (three, plus the closing ground). Each must be obvious at a glance.

### T1. Two solid ink label bars that wipe open over a full-width line-art street scene (ohara-sr.com first screen)
- **Reference** (`ref/ohara-first.png`, https://ohara-sr.com/): two solid blue bars carry the headline, white 30 px bold text, ls 0.1em, bar height 60 px, padding 15 px [tok b]. They are stacked at x240, with the second bar 80 px lower and slightly longer (350 / 385 px) [shot, tok g]. They sit over a 1400 px-wide hand-drawn street. The scene's top half is white and its lower half is light grey #F1F1F1 from y≈425 [tok a, shot]. On load the bars wipe open from width 0 in 1.0 s with ease [tok g].
- **Ours, home hero (block 1):** the same construction. Bars in ink `#45485A`, white text, Hanken Grotesk 700, `1.875rem` (30 px), `line-height:1`, `letter-spacing:.1em`, padding `15px 12px`, bar height 60 px. Bar 1 is at x240 / y325 and bar 2 at x240 / y405 (80 px step, same as the reference). The bars are `<span>`s inside a single `<h1>` (so the H1 is the bars). Bar 2 must be longer than bar 1. en copy: **"See the plan drawn out" / "before you choose a scheme."**
- **Inner-page carry-over:** every inner page head has **one** ink bar (same size and wipe) over the line-art skyline strip K14, 1400×350, on the same white/grey split ground. See §5.
- **Do not dilute:** the bars stay solid ink (no outline, no gradient, no transparency). Text stays white, 30 px or larger on desktop. Both bars overlap the illustration, not empty space. The wipe runs left to right.

### T2. Outline circle badge + vertical headline straddling a rounded butter band (ohara-sr.com SERVICE & PRICE)
- **Reference** (`ref/ohara-service.png`): a butter band `#FEFCE4` starts at x330 and bleeds off the right edge. It is ≈480 px tall, with r40 on both left corners [tok d, shot]. An outline circle Ø176, 1 px blue, white fill, with EN caps and a JP sub, overlaps the band's top-right corner: the circle centre sits ≈ on the band's top edge, x≈1200 [shot]. A vertical JP headline in two columns sits under the circle. The figure (≈400×300, no frame) is left, the text is in the centre, and a navy pill is under the text.
- **Ours, home `#who` (block 3)** exactly like that. Band `#F4EBC4` from x330 to the right edge, height 480, `border-radius:40px 0 0 40px`. Badge Ø176, `1px solid #45485A`, white fill, centre at band top edge, right 150 px. Badge text: "WHO IT'S / FOR" Hanken 700 1.25rem ls .08em, line-height 1.3, plus a local sub 0.8125rem (en sub "employers 5–500"). Vertical headline under the badge: two columns, `writing-mode:vertical-rl`, 1.375rem 700 ink, ls .12em, column gap 14 px, max 260 px tall. Latin languages use `text-orientation:mixed`. Figure K06 at x380–730. Text column x770–1090.
- **Mirrored use, home `#takeaway` (block 5):** the band bleeds off the **left** edge (x0–1110), `border-radius:0 40px 40px 0`, badge over the top-**left** corner (left 150). Figure K10 right, text left.
- **Badge-only use** (reference FLOW block, `ref/ohara-flow.png`, white ground): badge at left x150, vertical headline under it, content x390–1290. Used on home `#hour` and `#fees`.
- **Do not dilute:** the badge must overlap the band edge (half in, half out), stay an outline (1 px), and stay ≥ Ø150 on desktop. The band must bleed off one edge and keep its 40 px corners. The headline is vertical at ≥1024 px. Below 1024 px it becomes horizontal (mobile rule).

### T3. Notched hairline panel with the pill breaking its bottom border (ohara-sr.com NEWS & COLUMN)
- **Reference** (`ref/ohara-first.png` bottom, `scroll-news-after.png`): 1 px blue border around a 980 px panel, with 45° cut corners at top-left and bottom-right. A line icon breaks the top border at centre, with the EN caps title under it. Three cards with Ø210 round thumbs are separated by 1 px verticals. A navy pill (170×55, r10) interrupts the bottom border at centre [tok d, e].
- **Ours, home slots panel (block 2) and stories panel (block 7):** panel width 980, `border:1px solid #45485A`, notch 28 px at top-left and bottom-right. Implement the notch as `::before`/`::after` white squares rotated 45° carrying a 1 px ink diagonal. **No `clip-path` on the panel** (it is an observed element). Top-centre: a 40 px inline-SVG line icon (calendar for slots, speech bubble for stories) on a white 24 px-padded chip that hides the border behind it. Title Hanken 700 1.5rem ls .08em + local sub 0.8125rem. Three cards, each 1/3 wide, separated by `1px solid #A9ADBF` verticals. Round thumb **Ø210** (`border-radius:50%`, `object-fit:cover`), then a label line 0.8125rem 700 ls .08em, a title 1.0625rem 700 and a 2-line description. Pill **"Request a briefing"** 210×55, r10, `#2B2E3D`, white Hanken 700 0.9375rem ls .08em, centred on the bottom border (`translateY(50%)`), with 16 px white padding either side so the border visibly stops.
- **Do not dilute:** both notches are visible (≥24 px). The pill sits *on* the border line, not under it. The thumbs stay round and ≥ Ø180 on desktop.

### Closing ground (supporting, from the reference CTA): grid-paper block
`#F8F8FA` ground with a 60 px grid of `1px #E6E7EC` lines (`background-image` with two linear-gradients, size 60px 60px) [tok f]. Centred heading 1.75rem 700 ink, one pill (the CTA) **muted yellow `#E9D77A`** 206×54 r10, ink text `#2B2E3D`. A round "page top" button Ø86 `#2B2E3D` sits at bottom-right inside the block (static, not fixed) with a chevron and "TOP" 0.6875rem.

### Continuation to inner pages (required on ≥4; here 9)
| Page | T1 bar head | T2 badge (+band) | T3 notched panel | Grid-paper close |
|---|---|---|---|---|
| The briefing | yes | badge-only beside the 3 parts | 3 open slots | yes |
| Who it's for | yes | band R with K06 | — | yes |
| Fees | yes | badge-only "FEES" | notes panel (VAT, travel, cancellation) with the CTA pill on the border | yes |
| Pension basics | yes | band L with K07 | — | yes |
| Member sessions | yes | band R with K15 | — | yes |
| Advisers | yes | badge-only beside the ruled name list; band L with K16 | — | yes |
| Stories (index + single) | yes | — | stories panel (3 cards), single: notched frame around the pull quote | yes |
| Request a briefing | yes | badge-only "REQUEST" | slots panel + what-to-send panel | (page itself has grid ground) |
| About & office | yes | band R with K16 | address/hours panel | yes |
| Newsletter / Thanks / Privacy / Terms / 404 | yes (bar only) | — | Newsletter: signup inside a notched panel | Newsletter, Thanks |

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
ohara-sr.com opens on a full-width **hand-drawn street**: a café with a hanging cup sign, office blocks with window grids, a lattice tower, poplar trees. The art is black brush-pen line on cream/white fills. The lower half of the stage is a flat light-grey ground. In the right foreground **an older adviser and a younger client ride one tandem bicycle** toward the viewer's right. The two blue bars read, roughly, "at a not-stiff distance / supporting the start-up". **Story:** the expert rides alongside the client on the same machine, going the same way. **Motion on load:** the bars wipe open 0→full in 1.0 s, the scene layer rises 30 px while fading in (1.0 s), and the bicycle slides in from the right (0.5 s). Below, the notched NEWS panel straddles the grey ground.

### (2) Our translation: workplace pension briefing, same composition, same motion, same image type
The same kind of **line-art street**, our own drawing: a glass office block with a meeting-room window grid, a corner café with a hanging cup-and-saucer sign (no lettering), plane trees, mid-rise offices and **no tower**. The lower half of the stage is pale grey. In the right foreground, where the tandem was, **the adviser (older, slate jacket, grey hair) stands at a wheeled whiteboard drawing a rising contribution curve (three stepped lines). The finance lead (younger, pale-butter jacket, laptop under the arm, coffee cup) stands beside, watching.** Story: *we walk you through the plan, side by side, before you commit*. It is the same "two people, one shared tool" idea, and they face right like the riders. Motion: the bars wipe open, the street rises and fades in, and the whiteboard pair slides in from the right. All of it is illustration in the same brush-pen style. No photograph.

### (3) KV checklist (all six are built in the first screen and visible at 1440×900)
| # | Reference element | Our counterpart | Position (1440×900) | Motion | Image |
|---|---|---|---|---|---|
| 1 | Full-width line-art city street on a white-top / grey-bottom split ground | Our line-art street (office block, café sign, plane trees, no tower), right-centre foreground left **empty** for the pair | `figure.kk-hero__scene` x20–1420, y120–760 (1400×640, 2.2:1), bottom-aligned | rises 30 px + fades in, 1.0 s ease (load), then `sp-parallax` `--sp-par:6%` | **K01** |
| 2 | Two solid blue label bars, white 30 px text | Two ink `#45485A` bars "See the plan drawn out" / "before you choose a scheme." (H1) | x240, y325 and y405 (desktop grid overlay). Mobile: in flow above the scene | clip-path wipe left→right 1.0 s ease, bar 2 delayed 0.15 s | — |
| 3 | Older adviser + younger client on a tandem bicycle, facing right | Adviser drawing the contribution curve on a wheeled whiteboard + finance lead with coffee and laptop, facing right | `figure.kk-hero__pair` x760–1290, y340–790 (530×450, slightly overhangs the scene bottom like the bike) | slides in from the right 30 px + fade, 0.5 s ease, delay 0.6 s | **K02** (white background, shown with `mix-blend-mode:multiply` so the white disappears over the empty plaza. Not a cutout file) |
| 4 | Round logo mark + 5 nav items in EN caps with a JP sub-label and 1 px dividers | Round outline mark Ø88 with "K" + wordmark; anchor nav WHO / THE HOUR / TAKEAWAY / FEES / REQUEST, each with a local sub-label, 1 px dividers 32 px tall | header 105 px, logo x120, nav right-aligned to x1315 | none | inline SVG (no image) |
| 5 | Notched hairline NEWS panel straddling the bottom of the grey ground | Notched "OPEN SLOTS" panel, 3 cards with round thumbs, CTA pill on the bottom border | 980 wide, centred, top at y855 (its top 45 px shows in the first screen, icon chip at y835) | none on load (the panel is outside the hero section; `sp-reveal--up` on the cards row only) | K03, K04, K05 |
| 6 | Light-grey half ground behind the scene | `#F3F4F6` ground from y425 down to the panel's middle, ending in a shallow 1440×60 arc into white | full-bleed, y425–≈1010 | moves with the page; the scene parallax plays over it | CSS only |

The hero has no table, form, search box or sp-reveal. K01 and K02 are in the image list (§8).

**Mobile 390×844 first screen:** header 64 px (mark Ø44 + wordmark, menu button). Below it the two bars are **in normal flow** (not absolute), left 20 px, 1.25rem, bar height 44 px, 10 px apart, with no overlap. Then K01 full width (390×177). K02 overlays the scene's right 62% in the same CSS grid cell (an image, not a label), scaled to 240 px wide. Then the grey ground and the panel top. No vertical text and no absolutely positioned text on the mobile first screen.

---

## 3. Home page (en ≥ 320 words, ≥ 4 narrative paragraphs)

Container 980 px (content) / 1200 px (bands' inner layout) [tok c]. Vertical rhythm: 120 px between sections [tok c]. Mobile: 72 px between sections.

### Header (all pages)
Height 105 px, white, `position:sticky; top:0` after the hero (no scroll listener; simply sticky). Logo at x120: a round outline mark Ø88 (1.5 px ink circle, "K" Hanken 700 inside, small arc under it) + wordmark "Kikin Advisors" Hanken 600 1.125rem ink + a sub line "Workplace pension briefings" 0.75rem `#6B6E80`. Nav: 5 anchors, each with EN caps Hanken 700 0.9375rem ls .08em ink over a local sub-label 0.75rem (en subs: "is it for you", "how it runs", "what you keep", "flat prices", "one request"). Dividers `1px #45485A` 32 px tall, gap 28 px each side. REQUEST links to `/request/`; the others link to home anchors. Inner pages use the same nav, pointing at `/#who` etc. Language switcher: text "EN ▾" 0.8125rem after the nav. Below 1024 px: an overlay menu button (two 28 px lines) [tok b, c].

### Block order
| # | Pattern / anchor | Purpose | Layout and images | Copy |
|---|---|---|---|---|
| 1 | `kk-hero` `#top` | key visual + promise | §2: T1 bars over K01 street, K02 pair, grey ground, `sp-parallax` on the section | H1 (2 bars) + a 1-line sub under the scene's left building at x240 y500: "One hour with an independent adviser, before you sign with any provider." 1rem on white chip `rgba(255,255,255,.9)` padding 6/10 |
| 2 | `kk-slots` | show it is bookable now | **T3** panel, title "OPEN SLOTS" + sub "this month's briefing times", 3 cards: thumbs **K03** (Tuesday 09:30, Online), **K04** (Wednesday 11:30, At your office), **K05** (Thursday 14:30, Online, with board pack). Each has a 25-word line. CTA pill on the border | 3 × 25 words |
| 3 | `kk-who` `#who` | who the briefing is for | **T2** band R, badge "WHO IT'S FOR", vertical headline "Employers of 5 to 500 / choosing a scheme". Figure **K06** left, text centre: 2 paragraphs + a 3-row ruled list (5–49 / 50–249 / 250–500, each one line). CTA pill (`#2B2E3D`, 170×55 r10) under the text | 120 words |
| 4 | `kk-hour` `#hour` | how the hour runs | badge-only **T2** left: badge "THE HOUR", vertical headline "Sixty minutes / in three parts". Content x390–1290: intro row with the numeral **"60"** Hanken 600 **4.5rem** (theme max) ink `sp-count` + "minutes, three parts, one adviser" 1.25rem. Then 3 rows split by `1px #A9ADBF` rules, 64 px padding. Row A: text left 380 px, figure **K07** right 370×278. Row B mirrored: **K08** left. Row C like A: **K09**. Each row: label "0–20 min" 0.8125rem 700 ls .08em, title 1.375rem 700, 70 words. Text link "The hour in detail →" to /briefing/ | 230 words |
| 5 | `kk-takeaway` `#takeaway` | what you keep afterwards | **T2** band L (mirrored), badge "TAKEAWAY", vertical headline "What stays / on your desk". Text left: 1 paragraph + 4-row ruled list: written summary (within 5 working days) · contribution-curve sheet (your figures at three contribution levels, illustrative only) · draft member letter · 12 questions to ask any provider. Figure **K10** right 400×300 | 110 words |
| 6 | `kk-fees` `#fees` | flat prices | badge-only **T2**, badge on the **right** this time (x1115), vertical headline "Flat fees, / agreed first". Fee table (§0, 7 rows) full container width 980, rows `1px #A9ADBF` bottom rule, 20 px vertical padding. Columns: item 1.0625rem 700 + detail 0.875rem `#6B6E80` under it; price right-aligned, `white-space:nowrap`, Hanken 600 1.25rem, min-width 9rem. Below: the note line + the numeral line "£390" Hanken 600 4.25rem left, with "for the hour, summary included" 1rem beside it | table + 30 words |
| 7 | `kk-stories` `#stories` | proof without claims | **T3** panel again, icon speech bubble, title "STORIES" + sub "three employers, one hour each". Cards: **K11** Halden Bakery, **K12** Venn & Ashworth, **K13** Northway Logistics. Each: label (staff count), title (a 6–8-word quote in quotes), 35 words, "Read →" to the post. The bottom-border pill here is a text-only outline pill "All stories" 170×55 r10, `1px #2B2E3D`, ink text (not the CTA colour, so the CTA stays single) | 3 × 40 words |
| 8 | `kk-request` `#request` | the single action | grid-paper ground (closing ground). Centred: heading "Ask for your hour." 1.75rem 700. 3 short lines (reply within 2 working days with three slots · 10-question form beforehand · summary within 5 working days). Pill **"Request a briefing"** `#E9D77A`. Figure **K18** (adviser with a phone and a speech bubble) at right x1010–1250, 240×180. Page-top button Ø86 bottom-right | 50 words |
| 9 | footer | links | white, 1px top rule `#A9ADBF`. Left: mark + address + hours. Centre: links to all inner pages. Right: Newsletter link "Get the next open slots by email", Privacy, Terms. 0.8125rem | — |

**Home image positions: 14** (K01, K02, K03, K04, K05, K06, K07, K08, K09, K10, K11, K12, K13, K18). No image repeats on the page.

**Narrative paragraphs** (en): #3 two paragraphs, #4 three rows, #5 one paragraph, #7 three story texts. Total en ≥ 320 words. CJK home ≥ 550 characters.

### Comparison with the most recent home pages (must not repeat)
| # | Saji Culinary | Tsuya Jewellers | Kairo Supply | Sekisan Partners | **Kikin Advisors** |
|---|---|---|---|---|---|
| 1 | full-bleed photo hero + timeline | framed-window hero | stadium KV over wordmark | full-bleed photo + rail | **line-art street illustration, two wiping ink bars, figure pair sliding in** |
| 2 | halftone portrait + giant word | offset pair | pinned stage | gap news-panel | **notched hairline slots panel, round thumbs, pill on the border** |
| 3 | day band | 4 product tiles | two doors | index rows | **butter band R with circle badge + vertical headline** |
| 4 | ruled term cards | commissions strip | who band | estimate | **badge-left "60" + 3 alternating illustrated rows** |
| 5 | full-bleed service photo | drawn pencil grid | account prose rows | handover cards | **mirrored butter band L, takeaway list** |
| 6 | brigade | bench band | counter pair | fees | fee table (badge right) |
| 7 | graduates grid | people | rate table | cases | **second notched panel: stories** |
| 8 | tuition / notices | visit | morning photo | dark request | **grid-paper request, yellow pill, page-top disc** |

Why not alike: Kikin is the only one built on **illustration** (no photo anywhere). Its hero is a drawn street with label bars, not a photo, frame or wordmark. Its recurring shapes are the circle badge straddling a rounded band, the 45°-notched hairline panel, and grid paper. None of the four uses those (Sekisan's news panel is a gap panel over a photo with no notches, circle thumbs or pill-on-border). There is no people grid, no product tiles, no timeline, and the close is light grid paper, not a dark block. The fee table is the only block type shared (Sekisan, Kairo), and it is required by the landing brief. Ours is badge-led on white with no card frame.

---

## 4. Colour

The reference's relationship is kept: one dark ink for bars, labels, outlines and text on white; a pale butter band; a deeper ink pill; one yellow pill at the close; grey half-ground. **One swap, with reasons:** the reference ink-blue `#2D3C9F` → ink **`#45485A`** (row palette: navy grey). Reasons: (1) the most recent shipped theme, Sekisan Partners, uses a saturated blue main `#004896`, and a second cobalt-blue finance theme in a row is not allowed (avoid recent main colours). (2) The row note asks for a quiet palette. (3) The contrast that makes the reference work stays: white on `#45485A` = 9.4:1 vs white on `#2D3C9F` = 9.6:1, so the bars keep the same weight. This is not a lighter, weaker swap (Tsumugi lesson). All other codes are the reference's, within ±5 % lightness, or muted versions for illustration fills only.

| Role | Hex | Reference source | Use | Share (page) |
|---|---|---|---|---|
| Ground | `#FFFFFF` | page white [tok a] | page | ≈ 62 % |
| Half-ground | `#F3F4F6` | `#F1F1F1` (+1 % L) [tok a] | hero lower half, inner-head lower half | ≈ 12 % |
| Band | `#F4EBC4` | butter `#FEFCE4`, darkened ≈5 % L so it reads on white with the ink theme | T2 bands | ≈ 9 % |
| Ink (main) | `#45485A` | swap for `#2D3C9F` (reasons above) | bars, badge outlines, panel borders, headings, nav, body text | ≈ 10 % |
| Deep ink (pill) | `#2B2E3D` | navy pill `#001478` role [tok a, d] | CTA pills in blocks 2–3, page-top disc | ≈ 1 % |
| Close yellow | `#E9D77A` | CTA yellow `#FFFB3A`, muted (S 48 %) | the grid-paper CTA pill only; small spots in illustrations | < 1 % |
| Hairline | `#A9ADBF` | 1 px blue hairline role [tok d] | card separators, table rules, footer rule | — |
| Grid line | `#E6E7EC` | `#E8E8E8` [tok a] | grid paper | — |
| Muted text | `#6B6E80` | derived from ink | sub-labels, details | — |
| Illustration fills | `#7C88B8` periwinkle, `#F4EBC4` butter, `#B8A88C` warm stone, `#45485A` slate | ref fills `#2E5CA8` / `#FFFB3A` / `#A89878`, muted | illustrations only | — |

First-screen saturated share (S > 0.45): reference ≈ 5.5 % [tok a]. **Ours: target ≤ 6 %, hard cap 15 %** (`check-first-screen.py`). Only the illustration's small butter/periwinkle fills count. The bars are a low-saturation ink. Not beige-led: white dominates, and butter appears only as bands.

## 5. Typography (font_direction **sans**)
- Latin display / nav / bars: **Hanken Grotesk** (variable 400–700). Latin body: **Inter Tight** (variable 400–600). Both are sans. No serif anywhere.
- Stacks (theme.json `fontFamilies`, loaded with `fontFace` so editor and front end match):
  - heading: `"Hanken Grotesk", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`
  - body: `"Inter Tight", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`
  - `:lang(zh-TW)` → `"Hanken Grotesk"/"Inter Tight", "Noto Sans TC", sans-serif`; `:lang(ja)` → `…, "Noto Sans JP", sans-serif` (sans-serif only, never serif).
- Files: copy `hanken-grotesk-variable-latin.woff2`, `noto-sans-tc-{400,700}-zh-tw.woff2` and `noto-sans-jp-{400,700}-ja.woff2` from `themes/kyugo-training/assets/fonts/`, and `inter-tight-variable-latin.woff2` from `themes/azuke-finance/assets/fonts/`, with their OFL files. These are zh-TW / ja subsets, made the Hokuto/Hada way (the subset script is broken). If style.css has `:lang(` rules, copy `shared/inc/editor-lang.php` → `inc/editor-lang.php` and `require_once` it.
- Sizes (theme.json presets): small `0.8125rem`, base `1rem`, medium `1.25rem`, large `1.875rem` (bars, = ref 30 px [tok b]), x-large `2.5rem`, **xx-large `4.5rem`** (max, ≥ 4.25rem; used for "60" and inner-page numerals). Fluid off for the bars.
- Body 1rem / 1.75, ls 0.02em (Latin). CJK body 0.9375rem / 1.85, ls 0.08em (= ref 1.28 px [tok b]). CJK headings ≈ 0.75× the English size. fr/de `hyphens:auto`.
- Labels and nav: EN caps Hanken 700 ls .08em [tok b] in every language. The local sub-label is in the page language.
- Weights: headings 700, bars 700, numerals 600, body 400, list item names 700.

## 6. Inner pages (13 + 404). Each: T1 bar head (K14) → body → grid-paper close with the CTA. No sidebar.
Inner head: full-bleed, 350 px tall desktop / 200 px mobile. White top, `#F3F4F6` lower 45 %, K14 skyline strip bottom-aligned (1400×350, 4:1). One ink bar with the page title at x240, 40 % down (mobile: in flow above the strip). Under the strip: an EN caps label + local sub. These page heads are not hero sections, but they still get no reveal.

1. **The briefing** `/briefing/`: the three parts at length (3 × 120 words), each beside K07 / K08 / K09 (alternating rows, as on home). Badge-only "THE HOUR". What to prepare (5 items, ruled list). Who attends (up to 4 of yours: finance lead, HR, a director, a staff rep). T3 open-slots panel with K03 / K04 / K05.
2. **Who it's for** `/who-its-for/`: T2 band R with K06. The three employer groups (5–49, 50–249, 250–500) as three ruled sections, each 90 words with "what we usually cover". A "not for you if…" paragraph (individuals seeking personal advice: we brief employers only).
3. **Fees** `/fees/`: badge-only "FEES". The full 7-row table (same as home, full width ≥ 782 px). T3 notes panel: VAT, travel beyond 40 km, cancellation (free up to 2 working days before, then 50 %), invoice on the day, 14-day terms. CTA pill on its border.
4. **Pension basics** `/basics/`: T2 band L with K07. A plain-language explainer: contributions, employer and staff shares, default funds, opting out, re-tendering. Then a glossary of 8 terms as ruled definition rows (term 700 left 30 %, definition right). Disclaimer: general information, not personal advice.
5. **Member sessions** `/member-sessions/`: T2 band R with K15. The 45-minute staff Q&A (up to 60 staff, £480), languages offered (the five site languages), the member letter (£180 per extra language). Story link to Northway.
6. **Advisers** `/advisers/`: badge-only "ADVISERS". The 7 people as a **ruled two-column name list** (name 1.125rem 700, role 0.875rem, one 20-word line each), no faces. T2 band L with K16 and a paragraph on independence and no commission.
7. **Stories** `/stories/` (`home.html`, `archive.html`, `single.html`): the 3 stories as posts (featured images K11, K12, K13), index = T3 stories panel. Single: featured image as a Ø280 round thumb beside the title, text column 680 px, a pull quote inside a small notched frame (T3), adviser named at the end.
8. **Request a briefing** `/request/`: the single action page. Whole page on grid-paper ground below the head. Badge-only "REQUEST". T3 slots panel (K03–K05). A second notched panel "What to send us": staff count, current scheme (if any), sites/languages, three preferred slots. One big CTA pill = `mailto:briefings@kikin-advisors.example?subject=Briefing request` (`#E9D77A`). Phone and hours under it. No form plugin.
9. **About & office** `/about/`: history 2014 → today in 3 paragraphs (no timeline graphic). T2 band R with K16. Office panel (T3 notched): address, hours, slot times, the 40 km radius, directions in text.
10. **Newsletter** `/newsletter/`: waitlist "Get the next open slots by email". A core HTML email field + submit, `action="mailto:…?subject=Slots list"`, inside a T3 notched panel. Figure K17. Privacy note. At most 2 emails a month.
11. **Thanks** `/thanks/`: bar head "Thank you." Next steps (2 working days, three slots). Figure K17. Link home.
12. **Privacy** `/privacy/`, 13. **Terms** `/terms/`: bar head + text column 720 px, h2 1.25rem. No images, no motion.
14. **404 / search**: bar head + a T3 small panel with the CTA.

## 7. Responsive
- **390 px:** no horizontal overflow. Mobile first screen: no vertical text, no absolutely positioned labels (bars in flow, see §2). Badges become Ø120, placed in flow above the band (top-left, overlapping the band top edge by 40 px via negative margin, not absolute). Vertical headlines become horizontal 1.25rem. Bands: full width minus 0 (still bleed one side), r24, padding 32 px 20 px, figure above the text. Notched panels: cards stack, thumbs Ø140, the vertical separators become horizontal 1 px rules, notch 18 px, pill stays on the bottom border.
- **782–1279 px:** fee table full container width. Price column `white-space:nowrap; text-align:right`, never cut. Badges Ø150.
- **Every table on < 782 px stacks:** each row becomes a block (item name + price on one line with price right and nowrap, detail below). `<thead>` visually hidden. The glossary does the same.
- The header nav collapses at < 1024 px. The grid-paper square size stays 60 px. The page-top disc becomes Ø64.

## 8. Illustrations (18). One STYLE string, one image at a time, Read each one

**Imagery: illustration.** Style reference ohara-sr.com: we generate our own and never copy, trace or edit the reference's illustrations, characters or compositions.

STYLE (exact, on every prompt):
`hand-drawn editorial illustration, black brush-pen outlines 2-4px slightly uneven, flat fills in only slate navy #45485A, muted periwinkle #7C88B8, pale butter #F4EBC4 and warm stone #B8A88C, no gradients, no shadows, no texture, buildings drawn in line on white or cream with window grids, people with simple friendly faces, diverse adults, modern international city setting, lots of white space, high-key, plain white background, no text, no letters, no numbers, no logos, no brand marks, no Japanese elements`

Rules: ≤ 300 KB, ≤ 2000 px, webp. 0 cutouts (K02 is a normal white-background image, shown with `mix-blend-mode:multiply`). Regenerate on any lettering (whiteboard curves must be lines only, no digits), broken hands or faces, or style drift. One readme line per image (AI-generated, CC0).

| ID | Subject / composition | Ratio | Used on (once per page) | Home |
|---|---|---|---|---|
| K01 | Wide street scene: glass office block with meeting-room window grid at left, corner café with a hanging cup-and-saucer sign (no letters), plane trees, mid-rise offices at right, no tower. **The right-centre foreground (40–80 % width, lower half) is an empty pale plaza** with no objects or lines | 2.2:1 (1800×820) | Home hero | ✔ |
| K02 | Older adviser (grey hair, slate jacket) drawing three rising stepped lines on a wheeled whiteboard. Younger finance lead (butter jacket, laptop under arm, coffee cup) beside, watching. Both face right, full figures | 6:5 | Home hero (multiply) | ✔ |
| K03 | Finance lead at a desk on a video call; laptop screen shows the adviser waving | 1:1 | Home slots; Briefing slots; Request slots | ✔ |
| K04 | Adviser with a folder arriving at a bright office reception, receptionist greeting | 1:1 | Home slots; Briefing; Request | ✔ |
| K05 | Three people at a board table, adviser pointing at a printed chart of stepped lines | 1:1 | Home slots; Briefing; Request | ✔ |
| K06 | Finance lead at a desk with a calculator; payslips, coin purse and a speech bubble floating around | 4:3 | Home who; Who it's for | ✔ |
| K07 | Close view: a hand drawing three stepped rising lines on a whiteboard, marker cap in the other hand | 4:3 | Home hour A; Briefing; Basics | ✔ |
| K08 | Adviser and a staff member talking; a plain letter between them, speech bubbles with dots | 4:3 | Home hour B; Briefing | ✔ |
| K09 | Two people at a small round table agreeing a date on a wall calendar (blank squares), handshake | 4:3 | Home hour C; Briefing | ✔ |
| K10 | Still life: a closed folder, a few pages, a sheet with stepped lines, a pen, a coffee cup | 4:3 | Home takeaway | ✔ |
| K11 | Bakery owner in an apron with the adviser at a shop counter, bread on shelves | 1:1 | Home stories; Story 1 | ✔ |
| K12 | Two architects with rolled drawings and the adviser at a drafting table | 1:1 | Home stories; Story 2 | ✔ |
| K13 | Depot supervisor in a hi-vis vest and the adviser holding a tablet, shelving behind | 1:1 | Home stories; Story 3; Member sessions | ✔ |
| K18 | Adviser holding a phone, a speech bubble with three dots beside | 4:3 | Home request | ✔ |
| K14 | Low skyline strip: offices, café awning, trees, in line, on white, very wide | 4:1 (2000×500) | every inner page head | — |
| K15 | Adviser at the front of a room, diverse staff seated, several speech bubbles | 4:3 | Member sessions | — |
| K16 | Three advisers at a shared desk by a window grid, plants, laptops | 4:3 | Advisers; About | — |
| K17 | Envelope, paper plane and a blank calendar page floating | 4:3 | Newsletter; Thanks | — |

Home = 14 positions (K01–K13, K18). Total 18.

## 9. Motion (sp-scroll + hero load CSS)
Copy `pipeline/assets/sp-scroll/` unchanged into `assets/`. Theme variables: `--sp-dur:1s; --sp-ease:ease; --sp-dist:30px` (reference `.sa`: 1.0 s, ease, ±30 px [tok g]).

| Effect | Where | Reference source / trigger / time / easing |
|---|---|---|
| **sp-parallax** (required) | home `kk-hero` section (outer group `.kk-hero.sp-parallax`). Moving layers: `figure.kk-hero__scene > img` (K01) and `figure.kk-hero__pair > img` (K02) move together. The foreground H1 bars and sub line are **not** inside a moving layer. `--sp-par:6%` desktop, `4%` at < 782 px (kept on mobile). Layer scale per sp-scroll default. The grey ground is CSS on the section and does not move | ohara: the scene layer rises 50→20 px on load, 1.0 s ease, and moves at a different rate from the bars. Ours keeps that "scene drifts, bars fixed" depth while scrolling. Verified by `check-parallax.mjs` (≥ 6 px) |
| **sp-reveal--up + sp-stagger** | card rows inside both T3 panels (blocks 2, 7; slots/stories on inner pages); the 3 hour rows (each row `sp-reveal--up`); takeaway list rows | ohara `.sa.up`: opacity 0→1 + 30 px translate, 1.0 s ease, class added by a scroll check. Stagger 0.12 s |
| **sp-reveal--left / --right** | T2 bands: figure `--left`, text column `--right` (mirrored on the L band). Badges get **no** reveal (they sit on the band edge) | ohara `.sa.left/.right`: ±30 px, 1.0 s ease |
| **sp-count** | the "60" numeral on home and Briefing | supporting (our own). 1.2 s |

Hero load animation (CSS keyframes, our own, not sp-reveal; selectors start with `html.sp-js:not(.sp-no-motion)` inside `@media (prefers-reduced-motion:no-preference)`, so it is visible in no-JS, `?sp-static` and the editor):
- bars: `clip-path: inset(0 100% 0 0)` → `inset(0 0 0 0)`, 1.0 s ease, bar 2 delay 0.15 s (ohara bars 0→350/385 px, 1.0 s) [tok g].
- `figure.kk-hero__scene`: opacity 0→1, `translateY(30px)`→0, 1.0 s ease (ohara 50→20 px) [tok g]. The parallax acts on the inner img, so they do not conflict.
- `figure.kk-hero__pair`: opacity 0→1, `translateX(30px)`→0, 0.5 s ease, delay 0.6 s (ohara bicycle slide-in, 0.5 s) [tok g].
- `html{scroll-behavior:smooth}` for the anchor menu (ohara 700 ms swing), disabled under reduced motion.
- No reveal on forms, the fee table, legal text or the hero. Reveals ≤ 60 % of home blocks.

## 10. Similarity to the reference (target 80 %)
| Dimension | Reference (ohara-sr.com) | Kikin Advisors |
|---|---|---|
| Main ink | `#2D3C9F` [tok a] | `#45485A` (swap, reasons §4; same contrast 9.4 vs 9.6:1) |
| Pill | `#001478`, 170×55, r10 [tok d] | `#2B2E3D`, 170×55 (210×55 on panels), r10 |
| Grounds | `#FFF` / `#F1F1F1` half / `#FEFCE4` band [tok a] | `#FFF` / `#F3F4F6` / `#F4EBC4` |
| Close CTA | yellow pill on 60 px grid paper, `#E8E8E8` lines [tok a, f] | `#E9D77A` pill on 60 px grid, `#E6E7EC` |
| First-screen saturation | ≈ 5.5 % | ≤ 6 % |
| Hero bars | 30 px / 700 / ls .1em, 60 px tall, x240, y325 + y405, white on ink [tok b, shot] | identical numbers, `#45485A` |
| Body type | 16 px / 1.4 / ls .08em [tok b] | 16 px / 1.75 / .02em Latin; CJK 15 px / 1.85 / .08em |
| Nav | EN caps 15 px 700 ls .08em + 12 px sub, 1 px dividers [tok b] | 0.9375rem 700 .08em + 0.75rem sub, 1 px dividers |
| Header | 105 px, logo x120 [tok c] | 105 px, logo x120 |
| Container / gaps | 980–1000, ≈120 px section gaps [tok c] | 980 / 120 px (mobile 72) |
| Circle badge | Ø176, 1 px [tok d] | Ø176, 1 px (mobile Ø120) |
| Band | r40, bleeds right, ≈480 tall [tok d] | r40 left corners, bleeds right (and mirrored), 480 |
| Notched panel | 980, 1 px, 45° notches TL/BR, pill on border, Ø210 thumbs [tok d, e] | 980, 1 px, 28 px 45° notches, pill on border, Ø210 |
| Imagery | brush-pen line + flat 3–4 fills, no shadow; hero 1400×640 (2.2:1); figures 400×300 (4:3), no frame [tok e] | same style (own art); K01 1400×640; figures 4:3 unframed; round thumbs |
| Decoration | circle badge, vertical headline, grid paper, arc edge, page-top disc [tok f] | all five |
| Motion | bars wipe 1.0 s; scene rise 1.0 s; bike slide 0.5 s; `.sa` 1.0 s ease ±30 px; smooth scroll [tok g] | same values; + sp-parallax 6 % |

Illustrations, copy and logo are all our own.

## 11. Home acceptance checklist
1. At 1440×900 the first screen shows: the K01 street full width, two ink bars over it at x≈240 (bar 2 longer), the K02 whiteboard pair at the right in the empty plaza (no line clashes visible through multiply), the grey lower ground, the header with round mark and 5 captioned nav items, and the top of the notched slots panel with its icon chip.
2. With `?sp-motion` the bars wipe left→right, the scene rises, and the pair slides in. With `?sp-static`/reduced motion everything shows in its final state.
3. `check-parallax.mjs`: hero layer offset ≥ 6 px on desktop and mobile, 0 under reduced motion. ≥ 3 reveals hidden before entry, none left transparent at the bottom.
4. Both T3 panels show two 45° notches, Ø210 round thumbs, 1 px separators and a pill sitting on the bottom border.
5. Who band bleeds right with r40 left corners. Takeaway band bleeds left. Each has a Ø176 outline badge straddling the corner and a vertical headline at ≥ 1024 px.
6. "60" is set at 4.5rem. theme.json max size is 4.5rem.
7. The fee table spans 980 px at 800 and 1280 px, with prices right-aligned, nowrap and uncut. At 390 px it stacks.
8. The grid-paper close has a 60 px grid, one yellow pill and the round page-top disc.
9. 14 image positions, none repeated. No photographs. No text in any illustration.
10. The CTA wording "Request a briefing" appears in blocks 2, 3 and 8 and in the header REQUEST item. There is no other call to action besides the "All stories" outline pill and text links.
11. At 390 px: no horizontal overflow, no vertical or absolutely positioned text in the first screen, bars in flow.
12. First-screen saturated share ≤ 15 % (target ≤ 6 %). Fonts are Hanken Grotesk / Inter Tight with Noto Sans TC/JP and match in the editor.
13. Numbers (fees, 60 min, 5–500 staff, 2 / 5 working days, 40 km, slot times) match brand.md and every inner page.
