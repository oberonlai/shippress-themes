# Design spec — Yukiki Shoes (yukiki-shoes)

Stage 1 design spec (design director). Implementers follow this literally; when in doubt, the numbers here win over taste.
Inputs: common.md (row b41-4), stage-a.md, brand/reference.md, brand/reference-tokens.md, brand/ref/*.png.
Reference: https://www.regal.co.jp/ (single reference; no secondary).
Industry: independent shoe shop with a fitting stool. Type: `store` (WooCommerce-compatible, not required; the site works fully without it — prices are shown as a price list, a "Book a fitting" path is the conversion).
Imagery: **photo** (real photography, low-key) — see STYLE below. Cut-outs: 0 (hard max 1).
Font direction: **sans**. Similarity target: 80% to the reference on palette, image presentation, motion, decoration and layout; photos and copy are our own.

---

## 1. Signature techniques (borrowed, never diluted)

### T1 — Contact-sheet hero with a timeline caption (REGAL hero slide, https://www.regal.co.jp/, `ref/regal-first.png`)
- **Reference:** a 16:9 black slide holds an 8 x 3 mosaic of 24 abutting square photo tiles (~110px, ~1px gaps, radius 0). Row 1: a man seated among stocked shoe shelves, the camera moving closer until the loafer fills the frame; row 2: leather grain close-ups (russet, then black), tassel; row 3: black tassel loafers on feet, back out to the shelves. Under the mosaic: maker mark + italic caption "year / item   year / item", then 8px dots. Neighbouring slides peek at both sides.
- **Ours (home hero):** left photo column = 58% of the viewport width, flush to the left viewport edge, height = hero height (min 600px, max 760px at 1440). It is a **4 x 3 grid of abutting tiles**, gap 2px, gap colour #1D1A18 (column ground), radius 0. Each tile is a crop of one of three hero photos (H1, H2, H3) via `object-fit:cover` + per-tile `object-position`, reading left-to-right as a zoom sequence exactly like the reference:
  - Row 1 (wide → closer): H1 shop wide @ 10% 40% · H1 @ 45% 50% · H1 stool + fitter @ 70% 60% · H1 hands on heel @ 85% 75%
  - Row 2 (leather): H2 oxblood grain @ 20% 30% · H2 @ 60% 40% · H2 dark brown lace + eyelets @ 30% 80% · H2 welt stitching @ 80% 70%
  - Row 3 (shoe on foot → back out): H3 oxford on foot @ 30% 50% · H3 @ 60% 55% · H3 boxes stacked on open shelf @ 85% 30% · H1 shop wide @ 20% 20%
  - **Peeking neighbour:** a 40px strip of image N1 (next-season last on the shelf) shows at the right edge of the photo column, separated by a 10px white gap (ref: 10px slide margins + 255px peek; scaled down for split layout).
  - **Do not dilute:** tiles must stay abutting, square-cornered, ≥12 tiles, low-key warm leather against dark carpet; the column ground stays near-black (#1D1A18). No rounded corners, no shadow, no gaps wider than 2px, no single big photo instead of the grid.
- **Timeline foot (hero_footer = timeline):** directly under the split, full container width (1200px): a 1px #6B5A4E hairline with 5 ticks (8px dots, #CCCCCC; active #8F3A2C) labelled `10:00 Arrive · 10:10 Measure · 10:20 Try · 10:35 Walk · 10:45 Decide`; above the line an italic caption in Inter Tight Italic 20px "10:00 / Arrive    10:35 / Walk" (the REGAL "2016 / Loafers" grammar, translated to minutes of a fitting).
- **Inner pages:** see §1.4.

### T2 — Numbered-tab gateway (REGAL "RANKING" tabs, `ref/scroll-regal-2700.png`)
- **Reference:** centred caps Latin H2 32px/500 + an 11px sub-label beneath; two tabs (active #000 text with 2px underline, inactive #CCC); a row of five 1:1 product images on pale grey, each with a 24px solid circle (gold/silver/bronze/dark) numbered 1–5 overlapping the image's top-right corner.
- **Ours (home section 2 "WHO WE FIT"):** caps H2 "WHO WE FIT" + 11px sub-label "Five feet we see every week". Three tabs: **Feet · Days · Occasions** (active ink #1D1A18 + 2px #6B5A4E underline, inactive #CCCCCC). Tabs are real buttons (`role=tab`, keyboard arrows), without JS all three panels render stacked and visible (hidden state only under `html.sp-js`-scoped tab script; editor shows all panels). Each panel = five 1:1 photos (radius 0, ground #F4F2F0) in a 5-up row, gap 20px, each with a **24px circle #8F3A2C, white numeral 12px/600**, positioned top: -8px; right: -8px. Under each: H3 16px/500 title + one 14px line.
  - Feet: 1 Wide forefoot · 2 Narrow heel · 3 High instep · 4 One foot larger · 5 Flat arch
  - Days: 1 On your feet all day · 2 Long commute · 3 Desk days · 4 Travel weeks · 5 Weekend walks
  - Occasions: 1 First good pair · 2 Wedding · 3 Interview · 4 Winter boots · 5 Resole and keep
- **Do not dilute:** circles stay 24px, solid accent, on the corner (overlapping the photo edge); five items in one row at ≥1024px.

### T3 — Fitter's note row (REGAL "STAFF STYLING", `ref/scroll-regal-5200.png`, `ref/scroll-regal-7000.png`)
- **Reference:** five 1.4:1 landscape photos in a row (radius 0), under each a 28px round avatar + shop line (11px grey) + name (13px) and a one-line note; centred 1px #000 outline button 278 x 48, radius 0.
- **Ours (home section 6 "FITTER'S NOTES"):** three 1.4:1 photos in a row (3-up, 386px each, gap 20px; see §10 for why 3 not 5), each followed by: 28px round avatar (a crop of a team photo — object-position on T1/T2 images, no extra files), shop line "Yukiki Shoes · Lantern Row", fitter name 13px/500, one-line note 14px. Closing button "Read all notes" 278 x 48, 1px #1D1A18 border, radius 0, hover fill #1D1A18 / white text 0.2s ease-in-out.

### T4 — support system (REGAL section heads and dated rows)
Every section head: centred caps Latin H2 + 11px sub-label (sub-label is a separate paragraph block, editable). Dated rows: date 12px #767069, 70px label box (#F4F2F0, 11px caps), title 15px, 1px #D5D0CB rule between rows.

### 1.4 Carry-over to inner pages (≥4; implement all)
| Page | Technique carried |
|---|---|
| Fittings (`/fittings/`) | T1 — a 4 x 2 contact-sheet header (8 tiles, 2px ink gap) left 58%, title right; full timeline 10:00→10:45 as the page's step list |
| Who we fit (`/who-we-fit/`) | T2 — full numbered tabs (Feet/Days/Occasions), 15 cards with 24px circles |
| Lasts & shoes (`/lasts/`) | T2 circles numbering the 6 lasts + T4 band rows (#F4F2F0) |
| Our fitters (`/fitters/`) | T3 — 7 people in 1.4:1 photo + 28px avatar caption rows |
| Repairs & aftercare (`/repairs/`) | T1 — 4 x 1 contact strip (sole → welt → heel → finished) + T4 dated/labelled rows for the repair menu |
| News (`/news/`), posts | T4 dated rows with 70px label box; post header uses a 4 x 1 strip of the featured image |
| Visit (`/visit/`) | timeline foot reused as "the week" line (Tue–Sun ticks) |

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
REGAL's first screen is a black 16:9 slide in a centred carousel with neighbours peeking. Inside: an 8 x 3 contact sheet of abutting photographs — a man sitting in a stockroom full of shelved shoes, the camera stepping closer frame by frame to the loafer on his foot, then the leather grain (russet, black), the tassel, and back out to the shelves. Under it the maker mark and an italic "2016 / Loafers  2017 / Tassel Loafers" caption, then a dot pager. **Story:** one pair chosen in a calm shelf-lined room, told as a sequence of moments across time. **Signature motion:** slow slide advance (500ms ease, autoplay 3000ms) with peeking neighbours, dots and a caption that changes per slide.

### (2) Our translation (same scene type, same composition grammar, same image type)
An independent shoe shop's single fitting appointment, told minute by minute. Same scene (a seated customer among open shelves of boxed shoes; a fitter kneeling at a low stool easing a leather oxford onto the foot), same abutting-tile contact sheet, same low-key real photography with warm leather against dark carpet, same "time / moment" italic caption — but the time axis is the 45 minutes of one fitting instead of years. Composition converted to **split-photo-left / beside-photo / timeline** (the contact sheet is the left photo, the headline sits beside it on white, the dot pager becomes the timeline foot). Motion concept kept: tiles appear one after another (sequence), and the active tick on the timeline steps along like the pager.

### (3) KV checklist (all must be visible on the 1440 x 900 first screen; static-visible in `?sp-static`)
| # | Reference element | Our version | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | 8 x 3 abutting tiles in a black slide | 4 x 3 abutting tiles, 2px #1D1A18 gaps, radius 0 | left 58%, flush left, full hero height | `sp-stagger` + `sp-reveal` (opacity only, no translate) 0.5s, step 0.06s; reduced motion = final | H1, H2, H3 |
| 2 | Seated man among stocked shelves (row 1) | customer seated on a bench, open shelves with stacked boxes, fitter kneeling at the stool | tile row 1 | — | H1 |
| 3 | Leather grain close-ups (row 2) | oxblood grain, brown lace + eyelets, welt stitch | tile row 2 | hover only: tile img scale 1.04 over 6s | H2 |
| 4 | Loafer on a foot (row 3) | oxford on the customer's foot, fitter's hand at the heel, boxes on shelf | tile row 3 | — | H3 (+H1 last tile) |
| 5 | Italic "year / item" caption + dot pager | italic "10:00 / Arrive   10:35 / Walk" + 5-tick timeline (1px #6B5A4E, 8px dots, active #8F3A2C) | under the split, container 1200px, 96px tall | in `?sp-motion` only: active dot steps every 3s via CSS keyframes (15s loop, `steps`); static elsewhere; reduced motion = first dot active | — |
| 6 | Peeking neighbour slide | 40px strip of the next-season last | right edge of photo column, 10px white gap | none | N1 |
| 7 | One-line coloured notice bar | 40px bar #6B5A4E, white 13px text "Fittings today from 10:00 — book a 45-minute slot" | top, under header | none | — |

Right column (42%, beside-photo text on #FFFFFF, padding 0 6vw 0 4.5vw, vertically centred): 11px caps label "INDEPENDENT SHOE SHOP · LANTERN ROW" (#6B5A4E, letter-spacing .12em) → H1 "Fitted before / it leaves the shelf." (Inter Tight 500, `clamp(2.75rem, 5.2vw, 4.5rem)` = 72px at 1440, line-height 1.05, #1D1A18, max 2–3 lines) → lead 17px/1.6 #4A423C, 3 lines max → outline button "Book a fitting" 278 x 48, 1px #1D1A18 → address line 13px "14 Lantern Row, Halden · Tue–Sun".

---

## 3. First screen composition

**hero_composition = split-photo-left · hero_text = beside-photo · hero_footer = timeline · hero_fingerprint = split-photo-left/beside-photo/timeline**

- **split-photo-left:** a two-column Group (`alignfull`), columns 58 / 42 at ≥1024px; the photo column has no padding and touches the left viewport edge and the header bottom; it is the contact-sheet grid (T1), not a single photo, never full-bleed across both columns.
- **beside-photo:** all headline text sits in the right column on white. Nothing is overlaid on the photo — no text, no gradient, no label on the tiles.
- **timeline:** the hero's bottom element is the 5-tick timeline + italic caption, full container width under both columns, on #FFFFFF, 1px #D5D0CB top rule.
- Header: `nav = overlay` from the row is interpreted as a **white header strip overlaying nothing** — the header (64px logo row + 48px nav row, like the reference's 59+50) sits above the hero on #FFFFFF; then the 40px notice bar. Exactly one top menu.
- At 1440 x 900: header 112 + notice 40 + split 620 + timeline 128 = 900.
- **Mobile 390px:** stacked: notice bar (2 lines allowed) → contact sheet as 4 x 3 grid at full width (tiles ~96px) → text block (H1 `clamp` min 2.75rem, normal horizontal text) → timeline as a horizontal row of 5 ticks with labels under each, labels 11px, may wrap to two lines; no vertical text, no absolutely positioned labels over text or photos. The peeking strip is hidden < 782px.
- Hero gets **no reveal** on text; only the tiles use opacity stagger. No table, form or search in the first screen.

---

## 4. Home sections (order, purpose, layout, images, copy)

| # | Section | Purpose | Layout | Images (ID) | Copy |
|---|---|---|---|---|---|
| 0 | Notice bar | today's slots | 40px #6B5A4E bar | — | 1 line |
| 1 | Hero (T1) | promise + book | split 58/42 + timeline foot | H1, H2, H3, N1 (peek) | label, H1, 40-word lead, button |
| 2 | WHO WE FIT (T2) | audience gateway | centred H2, 3 tabs, 5-up 1:1 cards with numbered circles | A1, A2, A3, A4, A5 (tab 1); tabs 2–3 re-use the same five files with different `object-position` crops — no new files on home | 5 x (title + 12–16 words) |
| 3 | HOW A FITTING RUNS | narrative + process | white; left 5/12: three paragraphs (≥25 words each); right 7/12: horizontal 5-step timeline (same ticks as hero, larger: 1px line, 12px dots, step title + 2 lines each) | none (typographic) | 3 paragraphs ≈ 110 words + 5 step lines |
| 4 | NEW-SEASON LASTS | product shelf | #F4F2F0 band, 4-up cards: 1:1 photo on #E8E6E3, last name 16px/500, leather 13px, price 14px nowrap; T2 circles 1–4 | L1, L2, L3, L4 | 4 x 3 lines + 1 intro line |
| 5 | Shelf parallax band | pause, statement | full-bleed Cover 560px (420px mobile), image P1, `sp-parallax`; centred statement 32px white on a #1D1A18 50% overlay box limited to the text | P1 | 1 sentence ≤ 14 words |
| 6 | FITTER'S NOTES (T3) | trust, people | 3-up 1.4:1 photos + 28px avatar captions + outline button | F1, F2, F3 | 3 x 1 line (Mara, Tomas, Ravi) |
| 7 | FEES & AFTERCARE | prices | #F4F2F0 band; left: intro paragraph (≥25 words); right: price list (6 rows, 1px rules, price right, nowrap) | none | 1 paragraph + 6 rows |
| 8 | VISIT | address, hours | white; two columns: hours list (stacked on mobile) + address/transit paragraph; 1.5:1 photo of the shopfront | V1 | 1 paragraph ≈ 40 words |
| 9 | NOTES | latest posts | T4 dated rows (3 rows) | — | 3 titles |
| 10 | LETTER | newsletter | #1D1A18 band, white text, `shippress_form_slot` newsletter (no reveal) | — | 2 lines + notice |

Home images: H1, H2, H3, N1, A1–A5, L1–L4, P1, F1–F3, V1 = **18 positions from 18 files** (≥8 required ✓). Home English ≥ 300 words, ≥3 narrative paragraphs (section 3 x 3, section 7, section 8).

### Comparison with recent themes' home order
| Theme | Home order | Yukiki difference |
|---|---|---|
| Sazanami Hotel | pinned sticky hero > sliding sheets > room strips > rates > booking | no sticky/pinned, split hero not full-bleed |
| Shirogane College | audience row > hero + booking bar > notices > who > sticky media day > hex band > parallax > tutors > students > fees > steps > intake > letter | gateway is tabbed with numbered circles, after the hero; no day schedule, no hex |
| Seimyaku Clinic | hero > message > stacked sheets > ruled rows with flush photos > stories > team > fees > visit > notes > letter | no stacked sheets; contact-sheet grid hero; product shelf band |
| Fuchi Glazing | slanted hero + info bar > survey plate > steps > catalogue squares > why x2 > photo strip > projects > prices > ask > waitlist | no slant; steps are a horizontal timeline tied to the hero foot; people row with avatars |
Reasoning: the hero grid (12 abutting tiles) and the tabbed 5-up numbered gateway are not used by any of the four; the section rhythm (white / #F4F2F0 / white alternation with caps heads) comes from REGAL.

---

## 5. Inner pages (≥8 + post)
| Page (slug) | Key content |
|---|---|
| About (`/about/`) | founded 2011 by Mara Lindqvist; why fit first; the room (one stool, 640 boxes, 6 lasts); 2 photos (V1 header, H3) |
| Fittings (`/fittings/`) — booking page | T1 4 x 2 header; the 45-minute timeline (5 steps with full text); what to bring (your usual socks, the shoes you wear most); `shippress_form_slot` contact kind under "Book a fitting" with mailto fallback |
| Who we fit (`/who-we-fit/`) | T2 full tabs; 15 cards; "not sure? book anyway" |
| Lasts & shoes (`/lasts/`) | 6 lasts with T2 circles, leather options, sizes 35–47, half sizes; price per model (same as §8) |
| Repairs & aftercare (`/repairs/`) | T1 strip, repair menu (rows), turnaround 10 working days, free first stretch |
| Our fitters (`/fitters/`) | 7 people (T3 rows) |
| Fees (`/fees/`) | full price table (8 rows), deposit policy, payment |
| Visit (`/visit/`) | address, hours, the week line, transit, accessibility (step-free, bench seat) |
| News (`/news/`) | posts index (role posts, empty content) |
| Newsletter (`/newsletter/`) | standalone subscribe page (form contract) |
| Contact (`/contact/`) | email, phone, form slot with mailto fallback |
| Post | "Why we measure both feet, every time" (category Fitting, tags feet, lasts) + 2 more posts |

---

## 6. Palette
Source: REGAL tokens (a), adjusted ≤5% lightness where noted; main colour from the plan (煤竹 #6B5A4E) replaces REGAL's slate-blue notice (#4A66A8) because a blue bar reads as a corporate notice, not a quiet shop — same role, same ~4–5% share.
| Token | Hex | Role | Share (first screen) | Source token |
|---|---|---|---|---|
| base | #FFFFFF | page ground, right hero column | ~35% | (a) ground #FFFFFF |
| band | #F4F2F0 | alternating bands, card ground | 0% fs / ~30% page | (a) #F6F6F6, −1% L, slight warm |
| tile | #E8E6E3 | product image ground | — | (e) #E8E8E8 |
| ink | #1D1A18 | headings, contact sheet ground, letter band | ~30% | (a) #000000 softened +2% L |
| text | #4A423C | body text | — | (a) #333 → warmed |
| muted | #767069 | dates, sub-labels | — | (a) grey labels |
| line | #D5D0CB | hairlines, rules | — | (a) #CCCCCC |
| dot | #CCCCCC | pager/timeline dots, inactive tab | — | (d) #CCCCCC |
| main | #6B5A4E | notice bar, timeline line, tab underline, hover | ~5% | plan 煤竹 (replaces #4A66A8 role) |
| accent | #8F3A2C | numbered circles, active dot | ≤2% | (a) leather #CB5245, darkened |
**First-screen saturated share (S>0.5, V>0.25):** target ≤ 8%, hard max 15% (leather in tiles + accent dots only). Check with scripts/check-first-screen.py.

## 7. Type (sans)
- Headings Latin: **Inter Tight** (500/600, + 500 italic for the caption) — closest to REGAL's Inter. Body Latin: **Public Sans** (400/500).
- Heading stack: `"Inter Tight", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`; `:root:lang(zh*)` display: `"Inter Tight", "Noto Sans TC", sans-serif`; `:lang(ja)` display: `"Inter Tight", "Noto Sans JP", sans-serif`.
- Body stack: `"Public Sans", system-ui, -apple-system, "Segoe UI", sans-serif`; zh body: `"Public Sans", "PingFang TC", "Microsoft JhengHei", sans-serif` (no bundled CJK in body, per repo gate); ja body: `"Public Sans", "Hiragino Sans", "Yu Gothic", sans-serif`.
- All fonts via theme.json `fontFamilies` + `fontFace` (woff2 in assets/fonts, zh-TW and ja subset files of Noto Sans TC/JP 500 for headings, made with the Hokuto/Hada workaround); same in editor and front end; copy shared/inc/editor-lang.php since style.css uses `:lang(`.
- Scale (theme.json): xs 0.6875rem (11px, sub-labels) · sm 0.8125rem · base 0.9375rem (15px; ref 14px +1) · md 1.25rem (20px H3, ref (b)) · lg 2rem (32px section H2, ref (b) 32/500) · xl 3rem · **xxl clamp(2.75rem, 5.2vw, 4.5rem)** (H1; max 4.5rem ≥ 4.25rem ✓).
- Line heights: body 1.6 (ref 1.5 + 0.1 for longer copy), H2 1.0 (ref 32/32), H1 1.05, CJK body 1.85, CJK headings 0.75 x Latin size. H2 caps Latin, weight 500, letter-spacing 0 (ref: not tracked); sub-label 11px, letter-spacing .08em. fr/de: `hyphens:auto`.

## 8. Fixed facts (identical on home, inner pages and all five languages)
- **Name:** Yukiki Shoes. **Founded:** 2011. **Address:** 14 Lantern Row, Halden (fictional). Email hello@yukikishoes.example, phone +00 21 555 0148.
- **Hours:** Tue–Wed 10:00–18:00 · Thu 10:00–20:00 · Fri–Sat 10:00–18:00 · Sun 11:00–16:00 · Mon closed (repairs collected Tue).
- **Fitting:** 45 minutes; slots 10:00, 11:30, 14:00, 15:30, 17:00 (Thu also 18:30). Steps: 10:00 Arrive · 10:10 Measure · 10:20 Try · 10:35 Walk · 10:45 Decide.
- **Prices (8):** Fitting appointment €20, credited to any pair · Arden oxford €265 · Hollis derby €245 · Wren loafer €230 · Moor Chelsea boot €290 · Full leather resole €85 · Heel block €35 · Stretch and adjust €20 (first stretch free with a pair). Home fees section shows 6 rows: fitting, Arden, Moor, resole, heel, stretch.
- **Lasts (6):** Arden (round toe, standard), Hollis (wide forefoot), Wren (narrow heel), Moor (high instep), Fen (soft square toe), Teal (low volume). Home shows Arden, Hollis, Wren, Moor.
- **People (7):** Mara Lindqvist (founder, head fitter) · Tomas Okafor (fitter) · Inès Duval (fitter) · Ravi Mehta (repair bench) · Hanna Weiss (buyer, lasts) · Leo Castillo (weekend fitter) · June Park (front of shop). Home T3 row: Mara (F1), Tomas (F3), Ravi (F2).
- **Stories (3):** a nurse on 12-hour shifts (Hollis), a groom with one foot larger (Arden, split sizes), a walker resoling a nine-year-old pair (Moor).
- Shelf: 640 boxes, one fitting stool, two benches. Sizes 35–47 incl. half sizes. Repairs: 10 working days.

## 9. Responsive rules
- 390px first screen: no vertical text, no absolutely positioned labels over text; the only overlapping element on home is the 24px circle on the gateway/last cards (it overlaps the image, never text).
- Price lists/tables: at ≥782px the table/list is the full content width of its column (`width:100%`), price column `white-space:nowrap; text-align:right`, never clipped (check at 800 and 1280). Below 782px every table stacks (each row becomes label line + price line). Hours list likewise.
- Grids: gateway 5-up → 3-up at <1024 → 2-up at <782 (no horizontal swipe rows); notes 3-up → 1-up at <782; lasts 4-up → 2-up at <782.
- No horizontal overflow at 390 / 1280. Tabs remain visible as a 3-item row at 390 (13px).

## 10. Images (18 files, one STYLE; IMAGERY = photo)
STYLE (all images, verbatim, one string for the whole theme): `Low-key documentary photograph inside a small independent shoe shop, warm tungsten light from one side, deep charcoal carpet and dark walnut open shelves with stacked plain unbranded shoe boxes, rich oxblood and chestnut leather, soft falloff into shadow, natural film grain, 35mm lens, calm and unhurried, realistic hands and faces, diverse adults, modern international setting, no text, no logos, no brand marks, no Japanese elements`
(Low-key follows the row's photo_direction and REGAL's hero: warm leather against grey/dark carpet.) Each file ≤300 KB, ≤2000px, webp. Read every image; regenerate on text, logos, broken hands/faces or style drift.

| ID | Subject / composition | Home position (✓ = home) | Inner page(s) |
|---|---|---|---|
| H1 | wide: customer seated on a bench, fitter kneeling at a low stool easing a leather oxford onto the foot, open shelves of boxes behind; 4:3, subject centre-right | ✓ hero tiles row 1 + last tile | Fittings header tiles; Fitters (avatar crop) |
| H2 | macro: oxblood calf grain, brown waxed lace and eyelets, welt stitching; 4:3 | ✓ hero tiles row 2 | Repairs contact strip |
| H3 | low angle: oxford on a foot resting on the fitting stool, fitter's hand at the heel, boxes on shelf right; 4:3 | ✓ hero tiles row 3 | About (2nd photo); Fitters (avatar crop) |
| N1 | next-season last on a walnut shelf, side light; 3:4 | ✓ hero peek strip | Lasts header |
| A1 | socked foot on a measuring device; 1:1 | ✓ gateway 1 | Who we fit |
| A2 | hand holding a shoe's heel cup; 1:1 | ✓ gateway 2 | Who we fit |
| A3 | lacing over a high instep; 1:1 | ✓ gateway 3 | Who we fit |
| A4 | two shoes of slightly different size side by side on carpet; 1:1 | ✓ gateway 4 | Who we fit |
| A5 | ankles-down, a person standing on the shop floor in derbies; 1:1 | ✓ gateway 5 | Who we fit; Fitters (crop) |
| L1 | Arden oxford, side view on walnut shelf; 1:1 | ✓ lasts 1 | Lasts |
| L2 | Hollis derby; 1:1 | ✓ lasts 2 | Lasts |
| L3 | Wren loafer; 1:1 | ✓ lasts 3 | Lasts |
| L4 | Moor Chelsea boot; 1:1 | ✓ lasts 4 | Lasts |
| P1 | full shelf wall of stacked boxes, a ladder, the stool in front; 21:9, subject lower third | ✓ parallax band | Visit header (parallax) |
| F1 | fitter writing a size card at the counter; 1.4:1 | ✓ notes 1 | Fitters |
| F2 | repair bench, hands with a leather sole and an awl; 1.4:1 | ✓ notes 2 | Repairs header; Fitters |
| F3 | fitter and customer walking the shop-floor test strip; 1.4:1 | ✓ notes 3 | Fittings; Fitters; News post featured |
| V1 | shopfront at dusk, warm window, shelves visible; 1.5:1 | ✓ visit | About header; Contact; Fitters (crop) |

Home: **18 image positions from 18 files** (≥8 ✓). In the hero grid the 12 tiles are crops of H1/H2/H3 inside one grid (one image position each). No file repeats in another home section; no inner page shows the same file twice. Tabs 2–3 of the gateway reuse A1–A5 with different `object-position` (same section, hidden panel; acceptable because only one panel is visible at a time).
Home notes row (T3) is **3-up** (F1–F3, 3 x 386px, gap 20px) to stay within 18 files — REGAL also uses 3-up rows (tokens c); the T3 grammar (1.4:1 photo + 28px avatar + shop line + name + note + 278 x 48 outline button) is kept exactly. The Fitters page shows all 7 people as 1.4:1 + avatar rows.

## 11. Scroll effects (from stage-a candidates; REGAL itself has none beyond autoplay/hover — values below follow its 500ms / 0.2s ease timings)
| Effect | sp-* | Section | Trigger / time / easing | Source |
|---|---|---|---|---|
| Hero tile sequence | parent `sp-stagger`, tiles `sp-reveal` (opacity only) | Home hero photo grid only (not text) | IntersectionObserver on load, 0.5s, step 0.06s, cubic-bezier(.2,.7,.2,1) | REGAL slide opacity 0.3s + autoplay sequence |
| Gateway / notes rise | parent `sp-stagger`, cards `sp-reveal sp-reveal--up` (20px) | Home §2 cards, §4 lasts, §6 notes; Who we fit, Lasts, Fitters pages | enter 15%, 0.6s, step 0.1s | REGAL tab switch / slick speed 500ms |
| Shelf parallax | `sp-parallax` | Home §5 | CSS scroll-driven, linear | stage-a 轉化 3 |
| Count | `sp-count` | the "640 boxes · 6 lasts · 45 minutes" line in §3 (not the price list) | 1.2s ease-out | stage-a 轉化 4 |
Not on: hero text, forms, price lists, legal text, the newsletter band. Translate ≤ 20px.

## 12. Parallax (required)
- Block: Home §5 "Shelf parallax band" — outer `core/cover` (alignfull, min-height 560px desktop / 420px mobile) with class `sp-parallax`, style `--sp-par: 10%` (desktop), `@media (max-width:781px){ --sp-par: 6% }` (kept on mobile).
- Background: P1 (shelf wall, 21:9) as the Cover background (`.wp-block-cover__image-background`), focal point 50% 60%.
- Foreground (static): centred 32px Inter Tight 500 white statement "Six hundred and forty boxes. One stool. Your two feet." inside a Group with #1D1A18 at 55% opacity, padding 24px 32px. Text never in a moving layer.
- Reference correspondence: REGAL's slide advance (photo plane moving under a fixed caption frame, 500ms ease) → translated to the photo plane drifting under a fixed caption as you scroll. Inner: Visit header uses the same `sp-parallax` with P1 at `--sp-par: 8%`.
- Must pass check-parallax.mjs (≥6px difference, 0 with reduced motion).

## 13. Forms (form contract v1 — steps/form-contract-v1 present)
- Copy pipeline/assets/forms files unchanged (inc/shippress-forms.php, assets CSS + editor JS); require from functions.php.
- **Fittings page** (booking) under "Book a fitting" and **Contact page** under "Write to us": `shippress_form_slot(['kind'=>'contact','fallback'=>$fallback])`, fallback = the existing literal mailto button `mailto:hello@yukikishoes.example?subject=…` (label `_t('contact_email')`), never a link to /contact/. With CF7/WPForms present, their first form renders (expected fields: name, email, phone optional, preferred slot select [10:00/11:30/14:00/15:30/17:00], usual size, message textarea, consent checkbox).
- **Newsletter page** (`/newsletter/`, standalone, not an alias of News): heading "Letters from the shelf", 2 sentences (monthly, new lasts, repair days), then `shippress_form_slot(['kind'=>'newsletter', 'email'=>'hello@yukikishoes.example', 'label'=>_t('forms_email'), 'submit'=>_t('forms_subscribe'), 'notice'=>_t('forms_mail_notice'), 'subject'=>_t('forms_mail_subject')])`. Home §10 LETTER band and the footer subscribe line use the same slot. Without plugins: required email input + submit, native mailto POST, notice "Opens your email app. Send the request to subscribe; you are not subscribed yet." MailPoet (explicit id) → MC4WP preferred; CF7/WPForms only via an explicit newsletter form id.
- Tokens in style.css: light ground `--sp-form-accent: var(--wp--preset--color--ink)`, `--sp-form-on-accent: #FFFFFF`, `--sp-form-radius: 0`, `--sp-form-focus: var(--wp--preset--color--main)` (2px outline, 2px offset), `--sp-form-border: #D5D0CB`, `--sp-form-surface: #FFFFFF`, `--sp-form-text: #1D1A18`. Dark ground (LETTER band, footer #1D1A18): `--sp-form-accent: #FFFFFF`, `--sp-form-on-accent: #1D1A18`, `--sp-form-surface: transparent`, `--sp-form-border: #767069`, `--sp-form-text: #FFFFFF`, focus #D5D0CB. Error: text + 1px border #8F3A2C on light, #E8A598 on dark. Success: inherits section text colour with a 3px #6B5A4E left rule (on dark: #D5D0CB). Inputs 48px tall (matches 278 x 48 buttons), submit = outline button style.
- i18n: semantic keys in inc/i18n/en.php (`forms_email`, `forms_subscribe`, `forms_mail_notice`, `forms_mail_subject`, `contact_email`, plus labels for the booking intro) translated in en, zh-TW, ja, fr, de; `L10N_SEMANTIC=1` on extract.
- No reveal on forms; no form in the home first screen (LETTER is the last home section).

## 14. Similarity to the reference (target 80%)
| Dimension | REGAL value (token) | Yukiki value |
|---|---|---|
| Ground / bands | #FFFFFF / #F6F6F6 (a) | #FFFFFF / #F4F2F0 |
| Hero ground | #000000 ~29% (a) | #1D1A18 ~30% |
| Text / hairline | #333 / #CCC (a) | #4A423C / #D5D0CB (dots #CCCCCC) |
| Notice bar | 40px slate #4A66A8 (a)(c) | 40px #6B5A4E (role kept, colour from plan) |
| Accent | leather #CB5245 ~5% (a) | #8F3A2C ≤2% + leather in photos |
| Type | Inter sans, body 14/1.5, H2 32/500 caps + 11px sub (b) | Inter Tight / Public Sans, body 15/1.6, H2 32/500 caps + 11px sub |
| Container | 1200px (c) | 1200px (contentSize 760px for prose) |
| Section rhythm | 70 top / 30 under H2 / 60–80 between (c) | 72 / 32 / 72 (spacing presets 40, 50, 60) |
| Grids | 5-up 20px gap, 4-up, 3-up (c) | gateway 5-up 20px, lasts 4-up 20px, notes 3-up 20px |
| Radius / shadow | 0 / none; chips 4px (d) | 0 / none; tab chips 4px on Lasts filters |
| Buttons | outline 1px #000, 278 x 48, 0.2s ease-in-out (d) | same, #1D1A18 |
| Hero imagery | 8 x 3 abutting tiles, ~1px gap, radius 0 (e) | 4 x 3 abutting tiles, 2px gap, radius 0 |
| Product images | 1:1 on #E8E8E8 (e) | 1:1 on #E8E6E3 |
| Staff row | 5-up 1.4:1 + 28px avatar caption (e) | 3-up home / 7 on Fitters, 1.4:1 + 28px avatar caption |
| Badges | 24px numbered circles top-right (d) | 24px #8F3A2C circles top-right |
| Pager | 8px dots #CCC, 28px pitch (d) | 8px timeline dots #CCCCCC, active #8F3A2C |
| Hero motion | autoplay 3000ms, 500ms ease; opacity 0.3s (g) | tile stagger 0.5s/0.06s; timeline step 3s (sp-motion) |
| Hover | 0.2s ease-in-out (g) | 0.2s ease-in-out |
| Scroll | none (g) | stagger reveal, parallax 10%, count (required by pipeline) |

## 15. Home acceptance checklist
- [ ] Hero is split-photo-left / beside-photo / timeline; 4 x 3 abutting tiles (2px, radius 0) left 58% flush left; H1 on white at right; timeline with 5 ticks + italic caption under the split; peek strip at ≥782px; notice bar #6B5A4E.
- [ ] All 7 KV checklist items visible at 1440 x 900 in `?sp-static`.
- [ ] No text over photos in the hero; no table/form/search in first screen; saturated share ≤15% (target ≤8%).
- [ ] H1 renders ≥ 4.25rem at 1440 (72px).
- [ ] Section order exactly §4; caps H2 + 11px sub-label on every section; white / #F4F2F0 alternation.
- [ ] Gateway: 3 working tabs, 5 cards, 24px numbered circles on corners.
- [ ] Lasts: 4 cards, names/prices match §8.
- [ ] Parallax band §5 passes check-parallax.mjs desktop + mobile.
- [ ] Notes row: 3 x 1.4:1 + 28px avatars + names from §8 + 278 x 48 outline button.
- [ ] Fees: 6 rows, prices = §8, full width at ≥782 with nowrap right-aligned prices; stacked on mobile.
- [ ] Hours match §8; address 14 Lantern Row, Halden.
- [ ] ≥8 images (18 positions, 18 files), no file repeated across home sections, 0 cut-outs.
- [ ] ≥250 English words, ≥3 narrative paragraphs ≥20 words.
- [ ] One top menu; fonts identical in editor and front end; auto-gates pass at 390 and 1280.
- [ ] LETTER band uses newsletter slot with visible email + submit and the mailto notice; no reveal on it.
