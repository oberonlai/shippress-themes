# Isso Relocation: design spec (stage 1, binding for implementation)

Slug `isso-relocation`, corporate office relocation crew, **landing** theme (`rules.landing_track`): the home page is one long conversion page with an anchor menu and **one repeated CTA, always worded "Request a quote"**. Main reference: **besthome-ep.com** (S5-Style residential architecture) — measurements in `reference-tokens.md` (cited below as `[tok a]…[tok g]`), screenshots in `brand/ref/`. Industry story reference only: a large Japanese moving company (steps, one job story, a quote CTA). Borrow structure, techniques, colour relationships, motion and the key-visual concept. Never copy photos, text or the logo.

Row facts: archetype single-column-longform, hero photo-left-text-right, nav split, first screen top-bottom halves, real photography with film grain, font_direction **sans** (Hanken Grotesk / Instrument Sans; CJK Noto Sans TC / Noto Sans JP sans), five languages en, zh-TW, ja, fr, de.

---

## 0. Fixed facts (identical on every page, in demo content and in all five languages)

- **Isso Relocation**, founded **2014**, office and crate depot at **Dokweg 12, 2030 Antwerp, Belgium** (fictional street). Works within **150 km** of Antwerp (Antwerp, Ghent, Brussels, Mechelen, Leuven, Rotterdam).
- Office hours **Mon–Fri 08:30–17:30**. Move window **Friday 18:00 → Monday 07:00** (= **61 hours**). Phone **+32 3 555 01 41**, email **hello@issorelocation.example**.
- Currency **EUR**, all prices **excl. 21% VAT**, in every language (no converted prices).
- Named people (**7**):
  1. **Lena Vos** — co-founder, operations director
  2. **Samir Haddad** — co-founder, move planner (surveys and floor plans)
  3. **Mei Lin Hartmann** — client coordinator (quotes, first call)
  4. **Kwame Mensah** — crew lead, Saturday crew
  5. **Ana Ribeiro** — crew lead, Sunday crew and furniture reassembly
  6. **Joanna Kowalczyk** — IT disconnect and reconnect lead
  7. **Tom Verbeke** — fleet, crates and depot
- Process (**5 phases**, always these names and times):
  1. **Survey** — week −6: free walk-through of both floors with Samir, measurements, photos.
  2. **Plan & label** — week −3: labelled floor plan, one colour zone per team, one number per desk; every crate and cable bag gets the destination number.
  3. **Pack** — crates delivered **10 working days** before the move; staff pack their own desk (6 crates per desk on average, 60 × 40 × 35 cm, reusable, rental included for **3 weeks**).
  4. **The weekend** — Fri 18:00 lift and load · Sat 07:00 first floor emptied, new floor set out · Sun 12:00 desks built, IT reconnected · Sun 20:00 walk-through with the client · Mon 07:00 keys back.
  5. **Monday** — two crew members on site **07:00–12:00** for small fixes; crates collected within the 3 weeks.
- Price list (**7 items**, EUR excl. VAT; exactly these on Home, Prices page, Quote page, FAQ and all languages):
  | Item | Price |
  |---|---|
  | Site survey and labelled floor plan | Included |
  | Small office move, up to 15 desks | from €3,900 |
  | Office move, 16–40 desks | from €8,600 |
  | Floor move, 41–90 desks | from €17,500 |
  | IT disconnect and reconnect | €38 per workstation |
  | Extra reassembly crew | €65 per crew hour |
  | Secure document and hardware disposal | €140 per locked cage |
- Moves (case stories, **3**, each a post; story 1 is the home "One move"):
  1. **"Forty-two desks, two floors down"** — architecture studio, Ghent, 42 desks, two floors to one, Fri 18:00 → Sun 16:40, client quote by **Hanne De Smet**, studio manager.
  2. **"The law office that never closed"** — 26 desks, Brussels, 310 archive crates under tamper seals with a signed chain-of-custody list.
  3. **"Benches, a rack and a cold room"** — 64 desks plus a small server rack and lab benches, Mechelen, rack powered down Sat 08:00 and back up Sun 11:30.
- Figures (sp-count on home): **61** hours (Fri 18:00 → Mon 07:00) · **10** working days (crates arrive before the move) · **3** weeks (crate rental included).
- Claims: no guarantees ("we aim to", not "guaranteed"), no awards, no client counts, no real brands, no real people.

---

## 1. Signature techniques (three, all must be obvious at a glance)

