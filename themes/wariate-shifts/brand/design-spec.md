# Wariate Shifts: design spec (stage 1, binding for implementation)

Slug `wariate-shifts`, type `landing`, row b22-5, rota (shift-scheduling) software for small shops, demo-booking landing page, five languages (en, zh-TW, ja, fr, de). The home page has one goal: **one booked demo hour.**

Reference (only one): AirSHIFT product page, https://airregi.jp/shift/. Evidence: `ref/airshift-first.png`, `ref/airshift-tabs.png`, `ref/airshift-reasons.png`, `ref/scroll-airshift-bar-before.png`, `ref/scroll-airshift-bar-after.png`. Tokens: `reference-tokens.md`, cited as `[tok a]` to `[tok g]`. We borrow structure, techniques, measured values and the key-visual concept. We copy no photo, UI screen, copy, wordmark or logo.

**Imagery: photo** (stage-a IMAGERY: photo). Documentary photographs only, made with Grok in one STYLE (section 9). No UI mock-ups, no device frames, no illustrations, no icons.

**Decisions that change stage-a.md (this spec wins):**
1. **The arched strip shows four different kinds of shop** (bakery, florist, bookshop, cafe), not four views of one shop. The reference strip shows four trades (shop counter, bar, clothing, florist) to say "any kind of shop". We keep that story.
2. **Text, ground, grey and floating-bar colours use the reference values exactly** (`#222222`, `#555555`, `#FFFFFF`, `#FAFAFA`, `#E5E5E5`, `rgba(0,0,0,.70)`) [tok a]. stage-a's tinted text colours are dropped.
3. **Only two hues change.** Main sky blue `#20AEE5` becomes grape-mouse `#5E4D6B`, and tint `#E1F0F8` becomes `#ECE7EF` at the same lightness. Reason: the row's palette is fixed as "grape mouse" (budou-nezumi) and its note asks for a quiet palette. A sky blue strip, headline and tabs would be the loudest thing on the page. Roles, positions and proportions stay those of the reference.
4. **The CTA accent stays the reference's orange hue, darkened for contrast**: `#C4701A` instead of `#F2971B` (hue 33° vs 35°, lightness 42% vs 53%). This is outside ±5% lightness, for one reason: white 20 px text on `#F2971B` is 2.1:1, and on `#C4701A` at weight 700 it is 3.7:1. stage-a's copper `#B8692F` is dropped because it moves away from the reference hue.
5. **The second hero pill is filled main**, as in the reference, not outlined.
6. **The floating CTA bar is pure CSS** (scroll-driven animation, section 8), uses the reference's `rgba(0,0,0,.70)`, and is left out in static, reduced-motion and unsupported browsers.
7. **Row fields** `hero: diagonal-split` and `first_screen: centered-narrow-column` are kept. A centred narrow text column sits in the left half. The KV photo on the right has a diagonal left edge, in the place of the reference's device group.

---

## 0. Fixed facts (home, inner pages, footer and all five languages use exactly these)

| Fact | Value |
|---|---|
| Name | Wariate Shifts |
| What it is | Rota software for shops: lay out the week, collect availability, swap shifts, cover sick days, hours for payroll |
| Founded | **2019** |
| Office | 2nd floor, 18 Coldharbour Yard, Westmere (fictional town, no country) |
| Phone / email | +1 555 0187 / demo@wariate-shifts.example |
| Audience | Managers of independent shops with **1 to 6 locations** and **5 to 60 staff** |
| Office hours | Mon–Fri **08:30–17:30** |
| Support hours | Mon–Sat **07:00–19:00** (shops open early) |
| Demo slots | Mon–Fri **10:00, 13:30 and 16:00**, **60 minutes**, by video call, or at your shop if it is in Westmere |
| Reply to a booking | within **1 working day** |
| After the demo | A draft of your next week's rota by email within **1 working day** |
| Trial | **First month free** on any plan after the demo. Nothing is charged automatically |
| Currency | **USD** in every language; no converted prices |

**The demo hour (4 parts, same everywhere, shown as the time bar on home):**
1. **Your week**, minutes 0–10: how you lay out the week now, on paper or in a spreadsheet.
2. **Build next week**, minutes 10–35: we enter your real sheet together and lay out next week.
3. **Changes**, minutes 35–50: an availability request, a swap and a sick day, done live.
4. **Prices and questions**, minutes 50–60: which plan fits, what setup takes.

**The five features (the five folder tabs, same order everywhere):**
| # | Tab label | Three steps inside the panel |
|---|---|---|
| 1 | Lay out the week | 1 Copy last week's pattern · 2 Drag people into gaps · 3 Publish to everyone's phone |
| 2 | Collect availability | 1 Staff mark days they can work · 2 A reminder goes out on Thursday · 3 Answers land on the rota grid |
| 3 | Swap a shift | 1 A colleague offers a shift · 2 Another accepts · 3 You approve once |
| 4 | Cover a sick day | 1 Mark the shift open · 2 Free, qualified people are asked · 3 The first yes fills it |
| 5 | Hours for payroll | 1 Clock in at the counter · 2 Breaks are added up · 3 Export the week by Sunday night |

**Prices (7 items, USD per shop, excl. tax):**
| Item | Price |
|---|---|
| Demo hour | Free |
| One shop, up to 15 staff | $29 / month |
| One shop, 16–40 staff | $49 / month |
| One shop, 41–60 staff | $69 / month |
| Each additional shop | $25 / month |
| Setup session (90 minutes, we enter your staff and patterns) | $90 one-off |
| Paper-sheet import (we key in your last 4 weeks) | $60 one-off |

Note line under every price table: "First month free after the demo. Nothing is charged automatically. Cancel any month."

**People (7):**
| Name | Role |
|---|---|
| Hanna Rautio | Co-founder, product (ran a bakery floor for nine years) |
| Tomás Aguilar | Co-founder, engineering |
| Amara Okonkwo | Demo lead |
| Lukas Brenner | Setup and onboarding |
| Mei-Lin Ho | Support, early shift |
| Rosa Ferreira | Design |
| Yusuf Demir | Shop accounts |

**Stories (3, fictional shops; no percentages, savings or time-saved figures):**
1. **Hollin Bakery**: 1 shop, 14 staff, opens 06:30, manager Ines Duarte. The weekend early shift used to be fixed on a Friday phone call. Now staff swap it among themselves and Ines approves once.
2. **Fennick Flowers**: 1 shop, 6 staff, manager Oskar Lund. Wedding Saturdays need extra hands. Availability for the season is collected in March and the Saturdays are laid out first.
3. **Tessaly Books**: 2 shops, 11 staff, manager Ruth Adeyemi. Some staff work at both shops. One week shows both, so nobody is booked twice.

**A day (brand.md, contract word "day"):** the daily routine starts at 07:00 when support opens for shops that open early. The first demo is at 10:00, setup sessions run at midday, the 13:30 and 16:00 demos follow, and draft rotas go out before 17:30.

**Copy rules:** no guarantees, no statistics, no download counts, no awards, no real shops or brands, no claims about who uses the product. The voice is calm and plain, like a manager who used to write the sheet by hand.

---

## 1. Signature techniques (three, all must be obvious at a glance)

