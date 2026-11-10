# Kantei Valuers: design spec (stage 1, binding for implementation)

Slug `kantei-valuers`, commercial property valuer, **landing** theme (`type: landing`, page_structure `landing-longform`, archetype `sticky-media`, hero `full-bleed-photo`, first screen `full-bleed-photo-info-bar`, nav `top-bar`, design row b26-5). Home is one long conversion page with an in-page anchor menu and **one** repeated call to action. Five languages: en, zh-TW, ja, fr, de. WooCommerce not needed (declare compatibility only).

Reference: **Booster** (regional insurance agency, S5-Style finance-insurance, photographic) — https://www.boo-ster.co.jp/ . Secondary: none. Measurements: `brand/reference-tokens.md`, cited below as `tok(a)` … `tok(g)`. Screenshots: `brand/ref/booster-first.png` (first screen), `ref/scroll-booster-2700.png` (two panels), `ref/scroll-booster-4500.png` (contact band + footer), `ref/booster-sheet.png` (whole page). We borrow structure, the three signature techniques, colour relationships, type rhythm, motion and the key-visual concept. We do **not** copy Booster's photos, film, copy, slogan, logo mark, ghost typography or the orange mission band.

One call-to-action wording everywhere (header pill, hero ring, request band, footer, inner pages): **"Request an appraisal"** (ring label: **"Instruct"**) → `/contact/`. On Home the header pill and the ring scroll to `#request`, whose pill goes to `/contact/`. Localised once in brand.md and reused verbatim.