All from **besthome-ep.com** (https://besthome-ep.com/).

### S1. Split first screen: dark photo left half, grey-brown gradient right half with a small framed 3:4 photo between two vertical lines, fixed side tab (`ref/besthome-first.png`, [tok a][tok e][tok f])
- **Reference:** a 720×900 very dark interior photograph fills the left 50% at full height. The right half is a misty grey-brown vertical gradient (`#8A8581` → `#4A4A50`) whose panel begins at x 576 (overlaps the photo by 144 px). In it a small **300×400** framed forest photo sits at x 930 / y 247 with **two vertical lines of 24 px text**, one top-aligned at its right edge, one bottom-aligned at its left edge. Two columns of small white nav links sit top right. A 49×183 dark tab is fixed at the right edge, vertical text, dashed divider, chevron. A tiny vertical caption ("work / 09 in a 30 px circle / type") runs down the photo's left edge.
- **Ours (home block 1):** identical geometry at 1440×900 — left 0–720 film-grain photo **H1** (half-cleared office floor), right panel 576–1440 gradient `#8A8581` → `#4A4A50` (180°), its first 144 px masked `linear-gradient(to right, transparent, #000 144px)` so the photo edge shows through the haze; small framed photo **H2** 300×400 at left 930 / top 247 (64.6% / 27.4%), radius 0, no border; vertical lines white Hanken Grotesk 400 1.5rem, letter-spacing 0.1em, `writing-mode: vertical-rl`: right of the photo (x ≈ 1245, top-aligned) **"One weekend, one floor."**, left of the photo (x ≈ 885, bottom-aligned with the photo bottom) **"Back at work on Monday."** Left-edge caption on the photo: "move" (Instrument Sans 1.5rem vertical, ls 0.1em, white) / "01" in a 30 px outlined circle (13 px) / "Ghent · 42 desks" (13 px vertical). Side tab: §8.
- **Not to be diluted:** the split is exactly at 50%, the photo is dark (mean luminance ≤ 35%), the right half is a visible mid-grey gradient (never white, never cream), the small photo stays 300×400 (3:4) and sits between two vertical text lines on desktop, the side tab is dark `#2B2B2B` and fixed.

### S2. Giant wordmark crossing the seam, glyphs rising from the baseline (`ref/scroll-wordmark-before/after.png`, [tok f][tok g])
- **Reference:** "BEST HOME EP" in a wide geometric sans, white, ≈ 93 px cap height, spanning the full width minus 40 px at the very bottom of the first screen, crossing the photo/gradient seam; on load each glyph un-clips from the baseline, 0.8 s `cubic-bezier(.25,.8,.25,1)`, delays 0.08 → 0.44 s.
- **Ours (home block 1, bottom):** **"ISSO RELOCATION"** uppercase, Hanken Grotesk 500, white `#FFFFFF`, letter-spacing 0.12em, `white-space: nowrap`, left 20 px / right 20 px / bottom 12 px, font-size `clamp(3rem, 7.4vw, 7rem)` (≈ 107 px at 1440 → cap ≈ 76–80 px; tune so the word spans 1360 ± 40 px at 1440). It must cross the 50% seam (the "R" of RELOCATION sits on the photo/gradient boundary area). Each glyph is a `<span style="--i:n">`. Motion: §7 (load animation, not sp-reveal).
- **Inner pages:** the page name as the same wordmark across the bottom of the split page head (METHOD, PRICES, MOVES, PLANNING, CREW, FAQ, QUOTE, UPDATES), `clamp(2.75rem, 7.4vw, 7rem)`, same font, colour and seam crossing.
- **Not to be diluted:** full width (not centred small), white, at the bottom edge, crossing both halves; cap height ≥ 70 px at 1440.

### S3. Full-bleed 16:9 photo with two smaller photos overlapping its lower-left and upper-right (`ref/besthome-s2.png`, `besthome-s3.png`, [tok c][tok e])
- **Reference:** a 1440×810 (16:9) full-bleed photo, radius 0. A 360×222 photo (25% width) sits at its lower-left, x 40, margin `0 0 40px 40px`; a 576×355 photo (40% width) sits at the right, x 824, pulled up −80 px so it overlaps the main photo's bottom edge; white paper ground around.
- **Ours (home block 3 "Saturday"):** main **T1** (crew wheeling crate stacks across an empty open-plan floor) full-bleed 16:9 (square 1:1 crop on mobile), inside a `sp-parallax` wrapper. Below it, **outside** the parallax wrapper so they do not move with it: **T2** (tagged cable bag) 25% width, aspect 1.62:1, left 40 px, top margin −120 px so its upper third overlaps the main photo, bottom margin 40 px; **T3** (lift lobby with dollies) 40% width, 1.62:1, right 40 px, top margin −80 px from the main photo's bottom edge, `z-index: 1`. Between them, a 4-line caption in the white space (Instrument Sans 1rem/1.75, max 360 px) at left 40 px under T2.
  (Implementation: main = Group `.isso-trio__main.sp-parallax` > figure > img; subs = sibling Group with two figures, positioned with negative margins, not absolute, so nothing overlaps on mobile.)
- **Inner pages:** Method, Planning, Crew and each Move story post carry a trio (images in §6).
- **Not to be diluted:** main is truly full-bleed (edge to edge, 0 radius); both subs visibly overlap the main photo by ≥ 80 px at 1440; widths stay 25% / 40%.

### Section system (supporting, used in every section — reference "( 01 ) Timeless Design", `ref/besthome-s4.png`, [tok b][tok c])
"( 01 )" label (Hanken Grotesk 300, 15 px, ls 1.2px, `#6B5B4E`) → display H2 short English phrase Hanken Grotesk 300, **6rem (96 px)**, line-height 1.05, ls −0.02em, `#2B2B2B`, left at the container edge → 120 px gap → body column **50% width, `margin-left: auto`** with an H3 (Hanken Grotesk 500, 2rem/1.5, ls 0.02em) and 16 px/1.75 paragraphs → text-link button (§8). Section padding 160 px top and bottom. The display H2 stays English in all five languages (the reference keeps its English Marcellus H2 over Japanese H3); the H3 under it carries the translated meaning.

### Continuation to inner pages
| Page | S1 split head | S2 wordmark | S3 trio | Section system |
|---|---|---|---|---|
| Method | yes (P1) | METHOD | T1 / T2 / F1 | yes |
| Prices | yes (C1) | PRICES | — | yes |
| Moves (index) | yes (W2) | MOVES | — | yes |
| Move story (single post ×3) | yes (its M image) | MOVE 01/02/03 | yes (see §6) | yes |
| Planning guide | yes (P2) | PLANNING | C1 / P1 / Q1 | yes |
| Crew | yes (CR) | CREW | T1 / W1 / F1 | yes |
| FAQ | yes (T3) | FAQ | — | yes |
| Request a quote | yes (Q1) | QUOTE | — | yes |
| Updates (waitlist) | yes (C1) | UPDATES | — | yes |
| Privacy / Terms / Thanks | gradient panel only (no photo), 40vh | PRIVACY / TERMS / THANK YOU | — | label + H2 only |
**Split page head** = 64vh (min 520 px) version of S1: left 50% photo (Cover, `sp-parallax`, `--sp-par: 6%`), right gradient panel with "( 0n )" label, H1 Hanken Grotesk 300 4.25rem white, two-line lead 1rem white 80%, one vertical line of text at the right edge (desktop only), wordmark across the bottom seam. No small framed photo on inner heads (home only).

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
- **Drawn:** a dark, quiet interior (steel stair, pendant lamp, a table holding a white scale model of a house) on the left half; on the right a misty grey half holding a small framed photo of a fog-wrapped forest between two vertical lines of poetry; the brand name in giant white letters across the bottom.
- **Story:** "a house drawn from daily life and nature" — the model on the table is the next house being made; the forest is where it comes from. Calm craft, one built thing at a time.
- **Signature motion:** the left photo crossfades every 5 s (1.2 s) while settling from scale 1.1 → 1 over 5 s; the wordmark glyphs rise one by one from the baseline (0.8 s, 0.04 s steps); header drops in (0.8 s) and the side tab slides in from the right.

### (2) Our transposed scene (same composition, same motion concept, same image type: photo)
- **Drawn:** the left half is a film-grain photograph of an office floor on a Saturday evening, half cleared: grey reusable crates stacked by a concrete column, a floor plan taped to the floor with muted zone tapes, a desk pushed against the wall, a pendant work lamp, one crew member's back far down the room. The scale model on the reference table becomes **the taped floor plan on our floor** — the next office being made. The right half is the same grey-brown haze; the small framed photo shows **a hand pressing a destination label onto a sealed crate** (our "forest": where everything is going). Two vertical lines: "One weekend, one floor." / "Back at work on Monday." The wordmark **ISSO RELOCATION** crosses the bottom.
- **Story:** "Your office moves over one weekend; on Monday it is already working." Calm, labelled, one floor at a time.
- **Motion:** the left photo settles with scroll (sp-parallax, the scale 1.1 → 1 idea turned into a slow drift; no slideshow), wordmark glyphs rise one by one on load, side tab slides in.

### (3) KV checklist (all six on the home first screen at 1440×900, visible in `?sp-static`)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Dark interior photo, left 50%, full height (stair, lamp, table with model) | Film-grain photo: half-cleared office floor, crates by a column, taped floor plan, desk to the wall, crew member's back | x 0–720, y 0–900 (100svh) | `sp-parallax`, `--sp-par: 8%` (mobile 5%); no reveal | **H1** |
| 2 | Misty grey right half overlapping the photo by 144 px | Gradient `#8A8581` → `#4A4A50`, first 144 px masked over the photo, faint grain | x 576–1440 | static | — (CSS) |
| 3 | Small 300×400 framed photo between two vertical lines | 300×400 photo of a hand labelling a sealed crate; vertical lines "One weekend, one floor." (right, top-aligned) / "Back at work on Monday." (left, bottom-aligned) | left 930, top 247 | load wipe (clip-path bottom → top, 1.2 s ease-out, delay 0.3 s); lines static | **H2** |
| 4 | Giant white wordmark across the bottom, glyphs rising | "ISSO RELOCATION", full width −40 px, crossing the seam | bottom 12 px, x 20–1420 | glyph rise on load, 0.8 s `cubic-bezier(.25,.8,.25,1)`, delay 0.08 s + n × 0.04 s | — |
| 5 | Two columns of small white nav links top right | Anchor menu in 2 columns × 3: Method · Weekend · One move / Prices · Crew · Request a quote | top right, columns at x 984 and 1168, rows y 33/65/97 | static (no drop-in; header is part of the hero) | — |
| 6 | Fixed right-edge dark vertical tab + photo-edge vertical caption | Fixed tab "Request a quote" 49×183 `#2B2B2B`; caption "move / (01) / Ghent · 42 desks" down H1's left edge | tab: right 0, top 50%; caption: x 18, y 300–590 | tab slides in 30 px → 0, 0.8 s `cubic-bezier(.23,1,.32,1)`; caption static | — |
Mobile (390×844): items 1, 3, 4, 5 visible (stacked, §5); 2 is the panel behind 3; 6 hidden below 782 px.

---

## 3. Colour

Reference colours used as measured ([tok a]); the row's soot bamboo brown `#6B5B4E` is added as the one warm label tone (it sits inside the reference's own grey-brown gradient family). Navy stays the reference accent.

