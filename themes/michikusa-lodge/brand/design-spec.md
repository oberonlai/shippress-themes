# Design spec — Michikusa Lodge (michikusa-lodge)

Row b38-4 · type business (category travel-stays; App tag type `hospitality`) · archetype editorial-magazine · nav overlay · page_structure booking-led · font_direction **serif** · **Imagery: photo** (reference is photographic → real-photo STYLE, film-grain, low-key; no illustration except our own single-stroke line drawings, which the reference also uses as a device).
Reference: https://zenandbed.com/ (primary; tokens `brand/reference-tokens.md` = "RT", screenshots `brand/ref/zb-first.png`, `scroll-zb-*.png`). Secondary: https://soranohotel.com/ ("RT2", `brand/ref/sorano-first.png`).
Similarity target: **80 %** to the primary reference in colour relationships, photo treatment, motion, decoration and layout. Photos, copy, names, drawings and logo are our own; no image, text, line drawing or logo from either reference is reused.

---

## 0. Fixed brand facts (identical on every page, in brand.md and in all five languages)

- **Michikusa Lodge** — a single-storey motor lodge of **24 rooms** on the **Old Trunk Road at Harlow Crossing** (fictional, international-neutral), kilometre **212**. Every room opens onto its own parking bay; the canopy over the desk door is lit all night. Built **1987** by the Varga family as a roadside motel; rebuilt and reopened **2016** by **Ines Varga**. "Michikusa" means stopping by the roadside on the way somewhere — brand.md explains it in English.
- Address: **Michikusa Lodge, Km 212, Old Trunk Road, Harlow Crossing** (local address order per language in brand.md). Desk phone **+00 44 555 0142**. Email **desk@michikusa-lodge.example** (the same in every mailto, form fallback and footer).
- Hours (open every night of the year):
  - **Desk 06:00–02:00.** After 02:00 your key waits in the **night locker** beside the desk door; the code comes in the confirmation text.
  - **Check-in from 15:00** · **check-out by 11:00** (leave the key in the box at the door).
  - **Breakfast 05:00–09:30** at the counter · **packed breakfast bag from 04:00** (ask at check-in).
  - Rooms booked for tonight are held **until 06:00** the next morning — no late-arrival charge.
- **Rooms (24) and prices — 7 items, EUR, per room per night, VAT included, breakfast for the room's guests included. Same figures on Home, Rooms, What a stay includes, Late arrivals, Book tonight, Questions, Terms:**
  | # | Item | Price |
  |---|---|---|
  | 1 | Driver room — one double bed, sleeps 2 (9 rooms) | €78 per night |
  | 2 | Step-free room — one double bed, roll-in shower, sleeps 2 (3 rooms) | €84 per night |
  | 3 | Twin room — two single beds, sleeps 2 (8 rooms) | €92 per night |
  | 4 | Family room — a double and two singles, sleeps 4 (4 rooms) | €118 per night |
  | 5 | Breakfast at the counter for a driver not staying (05:00–09:30) | €14 per person |
  | 6 | Overnight car charging under the canopy (6 bays) | €9 per night |
  | 7 | A dog in the room (blanket and bowl provided) | €12 per night |
  Cancellation: free until **18:00 on the day of arrival**; after that the first night is charged. No deposit.
- **People (7, fictional):**
  1. **Ines Varga** — owner; reopened the lodge in 2016.
  2. **Tobias Lindqvist** — night desk 22:00–02:00; the hand placing the key in the hero (P01) and the clerk in P03.
  3. **Leilani Kahale** — evening desk 14:00–22:00; answers most "Book tonight" requests.
  4. **Amara Osei** — morning desk and bookings 06:00–14:00.
  5. **Rafael Moreno** — breakfast cook; lights the counter at 04:00 (P08).
  6. **Hana Kowalska** — housekeeping lead, 10:00–15:00.
  7. **Desmond Achebe** — maintenance; the canopy lights, the chargers, the night locker.
- **Nights at the desk (3 stories, fictional guests, first names only, no claimed outcomes):** (a) **"Snow on the pass, 01:40"** — Nadia, a coach driver held up four hours; the room was kept, soup left at the desk, she slept until 09:00. (b) **"Two cars, one family"** — the Haddads moving house, family room plus dog, both cars charged overnight. (c) **"The 04:30 bag"** — Owen, a nurse driving to a 06:30 shift; packed bag ready on the counter at 04:30.
- **The single way to book (4 steps, the same on Book tonight, Late arrivals, Questions):** 1 **Book tonight** — the form on the Book tonight page, the desk phone, or email → 2 the desk replies by text within **15 minutes during desk hours** with your room number → 3 drive in under the canopy; before 02:00 the desk hands you the key, after 02:00 open the night locker with the code → 4 breakfast from 05:00 (bag from 04:00); key in the box by 11:00.
- One repeated CTA everywhere: **"Book tonight"** → `/book-tonight/`.
- Brand.md "a day" section (word **daily routine** used): 04:00 Rafael lights the counter → 05:00 breakfast → 06:00 Amara opens the morning desk → 10:00 Hana's rooms → 14:00 Leilani → 15:00 first check-ins → 22:00 Tobias → 02:00 locker.

---

## 1. Signature techniques (borrowed from zenandbed.com; obvious at a glance; do not dilute)