Imagery: **photo** (stage-a IMAGERY: photo; Booster's first screen is a documentary film still and every other image is a photograph of people at work; no illustration).

---

## 0. Fixed brand facts (identical on every page and in all five languages)

| Fact | Value |
|---|---|
| Name | Kantei Valuers ("kantei" = an appraisal; the practice values commercial buildings) |
| Founded | **2011** by Orla Brennan, formerly a panel valuer for a lender's commercial loan book |
| Office | 27 Merchants Row, Dublin 2, Ireland (fictional address; local address formats per language in brand.md) |
| Office hours | Mon–Fri **08:30–17:30** (Irish time) |
| Site hours booked | Mon–Fri **08:00–16:00** |
| Phone / mail | +353 1 000 0611 · instruct@kantei.example |
| Team | **9** people; 7 named below |
| Coverage | within **150 km** of Dublin with no travel charge; further by quote |
| Reply | written fee quote within **1 working day** of a request |
| Site hour | **60 minutes** on site for one property (a second hour, no extra fee, for buildings over 5,000 m²) |
| Report | signed written report within **10 working days** of the site hour, once the documents in §0 "Documents" are received |
| Report length | about **20 pages** + appendices (plans, photographs) |
| Currency | **EUR, excluding VAT**, in every language (no converted prices) |

Named people (7) — rule rows of names, never a portrait grid:
1. **Orla Brennan** — founder, principal valuer; shops and high-street retail.
2. **Kwame Asante** — valuer; offices and mixed-use blocks.
3. **Inès Moreau** — valuer; industrial units and warehouses.
4. **Tobias Reinholt** — lease analyst; reads every lease, rent roll and break clause.
5. **Priya Nair** — comparables researcher; keeps the practice's transaction file.
6. **Daniel Kowalczyk** — report editor; checks every report before it is signed.
7. **Aoife Gallagher** — instructions desk; books site hours and sends every fee quote.

Instructions accepted (two kinds = T2 panels):
- **Lender instruction** — a bank or lender needs a market value of a commercial property offered as loan security (purchase, refinance, loan review). Report in the lender's required format when asked.
- **Owner or seller instruction** — an owner, buyer or seller needs a value before a sale, a purchase, a lease renewal or rent review, or for company accounts.

We value (5): shops and high-street retail units · offices · industrial units and warehouses · mixed-use blocks (shops with flats or offices above) · small hotels and leisure buildings.
We do not value (4): private homes · development land without planning permission · petrol stations and specialist trading property · buildings outside Ireland.

The site hour (fixed four parts; Home `#site-hour`, Site hour page, five languages):
- **00–10 min — The plan.** The owner opens the lease plan; we agree the boundaries, the entrances and what is let to whom.
- **10–35 min — The tape.** Every floor measured with tape and laser to net internal area; frontage and depth for shops.
- **35–50 min — The condition.** Roof, services, fire escapes, accessibility and visible defects, photographed for the appendix.
- **50–60 min — The documents.** Questions about leases, rents and running costs; we agree the document list and the report date.

Documents (asked for before or at the site hour): leases and side letters · rent roll · title plan · service-charge budget · building insurance schedule · any planning permissions.

What a report covers (7 rows; Home `#report`, Report page):
| Pages | Section | One line |
|---|---|---|
| pp. 1–2 | Summary and the figure | market value, valuation date, basis of value, the valuer's signature line |
| pp. 3–4 | Instruction and assumptions | who instructed, for what purpose, any special assumptions |
| pp. 5–8 | The property | location, description, measured floor areas |
| pp. 9–10 | Condition | what we saw on the site hour, in plain words |
| pp. 11–13 | Tenure and leases | rents, terms, breaks, reviews, tenant covenant |
| pp. 14–17 | Evidence | the sales and lettings we compared, and why |
| pp. 18–20 | Valuation and risks | method, figures, risks to value, appendices list |

Fees (7 rows; Home `#fees`, Fees page, Terms; all languages identical):
| # | Instruction | What you receive | Fee (EUR, excl. VAT) |
|---|---|---|---|
| 1 | Shop or retail unit, up to 500 m² | site hour + full report | 1,450 |
| 2 | Office building or floor, up to 2,000 m² | site hour + full report | 2,400 |
| 3 | Industrial unit or warehouse, up to 5,000 m² | site hour + full report | 2,650 |
| 4 | Mixed-use block, up to 12 units | site hour + full report | 3,200 |
| 5 | Portfolio of 2–5 properties, one owner | one site hour per property + one combined report | from 2,100 per property |
| 6 | Lease renewal or rent review opinion | site hour + letter of opinion (no full report) | 950 |
| 7 | Update of our own report within 12 months | desk update, no site hour unless the building changed | 650 |
Notes (identical everywhere): fee fixed in the written quote before the site hour · travel within 150 km included · invoice sent with the signed report, payable in 30 days · the fee never depends on the figure.

Copy never promises a figure, a loan approval, a sale price or a timeline beyond the two fixed ones (1 working day quote, 10 working days report). No real lenders, bodies, accreditations, people or brands are named.

Recent instructions (3 stories, fictional; Home `#cases`, posts 1–3, About):
1. **Corner shop with a flat above, Drogheda** — Lender instruction for a refinance; the lease plan showed a rear yard the owner had forgotten was let. Report in 8 working days. Photo H16.
2. **Two-storey office, Kilkenny** — Owner instruction before a sale; two floors measured, one let and one vacant, valued separately. Photo H15.
3. **Warehouse lease renewal, Naas** — Lease renewal opinion for the tenant's landlord; five comparable lettings within 20 km. Photo H14.

Newsletter (landing rule: the waitlist page): **Rent Notes** — one printed-style page a quarter, by email: the lettings and sales the practice compared that quarter, described in words, never as a forecast. The first issue goes out in **January 2027**; the page is the early-access list.

A day (brand.md must include the English word "day"): 08:00 first site hour; 11:00 second site hour or desk; 14:00 lease reading and evidence; 16:30 Daniel's report check; 17:30 desk closes.

---

## 1. Signature techniques (three, all obvious at a glance)

### T1. Full-bleed documentary film still with a white logo tile, a white floating nav slab with one pill, and a bottom-left two-line headline over a 20 px rule (Booster first screen, https://www.boo-ster.co.jp/ , `ref/booster-first.png`, `tok(b)(c)(d)(f)(g)`)
- Booster: a 16:9 film still of the agent talking across a desk fills the screen edge to edge; a **white square logo tile 169 × 169 px** (radius 3.75 px) sits **19 px** from the top-left corner on the photo; a **white slab** carries the nav and the **orange pill** at the top-right, 19 px from the edges, 64 px tall; the bold two-line white headline sits **bottom-left** at x ≈ 75 px, followed by a **20 px white rule** and a two-line sub-line (local + Latin uppercase). The photo resolves from blur.
- Kantei: Home `#top` (section 3 below), plus every inner page head (shorter photo band). Same geometry at 1440: tile 169 × 169 at 19/19, slab 64 px tall at top 19 / right 19, headline left edge at x = 75 px, rule 20 × 2 px white, sub-lines below it.
- Contrast: white tile and white slab against a mid-grey graded photo; headline pure white over a bottom-up scrim; the only saturated mark on the screen is the pill.
- Must not be diluted: the tile must be a white **square** (not a wordmark floating on the photo), the slab must be a **white box** floating off the edges (not a transparent bar, not a full-width white header), the headline must be **bottom-left** (not centred, not top), the 20 px rule must be visible, the photo must be full-bleed edge to edge (no inset frame, no split).

### T2. Two full-photograph instruction panels side by side with no gap, dark scrim, sub-label + heading bottom-left and a 44 px outline circle arrow, half-backed by the dark band (Booster "for business / for personal" panels, `ref/scroll-booster-2700.png`, `tok(c)(d)(e)(f)`)
- Booster: two photographs 682 × 675 px each, touching (no gutter), the left one starting at the container edge (x ≈ 75) and the right one running to the right edge of the window; a dark scrim; at the bottom-left of each, a line icon, a small uppercase Latin sub-label, a bold heading, 4–5 lines of white text and a **44 px outline circle with an arrow**; the navy band runs behind the **upper half** of the pair and the page turns white below.
- Kantei: Home `#instructions` — left panel **"Lender instruction"** (photo H03), right panel **"Owner or seller instruction"** (photo H04). Geometry at 1440: left panel x 75–720 (645 × 675), right panel x 720–1440 (720 × 675), gap 0; left panel radius 3.75 px on its two outer-left corners only, right panel square. Lead band `#4E555C` full-bleed from the section top down to **55 %** of the panel height, white below.
- Contrast: white type on scrim `linear-gradient(to top, rgba(29,34,38,.78) 0%, rgba(29,34,38,.40) 55%, rgba(29,34,38,.12) 100%)`; circle 1 px white.
- Must not be diluted: the two panels must **touch** (gap 0) and be **photographs** (not cards with a photo on top), the right panel must bleed to the window edge, text sits **on** the photo bottom-left, the circle arrow stays an outline 44 px circle, the band must cut behind the upper half.

### T3. Strip of three tall photographs flush to the window's left edge, rising 40 px above a dark band, with the phone number and the one pill on the right (Booster contact band, `ref/scroll-booster-4500.png`, `tok(c)(e)(f)`)
- Booster: a navy band about 416 px tall; at its left, three portrait photos of staff on the phone, edge to edge, 0–577 px wide, the strip's top **above** the band's top edge (≈ 20–40 px) and its bottom ≈ 56 px above the band's bottom; on the right a small orange "CONTACT" label, bold heading, one line, a phone figure with icon, hours in brackets, and the orange pill; a white page-top disc sits on the band's bottom edge at the right.
- Kantei: Home `#request` (the conversion close) and every inner page close except Thanks / Privacy / Terms. Geometry at 1440: band 440 px tall, lead gradient; strip x 0–577, three photos H11, H12, H13 each 192 × 424, strip top at **−40 px** (rises above the band), bottom at 384 px (56 px above the band bottom); content column from x = 720.
- Must not be diluted: the strip must touch the **window's left edge** (not the container), the three photos must touch each other, the rise above the band must be visible (≥ 32 px), the phone figure must be large (1.75rem) and the pill must be the accent colour.

### Supporting details (required, not counted)
- Booster news rows → our **report rows** (`#report`): 100 px rows, 1 px `#DADFE2` bottom rule, a **black chip** (`#1D2226`, white 0.6875rem 700, padding 2 px 8 px, radius 0) holding the page range, title, one line. Also on the News page (chip = category).
- Booster's outline pill with a long arrow (radius 30 px, 1 px border) for every secondary link ("About the practice →").
- Booster page-top disc (white, 72 px) on the request band's bottom edge.
- Archetype `sticky-media`: the site-hour **card deck** (§5 block 6): four split cards that pin one over the other.

### Continuation to inner pages (required)
| Page | T1 (photo head, tile, slab, bottom-left heading + rule) | T2 (two touching photo panels) | T3 (strip + band close) |
|---|---|---|---|
| About | ✓ H17 | "Lender desk / Owner desk" (H03, H04) with who answers each | ✓ |
| Instructions | ✓ H04 | full size (H03, H05), longer text (60 words each), scope lists under it | ✓ |
| Site hour | ✓ H05 | "Before the hour / After the hour" (H10, H17) | ✓ |
| Report | ✓ H10 | "Lender format / Owner format" (H03, H15) | ✓ |
| Fees | ✓ H14 | "Fees for lenders / Fees for owners" (H03, H04) | ✓ |
| Contact | ✓ H01 | "Instruct as a lender / Instruct as an owner" (H03, H04), circle arrows = mailto with subject | ✓ (no pill duplicate: the pill scrolls to the mail lines) |
| Rent Notes (newsletter) | ✓ H18 | "What an issue holds / Who it is for" (H17, H15) | ✓ |
| News, Article | ✓ H16 (News) / featured image (Article) | — | ✓ |
| Thanks, Privacy, Terms | pale head (`#F4F5F5`, 360 px) with tile, slab, bottom-left heading + rule | — | — |

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
Booster's first screen is one full-bleed film still: the agent, in a blue jacket, talks and smiles across a desk; the **client's shoulder** fills the left foreground, out of focus, so the viewer sits in the client's chair. The white logo tile and white nav slab float at the top corners; a two-line bold white slogan ("Strong today, light for the future"), a short white rule and a bilingual company line sit at the bottom-left; a thin **orbit ring badge** with two travelling dots and a two-character call ("Proposal") turns slowly at the bottom-right.
Story: *a person across the desk explains it plainly and acts for you* — the policy is not the point, the client's calm is.
Signature motion: the film **resolves from blur**; the headline rises in (opacity 0→1, `translate3d(2rem,0,0)`→0, 0.6 s, staggered) while its colour settles from orange to white over 1.4 s; the orbit ring keeps turning (`tok(g)`).

### (2) Our transformation (commercial property valuation; same composition, same motion idea, same image type: documentary photograph)
A documentary photograph shot **over the owner's shoulder**: the owner (left foreground, back and shoulder soft, out of focus) holds a **lease plan open** — its pale edge visible in the left fifth; in the mid-ground the **valuer** (woman, 40s, charcoal coat) reads a steel **tape stretched across a glazed shopfront**, turning to say the figure to the owner, face visible and calm. The viewer stands where the owner stands. Story: *a person on your pavement who measures it plainly and signs for it* — the figure is not the point, being able to sign a loan or a sale on it is. Motion idea kept: photo resolves from blur, headline lines rise in with colour settling from the accent to white, the ring turns with two dots and reads "Instruct".

### (3) KV checklist (all implemented and visible on the Home first screen at 1440 × 900; mobile notes in §9)
| # | Reference element | Our equivalent | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Full-bleed film still, client's shoulder in the left foreground, agent face mid-ground | Valuer reading a tape across a glazed shopfront, owner's shoulder and open lease-plan edge in the left foreground | whole first screen, Cover 100svh (min 680, max 960) | blur 14 px → 0, 1.2 s ease-out on load (CSS `kv-resolve`, off under `sp-no-motion` / reduced motion) + `sp-parallax` `--sp-par: 8 %` (5 % < 782 px) | **H01** |
| 2 | White square logo tile 169 px, 19 px inset | White square tile: our mark (square with a tape tick, lead `#4E555C` + one `#EC6C00` tick) over "Kantei" / "VALUERS" | top-left, 19 / 19 px | none | — (SVG mark drawn by us) |
| 3 | White nav slab with the orange pill | White slab: anchors Instructions · Site hour · Report · Fees · People + accent pill "Request an appraisal" | top-right, 19 / 19 px, 64 px tall; fixed | pill hover text-replace 0.3 s ease | — |
| 4 | Two-line bold white slogan, 20 px rule, bilingual sub-line | H1 "A value you can / sign a loan on." 4.25rem 700 white; 20 × 2 px white rule; sub-line "Commercial property valuation, Dublin" + uppercase "LENDER AND OWNER INSTRUCTIONS SINCE 2011" | bottom-left, x 75 px, block bottom 152 px above the screen bottom | lines rise in on load: opacity 0→1, `translateX(28px)`→0, 0.6 s ease, 0.12 s per line; colour `#EC6C00`→`#FFFFFF` 1.4 s (CSS `kv-rise`, not sp-reveal) | — |
| 5 | Orbit ring badge with two dots and a 2-character call | 175 px ring: 1 px outer circle `rgba(255,255,255,.55)`, 150 px inner arc `rgba(255,255,255,.35)` (one quarter transparent), two 6 px dots; centre "Instruct" Schibsted 700 1rem `.12em` white; link → `#request` | bottom-right, right 63 px, bottom 136 px | ring + dots rotate 24 s linear infinite; static under reduced motion / `?sp-static` | — |
| 6 | (plan row) bottom info bar | White info bar (radius 3.75 px top corners), three cells split by 1 px × 24 px `#DADFE2` ticks: **60 min** on site, one site hour · **10 working days** to a signed report · **150 km** from Dublin, no travel charge | bottom edge, x 75–1365, 96 px tall | none | — |
H01 is listed in §7 as a Home image. Nothing else on the first screen: no table, form, search, centred heading or extra labels.

---

## 3. Colour (Booster relations; target similarity 8/10)

| Role | Hex | Booster source (`tok(a)`) | Use | Share of Home |
|---|---|---|---|---|
| Ground | `#FFFFFF` | `#FFFFFF` | page ground, tile, slab, info bar, panels' lower half page | ≈ 50 % |
| Pale ground | `#F4F5F5` | white/`#E7EAEC` family | statement, cases, fees bands; pale heads | ≈ 12 % |
| Ink | `#1D2226` | `#0F1821` (+5 % lightness, hue to grey) | text, black chips | text |
| Main (lead) | `#4E555C` | navy band `#0C2760` → **changed** | people foot, instructions band, request band | ≈ 22 % |
| Lead deep | `#3A4046` | navy deep `#0A1E4C` → changed | right end of the band gradients, footer rule | in bands |
| Hairline | `#DADFE2` | `#E7EAEC` (−5 % lightness for visibility on `#F4F5F5`) | rules, ticks, card borders | ≈ 3 % |
| Accent | `#C05700` | orange `#EC6C00` (−9 % lightness, see note) | the one pill, small labels on white, active-nav dash | < 2 % |
| Accent soft | `#EC6C00` | `#EC6C00` (exact) | non-text marks only: tile tick, nav dash, footer dots, page-top arrow, headline start colour | < 0.5 % |
| Accent light | `#F2A25C` | `#EC6C00` tint for dark grounds | small labels on lead bands | < 0.5 % |
| Muted text | `#5C646B` | derived from ink | captions, dates, details | — |

- Why the main colour changed: the design-plan row assigns the "lead" (namari-iro) palette `#4E555C` (ash family) and asks for a quiet palette; navy was also the main colour of Kataribe Partners. The relation is kept exactly: a dark cool band carrying white type, used for the same three places as Booster's navy (team-photo foot, behind the upper half of the panels, contact band), always as `linear-gradient(90deg, #4E555C 0%, #3A4046 100%)` like Booster's navy gradient.
- Why the accent is −9 % rather than ±5 %: white 0.875rem bold on `#EC6C00` is 3.0 : 1; `#C05700` gives 4.6 : 1 (AA) while keeping the hue. `#EC6C00` itself stays for non-text marks. Not brass, not beige.
- Text contrast: ink on white 15.9 : 1; white on `#4E555C` 7.4 : 1; `#F2A25C` on `#3A4046` 5.3 : 1.
- **First-screen saturation**: Booster measured 17 % (`tok(a)`); row cap 30 %; gate (`scripts/check-first-screen.py`) 15 %; **our target ≤ 8 %**: H01 graded to grey lead (charcoal coat, pale stone shopfront, grey sky; no coloured awning, no blue jacket), the pill (≈ 0.5 %) and the tile tick are the only saturated pixels. If H01 measures over 8 %, regenerate it rather than desaturating the UI.

---

## 4. Type (font_direction **sans**)

Latin: **Schibsted Grotesk** (700, 800; headings, hero, labels, nav, numerals, pills — plays Booster's bold Noto Sans JP headings and Roboto labels) and **Manrope** (400, 500, 700; body, captions — plays Booster's body). CJK: **Noto Sans TC** / **Noto Sans JP** (gothic sans, 700 for display; never Serif). Load all with theme.json `fontFamilies` + `fontFace` (woff2 in `assets/fonts/`), so the editor iframe and the front end show the same fonts; style.css `:lang()` rules → copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it in functions.php. zh-TW / ja subset fonts: use the Hokuto / Hada replacement method (the zh subset script is known broken).

Stacks:
- en / fr / de headings: `"Schibsted Grotesk", "Helvetica Neue", Arial, sans-serif`; body: `"Manrope", "Helvetica Neue", Arial, sans-serif`.
- zh-TW headings: `"Schibsted Grotesk", "Noto Sans TC", "PingFang TC", "Microsoft JhengHei", sans-serif`; body: `"Manrope", "PingFang TC", "Microsoft JhengHei", sans-serif` (no bundled Noto Sans TC and no Japanese font in the body stack — check-themes rule).
- ja headings: `"Schibsted Grotesk", "Noto Sans JP", "Hiragino Sans", "Yu Gothic", sans-serif`; body: `"Manrope", "Hiragino Sans", "Yu Gothic", "Meiryo", sans-serif`.
- CJK display/headings ≈ 0.75 × English (hero 3.2rem ≈ 51 px, Booster's 52.5 px), letter-spacing `.05em` (Booster 2.6 px / 52.5 px); body line-height 1.85; fr/de `hyphens: auto`.

theme.json font sizes:
| Slug | Size / line-height | Use | Source |
|---|---|---|---|
| x-small | 0.75rem (12) / 1.6, 700, `.1em`, uppercase | Latin sub-labels (FOR LENDERS, CONTACT), chips | `tok(b)` sub-label 12–14 px 700 1.2 px |
| small | 0.875rem (14) / 1.75 | nav 700, pill 700, captions, dates | `tok(b)` nav 14 700, pill 13 700 |
| base | 1rem (16) / 2, `.025em` | body | `tok(b)` body 16 / 32 / 0.4 px |
| medium | 1.25rem (20) / 1.6 | lead lines, card titles, row titles | — |
| large | 2.0625rem (33) / 1.45, 700, `.03em` | section H2 | `tok(b)` section H2 29–33 px 700 1.45–1.65 px |
| x-large | 3.5rem (56) / 1.25, 700 | statement, inner page heads, deck minute stamps | `tok(b)` mission lead 55.5 / 69 |
| huge | 4.25rem (68) / 1.25, 700, `.01em` | hero H1 (max) | `tok(b)` hero 52.5 / 65.6 / 700 (Latin set larger to keep the same visual mass as the JP line) |
Max size 4.25rem ≥ 4.25rem ✓. Section heading pattern (Booster): small accent Latin sub-label directly above (gap 8 px) a bold H2, left-aligned.

---

## 5. Home page

### Header (T1)
- Logo tile: `position: absolute; top: 19px; left: 19px`, 169 × 169, `#FFFFFF`, radius 3.75 px, mark 56 px centred at top 34 px, "Kantei" Schibsted 700 1.375rem ink, "VALUERS" 0.6875rem 700 `.16em` `#4E555C`. Scrolls away with the page.
- Slab: `position: fixed; top: 19px; right: 19px; z-index: 50`, height 64 px, `#FFFFFF`, radius 0, padding 0 24 px 0 30 px; anchors Schibsted 700 0.875rem ink, gap 28 px; active anchor marked by a 14 × 2 px `#EC6C00` dash on the slab's top edge above the link (Booster). Pill "Request an appraisal": `#C05700`, white Schibsted 700 0.875rem, height 38 px, padding 0 28 px, radius 999 px, 16 px line document icon before the label; hover `#A84C00` and text-replace (two stacked labels, the second `aria-hidden`, slide 100 % up, 0.3 s ease).
- Anchors: Instructions `#instructions` · Site hour `#site-hour` · Report `#report` · Fees `#fees` · People `#people` · pill → `#request`. Inner pages: same slab, anchors point to `/#…`, pill → `/contact/`. Language switcher sits in the footer.

### First screen composition (1440 × 900)
Cover H01 full-bleed, 100svh (min 680, max 960), `object-position: 55% 40%`, overlay `linear-gradient(to top, rgba(29,34,38,.55) 0%, rgba(29,34,38,0) 48%)` only. The Cover's inner container is a full-height flex column, `justify-content: flex-end`, padding 0 75 px: row 1 = headline block (left) + ring (right) with `align-items: flex-end`, margin-bottom 56 px; row 2 = the white info bar. Tile and slab come from the header. The valuer's face sits at ≈ x 55 %, y 35 %; the owner's shoulder and lease-plan edge at x 0–20 %, y 30–85 %. No element is absolutely positioned over the headline.

### Block order (anchors in brackets)
| # | Block | Purpose | Layout and photos | Copy (en) |
|---|---|---|---|---|
| 1 | `kv-hero` [#top] | KV, T1 | §2 checklist; H01 + tile + slab + headline + ring + info bar | H1 9 words, sub-lines 11 words, info bar 3 × 6 words |
| 2 | `kv-practice` [#practice] | who we are (narrative 1) | `#F4F5F5`, padding 120 px. Left 7/12: sub-label "THE PRACTICE" (`#C05700`) + statement x-large "We read the building / before we read the market." (two lines). Right 5/12, bottom-aligned with the statement: two paragraphs (base) + Booster outline pill "About the practice →" (1 px ink, radius 30, 0.875rem 700, long 24 px arrow) → `/about/`. No photo (Booster's scattered photos are not borrowed) | 2 × 60 words |
| 3 | `kv-people` [#people] | the people (narrative 2) | Full-bleed **H02** (team of seven on a pavement in front of a pale stone commercial building) 1440 × 560 at 21:9-ish, Cover with **`sp-parallax`** `--sp-par: 10 %` (6 % < 782). Directly under it the lead band (gradient §3), padding 72 px 75 px 96 px: left 4/12 sub-label "PEOPLE" `#F2A25C` + H2 white "Nine people, / seven you will meet." + 50 words white; right 8/12 the 7 names in two columns of rule rows (1 px `rgba(255,255,255,.22)` top rule, name Schibsted 700 1.125rem white, role Manrope 0.875rem `rgba(255,255,255,.75)`). No portraits | 50 words + 7 rows |
| 4 | `kv-instructions` [#instructions] | which instructions we accept, **T2** | Lead band continues from #3 (one colour mass, as Booster's navy foot runs into the panels): sub-label "INSTRUCTIONS" + H2 white "Two kinds of instruction." at x 75, padding-top 96. Then the two touching panels (T2 geometry) **H03** "Lender instruction" / **H04** "Owner or seller instruction", each: 36 px line icon (bank columns / shopfront, SVG drawn by us, white 1.5 px), sub-label "FOR LENDERS" / "FOR OWNERS AND SELLERS", H3 2rem 700, 45 words, 44 px circle arrow → `/instructions/`. Band stops at 55 % of the panels; white below. Then on white, padding 96: two columns 6/6 "We value" (5 rule rows) and "We do not value" (4 rule rows, muted), rows 1 px `#DADFE2`, 1.125rem 500 | 2 × 45 + 9 rows + 30 words |
| 5 | `kv-cases` [#cases] | three recent instructions (proof) | `#F4F5F5`, padding 120. Sub-label "RECENT INSTRUCTIONS" + H2 "Three buildings, / three signed figures." Three cards in a row, gap 24: photo 3:2 radius 3.75 (**H16**, **H15**, **H14**), below: black chip (Lender / Owner / Lease) + date `#C05700` 0.8125rem, title Schibsted 700 1.25rem, 40 words, 44 px outline circle arrow (ink) → post. Query Loop posts 1–3 (category Instructions) | 3 × 40 words |
| 6 | `kv-site-hour` [#site-hour] | how a site hour is spent (narrative 3; the **sticky-media card deck**) | White, padding 120. Left-aligned sub-label "THE SITE HOUR" + H2 "Sixty minutes / on your pavement." + 40 words, max-width 640. Then the **deck**: four cards 1290 × 520, `#FFFFFF`, 1 px `#DADFE2`, radius 3.75 px, overflow clip; each `position: sticky; top: calc(104px + n × 20px)` (n = 0…3) at ≥ 1024 px, margin-bottom 48vh except the last, so each card slides over the previous and leaves a 20 px stepped edge. Inside: left 5/12 text, padding 56: minute stamp Schibsted 800 x-large `#4E555C` "00–10" + "min" 1rem, H3 1.5rem ("The plan", "The tape", "The condition", "The documents"), 60 words; right 7/12 photo full card height, cover (**H06**, **H07**, **H08**, **H09**). Plain CSS sticky; parent `overflow: clip`, never `hidden` | 40 + 4 × 60 words |
| 7 | `kv-report` [#report] | what a report covers | White, padding 0 0 120. Left 4/12: sub-label "THE REPORT" + H2 "About twenty pages, / signed by a valuer." + 50 words + **H10** 4:5 radius 3.75. Right 8/12 (855 px at 1440, Booster news width): the 7 report rows (§0), each 100 px min-height, padding 24 0, 1 px `#DADFE2` bottom rule: black chip with the page range ("pp. 1–2"), title Schibsted 700 1.125rem, one line Manrope 0.9375rem `#5C646B` | 50 + 7 × 12 words |
| 8 | `kv-fees` [#fees] | prices | `#F4F5F5`, padding 120. Sub-label "FEES" + H2 "Seven fees, / fixed before the site hour." + 40 words. The fee table (7 rows, §0) at **full container width (1290)**; then the four notes as one line each (0.875rem `#5C646B`) + outline pill "All fees and terms →" → `/fees/`. No reveal on the table | 40 words + table + notes |
| 9 | `kv-request` [#request] | the one CTA, **T3** | Lead band 440 px; strip H11 / H12 / H13 (T3 geometry); right column from x 720: "CONTACT" `#F2A25C` 0.75rem 700, H2 white "Request an appraisal", one line 1rem white "Tell us the address, the purpose and the date you need the figure by. Aoife sends a fixed fee within one working day.", then a row: left "By phone" 0.8125rem + phone icon + "+353 1 000 0611" Schibsted 700 1.75rem white + "[ Mon–Fri 08:30–17:30 ]" 0.8125rem; right the pill 288 × 52 "Request an appraisal" → `/contact/`. Page-top disc: white 72 px circle, half over the band's bottom edge at right 76 px, orange 12 px arrow + "PAGE TOP" 0.625rem 700 | 30 words |
| 10 | footer | links, address | White, padding 72 75 40: left: mark + wordmark, address, office hours, mail; right four link columns (Practice: About · Instructions: Instructions, Site hour, Report, Fees · Updates: News, Rent Notes · Contact) with `#EC6C00` 4 px dots before sub-links (Booster); 1 px `#DADFE2` rule; bottom row "© Kantei Valuers" + Privacy · Terms + language switcher | 20 words |

English Home ≥ 250 words (target ≈ 800) with narrative paragraphs in #2, #3, #6 and #7. CJK Home ≥ 500 characters.

Home photo positions (**15** ≥ 8): H01 · H02 · H03 · H04 · H16 · H15 · H14 · H06 · H07 · H08 · H09 · H10 · H11 · H12 · H13 — 15 distinct photos, no image twice on Home. (H05, H17, H18 are inner-page only.)

### Comparison with the latest home pages
| # | Toso Paints | Kataribe Partners | Yanagi Hygiene | Kaban Luggage | **Kantei Valuers** |
|---|---|---|---|---|---|
| 1 | three-column low-key photo hero + drawing | full-bleed photo, 3-line slogan, docked card row | ceiling-void cover + skyline foot + rail | dark macro hero + peeking strip | **full-bleed photo, white tile + floating slab, bottom-left headline, orbit ring, white info bar** |
| 2 | dark statement with right-half photo | pale intro + 16:9 media | pale intro + marquee | dark trip scene, vertical lines | **pale statement, no photo, outline pill** |
| 3 | ranges strip with round thumbs | 3×3 tick cells | building section with pills | counter story, flush photo | **parallax team photo + lead foot with name rows** |
| 4 | sticky full-bleed chapters | five-day horizontal strip | sticky photo + four minute chapters | parts catalogue | **two touching photo panels half on the lead band** |
| 5 | stock-list catalogue | blue figures band | parallax pause | fitting rows on ink | **three case cards** |
| 6 | offset mixing row | story cards | records ruled list | workshop price list | **sticky split-card deck (four cards stack)** |
| 7 | mirrored order row | retainer table | logbook panel | stories mosaic | **report rows with black page chips** |
| 8 | journal rows | people: wide photo + names | fee table | visit | **fee table** |
| 9 | visit | request card over photo band | request with pentagon | — | **three-photo strip rising above the lead band** |
Why not alike: the first screen is the only one with a white logo **tile**, a floating white **slab** and an orbit ring; no docked card (Kataribe), no strip under the hero (Kaban), no skyline (Yanagi), no columns (Toso). The site hour is told as **stacking split cards** that cover each other, not Yanagi's single sticky photo beside minute chapters and not Toso's full-bleed chapters. No 3×3 cells, cross-section hotspots, flush-left half-photo story rows, figures band, marquee or vertical text. The order also differs: people come third and cases come before the process; fees come after the report, and the close is a photo strip, not a card or a pentagon.

---

## 6. Inner pages (11 pages + post templates; landing rules: reachable from the footer, header keeps the CTA)

Every inner page: T1 head (photo band 560 px at ≥ 1024, 420 px < 1024, `sp-parallax --sp-par: 6 %`, tile + slab, bottom-left heading x-large white + 20 px rule + sub-line) → body → T2 pair where listed → T3 request band, except Thanks / Privacy / Terms. No sidebar.

1. **About** (`page-about`, code `about`): head H17 "Since 2011, / one building at a time." Body: founding story (Orla Brennan, the lender's panel, why one valuer per instruction from site hour to signature) 3 paragraphs in a 7/12 column; the 7 people as rule rows with a 30-word note each; T2 "Lender desk / Owner desk" (H03, H04) naming who answers each; the three recent instructions as one-line links to posts 1–3.
2. **Instructions** (`page-instructions`): head H04 "Two kinds of instruction, / one way to ask." Body: T2 full size (H03, H05; 60 words each, circle arrows → `#lender` / `#owner` anchors further down); two text sections (Lender instruction: loan security, lender format, who pays; Owner or seller instruction: sale, purchase, lease renewal, accounts); "We value / We do not value" lists; documents list; FAQ (`<details>`, 5: can the borrower instruct, do you value homes, how far do you travel, what if the lender has its own format, can we be at the site hour).
3. **Site hour** (`page-site-hour`): head H05 "Sixty minutes, / four parts." Body: the deck of four cards as on Home with 90 words each (H06–H09); T2 "Before the hour / After the hour" (H10, H17); "Who should be there" paragraph; what to have ready (documents list).
4. **Report** (`page-report`): head H10 "About twenty pages, / signed." Body: 7 report rows with 50-word descriptions each; T2 "Lender format / Owner format" (H03, H15); "When the report is late" paragraph (we tell you the new date the day we know).
5. **Fees** (`page-fees`): head H14 "Seven fees, / fixed in writing." Body: the full fee table; notes; T2 "Fees for lenders / Fees for owners" (H03, H04); payment and cancellation (site hour moved free up to 1 working day before).
6. **News** (posts page, code `news`; `home.html`, `archive.html`, `category.html`, `tag.html` — tag template copied from archive with "TAG"): head H16 "Notes from / the practice." Posts as Booster news rows: 855 px column, date `#C05700`, black chip = category, title, thin 24 px arrow at the right, 1 px `#DADFE2` rule, 100 px rows; pagination as outline pills.
7. **Article** (`single.html`, code `article`): pale head with tile + slab; chip + date above the title (large, Schibsted 700), featured image 16:9 radius 3.75 at 1080, text column 720; end: T3 request band.
8. **Rent Notes** (`page-newsletter`, code `newsletter`, the waitlist): head H18 "One page / a quarter." Body: what an issue holds; T2 "What an issue holds / Who it is for" (H17, H15); signup form (name, email, role select lender/owner/agent; plain HTML posting to the theme's thanks fallback; never on a first screen); "First issue: January 2027"; privacy line.
9. **Contact / Request an appraisal** (`page-contact`, code `contact`): head H01 "Tell us the address / and the date." Body: T2 "Instruct as a lender / Instruct as an owner" (H03, H04) with circle arrows = mailto with subject; address, office hours, site-hour hours, phone, mail in 2 columns; what happens next (quote within 1 working day → site hour → report within 10 working days) as three rule rows; T3 band (pill scrolls to the mail lines).
10. **Thanks** (`page-thanks`): pale head "Thank you. / Aoife will write back / within one working day." + office hours; outline pill → Site hour.
11. **Privacy** (`page-privacy`) and **Terms** (`page-terms`, includes the 7 fees, the four notes, "the fee never depends on the figure", "no figure is promised before the site hour"): pale head, text column 720, no photo.

Posts (5; categories **Instructions**, **Notes**; tags lender, owner, lease, retail, office, industrial, documents):
1. "A corner shop and the flat above, valued for a refinance" (Instructions; lender, retail) — H16.
2. "Two floors in Kilkenny, one let and one empty" (Instructions; owner, office) — H15.
3. "A warehouse lease renewal in Naas" (Instructions; lease, industrial) — H14.
4. "Rent Notes: the first issue goes out in January 2027" (Notes) — H18.
5. "What to send before a site hour" (Notes; documents) — H17.
Exactly one posts page (News, empty content, no template); screens: news, newsletter → as rule.

---

## 7. Images (18 photos, Grok, one at a time; read each one)

Imagery: **photo** (Booster: documentary photographs of people at work). STYLE (exact string on every prompt):
`photorealistic high-key documentary photograph, soft overcast daylight, cool grey-lead colour grade with natural warm skin tones, pale stone, concrete, glass and white surfaces, clothing in charcoal, grey, white and muted navy-grey, diverse adults, calm candid working moment, faces natural and relaxed, 35mm lens, gentle shallow depth of field, modern European commercial street or interior, all papers, plans, screens, tape markings and signs blank or out of focus so nothing is readable, no text, no logos, no brand marks, no signage lettering, no Japanese elements`

| ID | Subject / composition | Ratio | Pages (each image at most once per page) | Home |
|---|---|---|---|---|
| H01 | **KV**: over the owner's shoulder (left foreground, soft, man 50s, grey jumper) holding a large lease plan open, its pale edge in the left fifth; mid-ground a valuer (woman 40s, charcoal coat) stretches a steel tape across a glazed empty shopfront and turns toward the owner, speaking, face visible at x 55 % y 35 %; grey pavement, pale stone facade | 16:9 (2000 × 1125) | Home hero; Contact head | ✓ |
| H02 | seven colleagues standing in a loose row on a wide pavement in front of a pale stone commercial building, relaxed, some smiling, mid-distance, people across the middle band | 21:9 | Home people (parallax) | ✓ |
| H03 | valuer (man 30s, navy-grey suit) explaining a bound report to a lending officer across a white desk, laughing slightly, tablet with blank screen, window light | 1:1 | Home panel left; About, Instructions, Report, Fees, Contact T2 | ✓ |
| H04 | valuer (woman 40s) talking with a shop owner (woman 60s) outside a small shop with a plain awning, both smiling, street trees soft | 1:1 | Home panel right; Instructions head; About, Fees, Contact T2 | ✓ |
| H05 | empty open-plan office floor with concrete columns and tall windows, one valuer far back with a laser meter | 16:9 | Site hour head; Instructions T2 right panel | |
| H06 | the plan: owner and valuer bent over an unfolded lease plan on a counter, hands pointing at a boundary (lines blank) | 4:3 | Home deck 1; Site hour deck | ✓ |
| H07 | the tape: valuer holding a laser distance meter against a white wall in an empty unit, red dot not visible, side view | 4:3 | Home deck 2; Site hour deck | ✓ |
| H08 | the condition: valuer looking up at a ceiling and service pipes in a warehouse, notebook in hand | 4:3 | Home deck 3; Site hour deck | ✓ |
| H09 | the documents: owner hands a thick plain folder to the valuer at a shop door, both nodding | 4:3 | Home deck 4; Site hour deck | ✓ |
| H10 | a bound report (blank pages) open on a pale desk, a hand turning a page, pen and reading glasses | 4:5 | Home report; Report head; Site hour T2 | ✓ |
| H11 | instructions desk: Aoife (woman 30s) on a desk phone smiling, monitor blurred | 2:3 (cropped to strip) | Home strip 1; every T3 strip | ✓ |
| H12 | valuer (man 40s) on a mobile phone on a street corner, building behind, smiling | 2:3 | Home strip 2; every T3 strip | ✓ |
| H13 | report editor (man 50s) at a laptop with a headset, notes beside him, smiling | 2:3 | Home strip 3; every T3 strip | ✓ |
| H14 | warehouse exterior with grey loading doors, valuer walking along it with a clipboard | 3:2 | Home case 3; Fees head; post 3 | ✓ |
| H15 | two-storey plain office building on a quiet street, valuer at the entrance with the owner | 3:2 | Home case 2; post 2; Report T2; Rent Notes T2 | ✓ |
| H16 | corner shop with a flat above, valuer on the opposite pavement photographing the facade with a camera | 3:2 | Home case 1; News head; post 1 | ✓ |
| H17 | the practice office: long pale table with rolled plans and two people reading, tall window | 16:9 | About head; Site hour T2; Rent Notes T2; post 5 | |
| H18 | person reading a single printed page with a coffee at a window seat, page blank | 4:3 | Rent Notes head; post 4 | |

18 images (12–18 ✓), 0 cutouts, each ≤ 300 KB and ≤ 2000 px (webp), one readme line each (AI-generated, CC0). Regenerate any image with readable text, a logo, a broken hand or face, a saturated coloured object (blue jacket, red awning) or a different grade.
Per-page check: Home 15 (list in §5) · About H17, H03, H04 · Instructions H04 (head), H03 + H05 (T2 pair) · Site hour H05, H06–H09, H10, H17 · Report H10, H03, H15 · Fees H14, H03, H04 · Contact H01, H03, H04 · Rent Notes H18, H17, H15 · News H16 + thumbnails in rows: none (rows are text) · posts one image each · every T3 strip H11–H13 (never on a page that already shows them).

---

## 8. Scroll effects (sp-scroll; 3 kinds per page max)

| Effect | sp class | Where | Booster source and its motion | Values |
|---|---|---|---|---|
| Parallax (required) | `sp-parallax` on the Cover | Home #1 hero: background H01 moves, foreground headline / ring / info bar in the Cover's inner container (never in the moving layer); Home #3 team photo H02 (no foreground text on it); inner T1 heads | Booster: the key-visual film moves under still type and resolves from blur (`tok(g)`); film motion → photo parallax | hero `--sp-par: 8 %` (≥ 782) / `5 %` (< 782, kept on phones); team photo `10 %` / `6 %`; inner heads `6 %` / `4 %` |
| Fade and rise | `sp-reveal sp-reveal--up`; parents `sp-stagger` | sub-label + H2 + paragraph groups of #2, #3, #4, #5, #6 intro, #7, #8 intro, #9 text column; #5 cards (parent stagger); #7 report rows (parent stagger); #9 photo strip wrapper (Booster's strip rises into the band) | Booster `-fadein`: opacity + transform 0.5 s ease on viewport enter (js-enter), headline chars 0.6 s staggered (`tok(g)`) | `--sp-dist: 24px`, `--sp-dur: .6s`, `ease`; stagger step 0.12 s (built-in) |
| Zoom in | `sp-reveal sp-reveal--zoom` | the two T2 panels (each panel wrapper, not the scrim) on Home #4 and inner T2 pairs | Booster panels settle in on enter after the band | built-in scale 1.06 → 1, 1.6 s |
- Not on: the hero (#1; its own CSS load animations `kv-resolve`, `kv-rise`, `kv-orbit` all stop under `html.sp-no-motion` and `prefers-reduced-motion`), the fee table, forms, legal text, the deck cards (sticky elements are not revealed).
- Hover: pills and links text-replace 0.3 s ease; circle arrows fill white (ink arrow) 0.3 s ease; hover transitions carry `transition-delay: 0s`.

---

## 9. Responsive requirements

- **390 px first screen**: tile 88 × 88 at 12 / 12 (mark 32 px, wordmark 0.875rem); slab collapses to a white 48 × 48 "Menu" button at top 12 right 12 (overlay nav holds the anchors and the pill). Cover min-height `calc(100svh - 0px)` (min 600), H01 `object-position: 62% 40%` so the valuer's face and the plan edge stay. Headline 2.5rem / 1.2 (CJK 2rem), padding 0 24 px 40 px, in normal flow at the bottom of the Cover; rule and sub-lines below. **Ring hidden < 782 px.** Info bar moves **out of the Cover** into normal flow directly under it (three stacked rows, 56 px each, 1 px rules). No vertical text, no absolutely positioned label over any text; auto-gates text-overlap must pass.
- **Panels < 782 px**: stacked, each full width, 1:1 → 4:5, gap 0, band behind the first panel's upper half; text bottom-left 24 px.
- **Deck < 1024 px**: not sticky; cards stack in flow with 24 px gaps, photo on top (3:2), text below.
- **Cases**: 3 → 1 column < 782 px. **Report rows**: chip above title < 782. **People rows**: 2 → 1 column.
- **Request band < 782 px**: strip of three stays a row (each 33.33 %, 2:3) on top, rising 24 px above the band; content below, pill full width.
- **Fee table**: at ≥ 782 px it spans the **full container width** (1290 at 1440, container − 48 px at 800); `table-layout: auto`; the fee column `white-space: nowrap; text-align: right; width: 1%; padding-left: 24px; font-variant-numeric: tabular-nums` — never clipped or wrapped; head row lead `#4E555C` white Schibsted 700 0.875rem; rows 1 px `#DADFE2`, white rows on the `#F4F5F5` band. < 782 px: every table (Fees, Terms) stacks — each row a block, cells as "label: value" lines (labels in visible `<span>` markup, not CSS `content:`), fee on its own line right-aligned.
- `html, body { overflow-x: clip }`; no horizontal scroll at 390, 800 or 1280.

---

## 10. Similarity table (target 8/10 vs Booster; values from `reference-tokens.md`)

| Dimension | Booster | Kantei Valuers |
|---|---|---|
| Ground / ink | white, ink `#0F1821` (tok a) | white + `#F4F5F5`, ink `#1D2226` |
| Dark band | navy `#0C2760 → #0A1E4C`, team foot / behind panels / contact (tok a) | lead `#4E555C → #3A4046`, same three places (plan palette) |
| Accent | `#EC6C00` pills, labels, hover (tok a) | `#C05700` pill + labels (AA), `#EC6C00` marks |
| First-screen saturation | 17 % (tok a) | ≤ 8 %, gate 15 % |
| Body | 16 / 32, 0.4 px, 400 (tok b) | Manrope 16 / 32, `.025em`, 400 |
| Hero headline | 52.5 / 65.6, 700, 2.6 px, two lines, bottom-left (tok b) | 68 / 85, 700, two lines, bottom-left (CJK 51 px, `.05em`) |
| Section H2 | 29–33 px 700, 1.45–1.65 px (tok b) | 33 px 700 `.03em` |
| Sub-label | 12–14 px 700 1.2 px uppercase, accent (tok b) | 12 px 700 `.1em` uppercase, accent |
| Nav / pill | 14 px 700 / 13 px 700 (tok b) | 14 px 700 / 14 px 700 |
| Container | 1260–1365 (tok c) | 1290, 75 px inset |
| Section padding | 112–135 px (tok c) | 120 px |
| Logo tile | 169 px, 19 px inset, radius 3.75 (tok c, d) | 169 px, 19 px, 3.75 |
| Panels | 682 × 675, no gap, radius 3.75 outer (tok c, d) | 645 / 720 × 675, no gap, 3.75 outer-left |
| News rows | 855 wide, 100 tall, 24 padding, 1 px rule, black chip (tok c, f) | report rows 855, 100, 24, 1 px, black chip |
| Pills | full radius 52 px; outline 30 px 1 px (tok d) | 999 px; outline 30 px 1 px |
| Shadows | none (tok d) | none |
| Hero image | full-bleed 16:9 film still (tok e) | full-bleed 16:9 photo H01 |
| Panel images | ≈ 1:1 with dark scrim (tok e) | 1:1 H03 / H04, scrim .78 → .12 |
| Strip | 3 × ≈ 3:4, flush left, over band top ≈ 40 px (tok e) | 3 × 192 × 424, flush left, −40 px |
| Decoration | 20 px rule, 175 px orbit ring, 44 px circle arrow, black chip, page-top disc (tok f) | same five, same sizes |
| Motion | blur-to-sharp; chars rise 0.6 s + colour 1.4 s; fade-in 0.5 s on enter; hover replace 0.3 s (tok g) | blur 1.2 s; lines rise 0.6 s + colour 1.4 s; reveal-up 0.6 s ease; hover replace 0.3 s; parallax 8 / 10 % |
| Not borrowed | ghost typography, orange mission band, scattered photos, film, copy, logo | — |

---

## 11. Home acceptance checklist

1. First screen 1440 × 900: full-bleed H01 (valuer reading a tape on a shopfront, owner's shoulder and lease-plan edge in the left foreground); white 169 px tile at 19 / 19; white floating slab top-right with 5 anchors and the accent pill; two-line headline bottom-left at x 75 (4.25rem), 20 px rule, two sub-lines; 175 px orbit ring "Instruct" bottom-right; white three-cell info bar (60 min · 10 working days · 150 km). No table / form / search / centred heading. `check-first-screen.py` ≤ 15 % (target ≤ 8 %).
2. 390 × 844 first screen: tile 88 px, Menu button, headline in flow, ring hidden, info bar under the Cover; auto-gates text-overlap passes.
3. T2: two touching 1:1 photo panels H03 / H04, right panel to the window edge, lead band behind the upper 55 %, sub-label + heading + text + 44 px circle arrow bottom-left; "We value / We do not value" lists under them.
4. Deck: four split cards (minute stamps 00–10 / 10–35 / 35–50 / 50–60, H06–H09) that pin and stack with 20 px steps at ≥ 1024.
5. Report: 7 rows with black page chips at 855 px beside H10. Cases: 3 cards H16, H15, H14 with black chips.
6. Fee table: 7 rows with the exact fees in §0, full container width at 800 and 1280, fee column nowrap and right-aligned, stacked on phones.
7. T3: lead band with the H11–H13 strip flush to the window's left edge rising 40 px, phone +353 1 000 0611 at 1.75rem, hours, accent pill, page-top disc.
8. People: H02 parallax + 7 named rule rows on the lead band (no portrait grid).
9. 15 photo positions, none repeated; all photos same STYLE, no readable text / logos / broken hands.
10. `check-parallax.mjs`: hero and team photo move ≥ 6 px on desktop and mobile, 0 with reduced motion; ≥ 3 reveals hidden before entry and at rest after; nothing transparent at the bottom.
11. Fonts: Schibsted Grotesk + Manrope (+ Noto Sans TC / JP for zh-TW / ja headings) identical in editor and front end; max 4.25rem.
12. Colours: white / `#F4F5F5` grounds, ink `#1D2226`, lead `#4E555C` bands, accent `#C05700` only on the pill and small labels; no beige, no large saturated field.
13. Copy: ≥ 250 English words, narrative paragraphs in #2, #3, #6, #7; all facts and numbers match §0 exactly; one CTA wording; no promised figure, no real lenders, bodies or brands.