| Role | Hex | Source | Use | Share |
|---|---|---|---|---|
| Ground | `#FFFFFF` + paper grain (SVG `feTurbulence` data-URI, opacity 0.035, no image file) | [tok a] ground | all content sections | ≈ 55% |
| Quiet band | `#F2F2F2` | [tok a] `rgba(0,0,0,.05)` | figures band, one-move band, FAQ band | ≈ 10% |
| Ink | `#2B2B2B` | [tok a] text | text, H2, buttons, side tab | text |
| Footer | `#2D2D2D` | [tok a] dark band | footer only (no ink bands elsewhere) | ≈ 6% |
| Hero gradient | `#8A8581` → `#4A4A50` (180°) | [tok a] hero right half | home hero and inner page heads only | 50% of first screen |
| Label | `#6B5B4E` soot bamboo brown | row hex | "( 01 )" labels, timeline dots, price-table hairline under the header row | < 1% |
| Accent | `#2E4282` navy | [tok a] accent | link hover underline, 24 px marquee dot, focus ring, figure numbers (ref "Basic Quality" numbers) | < 2% |
| Lines | `#DEDEDE` / `#EBEBEB` | [tok d] | hairlines, card edges, table rules | hairlines |
| Muted text | `#6A6A6A` | derived from ink | captions, meta | — |
- No red (reference logo red is not used). No cream/beige grounds.
- **First-screen saturation cap:** quality_gate = min(30%, reference 2.0%) → **`scripts/check-first-screen.py screenshots/home-desktop.webp --max 2.0`**; design target ≤ 1.5%. To stay under: crates are grey/charcoal plastic (not cardboard), zone tapes muted grey-blue and grey-ochre, photos graded −20% saturation, no navy in the first screen except link hover. If the check fails, desaturate H1/H2 further before touching anything else.
- Contrast: ink on white 14.4:1; white on `#4A4A50`–`#8A8581` gradient: vertical lines and nav sit on the upper part (`#8A8581` → white 3.6:1 at 24 px / 13 px 500 — add `text-shadow: 0 0 12px rgba(0,0,0,.25)` to nav to lift it); navy on white 9:1.

## 4. Typography (font_direction: sans)

- **Latin:** headings/display/wordmark **Hanken Grotesk** (300, 400, 500); body/nav/UI **Instrument Sans** (400, 500). Both sans — no serif anywhere.
- **CJK:** zh-TW **Noto Sans TC**, ja **Noto Sans JP** (sans, 400/500), subset woff2 (Hokuto/Hada method, not the broken subset script). No Noto Serif.
- Stacks (theme.json fontFamilies):
  - `heading`: `"Hanken Grotesk", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`
  - `body`: `"Instrument Sans", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`
  - `:lang(ja)` puts Noto Sans JP before Noto Sans TC; `:lang(zh-TW)` the reverse → copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and require it.