### T1. Double exposure inside a framed window (RT (e), `ref/zb-first.png`; RT2 KV scrub as the motion)
- **Reference:** the first screen is a dark, desaturated, film-feel photograph in which two images (hands holding a tea bowl / a misty temple roof and mountain) are laid over each other and cross-fade; copy sits in short wide-tracked white lines; the photo is the whole stage.
- **Ours:** every page opens with a **framed window**: a photo box inset **48 px** left/right and **24 px** from the top on the paper ground, radius 0, holding **two film photographs superimposed**: a wide base photo + a close detail photo laid over its left part with `mix-blend-mode: screen; opacity: .72; mask-image: linear-gradient(90deg, #000 35%, transparent 82%)`. On home: base **P02** (car under the canopy light) + overlay **P01** (the clerk's hand putting a key on the counter). The overlay's mask is on the child `img` (never on an `.sp-reveal` element). A 0.08 opacity grain SVG noise layer (own, inline `feTurbulence`, not an image file) over both.
- Where: Home hero (1344 × 516 window at 1440); every inner page title window (1344 × 360, page-specific pair, §4).
- Must not dilute: **both images must be readable at once** in the final state (key/hand left, car/canopy right). Never a single photo, never a blurred tint, never a cross-fade that ends on one image. The window stays inset (paper visible on three sides) — never full-bleed.

### T2. Double-hairline heading band (RT (d) `.headline:before`, `ref/scroll-zb-after-1000.png`)
- **Reference:** each centred section heading sits on a thin band running the width of the content: two 1 px #E4E4E4 rules 4 px apart, interrupted by the heading on white.
- **Ours:** wrapper `.ml-band` (core/group, full container width 1120): `::before` (`content:""`, decoration only) centred vertically on the heading line, height **6 px** = `border-top:1px solid #DAD7D2; border-bottom:1px solid #DAD7D2` (4 px gap). Heading `h2` inline-block, `background: var(--section-ground)`, `padding: 0 48px`, **EB Garamond 400 1.75rem caps, ls .3em**, colour #1B1411. Under it a Latin/locale sub-line **Karla 500 .6875rem caps ls .24em #6A5F57**, margin-top 14 px. Band margin-bottom **40 px** (RT headline mb 40), **70 px** on the Rooms block (RT "stay" 70). On ink sections the rules are `rgba(243,242,240,.22)` and the heading #F3F2F0.
- Where: Home blocks 4, 5, 7, 8, 9, 10, 11 and every inner page section heading.
- Must not dilute: always **two** rules (not one), always full container width, heading always centred and caps-tracked. Not a short underline.

### T3. Photo + stacked lines + circle photo + amber single-stroke line drawing (RT (e)(f), `ref/scroll-zb-after-2200.png`)
- **Reference:** a 4:3 landscape photo at ~48 % width starting x 140; at the right a column of 3–4 short wide-tracked lines from x 975; under the lines a **circle-masked photo (~220 px)**; under the photo a thin pale-yellow hand-drawn line sketch of the building (~370 px wide).
- **Ours:** grid at 1440: photo **4:3, 700 × 525, left edge x 140** (= container 1120 left + offset −20; implement as 12-col grid on 1160, photo spans cols 1–7); text column cols 9–12 starting **x 975**, top +80 px from photo top: a T2-less small heading (EB Garamond 1.5rem ls .14em) then **4 stacked lines** (§3 block 3) EB Garamond 400 1.125rem lh 2.2 ls .1em; **circle photo 220 × 220** (`border-radius:50%`, object-fit cover) at cols 9–11, 60 px under the lines; **line drawing** SVG **520 × 210**, stroke **#D8B04A 1.25 px, no fill, stroke-linecap round, slightly wobbly hand line**, placed under the photo, left edge photo-left + 230, 40 px below the photo bottom. Drawings are our own (4 SVGs, see §4 table): **lodge elevation** (flat canopy on two posts, blank sign pole — no letters — a car under the canopy, a door lamp), **room door + car nose**, **breakfast counter with coffee pot and stools**, **road sign pole with the road curving away**.
- Where: Home block 3 (arrival hour); Rooms, What a stay includes, Late arrivals, The road, About, Road notes.
- Must not dilute: the circle stays a full circle 220 px (≥160 on mobile); the drawing stays amber single-stroke at ~520 px, visibly hand-drawn, not an icon; the photo stays at ~48 % width with the generous right column (no cards).

### Supporting (required, not counted)
- **S1 Round amber "Book tonight" disc** (RT (f) round yellow reserve disc 60 px top-right): **60 × 60 #D8B04A**, text "Book<br>tonight" EB Garamond 400 .75rem ls .08em #1B1411 centred. In the header (top-right of the window). At viewports **≥1400 px** it is `position:fixed; top:56px; right:72px; z-index:50` on every page (so it stays visible after the header scrolls away — our CSS-only stand-in for RT's slide-in header + RT2's fixed reservation tab; no scroll listener). Below 1400 px it is static inside the header (never fixed on mobile).
- **S2 Vertical label + hairline** (RT (f) vertical SCROLL + 1 px line): desktop ≥1024 only, in the 48 px right margin of the home window: "Night desk open until 02:00" Karla .625rem caps ls .3em `writing-mode: vertical-rl`, #1B1411 on paper, then a 1 px #1B1411 line 96 px long under it. Hidden ≤1023 (replaced by an in-flow line, §3).
- **S3 Back-to-top disc** (RT (f) 40 px black disc): 40 × 40 #1B1411 with a 1 px white chevron, fixed bottom 24 right 24, ≥1024 px only, appears after the hero via `:target`-free CSS (always shown is acceptable).
- **S4 Hairline ledgers** 1 px #DAD7D2 (RT (a) hairline grey) for rooms, prices, people, questions.

### Continuation to inner pages (≥ 4 required; actual 9)
| Page | T1 framed double exposure (title window) | T2 heading band | T3 photo + lines + circle + drawing | Supporting |
|---|---|---|---|---|
| Rooms | ✓ P17 + P15 | ✓ | ✓ P05 / circle P04 / door + car | room ledgers, price table |
| What a stay includes | ✓ P08 + P07 | ✓ | ✓ P16 / circle P11 / counter | price table |
| Late arrivals | ✓ P02 + P03 (+ sp-parallax) | ✓ | ✓ P14 / circle P04 / door + car | arrival log |
| The road | ✓ P09 + P12 | ✓ | ✓ P10 / circle P11 / road sign | distance ledger, strip |
| About the lodge | ✓ P17 + P01 | ✓ | ✓ P03 / circle P04 / lodge elevation | people ledger |
| Book tonight | ✓ P02 + P14 | ✓ | — | booking bar echo, form |
| Road notes | ✓ P09 + P10 | ✓ | ✓ P11 / circle P16 / road sign | newsletter |
| Questions | ✓ P17 + P07 | ✓ | — | hairline details |
| Journal / posts | ✓ P09 + P03 | ✓ | — | dated hairline list |

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
zenandbed.com opens on a dark, desaturated, film-grain documentary photograph (~57 % teal-black, ~35 % misty mid-tone): a temple roof and misted mountain, double-exposed with two hands holding a tea bowl, cross-fading. A transparent header sits on the photo: stacked logo top-left, a wide-tracked nav, and one **60 px round yellow reserve disc** top-right — the only saturated colour (0.2 %). At lower right, **three short wide-tracked lines** of copy; at the right edge a vertical **SCROLL** label with a 1 px line. Story: *a quiet night that lets you put your mind back in order.* Motion: the photos fade and settle (scale 1.05 → 1, 1 s, `cubic-bezier(.42,0,.58,1)`); the three lines rise in one by one (textillate fadeInLeftUp, initial delays 1300 / 1500 / 1700 ms); the header slides in after the hero (.7–.75 s). Secondary (soranohotel.com): a reservation tab docked bottom-right over a 1 px rule; the KV content scrubs upward and fades as the next section arrives.

### (2) Our translation (trunk-road motor lodge; same scene type, same motion idea, same image type = dark film-grain documentary photo)
Same story turned to a roadside night: **you arrive late, the desk is awake.** The double exposure keeps the reference's two-subject idea — the reference's *hands holding a bowl* becomes **the night clerk's hand putting a room key on the counter** (P01), the reference's *roof and mountain in mist* becomes **the guest's car under the lodge canopy light, the dark trunk road beyond** (P02). Composition is the row's **framed-window / below-photo / booking-bar**: the double exposure sits in an inset window, the overlay nav and amber disc sit on the dark photo like the reference's transparent header, the reference's lower-right lines move **below the photo** as the H1 + one short paragraph, and Sorano's docked reservation tab becomes a **booking bar docked on the window's foot**. Motion keeps the reference timing: both photos settle from scale 1.05 → 1 over 1.2 s (overlay fades 0 → .72 over 1.4 s, 0.3 s later), H1 lines rise 10 px diagonally after 1.3 s / 1.5 s, the side paragraph after 1.7 s; on scroll the two exposures drift apart at different speeds (`sp-parallax`, §7 — RT2's KV scrub, scroll-driven).

### (3) KV checklist (all built in the home first screen at 1440 × 900, all visible)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Full-bleed dark double-exposure photograph (roof/mountain + hands with bowl) | Framed-window double exposure: car under the canopy light (base) + clerk's hand placing a key (overlay, screen blend .72, masked to the left) | window x 48–1392, y 24–540 | base scale 1.05→1 1.2 s; overlay fade 0→.72 1.4 s delay .3 s; both `cubic-bezier(.42,0,.58,1)`; parallax P02 6 % / P01 10 % | **P02**, **P01** |
| 2 | Three short wide-tracked lines, lower right | H1 two lines "A quiet room / off the trunk road." EB Garamond 4.75rem, below the window on paper at left (cols 1–7) + one 34-word paragraph at right (cols 9–12) | y 632–800 | lines rise translate(10px,10px)→0 + fade, 1 s, delays 1.3 s / 1.5 s; paragraph 1.7 s | — |
| 3 | 60 px round yellow reserve disc, top-right | 60 px amber #D8B04A "Book tonight" disc | header, window top-right (x 1308, y 56) | fade with header .75 s `cubic-bezier(.455,.03,.515,.955)` | — |
| 4 | Vertical "SCROLL" label + 1 px line, right edge | Vertical "Night desk open until 02:00" + 1 px × 96 px line in the window's right margin | x 1404–1428, y 300–540 | line scales Y 0→1, .75 s after 1.9 s | — |
| 5 | Transparent header over the photo (stacked logo, tracked nav) | Overlay header inside the window: "MICHIKUSA / LODGE · KM 212" wordmark left, 6-item nav white with text-shadow `0 0 10px rgba(0,0,0,.4)` | window top, y 24–120 | opacity 0→1 .75 s `cubic-bezier(.455,.03,.515,.955)` | — |
| 6 | Sorano reservation tab docked bottom-right over a 1 px rule | Booking bar docked on the window foot, half over the photo: Check-in "Tonight, from 15:00" · Nights "1 or more" · Guests "1–4 per room" · Rooms from "€78, breakfast included" · brown button "Book tonight" | x 168–1272, y 496–584 (overlaps photo by 44 px) | none (static) | — |
No "adapted, not copied" shortcut: every row is built and visible in the first screen. The booking bar contains **no inputs** (first-screen form ban): its cells are text, the button is a link to `/book-tonight/`.

---

## 3. Home page

### First screen composition
**hero_composition: framed-window · hero_text: below-photo · hero_footer: booking-bar · hero_fingerprint: framed-window/below-photo/booking-bar**
- **framed-window**: page ground paper #F3F2F0. Window = core/group `.ml-window` with `margin: 24px 48px 0`, height `clamp(420px, 57svh, 560px)` (516 at 1440 × 900), radius 0, overflow clip, ground #1B1411. Inside: `figure.sp-parallax__layer` P02 (object-fit cover, focal 60 % 55 %) and `figure.sp-parallax__layer.ml-exposure` P01 (left 0, width 68 %, screen blend, mask on the img), then the grain layer, then a top scrim `linear-gradient(#1B1411cc, transparent 30%)` for the header. Paper shows left, right and top → it is a frame, **not** full-bleed. The header template part is laid over the window's top (on home and inner pages alike — `nav: overlay`).
- **below-photo**: the H1 is never on the photo. Under the window (and under the booking bar) a 12-col grid, container 1120: cols 1–7 H1 "A quiet room / off the trunk road." **EB Garamond 400, 4.75rem / lh 1.08 / ls .01em, #1B1411**, margin-top 48 px below the bar; cols 9–12, aligned to the H1's first baseline: paragraph Karla 400 1rem lh 1.9 #3B302A, max 34ch: "Twenty-four ground-floor rooms at kilometre 212, each with its own parking bay. The desk is awake until 02:00, breakfast starts at 05:00, and a room booked for tonight waits for you until morning." Then a text link "See the rooms →" (#6B4E3D, 1 px underline offset 6 px).
- **booking-bar**: `.ml-bookbar` white #FFFFFF, **1104 × 88**, 1 px #DAD7D2 border, radius 0, centred, `margin-top: -44px` (in flow, not absolutely positioned) so it straddles the window foot. Five cells separated by 1 px × 40 px #DAD7D2 rules: label Karla 500 .6875rem caps ls .24em #6A5F57; value EB Garamond 400 1.25rem #1B1411. Last cell: filled button **"Book tonight"** #6B4E3D / text #F3F2F0, 200 × 56, Karla 500 .875rem ls .12em, radius 0, hover #1B1411 .4 s ease-out. Not a full-width info strip over the photo; no inputs.
- **390 px**: window margin 16 px (top 16), height 340 px; header inside the window: wordmark + "Menu" button + disc 48 px **static** in the header row; P01 overlay mask becomes `linear-gradient(180deg,#000 30%,transparent 80%)` (top). S2 vertical label hidden. Booking bar in flow, width calc(100% − 48px), `margin-top:-28px`, **two cells only**: "Rooms from €78 · desk until 02:00" + full-width button "Book tonight" (52 px) stacked. Then H1 2.5rem lh 1.12 (two lines), then the paragraph 1rem, then the line "Night desk open until 02:00" as normal text with a 32 px 1 px rule before it. **No vertical type, no absolutely positioned labels over text, H1 visible within 844 px.**

### Block order (anchor ids in brackets)
| # | Block | Purpose | Layout & photos | Copy |
|---|---|---|---|---|
| 0 | Header (in window) | brand, nav, CTA | wordmark left; nav: Rooms · What a stay includes · Late arrivals · The road · About · Journal (EB Garamond 1rem ls .16em #FFF); language links EN · ZH · JA · FR · DE (shown in each language's own script only in the localised demo content) (Karla .75rem); S1 disc | — |
| 1 | Hero `#top` | KV | §3 composition; **P02 + P01** | H1 + 34 words + bar |
| 2 | The night in one paragraph `#lead` | brand concept (RT ZEN&BED concept block) | paper, centred, padding 160/120: wordmark "MICHIKUSA LODGE" EB Garamond 400 **3.5rem caps ls .2em**; 48 px gap; one centred paragraph EB Garamond 400 1.25rem lh 2.2 ls .06em max 36ch (≈75 words: "Most people find us after dark…"). `sp-reveal--zoom` | ~80 words |
| 3 | Arrival hour `#late` (T3) | late arrival handled | T3 grid: **P03** 4:3 left; right: heading "If you arrive late" + 4 log lines (EB Garamond time 1.375rem #6B4E3D + Karla 1rem line): **21:40** "Call from the road and Leilani turns on your room's heating." · **23:15** "Tobias has your key on the counter and the canopy light on." · **01:40** "Soup and bread stay out at the desk until 02:00." · **After 02:00** "Your key is in the night locker; the code is in our text." Under the lines circle **P04**; drawing "lodge elevation" under the photo; then a 640 px paragraph (≈60 words) + link "Late arrivals →" | ~110 words |
| 4 | The rooms `#rooms` (T2) | four rooms + from-prices | band "THE ROOMS" / sub "24 ground-floor rooms" (mb 70); grid: **P05** 3:4 (cols 1–5, 520 × 693); cols 6–12: 4 hairline ledger rows — name EB Garamond 1.75rem, line Karla .9375rem "one double bed · sleeps 2 · 9 rooms", price right `nowrap` EB Garamond 1.25rem "€78"; under the ledger **P06** 3:4 280 × 373 right-aligned, offset 64 px down, with a 2-line caption | ~90 words |
| 5 | What a stay includes `#stay` (T2) | inclusions + full price table | band "WHAT A STAY INCLUDES"; two columns: left cols 1–5 six stacked lines (each 1 line, EB Garamond 1.125rem lh 2.2): breakfast 05:00–09:30 · packed bag from 04:00 · parking at your door · room held until 06:00 · quiet hours 22:00–07:00 · Wi-Fi and a desk lamp; right cols 7–12 **P07** 4:3; below, full container width 1120, the **7-item price table** (§0) on hairlines, price column right, nowrap; note line on cancellation | ~120 words + 7 rows |
| 6 | Early breakfast band `#breakfast` | parallax photo band | full-bleed core/cover **1440 × 640, P08**, `sp-parallax --sp-par:10%`, scrim `rgba(27,20,17,.42)`; foreground centred stacked lines in white, EB Garamond: "Breakfast from 05:00" 2.25rem ls .2em + two lines 1.125rem lh 2.2 "Rafael lights the counter at four. / Eggs, bread, coffee, and a bag for the road." | 3 lines |
| 7 | The road and the nearby `#road` (T2) | what is around km 212 | band "THE ROAD"; intro 2 lines centred; horizontal scroll-snap row (RT Slick gallery → CSS): 4 photos **1.5:1, 560 × 373**, gap 24, row starts at container left and bleeds right; captions under each (Karla .75rem caps label + EB Garamond 1.125rem): **P09** "On the trunk road · Harlow Crossing" · **P10** "12 km · the lake lay-by" · **P11** "4 km · the bakery at Orme, opens 06:30" · **P12** "At the lodge · 6 charging bays"; two 40 px round outline arrow buttons (anchor links to items) + dot rule under the row | ~70 words |
| 8 | The night desk `#people` (T2) | who is awake | band "THE NIGHT DESK"; **P13** 3:2 cols 1–7; cols 8–12: 7 people on 1 px hairlines — name EB Garamond 1.25rem + role/shift Karla .875rem | 7 rows |
| 9 | Three nights at the desk `#stories` (T2) | proof without claims | band "NIGHTS AT THE DESK"; one centred 720 px column; three stories stacked, each: time label Karla .6875rem caps ls .24em #6B4E3D ("01:40 · coach driver"), title EB Garamond 1.75rem, 55–65-word paragraph Karla 1rem lh 1.9; between stories a 120 px double hairline (T2 motif) | ~190 words |
| 10 | Questions `#questions` (T2) | FAQ | band "QUESTIONS"; 6 `details` on hairlines, 840 wide: late arrival, cancellation, dogs, charging, early breakfast, trucks & trailers (bays 6 m; 2 coach bays) | ~150 words |
| 11 | Book tonight `#book` (T2 on ink) | the one CTA | ink #1B1411; band on dark "BOOK TONIGHT"; grid: **P14** 4:5 (360 × 450) cols 2–5; cols 7–11: amber disc 96 px echo, 1 sentence, button, desk phone + email + "Desk 06:00–02:00 · locker after 02:00" | ~45 words |
| 12 | Footer | contacts + Road notes | ink #1B1411 continued (1 px rgba(243,242,240,.16) rule between); 4 cols: wordmark + address; hours; pages (Rooms, What a stay includes, Late arrivals, The road, About, Journal, Questions, Book tonight, Road notes, Privacy, Terms); "Road notes" newsletter slot (§9) | |
Home image positions: **P01–P14 = 14**, no repeats. English words ≥ 250 (≈ 900 planned), narrative paragraphs ≥ 3 (blocks 2, 3, 9).

### Comparison with the most recent themes (home order must not match)
| Theme | Hero | Sequence after hero |
|---|---|---|
| Mebuki College | KV | about band → a day on the course → garden photo band → who it is for → fees → admission → tutors → graduate stories → notices → visit |
| Enogu Supply | promo strip + slides | four range tiles → picks grid → story → notice → mill parallax band → shop week sheet → categories → letter |
| Azukari Stays | KV | why owners → five-stage chapters → rooms we do → homes strip → between-guests photo → fees + payout → owner stories → questions → consult |
| Enkai Rooms | diagonal two-photo seam, no footer | evening narrative → 2×2 scrim tiles → dark rooms strip → per-head prices → parallax band → three evenings → people → 4 steps → FAQ → ask |
| (older) Shimaya Villas | framed window + hold-dates bar | why direct → morning → three houses → season list → what direct adds → arrival day → hosts → hold dates → journal |
| **Michikusa Lodge** | **inset double-exposure window with overlay nav, bar straddling the foot, H1 below on paper** | **centred wordmark + one-paragraph concept → photo / stacked log lines / circle / amber line drawing → 3:4 room photo with hairline room ledger → inclusions + full price table → dawn breakfast parallax → scroll-snap road strip → night-desk ledger → three stacked night stories → FAQ → ink book block** |
Why different: only Michikusa uses a double exposure and a centred wordmark concept block straight after the hero; the T3 photo/lines/circle/drawing composition and the double-hairline section band appear in none of them; no tiles, no cards, no chapters, no steps row on home; Shimaya's framed window is a single photo with a bar below — ours superimposes two photos, carries the nav inside the frame and puts the H1 below the bar.

---

## 4. Inner pages (12 pages + journal list + 3 posts; slugs identical in every language)
Every inner page: header overlaid on a **title window** (T1: 1344 × 360 at 1440, 358 × 220 at 390; double exposure pair as listed; same blend/mask; `sp-parallax` with base 6 % / overlay 10 %), then below the window on paper: page title EB Garamond 400 **3.5rem** lh 1.1 (2.25rem at 390) left on the container + a Karla .6875rem caps sub-line; sections use T2 bands; container 1120; footer.
1. **Rooms** `/rooms/` — window **P17 + P15**. T3 block (P05, circle P04, drawing "door + car"): "Every door opens onto your car." Four room sections, each: T2 band with the room name, 2 paragraphs, ledger (Beds · Sleeps · Rooms · Size · Accessible · From). Photos (no repeats on this page): Driver — none (its photo P05 is the T3 photo directly above); Step-free — none, access ledger instead (door 90 cm, roll-in shower, parking bay 3.6 m wide); Twin **P06**; Family **P18**. Then the full 7-item price table.
2. **What a stay includes** `/what-a-stay-includes/` — window **P08 + P07**. T3 (P16 packed bag, circle P11, drawing "counter"). Sections: Breakfast at the counter (menu 8 lines, hours), The 04:00 bag, Parking and charging, Quiet hours, In the room (list). Full price table + cancellation.
3. **Late arrivals** `/late-arrivals/` — window **P02 + P03**. T3 (P14, circle P04, drawing "door + car"). The arrival log (4 lines, same as home), the night locker in 3 sentences, what to do if the road is closed (call; the room is held until 06:00, no charge), the 4 booking steps as a numbered hairline list (not a grid).
4. **The road** `/the-road/` — window **P09 + P12**. T3 (P10, circle P11, drawing "road sign"). Directions from both directions (northbound/southbound exits at km 211 and 213), a distance ledger (Orme bakery 4 km · lake lay-by 12 km · Harlow Crossing station 7 km · nearest hospital 26 km · fuel at the lodge: none, 3 km at the crossing), scroll-snap strip P10 / P11 / P17.
5. **About the lodge** `/about/` — window **P17 + P01**. Since 1987 / 2016 story (3 paragraphs), T3 (P03, circle P04, drawing "lodge elevation"), a daily routine (04:00 → 02:00, hairline ledger), the 7 people ledger with **P13**.
6. **Journal** `/journal/` (role posts; content empty) — window **P09 + P03**; dated hairline list: date · category (Karla caps #6B4E3D) · title.
7. **Book tonight** `/book-tonight/` (screen `contact`) — window **P02 + P14**; below title a static copy of the home booking bar (same 5 cells; button scrolls to `#request`); the 4 steps as a hairline list; ledger of desk hours, phone, email, address; `#request` form slot (§9) with mailto fallback; cancellation line.
8. **Road notes** `/road-notes/` (screen `newsletter`) — window **P09 + P10**; T3 (P11, circle P16, drawing "road sign"); what the monthly letter contains (road works, pass closures in winter, breakfast changes); standalone newsletter slot (§9).
9. **Questions** `/questions/` — window **P17 + P07**; 12 `details` in 3 T2-banded groups (Arriving · Staying · Booking & paying), figures identical to §0.
10. **Privacy** `/privacy/`, 11. **Terms** `/terms/` (cancellation 18:00 rule, quiet hours, dogs, charging liability), 12. **Thanks** `/thanks/` ("The desk will text you within 15 minutes during desk hours.") — T2 band title only, no window.
Posts (3, category "From the desk", tags e.g. `breakfast`, `charging`, `the-road`): "How the 04:30 bag is packed" (featured **P16**), "Charging overnight under the canopy" (**P12**), "Three places to stop within twenty minutes" (**P10**). Single template: title window with the featured image as base + P01 overlay, T2 band meta (date · category).
Standard screens: home, about=/about/, news=/journal/, article=first post, category=/category/from-the-desk/, tag=/tag/breakfast/, newsletter=/road-notes/, contact=/book-tonight/.

---

## 5. Colour and type

### Colour (RT (a) relationships kept: dark photo stage + white paper + one tiny saturated disc)
| Role | RT | Ours | Share (first screen) | Note |
|---|---|---|---|---|
| Ink / photo stage, book block, footer | #0B1512 .. #26352F | **#1B1411** (alt #241B17) | ~45 % (window) | **hue changed** teal-black → brown-black: row palette "kogecha" (dark brown) #6B4E3D and tungsten-lit roadside nights; luminance kept (L* ≈ 7 vs 6–20) |
| Photo mid-tone | #6F8782 | #8A7A6E (photo grading only) | ~10 % | warm mist |
| Paper (page ground) | #FFFFFF | **#F3F2F0** | ~42 % | −5 % L, cool grey, not cream |
| Surface (booking bar, inputs) | #FFFFFF | **#FFFFFF** | ~2 % | |
| Hairline | #E4E4E4 / #BFBFBF | **#DAD7D2** / input border #BDB7B0 | rules | −4 % L, warmed |
| Text on paper | #000000 | **#1B1411**; body #3B302A | | |
| Muted text | — | **#6A5F57** (5.6:1 on #F3F2F0) | | |
| Text on dark | #FFFFFF + shadow 0 0 10px rgba(0,0,0,.4) | **#FFFFFF** on photos (same shadow), **#F3F2F0** on ink | | |
| Brown primary (buttons, links, time labels) | — (RT black buttons) | **#6B4E3D** | ~1 % | row hex |
| Accent: disc, line drawings | #E8DA39 | **#D8B04A** | ~0.3 % | yellow → lamp amber (hue 55° → 43°) to sit with brown and tungsten photos; still the only saturated colour |
First-screen saturated share: RT **0.2 %**; ours target **≤ 5 %**, hard cap 15 % (check-first-screen.py), plan cap 30 %. Photos are graded muted (saturation ≤ 35 %).

### Type (font_direction serif)
- Latin display & lead: **EB Garamond** 400, 500, italic 400 (RT title font). Latin body/UI: **Karla** 400, 500.
- CJK display & lead: zh-TW **Noto Serif TC**, ja **Noto Serif JP** (Ming / Mincho serif; RT uses a light Mincho for everything) — woff2 subsets for zh-TW and ja, loaded via **theme.json `fontFamilies` + `fontFace`** (assets/fonts, license files, listed in theme-meta `fonts[].files` and readme.txt). Editor and front identical: copy `shared/inc/editor-lang.php` → `inc/editor-lang.php` and `require_once` it (style.css uses `:lang()`); check-editor-fonts.mjs en + zh-TW must pass.
- Stacks:
  - display: `"EB Garamond", "Noto Serif TC", "Noto Serif JP", Georgia, serif`
  - `:root:lang(zh*)` display: `"EB Garamond", "Noto Serif TC", "Songti TC", "PMingLiU", serif`; `:root:lang(ja)` display: `"EB Garamond", "Noto Serif JP", "Hiragino Mincho ProN", "Yu Mincho", serif`
  - body: `"Karla", system-ui, -apple-system, "Segoe UI", sans-serif`; zh-TW body `"Karla", "PingFang TC", "Microsoft JhengHei", sans-serif` (no Noto TC, no JP font — repo gate); ja body `"Karla", "Hiragino Sans", "Yu Gothic", sans-serif`.
  - Lead lines and log lines use the **display** stack (RT sets them in Mincho).
- Scale (RT (b) → ours): **H1 4.75rem (76 px) EB Garamond 400 lh 1.08 ls .01em** — largest (≥ 4.25rem ✓), `clamp(2.5rem, 5.2vw, 4.75rem)` (RT display 90 px) · lead wordmark 3.5rem caps ls .2em · inner page title 3.5rem lh 1.1 · band heading 1.75rem caps ls .3em (RT headings 28 px, wide tracking) · room names / story titles 1.75rem · lead paragraph **1.25rem lh 2.2 ls .06em** (RT lead 20 px / lh 2, tracking ~.3em on short lines → .06em for long Latin lines; CJK lead ls .2em) · log/stacked lines 1.125rem lh 2.2 ls .1em · price 1.25rem `lining-nums tabular-nums` · nav 1rem ls .16em · body Karla **1rem lh 1.9** (RT body 14–16 px) · labels .6875rem 500 caps ls .24em · small .875rem. **Weight 400 for all serif text** (RT weight 400 only). CJK headings ≈ 0.75× Latin size, body lh 1.85; fr/de `hyphens:auto`.

### Shape and spacing (RT (c)(d))
- Container **1120** (RT activity column 76 % ≈ 1094); wide 1344 (window); text column 640–720. Section padding **120 px** desktop / 72 px at 390; sub-block gap **80 px** (RT 80 between activity blocks); band margin-bottom 40 / 70 (RT headline). Book block padding 120 (RT reserve band 50 + photo).
- Radius **0** on photos, bars, buttons, inputs; **50 %** on the circle photo, the amber disc, round arrow buttons and the back-to-top disc (RT round photo, round buttons). Borders 1 px. No box shadow; text-shadow only on white text over photos.
- Photo ratios (RT (e)): window 2.6:1 home / 3.7:1 inner; T3 photo **4:3 at 48.6 %** (700 / 1440); rooms **3:4**; road strip **1.5:1**; circle **220 px**; book block 4:5; band 2.25:1.
- Buttons: filled brown 200 × 56 (home bar) / 200 × 48; outline on ink 1 px #F3F2F0; label Karla 500 .875rem ls .12em; hover .4 s ease-out.

---

## 6. Photos (18; Imagery = photo; Grok one at a time; Read every one; webp ≤ 300 KB, ≤ 2000 px; 0 cut-outs)
**STYLE (identical for every image):**
`film-grain documentary photograph at a small contemporary single-storey roadside motor lodge on an international trunk road, dusk, night or before dawn, low-key warm tungsten light against deep brown shadow, muted desaturated colour with a faint amber note, visible fine 35mm film grain, slightly soft focus, quiet and unposed, diverse adults, no text, no logos, no readable signage, no licence plates, no Japanese elements`
(Imagery row: photo → real-photo STYLE following the reference's dark film photographs; the amber line drawings are our own SVGs, not images.)
| ID | Subject / composition | Ratio / size | Used on (page · block) | Home |
|---|---|---|---|---|
| P01 | Close-up: a man's hand (50s, rolled sleeve) placing a brass room key with a plain leather tag on a worn wooden counter, desk lamp glow, rest in shadow; subject left third | 3:2, 2000×1333 | Home hero overlay; About window overlay; post overlays | ✓ |
| P02 | A dark estate car parked under a lit flat canopy outside a single-storey lodge at night, row of doors, empty trunk road beyond; car right of centre | 16:9, 2000×1125 | Home hero base; Late arrivals & Book tonight windows | ✓ |
| P03 | Night clerk (same man, 50s) at a small desk under a lamp, ledger open, looking toward the glass door | 4:3, 1600×1200 | Home T3 arrival; Late arrivals window; About T3; Journal window | ✓ |
| P04 | Wall of small numbered-free metal key lockers by a door, one door open, warm light | 1:1, 1000×1000 (circle) | Home circle; Rooms, Late arrivals, About circles | ✓ |
| P05 | Driver room: made double bed, reading lamp on, curtain drawn, door ajar to a car outside | 3:4, 1200×1600 | Home rooms; Rooms T3 | ✓ |
| P06 | Twin room: two made single beds, folded towels, window with the canopy light outside | 3:4, 1200×1600 | Home rooms small; Rooms twin | ✓ |
| P07 | Breakfast tray on a counter: coffee, eggs, bread, by a dark window | 4:3, 1600×1200 | Home stay; Stay & Questions window overlays | ✓ |
| P08 | 05:30 breakfast counter: cook (man, 40s) pouring coffee for two drivers on stools, blue pre-dawn window, lorries outside | 2.25:1, 2000×890 | Home parallax band; Stay window base | ✓ |
| P09 | The trunk road at dusk from the verge, tail-light streaks, low hills | 3:2, 1800×1200 | Home road strip; The road, Road notes, Journal window bases | ✓ |
| P10 | A lake lay-by at blue hour, one parked car, bench, still water | 3:2, 1800×1200 | Home road strip; The road T3; Road notes overlay; post 3 | ✓ |
| P11 | A small village bakery window lit at dawn, bread on shelves (no lettering) | 3:2, 1800×1200 | Home road strip; Stay & The road circles; Road notes T3 | ✓ |
| P12 | Two electric cars charging under the lodge canopy at night, cables, lamp glow | 3:2, 1800×1200 | Home road strip; The road window overlay; post 2 | ✓ |
| P13 | Desk team of four at shift change by the counter, mixed ages and backgrounds, talking quietly | 3:2, 1800×1200 | Home night desk; About people | ✓ |
| P14 | A guest (woman, 30s) walking from her car to a lit room door, bag over shoulder, canopy behind | 4:5, 1200×1500 | Home book block; Late arrivals T3; Book tonight overlay | ✓ |
| P15 | Room bathroom: tiled walk-in shower, towels, warm wall light | 3:2, 1800×1200 | Rooms window overlay | |
| P16 | Packed breakfast paper bag, thermos and an apple on the counter at 04:30, lamp | 4:3, 1600×1200 | Stay T3; Road notes circle; post 1 | |
| P17 | Lodge exterior at first light: canopy, row of doors, parked cars, mist on the road | 2.4:1, 2000×830 | Rooms, About, Questions window bases; The road strip | |
| P18 | Family room: a double bed and two singles, a dog asleep on a blanket by the door | 3:4, 1200×1600 | Rooms family | |
Home uses P01–P14 (14). No image repeats on any single page (check the inner table in §4 before placing). Regenerate any with text, logos, number plates, broken faces/hands or style drift.

---

## 7. Motion and scroll effects (sp-scroll v1 copied unchanged; hero has no reveal)
Chosen (from stage-a candidates): **sp-reveal--zoom**, **sp-reveal--up + sp-stagger**, **sp-parallax**; plus sp-reveal--wipe for T3 drawings (same reveal family).
| Effect | Class | Where | Source (trigger / time / easing) | Values |
|---|---|---|---|---|
| Fade + settle | `sp-reveal sp-reveal--zoom` | block 2 wordmark + paragraph; inner page lead paragraphs | zenandbed concept/logo: ScrollMagic class toggle at triggerHook .9, once, opacity 0→1 + scale 1.05→1, 1 s `cubic-bezier(.42,0,.58,1)` | `--sp-dur:1s; --sp-ease:cubic-bezier(.42,0,.58,1)` (library scale 1.06 ≈ RT 1.05) |
| Stacked lines rise | `sp-stagger` parent + `sp-reveal sp-reveal--up` children | block 3 log lines (4), block 5 inclusion lines (6), block 8 people rows (7), block 9 stories (3), T3 lines on inner pages | zenandbed lines: is-fire once, translate(10px,10px)→0 + fade, 1 s, delays .2 / .4 s | `--sp-dist:10px; --sp-dur:1s; --sp-ease:cubic-bezier(.42,0,.58,1)`; theme CSS overrides the step to RT .2 s: `.ml-lines.sp-stagger>.sp-reveal:nth-child(2){--sp-delay:.2s}` (3) .4s (4) .6s (n+5) .8s |
| Drawing wipes in | `sp-reveal sp-reveal--wipe` on the drawing wrapper (clip on the child svg) | every T3 line drawing | zenandbed gate drawing appears with the block (fade, .5 s delay) | library 1.1 s `cubic-bezier(.77,0,.175,1)` |
| Parallax | `sp-parallax` | hero window, block 6 band, inner title windows | RT2 KV scrub (start top top, end bottom top, linear) + RT photo settle | §7.1 |
| Section headings | `sp-reveal sp-reveal--up` on T2 bands | blocks 4, 5, 7, 8, 9, 10 | soranohotel reveal start top 85 %, 1 s power3.out | `--sp-dur:1s; --sp-dist:10px` |
Not on: hero (window, bar, H1), price table, forms and their sections, FAQ `details`, legal pages, road strip children (scroll-snap row — reveal only on the row container). `.sp-reveal` count ≤ 60 % of home blocks' children rule (auto-gates). Anchor links: `html{scroll-behavior:smooth}` (RT GSAP scrollTo 1 s Power2.easeInOut; off under reduced motion). Hero load motion (§2 (3)) is CSS keyframes scoped `html.sp-js:not(.sp-no-motion) .ml-hero …`, so no-JS, reduced motion, `?sp-static` and the editor show the final state (both exposures visible, H1 in place).

### 7.1 Parallax (required)
- **Hero window** (primary, check-parallax.mjs): `.ml-window` carries `sp-parallax`; children `figure.sp-parallax__layer` — **P02 `--sp-par:6%`**, **P01 overlay `--sp-par:10%`**: the two exposures slide apart as the page scrolls (our scroll-driven version of RT2's KV scrub and RT's settling photos). Foreground (header, bar, H1) is not in a layer. Mobile ≤781: P02 4 %, P01 7 %.
- **Block 6 breakfast band**: core/cover 1440 × 640 (`min-height:420px` at 390), background **P08** (`.wp-block-cover__image-background`), `sp-parallax`, **`--sp-par:10%`** desktop / **6 %** ≤781 (kept on mobile). Stacked lines stay in the cover's inner container, scrim .42.
- **Inner title windows**: same two-layer setup, base 6 % / overlay 10 % (mobile 4 / 7).
- Reduced motion / `?sp-static` / editor / no JS: layers static, unscaled.

---

## 8. Responsive rules (hard)
- 390 px first screen: as §3 — no vertical type (S2 hidden), no absolutely positioned labels over text; the booking bar is in flow; disc static in the header; one "Menu" button (core/navigation overlay) → still exactly one top menu.
- Price table and room ledger: at **≥ 782 px** the table spans the full 1120 container, 2 columns (item · price), price cell `white-space:nowrap; text-align:right; width:1%; padding-left:32px`, never clipped (auto-gates 800 + 1280). At **≤ 781 px** every table stacks: `table, tbody, tr, td {display:block}`, price on its own line left-aligned under the item, 1 px hairline between items. Same for any other table (distances, terms).
- Booking bar: 5 cells ≥ 1024; 3 cells + button (wrap to 2 rows) 782–1023; 2 stacked items ≤ 781.
- T3 grid: ≤ 1023 photo full width, lines below, circle 160 px left-aligned, drawing 100 % max 420 px. Rooms grid, people grid: 1 column ≤ 781. Road strip: card width 78vw, `scroll-snap-type:x mandatory`, contained inside its own `overflow-x:auto` box (no page overflow).
- S1 fixed disc only ≥ 1400; S3 back-to-top only ≥ 1024.
- No horizontal overflow at 390 / 1280: `html,body{overflow-x:clip}`; parallax layers clipped by their window.

---

## 9. Forms (form contract v1 — `steps/form-contract-v1` exists)
- Copy `pipeline/assets/forms/shippress-forms.php` → `inc/shippress-forms.php`, its CSS + editor JS → `assets/` unchanged; `require_once` in functions.php. Patterns stay literal block markup with small PHP islands; run `pattern_source.py` before build/inner done.
- **Book tonight** (`/book-tonight/`, the contact screen and the only booking page), section `#request` below the 4 steps, its own block (not inside a button/paragraph): `shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) )`. Fallback (`ob_start()` literal markup) = brown button `<a class="wp-element-button ml-mail" href="mailto:desk@michikusa-lodge.example?subject=…">` label "Email the desk" + line "Or call the desk on +00 44 555 0142, 06:00–02:00." Never link back to /book-tonight/ or /contact/.
  - Recommended CF7/WPForms fields (document in readme + brand.md): name*, email*, mobile phone* (for the text confirmation), arrival date*, nights (number 1–14)*, room type* (select: Driver room / Step-free room / Twin room / Family room), guests* (1–4), expected arrival* (radio: before 22:00 / 22:00–02:00 / after 02:00 — locker), overnight charging (checkbox), dog (checkbox), vehicle length over 6 m (checkbox), message (textarea), consent* (checkbox), submit "Request tonight's room".
- **Road notes** (`/road-notes/`, newsletter screen; standalone page, slot on a #FFFFFF panel with 1 px #DAD7D2 border on the paper ground) and **footer "Road notes" column** (ink #1B1411, every page incl. home — far below the first screen): `shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'desk@michikusa-lodge.example', 'label' => forms_email, 'submit' => forms_subscribe, 'notice' => forms_mail_notice, 'subject' => forms_mail_subject ) )`. Order: MailPoet (explicit ID via `shippress_form_id`) → MC4WP → opt-in CF7/WPForms dedicated newsletter ID only. No plugin → required `type=email` + submit "Send me road notes", native mailto POST, visible notice "Opens your email app. Send the request to join Road notes; you are not on the list yet." No home body subscribe section (footer only).
- Tokens (map in style.css from theme.json presets, scoped to plugin classes / `.sp-newsletter-fallback`; no global input/form selectors):
  - Light: `--sp-form-accent:#6B4E3D`, `--sp-form-on-accent:#F3F2F0`, `--sp-form-radius:0`, `--sp-form-focus:#1B1411` (2 px outline, offset 2 px), `--sp-form-surface:#FFFFFF`, `--sp-form-text:#1B1411`; border #BDB7B0, hover #6B4E3D; placeholder #6A5F57.
  - Dark (footer): accent **#D8B04A**, on-accent #1B1411, surface rgba(243,242,240,.06), text #F3F2F0, border rgba(243,242,240,.4), focus #D8B04A.
  - Error #9C3B2E (dark #F1B5A9) with 1 px border + message under the field; success #4E6B48 (dark #BFD6B6). Inputs 48 px, label Karla 500 .75rem caps ls .16em, input Karla 1rem, textarea min 140 px, checkbox/radio 18 px square (radio round), submit 48 px Karla 500 .875rem ls .12em. Same look for CF7, WPForms, MailPoet, MC4WP (Jetpack blocks too).
- i18n: semantic keys in `inc/i18n/en.php` first — `forms_email` ("Email address"), `forms_subscribe` ("Send me road notes"), `forms_mail_notice`, `forms_mail_subject` ("Road notes: please add me"), `book_email_button` ("Email the desk"), `book_mail_subject` ("Room request for tonight"), `book_call_line`; localised (not literal) in zh-TW, ja, fr, de; extract with `L10N_SEMANTIC=1`; check dynamic block attributes render translated in every locale.
- No `sp-reveal` on any form or its section; no form in the home first screen (the hero booking bar has no inputs).

---

## 10. Similarity to the reference (target 80 %; values from RT unless marked RT2)
| Dimension | Reference | Ours |
|---|---|---|
| First-screen stage | full-bleed dark film double exposure, ~57 % dark | inset framed-window double exposure, ~45 % dark (row composition) |
| Ink | #0B1512 .. #26352F | #1B1411 / #241B17 (hue → brown, L kept) |
| Paper | #FFFFFF after the hero | #F3F2F0 (−5 % L), surface #FFFFFF |
| Hairline | #E4E4E4 / #BFBFBF | #DAD7D2 / #BDB7B0 |
| Accent | #E8DA39 disc, 0.2 % of first screen | #D8B04A disc, ≤ 0.5 % |
| Saturated share | 0.2 % | ≤ 5 % (cap 15) |
| Text | #000 / #FFF + 0 0 10px rgba(0,0,0,.4) | #1B1411 / #FFF + same shadow |
| Latin display | EB Garamond 400, wide tracking | EB Garamond 400, ls .2–.3em on caps |
| CJK | Hannari light Mincho | Noto Serif TC / JP (Ming / Mincho) |
| Display size | 90 px | H1 76 px (4.75rem); wordmark 56 px |
| Lead | 20 px / lh 2, centred stacked lines | 20 px / lh 2.2, centred column |
| Headings | 28 px on 4 px double-hairline band, mb 40 / 70 | 28 px caps on 6 px double-hairline band, mb 40 / 70 |
| Body | 14–16 px, weight 400 | 16 px Karla, lh 1.9; serif all 400 |
| Content width | activity column 76 % | 1120 (78 % of 1440) |
| Section gap | 80 px | 80 px sub-blocks, 120 px sections |
| Photo + text | 4:3 at x 140, 48.6 % wide; lines at x 975 | same |
| Circle photo | ~220 px | 220 px |
| Line drawing | thin pale-yellow building sketch ~370 px | own amber 1.25 px sketch 520 px |
| Rooms | tall 3:4 photos | 3:4 photos |
| Gallery | Slick 1.5:1, arrows + dots, 700 ms | scroll-snap 1.5:1, round arrows + dot rule, smooth scroll |
| Radius / shadow | 0 photos; circles for disc/buttons; no shadow | same |
| Header | transparent on hero, white fixed after +400 px, disc 60 px | overlay in window; disc 60 px fixed ≥1400 (CSS only) |
| Decoration | vertical SCROLL + 1 px line; 40 px black back-to-top | vertical "Night desk…" + 1 px × 96; 40 px ink back-to-top |
| Motion | fade + scale 1.05→1, 1 s (.42,0,.58,1); lines 10 px diagonal, .2 s steps; title delays 1.3/1.5/1.7 s; header .75 s (.455,.03,.515,.955) | zoom reveal 1 s same ease; up 10 px, .2 s steps; hero keyframes 1.3/1.5/1.7 s; header fade .75 s same ease |
| Scroll scrub (RT2) | KV moves up + fades, scrub | two-layer parallax 6 % / 10 % |
| Imagery | dark desaturated documentary film photos | same direction (own Grok photos) |
Own: all photos, copy, names, drawings, wordmark "MICHIKUSA / LODGE · KM 212".

---

## 11. Home acceptance checklist
- [ ] First screen = framed-window / below-photo / booking-bar: inset window (paper on 3 sides), H1 below the window and bar on paper, bar straddling the window foot; not full-bleed overlay.
- [ ] All 6 KV items visible at 1440 × 900: double exposure (car under canopy + hand with key, both readable), H1 + side paragraph below, amber disc, vertical "Night desk open until 02:00" + line, overlay nav in the window, booking bar with 5 cells + "Book tonight".
- [ ] H1 4.75rem EB Garamond 400; theme.json max ≥ 4.25rem; CJK headings Noto Serif TC/JP.
- [ ] Block order 0–12 as §3; T1, T2 (double rules on ≥ 6 home headings), T3 (4:3 photo + log lines + 220 px circle + amber drawing) unmistakable.
- [ ] Prices (€78 / €84 / €92 / €118 / €14 / €9 / €12), 24 rooms, desk 06:00–02:00, breakfast 05:00–09:30, bag 04:00, hold until 06:00, cancel by 18:00 — identical on Rooms, Stay, Late arrivals, Book tonight, Questions, Terms.
- [ ] ≥ 250 English words, ≥ 3 narrative paragraphs ≥ 20 words.
- [ ] 14 home image positions (P01–P14), no repeats, no text/logos/plates, 0 cut-outs.
- [ ] Colours only from §5; first-screen saturated share ≤ 15 % (target ≤ 5 %).
- [ ] Fonts via theme.json fontFace incl. zh-TW / ja subsets; editor = front (check-editor-fonts.mjs en + zh-TW).
- [ ] sp-reveal--zoom, --up + sp-stagger, --wipe, sp-parallax only; nothing in hero / prices / forms; hero window (6 % / 10 %) and band P08 (10 %, 6 % mobile) pass check-parallax.mjs.
- [ ] 390 px: no horizontal overflow, no vertical or absolute labels overlapping text, H1 in first screen; tables stack.
- [ ] ≥ 782 px: price table full container width, prices nowrap right-aligned, not clipped (auto-gates.mjs pass).
- [ ] Exactly one top menu; one repeated CTA "Book tonight"; footer Road notes slot works with no plugins (email + submit + mailto notice).