### T1. Four photos edge to edge under one shallow arch, directly under the centred text (AirSHIFT first screen, https://airregi.jp/shift/, `ref/airshift-first.png`) [tok e]
- **Reference:** under the hero text and device group, four equal photos of shop staff run edge to edge across the full 1440 px, with no gaps and no radius. Their top edge is one shallow curve: the white above sags into the photos. Measured at 1440: photo top is y 585 at x 0 and x 1440, y 608 at x 360 and 1080, and y 615 at the centre. That is a 30 px parabolic sag, and the visible height at the edges is 160 px (y 585 to 745). Each photo is 360×160 (2.25:1).
- **Ours:** home block 1, y 585 to 745 at 1440×900. Four documentary photos P02–P05 (bakery, florist, bookshop, cafe before opening) at 25% width each, `object-fit: cover`. The strip is `width: 100vw` (alignfull), height 160 px, `gap: 0`, `border-radius: 0`.
- **The arch:** a mask on the strip wrapper, not on the photos. Use `assets/arch-mask.svg`, a file with `viewBox="0 0 1440 160" preserveAspectRatio="none"` and one white path `M0 0 Q720 60 1440 0 V160 H0 Z`. The quadratic curve with control point y 60 gives exactly a 30 px sag at the centre and about 22 px at x 360. CSS: `mask: url(../arch-mask.svg) 0 0 / 100% 100% no-repeat` (with the `-webkit-` prefix). Below the strip the next band is white, flat edge.
- **Continuation:** every inner page head has an **arched photo band**: one full-bleed photo at 1440×240 under the centred head column, using the same mask and the same 30 px sag (section 6). The Stories page head uses the full four-photo strip again (P02–P05).
- **Must not be diluted:** four photos, not three; edge to edge with 0 gap and 0 radius; the curve is visible (30 px at 1440, 16 px at 390), white above, and sags downward at the centre; directly under the text, with nothing between them but white space. Do not fake it with `border-radius` on a box (that rounds the corners, not the edge).

### T2. Folder-tab panel with numbered circle steps (AirSHIFT feature block, https://airregi.jp/shift/, `ref/airshift-tabs.png`) [tok d, f]
- **Reference:** a row of five tabs (150×40, r8 top) sits on the top edge of a panel with a 2 px blue outline and r16. Inactive tabs are solid blue with white text. The active tab is white with a blue outline and breaks the panel's top border, so it reads as the open folder. Inside the panel: a label | description row split by a 1 px vertical rule, then three columns, each with a 24 px filled circle numeral, a bold blue step label, and a 3:2 picture in a light-grey bordered r8 frame. A white pill button sits under the panel.
- **Ours:** home block 4 `#demo` "What the demo shows". Five tabs from section 0, centred above a 1120 px panel. Tab 1 "Lay out the week" is active.
  - Tabs: `min-width: 168px`, height 48 px, padding 0 16 px, gap 4 px, `border-radius: 8px 8px 0 0`, label Albert Sans .875rem 700, centred, up to two lines. Inactive tabs: fill `#5E4D6B`, white text, hover opacity .8 over .3s [tok g]. Active tab: fill `#FFFFFF`, 2 px `#5E4D6B` border on top, left and right, no bottom border, text `#5E4D6B`, `margin-bottom: -2px` and `z-index: 1`, so it covers the panel border beneath it.
  - Panel: 2 px solid `#5E4D6B`, `border-radius: 16px`, padding 40 px 48 px 48 px, ground `#FFFFFF`.
  - Row 1: "Lay out the week" (Inter Tight 1.125rem 700 `#222222`, width 220) | 1 px `#E5E5E5` vertical rule, 48 px tall | description (2 lines, .9375rem `#555555`).
  - Row 2: three equal columns, gap 24. Each has a 24 px circle filled `#5E4D6B` with a white numeral (.8125rem 700), gap 8, step label Albert Sans 1.0625rem 700 `#5E4D6B`, then a 3:2 photo (P11, P12, P13) with `border-radius: 8px` and a 1 px `#E5E5E5` border, then one 25-word line in `#555555`.
  - Tabs 2–5 are plain links to `/features/#availability`, `#swap`, `#sick-day`, `#payroll`. No tab JavaScript, so the editor and no-JS views are identical.
  - Under the panel: white pill button with a 1 px `#E5E5E5` border, shadow `0 4px 8px rgba(0,0,0,.16)`, 370×60, label "See all five in detail" in `#5E4D6B` 1.25rem [tok f, d] → `/features/`.
- **Continuation:** the Features page repeats the panel five times, each with a different tab active, like the reference's repeated tab rows. The Prices page puts its price table inside a one-tab panel ("Prices per shop" active). The Book a demo and Early access pages put their form inside a one-tab panel.
- **Must not be diluted:** the tabs must be solid main colour (not grey, not outline-only); the active tab must visibly break the panel's top border; the outline is 2 px; the circles are filled. Do not convert the panel into a pill switcher or an underline-tab row.

