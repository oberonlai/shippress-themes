# Koori Cold Stores — design spec (stage 1, design director)

Type: **landing** (theme-meta `"type": "landing"`, page_structure **landing-longform**; business-services, WooCommerce-compatible but not required). Industry: a regional cold-storage operator that gives a shipper a **numbered room** in a temperature band and holds it there; the home page is one long capacity-enquiry page.
Primary reference: **https://www.yokorei.co.jp/** (Yokorei home, S5-Style business / logistics, plan-assigned, not on the used list). Tokens: `brand/reference-tokens.md`, cited as **T(a)…T(g)**. Screens: `ref/yk-first.png`, `ref/scroll-yk-{900,1800,2700,3600,4500}.png`. Secondary: none.
**Imagery: photo** (stage-a IMAGERY = photo). One real-photography STYLE string, **low-key documentary** (row `photo_direction: low-key`; §10). The reference photographs a forklift and its operator in a chilled hall; we photograph supervisors, drivers, pallets and probes at a refrigerated dock. 0 cut-outs.
Font direction: **sans**. Latin display/headings **Schibsted Grotesk**, Latin body **Onest**; zh-TW / ja **Noto Sans TC / Noto Sans JP** (gothic). No serif or Mincho anywhere. The reference's heavy serif section words become heavy Schibsted Grotesk lowercase.
Similarity target: about **80%** to the reference in palette relationships, image treatment, decoration, motion and layout rhythm. Photographs, copy and logo are ours; nothing is copied from Yokorei.
Header: one sticky two-row header with **exactly one top menu** (`core/navigation`, in-page anchors) and one CTA button. Class prefix `kc-`. Pattern slugs `koori-coldstore/<name>`.

---

## 1. Signature techniques (3 + 1 supporting; obvious at a glance; none may be softened)

### T1: Crossfading full-bleed dock hero with a progress-ring pager, boxed pause and a tilted line crossing the catch line's foot
- **Source**: yokorei.co.jp first screen (`ref/yk-first.png`, T(c), T(e), T(f), T(g)). Under a 110px two-row header, a **full-bleed photograph 1440×690 (2.09:1, no radius)** of a forklift operator carrying a boxed pallet through a green-floored chilled hall. The catch lockup sits **bottom-left** (small one-line kicker over a two-word thin catch ~70px, white). A **bold italic English line in the brand red, rotated about −8°**, crosses the **foot** of the catch line, starting under its middle and running past its right end. **Bottom-right**: three white dots, the active one wrapped in an **SVG progress ring** (r 14.5, stroke 4, white, dasharray 91.11) that fills during the 4 s hold, and a **boxed pause button 38×20** (1px white frame, two bars). The slider **crossfades** (interval 4000 ms, fade 1000 ms). Below the hero, the rounded top of the next band **peeks above the fold**.
- **Ours** (home §2 `koori-coldstore/hero`): the same full-bleed photo field, **1440 × min(690px, 100svh − 210px)**, no radius, **three low-key dock photographs crossfading** (K01 → K02 → K03; 4 s hold, 1 s fade). Dark bottom-left gradient for legibility: `linear-gradient(20deg, rgba(14,22,21,.72) 0%, rgba(14,22,21,.35) 38%, rgba(14,22,21,0) 62%)`. Catch lockup bottom-left at **left 90px, bottom 96px** (ref x 92): kicker Onest 500 1.125rem white `.92` "Regional cold storage · Northmere Port"; 12px; **h1** "A numbered room / that holds its cold." Schibsted Grotesk 400 **4.5rem** / 1.08, ls −.015em, white, two lines. **Tilted line** `kc-tilt`: "Room 7 · −21 °C · held" Schibsted Grotesk 700 italic **2.5rem** / 1, colour **#BFD3CF** (patina pale; patina itself is too dark on a dark photo), `transform: rotate(-7deg)`, `transform-origin: left center`, **positioned to start under the h1's 6th character and overlap the h1's last-line descender zone by 14px** (`margin-top: -26px; margin-left: 4.2em` in normal flow, inside the same lockup group; no absolute positioning). **Pager** `kc-pager` bottom-right (right 80px, bottom 48px): 3 dots (10px white discs, gap 28px; active one inside a 33px SVG ring r 14.5 stroke 4 white, dasharray 91.11, dashoffset 91.11 → 0 over 4 s linear) + boxed pause 38×20 (1px `rgba(255,255,255,.9)`, radius 3, two 2×8 bars; the play state shows a 7px triangle). The next section's patina band (T2) shows its **rounded top edge** 60px under the hero at the 900px fold (KV #6).
- **Mechanics** (no slider library; no scroll listener): the 3 slides are stacked `figure.wp-block-image` inside `.kc-hero__slides` (`position:absolute; inset:0`; images `object-fit:cover`). Crossfade = CSS keyframes, 15 s cycle per slide (`kc-fade`: 0–26.7% opacity 1, 33.3–93.3% opacity 0, 100% opacity 1 for slide 1; slides 2 and 3 use `animation-delay: 5s / 10s` with the same keyframes shifted so each holds 4 s and fades 1 s; slide 1 is the base layer and is opaque at rest). Ring fill = a second keyframe on the same 15 s clock. **Autoplay only runs under `html.sp-js:not(.sp-no-motion)` inside `@media (prefers-reduced-motion: no-preference)`**: no JS, reduced motion, `?sp-static`, editor and print all show **slide 1 static** with the first ring full. Pause = theme file `assets/kc-pager.js` (≤1 KB, click handler only; toggles `.is-paused` on the hero, which sets `animation-play-state: paused` on slides and rings, and swaps `aria-pressed` / `aria-label` "Pause slideshow" ↔ "Play slideshow"). The pause button is rendered only when `html.sp-js` exists (`html:not(.sp-js) .kc-pager__pause {display:none}`). Dots are decorative (`aria-hidden`); slides 2–3 have `alt=""` and `aria-hidden="true"`, slide 1 carries the real alt text.
- **Must not soften**: photo is **full-bleed, edge to edge, no radius, no frame**; the slides **really crossfade** (3 photos, 4 s / 1 s); catch lockup is **bottom-left**; the tilted line is **italic, bold, rotated −7°, crossing the h1's foot** (not sitting tidily under it); the **ring pager + boxed pause** are bottom-right; the band's rounded top peeks at the fold.