- All faces load through **theme.json `fontFace`** (front end and editor identical, including the zh-TW / ja subsets); no separate `@font-face` in style.css, no Google CDN.
- Sizes (theme.json fontSizes): small 0.8125rem · base 1rem · medium 1.25rem · large 2rem · x-large 4.25rem · **xx-large 6rem (max, ≥ 4.25rem ✔)**.
| Role | Font | Size | Weight | Line-height | Letter-spacing | Token |
|---|---|---|---|---|---|---|
| Body | Instrument Sans | 1rem (16 px) | 400 | 1.75 | normal | [tok b] body 16/28 |
| Lead (H3 intro lines) | Instrument Sans | 1.25rem | 400 | 2.0 (Latin) / 2.2 (CJK) | 0.02em / 0.08em CJK | [tok b] lead 20/2.4 .08em (Latin loosened less) |
| Display H2 | Hanken Grotesk | 6rem desktop, `clamp(2.75rem, 10vw, 6rem)` | 300 | 1.05 | −0.02em | [tok b] H2 96 px |
| H1 inner head | Hanken Grotesk | 4.25rem, mobile 2.5rem | 300 | 1.1 | −0.01em | — |
| Section label "( 01 )" | Hanken Grotesk | 15 px | 300 | 1 | 1.2px | [tok b] Outfit 15/300 |
| H3 | Hanken Grotesk | 2rem | 500 | 1.5 | 0.02em (CJK 0.08em) | [tok b] H3 32/500 |
| Nav | Instrument Sans | 13 px | 500 | 2 | 0.08em | [tok b] nav 13/500 |
| Hero vertical lines | Hanken Grotesk | 1.5rem | 400 | 1 | 0.1em | [tok b] 24 px vertical |
| Figures | Hanken Grotesk | 5rem number + 1.5rem unit | 300 | 1 | −0.02em | ref "Basic Quality" |
| Footer marquee | Hanken Grotesk | 3rem / 1.75rem mobile | 300 | 1 | −0.02em | [tok b] 48/28 |
| Wordmark | Hanken Grotesk | `clamp(3rem, 7.4vw, 7rem)` | 500 | 1 | 0.12em, uppercase | [tok f] |
- CJK: H3 and leads ≈ 0.75× English (H3 1.5rem), body line-height 1.85; display H2 stays English. fr/de `hyphens: auto` on paragraphs and H3.

## 5. Layout, spacing, responsive

- Container [tok c]: `max-width: 1120px; width: calc(100% - 320px)` at ≥ 1440; 96% 1024–1439; 92% tablet; 89.6% mobile. Section padding **160 px** top/bottom (mobile 96 px). H2 margin-bottom 56 px; body column margin-top 120 px under the H2 (mobile 40 px); H3 margin-bottom 24 px.
- Radius **0** on all photos, cards, tables, buttons. Exceptions [tok d]: side tab `4px 0 0 4px`, 30 px caption circle, 24 px marquee dot. No shadows.
- Header: transparent over the hero, not sticky. Logo top-left x 20 / y 20: text logotype "ISSO RELOCATION" Hanken Grotesk 500 14 px, ls 0.2em, white (ink on inner legal pages). One `core/navigation` (anchor menu on home; on inner pages the same block lists Method · Prices · Moves · Crew · FAQ · Request a quote) rendered as a 2-column grid of small links at top right on desktop; below 960 px the same block collapses to its overlay with a custom icon of two 56 × 1 px lines (reference hamburger). Only one menu.
- **Mobile 390 px first screen (must hold):** header row 64 px (logo + icon) over the photo. H1 photo block 390 × 520 (Cover, `sp-parallax`, `--sp-par: 5%`) with the wordmark **inside the cover content in normal flow**, two lines "ISSO / RELOCATION", 11vw, bottom-left, padding 20 px. Then the gradient panel in flow: H2 photo at 58% width (3:4), the two lines set **horizontally** (writing-mode horizontal-tb, 1.25rem) under it, then a text-link "Request a quote". **No vertical text, no absolutely positioned labels, no photo-edge caption, no side tab on mobile** — nothing may overlap text.
- **Price table:** at ≥ 782 px the table is the full container width (1120 px), two columns, item left, price right-aligned with `white-space: nowrap`, column width auto (min 14ch); never clipped at 800 or 1280 px. Row padding 24 px 0, 1 px `#DEDEDE` rules, header row hairline `#6B5B4E`. Below 782 px every table (price, FAQ facts, planning checklist) stacks: each row becomes a block, item on line 1, price on line 2 left-aligned.
- Desktop vertical text (hero lines, inner head line, photo caption) only ≥ 1024 px; between 782 and 1023 the hero keeps the split but sets the two lines horizontally under the small photo.
- No horizontal overflow at 390 / 1280 (wordmark `nowrap` only ≥ 1024; use `overflow: clip` on the hero).

## 6. Photos (16, IMAGERY: photo)