### T3. Slash-flanked caption over a pill CTA, one CTA wording everywhere (AirSHIFT hero and CTA bands, https://airregi.jp/shift/, `ref/airshift-first.png`, `ref/airshift-reasons.png`) [tok f, d]
- **Reference:** every conversion button has a small caption directly above it, framed by a backslash before and a slash after ("\ first month free /"). The slashes lean outwards like two hands pointing in. The same orange pill CTA, with the same wording, appears in the header, the hero, the CTA bands and the floating bar. Section heads use the same slash caption as a kicker above the H2.
- **Ours:** caption Albert Sans .875rem 600 `#555555`, letter-spacing .05em, centred over the button, 8 px gap. The slashes are text glyphs in the markup (`\` and `/`, with one thin space inside each), never CSS `content`. The slash glyphs are `#5E4D6B`, the words `#555555`. Example: "\ One hour, free /".
  - The CTA is a pill, `border-radius: 36px`, fill `#C4701A`, hover `#A95F14`. Label "Book a demo" in white, Albert Sans 1.25rem 700, letter-spacing .05em, shadow `0 4px 8px rgba(0,0,0,.16)` [tok d]. Size 300×60 in bands, 230×60 in the hero pair, 160×44 at .875rem in the header [tok f]. It always goes to `/book-a-demo/`. **There is no other filled amber button and no other CTA wording on the site.**
  - Section kickers use the same caption style above the H2: "\ Why managers move the sheet /" over "Four reasons it stays calm".
- **Continuation:** every inner page except Privacy, Terms and Thanks ends with the same caption + pill band. Every inner head has a slash kicker above the H1.
- **Must not be diluted:** the slashes are visible and coloured; the caption sits directly above the button (≤ 12 px); the button is a full pill, filled amber, and the wording never changes.

### Supporting moves (part of the reference look, not counted as signatures)
- **S-a. Reason cards with a hanging pale numeral** (`ref/airshift-reasons.png`) [tok e, b]: white r16 cards with no shadow on the tint band. A 96 px Inter Tight 300 numeral in `#DDD3E4` hangs in the card's left gutter. Text column about 55%, photo about 35% (420 px), photo side alternating. Used on home block 3, Stories, About.
- **S-b. Floating bottom CTA bar** (`ref/scroll-airshift-bar-after.png`) [tok g]: section 8.
- **S-c. Marquee of shop kinds** under a hairline-flanked caption [tok f, g]: section 5, block 1.
- **S-d. 40 px main-colour utility strip** above a 90 px white header [tok c, f].

### Continuation to inner pages (each technique on at least 4 inner pages)
| Page | T1 arch | T2 folder panel | T3 caption + pill | S-a cards |
|---|---|---|---|---|
| Features | arched band P06 | ×5, one per feature | close band | — |
| Prices | arched band P15 | one tab "Prices per shop" around the table | close band | — |
| Stories | **four-photo strip** P02–P05 | — | close band | ×3 story cards |
| About | arched band P01 | — | close band | ×2 cards |
| News (index, single) | arched band P03 on index | — | close band | — |
| Early access | arched band P04 | one tab "Early access" around the form | caption over the submit (submit is main colour, not amber) | — |
| Book a demo | arched band P09 | one tab "Book a demo" around the form | caption over the amber submit | — |
Counts: T1 on 7 inner pages, T2 on 4, T3 on 7, S-a on 2.

---

## Key visual concept

### (1) Reference first screen: concept, story, signature motion
- **Concept:** a centred stack in the left half. A two-line blue tagline ("shift management that makes the back-and-forth easy") sits over a large product wordmark. Two pill CTAs follow, each with a slash caption, then a small note. A laptop, tablet and phone group sits at the right. Below, full width, four smiling shop staff (a counter worker with a paper bag, a bar worker, a clothing seller, a florist) stand in a strip under a shallow white arch. Under that, a hairline-flanked caption introduces a drifting logo row.
- **Story:** writing shifts stops being a chore, for any kind of shop. The people are real staff in real shops, the tool is calm, and there is one clear way to start.
- **Signature motion:** the logo row drifts left forever (CSS keyframes, 20 s linear, translateX to -50%). After the hero CTA scrolls away, a dark translucent CTA bar fades in at the bottom of the viewport (opacity .3 s). The header becomes a fixed bar after 40 px.

### (2) Our translation (same composition, same motion idea, same image type: photographs of shop staff)
A centred narrow column on the left says "Write next week's rota before the shutters go up" over the product name, with the same CTA pair and slash captions. At the right, where the devices were, is the scene from the row's signature. It is a documentary photograph cut on a diagonal: a floor manager at the back counter marks a paper shift sheet in pencil while a colleague hangs a coat before opening. Under it, the arched strip shows four shops in their hour before opening (a baker loading trays, a florist unpacking buckets, a bookseller shelving, a barista taking chairs down). It tells the same story: any kind of shop, real staff, a calm week. Under the strip, the logo row becomes a drifting row of shop kinds in grey text, since we may not claim real customers. The floating CTA bar appears after the hero CTA leaves the screen, as on the reference.

### (3) KV checklist (all built in the first screen, all visible at 1440×900)
| # | Reference element | Our counterpart | Position (1440×900) | Motion | Image |
|---|---|---|---|---|---|
| 1 | Centred two-line tagline over a large product wordmark | Centred narrow column 560 wide (x 120–680): slash kicker, H1 tagline 2.125rem 600 `#5E4D6B` in two lines, product name "Wariate Shifts" 4.5rem 600 `#5E4D6B` | left half, y 170–400 | none (hero has no reveal) | — |
| 2 | Two pill CTAs with slash captions and a small note | Amber pill "Book a demo" (caption "\ One hour, free /") + main pill "See the week" → `#week` (caption "\ How a week is laid out /"); note .8125rem "First month free after the demo. Nothing is charged automatically." | y 420–540, centred in the column | hover: background change .3s ease | — |
| 3 | Device group at the right with a small badge above it | KV photo P01, 620×360, diagonal left edge (`clip-path: polygon(64px 0, 100% 0, 100% 100%, 0 100%)`), flush to the container's right (x 700–1320); above its top-left a slash caption "\ Tuesday, 06:40, back counter /" .875rem in flow | right half, y 190–550 | none | **P01** |
| 4 | Four staff photos edge to edge under a shallow arch | T1 strip: P02 bakery, P03 florist, P04 bookshop, P05 cafe, 4 × 360×160, 30 px sag at the centre | full bleed, y 585–745 | `sp-parallax` on each photo, `--sp-par: 7%` | **P02, P03, P04, P05** |
| 5 | Hairline-flanked caption + drifting logo row | Caption "Made for shops that open early" 1.125rem 600 `#222222` between two 1 px `#E5E5E5` rules (x 195–1245); below it `sp-marquee` row of 12 shop kinds in Inter Tight 1.5rem 600 `#8C8591`, separated by 6 px `#DDD3E4` dots | y 780–900 (row begins about y 835; its top half must show at 900) | `sp-marquee`, 20 s linear infinite | — |
| 6 | Fixed dark CTA bar after the first CTA passes | 70 px bar `rgba(0,0,0,.70)`, one white line "First month free after the demo." + amber pill "Book a demo" | fixed bottom, appears after scroll ≈ 560 px (when the hero CTA has left) | CSS scroll-driven fade + 16 px rise (section 8) | — |

Items 1 to 5 must be in the 1440×900 screenshot at scroll 0. Item 6 is checked by scrolling (it must be absent at scroll 0).

---

## 2. Colour [tok a]

| Role | Hex | Reference value | Use | Share |
|---|---|---|---|---|
| Ground | `#FFFFFF` | `#FFFFFF` (exact) | page ground, cards, active tab | ~55% of page |
| Ground 2 | `#FAFAFA` | `#FAFAFA` (exact) | stories band, FAQ band | ~8% |
| Tint | `#ECE7EF` | `#E1F0F8` (hue swapped, same lightness band 92–94%) | reasons band, time bar band, close band | ~25% of page |
| Main (grape-mouse) | `#5E4D6B` | `#20AEE5` (hue swapped, decision 3) | utility strip, H1, product name, card H3, tabs, panel outline, step circles, slash glyphs, time-bar fill, second hero pill | ~8% of the first screen |
| Pale numeral | `#DDD3E4` | pale blue numeral (≈ tint) | 96 px numerals, marquee dots | <1% |
| Accent (amber) | `#C4701A` (hover `#A95F14`) | `#F2971B` (darkened, decision 4) | the single CTA only: header, hero, bands, floating bar, form submit on Book a demo | ~2% |
| Heading ink | `#222222` | `#222222` (exact) | section H2, labels | — |
| Body text | `#555555` | `#555555` (exact) | body, captions | — |
| Grey | `#E5E5E5` | `#E5E5E5` (exact) | footer band, 1 px rules, photo frames, hairline caption rules | footer + rules |
| Marquee grey | `#8C8591` | grey logos | marquee words | <1% |
| Floating bar | `rgba(0,0,0,.70)` | `rgba(0,0,0,.70)` (exact) | fixed CTA bar | — |

- Not beige-led: white is the ground; the tint is a cool mauve.
- Contrast: `#555555` on `#ECE7EF` 6.1:1; white on `#5E4D6B` 7.7:1; white on `#C4701A` 3.7:1 (labels are ≥ 1.25rem 700, or .875rem 700 in the header with 44 px height; the header label may be `#FFFFFF` on `#A95F14` if the a11y check flags it).
- **First-screen saturated share:** the reference measures about 10.5% [tok a], and the row's hard cap is 30%. This spec sets the `scripts/check-first-screen.py` gate at **15%** and targets **≤ 8%**. Mauve has a saturation of about 16% and does not count as saturated, so only the two amber pills and the photo colours count. Photos must be neutral in grade, with no saturated aprons or flowers dominating P03.

## 3. Type (font_direction **sans**) [tok b]

The reference uses Avenir Next / Open Sans with Hiragino and Meiryo, all sans [tok b]. We use the row's fonts: **Inter Tight** (display, 300/600/700) and **Albert Sans** (body, 400/600/700), with Noto Sans TC / JP as CJK display fallback. No serif or mincho anywhere.

Load fonts only through `theme.json` `fontFamilies` + `fontFace`, so the editor and front end match. Include the zh-TW and ja display subsets (Noto Sans TC 600/700, Noto Sans JP 600/700) as `fontFace` entries, using the Hokuto/Hada subsetting workaround (the Chinese subset script is known to be broken). `style.css` has `:lang(` rules, so copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it. `check-editor-fonts.mjs` must pass for en and zh-TW.

| Use | en / fr / de stack | zh-TW stack | ja stack |
|---|---|---|---|
| Display | `"Inter Tight", sans-serif` | `"Inter Tight", "Noto Sans TC", sans-serif` | `"Inter Tight", "Noto Sans JP", sans-serif` |
| Body | `"Albert Sans", sans-serif` | `"Albert Sans", "PingFang TC", "Microsoft JhengHei", sans-serif` | `"Albert Sans", "Hiragino Sans", "Yu Gothic", "Meiryo", sans-serif` |

The zh-TW and ja body stacks use system fonts, because the repo gate forbids bundled CJK families in the body stack. List all font files in `theme-meta.json` `fonts[].files` with licence (OFL), and name every family in `readme.txt`.

| Element | Size | Weight | Line-height / tracking | Source |
|---|---|---|---|---|
| Product name (hero) | `clamp(2.75rem, 5vw, 4.5rem)` (72 px at 1440; theme max) | 600 | 1.1 / -.01em | wordmark image ≈ 72 px cap [tok b] |
| Hero H1 tagline | `clamp(1.375rem, 2.4vw, 2.125rem)` (34 px) | 600 | 1.5 / .04em | tagline 34 px 600 .04em [tok b] |
| Inner H1 | `clamp(2.25rem, 4vw, 3.25rem)` | 600 | 1.3 / .02em | scaled from H2 |
| Section H2 | 2.125rem (34 px) | 600 | 1.5 / .04em, centred | H2 34 / 600 / 1.5 [tok b] |
| Card H3 | 1.5rem (24 px), `#5E4D6B` | 600 | 1.5 | card H3 24 / 600 [tok b] |
| Numerals (S-a) | 6rem (96 px), `#DDD3E4` | 300 | 1 | 96 px 300 [tok b] |
| Body | 1rem (16 px) | 400 | 1.9 / .02em in Latin, .05em in CJK | body 16 / 400 / .8px / 1.9 [tok b]; Latin tracking reduced, because .05em spreads Latin words too far |
| Slash caption | .875rem (14 px) | 600 | 1.5 / .05em | 14 px semibold [tok f] |
| Button (bands, hero) | 1.25rem (20 px) | 700 | 1 / .05em | 20 px [tok b] (weight raised for contrast) |
| Button (header) / nav | .875rem / .9375rem | 700 / 500 | 1 | 14 px [tok b] |
| Utility strip | .75rem (12 px) | 400 | 40 px line | 12 px [tok f] |

Theme.json sizes: small .875, base 1, medium 1.25, large 1.5, x-large 2.125, xx-large 4.5rem (max ≥ 4.25rem satisfied). zh-TW and ja: headings about 0.75× the English size, except the H1 tagline (it already sits near CJK body size; keep 1.75rem), body line-height 1.85. fr and de: `hyphens: auto`; check that the German product name and tagline do not overflow the 560 px column at 1280.

## 4. Spacing, radius, ornament [tok c, d, f]

- Container 1200 (at 1440, x 120–1320); narrow reading column 800; hero column 560; the T2 panel 1120.
- Section padding: 64 px top and bottom for white bands, 64 px above the head on tint bands, 24 px between cards [tok c]. On mobile, 48 px.
- Card: padding 48 px, gap 24 px, photo column 420 px [tok c].
- Radius: cards and panels 16 px; the intro photo panel 36 px; tabs 8 px top; step photos 8 px; pills 36 px; chips 4 px; circles 50% [tok d]. The KV photo and the strip have no radius.
- Borders: 1 px `#E5E5E5` on photo frames and FAQ cards; 2 px `#5E4D6B` on folder panels [tok d].
- Shadows: buttons `0 4px 8px rgba(0,0,0,.16)`; header `0 5px 14px rgba(0,0,0,.15)`; cards flat [tok d].
- Hairline caption: text centred between two 1 px `#E5E5E5` rules, each about 300 px at 1440, gap 24 px [tok f, `ref/airshift-first.png`].
- Focus: `outline: 2px solid #5E4D6B; outline-offset: 3px`.
- No CSS `content` text anywhere; slashes, kickers and labels are markup.

---

## 5. Home page (en; ≥ 250 words required, target ≈ 700; ≥ 3 narrative paragraphs: blocks 2, 3, 6, 9)

### Header (one top menu only; anchors + one CTA, landing rule) [tok c, f]
- **Utility strip:** 40 px, `#5E4D6B` ground, container 1200. Left: "Rota software for shops that open early" .75rem white. Right: "Help" (→ `/features/`) and "Contact" (→ `/book-a-demo/`) .75rem white, underlined, then an outline pill "Log in" (1 px white, 28 px tall, 96 wide, → `/book-a-demo/`). Not sticky; scrolls away.
- **Main bar:** 90 px, white, shadow `0 5px 14px rgba(0,0,0,.15)`, `position: sticky; top: 0`. Wordmark "Wariate Shifts" left (Inter Tight 1.5rem 600 `#5E4D6B`, plus a 22 px mark made of three short horizontal bars of different lengths, like shift bars, inline SVG in `#5E4D6B`). Centre: anchor nav .9375rem 500 `#222222`, gap 32: "The week" `#week`, "Why" `#why`, "The demo" `#demo`, "Shops" `#shops`, "The hour" `#hour`, "Prices" `#prices`, "Stories" `#stories`. Right: amber header pill "Book a demo". On inner pages the anchors become `/#week` etc.
- Under 1100: the nav collapses into the core Navigation overlay (button right). The CTA pill stays visible at 390 (120×40).
- `scroll-behavior: smooth` on `html`, inside `prefers-reduced-motion: no-preference` (the reference uses a 1200 ms swing scroll; we use the native one) [tok g]. Anchor targets get `scroll-margin-top: 100px`.

### First screen (1440×900)
White ground, no reveal anywhere in it. Vertical map: strip 0–40, header 40–130, hero text and KV photo 170–550, arched strip 585–745, caption 780, marquee 835–905.
1. **Left column** (x 120–680, text centred):
   - Kicker: "\ Rota software for shops /" (T3 caption style).
   - H1 (two lines, `<br>` in en): "Write next week's rota<br>before the shutters go up." 2.125rem 600 `#5E4D6B` .04em.
   - Product name `p.ws-name`: "Wariate Shifts" 4.5rem 600 `#5E4D6B`, margin 8 px 0 32 px.
   - CTA pair: two 230×60 pills, gap 16, each with its slash caption above (see KV item 2).
   - Note: .8125rem `#555555`, 16 px under the pills.
2. **Right:** P01 at x 700–1320 (620×360), diagonal left edge, `loading="eager" fetchpriority="high"`. Its slash caption sits in flow above it, left-aligned.
3. **Arched strip** (T1), full bleed, starts 35 px under the column's lowest element.
4. **Caption + marquee:** hairline caption "Made for shops that open early", then the `sp-marquee` row. Items, in this order: Bakery, Florist, Bookshop, Cafe, Deli, Grocer, Bike shop, Stationer, Tea room, Hardware store, Gift shop, Pharmacy counter. Two identical groups; the second has `aria-hidden="true"`.

Forbidden on the first screen: table, form, search box, page-centred giant text, any amber other than the two CTA pills, any UI screenshot.

### Block order
| # | Pattern / anchor | Purpose | Layout and photos | Copy |
|---|---|---|---|---|
| 1 | `front-hero` | Promise + KV | Above. Photos P01, P02, P03, P04, P05 | ~35 words |
| 2 | `front-week` `#week` | How a week is laid out (the calm account) | White. Narrow column 800, centred: slash kicker "\ One week, one sheet /", H2 "A week laid out the way you already think", two narrative paragraphs (left-aligned text inside the centred column). Under them, a 628×354 photo panel P06 with `border-radius: 36px` (the reference's video poster, here a still photo of the paper sheet; no play disc). Under it three benefit labels in a row, separated by 1 px `#E5E5E5` vertical rules 64 px tall: "Starts from your paper sheet" / "Staff see the week on their phone" / "Hours ready for payroll", each Inter Tight 1.125rem 600 `#5E4D6B`, two lines, no icons. Then T3 caption "\ First month free /" + amber pill | 150 words |
| 3 | `front-why` `#why` | Reasons | Tint band `#ECE7EF`. Kicker "\ Why managers move the sheet /", H2 "Four reasons it stays calm". Four S-a cards, 1200 wide, gap 24: card 1 text left + P07 right, card 2 P08 left + text right, card 3 text left + P09 right, card 4 P10 left + text right. Each card: numeral 1–4 hanging in the 96 px gutter, H3, 45-word paragraph. Photo 420×280 (3:2), `border-radius: 8px`. Reasons: 1 "It starts from your paper sheet" 2 "Everyone sees their week on their own phone" 3 "Swaps stay between colleagues, you approve once" 4 "The hours add up by Sunday night" | 4 × 45 words |
| 4 | `front-demo` `#demo` | What the demo shows | White. Kicker "\ Five things, one hour /", H2 "What the demo shows". **T2** panel exactly as section 1, tab 1 active, photos P11, P12, P13. White pill "See all five in detail" → `/features/` | 120 words |
| 5 | `front-shops` `#shops` | Which shops a demo suits | Ground 2 `#FAFAFA`. Two columns in 1200: left P14 4:5, 480×600, `border-radius: 16px`; right (gap 72) kicker "\ Is it for your shop? /", H2 left-aligned "Which shops a demo suits", one paragraph, then two ruled lists (1 px `#E5E5E5` rules, 14 px rows). "Suits": 1 to 6 shops · 5 to 60 staff · shops that open before 08:00 · teams with many part-timers · rotas on paper or in a spreadsheet today. "Not yet": 24-hour sites with clinical rosters · a payroll system replacement. Each "Suits" row starts with an 8 px `#5E4D6B` dot, each "Not yet" row with an 8 px `#E5E5E5` dot | 110 words |
| 6 | `front-morning` | Mood break, the demo begins | Full-bleed **`sp-parallax`** Cover, 560 px tall, background P15, `--sp-par: 10%`, no overlay (P15 is high-key). A static white r16 card, 460 wide, padding 40, sits on the container's left, 64 px from the bottom, outside the moving layer: slash kicker "\ Tuesday, 10:00 /", H3 "The hour starts with your sheet, not our slides", a 50-word paragraph | 60 words |
| 7 | `front-hour` `#hour` | How the hour is spent | Tint band. Kicker "\ Sixty minutes /", H2 "How the demo hour is spent". A **time bar** across 1120: one 56 px tall bar with `border-radius: 28px`, split into four segments proportional to minutes (10 / 25 / 15 / 10 → 16.7% / 41.7% / 25% / 16.7%), fills in four tones of the main colour, darkest on the longest part: `#C9BED2`, `#5E4D6B`, `#8A7A97`, `#B3A6BE`. A 2 px white gap separates the segments. Each segment shows its minutes inside ("0–10" etc., .875rem 700; white on the dark ones, `#222222` on the pale ones). Under the bar, four text columns aligned to the segments' left edges: part name (H3 1.125rem 600 `#5E4D6B`) + 30-word line. This is a shift bar, the product's own shape, not a step grid: no circles, no cards. Under it one line: "A draft of your next week arrives by email within 1 working day." | 140 words |
| 8 | `front-prices` `#prices` | Prices | White. Kicker "\ Per shop, per month /", H2 "Prices". **T2** one-tab panel, tab "Prices per shop" active, inside it a full-width two-column table with the 7 items from section 0 (rows 1 px `#E5E5E5`, row height 56, item `#222222` left, price `#5E4D6B` 600 right, `white-space: nowrap`). Note line under the table. T3 caption "\ The demo is free /" + amber pill | 40 words |
| 9 | `front-stories` `#stories` | Three shops | Ground 2. Kicker "\ Three shops, three weeks /", H2 "Stories from the back counter". Three white r16 cards in a row (gap 24), no shadow, 1 px `#E5E5E5`: photo 3:2 top (P16, P17, P18, top radius 16), padding 32, shop name H3, line "1 shop · 14 staff · opens 06:30" .8125rem `#555555`, 50-word story, manager's name. Link "Read the stories →" → `/stories/` | 3 × 55 words |
| 10 | `front-faq` `#faq` | Questions | White, narrow column 800. Kicker "\ Before you book /", H2 "Questions". Six `details` rows, each a 1 px `#E5E5E5` r16 box, summary Albert Sans 1.0625rem 600 `#222222` with a 24 px main circle "+" at the right (text glyph). Questions: Do I need a laptop for the demo? · Can my staff use their own phones? · What happens after the free month? · Can we keep a paper copy on the wall? · Do you replace payroll? · Can the demo be at our shop? | 6 × 35 words |
| 11 | `front-book` `#book` | The one conversion | Tint band, centred narrow column: kicker "\ One hour, free /", H2 "Book a demo hour", one paragraph about the three daily slots, T3 caption "\ First month free after the demo /" + amber pill 300×60, then a small line "Or call +1 555 0187, Mon–Fri 08:30–17:30." | 60 words |
| 12 | Footer | Address, inner links | Grey band `#E5E5E5` [tok a], text `#222222`, padding 64 / 40. Four columns: wordmark + address + hours; "On this page" anchors; "Pages" (Features, Prices, Stories, About, News, Early access, Book a demo); "Small print" (Privacy, Terms). Bottom line © 2026 Wariate Shifts | — |

Plus the floating CTA bar (section 8). The page bottom gets `padding-bottom: 70px` so the bar never covers the footer's last line.

**Photo positions on home: 18** (P01–P18, each once). ≥ 8 satisfied. The marquee holds text only.

### Comparison with recent homes
| # | Nodo Clinic | Aya Paper | Mikura Storage | Noboru Lifts | **Wariate Shifts** |
|---|---|---|---|---|---|
| 1 | Hero strips on photo | Hairline-frame three-column hero | Hero with tile cards | Drifting photo row on open paper | **Centred narrow column + diagonal KV photo + four-photo arched strip + text marquee** |
| 2 | Opening text + column | About with 4:5 photo | Five features | Three-column intro | **Narrow-column account + r36 photo panel + three ruled labels** |
| 3 | Ruled complaint rows | Spec-sheet index rows | Sticky-media sizes | Sticky visit cards on grey | **Four white reason cards with hanging numerals on tint** |
| 4 | Photo walk (3) | Parallax counter | Visit-step columns | Checkerboard of buildings | **Folder-tab panel with circle steps** |
| 5 | Paced-visit band | Weights catalogue | Price table | Parallax band | **Suits / not-yet lists beside a 4:5 photo** |
| 6 | Parallax corridor | Wrap steps in frame | Parallax corridor | Checklist rows + tall photo | **Parallax morning band with card** |
| 7 | Roster two columns | Two-up works | Story cards | Fee table | **Sixty-minute time bar** |
| 8 | Stories in stepped pairs | Visit | FAQ details | Crew text list | **Price table inside a folder panel** |
| 9 | Notes (3 columns) | Journal | Reserve panel | Stories rows | **Three story cards** |
| 10 | Close | Ring close | Footer | Booking card | **FAQ** |
| 11 | — | — | — | — | **Tint close band with pill** |

Why not alike:
- No recent home opens with a centred column over an edge-to-edge arched photo strip, and none uses folder tabs, slash captions or a time bar.
- Noboru also drifts on the first screen, but it drifts photos at the top; ours drifts plain text under a still strip. Noboru has ink strips, sideways tabs and radius 0; we have pills, r16 cards and no frame.
- Mikura is the nearest in content (story cards, price table, FAQ). Here the price table is wrapped in a folder panel, the stories come after it, there is no sticky media and no tile cards, and the reasons sit on a tint band with hanging numerals.
- Nodo and Mikura both used a "parallax corridor" (long interior); our parallax band is a shop floor at morning light with a white card, and it sits between the demo and the hour, not mid-story.
- No people grid, step grid, vertical timeline or dashboard. The time bar is one horizontal bar, and nobody is shown as a team grid (the About page lists people as text).

---

## 6. Inner pages (landing track; linked from the footer and from in-page links)

Every inner page head (T1 continuation): white, centred narrow column 800: slash kicker, H1 (inner H1 size, `#5E4D6B`), one-line lead in `#555555`. Then the arched photo band: full bleed, 1440×240 (`aspect-ratio: 6 / 1`, min-height 160), same mask, 30 px sag. Every page except Privacy, Terms and Thanks ends with the tint close band (T3 caption + amber pill). The floating bar shows on Features, Prices, Stories, About and News, not on Book a demo, Early access, Thanks, Privacy or Terms. No sidebar anywhere.

| # | Page | Slug | Theme code | Head band | Content |
|---|---|---|---|---|---|
| 1 | Features | `/features/` | extra | P06 | Five **T2** panels in a column, 64 px apart, ids `#week-layout`, `#availability`, `#swap`, `#sick-day`, `#payroll`; panel *n* has tab *n* active (the other tabs link to the other panels). Panel 1 has the three step photos P11, P12, P13. Panels 2–5 have the three numbered steps as text columns, then one 16:9 photo at 50% width beside a 60-word paragraph: panel 2 P07, panel 3 P09, panel 4 P08, panel 5 P10. 550 words |
| 2 | Prices | `/prices/` | extra | P15 | **T2** one-tab panel with the full 7-row table + note; "What every plan includes" ruled list (5 features, staff app, support Mon–Sat 07:00–19:00, export); "The free month" paragraph beside P14 (4:5, r16); billing questions as `details` (4). 300 words |
| 3 | Stories | `/stories/` | extra | **four-photo strip P02–P05** (T1 at full strength) | The 3 stories in full as S-a cards on the tint band, numerals 1–3, photos P16, P17, P18 alternating sides, 200 words each, ending with the manager's name and the shop line |
| 4 | About | `/about/` | `about` | P01 | Founded 2019 in Westmere; Hanna's nine years of paper sheets (S-a card 1 with P13); why the product starts from paper (S-a card 2 with P12); the 7 people as a ruled two-column text list (name + role), no portraits; "A day at Coldharbour Yard" paragraph. 450 words |
| 5 | News | `/news/` | `news` (role `posts`, empty content) | P03 | Query loop: cards with r16, 3:2 image, date, title, 2 columns |
| 6 | Post | single | `article`, `category`, `tag` | — | Featured image 3:2 r16 under the title, text column 720. 3 demo posts: "What a paper rota gets right" (P06), "Collecting availability without a group chat" (P11), "Laying out a wedding season" (P17). Categories: Notes from shops, Product updates. Tags: availability, swaps, paper, seasons |
| 7 | Early access | `/early-access/` | `newsletter` | P04 | Waiting list for the multi-shop staff-sharing view (coming to all plans): **T2** one-tab panel "Early access", P08 left (4:5, r8), form right (name, shop, number of shops, email), submit pill in `#5E4D6B` (not amber: it is not the CTA) → `/thanks/`. 120 words. No close band |
| 8 | Book a demo | `/book-a-demo/` | `contact` | P09 | **T2** one-tab panel "Book a demo": left P01 (4:5 crop on the manager, r8) and the four parts of the hour as a small list; right the form (name, shop, staff count, preferred slot from 10:00 / 13:30 / 16:00, email, optional "photo of your current sheet" note), T3 caption "\ One hour, free /" over the amber submit "Book a demo" → `/thanks/`. Then address, phone, email, office and support hours. 150 words |
| 9 | Privacy | `/privacy/` | extra | none | Plain text, no effects, no photo |
| 10 | Terms | `/terms/` | extra | none | Plain text: plans billed monthly, free month, cancellation, no automatic charge after the trial |
| 11 | Thanks | `/thanks/` | extra | none | Plain text: reply within 1 working day; what to have ready; link home |
| 12 | 404 / search | templates | — | none | Slash kicker, H1, white pill home |

- Reachable pages: 11 plus posts; ≥ 9 satisfied. Add `templates/tag.html`, `screens.*` for all 8 page codes (news, newsletter → their pages; contact → `/book-a-demo/`), and exactly one `posts` page. Forms work the same way as the Noboru `/contact/` form: no plugin required, no sp-reveal on forms.
- Photo use per page, no repeats inside a page: Features P06, P11, P12, P13, P07, P09, P08, P10 · Prices P15, P14 · Stories P02–P05, P16–P18 · About P01, P13, P12 · News P03 + post images P06, P11, P17 · Early access P04, P08 · Book a demo P09, P01.

---

## 7. Responsive

- **390 px first screen:** one column, normal flow. **No vertical text and no absolutely positioned label over text anywhere.** Utility strip hidden under 782. Header 64 px: wordmark (1.25rem), amber pill 120×40, menu button. Order: kicker → H1 1.375rem, up to 3 lines → product name 2.75rem → the two CTAs stacked, full width minus 40, each with its caption above, gap 20 → note → P01 slash caption (in flow, left) → P01 full width minus 40, 16:10, diagonal kept at 24 px → arched strip as **2×2 grid**, each 195×110, the mask on the whole grid with a 16 px sag (the same SVG scaled) → hairline caption (rules 40 px) → marquee 1.125rem.
- **Header nav** under 1100: Navigation overlay; anchors listed vertically with the CTA at the end.
- **T2 tabs under 782:** the tab row becomes one horizontally scrollable row inside the panel width (`overflow-x: auto`, `scroll-snap-type: x mandatory`, tabs 148 wide); the page itself never scrolls sideways. The active tab still breaks the border. The label | description row stacks with the rule horizontal. The three steps stack, each photo full width.
- **S-a cards under 782:** single column, photo first (full width, 3:2), the numeral moves into flow above the H3 at 4rem, padding 28 24.
- **Block 2:** the photo panel is full width, radius 24; the three labels stack with horizontal rules between them.
- **Block 5:** single column, photo 4:5 first, then the text.
- **Block 6:** band 380 px, the card moves below the photo in flow, full width minus 40, overlapping the band by 0 (no negative margin); the parallax stays at `--sp-par: 6%`.
- **Block 7 time bar under 782:** the bar stays horizontal at full width (never vertical), 44 px tall, with only the minute labels inside; the four text parts stack below it, each starting with a 12 px swatch of its segment colour.
- **Block 9:** cards stack, one column.
- **Tables:** at ≥ 782 px every price table is full panel width, `table-layout: auto`, the price cell `white-space: nowrap; text-align: right`, never clipped at 800 or 1280 in any language (check German "Einmalig" and French prices). **Under 782 every table stacks:** each row becomes a block with the item above and the price below, left-aligned, 1 px rule between rows.
- **Floating bar under 782:** 64 px, text hidden, pill full width minus 32, centred.
- No horizontal overflow at 390 or 1280: `html, body { overflow-x: clip }`; the marquee, strip and parallax layers sit inside `overflow: clip` wrappers.

## 8. Scroll effects and parallax

Reference motion [tok g]: marquee 20 s linear infinite; floating bar opacity .3 s once the hero CTA is out of view; header fixed after 40 px; smooth anchor scroll 1200 ms; no reveals on content. We pick three sp effect types: **`sp-marquee`, `sp-parallax`, `sp-reveal--up` + `sp-stagger`**.

| Effect | Class | Where | Source and values |
|---|---|---|---|
| Shop-kind drift | `sp-marquee` | Block 1, the row under the hairline caption only | Reference logo row: CSS keyframes, translateX 0 → -50%, **20 s linear infinite** [tok g]. Override in theme CSS only: `html:not(.sp-no-motion) .ws-kinds.sp-marquee > * { animation-duration: 20s }`. In `?sp-static` the row stands still and both groups sit in one line (`display: flex; overflow: clip; > * { flex: none }`) |
| Strip parallax (KV) | `sp-parallax` on each of the four `figure` wrappers in the strip (each `figure > img`) | Block 1 strip; the mask stays on the parent, which does not move. `--sp-par: 7%`, 5% under 782 | Our addition. The reference strip is still, but it is the image that the floating bar slides over; a slow 7% drift keeps it photographic, not decorative |
| **Band parallax (primary, required)** | `sp-parallax` on the Cover | Block 6, Cover background P15; the white card is outside the moving layer; `--sp-par: 10%`, **6% under 782 (kept on phones)** | Same family as the reference's scroll-linked bar (motion tied to scroll position, linear) |
| Card entry | `sp-reveal sp-reveal--up` on each card, `sp-stagger` on the parent | Block 3 reason cards, block 9 story cards, block 7 four text parts, Stories and About S-a cards | Our addition (the reference has none). sp defaults: 24 px, **0.8 s `cubic-bezier(.23,1,.32,1)`**, stagger 0.12 s |

- **Hero has no reveal.** No effects on forms, price tables, FAQ or legal text. Count of `.sp-reveal` ≤ 60% of the home blocks.
- `check-parallax.mjs` must pass on desktop and phone: ≥ 6 px layer shift on block 6 at both widths, 0 under reduced motion; reveals hidden before entry (≥ 3), at rest after, none left transparent at the bottom.
- **Floating CTA bar (no JS, no scroll listener):** `div.ws-bar` fixed bottom, 70 px, `rgba(0,0,0,.70)`, in a template part so it is editable. The default rule is `display: none`. It is shown only inside `@supports (animation-timeline: scroll())` and `@media (prefers-reduced-motion: no-preference)` with the selector `html.sp-js:not(.sp-no-motion) .ws-bar`. There it gets `display: flex; animation: ws-bar linear both; animation-timeline: scroll(root); animation-range: 520px 600px`, keyframes from `opacity: 0; translate: 0 16px; visibility: hidden` to `opacity: 1; translate: 0 0; visibility: visible`. The 80 px range feels like the reference's .3 s fade at normal scroll speed. Result: absent at scroll 0 and in every `?sp-static` screenshot; Firefox and reduced-motion users simply have no bar and still meet the CTA in every band.
- **Sticky header:** CSS `position: sticky` only; the utility strip above it scrolls away, which gives the reference's 40 px behaviour without a listener.

## 9. Images (18; Grok, one at a time, read each one; ≤ 300 KB, ≤ 2000 px, webp; 0 cut-outs)

**Imagery: photo.** Bright high-key documentary photographs, like the reference's staff photos [tok e] but candid, as the row's `photo_direction: documentary` asks. Screens may appear only face-down, turned away or dark; any paper sheet shows only illegible pencil marks.

STYLE (use this exact string on every prompt; `IMAGE_STYLE="<STYLE>" scripts/grok-image.sh out.webp "<subject>"`):
`documentary photograph, bright high-key morning daylight, 35mm lens, natural colours with soft neutral grading, small independent shop before opening, clean modern international city, diverse adult staff in plain aprons and everyday clothes, candid unposed moment, gentle smiles, shallow depth of field, white and pale grey walls with warm light wood and touches of muted mauve, no text, no readable writing, no numbers, no logos, no brand marks, no signage lettering, no screens with visible content, no Japanese elements`

| ID | Subject / composition | Ratio (crop) | Home (H) / inner use |
|---|---|---|---|
| P01 | A floor manager at the back counter marking a paper weekly shift sheet with a pencil; behind, out of focus, a colleague hangs a coat on a wall hook; early light from a back window. Manager in the left-centre, sheet in the lower third | 16:10 (620×360; 4:5 crop on the manager) | **H block 1 KV**; About head band; Book a demo panel |
| P02 | A baker sliding trays of bread into a wooden rack before opening, half-smile, flour on the apron; subject in the central third | 16:9 (2.25:1 strip crop) | **H block 1 strip**; Stories strip |
| P03 | A florist lifting a bucket of fresh stems at the shop front, shutters half up, muted greens and whites, no bright reds | 16:9 | **H block 1 strip**; News head band |
| P04 | A bookseller shelving new arrivals from a cart, side-on, warm wood shelves | 16:9 | **H block 1 strip**; Stories strip; Early access head band |
| P05 | A barista taking chairs down from tables and wiping the counter, light cafe | 16:9 | **H block 1 strip**; Stories strip |
| P06 | Close top-down view of a paper weekly rota on a clipboard on a light wood counter, beside keys and a mug; illegible pencil marks and grid lines | 16:9 (628×354; 6:1 band crop) | **H block 2 panel**; Features head band; post "What a paper rota gets right" |
| P07 | A manager and a part-timer comparing availability on a paper sheet in a stockroom, both leaning in, boxes on shelves | 3:2 | **H block 3 card 1**; Features panel 2 |
| P08 | A young staff member in a coat in a small break room glancing at a phone held low (screen not visible), bag on a chair | 3:2 (4:5 crop) | **H block 3 card 2**; Features panel 4; Early access |
| P09 | Two colleagues at the counter at shift change, one handing over the till keys, the other tying an apron | 3:2 (6:1 band crop) | **H block 3 card 3**; Features panel 3; Book a demo head band |
| P10 | A manager at a small back-office desk adding up hours on paper with a calculator at the end of the week, evening light | 3:2 | **H block 3 card 4**; Features panel 5 |
| P11 | A hand pinning small blank cards onto a staff noticeboard grid by the back door, close and shallow | 3:2 | **H block 4 step 1**; Features panel 1; post "Collecting availability…" |
| P12 | Two staff at the counter agreeing on a swap, one with a phone face-down on the counter, a nod | 3:2 | **H block 4 step 2**; Features panel 1; About card 2 |
| P13 | A finished week sheet pinned on a corkboard next to the staff door, a hand smoothing it flat, illegible marks | 3:2 | **H block 4 step 3**; Features panel 1; About card 1 |
| P14 | A manager talking with a new part-timer at a shop counter, both standing, relaxed, shelves behind | 4:5 | **H block 5**; Prices |
| P15 | A wide shop floor before opening, shutters half up, low morning sun across the floor, a manager walking an aisle with a clipboard far right; the left half calm and open for the card | 21:9 (2000×860; 6:1 band crop) | **H block 6 parallax band**; Prices head band |
| P16 | A bakery manager at the back table at dawn, sorting the day's orders on paper, ovens glowing softly behind | 3:2 | **H block 9 story 1**; Stories card 1 |
| P17 | A florist with two staff preparing a large wedding order in a cool back room, buckets of white flowers | 3:2 | **H block 9 story 2**; Stories card 2; post "Laying out a wedding season" |
| P18 | A bookshop staff member carrying a box between two connected rooms of a shop, another shelving behind | 3:2 | **H block 9 story 3**; Stories card 3 |

Home uses all 18. Read every image: regenerate any image with text, legible writing, logos, broken hands or faces, or a drift from the style. Each image gets one `readme.txt` line (AI-generated, CC0).

## 10. Similarity table (target ≈ 80%)

| Dimension | Reference value [tok] | Wariate Shifts value |
|---|---|---|
| Ground / text / grey | `#FFFFFF`, `#FAFAFA`, `#555555`, `#222222`, `#E5E5E5` [a] | identical |
| Main colour role and share | `#20AEE5`, top strip + headline + tabs, ~8% first screen [a] | `#5E4D6B` (palette row), same roles, ~8% |
| Tint band | `#E1F0F8`, mid-page bands [a] | `#ECE7EF`, reasons / hour / close bands |
| CTA accent | `#F2971B`, one repeated CTA, ~2% [a] | `#C4701A`, one repeated CTA, ~2% |
| Floating bar | `rgba(0,0,0,.70)`, 70 px [a, g] | identical, 70 px (64 under 782) |
| First-screen saturated share | ~10.5% [a] | target ≤ 8%, gate 15% |
| Type family | geometric-humanist sans + Japanese gothic [b] | Inter Tight / Albert Sans + Noto Sans TC/JP |
| Tagline | 34 px / 600 / .04em [b] | 2.125rem / 600 / .04em |
| Wordmark size | image ≈ 72 px [b] | 4.5rem text |
| H2 | 34 px / 600 / 1.5, centred [b] | 2.125rem / 600 / 1.5, centred |
| Card H3 / numeral | 24 px 600 / 96 px 300 pale [b] | 1.5rem 600 / 6rem 300 `#DDD3E4` |
| Body | 16 px / 400 / 1.9 / .05em [b] | 1rem / 400 / 1.9 / .02em Latin, .05em CJK |
| Buttons | pill r36, 20 px, shadow 0 4 8 .16 [b, d] | pill r36, 1.25rem 700, same shadow |
| Container / column | 1200 / 800 [c] | 1200 / 800 (hero column 560) |
| Section padding / card gap / card padding | 64 / 24 / 48 [c] | 64 / 24 / 48 |
| Header | 40 strip + 90 bar, shadow 0 5 14 .15 [c, d] | 40 strip + 90 sticky bar, same shadow |
| Radius | cards 16, poster 36, tabs 8 top, chips 4 [d] | identical |
| Folder panel | 2 px main outline r16, tabs 150×40, active breaks border [d, f] | 2 px main outline r16, tabs 168×48, active breaks border |
| Step markers | 24 px filled circles + bold label, 3 columns [f] | identical |
| Hero strip | 4 × 360×160, 0 gap, 30 px arch sag [e] | identical (P02–P05) |
| Hero right side | device group ~620 wide [e] | KV photo 620×360, diagonal edge |
| Intro media | r36 poster 628×354 [e] | r36 photo panel 628×354 (no play disc) |
| Reason cards | white r16, text 55% / image 35%, alternating, flat [e] | identical, photos instead of UI crops |
| Slash caption | 14 px semibold `\ … /` above each CTA [f] | identical, slashes in main colour |
| Hairline caption + marquee | rules both sides, logo row 20 s linear [f, g] | rules both sides, shop-kind words, 20 s linear |
| Footer | grey `#E5E5E5` band [a] | identical |
| Scroll reveal | none [g] | added: up 24 px, 0.8 s, `cubic-bezier(.23,1,.32,1)`, stagger 0.12 s |
| Parallax | none [g] | strip 7%, morning band 10% (6% phone) |
| Smooth scroll | 1200 ms swing [g] | native `scroll-behavior: smooth` |

Not borrowed: the sky-blue hue, UI screenshots and device mock-ups, the award badge and download count, real customer logos, the video poster's play disc, the case carousel.

## 11. Home acceptance checklist

1. First screen at 1440×900 shows KV items 1–5: a centred column in the left half (kicker, two-line mauve H1, 4.5rem product name, amber + mauve pills each under a slash caption, note), P01 at the right with a diagonal left edge and its slash caption, the four-photo strip edge to edge with a visible 30 px downward sag, the hairline caption and the start of the marquee. No table, form, search box, UI screen or page-centred giant word.
2. `check-first-screen.py` saturated share ≤ 15% (target ≤ 8%).
3. T1: four photos, 0 gap, 0 radius, arch mask from `arch-mask.svg`; on 7 inner page heads as an arched band, and as the full strip on Stories.
4. T2: on home block 4, five solid mauve tabs, the active white tab breaks a 2 px r16 outline, three filled 24 px circles with P11–P13; also around the home price table, on Features ×5, Prices, Book a demo and Early access.
5. T3: every amber pill has a slash caption directly above it; one wording, "Book a demo", always to `/book-a-demo/`; no other amber.
6. S-a reason cards on the tint band with 96 px pale numerals hanging in the gutter, photo sides alternating.
7. Block order equals section 5 and differs from Nodo, Aya, Mikura and Noboru as tabled. No people grid, step grid, vertical timeline, dashboard, sidebar, collage or cut-outs.
8. Colours exactly as section 2; reference greys and text colours unchanged; white dominant; the tint is mauve, never beige.
9. Fonts: Inter Tight + Albert Sans via theme.json fontFace; zh-TW/ja display in Noto Sans TC/JP; `check-editor-fonts.mjs` passes; the max size is 4.5rem.
10. 18 home photo positions, each image once, all in one STYLE, no text, logos or legible screens.
11. Fixed facts (7 prices, 7 people, 3 stories, 3 demo slots, the 4-part hour, hours, address) identical on home, inner pages, footer and in all five languages.
12. Motion: marquee at 20 s; parallax passes `check-parallax.mjs` on desktop and phone; reveals only on the listed cards; no reveal in the hero; floating bar absent at scroll 0 and in `?sp-static`, present after the hero CTA leaves (Chrome, motion allowed).
13. Responsive: 390 first screen has no vertical or absolutely positioned labels over text, and the strip is a 2×2 arched grid; the price table is full width at ≥ 782 with nowrap right-aligned prices, and stacks under 782; no horizontal overflow at 390 or 1280; `auto-gates.mjs` passes.
14. Home English ≥ 250 words (target ≈ 700) with narrative paragraphs in blocks 2, 3, 6 and 9 at least.