### T2: Fading patina band with a giant lowercase word, and white cards fusing a text panel with a crossfading photo
- **Source**: Yokorei "Business" (`ref/yk-first.png` fold, `ref/scroll-yk-900.png`, `-1800.png`; T(a), T(b), T(c), T(d), T(f)). A **full-width band with rounded top corners** is **solid brand red at the top and fades to the greige ground** (≈421px gradient, solid to ≈64%). A **giant lowercase Latin word** ("business", heavy, white, ~110px, line-height 1, column-reverse with a small bold sub-label 8px under it) sits at the top-left of the band. Overlapping the band's fade, **white cards 1200×440 (radius 8)** each fuse a **520px text panel** (54px outline icon, bold title ~36px, **60px red circle arrow** at the right of the title, then **three hairline link rows** with small red arrows) with a **680px photo** flush to the panel (no gap, outer corners radius 8), and the photo is itself a **crossfade slider with the same ring pager + pause** at its bottom-right. Cards stack with a 40px gap.
- **Ours** (home §5 `koori-coldstore/rooms`, anchor `#rooms`): band `kc-fadeband`: full-bleed (inset 0; ref band spans the viewport), `border-radius: 40px 40px 0 0`, height **520px**, `background: linear-gradient(180deg, #5A7572 0%, #5A7572 64.3%, #F3F5F4 100%)` on a section of `ground` #F3F5F4. Giant word **"rooms"** (white, Schibsted Grotesk 700, `giant` size 7.5rem at 1440, ls −.03em, lh 1) at container left (x 120 = (1440−1200)/2), top padding 64px; sub-label under it "Three temperature bands, twelve numbered rooms" Onest 700 1.125rem white, gap 8px (column-reverse order kept: the word is visually first). Then **3 white cards** (one per band, §9), each **1200×440**, radius 8, `overflow: clip`, no shadow (T(d)), gap 40px, the first card's top at band-top + 210px so the band's solid colour runs behind its upper half and the fade behind its lower half:
  - **Text panel 520px**, padding 40px 48px: row 1 = **54px line icon** (inline SVG, 1.6px stroke patina: snowflake-in-square for Frozen, droplet-thermometer for Chilled, double-snowflake for Deep frozen; drawn by us) + title (Schibsted Grotesk 700 2.25rem ink, "Chilled rooms" / "Frozen rooms" / "Deep-frozen rooms") + **60px circle arrow** (patina disc, white 20px arrow, right-aligned, links to `/rooms/#chilled` etc.). Then, indented 80px from the panel's left padding (ref x 233 vs card x 113), **three hairline link rows** 69px tall (1px `line` #D5DDDB between and below, text Onest 500 1.125rem ink, small patina arrow 16px at the right): row A "+2 to +4 °C · Rooms 1–5", row B "Suits dairy, produce, chilled ready meals" (per band, §9), row C "From €9.40 per pallet per week" (per band, §9). Rows link to `/rooms/#…`, `/cases/`, `/rates/`.
  - **Photo 680×440** flush right (`border-radius: 0 8px 8px 0` by the card's clip), **2-slide crossfade** (R1a/R1b, R2a/R2b, R3a/R3b; same mechanics as T1 with a **10 s cycle**: 4 s hold, 1 s fade), the ring pager (2 dots + pause) at the photo's bottom-right (right 40, bottom 40).
- **Must not soften**: the band is **solid patina for its top 64% and fades to the ground**, with **rounded top corners**; the giant word is **white, lowercase, ≥7rem on desktop**; text panel and photo are **flush in one card** (no gap, no border, one outer radius 8); the **60px circle arrow** and the **three hairline link rows** are present on every card; each card photo **crossfades with its own ring pager**.

### T3: The room-log strip directly under the hero (label cell + hairline rows)
- **Source**: Yokorei alert band under the hero (T(c), T(d): grid **310px label cell + 1fr list**, 1px #DDD hairlines). It is a utilitarian notice row that sits between the hero and the first content band.
- **Ours** (home §3 `koori-coldstore/log`): container 1200, `margin-top: 60px` directly under the hero, so its top edge is what shows at the 900px fold (KV #6); the patina band (T2) follows 140px below it. Grid **310px + 1fr**, outer 1px `line` border, radius 8, `overflow: clip`.
  - **Label cell** (310, `fill` #E6ECEA, padding 28px 32px): "room log" Schibsted Grotesk 700 2rem lowercase ink, lh 1; under it Onest 500 .875rem `muted` "This morning · readings every 10 minutes".
  - **List** (white): **3 hairline rows**, 56px each, 1px `line` between, padding 0 32px, grid `88px 1fr 140px 150px`: time (Onest 500 1rem tabular-nums `muted`: "06:00", "06:10", "06:20") · room ("Room 4 · Frozen", "Room 11 · Deep frozen", "Room 2 · Chilled", Onest 500 1rem ink) · reading (Onest 600 1.125rem tabular-nums ink, `nowrap`: "−20.6 °C", "−26.1 °C", "+3.2 °C") · status: 8px **amber** tick #D98A2B + "in band" (Onest 500 .875rem `muted`; this is the only amber in the first 1,200px of the page, ≤2%).
  - Footer link right-aligned under the strip: "How we log a room →" (to `/booking/#log`).
- No reveal (it is a data row). Static content, no sp-count (readings are not counters).
- **Must not soften**: the **310px label cell + hairline rows** grid, directly under the hero, with the amber ticks.

### T4 (supporting): Full-bleed photo band with a giant lowercase word, an underlined link and a 60px circle arrow
- **Source**: Yokorei "investor relations" / "sustainability" bands (`ref/scroll-yk-2700.png`; T(e) band 1440×500, 2.9:1). A full-bleed photo; on its right half a giant white lowercase word (two lines) and under it a white **underlined link** next to a **60px red circle arrow**.
- **Ours** (home §6 `koori-coldstore/dock`, **the parallax band**, §7.2): full-bleed **1440×500** Cover with **D01** (dock doors at night), overlay `rgba(14,22,21,.35)` + right-side gradient `linear-gradient(270deg, rgba(14,22,21,.55) 0%, rgba(14,22,21,0) 55%)`. Right block at x 960–1320, vertically centred: giant word **"the dock"** (white, `giant`, two lines "the / dock", lh .95), 40px, link row: "How a booking is confirmed" (Onest 600 1.25rem white, 2px white underline offset 8px) + 60px patina circle arrow (white arrow) at 24px gap; link targets `#booking`.
- Also reused as the **enquiry band variant** at the bottom of every inner page (§1 continuation).

### Continuation on inner pages (all signatures appear on ≥4 inner pages)
| Page | T1 page head | T2 fading band + fused cards | T3 log-strip grid | T4 photo band |
|---|---|---|---|---|
| Rooms & bands | **2-slide crossfade** head (R1a → R2a) with ring pager + pause; tilted line "12 rooms · 3 bands" | band word "bands", 3 fused cards (one per band, full text) | **room register**: 310 label "room register" + 12 hairline rows (room · band · positions · door) | dock band → enquiry |
| How booking works | single-photo head K03; tilted line "Offer held 48 h" | band word "steps", **one** fused card: text panel = the 4 steps as hairline rows, photo = Y03 | **log** section `#log`: 310 label "room log" + 6 rows (sample day) | enquiry band |
| Rates | head R3b; tilted line "From €9.40 / week" | band word "rates", the price table sits in a **white card on the band** (no photo; table full width of the card) | **terms strip**: 310 label "terms" + 4 rows (minimum, notice, invoicing, insurance) | enquiry band |
| The dock | head D01; tilted line "8 doors · seals on" | band word "dock", 2 fused cards: "Arriving" (photo Y01) and "Dock rules" (photo K01) | **hours strip**: 310 label "dock hours" + 4 rows | — (head already D01) |
| About | head Y05; tilted line "Since 1987" | band word "people", 1 fused card: history text panel + 2-slide photo slider (K02 → Y02) | **people register**: 310 label "people" + 7 rows (name · role · since) | enquiry band |
| Cases | head S02; tilted line "3 rooms, 3 seasons" | band word "cases", 3 fused cards (case 1 S01, case 2 R3a, case 3 S03; single photos, no pager) | — | enquiry band |
| Ask about capacity (contact) | head E01; tilted line "Reply in 1 working day" | band word "ask", form panel in a white card on the band (no reveal) | **what to send** strip: 310 label + 5 rows | — |
| Room alerts (newsletter) | head R2b; tilted line "First to know" | band word "alerts", form card on the band | — | — |
| Journal / single / archive | head without slider (single uses the featured image; archive uses a patina-pale ground head with the tilted line only) | posts as fused cards (text 520 + featured image 680) on the band in the archive | — | — |
Inner page head = `koori-coldstore/page-head`: full-bleed photo **1440×440** (mobile 300), same bottom-left gradient, h1 Schibsted Grotesk 400 3.5rem white at left 90 / bottom 72, the tilted line crossing its foot (2rem), `sp-parallax` `--sp-par: 6%` (mobile 4%). T1 on 9/9 content pages, T2 on 9, T3 on 6, T4 on 5.

---

## 2. Key visual concept

**(1) Reference first screen, story, signature motion.** Yokorei opens on a wide, slightly dark photograph of a **chilled distribution hall**: a green, wet-looking floor runs back under a receding strip of ceiling lights; boxed pallets stand along the left; in the right half an operator in a navy jacket and helmet drives an **orange forklift** carrying a stack of cartons, with orange guard rails and yellow bollards around the dock. Bottom-left, a thin white catch line says, in effect, *"toward a bright future of food"*, and a **bold italic red English line, tilted upward**, crosses its foot. **Story**: *people, goods and the planet are looked after along the cold chain; the company is the quiet expert in the middle.* **Signature motion**: a calm **three-photo crossfade** (4 s hold, 1 s fade) with a **progress ring** filling around the active dot and a **boxed pause button**; when you scroll, the **red band with rounded top corners** rises from the fold and fades into the page, carrying the white business cards whose photos crossfade the same way.

**(2) Our translation: a regional cold store.** The same wide, low-lit, documentary dock field. Slide 1 (K01): at a **refrigerated dock door with its grey inflatable seal**, a **supervisor in a thermal jacket reads a hand-held probe pushed into a carton**, while a **driver waits beside a wrapped pallet** on a hand pallet truck; the insulated door to the room behind them is half open, cold air visible in the light. Slide 2 (K02): the hall view, the counterpart of the reference's photo: a **forklift with an operator carries a wrapped pallet down a dim chilled aisle**, ceiling light strip receding, **amber floor markings** the only warm colour. Slide 3 (K03): the **insulated sliding door of a frozen room**, frost on its frame, a worker stepping in with a clipboard. Bottom-left the catch "A numbered room that holds its cold."; the tilted pale-patina italic line **"Room 7 · −21 °C · held"** crosses its foot, exactly where the reference's red English line runs. Same image type (one low-key documentary photograph per slide, people at work, wide), same composition (subject right-of-centre, catch bottom-left, pager bottom-right), same motion concept (calm crossfade with a ring pager, then a coloured band with a rounded top rising at the fold). Story: **"you are given a numbered room in a band, and we hold it there"**: the supervisor's probe is our version of the reference's forklift, the proof of care in the cold chain.

**(3) KV checklist** (every item is built in the home first screen at 1440×900 and visible without scrolling):
| # | Reference element | Our counterpart | Position (1440×900) | Motion | Image |
|---|---|---|---|---|---|
| 1 | Full-bleed dock photo, receding lit hall, operator with a pallet, 1440×690 | Full-bleed low-key dock photo: supervisor reading a probe at the dock seal, driver waiting with a pallet; then the hall and the room door | x 0–1440, y 104–794 | 3-slide crossfade, 4 s hold / 1 s fade; slide layer also `sp-parallax` `--sp-par: 6%` | **K01**, K02, K03 |
| 2 | Thin catch line + small kicker, bottom-left, white | Kicker "Regional cold storage · Northmere Port" + h1 "A numbered room / that holds its cold." Schibsted Grotesk 400 4.5rem white | left 90, bottom of lockup 96px above hero bottom (y ≈ 520–700) | none (no reveal in hero) | — |
| 3 | Bold italic red English line, tilted ≈−8°, crossing the catch's foot | "Room 7 · −21 °C · held", Schibsted Grotesk 700 italic 2.5rem, #BFD3CF, rotate −7°, overlapping the h1's last-line foot by 14px | starts x ≈ 330, y ≈ 690 | none | — |
| 4 | Dots with SVG progress ring + boxed pause, bottom-right | 3 dots, 33px ring (r 14.5, stroke 4, dasharray 91.11), pause box 38×20 | right 80, bottom 48 (x ≈ 1240–1360, y ≈ 730) | ring fills over 4 s, synced to the crossfade; pause toggles | — |
| 5 | Two-row header (utility row + main nav), logo left | Sticky header 104px: utility row 36px (dock hours · phone, plain text) + main row 68px (wordmark left, one anchor `core/navigation` right, one CTA button "Ask about capacity") | y 0–104 | sticky, no motion | — |
| 6 | Red band with rounded top corners peeking at the fold | Top edge of the room-log strip (T3) at y 854 and, on ≥1000px-tall viewports, the patina band's rounded top (radius 40) | y 854–900 | none | — |
Hero colour stays dark and low in saturation; amber appears only inside the photos (floor markings, jacket piping).

---

## 3. Home page: block order (one long conversion page, anchor menu, one repeated CTA)

Grid (T(c)): container **1200px** (content 1100 for text), side gutter `max(24px, (100vw − 1200px)/2)`. Section spacing from T(c): **140px** between major sections, **80px** inside, **60px** hero → strip, **50px** for small gaps. Mobile 80 / 48 / 32. Body copy ≈ **620 English words**; narrative paragraphs ¶ (≥3 of ≥20 words) in §4 (3), §7, §8, §10.
The repeated CTA is the button **"Ask about capacity"** → `/ask/` (header, §5 card rows link to /rates/, §11 band, footer). It is the only button label used for conversion.

| # | Block (pattern slug, anchor) | Purpose | Layout | Photo(s) | Copy | Motion |
|---|---|---|---|---|---|---|
| 1 | Header (part `header`) | brand + the one menu + CTA | sticky 104px, white, bottom hairline `line`. **Utility row** 36px, right-aligned, Onest 500 .8125rem `muted`, gap 28px: "Dock open Mon–Fri 05:00–21:00 · Sat 06:00–14:00" · "010 377 4120" (tel link) · language switcher (theme's existing mechanism). **Main row** 68px: wordmark left at x 40 (Schibsted Grotesk 700 1.375rem lowercase "koori" + Onest 500 .75rem caps ls .2em "COLD STORES" stacked, ink) · `core/navigation` right: **Rooms · Booking · The day · Rates · Cases** (anchors `/#rooms` `/#booking` `/#day` `/#rates` `/#cases`; Onest 500 1.0625rem ink, gap 30px; hover/current 2px patina underline 6px below) · CTA button (patina, white text, radius 8, padding 12px 22px, Onest 600 .9375rem) "Ask about capacity" | — | 5 links + CTA | none |
| 2 | `hero` (`#top`) | **KV** (§2), T1 | full-bleed crossfade, lockup bottom-left, pager bottom-right | **K01, K02, K03** | kicker 6 words; h1 8 words; tilted line | crossfade; slide layer `sp-parallax` 6% |
| 3 | `log` | proof of holding (T3) | 310 + 1fr strip, 3 rows (§1 T3) | — | ≈25 words | none |
| 4 | `held` (`#why`) | **narrative**: why a numbered room | ref "news" title group (`ref/scroll-yk-1800.png`): giant word **"held"** (ink, giant, column-reverse with sub-label "Why every pallet gets a room number" Onest 700 1.125rem) at the left; content grid 300 / 800 (ref 310 / 890): left column = **4 count facts** stacked with hairlines (Schibsted Grotesk 500 2.75rem tabular ink + Onest .875rem muted label): "12 rooms", "6,400 pallet positions", "10 min between readings", "since 1987"; right column (max 680 text) = **3 ¶** (≈70 + 65 + 60 words, Onest 1.0625rem / 1.85 ink) + link "About Koori →" | — | ≈200 words | facts `sp-count` + `sp-stagger`/`sp-reveal--up`; text `sp-reveal--up` |
| 5 | `rooms` (`#rooms`) | **which bands a room can hold** (T2) | fading band + giant "rooms" + 3 fused cards (§1 T2) | **R1a/R1b, R2a/R2b, R3a/R3b** | sub-label + 3 × (title + 3 rows) ≈ 70 words | cards `sp-stagger` + `sp-reveal--up` (on the card, not its slider) |
| 6 | `dock` | narrative pause + link to booking (T4, **parallax** §7.2) | full-bleed Cover 1440×500, word "the dock", underlined link + circle arrow | **D01** | ≈6 words | Cover `sp-parallax` 10% |
| 7 | `booking` (`#booking`) | **how a booking is confirmed** | giant word **"booking"** (ink) + sub-label "Four steps, one room number"; then a 2-column grid 480 / 640 (gap 80): left **photo Y03** 480×600 (4:5, radius 8) with a 1-line caption under it (Onest .875rem muted); right: intro ¶ ≈40 words, then **one ruled list of 4 rows** (not cards, not a timeline): each row = number "01" (Schibsted Grotesk 700 1.5rem patina, 64px column) · h3 (Schibsted Grotesk 500 1.375rem ink) + 2 sentences (Onest 1rem muted) · time label right (Onest 600 .875rem ink, `nowrap`: "Same day", "Within 1 working day", "Held 48 hours", "At the dock"); 1px `line` top/bottom; padding 28px 0 | **Y03** | ≈170 words | photo `sp-reveal--up`; list `sp-stagger` + rows `sp-reveal--up` |
| 8 | `day` (`#day`) | **one day at the dock** (horizontal strip; row archetype `horizontal-strip`) | heading row: giant word **"the day"** left + ¶ ≈55 words right (max 520, describes the daily routine). Below: a **horizontal scroll-snap strip** (`overflow-x: auto; scroll-snap-type: x mandatory`, container starts at the 1200 grid's left edge and **bleeds off the right viewport edge**, `padding-right: 120px`), 4 cards **360px** wide, gap 24 (3 photo cards + 1 text-only card, see below): photo 360×480 (3:4, radius 8) + time (Schibsted Grotesk 700 1.75rem tabular ink: "05:00", "10:30", "15:00", "20:30") + 2 sentences (Onest 1rem muted). Thin scrollbar styled `line`/patina; a hint "Scroll sideways" with a 16px arrow at the right of the heading row (Onest .875rem muted) | **Y01, Y02, Y05** (+1 text-only card) | ≈55 + 4 × 30 = 175 words | the **strip container** `sp-reveal--up` (children never get reveal) |
| 9 | `rates` (`#rates`) | **bands and rates** (price table) | giant word **"rates"** + sub-label "Per pallet, per week, before VAT"; **price table** full width of the 1200 container: columns *Service* (Onest 600 1.0625rem ink) · *Band / note* (Onest 1rem muted) · *Price* (Onest 600 1.125rem tabular-nums ink, `nowrap`, right). 7 rows (§9), row 64px, 1px `line` rules, header row Onest 600 .8125rem caps ls .1em muted on `fill`. Note line under it: "Minimum booking 4 weeks or 10 pallets. Invoiced monthly." + text link "All rates and terms →" (`/rates/`) | — | ≈40 words | **none** (price table) |
| 10 | `cases` (`#cases`) | proof: 3 short stories | ref sustainability cards (`ref/scroll-yk-3600.png`): giant word **"cases"** + ¶ ≈35 words; **3 photo cards** 384×300 (gap 24, radius 8, `overflow: clip`) with a bottom gradient `linear-gradient(180deg, rgba(14,22,21,0) 40%, rgba(14,22,21,.78) 100%)`; inside bottom-left (padding 24): label "Case 01" (Onest 500 .875rem white .85) + title (Schibsted Grotesk 700 1.375rem white) + 20px white arrow; whole card links to `/cases/#case-1..3`. Under the row, one ¶ ≈45 words (case 1 told briefly) | **S01, S02, S03** | ≈90 words | cards `sp-stagger` + `sp-reveal--up` |
| 11 | `enquiry` (`#enquiry`) | **the single capacity enquiry** | ref recruit band (`ref/scroll-yk-3600.png` bottom): a 1200×400 block, radius 8, `overflow: clip`: **left 470px solid patina** (padding 56): Schibsted Grotesk 400 2.75rem / 1.15 white "Tell us the band, the pallets and the weeks." + Onest 1rem white .9 ¶ ≈35 words ("We reply within one working day with a room number…") + button **"Ask about capacity"** (white ground, ink text, radius 8) + phone line "or call 010 377 4120, Mon–Fri 08:00–17:00" (Onest .875rem white .85). **Right 730px photo E01** flush, `object-position: 60% 40%`; the patina block's right edge meets the photo with **no gap** (ref red block + photo). 60px circle arrow (white disc, patina arrow) at the photo's bottom-right (right 32, bottom 32) linking to `/ask/` | **E01** | ≈50 words | none on the CTA text; block `sp-reveal--up` |
| 12 | `alerts` | **Room alerts** waitlist (newsletter, §11) | `fill` panel 1200 wide, radius 8, padding 48px 56px, grid 1fr / 460: left label "room alerts" (Schibsted Grotesk 700 2rem lowercase) + 1 sentence ≈28 words ("When a room in your band frees up, we send one short email…"); right: newsletter `shippress_form_slot` | — | ≈30 words | **none** (form) |
| 13 | Footer (part `footer`) | address, hours, links | ref footer (`ref/scroll-yk-4500.png`): ground `footer` #4A5553, white text; 4 columns in the 1200 grid, gap 50; each column starts with a **heading row** between two 1px `rgba(255,255,255,.55)` hairlines (Onest 600 1.0625rem white, 20px arrow right, 58px tall) followed by plain paragraph links (Onest 400 .9375rem white .9, 33px pitch): **Storage** (Rooms & bands · Rates · Cases) · **Booking** (How booking works · The dock · Ask about capacity) · **Company** (About · Journal · Room alerts) · **Visit** (address, dock hours, office hours, phone, email). Bottom row: wordmark (white), "Privacy · Terms" links, © line Onest .8125rem. Links are paragraphs, **not** a second navigation | — | — | none |

**Day strip cards (§8)**, in order: **Y01 05:00** "The first truck backs onto door 3; the seal inflates before the doors open." · **Y02 10:30** "Henrik checks the plant: compressors, condensers, the frost on the pipes." · **text-only card 15:00** on `fill` (360×480, radius 8, same time style + 2 sentences): "Lucía calls back every enquiry that came in before noon, with a room number." · **Y05 20:30** "Dev walks every room with a torch and signs the night log."

**Home photo positions: 18, all distinct files** (authoritative): K01, K02, K03 (hero) · R1a, R1b, R2a, R2b, R3a, R3b (cards) · D01 (dock band) · Y03 (booking) · Y01, Y02, Y05 (day strip) · S01, S02, S03 (cases) · E01 (enquiry). ≥8 required ✔.

Anchor order in the menu equals the page order: #rooms (5) · #booking (7) · #day (8) · #rates (9) · #cases (10). `scroll-margin-top: 120px` on all anchored sections (sticky header 104).

### First-screen composition
- **Desktop 1440×900**: header y 0–104. Hero y 104–794 (`height: clamp(520px, calc(100svh - 210px), 690px)`). Slides `object-position`: K01 `62% 50%` (supervisor and probe right of centre, driver and pallet at the far right, dock seal framing the right third, the bottom-left dark floor carries the catch); K02 `58% 55%`; K03 `65% 45%`. Lockup group (`kc-hero__lockup`, Cover inner container aligned bottom-left, `padding: 0 0 96px 90px`, max-width 760): kicker → h1 (2 lines, forced break) → tilted line (in flow, negative margin to overlap the foot). Pager group bottom-right (in the same Cover inner container as a sibling flex item aligned `flex-end`; not absolutely positioned over text). Hero → strip gap 60px, the strip's top border visible at y 854.
- **No text may overlap the pager**, and the tilted line must not touch the pager at 1024, 1280, 1440, 1920 (pager is ≥120px right of the lockup's max-width).
- **1024–1279**: same; lockup left 48, h1 clamp → 3.75rem, tilted line 2rem.
- **782–1023**: hero 560px tall; lockup left 40 bottom 64; h1 3.25rem; tilted line 1.75rem rotate −6°; pager right 32 bottom 32.
- **Mobile 390×844**: header 64px (utility row hidden; wordmark left; the navigation overlay toggle and a compact CTA "Ask" button right). Hero **min(560px, 100svh − 64px)** tall, full-bleed, slides `object-position: 70% 50%` (supervisor visible right of centre). Lockup in normal flow at the bottom (padding 0 20px 84px): kicker .875rem, **h1 2.5rem / 1.1** (3 lines max), tilted line **1.375rem, rotate(−4deg), `display:block`, margin 14px 0 0 0** (no negative overlap on mobile, so rotated boxes never intersect the h1), pager below the lockup, right-aligned, 20px from the bottom (in flow). **No vertical writing, no absolutely positioned labels, no text over text.** `scrollWidth == innerWidth`.

### Comparison with recent themes' home orders (must not match)
| Theme | Home order | Koori difference |
|---|---|---|
| Noka Cheese | header, hero, statement, six-style mosaic, parallax counter band, 3 steps, monger note, reserve + prices, journal, letter, arch band | no mosaic, no arch; hero is a **crossfading** full-bleed with ring pager; steps are one ruled list beside a photo; counters sit in a left column of the narrative, not in a band; cards are text+photo fused on a fading band |
| Akane House | transparent header, full-bleed hero with info bar, narrative, four sittings, daily steps, letterbox band, menu, people, visit, reservation band, letter, journal | opaque two-row header; no info bar (a 310-label **log strip** instead); no letterbox; the day is a **horizontal scroll strip**; no people block on home |
| Hatoba College | centred nav, framed hero, intro, five stage bars, berth date block, quay band, a day on the quay, fees ledger, story, journal, dark newsletter | split nav; unframed full-bleed hero; no stage bars or date block; the day is sideways cards, not a vertical "day" section; newsletter on a pale fill panel; no journal on home |
| Hisagi Neurology | sticky header, stadium window, lead, symptoms, principles, room band, one case, fees, visit pill, journal, letter | no round shapes (no stadium, discs, capsules); rectangular radius-8 cards fused with photos; giant lowercase words as section titles; a patina band that fades into the page |
| **Koori Cold Stores** | two-row header / crossfade dock hero with ring pager + tilted line / room-log strip / "held" narrative with count facts / fading band "rooms" with 3 fused cards / parallax "the dock" band / "booking" ruled list + photo / "the day" sideways strip / "rates" table / "cases" gradient photo cards / patina+photo enquiry block / room-alerts panel / grey four-column footer | the only one built on giant lowercase section words, a fading band, fused text+slider cards and a sideways day strip |

---

## 4. Inner pages (11 pages + Journal + 3 posts)

Slugs identical in all five locales. Every content page: T1 page head (§1), body on the 1200 grid, giant lowercase word as the first section title, enquiry band (T4 variant) before the footer unless noted. Header menu anchors point to `/#…` so they work from inner pages; inner pages are reached from the footer and in-page links.
| Page (slug) | Role | Key content |
|---|---|---|
| About (`about`) | about | founded **1987** by Jonas Ekdahl with two rooms on Quay 3; rebuilt 2009 (rooms 6–12, ammonia/CO₂ plant); since 2016 run by **Marit Ekdahl**; why rooms are numbered (≈120 words); "A day at Koori" ¶ describing the **daily routine** (05:00 dock opens, 06:00 first log review, 10:30 plant check, before 12:00 enquiries answered, 20:30 night lead walks every room, readings every 10 minutes around the clock); **people register** (T3 grid, 7 rows, §9); fused history card (3 hairline rows: 1987 · 2009 · 2016) |
| Rooms & bands (`rooms`) | services | 3 band sections `#chilled` `#frozen` `#deep-frozen` as full fused cards (text panel: range, rooms, positions, what it suits, what it does not suit, door, rate from; photo slider); **room register** (12 rows: Room 1–12 · band · positions · dock door); a note on **blast freezing** (Room 10 tunnel, to −18 °C core, about 18 hours per pallet) |
| How booking works (`booking`) | process | the **4 steps** (§9) in one fused card; what we ask for (band, pallet count, pallet type, weeks, first delivery date, goods description); what the offer contains (room number, positions, start date, rate, held 48 hours); `#log`: how a room is logged (probe at the dock seal on arrival, readings every 10 minutes, weekly PDF + CSV log, a call within 15 minutes if a room leaves its band) with the sample log strip |
| Rates (`rates`) | prices | full **price table, 7 items** (§9) in a white card on the band, full width; **terms strip** (minimum 4 weeks or 10 pallets; 2 weeks' notice to release a room; invoiced monthly, 30 days; goods insured by the owner, our liability cover described plainly without figures beyond §9) |
| The dock (`dock`) | location / visit | address, how to arrive (ring road exit 4, Quay 3 gate), **8 dock doors** with seals, slot booking (30-minute slots, booked at confirmation), driver rules (engine off, chocks, hi-vis, wait in the drivers' room), **dock hours strip** (Mon–Fri 05:00–21:00 · Sat 06:00–14:00 · Sun closed · after-hours slot by arrangement, see rates) + office hours; hours list stacks on mobile |
| Cases (`cases`) | proof | the **3 cases** (§9) as fused cards (`#case-1..3`): situation ¶, room offered, what happened, ≈150 words each; note "Customer names are fictional examples." |
| Ask about capacity (`ask`) | contact (enquiry) | **form slot** (§11) in a white card on the band; what to send strip (5 rows); phone + office hours; reply within 1 working day; no enquiry band at the bottom |
| Room alerts (`room-alerts`) | newsletter (waitlist) | standalone page: what an alert is (one email when a room in your band frees up, at most twice a month, nothing else); 3 hairline rows (Chilled / Frozen / Deep frozen alerts: "mention your band in the email"); **newsletter form slot** (§11) on the **ink** dark panel |
| Thanks (`thanks`) | post-signup | short page: "Thank you. If you sent the email, we will add you to the list for your band." + link back to `/#rooms`; head without slider (pale) |
| Privacy (`privacy`) | legal | plain privacy text (what we keep: name, company, email, phone; why; how long: 24 months after the last booking); no reveal |
| Terms (`terms`) | legal | storage terms summary (minimums, notice, temperature bands, liability approach, governing law "the laws of the country where Koori operates"); no reveal |
| Journal (`journal`) | posts page (role `posts`, empty content) | archive: posts as fused cards on the band |
| Posts (3) | article | "Why we log every room every 10 minutes" (featured R2b; category **Operations** `operations`; tags `temperature-log`, `rooms`) · "What a 48-hour room offer means" (featured Y03; category **Booking** `booking`; tags `capacity`, `booking`) · "Room 12 is back in the deep-frozen band" (launch note; featured R3a; category **Updates** `updates`; tags `deep-frozen`, `rooms`) |

theme-meta `pages` / demo `screens`: home → `/`, about → `/about/`, news → `/journal/`, article → first post, category → `/category/operations/`, tag → `/tag/rooms/`, newsletter → `/room-alerts/`, contact → `/ask/`.
Top menu (the one `core/navigation`): Rooms · Booking · The day · Rates · Cases (anchors) + CTA button (not a nav item). Footer: paragraph links only.
Templates: `front-page`, `page`, `page-ask` (or page), `page-room-alerts` (or page), `single`, `archive`, `category`, `tag` (archive copy, label "TAG"), `home`, `404`, `search`.

---

## 5. Colour (T(a): brand colour band + greige ground + white cards + near-black text; brand colour ~12–15%)

The reference **red #C51D23** becomes the row's **patina #5A7572** (plan palette, patina family; a red cold store would also clash with the quiet-palette note). Every relationship stays: one brand colour carried by the band, CTAs and circle arrows; a pale near-neutral ground; white cards; near-black text; one warm accent that lives mostly inside photos (ref orange forklift → our amber floor markings and the amber log tick).
| Token (theme.json slug) | Hex | Share | Source / reason |
|---|---|---|---|
| `patina` | **#5A7572** | ~12% site, ~3% first screen | T(a) main #C51D23 → row hex; white text on it 4.9:1 |
| `patina-deep` | **#46605D** | hover, pressed | patina −8% L (ref light/dark red pair #E30008 / #C51D23) |
| `patina-pale` | **#BFD3CF** | tilted line on photos, dark-form accents | patina +45% L |
| `ground` | **#F3F5F4** | ~45% | T(a) #F7F6F5 greige → cool by the same L (−1.5%); not cream |
| `white` | **#FFFFFF** | ~25% (cards, header, table) | T(a) #FFFFFF |
| `ink` | **#1E2A29** | text, headings | T(a) #222222 with a patina cast; 14.9:1 on white |
| `muted` | **#56625F** | secondary text | T(a) small text grey; 6.3:1 on white, 5.9:1 on ground |
| `line` | **#D5DDDB** | hairlines, table rules | T(a) #DDDDDD, cool |
| `fill` | **#E6ECEA** | label cells, panels, table header | T(a) #EDEDED, cool |
| `secondary` | **#DCE5E3** | page head without photo, hover rows | stage-a secondary pale |
| `amber` | **#D98A2B** | log ticks, focus underline on dark only; ≤2% | stage-a accent; stands in for the ref's orange (which lives in photos) |
| `footer` | **#4A5553** | footer ground | ref footer warm grey #7D7877 → cool and −20% L so .9375rem white links reach 7.9:1 (ref's white on mid-grey is below AA; reason: contrast) |
| `photo-shade` | **rgba(14,22,21,…)** | hero / band / card gradients | ink at alpha |
| `error` | **#B3412F** | form errors | 5.6:1 on white |
| `success` | **#2F6B4F** | form success | 6.2:1 on white |
**Site ratio**: ground 45 · white 25 · dark photo fields 15 · patina 12 · fill/line 2 · amber ≤1.
**First-screen saturated share** (scripts/check-first-screen.py): **target ≤6%, hard cap 15%** (row note allows 30%; ref measured 17.8%). The hero photos are low-key with a cool green-grey grade; amber only as thin floor lines and jacket piping. If K01 scores above 6%, regenerate it with less amber, do not change the palette.

---

## 6. Typography (sans)

Fonts load **only via theme.json `fontFamilies` + `fontFace`** (woff2 in `assets/fonts/`, OFL, every file listed in theme-meta `fonts[].files` with `licenseFile`, family names in readme.txt), so the editor iframe and the front end render the same faces. style.css has `:lang(` rules → copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it.
- `schibsted-grotesk`: Schibsted Grotesk variable 400–900, normal + italic (italic only for the tilted line; Latin + Latin-ext).
- `onest`: Onest variable 300–700 (Latin, Latin-ext, Cyrillic not needed).
- `noto-sans-tc`: Noto Sans TC 500 (headings only; zh-TW subset of every zh-TW demo string + punctuation; Hokuto/Hada substitute subsetting method).
- `noto-sans-jp`: Noto Sans JP 500 (headings only; ja subset, same method).
Stacks:
- Latin headings: `"Schibsted Grotesk", "Helvetica Neue", Arial, sans-serif`
- Latin body: `"Onest", "Helvetica Neue", Arial, sans-serif`
- `:root:lang(zh-TW)` headings: `"Schibsted Grotesk", "Noto Sans TC", "PingFang TC", "Microsoft JhengHei", sans-serif`; body: `"Onest", "PingFang TC", "Microsoft JhengHei", "Heiti TC", sans-serif` (no bundled TC/JP in body, repo contract).
- `:root:lang(ja)` headings: `"Schibsted Grotesk", "Noto Sans JP", "Hiragino Sans", "Yu Gothic", sans-serif`; body: `"Onest", "Hiragino Sans", "Hiragino Kaku Gothic ProN", "Yu Gothic", Meiryo, sans-serif`.
- CJK: headings ×0.75 (h1 3.375rem), body lh 1.85, ls .04em; the **giant lowercase section words stay Latin in every locale** (as the reference keeps "business", "news" in Latin with a local sub-label); only the sub-labels are localised. fr/de: `hyphens: auto` on body/h2/h3; giant words and labels `hyphens: none`.
| Role | Font / weight | Size (desktop → mobile) | Line-height | Tracking | Source |
|---|---|---|---|---|---|
| giant section word | Schibsted Grotesk 700 lowercase | **7.5rem** (`giant` = `clamp(4.25rem, 1.75rem + 6.4vw, 7.5rem)`) → 4.25rem | 1 | −.03em | T(b) 96–120px, lh 1, −.02em |
| h1 home | Schibsted Grotesk 400 | **4.5rem** (`xx-large` clamp(2.5rem, 1.2rem + 3.6vw, 4.5rem)) → 2.5rem | 1.08 | −.015em | ref catch ~70px, thin |
| tilted line | Schibsted Grotesk 700 italic | 2.5rem → 1.375rem | 1 | 0 | T(f) italic line |
| h1 inner | Schibsted Grotesk 400 | 3.5rem → 2.25rem | 1.1 | −.01em | |
| h2 / card title | Schibsted Grotesk 700 | 2.25rem → 1.625rem | 1.25 | −.005em | ref card title ~36px bold |
| h3 | Schibsted Grotesk 500 | 1.375rem → 1.25rem | 1.4 | 0 | T(b) H3 18.7px scaled |
| sub-label | Onest 700 | 1.125rem → 1rem | 1.5 | .02em | ref JP sub-label bold 18px, gap 8 |
| body | Onest 400 | 1.0625rem (17px) → 1rem | 1.7 (28.9px) | 0 | T(b) 17px / 28.9px exactly |
| link rows | Onest 500 | 1.125rem → 1rem | 1.5 | 0 | T(b) links 16px; ref card rows ~18px |
| nav | Onest 500 | 1.0625rem | 1 | 0 | ref nav 17px |
| small / meta | Onest 500 | .8125rem–.875rem | 1.6 | .02em | |
| count fact | Schibsted Grotesk 500 tabular | 2.75rem → 2rem | 1 | −.01em | |
| price | Onest 600 tabular-nums | 1.125rem | 1.5 | 0 | |
theme.json fontSizes: `small` .875rem, `medium` 1.0625rem, `large` 1.375rem, `x-large` 2.25rem, `xx-large` clamp → 4.5rem, `giant` clamp → **7.5rem** (largest ≥4.25rem ✔).

---

## 7. Motion and scroll (sp-scroll)

Copy `pipeline/assets/sp-scroll/` unchanged to `assets/`; JS in the head (not deferred), CSS also as editor style. Only `sp-*` classes; no scroll listeners, no GSAP/AOS/Lenis/jQuery. The reference has **no scroll-triggered effects** (Splide fade only, T(g)); its timing language (4000 / 1000 ms crossfade, 0.2 s colour, 0.4 s image hover) sets our durations. **Three scroll effects** on the home page, plus the non-scroll hero/card crossfade.

### 7.1 Chosen effects (from stage-a "Scroll effect candidates")
| Effect | sp-* | Where | Source trigger / time / easing | Ours |
|---|---|---|---|---|
| Parallax | `sp-parallax` | hero slide layer, home §6 dock band, every inner page head | ours (stage-a: dock band parallax, scroll-driven, linear) | §7.2 |
| Cards / blocks rise | `sp-reveal sp-reveal--up` + `sp-stagger` | §4 facts + text, §5 the 3 cards, §7 photo + list rows, §8 strip container, §10 photo cards, §11 block; inner: fused cards, register rows (not tables) | stage-a: IO, 600 ms, stagger 120 ms, `cubic-bezier(.2,.6,.2,1)` | `--sp-dist: 24px`, `--sp-dur: .6s`, `--sp-ease: cubic-bezier(.2,.6,.2,1)`, stagger .12s (default) |
| Counting facts | `sp-count` | §4 the four facts ("12", "6,400", "10", "1987"); About people count; Rooms "12 rooms" | stage-a: IO, 1200 ms, ease-out | sp-count default 1.2 s easeOutCubic; "since 1987" counts (comma-free year is fine) |
**Never** on: the hero (no reveal; parallax only), the log strip, price tables, hours/terms strips, forms and their wrappers, legal pages. Children of the horizontal day strip never get `sp-reveal` (only the strip container).
Crossfades (hero, card sliders, Rooms page head): CSS keyframes as §1 T1; hover on cards/arrows: `transition: background-color .2s ease, color .2s ease, transform .2s ease` (T(g)); card photo `transform: scale(1.04)` on card hover, `.4s ease` (T(g) image scale 0.4 s), with `transition-delay: 0s` (spec §4.3).

### 7.2 Parallax (required)
| Where | Block / structure | Moving layer | Foreground (static) | `--sp-par` desktop / mobile | Reference motion |
|---|---|---|---|---|---|
| **Dock band** (home §6, primary, acceptance target) | Cover `kc-dockband sp-parallax`, 500px (mobile 380px) | `.wp-block-cover__image-background` **D01** (scale 1.18 built in) | giant word + link + circle arrow in the Cover inner container | **10% / 6%** | Yokorei photo bands are static; the slow drift translates their calm, wide photo bands into motion (stage-a) |
| **Hero** | Group `kc-hero sp-parallax` (`overflow: clip`) | `.sp-parallax__layer` = the slides wrapper holding K01–K03 | lockup + pager are siblings outside the layer | **6% / 4%** | the crossfade keeps running inside the drifting layer |
| **Inner page heads** | Group `kc-head sp-parallax` | `figure > img` (or the Rooms slider layer) | h1 + tilted line sibling | **6% / 4%** | |
Mobile keeps parallax at the smaller speeds. Reduced motion, `?sp-static`, no JS and the editor: no movement and no scale. Acceptance: `check-parallax.mjs` desktop + mobile, displacement difference ≥6px, ≤1px under reduced motion; ≥3 reveals hidden before entering and final after; nothing transparent after scrolling to the bottom.

---

## 8. Responsive rules (hard)

- **390px first screen**: no vertical writing, no absolutely positioned labels or text over text; lockup and pager in normal flow (§3); header 64px; `scrollWidth == innerWidth`.
- **Fused cards < 1024px**: photo on top (100% × 300px, radius 8 8 0 0), text panel below (padding 28px 24px), circle arrow 48px, link rows indent 0; the band stays 520px tall behind the first card. < 600px the giant word is 4.25rem.
- **Log / register / hours / terms strips < 782px**: the 310 label cell becomes a full-width top row (padding 20px 24px); list rows stack: line 1 = room (left) + reading (right, `nowrap`), line 2 = time + status (muted). No horizontal scrolling.
- **Price table ≥782px**: the table spans the **full width of its container** (`width: 100%; table-layout: auto`); the price column `white-space: nowrap; text-align: right; width: 1%; padding-right: 24px` and is **never clipped** at 800 and 1280; no `overflow: hidden` on any table wrapper.
- **Any table < 782px** (rates, register if built as a table): stacked; each row a block: service name (Onest 600) and price right on line 1 (flex, `nowrap` price), band/note below, 1px hairline between rows.
- **Day strip**: mobile cards 78vw (max 300), photo 3:4, strip bleeds 20px gutter; the strip itself scrolls, the page never does. ≥1440: the strip still starts at the 1200 grid edge.
- **Booking §7**: < 1024 photo above the list (100%, 4:3), list rows keep the time label under the h3 instead of at the right.
- **Cases cards**: 3 → 1 column below 782 (full width, 4:3); **Enquiry block**: below 1024 the patina block stacks above the photo (photo 100% × 260px), circle arrow stays on the photo.
- **Footer**: 4 → 2 → 1 columns (1024 / 600).
- Touch targets ≥44px (pause button gets a 44×44 hit area via padding on mobile); CJK horizontal only.

---

## 9. Fixed facts (identical on every page and in all five locales; brand.md is the source)

- **Name**: Koori Cold Stores. **Founded** 1987 by Jonas Ekdahl (two rooms on Quay 3). **Rebuilt** 2009 (rooms 6–12). **Run since 2016** by Marit Ekdahl. **Address**: Quay 3, 18 Saltmarsh Road, Northmere Port (fictional). Ring road exit 4. **Phone** 010 377 4120. **Email** ask@koori-coldstore.example (every mailto uses this).
- **Capacity**: **12 numbered rooms, 6,400 pallet positions, 8 dock doors with seals.** Readings every **10 minutes**, 24 hours a day. If a room leaves its band, the customer gets a call **within 15 minutes**. Weekly log as PDF + CSV.
- **Bands (3)**:
  - **Chilled +2 to +4 °C** · Rooms 1–5 · 2,600 positions · suits dairy, fresh produce, chilled ready meals · not for: bananas and tropical fruit (we do not run a ripening band).
  - **Frozen −18 to −21 °C** · Rooms 6–10 · 2,900 positions · suits frozen vegetables, bakery dough, ready meals · Room 10 includes the **blast-freezing tunnel** (to −18 °C core, about 18 hours per pallet).
  - **Deep frozen −25 to −28 °C** · Rooms 11–12 · 900 positions · suits fish, seafood, ice cream.
- **Hours**: Dock Mon–Fri 05:00–21:00 · Sat 06:00–14:00 · Sun and public holidays closed (after-hours slot by arrangement). Office (enquiries, phone) Mon–Fri 08:00–17:00. Enquiries answered **within 1 working day**; room offers **held 48 hours**.
- **Rates (7 items, per pallet, before VAT)**:
  1. Chilled storage, +2 to +4 °C, per week **€9.40**
  2. Frozen storage, −18 to −21 °C, per week **€11.20**
  3. Deep-frozen storage, −25 to −28 °C, per week **€13.80**
  4. Handling in (unload, probe at the seal, put away) **€6.50**
  5. Handling out (pick, load, probe at the seal) **€6.50**
  6. Blast freezing to −18 °C core (Room 10 tunnel) **€38.00**
  7. After-hours dock slot (per slot, 30 min) **€45.00**
  Minimum booking **4 weeks or 10 pallets**; **2 weeks' notice** to release a room; invoiced monthly, payment 30 days. Temperature log (weekly PDF + CSV) included. Home §9 shows all 7; card row C shows items 1–3 as "From €… per pallet per week".
- **How a booking is confirmed (4 steps)**: 01 **Ask** (form or phone; band, pallets, weeks, first delivery) · **same day** acknowledgement · 02 **Room offer** within **1 working day**: room number, positions, start date, rate · 03 **Confirm**: offer **held 48 hours**; sign the storage order, book the first 30-minute dock slot · 04 **First pallet in**: probe reading at the dock seal, logged with the room number; readings every 10 minutes from then on.
- **People (7)**: Marit Ekdahl, managing director (since 2016) · Samuel Okafor, dock supervisor (the probe at the seal) · Lucía Ferraz, capacity planner (answers every enquiry) · Henrik Valo, refrigeration engineer · Aiyana Brooks, temperature records and quality · Dev Raman, night shift lead · Clara Weiss, customer accounts. (Founder Jonas Ekdahl appears only in the history.)
- **Cases (3; customer names fictional)**:
  1. **"A winter of cheese"**: Brindle Creamery, 120 pallets of wheels at +3 °C for 10 weeks while its own store was refitted; Room 2; two deliveries a week.
  2. **"A short quota season"**: Skerrin Fish Co-operative, 60 pallets blast-frozen then held at −26 °C in Room 11 for 14 weeks.
  3. **"Dough on a weekly turn"**: Ovenfield Bakeries, 40 pallets a week in and out of Room 8 at −20 °C, on a standing Tuesday slot.
- **Daily routine** (brand.md "a day"): 05:00 dock opens · 06:00 log review of all 12 rooms · 10:30 plant check · enquiries answered before 12:00 for the morning, by 17:00 for the afternoon · 20:30 night lead walks every room · readings every 10 minutes all day.
- **Room alerts** (newsletter / waitlist): one short email when a room in your band frees up; at most twice a month.
- **Tone**: plain, exact, calm; numbers instead of adjectives; never promises results or absolute temperatures beyond the stated bands.

---

## 10. Images (18 photographs, low-key real photography, one STYLE; all 18 on home)

**STYLE** (identical for every image):
`IMAGE_STYLE="low-key documentary photograph, dim cold industrial light, cool green-grey colour grading, deep shadows with soft highlights, condensation and faint frost, workers in modern thermal jackets and hi-vis vests, amber accents only in floor markings and jacket piping, diverse adults, modern international cold storage warehouse and loading dock, 35mm lens, natural grain, calm and unposed, no text, no letters, no numbers, no logos, no brand names, no signage, no labels on boxes"`
Generate one at a time with `IMAGE_STYLE="<STYLE>" scripts/grok-image.sh out.webp "<subject>"`, Read-check every image, regenerate any with text, numbers, logos, broken faces/hands or a different look. ≤300 KB, ≤2000px, webp. No cut-outs. Cartons are plain; doors and racks carry **no painted numbers** (room numbers are our typography, never inside the photo).
| # | File | Subject (prompt core) | Ratio / size | Used on (page · block) | Home |
|---|---|---|---|---|---|
| K01 | `hero-probe.webp` | at a refrigerated loading dock door with a grey inflatable dock seal, a dock supervisor (Black man, 40s, thermal jacket) pushes a hand-held probe thermometer into a plain carton on a wrapped pallet while a truck driver (woman, 30s, hi-vis vest) waits beside a hand pallet truck; insulated door half open behind, cold mist; subjects right of centre, dark empty floor bottom-left | 2.09:1, 2000×956 | Home hero slide 1 (KV) · Dock "Dock rules" card | ✔ |
| K02 | `hero-aisle.webp` | a forklift with an operator carries a wrapped pallet down a dim chilled aisle between tall pallet racks, ceiling light strip receding, amber floor lines | 2.09:1, 2000×956 | Home hero slide 2 · About history slider slide 1 | ✔ |
| K03 | `hero-door.webp` | the insulated sliding door of a frozen room, frost on the frame, a worker in a freezer suit stepping in with a clipboard, cold vapour | 2.09:1, 2000×956 | Home hero slide 3 · Booking head | ✔ |
| R1a | `chill-aisle.webp` | a chilled room aisle with plain crates of fresh produce and dairy on pallets, light condensation, cool light | 1.55:1, 1600×1030 | Home chilled card slide 1 · Rooms head slide 1 | ✔ |
| R1b | `chill-check.webp` | gloved hands lifting the lid of a plain produce crate, a probe thermometer in the other hand | 1.55:1, 1600×1030 | Home chilled card slide 2 · Rooms chilled card | ✔ |
| R2a | `frozen-racks.webp` | frost-rimed pallet racking in a frozen room, a worker in a freezer suit scanning a pallet with a handheld scanner | 1.55:1, 1600×1030 | Home frozen card slide 1 · Rooms head slide 2 | ✔ |
| R2b | `frozen-pallets.webp` | stretch-wrapped pallets with a thin coat of frost, blue-green dim light, close view | 1.55:1, 1600×1030 | Home frozen card slide 2 · Room alerts head · post 1 · Rooms frozen card | ✔ |
| R3a | `deep-boxes.webp` | plain white fish boxes stacked on pallets in a deep-frozen room, heavy frost on the boxes and the ceiling | 1.55:1, 1600×1030 | Home deep-frozen card slide 1 · Rooms deep card · Cases case 2 · post 3 | ✔ |
| R3b | `deep-logger.webp` | a gloved hand holding a small temperature data logger against frosted cartons, shallow focus | 1.55:1, 1600×1030 | Home deep-frozen card slide 2 · Rates head | ✔ |
| D01 | `dock-night.webp` | a row of loading dock doors at night from the yard, trucks backed onto the seals, sodium-warm light spilling from two doors, wet asphalt | 2.9:1, 2000×690 | Home dock parallax band · Dock head | ✔ |
| Y01 | `day-dawn.webp` | dawn, the first refrigerated truck reversing onto a dock seal, a marshaller with a hand signal, blue morning light | 3:4, 1200×1600 | Home day strip 05:00 · Dock "Arriving" card | ✔ |
| Y02 | `day-plant.webp` | a refrigeration engineer (man, 50s) checking gauges on compressors in a plant room, pipes with frost | 3:4, 1200×1600 | Home day strip 10:30 · About history slider slide 2 | ✔ |
| Y03 | `planner-board.webp` | a capacity planner (woman, Latina, 30s) at a desk beside a wall board of blank coloured magnets in a grid, phone headset, window light at dusk (board has no writing) | 4:5, 1280×1600 | Home booking photo · Booking card photo · post 2 | ✔ |
| Y05 | `day-night.webp` | a night shift lead (South Asian man, 40s) walking a frozen aisle with a torch, breath visible | 3:4, 1200×1600 | Home day strip 20:30 · About head | ✔ |
| S01 | `case-cheese.webp` | plain cheese wheels in open cartons on a pallet in a chilled room, a worker counting them | 1.3:1, 1600×1230 | Home case 1 · Cases case 1 | ✔ |
| S02 | `case-fish.webp` | pallets of plain fish boxes entering a blast-freezing tunnel, strip curtain, frost | 1.3:1, 1600×1230 | Home case 2 · Cases head | ✔ |
| S03 | `case-dough.webp` | a forklift lowering a pallet of plain cartons onto a dock leveller, bakery delivery, steam of cold air | 1.3:1, 1600×1230 | Home case 3 · Cases case 3 | ✔ |
| E01 | `enquiry.webp` | over-the-shoulder view of the planner at a desk in a quiet office above the dock, a window onto the loading yard, phone in hand, laptop closed | 1.8:1, 1800×1000 | Home enquiry block · Ask head | ✔ |
**18 files, all 18 on the home page.** Inner pages reuse them (never twice on one page).
Per-page check: **Home** the 18 above · **About** Y05 (head), K02 + Y02 (history slider) · **Rooms** R1a → R2a (head slider), R1b / R2b / R3a (band cards) · **Booking** K03 (head), Y03 (card) · **Rates** R3b (head) · **Dock** D01 (head), Y01 ("Arriving" card), K01 ("Dock rules" card) · **Cases** S02 (head), S01 / R3a / S03 (cases 1–3) · **Ask** E01 (head) · **Room alerts** R2b (head) · **Thanks, Privacy, Terms** no photo (pale head) · **posts** post 1 R2b, post 2 Y03, post 3 R3a.

---

## 11. Forms (form contract v1: `steps/form-contract-v1` exists)

Copy `pipeline/assets/forms/shippress-forms.php` unchanged to `inc/`, its CSS and editor JS unchanged to `assets/`; `require` in functions.php. Patterns stay literal block markup with a small PHP island for `shippress_form_slot`. **No form in the home first screen; no `sp-reveal` on any form or its wrapper.**
- **Ask about capacity (`ask`, contact / enquiry)**: inside the white card on the band (1200 → card 840 wide centred, radius 8, padding 48px 56px): intro ¶, then `shippress_form_slot( kind: contact )`. Fallback = buffered literal mailto button **"Email the planner"** (`wp-element-button`, patina, href `mailto:ask@koori-coldstore.example?subject=<forms_contact_subject>`) + note "Opens your email app. Tell us the band, the number of pallets, the weeks and the first delivery date." Never links to `/ask/`. Recommended CF7 fields (documented in readme, not created by the theme): company*, name*, email*, phone, band (select: Chilled +2 to +4 °C / Frozen −18 to −21 °C / Deep frozen −25 to −28 °C)*, pallets (number)*, weeks (number)*, first delivery date (date), goods (textarea)*, consent checkbox* ("Koori may contact me about this enquiry"), submit "Ask about capacity".
- **Room alerts (`room-alerts`, newsletter / waitlist)**: standalone page; the form card sits on the **ink** dark panel (`#1E2A29`, radius 8, padding 56px 64px, text `#F3F5F4`): `shippress_form_slot( kind: newsletter, email: ask@koori-coldstore.example, label: forms_email, submit: forms_subscribe, notice: forms_mail_notice, subject: forms_mail_subject )`.
- **Home §12 `alerts`**: the same newsletter slot on the `fill` light panel. The footer has a link to Room alerts only (no second slot).
- **Thanks** page is linked from the notice text area of the pages only as a plain link ("After sending, see what happens next"), never as a redirect.
- Plugin order (shared helper): newsletter MailPoet (explicit id) → MC4WP; CF7/WPForms only via an explicit dedicated id. Contact CF7 → WPForms. Without plugins the newsletter still shows a required `type=email` field + submit using a native mailto POST and the notice.
- **Tokens** (style.css, mapped to theme.json presets):
  - light (default): `--sp-form-accent: var(--wp--preset--color--patina)`; `--sp-form-on-accent: #FFFFFF`; `--sp-form-radius: 8px` (T(d) buttons and cards 8px); `--sp-form-focus: var(--wp--preset--color--ink)` (2px outline, offset 2px); `--sp-form-surface: #FFFFFF`; `--sp-form-text: var(--wp--preset--color--ink)`; borders 1px `line`; error text/border `error` #B3412F; success panel `#E3EEE8` with text `success` #2F6B4F. Submit hover `patina-deep`.
  - dark (`.kc-ink` group style): `--sp-form-surface: #2A3837`; `--sp-form-text: #F3F5F4`; `--sp-form-accent: #BFD3CF` (patina-pale); `--sp-form-on-accent: #1E2A29`; `--sp-form-focus: #D98A2B` (amber, 2px); borders `rgba(243,245,244,.35)`; error `#F0B4A6`; success `#BFD3CF`. Labels inherit `#F3F5F4`.
  - Styled states: input, textarea, select, number/date, checkbox/radio (`accent-color`), label, submit, hover, focus-visible, disabled, error, success; scoped to CF7, WPForms, MailPoet, MC4WP (+ Jetpack, `.wp-block-form`) classes and `.sp-newsletter-fallback`; no global input selectors.
- **i18n semantic keys** in `inc/i18n/en.php` (extract with `L10N_SEMANTIC=1`; five locales rewritten locally): `forms_email` "Work email", `forms_subscribe` "Join the room alerts", `forms_mail_notice` "This opens your email app. Send the message to join the list; you are not on it yet.", `forms_mail_subject` "Room alerts: please add me", `forms_contact_subject` "Capacity enquiry", `contact_email` "Email the planner", `forms_contact_note` (fallback sentence above). Check rendered label, button, notice and subject in en, zh-TW, ja, fr, de.
- Validation: `form-check.py`, five-locale `form-runtime-check.php`, `repo-gates.sh forms`; real CF7 check at 390px and desktop on the light (Ask) and dark (Room alerts) grounds; never submit.

---

## 12. Similarity table (target ≈80%; values from reference-tokens.md)

| Dimension | Reference value (token) | Koori value |
|---|---|---|
| Brand colour + share | #C51D23 red, ~15% home / 12% first screen (T(a)) | #5A7572 patina, ~12% home / ~3% first screen (row palette; quiet note) |
| Ground / cards / text / lines | #F7F6F5 / #FFFFFF / #222222 / #DDDDDD, fill #EDEDED (T(a)) | #F3F5F4 / #FFFFFF / #1E2A29 / #D5DDDB, fill #E6ECEA |
| Warm accent | orange inside photos only (T(a), T(e)) | amber #D98A2B in photos + log ticks, ≤2% |
| Header | two rows, 110px, logo left, utility + main nav (T(c)) | two rows, 104px (36 + 68), logo left, plain utility row + one anchor menu + CTA |
| Hero | full-bleed 1440×690 (2.09:1), no radius, crossfade 3 slides 4000/1000 ms (T(c), T(e), T(g)) | full-bleed 1440×≤690, no radius, 3 slides, 4000/1000 ms |
| Catch | bottom-left, thin, white, ~70px + small kicker | bottom-left, Schibsted 400 4.5rem white + kicker 1.125rem |
| Tilted line | italic red English, ≈−8°, across the catch's foot (T(f)) | italic 700 #BFD3CF, −7°, across the h1's foot |
| Pager | SVG ring r 14.5, stroke 4, dash 91.11 + pause 38×20 (T(f)) | identical geometry, white |
| Fold band | rounded red band peeking under hero (T(f)) | log-strip edge + rounded patina band (radius 40) |
| Section title | giant lowercase Latin 96–120px, lh 1, −.02em, sub-label under, gap 8 (T(b)) | Schibsted 700 lowercase 7.5rem, lh 1, −.03em, Onest 700 sub-label, gap 8 |
| Fading band | solid → transparent, 421px, 64.3% stop (T(f)) | patina solid to 64.3% → ground, 520px, top radius 40 |
| Fused card | 520 text + 680 photo, 440 tall, radius 8, gap 40, no shadow (T(c), T(d)) | identical: 520 + 680, 440, radius 8, gap 40, no shadow |
| Card details | 54px outline icon, 60px red circle arrow, 3 hairline link rows (T(d), T(f)) | 54px line icon (ours), 60px patina circle arrow, 3 hairline rows 69px |
| Alert band | 310px label + rows, hairlines (T(d)) | 310px label "room log" + 3 hairline rows |
| Photo band | 1440×500 (2.9:1), giant word right, underlined link + 60px circle arrow (T(e)) | 1440×500, "the dock" right, underlined link + 60px circle arrow, + parallax 10% |
| Radius | cards/buttons 8px (T(d)) | 8px everywhere; circles 50% |
| Body type | 17px / 28.9px, weight 500 JP (T(b)) | Onest 400 17px / 1.7 (28.9px) |
| Container | 1200 (content 1100), section gaps 50/60/80/140 (T(c)) | 1200 / 1100, 50/60/80/140 |
| Footer | warm grey, white text, 4 cols, hairline heading rows with arrows (ref 4500) | #4A5553, 4 cols, hairline heading rows with arrows |
| Imagery | documentary dock / hall / hands, slightly dark, cool floor + orange (T(e)) | low-key documentary dock / rooms / hands, cool green-grey + amber |
| Motion | crossfade 4000/1000, hover .2s / image .4s, no scroll effects (T(g)) | same crossfade + hover; adds sp-parallax, reveal--up + stagger, count |

---

## 13. Home acceptance checklist (stage 1)

1. 1440×900 first screen: two-row sticky header (utility row + wordmark + 5 anchor links + "Ask about capacity"); **full-bleed** hero K01 (no radius) with the catch bottom-left (h1 4.5rem), the **italic tilted line crossing the h1's foot**, the **ring pager + boxed pause** bottom-right; the log strip's top edge visible at the fold.
2. With `?sp-motion` the hero crossfades K01 → K02 → K03 (4 s / 1 s), the ring fills, pause stops both; with `?sp-static` / reduced motion slide 1 is static.
3. 390×844: lockup and pager in flow, h1 2.5rem, tilted line −4° without overlapping; no vertical text, no absolute labels, no overlap; `scrollWidth == innerWidth`.
4. §3 log strip: 310 label cell + 3 hairline rows with amber ticks.
5. §5: patina band **solid then fading**, rounded top, giant white "rooms", 3 cards **520 + 680 fused**, each with 54px icon, 60px circle arrow, 3 hairline rows and a 2-slide crossfading photo with its own ring pager.
6. §6: "the dock" photo band with underlined link + circle arrow; D01 parallax passes `check-parallax.mjs` (desktop + mobile).
7. Giant lowercase section words on §4, §5, §6, §7, §8, §9, §10 (held, rooms, the dock, booking, the day, rates, cases).
8. §8 horizontal day strip scrolls sideways inside itself; page does not scroll horizontally; 4 cards (3 photo + 1 text).
9. §9 price table: 7 rows, full container width at ≥782, prices `nowrap` right, not clipped at 800 / 1280; stacked below 782. Prices match §9 (€9.40 / €11.20 / €13.80 / €6.50 / €6.50 / €38.00 / €45.00).
10. 18 distinct images on home (≥8); 0 cut-outs; every image Read-checked for text, numbers and logos.
11. ≥250 English words (target ≈620) and ≥3 narrative paragraphs of ≥20 words.
12. Effects: sp-parallax, sp-reveal--up (+stagger), sp-count only; no reveal in the hero, log strip, price table, forms; reduced motion shows the final state.
13. First-screen saturated share ≤6% (cap 15%); largest theme.json size 7.5rem (≥4.25rem); fonts via theme.json fontFace; editor matches the front end.
14. §12 newsletter slot shows email + submit + notice without plugins; not in the first screen. Exactly one `core/navigation`.
15. `auto-gates.mjs … en … 1 1` passes; `pattern_source.py` passes.
