# Ushio Line: design spec (stage 1, binding for implementation)

Slug `ushio-line`, harbour passenger ferry, type `business`, five languages (en, zh-TW, ja, fr, de). WooCommerce compatible but not needed. Row: b21-3, archetype `horizontal-strip`, first screen `horizontal-scroll-strip`, page structure `day-schedule`, nav `overlay`, font direction `serif`.

References: Cruise Kobe (main, https://cruise-kobe.com/) and the Asuka Cruise brand page (secondary, https://www.asukacruise.co.jp/brand/). Measurements: `reference-tokens.md`, cited below as `tok(a)`–`tok(g)`. Screenshots: `ref/`. We borrow structure, technique, numbers, colour relationships and the key-visual concept. Photos, copy and logos are our own.

Corrections to `stage-a.md` (this spec wins):
1. `sp-parallax` moves layers vertically only, so it cannot make the hero panels drift sideways. Hero sideways drift is a theme CSS time loop; `sp-parallax` adds the scroll speed difference (section 9).
2. Text colour is the reference's `#1A1A1A`, not `#1A2328`. Nothing justifies changing it.
3. Section 0 replaces any route, count or time implied elsewhere.

---

## 0. Fixed facts (home, inner pages, footer and all five languages use exactly these)

| Fact | Value |
|---|---|
| Name | Ushio Line |
| Tagline | Harbour ferry, pier to pier |
| Story line | The pier is the platform. The water is the line. |
| Founded | **1974**, two boats, four piers. Ropewalk added **1996**, Eastmole added **2008** |
| Place | **Calder Bay** (fictional harbour city, no country named) |
| Office | Ushio Line Harbour Office, 1 Customs Stairs, Calder Bay |
| Contact | hello@ushioline.example · +1 555 0142 (fictional) |
| Office hours | Monday to Saturday, 08:00–18:00 |
| Ticket windows | Every day, 05:15–23:30 (Customs Stairs and Eastmole); on board at the other four piers |
| Line | One line, **6 piers**, **24 minutes** end to end |
| Boats | **5**: Morning Tern, Petrel, Kittiwake, Sandpiper in service, Slack Water as relief boat |
| Each boat | **180** passengers, **24** bicycles, step-free ramp |
| Crew per sailing | **4**: master, engineer, two deckhands |
| Sailing days | Every day of the year except when weather stops service; notices go up at each pier and on the Notices page |

Piers in order, with minutes from Eastmole:

| Pier | Min | Character |
|---|---|---|
| Eastmole | 0 | Commuter terminal, ticket window |
| Shipyard Steps | 5 | Workshops and the technical college |
| Lantern Point | 9 | Housing, the old light |
| Customs Stairs | 14 | City centre, Harbour Office, ticket window |
| Fishmarket Quay | 19 | Market, open from 06:00 |
| Ropewalk | 24 | Parks and offices |

The day (the same six stops on Home and Timetable):

| Time | Stop | Meaning |
|---|---|---|
| 05:15 | Crew aboard | Checks, ramp test, engine warm |
| 05:40 | First boat | Leaves Eastmole, then every 20 minutes |
| 07:00 | Morning peak | Every 15 minutes until 10:00 |
| 10:00 | Midday | Every 20 minutes until 16:00 |
| 16:00 | Evening peak | Every 15 minutes until 19:00, then every 20 |
| 23:10 | Last boat | Leaves Ropewalk, arrives Eastmole 23:34 |

Fares (USD in every language, no conversions):

| Item | Price | Note |
|---|---|---|
| Single | $3.20 | Any distance on the line |
| Child single | $1.60 | Ages 5–15; under 5 travel free |
| Day pass | $8.50 | Until the last boat |
| Ten-ride book | $27.00 | Paper tickets, no expiry |
| Monthly pass | $74.00 | Calendar month, named |
| Bicycle | $1.00 | Added to any ticket |

People (7, fictional, diverse):

| Name | Role | Notes |
|---|---|---|
| Ruth Adeyemi | Master, Morning Tern | Joined 2009 |
| Tomas Lindgren | Chief engineer | Looks after all five boats |
| Priya Nair | Deck lead | Trains the deckhands |
| Mateus Carvalho | Deckhand, Petrel | Joined 2021; photographs never name him |
| Yuna Seo | Pier supervisor, Customs Stairs | Runs both ticket windows |
| Ewa Nowak | Timetable planner | Writes the seasonal timetable |
| Samir Haddad | General manager | Since 2019 |

Stories (4): Dana Whitfield, night nurse, takes the first boat home from Customs Stairs (the 05:40 from Eastmole, at the stairs at 05:54); Oskar Bell, apprentice, bicycle on every morning peak to Shipyard Steps; Leila Rahimi, fish seller, first at Fishmarket Quay with her cart on the ramp; the Lantern Point Year 5 class and their one Tuesday trip across the bay.

Do not claim punctuality rates, safety records, awards, passenger totals or green credentials. Sailings can be changed by weather: say so plainly.

---

## 1. Signature techniques (all obvious at a glance)

### T1. Triple-panel photo strip in one huge-radius frame
- Source: Cruise Kobe first screen, https://cruise-kobe.com/, `ref/ck-first.png`, `tok(c)(d)(e)`.
- Reference: three vertical photographs of unequal width abut with no gap inside a single rounded frame, 30px from each viewport side, 750px of 900 tall, starting at 100px, radius 165px. Wordmark sits white at the centre.
- Used in: home hero (section 3).
- Exact shape at 1440×900: frame x=30, y=100, width 1380, height 750, `border-radius:165px`, `overflow:clip`. Grid `418fr 546fr 416fr`, gap 0, no seam lines. Height `min(750px, calc(100svh - 150px))`, minimum 560px.
- Must not be diluted: the radius stays 165px at ≥1280 (not 40, not 80); widths stay unequal; three panels, never two; the white page must show around the frame; no shadow or border.

### T2. Sine-wave underline links
- Source: Cruise Kobe link row and "View more", `ref/scroll-ck-price-before.png`, `ref/scroll-ck-gallery-band.png`, `tok(d)(f)`.
- Reference: text, a thin "→", and a 1px sine line about 12px under the text, exactly the width of the label.
- Used in: every CTA on every page, as `.ul-wave` (paragraph or Button block style). No filled buttons anywhere on the site. Wave path: period 16px, amplitude 2px, stroke 1px, `currentColor`, repeat-x via `mask` so it takes the text colour; 12px under the text; width equals the text and arrow. Hover: the wave slides left 16px over 0.6s linear, infinite; off under reduced motion.
- Must not be diluted: a real sine, not a straight or dotted rule; visible at rest.

### T3. Radius-240 floating band
- Source: Cruise Kobe gallery band, `ref/scroll-ck-gallery-band.png`, `ref/scroll-ck-price-before.png`, `tok(c)(d)`.
- Reference: a solid band inset 11px from each viewport side, all four corners ≈240px, on a pale ground, centred white title 90/90 weight 600 tracking 1.8px, "View more" link, about 800px tall.
- Used in: home `front-day`, holding the day schedule (section 3, block 4). Width `calc(100vw - 22px)`, radius 240px, ground `#3E4C55`, on `#DCE6EA`. Keep the `tok(b)` ghost word at the band foot.
- Must not be diluted: all four corners stay ≥ 200px at ≥1280; the mist must show on both sides and above and below; the band stays solid slate.

### T4. Serif split row (supporting, secondary reference)
- Source: Asuka brand page, https://www.asukacruise.co.jp/brand/, `ref/scroll-asuka-split.png`, `tok(e)`.
- A 640×540 photo (r0) flush to the viewport edge, copy beside it, and a 555px wide sea-texture photo floating lower right. Used on home `front-line` and mirrored on `front-crew`.
- Must stay flush: no margin on the photo's outer edge, no radius. This square-cut edge is the deliberate contrast to T1 and T3.

### Continuation into inner pages
Every inner page opens with a **mini strip**: T1 at height 360px, inset 30px, radius 96px, three panels `30/40/30`, title below it on white (`tok(b)` label + heading). No wordmark on the seam. Each page uses three different photos, listed in section 6.

| Page | T1 mini strip | T2 | T3 band | T4 split |
|---|---|---|---|---|
| Piers | P1 P2 P3 | yes | six-pier list | — |
| Timetable | N1 K2 P1 | yes | full day stops, plus the ghost word | — |
| Fares | T1 P2 W1 | yes | fare table sits under the band; band holds "Ways to pay" | — |
| The Boats | B1 E1 W2 | yes | specifications | Boat story split |
| Crew | C1 C2 E1 | yes | "Four to a sailing" | people split |
| On Board | A1 S1 K2 | yes | — | step-free boarding split |
| About | B1 W2 N1 | yes | 1974 / 1996 / 2008 | history split |
| Notices, Contact | W1, S1, P3 / P2, K3, T1 | yes | — | — |

The band must appear on at least Piers, Timetable, Boats and About at full size (radius 240 at ≥1280), so the signature is never home-only.

---

## 2. Key visual concept

### (1) Reference first screen, story, motion
Cruise Kobe draws a port in three vertical photographs side by side inside one rounded frame: gulls close-up, quay and buildings, ferris wheel and open water. The white wordmark sits at the centre. Short sine ticks scatter across the white page like small waves, and a hand-drawn dashed ellipse rings "today's operation". The story: the port is a living place, and a boat is a light way to see it. Motion: a load screen, panels drifting sideways at different speeds, ticks drifting, items bouncing in.

### (2) Our transformation
Same composition, same motion idea, same image type: three documentary photographs of one working morning on a commuter harbour. Left, a deckhand takes a paper ticket at the gangway. Middle, flat water beyond the rail with one gull. Right, the far pier with a grey-white ferry moored. The story turns from sightseeing to daily transport: **the pier is the platform, the water is the line**. The ellipse rings "Today's sailings". The ticks stay, because a harbour has small movement everywhere.

### (3) KV checklist

All six are implemented on the first screen and visible at 1440×900.

| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Three vertical panels in one rounded frame | Three documentary panels, 418/546/416 | x30 y100, 1380×750, radius 165 | Each panel drifts sideways ±2.5%, 26s / 34s / 30s, linear alternate; scroll speed `--sp-par` 6% / 9% / 7% | K1, K2, K3 |
| 2 | White wordmark at the centre | H1 "Ushio Line" white, Source Serif 4 600, 3.25rem, two stacked lines, tagline "Harbour ferry, pier to pier" 0.875rem under it | Centred in the middle panel, on the frame centre | None, no reveal | over K2 |
| 3 | Scattered sine ticks | Eight ticks 35/70/140px, 1px, `#3E4C55` on white; two in `#FFFFFF` over the water of K2 and K3 | Positions in section 3 | ±14px sideways, 10s linear alternate | SVG `assets/wave-tick.svg` (K2, K3 behind) |
| 4 | Dashed ellipse around "today's operation" | Hand-drawn dashed ellipse, 172×64, around "Today's sailings ↓", links to `#day` | Header, right of nav, y≈50 | None | SVG `assets/ellipse.svg` |
| 5 | Header over the page, transparent, wave icon | Overlay header: wordmark left, nav, ellipse, language right. Wave icon replaces the hamburger under 960px | Top 100px, wordmark overlaps the frame by ≤ 18px | None | Wordmark text |
| 6 | Gull close to the viewer | One gull inside the photograph, upper third of the middle panel, wings open, above the wordmark. Never a cut-out | Middle panel | Panel drift | K2 |

---

## 3. Home page

### First screen (1440×900)
- White page. `front-hero` is the T1 frame. **Hero `sp-parallax` lives on each panel**, not the frame, so speeds differ.
- Panel markup: `div.ul-panel.sp-parallax[style="--sp-par:6%"] > div.ul-panel__drift > img.sp-parallax__layer`. The drift keyframe (`transform: translateX`) goes on `.ul-panel__drift`, never on the image, because `sp-par` already takes the image's `animation`. Wrap drift in `@media (prefers-reduced-motion: no-preference)` and start each selector with `html.sp-js:not(.sp-no-motion)`.
- Middle panel overlay: `linear-gradient(rgba(26,26,26,.10), rgba(26,26,26,.30))`, wordmark on a `.ul-seam` block outside the moving layers. White text must reach 4.5:1 against its local photo area; K2 must have mid-grey water behind the wordmark.
- Crops: K1 focus on hands, ticket and rail at 30% from the top; K2 gull upper third, water centre; K3 moored ferry low in the frame, water at the foot.
- Tick positions (% of viewport width, height; length): 2/21 35 · 54/4.5 70 · 60/7.5 70 · 1/63 35 · 3/93 70 · 98/17 35 on white; 44/78 70 and 82/70 35 in white on the water.
- Hero copy totals about 12 words. Forbidden: table, form, search box, buttons, sidebar, vertical booking tab (used pattern), load screen (delays LCP), reveal.
- First panel image `loading="eager"`, `fetchpriority="high"` on K2.

### Header
Absolute over the page, no background, height 100px, content inset 65px left. Wordmark: "Ushio / Line", two lines, Source Serif 4 600, 2.25rem/0.95, `#3E4C55`, wordmark bottom overlapping the frame top by ≤ 18px on the corner curve. Nav items 0.9375rem Nunito Sans 500, tracking 0.04em: Piers, Timetable, Fares, The Boats, Crew, About. Then the ellipse link, then the language menu. One menu only. After scroll it does not stick. Under 960px: wordmark, language, wave icon (three stacked sine lines, 50×18) opening the core overlay, panel radius 24px, ground `rgba(255,255,255,.92)`. Footer lists every page.

### Block order
| # | Pattern | Purpose | Layout, photos | Copy |
|---|---|---|---|---|
| 1 | `front-hero` | the line in one look | T1 + KV checklist | 12 words |
| 2 | `front-line` | what this is | **T4**. White. B1 640×540 flush left; right column at x=720, label "About", heading "A commuter line, on the water" 2.75rem, two paragraphs. W1 555 wide floats lower right, starting 100px below B1's foot. Ticks around. | 90 words, 2 paragraphs |
| 3 | `front-piers` | where it goes | Mist ground. Heading "Six piers, twenty-four minutes". Route: one long SVG sine, 1px slate, full container, six dots at positions proportional to the minutes (0, 5, 9, 14, 19, 24), pier name above each and minutes below. Then three portrait photos P1 P2 P3 at ratio 0.73, radius 48px, widths 30/40/30 as an echo of T1, gap 24px, caption under each. Then the T2 row of six pier links with `tok(c)` wide spacing. Then the `sp-marquee` tick row. | 70 words |
| 4 | `front-day`, id `day` | how a day is timed | **T3**. Mist ground continues; band 1418×800 at 1440. Title "A sailing day" 5.625rem/1 weight 600 white, tracking 1.8px, centred; T2 "View timetable →". Under it a horizontal strip of the six stops (section 0): one white 1px sine line across, a tick at each stop, time in Source Serif 1.75rem, name 1rem 600, meaning 0.875rem. Ghost word at the foot "Pier to pier, daily" `aria-hidden`, English in all languages, 10.4vw, white at 45%, clipped by the band, no overflow. | 60 words |
| 5 | `front-water` | scale, breath | White ground. W2 in a frame inset 30px, 1380×640, radius 165, `sp-parallax`, `--sp-par: 9%`. Static foreground at lower left of the frame: "Flat water, most mornings." white 2.75rem, not in the moving layer. Overlay `rgba(26,26,26,.18)`. | 5 words |
| 6 | `front-crew` | who runs the deck | **T4 mirrored**. C1 640×540 flush right. Left: heading "Four to a sailing", paragraph, four ruled rows (role, name, one line), no grid of portraits. C2 555 wide floats lower left. T2 "Meet the crew →". | 90 words, 1 paragraph |
| 7 | `front-fares` | price summary | Mist ground. Label "Fares", heading "Paper ticket, or a pass". T1 photo 4:3 radius 48 at right 4/12 next to two-line intro. Ruled list of the six items, full width at ≥782px, price nowrap right. T2 "All fares →". No reveal. | 40 words |
| 8 | `front-story` | a real morning | White. S1 4:5 radius 48 at columns 2–6; columns 7–11 pull line in Source Serif 1.75rem, then Dana Whitfield's story in 2 short paragraphs, T2 link to About. | 90 words, 2 paragraphs |
| 9 | `front-access` | how to board | White, padding 180/180 (`tok(c)`). Left: "Step-free at every pier", bicycles, tickets, in ruled rows. Right: A1 3:2 radius 48. T2 "On board →". | 50 words |
| 10 | `front-notices` | service news | White, 90/90. Label "Notices"; three dated rows from a Query Loop, date in Source Serif, title, T2 "All notices →". | Query Loop |
| — | Footer | contact | Solid `#3E4C55`, no radius, white text; all pages, office, hours; 1px white sine at top. | — |

**Home photo positions: 14** (K1 K2 K3, B1, W1, P1 P2 P3, W2, C1, C2, T1, S1, A1), none repeated. English ≥ 250 words, ≥ 3 narrative paragraphs (blocks 2, 6, 8).

### Compared with recent themes
| # | Hibana | Mimamori | Mahora | Asaoka | **Ushio Line** |
|---|---|---|---|---|---|
| 1 | twin photo panels | gateway strip biting photo | abutting tiles with label tabs | mist wave foot + notice card | **three panels in one r165 frame, seam wordmark** |
| 2 | about, caps head | white sheet of five cells | centred heading + hand line | scoop-corner tiles | **flush split with floating sea photo** |
| 3 | month panels | feather + ruled row | role tiles | ■ dated rows | **sine route with six proportional piers** |
| 4 | week photos | cream/blue bands | slideshow panel | — | **r240 slate band with day strip + ghost word** |
| 5 | parallax floor | news | rates table | — | **inset r165 parallax photo** |
| 6 | cohort rows | — | — | — | **mirrored split, four ruled roles** |
| 7 | instructors | — | — | — | fares list |
| 8 | stories | — | — | — | single story |
| 9 | fees | — | — | — | access |
| 10 | close | — | — | — | notices |

Why not alike: no tabs, tiles, cards, ring fields, caps heading rows or scoop corners. The shared shape language here is the huge rounded rectangle against the flush r0 photo, tied together by sine lines, which none of the four uses. Hibana's fees come near the end too, but its rows carry T2 heads and arrows; ours sit on mist with wave links. Asaoka's wave is a large section edge; ours are 1px lines only.

---

## 4. Inner pages (9 + index and single)

Each: mini strip → label + heading → page body → T2 close line. No sidebar. Photo lists in section 6.

1. **Piers** (`/piers`): route sine at full width; T3 band with the six piers and their minutes; one section per pier (name, what is nearby, boarding notes, step-free note); P1 P2 P3.
2. **Timetable** (`/timetable`): T3 band with the six day stops and the ghost word; timetable table: departure pattern by period, then minutes per pier; note about seasonal changes and weather; stacked on mobile.
3. **Fares** (`/fares`): fare table (section 0); T3 "Ways to pay"; how paper tickets work; concessions; refund line: unused ten-ride tickets stay valid, no expiry.
4. **The Boats** (`/boats`): T3 specifications (180 passengers, 24 bicycles, ramp); five boats in ruled rows with name, built year (Morning Tern and Petrel 2011, Kittiwake and Sandpiper 2014, Slack Water 1998); T4 split about the relief boat.
5. **Crew** (`/crew`): T3 "Four to a sailing"; T4 split; seven named people in ruled rows, not a grid; how a shift runs (05:15 start).
6. **On Board** (`/on-board`): T4 step-free boarding; bicycles; pets; children; what to do in fog or swell; lost property at Customs Stairs.
7. **About** (`/about`): T3 with 1974, 1996, 2008; T4 history split; 2 narrative sections; Samir Haddad's note.
8. **Notices** (`/notices`, `home.html`, `archive.html`, `single.html`): dated rows; 6 demo posts (winter timetable, Fishmarket Quay ramp repairs, Slack Water maintenance, new ten-ride book covers, bicycle rack change, Lantern Point school trip). Single: label, title 2.75rem, column 680px.
9. **Contact** (`/contact`): office address, phone, email, hours, ticket windows, lost property. No form required. T2 mailto.
10. **404 / search**: label + heading + T2 home.

Repo contract (`scripts/check-themes.mjs`):
- `theme-meta.json` `pages`: home, about, news, article, category, tag, newsletter, contact, each with a `screens.<page>` URL in `demo-content.json`. Map news and newsletter to Notices, article to the first demo post, category and tag to a real demo term, contact to Contact.
- `templates/tag.html` exists (copy of `archive.html`, label TAG). Notices is the single `role: posts` page, empty, no template. Demo posts have categories and tags.
- `brand.md` states name, place, founding, people, audience, voice and a "day" description; it uses the word "day". Section 0 is the source.
- All files in `brand/`, `theme-meta.json` and the like are English only; Chinese and Japanese appear only in `demo-content.zh-TW.json`, `demo-content.ja.json` and paths containing zh-TW or ja. Screens, slugs and order match English in every language.

---

## 5. Colour, type, spacing

### Colour
| Role | Hex | Source token | Use | Share |
|---|---|---|---|---|
| Main slate (katsu-iro) | `#3E4C55` | replaces `#303EC8`, `tok(a)` | bands, footer, wordmark, ticks | 25–30% of page; 0% saturated on first screen |
| Secondary mist | `#DCE6EA` | replaces `#DAE8FF`, `tok(a)` | section grounds | 20% |
| Base | `#FFFFFF` | `tok(a)` unchanged | page | 45% |
| Text | `#1A1A1A` | `tok(a)` unchanged | body, headings on light | — |
| Muted | `#55626A` | derived from main | captions, meta (5.9:1 on white) | — |
| Accent rope rust | `#A8573F` | ours; reference has none | one 6px dot before the "Today's sailings" label; active nav dot. Never text | < 1% |

**Why the main hue changes.** The rule is to use the reference colours unless they clearly do not suit; blue suits a ferry, so this exception is not about the industry. It comes from two binding rules: the row note requires a quiet palette, and the common rules forbid large high-saturation fields. `#303EC8` on 35% of a page is exactly that. Slate keeps what matters in the reference, the value structure: L* 31.5 against the reference's 34.5, white on main 8.9:1 against 7.9:1, and the band still reads as a heavy solid shape (the Tsumugi lesson: never swap contrast for pale stone). Mist `#DCE6EA` drops the periwinkle cast of `#DAE8FF`, which clashes with slate, at near-equal lightness.

**First-screen saturated share** (HSV s>0.6, `check-first-screen.py`): reference 5.0%. Target ≤ 5%, hard cap **15%** (row ceiling 30%; common rule 15%). Only photographs carry colour, so the photo grade must stay cool and low in saturation.

### Type (font_direction: serif)
- Latin headings: **Source Serif 4** (400, 600). Latin body: **Nunito Sans** (400, 500, 600).
- Heading stack: `"Source Serif 4", "Noto Serif TC", "Noto Serif JP", Georgia, serif`.
- Body stack (en, fr, de): `"Nunito Sans", system-ui, sans-serif`.
- zh-TW display, `:root:lang(zh-TW)`: `"Noto Serif TC", "Source Serif 4", serif` (Ming style). zh-TW body: `"Songti TC", "PMingLiU", serif`, system Ming fonts only. The repo gate forbids the bundled zh family and any Japanese font in the zh body stack, so serif direction is kept with system fonts.
- ja, headings and body: `:lang(ja)` `"Noto Serif JP", "Source Serif 4", serif` (Mincho style).
- Do not use the reference's sans (Reddit Sans) or Noto Sans. Its numbers apply; its family does not, because the row sets serif.
- Load all faces with `theme.json` `fontFamilies` + `fontFace`, including the zh-TW and ja subsets; same fonts in editor and front end. `style.css` uses `:lang(`, so copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it in `functions.php`. List every file in `theme-meta.json` `fonts[].files` with `licenseFile` and license, and name each family in `readme.txt`. Must pass `check-editor-fonts.mjs`.

| Preset | Size | LH | Weight | Tracking | Source |
|---|---|---|---|---|---|
| small | 0.875rem (14) | 1.1 for labels | 400 | 0.28px | `tok(b)` h2 label |
| base | 1rem (16) | 1.75 (28px) | 400 | normal | `tok(b)` body 16/28 |
| medium | 1.375rem (22) | 1.1 | 500 | 2.42px on nav-size display labels only | `tok(b)` nav label |
| large | 1.75rem (28) | 1.3 | 400 | 0 | ours |
| x-large | 2.75rem (44) | 1.2 | 400 | 0 | ours, section heads |
| xx-large | 5.625rem (90) | 1 | 600 | 1.8px | `tok(b)` gallery title; max preset, ≥ 4.25rem |

Ghost word: 10.4vw (150px at 1440), `tok(b)`, CSS only, not a preset. Section labels: "About", "Fares" etc. in Source Serif 1.375rem, `#3E4C55`, above the heading (`ref/scroll-ck-about-before.png`).

CJK: headings about 0.75× English, body line-height 1.85, weight 400. fr/de: `hyphens:auto`. Long fr/de words must fit the day strip and nav.

### Spacing, radius (from `tok(c)(d)`)
Content width 1220; wide 1380. Header 100. Sections: price 120/120; access 180/180; news 90/90; about 75 top. Shadows 0, card borders 0. Ruled rows use 1px `#3E4C55` at 25%. Radius scale: 165 (frames), 240 (band), 96 (mini strip), 48 (photos), 24 (menu panel), 0 (T4 flush photo). Grain: none. No beige.

---

## 6. Images (16, one STYLE, one at a time, read each)

Imagery: **photo** (`IMAGERY: photo`, Cruise Kobe is photographic). Each ≤ 300 KB and ≤ 2000px, 0 transparent PNGs, one readme.txt line each (AI-generated, CC0).

STYLE (exact, every prompt):
`documentary photograph, 35mm lens, high-key overcast harbour daylight, cool slightly desaturated grade of grey-white, slate and pale sea green, flat calm water, modern international harbour city, plain navy and grey work clothes, diverse adults, candid unposed moment, natural fine grain, no text, no letters, no numbers, no logos, no brand marks, no signage, no Japanese elements`

| ID | Subject, composition | Home | Inner pages |
|---|---|---|---|
| K1 ★ | Portrait 0.56. A deckhand at the gangway takes a blank paper ticket from a commuter's hand, flat water beyond the rail, hands sharp | hero left | — |
| K2 ★ | Portrait 0.73. Flat grey-green water beyond a white rail, one gull wings open in the upper third, mid-grey water at the centre | hero middle | Timetable strip, On Board strip |
| K3 ★ | Portrait 0.55. The far pier with a grey-white ferry moored low in the frame, open water at the foot | hero right | Contact strip |
| B1 ★ | 640×540. Close view of a white ferry's bow and rail at the quay, mooring rope, no name | front-line | Boats strip, About strip |
| W1 ★ | 16:10. Wake on flat water from the stern, top-down, texture | front-line float | Fares strip, Notices strip |
| P1 ★ | Portrait 0.73. Commuters waiting on Eastmole pier, seen from behind, ferry approaching | front-piers | Piers strip, Timetable strip |
| P2 ★ | Portrait 0.73. Worn stone stairs down to the water with a commuter on a bicycle pushing it up | front-piers | Piers strip, Fares strip, Contact strip |
| P3 ★ | Portrait 0.73. A rope-lined timber pier at early light, one person walking away | front-piers | Piers strip, Notices strip |
| W2 ★ | 2000×1000 wide. A small grey-white ferry crossing a wide flat harbour at dawn, low skyline, much empty water | front-water (parallax) | Boats strip, About strip |
| C1 ★ | 640×540. A master at the wheelhouse window, hands on the controls, looking ahead | front-crew | Crew strip |
| C2 ★ | 16:10. A deckhand coiling a mooring rope on deck | front-crew float | Crew strip |
| T1 ★ | 4:3. Hands passing blank paper tickets through a small ticket window | front-fares | Fares strip, Contact strip |
| S1 ★ | 4:5. A nurse in plain coat seated on the deck bench at dawn, looking at the water | front-story | On Board strip, Notices strip |
| A1 ★ | 3:2. A wheelchair user and a deckhand on a level boarding ramp | front-access | On Board strip |
| E1 | 4:5. An engineer checking gauges in a tidy engine room, gauges unlabelled | — | Boats strip, Crew strip |
| N1 | 4:5. Pale dusk, a deckhand hosing the deck of the moored last boat, cabin lights on, still high-key | — | Timetable strip, About strip |

★ = used on home. No image twice on one page. Inner T4 splits use: Boats K3, Crew T1, On Board P2, About P3; these are not in those pages' strips. Other page bodies are text only unless they stay clear of the page's strip.

Reject and regenerate any image with lettering on hull, tickets, gauges or clothing; odd hands; a Japanese setting; a warm or saturated grade.

---

## 7. Responsive

- **390px first screen:** frame inset 12px, radius 72px, height 560px, panels stay side by side `30/40/30`; `--sp-par` 4% / 6% / 5%. Wordmark 2.25rem centred, tagline under it, in normal flow inside `.ul-seam`, one block only. **No vertical text and no absolutely positioned label stacked over other text** on the first screen. The ellipse link moves into the flow directly under the frame, not over it. Ticks are decoration with no text and stay on the white ground only; keep at most 4.
- Band at < 782px: inset 8px, radius 72px; title 3rem; day stops stack as ruled rows, sine line hidden, no horizontal scroll; ghost word keeps 10.4vw.
- At 782–1279px radii scale: frame `clamp(72px, 11.4vw, 165px)`, band `clamp(72px, 16.6vw, 240px)`.
- **Price list and every table at ≥782px:** full width of the content column, price column `white-space:nowrap`, right-aligned, never clipped (800 and 1280 are gate widths).
- **Any table on mobile:** stacked rows with each row's label visible.
- T4 on mobile: photo full width, r0, flush both sides; copy; float photo below at 80% width aligned right.
- `html, body { overflow-x: clip }`. No horizontal overflow at 390 or 1280.

---

## 8. Scroll effects (3 kinds, sp-scroll only)

| Effect | Class | Block | Source and values | Ours |
|---|---|---|---|---|
| Bounce-in | `sp-stagger` + `sp-reveal sp-reveal--zoom` | `front-piers` photos, one per photo | Cruise Kobe: GSAP ScrollTrigger start "top center", scale 0→1 + opacity, about 1.2s, back.out(1.7) | sp-scroll is scale 1.06→1, fired on entry. On `.ul-piers` set `--sp-ease: cubic-bezier(.34,1.56,.64,1)` (back.out(1.7) approximation); `--sp-dur: 1.2s` needs the selector `html.sp-js:not(.sp-no-motion) .ul-piers .sp-reveal--zoom` to beat the 1.6s default |
| Fade up / side | `sp-reveal sp-reveal--up`, `sp-reveal--left` | `front-line` and `front-crew` text and float photo; `front-story`; `front-access`; `front-notices` head | Asuka: fade on entry, about 0.8s, ease | Defaults 0.8s, `cubic-bezier(.23,1,.32,1)`, 24px |
| Drift | `sp-parallax` (section 9), `sp-marquee` | Hero, `front-water`; tick row in `front-piers` | Cruise Kobe: `scrub:2`, ease none; wave loop about 10s linear | `sp-parallax` linear with no lag. `sp-marquee` is fixed at 30s; do not alter it. Duplicate the tick group `aria-hidden` |

Repo contract: visible words and arrows live in markup, never in CSS `content:` (this covers "→", labels and the ghost word); the wave and ellipse are SVG or mask, so they carry no words. Rules: no reveal in the hero, `front-fares`, or tables. No children of a horizontal scroller get reveals. Reveals stay under 60% of blocks. Not used: Lenis, GSAP, load screen. Sideways panel drift, tick drift and link wave are CSS keyframes (time loops, no scroll listener), removed under reduced motion and `?sp-static`.

---

## 9. Parallax (required)

| Place | Background | Foreground | `--sp-par` desktop | Mobile | Reference motion |
|---|---|---|---|---|---|
| Hero panels (first screen) | K1, K2, K3, each a `.sp-parallax__layer` in its own `.ul-panel.sp-parallax` | Wordmark in `.ul-seam`, above and outside the panels | 6%, 9%, 7% | 4%, 6%, 5% | Panels moving at different speeds, `scrub:2` drift |
| `front-water` | W2, as Cover background or `.sp-parallax__layer` | "Flat water, most mornings." in Cover inner, never moving | 9% | 7% | Same scrubbed drift |

Keep `--sp-par` ≤ 9%: scale 1.18 gives 9% overscan on each side, so more would expose the ground at the end of travel. The layer must be `sp-parallax__layer`: `check-parallax.mjs` finds that class as a descendant, so the drift wrapper does not hide it. Reduced motion, `?sp-static`, no-JS and the editor: no movement and no scale.

---

## 10. Similarity table (target 80%)

| Dimension | Reference | Ushio Line | Source |
|---|---|---|---|
| Main colour | `#303EC8` | `#3E4C55` (reason in section 5) | `tok(a)` |
| Pale ground | `#DAE8FF` | `#DCE6EA` | `tok(a)` |
| Base, text | `#FFFFFF`, `#1A1A1A` | same | `tok(a)` |
| First-screen saturated | 5.0% | ≤ 5% target | `tok(a)` |
| Page share | main 35 / pale 20 / white 45 | main 25–30 / mist 20 / white 45+ | `tok(a)` |
| Display title | 90/90, 600, 1.8px | same values, Source Serif 4 | `tok(b)` |
| Body | 16/28 | same | `tok(b)` |
| Label | 14/15.4, 400, .28px | same | `tok(b)` |
| Ghost word | ≈150px, white 45%, foot of band | same | `tok(b)` |
| Hero frame | y100, side 30, 750 of 900, r165 | same | `tok(c)(d)` |
| Band | 1397 wide (11 inset), r240, about 800 tall | same | `tok(c)(d)` |
| Panels | 418 / 546 / 416, ratios .56 / .73 / .55 | same | `tok(e)` |
| Section padding | 120/120, 180/180, 90/90 | same | `tok(c)` |
| Shadow, card border | none | none | `tok(d)` |
| Ellipse | hand-drawn dashed | same, around Today's sailings | `tok(d)` |
| Link | 1px sine, 12px below, arrow | same | `tok(d)(f)` |
| Ticks | 35–140px, 1px | same | `tok(f)` |
| Split | 640×540 flush, r0; 555 float | same | `tok(e)` |
| Grade | cool, slightly desaturated | same | `tok(e)` |
| Bounce | back.out(1.7), about 1.2s, scale 0→1 | back approximation, 1.2s, scale 1.06→1 | `tok(g)` |
| Scrub drift | `scrub:2`, none | linear, no lag | `tok(g)` |
| Wave loop | ≈10s | 10s ticks; 30s marquee row | `tok(g)` |
| Latin type | geometric sans | serif, by row | `tok(b)` |
| Skipped | cut-outs, vertical booking tab, Lenis, load screen | none used | `tok(e)(f)(g)` |

---

## 11. Home acceptance checklist

1. First screen shows all six KV items at 1440×900: three unequal panels, frame x30 y100, 1380×750, r165.
2. K1 shows a deckhand taking a blank paper ticket; K2 a gull over flat water; K3 a moored ferry.
3. Seam wordmark white and readable (≥ 4.5:1 locally); ellipse present; ticks visible on white.
4. No reveal in the hero; no table, form, search box, filled button or vertical tab on the first screen.
5. Every CTA is a T2 sine link.
6. `front-day` is the r240 slate band on mist, inset 11, with six stops and the ghost word without overflow.
7. T4 flush r0 split on `front-line`, mirrored on `front-crew`, each with a floating photo.
8. Mist, white and slate alternate; no saturated field; first-screen saturated share ≤ 15%, target ≤ 5%.
9. Block order equals section 3; ≥ 8 images, none repeated.
10. All numbers match section 0.
11. Fares list full width at ≥782px, price nowrap right; stacked on mobile.
12. 390px: no vertical or overlapping labels; no horizontal overflow; ellipse below the frame.
13. `auto-gates.mjs` and `check-parallax.mjs` pass at both sizes; parallax ≥ 6px on hero and `front-water`.
14. ≥ 250 English words, ≥ 3 narrative paragraphs; no guarantee, record, award or real-brand claims.
15. Photos share STYLE: no text, logos or broken hands.
