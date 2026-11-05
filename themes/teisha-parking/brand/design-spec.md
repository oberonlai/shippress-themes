# Teisha Parking: design spec (stage B, binding for implementation)
Row b23-6 · type landing · archetype asymmetric-masonry · hero framed-window · first_screen three-equal-columns · nav centered · font_direction **sans** · IMAGERY **photo** (low-key).
Reference: https://4cs-ad.co.jp/ (primary) · Secondary: https://ogud.co.jp/urbanex/shift/ · tokens: `brand/reference-tokens.md` (cited as `tok(a)`…`tok(g)`).
Home = one long conversion page with an anchor menu and **one** repeated CTA wording: **"Ask for a bay"** → `#apply` on home, `/contact/` from inner pages. Photos and copy are our own; no reference assets, copy, handwriting or logo are reused.

## 0. Hard rules for the implementer (do not drift)
- Ground is a pale vertical wash, never beige/cream. Navy `#2C3A4A` is a photo/band colour, never a large flat first-screen area.
- First-screen saturated share (scripts/check-first-screen.py) target ≤ 8 %, cap 15 %; reference measured 0.0 % `tok(a)`.
- Price table: at ≥782px it spans the full content width (1200px), price column `white-space:nowrap; text-align:right`, never clipped. At <782px every table (prices, contract coverage, site list) becomes stacked rows (label above value).
- Mobile 390px first screen: no vertical text, no absolutely positioned labels over text; the overlapping caption becomes a normal block under the window.
- Only sp-* classes for motion; no custom scroll listeners; hero gets no `sp-reveal`; forms, price table and legal text get no motion.