**Imagery: photo** (stage-a IMAGERY: photo — the reference's main images are real photographs). All generated with Grok, one at a time, read each; regenerate any with text, readable labels, logos, broken hands, or style drift. ≤ 300 KB, ≤ 2000 px, webp, 0 cut-outs; one readme line each (AI-generated, CC0).

STYLE (exact, every prompt):
`documentary photograph shot on 35mm colour film, visible fine film grain, quiet soft natural window light, gentle mid-key exposure with deep soft shadows, slightly desaturated muted palette of warm grey, charcoal, concrete, pale plywood and off-white, grey plastic moving crates, modern international office interiors, diverse adults in plain charcoal and grey work clothes, candid unposed moment, 35mm lens, labels shown only as blank coloured blocks and dots, no text, no readable letters or numbers, no logos, no brand marks, no signage, no Japanese elements`

| ID | Subject / composition | Ratio | Used on (once per page) | Home? |
|---|---|---|---|---|
| **H1** | Saturday evening, half-cleared open-plan office floor; grey crates stacked by a concrete column at left-centre, a floor plan taped flat on the floor with muted zone tapes in the foreground, a desk pushed to the wall, a single pendant work lamp, one crew member's back far down the room; dark, low light | 4:5 | Home hero left (KV 1) only | ✔ |
| **H2** | Close-up: a hand pressing a blank coloured destination label onto the lid of a sealed grey crate, soft side light | 3:4 | Home hero framed (KV 3) | ✔ |
| **C1** | Long corridor at dusk, crates on dollies lined along the wall, light from tall windows | 1.6:1 | Home concept image; Prices head (4:5 crop); Planning and story 2 trio main (16:9 crop); Updates head | ✔ |
| **T1** | Crew of three wheeling crate stacks across an empty open-plan floor, Saturday morning daylight, wide | 16:9 | Home trio main; Method, Crew, story 1 and story 3 trio main | ✔ |
| **T2** | Tagged cable bundle coiled in a clear bag on a bare desk, close-up | 1.62:1 | Home trio sub-left; Method, story 1 and story 3 trio sub | ✔ |
| **T3** | Lift lobby with protective floor boards, crate dollies queued at the lift doors | 1.62:1 | Home trio sub-right; FAQ head (4:5 crop); story 2 trio sub | ✔ |
| **W1** | Saturday night: two crew members assembling desk frames under work lights | 4:5 | Home weekend (left); Crew and story 3 trio sub | ✔ |
| **W2** | Monday 08:00: staff arriving at a finished floor, monitors on, small blank labels still on screens, coffee cups | 4:5 | Home weekend (right); Moves index head; story 2 trio sub; Thanks page | ✔ |
| **M1** | Architecture studio's new floor, rows of desks, a few unopened crates, big windows | 3:4 | Home one move; Moves card 1; story 1 head | ✔ |
| **M2** | Trolley of sealed archive crates with blank tamper-seal tags in a quiet law-office corridor | 3:4 | Home one move card 2; Moves card 2; story 2 head | ✔ |
| **M3** | Padded rack case being wheeled into a small server room; lab benches behind | 3:4 | Home one move card 3; Moves card 3; story 3 head | ✔ |
| **CR** | Crew of five in charcoal work clothes on an empty floor among crates, three-quarter backs and profiles, relaxed | 3:2 | Home crew; Crew page head (4:5 crop) | ✔ |
| **Q1** | Hands holding a clipboard with a blank floor-plan drawing and a pencil, resting on a crate lid | 3:4 | Home quote; Quote page head (4:5 crop); Planning trio sub-right | ✔ |
| **P1** | Planner measuring a doorway with a laser measure during a walk-through survey | 4:5 | Method page head; Planning trio sub-left | — |
| **P2** | Office worker packing a desk drawer into a grey crate, plant and lamp beside | 4:5 | Planning page head; Method phase 3 (Pack) | — |
| **F1** | IT technician reconnecting monitor cables to a docking station, tagged cables | 4:5 | Method, Crew and story 1 trio sub-right | — |

Per-page check (no repeats on a page):
- **Home (16 positions, 13 distinct images):** H1 · H2 · C1 · T1 · T2 · T3 · W1 · W2 · M1 · M2 · M3 · CR · Q1 → 13 photo positions, each image once.
- Method: P1 (head), T1 / T2 / F1 (trio), P2 (phase 3). Prices: C1. Moves: W2, M1, M2, M3. Story 1: M1 head, trio T1 / T2 / F1. Story 2: M2 head, trio C1 / T3 / W2. Story 3: M3 head, trio T1 / W1 / T2. Planning: P2, C1, P1, Q1. Crew: CR, T1, W1, F1. FAQ: T3. Quote: Q1. Updates: C1. Thanks: W2. Privacy / Terms: none.

## 7. Motion (sp-scroll only; source besthome-ep.com, [tok g])

Copy `pipeline/assets/sp-scroll/` to `assets/` unchanged; CSS variables only. Hero gets **no `.sp-reveal`** (gate: 0 in the first section).

| Effect | sp class / mechanism | Where | Reference trigger / time / easing | Ours |
|---|---|---|---|---|
| **Rising mask reveal** (primary) | `sp-reveal sp-reveal--mask` on text columns; `sp-reveal sp-reveal--wipe` on photo figures (clip on the child) | Home blocks 2 (text column + C1), 3 (T2, T3 subs, caption), 5 (W1, W2), 6 (M1 figure), 8 (CR) | `.anime-fade-in`, jquery.inview, opacity + mask-position of a 300%-tall gradient, **1.2 s ease-out**, no stagger | `--sp-dur: 1.2s`; wipe keeps sp easing `cubic-bezier(.77,0,.175,1)`. If `--mask` fails check-parallax, use `--up` for text (24 px). |
| **Stagger rise** | parent `sp-stagger`, children `sp-reveal sp-reveal--up` | Home block 4 figures (3 cards), block 5 timeline stops (5) | wordmark glyphs 0.8 s `cubic-bezier(.25,.8,.25,1)`, 0.04–0.08 s steps | sp default 0.12 s steps, `--sp-dist: 24px` |
| **Count-up** | `sp-reveal sp-count` | Figures 61 / 10 / 3 | inview, 600 ms linear | sp-count default (1.2 s easeOutCubic; JS unchanged) |
| Footer marquee (supporting) | `sp-marquee` | Footer | CSS keyframes **20 s** linear infinite | duration var 20 s; text "Request a quote ● Moved by Monday ●", navy 24 px dot |
| **Parallax** (required) | `sp-parallax` | see below | reference: hero photo scale 1.1 → 1 over 5 s ease-out (no parallax on the reference site) | translated into a scroll drift |

**Parallax (required, two places + inner heads):**
1. **Home hero left** — Cover `.isso-hero__photo.sp-parallax`, background **H1** (Cover background image), `--sp-par: 8%` desktop, `5%` under 782 px. Foreground: nothing moves with it — the wordmark, caption and vertical lines are outside the moving layer (desktop wordmark is a sibling Group positioned at the hero bottom; mobile wordmark is Cover inner content, which does not move). This is the reference's 1.1 → 1 settle turned into a slow drift.
2. **Home trio main** — Group `.isso-trio__main.sp-parallax` > figure > img **T1**, `--sp-par: 10%` desktop, `6%` mobile. Sub photos T2/T3 are siblings outside the wrapper.
3. Inner split heads — Cover photo `sp-parallax`, `--sp-par: 6%` (4% mobile).
Must pass `check-parallax.mjs` (≥ 6 px desktop and mobile, ≤ 1 px reduced-motion).

**Hero load motion (not scroll, not sp-reveal):** wordmark glyph rise, H2 photo wipe and side-tab slide are pure CSS keyframes in the theme's style.css, every rule prefixed `html.sp-js:not(.sp-no-motion)` and inside `@media (prefers-reduced-motion: no-preference)`; only `clip-path` (on the glyph spans / the img child) and `transform ≤ 30px`; no `opacity: 0`, no JS. Glyphs: `clip-path: inset(100% 0 0 0) → inset(0)`, 0.8 s `cubic-bezier(.25,.8,.25,1)`, `animation-delay: calc(.08s + var(--i) * .04s)`, `both`. H2 photo: `inset(100% 0 0 0) → inset(0)` 1.2 s ease-out, delay 0.3 s. Tab: `translateX(30px) → 0`, 0.8 s `cubic-bezier(.23,1,.32,1)`, delay 0.6 s. `?sp-static`, reduced motion and the editor show the final state. If any gate objects, drop these three animations (static) — never move them to sp-reveal.

Not animated: price table, quote section, forms, legal text, header. Home `.sp-reveal` blocks: 2, 3, 4, 5, 6, 8 = 6 of 11 blocks (≤ 60%).

## 8. Components

- **Text-link button** [tok d]: 300 × 45 px, label left (Instrument Sans 1rem 500 ink), bottom border 1 px `rgba(43,43,43,.2)`, at right a 1 px × 12 px vertical divider then an 8 px chevron; hover: a navy `#2E4282` underline grows 0 → 100% in 0.5 s. Label is always **"Request a quote"** for the CTA (links to `#quote` on home, `/request-a-quote/` elsewhere); secondary links use the same component ("Read all three moves", "See the full method").
- **Side tab** [tok f]: `position: fixed; right: 0; top: 50%; translate: 0 -50%`, 49 × 183 px, `#2B2B2B`, radius `4px 0 0 4px`, vertical text "Request a quote" Instrument Sans 13 px 500 white ls 0.1em, 16 px dashed 1 px `rgba(255,255,255,.5)` divider, white chevron; hidden < 782 px; z-index above content, below the nav overlay.
- **Figure cards** (ref "Basic Quality", `ref/besthome-s6.png`): white cards on the `#F2F2F2` band, padding 48 px 40 px, 1/3 width with 24 px gap; title H3 1.25rem `#2E4282` centred; number Hanken 300 5rem navy + unit 1.5rem; a full-width grey strip `#EBEBEB` 32 px with a 13 px caption; 3-line text 0.875rem.
- **Grain:** ground and gradient panel carry the SVG noise (opacity 0.035 / 0.06).

---

## 9. Home page (landing longform, 11 blocks)

Anchor ids in brackets; the anchor menu links Method · Weekend · One move · Prices · Crew · Request a quote.

| # | Block (pattern) | Purpose | Layout, photos | Copy |
|---|---|---|---|---|
| 1 | `front-hero` | KV, promise, CTA | **S1 + S2** exactly as §1/§2: H1 left, gradient right with H2 framed and the two vertical lines, wordmark across the bottom, caption on H1, nav top right, side tab. Under the right-hand vertical line, a small horizontal line at bottom-right of the panel (x 1040, y 700): "Office relocation · Antwerp & 150 km" 13 px + text-link "Request a quote" (white variant). | ~25 words |
| 2 | `front-concept` [method intro] | the idea | Section system: "( 01 )" + H2 **"Moved by Monday"**; right half column: H3 "One weekend, one floor, nothing lost." + 2 paragraphs (Friday-evening lift, Monday-morning desks; why weekends; labels as the method). **C1** at 44.4% width (639 × 400 at 1440), absolutely flush to the viewport right edge at the bottom of the block (ref concept image), text column ends 136 px above it. | 120 words |
| 3 | `front-saturday` | atmosphere + proof of care | **S3 trio**: T1 full-bleed parallax, T2 lower-left overlapping, T3 right pulled up −80 px, caption under T2: "Saturday, 09:40. The first floor is empty; every crate on the dollies already knows its desk." | 40 words |
| 4 | `front-method` [method] | the 5 phases + figures | White: "( 02 )" + H2 **"Survey, label, lift"**, right column H3 + 1 paragraph; then the 5 phases as a **single horizontal text row** (5 columns, 1 px `#DEDEDE` top rule each, label "Week −6" etc. 13 px `#6B5B4E`, title H3 1.25rem, 30 words; tablet 2+3, mobile stacked). Then the `#F2F2F2` band (full-bleed, padding 120 px) with the **3 figure cards** (61 hours / 10 working days / 3 weeks), `sp-stagger` + `sp-count`. Text-link "See the full method". | 230 words |
| 5 | `front-weekend` [weekend] | the 61 hours | White: "( 03 )" + H2 **"Friday 18:00 to Monday 07:00"** (may wrap to 2 lines). A **horizontal hours rail** full container width: 1 px ink line, 5 stops with 10 px `#6B5B4E` dots; under each: time Hanken 300 2rem + 2 lines 0.875rem (Fri 18:00 lift and load · Sat 07:00 old floor empty · Sun 12:00 desks built, IT live · Sun 20:00 walk-through with you · Mon 07:00 keys back); `sp-stagger`. Below: **W1** (left, 5/12, 4:5) and **W2** (right, 5/12, 4:5, offset down 120 px — the ref sub-image offset), captions "Saturday, 22:15" / "Monday, 08:05". Mobile: the 5 stops stack as plain rows with the dot left and **no connecting line** (not a vertical timeline graphic). | 110 words |
| 6 | `front-one-move` [one-move] | one job story | Full-bleed `#F2F2F2` band. "( 04 )" + H2 **"One move"**. Left 5/12: **M1** 3:4 (`sp-reveal--wipe`). Right 6/12: H3 "Forty-two desks, two floors down", meta line 13 px (Ghent · 42 desks · Fri 18:00 → Sun 16:40), 3 paragraphs (Friday / Saturday / Monday), a pull quote Hanken 300 1.5rem by Hanne De Smet, studio manager. Below, a row of two 3:4 cards (25% width each, right-aligned, ref works cards): **M2** "The law office that never closed", **M3** "Benches, a rack and a cold room", title + city; then text-link "Read all three moves". | 220 words |
| 7 | `front-prices` [prices] | prices | White: "( 05 )" + H2 **"Prices"**; right column 1 paragraph (fixed quote after the free survey; VAT note). Then the **7-row price table full container width** (§5), no reveal. Note under it 13 px: "All prices in EUR, excl. 21% VAT. Every move starts with a free survey." Text-link "Request a quote". | 60 words + table |
| 8 | `front-crew` [crew] | the people | "( 06 )" + H2 **"The crew"**. **CR** 3:2 at 7/12 left (wipe); right 5/12: 1 paragraph on the crew (employed, not day labour; same leads every weekend), a quote by Kwame Mensah, then names as one caption paragraph: "Lena Vos, Samir Haddad, Mei Lin Hartmann, Kwame Mensah, Ana Ribeiro, Joanna Kowalczyk, Tom Verbeke". No people grid. | 100 words |
| 9 | `front-faq` | 4 short answers | `#F2F2F2` band, "( 07 )" + H2 **"Questions"**, 4 `details` rows full width (What if Monday is a holiday? · Do we pack ourselves? · What about IT? · Insurance), 1 px rules. No photo. | 120 words |
| 10 | `front-quote` [quote] | the CTA | White, padding 200 px: "( 08 )" + H2 **"Request a quote"**; left 4/12 **Q1** 3:4; right column: H3 "Tell us three things", 3 lines (desk count · both addresses · the weekend you have in mind), the big text-link "Request a quote" → Quote page, then phone, email, office hours. | 70 words |
| 11 | Footer | links, legal | `#2D2D2D`, white 70%: `sp-marquee` 3rem line on top, then 3 columns (Isso Relocation + address + hours / pages / Privacy, Terms, Updates + language links), © 2026. | — |

English home ≈ 1,000 words; ≥ 3 narrative paragraphs (blocks 2, 6, 8). CJK home ≥ 500 characters. The CTA "Request a quote" appears in blocks 1 (twice incl. side tab), 4 (nav), 7, 10.

**Home photo positions: 13** (H1, H2, C1, T1, T2, T3, W1, W2, M1, M2, M3, CR, Q1), 13 distinct images.

### First-screen composition (1440 × 900)
Left half: H1, dark, caption down its left edge, logo top-left. Right half: gradient, nav 2 × 3 top right, H2 framed at 930/247 between the two vertical lines, small line + CTA bottom-right of the panel. Bottom band: wordmark across both halves. Fixed side tab at right centre. Forbidden: table, form, search, buttons in colour, centred big headline.

### Comparison with recent home pages
| # | Nuno Workwear | Naru Clinic | Shirabe Research | Sumika Residences | **Isso Relocation** |
|---|---|---|---|---|---|
| 1 | hero KV, 3 photos, giant split word | photo + 3-layer wave + capsule | split row 721/hairline/460 | torn-edge photo + pill nav | **dark photo / gradient halves, framed 3:4 + vertical lines, seam-crossing wordmark** |
| 2 | shop | problem (blob pair) | framed window photo | info bar | **concept: 96 px H2, right half text, image flush right** |
| 3 | trades card mosaic | method panel (body diagram) | THE BRIEF ink band | intro offset photo pair | **full-bleed 16:9 + 2 overlapping photos (parallax)** |
| 4 | ink band floor | services blue band cards | METHOD | three houses sticky rows | **5-phase text row + figure cards on quiet band** |
| 5 | fit rows | one return case | numbers + marquee | glide strip | **horizontal hours rail + 2 photos** |
| 6 | price list band | employer prices | STUDIES ledger | a day in residence | **one move story on quiet band** |
| 7 | 3 crew stories | clinic & people | PEOPLE | parallax band | **price table** |
| 8 | ink band how to order | enquiry | FEES table | rates table | **crew: one photo + names** |
| 9 | visit | — | CONTACT ink band | how a stay is arranged | **FAQ** |
| 10 | — | — | — | voices / enquire band | **request a quote** |
Why not alike: no ink bands (the only dark field is the footer, as on the reference); no wave/blob, torn edge, card mosaic, ledger list, sticky rows or offset pair as the main device; the hero is the only one built on a vertical 50/50 split with a gradient half, a framed small photo and a seam-crossing wordmark; the photo device is an overlapping trio on a full-bleed image; rhythm comes from white ↔ `#F2F2F2` bands and 96 px light-sans section titles, which none of the four use (Shirabe uses uppercase serif titles on ink).

---

## 10. Inner pages (≥ 8 content pages + legal; all reachable from footer, nav or home)

Every inner page: S1 split page head + S2 page wordmark → sections in the section system → closing "Request a quote" block (Q1 omitted where Q1 is the head; use text only) → footer. No sidebar.

1. **Method** (`/method/`): head P1 / METHOD. The 5 phases as 5 sections in the section system (text half right; phase 3 Pack has P2 4:5 on the left); the S3 trio (T1 main, T2 sub-left, F1 sub-right) sits between phase 3 and phase 4. What staff do vs what the crew does; the label system explained (colour zone = team, number = desk).
2. **Prices** (`/prices/`): head C1 / PRICES. Full price table (same 7 rows), what a quote includes, what changes a price (lifts, distance, after-hours building rules), payment (30% at booking, rest 14 days after the move), cancellation (free until 10 working days before).
3. **Moves** (`/moves/`, posts index): head W2 / MOVES. Three story cards 3:4 (M1, M2, M3) in a row, then an intro paragraph. Each **story post**: split head with its M image + MOVE 01/02/03, meta line, 4 sections (Friday / Saturday / Sunday / Monday), S3 trio per §6, client quote.
4. **Planning guide** (`/planning/`): head P2 / PLANNING. Six-week checklist as stacked text sections by week (−6, −3, −2, −1, move week, after) — paragraphs with bullet lists, not a step grid; S3 trio C1 / P1 / Q1; printable checklist link (plain list).
5. **Crew** (`/crew/`): head CR / CREW. The 7 people as **text rows** (name H3 1.5rem, role, 2 sentences) in two columns, no portrait grid; S3 trio T1 / W1 / F1; how crews are trained and insured.
6. **FAQ** (`/faq/`): head T3 / FAQ. 10 questions in `details`, grouped (Before / The weekend / After / Prices); answers quote the fixed facts.
7. **Request a quote** (`/request-a-quote/`): head Q1 / QUOTE. Form (name, company, email, phone, current address, new address, desk count, preferred weekend, message) using the same form approach as Mado Air's pre-order page (no plugin required, submits to the thanks page / mailto fallback); right column: what happens next (Mei Lin calls within one working day, Samir books the survey), phone, email, hours. Form not animated.
8. **Updates** (`/updates/`, waitlist per landing track): head C1 / UPDATES. "Weekend slots for Q1 2027 open on 1 December — join the list to hear first." Email field + consent checkbox; 3 lines on what we send (slot openings, the planning checklist, nothing else).
9. **Thanks** (`/thanks/`): gradient head THANK YOU; W2 4:5; next steps; link home.
10. **Privacy** (`/privacy/`) and **Terms** (`/terms/`): gradient head only; legal text in an 680 px column, no animation.
11. 404 / search: gradient head + "Request a quote" link.

Signature continuation: S1+S2 on all 11; S3 on Method, Planning, Crew and 3 story posts (≥ 4 inner pages ✔); section system everywhere.

---

## 11. Similarity target (≈ 80%) — reference vs ours

| Dimension | Reference (besthome-ep.com) | Isso Relocation |
|---|---|---|
| Ground | `#FFFFFF` + paper grain ≈ 55% | `#FFFFFF` + SVG grain ≈ 55% |
| Text / footer | `#2B2B2B` / `#2D2D2D` | `#2B2B2B` / `#2D2D2D` |
| Quiet band | `rgba(0,0,0,.05)` ≈ `#F2F2F2`, ≈ 10% | `#F2F2F2`, ≈ 12% (figures, one move, FAQ) |
| Hero right half | gradient `#8A8581` → `#4A4A50`, 50% | same, 50% |
| Accent | navy `#2E4282` < 1% | navy `#2E4282` < 2% + label soot bamboo brown `#6B5B4E` < 1% |
| First-screen saturation | 2.0% | ≤ 1.5% target, gate 2.0% |
| Body type | 16 px / 1.75, 400 | 16 px / 1.75, 400 (Instrument Sans) |
| Display H2 | Marcellus 96 px / 400 / 1.0–1.25 | Hanken Grotesk 96 px / 300 / 1.05 (sans per row) |
| Section label | Outfit 15 px / 300, ls 1.2px, "( 01 )" | Hanken 15 px / 300, ls 1.2px, "( 01 )" |
| H3 | 32 px / 500 / 1.5 | 32 px / 500 / 1.5 |
| Nav | 13 px / 500 / ls .08em, 2 columns top right | 13 px / 500 / ls .08em, 2 columns top right |
| Container | 1120 px, calc(100% − 320px) | same |
| Section padding | 160 px | 160 px (96 mobile) |
| Text column | 50%, margin-left auto, 120 px under H2 | same |
| Radius / shadow | 0 / none | 0 / none |
| Hero photo | 720 × 900 left 50%, dark | 720 × 900 left 50%, dark (H1) |
| Hero framed photo | 300 × 400 at 930/247, 2 vertical lines | same (H2) |
| Wordmark | white, full width −40 px, ≈ 93 px, bottom | white, full width −40 px, ≈ 76–80 px cap, bottom |
| Full-bleed + subs | 16:9; 25% lower-left; 40% right −80 px | same (T1, T2, T3) |
| Concept image | 44.4% width, flush right, 1.6:1 | same (C1) |
| Cards | white cards on grey, navy numbers, grey strip | same (figure cards) |
| Side tab | 49 × 183, `#2B2B2B`, radius 4 0 0 4, dashed divider | same |
| Reveal | mask wipe 1.2 s ease-out | `--mask` / `--wipe`, 1.2 s |
| Wordmark motion | clip inset, 0.8 s, `cubic-bezier(.25,.8,.25,1)`, +0.04 s | same (CSS load animation) |
| Tab motion | translateX 40 → 0, 0.8 s `cubic-bezier(.23,1,.32,1)` | 30 → 0 (≤ 30 px rule), same timing |
| Hero photo motion | scale 1.1 → 1, 5 s | sp-parallax 8% drift |
| Marquee | footer 20 s linear, 48/28 px | footer 20 s linear, 48/28 px, navy dot |
| Count-up | 600 ms | sp-count 1.2 s |
| Photos | real, muted, dim warm-grey | real, film grain, muted warm-grey |

Own: photos, copy, logotype. Deviations from tokens (and why): display font is sans not serif (row font_direction sans); lead line-height 2.0 for Latin (2.4 is a Japanese setting); tab slide 30 px (sp ≤ 30 px rule); no slideshow (parallax instead).

---

## 12. Home acceptance checklist (stage-1 review and stage-2 verdict)

1. First screen 1440 × 900 (`?sp-static`): dark H1 photo in the left 50%, `#8A8581` → `#4A4A50` gradient right half, H2 300 × 400 framed between two vertical white lines, "ISSO RELOCATION" wordmark full width at the bottom crossing the seam, 2 × 3 nav top right, photo-edge caption, dark side tab — all six KV items visible.
2. No table, form, search box, coloured button or centred big headline in the first screen; `check-first-screen.py --max 2.0` passes.
3. Mobile 390 × 844: stacked hero, wordmark in two lines inside the photo, no vertical text, no absolute labels, no side tab, no overlap; no horizontal overflow at 390 and 1280.
4. Block order equals §9 (11 blocks); anchors work; "Request a quote" is the only CTA wording.
5. Section system on blocks 2, 4, 5, 6, 7, 8, 9, 10: "( 0n )" `#6B5B4E` label + 96 px Hanken Grotesk 300 H2 + right-half text column, 160 px padding.
6. S3 trio: T1 full-bleed 16:9, T2 lower-left 25% and T3 right 40% each overlapping T1 by ≥ 80 px.
7. Figures 61 / 10 / 3 in white cards on `#F2F2F2` with navy numbers; price table full width at 800 and 1280 px, prices `nowrap` right-aligned; stacked on mobile.
8. 13 photo positions, 13 distinct images, same STYLE, film grain visible, no text/logos/bad hands.
9. Parallax on hero H1 and trio T1 passes `check-parallax.mjs` (desktop + mobile ≥ 6 px, reduced-motion ≤ 1 px); 0 `.sp-reveal` in the hero; reveals in ≤ 6 blocks; nothing left hidden after scrolling to the bottom.
10. Fonts: Hanken Grotesk + Instrument Sans via theme.json fontFace, same in editor and front end; max font size 6rem.
11. Fixed facts (§0) identical on home and every page; prices exactly the 7 rows; 7 named people; 3 moves; hours and address the same.
12. Colours per §3: white dominant, `#F2F2F2` bands, footer the only dark field, navy and soot bamboo brown small; no cream, no red.