## 1. Signature techniques (three, obvious at a glance)
### T1. Slit-opened three-column window with bay-line hairlines (source: 4cs-ad.co.jp first screen + intro slit, `ref/cs4-first.png`, `ref/scroll-cs4-loader.png`)
- Reference: one tall low-key sea photo window (340×640, ratio 0.53, 0 radius, no border/shadow) inset on a pale wash at x145 y160–800 `tok(c)(e)`; during the intro the window is three side-by-side columns revealed by a 70px slit that rises (600 ms ease-out cubic) then opens left/right (700 ms ease-in-out quint) `tok(g)`.
- Ours (home hero): one inset window made of **three equal columns** (each 296×640 at 1440, ratio 0.46, gap 0) showing one continuous dusk scene split into booth / ticket hand-over / lit bays (P01, P02, P03). Columns divided by 1px `#1A1A1A` @40 % hairlines that **run 48px past the window top and bottom** like painted bay-marking lines (4 lines: left edge, two dividers, right edge). Window x145–1033, y160–800 at 1440×900; 0 radius, no shadow.
- Open-on-load: CSS-only keyframe on a ground-coloured overlay `.tp-window__veil` (pseudo-element; the photos themselves stay visible without JS): veil scaleX 1→0 from centre, `transform-origin:center`, 700 ms `cubic-bezier(.83,0,.17,1)` (in-out quint) after a 600 ms `cubic-bezier(.33,1,.68,1)` scaleY 0→1 slit of 70px. Selector must start with `html.sp-js`; `prefers-reduced-motion`, `?sp-static` and the editor show the final state. It is a load animation, not a reveal.
- Parallax: each column is its own `sp-parallax` group with `--sp-par: 6% / 9% / 12%` (left → right).
- Must not fade: 0 radius, the hairlines overshooting the window, the dark window against the pale ground (contrast photo ~#2E3A4C vs ground #F4F5F5), three EQUAL columns.

### T2. Stepped quiet catch lines + overlapping caption + hairline "Scroll" rule + outline pill (source: 4cs-ad.co.jp first screen)
- Reference: three short right-aligned lines at x1032–1380 y398–500, 35px apart, each indented 29px further (stepped rag), 14.4px / lh 34.56px / ls 1.728px; italic 12px caption overlapping window lower-left; tracked caps "Scroll" + 1px rule to the right edge at y770; outline pill radius 100, 160×44 bottom-right `tok(b)(c)(d)(f)`.
- Ours: three catch lines (Source Sans 3 400, 0.95rem/2.4, ls 0.12em) right block x1080–1380, y400–500, line 2 `padding-left:29px`, line 3 `58px` (stepped rag kept, right-aligned block, lines left-aligned inside so the step shows):
  1. "Monthly bays in six town car parks."
  2. "Chosen on foot, with you, before you sign."
  3. "One form. One reply within two working days."
- Caption (Source Sans 3 italic 0.75rem/1.8, ls .04em, ink @80 %): "Bay 14, Canal Street — 6.40 pm" + 2 more lines, box x80–380, y630–700, overlapping the window's left edge by 65px (desktop ≥1024 only; ≤1023 it sits under the window as a normal paragraph).
- "SCROLL" Figtree 500 0.6875rem ls 0.35em uppercase at x80 y770, followed by a 1px `#1A1A1A` @30 % rule to the right edge (flex, rule `flex:1`).
- Outline pill CTA "Ask for a bay": 1px `#1A1A1A`, radius 100px, min 176×44, Figtree 500 0.75rem ls 0.2em uppercase, bottom-right x≈1204 y796; hover fills navy `#2C3A4A`, text white, 300 ms ease.
- Continuation: every inner page header uses the stepped catch lines (2–3 lines, 29px step) + hairline rule; the same pill on every page.

### T3. Hairline marquee ticker + oversized numeral ledger (source: ogud.co.jp/urbanex/shift, `ref/urbx-first.png`, `ref/scroll-urbx-900.png`)
- Reference: two 1px navy hairlines bounding a slow marquee of a repeated uppercase word (9–10px tracked) at y758–795, then giant numerals (≥9rem) beside short captions `tok(f)`.
- Ours: directly under the hero, full-bleed band 40px tall bounded by two 1px `#2C3A4A` hairlines; marquee (`sp-marquee`, 30s linear) of site names in Figtree 500 0.6875rem ls 0.3em uppercase separated by " / ": "CANAL STREET / MARKET HALL / NORTHGATE STATION / ORCHARD YARD / RIVERSIDE DEPOT / LIBRARY SQUARE /". Then a ledger row: three oversized numerals Figtree 300 `clamp(4.25rem, 9vw, 8.5rem)` lh 1, ls -0.02em, navy, each with a 2-line caption (0.875rem) to its right, left-aligned at different baselines (asymmetric): **6** sites · **412** monthly bays · **2009** since. `sp-count` on 6 and 412 (not on the year).
- Continuation: ticker band repeated above the footer on every page; numeral ledger reused on About (since/people/bays), Sites (bays per site), Fees (prices as big numerals header), Contract (2 working days, 30 days notice).
- Must not fade: both hairlines visible, ticker always moving (except reduced-motion), numerals ≥4.25rem thin weight.

### Continuation to inner pages (≥4 required; we do 8)
| Page | T1 | T2 | T3 |
|---|---|---|---|
| About | single-column window (P15) with overshooting hairlines | stepped header lines + pill | ledger (2009 / 6 people / 412 bays) |
| Sites | 3-column window per featured site (P05–P07 crops) | stepped header | ticker + bays-per-site numerals |
| How a bay is chosen | two-column window (P10, P16) | stepped header, 4 steps stepped 29px | ticker |
| Contract | single window (P11) + overlapping caption | stepped header | numerals 2 / 30 |
| Fees | — | stepped header + pill | price numerals ledger, ticker |
| FAQ, Contact, Newsletter | small window strip on Contact (P16) | stepped header + pill everywhere | ticker above footer |

## 2. Key visual concept
**(1) Reference first screen** (4cs-ad.co.jp): a tall, dark, desaturated dusk-sea photo window inset on a pale white→grey wash; three quiet tracked lines stepping to the right; a small italic caption crossing the window edge; a hairline "scroll" rule and an outline pill. Story: "shape the flow, then the view beyond" — calm order out of stillness. Signature motion: a loader, then a narrow slit rises and opens centre-out to reveal the photo, catch lines blur in one by one.
**(2) Our translation** (monthly car-park bays): same composition, same motion idea, same image type (low-key documentary photo). The window is the barrier booth at dusk, cut into three equal columns of one scene: (left) the lit booth and the attendant, (middle) the hand-over of a ticket through the driver's lowered window, (right) the quiet lit bays beyond the raised barrier. The slit opens like the barrier lifting; the hairlines are bay markings. Story: "a bay that is simply yours — chosen calmly, one way to apply". The calm wash, stepped lines, caption and pill stay.
**(3) KV checklist** (all on the first screen at 1440×900, all visible):
| # | Reference element | Our version | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Tall low-key photo window, 0 radius | Three-equal-column window, booth / hand-over / lit bays, hairlines overshoot 48px | x145–1033, y160–800 | slit 70px 600 ms ease-out cubic → opens centre-out 700 ms in-out quint; columns `sp-parallax` 6/9/12 % | P01, P02, P03 |
| 2 | Pale vertical wash ground | `linear-gradient(180deg,#FFFFFF 0%,#DDE1E3 45%,#F4F5F5 100%)` | full first screen | none | — |
| 3 | Three stepped catch lines | three lines on sites / choosing / applying, step 29px | right x1080–1380, y400–500 | `sp-stagger` + `sp-reveal--up` is **not** used on hero; instead CSS load fade+blur(8→0)+translateY(20→0) 500 ms, delays 900/1050/1200 ms, html.sp-js gated | — |
| 4 | Italic caption overlapping window corner | "Bay 14, Canal Street — 6.40 pm" + 2 lines | x80–380, y630–700 | fade 500 ms, delay 1300 ms | — |
| 5 | Hairline "Scroll" rule | "SCROLL" caps + 1px rule to right edge | y770 | rule scaleX 0→1 800 ms ease-out, delay 1400 ms | — |
| 6 | Outline pill CTA | "Ask for a bay" pill, the single CTA | bottom-right x1204 y796 | hover fill navy 300 ms | — |
H1 (visually the display line, replacing the reference's handwritten word area, NOT a script font): "A bay of your own." Figtree 300 `clamp(2.75rem, 5.2vw, 4.5rem)` lh 1.05, ls -0.01em, ink, right-aligned at x≈1080–1380, y≈250–360 (above the catch lines). Header: centered nav (logo wordmark left 1.25rem Figtree 600, anchor menu centered: Sites · Choosing · Contract · Fees · Stories, navy pill "Menu"-style button right = the CTA pill is NOT duplicated in header; header right holds a solid navy pill "Apply" 120×40 radius 100 linking `#apply` — same wording rule: label it "Ask for a bay").

## 3. Colour (reference relations, navy swapped in)
| Role | Hex | Share | Source |
|---|---|---|---|
| Ground wash | #FFFFFF → #DDE1E3 → #F4F5F5 | ~68 % | tok(a) wash; grey-green #889995@35 % over white ≈ #DDE1E3 (kept within ±5 % L) |
| Section alt ground | #EEF0F1 | (sections) | tok(a) #B8B9BA@35 % over white |
| Window photos | #2E3A4C / #4A5870 family | ~17 % | tok(a) window |
| Ink | #1A1A1A | ~4 % | tok(a) |
| Navy (theme primary: pill, ticker hairlines, numerals, apply band) | #2C3A4A | ~3 % | row hex; replaces aubergine #231B3B (pill) — industry fit: navy = night signage |
| Hairline | #1A1A1A @30–40 % | — | tok(d)(f) |
| Muted text | #5A6370 | — | derived |
| Accent booth amber (one small dot in caption, link underline hover, price-table "most chosen" mark) | #C98F4A | <1 % | photo light, sparingly |
First screen saturated cap: target ≤8 %, hard 15 %. Apply band (#2C3A4A full-width) only below the fold.

## 4. Type (sans direction)
- Latin display/headings: **Figtree** (variable 300–700). Latin body: **Source Sans 3** (400, 600, 400 italic).
- Stacks: heading `"Figtree", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`; body `"Source Sans 3", system-ui, -apple-system, "Segoe UI", sans-serif`.
- `:root:lang(zh-TW)` heading `"Figtree","Noto Sans TC",sans-serif`; body `"Source Sans 3","PingFang TC","Microsoft JhengHei",sans-serif` (body must NOT include bundled Noto Sans TC or any JP font — repo contract). `:lang(ja)` heading `"Figtree","Noto Sans JP",sans-serif`; body `"Source Sans 3","Hiragino Sans","Yu Gothic",sans-serif`. No Mincho/Serif anywhere.
- All loaded via theme.json `fontFamilies[].fontFace` (Figtree, Source Sans 3, Noto Sans TC subset, Noto Sans JP subset — subset with the Hokuto/Hada workaround), so editor iframe = front end; copy shared/inc/editor-lang.php to inc/editor-lang.php and require it (style.css uses `:lang(`).
- Scale (theme.json fontSizes): xs 0.75rem · s 0.875rem · m 1.0625rem (body, lh 1.8) · l 1.375rem · xl 2rem (h2 600, lh 1.35, ls .02em; tok(b) 31.7–36px) · xxl 2.75rem · display `clamp(4.25rem, 9vw, 8.5rem)` (ledger numerals, weight 300). Max ≥4.25rem ✔. Tracked caps labels 0.6875rem ls 0.3–0.35em (tok(b) 11px/3.85px). Catch lines 0.95rem lh 2.4 ls 0.12em (tok(b) 14.4/34.56/1.728). CJK sizes ×0.75 for display/xxl, body lh 1.85; de/fr `hyphens:auto`.

## 5. Spacing, radius, ratios (from tokens)
Content width 1200px, wide 1320px; side padding 60px desktop / 20px mobile `tok(c)`. Section rhythm 160px desktop / 96px mobile `tok(c)` 140–200. Radius: photos 0, pills 100px, inputs 2px `tok(d)`. No shadows. Photo ratios: hero columns 0.46 (296×640); single windows 0.53 (portrait, tok(e)); masonry tiles 3:4 and 4:5 alternated; full-bleed 21:9; story cards 4:3. Overlap: captions cross a window edge by 60–70px (tok(e) 65px) on desktop only.

## 6. Home page
### First screen (1440×900)
Header 96px (logo y45). Ground wash. Window x145–1033 y160–800 (three columns P01/P02/P03, overshooting hairlines y112–848). Right column x1080–1380: H1 y250–360, catch lines y400–500, caption crossing window at x80–380 y630–700, SCROLL rule y770, pill y796. Nothing else; no table/form/search.
### 390px first screen
Header 64px; H1 2.75rem left-aligned; window full width minus 40px, 3 columns each ~116×300, hairlines overshoot 24px; catch lines below (step 12px); caption as normal paragraph; pill full-width-ish 100 %/max 280px; SCROLL rule hidden. Parallax kept (`--sp-par` 4/6/8 %). No absolute labels.

### Block order (anchors in brackets)
| # | Block | Purpose | Layout & images | Copy |
|---|---|---|---|---|
| 1 | Hero [#top] (T1+T2) | KV | §6 first screen, P01 P02 P03 | H1 + 3 lines + caption |
| 2 | Ticker + ledger (T3) | scale at a glance | hairline marquee band; ledger 6 / 412 / 2009 asymmetric baselines | 3×12 words |
| 3 | A bay that is simply yours [#about] | who / why | asymmetric: left 4/12 single window P04 (0.53, hairlines overshoot) with caption crossing its right edge; right 7/12 h2 + 3 paragraphs | 170 words |
| 4 | Which sites a contract suits [#sites] | 6 sites | **asymmetric masonry**: 3 columns, middle column offset down 120px; 4 photo tiles P05 P06 P07 P08 (3:4 / 4:5) + 2 text-only hairline tiles; each tile: site name (Figtree 600 1.25rem), suited-for line, bays count; `sp-stagger` + `sp-reveal--up` | 6×30 words |
| 5 | Full-bleed dusk band | breath, parallax #2 | `core/cover` 70vh P09 (empty lit bays from above at blue hour), `sp-parallax --sp-par 10%`; one white line lower-left "Every bay is walked with you before you sign." | 10 words |
| 6 | How a bay is chosen [#choosing] | the 4 steps | left 5/12 window P10 (0.53); right 7/12 four ruled rows stepped 29px each (T2 rag), number Figtree 300 2.75rem + title + 25 words; `sp-stagger` + `sp-reveal--up` | 4×30 + intro 40 |
| 7 | What the contract covers [#contract] | coverage | `#EEF0F1` band; left 7/12 h2 + 2-column hairline list of 8 items (covered / not covered); right 4/12 window P11 with caption overlap | 140 words |
| 8 | Fees [#fees] | 6 prices | white; heading + note left 4/12, then full-width price table (12/12, 1200px), price right nowrap, amber dot on "most chosen"; NO motion | table + 40 words |
| 9 | Drivers' notes [#stories] | 3 stories | 3 columns 4:3 photos P12 P13 P14, label "NOTE 01", title, 35-word excerpt, links to posts; `sp-reveal--up` | 3×40 |
| 10 | Ask for a bay [#apply] | single CTA + waitlist | full-width navy `#2C3A4A` band; ticker repeated in white hairlines on top; left: h2 white + 50 words + reply-time line; right: outline white pill "Ask for a bay" → /contact/ and text link "Join the waitlist for a full site" → /newsletter/ | 70 words |
| — | Footer | | #F4F5F5, wordmark 2.5rem, address + hours, anchor list, pages (About, Sites, Choosing, Contract, Fees, FAQ, Journal, Contact, Newsletter), legal (Privacy, Terms) | |
Home photo positions: P01 P02 P03 P04 P05 P06 P07 P08 P09 P10 P11 P12 P13 P14 = **14** (≥8), none repeated. Home English ≥250 words (target ~650), narrative paragraphs in blocks 3, 6, 7.

### Comparison with recent homes
| Theme | Order | Why ours differs |
|---|---|---|
| Waku Exhibits | full-bleed hero → photo-filled statement → halls rows → planning-hour band → full-bleed → prices → stories → cards on cover | ours: inset three-column window (not full-bleed), ticker+ledger second, masonry sites, stepped rows, navy band close (no cover cards) |
| Kanjo College | framed window hero → paper cards on ledger panel → … → route bar | ours: three equal columns with overshooting hairlines + slit, no cards on panel, ticker not route bar |
| Mugi Bakehouse | half-ring hero → prose → loaves → schedule → full-bleed → order → neighbours → rows → visit | no rings, no product rows, no schedule table |
| Sokuten Survey | accordion strip hero → sites → hour → parallax pause → voices → takeaway → fees → notes → FAQ → request | no accordion strips; ticker+numerals block; masonry not list; contract coverage block; no FAQ on home |
| Misora Links | ticket frame hero → sheet → 3 rounds → full-bleed → season rows → people → fees → stories → journal → visit | no ticket frame, no people block on home |

## 7. Inner pages (≥8)
| Page (slug) | Key content | Signatures / images |
|---|---|---|
| About (about) | founded 2009, why monthly only, the 6 people, how sites are kept | T1 single window P15, T2 header, T3 ledger; people as 2-column ruled list (name, role, 20 words), not a 4-person grid |
| Sites (sites) | 6 sites: address line, bays, height limit, access hours, suited for, nearest stop | T1 3-column window P05/P06/P07 header; masonry tiles; table → stacked on mobile; T3 numerals |
| How a bay is chosen (choosing) | 4 steps in prose, what to bring, the site walk | T1 two-column window P10+P16; stepped rows; ticker |
| Contract (contract) | what is covered / not, term, notice, keys & fobs, insurance note, changes | T1 window P11 + caption overlap; numerals 2 / 30 |
| Fees (fees) | full price table, deposit, what is included, payment | T2 header; full-width table; T3 ticker; no motion on table |
| FAQ (faq) | 10 questions as `core/details` | T2 header; P09 small band |
| Journal (news, role posts) + 3 posts | drivers' notes (stories) + 1 site notice | post featured P12 P13 P14 |
| Contact / Apply (contact) | single form (name, email, site, vehicle, start month), office hours, address | P16 window strip; pill |
| Newsletter (newsletter) | waitlist for full sites: email + site choice | T2 header; P08 small window |
| Privacy, Terms, Thanks | legal text (no motion), thanks = stepped lines + pill back home | — |

## 8. Fixed numbers (identical on every page and all five languages)
- Company: Teisha Parking, founded **2009**, office: 18 Canal Street, Northgate (fictional town). Office hours Mon–Sat 9:00–18:00, closed Sun & holidays; sites open 24 h; office phone line Mon–Fri 9:00–17:00. Reply to any request within **2 working days**; notice period **30 days**.
- Sites (6, total **412** bays): Canal Street 64 · Market Hall 88 · Northgate Station 96 · Orchard Yard 42 · Riverside Depot 74 · Library Square 48.
- Fees (monthly unless stated): Open-air bay €95 · Covered bay €135 · Compact / motorcycle bay €45 · Bay with EV charger €165 (most chosen mark: Covered) · Weekday-only bay (Mon–Fri) €80 · Deposit for key fob €30 one-off. (6 items)
- Process (4): 1 Ask for a bay (form) → 2 Reply within 2 working days with free bays → 3 Walk the site together (20 minutes) → 4 Sign, pay first month + fob deposit, start on the 1st or 15th.
- People (6): Mara Lindqvist (founder, site walks), Tomás Reyes (operations), Aiko Brandt (contracts), Samuel Okafor (night attendant, Canal Street), Lena Fischer (accounts), Priya Nair (customer replies).
- Stories (3): "The nurse on nights" (Covered bay, Northgate Station), "Two vans, one bakery" (Riverside Depot), "Charging by the library" (EV bay, Library Square).

## 9. Images (16; Grok, one at a time, read each)
STYLE (all images): `low-key documentary photograph at blue hour, sodium-lit town car park, desaturated navy and slate shadows, one warm amber window light, quiet and calm, shallow depth of field, natural film grain, international neutral modern setting, diverse people, no text, no logos, no signs with letters, no number plates readable`
| # | Subject / composition | Ratio | Used |
|---|---|---|---|
| P01 ★ | lit barrier booth, attendant inside behind glass, left part of scene, tall crop | 1:2.16 | Home hero col 1 |
| P02 ★ | close: attendant's hand passing a paper ticket to a driver's hand through a lowered car window | 1:2.16 | Home hero col 2 |
| P03 ★ | raised barrier arm, empty lit bays receding beyond, dusk sky | 1:2.16 | Home hero col 3 |
| P04 ★ | driver walking to her car in a quiet covered bay, from behind | 0.53 | Home #about |
| P05 ★ | open-air car park by a canal at dusk | 3:4 | Home sites, Sites header |
| P06 ★ | multi-storey ramp with soft amber lamps | 4:5 | Home sites, Sites header |
| P07 ★ | small courtyard car park under trees, wet tarmac | 3:4 | Home sites, Sites header |
| P08 ★ | covered bays near a station, commuters' silhouettes | 4:5 | Home sites, Newsletter |
| P09 ★ | top-down rows of empty lit bays at blue hour | 21:9 | Home full-bleed band, FAQ |
| P10 ★ | staff member and customer walking a row, pointing at a bay | 0.53 | Home #choosing, Choosing |
| P11 ★ | key fob and folded contract on a booth counter, warm lamp | 0.53 | Home #contract, Contract |
| P12 ★ | nurse in scrubs closing car door in covered bay at night | 4:3 | Home story 1, post 1 |
| P13 ★ | baker loading crates into a van at dawn depot | 4:3 | Home story 2, post 2 |
| P14 ★ | EV charging cable plugged in, library facade lights beyond | 4:3 | Home story 3, post 3 |
| P15 | founder in a reflective jacket at a booth window, half-turned | 0.53 | About |
| P16 | office counter with a map board and two chairs, dusk window | 3:2 | Choosing col 2, Contact |
★ = home. Each ≤300 KB webp, ≤2000px, no repeats on one page, no cut-outs.

## 10. Scroll effects (sp-scroll)
| Effect | Where | Source & timing | Our settings |
|---|---|---|---|
| `sp-parallax` (required) | Hero: three column groups, background = P01/P02/P03 `figure>img`, foreground text is outside the moving layers | 4cs-ad slit window (canvas reveal 600+700 ms) → we keep a static window that drifts | `--sp-par: 6% / 9% / 12%` desktop, 4/6/8 % ≤781px |
| `sp-parallax` #2 | Block 5 cover P09, white line foreground | 4cs-ad section image rise 1.0 s cubic-bezier(.22,1,.36,1) | `--sp-par: 10%` (mobile 7 %) |
| `sp-stagger` + `sp-reveal--up` | Sites masonry tiles, choosing steps, stories cards | 4cs-ad catch lines blur+rise 0.5–0.6 s cubic-bezier(.22,1,.36,1), 40px | 0.12 s step, ≤24px rise, ease `cubic-bezier(.22,1,.36,1)` 0.7 s |
| `sp-marquee` | Ticker bands (home under hero, apply band, above footer every page) | urbanex hairline ticker, continuous linear | 30 s linear |
| `sp-count` | Ledger 6 and 412, site bay counts | 4cs-ad count-up in-out quad | built-in 1.2 s |
Hero has no reveal; price table, forms, legal text have no motion.

## 11. Similarity table (target 80 %)
| Dimension | Reference value | This theme |
|---|---|---|
| Ground | white→#889995@35 %→#B8B9BA@35 % wash | #FFF→#DDE1E3→#F4F5F5 wash |
| Window photo | ~#4A5870/#2E3A4C low-key, 17 % | same family, ~17 % |
| Ink | #1A1A1A | #1A1A1A |
| Pill | #231B3B solid 140×40; outline 160×44 r100 | navy #2C3A4A solid 120×40; outline 176×44 r100 |
| Saturated share | 0.0 % / 4.6 % | ≤8 % |
| Window geometry | x145 y160–800, 0 radius, ratio 0.53 | x145 y160–800, 0 radius, 3×0.46 |
| Catch lines | 14.4px/34.56/ls1.728, step 29px, 35px apart | 0.95rem/2.4/ls .12em, step 29px, 35px apart |
| Caption overlap | italic 12px/21.6, crosses window by ~65px | italic 0.75rem/1.8, crosses 65px |
| Scroll rule | caps 11px ls 3.85px + 1px @30 % at y770 | 0.6875rem ls .35em + 1px @30 % at y770 |
| Ticker | 2×1px navy hairlines, 9–10px caps | 2×1px #2C3A4A, 0.6875rem caps |
| Numerals | serif ≥9rem | Figtree 300 clamp(4.25–8.5rem) (sans per row) |
| Motion | slit 600 ms out-cubic + 700 ms in-out quint; reveals 0.6–1.0 s cubic-bezier(.22,1,.36,1) | same values (load veil + sp-reveal) |
| Type | serif Shippori Mincho | sans Figtree / Source Sans 3 (row font_direction — deliberate deviation) |
| Section rhythm | 140–200px | 160px |

## 12. Home acceptance checklist
- [ ] First screen shows all 6 KV items (three-column window with overshooting hairlines, wash, stepped lines, overlapping caption, SCROLL rule, outline pill) at 1440 and their stacked forms at 390.
- [ ] H1 "A bay of your own." not centred; no script/handwritten font.
- [ ] Ticker band + 6 / 412 / 2009 numerals directly under hero; numerals ≥4.25rem.
- [ ] Sites block is asymmetric masonry (middle column offset), 4 photos + 2 text tiles.
- [ ] Two parallax regions pass check-parallax.mjs (≥6px desktop and mobile, 0 under reduced-motion).
- [ ] Price table full width at 800 and 1280, price column nowrap right; stacked at 390.
- [ ] Exactly one CTA wording "Ask for a bay" everywhere; anchor menu targets #sites #choosing #contract #fees #stories #apply work.
- [ ] 14 home images, no repeats; ≥250 English words; ≥3 narrative paragraphs.
- [ ] First-screen saturated share ≤8 % (cap 15 %); no beige; navy only in pills, hairlines, numerals, apply band.
- [ ] Editor and front end fonts identical in en and zh-TW (check-editor-fonts.mjs).
- [ ] auto-gates.mjs pass (no overflow at 390/1280, no overlap on mobile first screen).
